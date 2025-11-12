<?php
$GLOBALS["lang"][' Default, currently '] = ' التقصير، حاليا ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' إذا لم هو كما كما';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' يُدعم الآن بملف لتغيير مستعملك لاستخدام اللغة ';

$GLOBALS["lang"][' seconds'] = ' ثواني';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = 'ولكن لن من الضروري الضروري';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'والذي نوفر منه من من';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'أنت <i>يجب أن يجب</i> استخدموا الموقع على خادمكم <strong>Bakı</strong> قبل تشكيل مدخل';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. ولتمكين ذلك، تحرير التشكيلة ';

$GLOBALS["lang"]['10 Minutes'] = '10 دقائق';

$GLOBALS["lang"]['15 Minutes'] = '15 دقيقة';

$GLOBALS["lang"]['30 Minutes'] = '30 دقيقة';

$GLOBALS["lang"]['5 Minutes'] = '5 دقائق';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = ' 93 المصنفة في في الفئات الفئات';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>ملاحظة</strong> - أنت تَصِلُ إلى هذا هذا مِنْ مِنْ المحليِ المحليِ المحليِ المحليِ. النص المُحمّل لن قادراً قادراً';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ملاحظة</strong> - لتنفيذ أنّ لديكِ</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>خط الأساس</strong> - الوثيقة الشاملة التي<br/> <br/> <strong>السياسات</strong> - الاختبارات الفردية كل اختبار ومن محدد محدد ومن<br/> <br/> <strong>التفاصيل</strong> يمكن لخطوط الأساس أن تقارن<br/> <br/> <strong>البرمجيات</strong> - البرمجيات التي نتحقق منها منها غير غير موحّدة نتلقى نتلقى نتلقى نتلقى نتلقى نتلقى قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة قاعدة نخزنها نخزنها في ولهذا السبب، فإن الأساس الأساس سياسات البرمجيات يمكن تختبر تختبر<br/> <br/> <strong>Netstat Portu</strong> شركة من من رقم تمر تمر تمر الجميع الجميع حاضرين حاضرين الجميع الجميع حاضرين حاضرين تمر تمر تمر تمر<br/> <br/> <strong>المستخدمون</strong> يعملون مثل ميناء ميناء (نيتست) Bir istifadəçi uyğun adı, status və şəkil məlumatları ilə mövcuddursa (kişaf edilən, bitməli, tərəfindən) sonra siyasət keçirilir.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>الموقع هو مادي يمكن<br/> <br/>يمكنك كانت كانت<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>وتستمد الشبكة من الاكتشاف<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>وسيعرض موجز بالبنود، مجمّعة <code>table</code> Qeydiyyat <code>column</code> سمات<br/> <br/>وعند تنفيذ ستكون النتيجة <code>table</code> Qeydiyyat <code>column</code>. ستكون هناك على القيم<br/> <br/>إذا كانت سمة <code>extra_columns</code> وتحتوي الصفحة عن ذلك ذلك<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>العملاء سمحوا لك حسابات حسابات</p><p>عند الاختبار <strong>إذا</strong> وينبغي لوكيل يقوم بأعمال، بأعمال، <strong>ثم</strong> تتخذ الإجراءات.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>تُعرّفُ الطلباتَ مِن قِبلك، المُستعمل<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>وتُخزَّن المواصفات لكي في</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>والتمكن من يتم آلات آلات يتم بمجرد أن تحدد الأساس الأساس وسيكون ناتج المنفذة هذه هذه<br/> <br/> ويمكنك خطوط بين الجمع الجمع<br/> <br/> على سبيل قد تخلق  Cent كأحد كأحد خواديمك أنت تعرف أن الخادم<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>وتُخزَّن المجموعات نظام مفتوح مفتوح مفتوح مفتوح مفتوح مفتوح مفتوح الأجهزة تحسين تحسين تحسين تحسين تسجيل تسجيل تسجيل الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص الترخيص.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>المكونات عبارة عامة للجداول للجداول</p><p> وبالإضافة إلى ذلك، الجداول الجداول</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>ويتم تشفير التفويض عند<br/> <br/>عندما يتم جهاز الكشف، <code>credential</code> الجدول. Bu aradan qaldırmaq, sonra verilmiş Org ilə bağlı təmin <code>credentials.org_id</code> كما يجري اختبارها وثائق تفويض العمل على على مستوى مستوى<br/> <br/>SSH istifadəçi adı / şəkildən əvvəl test edilir. وعند اختبار علامات أيضا أيضا أيضا<br/> <br/>وتيسيراً للاستخدام، ينبغي أن أن هذا هو البعيد من<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>وتستخدم وثائق التفويض أجهزة<br/> <br/>أوراق التوثيق أن تكون<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>حددوا رفوفكم وعينوا في في (أوديت) وسيتيح فتح باب إذا قدمت جهاز، تلك يمكنك النظر الرف على<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>الأجهزة على تدار أن أن تدار تحافظ تحافظ على منتشرة منتشرة منتشرة منتشرة منتشرة سيكون سيكون سيكون سيكون سيكون خارج سيكون سيكون سيكون خارج خارج لم لم لم لم لم لم لم لم لم يكن يكن يكن ذلك ذلك ذلك ذلك ذلك ذلك إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى ذلك ذلك ذلك ذلك ذلك ذلك ذلك ذلك معرفة ما كان قد<br/> <br/>بمجرد أن يجهز الباب<br/> <br/>توسيع الحقول المخزنة مع<br/> <br/>حتى أضيف غير مرتبطة<br/> <br/>الحواسيب، والمفاتيح، والمسارات، أو أو<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>الاكتشافات في ما يفعله<br/> <br/>كيف تعرف أيضاً "ما الذي على"<br/> <br/>الاكتشافات هي مواد التي<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>الكشف الخيارات في الإطار <a href="../configuration?configuration.name=discovery_default_scan_option">التشكيل</a>. إذا كان مفتوحه شركة شركة<br/><br/><strong>Axtarış</strong>: <i>ثانية</i>. Scan yalnız Open-AudIT vasitəsi ilə danışmaq və bir IOS alətini (WMI, SSH, SNMP, Apple Sync) algılamaq üçün lazım olan portları tarayır. Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ولا تعتبر الموانئ يجب أن يستجيب التنقيب<br/><br/><strong>Pulsuz</strong>: <i>5 ثوان</i>. Top 10 TCP və UDP portu, və port 62078 (Apple IOS aşkar). Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ولا تعتبر الموانئ يجب أن يستجيب التنقيب<br/><br><strong>بسرعة</strong>: <i>40 ثانية</i>. Top 100 TCP və UDP limanları, və port 62078 (Apple IOS aşkar). Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ولا تعتبر الموانئ يجب أن يستجيب التنقيب<br><br/><strong>متوسطة (كلاسيك)</strong>: <i>90 ثانية</i>على مقربة من مسح مسح Üst 1000 TCP portu, 62078 (Apple IOS aşkar) və UDP 161 (SNMP). Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ويعتبر الميناء مفتوحا يتم مسح بغض النظر استخدام التوقيت العدواني<br/><br/><strong>متوسطة</strong>: <i>100 ثانية</i>. Üst 1000 TCP və üst 100 UDP portu, və port 62078 (Apple IOS aşkar). Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ولا تعتبر الموانئ يجب أن يستجيب التنقيب<br/><br/><strong>بطيئة</strong>: <i>4 دقائق</i>. Üst 1000 TCP və üst 100 UDP portu, və port 62078 (Apple IOS aşkar). مُمكّن من كشف Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ويعتبر الميناء مفتوحا يجب أن جهاز التنقيب<br/><br/><strong>Yuxarı</strong>: <i>20 دقيقة</i>غير موصى به Üst 1000 TCP və UDP limanları, və port 62078 (Apple IOS aşkar). يتم مسح بغض النظر مُمكّن من كشف Axtarış <code>open|filtered</code> ويعتبر الميناء مفتوحا ألف <code>filtered</code> ويعتبر الميناء مفتوحا استخدم توقيت مهذب<br/><br/><strong>العرف</strong>: <i>وقت غير معروف</i>. عندما يتم خيارات أخرى<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>وتُستخدم المجموعات بسيطة من JSON istifadə etmək istədiyiniz zaman, onlar bir siyahısı geri <code>devices.id</code> فقط وإذا طُلب استخدام استخدام<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>وإذا لم يكن المستخدم المستخدم استخدام <code>ldap_dn_account</code> Qeydiyyat <code>ldap_dn_password</code> لفرض هذا<br/> <br/><strong>الوثائق المساعدة</strong><br/> <br/><a href="/index.php/auth/help">اللواء (أوث)</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">استخدام الدخول إلى</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">استخدام الموافقة المسبقة علم</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">المشاكل التي تصيب لوجينز</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">المستخدمين والأدوار والأوغاد</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>إذا أضفت جهازاً نوعه، نوعه،<br/><em>لينكس</em> :/usr/local/open-audit/public/device_images<br/><em>النوافذ</em>: c:/xampp/htdocs/open-audit/device_images<br/> <br/>إذا أضفت من نوعه، نوعه،<br/><em>لينكس</em> :/usr/local/open-audit/public/images/map_icons<br/><em>النوافذ</em> ::/xampp/htdocs/open-audit/images/map_icons</p><p>عندما <i>الموارد</i> هو <code>device</code>صحيح <i>الأنواع</i> هي: <code>class</code>.. <code>environment</code>.. <code>status</code> Qeydiyyat <code>type</code>إذا كان كان <i>الموارد</i> هو <code>locations</code> أو <code>org</code> الوحيد الصالح <i>النوع</i> هو <code>type</code>إذا كان كان <i>الموارد</i> هو <code>query</code> الوحيد الصالح <i>النوع</i> هو <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>إذا كنت تنوي آلات آلات</p><p>تأكد من للموانئ الصحيحة الصحيحة إذا تحقق من الافتراضية قواعد<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>إذا اخترت نوع القائمة، القائمة، حقل حقل حقل حقل يجب أن تضع مفصّلة<br/> <br/>مثل معظم السمات يمكن<br/> <br/>انظر إلى القسم افتح افتح<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>وفي عالم الأمن الذي الذي كما ينبغي تشمل طريقة طريقة ويوفر النظام العضوية باب باب</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>الاندماجات تسمح باختيار الأجهزة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p> Microsoft نظم الحواسيب المكتبية للنوافذ للنوافذ الشبكات TCP/IP yığın mövcuddur TCP bağlantısı tərəfindən çalışır. وبعد بلوغ الحد، توضع توضع إذا دخل كثيرون إلى وأخيراً، الـ الـ<br/><br/>لا يوجد قانون في في</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>وترد تفاصيل الاختناق في <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-pertu.html</a>. من تلك:<br/> <br/><em>إذا كنت على واسع واسع بعض الناس İnsanlar kimi deyir - T2 (Polite) onlar evlərini qarşılamaq daha az yaxşı olduğunu düşünürlər, və onların ümumi səhifə olmaq üçün özləri hesab edir. غالباً ما لا كم كم والكشف عن فعالية أكثر أكثر</em><footer>غوردون <i>Fyodor</i> Elan</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>ويمكن تشكيل قاعدة المفتوحة المفتوحة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>مفتوح ويمكن لتكنولوجيا أن أن<br/> <br/>وتعمل هذه الخاص الصندوق الصندوق<br/> <br/>العملاء المدعومين (ويندوز)<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>مفتوح ويمكن لتكنولوجيا أن أن<br/> <br/>العملاء المدعومين هم<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>مفتوح ويمكن المعلومات أن أن<br/> <br/>وبمجرد إنشاء استخدامه يمكن يمكن<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>فتح الباب مع الكثير إذا كنت محدد استفسار استفسار<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>فتح الباب يأتي العديد العديد<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>ويحظى برنامج أوديت المفتوحة المفتوحة بدعم بدعم بدعم بدعم بمستوى بمستوى بمستوى بمستوى بمستوى بمستوى بمستوى الدعم الدعم الدعم الدعم الدعم. إذا كنت مجتمع نشط أين يمكنك المطورين إلى إلى دعم مذهل بالكامل تحتاج لا إن أو لكن<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>المفتوحة الكثير<br/> <br/>والأوغاد الباب الباب الباب الباب المستعمل لديه الأورغ وكذلك وكذلك مزيج من مستعملين يحدد ما و يفعلوه يفعلوه يفعلوه في في في في في في في في في في "إفتتاح"<br/> <br/>وتُخصص معظم في نظام نظام نظام " (Pop-AudIT).<br/> <br/>الأورام يمكن أن لها فكّر في الهيكل إذا كان الوصول إلى إلى للمزيد من المعلومات، هذا <a href="/index.php/faq?name=Users, Roles and Orgs">E-poçt</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>المفتوحة الكثير<br/> <br/>والأوغاد الباب الباب الباب الباب المستعمل لديه الأورغ وكذلك وكذلك مزيج من مستعملين يحدد ما و يفعلوه يفعلوه يفعلوه في في في في في في في في في في "إفتتاح"<br/> <br/>وتُخصص معظم في نظام نظام نظام " (Pop-AudIT).<br/> <br/>الأورام يمكن أن لها فكّر في الهيكل إذا كان الوصول إلى إلى</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>أنظر بسرعة إلى الأجهزة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>الأدوار في الاجتماعات إنها إنها مزيج من مستعملين يحدد ما و يفعلوه يفعلوه يفعلوه في في في في في في في في في في "إفتتاح"<br/> <br/>إحصل المفتوحة المفتوحة شركة<br/> <br/>وتستند الطريقة الرئيسية للترخيص وتُعرَّف الأدوار بأنها بأنها " org admin " والمراسل والمستعمل. ولكل دور مجموعة التصاريح التصاريح وتتاح القدرة تحديد أدوار أدوار<br/> <br/>ويمكن أيضاً من بإذن بإذن وللمنشآت المرخصة المؤسسة القدرة القدرة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>وتنظر القواعد السمات وتجعل</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>خيارات المسح لك بتطبيق<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Google Maps tərəfindən təhlükəsiz coğrafi xidmət. نفوذ مفتوح Google Maps canlı, interaktiv coğrafi xidmət yerləri təmin edir. تحويل عناوين آلياً إلى إلى<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>وتستخدم عبوات إذا ما ما<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>ومن الأمثلة على الصحيحة الصحيحة للشبكة للشبكة يلي يلي: 192.168.1.1 (عنوان واحد من من العنوان العنوان من 192.168.1.0/24 (a subnet)، 192.168.1-3.1-20 (مجموعة من عناوين شركاء شركاء.<br/> <br/><em>ملاحظة</em> فقط شبكة فرعية فرعية للأمثلة للأمثلة للأمثلة للأمثلة للأمثلة للأمثلة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة المفتوحة. <br/> <br/>إذا كنت تستخدم الدليل <a href="../credentials">وثائق التفويض</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>المعايير مخزنة في البيانات<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>العملاء المدعومين هم<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>المهام لها جدول يعكس يعكس يعكس<br/> <br/>Axtarış <code>type</code> ويمكن أن تكون واحدة واحدة من من الأساس، أو أو أو أو أو الاستفسارات، الاستفسارات، الاستفسارات، الاستفسارات، الملخصات الملخصات الملخصات الملخصات الملخصات الملخصات الملخصات الملخصات الملخصات<br/> <br/>إذا كنت ترغب تحديد تحديد يجب أن الهوية من <code>sub_resource_id</code>. على سبيل إذا كنت <code>sub_resource_id</code>.<br/> <br/>القيمة <code>uuid</code> محدد لكل مفتوح قيمتك<br/> <br/>Axtarış <code>options</code> والسندات هي مشتركة تتضمن أما الخصائص الإضافية والاستفسارات <code>email_address</code> Qeydiyyat <code>format</code>. (المعزوة الإضافية) <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Axtarış <code>type</code> الموقع سيحدد رمزه<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributes endpoint Open-AudIT müxtəlif xüsusiyyətlər üçün xüsusi məlumatları əlavə etməyə imkan verir, anda bu xüsusiyyət Class, Environment, Status və Tip xüsusiyyətlərində işləyir, Hər yerlər və Orgs üçün Tip xüsusiyyətləri, həmçi üçün Menkulator kateqoriyası. إذا رأيتم شيئاً من من</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>سمة المُجمعات تمكّنك من إدارة Kompüter və Server arasında yalnız lazım olan ağ portları 80 və / ya 443.<br/> <br/>يجعل إدارة الشبكات سريعة وتحصل تراخيص المفتوحة على على<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>الجزء المؤثر من موقعك <em>يجب أن يجب</em> تحتوي على أعمدة E-poçt <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>الجزء الخاص بك <em>يجب أن يجب</em> احتواء <code>WHERE @filter</code> إذاً (أوديت) المفتوح يعرف أن أن يقيد إلى إلى (أورق) المناسبة SQL bu xüsusiyyət dəstəkləyir  query SQL,  Admin  role  role  role المفتوح المفتوح.<br/> <br/>مثال على ذلك سؤال <code>os_group</code> عزو "لينكس" <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>الجزء المؤثر من موقعك <em>يجب أن يجب</em> فقط إحتواء <code>DISTINCT(devices.id)</code>.<br/> <br/>الجزء الخاص بك <em>يجب أن يجب</em> احتواء <code>WHERE @filter</code> إذاً أن أن أن<br/> <br/>مثال لـ لـ جميع الأجهزة الأجهزة <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>نقطة نهاية تسمح لك لك<br/> <br/>لخلق دخول لتعقب رخصتك <em>يجب أن يجب</em> تقديم اسم، ومنظمة، التراخيص في الميدان <code>match_string</code> يجب أن اسم البرمجيات<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Ağ format 192.168.1.0/24 olmalıdır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Əsas və isteğe bağlı ikincil maddələr tam mövcud olmalıdır - ie, cihazlar. نوع أو برمجيات<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>ليس هناك لفعل أي أي<br/><br/>عملاء النوافذ على يرام يرام لا يمكن تشغيله بعد بعد وللقيام بذلك، أن ننسخ ننسخ لسوء الحظ حساب الذي Bu hesab uzaq (network based) resursuna daxil deyil. وللعمل بشأن المسألة، يجب ومن الأسهل استخدام المدير المدير ويتمتع حساب الوصول بإمكانية بإمكانية<br/><br/>انظر صفحتنا للتمكين <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">إدارة خدمات  Apache النوافذ النوافذ النوافذ</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>هذه هي الأجهزة تعيش<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>هذه النقطة النهائية من من<br/> <br/><em>ملاحظة</em> هذه هذه الميزة <em>يجب أن يجب</em> (ب) تمكين أصناف التشكيلة من من تطابق (ماك) (بالنسبـة لـ Azure). وسيتم ذلك تلقائيا المرة المرة<br/> <br/>وثائق تفويض لسحبك<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery"> Azure</a> أو <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">Daxil ol</a>مطلوب<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVE feed əsasən Vulnerities hesab.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>نحن في الافتراضية القائمة القائمة يمكنك صنع نصوص لتستخدمها لتستخدمها يمكن بعد تحميل النصوص<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>عندما يستعمل <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP saytında</a>بعض الاختلافات في بيرل <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">هنا</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>الأرامل يمكن يخلقوا بسهولة<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>مع فتح الباب والشركة والشركة<br/> <br/>وضع جداول اكتشاف لكل لكل وضع جداول معقدة أو أو<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>يمكنك أن تخلق مع AIX, ESX, Linux, OSX və Windows bütün örtüklüdür.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>يمكنك استخدام المئوية للإشارة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>رفتك تساعد الصقل بالضبط<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>ملاحظة</strong> - أنت تَصِلُ إلى هذا هذا مِنْ مِنْ المحليِ المحليِ المحليِ المحليِ. النص المُحمّل لن قادراً قادراً';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'İstifadə olunan maddələrin (s) müəyyən edilməsi üçün bir filter daxil deyil.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'خريطة جوجل API والمفتاح لهذه لهذه';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'مجموعة من هويات التي';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVE-dan alınan proqram adı ilə uyğun olaraq, Open-AudIT tərəfindən alınan proqram adı uyğunlaşdırılmışdır.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Bu boşluğu test üçün qiymətlər JSON sıra.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Bu istifadəçi üçün Orgs daxil olan bir JSON sərgisi. الهوية التي أخذت من <code>orgs.id</code>. إذا كان للمستعمل إلى إلى';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Təhlükəsiz xüsusiyyətləri olan bir JSON nümayişi <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Seçilmiş məlumat_scan_options üzərində lazım olan xüsusiyyətləri olan JSON nümayişi.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Təhlükəsiz xüsusiyyətləri olan bir JSON nümayişi default alət oyun variantları üzrə yüklənir.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Bu istifadəçiyə verilmiş rollar daxil olan bir JSON sərgisi. أسماء الأدوار الواردة من <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Maç meydana çıxırsa, bir sıra xüsusiyyətləri olan A JSON object.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Bir sıra xüsusiyyətləri olan JSON Obkt.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Kolleksiya xüsusi variantları olan JSON Obkt.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Bir JSON Objektiki Cloud Keçmiş.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Qırmızı məhsulun məlumatları olan bir JSON nümayiş edilib.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Bu inteqrasiya üçün sahələrin JSON nümayişi.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'A JSON müxtəlif testlərin təsviri və bütün cihazlar üzərində onların nəticələri bu bazline qarşı işləyir.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Bu siyasəti edən testlərin JSON nümayişi.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'الشبكة يمكن أن متصلة';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'A Metropolitan sahəsi (MAN) bir şəhər və ya böyük bir kampaniya yayılmış böyük kompüter şəhəridir.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'ألف ويستخدم اكتشاف برنامجاً برنامجاً حلق وكرر Bu, həmçinin icrası və discards haqqında verilmiş bir IP taranmış varsa, bilmək olar ki, sadədir (yaxşı siyahısı taranır).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'اكتشاف شبكة سيمسح المعلومات';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Daha sonra faylını yükləyən agentə və yerli diskdə mağazaya qəbul olunmuş URL.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Yükləmək üçün bir URL.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'وتشكل شبكة خلفية من من ويمكن للخلف أن معا معا<br/><br/>فعلى سبيل شركة تنفذ تنفذ المعدات التي تربط شبكات شبكات وعادة ما قدرة الشبكة الشبكة<br/><br/>ومن الأمثلة خلفية شبكة شبكة';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Bu proqram nömrəsinin nömrəsini göstərdiyi hesablanmış sahəsi seçilmiş Org (ve onun qonaqları)';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Bir kampaniya sahəsi (CAN) müxtəlif coğrafi sahəsində LANların interconnectionundan hazırlanır. وتملك معدات الربط الشبكي النقل النقل النقل النقل الألياف ومقصورة ومقصورة ومقصورة ومقصورة ومقصورة ومقصورة ذلك ذلك ذلك ذلك ذلك ذلك ملكية ملكية ملكية ملكية ملكية من من جانب جانب جانب جانب جانب جانب جانب جانب جانب جانب جانب المستأجر المستأجر المستأجر المستأجر المستأجر المستأجر المستأجر المستأجر المستأجر جامعة، جامعة، جامعة،<br/><br/>Ünvan: Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikası, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti, Azərbaycan Respublikasının Prezidenti';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Daxili bir port erişilebilirdir ( Nmap probepackets almaq və cavab verir), lakin haqqında bir proqram dinləyir. ويمكن أن إظهار في في إظهار لأن الموانئ إليها، الوصول الوصول وقد يرغب البرنامج في في ثم سيظهرون في المميتة،';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'أي جامع إمّا المُجمّعِ';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Xüsusi CVEs ayrı siyahısı.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'قائمة منفصلة يمكن اختيار';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'أمر للهرب العميل العميل العميل';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'اللوحة مكونة ثلاثة أعمدة <i>الأقزام المستعارة</i>. النبتة متشابهة مع موجز، الأرملة تُنشأ بسيطة باستخدام';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'ويعتبر ميناء ممتلئ مفتوحاً';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'ويتمثل الرئيسي اتصالات اتصالات المستخدمين IEEE Project 802-də, bu, avtomatik LANların uğurlu olmasını ehtiva edir.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Bir ev sahəsi şəhəri (HAN) evdə qeyd olunan digital cihazlar arasında ünsiyyət üçün istifadə olunan bir yaşayış LAN, tez-tez və mobil avadanlıq cihazları kimi, xüsusi kompüter və aksesuarların kiçik bir sayıdır. وتتمثل إحدى المهام في في';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'SSH üçün xüsusi TCP portlarının siyahısı (22 SSH, 135 WMI, 62078 iPhone növüdür.';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Sərgi üçün xüsusi UDP limanlarının siyahısı (161 SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'A yerli sahəsi (LAN) ev, uşaq, ofis binası, və ya ən yaxın binalar kimi müxtəlif coğrafi sahəsində kompüter və cihazlar bağlayan bir ağdır. كل حاسوب أو على على<br/><br/>وتشمل الخصائص المميزة المحلية، المحلية، وتعمل التكنولوجيات أو الكهربائية الكهربائية أو حالياً 400 Gbit / Ethernet يجري تطويرها.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'الموقع هو مادي يمكن يمكنك تعيينه إحداثيات كانت كانت';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'اسم الموقع على إيجاد';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'ويعني انخفاض العدد سيطبق';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'ويعني انخفاض العدد سيطبق الوزن الافتراضي 100';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Open-AudIT yeni istifadə edilən yeni istifadəçi və LDAP sənayesi tərəfindən məlumatlanmışdır. ثم أُنشئ المستعمل في النجاح.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'الرزمة هي قطعة الليناري والحزمة تحتوي على من من';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'كلمة من';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'وللشخص حساب في المراجعة ولحساب مستخدميها قائمة والمنظمات الأدوار التي يقوم المستعمل<br/><br/>وعندما يطلب المستعمل إجراء عملية';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Müxtəlif informasiya texnologiyaları arasında kompüter və müxtəlif informasiya texnologiyaları arasında əlaqə üçün istifadə olunan bir kompüter şəhəridir. وبعض الأمثلة على المستخدمة المستخدمة تشمل أجهزة أجهزة لاسلكية ويمتد نطاق شبكة PAN عادة إلى 10 أمتار وعادة ما تُبنى اتصالات اتصالات سلكية سلكية';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'الاستفسار هو أساساً بيان ويتعارض هذا البيانات قاعدة قاعدة يمكن إنشاء باستخدام قائمة Yadda saxla ويجب أن يكون للمستعمل دور ويمكن لجميع المستعملين يقدموا والاستفسار يحمل اسماً في في هذا يُخبر مراجعة الحسابات <i> y</i> تيسيراً للاستفسار في التفاهم<i> n</i> لمنع ظهور الاستفسار السؤال سيستمر إذا دُعي <code>id</code>بغض النظر عن القائمة';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'الرف هو التي الأجهزة الأجهزة الرف وضع على وقد أنشأنا جنادا جدا Üst səviyyətdə (her zaman olduğu kimi) Organisation (Orgasiya). ويمكن أن للأورق مواقع مواقع وإضافة إلى الراكز، يمكن يمكن المبنى يمكن يحتوي على الطابق يمكن يحتوي على الغرفة يمكن أن على على الرف يمكن أن أيضا <i>pod</i> من الرف وتعمل البركة البركة<br/><br/>Raflar Open-AudIT Enterprise lisenziyalar mövcuddur.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP ünvanları və MAC adreslərinin unikal olduğu yerləşdirici domen adı və ünvanı.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'عينة ملف';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bir təhlükəsizlik zonası Ağ Domaini daxili domain və ya siyasət domainidir.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'اكتشاف البذور نوع آخر <i>بذرة</i> جهاز ويجري هذا الجهاز، الجهاز، ثم تُراجع هذه وتُضاف وتُضاف وتستمر هذه بعد ذلك';

$GLOBALS["lang"]['A short description of the log entry.'] = 'وصف قصير للدخول';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Yadda saxla وتستخدم الشبكة في الأول الأول وعادة ما تكون لشبكة لشبكة شبكتها SAN-nin dəyərliyi, 2000-ci ildən çox müştəri və orta ölçülü biznes avadanlıqları arasında daha geniş qarşılaşdırma imkan verir.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'خيط يطابق <code>software.name</code> عزو يمكنك البطاقة البطاقة البرية البرية';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'نظام منظم لإدارة الحساسة';

$GLOBALS["lang"]['A timestamp.'] = 'مصباح';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'المستعمل لديه الأورغ وكذلك وكذلك مجموعة المستخدمين <i>الأورام</i> Qeydiyyat <i>الأدوار</i> تحديد ما ولا يمكن';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'وسيكون لدى المستخدم قائمة بالمنظمات ويسمح كل في لهم بالتصرف<br/><br/>كل الأوعية عدا الـ الـ إذا كان على إذن إذن<br/><br/>ويُسمح للمستعملين أيضاً على هذه هي لوحات، واكتشاف واكتشاف شاشات، شاشات، ومجموعات، واستفسارات، وملخصات، وملخصات، ومحاضر، ومحاضر، ومحاضر، ومحاضر، وملخصات، وملخصات، ومحاضر، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، وملخصات، ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات<br/><br/>لا تنسي لديك سيطرة';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'وسيكون لدى المستخدم قائمة بالمنظمات ويسمح كل في لهم بالتصرف<br/><br/>كل الأوعية عدا الـ الـ إذا كان على إذن إذن<br/><br/>كما أننا نسمح بإذن بإذن هذه هي لوحات، واكتشاف واكتشاف شاشات، شاشات، ومجموعات، واستفسارات، وملخصات، ونباتات وملخصات، وملخصات، وملخصات، وملخصات، ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات ونباتات.<br/><br/>لا تنسي لديك سيطرة';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Bir virtual xüsusi şəbəkə (VPN) nömrələr arasında bağlantılardan biri açıq bağlantılar və ya virtual circuits tərəfindən aparılır (e.g., İnternet) fiziki teller. virtual şəhərin məlumat link kağızı protokolları bu halda daha böyük şəbəkə vaxt vasitəsilə qarşılanır. ويتمثل أحد تأمين في في وعلى سبيل شبكات استخدام استخدام<br/><br/>وقد يكون أداء المواضيعية المواضيعية وعموماً، يكون للشبكة للفيروسية للفيروسية';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'وقد يسمح على يؤثر يؤثر';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'وقد يسمح الضعف يؤثر يؤثر';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Bütün hüquqları qorunur.';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Bir çatışmazlığı dəstəkləndirilmiş və daha xüsusi paketi adlarını dəstəkləyə bilər.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'يمكن النظر في الضعف الضعف İlkWave-dan xüsusi məlumatları ilə CVE-nin hesabatından çıxışdır. ويجمع بين البندين لإعداد لإعداد';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Geniş sahəsin şəhəri (WAN) bir şəhər, ölkə, ölkə, və ya sənaye səviyyətləri kimi böyük coğrafi sahəsində bir kompüter şəhəridir. Bir WAN telefon xüsusiyyətləri, kabellər və hava dalğaları kimi media bir çox növləri birləşdirən bir kompüter kanal istifadə edir. وكثيراً ما شبكة شبكة شبكة وعموما تعمل على العالمية العالمية';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, s.';

$GLOBALS["lang"]['AIX'] = 'Qalereya';

$GLOBALS["lang"]['ALL IPs'] = 'جميع الشخصيات';

$GLOBALS["lang"]['API / Web Access'] = 'API/Web Access';

$GLOBALS["lang"]['API Documentation'] = 'وثائق API';

$GLOBALS["lang"]['API Key required.'] = 'مطلوبة المفتاح';

$GLOBALS["lang"]['API Result'] = 'Axtarış';

$GLOBALS["lang"]['About'] = 'بشأن';

$GLOBALS["lang"]['Above are the only required items.'] = 'فوقها هي البنود';

$GLOBALS["lang"]['Accept'] = 'قبول';

$GLOBALS["lang"]['Access Model'] = 'نموذج الوصول';

$GLOBALS["lang"]['access_point'] = 'نقطة الوصول';

$GLOBALS["lang"]['Access Point'] = 'نقطة الوصول';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'admin$ payı və RPC giriş SMB2 protokol istifadə edir.';

$GLOBALS["lang"]['ack_by'] = 'Ack';

$GLOBALS["lang"]['Ack By'] = 'Ack';

$GLOBALS["lang"]['ack_date'] = 'Ack Tarixi';

$GLOBALS["lang"]['Ack Date'] = 'Ack Tarixi';

$GLOBALS["lang"]['ack_time'] = 'Ack Vaxt';

$GLOBALS["lang"]['Ack Time'] = 'Ack Vaxt';

$GLOBALS["lang"]['action'] = 'الإجراء';

$GLOBALS["lang"]['Action'] = 'الإجراء';

$GLOBALS["lang"]['action_audit'] = 'مراجعة الإجراءات';

$GLOBALS["lang"]['Action Audit'] = 'مراجعة الإجراءات';

$GLOBALS["lang"]['action_command'] = 'القيادة';

$GLOBALS["lang"]['Action Command'] = 'القيادة';

$GLOBALS["lang"]['action_date'] = 'الإجراء';

$GLOBALS["lang"]['Action Date'] = 'الإجراء';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'أجهزة الاستعلام';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'أجهزة الاستعلام';

$GLOBALS["lang"]['action_download'] = 'تحميل الإجراء';

$GLOBALS["lang"]['Action Download'] = 'تحميل الإجراء';

$GLOBALS["lang"]['action_uninstall'] = 'الإجراء Qapı';

$GLOBALS["lang"]['Action Uninstall'] = 'الإجراء Qapı';

$GLOBALS["lang"]['actioned'] = 'الإجراءات المتخذة';

$GLOBALS["lang"]['Actioned'] = 'الإجراءات المتخذة';

$GLOBALS["lang"]['actioned_by'] = 'الإجراءات التي اتخذها';

$GLOBALS["lang"]['Actioned By'] = 'الإجراءات التي اتخذها';

$GLOBALS["lang"]['actioned_date'] = 'التاريخ';

$GLOBALS["lang"]['Actioned Date'] = 'التاريخ';

$GLOBALS["lang"]['actions'] = 'الإجراءات';

$GLOBALS["lang"]['Actions'] = 'الإجراءات';

$GLOBALS["lang"]['Activate'] = 'النشاط';

$GLOBALS["lang"]['Activate Free License'] = 'تفعيل الترخيص المجاني';

$GLOBALS["lang"]['Activate Key'] = 'تفعيل المفتاح';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'تفعيل ترخيص المؤسسة الحرة';

$GLOBALS["lang"]['Active'] = 'النشاط';

$GLOBALS["lang"]['Active / Active'] = 'النشاط/النشط';

$GLOBALS["lang"]['Active / Passive'] = 'النشاط/العاطفة';

$GLOBALS["lang"]['Active Directory'] = 'دليل فعال';

$GLOBALS["lang"]['Active Directory Domain'] = 'الدليل النشط دومان';

$GLOBALS["lang"]['active_directory_ou'] = 'دليل فعال';

$GLOBALS["lang"]['Active Directory Ou'] = 'دليل فعال';

$GLOBALS["lang"]['Active Directory Server'] = 'مديرة نشطة';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'دليل فعال عمل مفتوح';

$GLOBALS["lang"]['ad_domain'] = 'Ad Soyad';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Soyad';

$GLOBALS["lang"]['ad_group'] = 'المجموعة';

$GLOBALS["lang"]['Ad Group'] = 'المجموعة';

$GLOBALS["lang"]['ad_server'] = 'Ad Soyad';

$GLOBALS["lang"]['Ad Server'] = 'Ad Soyad';

$GLOBALS["lang"]['Add'] = 'مضاف';

$GLOBALS["lang"]['Add Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Add Device'] = 'زائد جهاز';

$GLOBALS["lang"]['Add Device to Application'] = 'إضافة أداة للتطبيق';

$GLOBALS["lang"]['Add Device to Cluster'] = 'إضافة أداة إلى المجموعة';

$GLOBALS["lang"]['Add Exception'] = 'الاستثناء';

$GLOBALS["lang"]['Add Field'] = 'الميدان';

$GLOBALS["lang"]['Add If'] = 'مضافا إليه';

$GLOBALS["lang"]['Add Policies from Device'] = 'إضافة سياسات من الأجهزة';

$GLOBALS["lang"]['Add Policy'] = 'السياسات';

$GLOBALS["lang"]['Add Then'] = 'ثم';

$GLOBALS["lang"]['Add Your Credentials'] = 'إضافة وثائق التفويض';

$GLOBALS["lang"]['Add image'] = 'الصورة';

$GLOBALS["lang"]['additional_items'] = 'البنود الإضافية';

$GLOBALS["lang"]['Additional Items'] = 'البنود الإضافية';

$GLOBALS["lang"]['address'] = 'العنوان';

$GLOBALS["lang"]['Address'] = 'العنوان';

$GLOBALS["lang"]['Address any nonconformities'] = 'معالجة أي عدم اتساق';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'معالجة نتائج الحسابات والإجراءات';

$GLOBALS["lang"]['Admin'] = 'Qeydiyyat';

$GLOBALS["lang"]['admin_status'] = 'الوضع';

$GLOBALS["lang"]['Admin Status'] = 'الوضع';

$GLOBALS["lang"]['advanced'] = 'السلف';

$GLOBALS["lang"]['Advanced'] = 'السلف';

$GLOBALS["lang"]['Afghanistan'] = 'أفغانستان';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'بعد خلق التكامل ترى ترى ديبج لا يجب تترك تترك كنعم إلى ينبغي استخدام خيار فقط';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'بعد الانتهاء من سبق،';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'عميل؟ الكشف؟ وثائق التفويض؟';

$GLOBALS["lang"]['agents'] = 'العملاء';

$GLOBALS["lang"]['Agents'] = 'العملاء';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'ويمكن إنشاء على العملاء إذا تطابقت الاختبارات، الخادم إذا لم تحديد أي <i>كل شيء يجب يتطابق</i> شرط<br/><br/>يمكنك أن الخادم متعددين متعددين <i>إذا كان آي بي</i>.<br/><br/>ومثال آخر إدارة يكون يكون إذا تم الوكيل مع <strong>أي</strong> موانئ من ذلك<p>تمكين العملاء يعني أن <strong>الحرب</strong>هذا يأتي بمخاطر أمنية <strong>فقط</strong> الوظيفة عند نظام نظام أوديت أوديت أوديت أوديت أوديت باستخدام باستخدام (منحت سلطة الشهادة) </p>';

$GLOBALS["lang"]['Aggressive'] = 'المعتدي';

$GLOBALS["lang"]['Aland Islands'] = 'جزر آلاند';

$GLOBALS["lang"]['Albania'] = 'ألبانيا';

$GLOBALS["lang"]['Albanian'] = 'ألبانيا';

$GLOBALS["lang"]['alert_style'] = 'Ad Soyad';

$GLOBALS["lang"]['Alert Style'] = 'Ad Soyad';

$GLOBALS["lang"]['Algeria'] = 'الجزائر';

$GLOBALS["lang"]['algorithm'] = ' Alg';

$GLOBALS["lang"]['Algorithm'] = ' Alg';

$GLOBALS["lang"]['alias'] = 'Elan';

$GLOBALS["lang"]['Alias'] = 'Elan';

$GLOBALS["lang"]['All'] = 'كل شيء';

$GLOBALS["lang"]['All IPs'] = 'جميع شركاء التنفيذ';

$GLOBALS["lang"]['All Policies'] = 'جميع السياسات';

$GLOBALS["lang"]['All Queued Items'] = 'Ətraflı məhsullar';

$GLOBALS["lang"]['All collections URLs use the format'] = 'جميع المجموعات تستخدم الشكل';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'جميع الطاولات للأجهزة تحتوي';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'كل الأجهزة نوع مثل';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'جميع الأجهزة لديها جهاز';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'جميع الأجهزة بدون من';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'جميع الأجهزة نوع من';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'وجميع خيارات الاكتشاف متاحة متاحة';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'ويمكن إنشاء جميع نفسها تستخدم المهام طريقة طريقة لتحديد مواعيد';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'وإلى جانب طلب هذا، هذا،';

$GLOBALS["lang"]['Also can be created from the'] = 'أيضا يمكن خلقها من';

$GLOBALS["lang"]['Alternatives'] = 'البدائل';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS الحقول';

$GLOBALS["lang"]['American Samoa'] = 'ساموا الأمريكية';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'اكتشاف دليل فعال يتساءل';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'An Org (organizasiya) Open-AudIT-da kolleksiyalarda ən məhsulların sahibidir. باستثناء البنود العالمية مثل <i>التشكيل</i>معظم الأصناف أورغ لـ';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'UDP datagramları və ya SCTP birləşdirilmələri bu port. البحث عنها غالباً يكون يكون كما أن الموانئ مثيرة مثيرة';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'مجموعة من <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'مجموعة من <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'مجموعة من تمثل روابط';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'تخمين متعلم للهوية الجهاز';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'İstehsal olunan xüsusiyyətləri olan şifreli JSON nümayişi <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'وشبكة خاصة شبكة هي هي';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'يمكن إنشاء باستخدام واجهة';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'ومن الأمثلة ذلك أن هذا يجب أن';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'ومثال على ذلك أن';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'وتم التصديق مستعمل مفتوح مفتوح النجاح.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Bu site tələb olunan xidmətinin səviyyəsi.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'حقل داخلي إلى أن';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'ويعتبر فتح ميناء مفتوح<br/>سابقاً ونظرت المعلومات في';

$GLOBALS["lang"]['An optional GeoCode'] = 'Xüsusi GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'كلمة مرور اختيارية';

$GLOBALS["lang"]['Analyzed'] = 'محلل';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'وأخيرًا، نضغط على';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'وإذا كان هناك خاطئ؟';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'والنقرة الأخيرة <i>Daxil ol</i> لخلق أسلوبك المفتوح للانتقال';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'وأخيراً، ليس من المسائل المسائل الأمنية الأمنية من السلام السلام السلام. وهياكل البيانات مفتوحة يمكنك رؤيتهم';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'نقدّم به به به بتواضع <i>إدراج أي آخر لا</i> يتم اختياره ثم نقر <i>Qeydiyyat<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'أكثر بكثير';

$GLOBALS["lang"]['Andorra'] = 'أندورا';

$GLOBALS["lang"]['Angola'] = 'أنغولا';

$GLOBALS["lang"]['Anguilla'] = 'أنغيلا';

$GLOBALS["lang"]['Annex A Controls'] = 'المرفق - الضوابط';

$GLOBALS["lang"]['Antarctica'] = 'أنتاركتيكا';

$GLOBALS["lang"]['AntiVirus'] = 'Daxil ol';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Paketləri';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'أنتيغوا وبربودا';

$GLOBALS["lang"]['Antivirus'] = 'Pulsuz';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز فقط متاح عند الناغم 7+';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز طراز طراز فقط متاح عند الناغم 7+';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'أي وثائق إضافية تحتاجها';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'أي ملاحظات إضافية بها';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'وتدل أية سمات تليها تليها على على بيانات بيانات بيانات المادة استخدمت استخدمت استخدمت لإكمال لإكمال لإكمال لإكمال لإكمال لإكمال لإكمال لإكمال. وباختصار، نسعى الـ الحقول الـ';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'وستخصص أي الـ الـ الـ الـ نص نص نص مراجعة';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'وستخصص أي الـ الـ الـ الـ نص نص نص مراجعة الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'أي أجهزة سيتم تعيينها <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'وستخصص أي الموقع لهذا لهذا';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'وستخصص أي الموقع لهذا لهذا الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'أيّ أجهزة مكتشفة سيتمّ تعيينها إذا لم يتم فإنها <code>org_id</code> لهذا الاكتشاف الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'أي ملفات وجدت الطريقة <i>التنفيذ</i> جدول حسب عنصر آخر';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'أي مرشح مطلوب ملاحظة: عندما يكون من النوع النوع النوع هذا يمثل يمثل يمثل رمزاً رائعاً.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ من طراز طراز TCP تتمنى (مغلقة، لا أماكن)';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ من طراز طراز';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'أي صور محملة المستخدمين';

$GLOBALS["lang"]['Application'] = 'التطبيق';

$GLOBALS["lang"]['Application Definitions'] = 'تعاريف التطبيق';

$GLOBALS["lang"]['application_id'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application ID'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application Licenses'] = 'تراخيص التطبيق';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'تطبيق نظام أو نظام';

$GLOBALS["lang"]['applications'] = 'التطبيقات';

$GLOBALS["lang"]['Applications'] = 'التطبيقات';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'التطبيقات هي سمة فقط';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'ويجري إدخال تطبيقات البند البند البند البند باب باب باب المفهوم المفهوم المفهوم المفهوم المفهوم المفهوم تطويره تطويره تطويره تطويره تطويره تطويره تطويره تطويره تطويره';

$GLOBALS["lang"]['applied'] = 'التطبيق';

$GLOBALS["lang"]['Applied'] = 'التطبيق';

$GLOBALS["lang"]['Approved'] = 'الوظائف المعتمدة';

$GLOBALS["lang"]['Approved Packages'] = 'المبالغ المعتمدة';

$GLOBALS["lang"]['April'] = 'نيسان/أبريل';

$GLOBALS["lang"]['Arabic'] = 'العربية';

$GLOBALS["lang"]['architecture'] = 'الهندسة';

$GLOBALS["lang"]['Architecture'] = 'الهندسة';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'هل أنت أنك تريد';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'هل أنت أنك تريد';

$GLOBALS["lang"]['Are you sure?'] = 'هل أنت متأكد؟';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'هل أنت متأكد؟ Bu, bütün sıra girişləri aradan qaldıracaq və qeyd edilmiş IPs qarşısını alır.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'هل أنت وهذا سيعيد سيعيد';

$GLOBALS["lang"]['area'] = 'المنطقة';

$GLOBALS["lang"]['Area'] = 'المنطقة';

$GLOBALS["lang"]['Argentina'] = 'الأرجنتين';

$GLOBALS["lang"]['Armenia'] = 'أرمينيا';

$GLOBALS["lang"]['arp'] = 'Axtar';

$GLOBALS["lang"]['Arp'] = 'Axtar';

$GLOBALS["lang"]['Aruba'] = 'أروبا';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'كتذكير كيف "إفتتاح"';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'ونتيجة لذلك، نحن <strong>يجب أن يجب</strong> وتتاح حصة الدولار لمستخدم يرجى التحقق من ويندوز <i>أكتب</i> الوصول إلى مستعمل التفويض<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'وكما ذُكر لا يتكلم وهذا يعني لا نستطيع نحن نحاول إذا فضولي فضولي ربما ليس موجوداً أن أن ربما عليك تجبرك على';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'وفقاً لمعايير العمل المفتوح - <i>ولا تحاول تنفيذ من من ولا يتحمل مبدعون المعيار المعيار</i><br/><br/>بجدية، لا تبدأي بالعمى <i>إصلاح</i> كشفت القضايا إجراء معيار معيار';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'حسب خصائص بيئات الإنتاج،';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'بينما يستخدم مراجعة الحسابات';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'كالعادة، الذهاب إلى الطعام <i>Daxil ol</i>لا أستطيع جعله أسهل';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'بينما ندير ونجمع نتائج  Happy Subnets xüsusiyyəti bu şəbəkələrin siyahısı yalnız bu şəbəkələrdən data qeyd edir.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'كما سجلتم المُجمعون، رجاءً';

$GLOBALS["lang"]['Ask me later'] = 'اسألني لاحقاً';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'اطلب من المساعدة أو';

$GLOBALS["lang"]['aspect_ratio'] = 'نسبة المشتبه فيهم';

$GLOBALS["lang"]['Aspect Ratio'] = 'نسبة المشتبه فيهم';

$GLOBALS["lang"]['Asset ID'] = 'هوية الأصول';

$GLOBALS["lang"]['asset_ident'] = 'الأصول';

$GLOBALS["lang"]['Asset Ident'] = 'الأصول';

$GLOBALS["lang"]['asset_number'] = 'عدد الأصول';

$GLOBALS["lang"]['Asset Number'] = 'عدد الأصول';

$GLOBALS["lang"]['asset_tag'] = 'الأصول';

$GLOBALS["lang"]['Asset Tag'] = 'الأصول';

$GLOBALS["lang"]['Assign Device to Application'] = 'جهاز التطبيق';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'جهاز تصميم للمجموعة';

$GLOBALS["lang"]['Assign Device to Location'] = 'جهاز تحديد الموقع';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'جهاز إرسال إلى المنظمة';

$GLOBALS["lang"]['Assign Devices to Location'] = 'أجهزة تحديد الموقع';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'الأجهزة المعينة للمنظمة';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'تعيين مدير فريق تابع';

$GLOBALS["lang"]['Assign an Operator'] = 'تعيين مشغل';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'إرسال أي أجهزة إلى';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'نرسل الجهاز إلى موقع';

$GLOBALS["lang"]['Assign the device to an Org'] = 'إرسال الجهاز إلى أورغ';

$GLOBALS["lang"]['Assigned To'] = 'Axtarış';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'تعيين الأجهزة المكتشفة';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'وفي الوقت يمكننا أن';

$GLOBALS["lang"]['attached_device_id'] = 'بطاقة هوية ملحقة';

$GLOBALS["lang"]['Attached Device ID'] = 'بطاقة هوية ملحقة';

$GLOBALS["lang"]['attached_to'] = 'ملحقة';

$GLOBALS["lang"]['Attached To'] = 'ملحقة';

$GLOBALS["lang"]['attachment'] = 'الملحق';

$GLOBALS["lang"]['Attachment'] = 'الملحق';

$GLOBALS["lang"]['attachments'] = 'الملاحق';

$GLOBALS["lang"]['Attachments'] = 'الملاحق';

$GLOBALS["lang"]['attack_complexity'] = 'تعقيد الهجوم';

$GLOBALS["lang"]['Attack Complexity'] = 'تعقيد الهجوم';

$GLOBALS["lang"]['attack_requirements'] = 'متطلبات الهجوم';

$GLOBALS["lang"]['Attack Requirements'] = 'متطلبات الهجوم';

$GLOBALS["lang"]['attack_vector'] = 'هجوم';

$GLOBALS["lang"]['Attack Vector'] = 'هجوم';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'محاولة لربط إذا كنا';

$GLOBALS["lang"]['Attribute'] = 'المساهمة';

$GLOBALS["lang"]['attributes'] = 'الخصائص';

$GLOBALS["lang"]['Attributes'] = 'الخصائص';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'وتُخزَّن المواصفات لاستخدامها حقول حقول الصفات التي تحريرها مرتبطة';

$GLOBALS["lang"]['Audit'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit AIX'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit DNS'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit ESXi'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit Linux'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['audit_log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit Log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit Mount Point'] = 'بند مراجعة الحسابات';

$GLOBALS["lang"]['Audit My PC'] = 'مراجعة حساباتي';

$GLOBALS["lang"]['Audit Netstat'] = 'Axtar';

$GLOBALS["lang"]['Audit OSX'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit Result Input'] = 'الناتج';

$GLOBALS["lang"]['Audit Software'] = 'برامج مراجعة الحسابات';

$GLOBALS["lang"]['Audit Status'] = 'حالة مراجعة الحسابات';

$GLOBALS["lang"]['Audit Win32 Product'] = 'مراجعة الحسابات المنتجات';

$GLOBALS["lang"]['Audit Windows'] = 'نافذة مراجعة الحسابات';

$GLOBALS["lang"]['Audit the Device'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audits'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['August'] = 'آب/أغسطس';

$GLOBALS["lang"]['Australia'] = 'أستراليا';

$GLOBALS["lang"]['Austria'] = 'النمسا';

$GLOBALS["lang"]['Auth'] = 'Elan';

$GLOBALS["lang"]['auth'] = 'Elan';

$GLOBALS["lang"]['Auth Methods'] = 'الأساليب الأفقية';

$GLOBALS["lang"]['Authenticate only'] = 'فقط';

$GLOBALS["lang"]['Authentication Passphrase'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['Authentication Protocol'] = 'بروتوكول التوثيق';

$GLOBALS["lang"]['authority_key_ident'] = 'الهيئة الرئيسية';

$GLOBALS["lang"]['Authority Key Ident'] = 'الهيئة الرئيسية';

$GLOBALS["lang"]['Auto'] = 'Avtomobil';

$GLOBALS["lang"]['auto_renew'] = 'Avtomobil Yeni';

$GLOBALS["lang"]['Auto Renew'] = 'Avtomobil Yeni';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'مأهولة من قِبَل مفتوح';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenews';

$GLOBALS["lang"]['automatable'] = 'التشغيل الآلي';

$GLOBALS["lang"]['Automatable'] = 'التشغيل الآلي';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'مأهولة بالسكان آلياً على';

$GLOBALS["lang"]['availability'] = 'التوافر';

$GLOBALS["lang"]['Availability'] = 'التوافر';

$GLOBALS["lang"]['Available Benchmarks'] = 'المعايير المتاحة';

$GLOBALS["lang"]['Awaiting Analysis'] = 'في انتظار التحليل';

$GLOBALS["lang"]['Azerbaijan'] = 'أذربيجان';

$GLOBALS["lang"]['Azerbaijani'] = 'أذربيجان';

$GLOBALS["lang"]['Azure Active Directory'] = 'الدليل النشط';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'المجموع';

$GLOBALS["lang"]['Backbone network'] = 'الشبكة الخلفية';

$GLOBALS["lang"]['Backup'] = 'الدعم';

$GLOBALS["lang"]['Bahamas the'] = 'جزر البهاما';

$GLOBALS["lang"]['Bahrain'] = 'البحرين';

$GLOBALS["lang"]['Bangladesh'] = 'بنغلاديش';

$GLOBALS["lang"]['bank'] = 'المصرف';

$GLOBALS["lang"]['Bank'] = 'المصرف';

$GLOBALS["lang"]['Banned'] = 'تم حظرها';

$GLOBALS["lang"]['Banned Packages'] = 'قطع الغيار';

$GLOBALS["lang"]['bar_code'] = 'قانون المحاماة';

$GLOBALS["lang"]['Bar Code'] = 'قانون المحاماة';

$GLOBALS["lang"]['Barbados'] = 'بربادوس';

$GLOBALS["lang"]['Base DN'] = 'قاعدة DN';

$GLOBALS["lang"]['base_score'] = 'القاعدة';

$GLOBALS["lang"]['Base Score'] = 'القاعدة';

$GLOBALS["lang"]['base_severity'] = 'الجزء السفلي';

$GLOBALS["lang"]['Base Severity'] = 'الجزء السفلي';

$GLOBALS["lang"]['based_on'] = 'القائمة';

$GLOBALS["lang"]['Based On'] = 'القائمة';

$GLOBALS["lang"]['baseline'] = 'خط الأساس';

$GLOBALS["lang"]['Baseline'] = 'خط الأساس';

$GLOBALS["lang"]['baseline_id'] = 'هوية خط الأساس';

$GLOBALS["lang"]['Baseline ID'] = 'هوية خط الأساس';

$GLOBALS["lang"]['baselines'] = 'خطوط الأساس';

$GLOBALS["lang"]['Baselines'] = 'خطوط الأساس';

$GLOBALS["lang"]['baselines_policies'] = 'السياسات الأساسية';

$GLOBALS["lang"]['Baselines Policies'] = 'السياسات الأساسية';

$GLOBALS["lang"]['Baselines Policy'] = 'السياسات الأساسية';

$GLOBALS["lang"]['Baselines Policy Details'] = 'تفاصيل السياسات الأساسية';

$GLOBALS["lang"]['baselines_results'] = 'النتائج الأساسية';

$GLOBALS["lang"]['Baselines Results'] = 'النتائج الأساسية';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'ويمكن للخطوط أن تقارن';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'ويمكنك خطوط بين الجمع الجمع';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'خطوط الأساس لمقارنة الأجهزة';

$GLOBALS["lang"]['Basic'] = 'أساسي';

$GLOBALS["lang"]['Basque'] = 'Qalereya';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'لأننا نحاول نكون شفافين شفافين';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'والتمكن من تحديد آلات آلات يتم بمجرد أن تحدد الأساس الأساس وسيكون ناتج المنفذة هذه هذه<br/><br/>ولأغراض مراجعة الحسابات يمكن يمكن ويمكنك خطوط بين الجمع الجمع';

$GLOBALS["lang"]['Belarus'] = 'بيلاروس';

$GLOBALS["lang"]['Belgium'] = 'بلجيكا';

$GLOBALS["lang"]['Belize'] = 'بليز';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'وفيما يلي على الشكل الشكل';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'أسفل هذه الخطوط يتم';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'أسفل يمكنك مثال أورغ <i>التمويل ألف</i> Or عن عن عن عن عن المطلوبة النظر النظر عن عن النظر النظر<br/><br/> collection  requested  requested  requested  requested  requested  requested  requested  requested ويتعلق الأمر<br/><br/>ملاحظة - يمكن أن أن يحصل يحصل شركة  Default هو هو هو السؤال ولن تظهر النتيجة الأجهزة الأجهزة التي';

$GLOBALS["lang"]['Benchmark'] = 'المعيار المرجعي';

$GLOBALS["lang"]['benchmark_id'] = 'المعيار المرجعي';

$GLOBALS["lang"]['Benchmark ID'] = 'المعيار المرجعي';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'وتنشأ المهام المرجعية عند';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'ويمكن أن يستغرق والتجهيز والتجهيز';

$GLOBALS["lang"]['benchmarks'] = 'المعايير المرجعية';

$GLOBALS["lang"]['Benchmarks'] = 'المعايير المرجعية';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['benchmarks_log'] = 'Elanlar';

$GLOBALS["lang"]['Benchmarks Log'] = 'Elanlar';

$GLOBALS["lang"]['benchmarks_policies'] = 'السياسات العامة';

$GLOBALS["lang"]['Benchmarks Policies'] = 'السياسات العامة';

$GLOBALS["lang"]['benchmarks_result'] = 'النقاط المرجعية';

$GLOBALS["lang"]['Benchmarks Result'] = 'النقاط المرجعية';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'وتُنشأ المعايير طريق توفير توفير وبعد الإنشاء، تنفيذ المعايير';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'المعايير المتعلقة بأفضل الممارسات';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'وتقدم العلامات توصيات أمنية<p><i>OpenSCAP anadan:</i> وفي عالم الأمن الذي الذي كما ينبغي تشمل طريقة طريقة ويوفر النظام العضوية باب باب</p>';

$GLOBALS["lang"]['Benefits'] = 'الاستحقاقات';

$GLOBALS["lang"]['Bengali'] = 'بنغالي';

$GLOBALS["lang"]['Benin'] = 'بنن';

$GLOBALS["lang"]['Bermuda'] = 'برمودا';

$GLOBALS["lang"]['best_practises'] = 'Best Practiss';

$GLOBALS["lang"]['Best Practises'] = 'Best Practiss';

$GLOBALS["lang"]['Bhutan'] = 'بوتان';

$GLOBALS["lang"]['bios'] = ' Bio';

$GLOBALS["lang"]['Bios'] = ' Bio';

$GLOBALS["lang"]['body'] = 'الهيئة';

$GLOBALS["lang"]['Body'] = 'الهيئة';

$GLOBALS["lang"]['Bolivia'] = 'بوليفيا';

$GLOBALS["lang"]['Boolean'] = 'Bakı';

$GLOBALS["lang"]['Boolean 1/0'] = 'Polan 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Qalereya';

$GLOBALS["lang"]['boot_device'] = 'جهاز التفجير';

$GLOBALS["lang"]['Boot Device'] = 'جهاز التفجير';

$GLOBALS["lang"]['bootable'] = ' Pot';

$GLOBALS["lang"]['Bootable'] = ' Pot';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'البوسنة والهرسك';

$GLOBALS["lang"]['Both forms of'] = 'الشكلان';

$GLOBALS["lang"]['Botswana'] = 'بوتسوانا';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'جزيرة (بوفيتويا)';

$GLOBALS["lang"]['Brazil'] = 'البرازيل';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'البرازيل';

$GLOBALS["lang"]['Breaking it Down'] = 'كسرها';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'إقليم المحيط الهندي البريطاني';

$GLOBALS["lang"]['British Virgin Islands'] = 'جزر فرجن البريطانية';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'الشجرة الشجرة إلى روت روت روت - حواسيب - > حاسوبي<br/><br/>النقر الصحيح <i>حاسوبي</i> واختيار الممتلكات<br/><br/>اختيار <i>الممتلكات الافتراضية</i> tab';

$GLOBALS["lang"]['Brunei Darussalam'] = 'بروني دار السلام';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'المجموع';

$GLOBALS["lang"]['Btu Total'] = 'المجموع';

$GLOBALS["lang"]['build_number'] = 'رقم البناء';

$GLOBALS["lang"]['Build Number'] = 'رقم البناء';

$GLOBALS["lang"]['build_number_full'] = 'العدد الكامل';

$GLOBALS["lang"]['Build Number Full'] = 'العدد الكامل';

$GLOBALS["lang"]['Building'] = 'المبنى';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'بناء الثقة مع والشركاء';

$GLOBALS["lang"]['Bulgaria'] = 'بلغاريا';

$GLOBALS["lang"]['Bulgarian'] = 'بلغاريا';

$GLOBALS["lang"]['Bulk Edit'] = ' Bulk  Bulk';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Edit Form';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Avtomatlaşdırma Device Attributes';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'اختيارات التحرير لن تبقى';

$GLOBALS["lang"]['Burkina Faso'] = 'بوركينا فاسو';

$GLOBALS["lang"]['Burundi'] = 'بوروندي';

$GLOBALS["lang"]['business_requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['Business Requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'لكن لدي فقط الويندوز';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'لكن لا تغيير ملف';

$GLOBALS["lang"]['Buy'] = 'اشتري';

$GLOBALS["lang"]['Buy More'] = 'اشتر المزيد';

$GLOBALS["lang"]['Buy More Licenses'] = 'شراء المزيد من التراخيص';

$GLOBALS["lang"]['By'] = 'من قبل';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'عن طريق ندمج <i> y</i>مع 4.2.0 نحن أيضاً نشحن قاعدة تقول تقول <i>إذا إكتشفنا ولديه جهاز</i>من الواضح أنه يمكنك يمكنك';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'عن طريق نتخطى شهادة شهادة ولتمكين التصديق الشهادة، حرر';

$GLOBALS["lang"]['CIDR'] = ' C';

$GLOBALS["lang"]['CIDR Mask'] = ' C Bakı';

$GLOBALS["lang"]['cli_config'] = 'Oxunub Qeydiyyat';

$GLOBALS["lang"]['CLI Config'] = 'Oxunub Qeydiyyat';

$GLOBALS["lang"]['CPU'] = ' CPU';

$GLOBALS["lang"]['CPUs'] = ' CPU';

$GLOBALS["lang"]['CSV'] = 'E-poçt';

$GLOBALS["lang"]['CVE'] = 'Bakı';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'Alınan bir statusla CVEs, analiz altında, analiz altında, redaktə. ولا تحتوي هذه الفحوصات';

$GLOBALS["lang"]['Calculated from discovery.'] = 'محسوبة من الاكتشاف';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'حساب مجموع عناوين شركاء';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'حسب الوقت الذي تنفيذ';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'يحسب تنفيذ تنفيذ كل وصلة <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'يحسب إدارة إدارة كل وصلة <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'يُحسب إدارة إدارة';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'ويحسب عند التكامل ويحتوي';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'يحسب التكامل إدارة إدارة';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'حساب يجري يجري يجري';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'استدعي القيادة عن طريق <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'كمبوديا';

$GLOBALS["lang"]['Cameroon'] = 'الكاميرون';

$GLOBALS["lang"]['Campus Area Network'] = 'Qalereya';

$GLOBALS["lang"]['Campus area network'] = 'شبكة منطقة كامبوس';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'يمكن <code>active</code>.. <code>passive</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'يمكن <code>application</code>.. <code>compute</code>.. <code>database</code>.. <code>storage</code>.. <code>virtualisation</code>.. <code>web</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'يمكن <code>auto</code>.. <code>fixed</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'يمكن <code>high availability</code>.. <code>load balancing</code>.. <code>performance</code>.. <code>storage</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'يمكن <code>line</code>.. <code>pie</code> أو <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'يمكن <code>user</code> أو <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'يمكن تحديدها بواسطة أو';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'يمكن تحديدها بواسطة أو يستخدم الهويّة من المواقع';

$GLOBALS["lang"]['Can the user edit this item.'] = 'أيمكن للمستعمل يحرر هذا';

$GLOBALS["lang"]['Canada'] = 'كندا';

$GLOBALS["lang"]['Cancel'] = 'إلغاء';

$GLOBALS["lang"]['capabilities'] = 'القدرات';

$GLOBALS["lang"]['Capabilities'] = 'القدرات';

$GLOBALS["lang"]['Capacity'] = 'القدرات';

$GLOBALS["lang"]['Cape Verde'] = 'الرأس الأخضر';

$GLOBALS["lang"]['Capitalise'] = 'رأس المال';

$GLOBALS["lang"]['caption'] = 'Qalereya';

$GLOBALS["lang"]['Caption'] = 'Qalereya';

$GLOBALS["lang"]['Catalan'] = 'Kateqoriya';

$GLOBALS["lang"]['Cayman Islands'] = 'جزر كايمان';

$GLOBALS["lang"]['Cellular Details'] = 'التفاصيل الخلوية';

$GLOBALS["lang"]['Central African Republic'] = 'جمهورية أفريقيا الوسطى';

$GLOBALS["lang"]['certificate'] = 'شهادة';

$GLOBALS["lang"]['Certificate'] = 'شهادة';

$GLOBALS["lang"]['certificate_file'] = 'ملف الشهادة';

$GLOBALS["lang"]['Certificate File'] = 'ملف الشهادة';

$GLOBALS["lang"]['certificate_name'] = 'اسم الشهادة';

$GLOBALS["lang"]['Certificate Name'] = 'اسم الشهادة';

$GLOBALS["lang"]['certificates'] = 'الشهادات';

$GLOBALS["lang"]['Certificates'] = 'الشهادات';

$GLOBALS["lang"]['Certification'] = 'التصديق';

$GLOBALS["lang"]['Certification Audit'] = 'مراجعة شهادات التصديق';

$GLOBALS["lang"]['Certification Process'] = 'عملية التصديق';

$GLOBALS["lang"]['Chad'] = 'تشاد';

$GLOBALS["lang"]['Change'] = 'التغيير';

$GLOBALS["lang"]['change_id'] = 'تغيير الهوية';

$GLOBALS["lang"]['Change ID'] = 'تغيير الهوية';

$GLOBALS["lang"]['change_log'] = 'التغيير';

$GLOBALS["lang"]['Change Log'] = 'التغيير';

$GLOBALS["lang"]['Change Logs'] = 'التغيير';

$GLOBALS["lang"]['change_type'] = 'التغيير';

$GLOBALS["lang"]['Change Type'] = 'التغيير';

$GLOBALS["lang"]['check_minutes'] = 'دقائق التحقق';

$GLOBALS["lang"]['Check Minutes'] = 'دقائق التحقق';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'تحقق من من هذه الموانئ';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'تحقق من المرفأ لأي';

$GLOBALS["lang"]['Chile'] = 'شيلي';

$GLOBALS["lang"]['China'] = 'الصين';

$GLOBALS["lang"]['Chinese'] = 'الصينية';

$GLOBALS["lang"]['Chinese (traditional)'] = 'الصينية (التقليدية)';

$GLOBALS["lang"]['Choose'] = 'الاختيار';

$GLOBALS["lang"]['Choose (select OS first)'] = 'الاختيار (الاختيار أولاً)';

$GLOBALS["lang"]['Choose a Device'] = 'اختر جهازا';

$GLOBALS["lang"]['Choose a Table'] = 'اختيار الجدول';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'اختر نوع من أول أول';

$GLOBALS["lang"]['Christmas Island'] = 'جزيرة عيد الميلاد';

$GLOBALS["lang"]['cidr'] = 'سيد';

$GLOBALS["lang"]['Cidr'] = 'سيد';

$GLOBALS["lang"]['circuit_count'] = 'الدائرة الكونت';

$GLOBALS["lang"]['Circuit Count'] = 'الدائرة الكونت';

$GLOBALS["lang"]['circuit_status'] = 'مركز الدائرة';

$GLOBALS["lang"]['Circuit Status'] = 'مركز الدائرة';

$GLOBALS["lang"]['city'] = 'المدينة';

$GLOBALS["lang"]['City'] = 'المدينة';

$GLOBALS["lang"]['class'] = 'الرتبة';

$GLOBALS["lang"]['Class'] = 'الرتبة';

$GLOBALS["lang"]['class_text'] = 'الفصل';

$GLOBALS["lang"]['Class Text'] = 'الفصل';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Axtar <i>سر العميل الجديد</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Yadda saxla';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'انقر <i>الممتلكات</i> تحت <i>Qeydiyyat</i> رئيس في المركزي للقائمة <i>وصول المستعملين</i>. ذات مرة اقطعها إلى<br/><br/>ميداننا المثالي يبدو هكذا<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>القسم الذي نحتاجه هو <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (هوية المستأجر). ويستخدم هذا في برنامج مفتوح مفتوح مفتوح مفتوح مفتوح مفتوح مفتوح بوصفه " <i>المستأجر</i> الحقل، حتى الرعي';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Yeni proqram yaratmaq üçün App Registrations basın, sonra yeni Application Registration okuyun. أعطها اسماً (استخدمت نظام التسجيل مفتوح)، واختار تطبيق الموقع الإلكتروني الإلكتروني ووفر ووفر ووفر أي أي أي والآن والآن والآن والآن نقر نقر الكريت';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'اضغط على موافقتك النافذة<br/><br/>وستتطلب التغييرات المذكورة إعادة';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'اضغط على الذي صنعته<br/><br/>لخلق سر العملاء، ستينغز، قدم اسماً واختار موعداً<br/><br/>القيمة ستكون لك هذا';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'قم بضغط زر لسحب<br/>وهذا سيزيل الأجهزة أدناه ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'اضغط زر الاديت <i>Basic SAML الاتحاد</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'قم بضغط الإستيراد تحته';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'اضغط على الذي ترغب';

$GLOBALS["lang"]['Client ID'] = 'هوية العميل';

$GLOBALS["lang"]['Client ID and Secret'] = 'هوية العميلة والسرية';

$GLOBALS["lang"]['client_ident'] = 'هوية العميل';

$GLOBALS["lang"]['Client Ident'] = 'هوية العميل';

$GLOBALS["lang"]['client_secret'] = 'سر العميل';

$GLOBALS["lang"]['Client Secret'] = 'سر العميل';

$GLOBALS["lang"]['client_site_name'] = 'اسم الموقع';

$GLOBALS["lang"]['Client Site Name'] = 'اسم الموقع';

$GLOBALS["lang"]['Close'] = 'اقترب';

$GLOBALS["lang"]['Closed'] = 'مغلق';

$GLOBALS["lang"]['Cloud'] = 'Yadda saxla';

$GLOBALS["lang"]['Cloud Details'] = 'التفاصيل';

$GLOBALS["lang"]['Cloud Discovery'] = 'Axtarış';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'الاكتشاف ومراجعة الحسابات';

$GLOBALS["lang"]['cloud_id'] = 'هوية السحاب';

$GLOBALS["lang"]['Cloud ID'] = 'هوية السحاب';

$GLOBALS["lang"]['cloud_log'] = 'كلود لوغ';

$GLOBALS["lang"]['Cloud Log'] = 'كلود لوغ';

$GLOBALS["lang"]['cloud_name'] = 'اسم السحاب';

$GLOBALS["lang"]['Cloud Name'] = 'اسم السحاب';

$GLOBALS["lang"]['Cloud Network'] = 'شبكة السحاب';

$GLOBALS["lang"]['clouds'] = 'السحابات';

$GLOBALS["lang"]['Clouds'] = 'السحابات';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'والكلاود هي متاحة للزبائن';

$GLOBALS["lang"]['cluster'] = 'المجموعة';

$GLOBALS["lang"]['Cluster'] = 'المجموعة';

$GLOBALS["lang"]['cluster_id'] = 'المجموعة';

$GLOBALS["lang"]['Cluster ID'] = 'المجموعة';

$GLOBALS["lang"]['cluster_name'] = 'اسم المجموعة';

$GLOBALS["lang"]['Cluster Name'] = 'اسم المجموعة';

$GLOBALS["lang"]['cluster_type'] = 'المجموعة';

$GLOBALS["lang"]['Cluster Type'] = 'المجموعة';

$GLOBALS["lang"]['clusters'] = 'المجموعات';

$GLOBALS["lang"]['Clusters'] = 'المجموعات';

$GLOBALS["lang"]['Clusters and Reporting'] = 'المجموعات والإبلاغ';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'جزر (Keeling)';

$GLOBALS["lang"]['Collection'] = 'المجموعة';

$GLOBALS["lang"]['Collections'] = 'المبالغ المحصلة';

$GLOBALS["lang"]['Collector'] = 'جامع';

$GLOBALS["lang"]['Collector (UUID)'] = 'جامع (UID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'المُجمع هي هي السمات السمات الوحيدة الوحيدة ويحصل زبائن المؤسسات رخصة ويمكن شراء رخص للمجمع';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'المُجمع / الخادم مُصمّم بحيث يُمكنُك يُمكنُك نائي <i>جامع</i> كمثال على على على على على على وقد يكون أمنية أمنية أمنية أمنية أمنية فرعية، فرعية، فرعية، فرعية، أو أو أو أو أو أو أو أو ويقوم المجمِّع عن بعد بعد المجمّع بمجرد يسيطر عليه <i>خادم</i>. هذا يعني تحتاج فقط فقط إلى';

$GLOBALS["lang"]['Collector Dashboard'] = 'مركب';

$GLOBALS["lang"]['Collector Name'] = 'اسم المجموعة';

$GLOBALS["lang"]['collector_uuid'] = 'جامع';

$GLOBALS["lang"]['Collector Uuid'] = 'جامع';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'وتُنشأ مهام تلقائياً عندما وينبغي ألا يقوم مباشرة ويمكن للمهام يضطلع بها Open-AudIT Server\'ın buraxdığı kollektorlar varsa, əlavə bir damla verilir. يمكنك اختيار لتحديد أي ولا يُدعم سوى الاكتشاف';

$GLOBALS["lang"]['Collectors'] = 'المجموعة';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'ويمكن للمجمعين أن في في وعندما يكون في المجمّع، المجمّع، وعندما تكون الوحدة حالة حالة';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'مجموعة الاكتشاف عن بعد';

$GLOBALS["lang"]['Colombia'] = 'كولومبيا';

$GLOBALS["lang"]['color'] = ' Color';

$GLOBALS["lang"]['Color'] = ' Color';

$GLOBALS["lang"]['Column'] = 'Ümumi';

$GLOBALS["lang"]['Columns'] = 'Qalereya';

$GLOBALS["lang"]['command'] = 'القيادة';

$GLOBALS["lang"]['Command'] = 'القيادة';

$GLOBALS["lang"]['command_options'] = 'خيارات القيادة';

$GLOBALS["lang"]['Command Options'] = 'خيارات القيادة';

$GLOBALS["lang"]['command_output'] = 'الناتج القيادي';

$GLOBALS["lang"]['Command Output'] = 'الناتج القيادي';

$GLOBALS["lang"]['command_status'] = 'مركز القيادة';

$GLOBALS["lang"]['Command Status'] = 'مركز القيادة';

$GLOBALS["lang"]['command_time_to_execute'] = 'حان وقت التنفيذ';

$GLOBALS["lang"]['Command Time To Execute'] = 'حان وقت التنفيذ';

$GLOBALS["lang"]['comment'] = 'التعليق';

$GLOBALS["lang"]['Comment'] = 'التعليق';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'التعليق على التالي مجرد وضع a h # في بداية السطر.';

$GLOBALS["lang"]['comments'] = 'التعليقات';

$GLOBALS["lang"]['Comments'] = 'التعليقات';

$GLOBALS["lang"]['commercial'] = 'التجارة';

$GLOBALS["lang"]['Commercial'] = 'التجارة';

$GLOBALS["lang"]['Commercial Support'] = 'الدعم التجاري';

$GLOBALS["lang"]['common_name'] = 'الاسم المشترك';

$GLOBALS["lang"]['Common Name'] = 'الاسم المشترك';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'عادة ما إليه باسم';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'يُشار إليه عادة العميل';

$GLOBALS["lang"]['Community'] = 'المجتمع';

$GLOBALS["lang"]['Community Questions'] = 'المسائل المجتمعية';

$GLOBALS["lang"]['Community String'] = 'المجتمع المحلي';

$GLOBALS["lang"]['Comoros the'] = 'جزر القمر';

$GLOBALS["lang"]['Compact'] = 'الاتفاق';

$GLOBALS["lang"]['Company'] = 'Şirkət';

$GLOBALS["lang"]['Complete these steps.'] = 'أكمل هذه الخطوات';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'hücum Kompleksi ( Aşağı və ya yüksək).';

$GLOBALS["lang"]['Component Table'] = 'الجدول';

$GLOBALS["lang"]['Components (All Devices)'] = 'المكونات (جميع الأجهزة)';

$GLOBALS["lang"]['Compute'] = 'Qeydiyyat';

$GLOBALS["lang"]['Condition'] = 'الشرط';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'إجراء تقييم للمخاطر';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'تنفيذ برامج التوعية والتدريب';

$GLOBALS["lang"]['Conduct management review meetings'] = 'اجتماعات استعراض الإدارة';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'إجراء مراجعة منتظمة للمراقبة';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'صادرة عن معتمدة في';

$GLOBALS["lang"]['Config'] = 'Qeydiyyat';

$GLOBALS["lang"]['Config Default, currently '] = 'Ətraflı, ';

$GLOBALS["lang"]['config_file'] = 'Axtarış';

$GLOBALS["lang"]['Config File'] = 'Axtarış';

$GLOBALS["lang"]['config_manager_error_code'] = 'Komissiya meneceri';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Komissiya meneceri';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'مراقبة الدخول على الأدوار';

$GLOBALS["lang"]['configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'كشف البيانات والإبلاغ';

$GLOBALS["lang"]['Configure'] = 'الثقة';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'الثقة في الخادم لأداء';

$GLOBALS["lang"]['Congo'] = 'الكونغو';

$GLOBALS["lang"]['Congo the'] = 'الكونغو';

$GLOBALS["lang"]['Connected To'] = 'متصل';

$GLOBALS["lang"]['connection'] = 'E-poçt';

$GLOBALS["lang"]['Connection'] = 'E-poçt';

$GLOBALS["lang"]['Connection Options'] = 'خيارات الربط';

$GLOBALS["lang"]['connection_status'] = 'الحالة';

$GLOBALS["lang"]['Connection Status'] = 'الحالة';

$GLOBALS["lang"]['connections'] = 'الروابط';

$GLOBALS["lang"]['Connections'] = 'الروابط';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'اعتبرها ممزقة الموانئ المفتوحة';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'اعتبره مفتوحاً الموانئ المفتوحة';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'الخدمات الاستشارية وغيرها من';

$GLOBALS["lang"]['contact'] = 'الاتصال';

$GLOBALS["lang"]['Contact'] = 'الاتصال';

$GLOBALS["lang"]['contact_name'] = 'اسم الاتصال';

$GLOBALS["lang"]['Contact Name'] = 'اسم الاتصال';

$GLOBALS["lang"]['contained_in'] = 'محتجز';

$GLOBALS["lang"]['Contained In'] = 'محتجز';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'يحتوي على مشترك يُفصّلُ';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'يحتوي على التي تحدد';

$GLOBALS["lang"]['Context & Leadership'] = 'قيادة السياق';

$GLOBALS["lang"]['Context Engine ID'] = 'الهوية الهندسية في السياق';

$GLOBALS["lang"]['Context Name'] = 'اسم السياق';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'مواصلة تحسين نظام الدولي';

$GLOBALS["lang"]['contractual_obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Contractual Obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Cook Islands'] = 'جزر كوك';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'نُسخ وعجينة نتيجة الحسابات';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'نُسخ وعجينة أدناه المنتديات، المنتديات،';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'نسخ <i>هوية التطبيق</i> الحقل والعناية في فتح <i>هوية العميل</i> حقل (أوث)';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'نسخ <i>هوية العميل</i> اقطعها غرفة غرفة <i>هوية العميل</i> الحقل.<br/>إذا لم هناك سر، <i>سرية جديدة</i>ثمّ نُسخُ ويَسْخرُه إلى <i>سر العميل</i> الحقل.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'نُسخْ القيمةَ إلى الشكلِ <i>سر العميل</i> الحقل.';

$GLOBALS["lang"]['core_count'] = 'الكونت الأساسي';

$GLOBALS["lang"]['Core Count'] = 'الكونت الأساسي';

$GLOBALS["lang"]['Cores'] = 'Qalereya';

$GLOBALS["lang"]['cost_center'] = 'مركز التكاليف';

$GLOBALS["lang"]['Cost Center'] = 'مركز التكاليف';

$GLOBALS["lang"]['cost_code'] = 'رمز التكلفة';

$GLOBALS["lang"]['Cost Code'] = 'رمز التكلفة';

$GLOBALS["lang"]['Costa Rica'] = 'كوستاريكا';

$GLOBALS["lang"]['Cote d Ivoire'] = 'كوت ديفوار';

$GLOBALS["lang"]['count'] = 'الكونت';

$GLOBALS["lang"]['Count'] = 'الكونت';

$GLOBALS["lang"]['country'] = 'البلد';

$GLOBALS["lang"]['Country'] = 'البلد';

$GLOBALS["lang"]['country_code'] = 'المدونة القطرية';

$GLOBALS["lang"]['Country Code'] = 'المدونة القطرية';

$GLOBALS["lang"]['cpu_count'] = 'Cpu sayı';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu sayı';

$GLOBALS["lang"]['Create'] = 'Qeydiyyat';

$GLOBALS["lang"]['Create Example Devices'] = 'Kompüter Cihazları';

$GLOBALS["lang"]['create_external_count'] = 'إنشاء الكونت الخارجي';

$GLOBALS["lang"]['Create External Count'] = 'إنشاء الكونت الخارجي';

$GLOBALS["lang"]['create_external_from_internal'] = 'Daxil ol';

$GLOBALS["lang"]['Create External From Internal'] = 'Daxil ol';

$GLOBALS["lang"]['Create File'] = 'Qeydiyyat';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['Create Internal Count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['create_internal_from_external'] = 'Daxili yaradılması';

$GLOBALS["lang"]['Create Internal From External'] = 'Daxili yaradılması';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'الإبداع المفتوح الأجهزة من ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'الإبداع المفتوح من نظام';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'إنشاء خط أساس المثالي';

$GLOBALS["lang"]['Create a Discovery'] = 'إنشاء جهاز كشف';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Applikability (SoA)';

$GLOBALS["lang"]['created_by'] = 'المنشأة بموجب';

$GLOBALS["lang"]['Created By'] = 'المنشأة بموجب';

$GLOBALS["lang"]['created_date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Created Date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Creating'] = 'الإبداع';

$GLOBALS["lang"]['Creating Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Creating Device'] = 'Cihaz aparatı';

$GLOBALS["lang"]['Creating Widgets'] = 'إنشاء نباتات';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'خلق اكتشاف إدخال المسح';

$GLOBALS["lang"]['Creating a Query'] = 'إنشاء قرى';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'إعداد بيان لشبكة SQL للمجموعات';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = ' :: بيان خاص بالطلبات';

$GLOBALS["lang"]['Creating an Integration'] = 'إنشاء تكامل';

$GLOBALS["lang"]['creator'] = 'Axtarış';

$GLOBALS["lang"]['Creator'] = 'Axtarış';

$GLOBALS["lang"]['credential'] = 'الخلية';

$GLOBALS["lang"]['Credential'] = 'الخلية';

$GLOBALS["lang"]['Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Credentials Client ID'] = 'هوية العملاء';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'وثائق التفويض الهوية';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'وثائق التفويض';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'وثائق التفويض مخزنة في <i>وثائق التفويض</i> طاولة قاعدة والمعلومات الإبداعية وعندما يتم تشغيل الكشف، الكشف، وإذا أخفقت استرجاع في في تم تخزين التفويض الخاصة <i>الإبداع</i> الجدول (الملاحظة - لا <i> </i> في اسم الجدول SSH istifadəçi adı / şəkildən əvvəl test edilir. وعند اختبار علامات أيضا أيضا أيضا';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'ويمكن أن يكون التفويض التفويض نوع نوع مختلفة مختلفة قليلة قليلة ضد ضد ضد ضد ضد ضد ضد شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، شش، مفتاح شش، شش، مفتاح تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ تنفذ لم تُنفَّذ الشطرنج في';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'وثائق تفويض الأمازون الأمازون المستخدمة في في كلود كلود كلود';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'وثائق تفويض ميكروسوفت Azure Cloud Discovery istifadə';

$GLOBALS["lang"]['Critical'] = 'حرجية';

$GLOBALS["lang"]['criticality'] = 'الحساسية';

$GLOBALS["lang"]['Criticality'] = 'الحساسية';

$GLOBALS["lang"]['Croatia'] = 'كرواتيا';

$GLOBALS["lang"]['Cuba'] = 'كوبا';

$GLOBALS["lang"]['current'] = 'الحالية';

$GLOBALS["lang"]['Current'] = 'الحالية';

$GLOBALS["lang"]['Current Discovery Processes'] = 'عمليات الكشف الحالية';

$GLOBALS["lang"]['Current date & time is '] = 'الوقت الحالي ';

$GLOBALS["lang"]['Currently Installed'] = 'حاليا';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'الأنواع المدعومة حاليا <code>snmp</code>.. <code>snmp_v3</code>.. <code>ssh</code>.. <code>ssh_key</code> أو <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'المجالات العرفية';

$GLOBALS["lang"]['Custom TCP Ports'] = 'موانئ TCP العرفية';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'موانئ TCP المعتادة. أي موانئ سنمسحها بالإضافة';

$GLOBALS["lang"]['Custom UDP Ports'] = 'الجمارك الموانئ';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'مرافئ العملاء موانئ محددة';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'خيارات المسح التي قياسها';

$GLOBALS["lang"]['Cve'] = ' C';

$GLOBALS["lang"]['Cyprus'] = 'قبرص';

$GLOBALS["lang"]['Czech'] = 'التشيكية';

$GLOBALS["lang"]['Czech Republic'] = 'الجمهورية التشيكية';

$GLOBALS["lang"]['DHCP'] = 'Qalereya';

$GLOBALS["lang"]['DN Account (optional)'] = 'حساب DN (اختياري)';

$GLOBALS["lang"]['DN Password (optional)'] = 'كلمة سر DN (اختياري)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'الدانمرك';

$GLOBALS["lang"]['dashboard_id'] = 'بطاقة الهوية';

$GLOBALS["lang"]['Dashboard ID'] = 'بطاقة الهوية';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Qalereya';

$GLOBALS["lang"]['dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'وتتيح لوحات المرخص للزبائن للزبائن ليس فقط ولكن المستعمل المستعمل ولا يحتاج الجميع استخدام استخدام ويمكن للزبائن لهم من من';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'توفر لوحات إدارة <i>في لمحة</i> إبراز هام على تحدث تحدث';

$GLOBALS["lang"]['Dashboards use'] = 'استخدام اللوحات';

$GLOBALS["lang"]['Data'] = 'البيانات';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'الاحتفاظ بالبيانات';

$GLOBALS["lang"]['Database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['db_action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['Database Action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['db_column'] = ' Column البيانات';

$GLOBALS["lang"]['Database Column'] = ' Column البيانات';

$GLOBALS["lang"]['Database Definition'] = 'تعريف قاعدة البيانات';

$GLOBALS["lang"]['db_row'] = 'قاعدة البيانات';

$GLOBALS["lang"]['Database Row'] = 'قاعدة البيانات';

$GLOBALS["lang"]['Database Schema'] = 'قاعدة البيانات';

$GLOBALS["lang"]['Database Server Discovery'] = 'جهاز كشف البيانات';

$GLOBALS["lang"]['db_table'] = 'جدول قاعدة البيانات';

$GLOBALS["lang"]['Database Table'] = 'جدول قاعدة البيانات';

$GLOBALS["lang"]['Database Tables'] = 'جداول قواعد البيانات';

$GLOBALS["lang"]['dataset_title'] = 'عنوان البيانات';

$GLOBALS["lang"]['Dataset Title'] = 'عنوان البيانات';

$GLOBALS["lang"]['date'] = 'التاريخ';

$GLOBALS["lang"]['Date'] = 'التاريخ';

$GLOBALS["lang"]['Date D-M-Y'] = 'تاريخ الميلاد';

$GLOBALS["lang"]['Date M-D-Y'] = 'التاريخ M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'التاريخ الآن';

$GLOBALS["lang"]['date_of_manufacture'] = 'تاريخ التصنيع';

$GLOBALS["lang"]['Date Of Manufacture'] = 'تاريخ التصنيع';

$GLOBALS["lang"]['date_paid'] = 'تاريخ الدفع';

$GLOBALS["lang"]['Date Paid'] = 'تاريخ الدفع';

$GLOBALS["lang"]['date_received'] = 'تاريخ الاستلام';

$GLOBALS["lang"]['Date Received'] = 'تاريخ الاستلام';

$GLOBALS["lang"]['Date Y-M-D'] = 'التاريخ Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'تاريخ ووقت آخر لوكالة';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'تاريخ ووقت نشر التحقيقات';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'التاريخ الذي فيه لجنة';

$GLOBALS["lang"]['DateTime Now'] = 'التاريخ الآن';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'التاريخ Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'يوم الشهر';

$GLOBALS["lang"]['Day Of Month'] = 'يوم الشهر';

$GLOBALS["lang"]['day_of_week'] = 'يوم الأسبوع';

$GLOBALS["lang"]['Day Of Week'] = 'يوم الأسبوع';

$GLOBALS["lang"]['Day of Month'] = 'يوم الشهر';

$GLOBALS["lang"]['dbus_identifier'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['Dbus Identifier'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'الديون';

$GLOBALS["lang"]['Debugging a Script'] = 'مداهمة';

$GLOBALS["lang"]['December'] = 'كانون الأول/ديسمبر';

$GLOBALS["lang"]['Decommission'] = 'الانسحاب';

$GLOBALS["lang"]['Default'] = 'التقصير';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'الكشف عن العجز المستوى Qeydiyyat';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'الهوية الشخصية المستوى تحديد';

$GLOBALS["lang"]['Default Items'] = 'البنود الافتراضية';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Yadda saxla';

$GLOBALS["lang"]['Default Roles Groups'] = 'مجموعات الأدوار الافتراضية';

$GLOBALS["lang"]['Default Value'] = 'القيمة المستحقة';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'عجز 389 عادةً 636 مستعملاً للدليل النشط';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'التقصير <code>3</code> من أجل برنامج دون';

$GLOBALS["lang"]['Defaults'] = 'العجز';

$GLOBALS["lang"]['Deferred'] = 'مؤجلة';

$GLOBALS["lang"]['Define project scope and objectives'] = 'تحديد نطاق المشروع وأهدافه';

$GLOBALS["lang"]['Define the ISMS scope'] = 'تحديد نطاق نظام الدولي';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'تحديد سياق (المسائل الداخلية/الخارجية)';

$GLOBALS["lang"]['delay_minutes'] = 'مسارات';

$GLOBALS["lang"]['Delay Minutes'] = 'مسارات';

$GLOBALS["lang"]['Delete'] = 'تحذف';

$GLOBALS["lang"]['Delete Example Devices'] = 'تحذف أجهزة الإرسال';

$GLOBALS["lang"]['delete_external_from_internal'] = 'يحذف:';

$GLOBALS["lang"]['Delete External From Internal'] = 'يحذف:';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'يحذف نظام الإدارية المتكامل';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'تحذف {الاستكمال';

$GLOBALS["lang"]['Delete from Application'] = 'تحذف من الطلب';

$GLOBALS["lang"]['Delete from Cluster'] = 'تحذف من المجموعة';

$GLOBALS["lang"]['Denmark'] = 'الدانمرك';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'مأخوذة من مراجعة أو';

$GLOBALS["lang"]['Derived by audit.'] = 'مأخوذة من مراجعة الحسابات';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'مأخوذة من <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'مأخوذة من <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'تم كشفها من المُجمع';

$GLOBALS["lang"]['Derived from OS Name.'] = 'مأخوذة من الاسم';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'متأثرة من اكتشاف الغيوم';

$GLOBALS["lang"]['Derived from device audits.'] = 'مأخوذة من مراجعات الأجهزة';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'مأخوذة من نوع و';

$GLOBALS["lang"]['Derived from discovery.'] = 'متحلل من الاكتشاف';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'مأخوذة من المضيف، سيس سيس';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'مُتعاطى من شدة الثلاجة';

$GLOBALS["lang"]['description'] = 'الوصف';

$GLOBALS["lang"]['Description'] = 'الوصف';

$GLOBALS["lang"]['destination'] = 'الوجهة';

$GLOBALS["lang"]['Destination'] = 'الوجهة';

$GLOBALS["lang"]['detail'] = 'التجزئة';

$GLOBALS["lang"]['Detail'] = 'التجزئة';

$GLOBALS["lang"]['Details'] = 'التفاصيل';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'تفاصيل من ما يكون';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'تحديد كم تريد تشغيل';

$GLOBALS["lang"]['Determine risk treatment options'] = 'تحديد خيارات معالجة المخاطر';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'وضع خطة لمعالجة المخاطر';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'وضع السياسات والإجراءات والضوابط';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'وضع الوثائق لنظام الرصد';

$GLOBALS["lang"]['device'] = 'الجهاز';

$GLOBALS["lang"]['Device'] = 'الجهاز';

$GLOBALS["lang"]['Device Audits'] = 'مراجعة حسابات الأجهزة';

$GLOBALS["lang"]['Device Component Names'] = 'أسماء العناصر الفاعلة';

$GLOBALS["lang"]['Device ID'] = 'هوية الجهاز';

$GLOBALS["lang"]['device_id'] = 'هوية الجهاز';

$GLOBALS["lang"]['device_id_a'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['Device ID A'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['device_id_b'] = 'هوية الجهاز باء';

$GLOBALS["lang"]['Device ID B'] = 'هوية الجهاز باء';

$GLOBALS["lang"]['Device Matching Rules'] = 'قواعد مطابقة الأجهزة';

$GLOBALS["lang"]['Device Name'] = 'اسم الجهاز';

$GLOBALS["lang"]['Device Result'] = 'الجهاز';

$GLOBALS["lang"]['Device Results'] = 'نتائج الأجهزة';

$GLOBALS["lang"]['Device Seed'] = 'Qablaşdırma';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Domen adı qeydiyyatdan keçirt » بَدأَ الإكتشافَ مرسل محلي محلي';

$GLOBALS["lang"]['Device Seed IP'] = 'Cihaz Qiymət IP';

$GLOBALS["lang"]['Device Status'] = 'الجهاز';

$GLOBALS["lang"]['Device Types'] = 'الأنواع النثرية';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'مراجعة حسابات الأجهزة والبرمجيات';

$GLOBALS["lang"]['Device is in the Subnet'] = 'الجهاز في الشبكة الفرعية';

$GLOBALS["lang"]['Devices'] = 'الأجهزة';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Audited'] = 'الأجهزة التي تم حساباتها';

$GLOBALS["lang"]['Devices Collection'] = 'جمع الأجهزة';

$GLOBALS["lang"]['Devices Created in '] = 'الأجهزة المنشأة ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'الأجهزة المنشأة في الاجتماعات';

$GLOBALS["lang"]['devices_default_display_columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'الدبابات وجدت آخر 7 أيام';

$GLOBALS["lang"]['Devices Found Today'] = 'الأجهزة وجدت اليوم';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'وجدت الأجهزة أمس';

$GLOBALS["lang"]['Devices Missing Information'] = 'الأجهزة المفقودة للمعلومات';

$GLOBALS["lang"]['Devices Not Audited'] = 'الأجهزة غير المراجعة';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'النبائط لا 30 يوما';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'النبائط لم تشاهد 7 أيام';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'الأجهزة لا 90 يوما';

$GLOBALS["lang"]['Devices Older Than X'] = 'الأجهزة الأقدم من';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'الأجهزة المستردة عن';

$GLOBALS["lang"]['Devices Selected from '] = 'الأجهزة المختارة من ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'أجهزة منتخبة طراز';

$GLOBALS["lang"]['Devices Updated in '] = 'الأجهزة المستكملة في ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'يتم قياس الأجهزة';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'النبائط لا يجري';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'يمكن قياس الأجهزة';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'أجهزة منفتحة';

$GLOBALS["lang"]['Devices in Running State'] = 'الأجهزة الموجودة في الولاية';

$GLOBALS["lang"]['Devices in Stopped State'] = 'الأجهزة في الدولة المتوقفة';

$GLOBALS["lang"]['Devices in this'] = 'الأجهزة في هذا';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'النبائط لن تضاهي تم <i>حذفت</i>وأي وضع آخر سيسمح';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'النبائط مع المحاربين المفصولين';

$GLOBALS["lang"]['Devired from type or OS.'] = 'محفورة من نوع';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease almaq';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease almaq';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'هل أكملت القيادة وأعادت';

$GLOBALS["lang"]['direction'] = 'التوجيه';

$GLOBALS["lang"]['Direction'] = 'التوجيه';

$GLOBALS["lang"]['directory'] = '»';

$GLOBALS["lang"]['Directory'] = '»';

$GLOBALS["lang"]['disabled'] = 'المعوقين';

$GLOBALS["lang"]['Disabled'] = 'المعوقين';

$GLOBALS["lang"]['discard'] = 'Pulsuz';

$GLOBALS["lang"]['Discard'] = 'Pulsuz';

$GLOBALS["lang"]['Discover'] = 'الكشف';

$GLOBALS["lang"]['Discoveries'] = 'الكشف';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'الاكتشافات في ما يفعله <i>ماذا عن شبكتك؟</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'الاكتشافات هي القيود تمكنك';

$GLOBALS["lang"]['Discovery'] = 'الكشف';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Daxil ol';

$GLOBALS["lang"]['Discovery Data Retention'] = 'الاحتفاظ ببيانات الكشف';

$GLOBALS["lang"]['discovery_id'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery ID'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery Issues'] = 'قضايا الكشف';

$GLOBALS["lang"]['discovery_log'] = 'Daxil ol';

$GLOBALS["lang"]['Discovery Log'] = 'Daxil ol';

$GLOBALS["lang"]['Discovery Match Options'] = 'خيارات قياس الاكتشاف';

$GLOBALS["lang"]['Discovery Name'] = 'الاسم السري';

$GLOBALS["lang"]['Discovery Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Axtarış Qeydiyyat';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Qeydiyyat';

$GLOBALS["lang"]['discovery_run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['Discovery Run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['discovery_scan_options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Scan Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'الكشف عن الخيارات هي ويمكن لمستعملي أن يستحدثوا ويمكن للمستعملين المهنيين جميع جميع وليس لدى مستخدمي المحلية المحلية';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan növləri';

$GLOBALS["lang"]['Discovery Support'] = 'دعم الكشف';

$GLOBALS["lang"]['Discovery has stopped working'] = 'الاكتشاف توقف عن العمل';

$GLOBALS["lang"]['disk'] = 'Disko';

$GLOBALS["lang"]['Disk'] = 'Disko';

$GLOBALS["lang"]['display_version'] = 'التصويب';

$GLOBALS["lang"]['Display Version'] = 'التصويب';

$GLOBALS["lang"]['Display in Menu'] = 'Qeydiyyat';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST /{collection}/import üçün standart web formasını göstərin.';

$GLOBALS["lang"]['district'] = 'المقاطعة';

$GLOBALS["lang"]['District'] = 'المقاطعة';

$GLOBALS["lang"]['Djibouti'] = 'جيبوتي';

$GLOBALS["lang"]['dns'] = 'Dn';

$GLOBALS["lang"]['Dns'] = 'Dn';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dn Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dn Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'الاسم المضيف';

$GLOBALS["lang"]['Dns Host Name'] = 'الاسم المضيف';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'لا تنسى هناك جبل';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'لا تمسح موانئ سي';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'لا تفحص هذه الموانئ';

$GLOBALS["lang"]['Do not show me again'] = 'لا تظهر لي أخرى';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'هل لديك مثال لهذه';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'هل تريد استخدام وسيلة';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'هل ترغبين رؤية الجانب';

$GLOBALS["lang"]['documentation'] = 'الوثائق';

$GLOBALS["lang"]['Documentation'] = 'الوثائق';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'وثائق عن مجموعة';

$GLOBALS["lang"]['Does Not Equal'] = 'لا تساوي';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'هل الرخصة على الأطفال';

$GLOBALS["lang"]['domain'] = 'Bakı';

$GLOBALS["lang"]['Domain'] = 'Bakı';

$GLOBALS["lang"]['domain_controller_address'] = 'العنوان المراقب المالي الرئيسي';

$GLOBALS["lang"]['Domain Controller Address'] = 'العنوان المراقب المالي الرئيسي';

$GLOBALS["lang"]['domain_controller_name'] = 'المراقب المالي الدائم الاسم';

$GLOBALS["lang"]['Domain Controller Name'] = 'المراقب المالي الدائم الاسم';

$GLOBALS["lang"]['domain_role'] = 'دور رئيسي';

$GLOBALS["lang"]['Domain Role'] = 'دور رئيسي';

$GLOBALS["lang"]['domain_short'] = 'Qeydiyyat';

$GLOBALS["lang"]['Domain Short'] = 'Qeydiyyat';

$GLOBALS["lang"]['Dominica'] = 'دومينيكا';

$GLOBALS["lang"]['Dominican Republic'] = 'الجمهورية الدومينيكية';

$GLOBALS["lang"]['Don\\'] = 'لا';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'لا تمسك أعرف ما';

$GLOBALS["lang"]['Download'] = 'تحميل';

$GLOBALS["lang"]['Download a File'] = 'تحميل الملف';

$GLOBALS["lang"]['Download a file from URL'] = 'تحميل ملف من';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'تحميل الإختبار';

$GLOBALS["lang"]['Download your updated version from'] = 'تحميل نسختك المستكملة من';

$GLOBALS["lang"]['driver'] = 'سائق';

$GLOBALS["lang"]['Driver'] = 'سائق';

$GLOBALS["lang"]['duplex'] = 'Avtomobil';

$GLOBALS["lang"]['Duplex'] = 'Avtomobil';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'الأجهزة المزدوجة/الأجهزة المفقودة';

$GLOBALS["lang"]['duration'] = 'المدة';

$GLOBALS["lang"]['Duration'] = 'المدة';

$GLOBALS["lang"]['Dutch'] = 'هولندا';

$GLOBALS["lang"]['ESXi'] = 'Elan';

$GLOBALS["lang"]['EULA'] = 'ABŞ';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'ويجري مسح شركاء من من شركاء شركاء Nmap portlar üçün test edəcək 22 (ssh), 135 (wmi), 62078 (iPhone) və UDP 161 (snmp). وإذا ردت 22 أو 135 أو 161 على القائمة المرجعية، يتم يتم استرجاعها وتستخدم وثائق تفويض الأولى الأولى ملاحظة إذا اكتشف قد اكتشف اكتشف اكتشف ما ما عاملة، عاملة، عاملة، عاملة، عاملة، عاملة، عاملة، التفويض التفويض التفويض التفويض التفويض التفويض التفويض التفويض فقط إذا تلك الإخفاقات';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'وفي كل جهاز فيها فيها القواعد تعمل ضد واحد <i>تشغيل القواعد ضد الأجهزة<i> أو <i>تشغيل القواعد ضد الأجهزة<i>. وستجري قاعدة اختبار صفات صفات ويمكن اختبار عدة ويمكن تحديد عدة فكّر في هذا كما كما</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'من السهل تكتشف على';

$GLOBALS["lang"]['Ecuador'] = 'إكوادور';

$GLOBALS["lang"]['Edit'] = 'Tarix';

$GLOBALS["lang"]['edit_log'] = 'Tarix';

$GLOBALS["lang"]['Edit Log'] = 'Tarix';

$GLOBALS["lang"]['editable'] = 'Tarix';

$GLOBALS["lang"]['Editable'] = 'Tarix';

$GLOBALS["lang"]['edited_by'] = 'Tarix';

$GLOBALS["lang"]['Edited By'] = 'Tarix';

$GLOBALS["lang"]['edited_date'] = 'تاريخ التحرير';

$GLOBALS["lang"]['Edited Date'] = 'تاريخ التحرير';

$GLOBALS["lang"]['edition'] = ' Edition';

$GLOBALS["lang"]['Edition'] = ' Edition';

$GLOBALS["lang"]['Egypt'] = 'مصر';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'إما الأمازون جوجل أو';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'إما لا شيء

<strong>لا شيء</strong> - لا يعتمد الهجوم hücumçu qorunmaq üçün gözəl ola bilər və bütün və ya ən hallarda istismarı icra edə bilər.

<strong>İndi</strong> يتوقف الهجوم الناجح على وجود وجود وهي تشمل ما

ولا بد كسب حالة ويتوقف نجاح الهجوم ظروف ظروف وقد يحتاج الهجوم إطلاق إطلاق

حقنة الشبكة hücumçu haqqında tərəfindən tərəfindən tərəfindən istiqamətli şəkildən və qurğudan tərəfindən istəyən səfərindən səviyyətli şəkildə özləri enjekte etməlidir.';

$GLOBALS["lang"]['El Salvador'] = 'السلفادور';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email Address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email Configuration'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['Email to send test to'] = 'إرسال اختبار';

$GLOBALS["lang"]['Enable'] = 'التمكين';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Bu kompüter üzrə asan Dağlıq COM - Seçki';

$GLOBALS["lang"]['enabled'] = 'Qeydiyyat';

$GLOBALS["lang"]['Enabled'] = 'Qeydiyyat';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'تمكين المرأة تحت النوافذ';

$GLOBALS["lang"]['encryption'] = 'التشفير';

$GLOBALS["lang"]['Encryption'] = 'التشفير';

$GLOBALS["lang"]['encryption_method'] = 'طريقة التشفير';

$GLOBALS["lang"]['Encryption Method'] = 'طريقة التشفير';

$GLOBALS["lang"]['encryption_status'] = 'حالة التشفير';

$GLOBALS["lang"]['Encryption Status'] = 'حالة التشفير';

$GLOBALS["lang"]['end_date'] = 'التاريخ';

$GLOBALS["lang"]['End Date'] = 'التاريخ';

$GLOBALS["lang"]['End OF Life Product ID'] = 'هوية منتج نهاية الحياة';

$GLOBALS["lang"]['end_of_life'] = 'نهاية الحياة';

$GLOBALS["lang"]['End Of Life'] = 'نهاية الحياة';

$GLOBALS["lang"]['end_of_production'] = 'نهاية الإنتاج';

$GLOBALS["lang"]['End Of Production'] = 'نهاية الإنتاج';

$GLOBALS["lang"]['end_of_service'] = 'نهاية الخدمة';

$GLOBALS["lang"]['End Of Service'] = 'نهاية الخدمة';

$GLOBALS["lang"]['end_of_service_life'] = 'نهاية الخدمة';

$GLOBALS["lang"]['End Of Service Life'] = 'نهاية الخدمة';

$GLOBALS["lang"]['Endpoint'] = 'نقطة النهاية';

$GLOBALS["lang"]['English'] = 'الإنكليزية';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'تعزيز الامتثال التنظيمي';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'الإثراء كامل CVE tam metadata var və sabit sayılır.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'ضمان مراقبة وتيسير الحصول';

$GLOBALS["lang"]['enterprise'] = 'Korporativ';

$GLOBALS["lang"]['Enterprise'] = 'Korporativ';

$GLOBALS["lang"]['Enterprise Private Network'] = 'شبكة الشركات الخاصة';

$GLOBALS["lang"]['Enterprise private network'] = 'شبكة القطاع الخاص';

$GLOBALS["lang"]['Entitlement Type'] = 'نوع الاستحقاق';

$GLOBALS["lang"]['Entra'] = 'Entrasiya';

$GLOBALS["lang"]['environment'] = 'البيئة';

$GLOBALS["lang"]['Environment'] = 'البيئة';

$GLOBALS["lang"]['Equal To'] = 'متساوية';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'متساوية أو أكثر';

$GLOBALS["lang"]['Equal To or Less Than'] = 'متساوية أو أقل';

$GLOBALS["lang"]['Equals'] = 'المساواة';

$GLOBALS["lang"]['Equatorial Guinea'] = 'غينيا الاستوائية';

$GLOBALS["lang"]['Eritrea'] = 'إريتريا';

$GLOBALS["lang"]['Error'] = 'خطأ';

$GLOBALS["lang"]['Error Code'] = 'قانون الخطأ';

$GLOBALS["lang"]['Esperanto'] = ' Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'وضع خطة للمشروع زمني';

$GLOBALS["lang"]['Establish an information security policy'] = 'وضع سياسة لأمن المعلومات';

$GLOBALS["lang"]['Established'] = 'الوظائف الثابتة';

$GLOBALS["lang"]['Estonia'] = 'إستونيا';

$GLOBALS["lang"]['Estonian'] = 'إستونيا';

$GLOBALS["lang"]['Ethernet MAC'] = 'Televiziya';

$GLOBALS["lang"]['ethernet_mac'] = 'Televiziya';

$GLOBALS["lang"]['Ethernet Mac'] = 'Televiziya';

$GLOBALS["lang"]['Ethiopia'] = 'إثيوبيا';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'ISMS daxili';

$GLOBALS["lang"]['Every'] = 'كل شيء';

$GLOBALS["lang"]['Every Day'] = 'كل يوم';

$GLOBALS["lang"]['Example'] = 'مثال';

$GLOBALS["lang"]['Example Devices'] = 'أجهزة الإرسال';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Access ilə əlavə Org Chart';

$GLOBALS["lang"]['Example text from'] = 'نص نموذجي';

$GLOBALS["lang"]['Examples'] = 'أمثلة';

$GLOBALS["lang"]['Exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['exclude'] = 'استبعاد';

$GLOBALS["lang"]['Exclude'] = 'استبعاد';

$GLOBALS["lang"]['exclude_ip'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'E-poçt';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'E-poçt ünvanı لا يوجد مكان';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Ətraflı TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Avtomobil';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Avtomobil';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP Portu';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'استبعاد أي موانئ من لا يوجد مكان';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'لا تستبعد آي بي';

$GLOBALS["lang"]['Excluded'] = 'مستبعدة';

$GLOBALS["lang"]['exclusion_reasons'] = 'أسباب الاستبعاد';

$GLOBALS["lang"]['Exclusion Reasons'] = 'أسباب الاستبعاد';

$GLOBALS["lang"]['executable'] = 'التنفيذ';

$GLOBALS["lang"]['Executable'] = 'التنفيذ';

$GLOBALS["lang"]['executable_id'] = 'الهوية القابلة للتنفيذ';

$GLOBALS["lang"]['Executable ID'] = 'الهوية القابلة للتنفيذ';

$GLOBALS["lang"]['executables'] = 'التنفيذ';

$GLOBALS["lang"]['Executables'] = 'التنفيذ';

$GLOBALS["lang"]['Execute'] = 'Qeydiyyat';

$GLOBALS["lang"]['Executing'] = 'التنفيذ';

$GLOBALS["lang"]['exemption_reason'] = 'الإعفاء من العقوبة';

$GLOBALS["lang"]['Exemption Reason'] = 'الإعفاء من العقوبة';

$GLOBALS["lang"]['Existing Building'] = 'المبنى الحالي';

$GLOBALS["lang"]['Existing Floor'] = 'الطابق الحالي';

$GLOBALS["lang"]['Existing Room'] = 'الغرفة القائمة';

$GLOBALS["lang"]['Existing Row'] = 'الحالي';

$GLOBALS["lang"]['expire_date'] = 'التاريخ';

$GLOBALS["lang"]['Expire Date'] = 'التاريخ';

$GLOBALS["lang"]['expire_minutes'] = 'المناقصات التجريبية';

$GLOBALS["lang"]['Expire Minutes'] = 'المناقصات التجريبية';

$GLOBALS["lang"]['expires'] = 'النفقات';

$GLOBALS["lang"]['Expires'] = 'النفقات';

$GLOBALS["lang"]['expiry_date'] = 'تاريخ انتهاء الخدمة';

$GLOBALS["lang"]['Expiry Date'] = 'تاريخ انتهاء الخدمة';

$GLOBALS["lang"]['exploit_maturity'] = 'النضج';

$GLOBALS["lang"]['Exploit Maturity'] = 'النضج';

$GLOBALS["lang"]['Export'] = 'الصادرات';

$GLOBALS["lang"]['Export by Device'] = 'Cihaz';

$GLOBALS["lang"]['Export by Policy'] = 'الصادرات حسب السياسات';

$GLOBALS["lang"]['Export data to'] = 'بيانات التصدير';

$GLOBALS["lang"]['Exporting a Device'] = 'تصدير جهاز';

$GLOBALS["lang"]['expose'] = 'Bakı';

$GLOBALS["lang"]['Expose'] = 'Bakı';

$GLOBALS["lang"]['External'] = 'الخارجي';

$GLOBALS["lang"]['External Field Name'] = 'الاسم الميداني الخارجي';

$GLOBALS["lang"]['External Field Type'] = 'النوع الميداني الخارجي';

$GLOBALS["lang"]['External Field Types'] = 'الأنواع الميدانية الخارجية';

$GLOBALS["lang"]['external_ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['External Ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['external_link'] = 'Xarici Link';

$GLOBALS["lang"]['External Link'] = 'Xarici Link';

$GLOBALS["lang"]['extra_columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra Columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'الإبلاغ الإضافي والقائم الوقت';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'المزيد من الشفرات يتم';

$GLOBALS["lang"]['FAQ'] = 'E-poçt';

$GLOBALS["lang"]['FQDN'] = 'Qalereya';

$GLOBALS["lang"]['FW Revision'] = 'تنقيح';

$GLOBALS["lang"]['Fail'] = 'الفشل';

$GLOBALS["lang"]['Failed'] = 'فشل';

$GLOBALS["lang"]['Failed Severity'] = 'الشر';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'جزر (مالفيناس)';

$GLOBALS["lang"]['Family'] = 'الأسرة';

$GLOBALS["lang"]['Faroe Islands'] = 'جزر فارو';

$GLOBALS["lang"]['Features'] = 'المعالم';

$GLOBALS["lang"]['February'] = 'شباط/فبراير';

$GLOBALS["lang"]['field'] = 'الميدان';

$GLOBALS["lang"]['Field'] = 'الميدان';

$GLOBALS["lang"]['field_id'] = 'الهوية الميدانية';

$GLOBALS["lang"]['Field ID'] = 'الهوية الميدانية';

$GLOBALS["lang"]['Field Name'] = 'الاسم الميداني';

$GLOBALS["lang"]['Field Type'] = 'النوع الميداني';

$GLOBALS["lang"]['Fields'] = 'الحقول';

$GLOBALS["lang"]['fields'] = 'الحقول';

$GLOBALS["lang"]['Fields attributes are'] = 'الخصائص الميدانية';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'جزر فيجي';

$GLOBALS["lang"]['File'] = 'Axtarış';

$GLOBALS["lang"]['File Auditing'] = 'مراجعة حسابات الملفات';

$GLOBALS["lang"]['File Import'] = 'Axtarış';

$GLOBALS["lang"]['File Input'] = 'الناتج الملف';

$GLOBALS["lang"]['file_name'] = 'اسم الملف';

$GLOBALS["lang"]['File Name'] = 'اسم الملف';

$GLOBALS["lang"]['File Share Discovery'] = 'Qalereya';

$GLOBALS["lang"]['file_size'] = 'حجم الملف';

$GLOBALS["lang"]['File Size'] = 'حجم الملف';

$GLOBALS["lang"]['filename'] = 'الاسم';

$GLOBALS["lang"]['Filename'] = 'الاسم';

$GLOBALS["lang"]['files'] = 'الملفات';

$GLOBALS["lang"]['Files'] = 'الملفات';

$GLOBALS["lang"]['files_id'] = 'الملفات';

$GLOBALS["lang"]['Files ID'] = 'الملفات';

$GLOBALS["lang"]['filter'] = 'فيلم';

$GLOBALS["lang"]['Filter'] = 'فيلم';

$GLOBALS["lang"]['filtered'] = 'محرر';

$GLOBALS["lang"]['Filtered'] = 'محرر';

$GLOBALS["lang"]['Filtered Ports'] = 'الموانئ المطلية';

$GLOBALS["lang"]['Finland'] = 'فنلندا';

$GLOBALS["lang"]['Finnish'] = 'فنلندا';

$GLOBALS["lang"]['Firewall'] = 'جدار ناري';

$GLOBALS["lang"]['Firewall Packages'] = 'أكياس الجدار الناري';

$GLOBALS["lang"]['firewall_rule'] = 'قاعدة الجدار الناري';

$GLOBALS["lang"]['Firewall Rule'] = 'قاعدة الجدار الناري';

$GLOBALS["lang"]['firmware'] = 'Qeydiyyat';

$GLOBALS["lang"]['Firmware'] = 'Qeydiyyat';

$GLOBALS["lang"]['firmware_revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['Firmware Revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['First'] = 'أولا';

$GLOBALS["lang"]['First Name'] = 'الاسم الأول';

$GLOBALS["lang"]['first_run'] = 'الجولة الأولى';

$GLOBALS["lang"]['First Run'] = 'الجولة الأولى';

$GLOBALS["lang"]['first_seen'] = 'İlk baxış';

$GLOBALS["lang"]['First Seen'] = 'İlk baxış';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'التركيز الأول على';

$GLOBALS["lang"]['FirstWave'] = 'الموجة الأولى';

$GLOBALS["lang"]['Fix'] = 'Kompüter';

$GLOBALS["lang"]['Fixed'] = 'الوظائف الثابتة';

$GLOBALS["lang"]['Fixing the Issue'] = 'حل المشكلة';

$GLOBALS["lang"]['Floor'] = 'الفيضانات';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'متابعة أي الصلات الواردة <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['For'] = 'Axtarış';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Axtarış <i>النوع</i> تأكد من اختيار الأساس، الأساس، وهذا سيمنع الدخول';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'من بما';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'ويمكن أن تستخدم شركة شركة توجيه توجيه توجيه توجيه أو أو أو توجيه بصرف الجهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز جهاز';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'من أجل مرشد';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'لاكتشاف البذور، يجب أكتشف أكتشف';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'لاكتشاف البذور، يجب أكتشف أكتشف';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'لاكتشاف البذور، أن أضغط';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'من أجل الدخول المتطور لسؤال كما هو بالنسبة للقراصنة، <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'بالنسبة لكل عملية العمليات';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'على سبيل المثال تخلق تخلق أنت تعرف أن الخادم';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'على سبيل المثال تخلق تخلق أنت تعرف أن الخادم';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'للحصول على مزيد التفاصيل،';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'بالنسبة لرخص غير عندما';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'وللحصول على أكثر تفصيلاً،';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'ولمزيد من المعلومات الاطلاع الاطلاع الاستخدام';

$GLOBALS["lang"]['For more information, see'] = 'لمزيد من المعلومات، انظر';

$GLOBALS["lang"]['form_factor'] = 'Faktor';

$GLOBALS["lang"]['Form Factor'] = 'Faktor';

$GLOBALS["lang"]['format'] = 'الشكل';

$GLOBALS["lang"]['Format'] = 'الشكل';

$GLOBALS["lang"]['Forth'] = 'Ümumi';

$GLOBALS["lang"]['fqdn'] = 'فدان';

$GLOBALS["lang"]['Fqdn'] = 'فدان';

$GLOBALS["lang"]['France, French Republic'] = 'فرنسا، الجمهورية الفرنسية';

$GLOBALS["lang"]['free'] = 'مجانا';

$GLOBALS["lang"]['Free'] = 'مجانا';

$GLOBALS["lang"]['French'] = 'الفرنسية';

$GLOBALS["lang"]['French Guiana'] = 'غيانا الفرنسية';

$GLOBALS["lang"]['French Polynesia'] = 'بولينيزيا الفرنسية';

$GLOBALS["lang"]['French Southern Territories'] = 'الأقاليم الجنوبية الفرنسية';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'الأسئلة المتكررة';

$GLOBALS["lang"]['Friday'] = 'الجمعة';

$GLOBALS["lang"]['From 100 Devices'] = 'من 100 جهاز';

$GLOBALS["lang"]['From 500 Devices'] = 'من 500 جهاز';

$GLOBALS["lang"]['From that page'] = 'من تلك الصفحة';

$GLOBALS["lang"]['full_name'] = 'الاسم الكامل';

$GLOBALS["lang"]['Full Name'] = 'الاسم الكامل';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'مراجعة سحابية مع جميع جميع';

$GLOBALS["lang"]['function'] = 'المهمة';

$GLOBALS["lang"]['Function'] = 'المهمة';

$GLOBALS["lang"]['GROUP BY'] = 'المجموعة';

$GLOBALS["lang"]['Gabon'] = 'غابون';

$GLOBALS["lang"]['Galician'] = 'غاليشي';

$GLOBALS["lang"]['Gambia the'] = 'غامبيا';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'تحليل (اختياري)';

$GLOBALS["lang"]['gateway'] = 'البوابة';

$GLOBALS["lang"]['Gateway'] = 'البوابة';

$GLOBALS["lang"]['gateways'] = 'البوابة';

$GLOBALS["lang"]['Gateways'] = 'البوابة';

$GLOBALS["lang"]['Generated By'] = 'المولد';

$GLOBALS["lang"]['geo'] = ' Geo';

$GLOBALS["lang"]['Geo'] = ' Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'الخرائط الجغرافية';

$GLOBALS["lang"]['Georgia'] = 'جورجيا';

$GLOBALS["lang"]['German'] = 'ألمانيا';

$GLOBALS["lang"]['Germany'] = 'ألمانيا';

$GLOBALS["lang"]['Get Lat/Long'] = 'الحصول على/لونج';

$GLOBALS["lang"]['Get News'] = 'احصل على الأخبار';

$GLOBALS["lang"]['Get Started'] = 'ابدأ';

$GLOBALS["lang"]['Get a Free License'] = 'الحصول على رخصة مجانية';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'الحصول على معرفة منصة منصة';

$GLOBALS["lang"]['Getting Started'] = 'بدأت';

$GLOBALS["lang"]['Ghana'] = 'غانا';

$GLOBALS["lang"]['Gibraltar'] = 'جبل طارق';

$GLOBALS["lang"]['Github'] = 'Qeydiyyat';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Global area network'] = 'الشبكة العالمية للمناطق';

$GLOBALS["lang"]['Go'] = 'إذهب';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'عودوا إلى خادمكم المفتوح وخلقوا أديروا الاكتشاف، وأحيطوا بأي لاتخاذ الإجراءات المناسبة مسائل';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'اذهبوا إلى الهدف';

$GLOBALS["lang"]['Go to menu'] = 'الذهاب إلى قائمة الطعام';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'الذهاب إلى <i>التطبيقات</i> - <i>تسجيلات الطلبات</i> بند القائمة على ابحثوا ابحثوا';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'الذهاب إلى <i>شهادات وأسرار</i> بند القائمة <i>Qeydiyyat</i> في قائمة الوسط';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'الذهاب إلى <i>إشارة واحدة</i> بند قائمة الطعام حركة <i>اختيار طريقة واحدة للإشارة</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['Google JSON Credentials'] = ' Google التفويض التفويض';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API المفتاح';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'عظيم، ثم يمكنك أرسل أولاً النص الوارد سندرج ذلك الذي اللغة';

$GLOBALS["lang"]['Greater Than'] = 'أكبر من';

$GLOBALS["lang"]['Greater Than or Equals'] = 'أكبر من أو يساوي';

$GLOBALS["lang"]['Greece'] = 'اليونان';

$GLOBALS["lang"]['Greek'] = 'اليونانيون';

$GLOBALS["lang"]['Green Query'] = 'Yadda saxla';

$GLOBALS["lang"]['Greenland'] = 'غرينلاند';

$GLOBALS["lang"]['Grenada'] = 'غرينادا';

$GLOBALS["lang"]['Group'] = 'المجموعة';

$GLOBALS["lang"]['group_by'] = 'المجموعة';

$GLOBALS["lang"]['Group By'] = 'المجموعة';

$GLOBALS["lang"]['group_id'] = 'المجموعة';

$GLOBALS["lang"]['Group ID'] = 'المجموعة';

$GLOBALS["lang"]['groups'] = 'المجموعات';

$GLOBALS["lang"]['Groups'] = 'المجموعات';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'وتُستخدم المجموعات بسيطة من JSON istifadə etmək istədiyiniz zaman, onlar bir siyahısı geri <i>الأجهزة</i> فقط وإذا طُلب استخدام استخدام ويمكن استخدام للتكامل والخطوط';

$GLOBALS["lang"]['Guadeloupe'] = 'غواديلوبي';

$GLOBALS["lang"]['Guam'] = 'غوام';

$GLOBALS["lang"]['Guatemala'] = 'غواتيمالا';

$GLOBALS["lang"]['Guernsey'] = 'غيرنسي';

$GLOBALS["lang"]['guest_device_id'] = 'هوية الشياطين';

$GLOBALS["lang"]['Guest Device ID'] = 'هوية الشياطين';

$GLOBALS["lang"]['guid'] = 'Qeydiyyat';

$GLOBALS["lang"]['Guid'] = 'Qeydiyyat';

$GLOBALS["lang"]['Guinea'] = 'غينيا';

$GLOBALS["lang"]['Guinea-Bissau'] = 'غينيا - بيساو';

$GLOBALS["lang"]['Guyana'] = 'غيانا';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'تنقيح HW';

$GLOBALS["lang"]['Haiti'] = 'هايتي';

$GLOBALS["lang"]['hard_drive_index'] = 'الرقم القياسي للقيادة الصلبة';

$GLOBALS["lang"]['Hard Drive Index'] = 'الرقم القياسي للقيادة الصلبة';

$GLOBALS["lang"]['Hardware'] = 'المعدات';

$GLOBALS["lang"]['hardware_revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Hardware Revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'هل طبقت هذه في';

$GLOBALS["lang"]['hash'] = ' Hash';

$GLOBALS["lang"]['Hash'] = ' Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'اجعل الوكيل يدير آخر';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'اجعل مستخدمك يفتح بسرعة <i>تشغيل مدير البرنامج</i> ) من تحتكم بسرعة';

$GLOBALS["lang"]['Head'] = ' Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'جزيرة هارد وجزر ماكدونالد';

$GLOBALS["lang"]['Hebrew'] = 'العبرية';

$GLOBALS["lang"]['height'] = 'مرتفع';

$GLOBALS["lang"]['Height'] = 'مرتفع';

$GLOBALS["lang"]['Height in RU'] = 'مرتفع في الجبهة الثورية';

$GLOBALS["lang"]['Help'] = 'النجدة';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'المساعدة والأسئلة المتكررة';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'المساعدة في المخاطر الأمنية';

$GLOBALS["lang"]['Hide Audit Window'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['high'] = 'عالية';

$GLOBALS["lang"]['High'] = 'عالية';

$GLOBALS["lang"]['High Availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['Hindi'] = 'Uşaq';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'الكرسي الرسولي (ولاية مدينة)';

$GLOBALS["lang"]['Home'] = 'البيت';

$GLOBALS["lang"]['home'] = 'البيت';

$GLOBALS["lang"]['Home Area Network'] = 'الشبكة المحلية';

$GLOBALS["lang"]['Home area network'] = 'شبكة المناطق السكنية';

$GLOBALS["lang"]['Honduras'] = 'هندوراس';

$GLOBALS["lang"]['Hong Kong'] = 'هونغ كونغ';

$GLOBALS["lang"]['host'] = 'المضيفة';

$GLOBALS["lang"]['Host'] = 'المضيفة';

$GLOBALS["lang"]['hostname'] = 'الاسم المضيف';

$GLOBALS["lang"]['Hostname'] = 'الاسم المضيف';

$GLOBALS["lang"]['hour'] = 'Saatlar';

$GLOBALS["lang"]['Hour'] = 'Saatlar';

$GLOBALS["lang"]['How Does It Work?'] = 'كيف يعمل؟';

$GLOBALS["lang"]['How Does it Work?'] = 'كيف يعمل؟';

$GLOBALS["lang"]['How Long Does it Take'] = 'كم من الوقت يستغرق';

$GLOBALS["lang"]['How and Why is'] = 'كيف ولماذا';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'كيف أمناً أكثر أكثر';

$GLOBALS["lang"]['How do they work?'] = 'كيف يعملون؟';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'كيف يمكن كشف النبلاء';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'كم استغرق من الوقت';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'كم من الوقت أن';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'كم عدد الدوائر تغذي';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'كم من تؤدي إلى';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'كم من تؤدي إلى';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'كم عدد جوارب في';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'كم عدد الرف في';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'كم من يجب على';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'İnteqrasiya üçün cihazlar seçmək lazımdır (bir Attribute, Query və ya bir Group istifadə edin).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Qarışıq necə istismar edilir (e.g., Network, Adjacent, Local, Fizik).';

$GLOBALS["lang"]['How to compare'] = 'كيفية المقارنة';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'تفسير قابل للقراءة';

$GLOBALS["lang"]['Hungarian'] = 'هنغاريا';

$GLOBALS["lang"]['Hungary'] = 'هنغاريا';

$GLOBALS["lang"]['hw_cpe'] = 'Qalereya';

$GLOBALS["lang"]['Hw Cpe'] = 'Qalereya';

$GLOBALS["lang"]['hyperthreading'] = 'Hipertaniya';

$GLOBALS["lang"]['Hyperthreading'] = 'Hipertaniya';

$GLOBALS["lang"]['I have read the EULA.'] = 'لقد قرأت الاتحاد الأوروبي';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'آمل أن هذه الوظيفة الوظيفة إذا كان لديك أسئلة أسئلة ونحن دائما سعداء شواغلكم وربما إن يكن سؤالك';

$GLOBALS["lang"]['id'] = 'الهوية';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'Axtarış';

$GLOBALS["lang"]['IMPORTANT'] = 'Qeydiyyat';

$GLOBALS["lang"]['INPUTS'] = ' IN';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'E-poçt';

$GLOBALS["lang"]['ip'] = 'E-poçt';

$GLOBALS["lang"]['IP Address'] = 'IP Ünvan';

$GLOBALS["lang"]['IP Addresses'] = 'IP Ünvanlar';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Son Seen';

$GLOBALS["lang"]['IP Set By'] = 'E-poçt Daxil ol';

$GLOBALS["lang"]['ISMS'] = 'Qeydiyyat';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 فقط.';

$GLOBALS["lang"]['Iceland'] = 'آيسلندا';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icon və Text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Yalnız, məhsul yalnız və ya ikon və məhsul.';

$GLOBALS["lang"]['id_internal'] = 'الداخلية';

$GLOBALS["lang"]['Id Internal'] = 'الداخلية';

$GLOBALS["lang"]['id_number'] = 'العدد';

$GLOBALS["lang"]['Id Number'] = 'العدد';

$GLOBALS["lang"]['identification'] = 'تحديد الهوية';

$GLOBALS["lang"]['Identification'] = 'تحديد الهوية';

$GLOBALS["lang"]['Identify information assets'] = 'تحديد أصول المعلومات';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'تحديد الأطراف المهتمة ومتطلباتها';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'تحديد أصحاب الرئيسيين وتحديد';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'تحديد الجهاز نموذجك، <i>صورة ذهبية</i> تريد مقارنة أجهزة ضدها';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'تحديد وتقييم المخاطر الأمنية';

$GLOBALS["lang"]['If'] = 'إذا';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'إذا تم جهاز منفرد <i>جهاز الكشف</i> الرابط على الأجهزة، نتحقق نتحقق إذا لم يتم من من';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Yeni Org yaradılırsa, bir LDAP qrup adı addan avtomatik olaraq yaranılır. Yeni Org yaradılırsa və Test adlandırılsa, müxtəlif LDAP qrupu açıq-audit_orgs_test adlandırılacaq.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'إذا كان المرفأ بالملف،';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'إذا كان يستجيب مع';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'إذا لم نائي جهاز جهاز';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'إذا تغير مفتوح العضوية،';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'إذا كان جهاز العضوية العضوية';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'إذا أبلغ أن شركته شركته';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Bu (komma seperated, heç bir yerləşdirilməsi) limanları hesablanırsa, SSH onları işləyir və onları audit üçün istifadə edir. Xüsusi TCP portlarına bu port əlavə etmək lazımdır - avtomatik olacaq.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'وإذا لم أي مشغّل، مشغّل، وينبغي أن الممتلكات مؤهلة مؤهلة';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'وإذا لم تكن قيمة، EG: sistem üçün.nmis_group /configuraion. مجموعة نستخدمها';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'وإذا ما تم مجموعة مجموعة';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'OS Ailə (həd edilən kimi) bu maddə, pass var.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Open-AudIT Server\'ın buraxdığı kollektorlar varsa, əlavə bir damla verilir. يمكنك اختيار لتحديد أي ولا يُدعم سوى الاكتشاف';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'إذا كانت العميل العميل';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'وإذا لم الثنائي على على';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'إذا استوفيت الشروط<br/><ul><li>Rol ad_group təşkil edir</li><li>أورغ لديه مجموعة مخصصة</li><li>لديه استخدام</li><li>bir istifadəçi LDAP var (bu aktiv Directory və ya OpenLDAP) və verilmiş ad_groups</li></ul>ويمكن لهذا دخوله يسجل يسجل وسيستفسر الفريق المفتوح العضوية العضوية<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'وإذا كان المحلي صحيحاً صحيحاً صحيحاً صحيحاً ي أو أو أو أو أو أو أو فإنه فإنه يحدد يحدد يحدد يحدد يحدد يحدد يحدد يحدد يحدد يحدد يحدد البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات البيانات إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى إلى';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Yerli sahəsin doğru (bool) və ya y (string) və ya Y (istring) və ya 1 (integer) olaraq xarici məlumatları y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'إذا كان';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'İstifadəçi hesabı, Open-AudIT və <code>use_authorisation</code> جاهز، المستعمل سيخلق وإذا كانت مثل تفاصيل تفاصيل';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'إذا لم يكن المستخدم <code>use_authorisation</code> ( البيانات البيانات المفتوحة المفتوحة وفي غياب ذلك، المستخدم';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'إذا لم لدى المستخدم';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'إذا لم يكن لدى المستعمل المستعمل المستعمل عن عن عن عن عن آخر آخر آخر آخر آخر آخر آخر آخر استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي استخدمي هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا هذا';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'وإذا لم تُحدد فإن';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'وإذا حددت القيمة، قيمة';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'إذا لم هذا التغيير وقد أضفنا بندا التشكيلات التشكيلات التشكيلات البداية التقصير، التقصير، الخيار الخيار الخيار هذا الصندوق الصندوق الصندوق الصندوق يسمى يسمى يسمى يسمى يسمى يسمى الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف الاكتشاف استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام استخدام  or  or  or  or  or  or  or  or  or  or  or  or  or  or  or  or  or إذا غيّرتَه إلى';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'إذا مرت هذه الكثيرة الكثيرة';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'إذا مرّت الدقائق الكثيرة الكثيرة';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'وإذا حدث فإن المسألة المسألة إنها تخزن فقط الذاكرة الذاكرة يمكنك، مع تحقيق ما ما Üst sol kağızda "səhifə başına qeyd" etiketli bir drop-down; bu, Bulk Edit üçün seçin istədiyiniz bütün görə qəbul edilən giriş sayı genişlənir.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'إذا هل إدارة إدارة';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'إذا أضفتَ الموقع، أضف';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'إذا أضفت جهازاً نوعه،';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'إذا كنت أول واف افتح تذكرة وايف أول';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'إذا كنت مدعوم وفتح وفتح';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'إذا كان مفاتيح مع';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'إذا كنت على أو أو';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'إذا كنت على واسع واسع بعض الناس İnsanlar kimi deyir - T2 (Polite) onlar evlərini qarşılamaq daha az yaxşı olduğunu düşünürlər, və onların ümumi səhifə olmaq üçün özləri hesab edir. غالباً ما لا كم كم والكشف عن فعالية أكثر أكثر';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'إذا كنت';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'إذا كنت خادما مفتوحا';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'إذا كنت تستخدم الدخول الدخول نعم حتى نظام بين نظام نظام نظام والمنظمة ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'إذا اخترت فمن المقرر المقرر';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'إذا قمتِ عادةً أجهزة أجهزة';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'إذا كنت لا عادة عادة - مرسلة إلى / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / نحن فقط نتحقق إذا إذا إذا إذا إذا كان';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'إذا سمحتم للتشكيل، إستخدموا الاكتشافات في هذه فقط يجب يجب <i>هذه الأجهزة هذا الاكتشاف<i>لكن بعد الجهاز أورغ أورغ</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'إذا كان للفيروس مضادة مضادة للفيروس وتستخدم هذه الخدمات قبل';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'إذا كان لديك تفويض، تفويض،<br/><br/>ومن الواضح أن طريقة طريقة طريقة أوديت أوديت أوديت هي هي تفويض تفويض تفويض تفويض عمل اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها اكتشافها كانت كانت كانت كانت كانت كانت كانت كانت أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو شركة شركة شركة شركة<br/><br/>كما لدينا على مراجعة';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'إذا "سيد" <strong>Qeydiyyat</strong> وسيُحدَّث هذا البند منه';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'إذا كنت إلى تنظيم <code>cn=Users,dc=your,dc=domain,dc=com</code> لك <code>base_dn</code>. ليس هناك حاجة لوضع <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'إذا كنت بحاجة تنظيم تنظيم <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> ثم عليك أن تجهز <code>base_dn</code> إلى <code>dc=your,dc=domain,dc=com</code> Qeydiyyat <code>user_dn</code> إلى <code>uid=@username@@domain,cn=People</code>. الكلمات الخاصة <code>@username</code> Qeydiyyat <code>@domain</code> سيتم استبدالها الدخول التي';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'إذا قمت على شبكة';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'إذا كنت تدير على';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'إذا اخترت من القائمة، القائمة، يجب أن تضع مفصّلة';

$GLOBALS["lang"]['If you set the values for'] = 'إذا وضعت القيم ل';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'إذا كنت على عملائك عملائك عندما يتم هذه العميلة، <strong>فقط</strong> تحقق من فرد سمات سمات قد يكون هذا مفيداً إذا إذا';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'إذا كنت في حفر';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'إذا كنت ترغب تشغيل تشغيل';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'إذا كنت في استخدام <i>النصوص</i>. انظر الوثائق';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'إذا لم يكن مستعملك <i>تشغيل مدير البرنامج</i> ولا يزال بإمكانهم العميل العميل ستكون مراجعة غير مباشرة';

$GLOBALS["lang"]['ifadminstatus'] = 'Yaxşı';

$GLOBALS["lang"]['Ifadminstatus'] = 'Yaxşı';

$GLOBALS["lang"]['iflastchange'] = 'Axtarış';

$GLOBALS["lang"]['Iflastchange'] = 'Axtarış';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore Invalid SSL';

$GLOBALS["lang"]['Ignored'] = 'Qeydiyyat';

$GLOBALS["lang"]['image'] = 'الصورة';

$GLOBALS["lang"]['Image'] = 'الصورة';

$GLOBALS["lang"]['Images'] = 'الصور';

$GLOBALS["lang"]['impact_availability'] = 'الأثر';

$GLOBALS["lang"]['Impact Availability'] = 'الأثر';

$GLOBALS["lang"]['impact_confidentiality'] = 'الأثر السري';

$GLOBALS["lang"]['Impact Confidentiality'] = 'الأثر السري';

$GLOBALS["lang"]['impact_integrity'] = 'النزاهة في التأثير';

$GLOBALS["lang"]['Impact Integrity'] = 'النزاهة في التأثير';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'تنفيذ ضوابط وإجراءات مختارة';

$GLOBALS["lang"]['Implementation'] = 'التنفيذ';

$GLOBALS["lang"]['implementation_notes'] = 'مذكرات التنفيذ';

$GLOBALS["lang"]['Implementation Notes'] = 'مذكرات التنفيذ';

$GLOBALS["lang"]['Import'] = 'الواردات';

$GLOBALS["lang"]['Import Example Data'] = 'بيانات نموذج الواردات';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'استيراد {الاستعمار';

$GLOBALS["lang"]['improvement_opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['Improvement Opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Biznes inkişafı və dayanıqlandırma';

$GLOBALS["lang"]['In'] = 'İndi';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'في دقّة أو نافذة <i>App inteqrasiyası</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'في دقّة أو إشارة';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'وفي رأيي الشخصي، أفضل أفضل بذور الاكتشافات مفاتيح تبديل تبديل Ağa bağlıdır və TCP / IP istifadə edin, bir qazanma /router / kompüter orada bilməlidir - yalnız TCP / IP işləyir. قم بتجميع ذلك المرافئ التقليدية';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'لكي تتمكن تطبيق إذن <code>WHERE @filter</code>إن لم تستخدمي هذا هذا Admin rolu olan yalnız istifadəçilər bu xüsusiyyət və daha sonra, yalnız forma maddəsindən sonra sorğu yaratmaq üçün imkan verir <i>متقدم</i> تم تمكينه';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'من أجل خرائط جوجل';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'من أجل نظام نظام';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'ومن أجل هذه الوظيفة،';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(comma seperated) siyahısı';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'في حالة <code>in</code> Qeydiyyat <code>notin</code>ينبغي أن ترفق بين بين<br/><br/>مع هؤلاء المشغلين التصفية<br/><br/>عندما تضيف والمرشح على <strong>Qeydiyyat</strong>لا يمكنك التصفية باستخدام <strong>أو</strong> حالة مع إدراج <code>notin</code>يجب أن عمل على على';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Bir neçə sahəsində bir neçə sahəsi (genellikle JSON formatında) bir BIGTEXT MySQL sahəsində yerləşdirdiyi halda (eg: akreditasyon. وثائق التفويض عمود وثائق التفويض التفويض التفويض التفويض، التفويض، الشكل الشكل الشكل الشكل الشكل الشكل';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Kompüter sürətində, yüksək xidmətlərinə gətirin (böyük kimi) <code>cd Downloads</code> )';

$GLOBALS["lang"]['Inactive'] = 'الخاملة';

$GLOBALS["lang"]['Include'] = 'Axtarış';

$GLOBALS["lang"]['Incomplete'] = 'Daxil ol';

$GLOBALS["lang"]['Index'] = 'الفهرس';

$GLOBALS["lang"]['India'] = 'الهند';

$GLOBALS["lang"]['Indonesia'] = 'إندونيسيا';

$GLOBALS["lang"]['Indonesian'] = 'إندونيسيا';

$GLOBALS["lang"]['Info'] = 'المعلومات';

$GLOBALS["lang"]['Information only.'] = 'المعلومات فقط';

$GLOBALS["lang"]['Informational'] = 'المعلومات';

$GLOBALS["lang"]['initial_size'] = 'الحجم الأولي';

$GLOBALS["lang"]['Initial Size'] = 'الحجم الأولي';

$GLOBALS["lang"]['Initial login credentials are'] = 'وثائق تسجيل الدخول الأولية';

$GLOBALS["lang"]['Initiation'] = 'بدء العمل';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'الناتج';

$GLOBALS["lang"]['Input Type'] = 'الناتج';

$GLOBALS["lang"]['inputs'] = 'المدخلات';

$GLOBALS["lang"]['Inputs'] = 'المدخلات';

$GLOBALS["lang"]['Insane'] = ' Insan';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'أدخل دخول جديد';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'يُدرجُ البياناتَ ويَكتشفُ الذي';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'اضمك رخصة شراء المفتاح';

$GLOBALS["lang"]['install'] = 'Daxil ol';

$GLOBALS["lang"]['Install'] = 'Daxil ol';

$GLOBALS["lang"]['install_date'] = 'Daxil ol';

$GLOBALS["lang"]['Install Date'] = 'Daxil ol';

$GLOBALS["lang"]['install_directory'] = 'Direktoru';

$GLOBALS["lang"]['Install Directory'] = 'Direktoru';

$GLOBALS["lang"]['Install OpenScap if required'] = 'تركيب غطاء مفتوح الاقتضاء';

$GLOBALS["lang"]['install_source'] = 'المصدر';

$GLOBALS["lang"]['Install Source'] = 'المصدر';

$GLOBALS["lang"]['Install Support'] = 'الدعم';

$GLOBALS["lang"]['installed_by'] = 'Qeydiyyat';

$GLOBALS["lang"]['Installed By'] = 'Qeydiyyat';

$GLOBALS["lang"]['installed_on'] = 'تم تركيبها';

$GLOBALS["lang"]['Installed On'] = 'تم تركيبها';

$GLOBALS["lang"]['Installing'] = 'التركيب';

$GLOBALS["lang"]['Installing on Linux'] = 'تركيب لينكس';

$GLOBALS["lang"]['Installing on MacOS'] = 'تركيب ماكاو';

$GLOBALS["lang"]['Installing on Windows'] = 'تركيب النوافذ';

$GLOBALS["lang"]['instance'] = 'Qeydiyyat';

$GLOBALS["lang"]['Instance'] = 'Qeydiyyat';

$GLOBALS["lang"]['instance_ident'] = 'Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Ident';

$GLOBALS["lang"]['instance_options'] = 'خيارات الموقف';

$GLOBALS["lang"]['Instance Options'] = 'خيارات الموقف';

$GLOBALS["lang"]['instance_provider'] = 'مقدِّم الخدمات';

$GLOBALS["lang"]['Instance Provider'] = 'مقدِّم الخدمات';

$GLOBALS["lang"]['instance_reservation_ident'] = 'تحفظ Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'تحفظ Ident';

$GLOBALS["lang"]['instance_state'] = 'الدولة';

$GLOBALS["lang"]['Instance State'] = 'الدولة';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'النوع';

$GLOBALS["lang"]['Instance Type'] = 'النوع';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'التكامل';

$GLOBALS["lang"]['integrations'] = 'التكامل';

$GLOBALS["lang"]['Integrations'] = 'التكامل';

$GLOBALS["lang"]['integrations_id'] = 'Elanlar';

$GLOBALS["lang"]['Integrations ID'] = 'Elanlar';

$GLOBALS["lang"]['integrations_log'] = 'مرفق التكامل';

$GLOBALS["lang"]['Integrations Log'] = 'مرفق التكامل';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'ويمكن تحديد مواعيد على هذا يترك للمستعمل';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'ويمكن تحديد عمليات حسب';

$GLOBALS["lang"]['Interactive Dashboards'] = 'لوحات مظلة تفاعلية';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'وتوفر لوحات فوريا وضوحا وضوحا';

$GLOBALS["lang"]['interface'] = 'Qeydiyyat';

$GLOBALS["lang"]['Interface'] = 'Qeydiyyat';

$GLOBALS["lang"]['interface_id'] = 'الهوية المشتركة';

$GLOBALS["lang"]['Interface ID'] = 'الهوية المشتركة';

$GLOBALS["lang"]['interface_type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Interface Type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Internal'] = 'داخلي';

$GLOBALS["lang"]['Internal Audit'] = 'المراجعة الداخلية للحسابات';

$GLOBALS["lang"]['Internal Audit & Review'] = 'المراجعة الداخلية للحسابات';

$GLOBALS["lang"]['Internal Field Name'] = 'الاسم الميداني الداخلي';

$GLOBALS["lang"]['Internal ID'] = 'الهوية الداخلية';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'داخليّاً مجموعة المعلومات الصحيحة';

$GLOBALS["lang"]['Introduction'] = 'مقدمة';

$GLOBALS["lang"]['invoice'] = 'الفواتير';

$GLOBALS["lang"]['Invoice'] = 'الفواتير';

$GLOBALS["lang"]['invoice_id'] = ' ID فاتورة';

$GLOBALS["lang"]['Invoice ID'] = ' ID فاتورة';

$GLOBALS["lang"]['invoice_item'] = 'البند';

$GLOBALS["lang"]['Invoice Item'] = 'البند';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'العنوان الخارجي ألف';

$GLOBALS["lang"]['Ip Address External A'] = 'العنوان الخارجي ألف';

$GLOBALS["lang"]['ip_address_external_b'] = 'العنوان الخارجي باء';

$GLOBALS["lang"]['Ip Address External B'] = 'العنوان الخارجي باء';

$GLOBALS["lang"]['ip_address_internal_a'] = 'العنوان الداخلي ألف';

$GLOBALS["lang"]['Ip Address Internal A'] = 'العنوان الداخلي ألف';

$GLOBALS["lang"]['ip_address_internal_b'] = 'العنوان الداخلي باء';

$GLOBALS["lang"]['Ip Address Internal B'] = 'العنوان الداخلي باء';

$GLOBALS["lang"]['ip_all_count'] = 'جميع الكونات';

$GLOBALS["lang"]['Ip All Count'] = 'جميع الكونات';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited sayı';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited sayı';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Keçmiş sayı';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Keçmiş sayı';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Qeydiyyat';

$GLOBALS["lang"]['Ip Responding Count'] = 'Qeydiyyat';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned sayı';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned sayı';

$GLOBALS["lang"]['Iran'] = 'إيران';

$GLOBALS["lang"]['Iraq'] = 'العراق';

$GLOBALS["lang"]['Ireland'] = 'أيرلندا';

$GLOBALS["lang"]['Irish'] = 'أيرلندا';

$GLOBALS["lang"]['Is FRU'] = 'هو FRU';

$GLOBALS["lang"]['is_fru'] = 'هو فرو';

$GLOBALS["lang"]['Is Fru'] = 'هو فرو';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'هل خادم المعلومات الإدارية';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'هل هذا الحساب إذا <code>n</code>المستعمل لا يستطيع الدخول';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'هل هذا السؤال على';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'هل هذه المهمة مكنت';

$GLOBALS["lang"]['Isle of Man'] = 'جزيرة مان';

$GLOBALS["lang"]['Israel'] = 'إسرائيل';

$GLOBALS["lang"]['Issue'] = 'المسألة';

$GLOBALS["lang"]['issuer'] = 'Tarix';

$GLOBALS["lang"]['Issuer'] = 'Tarix';

$GLOBALS["lang"]['issuer_name'] = 'اسم المصدر';

$GLOBALS["lang"]['Issuer Name'] = 'اسم المصدر';

$GLOBALS["lang"]['Issues'] = 'المسائل';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'هو <i>فقط يعمل</i> مع البعثة الوطنية';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'وهو متاح في النجدة';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Open-AudIT haqqında heç bir xüsusiyyət göstərdiyini unutmayın <i> y</i> يجب أن يكون تماماً تماماً إذا لم هناك أي <i> y</i> تطابق، ثمّ جهاز جديد، جديد، Xüsusiyyətlər bir dbus_id bir VM klonu zamanı kopyalanır, sonra mövcud bir alət yanlış yazılmış / daha sonra silinmiş yeni giriş silinmiş cihazlar yaradılmışdır.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'وليس من المألوف أن أن ليس مثالياً ليس غير';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'من الشائع أن يقوم <i>صفر</i>أو حتى كل <i>واو</i>S.';

$GLOBALS["lang"]['Italian'] = 'إيطاليا';

$GLOBALS["lang"]['Italy'] = 'إيطاليا';

$GLOBALS["lang"]['Items not in Baseline'] = 'البنود غير في خط';

$GLOBALS["lang"]['JSON'] = ' J';

$GLOBALS["lang"]['JSON to Import'] = 'Axtarış';

$GLOBALS["lang"]['Jamaica'] = 'جامايكا';

$GLOBALS["lang"]['January'] = 'كانون الثاني/يناير';

$GLOBALS["lang"]['Japan'] = 'اليابان';

$GLOBALS["lang"]['Japanese'] = 'اليابان';

$GLOBALS["lang"]['Jersey'] = 'جيرسي';

$GLOBALS["lang"]['Jordan'] = 'الأردن';

$GLOBALS["lang"]['July'] = 'تموز/يوليه';

$GLOBALS["lang"]['June'] = 'حزيران/يونيه';

$GLOBALS["lang"]['Kazakhstan'] = 'كازاخستان';

$GLOBALS["lang"]['Kenya'] = 'كينيا';

$GLOBALS["lang"]['kernel_version'] = 'Qeydiyyat';

$GLOBALS["lang"]['Kernel Version'] = 'Qeydiyyat';

$GLOBALS["lang"]['Key'] = 'المفتاح';

$GLOBALS["lang"]['Key Components'] = 'العناصر الرئيسية';

$GLOBALS["lang"]['Key Password (optional)'] = 'كلمة السر الرئيسية';

$GLOBALS["lang"]['keys'] = 'المفاتيح';

$GLOBALS["lang"]['Keys'] = 'المفاتيح';

$GLOBALS["lang"]['Kiribati'] = 'كيريباس';

$GLOBALS["lang"]['Korea'] = 'كوريا';

$GLOBALS["lang"]['Korean'] = 'كوريا';

$GLOBALS["lang"]['Kuwait'] = 'الكويت';

$GLOBALS["lang"]['Kyrgyz'] = 'قيرغيزستان';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'جمهورية قيرغيزستان';

$GLOBALS["lang"]['LDAP Group'] = 'مجموعة برنامج المساعدة الإنمائية';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'تم البحث هذا المستعمل';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'تم البحث عن المستعمل المستعمل أيضاً تأكدي أنكِ حددتِ حددتِ';

$GLOBALS["lang"]['lang'] = 'لانج';

$GLOBALS["lang"]['Lang'] = 'لانج';

$GLOBALS["lang"]['language'] = 'اللغة';

$GLOBALS["lang"]['Language'] = 'اللغة';

$GLOBALS["lang"]['Lao'] = 'لاو';

$GLOBALS["lang"]['last_changed'] = 'آخر تغيير';

$GLOBALS["lang"]['Last Changed'] = 'آخر تغيير';

$GLOBALS["lang"]['last_finished'] = 'النهاية الأخيرة';

$GLOBALS["lang"]['Last Finished'] = 'النهاية الأخيرة';

$GLOBALS["lang"]['last_logon'] = 'آخر لوغون';

$GLOBALS["lang"]['Last Logon'] = 'آخر لوغون';

$GLOBALS["lang"]['Last Name'] = 'الاسم الأخير';

$GLOBALS["lang"]['last_os_update'] = 'آخر تحديث';

$GLOBALS["lang"]['Last Os Update'] = 'آخر تحديث';

$GLOBALS["lang"]['last_result'] = 'النتيجة الأخيرة';

$GLOBALS["lang"]['Last Result'] = 'النتيجة الأخيرة';

$GLOBALS["lang"]['last_run'] = 'آخر مرة';

$GLOBALS["lang"]['Last Run'] = 'آخر مرة';

$GLOBALS["lang"]['last_seen'] = 'آخر شاهد';

$GLOBALS["lang"]['Last Seen'] = 'آخر شاهد';

$GLOBALS["lang"]['last_seen_by'] = 'آخر شاهد من قبل';

$GLOBALS["lang"]['Last Seen By'] = 'آخر شاهد من قبل';

$GLOBALS["lang"]['last_user'] = 'آخر مستخدم';

$GLOBALS["lang"]['Last User'] = 'آخر مستخدم';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'أخيراً بالويندوز بالويندوز';

$GLOBALS["lang"]['lastModified'] = 'آخر تعديل';

$GLOBALS["lang"]['LastModified'] = 'آخر تعديل';

$GLOBALS["lang"]['latitude'] = 'خط العرض';

$GLOBALS["lang"]['Latitude'] = 'خط العرض';

$GLOBALS["lang"]['Latvia'] = 'لاتفيا';

$GLOBALS["lang"]['Latvian'] = 'لاتفيا';

$GLOBALS["lang"]['Layout'] = 'لك';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'قاعدة البيانات المحلية';

$GLOBALS["lang"]['Ldap Base Dn'] = 'قاعدة البيانات المحلية';

$GLOBALS["lang"]['ldap_dn_account'] = 'حساب Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'حساب Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'تعلم بشأن';

$GLOBALS["lang"]['Learn More'] = 'تعلم المزيد';

$GLOBALS["lang"]['lease_expiry_date'] = 'Qeydiyyat';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Qeydiyyat';

$GLOBALS["lang"]['Lebanon'] = 'لبنان';

$GLOBALS["lang"]['legal_requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Legal Requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Lesotho'] = 'ليسوتو';

$GLOBALS["lang"]['Less Than'] = 'أقل من';

$GLOBALS["lang"]['Less Than or Equals'] = 'أقل من أو يساوي';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'دعنا نَحْصلُ على الأشجارِ نسخ:';

$GLOBALS["lang"]['level'] = 'الرتبة';

$GLOBALS["lang"]['Level'] = 'الرتبة';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'istismara lazım olan imtiyazların əvvəlliyi (None, Aşağı, Yüksək).';

$GLOBALS["lang"]['Liberia'] = 'ليبريا';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'المكتبات (الرمز الذي قد يتضمنه برنامج) وهذه هي عادة مثل مثل تمديدات ووردب ووردب ووردب ، ، ، أندرويد أندرويد أندرويد أندرويد أندرويد أندرويد أندرويد أندرويد أندرويد أندرويد ويندوز "/مكتبات " ويندوز " ويندوز ، ، بيثون " ، ، ، بيثون بيثون بيثون ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ، ذلك ذلك ذلك ذلك ذلك . بيثون . . . ويندوز ويندوز . . . ويندوز ويندوز ويندوز ويندوز . . ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز ويندوز';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'الجماهيرية العربية الليبية';

$GLOBALS["lang"]['License'] = 'الترخيص';

$GLOBALS["lang"]['License Key'] = 'مفتاح الترخيص';

$GLOBALS["lang"]['License Required'] = 'الترخيص المطلوب';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'المستعملون المرخصون أحرار في إضافة أو لا مزيد الانتظار لنا لنا<br/><br/>عندما تُنشئ دخول، ستحتاج وتُخزَّن المدخلات باعتبارها صفائف صفائف<br/><br/>وللمدخلات جدول وعزو وعند تنفيذ الشرط، على<br/><br/>وترد أدناه قاعدة لمطابقة لمطابقة<br/>';

$GLOBALS["lang"]['Licenses'] = 'التراخيص';

$GLOBALS["lang"]['Liechtenstein'] = 'ليختنشتاين';

$GLOBALS["lang"]['Like'] = 'مثل';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'ومثل معظم الأخرى، يمكن استخدم تفعل';

$GLOBALS["lang"]['Like versus Equals'] = 'مثل ضد المساواة';

$GLOBALS["lang"]['limit'] = 'Qalereya';

$GLOBALS["lang"]['Limit'] = 'Qalereya';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'قل السؤال إلى أصناف أصناف';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'محدود إلى 100 صف';

$GLOBALS["lang"]['line_amount'] = 'المبلغ';

$GLOBALS["lang"]['Line Amount'] = 'المبلغ';

$GLOBALS["lang"]['Line Graph'] = 'Graph';

$GLOBALS["lang"]['line_number_a'] = 'السطر ألف';

$GLOBALS["lang"]['Line Number A'] = 'السطر ألف';

$GLOBALS["lang"]['line_number_b'] = 'السطر باء';

$GLOBALS["lang"]['Line Number B'] = 'السطر باء';

$GLOBALS["lang"]['line_text'] = 'النص';

$GLOBALS["lang"]['Line Text'] = 'النص';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'يجب أن تعود البيانية البيانية';

$GLOBALS["lang"]['link'] = 'Axtarış';

$GLOBALS["lang"]['Link'] = 'Axtarış';

$GLOBALS["lang"]['Link (Advanced)'] = 'Yadda saxla';

$GLOBALS["lang"]['Linked Files'] = 'الملفات المترابطة';

$GLOBALS["lang"]['links'] = 'الروابط';

$GLOBALS["lang"]['Links'] = 'الروابط';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'ويربط هذا الاكتشاف المرتبطة المرتبطة الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'الروابط إلى <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'الروابط إلى <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'الروابط إلى <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'لينكس';

$GLOBALS["lang"]['Linux Packages'] = 'أكياس لينكس';

$GLOBALS["lang"]['List'] = 'القائمة';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Bütün NMAP Ports, Protokollar və hər bir cihaz üçün proqramlar';

$GLOBALS["lang"]['List Devices'] = 'الأجهزة المدرجة في القائمة';

$GLOBALS["lang"]['List Discoveries'] = 'كشف البيانات';

$GLOBALS["lang"]['list_table_format'] = 'الجدول الشكل';

$GLOBALS["lang"]['List Table Format'] = 'الجدول الشكل';

$GLOBALS["lang"]['List Tables'] = 'الجداول القائمة';

$GLOBALS["lang"]['Lithuania'] = 'ليتوانيا';

$GLOBALS["lang"]['Lithuanian'] = 'ليتوانيا';

$GLOBALS["lang"]['Load Balancing'] = 'الموازنة';

$GLOBALS["lang"]['Local'] = 'المحلية';

$GLOBALS["lang"]['Local Area Network'] = 'شبكة المناطق المحلية';

$GLOBALS["lang"]['local_port'] = 'ميناء محلي';

$GLOBALS["lang"]['Local Port'] = 'ميناء محلي';

$GLOBALS["lang"]['Local area network'] = 'الشبكة المحلية';

$GLOBALS["lang"]['Localhost'] = 'المصادر المحلية';

$GLOBALS["lang"]['Localisation'] = 'المحلية';

$GLOBALS["lang"]['Location'] = 'الموقع';

$GLOBALS["lang"]['Location A'] = 'الموقع ألف';

$GLOBALS["lang"]['Location B'] = 'الموقع باء';

$GLOBALS["lang"]['location_id'] = 'تحديد الموقع';

$GLOBALS["lang"]['Location ID'] = 'تحديد الموقع';

$GLOBALS["lang"]['location_id_a'] = 'الموقع ألف';

$GLOBALS["lang"]['Location ID A'] = 'الموقع ألف';

$GLOBALS["lang"]['location_id_b'] = 'تحديد الموقع باء';

$GLOBALS["lang"]['Location ID B'] = 'تحديد الموقع باء';

$GLOBALS["lang"]['location_latitude'] = 'الموقع';

$GLOBALS["lang"]['Location Latitude'] = 'الموقع';

$GLOBALS["lang"]['location_level'] = 'مستوى الموقع';

$GLOBALS["lang"]['Location Level'] = 'مستوى الموقع';

$GLOBALS["lang"]['location_longitude'] = 'الموقع';

$GLOBALS["lang"]['Location Longitude'] = 'الموقع';

$GLOBALS["lang"]['Location Name'] = 'اسم الموقع';

$GLOBALS["lang"]['location_rack'] = 'الموقع';

$GLOBALS["lang"]['Location Rack'] = 'الموقع';

$GLOBALS["lang"]['location_rack_position'] = 'الموقع';

$GLOBALS["lang"]['Location Rack Position'] = 'الموقع';

$GLOBALS["lang"]['location_rack_size'] = 'الموقع';

$GLOBALS["lang"]['Location Rack Size'] = 'الموقع';

$GLOBALS["lang"]['location_room'] = 'غرفة الموقع';

$GLOBALS["lang"]['Location Room'] = 'غرفة الموقع';

$GLOBALS["lang"]['location_suite'] = 'الموقع';

$GLOBALS["lang"]['Location Suite'] = 'الموقع';

$GLOBALS["lang"]['Locations'] = 'الموقع';

$GLOBALS["lang"]['Locations in this'] = 'مواقع في هذا';

$GLOBALS["lang"]['log'] = 'Axtarış';

$GLOBALS["lang"]['Log'] = 'Axtarış';

$GLOBALS["lang"]['log_format'] = 'Qeydiyyat';

$GLOBALS["lang"]['Log Format'] = 'Qeydiyyat';

$GLOBALS["lang"]['Log Line'] = 'خط التماس';

$GLOBALS["lang"]['log_path'] = 'Ad Soyad';

$GLOBALS["lang"]['Log Path'] = 'Ad Soyad';

$GLOBALS["lang"]['log_rotation'] = 'التناوب';

$GLOBALS["lang"]['Log Rotation'] = 'التناوب';

$GLOBALS["lang"]['log_status'] = 'الوضع';

$GLOBALS["lang"]['Log Status'] = 'الوضع';

$GLOBALS["lang"]['Logging in'] = 'الدخول';

$GLOBALS["lang"]['Logical Cores '] = 'Qalereya ';

$GLOBALS["lang"]['logical_count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logical Count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logout'] = 'Daxil ol';

$GLOBALS["lang"]['Logs'] = 'اللوز';

$GLOBALS["lang"]['longitude'] = 'الطول';

$GLOBALS["lang"]['Longitude'] = 'الطول';

$GLOBALS["lang"]['low'] = 'منخفض';

$GLOBALS["lang"]['Low'] = 'منخفض';

$GLOBALS["lang"]['Lower Case'] = 'الحالة الدنيا';

$GLOBALS["lang"]['Lowercase Hostname'] = 'الاسم المضيف الأدنى';

$GLOBALS["lang"]['Luxembourg'] = 'لكسمبرغ';

$GLOBALS["lang"]['MAC Address'] = 'Axtarış';

$GLOBALS["lang"]['MAC Manufacturer'] = ' MAC';

$GLOBALS["lang"]['mac'] = 'ماك';

$GLOBALS["lang"]['Mac'] = 'ماك';

$GLOBALS["lang"]['Mac Address'] = 'Elanlar';

$GLOBALS["lang"]['MacOS'] = 'Axtar';

$GLOBALS["lang"]['MacOS Packages'] = 'مجموعات ماكاو';

$GLOBALS["lang"]['Macao'] = 'ماكاو';

$GLOBALS["lang"]['Macedonia'] = 'مقدونيا';

$GLOBALS["lang"]['Madagascar'] = 'مدغشقر';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'الاحتفاظ بسجلات تقييمات ومعالجتها';

$GLOBALS["lang"]['maintenance_expires'] = 'نفقات الصيانة';

$GLOBALS["lang"]['Maintenance Expires'] = 'نفقات الصيانة';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'اجعلي لوح دفتري';

$GLOBALS["lang"]['Make this install a Collector'] = 'جعل هذا تركيب جامع';

$GLOBALS["lang"]['Malawi'] = 'ملاوي';

$GLOBALS["lang"]['Malay'] = 'مالي';

$GLOBALS["lang"]['Malaysia'] = 'ماليزيا';

$GLOBALS["lang"]['Maldives'] = 'ملديف';

$GLOBALS["lang"]['Mali'] = 'مالي';

$GLOBALS["lang"]['Malta'] = 'مالطة';

$GLOBALS["lang"]['Manage'] = 'Qeydiyyat';

$GLOBALS["lang"]['Manage Licenses'] = 'تراخيص الحمل';

$GLOBALS["lang"]['Manage in NMIS'] = 'إدارة نظام المعلومات المتكامل';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'الحوادث وعدم المطابقة';

$GLOBALS["lang"]['Managed'] = 'Daxil ol';

$GLOBALS["lang"]['managed_by'] = 'Qeydiyyat';

$GLOBALS["lang"]['Managed By'] = 'Qeydiyyat';

$GLOBALS["lang"]['Manual Input'] = 'الناتج الدليلي';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'مصممة يدوياً من المستعملين،';

$GLOBALS["lang"]['Manually set by user.'] = 'وضعه المستعمل يدوياً';

$GLOBALS["lang"]['manufacture_date'] = 'تاريخ التصنيع';

$GLOBALS["lang"]['Manufacture Date'] = 'تاريخ التصنيع';

$GLOBALS["lang"]['manufacturer'] = 'المصانع';

$GLOBALS["lang"]['Manufacturer'] = 'المصانع';

$GLOBALS["lang"]['manufacturer_code'] = 'رمز المصنع';

$GLOBALS["lang"]['Manufacturer Code'] = 'رمز المصنع';

$GLOBALS["lang"]['Map'] = 'خريطة';

$GLOBALS["lang"]['maps'] = 'الخرائط';

$GLOBALS["lang"]['Maps'] = 'الخرائط';

$GLOBALS["lang"]['March'] = 'آذار/مارس';

$GLOBALS["lang"]['Marshall Islands'] = 'جزر مارشال';

$GLOBALS["lang"]['Martinique'] = ' Martin';

$GLOBALS["lang"]['mask'] = 'Bakı';

$GLOBALS["lang"]['Mask'] = 'Bakı';

$GLOBALS["lang"]['Match'] = 'Oyuncaq';

$GLOBALS["lang"]['match_options'] = 'خيارات المطابقة';

$GLOBALS["lang"]['Match Options'] = 'خيارات المطابقة';

$GLOBALS["lang"]['Match Order'] = 'ترتيب ماتش';

$GLOBALS["lang"]['Match Process'] = 'عملية ماتش';

$GLOBALS["lang"]['match_string'] = 'Qalereya';

$GLOBALS["lang"]['Match String'] = 'Qalereya';

$GLOBALS["lang"]['Matching Attribute'] = 'محاسبة';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'أجهزة المطابقة - بما في ذلك أورغيد';

$GLOBALS["lang"]['Matching Linux Devices'] = 'مطابقة أجهزة لينكس';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'تجري المطابقة حسب التالي';

$GLOBALS["lang"]['maturity_level'] = 'مستوى الاستحقاق';

$GLOBALS["lang"]['Maturity Level'] = 'مستوى الاستحقاق';

$GLOBALS["lang"]['maturity_score'] = 'الاستحقاق';

$GLOBALS["lang"]['Maturity Score'] = 'الاستحقاق';

$GLOBALS["lang"]['Mauritania'] = 'موريتانيا';

$GLOBALS["lang"]['Mauritius'] = 'موريشيوس';

$GLOBALS["lang"]['max_file_size'] = '(ماكس)';

$GLOBALS["lang"]['Max File Size'] = '(ماكس)';

$GLOBALS["lang"]['Max Length'] = 'ماكس لينغث';

$GLOBALS["lang"]['max_size'] = '(ماكس)';

$GLOBALS["lang"]['Max Size'] = '(ماكس)';

$GLOBALS["lang"]['May'] = 'أيار/مايو';

$GLOBALS["lang"]['Mayotte'] = ' Mayo';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'ويتخذ التدابير اللازمة التعرض التعرض';

$GLOBALS["lang"]['medium'] = 'متوسطة';

$GLOBALS["lang"]['Medium'] = 'متوسطة';

$GLOBALS["lang"]['members'] = 'الأعضاء';

$GLOBALS["lang"]['Members'] = 'الأعضاء';

$GLOBALS["lang"]['memory'] = 'الذاكرة';

$GLOBALS["lang"]['Memory'] = 'الذاكرة';

$GLOBALS["lang"]['memory_count'] = 'Yadda saxla';

$GLOBALS["lang"]['Memory Count'] = 'Yadda saxla';

$GLOBALS["lang"]['memory_slot_count'] = 'Yadda saxla';

$GLOBALS["lang"]['Memory Slot Count'] = 'Yadda saxla';

$GLOBALS["lang"]['menu_category'] = 'الفئة العمرية';

$GLOBALS["lang"]['Menu Category'] = 'الفئة العمرية';

$GLOBALS["lang"]['menu_display'] = 'Yadda saxla';

$GLOBALS["lang"]['Menu Display'] = 'Yadda saxla';

$GLOBALS["lang"]['message'] = 'الرسالة';

$GLOBALS["lang"]['Message'] = 'الرسالة';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Son dəyişdirilmiş';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Son dəyişdirilmiş';

$GLOBALS["lang"]['metric'] = 'القياس';

$GLOBALS["lang"]['Metric'] = 'القياس';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'شبكة منطقة العاصمة';

$GLOBALS["lang"]['Metropolitan area network'] = 'شبكة منطقة العاصمة';

$GLOBALS["lang"]['Mexico'] = 'المكسيك';

$GLOBALS["lang"]['Micronesia'] = 'ميكرونيزيا';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['Microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['minute'] = 'دقيقة';

$GLOBALS["lang"]['Minute'] = 'دقيقة';

$GLOBALS["lang"]['Minutes'] = 'دقائق';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'منذ آخر مراجعة هي';

$GLOBALS["lang"]['model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['Model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['model_family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['Model Family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['Modified'] = 'Tarix';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Daxil ol';

$GLOBALS["lang"]['module'] = 'الوحدة';

$GLOBALS["lang"]['Module'] = 'الوحدة';

$GLOBALS["lang"]['module_index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Module Index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Modules'] = 'Modullar';

$GLOBALS["lang"]['Moldova'] = 'مولدوفا';

$GLOBALS["lang"]['Monaco'] = 'موناكو';

$GLOBALS["lang"]['Monday'] = 'الاثنين';

$GLOBALS["lang"]['Mongolia'] = 'منغوليا';

$GLOBALS["lang"]['monitor'] = 'مرصد';

$GLOBALS["lang"]['Monitor'] = 'مرصد';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'رصد وقياس نظام الرصد';

$GLOBALS["lang"]['Montenegro'] = 'الجبل الأسود';

$GLOBALS["lang"]['month'] = 'الشهر';

$GLOBALS["lang"]['Month'] = 'الشهر';

$GLOBALS["lang"]['Montserrat'] = 'مونتسيرات';

$GLOBALS["lang"]['More Information'] = 'المزيد من المعلومات';

$GLOBALS["lang"]['More Secure'] = 'المزيد من الأمن';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'ويمكن أن تستخدم شركة ويُظهر الجدول التالي لجهاز';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'يمكن العثور المزيد من';

$GLOBALS["lang"]['Morocco'] = 'المغرب';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'وعلى الأرجح أن ويندوس ويندوس<br/><br/>رجاءً سجلوا ماكينة';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Open-AudIT ən çox GNU AGPL ilə lisenziya edilir.';

$GLOBALS["lang"]['motherboard'] = 'الأم';

$GLOBALS["lang"]['Motherboard'] = 'الأم';

$GLOBALS["lang"]['mount_point'] = 'Axtarış';

$GLOBALS["lang"]['Mount Point'] = 'Axtarış';

$GLOBALS["lang"]['mount_type'] = 'طراز جبل';

$GLOBALS["lang"]['Mount Type'] = 'طراز جبل';

$GLOBALS["lang"]['Mozambique'] = 'موزامبيق';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'يجب أن يستجيب إذا تم سيحاول سيحاول إذا لم الجهاز، لن<br/>سابقاً لم على أي';

$GLOBALS["lang"]['Must Respond to Ping'] = 'يجب أن يرد بينغ';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'مضاد الفيروس إلى إنكار';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'وقتي مفتوح';

$GLOBALS["lang"]['Myanmar'] = 'ميانمار';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'نون';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Device Options';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'الاسم الميداني';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Tarixi';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Qrupu';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS الدور';

$GLOBALS["lang"]['NOTE'] = 'ملاحظة';

$GLOBALS["lang"]['NOTE #2'] = 'Qeydiyyat';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'ملاحظة للاطلاع من مزيد من من التوقيت، التوقيت، التوقيت،';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'ملاحظة إذا إذا نسخة محملة محملة استمارة استمارة استمارة أو أو أو أو عقيدة واحدة واحدة واحدة سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل سترسل. ليس الخيط اسم المستخدم ولا تُعرض تفاصيل حساسة حساسة ولمنع هذا يُسمَّى بند';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'ملاحظة ينبغي المعقوفة الأقواس المعقوفة المعقوفة المقدمة المقدمة المقدمة في الوقت الحاضر يستعاض يستعاض أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه أعلاه';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ملاحظة يمكنك وثائق عرض وثائق وثائق وثائق أدناه التشكيلة التشكيلة التشكيلة التشكيلة التشكيلة التشكيلة التشكيلة <code>decrypt_credentials</code> إلى <code>n</code>.';

$GLOBALS["lang"]['name'] = 'الاسم';

$GLOBALS["lang"]['Name'] = 'الاسم';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'الاسم الذي لهذا الحقل';

$GLOBALS["lang"]['Namibia'] = 'ناميبيا';

$GLOBALS["lang"]['Nauru'] = 'ناورو';

$GLOBALS["lang"]['Nepal'] = 'نيبال';

$GLOBALS["lang"]['net_index'] = 'صافي المؤشر';

$GLOBALS["lang"]['Net Index'] = 'صافي المؤشر';

$GLOBALS["lang"]['Netherlands Antilles'] = 'جزر الأنتيل الهولندية';

$GLOBALS["lang"]['Netherlands the'] = 'هولندا';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Axtar';

$GLOBALS["lang"]['Netstat'] = 'Axtar';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikaları';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Portu';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'وتستخدم موانئ مزيجاً من إذا كان الجميع فإن';

$GLOBALS["lang"]['Network'] = 'الشبكة';

$GLOBALS["lang"]['network_address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['Network Address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['Network Discovery'] = 'الشبكة';

$GLOBALS["lang"]['network_domain'] = 'Axtarış';

$GLOBALS["lang"]['Network Domain'] = 'Axtarış';

$GLOBALS["lang"]['Network Types'] = 'الشبكات';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'ويُحدَّد نوع المحلية حسب حسب وترد أدناه الأنواع المدعومة<br/><br/>ويمكن أن الشبكة بقدرتها ويختلف استخدام بما في في';

$GLOBALS["lang"]['networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks Generated By'] = 'الشبكات المولدة';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'يتم تحديث الشبكات اكتشاف اكتشاف';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'وتستجيب الشبكات بشكل حسب بعض توجيه توجيه و <i>بالنيابة</i> من شركاء على الجانب Nmap, SNMP (UDP port 161) üçün bir prob görmək üçün ümumidir. İstehsal etmək və mövcud deyil cihazlar üçün filtered. هذا مضلل لا يوجد يوجد Vaxtın 99.9%-i Open-AudIT deyil, hər hansı Nmap deyil, lakin ağ bu məhsula səbəb olur. والآن بما أن خيارات خيارات بل إن لدى المشاريع المشاريع';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'الشبكات التي تستخدم من';

$GLOBALS["lang"]['New Building Name'] = 'اسم المبنى الجديد';

$GLOBALS["lang"]['New Caledonia'] = 'كاليدونيا الجديدة';

$GLOBALS["lang"]['New Floor Name'] = 'اسم الطابق الجديد';

$GLOBALS["lang"]['New Room Name'] = 'اسم الغرفة الجديدة';

$GLOBALS["lang"]['New Row Name'] = 'اسم جديد';

$GLOBALS["lang"]['New Zealand'] = 'نيوزيلندا';

$GLOBALS["lang"]['News'] = 'الأخبار';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'وتتحقق الأخبار في مرة مرة';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'الأخبار هي لإبقائك مستكملاً<br/><br/>ليس عليك أعلى على على';

$GLOBALS["lang"]['next_hop'] = 'التالي';

$GLOBALS["lang"]['Next Hop'] = 'التالي';

$GLOBALS["lang"]['next_run'] = 'الركض التالي';

$GLOBALS["lang"]['Next Run'] = 'الركض التالي';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'النقر التالي <i>اصنع طلبك الخاص</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'التالي، نقر حسنا، ثم تم!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'وبعد ذلك، نقر الخدمة الخدمة  Properties ثم اللوج على على';

$GLOBALS["lang"]['Nicaragua'] = 'نيكاراغوا';

$GLOBALS["lang"]['Niger'] = 'النيجر';

$GLOBALS["lang"]['Nigeria'] = 'نيجيريا';

$GLOBALS["lang"]['Niue'] = 'نيوي';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap port açıq olduğunu hesab edə bilməz, çünkü paket filtreleme limana çatdırmaqdan onun probları qarşısını alır. يمكن أن يكون من من هذه الموانئ المهاجمين لأنهم Hər zaman onlar növ nömrəli 3 kodu 13 kimi ICMP qeyd mesajları ilə cavab verir (gömrəsiz: əməliyyat təhlükəsizdir), lakin tədqiqatları cavab olmadan azaldır filtreler çox ümumidir. هذا عدة عدة';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Bir port açıq və ya filtered deyil ki, bu dövründə Nmap yerlər port. ويحدث ذلك لأنواع المسح cavab olmaması, birpacket filter sonda ya hər bir cavab düşürdü və ya hər bir cavab verə bilər. إذاً يقيناً UDP, IP protokolu, FIN, NUL, və Xmas bu yol portları qəbul edir.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'وترد تفاصيل الاختناق في';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Qeydiyyat';

$GLOBALS["lang"]['Nmis Customer'] = 'Qeydiyyat';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'نميس مانج';

$GLOBALS["lang"]['Nmis Manage'] = 'نميس مانج';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Adı';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Adı';

$GLOBALS["lang"]['nmis_notes'] = 'Qeydiyyat';

$GLOBALS["lang"]['Nmis Notes'] = 'Qeydiyyat';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis rol';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis rol';

$GLOBALS["lang"]['No'] = 'لا';

$GLOBALS["lang"]['No Devices Returned'] = 'لا توجد أجهزة إعادة';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google Maps  API لن لن تتمكن';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Professional və ya Enterprise üçün lisenziya';

$GLOBALS["lang"]['No Results'] = 'لا نتائج';

$GLOBALS["lang"]['No data in License Key'] = 'Lisenziya məlumatları';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'لا حاجة تحديث قاعدة';

$GLOBALS["lang"]['No devices are in the database.'] = 'لا توجد في قاعدة';

$GLOBALS["lang"]['Node'] = ' No';

$GLOBALS["lang"]['None'] = 'لا شيء';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'المعيار';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'جزر ماريانا الشمالية';

$GLOBALS["lang"]['Norway'] = 'النرويج';

$GLOBALS["lang"]['Norwegian'] = 'النرويج';

$GLOBALS["lang"]['Not Applicable'] = 'غير قابلة للتطبيق';

$GLOBALS["lang"]['Not Checked'] = 'لم يتم التحقق منها';

$GLOBALS["lang"]['Not Equals'] = 'لا يساوي';

$GLOBALS["lang"]['Not In'] = 'ليس';

$GLOBALS["lang"]['Not Like'] = 'لا';

$GLOBALS["lang"]['Not Set'] = 'ليست المجموعة';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'ليس كل حاسوب قادراً قادراً يجب أن السجلات في';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'ليس في قائمة';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'لا تستخدم عادة وإذا ما فإن ذلك، ذلك، MAC ünvanı, arp cavab və ya ping cavab cavab verməyə görə yetirilir. مفيد إذا جهاز توجيه  IP لمسح الموانئ';

$GLOBALS["lang"]['Note'] = 'ملاحظة';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Qeyd - Bir uşaq seçmək avtomatik olaraq uşaqlarına daxil edəcək (burada göstərilməyə görə).';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'ملاحظة، قد إلى جعل';

$GLOBALS["lang"]['Notes'] = 'الحواشي';

$GLOBALS["lang"]['notes'] = 'الحواشي';

$GLOBALS["lang"]['Notice'] = 'الإشعار';

$GLOBALS["lang"]['notin'] = 'Qeydiyyat';

$GLOBALS["lang"]['Notin'] = 'Qeydiyyat';

$GLOBALS["lang"]['November'] = 'تشرين الثاني/نوفمبر';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'الآن من هوية الاشتراك،';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'الآن نحن إلى توفير<br/><br/>اضغط على الموارد ثم<br/><br/>اضف rol Contributor olmalıdır və sonra app üçün axtarış (Open-AudIT). ثم نقر إنقاذ<br/><br/>الآن الطلب لديه الحصول الحصول ستُطلب المكالمات باسم وليس';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'أودريه';

$GLOBALS["lang"]['OS'] = 'Oxunub';

$GLOBALS["lang"]['OS Families'] = 'الأسرة';

$GLOBALS["lang"]['OS Family'] = 'الأسرة';

$GLOBALS["lang"]['OS Group'] = 'مجموعة OS';

$GLOBALS["lang"]['OUTPUTS'] = 'أوتوبيس';

$GLOBALS["lang"]['oae_manage'] = 'Oae';

$GLOBALS["lang"]['Oae Manage'] = 'Oae';

$GLOBALS["lang"]['object_ident'] = 'الاعتراض';

$GLOBALS["lang"]['Object Ident'] = 'الاعتراض';

$GLOBALS["lang"]['Obtain top management support'] = 'دعم الإدارة العليا';

$GLOBALS["lang"]['October'] = 'تشرين الأول/أكتوبر';

$GLOBALS["lang"]['Offset'] = 'Qeydiyyat';

$GLOBALS["lang"]['Okta'] = ' O';

$GLOBALS["lang"]['Oman'] = 'عمان';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'على';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows\'da Open-AudIT, auditin birincil metodu olduğu kimi WMI istifadə edir. لديه سيئة سيئة سيئة <i>مجرد عمل</i> أو بعض الهدف على لقد نصا نصا نصا يسمى يسمى تشغيل تشغيل هذا هذا هذا <strong>محليا</strong> على الآلة بعد التوقيع التوقيع النص يجعل <strong>لا تغيير</strong> إلى الأجهزة المستهدفة وهو يفحص ملاحظة إذا المستهدف نظامك المستهدف المستهدف المستهدف يجب يجب ألا ألا تغير ظروف ظروف Aşağıdakı əlaqələr Windows PCs mövcud deyil və bəzi var. فقط تغيير إذا كان';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'على صفحة قائمة انقر <i>إضافة جديدة</i> زر لتشكيل مهمة';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'في الميدان <i>Qalereya</i> يجب أن تقدمي البرنامج';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'في الصفحة ستكون قادراً';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Windows PC haqqında, DCOM faydalı çalışır və aşağıdakı xüsusiyyətləri təklif edir. ابدأ اركضوا، فريق';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'سترى عدة أزرار تسمح تسمح';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'على سبيل المثال، كلود';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'وبمجرد إنشاء استخدامه يمكن يمكن';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'بمجرد أن تُعلّق، شهادتك، شهادتك،';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'بمجرد أن تشغيل السيناريو';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'ومتى اكتملت هذه الأولية وسيحذف نص مراجعة فور وسيتم تخزين النتيجة على آلة الهدف ويقوم الخادم باب العضوية العضوية والموقع الذي يُنسخ نص نص ومن خلال التقصير، تحديدها تحديدها / / / / / / / / وقد يحتاج إلى تغيير ويجري بعد تجهيز ملف ملف';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'بمجرد أن تضغط على Yeni spawned prosesi konfiqurasiya variantlarını alır və çıxarılması üçün IP ünvanlarının ilk siyahısını müəyyən etmək üçün Nmap xüsusiyyətlərini icra edir (yaxşı sorğular Active Directory növü istifadə olunursa). كل مجموعة مسحها التي التي وهذا العدد العمليات قابل <i> queue_limit</i>من خلال التقصير، هذا هذا';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'بمجرد أن أجهزةكم للتحرير، للتحرير،';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'بمجرد أن ستحاول ستحاول ستحاول ستحاول تفاصيل تفاصيل تفاصيل دخول المُشكلة المُشكلة المُشكلة المُشكلة إذا كان لدى وثائق <code>use_authorisation</code> تم قائمة المجموعات';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'بمجرد أن تعريفاً خطياً';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'بمجرد أن لديك هذه السحاب، اختيار <i>AWS</i> طباعة وقرع لهم تم';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'بمجرد أن لديك هذه السحاب، اختيار <i>Microsoft Azure</i> طباعة وقرع لهم تم';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'بمجرد حصولك على تفويضك تفويضك السحابية، تأكدي من وثائق أيضاً أيضاً وثائق تفويض لسحبك';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'واحد من <code>3x2</code>.. <code>4x2</code>.. <code>4x3</code> أو <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Kampaniya Mərkəzi, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'İnkişaf, Afet Recovery, Dekabr, Pre-Production, İstehsalat, Test, Təlim, Şirkət';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'واحد من والمفوضين، التخطيط، التخلف عن الدفع';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'واحد من أي منهما <code>active directory</code> أو <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Biri: antivirus, Support, firewall, təhlükəsiz, gözəl və ya digər.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'بند آخر لتوخي منه منه';

$GLOBALS["lang"]['Online Documentation'] = 'الوثائق الإلكترونية';

$GLOBALS["lang"]['Open'] = 'مفتوح';

$GLOBALS["lang"]['Open Data'] = 'البيانات المفتوحة';

$GLOBALS["lang"]['Open Source'] = 'المصدر المفتوح';

$GLOBALS["lang"]['Open-AudIT'] = 'مفتوح';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'مفتوح ورمز المصادر متاح وتُشجَّع على تفتيش رمز رمز لديك ونحن دائما من سعداء سعداء نحن هنا للمساعدة<br/><br/> The  The ). (Windows, Linux, MacOS, et al)  deliberately  native  native  native (VBScript for Windows, Bash for *nix). يمكنك أن ترى ما<br/><br/>مفتوح وتضطلع بمهام تجارية Heç bir xüsusiyyətləri ilə bir təşviqli fayl kimi daxildir. حيث تقوم المؤسسة بأداء';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Cihaz Seçimi';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'مفتوح ولدى المؤسسة على على';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'شركة حل حل حل حل حل حل والقابلية والقابلية لمراجعة الكبيرة الكبيرة الكبيرة الكبيرة Professional plus bütün xüsusiyyətləri: Baselines, File Auditing, Cloud Discovery, Rack Management, Active Directory və LDAP daxil olan Configurable Rol Based Access Control.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'الاسم الميداني المفتوح العضوية';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'التراخيص المفتوحة';

$GLOBALS["lang"]['Open-AudIT Options'] = 'خيارات الاستثمار المفتوح';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'وتشمل الفئة المواصفات المفتوحة المفتوحة';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'مفتوح المهنيون القدرة على';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'مهني مفتوح العالم';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'مفتوح ويمكن تشكيل المعلومات المعلومات ويمكنها أيضا أن تستخدم';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'مفتوح يمكن على خادمك ولا تحتاج إلى إلى حتى التركيب مدير<br/><br/>مفتوح انها تخزن أي وحتى المعلومات المتعلقة يمكن يمكن<br/><br/>بالتأكيد، من السماح لها لها فتح الباب لا إلى';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'ويمكن للشركة المفتوحة تقوم تقوم';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'مفتوح ويمكن المعلومات أن كيف يمكنك تحسين هذا؟';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'مفتوح ويمكن المعلومات أن أن';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'ويمكن للشركة المفتوحة تستخدم تستخدم ميكروسوفت هذا يعني أنّ في في في يضغط يضغط يضغط الدخول الدخول الدخول الدخول الدخول ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم ويستخدم إلى إلى إلى إلى وسيحتاج ذلك إلى أن';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'ويمكن أن تستخدم شركة أوكيتا " أوكيتا كأسلوب للتوثيق. هذا يعني يعني في في في في يضغط يضغط يضغط على على زر زر زر زر الشعار الشعار ويستخدم ويستخدم ويستخدم الشعار الشعار ويستخدم وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج وسيحتاج التفويض التفويض التفويض التفويض التفويض التفويض التفويض التفويض وثائق وثائق وثائق وثائق وثائق وثائق وثائق وثائق وثائق التفويض التفويض';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'فتح الباب مع الكثير إذا كنت محدد استفسار استفسار';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'وتوجد لدى منظمة أوديت " (JON Restful API) منظمة " (JON)" (PJON) " (PJON)" تُستخدم في الوصلة الوصلة الوصلة البينية البينية البينية البينية البينية البينية طلبات طلبات طلبات طلبات طلبات شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة شركة';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'مفتوح لدى تكنولوجيا نظام<br/><br/>والأمر متروك برنامج برنامج برنامج برنامج مفتوح كيف كيف يودون يودون يودون مراقبة مراقبة مراقبة مراقبة الدخول الدخول الدخول الدخول الدخول الأدوار الأدوار الأدوار الدخول الأدوار الأدوار الأدوار الأدوار الأدوار.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'مفتوح تكنولوجيا المعلومات محرك محرك ويمكن الإبلاغ عن التغييرات التغييرات<br/><br/>وعندما يُراجع تُقسم الخصائص الخصائص<br/><br/>كل جهاز <code>devices</code> طاولة كل دخول طاولة <code>id</code> العمود هذه فريدة من من -<br/><br/>وعند تجهيز نتائج الحسابات، الحسابات،<br/><br/>بالنسبة لكل إذا كانت كانت <code>last_seen</code> تم تحديثها لا تغيير<br/><br/>وإذا لم تتطابق من من ألف <code>change_log</code> ويُنشأ الدخول كان للجهاز<br/><br/>وعند الانتهاء الحسابات، مراجعة مراجعة Axtarış <code>current</code> عزو لهذا البند <i> n</i> وتغيّر...<br/><br/>لذا، يمكننا ما إذا <i> y</i>.<br/><br/>يمكننا تحديد تم اكتشاف <i>أولاً</i>.<br/><br/>ويمكننا أن نحدد إذا إذا كان تركيب<br/><br/>يمكننا تحديد إذا لم لم <i> n</i>.<br/><br/>يمكننا تحديد مرة إكتشفنا<br/><br/>وفي أي مرحلة المراحل، المراحل، يمكننا ما ما ما كان نظام باستخدام باستخدام جدول جدول جدول واختيار واختيار العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر العناصر الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الـ الأول الأول الأول الأول عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر عشر . . عشر عشر عشر عشر عشر عشر عشر عشر . . عشر عشر العناصر . . العناصر . عشر العناصر العناصر العناصر سين . . عشر عشر عشر العناصر . . عشر العناصر العناصر عشر عشر عشر عشر عشر . العناصر العناصر العناصر<br/><br/>ويرد أدناه كل وأعمدة<br/><br/>ملاحظة - هناك بعض الاستثناءات على على<br/><br/> * الشبكة، الشبكة، الشبكة، الشبكة، إذا آلة آلة آلة آلة أيضاً أيضاً أيضاً أيضاً عموداً عموداً عموداً عموداً عموداً عموداً عموداً عموداً عموداً عموداً عموداً صافياً اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال اتصال.<br/><br/>*2 - للتجزئة، والحاسب هو آلة آلة آلة اسم اسم اسم تقسيم تقسيم تقسيم تقسيم';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell \"What\\'] = 'البرنامج المفتوح برنامج مصمم مصمم "افتح الباب"';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'مفتوح يجعل السهل تحرير';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'مفتوح وتحتاج تكنولوجيا إلى إلى يرجى التحديد على';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'المفتوح الكثير الكثير الكثير';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'مفتوح سفن تكنولوجيا التي التي<br/><br/>وبصفة عامة، ينبغي يكون يكون<br/><br/>يمكن للمستعمل أن له وسيطبق هذا الإذن على أعلى مستوى به به أي أي المستعمل المستعمل المستعمل المستعمل المستعمل المستعمل المستعمل سيكون بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه يمنح يمنح يمنح يمنح يمنح يمنح هذا هذا هذا هذا هذا هذا هذا لا لا لا لا لا.<br/><br/>admin rol formasiya, baza, qruplar, ldap server, logs, sorğular və rollar kimi kolleksiyalara daxildir. بنود عالمية تؤثر التطبيق<br/><br/>Org_admin rolu əsasən yaratmaq, oxu, yeniləmə və yag_id sütunu olan hər hansı bir kolleksiya üçün məlumatları silməyə imkan verir. وستتضمن جميع تقريبا، باستثناء <code>org_id</code> العمود<br/><br/>ولا يسمح إلا عموما عموما إلا';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'مفتوح سفن تكنولوجيا التي التي<br/><br/>وبصفة عامة، ينبغي يكون يكون<br/><br/>يمكن للمستعمل أن له وسيطبق هذا الإذن على أعلى مستوى به به أي أي المستعمل المستعمل المستعمل المستعمل المستعمل المستعمل المستعمل سيكون بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه بوسعه يمنح يمنح يمنح يمنح يمنح يمنح هذا هذا هذا هذا هذا هذا هذا لا لا لا لا لا.<br/><br/>admin rol formasiya, baza, qruplar, ldap server, logs, sorğular və rollar kimi kolleksiyalara daxildir. بنود عالمية تؤثر التطبيق<br/><br/>Org_admin rolu əsasən yaratmaq, oxu, yeniləmə və yag_id sütunu olan hər hansı bir kolleksiya üçün məlumatları silməyə imkan verir. وستحتوي جميع البيانات باستثناء باستثناء<br/><br/>ولا يسمح إلا عموما عموما إلا';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'سفن مفتوحة من العديد العديد إذا كنت لا المؤسسة، المؤسسة،';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'ينبغي تركيب نظام " مفتوح في 64 مبتدئاً <strong>سيرفر</strong> الأنظمة فقط 10 وويندو 11 <strong>لا</strong> مدعوم.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = '(أود) يستعمل أجهزة أجهزة أجهزة التنقيب التنقيب التنقيب للموانئ تستجيب تستجيب تستجيب تستجيب تستجيب تستجيب النبائط بفتحها لموانئ لموانئ لموانئ لموانئ لموانئ لموانئ لموانئ لموانئ وكثيرا ما لا الأجهزة وترد أدناه الردود';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = '(أود) يستعمل (نامب) في الاكتشاف الاكتشاف بدون (نامب) بشكل لن يعمل (إفتتاح) بشكل صحيح صحيح كل انشاء مفتوح ان';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = '(أود) يستعمل (نامب) في الاكتشاف الاكتشاف بدون (نامب) بشكل لن يعمل (إفتتاح) بشكل صحيح صحيح كل نسيج يُفترض أن أن';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'مفتوح تكنولوجيا تستخدم وثائق هذه مشفرة ومخزنة تتوقع';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'وقد كتب ممثل يتحدث كل شيء في يستخدم ومع ذلك، دعمت دائما وهذه الترجمات صحيحة دائما، دائما،<br/><br/>ماذا يمكنك تفعل إذا';

$GLOBALS["lang"]['OpenLDAP'] = 'Tarix';

$GLOBALS["lang"]['OpenScap is Installed'] = 'الهروب مفتوح';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'فتح تذكرة دعم؟';

$GLOBALS["lang"]['openldap_user_dn'] = 'مستعمل مفتوح';

$GLOBALS["lang"]['Openldap User Dn'] = 'مستعمل مفتوح';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'عضوية المستعمل المفتوح';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'عضوية المستعمل المفتوح';

$GLOBALS["lang"]['open|filtered'] = 'مفتوح';

$GLOBALS["lang"]['Open|filtered'] = 'مفتوح';

$GLOBALS["lang"]['Operating System'] = 'نظام التشغيل';

$GLOBALS["lang"]['Operating System Family Contains'] = 'الحاويات الأسرية لنظام التشغيل';

$GLOBALS["lang"]['Operating Systems'] = 'نظم التشغيل';

$GLOBALS["lang"]['Operators'] = 'المشغلون';

$GLOBALS["lang"]['optical'] = 'المعارضة';

$GLOBALS["lang"]['Optical'] = 'المعارضة';

$GLOBALS["lang"]['Optimized'] = 'الاستخدام الأمثل';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'الخيار 1 - تغيير البيانات';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'الخيار رقم 2 - تغيير ملف الترجمة';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'مراجعة حسابات الموظفين';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'الصيغة الاختيارية التي محكمة استخدمي النسبة للإشارة كبطاقة';

$GLOBALS["lang"]['options'] = 'الخيارات';

$GLOBALS["lang"]['Options'] = 'الخيارات';

$GLOBALS["lang"]['Options, options, options'] = 'الخيارات والخيارات والخيارات';

$GLOBALS["lang"]['Or'] = 'أو';

$GLOBALS["lang"]['Or select from the below fields.'] = 'أو تختار من التالية';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendant';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendant';

$GLOBALS["lang"]['org_id'] = 'Elanlar';

$GLOBALS["lang"]['Org ID'] = 'Elanlar';

$GLOBALS["lang"]['Organisation'] = 'المنظمة';

$GLOBALS["lang"]['organisation'] = 'المنظمة';

$GLOBALS["lang"]['Organisation Descendants'] = 'المنظمة';

$GLOBALS["lang"]['Organisations'] = 'المنظمات';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'ويمكن للمنظمات أن وتعزز وتعزز';

$GLOBALS["lang"]['orgs'] = 'الأورام';

$GLOBALS["lang"]['Orgs'] = 'الأورام';

$GLOBALS["lang"]['Orgs Name'] = 'الاسم';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'الأورام في فتح هي هي مجموعة المستخدمين <i>الأورام</i> Qeydiyyat <i>الأدوار</i> تحديد ما ولا يمكن<br/><br/>وتُخصص معظم في نظام نظام نظام " (Pop-AudIT).<br/><br/>الأورام يمكن أن لها فكّر في الهيكل Bir istifadəçinin xüsusi Org daxil varsa, vaxtın ən çoxu (heçə deyil) Orgs qəbul edir.';

$GLOBALS["lang"]['orientation'] = 'التوجيه';

$GLOBALS["lang"]['Orientation'] = 'التوجيه';

$GLOBALS["lang"]['os'] = 'Oxunub';

$GLOBALS["lang"]['Os'] = 'Oxunub';

$GLOBALS["lang"]['os_arch'] = 'Oxunub:';

$GLOBALS["lang"]['Os Arch'] = 'Oxunub:';

$GLOBALS["lang"]['os_bit'] = 'Oxunub';

$GLOBALS["lang"]['Os Bit'] = 'Oxunub';

$GLOBALS["lang"]['os_cpe'] = 'Oxunub';

$GLOBALS["lang"]['Os Cpe'] = 'Oxunub';

$GLOBALS["lang"]['os_display_version'] = 'ترجمة';

$GLOBALS["lang"]['Os Display Version'] = 'ترجمة';

$GLOBALS["lang"]['os_family'] = 'الأسرة';

$GLOBALS["lang"]['Os Family'] = 'الأسرة';

$GLOBALS["lang"]['os_group'] = 'Oxunub';

$GLOBALS["lang"]['Os Group'] = 'Oxunub';

$GLOBALS["lang"]['os_installation_date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Os Installation Date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['os_licence_expiry'] = 'Oxunub:';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Oxunub:';

$GLOBALS["lang"]['os_license'] = 'رخصة القيادة';

$GLOBALS["lang"]['Os License'] = 'رخصة القيادة';

$GLOBALS["lang"]['os_license_code'] = 'قانون الترخيص';

$GLOBALS["lang"]['Os License Code'] = 'قانون الترخيص';

$GLOBALS["lang"]['os_license_mode'] = 'Oxunub:';

$GLOBALS["lang"]['Os License Mode'] = 'Oxunub:';

$GLOBALS["lang"]['os_license_type'] = 'نوع الترخيص';

$GLOBALS["lang"]['Os License Type'] = 'نوع الترخيص';

$GLOBALS["lang"]['os_name'] = 'الاسم';

$GLOBALS["lang"]['Os Name'] = 'الاسم';

$GLOBALS["lang"]['os_version'] = 'Oxunub';

$GLOBALS["lang"]['Os Version'] = 'Oxunub';

$GLOBALS["lang"]['Other'] = 'Digər';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'عدا ذلك أنت حر انها فكرة جيدة القائمة';

$GLOBALS["lang"]['Others'] = 'جهات أخرى';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'إندماجنا الافتراضي أيضا اكتشاف لذا نشحن اكتشافاً للتكامل للتكامل';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'أمثلةنا ستستخدم <i>النوع</i> العمود';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'إطارنا يحمّل هنا لتجهيزها';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'هدفنا بالإفراج الأولي كان <i>مجرد عمل</i>. إذا كنت البرامج على على لا شيء أكثر وبعد أن قال فإن فإن الاندماج للتشكيل';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'سمتنا الجديدة المسماة تعطيك تحديد كانت كانت كانت أي<br/><br/>أول مرة تستهلك مستمر مستمر تتواصل حالتك المفتوحة أول أول وفي كل مرة تجهيز تجهيز وهذا يعني، عند إلى إلى عندما ترى ضعف فردي، فردي،<br/><br/>لذا، أنت دائما<br/><br/>وبالإضافة إلى ذلك، أيضاً أيضاً<br/><br/>في حالتك نسمح لك i.e. proqram istifadə etmir və ya yüklü deyil ki, bir Brand-dan qarşılıqlar istifadə etmir. عن طريق قائمة بائعينا بائعينا<br/><br/>كل هذا بسيطاً جداً <b>الكثير</b> يجري فعلى يتضمن يتضمن يتضمن يتضمن يتضمن المعلومات المعلومات ولكن ولكن ولكن ولكن ولكن لا لا لا تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق تتطابق مع مع مع مع مع مع مع مع مع حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا حاسوبا مثال جيد ما وعادة وعادة ما Realite, bu apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - və digərlər kimi görünür. لذا علينا أولاً نحدد نحدد بعد ذلك يجب أن نسجل وحالتك في تأخذ أن أن أن أن أن تصفية تصفية مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد ماذا عن تحديد محققين<br/><br/>بالإضافة إلى أيضاً لدينا لدينا';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'وقت إستجابة';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'وقتنا للرد على السيناريو';

$GLOBALS["lang"]['output'] = 'الناتج';

$GLOBALS["lang"]['Output'] = 'الناتج';

$GLOBALS["lang"]['outputs'] = 'النواتج';

$GLOBALS["lang"]['Outputs'] = 'النواتج';

$GLOBALS["lang"]['Overall severity score (0–10).'] = ' )-١٠';

$GLOBALS["lang"]['overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['Overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['owner'] = 'المالك';

$GLOBALS["lang"]['Owner'] = 'المالك';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PExec, SysInternal / Microsofts mövcud PsExec proqramının onlayn qeyd edilməsidir. وترمي شركة تكون تكون أن أن أن استبدال استبدال شركة شركة فإن فإن فإن استخدام استخدام متطابق متطابق متطابق متطابق متطابق متطابق متطابق متطابق مع مع متطابق متطابق مع مع Bu iş Talha Tariqs RemCom tərəfindən ilhamlandı.';

$GLOBALS["lang"]['PHP'] = ' PHP';

$GLOBALS["lang"]['POD'] = 'Bakı';

$GLOBALS["lang"]['POSTing data'] = 'بيانات تخطيط البرامج';

$GLOBALS["lang"]['Package'] = 'التعبئة';

$GLOBALS["lang"]['packages'] = 'الحزم';

$GLOBALS["lang"]['Packages'] = 'الحزم';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'تستخدم العبوات عن أشياء <i>البرامجيات المحظورة</i>server, və s.<br/><br/>وتوفر شبكة أوديت أوديت نباتات نباتات نباتات نباتات أيضاً النسخ النسخ فيروسات فيروسات النسخ وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير وغير ذلك ذلك ذلك وغير وغير ذلك وغير وغير وغير وغير وغير وغير وغير وغير وغير البرمجيات البرمجيات وغير وغير وغير البرمجيات البرمجيات.';

$GLOBALS["lang"]['pagefile'] = 'الصفحة';

$GLOBALS["lang"]['Pagefile'] = 'الصفحة';

$GLOBALS["lang"]['Pakistan'] = 'باكستان';

$GLOBALS["lang"]['Palau'] = 'بالاو';

$GLOBALS["lang"]['Palestinian Territory'] = 'الأرض الفلسطينية';

$GLOBALS["lang"]['Panama'] = 'بنما';

$GLOBALS["lang"]['Papua New Guinea'] = 'بابوا غينيا الجديدة';

$GLOBALS["lang"]['Paraguay'] = 'باراغواي';

$GLOBALS["lang"]['Parameters'] = 'البارامترات';

$GLOBALS["lang"]['Paranoid'] = 'جنون العظمة';

$GLOBALS["lang"]['Parent'] = 'الوالد';

$GLOBALS["lang"]['parent_id'] = 'هوية الوالدين';

$GLOBALS["lang"]['Parent ID'] = 'هوية الوالدين';

$GLOBALS["lang"]['parent_name'] = 'اسم الأب';

$GLOBALS["lang"]['Parent Name'] = 'اسم الأب';

$GLOBALS["lang"]['part_number'] = 'الجزء';

$GLOBALS["lang"]['Part Number'] = 'الجزء';

$GLOBALS["lang"]['part_of_domain'] = 'الجزء المتعلق بالأعمدة';

$GLOBALS["lang"]['Part Of Domain'] = 'الجزء المتعلق بالأعمدة';

$GLOBALS["lang"]['Partition'] = 'التجزئة';

$GLOBALS["lang"]['partition_count'] = 'العد التنازلي';

$GLOBALS["lang"]['Partition Count'] = 'العد التنازلي';

$GLOBALS["lang"]['partition_disk_index'] = 'مؤشر القرص';

$GLOBALS["lang"]['Partition Disk Index'] = 'مؤشر القرص';

$GLOBALS["lang"]['Pass'] = 'المرور';

$GLOBALS["lang"]['Passed'] = 'مربوطة';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'شبكة المناطق المحلية المعارضة';

$GLOBALS["lang"]['Password'] = 'كلمة السر';

$GLOBALS["lang"]['password'] = 'كلمة السر';

$GLOBALS["lang"]['password_changeable'] = 'كلمة السر قابلة للتغيير';

$GLOBALS["lang"]['Password Changeable'] = 'كلمة السر قابلة للتغيير';

$GLOBALS["lang"]['password_disabled'] = 'معوق كلمة السر';

$GLOBALS["lang"]['Password Disabled'] = 'معوق كلمة السر';

$GLOBALS["lang"]['password_expires'] = 'كلمات السر';

$GLOBALS["lang"]['Password Expires'] = 'كلمات السر';

$GLOBALS["lang"]['password_last_changed'] = 'كلمة السر آخر تغيير';

$GLOBALS["lang"]['Password Last Changed'] = 'كلمة السر آخر تغيير';

$GLOBALS["lang"]['password_required'] = 'كلمة السر المطلوبة';

$GLOBALS["lang"]['Password Required'] = 'كلمة السر المطلوبة';

$GLOBALS["lang"]['patch_panel'] = 'فريق الدفع';

$GLOBALS["lang"]['Patch Panel'] = 'فريق الدفع';

$GLOBALS["lang"]['patch_panel_port'] = 'بوابة الفريق';

$GLOBALS["lang"]['Patch Panel Port'] = 'بوابة الفريق';

$GLOBALS["lang"]['path'] = 'Yol';

$GLOBALS["lang"]['Path'] = 'Yol';

$GLOBALS["lang"]['Performance'] = 'الأداء';

$GLOBALS["lang"]['Performed'] = 'الأداء';

$GLOBALS["lang"]['Permission'] = 'الإذن';

$GLOBALS["lang"]['Permission Required'] = 'الإذن المطلوب';

$GLOBALS["lang"]['permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Persian'] = 'Axtar';

$GLOBALS["lang"]['Personal Area Network'] = 'شبكة المناطق الشخصية';

$GLOBALS["lang"]['Personal area network'] = 'شبكة المنطقة الشخصية';

$GLOBALS["lang"]['Peru'] = 'بيرو';

$GLOBALS["lang"]['Philippines'] = 'الفلبين';

$GLOBALS["lang"]['phone'] = 'Qeydiyyat';

$GLOBALS["lang"]['Phone'] = 'Qeydiyyat';

$GLOBALS["lang"]['Physical CPUs'] = 'البارافينات المكلورة الفيزيائية';

$GLOBALS["lang"]['physical_count'] = 'الكونت';

$GLOBALS["lang"]['Physical Count'] = 'الكونت';

$GLOBALS["lang"]['physical_depth'] = 'الجسد المادي';

$GLOBALS["lang"]['Physical Depth'] = 'الجسد المادي';

$GLOBALS["lang"]['physical_height'] = 'الوزن البدني';

$GLOBALS["lang"]['Physical Height'] = 'الوزن البدني';

$GLOBALS["lang"]['physical_width'] = 'الأرملة البدنية';

$GLOBALS["lang"]['Physical Width'] = 'الأرملة البدنية';

$GLOBALS["lang"]['picture'] = 'الصورة';

$GLOBALS["lang"]['Picture'] = 'الصورة';

$GLOBALS["lang"]['pid'] = 'Elan';

$GLOBALS["lang"]['Pid'] = 'Elan';

$GLOBALS["lang"]['Pie Chart'] = 'Tarix';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'يجب أن الرسوم البيانية';

$GLOBALS["lang"]['ping'] = ' P';

$GLOBALS["lang"]['Ping'] = ' P';

$GLOBALS["lang"]['Ping Target'] = 'الهدف المحدد';

$GLOBALS["lang"]['Pitcairn Islands'] = 'جزر بيتكيرن';

$GLOBALS["lang"]['placement'] = 'التنسيب';

$GLOBALS["lang"]['Placement'] = 'التنسيب';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'تخطيط وإجراء المراجعة الداخلية';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'يرجى الحصول سجل لمدير';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'يرجى تسجيل وتغيير بأسرع';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'يُرجى الدخول الخادم المفتوح <code>nslookup IP_ADDRESS_OF_TARGET</code> في القيادة أو قذيفة';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'يرجى ملاحظة الصندوق المختار';

$GLOBALS["lang"]['Please see the FAQ'] = 'رجاءً شاهدْ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'يرجى إرسال الملفات الثلاثة الثلاثة';

$GLOBALS["lang"]['Please set using'] = 'رجاءً إبدأْ';

$GLOBALS["lang"]['Please visit the homepage at'] = 'يرجى زيارة الموقع الشبكي';

$GLOBALS["lang"]['pod'] = 'Bakı';

$GLOBALS["lang"]['Pod'] = 'Bakı';

$GLOBALS["lang"]['Poland'] = 'بولندا';

$GLOBALS["lang"]['Policies'] = 'السياسات';

$GLOBALS["lang"]['Policies have exceptions.'] = 'وللسياسات استثناءات.';

$GLOBALS["lang"]['policy'] = 'السياسات';

$GLOBALS["lang"]['Policy'] = 'السياسات';

$GLOBALS["lang"]['policy_id'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy ID'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy Result'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy Results'] = 'نتائج السياسات';

$GLOBALS["lang"]['Polish'] = 'بولندا';

$GLOBALS["lang"]['Polite'] = 'Daxil ol';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'نشر القيم الواردة';

$GLOBALS["lang"]['Populated by audit.'] = 'مأخوذة من مراجعة الحسابات';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'مأهولة بالاكتشاف والمراجعة';

$GLOBALS["lang"]['Populated dynamically.'] = 'مأهولة دينامياً';

$GLOBALS["lang"]['Populated from DNS.'] = 'مأهولة من DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'مأهولة من اكتشاف SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'مأخوذة من مراجعات الأجهزة';

$GLOBALS["lang"]['Populated from hostname.'] = 'مأهولة من اسم المضيف';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'مأهولة من الآلة';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'مأهولة من من الافتراضي أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو أو';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'مأهولة من القيادة المضيفة';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'مأخوذة ببيانات من النظام';

$GLOBALS["lang"]['port'] = 'الميناء';

$GLOBALS["lang"]['Port'] = 'الميناء';

$GLOBALS["lang"]['port_name'] = 'الاسم';

$GLOBALS["lang"]['Port Name'] = 'الاسم';

$GLOBALS["lang"]['port_number'] = 'الميناء';

$GLOBALS["lang"]['Port Number'] = 'الميناء';

$GLOBALS["lang"]['ports_in_order'] = 'Sifariş';

$GLOBALS["lang"]['Ports In Order'] = 'Sifariş';

$GLOBALS["lang"]['ports_stop_after'] = 'بورتس توقف بعد';

$GLOBALS["lang"]['Ports Stop After'] = 'بورتس توقف بعد';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'البرتغال، الجمهورية البرتغالية';

$GLOBALS["lang"]['Portuguese'] = 'البرتغال';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'البرتغال (البرازيل)';

$GLOBALS["lang"]['position'] = 'المنصب';

$GLOBALS["lang"]['Position'] = 'المنصب';

$GLOBALS["lang"]['Post-Certification'] = 'ما بعد التصديق';

$GLOBALS["lang"]['postcode'] = 'Proqram';

$GLOBALS["lang"]['Postcode'] = 'Proqram';

$GLOBALS["lang"]['power_circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['Power Circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['power_sockets'] = 'Daxil ol';

$GLOBALS["lang"]['Power Sockets'] = 'Daxil ol';

$GLOBALS["lang"]['Predictable'] = 'التنبؤ';

$GLOBALS["lang"]['Preferences'] = 'الأفضليات';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'الاستعداد لإعادة كل ثلاث';

$GLOBALS["lang"]['Prerequisites'] = 'الشروط المسبقة';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'الشروط والاختبارات';

$GLOBALS["lang"]['present'] = 'İndi';

$GLOBALS["lang"]['Present'] = 'İndi';

$GLOBALS["lang"]['previous_value'] = 'القيمة السابقة';

$GLOBALS["lang"]['Previous Value'] = 'القيمة السابقة';

$GLOBALS["lang"]['primary'] = 'الابتدائي';

$GLOBALS["lang"]['Primary'] = 'الابتدائي';

$GLOBALS["lang"]['Primary Key'] = 'المفتاح الرئيسي';

$GLOBALS["lang"]['print_queue'] = 'طابعة';

$GLOBALS["lang"]['Print Queue'] = 'طابعة';

$GLOBALS["lang"]['printer_color'] = 'Axtarış';

$GLOBALS["lang"]['Printer Color'] = 'Axtarış';

$GLOBALS["lang"]['printer_duplex'] = 'Axtarış';

$GLOBALS["lang"]['Printer Duplex'] = 'Axtarış';

$GLOBALS["lang"]['printer_port_name'] = 'اسم بورتر';

$GLOBALS["lang"]['Printer Port Name'] = 'اسم بورتر';

$GLOBALS["lang"]['printer_shared'] = 'Axtarış';

$GLOBALS["lang"]['Printer Shared'] = 'Axtarış';

$GLOBALS["lang"]['printer_shared_name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['Printer Shared Name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['priority'] = 'الأولوية';

$GLOBALS["lang"]['Priority'] = 'الأولوية';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Yadda saxla';

$GLOBALS["lang"]['Privacy Protocol'] = 'بروتوكول الخصوصية';

$GLOBALS["lang"]['privileges_required'] = 'الامتيازات المطلوبة';

$GLOBALS["lang"]['Privileges Required'] = 'الامتيازات المطلوبة';

$GLOBALS["lang"]['processor'] = 'عوامل التصنيع';

$GLOBALS["lang"]['Processor'] = 'عوامل التصنيع';

$GLOBALS["lang"]['processor_count'] = 'محاسب';

$GLOBALS["lang"]['Processor Count'] = 'محاسب';

$GLOBALS["lang"]['processor_slot_count'] = 'وحدة العمليات';

$GLOBALS["lang"]['Processor Slot Count'] = 'وحدة العمليات';

$GLOBALS["lang"]['processor_type'] = 'نوع المصنع';

$GLOBALS["lang"]['Processor Type'] = 'نوع المصنع';

$GLOBALS["lang"]['Processors'] = 'المجهزون';

$GLOBALS["lang"]['product_name'] = 'الاسم';

$GLOBALS["lang"]['Product Name'] = 'الاسم';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'اسم: ';

$GLOBALS["lang"]['products'] = 'المنتجات';

$GLOBALS["lang"]['Products'] = 'المنتجات';

$GLOBALS["lang"]['Professional'] = 'الفئة الفنية';

$GLOBALS["lang"]['profile'] = ' Profile';

$GLOBALS["lang"]['Profile'] = ' Profile';

$GLOBALS["lang"]['program'] = 'Proqram';

$GLOBALS["lang"]['Program'] = 'Proqram';

$GLOBALS["lang"]['Properties'] = 'الممتلكات';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'مناسبة إذا تريد تعديل';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'حماية السرية والنزاهة المعلومات';

$GLOBALS["lang"]['protocol'] = 'البروتوكول';

$GLOBALS["lang"]['Protocol'] = 'البروتوكول';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Müəlliflik və seçki və sona çatdırılması.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'نقدم اسماً، تأكيده بتواضع،<br/>من الاستمارة المفتوحة، قيمة <i>URI</i> الحقل و في <i>مفاعلات غير مباشرة</i> الحقل في OKTA<br/>إعادة توجيه المقطعية اختيارية، اختيارية، Open-AudIT serverləri ilə php/logout http adres, ekran başına kimi.<br/>عادة افتح سوف تبدو';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'شريطة أن لديك وثائق';

$GLOBALS["lang"]['provider'] = 'İstehsalçı';

$GLOBALS["lang"]['Provider'] = 'İstehsalçı';

$GLOBALS["lang"]['published'] = 'صادرة';

$GLOBALS["lang"]['Published'] = 'صادرة';

$GLOBALS["lang"]['published_date'] = 'التاريخ المنشور';

$GLOBALS["lang"]['Published Date'] = 'التاريخ المنشور';

$GLOBALS["lang"]['publisher'] = 'النشر';

$GLOBALS["lang"]['Publisher'] = 'النشر';

$GLOBALS["lang"]['Puerto Rico'] = 'بورتوريكو';

$GLOBALS["lang"]['Purchase'] = 'الشراء';

$GLOBALS["lang"]['purchase_amount'] = 'مبلغ الشراء';

$GLOBALS["lang"]['Purchase Amount'] = 'مبلغ الشراء';

$GLOBALS["lang"]['purchase_cost_center'] = 'مركز تكاليف المشتريات';

$GLOBALS["lang"]['Purchase Cost Center'] = 'مركز تكاليف المشتريات';

$GLOBALS["lang"]['purchase_count'] = 'عدد المشتريات';

$GLOBALS["lang"]['Purchase Count'] = 'عدد المشتريات';

$GLOBALS["lang"]['purchase_date'] = 'تاريخ الشراء';

$GLOBALS["lang"]['Purchase Date'] = 'تاريخ الشراء';

$GLOBALS["lang"]['purchase_invoice'] = 'فواتير الشراء';

$GLOBALS["lang"]['Purchase Invoice'] = 'فواتير الشراء';

$GLOBALS["lang"]['purchase_order'] = 'أمر الشراء';

$GLOBALS["lang"]['Purchase Order'] = 'أمر الشراء';

$GLOBALS["lang"]['purchase_order_number'] = 'عدد طلبات الشراء';

$GLOBALS["lang"]['Purchase Order Number'] = 'عدد طلبات الشراء';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'عدد عقود دائرة المشتريات';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'عدد عقود دائرة المشتريات';

$GLOBALS["lang"]['purchase_vendor'] = 'Satış';

$GLOBALS["lang"]['Purchase Vendor'] = 'Satış';

$GLOBALS["lang"]['purpose'] = 'الغرض';

$GLOBALS["lang"]['Purpose'] = 'الغرض';

$GLOBALS["lang"]['Qatar'] = 'قطر';

$GLOBALS["lang"]['queries'] = 'الكميات';

$GLOBALS["lang"]['Queries'] = 'الكميات';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'وتشكل الكميات جزءاً من هم ما أَنْ تَحْصلَ تَحْصلَ وبالإضافة إلى الملخصات فإنها فإنها';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Qruplar üçün proqramlar yalnız seçməlidir';

$GLOBALS["lang"]['Query'] = 'Bakı';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Bu Active Directory istifadəçilərin iş nömrəsini müəyyən etmək üçün ilk göstərir.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Bu Active Directory istifadəçilərin iş nömrəsini müəyyən etmək üçün ikinci tapın.';

$GLOBALS["lang"]['queue'] = 'Bakı';

$GLOBALS["lang"]['Queue'] = 'Bakı';

$GLOBALS["lang"]['Queue Limit'] = 'Qalereya';

$GLOBALS["lang"]['Queued Device Audits'] = 'عمليات مراجعة المتعلقة بالنواحي';

$GLOBALS["lang"]['Queued IP Scans'] = 'Proqramlar';

$GLOBALS["lang"]['Queued Items'] = 'البنود المحددة';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'Aktiv Direktor üçün RBAC';

$GLOBALS["lang"]['RU Start'] = 'RU Başlamaq';

$GLOBALS["lang"]['RX Bitrate'] = 'Elan';

$GLOBALS["lang"]['RX Freq'] = 'Qalereya';

$GLOBALS["lang"]['RX Level'] = 'الرتبة RX';

$GLOBALS["lang"]['RX Power'] = 'Yadda saxla';

$GLOBALS["lang"]['RX Profile'] = ' RX';

$GLOBALS["lang"]['Rack'] = 'Qalereya';

$GLOBALS["lang"]['rack_devices'] = 'أجهزة الطرد';

$GLOBALS["lang"]['Rack Devices'] = 'أجهزة الطرد';

$GLOBALS["lang"]['rack_id'] = 'Qeyd';

$GLOBALS["lang"]['Rack ID'] = 'Qeyd';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'إدارة النفايات والإبلاغ عنها';

$GLOBALS["lang"]['Racks'] = 'Qalereya';

$GLOBALS["lang"]['racks'] = 'Qalereya';

$GLOBALS["lang"]['radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio MAC'] = 'Televiziya';

$GLOBALS["lang"]['rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['Rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['raw'] = 'راو';

$GLOBALS["lang"]['Raw'] = 'راو';

$GLOBALS["lang"]['read'] = 'اقرأ';

$GLOBALS["lang"]['Read'] = 'اقرأ';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'إقرأ وثائقنا على عن';

$GLOBALS["lang"]['Read through the log file at'] = 'اقرأ من ملف السجل';

$GLOBALS["lang"]['Received'] = 'وردت';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'لقد طُرح علينا مؤخراً مؤخراً مؤخراً هل فتح فتح البرامج البرامج البرامج البرامج البرامج هو هو هو هو هو هو هو هو هو الحال الحال الحال <i>يعتمد</i>.<br/><br/>مفتوح ويمكن تكنولوجيا المعلومات لكن كالعادة مع الحاسبي <i>الحاسوب الأكثر هو واحد<i> يخطر على بالي<br/><br/>وسنعرض أدناه يمكن التي التي وهذه خيارات إلزامية، شأنها شأنها إلى أي مدى الأمن</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'التصديق: مطلوب كل ثلاث';

$GLOBALS["lang"]['Red Query'] = 'الصالة الحمراء';

$GLOBALS["lang"]['Redirect URI'] = 'URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'الحد من مخاطر البيانات';

$GLOBALS["lang"]['references'] = 'المراجع';

$GLOBALS["lang"]['References'] = 'المراجع';

$GLOBALS["lang"]['region'] = 'المنطقة';

$GLOBALS["lang"]['Region'] = 'المنطقة';

$GLOBALS["lang"]['registered_user'] = 'المستعمل المسجل';

$GLOBALS["lang"]['Registered User'] = 'المستعمل المسجل';

$GLOBALS["lang"]['Rejected'] = ' Re';

$GLOBALS["lang"]['rel'] = ' Re';

$GLOBALS["lang"]['Rel'] = ' Re';

$GLOBALS["lang"]['Release'] = 'الإصدار';

$GLOBALS["lang"]['remediation'] = 'الإصلاح';

$GLOBALS["lang"]['Remediation'] = 'الإصلاح';

$GLOBALS["lang"]['Remote'] = 'Daxil ol';

$GLOBALS["lang"]['remote_address'] = 'العنوان عن بعد';

$GLOBALS["lang"]['Remote Address'] = 'العنوان عن بعد';

$GLOBALS["lang"]['remote_port'] = 'Daxili Port';

$GLOBALS["lang"]['Remote Port'] = 'Daxili Port';

$GLOBALS["lang"]['Remove'] = 'إزالة الألغام';

$GLOBALS["lang"]['Remove Exception'] = 'استثناءات إزالة الألغام';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'أكرر حتى تكتشف تماماً';

$GLOBALS["lang"]['Report'] = 'التقرير';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Sizin cihazlarınız, şəhərlər və daha çox';

$GLOBALS["lang"]['reportable'] = 'التقارير';

$GLOBALS["lang"]['Reportable'] = 'التقارير';

$GLOBALS["lang"]['Reports'] = 'التقارير';

$GLOBALS["lang"]['request'] = 'الطلب';

$GLOBALS["lang"]['Request'] = 'الطلب';

$GLOBALS["lang"]['Request Method'] = 'الطلب';

$GLOBALS["lang"]['Request Vulnerability'] = 'الطلب';

$GLOBALS["lang"]['Request a Specific CVE'] = 'طلب محدد';

$GLOBALS["lang"]['requested'] = 'الطلب';

$GLOBALS["lang"]['Requested'] = 'الطلب';

$GLOBALS["lang"]['require_port'] = 'ميناء الطلب';

$GLOBALS["lang"]['Require Port'] = 'ميناء الطلب';

$GLOBALS["lang"]['Require an Open Port'] = 'طلب ميناء مفتوح';

$GLOBALS["lang"]['Required'] = 'المطلوب';

$GLOBALS["lang"]['Required AWS user permissions'] = 'التصاريح المطلوبة للمستعملين';

$GLOBALS["lang"]['Required Fields'] = 'المجالات المطلوبة';

$GLOBALS["lang"]['Reset'] = 'إعادة التوطين';

$GLOBALS["lang"]['Reset All Data'] = 'إعادة صياغة جميع البيانات';

$GLOBALS["lang"]['Reset to Default'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['resource'] = 'الموارد';

$GLOBALS["lang"]['Resource'] = 'الموارد';

$GLOBALS["lang"]['Resource Name'] = 'اسم الموارد';

$GLOBALS["lang"]['Resources'] = 'الموارد';

$GLOBALS["lang"]['response'] = 'الرد';

$GLOBALS["lang"]['Response'] = 'الرد';

$GLOBALS["lang"]['responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Restore my Licenses'] = 'أعيدوا منحني';

$GLOBALS["lang"]['Restrict to Private'] = 'Respublika';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Subnetektiv';

$GLOBALS["lang"]['result'] = 'النتيجة';

$GLOBALS["lang"]['Result'] = 'النتيجة';

$GLOBALS["lang"]['Resulting Function'] = 'المهمة الناشئة';

$GLOBALS["lang"]['Results'] = 'النتائج';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'استرجاع قائمة الأجهزة في';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Windows 2008 kimi OS Adı ilə cihazlar siyahısı';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'إسترجعْ كُلّ التفاصيل الجهازِ الجهازِ';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'إسترجع جميع الأجهزة';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'استرجاع جميع مع الأعمدة';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'استرجاع أول أول تعمل في في في المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف أول أول أول المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف في في في في المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف المضيف';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'استرجاع الممتلكات من الأجهزة';

$GLOBALS["lang"]['retrieved'] = 'Bakı';

$GLOBALS["lang"]['Retrieved'] = 'Bakı';

$GLOBALS["lang"]['retrieved_ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['Retrieved Ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['retrieved_name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved Name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = ' Retrieve:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_ profiler, ESXi:vim-cmd hostvc/hostsummary, HPUX-:machinfo, سولاري: سمبيوس، AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'استرداد قائمة وثائق التفويض';

$GLOBALS["lang"]['Retrieving or Creating'] = 'الاسترجاع أو الإبداع';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'إعادة مجموعة تحتوي التي التي';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'أعد قائمة الوحدات التي';

$GLOBALS["lang"]['Return an individual device\\'] = 'أعد جهازاً فردياً';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'قائمة قائمة {colection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'يعيد التفاصيل';

$GLOBALS["lang"]['Reunion'] = 'الشمل';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001 tərəfindən cari proqramlar';

$GLOBALS["lang"]['revision'] = 'التنقيح';

$GLOBALS["lang"]['Revision'] = 'التنقيح';

$GLOBALS["lang"]['risk_assesment_result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['Risk Assesment Result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'تقييم المخاطر';

$GLOBALS["lang"]['Risk Management'] = 'إدارة المخاطر';

$GLOBALS["lang"]['Role'] = 'الدور';

$GLOBALS["lang"]['roles'] = 'الأدوار';

$GLOBALS["lang"]['Roles'] = 'الأدوار';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'الأدوار يمكن خلقها فقط فقط';

$GLOBALS["lang"]['Romania'] = 'رومانيا';

$GLOBALS["lang"]['Romanian'] = 'رومانيا';

$GLOBALS["lang"]['Room'] = 'غرفة الاجتماعات';

$GLOBALS["lang"]['route'] = 'الطريق';

$GLOBALS["lang"]['Route'] = 'الطريق';

$GLOBALS["lang"]['Row'] = 'Bakı';

$GLOBALS["lang"]['Row Count'] = 'الكونت';

$GLOBALS["lang"]['row_position'] = 'نقطة الصفر';

$GLOBALS["lang"]['Row Position'] = 'نقطة الصفر';

$GLOBALS["lang"]['Rows'] = 'Qalereya';

$GLOBALS["lang"]['ru_height'] = 'Qalereya';

$GLOBALS["lang"]['Ru Height'] = 'Qalereya';

$GLOBALS["lang"]['ru_start'] = 'ابدأ';

$GLOBALS["lang"]['Ru Start'] = 'ابدأ';

$GLOBALS["lang"]['rule_group'] = 'مجموعة القواعد';

$GLOBALS["lang"]['Rule Group'] = 'مجموعة القواعد';

$GLOBALS["lang"]['rules'] = 'القواعد';

$GLOBALS["lang"]['Rules'] = 'القواعد';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'وتوضع القواعد ضد جهاز جهاز ويمكن استخدام لوضع عزو<br/><br/>ملاحظة لا لا الوقت الوقت الوقت مدخلات مدخلات مدخلات يتضمن يتضمن يتضمن يتضمن يتضمن يتضمن السبب في في في في في في في في أن أن كجزء كجزء كجزء كجزء كجزء كجزء كجزء كجزء كجزء من من من من من من والغرض من هو حذف حذف ومن حسن الحظ المدخلات المدخلات';

$GLOBALS["lang"]['Run Discovery'] = 'تشغيل الاكتشاف';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'تشغيل الكشف عن الأجهزة';

$GLOBALS["lang"]['Run Your Discovery'] = 'أديروا جهاز كشفكم';

$GLOBALS["lang"]['Run a Command'] = 'أدير القيادة';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'ابحثوا عن اكتشاف واكتشفوا <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'تشغيل السيناريو بالطباعة <code>cscript test_windows_client.vbs</code> في النقابة';

$GLOBALS["lang"]['Run this Command'] = 'أدير هذه القيادة';

$GLOBALS["lang"]['runas'] = 'Daxil ol';

$GLOBALS["lang"]['Runas'] = 'Daxil ol';

$GLOBALS["lang"]['Running'] = 'تشغيل';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'إدارة خدمات  Apache النوافذ النوافذ النوافذ';

$GLOBALS["lang"]['Russian'] = 'الروسية';

$GLOBALS["lang"]['Russian Federation'] = 'الاتحاد الروسي';

$GLOBALS["lang"]['Rwanda'] = 'رواندا';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'الرتبة';

$GLOBALS["lang"]['Rx Level'] = 'الرتبة';

$GLOBALS["lang"]['rx_power'] = 'Rx gücü';

$GLOBALS["lang"]['Rx Power'] = 'Rx gücü';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profili';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profili';

$GLOBALS["lang"]['SAN Audit'] = 'E-poçt';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

$GLOBALS["lang"]['SELECT'] = 'Qeydiyyat';

$GLOBALS["lang"]['SID'] = 'Qalereya';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1/ v2)';

$GLOBALS["lang"]['SNMP Details'] = ' SN';

$GLOBALS["lang"]['SNMP OID'] = 'Qalereya';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'V3';

$GLOBALS["lang"]['SQL'] = 'Qeydiyyat';

$GLOBALS["lang"]['SQL (Advanced)'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL yaradılması məlumatları';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'Bu xidmət edən SQL, widget-da icra olunacaq.';

$GLOBALS["lang"]['SSH'] = 'Qalereya';

$GLOBALS["lang"]['SSH Key'] = 'SSH المفتاح';

$GLOBALS["lang"]['SW Revision'] = ' SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'القديس برثيمي';

$GLOBALS["lang"]['Saint Helena'] = 'سانت هيلانة';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'سانت كيتس ونيفيس';

$GLOBALS["lang"]['Saint Lucia'] = 'سانت لوسيا';

$GLOBALS["lang"]['Saint Martin'] = 'سانت مارتن';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'سانت بيير وميكلون';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'سانت فنسنت وجزر غرينادين';

$GLOBALS["lang"]['Samoa'] = 'ساموا';

$GLOBALS["lang"]['san'] = 'سان';

$GLOBALS["lang"]['San'] = 'سان';

$GLOBALS["lang"]['San Marino'] = 'سان مارينو';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'سان تومي وبرينسيبي';

$GLOBALS["lang"]['Saturday'] = 'السبت';

$GLOBALS["lang"]['Saudi Arabia'] = 'العربية السعودية';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'أنقذي من من تأكد تأكد';

$GLOBALS["lang"]['Save as Default'] = 'انقذوا المكان';

$GLOBALS["lang"]['Save the downloaded file.'] = 'أنقذ الملف المحمل';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan Options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan Options ID'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Bu port(s) üçün Scan və açıqlanmışsa, SSH əlaqə üçün bu port istifadə edin. Bu, üzərində xüsusi TCP Ports siyahısına əlavə edilir (hər əvvəl daxil deyil), bu siyahısı da daxil etmək lazım deyil. لا يوجد مكان';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'مسح أعلى عدد موانئ';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'قوموا بمسح عدد من';

$GLOBALS["lang"]['schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['Schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'ويجعل اكتشاف الأجهزة والإبلاغ والإبلاغ';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - məlumat, "daha çox';

$GLOBALS["lang"]['scope'] = 'النطاق';

$GLOBALS["lang"]['Scope'] = 'النطاق';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'ويُعرف النطاق مما الترخيص، الترخيص،<br/><br/>القيمتان الوحيدتان الصحيحتان الصفة';

$GLOBALS["lang"]['script_timeout'] = 'الوقت المحدد';

$GLOBALS["lang"]['Script Timeout'] = 'الوقت المحدد';

$GLOBALS["lang"]['scripts'] = 'Elanlar';

$GLOBALS["lang"]['Scripts'] = 'Elanlar';

$GLOBALS["lang"]['scsi'] = 'Qalereya';

$GLOBALS["lang"]['Scsi'] = 'Qalereya';

$GLOBALS["lang"]['scsi_bus'] = 'Qalereya';

$GLOBALS["lang"]['Scsi Bus'] = 'Qalereya';

$GLOBALS["lang"]['scsi_logical_unit'] = 'الوحدة المحلية';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'الوحدة المحلية';

$GLOBALS["lang"]['scsi_port'] = 'Qalereya';

$GLOBALS["lang"]['Scsi Port'] = 'Qalereya';

$GLOBALS["lang"]['Search'] = 'البحث';

$GLOBALS["lang"]['Search For a Device'] = 'ابحث عن جهاز';

$GLOBALS["lang"]['Searching Using DataTables'] = 'البحث عن استخدام البيانات';

$GLOBALS["lang"]['Second'] = 'الثانية';

$GLOBALS["lang"]['secondary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Secondary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Secondary Text'] = 'النص الثانوي';

$GLOBALS["lang"]['Secret Key'] = 'المفتاح السري';

$GLOBALS["lang"]['section'] = 'الباب';

$GLOBALS["lang"]['Section'] = 'الباب';

$GLOBALS["lang"]['secure'] = 'الضمان';

$GLOBALS["lang"]['Secure'] = 'الضمان';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'بروتوكول آلية المضمون الأمني';

$GLOBALS["lang"]['Security Level'] = 'المستوى الأمني';

$GLOBALS["lang"]['Security Name'] = 'الاسم الأمني';

$GLOBALS["lang"]['Security Status'] = 'الحالة الأمنية';

$GLOBALS["lang"]['security_zone'] = 'المنطقة الأمنية';

$GLOBALS["lang"]['Security Zone'] = 'المنطقة الأمنية';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'انظر أعلاه. ملاحظة يمكن ذلك يكون ذلك ذلك ذلك موقّعة موقّعة العمل العمل العمل العمل العمل العمل العمل العمل العمل ونحن نعمل السماح بذلك';

$GLOBALS["lang"]['See our page on enabling'] = 'انظر صفحتنا للتمكين';

$GLOBALS["lang"]['Seed Discoveries'] = 'الكشف عن البذور';

$GLOBALS["lang"]['seed_ip'] = 'البذور IP';

$GLOBALS["lang"]['Seed IP'] = 'البذور IP';

$GLOBALS["lang"]['seed_ping'] = 'البذور';

$GLOBALS["lang"]['Seed Ping'] = 'البذور';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'إعادة تصدير إلى القطاع';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'إعادة تصدير إلى القطاع';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Subnet';

$GLOBALS["lang"]['Select'] = 'مختارة';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'اختيار ادمين المهام مهمة من القائمة القائمة';

$GLOBALS["lang"]['Select All'] = 'بيع';

$GLOBALS["lang"]['Select All Devices'] = 'اختيار جميع الأجهزة';

$GLOBALS["lang"]['select_external_attribute'] = 'Retribute';

$GLOBALS["lang"]['Select External Attribute'] = 'Retribute';

$GLOBALS["lang"]['select_external_count'] = 'Xarici sayı seç';

$GLOBALS["lang"]['Select External Count'] = 'Xarici sayı seç';

$GLOBALS["lang"]['select_external_type'] = 'المهن الخارجية النوع';

$GLOBALS["lang"]['Select External Type'] = 'المهن الخارجية النوع';

$GLOBALS["lang"]['select_external_value'] = 'المهن الخارجية القيمة';

$GLOBALS["lang"]['Select External Value'] = 'المهن الخارجية القيمة';

$GLOBALS["lang"]['select_internal_attribute'] = 'Retribute';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Retribute';

$GLOBALS["lang"]['select_internal_count'] = 'اختيار العد الداخلي';

$GLOBALS["lang"]['Select Internal Count'] = 'اختيار العد الداخلي';

$GLOBALS["lang"]['select_internal_type'] = 'المهنة الداخلية النوع';

$GLOBALS["lang"]['Select Internal Type'] = 'المهنة الداخلية النوع';

$GLOBALS["lang"]['select_internal_value'] = 'المهنة الداخلية القيمة';

$GLOBALS["lang"]['Select Internal Value'] = 'المهنة الداخلية القيمة';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'اختيار مينو';

$GLOBALS["lang"]['Select a Table'] = 'اختيار الجدول';

$GLOBALS["lang"]['Select an accredited certification body'] = 'اختيار هيئة اعتماد معتمدة';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'اختيار وتطبيق الضوابط المناسبة';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'اختيار <i>هيا الأمن</i> tab<br/><br/>Access Permission Proqram';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'اختيار <i>التوقيع</i> حساب ونسخ القيمة <i>Tarix</i> (فقط URL نفسه). إستعير هذا إلى مفتوح <i>Tarix</i> الحقل.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'اختيار <i>هذا الحساب</i> صندوق الشيكات ووفر الحساب';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'اختيار قائمة البداية ونوعها <i>الخدمات. اضغطي على رمز الخدمات</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'اختيار نوع';

$GLOBALS["lang"]['Self Delete'] = 'التسمية الذاتية';

$GLOBALS["lang"]['Senegal'] = 'السنغال';

$GLOBALS["lang"]['sensitivity'] = 'الوعي';

$GLOBALS["lang"]['Sensitivity'] = 'الوعي';

$GLOBALS["lang"]['September'] = 'أيلول/سبتمبر';

$GLOBALS["lang"]['Serbia'] = 'صربيا';

$GLOBALS["lang"]['serial'] = 'الخدمات';

$GLOBALS["lang"]['Serial'] = 'الخدمات';

$GLOBALS["lang"]['serial_imei'] = 'Qeydiyyat';

$GLOBALS["lang"]['Serial Imei'] = 'Qeydiyyat';

$GLOBALS["lang"]['serial_sim'] = 'Qeydiyyat';

$GLOBALS["lang"]['Serial Sim'] = 'Qeydiyyat';

$GLOBALS["lang"]['series'] = 'سلسلة';

$GLOBALS["lang"]['Series'] = 'سلسلة';

$GLOBALS["lang"]['server'] = 'سيرفر';

$GLOBALS["lang"]['Server'] = 'سيرفر';

$GLOBALS["lang"]['server_id'] = 'هوية السيرفر';

$GLOBALS["lang"]['Server ID'] = 'هوية السيرفر';

$GLOBALS["lang"]['Server Is'] = 'الخادم';

$GLOBALS["lang"]['server_item'] = 'البند';

$GLOBALS["lang"]['Server Item'] = 'البند';

$GLOBALS["lang"]['Server Status'] = 'مركز الموظفين';

$GLOBALS["lang"]['Servers'] = 'خادم';

$GLOBALS["lang"]['Servers Only'] = 'الخادم فقط';

$GLOBALS["lang"]['service'] = 'الخدمات';

$GLOBALS["lang"]['Service'] = 'الخدمات';

$GLOBALS["lang"]['service_identifier'] = 'تحديد هوية الخدمة';

$GLOBALS["lang"]['Service Identifier'] = 'تحديد هوية الخدمة';

$GLOBALS["lang"]['service_level_a'] = 'الرتبة ألف';

$GLOBALS["lang"]['Service Level A'] = 'الرتبة ألف';

$GLOBALS["lang"]['service_level_b'] = 'الرتبة باء';

$GLOBALS["lang"]['Service Level B'] = 'الرتبة باء';

$GLOBALS["lang"]['service_network'] = 'شبكة الخدمات';

$GLOBALS["lang"]['Service Network'] = 'شبكة الخدمات';

$GLOBALS["lang"]['service_number'] = 'الخدمة';

$GLOBALS["lang"]['Service Number'] = 'الخدمة';

$GLOBALS["lang"]['service_pack'] = 'فئة الخدمات العامة';

$GLOBALS["lang"]['Service Pack'] = 'فئة الخدمات العامة';

$GLOBALS["lang"]['service_plan'] = 'خطة الخدمة';

$GLOBALS["lang"]['Service Plan'] = 'خطة الخدمة';

$GLOBALS["lang"]['service_provider'] = 'مقدم الخدمات';

$GLOBALS["lang"]['Service Provider'] = 'مقدم الخدمات';

$GLOBALS["lang"]['service_tag'] = 'الخدمة';

$GLOBALS["lang"]['Service Tag'] = 'الخدمة';

$GLOBALS["lang"]['service_type'] = 'نوع الخدمة';

$GLOBALS["lang"]['Service Type'] = 'نوع الخدمة';

$GLOBALS["lang"]['Service Under Windows'] = 'الخدمة تحت النوافذ';

$GLOBALS["lang"]['service_version'] = 'الخدمات';

$GLOBALS["lang"]['Service Version'] = 'الخدمات';

$GLOBALS["lang"]['Set'] = 'المجموعة';

$GLOBALS["lang"]['set_by'] = 'حدد';

$GLOBALS["lang"]['Set By'] = 'حدد';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'تحديد وظيفة - لا تضع عادة هذا يدويا';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'يحددها مراجع - أو يكتشف - النصوص الرئيسية لا تستعد';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'وضع النص الخارجي المرسملة';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'وضع النص الخارجي';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'ضع النص الخارجي الأعلى';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'تحديد حجم الجداول شاشات شاشات';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'ضع هذا إذا ترغب ترغب';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'إنشاء ديسكفري ديسكفري على شبكة شبكة شبكة مع واجهة واجهة الإنترنت واجهة واجهة واجهة هي هي هي هي هي هي هي هي هي هي هي الساعة هي هي هي الساعة الساعة الساعة الساعة الساعة الساعة الساعة المقررة يمكنك الاستفادة هذا لتحديد<br/><br/>Subnet Discovery-da olduğu kimi, Active Directory Discovery bir gün, saat(s) və adı daxil olan normal Active Directory Discovery kimi eyni sahələrdir.<br/><br/>Open-AudIT Server\'ın buraxdığı kollektorlar varsa, əlavə bir damla verilir. يمكنك اختيار لتحديد أي ولا يُدعم سوى الاكتشاف يرجى تحديد نفس التي التي';

$GLOBALS["lang"]['severity'] = 'الشدة';

$GLOBALS["lang"]['Severity'] = 'الشدة';

$GLOBALS["lang"]['severity_text'] = 'نص الشدة';

$GLOBALS["lang"]['Severity Text'] = 'نص الشدة';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'الشدة محسوبة من <code>base_score</code> ويمكن أن يكون من من لا لا منخفض، متوسط، متوسط، مرتفع، حرج حرج.';

$GLOBALS["lang"]['Seychelles'] = 'سيشيل';

$GLOBALS["lang"]['share'] = ' Share';

$GLOBALS["lang"]['Share'] = ' Share';

$GLOBALS["lang"]['Share Name'] = 'Yadda saxla';

$GLOBALS["lang"]['shared'] = 'Axtarış';

$GLOBALS["lang"]['Shared'] = 'Axtarış';

$GLOBALS["lang"]['shared_name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['Shared Name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['shell'] = 'Avtomobil';

$GLOBALS["lang"]['Shell'] = 'Avtomobil';

$GLOBALS["lang"]['Ship Date'] = 'السفينة';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'الشحنة هي مجموعة المواد هذه يمكن عليها بالذهاب';

$GLOBALS["lang"]['short'] = 'قصير';

$GLOBALS["lang"]['Short'] = 'قصير';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'هل يجب أزيل جميع';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'إذا استخدم الملف الملف عادة، لملفات الحسابات، هذا <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'إذا استخدم البائع عند';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'يجب أن أجهزة من';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'هل يجب نطبق نطبق هذه';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'هل يجب نراجع شبكة شبكة شبكة شبكة شبكة برنامج برنامج برنامج.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'يجب أن نراجع النقاط';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'يجب أن نراجع المكتبات المكتبات';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'يجب أن نراجع البرنامج';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب مليئاً ميناءاً ميناءاً مليئاً';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب نعتبر الميناء الميناء';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'يجب أن اسم المضيف';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'ينبغي أن ملفاً يستند';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'يجب أن هذه المجموعة';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'هل ينبغي الاستفسار هذا هذا';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'يجب أن هذا السؤال';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'يجب أن نخفي السيناريو';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'يجب أن صحيحة غير غير';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'يجب علينا أن على';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'هل يجب نطابق عنواناً';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'يجب أن نطابق مبنياً';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'يجب أن جهازاً بناءً';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'يجب أن نطابق مبنياً مبنياً';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'يجب أن نطابق مبنياً';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'يجب أن نطابق مبنياً';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'يجب أن جهازاً مبنياً';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'يجب أن جهازاً مبنياً';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'يجب أن جهازاً بناءً';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'إذا كان لدينا قائم';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'يجب أن نطابق مبنياً';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'يجب أن جهازاً على';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'يجب أن جهازاً على';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'يجب أن جهاز بناء';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'يجب أن جهازاً مبنياً مبنياً';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'يجب أن جهازاً مبنياً';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'يجب أن جهازاً مبنياً';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'هل يجب على على على';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'يجب أن النظام الخارجي';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'هل يجب نستعيد جميع';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'ينبغي أن نجري للحسابات للحسابات';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'يجب أن نختبر';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'يجب أن نختبر SSH باستخدام ميناء TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'يجب أن لـ لـ (وام) باستخدام ميناء (تي سي) 135';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'هل يجب أن الوكيل';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'هل ينبغي أن نستخدم نستخدم';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'هل ينبغي أن صف صف إنتاج إنتاج إنتاج إنتاج إنتاج إنتاج به البرمجيات البرمجيات البرمجيات البرمجيات البرمجيات البرمجيات';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن هذه الطريقة <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن هذه الطريقة <code>use_auth</code> يجب أن تكون جاهزة <code>y</code> لاستخدام هذا. مجموعة إلى <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'يجب أن نستخدم القيمة القيمة لمطابقة';

$GLOBALS["lang"]['Show All'] = 'عرض';

$GLOBALS["lang"]['sid'] = 'سيد';

$GLOBALS["lang"]['Sid'] = 'سيد';

$GLOBALS["lang"]['sidebar'] = ' Side';

$GLOBALS["lang"]['Sidebar'] = ' Side';

$GLOBALS["lang"]['Sierra Leone'] = 'سيراليون';

$GLOBALS["lang"]['Singapore'] = 'سنغافورة';

$GLOBALS["lang"]['Site A'] = 'الموقع ألف';

$GLOBALS["lang"]['Site B'] = 'الموقع باء';

$GLOBALS["lang"]['site_hours_a'] = 'Axtarış Saatları';

$GLOBALS["lang"]['Site Hours A'] = 'Axtarış Saatları';

$GLOBALS["lang"]['site_hours_b'] = 'Site Saatları B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Saatları B';

$GLOBALS["lang"]['size'] = 'الحجم';

$GLOBALS["lang"]['Size'] = 'الحجم';

$GLOBALS["lang"]['slaves'] = 'الرقيق';

$GLOBALS["lang"]['Slaves'] = 'الرقيق';

$GLOBALS["lang"]['Slovak'] = 'سلوفاكيا';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'سلوفاكيا (جمهورية سلوفاكيا)';

$GLOBALS["lang"]['Slovenia'] = 'سلوفينيا';

$GLOBALS["lang"]['Slovenian'] = 'سلوفينيا(ن)';

$GLOBALS["lang"]['Smart Status'] = 'الحالة الذكية';

$GLOBALS["lang"]['smversion'] = 'التحويل';

$GLOBALS["lang"]['Smversion'] = 'التحويل';

$GLOBALS["lang"]['Sneaky'] = 'Qalereya';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Yadda saxla';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Yadda saxla';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'اسم المؤسسة';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'اسم المؤسسة';

$GLOBALS["lang"]['snmp_oid'] = 'Daxil ol';

$GLOBALS["lang"]['Snmp Oid'] = 'Daxil ol';

$GLOBALS["lang"]['snmp_timeout'] = 'وقت النوم';

$GLOBALS["lang"]['Snmp Timeout'] = 'وقت النوم';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'إذاً السيناريو لا على على تشغيل النص باستخدام الخيار الخيار المحدد المحدد أن أن أن جزء جزء جزء جزء من من من من من من الفشل الفشل الفشل الفشل الفشل الفشل الفشل. على سبيل المثال';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'بغض النظر عن كلمة عادية، عادية، هناك هناك هناك هناك سألت لأنك سألت سألت سألت وفقاً وفقاً وفقاً وفقاً المسمى المسمى لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا لدينا المشغلين للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية للتصفية. المشغلون الذين أن يسبقوا';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'إذاً لديك قضية وثائق وثائق تفويض تفويض أجهزةك أجهزةك لدي لدي تفعل تفعل تفعل ذلك ذلك هو هو هو هو هو هو هو هو هو هو هو هو هو هو هو أفضل هو هو أفضل أفضل أفضل أفضل هو هو أفضل أفضل أفضل المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع المقطع. لا تحتاج معرفة قبل <i>ما على شبكتك</i>. ولكن كيف استخراج البيانات<br/><br/>وفي حالة الخيارات أحد أحد المزيد من التفاصيل سترسل الآلات على إلى الجدول، الجدول، كما كما كما يدير يدير يدير يدير يدير يدير الحسابات الحسابات الحسابات الحسابات على على على على على على على يمكنك ولا توجد وثائق على<br/><br/>والآن عملاء لـ لـ';

$GLOBALS["lang"]['socket'] = 'Daxil ol';

$GLOBALS["lang"]['Socket'] = 'Daxil ol';

$GLOBALS["lang"]['software'] = 'البرمجيات';

$GLOBALS["lang"]['Software'] = 'البرمجيات';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'البرمجيات وجدت آخر 7 أيام';

$GLOBALS["lang"]['Software Found Today'] = 'البرمجيات وجدت اليوم';

$GLOBALS["lang"]['Software Found Yesterday'] = 'البرمجيات وجدت أمس';

$GLOBALS["lang"]['software_key'] = 'مفتاح البرامجيات';

$GLOBALS["lang"]['Software Key'] = 'مفتاح البرامجيات';

$GLOBALS["lang"]['Software License Reporting'] = 'الإبلاغ عن البرمجيات';

$GLOBALS["lang"]['software_name'] = 'اسم البرمجيات';

$GLOBALS["lang"]['Software Name'] = 'اسم البرمجيات';

$GLOBALS["lang"]['Software Policies'] = 'سياسات البرامجيات';

$GLOBALS["lang"]['software_revision'] = 'تنقيح البرامجيات';

$GLOBALS["lang"]['Software Revision'] = 'تنقيح البرامجيات';

$GLOBALS["lang"]['software_version'] = 'البرمجيات';

$GLOBALS["lang"]['Software Version'] = 'البرمجيات';

$GLOBALS["lang"]['Solaris'] = 'Bakı';

$GLOBALS["lang"]['Solomon Islands'] = 'جزر سليمان';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'الصومال، الجمهورية الصومالية';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'ويمكن تنفيذ بعض المجموعات - الاستفسارات وما إلى ذلك - انظر أدناه.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'وتوجد بعض الأمثلة أسفل ولدى جميع النهائية أيضا هذه أسفل.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'بعض نماذجنا إلى الجديد';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'وحدث خطأ عند محاولة يمكن الاتصال به <i>الاتصال</i> وقد نجح أعلاه، ولكن تحقق من على خادم';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'هناك خطب فتح الباب <i>الأورام</i> طاولة';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'هناك خطب فتح الباب <i>الأدوار</i> طاولة';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'أحياناً اكتشاف العميل يناسب عِنْدَهُ جدرانُ حريقُ ضيقةُ ربما ليسوا على عندما عندما وضعه على آلة وسوف <i>الدخول</i> مع خادمك زمني جدول جدول';

$GLOBALS["lang"]['Sort'] = '»';

$GLOBALS["lang"]['sound'] = 'الصوت';

$GLOBALS["lang"]['Sound'] = 'الصوت';

$GLOBALS["lang"]['source'] = 'المصدر';

$GLOBALS["lang"]['Source'] = 'المصدر';

$GLOBALS["lang"]['South Africa'] = 'جنوب أفريقيا';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'جنوب جورجيا وجزر الجنوبية';

$GLOBALS["lang"]['Spain'] = 'إسبانيا';

$GLOBALS["lang"]['Spanish'] = 'الإسبانية';

$GLOBALS["lang"]['Specific to Azure.'] = 'بالتحديد (أزور)';

$GLOBALS["lang"]['Specific to OKTA.'] = 'محدد (أوكتا)';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'يحدد قائمة للأهداف للأهداف القائمة التي بها بها';

$GLOBALS["lang"]['speed'] = 'السرعة';

$GLOBALS["lang"]['Speed'] = 'السرعة';

$GLOBALS["lang"]['speed_down_a'] = 'السرعة ألف';

$GLOBALS["lang"]['Speed Down A'] = 'السرعة ألف';

$GLOBALS["lang"]['speed_down_b'] = 'السرعة باء';

$GLOBALS["lang"]['Speed Down B'] = 'السرعة باء';

$GLOBALS["lang"]['speed_up_a'] = 'السرعة';

$GLOBALS["lang"]['Speed Up A'] = 'السرعة';

$GLOBALS["lang"]['speed_up_b'] = 'السرعة باء';

$GLOBALS["lang"]['Speed Up B'] = 'السرعة باء';

$GLOBALS["lang"]['sql'] = ' S';

$GLOBALS["lang"]['Sql'] = ' S';

$GLOBALS["lang"]['Sri Lanka'] = 'سري لانكا';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'وقت مستقطع';

$GLOBALS["lang"]['Ssh Timeout'] = 'وقت مستقطع';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'المرحلة 1: استعراض الوثائق';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'المرحلة 2: استعراض التنفيذ والفعالية';

$GLOBALS["lang"]['Stand-Alone'] = 'قفوا';

$GLOBALS["lang"]['Standard'] = 'المعيار';

$GLOBALS["lang"]['standard_id'] = 'الهوية القياسية';

$GLOBALS["lang"]['Standard ID'] = 'الهوية القياسية';

$GLOBALS["lang"]['standards'] = 'المعايير';

$GLOBALS["lang"]['Standards'] = 'المعايير';

$GLOBALS["lang"]['standards_policies'] = 'السياسات';

$GLOBALS["lang"]['Standards Policies'] = 'السياسات';

$GLOBALS["lang"]['standards_results'] = 'ألف - النتائج';

$GLOBALS["lang"]['Standards Results'] = 'ألف - النتائج';

$GLOBALS["lang"]['start_date'] = 'ابدأ';

$GLOBALS["lang"]['Start Date'] = 'ابدأ';

$GLOBALS["lang"]['start_mode'] = 'ابدأي';

$GLOBALS["lang"]['Start Mode'] = 'ابدأي';

$GLOBALS["lang"]['Start a web browser and go to'] = 'إبدأْ مصففَ الإنترنتَ إلى';

$GLOBALS["lang"]['started_date'] = 'بدأت';

$GLOBALS["lang"]['Started Date'] = 'بدأت';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'ابتداء من حزيران/يونيه 2018 وقد نفذت شركة E-poçt ünvanı وفي السابق، يمكن المستعملين المستعملين سياسة غوغلز الجديدة هنا';

$GLOBALS["lang"]['Starts With'] = 'يبدأ مع';

$GLOBALS["lang"]['state'] = 'الدولة';

$GLOBALS["lang"]['State'] = 'الدولة';

$GLOBALS["lang"]['Stats'] = 'Statistika';

$GLOBALS["lang"]['status'] = 'الحالة';

$GLOBALS["lang"]['Status'] = 'الحالة';

$GLOBALS["lang"]['Storage'] = 'التخزين';

$GLOBALS["lang"]['storage_count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage Count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage area network'] = 'شبكة منطقة التخزين';

$GLOBALS["lang"]['Storage-Area Network'] = 'شبكة - آريا';

$GLOBALS["lang"]['string'] = 'Axtarış';

$GLOBALS["lang"]['String'] = 'Axtarış';

$GLOBALS["lang"]['sub_resource_id'] = 'Əməkdaşlıq';

$GLOBALS["lang"]['Sub Resource ID'] = 'Əməkdaşlıq';

$GLOBALS["lang"]['sub_type'] = 'النوع الفرعي';

$GLOBALS["lang"]['Sub Type'] = 'النوع الفرعي';

$GLOBALS["lang"]['subject_key_ident'] = 'الموضوع الرئيسي';

$GLOBALS["lang"]['Subject Key Ident'] = 'الموضوع الرئيسي';

$GLOBALS["lang"]['Submit'] = 'Daxil ol';

$GLOBALS["lang"]['Submit Online'] = 'Online';

$GLOBALS["lang"]['Submitted From'] = 'مقدمة';

$GLOBALS["lang"]['Subnet'] = ' Sub';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Keçmiş';

$GLOBALS["lang"]['Subscription ID'] = 'هوية المشتركين';

$GLOBALS["lang"]['suburb'] = 'الضواحي';

$GLOBALS["lang"]['Suburb'] = 'الضواحي';

$GLOBALS["lang"]['Success'] = 'النجاح';

$GLOBALS["lang"]['Sudan'] = 'السودان';

$GLOBALS["lang"]['Sudo Password'] = 'كلمة السر';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'كلمة (اختياري)';

$GLOBALS["lang"]['suite'] = 'Bakı';

$GLOBALS["lang"]['Suite'] = 'Bakı';

$GLOBALS["lang"]['summaries'] = 'موجز';

$GLOBALS["lang"]['Summaries'] = 'موجز';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'الملخصات هي واحد ضد <i>المجموعة</i> القيادة وباستخدام الطريقة البسيطة البسيطة<br/><br/>لم نعد إلى تقرير <i>النوع</i> جهاز نحن ببساطة لدينا <i>أجهزة النوع</i> وتظهر النتيجة يمكنك على على نوع<br/><br/>Bir məhsul bir məhsul qrup maddələrinə verilir ki, bir məhsul verilmiş bir xüsusiyyətə uyğundur <i>النقر</i> الصلة بالأجهزة الفعلية مجرد مجرد على النحو الوارد أعلاه - هذا الموجز كمجموع <i>التقرير + التقرير الفرعي</i>في حين أن هو<br/><br/>ولدى الملخصات مجموعة مختلف ويبين هذا الموجز كما كما هذه الصفحة لتكون مدخل';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'وترمي الملخصات تجميع البنود البنود وكان من شأن أن أن لقد جمعنا هذه إلى';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'وتقدم الملخصات قدرات عن بسيط، لطيف، قوي';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'وتأخذ الملخصات نفس التي';

$GLOBALS["lang"]['Summary'] = 'موجز';

$GLOBALS["lang"]['Sunday'] = 'الأحد';

$GLOBALS["lang"]['supplier'] = 'مورد';

$GLOBALS["lang"]['Supplier'] = 'مورد';

$GLOBALS["lang"]['Support'] = 'الدعم';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'الأنواع المدعومة <code>subnet</code>.. <code>seed</code> Qeydiyyat <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'دعم الامتثال للشروط والتنظيمية';

$GLOBALS["lang"]['Suriname'] = 'سورينام';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'مراجعة: مراجعة الحسابات السنوية السنوية للحفاظ التصديق';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'جزر سافالبارد جان ماين';

$GLOBALS["lang"]['Swaziland'] = 'سوازيلند';

$GLOBALS["lang"]['Sweden'] = 'السويد';

$GLOBALS["lang"]['Swedish'] = 'السويد';

$GLOBALS["lang"]['switch_device_id'] = 'هوية جهاز التبديل';

$GLOBALS["lang"]['Switch Device ID'] = 'هوية جهاز التبديل';

$GLOBALS["lang"]['switch_port'] = 'بوابة التبديل';

$GLOBALS["lang"]['Switch Port'] = 'بوابة التبديل';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'سويسرا، الاتحاد السويسري';

$GLOBALS["lang"]['Symptom'] = 'الرمز';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'الجمهورية العربية السورية';

$GLOBALS["lang"]['sysContact'] = 'الرمز';

$GLOBALS["lang"]['SysContact'] = 'الرمز';

$GLOBALS["lang"]['sysDescr'] = 'Qalereya';

$GLOBALS["lang"]['SysDescr'] = 'Qalereya';

$GLOBALS["lang"]['sysLocation'] = 'الرمز';

$GLOBALS["lang"]['SysLocation'] = 'الرمز';

$GLOBALS["lang"]['sysName'] = 'Qalereya';

$GLOBALS["lang"]['SysName'] = 'Qalereya';

$GLOBALS["lang"]['sysObjectID'] = 'الرمز';

$GLOBALS["lang"]['SysObjectID'] = 'الرمز';

$GLOBALS["lang"]['sysUpTime'] = 'الرمز';

$GLOBALS["lang"]['SysUpTime'] = 'الرمز';

$GLOBALS["lang"]['system_component'] = 'عنصر النظام';

$GLOBALS["lang"]['System Component'] = 'عنصر النظام';

$GLOBALS["lang"]['System-Area Network'] = 'شبكة النظام الإقليمي';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX Level';

$GLOBALS["lang"]['TX Power'] = 'TX gücü';

$GLOBALS["lang"]['TX Profile'] = 'TX Profili';

$GLOBALS["lang"]['Table'] = 'الجدول';

$GLOBALS["lang"]['tag'] = 'Axtarış';

$GLOBALS["lang"]['Tag'] = 'Axtarış';

$GLOBALS["lang"]['tag_1'] = 'Qeydiyyat';

$GLOBALS["lang"]['Tag 1'] = 'Qeydiyyat';

$GLOBALS["lang"]['tag_2'] = 'Qeydiyyat';

$GLOBALS["lang"]['Tag 2'] = 'Qeydiyyat';

$GLOBALS["lang"]['tag_3'] = 'Qeydiyyat';

$GLOBALS["lang"]['Tag 3'] = 'Qeydiyyat';

$GLOBALS["lang"]['Tagalog'] = 'Axtarış';

$GLOBALS["lang"]['tags'] = 'Kateqoriya';

$GLOBALS["lang"]['Tags'] = 'Kateqoriya';

$GLOBALS["lang"]['Tags :: '] = 'تاجز ';

$GLOBALS["lang"]['Taiwan'] = 'تايوان';

$GLOBALS["lang"]['Tajikistan'] = 'طاجيكستان';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '1 - يحيط علما بجميع النواتج والإجراءات والإجراءات حسب حسب الاقتضاء';

$GLOBALS["lang"]['Tanzania'] = ' Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'الحاسوب المستهدف';

$GLOBALS["lang"]['task'] = 'المهام';

$GLOBALS["lang"]['Task'] = 'المهام';

$GLOBALS["lang"]['tasks'] = 'المهام';

$GLOBALS["lang"]['Tasks'] = 'المهام';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'ويمكن أن المهام واحدة  Query أو جامع';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'التفاصيل التقنية';

$GLOBALS["lang"]['tenant'] = 'المستأجر';

$GLOBALS["lang"]['Tenant'] = 'المستأجر';

$GLOBALS["lang"]['Tenant ID'] = 'الهوية المستأجرة';

$GLOBALS["lang"]['Tennant ID'] = 'الهوية المستأجرة';

$GLOBALS["lang"]['ternary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Ternary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Test 1'] = 'الاختبار 1';

$GLOBALS["lang"]['Test 2'] = 'الاختبار 2';

$GLOBALS["lang"]['Test 3'] = 'الاختبار 3';

$GLOBALS["lang"]['Test Email'] = 'الرسالة الإلكترونية';

$GLOBALS["lang"]['test_minutes'] = 'دقائق الاختبار';

$GLOBALS["lang"]['Test Minutes'] = 'دقائق الاختبار';

$GLOBALS["lang"]['test_os'] = 'اختبار Oxunub';

$GLOBALS["lang"]['Test Os'] = 'اختبار Oxunub';

$GLOBALS["lang"]['test_subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['Test Subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['tests'] = 'الاختبارات';

$GLOBALS["lang"]['Tests'] = 'الاختبارات';

$GLOBALS["lang"]['Text'] = 'النص';

$GLOBALS["lang"]['Thai'] = 'تايلند';

$GLOBALS["lang"]['Thailand'] = 'تايلند';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'شكراً لك بدء رحلتك';

$GLOBALS["lang"]['Thanks to'] = 'شكراً';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'هذا هو لقد قمت بتحرير الأجهزة';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Axtarış <i>الأدوار</i> وتسمح نقطة النهاية بإدارة بإدارة';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'الـ كعكة كعكة يمكنك يمكنك طلب طلب';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'مجال الدليل النشط قائمة';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'خادم الدليل لاسترجاع قائمة';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'نقطة نهاية تسمح لك';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributes endpoint Open-AudIT müxtəlif xüsusiyyətlər üçün xüsusi məlumatları əlavə etməyə imkan verir, anda bu xüsusiyyət Class, Environment, Status və Tip xüsusiyyətlərində işləyir, Hər yerlər və Orgs üçün Tip xüsusiyyətləri, həmçi üçün Menkulator kateqoriyası. إذا رأيتم شيئاً من من';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'القياس الآلي الإجابة على <strong>هل يمكن أن يقوم</strong> بناء على الخطوات 1-4 1-4 وهذه الخطوات الاستطلاع، والتسليح، والتسليح،';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE CVE siyahısı qeyd olunmuş və ya geri alınmışdır. Bu NVD-da saxlayır, lakin default axtarış nəticələri istisna edilir.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'وقد نشرت التحقق في في ابتلاع أولي فقط';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE ilk analiz sonra yenilənmişdir. وقد تكون بيانات النيتروز';

$GLOBALS["lang"]['The CVE identifier.'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE, CVSS puanları, CWE imtahanları, əməliyyat etiketləri və CPE applicability ilə dəstəklənir.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'ولا تُعطى حالياً للإثراء للإثراء';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE NVD analitikləri tərəfindən zəng üçün sıralanır. لا توجد بيانات بعد';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'السحابة التي تملك البند <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'نوع جهاز أحدث هو هو إنه سريع، يعمل';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'الكشافة الخيارات التي مفصلة مفصلة';

$GLOBALS["lang"]['The Elevated User query'] = 'استفسار المستعمل العالي';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Executables xüsusi auditin bir hissəsi kimi bir alət diskini tarar və hər executable fayl paketin meneceri kimi tanınır. ولأنه يستخدم مدير فإن فإن أي شيء من أو أو أو أو أو أو أو أو يعمل يعمل يعمل يعمل أو أو أو أو أو أو يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل أو أو أو أو أو يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل يعمل';

$GLOBALS["lang"]['The FROM'] = 'من';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'المجموعة كانت تدير الأساس <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'بطاقة الهوية من الأجهزة الأجهزة الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'الهوية من سياسة';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'بطاقة الهوية من المواقع <code>locations.id</code>. الموقع هو عادة <code>FROM</code> الموقع';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'بطاقة الهوية من المواقع <code>locations.id</code>موقع B عادة هو <code>TO</code> الموقع';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'هوية الجهاز المرتبط به الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'هوية الاكتشاف المرتبط به <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'هوية البند من المرتبط';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'هويّة هذا الأب أورغ <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'الهوية التي قدمها';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'الهوية إسترجعت من السحاب';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'عنوان شركة بي لهذا';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP من واجهة خارجية';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP من الواجهة الداخلية';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 sertifikatlaşdırma prosesi və onun əsas elementləri.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP və ya Telco bu linki təmin edir.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'سجل (جوسون)';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD feed JSON rekord.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Bu istifadəçinin LDAP OU (if LDAP istifadə olunur).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'ولا يمكن ربط برنامج على الإطلاق هو قابلُ تفقد المرفأ مفتوح لخادم لخادم لخادم لخادم مِنْ مِنْ مِنْ الخادمِ الخادمِ غطّي خوادمك<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'نوع الخادم صحيح يجب <i>دليل نشط</i> أو <i>مفتوحة</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'وكان خادم العمل الطويل الطويل';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'سيختبر إذا إذا إذا إذا إذا مفتوحه مفتوحه في في في في في في في في في في وهذا مطلوب عن هذه ويتلقى هذا الدعم إذا كنت إلى تركيب Nmap:<br/><br/>بالنسبة لـ تطبيق هذا هذا هذا هذا فعليك فعليك فعليك إعادة إعادة هذا هذا هذا هذا هذا هذا <i> Che</i> (ج) وضع';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'الموقع الذي على هذه <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'مركز الـ في في في في في';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Standartlar və Texnologiya Milli İnstitutu federal texnologiya agentliyidir. وهي تقدم التكنولوجيا وقياس';

$GLOBALS["lang"]['The Network to Discover'] = 'شبكة الكشف';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'توقيت النغمة';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'وينبغي الإبلاغ عن المجموعة فارغ للجميع المئوية المئوية';

$GLOBALS["lang"]['The Open-AudIT API'] = 'AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'السحابة ذات الصلة إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'شفرة تكنولوجيا تكنولوجيا تكنولوجيا في';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'تم شفرة شفرة شفرة ضمن';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'ويوفر النظام الإيكولوجي أدوات أدوات';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP layihəsi bu standart təşəkkür və enforcing üçün açıq məhsulları toplanması və 2014-cü ildə NIST tərəfindən SCAP 1.2 sertifikatlaşdırılmışdır.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'المنظمة التي تملك الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Əməkdaşlı məlumatın prosesi.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = ' RU هذا هذا هذا الجهاز';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Racks xüsusiyyəti bir Organisation, Yer, Bina, Kat, Oda və Row ilə dəstək istifadə etmək üçün istifadə olunur.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP standartlaşdırılmış yollarla təhlükəsizliyi verilənmə və manipüle etmək üçün bir spesifikasiyadır. يستخدم البرنامج عدة فردية';

$GLOBALS["lang"]['The SELECT'] = 'Qeydiyyat';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Araşdırmanın SE bölməsi tam dotlamadan istifadə etməlidir və da tam dot adı ilə sahibdir. أجهزة مؤثرة مؤثرة من مجموعة مجموعة';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'يجب أن بجهاز الخاص الخاص';

$GLOBALS["lang"]['The SNMP community string.'] = 'سلسله المجتمع';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authentication Protokol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Gizlilik Protokolu.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'مستوى الأمن';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'اسم الأمن SNMP ضد 3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 konfrans maşın ID (optional)';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 konfransı adı (optional)';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'لا يمكن أن تحتوي <strong>WHERE @filter OR</strong>أن SQL لن تنفذ <strong>Qalereya</strong> ويسمح بالاستفسارات.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT istifadə edilən SQL sorğuları geritick istifadə etmək istəyir - " xarakter və sahələr üçün standart bir nümayiş deyil. على معظم لوحات في في';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL sorğu əsasən üç hissəsinə bölünür.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'إن تطبيق المعايير نظام نظام';

$GLOBALS["lang"]['The URL of the external system.'] = 'Xarici sistemin URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL-nin idarə olunması lazımdır.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'نقطة نهاية تسمح لك';

$GLOBALS["lang"]['The WHERE'] = 'المكان';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'الجزء الخاص بك <em>يجب أن يجب</em> احتواء';

$GLOBALS["lang"]['The Windows'] = 'النوافذ';

$GLOBALS["lang"]['The Windows log may say the following'] = 'سجل النوافذ يقول ما';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'ويجب أن للحساب كلمة كلمة';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'ويجب ألا كلمة السر السر وهذا يرجع السيناريو السيناريو السيناريو هم ببساطة مُجردون';

$GLOBALS["lang"]['The actual full name of this user.'] = 'الاسم الكامل الفعلي المستخدم';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT serverin ünvanı';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'وقدم المدير تفويض استُخدمت';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'وقدم المدير وثائق للالتزام للالتزام بخدمة';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'كما أن الوكيل ذكيان ذكيان';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'agent audit script yeni bir nümunə yükləmək lazımdır, run it və server qəbul.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'وينشئ هذا أجهزة مراجعة مراجعة';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'خط الأساس المرتبط به <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Əməkdaşlıq (gə lazımdır). الروابط إلى <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'سمة (من) <code>devices</code> الجدول.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testin xüsusiyyəti (aşağıdan xarici bir sahəsi adı ilə eşləyir).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'وفيما يلي سمات المسح';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'نص مراجعة الذي يقوم';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Audit script faylları istifadə edəcək[] array və faylları əldə edin.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'وكل نصوص مراجعة تقبل يمكنك تشغيل باستخدام ذلك وإذا لم تستطع ذلك';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'الطريق الأساسي نبحث عنه';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'الخطوات الواردة ليست خطأ <strong>أي</strong> إكتشاف تطبيق جهاز الإنذار الإنذار';

$GLOBALS["lang"]['The benchmark type.'] = 'النوع المرجعي';

$GLOBALS["lang"]['The building the rack is located in.'] = 'المبنى الذي يوجد الرف';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Cihazların hesablanmış sayı xarici yaradılması.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT yaradılması üçün cihazlar hesablanan sayı.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'هويّة العميل هويّة دليل سر العميل المفتاح الذي';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'المُجمّع هو أساساً <i>جامع</i> نمط المُجمّع للكشف للكشف على على وليس مقصورا على الشبكة الشبكة ويقوم الخادم المجمع على على<br/>عندما يستعد غير كخادم كخادم<br/><br/>وبمجرد تركيب التحكم يتم يتم التحكم<br/><br/>Kompüter və server arasında yalnız tələb olunan ağ portları 80 və ya 443 (Koletordan Server\'a qarşılananTCP bağlantısı). Open-AudIT bazası bu yüksəklər arasında paylaşılan (ve ola bilmir) deyil.<br/><br/>وبتقصير المجمّع سيطلب سيطلب من الخادم الخادم الخادم كل كل دقائق كل كل على على على على على على خادم خادم خادم خادم خادم خادم خادم خادم المواد المواد المواد المواد المواد المواد المواد المواد مهام مهام مهام مهام مهام اكتشافية لمدة لمدة لمدة لمدة لمدة لمدة لمدة لمدة إلخ إلخ إلخ إلخ إلخ إلخ إلخ إلخ إلخ إلخ إلخ.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'المُجمّع هو أساساً <i>جامع</i> نمط ومن الطريقة الطريقة الطريقة الطريقة القدرة وهي مصممة المعلومات عن عن';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'المجمّعون الداخليون عندما يديرون';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'اسم العمود من الخارجية الخارجية';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'تم اعدام على الجهاز';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'تشكيلة مجموعتكم يمكن <code>active/active</code>.. <code>active/passive</code>.. <code>N+1</code>.. <code>N+M</code>.. <code>N-to-1</code>.. <code>N-to-N</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'كلمة السر إذا وثائق وثائق';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'وقد فشلت وثائق التي';

$GLOBALS["lang"]['The credentials username.'] = 'اسم مستخدم وثائق';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'التاريخ والزمان الحاليان Y-m-d';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y-m-d formatında cari tarix.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'الوضع الحالي لجهاز السحاب';

$GLOBALS["lang"]['The current status of the discovery.'] = 'الوضع الحالي للإكتشاف';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'اللوحة التي عن طريق <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'ولا تظهر المخزنة في نترك البيانات كما غير أنه لا ما ما';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'البيانات التي ستستخدمها في <code>LIKE</code> شرط لا (وفقاً للبروتوكول) <code>equals</code> شرط مثال آخر <code>comput</code>سيعيد كل الحواسيب نستخدم <code>LIKE</code> شرط، هو غير';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'يمكن العثور على قاعدة قاعدة البيانات';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Database və web versiyası zövq edir.';

$GLOBALS["lang"]['The date of license expiration.'] = 'تاريخ انتهاء صلاحية الترخيص';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'ويتوقف الصانع عن يستعاض عنها عادة وقد تظل الصيانة';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'proqram artıq yeniləndirilməsi almaq və effektiv çıxış edir. توقف الصيانة.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'تاريخ تغيير هذا أو أو ملاحظة - هذا العصر العصر -';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'التاريخ الذي الذي فيه هذه هذه هذه';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'يوم الشهر ينبغي أن أن';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'يوم الأسبوع ينبغي أن أن';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'مستوى التطهير الانخفاض يعني انخفاض مع';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'خيار المسح الافتراضي مجموعة';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Bu üsul tərəfindən yaradılan hər bir istifadəçiyə verilmiş default dil.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'يجب أن الجهاز لحفلة لحفلة لحفلة لحفلة يُعتبر';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'الجهاز في العمليات الروابط <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'الرابط المباشر للنص هو';

$GLOBALS["lang"]['The email address of the reciever'] = 'عنوان البريد الإلكتروني للمحقق';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'BirinciWave şirkəti ikilisi lisenziya üçün tələb olunur. من فضلك تحميل مفتوح';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'وخط الأساس المرتبط كله';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'ويمكن أن الضعف المستغل المستغل Bu, bir imtiyaz və ya əməliyyat həyata keçirilir (örneğin, ev sahibi OS bir konteyner qarşısını almaq).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'والضعف المستغل على إلا إلا وبعبارة أخرى، أعمال المعتدي';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'هويّة الموقع الخارجية عادة';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Bir inteqrasiya ilə əməkdaşlıq sahələrin JSON sıra kimi bazada saxlanılır. لكل ميدان خصائصه التالية';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'أول إسترجعت فيها فيها';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'الطابق الذي يوجد الرف';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'الجدول الأجنبي المرجعي ينبغي أن واحداً من من الأجهزة الأجهزة المواقع أو أو الأجهزة الأجهزة الاستفسارات الاستفسارات.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'شكل بياناتك يجب يكون';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'الشكل المستخدم للناتج سيرسل';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'العمود المؤهل تأهيلاً الذي عندما يكون النوع = حركة المرور، يمثل هذا السؤال الأحمر الأحمر';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Xarici sistem tərəfindən tam əsaslı adı.  E المعلومات المعلومات المعلومات الدور نوع.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'طاولة مؤهلة ويمكن توفير';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Bu boşluğu test üçün yaradılan SQL sorğu yaradılıb. ويمكن تحرير هذا لتصحيح';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'bazalın qarşı işləyən cihazlar qrupu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'İnteqrasiya üçün cihazlar siyahısı verən qrup. الروابط إلى <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'ساعة اليوم ينبغي أن أن';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'نسخة من المترابط الروابط <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'عمود تحديد الهوية قاعدة قاعدة';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Bu üslubunun əvvəlliyi (heç istifadə etməyin).';

$GLOBALS["lang"]['The integer of severity.'] = 'نبرة الشدة';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'القيمة الداخلية التي صياغتها';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'عنوان الشوط في';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'اللغة التي واجهة الويب';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'آخر موعد وساعة هذا هذا';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'آخر إسترجعت فيها فيها';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'آخر مرة تنفيذ هذه';

$GLOBALS["lang"]['The last time this integration was run.'] = 'آخر مرة فيها هذا';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'نقطة نهاية تسمح لك لك';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'İstehsalçının bu sonunda line qarşısının xidmət nömrəsi.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'المكان الذي يوجد الرف <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'عنوان المواقع';

$GLOBALS["lang"]['The locations area.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations city.'] = 'المدينة';

$GLOBALS["lang"]['The locations country.'] = 'المدينة';

$GLOBALS["lang"]['The locations district.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations latitude.'] = 'موقع العرض';

$GLOBALS["lang"]['The locations level.'] = 'مستوى المواقع';

$GLOBALS["lang"]['The locations longitude.'] = 'المواقع بعيدة المدى';

$GLOBALS["lang"]['The locations phone.'] = 'الهاتف الموقعي.';

$GLOBALS["lang"]['The locations postcode.'] = 'المواقع البريدية.';

$GLOBALS["lang"]['The locations region.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations room.'] = 'غرفة المواقع';

$GLOBALS["lang"]['The locations state.'] = 'المواقع تقول';

$GLOBALS["lang"]['The locations suburb.'] = 'ضواحي المواقع';

$GLOBALS["lang"]['The locations suite.'] = 'جناح المواقع';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'المنطق لمطابقة وارد في';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'لا تمنح الإذن بالكشف';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'الحد الأقصى الجسماني الجسماني';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'الحد الأقصى مكافحة الإرهاب';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'الحد الأدنى للمواصفات المطلوبة';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'دقيقة الساعة ينبغي أن أن';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'شهر السنة ينبغي أن أن';

$GLOBALS["lang"]['The name given to this item.'] = 'الاسم المعطى لهذا';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'الاسم المعطى لهذا من الناحية المثالية أن';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Bu istifadəçiyə verilmiş adı (giriş etmək üçün istifadə olunur). من الناحية المثالية أن';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Əməkdaşlı buludun adı (gər lazımdır).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT tərəfindən baxılan proqram paketinin adı. استخدمي النسبة للإشارة كبطاقة';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'اسم المستخدم غير آخر آخر';

$GLOBALS["lang"]['The name provided by the provider.'] = 'اسم مقدم الطلب';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = ' network 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'الشبكة الفرعية لتنفيذ الاكتشاف';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'ويدير العميل الجديد من من';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'عدد وحدات الانبعاثات التي';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'عدد المواقع المرتبطة الروابط إلى <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'عدد الشبكات المرتبطة الروابط إلى <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'عدد الأجهزة في هذه <code>devices.cloud_id</code> Qeydiyyat <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد أوجه الحاسمة التي التي';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'عدد الأجهزة وجدها هذا';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'عدد الأجهزة في المرتبطة';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة في السحابة الروابط إلى <code>devices.cloud_id</code> Qeydiyyat <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة هذه السحابة <code>devices.cloud_id</code> Qeydiyyat <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'عدد الأجهزة في السحابة <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'وسيتم تنفيذ هذا المرجعي مأخوذة من <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'عدد الأجهزة التي من';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد نقاط العالية الخطورة الخطورة';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد نقاط المنخفضة الخطورة الخطورة';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد مواطن المتوسطة التي التي';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'عدد التراخيص المشتراة';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'عدد الثواني لمحاولة مع';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'عدد أوجه التي لا لا';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'التعويض هو الأجهزة التي';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Yalnız lazım olan məlumat / siyasət adı (testasiyamızda)';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'العمود الثانوي الاختياري ملاحظة: عندما يكون النوع = حركة المرور، يمثل هذا السؤال السؤال السؤال السؤال';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'العمود الثالث الاختياري ملحوظة: عندما يكون من النوع النوع النوع يمثل يمثل يمثل الاستعلام الاستعلام';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'طلب إسترجاع المعلومات متشائم';

$GLOBALS["lang"]['The orientation of this device.'] = 'توجه هذا الجهاز';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'كلمة السر';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'كلمة السر الخاصة بالحساب';

$GLOBALS["lang"]['The password used to access the external system.'] = 'كلمة السر تستخدم إلى';

$GLOBALS["lang"]['The path to the file or directory.'] = 'الطريق إلى الملف الدليل';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'الطريق إلى أو الدليل';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'العمق المادي للرف';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'الارتفاع الفيزيائي للرف';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'الوزن المادي للرف الوقت';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'الوزن المادي عندما يكون';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'البارود الفيزيائي للرف';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'البقعة جزءاً جزءاً جزءاً';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'الدائرة الكهربائية يربطها هذا';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'قاعدة البيانات التي ترتكز';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'وتستند الطريقة الرئيسية للإذن وتُعرَّف الأدوار بأنها بأنها بأنها ، ، ، ، ، ، ،. ولكل دور مجموعة التصاريح التصاريح وينبغي أن تشمل الأدوار القياسية تشحن تشحن تشحن تشحن تشحن حالات الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام الاستخدام القياسية القياسية القياسية القياسية. وتتاح القدرة تحديد أدوار أدوار';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Bu sıra maddələrin proses simvollanması.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Tool haqqında məlumat almaq üçün son istifadə olunan proses';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Bu lisenziya səhifəsinin məhsulları və lisenziyaları açıq məhsullar daxil olan ilkwave Commercial məhsulları daxildir. وتُرخَّص لشركة أوديت من من من من من من شركة شركة شركة بعد بعد بعد بعد مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية بموجب بموجب بموجب بموجب بموجب بموجب بموجب مهنية مهنية مهنية مهنية مهنية تجارية مهنية تجارية تجارية تجارية مهنية مهنية مهنية مهنية تجارية تجارية تجارية مهنية مهنية تجارية تجارية تجارية تجارية تجارية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية مهنية يمكن أن التالية، والمشاريع والمشاريع';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'İnteqrasiya üçün cihazlar siyahısı təklif edir. الروابط إلى <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'رقم الأصول';

$GLOBALS["lang"]['The rack asset tag.'] = 'بطاقة الأصول';

$GLOBALS["lang"]['The rack bar code.'] = 'رمز الثكنة';

$GLOBALS["lang"]['The rack model.'] = 'نموذج الرف';

$GLOBALS["lang"]['The rack serial.'] = 'مسلسل الرف';

$GLOBALS["lang"]['The rack series.'] = 'سلسلة الرف';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'الرف هذا موجود الروابط <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Müasir təhlükəsizlik açıqlarını qarşılaşdırmaq və qarşılaşdırma prosesi. وينطوي ذلك عادة تطبيق تطبيق';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'التأشيرات المنتظمة لدليلك Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'İstehsal olunan xüsusiyyətlər konfransda olmalıdır. وينبغي أن الممتلكات مؤهلة مؤهلة تأهيلاً تأهيلاً نظام نظام نظام نظام اسم مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مجرد مضيف مضيف مجرد مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف ). مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مؤهلة مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مضيف مؤهلة مضيف مضيف مضيف';

$GLOBALS["lang"]['The result of the command.'] = 'نتيجة القيادة';

$GLOBALS["lang"]['The room the rack is located in.'] = 'الغرفة التي يوجد الرف';

$GLOBALS["lang"]['The row the rack is located in.'] = 'الصف الذي يوجد الرف';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP serverində qrup axtarış başarısız oldu. تحقق من سجلات هل';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'المفتاح السري الذي مقترناً';

$GLOBALS["lang"]['The software end-of-life date.'] = 'موعد نهاية الحياة';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'تاريخ نهاية الخدمة';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Qeyd edilmiş bazar masasından xüsusi bazası sütunu.';

$GLOBALS["lang"]['The specific database table.'] = 'طاولة قاعدة البيانات المحددة';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'خيارات التوقيت القياسية في في';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'خيارات التوقيت القياسية عادة ما نستخدم';

$GLOBALS["lang"]['The status of this integration'] = 'حالة هذا الإدماج';

$GLOBALS["lang"]['The status of this queued item.'] = 'حالة هذا البند';

$GLOBALS["lang"]['The steps below outline the process.'] = 'وتبين الخطوات الواردة';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'الهدف من آي بي بي';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'الحاسوب المستهدف لمراجعة يعني';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Əməliyyat üçün şablon.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'النص المتعلق بقاع المخطط في';

$GLOBALS["lang"]['The text that is displayed.'] = 'النص الذي تم عرضه';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Sonrakı vaxtlar, bu qurğu işləmək lazımdır. على سبيل القيام بمهمة 10: <code>2017-06-01 09:59:00</code>. وينبغي أن هذه القيمة القيمة العجز عن سداد القيمة <code>2000-01-01 00:00:00</code> وهذا يعني التقصير، المهمة المهمة';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 və 1000 (ya da heç bir) TCP portları Nmap görə istifadə olunur.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 və 1000 (ya da heç bir) UDP portları Nmap görə istifadə olunur.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'مجموع ناتج مكافحة الإرهاب';

$GLOBALS["lang"]['The type of device.'] = 'نوع الجهاز';

$GLOBALS["lang"]['The type of organisation.'] = 'نوع التنظيم';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'نوع الرف (الكمال، الطاقة، الشبكة، إلخ)';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'نوع المهمة من من خط خط خط السحابي، السحابي، السحابي، الاكتشاف، الاكتشاف، الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار الاستفسار.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'نوع الإدماج (يسمى عادة باسم النظام الخارجي)';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Unfiltered dövlət bir portun erişilebilir olduğu anlamına gelir, lakin Nmap açıq və ya qarşılaşdırmaq olacaq. فقط الأشعة المقطعية تستخدم تستخدم';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'المُحدد الوحيد لهذا الخادم';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'حساب المستخدم يستخدمه المجمع <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP istifadəçi Rollar və Orgs üçün lazım olan Open-AudIT qruplarının birbaşa üzvü olmalıdır. Open-AudIT qrupunun bir üzvü olan bir qrupun üzvüdür.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'والمستعمل موجود في العمل العمل';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'والمستعمل موجود في العمل العمل';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'والمستعمل موجود دون العمل العمل';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'المستعمل في الـ دي';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'المستخدم في برنامج العمل';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'المُستخدم ليس في';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'المستعمل ليس المجموعة التي';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'LDAP-da qeyd olunan istifadəçi, lakin Open-AudIT rollar üçün LDAP qruplarını istehsal etmək üçün konfiqurasiya deyil və bu istifadəçi Open-AudIT daxil deyil. إما أن تختار <i>Rollar üçün LDAP istifadə edin</i> Open-AudIT LDAP فحص الخادم أو إنشاء هذا البيانات البيانات البيانات البيانات البيانات المفتوحة المفتوحة والأعراف والأعراف والأعراف والأعراف.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'اسم المستخدم';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Qeydiyyatdan istifadə olunan istifadəçi adı.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'ولم ترد المستخدمين من تحقق من سجلات الخادم';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'واسترجعت تفاصيل المستخدمين برنامج';

$GLOBALS["lang"]['The users email address.'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'ساعات العمل في هذا';

$GLOBALS["lang"]['The value assigned to the item.'] = 'القيمة المخصصة للبند';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'القيمة المخزنة لهذا';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'اسم البائع حسب شركة';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'لقد أخذ البائع وحدة';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT-nin quraşdırdığı ev sahəsində web klassikası (bir izləşdirmə slash).';

$GLOBALS["lang"]['The widget at position '] = 'النسيج في الموقع ';

$GLOBALS["lang"]['The width of this device.'] = 'عرض هذا الجهاز';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'أورغيدهم وأحفادهم';

$GLOBALS["lang"]['Their OrgIDs only'] = 'أورغيدهم فقط';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'أورغيدهم، أو أصولهم وأحفادهم';

$GLOBALS["lang"]['Then'] = 'ثم';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'ثمّ جديد جديد آوث جديد جديد أُويت أُويت بالذِهاب - ادمين Auth Methods - إخلقْ Auth توفير اسم ووضع <i>النوع</i> إلى الداخل';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'ثم يمكنك استخدام البيانات البيانات الكشف <strong>سيفشل</strong>لكن إن لم تستخدمي';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = ' ( زر إلى إلى';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'لا داعي اليدوي لكل';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'ليس هناك لفعل أي أي<br/><br/>عملاء النوافذ على يرام يرام لا يمكن تشغيله بعد بعد وللقيام بذلك، أن ننسخ ننسخ لسوء الحظ حساب الذي Bu hesab uzaq (network based) resursuna daxil deyil. وللعمل بشأن المسألة، يجب ومن الأسهل استخدام المدير المدير ويتمتع حساب الوصول بإمكانية بإمكانية';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'وهذه أمثلة فقط قد تحتاج هذه السمات';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'هذه البارامترات تمكنك مراجعة مراجعة';

$GLOBALS["lang"]['Thing'] = 'الشيء';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'فكّر في البريد و';

$GLOBALS["lang"]['Third'] = 'الثالثة';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'وسيتم استرجاع المركبة وكتابة';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'هذا الـ مجموعة';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'هذا الـ مجموعة <span class=\'\"confluence-link\"\'>هل على على المجموعات</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Bu rol heç bir AD qrupu qeyd edir. تحققي من الأدوار داخل';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'هذه الصفة مخزنة كهدف <code>c</code>.. <code>r</code>.. <code>u</code> Qeydiyyat <code>d</code> التي تمثل الخلق والتحديث هذه هي التي يمكن يمكن';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'ويمكن أن يكون إما إما فارشاً';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'هذا الرمز على العمل';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'هذا المجمّع فريدة من';

$GLOBALS["lang"]['This column is required by'] = 'هذا العمود مطلوب';

$GLOBALS["lang"]['This column is required by '] = 'هذا العمود مطلوب ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Bu tarif auto-populated və ideal olaraq sol olmalıdır.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'هذه النقطه النهائيه من';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'ويشير هذا أن أن أن هذا طبيعي للنسخة من من الرسالة الرسالة الرسالة الرسالة الاتصال الاتصال الاتصال الاتصال الاتصال بي بي بي بي بي بي بي بي بي الاتصال إذا الاتصال الاتصال إذا كان الهدف ويندوز <i>هو</i> إدارة من من من';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'ويشير هذا الخطأ أنه أنه يجب أن تحاول أخرى';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'ويشير هذا وثائق أن أن عليك التحقق من التفويض';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Bu nümunə kimi qeyd olunan bütün Modulların siyahısı yaradır';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Bu səhifə cihazları və açıq Ports, Protokollar və NMAP tarama tərəfindən tapılmış proqramlar bir siyahısı yaradır.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Bu nümunə funksiya və ya məlumat sahəsi boş olduğu və satınalma tarixi default olduğu cihazlar siyahısı yaradır.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'هذا المثال قائمة بالأجهزة بالأجهزة التي التي الإستفسار الإستفسار الإستفسار يستخدم يستخدم اليوم';

$GLOBALS["lang"]['This example uses'] = 'هذا المثال يستخدم';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'وتتطلب هذه السمة مهنية';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'وهذه السمة، لأن القدرة القدرة ولتمكين هذه الميزة، سمة <i>نعم</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'ويخبر هذا الملف باستطلاع باستطلاع';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'هذا النموذج يوفر بسيطة';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'هذه هي الطريقة';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'وهذا خيار اختياري مُمكَّن مُمكَّن';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'وهذا هو الرئيسي عموما، ملحوظة: عندما يكون من النوع النوع النوع يمثل هذا هذا هذا النص الثانوي.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'من المحتمل هذا بسبب بسبب';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'وهذا ما يحدده وعلى وعلى';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'هذا هو حيث نخزن';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'وسيستخدم هذا الاتصال الأولى يمكنك أن تضغط التصدير التصدير';

$GLOBALS["lang"]['This issue is under investigation.'] = 'ويجري التحقيق في';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Bu madddə seçilmiş nümunə dəyişdirilməsi və istifadəçinin istifadə edilməsi lazımdır.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'يجب أن يضاهي البند';

$GLOBALS["lang"]['This license expires on'] = 'هذه الرخصة تنتهي';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'ويمكن تعديل الإذن الأمني';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'وينبغي التعليق على الأمر الأمر';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'هذا يجب يكون فريداً';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'وينبغي تحديد إما إلى إلى 1 أو ارتفاع الرف.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'وينبغي أن يكون هو هو ويجري حاليا الأعمدة من النظام.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'وتُستخدم هذه يتمكن لا لا إنها تستخدم فقط الهوية';

$GLOBALS["lang"]['This will auto-populate.'] = 'هذا سوف يقطن';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'هذا سوف يبطئ الاكتشاف';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'هذا سيحذف الصفوف في';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'هذا سيزيل الرخصة بشكل';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'هذا سيظهر أي شكل';

$GLOBALS["lang"]['Thursday'] = 'الخميس';

$GLOBALS["lang"]['time_caption'] = 'الوقت';

$GLOBALS["lang"]['Time Caption'] = 'الوقت';

$GLOBALS["lang"]['time_daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time Daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time to Execute'] = 'وقت التنفيذ';

$GLOBALS["lang"]['timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'الهدف (الثانيات)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'الوقت المناسب انتظر اكس';

$GLOBALS["lang"]['Timesatamp'] = 'Kateqoriya';

$GLOBALS["lang"]['Timestamp'] = 'Kateqoriya';

$GLOBALS["lang"]['timing'] = 'التوقيت';

$GLOBALS["lang"]['Timing'] = 'التوقيت';

$GLOBALS["lang"]['Timor-Leste'] = 'تيمور - ليشتي';

$GLOBALS["lang"]['Title'] = 'العنوان';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'إلى ملف جديد الآن ذلك الملف الجديد الجديد';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Sorğu icra etmək üçün, proqram bir /execute, belə /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'لتدقيق الآلة، يجب يكون يكون';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'وللتدقيق في نطاق على على';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'لتدقيق آلة ليست في <i>Axtarış</i> حساب مخصص <i> the</i> حساب مدير البرنامج 1 səhifə 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Yerli düşmə üçün, hər hansı bir təcrübə gözləndirilmiş və əlaqə saxlanılır.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'لمقارنة البرمجيات التي منها منها ولهذا السبب، فإن الأساس الأساس يمكن لسياسات أن تختبر <i>على قدم المساواة</i>.. <i>أكبر من</i> أو <i>متساوية أو أكبر من</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'لخلق نقطة جديدة نقر';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'لخلق مورد، يجب تمسح';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = ' ( مراجعة من نائي مراجعة مراجعة مراجعة';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'للتمكين من ذلك، مادة مادة';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'لإعدام نص ويندوس، فتح';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'تنفيذ نص الحسابات، فتح';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'لترشيحه بقيمه استخدم اسم';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'لتركيب (نامب) على';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'لإحداث التغيير اتبع التالية';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'لاسترجاع الهوية المستأجرة افتحي بوابة بوابة بوابة بوابة المستأجرة المستأجرة المستأجرة المستأجرة المستأجرة المستأجرة المستأجرة لا لا لا لا لا لا لا لا لا لا لا لا لا لا لا لا لا';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'لإستعادة مفتاحك، سجل إلى دبليو دبليو دبليو واختيار واختيار';

$GLOBALS["lang"]['To return a specific component item.'] = 'إعادة بند بعينه';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'لإعادة جميع إلى نوع';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'لإعادة جميع البنود نوع إذا أردت كل ستستخدمها';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'للعكس، يدرج ناقصا، وبالتالي';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'لتشغيل نص الاختبار الهدف';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'لاختيار الأجهزة التي دمجها دمجها';

$GLOBALS["lang"]['To sort by a database column, use'] = 'للفرز بواسطة قاعدة بيانات،';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'لاستعمال هذه في في في أن أن أن أن تخلق تخلق كالعادة كالعادة كالعادة كالعادة كالعادة كالعادة كالعادة تحديد كلمة السر ضرورياً ضرورياً <i>اسم المستخدم المفضل</i> عزو وليس إلى إلى إلى إلى إلى بريد بريد إلكتروني إلكتروني سيُقطَع سيُقطَع من من من من من من من إذا كنت تعرف مستخدميك <i>اسم المستخدم المفضل</i>لا تخافي يمكنك تخلق تخلق <i>اسم المستخدم المفضل</i> تم تسجيلها لمصلحتك';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'لاستعمال هذه في في في أن أن أن أن تخلق تخلق كالعادة كالعادة كالعادة كالعادة كالعادة كالعادة كالعادة تحديد كلمة السر ضرورياً <i>الاسم</i> عزو ليس إلى إلى إلى إلى إلى البريد البريد من من من من تُقطَع تُقطَع من من تُقطَع من من من من من إذا تعرف تعرف تعرف <i>الاسم<i>لا تخافي تخلق تخلق تخلق تخلق تخلق في في في في في تا تا تا التوقيع المستخدم التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع التوقيع <i>الاسم<i> تم تسجيلها لمصلحتك<br/><p>ثمّ جديد جديد آوث جديد جديد أُويت أُويت بالذِهاب - ادمين Auth Methods - إخلقْ Auth توفير اسم ووضع <i>النوع</i> إلى أوكتا</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'وبغية استخدام أن يجب يجب وسيتم ذلك تلقائيا المرة المرة للمزيد من المفتوحة المطابقة';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Bir sorğunun məlumatlarını, /open-audit/index standart URL strukturunu baxın. php/queries/{$id} istifadə olunmalıdır.';

$GLOBALS["lang"]['Togo'] = 'توغو';

$GLOBALS["lang"]['Tokelau'] = 'توكيلاو';

$GLOBALS["lang"]['Tonga'] = 'تونغا';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'أفضل مرافئ TCP';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'أفضل مرافئ TCP أفضل 10، 100، 1000 ميناء لمسح كما هو الحال بالنسبة لخيارات لخيارات "الموانئ العلوية"';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'مرافئ المشردين داخليا';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'أفضل مرافئ "إن بي" أفضل 10، 100، 1000 ميناء كما كما كما هو هو الحال العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية العلوية.';

$GLOBALS["lang"]['Traditional Chinese'] = 'الصينية التقليدية';

$GLOBALS["lang"]['Traffic Light'] = 'الضوء';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'ترينيداد وتوباغو';

$GLOBALS["lang"]['Troubleshooting'] = 'الاضطرابات';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'المشاكل التي تصيب لوجينز';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'حاول فتح الباب الباب علينا علينا علينا زمنية زمنية زمنية زمنية كل سمات محدود 20 جهاز';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'جربي أحدث مع مع رخصة';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'حاولي قطع الأشجار باستخدام مُستخدمة';

$GLOBALS["lang"]['Tuesday'] = 'الثلاثاء';

$GLOBALS["lang"]['Tunisia'] = 'تونس';

$GLOBALS["lang"]['Turkey'] = 'تركيا';

$GLOBALS["lang"]['Turkish'] = 'تركية';

$GLOBALS["lang"]['Turkmenistan'] = 'تركمانستان';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'جزر تركس وكايكوس';

$GLOBALS["lang"]['Tuvalu'] = 'توفالو';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'المستوى';

$GLOBALS["lang"]['Tx Level'] = 'المستوى';

$GLOBALS["lang"]['tx_power'] = 'Tx gücü';

$GLOBALS["lang"]['Tx Power'] = 'Tx gücü';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profili';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profili';

$GLOBALS["lang"]['type'] = 'النوع';

$GLOBALS["lang"]['Type'] = 'النوع';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'النوع يمكن أن يكون يكون ذلك يكون يكون قائمة بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم بالقيم التي التي بالقيم بالقيم التي التي التي التي التي التي التي التي اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها اختيارها.';

$GLOBALS["lang"]['Types of Networks'] = 'أنواع الشبكات';

$GLOBALS["lang"]['URL'] = ' URL';

$GLOBALS["lang"]['uuid'] = 'Uşaq';

$GLOBALS["lang"]['UUID'] = 'Uşaq';

$GLOBALS["lang"]['udp_ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Udp Ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Uganda'] = 'أوغندا';

$GLOBALS["lang"]['Ukraine'] = 'أوكرانيا';

$GLOBALS["lang"]['Ukrainian'] = 'أوكرانيا';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'مراجعة حسابات المرحلة الأولى';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'مراجعة حسابات المرحلة الثانية';

$GLOBALS["lang"]['Undergoing Analysis'] = 'التحليل الجاري';

$GLOBALS["lang"]['Unfiltered'] = 'غير مسروقة';

$GLOBALS["lang"]['uninstall'] = 'Qapı';

$GLOBALS["lang"]['Uninstall'] = 'Qapı';

$GLOBALS["lang"]['Uninstall the Agent'] = 'حرر العميل';

$GLOBALS["lang"]['United Arab Emirates'] = 'الإمارات العربية المتحدة';

$GLOBALS["lang"]['United Kingdom'] = 'المملكة المتحدة';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Amerika Birləşmiş Ştatları';

$GLOBALS["lang"]['United States Virgin Islands'] = 'جزر فرجن التابعة المتحدة';

$GLOBALS["lang"]['United States of America'] = 'الولايات المتحدة الأمريكية';

$GLOBALS["lang"]['Unknown'] = 'غير معروف';

$GLOBALS["lang"]['unlock_pin'] = 'Qalereya';

$GLOBALS["lang"]['Unlock Pin'] = 'Qalereya';

$GLOBALS["lang"]['Unscheduled'] = 'غير مقررة';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'غير مستخدم في 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'غير مستعمل';

$GLOBALS["lang"]['Update'] = 'آخر';

$GLOBALS["lang"]['update_external_count'] = 'Pulsuz sayt';

$GLOBALS["lang"]['Update External Count'] = 'Pulsuz sayt';

$GLOBALS["lang"]['update_external_from_internal'] = 'Daxil ol';

$GLOBALS["lang"]['Update External From Internal'] = 'Daxil ol';

$GLOBALS["lang"]['update_internal_count'] = 'Daxili sayı';

$GLOBALS["lang"]['Update Internal Count'] = 'Daxili sayı';

$GLOBALS["lang"]['update_internal_from_external'] = 'Xarici';

$GLOBALS["lang"]['Update Internal From External'] = 'Xarici';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Open-AudIT-dan proqramlar';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Update Open-AudIT الأجهزة ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Version Open-Aud  IT من نظام المعلومات';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'رابعا - المسؤوليات المستكملة';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = '{collection} giriş bir nümayişini yeniləyin.';

$GLOBALS["lang"]['Update attributes'] = 'آخر المعالم';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'وقد تم تم مرة مرة';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'تمّ تحديث مرة تمّ تمّ';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'تم تحديث مرة تم';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'تم تحديث مرة تم';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'تم تحديث كل تم';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'تحديث كل مرة فيها';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'استكمل كل استكمل فيها';

$GLOBALS["lang"]['Updating'] = 'تحديث';

$GLOBALS["lang"]['Upgrade'] = 'أعلى';

$GLOBALS["lang"]['Upload an audit result file'] = 'تحميل ملف نتائج الحسابات';

$GLOBALS["lang"]['Upper Case'] = 'القضية العليا';

$GLOBALS["lang"]['uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['Uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['Urdu'] = 'Tarix';

$GLOBALS["lang"]['url'] = 'Tarix';

$GLOBALS["lang"]['Url'] = 'Tarix';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'أوروغواي، الجمهورية الشرقية';

$GLOBALS["lang"]['usb'] = ' Usb';

$GLOBALS["lang"]['Usb'] = ' Usb';

$GLOBALS["lang"]['use'] = 'الاستخدام';

$GLOBALS["lang"]['Use'] = 'الاستخدام';

$GLOBALS["lang"]['use_authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['use_authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use Authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'ضمان الاستخدام';

$GLOBALS["lang"]['Use Service Version Detection'] = 'دائرة الاستخدام';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'قسم إستعمال عندما يُكتشف <i> y</i>نامبو في المستهدف المستهدف<br/>ويمكن أن ذلك مفيدا Bu daha əvvəl istifadə etmədi.';

$GLOBALS["lang"]['Use WMI'] = 'WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'استخدام <i>طريقة التوقيع</i> OIDC - OpenID Connect və bir <i>النوع</i> Web Application. Axtar <i>التالي</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use for Roles'] = 'استخدام الأدوار';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'استخدام خيارات التركيب عند <i>أوافق</i>.. <i>التالي</i> Qeydiyyat <i>Daxil ol</i> أزرار لتركيب نامبا';

$GLOBALS["lang"]['used'] = 'مستخدم';

$GLOBALS["lang"]['Used'] = 'مستخدم';

$GLOBALS["lang"]['used_count'] = 'الكونت المستخدم';

$GLOBALS["lang"]['Used Count'] = 'الكونت المستخدم';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'استخدمه برنامج "أبندب"';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'استخدم داخلياً اكتشاف جهاز';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'استخدم داخلياً اكتشاف جهاز <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'مستخدمة عندما تم خواديم خواديم إذا كان في هذه';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'تستخدم عندما يتم خواديم خواديم Bu LDAP qrupunda bir istifadəçi varsa, onlar bu rol qəbul edilir.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'استعملت عند في برنامج برنامج برنامج أوفلدباك أوفلدباك أوفلدباك أوفلدباك مستخدمين مستخدمين يستعملون أعضاء أعضاء أعضاء أعضاء أعضاء أعضاء أعضاء أعضاء أعضاء أعضاء. التقصير <code>memberUid</code>استخدمه برنامج "أبندب" فقط';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'مستخدمة في تطبيقات الخاصة';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'مستخدمة في تطبيقات الخاصة إستعدْ إليك عمل إس';

$GLOBALS["lang"]['user'] = 'مستخدم';

$GLOBALS["lang"]['User'] = 'مستخدم';

$GLOBALS["lang"]['User DN'] = 'مستخدم DN';

$GLOBALS["lang"]['user_group'] = 'فريق المستعملين';

$GLOBALS["lang"]['User Group'] = 'فريق المستعملين';

$GLOBALS["lang"]['user_id'] = 'هوية المستخدم';

$GLOBALS["lang"]['User ID'] = 'هوية المستخدم';

$GLOBALS["lang"]['user_interaction'] = 'تفاعل المستعملين';

$GLOBALS["lang"]['User Interaction'] = 'تفاعل المستعملين';

$GLOBALS["lang"]['User Membership Attribute'] = 'العضوية';

$GLOBALS["lang"]['user_name'] = 'اسم المستخدم';

$GLOBALS["lang"]['User Name'] = 'اسم المستخدم';

$GLOBALS["lang"]['User Policies'] = 'سياسات المستعملين';

$GLOBALS["lang"]['Username'] = 'المستعمل';

$GLOBALS["lang"]['username'] = 'المستعمل';

$GLOBALS["lang"]['users'] = 'المستخدمون';

$GLOBALS["lang"]['Users'] = 'المستخدمون';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'ويعمل المستعملون على مماثل Bir istifadəçi uyğun adı, status və şəkil məlumatları ilə mövcuddursa (kişaf edilən, bitməli, tərəfindən) sonra siyasət keçirilir.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'المستخدمين والأدوار والأوغاد';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = '(ب) يستخدم إطار المدوّن PHP.';

$GLOBALS["lang"]['Using'] = 'استخدام';

$GLOBALS["lang"]['Using Entra for Auth'] = 'استخدام الدخول إلى';

$GLOBALS["lang"]['Using LDAPS'] = 'استخدام LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'استخدام الموافقة المسبقة علم';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'واستخدام الخيار الشكلي عند عند إضافه لشكل عادةً عادةً هذا هذا الإنترنت الإنترنت سيضع سيضع لـ لـ لـ هذه هذه هذه الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، الحالة، سنعيد سنعيد سنعيد سنعيد (أي بي آي لإسترجاع لإسترجاع يجب تضع تضع تضع رئيس رئيس القبول القبول القبول القبول القبول القبول';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'عادة Mb/s، من الموقع A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'عادة Mb/s، من الموقع B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'عادة Mb/s، إلى الموقع ألف';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'عادة Mb/s، إلى الموقع B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'عادة يجب 3';

$GLOBALS["lang"]['Uzbekistan'] = 'أوزبكستان';

$GLOBALS["lang"]['VLAN'] = ' V';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Daxil ol';

$GLOBALS["lang"]['Valid From'] = 'Daxil ol';

$GLOBALS["lang"]['valid_from_raw'] = 'Hamısı';

$GLOBALS["lang"]['Valid From Raw'] = 'Hamısı';

$GLOBALS["lang"]['valid_to'] = 'Daxil ol';

$GLOBALS["lang"]['Valid To'] = 'Daxil ol';

$GLOBALS["lang"]['valid_to_raw'] = 'Hamısı';

$GLOBALS["lang"]['Valid To Raw'] = 'Hamısı';

$GLOBALS["lang"]['Valid Values'] = 'Daxil ol';

$GLOBALS["lang"]['value'] = 'القيمة';

$GLOBALS["lang"]['Value'] = 'القيمة';

$GLOBALS["lang"]['Value Types'] = 'أنواع القيمة';

$GLOBALS["lang"]['values'] = 'القيمة';

$GLOBALS["lang"]['Values'] = 'القيمة';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'القيمة: في حالة <i>القائمة</i> وفي الميدان، أن تكون';

$GLOBALS["lang"]['Vanuatu'] = 'فانواتو';

$GLOBALS["lang"]['VarChar'] = 'Axtar';

$GLOBALS["lang"]['Varchar'] = 'Axtar';

$GLOBALS["lang"]['variable'] = 'الفرق';

$GLOBALS["lang"]['Variable'] = 'الفرق';

$GLOBALS["lang"]['Various'] = 'مختلف';

$GLOBALS["lang"]['vendor'] = 'البائع';

$GLOBALS["lang"]['Vendor'] = 'البائع';

$GLOBALS["lang"]['Vendor Report'] = 'تقرير البائعين';

$GLOBALS["lang"]['vendors'] = 'البائعون';

$GLOBALS["lang"]['Vendors'] = 'البائعون';

$GLOBALS["lang"]['Venezuela'] = 'فنزويلا';

$GLOBALS["lang"]['Version'] = 'Proqram';

$GLOBALS["lang"]['version_padded'] = 'الشكل';

$GLOBALS["lang"]['Version Padded'] = 'الشكل';

$GLOBALS["lang"]['version_raw'] = 'Kateqoriya';

$GLOBALS["lang"]['Version Raw'] = 'Kateqoriya';

$GLOBALS["lang"]['version_string'] = 'الشكل';

$GLOBALS["lang"]['Version String'] = 'الشكل';

$GLOBALS["lang"]['video'] = 'Axtarış';

$GLOBALS["lang"]['Video'] = 'Axtarış';

$GLOBALS["lang"]['Vietnam'] = 'Oxunub';

$GLOBALS["lang"]['Vietnamese'] = 'Axtarış';

$GLOBALS["lang"]['View'] = 'Bakı';

$GLOBALS["lang"]['View All'] = 'مشاهدة جميع';

$GLOBALS["lang"]['View Details'] = 'التفاصيل';

$GLOBALS["lang"]['View Device'] = 'Cihaz axtarış';

$GLOBALS["lang"]['View Discovery'] = 'Bakı';

$GLOBALS["lang"]['View Policy'] = 'Sifariş';

$GLOBALS["lang"]['View Racks'] = 'Heyvanlar';

$GLOBALS["lang"]['View the'] = 'مشاهدة';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'انظر إلى موضع البحث، البحث، وهذا سيوفر الاكتشاف، والحصر، والحصر،';

$GLOBALS["lang"]['View the release notes on the'] = 'مشاهدة مذكرات الإفراج على';

$GLOBALS["lang"]['Virtual Private Network'] = 'الشبكة الخاصة الافتراضية';

$GLOBALS["lang"]['Virtual private network'] = 'الشبكة الخاصة الافتراضية';

$GLOBALS["lang"]['Virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'زيارة قناة اليوتيوب التعليمي';

$GLOBALS["lang"]['vlan'] = ' V';

$GLOBALS["lang"]['Vlan'] = ' V';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Axtar';

$GLOBALS["lang"]['Vm'] = 'Axtar';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Device ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Device ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Adı';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Adı';

$GLOBALS["lang"]['vm_vendor'] = 'Axtarış';

$GLOBALS["lang"]['Vm Vendor'] = 'Axtarış';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'الخصوم';

$GLOBALS["lang"]['Vulnerabilities'] = 'الخصوم';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'الخانات';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'الخانات';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'الخصوم والنتائج';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerability ilkin 1 yanvardan əvvəl, 2025-ci ildən əvvvəl yayımıq. ونحن لا نرى معنى معنى ويمكن تغيير ذلك';

$GLOBALS["lang"]['vulnerability_id'] = 'هوية الضعف';

$GLOBALS["lang"]['Vulnerability ID'] = 'هوية الضعف';

$GLOBALS["lang"]['Vulnerability Status'] = 'حالة الضعف';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - Proqram siyasətlərini istifadə etdiyiniz zaman, mövcud Centos və RedHat paketləri istifadə edən çekirdek paketi <i> kernel</i> Qeydiyyat <i> kernel-devel</i>. يمكن أن هناك مجموعات مجموعات توزيعات ديبيانية تستخدم مثل <i>Linux-image-3.13.0-24-generic</i>ملاحظة رقم النسخة في <i> kernel</i> Qeydiyyat <i> kernel-devel</i> من سياسات ويمكن تناول';

$GLOBALS["lang"]['WHERE'] = 'أين';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'شروط وثائق التفويض';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'انتظر أن ثم ترعى';

$GLOBALS["lang"]['wall_port'] = 'Qalereya';

$GLOBALS["lang"]['Wall Port'] = 'Qalereya';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Qalereya';

$GLOBALS["lang"]['Want to know more?'] = 'هل تريد معرفة المزيد؟';

$GLOBALS["lang"]['Warning'] = 'تحذير';

$GLOBALS["lang"]['warranty'] = 'Yadda saxla';

$GLOBALS["lang"]['Warranty'] = 'Yadda saxla';

$GLOBALS["lang"]['warranty_duration'] = 'مدة الحرب';

$GLOBALS["lang"]['Warranty Duration'] = 'مدة الحرب';

$GLOBALS["lang"]['warranty_expires'] = 'مغامرات الحرب';

$GLOBALS["lang"]['Warranty Expires'] = 'مغامرات الحرب';

$GLOBALS["lang"]['warranty_status'] = 'الوضع الإداري';

$GLOBALS["lang"]['Warranty Status'] = 'الوضع الإداري';

$GLOBALS["lang"]['warranty_type'] = 'نوع الحرب';

$GLOBALS["lang"]['Warranty Type'] = 'نوع الحرب';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'ولدينا أيضاً خيار أمام أمام قبل قبل قبل للمدربين للمدربين للمدربين في في في في في في في في كوخ كوخ كوخ كوخ كوخ كوخ كوخ كوخ كوخ كوخ هذه عادة فكرة جيدة';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'كما لدينا عملنا عملنا';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'غالباً ما هذا السؤال <i>يعتمد</i>. وهو يعتمد على شركاء شركاء ليس لدينا حاسبة تسمح لنا لنا وإعادة أنت أفضل بكثير المسح المسح في 24 كتل. إذا كنت لا تعرف تعرف';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'لدينا تعليمات أكثر تفصيلاً';

$GLOBALS["lang"]['We have tests for:'] = 'لدينا اختبارات';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'ونأمل أن تجدي الباب';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'نحن في وضعنا القائمة القائمة ولا يمكن حذف النصوص يمكنك صنع نصوص لتستخدمها لتستخدمها ويمكن بعد تحميل النصوص مراجعة الحسابات';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'نحتاج بعض الاعتماد لنتمكن';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'نحن فقط نرسل الأدنى الأدنى <i>أي شيء</i> البيئة لديها وهذا هو فقط ليس الصانع ليس ليس لا عناوين IP. لا نسخ OS. لا أسماء وميدان يو يو إيد بـ بـ بـ 256 هكتارا (لذلك لا نعرف القيمة القيمة) نرسل فقط التي نحتاجها نحتاجها وسيوفر لنا توجيها بشأن بشأن';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'ونحن نميل استخدام تمديد تمديد قد ترغب في واختبار';

$GLOBALS["lang"]['Web'] = 'Oxunub';

$GLOBALS["lang"]['Web Application Routes'] = 'مسارات التطبيقات الشبكية';

$GLOBALS["lang"]['Web Server Discovery'] = 'خدمة الإنترنت';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'الموقع الشبكي';

$GLOBALS["lang"]['Wednesday'] = 'الأربعاء';

$GLOBALS["lang"]['weight'] = 'الوزن';

$GLOBALS["lang"]['Weight'] = 'الوزن';

$GLOBALS["lang"]['weight_current'] = 'الوزن الحالي';

$GLOBALS["lang"]['Weight Current'] = 'الوزن الحالي';

$GLOBALS["lang"]['weight_empty'] = 'الوزن فارغ';

$GLOBALS["lang"]['Weight Empty'] = 'الوزن فارغ';

$GLOBALS["lang"]['weight_max'] = 'Qadın Max';

$GLOBALS["lang"]['Weight Max'] = 'Qadın Max';

$GLOBALS["lang"]['Welcome'] = 'مرحباً';

$GLOBALS["lang"]['Welcome Dashboard'] = 'مرحباً بكم';

$GLOBALS["lang"]['Welcome to'] = 'مرحبا بكم في';

$GLOBALS["lang"]['Western Sahara'] = 'الصحراء الغربية';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'ما يمكنني إذا لم';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'ماذا عن الحقول أُريدها أُريدها';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'ماذا عن الشبكة الأخرى؟ من الواضح أن الأفضل <i>القراءة فقط</i> الدخول ولكن إذا لا لا لن يكون لديكِ من';

$GLOBALS["lang"]['What do we send?'] = 'ماذا نرسل؟';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'ماذا يعني هذا لك؟';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'ما هو الغرض هذا';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'ما هو هذا الموقع <code>attributes</code> طاولة';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'عندما يكتشف';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'عندما يكتشف';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'عندما يفتح وتتلقى المعلومات المعلومات ويستخدم نظام " سلسلة من 12 مباراة ملكية لتحديد لتحديد هذا هذا. قواعد المصيد تعمل أو وهذا يعني القاعدة التي التي ويجب أن جميع قواعد قواعد';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'عندما تمسح يجب أن Bir giriş token hər hansı bir tələb növü ilə yaradılır, belə ki, bir GET (örneğin) və müraciət: proqram/json, meta.access_token üçün cavab vermək, və istəyiniz ilə daxildir. Bu sahə verilən məlumatlara yerləşməlidir [access_token], IE, üst səviyyə.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'وعندما يتم عن جهاز جهاز وسيجري تجميع كل مراجعة مراجعة - لينكس - ودقيقة - ونوافذ إذا كنت تفكر <i>ولكن وضع لينكس في</i>لن تكسر، تحصل على على<br/>سيتم تخزين التفاصيل في <i>ملف</i> طاولة قاعدة أي سمات أخرى <i>الاسم الكامل</i>.. <i>هتاف</i>.. <i>Inode</i>.. <i>آخر تغيير</i>ويتضمن الجدول نظاماً - مبدئياً - آخر آخر عشر عشر تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف الملف<br/>وفيما يلي الخصائص<br/><ul><li>Windows - adı, ölçüsü, seriyası, SHA1 hash (səs məlumatları), son dəyişdirilmiş, məlumat, sahibi, versiyası (file izinting).</li><br/><li>Linux - adı, ölçüsü, seriyası, SHA1 hash (hüsusi) son dəyişdirilmiş, meta məlumat son dəyişdirilmiş, məlumat, sahibi, qrup, inode.</li></ul>سترى قسماً كل من من';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'وعندما يُجرى الاكتشاف، خيار خيار وخيارات المسح تنطلق موانئ موانئ';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'وعندما يُجرى المسح خيار خيار وإذا لم أي خيار، خيار، يُختار وستستخدم جماعة أوديت أوديت خيارات خيارات خيارات خيارات خيارات خيارات الاكتشافات الاكتشافات الاكتشافات الاكتشافات الاكتشافات جماعة جماعة الاكتشافات جماعة جماعة جماعة الاكتشافات الاكتشافات الاكتشافات جماعة جماعة جماعة الاكتشافات الاكتشافات الاكتشافات الاكتشافات الاكتشافات الاكتشافات الاكتشافات الاكتشافات جماعة جماعة الاكتشافات.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'عندما يُنفّذ اكتشاف فرعية فرعية أي جهاز إذا مسحه مسحه أي موانئ؟ يحددها';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'عند مراجعة طريق عن طريق ومن الأفضل أن وثائق وإذا لم يكن الممكن الممكن ومن ثم، فإن المراجعة <i>التغييرات</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'وعند الجمع الأجهزة، أي';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'عندما تكتمل، أغلق القيادة';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'عندما تخلق مستعاراً، إذا <i>السلف</i> الزر سيكون لديك على';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'عندما ندمج الأجهزة النظام';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'عند دمج الأجهزة النظام';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'عند التحقيق الاكتشاف، سيطلب لاسترجاع هذه، اذهب قائمة';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'عندما نطابق على على على ويمكننا أيضا أن خيارات خيارات ولاسترجاع الـ لسوء الحظ، عندما ضيف ضيف <i>لماذا</i> هويات الأجهزة';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the \\'] = 'JSON tərəfindən istəyən, default heç bir limit təşkil edir. وعند طلب الشاشة، يُحدّد يُحدّد ويمكن تغيير ذلك انظر:';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'عندما نسترجع خارجياً هل';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = '(عندما يُدير حساب خدمة) <i>العادية</i> المستخدم (أو مدير البرنامج). هذا بسبب <i>النظام المحلي</i> فالحساب الذي عادة لإدارة Domen adı qeydiyyatdan keçirt » IE - Biz Windows PCs audit script kopyalamaq üçün Yerli Sistem hesabı hesabı kimi çalışır zaman Apache istifadə edəcək.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'وعندما يتم نأخذ التشكيلة، التشكيلة، وهذه القواعد:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'عندما تكتشف أي قواعد انظر أدناه على';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'عندما يكون من تنفيذ مستمدة من <code>tasks.type</code> Qeydiyyat <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'عندما تم إنشاء السجل';

$GLOBALS["lang"]['When this queue item started processing.'] = 'عندما بدأ البند في';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'وعندما تستخدم شبكة أو أو من من من المؤسسة المؤسسة ومصممة ومصممة ومصممة ومصممة ومصممة ومصممة لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات لوحات الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد الصيد';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'عندما نحول مختاراً داخلياً داخلياً EG: tam, string, və s.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'عندما ننفذ خط هذا، هذا،';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'عندما نتلقى ميناء هل هل';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'عندما تستخدمين الكلاود حالات حالات';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'عندما تستخدمين لاكتشاف حالات';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'عندما تخلق إكتشافاً خياراً خياراً <code>devices.org_id</code> مُستعدة لمنظمتك المُختارة';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'عندما تخلق ضغطت إذا إذا (فور 4-1،)';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'عندما يُجرى يجب أن تكون وضعت وضعت <i>بريد إلكتروني اختباري<i> الزر على تفاصيلك أدخلي أدخلي<br/><br/>Adı, isteğe bağlı təsvir, seçin <i>Bakı</i> نوع، اختيار المرغوب فيه، فيه،<br/><br/>Bir saat (saat yalnız, hər hansı bir dəqiqə), bir ad vermək (bu, real planlaşdırılmış sorğunun adı deyil), sorğu run kimi istədiyiniz gün seçin, e-poçt ünvanı təklif etmək və bir sorgu formatı seçmək və edirsiniz.<br/>وسترسل الاستفسارات إلكترونية إلكترونية من</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'عندما تدخلين العناوين أحد <code>computer</code> في صندوق البحث فوق <i>النوع</i> العمود، والبحث يعيد جميع أساسا، مفتوح تطلب تكنولوجيا المعلومات <code>devices?devices.type=computer</code>. الآن هناك كبير واحد';

$GLOBALS["lang"]['where'] = 'أين';

$GLOBALS["lang"]['Where'] = 'أين';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'حيث اكس رقم وتوجد وتوجد';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'حيث على شاشة الشيطانية الشيطانية';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'حيث الرف في الصف';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'وسواء كان يؤثر على على';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '(ب) ما كان كان الأمر الأمر المستعملين المستعملين المستعملين المستعملين (غيرهم، سلبي، ناشط)';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'ما ينطبق على المعيار';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'ما هي التي ينبغي ينبغي باستخدام الجميع، لا أو';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'أي شبكة أن نكتشفها';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'والذي يجب نعرض هذا';

$GLOBALS["lang"]['Who made this rack.'] = 'الذي صنع هذا الرف';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'لماذا (ويندوز سيرفر)';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'لماذا نستبعد هذه السياسة؟';

$GLOBALS["lang"]['Wide Area Network'] = 'شبكة المناطق الواسعة';

$GLOBALS["lang"]['Wide area network'] = 'الشبكة الواسعة النطاق';

$GLOBALS["lang"]['Widget'] = ' Widget';

$GLOBALS["lang"]['Widget #'] = 'أرملة';

$GLOBALS["lang"]['Widget # '] = 'أرملة ';

$GLOBALS["lang"]['Widget Type'] = 'النوع';

$GLOBALS["lang"]['widgets'] = 'الأرامل';

$GLOBALS["lang"]['Widgets'] = 'الأرامل';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'الأرملة مصممة لاستخدامها لوحات لوحات';

$GLOBALS["lang"]['width'] = 'Endirim';

$GLOBALS["lang"]['Width'] = 'Endirim';

$GLOBALS["lang"]['windows'] = 'النوافذ';

$GLOBALS["lang"]['Windows'] = 'النوافذ';

$GLOBALS["lang"]['Windows Packages'] = 'أكياس النوافذ';

$GLOBALS["lang"]['Windows Test Script'] = 'Oyuncaq';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'وحدة عمل مستخدمي النوافذ';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'وحدة عمل مستخدمي النوافذ';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'وقد يكون أيضا قد عند الهدف ابدأ الأمنية الأمنية في';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'وينس تحتاج النوافذ التالية التالية<br/><br/>يرجى الدخول المستهدفة النوافذ النوافذ';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'وينس يستخدم المبلغ وشركة وشركة وشركة وشركة وشركة وتبدأ هذه الخدمة المسمّى المسمّى وعند الانتهاء من يغلق يغلق';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'شبكة المناطق المحلية اللاسلكية';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'وبإطلاق 3.3.0 من فتح فتح الباب، الباب، ويرسم هذا إنشاء فكرة فكرة<br/><br/>ورهناً بالغرض المجموعة المختارة،<br/><br/>على سبيل المثال، قمت قمت';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'ومع إدخال سمة يمكنك يمكنك تقديم تقديم سحابتك، سحابتك، سحابتك، الأمازون AWS أو Microsoft Azure، وشركة Open-AudIT ستستخدم المعلومات المعلومات المسبقة المسبقة المسبقة المواقع المواقع المواقع المواقع المواقع المواقع المواقع المواقع المواقع المواقع اكتشاف اكتشاف اكتشاف كل كل كل كل كل كل الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات قائمة الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات الحالات قائمة قائمة قائمة ';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi başarısız';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi başarısız';

$GLOBALS["lang"]['wmi_timeout'] = 'Qalereya';

$GLOBALS["lang"]['Wmi Timeout'] = 'Qalereya';

$GLOBALS["lang"]['workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Working Credentials'] = 'وثائق التفويض العاملة';

$GLOBALS["lang"]['Wrap Up'] = 'اللعنة';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'مكتوبة باللغة المكتوبة لـ PHP';

$GLOBALS["lang"]['XML'] = ' XML';

$GLOBALS["lang"]['Yellow Query'] = 'Yellow Query';

$GLOBALS["lang"]['Yemen'] = 'اليمن';

$GLOBALS["lang"]['Yes'] = 'نعم';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'أنت قادر إضافية أدلة أدلة يمكنك أيضا تحديد والملفات والملفات إذا كنت تريد هذه في النص يدويا يدويا للهدف،';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'أنت دائما حر تعديل تعديل أقترح أن أحتفظ رئيسية رئيسية ونصوص مراجعة من نصوص نصوص بسيطة وسهلة فقط تأكد';

$GLOBALS["lang"]['You are running version'] = 'أنت تدير نسخة';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'يمكنك الوصول إلى باستخدام باستخدام';

$GLOBALS["lang"]['You can also'] = 'يمكنك أيضاً';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'ويمكنكم أيضاً تروا في في';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'ويمكنك أيضا تحديد باستخدام';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'يمكنك دائما الموجة الموجة الأولى الأولى الأولى الافتراضية الافتراضية الافتراضية الخاصة بك (ESX, Azure, et al). İlkwave VM, Debian Linux çalışır və OS lisenziya məlumatları və qeydlər pulsuzdur. أو أن على قرص 9، أوبونتو 20.04، 22.04 ən 24.04 وكذلك ديبيان 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'يمكنك تعيين للموقع بشكل';

$GLOBALS["lang"]['You can assign devices using custom'] = 'يمكنك تعيين أجهزة العرف';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'يمكنك مراجعة آلة بدون بدون';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'يمكنك بالتأكيد بدون اكتشافاً اكتشافاً <i>مع</i> وثائق التفويض.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'ويمكنكم إنشاء خط وتشغيله وتشغيله';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'يمكنك أن تخلق مع AIX, ESX, Linux, OSX və Windows bütün örtüklüdür.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'ويمكنكم أن جميع أشكال أشكال وهناك خيارات لإنشاء و يجب أن جهاز على على';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'يمكنك تحديد وربط جهاز جهاز ويمكن ربط الطلب من';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'يمكنك تحرير قيمة الإضافي';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'يمكنك أن النبض كشف كشف <i>Subnetektiv</i> Qeydiyyat <i>Respublika</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'يمكنك تعيين الأجهزة باستخدام';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'يمكنك تجاوز هذا خلال خلال';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'يمكنك اختيار أجهزة عن';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'يمكنك اختيار الأجهزة سيتم سيتم دمجها  Database الحقول الحقول تطابق العزوبية أن يطابق';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'يمكنك تحويل أي إلى إلى ستحتاجين وثائق للدخول إلى';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'يمكنك النظر من النقر النقر';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'ليس لديكِ';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'ليس لديكِ (إتش بي إس إن إم) Bu uzatma yüksək tələb olunur.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'ربما تريد أن وترعى وترعى';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'قد ترغبين دليل على على لفعل هذا، تأكد <i>استخدام التوثيق</i> هو جاهز <i>استخدام الأدوار</i> جاهز لـ هذا أيضاً <i>تلقائيا</i> ينطبق على';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'ربما كنت قد أن أن بعض:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'يجب أن رخصتك الحالية';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'يجب أن يكون وثائق وثائق Aşağıdakı əməliyyat sistemləri dəstəklənir: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. ونعتزم في في هذه العمليات العمليات العمليات العمليات العمليات مع مع مع مع مع أخرى أخرى أخرى أخرى أخرى أخرى أخرى أخرى أخرى أخرى.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'يجب أن بأكمله الملف الملف';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'لا يجب تتضمّن الحقول';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'عليك فقط تغيير الثانية';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'يجب أن تُستعاض العمود';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'يجب أن تستخدمي يحتوي يحتوي';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'يجب أن تستخدم تلك';

$GLOBALS["lang"]['You will need a'] = 'ستحتاج إلى';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'ستحتاج إلى موانئ';

$GLOBALS["lang"]['You will see a list of'] = 'سترى قائمة';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'مفتاح الـ دبليو دبليو دبليو دبليو دبليو';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'أوراق إعتماد "جوجل" الخاصة بك كـ كـ "جيون"';

$GLOBALS["lang"]['Your Host is'] = 'أنت المضيف';

$GLOBALS["lang"]['Your Licenses'] = 'رخصتك';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'هويتك (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'سرك (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'هويّة اشتراكك في أزور';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'هويتك Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'نسخة PHP الخاص بك';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'E-poçt ünvanı';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'جهاز التحكم بك لاختيار';

$GLOBALS["lang"]['Your SSH key.'] = 'مفتاح SSH الخاص بك';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'أوراق دخولك، وفقاً السحابات';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'بياناتك هي يمكنك استخراجه بل إننا نقدم مفيد مفيد الصادرات إلى إلى و و و و و و و XML.  ( كتابة كتابة كتابة كتابة كتابة والحصول على على على في في في في في في في في في في في في في في في في في في في في  XML  XML في في و و و و XML، و و و و و و آي آي آي آي آي ويمكنك ويمكنك ويمكنك ويمكنك مرة أخرى، انها بياناتك - وليس أي شخص آخر يمكنك أن بأن أمن';

$GLOBALS["lang"]['Your database platform is'] = 'قاعدة بياناتك';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'وصفك لحالة الصلة الصلة';

$GLOBALS["lang"]['Your description of this item.'] = 'وصفك لهذا البند';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'اسمك العام القطعة من';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'نسختك العامة لهذه البرمجيات';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'يجب أن مستعملك الآن <i>Entra ilə Logon</i> زر على صفحة المفتوحة <i>اسم المستخدم المفضل</i>.<br/><br/>وهذا يجب أن كل الآن يجب يكون لدى<br/><br/>كما هو دائما، إذا';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'يجب أن مستعملك الآن <i>OKTA ilə Logon</i> زر على صفحة المفتوحة <i>الاسم</i>.<br/><br/>وهذا يجب أن كل الآن يجب يكون لدى<br/><br/>كما هو دائما، إذا';

$GLOBALS["lang"]['Your web server is'] = 'خادمك على الانترنت';

$GLOBALS["lang"]['Zambia'] = 'زامبيا';

$GLOBALS["lang"]['Zimbabwe'] = 'زمبابوي';

$GLOBALS["lang"]['a String'] = 'Bir String';

$GLOBALS["lang"]['active'] = 'نشطة';

$GLOBALS["lang"]['active directory'] = 'دليل نشط';

$GLOBALS["lang"]['active/active'] = 'نشطة/فعلية';

$GLOBALS["lang"]['active/passive'] = 'النشاط/التعدي';

$GLOBALS["lang"]['advertisement'] = 'الإعلان';

$GLOBALS["lang"]['alert'] = 'إنذار';

$GLOBALS["lang"]['all'] = 'كل شيء';

$GLOBALS["lang"]['allocated'] = 'مخصصة';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['an Integer'] = ' a';

$GLOBALS["lang"]['and'] = 'Qeydiyyat';

$GLOBALS["lang"]['and / or'] = 'Qeydiyyat';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'وتذكرة دعم سيتم واتخاذ';

$GLOBALS["lang"]['and another'] = 'أخرى';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'ويحمّل آخر ذاتي ربما';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'والذهاب إلى تطبيقات - Enterprise تطبيقات المشاريع (القائمة اليسرى) ثم النقر النقر <i>طلب جديد</i>.';

$GLOBALS["lang"]['and it\\'] = '♪';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'ويبحث عن تاريخ الصلاحية';

$GLOBALS["lang"]['and review what is possible.'] = 'واستعراض ما هو';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'وأعيد توجيه الأشعة البنفسجية';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'ومن المرجح أن الخطوط هذه الخطوط أن تعطيك';

$GLOBALS["lang"]['antivirus'] = 'مضادات الفيروسات';

$GLOBALS["lang"]['application'] = 'التطبيق';

$GLOBALS["lang"]['approved'] = 'تمت الموافقة عليها';

$GLOBALS["lang"]['are required.'] = 'مطلوب.';

$GLOBALS["lang"]['are used.'] = 'تستخدم.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'كجهاز يستجيب لهذا الميناء<br/>وقد تسبب ذلك بعض بعض لدينا الآن هذه متاحة';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'كنقطة مرجعية وتصفير الآلات الآلات';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'افتراض العمل والعملاء المأهولة';

$GLOBALS["lang"]['attribute'] = 'الإسناد';

$GLOBALS["lang"]['auto'] = 'السيارات';

$GLOBALS["lang"]['backup'] = 'الدعم';

$GLOBALS["lang"]['banned'] = 'محظور';

$GLOBALS["lang"]['blog'] = 'المدونة';

$GLOBALS["lang"]['blue'] = 'الأزرق';

$GLOBALS["lang"]['bottom'] = 'أسفل';

$GLOBALS["lang"]['building'] = 'المبنى';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'ويمكن استخدامه المستعمل المستعمل اسم اسم اسم السر المستخدم المستخدم المستخدم المستخدم المستخدم المستخدم التي التي التي التي يقوم يقوم يقوم يقوم يقوم يقوم يقوم يقوم يقوم<br/><br/>Bir istifadəçi yapılandırılmış LDAP deyil, lakin Open-AudIT (eg: <i>الاسم</i> (ز)<br/><br/>مفتوح وتستخدم المعلومات مجموعات مجموعات ويجب أن المستخدم عضواً عضواً<br/><br/>وعندما يتم تشكيله صحيح، صحيح، Yadda saxla وإذا لم يكن موجوداً موجوداً';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'ويمكن الآن استرجاع عن عن وتعمل هذه الخاص الصندوق الصندوق العملاء المدعومين (ويندوز)';

$GLOBALS["lang"]['changed'] = 'تغير';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'تم اختياره WMI, SSH və ya SNMP üçün bir port varsa, vasitəsinə cavab verməz ';

$GLOBALS["lang"]['cloud'] = 'سحابة';

$GLOBALS["lang"]['code'] = 'الرمز';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'المجموعات والتفاصيل هي';

$GLOBALS["lang"]['collector'] = 'جامع';

$GLOBALS["lang"]['collectors'] = 'جامعو';

$GLOBALS["lang"]['column'] = 'العمود';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'سيحتوي العمود إما <i> y</i> أو <i> n</i>. وهذا يشير إلى إذا إذا فعلى سبيل يمكن تركيب <i>برمجيات جارية</i> ) ولكن مراجعة لاحقة، ستغير هذه الصفات الحالية <i> n</i>.';

$GLOBALS["lang"]['column. The'] = 'العمود Axtarış';

$GLOBALS["lang"]['compute'] = 'الحساب';

$GLOBALS["lang"]['config'] = ' ';

$GLOBALS["lang"]['console'] = ' Con';

$GLOBALS["lang"]['contains'] = 'يحتوي على';

$GLOBALS["lang"]['create'] = 'الخلق';

$GLOBALS["lang"]['created'] = 'أنشئت';

$GLOBALS["lang"]['credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['critical'] = 'حاسمة';

$GLOBALS["lang"]['cve'] = ' c';

$GLOBALS["lang"]['database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['debug'] = ' de';

$GLOBALS["lang"]['delegated'] = 'مندوب';

$GLOBALS["lang"]['delete'] = 'حذف';

$GLOBALS["lang"]['deleted'] = 'حذفت';

$GLOBALS["lang"]['denied'] = 'مرفوضة';

$GLOBALS["lang"]['details'] = 'التفاصيل';

$GLOBALS["lang"]['devices'] = 'أجهزة';

$GLOBALS["lang"]['digitalocean'] = 'التكنولوجيا الرقمية';

$GLOBALS["lang"]['discoveries'] = 'الاكتشافات';

$GLOBALS["lang"]['documentation for further details.'] = 'وثائق لمزيد من';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'نعم <strong>لا</strong> تقديم تقارير عن';

$GLOBALS["lang"]['does not equal'] = 'لا تساوي';

$GLOBALS["lang"]['emergency'] = 'الطوارئ';

$GLOBALS["lang"]['entra'] = 'داخل';

$GLOBALS["lang"]['equals'] = 'متساوية';

$GLOBALS["lang"]['error'] = 'الخطأ';

$GLOBALS["lang"]['established'] = 'المنشأة';

$GLOBALS["lang"]['excluded'] = 'مستبعدة';

$GLOBALS["lang"]['expired'] = 'انتهت صلاحيتها';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'متطرفة بدونها ستفشل المنظمة

عالية جداً الوظائف الضرورية لبقاء لبقاء لبقاء تعاد تعاد تعاد فوراً

عالية المهام ينبغي التي ينبغي ينبغي ينبغي قد قد تستغرق للانتعاش للانتعاش للانتعاش للانتعاش للانتعاش

متوسطة - الوظائف ولكنها ولكنها يمكن يمكن وقت وقت وقت النزول

منخفضة - الوظائف الأساسية الأساسية التي التي تأثير تأثير تأثير

غير موقّع - التقصير حتى موقع التصوير -';

$GLOBALS["lang"]['fail'] = 'فشل';

$GLOBALS["lang"]['false'] = 'كاذب';

$GLOBALS["lang"]['file'] = 'ملف';

$GLOBALS["lang"]['firewall'] = 'الجدار الناري';

$GLOBALS["lang"]['first'] = 'أولا';

$GLOBALS["lang"]['fixed'] = 'ثابتة';

$GLOBALS["lang"]['floor'] = 'الطابق الأرضي';

$GLOBALS["lang"]['for'] = 'Axtarış';

$GLOBALS["lang"]['for authentication'] = 'للتوثيق';

$GLOBALS["lang"]['for this information.'] = 'لهذه المعلومات';

$GLOBALS["lang"]['from Audit Script Result'] = 'من مراجعي الحسابات';

$GLOBALS["lang"]['from NMIS'] = 'من بعثة الأفريقي في';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'من العنوان (Using LRPC)';

$GLOBALS["lang"]['front'] = 'مقدمة';

$GLOBALS["lang"]['front-left'] = 'مقدمة';

$GLOBALS["lang"]['front-right'] = 'الجبهة اليمنى';

$GLOBALS["lang"]['github'] = 'Qalereya';

$GLOBALS["lang"]['google'] = ' Google';

$GLOBALS["lang"]['greater or equals'] = 'أكبر أو مساوية';

$GLOBALS["lang"]['greater than'] = 'أكبر من';

$GLOBALS["lang"]['group'] = 'المجموعة';

$GLOBALS["lang"]['has not been set'] = 'لم يحدد';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = ' ( عكسي عكسي لـ لـ قابل سي سي سي سي سي سي سي سي سي سي';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'لديها القدرة على على';

$GLOBALS["lang"]['head'] = 'الرأس';

$GLOBALS["lang"]['here'] = 'هنا';

$GLOBALS["lang"]['high availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['howto'] = 'كيف';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'إذا إلا';

$GLOBALS["lang"]['ignored'] = 'تجاهل';

$GLOBALS["lang"]['import the example device data'] = 'استيراد بيانات الأجهزة النموذجية';

$GLOBALS["lang"]['in'] = 'في';

$GLOBALS["lang"]['in Enterprise.'] = 'في المؤسسة';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Giriş aşağıdakı qiymətlər ola bilər.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'ويمكن للمخرجات أن لها';

$GLOBALS["lang"]['inactive'] = 'الخاملة';

$GLOBALS["lang"]['incomplete'] = 'ناقص';

$GLOBALS["lang"]['info'] = 'المعلومات';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Nmap-in standart quraşdırma yerlərində iştirakı üçün test edəcək';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'المقطع والفول والفول';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'معيار الولايات الذي يحتفظ';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'معيار دولي لإدارة وهو يوفر إطارا نظام نظام';

$GLOBALS["lang"]['is based upon'] = 'يستند إلى';

$GLOBALS["lang"]['is licensed to'] = 'مرخص له';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'هو التالي القائمة ويمكن ويمكن أيضاً تستخدم شركة شركة Ən yaxşı nəticələr üçün, kök istifadəçisi və ya sudo təhlükəsiz istifadəçi istifadə etmək lazımdır (Wiki\'de kök və Target Client konfiqurasiya olmadan Auditing Linux). ويمكن لأجهزة تنفجر، أن أن تنفجر، كشفت';

$GLOBALS["lang"]['is the link to the'] = 'هو الصلة مع';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'بند للنظر إلى المحددة هذا سيمكّنك تحتاجه ما ما';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'المفتاح المطلوب الخيط الخيط';

$GLOBALS["lang"]['left'] = 'يسار';

$GLOBALS["lang"]['less or equals'] = 'أقل أو مساوية';

$GLOBALS["lang"]['less than'] = 'أقل من';

$GLOBALS["lang"]['license'] = 'الترخيص';

$GLOBALS["lang"]['licenses'] = 'التراخيص';

$GLOBALS["lang"]['like'] = 'مثل';

$GLOBALS["lang"]['line'] = 'السطر';

$GLOBALS["lang"]['list'] = 'القائمة';

$GLOBALS["lang"]['list View, using the Create button'] = 'القائمة فيو، باستخدام الكريت';

$GLOBALS["lang"]['load balancing'] = 'الموازنة';

$GLOBALS["lang"]['location'] = 'الموقع';

$GLOBALS["lang"]['locations'] = 'المواقع';

$GLOBALS["lang"]['managed'] = 'إدارة';

$GLOBALS["lang"]['methods'] = 'الأساليب';

$GLOBALS["lang"]['microsoft'] = 'Microsoft';

$GLOBALS["lang"]['mount point'] = 'النقطة';

$GLOBALS["lang"]['must'] = 'يجب أن يجب';

$GLOBALS["lang"]['network'] = 'الشبكة';

$GLOBALS["lang"]['news'] = 'الأخبار';

$GLOBALS["lang"]['no'] = 'لا';

$GLOBALS["lang"]['node'] = 'العقد';

$GLOBALS["lang"]['none'] = 'لا شيء';

$GLOBALS["lang"]['normal'] = 'طبيعي';

$GLOBALS["lang"]['not applicable'] = 'لا ينطبق';

$GLOBALS["lang"]['not in'] = 'لا';

$GLOBALS["lang"]['not like'] = 'ليس مثل';

$GLOBALS["lang"]['notice'] = 'الإشعار';

$GLOBALS["lang"]['notification'] = 'الإخطار';

$GLOBALS["lang"]['okta'] = 'حسنا';

$GLOBALS["lang"]['on devices where'] = 'على الأجهزة';

$GLOBALS["lang"]['openldap'] = 'مفتوحة';

$GLOBALS["lang"]['optimized'] = 'الاستخدام الأمثل';

$GLOBALS["lang"]['optionally '] = 'اختياريا ';

$GLOBALS["lang"]['or'] = 'أو';

$GLOBALS["lang"]['or the GitHub page at'] = 'أو صفحة جيت في';

$GLOBALS["lang"]['other'] = 'أخرى';

$GLOBALS["lang"]['package'] = 'طرد';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'الصفحة تصدير خادمك من قائمة الطعام الطعام ادمين ادمين ادمين قائمة قائمة هذه هذه هذه هذه هذه';

$GLOBALS["lang"]['partition'] = 'التجزئة';

$GLOBALS["lang"]['pass'] = 'المرور';

$GLOBALS["lang"]['pending'] = 'معلقة';

$GLOBALS["lang"]['performance'] = 'الأداء';

$GLOBALS["lang"]['performed'] = 'أُنجز';

$GLOBALS["lang"]['permission'] = 'إذن';

$GLOBALS["lang"]['permissions required per endpoint'] = 'الإذن المطلوب لكل نهاية';

$GLOBALS["lang"]['pie'] = 'فطيرة';

$GLOBALS["lang"]['planning'] = 'التخطيط';

$GLOBALS["lang"]['predictable'] = 'يمكن التنبؤ به';

$GLOBALS["lang"]['query'] = 'الاستفسار';

$GLOBALS["lang"]['rear'] = 'arxa';

$GLOBALS["lang"]['rear-left'] = 'العمود الخلفي';

$GLOBALS["lang"]['rear-right'] = 'الحق الخلفي';

$GLOBALS["lang"]['regex'] = ' reg';

$GLOBALS["lang"]['release'] = 'الإفراج';

$GLOBALS["lang"]['removed from display, but has been set'] = 'أزيلت من ولكن تم';

$GLOBALS["lang"]['reserved'] = 'محجوزة';

$GLOBALS["lang"]['right'] = 'الحق';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'يمكنك أن تضغط القيمة';

$GLOBALS["lang"]['role'] = 'الدور';

$GLOBALS["lang"]['room'] = 'الغرفة';

$GLOBALS["lang"]['row'] = 'الصف';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'لم تبدأ بسبب الخطأ';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'إذاً أن أن أن أن أن';

$GLOBALS["lang"]['stand-alone'] = 'قائمة بذاتها';

$GLOBALS["lang"]['standard'] = 'المعيار';

$GLOBALS["lang"]['starts with'] = 'يبدأ مع';

$GLOBALS["lang"]['storage'] = 'التخزين';

$GLOBALS["lang"]['subnet'] = 'الشبكة الفرعية';

$GLOBALS["lang"]['table'] = 'الجدول';

$GLOBALS["lang"]['table and insert the original rows.'] = 'طاولة وأدخل الصفوف الأصلية';

$GLOBALS["lang"]['team'] = 'فريق';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'النص الأول القياسي القياسي القياسي القياسي القياسي كما ويستخدم المؤشر في للنظر';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'ثم نضغط زر التفاصيل';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'ثم نضغط زر التفاصيل';

$GLOBALS["lang"]['timestamp'] = 'الزمان';

$GLOBALS["lang"]['to'] = 'إلى';

$GLOBALS["lang"]['to create an item of this type'] = 'لخلق بند من النوع';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'إلى قاعدةِ قاعدةِ على على قاعدةِ';

$GLOBALS["lang"]['to the user'] = 'إلى المستخدم';

$GLOBALS["lang"]['top'] = 'أعلى';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'سرية للغاية - تصنيف عسكري/حكومي وسيتسبب الكشف المعلومات في

سرية - تصنيف عسكري/حكومي وسيتسبب الكشف المعلومات في

السرية - تصنيف القطاع وتشمل البيانات والبيانات التجارية، التجارية، ولا تتاح البيانات هذا هذا ويقتضي الوصول إلى السرية السرية

تصنيف القطاع الخاصة البيانات البيانات

حساسية - تصنيف الحكومة والقطاع وتشمل البيانات الحساسة المالية المالية فالكشف قد يضر

تصنيف القطاع العام العامة العامة ومن أمثلة البيانات عدد عدد

غير مصنفة - تصنيف عسكري/حكومي أي معلومات يمكن عموما عموما

غير موقّع - التقصير حتى موقع التصوير -';

$GLOBALS["lang"]['traffic'] = 'حركة المرور';

$GLOBALS["lang"]['true'] = 'صحيح';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'صحيح أو (في سياق الورقة)';

$GLOBALS["lang"]['unallocated'] = 'غير محمية';

$GLOBALS["lang"]['unauthorised'] = 'غير مأذون به';

$GLOBALS["lang"]['unchanged'] = 'بدون تغيير';

$GLOBALS["lang"]['unknown'] = 'مجهول';

$GLOBALS["lang"]['unmanaged'] = 'غير محكومة';

$GLOBALS["lang"]['unused'] = 'غير مستخدم';

$GLOBALS["lang"]['update'] = 'آخر المستجدات';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'تستخدم البيانات من جمعها جمعها يسمح باستخدام البطاقات على <i>تطابق</i> الحقل الذي البرمجيات إسمه';

$GLOBALS["lang"]['using the main menu items.'] = 'باستخدام بنود القائمة الرئيسية';

$GLOBALS["lang"]['valid'] = 'صحيح';

$GLOBALS["lang"]['version'] = 'نسخة';

$GLOBALS["lang"]['virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['warning'] = 'تحذير';

$GLOBALS["lang"]['web'] = 'شبكة الإنترنت';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'مع تصريحات الدخول والرادالية';

$GLOBALS["lang"]['with devices::update permission.'] = 'مع: الإذن المستكمل.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'مع الإشارة أون توجيه';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'مع نية وصول بسيط Bu API\'ya əlavə, web interfeys eyni istehsal formatını istifadə edəcək və əlavə əlavə fəaliyyətləri təmin edəcək (eg: HTML komponentləri yaratmaq üçün).';

$GLOBALS["lang"]['yes'] = 'نعم';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'أنت لا رخصة قيادة';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'ستعين أيّ مُكتشفة إلى';

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

