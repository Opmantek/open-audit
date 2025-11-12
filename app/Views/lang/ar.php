<?php
$GLOBALS["lang"][' Default, currently '] = ' التقصير، حاليا ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' إذا لم يعمل شيء كما هو متوقع، أول شيء لديك للقيام به هو التحقق من السجلات.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' يُدعم الآن بملف للغة. لتغيير مستعملك لاستخدام هذه اللغة ';

$GLOBALS["lang"][' seconds'] = ' ثواني';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = 'ولكن لن يكون من الضروري أن نتذكر مجموعة منفصلة من وثائق تفويض الدخول.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'والذي نوفر منه أكثر من ثلاثين كمجموعة من الفشل لا يمكن للمستعملين المهنيين تغيير هذه، ولكن لدى مستعمل المؤسسة قدرات كاملة على التكييف - بما في ذلك خلق قدراتك الخاصة.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'أنت <i>يجب أن يجب</i> استخدموا الموقع على خادمكم المفتوح لإستعمال مدخل (أوث) الرجاء تحديد أباتشي لاستخدامها <strong>https</strong> قبل تشكيل مدخل للوراء.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. ولتمكين ذلك، تحرير بند التشكيلة ';

$GLOBALS["lang"]['10 Minutes'] = '10 دقائق';

$GLOBALS["lang"]['15 Minutes'] = '15 دقيقة';

$GLOBALS["lang"]['30 Minutes'] = '30 دقيقة';

$GLOBALS["lang"]['5 Minutes'] = '5 دقائق';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 من الضوابط المصنفة في الفئات التنظيمية والبشرية والجسدية والتكنولوجية';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>ملاحظة</strong> - أنت تَصِلُ إلى هذا URL مِنْ خادمِ مفتوحِ المحليِ. النص المُحمّل لن يكون قادراً على التقديم عند تشغيل أي آلة أخرى إذا كنت بحاجة إلى مراجعة الآلات الأخرى، يرجى تحميل السيناريو من أي آلة نائية، وليس استخدام بروزر على الخادم المفتوح باب العضوية.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ملاحظة</strong> -لا بدّ أنّ لديكِ أوراق اعتماد (إتش إس إيه) أو (إس إس إتش) الرئيسيّة لتنفيذ المعايير على جهاز مستهدف</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>خط الأساس</strong> - الوثيقة الشاملة التي تتضمن تعريف خط الأساس واختبارات السياسات الفردية.<br/> <br/> <strong>السياسات</strong> - الاختبارات الفردية الواردة في خط الأساس. كل اختبار يتعلق ببند محدد ومن الأمثلة على ذلك اختبار النسخة 1-2-3 من الوثيقة SSH.<br/> <br/> <strong>التفاصيل</strong> - يمكن لخطوط الأساس أن تقارن موانئ ومستعملي وبرمجيات صافية.<br/> <br/> <strong>البرمجيات</strong> -لمقارنة البرمجيات التي نتحقق منها لأن أرقام النسخ غير موحّدة في الشكل، عندما نتلقى نتيجة مراجعة الحسابات، ننشئ قاعدة جديدة تسمى البرمجيات التي نخزنها في قاعدة البيانات إلى جانب بقية تفاصيل البرامجيات لكل طرد. ولهذا السبب، فإن خطوط الأساس التي تستخدم سياسات البرمجيات لن تعمل عند تشغيلها ضد جهاز لم يراجع حساباته بحلول 1-10 (على الأقل). سياسات البرمجيات يمكن أن تختبر ضد النسخة التي تكون "عادل" أو "أكثر من" أو "عادل أو أكثر"<br/> <br/> <strong>Netstat Ports</strong> - شركة (نايتست بورتز) تستخدم مجموعة من رقم الميناء، بروتوكول وبرنامج إذا كان الجميع حاضرين فإن السياسة تمر<br/> <br/> <strong>المستخدمون</strong> -المستعملون يعملون مثل ميناء (نيتست) If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>الموقع هو عنوان مادي يمكن أن يكون له أجهزة مرتبطة به.<br/> <br/>يمكنك تعيينه إحداثيات (الطول) وإذا كانت هناك أجهزة مُعينة، سيظهر الموقع على خريطة شركة "إف بي أوديت"<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>وتستمد الشبكة من نقاط الاكتشاف وخصائص الأجهزة.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>وسيعرض موجز قائمة بالبنود، مجمّعة بالقيم المتميزة للمعزوّد بها <code>table</code> و <code>column</code> سمات<br/> <br/>وعند تنفيذ موجز، ستكون النتيجة قائمة بالقيم المتميزة لذلك <code>table</code> و <code>column</code>. ستكون هناك روابط على القيم التي تسمح للمستعمل برؤية أجهزة المطابقة<br/> <br/>إذا كانت سمة <code>extra_columns</code> وتحتوي الصفحة الناتجة عن ذلك على هذه الأعمدة بالإضافة إلى أعمدة الأجهزة القياسية.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>العملاء سمحوا لك بمراجعة حسابات الشركات بدون اكتشاف تركيب الوكيل وسيتفقد الخادم كل يوم ويراجع نفسه لا يهم إذا كانت أجهزة الكمبيوتر الخاصة بك تم إشعالها، بيانات مراجعة الحسابات لا تزال تظهر في قاعدة البيانات المفتوحة.</p><p>عند الاختبار <strong>إذا</strong> وينبغي لوكيل أن يقوم بأعمال، ويجب أن تمر جميع الاختبارات الثلاثة (إذا تم تحديد الاختبار). <strong>ثم</strong> تتخذ الإجراءات.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>تُعرّفُ الطلباتَ مِن قِبلك، المُستعمل والمُخزّن لـ (إفتتاح) لاستخدام الأجهزة والارتباط بها.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>وتُخزَّن المواصفات لكي تستخدم في حقول معينة.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>والتمكن من تحديد أي آلات يتم تشكيلها هو جزء رئيسي من إدارة النظم ومراجعة الحسابات - وسيصبح الإبلاغ عن ذلك الآن بسيطا وآلية. بمجرد أن تحدد خط الأساس الخاص بك هو تلقائيا تشغيل ضد مجموعة من الأجهزة على جدول محدد مسبقا. وسيكون ناتج خطوط الأساس هذه المنفذة متاحاً للاستطلاع على شبكة الإنترنت، أو للاستيراد إلى نظام طرف ثالث أو حتى كتقرير مطبوع.<br/> <br/> ويمكنك خطوط الأساس من الجمع بين بيانات مراجعة الحسابات ومجموعة من الخصائص التي سبق أن حددتموها (خط الأساس) لتحديد مدى امتثال الأجهزة.<br/> <br/> على سبيل المثال، قد تخلق خط أساس من جهاز تشغيل Centos 6 الذي يعمل كأحد خواديمك في مجموعة. أنت تعرف أن هذا الخادم الخاص مصمم بالطريقة التي تريدها لكنك غير متأكد إذا كانت الخواديم الأخرى في المجموعة مصممة تماماً القاعدة تمكنك من تحديد هذا<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>وتُخزَّن المجموعات في نظام &quot; مفتوح العضوية &quot; من أجل الأجهزة الشريكة من أجل تحسين تسجيل وإدارة وتقدير تكاليف الترخيص.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>المكونات عبارة عامة تستخدم للجداول التي تخزن الخواص للجهاز وهذه الجداول هي: الوصول إلى النقاط، والارتفاع، والبيولوجيا، والشهادة، والخزانات، والملف، والرق، والرخصة، والسجل، والذاكرة، والنمط، والشاشة، والشبكة، والشبكة، والصورة، والصفحة، والتقسيم، والسياسة العامة، والمتغيرات المطبوعة، والمجهزة، والراديو، والشعار، والخادم، والخدمة، والبرمجيات</p><p> وبالإضافة إلى ذلك، نصنف الجداول التالية أيضا على أنها ذات صلة بالجهاز: التطبيق، الملحق، المجموعة، الابتكار، الصورة.</p>';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft وتعاني نظم الحواسيب المكتبية للنوافذ من قيود على الشبكات قد تؤثر على أداء نظام &quot; أوديت &quot; . The TCP/IP stack limits the number of concur incomplete outbound TCP connection attempts. وبعد بلوغ هذا الحد، توضع محاولات الاتصال اللاحقة في طابور، وستحل بمعدل ثابت (10 في الثانية). إذا دخل كثيرون جداً إلى السكة، يمكن إسقاطهم. وأخيراً، (أباتشي) سيُعيد تشغيله بواسطة الـ(أو إس) ولهذا السبب، لا يُدعم تركيب نظام التشغيل المكتبي في ويندوز.<br/><br/>لا يوجد شيء خاطئ في قانون فتح الباب، ولا يمكننا أن نفعل أي شيء لمعالجة هذه المسألة على آلات عملاء ويندوز.</p>';

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
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>الأدوار في الاجتماعات المفتوحة إنها بند رئيسي المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها ويجمع المستخدم بين هذا وبين قائمة بالأدوار المسندة التي تحدد الإجراءات التي يمكن أن تتخذها بشأن المواد المخصصة للأوغاد التي تتاح لهم الوصول إليها. مزيج من مستعملين "أوغس" و"أحجار" يحدد ما يمكن ولا يمكن أن يفعلوه في "إفتتاح"<br/> <br/>إحصل على تجربة شركة (أود) المفتوحة إن إنشاء الأدوار يتيح السيطرة الدقيقة على ما يمكن لمستعمليكم القيام به في إطار المبادرة المفتوحة.<br/> <br/>وتستند الطريقة الرئيسية للترخيص (ما يمكن للمستعمل أن يفعله) إلى دور المستعملين. وتُعرَّف الأدوار الافتراضية بأنها &quot; org admin &quot; والمراسل والمستعمل. ولكل دور مجموعة من التصاريح (الاختبار، القراءة، التحديث، حذف) لكل نقطة نهاية. وتتاح القدرة على تحديد أدوار إضافية وتحرير الأدوار القائمة في المؤسسة المفتوحة للاستثمار.<br/> <br/>ويمكن أيضاً استخدام الأدوار بإذن من برنامج العمل من أجل التنمية في أفريقيا (دليل إيجابي ودليل مفتوح). وللمنشآت المرخصة لدى المؤسسة القدرة على تكييف مجموعة برامج العمل الطويلة الأجل لكل دور محدد.<br/> <br/></p>';

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

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>نحن في البداية وضعنا القائمة الافتراضية للنصوص مع خيارات التقصير ولا يمكن حذف هذه النصوص الافتراضية. يمكنك صنع نصوص إضافية لتستخدمها من قبلك حسب الاقتضاء السيناريو الخاص بك سيكون مستندا على واحد من النصوص الحالية ولديه خيارات العرف المطبقة. يمكن بعد ذلك تحميل النصوص من صفحة القائمة في القائمة الكشف مراجعة الحسابات بنود مراجعة الحسابات<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>عندما يستعمل (ريجكس) للتطابق يمكن العثور على صفحة مفيدة <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. بعض الاختلافات في بيرل ريجكس <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">هنا</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>الأرامل يمكن أن يخلقوا بسهولة لإظهار ما هو محدد لبيئتكم على لوحاتكم<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>مع فتح الباب المحترفين والشركة يمكنك التأقلم وبرمجة الاكتشافات أو إعداد التقارير أو فحص خط الأساس للركض عندما تريد وفي كثير من الأحيان كما تحتاج برمجوا اكتشافاتكم ليتم تشغيلها ليلاً و التقارير التي سيتم إعدادها و إرسالها إلى الموظفين الرئيسيين كل صباح الجداول المعقدة أو البسيطة، اكتشاف الأجهزة وإعداد التقارير مجرد نقرة.<br/> <br/>وضع جداول اكتشاف فردية لكل شبكة فرعية أو متحكم في إدارة التنمية، تضاف في التقارير التي ستُنشأ للجماهير المستهدفة. وضع جداول زمنية بسيطة أو معقدة لدعم احتياجات الشركات، أو تجنب الدعم أو التأثير على العمليات، أو لمجرد نشر عملية التحميل والتعجيل بإنجاز مراجعة الحسابات.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>يمكنك أن تخلق نصاً مع كل الخيارات لأي من نصوص مراجعة الحسابات الحالية ليس فقط (ويندوز) AIX, ESX, Linux, OSX and Windows are all covered.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>يمكنك استخدام النسبة المئوية للإشارة كبطاقة برية في المباراة<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>رفتك تساعد على الصقل بالضبط حيث توجد أجهزةكم<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>ملاحظة</strong> - أنت تَصِلُ إلى هذا URL مِنْ خادمِ مفتوحِ المحليِ. النص المُحمّل لن يكون قادراً على التقديم عند تشغيل أي آلة أخرى إذا كنت بحاجة إلى مراجعة الآلات الأخرى، يرجى تحميل السيناريو من أي آلة نائية، وليس استخدام بروزر على الخادم المفتوح باب العضوية.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'A CVE item that does not contain a filter to determine the affected item(s).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'خريطة جوجل API والمفتاح مطلوب لهذه المهمة.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'مجموعة من هويات الأجهزة التي ستنفذ المعيار';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'A JSON array of values to test for this vulnerability.';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'الشبكة يمكن أن تكون متصلة بـ (واين) باستخدام جهاز توجيه';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'ألف ويستخدم اكتشاف البذور برنامجاً أولياً لاسترداد شركاء التنفيذ من أي أجهزة أخرى يعرفها، ويضيف تلك الأجهزة إلى القائمة ويمسحها - ويطالب مرة أخرى بأي شركاء إضافيين تعرفهم تلك الأجهزة. حلق وكرر It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'اكتشاف شبكة فرعية سيمسح المعلومات المقدمة';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'A URL provided to the agent which will then download the file and store it on the local disk.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'A URL to a file to download.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'وتشكل شبكة خلفية جزءا من بنية أساسية للشبكة الحاسوبية توفر مسارا لتبادل المعلومات بين مختلف الشبكات المحلية أو الشبكات الفرعية. ويمكن للخلف أن يربط معا شبكات متنوعة داخل المبنى نفسه، عبر المباني المختلفة، أو فوق منطقة واسعة.<br/><br/>فعلى سبيل المثال، قد تنفذ شركة كبيرة شبكة خلفية لربط الإدارات الموجودة في جميع أنحاء العالم. المعدات التي تربط بين شبكات الإدارة تشكل العمود الفقري للشبكة ولدى تصميم شبكة احتياطية، يشكل أداء الشبكة وازدحام الشبكات عاملا حاسما في مراعاة ذلك. وعادة ما تكون قدرة الشبكة الخلفية أكبر من قدرة فرادى الشبكات المرتبطة بها.<br/><br/>ومن الأمثلة الأخرى على شبكة خلفية شبكة الإنترنت العمود الفقري، وهي مجموعة من الشبكات الواسعة النطاق والموجهات الأساسية التي تجمع بين جميع الشبكات المرتبطة بالإنترنت.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. وتملك معدات الربط الشبكي (الموجهات والموجهات) ووسائط النقل (ال الألياف الضوئية، ونبات النحاس، ومقصورة كات5، وما إلى ذلك) ملكية كاملة تقريبا من جانب المستأجر/المالك (مؤسسة، جامعة، حكومة، إلخ).<br/><br/>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'A closed port is accessible (it receives and responds to Nmap probepackets), but there is no application listen on it. ويمكن أن تكون مفيدة في إظهار أن المضيف موجود على عنوان IP (الاكتشافات أو المسح العضلي) وكجزء من كشف البرمجيات. لأن الموانئ المغلقة يمكن الوصول إليها، قد يكون يستحق المسح فيما بعد في حالة فتح بعضها. وقد يرغب مديرو البرنامج في النظر في منع هذه الموانئ بواسطة جدار ناري. ثم سيظهرون في الولاية المميتة، ونوقشوا بعد ذلك.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'أي جامع إمّا في المُجمّعِ أَو نظامِ الاحتياطيِ.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'A comma separated list of applicable CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'قائمة منفصلة بالقيم يمكن اختيار أحدها';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'أمر للهرب عندما يكون العميل (ويندوز) مُقرّراً، فإنّ هذه القيادة تُدار من داخل عميل الصدفة.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'اللوحة مكونة من ثلاثة أعمدة و صفين مما نسميه <i>الأقزام المستعارة</i>. النبتة متشابهة جداً مع موجز، فقط نأخذ المفهوم الموجز أكثر قليلاً. الأرملة تُنشأ بطريقة بسيطة باستخدام بضعة صناديق قطرة أو يمكنك أن تختار استخدام جهازك الخاص';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'ويعتبر ميناء ممتلئ مفتوحاً (وسيؤدي إلى كشف الأجهزة).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. ويتمثل التحدي الرئيسي في الاتصالات المتنقلة في تسليم اتصالات المستخدمين من منطقة تغطية محلية إلى أخرى. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printeders and mobile computing devices. وتتمثل إحدى المهام الهامة في تقاسم الوصول إلى الإنترنت، وكثيرا ما تكون خدمة النطاق العريض من خلال جهاز لاسلكي تلفزيوني أو رقمي للمشتركين.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone coincide).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'A list of custom UDP ports to scan (161 is SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. كل حاسوب أو جهاز على الشبكة هو رمز الشبكات المحلية المتسلّحة هي على الأرجح قائمة على تكنولوجيا (إثيرنيت) وتوفر المعايير الجديدة مثل ITU-T G.hn أيضا وسيلة لخلق شبكة لاسلكية تستخدم الأسلاك القائمة، مثل الكابلات الكنسية، وخطوط الهاتف، وخطوط الكهرباء.<br/><br/>وتشمل الخصائص المميزة للشبكة المحلية، خلافا لشبكة واسعة النطاق، ارتفاع معدلات نقل البيانات، ومحدودية النطاق الجغرافي، وعدم الاعتماد على الخطوط المستأجرة لتوفير الاتصال. وتعمل التكنولوجيات الحالية للشبكة الكهربائية أو غيرها من تكنولوجيات الشبكة الدولية لشبكة الطاقة الكهربائية (EEEE 802.3LAN) بمعدلات نقل البيانات تصل إلى 100 Gbit/s، وتوحدها الشبكة في عام 2010. حالياً 400 Gbit/s Ethernet يجري تطويرها.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'الموقع هو عنوان مادي يمكن أن يكون له أجهزة مرتبطة به. يمكنك تعيينه إحداثيات وإذا كانت هناك أجهزة مُعينة، سيظهر الموقع على الخريطة عندما يكون لديك رخصة شركة مفتوحة.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'اسم الموقع سيساعدك على إيجاد هذه الأجهزة في المستقبل';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'ويعني انخفاض العدد أنه سيطبق قبل قواعد أخرى.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'ويعني انخفاض العدد أنه سيطبق قبل قواعد أخرى. الوزن الافتراضي 100';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. ثم أُنشئ هذا المستعمل في غرفة العمليات المفتوحة وسجل فيه. النجاح.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'الرزمة هي قطعة من الليناري المركب. والحزمة تحتوي على نوع من أنواع مضادات الفيروسات، والمعتمدة، والمساندة، والمحظورة، والسحب، والجدار الناري، والتجاهل، والرخصة، وغيرها.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'كلمة سر (مخزنة كحشيشة) تمكّن من التسجيل عند استخدام التوثيق بالطلب.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'وللشخص حساب في طلب المراجعة المفتوحة. ولحساب مستخدميها قائمة بالأدوار والمنظمات المرتبطة بها. الأدوار التي يقوم بها المستعمل تحدد ما يمكنهم فعله المنظمات التي يقوم المستخدم بتحديد المواد التي يمكن أن يعمل عليها<br/><br/>وعندما يطلب المستعمل إجراء عملية (تجري، وتقرأ، وتستكمل، وتحذف) بشأن بند من بنود التجميع، تُستشير الأدوار لمعرفة ما إذا كان مسموحاً له بأداء ذلك الإجراء، ثم تُستشار الأوغنز لتحديد ما إذا كان بند التحصيل ينتمي إلى org يكون للمستعمل الإذن بالتصرف فيه.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. وبعض الأمثلة على الأجهزة المستخدمة في شبكة PAN هي الحواسيب الشخصية، والطابعات، وآلات الفاكس، والهواتف، وأجهزة المسح الضوئي، وحتى لوحات الفيديو. A PAN قد تشمل أجهزة لاسلكية. ويمتد نطاق شبكة PAN عادة إلى 10 أمتار. وعادة ما تُبنى شبكة اتصالات سلكية مع وصلات بين وكالة USB وVWire، في حين أن تكنولوجيات مثل بلوتون والاتصالات بالأشعة تحت الحمراء تشكل عادة شبكة لاسلكية.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'الاستفسار هو أساساً بيان SQL. ويتعارض هذا البيان مع قاعدة البيانات مع الإضافة التلقائية لهذا الحد، بحيث لا ينطبق إلا على البنود المطلوبة، ولا يسمح للمستعمل إلا بالنظر في تلك البنود. يمكن إنشاء كواري باستخدام قائمة الطعام Manage -> (كويريز) وتحتوي الاستفسارات على org-id وبالتالي فهي تقتصر على المستعملين المناسبين. ويجب أن يكون للمستعمل دور (دور) org admin or reporter) في إنشاء أو تحديث أو حذف الاستفسار. ويمكن لجميع المستعملين أن يقدموا استفسارا. والاستفسار يحمل اسماً يُستخدم في بند القائمة وكذلك في فئة قائمة الطعام. هذا يُخبر فريق مراجعة الحسابات الذي يُستفسر عنه وهناك أيضا عرض قائمة الطعام التي ينبغي وضعها <i>y</i> تيسيراً للاستفسار في مذكرة التفاهم<i>n</i> لمنع ظهور الاستفسار على الإطلاق. السؤال سيستمر إذا ما دُعي إلى استخدامه <code>id</code>بغض النظر عن قيمة القائمة';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'الرف هو مجموعة من الأجهزة التي تم تعيينها في موقع وطول داخل الرف يمكن أن يكون للجهاز صورة مرتبطة به بشكل اختياري. الرف وضع على التوالي. وقد أنشأنا نظاما جنادا جدا لتحديد مواقع الرفوف، على النحو التالي. At the top level (as always) is the Organisation (Org). ويمكن أن يكون للأورق مواقع متعددة (كما هو الحال دائما). وإضافة إلى سمة الراكز، يمكن الآن للموقع أن يحتوي على مبنى أو أكثر. المبنى يمكن أن يحتوي على واحد أو أكثر من الزهور. الطابق يمكن أن يحتوي على غرفة واحدة أو أكثر. الغرفة يمكن أن تحتوي على واحد أو أكثر هذا يبدو ككثير من العمل لكن الأعطال خلقت لك إنشاء موقع جديد والعناصر الفرعية سيتم إنشاؤها تلقائيا لك. إذا كنت بحاجة إلى المزيد من الأشياء (المباني، الغرف، إلخ) يمكنك أن تضيفها كما تريد. الرف يمكن أن يكون أيضا جزءا من <i>pod</i> من الرف وتعمل سمة البركة كعلامة، بدلاً من نموذج هرمي صارم للميراث حسب المباني والأرضيات وما إلى ذلك.<br/><br/>Racks are a feature available to Open-AudIT Enterprise licensed clientss.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'عينة ملف (كرون) لـ(لينكس) تحتها وينبغي أن يوضع ذلك في';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A security zone is a administrative domain or policy domain within the Network Domain.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'اكتشاف البذور هو نوع آخر من الاكتشافات، حيث توفر IP من واحد <i>بذرة</i> جهاز ويجري مراجعة هذا الجهاز، ثم تضاف إلى قائمة شركاء التنفيذ الذين يتعين مراجعة حساباتهم. ثم تُراجع هذه الأجهزة وتُضاف أيضاً إلى قائمة شركاء التنفيذ لمراجعة الحسابات. وتستمر هذه العملية بعد ذلك في إطار المعايير التي حددها المستخدم.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'وصف قصير للدخول';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'A storage area network (SAN) is a dedicated network that provides access to consolidate, block level data storage. وتستخدم الشبكة في المقام الأول لصنع أجهزة تخزين، مثل صفائف الأقراص، والمكتبات الشرائطية، والأوقاف الضوئية، بحيث يمكن للخواديم الوصول إلى الأجهزة بحيث تبدو وكأنها أجهزة ملحقة محليا بنظام التشغيل. وعادة ما تكون لشبكة SAN شبكتها الخاصة من أجهزة التخزين التي لا يمكن الوصول إليها عموما من خلال الشبكة المحلية بواسطة أجهزة أخرى. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'خيط يطابق <code>software.name</code> عزو. يمكنك استخدام البطاقة البرية العادية لـ (سي كي إل) في المئة لتطابق شخص أو أكثر';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'نظام منظم لإدارة المعلومات الحساسة';

$GLOBALS["lang"]['A timestamp.'] = 'مصباح';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها ويجمع المستخدم بين هذا وبين قائمة بالأدوار المسندة التي تحدد الإجراءات التي يمكن أن تتخذها بشأن المواد المخصصة للأوغاد التي تتاح لهم الوصول إليها. مجموعة المستخدمين <i>الأورام</i> و <i>الأدوار</i> تحديد ما يمكن ولا يمكن القيام به في إطار المبادرة المفتوحة.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'وسيكون لدى المستخدم قائمة بالمنظمات المرتبطة به (المنظمات). ويسمح كل org للمستعمل لهم بالتصرف في البنود داخل تلك المنظمة وفقا لدورهم (دورهم).<br/><br/>كل الأوعية ما عدا الـ (أوغ) الافتراضيّة لديها والد فكّر في شارة أورغ. إذا كان لدى المستعمل إذن على الأورغ، لديهم أيضا الإذن على أي سلال من ذلك الأورغ.<br/><br/>ويُسمح للمستعملين أيضاً بالإذن على الطفل org برؤية المواد من الوالدين أو الخرق لبعض المجموعات. هذه هي: لوحات، واكتشاف - شاشات، وميادين، وملفات، ومجموعات، واستفسارات، وتقارير، وأدوار، وقواعد، ومحاضر، وملخصات، ونباتات.<br/><br/>لا تنسي أن لديك سيطرة جرانية على ما يمكن للمستعملين رؤيته وفعله باستخدام الأدوار في المؤسسة';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'وسيكون لدى المستخدم قائمة بالمنظمات المرتبطة به (المنظمات). ويسمح كل org للمستعمل لهم بالتصرف في البنود داخل تلك المنظمة وفقا لدورهم (دورهم).<br/><br/>كل الأوعية ما عدا الـ (أوغ) الافتراضيّة لديها والد فكّر في شارة أورغ. إذا كان لدى المستعمل إذن على الأورغ، لديهم أيضا الإذن على أي سلال من ذلك الأورغ.<br/><br/>كما أننا نسمح للمستعمل بإذن من طفل org لرؤية الأشياء من الأب أو الخناق لبعض المجموعات. هذه هي: لوحات، واكتشاف - شاشات، وميادين، وملفات، ومجموعات، واستفسارات، وأدوار، وقواعد، ومحاضر، وملخصات، ونباتات.<br/><br/>لا تنسي أن لديك سيطرة على ما يمكن للمستعملين رؤيته وفعله';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to beaved through the larger network when this is the case. ويتمثل أحد التطبيقات المشتركة في تأمين الاتصالات من خلال شبكة الإنترنت العامة، لكن شبكة البرامج المواضيعية لا تحتاج إلى سمات أمنية واضحة، مثل التوثيق أو تشفير المحتوى. وعلى سبيل المثال، يمكن استخدام شبكات البرامج المواضيعية لفصل حركة مرور مختلف المجتمعات المحلية للمستعملين عن شبكة أساسية ذات سمات أمنية قوية.<br/><br/>وقد يكون لشبكة البرامج المواضيعية أداء أفضل ما يمكن تحقيقه، أو قد يكون لها اتفاق محدد على مستوى الخدمة بين زبون الشبكة ومقدم خدمات الشبكة. وعموماً، يكون للشبكة العالمية للفيروسية أجسام أكثر تعقيداً من نقطة إلى نقطة.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'وقد يسمح الضعف الذي يؤثر على توافر الخدمات للمهاجمين بتعطيل الخدمات، أو بنظم التحطم، أو يتسبب في إنكار الخدمة (الخدمة الوطنية، منخفضة، عالية).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'وقد يسمح الضعف الذي يؤثر على السرية للمهاجمين بقراءة بيانات حساسة، مثل المعلومات الشخصية، أو وثائق التفويض، أو بيانات الأعمال التجارية المسجلة الملكية (الوحدة، منخفضة، عالية).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system formations (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'يمكن النظر إلى بند الضعف في قاعدة البيانات المفتوحة على أنه أساساً استفسار ضد قاعدة بياناتك لتحديد مدى تعرضك المحتمل لتقرير معين من تقارير لجنة التحقق. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. ويجمع بين هذين البندين لإعداد استفسار مناسب يتم تحميله تلقائيا من أول واف.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'A wide area network (WAN) is a computer network that covers a large geographical area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. وكثيراً ما تستخدم شبكة WAN مرافق النقل التي توفرها شركات النقل المشتركة، مثل شركات الهاتف. وعموما تعمل تكنولوجيات الشبكة العالمية على المستويات الثلاثة الأدنى من النموذج المرجعي للمبادرة: الطبقة المادية، وطبقة الربط بين البيانات، وطبقة الشبكة.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'جميع الشخصيات';

$GLOBALS["lang"]['API / Web Access'] = 'API/Web Access';

$GLOBALS["lang"]['API Documentation'] = 'وثائق API';

$GLOBALS["lang"]['API Key required.'] = 'مطلوبة المفتاح';

$GLOBALS["lang"]['API Result'] = 'API Result';

$GLOBALS["lang"]['About'] = 'بشأن';

$GLOBALS["lang"]['Above are the only required items.'] = 'فوقها هي البنود الوحيدة المطلوبة.';

$GLOBALS["lang"]['Accept'] = 'قبول';

$GLOBALS["lang"]['Access Model'] = 'نموذج الوصول';

$GLOBALS["lang"]['access_point'] = 'نقطة الوصول';

$GLOBALS["lang"]['Access Point'] = 'نقطة الوصول';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Access to the admin$ share and RPC uses the SMB2 protocol.';

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

$GLOBALS["lang"]['action_date'] = 'الإجراء';

$GLOBALS["lang"]['Action Date'] = 'الإجراء';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'دليل فعال وبرنامج عمل مفتوح العضوية';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'إضافة وثائق التفويض';

$GLOBALS["lang"]['Add image'] = 'الصورة';

$GLOBALS["lang"]['additional_items'] = 'البنود الإضافية';

$GLOBALS["lang"]['Additional Items'] = 'البنود الإضافية';

$GLOBALS["lang"]['address'] = 'العنوان';

$GLOBALS["lang"]['Address'] = 'العنوان';

$GLOBALS["lang"]['Address any nonconformities'] = 'معالجة أي عدم اتساق';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'معالجة نتائج مراجعة الحسابات والإجراءات التصحيحية';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'الوضع';

$GLOBALS["lang"]['Admin Status'] = 'الوضع';

$GLOBALS["lang"]['advanced'] = 'السلف';

$GLOBALS["lang"]['Advanced'] = 'السلف';

$GLOBALS["lang"]['Afghanistan'] = 'أفغانستان';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'بعد خلق التكامل عندما ترى تفاصيل التكامل ستلاحظ حقل اسمه (ديبج) هذا مُحدد لا بالخطأ تغييره إلى نعم يوفر المزيد من قطع الأشجار عندما يتم تنفيذ الاندماج. ديبج لا يجب أن تترك كنعم ويرجع ذلك إلى أن الناتج المسيئ سيتضمن كل ما استُرجع من النظم الخارجية - بما في ذلك بنود مثل WMI و SNMP أوراق اعتماد. ينبغي استخدام خيار التطهير فقط عندما تحدث مشكلة وترغب في البحث بشكل أعمق لمعرفة ما إذا كان بإمكانك تحديد السبب';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'بعد الانتهاء من ما سبق، فك الوكيل.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'عميل؟ الكشف؟ وثائق التفويض؟';

$GLOBALS["lang"]['agents'] = 'العملاء';

$GLOBALS["lang"]['Agents'] = 'العملاء';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'ويمكن إنشاء قيود على العملاء تحدد المدة والشبكة ونظام التشغيل. إذا تطابقت جميع الاختبارات، الخادم يطلب من العميل القيام بأعمال. إذا لم يتم تحديد أي اختبار، فإنه مستبعد من <i>كل شيء يجب أن يتطابق</i> شرط<br/><br/>يمكنك أن تخلق عملاء متعددين وتجعل الخادم يتحقق من دخول عميل أو كلها قد تحدد (على سبيل المثال) عميل واحد يقول <i>إذا كان العميل آي بي في هذه الشبكه الفرعيه حدد الموقع</i>.<br/><br/>ومثال آخر قد لا يكون إدارة مراجعة الحسابات على الإطلاق، بدلا من تحميل نص وإدارة ذلك. إذا تم تركيب الوكيل مع حقوق خاصة، يمكنك الآن إدارة آلاتك دون فتح <strong>أي</strong> موانئ من ذلك إلى العالم.<p>تمكين العملاء المتقدمين يعني أن عميلاً يمكن أن يُطلب منه تحميل أي ملف وتنفيذ أي أمر <strong>الحرب</strong>: هذا يأتي بمخاطر أمنية هذه التشكيلة <strong>فقط</strong> الوظيفة عند تشغيل نظام &quot; أوديت &quot; باستخدام نظام HTTPS وشهادة صالحة (منحت سلطة الشهادة) </p>';

$GLOBALS["lang"]['Aggressive'] = 'المعتدي';

$GLOBALS["lang"]['Aland Islands'] = 'جزر آلاند';

$GLOBALS["lang"]['Albania'] = 'ألبانيا';

$GLOBALS["lang"]['Albanian'] = 'ألبانيا';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'جميع المجموعات تستخدم الشكل';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'جميع الطاولات الفرعية للأجهزة تحتوي على بعض الأعمدة المهمة';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'كل الأجهزة ذات نوع مثل الكمبيوتر';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'جميع الأجهزة التي لديها جهاز كمبيوتر أو جهاز توجيه';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'جميع الأجهزة بدون نوع من التبديل والطابعة';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'جميع الأجهزة بدون نوع من التبديل والطابعة أساساً نفس السؤال السابق';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'وجميع خيارات الاكتشاف العادية متاحة أيضا للاستخدام في أجهزة الكشف عن البذور.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'ويمكن إنشاء جميع المهام نفسها في ويندوز ولينكس. تستخدم المهام طريقة CRON لتحديد مواعيد التنفيذ.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'وإلى جانب طلب المعلومات هذا، نرسل إلى نقاط بيانات الموجة الأولى التي ستعطينا بعض المعلومات التي تمس الحاجة إليها بشأن استخدام السمات وتركيبك.';

$GLOBALS["lang"]['Also can be created from the'] = 'أيضا يمكن خلقها من';

$GLOBALS["lang"]['Alternatives'] = 'البدائل';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS الحقول';

$GLOBALS["lang"]['American Samoa'] = 'ساموا الأمريكية';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'اكتشاف دليل فعال سوف يتساءل عن الدليل النشط لقائمة من الشبكات ويمسح شركاء التنفيذ مثل اكتشاف شبكة فرعية منتظمة';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'An Org (organization) is the owner of most items in collections within Open-AudIT. باستثناء البنود العالمية مثل <i>التشكيل</i>معظم الأصناف مخصصة لـ (ممتلكة من) أورغ المستعمل لديه القدرة على الوصول إلى تلك المواد في مجموعة، أن أسفل إلى أورج المستعمل لديه الإذن.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. البحث عنها غالباً ما يكون الهدف الرئيسي لمسح الموانئ الناس العقليون يعرفون أن كل ميناء مفتوح هو سبيل للهجوم ويريد المهاجمون ومختبرو القلم استغلال الموانئ المفتوحة، في حين يحاول المسؤولون الإداريون إغلاقها أو حمايتها بواسطة جدران نارية دون إحباط مستخدمين شرعيين. كما أن الموانئ المفتوحة مثيرة للاهتمام بالنسبة للمسح غير الأمني لأنها تبين الخدمات المتاحة للاستخدام في الشبكة.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'مجموعة من <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'مجموعة من <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'مجموعة من الأشياء تمثل روابط خارجية مع المزيد من المعلومات.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'تخمين متعلم للهوية ونوع الجهاز';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'وشبكة خاصة تابعة للمؤسسة هي شبكة تبنىها منظمة واحدة لربط مواقع مكاتبها (مثل مواقع الإنتاج، والمكاتب الرئيسية، والمكاتب النائية، والمتاجر) حتى تتمكن من تقاسم الموارد الحاسوبية.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'يمكن إنشاء مدخل باستخدام واجهة الإنترنت إذا كان للمستعمل الحالي دور يحتوي على';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'ومن الأمثلة على ذلك أن جسد يوبون بوست موجود أدناه. هذا يجب أن يكون مرتبطاً بـ "البيانات"';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'ومثال على ذلك أن (وادج سى كيل) يظهر أجهزة محسوبة لكل موقع';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'وتم التصديق على مستعمل مفتوح العضوية ومأذون به من قِبَل خادم برنامج العمل الطويل الأجل. النجاح.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'An indication of the level of service required by this site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'حقل داخلي يشير إلى أن الاكتشاف قد اكتمل';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'ويعتبر فتح ميناء مفتوح (وسيؤدي إلى كشف الأجهزة).<br/>سابقاً ونظرت تكنولوجيا المعلومات في رد فعل غير رسمي';

$GLOBALS["lang"]['An optional GeoCode'] = 'An optional GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'كلمة مرور اختيارية لاستخدام السدو.';

$GLOBALS["lang"]['Analyzed'] = 'محلل';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'وأخيرًا، نضغط على (سوبيميت) لتنفيذ هذا الاكتشاف.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'وإذا كان هناك شيء خاطئ؟';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'والنقرة الأخيرة <i>Submit</i> لخلق أسلوبك المفتوح للانتقال';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'وأخيراً، ليس الكثير من المسائل الأمنية - المزيد من السلام العقلي. وهياكل البيانات مفتوحة وموثقة. يمكنك رؤيتهم';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'و نقدّم اسماً نوصي به بتواضع لكن يمكنك تسميته بأي شيء يعجبك تأكد من الخيار <i>إدراج أي طلب آخر لا تجده في المعرض (ناون غالاري)</i> يتم اختياره ثم نقر <i>Create<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'و أكثر بكثير';

$GLOBALS["lang"]['Andorra'] = 'أندورا';

$GLOBALS["lang"]['Angola'] = 'أنغولا';

$GLOBALS["lang"]['Anguilla'] = 'أنغيلا';

$GLOBALS["lang"]['Annex A Controls'] = 'المرفق ألف - الضوابط';

$GLOBALS["lang"]['Antarctica'] = 'أنتاركتيكا';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Packages';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'أنتيغوا وبربودا';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز TCP (محاصرة، لا أماكن) كنت ترغب في استبعاد من هذا الاكتشاف. فقط متاح عند استخدام الناغم 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'أي موانئ من طراز UDP (يتم غلقها، لا أماكن) ترغب في استبعادها من هذا الاكتشاف. فقط متاح عند استخدام الناغم 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'أي وثائق إضافية تحتاجها';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'أي ملاحظات إضافية تهتم بها';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'وتدل أية سمات تليها * على أن بيانات CVSS أقل من المادة 4 استخدمت لإكمال هذا المجال. وباختصار، نسعى إلى استخدام الحقول الـ4، ولكن إذا لم تكن مأهولة بالسكان، فإننا سنتراجع عن الصيغة (الصيغ) السابقة للخصائص.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'وستخصص أي أجهزة لهذا الـ(أورغ) عندما يديرون نص مراجعة حساباتهم (إذا تم تحديده).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'وستخصص أي أجهزة لهذا الـ(أورغ) عندما يديرون نص مراجعة حساباتهم (إذا تم تحديده). الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'أي أجهزة مكتشفة سيتم تعيينها في هذا الموقع إذا تم تعيينها الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'وستخصص أي أجهزة مكتشفة لهذا الموقع عندما يديرون نص مراجعة الحسابات الخاص بهم (إذا تم تحديده).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'وستخصص أي أجهزة مكتشفة لهذا الموقع عندما يديرون نص مراجعة الحسابات الخاص بهم (إذا تم تحديده). الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'أيّ أجهزة مكتشفة سيتمّ تعيينها لهذا الـ(أورغ) إذا تمّ وضعها. إذا لم يتم تحديدها، فإنها مخصصة ل <code>org_id</code> لهذا الاكتشاف الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'أي ملفات وجدت بهذه الطريقة تخزن في <i>التنفيذ</i> جدول حسب أي عنصر آخر للجهاز';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'أي مرشح مطلوب. ملاحظة: عندما يكون من النوع = حركة المرور، هذا يمثل رمزاً رائعاً.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ محددة من طراز TCP تتمنى اختبارها (مغلقة، لا أماكن).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'أي موانئ محددة من طراز UDP ترغب في اختبارها (المغلقة، لا أماكن).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'أي صور محملة من المستخدمين توضع هنا';

$GLOBALS["lang"]['Application'] = 'التطبيق';

$GLOBALS["lang"]['Application Definitions'] = 'تعاريف التطبيق';

$GLOBALS["lang"]['application_id'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application ID'] = 'هوية التطبيق';

$GLOBALS["lang"]['Application Licenses'] = 'تراخيص التطبيق';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'تطبيق نظام التشغيل أو نظام التشغيل';

$GLOBALS["lang"]['applications'] = 'التطبيقات';

$GLOBALS["lang"]['Applications'] = 'التطبيقات';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'التطبيقات هي سمة خاصة فقط في المؤسسة.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'ويجري إدخال تطبيقات في البند 2-2 من النظام المفتوح باب العضوية بغية توسيع نطاق المفهوم مع زيادة تطويره.';

$GLOBALS["lang"]['applied'] = 'التطبيق';

$GLOBALS["lang"]['Applied'] = 'التطبيق';

$GLOBALS["lang"]['Approved'] = 'الوظائف المعتمدة';

$GLOBALS["lang"]['Approved Packages'] = 'المبالغ المعتمدة';

$GLOBALS["lang"]['April'] = 'نيسان/أبريل';

$GLOBALS["lang"]['Arabic'] = 'العربية';

$GLOBALS["lang"]['architecture'] = 'الهندسة';

$GLOBALS["lang"]['Architecture'] = 'الهندسة';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'هل أنت متأكد أنك تريد حذف هذا البند من المدخلات؟';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'هل أنت متأكد أنك تريد حذف هذا الناتج؟';

$GLOBALS["lang"]['Are you sure?'] = 'هل أنت متأكد؟';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'هل أنت متأكد؟ This will remove all queue entries and prevent the remaining IPs from being discovered.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'هل أنت متأكد؟ وهذا سيعيد تحديد عدد عمليات التصفيات ويمكن أن يسبب تحميلا على الخادم.';

$GLOBALS["lang"]['area'] = 'المنطقة';

$GLOBALS["lang"]['Area'] = 'المنطقة';

$GLOBALS["lang"]['Argentina'] = 'الأرجنتين';

$GLOBALS["lang"]['Armenia'] = 'أرمينيا';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'أروبا';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'كتذكير كيف تعمل الأذونات في "إفتتاح"';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'ونتيجة لذلك، نحن <strong>يجب أن يجب</strong> وتتاح حصة الدولار المخصصة لمستخدم وثائق التفويض المكتشفة. يرجى التحقق من الهدف ويندوز الآلة توفير <i>أكتب</i> الوصول إلى مستعمل وثائق التفويض المكتشف.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'وكما ذُكر أعلاه، لا يتكلم المطورون جميع لغات الترجمة المقدمة. وهذا يعني أننا لا نستطيع أن نستعرض بدقة النص المترجم. نحن نحاول إجراء استعراض فضولي إذا رأيت شيئاً غير مترجم بشكل صحيح يمكنك تغييره بنفسك حرر ملف اللغة المناسب (على النحو الوارد أدناه) وتجد أن النص سيتغير. ربما ليس موجوداً وعليك أن تضيفه فقط غيّر النص، وأحتفظ بالملف وأصلح صفحتك لا حاجة لإعادة تشغيل أي خدمات/أدوات لتفعيلها. ربما عليك أن تجبرك على إعادة فتح مصففك';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'وفقاً لمعايير برنامج العمل المفتوح العضوية - <i>ولا تحاول تنفيذ أي من السياقات في هذا المعيار دون إجراء اختبار أولي لها في بيئة غير تشغيلية. ولا يتحمل مبدعون هذا المعيار أي مسؤولية على الإطلاق عن استخدامه من جانب أطراف أخرى، ولا يقدمون أي ضمانات، معبرا عنها أو ضمنا، بشأن نوعيتها أو موثوقيتها أو أي خصائص أخرى.</i><br/><br/>بجدية، لا تبدأي بالعمى <i>إصلاح</i> كشفت القضايا بعد إجراء معيار دون إجراء أول اختبار دقيق في بيئة غير منتجة ومتطابقة.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'حسب خصائص بيئات الأجهزة الإنتاج، التدريب، وآخرون';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'بينما يستخدم نص مراجعة الحسابات باش يمكنك استخدام البطاقة البرية';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'كالعادة، الذهاب إلى قائمة الطعام كما هو الحال أعلاه، إذا كنت تشغيل على لينكس ولديك نظام المعلومات الإدارية الوطني على نفس الخادم، لا تحتاج إلى القيام بأي شيء غير النقر <i>Submit</i>. لا أستطيع جعله أسهل من ذلك';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'بينما ندير الاكتشافات ونجمع نتائج الأجهزة ننشر قائمة الشبكات The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'تعيين مدير أو فريق تابع لنظام الرصد الدولي';

$GLOBALS["lang"]['Assign an Operator'] = 'تعيين مشغل';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'إرسال أي أجهزة مراجعة إلى هذا الأوردج.';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'نرسل الجهاز إلى موقع';

$GLOBALS["lang"]['Assign the device to an Org'] = 'إرسال الجهاز إلى أورغ';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'تعيين الأجهزة المكتشفة';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'وفي الوقت الحاضر، يمكننا أن نستخدم شبكــة شبكــة المــواد والبرامجيات والمستعملين.';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'محاولة لربط الجهاز إذا كنا لا مراجعة الحسابات المحلية.';

$GLOBALS["lang"]['Attribute'] = 'المساهمة';

$GLOBALS["lang"]['attributes'] = 'الخصائص';

$GLOBALS["lang"]['Attributes'] = 'الخصائص';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'وتُخزَّن المواصفات لاستخدامها في حقول معينة، وتستند جميع الميادين في الوقت الحاضر إلى الأجهزة والمواقع والأوراق والجداول. الصفات التي يمكنك تحريرها مرتبطة بالأعمدة التالية: درجة، البيئة، الوضع';

$GLOBALS["lang"]['Audit'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit AIX'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit DNS'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit ESXi'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['Audit Linux'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['audit_log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit Log'] = 'سجل مراجعة الحسابات';

$GLOBALS["lang"]['Audit Mount Point'] = 'بند مراجعة الحسابات';

$GLOBALS["lang"]['Audit My PC'] = 'مراجعة حساباتي';

$GLOBALS["lang"]['Audit Netstat'] = 'Netstat';

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

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'الأساليب الأفقية';

$GLOBALS["lang"]['Authenticate only'] = 'فقط';

$GLOBALS["lang"]['Authentication Passphrase'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['Authentication Protocol'] = 'بروتوكول التوثيق';

$GLOBALS["lang"]['authority_key_ident'] = 'الهيئة الرئيسية';

$GLOBALS["lang"]['Authority Key Ident'] = 'الهيئة الرئيسية';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'مأهولة من قِبَل خادم مفتوح';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'التشغيل الآلي';

$GLOBALS["lang"]['Automatable'] = 'التشغيل الآلي';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'مأهولة بالسكان آلياً بناءً على نظام المُجمعات';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'ويمكن للخطوط الأساسية أن تقارن موانئ ومستعملي وبرمجيات صافية.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'ويمكنك خطوط الأساس من الجمع بين بيانات مراجعة الحسابات ومجموعة من الخصائص التي سبق أن حددتموها (خط الأساس) لتحديد مدى امتثال الأجهزة.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'خطوط الأساس لمقارنة الأجهزة';

$GLOBALS["lang"]['Basic'] = 'أساسي';

$GLOBALS["lang"]['Basque'] = 'Basque';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'لأننا نحاول أن نكون شفافين قدر الإمكان، هذه هي بياناتك الفعلية التي نرسلها.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'والتمكن من تحديد أي آلات يتم تشكيلها بنفس الطريقة هو جزء رئيسي من إدارة النظم ومراجعة الحسابات - وسيصبح الإبلاغ عن ذلك الآن بسيطا وآلية. بمجرد أن تحدد خط الأساس الخاص بك هو تلقائيا تشغيل ضد مجموعة من الأجهزة على جدول محدد مسبقا. وسيكون ناتج خطوط الأساس هذه المنفذة متاحاً للاستطلاع على شبكة الإنترنت، أو للاستيراد إلى نظام طرف ثالث أو حتى كتقرير مطبوع.<br/><br/>ولأغراض مراجعة الحسابات والإدارة، يمكن أن تكون مفيدة لخط الأساس لأجهزة فردية مقابل جهاز جيد ثابت معروف. ويمكنك خطوط الأساس من الجمع بين بيانات مراجعة الحسابات ومجموعة من الخصائص التي سبق أن حددتموها (خط الأساس) لتحديد مدى امتثال الأجهزة.';

$GLOBALS["lang"]['Belarus'] = 'بيلاروس';

$GLOBALS["lang"]['Belgium'] = 'بلجيكا';

$GLOBALS["lang"]['Belize'] = 'بليز';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'وفيما يلي مثال على الشكل المطلوب من نظام &quot; csv &quot; .';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'أسفل هذه الخطوط حيث يتم حقن المتغيرات في النص بعد مثالنا السابق نص مراجعة حسابات لينكس مأهولة بدليلنا هكذا';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'أسفل يمكنك رؤية مثال أورغ شارت إذا كان لدى المستخدم إذن على <i>التمويل ألف</i> Org, they also have permission on the descendant Orgs of Dept A, B &apos; C. وهذا بصرف النظر عن المجموعة المطلوبة.<br/><br/>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. ويتعلق الأمر (كما ورد أعلاه) بالاستفسارات والمجموعات وغيرها.<br/><br/>ملاحظة - يمكن للمستعمل أن يحصل على استفسار من شركة Default Org، ولكن هذا هو السؤال نفسه وليس النتيجة. ولن تظهر النتيجة سوى الأجهزة التي يمكن للمستعمل الوصول إليها - أجهزة الإي آي إي من التمويل ألف والمشروع ألف وباء جيم.';

$GLOBALS["lang"]['Benchmark'] = 'المعيار المرجعي';

$GLOBALS["lang"]['benchmark_id'] = 'المعيار المرجعي';

$GLOBALS["lang"]['Benchmark ID'] = 'المعيار المرجعي';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'وتنشأ المهام المرجعية تلقائيا عند وضع معيار.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'ويمكن أن يستغرق التنفيذ والتجهيز المحددان وقتا طويلا، ومن ثم يفضلان تحديد مواعيدهما وعدم تشغيلهما على نحو مخصص.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'وتُنشأ المعايير عن طريق توفير نظام تشغيلي ونسخة، إلى جانب دليل محدد وقائمة بالآلات لتنفيذها. وبعد الإنشاء، يتم تنفيذ المعايير على قائمة الآلات في جدول زمني.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'المعايير المتعلقة بأفضل الممارسات';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'وتقدم العلامات المرجعية توصيات أمنية لحواسيبكم، باستخدام أدوات وسياسات البرنامج.<p><i>From the OpenSCAP homepage:</i> وفي عالم الأمن الحاسوبي الذي يتغير باستمرار حيث يتم اكتشاف مواطن ضعف جديدة وتصحيحها كل يوم، يجب أن يكون إنفاذ الامتثال الأمني عملية مستمرة. كما ينبغي أن تشمل طريقة لإجراء تعديلات على السياسات، فضلا عن التقييم الدوري ورصد المخاطر. ويوفر النظام الإيكولوجي المفتوح باب العضوية أدوات وسياسات قابلة للمواءمة من أجل التنفيذ السريع والفعال من حيث التكلفة والمرن لهذه العمليات.</p>';

$GLOBALS["lang"]['Benefits'] = 'الاستحقاقات';

$GLOBALS["lang"]['Bengali'] = 'بنغالي';

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

$GLOBALS["lang"]['Both forms of'] = 'الشكلان';

$GLOBALS["lang"]['Botswana'] = 'بوتسوانا';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'جزيرة بوفت (بوفيتويا)';

$GLOBALS["lang"]['Brazil'] = 'البرازيل';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'البرازيل';

$GLOBALS["lang"]['Breaking it Down'] = 'كسرها';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'إقليم المحيط الهندي البريطاني (أرخبيل شاغوس)';

$GLOBALS["lang"]['British Virgin Islands'] = 'جزر فرجن البريطانية';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = '"أنزل الشجرة إلى "كونسول روت خدمات المكونات - حواسيب - > حاسوبي<br/><br/>النقر الصحيح <i>حاسوبي</i> واختيار الممتلكات<br/><br/>اختيار <i>الممتلكات الافتراضية</i> tab';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'بناء الثقة مع العملاء والشركاء';

$GLOBALS["lang"]['Bulgaria'] = 'بلغاريا';

$GLOBALS["lang"]['Bulgarian'] = 'بلغاريا';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Edit Form';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'اختيارات التحرير الشعبي لن تبقى منتقاة بعد انقر الصفحة التالية';

$GLOBALS["lang"]['Burkina Faso'] = 'بوركينا فاسو';

$GLOBALS["lang"]['Burundi'] = 'بوروندي';

$GLOBALS["lang"]['business_requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['Business Requirements'] = 'متطلبات الأعمال';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'لكن لدي فقط ذقن الويندوز';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'لكن لا أريد تغيير ملف اللغة في كل مرة أستكملها';

$GLOBALS["lang"]['Buy'] = 'اشتري';

$GLOBALS["lang"]['Buy More'] = 'اشتر المزيد';

$GLOBALS["lang"]['Buy More Licenses'] = 'شراء المزيد من التراخيص';

$GLOBALS["lang"]['By'] = 'من قبل';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'عن طريق التقصير، ندمج جميع الأجهزة مع... <i>y</i>. مع 4.2.0 نحن أيضاً نشحن قاعدة تقول <i>إذا إكتشفنا جهازاً ولديه جهاز كهربي صالح، علامة على ذلك الجهاز كما يديره النظام</i>. من الواضح أنه يمكنك تعطيل هذا إذا لم يكن ما تريده';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'عن طريق التقصير، نتخطى شهادة المصادقة لأن الزبائن يميلون إلى استخدام شهادات ذاتية التوقيع. ولتمكين التصديق على الشهادة، حرر الملف الوارد أدناه';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs with a status of received, awaiting analysis, under analysis, rejected. ولا تحتوي هذه الفحوصات (معظمها) على معلومات كافية تمكننا من التوصل إلى استفسار صحيح بشأن البرمجيات SQL.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'محسوبة من الاكتشاف';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'حساب مجموع عدد عناوين شركاء التنفيذ الصحيحة لهذه الشبكة.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'حسب الوقت الذي يستغرقه تنفيذ هذا البند.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '(ج) يحسب عند تنفيذ عملية الإدماج ويحتوي على تمثيل للأجهزة في هذا الإدماج. كل وصلة <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '(ج) يحسب عند إدارة الإدماج ويحتوي على تمثيل مشترك للمواقع في هذا الإدماج. كل وصلة <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '(أ) يُحسب عند إدارة التكامل ويحتوي على عدد الأجهزة المختارة من قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'ويحسب عند إدارة التكامل ويحتوي على عدد الأجهزة المختارة للنظام الخارجي.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '(أ) يحسب عند إدارة التكامل ويحتوي على عدد الأجهزة التي يتعين تحديثها في النظام الخارجي.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '(ج) حساب عندما يجري التكامل ويحتوي على عدد الأجهزة التي تم تحديثها في قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'استدعي القيادة بسرعة عن طريق النقر <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'كمبوديا';

$GLOBALS["lang"]['Cameroon'] = 'الكاميرون';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'شبكة منطقة كامبوس';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'يمكن <code>active</code>.. <code>passive</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'يمكن <code>application</code>.. <code>compute</code>.. <code>database</code>.. <code>storage</code>.. <code>virtualisation</code>.. <code>web</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'يمكن <code>auto</code>.. <code>fixed</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'يمكن <code>high availability</code>.. <code>load balancing</code>.. <code>performance</code>.. <code>storage</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'يمكن <code>line</code>.. <code>pie</code> أو <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'يمكن <code>user</code> أو <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'يمكن تحديدها بواسطة الاكتشاف أو المستخدم.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'يمكن تحديدها بواسطة الاكتشاف أو المستخدم. يستخدم الهويّة من طاولة المواقع';

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

$GLOBALS["lang"]['Catalan'] = 'Catalan';

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

$GLOBALS["lang"]['Check for SSH on these ports'] = 'تحقق من SSH على هذه الموانئ';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'تحقق من هذا المرفأ لأي خدمة';

$GLOBALS["lang"]['Chile'] = 'شيلي';

$GLOBALS["lang"]['China'] = 'الصين';

$GLOBALS["lang"]['Chinese'] = 'الصينية';

$GLOBALS["lang"]['Chinese (traditional)'] = 'الصينية (التقليدية)';

$GLOBALS["lang"]['Choose'] = 'الاختيار';

$GLOBALS["lang"]['Choose (select OS first)'] = 'الاختيار (الاختيار أولاً)';

$GLOBALS["lang"]['Choose a Device'] = 'اختر جهازا';

$GLOBALS["lang"]['Choose a Table'] = 'اختيار الجدول';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'اختر نوع المهمة من أول هبوط وسيشكل ذلك المجالات الإضافية المطلوبة حسب نوع المهمة.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Click <i>سر العميل الجديد</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Click Submit to Execute';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'انقر <i>الممتلكات</i> تحت <i>Manage</i> رئيس في العمود المركزي للقائمة نسخ <i>وصول المستعملين</i>. ذات مرة نسختها، اقطعها إلى محرر النص عليك أن تنسخ جزء من هذا المجال<br/><br/>ميداننا المثالي يبدو هكذا<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>القسم الذي نحتاجه هو <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (هوية المستأجر). ويستخدم هذا في برنامج &quot; مفتوح العضوية &quot; بوصفه &quot; <i>المستأجر</i> الحقل، حتى الرعي في هناك.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Click on App Registrations to create a new Application, then read New Application Registration. أعطها اسماً (استخدمت نظام التسجيل مفتوح العضوية)، واختار تطبيق الموقع الإلكتروني/ API كنوع من أنواعه، ووفر أي URL (المكتب غير مهم) والآن نقر الكريت.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'اضغط على موافقتك واغلق النافذة<br/><br/>وستتطلب التغييرات المذكورة أعلاه إعادة التشغيل.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'اضغط على الطلب الذي صنعته للتو بطاقة التعريف هي هوية العميل<br/><br/>لخلق سر العملاء، نقر ستينغز، ثم مفاتيح. قدم اسماً رئيسياً واختار موعداً ملائماً للإنتهاء، ثم نقر الإنقاذ.<br/><br/>القيمة ستكون مأهولة لك هذا هو سر العميل';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'قم بضغط زر الحذف لسحب الأجهزة المثالية من "إفتتاح"<br/>وهذا سيزيل الأجهزة الواردة أدناه من قاعدة البيانات. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'اضغط زر الاديت <i>Basic SAML الاتحاد</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'قم بضغط زر الإستيراد تحته ليقوم بتجميع بيانات الأجهزة';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'اضغط على الحقل الذي ترغب في تحريره غيّر الحقل ونقرّ الكوخ الأخضر لتقدّمه';

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

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'التفاصيل';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

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

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'والكلاود هي سمة متاحة للزبائن المرخصين من المؤسسة المفتوحة القاعدة.';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'جزر كوكوس (Keeling)';

$GLOBALS["lang"]['Collection'] = 'المجموعة';

$GLOBALS["lang"]['Collections'] = 'المبالغ المحصلة';

$GLOBALS["lang"]['Collector'] = 'جامع';

$GLOBALS["lang"]['Collector (UUID)'] = 'جامع (UID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'المُجمع/الخدمة هي إحدى السمات الوحيدة في المؤسسة. ويحصل زبائن المؤسسات على رخصة جامع مجانا. ويمكن شراء رخص إضافية للمجمع حسب الاقتضاء.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'المُجمع / الخادم مُصمّم بحيث يُمكنُك أَنْ تَكُونَ عِنْدَكَ a نائي أَو <i>جامع</i> كمثال على تشغيل "أود" على آلة نائية وقد يكون هذا المجمع في منطقة أمنية أخرى، أو شبكة فرعية، أو مضيف غيوم أو في موقع عملاء. ويقوم المجمِّع عن بعد بعد بعد ذلك بجميع أعمال اكتشاف الأجهزة وتدقيقها محلياً تجنباً للتواصل والتعقيد في مجال الإطفاء. المجمّع بمجرد تسجيله يسيطر عليه بالكامل <i>خادم</i>. هذا يعني أنّك تحتاج فقط إلى اتصال من شركة (هاتف بي) أو (هاتيبس) من تلك المجموعة إلى (سيرفر).';

$GLOBALS["lang"]['Collector Dashboard'] = 'مركب';

$GLOBALS["lang"]['Collector Name'] = 'اسم المجموعة';

$GLOBALS["lang"]['collector_uuid'] = 'جامع';

$GLOBALS["lang"]['Collector Uuid'] = 'جامع';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'وتُنشأ مهام المجمّع تلقائياً عندما تُمكّن سمة المجمع من ذلك. وينبغي ألا يقوم المستعملون مباشرة بإنشاء مهام الجمع. ويمكن للمهام التي يضطلع بها المجمّعون أن تُحرر تواترها بعد الإنشاء. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. يمكنك اختيار هذا لتحديد أي مجموعة يجب أن تستمر المهمة. ولا يُدعم سوى مهام الاكتشاف للمجمعين.';

$GLOBALS["lang"]['Collectors'] = 'المجموعة';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'ويمكن للمجمعين أن يعملوا في واحد من نوعين: جامع وستاندالون. وعندما يكون في حالة المجمّع، يتولى الخادم الرئيسي إدارة حالة فتح الباب. وعندما تكون الحالة في حالة الوحدة الاحتياطية، تدار محليا وترسل أي أجهزة مكتشفة إلى الخادم الرئيسي.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'مجموعة الاكتشاف عن بعد';

$GLOBALS["lang"]['Colombia'] = 'كولومبيا';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'التعليق على السطر التالي (حول البند 49 أو نحو ذلك). مجرد وضع a h # في بداية السطر.';

$GLOBALS["lang"]['comments'] = 'التعليقات';

$GLOBALS["lang"]['Comments'] = 'التعليقات';

$GLOBALS["lang"]['commercial'] = 'التجارة';

$GLOBALS["lang"]['Commercial'] = 'التجارة';

$GLOBALS["lang"]['Commercial Support'] = 'الدعم التجاري';

$GLOBALS["lang"]['common_name'] = 'الاسم المشترك';

$GLOBALS["lang"]['Common Name'] = 'الاسم المشترك';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'عادة ما يُشار إليه باسم العميل';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'يُشار إليه عادة باسم العميل (سكرت).';

$GLOBALS["lang"]['Community'] = 'المجتمع';

$GLOBALS["lang"]['Community Questions'] = 'المسائل المجتمعية';

$GLOBALS["lang"]['Community String'] = 'المجتمع المحلي';

$GLOBALS["lang"]['Comoros the'] = 'جزر القمر';

$GLOBALS["lang"]['Compact'] = 'الاتفاق';

$GLOBALS["lang"]['Company'] = 'Company';

$GLOBALS["lang"]['Complete these steps.'] = 'أكمل هذه الخطوات';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexity of the attack (Low or High).';

$GLOBALS["lang"]['Component Table'] = 'الجدول';

$GLOBALS["lang"]['Components (All Devices)'] = 'المكونات (جميع الأجهزة)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'الشرط';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'إجراء تقييم للمخاطر';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'تنفيذ برامج التوعية والتدريب';

$GLOBALS["lang"]['Conduct management review meetings'] = 'اجتماعات استعراض الإدارة';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'إجراء مراجعة منتظمة للمراقبة (عادة سنويا)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'صادرة عن هيئة معتمدة في مرحلتين';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Conig Default, currently ';

$GLOBALS["lang"]['config_file'] = 'File';

$GLOBALS["lang"]['Config File'] = 'File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'مراقبة الدخول على أساس الأدوار';

$GLOBALS["lang"]['configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Configuration'] = 'الاتحاد';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'كشف البيانات والإبلاغ';

$GLOBALS["lang"]['Configure'] = 'الثقة';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'الثقة في جانب الخادم لأداء مراجعة الحسابات على جدول زمني';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'الخدمات الاستشارية والتنفيذية وغيرها من الخدمات متاحة عن طريق';

$GLOBALS["lang"]['contact'] = 'الاتصال';

$GLOBALS["lang"]['Contact'] = 'الاتصال';

$GLOBALS["lang"]['contact_name'] = 'اسم الاتصال';

$GLOBALS["lang"]['Contact Name'] = 'اسم الاتصال';

$GLOBALS["lang"]['contained_in'] = 'محتجز';

$GLOBALS["lang"]['Contained In'] = 'محتجز';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'يحتوي على شيء مشترك يُفصّلُ النُهُج ذات الصلة ومواقعها.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'يحتوي على الحقول التي تحدد ما إذا كان يجب أن نستخدم خيارات الاكتشافات (جوسون) يعترض';

$GLOBALS["lang"]['Context & Leadership'] = 'قيادة السياق';

$GLOBALS["lang"]['Context Engine ID'] = 'الهوية الهندسية في السياق';

$GLOBALS["lang"]['Context Name'] = 'اسم السياق';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'مواصلة تحسين نظام الرصد الدولي';

$GLOBALS["lang"]['contractual_obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Contractual Obligations'] = 'الالتزامات التعاقدية';

$GLOBALS["lang"]['Cook Islands'] = 'جزر كوك';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'نُسخ وعجينة نتيجة مراجعة الحسابات';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'نُسخ وعجينة أدناه إلى المنتديات، حالة أخرى من فتح الباب أو أي مكان آخر تحتاج إلى تقديم هذا البند.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'نسخ <i>هوية التطبيق</i> الحقل والعناية به في فتح الباب <i>هوية العميل</i> حقل لطريقة (أوث) الجديدة';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'نسخ <i>هوية العميل</i> و اقطعها إلى غرفة مفتوحه <i>هوية العميل</i> الحقل.<br/>إذا لم يكن هناك سر، نقر <i>سرية جديدة</i>ثمّ نُسخُ القيمةَ ويَسْخرُه إلى مفتوحِ <i>سر العميل</i> الحقل.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'نُسخْ القيمةَ ويَعْبرُه إلى الشكلِ المفتوحِ لaudIT <i>سر العميل</i> الحقل.';

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

$GLOBALS["lang"]['Create File'] = 'Create File';

$GLOBALS["lang"]['Create Geocode'] = 'Create Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['Create Internal Count'] = 'إنشاء الكونت الداخلي';

$GLOBALS["lang"]['create_internal_from_external'] = 'Create Internal from External';

$GLOBALS["lang"]['Create Internal From External'] = 'Create Internal from External';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Create NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'الإبداع المفتوح الأجهزة من ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'الإبداع المفتوح أجهزة من نظام المعلومات الإدارية الوطني';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'إنشاء خط أساس للجهاز المثالي';

$GLOBALS["lang"]['Create a Discovery'] = 'إنشاء جهاز كشف';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Create a Statement of Applicability (SoA)';

$GLOBALS["lang"]['created_by'] = 'المنشأة بموجب';

$GLOBALS["lang"]['Created By'] = 'المنشأة بموجب';

$GLOBALS["lang"]['created_date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Created Date'] = 'تاريخ الإنشاء';

$GLOBALS["lang"]['Creating'] = 'الإبداع';

$GLOBALS["lang"]['Creating Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Creating Device'] = 'Creating Device';

$GLOBALS["lang"]['Creating Widgets'] = 'إنشاء نباتات';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'خلق اكتشاف إدخال خيارات المسح';

$GLOBALS["lang"]['Creating a Query'] = 'إنشاء قرى';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = ':: إعداد بيان لشبكة SQL للمجموعات';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = ':: إعداد بيان خاص بالطلبات';

$GLOBALS["lang"]['Creating an Integration'] = 'إنشاء تكامل';

$GLOBALS["lang"]['creator'] = 'Creator';

$GLOBALS["lang"]['Creator'] = 'Creator';

$GLOBALS["lang"]['credential'] = 'الخلية';

$GLOBALS["lang"]['Credential'] = 'الخلية';

$GLOBALS["lang"]['Credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['Credentials Client ID'] = 'هوية العملاء';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'وثائق التفويض الهوية';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'وثائق التفويض';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'وثائق التفويض مخزنة في <i>وثائق التفويض</i> طاولة قاعدة البيانات والمعلومات الإبداعية الفعلية مشفرة في التخزين. وعندما يتم تشغيل جهاز الكشف، يتم استرجاع وثائق التفويض الخاصة به من قاعدة البيانات، تم فك شفاؤها واختبارها. وإذا أخفقت هذه التقارير في استرجاع قائمة وثائق التفويض، فك شفيت ثم اختبرت ضد الجهاز بدءا بوثائق التفويض المعروفة بأنها عملت سابقا. تم تخزين وثائق التفويض الخاصة بالنبائط على مستوى الأجهزة الفردية في <i>الإبداع</i> الجدول (الملاحظة - لا <i>s</i> في اسم الجدول. SSH keys are tested before SSH username / password. وعند اختبار SSH، ستوضع أيضا علامات على وثائق التفويض بأنها تعمل بالسودو أو تكون جذورها.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'ويمكن أن يكون لوثائق التفويض نوع من أنواع مختلفة قليلة - سنمب ضد 1/ف-2، سنمب ضد 3، شش، مفتاح شش، جميع النوافذ تنفذ. لم تُنفَّذ مفاتيح الشطرنج في خواديم ويندوز المفتوحة العضوية حتى الآن.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'وثائق تفويض الأمازون AWS المستخدمة في الكشف عن كلود';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'وثائق تفويض ميكروسوفت Azure used in Cloud Discovery';

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

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'موانئ TCP المعتادة. أي موانئ محددة سنمسحها بالإضافة إلى مرافئ التاي سي بي لا يوجد مكان';

$GLOBALS["lang"]['Custom UDP Ports'] = 'الجمارك الموانئ';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'مرافئ العملاء أي موانئ محددة كنا سنمسحها بالإضافة إلى مرافئ كبار الشخصيات لا يوجد مكان';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'خيارات المسح التي يمكن قياسها لكل كشف';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'قبرص';

$GLOBALS["lang"]['Czech'] = 'التشيكية';

$GLOBALS["lang"]['Czech Republic'] = 'الجمهورية التشيكية';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'حساب DN (اختياري)';

$GLOBALS["lang"]['DN Password (optional)'] = 'كلمة سر DN (اختياري)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'الدانمرك';

$GLOBALS["lang"]['dashboard_id'] = 'بطاقة الهوية';

$GLOBALS["lang"]['Dashboard ID'] = 'بطاقة الهوية';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Dashboards'] = 'لوحات الصيد';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'وتتيح لوحات العمل والأرملات للزبائن المرخص لهم من المؤسسة إنشاء وقراءة وتحديث وحذف كل من هذه المجموعات لضمان موقعهم على الإنترنت هو بالضبط ما يحتاجون إليه. ليس فقط ذلك، ولكن المستعمل قادر على وضع لوح معين كصفحة خاصة بهم. ولا يحتاج الجميع إلى استخدام نفس الصفحة (اللوحة)، ولا نفس النوافذ على اللوحة. ويمكن للزبائن المرخص لهم من الفئة الفنية أن يختاروا بين لوحتين محددتين مسبقا لتحديد موقعهم.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'توفر لوحات إدارة <i>في لمحة</i> إبراز هام للتغيرات التي تحدث على شبكتكم فضلا عن توفير وصلات سريعة بأنواع الأجهزة والمصنعين ونظم التشغيل وأكثر من ذلك بكثير.';

$GLOBALS["lang"]['Dashboards use'] = 'استخدام اللوحات';

$GLOBALS["lang"]['Data'] = 'البيانات';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'الاحتفاظ بالبيانات';

$GLOBALS["lang"]['Database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['db_action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['Database Action'] = 'إجراءات قاعدة البيانات';

$GLOBALS["lang"]['db_column'] = 'Column قاعدة البيانات';

$GLOBALS["lang"]['Database Column'] = 'Column قاعدة البيانات';

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

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'تاريخ ووقت آخر تحديث لوكالة الاستخبارات المركزية.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'تاريخ ووقت نشر مركز التحقيقات';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'التاريخ الذي نشرت فيه لجنة التحقيق';

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

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'الكشف عن العجز المستوى Set to Connect';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'الهوية الشخصية المستوى تحديد';

$GLOBALS["lang"]['Default Items'] = 'البنود الافتراضية';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Default Orgs Groups';

$GLOBALS["lang"]['Default Roles Groups'] = 'مجموعات الأدوار الافتراضية';

$GLOBALS["lang"]['Default Value'] = 'القيمة المستحقة';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'عجز 389 عادةً 636 مستعملاً للدليل النشط';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'التقصير <code>3</code> من أجل برنامج العمل دون الإقليمي ودليل فعال.';

$GLOBALS["lang"]['Defaults'] = 'العجز';

$GLOBALS["lang"]['Deferred'] = 'مؤجلة';

$GLOBALS["lang"]['Define project scope and objectives'] = 'تحديد نطاق المشروع وأهدافه';

$GLOBALS["lang"]['Define the ISMS scope'] = 'تحديد نطاق نظام الرصد الدولي';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'تحديد سياق المنظمة (المسائل الداخلية/الخارجية)';

$GLOBALS["lang"]['delay_minutes'] = 'مسارات';

$GLOBALS["lang"]['Delay Minutes'] = 'مسارات';

$GLOBALS["lang"]['Delete'] = 'تحذف';

$GLOBALS["lang"]['Delete Example Devices'] = 'تحذف أجهزة الإرسال';

$GLOBALS["lang"]['delete_external_from_internal'] = 'يحذف من:';

$GLOBALS["lang"]['Delete External From Internal'] = 'يحذف من:';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'يحذف نظام المعلومات الإدارية المتكامل الأجهزة إن لم تكن موجودة';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'تحذف {الاستكمال} الدخول.';

$GLOBALS["lang"]['Delete from Application'] = 'تحذف من الطلب';

$GLOBALS["lang"]['Delete from Cluster'] = 'تحذف من المجموعة';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'تفاصيل من عادة ما يكون الاتصال في هذا الموقع';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'تحديد كم مرة تريد تشغيل الشيك الأساسي ضد قاعدة البيانات ووضع تقرير مبرمج';

$GLOBALS["lang"]['Determine risk treatment options'] = 'تحديد خيارات معالجة المخاطر';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'وضع خطة لمعالجة المخاطر';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'وضع السياسات والإجراءات والضوابط';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'وضع الوثائق اللازمة لنظام الرصد الدولي (سياسات وإجراءات وما إلى ذلك)';

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

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Device Seed الاكتشافات خيار جيد إذا كنت تعرف أن شبكتك تتكون من مجموعة من الشبكات الفرعية، ولكن كنت غير متأكد ما هي. بَدأَ الإكتشافَ مَع a مرسل محلي ويُراقبُ شبكتَكَ تَتكشفُ أمام عيونِكَ.';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'الجهاز';

$GLOBALS["lang"]['Device Types'] = 'الأنواع النثرية';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'مراجعة حسابات الأجهزة والبرمجيات';

$GLOBALS["lang"]['Device is in the Subnet'] = 'الجهاز في الشبكة الفرعية';

$GLOBALS["lang"]['Devices'] = 'الأجهزة';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'الأجهزة المخصصة للأماكن';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'الأجهزة المعينة للأوغاد';

$GLOBALS["lang"]['Devices Audited'] = 'الأجهزة التي تم مراجعة حساباتها';

$GLOBALS["lang"]['Devices Collection'] = 'جمع الأجهزة';

$GLOBALS["lang"]['Devices Created in '] = 'الأجهزة المنشأة ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'الأجهزة المنشأة في غرفة الاجتماعات';

$GLOBALS["lang"]['devices_default_display_columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'النبائط الدوارة';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'الدبابات وجدت آخر 7 أيام';

$GLOBALS["lang"]['Devices Found Today'] = 'الأجهزة وجدت اليوم';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'وجدت الأجهزة أمس';

$GLOBALS["lang"]['Devices Missing Information'] = 'الأجهزة المفقودة للمعلومات';

$GLOBALS["lang"]['Devices Not Audited'] = 'الأجهزة غير المراجعة';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'النبائط لا ترى 30 يوما';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'النبائط لم تشاهد 7 أيام';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'الأجهزة لا ترى 90 يوما';

$GLOBALS["lang"]['Devices Older Than X'] = 'الأجهزة الأقدم من X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'الأجهزة المستردة عن طريق API';

$GLOBALS["lang"]['Devices Selected from '] = 'الأجهزة المختارة من ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'أجهزة منتخبة من طراز Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'الأجهزة المستكملة في ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Devices Updated in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'يتم قياس الأجهزة.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'النبائط لا يجري قياسها.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'يمكن قياس الأجهزة.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'أجهزة منفتحة';

$GLOBALS["lang"]['Devices in Running State'] = 'الأجهزة الموجودة في الولاية';

$GLOBALS["lang"]['Devices in Stopped State'] = 'الأجهزة في الدولة المتوقفة';

$GLOBALS["lang"]['Devices in this'] = 'الأجهزة في هذا';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'النبائط لن تضاهي إذا تم تحديد مركزها <i>حذفت</i>. وأي وضع آخر سيسمح بحدوث تطابق.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'النبائط مع المحاربين المفصولين';

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

$GLOBALS["lang"]['Discoveries'] = 'الكشف';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'الاكتشافات في قلب ما يفعله (أود) المفتوحة كيف عرفت <i>ماذا عن شبكتك؟</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'الاكتشافات هي القيود التي تمكنك من إدارة الاكتشافات على شبكة واحدة دون الدخول في تفاصيل تلك الشبكة كل مرة';

$GLOBALS["lang"]['Discovery'] = 'الكشف';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'الاحتفاظ ببيانات الكشف';

$GLOBALS["lang"]['discovery_id'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery ID'] = 'الهوية السرية';

$GLOBALS["lang"]['Discovery Issues'] = 'قضايا الكشف';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'خيارات قياس الاكتشاف';

$GLOBALS["lang"]['Discovery Name'] = 'الاسم السري';

$GLOBALS["lang"]['Discovery Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['Discovery Run'] = 'الكشف عن الركض';

$GLOBALS["lang"]['discovery_scan_options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Scan Options'] = 'خيارات الكشف';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'الكشف عن الشاشة الخيارات هي مجرد مجموعة أخرى من البنود. ويمكن لمستعملي المشاريع أن يستحدثوا القيود ويقرأونها ويستكملونها ويحذفونها حسب الاقتضاء. ويمكن للمستعملين المهنيين قراءة جميع القيود، ولكنهم لا يخلقون قيودا جديدة، أو يستكملون القيود القائمة أو يحذفون القيود. وليس لدى مستخدمي المجتمعات المحلية أي دليل يسمح بالوصول إلى هذه المجموعة.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan Types';

$GLOBALS["lang"]['Discovery Support'] = 'دعم الكشف';

$GLOBALS["lang"]['Discovery has stopped working'] = 'الاكتشاف توقف عن العمل';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'التصويب';

$GLOBALS["lang"]['Display Version'] = 'التصويب';

$GLOBALS["lang"]['Display in Menu'] = 'Display in Menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Displays a standard web form for submission to POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Displays a standard web form for submission to POST /{collection}/import.';

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

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'لا تنسى أن هناك جبل من الوثائق على الويكي';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'لا تمسح موانئ التاي سي';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'لا تفحص هذه الموانئ';

$GLOBALS["lang"]['Do not show me again'] = 'لا تظهر لي مرة أخرى';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'هل لديك مثال مثالي لهذه التشكيلة؟ ربما جهاز يقع في بيئة مختبر أو محطة عمل تستخدمها لإستنساخ أجهزة التصوير المغناطيسي';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'هل تريد استخدام وسيلة نقل آمنة (LDAPS) أو غير مشفرة منتظمة';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'هل ترغبين في رؤية الجانب العادي على اليسار';

$GLOBALS["lang"]['documentation'] = 'الوثائق';

$GLOBALS["lang"]['Documentation'] = 'الوثائق';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'وثائق عن مجموعة معينة.';

$GLOBALS["lang"]['Does Not Equal'] = 'لا تساوي';

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

$GLOBALS["lang"]['Don\\'] = 'لا';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'لا تمسك يدي، أعرف ما أفعله لا تصفية والقدرة على الانضمام إلى الطاولات العرفية';

$GLOBALS["lang"]['Download'] = 'تحميل';

$GLOBALS["lang"]['Download a File'] = 'تحميل الملف';

$GLOBALS["lang"]['Download a file from URL'] = 'تحميل ملف من URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'تحميل الإختبار...';

$GLOBALS["lang"]['Download your updated version from'] = 'تحميل نسختك المستكملة من';

$GLOBALS["lang"]['driver'] = 'سائق';

$GLOBALS["lang"]['Driver'] = 'سائق';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'الأجهزة المزدوجة/الأجهزة المفقودة';

$GLOBALS["lang"]['duration'] = 'المدة';

$GLOBALS["lang"]['Duration'] = 'المدة';

$GLOBALS["lang"]['Dutch'] = 'هولندا';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'ويجري مسح كل برنامج من شركاء التنفيذ بخيارات مصممة للاكتشافات (انظر خيارات الاختفاء والاختفاء - الجماعة ضد المؤسسة الفنية ضد شركة ويكي). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). وإذا ردت 22 أو 135 أو 161 على القائمة المرجعية، يتم استرجاعها واختبارها بدورها. وتستخدم وثائق تفويض العمل الأولى لإجراء مزيد من الاستفسارات مباشرة من الجهاز. ملاحظة - إذا كان قد اكتشف من قبل جهاز ما وحصل على وثائق تفويض عاملة، يتم اختبار وثائق التفويض هذه أولا. فقط إذا كانت تلك الإخفاقات هي وثائق التفويض الأخرى التي حاولت.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'وفي كل مرة يكتشف فيها جهاز ما أو يجري تجهيز نتيجة مراجعة الحسابات، يتم استرجاع جميع القواعد من قاعدة البيانات وتدار ضد خصائص الجهاز المحدد. القواعد تعمل ضد جهاز واحد في وقت واحد - ليس هناك مرفق للقول <i>تشغيل القواعد ضد جميع الأجهزة<i> أو <i>تشغيل القواعد ضد هذه الأجهزة<i>. وستجري قاعدة فردية اختبار صفات أو أكثر للجهاز وإذا تطابقت مع القاعدة، ستطبق النتيجة. ويمكن اختبار عدة سمات. ويمكن تحديد عدة خصائص. فكّر في هذا الأمر كما لو كان هذا، ثمّ ذلك النظامِ المفتوحِ.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'من السهل أن تكتشف على شبكة من النقر دون أن تدخل تفاصيل تلك الشبكة كل مرة';

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

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'إما لا شيء أو حاضر.

<strong>لا شيء</strong> - لا يعتمد الهجوم الناجح على ظروف نشر وتنفيذ النظام الضعيف. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - يتوقف الهجوم الناجح على وجود ظروف محددة للانتشار والتنفيذ في النظام الضعيف تسمح بالهجوم. وهي تشمل ما يلي:

ولا بد من كسب حالة عرقية لاستغلال الضعف بنجاح. ويتوقف نجاح الهجوم على ظروف الإعدام التي لا تخضع للسيطرة الكاملة للمهاجم. وقد يحتاج الهجوم إلى إطلاق عدة مرات ضد هدف واحد قبل نجاحه.

حقنة الشبكة The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).';

$GLOBALS["lang"]['El Salvador'] = 'السلفادور';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email Address'] = 'عنوان البريد الإلكتروني';

$GLOBALS["lang"]['Email Configuration'] = 'Email Configuration';

$GLOBALS["lang"]['Email to send test to'] = 'إرسال اختبار';

$GLOBALS["lang"]['Enable'] = 'التمكين';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Enable Distributed COM on this computer - Option is check';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

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

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'الإثراء كامل The CVE has full metadata and is considered stable.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'ضمان مراقبة الوثائق وتيسير الحصول عليها';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'شبكة الشركات الخاصة';

$GLOBALS["lang"]['Enterprise private network'] = 'شبكة القطاع الخاص';

$GLOBALS["lang"]['Entitlement Type'] = 'نوع الاستحقاق';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'وضع خطة للمشروع وجدول زمني';

$GLOBALS["lang"]['Establish an information security policy'] = 'وضع سياسة لأمن المعلومات';

$GLOBALS["lang"]['Established'] = 'الوظائف الثابتة';

$GLOBALS["lang"]['Estonia'] = 'إستونيا';

$GLOBALS["lang"]['Estonian'] = 'إستونيا';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'إثيوبيا';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Evaluate the ISMS internally';

$GLOBALS["lang"]['Every'] = 'كل شيء';

$GLOBALS["lang"]['Every Day'] = 'كل يوم';

$GLOBALS["lang"]['Example'] = 'مثال';

$GLOBALS["lang"]['Example Devices'] = 'أجهزة الإرسال';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Example Org Chart with Access';

$GLOBALS["lang"]['Example text from'] = 'نص نموذجي';

$GLOBALS["lang"]['Examples'] = 'أمثلة';

$GLOBALS["lang"]['Exceptions'] = 'الاستثناءات';

$GLOBALS["lang"]['exclude'] = 'استبعاد';

$GLOBALS["lang"]['Exclude'] = 'استبعاد';

$GLOBALS["lang"]['exclude_ip'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP'] = 'باستثناء IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresss';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. لا يوجد مكان';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'استبعاد أي موانئ مدرجة من المسح. لا يوجد مكان';

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

$GLOBALS["lang"]['Export by Device'] = 'Export by Device';

$GLOBALS["lang"]['Export by Policy'] = 'الصادرات حسب السياسات';

$GLOBALS["lang"]['Export data to'] = 'بيانات التصدير';

$GLOBALS["lang"]['Exporting a Device'] = 'تصدير جهاز';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'الخارجي';

$GLOBALS["lang"]['External Field Name'] = 'الاسم الميداني الخارجي';

$GLOBALS["lang"]['External Field Type'] = 'النوع الميداني الخارجي';

$GLOBALS["lang"]['External Field Types'] = 'الأنواع الميدانية الخارجية';

$GLOBALS["lang"]['external_ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['External Ident'] = 'الهوية الخارجية';

$GLOBALS["lang"]['external_link'] = 'External Link';

$GLOBALS["lang"]['External Link'] = 'External Link';

$GLOBALS["lang"]['extra_columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra Columns'] = 'الكولونيل الإضافي';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'الإبلاغ الإضافي والقائم على الوقت';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'المزيد من قطع الشفرات يتم توليدها من أجل التشويش';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'تنقيح';

$GLOBALS["lang"]['Fail'] = 'الفشل';

$GLOBALS["lang"]['Failed'] = 'فشل';

$GLOBALS["lang"]['Failed Severity'] = 'الشر';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'جزر فوكلاند (مالفيناس)';

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

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Auditing'] = 'مراجعة حسابات الملفات';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'الناتج الملف';

$GLOBALS["lang"]['file_name'] = 'اسم الملف';

$GLOBALS["lang"]['File Name'] = 'اسم الملف';

$GLOBALS["lang"]['File Share Discovery'] = 'File Share Discovery';

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

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['Firmware Revision'] = 'إعادة النظر في البرمجيات';

$GLOBALS["lang"]['First'] = 'أولا';

$GLOBALS["lang"]['First Name'] = 'الاسم الأول';

$GLOBALS["lang"]['first_run'] = 'الجولة الأولى';

$GLOBALS["lang"]['First Run'] = 'الجولة الأولى';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'التركيز الأول على ما تحتاجه النهاية هو: هل تحاول خط الأساس للبرامجيات، أو المستخدمين، أو بيانات النيتستات؟ ما هو الشيء المهم (الأشياء) للمقارنة والإبلاغ عنه؟';

$GLOBALS["lang"]['FirstWave'] = 'الموجة الأولى';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'الوظائف الثابتة';

$GLOBALS["lang"]['Fixing the Issue'] = 'حل المشكلة';

$GLOBALS["lang"]['Floor'] = 'الفيضانات';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'متابعة أي من الصلات الواردة أدناه واكتشاف كيفية استخدام قاعدة البيانات المفتوحة لمعرفة <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['For'] = 'For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For <i>النوع</i> تأكد من اختيار خط الأساس، وبالنسبة للمجموعة، ينبغي أن تختار مجموعة من الأجهزة، إذا كان ذلك ينطبق على خط الأساس هذا، التي تمثل أفضل الوسائل لتطبيق خط الأساس ضدها. وهذا سيمنع الدخول الخاطئة.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'من أجل (ديبيان) و(أوبونتو) بما في ذلك وضع شبك للتذكير بتجاوزك';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'ويمكن أن تستخدم شركة SNMP Open-AudIT وثائق التفويض V1 و v2 و v3. ويُستفسر عن هذا الجهاز بصرف النظر عن كونه جهاز توجيه أو تبديل (أجهزة شبكة نظامية) أو حاسوباً (لينو وويندوز كثيراً ما يُدير جهازاً للرصد الوطني).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'من أجل مرشد في (كرون) شاهدي صفحة (ويكيبيديا) هذه';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'لاكتشاف البذور، يجب أن أكتشف فقط آي بي في مكان عنوان خاص IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'لاكتشاف البذور، يجب أن أكتشف شركاء التنفيذ فقط على الشبكة الفرعية المختارة.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'لاكتشاف البذور، يجب أن أضغط على الشبكة الفرعية قبل إدارة الاكتشاف.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'من أجل الدخول المتطور لسؤال خام من طراز SQL. كما هو الحال بالنسبة للقراصنة، يجب أن تشمل <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'بالنسبة لكل عملية من العمليات المزروعة، تحدث أدناه.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'على سبيل المثال قد تخلق خط أساس من جهاز تشغيل ريدهات 9 الذي يعمل كأحد خواديم أباتشي الخاصة بك في مجموعة. أنت تعرف أن هذا الخادم الخاص مصمم بالطريقة التي تريدها لكنك غير متأكد إذا كانت الخواديم الأخرى في المجموعة مصممة تماماً خطوط الأساس تمكنك من تحديد هذا';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'على سبيل المثال قد تخلق خط أساس من جهاز تشغيل ريدهات 9 الذي يعمل كأحد خواديم أباتشي الخاصة بك في مجموعة. أنت تعرف أن هذا الخادم الخاص مصمم بالطريقة التي تريدها لكنك غير متأكد إذا كانت الخواديم الأخرى في المجموعة مصممة تماماً القاعدة تمكنك من تحديد هذا';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'للحصول على مزيد من التفاصيل، انظر الويكي.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'بالنسبة لرخص غير دائمة، عندما تنتهي الرخصة.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'وللحصول على معلومات أكثر تفصيلاً، تحقق من قاعدة المعارف المفتوحة العهد.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'ولمزيد من المعلومات يرجى الاطلاع على الدليل التالي الذي يتضمن شريط فيديو. الاستخدام';

$GLOBALS["lang"]['For more information, see'] = 'لمزيد من المعلومات، انظر';

$GLOBALS["lang"]['form_factor'] = 'Form Factor';

$GLOBALS["lang"]['Form Factor'] = 'Form Factor';

$GLOBALS["lang"]['format'] = 'الشكل';

$GLOBALS["lang"]['Format'] = 'الشكل';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'مراجعة سحابية كاملة مع جميع التفاصيل من مراجعة حسابات مفتوحة وتفاصيل مثل نوع الآلة وحجمها.';

$GLOBALS["lang"]['function'] = 'المهمة';

$GLOBALS["lang"]['Function'] = 'المهمة';

$GLOBALS["lang"]['GROUP BY'] = 'المجموعة';

$GLOBALS["lang"]['Gabon'] = 'غابون';

$GLOBALS["lang"]['Galician'] = 'غاليشي';

$GLOBALS["lang"]['Gambia the'] = 'غامبيا';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'تحليل الثغرات (اختياري)';

$GLOBALS["lang"]['gateway'] = 'البوابة';

$GLOBALS["lang"]['Gateway'] = 'البوابة';

$GLOBALS["lang"]['gateways'] = 'البوابة';

$GLOBALS["lang"]['Gateways'] = 'البوابة';

$GLOBALS["lang"]['Generated By'] = 'المولد';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'الخرائط الجغرافية';

$GLOBALS["lang"]['Georgia'] = 'جورجيا';

$GLOBALS["lang"]['German'] = 'ألمانيا';

$GLOBALS["lang"]['Germany'] = 'ألمانيا';

$GLOBALS["lang"]['Get Lat/Long'] = 'الحصول على لات/لونج';

$GLOBALS["lang"]['Get News'] = 'احصل على الأخبار';

$GLOBALS["lang"]['Get Started'] = 'ابدأ';

$GLOBALS["lang"]['Get a Free License'] = 'الحصول على رخصة مجانية';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'الحصول على معرفة مع منصة فتح-أوديت واستكشاف بعض من خصائصها.';

$GLOBALS["lang"]['Getting Started'] = 'بدأت';

$GLOBALS["lang"]['Ghana'] = 'غانا';

$GLOBALS["lang"]['Gibraltar'] = 'جبل طارق';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Global area network'] = 'الشبكة العالمية للمناطق';

$GLOBALS["lang"]['Go'] = 'إذهب';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'عودوا إلى خادمكم المفتوح وخلقوا اكتشافاً مع عنوان (ويندوز) المُستهدف كشبكة فرعية (هذا سينقذ الحاجة لاكتشاف الشبكة الفرعية بأكملها مرة أخرى). أديروا الاكتشاف، وأحيطوا علماً بأي قضايا. لاتخاذ الإجراءات المناسبة لأي مسائل وجدت.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'اذهبوا إلى الهدف (ويندوز بي سي) (أو استخدموا (آر بي دي) و سجلوا كمستخدم استخدمه فريق الإبداع';

$GLOBALS["lang"]['Go to menu'] = 'الذهاب إلى قائمة الطعام';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'الذهاب إلى <i>التطبيقات</i> - <i>تسجيلات الطلبات</i> بند القائمة على اليسار ابحثوا عن (افتحوا الباب) اضغطي على المدخل المفتوح في القائمة (تدعي أنكِ سميتِ التطبيق مفتوحاً)';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'الذهاب إلى <i>شهادات وأسرار</i> بند القائمة <i>Manage</i> في قائمة الوسط';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'الذهاب إلى <i>إشارة واحدة</i> بند قائمة الطعام ونقر حركة تحرير السودان <i>اختيار طريقة واحدة للإشارة</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON وثائق التفويض';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API المفتاح';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'عظيم، ثم يمكنك المساعدة! أرسل أولاً ووجّه النص الوارد في مذكرة التفاهم وما ينبغي عرضه. سندرج ذلك في ملف اللغة الذي سيمضي قدماً، الترجمة محسنة ولا داعي للقلق بشأن تحديثها لكل إطلاق';

$GLOBALS["lang"]['Greater Than'] = 'أكبر من';

$GLOBALS["lang"]['Greater Than or Equals'] = 'أكبر من أو يساوي';

$GLOBALS["lang"]['Greece'] = 'اليونان';

$GLOBALS["lang"]['Greek'] = 'اليونانيون';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'وتُستخدم المجموعات كقوائم بسيطة من الأجهزة تتطابق مع الظروف المطلوبة. If requested using JSON they return a list of <i>الأجهزة</i> فقط وإذا طُلب منهم استخدام واجهة الويب، فإنهم يعيدون قائمة المعالم القياسية. ويمكن استخدام المجموعات للتكامل والخطوط الأساسية وغيرها من الأصناف.';

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

$GLOBALS["lang"]['Hardware'] = 'المعدات';

$GLOBALS["lang"]['hardware_revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Hardware Revision'] = 'مراجعة البرامج';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'هل طبقت هذه السياسة في هذه المنظمة.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'اجعل الوكيل دائماً يدير آخر نص مراجعة الحسابات (إذا قمت بتحديث نظام مراجعة الحسابات المفتوحة ونسخ النصوص يدوياً إلى الأهداف،';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'اجعل مستخدمك يفتح القيادة بسرعة <i>تشغيل مدير البرنامج</i>) استريحوا من تحتكم بسرعة لتحميل العميل';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'جزيرة هارد وجزر ماكدونالد';

$GLOBALS["lang"]['Hebrew'] = 'العبرية';

$GLOBALS["lang"]['height'] = 'مرتفع';

$GLOBALS["lang"]['Height'] = 'مرتفع';

$GLOBALS["lang"]['Height in RU'] = 'مرتفع في الجبهة المتحدة الثورية';

$GLOBALS["lang"]['Help'] = 'النجدة';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'المساعدة والأسئلة المتكررة';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'المساعدة في إدارة المخاطر الأمنية المتعلقة بالمعلومات والتخفيف من حدتها';

$GLOBALS["lang"]['Hide Audit Window'] = 'مراجعة الحسابات';

$GLOBALS["lang"]['high'] = 'عالية';

$GLOBALS["lang"]['High'] = 'عالية';

$GLOBALS["lang"]['High Availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'الكرسي الرسولي (ولاية مدينة فياتيان)';

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

$GLOBALS["lang"]['hour'] = 'Hour';

$GLOBALS["lang"]['Hour'] = 'Hour';

$GLOBALS["lang"]['How Does It Work?'] = 'كيف يعمل؟';

$GLOBALS["lang"]['How Does it Work?'] = 'كيف يعمل؟';

$GLOBALS["lang"]['How Long Does it Take'] = 'كم من الوقت يستغرق';

$GLOBALS["lang"]['How and Why is'] = 'كيف ولماذا';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'كيف و لماذا فتحت أكثر أمناً';

$GLOBALS["lang"]['How do they work?'] = 'كيف يعملون؟';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'كيف يمكن لجهاز كشف النبلاء أن يعرف شركاء التنفيذ؟';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'كم استغرق الأمر من الوقت لتنفيذه';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'كم من الوقت يجب أن تنتظر (نامب) استجابة لكل جهاز';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'كم عدد الدوائر التي تغذي هذا الرف';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'كم من السياسات تؤدي إلى فشل';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'كم من السياسات تؤدي إلى تمرير';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'كم عدد جوارب الطاقة في هذا الرف';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'كم عدد وحدات الرف في المرتفع هو هذا الرف';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'كم من الوقت يجب على المجمع أن يطلب من الخادم مهمة';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'How should we select devices to be integrated (using an Attribute, Query or a Group).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'كيفية المقارنة';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'تفسير قابل للقراءة البشرية للضعف.';

$GLOBALS["lang"]['Hungarian'] = 'هنغاريا';

$GLOBALS["lang"]['Hungary'] = 'هنغاريا';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'لقد قرأت الاتحاد الأوروبي';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'آمل أن تكون هذه الوظيفة قد خفت من أي مخاوف لديك بشأن فتح الباب والأمن. إذا كان لديك أي أسئلة على الإطلاق، من فضلك لا تتردد في الاتصال بنا هنا في أول وايف. ونحن دائما سعداء لمناقشة شواغلكم واحتياجاتكم. وربما إن لم يكن سؤالك شيئاً قد تناولته هنا، يمكنني أن أضيفه إلى هنا للمستعملين المستقبليين';

$GLOBALS["lang"]['id'] = 'الهوية';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANT';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP Address';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set by';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'تحديد أصول المعلومات';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'تحديد الأطراف المهتمة ومتطلباتها';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'تحديد أصحاب المصلحة الرئيسيين وتحديد الأدوار';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'تحديد الجهاز (الأجهزة) الذي هو نموذجك، أو <i>صورة ذهبية</i> تريد مقارنة أجهزة مماثلة ضدها';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'تحديد وتقييم المخاطر الأمنية';

$GLOBALS["lang"]['If'] = 'إذا';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'إذا تم اكتشاف جهاز منفرد باستخدام <i>جهاز الكشف</i> الرابط على صفحة الأجهزة، نتحقق أولاً إذا تم اكتشاف هذا الجهاز سابقاً (عن طريق الاكتشاف) وإذا كان الأمر كذلك، نستخدم خيارات الاكتشاف من ذلك المسح. إذا لم يتم اكتشافه من قبل، نرجع إلى صنف التكوين... اكتشاف...';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'إذا كان المرفأ يستجيب بالملف، إذا اعتبرناه متاحا.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'إذا كان الميناء يستجيب مع فتحه، إذا اعتبرناه متاحا.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'إذا لم يكن هناك جهاز نائي في أجهزة مختارة مفتوحة العضوية، إذا حذفناه من النظام الخارجي.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'إذا تغير جهاز مفتوح العضوية، إذا قمنا بتحديث النظام الخارجي.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'إذا كان جهاز مفتوح العضوية ليس على النظام الخارجي، ينبغي أن نصنعه.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'إذا أبلغ وكيل أن شركته الأولى موجودة في هذه الشبكة الفرعية، قم بالتصرفات.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'وإذا لم يحدد أي مشغّل، يكون التخلف عن السداد =. وينبغي أن تكون الممتلكات مؤهلة تأهيلاً كاملاً - أي نوع من الأجهزة.';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'وإذا لم تكن هناك قيمة، تقدم هذه القيمة. EG: for system.nmis_group /configuraion. مجموعة نستخدمها';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'وإذا ما تم وضع مجموعة من أعمدة الأجهزة المحددة التي اختار هذا المستخدم رؤيتها، إلا في حالة تقصير التشكيل.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'If the OS Family (as reported by the tool) contains this item, pass.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. يمكنك اختيار هذا لتحديد أي مجموعة يجب أن تستمر المهمة. ولا يُدعم سوى مهام الاكتشاف للمجمعين.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'إذا كانت عائلة العميل (أو إس) غير حساسة، تحتوي على هذا الخيط، قم بالتصرفات.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'وإذا لم يتم العثور على الثنائي في أي من هذين الموقعين، ستُعرض رسالة تحذيرية في المعبد.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'إذا استوفيت الشروط التالية:<br/><ul><li>a Role has assigned ad_group</li><li>أورغ لديه مجموعة مخصصة</li><li>A LDAP (سيرفر) لديه استخدام...</li><li>a user exists in LDAP (be it active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>ويمكن لهذا المستخدم أن يسجل دخوله دون حساب في قاعدة البيانات المفتوحة التي تحتاج إلى إنشاء. وسيستفسر الفريق المفتوح باب العضوية عن خطة العمل الدولية المعنية، وإذا كان المستخدم في المجموعات المطلوبة وليس في قاعدة البيانات المفتوحة، فإن خصائص مستخدميه (الاسم الكامل، البريد الإلكتروني، الأدوار، أو الخرق، وما إلى ذلك) في إطار قاعدة البيانات المفتوحة، ستكون مأهولة بالسكان بصورة تلقائية، وسوف يتم تسجيلها.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'وإذا كان الحقل المحلي صحيحاً (باول) أو ي (بسترينغ) أو ي (بسترينغ) أو 1 (بتر) فإنه يحدد البيانات الخارجية إلى 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'إذا كان الـ (آي بي) الرئيسي (كما أبلغ عنه الجهاز) في هذه الشبكة الفرعية، مرر.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> جاهز، المستعمل سيخلق. وإذا كانت موجودة، فإن تفاصيل مثل البريد الإلكتروني، والاسم الكامل، وما إلى ذلك ستكون مكتظة بالسكان.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'إذا لم يكن لدى المستخدم وثائق تفويض صحيحة أو لم يكن على الأقل في دور واحد مفتوح العضوية ومجموعة (عندما يستخدم <code>use_authorisation</code>() ستنخفض قاعدة البيانات المفتوحة إلى استخدام التفاصيل المحلية للمستعملين المفتوحي العضوية ومحاولة التوثيق والإذن هناك. وفي غياب ذلك، سيحرم المستخدم من الوصول.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'إذا لم يكن لدى المستخدم تسجيل الدخول إلى "أوديت" إمكانية البحث، يمكنك استخدام حساب آخر';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'إذا لم يكن لدى المستعمل الدخول إلى "إفتتاح آيد" إمكانية البحث عن "إفتتاح" يمكنك استخدام حساب آخر استخدمي الحساب و كلمة السر لضبط هذا';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'وإذا لم تُحدد القيمة، فإن المصباح الحالي سيُستخدم.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'وإذا حددت القيمة، ستستخدم قيمة الزمان.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'إذا لم ينجح هذا التغيير بالنسبة لك، كل شيء لا يضيع. وقد أضفنا بندا في التشكيلات (من البداية إلى عدم التقصير، لذلك لن يستخدم هذا الخيار الجديد خارج الصندوق) يسمى الاكتشاف (استخدام / org_id_match). إذا غيّرتَه إلى y ثمّ الأورغيد المُنْتدب إلى الجهازِ بالإكتشافِ سَيُستعملُ في قواعدِ المطابقةِ ذات الصلةِ.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'إذا مرت هذه الدقائق الكثيرة (أو أكثر) منذ آخر مرة رأى الخادم الجهاز، مرر.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'إذا مرّت هذه الدقائق الكثيرة أو أكثر منذ أن اتصل الجهاز بالخادم، قم بالتصرفات.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'وإذا حدث ذلك، فإن المسألة التي تراها تتعلق بمراقبة الطاولة التي تستخدم على الصفحة الشبكية. إنها تخزن فقط في الذاكرة صندوق الشيكات للصفحة الحالية التي يُنظر إليها إذا قمت باختيارات، ثم استدعي إلى الأمام/الخلف تلك الاختيارات سوف تضيع. يمكنك، مع ذلك، تحقيق ما تريد عن طريق توسيع عدد الأجهزة المعروضة على كل صفحة. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'إذا إكتشفنا برنامج إدارة (سان) هل يجب أن نجري عملية كشف آلي قبل الاستفسار';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'إذا أضفتَ نوع الموقع، أضف تلك الرموز إلى';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'إذا أضفت جهازاً من نوعه، لإظهار الأيقونة المرتبطة به سيكون عليك أن تنسخ يدوياً الملف المزيف إلى الدليل';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'إذا كنت زبون أول واف مدعوم، بعض الأشياء سوف تساعدك أسهل. افتح تذكرة دعم مع أول وايف واربط الشعار يشمل أيضاً الناتج من زر الدعم على اليمين الأعلى';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'إذا كنت زبون مدعوم وفتح تذكرة دعم مع أول وايف، يرجى إرفاق هذه الملفات.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'إذا كان لديك مشاكل مع مفاتيح خرائط جوجل أو شركتك ليس لديها إمكانية لخلق مفاتيح خرائط جوجل';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'إذا كنت على ويندوز أو خادم نظام المعلومات الخاص بك هو جهاز التحكم عن بعد، سوف تحتاج إلى إمداد يو إل، اسم المستخدم وكلمة السر للدخول إلى ذلك الخادم.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'إذا كنت على نطاق واسع لائق أو اتصال عبر الإنترنت، وأنا أوصي دائما باستخدام - T4 (Aggressive). بعض الناس يحبون (تي 5) رغم أنه عدواني جداً على ذوقي People sometimes specify - T2 (Polite) because they think it is less likely to destroy hosts or because they consider themselves to be polite in general. غالباً ما لا يدركون كم هو بطيء فحصهم قد يستغرق عشر مرات أطول من المسح الافتراضي إن حوادث تحطم الآلات ومشاكل الضمادات نادرة مع خيارات التوقيت الافتراضي - T3 (Normal) ولذا فإنني أوصي بذلك عادة لأجهزة المسح الحذر. والكشف عن النسخ المخفف أكثر فعالية بكثير من التلاعب بقيم التوقيت في الحد من هذه المشاكل.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'إذا كنت تدير نظام (ريدهات) أو (سنتيوس) و قمت برفع مستوى (نامب) من فضلك أعد تشغيل الوحدة الخاصة';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'إذا كنت تدير خادما مفتوحا في لينكس، هذا لا يؤثر عليك.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'إذا كنت تستخدم فتحة الدخول على ويندوز أو إذا كان خادم نظام المعلومات الخاص بك ليس على خادمك المفتوح باب العضوية (في حالة بعض تركيبات لينكس)، سوف تحتاج إلى إمداد البعثة بوثائق التفويض و URL إلى جهاز الأمن الوطني عن بعد - ولكن هذا كل شيء! نعم - حتى التكامل بين نظام المعلومات الإدارية الوطني والمنظمة المفتوحة تعمل مع مؤسسة ويندوز المفتوحة الآن';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'إذا اخترت مجموعة، فمن المقرر أن تنفذ على الحدود الـ 5 دقيقة القادمة.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'إذا قمتِ عادةً بتصميم أجهزة مُعينة (إلى (يورج) والبند التكويني مُمكّن، حينها سيُستخدم الـ(أورغيد';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'إذا كنت لا تضع عادة أجهزة - مرسلة إلى / / / / / / / / / / / / / / / / / / / / / / / / / / / نحن فقط نتحقق من استخدام الـ(أورغايد) إذا كان قد تم اكتشافه (أو يدوياً في نص مراجعة الحسابات) وتمكنت من تشكيله.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'إذا سمحتم للتشكيل، إستخدموا الاكتشافات لتخصيص الـ(أورغ) ثم تغيير جهاز (أورغايد) بعد اكتشافه، فربما سيكون لديكم جهاز جديد يُخلق في المرة القادمة التي يُجرى فيها الاكتشاف. في هذه الحالة، ربما يجب عليك فقط أجهزة غير محددة تم تعيينها إلى org قبل القيام باكتشافات لاحقة هذا بسبب (في هذه الحالة) أنكِ أخبرتِ (افتح الباب) <i>هذه الأجهزة من هذا الاكتشاف تنتمي إلى (أورغ إكس)<i>لكن بعد ذلك غيّر أورغ الجهاز لقد غيرت معلومات الأجهزة المخزنة في هذه الحالة، لم يعد هناك جهاز تابع لـ(أورغ إكس)، لذا نصنع جهازاً جديداً.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'إذا كان لديك برمجيات مضادة للفيروس تعمل، السماح لخدمات أوبمانتيك (أمكد)، وأباتشي (الشارع 2-2)، وشركة ماي إس كي إل (Msql) للبدء والركض بشكل آلي، أمر أساسي. وتستخدم هذه الخدمات من قبل شركة &quot; Open-AudIT &quot; . يجب أن تفعل هذا مرة واحدة إذا كان برنامجك المضاد للفيروس يحفزك على فتح قاعدة البيانات، يرجى إرسال إلى المنتديات أو إرسال البريد الإلكتروني لدعم اسم ونسخة برامجك المضادة للفيروس.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'إذا كان لديك وثائق تفويض، يمكنك أن تتوقع كامل كمية المعلومات الممكنة.<br/><br/>ومن الواضح أن أفضل طريقة لاستخدام نظام &quot; أوديت &quot; هي الحصول على وثائق تفويض عمل للأجهزة التي يتم اكتشافها (سواء كانت شركة WMI أو SSH أو وثائق تفويض شركة SNMP).<br/><br/>كما لدينا صفحة على مراجعة الحسابات بدون وثائق تفويض.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'إذا كنت تُضمّنُ حقلَ "سيد" <strong>و</strong> وسيُحدَّث هذا البند بعدد منه بدلاً من إعداده.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'إذا كنت بحاجة إلى تنظيم وصول الدليل النشط، يمكنك عادة استخدام مثال <code>cn=Users,dc=your,dc=domain,dc=com</code> لك <code>base_dn</code>. ليس هناك حاجة لوضع <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'إذا كنت بحاجة إلى تنظيم وصول مفتوح النطاق لمستعمليك ومستعملين معينين إلى DN عادة <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> ثم عليك أن تجهز <code>base_dn</code> إلى <code>dc=your,dc=domain,dc=com</code> و <code>user_dn</code> إلى <code>uid=@username@@domain,cn=People</code>. الكلمات الخاصة <code>@username</code> و <code>@domain</code> سيتم استبدالها بتفاصيل الدخول التي قدمها مستعملك على صفحة الدخول';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'إذا قمت بالاكتشاف على شبكة فرعية أن الخادم (أو جامع) مركب مباشرة، يمكنك أن تتوقع ما يلي لأجهزة الرد';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'إذا كنت تدير اكتشاف على شبكة فرعية أن سيرفر الخاص بك (أو جامع) لم يتم تركيبه مباشرة، يمكنك أن تتوقع ما يلي لأجهزة الرد';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'إذا اخترت نوع من القائمة، سيظهر حقل إضافي اسمه (فالوز). يجب أن تضع قائمة مفصّلة من القيم القابلة للاختيار هنا هذه ستظهر في صندوق الإنزال عندما يتم تحرير الحقل';

$GLOBALS["lang"]['If you set the values for'] = 'إذا وضعت القيم ل';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'إذا كنت تريد إجبار عملائك على استخدام تشكيلة معينة، يمكنك تزويد هوية العملاء الدخول إلى استخدام، على النحو الوارد أدناه (الاستبدال بالدولار مع عدد دخول العملاء). عندما يتم تركيب هذه العميلة، سوف يتم فحصها مع المصعد و <strong>فقط</strong> تحقق من فرد واحد سمات العملاء (الاختبارات والإجراءات). قد يكون هذا مفيداً إذا كنتِ من الدول الأطراف - أن تُنشئي مدخلاً لزبون معين وتُستخدم أجهزةهم كل هذا الدخول، الذي يُسندهم إلى أورغ ومكان.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'إذا كنت ترغب في حفر وتكييف التكامل، نضغط الزر المتطور (ومحاولة عدم الإطاحة بها)';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'إذا كنت ترغب في تشغيل الاكتشاف على جهاز مزود خارجي، اختيار الخيار وعندما يتم خلق التكامل، لذلك الاكتشاف.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'إذا كنت ترغب في استخدام النص خارج الاكتشاف لقد خلقنا نقطة نهاية أخرى تدعى <i>النصوص</i>. انظر الوثائق';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'إذا لم يكن مستعملك <i>تشغيل مدير البرنامج</i> ولا يزال بإمكانهم تحميل العميل (المصدر الأول أعلاه) حقوقاً، وتوجيهه إلى تقديم مراجعة للحسابات على النحو التالي. ستكون مراجعة حسابات غير مباشرة بدون أن يتم تركيب العميل أو تحديد مواعيده';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore Invalid SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignored';

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

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'استيراد {الاستعمار} باستخدام CSV';

$GLOBALS["lang"]['improvement_opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['Improvement Opportunities'] = 'تحسين الفرص';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Improves business continuity and resilience';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'في دقّة ثانية أو نافذة تذهب إلى حزام الأمان الخاص بك ونقر <i>Create App Integration</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'في دقّة ثانية أو إشارة نافذة على الخاص بك';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'وفي رأيي الشخصي، فإن أفضل طريقة للعثور على كل بند من بنود شبكتكم ومراجعته هي اكتشاف البذور لكل شبكة فرعية تقتصر على تلك الشبكة الفرعية (استخدام وثائق التفويض). بذور الاكتشافات تستخدم مفاتيح تبديل وجهاز توجيه وجهاز كمبيوتر MAC لا تفوت جهاز واحد. If it is connected to the network and uses TCP/IP, a shift/router/ computeruter has to know it is there - thats just how TCP/IP works. قم بتجميع ذلك مع المرافئ التقليدية و/أو مرافئ المشردين داخلياً و بعدها يمكنك تحديد نوع الجهاز أيضاً لكن هذا أفضلي الشخصي';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'لكي تتمكن من تطبيق إذن المستخدم على البنود، نكلف مستخدم <code>WHERE @filter</code>. إن لم تستخدمي هذا الشكل، فإن استمارة الإستفسارات ستلقي تحذيراً. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the form item for <i>متقدم</i> تم تمكينه';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'من أجل تمكين خرائط جوجل ستحتاجين إلى مفتاح جوجل تابعي هذه الرابطه حساب جوجل';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'من أجل استخدام نظام (أزور ريست)، ستحتاجون إلى إنشاء تطبيق دليل فعال يستخدم للتوثيق.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'ومن أجل استخدام هذه الوظيفة، يجب تمكينها في التشكيلة - النقرة';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In the (comma seperated) list';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'في حالة <code>in</code> و <code>notin</code>ينبغي أن ترفق القيم بين قوسين معقوفين وأن تفصلها عن استخدام فاصلة (فقط فاصلة، وليس فاصلة، ثم الفضاء).<br/><br/>مع هؤلاء المشغلين يمكنك التصفية بشكل شامل<br/><br/>عندما تضيف البيانات والمرشح على الأعمدة المتعددة، تلك الأعمدة مجتمعة باستخدام <strong>و</strong>. لا يمكنك التصفية باستخدام <strong>أو</strong> حالة مع إدراج <code>notin</code>يجب أن تكون قادراً على عمل معظم البحث وبالنسبة للذين يحتاجون حقا إلى اختيارات غير مدعومة ومعقدة، يمكنك دائما كتابة استفسار حقيقي.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: accreditation. وثائق التفويض - عمود وثائق التفويض في جدول وثائق التفويض، ينبغي أن تستخدم الشكل';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>)';

$GLOBALS["lang"]['Inactive'] = 'الخاملة';

$GLOBALS["lang"]['Include'] = 'Include';

$GLOBALS["lang"]['Incomplete'] = 'Incomplete';

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

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'أدخل دخول جديد';

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

$GLOBALS["lang"]['Install Support'] = 'الدعم';

$GLOBALS["lang"]['installed_by'] = 'Installed by';

$GLOBALS["lang"]['Installed By'] = 'Installed by';

$GLOBALS["lang"]['installed_on'] = 'تم تركيبها';

$GLOBALS["lang"]['Installed On'] = 'تم تركيبها';

$GLOBALS["lang"]['Installing'] = 'التركيب';

$GLOBALS["lang"]['Installing on Linux'] = 'تركيب لينكس';

$GLOBALS["lang"]['Installing on MacOS'] = 'تركيب ماكاو';

$GLOBALS["lang"]['Installing on Windows'] = 'تركيب النوافذ';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

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

$GLOBALS["lang"]['integrations_id'] = 'ID';

$GLOBALS["lang"]['Integrations ID'] = 'ID';

$GLOBALS["lang"]['integrations_log'] = 'مرفق التكامل';

$GLOBALS["lang"]['Integrations Log'] = 'مرفق التكامل';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'ويمكن تحديد مواعيد للتكامل على النحو المطلوب. هذا يترك للمستعمل';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'ويمكن تحديد عمليات التكامل حسب الاكتشافات، والأشكال، وغيرها.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'لوحات مظلة تفاعلية';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'وتوفر لوحات المتابعة التفاعلية وضوحا فوريا في حالة مخزون الشبكة مما يسمح لأفرقة تكنولوجيا المعلومات بكشف الأجهزة المكتشفة حديثا وسلوك الأجهزة غير العادي في لمحة.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'الهوية المشتركة';

$GLOBALS["lang"]['Interface ID'] = 'الهوية المشتركة';

$GLOBALS["lang"]['interface_type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Interface Type'] = 'نوع المواجهة';

$GLOBALS["lang"]['Internal'] = 'داخلي';

$GLOBALS["lang"]['Internal Audit'] = 'المراجعة الداخلية للحسابات';

$GLOBALS["lang"]['Internal Audit & Review'] = 'المراجعة الداخلية للحسابات';

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

$GLOBALS["lang"]['Irish'] = 'أيرلندا';

$GLOBALS["lang"]['Is FRU'] = 'هو FRU';

$GLOBALS["lang"]['is_fru'] = 'هو فرو';

$GLOBALS["lang"]['Is Fru'] = 'هو فرو';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'هل خادم نظام المعلومات الإدارية الوطني محلي (على هذا الخادم المفتوح) أم بعيد؟';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'هل هذا الحساب نشط؟ إذا تم تحديد <code>n</code>المستعمل لا يستطيع الدخول';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'هل هذا السؤال مقصور على الزبائن المرخصين';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'هل هذه المهمة مكنت (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'جزيرة مان';

$GLOBALS["lang"]['Israel'] = 'إسرائيل';

$GLOBALS["lang"]['Issue'] = 'المسألة';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['issuer_name'] = 'اسم المصدر';

$GLOBALS["lang"]['Issuer Name'] = 'اسم المصدر';

$GLOBALS["lang"]['Issues'] = 'المسائل';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'هو <i>فقط يعمل</i> مع البعثة الوطنية';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'وهو متاح في مينو النجدة';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> يجب أن يكون مطابقاً تماماً (وليس فارغاً) من أجل فتح قاعدة البيانات لتحديد أن الجهاز المكتشف يطابق جهازاً بالفعل في قاعدة البيانات. إذا لم يكن هناك أي من الممتلكات علامة <i>y</i> تطابق، ثمّ إدخال جهاز جديد، الذي يُمْكِنُ أَنْ يُؤدّيَ إلى ازدواجية دخول الأجهزةِ. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing tool may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'وليس من غير المألوف أن يكون هناك مجال متداخل للعناوين في منظمة معينة. ليس مثالياً لكن ليس غير شائع';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'من الشائع جداً أن يقوم المصنعون من الدرجة الثانية بألا يضعوا هذا <i>صفر</i>أو حتى كل <i>واو</i>S.';

$GLOBALS["lang"]['Italian'] = 'إيطاليا';

$GLOBALS["lang"]['Italy'] = 'إيطاليا';

$GLOBALS["lang"]['Items not in Baseline'] = 'البنود غير المدرجة في خط الأساس';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

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

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'المفتاح';

$GLOBALS["lang"]['Key Components'] = 'العناصر الرئيسية';

$GLOBALS["lang"]['Key Password (optional)'] = 'كلمة السر الرئيسية (اختيارية)';

$GLOBALS["lang"]['keys'] = 'المفاتيح';

$GLOBALS["lang"]['Keys'] = 'المفاتيح';

$GLOBALS["lang"]['Kiribati'] = 'كيريباس';

$GLOBALS["lang"]['Korea'] = 'كوريا';

$GLOBALS["lang"]['Korean'] = 'كوريا';

$GLOBALS["lang"]['Kuwait'] = 'الكويت';

$GLOBALS["lang"]['Kyrgyz'] = 'قيرغيزستان';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'جمهورية قيرغيزستان';

$GLOBALS["lang"]['LDAP Group'] = 'مجموعة برنامج المساعدة الإنمائية';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'تم البحث عن هذا المستعمل وتم العثور على حسابهم';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'تم البحث عن هذا المستعمل ولم يتم العثور على حسابهم تحقق من سجلات الخادم وقد نجحت وثائق تفويض المستخدمين، ولكن لم يعثر على المستخدم. أيضاً تأكدي من أنكِ حددتِ المواصفات الصحيحة للقاعدة (دي إن) عندما قمتِ بخلق خادم شرطة (لوس أنجلوس)';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'أخيراً هو (وامى) وفيما يتعلق بالويندوز كما هو الحال في لينكس، يفضل المستخدم الذي يحصل على مستوى مدير البرنامج (انظر تشكيلة العملاء المستهدفة على الويكي).';

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

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'لبنان';

$GLOBALS["lang"]['legal_requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Legal Requirements'] = 'الشروط القانونية';

$GLOBALS["lang"]['Lesotho'] = 'ليسوتو';

$GLOBALS["lang"]['Less Than'] = 'أقل من';

$GLOBALS["lang"]['Less Than or Equals'] = 'أقل من أو يساوي';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'دعنا نَحْصلُ على قطعِ الأشجارِ إلى debug. نسخ الملف:';

$GLOBALS["lang"]['level'] = 'الرتبة';

$GLOBALS["lang"]['Level'] = 'الرتبة';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Level of privileges needed to exploit (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'ليبريا';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'المكتبات (الرمز الذي قد يتضمنه برنامج آخر). وهذه هي عادة بنود مثل تمديدات برنامج &quot; ووردب &quot; ، والتمديدات المفاجئة، ومكتبات &quot; أندرويد &quot;/ &quot; إيفون &quot;/مكتبات &quot; ويندوز &quot; ، ومكتبات &quot; بيثون &quot; ، وما إلى ذلك.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'الجماهيرية العربية الليبية';

$GLOBALS["lang"]['License'] = 'الترخيص';

$GLOBALS["lang"]['License Key'] = 'مفتاح الترخيص';

$GLOBALS["lang"]['License Required'] = 'الترخيص المطلوب';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'المستعملون المرخصون أحرار في إضافة أو تعديل القواعد كما تراه مناسباً إذا كان لديك جهاز مع OID SNMP الذي لا يطابق نموذج بالفعل في الملف - الآن يمكنك إضافة ذلك بسهولة. لا مزيد من الانتظار لنا لتقديم رقعة وإضافتها إلى قاعدة الرموز بالنسبة لك.<br/><br/>عندما تُنشئ قاعدة دخول، ستحتاج إلى تقديم اسم وقائمة بالمدخلات والنواتج. وتُخزَّن المدخلات والنواتج باعتبارها صفائف تابعة للشبكة المشتركة بين الوزارات في قاعدة البيانات.<br/><br/>وللمدخلات جدول وعزو ومشغل وقيمة. وعند تنفيذ الشرط، يعمل على النحو التالي: وإذا كان الجدول بدولارات الولايات المتحدة، فإن قيمة المشغل بدولارات الولايات المتحدة ستطبق النواتج.<br/><br/>وترد أدناه قاعدة نموذجية لمطابقة الـ (SNMP OID) ووضع النموذج.<br/>';

$GLOBALS["lang"]['Licenses'] = 'التراخيص';

$GLOBALS["lang"]['Liechtenstein'] = 'ليختنشتاين';

$GLOBALS["lang"]['Like'] = 'مثل';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'ومثل معظم الصفات الأخرى، يمكن تحرير حقول إضافية بالجملة. استخدم وظيفة (بولك إيديت) كما تفعل عادةً وسترى أن الحقول الإضافية متاحة للمدخلات';

$GLOBALS["lang"]['Like versus Equals'] = 'مثل ضد المساواة';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'يجب أن تعود الرسوم البيانية أو تاريخي، أو وصفي أو وصفي وإحصاءي.';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'الملفات المترابطة';

$GLOBALS["lang"]['links'] = 'الروابط';

$GLOBALS["lang"]['Links'] = 'الروابط';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'ويربط هذا الاكتشاف بالسحابة المرتبطة به (إذا لزم الأمر). الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'الروابط إلى <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'الروابط إلى <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'الروابط إلى <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'لينكس';

$GLOBALS["lang"]['Linux Packages'] = 'أكياس لينكس';

$GLOBALS["lang"]['List'] = 'القائمة';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'List All NMAP Ports, Protocols and Programs for each Device';

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

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['Log Line'] = 'خط التماس';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'التناوب';

$GLOBALS["lang"]['Log Rotation'] = 'التناوب';

$GLOBALS["lang"]['log_status'] = 'الوضع';

$GLOBALS["lang"]['Log Status'] = 'الوضع';

$GLOBALS["lang"]['Logging in'] = 'الدخول';

$GLOBALS["lang"]['Logical Cores '] = 'Cores ';

$GLOBALS["lang"]['logical_count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logical Count'] = 'العد التنازلي';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'اللوز';

$GLOBALS["lang"]['longitude'] = 'الطول';

$GLOBALS["lang"]['Longitude'] = 'الطول';

$GLOBALS["lang"]['low'] = 'منخفض';

$GLOBALS["lang"]['Low'] = 'منخفض';

$GLOBALS["lang"]['Lower Case'] = 'الحالة الدنيا';

$GLOBALS["lang"]['Lowercase Hostname'] = 'الاسم المضيف الأدنى';

$GLOBALS["lang"]['Luxembourg'] = 'لكسمبرغ';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC المصانع';

$GLOBALS["lang"]['mac'] = 'ماك';

$GLOBALS["lang"]['Mac'] = 'ماك';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'مجموعات ماكاو';

$GLOBALS["lang"]['Macao'] = 'ماكاو';

$GLOBALS["lang"]['Macedonia'] = 'مقدونيا';

$GLOBALS["lang"]['Madagascar'] = 'مدغشقر';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'الاحتفاظ بسجلات تقييمات المخاطر ومعالجتها';

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

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'تراخيص الحمل';

$GLOBALS["lang"]['Manage in NMIS'] = 'إدارة نظام المعلومات الإدارية المتكامل';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'الحوادث وعدم المطابقة';

$GLOBALS["lang"]['Managed'] = 'Managed';

$GLOBALS["lang"]['managed_by'] = 'Managed by';

$GLOBALS["lang"]['Managed By'] = 'Managed by';

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

$GLOBALS["lang"]['Match Order'] = 'ترتيب ماتش';

$GLOBALS["lang"]['Match Process'] = 'عملية ماتش';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'محاسبة';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'أجهزة المطابقة - بما في ذلك أورغيد';

$GLOBALS["lang"]['Matching Linux Devices'] = 'مطابقة أجهزة لينكس';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'تجري المطابقة حسب الترتيب التالي';

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

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'ويتخذ التدابير اللازمة لاحتمال التعرض للهجوم، ويقوم على أساس الحالة الراهنة لتقنيات الاستغلال، ويستغل توافر الرموز، أو الاستغلال النشط &quot; في المستقبل &quot; .';

$GLOBALS["lang"]['medium'] = 'متوسطة';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'شبكة منطقة العاصمة';

$GLOBALS["lang"]['Mexico'] = 'المكسيك';

$GLOBALS["lang"]['Micronesia'] = 'ميكرونيزيا';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['Microtime'] = 'العملات البالغة الصغر';

$GLOBALS["lang"]['minute'] = 'دقيقة';

$GLOBALS["lang"]['Minute'] = 'دقيقة';

$GLOBALS["lang"]['Minutes'] = 'دقائق';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'منذ آخر مراجعة للحسابات هي أكثر من';

$GLOBALS["lang"]['model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['Model'] = 'النموذج النموذجي';

$GLOBALS["lang"]['model_family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['Model Family'] = 'نموذج الأسرة';

$GLOBALS["lang"]['Modified'] = 'Modified';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modifying an Existing Script';

$GLOBALS["lang"]['module'] = 'الوحدة';

$GLOBALS["lang"]['Module'] = 'الوحدة';

$GLOBALS["lang"]['module_index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Module Index'] = 'مؤشر النموذج';

$GLOBALS["lang"]['Modules'] = 'Modules';

$GLOBALS["lang"]['Moldova'] = 'مولدوفا';

$GLOBALS["lang"]['Monaco'] = 'موناكو';

$GLOBALS["lang"]['Monday'] = 'الاثنين';

$GLOBALS["lang"]['Mongolia'] = 'منغوليا';

$GLOBALS["lang"]['monitor'] = 'مرصد';

$GLOBALS["lang"]['Monitor'] = 'مرصد';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'رصد وقياس أداء نظام الرصد الدولي';

$GLOBALS["lang"]['Montenegro'] = 'الجبل الأسود';

$GLOBALS["lang"]['month'] = 'الشهر';

$GLOBALS["lang"]['Month'] = 'الشهر';

$GLOBALS["lang"]['Montserrat'] = 'مونتسيرات';

$GLOBALS["lang"]['More Information'] = 'المزيد من المعلومات';

$GLOBALS["lang"]['More Secure'] = 'المزيد من الأمن';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'ويمكن أن تستخدم شركة SQL بمزيد من التفصيل في سمات المجموعات في نطاق ما. ويُظهر الجدول التالي لجهاز SQL للأجهزة التي لم يُنظر إليها في خريطة فطيرة مجمّعة حسب النطاقات النهائية المحددة.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'يمكن العثور على المزيد من المعلومات عن التشويه على خيط مساعد لـ (ستاك)';

$GLOBALS["lang"]['Morocco'] = 'المغرب';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'وعلى الأرجح أن جدار ويندوس الناري (أو الجدار الناري لطرف ثالث) ينكر محاولة الاتصال.<br/><br/>رجاءً سجلوا ماكينة (ويندوز) المستهدفة وتحققوا من مواقع الجدار الناري';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Most of Open-AudIT is Licensed with GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'الأم';

$GLOBALS["lang"]['Motherboard'] = 'الأم';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'طراز جبل';

$GLOBALS["lang"]['Mount Type'] = 'طراز جبل';

$GLOBALS["lang"]['Mozambique'] = 'موزامبيق';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'يجب أن يستجيب إلى بينغ. إذا تم وضعه، سيحاول (نامب) إرسال والاستماع لرد من المؤسسة. إذا لم يرد الجهاز، لن يحدث المزيد من المسح.<br/>سابقاً لم يكن على أي جهاز أن يستجيب لمباراة مفتوحه لمواصلة المسح';

$GLOBALS["lang"]['Must Respond to Ping'] = 'يجب أن يرد على بينغ';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'مضاد الفيروس يدفعني إلى إنكار/تخفيف الأمور';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'وقتي مفتوح';

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

$GLOBALS["lang"]['NOTE'] = 'ملاحظة';

$GLOBALS["lang"]['NOTE #2'] = 'NOTE #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'ملاحظة - للاطلاع على مزيد من المعلومات عن صيغ التوقيت، انظر';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'ملاحظة - إذا طلبت نسخة محملة من استمارة CSV أو XML أو JSON (إما عقيدة واحدة أو المجموعة الكاملة) سترسل التفاصيل الإبداعية الفعلية. ليس الخيط المشفر، اسم المستخدم الفعلي، كلمة السر، خيط المجتمع، الخ. ولا تُعرض أي تفاصيل حساسة على شبكة الويب، ولكنها متاحة عبر أشكال أخرى. ولمنع هذا التصدير، يُسمَّى بند التكوين بالكشف عن الهوية.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'ملاحظة - ينبغي استخدام الأقواس المعقوفة الواردة في البيانات المقدمة في الوقت الحاضر (لا يستعاض عنها كأمثلة أخرى أعلاه).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ملاحظة - يمكنك منع عرض وثائق التفويض بالنص العادي أدناه عن طريق وضع بند التشكيلة <code>decrypt_credentials</code> إلى <code>n</code>.';

$GLOBALS["lang"]['name'] = 'الاسم';

$GLOBALS["lang"]['Name'] = 'الاسم';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'الاسم الذي تعطيه لهذا الحقل من الناحية المثالية يجب أن يكون فريداً';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'وتستخدم موانئ الشبكة مزيجاً من رقم الميناء والبروتوكول والبرنامج. إذا كان الجميع حاضرين فإن السياسة تمر';

$GLOBALS["lang"]['Network'] = 'الشبكة';

$GLOBALS["lang"]['network_address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['Network Address'] = 'العنوان الشبكي';

$GLOBALS["lang"]['Network Discovery'] = 'الشبكة';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'الشبكات';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'ويُحدَّد نوع الشبكة المحلية حسب التقصير، ولكن يمكن تغييره من جانب المستخدم كما يراه مناسبا. وترد أدناه الأنواع المدعومة (بفضل ويكيبيديا).<br/><br/>ويمكن أن تتميز الشبكة بقدرتها المادية أو بهدفها التنظيمي. ويختلف استخدام الشبكة، بما في ذلك حقوق المستخدم في الإذن والوصول، تبعا لذلك.';

$GLOBALS["lang"]['networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks'] = 'الشبكات';

$GLOBALS["lang"]['Networks Generated By'] = 'الشبكات المولدة';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'يتم تحديث الشبكات بكل اكتشاف وأضيفت، كما وجدت، بنود مثل شركاء التنفيذ المتاحين والشركات الدولية المستخدمة، جنبا إلى جنب مع البوابات، والبارافينات المكلورة قصيرة السلسلة، وخواديم النظم الرقمية.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'وتستجيب الشبكات بشكل مختلف حسب كيفية تشكيلها. بعض أجهزة توجيه و/أو جدران الحريق يمكن أن تستجيب <i>بالنيابة</i> من شركاء التنفيذ على الجانب الآخر من واجهاتهم لسيرفر مفتوح It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open.filtered for devices that do and do not exist. هذا مضلل لأنه لا يوجد أي جهاز في ذلك IP، ولكن ينتهي به الأمر مع إدخال جهاز في قاعدة البيانات. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. والآن بما أن لدينا خيارات لنعامل الموانئ المفتوحة إما مفتوحة أو مغلقة، يمكننا القضاء على الكثير من هذا الارتباك. بل إن لدى مستخدمي المشاريع خيار تغيير ذلك على أساس كل اكتشاف (أكثر من مجرد استخدام البند المتوسط (الكلاسيك)، على النحو الوارد أعلاه).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'الشبكات التي تستخدم مسرداً من طراز CIDR';

$GLOBALS["lang"]['New Building Name'] = 'اسم المبنى الجديد';

$GLOBALS["lang"]['New Caledonia'] = 'كاليدونيا الجديدة';

$GLOBALS["lang"]['New Floor Name'] = 'اسم الطابق الجديد';

$GLOBALS["lang"]['New Room Name'] = 'اسم الغرفة الجديدة';

$GLOBALS["lang"]['New Row Name'] = 'اسم جديد';

$GLOBALS["lang"]['New Zealand'] = 'نيوزيلندا';

$GLOBALS["lang"]['News'] = 'الأخبار';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'وتتحقق الأخبار في كل مرة تسجل فيها مجموعات الاستفسارات المستكملة، والتوصيات المتعلقة بالتشكيل، وإعلانات الإفراج، والمدونات والمزيد.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'الأخبار هي طريقتنا لإبقائك مستكملاً بأحدث المواصفات والإعلانات والمستجدات<br/><br/>ليس عليك أن تبقي على أعلى الويكي أو التحقق من الإطلاقات الجديدة، يمكننا إرسال هذه لك!';

$GLOBALS["lang"]['next_hop'] = 'التالي';

$GLOBALS["lang"]['Next Hop'] = 'التالي';

$GLOBALS["lang"]['next_run'] = 'الركض التالي';

$GLOBALS["lang"]['Next Run'] = 'الركض التالي';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'النقر التالي <i>اصنع طلبك الخاص</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'التالي، نقر حسنا، ثم نقر الحق في خدمة Apache 2.4 ونقر ريستارت. تم!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'وبعد ذلك، نقر مباشرة الخدمة Apache2.4 واختيار Properties، ثم نقر اللوج على حساب.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. يمكن أن يكون التصفير من جهاز مكرس للجدار الناري، أو قواعد الدراجات، أو برامجيات حائط النار القائمة على المضيف. هذه الموانئ تحبط المهاجمين لأنهم يقدمون القليل من المعلومات Sometimes they respond with ICMP mistake messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. هذا يُجبر (نامب) على التعافي عدة مرات فقط في حالة إسقاط المسبار بسبب ازدحام الشبكة بدلاً من التصفية هذا يبطئ المسح بشكل كبير';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap places ports in this state when it is unable to determine whether a port is open or filtered. ويحدث ذلك بالنسبة لأنواع المسح التي لا ترد فيها الموانئ المفتوحة. The lack of response could also mean that apacket filter dropped the probe or any response it elicited. إذاً (نامب) لا يعرف يقيناً إن كان المرفأ مفتوحاً أو ممزقاً The UDP, IP protocol, FIN, NUL, and Xmas scans classify ports this way.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'وترد تفاصيل توقيت الاختناق في الجزء السفلي من هذه الصفحة';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'لا توجد أجهزة في قاعدة البيانات';

$GLOBALS["lang"]['Node'] = 'Node';

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

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'ليس كل حاسوب سيكون قادراً على إكمال المقياس بنجاح لقد شهدنا بعض الفشل في الاختبار لأسباب خارجة عن سيطرتنا. يجب أن تساعد السجلات في توجيهك في الاتجاه الصحيح لهذه المواد.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'ليس في قائمة (مُغلقة)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'لا تستخدم عادة. وإذا ما تم تحديد ذلك، فإن هذا يتطلب أن يكون لدى الجهاز ميناء مفتوح (حسب الخيارات المتاحة) للنظر في الرد عليه. A MAC address, arp response or ping response is not considered sufficient to be considered responding. مفيد إذا كان جهاز توجيه أو جدار ناري بين الخادم المفتوح واستهداف IP يستجيب لمسح الموانئ نيابة عن شركاء التنفيذ.';

$GLOBALS["lang"]['Note'] = 'ملاحظة';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'ملاحظة، قد تحتاج إلى جعل النص قابل للتنفيذ';

$GLOBALS["lang"]['Notes'] = 'الحواشي';

$GLOBALS["lang"]['notes'] = 'الحواشي';

$GLOBALS["lang"]['Notice'] = 'الإشعار';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'تشرين الثاني/نوفمبر';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'الآن من أجل هوية الاشتراك، نقر جميع الخدمات، الاشتراك ونسخه.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'الآن نحن بحاجة إلى توفير تطبيق الدليل الناشط لـ(أزور) للوصول إلى اشتراكك<br/><br/>اضغط على مجموعات الموارد ثم مجموعة الموارد التي ترغب في الحصول عليها<br/><br/>اضف The role should be Contributor and then search for the app (Open-AudIT). ثم نقر إنقاذ.<br/><br/>الآن الطلب لديه إمكانية الحصول على الاشتراك، حتى نتمكن من إجراء المكالمات. ستُطلب المكالمات باسم الطلب، وليس مستعملك.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'أودريه';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'الأسرة';

$GLOBALS["lang"]['OS Family'] = 'الأسرة';

$GLOBALS["lang"]['OS Group'] = 'مجموعة OS';

$GLOBALS["lang"]['OUTPUTS'] = 'أوتوبيس';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'الاعتراض';

$GLOBALS["lang"]['Object Ident'] = 'الاعتراض';

$GLOBALS["lang"]['Obtain top management support'] = 'دعم الإدارة العليا';

$GLOBALS["lang"]['October'] = 'تشرين الأول/أكتوبر';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'عمان';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'على';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'On Windows, Open-AudIT uses WMI as it is primary method of auditing. (ويندوز) لديه سمعة سيئة السمعة عندما يتعلق الأمر بـ (واشنطن) يميل إلى إما <i>مجرد عمل</i> أو بعض الأشياء الغامضة على الهدف تتطلب التغيير إذا كنت تواجه صعوبة في مراجعة حسابات النوافذ البعيدة PCs، لقد خلقنا نصا يسمى اختبار - يمكنك تشغيل هذا النص <strong>محليا</strong> على الآلة المعنية، بعد التوقيع عليها كمستخدم يستخدمها مكتب المراجعة الداخلية للحسابات لإجراء مراجعة الحسابات. النص يجعل <strong>لا تغيير</strong> إلى الأجهزة المستهدفة وهو يفحص معظم (ليس جميع) الأصناف الواردة أدناه ويولد بطاقات برمجية خاصة بقطاعات الخدمات العامة، وشركة FAIL، وشركة INFO لمختلف الممتلكات. ملاحظة - إذا كان نظامك المستهدف يجري مراجعة صحيحة، يجب ألا تغير أي ظروف. Some of the below do not exist on Windows PCs that are able to be reviewed and some do exist. فقط تغيير الأماكن إذا كان اكتشافك على مركبات معينة لا يعمل كما هو مقصود';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'على صفحة قائمة المهام، انقر <i>إضافة جديدة</i> زر لتشكيل مهمة';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'في الميدان <i>Match String</i> يجب أن تقدمي اسم البرنامج الذي تريدين تعقبه يمكنك استخدام علامة المئة (%) كبطاقة جامحة في المكان المطلوب';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'في الصفحة التالية ستكون قادراً على اختيار مفاتيح الدخول ورؤية مفتاحك أو إنشاء مفتاح جديد';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. ابدأ اركضوا، ادخلوا فريق (ديكوم سي) واضغطوا حسناً هذا سيفتح نافذة (ديكومف جي)';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'سترى عدة أزرار هذه تسمح لك باختيار لوحة أخرى، وضع اللوحة الحالية كصفحة الاستقبال الخاصة بك (إذا لم يكن بالفعل) وحرر لوحة المتابعة الحالية (إذا كان لديك إذن).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'على سبيل المثال، ليس كلود';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'وبمجرد إنشاء حقل إضافي يمكن استخدامه في الاستفسارات والمجموعات مثل أي عزو آخر في قاعدة البيانات.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'بمجرد أن تُعلّق، ستُصدّق شهادتك، لكن قد تفشل أيضاً في هذا التصديق إذا كنت تستخدم شهادات موقّعة ذاتياً ولم تُحدّد خادمك بشكل صحيح.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'بمجرد أن يتم تشغيل السيناريو على الهدف، إذا حذف النص نفسه.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'ومتى اكتملت هذه الاستفسارات الأولية (السنمب والشش والوزن) إذا كان الجهاز مدعوما بنصات مراجعة الحسابات (ويندوز، لينكس، أوسكس، أوكس، أوكس، أوكس، أو سولاري، أو إكس)، فإن النص الصحيح لمراجعة الحسابات سينسخ إلى الهدف وينفذ. وسيحذف نص مراجعة الحسابات فور اكتماله. وسيتم تخزين النتيجة على آلة الهدف كملف XML. ويقوم الخادم المفتوح باب العضوية باسترجاع ملف النتائج لتجهيزه وحذف ملف النتيجة من الهدف. والموقع الذي يُنسخ منه نص مراجعة الحسابات على الجهاز المستهدف (على الأقل بالنسبة لعمليات مراجعة الحسابات في مجال الصحة العامة) يمكن تغييره عن طريق تحرير مادة الاكتشاف (Llinux_script_directory config). ومن خلال التقصير، يتم تحديدها إلى / / / / /. وقد يحتاج ذلك إلى تغيير إذا لم يكن هناك أي مخرج. ويجري بعد ذلك تجهيز ملف النتائج واستكمال تفاصيل الجهاز في إطار قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'بمجرد أن تضغط على زر العدم، (إفتتاح (أوديت) سيقوم بعملية لبدء الاكتشاف وإعادة المستعمل إلى صفحة التفاصيل The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). كل مجموعة من الشخصيات التي سيتم مسحها توضع في طابور وبمجرد الانتهاء من العملية الأولية (وهناك شركاء التنفيذ الذين يتعين مسحهم في القائمة) سيتم تنفيذ عدد من العمليات لإجراء المزيد من المسح الموازي لكل واحد من شركاء التنفيذ. وهذا العدد من العمليات قابل للتشكيل في التشكيلة، وتحرير السمة <i>queue_limit</i>. من خلال التقصير، هذا هو محدد إلى 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'بمجرد أن تختاروا أجهزةكم للتحرير، نضغط زر قلم رصاص على أعلى اليمين من الطاولة.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'بمجرد أن تفعل هذا، ستحاول (أوديت) التحقق من تفاصيل دخول مستخدمك ضد طريقة (أوث) المُشكلة. إذا كان لدى المستخدم وثائق تفويض صحيحة <code>use_authorisation</code> تم وضعه، سيطلب (إفت-أوديت) قائمة المجموعات التي ينتمي إليها المستخدم وإذا كان المستخدم في المجموعات المناظرة للأدوار والأوغاد المفتوحة، فإن تلك الأدوار والأوغاد ستطبق على ذلك المستخدم.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'بمجرد أن تولد تعريفاً خطياً يمكنك تحديده ليتم تشغيله ضد مجموعة محددة من الأجهزة';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'بمجرد أن يكون لديك هذه الأشياء في مفتوح شركة يمكنك الذهاب إلى قائمة الطعام الكشف كلودز Create السحاب، اختيار <i>Amazon AWS</i> طباعة وقرع لهم في. تم';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'بمجرد أن يكون لديك هذه الأشياء في مفتوح شركة يمكنك الذهاب إلى قائمة الطعام الكشف كلودز Create السحاب، اختيار <i>Microsoft Azure</i> طباعة وقرع لهم في. تم';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'بمجرد حصولك على وثائق تفويضك السحابية، فهي مجرد مسألة خلق سحابة جديدة وإدارة الاكتشاف - أو تحديد مواعيد الاكتشافات الأولى/الجديدة. تأكدي من أن لديكِ أيضاً وثائق التفويض اللازمة لتسجيلها إلى آلات الغيوم الخاصة بكِ، وكل شيء يتم بالنسبة لكِ مثل اكتشاف منتظم. وثائق تفويض لسحبك';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'واحد من <code>3x2</code>.. <code>4x2</code>.. <code>4x3</code> أو <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'واحد من المخصّصين والمفوضين، التخطيط، المحجوزين، غير المتعلمين، غير المنظمين. التخلف عن الدفع';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'واحد من أي منهما <code>active directory</code> أو <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'One of: antivirus, supportive, firewall, approved, banned, ignored or other.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'بند آخر لتوخي الحذر منه تأكدي من استخدام لقب (أو فدان) الخاص بك ويطابق هذا الموظف ما هو في الشهادة (ليس فقط عنوان خدمة الشبكة الدولية للطلاب) عند إنشاء مدخل برنامج العمل الطويل الأجل في قاعدة البيانات المفتوحة.';

$GLOBALS["lang"]['Online Documentation'] = 'الوثائق الإلكترونية';

$GLOBALS["lang"]['Open'] = 'مفتوح';

$GLOBALS["lang"]['Open Data'] = 'البيانات المفتوحة';

$GLOBALS["lang"]['Open Source'] = 'المصدر المفتوح';

$GLOBALS["lang"]['Open-AudIT'] = 'مفتوح';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'مفتوح ورمز المصادر المجتمعية متاح على جيت هوب. وتُشجَّع على تفتيش أيّ رمز لديك قلق بشأنه، ولأنّه مصدر مفتوح - تُشجَّعُ أيضاً على سؤالنا عن أيّ مسائل لديك أو الإبلاغ عن أيّ نتائج. ونحن دائما أكثر من سعداء بقبول المساهمات الرمزية، أو تقارير الضعف، أو حتى الأسئلة البسيطة. نحن هنا للمساعدة<br/><br/>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). يمكنك أن ترى بالضبط ما هي الأوامر يمكنك إزالة أي أوامر تشعر أنك لا تحتاجها يمكنك أن تطلب من طرف ثالث أن يفحص الرمز من أجلك و (إذا أردت) الإبلاغ عن أي نتائج<br/><br/>مفتوح وتضطلع المؤسسة بمهام تجارية إضافية لجماعة الدول المفتوحة العضوية. It is included as a single compiled file with no external dependencies. حيث تقوم المؤسسة نفسها بأداء المهمة (العمليات) إذا كنت مهتماً بأي قضايا الموجة الأولى سعيدة بالعمل معهم معك فقط اسأل جرب هذا مع بائع برامج تجاري آخر';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'مفتوح ولدى المؤسسة القدرة على الاختيار من قائمة محددة مسبقاً لخيارات المسح الاكتشافي، وعلى تكييف الخيارات الفردية حسب كل اكتشاف.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'شركة "أوديت" المفتوحة إيجاد حل يتسم بالمرونة العالية والقابلية لمراجعة الحسابات بالنسبة للشبكات الكبيرة. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'الاسم الميداني المفتوح باب العضوية';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'التراخيص المفتوحة';

$GLOBALS["lang"]['Open-AudIT Options'] = 'خيارات الاستثمار المفتوح';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'وتشمل الفئة الفنية والمشروعية المفتوحة المواصفات المعززة للإبلاغ، بما في ذلك الملامح المتعلقة بالتقارير القائمة على الزمن والتاريخ والمرتكزة على المكياج المتعددة في أشكال متعددة.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'مفتوح المهنيون لديهم القدرة على الاختيار من قائمة محددة مسبقاً لخيارات المسح الاكتشافي لكل اكتشاف';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'مهني مفتوح العالم';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'مفتوح ويمكن تشكيل تكنولوجيا المعلومات لاستخدام خواديم برنامج العمل دون الإقليمي (الدليل النشط و/أو برنامج العمل المفتوح العضوية) لتوثيق وترخيص مستعمل، وإضافة إلى ذلك، لإنشاء حساب للمستعملين في نظام تبادل المعلومات المفتوح باستخدام الأدوار المسندة والأوراق القائمة على العضوية في مجموعة برنامج العمل الطويل الأجل. ويمكنها أيضا أن تستخدم';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'مفتوح يمكن تشغيله على خادمك في مركز البيانات الخاص بك. ولا تحتاج إلى الوصول إلى الإنترنت على الإطلاق. حتى التركيب على (لينكس) حيث نستخدم مدير مجموعة التوزيع لشرطنا المسبق يمكن أن تلغيه باستخدام مستودع داخلي وأمني<br/><br/>مفتوح انها لا تخزن أي من بياناتك في السحابة. وحتى المعلومات المتعلقة بالترخيص يمكن تقديمها دون الحاجة إلى الوصول إلى شبكة الإنترنت من الخادم المفتوح العضوية.<br/><br/>بالتأكيد، من الأسهل السماح لها بالوصول إلى الإنترنت لتحميل الطرود (بما في ذلك الإصلاحات الأمنية) من أجل توزيعك، ولكن هذا يعود إليك وسياساتك الأمنية. فتح الباب لا يحتاج إلى الإنترنت.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'ويمكن للشركة المفتوحة أن تقوم بتحميل وقطع واستعمال تقارير الضعف الخاصة بالشبكة.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'مفتوح ويمكن لتكنولوجيا المعلومات أن تظهر بإحدى لغات عدة. كيف يمكنك تحسين هذا؟';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'مفتوح ويمكن لتكنولوجيا المعلومات أن تخزن المعلومات في ميادين إضافية ترتبط بكل جهاز.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'ويمكن للشركة المفتوحة أن تستخدم ميكروسوفت إنترا (المعروفة سابقاً باسم Microsoft Azure Active Directory) كوسيلة للتوثيق. هذا يعني أنّ مستعملك في (إفتتاح) يمكنه أن يضغط على (لوغون) باستخدام زر الدخول على صفحة (لوكون) ويستخدم أوراق اعتمادهم للدخول إلى (لوتون). وسيحتاج ذلك المستخدم إلى أن يكون موجودا بالفعل في إطار قاعدة البيانات المفتوحة (وتُكلف به)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'ويمكن أن تستخدم شركة &quot; أوكيتا &quot; كأسلوب للتوثيق. هذا يعني أن مستعملك في "إفتتاح" يمكنه أن يضغط على "لوغون" مستخدماً زر "أوكيتا" على صفحة الشعار ويستخدم أوراق اعتمادهم لـ "أوكيتا" وسيحتاج هذا المستخدم إلى وجوده بالفعل في إطار نظام &quot; أوديت &quot; (وتُسند إليه الأدوار والأوغاد)، لكنه لن يحتاج إلى تذكر مجموعة منفصلة من وثائق التفويض المتعلقة بالقطع.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'فتح الباب يأتي مع الكثير من الاستفسارات في البناء. إذا كنت بحاجة إلى استفسار محدد ولا شيء من الاستفسارات التي سبق أن حزمت احتياجاتك، فمن السهل جدا خلق واحد جديد وحمله في فتح-أوديت للركض.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'وتوجد لدى منظمة &quot; أوديت &quot; (JON Restful API) منظمة &quot; إيبون &quot; (JON) &quot; (PJON) &quot; (PJON Restful API) تُستخدم في الوصلة البينية على الشبكة وعن طريق طلبات شركة JSON).';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'مفتوح لدى تكنولوجيا المعلومات نظام تصريحات جشعة لتحديد ما يمكن للمستعمل داخل قاعدة البيانات المفتوحة أن يفعله والأصناف التي يمكنه فعلها ويمكن أن تكون المراجعة المفتوحة قائمة بذاتها تماماً، أو أن تستخدم دليلاً نشطاً أو خطة مفتوحة للتوثيق و/أو الترخيص.<br/><br/>والأمر متروك تماماً لمدير برنامج &quot; مفتوح العضوية &quot; كيف يودون أن يعمل نظام مراقبة الدخول على أساس الأدوار.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'مفتوح تكنولوجيا المعلومات لديها محرك كشف قوي وسيتم الكشف عن أي خصائص للأجهزة تضاف أو تزيل أو تتغير وتخزينها. ويمكن الإبلاغ عن هذه التغييرات والتحقق من البيانات ذات الصلة بما كان متوقعاً من عملية التغيير والإفراج في شركتكم.<br/><br/>وعندما يُراجع الجهاز، تُقسم الخصائص إلى أجزاء تتطابق مع الجداول في قاعدة البيانات.<br/><br/>كل جهاز (الحواسيب، الدراجات، الطابعات، إلخ) له دخول <code>devices</code> طاولة كل دخول في طاولة الأجهزة لديه <code>id</code> العمود هذه القيمة فريدة من نوعها - إنها متطورة آلياً -<br/><br/>وعند تجهيز نتائج مراجعة الحسابات، يكون لكل بند في كل باب نتيجة مراجعة الحسابات مقارنة بما يوجد في قاعدة البيانات.<br/><br/>بالنسبة لكل باب، إذا كانت الأعمدة الرئيسية (انظر الجدول أدناه) تحتوي على قيم متطابقة، فإنها تعتبر رُكبت بالفعل ولديها قيمها. <code>last_seen</code> تم تحديثها لا يوجد تغيير<br/><br/>وإذا لم تتطابق أي من الأعمدة الرئيسية، فإنها تعتبر سمة جديدة وتدرج. ألف <code>change_log</code> ويُنشأ الدخول إذا كان للجهاز خصائص أخرى موجودة بالفعل في الجدول.<br/><br/>وعند الانتهاء من عملية مراجعة الحسابات، تعتبر أي بنود في قاعدة البيانات لم تستكمل (أو تدرج) موجودة. The <code>current</code> عزو لهذا البند <i>n</i> وتغيّر...<br/><br/>لذا، يمكننا تحديد ما إذا كان هناك شيء مركب حالياً العمود الحالي <i>y</i>.<br/><br/>يمكننا تحديد متى تم اكتشاف شيء في البداية <i>أولاً</i>.<br/><br/>ويمكننا أن نحدد ما إذا كان قد تم تركيب شيء بعد المراجعة الأولية للحسابات - سيختلف النظر إليه أولا في جداول المكونات والأجهزة.<br/><br/>يمكننا تحديد ما إذا لم يتم تركيب شيء في الوقت الراهن، ولكن سابقا كان - الحالية = <i>n</i>.<br/><br/>يمكننا تحديد آخر مرة إكتشفنا فيها صنفاً آخر مرّة<br/><br/>وفي أي مرحلة من المراحل، يمكننا أن نحدد ما كان على نظام - باستخدام جدول مراجعة الحسابات - واختيار العناصر ذات الصلة استنادا إلى الـ (سين) الأول والثاني عشر.<br/><br/>ويرد أدناه كل قسم وأعمدة رئيسية مطابقة له.<br/><br/>ملاحظة - هناك بعض الاستثناءات على النحو المفصل أدناه.<br/><br/>*1 - بالنسبة لبطاقات الشبكة، إذا كان الحاسوب آلة VMware Esx، فإنه يستخدم أيضاً عموداً صافياً وعلامات اتصال.<br/><br/>*2 - للتجزئة، والحاسب هو آلة AIX، ونحن استخدام اسم تقسيم.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell \"What\\'] = 'البرنامج المفتوح هو برنامج مصمم لتتبع المعلومات وما يتصل بها من تفاصيل وتشكيلات والإبلاغ عنها. "افتح الباب"';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'مفتوح يجعل من السهل تحرير خصائص الأجهزة المتعددة في آن واحد.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'مفتوح وتحتاج تكنولوجيا المعلومات إلى إذن دليلي محدد لتكون قادرة على إنشاء الملفات، وتحميل النتائج، وما إلى ذلك. يرجى التحديد على النحو التالي.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = '(أوديت) المفتوح يقدم الكثير من الاستفسارات المبنيّة ويجعل الأمر بسيطاً لخلقك';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'مفتوح سفن تكنولوجيا المعلومات التي لها أدوار غير مكتملة للإعلان، org admin والمستعمل.<br/><br/>وبصفة عامة، ينبغي أن يكون للمستعمل الذي يتولى إدارة تطبيق معاهدة فتح باب الانضمام إلى الاتفاقية نفسه أدوارا بارزة ومحتملة.<br/><br/>يمكن للمستعمل أن يكون له أدوار متعددة. وسيطبق هذا الإذن على أعلى مستوى مسموح به - أي إذا كان للمستعمل دور المستعمل و org admin، سيكون بوسعه إنشاء مواقع لأن org admin يمنح هذا الإذن، على الرغم من أن دور المستعمل لا.<br/><br/>The admin role allows access to collections such as formation, database, groups, ldap servers, logs, queries and roles. بنود عالمية تؤثر على التطبيق الكامل.<br/><br/>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. وستتضمن جميع البيانات تقريبا، باستثناء بعض المجموعات المذكورة أعلاه، بيانات <code>org_id</code> العمود<br/><br/>ولا يسمح دور المستعمل عموما إلا بالاطلاع على جميع البنود التي تحتوي على عمود &quot; org &quot; .';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'مفتوح سفن تكنولوجيا المعلومات التي لها أدوار غير مكتملة للإعلان، org admin والمستعمل.<br/><br/>وبصفة عامة، ينبغي أن يكون للمستعمل الذي يتولى إدارة تطبيق معاهدة فتح باب الانضمام إلى الاتفاقية نفسه أدوارا بارزة ومحتملة.<br/><br/>يمكن للمستعمل أن يكون له أدوار متعددة. وسيطبق هذا الإذن على أعلى مستوى مسموح به - أي إذا كان للمستعمل دور المستعمل و org admin، سيكون بوسعه إنشاء مواقع لأن org admin يمنح هذا الإذن، على الرغم من أن دور المستعمل لا.<br/><br/>The admin role allows access to collections such as formation, database, groups, ldap servers, logs, queries and roles. بنود عالمية تؤثر على التطبيق الكامل.<br/><br/>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. وستحتوي جميع البيانات تقريبا باستثناء بعض المجموعات المذكورة أعلاه على عمود org - id.<br/><br/>ولا يسمح دور المستعمل عموما إلا بالاطلاع على جميع البنود التي تحتوي على عمود &quot; org &quot; .';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'سفن مفتوحة العضوية مع العديد من لوحات الصيد المحظورة مسبقاً إذا كنت مستعمل محترف، يمكنك الاختيار بين اثنين من هذه ووضعه كصفحة ناقصة عند دخولك. إذا كنت مستخدماً في المؤسسة، لا يمكنك الاختيار فقط بين خمسة لوحات مُحكمة مسبقاً، لكن لديك أيضاً القدرة على خلق خاص بك.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'ينبغي تركيب نظام &quot; أوديت &quot; مفتوح في 64 مبتدئاً <strong>سيرفر</strong> الأنظمة فقط النوافذ 10 وويندو 11 <strong>لا</strong> مدعوم.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = '(أود) يستعمل (نامب) في وظيفة الاكتشاف أجهزة التنقيب للموانئ المفتوحة وينبغي أن تستجيب النبائط بشكل مثالي بفتحها لموانئ العمل. وكثيرا ما لا تستجيب الأجهزة لذلك. وترد أدناه الردود المتباينة.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = '(أود) يستعمل (نامب) في وظيفة الاكتشاف بدون (نامب)، لن يعمل (إفتتاح) بشكل صحيح. كل انشاء مفتوح يفترض ان نمب يتم تركيبه وسوف يختبره ايضا على صفحات ديسكفري ويمكن الاطلاع هنا على مزيد من المعلومات عن البرمجيات المفتوحة باب العضوية ونمب';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = '(أود) يستعمل (نامب) في وظيفة الاكتشاف بدون (نامب)، لن يعمل (إفتتاح) بشكل صحيح. كل نسيج مفتوح يُفترض أن (نامب) قد تم تركيبه وسوف يختبره على صفحات (ديسكفري)';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'مفتوح تكنولوجيا المعلومات تستخدم وثائق التفويض للوصول إلى أجهزة الخاص بك. هذه مشفرة ومخزنة كما تتوقع';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'وقد كتب ممثل استرالي يتحدث الانكليزية. كل شيء في التطبيق يستخدم اللغة الانكليزية. ومع ذلك، دعمت الرابطة دائما لغات متعددة لعرضها. وهذه الترجمات ليست صحيحة دائما، لأن المطورين لا يتكلمون اللغة الأصلية في كل ترجمة مقدمة.<br/><br/>ماذا يمكنك أن تفعل إذا كان هناك شيء غير صحيح في الترجمة؟';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

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

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'الصيغة الاختيارية التي راجعتها محكمة الاستئناف. استخدمي النسبة المئوية للإشارة كبطاقة جامحة';

$GLOBALS["lang"]['options'] = 'الخيارات';

$GLOBALS["lang"]['Options'] = 'الخيارات';

$GLOBALS["lang"]['Options, options, options'] = 'الخيارات والخيارات والخيارات';

$GLOBALS["lang"]['Or'] = 'أو';

$GLOBALS["lang"]['Or select from the below fields.'] = 'أو تختار من الحقول التالية';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID';

$GLOBALS["lang"]['Org ID'] = 'ID';

$GLOBALS["lang"]['Organisation'] = 'المنظمة';

$GLOBALS["lang"]['organisation'] = 'المنظمة';

$GLOBALS["lang"]['Organisation Descendants'] = 'المنظمة';

$GLOBALS["lang"]['Organisations'] = 'المنظمات';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'ويمكن للمنظمات أن توسع وتعزز مستوى التفاصيل المخزنة ضد كل جهاز مكتشف يستخدم حقول العرف، ويسمح النواة المفتوحة بالاندماج بسهولة في نظام CMDB وإدارة المناسبات ونظم التذاكر.';

$GLOBALS["lang"]['orgs'] = 'الأورام';

$GLOBALS["lang"]['Orgs'] = 'الأورام';

$GLOBALS["lang"]['Orgs Name'] = 'الاسم';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'الأورام في فتح الباب هي بند رئيسي المستعمل لديه الأورغ الأولي وكذلك قائمة بالأوغاد التي يمكنهم الوصول إليها ويجمع المستخدم بين هذا وبين قائمة بالأدوار المسندة التي تحدد الإجراءات التي يمكن أن تتخذها بشأن المواد المخصصة للأوغاد التي تتاح لهم الوصول إليها. مجموعة المستخدمين <i>الأورام</i> و <i>الأدوار</i> تحديد ما يمكن ولا يمكن القيام به في إطار المبادرة المفتوحة.<br/><br/>وتُخصص معظم المواد في نظام &quot; أوروغ &quot; (Pop-AudIT).<br/><br/>الأورام يمكن أن يكون لها أطفال أورجز. فكّر في الهيكل التنظيمي (الإطار). If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.';

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

$GLOBALS["lang"]['os_display_version'] = 'ترجمة';

$GLOBALS["lang"]['Os Display Version'] = 'ترجمة';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'عدا ذلك التقييد، أنت حر في اختيار السمات حسب الاقتضاء. انها فكرة جيدة لاستخدام القائمة';

$GLOBALS["lang"]['Others'] = 'جهات أخرى';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'إندماجنا الافتراضي يتيح أيضا اكتشاف أي أجهزة مزودة من الخارج. لذا نشحن اكتشافاً خاطئاً للتكامل الافتراضي خارج الصندوق وتستخدم هذه القواعد قواعد المطابقة الافتراضية، ولكنها تتيح أيضا مطابقة عنوان IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'أمثلةنا ستستخدم <i>النوع</i> العمود';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'إطارنا يحمّل الملفات هنا لتجهيزها ثم يحذفها نفكر في نتائج مراجعة الحسابات، وما إلى ذلك';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'هدفنا بالإفراج الأولي للتكامل كان على وجه التحديد بالنسبة لبعثة الاتحاد الأفريقي في السودان إلى الاندماج المفتوح باب العضوية <i>مجرد عمل</i>. إذا كنت تستخدم البرامج على لينكس، يمكنك حرفيا نقر زر واحد لتنفيذ التكامل. لا شيء أكثر مطلوب. وبعد أن قال ذلك، فإن الاندماج نفسه قابل للتشكيل إلى حد بعيد - لذا إذا لم يكن هناك ما يفضله، فإنه يمكن تغييره بسهولة.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'سمتنا الجديدة المسماة Vulnerabilities تعطيك القدرة على تحديد ما إذا كانت أي أجهزة متضررة من أي CVE (العرض للخطر الشامل) - ولكن كيف؟<br/><br/>أول مرة تستهلك بشكل مستمر الناتج من بث الـ NVD نأخذ هذا ونطبق بعض القيود، ثم نستخرج البرامج المتضررة ونبني استفساراً بشأن الإبلاغ. تتواصل حالتك المفتوحة مع أول وايف وتطلب أي نقاط ضعف جديدة بشكل منتظم وعندما تتلقى سجلاً جديداً للضعف، تدار ضد قاعدة البيانات وتخزن النتيجة. وفي كل مرة يتم تجهيز جهاز ما، يتم تنفيذ جميع أوجه الضعف المطابقة مرة أخرى وتخزن النتيجة. وهذا يعني، عند النظر إلى قائمة الضعف، أننا لا نحتاج إلى حساب جميع الأجهزة المتأثرة - لدينا بالفعل النتيجة. عندما ترى سجل ضعف فردي، نحن نعيد بالفعل حساب النتيجة لهذا الضعف المفرد.<br/><br/>لذا، أنت دائما حتى الآن!<br/><br/>وبالإضافة إلى ذلك، نحسب أيضاً نتيجة جميع أوجه الضعف لكل الأجهزة يومياً (عادة في وقت هادئ، نقول 2 صباحاً).<br/><br/>في حالتك المفتوحة، نسمح لك باختيار أي بائعين تهتم بهم. i.e. there is no use retrieving vulnerability records from a Brand whose software you do not use or have installed. عن طريق التقصير، قائمة بائعينا هي إدوارد، وأبل، وسيسكو، وغوغل، وميكروسوفت، وموزيلا، وريدهات.<br/><br/>كل هذا يبدو بسيطاً جداً لكن خلف المشاهد <b>الكثير</b> يجري. فعلى سبيل المثال، يتضمن سجل دائرة تكنولوجيا المعلومات قائمة بالبرمجيات المتأثرة - ولكن أسماء البرامجيات هذه لا تتطابق مع ما نتلقى عندما نراجع حاسوبا. مثال جيد هو أباتشي وعادة ما يقول سجل مركز التحقق أن البرمجيات المتأثرة هي: http://server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. لذا علينا أولاً أن نحدد ما هو الاسم الفعلي للبرنامج الذي نستقبله عندما نطلب حاسوباً، وقد يكون هناك أسماء متعددة. بعد ذلك يجب أن نسجل سجل مركز التحقيقات و نصنع بيان متطابق السماح بتعدد أسماء البرامج على النحو الوارد أعلاه، والنسخ المتعددة، ونطاقات النسخ، بل وقطع مختلفة متعددة من البرمجيات (مثلاً: ثندربيرد وفايرفوكس في مركز واحد). وحالتك في "الفتح" يجب أن تأخذ هذا وتطبق تصفية "أورق" أيضاً وهذا هو مجرد CVE واحد. ماذا عن تحديد أي محققين لديك وليس لديك؟ ماذا عن إضافة بائع إلى القائمة لاحقاً؟ الكثير من الأشياء لتفكر فيها<br/><br/>بالإضافة إلى التقارير المعتادة، لدينا أيضاً بضعة نباتات جديدة متاحة لوحات الصيد، استناداً إلى بيانات الضعفاء.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'وقت إستجابة SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'وقتنا للرد';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'وقتنا للرد على السيناريو';

$GLOBALS["lang"]['output'] = 'الناتج';

$GLOBALS["lang"]['Output'] = 'الناتج';

$GLOBALS["lang"]['outputs'] = 'النواتج';

$GLOBALS["lang"]['Outputs'] = 'النواتج';

$GLOBALS["lang"]['Overall severity score (0–10).'] = ')٠-١٠(';

$GLOBALS["lang"]['overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['Overwrite'] = 'الكتابة الكاملة';

$GLOBALS["lang"]['owner'] = 'المالك';

$GLOBALS["lang"]['Owner'] = 'المالك';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program. وترمي شركة PAExec إلى أن تكون انخفاضاً في استبدال شركة PsExec، وبالتالي فإن استخدام خط القيادة متطابق مع الخيارات الإضافية المدعومة أيضاً. This work was originally inspiration by Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'بيانات تخطيط البرامج';

$GLOBALS["lang"]['Package'] = 'التعبئة';

$GLOBALS["lang"]['packages'] = 'الحزم';

$GLOBALS["lang"]['Packages'] = 'الحزم';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'تستخدم العبوات للإبلاغ عن أشياء مثل <i>البرامجيات المحظورة</i>AntiVirus on servers, etc.<br/><br/>وتوفر شبكة &quot; أوديت &quot; نباتات تستخدم في توفير مستودعات أيضاً لكشف حالة مضادات فيروسات النسخ العكسي، وجدار الحماية، وغير ذلك من البرمجيات.';

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

$GLOBALS["lang"]['path'] = 'Path';

$GLOBALS["lang"]['Path'] = 'Path';

$GLOBALS["lang"]['Performance'] = 'الأداء';

$GLOBALS["lang"]['Performed'] = 'الأداء';

$GLOBALS["lang"]['Permission'] = 'الإذن';

$GLOBALS["lang"]['Permission Required'] = 'الإذن المطلوب';

$GLOBALS["lang"]['permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Permissions'] = 'الانبعاثات';

$GLOBALS["lang"]['Persian'] = 'Persian';

$GLOBALS["lang"]['Personal Area Network'] = 'شبكة المناطق الشخصية';

$GLOBALS["lang"]['Personal area network'] = 'شبكة المنطقة الشخصية';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'يجب أن تُعيد الرسوم البيانية إسمي أو إسمي أو وصفي أو رقمي';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'الهدف المحدد';

$GLOBALS["lang"]['Pitcairn Islands'] = 'جزر بيتكيرن';

$GLOBALS["lang"]['placement'] = 'التنسيب';

$GLOBALS["lang"]['Placement'] = 'التنسيب';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'تخطيط وإجراء عمليات المراجعة الداخلية للحسابات';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'يرجى الحصول على سجل لمدير مفتوح ورفع مستوى قاعدة البيانات.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'يرجى تسجيل وتغيير هذه بأسرع ما يمكن.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'يُرجى الدخول إلى الخادم المفتوح (سواء ويندوز أو لينكس) <code>nslookup IP_ADDRESS_OF_TARGET</code> في القيادة بسرعة أو قذيفة يجب أن يكون قادراً على حلّ الـ(آي بي) بإسم';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'يرجى ملاحظة أن الصندوق المختار سيتجاوز صندوق مدخلات النص.';

$GLOBALS["lang"]['Please see the FAQ'] = 'رجاءً شاهدْ FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'يرجى إرسال جميع الملفات الثلاثة إلى اتصال الدعم الخاص بك في أوبمانتيك ووصف قضيتك.';

$GLOBALS["lang"]['Please set using'] = 'رجاءً إبدأْ';

$GLOBALS["lang"]['Please visit the homepage at'] = 'يرجى زيارة الموقع الشبكي';

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

$GLOBALS["lang"]['Polish'] = 'بولندا';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'نشر القيم الواردة أدناه:';

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

$GLOBALS["lang"]['Portuguese'] = 'البرتغال';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'البرتغال (البرازيل)';

$GLOBALS["lang"]['position'] = 'المنصب';

$GLOBALS["lang"]['Position'] = 'المنصب';

$GLOBALS["lang"]['Post-Certification'] = 'ما بعد التصديق';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['Power Circuit'] = 'دائرة السلطة';

$GLOBALS["lang"]['power_sockets'] = 'Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Sockets';

$GLOBALS["lang"]['Predictable'] = 'التنبؤ';

$GLOBALS["lang"]['Preferences'] = 'الأفضليات';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'الاستعداد لإعادة التأهيل كل ثلاث سنوات';

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

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'اسم المنتج: ';

$GLOBALS["lang"]['products'] = 'المنتجات';

$GLOBALS["lang"]['Products'] = 'المنتجات';

$GLOBALS["lang"]['Professional'] = 'الفئة الفنية';

$GLOBALS["lang"]['profile'] = 'Profile';

$GLOBALS["lang"]['Profile'] = 'Profile';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'الممتلكات';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'مناسبة إذا كنت تريد تعديل رسومات عالية قد تحتاج إلى';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'حماية السرية والنزاهة وتوافر المعلومات';

$GLOBALS["lang"]['protocol'] = 'البروتوكول';

$GLOBALS["lang"]['Protocol'] = 'البروتوكول';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Provide a description and select and expires duration.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'نقدم اسماً، نعيد تأكيده بتواضع، لكن يمكنك تسميته بأي شيء يعجبك.<br/>من الاستمارة المفتوحة، نسخ قيمة <i>Redirect URI</i> الحقل و القهره في <i>مفاعلات غير مباشرة</i> الحقل في OKTA.<br/>إعادة توجيه الأشعة المقطعية اختيارية، ولكن إذا كنت تريد أن تستخدم السمعية المفتوحة/المؤشر. php/logout with your Open-AudIT servers http address, as per the screenshot.<br/>عادة افتح الباب سوف تبدو مثل';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'شريطة أن يكون لديك وثائق التفويض الصحيحة، يعمل جهاز كشف النبض كما يلي:';

$GLOBALS["lang"]['provider'] = 'Provider';

$GLOBALS["lang"]['Provider'] = 'Provider';

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

$GLOBALS["lang"]['purchase_vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['purpose'] = 'الغرض';

$GLOBALS["lang"]['Purpose'] = 'الغرض';

$GLOBALS["lang"]['Qatar'] = 'قطر';

$GLOBALS["lang"]['queries'] = 'الكميات';

$GLOBALS["lang"]['Queries'] = 'الكميات';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'وتشكل الكميات جزءاً هاماً من النظام المفتوح. هم ما يُمكنُك أَنْ تَحْصلَ على معلوماتِ مفيدةِ مِنْ كُلّ البياناتِ الجهازِ التي إكتشفتَ. وبالإضافة إلى الملخصات والمجموعات، فإنها توفر آلية قوية لاستخراج المعلومات الحاسمة الأهمية.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Queries for Groups should select only the';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Query this Active Directory attribute first to determine the users work unit.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Query this Active Directory attribute second to determine the users work unit.';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'عمليات مراجعة الحسابات المتعلقة بالنواحي النوعية';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'البنود المحددة';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC for Active Director and openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'إدارة النفايات والإبلاغ عنها';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio'] = 'إذاعة';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['Rationale'] = 'الأساس المنطقي';

$GLOBALS["lang"]['raw'] = 'راو';

$GLOBALS["lang"]['Raw'] = 'راو';

$GLOBALS["lang"]['read'] = 'اقرأ';

$GLOBALS["lang"]['Read'] = 'اقرأ';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'إقرأ وثائقنا على الإنترنت عن "الإنترنت المفتوح"';

$GLOBALS["lang"]['Read through the log file at'] = 'اقرأ من خلال ملف السجل في';

$GLOBALS["lang"]['Received'] = 'وردت';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'لقد طُرح علينا السؤال مؤخراً - هل تعتبر أن فتح الباب آمن أكثر من البرامج المماثلة الأخرى؟ كما هو الحال مع معظم الأشياء <i>يعتمد</i>.<br/><br/>مفتوح ويمكن تشغيل تكنولوجيا المعلومات بطريقة تكون آمنة للغاية. لكن كالعادة مع الأمن الحاسبي كلما أردت أن تجعل شيئاً أكثر أمناً كلما أصبح غير ملائم العبارة القديمة <i>الحاسوب الأكثر أمناً هو واحد الذي أطفأ وفي خزانة<i> يخطر على بالي<br/><br/>وسنعرض أدناه بعض الخيارات التي يمكن أن تستخدم مع نظام فتح الباب الذي سيزيد من الأمن. وهذه خيارات وليست إلزامية، شأنها شأن معظم البنود الداخلة في قاعدة البيانات المفتوحة. إلى أي مدى تأخذ الأمن يعود لك</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'التصديق: مطلوب كل ثلاث سنوات';

$GLOBALS["lang"]['Red Query'] = 'الصالة الحمراء';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'الحد من مخاطر انتهاك البيانات والتهديدات الإلكترونية';

$GLOBALS["lang"]['references'] = 'المراجع';

$GLOBALS["lang"]['References'] = 'المراجع';

$GLOBALS["lang"]['region'] = 'المنطقة';

$GLOBALS["lang"]['Region'] = 'المنطقة';

$GLOBALS["lang"]['registered_user'] = 'المستعمل المسجل';

$GLOBALS["lang"]['Registered User'] = 'المستعمل المسجل';

$GLOBALS["lang"]['Rejected'] = 'Rejected';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'أكرر حتى تكتشف وتدقق تماماً';

$GLOBALS["lang"]['Report'] = 'التقرير';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Report on your devices, networks and more';

$GLOBALS["lang"]['reportable'] = 'التقارير';

$GLOBALS["lang"]['Reportable'] = 'التقارير';

$GLOBALS["lang"]['Reports'] = 'التقارير';

$GLOBALS["lang"]['request'] = 'الطلب';

$GLOBALS["lang"]['Request'] = 'الطلب';

$GLOBALS["lang"]['Request Method'] = 'الطلب';

$GLOBALS["lang"]['Request Vulnerability'] = 'الطلب';

$GLOBALS["lang"]['Request a Specific CVE'] = 'طلب محدد CVE';

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

$GLOBALS["lang"]['Reset to Default'] = 'Reset to Default';

$GLOBALS["lang"]['resource'] = 'الموارد';

$GLOBALS["lang"]['Resource'] = 'الموارد';

$GLOBALS["lang"]['Resource Name'] = 'اسم الموارد';

$GLOBALS["lang"]['Resources'] = 'الموارد';

$GLOBALS["lang"]['response'] = 'الرد';

$GLOBALS["lang"]['Response'] = 'الرد';

$GLOBALS["lang"]['responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Responsibility'] = 'المسؤولية';

$GLOBALS["lang"]['Restore my Licenses'] = 'أعيدوا منحني';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrict to Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrict to Subnet';

$GLOBALS["lang"]['result'] = 'النتيجة';

$GLOBALS["lang"]['Result'] = 'النتيجة';

$GLOBALS["lang"]['Resulting Function'] = 'المهمة الناشئة';

$GLOBALS["lang"]['Results'] = 'النتائج';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'استرجاع قائمة الأجهزة في';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Retrieve a list of devices with OS Name like Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'إسترجعْ كُلّ التفاصيل حول الجهازِ مَع id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'إسترجع جميع الأجهزة التي تدير (ويندوز)';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'استرجاع جميع الأجهزة مع الأعمدة القياسية';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'استرجاع أول 10 أجهزة تعمل في (ويندوز) أمرت بإسم المضيف';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'استرجاع الممتلكات من جميع الأجهزة';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['Retrieved Ident'] = 'الحوادث المستردة';

$GLOBALS["lang"]['retrieved_name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved Name'] = 'الاسم المسترد';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the tool - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, سولاري: سمبيوس، AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'استرداد قائمة وثائق التفويض';

$GLOBALS["lang"]['Retrieving or Creating'] = 'الاسترجاع أو الإبداع';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'إعادة مجموعة من الأجهزة التي تحتوي على مجموعة من الأعمدة (الضحايا، والأجهزة، والأجهزة، والنبائط، والنبائط، والنبائط، والأجهزة، والأجهزة، والأجهزة، والتصنيف، والأجهزة، والوصف، والأجهزة، والصانع، والأجهزة.';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'أعد قائمة بجميع الوحدات التي تم تركيبها في روترز';

$GLOBALS["lang"]['Return an individual device\\'] = 'أعد جهازاً فردياً';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'يُعيدُ a قائمة {colection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'يعيد التفاصيل';

$GLOBALS["lang"]['Reunion'] = 'الشمل';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Review current practices against ISO 27001 requirements';

$GLOBALS["lang"]['revision'] = 'التنقيح';

$GLOBALS["lang"]['Revision'] = 'التنقيح';

$GLOBALS["lang"]['risk_assesment_result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['Risk Assesment Result'] = 'نتائج تقييم المخاطر';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'تقييم المخاطر';

$GLOBALS["lang"]['Risk Management'] = 'إدارة المخاطر';

$GLOBALS["lang"]['Role'] = 'الدور';

$GLOBALS["lang"]['roles'] = 'الأدوار';

$GLOBALS["lang"]['Roles'] = 'الأدوار';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'الأدوار يمكن خلقها وتحريرها فقط إذا كان لديك رخصة مؤسسة مفتوحة وبالنسبة لمعظم المستعملين، ينبغي أن تكون مجموعة الأدوار المتخلفة كل ما هو مطلوب.';

$GLOBALS["lang"]['Romania'] = 'رومانيا';

$GLOBALS["lang"]['Romanian'] = 'رومانيا';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'وتوضع القواعد وتدار ضد جهاز عندما يكتشف الجهاز أو يتم تجهيز نتيجة مراجعة الحسابات. ويمكن استخدام القواعد لوضع عزو للجهاز استنادا إلى خصائص أخرى.<br/><br/>ملاحظة - لا يمكننا في الوقت الحاضر أن نحذف مدخلات أو ناتجا من القواعد يتضمن / وهذا هو السبب في أن الإطار يطابق الـ / كجزء من الجبهة الثورية المتحدة ويعود إلى 404، حتى قبل تشغيل رمزنا. والغرض من ذلك هو حذف القاعدة ذاتها، ثم إعادة صياغة المدخلات والنواتج حسب الاقتضاء. ومن حسن الحظ أن المدخلات والنواتج التي تحتوي على / هي نادرة (المتفق عليها، لا يوجد أي منها بسبب التقصير).';

$GLOBALS["lang"]['Run Discovery'] = 'تشغيل الاكتشاف';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'تشغيل الكشف عن الأجهزة';

$GLOBALS["lang"]['Run Your Discovery'] = 'أديروا جهاز كشفكم';

$GLOBALS["lang"]['Run a Command'] = 'أدير القيادة';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'ابحثوا عن اكتشاف واكتشفوا <b>ماذا عن شبكتك؟</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'تشغيل السيناريو بالطباعة <code>cscript test_windows_client.vbs</code> في النقابة';

$GLOBALS["lang"]['Run this Command'] = 'أدير هذه القيادة';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'تشغيل';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'إدارة خدمات Apache المفتوحة تحت النوافذ';

$GLOBALS["lang"]['Russian'] = 'الروسية';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL not containing this condition will result in the widget failing to be executed.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'أنقذي و أديري الملف تأكد من إدارة الملف كمدير من أجل تركيبه (النقرة الصحيحة، تشغيله كمدير).';

$GLOBALS["lang"]['Save as Default'] = 'انقذوا المكان';

$GLOBALS["lang"]['Save the downloaded file.'] = 'أنقذ الملف المحمل';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan Options'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan Options ID'] = 'خيارات المسح';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. لا يوجد مكان';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'مسح أعلى عدد من موانئ TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'قوموا بمسح أكبر عدد من الموانئ';

$GLOBALS["lang"]['schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['Schedule'] = 'الجدول الزمني';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'ويجعل اكتشاف الأجهزة المصنَّعة والإبلاغ عنها من الفئة الفنية المفتوحة باب العضوية حلاً فعالاً للمهنيين العاملين في مجال تكنولوجيا المعلومات الذين يتطلعون إلى تخفيض النفقات العامة وزيادة الرؤى.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - discovery, reporting &apos; more';

$GLOBALS["lang"]['scope'] = 'النطاق';

$GLOBALS["lang"]['Scope'] = 'النطاق';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'ويُعرف النطاق باسم نطاق الترخيص، مما يمثل ما إذا كان الضعف يؤثر على الموارد الخارجة عن السلطة الأمنية الأصلية للعنصر المستضعف.<br/><br/>القيمتان الوحيدتان الصحيحتان لهذه الصفة';

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

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'انظر أعلاه. ملاحظة - يمكن أن يكون ذلك أيضاً نتيجة لشهادة موقّعة ذاتياً على خادم برنامج العمل الطويل الأجل. ونحن نعمل على السماح بذلك في إطلاق سراح في المستقبل.';

$GLOBALS["lang"]['See our page on enabling'] = 'انظر صفحتنا للتمكين';

$GLOBALS["lang"]['Seed Discoveries'] = 'الكشف عن البذور';

$GLOBALS["lang"]['seed_ip'] = 'البذور IP';

$GLOBALS["lang"]['Seed IP'] = 'البذور IP';

$GLOBALS["lang"]['seed_ping'] = 'البذور';

$GLOBALS["lang"]['Seed Ping'] = 'البذور';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'إعادة تصدير البذور إلى القطاع الخاص';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'إعادة تصدير البذور إلى القطاع الخاص';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict to Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict to Subnet';

$GLOBALS["lang"]['Select'] = 'مختارة';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'اختيار ادمين المهام Create مهمة من القائمة';

$GLOBALS["lang"]['Select All'] = 'بيع';

$GLOBALS["lang"]['Select All Devices'] = 'اختيار جميع الأجهزة';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'اختيار مينو Manage -> (بلازماليس) قائمة بخطوط القاعدة';

$GLOBALS["lang"]['Select a Table'] = 'اختيار الجدول';

$GLOBALS["lang"]['Select an accredited certification body'] = 'اختيار هيئة اعتماد معتمدة';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'اختيار وتطبيق الضوابط المناسبة (المرفق ألف)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'اختيار <i>هيا الأمن</i> tab<br/><br/>Click on Access Permissions Edit Default';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'اختيار <i>التوقيع</i> حساب ونسخ القيمة <i>Issuer</i> (فقط URL نفسه). إستعير هذا إلى مفتوح <i>Issuer</i> الحقل.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'اختيار <i>هذا الحساب</i> صندوق الشيكات ووفر اسم الحساب وكلمة السر';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'اختيار قائمة البداية ونوعها <i>الخدمات. اضغطي على رمز الخدمات</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'اختيار نوع (أوث مينتود) لخلق وإسهام التفاصيل ذات الصلة.';

$GLOBALS["lang"]['Self Delete'] = 'التسمية الذاتية';

$GLOBALS["lang"]['Senegal'] = 'السنغال';

$GLOBALS["lang"]['sensitivity'] = 'الوعي';

$GLOBALS["lang"]['Sensitivity'] = 'الوعي';

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

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'تحديد وظيفة الكشف - لا تضع عادة هذا يدويا.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'يحددها مراجع الحسابات - أو يكتشف - النصوص الرئيسية. لا تستعد';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'وضع النص الخارجي للنسخة المرسملة للبيانات الداخلية.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'وضع النص الخارجي إلى أسفل.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'ضع النص الخارجي في الأعلى';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'تحديد حجم الجداول على شاشات القائمة (الطبيعية أو المدمجة).';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'ضع هذا إذا كنت ترغب في إدخال أنظمة من AD التي قد لا يكون الاتصال بها، ولكن تم رؤيتها من قبل AD منذ ذلك التاريخ.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'إنشاء " ديسكفري " على شبكة فرعية تقريباً متطابقة مع إدارة الاكتشافات العادية عبر واجهة الإنترنت والبنود الإضافية الوحيدة هي الساعة والنهار المقررين، واسم المهمة المقررة نفسها. يمكنك الاستفادة من هذا لتحديد عدة اكتشافات باستخدام مجموعات مختلفة من وثائق التفويض<br/><br/>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br/><br/>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. يمكنك اختيار هذا لتحديد أي مجموعة يجب أن تستمر المهمة. ولا يُدعم سوى مهام الاكتشاف للمجمعين. يرجى تحديد نفس البنود التي يتم الكشف عنها بصورة منتظمة، ولكن توفير المجموعة البديلة لإدارة هذه المهمة.';

$GLOBALS["lang"]['severity'] = 'الشدة';

$GLOBALS["lang"]['Severity'] = 'الشدة';

$GLOBALS["lang"]['severity_text'] = 'نص الشدة';

$GLOBALS["lang"]['Severity Text'] = 'نص الشدة';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'الشدة محسوبة من <code>base_score</code> ويمكن أن يكون واحدا من: لا شيء، منخفض، متوسط، مرتفع، حرج.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'الشحنة هي مجموعة من المواد الافتراضية. هذه يمكن العثور عليها بالذهاب إلى قائمة الطعام';

$GLOBALS["lang"]['short'] = 'قصير';

$GLOBALS["lang"]['Short'] = 'قصير';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'هل يجب أن أزيل جميع البيانات غير الجارية من هذا الجهاز؟';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'إذا استخدم هذا الملف (أو النمط) لاستبعاد الملفات من الإبلاغ. عادة، لملفات مراجعة الحسابات، هذا جاهز <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'إذا استخدم هذا البائع عند استرجاع نقاط الضعف من أول واف.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'يجب أن نضيف أجهزة من الخدمة البعيدة محلياً';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'هل يجب أن نطبق هذه الرخصة على الـ(أورغ) المختار وكذلك على أطفال (أورق)؟';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'هل يجب أن نراجع شبكة SAN إذا تم اكتشاف برنامج الإدارة.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'يجب أن نراجع النقاط';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'يجب أن نراجع موانئ المكتبات (نعم، لا، الخواديم فقط).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'يجب أن نراجع البرنامج';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب أن نعتبر ميناءاً مليئاً أن يكون ميناء مفتوحاً - ومن ثم نعلم هذا IP بأنه لديه جهاز ملحق؟';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'هل يجب أن نعتبر الميناء مفتوحاً ليكون ميناء مفتوحاً ومن ثم نعلم هذا IP بأنه لديه جهاز ملحق؟';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'يجب أن نحول اسم المضيف إلى أسفل الحقيبة';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'ينبغي أن ننشئ ملفاً يستند إلى نتيجة مراجعة الحسابات.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'يجب أن نكشف هذه المجموعة في واجهة الإنترنت';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'هل ينبغي أن نعرض هذا الاستفسار في قائمة التقارير الواردة في قائمة التقرير في واجهة الإنترنت.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'يجب أن نكشف هذا السؤال في قائمة التقارير تحت قائمة التقارير في واجهة الإنترنت';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'يجب أن نخفي نافذة السيناريو عند التنفيذ';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'يجب أن نتجاهل شهادة غير صحيحة أو ذاتية موقعة على SSL ونقدم النتيجة على أي حال.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'هل يجب أن نستعيد جميع أسماء الـ دي إن إس';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'ينبغي أن نجري مراجعة للحسابات ونقدمها (ذ/ن).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'يجب أن نختبر لـ (إم بي إم) باستخدام ميناء (يو دي 161)';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'يجب أن نختبر SSH باستخدام ميناء TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'يجب أن نختبر لـ (وام) باستخدام ميناء (تي سي) 135';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'هل يجب أن نفتح الوكيل';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'هل ينبغي لنا أن نستخدم النظام أو الوكيل من مستوى المستخدمين لتقديم نتائج مراجعة الحسابات.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'هل ينبغي أن نستخدم صف إنتاج WMI (لا توصي به شركة Microsoft) عند استرجاع البرمجيات المركبة.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن نستخدم هذه الطريقة لتوثيق وثائق تفويض المستخدمين مجموعة إلى <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'يجب أن نستخدم هذه الطريقة لتأثير أدوار المستخدمين الميدان <code>use_auth</code> يجب أن تكون جاهزة <code>y</code> لاستخدام هذا. مجموعة إلى <code>y</code> أو <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'يجب أن نستخدم هذه القيمة لمطابقة الأجهزة الخارجية والداخلية إندماجنا الافتراضي يستخدم IP و UUID هنا. إذا كان أي من هذه المباراة بين الجهاز الخارجي والداخلي، فإننا نعتبرها نفس الجهاز.';

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

$GLOBALS["lang"]['Slovak'] = 'سلوفاكيا';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'سلوفاكيا (جمهورية سلوفاكيا)';

$GLOBALS["lang"]['Slovenia'] = 'سلوفينيا';

$GLOBALS["lang"]['Slovenian'] = 'سلوفينيا(ن)';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'إذاً السيناريو لا يعمل على جهاز استجمام (غرر) نصوص (ويندوز) و(لينكس) و(ماكوس) تقبلان حجة التشهير ويمكن تحديد ذلك في النص نفسه، أو توفيره على خط القيادة. تشغيل النص باستخدام هذا الخيار المحدد إلى 5 ويجب أن نرى في أي جزء من النص يحدث الفشل. على سبيل المثال';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'بغض النظر عن كلمة عادية، ما الخيارات الأخرى هناك - أنا سعيد لأنك سألت - وفقاً للمعيار المسمى (أوديت)، لدينا العديد من المشغلين للتصفية. المشغلون الذين يمكن أن يسبقوا القيمة';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'إذاً لديك قضية تقدم وثائق تفويض مفتوحة لاكتشاف أجهزةك لدي إجابة - لا تفعل ذلك - بالتأكيد، أعني، الاكتشاف هو أفضل شيء منذ الخبز المقطع. لا تحتاج إلى معرفة قبل الوقت <i>ما على شبكتك</i>. ولكن كيف يمكنك استخراج البيانات من الأجهزة دون تقديم وثائق التفويض؟<br/><br/>وفي حالة الحواسيب، يتمثل أحد الخيارات السهلة في نسخ السيناريو المناسب لمراجعة الحسابات إلى الأجهزة المستهدفة ووضعه موضع التنفيذ في جدول زمني. المزيد من التفاصيل عن الويكي. سترسل الآلات بياناتها إلى "إفتتاح" على ذلك الجدول، كما لو كنت تستكشف والجهاز يدير ببساطة نص مراجعة الحسابات على جدول زمني (مرة أخرى، يمكنك قراءة نص مراجعة الحسابات) كما يقوله المستخدم ويرسل الناتج إلى الخادم. ولا توجد وثائق تفويض على الإطلاق.<br/><br/>والآن لدينا عملاء لـ(ويندوز) مزايا الوكيل الفعلي';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

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

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'جزر سليمان';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'الصومال، الجمهورية الصومالية';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'ويمكن تنفيذ بعض المجموعات - الاستفسارات وما إلى ذلك - انظر أدناه.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'وتوجد بعض الأمثلة في أسفل هذه الصفحة. ولدى جميع النقاط النهائية أيضا قائمة دنيا بالميادين المطلوبة. هذه أسفل.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'بعض نماذجنا تدعم الانتقال الجديد إلى نظم البيانات باستخدام التجهيز الجانبي للخواديم هذا الكتل يحسن أوقات الحمل';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'وحدث خطأ آخر عند محاولة ربط الخادم التابع للرابطة. يمكن الاتصال به <i>الاتصال</i> وقد نجح الأمر أعلاه، ولكن لسبب آخر، لم يتم الالتزام. تحقق من السجلات على خادم شرطة لوس أنجلوس';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'هناك خطب ما فتح الباب لا يمكن قراءة <i>الأورام</i> طاولة';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'هناك خطب ما فتح الباب لا يمكن قراءة <i>الأدوار</i> طاولة';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'أحياناً اكتشاف العميل لا يناسب حقيبتك لَرُبَّمَا PCs عِنْدَهُ جدرانُ حريقُ ضيقةُ. ربما ليسوا على الشبكة عندما يتم تحديد مواعيد اكتشافاتك ربما يستخدمها العمال عن بعد مهما كانت الحالة، هنا حيث يمكن للعميل أن يساعد. وضعه على آلة الهدف وسوف <i>الدخول</i> مع خادمك المفتوح على جدول زمني وقبول المهام والمهمة الأكثر شيوعاً التي يطلبها الخادم هي أن يراجع العميل نفسه ويرسل النتيجة.';

$GLOBALS["lang"]['Sort'] = 'Sort';

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

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'يحدد قائمة مفصَّلة للأهداف (لا أماكن) التي ستستبعد من المسح. القائمة التي تمر بها تستخدم النسيج الطبيعي لـ (نامب) لذا يمكن أن تشمل الأسماء المستضافة';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'إبدأْ مصففَ الإنترنتَ ويَذْهبُ إلى';

$GLOBALS["lang"]['started_date'] = 'بدأت';

$GLOBALS["lang"]['Started Date'] = 'بدأت';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'ابتداء من حزيران/يونيه 2018 وقد نفذت شركة Google نموذجاً للتسعير أولاً بأول لمنهاج خرائط غوغل. وفي السابق، يمكن لمعظم المستعملين ذوي الاستخدام المعتدل أن يستخدموا خرائط غوغل، التي تدمج في الصور الفوتوغرافية والحرفية المفتوحة/المؤسسة، مجانا. سياسة غوغلز الجديدة مبينة هنا';

$GLOBALS["lang"]['Starts With'] = 'يبدأ مع';

$GLOBALS["lang"]['state'] = 'الدولة';

$GLOBALS["lang"]['State'] = 'الدولة';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'الحالة';

$GLOBALS["lang"]['Status'] = 'الحالة';

$GLOBALS["lang"]['Storage'] = 'التخزين';

$GLOBALS["lang"]['storage_count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage Count'] = 'كونت التخزين';

$GLOBALS["lang"]['Storage area network'] = 'شبكة منطقة التخزين';

$GLOBALS["lang"]['Storage-Area Network'] = 'شبكة تخزين - آريا';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'النوع الفرعي';

$GLOBALS["lang"]['Sub Type'] = 'النوع الفرعي';

$GLOBALS["lang"]['subject_key_ident'] = 'الموضوع الرئيسي';

$GLOBALS["lang"]['Subject Key Ident'] = 'الموضوع الرئيسي';

$GLOBALS["lang"]['Submit'] = 'Submit';

$GLOBALS["lang"]['Submit Online'] = 'Submit Online';

$GLOBALS["lang"]['Submitted From'] = 'مقدمة';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

$GLOBALS["lang"]['Subscription ID'] = 'هوية المشتركين';

$GLOBALS["lang"]['suburb'] = 'الضواحي';

$GLOBALS["lang"]['Suburb'] = 'الضواحي';

$GLOBALS["lang"]['Success'] = 'النجاح';

$GLOBALS["lang"]['Sudan'] = 'السودان';

$GLOBALS["lang"]['Sudo Password'] = 'كلمة السر';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'كلمة سر (اختياري)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'موجز';

$GLOBALS["lang"]['Summaries'] = 'موجز';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'الملخصات هي استفسار واحد ضد قاعدة البيانات مع <i>المجموعة</i> القيادة وباستخدام هذه الطريقة البسيطة يمكننا بسهولة أن نصنع ملخصا لأي سمات تقريبا.<br/><br/>لم نعد نحتاج إلى تقرير منفصل لكل منا <i>النوع</i> جهاز نحن الآن ببساطة لدينا موجز <i>أجهزة النوع</i> وتظهر النتيجة يمكنك النقر على نوع معين من القائمة ورؤية أجهزة المطابقة وفي هذه الحالة، يحل موجز واحد محل 78 تقريرا (من المحتمل) (هناك 78 نوعا من الأجهزة).<br/><br/>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>النقر</i> الصلة بالأجهزة الفعلية والاستفسار مجرد قائمة بالبنود التي لا تربطها صلات أخرى. على النحو الوارد أعلاه - هذا الموجز كمجموع <i>التقرير + التقرير الفرعي</i>في حين أن الاستفسار هو مجرد تقرير واحد.<br/><br/>ولدى الملخصات نموذج مجموعة مختلف للموارد الأخرى في إطار المبادرة المفتوحة. ويبين هذا النموذج الموجز كما تتوقعون، ويظهر أيضا أزرارا بعدد من الموارد الأخرى. هذه الصفحة مصممة لتكون مدخل مفتوح';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'وترمي الملخصات إلى تجميع البنود حسب عمود مطابق معين ثم إلى توفير صلة بأجهزة فردية. وكان من شأن ذلك أن يكون بندين مختلفين في النسخ السابقة من &quot; &quot; ، هما تقرير وتقرير فرعي. لقد جمعنا هذه الآن إلى ما نسميه ملخصا.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'وتقدم الملخصات قدرات الإبلاغ عن عمليات الحفر. بسيط، لطيف، قوي.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'وتأخذ الملخصات نفس الحجج التي تسوقها كويرس.';

$GLOBALS["lang"]['Summary'] = 'موجز';

$GLOBALS["lang"]['Sunday'] = 'الأحد';

$GLOBALS["lang"]['supplier'] = 'مورد';

$GLOBALS["lang"]['Supplier'] = 'مورد';

$GLOBALS["lang"]['Support'] = 'الدعم';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'الأنواع المدعومة <code>subnet</code>.. <code>seed</code> و <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'دعم الامتثال للشروط القانونية والتنظيمية';

$GLOBALS["lang"]['Suriname'] = 'سورينام';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'مراجعة المراقبة: مراجعة الحسابات السنوية للحفاظ على التصديق';

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

$GLOBALS["lang"]['Table'] = 'الجدول';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'تاجز ';

$GLOBALS["lang"]['Taiwan'] = 'تايوان';

$GLOBALS["lang"]['Tajikistan'] = 'طاجيكستان';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '1 - يحيط علما بجميع النواتج والإجراءات لكل بند حسب الاقتضاء.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'الحاسوب المستهدف';

$GLOBALS["lang"]['task'] = 'المهام';

$GLOBALS["lang"]['Task'] = 'المهام';

$GLOBALS["lang"]['tasks'] = 'المهام';

$GLOBALS["lang"]['Tasks'] = 'المهام';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'ويمكن أن تكون المهام واحدة من عدة أنواع متميزة: خط الأساس، الاكتشاف، التقرير، Query، موجز أو جامع.';

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

$GLOBALS["lang"]['test_os'] = 'اختبار Os';

$GLOBALS["lang"]['Test Os'] = 'اختبار Os';

$GLOBALS["lang"]['test_subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['Test Subnet'] = 'الشبكة الفرعية للاختبار';

$GLOBALS["lang"]['tests'] = 'الاختبارات';

$GLOBALS["lang"]['Tests'] = 'الاختبارات';

$GLOBALS["lang"]['Text'] = 'النص';

$GLOBALS["lang"]['Thai'] = 'تايلند';

$GLOBALS["lang"]['Thailand'] = 'تايلند';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'شكراً لك على بدء رحلتك مع أفضل أدوات الاكتشاف والجرد حولها';

$GLOBALS["lang"]['Thanks to'] = 'شكراً';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'هذا هو! لقد قمت بتحرير صفات الأجهزة التي تحتاجها';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The <i>الأدوار</i> وتسمح نقطة النهاية لك بإدارة مجموعة التصاريح (الكرواتية، والقراءة، والتحديث، وتحذف) التي تمنح للمستعملين وتطبق على كل نقطة نهاية.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'الـ(آي بي آي) يستخدم كعكة يمكنك طلب كعكة بإرسالها لـ (أوستر) إلى (يور إل) تحتها اسم المستخدم و سمات و قيم كلمة السر';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'مجال الدليل النشط لاسترجاع قائمة بالشبكات الفرعية';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'خادم الدليل الفعّال لاسترجاع قائمة من الشباك الفرعية';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'نقطة نهاية التطبيقات تسمح لك بتعريف طلب يمكنك بعد ذلك الانضمام إلى جهاز (أو أجهزة)';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu category for Queries. إذا رأيتم شيئاً واحداً من الأنواع البشعة ستلاحظون أن عزو النوع يجب أن يتم اختياره من صندوق الإنزال هنا تخزن تلك القيم لذلك، إذا كنت ترغب في إضافة نوع جديد يتم اختياره لأماكن، إضافة ذلك باستخدام السمات الخاصة.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'القياس الآلي يلتقط الإجابة على السؤال <strong>هل يمكن للمهاجم أن يقوم بتشغيل أحداث الاستغلال الآلي لهذا الضعف عبر أهداف متعددة؟</strong> بناء على الخطوات 1-4 من سلسلة القتل. وهذه الخطوات هي الاستطلاع، والتسليح، والتسليم، والاستغلال (غير محدد، لا، نعم).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'وقد نشرت لجنة التحقق في قائمة لجنة التحقيق الدولية وأدرجت في مجموعة بيانات اتفاقية فيينا. ابتلاع أولي فقط';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'The CVE has been updated after initial analysis. وقد تكون بيانات إثراء النيتروز قد نقحت.';

$GLOBALS["lang"]['The CVE identifier.'] = 'جهاز تحديد الهوية';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'ولا تُعطى الأولوية حالياً للإثراء على أساس القيود المفروضة على الموارد أو لأسباب أخرى.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'The CVE is queued for enrichment by NVD analysts. لا توجد بيانات تفصيلية بعد';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'السحابة التي تملك هذا البند الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'نوع جهاز كشف النبض هو أحدث طريقة فعالة جداً للشبكات الزحفية، مما يعطيك القدرة على استهداف شبكتك بشكل ضيق أو على نطاق واسع كما تحتاج. إنه سريع، يعمل وهو عظيم.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'الكشافة الخيارات التي نشحنها مفصلة في الجدول أدناه وكما ورد أعلاه، يمكن لمستعملي المشاريع أن يخلقوا المزيد من هذه الأصناف المشحونة أو أن يحرروها.';

$GLOBALS["lang"]['The Elevated User query'] = 'استفسار المستعمل العالي';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'The Executables feature scans the disk of a tool as part of the audit and checks that every executable file is known to the package manager. ولأنه يستخدم مدير الطرد، فإن السمة تنطبق على الأجهزة المستهدفة في لينكس فقط، وبدلاً من ذلك، لا تنطبق إلا على عمليات التوزيع التي تقوم على أساس الترميز أو التلقيم. أي شيء من "ريدهات" أو "ديبيان" يجب أن يعمل';

$GLOBALS["lang"]['The FROM'] = 'من';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'The ISO/IEC 27001 certification process and its key elements.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'The ISP or Telco providing this link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'سجل (جوسون) من (ميتر)';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'The JSON record from the NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'The LDAP OU of this user (if LDAP is used).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'ولا يمكن ربط خادم برنامج المساعدة الإنمائية. على الإطلاق تأكّدْ هو قابلُ للإلتِصاق مِنْ الخادمِ المفتوحِ. تفقد المرفأ الصحيح مفتوح لخادم "أوديت" أي نغمة مِنْ الخادمِ المفتوحِ يُشوّفُ هذا. غطّي خوادمك لـ (دي بي) بدولار حاول:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'نوع الخادم غير صحيح يجب أن يكون إما <i>دليل نشط</i> أو <i>مفتوحة</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'وكان خادم برنامج العمل الطويل الأجل متصلاً به وقبلت وثائق تفويض المستخدمين للحصول على ملحق.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'سيختبر (لينكس) المُفتَرَض، ويضع، إذا لزم الأمر، مُعاليه مفتوحه من مستودع توزيعك، بما في ذلك وضع نظام (نامب). وهذا مطلوب للكشف عن هذه المواد من جانب مستخدم غير ملوث. ويتلقى هذا الدعم الدعم من شركة RedHat/CentOS و Debian/Ubuntu. إذا كنت بحاجة إلى تركيب يدوي Nmap:<br/><br/>بالنسبة لـ (ريد هيت) و (سنتوس) تفعل إذا رفعت مستوى استخدام (يوم) فعليك إعادة تطبيق هذا <i>Chemod</i> (ج) وضع الإطار.';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'الموقع الذي يحتوي على هذه الشبكة الروابط إلى <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'مركز الـ "إن في دي" الخاص بالقاعدة';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'The National Institute of Standards and Technology is the federal technology agency. وهي تقدم التكنولوجيا الرسمية وقياس العلم والمعايير.';

$GLOBALS["lang"]['The Network to Discover'] = 'شبكة الكشف';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'توقيت النغمة';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'وينبغي الإبلاغ عن هذه المجموعة ضدها. فارغ للجميع استخدمي النسبة المئوية للإشارة كبطاقة جامحة سيتم اختباره ضد المجموعة و العائلة و الاسم في هذا الترتيب';

$GLOBALS["lang"]['The Open-AudIT API'] = 'AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'السحابة ذات الصلة الروابط إلى <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'The Open-Aud شفرة خادم تكنولوجيا المعلومات تم طردها في هذا الملف';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'The Open-Aud تم تطبيق شفرة خادم تكنولوجيا المعلومات ضمن هذه المهمة';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'ويوفر النظام الإيكولوجي للشبكة أدوات متعددة لمساعدة المديرين ومراجعي الحسابات على تقييم خطوط الأساس الأمنية وقياسها وإنفاذها، بما في ذلك مجموعة واسعة من أدلة التصعيد وخطوط الأساس التكوينية التي وضعها مجتمع المصدر المفتوح، بما يكفل تمكينكم من اختيار سياسة أمنية تلبي احتياجات منظمتكم على أفضل وجه، بغض النظر عن حجمها.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'المنظمة التي تملك هذا البند. الروابط إلى <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'The Process Identifier of the running associated discovery.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU positon من قمة هذا الجهاز.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'The SCAP is a specification for expressing and manipulating security data in standardized ways. يستخدم البرنامج عدة مواصفات فردية في إطار التنسيق من أجل التشغيل الآلي للرصد المستمر، وإدارة الضعف، والإبلاغ عن تقييم الامتثال للسياسات الأمنية';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'The SELECT section of the query should use full dot notation and also request the field with its full dot name. أجهزة مؤثرة id as `devices.id &apos; . وينبغي اختيار كل ميدان على هذا النحو لتمكين الجانب من مجموعة دول جورجيا وأوكرانيا وأذربيجان ومولدوفا من التسمية.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'يجب أن يحتوي القسم الخاص بجهاز تحديد المواقع على الأعمدة المؤهلة بالكامل وأن يحدد بعض الأعمدة.';

$GLOBALS["lang"]['The SNMP community string.'] = 'سلسله المجتمع';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'تصاريح التوثيق';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'The SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'The SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'مستوى الأمن';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'اسم الأمن SNMP ضد 3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'The SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'The SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'لا يمكن أن تحتوي SQL <strong>WHERE @filter OR</strong>. أن SQL لن تنفذ <strong>WHERE @filter AND</strong> ويسمح بالاستفسارات.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'The SQL queries used in Open-AudIT require the use of the backtick - ` character and not the standard single quote for fields. على معظم لوحات المفاتيح في الولايات المتحدة يقع المفتاح الخلفي في الطابق العلوي من لوحة المفاتيح على لوحة مفاتيح أمريكية (ماك) يقع المفتاح الخلفي بجوار مفتاح (سيفت) ولا يزال الإقتباس الموحد يستخدم لحصر القيم كما توضح الأمثلة الواردة أدناه.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'The SQL query is essentially broken into three parts.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'إن تطبيق المعايير في نظام المراجعة المفتوحة يسمح لك، قبل الوقت، بإكمال الأسئلة التي يحتاجها مراجعو الحسابات عند استكمال شهادة المعيار 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL of the external system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL of your Open-AudIT سيرفر أن هذا المجمّع سيبلغ إلى (لا تعقّب)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'The URL the audit scripts should submit their result to.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'نقطة نهاية المستعمل تسمح لك بإدارة حسابات المستخدمين في قاعدة البيانات المفتوحة';

$GLOBALS["lang"]['The WHERE'] = 'المكان';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'الجزء الخاص بك <em>يجب أن يجب</em> احتواء';

$GLOBALS["lang"]['The Windows'] = 'النوافذ';

$GLOBALS["lang"]['The Windows log may say the following'] = 'سجل النوافذ قد يقول ما يلي';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'ويجب أن يكون للحساب كلمة سر؛ ولا تسمح شركة WMI بأي كلمة سر فارغة.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'ويجب ألا تتضمن كلمة السر في الحساب (اقتباسات مزدوجة). وهذا يرجع إلى أن السيناريو (والكتاب) لا يمكن أن يبخر قيم الحجة التي تتضمن اقتباسات مزدوجة. هم ببساطة مُجردون. لا (قبل أن تسأل) الهروب لن ينجح هذا هو الحد من النصوص ولا علاقة له بفتح الباب.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'الاسم الكامل الفعلي لهذا المستخدم';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'The address of the Open-AudIT server submit page.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'وقدم المدير وثائق تفويض استُخدمت بنجاح لإلزام برنامج العمل دون الإقليمي.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'وقدم المدير وثائق تفويض للالتزام بخدمة إدارة الشؤون الاقتصادية والاجتماعية، ولكن لم يقبلها أمين البرنامج. (ب) التحقق مرتين من أعمال وثائق التفويض في خادم برنامج العمل الطويل الأجل، ثم التحقق (أو إعادة تحديدها) من دخول خادم برنامج المساعدة الإنمائية المفتوح باب العضوية.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'كما أن الوكيل والخادم ذكيان بما يكفي لتحديث العميل ذاتياً إذا تم تركيب نسخة جديدة على الخادم (يقال بعد رفع مستوى قاعدة البيانات المفتوحة).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'The agent should download a fresh copy of the audit script, run it and submit the result to the server.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'وينشئ هذا الطلب أجهزة مراجعة حسابات مؤقتة هنا، وتنسخها إلى الأجهزة المستهدفة، ثم تحذفها.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'خط الأساس المرتبط به. الروابط إلى <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'The associated discovery (if required). الروابط إلى <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'سمة الاختبار (من) <code>devices</code> الجدول).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'The attribute to test (must match an external field name from below).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'وفيما يلي سمات خيارات المسح الاكتشافي.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'نص مراجعة الحسابات الذي يقوم على أساس تكييفك';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'The audit script will use the files[] array and retrieve the file details.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'وكل نصوص مراجعة الحسابات تقبل حجة التشهير. يمكنك تشغيل السيناريو باستخدام ذلك ومعرفة أكثر تفصيلا ما هي المسألة. وإذا لم تستطع فهم ذلك هذا ما نحن هنا لأجله افتحي قضية دعم وسنبدأ العمل في وقت قصير';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'الطريق الأساسي الذي نبحث عنه للمستعملين';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'الخطوات الواردة أدناه ليست خطأ أو فريدة من نوعها في فتح الباب، وستؤثر على <strong>أي</strong> إكتشاف تطبيق باستخدام جهاز الإنذار المبكر و/أو النوافذ.';

$GLOBALS["lang"]['The benchmark type.'] = 'النوع المرجعي';

$GLOBALS["lang"]['The building the rack is located in.'] = 'المبنى الذي يوجد فيه الرف';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'The calculated number of devices to be created externally.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'The calculated number of devices to be created in Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'هويّة العميل هويّة تطبيق دليل (أزور). سر العميل هو المفتاح الذي تعطيه هذا الطلب';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'المُجمّع هو أساساً تركيب كامل لـ "إفتتاح" <i>جامع</i> نمط. المُجمّع مُصمّم للكشف على الشبكة التي يوجد بها. وليس مقصورا على تلك الشبكة فحسب، بل من الناحية المثالية ستكون أساسا جامعا واحدا لكل شبكة فرعية عند الاقتضاء. ويقوم الخادم بتوصيل المجمع على جدول زمني ويقوم بالاكتشاف على الشبكة على النحو المحدد.<br/>عندما يستعد يعمل المجمّع كخادم غير معتمد، ببساطة يرسل جميع الأجهزة التي وجدت إلى الخادم الرئيسي.<br/><br/>وبمجرد تركيب المجمّع وتشكيله، يتم التحكم فيه على الخادم (ليس على طريقة &quot; قف وحد &quot; ).<br/><br/>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br/><br/>وبتقصير المجمّع (ليس في وضع الوحدة) سيطلب من الخادم أي مهام اكتشافية كل 5 دقائق (يمكنك مصادرة هذا على خادم المجمّعين الجدد باستخدام مجمّع المواد التكوينية (دقائق) هناك لأي مهام اكتشافية يقوم بها المجمّع لمدة 0,5,10,15, إلخ.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'المُجمّع هو أساساً تركيب كامل لـ "إفتتاح" <i>جامع</i> نمط. ومن شأن هذه الطريقة أن تقلل من القدرة الوظيفية الواضحة في محاولة لتبسيط الطلب وتركيزه. وهي مصممة لجمع المعلومات عن الشبكات والأجهزة المحلية، حيث يشكل الجدار الناري و/أو الشبكة مشكلة من الخادم.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'المجمّعون الداخليون إستعملوا عندما يديرون اكتشافاً';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'اسم العمود من الطاولة الخارجية ينبغي أن يكون أحد الفئات أو البيئة أو الوضع أو النوع أو القائمة.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'تم اعدام القيادة على الجهاز المستهدف أو الخادم المفتوح تم اعدامه أثناء الاكتشاف';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'تشكيلة مجموعتكم يمكن أن تكون: <code>active/active</code>.. <code>active/passive</code>.. <code>N+1</code>.. <code>N+M</code>.. <code>N-to-1</code>.. <code>N-to-N</code>.. <code>other</code> أو فارغ';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'كلمة السر إذا كانت وثائق التفويض هي مفتاح SSH، وهذا هو كلمة السر المستخدمة لفتح المفتاح وهو اختياري.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'وقد فشلت وثائق التفويض التي قدمها المستخدم.';

$GLOBALS["lang"]['The credentials username.'] = 'اسم مستخدم وثائق التفويض.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'التاريخ والزمان الحاليان في الشكل: Y-m-d مرحباً';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'The current date in Y-m-d format.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'الوضع الحالي لجهاز كشف السحاب';

$GLOBALS["lang"]['The current status of the discovery.'] = 'الوضع الحالي للإكتشاف';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'اللوحة التي ستظهر عن طريق التقصير لهذا المستخدم الروابط إلى <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'ولا تظهر البيانات المخزنة في قاعدة البيانات في الطلب المترجم. نترك البيانات كما هي. غير أنه لا يوجد ما يمنعك، المستخدم، من تغيير اسم (على سبيل المثال) بند في قاعدة البيانات إلى لغتك.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'البيانات التي ستستخدمها في <code>LIKE</code> شرط لا (وفقاً للبروتوكول الاختياري) <code>equals</code> شرط مثال آخر <code>comput</code>سيعيد كل الحواسيب ولأننا نستخدم <code>LIKE</code> شرط، هو غير مراعي للحالات.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'يمكن العثور على شيما قاعدة البيانات في التطبيق إذا كان لدى المستخدم قاعدة بيانات: اقرأ الإذن بالتسجيل في قائمة الطعام: ادمين قاعدة البيانات';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'The database version and web version are inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'تاريخ انتهاء صلاحية الترخيص';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'ويتوقف الصانع عن العمل بالبرمجيات. يستعاض عنها عادة بنسخة جديدة. وقد تظل الصيانة متاحة.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'The date the software no longer receives updates and is effectively discontinued altogether. توقف الصيانة.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'تاريخ تغيير هذا البند أو إضافته (القراءة فقط). ملاحظة - هذا هو العصر من الخادم -';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'التاريخ/الوقت الذي أنشئت فيه هذه النتيجة.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'يوم الشهر الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل يوم).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'يوم الأسبوع الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل يوم).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'مستوى التطهير (الناتج الذي سيصل إلى نافذة سريعة). الانخفاض يعني انخفاض الناتج مع عدم وجود ناتج.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'خيار المسح الافتراضي هو مجموعة (أولترا فاست)';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'The default language assigned to any user created by this method.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'يجب أن يستجيب الجهاز لحفلة "نامب" قبل أن يُعتبر على الإنترنت';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'الجهاز في غرفة العمليات الروابط إلى <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'الرابط المباشر للنص هو';

$GLOBALS["lang"]['The email address of the reciever'] = 'عنوان البريد الإلكتروني للمحقق';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'The enterprise binary from FirstWave is required for a license. من فضلك تحميل مفتوح';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'وخط الأساس المرتبط به كله هو هذا الناتج.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'ويمكن أن يؤثر الضعف المستغل على الموارد الخارجة عن السلطة الأمنية للعنصر المستضعف. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'والضعف المستغل لا يؤثر إلا على الموارد داخل نفس السلطة الأمنية التي تؤثر على العنصر المستضعف. وبعبارة أخرى، تظل أعمال المعتدي داخل الحدود الاستئمانية الأصلية.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'هويّة الموقع المرجعية الخارجية عادة ما تكون مأهولة من قبل كلود';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'The fields associated with an Integration are stored in the database as a JSON array of objects. لكل ميدان خصائصه التالية';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'أول مرة إسترجعت فيها (أوديت) تفاصيل هذا الجهاز';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'الطابق الذي يوجد فيه الرف';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'الجدول الأجنبي المرجعي. ينبغي أن يكون واحداً من: الأجهزة أو المواقع أو الأجهزة أو الاستفسارات.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'شكل بياناتك يجب أن يكون في شكل';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'الشكل المستخدم للناتج الذي سيرسل بالبريد الإلكتروني.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'العمود المؤهل تأهيلاً كاملاً الذي سيجمع عليه ملاحظة: عندما يكون النوع = حركة المرور، يمثل هذا السؤال الأحمر';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'The fully qualified name returned by the external system. EG: بالنسبة لنظام المعلومات الإدارية الوطني نستخدم التشكيل. الدور نوع.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'طاولة مؤهلة بالكامل ويمكن توفير عدة مواد، تفصلها فاصلة (لا أماكن).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'The generated SQL query to test for this vulnerability. ويمكن تحرير هذا المجال لتصحيح الاستفسار حسب الاقتضاء.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'The group of devices on which the baseline was run against.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'The group that provides a list of devices for the integration. الروابط إلى <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'ساعة اليوم الذي ينبغي أن تنفذ فيه هذه المهمة (* لكل ساعة).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'نسخة من الجهاز المترابط الروابط إلى <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'عمود تحديد الهوية في قاعدة البيانات (يقرأ فقط).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'نبرة الشدة';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'القيمة الداخلية التي أعيدت صياغتها في هذا الشكل.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'عنوان الشوط في طريقة (أوث)';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'اللغة التي تترجم واجهة الويب للمستعمل';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'آخر موعد وساعة أعدم هذا البند (اقرأ فقط).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'آخر مرة إسترجعت فيها (أوديت) تفاصيل هذا الجهاز';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'آخر مرة تم تنفيذ هذه المعايير';

$GLOBALS["lang"]['The last time this integration was run.'] = 'آخر مرة أجري فيها هذا الإدماج';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'نقطة نهاية الترخيص تسمح لك بتتبع عدد التراخيص التي وجدت على أجهزة الخاص بك.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'المنطق لمطابقة الجهاز وارد في أجهزة ملف ساعتها';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'لا تمنح أجهزة الإذن بالكشف عن الآلات تصريحاً بالتشغيل المحلي لطلب شركة كوم سيرفر';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'الحد الأقصى للوزن الجسماني (في KGs) هذا الرف يمكن أن يصمد.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'الحد الأقصى لوحدات مكافحة الإرهاب هذه';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'الحد الأدنى للمواصفات المطلوبة';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'دقيقة الساعة التي ينبغي أن تنفذ فيها هذه المهمة (* لكل دقيقة).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'شهر السنة التي ينبغي أن تنفذ فيها هذه المهمة (* لكل شهر).';

$GLOBALS["lang"]['The name given to this item.'] = 'الاسم المعطى لهذا البند.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'الاسم المعطى لهذا البند. من الناحية المثالية يجب أن يكون فريداً';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'The name given to this user (used to login). من الناحية المثالية يجب أن يكون فريداً';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'The name of the associated cloud (if required).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'The name of the software package, as reviewed by Open-AudIT. استخدمي النسبة المئوية للإشارة كبطاقة جامحة';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'اسم المستخدم الذي غير آخر مرة أو أضاف هذا البند (اقرأ فقط).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'اسم مقدم الطلب.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'The network in the format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'الشبكة الفرعية لتنفيذ الاكتشاف';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'ويدير العميل الجديد نسخة من النص القديم لمراجعة الحسابات في إطار التحضير لاستهلاك المصنف VBScript (نعم، إنه قادم).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'عدد وحدات خفض الانبعاثات التي تشغل هذا الجهاز';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'عدد المواقع المرتبطة بها. الروابط إلى <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'عدد الشبكات المرتبطة بها. الروابط إلى <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'عدد الأجهزة المراجعة في هذه السحابة الروابط إلى <code>devices.cloud_id</code> و <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد أوجه الضعف الحاسمة التي تعاني منها منطقة أول وايف (ليس في قاعدة بياناتك).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'عدد الأجهزة التي وجدها هذا الاكتشاف';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'عدد الأجهزة في المجموعة المرتبطة بها.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة في هذه السحابة مع حالة تشغيل. الروابط إلى <code>devices.cloud_id</code> و <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'عدد الأجهزة في هذه السحابة مع حالة توقف الروابط إلى <code>devices.cloud_id</code> و <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'عدد الأجهزة في هذه السحابة الروابط إلى <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'وسيتم تنفيذ هذا المعيار المرجعي على عدد الأجهزة. مأخوذة من <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'عدد الأجهزة التي تحد من هذا الاكتشاف';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد نقاط الضعف العالية الخطورة التي تحتفظ بها أول واف (ليس في قاعدة بياناتك).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد نقاط الضعف المنخفضة الخطورة التي تحتفظ بها أول واف (ليس في قاعدة بياناتك).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'عدد مواطن الضعف المتوسطة التي تحملها أول واف (ليس في قاعدة بياناتك).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'عدد التراخيص المشتراة.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'عدد الثواني لمحاولة التواصل مع الرقم المستهدف';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'عدد أوجه الضعف التي لا توجد بها شدة لدى أول واف (ليس في قاعدة بياناتك).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'التعويض هو عدد الأجهزة التي ترغب في إعادة البيانات من.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'The only required permission / policy name (in our testing) is';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'العمود الثانوي الاختياري. ملاحظة: عندما يكون النوع = حركة المرور، يمثل هذا السؤال الأصفر';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'العمود الثالث الاختياري. ملحوظة: عندما يكون من النوع = حركة المرور، هذا يمثل الاستعلام الأخضر';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'طلب إسترجاع المعلومات هو متشائم';

$GLOBALS["lang"]['The orientation of this device.'] = 'توجه هذا الجهاز';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'كلمة السر (إذا لم تستخدم المستخدم الذي يدير النص).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'وتستند الطريقة الرئيسية للإذن (ما يمكن للمستعمل أن يفعله) الآن إلى دور المستعملين. وتُعرَّف الأدوار بأنها &quot; org admin &quot; ، والمراسل، والمستعمل حسب التقصير. ولكل دور مجموعة من التصاريح (الاختبار، القراءة، التحديث، حذف) لكل نقطة نهاية. وينبغي أن تشمل الأدوار القياسية التي تشحن 99.9 في المائة من حالات الاستخدام. وتتاح القدرة على تحديد أدوار إضافية وتحرير الأدوار القائمة في المؤسسة المفتوحة للاستثمار.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'The process identifier of this queue item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'The process that was used last to retrieve details about the tool';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works. وتُرخَّص لشركة &quot; أوديت &quot; من الموجة الأولى في إطار شركة AGPLv3 أو فيما بعد بترخيص شركة أو مهنية بموجب شروط تجارية. يمكن أن تشمل المكتبات والمشاريع التالية، التي يتم توريدها دون تغيير وترخيص لها على النحو المبين:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'The query that provides a list of devices for the integration. الروابط إلى <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'رقم الأصول';

$GLOBALS["lang"]['The rack asset tag.'] = 'بطاقة الأصول';

$GLOBALS["lang"]['The rack bar code.'] = 'رمز الثكنة';

$GLOBALS["lang"]['The rack model.'] = 'نموذج الرف';

$GLOBALS["lang"]['The rack serial.'] = 'مسلسل الرف';

$GLOBALS["lang"]['The rack series.'] = 'سلسلة الرف';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'الرف هذا الجهاز موجود الروابط إلى <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'The recommended process of addressing and fixing identified security vulnerabilities. وينطوي ذلك عادة على تطبيق اللواصفات أو التحديثات أو التدابير الأخرى للقضاء على المخاطر التي تشكلها مواطن الضعف.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'التأشيرات المنتظمة لدليلك Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'The requested properties should be in a comma-separated list. وينبغي أن تكون الممتلكات مؤهلة تأهيلاً كاملاً - أي نظام - اسم مستعار (ليس مجرد اسم مضيف).';

$GLOBALS["lang"]['The result of the command.'] = 'نتيجة القيادة';

$GLOBALS["lang"]['The room the rack is located in.'] = 'الغرفة التي يوجد بها الرف';

$GLOBALS["lang"]['The row the rack is located in.'] = 'الصف الذي يوجد فيه الرف';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'The search for group on the LDAP server failed. تحقق من سجلات الخادم هل قمت بإنشاء هذه المجموعات (للأدوار والأعشاب) على خادم برنامج العمل الطويل الأجل وعينت مستخدمي برنامج العمل دون الإقليمي لهم؟';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'المفتاح السري الذي استخدمته مقترناً بمفتاح (إي دبليو إس) الخاص بك';

$GLOBALS["lang"]['The software end-of-life date.'] = 'موعد نهاية الحياة';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'تاريخ نهاية الخدمة';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'The specific database column from the specified database table.';

$GLOBALS["lang"]['The specific database table.'] = 'طاولة قاعدة البيانات المحددة';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'خيارات التوقيت القياسية سابقاً في T4 (عديمي)';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'خيارات التوقيت القياسية عادة ما نستخدم - 4 (معتدلة) كما يوصى بهذا من أجل ربط محترم بالنطاق العريض أو الإنترنت.';

$GLOBALS["lang"]['The status of this integration'] = 'حالة هذا الإدماج';

$GLOBALS["lang"]['The status of this queued item.'] = 'حالة هذا البند المكشوف.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'وتبين الخطوات الواردة أدناه العملية.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'الهدف من شركة آي بي هذه المراجع (إن وجدت).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'الحاسوب المستهدف لمراجعة الحسابات يعني "المصدر المحلي"';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'The template for the link to be generated per result line.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'النص المتعلق بقاع المخطط في خريطة خطية (فقط).';

$GLOBALS["lang"]['The text that is displayed.'] = 'النص الذي تم عرضه';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'The timestamp after which, this task should run. على سبيل المثال، القيام بمهمة بعد أول حزيران/يونيه 2017 في الساعة 10: <code>2017-06-01 09:59:00</code>. وينبغي أن تكون هذه القيمة صفراً (مثل، 09، وليس 9). العجز عن سداد هذه القيمة <code>2000-01-01 00:00:00</code> وهذا يعني التقصير، أن المهمة المقررة ستنفذ في وقت التنفيذ المقرر المقبل.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'مجموع ناتج وحدة مكافحة الإرهاب من خلال هذا المسار.';

$GLOBALS["lang"]['The type of device.'] = 'نوع الجهاز';

$GLOBALS["lang"]['The type of organisation.'] = 'نوع التنظيم';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'نوع الرف (الكمال، الطاقة، الشبكة، إلخ).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'نوع المهمة واحد من: خط الأساس، المرجع، الاكتشاف السحابي، الاكتشاف، التكامل، التقرير، الاستفسار.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'نوع الإدماج (يسمى عادة باسم النظام الخارجي).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. فقط الأشعة المقطعية التي تستخدم لرسم قواعد الجدار الناري تصنف الموانئ في هذه الولاية وقد يساعد مسح الموانئ غير المجهزة بأنواع المسح الضوئي الأخرى مثل مسح ويندو، أو مسح SYN، أو المسح النهائي، على حل ما إذا كان الميناء مفتوحا.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'المُحدد الوحيد لهذا الخادم';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'حساب المستخدم يستخدمه هذا المجمع الروابط إلى <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'The user in Active Directory/ OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'والمستعمل موجود في برنامج العمل دون الإقليمي، ووثائق تفويضهم صحيحة، ولكنه ليس في أي من مجموعات برنامج العمل الدولي المفتوح باب العضوية للأوغاد.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'والمستعمل موجود في برنامج العمل دون الإقليمي، ووثائق تفويضهم صحيحة، ولكنه ليس في أي من المجموعات المفتوحة العضوية في الرابطة من أجل الأدوار.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'والمستعمل موجود في برنامج العمل دون الإقليمي ووثائق تفويضه صحيحة، ولكنه ليس في أي من المجموعات المطلوبة في برنامج العمل دون الإقليمي المفتوح باب العضوية.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'المستعمل في مجموعة الـ دي بي أي التي تطابق هذا الأورغ';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'المستخدم في مجموعة برنامج العمل الدولي الذي يطابق هذا الدور.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'المُستخدم ليس في مجموعة (دي بي أي) التي تُطابق هذا الـ(أورغ)';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'المستعمل ليس في المجموعة التي تتطابق مع هذا الدور';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. إما أن تختار <i>Use LDAP for Roles</i> on the Open-AudIT LDAP فحص الخادم أو إنشاء هذا المستعمل داخل قاعدة البيانات المفتوحة وتعيين الأدوار والأعراف.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'اسم المستخدم (إذا لم يستخدم المستخدم الذي يدير النص).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'The username used to access the external system.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'ولم ترد تفاصيل المستخدمين من برنامج العمل دون الإقليمي. تحقق من سجلات الخادم';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'واسترجعت تفاصيل المستخدمين من برنامج العمل دون الإقليمي.';

$GLOBALS["lang"]['The users email address.'] = 'عنوان البريد الإلكتروني للمستعملين.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'ساعات العمل المعتادة في هذا الموقع';

$GLOBALS["lang"]['The value assigned to the item.'] = 'القيمة المخصصة للبند.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'القيمة المخزنة لهذا البند بالذات.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'اسم البائع حسب بيانات شركة CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'لقد أخذ البائع من وحدة حماية البيئة';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'The web directory on the host that Open-AudIT is installed (requires a tracking slash).';

$GLOBALS["lang"]['The widget at position '] = 'النسيج في الموقع ';

$GLOBALS["lang"]['The width of this device.'] = 'عرض هذا الجهاز';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'أورغيدهم وأحفادهم';

$GLOBALS["lang"]['Their OrgIDs only'] = 'أورغيدهم فقط';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'أورغيدهم، أو أصولهم وأحفادهم';

$GLOBALS["lang"]['Then'] = 'ثم';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'ثمّ يَجْعلُ a أسلوب آوث جديد في مفتوحِ أُويت بالذِهاب إلى القائمةِ - ادمين Auth Methods - إخلقْ Auth. توفير اسم ووضع <i>النوع</i> إلى الداخل';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'ثم يمكنك استخدام قاعدة البيانات المفتوحة (غير مدعومة) لتلقي بيانات مراجعة الحسابات مباشرة من العملاء. الكشف <strong>سيفشل</strong>لكن إن لم تستخدمي (ديسكفري) (المميزة الرئيسية التي كانت مصممة حولها) فلا يزال بإمكانك الحصول على بيانات الأجهزة عليك أن تديري نصوص مراجعة الحسابات مباشرة على العملاء الذين يستخدمون السيرون أو تستخدمي سمة العميلة (ويندوز)';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = '(هناك زر لتصديره إلى (جوسون هذا سيظهر فقط طاولات الأجهزة لتصدير الجهاز بجميع جداول العناصر المرتبطة به، والنظر إلى تفاصيل الجهاز، ثم إضافة';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'لا داعي للتحرير اليدوي لكل جهاز';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'ليس هناك حاجة لفعل أي شيء إذا كنت تعمل مفتوح على خادم لينكس.<br/><br/>عملاء النوافذ على ما يرام ولا يحتاجون إلى إجراءات خاصة، على أي حال... للتمكين من هذه المواصفات يجب أن يُدار نص مراجعة الحسابات محليا على نظام النافذة المستهدفة. لا يمكن تشغيله عن بعد كما نفعل مع نداءات WMI عند تشغيل نص مراجعة الحسابات على آلة ويندوز واحد، في الوقت الذي يستهدف آلة ويندوز الثانية. وللقيام بذلك، علينا أن ننسخ نص مراجعة الحسابات إلى آلة النوافذ المستهدفة ثم نديرها. لسوء الحظ حساب الخدمات الذي يديره (آباتشي) هو حساب النظام المحلي This account has no access to remote (network based) resources. وللعمل بشأن هذه المسألة، يجب إدارة الخدمة تحت حساب آخر. ومن الأسهل استخدام حساب المدير المحلي فحسب، ولكن يمكنك أن تجرب أي حساب يعجبك طالما أنه يتمتع بالامتيازات المطلوبة. ويتمتع حساب النظام المحلي بإمكانية الوصول على الصعيد المحلي كما هو الحال بالنسبة لمدير البرنامج المحلي.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'وهذه أمثلة فقط. قد تحتاج لتكييف هذه السمات لتلائم برنامجك الخاص';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'هذه البارامترات تمكنك من مراجعة ما هو مفيد ومناسب لك، وإنقاذ الوقت التجهيزي والسماح لك باكتشاف شبكتك بطريقة منظمة.';

$GLOBALS["lang"]['Thing'] = 'الشيء';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'فكّر في البريد و البريد و البريد';

$GLOBALS["lang"]['Third'] = 'الثالثة';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'وسيتم استرجاع هذه المركبة وكتابة المؤمنة القائمة إذا وجدت.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'هذا الـ(أورج) ليس لديه مجموعة تعريف محددة تحققي من تفاصيل الأدوار داخل قاعدة البيانات المفتوحة';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'هذا الـ(أورج) ليس لديه مجموعة تعريف محددة تحققي من تفاصيل الأدوار داخل قاعدة البيانات المفتوحة <span class=\'\"confluence-link\"\'>هل خلقت هذه المجموعات (للأوغاد) على خادم إدارة الشؤون الاقتصادية والاجتماعية وعينت مستعملي برنامج المساعدة الإنمائية المحلية لهم؟</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'This Role has no AD group specified. تحققي من تفاصيل الأدوار داخل قاعدة البيانات المفتوحة';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'هذه الصفة مخزنة كهدف من نوع (سو جون) وهي قائمة بجميع المجموعات وتتضمن اسم المجموعة إلى جانبها <code>c</code>.. <code>r</code>.. <code>u</code> و <code>d</code> التي تمثل الخلق والقراءة والتحديث والحذف. هذه هي الإجراءات التي يمكن للمستعمل أن يقوم بها على بنود من تلك المجموعة بالذات.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'ويمكن أن يكون ذلك إما فارشاً (مجال نصوص)، أو قائمة (قائمة بالقيم التي يمكن اختيارها) أو تاريخ.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'هذا الرمز يعتمد على العمل العظيم الذي قام به';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'هذا المجمّع هويّة فريدة من نوعها';

$GLOBALS["lang"]['This column is required by'] = 'هذا العمود مطلوب';

$GLOBALS["lang"]['This column is required by '] = 'هذا العمود مطلوب ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'This description is auto-populated and should ideally be left as-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'هذه النقطه النهائيه تمكنك من اضافة الاتصالات التي هي جزء من هياكلك التحتية للشبكات انها تسمح لك بتكييف مجموعة متنوعة من السمات';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'ويشير هذا الخطأ إلى أن SMB1 قد تم تعطيلها أو نقلها من آلة الهدف. هذا طبيعي للنسخة الحديثة من (ويندوز) وسترون هذه الرسالة فقط عندما تفشل محاولة الاتصال بـ (إس إم بي 2) إذا فشل الاتصال SMB2، نحاول SMB1 للتمكين من اكتشاف النسخ القديمة من ويندوز. إذا كان الهدف آلة ويندوز <i>هو</i> إدارة نسخة قديمة من (ويندوز) من المحتمل أن أوراق اعتمادك فشلت في هذه الحالة، انظر';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'ويشير هذا الخطأ إلى أنه ليس هناك ما يكفي من حصص الذاكرة الافتراضية أو ملفات الترميز لإكمال العملية المحددة. يجب أن تحاول مرة أخرى في وقت لاحق.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'ويشير هذا الخطأ إلى أن وثائق التفويض المستخدمة إما غير صحيحة أو غير موجودة أو لا تتمتع بامتيازات كافية للتسجيل عن بعد إلى آلة النوافذ المستهدفة. عليك التحقق من وثائق التفويض والتحقق من أدناه.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'This example creates a list of all Modules marked as';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'This example creates a list of devices where the Function or Description fields are blank or the Purchase Date is the default.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'هذا المثال يسترجع قائمة بالأجهزة التي عمرها 3 سنوات الإستفسار يستخدم اليوم';

$GLOBALS["lang"]['This example uses'] = 'هذا المثال يستخدم';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'وتتطلب هذه السمة رخصة مهنية أو مؤسسة.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'وهذه السمة، لأن لديها القدرة على التأثير على الأجهزة المستهدفة أكثر من المعتاد، يجب أن تُتاح يدوياً. ولتمكين هذه الميزة، تغيير سمة بند التشكيلة - قابلة للتنفيذ <i>نعم</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'ويخبر هذا الملف لينكس باستطلاع الطلب لتحديد ما إذا كانت هناك أية مهام مقررة ينبغي الاضطلاع بها.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'هذا النموذج يوفر طريقة بسيطة للبدء في اكتشاف الأجهزة على شبكتك للمزيد من الخيارات التفصيلية يمكنك أن تخلق بشكل فردي';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'هذه هي الطريقة التي يعمل بها (باكسيك)';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'وهذا خيار اختياري للتشكيل، مُمكَّن من خلال تحديد الاكتشافات في التشكيلة العالمية.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'وهذا هو العمود الرئيسي عموما، ما لم يتم تشكيله بطريقة أخرى. ملحوظة: عندما يكون من النوع = حركة المرور، يمثل هذا النص الثانوي.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'من المحتمل أن هذا بسبب رحيل (ماي إس كي إل) (ماي إس كي إل) يستخدم عادة وقت الأجهزة المضيفة يمكنك التحقق من هذا';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'وهذا ما يحدده المستعملون، وعلى الرغم من أنه ينبغي أن يكون فريدا عالميا، لا يوجد بالتأكيد أي ضمان لذلك.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'هذا هو الدليل حيث نخزن أي ملحقات إلى الأجهزة.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'وسيستخدم هذا كنقطة الاتصال الأولى عندما تعطل القضايا المفتوحة العهد. يمكنك أن تضغط زر التصدير على أعلى اليمين لاسترجاع هذا كملف للشركة (يضاف إلى تذكرة الدعم/البريد الإلكتروني.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'ويجري التحقيق في هذه المسألة.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'This item must match the value of the attribute selected or contains the ID of the query to be used.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'يجب أن يضاهي هذا البند قيمة السمة المختارة.';

$GLOBALS["lang"]['This license expires on'] = 'هذه الرخصة تنتهي';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'ويمكن تعديل هذا الإذن الأمني باستخدام الأداة الإدارية لخدمات المكونات.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'وينبغي التعليق على هذا الأمر بعد أن يؤدي التشويش كأسلوب تطهير إلى توليد الكثير من السجلات على القرص دون فائدة.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'هذا يجب أن يكون فريداً عالمياً لكنني رأيت حالات لا يوجد فيها';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'وينبغي تحديد هذا إما إلى 1 أو ارتفاع الرف.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'وينبغي أن يكون هذا هو الاسم الميداني المؤهل بالكامل في قاعدة البيانات. ويجري حاليا دعم الأعمدة من النظام والمجالات وجداول وثائق التفويض. النظام.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'وتُستخدم هذه الدولة عندما لا يتمكن النمب من تحديد ما إذا كان ميناء مغلقاً أو ممزقاً. إنها تستخدم فقط لمسح الهوية';

$GLOBALS["lang"]['This will auto-populate.'] = 'هذا سوف يقطن';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'هذا سوف يبطئ الاكتشاف';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'هذا سيحذف الصفوف الحالية في';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'هذا سيزيل هذه الرخصة بشكل دائم';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'هذا سيظهر لك شكل (بولك إيديت) أي صفات تضعها على هذا الشكل ستطبق على جميع الأجهزة المختارة يمكنك تحديد صفات متعددة في آن واحد.';

$GLOBALS["lang"]['Thursday'] = 'الخميس';

$GLOBALS["lang"]['time_caption'] = 'الوقت';

$GLOBALS["lang"]['Time Caption'] = 'الوقت';

$GLOBALS["lang"]['time_daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time Daylight'] = 'ضوء النهار';

$GLOBALS["lang"]['Time to Execute'] = 'وقت التنفيذ';

$GLOBALS["lang"]['timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout'] = 'الوقت';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'الهدف (الثانيات)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'الوقت المناسب للهدف انتظر اكس ثانية لرد الهدف';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'التوقيت';

$GLOBALS["lang"]['Timing'] = 'التوقيت';

$GLOBALS["lang"]['Timor-Leste'] = 'تيمور - ليشتي';

$GLOBALS["lang"]['Title'] = 'العنوان';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'إلى ملف جديد اسمه (فينف) (في نفس الدليل). الآن حرّر ذلك الملف الجديد و غير متصل (الغاء) السطر التالي (الخط 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'لتدقيق الآلة، يجب أن يكون لديك وثائق التفويض ووصول على مستوى الإدارة.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'وللتدقيق في آلة نائية على نطاق دليل نشط، يجب أن يكون المستخدم المزود بك (أو إذا لم يقدم أحد، المستعمل الذي يدير السيناريو) عضوا في مجموعة مديري الأجهزة المستهدفة (أو المجموعة الفرعية).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'لتدقيق آلة نائية ليست في مجال، يجب أن تستخدم حساب مدير البرنامج (ليس) <i>a</i> حساب مخصص <i>the</i> حساب مدير البرنامج) عن الرقم المستهدف PC. #1 و #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'To audit localhost, any supplied accreditation are disregarded and the connection is made using the details of the user running the script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'لمقارنة البرمجيات التي نتحقق منها لأن أرقام النسخ غير موحّدة في الشكل، عندما نتلقى نتيجة مراجعة الحسابات، ننشئ قاعدة جديدة تسمى البرمجيات التي نخزنها في قاعدة البيانات إلى جانب بقية تفاصيل البرامجيات لكل طرد. ولهذا السبب، فإن خطوط الأساس التي تستخدم سياسات البرمجيات لن تعمل عند تشغيلها ضد جهاز لم يراجع حساباته بحلول 1-10 (على الأقل). يمكن لسياسات البرمجيات أن تختبر ضد الصيغة الحالية <i>على قدم المساواة</i>.. <i>أكبر من</i> أو <i>متساوية أو أكبر من</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'لخلق نقطة دخول جديدة نقر الزر في الزاوية اليمنى';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'لخلق مورد، يجب أن تمسح البيانات المطلوبة.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = '(أ) تمكين جهاز نائي (Vista or above) من مراجعة الحسابات التي ليست على نطاق معين، حسب حساب في مجموعة المديرين، بخلاف حساب مدير البرنامج الفعلي، انظر الفرع أدناه بشأن اتفاقية الهدنة.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'للتمكين من ذلك، خلق مادة آوث جديدة عن طريق الذهاب إلى قائمة الطعام ادمين وقتها، اختر طريقة (آوث)';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'لإعدام نص قذيفة ويندوس، فتح القيادة بسرعة كمدير واستخدام القيادة التالية';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'تنفيذ نص مراجعة الحسابات، فتح محطة طرفية واستخدام القيادة التالية';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'لترشيحه بقيمه ملكية استخدم اسم الملكية المشغلون الذين ينبغي أن يسبقوا القيمة';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'لتركيب (نامب) على (ويندوز) زيارة صفحة (نامب) في';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'لإحداث التغيير اتبع الخطوات التالية';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'لاسترجاع الهوية المستأجرة افتحي بوابة (أزور) على دليل (أزور) النشيط، (بروبيرز) والهوية المستأجرة مُعرضة كهوية دليلكِ - لا تلوميني على اسم (ميكروسوفت)';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'لإستعادة مفتاحك، سجل إلى "إ دبليو إس كونسول" واختيار اسم مستخدمك، ثم وثائق تفويضي الأمنية.';

$GLOBALS["lang"]['To return a specific component item.'] = 'إعادة بند بعينه';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'لإعادة جميع المواد إلى نوع مقارن لجهاز محدد';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'لإعادة جميع البنود إلى نوع من المكونات. إذا أردت كل البرمجيات ستستخدمها';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'للعكس، يدرج ناقصا، وبالتالي';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'لتشغيل نص الاختبار على الهدف ويندوز PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'لاختيار الأجهزة التي سيتم دمجها نحن نستخدم الـ (نيميس) و لكن ربما تحب (على سبيل المثال) يمكنك أيضا استخدام مجموعة أو كويري إذا كنت تفضل شيء أكثر تعقيدا.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'للفرز بواسطة عمود قاعدة بيانات، استخدام';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'لاستعمال هذه المميزة في "الإنتربرايز"، عليك أولاً أن تخلق مستعملك في "إفتتاح" كالعادة. تحديد كلمة السر ليس ضرورياً يجب عليك أن تعين الأدوار والأوغاد يجب أن يطابق اسم المستخدم في "إفتتاح أدويت" <i>اسم المستخدم المفضل</i> عزو. وليس هناك حاجة إلى اسم كامل أو بريد إلكتروني - سيُقطَع هؤلاء من الداخل. إذا كنت تعرف مستخدميك <i>اسم المستخدم المفضل</i>لا تخافي يمكنك أن تخلق طريقة (أوث) الجديدة في (إفتتاح أدويت) و تطبيق (إنتربرايس) في الداخل و عندما يحاول المستعمل أن يوقع على (إفتتاح) بدون مستعمل موجود مسبقاً <i>اسم المستخدم المفضل</i> تم تسجيلها لمصلحتك';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'لاستعمال هذه المميزة في "الإنتربرايز"، عليك أولاً أن تخلق مستعملك في "إفتتاح" كالعادة. تحديد كلمة السر ليس ضرورياً يجب عليك أن تعين الأدوار والأوغاد اسم المستخدم في فتح الباب ينبغي أن يطابق اتفاق أوكيتا <i>الاسم</i> عزو. ليس هناك حاجة إلى الاسم الكامل أو البريد الإلكتروني - هذه سوف تُقطَع من وكالة OKTA. إذا كنت تعرف مستخدميك <i>الاسم<i>لا تخافي يمكنك أن تخلق "أوث مينتود" الجديد في "إفتتاح" والتطبيق في "أوك تا" وعندما يحاول المستخدم التوقيع على "إفتتاح" بدون مستعمل موجود مسبقاً <i>الاسم<i> تم تسجيلها لمصلحتك<br/><p>ثمّ يَجْعلُ a أسلوب آوث جديد في مفتوحِ أُويت بالذِهاب إلى القائمةِ - ادمين Auth Methods - إخلقْ Auth. توفير اسم ووضع <i>النوع</i> إلى أوكتا</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'وبغية استخدام هذه الميزة، يجب أن تُمكِّن من تطابق بنود التشكيلة (ملحوظة) ومطابقة لـ (أزور). وسيتم ذلك تلقائيا في المرة الأولى التي يتم فيها تنفيذ اكتشاف السحابة. للمزيد من المباريات المفتوحة المطابقة للقواعد انظر هنا';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'To view the details of a query, the standard URL structure of /open-audit/index. php/queries/{$id} should be used.';

$GLOBALS["lang"]['Togo'] = 'توغو';

$GLOBALS["lang"]['Tokelau'] = 'توكيلاو';

$GLOBALS["lang"]['Tonga'] = 'تونغا';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'أفضل مرافئ TCP';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'أفضل مرافئ TCP. أفضل 10، 100، 1000 ميناء لمسح كما هو الحال بالنسبة لخيارات "الموانئ العلوية".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'مرافئ المشردين داخليا';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'أفضل مرافئ "إن بي دي" أفضل 10، 100، 1000 ميناء لمسح كما هو الحال بالنسبة لخيارات "الموانئ العلوية".';

$GLOBALS["lang"]['Traditional Chinese'] = 'الصينية التقليدية';

$GLOBALS["lang"]['Traffic Light'] = 'الضوء';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'ترينيداد وتوباغو';

$GLOBALS["lang"]['Troubleshooting'] = 'الاضطرابات';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'المشاكل التي تصيب لوجينز';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'حاول فتح الباب "إنتربرايز"، علينا بدون حدود زمنية. كل سمات المؤسسة محدود إلى 20 جهاز';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'جربي أحدث الملامح مع رخصة مئة جهاز من طراز FREE رجاءً إقرأْ href="';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'حاولي قطع الأشجار باستخدام مُستخدمة لـ (د.د.ب) ونحن نفترض أن هذا سيفشل (سواء، لماذا لا تزال تقرأ هذا؟ ) التالي، تعليق خارج الخط من ملف الطبيب أعلاه.';

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

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profile';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profile';

$GLOBALS["lang"]['type'] = 'النوع';

$GLOBALS["lang"]['Type'] = 'النوع';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'النوع: يمكن أن يكون ذلك إما فارشاً (مجال نصوص) أو قائمة (قائمة بالقيم التي يمكن اختيارها).';

$GLOBALS["lang"]['Types of Networks'] = 'أنواع الشبكات';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Udp Ports'] = 'ميناء أودب';

$GLOBALS["lang"]['Uganda'] = 'أوغندا';

$GLOBALS["lang"]['Ukraine'] = 'أوكرانيا';

$GLOBALS["lang"]['Ukrainian'] = 'أوكرانيا';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'مراجعة حسابات المرحلة الأولى (استعراض الوثائق)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'مراجعة حسابات المرحلة الثانية (استعراض التنفيذ)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'التحليل الجاري';

$GLOBALS["lang"]['Unfiltered'] = 'غير مسروقة';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'رابعا - المسؤوليات المستكملة';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Update an attribute of a {collection} entry.';

$GLOBALS["lang"]['Update attributes'] = 'آخر المعالم';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'وقد تم تحديث كل مرة تم فيها تنفيذ الاكتشافات مع اكتشاف أن شركاء التنفيذ يستجيبون لها.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'تمّ تحديث كلّ مرة تمّ إعدام الاكتشاف مع شركاء التنفيذ الذين تمّ مسحهم بواسطة (نامب).';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'تم تحديث كل مرة تم اكتشافها باستخدام أجهزة تمكنا من مراجعة الحسابات';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'تم تحديث كل مرة تم اكتشافها بواسطة أجهزة تمكنا من الاستفسار';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'تم تحديث كل مرة تم إعدام الاكتشاف';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'تحديث كل مرة يتم فيها إعدام الاكتشاف';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'استكمل كل مرة استكمل فيها الاكتشاف تنفيذ الحكم';

$GLOBALS["lang"]['Updating'] = 'تحديث';

$GLOBALS["lang"]['Upgrade'] = 'أعلى';

$GLOBALS["lang"]['Upload an audit result file'] = 'تحميل ملف نتائج مراجعة الحسابات';

$GLOBALS["lang"]['Upper Case'] = 'القضية العليا';

$GLOBALS["lang"]['uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['Uptime'] = 'العمل الإضافي';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'أوروغواي، الجمهورية الشرقية';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'الاستخدام';

$GLOBALS["lang"]['Use'] = 'الاستخدام';

$GLOBALS["lang"]['use_authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['use_authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use Authorisation'] = 'إذن الاستخدام';

$GLOBALS["lang"]['Use Proxy'] = 'Use Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'ضمان الاستخدام';

$GLOBALS["lang"]['Use Service Version Detection'] = 'دائرة الاستخدام';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'قسم إستعمال الكشف عندما يُكتشف ميناء مُكتشف على أنه مفتوح، إذا تم تحديده <i>y</i>نامبو) سيستجوب الجهاز المستهدف) في محاولة لتحديد نسخة الخدمة التي تجري في هذا الميناء<br/>ويمكن أن يكون ذلك مفيدا عند تحديد الأجهزة غير المصنفة. This was not previously used.';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'استخدام <i>طريقة التوقيع</i> OIDC - OpenID Connect and an <i>النوع</i> of Web Application. Click <i>التالي</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'استخدام التوثيق';

$GLOBALS["lang"]['Use for Roles'] = 'استخدام الأدوار';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'استخدام خيارات التركيب الموحدة عند عرضها ونقرها <i>أوافق</i>.. <i>التالي</i> و <i>Install</i> أزرار لتركيب نامبا';

$GLOBALS["lang"]['used'] = 'مستخدم';

$GLOBALS["lang"]['Used'] = 'مستخدم';

$GLOBALS["lang"]['used_count'] = 'الكونت المستخدم';

$GLOBALS["lang"]['Used Count'] = 'الكونت المستخدم';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'ويعمل المستعملون على نحو مماثل لموانئ الشركة. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'المستخدمين والأدوار والأوغاد';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = '(ب) يستخدم إطار المدوّن PHP.';

$GLOBALS["lang"]['Using'] = 'استخدام';

$GLOBALS["lang"]['Using Entra for Auth'] = 'استخدام الدخول إلى (أوث)';

$GLOBALS["lang"]['Using LDAPS'] = 'استخدام LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'استخدام الموافقة المسبقة عن علم';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'واستخدام الخيار الشكلي مفيد عند استخدام مصفح على شبكة الإنترنت ولكنكم ترغبون في رؤية النتيجة في شكل مشترك. إضافه لشكل (جيسون) تحقق هذا عادةً مصفف الإنترنت سيضع رئيسه المقبّل لـ (HTML)، لذا في هذه الحالة، سنعيد الصفحة المقدمة. (بإستعمال (أي بي آي لإسترجاع (جوسون يجب عليك أن تضع رئيس القبول';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'عادة Mb/s، من الموقع A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'عادة Mb/s، من الموقع B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'عادة Mb/s، إلى الموقع ألف.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'عادة Mb/s، إلى الموقع B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'عادة يجب أن تكون 3';

$GLOBALS["lang"]['Uzbekistan'] = 'أوزبكستان';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

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

$GLOBALS["lang"]['Value Types'] = 'أنواع القيمة';

$GLOBALS["lang"]['values'] = 'القيمة';

$GLOBALS["lang"]['Values'] = 'القيمة';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'القيمة: في حالة a <i>القائمة</i> وفي الميدان، ينبغي أن تكون هذه قائمة منفصلة بالقيم الصحيحة.';

$GLOBALS["lang"]['Vanuatu'] = 'فانواتو';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'الفرق';

$GLOBALS["lang"]['Variable'] = 'الفرق';

$GLOBALS["lang"]['Various'] = 'مختلف';

$GLOBALS["lang"]['vendor'] = 'البائع';

$GLOBALS["lang"]['Vendor'] = 'البائع';

$GLOBALS["lang"]['Vendor Report'] = 'تقرير البائعين';

$GLOBALS["lang"]['vendors'] = 'البائعون';

$GLOBALS["lang"]['Vendors'] = 'البائعون';

$GLOBALS["lang"]['Venezuela'] = 'فنزويلا';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'الشكل';

$GLOBALS["lang"]['Version Padded'] = 'الشكل';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'الشكل';

$GLOBALS["lang"]['Version String'] = 'الشكل';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamese';

$GLOBALS["lang"]['View'] = 'View';

$GLOBALS["lang"]['View All'] = 'مشاهدة جميع';

$GLOBALS["lang"]['View Details'] = 'التفاصيل';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['View Racks'] = 'View Racks';

$GLOBALS["lang"]['View the'] = 'مشاهدة';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'انظر إلى الاكتشاف موضع البحث، ثم نضغط زر الدعم في الجزء العلوي الأيمن. وهذا سيوفر أماكن الاكتشاف، والحصر، وقائمة أجهزة الكشف، فضلا عن سجلات هذا الاكتشاف بالذات.';

$GLOBALS["lang"]['View the release notes on the'] = 'مشاهدة مذكرات الإفراج على';

$GLOBALS["lang"]['Virtual Private Network'] = 'الشبكة الخاصة الافتراضية';

$GLOBALS["lang"]['Virtual private network'] = 'الشبكة الخاصة الافتراضية';

$GLOBALS["lang"]['Virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'زيارة قناة اليوتيوب للفيديو التعليمي';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

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

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'الخصوم';

$GLOBALS["lang"]['Vulnerabilities'] = 'الخصوم';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'الخانات';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'الخانات';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'الخصوم والنتائج';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilities initially published before 1st January, 2025 (by default). ونحن لا نرى أي معنى في إعادة نقاط الضعف من سنوات سابقة. ويمكن تغيير ذلك في التشكيلة.';

$GLOBALS["lang"]['vulnerability_id'] = 'هوية الضعف';

$GLOBALS["lang"]['Vulnerability ID'] = 'هوية الضعف';

$GLOBALS["lang"]['Vulnerability Status'] = 'حالة الضعف';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> و <i>kernel-devel</i>. يمكن أن تكون هناك مجموعات متعددة بهذا الاسم ونسخ مختلفة في نفس الوقت. توزيعات ديبيانية تستخدم أسماء مثل <i>linux-image-3.13.0-24-generic</i>ملاحظة رقم النسخة مدرج في اسم الطرد لأن نظم التشغيل ذات القاعدة الحمراء تستخدم هذا الشكل وتحصل فيما بعد على عدة أسماء متطابقة مع نسخ مختلفة نستبعدها حاليا <i>kernel</i> و <i>kernel-devel</i> من سياسات البرمجيات ويمكن تناول ذلك في تحديث مستقبلي.';

$GLOBALS["lang"]['WHERE'] = 'أين';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'شروط وثائق التفويض';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'انتظر أن تكتمل، ثم ترعى في هذا الخط القادم لتثبيت العميل';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'ولدينا أيضاً خيار أمام (بينج) قبل (سكان) (مهمة للمدربين الذين عاشوا طويلاً في (آرب كوخ). هذه عادة فكرة جيدة';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'كما لدينا بنود عملنا (التي تنفذ بالترتيب أدناه):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'غالباً ما نسأل هذا السؤال والإجابة بكل تأكيد <i>يعتمد</i>. وهو يعتمد على عدد شركاء التنفيذ الذين يتعين فحصهم، وسرعة الاتصال بالشبكة، وسرعة الأجهزة التي يجري مسحها، ونوع الأجهزة التي يجري مسحها، وعدد وثائق التفويض المختلفة التي يجري اختبارها، وسرعة خادم نظام المعلومات المفتوح باب العضوية. ليس لدينا حاسبة تسمح لنا بإدخال تلك المتغيرات وإعادة قيمة إنه ببساطة معقد جداً عموماً أقصر اكتشافاتي على 256 عنواناً من عنوان IP لقد كان لدينا عملاء يمسحون 16 شبكة فرعية (65 كيلو عناوين) وهي تعمل - ولكن يمكن أن يستغرق وقتا طويلا. أنت أفضل بكثير من المسح في 24 كتل. إذا كنت ببساطة لا تعرف ما هو نطاقات عنوانك، ثم هذه حالة جيدة لاكتشاف البذور.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'لدينا تعليمات أكثر تفصيلاً';

$GLOBALS["lang"]['We have tests for:'] = 'لدينا اختبارات';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'ونأمل أن تجدي فتح الباب مفيداً كما نفعل.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'نحن في البداية وضعنا القائمة الافتراضية للنصوص مع خيارات التقصير وترد قائمة النصوص في النصوص. ولا يمكن حذف هذه النصوص الافتراضية. يمكنك صنع نصوص إضافية لتستخدمها من قبلك حسب الاقتضاء السيناريو الخاص بك سيكون مستندا على واحد من النصوص الحالية ولديه خيارات العرف المطبقة. ويمكن بعد ذلك تحميل النصوص من صفحة القائمة في القائمة: مراجعة الحسابات';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'نحتاج بعض أوراق الاعتماد لنتمكن من التحدث بفعالية مع الأجهزة على شبكتك';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'نحن فقط نرسل الحد الأدنى من البيانات ولا شيء ذو طبيعة حساسة ونرسل بيانات الترخيص لدينا (الاسم، النوع، وما إلى ذلك)، وبيانات تطبيقاتنا (الاسم، والنسخة، والمنبر، والزمن الزمني، وما إلى ذلك)، وأي أخطاء مسجلة، وعدد من أنواع الأجهزة، وعدد من الملامح المستخدمة. <i>أي شيء</i> البيئة لديها أجهزة وهذا هو الجزء الوحيد من بياناتك التي نرسلها. فقط نوع الجهاز و العد ليس الصانع وليس النموذج لا نرسل شيئاً مميزاً لا شبكات. لا عناوين IP. لا نسخ OS. لا أسماء برامج وميدان يو إيد وسيرفر مجهزان بـ 256 هكتارا (لذلك لا نعرف القيمة). نرسل فقط البيانات التي نحتاجها لتحسين المنتج ونرجو أن ترى الفائدة لنا جميعا بهذه المعلومات. وسيوفر لنا توجيها مرشدا بشأن مكان تركيز التحسينات والملامح الجديدة في المنتج.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'ونحن نميل إلى استخدام تمديد جوجل كروم يسمى بوستمان لاختبار الاستفسارات الجاهزة الفعلية. قد ترغب في تركيب واختبار مع ذلك.';

$GLOBALS["lang"]['Web'] = 'Web';

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

$GLOBALS["lang"]['weight_max'] = 'Weight Max';

$GLOBALS["lang"]['Weight Max'] = 'Weight Max';

$GLOBALS["lang"]['Welcome'] = 'مرحباً';

$GLOBALS["lang"]['Welcome Dashboard'] = 'مرحباً بكم';

$GLOBALS["lang"]['Welcome to'] = 'مرحبا بكم في';

$GLOBALS["lang"]['Western Sahara'] = 'الصحراء الغربية';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'ما يمكنني توقعه إذا لم يكن لدي وثائق تفويض';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'ماذا عن الحقول التي أُريدها من نظام المعلومات الإدارية الوطني التي ليست موجودة في "أوديت المفتوحة"؟ لقد قمنا بتغطيتك وأي حقول في النظام الخارجي لا توجد في النظام المفتوح ستُنشأ تلقائياً كمجالات تعريفية مفتوحة.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'ماذا عن أجهزة الشبكة الأخرى؟ مفاتيح فكّر، أجهزة توجيه، طابعات، إلخ. من الواضح أنه من الأفضل أن تقدم بعض وثائق تفويض الشرطة الخاصة لهذه الأجهزة هم فقط يحتاجون <i>القراءة فقط</i> الدخول ولكن إذا كنت لا تريد أن تفعل حتى ذلك، لا يوجد شيء يمنعك من إدارة الاكتشاف، العثور على الأجهزة، ووضع قاعدة أو إثنين لتحديدها (ربما يستخدم عنوان MAC بالاقتران مع الموانئ المفتوحة، على سبيل المثال). لن يكون لديكِ الكثير من المعلومات لكنكِ ستعلمين أنهم على الشبكة وما هم عليه وعندما شوهدوا آخر مرة سترى أيضاً إذا ظهر أي شيء جديد على الشبكة';

$GLOBALS["lang"]['What do we send?'] = 'ماذا نرسل؟';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'ماذا يعني هذا لك؟';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'ما هو الغرض من هذا الرف.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'ما هو نوع هذا الموقع الأنواع المسموح بها <code>attributes</code> طاولة';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'عندما يكتشف (لينكس) آلة (ويندوز) من أجل تنفيذ أمر بعيد نستخدمه';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'عندما يكتشف (ويندوز) آلة (ويندوز) من أجل تنفيذ أمر بعيد نستخدمه';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'عندما يفتح وتتلقى تكنولوجيا المعلومات بيانات عن جهاز، إما باكتشاف الجهاز أثناء عملية مراجعة الحسابات أو بواسطة المستخدم الذي يستورد الجهاز، ويجب عليها أن تحدد ما إذا كان هذا الجهاز المكتشف يطابق جهازا موجود بالفعل في قاعدة بياناتها، أو إذا كان جهازا جديدا ينبغي إضافته. ويستخدم نظام &quot; أوديت &quot; سلسلة من 12 مباراة ملكية لتحديد هذا. قواعد المصيد تعمل كمقارنات أو مقارنات، ليس و. وهذا يعني القاعدة الأولى التي تطابق حقل في الجهاز المكتشف إلى واحد في دي بي يصمم كجهاز قائم. ويجب أن تفشل جميع قواعد المطابقة لكي يصبح جهازا جديدا ويفضي إلى إنشاء سجل جديد.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'عندما تمسح البيانات، يجب أن تُضمّنَ وصولاً إلى المكسور. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta.access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'وعندما يتم الكشف عن جهاز ما، سيحقن نص مراجعة الحسابات مع تفاصيل الملف (أو الدليل). وسيجري تجميع كل من مراجعة الحسابات - لينكس - ودقيقة - ونوافذ. إذا كنت تفكر <i>ولكن وضع طريق لينكس في آلة ويندوز سوف كسر الأشياء!</i>لن تكسر، لن تحصل على أي بيانات من ذلك الملف أو دليل الدخول.<br/>سيتم تخزين التفاصيل المستردة في <i>ملف</i> طاولة قاعدة البيانات و مخزنة مثل أي سمات أخرى وسيتم تخزين تفاصيل الملفات كأي صفات أخرى وتوليد تنبيهات إذا تغير أي من الخصائص التالية: <i>الاسم الكامل</i>.. <i>هتاف</i>.. <i>inode</i>.. <i>آخر تغيير</i>. ويتضمن الجدول نظاماً - مبدئياً - مبدئياً - آخر عشر وأعمدة جارية فضلاً عن تفاصيل الملف.<br/>وفيما يلي الخصائص المسجلة:<br/><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br/><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>سترى قسماً في كل من نصوص (ويندوز) و(لينكس)';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'وعندما يُجرى الاكتشاف، يُختار خيار المسح الاكتشافي ذي الصلة، وتُستخدم تلك البيئات بواسطة الناغم لمسح الأجهزة المستهدفة. وخيارات المسح تحدد أي موانئ تنطلق من المسح، ومدى سرعة فحصها، وما إذا كان الرنين المغناطيسي يستخدم أولا لتحديد ما إذا كان ضغط الدم حيا أم لا.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'وعندما يُجرى الاكتشاف، يُختار خيار المسح الاكتشافي ذي الصلة، والإطارات التي تستخدمها نمب لمسح الأجهزة المستهدفة. وإذا لم يُختار أي خيار، يُختار البند المتعلق بالتشكيل الافتراضي (الاكتشاف - التقصير - الاختراع) ويُستخدم. وستستخدم جماعة &quot; أوديت &quot; خيارات التقصير حسب تشكيلة جميع الاكتشافات.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'عندما يُنفّذ اكتشاف شبكة فرعية يُنفّذُ أولاً، إذا مُنتَقَى، أشعة مقطعية على النطاقِ أَو عناوين آي بي. أي جهاز يستجيب سيتم مسحه إذا لم يُطلب إجراء مسح لأشعة النامبو، يتم مسح كل جهاز من أجهزة IP بشكل فردي. أي موانئ؟ يحددها';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'عند مراجعة جهاز لينكس عن طريق SSH، بعض توزيعات لينكس لا تسمح بأن تمر أوامر سودو دون تايتي (التي نقوم بها). ومن الأفضل أن نوفر وثائق تفويض المستخدمين الجذري. وإذا لم يكن من الممكن توفير أي جذور أو سدو بدون مجموعة من المعاهدات، فإن نص مراجعة الحسابات سيجرى ولكنه لن يتضمن كمية البيانات كما هو الحال خلاف ذلك. ومن ثم، فإن عمليات المراجعة اللاحقة باستخدام الجذر (أو تجري محليا باستخدام السدو) ستوفر تفاصيل إضافية عن النظام وتولد عددا من التفاصيل <i>التغييرات</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'وعند الجمع بين الأجهزة، أي النظام هو المصدر الموثوق للمعلومات.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'عندما تكتمل، أغلق نافذة القيادة وأنت انتهيت!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'عندما تخلق شعراً مستعاراً، إذا اخترت <i>السلف</i> الزر سيكون لديك القدرة على تحميل خاصتك';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'عندما ندمج الأجهزة من النظام الخارجي، إذا لم يكن الجهاز موجوداً في نظام مفتوح هل يجب أن نصنعه؟';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'عند دمج الأجهزة من النظام الخارجي، إذا كان الجهاز قد تم تحديثه في النظام الخارجي هل ينبغي لنا أن نستكمله في النظام المفتوح باب العضوية؟';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'عند التحقيق في الاكتشاف، سيطلب الدعم لوغز الاكتشاف المصدر. لاسترجاع هذه، اذهب إلى قائمة الطعام الكشف';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'عندما نطابق جهازاً مبنياً على (لينكس)، نفضّل استخدام الـ(دبوس) المزوّد بالاسم المضيف. ويمكننا أيضا أن نستخدم خيارات أخرى وفقا للجدول الوارد أدناه، ولكن يمكننا استعادة هوية ديبوس بدون جذور. ولاسترجاع الـ (UID) (من اللوحة الأم)، يجب أن ندير (دميديكود)، وهو ما يتطلب الجذور. لسوء الحظ، عندما إستنسخت ضيف إكسى، هويّة ديبوس لا يُسترجعُ - هناك مقال جيد مرتبط هنا يفصل التفاصيل <i>لماذا</i> هويات الأجهزة';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the \\'] = 'When requesting JSON, by default no limit is set. وعند طلب عرض الشاشة، يُحدّد الحد الأقصى إلى 1000 قبل التقصير. ويمكن تغيير ذلك في التشكيلة. انظر:';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'عندما نسترجع جهازاً خارجياً هل يجب أن نكتشفه؟';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = '(عندما يُدير حساب خدمة (ويندوز يجب أن يكون حساب خدمة (أباتشي <i>العادية</i> المستخدم (أو مدير البرنامج). هذا بسبب <i>النظام المحلي</i> فالحساب الذي يُستخدم عادة لإدارة شركة Apache ليس لديه أي إمكانية للحصول على أي موارد للشبكة. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'وعندما يتم تحديد خيار التشكيلة، نأخذ هذا في الحسبان لأجهزة لمجموعة فرعية معينة من قواعد المطابقة حيث تم تمكين بند التشكيلة. وهذه القواعد هي:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'عندما تكتشف القواعد، أي قواعد مطابقة ستظهر في سجل الاكتشافات. انظر أدناه على سبيل المثال.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'عندما يكون من المقرر تنفيذ هذا المعيار. مستمدة من <code>tasks.type</code> و <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'عندما تم إنشاء هذا السجل';

$GLOBALS["lang"]['When this queue item started processing.'] = 'عندما بدأ هذا البند في التجهيز';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'وعندما تستخدم شبكة &quot; أو &quot; من الفئة الفنية أو المؤسسة المفتوحة، تكون الأقزام متاحة ومصممة خصيصا لعرضها على لوحات الصيد.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'عندما نحول جهازاً مختاراً داخلياً إلى غرض للنظام الخارجي، ماذا ينبغي أن تكون البيانات الخارجية. EG: integer, string, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'عندما ننفذ خط الأساس هذا، يجب أن نتحقق من المواد على الأجهزة التي ليست في سياسة لهذا الخط الأساسي.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'عندما نتلقى ميناء مفتوح، هل ينبغي لنا أن نحاول اختبار لنسخة من الخدمة التي يجري عليها حاليا؟ وهذا يساعد على تأكيد الخدمات الجارية الفعلية.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'عندما تستخدمين الكلاود لاكتشاف حالات الأمازون ستحتاجين إلى صنفين إبداعيين مفتاحك يجب أن يكون معروفاً لك ومفتاحك السري أيضاً من الملاحظ أنك لا تستطيع إسترجاع مفتاحك السري باستخدام "الإي دبليو إس كونسول" الذي تقدمه الأمازون إذا كنت قد غيرت مكانها، سوف تحتاج لتوليد واحد جديد.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'عندما تستخدمين كلود لاكتشاف حالات ميكروسوفت أزور ستحتاجين لأربعة مواد إبداعية';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'عندما تخلق إكتشافاً لديك خياراً للأجهزة وهذا يعني أن أي أجهزة مكتشفة لهذا الاكتشاف سوف يتم تعيينها (لدى) <code>devices.org_id</code> مُستعدة لمنظمتك المُختارة';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'عندما تخلق اكتشافاً جديداً إذا ضغطت الزر المتطور لديك خيارات أخرى كثيرة للتغيير وكانت الأنواع دائماً شبكة فرعية (تشمل النطاق المذكور أعلاه، والشبكة الفرعية، وخيارات النبض) وأدلة نشطة. (في (فور 4-1، (أوديت لديه نوع جديد من الاكتشافات يدعى (بريد';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'عندما تُمكّن (كوراي) من أن يُجرى على جدول زمني، فإنّ السؤال يُرسل بالبريد الإلكتروني إلى عنوانك المُختار. يجب أن تكون قد وضعت البريد الإلكتروني عبر قائمة الطعام ادمين "إنتربرايز" "إيميل كونفيغ" لدينا أيضاً <i>بريد إلكتروني اختباري<i> الزر على تلك الصفحة أدخلي تفاصيلك و وفريها ثم أختبريها يجب أن يكون لديك صندوق موديل يُخبرك إذا نجح أو لم ينجح ومن الواضح أن بريد إلكتروني سيصل إذا كان ناجحاً بمجرد أن يتم تشكيل البريد الإلكتروني الخاص بك يمكن أن يتم تشكيل الاستفسار الخاص بك.<br/><br/>Provide a name, optional description, choose <i>Query</i> نوع، اختيار الاستفسار المرغوب فيه، وتوفير عنوان بريد إلكتروني، واختيار شكل ووضع الجدول الزمني.<br/><br/>Provide an hour ( hours only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br/>وسترسل الاستفسارات بنسخة إلكترونية من الاستفسار (في شكل html) والاستفسارات المرفقة في الشكل المطلوب.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'عندما تدخلين رسالة إلى أحد العناوين العمودية يمكنك ببساطة استخدام كلمة طبيعية على سبيل المثال، عندما تدخل <code>computer</code> في صندوق البحث فوق <i>النوع</i> العمود، والبحث سوف يعيد جميع الأجهزة مع نوع الكمبيوتر. أساسا، مفتوح تطلب تكنولوجيا المعلومات بيانات باستخدام URL مثل <code>devices?devices.type=computer</code>. الآن هناك فرق كبير واحد عند استخدام البحث عن البيانات';

$GLOBALS["lang"]['where'] = 'أين';

$GLOBALS["lang"]['Where'] = 'أين';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'حيث اكس هو رقم وتوجد هذه القيود الكثيرة في مكتب المدعي العام وتم استرجاعها.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'حيث على شاشة التفاصيل الشيطانية كنت ترغب في رؤية هذا الحقل يظهر.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'حيث الرف في الصف';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'وسواء كان الضعف يؤثر على المكونات التي تتجاوز طاقتها باستخدام التأثير والقابلية والثقة.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '(ب) ما إذا كان الأمر يتطلب تفاعلاً مع المستعملين (غيرهم، سلبي، ناشط).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'ما ينطبق على هذا المعيار';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'ما هي الأجهزة التي ينبغي أن تُنشأ من النظام الخارجي (إن وجدت). باستخدام الجميع، لا شيء أو سمة معينة.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'أي شبكة يجب أن نكتشفها وينبغي أن يكون ذلك في شكل';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'والذي يجب أن نعرض هذا السؤال';

$GLOBALS["lang"]['Who made this rack.'] = 'الذي صنع هذا الرف';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'لماذا (ويندوز سيرفر) فقط؟';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'لماذا نستبعد هذه السياسة؟';

$GLOBALS["lang"]['Wide Area Network'] = 'شبكة المناطق الواسعة';

$GLOBALS["lang"]['Wide area network'] = 'الشبكة الواسعة النطاق';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'أرملة';

$GLOBALS["lang"]['Widget # '] = 'أرملة ';

$GLOBALS["lang"]['Widget Type'] = 'النوع';

$GLOBALS["lang"]['widgets'] = 'الأرامل';

$GLOBALS["lang"]['Widgets'] = 'الأرامل';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'الأرملة مصممة لاستخدامها على لوحات الداش ويتمتع مستخدمو المشاريع بحرية كاملة في إنشاء وتحديث وحذف النوافذ حسب الاقتضاء.';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'النوافذ';

$GLOBALS["lang"]['Windows'] = 'النوافذ';

$GLOBALS["lang"]['Windows Packages'] = 'أكياس النوافذ';

$GLOBALS["lang"]['Windows Test Script'] = 'Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'وحدة عمل مستخدمي النوافذ';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'وحدة عمل مستخدمي النوافذ';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'وقد يكون النوافذ أيضا قد أوقفت الخدمة من البداية. عند الهدف ابدأ التفاحة الأمنية في (ويندوز) وتأكد من أن (وينكسسفك) قابل للتنفيذ مسموح له بالهرب (انقر الرخصة على جهاز التنقيب ثم بدء العمل)';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe page on Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'وينس تحتاج خدمات النوافذ التالية إلى أن تبدأ وتدير: خدمات الناموسيات والارتفاعات التي يتعين تشغيلها.<br/><br/>يرجى الدخول إلى آلة النوافذ المستهدفة والتحقق من خدمات الناموسين و البيركس تعمل.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'وينس يستخدم المبلغ المخصص وشركة RPC (بدء خدمة الشبكة) لتركيب وبدء خدمة عن بعد (وينكسفيتش). وتبدأ هذه الخدمة بالأنبوب المسمّى الذي يُستخدم لنقل الأوامر من الخادم المفتوح العضوية إلى الهدف والناتج بطريقة عكسية. وعند الانتهاء من ذلك، يغلق الأنابيب المسماة وينتظر الويكسفتش مزيدا من الاتصالات أو الاضطرابات (في انتظار الخيارات المقدمة).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'شبكة المناطق المحلية اللاسلكية';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'وبإطلاق 3.3.0 من معاهدة فتح الباب، عرضنا مفهوم المجموعة. ويرسم هذا بشكل ملائم فكرة إنشاء مجموعة شبكية أو مجموعة قواعد بيانات أو مجموعة ملفات (أو واحدة من عدة أغراض أخرى) إلى نوع معين (توافر كبير، وتكرار، وتوسيع نطاق، وما إلى ذلك).<br/><br/>ورهناً بالغرض من المجموعة المختارة، سيكون الإبلاغ مختلفاً قليلاً.<br/><br/>على سبيل المثال، إذا قمت بإنشاء مجموعة بهدف الفرضية، عندما يكون لديك أجهزة إضافية لها، سوف نرى أيضا الآلات الافتراضية على تلك الأجهزة.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'ومع إدخال سمة الكلاود، يمكنك تقديم تفاصيل عن سحابتك، الأمازون AWS أو Microsoft Azure، وشركة Open-AudIT ستستخدم نظام المعلومات المسبقة عن علم لاستعادة قائمة المواقع والشبكات والحالات، ثم اكتشاف كل من هذه الحالات.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Workgroup'] = 'فريق العمل';

$GLOBALS["lang"]['Working Credentials'] = 'وثائق التفويض العاملة';

$GLOBALS["lang"]['Wrap Up'] = 'اللعنة';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'مكتوبة باللغة المكتوبة لـ PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Yellow Query';

$GLOBALS["lang"]['Yemen'] = 'اليمن';

$GLOBALS["lang"]['Yes'] = 'نعم';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'أنت قادر على تحديد أدلة إضافية لفحصها كقيد في مجموعة التنفيذ وعند تحديد الدليل وجميع التوجيهات الفرعية يتم مسحها للملفات القابلة للتنفيذ. يمكنك أيضا تحديد الأدلة والملفات التي يجب استبعادها وعندما يتم تفعيلها، يتم حقنها في نص مراجعة حسابات لينوكس ويتم تنفيذها كلما تم تشغيلها (عادة كجزء من اكتشاف). إذا كنت تريد هذه في النص يمكنك نسخ يدويا للهدف، استخدام قائمة الطعام إكشفْ - . Scripts - > List Scripts and download the script from there.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'أنت دائما حر في تعديل نصوص مراجعة الحسابات نفسها لتلائم متطلباتك المحددة سوف تحتاج إلى (إعادة) إدراج تلك التغييرات عندما ترتقي كما أنها سوف تكون مخطوبة من قبل النصوص الافتراضية. أقترح أن أحتفظ بنسخة رئيسية من نصك المعدّل، رفع مستوى قاعدة البيانات المفتوحة، ثم نشرة بين النص الافتراضي الجديد وكتابك المعدّل وتطبيق الاختلافات. ونصوص مراجعة الحسابات هي نصوص من السكان الأصليين (ويندوز هو VBScript، وجميعهم من باش). بسيطة وسهلة التعديل فقط تأكد من الحصول على نسخة من تغييراتك قبل ترقيتك';

$GLOBALS["lang"]['You are running version'] = 'أنت تدير نسخة';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'يمكنك الوصول إلى المجموعة باستخدام "المبادرة العامة" مثل أي مجموعة أخرى أرجوك';

$GLOBALS["lang"]['You can also'] = 'يمكنك أيضاً';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'ويمكنكم أيضاً أن تروا في أسفل الصفحة جدولاً يبين الأجهزة التي ستطبق عليها التغييرات.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'ويمكنك أيضا تحديد الممتلكات باستخدام الشكل التالي.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'يمكنك دائما تشغيل الموجة الأولى VM على البنية التحتية الافتراضية الخاصة بك (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. أو أن تُركّز على قرص (لينكس) الخاص بك نحن ندعم ريدهات 9، أوبونتو 20.04، 22.04 و 24.04 وكذلك ديبيان 11 و 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'يمكنك تعيين أجهزة للموقع بشكل تلقائي';

$GLOBALS["lang"]['You can assign devices using custom'] = 'يمكنك تعيين أجهزة تستخدم العرف';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'يمكنك مراجعة آلة نائية بدون استخدام حساب المدير الفعلي عن طريق إنشاء مفتاح تسجيل إنشاء المفتاح الوارد أدناه لكل آلة تخضع للمراجعة والتأكد من أن وثائق تفويض المستخدمين المستخدمة عضو في مجموعة المديرين.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'يمكنك بالتأكيد أن تدير اكتشافاً بدون أي وثائق تفويض صحيحة على الأجهزة داخل الشبكة، لكن المعلومات المسترجعة ستكون مجموعة صغيرة جداً من ما تملكه شركة (إفتتاح) <i>مع</i> وثائق التفويض.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'ويمكنكم إنشاء خط أساس، وتشغيله ضد مجموعة من الأجهزة، والنظر إلى النتائج، وإضافة التنفيذ المقرر، وإضافة المزيد من الجداول للمقارنة (حالياً لا يمكن سوى البرامجيات، والموانئ الشبكية، والمستعملين)، ووضع تحرير خط الأساس، وحفظ النتائج، وأكثر من ذلك.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'يمكنك أن تخلق نصاً مع كل الخيارات لأي من نصوص مراجعة الحسابات الحالية ليس فقط (ويندوز) AIX, ESX, Linux, OSX and Windows are all covered.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'ويمكنكم أن تصمموا جميع أشكال التكامل التي يكون النظام فيها هو السلطة على أساس ميداني. وهناك خيارات لإنشاء و/أو تحديث الأجهزة في نظام المعلومات المفتوح باب العضوية أو نظام المعلومات الإدارية. يجب أن نجري اكتشافاً على جهاز مُنشأ أو مُستكمل وأكثر من ذلك بكثير وهناك تفسيرات لكل بند على الجانب الأيمن من الصفحة.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'يمكنك تحديد تطبيق وربط جهاز بهذا التطبيق ويمكن ربط الجهاز بأكثر من طلب واحد. ويمكن ربط الطلب بأكثر من جهاز واحد.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'يمكنك تحرير قيمة الحقل الإضافي لكل جهاز من الأجهزة على صفحة تفاصيل الجهاز انظر إلى تفاصيل الجهاز افتح القسم المحتوي على الحقل';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'يمكنك أن تُحدّد جهاز كشف النبض ليقع ضمن مجموعة صارمة من المعايير، بما في ذلك: <i>Restrict to Subnet</i> و <i>Restrict to Private</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'يمكنك تعيين الأجهزة يدوياً باستخدام';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'يمكنك تجاوز هذا من خلال توفير خيار الشكل في URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'يمكنك اختيار أجهزة فردية عن طريق فتح صناديق الشيكات الخاصة بهم على الجانب الأيمن أو اختيار جميع الأجهزة التي تضغط على صندوق الشيكات على أعلى المنضدة';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'يمكنك اختيار الأجهزة التي سيتم دمجها باختيار أي سمات في جدول النظام (التدرج) والمطابقة (انظر القائمة → Admin ). Database ). Tables ). نظام لقائمة الحقول). تطابق العزوبية يمكن أن يطابق قيمة واحدة فقط';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'يمكنك تحويل أي خادم إلى جامع عن طريق الذهاب إلى قائمة الطعام ادمين المجاميع جعل هذا تركيب جامع. ستحتاجين وثائق تفويض للدخول إلى الخادم هذا النسيج سيبلغ عنه';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'يمكنك النظر من خلال النقر على المنظر الأزرق يمكنك أيضا تحرير أو حذف إذا كان لديك الأذن.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'ليس لديكِ مُدَوّج (إم بي إس) وهذا التمديد مطلوب.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'ليس لديكِ مُدَوّد (إتش بي إس إن إم) This extension is highly recommended.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'ربما تريد أن تنسخ وترعى هذا URL في البريد الإلكتروني لموظفيك.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'قد ترغبين في الحصول على دليل فعال أو برنامج "إفتتاح بلادب" لتوثيق مستعمليكم، ولكن ليس تقديم إذن. لفعل هذا، تأكد <i>استخدام التوثيق</i> هو جاهز <i>استخدام الأدوار</i> جاهز لـ ن. وستتأكد وثائق التفويض من قبل برنامج المساعدة الإنمائية، ولكن ستحتاج إلى أن يكون المستعمل قد أنشأ بالفعل وأسند أدواراً في برنامج تبادل المعلومات المفتوح. هذا أيضاً <i>تلقائيا</i> ينطبق على';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'ربما كنت قد لاحظت أن قواعد المطابقة هذه هي البنود التي قد لا تكون فريدة من نوعها عالميا. بعض الأمثلة:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'يجب أن تحذف رخصتك الحالية قبل إضافة رخصة جديدة';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'يجب أن يكون لديك وثائق تفويض SSH لتنفيذ معيار. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. ونعتزم التوسع في هذه العمليات مع إطلاقات أخرى.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'يجب أن تنسخ وتضع الملف بأكمله في صندوق النص وفي الحالة أدناه، نسخة من جميع النص.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'لا يجب أن تتضمّن الحقول المحررة والمحررة هذه ستوضع تلقائياً';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'عليك فقط تغيير الجملة الثانية من النص';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'يجب أن تُستعاض عن العمود المطلوب (مثلاً، org_id)';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'يجب أن تستخدمي عنواناً يحتوي على أسماء الأعمدة التي ترغبين في قذفها، ثم خطوط بياناتك تحت ذلك.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'يجب أن تستخدم فقط تلك الطاولات التي تحتوي على خصائص تحتاجها عادة ما أستخدم الإنضمام الأيسر على سبيل المثال';

$GLOBALS["lang"]['You will need a'] = 'ستحتاج إلى';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'ستحتاج إلى موانئ لـ (واي إم آي) على حائط (ويندوز) الناري الذي فتح على حاسوب (ويندوز) المستهدف من أجل النوافذ الخوادم الأساسية، تأكد من السماح لوصلات الجدار الناري';

$GLOBALS["lang"]['You will see a list of'] = 'سترى قائمة';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'مفتاح الـ "أي دبليو إس" الخاص بك';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'أوراق إعتماد "جوجل" الخاصة بك كـ "جيون"';

$GLOBALS["lang"]['Your Host is'] = 'أنت المضيف';

$GLOBALS["lang"]['Your Licenses'] = 'رخصتك';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'هويتك (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'سرك الخاص (مايكروسوفت أزور)';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'هويّة اشتراكك في ميكروسوفت أزور';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'هويتك المصغرة Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'نسخة PHP الخاص بك';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQL الخاص بك لاختيار سمات التي سوف تبرز هذا الاستفسار.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'جهاز التحكم الخاص بك لاختيار الأجهزة التي سوف تنفجر هذه المجموعة.';

$GLOBALS["lang"]['Your SSH key.'] = 'مفتاح SSH الخاص بك.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'أوراق دخولك، وفقاً لتلك السحابات';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'بياناتك هي بياناتك يمكنك استخراجه في أي وقت تريد. بل إننا نقدم بشكل مفيد الصادرات إلى CSV و JSON و XML. (ولدينا (بون بي آي ويمكنك كتابة التقارير العرفية والحصول على هذه النواتج في CSV، XML، وJON! مرة أخرى، انها بياناتك - وليس أي شخص آخر. يمكنك أن تثق بأن أمن بياناتك في يديك';

$GLOBALS["lang"]['Your database platform is'] = 'قاعدة بياناتك';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'وصفك لحالة هذه الصلة (المنقحة والمتقاعدة وما إلى ذلك).';

$GLOBALS["lang"]['Your description of this item.'] = 'وصفك لهذا البند';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'اسمك العام لهذه القطعة من البرامج';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'نسختك العامة لهذه البرمجيات';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'يجب أن يكون مستعملك الآن قادراً على التسجيل بالنقر <i>Logon with Entra</i> زر على صفحة الدخول المفتوحة وكما ذُكر أعلاه، إذا فشل الشعار، يرجى التحقق من السجل والتحقق من المستعملين <i>اسم المستخدم المفضل</i>.<br/><br/>وهذا يجب أن يكون كل شيء هناك أيضا. الآن يجب أن يكون لدى مستعمليك مجموعة أقل من وثائق التفويض للتذكر<br/><br/>كما هو الحال دائما، إذا كان لديك مشاكل مع هذه الميزة، يرجى البريد الإلكتروني';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'يجب أن يكون مستعملك الآن قادراً على التسجيل بالنقر <i>Logon with OKTA</i> زر على صفحة الدخول المفتوحة وكما ذُكر أعلاه، إذا فشل الشعار، يرجى التحقق من السجل والتحقق من المستعملين <i>الاسم</i>.<br/><br/>وهذا يجب أن يكون كل شيء هناك أيضا. الآن يجب أن يكون لدى مستعمليك مجموعة أقل من وثائق التفويض للتذكر<br/><br/>كما هو الحال دائما، إذا كان لديك مشاكل مع هذه الميزة، يرجى البريد الإلكتروني';

$GLOBALS["lang"]['Your web server is'] = 'خادمك على الانترنت';

$GLOBALS["lang"]['Zambia'] = 'زامبيا';

$GLOBALS["lang"]['Zimbabwe'] = 'زمبابوي';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'نشطة';

$GLOBALS["lang"]['active directory'] = 'دليل نشط';

$GLOBALS["lang"]['active/active'] = 'نشطة/فعلية';

$GLOBALS["lang"]['active/passive'] = 'النشاط/التعدي';

$GLOBALS["lang"]['advertisement'] = 'الإعلان';

$GLOBALS["lang"]['alert'] = 'إنذار';

$GLOBALS["lang"]['all'] = 'كل شيء';

$GLOBALS["lang"]['allocated'] = 'مخصصة';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['an Integer'] = 'a Integer';

$GLOBALS["lang"]['and'] = 'و';

$GLOBALS["lang"]['and / or'] = 'و/أو';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'وتذكرة دعم سيتم إنشاؤها واتخاذ إجراءات بشأنها.';

$GLOBALS["lang"]['and another'] = 'و أخرى';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'ويحمّل آخر محرر ذاتي ربما عليك أن تغلق الصفحة لتجدها';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'والذهاب إلى تطبيقات -  Enterprise تطبيقات المشاريع (القائمة اليسرى) ثم النقر <i>طلب جديد</i>.';

$GLOBALS["lang"]['and it\\'] = '♪';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'ويبحث عن تاريخ انتهاء الصلاحية قبل اليوم';

$GLOBALS["lang"]['and review what is possible.'] = 'واستعراض ما هو ممكن.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'وأعيد توجيه الأشعة فوق البنفسجية';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'ومن المرجح أن تكون الخطوط النهائية أكثر أهمية. هذه الخطوط يجب أن تعطيك النقطة بالضبط التي فشل فيها الشعار.';

$GLOBALS["lang"]['antivirus'] = 'مضادات الفيروسات';

$GLOBALS["lang"]['application'] = 'التطبيق';

$GLOBALS["lang"]['approved'] = 'تمت الموافقة عليها';

$GLOBALS["lang"]['are required.'] = 'مطلوب.';

$GLOBALS["lang"]['are used.'] = 'تستخدم.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'كجهاز يستجيب لهذا الميناء<br/>وقد تسبب ذلك في بعض القضايا التي ترد فيها الجدران النارية نيابة عن جهاز غير موجود، ويتسبب بالتالي في كشف الأجهزة الإيجابية الكاذبة. لدينا الآن هذه الصفة متاحة للمسح الضوئي';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'كنقطة مرجعية وتصفير جميع الآلات الافتراضية عن طريق فحص النظام المجال التسلسلي لVM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'افتراض العمل والعملاء المأهولة';

$GLOBALS["lang"]['attribute'] = 'الإسناد';

$GLOBALS["lang"]['auto'] = 'السيارات';

$GLOBALS["lang"]['backup'] = 'الدعم';

$GLOBALS["lang"]['banned'] = 'محظور';

$GLOBALS["lang"]['blog'] = 'المدونة';

$GLOBALS["lang"]['blue'] = 'الأزرق';

$GLOBALS["lang"]['bottom'] = 'أسفل';

$GLOBALS["lang"]['building'] = 'المبنى';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'ويمكن استخدامه لتوثيق المستعمل (هل اسم المستخدم وكلمة السر صحيحة) فضلاً عن الإذن المستخدم (أي الأدوار والأعاصير التي يقوم بها المستخدم).<br/><br/>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>الاسم</i> (ز) ستنخفض قاعدة البيانات المفتوحة لتستخدم نفسها من أجل التوثيق والإذن.<br/><br/>مفتوح وتستخدم تكنولوجيا المعلومات مجموعات محددة من برامج العمل الطويلة الأجل للأدوار والأعراف. ويجب أن يكون المستخدم عضواً مباشراً في هذه المجموعة (المجموعات) من أجل تحديد إمكانية وصول المستخدمين إليها.<br/><br/>وعندما يتم تشكيله بشكل صحيح، يمكن أن يزيل استخدام برنامج العمل دون الإقليمي تماما الحاجة إلى إنشاء مستخدمين في نظام تبادل المعلومات المفتوح. Simply configure Open-AudIT to use LDAP for both authentication and authorization. وإذا لم يكن المستخدم موجوداً في قاعدة البيانات المفتوحة ولكنه موجود بالفعل في برنامج العمل دون الإقليمي ووثائق تفويضهم صحيحة، وهم أعضاء في المجموعات المطلوبة التي يفتح باب التسجيل فيها، فإنهم سينشئون حساب المستخدم تلقائياً.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'ويمكن الآن استرجاع تفاصيل عن ملف أو دليل للملفات ورصد هذه الملفات للتغييرات حسب خصائص أخرى في قاعدة البيانات المفتوحة. وتعمل هذه الميزة خارج الصندوق الخاص بخواديم لينكس المفتوحة، ولكنها تحتاج إلى تغيير في اسم حساب الخدمة تحت خادم ويندوز مفتوح العضوية. العملاء المدعومين هم (ويندوز) و (لينكس)';

$GLOBALS["lang"]['changed'] = 'تغير';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'تم اختياره From there if a port for WMI, SSH or SNMP is detected responding the tool is further queried using ';

$GLOBALS["lang"]['cloud'] = 'سحابة';

$GLOBALS["lang"]['code'] = 'الرمز';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'المجموعات والتفاصيل هي رمز لتنفيذه.';

$GLOBALS["lang"]['collector'] = 'جامع';

$GLOBALS["lang"]['collectors'] = 'جامعو';

$GLOBALS["lang"]['column'] = 'العمود';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'سيحتوي العمود إما <i>y</i> أو <i>n</i>. وهذا يشير إلى ما إذا كان هذا الصف موجود حاليا على الجهاز. فعلى سبيل المثال، يمكن تركيب برمجيات (تسفر عن ذلك) <i>برمجيات جارية</i>)، ولكن في مراجعة لاحقة، لا يمكن اكتشافها. ستغير هذه الصفات الحالية <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'العمود The';

$GLOBALS["lang"]['compute'] = 'الحساب';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'Conole';

$GLOBALS["lang"]['contains'] = 'يحتوي على';

$GLOBALS["lang"]['create'] = 'الخلق';

$GLOBALS["lang"]['created'] = 'أنشئت';

$GLOBALS["lang"]['credentials'] = 'وثائق التفويض';

$GLOBALS["lang"]['critical'] = 'حاسمة';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'قاعدة البيانات';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'مندوب';

$GLOBALS["lang"]['delete'] = 'حذف';

$GLOBALS["lang"]['deleted'] = 'حذفت';

$GLOBALS["lang"]['denied'] = 'مرفوضة';

$GLOBALS["lang"]['details'] = 'التفاصيل';

$GLOBALS["lang"]['devices'] = 'أجهزة';

$GLOBALS["lang"]['digitalocean'] = 'التكنولوجيا الرقمية';

$GLOBALS["lang"]['discoveries'] = 'الاكتشافات';

$GLOBALS["lang"]['documentation for further details.'] = 'وثائق لمزيد من التفاصيل.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'نعم <strong>لا</strong> تقديم تقارير عن الضعف فيما يلي:';

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

عالية جداً - الوظائف الضرورية لبقاء المنظمات ويجب أن تعاد فوراً.

عالية - المهام الهامة التي ينبغي استعادتها بسرعة ولكنها قد تستغرق وقتا أطول قليلا للانتعاش.

متوسطة - الوظائف الضرورية ولكنها يمكن أن تتسامح مع وقت النزول الأطول.

منخفضة - الوظائف غير الأساسية التي يمكن تأخيرها دون تأثير كبير.

غير موقّع - التقصير حتى موقع التصوير -';

$GLOBALS["lang"]['fail'] = 'فشل';

$GLOBALS["lang"]['false'] = 'كاذب';

$GLOBALS["lang"]['file'] = 'ملف';

$GLOBALS["lang"]['firewall'] = 'الجدار الناري';

$GLOBALS["lang"]['first'] = 'أولا';

$GLOBALS["lang"]['fixed'] = 'ثابتة';

$GLOBALS["lang"]['floor'] = 'الطابق الأرضي';

$GLOBALS["lang"]['for'] = 'for';

$GLOBALS["lang"]['for authentication'] = 'للتوثيق';

$GLOBALS["lang"]['for this information.'] = 'لهذه المعلومات';

$GLOBALS["lang"]['from Audit Script Result'] = 'من مراجعي الحسابات';

$GLOBALS["lang"]['from NMIS'] = 'من بعثة الاتحاد الأفريقي في السودان';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'من العنوان المحلي (Using LRPC)';

$GLOBALS["lang"]['front'] = 'مقدمة';

$GLOBALS["lang"]['front-left'] = 'مقدمة';

$GLOBALS["lang"]['front-right'] = 'الجبهة اليمنى';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'أكبر أو مساوية';

$GLOBALS["lang"]['greater than'] = 'أكبر من';

$GLOBALS["lang"]['group'] = 'المجموعة';

$GLOBALS["lang"]['has not been set'] = 'لم يحدد';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = '(لديه عمل عكسي لـ (دي إن أي بي) قابل للحل لـ (ويندوز بي سي';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'لديها القدرة على التنفيذ على';

$GLOBALS["lang"]['head'] = 'الرأس';

$GLOBALS["lang"]['here'] = 'هنا';

$GLOBALS["lang"]['high availability'] = 'التوافر المرتفع';

$GLOBALS["lang"]['howto'] = 'كيف';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'إذا إستنسخت آلة (لينكس) الافتراضية، إلا إذا أعدت هذا يدوياً (وبخبرتي، الناس لا) سيبقى الأمر نفسه.';

$GLOBALS["lang"]['ignored'] = 'تجاهل';

$GLOBALS["lang"]['import the example device data'] = 'استيراد بيانات الأجهزة النموذجية';

$GLOBALS["lang"]['in'] = 'في';

$GLOBALS["lang"]['in Enterprise.'] = 'في المؤسسة';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Inputs can have the following values.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'ويمكن للمخرجات أن تكون لها القيم التالية.';

$GLOBALS["lang"]['inactive'] = 'الخاملة';

$GLOBALS["lang"]['incomplete'] = 'ناقص';

$GLOBALS["lang"]['info'] = 'المعلومات';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Installer will test for the presence of Nmap in its standard install locations of';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'المقطع والنص والفول (y/n) وما إلى ذلك';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'معيار الولايات المتحدة الذي يحتفظ به المعهد الوطني للمعايير والتكنولوجيا';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'معيار دولي لإدارة أمن المعلومات. وهو يوفر إطارا لإنشاء نظام لإدارة أمن المعلومات وتنفيذه وصيانته وتحسينه باستمرار.';

$GLOBALS["lang"]['is based upon'] = 'يستند إلى';

$GLOBALS["lang"]['is licensed to'] = 'مرخص له';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'هو التالي على القائمة ويمكن أن تستخدم كلمة السر والتوثيق الرئيسي. ويمكن أيضاً أن تستخدم شركة &quot; أوديت &quot; (Pop-AudIT) مستخدماً مُمكَّناً من السحب بدلاً من الاستخدام الجذري مباشرة (وإن كان بإمكانها أيضاً استخدام الجذر). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). ويمكن لأجهزة النوافذ أيضاً أن تنفجر، ولكن إذا كشفت شركة &quot; أوديت &quot; عن ذلك، فإنها ستوقف الاستفسارات المتعلقة بشبكة SSH، وبدلاً من ذلك ستستخدم شركة WMI (تعريف وثائق تفويض العاملين في المنظمة).';

$GLOBALS["lang"]['is the link to the'] = 'هو الصلة مع';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'بند للنظر إلى الجداول المحددة وأعمدة تلك الجداول. هذا سيمكّنك من إيجاد ما تحتاجه بالضبط بدلاً من التجول في مجموعة "ماي إس كي إل" من نص الكيماويات';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'المفتاح المطلوب لاسترجاع الخيط/الطول وخريطة العرض انظر';

$GLOBALS["lang"]['left'] = 'يسار';

$GLOBALS["lang"]['less or equals'] = 'أقل أو مساوية';

$GLOBALS["lang"]['less than'] = 'أقل من';

$GLOBALS["lang"]['license'] = 'الترخيص';

$GLOBALS["lang"]['licenses'] = 'التراخيص';

$GLOBALS["lang"]['like'] = 'مثل';

$GLOBALS["lang"]['line'] = 'السطر';

$GLOBALS["lang"]['list'] = 'القائمة';

$GLOBALS["lang"]['list View, using the Create button'] = 'القائمة فيو، باستخدام زر الكريت';

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

$GLOBALS["lang"]['or the GitHub page at'] = 'أو صفحة جيت هوب في';

$GLOBALS["lang"]['other'] = 'أخرى';

$GLOBALS["lang"]['package'] = 'طرد';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'الصفحة تصدير خادمك من قائمة الطعام ادمين LDAP Servers- - (و) تفاصيل عن هذه البيانات وإنقاذها وإدراجها أيضاً.';

$GLOBALS["lang"]['partition'] = 'التجزئة';

$GLOBALS["lang"]['pass'] = 'المرور';

$GLOBALS["lang"]['pending'] = 'معلقة';

$GLOBALS["lang"]['performance'] = 'الأداء';

$GLOBALS["lang"]['performed'] = 'أُنجز';

$GLOBALS["lang"]['permission'] = 'إذن';

$GLOBALS["lang"]['permissions required per endpoint'] = 'الإذن المطلوب لكل نقطة نهاية';

$GLOBALS["lang"]['pie'] = 'فطيرة';

$GLOBALS["lang"]['planning'] = 'التخطيط';

$GLOBALS["lang"]['predictable'] = 'يمكن التنبؤ به';

$GLOBALS["lang"]['query'] = 'الاستفسار';

$GLOBALS["lang"]['rear'] = 'rear';

$GLOBALS["lang"]['rear-left'] = 'العمود الخلفي';

$GLOBALS["lang"]['rear-right'] = 'الحق الخلفي';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'الإفراج';

$GLOBALS["lang"]['removed from display, but has been set'] = 'أزيلت من العرض، ولكن تم وضعها';

$GLOBALS["lang"]['reserved'] = 'محجوزة';

$GLOBALS["lang"]['right'] = 'الحق';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'يمكنك أن تضغط على القيمة الميدانية لتحريرها';

$GLOBALS["lang"]['role'] = 'الدور';

$GLOBALS["lang"]['room'] = 'الغرفة';

$GLOBALS["lang"]['row'] = 'الصف';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'لم تبدأ الخدمة بسبب الخطأ التالي';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'إذاً (أوديت) المفتوح يعرف أن يقيد سؤالك إلى (أورق) المناسبة';

$GLOBALS["lang"]['stand-alone'] = 'قائمة بذاتها';

$GLOBALS["lang"]['standard'] = 'المعيار';

$GLOBALS["lang"]['starts with'] = 'يبدأ مع';

$GLOBALS["lang"]['storage'] = 'التخزين';

$GLOBALS["lang"]['subnet'] = 'الشبكة الفرعية';

$GLOBALS["lang"]['table'] = 'الجدول';

$GLOBALS["lang"]['table and insert the original rows.'] = 'طاولة وأدخل الصفوف الأصلية';

$GLOBALS["lang"]['team'] = 'فريق';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'النص. الأول هو الرقم القياسي للصفائف وينبغي تركه كما هو عليه. ويستخدم المؤشر في النماذج للنظر في النص المترجم.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'ثم نضغط على زر التفاصيل للطاولة';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'ثم نضغط على زر التفاصيل للطاولة تفاصيل الأجهزة مخزنة في';

$GLOBALS["lang"]['timestamp'] = 'الزمان';

$GLOBALS["lang"]['to'] = 'إلى';

$GLOBALS["lang"]['to create an item of this type'] = 'لخلق بند من هذا النوع';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'إلى URL، أنت سَتَحْصلُ على قاعدةِ البيانات الكاملةِ، بما في ذلك كُلّ جداول المكوّناتِ، a جهاز بعينه.';

$GLOBALS["lang"]['to the user'] = 'إلى المستخدم';

$GLOBALS["lang"]['top'] = 'أعلى';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'سرية للغاية - تصنيف عسكري/حكومي. وسيتسبب الكشف عن المعلومات في خطر خطير للغاية على الأمن الوطني.

سرية - تصنيف عسكري/حكومي. وسيتسبب الكشف عن المعلومات في إلحاق ضرر جسيم بالأمن الوطني.

السرية - تصنيف القطاع العسكري/الحكومة والقطاع الخاص. وتشمل البيانات السرية الأسرار التجارية، والبيانات الفكرية، ومدونة البرمجة التطبيقية، والبيانات الأخرى التي يمكن أن تؤثر تأثيرا خطيرا على المنظمة إذا حدث كشف غير مأذون به. ولا تتاح البيانات على هذا المستوى إلا للموظفين في المنظمة الذين تكون احتياجاتهم من العمل أو تتصل اتصالا مباشرا بالبيانات التي يتم الحصول عليها. ويقتضي الوصول إلى البيانات السرية عادة الحصول على إذن من كل جهة.

تصنيف القطاع الخاص وتشمل البيانات الخاصة أي معلومات تتعلق بالموظفين، بما في ذلك سجلات الموارد البشرية، والسجلات الطبية، ومعلومات المرتبات، لا تستخدم إلا داخل المنظمة.

حساسية - تصنيف الحكومة والقطاع الخاص. وتشمل البيانات الحساسة المعلومات المالية التنظيمية وتتطلب تدابير إضافية لضمان استخباراتها ودقتها. فالكشف قد يضر بالأمن القومي.

تصنيف القطاع العام والبيانات العامة هي بيانات يتقاسمها عامة الجمهور ولا يمكن أن تحدث أثرا سلبيا على المنظمة. ومن أمثلة البيانات العامة عدد الأشخاص الذين يعملون في المنظمة وما هي المنتجات التي تصنعها أو تبيعها المنظمة.

غير مصنفة - تصنيف عسكري/حكومي. أي معلومات يمكن توزيعها عموما على الجمهور دون أي تهديد للمصلحة الوطنية.

غير موقّع - التقصير حتى موقع التصوير -';

$GLOBALS["lang"]['traffic'] = 'حركة المرور';

$GLOBALS["lang"]['true'] = 'صحيح';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'صحيح أو خاطئ (في سياق الورقة المشتركة)';

$GLOBALS["lang"]['unallocated'] = 'غير محمية';

$GLOBALS["lang"]['unauthorised'] = 'غير مأذون به';

$GLOBALS["lang"]['unchanged'] = 'بدون تغيير';

$GLOBALS["lang"]['unknown'] = 'مجهول';

$GLOBALS["lang"]['unmanaged'] = 'غير محكومة';

$GLOBALS["lang"]['unused'] = 'غير مستخدم';

$GLOBALS["lang"]['update'] = 'آخر المستجدات';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'تستخدم البيانات التي تم جمعها من أجهزةكم وتطابق البرمجيات التي تم تركيبها بالقيمة المقدّمة، وتحسب المباريات كم عدد التراخيص التي تم استخدامها وعدد التراخيص المتبقية. يسمح باستخدام البطاقات البرية على <i>تطابق</i> الحقل الذي يطابق البرمجيات إسمه عاصفة';

$GLOBALS["lang"]['using the main menu items.'] = 'باستخدام بنود القائمة الرئيسية';

$GLOBALS["lang"]['valid'] = 'صحيح';

$GLOBALS["lang"]['version'] = 'نسخة';

$GLOBALS["lang"]['virtualisation'] = 'الافتراض';

$GLOBALS["lang"]['warning'] = 'تحذير';

$GLOBALS["lang"]['web'] = 'شبكة الإنترنت';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'مع تصريحات الدخول المحلية والرادالية';

$GLOBALS["lang"]['with devices::update permission.'] = 'مع الأجهزة: الإذن المستكمل.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'مع الإشارة أون إعادة توجيه';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'مع نية توفير وصول بسيط وغير ملائم بطريقة مألوفة للمطورين. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).';

$GLOBALS["lang"]['yes'] = 'نعم';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'أنت لا تحتاج رخصة قيادة عالية لاستخدام منتجات الموجة الأولى الترخيص';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'ستعين أيّ أجهزة مُكتشفة إلى ذلك الأورغ أو الموقع.';

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

