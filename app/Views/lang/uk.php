<?php
$GLOBALS["lang"][' Default, currently '] = ' За замовчуванням, в даний час ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Якщо щось не працює, як очікується, ваш перший, щоб зробити це перевірити журнали.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' тепер підтримується мовним файлом. Щоб змінити користувача для використання цієї мови, натисніть кнопку ';

$GLOBALS["lang"][' seconds'] = ' час';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', але не потрібно пам\'ятати окремий набір облікових даних логотипів.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', з яких ми поставляємо понад тридцять за замовчуванням. Професійні користувачі не можуть змінювати ці, але користувач Enterprise має повну можливість налаштування - включаючи створення власної.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', ви <i>обов\'язково</i> використовувати сервер Open-AudIT для використання Entra для Auth. Будь ласка, налаштуйте Apache для використання <strong>Веб-сайт</strong> перед налаштуванням Entra для auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = 'й Щоб включити це, відредагуйте пункт конфігурації для ';

$GLOBALS["lang"]['10 Minutes'] = '10 хвилин';

$GLOBALS["lang"]['15 Minutes'] = '15 хвилин';

$GLOBALS["lang"]['30 Minutes'] = '30 хвилин';

$GLOBALS["lang"]['5 Minutes'] = '5 хвилин';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 контроль за групами в організаційні, фізичні та технологічні категорії';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>ЗАМОВИТИ</strong> - Ви отримуєте доступ до цієї URL з локального сервера Open-AudIT. Завантажувальний скрипт не зможе подати при запуску на будь-якій іншій машині. Якщо вам необхідно перевірити інші машини, будь ласка, завантажте скрипт з будь-якої віддаленої машини, не використовуючи браузер на сервері Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ЗАМОВИТИ</strong> - Ви повинні мати робочі SSH або SSH Основні показники для виконання бендиктів на цільовому пристрої.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Бази</strong> - Передавання документа, що містить базове визначення та індивідуальні дослідження політики.<br/> <br/> <strong>Політика</strong> - Індивідуальні тести, що містяться в Базиліні. Кожен тест для конкретного виробу. Приклад буде тестування для версії SSH 1.2.3.<br/> <br/> <strong>Детальніше</strong> - Базиліни можуть порівняти порти netstat, користувачів і програмного забезпечення.<br/> <br/> <strong>Програмне забезпечення</strong> - Для порівняння програмного забезпечення ми перевіряємо назву та версію. Ми можемо самі зателефонувати одержувачу і узгодити зручний час і місце вручення квітів, а якщо необхідно, то збережемо сюрприз. З цієї причини базові лінії з використанням програмних політик не працюватимуть при запуску пристрою, який не був перевірений 1.10 (не менше). Політика програмного забезпечення може протестувати проти версії "наскільки", "наростити", "наслідок" або "наслідок або більше, ніж".<br/> <br/> <strong>Порти Netstat</strong> - Порти Netstat використовують поєднання номеру порту, протоколу та програми. Якщо вся політика проходить.<br/> <br/> <strong>Користувачі</strong> - Користувачі працюють аналогічно портам Netstat. Якщо користувач існує з відповідним Імям, статусом та деталями пароля (змінні, завершені, необхідні) після проходження політики.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Місце розташування - фізична адреса, яка може мати пристрої, пов\'язані з ним.<br/> <br/>На карті Open-AudIT Enterprise ви можете призначити координати (лат/довго) і якщо є пристрої, призначені для розміщення, місце розташування з\'явиться на карті Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Мережа виходить з записів та атрибутів пристрою.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Резюме буде відображати список елементів, що засвідчуються різними значеннями атрибуту, зазначеними атрибутами <code>table</code> і <code>column</code> атрибути.<br/> <br/>Коли виконується резюме, результат буде списком відмінних значень для цього <code>table</code> і <code>column</code>й На значеннях, які дозволяють користувачеві бачити відповідні пристрої.<br/> <br/>Якщо атрибут атрибут атрибуту <code>extra_columns</code> заселений, отримана сторінка міститиме ці стовпчики, крім стандартних стовпчиків пристрою.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Агенти дозволяють проводити перевірку ПК без відкриття. Встановити агента і він перевірить сервер кожного дня і перевірить себе. Неважливо, якщо ваші комп\'ютери ламаються, дані перевірок все ще з\'являються в Open-AudIT.</p><p>При тестуванні <strong>якщо</strong> агент повинен виконувати дії, всі три тести повинні проходити (якщо тест встановлений). <strong>Далі</strong> беруться дії.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Застосунки визначаються вами, користувачем і зберігаються для Open-AudIT для використання та пов\'язаних з пристроями.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Атрибути зберігаються для Open-AudIT для використання для окремих полів.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Ми можемо визначити, які машини налаштовані таким же чином, є основною частиною адміністрування та аудиту систем, а зараз звітність про те, що буде виконано просто і автоматизовано. Після того, як ви визначаєте свій базовий рядок, він автоматично буде працювати над набором пристроїв на заздалегідь визначеному графіку. Видача даних виконаних базових систем буде доступна для перегляду веб, імпортування в систему третьої сторони або навіть як друкований звіт.<br/> <br/> Базиліни дозволяють об\'єднати дані аудиту з набором атрибутів, які ви раніше визначені (чотирьох базових) для визначення відповідності пристроїв.<br/> <br/> Наприклад, ви можете створити базову лінію з пристрою, що працює Centos 6, що діє як один з ваших серверів кешу в кластері. Ви знаєте, що цей конкретний сервер налаштований просто спосіб, який ви хочете, але ви не впевнені, якщо інші сервери в кластері налаштовані точно так само. Базові лінії дозволяють визначити це.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Кластери зберігаються в Open-AudIT для асоціаційних пристроїв для кращого запису, управління та оцінки ліцензійних витрат.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Компоненти є загальним терміном, який використовується для таблиць, які зберігають атрибути для пристрою. Ці таблиці: access_point, arp, біоs, сертифікат, cli_config, диск, dns, файл, ip, ліцензія, журнал, пам\'ять, модуль, монітор, материнська плата, мережа, nmap, оптичний, pagefile, розділ, політика, друк_queue, процесор, радіо, маршрут, san, scsi, сервер, сервер, сервер_item, сервіс, частка, програмне забезпечення, програмне забезпечення, програмне забезпечення, програмне забезпечення, програмне забезпечення, завдання, usb, користувач_група, змінна, відео, vm, вікна.</p><p> Крім того, ми класуємо такі таблиці, як пристрій, пов\'язаний: додаток, вкладення, кластер, облікове значення, зображення.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Зашифровані дані при збереженні бази даних.<br/> <br/>Коли компанія Discovery працює, пристрій має свої облікові дані, отримані і протестовані для підключення спочатку (з <code>credential</code> стіл. Якщо це не вдалося, то облікові дані, пов\'язані з даним органом <code>credentials.org_id</code> також тестується на пристрій. Робочі критерії зберігаються на рівні індивідуального пристрою в таблиці (примітки - не "s" в назві таблиці).<br/> <br/>Ключі SSH протестовані до SSH Імя користувача / пароль. При тестуванні SSH, облікові дані також будуть позначені як робота з sudo або корінь.<br/> <br/>Для зручності використання паролі Windows не повинні містити одну або подвійну цитату. Це дистанційне обмеження WMI, не обмеження Open-AudIT.<br/> <br/></p>';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Українська Windows настільні системи мають мережеві обмеження, які можуть вплинути на продуктивність Open-AudIT. TCP/IP стека обмежує кількість одночасних неповних спроб підключення TCP. Після того, як досягнуто обмеження, наступні спроби з\'єднання кладуть в чергу і будуть вирішені при фіксованій швидкості (10 на другий). Якщо занадто багато введіть чергу, вони можуть бути впущені. І нарешті, Apache перезавантажить ОС. З цієї причини установка Open-AudIT на операційній системі Windows не підтримується.<br/><br/>Немає нічого неправильного з кодом Open-AudIT, а не може зробити щось для вирішення цього питання на клієнтських машинах Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>На дні цієї пов\'язаної сторінки <a href="https://nmap.org/book/man-performance.html" target="_blank">JavaScript licenses API Веб-сайт Go1.13.8</a>й З цієї сторінки:<br/> <br/><em>Якщо ви на гідному широкосмуговому або ефірному підключенні, рекомендуємо завжди використовувати -T4 (Aggressive). Деякі люди люблять -T5 (Insane), хоча він занадто агресивний для мого смаку. Люди іноді вказують -T2 (Polite) тому що вони думають, що це менше, ймовірно, щоб збити господарів або тому, що вони вважають себе, щоб бути в цілому. Вони часто не розуміють, як повільно -T2 дійсно є. Їх сканування може зайняти десять разів довше, ніж сканування за замовчуванням. Машинні аварійні несправності та проблеми пропускної здатності рідко зустрічаються з опціями за замовчуванням -T3 (Normal) і так що я зазвичай рекомендую, що для обережних сканерів. Визначення версії є набагато ефективніше, ніж грати з значеннями термінів при зниженні цих проблем.</em><footer>Гори <i>Фьодор</i> Ліон</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT може бути налаштований для використання різних методів для ідентифікації користувача та крім того, для створення облікового запису користувача, використовуючи призначені ролі та orgs на основі групового членства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Відкритий IT може отримувати дані про файл або каталог файлів та відстежувати ці файли для змін у базі даних Open-AudIT.<br/> <br/>Ця функція працює з коробки для серверів Linux Open-AudIT, але потребує зміни в Імя облікового запису на сервері Windows Open-AudIT.<br/> <br/>Підтримка клієнтів Windows і Linux.<br/> <br/></p>';

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

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Ліцензійна кінцева точка дозволяє відстежувати кількість ліцензій, що знаходяться на ваших пристроях.<br/> <br/>Щоб створити запис для відстеження ваших ліцензій <em>обов\'язково</em> надати Імя, організацію, кількість придбаних ліцензій та Імя програмного забезпечення. На поле <code>match_string</code> Ви повинні надати Імя програмного забезпечення, яке ви хочете відстежити, ви можете використовувати знак відсотка (%) як дикийкарт в матчі_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Мережа повинна бути в форматі 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Основні і додаткові вторинні елементи повинні бути повністю кваліфікованими - тобто, пристрої. тип або програмне забезпечення. Імя.<br/> <br/></p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>ЗАМОВИТИ</strong> - Ви отримуєте доступ до цієї URL з локального сервера Open-AudIT. Завантажувальний скрипт не зможе подати при запуску на будь-якій іншій машині. Якщо вам необхідно перевірити інші машини, будь ласка, завантажте скрипт з будь-якої віддаленої машини, не використовуючи браузер на сервері Open-AudIT.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Продукт CVE, який не містить фільтра для визначення ураженого елемента (s).';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN може бути підключений до WAN за допомогою маршрутизатора.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Митрополитська мережа (MAN) - це велика комп\'ютерна мережа, яка зазвичай пропускає місто або великий кампус.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'А.А. Відкривання насіння використовує початковий IP, щоб отримати IP-адреси будь-яких інших пристроїв, які він знає про, додає ці IP-адреси до списку і сканує їх - знову запитуючи будь-які IP-адреси, які додаткові пристрої знають про. Ринсе і повторення. Чи варто знати, якщо він вже сканував даний IP у його виконанні і відхиляє будь-який вже сканований (або навіть на списку, щоб бути скановані).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Надані IP-адреси.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'URL, надана агенту, який потім завантажить файл і зберігає його на локальному диску.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL на файл для завантаження.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Мережа задньої мережі є частиною інфраструктури комп\'ютерної мережі, яка забезпечує шлях обміну інформацією між різними локальними мережами або субмережами. Задню частину можна обв\'язувати між різними мережами в одному будинку, в різних будівлях або по всій території.<br/><br/>Наприклад, велика компанія може реалізувати резервну мережу для з\'єднання відділів, які розташовані по всьому світу. Устаткування, яке зв’язує між відділальними мережами, являє собою мережу задньої частини. При проектуванні мережі задньої, мережної працездатності та мережевої застою є критичні чинники, які потрібно враховувати. Нормально, пропускна спроможність бекону більше, ніж з окремих мереж, підключених до неї.<br/><br/>Ще одним прикладом задньої мережі є Інтернет-засоби, який є набором широкої локальної мережі (WANs) і основних маршрутизаторів, які об\'єднують всі мережі, підключені до Інтернету.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Розраховано поле, що відображає кількість разів це програмне забезпечення було знайдено на комп\'ютерах у вибраному Org (і його нащадки, якщо налаштовано).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Мережа кампусів (CAN) складається з взаємозв\'язку локальних мереж в межах обмеженої географічної зони. Мережева техніка (сувки, маршрутизатори) і трансмісійні засоби (оптичні волокна, мідні заводи, каблінг Cat5 і т.д.) практично повністю належать камузі орендарям / власнику (підприємство, університет, уряд і т.д.).<br/><br/>Наприклад, мережа кампусів університету, ймовірно, пов\'язана з різними будівлями кампусів для підключення академічних коледжів або кафедр, бібліотеки та студентських залів відпочинку.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Замкнений порт доступний (відповідає та відповідає на Nmap, що містить в собі пакети Nmap, але на ньому немає програми. Вони можуть бути корисними, щоб показати, що хост знаходиться на IP-адресі (хоче відкриття, або сканування ping), і як частина виявлення ОС. Замкнені порти, можливо, варто сканувати пізніше, якщо деякі відкриті. Адміністратори можуть знадобитися розглянути блокування таких портів з брандмауером. Далі вони з\'являться в фільтрованому стані, обговорювалися далі.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Колектор є або в колекціонерному або стаціонарному режимі.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Відокремлений список відповідних CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Відокремлений список значень, один з яких можна вибрати.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Команда для запуску. Коли агент є Windows, це команда працює від агента Powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Насадка складається з трьох стовпчиків і двох рядів того, що ми називаємо <i>Віджети</i>й Віджет дуже схожий на резюме, тільки ми приймаємо резюме поняття трохи далі. Віджети створюються в простому моді за допомогою пари крапельних коробок - або ви можете вибрати для використання власних SQL для повної індивідуальності.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Відкрито фільтрований порт (і буде викликати виявлення пристрою).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Мережа глобальних зон (GAN) - це мережа, яка використовується для підтримки мобільних телефонів через довільну кількість бездротових мереж, супутникових зон покриття тощо. Ключовий виклик у мобільних комунікаціях відправляється з повідомленнями користувачів з однієї локальної зони покриття до наступного. У проекті IEEE 802 це передбачає успішність бездротових локальних мереж.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Мережа будинків (HAN) - це житлова LAN, яка використовується для зв\'язку між цифровими пристроями, як правило, розгортається в будинку, як правило, невелика кількість особистих комп\'ютерів і аксесуарів, таких як принтери і мобільні обчислювальні пристрої. Важлива функція - обмін доступом до Інтернету, часто широкосмуговий сервіс через кабельне телебачення або цифровий абонентський ряд (DSL) провайдера.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Список користувальницьких портів TCP для сканування (22 - SSH, 135 - WMI, 62078 - iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Список користувальницьких портів UDP для сканування (161 - SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'локальна мережа (LAN) - це мережа, яка з\'єднує комп\'ютери та пристрої в обмеженій географічній області, такі як будинок, школа, офісна будівля або тісно організована група будівель. Кожен комп\'ютер або пристрій в мережі є вершиною. Провідні локальні мережі на основі технології Ethernet. Нові стандарти, такі як ITU-T G.hn, також забезпечують спосіб створення дроту LAN, використовуючи існуючі проводки, такі як коаксіальні кабелі, телефонні лінії та лінії живлення.<br/><br/>Відхилення характеристик LAN, на відміну від широкої мережевої мережі (WAN), включають в себе більш високі показники передачі даних, обмежений географічний діапазон, а також відсутність регуляції на орендованих лініях для забезпечення підключення. Поточні технології Ethernet або інші технології IEEE 802.3LAN працюють на курсах передачі даних до 100 Гбіт/с, стандартизовані за допомогою IEEE в 2010 році. В даний час 400 Гбіт/с Розроблено Ethernet.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Місце розташування - фізична адреса, яка може мати пристрої, пов\'язані з ним. Ви можете призначити координати і якщо є пристрої, призначені для розміщення, місце розташування з\'явиться на мапі, коли у вас є ліцензія на підприємстві Open-AudIT.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Назва розташування допоможе вам знайти ці пристрої в майбутньому.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'До інших правил наноситься нижній номер.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'До інших правил наноситься нижній номер. Вага за замовчуванням 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Новий користувач увійшов до складу Open-AudIT і був автентифікований і уповноважений LDAP sever. Цей користувач був створений в Open-AudIT і ввійшов в систему. Успіх.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Пакет є частиною встановленого м\'якоті. Пакет має тип - антивірус, схвалений, резервний копіювання, заборонений, хмара, брандмауер, ігнорується, ліцензія або інші.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Пароль (зберігати як хеш), що дозволяє логотипувати при використанні автентифікації програми.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Людина має обліковий запис у додатку Open-AudIT. Список пов\'язаних ролей та організацій. Роль користувача визначає, що вони можуть зробити. Організатори можуть діяти на рівні WHICH.<br/><br/>Коли користувач запитує про виконання операції (відтворити, читати, оновити, видаляти) на пункті збору, ролі консультуються з тим, щоб побачити, чи вони допускаються до виконання цієї дії, то оргми консультуються з метою визначення, якщо пункт збору належить до org, користувач має дозвіл діяти.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Мережа персональної зони (ПАН) - це комп\'ютерна мережа, яка використовується для зв\'язку між комп\'ютером та різними технологічними пристроями, що знаходяться поблизу однієї особи. Деякі приклади пристроїв, які використовуються в PAN, є персональними комп\'ютерами, принтерами, факсовими машинами, телефонами, PDAs, сканерами та навіть відеоігри консолі. PAN може включати дротові та бездротові пристрої. Відстань від PAN зазвичай поширюється на 10 метрів. Дротовий ПАН, як правило, побудований з підключенням USB і FireWire, в той час як технології, такі як Bluetooth і інфрачервоне спілкування, як правило, утворюють бездротовий PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Квадроцикл є обов\'язковою заявою SQL. Ця заява ведеться до бази даних з автоматичним додаванням ліміту, відфільтровано для використання тільки тих, хто вимагає предметів і тільки тих елементів, які користувач має дозвіл на перегляд. У меню -> Керування -> Queries -> Створення запитів. Запити містять org_id і мають право обмежуватися відповідними користувачами. Користувач повинен мати роль org_admin або репортера (s) для створення, оновлення або видалення запиту. Всі користувачі можуть виконувати запит. У запиту є атрибут імен, який використовується для пункту меню, а також атрибут категорії меню. Це говорить про Open-Audit GUI, який підмену розмістити запит. У меню є також відображення меню, яке необхідно встановити <i>й</i> щоб увімкнути запит у GUI (<i>п</i> для запобігання з\'являтися на всіх ділянках. За допомогою його <code>id</code>, незалежно від значення меню.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Стійка - це колекція пристроїв, які призначаються положенням і висотою в межах стійки. Пристрій може додатково мати картину, пов\'язане з ним. Стійка поміщається в ряд. Ми створили дуже гранульовану систему для позиціонування стелажів, яка наступним чином. На рівні вершини (як завжди) є Організація (Організація). Org може мати кілька місць (як завжди був випадок). З додаванням Racks, розташування тепер може містити одне або більше будівель. Будинок може містити один або кілька поверхів. Підлога може містити одне або більше номерів. Номер може містити один або більше рядів. Цей звук, як багато роботи, але за замовчуванням створюються для вас. Створення нового місця та субкомпонентів буде автоматично створений для вас. Якщо вам потрібно більше товарів (будівельників, кімнат і т.д.) ви можете додати їх як вам подобається. Стійка також може бути частиною <i>п</i> стелажі. Атрибут под працює як тег, а не сувора ієрархічна модель спадкування як за будівлями, підлогами тощо.<br/><br/>Racks є доступним для клієнтів, які спеціалізуються на відкритому повітрі.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Відправлення доменного або адресного простору, в якому адреси IP і MAC є унікальними.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Завантажити файл cron для Linux нижче. Для цього необхідно розмістити в';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Зона безпеки є адміністративним доменом або політикою в межах мережевого домену.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Відкриття насіння - це ще один тип відкриття, де ви надаєте IP єдиного <i>насіння</i> пристрій. Цей пристрій перевіряється, і будь-які IP-адреси, які він знає, потім додаються до списку IP-адрес, які будуть перевірятися. Після того, як ці пристрої перевіряють і будь-які IP-адреси, які вони знають також додаються до списку IP-адрес для перевірки. Цей процес продовжується в межах параметрів, налаштованих користувачем.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Короткий опис входу в журнал.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Мережа сховищ (SAN) - це спеціальна мережа, яка забезпечує доступ до консолідованої, зберігання даних блоків. SANs є перш за все, що використовується для створення пристроїв для зберігання, таких як дискові масиви, стрічкові бібліотеки та оптичні коробки, доступні для серверів, щоб пристрої з\'являються як локально підключені пристрої до операційної системи. SAN, як правило, має власну мережу пристроїв зберігання, які, як правило, не доступні через локальну мережу інших пристроїв. Вартість та складність SANS скоротилися на початку 2000-х рр. до рівнях, що дозволяють ширше прийняття через як підприємство, так і для середніх бізнес-середовища.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'рядок, яка відповідає рядку <code>software.name</code> атрибут. Ви можете використовувати стандартний SQL Wildcard відсотків (%), щоб відповідати одному або більше символів.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Структура системи управління конфіденційною інформацією';

$GLOBALS["lang"]['A timestamp.'] = 'Часом';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Користувач має первинну Org, а також список організацій, які вони можуть отримати доступ. Користувач об\'єднує це з переліком призначених ролей, які визначають які дії, які вони можуть приймати на предметах, призначених органам, які мають доступ. Поєднання користувачів <i>оргс</i> і <i>рольи</i> Визначте, що вони можуть і не можуть робити в межах Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Користувач має список асоційованих організацій (органів). Кожна оргія користувача дозволить їм діяти на предметах, що знаходяться на їх ролі.<br/><br/>Всі оргми, крім того, що за замовчуванням org є батьком. Думка орг. діаграми. Якщо користувач має дозвіл на Org, вони також мають дозвіл на будь-які нащадки цього Org.<br/><br/>Користувачі також допускають дозвіл на дитину, щоб побачити елементи з батьківських агенцій для певних колекцій. Ті: Dashboards, Discover_scan_options, поля, файли, групи, запити, звіти, ролі, правила, сценарії, підсумки, віджети.<br/><br/>Не забувайте, що ви повинні мати гранульований контроль над тим, що користувачі можуть бачити і зробити використання ролі на підприємстві.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Користувач має список асоційованих організацій (органів). Кожна оргія користувача дозволить їм діяти на предметах, що знаходяться на їх ролі.<br/><br/>Всі оргми, крім того, що за замовчуванням org є батьком. Думка орг. діаграми. Якщо користувач має дозвіл на Org, вони також мають дозвіл на будь-які нащадки цього Org.<br/><br/>Ми також можемо дозволити користувачу дозвіл на дитину, щоб побачити елементи з батьківських оргій для певних колекцій. Ті: Dashboards, Discover_scan_options, поля, файли, групи, запити, ролі, правила, сценарії, підсумки, віджети.<br/><br/>Не забувайте про те, що у вас є гранульований контроль над тим, що користувачі можуть бачити і робити використання';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Віртуальна приватна мережа (VPN) - це мережева мережа, в якій частина посилань між вузлами здійснюється відкритими з\'єднаннями або віртуальними ланцюгами в певній більшій мережі (наприклад, інтернет) замість фізичних проводів. Про протоколи прошарку даних віртуальної мережі, які говорять про те, щоб бути тунельовані через більшу мережу, коли це справа. Один загальний додаток є захищеним зв\'язком через публічний Інтернет, але VPN не має чітких функцій безпеки, таких як автентифікація або шифрування контенту. VPN-сервіси, наприклад, можуть бути використані для відокремлення трафіку різних спільнот користувачів, що знаходяться в базовій мережі з високими функціями безпеки.<br/><br/>VPN може мати найкращу продуктивність, або може мати певну угоду про рівень сервісу (SLA) між VPN-провайдером та VPN-сервісом. Мережа VPN налічує більше комплексів, ніж точка-то-точ.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Уразливість, що впливає на наявність, може дозволити атакуючих агентів для порушення послуг, аварійних систем, або викликати відмово-сервіс (DoS) (не, низький, високий).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Уразливість, що впливає на конфіденційність, може дозволити атакуючих, щоб читати конфіденційні дані, такі як особиста інформація, облікові дані або комерційні дані (не, низький, високий).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Уразливість, що впливає на цілісність, може дозволити атакувальникам змінювати дані, вводити шкідливий код або змінити налаштування системи (не, низький, високий).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Уразливість може бути відредаговано і більш конкретні імена пакетів, надані де дані збагачення недостатньо або сформований SQL не зовсім коректно.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'У статті Open-AudIT можна розглядати як по суті, запит на вашу базу даних для визначення потенційного впливу на звіт CVE. Уразливість складається з звіту CVE, а також збагачувальних даних від FirstWave. Ці два елементи поєднуються для отримання відповідного запиту, який автоматично завантажується з FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Широка мережа (WAN) - це комп\'ютерна мережа, яка охоплює велику географічну площу, таку як місто, країна, або простягається навіть міжконтинентальні відстані. WAN використовує канал зв\'язку, який поєднує в собі багато типів медіа, таких як телефонні лінії, кабелі та повітряні хвилі. Компанія WAN часто надає послуги з перевезення, що надаються загальними перевізниками, такими як телефонні компанії. WAN технології, як правило, функціонують на нижніх трьох шарах моделі посилання OSI: фізичний шар, шар посилання даних і шар мережі.';

$GLOBALS["lang"]['AD Group'] = 'Група компаній';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN та ін.';

$GLOBALS["lang"]['AIX'] = 'Аікс';

$GLOBALS["lang"]['ALL IPs'] = 'Всі IP-адреси';

$GLOBALS["lang"]['API / Web Access'] = 'API / Веб-доступ';

$GLOBALS["lang"]['API Documentation'] = 'Документація API';

$GLOBALS["lang"]['API Key required.'] = 'Необхідний ключ API.';

$GLOBALS["lang"]['API Result'] = 'Пошук API';

$GLOBALS["lang"]['About'] = 'Про нас';

$GLOBALS["lang"]['Above are the only required items.'] = 'Ви отримуєте тільки потрібні предмети.';

$GLOBALS["lang"]['Accept'] = 'Прийняти';

$GLOBALS["lang"]['Access Model'] = 'Модель доступу';

$GLOBALS["lang"]['access_point'] = 'Точка доступу';

$GLOBALS["lang"]['Access Point'] = 'Точка доступу';

$GLOBALS["lang"]['access_token'] = 'Доступ Token';

$GLOBALS["lang"]['Access Token'] = 'Доступ Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Доступ до частки адміністратора та RPC використовує протокол SMB2.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory та OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Додати ваші облікові дані';

$GLOBALS["lang"]['Add image'] = 'Додати зображення';

$GLOBALS["lang"]['additional_items'] = 'Додаткові товари';

$GLOBALS["lang"]['Additional Items'] = 'Додаткові товари';

$GLOBALS["lang"]['address'] = 'Контакти';

$GLOBALS["lang"]['Address'] = 'Контакти';

$GLOBALS["lang"]['Address any nonconformities'] = 'Адреса будь-яких невідповідностей';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Знаходи та корегувальні дії';

$GLOBALS["lang"]['Admin'] = 'Головна';

$GLOBALS["lang"]['admin_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Admin Status'] = 'Статус на сервери';

$GLOBALS["lang"]['advanced'] = 'Головна';

$GLOBALS["lang"]['Advanced'] = 'Головна';

$GLOBALS["lang"]['Afghanistan'] = 'Українська';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Після створення інтеграції, коли ви переглядаєте деталі інтеграції, ви помітите поле «Дебюг». Це не передбачено за замовчуванням. Змінює його до так, що забезпечує додатковий залог, коли виконується інтеграція. Не слід залишити ні так. Це тому, що вихід з абвугів буде містити все, що отримується з зовнішніх систем - включаючи елементи, такі як WMI і SNMP. Для того, щоб побачити, чи можна визначити причину.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Після завершення вище, видаліть агента.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Агент? Про компанію Речі?';

$GLOBALS["lang"]['agents'] = 'Агенти';

$GLOBALS["lang"]['Agents'] = 'Агенти';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Записи агентів можуть бути створені, щоб вказати тривалість, мережу та операційну систему. Якщо всі тести, то сервер запитує агента для виконання дій. Якщо будь-який тест не встановлено, він виключається з <i>всі повинні відповідати</i> вимога.<br/><br/>Ви можете створити кілька агентів і мати сервер перевірити один або всі записи агента. Ви можете вказати один агент, який говорить <i>Якщо агент IP знаходиться в цьому підмережі, встановіть розташування_id пристрою</i>й<br/><br/>Ще один приклад може бути не запущений аудит на всіх, досить завантажити скрипт і запустити його. Якщо агент встановлений з правами адміністратора, ви можете керувати машинами без відкриття <strong>будь-який</strong> порти від нього до світу.<p>Увімкнення розширених агентів означає, що агент може бути інструктований для завантаження будь-якого файлу і виконання будь-якої команди. <strong>ВАЖЛИВО</strong>Довідник Це стосується ризиків безпеки. Ця конфігурація буде <strong>тільки</strong> функція при запуску Open-AudIT за допомогою HTTPS і дійсного (сертифікованого органу) сертифікату для </p>';

$GLOBALS["lang"]['Aggressive'] = 'Агрегати';

$GLOBALS["lang"]['Aland Islands'] = 'Аландські острови';

$GLOBALS["lang"]['Albania'] = 'Албанія';

$GLOBALS["lang"]['Albanian'] = 'Албанія';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Всі URL-адреси колекції використовують формат';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Всі таблиці пристроїв містять декілька важливих стовпців.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Всі пристрої з типом, як комп\'ютер.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Всі пристрої з типом комп\'ютера або маршрутизатора.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Всі пристрої без типу перемикача і принтера.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Всі пристрої без типу перемикача і принтера. По суті, як і вище запиту.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Всі варіанти регулярного відкриття також доступні для використання в магазині Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Всі завдання можуть бути створені однакові в Windows і Linux. Завдання використовують метод CRON для планування виконання.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Ми надішлемо нам необхідну інформацію про використання функцій та вашу установку.';

$GLOBALS["lang"]['Also can be created from the'] = 'Також можна створювати з';

$GLOBALS["lang"]['Alternatives'] = 'Альтернативи';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Сфери';

$GLOBALS["lang"]['American Samoa'] = 'Американський Самоа';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Відкриття Active Directory для списку мереж та сканування асоційованих IP-адрес, таких як регулярне відкриття поштових повідомлень.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (організація) є власником більшості елементів в колекціях в рамках Open-AudIT. За винятком глобальних товарів, таких як <i>конфігурація</i>, більшість елементів призначають (відомо) Org. Користувач має доступ до тих елементів у збірці, які нижче мають дозвіл на роботу.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Програма активно приймає підключення до ТCP, асоціацію UDP або асоціації СКТП на цьому порту. Знайти ці часто є основною метою сканування портів. Ми знаємо, що кожен відкритий порт є проспектом для атаки. Атакери та ручники хочуть використовувати відкриті порти, при цьому адміністратори намагаються закрити або захистити їх від брандмауера без загартування законних користувачів. Відкриті порти також цікаві для сканування небезпеки, оскільки вони показують послуги, доступні для використання в мережі.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'масив <code>benchmarks.id</code>й';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'масив <code>devices.id</code>й';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Багато об\'єктів, що представляють зовнішні посилання на більш детальну інформацію.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Виготовлений здогадка до ідентичності та типу пристрою';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Зашифрований документ JSON, що містить необхідні атрибути залежно від <code>credentials.type</code>й';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Приватна мережа підприємства - це мережа, яка є єдиною організацією, яка будує для підключення своїх офісних локаціях (наприклад, виробничі сайти, офіси, віддалені офіси, магазини), щоб вони могли поділитися комп\'ютерними ресурсами.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Запис може бути створений за допомогою веб-інтерфейсу, якщо поточний користувач увійшов до ролі, яка містить';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Приклад корпусу JSON POST нижче. Приєднатися до пункту форми "даних"';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Приклад віджету SQL показує пристрої, що підраховують на місце розташування.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Користувач Open-AudIT автентифікований та уповноважений сервером LDAP. Успіх.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Показання рівня сервісу, необхідний цим сайтом.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Внутрішнє поле, яке вказує на те, що відкриття завершено.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Відкритий фіксований порт вважається відкритим (і буде викликати виявлення пристрою).<br/>Попередньо, Open-Aud IT вважається Nmap відповідь';

$GLOBALS["lang"]['An optional GeoCode'] = 'Додатковий GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Додатковий пароль для використання sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Анальний';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'І нарешті натисніть кнопку Надіслати, щоб виконати це відкриття.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'І якщо Хтось Goes Wrong?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'І нарешті натисніть <i>Подати заявку</i> Створення методу Open-AudIT Auth для Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'І, нарешті, не так багато питань безпеки - більше миру. Відкриті та документальні структури даних. Ви можете переглянути їх';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'І надати Імя - ми рекомендуємо Open-AudIT 😀, але ви можете назвати це все, що вам подобається. Переконайтеся, що варіант для <i>Інтегрувати будь-яку іншу програму, яку ви не знайдете в галереї (Нон-галерея)</i> вибрано. А потім натисніть <i>Спілкування<i>й</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'І так багато іншого.';

$GLOBALS["lang"]['Andorra'] = 'Андорра';

$GLOBALS["lang"]['Angola'] = 'Ангола';

$GLOBALS["lang"]['Anguilla'] = 'Ангілья';

$GLOBALS["lang"]['Annex A Controls'] = 'Додаток A Контроль';

$GLOBALS["lang"]['Antarctica'] = 'Антарктиди';

$GLOBALS["lang"]['AntiVirus'] = 'Антивірус';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Пакети антивірусні';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Антигуа і Барбуда';

$GLOBALS["lang"]['Antivirus'] = 'Антивірус';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Будь-які порти TCP (комма, що відхилено, немає пробілів) ви хочете виключити з цього відкриття. Тільки доступні при використанні Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Будь-які порти UDP (комісія, що не пробілів) ви хочете виключити з цього відкриття. Тільки доступні при використанні Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Будь-яка необхідна додаткова документація.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Будь-які додаткові ноти, які ви піклуєтеся, щоб зробити.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Будь-які атрибути, які слідують * вказують на те, що дані CVSS, менше, ніж v4, були використані для завершення цього поля. За замовчуванням ми спробуємо використовувати v4 поля, але якщо вони не заселені, ми повернемося до попередньої версії (s) для атрибутів.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Будь-які пристрої будуть призначені для цього Org, коли вони запускають їх сценарій аудиту (якщо встановити).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Будь-які пристрої будуть призначені для цього Org, коли вони запускають їх сценарій аудиту (якщо встановити). Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Місцезнаходження, якщо встановити. Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Будь-які відкриті пристрої будуть призначені для цього Місцезнаходження, коли вони запускають їх сценарій аудиту (якщо встановити).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Місцезнаходження, коли вони запускають їх сценарій аудиту (якщо встановити). Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Org. Якщо не встановлено, вони призначають <code>org_id</code> з цього відкриття. Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Будь-які файли, знайдені таким чином, зберігаються в <i>Виконувати</i> таблиці в будь-який інший компонент пристрою.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Будь-який необхідний фільтр. НЕБЕ: Коли тип = трафік, це являє собою піктограму.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Будь-які конкретні порти TCP, які ви хочете протестувати (комісія, не пробілів).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Будь-які конкретні порти УДП, які ви хочете протестувати (комісія, непростір).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Будь-який користувач завантажує зображення тут.';

$GLOBALS["lang"]['Application'] = 'Додаток';

$GLOBALS["lang"]['Application Definitions'] = 'Визначення додатків';

$GLOBALS["lang"]['application_id'] = 'Код заявки';

$GLOBALS["lang"]['Application ID'] = 'Код заявки';

$GLOBALS["lang"]['Application Licenses'] = 'Ліцензії програми';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Застосування, операційна система або обладнання.';

$GLOBALS["lang"]['applications'] = 'Додатки';

$GLOBALS["lang"]['Applications'] = 'Додатки';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Заявки є єдиною функцією підприємства.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'У Open-AudIT 2.2 з метою розширення концепції як подальший розвиток.';

$GLOBALS["lang"]['applied'] = 'Приклад';

$GLOBALS["lang"]['Applied'] = 'Приклад';

$GLOBALS["lang"]['Approved'] = 'Затвердження';

$GLOBALS["lang"]['Approved Packages'] = 'Затверджені пакети';

$GLOBALS["lang"]['April'] = 'Квітень';

$GLOBALS["lang"]['Arabic'] = 'Українська';

$GLOBALS["lang"]['architecture'] = 'Архітектура';

$GLOBALS["lang"]['Architecture'] = 'Архітектура';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Ви впевнені, що ви хочете видалити цей елемент введення?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Ви впевнені, що ви хочете видалити цей елемент виведення?';

$GLOBALS["lang"]['Are you sure?'] = 'Ви впевнені?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Ви впевнені? Це дозволить видалити всі черги записів і запобігти відновленню решти IP-адреси.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Ви впевнені? Це скинути кількість черги і може викликати завантаження на сервері.';

$GLOBALS["lang"]['area'] = 'Площа';

$GLOBALS["lang"]['Area'] = 'Площа';

$GLOBALS["lang"]['Argentina'] = 'Українська';

$GLOBALS["lang"]['Armenia'] = 'Українська';

$GLOBALS["lang"]['arp'] = 'Арпа';

$GLOBALS["lang"]['Arp'] = 'Арпа';

$GLOBALS["lang"]['Aruba'] = 'Аруба';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Як нагадувати, як працює авторизація в Open-AudIT, див.';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'В результаті ми <strong>обов\'язково</strong> мати доступ до облікових записів адміністратора, доступних для користувача облікових записів. Будь ласка, перевірте цільову програму Windows <i>Увійти</i> доступ до облікових записів, що містять дані користувача.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Як зазначено вище, розробники не говорять про запропоновані мови перекладу. Це означає, що ми не можемо ознайомитися з акцією, перекладеним текстом. Ми спробуємо на курсорний огляд. Якщо ви бачите те, що не перекладаєте правильно, ви можете змінити його самостійно. Редагувати відповідний файл мови (як нижче) і знайти текст, який буде змінено. Може бути не існує і потрібно його додати. Просто змінити текст, зберегти файл і оновити сторінку. Немає необхідності перезавантажити будь-які послуги/відмовлення для неї, щоб прийняти ефект. Ви можете змінити свій браузер.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Як за еталони OpenSCAP - <i>Не намагайтеся здійснювати будь-які налаштування в цьому еталоні без першого тестування їх у неопераційному середовищі. творці цього еталону не несе відповідальності за його використання іншими сторонами, і не гарантує, виражені або несуть гарантії, про свою якість, надійність або будь-які інші характерні.</i><br/><br/>Послухайте, не сліпо починайте <i>кріплення</i> проблеми, виявлені після запуску бендикта без першого ретельного тестування в невиробничому, ідентичному середовищі.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'В якості атрибутів для оточення пристроїв. Виробництво, Навчання та ін.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Як скрипт аудиту використовує баш, ви можете використовувати дику картку * коли ви розшифровуєте каталоги і виключення.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Як звичайно, перейдіть в меню → Управління → Інтеграція → Створити інтеграцію. Якщо ви працюєте на Linux і ви маєте NMIS на одному сервері, вам не потрібно нічого робити, ніж натисніть <i>Подати заявку</i>й Я не можу зробити це простіше.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Як ми запускаємо і збираємо пристрій, який ми популяємо список мереж. У розділі «Благодійні субмережі» використовуються лише дані з пристроїв.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Призначте менеджера ISMS або команди';

$GLOBALS["lang"]['Assign an Operator'] = 'Підписатися на Оператор';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Призначте будь-які ревізійні пристрої до цього Оргкомітету. Залиште заготовку, щоб залишити пристрій в даний час присвоєно Оргком (або встановити за замовчуванням).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Призначте пристрій до місця розташування';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Призначте пристрій до Org';

$GLOBALS["lang"]['Assigned To'] = 'Призначений для';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Призначені для користувача пристрої';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Якщо ми не перевіряємо локальнихhost.';

$GLOBALS["lang"]['Attribute'] = 'Атрибут';

$GLOBALS["lang"]['attributes'] = 'Атрибути';

$GLOBALS["lang"]['Attributes'] = 'Атрибути';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Атрибути зберігаються для Open-AudIT для використання для окремих полів, в даний час всі поля ґрунтуються на пристроях, місцях, оргс і таблицях запитів. Ви можете редагувати атрибути з наступними стовпчиками: Клас, навколишнє середовище, статус та тип.';

$GLOBALS["lang"]['Audit'] = 'Аудит';

$GLOBALS["lang"]['Audit AIX'] = 'Аудиторська АІ';

$GLOBALS["lang"]['Audit DNS'] = 'Аудит DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Аудит ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Аудит Linux';

$GLOBALS["lang"]['audit_log'] = 'Журнал аудиту';

$GLOBALS["lang"]['Audit Log'] = 'Журнал аудиту';

$GLOBALS["lang"]['Audit Mount Point'] = 'Аудиторський контроль';

$GLOBALS["lang"]['Audit My PC'] = 'Аудит мій ПК';

$GLOBALS["lang"]['Audit Netstat'] = 'Аудит Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Аудит OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Аудит Результат Вхід';

$GLOBALS["lang"]['Audit Software'] = 'Аудит програмного забезпечення';

$GLOBALS["lang"]['Audit Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Аудит Win32 Продукція';

$GLOBALS["lang"]['Audit Windows'] = 'Аудит Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Аудит пристрою';

$GLOBALS["lang"]['Audits'] = 'Аудит';

$GLOBALS["lang"]['August'] = 'Серпень';

$GLOBALS["lang"]['Australia'] = 'Українська';

$GLOBALS["lang"]['Austria'] = 'Австрія';

$GLOBALS["lang"]['Auth'] = 'Афіша';

$GLOBALS["lang"]['auth'] = 'Афіша';

$GLOBALS["lang"]['Auth Methods'] = 'Методи Аутто';

$GLOBALS["lang"]['Authenticate only'] = 'Аутентифікація тільки';

$GLOBALS["lang"]['Authentication Passphrase'] = 'аутентифікація Пасфрас';

$GLOBALS["lang"]['Authentication Protocol'] = 'Протокол аутентифікації';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Доступні Benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Аналіз відмов';

$GLOBALS["lang"]['Azerbaijan'] = 'Українська';

$GLOBALS["lang"]['Azerbaijani'] = 'Азербайджан';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'БТУ Макс';

$GLOBALS["lang"]['BTU Total'] = 'BTU Всього';

$GLOBALS["lang"]['Backbone network'] = 'Backbone мережі';

$GLOBALS["lang"]['Backup'] = 'Зареєструватися';

$GLOBALS["lang"]['Bahamas the'] = 'Багамські Острови';

$GLOBALS["lang"]['Bahrain'] = 'Бруней Даруссалам';

$GLOBALS["lang"]['Bangladesh'] = 'Бангладеш';

$GLOBALS["lang"]['bank'] = 'Банкомати';

$GLOBALS["lang"]['Bank'] = 'Банкомати';

$GLOBALS["lang"]['Banned'] = 'Зареєструватися';

$GLOBALS["lang"]['Banned Packages'] = 'Пакети';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Базові лінії можуть порівняти порти Netstat, користувачів та програмне забезпечення.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Базиліни дозволяють об\'єднати дані аудиту з набором атрибутів, які ви раніше визначені (чотирьох базових) для визначення відповідності пристроїв.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Основи для пристрою Порівняння';

$GLOBALS["lang"]['Basic'] = 'Головна';

$GLOBALS["lang"]['Basque'] = 'Баске';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Якщо ми спробуємо бути максимально прозорими, то це ваші фактичні дані, які ми надішлемо.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Змогла визначити, які машини налаштовані таким же чином, є основною частиною адміністрування систем і аудиту – і зараз звітність про те, що буде виконано просто і автоматизовано. Після того, як ви визначаєте свій базовий рядок, він автоматично буде працювати над набором пристроїв на заздалегідь визначеному графіку. Видача даних виконаних базових систем буде доступна для перегляду веб, імпортування в систему третьої сторони або навіть як друкований звіт.<br/><br/>Для проведення перевірок та управлінських цілей можна вигідно налаштувати індивідуальні пристрої на стаціонарний, відомий хороший пристрій. Базиліни дозволяють об\'єднати дані аудиту з набором атрибутів, які ви раніше визначені (чотирьох базових) для визначення відповідності пристроїв.';

$GLOBALS["lang"]['Belarus'] = 'Білорусь';

$GLOBALS["lang"]['Belgium'] = 'Бельгія';

$GLOBALS["lang"]['Belize'] = 'Беліз';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Нижче наведено приклад необхідного формату csv.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Нижче наведені рядки, де вводяться змінні в скрипт. Після того, як наш попередній приклад, скрипт аудиту Linux запускається з нашим каталогом, таким чином,';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Нижче ви можете побачити приклад Org Chart. Якщо користувач має дозвіл на роботу <i>Фінанси</i> Org, вони також мають дозвіл на спадкову Orgs Dept A, B & C. Це незалежно від запиту на збір.<br/><br/>У разі, якщо за запитом, користувач також має доступ до Компанії No1 та за замовчуванням. Це для (як вище) запитів, груп та ін.<br/><br/>Примітка - Користувач може мати доступ до запиту від За замовчуванням Org, але це сам запит не результат. В результаті будуть представлені тільки пристрої, які користувач має доступ до - пристрої IE від Finance A і Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'бенчмарка';

$GLOBALS["lang"]['benchmark_id'] = 'Код товару';

$GLOBALS["lang"]['Benchmark ID'] = 'Код товару';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Завдання створюються автоматично, коли створюється еталон.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Виконання і обробка Benchmark може зайняти тривалу кількість часу, звідси перевага планувати їх і не виконувати їх оголошення.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks створюються шляхом надання операційної системи та версії, поєднаної з конкретним напрямком та переліком машин для її виконання. Після створення бендикти виконуються проти переліку машин на графіку.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks для найкращої конфігурації';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks надає рекомендації щодо безпеки Ваших комп\'ютерів, що містять інструменти OpenSCAP та політику.<p><i>Від головної сторінки OpenSCAP:</i> У будь-який час, коли новий вразливості є відкритими і патчуються щодня, що забезпечує дотримання безпеки, повинна бути безперервним процесом. Крім того, потрібно віднести шлях до регулювання політики, а також періодичної оцінки та моніторингу ризику. екосистема OpenSCAP забезпечує інструменти та настроювані політики для швидкого, економічно ефективного та гнучкого виконання цих процесів.</p>';

$GLOBALS["lang"]['Benefits'] = 'Переваги';

$GLOBALS["lang"]['Bengali'] = 'Бенгалі';

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

$GLOBALS["lang"]['Both forms of'] = 'І форми';

$GLOBALS["lang"]['Botswana'] = 'Ботсвана';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Острів Бувет (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Бразилія';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Бразилійка Португальська';

$GLOBALS["lang"]['Breaking it Down'] = 'Пробити';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Британський Індійський океан Територія (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Британські Віргінські острови';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Розгорніть дерево до Консольного кореня -> Послуги компонента -> Комп\'ютери -> Мій комп\'ютер<br/><br/>клацніть правою кнопкою миші <i>Мій комп\'ютер</i> і вибрати властивості<br/><br/>Виберіть <i>Властивості за замовчуванням</i> Увійти';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Побудувати довіру клієнтів та партнерів';

$GLOBALS["lang"]['Bulgaria'] = 'Болгарія';

$GLOBALS["lang"]['Bulgarian'] = 'Болгарія';

$GLOBALS["lang"]['Bulk Edit'] = 'Редагування';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Форма редагування';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Настроювання редагування атрибутів пристроїв';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Після натискання на наступну сторінку встановіть прапорець.';

$GLOBALS["lang"]['Burkina Faso'] = 'Буркіна Фасо';

$GLOBALS["lang"]['Burundi'] = 'Бурунді';

$GLOBALS["lang"]['business_requirements'] = 'Вимоги до бізнесу';

$GLOBALS["lang"]['Business Requirements'] = 'Вимоги до бізнесу';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Але я тільки мати Windows Клієнт машини Доступно!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Але я не хочу, щоб змінити файл мови кожного разу, коли я оновлення!';

$GLOBALS["lang"]['Buy'] = 'Купити';

$GLOBALS["lang"]['Buy More'] = 'Купити більше';

$GLOBALS["lang"]['Buy More Licenses'] = 'Купуйте більше ліцензій';

$GLOBALS["lang"]['By'] = 'Зареєструватися';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'За замовчуванням ми інтегруємо всі пристрої з параметром nmis_manage <i>й</i>й З 4.2.0 ми також відправляємо Рул, який говорить <i>Якщо ви виявите пристрій і він має дійсний SNMP OID, позначте, що пристрій як керований NMIS</i>й Очевидно ви можете відключити це, якщо це не те, що ви хочете.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'За замовчуванням, ми пропускаємо перевірку сертифікату, оскільки клієнти, як правило, використовують сертифікати самостійно. Щоб увімкнути перевірку сертифіката, відредагуйте файл нижче';

$GLOBALS["lang"]['CIDR'] = 'ЦИДР';

$GLOBALS["lang"]['CIDR Mask'] = 'ЦИДР Маска';

$GLOBALS["lang"]['cli_config'] = 'КЛІ Конфігурація';

$GLOBALS["lang"]['CLI Config'] = 'КЛІ Конфігурація';

$GLOBALS["lang"]['CPU'] = 'Процесор';

$GLOBALS["lang"]['CPUs'] = 'Процесори';

$GLOBALS["lang"]['CSV'] = 'КСВ';

$GLOBALS["lang"]['CVE'] = 'КВ';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs з статусом отриманого, очікується аналіз, що проходить аналіз, відхилений. Ці CVEs (в основному) не містять достатню інформацію для того, щоб увімкнути нам правильного запиту SQL.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Розрахунок з відкриття.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Обчислення загальної кількості адрес IP для цієї мережі.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Обчислення після завершення часу, прийнятих до виконання цього пункту.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Обчислення при інтеграції відбувається і містить представництво JSON пристроїв в цій інтеграції. Кожен посилання <code>devices.id</code>й';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Обчислення при інтеграції відбувається і містить представництво JSON населених пунктів в цій інтеграції. Кожен посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Обчислення при інтеграції відбувається і містить кількість пристроїв, виділених з Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Обчислення при інтеграції відбувається і містить кількість пристроїв, вибраних зовнішніми системами.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Розраховуваний при інтеграції працює і містить кількість пристроїв, які можна оновити в зовнішній системі.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Розраховано при інтеграції і містить кількість пристроїв, що оновлюються в Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Дзвоните до командного запиту, натиснувши кнопку Старт і пошук <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Камбоджа';

$GLOBALS["lang"]['Cameroon'] = 'Камерун';

$GLOBALS["lang"]['Campus Area Network'] = 'Карта сайту';

$GLOBALS["lang"]['Campus area network'] = 'Мережа ресторанів і кафе';

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

$GLOBALS["lang"]['Catalan'] = 'Каталонський';

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

$GLOBALS["lang"]['Certification'] = 'Сертифікати';

$GLOBALS["lang"]['Certification Audit'] = 'Аудит сертифікації';

$GLOBALS["lang"]['Certification Process'] = 'Процес сертифікації';

$GLOBALS["lang"]['Chad'] = 'Чад';

$GLOBALS["lang"]['Change'] = 'Зареєструватися';

$GLOBALS["lang"]['change_id'] = 'Зміна ID';

$GLOBALS["lang"]['Change ID'] = 'Зміна ID';

$GLOBALS["lang"]['change_log'] = 'Логін';

$GLOBALS["lang"]['Change Log'] = 'Логін';

$GLOBALS["lang"]['Change Logs'] = 'Зміна журналів';

$GLOBALS["lang"]['change_type'] = 'Тип зміни';

$GLOBALS["lang"]['Change Type'] = 'Тип зміни';

$GLOBALS["lang"]['check_minutes'] = 'Перевірити хвилин';

$GLOBALS["lang"]['Check Minutes'] = 'Перевірити хвилин';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Перевірити SSH на цих портах';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Перевірити цей порт для будь-якого сервісу SSH.';

$GLOBALS["lang"]['Chile'] = 'Чилі';

$GLOBALS["lang"]['China'] = 'Китай';

$GLOBALS["lang"]['Chinese'] = 'Китайський';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Китайська (традиційна)';

$GLOBALS["lang"]['Choose'] = 'Обрати';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Виберіть (виберіть OS перший)';

$GLOBALS["lang"]['Choose a Device'] = 'Виберіть пристрій';

$GLOBALS["lang"]['Choose a Table'] = 'Виберіть таблицю';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Виберіть тип завдання з першого падіння. Це налаштує додаткові поля, необхідні в залежності від типу завдання.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Зареєструватися <i>Новий секрет клієнта</i>й';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Натисніть кнопку Виконувати';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Натисніть на <i>Властивості</i> під час <i>Мапа</i> заголовок в центральній панелі меню. Статус на сервери <i>URL-адреса доступу користувача</i>й Після копіювання, вставте його в текстовий редактор. Вам необхідно скопіювати один розділ цього поля.<br/><br/>Наш приклад поле схожий на це<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>й<br/><br/>В розділі необхідно <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (додатковий ідентифікатор). Це використовується в Open-AudIT як <i>Навігація</i> поле, щоб вставити його там.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Натисніть кнопку Нова реєстрація заявки. Виберіть Web App / API як тип і надати будь-яку URL (посилання не важлива) і натисніть кнопку Створити.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Натисніть на OK і закрийте вікно DCOMCNFG.<br/><br/>Наведені зміни вимагають перезавантаження, щоб прийняти ефект.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Натисніть на додаток, який ви просто створили. Ім’я користувача<br/><br/>Щоб створити секрет клієнта, натисніть кнопку Налаштування, потім ключі. Забезпечити назву ключа і вибрати відповідну дату закінчення, потім натисніть кнопку Зберегти.<br/><br/>Вартість буде заселена для Вас - це секрет клієнта.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Натисніть кнопку Видалити, щоб видалити пристрої з Open-AudIT.<br/>Це дозволить видалити нижче пристрої з бази даних. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Натисніть кнопку редагування для <i>Базовий SAML Налаштування</i>й';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Натисніть кнопку Імпорта нижче, щоб заблокувати Open-AudIT з даними пристрою.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Натисніть іконку праворуч від поля, яку ви хочете редагувати. Змінити поле і натисніть на зелену іконку, щоб подати.';

$GLOBALS["lang"]['Client ID'] = 'Клієнт';

$GLOBALS["lang"]['Client ID and Secret'] = 'Клієнт і секрет';

$GLOBALS["lang"]['client_ident'] = 'Клієнт Ident';

$GLOBALS["lang"]['Client Ident'] = 'Клієнт Ident';

$GLOBALS["lang"]['client_secret'] = 'Клієнти';

$GLOBALS["lang"]['Client Secret'] = 'Клієнти';

$GLOBALS["lang"]['client_site_name'] = 'Назва сайту';

$GLOBALS["lang"]['Client Site Name'] = 'Назва сайту';

$GLOBALS["lang"]['Close'] = 'Закрити';

$GLOBALS["lang"]['Closed'] = 'Закрити';

$GLOBALS["lang"]['Cloud'] = 'Хмар';

$GLOBALS["lang"]['Cloud Details'] = 'Хмарні деталі';

$GLOBALS["lang"]['Cloud Discovery'] = 'Хмарний Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery і аудиту';

$GLOBALS["lang"]['cloud_id'] = 'Хмарний ID';

$GLOBALS["lang"]['Cloud ID'] = 'Хмарний ID';

$GLOBALS["lang"]['cloud_log'] = 'Хмарний журнал';

$GLOBALS["lang"]['Cloud Log'] = 'Хмарний журнал';

$GLOBALS["lang"]['cloud_name'] = 'Назва хмари';

$GLOBALS["lang"]['Cloud Name'] = 'Назва хмари';

$GLOBALS["lang"]['Cloud Network'] = 'Хмарна мережа';

$GLOBALS["lang"]['clouds'] = 'Хмари';

$GLOBALS["lang"]['Clouds'] = 'Хмари';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Хмари доступні для клієнтів, які мають ліцензію Open-AudIT Enterprise.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Кластери та звіти';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Кокоси (Keeling) острови';

$GLOBALS["lang"]['Collection'] = 'Колекція';

$GLOBALS["lang"]['Collections'] = 'Колекції';

$GLOBALS["lang"]['Collector'] = 'Колектор';

$GLOBALS["lang"]['Collector (UUID)'] = 'Колектор (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Колектор / сервер є єдиною функцією підприємства. Клієнти підприємства отримують ліцензію на один колектор безкоштовно. Додаткові ліцензії колектора можуть бути придбані в міру необхідності.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Збірник / Сервер призначений для того, щоб ви могли мати віддалені або віддалені <i>колектор</i> екземпляр Open-AudIT, що працює на віддаленій машині. Цей екземпляр колектора може бути в іншій зоні безпеки, підмережі, хмарному хостингу або на сайті замовника. Віддалений колектор, потім виконує всі відкриті та аудити пристроїв, що локально уникають складності мережі та брандмауера. Збірник після того, як він зареєстрований повністю контрольований <i>сервер</i>й Це означає, що вам потрібно лише підключення HTTP або HTTPS від цього колектора до сервера.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Колектор Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Назва колектора';

$GLOBALS["lang"]['collector_uuid'] = 'Колектор Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Колектор Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Завдання колектора автоматично встановлюються при включенні функції колектора. Команди збирання не повинні створювати безпосередньо користувачами. Завдання колектора можуть змінюватися після створення. Якщо сервер Open-AudIT має звіти про це колектори, надається додаткове зниження. Ви можете вибрати це для того, щоб визначити, який Збір завдання повинен запустити. Для колекціонерів підтримуються тільки завдання Discovery.';

$GLOBALS["lang"]['Collectors'] = 'Колектори';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Колектори можуть працювати в одному з двох режимів: Колектор і StandAlone. Коли в режимі колектора, екземпляр Open-AudIT керує основним сервером. Коли в режимі Stand Alone, екземпляр управляється локально і пересуває будь-які знайдені пристрої до основного сервера.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Колектори для дистанційного виявлення';

$GLOBALS["lang"]['Colombia'] = 'Колумбія';

$GLOBALS["lang"]['color'] = 'Колір';

$GLOBALS["lang"]['Color'] = 'Колір';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Виконайте наступні рядки (про рядок 49 або так). Просто помістіть хеш # на старті лінії.';

$GLOBALS["lang"]['comments'] = 'Коментарі';

$GLOBALS["lang"]['Comments'] = 'Коментарі';

$GLOBALS["lang"]['commercial'] = 'Торгівля';

$GLOBALS["lang"]['Commercial'] = 'Торгівля';

$GLOBALS["lang"]['Commercial Support'] = 'Комерційна підтримка';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Виконувати ці кроки.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Комплексність атаки (Low або High).';

$GLOBALS["lang"]['Component Table'] = 'Таблиця компонентів';

$GLOBALS["lang"]['Components (All Devices)'] = 'Компоненти (Всі пристрої)';

$GLOBALS["lang"]['Compute'] = 'Поповнення';

$GLOBALS["lang"]['Condition'] = 'Стан';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Проведення оцінки ризику';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Навчальні програми';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Проведення консультацій з управління';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Проведення регулярних перевірок спостереження (зазвичай щорічно)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Проведення акредитованого тіла на двох стадіях';

$GLOBALS["lang"]['Config'] = 'Конфігурація';

$GLOBALS["lang"]['Config Default, currently '] = 'Налаштування за замовчуванням, в даний час ';

$GLOBALS["lang"]['config_file'] = 'Налаштування файлу';

$GLOBALS["lang"]['Config File'] = 'Налаштування файлу';

$GLOBALS["lang"]['config_manager_error_code'] = 'Код помилки менеджера Config Manager';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Код помилки менеджера Config Manager';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Конфігуративний контроль доступу на основі ролей (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Налаштування';

$GLOBALS["lang"]['Configuration'] = 'Налаштування';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Визначення зміни конфігурації та звітування';

$GLOBALS["lang"]['Configure'] = 'Налаштування';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Налаштування сервера агента для виконання перевірок за розкладом';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Консалтинг, впровадження та інші послуги доступні через';

$GLOBALS["lang"]['contact'] = 'Контакти';

$GLOBALS["lang"]['Contact'] = 'Контакти';

$GLOBALS["lang"]['contact_name'] = 'Контакти';

$GLOBALS["lang"]['Contact Name'] = 'Контакти';

$GLOBALS["lang"]['contained_in'] = 'Затриманий';

$GLOBALS["lang"]['Contained In'] = 'Затриманий';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Містить об\'єкт JSON деталі пов\'язаних віджетів та їх позицій.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Містить поля, які визначають, якщо ми повинні використовувати Ssh, snmp і wmi варіанти відкриття. Об\'єкт JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Контекст та лідерство';

$GLOBALS["lang"]['Context Engine ID'] = 'Код двигуна';

$GLOBALS["lang"]['Context Name'] = 'Імя користувача';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Безперервно покращуйте ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Договірні зобов’язання';

$GLOBALS["lang"]['Contractual Obligations'] = 'Договірні зобов’язання';

$GLOBALS["lang"]['Cook Islands'] = 'Кукурудзяні острови';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Копіювати та вставити результат аудиту';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Скопіюйте та вставте нижче на форуми, інший екземпляр Open-AudIT або в будь-який інший спосіб, щоб забезпечити цей елемент.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Статус на сервери <i>Код заявки</i> поле і вставте її в Open-AudIT <i>Клієнт</i> поле для нового методу Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Статус на сервери <i>Клієнт</i> і вставте його в Open-AudIT <i>Клієнт</i> поле.<br/>Якщо немає секрету, натисніть <i>Створити новий секрет</i>, потім скопіювати значення і вставити її в Open-AudIT <i>Клієнти</i> поле.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Скопіюйте значення та вставте його у форму Open-AudIT для <i>Клієнти</i> поле.';

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

$GLOBALS["lang"]['Create File'] = 'Створити файл';

$GLOBALS["lang"]['Create Geocode'] = 'Створення геокоду';

$GLOBALS["lang"]['create_internal_count'] = 'Створення внутрішнього обліку';

$GLOBALS["lang"]['Create Internal Count'] = 'Створення внутрішнього обліку';

$GLOBALS["lang"]['create_internal_from_external'] = 'Створення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Create Internal From External'] = 'Створення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Створення пристроїв NMIS від Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Створення Open-AudIT Пристрої від ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Створення Open-AudIT Пристрої від NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Створення базиліка для прикладного пристрою';

$GLOBALS["lang"]['Create a Discovery'] = 'Створення Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Створіть заяву про використання';

$GLOBALS["lang"]['created_by'] = 'Зроблено';

$GLOBALS["lang"]['Created By'] = 'Зроблено';

$GLOBALS["lang"]['created_date'] = 'Дата створення';

$GLOBALS["lang"]['Created Date'] = 'Дата створення';

$GLOBALS["lang"]['Creating'] = 'Створення';

$GLOBALS["lang"]['Creating Credentials'] = 'Створення облікових записів';

$GLOBALS["lang"]['Creating Device'] = 'Створення пристрою';

$GLOBALS["lang"]['Creating Widgets'] = 'Створення віджетів';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Створення Discovery Запис параметрів сканування';

$GLOBALS["lang"]['Creating a Query'] = 'Створення запитів';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Створення протоколу SQL для груп';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Створення протоколу SQL для запитів';

$GLOBALS["lang"]['Creating an Integration'] = 'Створення інтеграції';

$GLOBALS["lang"]['creator'] = 'Кріплення';

$GLOBALS["lang"]['Creator'] = 'Кріплення';

$GLOBALS["lang"]['credential'] = 'Редагування';

$GLOBALS["lang"]['Credential'] = 'Редагування';

$GLOBALS["lang"]['Credentials'] = 'Регулятори';

$GLOBALS["lang"]['Credentials Client ID'] = 'Клієнт';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Підписка на дані Імя';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Поведінковий ідентифікатор';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Речі зберігаються в <i>Кримінал</i> Таблиця бази даних. Фактична інформація зашифрована в сховищі. Коли компанія Discovery працює, пристрій має свої специфічні облікові дані, отримані з бази даних, розшифровані та перевірені. Якщо ці дані не мають списку облікових даних, також отримані, розшифровані, а потім протестовані проти пристрою, починаючи з облікових даних, відомих раніше. Пристрої специфічні критерії зберігаються на рівні індивідуального пристрою в <i>Кримінал</i> стіл (примітка - немає <i>й</i> у назві таблиці. Ключі SSH протестовані до SSH Імя користувача / пароль. При тестуванні SSH, облікові дані також будуть позначені як робота з sudo або корінь.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Редактори можуть мати один з небагатьох різних типів - хміль v.1 / v.2, хміль v.3, ssh, ssh ключ, вікна всі реалізовані. CAVEAT - Ssh ключі не реалізовані для серверів Windows Open-AudIT.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Спеціальні поля';

$GLOBALS["lang"]['Custom TCP Ports'] = 'TCP порти';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Призначені для користувача TCP порти. Будь-які конкретні порти, які ми будемо сканувати на додаток до портів Top TCP. Кома розсіяна, без пробілів.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Спеціальна UDP Порти';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Призначені для користувача порти UDP. Будь-які конкретні порти, які ми будемо сканувати на додаток до портів UDP. Кома розсіяна, без пробілів.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Користувальницькі параметри сканування для Discovery';

$GLOBALS["lang"]['Cve'] = 'Про нас';

$GLOBALS["lang"]['Cyprus'] = 'Кіпр';

$GLOBALS["lang"]['Czech'] = 'чеська';

$GLOBALS["lang"]['Czech Republic'] = 'Чехія';

$GLOBALS["lang"]['DHCP'] = 'ДХК';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN акаунт (необов\'язково)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Пароль (опція)';

$GLOBALS["lang"]['DNS FQDN'] = 'Статус на сервери';

$GLOBALS["lang"]['DNS Hostname'] = 'Статус на сервери';

$GLOBALS["lang"]['Danish'] = 'Українська';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Випадки з гіпсокартону';

$GLOBALS["lang"]['dashboards'] = 'Ташборди';

$GLOBALS["lang"]['Dashboards'] = 'Ташборди';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Для створення, читання, оновлення та видалення обох цих колекцій для забезпечення домашньої сторінки є саме те, що вони повинні бачити. Не тільки що, але користувач може встановити даний панель, як власний будинок. Кожна людина не потребує використання тієї ж домашньої сторінки (копіювати), ані ті ж віджети на цій панелі. Професійні ліцензовані клієнти можуть вибрати між двома заздалегідь визначеними панелями для встановлення власної домашньої сторінки.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Дешборди забезпечують <i>на погляд</i> Важлива видимість для змін, що відбуваються в мережі, а також забезпечення швидкого посилання на типи пристроїв, виробників та операційних систем тощо.';

$GLOBALS["lang"]['Dashboards use'] = 'Використання щитів';

$GLOBALS["lang"]['Data'] = 'Дані';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Експорт даних - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Відновлення даних';

$GLOBALS["lang"]['Database'] = 'База даних';

$GLOBALS["lang"]['db_action'] = 'Діяльність бази даних';

$GLOBALS["lang"]['Database Action'] = 'Діяльність бази даних';

$GLOBALS["lang"]['db_column'] = 'База даних';

$GLOBALS["lang"]['Database Column'] = 'База даних';

$GLOBALS["lang"]['Database Definition'] = 'Визначення бази даних';

$GLOBALS["lang"]['db_row'] = 'База даних Row';

$GLOBALS["lang"]['Database Row'] = 'База даних Row';

$GLOBALS["lang"]['Database Schema'] = 'База даних Schema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Сервер бази даних Discovery';

$GLOBALS["lang"]['db_table'] = 'База даних';

$GLOBALS["lang"]['Database Table'] = 'База даних';

$GLOBALS["lang"]['Database Tables'] = 'Таблиця бази даних';

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

$GLOBALS["lang"]['Debugging'] = 'Розгортання';

$GLOBALS["lang"]['Debugging a Script'] = 'Видалення сценарію';

$GLOBALS["lang"]['December'] = 'Грудень';

$GLOBALS["lang"]['Decommission'] = 'Декоммісія';

$GLOBALS["lang"]['Default'] = 'Зареєструватися';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Аутентифікація за замовчуванням Рівень - Набір для підключення';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Імперація за замовчуванням Рівень - Набір для ідентифікації';

$GLOBALS["lang"]['Default Items'] = 'За замовчуванням';

$GLOBALS["lang"]['Default Orgs Groups'] = 'За замовчуванням Групи організацій';

$GLOBALS["lang"]['Default Roles Groups'] = 'За замовчуванням ролі Групи';

$GLOBALS["lang"]['Default Value'] = 'Значення за замовчуванням';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'За замовчуванням 389. Зазвичай 636 використовується для Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'За замовчуванням <code>3</code> для LDAP і Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Контакти';

$GLOBALS["lang"]['Deferred'] = 'Забарвлення';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Сфера управління проектами та завдання';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Визначення сфери ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Визначте контекст організації (міжнародні/зовнішні питання)';

$GLOBALS["lang"]['delay_minutes'] = 'Прокладка Протоколи';

$GLOBALS["lang"]['Delay Minutes'] = 'Прокладка Протоколи';

$GLOBALS["lang"]['Delete'] = 'Делет';

$GLOBALS["lang"]['Delete Example Devices'] = 'Видалити приклади пристроїв';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Видалити зовнішній від внутрішнього';

$GLOBALS["lang"]['Delete External From Internal'] = 'Видалити зовнішній від внутрішнього';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Видалити NMIS Пристрої, якщо не в Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Видалити запис {collection}.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Деталі, які зазвичай контактуються на цьому сайті.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Визначте, як часто ви хочете запустити базову перевірку на базі даних та створити плановий звіт';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Визначення варіантів лікування ризику';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Розробка плану лікування ризику';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Розробка політик, процедур і контрольів';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Розробка необхідних документів ISMS (поліції, процедури тощо)';

$GLOBALS["lang"]['device'] = 'Пристрої';

$GLOBALS["lang"]['Device'] = 'Пристрої';

$GLOBALS["lang"]['Device Audits'] = 'Аудит пристроїв';

$GLOBALS["lang"]['Device Component Names'] = 'Назва компонентів пристрою';

$GLOBALS["lang"]['Device ID'] = 'Код пристрою';

$GLOBALS["lang"]['device_id'] = 'Код пристрою';

$GLOBALS["lang"]['device_id_a'] = 'Код пристрою A';

$GLOBALS["lang"]['Device ID A'] = 'Код пристрою A';

$GLOBALS["lang"]['device_id_b'] = 'Код пристрою B';

$GLOBALS["lang"]['Device ID B'] = 'Код пристрою B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Правила вибору пристрою';

$GLOBALS["lang"]['Device Name'] = 'Назва пристрою';

$GLOBALS["lang"]['Device Result'] = 'Результат роботи пристрою';

$GLOBALS["lang"]['Device Results'] = 'Результати пристрою';

$GLOBALS["lang"]['Device Seed'] = 'Насіннєве обладнання';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Насіннєве обладнання Якщо ви знаєте, що ваша мережа складається з діапазону підмереж, але ви не впевнені, що вони є. Посів відкриття з локальним маршрутизатором і дивитися мережу розгортається до очей.';

$GLOBALS["lang"]['Device Seed IP'] = 'Пристрій насіння IP';

$GLOBALS["lang"]['Device Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Device Types'] = 'Типи пристроїв';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Пристрої та програмно-технічні перевірки';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Пристрої в підмережі';

$GLOBALS["lang"]['Devices'] = 'Пристрої';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Пристрої, призначені для розміщення';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Пристрої, призначені для розміщення';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Пристрої, призначені для організації';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Пристрої, призначені для організації';

$GLOBALS["lang"]['Devices Audited'] = 'Пристрої аудиту';

$GLOBALS["lang"]['Devices Collection'] = 'Колекція пристроїв';

$GLOBALS["lang"]['Devices Created in '] = 'Створені пристрої ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Створено в Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Пристрої за замовчуванням Дисплей колон';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Пристрої за замовчуванням Дисплей колон';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Пристрої, знайдені Останні 7 днів';

$GLOBALS["lang"]['Devices Found Today'] = 'Пристрої, знайдені сьогодні';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Пристрої, знайдені Вчора';

$GLOBALS["lang"]['Devices Missing Information'] = 'Пристрої пропуску інформації';

$GLOBALS["lang"]['Devices Not Audited'] = 'Пристрої не перевіряють';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Пристрої не дивляться 30 днів';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Пристрої не Seen 7 Днів';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Пристрої не дивляться 90 днів';

$GLOBALS["lang"]['Devices Older Than X'] = 'Пристрої Старші Тхан X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Пристрої, що зберігаються через API';

$GLOBALS["lang"]['Devices Selected from '] = 'Вибрані пристрої ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Вибрані пристрої від Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Пристрої, отримані в ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Пристрої, отримані в Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Пристрої маркуються.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Пристрої не маркуються.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Пристрої можуть бути марковані.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Пристрої від Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Пристрої в пусковому стані';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Пристрої в Стоппедській державі';

$GLOBALS["lang"]['Devices in this'] = 'Пристрої в цьому';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Пристрої не будуть відповідати, якщо їх статус встановлюється до <i>видалення</i>й Будь-який інший статус дозволить виникати матч.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Пристрої з розширеними гарантій';

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

$GLOBALS["lang"]['Discoveries'] = 'Про компанію';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Відкриває себе на самому серці, що робить Open-AudIT. Як дізнатися більше <i>Що на вашій мережі?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Відкриває записи, які дозволяють запустити відкриття в мережі в один клік, не вказавши деталі цієї мережі, кожен раз.';

$GLOBALS["lang"]['Discovery'] = 'Про компанію';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Журнали змін';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Відновлення даних';

$GLOBALS["lang"]['discovery_id'] = 'Імя користувача';

$GLOBALS["lang"]['Discovery ID'] = 'Імя користувача';

$GLOBALS["lang"]['Discovery Issues'] = 'Проблемні питання';

$GLOBALS["lang"]['discovery_log'] = 'Логін';

$GLOBALS["lang"]['Discovery Log'] = 'Логін';

$GLOBALS["lang"]['Discovery Match Options'] = 'Параметри матчу Discovery';

$GLOBALS["lang"]['Discovery Name'] = 'Імя користувача';

$GLOBALS["lang"]['Discovery Options'] = 'Варіанти пошуку';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Випадковий граф';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Дізнайтесь більше';

$GLOBALS["lang"]['discovery_run'] = 'Пробіг';

$GLOBALS["lang"]['Discovery Run'] = 'Пробіг';

$GLOBALS["lang"]['discovery_scan_options'] = 'Параметри сканування';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Параметри сканування';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Сканування інформації Варіанти - це лише інша колекція предметів. Користувачі підприємства можуть створювати, читати, оновити та видаляти записи в міру необхідності. Професійні користувачі можуть прочитати всі записи, але не створювати нові записи, оновити існуючі записи або видаляти записи. Користувачі спільноти не мають доступу до цієї колекції.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Випадкові типи сканування';

$GLOBALS["lang"]['Discovery Support'] = 'Служба підтримки';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Припинити роботу';

$GLOBALS["lang"]['disk'] = 'Дек';

$GLOBALS["lang"]['Disk'] = 'Дек';

$GLOBALS["lang"]['display_version'] = 'Версія для відображення';

$GLOBALS["lang"]['Display Version'] = 'Версія для відображення';

$GLOBALS["lang"]['Display in Menu'] = 'Показати в меню';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Відображення стандартної веб-форми для подання до POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Відображається стандартна веб-форма для подання до POST /{collection}/import.';

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

$GLOBALS["lang"]['dns_host_name'] = 'Днс Хост Імя';

$GLOBALS["lang"]['Dns Host Name'] = 'Днс Хост Імя';

$GLOBALS["lang"]['dns_hostname'] = 'Днс Хостім';

$GLOBALS["lang"]['Dns Hostname'] = 'Днс Хостім';

$GLOBALS["lang"]['dns_server'] = 'Статус на сервери';

$GLOBALS["lang"]['Dns Server'] = 'Статус на сервери';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Не забудьте про Open-AudIT вікі для всієї документації.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Чи не забуває гора документації на вікі';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Не скануйте ці порти TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Не скануйте ці порти UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Не показувати мене знову';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'У вас є ідеальний приклад цієї конфігурації? Можливо, пристрій, розташований в лабораторному середовищі або робочій станції, ви використовуєте для роботи на клоні VMs від.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ви хочете використовувати безпечний транспорт (LDAPS) або регулярний розшифрований LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ви хочете бачити стандартну бічну панель зліва.';

$GLOBALS["lang"]['documentation'] = 'Документація';

$GLOBALS["lang"]['Documentation'] = 'Документація';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Документація про конкретну колекцію.';

$GLOBALS["lang"]['Does Not Equal'] = 'Чи не існує';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Чи застосовується ліцензія на дитину Orgs.';

$GLOBALS["lang"]['domain'] = 'Головна';

$GLOBALS["lang"]['Domain'] = 'Головна';

$GLOBALS["lang"]['domain_controller_address'] = 'Адреса контролера домену';

$GLOBALS["lang"]['Domain Controller Address'] = 'Адреса контролера домену';

$GLOBALS["lang"]['domain_controller_name'] = 'Контролер домену Імя';

$GLOBALS["lang"]['Domain Controller Name'] = 'Контролер домену Імя';

$GLOBALS["lang"]['domain_role'] = 'Роль домену';

$GLOBALS["lang"]['Domain Role'] = 'Роль домену';

$GLOBALS["lang"]['domain_short'] = 'Короткий домен';

$GLOBALS["lang"]['Domain Short'] = 'Короткий домен';

$GLOBALS["lang"]['Dominica'] = 'Домініка';

$GLOBALS["lang"]['Dominican Republic'] = 'Домініканська Республіка';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Я знаю, що я роблю. Немає фільтра і можливість приєднатися до користувацьких таблиць.';

$GLOBALS["lang"]['Download'] = 'Завантажити';

$GLOBALS["lang"]['Download a File'] = 'Завантажити файл';

$GLOBALS["lang"]['Download a file from URL'] = 'Завантажити файл з URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Завантажити тест_windows_client.vbs скрипт безпосередньо';

$GLOBALS["lang"]['Download your updated version from'] = 'Завантажити оновлену версію з';

$GLOBALS["lang"]['driver'] = 'Водій';

$GLOBALS["lang"]['Driver'] = 'Водій';

$GLOBALS["lang"]['duplex'] = 'Дуплекс';

$GLOBALS["lang"]['Duplex'] = 'Дуплекс';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Дублікатні пристрої / Місячні пристрої';

$GLOBALS["lang"]['duration'] = 'Тривалість';

$GLOBALS["lang"]['Duration'] = 'Тривалість';

$GLOBALS["lang"]['Dutch'] = 'Нідерландська';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'Про компанію';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Кожен IP сканується з відкриттям налаштовуються параметри (див. параметри сканування та можливості Discovery - співтовариство проти професійного проти підприємства на вікі). В цілому Nmap перевірить порти 22 (ssh), 135 (wmi), 62078 (iPhone) і UDP 161 (snmp). Якщо 22 135 або 161 відгукуються на поточний список, отриманий і кожен достовірний тестований у свою чергу. Перші робочі норми використовуються для подальших запитів безпосередньо з пристрою. Примітка - якщо пристрій раніше був виявлений і має робочі показники, ті облікові дані тестуються першими. Тільки якщо ті, які не мають інших облікових даних, то спробували.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Кожен раз, коли пристрій відкрився або результат перевірки, всі правила отримують з бази даних і запускаються до атрибутів конкретного пристрою. Правила пробігають від одного пристрою в часі - немає місця, щоб сказати <i>Виконувати правила всіх пристроїв<i> або <i>Виконувати правила цих пристроїв<i>й Індивідуальне правило перевірить один або кілька атрибутів пристрою і якщо вони відповідають правилам, результат буде застосовуватися. Кілька атрибутів можна перевірити. Кілька атрибутів можна встановити. Думка цього як Якщо це, то що система для Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Легко запустіть відкриття мережі в один клік, не вказавши деталі цієї мережі кожен раз.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Увімкнути розподілений COM на цьому комп\'ютері - Варіант перевіряється';

$GLOBALS["lang"]['enabled'] = 'Увімкнути';

$GLOBALS["lang"]['Enabled'] = 'Увімкнути';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Включення функції під Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Ендтек';

$GLOBALS["lang"]['English'] = 'Українська';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Підвищення нормативної відповідності';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Закінчення завершено. CVE має повну метадані і вважається стабільною.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Забезпечити документацію контрольованою та доступною';

$GLOBALS["lang"]['enterprise'] = 'Підприємство';

$GLOBALS["lang"]['Enterprise'] = 'Підприємство';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Приватна мережа підприємств';

$GLOBALS["lang"]['Enterprise private network'] = 'Приватна мережа підприємств';

$GLOBALS["lang"]['Entitlement Type'] = 'Тип назви';

$GLOBALS["lang"]['Entra'] = 'Ентра';

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

$GLOBALS["lang"]['Esperanto'] = 'Есперанто';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Створення плану проекту та своєчасності';

$GLOBALS["lang"]['Establish an information security policy'] = 'Створення політики інформаційної безпеки';

$GLOBALS["lang"]['Established'] = 'Заснування';

$GLOBALS["lang"]['Estonia'] = 'Естонія';

$GLOBALS["lang"]['Estonian'] = 'Естонська';

$GLOBALS["lang"]['Ethernet MAC'] = 'Універсальні інженерні рішення';

$GLOBALS["lang"]['ethernet_mac'] = 'Веб-камера';

$GLOBALS["lang"]['Ethernet Mac'] = 'Веб-камера';

$GLOBALS["lang"]['Ethiopia'] = 'Ефіопія';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Оцінити внутрішню';

$GLOBALS["lang"]['Every'] = 'Всі';

$GLOBALS["lang"]['Every Day'] = 'Щодня';

$GLOBALS["lang"]['Example'] = 'Приклад';

$GLOBALS["lang"]['Example Devices'] = 'Приклад пристроїв';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Приклад Org діаграми з доступом';

$GLOBALS["lang"]['Example text from'] = 'Приклад тексту з';

$GLOBALS["lang"]['Examples'] = 'Приклади';

$GLOBALS["lang"]['Exceptions'] = 'Вибори';

$GLOBALS["lang"]['exclude'] = 'Виключити';

$GLOBALS["lang"]['Exclude'] = 'Виключити';

$GLOBALS["lang"]['exclude_ip'] = 'Виключити IP';

$GLOBALS["lang"]['Exclude IP'] = 'Виключити IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Виключити IP адреси';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'За винятком IP-адрес (індивідуальні IP-адреси - 192.168.1.20, діапазони - 192.168.1.30-40 або субмережі - 192.168.1.100/30), вказані з сканування. Кома розсіяна, без пробілів.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Порти TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Порти UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Порти Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Порти Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Виключіть будь-які порти, вказані з сканування. Кома розсіяна, без пробілів.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Експорт пристрою';

$GLOBALS["lang"]['expose'] = 'Проксимус';

$GLOBALS["lang"]['Expose'] = 'Проксимус';

$GLOBALS["lang"]['External'] = 'Зовнішній вигляд';

$GLOBALS["lang"]['External Field Name'] = 'Зовнішня назва поля';

$GLOBALS["lang"]['External Field Type'] = 'Тип зовнішнього поля';

$GLOBALS["lang"]['External Field Types'] = 'Типи зовнішнього поля';

$GLOBALS["lang"]['external_ident'] = 'Зовнішній ідентифікатор';

$GLOBALS["lang"]['External Ident'] = 'Зовнішній ідентифікатор';

$GLOBALS["lang"]['external_link'] = 'Зовнішні посилання';

$GLOBALS["lang"]['External Link'] = 'Зовнішні посилання';

$GLOBALS["lang"]['extra_columns'] = 'Додаткові стовпці';

$GLOBALS["lang"]['Extra Columns'] = 'Додаткові стовпці';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Додаткові та часові звіти';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Для усунення несправностей генерується додаткова і більш детальна логістика.';

$GLOBALS["lang"]['FAQ'] = 'Контакти';

$GLOBALS["lang"]['FQDN'] = 'ФКДН';

$GLOBALS["lang"]['FW Revision'] = 'FW версія';

$GLOBALS["lang"]['Fail'] = 'В\'язниця';

$GLOBALS["lang"]['Failed'] = 'Неприємний';

$GLOBALS["lang"]['Failed Severity'] = 'В’язкість';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Фолклендські острови (Malvinas)';

$GLOBALS["lang"]['Family'] = 'СІмя';

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

$GLOBALS["lang"]['Fields attributes are'] = 'атрибути поля';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Фіджі острови Фіджі';

$GLOBALS["lang"]['File'] = 'Головна';

$GLOBALS["lang"]['File Auditing'] = 'Аудит файлів';

$GLOBALS["lang"]['File Import'] = 'Імпорт файлів';

$GLOBALS["lang"]['File Input'] = 'Вхід';

$GLOBALS["lang"]['file_name'] = 'Імя файла';

$GLOBALS["lang"]['File Name'] = 'Імя файла';

$GLOBALS["lang"]['File Share Discovery'] = 'Файл Поділитися Discovery';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Фільтровані порти';

$GLOBALS["lang"]['Finland'] = 'Фінляндія';

$GLOBALS["lang"]['Finnish'] = 'Фінська';

$GLOBALS["lang"]['Firewall'] = 'Лампи';

$GLOBALS["lang"]['Firewall Packages'] = 'Пакети брандмауера';

$GLOBALS["lang"]['firewall_rule'] = 'Ковролін Руле';

$GLOBALS["lang"]['Firewall Rule'] = 'Ковролін Руле';

$GLOBALS["lang"]['firmware'] = 'Прошивка';

$GLOBALS["lang"]['Firmware'] = 'Прошивка';

$GLOBALS["lang"]['firmware_revision'] = 'Завантаження прошивки';

$GLOBALS["lang"]['Firmware Revision'] = 'Завантаження прошивки';

$GLOBALS["lang"]['First'] = 'Перший';

$GLOBALS["lang"]['First Name'] = 'Імя';

$GLOBALS["lang"]['first_run'] = 'Перший запуск';

$GLOBALS["lang"]['First Run'] = 'Перший запуск';

$GLOBALS["lang"]['first_seen'] = 'Перший Диван';

$GLOBALS["lang"]['First Seen'] = 'Перший Диван';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Перший фокус на те, що потрібно кінець: ви намагаєтеся базовим програмним забезпеченням, користувачам або даними Netstat? Що важливо для порівняння та звіту?';

$GLOBALS["lang"]['FirstWave'] = 'Перший';

$GLOBALS["lang"]['Fix'] = 'Фіксація';

$GLOBALS["lang"]['Fixed'] = 'Фіксований';

$GLOBALS["lang"]['Fixing the Issue'] = 'Виправлення проблеми';

$GLOBALS["lang"]['Floor'] = 'Підлога';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Дізнайтеся, як використовувати Open-AudIT <b>Що на вашій мережі?</b>';

$GLOBALS["lang"]['For'] = 'Для';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Для <i>Тип</i> Переконайтеся в тому, щоб вибрати базову лінію і для групи, необхідно вибрати групу пристроїв, якщо це застосовне для цієї базової лінії, що найкраще представляють пристрої для застосування базової лінії проти. Це дозволить запобігти помилковим записам.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Для запуску Debian / Ubuntu, включаючи налаштування dpkg, щоб запам\'ятати вашу наречену, так що оновлення apt-get не буде зламати';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Для SNMP Open-AudIT може використовувати v1, v2 і v3 облікові дані. Пристрій передається незалежно від того, що він є маршрутизатором, перемикачем (регулярні мережеві пристрої) або комп\'ютером (Linux і Windows часто працюють SNMP для інструментів моніторингу).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Для ґрунтовки на cron див. цю сторінку Вікіпедії';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Для відкриття насіння слід відкрити тільки IP-адресу в приватному IP-адресі.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Для відкриття насіння слід відкрити тільки IP-адреси на обраному підмережі.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Для відкриття насіння слід пінгнути підмережу перед початком відкриття.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Для розширеного в\'їзду сировини SQL запитів. Що стосується запитів, то ви повинні включати <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Для кожного спасованого процесу виникає нижче.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Наприклад - Ви можете створити базову лінію з пристрою, що працює Redhat 9, що діє як один з серверів Apache у кластері. Ви знаєте, що цей конкретний сервер налаштований просто спосіб, який ви хочете, але ви не впевнені, якщо інші сервери в кластері налаштовані точно так само. Базиліни дозволяють визначити це.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Наприклад - Ви можете створити базову лінію з пристрою, що працює Redhat 9, що діє як один з серверів Apache у кластері. Ви знаєте, що цей конкретний сервер налаштований просто спосіб, який ви хочете, але ви не впевнені, якщо інші сервери в кластері налаштовані точно так само. Базові лінії дозволяють визначити це.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Для отримання додаткової інформації див. вікі.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Для ліцензій, які не є обов’язковими, при оформленні ліцензії.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Для отримання більш детальної інформації перевірте базу знань Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Для отримання більш детальної інформації див. посібник, який містить відео. Зареєструватися';

$GLOBALS["lang"]['For more information, see'] = 'Для отримання додаткової інформації див.';

$GLOBALS["lang"]['form_factor'] = 'форм фактор';

$GLOBALS["lang"]['Form Factor'] = 'форм фактор';

$GLOBALS["lang"]['format'] = 'Почати';

$GLOBALS["lang"]['Format'] = 'Почати';

$GLOBALS["lang"]['Forth'] = 'Про нас';

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

$GLOBALS["lang"]['From that page'] = 'З цієї сторінки';

$GLOBALS["lang"]['full_name'] = 'Імя';

$GLOBALS["lang"]['Full Name'] = 'Імя';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Повна хмарна аудит з усіма деталями з регулярного аудиту Open-AudIT та деталі, такі як тип машини та розмір.';

$GLOBALS["lang"]['function'] = 'Мета';

$GLOBALS["lang"]['Function'] = 'Мета';

$GLOBALS["lang"]['GROUP BY'] = 'ГРУП';

$GLOBALS["lang"]['Gabon'] = 'Габон';

$GLOBALS["lang"]['Galician'] = 'Галицька';

$GLOBALS["lang"]['Gambia the'] = 'Гамбія';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Аналіз Gap (за бажанням)';

$GLOBALS["lang"]['gateway'] = 'Проксимус';

$GLOBALS["lang"]['Gateway'] = 'Проксимус';

$GLOBALS["lang"]['gateways'] = 'Ворота';

$GLOBALS["lang"]['Gateways'] = 'Ворота';

$GLOBALS["lang"]['Generated By'] = 'Жанри';

$GLOBALS["lang"]['geo'] = 'Геонауки';

$GLOBALS["lang"]['Geo'] = 'Геонауки';

$GLOBALS["lang"]['Geographical Maps'] = 'Географічні карти';

$GLOBALS["lang"]['Georgia'] = 'Грузія';

$GLOBALS["lang"]['German'] = 'Німецький';

$GLOBALS["lang"]['Germany'] = 'Німеччина';

$GLOBALS["lang"]['Get Lat/Long'] = 'Отримати Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Новини';

$GLOBALS["lang"]['Get Started'] = 'Почати';

$GLOBALS["lang"]['Get a Free License'] = 'Отримати безкоштовну ліцензію';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Ознайомитися з платформою Open-AudIT і вивчити деякі її особливості.';

$GLOBALS["lang"]['Getting Started'] = 'Почати';

$GLOBALS["lang"]['Ghana'] = 'Ганна';

$GLOBALS["lang"]['Gibraltar'] = 'Гібралтар';

$GLOBALS["lang"]['Github'] = 'Гитуб';

$GLOBALS["lang"]['Global Discovery Options'] = 'Глобальні параметри пошуку';

$GLOBALS["lang"]['Global area network'] = 'Глобальна мережа';

$GLOBALS["lang"]['Go'] = 'Про нас';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Повернутися до сервера Open-AudIT і створити відкриття з цільовими комп\'ютерами Windows, IP-адресою як підмережа (це дозволить зберегти, щоб відкрити весь підмережі знову). Запустити відкриття, виходячи з будь-яких питань. Для будь-яких питань, виявлених, беруть відповідні дії.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Зайдіть цільовий Windows PC (або використовувати RDP) і ввійдіть як користувач, який використовується за допомогою облікового запису відкриття.';

$GLOBALS["lang"]['Go to menu'] = 'Перейти до вмісту';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Перейти до вмісту <i>Додатки</i> У <i>Реєстрація</i> пункт меню зліва. Пошук по Open-AudIT Клацніть запис Open-AudIT у списку (припустимо, що ви назвали додаток Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Перейти до вмісту <i>Сертифікати та секрети</i> меню <i>Мапа</i> в меню центру.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Перейти до вмісту <i>Один знак</i> меню та натисніть кнопку SAML для <i>Виберіть єдиний метод реєстрації</i>й';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute поля';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Українська Регулятори';

$GLOBALS["lang"]['Google Maps API Key'] = 'Статус на сервери Головна';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Ви можете допомогти! Відправити Увімкніть текст, який відображається в графічному інтерфейсі. Ми доведемо, що в мовному файлі так званий, переклад поліпшується і вам не потрібно турбуватися про оновлення його для кожного релізу!';

$GLOBALS["lang"]['Greater Than'] = 'Великий Тан';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Великий Than або Equals';

$GLOBALS["lang"]['Greece'] = 'Греція';

$GLOBALS["lang"]['Greek'] = 'Грецька';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Групи використовуються як прості списки пристроїв, які відповідають необхідним умовам. Якщо ви хочете використовувати JSON, вони повертаються список <i>Пристрої</i> тільки. Якщо ви хочете використовувати веб-інтерфейс, вони повертаються стандартний список атрибутів стовпця. Групи можуть використовуватися для інтеграції, базування та інших елементів.';

$GLOBALS["lang"]['Guadeloupe'] = 'Гваделупа';

$GLOBALS["lang"]['Guam'] = 'Гуам';

$GLOBALS["lang"]['Guatemala'] = 'Гватемала';

$GLOBALS["lang"]['Guernsey'] = 'Гернсі';

$GLOBALS["lang"]['guest_device_id'] = 'Імя користувача';

$GLOBALS["lang"]['Guest Device ID'] = 'Імя користувача';

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

$GLOBALS["lang"]['Hardware'] = 'Обладнання';

$GLOBALS["lang"]['hardware_revision'] = 'Обладнання Ревізія';

$GLOBALS["lang"]['Hardware Revision'] = 'Обладнання Ревізія';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'У цій організації надана політика.';

$GLOBALS["lang"]['hash'] = 'Хати';

$GLOBALS["lang"]['Hash'] = 'Хати';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'У агента завжди запустіть останній скрипт аудиту (якщо ви модернізуєте Open-AudIT і вручну скопіюйте скрипти на цілі, то встановити cron - вам потрібно оновити ці скрипти для кожного оновлення).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'У вас є ваш користувач відкрити командний запит (навчання) <i>Запуск адміністратора</i>). Вставте нижче в запит для завантаження агента.';

$GLOBALS["lang"]['Head'] = 'Головна';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Острів Хеард і острови Макдональд';

$GLOBALS["lang"]['Hebrew'] = 'Єврейська';

$GLOBALS["lang"]['height'] = 'Виброхвост';

$GLOBALS["lang"]['Height'] = 'Виброхвост';

$GLOBALS["lang"]['Height in RU'] = 'Висота в RU';

$GLOBALS["lang"]['Help'] = 'Допомогти';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Запитання та відповіді';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Допомагає керувати ризиками інформаційної безпеки';

$GLOBALS["lang"]['Hide Audit Window'] = 'Приховати вікно аудиту';

$GLOBALS["lang"]['high'] = 'Висока якість';

$GLOBALS["lang"]['High'] = 'Висока якість';

$GLOBALS["lang"]['High Availability'] = 'Висока доступність';

$GLOBALS["lang"]['Hindi'] = 'Хінді';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Свято-Послання (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Головна';

$GLOBALS["lang"]['home'] = 'Головна';

$GLOBALS["lang"]['Home Area Network'] = 'Головна Мережа';

$GLOBALS["lang"]['Home area network'] = 'Головна мережа';

$GLOBALS["lang"]['Honduras'] = 'Гондурас';

$GLOBALS["lang"]['Hong Kong'] = 'Гонконг';

$GLOBALS["lang"]['host'] = 'Проживання';

$GLOBALS["lang"]['Host'] = 'Проживання';

$GLOBALS["lang"]['hostname'] = 'Логін';

$GLOBALS["lang"]['Hostname'] = 'Логін';

$GLOBALS["lang"]['hour'] = 'Час';

$GLOBALS["lang"]['Hour'] = 'Час';

$GLOBALS["lang"]['How Does It Work?'] = 'Як працює?';

$GLOBALS["lang"]['How Does it Work?'] = 'Як це працює?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Як довго це приймати';

$GLOBALS["lang"]['How and Why is'] = 'Як і чому';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Як і чому Open-AudIT більш безпечно';

$GLOBALS["lang"]['How do they work?'] = 'Як вони працюють?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Як працює пристрій Seed Discovery?';

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

$GLOBALS["lang"]['Hungarian'] = 'Угорська';

$GLOBALS["lang"]['Hungary'] = 'Угорщина';

$GLOBALS["lang"]['hw_cpe'] = 'Хв Кпе';

$GLOBALS["lang"]['Hw Cpe'] = 'Хв Кпе';

$GLOBALS["lang"]['hyperthreading'] = 'Гіперти';

$GLOBALS["lang"]['Hyperthreading'] = 'Гіперти';

$GLOBALS["lang"]['I have read the EULA.'] = 'Я прочитав EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Я сподіваюсь, що це повідомлення випробували будь-які питання про Open-AudIT та Security. Якщо у вас виникли питання, будь ласка, зв\'яжіться з нами за адресою FirstWave. Ми завжди раді обговорити ваші питання і потреби. І можливо, якщо Ваше питання не те, що я звернувся тут, я можу додати його тут для майбутніх користувачів';

$GLOBALS["lang"]['id'] = 'Імя';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'МСБ';

$GLOBALS["lang"]['IMPORTANT'] = 'ВАЖЛИВО';

$GLOBALS["lang"]['INPUTS'] = 'ІНПУТС';

$GLOBALS["lang"]['IOS Version'] = 'Версія IOS';

$GLOBALS["lang"]['IP'] = 'Імя';

$GLOBALS["lang"]['ip'] = 'Імя';

$GLOBALS["lang"]['IP Address'] = 'IP адреса';

$GLOBALS["lang"]['IP Addresses'] = 'IP адреси';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Останнє повідомлення';

$GLOBALS["lang"]['IP Set By'] = 'Налаштування IP';

$GLOBALS["lang"]['ISMS'] = 'ЗАМОВИТИ';

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

$GLOBALS["lang"]['Identify information assets'] = 'Визначення інформаційних активів';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Визначте зацікавлених сторін та їх вимоги';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Визначте ключові сторони та відмітити ролі';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Визначте пристрій (s), які є вашим зразком, або <i>золото зображення</i> Ви хочете порівняти аналогічні пристрої проти.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Визначення та оцінка ризиків безпеки';

$GLOBALS["lang"]['If'] = 'Якщо';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Якщо пристрій автоматично відкрився за допомогою пристрою <i>Відкрийте пристрій</i> посилання на сторінку деталі пристрою, ми спочатку перевіримо, якщо цей пристрій був виявлений раніше (для Discovery) і якщо так, використовуйте параметри відкриття з цього сканування. Якщо раніше не було виявлено, ми перевернумося до налаштування пункту Відкриття_default_scan_option налаштування.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Якщо створюється новий Org, Імя групи LDAP автоматично виходить з назви. Наприклад, якщо створюється новий Org і названий тест, відповідна група LDAP буде названа відкрито-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Якщо порт відповідає фільтрованим, слід розглянути його доступним.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Якщо порт відповідав за допомогою openfiltered, слід розглянути його доступним.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Якщо віддалений пристрій не існує в обраних пристроях Open-AudIT, слід видалити його з зовнішньої системи.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Якщо було змінено пристрій Open-AudIT, слід оновити зовнішню систему.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Якщо пристрій Open-AudIT не знаходиться на зовнішній системі, слід створювати його.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Якщо агент повідомляє про свій первинний IP в цьому підмережі, виконує дії.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'При виявленні будь-яких з цих (комаційних, не пробілів) портів, припускають SSH на них і використовують їх для проведення перевірок. Немає необхідності додавати цей порт на спеціальні порти TCP - він буде додано автоматично.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Якщо оператор не вказаний, за замовчуванням =. Властивості повинні бути повністю кваліфікованими - тобто, пристрої.hostname (не просто Імя).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Якщо немає значення, подайте це значення. EG: для системи.nmis_group/configuraion. група ми використовуємо';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Якщо встановити, утримує JSON масив певних стовпців пристроїв, цей користувач вибрав для перегляду, крім конфігураційного за замовчуванням.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Якщо ОС СІмя (як повідомляється пристроєм) містить цей пункт, пропуск.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Якщо сервер Open-AudIT має звіти про це колектори, надається додаткове зниження. Ви можете вибрати це для того, щоб визначити, який Збір завдання повинен запустити. Для колекціонерів підтримуються тільки завдання Discovery.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Якщо агент OS сім\'ї (змінний) містить цей рядок, виконує дії.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Якщо бінарний не знайдено в обох цих місцях повідомлення про попередження буде відображатися в інсталяторі.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'У разі виконання наступних умов:<br/><ul><li>Роль має призначену ад_групу</li><li>Org має призначене оголошення_група</li><li>ЛДАП Сервер має use_roles набір до y</li><li>Користувач існує в LDAP (be it Active Directory або OpenLDAP) і знаходиться в призначених оголошеннях_груп</li></ul>Цей користувач може увійти на Open-AudIT без облікового запису в Open-AudIT, необхідного для створення. Open-AudIT буде запитати LDAP і якщо користувач перебуває в необхідних групах, але не в Open-AudIT, атрибути користувачів (Імя, Імя, прізвище, Імя, електронна пошта, ролі, orgs і т.д.) в рамках Open-AudIT буде автоматично заселений, і вони будуть записані на сайті.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Якщо локальне поле є істинним (боль) або y (string) або Y (string) або 1 (integer) потім встановлюють зовнішні дані до 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Якщо локальне поле є справжньою (болонь) або y (string) або Y (string) або 1 (integer) потім встановлюють зовнішні дані до y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Якщо первинний IP (як повідомляється пристроєм) знаходиться в цьому підмережі, пропуск.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Якщо обліковий запис користувача не існує в межах Open-AudIT та <code>use_authorisation</code> встановлюється, користувач буде створений. Якщо це існує, то дані, такі як електронна пошта, Імя та ін. будуть заповнені.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Якщо користувач не має дійсних облікових записів або не має принаймні однієї ролі та групи Open-AudIT (при використанні <code>use_authorisation</code>), Open-AudIT повернеться до використання локальних даних користувачів Open-AudIT та спробує автентифікацію та авторизації. Відхилення того, що користувач буде відмовлено доступу.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Якщо запис користувача на Open-AudIT не має доступу до пошуку LDAP, ви можете використовувати інший обліковий запис, який має цей доступ.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Якщо запис користувача на Open-AudIT не має доступу до пошуку OpenLDAP, ви можете використовувати інший обліковий запис, який має цей доступ. Використовуйте dn_account і dn_password для налаштування цього.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Якщо значення не встановлена, то буде використовуватися поточний час.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Якщо значення встановлено, що часове значення буде використовуватися.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Якщо ця зміна не працює для вас, всі не втратили. Ми додали конфігурацію пункту (встановлюємо n за замовчуванням, тому він використовуватиме не цей новий варіант з коробки) з назвою Recovery_use_org_id_match. Якщо ви зміните його до y, то OrgID, призначеного для пристрою, знайдеться в відповідних правилах відповідності.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Якщо це багато хвилин (або більше) пропускаються з сервера останнього пилки пристрою, пропускаються.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Якщо це багато або більше хвилин пропущено, оскільки пристрій, що контактує з сервером, виконує дії.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Якщо це відбувається, то питання, які ви бачите, пов\'язані з контролем таблиці, що використовуються на веб-сторінці. Тільки зберігає в пам\'яті стан прапорців для перегляду поточної сторінки. Якщо ви зробите вибір, то попередня сторінка / зворотнього зв\'язку буде втрачено. Ви можете, однак, виконайте те, що ви хочете розширити кількість пристроїв, відображених на кожній сторінці. У верхньому лівому куті позначений “рекорди на сторінку”; використовувати це для розширення кількості записів, що відображаються до тих пір, поки ви бачите все, що ви хочете вибрати для редагування Bulk.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Якщо ми виявляємо програмне забезпечення управління санаторію, слід запускати автоматичне відкриття перед запитом.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Якщо ви додаєте Тип Місцезнаходження, додайте іконки до';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Якщо ви додаєте тип пристрою, щоб відобразити відповідну іконку, яку ви повинні вручну копіювати файл .';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Якщо ви підтримаєте клієнтів, пара товарів допоможе вам легше. Відкрийте для себе квиток підтримки за допомогою FirstWave та прикріплюємо файл. Також включають вихід з кнопки підтримки на верхньому правому верхньому праві';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Якщо ви підтриманий клієнт і відкрити квиток підтримки з FirstWave, будь ласка, прикріпіть ці файли.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Якщо у вас є питання з ключами API Google Maps або Вашою компанією не має доступу до створення ключів API Google Maps, будь ласка, зв\'яжіться з командою підтримки FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Якщо ви перебуваєте на Windows або сервері NMIS, вам потрібно буде надати URL, Імя користувача та пароль для доступу до цього сервера.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Якщо ви на гідному широкосмуговому або ефірному підключенні, рекомендуємо завжди використовувати -T4 (Aggressive). Деякі люди люблять -T5 (Insane), хоча він занадто агресивний для мого смаку. Люди іноді вказують -T2 (Polite) тому що вони думають, що це менше, ймовірно, щоб збити господарів або тому, що вони вважають себе, щоб бути в цілому. Вони часто не розуміють, як повільно -T2 дійсно є. Їх сканування може зайняти десять разів довше, ніж сканування за замовчуванням. Машинні аварійні несправності та проблеми пропускної здатності рідко зустрічаються з опціями за замовчуванням -T3 (Normal) і так що я зазвичай рекомендую, що для обережних сканерів. Визначення версії є набагато ефективніше, ніж грати з значеннями термінів при зниженні цих проблем.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Якщо ви працюєте з системою RedHat або Centos, і ви модернізували Nmap, будь ласка, скиньте SUID на бінарні бінарними шляхом';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Якщо ви використовуєте сервер Open-AudIT на Linux, це не впливає на вас.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Якщо ви використовуєте Open-AudIT на Windows, або якщо сервер NMIS не на вашому сервері Open-AudIT (у випадку деяких установок Linux), вам потрібно буде поставляти облікові дані доступу і URL на віддалені NMIS - але це все! Так - Інтеграція між NMIS і Open-AudIT навіть працювати з Windows на основі Open-AudIT тепер!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Якщо ви обираєте колекціонер, він буде запланований для виконання на наступний 5 хвилинний ліміт.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Якщо ви зазвичай встановлюєте пристрої_assigned_to_org і пункт конфігурації включений, то OrgID буде використовуватися для подальшого рефінування матчу.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Якщо ви не зазвичай встановлюєте пристрої_assigned_to_org, то він не буде ефектно. Ми перевіряємо лише за допомогою OrgID, якщо він був встановлений у відкритті (або вручну в скрипті аудиту) і ввімкнено в конфігурації.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Якщо ви увімкнено пункт конфігурації, скористайтеся відкриттям, щоб призначити Org, а потім згодом змінити OrgID пристрою після відкриття, то ви, ймовірно, матимете новий пристрій, який створив наступний раз на роботу. У цьому екземплярі ви повинні, ймовірно, просто unset devices_assigned_to_org перед запуском наступних відкриттів. Це тому, що (у цьому екземплярі) ви сказали Open-AudIT <i>ці пристрої з цього відкриття належать Org X<i>, але потім змінив Org of the device. Ви змінили інформацію про збережені пристрої. У цьому випадку не більше пристрою, що належить Org X, тому ми створюємо новий.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Якщо у вас є програмне забезпечення Anti-Virus, що дозволяє послуги Opmantek (omkd), Apache (apache2.2) та MySQL (mysql) для автоматичного запуску та запуску. Ці послуги використовують Open-AudIT. Вам потрібно лише зробити це один раз. Якщо програма Anti-Virus підтримує вас про Open-AudIT, будь ласка, поставте на форуми або надсилайте електронну пошту для підтримки імені та версії програмного забезпечення Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Якщо ви працюєте, ви можете очікувати повної кількості інформації.<br/><br/>Очевидно, що найкращим способом використання Open-AudIT є наявність робочих значень для пристроїв, які відкриваються (як вони WMI, SSH, або SNMP-процеси).<br/><br/>Ми також маємо сторінку з аудиту без облікових записів.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Якщо у вас є поле \"id\" <strong>і</strong> встановити його з номером, який буде оновлено, а не створений.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Якщо вам потрібно налаштувати доступ до Active Directory, ви можете зазвичай використовувати приклад <code>cn=Users,dc=your,dc=domain,dc=com</code> для вашого <code>base_dn</code>й Немає необхідності встановити <code>user_dn</code>й';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Якщо ви хочете налаштувати доступ до OpenLDAP для користувачів, а також доступ до даних користувачів DN зазвичай <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> потім слід встановити <code>base_dn</code> до <code>dc=your,dc=domain,dc=com</code> і <code>user_dn</code> до <code>uid=@username@@domain,cn=People</code>й Спеціальні слова <code>@username</code> і <code>@domain</code> буде замінено на реквізити входу, надані користувачем на сторінку входу.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Якщо ви працюєте з відкриттям на підмережі, що сервер (або колектор) безпосередньо встановлюється, ви можете очікувати наступне для реагуючих пристроїв';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Якщо ви працюєте з відкриттям на підмережі, що ваш сервер (або колектор) не встановлюється безпосередньо, ви можете очікувати, що наступний для відповідей пристроїв';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Якщо ви вибрали тип Список, то додаткове поле буде викликано значеннями. Ви повинні покласти кому відокремлений список вибраних значень тут. Це буде відображатися в випадаючому ящику, коли поле редаговано.';

$GLOBALS["lang"]['If you set the values for'] = 'Якщо ви встановите значення для';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Якщо ви хочете змусити своїх агентів використовувати певну конфігурацію, ви можете надати ідентифікатор вводу агентів для використання, як нижче (замініть $, що з числом входу агентів). Коли цей агент встановлений, він перевірить з севрою і <strong>тільки</strong> перевірити, що один індивід атрибути агента (тести та дії). Це може бути корисним, якщо ви є MSP - створити запис Агентів для конкретного замовника і їх пристрої, які використовують цей запис, який призначає їх в Org і Місцезнаходження.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Якщо ви хочете зануритися і налаштувати інтеграцію, натисніть кнопку Розширена кнопка (і намагайтеся не перезапустити!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Якщо ви хочете запустити Discovery на зовнішньому пристрої, виберіть варіант і коли створюється інтеграція, так що s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Якщо ви хочете використовувати скрипт за межами Discovery, ми створили ще одну кінцеву точку <i>Статті</i>й Переглянути документацію';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Якщо користувач не має <i>Запуск адміністратора</i> Права, вони все ще можуть завантажити агента (перша команда вище) і запустити його для подання аудиту нижче. Це буде односторонній аудит без встановленого Агента або запланованого плану.';

$GLOBALS["lang"]['ifadminstatus'] = 'Зареєструватися';

$GLOBALS["lang"]['Ifadminstatus'] = 'Зареєструватися';

$GLOBALS["lang"]['iflastchange'] = 'Умань';

$GLOBALS["lang"]['Iflastchange'] = 'Умань';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Статус на сервери';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Впровадження обраних контрольів та процедур';

$GLOBALS["lang"]['Implementation'] = 'Реалізація';

$GLOBALS["lang"]['implementation_notes'] = 'Примітки щодо впровадження';

$GLOBALS["lang"]['Implementation Notes'] = 'Примітки щодо впровадження';

$GLOBALS["lang"]['Import'] = 'Імпорт';

$GLOBALS["lang"]['Import Example Data'] = 'Приклад імпорту даних';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Імпорт декількох {collection} за допомогою CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Можливості';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Можливості';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Покращує безперервність бізнесу і стійкість';

$GLOBALS["lang"]['In'] = 'У';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'У другій вкладці або ввімкніть панель OKTA і натисніть кнопку <i>Створення інтеграції додатків</i>й';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'У другій вкладці або ввімкніть вікно';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'На мій персональний погляд, найкращий спосіб пошуку та аудиту кожного окремого елемента у вашій мережі є Seed Discovery для кожного підмережі, обмеженого для цього підмережі (за наявності основних показників). Насіннєві відкриття використовують перемикач, маршрутизатор і комп\'ютер MAC Адреса таблиці, щоб не пропустити одного пристрою. Якщо він підключений до мережі і використовує TCP/IP, перемикач/router/computer повинен знати його - це просто те, як працює TCP/IP. Об\'єднайте, що з користувальницьких портів TCP та/або UDP, а потім ви зможете визначити тип пристрою. Але це просто мої особисті переваги';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Для того, щоб отримати доступ до Особистого кабінету, ми можемо надати згоду на обробку персональних даних. <code>WHERE @filter</code>й Якщо ви не користуєтеся цим форматом, запитайте про це повідомлення. Тільки користувачі з роллю Admin дозволяють створювати запити, які не вистачає цього атрибуту і навіть після того, як пункт конфігурації для <i>Проксимус</i> включений.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Щоб увімкнути Google Maps, вам потрібно буде перейти до цього посилання та увійти в систему з вашим обліковим записом Google обліковий запис,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Для того, щоб використовувати API Azure Rest, вам потрібно буде створити програму Azure Active Directory, яка використовується для ідентифікації.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Для того, щоб використовувати цю функціональність, вона повинна бути включена в конфігурації - натисніть';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'У списку (комісія)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'У разі виникнення <code>in</code> і <code>notin</code>, ви повинні закривати значення в круглих дужках і відокремити їх за допомогою коми (просто кома, не кома, потім простір).<br/><br/>З цими операторами можна відфільтрувати досить комплексно.<br/><br/>При додаванні даних і фільтрів на декількох стовпчиках, ці стовпчики поєднуються за допомогою <strong>І</strong>й Ви не можете фільтрувати за допомогою <strong>АБО</strong> стан. З включенням <code>notin</code>, ви повинні мати можливість отримати більшість пошуків, які працюють. І для тих, хто дійсно вимагає непідтримуваних і складних підборів, ви завжди можете написати фактичний запит.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'У разі, якщо ми зберігаємо кілька полів (зазвичай у форматі JSON) всередині поля BIGTEXT MySQL (наприклад: облікові дані). Критенціали - колонка облікових записів в таблиці облікових даних, необхідно використовувати формат';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'У командному підказці, навігація до каталогу завантаження (подібно) <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Неактивний';

$GLOBALS["lang"]['Incomplete'] = 'Неповторний';

$GLOBALS["lang"]['Index'] = 'Індекс';

$GLOBALS["lang"]['India'] = 'Індія';

$GLOBALS["lang"]['Indonesia'] = 'Індонезія';

$GLOBALS["lang"]['Indonesian'] = 'Індонезійська';

$GLOBALS["lang"]['Info'] = 'Новини';

$GLOBALS["lang"]['Information only.'] = 'Інформація тільки';

$GLOBALS["lang"]['Informational'] = 'Інформація';

$GLOBALS["lang"]['initial_size'] = 'Початковий розмір';

$GLOBALS["lang"]['Initial Size'] = 'Початковий розмір';

$GLOBALS["lang"]['Initial login credentials are'] = 'Початкові облікові дані логіна';

$GLOBALS["lang"]['Initiation'] = 'Ініціація';

$GLOBALS["lang"]['inode'] = 'Іноди';

$GLOBALS["lang"]['Inode'] = 'Іноди';

$GLOBALS["lang"]['Input'] = 'Вхід';

$GLOBALS["lang"]['Input Type'] = 'Тип введення';

$GLOBALS["lang"]['inputs'] = 'Вхід';

$GLOBALS["lang"]['Inputs'] = 'Вхід';

$GLOBALS["lang"]['Insane'] = 'Інсан';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Вставте новий запис {collection}.';

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

$GLOBALS["lang"]['Install Support'] = 'Підтримка';

$GLOBALS["lang"]['installed_by'] = 'Встановити';

$GLOBALS["lang"]['Installed By'] = 'Встановити';

$GLOBALS["lang"]['installed_on'] = 'Встановити на';

$GLOBALS["lang"]['Installed On'] = 'Встановити на';

$GLOBALS["lang"]['Installing'] = 'Налаштування';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Інтеграції можна планувати за бажанням. Це зліва на користувача.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Інтеграції можуть бути заплановані як на Discoveries, Queries та ін.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Інтерактивні панелі';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Інтерактивні панелі забезпечують миттєву видимість в статусі мережевого інвентарю, що дозволяє ІТ-командам розміщувати нововідкриті пристрої та незвичайну поведінку пристроїв на погляді.';

$GLOBALS["lang"]['interface'] = 'Інтерфейс';

$GLOBALS["lang"]['Interface'] = 'Інтерфейс';

$GLOBALS["lang"]['interface_id'] = 'Інтерфейс ID';

$GLOBALS["lang"]['Interface ID'] = 'Інтерфейс ID';

$GLOBALS["lang"]['interface_type'] = 'Тип інтерфейсу';

$GLOBALS["lang"]['Interface Type'] = 'Тип інтерфейсу';

$GLOBALS["lang"]['Internal'] = 'Внутрішній';

$GLOBALS["lang"]['Internal Audit'] = 'Внутрішній аудит';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Внутрішній аудит та огляд';

$GLOBALS["lang"]['Internal Field Name'] = 'Назва поля';

$GLOBALS["lang"]['Internal ID'] = 'Внутрішній ідентифікатор';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Внутрішній масив JSON для цього користувача.';

$GLOBALS["lang"]['Introduction'] = 'Вступ';

$GLOBALS["lang"]['invoice'] = 'Інвойс';

$GLOBALS["lang"]['Invoice'] = 'Інвойс';

$GLOBALS["lang"]['invoice_id'] = 'Імя користувача';

$GLOBALS["lang"]['Invoice ID'] = 'Імя користувача';

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

$GLOBALS["lang"]['Irish'] = 'Ірландська';

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

$GLOBALS["lang"]['issuer_name'] = 'Імя користувача';

$GLOBALS["lang"]['Issuer Name'] = 'Імя користувача';

$GLOBALS["lang"]['Issues'] = 'Питання';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Він <i>Просто працює</i> з NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'У меню -> Допомога ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Важливо відзначити, що при Open-AudIT визначає відповідність будь-яких властивостей, встановлених для <i>й</i> повинні відповідати точно (і не бути порожніми) для того, щоб відкрити пристрій відповідає пристрою вже в базі даних. Якщо жоден з властивостей не позначений <i>й</i> матч, потім буде створений новий пристрій, який може призвести до дублікатів записів пристроїв. У ситуаціях, де властивості дублюються, наприклад, dbus_id копіюється під час клона VM, потім існуючий пристрій може неправильно перезаписатися/оновлюється, а потім новий запис, який створюється в результаті відсутніх пристроїв.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Не обмежується перекриття адресного простору в даній організації. Не ідеальний, але не рідкість.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Це дуже поширений для виробників материнської плати другого ярусу, щоб не встановити це, щоб встановити його на всі <i>0 р.</i>й <i>Р</i>й';

$GLOBALS["lang"]['Italian'] = 'Італійська';

$GLOBALS["lang"]['Italy'] = 'Італія';

$GLOBALS["lang"]['Items not in Baseline'] = 'Не в Базиліні';

$GLOBALS["lang"]['JSON'] = 'Сонце';

$GLOBALS["lang"]['JSON to Import'] = 'JSON до імпорту';

$GLOBALS["lang"]['Jamaica'] = 'Ямайка';

$GLOBALS["lang"]['January'] = 'Січень';

$GLOBALS["lang"]['Japan'] = 'Японія';

$GLOBALS["lang"]['Japanese'] = 'Японська';

$GLOBALS["lang"]['Jersey'] = 'Українська';

$GLOBALS["lang"]['Jordan'] = 'Йорданія';

$GLOBALS["lang"]['July'] = 'Липень';

$GLOBALS["lang"]['June'] = 'Червень';

$GLOBALS["lang"]['Kazakhstan'] = 'Українська';

$GLOBALS["lang"]['Kenya'] = 'Кенія';

$GLOBALS["lang"]['kernel_version'] = 'Версія Кернел';

$GLOBALS["lang"]['Kernel Version'] = 'Версія Кернел';

$GLOBALS["lang"]['Key'] = 'Головна';

$GLOBALS["lang"]['Key Components'] = 'Основні компоненти';

$GLOBALS["lang"]['Key Password (optional)'] = 'Ключовий пароль (за бажанням)';

$GLOBALS["lang"]['keys'] = 'Головна';

$GLOBALS["lang"]['Keys'] = 'Головна';

$GLOBALS["lang"]['Kiribati'] = 'Кірібаті';

$GLOBALS["lang"]['Korea'] = 'Українська';

$GLOBALS["lang"]['Korean'] = 'корейська';

$GLOBALS["lang"]['Kuwait'] = 'Кувейт';

$GLOBALS["lang"]['Kyrgyz'] = 'Кицька';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Киргизія';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Груп';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP шукав для цього користувача та його облікового запису.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP шукав для цього користувача і їх аккаунт не знайдено. Перевірити логи сервера LDAP. Пропрацювалися облікові дані користувача, але користувач не знайшов. Також перевірте, що ви вказали правильний атрибут Base DN, коли ви створили сервер LDAP у Open-AudIT.';

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

$GLOBALS["lang"]['Last Name'] = 'Імя';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Останнє оновлення - WMI. Для Windows, як в Linux, користувач з доступом до рівня адміністратора (див. Конфігурацію цільового клієнта на вікі).';

$GLOBALS["lang"]['lastModified'] = 'Головна';

$GLOBALS["lang"]['LastModified'] = 'Головна';

$GLOBALS["lang"]['latitude'] = 'Прованс';

$GLOBALS["lang"]['Latitude'] = 'Прованс';

$GLOBALS["lang"]['Latvia'] = 'Латвія';

$GLOBALS["lang"]['Latvian'] = 'Латинки';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Дозвольте встановити заправку на дебур. Копіювати файл:';

$GLOBALS["lang"]['level'] = 'Рівень';

$GLOBALS["lang"]['Level'] = 'Рівень';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Рівень привілеїв, необхідних для експлуатації (не, низький, високий).';

$GLOBALS["lang"]['Liberia'] = 'Ліберія';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Біблії (тобто код, який може включати ще одну програму). Це, як правило, елементи, такі як розширення Wordpress, розширення для крапель, бібліотеки node.js, Android / iPhone / Windows бібліотеки, бібліотеки python тощо.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Лівінська Арабська Джамахія';

$GLOBALS["lang"]['License'] = 'Ліцензії';

$GLOBALS["lang"]['License Key'] = 'Ліцензійний ключ';

$GLOBALS["lang"]['License Required'] = 'Обов\'язкова ліцензія';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Користувачі надається безкоштовно, щоб додати або змінювати правила, які ви бачите. Якщо у вас є пристрій з SNMP OID, який не відповідає моделі вже в файлі - тепер ви можете додати його легко. Не чекайте нас, щоб забезпечити патч і додати його до бази коду для вас.<br/><br/>Коли ви створюєте запис Правил, вам потрібно буде надати Імя та список входів та виходів. Вводи та виходи зберігаються в межах бази даних JSON.<br/><br/>Вводи мають таблицю і атрибут, оператор і значення. При виконанні умов він працює таким чином: Якщо $table . $attribute $operator $value потім застосуйте вихідні.<br/><br/>Наприклад, правило, щоб відповідати SNMP OID і встановити модель нижче.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Ліцензії';

$GLOBALS["lang"]['Liechtenstein'] = 'Ліхтенштейн';

$GLOBALS["lang"]['Like'] = 'Як';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Як і більшість інших атрибутів, додаткові поля можна редагувати. Використовуйте функцію редагування Bulk, як правило, ви побачите додаткові поля доступні для входу.';

$GLOBALS["lang"]['Like versus Equals'] = 'Як versus Equals';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Графіки лінії повинні дати повернення або мій_дат, опис або мій_description і кількість.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Пакети Linux';

$GLOBALS["lang"]['List'] = 'Список';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Список всіх портів NMAP, протоколів та програм для кожного пристрою';

$GLOBALS["lang"]['List Devices'] = 'Список пристроїв';

$GLOBALS["lang"]['List Discoveries'] = 'Список відкриттів';

$GLOBALS["lang"]['list_table_format'] = 'Формат таблиці';

$GLOBALS["lang"]['List Table Format'] = 'Формат таблиці';

$GLOBALS["lang"]['List Tables'] = 'Список таблиць';

$GLOBALS["lang"]['Lithuania'] = 'Українська';

$GLOBALS["lang"]['Lithuanian'] = 'Українська';

$GLOBALS["lang"]['Load Balancing'] = 'Балансування навантаження';

$GLOBALS["lang"]['Local'] = 'Головна';

$GLOBALS["lang"]['Local Area Network'] = 'Місцева мережа';

$GLOBALS["lang"]['local_port'] = 'Місцевий порт';

$GLOBALS["lang"]['Local Port'] = 'Місцевий порт';

$GLOBALS["lang"]['Local area network'] = 'Місцева мережа';

$GLOBALS["lang"]['Localhost'] = 'Пригоди';

$GLOBALS["lang"]['Localisation'] = 'Локалізація';

$GLOBALS["lang"]['Location'] = 'Місцезнаходження';

$GLOBALS["lang"]['Location A'] = 'Розташування';

$GLOBALS["lang"]['Location B'] = 'Місцезнаходження B';

$GLOBALS["lang"]['location_id'] = 'Імя користувача';

$GLOBALS["lang"]['Location ID'] = 'Імя користувача';

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

$GLOBALS["lang"]['Location Name'] = 'Імя користувача';

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

$GLOBALS["lang"]['Locations'] = 'Розташування';

$GLOBALS["lang"]['Locations in this'] = 'Місцезнаходження';

$GLOBALS["lang"]['log'] = 'Увійти';

$GLOBALS["lang"]['Log'] = 'Увійти';

$GLOBALS["lang"]['log_format'] = 'Формати';

$GLOBALS["lang"]['Log Format'] = 'Формати';

$GLOBALS["lang"]['Log Line'] = 'Логін';

$GLOBALS["lang"]['log_path'] = 'Увійти';

$GLOBALS["lang"]['Log Path'] = 'Увійти';

$GLOBALS["lang"]['log_rotation'] = 'Революція журналу';

$GLOBALS["lang"]['Log Rotation'] = 'Революція журналу';

$GLOBALS["lang"]['log_status'] = 'Реєстрація';

$GLOBALS["lang"]['Log Status'] = 'Реєстрація';

$GLOBALS["lang"]['Logging in'] = 'Пробити';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Найпопулярніші кросівки';

$GLOBALS["lang"]['Luxembourg'] = 'Люксембург';

$GLOBALS["lang"]['MAC Address'] = 'Адреса MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'Мапа Продукція';

$GLOBALS["lang"]['mac'] = 'Мапа';

$GLOBALS["lang"]['Mac'] = 'Мапа';

$GLOBALS["lang"]['Mac Address'] = 'Адреса електронної пошти';

$GLOBALS["lang"]['MacOS'] = 'МакОС';

$GLOBALS["lang"]['MacOS Packages'] = 'Пакети MacOS';

$GLOBALS["lang"]['Macao'] = 'Макао';

$GLOBALS["lang"]['Macedonia'] = 'Македонія';

$GLOBALS["lang"]['Madagascar'] = 'Малайзія';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Ведення обліку оцінки ризику та лікування';

$GLOBALS["lang"]['maintenance_expires'] = 'Обслуговування Закінчується';

$GLOBALS["lang"]['Maintenance Expires'] = 'Обслуговування Закінчується';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Зробіть свій за замовчуванням Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Зробіть цю установку колектора';

$GLOBALS["lang"]['Malawi'] = 'Мали';

$GLOBALS["lang"]['Malay'] = 'Мали';

$GLOBALS["lang"]['Malaysia'] = 'Малайзія';

$GLOBALS["lang"]['Maldives'] = 'Мальдіви';

$GLOBALS["lang"]['Mali'] = 'Мали';

$GLOBALS["lang"]['Malta'] = 'Мальта';

$GLOBALS["lang"]['Manage'] = 'Мапа';

$GLOBALS["lang"]['Manage Licenses'] = 'Управління ліцензіями';

$GLOBALS["lang"]['Manage in NMIS'] = 'Управління NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Управління інцидентами та невідповідностями';

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

$GLOBALS["lang"]['Match Order'] = 'Замовити матч';

$GLOBALS["lang"]['Match Process'] = 'Процес матчу';

$GLOBALS["lang"]['match_string'] = 'Стрінг матчу';

$GLOBALS["lang"]['Match String'] = 'Стрінг матчу';

$GLOBALS["lang"]['Matching Attribute'] = 'Матч Атрибут';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Матчі пристрої - Включаючи OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Налаштування пристроїв Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Зняття проводиться в наступному порядку';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Митрополитська мережа';

$GLOBALS["lang"]['Mexico'] = 'Українська';

$GLOBALS["lang"]['Micronesia'] = 'Мікронезія';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure поля';

$GLOBALS["lang"]['microtime'] = 'Мікрочас';

$GLOBALS["lang"]['Microtime'] = 'Мікрочас';

$GLOBALS["lang"]['minute'] = 'Мінуси';

$GLOBALS["lang"]['Minute'] = 'Мінуси';

$GLOBALS["lang"]['Minutes'] = 'Мінуси';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Протоколи з останнього аудиту більші, ніж';

$GLOBALS["lang"]['model'] = 'Модель';

$GLOBALS["lang"]['Model'] = 'Модель';

$GLOBALS["lang"]['model_family'] = 'СІмя моделей';

$GLOBALS["lang"]['Model Family'] = 'СІмя моделей';

$GLOBALS["lang"]['Modified'] = 'Модифіковано';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Змінення сценарію';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Моніторинг та вимірювання продуктивності ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Українська';

$GLOBALS["lang"]['month'] = 'Місяць';

$GLOBALS["lang"]['Month'] = 'Місяць';

$GLOBALS["lang"]['Montserrat'] = 'Монсеррат';

$GLOBALS["lang"]['More Information'] = 'Більше інформації';

$GLOBALS["lang"]['More Secure'] = 'Більше';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Більш детальну інформацію можна використовувати для атрибутів групи в діапазоні. Нижче показує SQL для пристроїв, які не бачили в діаграмі пироги, що містить останні діапазони дати.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Більш детальна інформація про відбілювання це можна знайти на корисному прокладці Stack Overflow';

$GLOBALS["lang"]['Morocco'] = 'Українська';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Найімовірніше, що брандмауер Windows (або третій учасник брандмауера) заперечує спробу підключення.<br/><br/>Будь ласка, ввійти на цільову машину Windows і перевірити налаштування брандмауера.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Більшість Open-AudIT ліцензовано з GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Матуся';

$GLOBALS["lang"]['Motherboard'] = 'Матуся';

$GLOBALS["lang"]['mount_point'] = 'Точка зору';

$GLOBALS["lang"]['Mount Point'] = 'Точка зору';

$GLOBALS["lang"]['mount_type'] = 'Тип кріплення';

$GLOBALS["lang"]['Mount Type'] = 'Тип кріплення';

$GLOBALS["lang"]['Mozambique'] = 'Мозамбік';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Повинні відповісти на Ping. Якщо встановити, Nmap спробує надсилати та слухати відповідь ICMP. Якщо пристрій не відповідає, не виникне подальше сканування.<br/>Попередньо пристрій не повинен реагувати на пінг для Open-AudIT для продовження сканування.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Потрібна відповідь на Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Мій AntiVirus підкаже мені, щоб заперечувати';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Мій час вимкнено в Open-AudIT';

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

$GLOBALS["lang"]['NOTE'] = 'ЗАМОВИТИ';

$GLOBALS["lang"]['NOTE #2'] = 'ПОТРІБНО #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'НАЙБІЛЬШЕ - Для отримання додаткової інформації про формати DateTime див. інформацію';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'НЕБЕ - Якщо ви хочете завантажити CSV, XML або JSON формат (введіть єдиний обліковий запис або повне зібрання) будуть відправлені фактичні дані. Не зашифрований рядок, фактичне Імя користувача, пароль, рядок спільноти тощо. Будь-які конфіденційні дані не відображаються в веб-інтерфейсі, але доступні через інші формати. Щоб запобігти цьому експорті конфігураційним елементом є дешифрування_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'НЕБЕ - Кріплення в даних, що подається, повинна бути використана як-і (не замінено на інші приклади вище).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ПРИМІТКА - Ви можете запобігти простим текстовим обліковим записам, що відображаються нижче, встановивши пункт конфігурації для <code>decrypt_credentials</code> до <code>n</code>й';

$GLOBALS["lang"]['name'] = 'Імя';

$GLOBALS["lang"]['Name'] = 'Імя';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Назва: Імя, яку ви надаєте цій галузі. В ідеалі вона повинна бути унікальною.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Порти Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Порти Netstat використовують поєднання номеру порту, протоколу та програми. Якщо вся політика проходить.';

$GLOBALS["lang"]['Network'] = 'Мережа';

$GLOBALS["lang"]['network_address'] = 'Адреса мережі';

$GLOBALS["lang"]['Network Address'] = 'Адреса мережі';

$GLOBALS["lang"]['Network Discovery'] = 'Мережа Discovery';

$GLOBALS["lang"]['network_domain'] = 'Статус на сервери';

$GLOBALS["lang"]['Network Domain'] = 'Статус на сервери';

$GLOBALS["lang"]['Network Types'] = 'Типи мережі';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Мережевий тип встановлюється на локальну мережу за замовчуванням, але може бути змінений користувачем, оскільки вони дивляться. Підтримувані типи нижче (з урахуванням Вікіпедії).<br/><br/>Мережа може характеризується фізичними можливостями або його організаційним призначенням. Використання мережі, включаючи авторизацію користувачів і права доступу, відрізняється відповідно.';

$GLOBALS["lang"]['networks'] = 'Мережі';

$GLOBALS["lang"]['Networks'] = 'Мережі';

$GLOBALS["lang"]['Networks Generated By'] = 'Мережі Generated By';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Мережі оновлено з кожним відкриттям. Використовуються такі як IPs Доступні та IP-адреси, разом з Gateways, DHCP та DNS-серверами.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Мережі відповідають різним чином залежно від того, як вони налаштовані. Деякі маршрутизатори та / або брандмауери можуть відповісти <i>від імені</i> IP-адреса на іншу сторону своїх інтерфейсів на сервер Open-AudIT. Це досить поширене для перегляду звіту Nmap для SNMP (UDP порт 161), щоб відповісти як відкриті пристрої, які роблять і не існують. Це вдається в оману, як немає пристрою в цьому IP, але він закінчується записом пристрою в базі даних. 99,9% від часу, це не Open-AudIT, ні навіть Nmap, але мережа, що викликає це питання. Тепер ми маємо варіанти обробки відкритих портів, як відкриті, так і закриті, ми можемо ліквідувати багато цієї конфігурації. Користувачі підприємства навіть мають можливість змінити це на основі відкриття (більше, ніж просто за допомогою пункту Medium (Classic) і вище).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Мережі з використанням маски CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Нова назва будівлі';

$GLOBALS["lang"]['New Caledonia'] = 'Нова Каледонія';

$GLOBALS["lang"]['New Floor Name'] = 'Новий поверх';

$GLOBALS["lang"]['New Room Name'] = 'Новий номер';

$GLOBALS["lang"]['New Row Name'] = 'Новий Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Нова Зеландія';

$GLOBALS["lang"]['News'] = 'Новини';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Новини перевіряє кожен раз, коли ви ввійшли на оновлені запити та пакети, рекомендації щодо конфігурації, оголошення про випуск, повідомлення про блог і багато іншого.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Новини - це наш шлях, щоб тримати вас в курсі останніх виправлень, анонсів, оновлення запитів, версій програмного забезпечення та багато іншого.<br/><br/>Ви не повинні тримати на вершині вікі або перевірити нові релізи, ми можемо надсилати ці на вас!';

$GLOBALS["lang"]['next_hop'] = 'Далі Хоп';

$GLOBALS["lang"]['Next Hop'] = 'Далі Хоп';

$GLOBALS["lang"]['next_run'] = 'Пробіг';

$GLOBALS["lang"]['Next Run'] = 'Пробіг';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Далі натисніть <i>Створення власної програми</i>й';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Далі натисніть OK, потім клацніть правою кнопкою миші на службі Apache 2.4 і натисніть кнопку перезавантаження. Дядько!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Далі клацніть правою кнопкою миші на службі Apache2.4 і виберіть Властивості, потім натисніть кнопку Вхід на вкладку.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap не може визначити, чи відкрився порт, оскільки фільтрація пакета запобігає його зондам, що досягають порту. Фільтрування може бути з виділеного пристрою брандмауера, правила маршрутизатора або програмного забезпечення для брандмауера. Ці порти розчаровують атаки, тому що вони надають так мало інформації. Іноді вони відповідають повідомленням про помилку ICMP, такі як тип 3 код 13 (повідомлення ненадійних: комунікація адміністративно заборонена, але фільтри, які просто попадають зонди без відповіді набагато частіше. Це змушує Nmap зберігати кілька разів просто у випадку, якщо зонд був скиданий через мережеве застою, а не фільтрування. Це уповільнює сканування різко.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Порти Nmap в цьому стані, коли не можна визначити, чи відкриваються порти або фільтруються. Це відбувається для сканування типів, в яких відкриті порти не дають відповіді. Недолік відповідей також може означати, що фільтр пакету знизив зонд або будь-яку відповідь, яку він лікував. Так Nmap не знає про те, чи відкриваються порти чи фільтруються. UDP, протокол IP, FIN, NULL, і Xmas сканує класифікувати порти таким чином.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'На дні цієї пов\'язаної сторінки';

$GLOBALS["lang"]['nmis_business_service'] = 'Бізнес-послуги Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Бізнес-послуги Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Замовник';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Замовник';

$GLOBALS["lang"]['nmis_group'] = 'Група Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Група Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Управління';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Управління';

$GLOBALS["lang"]['nmis_name'] = 'Імя користувача';

$GLOBALS["lang"]['Nmis Name'] = 'Імя користувача';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Немає пристроїв в базі даних.';

$GLOBALS["lang"]['Node'] = 'Нода';

$GLOBALS["lang"]['None'] = 'Ні';

$GLOBALS["lang"]['Norfolk Island'] = 'Острів Норфолк';

$GLOBALS["lang"]['Normal'] = 'Нормативно';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Північні Маріанські острови';

$GLOBALS["lang"]['Norway'] = 'Норвегія';

$GLOBALS["lang"]['Norwegian'] = 'Норвезька';

$GLOBALS["lang"]['Not Applicable'] = 'Не застосовувати';

$GLOBALS["lang"]['Not Checked'] = 'Не перевірити';

$GLOBALS["lang"]['Not Equals'] = 'Нема рівних';

$GLOBALS["lang"]['Not In'] = 'Не в';

$GLOBALS["lang"]['Not Like'] = 'Немовля';

$GLOBALS["lang"]['Not Set'] = 'Не встановити';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Не кожен комп\'ютер зможе успішно завершити еталон. Ми бачили в деяких випадках, які не перевірили причини, які не відповідають нашим контролем. Логи повинні допомогти вам у правому напрямку для цих елементів.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Не в списку (comma seperated)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Не зазвичай використовується. Якщо встановити, це вимагає пристрою, щоб мати відкритий порт (в залежності від параметрів сканування), щоб розглянути відповідь. A MAC адреса, відповідь arp або відповідь ping не вважається достатнім для того, щоб розглянути відповідь. Корисно, якщо маршрутизатор або брандмауер між сервером Open-AudIT і цільовим IP відповідає на сканування портів від імені IPs.';

$GLOBALS["lang"]['Note'] = 'Зареєструватися';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Примітка - Вибір батька автоматично надасть доступ до своїх дітей (хоча вона не буде показана тут).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Зауважте, що ліцензія 100 пристроїв Enterprise не містить підтримки.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Примітка, вам може знадобитися зробити скрипт, який виконуваний з';

$GLOBALS["lang"]['Notes'] = 'Нотатки';

$GLOBALS["lang"]['notes'] = 'Нотатки';

$GLOBALS["lang"]['Notice'] = 'Про нас';

$GLOBALS["lang"]['notin'] = 'Ноти';

$GLOBALS["lang"]['Notin'] = 'Ноти';

$GLOBALS["lang"]['November'] = 'Листопад';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Тепер для ідентифікатора підписки натисніть кнопку Всі Послуги, підписки та копіювання.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Тепер ми повинні забезпечити доступ до програми Azure Active Directory до вашої підписки.<br/><br/>Натисніть на ресурсні групи, а потім ресурсну групу, яку ви хотіли б мати доступ до Azure Active Directory.<br/><br/>Натисніть Додати. Роль має бути внеском, а потім шукати додаток (Open-AudIT). Потім натисніть кнопку Зберегти.<br/><br/>Тепер додаток має доступ до підписки, тому ми можемо зробити виклики API. Заявки API будуть вимагатися від імені програми, а не Вашого користувача.';

$GLOBALS["lang"]['nvd_json'] = 'Нвд Джесон';

$GLOBALS["lang"]['Nvd Json'] = 'Нвд Джесон';

$GLOBALS["lang"]['ORDER BY'] = 'ЗАМОВИТИ';

$GLOBALS["lang"]['OS'] = 'ОС';

$GLOBALS["lang"]['OS Families'] = 'Сім\'ї OS';

$GLOBALS["lang"]['OS Family'] = 'СІмя OS';

$GLOBALS["lang"]['OS Group'] = 'Група OS';

$GLOBALS["lang"]['OUTPUTS'] = 'ОПУТКИ';

$GLOBALS["lang"]['oae_manage'] = 'Oae Управління';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Управління';

$GLOBALS["lang"]['object_ident'] = 'Об\'єкт Ident';

$GLOBALS["lang"]['Object Ident'] = 'Об\'єкт Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Підтримка топ-менеджменту';

$GLOBALS["lang"]['October'] = 'Жовтень';

$GLOBALS["lang"]['Offset'] = 'Оновити';

$GLOBALS["lang"]['Okta'] = 'Окта';

$GLOBALS["lang"]['Oman'] = 'Оман';

$GLOBALS["lang"]['omk_uuid'] = 'Омк Уїд';

$GLOBALS["lang"]['Omk Uuid'] = 'Омк Уїд';

$GLOBALS["lang"]['On'] = 'Про нас';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'На Windows Open-AudIT використовує WMI як це основний метод аудиту. Windows має неординарну репутацію, де працює віддалений WMI. Він, як правило, або <i>просто робота</i> або деякі секретні елементи на ціль вимагає зміни. Якщо ви відчуваєте труднощі аудиту віддалених ПК Windows, ми створили скрипт, який називається test_windows_client.vbs. Ви можете запустити цей скрипт <strong>локально</strong> на машині в питанні, після підписання як користувача, який використовується Open-AudIT для проведення аудиту. Сцена робить <strong>немає змін</strong> до цільових пристроїв. Він перевіряє більшість (не всі) елементів нижче і створює теги PASS, FAIL і INFO для різних властивостей. УВАГА - Якщо ваша цільова система перевіряється правильно, ви не повинні змінити будь-які налаштування. Деякі з нижче не існує на комп\'ютерах Windows, які можуть бути перевірені і деякі існують. Тільки зміни налаштувань, якщо ваші відкриття на певних ПК не працюють як призначені.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'На сторінці Список завдань натисніть кнопку <i>Додати новий</i> кнопка для налаштування завдання.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'На поле <i>Стрінг матчу</i> Вам необхідно надати Імя програмного забезпечення, яке ви хочете відстежувати. Ви можете використовувати знак відсотка (%) як дикийкарт, в якому потрібно.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'На наступній сторінці ви зможете вибрати ключі доступу і побачити ключ або створити новий ключ.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'На цільовому ПК Windows запустіть утиліту DCOM і перевірте (або встановити) атрибути нижче. Початок -> Запуск, Введіть DCOMCNFG і натисніть кнопку OK. Це відкриє вікно DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'У верхній правий (під меню бар) ви побачите кілька гудзиків. Це дозволяє вибрати інший прилад, встановити поточну панель інструментів для вашого будинку (якщо вона вже не є) і редагувати поточний прилад (якщо у вас є дозвіл).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Не Хмарно';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Після створення додаткового поля можна використовувати в запитах і групах, як і будь-який інший атрибут в базі даних.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Після того, як ви прокоментували, ваш сертифікат буде ввірений, але також може не вводити цю перевірку, якщо ви використовуєте сертифікати самопризначення і не налаштовує ваш сервер правильно.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Після того, як скрипт працює на цілі, слід видалити скрипт самостійно.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Після того, як ці початкові запити (snmp, ssh, wmi) завершуються, якщо пристрій підтримується скриптами аудиту (Windows, Linux, OSX, AIX, HP-UX, Solaris і ESXi), правильний скрипт аудиту буде скопійований на ціль і виконано. Скрипт аудиту буде самостійно видаляти після завершення. В результаті буде зберігатися на цільовій машині як файл XML. Сервер Open-AudIT отримає файл результату для обробки та видалення файлу результату на ціль. Розташування скрипту аудиту копіюється на цільовому пристрої (принаймні для проведення перевірок SSH) налаштовується шляхом редагування пункту «відкриття»_linux_script_directory config. За замовчуванням він встановлюється на /tmp/. Це може знадобитися зміни, якщо /tmp не має ніякого набору. Після обробки результату і деталі пристрою, оновлено в межах Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Після того, як ви натиснете кнопку, Open-AudIT запропонує процес ініціювання відкриття та повернення користувача до сторінки відомостей про відкриття. Новий спасований процес займає налаштування параметрів відкриття та виконує команди Nmap для визначення початкового списку IP-адрес для сканування (або запитів Active Directory, якщо цей тип використовується). Кожна IP-адреса сканується в чергу. Після завершення початкового процесу (і є IP-адреси, які будуть відскановані в черзі) кількість процесів буде спрощено для подальшого сканування кожного IP паралельно. Ця кількість процесів налаштована в конфігурації, відредагувати атрибут <i>Місцезнаходження</i>й За замовчуванням це встановлюється до 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Після того, як ви вибрали ваші пристрої для редагування, натисніть кнопку олівець на верхній правій таблиці.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Після того, як ви зробили це, Open-AudIT спробує перевірити ваші дані щодо логотипу користувача на налаштованому методі Auth. Якщо користувач має дійсні облікові дані та <code>use_authorisation</code> Набір, Open-AudIT попросить список груп, які користувач належить. Якщо користувач знаходиться в відповідних групах для ролей Open-AudIT і Orgs, ці ролі і Orgs будуть застосовуватися до цього користувача.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Після того, як ви генерували базову визначення, ви можете перепланувати її, щоб працювати проти зазначеної групи пристроїв.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Після того, як у вас є ті елементи, в Open-AudIT Ви можете перейти до меню -> Знайти -> Хмари -> Спілкування Хмари, виберіть <i>Amazon AWS</i> введіть і вставте їх. Діон.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Після того, як у вас є ті елементи, в Open-AudIT Ви можете перейти до меню -> Знайти -> Хмари -> Спілкування Хмари, виберіть <i>Майкрософт Azure</i> введіть і вставте їх. Діон.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Після того, як у вас є ваші хмарні облікові дані, це просто справа створення нової хмари і запуску відкриття - або викладання перших/футюрних відкриттів. Переконайтеся, що у вас також є облікові дані, необхідні для входу на хмарні машини, і це все зроблено для вас, як регулярне відкриття. Регулятори для вашої хмари';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Один з <code>3x2</code>й <code>4x2</code>й <code>4x3</code> або <code>4x4</code>й';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Мережа Campus Area, Cloud Network, Private Network, Enterprise Private Network, Home Area Network, Local Area Network, Мережа митрополитів, Пасивна оптична локальна мережа, Особиста мережа, Мережа зберігання речей, Мережа системних мереж, Віртуальна приватна мережа, мережа широкої площі, бездротова локальна мережа.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Відновлення даних, оцінка, передпродуктивність, виробництво, тестування, навчання, тестування';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Один з виділених, делегованих, планування, зарезервовані, нерозташовані, невідомі, некеровані. За замовчуванням виділено.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Один з <code>active directory</code> або <code>openldap</code>й';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Один з: антивірус, резервне копіювання, брандмауер, схвалений, заборонений, ігнорується або інші.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Один інший елемент, щоб бути обережним - переконайтеся, що ви використовуєте Імя користувача (або fqdn) вашого LDAP Сервер, який відповідає те, що в сертифікаті (не тільки IP-адреса LDAP серверів) при створенні входу LDAP в Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Онлайн Документація';

$GLOBALS["lang"]['Open'] = 'Відкрито';

$GLOBALS["lang"]['Open Data'] = 'Відкриті дані';

$GLOBALS["lang"]['Open Source'] = 'Відкритий джерело';

$GLOBALS["lang"]['Open-AudIT'] = 'Відкритий';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Відкритий Код ЄДРПОУ доступний на GitHub. Ви хочете перевірити будь-який код, який ви хочете, і тому що він відкритий джерело - ви також можете попросити нам про будь-які питання, які ви маєте або повідомити будь-які висновки. Ми завжди більше, ніж щасливі внески коду, звіти про вразливість або навіть прості питання. Ми допоможемо.<br/><br/>Аудит скриптів самі (Windows, Linux, MacOS, та ін) навмисно написані в читаному рідному скрипті оболонки (VBScript для Windows, Bash для *nix). Ви можете побачити саме те, які команди виконуються. Ви можете видалити будь-які команди, які вам не потрібно. Ви можете звернутися до третьої сторони, щоб перевірити код для вас і (якщо ви хочете) звітувати будь-які результати.<br/><br/>Відкритий Підприємство виконує додаткові комерційні функції для спільноти Open-AudIT. Він входить до єдиного складеного файлу без зовнішніх залежностей. Де підприємство виконує функцію (s), якщо ви зацікавлені в будь-яких питаннях З Вами зв\'яжеться: Спробуйте з іншим постачальником комерційного програмного забезпечення!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Вибір пристрою Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Відкритий Підприємство має можливість вибрати з попередньо визначеного списку варіантів сканування відкриття, а також налаштувати індивідуальні параметри для відкриття.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Високомасштабне гнучке відкриття та аудиторське рішення для великих мереж. Всі функції Професійні плюс: базиліки, Аудит файлів, Cloud Discovery, Rack Management, Configurable Роль на основі контролю доступу, включаючи Active Directory та LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Назва поля';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Статус на сервери';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Параметри Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional і Enterprise включають розширені функції звітування, включаючи часові, історичні та муті-query на основі звітних функцій у декількох форматах.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Відкритий Професійні можливості вибрати з попередньо визначеного списку варіантів сканування відкриття, за відкриття.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Професіонал Open-AudIT Світ';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Відкритий IT може бути налаштований для використання серверів LDAP (Microsoft Active Directory та / або OpenLDAP) для автентифікації та авторизації користувача та крім того, для створення облікового запису користувача у Open-AudIT за допомогою призначених ролей та orgs на основі членства групи LDAP. Також можна використовувати';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Відкритий IT може працювати на вашому сервері в центрі даних. Не потрібно доступу до інтернету. Навіть установка на Linux, де ми використовуємо диспетчер пакетів дистриб\'ютора для наших передумов можна заперечувати, використовуючи вбудовану та захищену команду-затверджену репозиторію пакету.<br/><br/>Відкритий IT не зберігає ваші дані у хмарі. Інформація про ліцензування може бути надана без доступу до Інтернету з сервера Open-AudIT.<br/><br/>Звичайно, це простіше дозволити доступ до Інтернету для завантаження пакетів (включаючи виправлення безпеки) для вашого розподілу, але це до вас і політики безпеки. Відкрити-Аудит не потребує інтернету.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT може завантажити, використовувати звіти про вразливість NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Відкритий ІТ може показати один з декількох мов. Як поліпшити це?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Відкритий IT може зберігати інформацію в додаткових полях, які асоціюються з кожним пристроєм.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT може використовувати Microsoft Entra (попередньо відомий як Microsoft Azure Active Directory) як метод автентифікації. Це означає, що ваш користувач в Open-AudIT може натиснути кнопку Logon за допомогою кнопки Entra і використовувати їх значення Entra для логотипу. Для того, щоб користувач мав потребу вже існувати в рамках Open-AudIT';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT може використовувати OKTA як метод автентифікації. Це означає, що ваш користувач у Open-AudIT може натиснути кнопку Logon за допомогою кнопки OKTA та використовувати свої облікові дані OKTA для логотипу. Для того, щоб користувач мав потребу вже існувати в рамках Open-AudIT (і бути призначеними Рольами та Orgs), але не потрібно пам\'ятати окремий набір облікових даних логотипів.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT поставляється з багатьма запитами, вбудованими. Якщо вам потрібна конкретна запиту і жодна з попередньо упакованих запитів, то це досить легко створити новий і завантажувати його на Open-AudIT для запуску.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT має JSON відновний API для використання як в веб-інтерфейсі, так і через запити JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Відкритий IT має систему гранульованих дозволів для визначення того, що користувач може зробити, і предмети, які він може це зробити. Open-AudIT може бути повністю самодостатнім, або використовувати Active Directory або OpenLDAP для автентифікації та/або авторизації.<br/><br/>Він повністю до адміністратора Open-AudIT, як вони будуть любити контроль доступу до ролі.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Відкритий IT має потужний двигун виявлення змін. Будь-які атрибути пристрою, які додаються, видалені або змінені будуть виявлені і зберігаються. Ці зміни можуть бути повідомлені і відповідні дані, підтверджені тим, що очікується від зміни компанії та процесу виходу.<br/><br/>При перевірці пристрою атрибути діляться на розділи, які відповідають таблицям бази даних.<br/><br/>Кожен пристрій (комп\'ютер, маршрутизатор, принтер та ін) має запис в <code>devices</code> стіл. Кожен запис у таблиці пристроїв має <code>id</code> стовпчик. Це унікальне значення - це автозбільшення ідентифікатора.<br/><br/>Коли результат аудиту обробляється, кожен пункт в кожному розділі має результат аудиту порівняно з тим, що знаходиться в базі даних.<br/><br/>Для кожної секції, якщо ключові стовпчики (див. нижче таблиці) містять ідентичні значення, він вважається вже встановленим і має його <code>last_seen</code> атрибут оновлений. Немає змін_log запис створюється.<br/><br/>Якщо будь-який з ключових стовпчиків не відповідає, він вважається новим атрибутом і вставляється. А.А. <code>change_log</code> запис створюється, якщо пристрій вже присутні інші атрибути в таблиці.<br/><br/>При завершенні обробки перевірок будь-які елементи бази даних, які не були оновлені (або вставлені) вважаються не присутніми. Про нас <code>current</code> атрибут для цього елемента встановлюється до <i>п</i> та запис змін_логів генерується.<br/><br/>Отже, ми можемо визначити, чи є щось в даний час - поточний стовпчик <i>й</i>й<br/><br/>Ми можемо визначити, коли щось було спочатку виявлено - <i>веб камера</i>й<br/><br/>Ми можемо визначити, чи було встановлено щось після початкового аудиту - перший погляд буде різним у компоненті та таблицях пристроїв.<br/><br/>Ми можемо визначити, чи не встановлено щось, але раніше - струм = <i>п</i>й<br/><br/>Ми можемо визначити останній час, який ми виявили елемент - last_seen.<br/><br/>У будь-який момент ми можемо визначити, що було на системі - за допомогою таблиці аудиту_log і вибрати відповідні компоненти на основі першого_seen і last_seen.<br/><br/>Кожна секція і її відповідність ключових стовпчиків нижче.<br/><br/>ОНОВЛЕННЯ - Є деякі винятки, як докладно нижче.<br/><br/>*1 - Для мережевих карток, якщо комп\'ютер є VMware Esx машина, він також використовує net_index і стовпчики з\'єднання.<br/><br/>*2 - Для розділів, f комп\'ютер є AIX машиною, ми використовуємо назву розділу.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT - це програма, яка призначена для відстеження та звітування про ваші дані та налаштування активів. Open-AudIT може розповісти <i>Що на вашій мережі?</i>, як він налаштований і якщо є будь-які зміни. Open-AudIT надає sleek, гнучкі та прості у використанні платформу для виявлення пристроїв, автоматизації IT-аудиту та управління запасами прямо з коробки.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Відкритий ІТ дозволяє легко редагувати атрибути декількох пристроїв одночасно.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Відкритий Для створення файлів, завантаження результатів та ін. Будь ласка, вкажіть нижче.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT надає багато вбудованих запитів і робить його простими для створення власної.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Відкритий IT кораблі з вбудованими ролями для адміністратора, org_адміністрування та користувача.<br/><br/>Зазвичай користувач, який є адміністратором програми Open-AudIT, повинен мати адміністратор і можливі ролі адміністратора.<br/><br/>Користувач може мати декілька ролей. Якщо користувач має ролі користувача та org_адміністратора, вони зможуть створювати місця, оскільки org_адміністратор надає цю дозвіл, хоча роль користувача не є.<br/><br/>Роль адміністратора дозволяє отримати доступ до збірок, таких як конфігурація, бази даних, групи, ldap серверів, журнали, запити та ролі. Глобальні елементи, які впливають на всю програму.<br/><br/>Роль org_admin зазвичай дозволяє створювати, читати, оновити та видаляти дії для будь-якої колекції, яка містить стовпець org_id. Практично всі дані, крім випадків, зазначених вище колекцій, будуть міститися <code>org_id</code> стовпчик.<br/><br/>Як правило, користувач дозволяє читати тільки доступ до всіх елементів з стовпчиком org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Відкритий IT кораблі з вбудованими ролями для адміністратора, org_адміністрування та користувача.<br/><br/>Зазвичай користувач, який є адміністратором програми Open-AudIT, повинен мати адміністратор і можливі ролі адміністратора.<br/><br/>Користувач може мати декілька ролей. Якщо користувач має ролі користувача та org_адміністратора, вони зможуть створювати місця, оскільки org_адміністратор надає цю дозвіл, хоча роль користувача не є.<br/><br/>Роль адміністратора дозволяє отримати доступ до збірок, таких як конфігурація, бази даних, групи, ldap серверів, журнали, запити та ролі. Глобальні елементи, які впливають на всю програму.<br/><br/>Роль org_admin зазвичай дозволяє створювати, читати, оновити та видаляти дії для будь-якої колекції, яка містить стовпець org_id. Практично всі дані, крім деяких зборів, зазначених вище, будуть містити org_id стовпчик.<br/><br/>Як правило, користувач дозволяє читати тільки доступ до всіх елементів з стовпчиком org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Відкриті AudIT кораблі з декількома попередньо налаштованими Dashboards. Якщо ви є професійним користувачем, ви можете вибрати між двома з них і встановити його як вашу сторінку за замовчуванням, коли ви логотипуєте. Якщо ви є користувачем Enterprise, ви не тільки можете вибрати між п\'яти попередньо налаштованих панелей, але ви також маєте можливість створити свій власний.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Відкрити-AudIT слід встановити на 64bit Windows <strong>Статус на сервери</strong> тільки системи. Windows 10 і Windows 11 є <strong>нема</strong> підтримка.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT використовує Nmap у своїй функції Discovery. Пристрої Nmap для відкритих портів. Пристрої ідеально повинні реагувати на відкриті для робочих портів. Пристрої часто не відповідають цим. Нижче наведено різні відповіді.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT використовує Nmap у своїй функції Discovery. Без Nmap, Open-AudIT не працює належним чином. Кожна установка Open-AudIT передбачає встановлення Nmap та перевірить її на сторінках Discovery. Більше інформації про Open-AudIT та Nmap тут';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT використовує Nmap у своїй функції Discovery. Без Nmap, Open-AudIT не працює належним чином. Кожна установка Open-AudIT передбачає встановлення Nmap і перевірить її на сторінках Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Відкритий IT використовує облікові дані для доступу до ваших пристроїв. Ці зашифровані і зберігаються, як ви очікуєте.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Відкрито Аудит був написаний англомовним Австралійським. Все в додатку використовує англійське слово. Однак Open-AudIT завжди підтримує декілька мов для відображення. Ці переклади не завжди вірні, тому що розробники не володіють рідною мовою кожного перекладу.<br/><br/>Що робити, якщо щось не вірно в перекладі?';

$GLOBALS["lang"]['OpenLDAP'] = 'Відкрито';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap встановлюється';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Відкриття програми підтримки?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Користувач Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Користувач Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Атрибут користувачів';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Атрибут користувачів';

$GLOBALS["lang"]['open|filtered'] = 'Головна';

$GLOBALS["lang"]['Open|filtered'] = 'Головна';

$GLOBALS["lang"]['Operating System'] = 'Операційна система';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Робоча система Family Contains';

$GLOBALS["lang"]['Operating Systems'] = 'Операційні системи';

$GLOBALS["lang"]['Operators'] = 'Оператори';

$GLOBALS["lang"]['optical'] = 'Оптичний';

$GLOBALS["lang"]['Optical'] = 'Оптичний';

$GLOBALS["lang"]['Optimized'] = 'Оптимізований';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Додатково #1 - Змінення даних';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Варіант #2 - Змінення файлу перекладу';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Додатковий агент на основі аудиту';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Додаткова версія як аудиторська компанія Open-AudIT. Використовуйте знак відсотка % як дикої картки.';

$GLOBALS["lang"]['options'] = 'Варіанти';

$GLOBALS["lang"]['Options'] = 'Варіанти';

$GLOBALS["lang"]['Options, options, options'] = 'Варіанти, варіанти, варіанти';

$GLOBALS["lang"]['Or'] = 'Оригінал';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Або виберіть з поля нижче.';

$GLOBALS["lang"]['org_descendants'] = 'Org Відчайники';

$GLOBALS["lang"]['Org Descendants'] = 'Org Відчайники';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Організація';

$GLOBALS["lang"]['organisation'] = 'Організація';

$GLOBALS["lang"]['Organisation Descendants'] = 'Организационно-правовая форма';

$GLOBALS["lang"]['Organisations'] = 'Організація';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Організація може розширити і підвищити рівень деталей, що зберігаються на кожному відкритому пристрої, використовуючи спеціальні поля і відкрити ядро дозволяє легко інтегруватися в CMDB, управління подіями і кастингові системи.';

$GLOBALS["lang"]['orgs'] = 'Органи';

$GLOBALS["lang"]['Orgs'] = 'Органи';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Імя';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs в Open-AudIT є ключовим елементом. Користувач має первинну Org, а також список організацій, які вони можуть отримати доступ. Користувач об\'єднує це з переліком призначених ролей, які визначають які дії, які вони можуть приймати на предметах, призначених органам, які мають доступ. Поєднання користувачів <i>оргс</i> і <i>рольи</i> Визначте, що вони можуть і не можуть робити в межах Open-AudIT.<br/><br/>Більшість елементів в Open-AudIT присвоєно Org. Пристрої, локації, мережі та ін.<br/><br/>Orgs може мати дитини Orgs. Думка організаційної діаграми (дерева) структури. Якщо користувач має доступ до конкретного Оргкомітету, більшість часу (не завжди) вони також мають доступ до цього Оргкомітету.';

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

$GLOBALS["lang"]['os_family'] = 'СІмя Ос';

$GLOBALS["lang"]['Os Family'] = 'СІмя Ос';

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

$GLOBALS["lang"]['os_name'] = "Імя";

$GLOBALS["lang"]['Os Name'] = "Імя";

$GLOBALS["lang"]['os_version'] = 'Версія';

$GLOBALS["lang"]['Os Version'] = 'Версія';

$GLOBALS["lang"]['Other'] = 'Інше';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Крім цього обмеження ви можете вибрати атрибути, як це потрібно. Це гарна ідея для використання меню';

$GLOBALS["lang"]['Others'] = 'Інші';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Ми можемо самі зателефонувати одержувачу і узгодити зручний час. Так ми відправляємо вихід за замовчуванням для інтеграції за замовчуванням з коробки. Використовуйте правила відповідності за замовчуванням, але також увімкніть відповідність на IP-адресу.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Наші приклади будуть використовуватися <i>Тип</i> стовпчик.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Наша рама завантажує файли тут для обробки, потім видаляє їх. Мислити результати аудиту та ін.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Наша мета з початковим випуском інтеграції була спеціально для інтеграції NMIS до Open-AudIT <i>просто робота</i>й Якщо ви використовуєте програми на Linux, ви можете буквально натиснути кнопку, щоб виконати інтеграцію. Більше не потрібно. Повідомляючи, що інтеграція сама вкрай конфігурована - так, якщо щось не до ваших вподобань, її можна легко змінити.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Наша нова функція називається Vulnerabilities дає вам можливість швидко визначити, якщо будь-які пристрої постраждалі від будь-якого CVE (Common Vulnerability Exposure) - але як?<br/><br/>Спочатку постійно споживає вихід з Nist NVD корму. Ми приймаємо це і застосовуємо кілька обмежень, після чого вилучення постраждалих програм і побудови запиту SQL для звітності. Ваша електронна адреса захищена від спам-ботів, розміщених на сайті. Коли він отримує новий рекорд вразливості, він веде до бази даних і зберігається результат. Кожен раз пристрій обробляється, всі відповідні вразливості знову виконуються і зберігаються результат. Це означає при перегляді списку вразливостей, нам не потрібно розрахувати всі уражені пристрої - ми вже маємо результат. Коли ви переглядаєте індивідуальний запис вразливостей, ми дійсно повторюємо результат для цієї спільної вразливості.<br/><br/>Так, ви завжди будете<br/><br/>Крім цього, ми також розраховуємо результат всіх вразливостей для всіх пристроїв щодня (зазвичай в тихий час, скажемо 2ам).<br/><br/>У вашому екземплярі Open-AudIT ми можемо вибрати постачальників, які ви піклуєтеся про. i.e. немає використання записів вразливостей від постачальника, програмне забезпечення якого ви не використовуєте або встановили. За замовчуванням, наш список постачальників є Adobe, Apple, Cisco, Google, Microsoft, Mozilla та Redhat.<br/><br/>Це всі звуки дуже прості, але за лаштунками <b>лот</b> йде. Наприклад, запис CVE містить список уражених програмного забезпечення - але імена програмного забезпечення не відповідають, що ми отримуємо при перевірці комп\'ютера. Хороший приклад - Apache. Зазвичай запис CVE буде сказати, що постраждале програмне забезпечення є http_server. У реальності це з\'являється як apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - та інші. Отже, ми повинні спочатку визначити, що таке власне Імя програми, яку ми отримуємо, коли ми попросимо комп\'ютер, і може бути кілька імен. Після того, як ми повинні записати запис CVE і створити відповідні заяви SQL. Дозволити для декількох назв програм, як вище, так і декількох версій, діапазонів версій, і навіть декількох різних одиниць програмного забезпечення (наприклад, Thunderbird і Firefox в одному CVE). І ваш екземпляр Open-AudIT повинен прийняти це і застосувати Orgs фільтрування і. І це просто єдиний CVE. Що про визначення, які ви повинні мати і не мати? Що про додавання постачальника до списку пізніше? Так багато речей, щоб розглянути!<br/><br/>Крім звичайної звітності, ми також маємо кілька нових віджетів, доступних для Dashboards, на основі даних Vulnerabilities.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec - це безкоштовна реконструкція програми SysInternal/Microsofts. PAExec прагне бути скиданням заміни для PsExec, тому використання командного рядка ідентична, з додатковими опціями також підтримується. Ця робота спочатку надихнула Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'Українська';

$GLOBALS["lang"]['POD'] = 'ПОД';

$GLOBALS["lang"]['POSTing data'] = 'Завантаження даних';

$GLOBALS["lang"]['Package'] = 'Пакети';

$GLOBALS["lang"]['packages'] = 'Пакети';

$GLOBALS["lang"]['Packages'] = 'Пакети';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Пакети використовуються для повідомлення про такі речі, як <i>заборонене програмне забезпечення</i>, Антивірус на серверах і т.д.<br/><br/>Open-AudIT надає віджети, які збираються також поставляють репоти для детемінування стану антивірусу, брандмауера та іншого програмного забезпечення.';

$GLOBALS["lang"]['pagefile'] = 'Веб-сайт';

$GLOBALS["lang"]['Pagefile'] = 'Веб-сайт';

$GLOBALS["lang"]['Pakistan'] = 'Пакистан';

$GLOBALS["lang"]['Palau'] = 'Пау';

$GLOBALS["lang"]['Palestinian Territory'] = 'Палестинська територія';

$GLOBALS["lang"]['Panama'] = 'Пані';

$GLOBALS["lang"]['Papua New Guinea'] = 'Папуа Нова Гвінея';

$GLOBALS["lang"]['Paraguay'] = 'Парагвай';

$GLOBALS["lang"]['Parameters'] = 'Параметри';

$GLOBALS["lang"]['Paranoid'] = 'Параніда';

$GLOBALS["lang"]['Parent'] = 'Батьки';

$GLOBALS["lang"]['parent_id'] = 'Імя користувача';

$GLOBALS["lang"]['Parent ID'] = 'Імя користувача';

$GLOBALS["lang"]['parent_name'] = 'Імя користувача';

$GLOBALS["lang"]['Parent Name'] = 'Імя користувача';

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

$GLOBALS["lang"]['Permission'] = 'Проживання';

$GLOBALS["lang"]['Permission Required'] = 'Потрібна комісія';

$GLOBALS["lang"]['permissions'] = 'Дозвіли';

$GLOBALS["lang"]['Permissions'] = 'Дозвіли';

$GLOBALS["lang"]['Persian'] = 'Перська';

$GLOBALS["lang"]['Personal Area Network'] = 'Особистий кабінет мережі';

$GLOBALS["lang"]['Personal area network'] = 'Особиста мережа';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Пиріжки повинні повернути Імя або Імя, опис або my_description і кількість.';

$GLOBALS["lang"]['ping'] = 'Пінг';

$GLOBALS["lang"]['Ping'] = 'Пінг';

$GLOBALS["lang"]['Ping Target'] = 'Пінг Target';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Питкернські острови';

$GLOBALS["lang"]['placement'] = 'Місце';

$GLOBALS["lang"]['Placement'] = 'Місце';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Планування та проведення внутрішніх перевірок';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Будь ласка, отримуйте логотип адміністратора Open-AudIT та отримуйте оновлення бази даних.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Будь ласка, ввійдіть і змініть ці ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Будь ласка, ввійдіть на Open-AudIT Server (користування Windows або Linux) і запустіть <code>nslookup IP_ADDRESS_OF_TARGET</code> в командному рядку або оболонці. Вирішити IP на Імя.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Будь ласка, зауважте, що вибрана коробка перенаправить текстове поле введення.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Дивитися запитання';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Будь ласка, надсилайте всі три файли, щоб отримати доступ до служби підтримки в Opmantek та опишіть вашу проблему.';

$GLOBALS["lang"]['Please set using'] = 'Будь ласка, встановіть';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Будь ласка, відвідайте сторінку';

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

$GLOBALS["lang"]['Polish'] = 'Польська';

$GLOBALS["lang"]['Polite'] = 'Політ';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Поповніть значення, надані нижче:';

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

$GLOBALS["lang"]['Portuguese'] = 'Португальська';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Португальська (Бразилія)';

$GLOBALS["lang"]['position'] = 'Головна';

$GLOBALS["lang"]['Position'] = 'Головна';

$GLOBALS["lang"]['Post-Certification'] = 'Повідомлення';

$GLOBALS["lang"]['postcode'] = 'Поштовий індекс';

$GLOBALS["lang"]['Postcode'] = 'Поштовий індекс';

$GLOBALS["lang"]['power_circuit'] = 'Блок живлення';

$GLOBALS["lang"]['Power Circuit'] = 'Блок живлення';

$GLOBALS["lang"]['power_sockets'] = 'Силові розетки';

$GLOBALS["lang"]['Power Sockets'] = 'Силові розетки';

$GLOBALS["lang"]['Predictable'] = 'Випробувано';

$GLOBALS["lang"]['Preferences'] = 'Переваги';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Підготовка до реферативності кожні 3 роки';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Протокол конфіденційності';

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

$GLOBALS["lang"]['Professional'] = 'Про компанію';

$GLOBALS["lang"]['profile'] = 'Профіль';

$GLOBALS["lang"]['Profile'] = 'Профіль';

$GLOBALS["lang"]['program'] = 'Програми';

$GLOBALS["lang"]['Program'] = 'Програми';

$GLOBALS["lang"]['Properties'] = 'Властивості';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Пропріетарій. Якщо ви хочете змінити HighCharts, ви можете вимагати';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Захист конфіденційності, цілісності та наявності інформації';

$GLOBALS["lang"]['protocol'] = 'Протоколи';

$GLOBALS["lang"]['Protocol'] = 'Протоколи';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Забезпечте опис та тривалість терміну дії.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Ми можемо самі зателефонувати одержувачу і узгодити зручний час і місце вручення квітів, а якщо необхідно, то збережемо сюрприз.<br/>З форми Open-AudIT копіюємо значення для <i>Відправити URI</i> поле і вставте її в поле <i>Вхідний перенаправлення URI</i> поле в OKTA.<br/>Ви можете використовувати Open-audit/index. php/logout з вашими серверами Open-AudIT за адресою:<br/>Якість URL-адреса Open-AudIT буде виглядати щось схоже';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'За умови, що у вас є правильні облікові дані, пристрій Seed Discovery працює наступним чином:';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Запити є важливою частиною Open-AudIT. Ви можете отримати інформацію про всі дані пристрою, які ви відкрили. У зв’язку з сумами та групами, вони забезпечують потужний механізм отримання необхідної інформації.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Запити для груп повинні вибрати тільки';

$GLOBALS["lang"]['Query'] = 'Книжка';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Перегляньте цей атрибут Active Directory першим, щоб визначити пристрій роботи користувачів.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Перегляньте цей атрибут Active Directory другий для визначення блоку роботи користувачів.';

$GLOBALS["lang"]['queue'] = 'Клей';

$GLOBALS["lang"]['Queue'] = 'Клей';

$GLOBALS["lang"]['Queue Limit'] = 'Кеуе Ліміт';

$GLOBALS["lang"]['Queued Device Audits'] = 'Аудит пристроїв';

$GLOBALS["lang"]['Queued IP Scans'] = 'Перевірені IP-скани';

$GLOBALS["lang"]['Queued Items'] = 'Виготовлені товари';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC для Active Directory та openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Управління та звітність';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Прочитати файл журналу в';

$GLOBALS["lang"]['Received'] = 'Отриманий';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Останнім часом ми попросили питання - ви вважаєте, що Open-AudIT більш надійний, ніж інші подібні програми? Як і більшість речей, відповідь <i>це залежить</i>й<br/><br/>Відкритий IT може працювати таким чином, щоб бути надзвичайно безпечним. Але, як правило, з комп\'ютерною безпекою, більш безпечно, ви хочете зробити щось, більш незручно, він стає використовувати. Стара фраза <i>Найбезпечніший комп\'ютер є одним, що вимкнено і в шафі<i> приходить на розум.<br/><br/>Нижче ми розглянемо деякі параметри, які можна використовувати з Open-AudIT, які підвищать безпеку. Як і більшість елементів в Open-AudIT, це варіанти і не обов\'язково. Наскільки ви отримуєте безпеку до вас.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Ресертифікація: Потрібно кожні три роки';

$GLOBALS["lang"]['Red Query'] = 'Червоні запити';

$GLOBALS["lang"]['Redirect URI'] = 'Відправити URI';

$GLOBALS["lang"]['redirect_uri'] = 'Перенаправлення Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Перенаправлення Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Зменшує ризик порушення даних та кіберзагроз';

$GLOBALS["lang"]['references'] = 'Посилання';

$GLOBALS["lang"]['References'] = 'Посилання';

$GLOBALS["lang"]['region'] = 'Регіон';

$GLOBALS["lang"]['Region'] = 'Регіон';

$GLOBALS["lang"]['registered_user'] = 'Зареєстрований Користувач';

$GLOBALS["lang"]['Registered User'] = 'Зареєстрований Користувач';

$GLOBALS["lang"]['Rejected'] = 'Відхилено';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Повторіть до тих пір, поки ви не знайшли і перевірили Windows PC.';

$GLOBALS["lang"]['Report'] = 'Звіти';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Звіт про пристрої, мережі та багато іншого';

$GLOBALS["lang"]['reportable'] = 'Звітність';

$GLOBALS["lang"]['Reportable'] = 'Звітність';

$GLOBALS["lang"]['Reports'] = 'Звіти';

$GLOBALS["lang"]['request'] = 'Замовити';

$GLOBALS["lang"]['Request'] = 'Замовити';

$GLOBALS["lang"]['Request Method'] = 'Метод запиту';

$GLOBALS["lang"]['Request Vulnerability'] = 'Запит Можливість';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Запит специфікації КВ';

$GLOBALS["lang"]['requested'] = 'Подати заявку';

$GLOBALS["lang"]['Requested'] = 'Подати заявку';

$GLOBALS["lang"]['require_port'] = 'Портфоліо';

$GLOBALS["lang"]['Require Port'] = 'Портфоліо';

$GLOBALS["lang"]['Require an Open Port'] = 'Потрібні Відкритий порт';

$GLOBALS["lang"]['Required'] = 'Потрібні';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Необхідні дозволи користувачів AWS';

$GLOBALS["lang"]['Required Fields'] = 'Обов\'язкові поля';

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

$GLOBALS["lang"]['Resulting Function'] = 'Функція пошуку';

$GLOBALS["lang"]['Results'] = 'Результати';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Отримати список пристроїв в';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Перегляньте список пристроїв з назвою ОС Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Дізнайтеся всі деталі про пристрій з ідентифікатором 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Отримати всі пристрої, що працюють Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Перегляньте всі пристрої з стандартними стовпчиками';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Перегляньте перші 10 пристроїв, які працюють на Windows, замовлених за допомогою хоста';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Отримати властивості id, ip, hostname, домен, тип з усіх пристроїв';

$GLOBALS["lang"]['retrieved'] = 'Увійти';

$GLOBALS["lang"]['Retrieved'] = 'Увійти';

$GLOBALS["lang"]['retrieved_ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['retrieved_name'] = 'Імя користувача';

$GLOBALS["lang"]['Retrieved Name'] = 'Імя користувача';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Вимкнено з пристрою - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Отримання переліку значень';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Відновлення або створення';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Повернути збірку пристроїв за замовчуванням набір стовпчиків (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Повернення списку всіх модулів, встановлених на маршрутизаторах';

$GLOBALS["lang"]['Return an individual device details'] = 'Повернення індивідуального пристрою\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Повертає список {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Повертаємо деталі {collection}.';

$GLOBALS["lang"]['Reunion'] = 'Реюньйон';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Огляд сучасних практик ISO 27001 вимог';

$GLOBALS["lang"]['revision'] = 'Редакція';

$GLOBALS["lang"]['Revision'] = 'Редакція';

$GLOBALS["lang"]['risk_assesment_result'] = 'Результат пошуку ризику';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Результат пошуку ризику';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Оцінка ризиків та лікування';

$GLOBALS["lang"]['Risk Management'] = 'Управління ризиками';

$GLOBALS["lang"]['Role'] = 'роль';

$GLOBALS["lang"]['roles'] = 'Ролики';

$GLOBALS["lang"]['Roles'] = 'Ролики';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Роль можуть бути створені та редаговані, якщо у вас є ліцензія на підприємстві Open-AudIT. Для більшості користувачів, набір за замовчуванням Ролі повинні бути всі, що потрібно.';

$GLOBALS["lang"]['Romania'] = 'Українська';

$GLOBALS["lang"]['Romanian'] = 'Українська';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Правила створюються і виконуються на пристрої при відкритті пристрою або результат аудиту. Правила можуть бути використані для встановлення атрибуту пристрою на основі інших атрибутів.<br/><br/>НЕ ВСЕ - В даний час ми не можемо видалити вхід або вихід, який містить /. Це тому, що рамка підписує / як частина URL і повертає 404, навіть перед тим, як наш код працює. Робота для цього полягає в тому, щоб видалити Рулі себе, потім відтворити вводи і виходи, як це потрібно. На щастя вводів і виводів, які містять / є рідкісними (за умови, що не існує за замовчуванням).';

$GLOBALS["lang"]['Run Discovery'] = 'Проживання';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Відкрийте для себе на пристроях';

$GLOBALS["lang"]['Run Your Discovery'] = 'Запустіть своє знайомство';

$GLOBALS["lang"]['Run a Command'] = 'Запуск команди';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Запустити відкриття і дізнатися <b>Що на вашій мережі?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Запустіть скрипт, натиснувши <code>cscript test_windows_client.vbs</code> в консолі.';

$GLOBALS["lang"]['Run this Command'] = 'Запуск цієї команди';

$GLOBALS["lang"]['runas'] = 'Пробіг';

$GLOBALS["lang"]['Runas'] = 'Пробіг';

$GLOBALS["lang"]['Running'] = 'Запуск';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Запуск Open-AudIT Apache Service Під Windows';

$GLOBALS["lang"]['Russian'] = 'Російська';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Аудит';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Авто-Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL не містить цього стану призведе до виконання віджету.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Заощаджуйте і запустіть файл. Переконайтеся, що ви запустіть файл як адміністратор, щоб встановити його (правильний клік, запустіть як адміністратор).';

$GLOBALS["lang"]['Save as Default'] = 'За замовчуванням';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Заощаджуйте завантажений файл.';

$GLOBALS["lang"]['scaling'] = 'Скальлінг';

$GLOBALS["lang"]['Scaling'] = 'Скальлінг';

$GLOBALS["lang"]['scan_options'] = 'Параметри сканування';

$GLOBALS["lang"]['Scan Options'] = 'Параметри сканування';

$GLOBALS["lang"]['Scan Options ID'] = 'Параметри сканування ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Скасування цього порту (s) і якщо виявлений відкритий, скористайтеся цим портом для SSH-зв\'язку. Це додано до списку користувацьких портів TCP вище (якщо вже не включений), тому немає необхідності включати його в цей список. Кома розсіяна, без пробілів.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Сканування верхнього числа портів TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Сканування верхнього числа портів УДП.';

$GLOBALS["lang"]['schedule'] = 'Розклад';

$GLOBALS["lang"]['Schedule'] = 'Розклад';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Заплановано відкриття пристрою та звітування, що робить Open-AudIT Professional ефективне рішення для зайнятих ІТ-фахівців, які бажають зменшити наклади та збільшити розуміння.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - відкриття, звітність та багато іншого';

$GLOBALS["lang"]['scope'] = 'Навігація';

$GLOBALS["lang"]['Scope'] = 'Навігація';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Сфера відома як Сфера авторизації, що представляє, чи впливає на вразливість ресурсів за оригінальним органом безпеки вразливих компонентів.<br/><br/>Єдині два дійсні значення для цього атрибуту';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Пошук за допомогою даних';

$GLOBALS["lang"]['Second'] = 'Другий';

$GLOBALS["lang"]['secondary'] = 'Пожертвувати';

$GLOBALS["lang"]['Secondary'] = 'Пожертвувати';

$GLOBALS["lang"]['Secondary Text'] = 'Другий текст';

$GLOBALS["lang"]['Secret Key'] = 'Секретний ключ';

$GLOBALS["lang"]['section'] = 'Розсилка';

$GLOBALS["lang"]['Section'] = 'Розсилка';

$GLOBALS["lang"]['secure'] = 'Захист';

$GLOBALS["lang"]['Secure'] = 'Захист';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Протокол автоматизації вмісту безпеки';

$GLOBALS["lang"]['Security Level'] = 'Рівень безпеки';

$GLOBALS["lang"]['Security Name'] = 'Назва безпеки';

$GLOBALS["lang"]['Security Status'] = 'Статус на сервери';

$GLOBALS["lang"]['security_zone'] = 'Зона безпеки';

$GLOBALS["lang"]['Security Zone'] = 'Зона безпеки';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Дивитися вище. НЕБЕ - Це також може бути викликаний самопризначеним сертифікатом на сервері LDAP. Ми працюємо для цього в майбутньому випуску.';

$GLOBALS["lang"]['See our page on enabling'] = 'Переглянути нашу сторінку';

$GLOBALS["lang"]['Seed Discoveries'] = 'Виставки насіння';

$GLOBALS["lang"]['seed_ip'] = 'Посівний IP';

$GLOBALS["lang"]['Seed IP'] = 'Посівний IP';

$GLOBALS["lang"]['seed_ping'] = 'Сівалка';

$GLOBALS["lang"]['Seed Ping'] = 'Сівалка';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Обмеження насіння для приватного';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Обмеження насіння для приватного';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Обмеження насіння для субмереж';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Обмеження насіння для субмереж';

$GLOBALS["lang"]['Select'] = 'Обрати';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Виберіть Адміністратор -> Завдання -> Спілкування Завдання з меню.';

$GLOBALS["lang"]['Select All'] = 'Всі';

$GLOBALS["lang"]['Select All Devices'] = 'Виберіть всі пристрої';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Виберіть меню -> Керування -> Базиліни -> Список базиліків.';

$GLOBALS["lang"]['Select a Table'] = 'Виберіть таблицю';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Виберіть акредитований орган сертифікації';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Виберіть та застосувати відповідні керування (Annex A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Виберіть <i>КОМПАНІЯ Безпека</i> Увійти<br/><br/>Натисніть на дозвіл доступу Редагування';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Виберіть <i>Увійти</i> вкладка і копіювання значення для <i>Видавець</i> (тільки сам URL). Вставте це в Open-AudIT <i>Видавець</i> поле.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Виберіть <i>Цей обліковий запис</i> Введіть номер мобільного, який Ви вказали при укладаннi договору з банком - для ідентифікації.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Виберіть меню старту та тип <i>Послуги<.i>. Натисніть значок Послуг.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Виберіть тип Ауто Ментоду для створення і введення відповідних деталей.';

$GLOBALS["lang"]['Self Delete'] = 'Самоскид';

$GLOBALS["lang"]['Senegal'] = 'Сепаратор';

$GLOBALS["lang"]['sensitivity'] = 'Чутливість';

$GLOBALS["lang"]['Sensitivity'] = 'Чутливість';

$GLOBALS["lang"]['September'] = 'Вересень';

$GLOBALS["lang"]['Serbia'] = 'Українська';

$GLOBALS["lang"]['serial'] = 'Проживання';

$GLOBALS["lang"]['Serial'] = 'Проживання';

$GLOBALS["lang"]['serial_imei'] = 'Серійне ім’я';

$GLOBALS["lang"]['Serial Imei'] = 'Серійне ім’я';

$GLOBALS["lang"]['serial_sim'] = 'Серійне СІмя';

$GLOBALS["lang"]['Serial Sim'] = 'Серійне СІмя';

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

$GLOBALS["lang"]['Servers Only'] = 'Сервери тільки';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Сервіс під Windows';

$GLOBALS["lang"]['service_version'] = 'Версія сайту';

$GLOBALS["lang"]['Service Version'] = 'Версія сайту';

$GLOBALS["lang"]['Set'] = 'Комплекти';

$GLOBALS["lang"]['set_by'] = 'Комплекти';

$GLOBALS["lang"]['Set By'] = 'Комплекти';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Налаштування функції Discovery - не зазвичай встановлюють це вручну.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Встановити аудит_domain або відкрити_domain скрипти. Не встановіть.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Встановити зовнішній текст до капіталізованої версії внутрішніх даних.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Встановити зовнішній текст на нижній регістр.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Встановити зовнішній текст у верхній частині.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Встановіть розмір (звичайний або компактний) таблиць на екранах Список.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Встановити це, якщо ви хочете вставляти системи від AD, які можуть бути не контактовані, але було видно AD з цієї дати.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Налаштування Discovery на підмережі практично ідентична, щоб запустити регулярний пошук через веб-інтерфейс. Єдині додаткові елементи заплановані години і день(-и) і назва для планованої задачі. Ви можете скористатися цим, щоб запланувати декілька відкриттів за допомогою різних наборів облікових даних.<br/><br/>Якщо ви хочете дізнатися більше про те, що служба Active Directory Discovery є однією з найбільш важливих напрямів, як регулярний Active Directory Discovery.<br/><br/>Якщо сервер Open-AudIT має звіти про це колектори, надається додаткове зниження. Ви можете вибрати це для того, щоб визначити, який Збір завдання повинен запустити. Для колекціонерів підтримуються тільки завдання Discovery. Вкажіть ті ж предмети, як регулярний Discovery, але надати альтернативний колектор для виконання цього завдання.';

$GLOBALS["lang"]['severity'] = 'Сєвєвічність';

$GLOBALS["lang"]['Severity'] = 'Сєвєвічність';

$GLOBALS["lang"]['severity_text'] = 'Текст тяжкості';

$GLOBALS["lang"]['Severity Text'] = 'Текст тяжкості';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Термін придатності обчислюється з <code>base_score</code> і може бути одним з: Ні, низький, середній, високий, критичний.';

$GLOBALS["lang"]['Seychelles'] = 'Сейшельські острови';

$GLOBALS["lang"]['share'] = 'Поділитися';

$GLOBALS["lang"]['Share'] = 'Поділитися';

$GLOBALS["lang"]['Share Name'] = 'Імя користувача';

$GLOBALS["lang"]['shared'] = 'Почати';

$GLOBALS["lang"]['Shared'] = 'Почати';

$GLOBALS["lang"]['shared_name'] = 'Імя користувача';

$GLOBALS["lang"]['Shared Name'] = 'Імя користувача';

$GLOBALS["lang"]['shell'] = 'Шпалери';

$GLOBALS["lang"]['Shell'] = 'Шпалери';

$GLOBALS["lang"]['Ship Date'] = 'Дата відправлення';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Змішані є набором елементів за замовчуванням. Це можна знайти в меню';

$GLOBALS["lang"]['short'] = 'Шорти';

$GLOBALS["lang"]['Short'] = 'Шорти';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Чи можна видалити всі неточні дані з цього пристрою?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Чи слід використовувати цей файл (або шаблон) для виключення файлів з повідомлення. Як правило, для перевірки файлів, це встановлюється для <code>y</code>й';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Чи слід використовувати цей постачальник при перерозподілі вразливостей від FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Якщо ми додаємо пристрої з віддаленого сервісу, локально.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Якщо ми застосовуємо цю ліцензію на обраний орган, а також дітей-Оргій?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Якщо ви виявите програмне забезпечення управління.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Якщо ми перевіримо пункти кріплення.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Якщо ми перевіримо порти netstat (так, немає, лише сервери).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Якщо ми перевіримо встановлене програмне забезпечення.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Чи слід розглядати фільтрований порт, щоб бути відкритим портом - і тому прапорець цього IP як пристрій підключений?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Якщо ми розглянемо відкритий порт, щоб бути відкритим портом - і тому прапорець цього IP як пристрій, прикріплений?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Якщо ми перетворимо Імя в нижній регістр.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Якщо ми створюємо файл на основі результату аудиту.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Якщо ми підбираємо цю групу в веб-інтерфейс.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Якщо ви надаєте цю запит у списку звітів у меню Звіту в веб-інтерфейсі.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Якщо ви надаєте цей запит у списку звітів за меню Звітів у веб-інтерфейс.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Якщо ми приховуємо вікно сценарію аудиту при виконанні.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Якщо ми ігноруємо недійсний або самостійний підписаний SSL-сертифікат і подаємо результат будь-яким чином.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Якщо ми отримуємо всі домени DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Якщо ми здійснюємо аудит і подаємо його (і/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Якщо ми тестуємо для SNMP за допомогою порту UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Якщо ми тестуємо для SSH за допомогою TCP порту 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Якщо ми тестуємо для WMI за допомогою порту TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Якщо ми видалили агент (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Якщо ми використовуємо систему або проксі рівня користувача для подання результату аудиту.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Якщо ми використовуємо win32_product WMI клас (не рекомендується Microsoft) при перерозподілі встановленого програмного забезпечення.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Якщо ми використовуємо цей метод для ідентифікації облікових даних користувачів. Комплекти <code>y</code> або <code>n</code>й';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Якщо ми використовуємо цей метод для створення ролі користувачів. Поле <code>use_auth</code> необхідно встановити <code>y</code> використовувати це. Комплекти <code>y</code> або <code>n</code>й';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Якщо ми використовуємо ці значення для відповідності зовнішніх та внутрішніх пристроїв. Наша інтеграція за замовчуванням використовує IP і UUID тут. Якщо або з цих матчів між зовнішнім і внутрішнім пристроєм, ми розглянемо їх, щоб бути тим самим пристроєм.';

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

$GLOBALS["lang"]['Slovak'] = 'Словацький';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Словаччина (Словаччина)';

$GLOBALS["lang"]['Slovenia'] = 'Словенія';

$GLOBALS["lang"]['Slovenian'] = 'Словенія';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Так скрипт не працює на рекальцитрантовому пристрої. Грир. Скрипки для Windows, Linux і MacOS всі приймають аргументи відключення. Це може бути встановлена в самому скрипту або надана на командному рядку. Запустіть скрипт, використовуючи цей параметр, встановлений до 5 і ви повинні бачити в якому розділі скрипта відбувається збій. Приклад';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Я радий вас запитати! Ми маємо кілька операторів для фільтрації. Оператори, які можуть претендувати на вартість';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Так ви маєте питання, що забезпечує відкриті облікові дані для виявлення ваших пристроїв. У мене є відповідь - не знаю! Нудота, я маю на увазі, відкриття найкраще зрізаного хліба. Не потрібно знати заздалегідь <i>Що на вашій мережі</i>й Але як можна витягти дані з пристроїв без надання облікових даних?<br/><br/>У разі комп\'ютерів простий варіант є копіювання відповідного сценарію аудиту на цільові машини і встановити його для виконання на графіку. Детальніше про вікі. Машини надішлемо свої дані до Open-AudIT на цьому графіку, майже якщо ви були запущені. Пристрій просто проводить скрипт аудиту на графіку (зважте, ви можете прочитати скрипт аудиту) як користувач, який ви його розповідаєте і надсилаєте вихід на сервер. Всі права захищені.<br/><br/>І тепер ми маємо агенти для Windows. Переваги фактичного встановленого агента';

$GLOBALS["lang"]['socket'] = 'Розсилка';

$GLOBALS["lang"]['Socket'] = 'Розсилка';

$GLOBALS["lang"]['software'] = 'Програмне забезпечення';

$GLOBALS["lang"]['Software'] = 'Програмне забезпечення';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Програмне забезпечення знайдено Останні 7 днів';

$GLOBALS["lang"]['Software Found Today'] = 'Програмне забезпечення, засноване сьогодні';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Програмне забезпечення Знайдено Вчора';

$GLOBALS["lang"]['software_key'] = 'Програмне забезпечення Key';

$GLOBALS["lang"]['Software Key'] = 'Програмне забезпечення Key';

$GLOBALS["lang"]['Software License Reporting'] = 'Звіт про ліцензування програмного забезпечення';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Деякі колекції можуть бути виконані - запити та інші - див. нижче.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Деякі приклади знаходяться внизу цієї сторінки. Всі кінцеві точки також мають мінімальний перелік необхідних полів. Ось нижче.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Деякі з наших шаблонів підтримують новий перехід на дані, використовуючи серверну бічну обробку. Цей масажистлі покращує час завантаження.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'При спробі зв\'язатися з сервером LDAP Зв\'язатися (тобто, <i>з\'єднання</i> вище працювала, але з якоїсь іншої причини не виникало. Перевірити журнали на сервері LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Хтось пішов серйозно неправильно. Open-AudIT не може читати <i>оргс</i> стіл.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Хтось пішов серйозно неправильно. Open-AudIT не може читати <i>рольи</i> стіл.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Іноді безвідмовне відкриття просто не підходить для вашого використання. Може бути, ваші комп\'ютери мають жорсткі брандмауери. Може бути не в мережі, коли ваші відкриття заплановані. Може бути використовуються віддаленими працівниками. Який випадок, це де агент може допомогти. Встановіть його на цільову машину і вона буде <i>реєстрація</i> з сервером Open-AudIT на графіку та приймати завдання. Найпоширеніша задача запитів на сервер для того, щоб перевірити себе і відправити результат.';

$GLOBALS["lang"]['Sort'] = 'Сортувати';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Етап 1: Огляд документації';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Етап 2: Огляд ефективності та ефективності';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Почати веб-переглядач і перейти до';

$GLOBALS["lang"]['started_date'] = 'Дата початку';

$GLOBALS["lang"]['Started Date'] = 'Дата початку';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Початок червня 2018 Google запровадив модель Pay-as-you-go ціноутворення для API платформи Google Maps. Раніше більшість користувачів з помірним використанням можуть використовувати Google Maps, які вбудовані в opCharts і Open-AudIT Professional/Enterprise, безкоштовно. У нас висвітлюється нова політика Google';

$GLOBALS["lang"]['Starts With'] = 'Почати з';

$GLOBALS["lang"]['state'] = 'Стан';

$GLOBALS["lang"]['State'] = 'Стан';

$GLOBALS["lang"]['Stats'] = 'Стати';

$GLOBALS["lang"]['status'] = 'Статус на сервери';

$GLOBALS["lang"]['Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Storage'] = 'Склад';

$GLOBALS["lang"]['storage_count'] = 'Кількість зберігання';

$GLOBALS["lang"]['Storage Count'] = 'Кількість зберігання';

$GLOBALS["lang"]['Storage area network'] = 'Мережа сховищ';

$GLOBALS["lang"]['Storage-Area Network'] = 'Статус на сервери';

$GLOBALS["lang"]['string'] = 'Ступінь';

$GLOBALS["lang"]['String'] = 'Ступінь';

$GLOBALS["lang"]['sub_resource_id'] = 'Імя користувача';

$GLOBALS["lang"]['Sub Resource ID'] = 'Імя користувача';

$GLOBALS["lang"]['sub_type'] = 'Тип субтитри';

$GLOBALS["lang"]['Sub Type'] = 'Тип субтитри';

$GLOBALS["lang"]['subject_key_ident'] = 'Тема Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Тема Key Ident';

$GLOBALS["lang"]['Submit'] = 'Подати заявку';

$GLOBALS["lang"]['Submit Online'] = 'Подати заявку';

$GLOBALS["lang"]['Submitted From'] = 'Надіслане Від';

$GLOBALS["lang"]['Subnet'] = 'Навігація';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Підприємства';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Сумпери - це єдиний запит щодо бази даних з <i>група</i> команда. Використовуючи цей простий метод, ми можемо легко створювати резюме для практично будь-якого атрибуту.<br/><br/>Ми не вимагаємо окремого звіту для кожного <i>Тип</i> пристрій. Ми зараз просто маємо резюме, що групи <i>пристрої. Тип</i> і показує результат. Ви можете натиснути на вказаний тип зі списку і побачити відповідні пристрої. У цьому випадку один Резюме замінює (потенційно) 78 звітів (податково 78 типів пристроїв).<br/><br/>Резюме відрізняється до запиту в тому, що резюме призначений для групових предметів за допомогою даного атрибуту, а потім забезпечується <i>Натисніть</i> посилання на фактичні пристрої. Перевага - це просто список елементів, які не мають додаткових посилань. Як вище - це Резюме як комбінований <i>Звіт + субрегпорт</i>, в той час як запит просто єдиний звіт.<br/><br/>Для інших ресурсів в рамках Open-AudIT мають різний шаблон збору. Цей шаблон показує Резюме, як ви очікуєте, і також показує кнопки з підрахунками інших ресурсів. Ця сторінка призначена для того, щоб бути HomePage of Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Сумпери призначені для групових елементів за допомогою певного збігу стовпчика, а потім для забезпечення посилання на окремі пристрої. У попередніх версіях Open-AudIT це було два різні елементи - звіт і підрепортаж. Ми зараз вказали про те, що ми називаємо Резюме.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Команди дають можливість відведення звітності. Простий, інтуїтивно зрозумілий, потужний.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Сумпери приймають такі ж аргументи, як Queries.';

$GLOBALS["lang"]['Summary'] = 'Редакція';

$GLOBALS["lang"]['Sunday'] = 'Неділя';

$GLOBALS["lang"]['supplier'] = 'Постачальники';

$GLOBALS["lang"]['Supplier'] = 'Постачальники';

$GLOBALS["lang"]['Support'] = 'Підтримка';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Підтримувані типи <code>subnet</code>й <code>seed</code> і <code>active directory</code>й';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Підтримує дотримання нормативно-правових вимог';

$GLOBALS["lang"]['Suriname'] = 'Прізвище';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Аудит відеоспостереження: Річний аудит для підтримки сертифікації';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Свазіленд';

$GLOBALS["lang"]['Sweden'] = 'Швеція';

$GLOBALS["lang"]['Swedish'] = 'Шведська';

$GLOBALS["lang"]['switch_device_id'] = 'Вимикач ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Вимикач ID';

$GLOBALS["lang"]['switch_port'] = 'Порти';

$GLOBALS["lang"]['Switch Port'] = 'Порти';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Швейцарія, Швейцарська конфедерація';

$GLOBALS["lang"]['Symptom'] = 'Симптом';

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

$GLOBALS["lang"]['Table'] = 'Настільний';

$GLOBALS["lang"]['tag'] = 'Навігація';

$GLOBALS["lang"]['Tag'] = 'Навігація';

$GLOBALS["lang"]['tag_1'] = 'Тег 1';

$GLOBALS["lang"]['Tag 1'] = 'Тег 1';

$GLOBALS["lang"]['tag_2'] = 'Тег 2';

$GLOBALS["lang"]['Tag 2'] = 'Тег 2';

$GLOBALS["lang"]['tag_3'] = 'Тег 3';

$GLOBALS["lang"]['Tag 3'] = 'Тег 3';

$GLOBALS["lang"]['Tagalog'] = 'Таталог';

$GLOBALS["lang"]['tags'] = 'Панчохи';

$GLOBALS["lang"]['Tags'] = 'Панчохи';

$GLOBALS["lang"]['Tags :: '] = 'Теги :: ';

$GLOBALS["lang"]['Taiwan'] = 'Українська';

$GLOBALS["lang"]['Tajikistan'] = 'Таджикістан';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Взяти замітку всіх вихідних і дій кожного елемента відповідно.';

$GLOBALS["lang"]['Tanzania'] = 'Танзанія';

$GLOBALS["lang"]['Target Computer'] = 'Цільовий комп\'ютер';

$GLOBALS["lang"]['task'] = 'Мета';

$GLOBALS["lang"]['Task'] = 'Мета';

$GLOBALS["lang"]['tasks'] = 'Завдання';

$GLOBALS["lang"]['Tasks'] = 'Завдання';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Завдання можуть бути одним з декількох різних типів: Базовий, Discovery, Звіт, Запит, Збір або Збірник.';

$GLOBALS["lang"]['tcp_ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Технічні характеристики';

$GLOBALS["lang"]['tenant'] = 'Навігація';

$GLOBALS["lang"]['Tenant'] = 'Навігація';

$GLOBALS["lang"]['Tenant ID'] = 'Ідентифікатор';

$GLOBALS["lang"]['Tennant ID'] = 'Ідентифікатор';

$GLOBALS["lang"]['ternary'] = 'Територія';

$GLOBALS["lang"]['Ternary'] = 'Територія';

$GLOBALS["lang"]['Test 1'] = 'Тест 1';

$GLOBALS["lang"]['Test 2'] = 'Тест 2';

$GLOBALS["lang"]['Test 3'] = 'Тест 3';

$GLOBALS["lang"]['Test Email'] = 'Тест електронної пошти';

$GLOBALS["lang"]['test_minutes'] = 'Протокол випробувань';

$GLOBALS["lang"]['Test Minutes'] = 'Протокол випробувань';

$GLOBALS["lang"]['test_os'] = 'Тест Ос';

$GLOBALS["lang"]['Test Os'] = 'Тест Ос';

$GLOBALS["lang"]['test_subnet'] = 'Тест Підмережі';

$GLOBALS["lang"]['Test Subnet'] = 'Тест Підмережі';

$GLOBALS["lang"]['tests'] = 'Тести';

$GLOBALS["lang"]['Tests'] = 'Тести';

$GLOBALS["lang"]['Text'] = 'Головна';

$GLOBALS["lang"]['Thai'] = 'Тайська';

$GLOBALS["lang"]['Thailand'] = 'Таїланд';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Дякую за те, щоб розпочати подорож з найкращим відкриттям та інвентарем.';

$GLOBALS["lang"]['Thanks to'] = 'Дякую';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Що це? Ви просто відредагували атрибути багатьох пристроїв, як вам потрібно.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Про нас <i>Ролики</i> Кінцева точка дозволяє керувати набором дозволів (збереження, читання, оновлення, видалення), які надаються користувачам і застосовуються до кожного кінцевого пункту.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API використовує cookie. Ви можете запросити cookie, відправивши POST на URL нижче, що містить Імя користувача та атрибути пароля та значення:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Домен Active Directory для отримання списку підмереж.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Сервер Active Directory для отримання списку підмереж.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Кінцева точка додатків дозволяє визначити додаток, який можна асоціювати з пристроєм (або пристроями).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'TheAttributes endpoint дозволяє додати індивідуальні значення для різних атрибутів у Open-AudIT, в даний момент ця функція працює на класі, навколишньому середовищу, статусі та атрибути типу на пристроях, атрибут типу для обох локаціях та органах, а також категорії меню для запитів. Якщо ви переглядаєте елемент одного з найсвіжіших типів (дивитись Lkocation) ви помітите атрибут типу, необхідно вибрати з випадаючого ящика. Це де зберігаються ці значення. Отже, якщо ви хочете додати новий тип, який буде обраний для локації, додайте його за допомогою функції атрибутів.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Автоматизована метрика захоплює відповідь на питання <strong>Чи може атакувати автоматизовані заходи для цієї вразливості через кілька цілей?</strong> на основі кроків 1-4 мережі вбивця. Ці кроки є розвідувальними, зброджування, доставка та експлуатація (не визначилися, Ні, Так).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE був відзначений недійсним або вилученим у списку CVE. Залишилося в NVD, але виключено з результатів пошуку за замовчуванням.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE було опубліковано до списку CVE і включено до NVD. Тільки початкове засвоєння.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE було оновлено після початкового аналізу. Дані збагачення NVD можуть бути переглянуті.';

$GLOBALS["lang"]['The CVE identifier.'] = 'ідентифікатор CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE активно збагачується записами CVSSS, класифікаціями CWE, довідковими тегами та аплікацією CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE не є пріоритетом для збагачення через обмеження ресурсів або інші причини.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE завершується збагаченням аналітиків НВД. Немає докладних метаданих.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Хмара, що володіє цим елементом. Посилання <code>clouds.id</code>й';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Тип пристрою Seed Discovery є новітнім високоефективним способом для мережевого змикання, що дає можливість використовувати вашу мережу як вузьким, так і в цілому, як вам потрібно. Це швидко, це працює і це чудово.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Відкрите сканування Додаткові параметри, які ми направляємо в таблиці нижче. Як і вище, користувачі підприємства можуть створити більше з цих або редагувати відправлені елементи.';

$GLOBALS["lang"]['The Elevated User query'] = 'Підвищений запит користувача';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Виконавець сканує диск пристрою в рамках аудиту та перевіряє, що кожен виконуваний файл відомий менеджером пакету. Оскільки він використовує файловий менеджер, функція застосовується лише до пристроїв Linux, і далі, ніж це, тільки об / хв або деб. Будь-який Redhat або Debian повинен працювати.';

$GLOBALS["lang"]['The FROM'] = 'З';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Група використовується для запуску базиліки. Посилання <code>groups.id</code>й';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Ідентифікатор з таблиці пристроїв (пристрої.name буде відображатися) НТУ в цьому кінці підключення. Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Ідентифікатор з імпортної ланчової політики.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Ідентифікатор з таблиці розташування (локації.name буде відображатися) цього кінця з\'єднання. Посилання <code>locations.id</code>й Місце розташування зазвичай <code>FROM</code> розташування.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Ідентифікатор з таблиці розташування (локації.name буде відображатися) цього кінця з\'єднання. Посилання <code>locations.id</code>й Розташування B зазвичай <code>TO</code> розташування.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Ідентифікатор підключеного пристрою (за наявності). Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Ідентифікатор асоційованого відкриття. Посилання <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Ідентифікатор елемента асоційованого типу.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Ідентифікатор цього orgs батьківського org. Посилання <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Імя користувача';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Ідентифікатор отримав від хмарного відкриття.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP-адреса цього колектора використовується для зв\'язку з сервером.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP пристрою для запуску збирання насіння.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP зовнішнього інтерфейсу.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP внутрішнього інтерфейсу.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Процес сертифікації ISO/IEC 27001 та його ключові елементи.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP або Telco надає посилання.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Запис JSON від Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Запис JSON з корму NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU цього користувача (якщо LDAP використовується).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Сервер LDAP не може бути підключений до. Всі Перевірити його можна з сервера Open-AudIT. Перевірити правильний порт на сервер Open-AudIT. На цьому сервері Open-AudIT буде показано nmap. Налаштування серверів LDAP IP за $ip. Про нас<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Тип сервера LDAP недійсний. Що робити <i>активний каталог</i> або <i>Головна</i>й';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Сервер LDAP був підключений до облікових даних користувачів, прийнятих для зв\'язку.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Встановлення Linux Open-AudIT тестує і при необхідності встановлюємо залежності від ваших розподільчих репозиторій, включаючи налаштування Nmap SetUID. Для виявлення СНМП (UDP 161) нероотним користувачем. Ця підтримка на RedHat / CentOS і Debian / Ubuntu. Якщо необхідно вручну встановити Nmap:<br/><br/>Для RedHat / CentOS do (NOTE - якщо ви модернізуєте за допомогою yum, вам потрібно відновити це <i>шемале</i> налаштування.';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Місцезнаходження, що містить цю мережу. Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD присвоєно базовий статус.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Національний інститут стандартів і технологій є федеральним технологічним агентством. Вони передають офіційну технологію, вимірювання науки і стандартів.';

$GLOBALS["lang"]['The Network to Discover'] = 'Мережа для відкриття';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Передавання карти Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Цей пакет OS повинен бути повідомлений проти. Помилки для всіх. Використовуйте знак відсотка % як дикої картки. Випробувано з os_group, os_family і os_name в цьому порядку.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Статус на сервери';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open-AudIT id з пов\'язаної хмари. Посилання <code>clouds.id</code>й';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Відкритий Цей файл був здійснений на сервері.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Відкритий Код сервера IT був здійснений в рамках цієї функції.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Екосистема OpenSCAP надає декілька інструментів, які допомагають адміністраторам та аудиторам з оцінкою, вимірюванням та виконанням бази даних безпеки, включаючи широкий спектр затверджувальних посібників та конфігураційних баз, розроблених громадою відкритого джерела, що гарантує, що ви можете вибрати політику безпеки, яка найкраще відповідає потребам організації, незалежно від його розміру.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Проект OpenSCAP - це збірка інструментів відкритого джерела для реалізації та залучення цього стандарту, а також отримала сертифікацію SCAP 1.2 від NIST у 2014 році.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Організація, яка володіє цим елементом. Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Процес видентифікатор роботи пов\'язаного відкриття.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU positon вершини цього пристрою.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Функція Racks використовується для управління та візуалізації використання стійки з організацією, розташуванням, будівництвом, підлогою, кімнатою та ровом.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP є специфікацією для визначення та маніпулювання даних безпеки в стандартизованих способами. SCAP використовує кілька індивідуальних специфікацій в концерті для автоматизації безперервного моніторингу, управління вразливостями та звітності щодо відповідності політики безпеки';

$GLOBALS["lang"]['The SELECT'] = 'СЕЛЕКТ';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'СЕЛЕКТРОННИЙ розділ запиту має використовувати повне позначення, а також запитувати поле з його повним Імям. IE - SELECT пристрої. id AS `devices.id`. Кожне поле слід вибрати в цій моді, щоб увімкнути фільтрацію атрибутів GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'У розділі SELECT вашого SQL обов\'язково повинні містити повністю кваліфіковані стовпці і вказати певні стовпці.';

$GLOBALS["lang"]['The SNMP community string.'] = 'СНМП рядок спільноти.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'СНМП v3 аутентифікації Пасфрас.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Протокол аутентифікації SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Статус на сервери';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Протокол конфіденційності SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Рівень безпеки SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Назва безпеки SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'СНМПВ3 (за бажанням).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Імя контексту SNMPv3 (необов\'язково).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Не містить в собі <strong>WHERE @filter OR</strong>й Що SQL не буде виконано, але <strong>ЗДОРОВ\'Я</strong> Допускаються запити.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Запити SQL, які використовуються в Open-AudIT, вимагають використання резервної копії - ` характер і не стандартна одинарна цитата для полів. На більшості американських Windows клавіатури задньої клавіші розташовується вгоріх клавіатури разом з нахилом ~. На клавіатурі US Mac розташована задня ключ. Стандартна одинарна цитата все ще використовується для заповнення значень як прикладів нижче ілюстрації.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Квадроцикли SQL по суті розбиваються на три частини.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Функціональність Стандартів в Open-AudIT дозволяє, перед тимчас, завершити питання аудиторів, які вимагаються при заповненні сертифікації ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL зовнішньої системи.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL вашого Open-AudIT Сервер, що цей колектор буде звітувати (без причепів)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Списки аудиту URL повинні подати їх результат.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Користувач кінцевої точки дозволяє керувати обліковими записами користувачів в межах Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'ЗДОРОВ\'Я';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Розділ WHERE вашого SQL <em>обов\'язково</em> В наявності';

$GLOBALS["lang"]['The Windows'] = 'Вікна';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Журнал Windows може сказати:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Введіть номер мобільного, який Ви вказали при укладаннi договору з банком - для ідентифікації.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Пароль облікового запису не повинен містити \ " (двох лапок). Це тому, що cscript (і wscript) не може вказувати значення аргументів, що містять подвійні лапки. Вони просто смугасті. Ні (на вас запитати) не буде працювати. Це cscript обмеження і нічого не робити з Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Повне ім’я користувача.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Адреса сервера Open-AudIT подає сторінку.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Адміністратор подав облікові дані, які успішно використовували для зв\'язку з ЛДАП.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Адміністратор подав облікові дані для зв\'язування з сервером LDAP, але вони не були прийняті LDAP sevrer. Двохмісний перевірте облікові дані на сервері LDAP, а потім перевірте (або скидати їх) в записі сервера Open-AudIT LDAP.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'У разі встановлення нової версії на сервері (проведення після оновлення Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Агент повинен завантажити свіжу копію скрипта перевірки, запустити його і подати результат на сервер.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Додаток створює тимчасові аудити тут, копіює їх на цільові машини, потім видаліть їх.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Асоційована базова лінія. Посилання <code>baselines.id</code>й';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Асоційоване відкриття (за потреби). Посилання <code>discoveries.id</code>й';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'атрибут для тестування (з <code>devices</code> стіл.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'атрибут для тестування (підключіть назву зовнішнього поля знизу).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Текстові атрибути для виявлення параметрів сканування нижче.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Сценарій аудиту, на якому базувати ваші налаштування.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Скрипт аудиту буде використовувати файли[ ] масив і отримати деталі файлів.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Ревізити аудиту всіх приймає аргумент про відключення. Ви можете запустити скрипт, використовуючи який і дивитись більш докладно, що питання є. А якщо ви не можете розібратися, то що ми тут! Відкриваємо чохол для підтримки, і ми не будемо працювати.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Базовий шлях від якого для пошуку користувачів.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Наведені нижче кроки не є невідомими або унікальними для Open-AudIT і будуть впливати <strong>будь-який</strong> Програма відкриття з використанням віддалених WMI та / або Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Тип бендикта.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Будівля стійки знаходиться в.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Розраховується кількість пристроїв, які створюються зовнішньо.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Розраховано кількість пристроїв для створення в Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Ідентифікатор клієнта - ідентифікатор програми Azure Active Directory. Секрет клієнта є ключем, який ви даєте цю програму.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Збірник по суті повністю встановити Open-AudIT в <i>колектор</i> режим. Збірник призначений для запуску відкриття мережі, розташованого в мережі. Не обмежується лише тим, що мережа, але ідеально це буде одним колекціонером за підмережу, де потрібно. Збірник приводиться на графік роботи сервером і працює відкриття в мережі, вказаний.<br/>Коли в стенді Один режим колектора діє як незалежний сервер, просто переадресація всіх пристроїв, знайдених на основний сервер.<br/><br/>Після встановлення та налаштування управління колектором здійснюється на сервері (не в режимі очікування).<br/><br/>Єдині необхідні мережеві порти між колектором та сервером - 80 або 443 (з\'єднання ТПП, встановлене з колектора до сервера). База даних Open-AudIT не (і не можна) поділилася між цими установами.<br/><br/>За замовчуванням колектор (не в режимі Stand Alone) запитатиме від сервера будь-які завдання відкриття кожні 5 хвилин (ви можете налаштувати це на сервері для нових колекціонерів за допомогою конфігураційного елемента колекціонера_check_хвилин) для будь-яких завдань відкриття колектора необхідно планувати для 0, 5, 10, 15 і т.д.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Збірник по суті повністю встановити Open-AudIT в <i>колектор</i> режим. Цей режим дозволить зменшити видимі функціональні можливості для спрощення та фокусування програми. Призначений для збору інформації про локальні мережі та пристрої, де брандмауер та/або мережі траверсал є проблемою з сервера.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Знімки внутрішніх IP, що використовуються при його роботі.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Назва стовпця з іноземного столу. Повинен бути одним з: клас, навколишнє середовище, статус, тип або меню_категорія.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Команда, виконана за допомогою цільового пристрою або коду сервера Open-AudIT, виконаного під час відкриття.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Конфігурація вашого кластера може бути: <code>active/active</code>й <code>active/passive</code>й <code>N+1</code>й <code>N+M</code>й <code>N-to-1</code>й <code>N-to-N</code>й <code>other</code> або порожній.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Пароль облікових даних. Якщо облікові дані є ключем SSH, це пароль, який використовується для розблокування ключа і є обов\'язковим.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Надані користувачем дані не вдалося.';

$GLOBALS["lang"]['The credentials username.'] = 'Імя облікових записів.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Поточна дата та час у форматі: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Поточна дата у форматі Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Поточний статус Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Поточний статус відкриття.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'За замовчуванням для цього користувача буде показано панель інструментів. Посилання <code>dashboards.id</code>й';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Дані, що зберігаються в базі даних, не відображаються в додатку, перекладеному. Ми залишаємо за собою дані. Однак не існує нічого, щоб зупинити вас, користувач, змінити назву (наприклад,) пункту в базі даних до вашої мови.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Дані, які ви вводите, будуть використані в <code>LIKE</code> Запис, не (як на API) <code>equals</code> пн. Інший приклад - якщо ви вводите <code>comput</code>, вона все ще поверне всі комп\'ютери. І бо ми використовуємо <code>LIKE</code> п.о.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'База даних schema може бути знайдена в додатку, якщо користувач має базу даних: дозвіл на читання по меню: Admin -> База даних ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Версія бази даних та веб-версія невідповідні.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Термін дії ліцензії.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'На сьогоднішній день програмне забезпечення припиняється виробником. Як правило, заміняється новою версією. Обслуговування може бути доступним.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'На сьогоднішній день програмне забезпечення більше не отримує оновлення і ефективно припиняється. Заборонено обслуговування.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Дата цього елемента було змінено або додано (прочитано тільки). НЕБЕЗПЕЧА - Це часовий апарат з сервера.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Дата/час, коли цей результат був створений.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'день місяця, коли це завдання повинно виконуватися (* на кожен день).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'день тижня, коли це завдання повинно виконуватися (* на кожен день).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Рівень відключення (будь ласка, введіть до командного вікна). Низькі засоби менше виводяться з 0 без вихідних.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Функція сканування за замовчуванням є набором UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Мова за замовчуванням призначена для будь-якого користувача, створеного цим методом.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Пристрій повинен реагувати на Nmap ping, перш ніж він вважається онлайн.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Пристрій в Open-AudIT. Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The direct link for the script is'] = 'Прямий посилання на скрипт';

$GLOBALS["lang"]['The email address of the receiver'] = 'Адреса електронної пошти reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Підприємець з FirstWave необхідний для ліцензії. Завантажити Open-AudIT';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Весь пов\'язаний базовий результат від.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Використовувана вразливість може впливати на ресурси за межами повноважень безпеки вразливих компонентів. Це, як правило, означає, що межа з привілейами або довірою (наприклад, розкопка з контейнера до господарської ОС).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Використовувана вразливість тільки впливає на ресурси в межах тих самих повноважень безпеки, як вразливих компонентів. Іншими словами, дії нападника, що залишаються в межах первісної межі довіри.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Ідентифікатор зовнішнього розташування. Зазвичай, за допомогою хмарних перевірок.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'У базі даних зберігаються поля, пов’язані з інтеграцією. Кожне поле має наступні атрибути';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Перший раз, коли Open-AudIT отримує деталі цього пристрою.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Підлога стійка розташована на.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Іноземний стіл на посилання. Повинен бути одним з: пристрої, місця розташування, оргс або запити.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Формат ваших даних повинен бути у вигляді';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Формат, який використовується для виходу на електронну пошту.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Повний кваліфікований стовпчик, на який групувати. НЕБЕ: Коли тип = трафік, це являє собою червоний запит.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Повністю кваліфікована назва, подана зовнішніми системами. EG: для NMIS ми використовуємо конфігурації. роль Тип.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Повний кваліфікований стіл.column. Кілька може бути надана, відокремлена комою (без пробілів).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Згенерований SQL запитів для тестування для цієї вразливості. Це поле можна редагувати для виправлення запиту.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Група пристроїв, на яких працює базова лінія.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Група, яка забезпечує перелік пристроїв для інтеграції. Посилання <code>groups.id</code>й';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Час дня, коли це завдання повинно виконуватися (* за кожну годину).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'id з підключеного пристрою. Посилання <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Текстовий стовпчик (інтегер) в базі даних (читати тільки).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Важливість цієї базової лінії (не використовується ще).';

$GLOBALS["lang"]['The integer of severity.'] = 'Цілі тяжкості.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Внутрішнє значення, переформатоване в цьому форматі.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Іп-адреса методу Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Мова для перекладу веб-інтерфейсу для користувача.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Остання дата і час виконання цього елемента (прочитати тільки).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Останній раз, що Open-AudIT отримує деталі цього пристрою.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Останнім часом було виконано еталони.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Останній раз ця інтеграція була запущена.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Ліцензійна кінцева точка дозволяє відстежувати кількість ліцензій, що знаходяться на ваших пристроях.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Логіка для вибору пристрою міститься в файлі devices_helper.php, який можна знайти тут';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Настроювання дозволу на апаратне забезпечення не надано дозволу місцевого активування для використання COM Server';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Максимальна фізична вага (в КГ) ця стійка може триматися.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Максимальний загальний BTUs цей стелаж оцінюється.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Мінімальні необхідні атрибути для атрибутів';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'За хвилину години, коли це завдання повинно виконуватися (* за кожну хвилину).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'місяць року, коли це завдання повинно виконуватися (* на місяць).';

$GLOBALS["lang"]['The name given to this item.'] = 'Назва, надана цим елементом.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Назва, надана цим елементом. В ідеалі вона повинна бути унікальною.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Імя користувача (використано логіном). В ідеалі вона повинна бути унікальною.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Назва пов\'язаної хмари (за потреби).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Назва програмного пакету, як перевірена Open-AudIT. Використовуйте знак відсотка % як дикої картки.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Імя користувача, який за останні змінив або додано цей елемент (прочитати тільки).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Імя, що надається провайдером.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Мережа у форматі 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Підмережа для виконання відкриття.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Новий агент працює в PowerShell версії старого сценарію аудиту при підготовці до знецінення VBScript (так, воно приходить).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Оффсет - це кількість пристроїв, які ви хочете повернути дані з.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Єдиний необхідний дозвіл / Імя політики (у нашому тестуванні)';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Додатковий вторинний стовпчик. НЕБЕ: Коли тип = трафік, це являє собою жовтий запит.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Додатковий третій стовпчик. НЕБЕ: Коли тип = трафік, це являє собою зелену запиту.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Порядок отримання інформації про ретріеваль, сш, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Консультація даного пристрою.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Пароль (якщо не користуватись користувачем, що працює скриптом).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Первинний метод авторизації (що користувач може зробити) на основі ролей користувачів. Визначені ролі адміністратора, org_admin, репортера та користувача за замовчуванням. Кожна роль має набір дозволів (справа, читання, оновлення, видалення) для кожного кінцевого пункту. Стандартні ролі, що відвантажуються, повинні накривати 99.9 відсотків випадків використання. У Open-AudIT Enterprise включена можливість визначити додаткові ролі та редагувати існуючі ролі.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Процес ідентифікатор даного пункту черги.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Процес, який був використаний останнім, щоб отримати деталі про пристрій';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Метою цієї сторінки ліцензування є список продуктів і ліцензій, що включені до першої хвилі, комерційної продукції, включаючи продукти на основі відкритих джерел. Open-AudIT ліцензована з першої хвилі за AGPLv3 або пізніше з Підприємством та професійним функціоналом, ліцензованим за комерційними умовами. Open-AudIT при завантаженні з FirstWave може включати в себе наступні бібліотеки та проекти, які поставляються неможливими і ліцензованими як зазначені:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Запропоновані властивості повинні бути в окремому списку. Властивості повинні бути повністю кваліфікованими - тобто, система.hostname (не просто Імя).';

$GLOBALS["lang"]['The result of the command.'] = 'Результат команди.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'У номері стійка знаходиться.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Ряд стійки знаходиться в.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Пошук групи на сервері LDAP не вдалося. Перевірити логи сервера LDAP. Ви створили ці групи (для ролей і орг) на сервері LDAP і приписали користувачів LDAP до них?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Секретний ключ, який використовується в поєднанні з ключем API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Програма end-of-life';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Програма end-of-service-life дата.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Спеціальний стовпчик бази даних з таблиці бази даних.';

$GLOBALS["lang"]['The specific database table.'] = 'Таблиця бази даних.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Стандартні параметри термінів Nmap. Попередній набір на T4 (агресивний).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Стандартні параметри термінів Nmap. Ми зазвичай використовуємо -T4 (Aggressive) як це рекомендується для гідного широкосмугового або ефірного підключення.';

$GLOBALS["lang"]['The status of this integration'] = 'Статус на сервери';

$GLOBALS["lang"]['The status of this queued item.'] = 'Статус на сервери';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Кроки нижче окреслюють процес.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Цільовий IP-адреса входу в журнал (за наявності).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Цільовий комп’ютер для аудиту. \\" означає локальнийhost.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Нефільтрований стан означає, що порт доступний, але Nmap не може визначити, чи є він відкритим або закритим. Тільки сканування ACK, який використовується для карткового брандмауера, класифікує порти в цей стан. Сканування нефільтрованих портів з іншими типами сканування, такими як сканування вікон, сканування SYN або сканування FIN, може допомогти вирішити, чи відкриваються порт.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Унікальний ідентифікатор цього сервера.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Використовується цей колектор. Посилання <code>users.id</code>й';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Користувач в Active Directory / OpenLDAP повинен бути прямим членом обов\'язкових груп Open-AudIT для ролей і організацій. Учасник групи, яка є членом іншої групи, яка є членом групи Open-AudIT.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Користувач є в LDAP і їх облікові дані дійсні, але не в будь-якому з груп Open-AudIT LDAP для Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Користувач перебуває в LDAP і їх облікові дані дійсні, але не в будь-якому з груп Open-AudIT LDAP для ролей.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Користувач є в LDAP і їх облікові дані дійсні, але не в будь-якому з необхідних груп Open-AudIT LDAP.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Користувач знаходиться в групі LDAP, яка відповідає цьому Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Користувач знаходиться в групі LDAP, яка відповідає цій ролі.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Користувач не входить до групи LDAP, яка відповідає цьому Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Користувач не входить до групи LDAP, яка відповідає цій ролі.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Користувач, який був вказаний, існує в LDAP, але Open-AudIT не налаштований, щоб споживати групи LDAP для ролей і що користувач не існує в Open-AudIT. Вибираємо <i>Використовуйте LDAP для ролей</i> на Open-AudIT LDAP Серверний екран або створення цього користувача в рамках Open-AudIT і присвоєння ролей і orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Імя користувача';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Імя користувача, що використовується для доступу до зовнішньої системи.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Деталі користувачів не були отримані від LDAP. Перевірити логи сервера LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Деталі користувачів були отримані з LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Адреса електронної пошти користувачів.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Звичайні години роботи на цьому сайті.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Значення, призначене до пункту.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Вартість, яка зберігається для цього конкретного елементу.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Назва постачальника в якості записів CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Компанія, що приймається з CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Веб-каталог на хості, який встановлюється Open-AudIT (потрібно причіпний стібок).';

$GLOBALS["lang"]['The widget at position '] = 'Віджет на позиції ';

$GLOBALS["lang"]['The width of this device.'] = 'Ширина даного пристрою.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Їхні орхідеї та їхні нащадки';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Наші партнери';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'їх орхідеї, аспенди та нащадки';

$GLOBALS["lang"]['Then'] = 'Далі';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Далі створіть новий метод Auth у Open-AudIT, перейшовши до меню -> адмін -> Аутто методи -> Створити авт. Надайте Імя та встановіть Імя <i>Тип</i> до Ентра.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Ви можете використовувати Open-AudIT (не підтримується) для отримання аудиторських даних безпосередньо від клієнтів. Про компанію <strong>не буде</strong>, але якщо ви не використовуєте Discovery (основна функція Open-AudIT була розроблена навколо), ви також можете отримати дані пристрою. Вам потрібно запустити скрипти аудиту безпосередньо на клієнтів, використовуючи cron, або використовувати функцію Агента Windows (Enterprise only).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Є кнопка для експорту в JSON. Це буде відображати тільки таблицю пристроїв атрибутів. Для експорту пристрою з усіма пов\'язаними таблицями компонентів див. деталі пристрою, потім додайте';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Немає необхідності вручну редагувати кожен окремий пристрій.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Не потрібно нічого робити, якщо ви працюєте Open-AudIT на сервері Linux.<br/><br/>Клієнти Windows просто тонкі і не вимагають спеціальних дій, однак.... Щоб увімкнути цю функцію скрипт аудиту необхідно запустити локально на цільовій системі Windows. Ви не можете керувати віддалено, оскільки ми робимо з WMI дзвінками при запуску скрипту аудиту на одній машині Windows, при налаштуванні другої машини Windows. Для цього нам необхідно копіювати скрипт аудиту на цільову машину Windows, а потім запустити його. На жаль, сервісний обліковий запис, який працює в Apache, є локальним обліковим записом системи. Цей обліковий запис не має доступу до віддалених (мережних ресурсів) ресурсів. Щоб працювати над цим питанням, служба повинна працювати під іншим обліковим записом. Ви можете спробувати будь-який обліковий запис, який вам подобається, доки він має необхідні привілеї. У локальному обліковому записі адміністратора локальний доступ.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Це лише приклади. Ви можете налаштувати ці атрибути, щоб відповідати вашим особливостям LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Ці параметри дозволяють вам перевірити тільки те, що це корисно і актуально для вас, заощаджуючи час обробки і дозволяючи виявляти свою мережу в порядку.';

$GLOBALS["lang"]['Thing'] = 'Панчохи';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Думка електронної пошти.domain1.com і mail.domain2.com - однойменна назва.';

$GLOBALS["lang"]['Third'] = 'Третій';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Цей CVE буде відновлено і перезаписати існуючий CVE, якщо він існує.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Цей Org не має групи AD, зазначених. Перевірити деталі ролей в Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Цей Org не має групи AD, зазначених. Перевірити деталі ролей в Open-AudIT. <span class=\'\"confluence-link\"\'>Ви створили ці групи (для orgs) на сервері LDAP та приписали користувачів LDAP до них?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ця роль не має групи AD, зазначених. Перевірити деталі ролей в Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Цей атрибут зберігається як об\'єкт JSON. Список всіх колекцій і містить назву колекції разом з <code>c</code>й <code>r</code>й <code>u</code> й <code>d</code> які представляють собою створення, читання, оновлення та видалення. Ці дії користувач може виконуватися на предметах з тієї чи іншої колекції.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Це може бути як вархар (текстове поле), список (список значень, які можна вибрати) або дати.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Цей код спирається на велику роботу, виконану';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Цей колектор універсально унікальний ідентифікатор.';

$GLOBALS["lang"]['This column is required by'] = 'Цей стовпчик необхідний';

$GLOBALS["lang"]['This column is required by '] = 'Цей стовпчик необхідний ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Цей опис автоматично розповсюджується і має бути ідеально лівим.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Ця кінцева точка дозволяє вам додати з\'єднання, які є частиною вашої мережевої інфраструктури, вона дозволяє налаштувати різні атрибути, вказати, де це з\'єднання знаходиться і організація, яка вона належить.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Ця помилка вказує, що SMB1 був вимкнений або видалений з цільової машини. Це нормально для сучасної версії Windows, і ви побачите це повідомлення, коли спроба підключення SMB2 не вдалося. Якщо підключення SMB2 не вдається, ми спробуємо SMB1, щоб увімкнути відкриття на старих версіях Windows. Якщо ціль Windows машини <i>є</i> не вдалося запустити застарілу версію Windows. У цьому випадку див.';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Ця помилка вказує, що не достатня кількість віртуальної пам\'яті або Paging файл квоти доступні для завершення зазначеної операції. Ви повинні спробувати знову пізніше.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Ця помилка вказує на те, що дані, які використовуються або неправильні, не існує або не мають достатніх привілеїв для входу на віддалено до цільової Windows машини. Ви повинні перевірити дані і перевірити нижче.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Цей приклад створює список всіх модулів, позначених як';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Цей приклад створює список пристроїв та відкритих портів, протоколів та програм, які були знайдені скануванням NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Цей приклад створює список пристроїв, де поля функції або опису є порожніми OR дата придбання є за замовчуванням.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Цей приклад запиту отримує список пристроїв OVER 3 роки. Запит використовує сьогодні';

$GLOBALS["lang"]['This example uses'] = 'Цей приклад використовує';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ця функція вимагає професійної або корпоративної ліцензії.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Ця функція, тому що вона має можливість впливати на цільові пристрої більше, ніж зазвичай повинні бути ввімкнені вручну. Щоб увімкнути цю функцію, змініть налаштування пункту функції_executables до <i>й</i>й';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Цей файл показує додаток Linux, щоб визначити, чи є будь-які заплановані завдання, які повинні виконуватися.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Ця форма надає простий спосіб відкрити пристрої в мережі. Для більш детальних варіантів можна створити індивідуально';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Це також спосіб роботи PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Це опціональна опція конфігурації, включена в налаштування Open_use_org_id_match у глобальній конфігурації.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Це, як правило, первинний стовпчик, якщо інше налаштовано. УВАГА: Коли тип = трафік, це являє собою вторинний текст.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Це, ймовірно, через час MySQL вимкнено. MySQL, як правило, використовує час роботи пристроїв. Ви можете перевірити це';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Це означає, що користувачі не повинні бути глобально унікальними, це, безумовно, не гарантує цього.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Це каталог, де ми зберігаємо будь-які вкладення на пристрої.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Це буде використовуватися як перша точка виклику, коли проблеми з усуненням несправностей Open-AudIT. Ви можете натиснути кнопку Експорт у верхній частині праворуч, щоб отримати це як файл JSON (для того, щоб бути доданий до квитка підтримки / електронної пошти.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'У цьому питанні розглядається.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Цей елемент повинен відповідати значенням вибраного атрибуту або містить ідентифікатор запиту, який буде використовуватися.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Цей елемент повинен відповідати значенням вибраного атрибуту.';

$GLOBALS["lang"]['This license expires on'] = 'Ця ліцензія закінчується на';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Цей дозвіл на безпеку може бути модифікований за допомогою адміністративного інструменту.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Це слід прокоментувати після усунення неполадок, оскільки режим відключення буде генерувати багато журналів на диску без зайвої вигоди.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Це має бути глобально унікальним, але я бачив екземпляри, де це не є.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Це має бути встановлена до 1 або висоти стійки.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Це має бути повністю кваліфікована назва поля в базі даних. В даний час підтримуються стовпці з системи, полів та облікових таблиць. EG: система.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Цей стан використовується, коли Nmap не може визначити, чи є порт закритий або фільтрований. Використовуються тільки для сканування IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Це буде автоматично.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Це значно сповільнить сканування відкриття.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Це дозволить видалити поточні рядки в';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Це буде остаточно DELETE цієї ліцензії.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Це покаже вам форму редагування Булька. Будь-які атрибути, які ви встановите на цю форму, будуть застосовуватися до всіх вибраних пристроїв. Ви можете встановити декілька атрибутів одночасно.';

$GLOBALS["lang"]['Thursday'] = 'Четвер';

$GLOBALS["lang"]['time_caption'] = 'Час затримання';

$GLOBALS["lang"]['Time Caption'] = 'Час затримання';

$GLOBALS["lang"]['time_daylight'] = 'Погода';

$GLOBALS["lang"]['Time Daylight'] = 'Погода';

$GLOBALS["lang"]['Time to Execute'] = 'Час виконання';

$GLOBALS["lang"]['timeout'] = 'Розклад';

$GLOBALS["lang"]['Timeout'] = 'Розклад';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Час за Ціль (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'час на ціль. Зачекайте X секунд для цільової відповіді.';

$GLOBALS["lang"]['Timesatamp'] = 'Мапа';

$GLOBALS["lang"]['Timestamp'] = 'Таймер';

$GLOBALS["lang"]['timing'] = 'Тим';

$GLOBALS["lang"]['Timing'] = 'Тим';

$GLOBALS["lang"]['Timor-Leste'] = 'Тимор-Ліста';

$GLOBALS["lang"]['Title'] = 'Головна';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Для нового файлу .env (в одному каталозі). Тепер відредагуйте цей новий файл і не погоджуєтесь (відправлення No) рядок нижче (лінія 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Для того, щоб фактично виконати запит, додайте / виконайте, таким чином /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Для перевірки машини необхідно мати облікові дані та доступ до рівня адміністратора.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Для перевірки віддаленої машини на домені Active Directory, ваш поданий користувач (або якщо не передбачено, користувач працює скрипт) повинен бути членом групи адміністраторів цільових машин (або підгрупи).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Для перевірки віддаленої машини, яка не знаходиться в домені, необхідно використовувати обліковий запис адміністратора (не <i>Увійти</i> адмін рахунок, <i>Головна</i> Адміністратор рахунку) на цільовому ПК. #1 і #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Для перевірки локальнихhost, будь-які подані облікові дані нерозраховані, а підключення здійснюється за допомогою деталей користувача, що працює скриптом.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Для порівняння програмного забезпечення ми перевіряємо назву та версію. Ми можемо самі зателефонувати одержувачу і узгодити зручний час і місце вручення квітів, а якщо необхідно, то збережемо сюрприз. З цієї причини базові лінії з використанням програмних політик не працюватимуть при запуску пристрою, який не був перевірений 1.10 (не менше). Політика програмного забезпечення може протестувати проти версії <i>рівні</i>й <i>більше</i> або <i>дорівнює або більше</i>й';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Щоб створити новий запис натисніть кнопку Створити кнопка у верхньому правому куті.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Для створення ресурсу необхідно надати необхідні дані.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Щоб увімкнути пульт дистанційного керування (Vista або вище) для перевірки, який не знаходиться на домені, за допомогою облікового запису в групі адміністраторів, крім фактичного облікового запису адміністратора див. нижче розділ на UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Щоб увімкнути це, створіть новий пункт Auth, перейшовши до меню -> адмін -> Auth -> Створити метод Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Щоб виконати скрипт Windows Powershell, відкрийте командний ряд як Адміністратор і використовуйте наступний командний ряд';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Щоб виконати скрипт аудиту, відкрити термінал і використовувати наступний командний ряд';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Щоб відфільтрувати майнове значення, використовуйте назву майна. Оператори, які повинні претендувати на вартість';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Щоб встановити Nmap на Windows, відвідайте сторінку Nmap на сайті';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Щоб зробити зміни, слідуйте за кроками нижче.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Для отримання Tenant ID. Відкрийте портал Azure натисніть на Azure Active Directory, властивості та ідентифікатор Tenant відображається як ідентифікатор каталогу - не відмивайте мене за Імя mismatch, тобто як Microsoft рулон.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Щоб отримати ключ, ввійдіть в Консоль AWS і виберіть Імя користувача, після чого My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Щоб повернути конкретний елемент компонента.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Щоб повернути всі елементи для комп\'ютерного типу для конкретного пристрою.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Для повернення всіх елементів для компонентного типу. Якщо ви хочете використовувати всі програми, які ви хочете використовувати';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Для зворотного сортування вставте мінус, таким чином';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Для запуску тестового сценарію на цільовому ПК Windows';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Для вибору пристроїв, щоб бути інтегрованими, ми використовуємо nmis_manage = y, але ви можете як (наприклад,) тип = маршрутизатор. Ви також можете використовувати групу або запит, якщо ви віддаєте перевагу більш складним.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Для сортування стовпчиком бази даних використовуйте';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Щоб використовувати цю функцію Enterprise, вам спочатку потрібно створити свій користувач у Open-AudIT у звичайному режимі. Присвоєння паролю не потрібно. Ви повинні призначити Ролі та оргії. Імя користувача в Open-AudIT повинен відповідати Entra <i>Імя користувача</i> атрибут. Не потрібно для повного імені або електронної пошти - це буде заселений з Entra. Якщо ви не знаєте користувачів <i>Імя користувача</i>не боятися. Ви можете створити новий метод Auth у Open-AudIT і додатку Enterprise в Entra і коли користувач намагається зареєструватися на Open-AudIT без попереднього користувача, перевірити журнали і ви побачите їх <i>Імя користувача</i> Зареєструватися на вашу конвенція.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Щоб використовувати цю функцію Enterprise, вам спочатку потрібно створити свій користувач у Open-AudIT у звичайному режимі. Присвоєння паролю не потрібно. Ви повинні призначити Ролі та оргії. Імя користувача в Open-AudIT повинен відповідати OKTA <i>Імя</i> атрибут. Не потрібно для повного імені або електронної пошти - це буде заселений з OKTA. Якщо ви не знаєте користувачів <i>Імя<i>не боятися. Ви можете створити новий аут Ментод в Open-AudIT і додаток в OKTA і коли користувач намагається зареєструватися на Open-AudIT без попереднього користувача, перевірити журнали і ви побачите їх <i>Імя<i> Зареєструватися на вашу конвенція.<br/><p>Далі створіть новий метод Auth у Open-AudIT, перейшовши до меню -> адмін -> Аутто методи -> Створити авт. Надайте Імя та встановіть Імя <i>Тип</i> до Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Щоб використовувати цю функцію, ви повинні увімкнути відповідні елементи конфігурації (для AWS) та відповідну назву (для Azure). Це буде зроблено автоматично в перший раз, коли виконується хмарне відкриття. Для отримання більш детальної інформації про правила відповідності Open-AudIT див. ДОКУМЕНТИ';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Щоб переглянути деталі запиту, стандартна структура URL /open-audit/index. php/queries/{$id} слід використовувати.';

$GLOBALS["lang"]['Togo'] = 'Того';

$GLOBALS["lang"]['Tokelau'] = 'Токелау';

$GLOBALS["lang"]['Tonga'] = 'Тонга';

$GLOBALS["lang"]['toolbar_style'] = 'Стиль панелі інструментів';

$GLOBALS["lang"]['Toolbar Style'] = 'Стиль панелі інструментів';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Топ Nmap TCP порти';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Топ Nmap TCP порти. Топ 10, 100, 1000 портів для сканування як на Nmaps "топ порти" параметри.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Топ Nmap порти UDP';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Топ Nmap Порти UDP. Топ 10, 100, 1000 портів для сканування як на Nmaps "топ порти" параметри.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Традиційна китайська';

$GLOBALS["lang"]['Traffic Light'] = 'світлофора';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Тринідад і Тобаго';

$GLOBALS["lang"]['Troubleshooting'] = 'Виправлення несправностей';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Виправлення несправностей LDAP Увійти';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Спробуйте Open-AudIT Підприємство, на нас без обмеження часу. Всі особливості підприємства. Обмежено до 20 пристроїв.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Спробуйте всі останні функції з безкоштовною ліцензією на пристрої Open-AudIT Enterprise. Про нас ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Спробуйте журналювання за допомогою користувача LDAP. Ми припустимо, що це не буде (інше, чому ви все ще читаєте це?). Далі прокоментуйте рядок з файлу вище.';

$GLOBALS["lang"]['Tuesday'] = 'П\'ятниця';

$GLOBALS["lang"]['Tunisia'] = 'Туніс';

$GLOBALS["lang"]['Turkey'] = 'Туреччина';

$GLOBALS["lang"]['Turkish'] = 'Турецька';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Тип: Це може бути як вархар (текстове поле) або список (список значень, які можна вибрати).';

$GLOBALS["lang"]['Types of Networks'] = 'Типи мереж';

$GLOBALS["lang"]['URL'] = 'Контакти';

$GLOBALS["lang"]['uuid'] = 'УУЇД';

$GLOBALS["lang"]['UUID'] = 'УУЇД';

$GLOBALS["lang"]['udp_ports'] = 'Порти Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Порти Udp';

$GLOBALS["lang"]['Uganda'] = 'Уганда';

$GLOBALS["lang"]['Ukraine'] = 'Україна';

$GLOBALS["lang"]['Ukrainian'] = 'Українська';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Підго етап 1 аудит (довідковий огляд)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Підго етапу 2 аудит (огляд за процесом)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Аналіз';

$GLOBALS["lang"]['Unfiltered'] = 'Нефільтрований';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Оновлення Vulnerabilities';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Оновлення атрибуту {collection} запис.';

$GLOBALS["lang"]['Update attributes'] = 'Оновлення атрибутів';

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

$GLOBALS["lang"]['Urdu'] = 'Урду';

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

$GLOBALS["lang"]['Use Proxy'] = 'Використання проксі';

$GLOBALS["lang"]['Use SNMP'] = 'Використання SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Використання SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Використовуйте безпечні (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Використовуйте послугу виявлення';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Використовуйте послугу виявлення. Коли виявлений порт виявлений як відкритий, якщо встановити <i>й</i>, Nmap перемістить цільовий пристрій в спробі визначити версію сервісу, що працює на цьому порту.<br/>Це може бути корисним при виявленні некласифікованих пристроїв. Це не раніше використовується.';

$GLOBALS["lang"]['Use WMI'] = 'Використання WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Використання <i>Імя користувача</i> OIDC - Відкрите підключення та підключення <i>Тип програми</i> Веб-додаток. Зареєструватися <i>Про нас</i>й';

$GLOBALS["lang"]['Use for Authentication'] = 'Використання для аутентифікації';

$GLOBALS["lang"]['Use for Roles'] = 'Використання для ролей';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Використовуйте стандартні параметри встановлення при відображенні та натисніть кнопку <i>Я</i>й <i>Про нас</i> і <i>Увійти</i> кнопки встановити Nmap.';

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

$GLOBALS["lang"]['user_id'] = 'Імя користувача';

$GLOBALS["lang"]['User ID'] = 'Імя користувача';

$GLOBALS["lang"]['user_interaction'] = 'Користувачі';

$GLOBALS["lang"]['User Interaction'] = 'Користувачі';

$GLOBALS["lang"]['User Membership Attribute'] = 'Атрибут користувачів';

$GLOBALS["lang"]['user_name'] = 'Імя користувача';

$GLOBALS["lang"]['User Name'] = 'Імя користувача';

$GLOBALS["lang"]['User Policies'] = 'Політика користувача';

$GLOBALS["lang"]['Username'] = 'Логін';

$GLOBALS["lang"]['username'] = 'Логін';

$GLOBALS["lang"]['users'] = 'Користувачі';

$GLOBALS["lang"]['Users'] = 'Користувачі';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Користувачі працюють аналогічними портами Netstat. Якщо користувач існує з відповідним Імям, статусом та деталями пароля (змінні, завершені, необхідні) після проходження політики.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Користувачі, Ролі та оргії';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Використовуйте CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Використання';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Використання Entra для Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Використання LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Використання OKTA для Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Використання параметра формату корисно при використанні веб-браузера, але ви хочете бачити результат у форматі JSON. Додавання формату=json досягає цього. У цьому випадку ми повертаємо надану сторінку. Використання API для отримання JSON ви повинні встановити Приймальний заголовок';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Зазвичай Мбс, від Місцезнаходження А.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Зазвичай Мбс, від Місцезнаходження B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Зазвичай Мбс, для Розташування А.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Зазвичай Мбс, на Розташування Б.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Зазвичай слід встановити до 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Типи цін';

$GLOBALS["lang"]['values'] = 'Вартість';

$GLOBALS["lang"]['Values'] = 'Вартість';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Вартість: У разі виникнення <i>Новини</i> поле, це повинно бути кома відокремлений список дійсних значень.';

$GLOBALS["lang"]['Vanuatu'] = 'Вуату';

$GLOBALS["lang"]['VarChar'] = 'Вархар';

$GLOBALS["lang"]['Varchar'] = 'Варчар';

$GLOBALS["lang"]['variable'] = 'Сортування';

$GLOBALS["lang"]['Variable'] = 'Сортування';

$GLOBALS["lang"]['Various'] = 'Різне';

$GLOBALS["lang"]['vendor'] = 'Про компанію';

$GLOBALS["lang"]['Vendor'] = 'Про компанію';

$GLOBALS["lang"]['Vendor Report'] = 'Звіт про компанію';

$GLOBALS["lang"]['vendors'] = 'Постачальники';

$GLOBALS["lang"]['Vendors'] = 'Постачальники';

$GLOBALS["lang"]['Venezuela'] = 'Венесуела';

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

$GLOBALS["lang"]['Vietnamese'] = 'В\'єтнамська';

$GLOBALS["lang"]['View'] = 'Переглянути';

$GLOBALS["lang"]['View All'] = 'Переглянути всі';

$GLOBALS["lang"]['View Details'] = 'Переглянути подробиці';

$GLOBALS["lang"]['View Device'] = 'Переглянути пристрій';

$GLOBALS["lang"]['View Discovery'] = 'Переглянути Discovery';

$GLOBALS["lang"]['View Policy'] = 'Політика';

$GLOBALS["lang"]['View Racks'] = 'Переглянути Раки';

$GLOBALS["lang"]['View the'] = 'Переглянути';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Переглянути останнє повідомлення, натисніть кнопку "Підтримка" у верхній правій панелі інструментів. Це забезпечить налаштування відкриття, налаштування елементів, список пристроїв відкриття та журнали для цього певного відкриття.';

$GLOBALS["lang"]['View the release notes on the'] = 'Перегляд відміток релізу на';

$GLOBALS["lang"]['Virtual Private Network'] = 'Віртуальна приватна мережа';

$GLOBALS["lang"]['Virtual private network'] = 'Віртуальна приватна мережа';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Результати та результати';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilities спочатку опубліковано до 1 січня, 2025 (за замовчуванням). Ми побачимо, що немає сенсу в поверненні вразливостей з років до. Це може бути змінено в конфігурації.';

$GLOBALS["lang"]['vulnerability_id'] = 'Ідентифікатор вразливостей';

$GLOBALS["lang"]['Vulnerability ID'] = 'Ідентифікатор вразливостей';

$GLOBALS["lang"]['Vulnerability Status'] = 'Статус на сервери';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - При створенні базової бази за допомогою політик програмного забезпечення, в даний час Centos і RedHat пакет ядра за допомогою імен <i>ядер</i> і <i>ядер-девел</i>й Існує кілька пакетів з цим Імям та різними версіями. Деб\'ян на основі дистриб\'юторів використовують імена <i>English, Українська, Français...</i>, замітка номер версії входить в назву пакета. Оскільки операційні системи RedHat використовують цей формат і згодом мають кілька ідентичних назв пакетів з різними версіями, ми в даний час виключаємо <i>ядер</i> і <i>ядер-девел</i> від політики програмного забезпечення. Це може бути адресований в майбутньому оновлення.';

$GLOBALS["lang"]['WHERE'] = 'ЗДОРОВ\'Я';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Вимоги до показників WMI';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Зачекайте, щоб завершити, потім вставте в цю наступну лінію для установки Агента.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Ми також маємо можливість Ping Перед скануванням (імпортант для маршрутизаторів з довгими живими кешами ARP). Це зазвичай хороша ідея.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Ми також маємо наші елементи дії (які виконуються в порядку нижче):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Ми часто запитуємо це питання і відповідь, безумовно, <i>це залежить</i>й Це залежить від кількості IP-адрес, які слід відсканувати, швидкості підключення мережі, швидкості сканування пристроїв, типу пристроїв, які скануються, кількість різних облікових даних, які проходять перевірку та швидкості сервера Open-AudIT. Ми не маємо калькулятора, який дозволить нам ввести ці змінні та повернути значення. Просто занадто складний. Зазвичай я обмежую свої відкриття до 256 IP-адрес - тобто, a / 24 підмережі. У нас були клієнти сканування /16 підмереж (65k адрес) і це працює - але це може зайняти тривалий час. Ви набагато краще відсканувати в / 24 блоках. Якщо ви просто не знаєте, що ваші адресні діапазони, то це хороший випадок для відкриття насіння.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'У нас є більш детальна інструкція';

$GLOBALS["lang"]['We have tests for:'] = 'У нас є тести:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Ми сподіваємося, що ви знайдете Open-AudIT, як ми робимо.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Ми спочатку встановлюємо список типових сценаріїв з параметрами за замовчуванням. Список скриптів відображається на /scripts. Ці скрипти за замовчуванням не можна видалити. Ви можете створювати додаткові скрипти для використання вам, як це потрібно. Ваш скрипт буде базуватися на одному з існуючих сценаріїв і мають спеціальні параметри, які застосовуються. У меню можна завантажити скрипти: Discover -> Аудит сценаріїв -> Список Аудит сценаріїв.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Для ефективного спілкування з пристроями на вашій мережі потрібні деякі облікові дані.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Ми надішлемо мінімальну кількість даних і нічого не чутливого характеру. Ми надішлемо наші дані про ліцензію (Імя, тип і т.д.), наші дані про застосування (Імя, версія, платформа, часовий пояс і т.д.), будь-які помилки входу, кількість типів пристроїв та кількість використовуваних функцій. <i>Будь-який</i> У середовищі є пристрої і це єдиний шматок ваших даних, які ми надішлемо. І тільки тип пристрою і кількість. Не виробник, не модель. Відправляємо нічого особливого. Немає мереж. Немає IP-адреси. Немає версій ОС. Без назви програмного забезпечення. Поле UUID і сервера - sha256 кодовані (наприклад, ми не знаємо значення). Ми надішлемо лише дані, необхідні для покращення продукту. Ми сподіваємося на те, що ви бачите, щоб ви зрозуміли, що ми з цими даними. Ми надаємо направляючі напрями, де зосереджені вдосконалення та нові можливості в продукті.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Ми прагнемо використовувати розширення Google Chrome, який називається Postman для тестування фактичних проблем. Ви можете встановити і протестувати з цим.';

$GLOBALS["lang"]['Web'] = 'Веб-сайт';

$GLOBALS["lang"]['Web Application Routes'] = 'Статус на сервери';

$GLOBALS["lang"]['Web Server Discovery'] = 'Веб-сервер Discovery';

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

$GLOBALS["lang"]['Welcome to'] = 'Привітання';

$GLOBALS["lang"]['Western Sahara'] = 'Західний Сахара';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Що я можу перевірити, якщо я не має значення';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Що про поля, які я хочу від NMIS, які не в Open-AudIT? У нас ви потрапили. Будь-які поля в зовнішній системі (NMIS), які не існують в Open-AudIT будуть автоматично створюватися як спеціальні поля Open-AudIT.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Що про інші мережеві пристрої? Мислити перемикачі, маршрутизатори, принтери тощо. Очевидно, що це найкраще, якщо ви можете надати деякі облікові дані SNMP для цих пристроїв. Вони тільки потрібні <i>читати</i> доступ. Але якщо ви не хочете зробити навіть це, немає нічого не зупиняючи вас від запуску відкриття, пошук пристроїв та створення правила або два, щоб визначити їх (можливо використовувати MAC Адреса префікс в поєднанні з відкритими портами, наприклад). Ви не будете мати багато інформації, але ви знаєте, що вони знаходяться в мережі, що вони, і коли минулого разу вони побачили. Ви також побачите, якщо все нове з\'являється в мережі.';

$GLOBALS["lang"]['What do we send?'] = 'Що ми надішлемо?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Що це означає вам?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Що таке призначення цієї стійки.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Що таке тип місцезнаходження. Можливі види, що проводяться в <code>attributes</code> стіл.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Коли Open-AudIT на Linux відкриває Windows апарат, щоб виконати віддалену команду, яку ми використовуємо';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Коли Open-AudIT на Windows виявляє машину Windows, щоб виконати віддалену команду, яку ми використовуємо';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Коли Open-Aud IT отримує дані про пристрій, або шляхом виявлення пристрою під час проведення перевірок або за допомогою імпорту пристрою, необхідно визначити, чи відповідає даний пристрій, який вже існує в базі даних, або якщо це новий пристрій, який повинен бути доданий. Open-AudIT використовує серію дванадцять майнових матчів для визначення цього. Правила матчу працюють як OR порівняння, не і. Це означає, що перше правило, яке відповідає поле у відкритому пристрої до одного в DB вирішує як існуючий пристрій. Всі правила здачі повинні бути не в порядку для пристрою, щоб бути новим і результат створення нового запису.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'При використанні даних Ви повинні включати в себе токени доступу. Доступний токен генерується з кожним типом запиту, щоб зробити GET (наприклад,) і Accept: Application/json, запакувати відповідь на мета→access_token, і включати його з вашим запитом. Для цього необхідно розмістити дані поля[access_token], IE, рівень верхнього рівня.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Коли пристрій відкрив скрипт аудиту буде вводитися з файлом (або каталогом) деталі. І аудит_linux.sh і аудит_windows.vbs будуть ізольовані, незалежно від шляху до файлу. Якщо ви думаєте <i>але викласти шлях Linux в Windows, машина буде розбити речі!</i>Ви не отримаєте ніяких даних з цього файлу або каталогу.<br/>Отримані дані будуть зберігатися в <i>Головна</i> Таблиця бази даних і зберігаються як будь-який інший атрибут. Деталі файлів будуть зберігатися як будь-який інший атрибут і генерувати сповіщення, якщо будь-який з наступних атрибутів зміни - <i>Імя</i>й <i>христина</i>й <i>Увійти</i>й <i>Остання_зміна</i>й У таблиці міститься система_id, first_seen, last_seen і поточні стовпчики, а також деталі файлів.<br/>Атрибути записані:<br/><ul><li>Windows - Імя, розмір, каталог, SHA1 хеш (з вмістом файлу), останні зміни, дозволи, власник, версія (редагування файлів).</li><br/><li>Linux - Імя, розмір, каталог, SHA1 хеш (з вмістом файлу), останні зміни, дані метаданих, останні зміни, дозволи, власник, група, інод.</li></ul>Ви побачите розділ як скрипти аудиту Windows, так і Linux, як нижче';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Якщо виконується відкриття, обрано відповідний варіант сканування відкриття та налаштування використовуються Nmap для сканування цільових пристроїв. Параметри сканування визначає, які порти nmap сканування, як швидко вони сканують і чи не сканують nmap ping використовується для визначення, якщо IP живо чи ні.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Після запуску, обраний варіант сканування відповідного відкриття та налаштування, що використовуються Nmap для сканування цільових пристроїв. Якщо параметр не вибрано, пункт налаштування за замовчуванням (discovery_default_scan_option) вибрано та використовується. Open-AudIT Community буде використовувати параметри за замовчуванням для всіх відкриттів.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Коли відкриття підмережі виконується спочатку, якщо вибрано, сканування карт на діапазоні або IP-адрес. Будь-який пристрій, який відповідає порту, буде відскановано. Якщо сканування Nmap не вимагається, кожен IP автоматично сканується. Які порти? Що визначається';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'При перевірці пристрою Linux через SSH деякі дистриб\'ютори Linux не дозволяють виконувати команду sudo без TTY (які ми робимо). Щоб повністю перевірити один з цих Linux дистриб\'юторів, краще надати кореневих облікових даних користувачів. Якщо не вдається кореневий корінь і не можна, скрипт аудиту буде працювати, але не міститиме кількості даних, які б інакше. Потрібні перевірки з використанням кореневих (або локально з використанням sudo) будуть надавати додаткові відомості про систему і генерувати кілька <i>зміни</i>й';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'При поєднанні пристроїв, які системи є авторитетним джерелом інформації.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Після завершення закрийте вікно команд і ви зробили!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'При створенні віджету, якщо вибрати <i>Головна</i> кнопка, яку ви будете мати можливість завантажувати свій власний користувацький SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'При інтеграції пристроїв з зовнішньої системи, якщо пристрій не існує в Open-AudIT повинен створювати його?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'При інтеграції пристроїв з зовнішньої системи, якщо пристрій було оновлено в зовнішній системі, необхідно оновити її в Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'При розслідуванні Discovery, підтримка буде вимагати експортувати журнали Discovery. Щоб отримати ці, перейдіть в меню -> Виставки ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'При підключенні Linux на основі пристрою, ми віддаємо перевагу використанню Dbus, що відповідає назві. Ми також можемо використовувати інші параметри, як на нижній таблиці, але ми можемо отримати ідентифікатор Dbus без кореня. Щоб отримати UUID (з материнської плати), потрібно запустити dmidecode, який вимагає кореня. На жаль, коли ви клоняєте гостя ESXi, ідентифікатор Dbus не відтворився - звідси наш співвідношенні цього з Імям хоста. Є хороша стаття, пов\'язана з цими реквізитами <i>Головна</i> апаратних ідентифікаторів.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'При запиті JSON, за замовчуванням не встановлено ліміт. При перегляді екрана обмеження встановлюється до 1000 за замовчуванням. Це може бути змінено в конфігурації. Дивитися <i>Сторінка_розмір</i> Про нас';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'При отриманні зовнішнього пристрою слід запустити відкриття на ньому?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'При запуску Open-AudIT на Windows, обліковий запис служби Apache повинен бути <i>Увійти</i> користувач (або Адміністратор). Це тому, що <i>Місцева система</i> обліковий запис, як правило, використовується для запуску Apache, не має доступу до будь-яких мережевих ресурсів. IE - Ми не можемо використовувати Apache при запуску як локального облікового запису системи для копіювання сценарію аудиту на ПК Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Коли встановлена опція конфігурації, ми враховуємо цей обліковий запис для пристроїв для певного визначеного підмножинного правила, де ввімкнено пункт конфігурації. Ці правила:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Коли правила, що виконуються у відкритті, будуть з\'являтися будь-які правила узгодження. Нижче наведено приклад.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Коли цей еталон планується виконати. Прибув з асоційованої <code>tasks.type</code> і <code>tasks.sub_resource_id</code>й';

$GLOBALS["lang"]['When this log was created.'] = 'Коли було створено цей журнал.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Коли цей пункт черги розпочато обробку.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'При використанні Open-AudIT Professional або Enterprise, віджети доступні і призначені для користувача, щоб бути відображені на Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'При перетворенні внутрішнього вибраного пристрою на об\'єкт для зовнішньої системи, що має бути зовнішній вигляд даних. EG: ціле, рядок і т.д.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Коли ми виконуємо цю базову лінію, слід перевірити елементи на пристроях, які не є політикою для цієї бази.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Коли ми отримуємо відкритий порт, слід намагатися перевірити версію сервісу, що працює на ньому? Це допомагає підтвердити фактичні роботи.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Коли ви використовуєте Clouds, щоб відкрити свої екземпляри Amazon AWS, вам буде потрібно два основних елементи - ключ і секретний ключ. Ваш ключ вже повинен бути відомий вам і вашим секретним ключем. Зауважте, що ви не можете отримати секретний ключ за допомогою консолі AWS, що надається Amazon. Якщо ви замінили його, вам потрібно буде створити новий.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Коли ви використовуєте Clouds, щоб відкрити свої екземпляри Microsoft Azure, вам буде потрібно чотири облікові елементи - підписка на підписку, тенант id, клієнт і секрет клієнта.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Коли ви створюєте отвір, у вас є можливість для пристроїв_assigned_to_org. Це означає, що будь-які пристрої, які відкриваються для цього відкриття, будуть приписані (докладно) <code>devices.org_id</code> встановити в) обрану організацію.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Коли ви створюєте нове відкриття, якщо ви натиснете кнопку «Попередня кнопка», у вас є багато додаткових можливостей для зміни, один з них є типом відкриття. Типи завжди були Subnet (з урахуванням вищевказаного діапазону, підмережі, опції ip) та Active Directory. Як на v4.1, Open-AudIT має новий тип відкриття під назвою Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Після того, як ви ввімкнете запит на електронну адресу. Ви повинні налаштувати електронну пошту в меню -> адмін -> Конфігурація електронної пошти Ми також маємо <i>Тестування електронної пошти<i> кнопка на сторінці. Ввімкніть свої деталі, заощаджуйте її, а потім перевірте її. Ви повинні мати модальну коробку, яка інформує вас, якщо вона успішно або не і, очевидно, тестова електронна пошта повинна прибути, якщо вона успішна. Після того, як ви налаштуєте електронну пошту, ви можете налаштувати запит.<br/><br/>Забезпечити Імя, додатковий опис, вибрати <i>Книжка</i> Введіть номер мобільного, який Ви вказали при укладаннi договору з банком - для ідентифікації.<br/><br/>Забезпечити час (тільки за годину, але не потрібно хвилин), дати завдання Імя (це не назва фактичного запланованого запиту), вибрати які дні, які вам сподобається робота, вибрати який запит, який ви хотіли б запустити, надати адресу електронної пошти і вибрати формат запиту і ви зробили.<br/>Запити будуть відправлені з електронним корпусом запиту (в форматі HTML) та запитом, що додається у форматі запиту.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Коли ви вводите текст в одну з колонок, ви можете просто використовувати звичайний слово. Наприклад, коли ви вводите <code>computer</code> в поле пошуку вище <i>Тип</i> стовпець, пошук поверне всі пристрої з типом комп\'ютера. По суті, Open-Aud IT-довідки з використанням URL-адреси <code>devices?devices.type=computer</code>й Тепер існує одна значна різниця при використанні данихПотрібні пошуки, універсальний стандарт';

$GLOBALS["lang"]['where'] = 'Де придбати';

$GLOBALS["lang"]['Where'] = 'Де придбати';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Де $x є числом. Це багато записів LDAP в DB і були відновлені.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Де на екрані Деталі пристрою ви хочете побачити це поле.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Де стійка знаходиться в рядку.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Чи впливає на вразливість компонентів за власним використанням впливу, наявності та конфігурації.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Чи потрібна взаємодія користувача (Нон, Пасивний, Активний).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Який еталон OS застосовується до.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Які пристрої повинні створювати Open-AudIT з зовнішньої системи (за наявності). Використання всіх, Ні або даної атрибути.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Яка мережа повинна бути виявлена. Це повинно бути у форматі';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Які субмену повинні відображати цей запит.';

$GLOBALS["lang"]['Who made this rack.'] = 'Хто зробив цей стелаж.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Чому Windows Server тільки?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Чому ми можемо виключити цю політику?';

$GLOBALS["lang"]['Wide Area Network'] = 'Мережа ресторанів';

$GLOBALS["lang"]['Wide area network'] = 'Широка мережа';

$GLOBALS["lang"]['Widget'] = 'Віджети';

$GLOBALS["lang"]['Widget #'] = 'Віджети #';

$GLOBALS["lang"]['Widget # '] = 'Віджети # ';

$GLOBALS["lang"]['Widget Type'] = 'Тип Віджети';

$GLOBALS["lang"]['widgets'] = 'Віджети';

$GLOBALS["lang"]['Widgets'] = 'Віджети';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Віджети призначені для використання на бортах. Користувачі підприємства мають повну свободу для створення, оновлення та видалення віджетів в міру необхідності.';

$GLOBALS["lang"]['width'] = 'Навігація';

$GLOBALS["lang"]['Width'] = 'Навігація';

$GLOBALS["lang"]['windows'] = 'Головна';

$GLOBALS["lang"]['Windows'] = 'Головна';

$GLOBALS["lang"]['Windows Packages'] = 'Пакети для Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Тестування Windows';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Операційна система Windows 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Операційна система Windows 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows також може заблокувати послугу від початку. На ціль стартує Applet Windows Security і забезпечуємо виконуваний WinExeSvc дозволено запустити (клацніть Allow на пристрої, а потім запустіть дії).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Сторінка Winexe на Самба';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe вимагає запуску та запуску наступних сервісів Windows: netlogon та rpc.<br/><br/>Будь ласка, ввійти на цільову машину Windows і перевірити послуги для Netlogon і rpc працює.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe використовує адмін$ і RPC (мережа запуску) для установки і запуску віддаленого сервісу (winexesvc). Ця послуга ініціюється на названій трубі, яка використовується для перевезення команд з сервера Open-AudIT до цілі та виходу в зворотний спосіб. Коли закінчили, названа труба закривається і виннаxesvc чекає більше з\'єднань або видаліть (в залежності від параметрів, наданих).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Бездротова локальна мережа';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'З випуском Open-AudIT ми ввели концепцію кластеру. Ця інтуїтивно зрозуміла карта ідеї веб кластера, кластера бази даних або файлового кластера (або одного з декількох інших цілей) в даній типі (висока доступність, надмірність, масштабування тощо).<br/><br/>В залежності від призначення обраного кластера звіт буде дещо різним.<br/><br/>Наприклад, якщо ви створюєте кластер з метою віртуалізації, коли ви додалите пристрої до нього, ви також побачите віртуальні машини на пристроях.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'З впровадженням функцій Clouds ви можете надати деталі вашої хмари, Amazon AWS або Microsoft Azure, а також Open-AudIT використовуватиме відповідний API для отримання списку місць, мереж і екземплярів, а потім відкрити кожну з цих екземплярів.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Віджети';

$GLOBALS["lang"]['Wmi Timeout'] = 'Віджети';

$GLOBALS["lang"]['workgroup'] = 'Робоча група';

$GLOBALS["lang"]['Workgroup'] = 'Робоча група';

$GLOBALS["lang"]['Working Credentials'] = 'Робочі показники';

$GLOBALS["lang"]['Wrap Up'] = 'Загорнути';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Письмова в мові PHP скриптів.';

$GLOBALS["lang"]['XML'] = 'Список';

$GLOBALS["lang"]['Yellow Query'] = 'Жовтий Коричневий';

$GLOBALS["lang"]['Yemen'] = 'Євангелія';

$GLOBALS["lang"]['Yes'] = 'Я';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Ви можете визначити додаткові каталоги для сканування записів у збірці Виконавців. При визначенні каталогу та всіх підкатегорій скануються для файлів, які виконуються. Ви також можете визначити каталоги та файли, які слід виключити. Коли активовано, це вводять в скрипт перевірки Linux і виконується, коли він працює (як правило, частина відкриття). Якщо ви хочете ці в скрипті, ви можете вручну скопіювати на ціль, скористайтеся меню -> Відкрийте для себе -> Скрипки -> Список Скрипок і завантажити скрипт звідти.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Ви завжди можете змінити сценарії аудиту, щоб відповідати вашим вимогам. Вам буде потрібно (re) ввімкнути зміни, коли ви модернізуєте, як вони будуть перезаписані скриптами за замовчуванням. Я хотів би зберегти майстер-копію вашого модифікованого сценарію, оновлення Open-AudIT, потім запустити дифу між новим скриптом за замовчуванням і ваш модифікований сценарій і застосувати відмінності. Сценарії аудиту є рідними скриптами (Windows is VBScript, всі інші Bash). Простий і простий у зміні - просто переконайтеся, що копіювання ваших змін до оновлення.';

$GLOBALS["lang"]['You are running version'] = 'Ви працюєте';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Ви можете отримати доступ до колекції за допомогою звичайного API Open-AudIT JSON. Так само, як і будь-яка інша колекція. Про нас';

$GLOBALS["lang"]['You can also'] = 'Ви також можете';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Ви також можете побачити внизу сторінки таблиці, що показує пристрої, які зміни будуть застосовані до.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Ви також можете вказати властивості за допомогою нижнього формату.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Ви завжди можете запустити Firstwave VM на віртуальній інфраструктурі (ESX, Azure та ін). Першийхвильовий VM працює Debian Linux і є безкоштовним з питань ліцензування OS і обмежень. Або встановити на власний Linux дисктро вибору. English, Українська, Français...';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Ви можете призначити пристрої для розташування автоматично за допомогою';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Ви можете призначити пристрої за допомогою користувацького';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Ви можете перевірити віддалену машину без використання фактичного облікового запису адміністратора шляхом створення ключа реєстру. Створіть нижче ключ на кожній машині, щоб бути перевіреним і переконайтеся, що використовувані облікові дані користувача є членом групи адміністраторів.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Ви можете, звичайно, запустити відкриття без будь-яких дійсних облікових записів на пристроях в мережі, однак, інформація, отримана буде дуже невеликою підмножиною того, що Open-AudIT має можливість отримати <i>з</i> Кримінал.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Ви можете створити базову лінію, запустити її проти групи пристроїв та переглянути результати, додати заплановане виконання, додати більше таблиць для порівняння (поточно тільки програмне забезпечення, порти netstat та користувачі включені), в розміщення базового редагування, архівування результатів та багато іншого.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Ви можете створити скрипт з усіма варіантами для будь-якого з існуючих сценаріїв аудиту - не тільки Windows. AIX, ESX, Linux, OSX і Windows все включено.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Ви можете налаштувати всю інтеграцію, до якої система (NMIS або Open-AudIT) є органом на основі поля. Для створення та/або оновлення пристроїв у Open-AudIT або NMIS існують варіанти створення та/або оновлення пристроїв. Якщо ми запускаємо відкриття на створеному або оновленому пристрої і так багато іншого. Пояснення щодо кожного пункту на правій стороні сторінки.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Ви можете визначити додаток і пов\'язувати пристрій до цієї програми. Пристрій може бути пов\'язаний з більш ніж одним додатком. Додаток може бути пов\'язане з більш ніж одним пристроєм.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Для кожного окремого пристрою можна редагувати значення додаткового поля. Перегляд екрана деталей пристрою, відкрити розділ, що містить поле та (якщо у вас є';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Ви можете обмежити пристрій Seed Discovery для падіння в межах суворого набору параметрів, включаючи: <i>Обмеження для субмереж</i> і <i>Обмеження на приватне</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Ви можете вручну призначити пристрої';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Ви можете перенаправити це, надавши параметр формату у URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Ви можете вибрати індивідуальні пристрої, натиснувши їх прапорець на правій стороні або вибрати всі пристрої, натиснувши прапорець на верхній правій таблиці (підключаючи кнопку редагування, яка виглядає як олівець).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Ви можете вибрати прилади, які повинні бути інтегровані, вибравши будь-який атрибут в таблиці системи (розробки) та відповідні (див. меню → База даних → Список таблиць → система для списку полів). Список атрибутів може відповідати лише одному значення.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Введіть номер мобільного, який Ви вказали при укладаннi договору з банком - для ідентифікації. адмін -> Колектори -> Зробіть цю установку колектора. Для входу на сервер необхідно вказати дані про те, що ця установка буде повідомлено.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Ви можете переглянути, натиснувши на значок блакитного вигляду. Ви також можете редагувати або видаляти, якщо ви маєте дозвіл.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Ви не маєте встановленого розширення PHP MBString. Для цього необхідно розширення.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Ви не маєте встановленого розширення PHP SNMP. Це розширення дуже рекомендується.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Ви можете скопіювати і вставити цю URL-адресу в електронному листі.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Ви маєте бажання мати Active Directory або OpenLDAP автентифікувати ваших користувачів, але не надати авторизації. Щоб зробити це, переконайтеся, <i>Використання для аутентифікації</i> Y і Y <i>Використання для ролей</i> встановлюється до Н. Принципи будуть дійсні LDAP, але вам потрібно буде мати користувача вже створених і призначених ролей у Open-AudIT. Це також <i>автоматично</i> до';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Ви можете помітити ці правила матчу для товарів, які не можуть бути глобально унікальними. Деякі приклади:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Ви повинні видалити наявну ліцензію перед додаванням нової ліцензії.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Ви повинні мати робочі показники SSH для виконання еталону. На даний момент підтримуються наступні операційні системи: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Ми плануємо розширити ці з подальшими релізами.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Ви повинні копіювати і вставляти весь файл у текстову скриньку. У випадку нижче, скопіювати Весь текст.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Ви не повинні включати редагування_by і edited_date поля. Це автоматично встановлюється.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Ви повинні тільки змінити другий вирок тексту,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Для ATTRIBUTE_NAME необхідно замінювати необхідний стовпчик (наприклад, org_id)';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Ви повинні використовувати рядок заголовка, що містить імена стовпців, які ви хочете заселити, потім ваші лінії даних нижче цього.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Ви повинні використовувати тільки ті таблиці, які містять атрибути, які вам потрібно. Я зазвичай використовую ліворуч. Приклад';

$GLOBALS["lang"]['You will need a'] = 'Вам буде потрібно';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Вам буде потрібно порти для WMI на екрані Windows, відкритий на кожному пристрої Windows. Для Windows Основні сервери, що забезпечують підключення брандмауера як на';

$GLOBALS["lang"]['You will see a list of'] = 'Ви побачите список';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Підручники YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Ваш ключ API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Ваші облікові дані Google, як JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Ваше Імя Хост';

$GLOBALS["lang"]['Your Licenses'] = 'Ліцензії';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Ваш ідентифікатор Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Ваш клієнт Microsoft Azure';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ваш ідентифікатор підписки Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Ваш Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Версія PHP';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Ваш SQL для вибору атрибутів, які збільшать цей запит.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Ваш SQL для вибору пристроїв, які будуть заселені цією групою.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH ключ.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Ваш доступ до облікових даних, виходячи з цього хмари рідного API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Ваші дані Ви можете вилучити будь-який час, який вам подобається. Ми можемо самі зателефонувати одержувачу і узгодити зручний час. І ми маємо JSON API. І ви можете писати спеціальні звіти і мати ті, що виводяться в CSV, XML і JSON! І знову, це ваші дані - не всі інші. Ви можете бути впевнені, що безпека ваших даних в руках.';

$GLOBALS["lang"]['Your database platform is'] = 'Платформа бази даних';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Ваш опис статусу цього з\'єднання (здійснено, відредаговано та ін.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Ваш опис товару';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ваше Імя для цього програмного забезпечення';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Визначена версія для цього програмного забезпечення';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ваш користувач повинен бути в змозі зробити логін, натиснувши кнопку <i>Увійти</i> кнопка на сторінці логотипу Open-AudIT. Як зазначено вище, якщо логін не вдається, будь ласка, перевірте логфайл і перевірте користувачів <i>Імя користувача</i>й<br/><br/>І все буде занадто. Тепер ваші користувачі повинні мати один менший набір облікових записів, щоб запам\'ятати!<br/><br/>Як завжди, якщо у вас є труднощі з цією функцією, будь ласка, email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ваш користувач повинен бути в змозі зробити логін, натиснувши кнопку <i>Увійти з OKTA</i> кнопка на сторінці логотипу Open-AudIT. Як зазначено вище, якщо логін не вдається, будь ласка, перевірте логфайл і перевірте користувачів <i>Імя</i>й<br/><br/>І все буде занадто. Тепер ваші користувачі повинні мати один менший набір облікових записів, щоб запам\'ятати!<br/><br/>Як завжди, якщо у вас є труднощі з цією функцією, будь ласка, email';

$GLOBALS["lang"]['Your web server is'] = 'Веб-сервер';

$GLOBALS["lang"]['Zambia'] = 'Замбія';

$GLOBALS["lang"]['Zimbabwe'] = 'Зімбабве';

$GLOBALS["lang"]['a String'] = 'Стрінг';

$GLOBALS["lang"]['active'] = 'активний';

$GLOBALS["lang"]['active directory'] = 'активний каталог';

$GLOBALS["lang"]['active/active'] = 'Активний/активний';

$GLOBALS["lang"]['active/passive'] = 'активний/пасивний';

$GLOBALS["lang"]['advertisement'] = 'Новини';

$GLOBALS["lang"]['alert'] = 'Зареєструватися';

$GLOBALS["lang"]['all'] = 'Всі';

$GLOBALS["lang"]['allocated'] = 'виділяється';

$GLOBALS["lang"]['amazon'] = 'амазон';

$GLOBALS["lang"]['an Integer'] = 'Інтегер';

$GLOBALS["lang"]['and'] = 'і';

$GLOBALS["lang"]['and / or'] = 'і / або';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'і буде створений квиток підтримки.';

$GLOBALS["lang"]['and another'] = 'та інші';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'і завантажити Найновіші реліз самовстановлювача. Щоб знайти її, потрібно прокрутити сторінку.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'і перейти до додатків -> Програми підприємств (ліве меню), потім натисніть <i>Новий додаток</i>й';

$GLOBALS["lang"]['and its current time is'] = 'і його поточний час';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'і виглядає на термін дії гарантії до сьогодні.';

$GLOBALS["lang"]['and review what is possible.'] = 'і огляд того, що можливо.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'і перенаправлення сигналу URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'і фінальні лінії, швидше за все, будуть найбільш цікаві. Ці лінії повинні надати вам точну точку, в якій логін не вдалося.';

$GLOBALS["lang"]['antivirus'] = 'антивірус';

$GLOBALS["lang"]['application'] = 'Додаток';

$GLOBALS["lang"]['approved'] = 'затверджено';

$GLOBALS["lang"]['are required.'] = 'обов\'язкові.';

$GLOBALS["lang"]['are used.'] = 'використовується.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'як пристрій відповідає на цей порт.<br/>Це викликало деякі питання клієнтів, де брандмауери відповідають від імені пристрою, що не експлуатує, і, отже, викликають помилкове виявлення пристроїв. В даний час ми маємо цей атрибут, який доступний для сканування.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'як точка посилання і фільтрує всі віртуальні машини через перевірку системи. серійне поле для VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'припустимо, що робота та клієнт, що замовляє DNS';

$GLOBALS["lang"]['attribute'] = 'атрибути';

$GLOBALS["lang"]['auto'] = 'авто';

$GLOBALS["lang"]['backup'] = 'резервне копіювання';

$GLOBALS["lang"]['banned'] = 'заборонений';

$GLOBALS["lang"]['blog'] = 'Новини';

$GLOBALS["lang"]['blue'] = 'синій';

$GLOBALS["lang"]['bottom'] = 'нижня';

$GLOBALS["lang"]['building'] = 'будинок';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'може бути використана для ідентифікації користувачів (наприклад, Імя користувача та виправлення пароля), а також авторизації користувачів (наприклад, ролі та orgs є користувачем).<br/><br/>Якщо користувач не налаштований LDAP, але знаходиться в Open-AudIT (наприклад: <i>адмін</i> користувач, Open-AudIT повернеться до використання як для ідентифікації, так і для авторизації.<br/><br/>Відкритий IT використовує специфічні групи LDAP для ролей і orgs. Користувач повинен бути прямим членом цієї групи (s) для визначення доступу користувачів.<br/><br/>При налаштуванні правильності використання LDAP може повністю видалити необхідність створення користувачів в Open-AudIT. Просто налаштуйте Open-AudIT для використання LDAP як для автентифікації, так і для авторизації. Якщо користувач не існує в Open-AudIT, але існує в LDAP і їх облікові дані правильні, і вони є членом необхідної групи Open-AudIT автоматично створить обліковий запис користувача.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'тепер можна отримати дані про файл або каталог файлів і контролювати ці файли для змін у базі даних Open-AudIT. Ця функція працює з коробки для серверів Linux Open-AudIT, але потребує зміни в Імя облікового запису на сервері Windows Open-AudIT. Підтримка клієнтів Windows і Linux.';

$GLOBALS["lang"]['changed'] = 'змінено';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'вибір. Звідти пристрій додатково передається за допомогою порту для WMI, SSH або SNMP ';

$GLOBALS["lang"]['cloud'] = 'хмара';

$GLOBALS["lang"]['code'] = 'Коди';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'колекції та деталі сторінок є іконою для виконання.';

$GLOBALS["lang"]['collector'] = 'колектор';

$GLOBALS["lang"]['collectors'] = 'колектори';

$GLOBALS["lang"]['column'] = 'колонка';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'стовпчик буде містити або <i>й</i> або <i>п</i>й Це вказує на те, що даний ряд присутній на пристрої. Наприклад, програмне забезпечення може бути встановлене (що призведе до того, що це призведе до <i>програмне забезпечення.current = y</i>), але на наступний аудит не можна виявити. Open-AudIT потім змінить атрибут поточного рядка до <i>п</i>й';

$GLOBALS["lang"]['column. The'] = 'стовпчик. Про нас';

$GLOBALS["lang"]['compute'] = 'компіляція';

$GLOBALS["lang"]['config'] = 'Налаштування';

$GLOBALS["lang"]['console'] = 'консолі';

$GLOBALS["lang"]['contains'] = 'В наявності';

$GLOBALS["lang"]['create'] = 'Створення';

$GLOBALS["lang"]['created'] = 'створення';

$GLOBALS["lang"]['credentials'] = 'Кримінал';

$GLOBALS["lang"]['critical'] = 'критичний';

$GLOBALS["lang"]['cve'] = 'з';

$GLOBALS["lang"]['database'] = 'База даних';

$GLOBALS["lang"]['debug'] = 'деба';

$GLOBALS["lang"]['delegated'] = 'делеговані';

$GLOBALS["lang"]['delete'] = 'видалення';

$GLOBALS["lang"]['deleted'] = 'видалення';

$GLOBALS["lang"]['denied'] = 'відмова';

$GLOBALS["lang"]['details'] = 'Детальніше';

$GLOBALS["lang"]['devices'] = 'Пристрої';

$GLOBALS["lang"]['digitalocean'] = 'цифровий';

$GLOBALS["lang"]['discoveries'] = 'Головна';

$GLOBALS["lang"]['documentation for further details.'] = 'документація для подальших деталей.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'чи <strong>нема</strong> надати звіти про вразливість для наступних';

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

$GLOBALS["lang"]['first'] = 'перший';

$GLOBALS["lang"]['fixed'] = 'фіксована';

$GLOBALS["lang"]['floor'] = 'Підлога';

$GLOBALS["lang"]['for'] = 'для';

$GLOBALS["lang"]['for authentication'] = 'для автентифікації';

$GLOBALS["lang"]['for this information.'] = 'для цієї інформації.';

$GLOBALS["lang"]['from Audit Script Result'] = 'від Аудит Script Результат';

$GLOBALS["lang"]['from NMIS'] = 'від NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'з адресного LocalHost (Using LRPC) в контейнері застосування';

$GLOBALS["lang"]['front'] = 'передній';

$GLOBALS["lang"]['front-left'] = 'передній лівий';

$GLOBALS["lang"]['front-right'] = 'передній';

$GLOBALS["lang"]['github'] = 'свінгери';

$GLOBALS["lang"]['google'] = 'Українська';

$GLOBALS["lang"]['greater or equals'] = 'більші або рівні';

$GLOBALS["lang"]['greater than'] = 'більше';

$GLOBALS["lang"]['group'] = 'група';

$GLOBALS["lang"]['has not been set'] = 'не встановлено';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'мати робочий зворотний DNS ізольований IP на цільовий ПК Windows.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'мати можливість виконання. Про нас';

$GLOBALS["lang"]['head'] = 'Головна';

$GLOBALS["lang"]['here'] = 'Головна';

$GLOBALS["lang"]['high availability'] = 'висока доступність';

$GLOBALS["lang"]['howto'] = 'Як';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'якщо ви клоните віртуальну машину Linux, якщо ви вручну перегенеруєте це (і в моєму досвіді люди не) вона залишається однаковою.';

$GLOBALS["lang"]['ignored'] = 'ігнорувати';

$GLOBALS["lang"]['import the example device data'] = 'імпорт даних прикладного пристрою';

$GLOBALS["lang"]['in'] = 'в';

$GLOBALS["lang"]['in Enterprise.'] = 'на підприємстві.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Вхідні дані можуть мати наступні значення.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'У виходах можуть мати наступні значення.';

$GLOBALS["lang"]['inactive'] = 'неактивний';

$GLOBALS["lang"]['incomplete'] = 'неповний';

$GLOBALS["lang"]['info'] = 'Контакти';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'інсталятор перевірить наявність Nmap у своїх стандартних пунктах установки';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, текст, bool (y/n), тощо';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'У.С. стандарт, що підтримується Національним інститутом стандартів та технологій';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'є міжнародним стандартом управління інформаційної безпеки. В рамках створення, реалізації та безперервного вдосконалення системи управління інформаційної безпеки (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'на основі';

$GLOBALS["lang"]['is licensed to'] = 'Ліцензований на';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'Ви можете використовувати пароль та автентифікацію ключа. Open-AudIT також може використовуватися користувачем sudo, на відміну від кореневого використання безпосередньо (хоча це також може використовувати корінь). Для кращих результатів необхідно використовувати корінь користувача або sudo ввімкнений користувач (див. Аудит Linux без кореневої та цільової конфігурації клієнтів на вікі). Пристрої для Windows також можуть працювати з SSH, але якщо Open-AudIT виявляє, що це дозволить зупинити SSH запитів і замість використання WMI (розробки, що працюють облікові дані WMI).';

$GLOBALS["lang"]['is the link to the'] = '- посилання на посилання';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'елемент для перегляду конкретних таблиць і їх стовпців. Це дозволить вам знайти саме те, що вам потрібно, а не траурувати через консолі MySQL скрипту створення схем.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'ключ, необхідний для отримання lat/long і відображення карти. Про нас';

$GLOBALS["lang"]['left'] = 'Увійти';

$GLOBALS["lang"]['less or equals'] = 'менше або дорівнює';

$GLOBALS["lang"]['less than'] = 'менше';

$GLOBALS["lang"]['license'] = 'ліцензія';

$GLOBALS["lang"]['licenses'] = 'ліцензії';

$GLOBALS["lang"]['like'] = 'як';

$GLOBALS["lang"]['line'] = 'Лінія';

$GLOBALS["lang"]['list'] = 'Новини';

$GLOBALS["lang"]['list View, using the Create button'] = 'Перегляд списку, використовуючи кнопку Створити';

$GLOBALS["lang"]['load balancing'] = 'балансування навантаження';

$GLOBALS["lang"]['location'] = 'Розташування';

$GLOBALS["lang"]['locations'] = 'Контакти';

$GLOBALS["lang"]['managed'] = 'керований';

$GLOBALS["lang"]['methods'] = 'методи';

$GLOBALS["lang"]['microsoft'] = 'Українська';

$GLOBALS["lang"]['mount point'] = 'точка кріплення';

$GLOBALS["lang"]['must'] = 'обов\'язково';

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

$GLOBALS["lang"]['on devices where'] = 'на пристроях, де';

$GLOBALS["lang"]['openldap'] = 'Головна';

$GLOBALS["lang"]['optimized'] = 'Оптимізація';

$GLOBALS["lang"]['optionally '] = 'необов\'язково ';

$GLOBALS["lang"]['or'] = 'або';

$GLOBALS["lang"]['or the GitHub page at'] = 'або на сторінці GitHub';

$GLOBALS["lang"]['other'] = 'інші';

$GLOBALS["lang"]['package'] = 'Пакети';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Сторінка Експортуйте сервер LDAP з меню -> адмін -> Сервери LDAP -> Деталі в JSON і зберегти і включати в себе ці дані, а також.';

$GLOBALS["lang"]['partition'] = 'Перегородка';

$GLOBALS["lang"]['pass'] = 'проміжок';

$GLOBALS["lang"]['pending'] = 'панчохи';

$GLOBALS["lang"]['performance'] = 'продуктивність';

$GLOBALS["lang"]['performed'] = 'Виконавці';

$GLOBALS["lang"]['permission'] = 'Увійти';

$GLOBALS["lang"]['permissions required per endpoint'] = 'дозволи, необхідні для кінцевої точки';

$GLOBALS["lang"]['pie'] = 'пердят';

$GLOBALS["lang"]['planning'] = 'планування';

$GLOBALS["lang"]['predictable'] = 'передбачуваний';

$GLOBALS["lang"]['query'] = 'добірка';

$GLOBALS["lang"]['rear'] = 'засупу';

$GLOBALS["lang"]['rear-left'] = 'Задня-ліва';

$GLOBALS["lang"]['rear-right'] = 'Задня сторона';

$GLOBALS["lang"]['regex'] = 'регекс';

$GLOBALS["lang"]['release'] = 'Видання';

$GLOBALS["lang"]['removed from display, but has been set'] = 'видалено з дисплея, але було встановлено';

$GLOBALS["lang"]['reserved'] = 'Зареєструватися';

$GLOBALS["lang"]['right'] = 'Увійти';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Ви можете натиснути на значення поля для редагування його.';

$GLOBALS["lang"]['role'] = 'роль';

$GLOBALS["lang"]['room'] = 'кімната';

$GLOBALS["lang"]['row'] = 'Увійти';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'не вдалося розпочати через наступну помилку';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Тому Open-AudIT знає, щоб обмежити вашу запит на відповідні органи.';

$GLOBALS["lang"]['stand-alone'] = 'автономний';

$GLOBALS["lang"]['standard'] = 'стандарт';

$GLOBALS["lang"]['starts with'] = 'початок';

$GLOBALS["lang"]['storage'] = 'зберігання';

$GLOBALS["lang"]['subnet'] = 'субнет';

$GLOBALS["lang"]['table'] = 'стіл';

$GLOBALS["lang"]['table and insert the original rows.'] = 'стіл і вставте оригінальні рядки.';

$GLOBALS["lang"]['team'] = 'Команди';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'текст. Першим є індекс масиву і повинен бути лівий як-is. Індекс використовується в шаблонах для перегляду перекладеного тексту.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'потім натиснувши на кнопку деталі для таблиці.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'потім натиснувши на кнопку деталі для таблиці. Деталі пристрою зберігаються в';

$GLOBALS["lang"]['timestamp'] = 'час';

$GLOBALS["lang"]['to'] = 'до';

$GLOBALS["lang"]['to create an item of this type'] = 'створити елемент цього типу';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'до URL, ви отримаєте повний запис бази даних, в тому числі всі таблиці компонентів, надані пристрої.';

$GLOBALS["lang"]['to the user'] = 'до користувача';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true або false (в контексті JSON)';

$GLOBALS["lang"]['unallocated'] = 'не знайдено';

$GLOBALS["lang"]['unauthorised'] = 'несанкціоновані';

$GLOBALS["lang"]['unchanged'] = 'без змін';

$GLOBALS["lang"]['unknown'] = 'Нема';

$GLOBALS["lang"]['unmanaged'] = 'некерований';

$GLOBALS["lang"]['unused'] = 'невикористані';

$GLOBALS["lang"]['update'] = 'оновлення';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'використовує дані, зібрані з ваших пристроїв та відповідає встановленню програмного забезпечення з наданою вартістю, він обчислює матчі, які було використано багато ліцензій, і скільки залишилося. Дозволяє використовувати дикихкарток на <i>рядок матчу</i> поле, яка відповідає програмі. атрибут імен.';

$GLOBALS["lang"]['using the main menu items.'] = 'використовуючи основні елементи меню.';

$GLOBALS["lang"]['valid'] = 'Увійти';

$GLOBALS["lang"]['version'] = 'версія';

$GLOBALS["lang"]['virtualisation'] = 'віртуалізація';

$GLOBALS["lang"]['warning'] = 'Зареєструватися';

$GLOBALS["lang"]['web'] = 'Веб-сайт';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'з місцевими та дистанційними дозволами доступу.';

$GLOBALS["lang"]['with devices::update permission.'] = 'з пристроями:';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'з Sign-On перенаправленням URI';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'з метою забезпечення простого та інтуїтивного доступу у спосіб знайомства розробникам. На додаток до цього API, веб-інтерфейс буде використовувати один і той самий формат запиту і надати деякі додаткові дії (наприклад: HTML-форми для створення елементів).';

$GLOBALS["lang"]['yes'] = 'й';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Ви не вимагають ліцензії HighCharts для використання продуктів Firstwave. Ліцензії';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Ви відмітите будь-які знайдені пристрої, щоб Org або Місцезнаходження.';

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

