<?php

$GLOBALS["lang"][' Default, currently '] = ' التقصير، حاليا ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' يُدعم الآن بملف للغة. لتغيير مستعملك لاستخدام هذه اللغة ';

$GLOBALS["lang"][' seconds'] = ' ثواني';

$GLOBALS["lang"]['10 Minutes'] = '10 دقائق';

$GLOBALS["lang"]['15 Minutes'] = '15 دقيقة';

$GLOBALS["lang"]['30 Minutes'] = '30 دقيقة';

$GLOBALS["lang"]['5 Minutes'] = '5 دقائق';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>ملاحظة</strong> - أنت تَصِلُ إلى هذا URL مِنْ خادمِ مفتوحِ المحليِ. النص المُحمّل لن يكون قادراً على التقديم عند تشغيل أي آلة أخرى إذا كنت بحاجة إلى مراجعة الآلات الأخرى، يرجى تحميل السيناريو من أي آلة نائية، وليس استخدام بروزر على الخادم المفتوح باب العضوية.';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ملاحظة</strong> -لا بدّ أنّ لديكِ أوراق اعتماد (إتش إس إيه) أو (إس إس إتش) الرئيسيّة لتنفيذ المعايير على جهاز مستهدف</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>خط الأساس</strong> - الوثيقة الشاملة التي تتضمن تعريف خط الأساس واختبارات السياسات الفردية.<br/> <br/> <strong>السياسات</strong> - الاختبارات الفردية الواردة في خط الأساس. كل اختبار يتعلق ببند محدد ومن الأمثلة على ذلك اختبار النسخة 1-2-3 من الوثيقة SSH.<br/> <br/> <strong>التفاصيل</strong> - يمكن لخطوط الأساس أن تقارن موانئ ومستعملي وبرمجيات صافية.<br/> <br/> <strong>البرمجيات</strong> -لمقارنة البرمجيات التي نتحقق منها لأن أرقام النسخ غير موحّدة في الشكل، عندما نتلقى نتيجة مراجعة الحسابات، ننشئ قاعدة جديدة تسمى البرمجيات التي نخزنها في قاعدة البيانات إلى جانب بقية تفاصيل البرامجيات لكل طرد. ولهذا السبب، فإن خطوط الأساس التي تستخدم سياسات البرمجيات لن تعمل عند تشغيلها ضد جهاز لم يراجع حساباته بحلول 1-10 (على الأقل). سياسات البرمجيات يمكن أن تختبر ضد النسخة التي تكون "عادل" أو "أكثر من" أو "عادل أو أكثر"<br/> <br/> <strong>Netstat Ports</strong> - شركة (نايتست بورتز) تستخدم مجموعة من رقم الميناء، بروتوكول وبرنامج إذا كان الجميع حاضرين فإن السياسة تمر<br/> <br/> <strong>المستخدمون</strong> -المستعملون يعملون مثل ميناء (نيتست) If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>الموقع هو عنوان مادي يمكن أن يكون له أجهزة مرتبطة به.<br/> <br/>يمكنك تعيينه إحداثيات (الطول) وإذا كانت هناك أجهزة مُعينة، سيظهر الموقع على خريطة شركة "إف بي أوديت"<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br>Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br> <br></p>'] = '<p>وتستمد الشبكة من نقاط الاكتشاف وخصائص الأجهزة.<br/> <br/>ولا يمكن تشكيل المعهد المفتوح باب العضوية إلا لقبول نتائج مراجعة الحسابات من الشبكات الواردة هنا. ليضع هذا في التشكيلة ويضع الصفات <code>blessed_subnets_use</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>وسيعرض موجز قائمة بالبنود، مجمّعة بالقيم المتميزة للمعزوّد بها <code>table</code> و <code>column</code> سمات<br/> <br/>وعند تنفيذ موجز، ستكون النتيجة قائمة بالقيم المتميزة لذلك <code>table</code> و <code>column</code>. ستكون هناك روابط على القيم التي تسمح للمستعمل برؤية أجهزة المطابقة<br/> <br/>إذا كانت سمة <code>extra_columns</code> وتحتوي الصفحة الناتجة عن ذلك على هذه الأعمدة بالإضافة إلى أعمدة الأجهزة القياسية.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>العملاء سمحوا لك بمراجعة حسابات الشركات بدون اكتشاف تركيب الوكيل وسيتفقد الخادم كل يوم ويراجع نفسه لا يهم إذا كانت أجهزة الكمبيوتر الخاصة بك تم إشعالها، بيانات مراجعة الحسابات لا تزال تظهر في قاعدة البيانات المفتوحة.</p><p>عند الاختبار <strong>إذا</strong> وينبغي لوكيل أن يقوم بأعمال، ويجب أن تمر جميع الاختبارات الثلاثة (إذا تم تحديد الاختبار). <strong>ثم</strong> تتخذ الإجراءات.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>تُعرّفُ الطلباتَ مِن قِبلك، المُستعمل والمُخزّن لـ (إفتتاح) لاستخدام الأجهزة والارتباط بها.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>وتُخزَّن المواصفات لكي تستخدم في حقول معينة.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>والتمكن من تحديد أي آلات يتم تشكيلها هو جزء رئيسي من إدارة النظم ومراجعة الحسابات - وسيصبح الإبلاغ عن ذلك الآن بسيطا وآلية. بمجرد أن تحدد خط الأساس الخاص بك هو تلقائيا تشغيل ضد مجموعة من الأجهزة على جدول محدد مسبقا. وسيكون ناتج خطوط الأساس هذه المنفذة متاحاً للاستطلاع على شبكة الإنترنت، أو للاستيراد إلى نظام طرف ثالث أو حتى كتقرير مطبوع.<br/> <br/> ويمكنك خطوط الأساس من الجمع بين بيانات مراجعة الحسابات ومجموعة من الخصائص التي سبق أن حددتموها (خط الأساس) لتحديد مدى امتثال الأجهزة.<br/> <br/> على سبيل المثال، قد تخلق خط أساس من جهاز تشغيل Centos 6 الذي يعمل كأحد خواديمك في مجموعة. أنت تعرف أن هذا الخادم الخاص مصمم بالطريقة التي تريدها لكنك غير متأكد إذا كانت الخواديم الأخرى في المجموعة مصممة تماماً القاعدة تمكنك من تحديد هذا<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>وتُخزَّن المجموعات في نظام &quot; مفتوح العضوية &quot; من أجل الأجهزة الشريكة من أجل تحسين تسجيل وإدارة وتقدير تكاليف الترخيص.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>المكونات عبارة عامة تستخدم للجداول التي تخزن الخواص للجهاز وهذه الجداول هي: الوصول إلى النقاط، والارتفاع، والبيولوجيا، والشهادة، والخزانات، والملف، والرق، والسجل، والذاكرة، والنمط، والشاشة، والشاشة، والشبكة، والصورة، والصفوف، والتجزئة، والسياسة العامة، والمتغيرات المطبوعة، والمجهزة، والراديو، والشعار، والخادم، والخدمة، والنسخ، والبرمجيات</p><p> وبالإضافة إلى ذلك، نصنف الجداول التالية أيضا على أنها ذات صلة بالجهاز: التطبيق، الملحق، المجموعة، الابتكار، الصورة.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>ويتم تشفير وثائق التفويض عند تخزينها في قاعدة البيانات.<br/> <br/>عندما يتم تشغيل جهاز الكشف، يتم استرجاع وثائق تفويضه واختبارها للتواصل أولا (من) <code>credential</code> الجدول). If these fail, then accreditation associated with the given Org <code>credentials.org_id</code> كما يجري اختبارها ضد الجهاز. وثائق تفويض العمل مخزنة على مستوى جهاز فردي في طاولة الخلود (الحاشية - لا كلمة "س" باسم الطاولة.<br/> <br/>SSH keys are tested before SSH username / password. وعند اختبار SSH، ستوضع أيضا علامات على وثائق التفويض بأنها تعمل بالسودو أو تكون جذورها.<br/> <br/>وتيسيراً للاستخدام، لا ينبغي أن تتضمن كلمات السر في ويندوز اقتباساً واحداً أو مزدوجاً. هذا هو الحد البعيد من أسلحة الدمار الشامل، وليس قيد مفتوح.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>وتستخدم وثائق التفويض في أجهزة الوصول.<br/> <br/>أوراق التوثيق يجب أن تكون واحدة من أول الأشياء التي تقوم بها بعد تركيبها<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>حددوا رفوفكم وعينوا الأجهزة في مواقعهم أنت بالفعل لديك أجهزة الخاص بك في فتح أوديت وأنت تعرف مواقعك. (أوديت) يمدّد هذا ليسمح لك بصنع رفّة ويعين أجهزة له. وسيتيح فتح باب الاشتراك في برنامج &quot; أوديت &quot; رؤية للثكنة والأجهزة الواردة فيها. إذا قدمت صورة جهاز، تلك الصورة سوف تستخدم في التصوير. يمكنك النظر إلى الرف على الشاشة ورؤية نفس الأشياء التي سترى إن كنت تقف أمامها<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>الأجهزة على شبكتك يجب أن تدار لكن كيف تحافظ على سجلاتك حتى الآن؟ صحيفة منتشرة - لا ذلك سيكون خارج الموعد خلال ساعات إن لم يكن أياماً لماذا يدوياً يحاول الإستمرار استعملي "أوديت" للمسح الآلي لشبكاتكم و سجلوا أجهزةكم قوائم كاملة بالبرامجيات والخدمات والأقراص والموانئ المفتوحة والمستعملين وما إلى ذلك. معرفة ما إذا كان قد أضيفت أو أزيلت أو تغيرت.<br/> <br/>بمجرد أن يجهز فتح الباب يمكنك الجلوس والاسترخاء على سبيل المثال ما هي الأجهزة الجديدة التي اكتشفناها هذا الأسبوع؟ أي برنامج جديد تم تركيبه هذا الأسبوع؟ هل كان هناك أي تغيرات في المعدات الشهر الماضي؟<br/> <br/>توسيع الحقول المخزنة بسهولة مع خصائصك الخاصة<br/> <br/>حتى أضيف أجهزة غير مرتبطة بشبكتك أو تلك الأجهزة التي لا يستطيع خادمك المفتوح الوصول إليها<br/> <br/>الحواسيب، والمفاتيح، والمسارات، والطابعات أو أي جهاز آخر على شبكتك - يمكن فتح قاعدة البيانات أن يراجعها كلها.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>الاكتشافات في قلب ما يفعله (أود) المفتوحة<br/> <br/>كيف تعرف أيضاً "ما الذي على شبكتي؟"<br/> <br/>الاكتشافات هي مواد البيانات التي تمكنك من إدارة الاكتشافات على شبكة من النقرات دون الدخول في تفاصيل تلك الشبكة كل مرة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>الكشف الخيارات تغيرت في الإطار العالمي <a href="../configuration?configuration.name=discovery_default_scan_option">التشكيل</a>. إذا كان لديك رخصة شركة مفتوحه هذه مثبتة لكل اكتشاف و بالإضافة إلى برمجيات غير مكتملة حسب الاقتضاء الكشف والخيارات هي كما يلي (بما في ذلك فترة إرشادية لمسح معياري فردي):<br/><br/><strong>UltraFast</strong>: <i>ثانية</i>. Scan only the ports that Open-AudIT needs to use to talk to the tool and detect an IOS tool (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ولا تعتبر الموانئ مفتوحة. يجب أن يستجيب جهاز التنقيب استخدام التوقيت العدواني.<br/><br><strong>SuperFast</strong>: <i>5 ثوان</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ولا تعتبر الموانئ مفتوحة. يجب أن يستجيب جهاز التنقيب استخدام التوقيت العدواني.<br><br/><strong>بسرعة</strong>: <i>40 ثانية</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ولا تعتبر الموانئ مفتوحة. يجب أن يستجيب جهاز التنقيب استخدام التوقيت العدواني.<br/><br/><strong>متوسطة (كلاسيك)</strong>: <i>90 ثانية</i>. على مقربة من مسح تقليدي مفتوح كما يمكننا القيام به. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ويعتبر الميناء مفتوحا (وسيؤدي إلى الكشف عن الأجهزة). يتم مسح النبائط بغض النظر عن الرد على نغمة. استخدام التوقيت العدواني.<br/><br/><strong>متوسطة</strong>: <i>100 ثانية</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ولا تعتبر الموانئ مفتوحة. يجب أن يستجيب جهاز التنقيب استخدام التوقيت العدواني.<br/><br/><strong>بطيئة</strong>: <i>4 دقائق</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). مُمكّن من كشف الصور. An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ويعتبر الميناء مفتوحا (وسيؤدي إلى الكشف عن الأجهزة). يجب أن يستجيب جهاز التنقيب استخدم التوقيت الطبيعي<br/><br/><strong>UltraSlow</strong>: <i>20 دقيقة</i>. غير موصى به. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). يتم مسح النبائط بغض النظر عن الرد على نغمة. مُمكّن من كشف الصور. An <code>open|filtered</code> ويعتبر الميناء مفتوحا. ألف <code>filtered</code> ويعتبر الميناء مفتوحا (وسيؤدي إلى الكشف عن الأجهزة). استخدم توقيت مهذب<br/><br/><strong>العرف</strong>: <i>وقت غير معروف</i>. عندما يتم تغيير خيارات أخرى غير الخيارات المحددة مسبقاً للاكتشافات الموحدة.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>وتُستخدم المجموعات كقوائم بسيطة من الأجهزة تتطابق مع الظروف المطلوبة. If requested using JSON they return a list of <code>devices.id</code> فقط وإذا طُلب منهم استخدام واجهة الويب، فإنهم يعيدون قائمة المعالم القياسية.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>وإذا لم يكن لدى المستخدم الذي يسجل دخوله إلى قاعدة البيانات المفتوحة إمكانية البحث في برنامج العمل الطويل الأجل (وأنت تستخدم برنامج &quot; OpenLDAP &quot; )، فيمكنك استخدام حساب آخر يملك هذا الوصول. استخدام <code>ldap_dn_account</code> و <code>ldap_dn_password</code> لفرض هذا<br/> <br/><strong>الوثائق المساعدة</strong><br/> <br/><a href="/index.php/auth/help">اللواء (أوث)</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">استخدام الدخول إلى (أوث)</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">استخدام الموافقة المسبقة عن علم</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">المشاكل التي تصيب لوجينز</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">المستخدمين والأدوار والأوغاد</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>إذا أضفت جهازاً من نوعه، لإظهار الأيقونة المرتبطة به... ... عليك أن تنسخ يدوياً الملف المزيف إلى الدليل:<br/><em>لينكس</em>:/usr/local/open-audit/public/device_images<br/><em>النوافذ</em>: c:/xampp/htdocs/open-audit/device_images<br/> <br/>إذا أضفت موقعاً من نوعه، لإظهار الأيقونة المرتبطة به... ... عليك أن تنسخ يدوياً...<br/><em>لينكس</em>:/usr/local/open-audit/public/images/map_icons<br/><em>النوافذ</em>: c:/xampp/htdocs/open-audit/images/map_icons</p><p>عندما <i>الموارد</i> هو <code>device</code>صحيح <i>الأنواع</i> هي: <code>class</code>.. <code>environment</code>.. <code>status</code> و <code>type</code>. إذا كان <i>الموارد</i> هو <code>locations</code> أو <code>org</code> الوحيد الصالح <i>النوع</i> هو <code>type</code>. إذا كان <i>الموارد</i> هو <code>query</code> الوحيد الصالح <i>النوع</i> هو <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>إذا كنت تنوي مراجعة آلات السحب الخاصة بك تماما، لا ننسى أنك سوف تحتاج أيضا تلك أوراق الاعتماد التي تم توفيرها في فتح الباب.</p><p>تأكد من السماح للموانئ الصحيحة إذا كنت تستخدم ميكروسوفت أزور (22 لSH، إلخ). تحقق من الآلة الافتراضية قواعد التواصل<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>إذا اخترت نوع من القائمة، حقل "قيم" سوف يتم تمكينه. يجب أن تضع قائمة مفصّلة من القيم القابلة للاختيار هنا هذه ستظهر في صندوق الإنزال عندما يتم تحرير الحقل<br/> <br/>مثل معظم السمات الأخرى يمكن تحرير الحقول بشكل كبير استخدم وظيفة (بولك إيديت) كما تفعل عادة وسترى أن الحقول متاحة للمدخلات<br/> <br/>انظر إلى تفاصيل الجهاز، افتح القسم المحتوي على الحقل و (إذا كان لديك ما يكفي من الوصول) يمكنك أن تضغط على القيمة الميدانية لتحريره.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>وفي عالم الأمن الحاسوبي الذي يتغير باستمرار حيث يتم اكتشاف مواطن ضعف جديدة وتصحيحها كل يوم، يجب أن يكون إنفاذ الامتثال الأمني عملية مستمرة. كما ينبغي أن تشمل طريقة لإجراء تعديلات على السياسات، فضلا عن التقييم الدوري ورصد المخاطر. ويوفر النظام الإيكولوجي المفتوح باب العضوية أدوات وسياسات قابلة للمواءمة من أجل التنفيذ السريع والفعال من حيث التكلفة والمرن لهذه العمليات.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>الاندماجات تسمح لك باختيار الأجهزة والجداول الزمنية للحديث مع النظم الخارجية<br/> <br/></p>';

$GLOBALS["lang"]['<p>It is easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen over time. All the devices discovered last week, last month or any other period. New software found. What about devices that have not been seen - where are they? How useful to be able to specify these items over time.<br> <br></p>'] = '<p>ومن السهل رؤية التقارير على مر الزمن مفيدة للغاية. ليس فقط يمكنك رؤية البيانات المفتوحة، ولكن الآن ما رأيته على مر الزمن. جميع الأجهزة المكتشفة الأسبوع الماضي، الشهر الماضي أو أي فترة أخرى. البرامج الجديدة وجدت ماذا عن الأجهزة التي لم يتم رؤيتها أين هي؟ مدى فائدة القدرة على تحديد هذه البنود بمرور الوقت.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>وترد تفاصيل توقيت الاختناق في الجزء السفلي من هذه الصفحة <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. من تلك الصفحة:<br/> <br/><em>إذا كنت على نطاق واسع لائق أو اتصال عبر الإنترنت، وأنا أوصي دائما باستخدام - T4 (Aggressive). بعض الناس يحبون (تي 5) رغم أنه عدواني جداً على ذوقي People sometimes specify - T2 (Polite) because they think it is less likely to destroy hosts or because they consider themselves to be polite in general. غالباً ما لا يدركون كم هو بطيء فحصهم قد يستغرق عشر مرات أطول من المسح الافتراضي إن حوادث تحطم الآلات ومشاكل الضمادات نادرة مع خيارات التوقيت الافتراضي - T3 (Normal) ولذا فإنني أوصي بذلك عادة لأجهزة المسح الحذر. والكشف عن النسخ المخفف أكثر فعالية بكثير من التلاعب بقيم التوقيت في الحد من هذه المشاكل.</em><footer>غوردون <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>ويمكن تشكيل قاعدة البيانات المفتوحة لاستخدام أساليب مختلفة لتوثيق هوية المستخدم، بالإضافة إلى إنشاء حساب للمستعمل باستخدام الأدوار والأعراف المحددة استناداً إلى عضوية المجموعة.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>مفتوح ويمكن لتكنولوجيا المعلومات أن تسترجع تفاصيل عن ملف أو دليل للملفات وأن ترصد هذه الملفات للتغييرات حسب خصائص أخرى في قاعدة البيانات المفتوحة.<br/> <br/>وتعمل هذه الميزة خارج الصندوق الخاص بخواديم لينكس المفتوحة، ولكنها تحتاج إلى تغيير في اسم حساب الخدمة تحت خادم ويندوز مفتوح العضوية.<br/> <br/>العملاء المدعومين هم (ويندوز) و (لينكس)<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>مفتوح ويمكن لتكنولوجيا المعلومات أن تسترجع تفاصيل عن ملف ما، وأن تسأل مدير الطرد المحلي إذا كان معروفاً به، وأن ترصد هذه الملفات للتغييرات حسب خصائص أخرى في قاعدة البيانات المفتوحة.<br/> <br/>العملاء المدعومين هم لينكس فقط.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>مفتوح ويمكن لتكنولوجيا المعلومات أن تخزن المعلومات في ميادين العرف المرتبطة بكل جهاز.<br/> <br/>وبمجرد إنشاء حقل إضافي يمكن استخدامه في الاستفسارات والمجموعات مثل أي عزو آخر في قاعدة البيانات.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>فتح الباب يأتي مع الكثير من الاستفسارات في البناء. إذا كنت بحاجة إلى استفسار محدد ولا شيء من الاستفسارات التي سبق أن حزمت احتياجاتك، فمن السهل جدا خلق واحد جديد وحمله في فتح-أوديت للركض.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>فتح الباب يأتي مع العديد من الملخصات إذا كنت بحاجة إلى موجز محدد ولا أحد من الملخصات المجهزة مسبقاً يلائم احتياجاتك، فمن السهل جداً إنشاء واحد جديد وحمله في برنامج مفتوح للهرب.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>ويحظى برنامج &quot; أوديت المفتوحة &quot; بدعم &quot; أول واف &quot; بمستوى مذهل من الدعم. إذا كنت تفضل مجتمع نشط من مقدمي الدعم، هناك ذلك أيضا. أين يمكنك التحدث مباشرة إلى المطورين والحصول على رد خلال 24 ساعة؟ فقط حاول ذلك مع منتجات أخرى! دعم مذهل توقف بالكامل تحتاج الدعم، نحن نقدم الدعم. لا إن كان أو لكن دعم عظيم الفترة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>(أوديت) المفتوحة توفر الكثير من المال<br/> <br/>والأوغاد (التنظيمات) في فتح الباب هي بند رئيسي. المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها المستعمل يجمع هذه مع قائمة من "الجرائم" المُعينة التي تحدد الإجراءات التي يمكن أن يتخذوها بشأن المواد المُخصصة للـ(الأوغاد) التي يمكنهم الوصول إليها. مزيج من مستعملين "أوغس" و"أحجار" يحدد ما يمكن ولا يمكن أن يفعلوه في "إفتتاح"<br/> <br/>وتُخصص معظم المواد في نظام &quot; أوروغ &quot; (Pop-AudIT).<br/> <br/>الأورام يمكن أن يكون لها أطفال أورجز. فكّر في الهيكل التنظيمي (الإطار). إذا كان للمستعمل الوصول إلى أورغ محدد، لديهم أيضا إمكانية الوصول إلى المنحدرين من الأورق. للمزيد من المعلومات، شاهد هذا <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>(أوديت) المفتوحة توفر الكثير من المال<br/> <br/>والأوغاد (التنظيمات) في فتح الباب هي بند رئيسي. المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها المستعمل يجمع هذه مع قائمة من "الجرائم" المُعينة التي تحدد الإجراءات التي يمكن أن يتخذوها بشأن المواد المُخصصة للـ(الأوغاد) التي يمكنهم الوصول إليها. مزيج من مستعملين "أوغس" و"أحجار" يحدد ما يمكن ولا يمكن أن يفعلوه في "إفتتاح"<br/> <br/>وتُخصص معظم المواد في نظام &quot; أوروغ &quot; (Pop-AudIT).<br/> <br/>الأورام يمكن أن يكون لها أطفال أورجز. فكّر في الهيكل التنظيمي (الإطار). إذا كان للمستعمل الوصول إلى أورغ محدد، لديهم أيضا إمكانية الوصول إلى المنحدرين من الأورق.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>أنظر بسرعة إلى حالة الأجهزة على شبكتك<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>الأدوار في الاجتماعات المفتوحة إنها بند رئيسي المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها ويجمع المستخدم بين هذا وبين قائمة بالأدوار المسندة التي تحدد الإجراءات التي يمكن أن تتخذها بشأن المواد المخصصة للأوغاد التي تتاح لهم الوصول إليها. مزيج من مستعملين "أوغس" و"أحجار" يحدد ما يمكن ولا يمكن أن يفعلوه في "إفتتاح"<br/> <br/>إحصل على تجربة شركة (أود) المفتوحة إن إنشاء الأدوار يتيح السيطرة الدقيقة على ما يمكن لمستعمليكم القيام به في إطار المبادرة المفتوحة.<br/> <br/>وتستند الطريقة الرئيسية للترخيص (ما يمكن للمستعمل أن يفعله) إلى دور المستعملين. وتُعرَّف الأدوار الافتراضية بأنها &quot; org admin &quot; والمراسل والمستعمل. ولكل دور مجموعة من التصاريح (الاختبار، القراءة، التحديث، حذف) لكل نقطة نهاية. وتتاح القدرة على تحديد أدوار إضافية وتحرير الأدوار القائمة في المؤسسة المفتوحة للاستثمار.<br/> <br/>ويمكن أيضاً استخدام الأدوار بإذن من برنامج العمل من أجل التنمية في أفريقيا (دليل إيجابي ودليل مفتوح). وللمنشآت المرخصة لدى المؤسسة القدرة على تكييف مجموعة برامج العمل الطويلة الأجل لكل دور محدد.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>وتنظر القواعد في السمات وتجعل الكهنغ على أساس القاعدة المناسبة.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>خيارات المسح تسمح لك بتطبيق مجموعة من الخيارات بسهولة على اكتشاف<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Piple, intuitive, accurate geographical mapping provided by Google Maps. نفوذ مفتوح Google Maps to provide live, interactive geographical mapping of tool locations. تحويل عناوين الشوارع آلياً إلى الجيوديوس وطول خط العرض/الخط العرض.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>وتستخدم عبوات البرمجيات لتحديد ما إذا تم تركيب برامجيات مضادة للفيروسات أو الدعم أو جدار الحماية أو البرمجيات المعتمدة أو المحظورة.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>ومن الأمثلة على الخصائص الصحيحة للشبكة الفرعية ما يلي: 192.168.1.1 (عنوان واحد من العنوان IP)، و 192.168.1.0/24 (a subnet)، و 192.168.1-3.1-20 (مجموعة من عناوين شركاء التنفيذ).<br/> <br/><em>ملاحظة</em> - فقط شبكة فرعية (وفقا للأمثلة - 192.168.1.0/24) ستتمكن تلقائيا من إنشاء شبكة صالحة للشبكة المفتوحة. <br/> <br/>إذا كنت تستخدم نوع الدليل النشط، تأكد أن لديك وثائق تفويض مناسبة للحديث مع المراقب المالي الخاص بك <a href="../credentials">وثائق التفويض</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>المعايير مخزنة في قاعدة البيانات المفتوحة.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>العملاء المدعومين هم لينكس فقط.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>المهام لها جدول زمني يعكس الجدول الزمني الموحد السمات للدقيقة، ساعة، يوم... الشهر، اليوم... يمكنك اختيار العديد من هذه باستخدام القيم المختومة (لا أماكن) يمكنك اختيار كل قيمة باستخدام<br/> <br/>The <code>type</code> ويمكن أن تكون المهمة واحدة من: خطوط الأساس، أو المجمّعين، أو الاكتشافات، أو الاستفسارات، أو التقارير، أو الملخصات.<br/> <br/>إذا كنت ترغب في تحديد خط الأساس أو الاكتشاف، سوف تحتاج إلى إنشاء هذه قبل إنشاء المهام. يجب أن تستخدم الهوية من نوع البند في <code>sub_resource_id</code>. على سبيل المثال إذا كنت ترغب في جدولة الاكتشافات، استخدام تلك المعلومات الخاصة <code>sub_resource_id</code>.<br/> <br/>القيمة <code>uuid</code> محدد لكل خادم مفتوح قيمتك الفريدة يمكن العثور عليها في التشكيلة<br/> <br/>The <code>options</code> والسندات هي وثيقة مشتركة تتضمن أية خصائص إضافية مطلوبة لأداء المهمة. أما الخصائص الإضافية للتقارير والاستفسارات والملخصات فهي: <code>email_address</code> و <code>format</code>. (المعزوة الإضافية لـ(بسيلين <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> الموقع سيحدد رمزه<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu category for Queries. إذا رأيتم شيئاً واحداً من الأنواع البشعة ستلاحظون أن عزو النوع يجب أن يتم اختياره من صندوق الإنزال هنا تخزن تلك القيم لذلك، إذا كنت ترغب في إضافة نوع جديد يتم اختياره لأماكن، إضافة ذلك باستخدام السمات الخاصة.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>سمة المُجمعات تمكّنك من إدارة العديد من حواسيب "المُدير" التي تقوم باكتشاف الشبكة جميع المُجمعين يُسيطر عليهم مركزياً من الخادم The only required network ports between the Collector and the Server are 80 and/or 443.<br/> <br/>يجعل إدارة الشبكات المتفرقة سريعة وسهلة وبسيطة. وتحصل تراخيص المؤسسات المفتوحة على رخصة جامع واحدة تشمل خيار شراء المزيد حسب الاقتضاء.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>الجزء المؤثر من موقعك <em>يجب أن يجب</em> تحتوي على أعمدة مؤهلة بالكامل. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>الجزء الخاص بك <em>يجب أن يجب</em> احتواء <code>WHERE @filter</code> إذاً (أوديت) المفتوح يعرف أن يقيد سؤالك إلى (أورق) المناسبة SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br/> <br/>مثال على ذلك سؤال SQL يظهر خصائص على أجهزة لديها <code>os_group</code> عزو "لينكس" <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>الجزء المؤثر من موقعك <em>يجب أن يجب</em> فقط إحتواء <code>DISTINCT(devices.id)</code>.<br/> <br/>الجزء الخاص بك <em>يجب أن يجب</em> احتواء <code>WHERE @filter</code> إذاً (أوديت) المفتوح يعرف أن يقيد سؤالك إلى (أورق) المناسبة وسيؤدي عدم احتواء الشركة على هذه الحالة إلى عدم إنشاء المجموعة.<br/> <br/>مثال لـ SQL لاختيار جميع الأجهزة التي تدير مكتب ديبيان <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>نقطة نهاية الترخيص تسمح لك بتتبع عدد التراخيص التي وجدت على أجهزة الخاص بك.<br/> <br/>لخلق دخول لتعقب رخصتك <em>يجب أن يجب</em> تقديم اسم، ومنظمة، وعدد التراخيص المكتسبة، واسم البرمجيات. في الميدان <code>match_string</code> يجب أن تقدم اسم البرمجيات التي تريد تعقبها يمكنك استخدام علامة المئة كبطاقة برية في المباراة<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>The network should be in the format 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>The primary and optional secondary items should be fully qualified - ie, devices. نوع أو برمجيات اسم.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>ليس هناك حاجة لفعل أي شيء إذا كنت تعمل مفتوح على خادم لينكس.<br/><br/>عملاء النوافذ على ما يرام ولا يحتاجون إلى إجراءات خاصة، على أي حال... للتمكين من هذه المواصفات يجب أن يُدار نص مراجعة الحسابات محليا على نظام النافذة المستهدفة. لا يمكن تشغيله عن بعد كما نفعل مع نداءات WMI عند تشغيل نص مراجعة الحسابات على آلة ويندوز واحد، في الوقت الذي يستهدف آلة ويندوز الثانية. وللقيام بذلك، علينا أن ننسخ نص مراجعة الحسابات إلى آلة النوافذ المستهدفة ثم نديرها. لسوء الحظ حساب الخدمات الذي يديره (آباتشي) هو حساب النظام المحلي This account has no access to remote (network based) resources. وللعمل بشأن هذه المسألة، يجب إدارة الخدمة تحت حساب آخر. ومن الأسهل استخدام حساب المدير المحلي فحسب، ولكن يمكنك أن تجرب أي حساب يعجبك طالما أنه يتمتع بالامتيازات المطلوبة. ويتمتع حساب النظام المحلي بإمكانية الوصول على الصعيد المحلي كما هو الحال بالنسبة لمدير البرنامج المحلي.<br/><br/>انظر صفحتنا للتمكين <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">إدارة خدمات Apache المفتوحة تحت النوافذ</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>هذه هي الأجهزة التي تعيش داخل الرف<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>هذه النقطة النهائية تمكنك من إضافة تفاصيل البنية التحتية السحابية بعد ذلك ستصل (أوديت) إلى سحابتك مستخدماً الـ(آي بي آي) الأصليّة وتعيد خوادمك، تماماً مثل أيّ جهاز آخر في (أوديت).<br/> <br/><em>ملاحظة</em> -لإستعمال هذه الميزة <em>يجب أن يجب</em> (ب) تمكين أصناف التشكيلة من تطابق الـ (ماك) (بالنسبـة لـ Azure). وسيتم ذلك تلقائيا في المرة الأولى التي يتم فيها تنفيذ اكتشاف السحابة.<br/> <br/>وثائق تفويض لسحبك<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> أو <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>مطلوب<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>نحن في البداية وضعنا القائمة الافتراضية للنصوص مع خيارات التقصير ولا يمكن حذف هذه النصوص الافتراضية. يمكنك صنع نصوص إضافية لتستخدمها من قبلك حسب الاقتضاء السيناريو الخاص بك سيكون مستندا على واحد من النصوص الحالية ولديه خيارات العرف المطبقة. يمكن بعد ذلك تحميل النصوص من صفحة القائمة في القائمة الكشف مراجعة الحسابات بنود مراجعة الحسابات<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>عندما يستعمل (ريجكس) للتطابق يمكن العثور على صفحة مفيدة <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. بعض الاختلافات في بيرل ريجكس <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">هنا</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>الأرامل يمكن أن يخلقوا بسهولة لإظهار ما هو محدد لبيئتكم على لوحاتكم<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>مع فتح الباب المحترفين والشركة يمكنك التأقلم وبرمجة الاكتشافات أو إعداد التقارير أو فحص خط الأساس للركض عندما تريد وفي كثير من الأحيان كما تحتاج برمجوا اكتشافاتكم ليتم تشغيلها ليلاً و التقارير التي سيتم إعدادها و إرسالها إلى الموظفين الرئيسيين كل صباح الجداول المعقدة أو البسيطة، اكتشاف الأجهزة وإعداد التقارير مجرد نقرة.<br/> <br/>وضع جداول اكتشاف فردية لكل شبكة فرعية أو متحكم في إدارة التنمية، تضاف في التقارير التي ستُنشأ للجماهير المستهدفة. وضع جداول زمنية بسيطة أو معقدة لدعم احتياجات الشركات، أو تجنب الدعم أو التأثير على العمليات، أو لمجرد نشر عملية التحميل والتعجيل بإنجاز مراجعة الحسابات.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>يمكنك أن تخلق نصاً مع كل الخيارات لأي من نصوص مراجعة الحسابات الحالية ليس فقط (ويندوز) AIX, ESX, Linux, OSX and Windows are all covered.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>يمكنك استخدام النسبة المئوية للإشارة كبطاقة برية في المباراة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>رفتك تساعد على الصقل بالضبط حيث توجد أجهزةكم<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'خريطة جوجل API والمفتاح مطلوب لهذه المهمة.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'مجموعة من هويات الأجهزة التي ستنفذ المعيار';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'A JSON document containing the Orgs assigned to this user. الهوية التي أخذت من <code>orgs.id</code>. إذا كان للمستعمل الوصول إلى الأورج، لديهم إمكانية الوصول إلى أن أورجس.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'A JSON document containing the required attributes overriding the chosen discovery_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'A JSON document containing the required attributes overriding the default tool match options.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'A JSON document containing the roles assigned to this user. أسماء الأدوار الواردة من <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'A JSON object containing an range of attributes to change if the match occurs.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'A JSON object containing an array of attributes to match.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'A JSON object containing collection specific options.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'A JSON object populated via a Cloud discovery.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'A JSON representation containing the details of the queue item to be executed.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'A JSON representation of the fields for this integration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'A JSON representation of the individual tests and their results on all devices this baseline has been run against.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'A JSON representation of the tests that make up this policy.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'A URL to a file to download.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'أي جامع إمّا في المُجمّعِ أَو نظامِ الاحتياطيِ.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'قائمة منفصلة بالقيم يمكن اختيار أحدها';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'أمر للهرب عندما يكون العميل (ويندوز) مُقرّراً، فإنّ هذه القيادة تُدار من داخل عميل الصدفة.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone coincide).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'A list of custom UDP ports to scan (161 is SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'ويعني انخفاض العدد أنه سيطبق قبل قواعد أخرى.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'ويعني انخفاض العدد أنه سيطبق قبل قواعد أخرى. الوزن الافتراضي 100';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'كلمة سر (مخزنة كحشيشة) تمكّن من التسجيل عند استخدام التوثيق بالطلب.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A security zone is a administrative domain or policy domain within the Network Domain.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'وصف قصير للدخول';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'خيط يطابق <code>software.name</code> عزو. يمكنك استخدام البطاقة البرية العادية لـ (سي كي إل) في المئة لتطابق شخص أو أكثر';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'جميع الشخصيات';

$GLOBALS["lang"]['API / Web Access'] = 'API/Web Access';

$GLOBALS["lang"]['API Key required.'] = 'مطلوبة المفتاح';

$GLOBALS["lang"]['API Result'] = 'API Result';

$GLOBALS["lang"]['About'] = 'بشأن';

$GLOBALS["lang"]['Accept'] = 'قبول';

$GLOBALS["lang"]['access_point'] = 'نقطة الوصول';

$GLOBALS["lang"]['Access Point'] = 'نقطة الوصول';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'الإجراء';

$GLOBALS["lang"]['Action'] = 'الإجراء';

$GLOBALS["lang"]['action_audit'] = 'مراجعة الإجراءات';

$GLOBALS["lang"]['Action Audit'] = 'مراجعة الإجراءات';

$GLOBALS["lang"]['action_command'] = 'القيادة';

$GLOBALS["lang"]['Action Command'] = 'القيادة';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'أجهزة الاستعلام';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'أجهزة الاستعلام';

$GLOBALS["lang"]['action_download'] = 'تحميل الإجراء';

$GLOBALS["lang"]['Action Download'] = 'تحميل الإجراء';

$GLOBALS["lang"]['action_uninstall'] = 'الإجراء Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'الإجراء Uninstall';

$GLOBALS["lang"]['actioned'] = 'الإجراءات المتخذة';

$GLOBALS["lang"]['Actioned'] = 'الإجراءات المتخذة';

$GLOBALS["lang"]['actioned_by'] = 'الإجراءات التي اتخذها';

$GLOBALS["lang"]['Actioned By'] = 'الإجراءات التي اتخذها';

$GLOBALS["lang"]['actioned_date'] = 'التاريخ';

$GLOBALS["lang"]['Actioned Date'] = 'التاريخ';

$GLOBALS["lang"]['actions'] = 'الإجراءات';

$GLOBALS["lang"]['Actions'] = 'الإجراءات';

$GLOBALS["lang"]['Activate'] = 'النشاط';

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

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'المجموعة';

$GLOBALS["lang"]['Ad Group'] = 'المجموعة';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

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

$GLOBALS["lang"]['Add image'] = 'الصورة';

$GLOBALS["lang"]['additional_items'] = 'البنود الإضافية';

$GLOBALS["lang"]['Additional Items'] = 'البنود الإضافية';

$GLOBALS["lang"]['address'] = 'العنوان';

$GLOBALS["lang"]['Address'] = 'العنوان';

$GLOBALS["lang"]['admin_status'] = 'الوضع';

$GLOBALS["lang"]['Admin Status'] = 'الوضع';

$GLOBALS["lang"]['advanced'] = 'السلف';

$GLOBALS["lang"]['Advanced'] = 'السلف';

$GLOBALS["lang"]['Afghanistan'] = 'أفغانستان';

$GLOBALS["lang"]['agents'] = 'العملاء';

$GLOBALS["lang"]['Agents'] = 'العملاء';

$GLOBALS["lang"]['Aggressive'] = 'المعتدي';

$GLOBALS["lang"]['Aland Islands'] = 'جزر آلاند';

$GLOBALS["lang"]['Albania'] = 'ألبانيا';

$GLOBALS["lang"]['alert_style'] = 'Alert Style';

$GLOBALS["lang"]['Alert Style'] = 'Alert Style';

$GLOBALS["lang"]['Algeria'] = 'الجزائر';

$GLOBALS["lang"]['algorithm'] = 'Algorithm';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'كل شيء';

$GLOBALS["lang"]['All IPs'] = 'جميع شركاء التنفيذ';

$GLOBALS["lang"]['All Policies'] = 'جميع السياسات';

$GLOBALS["lang"]['All Queued Items'] = 'All Queued Items';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS الحقول';

$GLOBALS["lang"]['American Samoa'] = 'ساموا الأمريكية';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'مجموعة من <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'مجموعة من <code>devices.id</code>.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'An indication of the level of service required by this site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'حقل داخلي يشير إلى أن الاكتشاف قد اكتمل';

$GLOBALS["lang"]['An optional GeoCode'] = 'An optional GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'كلمة مرور اختيارية لاستخدام السدو.';

$GLOBALS["lang"]['Andorra'] = 'أندورا';

$GLOBALS["lang"]['Angola'] = 'أنغولا';

$GLOBALS["lang"]['Anguilla'] = 'أنغيلا';

$GLOBALS["lang"]['Antarctica'] = 'أنتاركتيكا';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'أنتيغوا وبربودا';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز TCP (محاصرة، لا أماكن) كنت ترغب في استبعاد من هذا الاكتشاف. فقط متاح عند استخدام الناغم 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز UDP (يتم غلقها، لا أماكن) ترغب في استبعادها من هذا الاكتشاف. فقط متاح عند استخدام الناغم 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'أي وثائق إضافية تحتاجها';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'أي ملاحظات إضافية تهتم بها';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'وستخصص أي أجهزة لهذا الـ(أورغ) عندما يديرون نص مراجعة حساباتهم (إذا تم تحديده). الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'أي أجهزة مكتشفة سيتم تعيينها في هذا الموقع إذا تم تعيينها الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'وستخصص أي أجهزة مكتشفة لهذا الموقع عندما يديرون نص مراجعة الحسابات الخاص بهم (إذا تم تحديده). الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'أيّ أجهزة مكتشفة سيتمّ تعيينها لهذا الـ(أورغ) إذا تمّ وضعها. إذا لم يتم تحديدها، فإنها مخصصة ل <code>org_id</code> لهذا الاكتشاف الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'أي مرشح مطلوب. ملاحظة: عندما يكون من النوع = حركة المرور، هذا يمثل رمزاً رائعاً.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ محددة من طراز TCP تتمنى اختبارها (مغلقة، لا أماكن).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ محددة من طراز UDP ترغب في اختبارها (المغلقة، لا أماكن).';

$GLOBALS["lang"]['Application'] = 'التطبيق';

$GLOBALS["lang"]['application_id'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application ID'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application Licenses'] = 'تراخيص التطبيق';

$GLOBALS["lang"]['applications'] = 'التطبيقات';

$GLOBALS["lang"]['Applications'] = 'التطبيقات';

$GLOBALS["lang"]['applied'] = 'التطبيق';

$GLOBALS["lang"]['Applied'] = 'التطبيق';

$GLOBALS["lang"]['Approved'] = 'الوظائف المعتمدة';

$GLOBALS["lang"]['April'] = 'نيسان/أبريل';

$GLOBALS["lang"]['architecture'] = 'الهندسة';

$GLOBALS["lang"]['Architecture'] = 'الهندسة';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'هل أنت متأكد أنك تريد حذف هذا البند من المدخلات؟';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'هل أنت متأكد أنك تريد حذف هذا الناتج؟';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'هل أنت متأكد؟ This will remove all queue entries and prevent the remaining IPs from being discovered.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'هل أنت متأكد؟ وهذا سيعيد تحديد عدد عمليات التصفيات ويمكن أن يسبب تحميلا على الخادم.';

$GLOBALS["lang"]['area'] = 'المنطقة';

$GLOBALS["lang"]['Area'] = 'المنطقة';

$GLOBALS["lang"]['Argentina'] = 'الأرجنتين';

$GLOBALS["lang"]['Armenia'] = 'أرمينيا';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'أروبا';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'حسب خصائص بيئات الأجهزة الإنتاج، التدريب، وآخرون';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'كما سجلتم أيها المُجمعون، رجاءً إختروا مكان تنفيذ هذا الاكتشاف.';

$GLOBALS["lang"]['Ask me later'] = 'اسألني لاحقاً';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'اطلب من الجماعة المساعدة أو المساهمة في إجابات للآخرين.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'تعيين مشغل';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'وفي الوقت الحاضر، يمكننا أن نستخدم شبكــة شبكــة المــواد والبرامجيات والمستعملين.';

$GLOBALS["lang"]['attached_device_id'] = 'بطاقة هوية ملحقة';

$GLOBALS["lang"]['Attached Device ID'] = 'بطاقة هوية ملحقة';

$GLOBALS["lang"]['attached_to'] = 'ملحقة';

$GLOBALS["lang"]['Attached To'] = 'ملحقة';

$GLOBALS["lang"]['attachment'] = 'الملحق';

$GLOBALS["lang"]['Attachment'] = 'الملحق';

$GLOBALS["lang"]['attachments'] = 'الملاحق';

$GLOBALS["lang"]['Attachments'] = 'الملاحق';

$GLOBALS["lang"]['Attribute'] = 'المساهمة';

$GLOBALS["lang"]['attributes'] = 'الخصائص';

$GLOBALS["lang"]['Attributes'] = 'الخصائص';

$GLOBALS["lang"]['Audit'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit AIX'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit ESXi'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit Linux'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['audit_log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit Log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit My PC'] = 'مراجعة حساباتي';

$GLOBALS["lang"]['Audit OSX'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit Result Input'] = 'الناتج';

$GLOBALS["lang"]['Audit Status'] = 'حالة مراجعة الحسابات';

$GLOBALS["lang"]['Audit Windows'] = 'نافذة مراجعة الحسابات';

$GLOBALS["lang"]['Audit the Device'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audits'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['August'] = 'آب/أغسطس';

$GLOBALS["lang"]['Australia'] = 'أستراليا';

$GLOBALS["lang"]['Austria'] = 'النمسا';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'مأهولة من قِبَل خادم مفتوح';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'مأهولة بالسكان آلياً بناءً على نظام المُجمعات';

$GLOBALS["lang"]['availability'] = 'التوافر';

$GLOBALS["lang"]['Availability'] = 'التوافر';

$GLOBALS["lang"]['Azerbaijan'] = 'أذربيجان';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'المجموع';

$GLOBALS["lang"]['Backup'] = 'الدعم';

$GLOBALS["lang"]['Bahamas the'] = 'جزر البهاما';

$GLOBALS["lang"]['Bahrain'] = 'البحرين';

$GLOBALS["lang"]['Bangladesh'] = 'بنغلاديش';

$GLOBALS["lang"]['bank'] = 'المصرف';

$GLOBALS["lang"]['Bank'] = 'المصرف';

$GLOBALS["lang"]['Banned'] = 'تم حظرها';

$GLOBALS["lang"]['bar_code'] = 'قانون المحاماة';

$GLOBALS["lang"]['Bar Code'] = 'قانون المحاماة';

$GLOBALS["lang"]['Barbados'] = 'بربادوس';

$GLOBALS["lang"]['Base DN'] = 'قاعدة DN';

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

$GLOBALS["lang"]['Basic'] = 'أساسي';

$GLOBALS["lang"]['batch'] = 'باتش';

$GLOBALS["lang"]['Batch'] = 'باتش';

$GLOBALS["lang"]['Belarus'] = 'بيلاروس';

$GLOBALS["lang"]['Belgium'] = 'بلجيكا';

$GLOBALS["lang"]['Belize'] = 'بليز';

$GLOBALS["lang"]['Benchmark'] = 'المعيار المرجعي';

$GLOBALS["lang"]['benchmark_id'] = 'المعيار المرجعي';

$GLOBALS["lang"]['Benchmark ID'] = 'المعيار المرجعي';

$GLOBALS["lang"]['benchmarks'] = 'المعايير المرجعية';

$GLOBALS["lang"]['Benchmarks'] = 'المعايير المرجعية';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'السياسات العامة';

$GLOBALS["lang"]['Benchmarks Policies'] = 'السياسات العامة';

$GLOBALS["lang"]['benchmarks_result'] = 'النقاط المرجعية';

$GLOBALS["lang"]['Benchmarks Result'] = 'النقاط المرجعية';

$GLOBALS["lang"]['Benin'] = 'بنن';

$GLOBALS["lang"]['Bermuda'] = 'برمودا';

$GLOBALS["lang"]['best_practises'] = 'Best Practiss';

$GLOBALS["lang"]['Best Practises'] = 'Best Practiss';

$GLOBALS["lang"]['Bhutan'] = 'بوتان';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'الهيئة';

$GLOBALS["lang"]['Body'] = 'الهيئة';

$GLOBALS["lang"]['Bolivia'] = 'بوليفيا';

$GLOBALS["lang"]['Boolean'] = 'Polean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Polean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Polean y/n';

$GLOBALS["lang"]['boot_device'] = 'جهاز التفجير';

$GLOBALS["lang"]['Boot Device'] = 'جهاز التفجير';

$GLOBALS["lang"]['bootable'] = 'Potable';

$GLOBALS["lang"]['Bootable'] = 'Potable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'البوسنة والهرسك';

$GLOBALS["lang"]['Botswana'] = 'بوتسوانا';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'جزيرة بوفت (بوفيتويا)';

$GLOBALS["lang"]['Brazil'] = 'البرازيل';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'البرازيل';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'إقليم المحيط الهندي البريطاني (أرخبيل شاغوس)';

$GLOBALS["lang"]['British Virgin Islands'] = 'جزر فرجن البريطانية';

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

$GLOBALS["lang"]['Bulgaria'] = 'بلغاريا';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Burkina Faso'] = 'بوركينا فاسو';

$GLOBALS["lang"]['Burundi'] = 'بوروندي';

$GLOBALS["lang"]['business_requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['Business Requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['Buy'] = 'اشتري';

$GLOBALS["lang"]['Buy More'] = 'اشتر المزيد';

$GLOBALS["lang"]['By'] = 'من قبل';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['Calculated from discovery.'] = 'محسوبة من الاكتشاف';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'حساب مجموع عدد عناوين شركاء التنفيذ الصحيحة لهذه الشبكة.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'حسب الوقت الذي يستغرقه تنفيذ هذا البند.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '(ج) يحسب عند تنفيذ عملية الإدماج ويحتوي على تمثيل للأجهزة في هذا الإدماج. كل وصلة <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '(ج) يحسب عند إدارة الإدماج ويحتوي على تمثيل مشترك للمواقع في هذا الإدماج. كل وصلة <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '(أ) يُحسب عند إدارة التكامل ويحتوي على عدد الأجهزة المختارة من قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'ويحسب عند إدارة التكامل ويحتوي على عدد الأجهزة المختارة للنظام الخارجي.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '(أ) يحسب عند إدارة التكامل ويحتوي على عدد الأجهزة التي يتعين تحديثها في النظام الخارجي.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '(ج) حساب عندما يجري التكامل ويحتوي على عدد الأجهزة التي تم تحديثها في قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Cambodia'] = 'كمبوديا';

$GLOBALS["lang"]['Cameroon'] = 'الكاميرون';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'يمكن <code>active</code>.. <code>passive</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'يمكن <code>application</code>.. <code>compute</code>.. <code>database</code>.. <code>storage</code>.. <code>virtualisation</code>.. <code>web</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'يمكن <code>auto</code>.. <code>fixed</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'يمكن <code>high availability</code>.. <code>load balancing</code>.. <code>performance</code>.. <code>storage</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'يمكن <code>line</code>.. <code>pie</code> أو <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'يمكن <code>user</code> أو <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'يمكن تحديدها بواسطة الاكتشاف أو المستخدم.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'أيمكن للمستعمل أن يحرر هذا البند';

$GLOBALS["lang"]['Canada'] = 'كندا';

$GLOBALS["lang"]['Cancel'] = 'إلغاء';

$GLOBALS["lang"]['capabilities'] = 'القدرات';

$GLOBALS["lang"]['Capabilities'] = 'القدرات';

$GLOBALS["lang"]['Capacity'] = 'القدرات';

$GLOBALS["lang"]['Cape Verde'] = 'الرأس الأخضر';

$GLOBALS["lang"]['Capitalise'] = 'رأس المال';

$GLOBALS["lang"]['caption'] = 'Caption';

$GLOBALS["lang"]['Caption'] = 'Caption';

$GLOBALS["lang"]['Cayman Islands'] = 'جزر كايمان';

$GLOBALS["lang"]['Cellular Details'] = 'التفاصيل الخلوية';

$GLOBALS["lang"]['Central African Republic'] = 'جمهورية أفريقيا الوسطى';

$GLOBALS["lang"]['certificate'] = 'شهادة';

$GLOBALS["lang"]['Certificate'] = 'شهادة';

$GLOBALS["lang"]['certificates'] = 'الشهادات';

$GLOBALS["lang"]['Certificates'] = 'الشهادات';

$GLOBALS["lang"]['Chad'] = 'تشاد';

$GLOBALS["lang"]['change_id'] = 'تغيير الهوية';

$GLOBALS["lang"]['Change ID'] = 'تغيير الهوية';

$GLOBALS["lang"]['change_log'] = 'التغيير';

$GLOBALS["lang"]['Change Log'] = 'التغيير';

$GLOBALS["lang"]['change_type'] = 'التغيير';

$GLOBALS["lang"]['Change Type'] = 'التغيير';

$GLOBALS["lang"]['chart'] = 'Chart';

$GLOBALS["lang"]['Chart'] = 'Chart';

$GLOBALS["lang"]['check_minutes'] = 'دقائق التحقق';

$GLOBALS["lang"]['Check Minutes'] = 'دقائق التحقق';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'تحقق من SSH على هذه الموانئ';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'تحقق من هذا المرفأ لأي خدمة';

$GLOBALS["lang"]['Chile'] = 'شيلي';

$GLOBALS["lang"]['China'] = 'الصين';

$GLOBALS["lang"]['Choose'] = 'الاختيار';

$GLOBALS["lang"]['Choose (select OS first)'] = 'الاختيار (الاختيار أولاً)';

$GLOBALS["lang"]['Choose a Device'] = 'اختر جهازا';

$GLOBALS["lang"]['Choose a Table'] = 'اختيار الجدول';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'قم بضغط زر الحذف لسحب الأجهزة المثالية من "إفتتاح"<br/>وهذا سيزيل الأجهزة الواردة أدناه من قاعدة البيانات. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'قم بضغط زر الإستيراد تحته ليقوم بتجميع بيانات الأجهزة';

$GLOBALS["lang"]['Client ID'] = 'هوية العميل';

$GLOBALS["lang"]['client_ident'] = 'هوية العميل';

$GLOBALS["lang"]['Client Ident'] = 'هوية العميل';

$GLOBALS["lang"]['client_secret'] = 'سر العميل';

$GLOBALS["lang"]['Client Secret'] = 'سر العميل';

$GLOBALS["lang"]['client_site_name'] = 'اسم الموقع';

$GLOBALS["lang"]['Client Site Name'] = 'اسم الموقع';

$GLOBALS["lang"]['Close'] = 'اقترب';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'التفاصيل';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'هوية السحاب';

$GLOBALS["lang"]['Cloud ID'] = 'هوية السحاب';

$GLOBALS["lang"]['cloud_log'] = 'كلود لوغ';

$GLOBALS["lang"]['Cloud Log'] = 'كلود لوغ';

$GLOBALS["lang"]['cloud_name'] = 'اسم السحاب';

$GLOBALS["lang"]['Cloud Name'] = 'اسم السحاب';

$GLOBALS["lang"]['Cloud Network'] = 'شبكة السحاب';

$GLOBALS["lang"]['clouds'] = 'السحابات';

$GLOBALS["lang"]['Clouds'] = 'السحابات';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'جزر كوكوس (Keeling)';

$GLOBALS["lang"]['Collector'] = 'جامع';

$GLOBALS["lang"]['Collector (UUID)'] = 'جامع (UID)';

$GLOBALS["lang"]['Collector Name'] = 'اسم المجموعة';

$GLOBALS["lang"]['collector_uuid'] = 'جامع';

$GLOBALS["lang"]['Collector Uuid'] = 'جامع';

$GLOBALS["lang"]['collectors'] = 'المجموعة';

$GLOBALS["lang"]['Collectors'] = 'المجموعة';

$GLOBALS["lang"]['Colombia'] = 'كولومبيا';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

$GLOBALS["lang"]['column'] = 'Column';

$GLOBALS["lang"]['Column'] = 'Column';

$GLOBALS["lang"]['Columns'] = 'Columns';

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

$GLOBALS["lang"]['comments'] = 'التعليقات';

$GLOBALS["lang"]['Comments'] = 'التعليقات';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'عادة ما يُشار إليه باسم العميل';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'يُشار إليه عادة باسم العميل (سكرت).';

$GLOBALS["lang"]['Community'] = 'المجتمع';

$GLOBALS["lang"]['Community Questions'] = 'المسائل المجتمعية';

$GLOBALS["lang"]['Community String'] = 'المجتمع المحلي';

$GLOBALS["lang"]['Comoros the'] = 'جزر القمر';

$GLOBALS["lang"]['Compact'] = 'الاتفاق';

$GLOBALS["lang"]['Component Table'] = 'الجدول';

$GLOBALS["lang"]['Components (All Devices)'] = 'المكونات (جميع الأجهزة)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'الشرط';

$GLOBALS["lang"]['config'] = 'Config';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Conig Default, currently ';

$GLOBALS["lang"]['config_file'] = 'File';

$GLOBALS["lang"]['Config File'] = 'File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Congo'] = 'الكونغو';

$GLOBALS["lang"]['Congo the'] = 'الكونغو';

$GLOBALS["lang"]['Connected To'] = 'متصل';

$GLOBALS["lang"]['connection'] = 'Connection';

$GLOBALS["lang"]['Connection'] = 'Connection';

$GLOBALS["lang"]['Connection Options'] = 'خيارات الربط';

$GLOBALS["lang"]['connection_status'] = 'الحالة';

$GLOBALS["lang"]['Connection Status'] = 'الحالة';

$GLOBALS["lang"]['connections'] = 'الروابط';

$GLOBALS["lang"]['Connections'] = 'الروابط';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'اعتبرها ممزقة الموانئ المفتوحة';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'اعتبره مفتوحاً الموانئ المفتوحة';

$GLOBALS["lang"]['contact'] = 'الاتصال';

$GLOBALS["lang"]['Contact'] = 'الاتصال';

$GLOBALS["lang"]['contact_name'] = 'اسم الاتصال';

$GLOBALS["lang"]['Contact Name'] = 'اسم الاتصال';

$GLOBALS["lang"]['contained_in'] = 'محتجز';

$GLOBALS["lang"]['Contained In'] = 'محتجز';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'يحتوي على شيء مشترك يُفصّلُ النُهُج ذات الصلة ومواقعها.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'يحتوي على الحقول التي تحدد ما إذا كان يجب أن نستخدم خيارات الاكتشافات (جوسون) يعترض';

$GLOBALS["lang"]['Context Engine ID'] = 'الهوية الهندسية في السياق';

$GLOBALS["lang"]['Context Name'] = 'اسم السياق';

$GLOBALS["lang"]['contractual_obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Contractual Obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Cook Islands'] = 'جزر كوك';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'نُسخ وعجينة نتيجة مراجعة الحسابات';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'نُسخ وعجينة أدناه إلى المنتديات، حالة أخرى من فتح الباب أو أي مكان آخر تحتاج إلى تقديم هذا البند.';

$GLOBALS["lang"]['core_count'] = 'الكونت الأساسي';

$GLOBALS["lang"]['Core Count'] = 'الكونت الأساسي';

$GLOBALS["lang"]['Cores'] = 'Cores';

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

$GLOBALS["lang"]['cpu_count'] = 'Cpu count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu count';

$GLOBALS["lang"]['Create'] = 'Create';

$GLOBALS["lang"]['Create Example Devices'] = 'Create Example Devices';

$GLOBALS["lang"]['create_external_count'] = 'إنشاء الكونت الخارجي';

$GLOBALS["lang"]['Create External Count'] = 'إنشاء الكونت الخارجي';

$GLOBALS["lang"]['create_external_from_internal'] = 'Create External From Internal';

$GLOBALS["lang"]['Create External From Internal'] = 'Create External From Internal';

$GLOBALS["lang"]['Create Geocode'] = 'Create Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['Create Internal Count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['create_internal_from_external'] = 'Create Internal from External';

$GLOBALS["lang"]['Create Internal From External'] = 'Create Internal from External';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Create NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'الإبداع المفتوح الأجهزة من ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'الإبداع المفتوح أجهزة من نظام المعلومات الإدارية الوطني';

$GLOBALS["lang"]['created_at'] = 'Created At';

$GLOBALS["lang"]['Created At'] = 'Created At';

$GLOBALS["lang"]['created_by'] = 'المنشأة بموجب';

$GLOBALS["lang"]['Created By'] = 'المنشأة بموجب';

$GLOBALS["lang"]['created_date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Created Date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Creating'] = 'الإبداع';

$GLOBALS["lang"]['creator'] = 'Creator';

$GLOBALS["lang"]['Creator'] = 'Creator';

$GLOBALS["lang"]['credential'] = 'الخلية';

$GLOBALS["lang"]['Credential'] = 'الخلية';

$GLOBALS["lang"]['credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Croatia'] = 'كرواتيا';

$GLOBALS["lang"]['Cuba'] = 'كوبا';

$GLOBALS["lang"]['current'] = 'الحالية';

$GLOBALS["lang"]['Current'] = 'الحالية';

$GLOBALS["lang"]['Current Discovery Processes'] = 'عمليات الكشف الحالية';

$GLOBALS["lang"]['Current date & time is '] = 'الوقت الحالي ';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'الأنواع المدعومة حاليا <code>snmp</code>.. <code>snmp_v3</code>.. <code>ssh</code>.. <code>ssh_key</code> أو <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'موانئ TCP العرفية';

$GLOBALS["lang"]['Custom UDP Ports'] = 'الجمارك الموانئ';

$GLOBALS["lang"]['Cyprus'] = 'قبرص';

$GLOBALS["lang"]['Czech'] = 'التشيكية';

$GLOBALS["lang"]['Czech Republic'] = 'الجمهورية التشيكية';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'حساب DN (اختياري)';

$GLOBALS["lang"]['DN Password (optional)'] = 'كلمة سر DN (اختياري)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'بطاقة الهوية';

$GLOBALS["lang"]['Dashboard ID'] = 'بطاقة الهوية';

$GLOBALS["lang"]['dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['db_action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['Database Action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['db_column'] = 'Column قاعدة البيانات';

$GLOBALS["lang"]['Database Column'] = 'Column قاعدة البيانات';

$GLOBALS["lang"]['Database Definition'] = 'تعريف قاعدة البيانات';

$GLOBALS["lang"]['db_row'] = 'قاعدة البيانات';

$GLOBALS["lang"]['Database Row'] = 'قاعدة البيانات';

$GLOBALS["lang"]['Database Schema'] = 'قاعدة البيانات';

$GLOBALS["lang"]['db_table'] = 'جدول قاعدة البيانات';

$GLOBALS["lang"]['Database Table'] = 'جدول قاعدة البيانات';

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

$GLOBALS["lang"]['December'] = 'كانون الأول/ديسمبر';

$GLOBALS["lang"]['Default'] = 'التقصير';

$GLOBALS["lang"]['Default Items'] = 'البنود الافتراضية';

$GLOBALS["lang"]['Default Value'] = 'القيمة المستحقة';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'عجز 389 عادةً 636 مستعملاً للدليل النشط';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'التقصير <code>3</code> من أجل برنامج العمل دون الإقليمي ودليل فعال.';

$GLOBALS["lang"]['delay_minutes'] = 'مسارات';

$GLOBALS["lang"]['Delay Minutes'] = 'مسارات';

$GLOBALS["lang"]['Delete'] = 'تحذف';

$GLOBALS["lang"]['Delete Example Devices'] = 'تحذف أجهزة الإرسال';

$GLOBALS["lang"]['delete_external_from_internal'] = 'يحذف من:';

$GLOBALS["lang"]['Delete External From Internal'] = 'يحذف من:';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'يحذف نظام المعلومات الإدارية المتكامل الأجهزة إن لم تكن موجودة';

$GLOBALS["lang"]['Delete from Application'] = 'تحذف من الطلب';

$GLOBALS["lang"]['Delete from Cluster'] = 'تحذف من المجموعة';

$GLOBALS["lang"]['deleted_at'] = 'Deleted At';

$GLOBALS["lang"]['Deleted At'] = 'Deleted At';

$GLOBALS["lang"]['Denmark'] = 'الدانمرك';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'مأخوذة من مراجعة الحسابات أو يحددها المستعمل يدويا.';

$GLOBALS["lang"]['Derived by audit.'] = 'مأخوذة من مراجعة الحسابات';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'مأخوذة من <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'مأخوذة من <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'تم كشفها من المُجمع';

$GLOBALS["lang"]['Derived from OS Name.'] = 'مأخوذة من الاسم';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'متأثرة من اكتشاف الغيوم';

$GLOBALS["lang"]['Derived from device audits.'] = 'مأخوذة من مراجعات الأجهزة';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'مأخوذة من نوع الجهاز و الـ إس';

$GLOBALS["lang"]['Derived from discovery.'] = 'متحلل من الاكتشاف';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'مأخوذة من اسم المضيف، سيس نام، دينس هوستينم، آي بي في ذلك الترتيب.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'مُتعاطى من شدة الثلاجة';

$GLOBALS["lang"]['description'] = 'الوصف';

$GLOBALS["lang"]['Description'] = 'الوصف';

$GLOBALS["lang"]['destination'] = 'الوجهة';

$GLOBALS["lang"]['Destination'] = 'الوجهة';

$GLOBALS["lang"]['detail'] = 'التجزئة';

$GLOBALS["lang"]['Detail'] = 'التجزئة';

$GLOBALS["lang"]['Details'] = 'التفاصيل';

$GLOBALS["lang"]['details'] = 'التفاصيل';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'تفاصيل من عادة ما يكون الاتصال في هذا الموقع';

$GLOBALS["lang"]['device'] = 'الجهاز';

$GLOBALS["lang"]['Device'] = 'الجهاز';

$GLOBALS["lang"]['Device Audits'] = 'مراجعة حسابات الأجهزة';

$GLOBALS["lang"]['device_id'] = 'هوية الجهاز';

$GLOBALS["lang"]['Device ID'] = 'هوية الجهاز';

$GLOBALS["lang"]['device_id_a'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['Device ID A'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['device_id_b'] = 'هوية الجهاز باء';

$GLOBALS["lang"]['Device ID B'] = 'هوية الجهاز باء';

$GLOBALS["lang"]['Device Name'] = 'اسم الجهاز';

$GLOBALS["lang"]['Device Result'] = 'الجهاز';

$GLOBALS["lang"]['Device Results'] = 'نتائج الأجهزة';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'الجهاز';

$GLOBALS["lang"]['Device Types'] = 'الأنواع النثرية';

$GLOBALS["lang"]['Device is in the Subnet'] = 'الجهاز في الشبكة الفرعية';

$GLOBALS["lang"]['Devices'] = 'الأجهزة';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Audited'] = 'الأجهزة التي تم مراجعة حساباتها';

$GLOBALS["lang"]['Devices Created in '] = 'الأجهزة المنشأة ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'الأجهزة المنشأة في غرفة الاجتماعات';

$GLOBALS["lang"]['devices_default_display_columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'الدبابات وجدت آخر 7 أيام';

$GLOBALS["lang"]['Devices Found Today'] = 'الأجهزة وجدت اليوم';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'وجدت الأجهزة أمس';

$GLOBALS["lang"]['Devices Not Audited'] = 'الأجهزة غير المراجعة';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'النبائط لا ترى 30 يوما';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'النبائط لم تشاهد 7 أيام';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'الأجهزة لا ترى 90 يوما';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'الأجهزة المستردة عن طريق API';

$GLOBALS["lang"]['Devices Selected from '] = 'الأجهزة المختارة من ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'أجهزة منتخبة من طراز Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'الأجهزة المستكملة في ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Devices Updated in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'يتم قياس الأجهزة.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'النبائط لا يجري قياسها.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'يمكن قياس الأجهزة.';

$GLOBALS["lang"]['Devices in Running State'] = 'الأجهزة الموجودة في الولاية';

$GLOBALS["lang"]['Devices in Stopped State'] = 'الأجهزة في الدولة المتوقفة';

$GLOBALS["lang"]['Devices in this'] = 'الأجهزة في هذا';

$GLOBALS["lang"]['Devired from type or OS.'] = 'محفورة من نوع أو إس.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'هل أكملت القيادة بنجاح وأعادت البيانات المتوقعة.';

$GLOBALS["lang"]['direction'] = 'التوجيه';

$GLOBALS["lang"]['Direction'] = 'التوجيه';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'المعوقين';

$GLOBALS["lang"]['Disabled'] = 'المعوقين';

$GLOBALS["lang"]['discard'] = 'Discard';

$GLOBALS["lang"]['Discard'] = 'Discard';

$GLOBALS["lang"]['Discover'] = 'الكشف';

$GLOBALS["lang"]['discoveries'] = 'الكشف';

$GLOBALS["lang"]['Discoveries'] = 'الكشف';

$GLOBALS["lang"]['Discovery'] = 'الكشف';

$GLOBALS["lang"]['discovery_id'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery ID'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery Issues'] = 'قضايا الكشف';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Name'] = 'الاسم السري';

$GLOBALS["lang"]['Discovery Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['Discovery Run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['discovery_scan_options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Scan Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['Display in Menu'] = 'Display in Menu';

$GLOBALS["lang"]['district'] = 'المقاطعة';

$GLOBALS["lang"]['District'] = 'المقاطعة';

$GLOBALS["lang"]['Djibouti'] = 'جيبوتي';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'الاسم المضيف';

$GLOBALS["lang"]['Dns Host Name'] = 'الاسم المضيف';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'لا تمسح موانئ التاي سي';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'لا تفحص هذه الموانئ';

$GLOBALS["lang"]['Do not show me again'] = 'لا تظهر لي مرة أخرى';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'هل تريد استخدام وسيلة نقل آمنة (LDAPS) أو غير مشفرة منتظمة';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'هل ترغبين في رؤية الجانب العادي على اليسار';

$GLOBALS["lang"]['documentation'] = 'الوثائق';

$GLOBALS["lang"]['Documentation'] = 'الوثائق';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'هل الرخصة تنطبق على الأطفال أورغس';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'العنوان المراقب المالي الرئيسي';

$GLOBALS["lang"]['Domain Controller Address'] = 'العنوان المراقب المالي الرئيسي';

$GLOBALS["lang"]['domain_controller_name'] = 'المراقب المالي الدائم الاسم';

$GLOBALS["lang"]['Domain Controller Name'] = 'المراقب المالي الدائم الاسم';

$GLOBALS["lang"]['domain_role'] = 'دور رئيسي';

$GLOBALS["lang"]['Domain Role'] = 'دور رئيسي';

$GLOBALS["lang"]['domain_short'] = 'Domain Short';

$GLOBALS["lang"]['Domain Short'] = 'Domain Short';

$GLOBALS["lang"]['Dominica'] = 'دومينيكا';

$GLOBALS["lang"]['Dominican Republic'] = 'الجمهورية الدومينيكية';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'لا تمسك يدي، أعرف ما أفعله لا تصفية والقدرة على الانضمام إلى الطاولات العرفية';

$GLOBALS["lang"]['Download'] = 'تحميل';

$GLOBALS["lang"]['Download a file from URL'] = 'تحميل ملف من URL';

$GLOBALS["lang"]['driver'] = 'سائق';

$GLOBALS["lang"]['Driver'] = 'سائق';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'المدة';

$GLOBALS["lang"]['Duration'] = 'المدة';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'إكوادور';

$GLOBALS["lang"]['Edit'] = 'Edit';

$GLOBALS["lang"]['edit_log'] = 'Edit Log';

$GLOBALS["lang"]['Edit Log'] = 'Edit Log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Edited by';

$GLOBALS["lang"]['Edited By'] = 'Edited by';

$GLOBALS["lang"]['edited_date'] = 'تاريخ التحرير';

$GLOBALS["lang"]['Edited Date'] = 'تاريخ التحرير';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'مصر';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'إما الأمازون أو جوجل أو ميكروسوفت';

$GLOBALS["lang"]['El Salvador'] = 'السلفادور';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email Address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email to send test to'] = 'إرسال اختبار';

$GLOBALS["lang"]['Enable'] = 'التمكين';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

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

$GLOBALS["lang"]['English'] = 'الإنكليزية';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'شبكة الشركات الخاصة';

$GLOBALS["lang"]['Entitlement Type'] = 'نوع الاستحقاق';

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

$GLOBALS["lang"]['Estonia'] = 'إستونيا';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'إثيوبيا';

$GLOBALS["lang"]['Every'] = 'كل شيء';

$GLOBALS["lang"]['Every Day'] = 'كل يوم';

$GLOBALS["lang"]['Exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['exclude'] = 'استبعاد';

$GLOBALS["lang"]['Exclude'] = 'استبعاد';

$GLOBALS["lang"]['exclude_ip'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresss';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'لا تستبعد عناوين آي بي من أن يتم مسحها';

$GLOBALS["lang"]['Excluded'] = 'مستبعدة';

$GLOBALS["lang"]['exclusion_reasons'] = 'أسباب الاستبعاد';

$GLOBALS["lang"]['Exclusion Reasons'] = 'أسباب الاستبعاد';

$GLOBALS["lang"]['executable'] = 'التنفيذ';

$GLOBALS["lang"]['Executable'] = 'التنفيذ';

$GLOBALS["lang"]['executable_id'] = 'الهوية القابلة للتنفيذ';

$GLOBALS["lang"]['Executable ID'] = 'الهوية القابلة للتنفيذ';

$GLOBALS["lang"]['executables'] = 'التنفيذ';

$GLOBALS["lang"]['Executables'] = 'التنفيذ';

$GLOBALS["lang"]['Execute'] = 'Execute';

$GLOBALS["lang"]['Executing'] = 'التنفيذ';

$GLOBALS["lang"]['exemption_reason'] = 'الإعفاء من العقوبة';

$GLOBALS["lang"]['Exemption Reason'] = 'الإعفاء من العقوبة';

$GLOBALS["lang"]['Existing Building'] = 'المبنى الحالي';

$GLOBALS["lang"]['Existing Floor'] = 'الطابق الحالي';

$GLOBALS["lang"]['Existing Room'] = 'الغرفة القائمة';

$GLOBALS["lang"]['Existing Row'] = 'Row الحالي';

$GLOBALS["lang"]['expire_minutes'] = 'المناقصات التجريبية';

$GLOBALS["lang"]['Expire Minutes'] = 'المناقصات التجريبية';

$GLOBALS["lang"]['expires'] = 'النفقات';

$GLOBALS["lang"]['Expires'] = 'النفقات';

$GLOBALS["lang"]['expiry_date'] = 'تاريخ انتهاء الخدمة';

$GLOBALS["lang"]['Expiry Date'] = 'تاريخ انتهاء الخدمة';

$GLOBALS["lang"]['Export CSV'] = 'Export CSV';

$GLOBALS["lang"]['Export JSON'] = 'Export JSON';

$GLOBALS["lang"]['Export by Device'] = 'Export by Device';

$GLOBALS["lang"]['Export by Policy'] = 'الصادرات حسب السياسات';

$GLOBALS["lang"]['Export data to'] = 'بيانات التصدير';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'الخارجي';

$GLOBALS["lang"]['External Field Name'] = 'الاسم الميداني الخارجي';

$GLOBALS["lang"]['External Field Type'] = 'النوع الميداني الخارجي';

$GLOBALS["lang"]['external_ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['External Ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['external_link'] = 'External Link';

$GLOBALS["lang"]['External Link'] = 'External Link';

$GLOBALS["lang"]['extra_columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra Columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'المزيد من قطع الشفرات يتم توليدها من أجل التشويش';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'تنقيح';

$GLOBALS["lang"]['factories'] = 'العوامل';

$GLOBALS["lang"]['Factories'] = 'العوامل';

$GLOBALS["lang"]['Fail'] = 'الفشل';

$GLOBALS["lang"]['Failed'] = 'فشل';

$GLOBALS["lang"]['Failed Severity'] = 'الشر';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'جزر فوكلاند (مالفيناس)';

$GLOBALS["lang"]['Family'] = 'الأسرة';

$GLOBALS["lang"]['Faroe Islands'] = 'جزر فارو';

$GLOBALS["lang"]['Features'] = 'المعالم';

$GLOBALS["lang"]['February'] = 'شباط/فبراير';

$GLOBALS["lang"]['feeds'] = 'الرسوم';

$GLOBALS["lang"]['Feeds'] = 'الرسوم';

$GLOBALS["lang"]['field'] = 'الميدان';

$GLOBALS["lang"]['Field'] = 'الميدان';

$GLOBALS["lang"]['field_id'] = 'الهوية الميدانية';

$GLOBALS["lang"]['Field ID'] = 'الهوية الميدانية';

$GLOBALS["lang"]['Field Name'] = 'الاسم الميداني';

$GLOBALS["lang"]['Field Type'] = 'النوع الميداني';

$GLOBALS["lang"]['Fields'] = 'الحقول';

$GLOBALS["lang"]['fields'] = 'الحقول';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'جزر فيجي';

$GLOBALS["lang"]['file'] = 'File';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'الناتج الملف';

$GLOBALS["lang"]['file_name'] = 'اسم الملف';

$GLOBALS["lang"]['File Name'] = 'اسم الملف';

$GLOBALS["lang"]['file_size'] = 'حجم الملف';

$GLOBALS["lang"]['File Size'] = 'حجم الملف';

$GLOBALS["lang"]['filename'] = 'الاسم';

$GLOBALS["lang"]['Filename'] = 'الاسم';

$GLOBALS["lang"]['files'] = 'الملفات';

$GLOBALS["lang"]['Files'] = 'الملفات';

$GLOBALS["lang"]['files_id'] = 'الملفات';

$GLOBALS["lang"]['Files ID'] = 'الملفات';

$GLOBALS["lang"]['filtered'] = 'محرر';

$GLOBALS["lang"]['Filtered'] = 'محرر';

$GLOBALS["lang"]['Finland'] = 'فنلندا';

$GLOBALS["lang"]['Firewall'] = 'جدار ناري';

$GLOBALS["lang"]['firewall_rule'] = 'قاعدة الجدار الناري';

$GLOBALS["lang"]['Firewall Rule'] = 'قاعدة الجدار الناري';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['Firmware Revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['first_run'] = 'الجولة الأولى';

$GLOBALS["lang"]['First Run'] = 'الجولة الأولى';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['FirstWave'] = 'الموجة الأولى';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'الوظائف الثابتة';

$GLOBALS["lang"]['Floor'] = 'الفيضانات';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'متابعة أي من الصلات الواردة أدناه واكتشاف كيفية استخدام قاعدة البيانات المفتوحة لمعرفة <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'لاكتشاف البذور، يجب أن أكتشف فقط آي بي في مكان عنوان خاص IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'لاكتشاف البذور، يجب أن أكتشف شركاء التنفيذ فقط على الشبكة الفرعية المختارة.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'لاكتشاف البذور، يجب أن أضغط على الشبكة الفرعية قبل إدارة الاكتشاف.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'من أجل الدخول المتطور لسؤال خام من طراز SQL. كما هو الحال بالنسبة للقراصنة، يجب أن تشمل <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'بالنسبة لرخص غير دائمة، عندما تنتهي الرخصة.';

$GLOBALS["lang"]['form_factor'] = 'Form Factor';

$GLOBALS["lang"]['Form Factor'] = 'Form Factor';

$GLOBALS["lang"]['format'] = 'الشكل';

$GLOBALS["lang"]['Format'] = 'الشكل';

$GLOBALS["lang"]['fqdn'] = 'فدان';

$GLOBALS["lang"]['Fqdn'] = 'فدان';

$GLOBALS["lang"]['France, French Republic'] = 'فرنسا، الجمهورية الفرنسية';

$GLOBALS["lang"]['free'] = 'مجانا';

$GLOBALS["lang"]['Free'] = 'مجانا';

$GLOBALS["lang"]['free_percent'] = 'مجانية';

$GLOBALS["lang"]['Free Percent'] = 'مجانية';

$GLOBALS["lang"]['French'] = 'الفرنسية';

$GLOBALS["lang"]['French Guiana'] = 'غيانا الفرنسية';

$GLOBALS["lang"]['French Polynesia'] = 'بولينيزيا الفرنسية';

$GLOBALS["lang"]['French Southern Territories'] = 'الأقاليم الجنوبية الفرنسية';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'الأسئلة المتكررة';

$GLOBALS["lang"]['Friday'] = 'الجمعة';

$GLOBALS["lang"]['From 100 Devices'] = 'من 100 جهاز';

$GLOBALS["lang"]['From 500 Devices'] = 'من 500 جهاز';

$GLOBALS["lang"]['full_name'] = 'الاسم الكامل';

$GLOBALS["lang"]['Full Name'] = 'الاسم الكامل';

$GLOBALS["lang"]['function'] = 'المهمة';

$GLOBALS["lang"]['Function'] = 'المهمة';

$GLOBALS["lang"]['GROUP BY'] = 'المجموعة';

$GLOBALS["lang"]['Gabon'] = 'غابون';

$GLOBALS["lang"]['Gambia the'] = 'غامبيا';

$GLOBALS["lang"]['gateway'] = 'البوابة';

$GLOBALS["lang"]['Gateway'] = 'البوابة';

$GLOBALS["lang"]['gateways'] = 'البوابة';

$GLOBALS["lang"]['Gateways'] = 'البوابة';

$GLOBALS["lang"]['Generated By'] = 'المولد';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'جورجيا';

$GLOBALS["lang"]['German'] = 'ألمانيا';

$GLOBALS["lang"]['Germany'] = 'ألمانيا';

$GLOBALS["lang"]['Get Lat/Long'] = 'الحصول على لات/لونج';

$GLOBALS["lang"]['Get Started'] = 'ابدأ';

$GLOBALS["lang"]['Get a Free License'] = 'الحصول على رخصة مجانية';

$GLOBALS["lang"]['Getting Started'] = 'بدأت';

$GLOBALS["lang"]['Ghana'] = 'غانا';

$GLOBALS["lang"]['Gibraltar'] = 'جبل طارق';

$GLOBALS["lang"]['Go'] = 'إذهب';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['graph'] = 'غرام';

$GLOBALS["lang"]['Graph'] = 'غرام';

$GLOBALS["lang"]['Greater Than'] = 'أكبر من';

$GLOBALS["lang"]['Greater Than or Equals'] = 'أكبر من أو يساوي';

$GLOBALS["lang"]['Greece'] = 'اليونان';

$GLOBALS["lang"]['Green Query'] = 'Green Query';

$GLOBALS["lang"]['Greenland'] = 'غرينلاند';

$GLOBALS["lang"]['Grenada'] = 'غرينادا';

$GLOBALS["lang"]['Group'] = 'المجموعة';

$GLOBALS["lang"]['group_by'] = 'المجموعة';

$GLOBALS["lang"]['Group By'] = 'المجموعة';

$GLOBALS["lang"]['group_id'] = 'المجموعة';

$GLOBALS["lang"]['Group ID'] = 'المجموعة';

$GLOBALS["lang"]['groups'] = 'المجموعات';

$GLOBALS["lang"]['Groups'] = 'المجموعات';

$GLOBALS["lang"]['Guadeloupe'] = 'غواديلوبي';

$GLOBALS["lang"]['Guam'] = 'غوام';

$GLOBALS["lang"]['Guatemala'] = 'غواتيمالا';

$GLOBALS["lang"]['Guernsey'] = 'غيرنسي';

$GLOBALS["lang"]['guest_device_id'] = 'هوية الشياطين';

$GLOBALS["lang"]['Guest Device ID'] = 'هوية الشياطين';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'غينيا';

$GLOBALS["lang"]['Guinea-Bissau'] = 'غينيا - بيساو';

$GLOBALS["lang"]['Guyana'] = 'غيانا';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'تنقيح HW';

$GLOBALS["lang"]['Haiti'] = 'هايتي';

$GLOBALS["lang"]['hard_drive_index'] = 'الرقم القياسي للقيادة الصلبة';

$GLOBALS["lang"]['Hard Drive Index'] = 'الرقم القياسي للقيادة الصلبة';

$GLOBALS["lang"]['hardware_revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Hardware Revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'هل طبقت هذه السياسة في هذه المنظمة.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'جزيرة هارد وجزر ماكدونالد';

$GLOBALS["lang"]['height'] = 'مرتفع';

$GLOBALS["lang"]['Height'] = 'مرتفع';

$GLOBALS["lang"]['Height in RU'] = 'مرتفع في الجبهة المتحدة الثورية';

$GLOBALS["lang"]['Help'] = 'النجدة';

$GLOBALS["lang"]['High'] = 'عالية';

$GLOBALS["lang"]['High Availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'الكرسي الرسولي (ولاية مدينة فياتيان)';

$GLOBALS["lang"]['home'] = 'البيت';

$GLOBALS["lang"]['Home'] = 'البيت';

$GLOBALS["lang"]['Home Area Network'] = 'الشبكة المحلية';

$GLOBALS["lang"]['Honduras'] = 'هندوراس';

$GLOBALS["lang"]['Hong Kong'] = 'هونغ كونغ';

$GLOBALS["lang"]['host'] = 'المضيفة';

$GLOBALS["lang"]['Host'] = 'المضيفة';

$GLOBALS["lang"]['hostname'] = 'الاسم المضيف';

$GLOBALS["lang"]['Hostname'] = 'الاسم المضيف';

$GLOBALS["lang"]['hour'] = 'Hour';

$GLOBALS["lang"]['Hour'] = 'Hour';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'كم استغرق الأمر من الوقت لتنفيذه';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'كم من الوقت يجب أن تنتظر (نامب) استجابة لكل جهاز';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'كم عدد الدوائر التي تغذي هذا الرف';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'كم من السياسات تؤدي إلى فشل';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'كم من السياسات تؤدي إلى تمرير';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'كم عدد جوارب الطاقة في هذا الرف';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'كم عدد وحدات الرف في المرتفع هو هذا الرف';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'كم من الوقت يجب على المجمع أن يطلب من الخادم مهمة';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'How should we select devices to be integrated (using an Attribute, Query or a Group).';

$GLOBALS["lang"]['How to compare'] = 'كيفية المقارنة';

$GLOBALS["lang"]['Hungary'] = 'هنغاريا';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['id'] = 'الهوية';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP Address';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set by';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 فقط.';

$GLOBALS["lang"]['Iceland'] = 'آيسلندا';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icon and Text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icon only, text only or icon and text.';

$GLOBALS["lang"]['id_internal'] = 'الداخلية';

$GLOBALS["lang"]['Id Internal'] = 'الداخلية';

$GLOBALS["lang"]['id_number'] = 'العدد';

$GLOBALS["lang"]['Id Number'] = 'العدد';

$GLOBALS["lang"]['identification'] = 'تحديد الهوية';

$GLOBALS["lang"]['Identification'] = 'تحديد الهوية';

$GLOBALS["lang"]['If'] = 'إذا';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'إذا كان المرفأ يستجيب بالملف، إذا اعتبرناه متاحا.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'إذا كان الميناء يستجيب مع فتحه، إذا اعتبرناه متاحا.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'إذا لم يكن هناك جهاز نائي في أجهزة مختارة مفتوحة العضوية، إذا حذفناه من النظام الخارجي.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'إذا تغير جهاز مفتوح العضوية، إذا قمنا بتحديث النظام الخارجي.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'إذا كان جهاز مفتوح العضوية ليس على النظام الخارجي، ينبغي أن نصنعه.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'إذا أبلغ وكيل أن شركته الأولى موجودة في هذه الشبكة الفرعية، قم بالتصرفات.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'وإذا ما تم وضع مجموعة من أعمدة الأجهزة المحددة التي اختار هذا المستخدم رؤيتها، إلا في حالة تقصير التشكيل.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'إذا كانت عائلة العميل (أو إس) غير حساسة، تحتوي على هذا الخيط، قم بالتصرفات.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'إذا استوفيت الشروط التالية:<br/><ul><li>a Role has assigned ad_group</li><li>أورغ لديه مجموعة مخصصة</li><li>A LDAP (سيرفر) لديه استخدام...</li><li>a user exists in LDAP (be it active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>ويمكن لهذا المستخدم أن يسجل دخوله دون حساب في قاعدة البيانات المفتوحة التي تحتاج إلى إنشاء. وسيستفسر الفريق المفتوح باب العضوية عن خطة العمل الدولية المعنية، وإذا كان المستخدم في المجموعات المطلوبة وليس في قاعدة البيانات المفتوحة، فإن خصائص مستخدميه (الاسم الكامل، البريد الإلكتروني، الأدوار، أو الخرق، وما إلى ذلك) في إطار قاعدة البيانات المفتوحة، ستكون مأهولة بالسكان بصورة تلقائية، وسوف يتم تسجيلها.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'إذا لم يكن لدى المستخدم تسجيل الدخول إلى "أوديت" إمكانية البحث، يمكنك استخدام حساب آخر';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'إذا مرّت هذه الدقائق الكثيرة أو أكثر منذ أن اتصل الجهاز بالخادم، قم بالتصرفات.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'إذا اخترت مجموعة، فمن المقرر أن تنفذ على الحدود الـ 5 دقيقة القادمة.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Ignored';

$GLOBALS["lang"]['image'] = 'الصورة';

$GLOBALS["lang"]['Image'] = 'الصورة';

$GLOBALS["lang"]['Images'] = 'الصور';

$GLOBALS["lang"]['implementation_notes'] = 'مذكرات التنفيذ';

$GLOBALS["lang"]['Implementation Notes'] = 'مذكرات التنفيذ';

$GLOBALS["lang"]['Import'] = 'الواردات';

$GLOBALS["lang"]['Import CSV'] = 'Import CSV';

$GLOBALS["lang"]['Import Example Data'] = 'بيانات نموذج الواردات';

$GLOBALS["lang"]['Import JSON'] = 'Import JSON';

$GLOBALS["lang"]['improvement_opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['Improvement Opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'الخاملة';

$GLOBALS["lang"]['Include'] = 'Include';

$GLOBALS["lang"]['Index'] = 'الفهرس';

$GLOBALS["lang"]['India'] = 'الهند';

$GLOBALS["lang"]['Indonesia'] = 'إندونيسيا';

$GLOBALS["lang"]['Info'] = 'المعلومات';

$GLOBALS["lang"]['Informational'] = 'المعلومات';

$GLOBALS["lang"]['initial_size'] = 'الحجم الأولي';

$GLOBALS["lang"]['Initial Size'] = 'الحجم الأولي';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'الناتج';

$GLOBALS["lang"]['inputs'] = 'المدخلات';

$GLOBALS["lang"]['Inputs'] = 'المدخلات';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'يُدرجُ البياناتَ ويَكتشفُ كُلّ الذي يُمْكِنُ أَنْ يُخبرَك.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'اضمك رخصة شراء المفتاح';

$GLOBALS["lang"]['install'] = 'Install';

$GLOBALS["lang"]['Install'] = 'Install';

$GLOBALS["lang"]['install_date'] = 'Install';

$GLOBALS["lang"]['Install Date'] = 'Install';

$GLOBALS["lang"]['install_directory'] = 'Install Director';

$GLOBALS["lang"]['Install Directory'] = 'Install Director';

$GLOBALS["lang"]['Install OpenScap if required'] = 'تركيب غطاء مفتوح عند الاقتضاء';

$GLOBALS["lang"]['install_source'] = 'المصدر';

$GLOBALS["lang"]['Install Source'] = 'المصدر';

$GLOBALS["lang"]['installed_by'] = 'Installed by';

$GLOBALS["lang"]['Installed By'] = 'Installed by';

$GLOBALS["lang"]['installed_on'] = 'تم تركيبها';

$GLOBALS["lang"]['Installed On'] = 'تم تركيبها';

$GLOBALS["lang"]['Installing on Linux'] = 'تركيب لينكس';

$GLOBALS["lang"]['Installing on MacOS'] = 'تركيب ماكاو';

$GLOBALS["lang"]['Installing on Windows'] = 'تركيب النوافذ';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Ident';

$GLOBALS["lang"]['instance_options'] = 'خيارات الموقف';

$GLOBALS["lang"]['Instance Options'] = 'خيارات الموقف';

$GLOBALS["lang"]['instance_provider'] = 'مقدِّم الخدمات';

$GLOBALS["lang"]['Instance Provider'] = 'مقدِّم الخدمات';

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

$GLOBALS["lang"]['integrations_id'] = 'ID';

$GLOBALS["lang"]['Integrations ID'] = 'ID';

$GLOBALS["lang"]['integrations_log'] = 'مرفق التكامل';

$GLOBALS["lang"]['Integrations Log'] = 'مرفق التكامل';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'الهوية المشتركة';

$GLOBALS["lang"]['Interface ID'] = 'الهوية المشتركة';

$GLOBALS["lang"]['interface_type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Interface Type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Internal'] = 'داخلي';

$GLOBALS["lang"]['Internal Field Name'] = 'الاسم الميداني الداخلي';

$GLOBALS["lang"]['Internal ID'] = 'الهوية الداخلية';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'داخليّاً مجموعة من المعلومات الصحيحة عن هذا المستخدم';

$GLOBALS["lang"]['Introduction'] = 'مقدمة';

$GLOBALS["lang"]['invoice'] = 'الفواتير';

$GLOBALS["lang"]['Invoice'] = 'الفواتير';

$GLOBALS["lang"]['invoice_id'] = 'ID فاتورة';

$GLOBALS["lang"]['Invoice ID'] = 'ID فاتورة';

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

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned count';

$GLOBALS["lang"]['Iran'] = 'إيران';

$GLOBALS["lang"]['Iraq'] = 'العراق';

$GLOBALS["lang"]['Ireland'] = 'أيرلندا';

$GLOBALS["lang"]['Is FRU'] = 'هو FRU';

$GLOBALS["lang"]['is_fru'] = 'هو فرو';

$GLOBALS["lang"]['Is Fru'] = 'هو فرو';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'هل خادم نظام المعلومات الإدارية الوطني محلي (على هذا الخادم المفتوح) أم بعيد؟';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'هل هذا الحساب نشط؟ إذا تم تحديد <code>n</code>المستعمل لا يستطيع الدخول';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'هل هذه المهمة مكنت (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'جزيرة مان';

$GLOBALS["lang"]['Israel'] = 'إسرائيل';

$GLOBALS["lang"]['Issue'] = 'المسألة';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['Issues'] = 'المسائل';

$GLOBALS["lang"]['Italy'] = 'إيطاليا';

$GLOBALS["lang"]['Items not in Baseline'] = 'البنود غير المدرجة في خط الأساس';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

$GLOBALS["lang"]['Jamaica'] = 'جامايكا';

$GLOBALS["lang"]['January'] = 'كانون الثاني/يناير';

$GLOBALS["lang"]['Japan'] = 'اليابان';

$GLOBALS["lang"]['Jersey'] = 'جيرسي';

$GLOBALS["lang"]['Jordan'] = 'الأردن';

$GLOBALS["lang"]['July'] = 'تموز/يوليه';

$GLOBALS["lang"]['June'] = 'حزيران/يونيه';

$GLOBALS["lang"]['Kazakhstan'] = 'كازاخستان';

$GLOBALS["lang"]['Kenya'] = 'كينيا';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'المفتاح';

$GLOBALS["lang"]['Key Password (optional)'] = 'كلمة السر الرئيسية (اختيارية)';

$GLOBALS["lang"]['keys'] = 'المفاتيح';

$GLOBALS["lang"]['Keys'] = 'المفاتيح';

$GLOBALS["lang"]['Kiribati'] = 'كيريباس';

$GLOBALS["lang"]['Korea'] = 'كوريا';

$GLOBALS["lang"]['Kuwait'] = 'الكويت';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'جمهورية قيرغيزستان';

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

$GLOBALS["lang"]['latitude'] = 'خط العرض';

$GLOBALS["lang"]['Latitude'] = 'خط العرض';

$GLOBALS["lang"]['Latvia'] = 'لاتفيا';

$GLOBALS["lang"]['Layout'] = 'لك';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'قاعدة البيانات المحلية';

$GLOBALS["lang"]['Ldap Base Dn'] = 'قاعدة البيانات المحلية';

$GLOBALS["lang"]['ldap_dn_account'] = 'حساب Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'حساب Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'لبنان';

$GLOBALS["lang"]['legal_requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Legal Requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Lesotho'] = 'ليسوتو';

$GLOBALS["lang"]['Less Than'] = 'أقل من';

$GLOBALS["lang"]['Less Than or Equals'] = 'أقل من أو يساوي';

$GLOBALS["lang"]['level'] = 'الرتبة';

$GLOBALS["lang"]['Level'] = 'الرتبة';

$GLOBALS["lang"]['Liberia'] = 'ليبريا';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'الجماهيرية العربية الليبية';

$GLOBALS["lang"]['License'] = 'الترخيص';

$GLOBALS["lang"]['License Key'] = 'مفتاح الترخيص';

$GLOBALS["lang"]['License Required'] = 'الترخيص المطلوب';

$GLOBALS["lang"]['licenses'] = 'التراخيص';

$GLOBALS["lang"]['Licenses'] = 'التراخيص';

$GLOBALS["lang"]['Liechtenstein'] = 'ليختنشتاين';

$GLOBALS["lang"]['Like'] = 'مثل';

$GLOBALS["lang"]['limit'] = 'Limit';

$GLOBALS["lang"]['Limit'] = 'Limit';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'قل السؤال إلى أول أصناف X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'محدود إلى 100 صف';

$GLOBALS["lang"]['line_amount'] = 'المبلغ';

$GLOBALS["lang"]['Line Amount'] = 'المبلغ';

$GLOBALS["lang"]['Line Graph'] = 'Line Graph';

$GLOBALS["lang"]['line_number_a'] = 'السطر ألف';

$GLOBALS["lang"]['Line Number A'] = 'السطر ألف';

$GLOBALS["lang"]['line_number_b'] = 'السطر باء';

$GLOBALS["lang"]['Line Number B'] = 'السطر باء';

$GLOBALS["lang"]['line_text'] = 'النص';

$GLOBALS["lang"]['Line Text'] = 'النص';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Advanced)';

$GLOBALS["lang"]['linked_row'] = 'Linked Row';

$GLOBALS["lang"]['Linked Row'] = 'Linked Row';

$GLOBALS["lang"]['linked_table'] = 'الجدول المترابط';

$GLOBALS["lang"]['Linked Table'] = 'الجدول المترابط';

$GLOBALS["lang"]['links'] = 'الروابط';

$GLOBALS["lang"]['Links'] = 'الروابط';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'ويربط هذا الاكتشاف بالسحابة المرتبطة به (إذا لزم الأمر). الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'الروابط إلى <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'الروابط إلى <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'الروابط إلى <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'لينكس';

$GLOBALS["lang"]['List'] = 'القائمة';

$GLOBALS["lang"]['list_table_format'] = 'الجدول الشكل';

$GLOBALS["lang"]['List Table Format'] = 'الجدول الشكل';

$GLOBALS["lang"]['Lithuania'] = 'ليتوانيا';

$GLOBALS["lang"]['Load Balancing'] = 'الموازنة';

$GLOBALS["lang"]['Local'] = 'المحلية';

$GLOBALS["lang"]['Local Area Network'] = 'شبكة المناطق المحلية';

$GLOBALS["lang"]['local_port'] = 'ميناء محلي';

$GLOBALS["lang"]['Local Port'] = 'ميناء محلي';

$GLOBALS["lang"]['Localhost'] = 'المصادر المحلية';

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

$GLOBALS["lang"]['locations'] = 'الموقع';

$GLOBALS["lang"]['Locations'] = 'الموقع';

$GLOBALS["lang"]['Locations in this'] = 'مواقع في هذا';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'التناوب';

$GLOBALS["lang"]['Log Rotation'] = 'التناوب';

$GLOBALS["lang"]['log_status'] = 'الوضع';

$GLOBALS["lang"]['Log Status'] = 'الوضع';

$GLOBALS["lang"]['Logical Cores '] = 'Cores ';

$GLOBALS["lang"]['logical_count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logical Count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logs'] = 'اللوز';

$GLOBALS["lang"]['longitude'] = 'الطول';

$GLOBALS["lang"]['Longitude'] = 'الطول';

$GLOBALS["lang"]['Low'] = 'منخفض';

$GLOBALS["lang"]['Lower Case'] = 'الحالة الدنيا';

$GLOBALS["lang"]['Luxembourg'] = 'لكسمبرغ';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC المصانع';

$GLOBALS["lang"]['mac'] = 'ماك';

$GLOBALS["lang"]['Mac'] = 'ماك';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'ماكاو';

$GLOBALS["lang"]['Macedonia'] = 'مقدونيا';

$GLOBALS["lang"]['Madagascar'] = 'مدغشقر';

$GLOBALS["lang"]['maintenance_expires'] = 'نفقات الصيانة';

$GLOBALS["lang"]['Maintenance Expires'] = 'نفقات الصيانة';

$GLOBALS["lang"]['Malawi'] = 'ملاوي';

$GLOBALS["lang"]['Malaysia'] = 'ماليزيا';

$GLOBALS["lang"]['Maldives'] = 'ملديف';

$GLOBALS["lang"]['Mali'] = 'مالي';

$GLOBALS["lang"]['Malta'] = 'مالطة';

$GLOBALS["lang"]['Manage in NMIS'] = 'إدارة نظام المعلومات الإدارية المتكامل';

$GLOBALS["lang"]['Manual Input'] = 'الناتج الدليلي';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'مصممة يدوياً من قبل المستعملين، الفشل في الإنتاج.';

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

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Mask';

$GLOBALS["lang"]['Mask'] = 'Mask';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'خيارات المطابقة';

$GLOBALS["lang"]['Match Options'] = 'خيارات المطابقة';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'محاسبة';

$GLOBALS["lang"]['maturity_level'] = 'مستوى الاستحقاق';

$GLOBALS["lang"]['Maturity Level'] = 'مستوى الاستحقاق';

$GLOBALS["lang"]['maturity_score'] = 'الاستحقاق';

$GLOBALS["lang"]['Maturity Score'] = 'الاستحقاق';

$GLOBALS["lang"]['Mauritania'] = 'موريتانيا';

$GLOBALS["lang"]['Mauritius'] = 'موريشيوس';

$GLOBALS["lang"]['max_file_size'] = '(ماكس فيل)';

$GLOBALS["lang"]['Max File Size'] = '(ماكس فيل)';

$GLOBALS["lang"]['Max Length'] = 'ماكس لينغث';

$GLOBALS["lang"]['max_size'] = '(ماكس زي)';

$GLOBALS["lang"]['Max Size'] = '(ماكس زي)';

$GLOBALS["lang"]['May'] = 'أيار/مايو';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Medium'] = 'متوسطة';

$GLOBALS["lang"]['members'] = 'الأعضاء';

$GLOBALS["lang"]['Members'] = 'الأعضاء';

$GLOBALS["lang"]['memory'] = 'الذاكرة';

$GLOBALS["lang"]['Memory'] = 'الذاكرة';

$GLOBALS["lang"]['memory_count'] = 'Memory count';

$GLOBALS["lang"]['Memory Count'] = 'Memory count';

$GLOBALS["lang"]['memory_slot_count'] = 'Memory Slot count';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memory Slot count';

$GLOBALS["lang"]['menu_category'] = 'الفئة العمرية';

$GLOBALS["lang"]['Menu Category'] = 'الفئة العمرية';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'الرسالة';

$GLOBALS["lang"]['Message'] = 'الرسالة';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['metric'] = 'القياس';

$GLOBALS["lang"]['Metric'] = 'القياس';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'شبكة منطقة العاصمة';

$GLOBALS["lang"]['Mexico'] = 'المكسيك';

$GLOBALS["lang"]['Micronesia'] = 'ميكرونيزيا';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['Microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['migrations'] = 'الهجرة';

$GLOBALS["lang"]['Migrations'] = 'الهجرة';

$GLOBALS["lang"]['minute'] = 'دقيقة';

$GLOBALS["lang"]['Minute'] = 'دقيقة';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'منذ آخر مراجعة للحسابات هي أكثر من';

$GLOBALS["lang"]['model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['Model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['model_family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['Model Family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['module'] = 'الوحدة';

$GLOBALS["lang"]['Module'] = 'الوحدة';

$GLOBALS["lang"]['module_index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Module Index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Moldova'] = 'مولدوفا';

$GLOBALS["lang"]['Monaco'] = 'موناكو';

$GLOBALS["lang"]['Monday'] = 'الاثنين';

$GLOBALS["lang"]['Mongolia'] = 'منغوليا';

$GLOBALS["lang"]['monitor'] = 'مرصد';

$GLOBALS["lang"]['Monitor'] = 'مرصد';

$GLOBALS["lang"]['Montenegro'] = 'الجبل الأسود';

$GLOBALS["lang"]['month'] = 'الشهر';

$GLOBALS["lang"]['Month'] = 'الشهر';

$GLOBALS["lang"]['Montserrat'] = 'مونتسيرات';

$GLOBALS["lang"]['Morocco'] = 'المغرب';

$GLOBALS["lang"]['motherboard'] = 'الأم';

$GLOBALS["lang"]['Motherboard'] = 'الأم';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'طراز جبل';

$GLOBALS["lang"]['Mount Type'] = 'طراز جبل';

$GLOBALS["lang"]['Mozambique'] = 'موزامبيق';

$GLOBALS["lang"]['Must Respond to Ping'] = 'يجب أن يرد على بينغ';

$GLOBALS["lang"]['Myanmar'] = 'ميانمار';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'نون';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Customer';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Device Options';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'الاسم الميداني';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Field Type';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS الدور';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ملاحظة - يمكنك منع عرض وثائق التفويض بالنص العادي أدناه عن طريق وضع بند التشكيلة <code>decrypt_credentials</code> إلى <code>n</code>.';

$GLOBALS["lang"]['name'] = 'الاسم';

$GLOBALS["lang"]['Name'] = 'الاسم';

$GLOBALS["lang"]['namespace'] = 'الاسم الفضائي';

$GLOBALS["lang"]['Namespace'] = 'الاسم الفضائي';

$GLOBALS["lang"]['Namibia'] = 'ناميبيا';

$GLOBALS["lang"]['Nauru'] = 'ناورو';

$GLOBALS["lang"]['Nepal'] = 'نيبال';

$GLOBALS["lang"]['net_index'] = 'صافي المؤشر';

$GLOBALS["lang"]['Net Index'] = 'صافي المؤشر';

$GLOBALS["lang"]['Netherlands Antilles'] = 'جزر الأنتيل الهولندية';

$GLOBALS["lang"]['Netherlands the'] = 'هولندا';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Policies';

$GLOBALS["lang"]['Network'] = 'الشبكة';

$GLOBALS["lang"]['network_address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['Network Address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'الشبكات';

$GLOBALS["lang"]['networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks Generated By'] = 'الشبكات المولدة';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'الشبكات التي تستخدم مسرداً من طراز CIDR';

$GLOBALS["lang"]['New Building Name'] = 'اسم المبنى الجديد';

$GLOBALS["lang"]['New Caledonia'] = 'كاليدونيا الجديدة';

$GLOBALS["lang"]['New Floor Name'] = 'اسم الطابق الجديد';

$GLOBALS["lang"]['New Room Name'] = 'اسم الغرفة الجديدة';

$GLOBALS["lang"]['New Row Name'] = 'اسم جديد';

$GLOBALS["lang"]['New Zealand'] = 'نيوزيلندا';

$GLOBALS["lang"]['next_hop'] = 'التالي';

$GLOBALS["lang"]['Next Hop'] = 'التالي';

$GLOBALS["lang"]['next_run'] = 'الركض التالي';

$GLOBALS["lang"]['Next Run'] = 'الركض التالي';

$GLOBALS["lang"]['Nicaragua'] = 'نيكاراغوا';

$GLOBALS["lang"]['Niger'] = 'النيجر';

$GLOBALS["lang"]['Nigeria'] = 'نيجيريا';

$GLOBALS["lang"]['Niue'] = 'نيوي';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Customer';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Customer';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'نميس مانج';

$GLOBALS["lang"]['Nmis Manage'] = 'نميس مانج';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Name';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Name';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'لا';

$GLOBALS["lang"]['No Devices Returned'] = 'لا توجد أجهزة إعادة';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'No Google Maps API هدية رئيسية لن تتمكن من عرض الخريطة';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'No License for Professional or Enterprise';

$GLOBALS["lang"]['No Results'] = 'لا نتائج';

$GLOBALS["lang"]['No data in License Key'] = 'No data in License Key';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'لا حاجة إلى تحديث قاعدة البيانات في هذا الوقت.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'لا شيء';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'المعيار';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'جزر ماريانا الشمالية';

$GLOBALS["lang"]['Norway'] = 'النرويج';

$GLOBALS["lang"]['Not Applicable'] = 'غير قابلة للتطبيق';

$GLOBALS["lang"]['Not Checked'] = 'لم يتم التحقق منها';

$GLOBALS["lang"]['Not Equals'] = 'لا يساوي';

$GLOBALS["lang"]['Not In'] = 'ليس';

$GLOBALS["lang"]['Not Like'] = 'لا';

$GLOBALS["lang"]['Not Set'] = 'ليست المجموعة';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'لا تستخدم عادة. وإذا ما تم تحديد ذلك، فإن هذا يتطلب أن يكون لدى الجهاز ميناء مفتوح (حسب الخيارات المتاحة) للنظر في الرد عليه. A MAC address, arp response or ping response is not considered sufficient to be considered responding. مفيد إذا كان جهاز توجيه أو جدار ناري بين الخادم المفتوح واستهداف IP يستجيب لمسح الموانئ نيابة عن شركاء التنفيذ.';

$GLOBALS["lang"]['Note'] = 'ملاحظة';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).';

$GLOBALS["lang"]['Notes'] = 'الحواشي';

$GLOBALS["lang"]['notes'] = 'الحواشي';

$GLOBALS["lang"]['Notice'] = 'الإشعار';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'تشرين الثاني/نوفمبر';

$GLOBALS["lang"]['ORDER BY'] = 'أودريه';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'الأسرة';

$GLOBALS["lang"]['OS Family'] = 'الأسرة';

$GLOBALS["lang"]['OS Group'] = 'مجموعة OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'الاعتراض';

$GLOBALS["lang"]['Object Ident'] = 'الاعتراض';

$GLOBALS["lang"]['October'] = 'تشرين الأول/أكتوبر';

$GLOBALS["lang"]['Oman'] = 'عمان';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'على';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'واحد من <code>3x2</code>.. <code>4x2</code>.. <code>4x3</code> أو <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'واحد من المخصّصين والمفوضين، التخطيط، المحجوزين، غير المتعلمين، غير المنظمين. التخلف عن الدفع';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'واحد من أي منهما <code>active directory</code> أو <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'One of: antivirus, supportive, firewall, approved, banned, ignored or other.';

$GLOBALS["lang"]['Online Documentation'] = 'الوثائق الإلكترونية';

$GLOBALS["lang"]['Open-AudIT'] = 'مفتوح';

$GLOBALS["lang"]['Open-AudIT Community'] = 'الجماعة المفتوحة باب العضوية';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'الاسم الميداني المفتوح باب العضوية';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'التراخيص المفتوحة';

$GLOBALS["lang"]['Open-AudIT Options'] = 'خيارات الاستثمار المفتوح';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'الفئة الفنية المفتوحة';

$GLOBALS["lang"]['OpenScap is Installed'] = 'الهروب مفتوح';

$GLOBALS["lang"]['openldap_user_dn'] = 'مستعمل مفتوح';

$GLOBALS["lang"]['Openldap User Dn'] = 'مستعمل مفتوح';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'عضوية المستعمل المفتوح';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'عضوية المستعمل المفتوح';

$GLOBALS["lang"]['open|filtered'] = 'مفتوح';

$GLOBALS["lang"]['Open|filtered'] = 'مفتوح';

$GLOBALS["lang"]['Operating System'] = 'نظام التشغيل';

$GLOBALS["lang"]['Operating System Family Contains'] = 'الحاويات الأسرية لنظام التشغيل';

$GLOBALS["lang"]['Operating Systems'] = 'نظم التشغيل';

$GLOBALS["lang"]['optical'] = 'المعارضة';

$GLOBALS["lang"]['Optical'] = 'المعارضة';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'الصيغة الاختيارية التي راجعتها محكمة الاستئناف. استخدمي النسبة المئوية للإشارة كبطاقة جامحة';

$GLOBALS["lang"]['options'] = 'الخيارات';

$GLOBALS["lang"]['Options'] = 'الخيارات';

$GLOBALS["lang"]['Or select from the below fields.'] = 'أو تختار من الحقول التالية';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID';

$GLOBALS["lang"]['Org ID'] = 'ID';

$GLOBALS["lang"]['Organisation'] = 'المنظمة';

$GLOBALS["lang"]['organisation'] = 'المنظمة';

$GLOBALS["lang"]['Organisation Descendants'] = 'المنظمة';

$GLOBALS["lang"]['orgs'] = 'الأورام';

$GLOBALS["lang"]['Orgs'] = 'الأورام';

$GLOBALS["lang"]['orientation'] = 'التوجيه';

$GLOBALS["lang"]['Orientation'] = 'التوجيه';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_family'] = 'الأسرة';

$GLOBALS["lang"]['Os Family'] = 'الأسرة';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Os Installation Date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'رخصة القيادة';

$GLOBALS["lang"]['Os License'] = 'رخصة القيادة';

$GLOBALS["lang"]['os_license_code'] = 'قانون الترخيص';

$GLOBALS["lang"]['Os License Code'] = 'قانون الترخيص';

$GLOBALS["lang"]['os_license_mode'] = 'Os License Mode';

$GLOBALS["lang"]['Os License Mode'] = 'Os License Mode';

$GLOBALS["lang"]['os_license_type'] = 'نوع الترخيص';

$GLOBALS["lang"]['Os License Type'] = 'نوع الترخيص';

$GLOBALS["lang"]['os_name'] = 'الاسم';

$GLOBALS["lang"]['Os Name'] = 'الاسم';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Other';

$GLOBALS["lang"]['Others'] = 'جهات أخرى';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'وقت إستجابة SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'وقتنا للرد على السيناريو';

$GLOBALS["lang"]['output'] = 'الناتج';

$GLOBALS["lang"]['Output'] = 'الناتج';

$GLOBALS["lang"]['outputs'] = 'النواتج';

$GLOBALS["lang"]['Outputs'] = 'النواتج';

$GLOBALS["lang"]['overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['Overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['owner'] = 'المالك';

$GLOBALS["lang"]['Owner'] = 'المالك';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['package'] = 'التعبئة';

$GLOBALS["lang"]['Package'] = 'التعبئة';

$GLOBALS["lang"]['packages'] = 'الحزم';

$GLOBALS["lang"]['Packages'] = 'الحزم';

$GLOBALS["lang"]['pagefile'] = 'الصفحة';

$GLOBALS["lang"]['Pagefile'] = 'الصفحة';

$GLOBALS["lang"]['Pakistan'] = 'باكستان';

$GLOBALS["lang"]['Palau'] = 'بالاو';

$GLOBALS["lang"]['Palestinian Territory'] = 'الأرض الفلسطينية';

$GLOBALS["lang"]['Panama'] = 'بنما';

$GLOBALS["lang"]['Papua New Guinea'] = 'بابوا غينيا الجديدة';

$GLOBALS["lang"]['Paraguay'] = 'باراغواي';

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

$GLOBALS["lang"]['password'] = 'كلمة السر';

$GLOBALS["lang"]['Password'] = 'كلمة السر';

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

$GLOBALS["lang"]['path'] = 'Path';

$GLOBALS["lang"]['Path'] = 'Path';

$GLOBALS["lang"]['Performance'] = 'الأداء';

$GLOBALS["lang"]['permission'] = 'الإذن';

$GLOBALS["lang"]['Permission'] = 'الإذن';

$GLOBALS["lang"]['permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Personal Area Network'] = 'شبكة المناطق الشخصية';

$GLOBALS["lang"]['Peru'] = 'بيرو';

$GLOBALS["lang"]['Philippines'] = 'الفلبين';

$GLOBALS["lang"]['phone'] = 'Phone';

$GLOBALS["lang"]['Phone'] = 'Phone';

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

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'جزر بيتكيرن';

$GLOBALS["lang"]['placement'] = 'التنسيب';

$GLOBALS["lang"]['Placement'] = 'التنسيب';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'يرجى الحصول على سجل لمدير مفتوح ورفع مستوى قاعدة البيانات.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'يرجى ملاحظة أن الصندوق المختار سيتجاوز صندوق مدخلات النص.';

$GLOBALS["lang"]['Please set using'] = 'رجاءً إبدأْ';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'بولندا';

$GLOBALS["lang"]['Policies'] = 'السياسات';

$GLOBALS["lang"]['Policies have exceptions.'] = 'وللسياسات استثناءات.';

$GLOBALS["lang"]['policy'] = 'السياسات';

$GLOBALS["lang"]['Policy'] = 'السياسات';

$GLOBALS["lang"]['policy_id'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy ID'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy Result'] = 'السياسة العامة';

$GLOBALS["lang"]['Policy Results'] = 'نتائج السياسات';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populated by audit.'] = 'مأخوذة من مراجعة الحسابات';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'مأهولة بالاكتشاف والمراجعة';

$GLOBALS["lang"]['Populated dynamically.'] = 'مأهولة دينامياً';

$GLOBALS["lang"]['Populated from DNS.'] = 'مأهولة من DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'مأهولة من اكتشاف SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'مأخوذة من مراجعات الأجهزة';

$GLOBALS["lang"]['Populated from hostname.'] = 'مأهولة من اسم المضيف';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'مأهولة من الآلة على لينكس.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'مأهولة من IP للطريق الافتراضي أو IP كشفت في الاكتشاف.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'مأهولة من القيادة المضيفة';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'مأخوذة ببيانات إضافية من النظام الخارجي، في تمثيل للشركة.';

$GLOBALS["lang"]['port'] = 'الميناء';

$GLOBALS["lang"]['Port'] = 'الميناء';

$GLOBALS["lang"]['port_name'] = 'الاسم';

$GLOBALS["lang"]['Port Name'] = 'الاسم';

$GLOBALS["lang"]['port_number'] = 'الميناء';

$GLOBALS["lang"]['Port Number'] = 'الميناء';

$GLOBALS["lang"]['ports_in_order'] = 'Ports In Order';

$GLOBALS["lang"]['Ports In Order'] = 'Ports In Order';

$GLOBALS["lang"]['ports_stop_after'] = 'بورتس توقف بعد';

$GLOBALS["lang"]['Ports Stop After'] = 'بورتس توقف بعد';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'البرتغال، الجمهورية البرتغالية';

$GLOBALS["lang"]['position'] = 'المنصب';

$GLOBALS["lang"]['Position'] = 'المنصب';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['Power Circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['power_sockets'] = 'Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Sockets';

$GLOBALS["lang"]['Prerequisites'] = 'الشروط المسبقة';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'الشروط والاختبارات';

$GLOBALS["lang"]['present'] = 'Present';

$GLOBALS["lang"]['Present'] = 'Present';

$GLOBALS["lang"]['previous_value'] = 'القيمة السابقة';

$GLOBALS["lang"]['Previous Value'] = 'القيمة السابقة';

$GLOBALS["lang"]['primary'] = 'الابتدائي';

$GLOBALS["lang"]['Primary'] = 'الابتدائي';

$GLOBALS["lang"]['Primary Key'] = 'المفتاح الرئيسي';

$GLOBALS["lang"]['print_queue'] = 'طابعة';

$GLOBALS["lang"]['Print Queue'] = 'طابعة';

$GLOBALS["lang"]['printer_color'] = 'Printer Color';

$GLOBALS["lang"]['Printer Color'] = 'Printer Color';

$GLOBALS["lang"]['printer_duplex'] = 'Printer Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printer Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'اسم بورتر';

$GLOBALS["lang"]['Printer Port Name'] = 'اسم بورتر';

$GLOBALS["lang"]['printer_shared'] = 'Printer Shared';

$GLOBALS["lang"]['Printer Shared'] = 'Printer Shared';

$GLOBALS["lang"]['printer_shared_name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['Printer Shared Name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['priority'] = 'الأولوية';

$GLOBALS["lang"]['Priority'] = 'الأولوية';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphrase';

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

$GLOBALS["lang"]['profile'] = 'Profile';

$GLOBALS["lang"]['Profile'] = 'Profile';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'البروتوكول';

$GLOBALS["lang"]['Protocol'] = 'البروتوكول';

$GLOBALS["lang"]['provider'] = 'Provider';

$GLOBALS["lang"]['Provider'] = 'Provider';

$GLOBALS["lang"]['published'] = 'صادرة';

$GLOBALS["lang"]['Published'] = 'صادرة';

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

$GLOBALS["lang"]['purchase_vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['purpose'] = 'الغرض';

$GLOBALS["lang"]['Purpose'] = 'الغرض';

$GLOBALS["lang"]['Qatar'] = 'قطر';

$GLOBALS["lang"]['queries'] = 'الكميات';

$GLOBALS["lang"]['Queries'] = 'الكميات';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'عمليات مراجعة الحسابات المتعلقة بالنواحي النوعية';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'البنود المحددة';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'الرتبة RX';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profile';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'أجهزة الطرد';

$GLOBALS["lang"]['Rack Devices'] = 'أجهزة الطرد';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['Rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['read'] = 'اقرأ';

$GLOBALS["lang"]['Read'] = 'اقرأ';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'إقرأ وثائقنا على الإنترنت عن "الإنترنت المفتوح"';

$GLOBALS["lang"]['Red Query'] = 'الصالة الحمراء';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['region'] = 'المنطقة';

$GLOBALS["lang"]['Region'] = 'المنطقة';

$GLOBALS["lang"]['registered_user'] = 'المستعمل المسجل';

$GLOBALS["lang"]['Registered User'] = 'المستعمل المسجل';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'الإصدار';

$GLOBALS["lang"]['remediation'] = 'الإصلاح';

$GLOBALS["lang"]['Remediation'] = 'الإصلاح';

$GLOBALS["lang"]['Remote'] = 'Remote';

$GLOBALS["lang"]['remote_address'] = 'العنوان عن بعد';

$GLOBALS["lang"]['Remote Address'] = 'العنوان عن بعد';

$GLOBALS["lang"]['remote_port'] = 'Remote Port';

$GLOBALS["lang"]['Remote Port'] = 'Remote Port';

$GLOBALS["lang"]['Remove'] = 'إزالة الألغام';

$GLOBALS["lang"]['Remove Exception'] = 'استثناءات إزالة الألغام';

$GLOBALS["lang"]['Report'] = 'التقرير';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Report on your devices, networks and more';

$GLOBALS["lang"]['reportable'] = 'التقارير';

$GLOBALS["lang"]['Reportable'] = 'التقارير';

$GLOBALS["lang"]['request'] = 'الطلب';

$GLOBALS["lang"]['Request'] = 'الطلب';

$GLOBALS["lang"]['requested'] = 'الطلب';

$GLOBALS["lang"]['Requested'] = 'الطلب';

$GLOBALS["lang"]['require_port'] = 'ميناء الطلب';

$GLOBALS["lang"]['Require Port'] = 'ميناء الطلب';

$GLOBALS["lang"]['Require an Open Port'] = 'طلب ميناء مفتوح';

$GLOBALS["lang"]['Required'] = 'المطلوب';

$GLOBALS["lang"]['Reset'] = 'إعادة التوطين';

$GLOBALS["lang"]['Reset All Data'] = 'إعادة صياغة جميع البيانات';

$GLOBALS["lang"]['Reset to Default'] = 'Reset to Default';

$GLOBALS["lang"]['resource'] = 'الموارد';

$GLOBALS["lang"]['Resource'] = 'الموارد';

$GLOBALS["lang"]['Resource Name'] = 'اسم الموارد';

$GLOBALS["lang"]['Resources'] = 'الموارد';

$GLOBALS["lang"]['response'] = 'الرد';

$GLOBALS["lang"]['Response'] = 'الرد';

$GLOBALS["lang"]['responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrict to Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrict to Subnet';

$GLOBALS["lang"]['result'] = 'النتيجة';

$GLOBALS["lang"]['Result'] = 'النتيجة';

$GLOBALS["lang"]['Results'] = 'النتائج';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['Retrieved Ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['retrieved_name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved Name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the tool - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, سولاري: سمبيوس، AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'الشمل';

$GLOBALS["lang"]['revision'] = 'التنقيح';

$GLOBALS["lang"]['Revision'] = 'التنقيح';

$GLOBALS["lang"]['risk_assesment_result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['Risk Assesment Result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['role'] = 'الدور';

$GLOBALS["lang"]['Role'] = 'الدور';

$GLOBALS["lang"]['roles'] = 'الأدوار';

$GLOBALS["lang"]['Roles'] = 'الأدوار';

$GLOBALS["lang"]['Romania'] = 'رومانيا';

$GLOBALS["lang"]['Room'] = 'غرفة الاجتماعات';

$GLOBALS["lang"]['route'] = 'الطريق';

$GLOBALS["lang"]['Route'] = 'الطريق';

$GLOBALS["lang"]['Row'] = 'Row';

$GLOBALS["lang"]['Row Count'] = 'الكونت';

$GLOBALS["lang"]['row_position'] = 'نقطة الصفر';

$GLOBALS["lang"]['Row Position'] = 'نقطة الصفر';

$GLOBALS["lang"]['Rows'] = 'Rows';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'ابدأ';

$GLOBALS["lang"]['Ru Start'] = 'ابدأ';

$GLOBALS["lang"]['rule_group'] = 'مجموعة القواعد';

$GLOBALS["lang"]['Rule Group'] = 'مجموعة القواعد';

$GLOBALS["lang"]['rules'] = 'القواعد';

$GLOBALS["lang"]['Rules'] = 'القواعد';

$GLOBALS["lang"]['Run Discovery'] = 'تشغيل الاكتشاف';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'تشغيل الكشف عن الأجهزة';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'ابحثوا عن اكتشاف واكتشفوا <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['Run this Command'] = 'أدير هذه القيادة';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Russian Federation'] = 'الاتحاد الروسي';

$GLOBALS["lang"]['Rwanda'] = 'رواندا';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'الرتبة';

$GLOBALS["lang"]['Rx Level'] = 'الرتبة';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profile';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profile';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1/ v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP التفاصيل';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation statements';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH المفتاح';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

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

$GLOBALS["lang"]['Save as Default'] = 'انقذوا المكان';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan Options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'مسح أعلى عدد من موانئ TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'قوموا بمسح أكبر عدد من الموانئ';

$GLOBALS["lang"]['schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['Schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['script_timeout'] = 'الوقت المحدد';

$GLOBALS["lang"]['Script Timeout'] = 'الوقت المحدد';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'الوحدة المحلية';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'الوحدة المحلية';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'البحث';

$GLOBALS["lang"]['Search For a Device'] = 'ابحث عن جهاز';

$GLOBALS["lang"]['Search for Device'] = 'البحث عن الشيطان';

$GLOBALS["lang"]['secondary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Secondary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Secondary Text'] = 'النص الثانوي';

$GLOBALS["lang"]['section'] = 'الباب';

$GLOBALS["lang"]['Section'] = 'الباب';

$GLOBALS["lang"]['secure'] = 'الضمان';

$GLOBALS["lang"]['Secure'] = 'الضمان';

$GLOBALS["lang"]['Security Name'] = 'الاسم الأمني';

$GLOBALS["lang"]['Security Status'] = 'الحالة الأمنية';

$GLOBALS["lang"]['security_zone'] = 'المنطقة الأمنية';

$GLOBALS["lang"]['Security Zone'] = 'المنطقة الأمنية';

$GLOBALS["lang"]['seed_ip'] = 'البذور IP';

$GLOBALS["lang"]['Seed IP'] = 'البذور IP';

$GLOBALS["lang"]['seed_ping'] = 'البذور';

$GLOBALS["lang"]['Seed Ping'] = 'البذور';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'إعادة تصدير البذور إلى القطاع الخاص';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'إعادة تصدير البذور إلى القطاع الخاص';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict to Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict to Subnet';

$GLOBALS["lang"]['Select'] = 'مختارة';

$GLOBALS["lang"]['Select All'] = 'بيع';

$GLOBALS["lang"]['select_external_attribute'] = 'Retribute';

$GLOBALS["lang"]['Select External Attribute'] = 'Retribute';

$GLOBALS["lang"]['select_external_count'] = 'Select External count';

$GLOBALS["lang"]['Select External Count'] = 'Select External count';

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

$GLOBALS["lang"]['Select a Table'] = 'اختيار الجدول';

$GLOBALS["lang"]['Senegal'] = 'السنغال';

$GLOBALS["lang"]['September'] = 'أيلول/سبتمبر';

$GLOBALS["lang"]['Serbia'] = 'صربيا';

$GLOBALS["lang"]['serial'] = 'الخدمات';

$GLOBALS["lang"]['Serial'] = 'الخدمات';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'سلسلة';

$GLOBALS["lang"]['Series'] = 'سلسلة';

$GLOBALS["lang"]['server'] = 'سيرفر';

$GLOBALS["lang"]['Server'] = 'سيرفر';

$GLOBALS["lang"]['server_id'] = 'هوية السيرفر';

$GLOBALS["lang"]['Server ID'] = 'هوية السيرفر';

$GLOBALS["lang"]['Server Is'] = 'الخادم';

$GLOBALS["lang"]['server_item'] = 'البند';

$GLOBALS["lang"]['Server Item'] = 'البند';

$GLOBALS["lang"]['Servers'] = 'خادم';

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

$GLOBALS["lang"]['service_version'] = 'الخدمات';

$GLOBALS["lang"]['Service Version'] = 'الخدمات';

$GLOBALS["lang"]['Set'] = 'المجموعة';

$GLOBALS["lang"]['set_by'] = 'حدد';

$GLOBALS["lang"]['Set By'] = 'حدد';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'تحديد حجم الجداول على شاشات القائمة (الطبيعية أو المدمجة).';

$GLOBALS["lang"]['severity'] = 'الشدة';

$GLOBALS["lang"]['Severity'] = 'الشدة';

$GLOBALS["lang"]['severity_text'] = 'نص الشدة';

$GLOBALS["lang"]['Severity Text'] = 'نص الشدة';

$GLOBALS["lang"]['Seychelles'] = 'سيشيل';

$GLOBALS["lang"]['share'] = 'Share';

$GLOBALS["lang"]['Share'] = 'Share';

$GLOBALS["lang"]['Share Name'] = 'Share Name';

$GLOBALS["lang"]['shared'] = 'Shared';

$GLOBALS["lang"]['Shared'] = 'Shared';

$GLOBALS["lang"]['shared_name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['Shared Name'] = 'الاسم المتقاسم';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'السفينة';

$GLOBALS["lang"]['short'] = 'قصير';

$GLOBALS["lang"]['Short'] = 'قصير';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'هل يجب أن أزيل جميع البيانات غير الجارية من هذا الجهاز؟';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'إذا استخدم هذا الملف (أو النمط) لاستبعاد الملفات من الإبلاغ. عادة، لملفات مراجعة الحسابات، هذا جاهز <code>y</code>.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'يجب أن نضيف أجهزة من الخدمة البعيدة محلياً';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'هل يجب أن نطبق هذه الرخصة على الـ(أورغ) المختار وكذلك على أطفال (أورق)؟';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب أن نعتبر ميناءاً مليئاً أن يكون ميناء مفتوحاً - ومن ثم نعلم هذا IP بأنه لديه جهاز ملحق؟';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب أن نعتبر الميناء مفتوحاً ليكون ميناء مفتوحاً ومن ثم نعلم هذا IP بأنه لديه جهاز ملحق؟';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'يجب أن نكشف هذه المجموعة في واجهة الإنترنت';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'هل ينبغي أن نعرض هذا الاستفسار في قائمة التقارير الواردة في قائمة التقرير في واجهة الإنترنت.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'يجب أن نكشف هذا السؤال في قائمة التقارير تحت قائمة التقارير في واجهة الإنترنت';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'يجب علينا أن نفتح على آلة الهدف';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'هل يجب أن نطابق عنواناً متصلاً بالأداة حتى لو كان مضاعفاً محتملاً';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'يجب أن نطابق جهازاً مبنياً على ثلاجته';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'يجب أن نطابق جهازاً بناءً على إسمه المضيف';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'يجب أن نطابق جهازاً مبنياً على الـ"يو إيد".';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'يجب أن نطابق جهازاً مبنياً على دبوسه';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'يجب أن نطابق جهازاً مبنياً على ثلاجته';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'يجب أن نطابق جهازاً مبنياً على إسمه المضيف';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'يجب أن نطابق جهازاً مبنياً على إسمه المضيف و دبوس د.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'يجب أن نطابق جهازاً بناءً على إسمه المضيف و التسلسل';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'إذا كان لدينا جهاز قائم بدون بيانات';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'يجب أن نطابق جهازاً مبنياً على رشفه';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'يجب أن نطابق جهازاً على عنوانه';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'يجب أن نطابق جهازاً على أساس نوعه المتسلسل';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'يجب أن نطابق جهاز بناء على رقمه التسلسلي';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'يجب أن نطابق جهازاً مبنياً فقط على مسلسل (إس إن بي إم) و التسلسل';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'يجب أن نطابق جهازاً مبنياً فقط على مسلسل (إس إن بي إم)';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'يجب أن نطابق جهازاً مبنياً على إسمه المضيف فقط';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'هل يجب أن نضغط على IP قبل محاولة مسحه؟ إذا لم ترد على الرنين، تخطى هذا الجهاز.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'يجب أن نظهر النظام الخارجي من أجهزةنا المحلية';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'ينبغي أن نجري مراجعة للحسابات ونقدمها (ذ/ن).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'يجب أن نختبر لـ (إم بي إم) باستخدام ميناء (يو دي 161)';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'يجب أن نختبر SSH باستخدام ميناء TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'يجب أن نختبر لـ (وام) باستخدام ميناء (تي سي) 135';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'هل يجب أن نفتح الوكيل';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن نستخدم هذه الطريقة لتوثيق وثائق تفويض المستخدمين مجموعة إلى <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن نستخدم هذه الطريقة لتأثير أدوار المستخدمين الميدان <code>use_auth</code> يجب أن تكون جاهزة <code>y</code> لاستخدام هذا. مجموعة إلى <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'عرض';

$GLOBALS["lang"]['sid'] = 'سيد';

$GLOBALS["lang"]['Sid'] = 'سيد';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'سيراليون';

$GLOBALS["lang"]['Singapore'] = 'سنغافورة';

$GLOBALS["lang"]['Site A'] = 'الموقع ألف';

$GLOBALS["lang"]['Site B'] = 'الموقع باء';

$GLOBALS["lang"]['site_hours_a'] = 'Site Hours A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Hours A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Hours B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Hours B';

$GLOBALS["lang"]['size'] = 'الحجم';

$GLOBALS["lang"]['Size'] = 'الحجم';

$GLOBALS["lang"]['slaves'] = 'الرقيق';

$GLOBALS["lang"]['Slaves'] = 'الرقيق';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'سلوفاكيا (جمهورية سلوفاكيا)';

$GLOBALS["lang"]['Slovenia'] = 'سلوفينيا';

$GLOBALS["lang"]['Smart Status'] = 'الحالة الذكية';

$GLOBALS["lang"]['smversion'] = 'التحويل';

$GLOBALS["lang"]['Smversion'] = 'التحويل';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'اسم المؤسسة';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'اسم المؤسسة';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'وقت النوم';

$GLOBALS["lang"]['Snmp Timeout'] = 'وقت النوم';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'البرمجيات';

$GLOBALS["lang"]['Software'] = 'البرمجيات';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'البرمجيات وجدت آخر 7 أيام';

$GLOBALS["lang"]['Software Found Today'] = 'البرمجيات وجدت اليوم';

$GLOBALS["lang"]['Software Found Yesterday'] = 'البرمجيات وجدت أمس';

$GLOBALS["lang"]['software_key'] = 'مفتاح البرامجيات';

$GLOBALS["lang"]['Software Key'] = 'مفتاح البرامجيات';

$GLOBALS["lang"]['software_name'] = 'اسم البرمجيات';

$GLOBALS["lang"]['Software Name'] = 'اسم البرمجيات';

$GLOBALS["lang"]['Software Policies'] = 'سياسات البرامجيات';

$GLOBALS["lang"]['software_revision'] = 'تنقيح البرامجيات';

$GLOBALS["lang"]['Software Revision'] = 'تنقيح البرامجيات';

$GLOBALS["lang"]['software_version'] = 'البرمجيات';

$GLOBALS["lang"]['Software Version'] = 'البرمجيات';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'جزر سليمان';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'الصومال، الجمهورية الصومالية';

$GLOBALS["lang"]['sound'] = 'الصوت';

$GLOBALS["lang"]['Sound'] = 'الصوت';

$GLOBALS["lang"]['source'] = 'المصدر';

$GLOBALS["lang"]['Source'] = 'المصدر';

$GLOBALS["lang"]['South Africa'] = 'جنوب أفريقيا';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'جنوب جورجيا وجزر ساندويتش الجنوبية';

$GLOBALS["lang"]['Spain'] = 'إسبانيا';

$GLOBALS["lang"]['Spanish'] = 'الإسبانية';

$GLOBALS["lang"]['Specific to Azure.'] = 'بالتحديد لـ(أزور)';

$GLOBALS["lang"]['Specific to OKTA.'] = 'محدد لـ (أوكتا)';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'يحدد قائمة مفصَّلة للأهداف (لا أماكن) التي ستستبعد من المسح. القائمة التي تمر بها تستخدم النسيج الطبيعي لـ (نامب) لذا يمكن أن تشمل الأسماء المستضافة';

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

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'سري لانكا';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'وقت مستقطع';

$GLOBALS["lang"]['Ssh Timeout'] = 'وقت مستقطع';

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

$GLOBALS["lang"]['started_date'] = 'بدأت';

$GLOBALS["lang"]['Started Date'] = 'بدأت';

$GLOBALS["lang"]['state'] = 'الدولة';

$GLOBALS["lang"]['State'] = 'الدولة';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'الحالة';

$GLOBALS["lang"]['Status'] = 'الحالة';

$GLOBALS["lang"]['Storage'] = 'التخزين';

$GLOBALS["lang"]['storage_count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage Count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage-Area Network'] = 'شبكة تخزين - آريا';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'النوع الفرعي';

$GLOBALS["lang"]['Sub Type'] = 'النوع الفرعي';

$GLOBALS["lang"]['Submit'] = 'Submit';

$GLOBALS["lang"]['Submitted From'] = 'مقدمة';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'هوية المشتركين';

$GLOBALS["lang"]['suburb'] = 'الضواحي';

$GLOBALS["lang"]['Suburb'] = 'الضواحي';

$GLOBALS["lang"]['Success'] = 'النجاح';

$GLOBALS["lang"]['Sudan'] = 'السودان';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'كلمة سر (اختياري)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'موجز';

$GLOBALS["lang"]['Summaries'] = 'موجز';

$GLOBALS["lang"]['summary'] = 'موجز';

$GLOBALS["lang"]['Summary'] = 'موجز';

$GLOBALS["lang"]['Sunday'] = 'الأحد';

$GLOBALS["lang"]['supplier'] = 'مورد';

$GLOBALS["lang"]['Supplier'] = 'مورد';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'الأنواع المدعومة <code>subnet</code>.. <code>seed</code> و <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'سورينام';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'جزر سافالبارد جان ماين';

$GLOBALS["lang"]['Swaziland'] = 'سوازيلند';

$GLOBALS["lang"]['Sweden'] = 'السويد';

$GLOBALS["lang"]['switch_device_id'] = 'هوية جهاز التبديل';

$GLOBALS["lang"]['Switch Device ID'] = 'هوية جهاز التبديل';

$GLOBALS["lang"]['switch_port'] = 'بوابة التبديل';

$GLOBALS["lang"]['Switch Port'] = 'بوابة التبديل';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'سويسرا، الاتحاد السويسري';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'الجمهورية العربية السورية';

$GLOBALS["lang"]['sysContact'] = 'الرمز';

$GLOBALS["lang"]['SysContact'] = 'الرمز';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'الرمز';

$GLOBALS["lang"]['SysLocation'] = 'الرمز';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

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

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'TX Profile';

$GLOBALS["lang"]['table'] = 'الجدول';

$GLOBALS["lang"]['Table'] = 'الجدول';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'تاجز ';

$GLOBALS["lang"]['Taiwan'] = 'تايوان';

$GLOBALS["lang"]['Tajikistan'] = 'طاجيكستان';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'المهام';

$GLOBALS["lang"]['Task'] = 'المهام';

$GLOBALS["lang"]['tasks'] = 'المهام';

$GLOBALS["lang"]['Tasks'] = 'المهام';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'المستأجر';

$GLOBALS["lang"]['Tenant'] = 'المستأجر';

$GLOBALS["lang"]['ternary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Ternary'] = 'التعليم الثانوي';

$GLOBALS["lang"]['Test 1'] = 'الاختبار 1';

$GLOBALS["lang"]['Test 2'] = 'الاختبار 2';

$GLOBALS["lang"]['Test 3'] = 'الاختبار 3';

$GLOBALS["lang"]['test_minutes'] = 'دقائق الاختبار';

$GLOBALS["lang"]['Test Minutes'] = 'دقائق الاختبار';

$GLOBALS["lang"]['test_os'] = 'اختبار Os';

$GLOBALS["lang"]['Test Os'] = 'اختبار Os';

$GLOBALS["lang"]['test_subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['Test Subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['tests'] = 'الاختبارات';

$GLOBALS["lang"]['Tests'] = 'الاختبارات';

$GLOBALS["lang"]['Text'] = 'النص';

$GLOBALS["lang"]['Thailand'] = 'تايلند';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'مجال الدليل النشط لاسترجاع قائمة بالشبكات الفرعية';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'خادم الدليل الفعّال لاسترجاع قائمة من الشباك الفرعية';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'السحابة التي تملك هذا البند الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'المجموعة كانت تدير خط الأساس الروابط إلى <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'بطاقة الهوية من طاولة الأجهزة (سيظهر الاسم) للوحدة الوطنية في نهاية هذا الاتصال. الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'الهوية من سياسة المعايير المستوردة.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'بطاقة الهوية من طاولة المواقع (سيتم عرض الاسم) من هذه النهاية الروابط إلى <code>locations.id</code>. الموقع هو عادة <code>FROM</code> الموقع';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'بطاقة الهوية من طاولة المواقع (سيتم عرض الاسم) من هذه النهاية الروابط إلى <code>locations.id</code>. موقع B عادة هو <code>TO</code> الموقع';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'هوية الجهاز المرتبط به (إن وجد). الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'هوية الاكتشاف المرتبط به Linked to <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'هوية البند من النوع المرتبط به.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'هويّة هذا الأب أورغ Linked to <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'الهوية التي قدمها مقدم الطلب.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'الهوية إسترجعت من اكتشاف السحاب';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'عنوان شركة آي بي لهذا المجمع كان يتصل بالخادم';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP من الجهاز لبدء اكتشاف البذور مع.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP من واجهة خارجية.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP من الواجهة الداخلية.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'The ISP or Telco providing this link.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'The LDAP OU of this user (if LDAP is used).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'الموقع الذي يحتوي على هذه الشبكة الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'توقيت النغمة';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'وينبغي الإبلاغ عن هذه المجموعة ضدها. فارغ للجميع استخدمي النسبة المئوية للإشارة كبطاقة جامحة سيتم اختباره ضد المجموعة و العائلة و الاسم في هذا الترتيب';

$GLOBALS["lang"]['The Open-AudIT API'] = 'AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'السحابة ذات الصلة الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'The Open-Aud شفرة خادم تكنولوجيا المعلومات تم طردها في هذا الملف';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'The Open-Aud تم تطبيق شفرة خادم تكنولوجيا المعلومات ضمن هذه المهمة';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'المنظمة التي تملك هذا البند. الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'The Process Identifier of the running associated discovery.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU positon من قمة هذا الجهاز.';

$GLOBALS["lang"]['The SNMP community string.'] = 'سلسله المجتمع';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'The SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'The SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'مستوى الأمن';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'اسم الأمن SNMP ضد 3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'The SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'The SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL of the external system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL of your Open-AudIT سيرفر أن هذا المجمّع سيبلغ إلى (لا تعقّب)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'The URL the audit scripts should submit their result to.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'الاسم الكامل الفعلي لهذا المستخدم';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'خط الأساس المرتبط به. الروابط إلى <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'The associated discovery (if required). الروابط إلى <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'سمة الاختبار (من) <code>devices</code> الجدول).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'The attribute to test (must match an external field name from below).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'نص مراجعة الحسابات الذي يقوم على أساس تكييفك';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'الطريق الأساسي الذي نبحث عنه للمستعملين';

$GLOBALS["lang"]['The benchmark type.'] = 'النوع المرجعي';

$GLOBALS["lang"]['The building the rack is located in.'] = 'المبنى الذي يوجد فيه الرف';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'The calculated number of devices to be created externally.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'The calculated number of devices to be created in Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'المجمّعون الداخليون إستعملوا عندما يديرون اكتشافاً';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'اسم العمود من الطاولة الخارجية ينبغي أن يكون أحد الفئات أو البيئة أو الوضع أو النوع أو القائمة.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'تم اعدام القيادة على الجهاز المستهدف أو الخادم المفتوح تم اعدامه أثناء الاكتشاف';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'تشكيلة مجموعتكم يمكن أن تكون: <code>active/active</code>.. <code>active/passive</code>.. <code>N+1</code>.. <code>N+M</code>.. <code>N-to-1</code>.. <code>N-to-N</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'كلمة السر إذا كانت وثائق التفويض هي مفتاح SSH، وهذا هو كلمة السر المستخدمة لفتح المفتاح وهو اختياري.';

$GLOBALS["lang"]['The credentials username.'] = 'اسم مستخدم وثائق التفويض.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'الوضع الحالي لجهاز كشف السحاب';

$GLOBALS["lang"]['The current status of the discovery.'] = 'الوضع الحالي للإكتشاف';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'اللوحة التي ستظهر عن طريق التقصير لهذا المستخدم الروابط إلى <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'The database version and web version are inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'تاريخ انتهاء صلاحية الترخيص';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'ويتوقف الصانع عن العمل بالبرمجيات. يستعاض عنها عادة بنسخة جديدة. وقد تظل الصيانة متاحة.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'The date the software no longer receives updates and is effectively discontinued altogether. توقف الصيانة.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'تاريخ تغيير هذا البند أو إضافته (القراءة فقط). ملاحظة - هذا هو العصر من الخادم -';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'التاريخ/الوقت الذي أنشئت فيه هذه النتيجة.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'يوم الشهر الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل يوم).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'يوم الأسبوع الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل يوم).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'The default language assigned to any user created by this method.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'يجب أن يستجيب الجهاز لحفلة "نامب" قبل أن يُعتبر على الإنترنت';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'الجهاز في غرفة العمليات الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'الرابط المباشر للنص هو';

$GLOBALS["lang"]['The email address of the reciever'] = 'عنوان البريد الإلكتروني للمحقق';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'وخط الأساس المرتبط به كله هو هذا الناتج.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'هويّة الموقع المرجعية الخارجية عادة ما تكون مأهولة من قبل كلود';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'أول مرة إسترجعت فيها (أوديت) تفاصيل هذا الجهاز';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'الطابق الذي يوجد فيه الرف';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'الجدول الأجنبي المرجعي. ينبغي أن يكون واحداً من: الأجهزة أو المواقع أو الأجهزة أو الاستفسارات.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'الشكل المستخدم للناتج الذي سيرسل بالبريد الإلكتروني.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'العمود المؤهل تأهيلاً كاملاً الذي سيجمع عليه ملاحظة: عندما يكون النوع = حركة المرور، يمثل هذا السؤال الأحمر';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'طاولة مؤهلة بالكامل ويمكن توفير عدة مواد، تفصلها فاصلة (لا أماكن).';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'The group of devices on which the baseline was run against.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'The group that provides a list of devices for the integration. الروابط إلى <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'ساعة اليوم الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل ساعة).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'نسخة من الجهاز المترابط الروابط إلى <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'عمود تحديد الهوية في قاعدة البيانات (يقرأ فقط).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'نبرة الشدة';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'عنوان الشوط في طريقة (أوث)';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'اللغة التي تترجم واجهة الويب للمستعمل';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'آخر موعد وساعة أعدم هذا البند (اقرأ فقط).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'آخر مرة إسترجعت فيها (أوديت) تفاصيل هذا الجهاز';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'آخر مرة تم تنفيذ هذه المعايير';

$GLOBALS["lang"]['The last time this integration was run.'] = 'آخر مرة أجري فيها هذا الإدماج';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'The line number assigned by the provider to the line at this end of the connection.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'المكان الذي يوجد فيه الرف الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'عنوان المواقع';

$GLOBALS["lang"]['The locations area.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations city.'] = 'المدينة';

$GLOBALS["lang"]['The locations country.'] = 'المدينة';

$GLOBALS["lang"]['The locations district.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations latitude.'] = 'موقع العرض';

$GLOBALS["lang"]['The locations level.'] = 'مستوى المواقع';

$GLOBALS["lang"]['The locations longitude.'] = 'المواقع بعيدة المدى.';

$GLOBALS["lang"]['The locations phone.'] = 'الهاتف الموقعي.';

$GLOBALS["lang"]['The locations postcode.'] = 'المواقع البريدية.';

$GLOBALS["lang"]['The locations region.'] = 'منطقة المواقع';

$GLOBALS["lang"]['The locations room.'] = 'غرفة المواقع';

$GLOBALS["lang"]['The locations state.'] = 'المواقع تقول';

$GLOBALS["lang"]['The locations suburb.'] = 'ضواحي المواقع';

$GLOBALS["lang"]['The locations suite.'] = 'جناح المواقع';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'الحد الأقصى للوزن الجسماني (في KGs) هذا الرف يمكن أن يصمد.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'الحد الأقصى لوحدات مكافحة الإرهاب هذه';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'دقيقة الساعة التي ينبغي أن تنفذ فيها هذه المهمة (* لكل دقيقة).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'شهر السنة التي ينبغي أن تنفذ فيها هذه المهمة (* لكل شهر).';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'الاسم المعطى لهذا البند. من الناحية المثالية يجب أن يكون فريداً';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'The name given to this user (used to login). من الناحية المثالية يجب أن يكون فريداً';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'The name of the associated cloud (if required).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'The name of the software package, as reviewed by Open-AudIT. استخدمي النسبة المئوية للإشارة كبطاقة جامحة';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'اسم المستخدم الذي غير آخر مرة أو أضاف هذا البند (اقرأ فقط).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'اسم مقدم الطلب.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'The network in the format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'الشبكة الفرعية لتنفيذ الاكتشاف';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'عدد وحدات خفض الانبعاثات التي تشغل هذا الجهاز';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'عدد المواقع المرتبطة بها. الروابط إلى <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'عدد الشبكات المرتبطة بها. الروابط إلى <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'عدد الأجهزة المراجعة في هذه السحابة الروابط إلى <code>devices.cloud_id</code> و <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'عدد الأجهزة التي وجدها هذا الاكتشاف';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'عدد الأجهزة في المجموعة المرتبطة بها.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة في هذه السحابة مع حالة تشغيل. الروابط إلى <code>devices.cloud_id</code> و <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة في هذه السحابة مع حالة توقف الروابط إلى <code>devices.cloud_id</code> و <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'عدد الأجهزة في هذه السحابة الروابط إلى <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'وسيتم تنفيذ هذا المعيار المرجعي على عدد الأجهزة. مأخوذة من <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'عدد الأجهزة التي تحد من هذا الاكتشاف';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'عدد التراخيص المشتراة.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'عدد الثواني لمحاولة التواصل مع الرقم المستهدف';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'العمود الثانوي الاختياري. ملاحظة: عندما يكون النوع = حركة المرور، يمثل هذا السؤال الأصفر';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'العمود الثالث الاختياري. ملحوظة: عندما يكون من النوع = حركة المرور، هذا يمثل الاستعلام الأخضر';

$GLOBALS["lang"]['The orientation of this device.'] = 'توجه هذا الجهاز';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'كلمة السر الخاصة بالحساب';

$GLOBALS["lang"]['The password used to access the external system.'] = 'كلمة السر تستخدم للوصول إلى النظام الخارجي';

$GLOBALS["lang"]['The path to the file or directory.'] = 'الطريق إلى الملف أو الدليل';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'الطريق إلى الملف أو الدليل يجب أن تنتهي الأدلة بقطعة أثرية';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'العمق المادي للرف';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'الارتفاع الفيزيائي للرف';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'الوزن المادي للرف في الوقت الحاضر.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'الوزن المادي للرف عندما يكون فارغاً';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'البارود الفيزيائي للرف';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'البقعة (إن وجدت) التي تشكل جزءاً منها';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'الدائرة الكهربائية التي يربطها هذا الرف';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'قاعدة البيانات الرئيسية التي ترتكز عليها هذه الشبكة';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'The process identifier of this queue item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'The process that was used last to retrieve details about the tool';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'The query that provides a list of devices for the integration. الروابط إلى <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'رقم الأصول';

$GLOBALS["lang"]['The rack asset tag.'] = 'بطاقة الأصول';

$GLOBALS["lang"]['The rack bar code.'] = 'رمز الثكنة';

$GLOBALS["lang"]['The rack model.'] = 'نموذج الرف';

$GLOBALS["lang"]['The rack serial.'] = 'مسلسل الرف';

$GLOBALS["lang"]['The rack series.'] = 'سلسلة الرف';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'الرف هذا الجهاز موجود الروابط إلى <code>racks.id</code>.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'التأشيرات المنتظمة لدليلك Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'نتيجة القيادة';

$GLOBALS["lang"]['The room the rack is located in.'] = 'الغرفة التي يوجد بها الرف';

$GLOBALS["lang"]['The row the rack is located in.'] = 'الصف الذي يوجد فيه الرف';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'المفتاح السري الذي استخدمته مقترناً بمفتاح (إي دبليو إس) الخاص بك';

$GLOBALS["lang"]['The software end-of-life date.'] = 'موعد نهاية الحياة';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'تاريخ نهاية الخدمة';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'The specific database column from the specified database table.';

$GLOBALS["lang"]['The specific database table.'] = 'طاولة قاعدة البيانات المحددة';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'خيارات التوقيت القياسية عادة ما نستخدم - 4 (معتدلة) كما يوصى بهذا من أجل ربط محترم بالنطاق العريض أو الإنترنت.';

$GLOBALS["lang"]['The status of this integration'] = 'حالة هذا الإدماج';

$GLOBALS["lang"]['The status of this queued item.'] = 'حالة هذا البند المكشوف.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'الهدف من شركة آي بي هذه المراجع (إن وجدت).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'The template for the link to be generated per result line.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'النص المتعلق بقاع المخطط في خريطة خطية (فقط).';

$GLOBALS["lang"]['The text that is displayed.'] = 'النص الذي تم عرضه';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2001-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'The timestamp after which, this task should run. على سبيل المثال، القيام بمهمة بعد أول حزيران/يونيه 2017 في الساعة 10: <code>2017-06-01 09:59:00</code>. وينبغي أن تكون هذه القيمة صفراً (مثل، 09، وليس 9). العجز عن سداد هذه القيمة <code>2001-01-01 00:00:00</code> وهذا يعني التقصير، أن المهمة المقررة ستنفذ في وقت التنفيذ المقرر المقبل.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'مجموع ناتج وحدة مكافحة الإرهاب من خلال هذا المسار.';

$GLOBALS["lang"]['The type of device.'] = 'نوع الجهاز';

$GLOBALS["lang"]['The type of organisation.'] = 'نوع التنظيم';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'نوع الرف (الكمال، الطاقة، الشبكة، إلخ).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'نوع المهمة واحد من: خط الأساس، المرجع، الاكتشاف السحابي، الاكتشاف، التكامل، التقرير، الاستفسار.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'نوع الإدماج (يسمى عادة باسم النظام الخارجي).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'المُحدد الوحيد لهذا الخادم';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'حساب المستخدم يستخدمه هذا المجمع الروابط إلى <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'The username used to access the external system.';

$GLOBALS["lang"]['The users email address.'] = 'عنوان البريد الإلكتروني للمستعملين.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'ساعات العمل المعتادة في هذا الموقع';

$GLOBALS["lang"]['The value assigned to the item.'] = 'القيمة المخصصة للبند.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'القيمة المخزنة لهذا البند بالذات.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'The web directory on the host that Open-AudIT is installed (requires a tracking slash).';

$GLOBALS["lang"]['The widget at position '] = 'النسيج في الموقع ';

$GLOBALS["lang"]['The width of this device.'] = 'عرض هذا الجهاز';

$GLOBALS["lang"]['Then'] = 'ثم';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'هذه الصفة مخزنة كهدف من نوع (سو جون) وهي قائمة بجميع المجموعات وتتضمن اسم المجموعة إلى جانبها <code>c</code>.. <code>r</code>.. <code>u</code> و <code>d</code> التي تمثل الخلق والقراءة والتحديث والحذف. هذه هي الإجراءات التي يمكن للمستعمل أن يقوم بها على بنود من تلك المجموعة بالذات.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'ويمكن أن يكون ذلك إما فارشاً (مجال نصوص)، أو قائمة (قائمة بالقيم التي يمكن اختيارها) أو تاريخ.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'هذا المجمّع هويّة فريدة من نوعها';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'This description is auto-populated and should ideally be left as-is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'وتتطلب هذه السمة رخصة مهنية أو مؤسسة.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'وهذا هو العمود الرئيسي عموما، ما لم يتم تشكيله بطريقة أخرى. ملحوظة: عندما يكون من النوع = حركة المرور، يمثل هذا النص الثانوي.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'This item must match the value of the attribute selected or contains the ID of the query to be used.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'يجب أن يضاهي هذا البند قيمة السمة المختارة.';

$GLOBALS["lang"]['This license expires on'] = 'هذه الرخصة تنتهي';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'وينبغي تحديد هذا إما إلى 1 أو ارتفاع الرف.';

$GLOBALS["lang"]['This will auto-populate.'] = 'هذا سوف يقطن';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'هذا سوف يبطئ الاكتشاف';

$GLOBALS["lang"]['Thursday'] = 'الخميس';

$GLOBALS["lang"]['time'] = 'الوقت';

$GLOBALS["lang"]['Time'] = 'الوقت';

$GLOBALS["lang"]['time_caption'] = 'الوقت';

$GLOBALS["lang"]['Time Caption'] = 'الوقت';

$GLOBALS["lang"]['time_daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time Daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time to Execute'] = 'وقت التنفيذ';

$GLOBALS["lang"]['timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'الهدف (الثانيات)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'التوقيت';

$GLOBALS["lang"]['Timing'] = 'التوقيت';

$GLOBALS["lang"]['Timor-Leste'] = 'تيمور - ليشتي';

$GLOBALS["lang"]['Title'] = 'العنوان';

$GLOBALS["lang"]['Togo'] = 'توغو';

$GLOBALS["lang"]['Tokelau'] = 'توكيلاو';

$GLOBALS["lang"]['Tonga'] = 'تونغا';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'أفضل مرافئ TCP';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'مرافئ المشردين داخليا';

$GLOBALS["lang"]['Traditional Chinese'] = 'الصينية التقليدية';

$GLOBALS["lang"]['Traffic Light'] = 'الضوء';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'ترينيداد وتوباغو';

$GLOBALS["lang"]['Tuesday'] = 'الثلاثاء';

$GLOBALS["lang"]['Tunisia'] = 'تونس';

$GLOBALS["lang"]['Turkey'] = 'تركيا';

$GLOBALS["lang"]['Turkmenistan'] = 'تركمانستان';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'جزر تركس وكايكوس';

$GLOBALS["lang"]['Tuvalu'] = 'توفالو';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'المستوى';

$GLOBALS["lang"]['Tx Level'] = 'المستوى';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profile';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profile';

$GLOBALS["lang"]['type'] = 'النوع';

$GLOBALS["lang"]['Type'] = 'النوع';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Udp Ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Uganda'] = 'أوغندا';

$GLOBALS["lang"]['uid'] = 'Uid';

$GLOBALS["lang"]['Uid'] = 'Uid';

$GLOBALS["lang"]['Ukraine'] = 'أوكرانيا';

$GLOBALS["lang"]['uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall the Agent'] = 'حرر العميل';

$GLOBALS["lang"]['United Arab Emirates'] = 'الإمارات العربية المتحدة';

$GLOBALS["lang"]['United Kingdom'] = 'المملكة المتحدة';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'United States Minor Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'جزر فرجن التابعة للولايات المتحدة';

$GLOBALS["lang"]['United States of America'] = 'الولايات المتحدة الأمريكية';

$GLOBALS["lang"]['Unknown'] = 'غير معروف';

$GLOBALS["lang"]['unlock_pin'] = 'Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Pin';

$GLOBALS["lang"]['Unscheduled'] = 'غير مقررة';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'غير مستخدم في 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'غير مستعمل';

$GLOBALS["lang"]['Update'] = 'آخر';

$GLOBALS["lang"]['update_external_count'] = 'Update External count';

$GLOBALS["lang"]['Update External Count'] = 'Update External count';

$GLOBALS["lang"]['update_external_from_internal'] = 'Update External From Internal';

$GLOBALS["lang"]['Update External From Internal'] = 'Update External From Internal';

$GLOBALS["lang"]['update_internal_count'] = 'Update Internal count';

$GLOBALS["lang"]['Update Internal Count'] = 'Update Internal count';

$GLOBALS["lang"]['update_internal_from_external'] = 'Update Internal from External';

$GLOBALS["lang"]['Update Internal From External'] = 'Update Internal from External';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Update NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Update Open-AudIT الأجهزة من ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Update Open-AudIT أجهزة من نظام المعلومات الإدارية الوطني';

$GLOBALS["lang"]['updated_at'] = 'Updated At';

$GLOBALS["lang"]['Updated At'] = 'Updated At';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'وقد تم تحديث كل مرة تم فيها تنفيذ الاكتشافات مع اكتشاف أن شركاء التنفيذ يستجيبون لها.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'تمّ تحديث كلّ مرة تمّ إعدام الاكتشاف مع شركاء التنفيذ الذين تمّ مسحهم بواسطة (نامب).';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'تم تحديث كل مرة تم اكتشافها باستخدام أجهزة تمكنا من مراجعة الحسابات';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'تم تحديث كل مرة تم اكتشافها بواسطة أجهزة تمكنا من الاستفسار';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'تم تحديث كل مرة تم إعدام الاكتشاف';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'تحديث كل مرة يتم فيها إعدام الاكتشاف';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'استكمل كل مرة استكمل فيها الاكتشاف تنفيذ الحكم';

$GLOBALS["lang"]['Upgrade'] = 'أعلى';

$GLOBALS["lang"]['Upload an audit result file'] = 'تحميل ملف نتائج مراجعة الحسابات';

$GLOBALS["lang"]['Upper Case'] = 'القضية العليا';

$GLOBALS["lang"]['uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['Uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'أوروغواي، الجمهورية الشرقية';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use_authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['use_authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use Authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'ضمان الاستخدام';

$GLOBALS["lang"]['Use Service Version Detection'] = 'دائرة الاستخدام';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use for Roles'] = 'استخدام الأدوار';

$GLOBALS["lang"]['used'] = 'مستخدم';

$GLOBALS["lang"]['Used'] = 'مستخدم';

$GLOBALS["lang"]['used_count'] = 'الكونت المستخدم';

$GLOBALS["lang"]['Used Count'] = 'الكونت المستخدم';

$GLOBALS["lang"]['used_percent'] = 'النسبة المئوية المستعملة';

$GLOBALS["lang"]['Used Percent'] = 'النسبة المئوية المستعملة';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'استخدمه برنامج "أبندب" فقط';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'استخدم داخلياً عند اكتشاف جهاز واحد';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'استخدم داخلياً عند اكتشاف جهاز واحد الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'مستخدمة عندما تم تشكيل خواديم برنامج المساعدة الإنمائية لتجميع تفاصيل المستخدمين - ويشمل ذلك الأورق التي يمكنهم الوصول إليها. إذا كان مستعملاً في هذه المجموعة، يُعينون هذه المجموعة.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'تستخدم عندما يتم تشكيل خواديم برنامج المساعدة الإنمائية لتجميع تفاصيل المستخدمين - ويشمل ذلك الأدوار التي كلفوا بها. If a user is in this LDAP group, they are assigned this role.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'استعملت عند البحث في برنامج &quot; أوفلدباك &quot; لمضاهاة مستخدمين يستعملون لجماعات أعضاء. التقصير <code>memberUid</code>. استخدمه برنامج "أبندب" فقط';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'مستخدمة في تطبيقات الرصد الخاصة بالتكامل والشبكة الأولى.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'مستخدمة في تطبيقات الرصد الخاصة بالتكامل والشبكة الأولى. إستعدْ إليك إذا عمل إس إن بي إم إكتشفَ بالإكتشافِ.';

$GLOBALS["lang"]['user'] = 'مستخدم';

$GLOBALS["lang"]['User'] = 'مستخدم';

$GLOBALS["lang"]['User DN'] = 'مستخدم DN';

$GLOBALS["lang"]['user_group'] = 'فريق المستعملين';

$GLOBALS["lang"]['User Group'] = 'فريق المستعملين';

$GLOBALS["lang"]['user_id'] = 'هوية المستخدم';

$GLOBALS["lang"]['User ID'] = 'هوية المستخدم';

$GLOBALS["lang"]['User Membership Attribute'] = 'العضوية';

$GLOBALS["lang"]['user_name'] = 'اسم المستخدم';

$GLOBALS["lang"]['User Name'] = 'اسم المستخدم';

$GLOBALS["lang"]['User Policies'] = 'سياسات المستعملين';

$GLOBALS["lang"]['username'] = 'المستعمل';

$GLOBALS["lang"]['Username'] = 'المستعمل';

$GLOBALS["lang"]['users'] = 'المستخدمون';

$GLOBALS["lang"]['Users'] = 'المستخدمون';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'عادة Mb/s، من الموقع A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'عادة Mb/s، من الموقع B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'عادة Mb/s، إلى الموقع ألف.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'عادة Mb/s، إلى الموقع B.';

$GLOBALS["lang"]['Uzbekistan'] = 'أوزبكستان';

$GLOBALS["lang"]['valid_from'] = 'Valid from';

$GLOBALS["lang"]['Valid From'] = 'Valid from';

$GLOBALS["lang"]['valid_from_raw'] = 'Valid from Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Valid from Raw';

$GLOBALS["lang"]['valid_to'] = 'Valid To';

$GLOBALS["lang"]['Valid To'] = 'Valid To';

$GLOBALS["lang"]['valid_to_raw'] = 'Valid to Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valid to Raw';

$GLOBALS["lang"]['Valid Values'] = 'Valid Values';

$GLOBALS["lang"]['value'] = 'القيمة';

$GLOBALS["lang"]['Value'] = 'القيمة';

$GLOBALS["lang"]['values'] = 'القيمة';

$GLOBALS["lang"]['Values'] = 'القيمة';

$GLOBALS["lang"]['Vanuatu'] = 'فانواتو';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'الفرق';

$GLOBALS["lang"]['Variable'] = 'الفرق';

$GLOBALS["lang"]['vendor'] = 'البائع';

$GLOBALS["lang"]['Vendor'] = 'البائع';

$GLOBALS["lang"]['Venezuela'] = 'فنزويلا';

$GLOBALS["lang"]['version'] = 'Version';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'الشكل';

$GLOBALS["lang"]['Version Padded'] = 'الشكل';

$GLOBALS["lang"]['version_string'] = 'الشكل';

$GLOBALS["lang"]['Version String'] = 'الشكل';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'View';

$GLOBALS["lang"]['View All'] = 'مشاهدة جميع';

$GLOBALS["lang"]['View Details'] = 'التفاصيل';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['Virtual Private Network'] = 'الشبكة الخاصة الافتراضية';

$GLOBALS["lang"]['Virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'زيارة قناة اليوتيوب للفيديو التعليمي';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Device ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Device ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Name';

$GLOBALS["lang"]['WHERE'] = 'أين';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis and Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'هل تريد معرفة المزيد؟';

$GLOBALS["lang"]['Warning'] = 'تحذير';

$GLOBALS["lang"]['warranty'] = 'Warranty';

$GLOBALS["lang"]['Warranty'] = 'Warranty';

$GLOBALS["lang"]['warranty_duration'] = 'مدة الحرب';

$GLOBALS["lang"]['Warranty Duration'] = 'مدة الحرب';

$GLOBALS["lang"]['warranty_expires'] = 'مغامرات الحرب';

$GLOBALS["lang"]['Warranty Expires'] = 'مغامرات الحرب';

$GLOBALS["lang"]['warranty_status'] = 'الوضع الإداري';

$GLOBALS["lang"]['Warranty Status'] = 'الوضع الإداري';

$GLOBALS["lang"]['warranty_type'] = 'نوع الحرب';

$GLOBALS["lang"]['Warranty Type'] = 'نوع الحرب';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Wednesday'] = 'الأربعاء';

$GLOBALS["lang"]['weight'] = 'الوزن';

$GLOBALS["lang"]['Weight'] = 'الوزن';

$GLOBALS["lang"]['weight_current'] = 'الوزن الحالي';

$GLOBALS["lang"]['Weight Current'] = 'الوزن الحالي';

$GLOBALS["lang"]['weight_empty'] = 'الوزن فارغ';

$GLOBALS["lang"]['Weight Empty'] = 'الوزن فارغ';

$GLOBALS["lang"]['weight_max'] = 'Weight Max';

$GLOBALS["lang"]['Weight Max'] = 'Weight Max';

$GLOBALS["lang"]['Welcome'] = 'مرحباً';

$GLOBALS["lang"]['Welcome Dashboard'] = 'مرحباً بكم';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'مرحبا بكم في أول واف مفتوح';

$GLOBALS["lang"]['Western Sahara'] = 'الصحراء الغربية';

$GLOBALS["lang"]['what'] = 'ماذا؟';

$GLOBALS["lang"]['What'] = 'ماذا؟';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'ما هو الغرض من هذا الرف.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'ما هو نوع هذا الموقع الأنواع المسموح بها <code>attributes</code> طاولة';

$GLOBALS["lang"]['when'] = 'عندما';

$GLOBALS["lang"]['When'] = 'عندما';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'عندما ندمج الأجهزة من النظام الخارجي، إذا لم يكن الجهاز موجوداً في نظام مفتوح هل يجب أن نصنعه؟';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'عند دمج الأجهزة من النظام الخارجي، إذا كان الجهاز قد تم تحديثه في النظام الخارجي هل ينبغي لنا أن نستكمله في النظام المفتوح باب العضوية؟';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'عندما نسترجع جهازاً خارجياً هل يجب أن نكتشفه؟';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'عندما يكون من المقرر تنفيذ هذا المعيار. مستمدة من <code>tasks.type</code> و <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'عندما تم إنشاء هذا السجل';

$GLOBALS["lang"]['When this queue item started processing.'] = 'عندما بدأ هذا البند في التجهيز';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'عندما ننفذ خط الأساس هذا، يجب أن نتحقق من المواد على الأجهزة التي ليست في سياسة لهذا الخط الأساسي.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'عندما نتلقى ميناء مفتوح، هل ينبغي لنا أن نحاول اختبار لنسخة من الخدمة التي يجري عليها حاليا؟ وهذا يساعد على تأكيد الخدمات الجارية الفعلية.';

$GLOBALS["lang"]['where'] = 'أين';

$GLOBALS["lang"]['Where'] = 'أين';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'حيث على شاشة التفاصيل الشيطانية كنت ترغب في رؤية هذا الحقل يظهر.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'حيث الرف في الصف';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'ما ينطبق على هذا المعيار';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'ما هي الأجهزة التي ينبغي أن تُنشأ من النظام الخارجي (إن وجدت). باستخدام الجميع، لا شيء أو سمة معينة.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'والذي يجب أن نعرض هذا السؤال';

$GLOBALS["lang"]['Who made this rack.'] = 'الذي صنع هذا الرف';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'لماذا نستبعد هذه السياسة؟';

$GLOBALS["lang"]['Wide Area Network'] = 'شبكة المناطق الواسعة';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'أرملة ';

$GLOBALS["lang"]['Widget Type'] = 'النوع';

$GLOBALS["lang"]['widgets'] = 'الأرامل';

$GLOBALS["lang"]['Widgets'] = 'الأرامل';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'النوافذ';

$GLOBALS["lang"]['Windows'] = 'النوافذ';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'شبكة المناطق المحلية اللاسلكية';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Working Credentials'] = 'وثائق التفويض العاملة';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Yellow Query';

$GLOBALS["lang"]['Yemen'] = 'اليمن';

$GLOBALS["lang"]['Yes'] = 'نعم';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'ربما تريد أن تنسخ وترعى هذا URL في البريد الإلكتروني لموظفيك.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'يجب أن تحذف رخصتك الحالية قبل إضافة رخصة جديدة';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'مفتاح الـ "أي دبليو إس" الخاص بك';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'أوراق إعتماد "جوجل" الخاصة بك كـ "جيون"';

$GLOBALS["lang"]['Your Licenses'] = 'رخصتك';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'هويتك (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'سرك الخاص (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'هويّة اشتراكك في ميكروسوفت أزور';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'هويتك المصغرة Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQL الخاص بك لاختيار سمات التي سوف تبرز هذا الاستفسار.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'جهاز التحكم الخاص بك لاختيار الأجهزة التي سوف تنفجر هذه المجموعة.';

$GLOBALS["lang"]['Your SSH key.'] = 'مفتاح SSH الخاص بك.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'أوراق دخولك، وفقاً لتلك السحابات';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'وصفك لحالة هذه الصلة (المنقحة والمتقاعدة وما إلى ذلك).';

$GLOBALS["lang"]['Your description of this item.'] = 'وصفك لهذا البند';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'اسمك العام لهذه القطعة من البرامج';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'نسختك العامة لهذه البرمجيات';

$GLOBALS["lang"]['Zambia'] = 'زامبيا';

$GLOBALS["lang"]['Zimbabwe'] = 'زمبابوي';

$GLOBALS["lang"]['active'] = 'نشطة';

$GLOBALS["lang"]['active directory'] = 'دليل نشط';

$GLOBALS["lang"]['active/active'] = 'نشطة/فعلية';

$GLOBALS["lang"]['active/passive'] = 'النشاط/التعدي';

$GLOBALS["lang"]['ad hoc'] = 'مخصص';

$GLOBALS["lang"]['alert'] = 'إنذار';

$GLOBALS["lang"]['all'] = 'كل شيء';

$GLOBALS["lang"]['allocated'] = 'مخصصة';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['antivirus'] = 'مضادات الفيروسات';

$GLOBALS["lang"]['application'] = 'التطبيق';

$GLOBALS["lang"]['approved'] = 'تمت الموافقة عليها';

$GLOBALS["lang"]['attribute'] = 'الإسناد';

$GLOBALS["lang"]['auto'] = 'السيارات';

$GLOBALS["lang"]['backup'] = 'الدعم';

$GLOBALS["lang"]['banned'] = 'محظور';

$GLOBALS["lang"]['bottom'] = 'أسفل';

$GLOBALS["lang"]['building'] = 'المبنى';

$GLOBALS["lang"]['cloud'] = 'سحابة';

$GLOBALS["lang"]['collector'] = 'جامع';

$GLOBALS["lang"]['compute'] = 'الحساب';

$GLOBALS["lang"]['contains'] = 'يحتوي على';

$GLOBALS["lang"]['create'] = 'الخلق';

$GLOBALS["lang"]['created'] = 'أنشئت';

$GLOBALS["lang"]['critical'] = 'حاسمة';

$GLOBALS["lang"]['database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['defined process'] = 'العملية المحددة';

$GLOBALS["lang"]['delegated'] = 'مندوب';

$GLOBALS["lang"]['delete'] = 'حذف';

$GLOBALS["lang"]['deleted'] = 'حذفت';

$GLOBALS["lang"]['denied'] = 'مرفوضة';

$GLOBALS["lang"]['devices'] = 'أجهزة';

$GLOBALS["lang"]['digitalocean'] = 'التكنولوجيا الرقمية';

$GLOBALS["lang"]['does not equal'] = 'لا تساوي';

$GLOBALS["lang"]['emergency'] = 'الطوارئ';

$GLOBALS["lang"]['entra'] = 'داخل';

$GLOBALS["lang"]['equals'] = 'متساوية';

$GLOBALS["lang"]['error'] = 'الخطأ';

$GLOBALS["lang"]['excluded'] = 'مستبعدة';

$GLOBALS["lang"]['expired'] = 'انتهت صلاحيتها';

$GLOBALS["lang"]['fail'] = 'فشل';

$GLOBALS["lang"]['false'] = 'كاذب';

$GLOBALS["lang"]['firewall'] = 'الجدار الناري';

$GLOBALS["lang"]['fixed'] = 'ثابتة';

$GLOBALS["lang"]['floor'] = 'الطابق الأرضي';

$GLOBALS["lang"]['front'] = 'مقدمة';

$GLOBALS["lang"]['front-left'] = 'مقدمة';

$GLOBALS["lang"]['front-right'] = 'الجبهة اليمنى';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'أكبر أو مساوية';

$GLOBALS["lang"]['greater than'] = 'أكبر من';

$GLOBALS["lang"]['group'] = 'المجموعة';

$GLOBALS["lang"]['head'] = 'الرأس';

$GLOBALS["lang"]['here'] = 'هنا';

$GLOBALS["lang"]['high availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['ignored'] = 'تجاهل';

$GLOBALS["lang"]['in'] = 'في';

$GLOBALS["lang"]['inactive'] = 'الخاملة';

$GLOBALS["lang"]['info'] = 'المعلومات';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'المقطع والنص والفول (y/n) وما إلى ذلك';

$GLOBALS["lang"]['is licensed to'] = 'مرخص له';

$GLOBALS["lang"]['left'] = 'يسار';

$GLOBALS["lang"]['less or equals'] = 'أقل أو مساوية';

$GLOBALS["lang"]['less than'] = 'أقل من';

$GLOBALS["lang"]['license'] = 'الترخيص';

$GLOBALS["lang"]['like'] = 'مثل';

$GLOBALS["lang"]['line'] = 'السطر';

$GLOBALS["lang"]['load balancing'] = 'الموازنة';

$GLOBALS["lang"]['location'] = 'الموقع';

$GLOBALS["lang"]['managed and measurable'] = 'إدارة وقابلة للقياس';

$GLOBALS["lang"]['microsoft'] = 'Microsoft';

$GLOBALS["lang"]['mount point'] = 'النقطة';

$GLOBALS["lang"]['network'] = 'الشبكة';

$GLOBALS["lang"]['no'] = 'لا';

$GLOBALS["lang"]['node'] = 'العقد';

$GLOBALS["lang"]['non-existent'] = 'غير موجود';

$GLOBALS["lang"]['none'] = 'لا شيء';

$GLOBALS["lang"]['normal'] = 'طبيعي';

$GLOBALS["lang"]['not applicable'] = 'لا ينطبق';

$GLOBALS["lang"]['not in'] = 'لا';

$GLOBALS["lang"]['not like'] = 'ليس مثل';

$GLOBALS["lang"]['notice'] = 'الإشعار';

$GLOBALS["lang"]['okta'] = 'حسنا';

$GLOBALS["lang"]['openldap'] = 'مفتوحة';

$GLOBALS["lang"]['optimized'] = 'الاستخدام الأمثل';

$GLOBALS["lang"]['optionally '] = 'اختياريا ';

$GLOBALS["lang"]['other'] = 'أخرى';

$GLOBALS["lang"]['partition'] = 'التجزئة';

$GLOBALS["lang"]['pass'] = 'المرور';

$GLOBALS["lang"]['pending'] = 'معلقة';

$GLOBALS["lang"]['performance'] = 'الأداء';

$GLOBALS["lang"]['pie'] = 'فطيرة';

$GLOBALS["lang"]['planning'] = 'التخطيط';

$GLOBALS["lang"]['query'] = 'الاستفسار';

$GLOBALS["lang"]['rear'] = 'rear';

$GLOBALS["lang"]['rear-left'] = 'العمود الخلفي';

$GLOBALS["lang"]['rear-right'] = 'الحق الخلفي';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['repeatable but intuitive'] = 'قابلة للتكرار ولكنها غير ملائمة';

$GLOBALS["lang"]['reserved'] = 'محجوزة';

$GLOBALS["lang"]['right'] = 'الحق';

$GLOBALS["lang"]['room'] = 'الغرفة';

$GLOBALS["lang"]['row'] = 'الصف';

$GLOBALS["lang"]['stand-alone'] = 'قائمة بذاتها';

$GLOBALS["lang"]['standard'] = 'المعيار';

$GLOBALS["lang"]['starts with'] = 'يبدأ مع';

$GLOBALS["lang"]['storage'] = 'التخزين';

$GLOBALS["lang"]['timestamp'] = 'الزمان';

$GLOBALS["lang"]['top'] = 'أعلى';

$GLOBALS["lang"]['traffic'] = 'حركة المرور';

$GLOBALS["lang"]['true'] = 'صحيح';

$GLOBALS["lang"]['unallocated'] = 'غير محمية';

$GLOBALS["lang"]['unauthorised'] = 'غير مأذون به';

$GLOBALS["lang"]['unknown'] = 'مجهول';

$GLOBALS["lang"]['unmanaged'] = 'غير محكومة';

$GLOBALS["lang"]['unused'] = 'غير مستخدم';

$GLOBALS["lang"]['update'] = 'آخر المستجدات';

$GLOBALS["lang"]['valid'] = 'صحيح';

$GLOBALS["lang"]['virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['warning'] = 'تحذير';

$GLOBALS["lang"]['web'] = 'شبكة الإنترنت';

$GLOBALS["lang"]['yes'] = 'نعم';

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
