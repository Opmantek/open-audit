<?php
$GLOBALS["lang"][' Default, currently '] = ' वर्तमान में डिफ़ॉल्ट ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' यदि कोई उम्मीद के रूप में काम नहीं करता है, तो आपकी पहली बात यह है कि लॉग की जांच करें।';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' अब एक भाषा फ़ाइल के साथ समर्थित है। इस भाषा का उपयोग करने के लिए अपने उपयोगकर्ता को बदलने के लिए क्लिक करें ';

$GLOBALS["lang"][' seconds'] = ' सेकंड';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', लेकिन लॉगऑन क्रेडेंशियल के एक अलग सेट को याद करने की आवश्यकता नहीं होगी।';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'जिनमें से हम एक डिफ़ॉल्ट सेट के रूप में तीस से अधिक की आपूर्ति करते हैं। पेशेवर उपयोगकर्ता इन को बदल नहीं सकते हैं, लेकिन एक एंटरप्राइज़ उपयोगकर्ता की पूर्ण अनुकूलन क्षमता है - जिसमें अपना खुद का निर्माण शामिल है।';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', आप <i>होना</i> Auth के लिए Entra का उपयोग करने के लिए अपने ओपन-ऑडिट सर्वर पर https का उपयोग करना चाहिए। उपयोग करने के लिए कृपया अपाचे को कॉन्फ़िगर करें <strong>*</strong> इससे पहले कि एनट्रा को दूसरे के लिए कॉन्फ़िगर किया जाए।';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '। इसे सक्षम करने के लिए, कॉन्फ़िगरेशन आइटम को संपादित करें ';

$GLOBALS["lang"]['10 Minutes'] = '10 मिनट';

$GLOBALS["lang"]['15 Minutes'] = '15 मिनट';

$GLOBALS["lang"]['30 Minutes'] = '30 मिनट';

$GLOBALS["lang"]['5 Minutes'] = '5 मिनट';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 संगठनात्मक, लोगों, भौतिक और तकनीकी श्रेणियों में समूहित नियंत्रण';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>नोट</strong> - आप इस URL को स्थानीय ओपन-ऑडिट सर्वर से एक्सेस कर रहे हैं। किसी अन्य मशीन पर चलने पर डाउनलोड की गई स्क्रिप्ट को जमा करने में सक्षम नहीं होगा। यदि आपको अन्य मशीनों का ऑडिट करना है, तो कृपया स्क्रिप्ट को रिमोट मशीन से डाउनलोड करें, न कि ओपन-ऑडिट सर्वर पर ब्राउज़र का उपयोग करें।';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">नोट</strong> - आपको एक लक्ष्य डिवाइस पर बेंचमार्क निष्पादित करने के लिए एसएसएच या एसएसएच कुंजी क्रेडेंशियल काम करना होगा।</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>बेसलाइन</strong> - ओवरआर्चिंग दस्तावेज़ जिसमें बेसलाइन परिभाषा और व्यक्तिगत नीति परीक्षण शामिल हैं।<br/> <br/> <strong>नीतियां</strong> - व्यक्तिगत परीक्षण बेसलाइन के भीतर निहित है। प्रत्येक परीक्षण एक विशिष्ट आइटम के लिए है। एक उदाहरण एसएसएच संस्करण 1.2.3 के लिए परीक्षण किया जाएगा।<br/> <br/> <strong>विवरण</strong> - बेसलाइन नेटस्टैट बंदरगाहों, उपयोगकर्ताओं और सॉफ्टवेयर की तुलना कर सकते हैं।<br/> <br/> <strong>सॉफ्टवेयर</strong> - सॉफ्टवेयर की तुलना करने के लिए हम नाम और संस्करण की जांच करते हैं। क्योंकि संस्करण संख्या प्रारूप में सभी मानकीकृत नहीं हैं, जब हम एक लेखा परीक्षा परिणाम प्राप्त करते हैं तो हम सॉफ्टवेयर_पैड नामक एक नया विशेषता बनाते हैं जिसे हम प्रत्येक पैकेज के लिए शेष सॉफ्टवेयर विवरण के साथ डेटाबेस में स्टोर करते हैं। इस कारण से, सॉफ़्टवेयर नीतियों का उपयोग करके बेसलाइन काम नहीं करेगा जब किसी उपकरण के खिलाफ चली जाती है जिसे 1.10 (कम से कम) द्वारा ऑडिट नहीं किया गया है। सॉफ्टवेयर नीतियां "के बराबर" संस्करण के खिलाफ परीक्षण कर सकते हैं, "अधिकांश" या "के बराबर या उससे अधिक"।<br/> <br/> <strong>नेटस्टैट पोर्ट</strong> - नेटस्टैट पोर्ट्स पोर्ट नंबर, प्रोटोकॉल और प्रोग्राम के संयोजन का उपयोग करते हैं। यदि सभी पॉलिसी पास कर रहे हैं।<br/> <br/> <strong>उपयोगकर्ता</strong> - उपयोगकर्ता नेटस्टैट पोर्ट्स के समान काम करते हैं। यदि कोई उपयोगकर्ता मिलान नाम, स्थिति और पासवर्ड विवरण (परिवर्तनीय, समाप्ति, आवश्यक) के साथ मौजूद है तो पॉलिसी गुजरती है।<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>एक स्थान एक भौतिक पता है जिसमें इसके साथ जुड़े उपकरण हो सकते हैं।<br/> <br/>आप इसे निर्देशांक (लेट/लॉन्ग) निर्दिष्ट कर सकते हैं और यदि डिवाइस असाइन किए गए हैं तो स्थान ओपन-ऑडिट एंटरप्राइज मैप पर दिखाई देगा।<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>एक नेटवर्क खोज प्रविष्टियों और डिवाइस विशेषताओं से प्राप्त होता है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>एक सारांश आइटम की एक सूची प्रदर्शित करेगा, जो द्वारा निर्दिष्ट विशेषता के विशिष्ट मूल्यों द्वारा समूहित होगा। <code>table</code> और <code>column</code> विशेषताएँ<br/> <br/>जब एक सारांश निष्पादित किया जाता है, तो परिणाम इसके लिए अलग-अलग मूल्यों की एक सूची होगी <code>table</code> और <code>column</code>। उन मूल्यों पर लिंक होंगे जो उपयोगकर्ता को मिलान उपकरणों को देखने की अनुमति देते हैं।<br/> <br/>यदि विशेषता <code>extra_columns</code> जनसंख्याबद्ध है, जिसके परिणामस्वरूप पृष्ठ में मानक उपकरण स्तंभों के अलावा इन स्तंभों को शामिल किया जाएगा।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>एजेंट आपको बिना किसी खोज के पीसी का ऑडिट करने देते हैं। एजेंट को स्थापित करें और यह प्रत्येक दिन सर्वर के साथ चेक-इन करेगा और स्वयं ऑडिट करेगा। इससे कोई फर्क नहीं पड़ता कि आपके कंप्यूटर फ़ायरवॉल्ड हैं, तो ऑडिट डेटा अभी भी ओपन-ऑडिट में दिखाई देगा।</p><p>जब परीक्षण <strong>अगर</strong> एक एजेंट को कार्य करना चाहिए, सभी तीन परीक्षणों को पास करना चाहिए (यदि परीक्षण निर्धारित किया गया है)। <strong>फिर</strong> कार्रवाई की जाती है।</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>अनुप्रयोगों को आपके द्वारा परिभाषित किया गया है, उपयोगकर्ता और उपकरणों के साथ जुड़ने के लिए ओपन-ऑडिट के लिए संग्रहीत किया गया है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>विशेष क्षेत्रों के लिए उपयोग करने के लिए योगदान ओपन-ऑडिट के लिए संग्रहीत किए जाते हैं।</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>यह निर्धारित करने में सक्षम होने के नाते कि किस मशीन को कॉन्फ़िगर किया गया है वह सिस्टम प्रशासन और लेखा परीक्षा का एक प्रमुख हिस्सा है - और अब उस पर रिपोर्टिंग सरल और स्वचालित किया जाएगा। एक बार जब आप अपने बेसलाइन को परिभाषित करते हैं तो यह स्वचालित रूप से पूर्व निर्धारित अनुसूची पर उपकरणों के एक सेट के खिलाफ चला जाएगा। इन निष्पादित बेसलाइनों का उत्पादन वेब देखने के लिए उपलब्ध होगा, एक तीसरे पक्ष की प्रणाली में आयात या यहां तक कि एक मुद्रित रिपोर्ट के रूप में भी।<br/> <br/> बेसलाइन आपको उन विशेषताओं के एक सेट के साथ ऑडिट डेटा को संयोजित करने में सक्षम बनाता है जिन्हें आपने पहले परिभाषित किया है (आपका बेसलाइन) उपकरणों के अनुपालन को निर्धारित करने के लिए।<br/> <br/> उदाहरण के लिए - आप Centos 6 चलाने वाले डिवाइस से बेसलाइन बना सकते हैं जो क्लस्टर में आपके अपाचे सर्वर में से एक के रूप में कार्य करता है। आप जानते हैं कि इस विशेष सर्वर को सिर्फ उसी तरह कॉन्फ़िगर किया गया है जिस तरह से आप चाहते हैं लेकिन यदि क्लस्टर में अन्य सर्वर बिल्कुल समान रूप से कॉन्फ़िगर किए गए हैं तो आप अनिश्चित हैं। बेसलाइन आपको यह निर्धारित करने में सक्षम बनाता है।<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>क्लस्टर को उपकरणों को बेहतर रिकॉर्ड करने, प्रबंधित करने और लाइसेंसिंग लागत का आकलन करने के लिए ओपन-ऑडिट में संग्रहीत किया जाता है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>घटक एक सामान्य शब्द है जो तालिकाओं के लिए उपयोग किया जाता है जो किसी उपकरण के लिए विशेषताओं को स्टोर करता है। उन तालिकाओं हैं: access_point, arp, bios, प्रमाणपत्र, cli_config, डिस्क, dns, फ़ाइल, ip, लाइसेंस, लॉग, मेमोरी, मॉड्यूल, मॉनिटर, मदरबोर्ड, नेटस्टैट, नेटवर्क, nmap, ऑप्टिकल, पेजफ़ाइल, विभाजन, नीति, print_queue, प्रोसेसर, रेडियो, मार्ग, सैन, scsi, सर्वर_item, सर्विस, शेयर, सॉफ्टवेयर, सॉफ्टवेयर_key, ध्वनि, कार्य, यूएसबी, उपयोगकर्ता_समूह, चर, वीडियो, वीएम, विंडोज़।</p><p> इसके अलावा हम निम्नलिखित तालिकाओं को भी संबंधित डिवाइस के रूप में वर्गीकृत करते हैं: आवेदन, लगाव, क्लस्टर, क्रेडेंशियल, छवि।</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>डेटाबेस में संग्रहीत होने पर क्रेडेंशियल को एन्क्रिप्ट किया जाता है।<br/> <br/>जब एक डिस्कवरी चली जाती है, तो एक उपकरण की अपनी क्रेडेंशियल है, जो पहले कनेक्शन के लिए पुनः परीक्षण किया जाता है (जिससे डिस्कवरी चली जाती है) <code>credential</code> तालिका). यदि ये विफल हो जाते हैं, तो दिए गए संगठन से जुड़े क्रेडेंशियल <code>credentials.org_id</code> डिवाइस के खिलाफ भी परीक्षण किया जाता है। कार्य क्रेडेंशियल को क्रेडेंशियल टेबल में एक व्यक्तिगत उपकरण स्तर पर संग्रहीत किया जाता है (नोट - तालिका नाम में कोई "s" नहीं)।<br/> <br/>एसएसएच कुंजी एसएसएच उपयोगकर्ता नाम / पासवर्ड से पहले परीक्षण किया जाता है। जब एसएसएच परीक्षण किया जाता है, तो क्रेडेंशियल को सूडो के साथ काम करने या रूट होने के रूप में भी चिह्नित किया जाएगा।<br/> <br/>उपयोग में आसानी के लिए, विंडोज पासवर्ड में एक एकल या डबल उद्धरण नहीं होना चाहिए। यह एक दूरस्थ WMI सीमा है, एक ओपन-ऑडिट सीमा नहीं है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>क्रेडेंशियल का उपयोग उपकरणों तक पहुंचने के लिए किया जाता है।<br/> <br/>क्रेडेंशियल को कॉन्फ़िगर करने वाली पहली चीजें हैं जो आप ओपन-ऑडिट स्थापित करने के बाद करते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>अपने रैक को परिभाषित करें और उपकरणों को उनकी स्थिति में निर्दिष्ट करें। आपके पास पहले से ही Open-Audit में अपने डिवाइस हैं और आप अपने स्थानों को जानते हैं। ओपन-ऑडिट इस विस्तार को बढ़ा देता है ताकि आप एक रैक बना सकें और उसे डिवाइस असाइन कर सकें। ओपन-ऑडिट रैक और भीतर निहित उपकरणों का दृश्य प्रदान करेगा। यदि आप एक उपकरण तस्वीर प्रदान करते हैं, तो उस तस्वीर का उपयोग दृश्य में किया जाएगा। आप स्क्रीन पर रैक पर देख सकते हैं और उसी आइटम को देख सकते हैं जिसे आप देखेंगे कि क्या आप इसके सामने खड़े हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>अपने नेटवर्क पर उपकरण प्रबंधित करने की जरूरत है। लेकिन आप अपने रिकॉर्ड को तारीख तक कैसे रख सकते हैं? एक स्प्रेडशीट - defintley नहीं। यह दिन नहीं होने पर तारीख से बाहर हो जाएगा। क्यों मैन्युअल रूप से बनाए रखने की कोशिश करते हैं। अपने नेटवर्क को स्वचालित रूप से स्कैन करने और अपने उपकरणों को रिकॉर्ड करने के लिए ओपन-ऑडिट का उपयोग करें - निर्माता, मॉडल, सीरियल और 100 से अधिक अन्य विशेषताओं। सॉफ्टवेयर, सेवाओं, डिस्क, खुले बंदरगाहों, उपयोगकर्ताओं आदि की पूरी सूची स्वचालित रूप से देखें कि कोई विशेषता जोड़ा गया है, हटाया या बदला गया है।<br/> <br/>एक बार ओपन-ऑडिट सेटअप होता है, तो आप वापस बैठ सकते हैं और आराम कर सकते हैं। उदाहरण के लिए - क्या नए उपकरणों हम इस सप्ताह पता था? इस सप्ताह कौन से नया सॉफ्टवेयर स्थापित किया गया था? वहाँ किसी भी हार्डवेयर पिछले महीने में परिवर्तन?<br/> <br/>अपने स्वयं के कस्टम विशेषताओं के साथ आसानी से संग्रहीत क्षेत्रों पर विस्तार करें।<br/> <br/>यहां तक कि उन उपकरणों को जोड़ता है जो आपके नेटवर्क से जुड़े नहीं हैं या उन उपकरणों को आपके ओपन-ऑडिट सर्वर तक नहीं पहुंच सकता है।<br/> <br/>अपने नेटवर्क पर कंप्यूटर, स्विच, रूटर, प्रिंटर या किसी अन्य उपकरण - ओपन-ऑडिट उन्हें सब ऑडिट कर सकते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>डिस्कवरी क्या ओपन-ऑडिट करता है के बहुत दिल में हैं।<br/> <br/>क्या आप जानते हैं?<br/> <br/>डिस्कवरी डेटा आइटम तैयार कर रहे हैं जो आपको प्रत्येक बार उस नेटवर्क के विवरण को दर्ज किए बिना एक क्लिक में नेटवर्क पर खोज करने में सक्षम बनाता है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>डिस्कवरी विकल्प एक वैश्विक सेटिंग में बदल रहे हैं <a href="../configuration?configuration.name=discovery_default_scan_option">विन्यास</a>। यदि आपके पास एक ओपन-ऑडिट एंटरप्राइज लाइसेंस है तो ये खोज के अनुसार सेट करने योग्य हैं और इसके अलावा भविष्य में आवश्यकतानुसार अनुकूलन योग्य हैं। डिस्कवरी विकल्प इस प्रकार हैं:<br/><br/><strong>UltraFast</strong>: <i>दूसरा</i>। केवल उन बंदरगाहों को स्कैन करें जो ओपन-ऑडिट को डिवाइस से बात करने और आईओएस डिवाइस (WMI, SSH, SNMP, Apple सिंक) का पता लगाने के लिए उपयोग करने की आवश्यकता है। An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला नहीं माना जाता है। डिवाइस को एक Nmap पिंग का जवाब देना चाहिए। आक्रामक समय का प्रयोग करें।<br/><br><strong>सुपरफास्ट</strong>: <i>5 सेकंड</i>। शीर्ष 10 टीसीपी और यूडीपी बंदरगाहों के साथ-साथ पोर्ट 62078 (Apple आईओएस डिटेक्शन) को स्कैन करें। An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला नहीं माना जाता है। डिवाइस को एक Nmap पिंग का जवाब देना चाहिए। आक्रामक समय का प्रयोग करें।<br><br/><strong>फास्ट</strong>: <i>40 सेकंड</i>। शीर्ष 100 टीसीपी और यूडीपी बंदरगाहों के साथ-साथ पोर्ट 62078 (Apple आईओएस डिटेक्शन) को स्कैन करें। An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला नहीं माना जाता है। डिवाइस को एक Nmap पिंग का जवाब देना चाहिए। आक्रामक समय का प्रयोग करें।<br/><br/><strong>मध्यम (क्लासिक)</strong>: <i>90 सेकंड</i>। जैसा कि हम इसे बना सकते हैं, एक पारंपरिक ओपन-ऑडिट स्कैन के करीब है। शीर्ष 1000 टीसीपी बंदरगाहों के साथ-साथ 62078 (ऐप्पल आईओएस डिटेक्शन) और यूडीपी 161 (एसएनएमपी) को स्कैन करें। An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला माना जाता है (और डिवाइस का पता लगाने को ट्रिगर करेगा)। डिवाइस को एक Nmap पिंग के जवाब की परवाह किए बिना स्कैन किया जाता है। आक्रामक समय का प्रयोग करें।<br/><br/><strong>मध्यम</strong>: <i>100 सेकंड</i>। शीर्ष 1000 टीसीपी और शीर्ष 100 यूडीपी बंदरगाहों के साथ-साथ पोर्ट 62078 (Apple आईओएस डिटेक्शन) स्कैन करें। An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला नहीं माना जाता है। डिवाइस को एक Nmap पिंग का जवाब देना चाहिए। आक्रामक समय का प्रयोग करें।<br/><br/><strong>धीमी</strong>: <i>4 मिनट</i>। शीर्ष 1000 टीसीपी और शीर्ष 100 यूडीपी बंदरगाहों के साथ-साथ पोर्ट 62078 (Apple आईओएस डिटेक्शन) स्कैन करें। संस्करण का पता लगाने में सक्षम. An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला माना जाता है (और डिवाइस का पता लगाने को ट्रिगर करेगा)। डिवाइस को एक Nmap पिंग का जवाब देना चाहिए। सामान्य समय का प्रयोग करें।<br/><br/><strong>UltraSlow</strong>: <i>20 मिनट</i>। अनुशंसित नहीं है। शीर्ष 1000 टीसीपी और यूडीपी बंदरगाहों को स्कैन करें, साथ ही साथ पोर्ट 62078 (Apple आईओएस डिटेक्शन)। डिवाइस को एक Nmap पिंग के जवाब की परवाह किए बिना स्कैन किया जाता है। संस्करण का पता लगाने में सक्षम. An <code>open|filtered</code> बंदरगाह को खुला माना जाता है। A <code>filtered</code> बंदरगाह को खुला माना जाता है (और डिवाइस का पता लगाने को ट्रिगर करेगा)। विनम्र समय का प्रयोग करें।<br/><br/><strong>कस्टम</strong>: <i>अज्ञात समय</i>। जब मानक खोज पूर्व निर्धारित के अलावा अन्य विकल्प बदल दिए जाते हैं।<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>समूहों का उपयोग उन उपकरणों की सरल सूची के रूप में किया जाता है जो आवश्यक स्थितियों से मेल खाते हैं। यदि जेएसओएन का उपयोग करने का अनुरोध किया गया तो वे एक सूची वापस कर देते हैं <code>devices.id</code> केवल। यदि वेब इंटरफ़ेस का उपयोग करने का अनुरोध किया जाता है, तो वे मानक कॉलम विशेषता सूची वापस लौटते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>यदि उपयोगकर्ता Open-Audit पर लॉगिंग करता है, तो LDAP (और आप OpenLDAP का उपयोग कर रहे हैं) की खोज करने के लिए उपयोग नहीं करता है, तो आप किसी अन्य खाते का उपयोग कर सकते हैं, जिसके पास यह एक्सेस है। उपयोग <code>ldap_dn_account</code> और <code>ldap_dn_password</code> इसे कॉन्फ़िगर करने के लिए।<br/> <br/><strong>सहायक दस्तावेज</strong><br/> <br/><a href="/index.php/auth/help">सामान्य सहायता</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Auth के लिए Entra का उपयोग करना</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Auth के लिए OKTA का उपयोग करना</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">LDAP लॉगिन समस्या निवारण</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">उपयोगकर्ता, भूमिकाओं और संगठनों</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>यदि आप एक उपकरण प्रकार जोड़ते हैं, तो संबंधित आइकन को प्रदर्शित करने के लिए आपको मैन्युअल रूप से .svg प्रारूपित फ़ाइल को निर्देशिका में कॉपी करना होगा:<br/><em>लिनक्स</em>:/usr/local/open-audit/public/device_images<br/><em>विंडोज</em>C:\xampp\htdocs\open-audit\device_images<br/> <br/>यदि आप एक स्थान प्रकार जोड़ते हैं, तो संबद्ध आइकन को प्रदर्शित करने के लिए आपको निर्देशिका में 32x32px आइकन को मैन्युअल रूप से कॉपी करना होगा:<br/><em>लिनक्स</em>:/usr/local/open-audit/public/images/map_icons<br/><em>विंडोज</em>c:\xampp\htdocs\open-audit\images\map_icons</p><p>जब <i>संसाधन</i> एक है <code>device</code>वैध <i>प्रकार</i> हैं: <code>class</code>, <code>environment</code>, <code>status</code> और <code>type</code>। यदि <i>संसाधन</i> है <code>locations</code> या <code>org</code> केवल मान्य <i>प्रकार</i> है <code>type</code>। यदि <i>संसाधन</i> एक है <code>query</code> केवल मान्य <i>प्रकार</i> है <code>menu_category</code>।</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>यदि आप अपने क्लाउड मशीनों को पूरी तरह से ऑडिट करने का इरादा रखते हैं, तो यह मत भूलो कि आपको ओपन-ऑडिट में बचे हुए क्रेडेंशियल की भी आवश्यकता होगी।</p><p>यदि आप Microsoft Azure (22 for SSH, आदि) का उपयोग कर रहे हैं तो सुनिश्चित करें कि आप सही बंदरगाहों की अनुमति दें। अपनी आभासी मशीन की जाँच करें -> नेटवर्किंग नियम<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>यदि आप एक सूची प्रकार का चयन करते हैं, तो "मूल्य" फ़ील्ड सक्षम होगी। आपको यहां चयन योग्य मूल्यों की एक अलग सूची रखना चाहिए। जब भी फ़ील्ड संपादित हो जाती है तो ये ड्रॉपडाउन बॉक्स में प्रदर्शित होंगे।<br/> <br/>अधिकांश अन्य विशेषताओं की तरह, फ़ील्ड्स को संपादित किया जा सकता है। जैसा कि आप सामान्य रूप से करेंगे, बल्क एडिट फ़ंक्शन का उपयोग करें और आप देखेंगे कि फील्ड इनपुट के लिए उपलब्ध हैं।<br/> <br/>डिवाइस विवरण स्क्रीन देखें, क्षेत्र युक्त अनुभाग खोलें और (यदि आपके पास पर्याप्त पहुंच है) तो आप इसे संपादित करने के लिए फ़ील्ड मान पर क्लिक कर सकते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>कंप्यूटर सुरक्षा की कभी बदलती दुनिया में जहां नई कमजोरियों की खोज की जा रही है और हर दिन पैच किया जा रहा है, सुरक्षा अनुपालन को लागू करने के लिए एक सतत प्रक्रिया होना चाहिए। यह भी नीतियों, साथ ही आवधिक मूल्यांकन और जोखिम निगरानी के लिए समायोजन करने के लिए एक रास्ता शामिल करने की जरूरत है। OpenSCAP पारिस्थितिकी तंत्र इन प्रक्रियाओं के त्वरित, लागत प्रभावी और लचीला कार्यान्वयन के लिए उपकरण और अनुकूलन नीतियों को प्रदान करता है।</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>एकीकरण आपको बाहरी प्रणालियों से बात करने के लिए ओपन-ऑडिट के लिए डिवाइस चयन और शेड्यूल सेटअप करने की अनुमति देता है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>माइक्रोसॉफ्ट विंडोज डेस्कटॉप सिस्टम में नेटवर्क सीमाएं हैं जो ओपन-ऑडिट के प्रदर्शन को प्रभावित कर सकती हैं। टीसीपी / आईपी स्टैक एक साथ अधूरा आउटबाउंड टीसीपी कनेक्शन प्रयासों की संख्या को सीमित करता है। सीमा तक पहुंचने के बाद, बाद में कनेक्शन प्रयासों को एक कतार में रखा जाता है और एक निश्चित दर (10 प्रति सेकंड) पर हल किया जाएगा। यदि कई कतार में प्रवेश करते हैं, तो उन्हें छोड़ दिया जा सकता है। अंत में, अपाचे को ओएस द्वारा पुनरारंभ किया जाएगा। इस कारण से, विंडोज डेस्कटॉप ऑपरेटिंग सिस्टम पर ओपन-ऑडिट स्थापित करना समर्थित नहीं है।<br/><br/>ओपन-ऑडिट कोड के साथ कुछ भी गलत नहीं है, न ही हम विंडोज क्लाइंट मशीनों पर इस मुद्दे को संबोधित करने के लिए कुछ भी कर सकते हैं।</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>इस लिंक्ड पेज के नीचे Nmap टाइमिंग विवरण पाए जाते हैं <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man- Performance.html</a>। उस पृष्ठ से:<br/> <br/><em>यदि आप एक सभ्य ब्रॉडबैंड या ईथरनेट कनेक्शन पर हैं, तो मैं हमेशा -T4 (Aggressive) का उपयोग करने की सलाह देता हूं। कुछ लोग प्यार करते हैं -T5 (Insane) हालांकि यह मेरे स्वाद के लिए बहुत आक्रामक है। लोग कभी-कभी निर्दिष्ट करते हैं -T2 (Polite) क्योंकि उन्हें लगता है कि मेजबानों को दुर्घटनाग्रस्त होने की संभावना कम है या क्योंकि वे खुद को सामान्य रूप से विनम्र मानते हैं। वे अक्सर यह महसूस नहीं करते कि वास्तव में कितना धीमा है। उनका स्कैन डिफॉल्ट स्कैन से दस गुना लंबा हो सकता है। मशीन दुर्घटनाओं और बैंडविड्थ की समस्याएं डिफ़ॉल्ट समय विकल्पों -T3 (सामान्य) के साथ दुर्लभ हैं और इसलिए मैं सामान्य रूप से सतर्क स्कैनर के लिए सलाह देता हूं। इन समस्याओं को कम करने के लिए टाइमिंग मूल्यों के साथ खेलने की तुलना में संस्करण का पता लगाना अधिक प्रभावी है।</em><footer>गॉर्डन <i>फियोडोर</i> लिओन</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>ओपन-ऑडिट को एक उपयोगकर्ता को प्रमाणित करने के लिए विभिन्न तरीकों का उपयोग करने के लिए कॉन्फ़िगर किया जा सकता है और इसके अलावा, समूह सदस्यता के आधार पर निर्दिष्ट भूमिकाओं और orgs का उपयोग करके एक उपयोगकर्ता खाता बनाने के लिए।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>ओपन-ऑड आईटी फ़ाइलों की एक फ़ाइल या निर्देशिका के बारे में विवरण पुनर्प्राप्त कर सकता है और ओपन-ऑडिट डेटाबेस में अन्य विशेषताओं के अनुसार परिवर्तन के लिए इन फ़ाइलों की निगरानी कर सकता है।<br/> <br/>यह सुविधा लिनक्स ओपन-ऑडिट सर्वर के लिए बॉक्स से बाहर काम करती है, लेकिन विंडोज ओपन-ऑडिट सर्वर के तहत सर्विस अकाउंट नाम में बदलाव की जरूरत है।<br/> <br/>समर्थित ग्राहक विंडोज और लिनक्स हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>ओपन-ऑड आईटी एक फ़ाइल के बारे में विवरण पुनर्प्राप्त कर सकता है, मूल पैकेज प्रबंधक से पूछ सकता है यदि वे इसे जानते हैं और ओपन-ऑडिट डेटाबेस में अन्य विशेषताओं के अनुसार परिवर्तन के लिए इन फ़ाइलों की निगरानी करते हैं।<br/> <br/>समर्थित ग्राहक केवल लिनक्स ही हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>ओपन-ऑड आईटी प्रत्येक उपकरण से जुड़े कस्टम क्षेत्रों में जानकारी स्टोर कर सकता है।<br/> <br/>एक बार जब एक अतिरिक्त फील्ड बनाया गया है तो इसका उपयोग प्रश्नों और समूहों में किया जा सकता है जैसे डेटाबेस में किसी अन्य विशेषता।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-Audit inbuilt कई प्रश्नों के साथ आता है। यदि आपको एक विशिष्ट क्वेरी की आवश्यकता होती है और पूर्व-पैकेज्ड प्रश्नों में से कोई भी आपकी आवश्यकताओं को फिट नहीं करता है, तो इसे एक नया बनाना और इसे चलाने के लिए Open-Audit में लोड करना काफी आसान है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>ओपन-ऑडिट कई सारांशों के साथ जुड़ा हुआ है। यदि आपको एक विशिष्ट सारांश की आवश्यकता होती है और पूर्व-पैकेज्ड सारांशों में से कोई भी आपकी आवश्यकताओं को फिट नहीं करता है, तो इसे एक नया बनाना और इसे चलाने के लिए ओपन-ऑडआईटी में लोड करना काफी आसान है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>ओपन-ऑडिट को फर्स्टवेव द्वारा समर्थन के एक अद्भुत स्तर के साथ समर्थित किया गया है। यदि आप समर्थन देने वालों के सक्रिय समुदाय को पसंद करते हैं, तो इसके साथ ही साथ। आप सीधे डेवलपर्स से बात कर सकते हैं और 24 घंटों के भीतर जवाब प्राप्त कर सकते हैं? बस कोशिश करो कि अन्य उत्पादों के साथ! कमाल समर्थन। पूर्ण स्टॉप। आपको समर्थन की आवश्यकता है, हम समर्थन प्रदान करते हैं। अगर नहीं या buts. महान समर्थन। अवधि<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>ओपन-ऑडिट बॉक्स से मल्टी-टेनेंसी प्रदान करता है!<br/> <br/>ओपन-ऑडिट में संगठन (संगठन) एक महत्वपूर्ण वस्तु है। एक उपयोगकर्ता के पास एक प्राथमिक संगठन है और साथ ही उन संगठनों की सूची भी है जिनका वे उपयोग कर सकते हैं। एक उपयोगकर्ता इसे असाइन किए गए "Roles" की एक सूची के साथ जोड़ती है जो यह परिभाषित करता है कि वे उन संगठनों को सौंपे गए आइटमों पर क्या कार्रवाई कर सकते हैं जिन्हें उनके पास एक्सेस है। एक उपयोगकर्ता "ऑर्ग" और "रोल" का संयोजन परिभाषित करता है कि वे क्या कर सकते हैं और ओपन-ऑडिट के भीतर नहीं कर सकते हैं।<br/> <br/>ओपन-ऑडिट में अधिकांश आइटम एक संगठन को सौंपा गया है। उपकरण, स्थान, नेटवर्क आदि।<br/> <br/>संगठन में बाल संगठन हो सकते हैं। एक संगठनात्मक चार्ट (त्रि) संरचना के बारे में सोचना। यदि किसी उपयोगकर्ता के पास विशिष्ट संगठन तक पहुंच है, तो उनके पास उस संगठन के वंशजों तक भी पहुंच है। अधिक जानकारी के लिए, इसे देखें <a href="/index.php/faq?name=Users, Roles and Orgs">सामान्य</a>।</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>ओपन-ऑडिट बॉक्स से मल्टी-टेनेंसी प्रदान करता है!<br/> <br/>ओपन-ऑडिट में संगठन (संगठन) एक महत्वपूर्ण वस्तु है। एक उपयोगकर्ता के पास एक प्राथमिक संगठन है और साथ ही उन संगठनों की सूची भी है जिनका वे उपयोग कर सकते हैं। एक उपयोगकर्ता इसे असाइन किए गए "Roles" की एक सूची के साथ जोड़ती है जो यह परिभाषित करता है कि वे उन संगठनों को सौंपे गए आइटमों पर क्या कार्रवाई कर सकते हैं जिन्हें उनके पास एक्सेस है। एक उपयोगकर्ता "ऑर्ग" और "रोल" का संयोजन परिभाषित करता है कि वे क्या कर सकते हैं और ओपन-ऑडिट के भीतर नहीं कर सकते हैं।<br/> <br/>ओपन-ऑडिट में अधिकांश आइटम एक संगठन को सौंपा गया है। उपकरण, स्थान, नेटवर्क आदि।<br/> <br/>संगठन में बाल संगठन हो सकते हैं। एक संगठनात्मक चार्ट (त्रि) संरचना के बारे में सोचना। यदि किसी उपयोगकर्ता के पास विशिष्ट संगठन तक पहुंच है, तो उनके पास उस संगठन के वंशजों तक भी पहुंच है।</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>जल्दी से अपने नेटवर्क पर उपकरणों की स्थिति देखने के लिए।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>ओपन-ऑड में भूमिकाएं आईटी एक महत्वपूर्ण आइटम है। एक उपयोगकर्ता के पास एक प्राथमिक संगठन है और साथ ही उन संगठनों की सूची भी है जिनका वे उपयोग कर सकते हैं। एक उपयोगकर्ता इसे असाइन किए गए रोल्स की एक सूची के साथ जोड़ती है जो यह परिभाषित करती है कि वे उन संगठनों को सौंपे गए आइटमों पर क्या कार्रवाई कर सकते हैं जिन्हें उनके पास एक्सेस है। एक उपयोगकर्ता "ऑर्ग" और "रोल" का संयोजन परिभाषित करता है कि वे क्या कर सकते हैं और ओपन-ऑडिट के भीतर नहीं कर सकते हैं।<br/> <br/>पूर्ण ओपन-ऑडिट एंटरप्राइज़ अनुभव प्राप्त करें। भूमिकाओं को बनाना आपके उपयोगकर्ताओं को ओपन-ऑडिट के भीतर क्या कर सकते हैं, इस पर बारीक अनाज नियंत्रण की अनुमति देता है।<br/> <br/>प्राधिकरण के लिए प्राथमिक विधि (एक उपयोगकर्ता क्या कर सकता है) उपयोगकर्ताओं की भूमिकाओं पर आधारित है। डिफ़ॉल्ट भूमिकाओं को व्यवस्थापक, org_admin, रिपोर्टर और उपयोगकर्ता के रूप में परिभाषित किया गया है। प्रत्येक भूमिका में प्रत्येक समापन बिंदु के लिए अनुमतियों का एक सेट (Create, Read, Update, Delete) होता है। अतिरिक्त भूमिकाओं को परिभाषित करने और मौजूदा भूमिकाओं को संपादित करने की क्षमता ओपन-ऑडिट एंटरप्राइज में सक्षम है।<br/> <br/>रोल्स का उपयोग LDAP (सक्रिय निर्देशिका और OpenLDAP) प्राधिकरण के साथ भी किया जा सकता है। एंटरप्राइज़ लाइसेंस प्राप्त प्रतिष्ठानों में प्रत्येक परिभाषित भूमिका के लिए LDAP समूह को अनुकूलित करने की क्षमता होती है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>नियम विशेषताओं की जांच करते हैं और उचित नियम के आधार पर cahnges बनाते हैं।</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>स्कैनिंग विकल्प आपको आसानी से खोज के लिए विकल्पों का एक सेट लागू करने की अनुमति देता है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Google मानचित्र द्वारा प्रदान किए गए सरल, सहज, सटीक भौगोलिक मानचित्र। ओपन-ऑडिट लिवरेज Google मानचित्र डिवाइस स्थानों के लाइव, इंटरैक्टिव भौगोलिक मानचित्रण प्रदान करने के लिए। भू-कोड और देशांतर / अक्षांश के लिए सड़क के पते का स्वचालित रूपांतरण।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>सॉफ्टवेयर पैकेज का उपयोग यह निर्धारित करने के लिए किया जाता है कि क्या एंटीवायरस, बैकअप, फ़ायरवॉल, अनुमोदित या प्रतिबंधित सॉफ्टवेयर स्थापित किया गया है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>वैध सबनेट विशेषताओं के कुछ उदाहरण हैं: 192.168.1.1 (एक एकल आईपी पता), 192.168.1.0/24 (एक सबनेट), 192.168.1-3.1-20 (आईपी पते की एक श्रृंखला)।<br/> <br/><em>नोट</em> - केवल एक सबनेट (उदाहरण के अनुसार - 192.168.1.0/24) स्वचालित रूप से ओपन-ऑडिट के लिए एक वैध नेटवर्क बनाने में सक्षम होगा। <br/> <br/>यदि आप एक सक्रिय निर्देशिका प्रकार का उपयोग करते हैं, तो सुनिश्चित करें कि आपके पास पहले से ही अपने डोमेन नियंत्रक से बात करने के लिए उचित क्रेडेंशियल हैं। <a href="../credentials">credentials</a>।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>मानक ओपन-ऑडिट में संग्रहीत किए जाते हैं।<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>समर्थित ग्राहक केवल लिनक्स ही हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>कार्य एक अनुसूची है कि unix क्रोन अनुसूची दर्पण है। मिनट, घंटे, day_of_month, महीना, day_of_week सभी cron परिभाषाओं के अनुसार कार्य करते हैं। आप कॉमा सेपरेटेड मूल्यों (कोई स्थान नहीं) का उपयोग करके इन के कई लोगों का चयन कर सकते हैं। आप प्रत्येक मूल्य का चयन कर सकते हैं।<br/> <br/>The The most of the <code>type</code> कार्य में से एक हो सकता है: बेसलाइन, कलेक्टरों, खोजों, प्रश्नों, रिपोर्टों या सारांश।<br/> <br/>यदि आप बेसलाइन या डिस्कवरी निर्धारित करना चाहते हैं, तो आपको कार्यों को बनाने से पहले इन बनाने की आवश्यकता होगी। आप में आइटम के प्रकार की आईडी का उपयोग करना चाहिए <code>sub_resource_id</code>। उदाहरण के लिए यदि आप डिस्कवरी शेड्यूल करना चाहते हैं, तो उस विशेष डिस्कवरी ID का उपयोग करें <code>sub_resource_id</code>।<br/> <br/>मूल्य <code>uuid</code> प्रत्येक Open-Audit सर्वर के लिए विशिष्ट है। आपका अद्वितीय मूल्य विन्यास में पाया जा सकता है।<br/> <br/>The The most of the <code>options</code> विशेषता एक JSON दस्तावेज़ है जिसमें कार्य को चलाने के लिए आवश्यक किसी भी अतिरिक्त गुण होते हैं। रिपोर्टों, प्रश्नों और सारांशों के लिए अतिरिक्त विशेषताएं हैं: <code>email_address</code> और <code>format</code>। Bselines के लिए अतिरिक्त विशेषता है <code>group_id</code>।<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The The most of the <code>type</code> स्थान अपने आइकन को असाइन करेगा।<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributes समापन बिंदु आपको ओपन-ऑडिट में विभिन्न विशेषताओं के लिए अनुकूलित मान जोड़ने की अनुमति देता है, पल में यह सुविधा कक्षा, पर्यावरण, स्थिति और उपकरणों पर टाइप विशेषताओं पर काम करती है, दोनों स्थानों और संगठनों के साथ-साथ प्रश्नों के लिए मेनू श्रेणी के लिए टाइप विशेषता। यदि आप एक प्रवीण प्रकार (एक Lkocation देखें) के एक आइटम को देखते हैं तो आप एक ड्रॉप-डाउन बॉक्स से टाइप विशेषताओं को चुना जाना चाहिए। यह वह जगह है जहां उन मूल्यों को संग्रहीत किया जाता है। इसलिए, यदि आप किसी स्थान के लिए चुने जाने वाले नए प्रकार को जोड़ना चाहते हैं, तो इसे एट्रिब्यूट्स फीचर का उपयोग करके जोड़ें।</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>कलेक्टरों की सुविधा आपको नेटवर्क खोज करने वाले कई "सामूहिक" कंप्यूटरों को आसानी से प्रबंधित करने में सक्षम बनाती है। सभी कलेक्टरों को सर्वर से केंद्रीय रूप से नियंत्रित किया जाता है। कलेक्टर और सर्वर के बीच एकमात्र आवश्यक नेटवर्क बंदरगाह 80 और/या 443 हैं।<br/> <br/>यह त्वरित, आसान और सरल नेटवर्क का प्रबंधन करता है। Open-Audit Enterprise लाइसेंस प्राप्त करने के लिए एक एकल कलेक्टर लाइसेंस शामिल है और आवश्यकतानुसार अधिक खरीदने का विकल्प है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>अपने SQL का SELECT अनुभाग <em>होना</em> पूरी तरह से योग्य कॉलम होते हैं। IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>।<br/> <br/>अपने SQL का WHERE अनुभाग <em>होना</em> होना <code>WHERE @filter</code> इसलिए ओपन-ऑडिट उचित संगठन को अपनी क्वेरी को प्रतिबंधित करने के लिए जानता है। SQL इस शर्त को शामिल नहीं किया जाएगा, जब तक कि आपके पास व्यवस्थापक भूमिका न हो।<br/> <br/>एक उदाहरण क्वेरी SQL उन उपकरणों पर विशेषताओं को दिखा रहा है जिनके पास एक है <code>os_group</code> "लिनक्स" की विशेषता - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>अपने SQL का SELECT अनुभाग <em>होना</em> केवल <code>DISTINCT(devices.id)</code>।<br/> <br/>अपने SQL का WHERE अनुभाग <em>होना</em> होना <code>WHERE @filter</code> इसलिए ओपन-ऑडिट उचित संगठन को अपनी क्वेरी को प्रतिबंधित करने के लिए जानता है। SQL इस स्थिति में शामिल नहीं होने के परिणामस्वरूप समूह असफल हो जाएगा।<br/> <br/>SQL के लिए एक उदाहरण के लिए सभी उपकरणों का चयन करने के लिए डेबियन OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>लाइसेंस समापन बिंदु आपको अपने उपकरणों पर पाए गए लाइसेंस की संख्या को ट्रैक करने की अनुमति देता है।<br/> <br/>अपने लाइसेंस को ट्रैक करने के लिए एक प्रविष्टि बनाने के लिए <em>होना</em> एक नाम, एक संगठन, लाइसेंस प्राप्त की संख्या और सॉफ्टवेयर का नाम प्रदान करने के लिए। मैदान पर <code>match_string</code> आपको उस सॉफ़्टवेयर का नाम प्रदान करना चाहिए जिसे आप ट्रैक करना चाहते हैं, आप मैच_स्ट्रिंग में एक वाइल्डकार्ड के रूप में प्रतिशत संकेत (%) का उपयोग कर सकते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>नेटवर्क को प्रारूप 192.168.1.0/24 में होना चाहिए।<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>प्राथमिक और वैकल्पिक माध्यमिक आइटम पूरी तरह से योग्य होना चाहिए - यानी, उपकरण। प्रकार या सॉफ्टवेयर। नाम<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>यदि आप लिनक्स सर्वर पर ओपन-ऑडिट चला रहे हैं तो कुछ भी करने की आवश्यकता नहीं है।<br/><br/>विंडोज क्लाइंट सिर्फ ठीक हैं और इसके लिए कोई विशेष कार्य की आवश्यकता नहीं है। इस सुविधा को सक्षम करने के लिए ऑडिट स्क्रिप्ट को लक्ष्य विंडोज सिस्टम पर स्थानीय रूप से चलाया जाना चाहिए। यह दूरस्थ रूप से नहीं चलाया जा सकता क्योंकि हम WMI कॉल के साथ करते हैं जब एक Windows मशीन पर ऑडिट स्क्रिप्ट चलाते हैं, जबकि एक दूसरे Windows मशीन को लक्षित करते हैं। ऐसा करने के लिए हमें लक्ष्य विंडोज मशीन में ऑडिट स्क्रिप्ट की प्रतिलिपि बनाने की आवश्यकता है और फिर इसे चलाने की आवश्यकता है। दुर्भाग्य से सेवा खाता है कि अपाचे के तहत चल रहा है स्थानीय सिस्टम खाता है। इस खाते में रिमोट (नेटवर्क आधारित) संसाधनों तक कोई पहुंच नहीं है। इस मुद्दे के आसपास काम करने के लिए सेवा को दूसरे खाते में चलाया जाना चाहिए। केवल स्थानीय प्रशासक खाते का उपयोग करना आसान है, लेकिन जब तक आपके पास आवश्यक विशेषाधिकार है, तब तक आप किसी भी खाते की कोशिश कर सकते हैं। स्थानीय सिस्टम खाते में स्थानीय प्रशासक खाते के रूप में ज्यादा स्थानीय एक्सेस है।<br/><br/>सक्षम करने पर हमारा पेज देखें <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">विंडोज के तहत ओपन-ऑडिट अपाचे सर्विस चलाना</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>ये उपकरण हैं जो रैक के भीतर रहते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>यह समापन बिंदु आपको अपने क्लाउड अवसंरचना विवरण जोड़ने में सक्षम बनाता है। इसके बाद ओपन-ऑडिट अपने मूल एपीआई का उपयोग करके अपने क्लाउड तक पहुंच जाएगा और ओपन-ऑडिट में किसी अन्य उपकरण की तरह अपने सर्वर को वापस कर देगा।<br/> <br/><em>नोट</em> - इस सुविधा का उपयोग करने के लिए, हम <em>होना</em> विन्यास आइटम match_mac (AWS के लिए) और match_hostname (Azure के लिए) सक्षम करें। यह स्वचालित रूप से पहली बार क्लाउड खोज को निष्पादित किया जाएगा।<br/> <br/>आपके क्लाउड के लिए क्रेडेंशियल (Credentials)<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">नीला</a> या <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">एडब्ल्यूएस</a>) आवश्यकता होती है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVE फीड पर आधारित Vulnerability रिपोर्टिंग।<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>हम शुरू में डिफ़ॉल्ट विकल्प के साथ स्क्रिप्ट की डिफ़ॉल्ट सूची निर्धारित करते हैं। इन डिफ़ॉल्ट लिपियों को हटाया नहीं जा सकता है। आप आवश्यकतानुसार उपयोग के लिए अतिरिक्त स्क्रिप्ट बना सकते हैं। आपकी स्क्रिप्ट मौजूदा लिपियों में से एक पर आधारित होगी और इसमें कस्टम विकल्प लागू होंगे। तब लिपियों को सूची पृष्ठ से मेनू पर डाउनलोड किया जा सकता है -> डिस्कवर -> ऑडिट स्क्रिप्ट -> सूची ऑडिट स्क्रिप्ट<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>मेलिंग के लिए रेगेक्स का उपयोग करते समय, एक सहायक पृष्ठ पर पाया जा सकता है <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP वेबसाइट</a>। Perl Regex के कुछ मतभेद पाए जा सकते हैं <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">यहाँ</a>।</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>विजेट को आसानी से दिखाने के लिए बनाया जा सकता है जो आपके डैशबोर्ड पर आपके पर्यावरण के लिए विशिष्ट है।<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>ओपन-ऑडिट के साथ पेशेवर और एंटरप्राइज आप जब आप चाहते हैं, तो चलाने के लिए स्वचालित और शेड्यूल खोज, रिपोर्ट जनरेशन, या बेसलाइन चेक कर सकते हैं। रात को चलाने के लिए अपनी खोजों को शेड्यूल करें और प्रत्येक सुबह कुंजी कर्मियों को उत्पन्न करने और ईमेल करने की रिपोर्ट करें। जटिल या सरल अनुसूची, डिवाइस खोज और रिपोर्ट पीढ़ी सिर्फ एक क्लिक दूर है।<br/> <br/>प्रत्येक सबनेट या एडी नियंत्रक के लिए व्यक्तिगत खोज कार्यक्रम बनाएं, लक्षित दर्शकों के लिए बनाई जाने वाली रिपोर्टों में जोड़ें। कंपनी की जरूरतों का समर्थन करने के लिए सरल या जटिल शेड्यूल विकसित करना, बैकअप से बचने या संचालन के लिए प्रभाव से बचने के लिए, या बस लोड और स्पीड-अप ऑडिट पूरा करने के लिए।<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>आप किसी भी मौजूदा ऑडिट स्क्रिप्ट के लिए सभी विकल्पों के साथ एक स्क्रिप्ट बना सकते हैं - सिर्फ विंडोज नहीं। AIX, ESX, Linux, OSX और Windows सभी कवर किए गए हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>आप मैच_स्ट्रिंग में एक वाइल्डकार्ड के रूप में प्रतिशत % संकेत का उपयोग कर सकते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>आपके रैक वास्तव में जहां आपके डिवाइस स्थित हैं, को परिष्कृत करने में मदद करते हैं।<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>नोट</strong> - आप इस URL को स्थानीय ओपन-ऑडिट सर्वर से एक्सेस कर रहे हैं। किसी अन्य मशीन पर चलने पर डाउनलोड की गई स्क्रिप्ट को जमा करने में सक्षम नहीं होगा। यदि आपको अन्य मशीनों का ऑडिट करना है, तो कृपया स्क्रिप्ट को रिमोट मशीन से डाउनलोड करें, न कि ओपन-ऑडिट सर्वर पर ब्राउज़र का उपयोग करें।';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'एक CVE आइटम जिसमें प्रभावित मदों को निर्धारित करने के लिए फ़िल्टर नहीं होता है।';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google मानचित्र एपीआई इस कार्य के लिए कुंजी आवश्यक है।';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'डिवाइस ID की एक JSON सरणी जिसमें इस बेंचमार्क को निष्पादित किया जाएगा।';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVE से लिया गया सॉफ़्टवेयर नाम से मेल खाने वाले ऑब्जेक्ट्स की एक JSON सरणी, ओपन-ऑडिट द्वारा प्राप्त सॉफ्टवेयर नाम से समृद्ध।';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'इस vulnerability के लिए परीक्षण करने के लिए मूल्यों की एक JSON सरणी।';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'एक JSON दस्तावेज़ जिसमें संगठन को इस उपयोगकर्ता को सौंपा गया है। आईडी से लिया <code>orgs.id</code>। यदि किसी उपयोगकर्ता को संगठन तक पहुंच है, तो उनके पास उस संगठन के वंशजों तक पहुंच है।';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'एक JSON दस्तावेज़ जिसमें आवश्यक गुण होते हैं <code>scripts.type</code>।';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'एक JSON दस्तावेज़ जिसमें चयनित खोज_scan_options को ओवरराइड करने की आवश्यकता होती है।';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'एक JSON दस्तावेज़ जिसमें डिफ़ॉल्ट डिवाइस मैच विकल्पों को ओवरराइड करने की आवश्यकता होती है।';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'एक JSON दस्तावेज़ जिसमें इस उपयोगकर्ता को सौंपी गई भूमिकाएं शामिल हैं। भूमिका नाम से लिया <code>roles.name</code>।';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'अगर मैच होता है तो एक JSON ऑब्जेक्ट में विशेषताओं की एक सरणी होती है।';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'एक JSON ऑब्जेक्ट जिसमें मिलान करने के लिए विशेषताओं की एक सरणी होती है।';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'एक JSON वस्तु जिसमें संग्रह विशिष्ट विकल्प होते हैं।';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'एक JSON ऑब्जेक्ट एक क्लाउड खोज के माध्यम से आबादी वाला है।';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'एक JSON प्रतिनिधित्व जिसमें कतार आइटम का विवरण निष्पादित किया जाना है।';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'इस एकीकरण के लिए क्षेत्रों का एक JSON प्रतिनिधित्व।';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'व्यक्तिगत परीक्षणों का JSON प्रतिनिधित्व और सभी उपकरणों पर उनके परिणाम इस आधार रेखा के खिलाफ चल रहे हैं।';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'परीक्षण का एक JSON प्रतिनिधित्व जो इस नीति को बनाते हैं।';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'एक LAN एक रूटर का उपयोग करके WAN से जोड़ा जा सकता है।';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'एक महानगरीय क्षेत्र नेटवर्क (MAN) एक बड़ा कंप्यूटर नेटवर्क है जो आमतौर पर एक शहर या एक बड़े परिसर में फैलता है।';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A बीज खोज किसी भी अन्य उपकरणों के आईपी को पुनर्प्राप्त करने के लिए एक प्रारंभिक आईपी का उपयोग करता है, जिसके बारे में पता चलता है, उन आईपी को सूची में जोड़ता है और उन स्कैन करता है - फिर किसी भी आईपी के लिए पूछता है जो अतिरिक्त उपकरण जानते हैं। कुल्ला और दोहराना। यह जानने के लिए पर्याप्त बुद्धिमान है कि यह पहले से ही अपने निष्पादन में एक दिए गए आईपी को स्कैन कर चुका है और पहले से ही स्कैन किए गए किसी भी (या यहां तक कि स्कैन किए जाने वाले सूची में भी).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'एक सबनेट खोज प्रदान किए गए आईपी को स्कैन करेगा।';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'एक यूआरएल एजेंट को प्रदान करता है जो तब फ़ाइल को डाउनलोड करेगा और इसे स्थानीय डिस्क पर स्टोर करेगा।';

$GLOBALS["lang"]['A URL to a file to download.'] = 'फ़ाइल में यूआरएल डाउनलोड करने के लिए।';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'एक बैकबोन नेटवर्क एक कंप्यूटर नेटवर्क अवसंरचना का हिस्सा है जो विभिन्न लैनों या उप-नेटवर्क्स के बीच जानकारी के आदान-प्रदान के लिए एक मार्ग प्रदान करता है। एक बैकबोन एक ही इमारत के भीतर, विभिन्न इमारतों में या एक विस्तृत क्षेत्र में विविध नेटवर्कों को जोड़ सकता है।<br/><br/>उदाहरण के लिए, एक बड़ी कंपनी दुनिया भर में स्थित विभागों को जोड़ने के लिए बैकबोन नेटवर्क को लागू कर सकती है। डिपार्टमेंटल नेटवर्क के साथ संबंध रखने वाले उपकरण नेटवर्क बैकबोन का गठन करते हैं। नेटवर्क बैकबोन डिजाइन करते समय, नेटवर्क प्रदर्शन और नेटवर्क भीड़ को ध्यान में रखते हुए महत्वपूर्ण कारक होते हैं। आम तौर पर, बैकबोन नेटवर्क क्षमता उस से जुड़े व्यक्तिगत नेटवर्क से अधिक है।<br/><br/>एक बैकबोन नेटवर्क का एक अन्य उदाहरण इंटरनेट बैकबोन है, जो व्यापक क्षेत्र नेटवर्क (WANs) और कोर राउटर का सेट है जो इंटरनेट से जुड़े सभी नेटवर्कों को एक साथ जोड़ते हैं।';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'एक गणना क्षेत्र जो सॉफ्टवेयर के इस टुकड़े को समय की संख्या को प्रदर्शित करता है, चयनित संगठन में कंप्यूटर पर पाया गया था (और इसके वंशज यदि कॉन्फ़िगर किया गया हो)।';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'एक परिसर क्षेत्र नेटवर्क (सीएएन) एक सीमित भौगोलिक क्षेत्र के भीतर लैनों के एक अंतर संयोजन से बना है। नेटवर्किंग उपकरण (स्विच, राउटर) और ट्रांसमिशन मीडिया (ऑप्टिकल फाइबर, तांबा संयंत्र, Cat5 केबलिंग, आदि) लगभग पूरी तरह से परिसर किरायेदार / मालिक (एक उद्यम, विश्वविद्यालय, सरकार, आदि) के स्वामित्व में हैं।<br/><br/>उदाहरण के लिए, एक विश्वविद्यालय परिसर नेटवर्क शैक्षणिक कॉलेजों या विभागों, पुस्तकालय और छात्र निवास हॉल को जोड़ने के लिए विभिन्न प्रकार के परिसर भवनों को जोड़ने की संभावना है।';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'एक बंद बंदरगाह सुलभ है (यह एनमैप जांच पैकेट को प्राप्त करता है और जवाब देता है), लेकिन इस पर कोई आवेदन नहीं सुन रहा है। वे यह दिखाने में सहायक हो सकते हैं कि एक मेजबान आईपी पते (होस्ट खोज, या पिंग स्कैनिंग) पर है, और ओएस डिटेक्शन के हिस्से के रूप में। चूंकि बंद बंदरगाह पहुंच योग्य हैं, इसलिए बाद में कुछ खुले होने के मामले में यह स्कैनिंग लायक हो सकता है। प्रशासक ऐसे बंदरगाहों को फायरवॉल के साथ अवरुद्ध करने पर विचार कर सकते हैं। फिर वे फ़िल्टर्ड स्टेट में दिखाई देंगे, आगे चर्चा की।';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'एक कलेक्टर या तो कलेक्टर या स्टैंड-अलोन मोड में है।';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'लागू CVE की एक अल्पसंख्यक अलग सूची।';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'मानों की एक अलग सूची, जिनमें से एक चुना जा सकता है।';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'चलाने के लिए एक आदेश। जब एजेंट विंडोज आधारित होता है, तो यह कमांड पावरशेल एजेंट के भीतर से चला जाता है।';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'एक डैशबोर्ड तीन कॉलम और दो पंक्तियों से बना है जिसे हम कहते हैं <i>विजेट</i>। एक विजेट सारांश के समान है, केवल हम सारांश अवधारणा को थोड़ा आगे लेते हैं। विजेट को एक साधारण फैशन में बनाया जाता है, जिसमें कुछ ड्रॉप डाउन बॉक्स का उपयोग किया जाता है - या आप पूरी अनुकूलनशीलता के लिए अपने स्वयं के SQL का उपयोग करने का विकल्प चुन सकते हैं।';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'एक फ़िल्टर पोर्ट को खुला माना जाता है (और डिवाइस का पता लगाने को ट्रिगर करेगा)।';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'एक वैश्विक क्षेत्र नेटवर्क (GAN) एक नेटवर्क है जिसका उपयोग मोबाइल को वायरलेस लैनों, उपग्रह कवरेज क्षेत्रों आदि की एक मनमाने ढंग से समर्थन देने के लिए किया जाता है। मोबाइल संचार में प्रमुख चुनौती उपयोगकर्ता संचार को एक स्थानीय कवरेज क्षेत्र से अगले तक सौंप देती है। आईईईई परियोजना 802 में, इसमें स्थलीय वायरलेस लैन का उत्तराधिकार शामिल है।';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'एक घर क्षेत्र नेटवर्क (हान) एक आवासीय लैन है जिसका उपयोग आमतौर पर घर में तैनात डिजिटल उपकरणों के बीच संचार के लिए किया जाता है, आमतौर पर प्रिंटर और मोबाइल कंप्यूटिंग उपकरणों जैसे व्यक्तिगत कंप्यूटर और सहायक उपकरण की एक छोटी संख्या। एक महत्वपूर्ण कार्य इंटरनेट एक्सेस का आदान-प्रदान है, अक्सर एक केबल टीवी या डिजिटल ग्राहक लाइन (DSL) प्रदाता के माध्यम से एक ब्रॉडबैंड सेवा है।';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'स्कैन करने के लिए कस्टम टीसीपी बंदरगाहों की एक सूची (22 एसएसएच है, 135 डब्ल्यूएमआई है, 62078 आईफोन सिंक है)।';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'स्कैन करने के लिए कस्टम UDP बंदरगाहों की एक सूची (161 SNMP है)।';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'एक स्थानीय क्षेत्र नेटवर्क (LAN) एक नेटवर्क है जो एक सीमित भौगोलिक क्षेत्र जैसे कि घर, स्कूल, कार्यालय भवन, या इमारतों के निकट स्थित समूह में कंप्यूटर और उपकरणों को जोड़ता है। नेटवर्क पर प्रत्येक कंप्यूटर या डिवाइस एक नोड है। वायर्ड लैन ईथरनेट प्रौद्योगिकी पर सबसे अधिक संभावना है। ITU-T G.hn जैसे नए मानक मौजूदा तारों का उपयोग करके एक वायर्ड लैन बनाने का एक तरीका भी प्रदान करते हैं, जैसे कि समाक्षीय केबल, टेलीफोन लाइन और पावर लाइन।<br/><br/>एक विस्तृत क्षेत्र नेटवर्क (WAN) के विपरीत, लैन की निश्चित विशेषताओं में उच्च डेटा अंतरण दर, सीमित भौगोलिक सीमा और कनेक्टिविटी प्रदान करने के लिए लीज्ड लाइनों पर निर्भरता की कमी शामिल है। वर्तमान ईथरनेट या अन्य IEEE 802.3LAN तकनीकें 2010 में IEEE द्वारा मानकीकृत 100 Gbit/s तक डेटा ट्रांसफर दरों पर काम करती हैं। वर्तमान में, 400 Gbit/s ईथरनेट विकसित किया जा रहा है।';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'एक स्थान एक भौतिक पता है जिसमें इसके साथ जुड़े उपकरण हो सकते हैं। आप इसे निर्देशांक कर सकते हैं और यदि निर्दिष्ट उपकरण हैं, तो स्थान मानचित्र पर दिखाई देगा जब आपके पास ओपन-ऑडिट एंटरप्राइज लाइसेंस हो।';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'एक स्थान का नाम आपको भविष्य में इन उपकरणों को खोजने में मदद करेगा।';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'कम संख्या का मतलब है कि इसे अन्य नियमों से पहले लागू किया जाएगा।';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'कम संख्या का मतलब है कि इसे अन्य नियमों से पहले लागू किया जाएगा। डिफ़ॉल्ट वजन 100 है।';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'एक नए उपयोगकर्ता ने ओपन-ऑडआईटी में लॉग इन किया और एलडीएपी द्वारा अधिकृत और अधिकृत किया गया। तब उपयोगकर्ता को ओपन-ऑडआईटी में बनाया गया था और लॉग इन किया गया था। सफलता।';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'एक पैकेज स्थापित softare का एक टुकड़ा है। एक पैकेज में एक प्रकार का वायरस, अनुमोदित, बैकअप, प्रतिबंधित, क्लाउड, फ़ायरवॉल, अनदेखा, लाइसेंस या अन्य होता है।';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'एक पासवर्ड (एक हैश के रूप में स्टोर किया गया) जो एप्लिकेशन प्रमाणीकरण का उपयोग करते समय लोगो को सक्षम बनाता है।';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'एक व्यक्ति को ओपन-ऑडिट एप्लिकेशन में खाता है। उनके उपयोगकर्ता खाते में संबद्ध भूमिकाओं और संगठनों की सूची है। उपयोगकर्ता की भूमिका यह निर्धारित करती है कि वे क्या कर सकते हैं। संगठन एक उपयोगकर्ता ने व्हिच आइटम को निर्धारित किया है जो वे कार्य कर सकते हैं।<br/><br/>जब एक उपयोगकर्ता एक संग्रह आइटम पर एक ऑपरेशन (बनाने, पढ़ने, अद्यतन करने, हटाने) करने का अनुरोध करता है, तो भूमिकाओं को यह देखने के लिए परामर्श दिया जाता है कि क्या उन्हें उस कार्रवाई को करने की अनुमति है, तो ऑर्ग्स को यह निर्धारित करने के लिए सलाह दी जाती है कि क्या संग्रह आइटम एक ऑर्ग से संबंधित है, उपयोगकर्ता को कार्य करने की अनुमति है।';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'एक व्यक्तिगत क्षेत्र नेटवर्क (पीएन) एक कंप्यूटर नेटवर्क है जिसका उपयोग कंप्यूटर के बीच संचार के लिए किया जाता है और एक व्यक्ति के करीब विभिन्न सूचना तकनीकी उपकरणों के लिए किया जाता है। एक पैन में उपयोग किए जाने वाले उपकरणों के कुछ उदाहरण निजी कंप्यूटर, प्रिंटर, फैक्स मशीन, टेलीफोन, पीडीए, स्कैनर और यहां तक कि वीडियो गेम कंसोल भी हैं। पैन में वायर्ड और वायरलेस डिवाइस शामिल हो सकते हैं। पैन की पहुंच आम तौर पर 10 मीटर तक बढ़ाती है। एक वायर्ड पैन आमतौर पर यूएसबी और फायरवायर कनेक्शन के साथ बनाया जाता है जबकि ब्लूटूथ और इन्फ्रारेड संचार जैसी तकनीकें आम तौर पर एक वायरलेस पैन बनाती हैं।';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'एक क्वेरी अनिवार्य रूप से एक SQL कथन है। यह बयान डेटाबेस के खिलाफ सीमा के स्वचालित जोड़ के साथ चलाया जाता है, केवल उन अनुरोधित वस्तुओं पर लागू करने के लिए फ़िल्टर किया जाता है और केवल उन वस्तुओं को देखने के लिए उपयोगकर्ता को अनुमति मिलती है। एक क्वेरी मेनू का उपयोग करके बनाया जा सकता है -> व्यवस्था -> Queries प्रश्नों में एक org_id होता है और इसलिए उपयुक्त उपयोगकर्ताओं तक सीमित रहता है। उपयोगकर्ता को एक क्वेरी बनाने, अद्यतन करने या हटाने के लिए org_admin या रिपोर्टर भूमिका (s) होना चाहिए। सभी उपयोगकर्ता एक क्वेरी को निष्पादित कर सकते हैं। एक क्वेरी में मेनू आइटम के साथ-साथ एक मेनू श्रेणी विशेषता के लिए उपयोग की जाने वाली एक नाम विशेषता है। यह ओपन-ऑडिट जीयूआई को बताता है जो क्वेरी को जगह देने के लिए सबमेनू करता है। मेनू डिस्प्ले भी है जिसे सेट किया जाना चाहिए <i>Y</i> GUI (GUI) में क्वेरी को सक्षम करना<i>n</i> क्वेरी को सब पर दिखाई देने से रोकने के लिए). प्रश्न अभी भी चला जाएगा अगर उसका उपयोग करना <code>id</code>, मेनू प्रदर्शित मूल्य की परवाह किए बिना।';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'एक रैक उन उपकरणों का संग्रह है जो रैक के भीतर एक स्थिति और ऊंचाई सौंपा गया है। एक उपकरण वैकल्पिक रूप से इसके साथ जुड़े एक तस्वीर हो सकता है। एक रैक को एक पंक्ति में रखा जाता है। हमने रैक की स्थिति के लिए एक बहुत ही दानेदार प्रणाली बनाई है, जो इस प्रकार है। शीर्ष स्तर पर ( हमेशा के रूप में) संगठन (संगठन) है। एक संगठन में कई स्थान हो सकते हैं (जैसा कि हमेशा मामला रहा है)। रैक सुविधा के अलावा, एक स्थान में अब एक या अधिक इमारतें हो सकती हैं। एक इमारत में एक या अधिक मंजिलें हो सकती हैं। एक मंजिल में एक या अधिक कमरे हो सकते हैं। एक कमरे में एक या अधिक पंक्तियां हो सकती हैं। यह बहुत सारे काम की तरह लगता है, लेकिन आपके लिए डिफ़ॉल्ट बनाया गया है। एक नया स्थान बनाएं और उप-घटकों को स्वचालित रूप से आपके लिए बनाया जाएगा। यदि आपको अधिक आइटम (बिल्डिंग, कमरे आदि) की आवश्यकता है तो आप उन्हें अपनी तरह जोड़ सकते हैं। एक रैक भी एक का हिस्सा हो सकता है <i>फली</i> रैक की। पोड विशेषता इमारतों, फर्श आदि के अनुसार एक सख्त पदानुक्रमिक विरासत मॉडल के बजाय एक टैग के रूप में काम करती है।<br/><br/>रैक ओपन-ऑडिट एंटरप्राइज लाइसेंस ग्राहकों के लिए उपलब्ध एक सुविधा है।';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'एक रूटिंग डोमेन या एड्रेस स्पेस जहां आईपी पते और मैक पते अद्वितीय हैं।';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'लिनक्स के लिए एक नमूना क्रोन फ़ाइल नीचे है। इसे रखा जाना चाहिए';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'एक सुरक्षा क्षेत्र नेटवर्क डोमेन के भीतर एक प्रशासनिक डोमेन या नीति डोमेन है।';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'एक बीज खोज एक अन्य प्रकार की खोज है, जहां आप एक एकल के आईपी प्रदान करते हैं <i>बीज</i> उपकरण। इस उपकरण का लेखापरीक्षित किया जाता है और इसके बारे में जानने वाले किसी भी आईपी को लेखापरीक्षित करने की सूची में जोड़ा जाता है। फिर, उन उपकरणों का लेखापरीक्षण किया जाता है और उनमें से किसी आईपी को भी लेखापरीक्षण के लिए आईपी की सूची में जोड़ा जाता है। यह प्रक्रिया तब उपयोगकर्ता द्वारा कॉन्फ़िगर किए गए मापदंडों के भीतर जारी रहती है।';

$GLOBALS["lang"]['A short description of the log entry.'] = 'लॉग प्रविष्टि का संक्षिप्त विवरण।';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'एक भंडारण क्षेत्र नेटवर्क (SAN) एक समर्पित नेटवर्क है जो समेकित, ब्लॉक लेवल डेटा स्टोरेज तक पहुंच प्रदान करता है। SAN मुख्य रूप से भंडारण उपकरण बनाने के लिए उपयोग किया जाता है, जैसे कि डिस्क सरणियों, टेप पुस्तकालयों और ऑप्टिकल जूकबॉक्स, सर्वरों के लिए सुलभ ताकि उपकरण ऑपरेटिंग सिस्टम के स्थानीय रूप से जुड़े उपकरणों की तरह दिखाई दे सकें। एक SAN आम तौर पर भंडारण उपकरणों का अपना नेटवर्क है जो आम तौर पर अन्य उपकरणों द्वारा स्थानीय क्षेत्र नेटवर्क के माध्यम से सुलभ नहीं होते हैं। SANs की लागत और जटिलता 2000 के दशक के आरंभ में हुई थी, जिससे उद्यम और छोटे से मध्यम आकार के व्यावसायिक वातावरण में व्यापक गोद लेने की अनुमति मिलती है।';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'एक स्ट्रिंग जो मैच करता है <code>software.name</code> विशेषता। आप एक या अधिक अक्षरों से मिलान करने के लिए प्रतिशत (%) के मानक SQL वाइल्डकार्ड का उपयोग कर सकते हैं।';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'संवेदनशील जानकारी के प्रबंधन के लिए एक संरचित प्रणाली';

$GLOBALS["lang"]['A timestamp.'] = 'टाइमस्टैम्प';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'एक उपयोगकर्ता के पास एक प्राथमिक संगठन है और साथ ही उन संगठनों की सूची भी है जिनका वे उपयोग कर सकते हैं। एक उपयोगकर्ता इसे असाइन किए गए भूमिकाओं की एक सूची के साथ जोड़ती है जो यह परिभाषित करती है कि वे उन संगठनों को सौंपे गए आइटमों पर क्या कार्रवाई कर सकते हैं जिन्हें उनके पास एक्सेस है। उपयोगकर्ताओं का संयोजन <i>अंग</i> और <i>भूमिका</i> वे क्या कर सकते हैं और ओपन-ऑडिट के भीतर नहीं कर सकते हैं।';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'एक उपयोगकर्ता के पास संबद्ध संगठनों की सूची होगी। प्रत्येक व्यक्ति ने उन्हें अपनी भूमिका के अनुसार उस ओर के भीतर वस्तुओं पर कार्य करने की अनुमति दी है।<br/><br/>सभी orgs डिफ़ॉल्ट org को छोड़कर एक माता-पिता है। एक संगठन चार्ट के बारे में सोचें। यदि किसी उपयोगकर्ता को संगठन पर अनुमति है, तो उनके पास उस संगठन के किसी भी वंशज पर भी अनुमति है।<br/><br/>उपयोगकर्ताओं को कुछ संग्रहों के लिए माता-पिता के अंग से आइटम देखने के लिए एक बच्चे के ऑर्ग पर भी अनुमति दी जाती है। वे हैं: डैशबोर्ड, searchy_scan_options, फ़ील्ड, फ़ाइलें, समूह, प्रश्नों, रिपोर्ट, भूमिका, नियम, स्क्रिप्ट, सारांश, विजेट.<br/><br/>मत भूलो कि आपके पास क्या है, उपयोगकर्ता देख सकते हैं और उद्यम में रोल्स का उपयोग कर सकते हैं।';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'एक उपयोगकर्ता के पास संबद्ध संगठनों की सूची होगी। प्रत्येक व्यक्ति ने उन्हें अपनी भूमिका के अनुसार उस ओर के भीतर वस्तुओं पर कार्य करने की अनुमति दी है।<br/><br/>सभी orgs डिफ़ॉल्ट org को छोड़कर एक माता-पिता है। एक संगठन चार्ट के बारे में सोचें। यदि किसी उपयोगकर्ता को संगठन पर अनुमति है, तो उनके पास उस संगठन के किसी भी वंशज पर भी अनुमति है।<br/><br/>हमने एक उपयोगकर्ता को कुछ संग्रहों के लिए माता-पिता ऑर्ग से आइटम देखने के लिए अनुमति देने की भी अनुमति दी है। वे हैं: डैशबोर्ड, searchy_scan_options, फ़ील्ड, फ़ाइलें, समूह, प्रश्नों, भूमिकाएं, नियम, स्क्रिप्ट, सारांश, विजेट.<br/><br/>क्या आप उपयोगकर्ताओं को देख सकते हैं और क्या उपयोग कर सकते हैं पर आपके पास दानेदार नियंत्रण नहीं है';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'एक वर्चुअल प्राइवेट नेटवर्क (वीपीएन) एक ओवरले नेटवर्क है जिसमें नोड्स के बीच कुछ लिंक भौतिक तारों के बजाय कुछ बड़े नेटवर्क (जैसे इंटरनेट) में ओपन कनेक्शन या वर्चुअल सर्किट द्वारा किए जाते हैं। वर्चुअल नेटवर्क के डेटा लिंक परत प्रोटोकॉल को बड़े नेटवर्क के माध्यम से सुरंगित किया जाता है जब यह मामला होता है। एक सामान्य अनुप्रयोग सार्वजनिक इंटरनेट के माध्यम से सुरक्षित संचार है, लेकिन एक वीपीएन को स्पष्ट सुरक्षा सुविधाओं की आवश्यकता नहीं है, जैसे प्रमाणीकरण या सामग्री एन्क्रिप्शन। उदाहरण के लिए, वीपीएन का उपयोग विभिन्न उपयोगकर्ता समुदायों के यातायात को मजबूत सुरक्षा सुविधाओं के साथ अंतर्निहित नेटवर्क पर अलग करने के लिए किया जा सकता है।<br/><br/>वीपीएन का सबसे अच्छा प्रदर्शन हो सकता है, या वीपीएन ग्राहक और वीपीएन सेवा प्रदाता के बीच एक परिभाषित सेवा स्तर समझौता (SLA) हो सकता है। आम तौर पर, एक वीपीएन में पॉइंट-टू-पॉइंट की तुलना में अधिक जटिल होता है।';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'उपलब्धता को प्रभावित करने वाली एक भेद्यता हमलावरों को सेवाओं, दुर्घटना प्रणालियों को बाधित करने या इनकार-ऑफ-सर्विस (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'गोपनीयता को प्रभावित करने वाली एक भेद्यता हमलावरों को संवेदनशील डेटा पढ़ने की अनुमति दे सकती है, जैसे कि व्यक्तिगत जानकारी, क्रेडेंशियल, या मालिकाना व्यवसाय डेटा (कोई नहीं, कम, उच्च)।';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'एक भेद्यता प्रभावित अखंडता हमलावरों को डेटा को संशोधित करने, दुर्भावनापूर्ण कोड इंजेक्ट करने या सिस्टम कॉन्फ़िगरेशन (कोई नहीं, कम, उच्च) को बदलने की अनुमति दे सकती है।';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'एक vulnerability संपादित किया जा सकता है और अधिक विशिष्ट पैकेज नाम बशर्ते कि संवर्धन डेटा अपर्याप्त है या उत्पन्न SQL काफी सही नहीं है।';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-Audit में एक vulnerability आइटम को एक दिए गए CVE रिपोर्ट के लिए अपने संभावित जोखिम को निर्धारित करने के लिए अनिवार्य रूप से आपके डेटाबेस के खिलाफ एक क्वेरी के रूप में सोचा जा सकता है। A vulnerability CVE रिपोर्ट से बना है, साथ ही फर्स्टवेव से संवर्धन डेटा के साथ। इन दो वस्तुओं को एक उपयुक्त क्वेरी बनाने के लिए जोड़ा जाता है जो स्वचालित रूप से फर्स्टवेव से डाउनलोड किया जाता है।';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'एक विस्तृत क्षेत्र नेटवर्क (WAN) एक कंप्यूटर नेटवर्क है जो एक बड़े भौगोलिक क्षेत्र जैसे कि शहर, देश या अंतरमहाद्वीप दूरी को कवर करता है। WAN एक संचार चैनल का उपयोग करता है जो कई प्रकार के मीडिया जैसे टेलीफोन लाइन, केबल और एयर वेव्स को जोड़ती है। WAN अक्सर आम वाहक जैसे टेलीफोन कंपनियों द्वारा प्रदान की गई ट्रांसमिशन सुविधाओं का उपयोग करता है। WAN प्रौद्योगिकी आम तौर पर OSI संदर्भ मॉडल के निचले तीन परतों में कार्य करती है: भौतिक परत, डेटा लिंक परत, और नेटवर्क परत।';

$GLOBALS["lang"]['AD Group'] = 'समूह';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'एडीएसएल, एचएफसी, आईएसडीएन, आदि';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'सभी आईपी';

$GLOBALS["lang"]['API / Web Access'] = 'एपीआई / वेब एक्सेस';

$GLOBALS["lang"]['API Documentation'] = 'एपीआई प्रलेखन';

$GLOBALS["lang"]['API Key required.'] = 'एपीआई कुंजी की आवश्यकता है।';

$GLOBALS["lang"]['API Result'] = 'एपीआई परिणाम';

$GLOBALS["lang"]['About'] = 'के बारे में';

$GLOBALS["lang"]['Above are the only required items.'] = 'ऊपर केवल आवश्यक आइटम हैं।';

$GLOBALS["lang"]['Accept'] = 'स्वीकार करना';

$GLOBALS["lang"]['Access Model'] = 'एक्सेस मॉडल';

$GLOBALS["lang"]['access_point'] = 'एक्सेस प्वाइंट';

$GLOBALS["lang"]['Access Point'] = 'एक्सेस प्वाइंट';

$GLOBALS["lang"]['access_token'] = 'पहुँच टोकन';

$GLOBALS["lang"]['Access Token'] = 'पहुँच टोकन';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'व्यवस्थापक$ शेयर तक पहुंच और आरपीसी SMB2 प्रोटोकॉल का उपयोग करता है।';

$GLOBALS["lang"]['ack_by'] = 'द्वारा Ack';

$GLOBALS["lang"]['Ack By'] = 'द्वारा Ack';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'कार्रवाई';

$GLOBALS["lang"]['Action'] = 'कार्रवाई';

$GLOBALS["lang"]['action_audit'] = 'एक्शन ऑडिट';

$GLOBALS["lang"]['Action Audit'] = 'एक्शन ऑडिट';

$GLOBALS["lang"]['action_command'] = 'एक्शन कमांड';

$GLOBALS["lang"]['Action Command'] = 'एक्शन कमांड';

$GLOBALS["lang"]['action_date'] = 'कार्य तारीख';

$GLOBALS["lang"]['Action Date'] = 'कार्य तारीख';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'कार्य उपकरण स्थान पर सौंपा गया';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'कार्य उपकरण स्थान पर सौंपा गया';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'कार्य उपकरण संगठन को सौंपा गया';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'कार्य उपकरण संगठन को सौंपा गया';

$GLOBALS["lang"]['action_download'] = 'कार्रवाई डाउनलोड';

$GLOBALS["lang"]['Action Download'] = 'कार्रवाई डाउनलोड';

$GLOBALS["lang"]['action_uninstall'] = 'एक्शन अनइंस्टॉल';

$GLOBALS["lang"]['Action Uninstall'] = 'एक्शन अनइंस्टॉल';

$GLOBALS["lang"]['actioned'] = 'कार्रवाई';

$GLOBALS["lang"]['Actioned'] = 'कार्रवाई';

$GLOBALS["lang"]['actioned_by'] = 'कार्रवाई करके';

$GLOBALS["lang"]['Actioned By'] = 'कार्रवाई करके';

$GLOBALS["lang"]['actioned_date'] = 'कार्य तारीख';

$GLOBALS["lang"]['Actioned Date'] = 'कार्य तारीख';

$GLOBALS["lang"]['actions'] = 'कार्रवाई';

$GLOBALS["lang"]['Actions'] = 'कार्रवाई';

$GLOBALS["lang"]['Activate'] = 'सक्रिय';

$GLOBALS["lang"]['Activate Free License'] = 'मुफ्त लाइसेंस सक्रिय करें';

$GLOBALS["lang"]['Activate Key'] = 'कुंजी सक्रिय करें';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'मुफ्त एंटरप्राइज़ लाइसेंस को सक्रिय करें';

$GLOBALS["lang"]['Active'] = 'सक्रिय';

$GLOBALS["lang"]['Active / Active'] = 'सक्रिय / सक्रिय';

$GLOBALS["lang"]['Active / Passive'] = 'सक्रिय / निष्क्रिय';

$GLOBALS["lang"]['Active Directory'] = 'सक्रिय निर्देशिका';

$GLOBALS["lang"]['Active Directory Domain'] = 'सक्रिय निर्देशिका डोमेन';

$GLOBALS["lang"]['active_directory_ou'] = 'सक्रिय निर्देशिका Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'सक्रिय निर्देशिका Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'सक्रिय निर्देशिका सर्वर';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'सक्रिय निर्देशिका और OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'ऐड डोमेन';

$GLOBALS["lang"]['Ad Domain'] = 'ऐड डोमेन';

$GLOBALS["lang"]['ad_group'] = 'विज्ञापन समूह';

$GLOBALS["lang"]['Ad Group'] = 'विज्ञापन समूह';

$GLOBALS["lang"]['ad_server'] = 'विज्ञापन सर्वर';

$GLOBALS["lang"]['Ad Server'] = 'विज्ञापन सर्वर';

$GLOBALS["lang"]['Add'] = 'जोड़ें';

$GLOBALS["lang"]['Add Credentials'] = 'क्रेडेंशियल जोड़ें';

$GLOBALS["lang"]['Add Device'] = 'डिवाइस जोड़ें';

$GLOBALS["lang"]['Add Device to Application'] = 'डिवाइस को एप्लिकेशन में जोड़ें';

$GLOBALS["lang"]['Add Device to Cluster'] = 'क्लस्टर में डिवाइस जोड़ें';

$GLOBALS["lang"]['Add Exception'] = 'अपवाद जोड़ें';

$GLOBALS["lang"]['Add Field'] = 'फील्ड जोड़ें';

$GLOBALS["lang"]['Add If'] = 'अगर जोड़ें';

$GLOBALS["lang"]['Add Policies from Device'] = 'डिवाइस से नीतियां जोड़ें';

$GLOBALS["lang"]['Add Policy'] = 'पॉलिसी जोड़ें';

$GLOBALS["lang"]['Add Then'] = 'फिर जोड़ें';

$GLOBALS["lang"]['Add Your Credentials'] = 'अपने क्रेडेंशियल जोड़ें';

$GLOBALS["lang"]['Add image'] = 'छवि जोड़ें';

$GLOBALS["lang"]['additional_items'] = 'अतिरिक्त आइटम';

$GLOBALS["lang"]['Additional Items'] = 'अतिरिक्त आइटम';

$GLOBALS["lang"]['address'] = 'पता';

$GLOBALS["lang"]['Address'] = 'पता';

$GLOBALS["lang"]['Address any nonconformities'] = 'किसी भी nonconformity को संबोधित';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'पता लेखा परीक्षा निष्कर्ष और सुधारात्मक कार्रवाई';

$GLOBALS["lang"]['Admin'] = 'व्यवस्थापक';

$GLOBALS["lang"]['admin_status'] = 'व्यवस्थापक स्थिति';

$GLOBALS["lang"]['Admin Status'] = 'व्यवस्थापक स्थिति';

$GLOBALS["lang"]['advanced'] = 'उन्नत';

$GLOBALS["lang"]['Advanced'] = 'उन्नत';

$GLOBALS["lang"]['Afghanistan'] = 'अफ़गानिस्तान';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'एक एकीकरण के बाद, जब आप एक एकीकरण के विवरण को देखते हैं तो आप डीबग नामक फ़ील्ड को नोटिस करेंगे। यह डिफ़ॉल्ट नहीं है। इसे हां में बदलना एक एकीकरण निष्पादित होने पर अतिरिक्त लॉगिंग प्रदान करता है। डेबग को हाँ नहीं छोड़ा जाना चाहिए। ऐसा इसलिए है क्योंकि डीबग आउटपुट में बाहरी प्रणालियों से प्राप्त सभी चीजें शामिल होंगी - जिसमें डब्ल्यूएमआई और एसएनएमपी क्रेडेंशियल जैसे आइटम शामिल हैं। डीबग विकल्प केवल तभी इस्तेमाल किया जाना चाहिए जब कोई मुद्दा हुआ हो और आप यह देखना चाहते हैं कि क्या आप क्यों निर्धारित कर सकते हैं।';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'ऊपर पूरा करने के बाद, एजेंट को अनइंस्टॉल करें।';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'एजेंट? डिस्कवरी? Credentials?';

$GLOBALS["lang"]['agents'] = 'एजेंट';

$GLOBALS["lang"]['Agents'] = 'एजेंट';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'एजेंट प्रविष्टियां बनाई जा सकती हैं जो एक अवधि, एक नेटवर्क और ऑपरेटिंग सिस्टम निर्दिष्ट करती हैं। यदि सभी परीक्षण मैच करते हैं, तो सर्वर एजेंट को कार्रवाई करने के लिए कहता है। यदि कोई परीक्षण निर्धारित नहीं है, तो इसे बाहर रखा गया है <i>सभी मैच होना चाहिए</i> आवश्यकता।<br/><br/>आप कई एजेंट बना सकते हैं और सर्वर एक या सभी एजेंट प्रविष्टियों की जांच कर सकते हैं। आप कह सकते हैं कि एक एजेंट निर्दिष्ट करें <i>यदि एजेंट आईपी इस सबनेट में है, तो डिवाइस का स्थान_id सेट करें</i>।<br/><br/>एक अन्य उदाहरण बिल्कुल नहीं चल सकता है, बल्कि एक स्क्रिप्ट डाउनलोड कर सकता है और इसे चला सकता है। यदि एजेंट व्यवस्थापक अधिकारों के साथ स्थापित है, तो अब आप अपनी मशीनों को खोलने के बिना प्रबंधित कर सकते हैं <strong>कोई</strong> यह दुनिया भर से बंदरगाह है।<p>उन्नत एजेंटों को सक्षम करने का मतलब है कि किसी एजेंट को किसी भी फाइल को डाउनलोड करने और किसी भी कमांड को निष्पादित करने के लिए निर्देश दिया जा सकता है। <strong>चेतावनी</strong>: यह सुरक्षा जोखिम के साथ आता है। यह विन्यास होगा <strong>केवल</strong> कार्य करते समय ओपन-ऑडिट को HTTPS का उपयोग करके और एक वैध (प्रमाणित प्राधिकरण प्रदान किया गया) प्रमाण पत्र </p>';

$GLOBALS["lang"]['Aggressive'] = 'आक्रामक';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Islands';

$GLOBALS["lang"]['Albania'] = 'अल्बानिया';

$GLOBALS["lang"]['Albanian'] = 'अल्बानियाई';

$GLOBALS["lang"]['alert_style'] = 'चेतावनी शैली';

$GLOBALS["lang"]['Alert Style'] = 'चेतावनी शैली';

$GLOBALS["lang"]['Algeria'] = 'अल्जीरिया';

$GLOBALS["lang"]['algorithm'] = 'एल्गोरिथ्म';

$GLOBALS["lang"]['Algorithm'] = 'एल्गोरिथ्म';

$GLOBALS["lang"]['alias'] = 'उपनाम';

$GLOBALS["lang"]['Alias'] = 'उपनाम';

$GLOBALS["lang"]['All'] = 'सब';

$GLOBALS["lang"]['All IPs'] = 'सभी आईपी';

$GLOBALS["lang"]['All Policies'] = 'सभी नीतियां';

$GLOBALS["lang"]['All Queued Items'] = 'सभी Queued आइटम';

$GLOBALS["lang"]['All collections URLs use the format'] = 'सभी संग्रह यूआरएल प्रारूप का उपयोग करते हैं';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'सभी डिवाइस सब-टेबल्स में कुछ महत्वपूर्ण कॉलम होते हैं।';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'कंप्यूटर की तरह एक प्रकार के साथ सभी डिवाइस।';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'कंप्यूटर या रूटर के एक प्रकार के साथ सभी उपकरणों।';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'स्विच और प्रिंटर के बिना सभी डिवाइस।';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'स्विच और प्रिंटर के बिना सभी डिवाइस। अनिवार्य रूप से उपरोक्त क्वेरी के समान।';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'डिवाइस सीड डिस्कवरी में उपयोग के लिए सभी नियमित खोज विकल्प भी उपलब्ध हैं।';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'सभी कार्यों को विंडोज और लिनक्स में भी बनाया जा सकता है। कार्य शेड्यूलिंग निष्पादन के लिए क्रोन विधि का उपयोग करते हैं।';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'सूचना के लिए इस अनुरोध के साथ, हम फर्स्टवेव डेटापॉइंट्स को वापस भेज देते हैं जो हमें सुविधा उपयोग और आपकी स्थापना पर कुछ आवश्यक जानकारी देंगे।';

$GLOBALS["lang"]['Also can be created from the'] = 'इसके अलावा से बनाया जा सकता है';

$GLOBALS["lang"]['Alternatives'] = 'विकल्प';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'अमेज़न AWS फील्ड';

$GLOBALS["lang"]['American Samoa'] = 'अमेरिकन समोआ';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'एक सक्रिय निर्देशिका खोज नेटवर्क की एक सूची के लिए सक्रिय निर्देशिका को क्वेरी करेगा और संबद्ध आईपी को नियमित सबनेट खोज की तरह स्कैन करेगा।';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'एक संगठन (संगठन) ओपन-ऑडिट के भीतर संग्रह में अधिकांश वस्तुओं का मालिक है। वैश्विक वस्तुओं जैसे अपवाद के साथ <i>विन्यास</i>, अधिकांश वस्तुओं को एक संगठन (द्वारा स्वामित्व) को सौंपा गया है। एक उपयोगकर्ता को एक संग्रह में उन वस्तुओं तक पहुंच होती है, जो एक संगठन के नीचे उपयोगकर्ता को अनुमति देता है।';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'एक अनुप्रयोग सक्रिय रूप से इस बंदरगाह पर टीसीपी कनेक्शन, यूडीपी डेटाग्राम या एससीटीपी संघों को स्वीकार कर रहा है। यह अक्सर पोर्ट स्कैनिंग का प्राथमिक लक्ष्य है। सुरक्षा दिमागी लोगों को पता है कि प्रत्येक खुला बंदरगाह हमले के लिए एक एवेन्यू है। हमलावरों और कलम परीक्षक खुले बंदरगाहों का शोषण करना चाहते हैं, जबकि प्रशासक वैध उपयोगकर्ताओं को विफल किए बिना उन्हें फायरवॉल के साथ बंद करने या संरक्षित करने की कोशिश करते हैं। ओपन पोर्ट गैर-सुरक्षा स्कैन के लिए भी दिलचस्प हैं क्योंकि वे नेटवर्क पर उपयोग के लिए उपलब्ध सेवाओं को दिखाते हैं।';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'की एक सरणी <code>benchmarks.id</code>।';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'की एक सरणी <code>devices.id</code>।';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'अधिक जानकारी के लिए बाहरी लिंक का प्रतिनिधित्व करने वाले ऑब्जेक्ट की एक सरणी।';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'पहचान और डिवाइस के प्रकार के लिए एक शिक्षित अनुमान';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'एक एन्क्रिप्टेड JSON दस्तावेज़ जिसमें आवश्यक विशेषताओं के आधार पर आवश्यक गुण होते हैं <code>credentials.type</code>।';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'एक उद्यम निजी नेटवर्क एक ऐसा नेटवर्क है जो एक एकल संगठन अपने कार्यालय स्थानों (जैसे उत्पादन स्थल, प्रमुख कार्यालय, दूरस्थ कार्यालय, दुकानें) को जोड़ने के लिए बनाता है ताकि वे कंप्यूटर संसाधनों को साझा कर सकें।';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'यदि वर्तमान उपयोगकर्ता लॉग इन करता है तो वेब इंटरफ़ेस का उपयोग करके एक प्रविष्टि बनाई जा सकती है, जिसमें एक भूमिका होती है जिसमें शामिल होती है।';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'एक उदाहरण JSON POST शरीर नीचे है। इसे "डेटा" फॉर्म आइटम से जोड़ा जाना चाहिए।';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'एक उदाहरण विजेट SQL दिखा डिवाइस प्रति स्थान गिनती।';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'एक मौजूदा ओपन-ऑडिट उपयोगकर्ता को LDAP सर्वर द्वारा अधिकृत और अधिकृत किया गया था। सफलता।';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'इस साइट द्वारा आवश्यक सेवा स्तर का संकेत।';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'एक आंतरिक क्षेत्र जो इंगित करता है कि खोज पूरी हो गई है।';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'एक खुला filtered बंदरगाह खुला माना जाता है (और डिवाइस का पता लगाने को ट्रिगर करेगा)।<br/>इससे पहले, ओपन-ऑड आईटी ने एनमैप प्रतिक्रिया पर विचार किया';

$GLOBALS["lang"]['An optional GeoCode'] = 'एक वैकल्पिक GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'सूडो का उपयोग करने के लिए एक वैकल्पिक पासवर्ड।';

$GLOBALS["lang"]['Analyzed'] = 'हिंदी';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'अंत में, इस खोज को निष्पादित करने के लिए सबमिट करें क्लिक करें।';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'और अगर कुछ गलत हो जाता है?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'अंत में क्लिक करें <i>जमा करना</i> एनट्रा के लिए अपनी ओपन-ऑडिट Auth विधि बनाने के लिए।';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'अंत में, इतना सुरक्षा मुद्दा नहीं - मन की शांति। डेटा संरचनाएं खुली और दस्तावेजी हैं। आप उन्हें देख सकते हैं';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'और एक नाम प्रदान करें - हम पूरी तरह से ओपन-ऑडिट की सिफारिश करते हैं, लेकिन आप इसे कुछ भी पसंद कर सकते हैं। सुनिश्चित करें कि विकल्प के लिए <i>गैलरी (गैर गैलरी) में आपको कोई अन्य अनुप्रयोग नहीं मिला</i> चुना गया है। फिर क्लिक करें <i>बनाना<i>।</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'और बहुत कुछ।';

$GLOBALS["lang"]['Andorra'] = 'अंडोरा';

$GLOBALS["lang"]['Angola'] = 'अंगोला';

$GLOBALS["lang"]['Anguilla'] = 'एंगुइला';

$GLOBALS["lang"]['Annex A Controls'] = 'एनेक्स ए कंट्रोल';

$GLOBALS["lang"]['Antarctica'] = 'अंटार्कटिका';

$GLOBALS["lang"]['AntiVirus'] = 'एंटीवायरस';

$GLOBALS["lang"]['AntiVirus Packages'] = 'एंटीवायरस पैकेज';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'एंटीगुआ और बारबुडा';

$GLOBALS["lang"]['Antivirus'] = 'एंटीवायरस';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'किसी भी TCP पोर्ट (comma seperated, कोई जगह नहीं) आप इस खोज से बाहर करना चाहते हैं। केवल Nmap 7+ का उपयोग करते समय उपलब्ध है।';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'किसी भी UDP पोर्ट (comma seperated, कोई जगह नहीं) जिसे आप इस खोज से बाहर करना चाहते हैं। केवल Nmap 7+ का उपयोग करते समय उपलब्ध है।';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'आपकी आवश्यकता के अनुसार कोई अतिरिक्त दस्तावेज।';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'आपके द्वारा किए गए किसी भी अतिरिक्त नोट्स को बनाने के लिए।';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'किसी भी विशेषता के बाद एक * संकेत मिलता है कि CVSS डेटा v4 से कम इस क्षेत्र को पूरा करने के लिए इस्तेमाल किया गया था। डिफ़ॉल्ट रूप से, हम v4 फ़ील्ड का उपयोग करने का प्रयास करते हैं, हालांकि यदि वे आबादी नहीं हैं तो हम विशेषताओं के लिए पिछले संस्करण (s) में गिर जाएंगे।';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'किसी भी उपकरण को इस संगठन को सौंपा जाएगा जब वे अपनी लेखा परीक्षा स्क्रिप्ट (यदि सेट हो) चलाते हैं।';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'किसी भी उपकरण को इस संगठन को सौंपा जाएगा जब वे अपनी लेखा परीक्षा स्क्रिप्ट (यदि सेट हो) चलाते हैं। लिंक <code>orgs.id</code>।';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'किसी भी खोजे गए उपकरणों को इस स्थान पर निर्दिष्ट किया जाएगा। लिंक <code>locations.id</code>।';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'किसी भी खोजे गए उपकरणों को इस स्थान पर सौंपा जाएगा जब वे अपनी लेखा परीक्षा स्क्रिप्ट (यदि सेट) चलाते हैं।';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'किसी भी खोजे गए उपकरणों को इस स्थान पर सौंपा जाएगा जब वे अपनी लेखा परीक्षा स्क्रिप्ट (यदि सेट) चलाते हैं। लिंक <code>locations.id</code>।';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'यदि सेट किया गया है तो किसी भी खोजे गए उपकरणों को इस संगठन को सौंपा जाएगा। यदि निर्धारित नहीं है, तो उन्हें सौंपा गया है। <code>org_id</code> इस खोज की। लिंक <code>orgs.id</code>।';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'इस तरीके से पाए गए किसी भी फाइल को संग्रहीत किया जाता है <i>निष्पादन</i> किसी अन्य उपकरण घटक के अनुसार तालिका।';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'किसी भी आवश्यक फिल्टर। नोट: जब टाइप = ट्रैफिक होता है, तो यह फ़ॉन्ट-awesome आइकन का प्रतिनिधित्व करता है।';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'आपके द्वारा परीक्षण किए गए किसी भी विशिष्ट टीसीपी पोर्ट (comma seperated, कोई स्थान नहीं)।';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'आपके द्वारा परीक्षण किए गए किसी भी विशिष्ट UDP पोर्ट (comma seperated, कोई स्थान नहीं)।';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'किसी भी उपयोगकर्ता अपलोड की गई छवियां यहां रखी गई हैं।';

$GLOBALS["lang"]['Application'] = 'आवेदन';

$GLOBALS["lang"]['Application Definitions'] = 'आवेदन परिभाषा';

$GLOBALS["lang"]['application_id'] = 'आवेदन ID';

$GLOBALS["lang"]['Application ID'] = 'आवेदन ID';

$GLOBALS["lang"]['Application Licenses'] = 'आवेदन लाइसेंस';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'अनुप्रयोग, ऑपरेटिंग सिस्टम या हार्डवेयर।';

$GLOBALS["lang"]['applications'] = 'अनुप्रयोग';

$GLOBALS["lang"]['Applications'] = 'अनुप्रयोग';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'अनुप्रयोग केवल एक एंटरप्राइज़ हैं।';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'अनुप्रयोगों को ओपन-ऑडिट 2.2 में आगे के विकास के रूप में अवधारणा पर विस्तार करने के दृष्टिकोण के साथ पेश किया जा रहा है।';

$GLOBALS["lang"]['applied'] = 'आवेदन';

$GLOBALS["lang"]['Applied'] = 'आवेदन';

$GLOBALS["lang"]['Approved'] = 'स्वीकृत';

$GLOBALS["lang"]['Approved Packages'] = 'स्वीकृत पैकेज';

$GLOBALS["lang"]['April'] = 'अप्रैल';

$GLOBALS["lang"]['Arabic'] = 'अरबी';

$GLOBALS["lang"]['architecture'] = 'आर्किटेक्चर';

$GLOBALS["lang"]['Architecture'] = 'आर्किटेक्चर';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'क्या आप इस इनपुट आइटम को हटाना चाहते हैं?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'क्या आप इस आउटपुट आइटम को हटाना चाहते हैं?';

$GLOBALS["lang"]['Are you sure?'] = 'क्या आप निश्चित हैं?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'क्या आप निश्चित हैं? यह सभी कतार प्रविष्टियों को हटा देगा और शेष आईपी को खोजे जाने से रोक देगा।';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'क्या आप निश्चित हैं? यह कतार प्रसंस्करण गिनती को रीसेट करेगा और सर्वर पर लोड का कारण बन सकता है।';

$GLOBALS["lang"]['area'] = 'क्षेत्र';

$GLOBALS["lang"]['Area'] = 'क्षेत्र';

$GLOBALS["lang"]['Argentina'] = 'अर्जेंटीना';

$GLOBALS["lang"]['Armenia'] = 'आर्मेनिया';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'अरूबा';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'कैसे प्राधिकरण ओपन-ऑडिट में काम करता है, इसके बारे में एक अनुस्मारक के रूप में, देखें';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'नतीजतन, हम <strong>होना</strong> खोज क्रेडेंशियल उपयोगकर्ता के लिए उपलब्ध व्यवस्थापक$ शेयर है। कृपया ध्यान दें कि विंडोज मशीन प्रदान करता है <i>लिखना</i> खोज क्रेडेंशियल उपयोगकर्ता के लिए उपयोग।<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'जैसा कि ऊपर उल्लेख किया गया है, डेवलपर्स सभी अनुवाद भाषाओं की पेशकश नहीं करते हैं। इसका मतलब है कि हम सटीकता, अनुवादित पाठ के साथ समीक्षा नहीं कर सकते हैं। हम एक कर्सरी समीक्षा की कोशिश करते हैं। यदि आप ऐसा कुछ देखते हैं जो सही ढंग से अनुवादित नहीं है, तो आप इसे स्वयं बदल सकते हैं। उपयुक्त भाषा फ़ाइल (नीचे के रूप में) संपादित करें और टेक्स्ट को बदलने के लिए देखें। शायद यह मौजूद नहीं है और आपको इसे जोड़ने की आवश्यकता है। बस पाठ को बदलने, फ़ाइल को बचाने और अपने हम पृष्ठ को ताज़ा करने के लिए। इसके लिए किसी भी सेवा / डेमॉन को फिर से शुरू करने की आवश्यकता नहीं है। आपको अपने ब्राउज़र को ताज़ा करने की आवश्यकता हो सकती है।';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'OpenSCAP बेंचमार्क के अनुसार - <i>इस बेंचमार्क में किसी भी सेटिंग को लागू करने का प्रयास न करें, पहले उन्हें गैर-ऑपरेशनल वातावरण में परीक्षण किए बिना। इस बेंचमार्क के निर्माता अन्य पार्टियों द्वारा इसके उपयोग के लिए कोई जिम्मेदारी नहीं लेते हैं, और इसकी गुणवत्ता, विश्वसनीयता, या किसी अन्य विशेषता के बारे में कोई गारंटी, व्यक्त या निहित नहीं बनाता है।</i><br/><br/>गंभीरता से, अंधा नहीं शुरू <i>निर्धारण</i> एक गैर-उत्पादन, समान वातावरण में पहले पूरी तरह से परीक्षण किए बिना एक बेंचमार्क चलाने के बाद मुद्दों का पता चला।';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'उपकरण वातावरण के लिए विशेषताओं के अनुसार। उत्पादन, प्रशिक्षण, एट अल।';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'चूंकि ऑडिट स्क्रिप्ट बैश का उपयोग करती है, तो आप * के वाइल्डकार्ड का उपयोग कर सकते हैं जब आप निर्देशिकाओं और बहिष्कारों को परिभाषित कर रहे हैं।';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'सामान्य रूप से, मेनू पर जाएं → प्रबंधित करें → एकीकरण → एकीकरण बनाएं। जैसा कि ऊपर है, यदि आप लिनक्स पर चल रहे हैं और आपके पास उसी सर्वर पर NMIS है, तो आपको क्लिक के अलावा कुछ भी करने की आवश्यकता नहीं है <i>जमा करना</i>। मैं इससे ज्यादा आसान नहीं बना सकता।';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'चूंकि हम डिस्कवरी चलाते हैं और डिवाइस के परिणाम इकट्ठा करते हैं, हम नेटवर्क की सूची को पॉप्युलेट करते हैं। Blessed Subnets सुविधा केवल उन नेटवर्क पर उपकरणों से डेटा स्वीकार करने के लिए नेटवर्क की इस सूची का उपयोग करता है।';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'जैसा कि आपके पास पंजीकृत कलेक्टर हैं, कृपया चुनें कि इस खोज को कैसे निष्पादित किया जाए।';

$GLOBALS["lang"]['Ask me later'] = 'मुझे बाद में पूछो';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'मदद के लिए समुदाय से पूछो या दूसरों के लिए जवाब देने के लिए।';

$GLOBALS["lang"]['aspect_ratio'] = 'पहलू अनुपात';

$GLOBALS["lang"]['Aspect Ratio'] = 'पहलू अनुपात';

$GLOBALS["lang"]['Asset ID'] = 'एसेट आईडी';

$GLOBALS["lang"]['asset_ident'] = 'परिसंपत्ति पहचान';

$GLOBALS["lang"]['Asset Ident'] = 'परिसंपत्ति पहचान';

$GLOBALS["lang"]['asset_number'] = 'परिसंपत्ति संख्या';

$GLOBALS["lang"]['Asset Number'] = 'परिसंपत्ति संख्या';

$GLOBALS["lang"]['asset_tag'] = 'एसेट टैग';

$GLOBALS["lang"]['Asset Tag'] = 'एसेट टैग';

$GLOBALS["lang"]['Assign Device to Application'] = 'आवेदन करने के लिए डिवाइस असाइन करें';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'क्लस्टर के लिए डिवाइस असाइन करें';

$GLOBALS["lang"]['Assign Device to Location'] = 'स्थान पर डिवाइस असाइन करें';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'संगठन के लिए डिवाइस असाइन करें';

$GLOBALS["lang"]['Assign Devices to Location'] = 'स्थान के लिए उपकरण सौंपना';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'संगठन के लिए उपकरण सौंपना';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS प्रबंधक या टीम को असाइन करें';

$GLOBALS["lang"]['Assign an Operator'] = 'ऑपरेटर को असाइन करें';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'इस संगठन के लिए किसी भी लेखापरीक्षित उपकरणों को असाइन करें। वर्तमान में सौंपा गया संगठन (या डिफ़ॉल्ट सेट करने के लिए) में डिवाइस छोड़ने के लिए खाली छोड़ दें।';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'डिवाइस को एक स्थान पर सौंप दें';

$GLOBALS["lang"]['Assign the device to an Org'] = 'डिवाइस को एक संगठन में सौंप दें';

$GLOBALS["lang"]['Assigned To'] = 'सौंपना';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'डिस्कवर डिवाइस असाइन करना';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'वर्तमान में हम Netstat_ports, सॉफ्टवेयर और उपयोगकर्ताओं का उपयोग कर सकते हैं।';

$GLOBALS["lang"]['attached_device_id'] = 'संलग्न डिवाइस ID';

$GLOBALS["lang"]['Attached Device ID'] = 'संलग्न डिवाइस ID';

$GLOBALS["lang"]['attached_to'] = 'संलग्न';

$GLOBALS["lang"]['Attached To'] = 'संलग्न';

$GLOBALS["lang"]['attachment'] = 'अनुलग्नक';

$GLOBALS["lang"]['Attachment'] = 'अनुलग्नक';

$GLOBALS["lang"]['attachments'] = 'संलग्नक';

$GLOBALS["lang"]['Attachments'] = 'संलग्नक';

$GLOBALS["lang"]['attack_complexity'] = 'हमला जटिलता';

$GLOBALS["lang"]['Attack Complexity'] = 'हमला जटिलता';

$GLOBALS["lang"]['attack_requirements'] = 'हमला आवश्यकताएं';

$GLOBALS["lang"]['Attack Requirements'] = 'हमला आवश्यकताएं';

$GLOBALS["lang"]['attack_vector'] = 'हमला वेक्टर';

$GLOBALS["lang"]['Attack Vector'] = 'हमला वेक्टर';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'यदि हम स्थानीयहोस्ट का परीक्षण नहीं कर रहे हैं तो डिवाइस को पिंग करने का प्रयास करें।';

$GLOBALS["lang"]['Attribute'] = 'योगदान';

$GLOBALS["lang"]['attributes'] = 'गुण';

$GLOBALS["lang"]['Attributes'] = 'गुण';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'विशेषता विशेष क्षेत्रों के लिए उपयोग करने के लिए ओपन-ऑडिट के लिए संग्रहीत की जाती है, वर्तमान में सभी क्षेत्र उपकरणों, स्थानों, orgs और क्वेरी तालिकाओं पर आधारित होते हैं। जिन विशेषताओं को आप संपादित कर सकते हैं वे निम्नलिखित कॉलम से जुड़े हैं: कक्षा, पर्यावरण, स्थिति और प्रकार।';

$GLOBALS["lang"]['Audit'] = 'लेखा';

$GLOBALS["lang"]['Audit AIX'] = 'लेखा परीक्षा AIX';

$GLOBALS["lang"]['Audit DNS'] = 'DNS ऑडिट';

$GLOBALS["lang"]['Audit ESXi'] = 'ऑडिट ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linux';

$GLOBALS["lang"]['audit_log'] = 'ऑडिट लॉग';

$GLOBALS["lang"]['Audit Log'] = 'ऑडिट लॉग';

$GLOBALS["lang"]['Audit Mount Point'] = 'ऑडिट माउंट पॉइंट';

$GLOBALS["lang"]['Audit My PC'] = 'मेरा पीसी';

$GLOBALS["lang"]['Audit Netstat'] = 'लेखा परीक्षा नेटस्टैट';

$GLOBALS["lang"]['Audit OSX'] = 'ऑडिट OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'लेखा परीक्षा परिणाम इनपुट';

$GLOBALS["lang"]['Audit Software'] = 'लेखा';

$GLOBALS["lang"]['Audit Status'] = 'लेखा परीक्षा की स्थिति';

$GLOBALS["lang"]['Audit Win32 Product'] = 'लेखा परीक्षा Win32 उत्पाद';

$GLOBALS["lang"]['Audit Windows'] = 'ऑडिट विंडोज़';

$GLOBALS["lang"]['Audit the Device'] = 'डिवाइस ऑडिट';

$GLOBALS["lang"]['Audits'] = 'लेखा परीक्षा';

$GLOBALS["lang"]['August'] = 'अगस्त';

$GLOBALS["lang"]['Australia'] = 'ऑस्ट्रेलिया';

$GLOBALS["lang"]['Austria'] = 'ऑस्ट्रीया';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'प्राधिकरण विधियाँ';

$GLOBALS["lang"]['Authenticate only'] = 'केवल प्रामाणिक';

$GLOBALS["lang"]['Authentication Passphrase'] = 'प्रमाणीकरण Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'प्रमाणीकरण प्रोटोकॉल';

$GLOBALS["lang"]['authority_key_ident'] = 'प्राधिकरण कुंजी पहचान';

$GLOBALS["lang"]['Authority Key Ident'] = 'प्राधिकरण कुंजी पहचान';

$GLOBALS["lang"]['Auto'] = 'ऑटो';

$GLOBALS["lang"]['auto_renew'] = 'ऑटो नवीनीकरण';

$GLOBALS["lang"]['Auto Renew'] = 'ऑटो नवीनीकरण';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'ओपन-ऑडिट सर्वर द्वारा ऑटो पॉप्युलेट किया गया।';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'स्वचालित रूप से कलेक्टरों ओएस पर आधारित जनसंख्या।';

$GLOBALS["lang"]['availability'] = 'उपलब्धता';

$GLOBALS["lang"]['Availability'] = 'उपलब्धता';

$GLOBALS["lang"]['Available Benchmarks'] = 'उपलब्ध बेंचमार्क';

$GLOBALS["lang"]['Awaiting Analysis'] = 'विश्लेषण';

$GLOBALS["lang"]['Azerbaijan'] = 'अज़रबैजान';

$GLOBALS["lang"]['Azerbaijani'] = 'अज़रबैजानी';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'बीटीयू मैक्स';

$GLOBALS["lang"]['BTU Total'] = 'BTU कुल';

$GLOBALS["lang"]['Backbone network'] = 'बैकबोन नेटवर्क';

$GLOBALS["lang"]['Backup'] = 'बैकअप';

$GLOBALS["lang"]['Bahamas the'] = 'बहामा';

$GLOBALS["lang"]['Bahrain'] = 'बहरीन';

$GLOBALS["lang"]['Bangladesh'] = 'बांग्लादेश';

$GLOBALS["lang"]['bank'] = 'बैंक';

$GLOBALS["lang"]['Bank'] = 'बैंक';

$GLOBALS["lang"]['Banned'] = 'बंधा';

$GLOBALS["lang"]['Banned Packages'] = 'प्रतिबंधित पैकेज';

$GLOBALS["lang"]['bar_code'] = 'बार कोड';

$GLOBALS["lang"]['Bar Code'] = 'बार कोड';

$GLOBALS["lang"]['Barbados'] = 'बारबाडोस';

$GLOBALS["lang"]['Base DN'] = 'बेस डीएन';

$GLOBALS["lang"]['base_score'] = 'बेस स्कोर';

$GLOBALS["lang"]['Base Score'] = 'बेस स्कोर';

$GLOBALS["lang"]['base_severity'] = 'आधार गंभीरता';

$GLOBALS["lang"]['Base Severity'] = 'आधार गंभीरता';

$GLOBALS["lang"]['based_on'] = 'पर आधारित';

$GLOBALS["lang"]['Based On'] = 'पर आधारित';

$GLOBALS["lang"]['baseline'] = 'बेसलाइन';

$GLOBALS["lang"]['Baseline'] = 'बेसलाइन';

$GLOBALS["lang"]['baseline_id'] = 'बेसलाइन आईडी';

$GLOBALS["lang"]['Baseline ID'] = 'बेसलाइन आईडी';

$GLOBALS["lang"]['baselines'] = 'बेसलाइन';

$GLOBALS["lang"]['Baselines'] = 'बेसलाइन';

$GLOBALS["lang"]['baselines_policies'] = 'बेसलाइन नीतियां';

$GLOBALS["lang"]['Baselines Policies'] = 'बेसलाइन नीतियां';

$GLOBALS["lang"]['Baselines Policy'] = 'बेसलाइन नीति';

$GLOBALS["lang"]['Baselines Policy Details'] = 'बेसलाइन नीति विवरण';

$GLOBALS["lang"]['baselines_results'] = 'बेसलाइन परिणाम';

$GLOBALS["lang"]['Baselines Results'] = 'बेसलाइन परिणाम';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'बेसलाइन नेटस्टैट बंदरगाहों, उपयोगकर्ताओं और सॉफ्टवेयर की तुलना कर सकते हैं।';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'बेसलाइन आपको उन विशेषताओं के एक सेट के साथ ऑडिट डेटा को संयोजित करने में सक्षम बनाता है जिन्हें आपने पहले परिभाषित किया है (आपका बेसलाइन) उपकरणों के अनुपालन को निर्धारित करने के लिए।';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'डिवाइस तुलना के लिए बेसलाइन';

$GLOBALS["lang"]['Basic'] = 'मूल';

$GLOBALS["lang"]['Basque'] = 'बास्क';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'क्योंकि हम जितना संभव हो उतना पारदर्शी होने की कोशिश करते हैं, यहां आपका वास्तविक डेटा है जिसे हम भेजते हैं।';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'यह निर्धारित करने में सक्षम होने के नाते कि किस तरह की मशीनों को उसी तरह कॉन्फ़िगर किया गया है, सिस्टम प्रशासन और लेखा परीक्षा का एक प्रमुख हिस्सा है - और अब उस पर रिपोर्टिंग सरल और स्वचालित किया जाएगा। एक बार जब आप अपने बेसलाइन को परिभाषित करते हैं तो यह स्वचालित रूप से पूर्व निर्धारित अनुसूची पर उपकरणों के एक सेट के खिलाफ चला जाएगा। इन निष्पादित बेसलाइनों का उत्पादन वेब देखने के लिए उपलब्ध होगा, एक तीसरे पक्ष की प्रणाली में आयात या यहां तक कि एक मुद्रित रिपोर्ट के रूप में भी।<br/><br/>लेखा परीक्षा और प्रबंधन के प्रयोजनों के लिए यह एक निश्चित, ज्ञात अच्छे उपकरण के खिलाफ व्यक्तिगत उपकरणों को बेसलाइन करने के लिए फायदेमंद हो सकता है। बेसलाइन आपको उन विशेषताओं के एक सेट के साथ ऑडिट डेटा को संयोजित करने में सक्षम बनाता है जिन्हें आपने पहले परिभाषित किया है (आपका बेसलाइन) उपकरणों के अनुपालन को निर्धारित करने के लिए।';

$GLOBALS["lang"]['Belarus'] = 'बेलारूस';

$GLOBALS["lang"]['Belgium'] = 'बेल्जियम';

$GLOBALS["lang"]['Belize'] = 'बेलीज़';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'नीचे आवश्यक csv प्रारूप का एक उदाहरण है।';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'इन लाइनों के नीचे जहां चर को स्क्रिप्ट में इंजेक्ट किया जाता है। हमारे पहले के उदाहरण के बाद, लिनक्स ऑडिट स्क्रिप्ट हमारी निर्देशिका के साथ पॉप्युलेट किया जाता है जैसे कि';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'नीचे आप एक उदाहरण Org चार्ट देख सकते हैं। यदि किसी उपयोगकर्ता को अनुमति है <i>वित्त A</i> संगठन, उनके पास विभाग ए, बी एंड सी के वंशज संगठन पर भी अनुमति है। यह अनुरोधित संग्रह की परवाह किए बिना है।<br/><br/>यदि अनुरोध किया गया संग्रह आरोही की अनुमति देता है, तो उपयोगकर्ता को कंपनी #1 और डिफ़ॉल्ट संगठन आइटम तक पहुंच होगी। यह (ऊपर) प्रश्नों, समूहों, एट अल के लिए है।<br/><br/>नोट - एक उपयोगकर्ता डिफ़ॉल्ट संगठन से एक क्वेरी तक पहुंच सकता है, लेकिन यह वह क्वेरी है जो परिणाम नहीं है। परिणाम केवल उन उपकरणों को दिखाएंगे जिनका उपयोगकर्ता पहुँच है - वित्त ए और विभाग ए, बी एंड सी से आई डिवाइस।';

$GLOBALS["lang"]['Benchmark'] = 'बेंचमार्क';

$GLOBALS["lang"]['benchmark_id'] = 'बेंचमार्क आईडी';

$GLOBALS["lang"]['Benchmark ID'] = 'बेंचमार्क आईडी';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'बेंचमार्क कार्य स्वचालित रूप से तब बनाए जाते हैं जब एक बेंचमार्क बनाया जाता है।';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'बेंचमार्क निष्पादन और प्रसंस्करण समय की एक लंबी राशि ले सकता है, इसलिए उन्हें शेड्यूल करने और उन्हें विज्ञापन-हॉक नहीं चलाने की वरीयता।';

$GLOBALS["lang"]['benchmarks'] = 'बेंचमार्क';

$GLOBALS["lang"]['Benchmarks'] = 'बेंचमार्क';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'बेंचमार्क अपवाद';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'बेंचमार्क अपवाद';

$GLOBALS["lang"]['benchmarks_log'] = 'बेंचमार्क लॉग';

$GLOBALS["lang"]['Benchmarks Log'] = 'बेंचमार्क लॉग';

$GLOBALS["lang"]['benchmarks_policies'] = 'बेंचमार्क नीतियां';

$GLOBALS["lang"]['Benchmarks Policies'] = 'बेंचमार्क नीतियां';

$GLOBALS["lang"]['benchmarks_result'] = 'बेंचमार्क परिणाम';

$GLOBALS["lang"]['Benchmarks Result'] = 'बेंचमार्क परिणाम';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'बेंचमार्क को एक ऑपरेटिंग सिस्टम और संस्करण प्रदान करके बनाया जाता है, जो एक विशिष्ट गाइड के साथ मिलकर इसे निष्पादित करने के लिए मशीनों की एक सूची है। निर्माण के बाद, एक अनुसूची पर मशीनों की सूची के खिलाफ बेंचमार्क निष्पादित किए जाते हैं।';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'बेस्ट प्रैक्टिस कॉन्फ़िगरेशन के लिए बेंचमार्क';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'बेंचमार्क आपके कंप्यूटर के लिए सुरक्षा सिफारिशें प्रदान करते हैं, OpenSCAP उपकरण और नीतियों का उपयोग करते हैं।<p><i>OpenSCAP मुखपृष्ठ से:</i> कंप्यूटर सुरक्षा की कभी बदलती दुनिया में जहां नई कमजोरियों की खोज की जा रही है और हर दिन पैच किया जा रहा है, सुरक्षा अनुपालन को लागू करने के लिए एक सतत प्रक्रिया होना चाहिए। यह भी नीतियों, साथ ही आवधिक मूल्यांकन और जोखिम निगरानी के लिए समायोजन करने के लिए एक रास्ता शामिल करने की जरूरत है। OpenSCAP पारिस्थितिकी तंत्र इन प्रक्रियाओं के त्वरित, लागत प्रभावी और लचीला कार्यान्वयन के लिए उपकरण और अनुकूलन नीतियों को प्रदान करता है।</p>';

$GLOBALS["lang"]['Benefits'] = 'लाभ';

$GLOBALS["lang"]['Bengali'] = 'बंगाली';

$GLOBALS["lang"]['Benin'] = 'बेनिन';

$GLOBALS["lang"]['Bermuda'] = 'बरमूडा';

$GLOBALS["lang"]['best_practises'] = 'बेस्ट प्रैक्टिस';

$GLOBALS["lang"]['Best Practises'] = 'बेस्ट प्रैक्टिस';

$GLOBALS["lang"]['Bhutan'] = 'भूटान';

$GLOBALS["lang"]['bios'] = 'जैव';

$GLOBALS["lang"]['Bios'] = 'जैव';

$GLOBALS["lang"]['body'] = 'शरीर';

$GLOBALS["lang"]['Body'] = 'शरीर';

$GLOBALS["lang"]['Bolivia'] = 'बोलीविया';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'बूट डिवाइस';

$GLOBALS["lang"]['Boot Device'] = 'बूट डिवाइस';

$GLOBALS["lang"]['bootable'] = 'बूट';

$GLOBALS["lang"]['Bootable'] = 'बूट';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'बोस्निया और हर्जेगोविना';

$GLOBALS["lang"]['Both forms of'] = 'दोनों रूपों';

$GLOBALS["lang"]['Botswana'] = 'बोत्सवाना';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'बुवेत द्वीप (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'ब्राज़ील';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'ब्राजील पुर्तगाली';

$GLOBALS["lang"]['Breaking it Down'] = 'इसे तोड़ना';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'ब्रिटिश हिंद महासागर क्षेत्र (चैगोस द्वीपसमूह)';

$GLOBALS["lang"]['British Virgin Islands'] = 'ब्रिटिश वर्जिन द्वीप';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'पेड़ को कंसोल रूट में ब्राउज़ करें -> घटक सेवाएं -> कंप्यूटर -> मेरा कंप्यूटर<br/><br/>राइट क्लिक करें <i>मेरा कंप्यूटर</i> और चयन गुण<br/><br/>चुनें <i>डिफ़ॉल्ट गुण</i> टैब';

$GLOBALS["lang"]['Brunei Darussalam'] = 'ब्रुनेई दारुस्सलाम';

$GLOBALS["lang"]['btu_max'] = 'BTU मैक्स';

$GLOBALS["lang"]['Btu Max'] = 'BTU मैक्स';

$GLOBALS["lang"]['btu_total'] = 'बीटीयू';

$GLOBALS["lang"]['Btu Total'] = 'बीटीयू';

$GLOBALS["lang"]['build_number'] = 'बिल्ड नंबर';

$GLOBALS["lang"]['Build Number'] = 'बिल्ड नंबर';

$GLOBALS["lang"]['build_number_full'] = 'बिल्ड नंबर फुल';

$GLOBALS["lang"]['Build Number Full'] = 'बिल्ड नंबर फुल';

$GLOBALS["lang"]['Building'] = 'भवन';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'ग्राहकों और भागीदारों के साथ विश्वास पैदा करता है';

$GLOBALS["lang"]['Bulgaria'] = 'बुल्गारिया';

$GLOBALS["lang"]['Bulgarian'] = 'बल्गेरियन';

$GLOBALS["lang"]['Bulk Edit'] = 'बल्क एडिट';

$GLOBALS["lang"]['Bulk Edit Form'] = 'बल्क एडिट फॉर्म';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'थोक संपादन डिवाइस विशेषता';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'अगले पृष्ठ पर क्लिक करने के बाद बल्क एडिट सिलेक्शन का चयन नहीं हुआ।';

$GLOBALS["lang"]['Burkina Faso'] = 'बुर्किना फासो';

$GLOBALS["lang"]['Burundi'] = 'बुरुंडी';

$GLOBALS["lang"]['business_requirements'] = 'व्यापार की आवश्यकताएं';

$GLOBALS["lang"]['Business Requirements'] = 'व्यापार की आवश्यकताएं';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'लेकिन मैं केवल Windows क्लाइंट मशीनों उपलब्ध है!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'लेकिन मैं हर बार जब मैं अपडेट करता हूं तो मुझे भाषा फाइल बदलने की जरूरत नहीं है!';

$GLOBALS["lang"]['Buy'] = 'खरीदें';

$GLOBALS["lang"]['Buy More'] = 'खरीदें';

$GLOBALS["lang"]['Buy More Licenses'] = 'अधिक लाइसेंस खरीदें';

$GLOBALS["lang"]['By'] = 'द्वारा';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'डिफ़ॉल्ट रूप से हम अपने nmis_manage विशेषता के साथ सभी उपकरणों को एकीकृत करने के लिए सेट <i>Y</i>। 4.2.0 के साथ हम एक नियम भी देते हैं जो कहते हैं <i>यदि हम एक उपकरण की खोज करते हैं और यह एक वैध SNMP OID है, तो उस डिवाइस को NMIS द्वारा प्रबंधित किया गया है।</i>। जाहिर है अगर आप चाहते हैं तो आप इसे अक्षम कर सकते हैं।';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'डिफ़ॉल्ट रूप से, हम प्रमाण पत्र सत्यापन छोड़ देते हैं क्योंकि ग्राहक स्वयं-सिग्न प्रमाण पत्र का उपयोग करते हैं। प्रमाणपत्र सत्यापन को सक्षम करने के लिए, नीचे फ़ाइल संपादित करें';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR मास्क';

$GLOBALS["lang"]['cli_config'] = 'CLI कन्फिगर';

$GLOBALS["lang"]['CLI Config'] = 'CLI कन्फिगर';

$GLOBALS["lang"]['CPU'] = 'सीपीयू';

$GLOBALS["lang"]['CPUs'] = 'सीपीयू';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'प्राप्त की स्थिति के साथ CVE, विश्लेषण का इंतजार, विश्लेषण से गुजरना, अस्वीकार कर दिया। इन CVEs (अधिकांश) में पर्याप्त जानकारी नहीं है ताकि हमें सही SQL क्वेरी उत्पन्न कर सके।';

$GLOBALS["lang"]['Calculated from discovery.'] = 'खोज से गणना की जाती है।';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'इस नेटवर्क के लिए मान्य आईपी पते की कुल संख्या की गणना की गई।';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'पूरा होने पर गणना की गई, इस मद को निष्पादित करने का समय लिया गया।';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'जब एकीकरण चल रहा है और इस एकीकरण में उपकरणों का एक JSON प्रतिनिधित्व शामिल है, गणना की गई। प्रत्येक लिंक <code>devices.id</code>।';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'जब एकीकरण चल रहा है और इस एकीकरण में स्थानों का एक JSON प्रतिनिधित्व होता है तो गणना की गई। प्रत्येक लिंक <code>locations.id</code>।';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'जब एकीकरण चल रहा है और इसमें ओपन-ऑडिट से चयनित उपकरणों की संख्या शामिल है।';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'जब एकीकरण चल रहा है तो गणना की जाती है और इसमें बाहरी प्रणाली का चयन करने वाले उपकरणों की संख्या होती है।';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'जब एकीकरण चल रहा है और उपकरणों की संख्या बाहरी प्रणाली में अद्यतन किया जा करने के लिए गणना की।';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'जब एकीकरण चल रहा है और इसमें ओपन-ऑडिट में अपडेट किए गए उपकरणों की संख्या शामिल है।';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'क्लिक करके एक कमांड प्रॉम्प्ट को कॉल करें स्टार्ट और सर्च करने के लिए <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'कंबोडिया';

$GLOBALS["lang"]['Cameroon'] = 'कैमरून';

$GLOBALS["lang"]['Campus Area Network'] = 'कैम्पस एरिया नेटवर्क';

$GLOBALS["lang"]['Campus area network'] = 'परिसर क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'हो सकता है <code>active</code>, <code>passive</code> या रिक्त।';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'हो सकता है <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> या रिक्त।';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'हो सकता है <code>auto</code>, <code>fixed</code>, <code>other</code> या रिक्त।';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'हो सकता है <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> या रिक्त।';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'हो सकता है <code>line</code>, <code>pie</code> या <code>traffic</code>।';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'हो सकता है <code>user</code> या <code>collector</code>।';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'खोज या उपयोगकर्ता द्वारा निर्धारित किया जा सकता है।';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'खोज या उपयोगकर्ता द्वारा निर्धारित किया जा सकता है। स्थान तालिका से ID का उपयोग करता है।';

$GLOBALS["lang"]['Can the user edit this item.'] = 'उपयोगकर्ता इस मद को संपादित कर सकता है।';

$GLOBALS["lang"]['Canada'] = 'कनाडा';

$GLOBALS["lang"]['Cancel'] = 'रद्द करना';

$GLOBALS["lang"]['capabilities'] = 'क्षमता';

$GLOBALS["lang"]['Capabilities'] = 'क्षमता';

$GLOBALS["lang"]['Capacity'] = 'क्षमता';

$GLOBALS["lang"]['Cape Verde'] = 'केप वर्डे';

$GLOBALS["lang"]['Capitalise'] = 'पूंजीकरण';

$GLOBALS["lang"]['caption'] = 'कैप्शन';

$GLOBALS["lang"]['Caption'] = 'कैप्शन';

$GLOBALS["lang"]['Catalan'] = 'कैटलन';

$GLOBALS["lang"]['Cayman Islands'] = 'केमैन द्वीप';

$GLOBALS["lang"]['Cellular Details'] = 'सेलुलर विवरण';

$GLOBALS["lang"]['Central African Republic'] = 'मध्य अफ़्रीकी गणराज्य';

$GLOBALS["lang"]['certificate'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['Certificate'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['certificate_file'] = 'प्रमाणपत्र फ़ाइल';

$GLOBALS["lang"]['Certificate File'] = 'प्रमाणपत्र फ़ाइल';

$GLOBALS["lang"]['certificate_name'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['Certificate Name'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['certificates'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['Certificates'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['Certification'] = 'प्रमाणन';

$GLOBALS["lang"]['Certification Audit'] = 'प्रमाणपत्र';

$GLOBALS["lang"]['Certification Process'] = 'प्रमाणन प्रक्रिया';

$GLOBALS["lang"]['Chad'] = 'चाड';

$GLOBALS["lang"]['Change'] = 'परिवर्तन';

$GLOBALS["lang"]['change_id'] = 'आईडी बदलें';

$GLOBALS["lang"]['Change ID'] = 'आईडी बदलें';

$GLOBALS["lang"]['change_log'] = 'लॉग इन करें';

$GLOBALS["lang"]['Change Log'] = 'लॉग इन करें';

$GLOBALS["lang"]['Change Logs'] = 'लॉग बदलें';

$GLOBALS["lang"]['change_type'] = 'प्रकार बदलें';

$GLOBALS["lang"]['Change Type'] = 'प्रकार बदलें';

$GLOBALS["lang"]['check_minutes'] = 'मिनट';

$GLOBALS["lang"]['Check Minutes'] = 'मिनट';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'इन बंदरगाहों पर एसएसएच की जाँच करें';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'किसी भी SSH सेवा के लिए इस बंदरगाह की जाँच करें।';

$GLOBALS["lang"]['Chile'] = 'चिली';

$GLOBALS["lang"]['China'] = 'चीन';

$GLOBALS["lang"]['Chinese'] = 'चीनी';

$GLOBALS["lang"]['Chinese (traditional)'] = 'चीनी (पारंपरिक)';

$GLOBALS["lang"]['Choose'] = 'चुनें';

$GLOBALS["lang"]['Choose (select OS first)'] = 'चुनें (पहले OS चुनें)';

$GLOBALS["lang"]['Choose a Device'] = 'डिवाइस चुनें';

$GLOBALS["lang"]['Choose a Table'] = 'तालिका चुनें';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'पहले ड्रॉप डाउन से कार्य का प्रकार चुनें। यह कार्य के प्रकार के आधार पर आवश्यक अतिरिक्त फ़ील्ड को कॉन्फ़िगर करेगा।';

$GLOBALS["lang"]['Christmas Island'] = 'क्रिसमस द्वीप';

$GLOBALS["lang"]['cidr'] = 'सीडर';

$GLOBALS["lang"]['Cidr'] = 'सीडर';

$GLOBALS["lang"]['circuit_count'] = 'सर्किट गणना';

$GLOBALS["lang"]['Circuit Count'] = 'सर्किट गणना';

$GLOBALS["lang"]['circuit_status'] = 'सर्किट स्थिति';

$GLOBALS["lang"]['Circuit Status'] = 'सर्किट स्थिति';

$GLOBALS["lang"]['city'] = 'शहर';

$GLOBALS["lang"]['City'] = 'शहर';

$GLOBALS["lang"]['class'] = 'कक्षा';

$GLOBALS["lang"]['Class'] = 'कक्षा';

$GLOBALS["lang"]['class_text'] = 'कक्षावार';

$GLOBALS["lang"]['Class Text'] = 'कक्षावार';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'क्लिक करें <i>नए ग्राहक रहस्य</i>।';

$GLOBALS["lang"]['Click Submit to Execute'] = 'क्लिक करें';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'पर क्लिक करें <i>गुण</i> नीचे <i>प्रबंधन</i> केंद्रीय मेनू कॉलम में शीर्षलेखक। कॉपी करें <i>उपयोगकर्ता एक्सेस यूआरएल</i>। एक बार कॉपी करने के बाद इसे टेक्स्ट एडिटर में पेस्ट करें। आपको इस क्षेत्र के एक खंड की प्रतिलिपि बनाने की आवश्यकता होगी।<br/><br/>हमारा उदाहरण फ़ील्ड इस तरह दिखता है<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>।<br/><br/>हमारे लिए आवश्यक अनुभाग है <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). इसका उपयोग ओपन-ऑडिट में किया जाता है क्योंकि <i>किरायेदार</i> इसलिए इसे वहाँ पेस्ट करें।';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'एक नया अनुप्रयोग बनाने के लिए ऐप पंजीकरण पर क्लिक करें, फिर नए आवेदन पंजीकरण पर क्लिक करें। इसे एक नाम दें (I use Open-Audit), वेब ऐप / एपीआई को टाइप के रूप में चुनें और किसी भी URL को उपलब्ध कराएं (url महत्वपूर्ण नहीं है) और अब क्लिक करें।';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'OK पर क्लिक करें और DCOMCNFG विंडो बंद करें।<br/><br/>उपरोक्त परिवर्तनों को प्रभाव देने के लिए एक रिबूट की आवश्यकता होगी।';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'आपके द्वारा बनाए गए एप्लिकेशन पर क्लिक करें। अनुप्रयोग ID प्रदर्शित क्लाइंट ID है।<br/><br/>ग्राहक रहस्य बनाने के लिए, सेटिंग्स पर क्लिक करें, फिर कुंजी। एक कुंजी नाम प्रदान करें और एक उचित समाप्ति तिथि का चयन करें, फिर सेव पर क्लिक करें।<br/><br/>मूल्य आपके लिए आबादी होगी - यह क्लाइंट सीक्रेट है।';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'ओपन-ऑडिट से उदाहरण उपकरणों को हटाने के लिए डिलीट बटन पर क्लिक करें।<br/>यह डेटाबेस से नीचे दिए गए उपकरणों को हटा देगा। ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'के लिए संपादित बटन क्लिक करें <i>बेसिक SAML विन्यास</i>।';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'उदाहरण डिवाइस डेटा के साथ ओपन-ऑडिट को पॉप्युलेट करने के लिए नीचे दिए गए आयात बटन पर क्लिक करें।';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'जिस क्षेत्र को आप संपादित करना चाहते हैं उस आइकन पर क्लिक करें। फ़ील्ड बदलें और ग्रीन आइकन को सबमिट करने के लिए क्लिक करें।';

$GLOBALS["lang"]['Client ID'] = 'ग्राहक ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'ग्राहक आईडी और गुप्त';

$GLOBALS["lang"]['client_ident'] = 'ग्राहक पहचान';

$GLOBALS["lang"]['Client Ident'] = 'ग्राहक पहचान';

$GLOBALS["lang"]['client_secret'] = 'ग्राहक गुप्त';

$GLOBALS["lang"]['Client Secret'] = 'ग्राहक गुप्त';

$GLOBALS["lang"]['client_site_name'] = 'ग्राहक साइट का नाम';

$GLOBALS["lang"]['Client Site Name'] = 'ग्राहक साइट का नाम';

$GLOBALS["lang"]['Close'] = 'बंद';

$GLOBALS["lang"]['Closed'] = 'बंद';

$GLOBALS["lang"]['Cloud'] = 'क्लाउड';

$GLOBALS["lang"]['Cloud Details'] = 'क्लाउड विवरण';

$GLOBALS["lang"]['Cloud Discovery'] = 'क्लाउड डिस्कवरी';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'क्लाउड डिस्कवरी और ऑडिटिंग';

$GLOBALS["lang"]['cloud_id'] = 'क्लाउड आईडी';

$GLOBALS["lang"]['Cloud ID'] = 'क्लाउड आईडी';

$GLOBALS["lang"]['cloud_log'] = 'क्लाउड लॉग';

$GLOBALS["lang"]['Cloud Log'] = 'क्लाउड लॉग';

$GLOBALS["lang"]['cloud_name'] = 'क्लाउड नाम';

$GLOBALS["lang"]['Cloud Name'] = 'क्लाउड नाम';

$GLOBALS["lang"]['Cloud Network'] = 'क्लाउड नेटवर्क';

$GLOBALS["lang"]['clouds'] = 'क्लाउड';

$GLOBALS["lang"]['Clouds'] = 'क्लाउड';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'क्लाउड ओपन-ऑडिट एंटरप्राइज लाइसेंस ग्राहकों के लिए उपलब्ध एक सुविधा है।';

$GLOBALS["lang"]['cluster'] = 'क्लस्टर';

$GLOBALS["lang"]['Cluster'] = 'क्लस्टर';

$GLOBALS["lang"]['cluster_id'] = 'क्लस्टर आईडी';

$GLOBALS["lang"]['Cluster ID'] = 'क्लस्टर आईडी';

$GLOBALS["lang"]['cluster_name'] = 'क्लस्टर नाम';

$GLOBALS["lang"]['Cluster Name'] = 'क्लस्टर नाम';

$GLOBALS["lang"]['cluster_type'] = 'क्लस्टर प्रकार';

$GLOBALS["lang"]['Cluster Type'] = 'क्लस्टर प्रकार';

$GLOBALS["lang"]['clusters'] = 'क्लस्टर';

$GLOBALS["lang"]['Clusters'] = 'क्लस्टर';

$GLOBALS["lang"]['Clusters and Reporting'] = 'क्लस्टर और रिपोर्टिंग';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'कोकोस (कीलिंग) द्वीप';

$GLOBALS["lang"]['Collection'] = 'संग्रह';

$GLOBALS["lang"]['Collections'] = 'संग्रह';

$GLOBALS["lang"]['Collector'] = 'कलेक्टर';

$GLOBALS["lang"]['Collector (UUID)'] = 'कलेक्टर (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'कलेक्टर / सर्वर केवल एक एंटरप्राइज़ सुविधा है। एंटरप्राइज ग्राहकों को मुफ्त में एक कलेक्टर लाइसेंस प्राप्त है। अतिरिक्त कलेक्टर लाइसेंस को आवश्यकतानुसार खरीदा जा सकता है।';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'कलेक्टर / सर्वर को डिज़ाइन किया गया है ताकि आपके पास रिमोट या रिमोट हो सकें <i>कलेक्टर</i> ओपन-ऑडिट का उदाहरण रिमोट मशीन पर चल रहा है। कि कलेक्टर उदाहरण किसी अन्य सुरक्षा क्षेत्र, सबनेट, क्लाउड होस्टिंग उदाहरण या ग्राहक साइट पर हो सकता है। इसके बाद रिमोट कलेक्टर नेटवर्किंग और फायरवॉलिंग जटिलता से बचने के लिए स्थानीय रूप से उपकरणों की सभी खोज और लेखा परीक्षा कर रहा है। जब यह पंजीकृत हो जाता है तो कलेक्टर पूरी तरह से नियंत्रित होता है <i>सर्वर</i>। इसका मतलब है कि आपको केवल उस कलेक्टर से सर्वर तक HTTP या HTTP कनेक्शन की आवश्यकता है।';

$GLOBALS["lang"]['Collector Dashboard'] = 'कलेक्टर डैशबोर्ड';

$GLOBALS["lang"]['Collector Name'] = 'कलेक्टर का नाम';

$GLOBALS["lang"]['collector_uuid'] = 'कलेक्टर उदय';

$GLOBALS["lang"]['Collector Uuid'] = 'कलेक्टर उदय';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'जब कलेक्टर सुविधा सक्षम हो जाती है तो कलेक्टर कार्य स्वचालित रूप से सेटअप होते हैं। कलेक्टर कार्यों को सीधे उपयोगकर्ताओं द्वारा नहीं बनाया जाना चाहिए। निर्माण के बाद कलेक्टर कार्यों में उनकी आवृत्ति संपादित हो सकती है। यदि ओपन-ऑडिट सर्वर ने इसे रिपोर्ट करने वाले कलेक्टरों को दिया है, तो एक अतिरिक्त ड्रॉप डाउन प्रदान किया जाता है। आप यह निर्दिष्ट करने के लिए चुन सकते हैं कि कौन से कलेक्टर को कार्य करना चाहिए। केवल डिस्कवरी कार्यों को कलेक्टरों के लिए समर्थन दिया जाता है।';

$GLOBALS["lang"]['Collectors'] = 'कलेक्टर';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'कलेक्टर दो विधियों में से एक में काम कर सकते हैं: कलेक्टर और स्टैंडअलोन। जब कलेक्टर मोड में ओपन-ऑडिट का उदाहरण मुख्य सर्वर द्वारा प्रबंधित किया जाता है। जब स्टैंड अकेले मोड में, उदाहरण को स्थानीय रूप से प्रबंधित किया जाता है और किसी भी उपकरण को मुख्य सर्वर पर भेज दिया जाता है।';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'रिमोट डिस्कवरी के लिए कलेक्टर';

$GLOBALS["lang"]['Colombia'] = 'कोलम्बिया';

$GLOBALS["lang"]['color'] = 'रंग';

$GLOBALS["lang"]['Color'] = 'रंग';

$GLOBALS["lang"]['Column'] = 'स्तंभ';

$GLOBALS["lang"]['Columns'] = 'स्तंभ';

$GLOBALS["lang"]['command'] = 'कमान';

$GLOBALS["lang"]['Command'] = 'कमान';

$GLOBALS["lang"]['command_options'] = 'कमांड विकल्प';

$GLOBALS["lang"]['Command Options'] = 'कमांड विकल्प';

$GLOBALS["lang"]['command_output'] = 'कमान आउटपुट';

$GLOBALS["lang"]['Command Output'] = 'कमान आउटपुट';

$GLOBALS["lang"]['command_status'] = 'कमान स्थिति';

$GLOBALS["lang"]['Command Status'] = 'कमान स्थिति';

$GLOBALS["lang"]['command_time_to_execute'] = 'कमांड टाइम टू एक्यूट';

$GLOBALS["lang"]['Command Time To Execute'] = 'कमांड टाइम टू एक्यूट';

$GLOBALS["lang"]['comment'] = 'टिप्पणी';

$GLOBALS["lang"]['Comment'] = 'टिप्पणी';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'नीचे पंक्ति (लगभग 49 या इसी तरह) को टिप्पणी करें। बस लाइन की शुरुआत में एक हैश # रखें।';

$GLOBALS["lang"]['comments'] = 'टिप्पणियाँ';

$GLOBALS["lang"]['Comments'] = 'टिप्पणियाँ';

$GLOBALS["lang"]['commercial'] = 'वाणिज्यिक';

$GLOBALS["lang"]['Commercial'] = 'वाणिज्यिक';

$GLOBALS["lang"]['Commercial Support'] = 'व्यावसायिक समर्थन';

$GLOBALS["lang"]['common_name'] = 'आम नाम';

$GLOBALS["lang"]['Common Name'] = 'आम नाम';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'आम तौर पर ग्राहक के रूप में संदर्भित किया जाता है।';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'आम तौर पर क्लाइंटसेक्रेट के रूप में जाना जाता है।';

$GLOBALS["lang"]['Community'] = 'समुदाय';

$GLOBALS["lang"]['Community Questions'] = 'सामुदायिक प्रश्न';

$GLOBALS["lang"]['Community String'] = 'सामुदायिक स्ट्रिंग';

$GLOBALS["lang"]['Comoros the'] = 'कोमोरोस';

$GLOBALS["lang"]['Compact'] = 'कॉम्पैक्ट';

$GLOBALS["lang"]['Company'] = 'कंपनी';

$GLOBALS["lang"]['Complete these steps.'] = 'इन चरणों को पूरा करें।';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'हमले की जटिलता (कम या उच्च)।';

$GLOBALS["lang"]['Component Table'] = 'घटक तालिका';

$GLOBALS["lang"]['Components (All Devices)'] = 'अवयव (सभी उपकरण)';

$GLOBALS["lang"]['Compute'] = 'समझौता';

$GLOBALS["lang"]['Condition'] = 'शर्त';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'जोखिम मूल्यांकन करना';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'जागरूकता और प्रशिक्षण कार्यक्रम';

$GLOBALS["lang"]['Conduct management review meetings'] = 'प्रबंधन समीक्षा बैठक';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'नियमित निगरानी लेखा परीक्षा (आमतौर पर वार्षिक) का संचालन करें';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'दो चरणों में एक मान्यता प्राप्त शरीर द्वारा आयोजित';

$GLOBALS["lang"]['Config'] = 'कन्फिगर';

$GLOBALS["lang"]['Config Default, currently '] = 'डिफ़ॉल्ट कॉन्फ़िगर करें, वर्तमान में ';

$GLOBALS["lang"]['config_file'] = 'कन्फिगर फाइल';

$GLOBALS["lang"]['Config File'] = 'कन्फिगर फाइल';

$GLOBALS["lang"]['config_manager_error_code'] = 'कन्फिगर प्रबंधक त्रुटि कोड';

$GLOBALS["lang"]['Config Manager Error Code'] = 'कन्फिगर प्रबंधक त्रुटि कोड';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'विन्यास योग्य रोल आधारित एक्सेस कंट्रोल (RBAC)';

$GLOBALS["lang"]['configuration'] = 'विन्यास';

$GLOBALS["lang"]['Configuration'] = 'विन्यास';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'कॉन्फ़िगरेशन चेंज डिटेक्शन और रिपोर्टिंग';

$GLOBALS["lang"]['Configure'] = 'कॉन्फ़िगर करना';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'एक अनुसूची पर ऑडिट करने के लिए एजेंट सर्वर-साइड को कॉन्फ़िगर करें';

$GLOBALS["lang"]['Congo'] = 'कांगो';

$GLOBALS["lang"]['Congo the'] = 'कांगो';

$GLOBALS["lang"]['Connected To'] = 'कनेक्ट';

$GLOBALS["lang"]['connection'] = 'कनेक्शन';

$GLOBALS["lang"]['Connection'] = 'कनेक्शन';

$GLOBALS["lang"]['Connection Options'] = 'कनेक्शन विकल्प';

$GLOBALS["lang"]['connection_status'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['Connection Status'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['connections'] = 'कनेक्शन';

$GLOBALS["lang"]['Connections'] = 'कनेक्शन';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'फ़िल्टर पर विचार करें पोर्ट्स ओपन';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'खुले में विचार करें पोर्ट्स ओपन';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'परामर्श, कार्यान्वयन और अन्य सेवाओं के माध्यम से उपलब्ध हैं';

$GLOBALS["lang"]['contact'] = 'संपर्क';

$GLOBALS["lang"]['Contact'] = 'संपर्क';

$GLOBALS["lang"]['contact_name'] = 'संपर्क नाम';

$GLOBALS["lang"]['Contact Name'] = 'संपर्क नाम';

$GLOBALS["lang"]['contained_in'] = 'में निर्मित';

$GLOBALS["lang"]['Contained In'] = 'में निर्मित';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'एक JSON ऑब्जेक्ट जुड़े विजेट्स और उनके पदों का विवरण देता है।';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'उन क्षेत्रों में शामिल हैं जो निर्धारित करते हैं कि हमें ssh, snmp और wmi खोज विकल्पों का उपयोग करना चाहिए। एक JSON ऑब्जेक्ट।';

$GLOBALS["lang"]['Context & Leadership'] = 'संदर्भ और नेतृत्व';

$GLOBALS["lang"]['Context Engine ID'] = 'संदर्भ इंजन आईडी';

$GLOBALS["lang"]['Context Name'] = 'संदर्भ नाम';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'लगातार ISMS में सुधार';

$GLOBALS["lang"]['contractual_obligations'] = 'संविदात्मक दायित्व';

$GLOBALS["lang"]['Contractual Obligations'] = 'संविदात्मक दायित्व';

$GLOBALS["lang"]['Cook Islands'] = 'कुक द्वीपसमूह';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'एक लेखा परीक्षा परिणाम कॉपी और पेस्ट करें';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'नीचे दिए गए फोरमों में कॉपी और पेस्ट करें, ओपन-ऑडिट का एक अन्य उदाहरण या कहीं और आपको इस मद को प्रदान करने की आवश्यकता है।';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'कॉपी करें <i>आवेदन ID</i> फ़ील्ड और इसे ओपन-ऑडआईटी में पेस्ट करें <i>ग्राहक ID</i> नई विधि के लिए क्षेत्र।';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'कॉपी करें <i>ग्राहक ID</i> इसे ओपन-ऑडिट में पेस्ट करें <i>ग्राहक ID</i> क्षेत्र।<br/>यदि कोई रहस्य नहीं है, तो क्लिक करें <i>नया रहस्य</i>इसके बाद, मूल्य की प्रतिलिपि और इसे ओपन-ऑडिट में पेस्ट करें <i>ग्राहक गुप्त</i> क्षेत्र।';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'मूल्य को कॉपी करें और इसे ओपन-ऑडिट फॉर्म में पेस्ट करें <i>ग्राहक गुप्त</i> क्षेत्र।';

$GLOBALS["lang"]['core_count'] = 'कोर गणना';

$GLOBALS["lang"]['Core Count'] = 'कोर गणना';

$GLOBALS["lang"]['Cores'] = 'कोर';

$GLOBALS["lang"]['cost_center'] = 'लागत केंद्र';

$GLOBALS["lang"]['Cost Center'] = 'लागत केंद्र';

$GLOBALS["lang"]['cost_code'] = 'लागत कोड';

$GLOBALS["lang"]['Cost Code'] = 'लागत कोड';

$GLOBALS["lang"]['Costa Rica'] = 'कोस्टा रिका';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'गणना';

$GLOBALS["lang"]['Count'] = 'गणना';

$GLOBALS["lang"]['country'] = 'देश';

$GLOBALS["lang"]['Country'] = 'देश';

$GLOBALS["lang"]['country_code'] = 'कंट्री कोड';

$GLOBALS["lang"]['Country Code'] = 'कंट्री कोड';

$GLOBALS["lang"]['cpu_count'] = 'Cpu गिनती';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu गिनती';

$GLOBALS["lang"]['Create'] = 'बनाना';

$GLOBALS["lang"]['Create Example Devices'] = 'उदाहरण उपकरण';

$GLOBALS["lang"]['create_external_count'] = 'बाह्य गणना';

$GLOBALS["lang"]['Create External Count'] = 'बाह्य गणना';

$GLOBALS["lang"]['create_external_from_internal'] = 'आंतरिक से बाह्य बनाएं';

$GLOBALS["lang"]['Create External From Internal'] = 'आंतरिक से बाह्य बनाएं';

$GLOBALS["lang"]['Create File'] = 'फ़ाइल बनाना';

$GLOBALS["lang"]['Create Geocode'] = 'जियोकोड';

$GLOBALS["lang"]['create_internal_count'] = 'आंतरिक गणना';

$GLOBALS["lang"]['Create Internal Count'] = 'आंतरिक गणना';

$GLOBALS["lang"]['create_internal_from_external'] = 'बाह्य से आंतरिक बनाएँ';

$GLOBALS["lang"]['Create Internal From External'] = 'बाह्य से आंतरिक बनाएँ';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-Audit से NMIS उपकरण बनाएं';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'ओपन-ऑडिट बनाएं उपकरण ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'ओपन-ऑडिट बनाएं NMIS से उपकरण';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'उदाहरण उपकरण के लिए बेसलाइन बनाएं';

$GLOBALS["lang"]['Create a Discovery'] = 'डिस्कवरी बनाएँ';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'प्रयोज्यता (SoA) का विवरण बनाएँ';

$GLOBALS["lang"]['created_by'] = 'द्वारा निर्मित';

$GLOBALS["lang"]['Created By'] = 'द्वारा निर्मित';

$GLOBALS["lang"]['created_date'] = 'तारीख';

$GLOBALS["lang"]['Created Date'] = 'तारीख';

$GLOBALS["lang"]['Creating'] = 'बनाना';

$GLOBALS["lang"]['Creating Credentials'] = 'क्रेडेंशियल बनाना';

$GLOBALS["lang"]['Creating Device'] = 'उपकरण बनाना';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'खोज करना स्कैन विकल्प प्रविष्टि';

$GLOBALS["lang"]['Creating a Query'] = 'एक क्वेरी बनाना';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'समूह के लिए SQL विवरण बनाना';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'क्वेरीज़ के लिए SQL विवरण बनाना';

$GLOBALS["lang"]['Creating an Integration'] = 'एकीकरण बनाना';

$GLOBALS["lang"]['creator'] = 'निर्माता';

$GLOBALS["lang"]['Creator'] = 'निर्माता';

$GLOBALS["lang"]['credential'] = 'क्रेज़ी';

$GLOBALS["lang"]['Credential'] = 'क्रेज़ी';

$GLOBALS["lang"]['Credentials'] = 'परिचय पत्र';

$GLOBALS["lang"]['Credentials Client ID'] = 'क्रेडेंशियल क्लाइंट ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'क्रेडेंशियल सदस्यता आईडी';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'क्रेडेंशियल में संग्रहीत हैं <i>credentials</i> डेटाबेस तालिका। वास्तविक क्रेडेंशियल जानकारी भंडारण में एन्क्रिप्टेड है। जब एक डिस्कवरी चली जाती है, तो एक उपकरण में डेटाबेस से पुनः प्राप्त अपने विशिष्ट क्रेडेंशियल होते हैं, डिक्रिप्टेड और परीक्षण किया जाता है। यदि ये विफल हो जाते हैं तो क्रेडेंशियल की सूची को पुनः प्राप्त किया जाता है, डिक्रिप्ट किया जाता है और फिर पहले काम करने वाले क्रेडेंशियल के साथ शुरू होने वाले डिवाइस के खिलाफ परीक्षण किया जाता है। डिवाइस विशिष्ट क्रेडेंशियल एक व्यक्तिगत डिवाइस स्तर पर संग्रहीत किए जाते हैं <i>credential</i> तालिका (नोट - नहीं <i>एस</i> तालिका नाम में). एसएसएच कुंजी एसएसएच उपयोगकर्ता नाम / पासवर्ड से पहले परीक्षण किया जाता है। जब एसएसएच परीक्षण किया जाता है, तो क्रेडेंशियल को सूडो के साथ काम करने या रूट होने के रूप में भी चिह्नित किया जाएगा।';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'क्रेडेंशियल में कुछ अलग-अलग प्रकारों में से एक हो सकता है - snmp v.1 / v.2, snmp v.3, ssh, ssh कुंजी, विंडोज़ सभी कार्यान्वित किए जाते हैं। CAVEAT - ssh कुंजी अभी तक विंडोज ओपन-ऑडिट सर्वर के लिए लागू नहीं हैं।';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'अमेज़न AWS के लिए क्रेडेंशियल क्लाउड डिस्कवरी में उपयोग किया जाता है';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoft के लिए क्रेडेंशियल Azure क्लाउड डिस्कवरी में इस्तेमाल किया';

$GLOBALS["lang"]['Critical'] = 'गंभीर';

$GLOBALS["lang"]['criticality'] = 'गंभीरता';

$GLOBALS["lang"]['Criticality'] = 'गंभीरता';

$GLOBALS["lang"]['Croatia'] = 'यूनानी';

$GLOBALS["lang"]['Cuba'] = 'क्यूबा';

$GLOBALS["lang"]['current'] = 'वर्तमान';

$GLOBALS["lang"]['Current'] = 'वर्तमान';

$GLOBALS["lang"]['Current Discovery Processes'] = 'वर्तमान खोज प्रक्रियाएं';

$GLOBALS["lang"]['Current date & time is '] = 'वर्तमान तारीख और समय है ';

$GLOBALS["lang"]['Currently Installed'] = 'वर्तमान में स्थापित';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'वर्तमान में समर्थित प्रकार हैं <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> या <code>windows</code>।';

$GLOBALS["lang"]['Custom Fields'] = 'कस्टम फील्ड';

$GLOBALS["lang"]['Custom TCP Ports'] = 'कस्टम टीसीपी पोर्ट';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'कस्टम टीसीपी पोर्ट। किसी भी विशिष्ट बंदरगाह जिसे हम शीर्ष टीसीपी पोर्ट्स के अलावा स्कैन करते हैं। कॉमा सेपरेटेड, कोई जगह नहीं।';

$GLOBALS["lang"]['Custom UDP Ports'] = 'कस्टम UDP पोर्ट';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'कस्टम UDP पोर्ट किसी भी विशिष्ट बंदरगाह जिसे हम शीर्ष UDP पोर्ट्स के अलावा स्कैन करते हैं। कॉमा सेपरेटेड, कोई जगह नहीं।';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'डिस्कवरी प्रति अनुकूलनीय स्कैनिंग विकल्प';

$GLOBALS["lang"]['Cve'] = 'सीवे';

$GLOBALS["lang"]['Cyprus'] = 'साइप्रस';

$GLOBALS["lang"]['Czech'] = 'चेक';

$GLOBALS["lang"]['Czech Republic'] = 'चेक गणराज्य';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'डीएन खाता (वैकल्पिक)';

$GLOBALS["lang"]['DN Password (optional)'] = 'डीएन पासवर्ड (वैकल्पिक)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS होस्टनाम';

$GLOBALS["lang"]['Danish'] = 'डैनिश';

$GLOBALS["lang"]['dashboard_id'] = 'डैशबोर्ड ID';

$GLOBALS["lang"]['Dashboard ID'] = 'डैशबोर्ड ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'डैशबोर्ड विजेट';

$GLOBALS["lang"]['dashboards'] = 'डैशबोर्ड';

$GLOBALS["lang"]['Dashboards'] = 'डैशबोर्ड';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'डैशबोर्ड्स और विजेट्स एंटरप्राइज लाइसेंस ग्राहकों को इन संग्रहों को बनाने, पढ़ने, अद्यतन करने और हटाने की अनुमति देते हैं ताकि यह सुनिश्चित किया जा सके कि उनका होमपेज ठीक वही है जिसे उन्हें देखने की आवश्यकता है। इतना ही नहीं, लेकिन एक उपयोगकर्ता अपने स्वयं के होमपेज के रूप में दिए गए डैशबोर्ड को सेट करने में सक्षम है। प्रत्येक व्यक्ति को उसी होमपेज (डैशबोर्ड) का उपयोग करने की आवश्यकता नहीं है, न ही उस डैशबोर्ड पर एक ही विजेट। पेशेवर लाइसेंस प्राप्त ग्राहक अपने स्वयं के होमपेज के रूप में सेट करने के लिए दो पूर्वनिर्धारित डैशबोर्डों के बीच चयन कर सकते हैं।';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'डैशबोर्ड प्रदान करते हैं <i>एक नज़र में</i> अपने नेटवर्क पर होने वाले परिवर्तनों के साथ-साथ उपकरण के प्रकारों, निर्माताओं और ऑपरेटिंग सिस्टम और बहुत कुछ के लिए त्वरित लिंक प्रदान करने के लिए महत्वपूर्ण दृश्यता।';

$GLOBALS["lang"]['Dashboards use'] = 'डैशबोर्ड का उपयोग';

$GLOBALS["lang"]['Data'] = 'डेटा';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'डेटा एक्सपोर्ट - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'डेटा प्रतिधारण';

$GLOBALS["lang"]['Database'] = 'डेटाबेस';

$GLOBALS["lang"]['db_action'] = 'डेटाबेस कार्रवाई';

$GLOBALS["lang"]['Database Action'] = 'डेटाबेस कार्रवाई';

$GLOBALS["lang"]['db_column'] = 'डेटाबेस';

$GLOBALS["lang"]['Database Column'] = 'डेटाबेस';

$GLOBALS["lang"]['Database Definition'] = 'डेटाबेस परिभाषा';

$GLOBALS["lang"]['db_row'] = 'डेटाबेस';

$GLOBALS["lang"]['Database Row'] = 'डेटाबेस';

$GLOBALS["lang"]['Database Schema'] = 'डेटाबेस स्कीमा';

$GLOBALS["lang"]['Database Server Discovery'] = 'डेटाबेस सर्वर डिस्कवरी';

$GLOBALS["lang"]['db_table'] = 'डेटाबेस तालिका';

$GLOBALS["lang"]['Database Table'] = 'डेटाबेस तालिका';

$GLOBALS["lang"]['Database Tables'] = 'डेटाबेस टेबल';

$GLOBALS["lang"]['dataset_title'] = 'डेटासेट शीर्षक';

$GLOBALS["lang"]['Dataset Title'] = 'डेटासेट शीर्षक';

$GLOBALS["lang"]['date'] = 'तारीख';

$GLOBALS["lang"]['Date'] = 'तारीख';

$GLOBALS["lang"]['Date D-M-Y'] = 'तारीख D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'तारीख M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'अब तारीख';

$GLOBALS["lang"]['date_of_manufacture'] = 'निर्माण की तारीख';

$GLOBALS["lang"]['Date Of Manufacture'] = 'निर्माण की तारीख';

$GLOBALS["lang"]['date_paid'] = 'तारीख भुगतान';

$GLOBALS["lang"]['Date Paid'] = 'तारीख भुगतान';

$GLOBALS["lang"]['date_received'] = 'तारीख प्राप्त';

$GLOBALS["lang"]['Date Received'] = 'तारीख प्राप्त';

$GLOBALS["lang"]['Date Y-M-D'] = 'तारीख Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'तारीख और समय जब CVE अद्यतन किया गया था।';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'तारीख और समय जब CVE प्रकाशित किया गया था।';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'तारीख जब CVE प्रकाशित किया गया था।';

$GLOBALS["lang"]['DateTime Now'] = 'अभी तारीख';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'समय Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'महीना';

$GLOBALS["lang"]['Day Of Month'] = 'महीना';

$GLOBALS["lang"]['day_of_week'] = 'सप्ताह';

$GLOBALS["lang"]['Day Of Week'] = 'सप्ताह';

$GLOBALS["lang"]['Day of Month'] = 'महीना';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'डेबग';

$GLOBALS["lang"]['Debugging'] = 'डिबगिंग';

$GLOBALS["lang"]['Debugging a Script'] = 'एक स्क्रिप्ट खारिज';

$GLOBALS["lang"]['December'] = 'दिसम्बर';

$GLOBALS["lang"]['Decommission'] = 'छूट';

$GLOBALS["lang"]['Default'] = 'डिफ़ॉल्ट';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'डिफ़ॉल्ट प्रमाणीकरण स्तर - कनेक्ट करने के लिए';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'डिफ़ॉल्ट प्रतिरूपण स्तर - पहचान करने के लिए सेट';

$GLOBALS["lang"]['Default Items'] = 'डिफ़ॉल्ट आइटम';

$GLOBALS["lang"]['Default Orgs Groups'] = 'डिफ़ॉल्ट संगठन समूह';

$GLOBALS["lang"]['Default Roles Groups'] = 'डिफ़ॉल्ट रोल्स समूह';

$GLOBALS["lang"]['Default Value'] = 'डिफ़ॉल्ट मान';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'डिफ़ॉल्ट of 389. आम तौर पर 636 सक्रिय निर्देशिका LDAPS के लिए इस्तेमाल किया जाता है।';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'डिफ़ॉल्ट <code>3</code> LDAP और सक्रिय निर्देशिका के लिए।';

$GLOBALS["lang"]['Defaults'] = 'डिफ़ॉल्ट';

$GLOBALS["lang"]['Deferred'] = 'स्थगित';

$GLOBALS["lang"]['Define project scope and objectives'] = 'परियोजना के दायरे और उद्देश्यों को परिभाषित करें';

$GLOBALS["lang"]['Define the ISMS scope'] = 'ISMS के दायरे को परिभाषित करें';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'संगठन (आंतरिक / बाहरी मुद्दों) के संदर्भ को परिभाषित करें';

$GLOBALS["lang"]['delay_minutes'] = 'विलंब मिनट';

$GLOBALS["lang"]['Delay Minutes'] = 'विलंब मिनट';

$GLOBALS["lang"]['Delete'] = 'डिलीट';

$GLOBALS["lang"]['Delete Example Devices'] = 'उदाहरण उपकरण';

$GLOBALS["lang"]['delete_external_from_internal'] = 'बाहरी से आंतरिक';

$GLOBALS["lang"]['Delete External From Internal'] = 'बाहरी से आंतरिक';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS ओपन-ऑडिट में नहीं होने पर उपकरण';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'एक {collection} प्रविष्टि को हटा दें।';

$GLOBALS["lang"]['Delete from Application'] = 'आवेदन से हटाएं';

$GLOBALS["lang"]['Delete from Cluster'] = 'क्लस्टर से हटाएं';

$GLOBALS["lang"]['Denmark'] = 'डेनमार्क';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'उपयोगकर्ता द्वारा लेखा परीक्षा या मैन्युअल रूप से सेट द्वारा प्राप्त किया गया।';

$GLOBALS["lang"]['Derived by audit.'] = 'लेखा परीक्षा से वंचित।';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'से वंचित <code>rack_devices.device_id</code>।';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'से वंचित <code>rack_devices.rack_id</code>।';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'कलेक्टर खोज से वंचित।';

$GLOBALS["lang"]['Derived from OS Name.'] = 'OS नाम से लिया गया।';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'क्लाउड खोज से वंचित।';

$GLOBALS["lang"]['Derived from device audits.'] = 'डिवाइस ऑडिट से वंचित।';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'डिवाइस प्रकार और ओएस से अलग।';

$GLOBALS["lang"]['Derived from discovery.'] = 'खोज से वंचित।';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'उस क्रम में होस्टनाम, sysName, dns होस्टनाम और आईपी से प्राप्त हुआ।';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'पूर्णांक गंभीरता से लिया गया।';

$GLOBALS["lang"]['description'] = 'विवरण';

$GLOBALS["lang"]['Description'] = 'विवरण';

$GLOBALS["lang"]['destination'] = 'गंतव्य';

$GLOBALS["lang"]['Destination'] = 'गंतव्य';

$GLOBALS["lang"]['detail'] = 'विस्तार';

$GLOBALS["lang"]['Detail'] = 'विस्तार';

$GLOBALS["lang"]['Details'] = 'विवरण';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'आमतौर पर इस साइट पर कौन संपर्क करने योग्य है, इसका विवरण।';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'अक्सर आप डेटाबेस के खिलाफ बेसलाइन चेक चलाने और एक अनुसूचित रिपोर्ट बनाने के लिए कैसे निर्धारित करें';

$GLOBALS["lang"]['Determine risk treatment options'] = 'जोखिम उपचार विकल्प';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'जोखिम उपचार योजना';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'नीतियों, प्रक्रियाओं और नियंत्रण का विकास';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'आवश्यक आई.एस.एम. दस्तावेज़ीकरण (नीति, प्रक्रियाएं, आदि) विकसित करना';

$GLOBALS["lang"]['device'] = 'उपकरण';

$GLOBALS["lang"]['Device'] = 'उपकरण';

$GLOBALS["lang"]['Device Audits'] = 'डिवाइस ऑडिट';

$GLOBALS["lang"]['Device Component Names'] = 'डिवाइस घटक नाम';

$GLOBALS["lang"]['Device ID'] = 'डिवाइस ID';

$GLOBALS["lang"]['device_id'] = 'डिवाइस ID';

$GLOBALS["lang"]['device_id_a'] = 'डिवाइस ID A';

$GLOBALS["lang"]['Device ID A'] = 'डिवाइस ID A';

$GLOBALS["lang"]['device_id_b'] = 'डिवाइस ID B';

$GLOBALS["lang"]['Device ID B'] = 'डिवाइस ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'डिवाइस मिलान नियम';

$GLOBALS["lang"]['Device Name'] = 'डिवाइस का नाम';

$GLOBALS["lang"]['Device Result'] = 'डिवाइस का परिणाम';

$GLOBALS["lang"]['Device Results'] = 'डिवाइस का परिणाम';

$GLOBALS["lang"]['Device Seed'] = 'डिवाइस बीज';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'डिवाइस बीज डिस्कवरी एक अच्छा विकल्प है यदि आप जानते हैं कि आपके नेटवर्क में सबनेट की एक श्रृंखला होती है, लेकिन आप यह सुनिश्चित नहीं कर रहे हैं कि वे क्या हैं। एक स्थानीय रूटर के साथ खोज के बीज और अपनी आंखों से पहले अपने नेटवर्क को खोलना देखें।';

$GLOBALS["lang"]['Device Seed IP'] = 'डिवाइस बीज आईपी';

$GLOBALS["lang"]['Device Status'] = 'डिवाइस की स्थिति';

$GLOBALS["lang"]['Device Types'] = 'डिवाइस प्रकार';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'उपकरण और सॉफ्टवेयर और हार्डवेयर लेखा परीक्षा';

$GLOBALS["lang"]['Device is in the Subnet'] = 'डिवाइस सबनेट में है';

$GLOBALS["lang"]['Devices'] = 'उपकरण';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'उपकरण आवंटित करने के लिए स्थान';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'उपकरण आवंटित करने के लिए स्थान';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'उपकरण संगठन को सौंपा गया';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'उपकरण संगठन को सौंपा गया';

$GLOBALS["lang"]['Devices Audited'] = 'उपकरण लेखा परीक्षित';

$GLOBALS["lang"]['Devices Collection'] = 'उपकरण संग्रह';

$GLOBALS["lang"]['Devices Created in '] = 'उपकरण बनाना ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'उपकरण ओपन-ऑडिट में बनाया गया';

$GLOBALS["lang"]['devices_default_display_columns'] = 'उपकरण डिफ़ॉल्ट डिस्प्ले कॉलम';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'उपकरण डिफ़ॉल्ट डिस्प्ले कॉलम';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'उपकरण पिछले 7 दिनों में स्थापित';

$GLOBALS["lang"]['Devices Found Today'] = 'आज उपकरण';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'कल मिला हुआ उपकरण';

$GLOBALS["lang"]['Devices Missing Information'] = 'उपकरण मिसिंग सूचना';

$GLOBALS["lang"]['Devices Not Audited'] = 'उपकरण ऑडिट नहीं';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'उपकरण नहीं देखा 30 दिन';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'उपकरण नहीं देखा 7 दिन';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'उपकरण नहीं देखा 90 दिन';

$GLOBALS["lang"]['Devices Older Than X'] = 'X से अधिक पुराने उपकरण';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'उपकरण एपीआई के माध्यम से प्राप्त';

$GLOBALS["lang"]['Devices Selected from '] = 'उपकरण से चयनित ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'ओपन-ऑडिट से चयनित उपकरण';

$GLOBALS["lang"]['Devices Updated in '] = 'उपकरण अद्यतन ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-Audit में अद्यतन उपकरण';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'उपकरण बेंचमार्क किया जा रहा है।';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'उपकरण बेंचमार्क नहीं किया जा रहा है।';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'उपकरण बेंचमार्क किया जा सकता है।';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'ओपन-ऑडिट से उपकरण';

$GLOBALS["lang"]['Devices in Running State'] = 'रनिंग स्टेट में उपकरण';

$GLOBALS["lang"]['Devices in Stopped State'] = 'बंद राज्य में उपकरण';

$GLOBALS["lang"]['Devices in this'] = 'इसमें उपकरण';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'यदि उनकी स्थिति निर्धारित की जाती है तो उपकरण मैच नहीं होंगे <i>हटाना</i>। किसी अन्य स्थिति में मैच होने की अनुमति होगी।';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Expired Warranties';

$GLOBALS["lang"]['Devired from type or OS.'] = 'प्रकार या ओएस से विचलन।';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp सक्षम';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp सक्षम';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp सर्वर';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp सर्वर';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'आदेश सफलतापूर्वक पूरा हो गया और अपेक्षित डेटा वापस कर दिया।';

$GLOBALS["lang"]['direction'] = 'दिशा';

$GLOBALS["lang"]['Direction'] = 'दिशा';

$GLOBALS["lang"]['directory'] = 'निर्देशिका';

$GLOBALS["lang"]['Directory'] = 'निर्देशिका';

$GLOBALS["lang"]['disabled'] = 'विकलांग';

$GLOBALS["lang"]['Disabled'] = 'विकलांग';

$GLOBALS["lang"]['discard'] = 'डिस्कर्ड';

$GLOBALS["lang"]['Discard'] = 'डिस्कर्ड';

$GLOBALS["lang"]['Discover'] = 'खोज';

$GLOBALS["lang"]['Discoveries'] = 'डिस्कवरी';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'डिस्कवरी क्या ओपन-ऑडिट करता है के बहुत दिल में हैं। आप कैसे जानते हैं <i>Whats On Your Network?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'डिस्कवरी प्रविष्टियां हैं जो आपको हर बार उस नेटवर्क के विवरण को दर्ज किए बिना एक क्लिक में नेटवर्क पर खोज करने में सक्षम बनाती हैं।';

$GLOBALS["lang"]['Discovery'] = 'डिस्कवरी';

$GLOBALS["lang"]['Discovery Change Logs'] = 'डिस्कवरी चेंज लॉग';

$GLOBALS["lang"]['Discovery Data Retention'] = 'डिस्कवरी डेटा रिटेंशन';

$GLOBALS["lang"]['discovery_id'] = 'डिस्कवरी ID';

$GLOBALS["lang"]['Discovery ID'] = 'डिस्कवरी ID';

$GLOBALS["lang"]['Discovery Issues'] = 'खोज मुद्दे';

$GLOBALS["lang"]['discovery_log'] = 'डिस्कवरी लॉग';

$GLOBALS["lang"]['Discovery Log'] = 'डिस्कवरी लॉग';

$GLOBALS["lang"]['Discovery Match Options'] = 'डिस्कवरी मैच विकल्प';

$GLOBALS["lang"]['Discovery Name'] = 'डिस्कवरी नाम';

$GLOBALS["lang"]['Discovery Options'] = 'खोज विकल्प';

$GLOBALS["lang"]['Discovery Queue Count'] = 'डिस्कवरी कतार गणना';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'खोज कतार सीमा';

$GLOBALS["lang"]['discovery_run'] = 'डिस्कवरी रन';

$GLOBALS["lang"]['Discovery Run'] = 'डिस्कवरी रन';

$GLOBALS["lang"]['discovery_scan_options'] = 'डिस्कवरी स्कैन विकल्प';

$GLOBALS["lang"]['Discovery Scan Options'] = 'डिस्कवरी स्कैन विकल्प';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'डिस्कवरी स्कैन विकल्प सिर्फ एक अन्य आइटम संग्रह हैं। एंटरप्राइज़ उपयोगकर्ता आवश्यकतानुसार प्रविष्टियां बना सकते हैं, पढ़ सकते हैं, अद्यतन कर सकते हैं और हटा सकते हैं। पेशेवर उपयोगकर्ता सभी प्रविष्टियों को पढ़ सकते हैं, लेकिन नई प्रविष्टियां नहीं बना सकते हैं, मौजूदा प्रविष्टियों को अपडेट कर सकते हैं या प्रविष्टियों को हटा सकते हैं। सामुदायिक उपयोगकर्ताओं के पास कोई जीयूआई नहीं है जो इस संग्रह तक पहुंच की अनुमति देता है।';

$GLOBALS["lang"]['Discovery Scan Types'] = 'डिस्कवरी स्कैन प्रकार';

$GLOBALS["lang"]['Discovery Support'] = 'डिस्कवरी समर्थन';

$GLOBALS["lang"]['Discovery has stopped working'] = 'डिस्कवरी ने काम करना बंद कर दिया है';

$GLOBALS["lang"]['disk'] = 'डिस्क';

$GLOBALS["lang"]['Disk'] = 'डिस्क';

$GLOBALS["lang"]['display_version'] = 'प्रदर्शन संस्करण';

$GLOBALS["lang"]['Display Version'] = 'प्रदर्शन संस्करण';

$GLOBALS["lang"]['Display in Menu'] = 'मेनू में प्रदर्शित';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'POST /{collection} को प्रस्तुत करने के लिए एक मानक वेब फॉर्म प्रदर्शित करता है।';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST/{collection}/import को जमा करने के लिए एक मानक वेब फॉर्म प्रदर्शित करता है।';

$GLOBALS["lang"]['district'] = 'जिला';

$GLOBALS["lang"]['District'] = 'जिला';

$GLOBALS["lang"]['Djibouti'] = 'जिबूती';

$GLOBALS["lang"]['dns'] = 'डीएनएस';

$GLOBALS["lang"]['Dns'] = 'डीएनएस';

$GLOBALS["lang"]['dns_domain'] = 'DNS डोमेन';

$GLOBALS["lang"]['Dns Domain'] = 'DNS डोमेन';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns डोमेन Reg सक्षम';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns डोमेन Reg सक्षम';

$GLOBALS["lang"]['dns_fqdn'] = 'डीएनएस Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'डीएनएस Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'डीएनएस होस्ट का नाम';

$GLOBALS["lang"]['Dns Host Name'] = 'डीएनएस होस्ट का नाम';

$GLOBALS["lang"]['dns_hostname'] = 'डीएनएस होस्टनाम';

$GLOBALS["lang"]['Dns Hostname'] = 'डीएनएस होस्टनाम';

$GLOBALS["lang"]['dns_server'] = 'DNS सर्वर';

$GLOBALS["lang"]['Dns Server'] = 'DNS सर्वर';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'अपने सभी प्रलेखन के लिए ओपन-ऑडिट विकि के बारे में मत भूलना।';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'यह मत भूलो कि विकिपीडिया पर प्रलेखन का एक पर्वत है';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'इन टीसीपी बंदरगाहों को स्कैन न करें।';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'इन UDP बंदरगाहों को स्कैन न करें।';

$GLOBALS["lang"]['Do not show me again'] = 'मुझे फिर से दिखाना';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'क्या आपके पास इस कॉन्फ़िगरेशन का सही उदाहरण है? शायद एक प्रयोगशाला पर्यावरण या एक कार्य केंद्र में स्थित एक उपकरण जिसे आप क्लोन वर्कस्टेशन वीएम से उपयोग करते हैं।';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'क्या आप सुरक्षित परिवहन (LDAPS) या नियमित रूप से अनक्रिप्टेड LDAP का उपयोग करना चाहते हैं।';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'क्या आप बाईं ओर मानक साइडबार देखना चाहते हैं।';

$GLOBALS["lang"]['documentation'] = 'दस्तावेज़ीकरण';

$GLOBALS["lang"]['Documentation'] = 'दस्तावेज़ीकरण';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'किसी विशेष संग्रह के बारे में प्रलेखन।';

$GLOBALS["lang"]['Does Not Equal'] = 'समान नहीं है';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'क्या लाइसेंस बच्चे संगठन पर लागू होता है।';

$GLOBALS["lang"]['domain'] = 'डोमेन';

$GLOBALS["lang"]['Domain'] = 'डोमेन';

$GLOBALS["lang"]['domain_controller_address'] = 'डोमेन नियंत्रक पता';

$GLOBALS["lang"]['Domain Controller Address'] = 'डोमेन नियंत्रक पता';

$GLOBALS["lang"]['domain_controller_name'] = 'डोमेन नियंत्रक नाम';

$GLOBALS["lang"]['Domain Controller Name'] = 'डोमेन नियंत्रक नाम';

$GLOBALS["lang"]['domain_role'] = 'डोमेन भूमिका';

$GLOBALS["lang"]['Domain Role'] = 'डोमेन भूमिका';

$GLOBALS["lang"]['domain_short'] = 'डोमेन शॉर्ट';

$GLOBALS["lang"]['Domain Short'] = 'डोमेन शॉर्ट';

$GLOBALS["lang"]['Dominica'] = 'हिन्दी';

$GLOBALS["lang"]['Dominican Republic'] = 'डोमिनिकन गणराज्य';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'मैं क्या कर रहा हूँ? कोई फिल्टर और कस्टम टेबल में शामिल होने की क्षमता नहीं है।';

$GLOBALS["lang"]['Download'] = 'डाउनलोड';

$GLOBALS["lang"]['Download a File'] = 'फ़ाइल डाउनलोड करें';

$GLOBALS["lang"]['Download a file from URL'] = 'URL से फ़ाइल डाउनलोड करें';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'test_windows_client.vbs स्क्रिप्ट को सीधे डाउनलोड करें';

$GLOBALS["lang"]['Download your updated version from'] = 'अपने अद्यतन संस्करण से डाउनलोड करें';

$GLOBALS["lang"]['driver'] = 'चालक';

$GLOBALS["lang"]['Driver'] = 'चालक';

$GLOBALS["lang"]['duplex'] = 'डुप्लेक्स';

$GLOBALS["lang"]['Duplex'] = 'डुप्लेक्स';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'डुप्लिकेट उपकरण / लापता उपकरण';

$GLOBALS["lang"]['duration'] = 'अवधि';

$GLOBALS["lang"]['Duration'] = 'अवधि';

$GLOBALS["lang"]['Dutch'] = 'डच';

$GLOBALS["lang"]['ESXi'] = 'ESXI';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'प्रत्येक IP को खोजे गए विकल्पों के साथ स्कैन किया जाता है (देखें डिस्कवरी स्कैन विकल्प और डिस्कवरी - विकिपीडिया पर प्रोफेशनल बनाम एंटरप्राइज). सामान्य तौर पर, Nmap 22 (ssh), 135 (wmi), 62078 (iPhone) और UDP 161 (snmp) बंदरगाहों के लिए परीक्षण करेगा। अगर 22, 135 या 161 जवाब देने के लिए क्रेडेंशियल सूची को पुनः प्राप्त किया जाता है और प्रत्येक क्रेडेंशियल को बदले में परीक्षण किया जाता है। पहले काम करने वाले क्रेडेंशियल का उपयोग सीधे डिवाइस से आगे के प्रश्नों के लिए किया जाता है। ध्यान दें - यदि किसी उपकरण को पहले खोजा गया है और इसमें क्रेडेंशियल काम करना है, तो उन क्रेडेंशियलों का पहले परीक्षण किया जाता है। यदि वे असफल हो जाते हैं तो अन्य क्रेडेंशियल का प्रयास किया जाता है।';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'प्रत्येक बार एक उपकरण की खोज की जाती है या एक लेखा परीक्षा परिणाम संसाधित किया जाता है, सभी नियमों को डेटाबेस से पुनर्प्राप्त किया जाता है और विशिष्ट डिवाइस की विशेषताओं के खिलाफ चला जाता है। एक समय में एक डिवाइस के खिलाफ नियम चलाने - कहने की कोई सुविधा नहीं है <i>सभी उपकरणों के खिलाफ नियमों को चलाएं<i> या <i>इन उपकरणों के खिलाफ नियमों को चलाएं<i>। एक व्यक्तिगत नियम डिवाइस के एक या अधिक विशेषताओं का परीक्षण करेगा और यदि वे नियम से मेल खाते हैं, तो परिणाम लागू किया जाएगा। कई विशेषताओं का परीक्षण किया जा सकता है। कई विशेषताओं को निर्धारित किया जा सकता है। इसके बारे में सोचो अगर यह, फिर ओपन-ऑडिट के लिए यह प्रणाली।</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'प्रत्येक बार उस नेटवर्क के विवरण को दर्ज किए बिना आसानी से एक क्लिक में नेटवर्क पर एक खोज चलाएं।';

$GLOBALS["lang"]['Ecuador'] = 'इक्वाडोर';

$GLOBALS["lang"]['Edit'] = 'संपादित करें';

$GLOBALS["lang"]['edit_log'] = 'लॉग इन करें';

$GLOBALS["lang"]['Edit Log'] = 'लॉग इन करें';

$GLOBALS["lang"]['editable'] = 'संपादन';

$GLOBALS["lang"]['Editable'] = 'संपादन';

$GLOBALS["lang"]['edited_by'] = 'द्वारा संपादित';

$GLOBALS["lang"]['Edited By'] = 'द्वारा संपादित';

$GLOBALS["lang"]['edited_date'] = 'संपादित तिथि';

$GLOBALS["lang"]['Edited Date'] = 'संपादित तिथि';

$GLOBALS["lang"]['edition'] = 'संस्करण';

$GLOBALS["lang"]['Edition'] = 'संस्करण';

$GLOBALS["lang"]['Egypt'] = 'मिस्र';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'या तो अमेज़न, गूगल या माइक्रोसॉफ्ट।';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'कोई भी या मौजूद नहीं है।

<strong>कोई नहीं</strong> - सफल हमला कमजोर प्रणाली की तैनाती और निष्पादन की स्थिति पर निर्भर नहीं करता है। हमलावर शून्यता तक पहुंचने में सक्षम होने की उम्मीद कर सकता है और शून्यता के सभी या अधिकांश उदाहरणों के तहत शोषण को निष्पादित कर सकता है।

<strong>वर्तमान</strong> - सफल हमला असुरक्षित प्रणाली की विशिष्ट तैनाती और निष्पादन की स्थिति की उपस्थिति पर निर्भर करता है जो हमले को सक्षम बनाता है। इनमें शामिल हैं:

एक नस्ल की स्थिति सफलतापूर्वक कमजोरी का फायदा उठाने के लिए जीती जानी चाहिए। हमले की सफलता निष्पादन की स्थिति पर होती है जो हमलावर के पूर्ण नियंत्रण में नहीं होती है। सफल होने से पहले हमले को एकल लक्ष्य के खिलाफ कई बार लॉन्च करने की आवश्यकता हो सकती है।

नेटवर्क इंजेक्शन। हमलावर को लक्ष्य के बीच तार्किक नेटवर्क पथ में खुद को इंजेक्ट करना चाहिए और पीड़ित द्वारा अनुरोध किए गए संसाधन (उदाहरण के लिए कमजोरियों को ऑन-पैथ हमलावर की आवश्यकता होती है)।';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'ईमेल';

$GLOBALS["lang"]['Email'] = 'ईमेल';

$GLOBALS["lang"]['email_address'] = 'ईमेल पता';

$GLOBALS["lang"]['Email Address'] = 'ईमेल पता';

$GLOBALS["lang"]['Email Configuration'] = 'ईमेल कॉन्फ़िगरेशन';

$GLOBALS["lang"]['Email to send test to'] = 'ईमेल भेजने के लिए';

$GLOBALS["lang"]['Enable'] = 'सक्षम';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'इस कंप्यूटर पर वितरित COM सक्षम करें - विकल्प की जांच की जाती है';

$GLOBALS["lang"]['enabled'] = 'सक्षम';

$GLOBALS["lang"]['Enabled'] = 'सक्षम';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'विंडोज के तहत फ़ीचर को सक्षम करना';

$GLOBALS["lang"]['encryption'] = 'एन्क्रिप्शन';

$GLOBALS["lang"]['Encryption'] = 'एन्क्रिप्शन';

$GLOBALS["lang"]['encryption_method'] = 'एन्क्रिप्शन विधि';

$GLOBALS["lang"]['Encryption Method'] = 'एन्क्रिप्शन विधि';

$GLOBALS["lang"]['encryption_status'] = 'एन्क्रिप्शन स्थिति';

$GLOBALS["lang"]['Encryption Status'] = 'एन्क्रिप्शन स्थिति';

$GLOBALS["lang"]['end_date'] = 'अंतिम तिथि';

$GLOBALS["lang"]['End Date'] = 'अंतिम तिथि';

$GLOBALS["lang"]['End OF Life Product ID'] = 'जीवन उत्पाद ID';

$GLOBALS["lang"]['end_of_life'] = 'जीवन का अंत';

$GLOBALS["lang"]['End Of Life'] = 'जीवन का अंत';

$GLOBALS["lang"]['end_of_production'] = 'उत्पादन का अंत';

$GLOBALS["lang"]['End Of Production'] = 'उत्पादन का अंत';

$GLOBALS["lang"]['end_of_service'] = 'सेवा का अंत';

$GLOBALS["lang"]['End Of Service'] = 'सेवा का अंत';

$GLOBALS["lang"]['end_of_service_life'] = 'सेवा जीवन का अंत';

$GLOBALS["lang"]['End Of Service Life'] = 'सेवा जीवन का अंत';

$GLOBALS["lang"]['Endpoint'] = 'समापन बिंदु';

$GLOBALS["lang"]['English'] = 'अंग्रेज़ी';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'नियामक अनुपालन को बढ़ाता है';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'संवर्धन पूरा हो गया है। CVE पूर्ण मेटाडाटा है और स्थिर माना जाता है।';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'सुनिश्चित करें कि प्रलेखन नियंत्रित और सुलभ हो';

$GLOBALS["lang"]['enterprise'] = 'उद्यम';

$GLOBALS["lang"]['Enterprise'] = 'उद्यम';

$GLOBALS["lang"]['Enterprise Private Network'] = 'एंटरप्राइज़ प्राइवेट नेटवर्क';

$GLOBALS["lang"]['Enterprise private network'] = 'एंटरप्राइज़ निजी नेटवर्क';

$GLOBALS["lang"]['Entitlement Type'] = 'पात्रता प्रकार';

$GLOBALS["lang"]['Entra'] = 'इंट्रा';

$GLOBALS["lang"]['environment'] = 'पर्यावरण';

$GLOBALS["lang"]['Environment'] = 'पर्यावरण';

$GLOBALS["lang"]['Equal To'] = 'बराबर';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'बराबर करने के लिए या ग्रेटर से';

$GLOBALS["lang"]['Equal To or Less Than'] = 'बराबर या उससे कम';

$GLOBALS["lang"]['Equals'] = 'समान';

$GLOBALS["lang"]['Equatorial Guinea'] = 'भूमध्यसागरीय गिनी';

$GLOBALS["lang"]['Eritrea'] = 'एरिट्रिया';

$GLOBALS["lang"]['Error'] = 'त्रुटि';

$GLOBALS["lang"]['Error Code'] = 'त्रुटि कोड';

$GLOBALS["lang"]['Esperanto'] = 'एस्परांतो';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'एक परियोजना योजना और समयरेखा स्थापित करें';

$GLOBALS["lang"]['Establish an information security policy'] = 'सूचना सुरक्षा नीति की स्थापना';

$GLOBALS["lang"]['Established'] = 'स्थापित';

$GLOBALS["lang"]['Estonia'] = 'एस्टोनिया';

$GLOBALS["lang"]['Estonian'] = 'एस्टोनियाई';

$GLOBALS["lang"]['Ethernet MAC'] = 'ईथरनेट मैक';

$GLOBALS["lang"]['ethernet_mac'] = 'ईथरनेट मैक';

$GLOBALS["lang"]['Ethernet Mac'] = 'ईथरनेट मैक';

$GLOBALS["lang"]['Ethiopia'] = 'इथोपिया';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'आंतरिक रूप से ISMS का मूल्यांकन करें';

$GLOBALS["lang"]['Every'] = 'हर';

$GLOBALS["lang"]['Every Day'] = 'हर दिन';

$GLOBALS["lang"]['Example'] = 'उदाहरण';

$GLOBALS["lang"]['Example Devices'] = 'उदाहरण';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'उदाहरण के लिए प्रवेश के साथ संगठन चार्ट';

$GLOBALS["lang"]['Example text from'] = 'उदाहरण से पाठ';

$GLOBALS["lang"]['Examples'] = 'उदाहरण';

$GLOBALS["lang"]['Exceptions'] = 'अपवाद';

$GLOBALS["lang"]['exclude'] = 'बहिष्कार';

$GLOBALS["lang"]['Exclude'] = 'बहिष्कार';

$GLOBALS["lang"]['exclude_ip'] = 'IP';

$GLOBALS["lang"]['Exclude IP'] = 'IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP पते को छोड़कर';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'आईपी एड्रेस (व्यक्तिगत आईपी - 192.168.1.20, रेंज - 192.168.1.30-40 या सबनेट - 192.168.1.100/30) को स्कैन किए जाने से सूचीबद्ध किया गया। कॉमा सेपरेटेड, कोई जगह नहीं।';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'टीसीपी पोर्ट को छोड़कर';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp पोर्ट';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp पोर्ट';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP पोर्ट';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp पोर्ट';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp पोर्ट';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'स्कैन किए जाने से सूचीबद्ध किसी भी पोर्ट को छोड़कर। कॉमा सेपरेटेड, कोई जगह नहीं।';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'इन IP पते को Nmap स्कैन करने से बाहर निकालें।';

$GLOBALS["lang"]['Excluded'] = 'Excluded';

$GLOBALS["lang"]['exclusion_reasons'] = 'बहिष्कार कारण';

$GLOBALS["lang"]['Exclusion Reasons'] = 'बहिष्कार कारण';

$GLOBALS["lang"]['executable'] = 'निष्पादन';

$GLOBALS["lang"]['Executable'] = 'निष्पादन';

$GLOBALS["lang"]['executable_id'] = 'निष्पादन योग्य ID';

$GLOBALS["lang"]['Executable ID'] = 'निष्पादन योग्य ID';

$GLOBALS["lang"]['executables'] = 'निष्पादन';

$GLOBALS["lang"]['Executables'] = 'निष्पादन';

$GLOBALS["lang"]['Execute'] = 'निष्पादन';

$GLOBALS["lang"]['Executing'] = 'निष्पादन';

$GLOBALS["lang"]['exemption_reason'] = 'छूट का कारण';

$GLOBALS["lang"]['Exemption Reason'] = 'छूट का कारण';

$GLOBALS["lang"]['Existing Building'] = 'मौजूदा भवन';

$GLOBALS["lang"]['Existing Floor'] = 'मौजूदा मंजिल';

$GLOBALS["lang"]['Existing Room'] = 'मौजूदा कक्ष';

$GLOBALS["lang"]['Existing Row'] = 'मौजूदा पंक्ति';

$GLOBALS["lang"]['expire_date'] = 'समाप्ति तिथि';

$GLOBALS["lang"]['Expire Date'] = 'समाप्ति तिथि';

$GLOBALS["lang"]['expire_minutes'] = 'समाप्ति मिनट';

$GLOBALS["lang"]['Expire Minutes'] = 'समाप्ति मिनट';

$GLOBALS["lang"]['expires'] = 'एक्सपायर';

$GLOBALS["lang"]['Expires'] = 'एक्सपायर';

$GLOBALS["lang"]['expiry_date'] = 'समाप्ति तिथि';

$GLOBALS["lang"]['Expiry Date'] = 'समाप्ति तिथि';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit परिपक्वता';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit परिपक्वता';

$GLOBALS["lang"]['Export'] = 'निर्यात';

$GLOBALS["lang"]['Export by Device'] = 'डिवाइस द्वारा निर्यात';

$GLOBALS["lang"]['Export by Policy'] = 'नीति द्वारा निर्यात';

$GLOBALS["lang"]['Export data to'] = 'डेटा निर्यात करें';

$GLOBALS["lang"]['Exporting a Device'] = 'एक उपकरण का निर्यात करना';

$GLOBALS["lang"]['expose'] = 'एक्सपोजर';

$GLOBALS["lang"]['Expose'] = 'एक्सपोजर';

$GLOBALS["lang"]['External'] = 'बाहरी';

$GLOBALS["lang"]['External Field Name'] = 'बाहरी क्षेत्र का नाम';

$GLOBALS["lang"]['External Field Type'] = 'बाहरी फील्ड प्रकार';

$GLOBALS["lang"]['External Field Types'] = 'बाहरी फील्ड प्रकार';

$GLOBALS["lang"]['external_ident'] = 'बाहरी पहचान';

$GLOBALS["lang"]['External Ident'] = 'बाहरी पहचान';

$GLOBALS["lang"]['external_link'] = 'बाहरी लिंक';

$GLOBALS["lang"]['External Link'] = 'बाहरी लिंक';

$GLOBALS["lang"]['extra_columns'] = 'अतिरिक्त कॉलम';

$GLOBALS["lang"]['Extra Columns'] = 'अतिरिक्त कॉलम';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'अतिरिक्त और समय आधारित रिपोर्टिंग';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'अतिरिक्त और अधिक मौखिक लॉगिंग समस्या निवारण के लिए उत्पन्न होता है।';

$GLOBALS["lang"]['FAQ'] = 'सामान्य';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW संशोधन';

$GLOBALS["lang"]['Fail'] = 'विफल';

$GLOBALS["lang"]['Failed'] = 'विफल';

$GLOBALS["lang"]['Failed Severity'] = 'असफलता';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'फ़ॉकलैंड द्वीपसमूह (मालविनास)';

$GLOBALS["lang"]['Family'] = 'परिवार';

$GLOBALS["lang"]['Faroe Islands'] = 'फरो द्वीप';

$GLOBALS["lang"]['Features'] = 'सुविधाएँ';

$GLOBALS["lang"]['February'] = 'फरवरी';

$GLOBALS["lang"]['field'] = 'फील्ड';

$GLOBALS["lang"]['Field'] = 'फील्ड';

$GLOBALS["lang"]['field_id'] = 'फील्ड आईडी';

$GLOBALS["lang"]['Field ID'] = 'फील्ड आईडी';

$GLOBALS["lang"]['Field Name'] = 'फील्ड नाम';

$GLOBALS["lang"]['Field Type'] = 'फील्ड प्रकार';

$GLOBALS["lang"]['Fields'] = 'फील्ड';

$GLOBALS["lang"]['fields'] = 'फील्ड';

$GLOBALS["lang"]['Fields attributes are'] = 'फील्ड गुण हैं';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'फिजी द्वीप';

$GLOBALS["lang"]['File'] = 'फ़ाइल';

$GLOBALS["lang"]['File Auditing'] = 'फ़ाइल ऑडिटिंग';

$GLOBALS["lang"]['File Import'] = 'फ़ाइल आयात';

$GLOBALS["lang"]['File Input'] = 'फ़ाइल इनपुट';

$GLOBALS["lang"]['file_name'] = 'फाईल का नाम';

$GLOBALS["lang"]['File Name'] = 'फाईल का नाम';

$GLOBALS["lang"]['File Share Discovery'] = 'फाइल शेयर डिस्कवरी';

$GLOBALS["lang"]['file_size'] = 'फाइल साइज';

$GLOBALS["lang"]['File Size'] = 'फाइल साइज';

$GLOBALS["lang"]['filename'] = 'फाईल का नाम';

$GLOBALS["lang"]['Filename'] = 'फाईल का नाम';

$GLOBALS["lang"]['files'] = 'फ़ाइलें';

$GLOBALS["lang"]['Files'] = 'फ़ाइलें';

$GLOBALS["lang"]['files_id'] = 'फ़ाइल ID';

$GLOBALS["lang"]['Files ID'] = 'फ़ाइल ID';

$GLOBALS["lang"]['filter'] = 'फ़िल्टर';

$GLOBALS["lang"]['Filter'] = 'फ़िल्टर';

$GLOBALS["lang"]['filtered'] = 'फ़िल्टर';

$GLOBALS["lang"]['Filtered'] = 'फ़िल्टर';

$GLOBALS["lang"]['Filtered Ports'] = 'फ़िल्टर्ड पोर्ट';

$GLOBALS["lang"]['Finland'] = 'फिनलैंड';

$GLOBALS["lang"]['Finnish'] = 'फिनिश';

$GLOBALS["lang"]['Firewall'] = 'फायरवाल';

$GLOBALS["lang"]['Firewall Packages'] = 'फायरवॉल पैकेज';

$GLOBALS["lang"]['firewall_rule'] = 'फायरवॉल नियम';

$GLOBALS["lang"]['Firewall Rule'] = 'फायरवॉल नियम';

$GLOBALS["lang"]['firmware'] = 'फर्मवेयर';

$GLOBALS["lang"]['Firmware'] = 'फर्मवेयर';

$GLOBALS["lang"]['firmware_revision'] = 'फर्मवेयर संशोधन';

$GLOBALS["lang"]['Firmware Revision'] = 'फर्मवेयर संशोधन';

$GLOBALS["lang"]['First'] = 'पहला';

$GLOBALS["lang"]['First Name'] = 'पहला नाम';

$GLOBALS["lang"]['first_run'] = 'पहला रन';

$GLOBALS["lang"]['First Run'] = 'पहला रन';

$GLOBALS["lang"]['first_seen'] = 'पहली बार';

$GLOBALS["lang"]['First Seen'] = 'पहली बार';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'क्या आप आधार रेखा सॉफ्टवेयर, उपयोगकर्ता या नेटस्टैट डेटा की कोशिश कर रहे हैं? तुलना करने और रिपोर्ट करने के लिए महत्वपूर्ण बात क्या है?';

$GLOBALS["lang"]['FirstWave'] = 'फर्स्टवे';

$GLOBALS["lang"]['Fix'] = 'फिक्स';

$GLOBALS["lang"]['Fixed'] = 'फिक्स्ड';

$GLOBALS["lang"]['Fixing the Issue'] = 'मुद्दे को ठीक करना';

$GLOBALS["lang"]['Floor'] = 'तल';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'नीचे दिए गए किसी भी लिंक का पालन करें और पता करें कि ओपन-ऑडिट का उपयोग कैसे किया जाए <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['For'] = 'के लिए';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'के लिए <i>प्रकार</i> बेसलाइन का चयन करना सुनिश्चित करें, और ग्रुप के लिए आपको एक समूह के उपकरणों का चयन करना चाहिए, यदि इस बेसलाइन पर लागू हो, तो यह सबसे अच्छा उपकरण का प्रतिनिधित्व करता है। यह गलत प्रविष्टियों को रोक देगा।';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'डेबियन/उबंटू रन के लिए, जिसमें अपने ओवरराइड को याद रखने के लिए dpkg की स्थापना शामिल है ताकि एक उपयुक्त उन्नयन टूट न सके।';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'एसएनएमपी ओपन-ऑडिट के लिए v1, v2 और v3 क्रेडेंशियल का उपयोग कर सकता है। डिवाइस को एक रूटर, स्विच (नियमित नेटवर्क डिवाइस) या कंप्यूटर (लिनक्स और विंडोज अक्सर निगरानी उपकरण के लिए SNMP चलाते हैं) की परवाह किए बिना queried है।';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'क्रोन पर प्राइमर के लिए, इस विकिपीडिया पेज को देखें';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'एक बीज खोज के लिए, मुझे केवल निजी आईपी एड्रेस स्पेस में आईपी की खोज करनी चाहिए।';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'एक बीज खोज के लिए, मुझे केवल चयनित सबनेट पर आईपी की खोज करनी चाहिए।';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'एक बीज खोज के लिए, मुझे खोज चलाने से पहले सबनेट को पिंग करना चाहिए।';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'एक कच्चे SQL क्वेरी के उन्नत प्रवेश के लिए। प्रश्नों के अनुसार, आपको इसमें शामिल होना चाहिए <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'प्रत्येक स्पॉन्ड प्रक्रिया के लिए, नीचे आता है।';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'उदाहरण के लिए - आप Redhat 9 चलाने वाले डिवाइस से बेसलाइन बना सकते हैं जो क्लस्टर में आपके अपाचे सर्वर में से एक के रूप में कार्य करता है। आप जानते हैं कि इस विशेष सर्वर को सिर्फ उसी तरह कॉन्फ़िगर किया गया है जिस तरह से आप चाहते हैं लेकिन यदि क्लस्टर में अन्य सर्वर बिल्कुल समान रूप से कॉन्फ़िगर किए गए हैं तो आप अनिश्चित हैं। बेसलाइन आपको यह निर्धारित करने में सक्षम बनाता है।';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'उदाहरण के लिए - आप Redhat 9 चलाने वाले डिवाइस से बेसलाइन बना सकते हैं जो क्लस्टर में आपके अपाचे सर्वर में से एक के रूप में कार्य करता है। आप जानते हैं कि इस विशेष सर्वर को सिर्फ उसी तरह कॉन्फ़िगर किया गया है जिस तरह से आप चाहते हैं लेकिन यदि क्लस्टर में अन्य सर्वर बिल्कुल समान रूप से कॉन्फ़िगर किए गए हैं तो आप अनिश्चित हैं। बेसलाइन आपको यह निर्धारित करने में सक्षम बनाता है।';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'आगे की जानकारी के लिए, विकि देखें।';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'जब लाइसेंस समाप्त हो जाता है, तो लाइसेंस को दोहरा नहीं जाता है।';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'अधिक विस्तृत जानकारी के लिए ओपन-ऑडिट नॉलेज बेस की जांच करें।';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'अधिक जानकारी के लिए कृपया निम्नलिखित गाइड देखें जिसमें एक वीडियो शामिल है। उपयोग';

$GLOBALS["lang"]['For more information, see'] = 'अधिक जानकारी के लिए, देखें';

$GLOBALS["lang"]['form_factor'] = 'फॉर्म फैक्टर';

$GLOBALS["lang"]['Form Factor'] = 'फॉर्म फैक्टर';

$GLOBALS["lang"]['format'] = 'प्रारूप';

$GLOBALS["lang"]['Format'] = 'प्रारूप';

$GLOBALS["lang"]['Forth'] = 'फोर्थ';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'फ्रांस, फ्रेंच गणराज्य';

$GLOBALS["lang"]['free'] = 'फ्री';

$GLOBALS["lang"]['Free'] = 'फ्री';

$GLOBALS["lang"]['French'] = 'फ्रेंच';

$GLOBALS["lang"]['French Guiana'] = 'फ्रेंच गिनी';

$GLOBALS["lang"]['French Polynesia'] = 'फ्रेंच पोलीनेशिया';

$GLOBALS["lang"]['French Southern Territories'] = 'फ्रांसीसी दक्षिणी क्षेत्र';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'अक्सर पूछे जाने वाले प्रश्न';

$GLOBALS["lang"]['Friday'] = 'शुक्रवार';

$GLOBALS["lang"]['From 100 Devices'] = '100 उपकरणों से';

$GLOBALS["lang"]['From 500 Devices'] = '500 उपकरणों से';

$GLOBALS["lang"]['From that page'] = 'उस पृष्ठ से';

$GLOBALS["lang"]['full_name'] = 'पूर्ण नाम';

$GLOBALS["lang"]['Full Name'] = 'पूर्ण नाम';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'एक नियमित ओपन-ऑडिट ऑडिट और विवरण जैसे मशीन प्रकार और आकार से सभी विवरणों के साथ पूर्ण क्लाउड ऑडिट करना।';

$GLOBALS["lang"]['function'] = 'समारोह';

$GLOBALS["lang"]['Function'] = 'समारोह';

$GLOBALS["lang"]['GROUP BY'] = 'ग्रुप बाय';

$GLOBALS["lang"]['Gabon'] = 'गैबोन';

$GLOBALS["lang"]['Galician'] = 'गैलिशियन';

$GLOBALS["lang"]['Gambia the'] = 'गाम्बिया';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'गैप विश्लेषण (वैकल्पिक)';

$GLOBALS["lang"]['gateway'] = 'गेटवे';

$GLOBALS["lang"]['Gateway'] = 'गेटवे';

$GLOBALS["lang"]['gateways'] = 'गेटवे';

$GLOBALS["lang"]['Gateways'] = 'गेटवे';

$GLOBALS["lang"]['Generated By'] = 'द्वारा उत्पन्न';

$GLOBALS["lang"]['geo'] = 'जियो';

$GLOBALS["lang"]['Geo'] = 'जियो';

$GLOBALS["lang"]['Geographical Maps'] = 'भौगोलिक मानचित्र';

$GLOBALS["lang"]['Georgia'] = 'जॉर्जिया';

$GLOBALS["lang"]['German'] = 'जर्मन';

$GLOBALS["lang"]['Germany'] = 'जर्मनी';

$GLOBALS["lang"]['Get Lat/Long'] = 'लाट / लांग';

$GLOBALS["lang"]['Get News'] = 'समाचार प्राप्त करें';

$GLOBALS["lang"]['Get Started'] = 'शुरू करना';

$GLOBALS["lang"]['Get a Free License'] = 'मुफ्त लाइसेंस प्राप्त करें';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'ओपन-ऑडिट प्लेटफॉर्म से परिचित हो जाओ और इसकी कुछ विशेषताओं का पता लगाएं।';

$GLOBALS["lang"]['Getting Started'] = 'शुरू करना';

$GLOBALS["lang"]['Ghana'] = 'घाना';

$GLOBALS["lang"]['Gibraltar'] = 'जिब्राल्टर';

$GLOBALS["lang"]['Github'] = 'गिथब';

$GLOBALS["lang"]['Global Discovery Options'] = 'ग्लोबल डिस्कवरी विकल्प';

$GLOBALS["lang"]['Global area network'] = 'वैश्विक क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Go'] = 'जाओ';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'अपने ओपन-ऑडिट सर्वर पर वापस जाएं और सबनेट के रूप में लक्ष्य विंडोज कंप्यूटर आईपी एड्रेस के साथ एक खोज बनाएं (यह फिर से पूरे सबनेट को खोजने के लिए बचाएगा)। किसी भी मुद्दे को ध्यान में रखते हुए, खोज को चलाएं। किसी भी समस्या के लिए, उचित कार्रवाई करें।';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'लक्ष्य विंडोज पीसी (या आरडीपी का उपयोग करें) जाओ और अपने खोज क्रेडेंशियल सेट द्वारा उपयोग किए जाने वाले उपयोगकर्ता के रूप में लॉग ऑन करें।';

$GLOBALS["lang"]['Go to menu'] = 'मेनू पर जाएं';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'जाओ <i>अनुप्रयोग</i> -> <i>ऐप पंजीकरण</i> दूर बाईं ओर मेनू आइटम। ओपन-ऑडिट के लिए खोज। सूची में ओपन-ऑडिट प्रविष्टि पर क्लिक करें (आपने ऐप ओपन-ऑडिट नाम दिया है)।';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'जाओ <i>प्रमाण पत्र और रहस्य</i> नीचे मेनू आइटम <i>प्रबंधन</i> केंद्र मेनू में।';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'जाओ <i>एकल साइन-ऑन</i> मेनू आइटम और क्लिक SAML के लिए <i>एकल साइन-ऑन विधि का चयन करें</i>।';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'गूगल JSON Credentials';

$GLOBALS["lang"]['Google Maps API Key'] = 'गूगल मैप्स एपीआई कुंजी';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'तो आप मदद कर सकते हैं! पहला GUI में दिखाए गए पाठ को वेव करें और क्या दिखाया जाना चाहिए। हम इसमें शामिल होंगे कि भाषा फाइल में तो आगे चल रहा है, अनुवाद में सुधार हुआ है और आपको इसे हर रिलीज के लिए अद्यतन करने के बारे में चिंता करने की आवश्यकता नहीं है!';

$GLOBALS["lang"]['Greater Than'] = 'ग्रेटर थान';

$GLOBALS["lang"]['Greater Than or Equals'] = 'ग्रेटर थान या समान';

$GLOBALS["lang"]['Greece'] = 'यूनान';

$GLOBALS["lang"]['Greek'] = 'यूनानी';

$GLOBALS["lang"]['Green Query'] = 'ग्रीन क्वेरी';

$GLOBALS["lang"]['Greenland'] = 'ग्रीनलैंड';

$GLOBALS["lang"]['Grenada'] = 'ग्रेनेडा';

$GLOBALS["lang"]['Group'] = 'समूह';

$GLOBALS["lang"]['group_by'] = 'समूह';

$GLOBALS["lang"]['Group By'] = 'समूह';

$GLOBALS["lang"]['group_id'] = 'ग्रुप आईडी';

$GLOBALS["lang"]['Group ID'] = 'ग्रुप आईडी';

$GLOBALS["lang"]['groups'] = 'समूह';

$GLOBALS["lang"]['Groups'] = 'समूह';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'समूहों का उपयोग उन उपकरणों की सरल सूची के रूप में किया जाता है जो आवश्यक स्थितियों से मेल खाते हैं। यदि जेएसओएन का उपयोग करने का अनुरोध किया गया तो वे एक सूची वापस कर देते हैं <i>उपकरण.id</i> केवल। यदि वेब इंटरफ़ेस का उपयोग करने का अनुरोध किया जाता है, तो वे मानक कॉलम विशेषता सूची वापस लौटते हैं। समूहों का उपयोग एकीकरण, बेसलाइन और अन्य वस्तुओं के लिए किया जा सकता है।';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'गुआम';

$GLOBALS["lang"]['Guatemala'] = 'ग्वाटेमाला';

$GLOBALS["lang"]['Guernsey'] = 'ग्वेर्नसे';

$GLOBALS["lang"]['guest_device_id'] = 'गेस्ट डिवाइस ID';

$GLOBALS["lang"]['Guest Device ID'] = 'गेस्ट डिवाइस ID';

$GLOBALS["lang"]['guid'] = 'गुइड';

$GLOBALS["lang"]['Guid'] = 'गुइड';

$GLOBALS["lang"]['Guinea'] = 'गिनी';

$GLOBALS["lang"]['Guinea-Bissau'] = 'गिनी-बिसाऊ';

$GLOBALS["lang"]['Guyana'] = 'गुयाना';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW संशोधन';

$GLOBALS["lang"]['Haiti'] = 'हैती';

$GLOBALS["lang"]['hard_drive_index'] = 'हार्ड ड्राइव इंडेक्स';

$GLOBALS["lang"]['Hard Drive Index'] = 'हार्ड ड्राइव इंडेक्स';

$GLOBALS["lang"]['Hardware'] = 'हार्डवेयर';

$GLOBALS["lang"]['hardware_revision'] = 'हार्डवेयर संशोधन';

$GLOBALS["lang"]['Hardware Revision'] = 'हार्डवेयर संशोधन';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'इस नीति को इस संगठन में लागू किया गया है।';

$GLOBALS["lang"]['hash'] = 'हैश';

$GLOBALS["lang"]['Hash'] = 'हैश';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'एजेंट हमेशा नवीनतम ऑडिट स्क्रिप्ट चलाते हैं (यदि आप ओपन-ऑडिट को अपग्रेड करते हैं और मैन्युअल रूप से स्क्रिप्ट को लक्ष्य तक कॉपी करते हैं, तो क्रॉन सेट करें - आपको प्रत्येक अपग्रेड के लिए इन स्क्रिप्टों को अपडेट करने की आवश्यकता होगी)।';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'अपने उपयोगकर्ता को एक कमांड प्रॉम्प्ट खोलें (उपयोग करना) <i>व्यवस्थापक के रूप में भाग लें</i>). एजेंट को डाउनलोड करने के लिए नीचे दिए गए कदम को पेस्ट करें।';

$GLOBALS["lang"]['Head'] = 'हेड';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands.';

$GLOBALS["lang"]['Hebrew'] = 'हिब्रू';

$GLOBALS["lang"]['height'] = 'ऊंचाई';

$GLOBALS["lang"]['Height'] = 'ऊंचाई';

$GLOBALS["lang"]['Height in RU'] = 'आरयू में ऊंचाई';

$GLOBALS["lang"]['Help'] = 'सहायता';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'अक्सर पूछे जाने वाले प्रश्न';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'सूचना सुरक्षा जोखिमों को प्रबंधित और कम करने में मदद करता है';

$GLOBALS["lang"]['Hide Audit Window'] = 'Hide ऑडिट विंडो';

$GLOBALS["lang"]['high'] = 'उच्च';

$GLOBALS["lang"]['High'] = 'उच्च';

$GLOBALS["lang"]['High Availability'] = 'उच्च उपलब्धता';

$GLOBALS["lang"]['Hindi'] = 'हिन्दी';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'पवित्र देखें (वैटिकन सिटी स्टेट)';

$GLOBALS["lang"]['Home'] = 'घर';

$GLOBALS["lang"]['home'] = 'घर';

$GLOBALS["lang"]['Home Area Network'] = 'होम एरिया नेटवर्क';

$GLOBALS["lang"]['Home area network'] = 'होम क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Honduras'] = 'होंडुरास';

$GLOBALS["lang"]['Hong Kong'] = 'हांगकांग';

$GLOBALS["lang"]['host'] = 'होस्ट';

$GLOBALS["lang"]['Host'] = 'होस्ट';

$GLOBALS["lang"]['hostname'] = 'होस्टनाम';

$GLOBALS["lang"]['Hostname'] = 'होस्टनाम';

$GLOBALS["lang"]['hour'] = 'घंटे';

$GLOBALS["lang"]['Hour'] = 'घंटे';

$GLOBALS["lang"]['How Does It Work?'] = 'यह कैसे काम करता है?';

$GLOBALS["lang"]['How Does it Work?'] = 'यह कैसे काम करता है?';

$GLOBALS["lang"]['How Long Does it Take'] = 'कब तक क्या करना है';

$GLOBALS["lang"]['How and Why is'] = 'कैसे और क्यों है';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'कैसे और क्यों Open-Audit सुरक्षित है';

$GLOBALS["lang"]['How do they work?'] = 'वे कैसे काम करते हैं?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'कैसे एक डिवाइस बीज डिस्कवरी ज्ञात आईपी पता चलता है?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'कब तक आदेश को निष्पादित करने के लिए?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'कैसे लंबे समय तक एक प्रतिक्रिया, प्रति डिवाइस के लिए इंतजार करना चाहिए।';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'इस रैक को कितने सर्किट फ़ीड करते हैं।';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'कितने पॉलिसियां विफल होती हैं।';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'कितने पॉलिसियां पास में होती हैं।';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'इस रैक में कितने पावर सॉकेट हैं।';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'कितने रैक इकाइयों में ऊंचाई इस रैक है।';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'अक्सर कैसे एक कार्य के लिए सर्वर से पूछते हैं।';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'कैसे हम एकीकृत करने के लिए उपकरणों का चयन करना चाहिए (एक विशेषता का उपयोग कर, क्वेरी या एक समूह).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'कैसे vulnerability शोषण किया जाता है (उदाहरण के लिए, नेटवर्क, Adjacent, स्थानीय, भौतिक)।';

$GLOBALS["lang"]['How to compare'] = 'कैसे तुलना करें';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'मानव पठनीय व्याख्या';

$GLOBALS["lang"]['Hungarian'] = 'हंगेरियन';

$GLOBALS["lang"]['Hungary'] = 'हंगरी';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'हाइपरथ्रेडिंग';

$GLOBALS["lang"]['Hyperthreading'] = 'हाइपरथ्रेडिंग';

$GLOBALS["lang"]['I have read the EULA.'] = 'मैंने EULA पढ़ा है।';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'मुझे आशा है कि इस पोस्ट ने आपके पास ओपन-ऑडिट और सुरक्षा के बारे में कोई चिंता व्यक्त की है। यदि आपके पास कोई प्रश्न हैं, तो कृपया फर्स्टवेव में हमसे संपर्क करने में संकोच न करें। हम हमेशा आपकी चिंताओं और जरूरतों पर चर्चा करने के लिए खुश हैं। और शायद अगर आपका सवाल कुछ ऐसा नहीं है तो मैंने यहाँ पता लगाया है, मैं इसे भविष्य के उपयोगकर्ताओं के लिए यहां जोड़ सकता हूं';

$GLOBALS["lang"]['id'] = 'आईडी';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'महत्वपूर्ण';

$GLOBALS["lang"]['INPUTS'] = 'इनपुट';

$GLOBALS["lang"]['IOS Version'] = 'आईओएस संस्करण';

$GLOBALS["lang"]['IP'] = 'आईपी';

$GLOBALS["lang"]['ip'] = 'आईपी';

$GLOBALS["lang"]['IP Address'] = 'आईपी पता';

$GLOBALS["lang"]['IP Addresses'] = 'आईपी एड्रेस';

$GLOBALS["lang"]['IP Last Seen'] = 'आईपी Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'आईपी सेट';

$GLOBALS["lang"]['ISMS'] = 'आई एस एम';

$GLOBALS["lang"]['ISO 27001 only.'] = 'केवल आईएसओ 27001।';

$GLOBALS["lang"]['Iceland'] = 'आइसलैंड';

$GLOBALS["lang"]['icon'] = 'आइकन';

$GLOBALS["lang"]['Icon'] = 'आइकन';

$GLOBALS["lang"]['Icon and Text'] = 'आइकन और टेक्स्ट';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'केवल आइकन, टेक्स्ट केवल या आइकन और टेक्स्ट।';

$GLOBALS["lang"]['id_internal'] = 'आंतरिक';

$GLOBALS["lang"]['Id Internal'] = 'आंतरिक';

$GLOBALS["lang"]['id_number'] = 'आईडी संख्या';

$GLOBALS["lang"]['Id Number'] = 'आईडी संख्या';

$GLOBALS["lang"]['identification'] = 'पहचान';

$GLOBALS["lang"]['Identification'] = 'पहचान';

$GLOBALS["lang"]['Identify information assets'] = 'सूचना परिसंपत्तियों की पहचान करना';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'इच्छुक पार्टियों और उनकी आवश्यकताओं की पहचान करें';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'प्रमुख हितधारकों की पहचान करें और भूमिकाएं निर्दिष्ट करें';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'उस उपकरण की पहचान करें जो आपके अनुकरणीय हैं, या <i>सोने की छवि</i> आप इसी तरह के उपकरणों की तुलना करना चाहते हैं।';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'सुरक्षा जोखिम की पहचान और मूल्यांकन';

$GLOBALS["lang"]['If'] = 'अगर';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'यदि किसी उपकरण को व्यक्तिगत रूप से खोजा जाता है तो इसका उपयोग करना <i>डिस्कवर डिवाइस</i> डिवाइस विवरण पृष्ठ पर लिंक, हम पहली बार जांच करते हैं कि क्या इस उपकरण को पहले (डिस्कवरी द्वारा) खोजा गया है और यदि ऐसा हो तो उस स्कैन से खोज विकल्पों का उपयोग करें। यदि यह पहले नहीं खोजा गया है, तो हम कॉन्फ़िगरेशन आइटम खोज_default_scan_option सेटिंग्स को फिर से बदल देते हैं।';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'यदि एक नया संगठन बनाया जाता है, तो एक LDAP समूह का नाम स्वचालित रूप से नाम से लिया जाता है। उदाहरण के लिए, यदि एक नया संगठन बनाया गया है और इसे टेस्ट नाम दिया गया है, तो संबंधित LDAP समूह को ओपन-ऑडिट_ऑर्ग_टेस्ट नाम दिया जाएगा।';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'यदि कोई बंदरगाह फ़िल्टर के साथ जवाब देता है, तो हमें इसे उपलब्ध मानते हैं।';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'यदि एक बंदरगाह खुले में जवाब देता है, तो हमें इसे उपलब्ध मानते हैं।';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'यदि ओपन-ऑडिट चयनित उपकरणों में रिमोट डिवाइस मौजूद नहीं है, तो हमें इसे बाहरी सिस्टम से हटा देना चाहिए।';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'यदि एक ओपन-ऑडिट डिवाइस बदल गया है, तो हमें बाहरी सिस्टम को अपडेट करना चाहिए।';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'यदि एक ओपन-ऑडिट डिवाइस बाहरी सिस्टम पर नहीं है, तो हमें इसे बनाना चाहिए।';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'यदि कोई एजेंट अपनी प्राथमिक आईपी की रिपोर्ट इस सबनेट में है, तो कार्रवाई करें।';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'यदि इनमें से कोई (comma seperated, कोई स्थान नहीं) बंदरगाह का पता लगाया जाता है, तो मान लें कि एसएसएच उन पर चल रहा है और उन्हें लेखा परीक्षा के लिए उपयोग करता है। इस बंदरगाह को कस्टम टीसीपी पोर्ट में जोड़ने की कोई आवश्यकता नहीं है - इसे स्वचालित रूप से जोड़ा जाएगा।';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'यदि कोई ऑपरेटर निर्दिष्ट नहीं है, तो डिफ़ॉल्ट = है। गुण पूरी तरह से योग्य होना चाहिए - यानी, device.hostname (केवल होस्टनाम नहीं)।';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'यदि कोई मूल्य मौजूद नहीं है, तो इस मूल्य की आपूर्ति करें। EG: system.nmis_group / विन्यास के लिए। समूह हम उपयोग करते हैं';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'यदि सेट किया गया है, तो विशिष्ट डिवाइस कॉलम की एक JSON सरणी रखता है, इस उपयोगकर्ता ने कॉन्फ़िगरेशन डिफ़ॉल्ट के अलावा, देखने के लिए चुना है।';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'यदि ओएस परिवार (जैसे डिवाइस द्वारा रिपोर्ट किया गया) में इस आइटम को पास करना है।';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'यदि ओपन-ऑडिट सर्वर ने इसे रिपोर्ट करने वाले कलेक्टरों को दिया है, तो एक अतिरिक्त ड्रॉप डाउन प्रदान किया जाता है। आप यह निर्दिष्ट करने के लिए चुन सकते हैं कि कौन से कलेक्टर को कार्य करना चाहिए। केवल डिस्कवरी कार्यों को कलेक्टरों के लिए समर्थन दिया जाता है।';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'यदि एजेंट OS परिवार (कैस असंवेदनशील) में इस स्ट्रिंग को शामिल किया गया है, तो कार्रवाई करें।';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'यदि द्विआधारी इन स्थानों में से किसी में नहीं पाया जाता है, तो एक चेतावनी संदेश इंस्टॉलर में प्रदर्शित किया जाएगा।';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'यदि निम्नलिखित शर्तों को पूरा किया जाता है:<br/><ul><li>भूमिका में एक निर्दिष्ट ad_group है</li><li>एक संगठन एक निर्दिष्ट ad_group है</li><li>LDAP सर्वर का उपयोग किया जाता है_roles सेट करने के लिए y</li><li>एक उपयोगकर्ता LDAP में मौजूद है (यह सक्रिय निर्देशिका या OpenLDAP हो) और निर्दिष्ट ad_groups में है।</li></ul>यह उपयोगकर्ता ओपन-ऑडआईटी में किसी खाता के बिना ओपन-ऑडआईटी को लॉग ऑन कर सकता है। ओपन-ऑडिट प्रश्न में LDAP को क्वेरी करेगा और यदि उपयोगकर्ता आवश्यक समूहों में है लेकिन ओपन-ऑडिट में नहीं, तो उनके उपयोगकर्ता विशेषताओं (नाम, पूर्ण नाम, ईमेल, भूमिका, orgs, आदि) को ओपन-ऑडिट के भीतर स्वचालित रूप से जनसंख्याबद्ध किया जाएगा और उन्हें लॉग ऑन किया जाएगा।<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'यदि स्थानीय क्षेत्र सत्य (bool) या y (string) या Y (string) या 1 (integer) है तो बाहरी डेटा को 1 पर सेट करें।';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'यदि स्थानीय क्षेत्र सत्य (bool) या y (string) या Y (string) या 1 (integer) है तो बाहरी डेटा को y पर सेट करें।';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'यदि प्राथमिक आईपी (जैसे डिवाइस द्वारा रिपोर्ट की गई) इस सबनेट में है, तो पास करें।';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'यदि उपयोगकर्ता खाता वास्तव में ओपन-ऑडिट के भीतर मौजूद नहीं है और <code>use_authorisation</code> सेट है, उपयोगकर्ता बनाया जाएगा। यदि यह अस्तित्व में है, तो ईमेल, पूर्ण नाम आदि जैसे विवरण पॉप्युलेट किए जाएंगे।';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'यदि उपयोगकर्ता के पास वैध क्रेडेंशियल नहीं है या कम से कम एक ओपन-ऑडिट रोल और ग्रुप में नहीं है (जब उपयोग किया जाता है) <code>use_authorisation</code>), ओपन-ऑडिट स्थानीय ओपन-ऑडिट उपयोगकर्ता विवरण और प्रयास प्रमाणीकरण और प्राधिकरण का उपयोग करने के लिए वापसी करेगा। यह महसूस करते हुए कि उपयोगकर्ता को पहुँच से इनकार कर दिया जाएगा।';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'यदि उपयोगकर्ता Open-Audit पर लॉगिंग करता है, तो LDAP की खोज करने के लिए उपयोग नहीं करता है, तो आप एक अन्य खाते का उपयोग कर सकते हैं, जिसमें यह एक्सेस होता है।';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'यदि उपयोगकर्ता Open-Audit पर लॉगिंग करता है तो OpenLDAP की खोज करने के लिए उपयोग नहीं करता है, तो आप एक अन्य खाता का उपयोग कर सकते हैं जिसके पास यह एक्सेस है। इसे कॉन्फ़िगर करने के लिए dn_account और dn_password का उपयोग करें।';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'यदि मूल्य निर्धारित नहीं है, तो वर्तमान टाइमस्टैम्प का उपयोग किया जाएगा।';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'यदि मूल्य निर्धारित है, तो उस टाइमस्टैम्प मान का उपयोग किया जाएगा।';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'यदि यह परिवर्तन आपके लिए काम नहीं करता है, तो सभी खो नहीं सकते हैं। हमने एक कॉन्फ़िगरेशन आइटम जोड़ा है (डिफ़ॉल्ट द्वारा n सेट करें, इसलिए यह बॉक्स से बाहर इस नए विकल्प का उपयोग नहीं करेगा) जिसे खोज_use_org_id_match कहा जाता है। यदि आप इसे वाई में बदल देते हैं तो खोज द्वारा डिवाइस को सौंपे गए ऑर्गिड का उपयोग प्रासंगिक मैच नियमों में किया जाएगा।';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'यदि यह कई मिनट (या अधिक) पारित हो गया है क्योंकि सर्वर ने आखिरी डिवाइस को देखा, तो पास करें।';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'अगर इस उपकरण ने सर्वर से संपर्क किया है, तो कार्रवाई करें।';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'यदि यह तब होता है जब आप देख रहे हैं तो वेबपेज पर इस्तेमाल होने वाले टेबल कंट्रोल से संबंधित है। यह केवल वर्तमान पृष्ठ के लिए चेक बॉक्स की स्थिति को स्मृति में संग्रहीत करता है। यदि आप चयन करते हैं, तो पृष्ठ आगे / वापस उन चयनों को खो दिया जाएगा। हालांकि, आप प्रत्येक पृष्ठ पर दिखाए गए उपकरणों की संख्या का विस्तार करके क्या चाहते हैं, पूरा कर सकते हैं। शीर्ष बाएं कोने में एक ड्रॉप-डाउन लेबल "प्रति पृष्ठ रिकॉर्ड" है; जब तक आप बल्क एडिट के लिए चयन करना चाहते हैं तब तक प्रदर्शित प्रविष्टियों की संख्या का विस्तार करने के लिए इसका उपयोग करें।';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'यदि हम सैन मैनेजमेंट सॉफ्टवेयर का पता लगाते हैं, तो हमें क्वेरी से पहले ऑटो डिस्कवर करना चाहिए।';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'यदि आप एक लोकेशन टाइप जोड़ते हैं, तो उन आइकनों को जोड़ें';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'यदि आप एक उपकरण प्रकार जोड़ते हैं, तो संबद्ध आइकन को प्रदर्शित करने के लिए आपको मैन्युअल रूप से निर्देशिका में .svg स्वरूपित फ़ाइल को कॉपी करना होगा।';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'यदि आप एक समर्थित FirstWave ग्राहक हैं, तो कुछ आइटम आपकी मदद को आसान बना देंगे। फर्स्टवे के साथ एक समर्थन टिकट खोलें और लॉगफ़ाइल संलग्न करें। इसके अलावा, समर्थन बटन से आउटपुट को ऊपरी दाएं पर शामिल करें';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'यदि आप एक समर्थित ग्राहक हैं और फर्स्टवे के साथ एक समर्थन टिकट खोलें, तो कृपया इन फ़ाइलों को संलग्न करें।';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'यदि आपके पास Google मानचित्र एपीआई कुंजी या आपकी कंपनी के साथ मुद्दे हैं तो Google मानचित्र एपीआई कुंजी बनाने के लिए एक्सेस नहीं है, तो कृपया फर्स्टवेव सपोर्ट टीम से संपर्क करें।';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'यदि आप Windows पर हैं या आपका NMIS सर्वर दूरस्थ है, तो आपको उस सर्वर तक पहुंचने के लिए URL, यूज़रनेम और पासवर्ड की आपूर्ति करनी होगी।';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'यदि आप एक सभ्य ब्रॉडबैंड या ईथरनेट कनेक्शन पर हैं, तो मैं हमेशा -T4 (Aggressive) का उपयोग करने की सलाह देता हूं। कुछ लोग प्यार करते हैं -T5 (Insane) हालांकि यह मेरे स्वाद के लिए बहुत आक्रामक है। लोग कभी-कभी निर्दिष्ट करते हैं -T2 (Polite) क्योंकि उन्हें लगता है कि मेजबानों को दुर्घटनाग्रस्त होने की संभावना कम है या क्योंकि वे खुद को सामान्य रूप से विनम्र मानते हैं। वे अक्सर यह महसूस नहीं करते कि वास्तव में कितना धीमा है। उनका स्कैन डिफॉल्ट स्कैन से दस गुना लंबा हो सकता है। मशीन दुर्घटनाओं और बैंडविड्थ की समस्याएं डिफ़ॉल्ट समय विकल्पों -T3 (सामान्य) के साथ दुर्लभ हैं और इसलिए मैं सामान्य रूप से सतर्क स्कैनर के लिए सलाह देता हूं। इन समस्याओं को कम करने के लिए टाइमिंग मूल्यों के साथ खेलने की तुलना में संस्करण का पता लगाना अधिक प्रभावी है।';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'यदि आप RedHat या Centos प्रणाली चला रहे हैं और आपने Nmap को अपग्रेड किया है, तो कृपया SUID को द्विआधारी पर रीसेट करें';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'यदि आप लिनक्स पर ओपन-ऑडिट सर्वर चला रहे हैं, तो यह आपको प्रभावित नहीं करता है।';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'यदि आप Windows पर ओपन-ऑडिट का उपयोग कर रहे हैं या यदि आपका NMIS सर्वर आपके ओपन-ऑडिट सर्वर (कुछ लिनक्स इंस्टॉल के मामले में) पर नहीं है, तो आपको एक्सेस क्रेडेंशियल और दूरस्थ NMIS के लिए एक URL की आपूर्ति की आवश्यकता होगी - लेकिन यह सब है! हां - NMIS और Open-AudIT के बीच एकीकरण अब विंडोज आधारित ओपन-ऑडिट के साथ भी काम करता है!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'यदि आप एक कलेक्टर चुनते हैं, तो अगले 5 मिनट की सीमा पर निष्पादित करने के लिए निर्धारित किया जाएगा।';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'यदि आप सामान्य रूप से devices_assigned_to_org सेट करते हैं और कॉन्फ़िगरेशन आइटम सक्षम है, तो OrgID का उपयोग मैच को परिष्कृत करने के लिए किया जाएगा।';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'यदि आप सामान्य रूप से devices_assigned_to_org सेट नहीं करते हैं तो इसका कोई प्रभाव नहीं होगा। अगर यह खोज में सेट किया गया है (या मैन्युअल रूप से एक लेखा परीक्षा स्क्रिप्ट में) और विन्यास में सक्षम है, तो हम केवल ओर्गआईडी का उपयोग करके जांच करते हैं।';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'यदि आप कॉन्फ़िगरेशन आइटम को सक्षम करते हैं, तो एक संगठन को असाइन करने की खोज का उपयोग करें और फिर बाद में खोज के बाद एक उपकरण के ऑर्गिड को बदल दें तो आपके पास अगली बार खोज रन बनाने का एक नया उपकरण होगा। इस उदाहरण में, आपको बाद की खोजों को चलाने से पहले केवल unset device_assigned_to_org होना चाहिए। ऐसा इसलिए है क्योंकि (इस उदाहरण में) आपने ओपन-ऑडिट को बताया है <i>इस खोज से ये उपकरण ऑर्ग एक्स से संबंधित हैं<i>लेकिन फिर डिवाइस के संगठन को बदल दिया। आपने संग्रहीत उपकरणों की जानकारी बदल दी है। इस मामले में - अब ऑर्ग एक्स से संबंधित कोई उपकरण नहीं है, इसलिए हम एक नया बनाते हैं।</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'यदि आपके पास एंटी-वायरस सॉफ़्टवेयर चल रहा है, तो Opmantek (omkd), अपाचे (apache2.2) और MySQL (mysql) की सेवाओं को ऑटो स्टार्ट और रन के लिए आवश्यक है। इन सेवाओं का उपयोग ओपन-ऑडिट द्वारा किया जाता है। आपको केवल एक बार ऐसा करने की आवश्यकता है। यदि आपका एंटी वायरस प्रोग्राम आपको ओपन-ऑडिट के बारे में सूचित करता है, तो कृपया मंचों पर पोस्ट करें या अपने एंटी वायरस सॉफ्टवेयर के नाम और संस्करण के साथ समर्थन करने के लिए एक ईमेल भेजें।';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'यदि आपके पास काम कर रहे क्रेडेंशियल हैं, तो आप संभावित जानकारी की पूरी राशि की उम्मीद कर सकते हैं।<br/><br/>जाहिर है, Open-Audit का उपयोग करने का सबसे अच्छा तरीका खोजे जा रहे उपकरणों के लिए काम क्रेडेंशियल्स करना है (क्योंकि वे WMI, SSH, या SNMP क्रेडेंशियल)।<br/><br/>हम भी क्रेडेंशियल के बिना ऑडिशन पर एक पेज है।';

$GLOBALS["lang"]['If you include the id field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'यदि आप id फ़ील्ड शामिल हैं <strong>और</strong> इसे एक संख्या के साथ सेट करें, उस आइटम को बनाया गया बजाय अद्यतन किया जाएगा।';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'यदि आपको सक्रिय निर्देशिका एक्सेस को कॉन्फ़िगर करने की आवश्यकता है, तो आप आमतौर पर इसका उपयोग कर सकते हैं <code>cn=Users,dc=your,dc=domain,dc=com</code> आपके लिए <code>base_dn</code>। सेट करने की कोई आवश्यकता नहीं है <code>user_dn</code>।';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'यदि आपको अपने उपयोगकर्ताओं के लिए OpenLDAP पहुंच को कॉन्फ़िगर करने की आवश्यकता है और किसी दिए गए उपयोगकर्ताओं को DN का उपयोग सामान्य रूप से होता है। <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> तब आपको सेट करना चाहिए <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> और <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>। विशेष शब्द <code>@username</code> और <code>@domain</code> लॉगिन पेज पर अपने उपयोगकर्ता द्वारा प्रदान किए गए लॉगिन विवरण द्वारा प्रतिस्थापित किया जाएगा।';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'यदि आप एक सबनेट पर खोज करते हैं कि सर्वर (या कलेक्टर) सीधे स्थापित है, तो आप जवाब देने वाले उपकरणों के लिए निम्नलिखित उम्मीद कर सकते हैं';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'यदि आप एक सबनेट पर खोज करते हैं कि आपका सर्वर (या कलेक्टर) सीधे स्थापित नहीं है, तो आप जवाब देने वाले उपकरणों के लिए निम्नलिखित उम्मीद कर सकते हैं';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'यदि आप एक सूची प्रकार का चयन करते हैं, तो एक अतिरिक्त क्षेत्र मानों को बुलाया जाएगा। आपको यहां चयन योग्य मूल्यों की एक अलग सूची रखना चाहिए। जब भी फ़ील्ड संपादित हो जाती है तो ये ड्रॉपडाउन बॉक्स में प्रदर्शित होंगे।';

$GLOBALS["lang"]['If you set the values for'] = 'यदि आप मूल्य निर्धारित करते हैं';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'यदि आप अपने एजेंट को एक विशेष कॉन्फ़िगरेशन का उपयोग करने के लिए मजबूर करना चाहते हैं, तो आप उपयोग करने के लिए एजेंट प्रविष्टि की आईडी की आपूर्ति कर सकते हैं, जैसा कि नीचे (एजेंट प्रविष्टि की संख्या के साथ $ आईडी की जगह)। जब यह एजेंट स्थापित होता है, तो यह sevrer के साथ चेक-इन करेगा और <strong>केवल</strong> जाँच करें कि एक व्यक्ति एजेंट प्रविष्टि विशेषताओं (परीक्षण और कार्रवाई)। यह उपयोगी हो सकता है यदि आप एमएसपी हैं - किसी विशेष ग्राहक के लिए एक एजेंट प्रविष्टि बनाएं और उनके सभी उपकरणों को इस प्रविष्टि का उपयोग करें, जो उन्हें एक संगठन और स्थान पर सौंप दें।';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'यदि आप एकीकरण को खोदना चाहते हैं, तो उन्नत बटन पर क्लिक करें (और अभिभूत नहीं होने का प्रयास करें!)।';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'यदि आप बाहरी रूप से प्रदान किए गए डिवाइस पर डिस्कवरी चलाना चाहते हैं, तो विकल्प का चयन करें और जब एकीकरण बनाया जाता है, तो डिस्कवरी है।';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'यदि आप डिस्कवरी के बाहर स्क्रिप्ट का उपयोग करना चाहते हैं तो हमने एक और समापन बिंदु बनाया है जिसे बुलाया गया है <i>स्क्रिप्ट</i>। प्रलेखन देखें';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'यदि आपके उपयोगकर्ता के पास नहीं है <i>व्यवस्थापक के रूप में भाग लें</i> अधिकार, वे अभी भी एजेंट डाउनलोड कर सकते हैं (ऊपर पहला कमांड) और नीचे के रूप में एक लेखा परीक्षा प्रस्तुत करने के लिए इसे चलाते हैं। यह एजेंट स्थापित या अनुसूचित होने के बिना एक बंद लेखा परीक्षा होगी।';

$GLOBALS["lang"]['ifadminstatus'] = 'अगरadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'अगरadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Fortune';

$GLOBALS["lang"]['Iflastchange'] = 'Fortune';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore Invalid SSL';

$GLOBALS["lang"]['Ignored'] = 'अनदेखा';

$GLOBALS["lang"]['image'] = 'छवि';

$GLOBALS["lang"]['Image'] = 'छवि';

$GLOBALS["lang"]['Images'] = 'चित्र';

$GLOBALS["lang"]['impact_availability'] = 'प्रभाव उपलब्धता';

$GLOBALS["lang"]['Impact Availability'] = 'प्रभाव उपलब्धता';

$GLOBALS["lang"]['impact_confidentiality'] = 'प्रभाव गोपनीयता';

$GLOBALS["lang"]['Impact Confidentiality'] = 'प्रभाव गोपनीयता';

$GLOBALS["lang"]['impact_integrity'] = 'प्रभाव अखंडता';

$GLOBALS["lang"]['Impact Integrity'] = 'प्रभाव अखंडता';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'चयनित नियंत्रण और प्रक्रियाओं को लागू करना';

$GLOBALS["lang"]['Implementation'] = 'कार्यान्वयन';

$GLOBALS["lang"]['implementation_notes'] = 'कार्यान्वयन नोट्स';

$GLOBALS["lang"]['Implementation Notes'] = 'कार्यान्वयन नोट्स';

$GLOBALS["lang"]['Import'] = 'आयात';

$GLOBALS["lang"]['Import Example Data'] = 'आयात उदाहरण डेटा';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'CSV का उपयोग करके एकाधिक {संग्रह} आयात करें।';

$GLOBALS["lang"]['improvement_opportunities'] = 'सुधार के अवसर';

$GLOBALS["lang"]['Improvement Opportunities'] = 'सुधार के अवसर';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'व्यापार निरंतरता और लचीलापन में सुधार';

$GLOBALS["lang"]['In'] = 'में';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'एक दूसरे टैब या विंडो में अपने OKTA कंसोल पर जाएं और क्लिक करें <i>ऐप एकीकरण बनाएं</i>।';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'एक दूसरे टैब या विंडो साइन-ऑन में अपने';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'मेरी व्यक्तिगत राय में, आपके नेटवर्क पर हर एक आइटम को खोजने और ऑडिट करने का सबसे अच्छा तरीका प्रत्येक सबनेट के लिए एक बीज डिस्कवरी है, जो उस सबनेट (क्रेडेंशियल का उपयोग करके) तक सीमित है। बीज खोजी स्विच, राउटर और कंप्यूटर मैक एड्रेस टेबल का उपयोग एक उपकरण को याद नहीं करने के लिए करते हैं। यदि यह नेटवर्क से जुड़ा हुआ है और टीसीपी / आईपी का उपयोग करता है, तो एक स्विच / रूटर / कंप्यूटर को यह पता होना चाहिए कि यह क्या है - यह सिर्फ टीसीपी / आईपी कैसे काम करता है। कस्टम टीसीपी और / या यूडीपी बंदरगाहों के साथ संयोजन करें और फिर आपको डिवाइस प्रकार को भी निर्धारित करने में सक्षम होना चाहिए। लेकिन यह सिर्फ मेरी व्यक्तिगत प्राथमिकता है';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'ओपन-ऑडिट के आदेश में आइटम पर उपयोगकर्ता की अनुमति लागू करने में सक्षम होने के लिए, हम उपयोगकर्ता को जनादेश देते हैं <code>WHERE @filter</code>। यदि आप इस प्रारूप का उपयोग नहीं करते हैं, तो क्वेरीक्रिएटफॉर्म एक चेतावनी फेंक देगा। केवल व्यवस्थापक भूमिका वाले उपयोगकर्ताओं को उन प्रश्नों को बनाने की अनुमति दी जाती है जो इस विशेषता की कमी रखते हैं और फिर भी, केवल कॉन्फ़िगरेशन आइटम के बाद <i>उन्नत खोज</i> सक्षम किया गया है।';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Google मानचित्र को सक्षम करने के लिए आपको Google API कुंजी को इस लिंक का पालन करने और अपने साथ लॉग इन करने की आवश्यकता होगी। गूगल खाता';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Azure Rest API का उपयोग करने के लिए, आपको एक Azure Active निर्देशिका एप्लिकेशन बनाने की आवश्यकता होगी जिसका उपयोग प्रमाणीकरण के लिए किया जाता है।';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'इस कार्यक्षमता का उपयोग करने के लिए, इसे कॉन्फ़िगरेशन में सक्षम होना चाहिए - क्लिक करें';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(Comma seperated) सूची में';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'मामले में <code>in</code> और <code>notin</code>, आपको गोल कोष्ठक में मानों को संलग्न करना चाहिए और उन्हें एक अल्पाका का उपयोग करके अलग करना चाहिए (एक अल्पाका, एक अल्पाका नहीं, फिर स्थान)।<br/><br/>इन ऑपरेटरों के साथ आप काफी व्यापक रूप से फ़िल्टर कर सकते हैं।<br/><br/>जब आप कई स्तंभों पर डेटा और फ़िल्टर जोड़ते हैं, तो उन स्तंभों को संयुक्त रूप से उपयोग किया जाता है <strong>और</strong>। आप फ़िल्टर नहीं कर सकते <strong>या</strong> स्थिति। समावेश के साथ <code>notin</code>, आपको काम करने वाले अधिकांश खोजों को प्राप्त करने में सक्षम होना चाहिए। और उन लोगों के लिए जिन्हें वास्तव में असमर्थित और जटिल चयन की आवश्यकता होती है, आप हमेशा एक वास्तविक क्वेरी लिख सकते हैं।';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'जिस मामले में हम कई क्षेत्रों (आमतौर पर JSON प्रारूप में) को एक BIGTEXT MySQL क्षेत्र के अंदर स्टोर करते हैं (जैसे: क्रेडेंशियल)। क्रेडेंशियल - क्रेडेंशियल तालिका में क्रेडेंशियल कॉलम), आपको प्रारूप का उपयोग करना चाहिए';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'कमांड प्रॉम्प्ट शेल में, डाउनलोड डायरेक्टरी (जैसे) पर नेविगेट करें <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'निष्क्रिय';

$GLOBALS["lang"]['Incomplete'] = 'अधूरी';

$GLOBALS["lang"]['Index'] = 'सूचकांक';

$GLOBALS["lang"]['India'] = 'भारत';

$GLOBALS["lang"]['Indonesia'] = 'इंडोनेशिया';

$GLOBALS["lang"]['Indonesian'] = 'इंडोनेशियाई';

$GLOBALS["lang"]['Info'] = 'जानकारी';

$GLOBALS["lang"]['Information only.'] = 'केवल सूचना';

$GLOBALS["lang"]['Informational'] = 'सूचना';

$GLOBALS["lang"]['initial_size'] = 'प्रारंभिक आकार';

$GLOBALS["lang"]['Initial Size'] = 'प्रारंभिक आकार';

$GLOBALS["lang"]['Initial login credentials are'] = 'प्रारंभिक लॉगिन क्रेडेंशियल हैं';

$GLOBALS["lang"]['Initiation'] = 'प्रेरणा';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'इनपुट';

$GLOBALS["lang"]['Input Type'] = 'इनपुट प्रकार';

$GLOBALS["lang"]['inputs'] = 'इनपुट';

$GLOBALS["lang"]['Inputs'] = 'इनपुट';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'एक नया {collection} प्रविष्टि डालें।';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'उदाहरण डेटा डालें और उन सभी को खोजें जो ओपन-ऑडआईटी आपको बता सकते हैं।';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'अपना सम्मिलित करें खरीद लाइसेंस कुंजी';

$GLOBALS["lang"]['install'] = 'स्थापित करना';

$GLOBALS["lang"]['Install'] = 'स्थापित करना';

$GLOBALS["lang"]['install_date'] = 'तारीख';

$GLOBALS["lang"]['Install Date'] = 'तारीख';

$GLOBALS["lang"]['install_directory'] = 'निर्देशिका';

$GLOBALS["lang"]['Install Directory'] = 'निर्देशिका';

$GLOBALS["lang"]['Install OpenScap if required'] = 'यदि आवश्यक हो तो OpenScap को इंस्टॉल करें';

$GLOBALS["lang"]['install_source'] = 'स्रोत स्थापित करें';

$GLOBALS["lang"]['Install Source'] = 'स्रोत स्थापित करें';

$GLOBALS["lang"]['Install Support'] = 'समर्थन';

$GLOBALS["lang"]['installed_by'] = 'द्वारा स्थापित';

$GLOBALS["lang"]['Installed By'] = 'द्वारा स्थापित';

$GLOBALS["lang"]['installed_on'] = 'स्थापित करना';

$GLOBALS["lang"]['Installed On'] = 'स्थापित करना';

$GLOBALS["lang"]['Installing'] = 'स्थापना';

$GLOBALS["lang"]['Installing on Linux'] = 'लिनक्स पर स्थापित करना';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOS पर स्थापित करना';

$GLOBALS["lang"]['Installing on Windows'] = 'Windows पर स्थापित करना';

$GLOBALS["lang"]['instance'] = 'इंस्टेंस';

$GLOBALS["lang"]['Instance'] = 'इंस्टेंस';

$GLOBALS["lang"]['instance_ident'] = 'इंस्टेंस आइडेंट';

$GLOBALS["lang"]['Instance Ident'] = 'इंस्टेंस आइडेंट';

$GLOBALS["lang"]['instance_options'] = 'निवेश विकल्प';

$GLOBALS["lang"]['Instance Options'] = 'निवेश विकल्प';

$GLOBALS["lang"]['instance_provider'] = 'निवेश प्रदाता';

$GLOBALS["lang"]['Instance Provider'] = 'निवेश प्रदाता';

$GLOBALS["lang"]['instance_reservation_ident'] = 'इंस्टेंस आरक्षण इंडेंट';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'इंस्टेंस आरक्षण इंडेंट';

$GLOBALS["lang"]['instance_state'] = 'संस्थान';

$GLOBALS["lang"]['Instance State'] = 'संस्थान';

$GLOBALS["lang"]['instance_tags'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['Instance Tags'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['instance_type'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['Instance Type'] = 'सम्पर्क करने का विवरण';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'एकीकरण';

$GLOBALS["lang"]['integrations'] = 'एकीकरण';

$GLOBALS["lang"]['Integrations'] = 'एकीकरण';

$GLOBALS["lang"]['integrations_id'] = 'एकीकरण ID';

$GLOBALS["lang"]['Integrations ID'] = 'एकीकरण ID';

$GLOBALS["lang"]['integrations_log'] = 'एकीकरण लॉग';

$GLOBALS["lang"]['Integrations Log'] = 'एकीकरण लॉग';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'एकीकरण को वांछित के रूप में निर्धारित किया जा सकता है। यह उपयोगकर्ता को छोड़ दिया जाता है।';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'एकीकरण डिस्कवरी, क्वेरी, एट अल के अनुसार निर्धारित किया जा सकता है।';

$GLOBALS["lang"]['Interactive Dashboards'] = 'इंटरएक्टिव डैशबोर्ड';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'इंटरैक्टिव डैशबोर्ड नेटवर्क सूची की स्थिति में तत्काल दृश्यता प्रदान करते हैं जिससे आईटी टीमों को एक नज़र में नए खोजे गए उपकरणों और असामान्य डिवाइस व्यवहार को देखने की अनुमति मिलती है।';

$GLOBALS["lang"]['interface'] = 'इंटरफ़ेस';

$GLOBALS["lang"]['Interface'] = 'इंटरफ़ेस';

$GLOBALS["lang"]['interface_id'] = 'इंटरफ़ेस ID';

$GLOBALS["lang"]['Interface ID'] = 'इंटरफ़ेस ID';

$GLOBALS["lang"]['interface_type'] = 'इंटरफ़ेस प्रकार';

$GLOBALS["lang"]['Interface Type'] = 'इंटरफ़ेस प्रकार';

$GLOBALS["lang"]['Internal'] = 'आंतरिक';

$GLOBALS["lang"]['Internal Audit'] = 'आंतरिक लेखा परीक्षा';

$GLOBALS["lang"]['Internal Audit & Review'] = 'आंतरिक लेखा परीक्षा & समीक्षा';

$GLOBALS["lang"]['Internal Field Name'] = 'आंतरिक क्षेत्र का नाम';

$GLOBALS["lang"]['Internal ID'] = 'आंतरिक ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'इस उपयोगकर्ता के लिए वैध एक्सेस टोकन की आंतरिक JSON सरणी।';

$GLOBALS["lang"]['Introduction'] = 'परिचय';

$GLOBALS["lang"]['invoice'] = 'चालान';

$GLOBALS["lang"]['Invoice'] = 'चालान';

$GLOBALS["lang"]['invoice_id'] = 'Invoice ID';

$GLOBALS["lang"]['Invoice ID'] = 'Invoice ID';

$GLOBALS["lang"]['invoice_item'] = 'चालान आइटम';

$GLOBALS["lang"]['Invoice Item'] = 'चालान आइटम';

$GLOBALS["lang"]['ios_version'] = 'Ios संस्करण';

$GLOBALS["lang"]['Ios Version'] = 'Ios संस्करण';

$GLOBALS["lang"]['ip_address_external_a'] = 'आईपी पता बाहरी ए';

$GLOBALS["lang"]['Ip Address External A'] = 'आईपी पता बाहरी ए';

$GLOBALS["lang"]['ip_address_external_b'] = 'आईपी पता बाहरी बी';

$GLOBALS["lang"]['Ip Address External B'] = 'आईपी पता बाहरी बी';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip पता आंतरिक A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip पता आंतरिक A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'आईपी पता आंतरिक बी';

$GLOBALS["lang"]['Ip Address Internal B'] = 'आईपी पता आंतरिक बी';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip लेखा परीक्षा गिनती';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip लेखा परीक्षा गिनती';

$GLOBALS["lang"]['ip_discovered_count'] = 'आईपी डिस्कवर गिनती';

$GLOBALS["lang"]['Ip Discovered Count'] = 'आईपी डिस्कवर गिनती';

$GLOBALS["lang"]['ip_enabled'] = 'आईपी सक्षम';

$GLOBALS["lang"]['Ip Enabled'] = 'आईपी सक्षम';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip प्रतिक्रिया गिनती';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip प्रतिक्रिया गिनती';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned गिनती';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned गिनती';

$GLOBALS["lang"]['Iran'] = 'ईरान';

$GLOBALS["lang"]['Iraq'] = 'इराक';

$GLOBALS["lang"]['Ireland'] = 'आयरलैंड';

$GLOBALS["lang"]['Irish'] = 'आयरिश';

$GLOBALS["lang"]['Is FRU'] = 'FRU है';

$GLOBALS["lang"]['is_fru'] = 'Fru है';

$GLOBALS["lang"]['Is Fru'] = 'Fru है';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'क्या NMIS सर्वर स्थानीय है (इस ओपन-ऑडिट सर्वर पर) या रिमोट?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'क्या यह खाता सक्रिय है? अगर सेट <code>n</code>उपयोगकर्ता लॉग इन नहीं कर सकता।';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'क्या यह क्वेरी लाइसेंस प्राप्त ग्राहकों तक ही सीमित है।';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'क्या यह कार्य सक्षम है (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'आइल ऑफ मैन';

$GLOBALS["lang"]['Israel'] = 'इज़राइल';

$GLOBALS["lang"]['Issue'] = 'मुद्दा';

$GLOBALS["lang"]['issuer'] = 'जारीकर्ता';

$GLOBALS["lang"]['Issuer'] = 'जारीकर्ता';

$GLOBALS["lang"]['issuer_name'] = 'जारीकर्ता का नाम';

$GLOBALS["lang"]['Issuer Name'] = 'जारीकर्ता का नाम';

$GLOBALS["lang"]['Issues'] = 'मुद्दे';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'यह <i>कार्य</i> एनएमआईएस के साथ';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'यह मेनू पर उपलब्ध है -> मदद ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'यह ध्यान रखना महत्वपूर्ण है कि जब ओपन-ऑडआईटी किसी भी गुण को निर्धारित करने के लिए निर्धारित करता है <i>Y</i> Open-Audit के लिए बिल्कुल मिलान करना चाहिए ताकि यह निर्धारित किया जा सके कि खोजे गए डिवाइस डेटाबेस में पहले से ही एक डिवाइस से मेल खाता है। यदि कोई गुण चिह्नित नहीं है <i>Y</i> मैच, फिर एक नया उपकरण प्रविष्टि बनाई जाएगी, जिसके परिणामस्वरूप डुप्लिकेट डिवाइस प्रविष्टियों का परिणाम हो सकता है। उन स्थितियों में जहां संपत्तियों को डुप्लिकेट किया जाता है, उदाहरण के लिए एक dbus_id को VM क्लोन के दौरान कॉपी किया जाता है, फिर एक मौजूदा उपकरण गलत तरीके से ओवरराइट / अद्यतन किया जा सकता है, इसके बजाय एक नई प्रविष्टि बनाई जा रही है जिसके परिणामस्वरूप लापता डिवाइस हो सकते हैं।';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'यह किसी दिए गए संगठन में एक ओवरलैपिंग एड्रेस स्पेस नहीं है। आदर्श नहीं, बल्कि असामान्य नहीं है।';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'यह अन्य टीयर मदरबोर्ड निर्माताओं के लिए बहुत आम है, यह सेट नहीं करने के लिए, यह सब करने के लिए <i>0</i>सभी <i>एफ</i>S.';

$GLOBALS["lang"]['Italian'] = 'इतालवी';

$GLOBALS["lang"]['Italy'] = 'इटली';

$GLOBALS["lang"]['Items not in Baseline'] = 'बेसलाइन में नहीं';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON आयात करने के लिए';

$GLOBALS["lang"]['Jamaica'] = 'जमैका';

$GLOBALS["lang"]['January'] = 'जनवरी';

$GLOBALS["lang"]['Japan'] = 'जापान';

$GLOBALS["lang"]['Japanese'] = 'जापानी';

$GLOBALS["lang"]['Jersey'] = 'जर्सी';

$GLOBALS["lang"]['Jordan'] = 'जॉर्डन';

$GLOBALS["lang"]['July'] = 'जुलाई';

$GLOBALS["lang"]['June'] = 'जून';

$GLOBALS["lang"]['Kazakhstan'] = 'कज़ाखस्तान';

$GLOBALS["lang"]['Kenya'] = 'केन्या';

$GLOBALS["lang"]['kernel_version'] = 'कर्नेल संस्करण';

$GLOBALS["lang"]['Kernel Version'] = 'कर्नेल संस्करण';

$GLOBALS["lang"]['Key'] = 'कुंजी';

$GLOBALS["lang"]['Key Components'] = 'मुख्य घटक';

$GLOBALS["lang"]['Key Password (optional)'] = 'कुंजी पासवर्ड (वैकल्पिक)';

$GLOBALS["lang"]['keys'] = 'कुंजी';

$GLOBALS["lang"]['Keys'] = 'कुंजी';

$GLOBALS["lang"]['Kiribati'] = 'किरिबाती';

$GLOBALS["lang"]['Korea'] = 'कोरिया';

$GLOBALS["lang"]['Korean'] = 'कोरियाई';

$GLOBALS["lang"]['Kuwait'] = 'कुवैत';

$GLOBALS["lang"]['Kyrgyz'] = 'किर्गीज़';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyz गणराज्य';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP समूह';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'इस उपयोगकर्ता के लिए LDAP की खोज की गई थी और उनका खाता पाया गया था।';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'इस उपयोगकर्ता के लिए LDAP की खोज की गई थी और उनका खाता नहीं मिला था। LDAP सर्वर लॉग की जाँच करें। उपयोगकर्ता क्रेडेंशियल काम किया है, लेकिन उपयोगकर्ता नहीं मिला था। इसके अलावा, जब आपने ओपन-ऑडिट में LDAP सर्वर बनाया तो आपको सही बेस डीएन विशेषताओं को निर्दिष्ट किया है।';

$GLOBALS["lang"]['lang'] = 'भाषा';

$GLOBALS["lang"]['Lang'] = 'भाषा';

$GLOBALS["lang"]['language'] = 'भाषा';

$GLOBALS["lang"]['Language'] = 'भाषा';

$GLOBALS["lang"]['Lao'] = 'लाओ';

$GLOBALS["lang"]['last_changed'] = 'अंतिम परिवर्तन';

$GLOBALS["lang"]['Last Changed'] = 'अंतिम परिवर्तन';

$GLOBALS["lang"]['last_finished'] = 'अंतिम समाप्त';

$GLOBALS["lang"]['Last Finished'] = 'अंतिम समाप्त';

$GLOBALS["lang"]['last_logon'] = 'अंतिम लोगो';

$GLOBALS["lang"]['Last Logon'] = 'अंतिम लोगो';

$GLOBALS["lang"]['Last Name'] = 'अंतिम नाम';

$GLOBALS["lang"]['last_os_update'] = 'Last Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Last Os Update';

$GLOBALS["lang"]['last_result'] = 'अंतिम परिणाम';

$GLOBALS["lang"]['Last Result'] = 'अंतिम परिणाम';

$GLOBALS["lang"]['last_run'] = 'अंतिम रन';

$GLOBALS["lang"]['Last Run'] = 'अंतिम रन';

$GLOBALS["lang"]['last_seen'] = 'अंतिम तिथि';

$GLOBALS["lang"]['Last Seen'] = 'अंतिम तिथि';

$GLOBALS["lang"]['last_seen_by'] = 'अंतिम तिथि द्वारा';

$GLOBALS["lang"]['Last Seen By'] = 'अंतिम तिथि द्वारा';

$GLOBALS["lang"]['last_user'] = 'अंतिम उपयोगकर्ता';

$GLOBALS["lang"]['Last User'] = 'अंतिम उपयोगकर्ता';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'पिछले ऊपर WMI है। विंडोज के लिए लिनक्स में, प्रशासक स्तर पहुंच वाला एक उपयोगकर्ता पसंद किया जाता है (विकि पर लक्ष्य क्लाइंट कॉन्फ़िगरेशन देखें)।';

$GLOBALS["lang"]['lastModified'] = 'Lastmodified';

$GLOBALS["lang"]['LastModified'] = 'Lastmodified';

$GLOBALS["lang"]['latitude'] = 'अक्षांश';

$GLOBALS["lang"]['Latitude'] = 'अक्षांश';

$GLOBALS["lang"]['Latvia'] = 'लातविया';

$GLOBALS["lang"]['Latvian'] = 'लातवियाई';

$GLOBALS["lang"]['Layout'] = 'लेआउट';

$GLOBALS["lang"]['ldap'] = 'लड्डू';

$GLOBALS["lang"]['Ldap'] = 'लड्डू';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn खाता';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn खाता';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn पासवर्ड';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn पासवर्ड';

$GLOBALS["lang"]['Learn About'] = 'के बारे में जानें';

$GLOBALS["lang"]['Learn More'] = 'अधिक जानें';

$GLOBALS["lang"]['lease_expiry_date'] = 'अवकाश समाप्ति तिथि';

$GLOBALS["lang"]['Lease Expiry Date'] = 'अवकाश समाप्ति तिथि';

$GLOBALS["lang"]['Lebanon'] = 'लेबनान';

$GLOBALS["lang"]['legal_requirements'] = 'कानूनी आवश्यकताएं';

$GLOBALS["lang"]['Legal Requirements'] = 'कानूनी आवश्यकताएं';

$GLOBALS["lang"]['Lesotho'] = 'लेसोथो';

$GLOBALS["lang"]['Less Than'] = 'कम से कम';

$GLOBALS["lang"]['Less Than or Equals'] = 'कम से कम या बराबर';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'चलो लॉगिंग को डिबग करने के लिए निर्धारित करते हैं। फ़ाइल कॉपी करें:';

$GLOBALS["lang"]['level'] = 'स्तर';

$GLOBALS["lang"]['Level'] = 'स्तर';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'लाभ उठाने के लिए आवश्यक विशेषाधिकारों के स्तर (कोई नहीं, कम, उच्च).';

$GLOBALS["lang"]['Liberia'] = 'लाइबेरिया';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'पुस्तकालयों (i, कोड कि किसी अन्य कार्यक्रम में शामिल हो सकता है)। ये आम तौर पर Wordpress एक्सटेंशन, Drupal एक्सटेंशन, node.js पुस्तकालयों, Android / iPhone / Windows पुस्तकालयों, python पुस्तकालयों, आदि जैसे आइटम हैं।';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'लाइसेंस';

$GLOBALS["lang"]['License Key'] = 'लाइसेंस कुंजी';

$GLOBALS["lang"]['License Required'] = 'लाइसेंस आवश्यक';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'लाइसेंस प्राप्त उपयोगकर्ता नियमों को जोड़ने या संशोधित करने के लिए स्वतंत्र हैं जैसा कि आप फिट देखते हैं। यदि आपके पास एक एसएनएमपी ओआईडी वाला एक उपकरण है जो पहले से ही फ़ाइल में मॉडल से मेल नहीं खाता है - अब आप इसे आसानी से जोड़ सकते हैं। हमें एक पैच प्रदान करने के लिए इंतजार नहीं करना चाहिए और इसे आपके लिए कोड बेस में जोड़ें।<br/><br/>जब आप एक नियम प्रविष्टि बनाते हैं, तो आपको एक नाम और इनपुट और आउटपुट की सूची प्रदान करने की आवश्यकता होगी। इनपुट और आउटपुट डेटाबेस के भीतर JSON सरणी के रूप में संग्रहीत किए जाते हैं।<br/><br/>इनपुट में एक टेबल और विशेषता, एक ऑपरेटर और एक मूल्य है। जब स्थिति को निष्पादित किया जाता है, तो यह काम करता है: यदि $table। $attribute $operator $मूल्य तब आउटपुट लागू करें।<br/><br/>एक उदाहरण के लिए एक SNMP OID मैच और सेट मॉडल नीचे है।<br/>';

$GLOBALS["lang"]['Licenses'] = 'लाइसेंस';

$GLOBALS["lang"]['Liechtenstein'] = 'लिकटेंस्टीन';

$GLOBALS["lang"]['Like'] = 'लाइक';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'अन्य विशेषताओं की तरह, अतिरिक्त फ़ील्ड्स को संपादित किया जा सकता है। जैसा कि आप सामान्य रूप से करेंगे, बल्क एडिट फ़ंक्शन का उपयोग करें और आप देखेंगे कि अतिरिक्त फ़ील्ड इनपुट के लिए उपलब्ध हैं।';

$GLOBALS["lang"]['Like versus Equals'] = 'बनाम समान';

$GLOBALS["lang"]['limit'] = 'सीमा';

$GLOBALS["lang"]['Limit'] = 'सीमा';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'पहले X वस्तुओं को क्वेरी को सीमित करें।';

$GLOBALS["lang"]['Limited to 100 rows.'] = '100 पंक्तियों तक सीमित।';

$GLOBALS["lang"]['line_amount'] = 'लाइन राशि';

$GLOBALS["lang"]['Line Amount'] = 'लाइन राशि';

$GLOBALS["lang"]['Line Graph'] = 'लाइन ग्राफ़';

$GLOBALS["lang"]['line_number_a'] = 'लाइन नंबर A';

$GLOBALS["lang"]['Line Number A'] = 'लाइन नंबर A';

$GLOBALS["lang"]['line_number_b'] = 'लाइन नंबर बी';

$GLOBALS["lang"]['Line Number B'] = 'लाइन नंबर बी';

$GLOBALS["lang"]['line_text'] = 'लाइन टेक्स्ट';

$GLOBALS["lang"]['Line Text'] = 'लाइन टेक्स्ट';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'लाइन चार्ट तारीख या my_date, विवरण या my_description और गिनती वापस करना चाहिए।';

$GLOBALS["lang"]['link'] = 'लिंक';

$GLOBALS["lang"]['Link'] = 'लिंक';

$GLOBALS["lang"]['Link (Advanced)'] = 'लिंक (उन्नत)';

$GLOBALS["lang"]['Linked Files'] = 'लिंक्ड फ़ाइलें';

$GLOBALS["lang"]['links'] = 'लिंक';

$GLOBALS["lang"]['Links'] = 'लिंक';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'इस खोज को संबद्ध क्लाउड (यदि आवश्यक हो) से लिंक करें। लिंक <code>clouds.id</code>।';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'लिंक <code>discovery_scan_options.id</code>।';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'लिंक <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'लिंक <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'लिनक्स';

$GLOBALS["lang"]['Linux Packages'] = 'लिनक्स पैकेज';

$GLOBALS["lang"]['List'] = 'सूची';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'प्रत्येक डिवाइस के लिए सभी NMAP पोर्ट, प्रोटोकॉल और कार्यक्रम सूचीबद्ध करें';

$GLOBALS["lang"]['List Devices'] = 'सूची उपकरण';

$GLOBALS["lang"]['List Discoveries'] = 'सूची डिस्कवरी';

$GLOBALS["lang"]['list_table_format'] = 'सूची तालिका प्रारूप';

$GLOBALS["lang"]['List Table Format'] = 'सूची तालिका प्रारूप';

$GLOBALS["lang"]['List Tables'] = 'सूची तालिका';

$GLOBALS["lang"]['Lithuania'] = 'भारत';

$GLOBALS["lang"]['Lithuanian'] = 'लेबनान';

$GLOBALS["lang"]['Load Balancing'] = 'लोड संतुलन';

$GLOBALS["lang"]['Local'] = 'स्थानीय';

$GLOBALS["lang"]['Local Area Network'] = 'स्थानीय क्षेत्र नेटवर्क';

$GLOBALS["lang"]['local_port'] = 'स्थानीय पोर्ट';

$GLOBALS["lang"]['Local Port'] = 'स्थानीय पोर्ट';

$GLOBALS["lang"]['Local area network'] = 'स्थानीय क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Localhost'] = 'स्थानीयहोस्ट';

$GLOBALS["lang"]['Localisation'] = 'स्थानीयकरण';

$GLOBALS["lang"]['Location'] = 'स्थान';

$GLOBALS["lang"]['Location A'] = 'स्थान A';

$GLOBALS["lang"]['Location B'] = 'स्थान B';

$GLOBALS["lang"]['location_id'] = 'स्थान ID';

$GLOBALS["lang"]['Location ID'] = 'स्थान ID';

$GLOBALS["lang"]['location_id_a'] = 'स्थान ID A';

$GLOBALS["lang"]['Location ID A'] = 'स्थान ID A';

$GLOBALS["lang"]['location_id_b'] = 'स्थान ID B';

$GLOBALS["lang"]['Location ID B'] = 'स्थान ID B';

$GLOBALS["lang"]['location_latitude'] = 'स्थान अक्षांश';

$GLOBALS["lang"]['Location Latitude'] = 'स्थान अक्षांश';

$GLOBALS["lang"]['location_level'] = 'स्थान स्तर';

$GLOBALS["lang"]['Location Level'] = 'स्थान स्तर';

$GLOBALS["lang"]['location_longitude'] = 'स्थान देशांतर';

$GLOBALS["lang"]['Location Longitude'] = 'स्थान देशांतर';

$GLOBALS["lang"]['Location Name'] = 'स्थान';

$GLOBALS["lang"]['location_rack'] = 'स्थान रैक';

$GLOBALS["lang"]['Location Rack'] = 'स्थान रैक';

$GLOBALS["lang"]['location_rack_position'] = 'स्थान';

$GLOBALS["lang"]['Location Rack Position'] = 'स्थान';

$GLOBALS["lang"]['location_rack_size'] = 'स्थान रैक आकार';

$GLOBALS["lang"]['Location Rack Size'] = 'स्थान रैक आकार';

$GLOBALS["lang"]['location_room'] = 'स्थान कक्ष';

$GLOBALS["lang"]['Location Room'] = 'स्थान कक्ष';

$GLOBALS["lang"]['location_suite'] = 'स्थान सूट';

$GLOBALS["lang"]['Location Suite'] = 'स्थान सूट';

$GLOBALS["lang"]['Locations'] = 'स्थान';

$GLOBALS["lang"]['Locations in this'] = 'इसमें स्थान';

$GLOBALS["lang"]['log'] = 'लॉग इन';

$GLOBALS["lang"]['Log'] = 'लॉग इन';

$GLOBALS["lang"]['log_format'] = 'लॉग इन करें';

$GLOBALS["lang"]['Log Format'] = 'लॉग इन करें';

$GLOBALS["lang"]['Log Line'] = 'लॉग इन';

$GLOBALS["lang"]['log_path'] = 'लॉग इन';

$GLOBALS["lang"]['Log Path'] = 'लॉग इन';

$GLOBALS["lang"]['log_rotation'] = 'लॉग इन करें';

$GLOBALS["lang"]['Log Rotation'] = 'लॉग इन करें';

$GLOBALS["lang"]['log_status'] = 'स्थिति';

$GLOBALS["lang"]['Log Status'] = 'स्थिति';

$GLOBALS["lang"]['Logging in'] = 'लॉग इन';

$GLOBALS["lang"]['Logical Cores '] = 'तार्किक कोर ';

$GLOBALS["lang"]['logical_count'] = 'तार्किक गणना';

$GLOBALS["lang"]['Logical Count'] = 'तार्किक गणना';

$GLOBALS["lang"]['Logout'] = 'लॉग इन';

$GLOBALS["lang"]['Logs'] = 'लॉग';

$GLOBALS["lang"]['longitude'] = 'दीर्घायु';

$GLOBALS["lang"]['Longitude'] = 'दीर्घायु';

$GLOBALS["lang"]['low'] = 'कम';

$GLOBALS["lang"]['Low'] = 'कम';

$GLOBALS["lang"]['Lower Case'] = 'लोअर केस';

$GLOBALS["lang"]['Lowercase Hostname'] = 'लोअरकेस होस्टनाम';

$GLOBALS["lang"]['Luxembourg'] = 'लक्ज़मबर्ग';

$GLOBALS["lang"]['MAC Address'] = 'मैक पता';

$GLOBALS["lang"]['MAC Manufacturer'] = 'मैक निर्माता';

$GLOBALS["lang"]['mac'] = 'मैक';

$GLOBALS["lang"]['Mac'] = 'मैक';

$GLOBALS["lang"]['Mac Address'] = 'मैक पता';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS पैकेज';

$GLOBALS["lang"]['Macao'] = 'मकाऊ';

$GLOBALS["lang"]['Macedonia'] = 'मैसेडोनिया';

$GLOBALS["lang"]['Madagascar'] = 'मेडागास्कर';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'जोखिम आकलन और उपचार के रिकॉर्ड बनाए रखें';

$GLOBALS["lang"]['maintenance_expires'] = 'रखरखाव';

$GLOBALS["lang"]['Maintenance Expires'] = 'रखरखाव';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'मेरी डिफ़ॉल्ट डैशबोर्ड बनाओ';

$GLOBALS["lang"]['Make this install a Collector'] = 'इसे एक कलेक्टर स्थापित करें';

$GLOBALS["lang"]['Malawi'] = 'मलावी';

$GLOBALS["lang"]['Malay'] = 'मलय';

$GLOBALS["lang"]['Malaysia'] = 'मलेशिया';

$GLOBALS["lang"]['Maldives'] = 'मालदीव';

$GLOBALS["lang"]['Mali'] = 'माली';

$GLOBALS["lang"]['Malta'] = 'माल्टा';

$GLOBALS["lang"]['Manage'] = 'प्रबंधन';

$GLOBALS["lang"]['Manage Licenses'] = 'लाइसेंस प्रबंधित करें';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMIS में प्रबंधन';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'घटनाओं और गैर-अनुरूपता का प्रबंधन';

$GLOBALS["lang"]['Managed'] = 'प्रबंधित';

$GLOBALS["lang"]['managed_by'] = 'द्वारा प्रबंधित';

$GLOBALS["lang"]['Managed By'] = 'द्वारा प्रबंधित';

$GLOBALS["lang"]['Manual Input'] = 'मैनुअल इनपुट';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'मैन्युअल रूप से उपयोगकर्ता द्वारा निर्धारित, उत्पादन के लिए डिफ़ॉल्ट।';

$GLOBALS["lang"]['Manually set by user.'] = 'उपयोगकर्ता द्वारा मैन्युअल रूप से सेट किया गया।';

$GLOBALS["lang"]['manufacture_date'] = 'निर्माण तिथि';

$GLOBALS["lang"]['Manufacture Date'] = 'निर्माण तिथि';

$GLOBALS["lang"]['manufacturer'] = 'निर्माता';

$GLOBALS["lang"]['Manufacturer'] = 'निर्माता';

$GLOBALS["lang"]['manufacturer_code'] = 'निर्माता कोड';

$GLOBALS["lang"]['Manufacturer Code'] = 'निर्माता कोड';

$GLOBALS["lang"]['Map'] = 'नक्शा';

$GLOBALS["lang"]['maps'] = 'नक्शे';

$GLOBALS["lang"]['Maps'] = 'नक्शे';

$GLOBALS["lang"]['March'] = 'मार्च';

$GLOBALS["lang"]['Marshall Islands'] = 'मार्शल द्वीप';

$GLOBALS["lang"]['Martinique'] = 'मार्टिनिक';

$GLOBALS["lang"]['mask'] = 'मास्क';

$GLOBALS["lang"]['Mask'] = 'मास्क';

$GLOBALS["lang"]['Match'] = 'मैच';

$GLOBALS["lang"]['match_options'] = 'मैच विकल्प';

$GLOBALS["lang"]['Match Options'] = 'मैच विकल्प';

$GLOBALS["lang"]['Match Order'] = 'मैच ऑर्डर';

$GLOBALS["lang"]['Match Process'] = 'मैच प्रक्रिया';

$GLOBALS["lang"]['match_string'] = 'मैच स्ट्रिंग';

$GLOBALS["lang"]['Match String'] = 'मैच स्ट्रिंग';

$GLOBALS["lang"]['Matching Attribute'] = 'मैचिंग एट्रिब्यू';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'मैचिंग डिवाइस - ऑर्गिड सहित';

$GLOBALS["lang"]['Matching Linux Devices'] = 'मिलान लिनक्स उपकरण';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'मैचिंग निम्नलिखित क्रम में आयोजित किया जाता है';

$GLOBALS["lang"]['maturity_level'] = 'परिपक्वता स्तर';

$GLOBALS["lang"]['Maturity Level'] = 'परिपक्वता स्तर';

$GLOBALS["lang"]['maturity_score'] = 'परिपक्वता स्कोर';

$GLOBALS["lang"]['Maturity Score'] = 'परिपक्वता स्कोर';

$GLOBALS["lang"]['Mauritania'] = 'मॉरिटानिया';

$GLOBALS["lang"]['Mauritius'] = 'मॉरीशस';

$GLOBALS["lang"]['max_file_size'] = 'मैक्स फाइल साइज';

$GLOBALS["lang"]['Max File Size'] = 'मैक्स फाइल साइज';

$GLOBALS["lang"]['Max Length'] = 'अधिकतम लंबाई';

$GLOBALS["lang"]['max_size'] = 'अधिकतम आकार';

$GLOBALS["lang"]['Max Size'] = 'अधिकतम आकार';

$GLOBALS["lang"]['May'] = 'मई';

$GLOBALS["lang"]['Mayotte'] = 'मेयोट';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'भेद्यता की संभावना को मापता है, और शोषण तकनीकों की वर्तमान स्थिति पर आधारित है, कोड उपलब्धता का फायदा उठाता है, या सक्रिय, "इन-द-विल्ड" शोषण करता है।';

$GLOBALS["lang"]['medium'] = 'मध्यम';

$GLOBALS["lang"]['Medium'] = 'मध्यम';

$GLOBALS["lang"]['members'] = 'सदस्य';

$GLOBALS["lang"]['Members'] = 'सदस्य';

$GLOBALS["lang"]['memory'] = 'स्मृति';

$GLOBALS["lang"]['Memory'] = 'स्मृति';

$GLOBALS["lang"]['memory_count'] = 'मेमोरी गणना';

$GLOBALS["lang"]['Memory Count'] = 'मेमोरी गणना';

$GLOBALS["lang"]['memory_slot_count'] = 'मेमोरी स्लॉट गणना';

$GLOBALS["lang"]['Memory Slot Count'] = 'मेमोरी स्लॉट गणना';

$GLOBALS["lang"]['menu_category'] = 'मेनू श्रेणी';

$GLOBALS["lang"]['Menu Category'] = 'मेनू श्रेणी';

$GLOBALS["lang"]['menu_display'] = 'मेनू प्रदर्शन';

$GLOBALS["lang"]['Menu Display'] = 'मेनू प्रदर्शन';

$GLOBALS["lang"]['message'] = 'संदेश';

$GLOBALS["lang"]['Message'] = 'संदेश';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['metric'] = 'मीट्रिक';

$GLOBALS["lang"]['Metric'] = 'मीट्रिक';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'मेट्रोपॉलिटन एरिया नेटवर्क';

$GLOBALS["lang"]['Metropolitan area network'] = 'मेट्रोपॉलिटन क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Mexico'] = 'मेक्सिको';

$GLOBALS["lang"]['Micronesia'] = 'माइक्रोनेशिया';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'माइक्रोटाइम';

$GLOBALS["lang"]['Microtime'] = 'माइक्रोटाइम';

$GLOBALS["lang"]['minute'] = 'मिनट';

$GLOBALS["lang"]['Minute'] = 'मिनट';

$GLOBALS["lang"]['Minutes'] = 'मिनट';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'अंतिम लेखा परीक्षा के बाद से मिनट ग्रेटर हैं';

$GLOBALS["lang"]['model'] = 'मॉडल';

$GLOBALS["lang"]['Model'] = 'मॉडल';

$GLOBALS["lang"]['model_family'] = 'परिवार';

$GLOBALS["lang"]['Model Family'] = 'परिवार';

$GLOBALS["lang"]['Modified'] = 'संशोधित';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'मौजूदा स्क्रिप्ट को संशोधित करना';

$GLOBALS["lang"]['module'] = 'मॉड्यूल';

$GLOBALS["lang"]['Module'] = 'मॉड्यूल';

$GLOBALS["lang"]['module_index'] = 'मॉड्यूल सूचकांक';

$GLOBALS["lang"]['Module Index'] = 'मॉड्यूल सूचकांक';

$GLOBALS["lang"]['Modules'] = 'मॉड्यूल';

$GLOBALS["lang"]['Moldova'] = 'मोल्दोवा';

$GLOBALS["lang"]['Monaco'] = 'मोनाको';

$GLOBALS["lang"]['Monday'] = 'सोमवार';

$GLOBALS["lang"]['Mongolia'] = 'मंगोलिया';

$GLOBALS["lang"]['monitor'] = 'मॉनिटर';

$GLOBALS["lang"]['Monitor'] = 'मॉनिटर';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'मॉनिटर और माप ISMS प्रदर्शन';

$GLOBALS["lang"]['Montenegro'] = 'मोंटेनेग्रो';

$GLOBALS["lang"]['month'] = 'महीना';

$GLOBALS["lang"]['Month'] = 'महीना';

$GLOBALS["lang"]['Montserrat'] = 'मॉन्टसेराट';

$GLOBALS["lang"]['More Information'] = 'अधिक जानकारी';

$GLOBALS["lang"]['More Secure'] = 'सुरक्षित';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'अधिक विस्तृत SQL एक सीमा के भीतर समूह विशेषताओं के लिए इस्तेमाल किया जा सकता है। नीचे SQL को उन उपकरणों के लिए दिखाया गया है जो पिछले देखे गए दिनांक सीमाओं द्वारा समूहीकृत पाई चार्ट में नहीं देखा गया है।';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'इस बारे में अधिक जानकारी एक सहायक स्टैक ओवरफ्लो थ्रेड पर मिल सकती है';

$GLOBALS["lang"]['Morocco'] = 'मोरक्को';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'सबसे अधिक संभावना विंडोज फ़ायरवॉल (या एक तीसरे पक्ष के फ़ायरवॉल) कनेक्शन प्रयास को अस्वीकार कर रहा है।<br/><br/>कृपया लक्ष्य विंडोज मशीन पर लॉग ऑन करें और फ़ायरवॉल सेटिंग्स की जांच करें।';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'अधिकांश ओपन-ऑडिट को GNU AGPL के साथ लाइसेंस दिया गया है।';

$GLOBALS["lang"]['motherboard'] = 'मदरबोर्ड';

$GLOBALS["lang"]['Motherboard'] = 'मदरबोर्ड';

$GLOBALS["lang"]['mount_point'] = 'माउंट प्वाइंट';

$GLOBALS["lang"]['Mount Point'] = 'माउंट प्वाइंट';

$GLOBALS["lang"]['mount_type'] = 'माउंट प्रकार';

$GLOBALS["lang"]['Mount Type'] = 'माउंट प्रकार';

$GLOBALS["lang"]['Mozambique'] = 'मोज़ाम्बिक';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'पिंग का जवाब देना चाहिए। यदि सेट किया गया है, तो Nmap एक ICMP प्रतिक्रिया को भेजने और सुनने का प्रयास करेगा। यदि डिवाइस जवाब नहीं देता है, तो आगे कोई स्कैनिंग नहीं होगी।<br/>पहले एक उपकरण को स्कैनिंग जारी रखने के लिए ओपन-ऑडिट के लिए एक पिंग का जवाब नहीं दिया गया।';

$GLOBALS["lang"]['Must Respond to Ping'] = 'पिंग का जवाब देना चाहिए';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'मेरा एंटीवायरस मुझे चीजों को अस्वीकार / अनुमति देने के लिए प्रेरित करता है';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'मेरा समय ओपन-ऑडिट में बंद है';

$GLOBALS["lang"]['Myanmar'] = 'भारत';

$GLOBALS["lang"]['N+1'] = 'एन+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'एनएमआईएस बिजनेस सर्विस';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS ग्राहक';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS उपकरण विकल्प';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS डिवाइस चयन';

$GLOBALS["lang"]['NMIS Field Name'] = 'एनएमआईएस फील्ड का नाम';

$GLOBALS["lang"]['NMIS Field Type'] = 'एनएमआईएस फील्ड प्रकार';

$GLOBALS["lang"]['NMIS Group'] = 'एनएमआईएस ग्रुप';

$GLOBALS["lang"]['NMIS Poller'] = 'एनएमआईएस पोलर';

$GLOBALS["lang"]['NMIS Role'] = 'एनएमआईएस भूमिका';

$GLOBALS["lang"]['NOTE'] = 'नोट';

$GLOBALS["lang"]['NOTE #2'] = 'नोट #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'नोट - डेटटाइम प्रारूपों पर अधिक जानकारी के लिए, देखें';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'नोट - यदि आप एक डाउनलोड CSV, XML या JSON प्रारूप (या तो एक एकल क्रेडेंशियल या पूर्ण संग्रह) का अनुरोध करते हैं तो वास्तविक क्रेडेंशियल विवरण भेजा जाएगा। एन्क्रिप्टेड स्ट्रिंग नहीं, वास्तविक उपयोगकर्ता नाम, पासवर्ड, सामुदायिक स्ट्रिंग आदि। किसी भी संवेदनशील विवरण को वेब जीयूआई में प्रदर्शित नहीं किया जाता है, लेकिन अन्य प्रारूपों के माध्यम से उपलब्ध कराया जाता है। इस निर्यात को रोकने के लिए एक कॉन्फ़िगरेशन आइटम को डिक्रिप्ट_credentials कहा जाता है।';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'नोट - दायर डेटा में घुंघराले कोष्ठक के रूप में इस्तेमाल किया जाना चाहिए (ऊपर अन्य उदाहरणों के अनुसार प्रतिस्थापित नहीं किया गया)।';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'नोट - आप सादे टेक्स्ट क्रेडेंशियल्स को नीचे प्रदर्शित होने से रोक सकते हैं <code>decrypt_credentials</code> to <code>n</code>।';

$GLOBALS["lang"]['name'] = 'नाम';

$GLOBALS["lang"]['Name'] = 'नाम';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'नाम: आप इस क्षेत्र को दे रहे हैं। आदर्श रूप से यह अद्वितीय होना चाहिए।';

$GLOBALS["lang"]['Namibia'] = 'नामीबिया';

$GLOBALS["lang"]['Nauru'] = 'नाउरू';

$GLOBALS["lang"]['Nepal'] = 'नेपाल';

$GLOBALS["lang"]['net_index'] = 'नेट इंडेक्स';

$GLOBALS["lang"]['Net Index'] = 'नेट इंडेक्स';

$GLOBALS["lang"]['Netherlands Antilles'] = 'नीदरलैंड एंटिल्स';

$GLOBALS["lang"]['Netherlands the'] = 'नीदरलैंड';

$GLOBALS["lang"]['netmask'] = 'नेटमास्क';

$GLOBALS["lang"]['Netmask'] = 'नेटमास्क';

$GLOBALS["lang"]['netstat'] = 'नेटस्टैट';

$GLOBALS["lang"]['Netstat'] = 'नेटस्टैट';

$GLOBALS["lang"]['Netstat Policies'] = 'नेटस्टैट नीति';

$GLOBALS["lang"]['Netstat Ports'] = 'नेटस्टैट पोर्ट';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'नेटस्टैट पोर्ट्स पोर्ट नंबर, प्रोटोकॉल और प्रोग्राम के संयोजन का उपयोग करते हैं। यदि सभी पॉलिसी पास कर रहे हैं।';

$GLOBALS["lang"]['Network'] = 'नेटवर्क';

$GLOBALS["lang"]['network_address'] = 'नेटवर्क पता';

$GLOBALS["lang"]['Network Address'] = 'नेटवर्क पता';

$GLOBALS["lang"]['Network Discovery'] = 'नेटवर्क डिस्कवरी';

$GLOBALS["lang"]['network_domain'] = 'नेटवर्क डोमेन';

$GLOBALS["lang"]['Network Domain'] = 'नेटवर्क डोमेन';

$GLOBALS["lang"]['Network Types'] = 'नेटवर्क प्रकार';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'नेटवर्क प्रकार डिफ़ॉल्ट रूप से स्थानीय क्षेत्र नेटवर्क को सेट किया गया है, लेकिन उपयोगकर्ता द्वारा उन्हें फिट देखने के रूप में बदला जा सकता है। समर्थित प्रकार नीचे हैं ( विकिपीडिया के लिए धन्यवाद)।<br/><br/>एक नेटवर्क को इसकी भौतिक क्षमता या उसके संगठनात्मक उद्देश्य की विशेषता हो सकती है। उपयोगकर्ता प्राधिकरण और एक्सेस अधिकार सहित नेटवर्क का उपयोग तदनुसार भिन्न होता है।';

$GLOBALS["lang"]['networks'] = 'नेटवर्क';

$GLOBALS["lang"]['Networks'] = 'नेटवर्क';

$GLOBALS["lang"]['Networks Generated By'] = 'द्वारा उत्पन्न नेटवर्क';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'नेटवर्क हर खोज के साथ अद्यतन कर रहे हैं। इस तरह के IPs उपलब्ध और IPs के रूप में इस्तेमाल किया, गेटवे, DHCP और DNS सर्वर के साथ पाया जाता है।';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'नेटवर्क अलग तरीके से जवाब देते हैं कि वे कैसे कॉन्फ़िगर किए जाते हैं। कुछ रूटर और / या फायरवॉल जवाब दे सकते हैं <i>ओर</i> उनके इंटरफेस के दूसरे पक्ष में आईपीएस को ओपन-ऑडिट सर्वर पर भेजना। यह देखने के लिए काफी आम है कि Nmap ने SNMP (UDP पोर्ट 161) के लिए एक जांच की रिपोर्ट की है, जो उन उपकरणों के लिए खुली थी। यह भ्रामक है क्योंकि उस IP पर कोई उपकरण नहीं है, फिर भी यह डेटाबेस में एक उपकरण प्रविष्टि के साथ समाप्त होता है। 99.9% समय तक, यह ओपन-ऑडिट नहीं है, और न ही Nmap भी है, लेकिन नेटवर्क इस मुद्दे को पैदा करता है। अब जब हमारे पास खुले या बंद होने के कारण ओपन ट्रूफ्टर्ड पोर्ट्स का इलाज करने का विकल्प है, तो हम इस भ्रम को खत्म कर सकते हैं। एंटरप्राइज़ उपयोगकर्ताओं के पास प्रति खोज के आधार पर इसे बदलने का विकल्प भी है (केवल मध्यम (क्लासिक) आइटम का उपयोग करने के बजाय, ऊपर)।';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'एक CIDR मास्क का उपयोग करके नेटवर्क';

$GLOBALS["lang"]['New Building Name'] = 'न्यू बिल्डिंग नाम';

$GLOBALS["lang"]['New Caledonia'] = 'न्यू कैलेडोनिया';

$GLOBALS["lang"]['New Floor Name'] = 'नया नाम';

$GLOBALS["lang"]['New Room Name'] = 'नया कमरा';

$GLOBALS["lang"]['New Row Name'] = 'नया नाम';

$GLOBALS["lang"]['New Zealand'] = 'न्यूजीलैंड';

$GLOBALS["lang"]['News'] = 'समाचार';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'प्रत्येक बार जब आप अद्यतन प्रश्नों और पैकेज, विन्यास सिफारिशों, रिलीज घोषणाओं, ब्लॉग पोस्ट और अधिक के लिए लॉगिन करते हैं।';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'समाचार आपको नवीनतम फिक्स, घोषणाओं, क्वेरी अपडेट, सॉफ्टवेयर संस्करण और अधिक के साथ अद्यतन रखने का हमारा तरीका है।<br/><br/>आपको विकि के शीर्ष पर रखने की आवश्यकता नहीं है या नई रिलीज के लिए चेक करने की आवश्यकता नहीं है, हम आपको भेज सकते हैं!';

$GLOBALS["lang"]['next_hop'] = 'अगला हॉप';

$GLOBALS["lang"]['Next Hop'] = 'अगला हॉप';

$GLOBALS["lang"]['next_run'] = 'अगला भाग';

$GLOBALS["lang"]['Next Run'] = 'अगला भाग';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'अगला क्लिक <i>अपना खुद का अनुप्रयोग बनाएं</i>।';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'इसके बाद, OK पर क्लिक करें, फिर अपाचे 2.4 सेवा पर राइट क्लिक करें और रिस्टार्ट पर क्लिक करें। हो गया!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'इसके बाद, सही अपाचे 2.4 सेवा पर क्लिक करें और गुण चुनें, फिर लॉग ऑन टैब पर क्लिक करें।';

$GLOBALS["lang"]['Nicaragua'] = 'निकारागुआ';

$GLOBALS["lang"]['Niger'] = 'नाइजर';

$GLOBALS["lang"]['Nigeria'] = 'नाइजीरिया';

$GLOBALS["lang"]['Niue'] = 'नीउ';

$GLOBALS["lang"]['nmap'] = 'साइटमैप';

$GLOBALS["lang"]['Nmap'] = 'साइटमैप';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap पोर्ट स्कैनिंग प्रतिक्रिया';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp पोर्ट';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp पोर्ट';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp पोर्ट';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp पोर्ट';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap यह निर्धारित नहीं कर सकता कि क्या बंदरगाह खुला है क्योंकि पैकेट फ़िल्टरिंग अपनी जांच को बंदरगाह तक पहुंचने से रोकता है। फ़िल्टरिंग एक समर्पित फ़ायरवॉल डिवाइस, राउटर नियम या होस्ट-आधारित फ़ायरवॉल सॉफ्टवेयर से हो सकता है। ये बंदरगाह बहुत कम जानकारी प्रदान करते हैं क्योंकि वे बहुत कम जानकारी प्रदान करते हैं। कभी-कभी वे आईसीएमपी त्रुटि संदेशों जैसे टाइप 3 कोड 13 (destination unreachable: संचार प्रशासनिक रूप से निषिद्ध) के साथ जवाब देते हैं, लेकिन फिल्टर जो केवल जवाब देने के बिना जांच को छोड़ते हैं, वे अधिक आम हैं। यह Nmap को कई बार पुनः प्राप्त करने के लिए मजबूर करता है, अगर जांच को फ़िल्टरिंग के बजाय नेटवर्क भीड़ के कारण गिरा दिया गया था। यह स्कैन को नाटकीय रूप से धीमा कर देता है।';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap इस राज्य में बंदरगाह रखता है जब यह निर्धारित करने में असमर्थ होता है कि क्या एक बंदरगाह खुला है या फ़िल्टर किया गया है। यह स्कैन प्रकार के लिए होता है जिसमें खुले बंदरगाह कोई प्रतिक्रिया नहीं देते हैं। प्रतिक्रिया की कमी का मतलब यह भी हो सकता है कि एक पैकेट फ़िल्टर ने जांच को छोड़ दिया है या किसी भी प्रतिक्रिया को इसका लाभ उठाया गया है। इसलिए Nmap यह सुनिश्चित करने के लिए नहीं जानता कि क्या बंदरगाह खुला है या फ़िल्टर किया जा रहा है। UDP, IP प्रोटोकॉल, FIN, NULL, और Xmas स्कैन इस तरह बंदरगाहों को वर्गीकृत करते हैं।';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'इस लिंक्ड पेज के नीचे Nmap टाइमिंग विवरण पाए जाते हैं';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'ग्राहक';

$GLOBALS["lang"]['Nmis Customer'] = 'ग्राहक';

$GLOBALS["lang"]['nmis_group'] = 'Nmis समूह';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis समूह';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis नाम';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis नाम';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Note';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Note';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis रोल';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis रोल';

$GLOBALS["lang"]['No'] = 'नहीं';

$GLOBALS["lang"]['No Devices Returned'] = 'कोई उपकरण वापसी';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'गूगल मैप्स एपीआई वर्तमान में, आप मानचित्र को प्रदर्शित करने में सक्षम नहीं होंगे।';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'व्यावसायिक या एंटरप्राइज़ के लिए कोई लाइसेंस नहीं';

$GLOBALS["lang"]['No Results'] = 'परिणाम';

$GLOBALS["lang"]['No data in License Key'] = 'लाइसेंस कुंजी में कोई डेटा नहीं';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'इस समय कोई डेटाबेस अपग्रेड की आवश्यकता नहीं है।';

$GLOBALS["lang"]['No devices are in the database.'] = 'डेटाबेस में कोई उपकरण नहीं हैं।';

$GLOBALS["lang"]['Node'] = 'नोड';

$GLOBALS["lang"]['None'] = 'कोई नहीं';

$GLOBALS["lang"]['Norfolk Island'] = 'नोरफोक द्वीप';

$GLOBALS["lang"]['Normal'] = 'सामान्य';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'उत्तरी मारियाना द्वीप';

$GLOBALS["lang"]['Norway'] = 'नॉर्वे';

$GLOBALS["lang"]['Norwegian'] = 'नॉर्वेजियन';

$GLOBALS["lang"]['Not Applicable'] = 'लागू नहीं';

$GLOBALS["lang"]['Not Checked'] = 'जांच नहीं';

$GLOBALS["lang"]['Not Equals'] = 'समान नहीं';

$GLOBALS["lang"]['Not In'] = 'नहीं';

$GLOBALS["lang"]['Not Like'] = 'पसंद नहीं';

$GLOBALS["lang"]['Not Set'] = 'सेट नहीं';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'प्रत्येक कंप्यूटर सफलतापूर्वक एक बेंचमार्क को पूरा करने में सक्षम नहीं होगा। हमने अपने नियंत्रण से परे कारणों के लिए परीक्षण में विफल देखा है। लॉग इन वस्तुओं के लिए आपको सही दिशा में इंगित करने में मदद करना चाहिए।';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = '(Comma seperated) सूची में नहीं';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'आम तौर पर इस्तेमाल नहीं किया जाता है। यदि सेट किया गया है, तो इस उपकरण को एक खुला बंदरगाह (स्कैन विकल्प के अनुसार) के लिए जवाब देने की आवश्यकता है। मैक पते, एआरपी प्रतिक्रिया या पिंग प्रतिक्रिया को जवाब देने के लिए पर्याप्त नहीं माना जाता है। उपयोगी अगर ओपन-ऑडिट सर्वर और लक्ष्य आईपी के बीच एक रूटर या फायरवॉल आईपी पर पोर्ट स्कैन का जवाब दे रहा है।';

$GLOBALS["lang"]['Note'] = 'नोट';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'ध्यान दें - एक माता-पिता का चयन स्वचालित रूप से अपने बच्चों को एक्सेस प्रदान करेगा (हालांकि यह यहाँ नहीं दिखाया जाएगा)।';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'ध्यान दें कि 100 उपकरण एंटरप्राइज़ लाइसेंस में समर्थन शामिल नहीं है।';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'ध्यान दें, आपको स्क्रिप्ट के साथ निष्पादन योग्य बनाने की आवश्यकता हो सकती है';

$GLOBALS["lang"]['Notes'] = 'नोट';

$GLOBALS["lang"]['notes'] = 'नोट';

$GLOBALS["lang"]['Notice'] = 'सूचना';

$GLOBALS["lang"]['notin'] = 'नोटिन';

$GLOBALS["lang"]['Notin'] = 'नोटिन';

$GLOBALS["lang"]['November'] = 'नवंबर';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'अब सब्सक्रिप्शन आईडी के लिए, सभी सेवाओं, सब्सक्रिप्शन पर क्लिक करें और इसे कॉपी करें।';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'अब हमें आपकी सदस्यता के लिए Azure Active निर्देशिका एप्लिकेशन एक्सेस प्रदान करने की आवश्यकता है।<br/><br/>संसाधन समूह पर क्लिक करें और फिर संसाधन समूह आप अपने Azure सक्रिय निर्देशिका अनुप्रयोग के लिए उपयोग करना चाहते हैं।<br/><br/>ऐड क्लिक करें। भूमिका योगदानकर्ता होना चाहिए और फिर ऐप (Open-Audit) की खोज करनी चाहिए। फिर सेव क्लिक करें।<br/><br/>अब एप्लिकेशन में सदस्यता तक पहुंच है, इसलिए हम एपीआई कॉल कर सकते हैं। एपीआई कॉल को आवेदन की ओर से अनुरोध किया जाएगा, न कि आपका उपयोगकर्ता।';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'आदेश';

$GLOBALS["lang"]['OS'] = 'ओएस';

$GLOBALS["lang"]['OS Families'] = 'ओएस परिवार';

$GLOBALS["lang"]['OS Family'] = 'परिवार';

$GLOBALS["lang"]['OS Group'] = 'OS ग्रुप';

$GLOBALS["lang"]['OUTPUTS'] = 'आउटपुट';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'वस्तु पहचान';

$GLOBALS["lang"]['Object Ident'] = 'वस्तु पहचान';

$GLOBALS["lang"]['Obtain top management support'] = 'शीर्ष प्रबंधन समर्थन प्राप्त करें';

$GLOBALS["lang"]['October'] = 'अक्टूबर';

$GLOBALS["lang"]['Offset'] = 'ऑफसेट';

$GLOBALS["lang"]['Okta'] = 'ओक्टा';

$GLOBALS["lang"]['Oman'] = 'ओमान';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'पर';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'विंडोज पर, ओपन-ऑडिट WMI का उपयोग करता है क्योंकि यह लेखा परीक्षा की प्राथमिक विधि है। विंडोज में एक उल्लेखनीय प्रतिष्ठा है जहां रिमोट WMI का संबंध है। यह या तो करता है <i>काम करना</i> या लक्ष्य पर कुछ रहस्य आइटम बदलने की आवश्यकता है। यदि आप दूरस्थ Windows PC की परीक्षा में कठिनाई महसूस कर रहे हैं, तो हमने test_windows_client.vbs नामक एक स्क्रिप्ट बनाई है। आप इस स्क्रिप्ट को चला सकते हैं <strong>स्थानीय</strong> प्रश्न में मशीन पर हस्ताक्षर करने के बाद उपयोगकर्ता जो ऑडिट करने के लिए ओपन-ऑडिट द्वारा उपयोग किया जाता है। स्क्रिप्ट बनाता है <strong>कोई परिवर्तन नहीं</strong> लक्ष्य उपकरणों के लिए। यह नीचे दी गई वस्तुओं के अधिकांश (सभी नहीं) की जांच करता है और विभिन्न गुणों के लिए PASS, FAIL और INFO टैग उत्पन्न करता है। नोट - यदि आपका लक्ष्य सिस्टम सही ढंग से ऑडिट किया जा रहा है, तो आपको किसी भी सेटिंग में बदलाव नहीं करना चाहिए। नीचे कुछ विंडोज पीसी पर मौजूद नहीं हैं जो ऑडिट करने में सक्षम हैं और कुछ मौजूद हैं। यदि विशेष पीसी पर आपकी खोज इरादा के रूप में काम नहीं कर रहे हैं तो केवल सेटिंग्स बदल सकते हैं।';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'कार्य सूची पृष्ठ पर क्लिक करें <i>नया</i> एक कार्य को कॉन्फ़िगर करने के लिए बटन।';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'मैदान पर <i>मैच स्ट्रिंग</i> आपको उस सॉफ़्टवेयर का नाम प्रदान करना चाहिए जिसे आप ट्रैक करना चाहते हैं। आप एक वाइल्डकार्ड के रूप में प्रतिशत संकेत (%) का उपयोग कर सकते हैं, जहां आवश्यक हो।';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'अगले पृष्ठ पर आप एक्सेस कुंजी का चयन करने और अपनी कुंजी देखने या एक नई कुंजी बनाने में सक्षम होंगे।';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'लक्ष्य विंडोज पीसी पर, DCOM उपयोगिता को चलाएं और नीचे दिए गए विशेषताओं को सत्यापित करें। प्रारंभ करें -> रन, DCOMCNFG दर्ज करें और ठीक प्रेस करें। यह DCOMCNFG विंडो खोलेगा।';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'शीर्ष दाईं ओर (मेन्यू बार के नीचे) आप कई बटन देखेंगे। यह आपको दूसरे डैशबोर्ड का चयन करने की अनुमति देता है, वर्तमान डैशबोर्ड को अपने होमपेज के रूप में सेट करता है (यदि यह पहले से ही नहीं है) और वर्तमान डैशबोर्ड को संपादित करता है (यदि आपके पास अनुमति है)।';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'ऑन-प्रिमाइस, क्लाउड नहीं';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'एक बार जब एक अतिरिक्त फील्ड बनाया गया है तो इसका उपयोग प्रश्नों और समूहों में किया जा सकता है जैसे डेटाबेस में किसी अन्य विशेषता।';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'एक बार टिप्पणी करने के बाद, आपका प्रमाणपत्र मान्य हो जाएगा, लेकिन यदि आप स्वयं-सिग्न प्रमाण पत्र का उपयोग कर रहे हैं तो इस सत्यापन को विफल कर सकते हैं और अपने सर्वर को सही ढंग से कॉन्फ़िगर नहीं कर सकते हैं।';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'एक बार जब स्क्रिप्ट एक लक्ष्य पर चली जाती है, तो स्क्रिप्ट खुद को हटा देना चाहिए।';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'एक बार उन प्रारंभिक प्रश्नों (snmp, ssh, wmi) पूरा हो गया है, अगर डिवाइस ऑडिट स्क्रिप्ट (विंडोज, लिनक्स, OSX, AIX, HP-UX, Solaris और ESXi) द्वारा समर्थित है, तो सही ऑडिट स्क्रिप्ट को लक्ष्य और निष्पादित किया जाएगा। ऑडिट स्क्रिप्ट पूरी होने पर स्वयं को हटा देगा। परिणाम को XML फ़ाइल के रूप में लक्ष्य मशीन पर संग्रहीत किया जाएगा। इसके बाद ओपन-ऑडिट सर्वर लक्ष्य पर परिणाम फ़ाइल को संसाधित करने और हटाने के लिए परिणाम फ़ाइल को पुनः प्राप्त करेगा। स्थान ऑडिट स्क्रिप्ट को लक्ष्य डिवाइस पर कॉपी किया जाता है (कम से कम एसएसएच ऑडिट के लिए) खोज_linux_script_directory config आइटम को संपादित करके कॉन्फ़िगर किया जा सकता है। डिफ़ॉल्ट रूप से यह /tmp/ के लिए सेट है। यह बदलने की आवश्यकता हो सकती है यदि /tmp में noexec सेट है। इसके बाद परिणाम फ़ाइल संसाधित की जाती है और डिवाइस विवरण Open-Audit के भीतर अद्यतन किया जाता है।';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'एक बार जब आप निष्पादित बटन पर क्लिक करते हैं, तो ओपन-ऑडिट खोज शुरू करने और उपयोगकर्ता को खोज विवरण पृष्ठ पर लौटने के लिए एक प्रक्रिया शुरू करेगा। नए स्पॉन्ड प्रक्रिया ने कॉन्फ़िगर किए गए खोज विकल्पों को स्वीकार किया और स्कैन किए जाने वाले आईपी पते की प्रारंभिक सूची निर्धारित करने के लिए Nmap कमांड को निष्पादित किया (या यदि उस प्रकार का उपयोग किया जाता है तो सक्रिय निर्देशिका)। प्रत्येक आईपी को स्कैन करने के लिए एक कतार में रखा जाता है। एक बार प्रारंभिक प्रक्रिया पूरी हो गई है (और कतार में स्कैन किए जाने वाले आईपी हैं) प्रत्येक आईपी को समानांतर में स्कैन करने के लिए कई प्रक्रियाएं होंगी। प्रक्रियाओं की इस संख्या विन्यास में विन्यास योग्य है, विशेषता संपादित करें <i>queue_limit</i>। डिफ़ॉल्ट रूप से यह 20 के लिए सेट किया गया है।';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'एक बार जब आपने अपने डिवाइस को संपादित करने के लिए चुना है, तो टेबल के शीर्ष दाईं ओर पेंसिल बटन पर क्लिक करें।';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'एक बार जब आपने ऐसा किया है, तो ओपन-ऑडआईटी आपके उपयोगकर्ता के लोगो के विवरण को कॉन्फ़िगर किए गए Auth विधि के खिलाफ सत्यापित करने का प्रयास करेगा। यदि उपयोगकर्ता वैध क्रेडेंशियल है और <code>use_authorisation</code> सेट है, ओपन-ऑडिट उन समूहों की सूची के लिए पूछेगा जो उपयोगकर्ता संबंधित हैं। यदि उपयोगकर्ता ओपन-ऑडिट रोल्स और ऑर्ग के लिए संबंधित समूहों में है, तो उन रोल्स और ऑर्ग्स को उस उपयोगकर्ता पर लागू किया जाएगा।';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'एक बार जब आपने बेसलाइन परिभाषा बनाई है तो आप इसे उपकरणों के एक निर्दिष्ट समूह के खिलाफ चलाने के लिए शेड्यूल कर सकते हैं।';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'एक बार जब आपके पास उन आइटम हैं, तो ओपन-ऑडिट में एंटरप्राइज़ आप मेनू पर जा सकते हैं -> डिस्कवर -> बादल -> बनाना क्लाउड चुनें <i>अमेज़न AWS</i> टाइप करें और उन्हें पेस्ट करें। Done.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'एक बार जब आपके पास उन आइटम हैं, तो ओपन-ऑडिट में एंटरप्राइज़ आप मेनू पर जा सकते हैं -> डिस्कवर -> बादल -> बनाना क्लाउड चुनें <i>Microsoft Azure</i> टाइप करें और उन्हें पेस्ट करें। Done.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'एक बार जब आपके पास आपका क्लाउड क्रेडेंशियल है, तो यह केवल एक नया क्लाउड बनाने और खोज को चलाने का मामला है - या पहले / फ्यूचर खोजों को शेड्यूल करना। सुनिश्चित करें कि आपके पास अपनी क्लाउड मशीनों पर लॉग ऑन करने के लिए आवश्यक क्रेडेंशियल भी हैं, और यह सब आपके लिए नियमित खोज की तरह ही किया जाता है। आपके क्लाउड के लिए क्रेडेंशियल';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'में से एक <code>3x2</code>, <code>4x2</code>, <code>4x3</code> या <code>4x4</code>।';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'परिसर क्षेत्र नेटवर्क, क्लाउड नेटवर्क, एंटरप्राइज प्राइवेट नेटवर्क, होम एरिया नेटवर्क, स्थानीय क्षेत्र नेटवर्क, मेट्रोपॉलिटन एरिया नेटवर्क, निष्क्रिय ऑप्टिकल लोकल एरिया नेटवर्क, पर्सनल एरिया नेटवर्क, स्टोरेज एरिया नेटवर्क, सिस्टम एरिया नेटवर्क, वर्चुअल प्राइवेट नेटवर्क, वाइड एरिया नेटवर्क, वायरलेस लोकल एरिया नेटवर्क।';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'विकास, आपदा वसूली, मूल्यांकन, पूर्व उत्पादन, उत्पादन, परीक्षण, प्रशिक्षण, उपयोगकर्ता स्वीकृति परीक्षण';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'आवंटित, प्रत्यायोजित, योजना, आरक्षित, unallocated, अज्ञात, unmanaged। आवंटित करने के लिए डिफ़ॉल्ट।';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'में से एक <code>active directory</code> या <code>openldap</code>।';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'में से एक: एंटीवायरस, बैकअप, फ़ायरवॉल, अनुमोदित, प्रतिबंधित, अनदेखा या अन्य।';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'एक अन्य आइटम से सावधान रहना - सुनिश्चित करें कि आप अपने LDAP के होस्टनाम (या fqdn) का उपयोग करें सर्वर जो ओपन-ऑडिट में LDAP प्रविष्टि बनाते समय प्रमाणपत्र में क्या है (केवल LDAP सर्वर IP पता नहीं) से मेल खाता है।';

$GLOBALS["lang"]['Online Documentation'] = 'ऑनलाइन दस्तावेज़ीकरण';

$GLOBALS["lang"]['Open'] = 'खुला';

$GLOBALS["lang"]['Open Data'] = 'ओपन डेटा';

$GLOBALS["lang"]['Open Source'] = 'खुला स्रोत';

$GLOBALS["lang"]['Open-AudIT'] = 'ओपन-ऑडिट';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'ओपन-ऑडिट सामुदायिक स्रोत कोड GitHub पर उपलब्ध है। आपको किसी भी कोड का निरीक्षण करने के लिए प्रोत्साहित किया जाता है, क्योंकि यह खुला स्रोत है - आपको किसी भी समस्या के बारे में पूछने या किसी भी निष्कर्ष की रिपोर्ट करने के लिए प्रोत्साहित किया जाता है। हम हमेशा कोड योगदान, vulnerability रिपोर्ट, या यहां तक कि सरल प्रश्नों को स्वीकार करने के लिए खुश हैं। हम मदद करने के लिए यहाँ हैं।<br/><br/>स्वयं ऑडिट स्क्रिप्ट (विंडोज, लिनक्स, मैकओएस, एट अल) को जानबूझकर पठनीय मूल शेल स्क्रिप्ट (विंडोज के लिए VBScript, *निक्स के लिए Bash) में लिखा जाता है। आप देख सकते हैं कि क्या आदेश चल रहे हैं। आप किसी भी आदेश को हटा सकते हैं जिसे आप महसूस नहीं करते हैं। आप अपने लिए कोड का निरीक्षण करने के लिए एक तीसरे पक्ष से पूछ सकते हैं और (यदि आप चाहते हैं) किसी भी निष्कर्ष की रिपोर्ट करते हैं।<br/><br/>ओपन-ऑडिट एंटरप्राइज़ ओपन-ऑडिट समुदाय के लिए ऐड-ऑन व्यावसायिक कार्य करता है। यह किसी बाहरी निर्भरता के साथ एक एकल संकलित फ़ाइल के रूप में शामिल है। जहां उद्यम स्वयं कार्य करता है, यदि आप किसी भी मुद्दे से चिंतित हैं फर्स्टवेव आपके साथ काम करने में खुश है - बस पूछो! कोशिश करो कि किसी अन्य व्यावसायिक सॉफ्टवेयर विक्रेता के साथ!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'ओपन-ऑडिट डिवाइस चयन';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'ओपन-ऑडिट एंटरप्राइज़ में खोज स्कैन विकल्पों की पूर्व-निर्धारित सूची से चुनने की क्षमता है और प्रति खोज व्यक्तिगत विकल्पों को अनुकूलित करने की भी क्षमता है।';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'ओपन-ऑडिट एंटरप्राइज बड़े नेटवर्क के लिए उच्च स्तरीय लचीला खोज और लेखा परीक्षा समाधान। प्रोफेशनल प्लस की सभी विशेषताएं: बेसलाइन्स, फाइल ऑडिटिंग, क्लाउड डिस्कवरी, रैक मैनेजमेंट, कॉन्फिगरेबल रोल बेस्ड एक्सेस कंट्रोल जिसमें सक्रिय निर्देशिका और LDAP शामिल है।';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'ओपन-ऑडिट फील्ड का नाम';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'ओपन-ऑडिट लाइसेंस';

$GLOBALS["lang"]['Open-AudIT Options'] = 'ओपन-ऑडिट विकल्प';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'ओपन-ऑडिट प्रोफेशनल और एंटरप्राइज में कई प्रारूपों में टाइम-आधारित, ऐतिहासिक और muti-query आधारित रिपोर्टिंग सुविधाओं सहित उन्नत रिपोर्टिंग सुविधाएँ शामिल हैं।';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'ओपन-ऑडिट पेशेवर की खोज के अनुसार खोज स्कैन विकल्पों की पूर्व-निर्धारित सूची से चुनने की क्षमता है।';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'ओपन-ऑडिट प्रोफेशनल। दुनिया';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.'] = 'ओपन-ऑडिट प्रोफेशनल। दुनिया का सबसे लचीला नेटवर्क खोज और लेखा परीक्षा समाधान। सामुदायिक प्लस की सभी विशेषताएं: इंटरएक्टिव डैशबोर्ड, भौगोलिक मानचित्र, अनुसूचित समय आधारित या ऐतिहासिक रिपोर्टिंग, वाणिज्यिक समर्थन।';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'ओपन-ऑड आईटी को LDAP सर्वर (माइक्रोसॉफ्ट सक्रिय निर्देशिका और / या OpenLDAP) का उपयोग करने के लिए एक उपयोगकर्ता को प्रमाणित करने और अधिकृत करने के लिए कॉन्फ़िगर किया जा सकता है, ताकि LDAP समूह की सदस्यता के आधार पर निर्दिष्ट भूमिकाओं और ऑर्ग का उपयोग करके ओपन-ऑडिट में एक उपयोगकर्ता खाता बनाया जा सके। यह भी उपयोग कर सकता है';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'ओपन-ऑड आईटी अपने डेटा सेंटर में अपने सर्वर पर चलाया जा सकता है। यह सब पर इंटरनेट तक पहुंच की जरूरत नहीं है। यहां तक कि लिनक्स पर स्थापना जहां हम अपने पूर्वावश्यकों के लिए वितरण पैकेज प्रबंधक का उपयोग करते हैं, आपको इन-हाउस और सुरक्षा टीम-अनुमोदित पैकेज रिपॉज़िटरी का उपयोग करके नकारात्मक किया जा सकता है।<br/><br/>ओपन-ऑड आईटी क्लाउड में आपके किसी भी डेटा को स्टोर नहीं करता है। यहां तक कि लाइसेंसिंग जानकारी को ओपन-ऑडिट सर्वर से इंटरनेट तक पहुंचने के बिना प्रदान किया जा सकता है।<br/><br/>निश्चित रूप से, अपने वितरण के लिए पैकेज (सुरक्षा निर्धारण सहित) डाउनलोड करने के लिए इंटरनेट तक पहुंचना आसान है, लेकिन यह आपके और आपकी सुरक्षा नीतियों तक है। ओपन-ऑडिट को इंटरनेट की आवश्यकता नहीं है।';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-Audit NIST CVE Vulnerability रिपोर्ट को डाउनलोड, पार्स और उपयोग कर सकते हैं।';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'ओपन-ऑड आईटी कई भाषाओं में से एक में दिखा सकते हैं। आप इसे कैसे सुधार सकते हैं?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'ओपन-ऑड आईटी प्रत्येक उपकरण से जुड़े अतिरिक्त क्षेत्रों में जानकारी स्टोर कर सकता है।';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-Audit Microsoft Entra (पूर्व में Microsoft Azure Active Directory) का उपयोग एक प्रमाणीकरण विधि के रूप में कर सकता है। इसका मतलब यह है कि ओपन-ऑडिट में आपका उपयोगकर्ता लोगोन पेज पर एनट्रा बटन का उपयोग करके लोगोन पर क्लिक कर सकता है और लोगोन के लिए उनके एनट्रा क्रेडेंशियल का उपयोग कर सकता है। उस उपयोगकर्ता को पहले से ही ओपन-ऑडआईटी के भीतर मौजूद होना चाहिए (और निर्दिष्ट किया जाना चाहिए)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'ओपन-ऑडिट एक प्रमाणीकरण विधि के रूप में OKTA का उपयोग कर सकता है। इसका मतलब यह है कि ओपन-ऑडआईटी में आपका उपयोगकर्ता लोगोन पेज पर OKTA बटन का उपयोग करके लोगोन पर क्लिक कर सकता है और अपने OKTA क्रेडेंशियल्स को लोगोन में इस्तेमाल कर सकता है। उस उपयोगकर्ता को पहले से ही ओपन-ऑडआईटी (और रोल्स एंड ऑर्ग्स को सौंपा गया) के भीतर मौजूद होने की आवश्यकता होगी, लेकिन उन्हें लॉगऑन क्रेडेंशियल का एक अलग सेट याद रखने की आवश्यकता नहीं होगी।';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-Audit inbuilt कई प्रश्नों के साथ आता है। यदि आपको एक विशिष्ट क्वेरी की आवश्यकता होती है और पूर्व-पैकेज्ड प्रश्नों में से कोई भी आपकी आवश्यकताओं को फिट नहीं करता है, तो इसे एक नया बनाना और इसे चलाने के लिए Open-Audit में लोड करना काफी आसान है।';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'ओपन-ऑडिट में एक JSON Restful API है जिसका उपयोग वेब इंटरफेस और JSON अनुरोधों के माध्यम से किया जाता है।';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'ओपन-ऑड आईटी के पास यह निर्धारित करने के लिए एक दानेदार अनुमति प्रणाली है कि ओपन-ऑडिट के भीतर एक उपयोगकर्ता क्या कर सकता है, और वह उसे कर सकता है। ओपन-ऑडिट पूरी तरह से स्व-निर्मित किया जा सकता है, या प्रमाणीकरण और / या प्राधिकरण के लिए सक्रिय निर्देशिका या OpenLDAP का उपयोग किया जा सकता है।<br/><br/>यह पूरी तरह से ओपन-ऑडिट के प्रशासक तक है कि वे कैसे काम करने के लिए रोल आधारित एक्सेस कंट्रोल पसंद करेंगे।';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'ओपन-ऑड आईटी में एक शक्तिशाली परिवर्तन डिटेक्शन इंजन है। जोड़ा गया है कि किसी भी उपकरण विशेषताओं, हटा दिया या परिवर्तित पता लगाया जाएगा और संग्रहीत किया जाएगा। इन परिवर्तनों को रिपोर्ट किया जा सकता है और प्रासंगिक डेटा ने पुष्टि की कि आपकी कंपनी के परिवर्तन और रिलीज प्रक्रिया से क्या उम्मीद थी।<br/><br/>जब किसी उपकरण का ऑडिट किया जाता है, तो विशेषताओं को उन वर्गों में विभाजित किया जाता है जो डेटाबेस में तालिकाओं के अनुरूप होते हैं।<br/><br/>प्रत्येक उपकरण (कंप्यूटर, रूटर, प्रिंटर, एट अल) में एक प्रविष्टि है <code>devices</code> तालिका। प्रत्येक प्रविष्टि में उपकरणों की तालिका होती है <code>id</code> स्तंभ। यह मान अद्वितीय है - यह एक ऑटो-incrementing आईडी है।<br/><br/>जब लेखा परीक्षा परिणाम संसाधित होता है, तो प्रत्येक अनुभाग में प्रत्येक आइटम के पास डेटाबेस में क्या है इसकी तुलना में इसका लेखा परीक्षा परिणाम होता है।<br/><br/>प्रत्येक अनुभाग के लिए, यदि कुंजी कॉलम (नीचे तालिका देखें) में समान मान होते हैं, तो इसे पहले से ही स्थापित किया गया है और इसका है <code>last_seen</code> विशेषता अद्यतन। No change_log प्रविष्टि बनाई गई है।<br/><br/>यदि कोई प्रमुख स्तंभ मैच नहीं करते हैं, तो इसे एक नई विशेषता माना जाता है और इसे डाला जाता है। A <code>change_log</code> प्रविष्टि बनाई गई है अगर डिवाइस में पहले से ही टेबल में मौजूद अन्य विशेषताएँ थीं।<br/><br/>लेखा परीक्षा प्रसंस्करण के पूरा होने पर, किसी भी डेटाबेस आइटम को अद्यतन नहीं किया गया है (या डाला गया) उपस्थित नहीं किया जा सकता है। The The most of the <code>current</code> इस मद के लिए विशेषता सेट करने के लिए है <i>n</i> और एक Change_log प्रविष्टि उत्पन्न होती है।<br/><br/>इसलिए, हम यह निर्धारित कर सकते हैं कि क्या कुछ वर्तमान में स्थापित है - वर्तमान स्तंभ है <i>Y</i>।<br/><br/>हम यह निर्धारित कर सकते हैं कि कुछ शुरू में पता लगाया गया था - <i>पहली बार</i>।<br/><br/>हम यह निर्धारित कर सकते हैं कि प्रारंभिक परीक्षा के बाद कुछ स्थापित किया गया है - पहली बार देखा गया घटक और उपकरण तालिकाओं में अलग होगा।<br/><br/>हम यह निर्धारित कर सकते हैं कि वर्तमान में कुछ स्थापित नहीं है, लेकिन पहले था - चालू = <i>n</i>।<br/><br/>हम पिछली बार एक आइटम - last_seen पता लगा सकते हैं।<br/><br/>किसी भी बिंदु पर, हम यह निर्धारित कर सकते हैं कि सिस्टम पर क्या था - ऑडिट_log तालिका का उपयोग करके और पहले_seen और last_seen पर आधारित प्रासंगिक घटकों का चयन करके।<br/><br/>प्रत्येक अनुभाग और इसके मिलान कुंजी स्तंभ नीचे हैं।<br/><br/>नोट - नीचे दिए गए कुछ अपवाद हैं।<br/><br/>* 1 - नेटवर्क कार्ड के लिए, यदि कंप्यूटर एक VMware Esx मशीन है तो यह नेट इंडेक्स और कनेक्शन कॉलम का भी उपयोग करता है।<br/><br/>2 - विभाजन के लिए, f कंप्यूटर एक AIX मशीन है, हम विभाजन नाम का उपयोग करते हैं।';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'ओपन-ऑडिट एक प्रोग्राम है जिसे आपके आईटी और संबंधित परिसंपत्ति विवरण और कॉन्फ़िगरेशन पर ट्रैक और रिपोर्ट करने के लिए डिज़ाइन किया गया है। ओपन-ऑडिट बता सकता है <i>आपका नेटवर्क क्या है?</i>, यह कैसे कॉन्फ़िगर किया गया है और अगर कोई बदलाव हुआ है। ओपन-ऑडिट डिवाइस खोज, आईटी लेखा परीक्षा और सूची प्रबंधन स्वचालन सीधे बॉक्स से बाहर के लिए एक चिकना, लचीला और प्रयोग करने में आसान मंच प्रदान करता है।';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'ओपन-ऑड आईटी एक बार में कई उपकरणों की विशेषताओं को संपादित करना आसान बनाता है।';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'ओपन-ऑड आईटी को विशिष्ट निर्देशिकाओं की आवश्यकता होती है जो फ़ाइलों, अपलोड परिणामों आदि को बनाने में सक्षम होती है। कृपया नीचे के रूप में सेट करें।';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'ओपन-ऑडिट कई अंतर्निहित प्रश्नों को प्रदान करता है और इसे अपने आप बनाने के लिए सरल बनाता है।';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'ओपन-ऑड व्यवस्थापक, org_admin और उपयोगकर्ता के लिए अंतर्निहित भूमिकाओं के साथ आईटी जहाजों।<br/><br/>आम तौर पर, एक उपयोगकर्ता जो ओपन-ऑडिट एप्लिकेशन का प्रशासक है, उसके पास व्यवस्थापक और संभावित org_admin भूमिकाएं होनी चाहिए।<br/><br/>उपयोगकर्ता में कई भूमिकाएं हो सकती हैं। अनुमति को सबसे permissive स्तर पर लागू किया जाएगा - IE, यदि उपयोगकर्ता के पास उपयोगकर्ता और Org_admin की भूमिका है, तो वे स्थानों को बनाने में सक्षम होंगे क्योंकि org_admin इस अनुमति को प्रदान करता है, भले ही उपयोगकर्ता की भूमिका न हो।<br/><br/>व्यवस्थापक भूमिका संग्रह जैसे विन्यास, डेटाबेस, समूह, ldap सर्वर, लॉग, प्रश्नों और भूमिकाओं तक पहुंच की अनुमति देती है। वैश्विक आइटम जो पूरे आवेदन को प्रभावित करते हैं।<br/><br/>org_admin भूमिका आमतौर पर किसी भी संग्रह के लिए क्रियाओं को बनाने, पढ़ने, अद्यतन करने और हटाने की अनुमति देती है जिसमें org_id कॉलम होता है। वस्तुतः ऊपर उल्लिखित कुछ संग्रहों को छोड़कर सभी डेटा में एक होगा <code>org_id</code> स्तंभ।<br/><br/>उपयोगकर्ता की भूमिका आम तौर पर एक org_id कॉलम के साथ सभी वस्तुओं तक पहुंच को पढ़ने की अनुमति देती है।';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'ओपन-ऑड व्यवस्थापक, org_admin और उपयोगकर्ता के लिए अंतर्निहित भूमिकाओं के साथ आईटी जहाजों।<br/><br/>आम तौर पर, एक उपयोगकर्ता जो ओपन-ऑडिट एप्लिकेशन का प्रशासक है, उसके पास व्यवस्थापक और संभावित org_admin भूमिकाएं होनी चाहिए।<br/><br/>उपयोगकर्ता में कई भूमिकाएं हो सकती हैं। अनुमति को सबसे permissive स्तर पर लागू किया जाएगा - IE, यदि उपयोगकर्ता के पास उपयोगकर्ता और Org_admin की भूमिका है, तो वे स्थानों को बनाने में सक्षम होंगे क्योंकि org_admin इस अनुमति को प्रदान करता है, भले ही उपयोगकर्ता की भूमिका न हो।<br/><br/>व्यवस्थापक भूमिका संग्रह जैसे विन्यास, डेटाबेस, समूह, ldap सर्वर, लॉग, प्रश्नों और भूमिकाओं तक पहुंच की अनुमति देती है। वैश्विक आइटम जो पूरे आवेदन को प्रभावित करते हैं।<br/><br/>org_admin भूमिका आमतौर पर किसी भी संग्रह के लिए क्रियाओं को बनाने, पढ़ने, अद्यतन करने और हटाने की अनुमति देती है जिसमें org_id कॉलम होता है। वस्तुतः ऊपर उल्लिखित कुछ संग्रहों को छोड़कर सभी डेटा में एक org_id कॉलम होगा।<br/><br/>उपयोगकर्ता की भूमिका आम तौर पर एक org_id कॉलम के साथ सभी वस्तुओं तक पहुंच को पढ़ने की अनुमति देती है।';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'कई पूर्व-configured डैशबोर्ड के साथ ओपन-ऑडिट जहाजों। यदि आप एक पेशेवर उपयोगकर्ता हैं, तो आप इनमें से दो के बीच चयन कर सकते हैं और इसे अपने डिफ़ॉल्ट पृष्ठ के रूप में सेट कर सकते हैं जब आप लोगो करते हैं। यदि आप एक एंटरप्राइज़ उपयोगकर्ता हैं, तो आप न केवल पांच पूर्ववर्ती डैशबोर्डों के बीच चयन कर सकते हैं, बल्कि आपके पास अपना खुद का निर्माण करने की क्षमता भी है।';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = '64 बिट विंडोज पर ओपन-ऑडिट स्थापित किया जाना चाहिए <strong>सर्वर</strong> केवल सिस्टम। विंडोज 10 और विंडोज 11 हैं <strong>नहीं</strong> समर्थित';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'ओपन-ऑडिट अपने डिस्कवरी फंक्शन में Nmap का उपयोग करता है। ओपन पोर्ट के लिए Nmap जांच उपकरण। उपकरण आदर्श रूप से काम करने वाले बंदरगाहों के लिए खुला जवाब देना चाहिए। उपकरण अक्सर इसके साथ जवाब नहीं देते हैं। विभिन्न प्रतिक्रियाओं नीचे विस्तृत हैं।';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'ओपन-ऑडिट अपने डिस्कवरी फंक्शन में Nmap का उपयोग करता है। Nmap के बिना, ओपन-ऑडिट सही ढंग से कार्य नहीं करेगा। प्रत्येक ओपन-ऑडिट स्थापित मान लेता है कि Nmap स्थापित है और डिस्कवरी वेब पृष्ठों पर इसके लिए भी परीक्षण करेगा। Open-Audit and Nmap के बारे में अधिक जानकारी यहां उपलब्ध है';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'ओपन-ऑडिट अपने डिस्कवरी फंक्शन में Nmap का उपयोग करता है। Nmap के बिना, ओपन-ऑडिट सही ढंग से कार्य नहीं करेगा। प्रत्येक ओपन-ऑडिट स्थापित मान लेता है कि Nmap स्थापित है और इसके लिए डिस्कवरी वेब पेज पर परीक्षण करेगा।';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'ओपन-ऑड आईटी अपने उपकरणों तक पहुंचने के लिए क्रेडेंशियल का उपयोग करता है। ये एन्क्रिप्टेड और संग्रहीत हैं, जैसा कि आप उम्मीद करेंगे।';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'ओपन-ऑडिट एक अंग्रेजी बोलने वाले ऑस्ट्रेलियाई द्वारा लिखा गया था। आवेदन में सब कुछ अंग्रेजी शब्दकरण का उपयोग करता है। हालांकि ओपन-ऑडिट ने हमेशा प्रदर्शन के लिए कई भाषाओं का समर्थन किया है। ये अनुवाद हमेशा सही नहीं होते क्योंकि डेवलपर्स मूल रूप से हर अनुवाद की भाषा नहीं बोलते हैं।<br/><br/>यदि अनुवाद में कुछ सही नहीं है तो आप क्या कर सकते हैं?';

$GLOBALS["lang"]['OpenLDAP'] = 'ओपनएलडीपी';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap स्थापित किया गया है';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'समर्थन टिकट खोलना?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap उपयोगकर्ता Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap उपयोगकर्ता Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap उपयोगकर्ता सदस्यता विशेषता';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap उपयोगकर्ता सदस्यता विशेषता';

$GLOBALS["lang"]['open|filtered'] = 'खुला';

$GLOBALS["lang"]['Open|filtered'] = 'खुला';

$GLOBALS["lang"]['Operating System'] = 'ऑपरेटिंग सिस्टम';

$GLOBALS["lang"]['Operating System Family Contains'] = 'ऑपरेटिंग सिस्टम परिवार शामिल हैं';

$GLOBALS["lang"]['Operating Systems'] = 'ऑपरेटिंग सिस्टम';

$GLOBALS["lang"]['Operators'] = 'ऑपरेटर';

$GLOBALS["lang"]['optical'] = 'ऑप्टिकल';

$GLOBALS["lang"]['Optical'] = 'ऑप्टिकल';

$GLOBALS["lang"]['Optimized'] = 'अनुकूलित';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'विकल्प #1 - डेटा बदलें';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'विकल्प #2 - अनुवाद फ़ाइल बदलें';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'वैकल्पिक एजेंट आधारित लेखा परीक्षा';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'ओपन-ऑडिट द्वारा लेखा परीक्षा के रूप में वैकल्पिक संस्करण। % का उपयोग एक वाइल्डकार्ड के रूप में करें।';

$GLOBALS["lang"]['options'] = 'विकल्प';

$GLOBALS["lang"]['Options'] = 'विकल्प';

$GLOBALS["lang"]['Options, options, options'] = 'विकल्प, विकल्प, विकल्प';

$GLOBALS["lang"]['Or'] = 'या';

$GLOBALS["lang"]['Or select from the below fields.'] = 'या निम्न फ़ील्ड से चयन करें।';

$GLOBALS["lang"]['org_descendants'] = 'संगठन';

$GLOBALS["lang"]['Org Descendants'] = 'संगठन';

$GLOBALS["lang"]['org_id'] = 'संगठन पहचान';

$GLOBALS["lang"]['Org ID'] = 'संगठन पहचान';

$GLOBALS["lang"]['Organisation'] = 'संगठन';

$GLOBALS["lang"]['organisation'] = 'संगठन';

$GLOBALS["lang"]['Organisation Descendants'] = 'संगठन';

$GLOBALS["lang"]['Organisations'] = 'संगठन';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'संगठन उन विस्तार के स्तर को बढ़ा सकते हैं जो कस्टम फ़ील्ड का उपयोग करके हर खोजे गए डिवाइस के खिलाफ संग्रहीत हैं और ओपन कोर सीएमडीबी, इवेंट मैनेजमेंट और टिकटिंग सिस्टम में आसान एकीकरण की अनुमति देता है।';

$GLOBALS["lang"]['orgs'] = 'संगठन';

$GLOBALS["lang"]['Orgs'] = 'संगठन';

$GLOBALS["lang"]['Orgs Name'] = 'संगठन का नाम';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'ओपन-ऑडिट में संगठन एक महत्वपूर्ण आइटम है। एक उपयोगकर्ता के पास एक प्राथमिक संगठन है और साथ ही उन संगठनों की सूची भी है जिनका वे उपयोग कर सकते हैं। एक उपयोगकर्ता इसे असाइन किए गए भूमिकाओं की एक सूची के साथ जोड़ती है जो यह परिभाषित करती है कि वे उन संगठनों को सौंपे गए आइटमों पर क्या कार्रवाई कर सकते हैं जिन्हें उनके पास एक्सेस है। उपयोगकर्ताओं का संयोजन <i>अंग</i> और <i>भूमिका</i> वे क्या कर सकते हैं और ओपन-ऑडिट के भीतर नहीं कर सकते हैं।<br/><br/>ओपन-ऑडिट में अधिकांश आइटम एक संगठन को सौंपा गया है। उपकरण, स्थान, नेटवर्क, आदि।<br/><br/>संगठन में बाल संगठन हो सकते हैं। एक संगठनात्मक चार्ट (त्रि) संरचना के बारे में सोचना। यदि किसी उपयोगकर्ता के पास विशिष्ट संगठन तक पहुंच है, तो अधिकांश समय ( हमेशा नहीं) उनके पास उस संगठन के वंशज तक भी पहुंच है।';

$GLOBALS["lang"]['orientation'] = 'अभिविन्यास';

$GLOBALS["lang"]['Orientation'] = 'अभिविन्यास';

$GLOBALS["lang"]['os'] = 'ओस';

$GLOBALS["lang"]['Os'] = 'ओस';

$GLOBALS["lang"]['os_arch'] = 'ओस आर्क';

$GLOBALS["lang"]['Os Arch'] = 'ओस आर्क';

$GLOBALS["lang"]['os_bit'] = 'ओस बिट';

$GLOBALS["lang"]['Os Bit'] = 'ओस बिट';

$GLOBALS["lang"]['os_cpe'] = 'ओस सीपी';

$GLOBALS["lang"]['Os Cpe'] = 'ओस सीपी';

$GLOBALS["lang"]['os_display_version'] = 'ओस डिस्प्ले संस्करण';

$GLOBALS["lang"]['Os Display Version'] = 'ओस डिस्प्ले संस्करण';

$GLOBALS["lang"]['os_family'] = 'परिवार';

$GLOBALS["lang"]['Os Family'] = 'परिवार';

$GLOBALS["lang"]['os_group'] = 'ओस ग्रुप';

$GLOBALS["lang"]['Os Group'] = 'ओस ग्रुप';

$GLOBALS["lang"]['os_installation_date'] = 'ओस स्थापना तिथि';

$GLOBALS["lang"]['Os Installation Date'] = 'ओस स्थापना तिथि';

$GLOBALS["lang"]['os_licence_expiry'] = 'ओस लाइसेंस समाप्ति';

$GLOBALS["lang"]['Os Licence Expiry'] = 'ओस लाइसेंस समाप्ति';

$GLOBALS["lang"]['os_license'] = 'ओस लाइसेंस';

$GLOBALS["lang"]['Os License'] = 'ओस लाइसेंस';

$GLOBALS["lang"]['os_license_code'] = 'ओस लाइसेंस कोड';

$GLOBALS["lang"]['Os License Code'] = 'ओस लाइसेंस कोड';

$GLOBALS["lang"]['os_license_mode'] = 'ओस लाइसेंस मोड';

$GLOBALS["lang"]['Os License Mode'] = 'ओस लाइसेंस मोड';

$GLOBALS["lang"]['os_license_type'] = 'ओस लाइसेंस प्रकार';

$GLOBALS["lang"]['Os License Type'] = 'ओस लाइसेंस प्रकार';

$GLOBALS["lang"]['os_name'] = 'ओस नाम';

$GLOBALS["lang"]['Os Name'] = 'ओस नाम';

$GLOBALS["lang"]['os_version'] = 'ओस संस्करण';

$GLOBALS["lang"]['Os Version'] = 'ओस संस्करण';

$GLOBALS["lang"]['Other'] = 'अन्य';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'उस प्रतिबंध के अलावा, आप आवश्यकतानुसार विशेषताओं का चयन करने के लिए स्वतंत्र हैं। यह मेनू का उपयोग करने का एक अच्छा विचार है';

$GLOBALS["lang"]['Others'] = 'अन्य';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'हमारे डिफ़ॉल्ट एकीकरण किसी भी बाह्य आपूर्ति उपकरणों पर एक खोज सक्षम बनाता है। इसलिए हम बॉक्स से बाहर डिफ़ॉल्ट एकीकरण के लिए एक डिफ़ॉल्ट खोज जहाज। ये डिफ़ॉल्ट मिलान नियमों का उपयोग करते हैं, लेकिन आईपी पते पर मिलान करने में भी सक्षम होते हैं।';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'हमारे उदाहरण <i>प्रकार</i> स्तंभ।';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'हमारी रूपरेखा प्रसंस्करण के लिए यहां फ़ाइलों को अपलोड करती है, फिर उन्हें हटा देती है। प्रस्तुत लेखा परीक्षा परिणाम आदि';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'प्रारंभिक एकीकरण रिलीज के साथ हमारा लक्ष्य विशेष रूप से एनएमआईएस के लिए ओपन-ऑडिट एकीकरण के लिए था <i>काम करना</i>। यदि आप लिनक्स पर प्रोग्राम का उपयोग कर रहे हैं, तो आप वास्तव में एकीकरण को निष्पादित करने के लिए एक बटन पर क्लिक कर सकते हैं। अधिक आवश्यकता नहीं है। कहा जाता है कि, एकीकरण स्वयं अत्यंत विन्यास योग्य है - इसलिए यदि आपकी वरीयता के लिए कुछ नहीं है, तो इसे आसानी से बदला जा सकता है।';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Vulnerability नामक हमारी नई सुविधा आपको यह निर्धारित करने की क्षमता देती है कि क्या कोई भी उपकरण किसी भी CVE (आम Vulnerability एक्सपोजर) से प्रभावित हैं - लेकिन कैसे?<br/><br/>फर्स्टवे लगातार निस्ट एनवीडी फीड से आउटपुट का उपभोग करते हैं। हम इसे लेते हैं और कुछ प्रतिबंध लागू करते हैं, फिर प्रभावित कार्यक्रमों को निकालते हैं और रिपोर्टिंग के लिए SQL क्वेरी का निर्माण करते हैं। आपका ओपन-ऑडिट उदाहरण फर्स्टवे तक पहुंचता है और नियमित आधार पर किसी भी नए भेद्यता का अनुरोध करता है। जब यह एक नया vulnerability रिकॉर्ड प्राप्त करता है, तो यह डेटाबेस और परिणाम संग्रहीत के खिलाफ चला जाता है। प्रत्येक बार एक उपकरण संसाधित किया जाता है, सभी मिलान क्षमताओं को फिर से निष्पादित किया जाता है और परिणाम संग्रहीत किया जाता है। इसका मतलब यह है कि जब एक vulnerability सूची को देखते हैं, तो हमें सभी प्रभावित उपकरणों की गणना करने की आवश्यकता नहीं है - हमारे पास पहले से ही परिणाम है। जब आप एक व्यक्तिगत भेद्यता रिकॉर्ड देखते हैं, तो हम वास्तव में इस एकमात्र भेद्यता के परिणाम को दोहराते हैं।<br/><br/>इसलिए, आप हमेशा तारीख तक रहे हैं!<br/><br/>इसके अलावा, हम दैनिक सभी उपकरणों के लिए सभी कमजोरियों के परिणाम की भी गणना करते हैं (आमतौर पर एक शांत समय पर, 2am कहते हैं)।<br/><br/>ओपन-ऑडिट के अपने उदाहरण में, हम आपको यह चुनने की अनुमति देते हैं कि आप किस विक्रेता की परवाह करते हैं। i.e. वहाँ एक विक्रेता जिसका सॉफ़्टवेयर आप उपयोग नहीं करते हैं या स्थापित नहीं करते हैं, से कोई उपयोग पुनःप्राप्ति रिकॉर्ड नहीं है। डिफ़ॉल्ट रूप से, हमारी विक्रेता सूची एडोब, ऐप्पल, सिस्को, गूगल, माइक्रोसॉफ्ट, मोज़िला और रेडहट है।<br/><br/>यह सब बहुत सरल लगता है, लेकिन परदे के पीछे एक <b>बहुत</b> चल रहा है। उदाहरण के लिए, CVE रिकॉर्ड में प्रभावित सॉफ़्टवेयर की एक सूची होती है - लेकिन उन सॉफ़्टवेयर नामों से मेल नहीं खाता है जो हमें कंप्यूटर पर ऑडिट करते समय मिलती है। एक अच्छा उदाहरण अपाचे है। आमतौर पर, एक CVE रिकॉर्ड कहेगा कि प्रभावित सॉफ्टवेयर http_server है। वास्तव में, यह अपाचे 2 (Ubuntu), httpd (Redhat), अपाचे HTTP सर्वर (विंडोज) - और अन्य के रूप में दिखाई देता है। इसलिए, हमें यह निर्धारित करना होगा कि जब हम कंप्यूटर पूछते हैं तो हम किस कार्यक्रम का वास्तविक नाम प्राप्त करते हैं, और कई नाम हो सकते हैं। उसके बाद हमें CVE रिकॉर्ड को पार्स करना चाहिए और एक मेलिंग SQL स्टेटमेंट बनाना होगा। ऊपर के रूप में एकाधिक प्रोग्राम नामों की अनुमति, और एकाधिक संस्करण, संस्करण रेंज, और यहां तक कि सॉफ्टवेयर के कई अलग-अलग टुकड़े (एक ही CVE में थंडरबर्ड और फ़ायरफ़ॉक्स)। और ओपन-ऑडिट का आपका उदाहरण इसे लेना चाहिए और संगठन फ़िल्टरिंग को भी लागू करना चाहिए। और यह सिर्फ एक CVE है। आपके पास क्या है और क्या नहीं है? बाद में सूची में विक्रेता को जोड़ने के बारे में क्या? कई बातें विचार करने के लिए!<br/><br/>साथ ही सामान्य रिपोर्टिंग के साथ, हमारे पास कुछ नए विजेट भी हैं जो डशबोर्ड के लिए उपलब्ध हैं, जो Vulnerability डेटा पर आधारित हैं।';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'एक SSH प्रतिक्रिया के लिए हमारे टाइमआउट';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'एक WMI प्रतिक्रिया के लिए हमारे टाइमआउट';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'एक SNMP प्रतिक्रिया के लिए हमारे टाइमआउट';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'एक ऑडिट स्क्रिप्ट प्रतिक्रिया के लिए हमारे टाइमआउट';

$GLOBALS["lang"]['output'] = 'उत्पादन';

$GLOBALS["lang"]['Output'] = 'उत्पादन';

$GLOBALS["lang"]['outputs'] = 'आउटपुट';

$GLOBALS["lang"]['Outputs'] = 'आउटपुट';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'समग्र गंभीरता स्कोर (0–10)।';

$GLOBALS["lang"]['overwrite'] = 'ओवरराइट';

$GLOBALS["lang"]['Overwrite'] = 'ओवरराइट';

$GLOBALS["lang"]['owner'] = 'मालिक';

$GLOBALS["lang"]['Owner'] = 'मालिक';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec SysInternal/Microsofts लोकप्रिय PsExec कार्यक्रम का स्वतंत्र रूप से पुनर्वितरण है। PAExec का उद्देश्य PsExec के प्रतिस्थापन में ड्रॉप होना है, इसलिए कमांड लाइन का उपयोग समान है, इसके अतिरिक्त विकल्प भी समर्थित हैं। यह काम मूल रूप से तालहा तारिक रेमकॉम से प्रेरित था।';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'डेटा पोस्ट करना';

$GLOBALS["lang"]['Package'] = 'पैकेज';

$GLOBALS["lang"]['packages'] = 'पैकेज';

$GLOBALS["lang"]['Packages'] = 'पैकेज';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'पैकेज का उपयोग उन चीजों पर रिपोर्ट करने के लिए किया जाता है जैसे <i>प्रतिबंधित सॉफ्टवेयर</i>सर्वर पर एंटीवायरस, आदि।<br/><br/>ओपन-ऑडिट उन विजेट्स को प्रदान करता है जो वायरस, फ़ायरवॉल और अन्य सॉफ्टवेयर की स्थिति को कम करने के लिए रिपॉट भी प्रदान करते हैं।';

$GLOBALS["lang"]['pagefile'] = 'पेजफ़ाइल';

$GLOBALS["lang"]['Pagefile'] = 'पेजफ़ाइल';

$GLOBALS["lang"]['Pakistan'] = 'पाकिस्तान';

$GLOBALS["lang"]['Palau'] = 'पलाऊ';

$GLOBALS["lang"]['Palestinian Territory'] = 'फिलिस्तीनी क्षेत्र';

$GLOBALS["lang"]['Panama'] = 'पनामा';

$GLOBALS["lang"]['Papua New Guinea'] = 'पापुआ न्यू गिनी';

$GLOBALS["lang"]['Paraguay'] = 'पराग्वे';

$GLOBALS["lang"]['Parameters'] = 'पैरामीटर';

$GLOBALS["lang"]['Paranoid'] = 'पैरानॉयड';

$GLOBALS["lang"]['Parent'] = 'माता';

$GLOBALS["lang"]['parent_id'] = 'अभिभावक आईडी';

$GLOBALS["lang"]['Parent ID'] = 'अभिभावक आईडी';

$GLOBALS["lang"]['parent_name'] = 'माता पिता का नाम';

$GLOBALS["lang"]['Parent Name'] = 'माता पिता का नाम';

$GLOBALS["lang"]['part_number'] = 'भाग संख्या';

$GLOBALS["lang"]['Part Number'] = 'भाग संख्या';

$GLOBALS["lang"]['part_of_domain'] = 'डोमेन का हिस्सा';

$GLOBALS["lang"]['Part Of Domain'] = 'डोमेन का हिस्सा';

$GLOBALS["lang"]['Partition'] = 'विभाजन';

$GLOBALS["lang"]['partition_count'] = 'विभाजन गणना';

$GLOBALS["lang"]['Partition Count'] = 'विभाजन गणना';

$GLOBALS["lang"]['partition_disk_index'] = 'विभाजन डिस्क सूचकांक';

$GLOBALS["lang"]['Partition Disk Index'] = 'विभाजन डिस्क सूचकांक';

$GLOBALS["lang"]['Pass'] = 'पास';

$GLOBALS["lang"]['Passed'] = 'पास';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'निष्क्रिय ऑप्टिकल स्थानीय क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Password'] = 'पासवर्ड';

$GLOBALS["lang"]['password'] = 'पासवर्ड';

$GLOBALS["lang"]['password_changeable'] = 'पासवर्ड परिवर्तनीय';

$GLOBALS["lang"]['Password Changeable'] = 'पासवर्ड परिवर्तनीय';

$GLOBALS["lang"]['password_disabled'] = 'पासवर्ड अक्षम';

$GLOBALS["lang"]['Password Disabled'] = 'पासवर्ड अक्षम';

$GLOBALS["lang"]['password_expires'] = 'पासवर्ड एक्सपायर';

$GLOBALS["lang"]['Password Expires'] = 'पासवर्ड एक्सपायर';

$GLOBALS["lang"]['password_last_changed'] = 'पासवर्ड Last Changed';

$GLOBALS["lang"]['Password Last Changed'] = 'पासवर्ड Last Changed';

$GLOBALS["lang"]['password_required'] = 'पासवर्ड आवश्यक';

$GLOBALS["lang"]['Password Required'] = 'पासवर्ड आवश्यक';

$GLOBALS["lang"]['patch_panel'] = 'पैच पैनल';

$GLOBALS["lang"]['Patch Panel'] = 'पैच पैनल';

$GLOBALS["lang"]['patch_panel_port'] = 'पैच पैनल पोर्ट';

$GLOBALS["lang"]['Patch Panel Port'] = 'पैच पैनल पोर्ट';

$GLOBALS["lang"]['path'] = 'पथ';

$GLOBALS["lang"]['Path'] = 'पथ';

$GLOBALS["lang"]['Performance'] = 'प्रदर्शन';

$GLOBALS["lang"]['Performed'] = 'प्रदर्शन';

$GLOBALS["lang"]['Permission'] = 'अनुमति';

$GLOBALS["lang"]['Permission Required'] = 'अनुमति आवश्यक';

$GLOBALS["lang"]['permissions'] = 'अनुमतियां';

$GLOBALS["lang"]['Permissions'] = 'अनुमतियां';

$GLOBALS["lang"]['Persian'] = 'फ़ारसी';

$GLOBALS["lang"]['Personal Area Network'] = 'व्यक्तिगत क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Personal area network'] = 'व्यक्तिगत क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Peru'] = 'पेरू';

$GLOBALS["lang"]['Philippines'] = 'फिलीपींस';

$GLOBALS["lang"]['phone'] = 'फ़ोन';

$GLOBALS["lang"]['Phone'] = 'फ़ोन';

$GLOBALS["lang"]['Physical CPUs'] = 'भौतिक सीपीयू';

$GLOBALS["lang"]['physical_count'] = 'भौतिक गणना';

$GLOBALS["lang"]['Physical Count'] = 'भौतिक गणना';

$GLOBALS["lang"]['physical_depth'] = 'शारीरिक गहराई';

$GLOBALS["lang"]['Physical Depth'] = 'शारीरिक गहराई';

$GLOBALS["lang"]['physical_height'] = 'भौतिक ऊंचाई';

$GLOBALS["lang"]['Physical Height'] = 'भौतिक ऊंचाई';

$GLOBALS["lang"]['physical_width'] = 'भौतिक चौड़ाई';

$GLOBALS["lang"]['Physical Width'] = 'भौतिक चौड़ाई';

$GLOBALS["lang"]['picture'] = 'चित्र';

$GLOBALS["lang"]['Picture'] = 'चित्र';

$GLOBALS["lang"]['pid'] = 'पीआईडी';

$GLOBALS["lang"]['Pid'] = 'पीआईडी';

$GLOBALS["lang"]['Pie Chart'] = 'पाई चार्ट';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'पाई चार्ट को नाम या my_name, विवरण या my_description और गिनती करनी चाहिए।';

$GLOBALS["lang"]['ping'] = 'पिंग';

$GLOBALS["lang"]['Ping'] = 'पिंग';

$GLOBALS["lang"]['Ping Target'] = 'पिंग लक्ष्य';

$GLOBALS["lang"]['Pitcairn Islands'] = 'पिटकैर्न द्वीपसमूह';

$GLOBALS["lang"]['placement'] = 'प्लेसमेंट';

$GLOBALS["lang"]['Placement'] = 'प्लेसमेंट';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'आंतरिक लेखा परीक्षा';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'कृपया एक Open-Audit प्रशासक लॉग इन करें और डेटाबेस को अपग्रेड करें।';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'कृपया इन ASAP को लॉग इन करें और बदलें।';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'कृपया ओपन-ऑडिट सर्वर (या तो विंडोज या लिनक्स) पर लॉग इन करें और चलाएं <code>nslookup IP_ADDRESS_OF_TARGET</code> कमांड प्रॉम्प्ट या शेल में। यह एक नाम के लिए आईपी को हल करने में सक्षम होना चाहिए।';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'कृपया ध्यान दें कि चयन बॉक्स टेक्स्ट इनपुट बॉक्स को ओवरराइड करेगा।';

$GLOBALS["lang"]['Please see the FAQ'] = 'पूछे जाने वाले प्रश्न';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'कृपया Opmantek पर अपने समर्थन संपर्क में सभी तीन फ़ाइलों को भेजें और अपने मुद्दे का वर्णन करें।';

$GLOBALS["lang"]['Please set using'] = 'उपयोग करना';

$GLOBALS["lang"]['Please visit the homepage at'] = 'होमपेज पर जाएं';

$GLOBALS["lang"]['pod'] = 'पॉड';

$GLOBALS["lang"]['Pod'] = 'पॉड';

$GLOBALS["lang"]['Poland'] = 'पोलैंड';

$GLOBALS["lang"]['Policies'] = 'नीतियां';

$GLOBALS["lang"]['Policies have exceptions.'] = 'नीतियाँ अपवाद हैं।';

$GLOBALS["lang"]['policy'] = 'नीति';

$GLOBALS["lang"]['Policy'] = 'नीति';

$GLOBALS["lang"]['policy_id'] = 'पॉलिसी ID';

$GLOBALS["lang"]['Policy ID'] = 'पॉलिसी ID';

$GLOBALS["lang"]['Policy Result'] = 'नीति परिणाम';

$GLOBALS["lang"]['Policy Results'] = 'नीति परिणाम';

$GLOBALS["lang"]['Polish'] = 'पोलिश';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'नीचे दिए गए मूल्यों के साथ जनसंख्या:';

$GLOBALS["lang"]['Populated by audit.'] = 'लेखा परीक्षा द्वारा जनसंख्या';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'खोज और लेखा परीक्षा द्वारा जनसंख्या।';

$GLOBALS["lang"]['Populated dynamically.'] = 'गतिशील रूप से जनसंख्या।';

$GLOBALS["lang"]['Populated from DNS.'] = 'डीएनएस से जनसंख्या।';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'एसएनएमपी खोज से जनसंख्या।';

$GLOBALS["lang"]['Populated from device audits.'] = 'डिवाइस ऑडिट से जनसंख्या।';

$GLOBALS["lang"]['Populated from hostname.'] = 'होस्टनाम से जनसंख्या।';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'लिनक्स पर मशीन आईडी से जनसंख्याबद्ध।';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'डिफ़ॉल्ट मार्ग या IP खोज में पता लगाने के लिए IP से जनसंख्याित।';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'होस्टनाम कमांड से जनसंख्या।';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'JSON प्रतिनिधित्व में, बाहरी प्रणाली से अतिरिक्त डेटा के साथ जनसंख्याबद्ध।';

$GLOBALS["lang"]['port'] = 'पोर्ट';

$GLOBALS["lang"]['Port'] = 'पोर्ट';

$GLOBALS["lang"]['port_name'] = 'पोर्ट का नाम';

$GLOBALS["lang"]['Port Name'] = 'पोर्ट का नाम';

$GLOBALS["lang"]['port_number'] = 'पोर्ट नंबर';

$GLOBALS["lang"]['Port Number'] = 'पोर्ट नंबर';

$GLOBALS["lang"]['ports_in_order'] = 'आदेश में बंदरगाहों';

$GLOBALS["lang"]['Ports In Order'] = 'आदेश में बंदरगाहों';

$GLOBALS["lang"]['ports_stop_after'] = 'पोर्ट्स स्टॉप के बाद';

$GLOBALS["lang"]['Ports Stop After'] = 'पोर्ट्स स्टॉप के बाद';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'पुर्तगाल, पुर्तगाली गणराज्य';

$GLOBALS["lang"]['Portuguese'] = 'पुर्तगाली';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'पुर्तगाली (ब्राज़ील)';

$GLOBALS["lang"]['position'] = 'स्थिति';

$GLOBALS["lang"]['Position'] = 'स्थिति';

$GLOBALS["lang"]['Post-Certification'] = 'पोस्ट-प्रमाणीकरण';

$GLOBALS["lang"]['postcode'] = 'पोस्टकोड';

$GLOBALS["lang"]['Postcode'] = 'पोस्टकोड';

$GLOBALS["lang"]['power_circuit'] = 'पावर सर्किट';

$GLOBALS["lang"]['Power Circuit'] = 'पावर सर्किट';

$GLOBALS["lang"]['power_sockets'] = 'पावर सॉकेट';

$GLOBALS["lang"]['Power Sockets'] = 'पावर सॉकेट';

$GLOBALS["lang"]['Predictable'] = 'भविष्यवाणी';

$GLOBALS["lang"]['Preferences'] = 'प्राथमिकता';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'प्रत्येक 3 साल में पुन:प्राप्ति की तैयारी करें';

$GLOBALS["lang"]['Prerequisites'] = 'आवश्यकता';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'पूर्वाग्रह और टेस्ट';

$GLOBALS["lang"]['present'] = 'वर्तमान';

$GLOBALS["lang"]['Present'] = 'वर्तमान';

$GLOBALS["lang"]['previous_value'] = 'पिछले मूल्य';

$GLOBALS["lang"]['Previous Value'] = 'पिछले मूल्य';

$GLOBALS["lang"]['primary'] = 'प्राथमिक';

$GLOBALS["lang"]['Primary'] = 'प्राथमिक';

$GLOBALS["lang"]['Primary Key'] = 'प्राथमिक कुंजी';

$GLOBALS["lang"]['print_queue'] = 'प्रिंट कतार';

$GLOBALS["lang"]['Print Queue'] = 'प्रिंट कतार';

$GLOBALS["lang"]['printer_color'] = 'प्रिंटर रंग';

$GLOBALS["lang"]['Printer Color'] = 'प्रिंटर रंग';

$GLOBALS["lang"]['printer_duplex'] = 'प्रिंटर डुप्लेक्स';

$GLOBALS["lang"]['Printer Duplex'] = 'प्रिंटर डुप्लेक्स';

$GLOBALS["lang"]['printer_port_name'] = 'प्रिंटर पोर्ट का नाम';

$GLOBALS["lang"]['Printer Port Name'] = 'प्रिंटर पोर्ट का नाम';

$GLOBALS["lang"]['printer_shared'] = 'प्रिंटर साझा';

$GLOBALS["lang"]['Printer Shared'] = 'प्रिंटर साझा';

$GLOBALS["lang"]['printer_shared_name'] = 'प्रिंटर साझा नाम';

$GLOBALS["lang"]['Printer Shared Name'] = 'प्रिंटर साझा नाम';

$GLOBALS["lang"]['priority'] = 'प्राथमिकता';

$GLOBALS["lang"]['Priority'] = 'प्राथमिकता';

$GLOBALS["lang"]['Privacy Passphrase'] = 'गोपनीयता नीति';

$GLOBALS["lang"]['Privacy Protocol'] = 'गोपनीयता प्रोटोकॉल';

$GLOBALS["lang"]['privileges_required'] = 'आवश्यक';

$GLOBALS["lang"]['Privileges Required'] = 'आवश्यक';

$GLOBALS["lang"]['processor'] = 'प्रोसेसर';

$GLOBALS["lang"]['Processor'] = 'प्रोसेसर';

$GLOBALS["lang"]['processor_count'] = 'प्रोसेसर गणना';

$GLOBALS["lang"]['Processor Count'] = 'प्रोसेसर गणना';

$GLOBALS["lang"]['processor_slot_count'] = 'प्रोसेसर स्लॉट गणना';

$GLOBALS["lang"]['Processor Slot Count'] = 'प्रोसेसर स्लॉट गणना';

$GLOBALS["lang"]['processor_type'] = 'प्रोसेसर प्रकार';

$GLOBALS["lang"]['Processor Type'] = 'प्रोसेसर प्रकार';

$GLOBALS["lang"]['Processors'] = 'प्रोसेसर';

$GLOBALS["lang"]['product_name'] = 'उत्पाद का नाम';

$GLOBALS["lang"]['Product Name'] = 'उत्पाद का नाम';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'उत्पाद का नाम सीपीई से मैच: ';

$GLOBALS["lang"]['products'] = 'उत्पाद';

$GLOBALS["lang"]['Products'] = 'उत्पाद';

$GLOBALS["lang"]['Professional'] = 'पेशेवर';

$GLOBALS["lang"]['profile'] = 'प्रोफ़ाइल';

$GLOBALS["lang"]['Profile'] = 'प्रोफ़ाइल';

$GLOBALS["lang"]['program'] = 'कार्यक्रम';

$GLOBALS["lang"]['Program'] = 'कार्यक्रम';

$GLOBALS["lang"]['Properties'] = 'गुण';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'मालिकाना। यदि आप हाईकार्ट को संशोधित करना चाहते हैं तो आपको आवश्यकता हो सकती है';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'गोपनीयता, अखंडता और सूचना की उपलब्धता की रक्षा करता है';

$GLOBALS["lang"]['protocol'] = 'प्रोटोकॉल';

$GLOBALS["lang"]['Protocol'] = 'प्रोटोकॉल';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'एक विवरण प्रदान करें और अवधि समाप्त हो जाती है।';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'एक नाम प्रदान करें - हम ओपन-ऑडिट को फिर से स्थापित करते हैं, लेकिन आप इसे पसंद करते हैं।<br/>ओपन-ऑडिट फॉर्म से मूल्य की प्रतिलिपि बनाएं <i>URI</i> फ़ील्ड में इसे पेस्ट करें <i>साइन इन करें</i> OKTA में क्षेत्र।<br/>साइन-आउट रीडायरेक्ट यूआरआई वैकल्पिक है, लेकिन यदि आप चाहते हैं कि आप ओपन-ऑडिट / इंडेक्स का उपयोग कर सकते हैं। अपने ओपन-ऑडिट सर्वर http पते के साथ PHP/logout स्क्रीनशॉट के अनुसार।<br/>आम तौर पर आपका ओपन-ऑडिट यूआरएल कुछ ऐसा दिखेगा जैसे';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'बशर्ते आपके पास सही क्रेडेंशियल, डिवाइस सीड डिस्कवरी कार्य निम्नानुसार हैं:';

$GLOBALS["lang"]['provider'] = 'प्रदाता';

$GLOBALS["lang"]['Provider'] = 'प्रदाता';

$GLOBALS["lang"]['published'] = 'प्रकाशित';

$GLOBALS["lang"]['Published'] = 'प्रकाशित';

$GLOBALS["lang"]['published_date'] = 'प्रकाशित तिथि';

$GLOBALS["lang"]['Published Date'] = 'प्रकाशित तिथि';

$GLOBALS["lang"]['publisher'] = 'प्रकाशक';

$GLOBALS["lang"]['Publisher'] = 'प्रकाशक';

$GLOBALS["lang"]['Puerto Rico'] = 'प्यूर्टो रिको';

$GLOBALS["lang"]['Purchase'] = 'खरीद';

$GLOBALS["lang"]['purchase_amount'] = 'खरीददारी';

$GLOBALS["lang"]['Purchase Amount'] = 'खरीददारी';

$GLOBALS["lang"]['purchase_cost_center'] = 'क्रय लागत केंद्र';

$GLOBALS["lang"]['Purchase Cost Center'] = 'क्रय लागत केंद्र';

$GLOBALS["lang"]['purchase_count'] = 'क्रय गणना';

$GLOBALS["lang"]['Purchase Count'] = 'क्रय गणना';

$GLOBALS["lang"]['purchase_date'] = 'क्रय तिथि';

$GLOBALS["lang"]['Purchase Date'] = 'क्रय तिथि';

$GLOBALS["lang"]['purchase_invoice'] = 'Invoice';

$GLOBALS["lang"]['Purchase Invoice'] = 'Invoice';

$GLOBALS["lang"]['purchase_order'] = 'खरीद आदेश';

$GLOBALS["lang"]['Purchase Order'] = 'खरीद आदेश';

$GLOBALS["lang"]['purchase_order_number'] = 'क्रय आदेश संख्या';

$GLOBALS["lang"]['Purchase Order Number'] = 'क्रय आदेश संख्या';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'सेवा अनुबंध संख्या';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'सेवा अनुबंध संख्या';

$GLOBALS["lang"]['purchase_vendor'] = 'विक्रेता';

$GLOBALS["lang"]['Purchase Vendor'] = 'विक्रेता';

$GLOBALS["lang"]['purpose'] = 'उद्देश्य';

$GLOBALS["lang"]['Purpose'] = 'उद्देश्य';

$GLOBALS["lang"]['Qatar'] = 'कतर';

$GLOBALS["lang"]['queries'] = 'पूछताछ';

$GLOBALS["lang"]['Queries'] = 'पूछताछ';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'प्रश्न ओपन-ऑडिट का एक महत्वपूर्ण हिस्सा हैं। वे हैं जो आपको खोजे गए सभी डिवाइस डेटा से सार्थक जानकारी प्राप्त करने में सक्षम बनाता है। सारांश और समूहों के साथ, वे महत्वपूर्ण जानकारी निकालने के लिए एक शक्तिशाली तंत्र प्रदान करते हैं।';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'समूह के लिए क्वेरी केवल चयन करना चाहिए';

$GLOBALS["lang"]['Query'] = 'क्वेरी';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'उपयोगकर्ता कार्य इकाई को निर्धारित करने के लिए पहले इस सक्रिय निर्देशिका विशेषता को क्वेरी करें।';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'उपयोगकर्ता कार्य इकाई को निर्धारित करने के लिए इस सक्रिय निर्देशिका विशेषता को दूसरे को क्वेरी करें।';

$GLOBALS["lang"]['queue'] = 'कतार';

$GLOBALS["lang"]['Queue'] = 'कतार';

$GLOBALS["lang"]['Queue Limit'] = 'कतार सीमा';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued डिवाइस ऑडिट';

$GLOBALS["lang"]['Queued IP Scans'] = 'क्यूड आईपी स्कैन';

$GLOBALS["lang"]['Queued Items'] = 'Queued आइटम';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'सक्रिय निर्देशिका और OpenLDAP के लिए RBAC';

$GLOBALS["lang"]['RU Start'] = 'आरयू स्टार्ट';

$GLOBALS["lang"]['RX Bitrate'] = 'RX बिटरेट';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX स्तर';

$GLOBALS["lang"]['RX Power'] = 'आरएक्स पावर';

$GLOBALS["lang"]['RX Profile'] = 'RX प्रोफ़ाइल';

$GLOBALS["lang"]['Rack'] = 'रैक';

$GLOBALS["lang"]['rack_devices'] = 'रैक उपकरण';

$GLOBALS["lang"]['Rack Devices'] = 'रैक उपकरण';

$GLOBALS["lang"]['rack_id'] = 'रैक आईडी';

$GLOBALS["lang"]['Rack ID'] = 'रैक आईडी';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'रैक प्रबंधन और रिपोर्टिंग';

$GLOBALS["lang"]['Racks'] = 'रैक';

$GLOBALS["lang"]['racks'] = 'रैक';

$GLOBALS["lang"]['radio'] = 'रेडियो';

$GLOBALS["lang"]['Radio'] = 'रेडियो';

$GLOBALS["lang"]['Radio MAC'] = 'रेडियो MAC';

$GLOBALS["lang"]['rationale'] = 'Rational';

$GLOBALS["lang"]['Rationale'] = 'Rational';

$GLOBALS["lang"]['raw'] = 'रॉ';

$GLOBALS["lang"]['Raw'] = 'रॉ';

$GLOBALS["lang"]['read'] = 'पढ़ें';

$GLOBALS["lang"]['Read'] = 'पढ़ें';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Open-Audit Wiki पर हमारा ऑनलाइन प्रलेखन पढ़ें।';

$GLOBALS["lang"]['Read through the log file at'] = 'लॉग फ़ाइल के माध्यम से पढ़ें';

$GLOBALS["lang"]['Received'] = 'प्राप्त करना';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'हाल ही में हम सवाल पूछ चुके हैं - क्या आप ओपन-ऑडिट को अन्य समान कार्यक्रमों की तुलना में अधिक सुरक्षित मानते हैं? अधिकांश बातों के साथ, उत्तर है <i>यह निर्भर करता है</i>।<br/><br/>ओपन-ऑड आईटी को इस तरह से संचालित किया जा सकता है क्योंकि यह बहुत सुरक्षित है। लेकिन कंप्यूटर आधारित सुरक्षा के साथ सामान्य रूप से, जितना अधिक सुरक्षित आप कुछ बनाना चाहते हैं, उतना ही असुविधाजनक है। पुराने वाक्यांश <i>सबसे सुरक्षित कंप्यूटर वह है जो बंद हो गया है और कपबोर्ड में<i> मन में आता है।<br/><br/>नीचे हम कुछ विकल्पों को रेखांकित करेंगे जिनका उपयोग ओपन-ऑडिट के साथ किया जा सकता है जो सुरक्षा को बढ़ा देगा। ओपन-ऑडिट के भीतर अधिकांश वस्तुओं की तरह, ये विकल्प हैं और अनिवार्य नहीं हैं। अब तक आप सुरक्षा कैसे लेते हैं?</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'प्रमाणन: हर तीन साल की आवश्यकता';

$GLOBALS["lang"]['Red Query'] = 'लाल मिर्च';

$GLOBALS["lang"]['Redirect URI'] = 'URI';

$GLOBALS["lang"]['redirect_uri'] = 'रीडायरेक्ट करें';

$GLOBALS["lang"]['Redirect Uri'] = 'रीडायरेक्ट करें';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'डेटा उल्लंघन और साइबर खतरों के जोखिम को कम करता है';

$GLOBALS["lang"]['references'] = 'संदर्भ';

$GLOBALS["lang"]['References'] = 'संदर्भ';

$GLOBALS["lang"]['region'] = 'क्षेत्र';

$GLOBALS["lang"]['Region'] = 'क्षेत्र';

$GLOBALS["lang"]['registered_user'] = 'पंजीकृत उपयोगकर्ता';

$GLOBALS["lang"]['Registered User'] = 'पंजीकृत उपयोगकर्ता';

$GLOBALS["lang"]['Rejected'] = 'अस्वीकार';

$GLOBALS["lang"]['rel'] = 'रेल';

$GLOBALS["lang"]['Rel'] = 'रेल';

$GLOBALS["lang"]['Release'] = 'रिलीज';

$GLOBALS["lang"]['remediation'] = 'उपचार';

$GLOBALS["lang"]['Remediation'] = 'उपचार';

$GLOBALS["lang"]['Remote'] = 'रिमोट';

$GLOBALS["lang"]['remote_address'] = 'दूरस्थ पता';

$GLOBALS["lang"]['Remote Address'] = 'दूरस्थ पता';

$GLOBALS["lang"]['remote_port'] = 'रिमोट पोर्ट';

$GLOBALS["lang"]['Remote Port'] = 'रिमोट पोर्ट';

$GLOBALS["lang"]['Remove'] = 'निकालें';

$GLOBALS["lang"]['Remove Exception'] = 'अपवाद निकालें';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'जब तक आपके पास पूरी तरह से खोजा और लेखा परीक्षा नहीं होती तब तक दोहराएं।';

$GLOBALS["lang"]['Report'] = 'रिपोर्ट';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'अपने उपकरणों, नेटवर्क और अधिक पर रिपोर्ट करें';

$GLOBALS["lang"]['reportable'] = 'रिपोर्टिंग';

$GLOBALS["lang"]['Reportable'] = 'रिपोर्टिंग';

$GLOBALS["lang"]['Reports'] = 'रिपोर्ट';

$GLOBALS["lang"]['request'] = 'अनुरोध';

$GLOBALS["lang"]['Request'] = 'अनुरोध';

$GLOBALS["lang"]['Request Method'] = 'अनुरोध विधि';

$GLOBALS["lang"]['Request Vulnerability'] = 'Vulnerability';

$GLOBALS["lang"]['Request a Specific CVE'] = 'एक विशिष्ट अनुरोध CVE';

$GLOBALS["lang"]['requested'] = 'अनुरोध';

$GLOBALS["lang"]['Requested'] = 'अनुरोध';

$GLOBALS["lang"]['require_port'] = 'पोर्ट की आवश्यकता';

$GLOBALS["lang"]['Require Port'] = 'पोर्ट की आवश्यकता';

$GLOBALS["lang"]['Require an Open Port'] = 'एक ओपन पोर्ट की आवश्यकता है';

$GLOBALS["lang"]['Required'] = 'आवश्यक';

$GLOBALS["lang"]['Required AWS user permissions'] = 'आवश्यक AWS उपयोगकर्ता अनुमति';

$GLOBALS["lang"]['Required Fields'] = 'आवश्यक फ़ील्ड';

$GLOBALS["lang"]['Reset'] = 'रीसेट करें';

$GLOBALS["lang"]['Reset All Data'] = 'सभी डेटा रीसेट करें';

$GLOBALS["lang"]['Reset to Default'] = 'डिफ़ॉल्ट के लिए रीसेट करें';

$GLOBALS["lang"]['resource'] = 'संसाधन';

$GLOBALS["lang"]['Resource'] = 'संसाधन';

$GLOBALS["lang"]['Resource Name'] = 'संसाधन का नाम';

$GLOBALS["lang"]['Resources'] = 'संसाधन';

$GLOBALS["lang"]['response'] = 'जवाब';

$GLOBALS["lang"]['Response'] = 'जवाब';

$GLOBALS["lang"]['responsibility'] = 'जिम्मेदारी';

$GLOBALS["lang"]['Responsibility'] = 'जिम्मेदारी';

$GLOBALS["lang"]['Restore my Licenses'] = 'मेरी लाइसेंस पुनर्स्थापित करें';

$GLOBALS["lang"]['Restrict to Private'] = 'निजी सचिव';

$GLOBALS["lang"]['Restrict to Subnet'] = 'सबनेट को प्रतिबंधित';

$GLOBALS["lang"]['result'] = 'परिणाम';

$GLOBALS["lang"]['Result'] = 'परिणाम';

$GLOBALS["lang"]['Resulting Function'] = 'परिणाम';

$GLOBALS["lang"]['Results'] = 'परिणाम';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'उपकरणों की सूची पुनर्प्राप्त करें';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'OS नाम जैसे Windows 2008 के साथ उपकरणों की एक सूची पुनर्प्राप्त करें';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'आईडी 88 के साथ डिवाइस के बारे में सभी विवरण पुनर्प्राप्त करें।';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'विंडोज चलाने वाले सभी उपकरणों को पुनर्प्राप्त करें।';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'मानक कॉलम के साथ सभी उपकरणों को पुनर्प्राप्त करें';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'पहले 10 उपकरणों को पुनर्प्राप्त करें जो Windows को होस्टनाम द्वारा ऑर्डर किया गया था';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'सभी उपकरणों से गुण आईडी, आईपी, होस्टनाम, डोमेन, प्रकार पुनर्प्राप्त करें';

$GLOBALS["lang"]['retrieved'] = 'रिट्रीव';

$GLOBALS["lang"]['Retrieved'] = 'रिट्रीव';

$GLOBALS["lang"]['retrieved_ident'] = 'प्राप्त पहचान';

$GLOBALS["lang"]['Retrieved Ident'] = 'प्राप्त पहचान';

$GLOBALS["lang"]['retrieved_name'] = 'प्राप्त नाम';

$GLOBALS["lang"]['Retrieved Name'] = 'प्राप्त नाम';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'डिवाइस से प्राप्त - Windows: Win32_ComputerSystem, Linux:dmidecode, MacOS: system_profiler, ESXi: vim-cmd hostsvc/hostsummary, HP-UX:machinfo, सोलारिस: smbios, AIX: Uname।';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'क्रेडेंशियल की सूची पुनर्प्राप्त करना';

$GLOBALS["lang"]['Retrieving or Creating'] = 'पुनःप्राप्त करना या बनाना';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'कॉलम के डिफ़ॉल्ट सेट (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'रूटर पर स्थापित सभी मॉड्यूल की एक सूची वापस';

$GLOBALS["lang"]['Return an individual device details.'] = 'एक व्यक्तिगत डिवाइस विवरण लौटाएं।';

$GLOBALS["lang"]['Returns a list of {collection}.'] = '{collection} की एक सूची लौटें।';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'एक {collection} विवरण देता है।';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001 आवश्यकताओं के खिलाफ मौजूदा प्रथाओं की समीक्षा करें';

$GLOBALS["lang"]['revision'] = 'संशोधन';

$GLOBALS["lang"]['Revision'] = 'संशोधन';

$GLOBALS["lang"]['risk_assesment_result'] = 'जोखिम आकलन परिणाम';

$GLOBALS["lang"]['Risk Assesment Result'] = 'जोखिम आकलन परिणाम';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'जोखिम आकलन और उपचार';

$GLOBALS["lang"]['Risk Management'] = 'जोखिम प्रबंधन';

$GLOBALS["lang"]['Role'] = 'भूमिका';

$GLOBALS["lang"]['roles'] = 'भूमिका';

$GLOBALS["lang"]['Roles'] = 'भूमिका';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'यदि आपके पास ओपन-ऑडिट एंटरप्राइज लाइसेंस है तो रोल्स को केवल बनाया और संपादित किया जा सकता है। अधिकांश उपयोगकर्ताओं के लिए, रोल्स का डिफ़ॉल्ट सेट आवश्यक सभी होना चाहिए।';

$GLOBALS["lang"]['Romania'] = 'रोमानिया';

$GLOBALS["lang"]['Romanian'] = 'रोमानियाई';

$GLOBALS["lang"]['Room'] = 'कमरा';

$GLOBALS["lang"]['route'] = 'मार्ग';

$GLOBALS["lang"]['Route'] = 'मार्ग';

$GLOBALS["lang"]['Row'] = 'पंक्ति';

$GLOBALS["lang"]['Row Count'] = 'पंक्ति गणना';

$GLOBALS["lang"]['row_position'] = 'पंक्ति की स्थिति';

$GLOBALS["lang"]['Row Position'] = 'पंक्ति की स्थिति';

$GLOBALS["lang"]['Rows'] = 'पंक्ति';

$GLOBALS["lang"]['ru_height'] = 'रु हाइट';

$GLOBALS["lang"]['Ru Height'] = 'रु हाइट';

$GLOBALS["lang"]['ru_start'] = 'रु स्टार्ट';

$GLOBALS["lang"]['Ru Start'] = 'रु स्टार्ट';

$GLOBALS["lang"]['rule_group'] = 'नियम समूह';

$GLOBALS["lang"]['Rule Group'] = 'नियम समूह';

$GLOBALS["lang"]['rules'] = 'नियम';

$GLOBALS["lang"]['Rules'] = 'नियम';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'जब डिवाइस की खोज की जाती है या एक लेखा परीक्षा परिणाम संसाधित किया जाता है तो नियम एक उपकरण के खिलाफ बनाए जाते हैं। नियमों का उपयोग अन्य विशेषताओं के आधार पर एक उपकरण विशेषता सेट करने के लिए किया जा सकता है।<br/><br/>ध्यान दें - वर्तमान में हम एक नियम इनपुट या आउटपुट को हटा नहीं सकते हैं जिसमें एक / होता है। इसका कारण यह है कि फ्रेमवर्क यूआरएल के हिस्से के रूप में / को पार कर रहा है और हमारे कोड रन से पहले भी एक 404 लौटा रहा है। इसके लिए वर्क-अराउंड नियम को ही हटाना है, फिर आवश्यकतानुसार इनपुट और आउटपुट को फिर से बनाना है। Fortunately इनपुट और आउटपुट जिसमें एक / दुर्लभ (indeed, डिफ़ॉल्ट रूप से मौजूद नहीं) होते हैं।';

$GLOBALS["lang"]['Run Discovery'] = 'रन डिस्कवरी';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'उपकरण पर डिस्कवरी';

$GLOBALS["lang"]['Run Your Discovery'] = 'अपना डिस्कवरी चलाएं';

$GLOBALS["lang"]['Run a Command'] = 'एक कमांड चलायें';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'एक खोज रन और पता लगाना <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'टाइप करके स्क्रिप्ट चलाएं <code>cscript test_windows_client.vbs</code> कंसोल में।';

$GLOBALS["lang"]['Run this Command'] = 'इस कमांड को चलाएं';

$GLOBALS["lang"]['runas'] = 'रन';

$GLOBALS["lang"]['Runas'] = 'रन';

$GLOBALS["lang"]['Running'] = 'दौड़ना';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'विंडोज के तहत ओपन-ऑडिट अपाचे सर्विस चलाना';

$GLOBALS["lang"]['Russian'] = 'रूसी';

$GLOBALS["lang"]['Russian Federation'] = 'रूसी संघ';

$GLOBALS["lang"]['Rwanda'] = 'रवांडा';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx स्तर';

$GLOBALS["lang"]['Rx Level'] = 'Rx स्तर';

$GLOBALS["lang"]['rx_power'] = 'आरएक्स पावर';

$GLOBALS["lang"]['Rx Power'] = 'आरएक्स पावर';

$GLOBALS["lang"]['rx_profile'] = 'Rx प्रोफ़ाइल';

$GLOBALS["lang"]['Rx Profile'] = 'Rx प्रोफ़ाइल';

$GLOBALS["lang"]['SAN Audit'] = 'SAN ऑडिट';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN ऑटो डिस्कवर';

$GLOBALS["lang"]['SELECT'] = 'चयन';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM संस्करण';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'एसएनएमपी विवरण';

$GLOBALS["lang"]['SNMP OID'] = 'एसएनएमपी ओआईडी';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP संस्करण';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL निर्माण वक्तव्य';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL इस स्थिति में शामिल नहीं होने के परिणामस्वरूप विजेट निष्पादित होने में विफल रहता है।';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH कुंजी';

$GLOBALS["lang"]['SW Revision'] = 'SW संशोधन';

$GLOBALS["lang"]['Saint Barthelemy'] = 'सेंट Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'सेंट हेलेना';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'सेंट किट्स एंड नेविस';

$GLOBALS["lang"]['Saint Lucia'] = 'सेंट लूसिया';

$GLOBALS["lang"]['Saint Martin'] = 'सेंट मार्टिन';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'सेंट पिएरे एंड मिक्वेलॉन';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'सेंट विन्सेंट और ग्रेनेडाइन';

$GLOBALS["lang"]['Samoa'] = 'समोआ';

$GLOBALS["lang"]['san'] = 'सैन';

$GLOBALS["lang"]['San'] = 'सैन';

$GLOBALS["lang"]['San Marino'] = 'सैन मैरिन';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome and Principe';

$GLOBALS["lang"]['Saturday'] = 'शनिवार';

$GLOBALS["lang"]['Saudi Arabia'] = 'सऊदी अरब';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'फ़ाइल को सहेजें और चलाएं। सुनिश्चित करें कि आप इसे स्थापित करने के लिए एक प्रशासक के रूप में फ़ाइल चलाएं (दाएं क्लिक करें, प्रशासक के रूप में चलाएं)।';

$GLOBALS["lang"]['Save as Default'] = 'डिफ़ॉल्ट के रूप में सहेजें';

$GLOBALS["lang"]['Save the downloaded file.'] = 'डाउनलोड फ़ाइल सहेजें।';

$GLOBALS["lang"]['scaling'] = 'स्केलिंग';

$GLOBALS["lang"]['Scaling'] = 'स्केलिंग';

$GLOBALS["lang"]['scan_options'] = 'स्कैन विकल्प';

$GLOBALS["lang"]['Scan Options'] = 'स्कैन विकल्प';

$GLOBALS["lang"]['Scan Options ID'] = 'स्कैन विकल्प ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'इस बंदरगाह के लिए स्कैन करें और यदि खुला पता चला है, तो एसएसएच संचार के लिए इस बंदरगाह का उपयोग करें। इसे ऊपर कस्टम टीसीपी पोर्ट्स की सूची में जोड़ा गया है (यदि पहले से ही शामिल नहीं है), इसलिए उस सूची में भी शामिल होने की कोई आवश्यकता नहीं है। कॉमा सेपरेटेड, कोई जगह नहीं।';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'टीसीपी बंदरगाहों की Nmap शीर्ष संख्या को स्कैन करें।';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'UDP बंदरगाहों की Nmap शीर्ष संख्या स्कैन करें।';

$GLOBALS["lang"]['schedule'] = 'अनुसूची';

$GLOBALS["lang"]['Schedule'] = 'अनुसूची';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'अनुसूचित डिवाइस खोज और रिपोर्टिंग ओपन-ऑडिट प्रोफेशनल को व्यस्त आईटी पेशेवरों के लिए एक कुशल समाधान बनाते हैं जो ओवरहेड्स को कम करने और अंतर्दृष्टि बढ़ाने की तलाश में हैं।';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - खोज, रिपोर्टिंग और अधिक';

$GLOBALS["lang"]['scope'] = 'स्कोप';

$GLOBALS["lang"]['Scope'] = 'स्कोप';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'स्कोप को प्राधिकरण स्कोप के रूप में जाना जाता है, यह दर्शाता है कि क्या एक भेद्यता कमजोर घटक के मूल सुरक्षा प्राधिकरण से परे संसाधनों को प्रभावित करती है।<br/><br/>इस विशेषता के लिए केवल दो मान्य मान हैं';

$GLOBALS["lang"]['script_timeout'] = 'स्क्रिप्ट टाइमआउट';

$GLOBALS["lang"]['Script Timeout'] = 'स्क्रिप्ट टाइमआउट';

$GLOBALS["lang"]['scripts'] = 'स्क्रिप्ट';

$GLOBALS["lang"]['Scripts'] = 'स्क्रिप्ट';

$GLOBALS["lang"]['scsi'] = 'हिन्दी';

$GLOBALS["lang"]['Scsi'] = 'हिन्दी';

$GLOBALS["lang"]['scsi_bus'] = 'बस';

$GLOBALS["lang"]['Scsi Bus'] = 'बस';

$GLOBALS["lang"]['scsi_logical_unit'] = 'एससीआई लॉजिकल यूनिट';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'एससीआई लॉजिकल यूनिट';

$GLOBALS["lang"]['scsi_port'] = 'एससीआई पोर्ट';

$GLOBALS["lang"]['Scsi Port'] = 'एससीआई पोर्ट';

$GLOBALS["lang"]['Search'] = 'खोज';

$GLOBALS["lang"]['Search For a Device'] = 'एक डिवाइस के लिए खोज';

$GLOBALS["lang"]['Searching Using DataTables'] = 'DataTables का उपयोग करके खोज करना';

$GLOBALS["lang"]['Second'] = 'दूसरा';

$GLOBALS["lang"]['secondary'] = 'माध्यमिक';

$GLOBALS["lang"]['Secondary'] = 'माध्यमिक';

$GLOBALS["lang"]['Secondary Text'] = 'माध्यमिक पाठ';

$GLOBALS["lang"]['Secret Key'] = 'गुप्त कुंजी';

$GLOBALS["lang"]['section'] = 'अनुभाग';

$GLOBALS["lang"]['Section'] = 'अनुभाग';

$GLOBALS["lang"]['secure'] = 'सुरक्षित';

$GLOBALS["lang"]['Secure'] = 'सुरक्षित';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'सुरक्षा सामग्री स्वचालन प्रोटोकॉल';

$GLOBALS["lang"]['Security Level'] = 'सुरक्षा स्तर';

$GLOBALS["lang"]['Security Name'] = 'सुरक्षा नाम';

$GLOBALS["lang"]['Security Status'] = 'सुरक्षा स्थिति';

$GLOBALS["lang"]['security_zone'] = 'सुरक्षा क्षेत्र';

$GLOBALS["lang"]['Security Zone'] = 'सुरक्षा क्षेत्र';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'ऊपर देखें नोट - यह LDAP सर्वर पर स्वयं से हस्ताक्षरित प्रमाणपत्र के कारण भी हो सकता है। हम भविष्य में जारी होने की अनुमति देने के लिए काम कर रहे हैं।';

$GLOBALS["lang"]['See our page on enabling'] = 'सक्षम करने पर हमारा पेज देखें';

$GLOBALS["lang"]['Seed Discoveries'] = 'बीज खोज';

$GLOBALS["lang"]['seed_ip'] = 'बीज आईपी';

$GLOBALS["lang"]['Seed IP'] = 'बीज आईपी';

$GLOBALS["lang"]['seed_ping'] = 'बीज पिंग';

$GLOBALS["lang"]['Seed Ping'] = 'बीज पिंग';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'बीज प्रतिबंधित करने के लिए निजी';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'बीज प्रतिबंधित करने के लिए निजी';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'बीज Restrict to Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'बीज Restrict to Subnet';

$GLOBALS["lang"]['Select'] = 'चयन';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'व्यवस्थापक चुनें -> कार्य -> बनाना मेनू से कार्य करें।';

$GLOBALS["lang"]['Select All'] = 'सभी का चयन करें';

$GLOBALS["lang"]['Select All Devices'] = 'सभी डिवाइस चुनें';

$GLOBALS["lang"]['select_external_attribute'] = 'बाह्य विशेषता चुनें';

$GLOBALS["lang"]['Select External Attribute'] = 'बाह्य विशेषता चुनें';

$GLOBALS["lang"]['select_external_count'] = 'बाहरी गणना चुनें';

$GLOBALS["lang"]['Select External Count'] = 'बाहरी गणना चुनें';

$GLOBALS["lang"]['select_external_type'] = 'बाह्य प्रकार';

$GLOBALS["lang"]['Select External Type'] = 'बाह्य प्रकार';

$GLOBALS["lang"]['select_external_value'] = 'बाह्य मूल्य';

$GLOBALS["lang"]['Select External Value'] = 'बाह्य मूल्य';

$GLOBALS["lang"]['select_internal_attribute'] = 'आंतरिक विशेषता चुनें';

$GLOBALS["lang"]['Select Internal Attribute'] = 'आंतरिक विशेषता चुनें';

$GLOBALS["lang"]['select_internal_count'] = 'आंतरिक गणना चुनें';

$GLOBALS["lang"]['Select Internal Count'] = 'आंतरिक गणना चुनें';

$GLOBALS["lang"]['select_internal_type'] = 'आंतरिक चयन प्रकार';

$GLOBALS["lang"]['Select Internal Type'] = 'आंतरिक चयन प्रकार';

$GLOBALS["lang"]['select_internal_value'] = 'आंतरिक चयन मूल्य';

$GLOBALS["lang"]['Select Internal Value'] = 'आंतरिक चयन मूल्य';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'मेनू चुनें -> व्यवस्था -> बेसलाइन';

$GLOBALS["lang"]['Select a Table'] = 'तालिका चुनें';

$GLOBALS["lang"]['Select an accredited certification body'] = 'एक मान्यता प्राप्त प्रमाणीकरण शरीर का चयन करें';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'उचित नियंत्रण (एनेक्स ए) का चयन करें और लागू करें';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'चुनें <i>कॉम सुरक्षा</i> टैब<br/><br/>प्रवेश अनुमति पर क्लिक करें डिफ़ॉल्ट';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'चुनें <i>साइन इन करें</i> टैब और मूल्य की प्रतिलिपि <i>जारीकर्ता</i> (केवल यूआरएल ही)। इसे ओपन-ऑडिट में पेस्ट करें <i>जारीकर्ता</i> क्षेत्र।';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'चुनें <i>यह खाता</i> चेकबॉक्स और खाता नाम और पासवर्ड प्रदान करते हैं।';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'प्रारंभ मेनू और प्रकार चुनें <i>सेवा सर्विस आइकन पर क्लिक करें।</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'प्रासंगिक विवरण बनाने और इनपुट करने के लिए Auth Menthod के प्रकार का चयन करें।';

$GLOBALS["lang"]['Self Delete'] = 'सेल्फ डिलीट';

$GLOBALS["lang"]['Senegal'] = 'सेनेगल';

$GLOBALS["lang"]['sensitivity'] = 'संवेदनशीलता';

$GLOBALS["lang"]['Sensitivity'] = 'संवेदनशीलता';

$GLOBALS["lang"]['September'] = 'सितंबर';

$GLOBALS["lang"]['Serbia'] = 'सर्बिया';

$GLOBALS["lang"]['serial'] = 'सीरियल';

$GLOBALS["lang"]['Serial'] = 'सीरियल';

$GLOBALS["lang"]['serial_imei'] = 'सीरियल Imei';

$GLOBALS["lang"]['Serial Imei'] = 'सीरियल Imei';

$GLOBALS["lang"]['serial_sim'] = 'सीरियल सिम';

$GLOBALS["lang"]['Serial Sim'] = 'सीरियल सिम';

$GLOBALS["lang"]['series'] = 'शृंखला';

$GLOBALS["lang"]['Series'] = 'शृंखला';

$GLOBALS["lang"]['server'] = 'सर्वर';

$GLOBALS["lang"]['Server'] = 'सर्वर';

$GLOBALS["lang"]['server_id'] = 'सर्वर ID';

$GLOBALS["lang"]['Server ID'] = 'सर्वर ID';

$GLOBALS["lang"]['Server Is'] = 'सर्वर है';

$GLOBALS["lang"]['server_item'] = 'सर्वर आइटम';

$GLOBALS["lang"]['Server Item'] = 'सर्वर आइटम';

$GLOBALS["lang"]['Server Status'] = 'सर्वर स्थिति';

$GLOBALS["lang"]['Servers'] = 'सर्वर';

$GLOBALS["lang"]['Servers Only'] = 'केवल सर्वर';

$GLOBALS["lang"]['service'] = 'सेवा';

$GLOBALS["lang"]['Service'] = 'सेवा';

$GLOBALS["lang"]['service_identifier'] = 'सेवा पहचानकर्ता';

$GLOBALS["lang"]['Service Identifier'] = 'सेवा पहचानकर्ता';

$GLOBALS["lang"]['service_level_a'] = 'सेवा स्तर A';

$GLOBALS["lang"]['Service Level A'] = 'सेवा स्तर A';

$GLOBALS["lang"]['service_level_b'] = 'सेवा स्तर बी';

$GLOBALS["lang"]['Service Level B'] = 'सेवा स्तर बी';

$GLOBALS["lang"]['service_network'] = 'सेवा नेटवर्क';

$GLOBALS["lang"]['Service Network'] = 'सेवा नेटवर्क';

$GLOBALS["lang"]['service_number'] = 'सेवा क्रमांक';

$GLOBALS["lang"]['Service Number'] = 'सेवा क्रमांक';

$GLOBALS["lang"]['service_pack'] = 'सर्विस पैक';

$GLOBALS["lang"]['Service Pack'] = 'सर्विस पैक';

$GLOBALS["lang"]['service_plan'] = 'सेवा योजना';

$GLOBALS["lang"]['Service Plan'] = 'सेवा योजना';

$GLOBALS["lang"]['service_provider'] = 'सेवा प्रदाता';

$GLOBALS["lang"]['Service Provider'] = 'सेवा प्रदाता';

$GLOBALS["lang"]['service_tag'] = 'सेवा टैग';

$GLOBALS["lang"]['Service Tag'] = 'सेवा टैग';

$GLOBALS["lang"]['service_type'] = 'सेवा प्रकार';

$GLOBALS["lang"]['Service Type'] = 'सेवा प्रकार';

$GLOBALS["lang"]['Service Under Windows'] = 'Windows के तहत सेवा';

$GLOBALS["lang"]['service_version'] = 'सेवा संस्करण';

$GLOBALS["lang"]['Service Version'] = 'सेवा संस्करण';

$GLOBALS["lang"]['Set'] = 'सेट';

$GLOBALS["lang"]['set_by'] = 'द्वारा सेट';

$GLOBALS["lang"]['Set By'] = 'द्वारा सेट';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'डिस्कवरी फंक्शन द्वारा सेट - सामान्य रूप से इसे मैन्युअल रूप से सेट न करें।';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'ऑडिट_domain या search_domain स्क्रिप्ट द्वारा सेट करें। सेट न करें।';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'बाह्य पाठ को आंतरिक डेटा के पूंजीकृत संस्करण में सेट करें।';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'बाहरी टेक्स्ट को लोअरकेस में सेट करें।';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'बाहरी टेक्स्ट को ऊपरी केस में सेट करें।';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'सूची स्क्रीन पर तालिकाओं के आकार (सामान्य या कॉम्पैक्ट) सेट करें।';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'इसे सेट करें यदि आप AD से सिस्टम डालना चाहते हैं जो संपर्क करने योग्य नहीं हो सकता है, लेकिन उस तारीख से AD द्वारा देखा गया है।';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'एक सबनेट पर डिस्कवरी की स्थापना वेब इंटरफेस के माध्यम से एक नियमित डिस्कवरी चलाने के लिए लगभग समान है। केवल अतिरिक्त आइटम अनुसूचित घंटे और दिन (s) और अनुसूचित कार्य के लिए एक नाम हैं। आप कई खोजों को निर्धारित करने के लिए इस का लाभ उठा सकते हैं, जो क्रेडेंशियल के विभिन्न सेटों का उपयोग करते हैं।<br/><br/>सबनेट डिस्कवरी के अनुसार, सक्रिय निर्देशिका डिस्कवरी एक दिन, घंटे और नाम के अलावा एक नियमित सक्रिय निर्देशिका डिस्कवरी के रूप में भी एक ही क्षेत्र है।<br/><br/>यदि ओपन-ऑडिट सर्वर ने इसे रिपोर्ट करने वाले कलेक्टरों को दिया है, तो एक अतिरिक्त ड्रॉप डाउन प्रदान किया जाता है। आप यह निर्दिष्ट करने के लिए चुन सकते हैं कि कौन से कलेक्टर को कार्य करना चाहिए। केवल डिस्कवरी कार्यों को कलेक्टरों के लिए समर्थन दिया जाता है। उसी आइटम को एक नियमित खोज के रूप में निर्दिष्ट करें, लेकिन इस कार्य को चलाने के लिए वैकल्पिक कलेक्टर प्रदान करें।';

$GLOBALS["lang"]['severity'] = 'गंभीरता';

$GLOBALS["lang"]['Severity'] = 'गंभीरता';

$GLOBALS["lang"]['severity_text'] = 'पाठ';

$GLOBALS["lang"]['Severity Text'] = 'पाठ';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'गंभीरता की गणना से की जाती है <code>base_score</code> और इसमें से एक हो सकता है: कोई नहीं, कम, मध्यम, उच्च, गंभीर।';

$GLOBALS["lang"]['Seychelles'] = 'सेशेल';

$GLOBALS["lang"]['share'] = 'शेयर';

$GLOBALS["lang"]['Share'] = 'शेयर';

$GLOBALS["lang"]['Share Name'] = 'शेयर नाम';

$GLOBALS["lang"]['shared'] = 'साझा';

$GLOBALS["lang"]['Shared'] = 'साझा';

$GLOBALS["lang"]['shared_name'] = 'साझा नाम';

$GLOBALS["lang"]['Shared Name'] = 'साझा नाम';

$GLOBALS["lang"]['shell'] = 'शैल';

$GLOBALS["lang"]['Shell'] = 'शैल';

$GLOBALS["lang"]['Ship Date'] = 'जहाज की तारीख';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'शिप डिफ़ॉल्ट वस्तुओं का एक सेट है। ये मेनू में जाकर पाया जा सकता है';

$GLOBALS["lang"]['short'] = 'छोटा';

$GLOBALS["lang"]['Short'] = 'छोटा';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'क्या मैं इस डिवाइस से सभी गैर-वर्तमान डेटा को हटा सकता हूं?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'क्या इस फ़ाइल (या पैटर्न) का उपयोग रिपोर्ट किए जाने से फ़ाइलों को बाहर करने के लिए किया जाना चाहिए। आम तौर पर, फ़ाइलों का परीक्षण करने के लिए, यह करने के लिए सेट है <code>y</code>।';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'क्या इस विक्रेता का उपयोग फर्स्टवेव से भेद्यता प्राप्त करते समय किया जाना चाहिए।';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'क्या हम स्थानीय रूप से दूरस्थ सेवा से उपकरणों को जोड़ सकते हैं।';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'क्या हम इस लाइसेंस को चयनित संगठन के साथ-साथ संगठनों के बच्चों के लिए आवेदन कर सकते हैं?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'यदि प्रबंधन सॉफ्टवेयर का पता लगाया जाता है तो हमें एक SAN का ऑडिट करना चाहिए।';

$GLOBALS["lang"]['Should we audit mount points.'] = 'क्या हम माउंट पॉइंट्स का ऑडिट करते हैं।';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'क्या हमें नेटस्टैट पोर्ट्स (हाँ, नहीं, केवल सर्वर) का ऑडिट करना चाहिए।';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'क्या हम स्थापित सॉफ्टवेयर का परीक्षण कर सकते हैं।';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'क्या हम एक फिल्टर पोर्ट को एक ओपन पोर्ट मानते हैं?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'क्या हम एक खुले बंदरगाह पर विचार करते हैं?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'क्या हम होस्टनाम को लोअरकेस में बदल सकते हैं।';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'क्या हम लेखा परीक्षा परिणाम के आधार पर एक फ़ाइल बना सकते हैं।';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'क्या हम इस समूह को वेब इंटरफेस में उजागर करते हैं।';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'क्या हम वेब इंटरफेस में रिपोर्ट मेनू के तहत रिपोर्ट की सूची में इस क्वेरी को उजागर करते हैं।';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'क्या हम वेब इंटरफेस में रिपोर्ट मेनू के तहत रिपोर्ट की सूची में इस क्वेरी को उजागर करते हैं।';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'क्या हम निष्पादन करते समय ऑडिट स्क्रिप्ट विंडो को छिपाते हैं।';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'क्या हम एक अवैध या स्वयं हस्ताक्षरित एसएसएल प्रमाणपत्र को अनदेखा करते हैं और परिणाम को वैसे भी जमा करते हैं।';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'क्या हम लक्ष्य मशीन पर ओपन-सैप स्थापित करते हैं।';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'क्या हम एक डिवाइस आधारित मैक पते से मेल खाते हैं, भले ही इसका पता VMware से डुप्लिकेट हो।';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'क्या हम अपने DNS fqdn पर आधारित एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'क्या हम अपने DNS होस्टनाम के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'क्या हम अपने UUID पर आधारित एक उपकरण से मेल खाते हैं?';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'क्या हम अपने डीबस आईडी के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'क्या हम अपने fqdn पर आधारित एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'क्या हम अपने होस्टनाम और यूयूआईडी के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'क्या हम अपने होस्टनाम और डीबस आईडी के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'क्या हम अपने होस्टनाम और सीरियल के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'यदि हमारे पास कोई डेटा नहीं है तो क्या हम अपने आईपी के आधार पर एक डिवाइस से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'क्या हम अपने आईपी पर आधारित डिवाइस से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'क्या हम अपने मैक पते के आधार पर एक डिवाइस से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'क्या हम अपने धारावाहिक और प्रकार के आधार पर एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'क्या हम अपने सीरियल नंबर के आधार पर एक डिवाइस से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'क्या हम केवल अपने एसएनएमपी sysName और सीरियल पर आधारित एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'क्या हम केवल अपने एसएनएमपी sysName पर आधारित एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'क्या हम अपने होस्टनाम पर आधारित एक उपकरण से मेल खाते हैं।';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'क्या हम इसे स्कैन करने का प्रयास करने से पहले आईपी को पी सकते हैं? यदि यह पिंग का जवाब नहीं देता है, तो इस उपकरण को छोड़ दें।';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'क्या हम अपने स्थानीय उपकरणों से बाहरी सिस्टम को पॉप्युलेट कर सकते हैं।';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'क्या हम सभी DNS नामों को पुनर्प्राप्त करते हैं';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'क्या हम एक लेखा परीक्षा चलाते हैं और इसे प्रस्तुत करते हैं (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'क्या हम UDP पोर्ट 161 का उपयोग करते हुए SNMP का परीक्षण करते हैं।';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'क्या हम TCP पोर्ट 22 का उपयोग कर SSH के लिए परीक्षण करना चाहिए।';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'क्या हम टीसीपी पोर्ट 135 का उपयोग करके WMI के लिए परीक्षण करना चाहते हैं।';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'क्या हम एजेंट (y/n) की स्थापना रद्द कर सकते हैं।';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'क्या हम ऑडिट परिणाम जमा करने के लिए सिस्टम या उपयोगकर्ता स्तर के प्रॉक्सी का उपयोग करते हैं।';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'हम स्थापित सॉफ्टवेयर को पुनः प्राप्त करते समय win32_product WMI क्लास (माइक्रोसॉफ्ट द्वारा अनुशंसित नहीं) का उपयोग करना चाहिए।';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'क्या हम उपयोगकर्ता क्रेडेंशियल को प्रमाणित करने के लिए इस विधि का उपयोग करते हैं। सेट <code>y</code> या <code>n</code>।';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'क्या हम इस विधि का उपयोग एक उपयोगकर्ता भूमिका को पॉप्युलेट करने के लिए करते हैं। क्षेत्र <code>use_auth</code> होना चाहिए <code>y</code> इसका उपयोग करना सेट <code>y</code> या <code>n</code>।';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'क्या हम बाहरी और आंतरिक उपकरणों से मिलान करने के लिए इस मूल्य का उपयोग करते हैं। हमारा डिफ़ॉल्ट एकीकरण यहां IP और UUID का उपयोग करता है। यदि बाहरी और आंतरिक डिवाइस के बीच इन मैचों में से कोई है, तो हम उन्हें उसी डिवाइस पर विचार करते हैं।';

$GLOBALS["lang"]['Show All'] = 'सभी दिखाएँ';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'साइडबार';

$GLOBALS["lang"]['Sidebar'] = 'साइडबार';

$GLOBALS["lang"]['Sierra Leone'] = 'सिएरा लियोन';

$GLOBALS["lang"]['Singapore'] = 'सिंगापुर';

$GLOBALS["lang"]['Site A'] = 'साइट A';

$GLOBALS["lang"]['Site B'] = 'साइट';

$GLOBALS["lang"]['site_hours_a'] = 'साइट आवर्स A';

$GLOBALS["lang"]['Site Hours A'] = 'साइट आवर्स A';

$GLOBALS["lang"]['site_hours_b'] = 'साइट आवर्स B';

$GLOBALS["lang"]['Site Hours B'] = 'साइट आवर्स B';

$GLOBALS["lang"]['size'] = 'आकार';

$GLOBALS["lang"]['Size'] = 'आकार';

$GLOBALS["lang"]['slaves'] = 'दास';

$GLOBALS["lang"]['Slaves'] = 'दास';

$GLOBALS["lang"]['Slovak'] = 'स्लोवाक';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'स्लोवाकिया (स्लोवाक गणराज्य)';

$GLOBALS["lang"]['Slovenia'] = 'स्लोवेनिया';

$GLOBALS["lang"]['Slovenian'] = 'स्लोवेनियाई';

$GLOBALS["lang"]['Smart Status'] = 'स्मार्ट स्थिति';

$GLOBALS["lang"]['smversion'] = 'स्मरण';

$GLOBALS["lang"]['Smversion'] = 'स्मरण';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp संस्करण';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp संस्करण';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'तो एक स्क्रिप्ट एक recalcitrant डिवाइस पर काम नहीं कर रहा है। Grrr. विंडोज, लिनक्स और मैकओएस के लिए स्क्रिप्ट सभी डीबगिंग तर्क को स्वीकार करते हैं। यह खुद स्क्रिप्ट में सेट किया जा सकता है, या कमांड लाइन पर प्रदान किया जा सकता है। उस विकल्प का उपयोग करके स्क्रिप्ट को 5 पर सेट करें और आपको यह देखना चाहिए कि स्क्रिप्ट का कौन-सा खंड असफल होता है। उदाहरण के लिए';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'इसलिए एक नियमित शब्द के अलावा, क्या अन्य विकल्प हैं - मुझे खुशी है कि आपने पूछा! मानक ओपन-ऑडिट एपीआई के अनुसार, हमारे पास फ़िल्टरिंग के लिए कई ऑपरेटर हैं। जिन ऑपरेटरों को मूल्य निर्धारित किया जा सकता है वे हैं';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'इसलिए आपके पास अपने उपकरणों की खोज के लिए ओपन-ऑडिट क्रेडेंशियल प्रदान करने का एक मुद्दा है। मुझे जवाब है - तो मत करो! निश्चित रूप से, मेरा मतलब है, खोज कटा हुआ रोटी के बाद से सबसे अच्छी बात है। आपको समय से पहले जानने की जरूरत नहीं है <i>Whats On Your Network</i>। लेकिन आप क्रेडेंशियल प्रदान किए बिना उपकरणों से डेटा कैसे निकाल सकते हैं?<br/><br/>कंप्यूटर के मामले में, एक आसान विकल्प लक्ष्य मशीनों के लिए उपयुक्त ऑडिट स्क्रिप्ट की प्रतिलिपि बनाना है और इसे शेड्यूल पर निष्पादित करने के लिए सेट करना है। विकिपीडिया पर अधिक जानकारी। मशीन अपने डेटा को उस अनुसूची पर ओपन-ऑडिट में भेज देगी, लगभग जैसे कि आप खोज रहे थे। यह उपकरण केवल एक अनुसूची (अर्थात, आप ऑडिट स्क्रिप्ट को पढ़ सकते हैं) पर ऑडिट स्क्रिप्ट चलाता है क्योंकि आप इसे सर्वर पर आउटपुट भेज सकते हैं। कोई क्रेडेंशियल बिल्कुल शामिल नहीं हैं।<br/><br/>और अब हमारे पास विंडोज के लिए एजेंट हैं। एक वास्तविक स्थापित एजेंट के फायदे हैं';

$GLOBALS["lang"]['socket'] = 'सॉकेट';

$GLOBALS["lang"]['Socket'] = 'सॉकेट';

$GLOBALS["lang"]['software'] = 'सॉफ्टवेयर';

$GLOBALS["lang"]['Software'] = 'सॉफ्टवेयर';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'सॉफ्टवेयर स्थापित पिछले 7 दिनों';

$GLOBALS["lang"]['Software Found Today'] = 'आज सॉफ्टवेयर';

$GLOBALS["lang"]['Software Found Yesterday'] = 'सॉफ्टवेयर स्थापित कल';

$GLOBALS["lang"]['software_key'] = 'सॉफ्टवेयर कुंजी';

$GLOBALS["lang"]['Software Key'] = 'सॉफ्टवेयर कुंजी';

$GLOBALS["lang"]['Software License Reporting'] = 'सॉफ्टवेयर लाइसेंस रिपोर्टिंग';

$GLOBALS["lang"]['software_name'] = 'सॉफ्टवेयर नाम';

$GLOBALS["lang"]['Software Name'] = 'सॉफ्टवेयर नाम';

$GLOBALS["lang"]['Software Policies'] = 'सॉफ्टवेयर नीतियां';

$GLOBALS["lang"]['software_revision'] = 'सॉफ्टवेयर संशोधन';

$GLOBALS["lang"]['Software Revision'] = 'सॉफ्टवेयर संशोधन';

$GLOBALS["lang"]['software_version'] = 'सॉफ्टवेयर संस्करण';

$GLOBALS["lang"]['Software Version'] = 'सॉफ्टवेयर संस्करण';

$GLOBALS["lang"]['Solaris'] = 'सोलारिस';

$GLOBALS["lang"]['Solomon Islands'] = 'सोलोमन द्वीपसमूह';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'सोमालिया, सोमाली गणराज्य';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'कुछ संग्रहों को निष्पादित किया जा सकता है - प्रश्नों आदि - नीचे देखें।';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'कुछ उदाहरण इस पृष्ठ के नीचे हैं। सभी समापन बिंदुओं में आवश्यक फ़ील्ड की न्यूनतम सूची भी है। ये नीचे हैं।';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'हमारे कुछ टेम्प्लेट सर्वर साइड प्रोसेसिंग का उपयोग करते हुए डेटाटेबल्स को नए कदम का समर्थन करते हैं। यह सामूहिक रूप से लोड समय में सुधार करता है।';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'कुछ अन्य त्रुटि तब हुई जब LDAP सर्वर को बांधने की कोशिश की। यह संपर्क करने योग्य है (i, अर्थात,) <i>कनेक्ट</i> ऊपर काम किया है, लेकिन कुछ अन्य कारणों से, बाध्यकारी नहीं हुआ है। LDAP सर्वर पर लॉग की जाँच करें।';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'कुछ गंभीर रूप से गलत हो गया है। ओपन-ऑडिट को नहीं पढ़ा जा सकता है <i>अंग</i> तालिका।';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'कुछ गंभीर रूप से गलत हो गया है। ओपन-ऑडिट को नहीं पढ़ा जा सकता है <i>भूमिका</i> तालिका।';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'कभी-कभी एजेंट रहित खोज आपके उपयोग के मामले में फिट नहीं होती है। शायद आपके पीसी में तंग फ़ायरवॉल हैं। शायद वे नेटवर्क पर नहीं होते हैं जब आपकी खोज निर्धारित होती है। शायद उनका उपयोग दूरस्थ श्रमिकों द्वारा किया जाता है। जो भी मामला है, यह वह जगह है जहां एक एजेंट मदद कर सकता है। इसे लक्ष्य मशीन पर स्थापित करें और यह लक्ष्य मशीन पर स्थापित होगा <i>चेक इन</i> एक शेड्यूल पर अपने ओपन-ऑडिट सर्वर के साथ और कार्यों को स्वीकार करते हैं। सबसे आम कार्य सर्वर अनुरोध एजेंट के लिए खुद को ऑडिट करने और परिणाम भेजने के लिए है।';

$GLOBALS["lang"]['Sort'] = 'वर्गीकरण';

$GLOBALS["lang"]['sound'] = 'ध्वनि';

$GLOBALS["lang"]['Sound'] = 'ध्वनि';

$GLOBALS["lang"]['source'] = 'स्रोत';

$GLOBALS["lang"]['Source'] = 'स्रोत';

$GLOBALS["lang"]['South Africa'] = 'दक्षिण अफ्रीका';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'दक्षिण जॉर्जिया और दक्षिण सैंडविच द्वीपसमूह';

$GLOBALS["lang"]['Spain'] = 'स्पेन';

$GLOBALS["lang"]['Spanish'] = 'स्पेनिश';

$GLOBALS["lang"]['Specific to Azure.'] = 'ऐज़ूर के लिए विशिष्ट।';

$GLOBALS["lang"]['Specific to OKTA.'] = 'OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'स्कैन से बाहर होने के लिए लक्ष्य (कोई स्थान नहीं) की एक अल्पसंख्यक सूची निर्दिष्ट करता है। आप सामान्य Nmap syntax का उपयोग करते हैं, इसलिए इसमें होस्टनाम, CIDR नेटब्लॉक, ओक्टेट रेंज आदि शामिल हो सकते हैं।';

$GLOBALS["lang"]['speed'] = 'गति';

$GLOBALS["lang"]['Speed'] = 'गति';

$GLOBALS["lang"]['speed_down_a'] = 'स्पीड डाउन A';

$GLOBALS["lang"]['Speed Down A'] = 'स्पीड डाउन A';

$GLOBALS["lang"]['speed_down_b'] = 'स्पीड डाउन बी';

$GLOBALS["lang"]['Speed Down B'] = 'स्पीड डाउन बी';

$GLOBALS["lang"]['speed_up_a'] = 'स्पीड अप ए';

$GLOBALS["lang"]['Speed Up A'] = 'स्पीड अप ए';

$GLOBALS["lang"]['speed_up_b'] = 'स्पीड अप बी';

$GLOBALS["lang"]['Speed Up B'] = 'स्पीड अप बी';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'श्रीलंका';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh पोर्ट';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh पोर्ट';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'स्टेज 1: प्रलेखन समीक्षा';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'स्टेज 2: कार्यान्वयन और प्रभावशीलता समीक्षा';

$GLOBALS["lang"]['Stand-Alone'] = 'अकेले खड़े';

$GLOBALS["lang"]['Standard'] = 'मानक';

$GLOBALS["lang"]['standard_id'] = 'मानक ID';

$GLOBALS["lang"]['Standard ID'] = 'मानक ID';

$GLOBALS["lang"]['standards'] = 'मानक';

$GLOBALS["lang"]['Standards'] = 'मानक';

$GLOBALS["lang"]['standards_policies'] = 'मानक नीतियां';

$GLOBALS["lang"]['Standards Policies'] = 'मानक नीतियां';

$GLOBALS["lang"]['standards_results'] = 'मानक परिणाम';

$GLOBALS["lang"]['Standards Results'] = 'मानक परिणाम';

$GLOBALS["lang"]['start_date'] = 'प्रारंभ तिथि';

$GLOBALS["lang"]['Start Date'] = 'प्रारंभ तिथि';

$GLOBALS["lang"]['start_mode'] = 'प्रारंभ मोड';

$GLOBALS["lang"]['Start Mode'] = 'प्रारंभ मोड';

$GLOBALS["lang"]['Start a web browser and go to'] = 'वेब ब्राउज़र शुरू करें और जाएं';

$GLOBALS["lang"]['started_date'] = 'प्रारंभ तिथि';

$GLOBALS["lang"]['Started Date'] = 'प्रारंभ तिथि';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'जून 2018 गूगल ने गूगल मैप्स प्लेटफॉर्म एपीआई के लिए पे-एस-यू-गो प्राइसिंग मॉडल को लागू किया है। पहले, मध्यम उपयोग वाले अधिकांश उपयोगकर्ता Google मानचित्र का उपयोग कर सकते हैं, जो मुक्त करने के लिए opCharts और Open-Audit Professional/Enterprise में एम्बेडेड हैं। Google की नई नीति यहां उल्लिखित है,';

$GLOBALS["lang"]['Starts With'] = 'साथ शुरू होता है';

$GLOBALS["lang"]['state'] = 'राज्य';

$GLOBALS["lang"]['State'] = 'राज्य';

$GLOBALS["lang"]['Stats'] = 'आँकड़े';

$GLOBALS["lang"]['status'] = 'स्थिति';

$GLOBALS["lang"]['Status'] = 'स्थिति';

$GLOBALS["lang"]['Storage'] = 'भंडारण';

$GLOBALS["lang"]['storage_count'] = 'भंडारण गणना';

$GLOBALS["lang"]['Storage Count'] = 'भंडारण गणना';

$GLOBALS["lang"]['Storage area network'] = 'भंडारण क्षेत्र नेटवर्क';

$GLOBALS["lang"]['Storage-Area Network'] = 'स्टोरेज एरिया नेटवर्क';

$GLOBALS["lang"]['string'] = 'स्ट्रिंग';

$GLOBALS["lang"]['String'] = 'स्ट्रिंग';

$GLOBALS["lang"]['sub_resource_id'] = 'उप संसाधन ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'उप संसाधन ID';

$GLOBALS["lang"]['sub_type'] = 'उप प्रकार';

$GLOBALS["lang"]['Sub Type'] = 'उप प्रकार';

$GLOBALS["lang"]['subject_key_ident'] = 'विषय कुंजी पहचान';

$GLOBALS["lang"]['Subject Key Ident'] = 'विषय कुंजी पहचान';

$GLOBALS["lang"]['Submit'] = 'जमा करना';

$GLOBALS["lang"]['Submit Online'] = 'ऑनलाइन जमा करें';

$GLOBALS["lang"]['Submitted From'] = 'प्रस्तुत';

$GLOBALS["lang"]['Subnet'] = 'सबनेट';

$GLOBALS["lang"]['Subnet Discoveries'] = 'सबनेट डिस्कवरी';

$GLOBALS["lang"]['Subscription ID'] = 'सदस्यता ID';

$GLOBALS["lang"]['suburb'] = 'सबर्ब';

$GLOBALS["lang"]['Suburb'] = 'सबर्ब';

$GLOBALS["lang"]['Success'] = 'सफलता';

$GLOBALS["lang"]['Sudan'] = 'सूडान';

$GLOBALS["lang"]['Sudo Password'] = 'पासवर्ड';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'सुडो पासवर्ड (वैकल्पिक)';

$GLOBALS["lang"]['suite'] = 'सूट';

$GLOBALS["lang"]['Suite'] = 'सूट';

$GLOBALS["lang"]['summaries'] = 'सारांश';

$GLOBALS["lang"]['Summaries'] = 'सारांश';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'सारांश डेटाबेस के खिलाफ एक एकल क्वेरी है जिसमें एक डेटाबेस है <i>समूह द्वारा</i> आदेश इस सरल विधि का उपयोग करके हम आसानी से किसी भी विशेषता के लिए एक सारांश बना सकते हैं।<br/><br/>हमें अब प्रत्येक के लिए एक अलग रिपोर्ट की आवश्यकता नहीं है <i>प्रकार</i> एक उपकरण का। अब हमारे पास एक सारांश है कि समूह द्वारा <i>उपकरण। प्रकार</i> और परिणाम दिखाता है। फिर आप सूची से दिए गए किसी प्रकार पर क्लिक कर सकते हैं और मिलान उपकरणों को देख सकते हैं। इस मामले में, एक सारांश प्रतिस्थापित करता है (शक्तिशाली) 78 रिपोर्ट (78 उपकरण प्रकार हैं)।<br/><br/>सारांश में एक क्वेरी के लिए अलग है कि एक सारांश किसी दिए गए विशेषता द्वारा समूह आइटम के लिए डिज़ाइन किया गया है तो एक प्रदान करते हैं <i>नीचे क्लिक करें</i> वास्तविक उपकरणों के लिए लिंक। एक क्वेरी केवल किसी अन्य लिंक के साथ वस्तुओं की एक सूची है। ऊपर के रूप में - यह एक सारांश एक संयुक्त के रूप में <i>रिपोर्ट + subreport</i>जबकि एक क्वेरी केवल एक रिपोर्ट है।<br/><br/>सारांश ओपन-ऑडिट के भीतर अन्य संसाधनों के लिए एक अलग संग्रह टेम्पलेट है। यह टेम्पलेट सारांश दिखाता है क्योंकि आप उम्मीद करेंगे और अन्य संसाधनों की गिनती के साथ बटन भी दिखा सकते हैं। यह पृष्ठ ओपन-ऑडिट के होमपेज के लिए डिज़ाइन किया गया है।';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'सारांश एक विशेष मिलान कॉलम द्वारा समूह आइटम के लिए डिज़ाइन किए गए हैं और फिर व्यक्तिगत उपकरणों के लिए एक लिंक प्रदान करने के लिए। ओपन-ऑडिट के पिछले संस्करणों में, यह दो अलग-अलग आइटम होंगे - एक रिपोर्ट और subreport। हमने अब इनको एक सारांश कहा है।';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'सारांश ड्रिलडाउन रिपोर्टिंग क्षमताओं को प्रदान करते हैं। सरल, सहज, शक्तिशाली।';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'सारांश प्रश्नों के समान तर्क लेते हैं।';

$GLOBALS["lang"]['Summary'] = 'सारांश';

$GLOBALS["lang"]['Sunday'] = 'रविवार';

$GLOBALS["lang"]['supplier'] = 'आपूर्तिकर्ता';

$GLOBALS["lang"]['Supplier'] = 'आपूर्तिकर्ता';

$GLOBALS["lang"]['Support'] = 'समर्थन';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'समर्थित प्रकार हैं <code>subnet</code>, <code>seed</code> और <code>active directory</code>।';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'कानूनी और नियामक आवश्यकताओं के अनुपालन का समर्थन करता है';

$GLOBALS["lang"]['Suriname'] = 'सूरीनाम';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'निगरानी लेखा परीक्षा: प्रमाणीकरण बनाए रखने के लिए वार्षिक लेखा परीक्षा';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'स्वाज़ीलैंड';

$GLOBALS["lang"]['Sweden'] = 'स्वीडन';

$GLOBALS["lang"]['Swedish'] = 'स्वीडिश';

$GLOBALS["lang"]['switch_device_id'] = 'स्विच डिवाइस ID';

$GLOBALS["lang"]['Switch Device ID'] = 'स्विच डिवाइस ID';

$GLOBALS["lang"]['switch_port'] = 'स्विच पोर्ट';

$GLOBALS["lang"]['Switch Port'] = 'स्विच पोर्ट';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'स्विट्जरलैंड, स्विस संघ';

$GLOBALS["lang"]['Symptom'] = 'लक्षण';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'सीरियाई अरब गणराज्य';

$GLOBALS["lang"]['sysContact'] = 'संपर्क';

$GLOBALS["lang"]['SysContact'] = 'संपर्क';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'समीकरण';

$GLOBALS["lang"]['SysLocation'] = 'समीकरण';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectid';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectid';

$GLOBALS["lang"]['sysUpTime'] = 'Sysuptime';

$GLOBALS["lang"]['SysUpTime'] = 'Sysuptime';

$GLOBALS["lang"]['system_component'] = 'सिस्टम घटक';

$GLOBALS["lang"]['System Component'] = 'सिस्टम घटक';

$GLOBALS["lang"]['System-Area Network'] = 'सिस्टम एरिया नेटवर्क';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX स्तर';

$GLOBALS["lang"]['TX Power'] = 'TX पावर';

$GLOBALS["lang"]['TX Profile'] = 'TX प्रोफ़ाइल';

$GLOBALS["lang"]['Table'] = 'टेबल';

$GLOBALS["lang"]['tag'] = 'टैग';

$GLOBALS["lang"]['Tag'] = 'टैग';

$GLOBALS["lang"]['tag_1'] = 'टैग 1';

$GLOBALS["lang"]['Tag 1'] = 'टैग 1';

$GLOBALS["lang"]['tag_2'] = 'टैग 2';

$GLOBALS["lang"]['Tag 2'] = 'टैग 2';

$GLOBALS["lang"]['tag_3'] = 'टैग 3';

$GLOBALS["lang"]['Tag 3'] = 'टैग 3';

$GLOBALS["lang"]['Tagalog'] = 'टैगलॉग';

$GLOBALS["lang"]['tags'] = 'टैग';

$GLOBALS["lang"]['Tags'] = 'टैग';

$GLOBALS["lang"]['Tags :: '] = 'टैग:: ';

$GLOBALS["lang"]['Taiwan'] = 'ताइवान';

$GLOBALS["lang"]['Tajikistan'] = 'ताजिकिस्तान';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'प्रत्येक आइटम को उपयुक्त के रूप में सभी आउटपुट और कार्रवाई का ध्यान रखें।';

$GLOBALS["lang"]['Tanzania'] = 'तंजानिया';

$GLOBALS["lang"]['Target Computer'] = 'लक्ष्य कंप्यूटर';

$GLOBALS["lang"]['task'] = 'कार्य';

$GLOBALS["lang"]['Task'] = 'कार्य';

$GLOBALS["lang"]['tasks'] = 'कार्य';

$GLOBALS["lang"]['Tasks'] = 'कार्य';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'कार्य कई अलग-अलग प्रकारों में से एक हो सकता है: बेसलाइन, डिस्कवरी, रिपोर्ट, क्वेरी, सारांश या कलेक्टर।';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp पोर्ट';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp पोर्ट';

$GLOBALS["lang"]['Technical Details'] = 'तकनीकी विवरण';

$GLOBALS["lang"]['tenant'] = 'किरायेदार';

$GLOBALS["lang"]['Tenant'] = 'किरायेदार';

$GLOBALS["lang"]['Tenant ID'] = 'किरायेदार आईडी';

$GLOBALS["lang"]['Tennant ID'] = 'किरायेदार आईडी';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'टेस्ट 1';

$GLOBALS["lang"]['Test 2'] = 'टेस्ट 2';

$GLOBALS["lang"]['Test 3'] = 'टेस्ट 3';

$GLOBALS["lang"]['Test Email'] = 'टेस्ट ईमेल';

$GLOBALS["lang"]['test_minutes'] = 'टेस्ट मिनट';

$GLOBALS["lang"]['Test Minutes'] = 'टेस्ट मिनट';

$GLOBALS["lang"]['test_os'] = 'टेस्ट ओस';

$GLOBALS["lang"]['Test Os'] = 'टेस्ट ओस';

$GLOBALS["lang"]['test_subnet'] = 'टेस्ट सबनेट';

$GLOBALS["lang"]['Test Subnet'] = 'टेस्ट सबनेट';

$GLOBALS["lang"]['tests'] = 'टेस्ट';

$GLOBALS["lang"]['Tests'] = 'टेस्ट';

$GLOBALS["lang"]['Text'] = 'पाठ';

$GLOBALS["lang"]['Thai'] = 'थाई';

$GLOBALS["lang"]['Thailand'] = 'थाईलैंड';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'सबसे अच्छा खोज और सूची उपकरण के साथ अपनी यात्रा शुरू करने के लिए धन्यवाद।';

$GLOBALS["lang"]['Thanks to'] = 'धन्यवाद';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'यह! आपने अभी तक कई उपकरणों की विशेषताओं को संपादित किया है क्योंकि आपको आवश्यकता है।';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The The most of the <i>भूमिका</i> समापन बिंदु आपको अनुमतियों के सेट का प्रबंधन करने की अनुमति देता है (क्रिएट, रीड, अपडेट, डिलीट) जो उपयोगकर्ताओं को दिए जाते हैं और प्रत्येक समापन बिंदु पर लागू होते हैं।';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'एपीआई एक कुकी का उपयोग करता है। आप नीचे दिए गए URL पर POST भेजकर कुकी का अनुरोध कर सकते हैं, जिसमें उपयोगकर्ता नाम और पासवर्ड गुण और मान शामिल हैं:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'सक्रिय निर्देशिका डोमेन से सबनेट की सूची पुनर्प्राप्त करने के लिए।';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'सक्रिय निर्देशिका सर्वर से सबनेट की सूची पुनर्प्राप्त करने के लिए।';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'एप्लिकेशन एंडपॉइंट आपको एक एप्लिकेशन को परिभाषित करने की अनुमति देता है जिसे आप फिर डिवाइस (या डिवाइस) से जोड़ सकते हैं।';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributes समापन बिंदु आपको ओपन-ऑडिट में विभिन्न विशेषताओं के लिए अनुकूलित मान जोड़ने की अनुमति देता है, पल में यह सुविधा कक्षा, पर्यावरण, स्थिति और उपकरणों पर टाइप विशेषताओं पर काम करती है, दोनों स्थानों और संगठनों के साथ-साथ प्रश्नों के लिए मेनू श्रेणी के लिए टाइप विशेषता। यदि आप एक प्रवीण प्रकार (एक Lkocation देखें) के एक आइटम को देखते हैं तो आप एक ड्रॉप-डाउन बॉक्स से टाइप विशेषताओं को चुना जाना चाहिए। यह वह जगह है जहां उन मूल्यों को संग्रहीत किया जाता है। इसलिए, यदि आप किसी स्थान के लिए चुने जाने वाले नए प्रकार को जोड़ना चाहते हैं, तो इसे एट्रिब्यूट्स फीचर का उपयोग करके जोड़ें।';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable मीट्रिक सवाल के जवाब पर कब्जा <strong>क्या एक हमलावर कई लक्ष्यों में इस भेद्यता के लिए शोषण की घटनाओं को स्वचालित कर सकता है?</strong> हत्या श्रृंखला के चरण 1-4 पर आधारित है। ये कदम पुनर्जागरण, हथियारीकरण, वितरण और शोषण (डिफ़ाइन नहीं, नहीं, हाँ) हैं।';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE को CVE लिस्ट में अवैध या वापस लेने के रूप में चिह्नित किया गया है। यह NVD में रहता है लेकिन डिफ़ॉल्ट खोज परिणामों से बाहर रखा गया है।';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE को CVE लिस्ट में प्रकाशित किया गया है और इसमें NVD डेटासेट शामिल है। केवल प्रारंभिक अंतर्ग्रहण।';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'प्रारंभिक विश्लेषण के बाद CVE को अपडेट किया गया है। एनवीडी संवर्धन डेटा को संशोधित किया जा सकता है।';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE पहचानकर्ता।';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE सक्रिय रूप से CVSS स्कोर, CWE वर्गीकरण, संदर्भ टैग और CPE प्रयोज्यता के साथ समृद्ध किया जा रहा है।';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE वर्तमान में संसाधन बाधाओं या अन्य कारणों के कारण संवर्धन के लिए प्राथमिकता नहीं है।';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE को NVD विश्लेषकों द्वारा संवर्धन के लिए तैयार किया गया है। अभी तक कोई विस्तृत मेटाडाटा नहीं है।';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'क्लाउड जो इस आइटम का मालिक है। लिंक <code>clouds.id</code>।';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'डिवाइस सीड डिस्कवरी प्रकार नेटवर्क क्रॉलिंग के लिए नवीनतम अत्यधिक प्रभावी तरीका है, जिससे आपको अपने नेटवर्क को संकीर्ण रूप से लक्षित करने की क्षमता मिलती है। यह तेजी से काम करता है और यह बहुत अच्छा है।';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'डिस्कवरी स्कैन विकल्प हम नीचे तालिका में विस्तृत हैं। ऊपर के रूप में, एंटरप्राइज़ उपयोगकर्ता इनमें से अधिक बना सकते हैं या भेजी गई वस्तुओं को संपादित कर सकते हैं।';

$GLOBALS["lang"]['The Elevated User query'] = 'Elevated उपयोगकर्ता क्वेरी';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Executables सुविधा लेखा परीक्षा के हिस्से के रूप में एक डिवाइस की डिस्क को स्कैन करती है और जांचती है कि प्रत्येक निष्पादन योग्य फ़ाइल पैकेज मैनेजर के लिए जाना जाता है। क्योंकि यह पैकेज मैनेजर का उपयोग करता है, यह सुविधा केवल लिनक्स लक्ष्य उपकरणों पर लागू होती है, और इसके अलावा, केवल आरपीएम या डीबी आधारित वितरण। कुछ भी Redhat या Debian आधारित काम करना चाहिए।';

$GLOBALS["lang"]['The FROM'] = 'से';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'समूह बेसलाइन चलाने के लिए इस्तेमाल किया। लिंक <code>groups.id</code>।';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'उपकरण तालिका से आईडी (उपकरणों.नाम प्रदर्शित किया जाएगा) कनेक्शन के इस अंत में NTU। लिंक <code>devices.id</code>।';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'आयातित बेंचमार्क नीति से आईडी।';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'इस संबंध के अंत के स्थानों की तालिका (स्थानों का नाम प्रदर्शित किया जाएगा) से आईडी। लिंक <code>locations.id</code>। एक स्थान आमतौर पर होता है <code>FROM</code> स्थान';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'इस संबंध के अंत के स्थानों की तालिका (स्थानों का नाम प्रदर्शित किया जाएगा) से आईडी। लिंक <code>locations.id</code>। बी स्थान आमतौर पर होता है <code>TO</code> स्थान';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'संबद्ध डिवाइस की आईडी (यदि कोई हो)। लिंक <code>devices.id</code>।';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'संबंधित खोज की आईडी। लिंक <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'संबंधित प्रकार के आइटम की आईडी।';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'इस orgs माता-पिता org की आईडी। लिंक <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'प्रदाता द्वारा प्रदान की गई आईडी।';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'आईडी एक क्लाउड खोज से प्राप्त हुआ।';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'इस कलेक्टर का आईपी पता सर्वर के साथ संवाद करने के लिए उपयोग किया जाता है।';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'डिवाइस के आईपी के साथ बीज खोज शुरू करने के लिए।';

$GLOBALS["lang"]['The IP of the external interface.'] = 'बाहरी इंटरफ़ेस का IP।';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'आंतरिक इंटरफ़ेस का आईपी।';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'आईएसओ / आईईसी 27001 प्रमाणन प्रक्रिया और इसके प्रमुख तत्व।';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP या Telco इस लिंक को प्रदान करता है।';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Mitre से JSON रिकॉर्ड।';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD फीड से JSON रिकॉर्ड।';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'इस उपयोगकर्ता के LDAP OU (यदि LDAP प्रयोग किया जाता है)।';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP सर्वर से कनेक्ट नहीं किया जा सकता। सब पर। चेक यह ओपन-ऑडिट सर्वर से pingable है। सही पोर्ट चेक ओपन-ऑडिट सर्वर के लिए खुला है। ओपन-ऑडिट सर्वर से एक nmap यह दिखा देगा। अपने LDAP सर्वर IP को $ip के लिए सब्स्टीट्यूट करें। कोशिश करो:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP सर्वर प्रकार अमान्य है। होना चाहिए <i>सक्रिय निर्देशिका</i> या <i>खुला</i>।';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP सर्वर से जुड़ा हुआ था और उपयोगकर्ता क्रेडेंशियल को बांधने के लिए स्वीकार किया गया था।';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'लिनक्स ओपन-ऑडिट इंस्टॉलर के लिए परीक्षण करेगा और यदि आवश्यक हो, तो अपने वितरण भंडार से ओपन-ऑडिट निर्भरता स्थापित करें, जिसमें Nmap SetUID की स्थापना शामिल है। यह एक गैर-मूल उपयोगकर्ता द्वारा SNMP (UDP 161) का पता लगाने के लिए आवश्यक है। यह RedHat/CentOS और Debian/Ubuntu पर समर्थित है। यदि आपको मैन्युअल रूप से Nmap स्थापित करने की आवश्यकता है:<br/><br/>RedHat/CentOS do (NOTE - यदि आप Yum का उपयोग करके अपग्रेड करते हैं, तो आपको इसे फिर से लागू करना होगा। <i>chmod</i> सेटिंग).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'स्थान जिसमें इस नेटवर्क को शामिल किया गया है। लिंक <code>locations.id</code>।';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'एनवीडी ने आधार स्थिति निर्धारित की।';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'राष्ट्रीय मानक और प्रौद्योगिकी संस्थान संघीय प्रौद्योगिकी एजेंसी है। वे आधिकारिक प्रौद्योगिकी, माप विज्ञान और मानकों को आगे बढ़ाते हैं।';

$GLOBALS["lang"]['The Network to Discover'] = 'डिस्कवर करने के लिए नेटवर्क';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap समय पूर्व निर्धारित।';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'इस पैकेज के खिलाफ सूचना दी जानी चाहिए। सभी के लिए खाली % का उपयोग एक वाइल्डकार्ड के रूप में करें। उस क्रम में os_group, os_family और os_name के खिलाफ परीक्षण किया जाएगा।';

$GLOBALS["lang"]['The Open-AudIT API'] = 'ओपन-ऑडिट एपीआई';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'लिंक्ड क्लाउड के ओपन-ऑडिट आईडी। लिंक <code>clouds.id</code>।';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'ओपन-ऑड आईटी सर्वर कोड को इस फाइल के भीतर अनुकूलित किया गया था।';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'ओपन-ऑड आईटी सर्वर कोड को इस फ़ंक्शन के भीतर अनुकूलित किया गया था।';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP पारिस्थितिकी तंत्र प्रशासकों और लेखा परीक्षकों को मूल्यांकन, माप और सुरक्षा बेसलाइनों को लागू करने में मदद करने के लिए कई उपकरण प्रदान करता है जिसमें खुले स्रोत समुदाय द्वारा विकसित सख्त गाइड और कॉन्फ़िगरेशन बेसलाइनों की एक विस्तृत विविधता शामिल है, यह सुनिश्चित करता है कि आप एक सुरक्षा नीति चुन सकते हैं जो अपने संगठन की जरूरतों को पूरा करने के लिए अपने आकार की परवाह किए बिना।';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP परियोजना इस मानक को लागू करने और लागू करने के लिए ओपन सोर्स टूल का एक संग्रह है, और इसे 2014 में NIST द्वारा SCAP 1.2 प्रमाणन से सम्मानित किया गया है।';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'संगठन जो इस मद का मालिक है। लिंक <code>orgs.id</code>।';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'चल संबद्ध खोज की प्रक्रिया पहचानकर्ता।';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'इस उपकरण के शीर्ष के आरयू पोसिटॉन।';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'रैक सुविधा का उपयोग अपने रैक को एक संगठन, स्थान, भवन, तल, कक्ष और पंक्ति के साथ उपयोग करने के लिए किया जाता है।';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP मानकीकृत तरीकों में सुरक्षा डेटा को व्यक्त करने और हेरफेर करने के लिए एक विनिर्देश है। एससीएपी निरंतर निगरानी, भेद्यता प्रबंधन और सुरक्षा नीति अनुपालन मूल्यांकन रिपोर्टिंग को स्वचालित करने के लिए कॉन्सर्ट में कई व्यक्तिगत विनिर्देशों का उपयोग करता है';

$GLOBALS["lang"]['The SELECT'] = 'चयन';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'क्वेरी के SELECT अनुभाग को पूर्ण डॉट नोटेशन का उपयोग करना चाहिए और इसके पूर्ण डॉट नाम के साथ फ़ील्ड का अनुरोध करना चाहिए। IE - SELECT उपकरण। id AS `devices.id`. प्रत्येक क्षेत्र को इस फैशन में चुना जाना चाहिए ताकि GUI पक्ष विशेषता फ़िल्टरिंग को सक्षम बनाया जा सके।';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'अपने SQL के SELECT अनुभाग में पूरी तरह से योग्य कॉलम होना चाहिए और कुछ कॉलम निर्दिष्ट करना चाहिए।';

$GLOBALS["lang"]['The SNMP community string.'] = 'एसएनएमपी सामुदायिक स्ट्रिंग।';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 प्रमाणीकरण Passphrase।';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 प्रमाणीकरण प्रोटोकॉल।';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 गोपनीयता Passphrase।';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 गोपनीयता प्रोटोकॉल।';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 सुरक्षा स्तर।';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 सुरक्षा नाम।';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'एसएनएमपीवी 3 संदर्भ इंजन आईडी (वैकल्पिक)।';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 संदर्भ नाम (वैकल्पिक)।';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL में शामिल नहीं किया जा सकता <strong>WHERE @filter OR</strong>। हालांकि, SQL निष्पादित नहीं किया जाएगा <strong>WHERE @filter</strong> प्रश्नों की अनुमति है।';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'ओपन-ऑडिट में उपयोग किए जाने वाले SQL प्रश्नों को बैकटिक के उपयोग की आवश्यकता होती है - ` चरित्र और फ़ील्ड के लिए मानक एकल उद्धरण नहीं। अधिकांश अमेरिकी विंडोज कीबोर्ड पर बैकटिक कुंजी टिल्डे ~ के साथ कीबोर्ड के शीर्ष-बाएं में स्थित है। एक अमेरिकी मैक कीबोर्ड पर बैकटिक कुंजी SHIFT कुंजी के बगल में स्थित है। मानक एकल उद्धरण का उपयोग अभी भी मानों को illustrate के नीचे के उदाहरणों के रूप में संलग्न करने के लिए किया जाता है।';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL क्वेरी अनिवार्य रूप से तीन भागों में टूट जाता है।';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-Audit में मानक कार्यक्षमता आपको समय से पहले, ISO 27001 प्रमाणीकरण पूरा करते समय प्रश्नों के लेखा परीक्षकों को पूरा करने की अनुमति देती है।';

$GLOBALS["lang"]['The URL of the external system.'] = 'बाहरी प्रणाली का यूआरएल।';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'अपने ओपन-ऑडिट का यूआरएल सर्वर कि यह कलेक्टर (कोई निशान नहीं) की रिपोर्ट करेगा।';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'यूआरएल ऑडिट स्क्रिप्ट को उनके परिणाम को प्रस्तुत करना चाहिए।';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'यूज़र एंडपॉइंट आपको ओपन-ऑडिट के भीतर उपयोगकर्ता खातों का प्रबंधन करने की अनुमति देता है।';

$GLOBALS["lang"]['The WHERE'] = 'WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'अपने SQL का WHERE अनुभाग <em>होना</em> होना';

$GLOBALS["lang"]['The Windows'] = 'विंडोज';

$GLOBALS["lang"]['The Windows log may say the following'] = 'विंडोज लॉग निम्नलिखित कह सकते हैं';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'खाता पासवर्ड होना चाहिए; WMI खाली पासवर्ड की अनुमति नहीं देता है।';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'खाते के पासवर्ड में \" (डबल उद्धरण) शामिल नहीं होना चाहिए। यह इसलिए है क्योंकि Cscript (और wscript) तर्क मूल्यों को पार नहीं कर सकता है जिसमें दोहरे उद्धरण शामिल हैं। वे बस छीन रहे हैं। अगर आप पूछते हैं तो नहीं। यह एक स्क्रिप्ट सीमा है और ओपन-ऑडिट के साथ कुछ भी नहीं करना है।';

$GLOBALS["lang"]['The actual full name of this user.'] = 'इस उपयोगकर्ता का वास्तविक पूर्ण नाम।';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'ओपन-ऑडिट सर्वर का पता पेज जमा करता है।';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'प्रशासक ने उन क्रेडेंशियलों की आपूर्ति की जिनका सफलतापूर्वक LDAP को बांधने के लिए इस्तेमाल किया गया था।';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'व्यवस्थापक ने LDAP सर्वर को बांधने के लिए क्रेडेंशियल की आपूर्ति की, लेकिन उन्हें LDAP sevrer द्वारा स्वीकार नहीं किया गया है। डबल चेक क्रेडेंशियल LDAP सर्वर पर काम करते हैं, और फिर चेक (या उन्हें रीसेट करें) ओपन-ऑडिट LDAP सर्वर प्रविष्टि में।';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'एजेंट और सर्वर एजेंट को स्वयं अद्यतन करने के लिए पर्याप्त बुद्धिमान हैं यदि सर्वर पर एक नया संस्करण स्थापित किया गया है (Open-Audit को अपग्रेड करने के बाद)।';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'एजेंट को ऑडिट स्क्रिप्ट की एक ताजा प्रतिलिपि डाउनलोड करनी चाहिए, इसे चलाने और सर्वर को परिणाम जमा करना चाहिए।';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'एप्लिकेशन यहां अस्थायी ऑडिट स्क्रिप बनाता है, उन्हें लक्ष्य मशीनों की प्रतिलिपि बनाता है, फिर उन्हें हटा देता है।';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'संबद्ध बेसलाइन लिंक <code>baselines.id</code>।';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'संबद्ध खोज (यदि आवश्यक हो)। लिंक <code>discoveries.id</code>।';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'परीक्षण के लिए विशेषता (से) <code>devices</code> तालिका).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'परीक्षण के लिए विशेषता (नीचे से एक बाहरी क्षेत्र का नाम मिलान करना चाहिए)।';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'खोज स्कैन विकल्पों के लिए गुण निम्न हैं।';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'जिस पर आपके अनुकूलन के आधार पर ऑडिट स्क्रिप्ट होती है।';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'ऑडिट स्क्रिप्ट फ़ाइलों का उपयोग करेगा [] सरणी और फ़ाइल विवरण पुनर्प्राप्त करें।';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'ऑडिट स्क्रिप्ट सभी एक डीबगिंग तर्क स्वीकार करते हैं। आप उस स्क्रिप्ट का उपयोग कर सकते हैं और अधिक विस्तार से देख सकते हैं कि क्या मुद्दा है। यदि आप इसे बाहर नहीं देख सकते हैं - तो क्या हम यहां हैं! एक समर्थन मामला खोलें और हमें कोई समय नहीं चल पाता है।';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'आधार पथ जिसमें से उपयोगकर्ताओं के लिए खोज करने के लिए।';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'नीचे दिए गए चरणों में ओपन-ऑडिट की गलती नहीं है और यह प्रभावित करेगा। <strong>कोई</strong> दूरस्थ WMI और/या Windows का उपयोग करके खोज अनुप्रयोग।';

$GLOBALS["lang"]['The benchmark type.'] = 'बेंचमार्क प्रकार।';

$GLOBALS["lang"]['The building the rack is located in.'] = 'रैक निर्माण में स्थित है।';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'बाह्य रूप से निर्मित उपकरणों की गणना की गई संख्या।';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-Audit में निर्मित उपकरणों की गणना की गई संख्या।';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'ग्राहक ID एक Azure Active निर्देशिका अनुप्रयोग की ID है। ग्राहक रहस्य वह कुंजी है जिसे आप उस एप्लिकेशन को देते हैं।';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'कलेक्टर अनिवार्य रूप से ओपन-ऑडिट की पूरी स्थापना है <i>कलेक्टर</i> मोड। कलेक्टर को उस नेटवर्क पर खोज चलाने के लिए डिज़ाइन किया गया है जिसमें यह स्थित है। यह केवल उस नेटवर्क तक ही सीमित नहीं है, लेकिन आदर्श रूप से यह अनिवार्य रूप से एक कलेक्टर होगा जहां आवश्यक हो। कलेक्टर सर्वर द्वारा एक अनुसूची पर संचालित होता है और निर्दिष्ट नेटवर्क पर खोज करता है।<br/>जब स्टैंड में अकेले मोड कलेक्टर एक स्वतंत्र सर्वर के रूप में कार्य करता है, बस मुख्य सर्वर पर पाए गए सभी उपकरणों को अग्रेषित करता है।<br/><br/>एक बार स्थापित और सेटअप करने के बाद, कलेक्टर का नियंत्रण सर्वर पर किया जाता है ( स्टैंड अलोन मोड में नहीं)।<br/><br/>कलेक्टर और सर्वर के बीच एकमात्र आवश्यक नेटवर्क पोर्ट 80 या 443 (टीसीपी कनेक्शन कलेक्टर से सर्वर तक स्थापित) हैं। ओपन-ऑडिट डेटाबेस इन इंस्टॉलों के बीच साझा नहीं किया गया है।<br/><br/>डिफ़ॉल्ट रूप से कलेक्टर ( स्टैंड अलोन मोड में नहीं) सर्वर से हर 5 मिनट में किसी भी खोज कार्यों का अनुरोध करेगा (आप इसे नए कलेक्टरों के लिए सर्वर पर कन्फिगर कर सकते हैं) इसके लिए कलेक्टर के लिए किसी भी खोज कार्यों को 0, 5, 10, 15, आदि मिनट के लिए निर्धारित किया जाना चाहिए।';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'कलेक्टर अनिवार्य रूप से ओपन-ऑडिट की पूरी स्थापना है <i>कलेक्टर</i> मोड। यह मोड एप्लिकेशन को सरल और ध्यान केंद्रित करने के प्रयास में दृश्य कार्यक्षमता को कम करेगा। यह स्थानीय नेटवर्क और उपकरणों के बारे में जानकारी एकत्र करने के लिए डिज़ाइन किया गया है, जहां फायरवॉल और / या नेटवर्क ट्रांसवर्सल सर्वर से एक मुद्दा है।';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'जब यह एक खोज चलाता है तो कलेक्टर आंतरिक आईपी का उपयोग किया जाता है।';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'विदेशी तालिका से स्तंभ नाम। क्या एक होना चाहिए: वर्ग, पर्यावरण, स्थिति, प्रकार या मेनू_श्रेणी।';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'आदेश ने लक्ष्य डिवाइस या ओपन-ऑडिट सर्वर कोड को खोज के दौरान निष्पादित किया।';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'आपके क्लस्टर का विन्यास हो सकता है: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> या रिक्त।';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'क्रेडेंशियल पासवर्ड। यदि क्रेडेंशियल एक SSH कुंजी है, तो यह पासवर्ड कुंजी को अनलॉक करने के लिए इस्तेमाल किया जाता है और वैकल्पिक है।';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'उपयोगकर्ता द्वारा आपूर्ति की गई क्रेडेंशियल विफल हो गए हैं।';

$GLOBALS["lang"]['The credentials username.'] = 'क्रेडेंशियल यूज़रनेम।';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'वर्तमान तारीख और समय प्रारूप में: Y-m-d एच: आई: एस।';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y-m-d प्रारूप में वर्तमान तिथि।';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'क्लाउड डिस्कवरी की वर्तमान स्थिति।';

$GLOBALS["lang"]['The current status of the discovery.'] = 'खोज की वर्तमान स्थिति।';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'डैशबोर्ड जो इस उपयोगकर्ता के लिए डिफ़ॉल्ट रूप से दिखाया जाएगा। लिंक <code>dashboards.id</code>।';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'डेटाबेस में संग्रहीत डेटा अनुवादित एप्लिकेशन में नहीं दिख रहा है। हम डेटा को छोड़ देते हैं क्योंकि यह है। हालांकि, आपको रोकने के लिए कुछ भी नहीं है, उपयोगकर्ता, अपनी भाषा में डेटाबेस में किसी आइटम के नाम (उदाहरण के लिए) बदल रहा है।';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'आपके द्वारा इनपुट किए गए डेटा को एक में इस्तेमाल किया जाएगा <code>LIKE</code> खंड, नहीं (एपीआई के अनुसार) एक <code>equals</code> खंड उदाहरण - यदि आप इनपुट करते हैं <code>comput</code>, यह अभी भी सभी कंप्यूटरों को वापस कर देगा। क्योंकि हम एक का उपयोग कर रहे हैं <code>LIKE</code> खंड, यह मामले के प्रति संवेदनशील है।';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'यदि उपयोगकर्ता डेटाबेस है तो डेटाबेस स्कीमा को एप्लिकेशन में पाया जा सकता है:: मेनू पर जाकर अनुमति पढ़ें: व्यवस्थापक -> डेटाबेस ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'डेटाबेस संस्करण और वेब संस्करण असंगत हैं।';

$GLOBALS["lang"]['The date of license expiration.'] = 'लाइसेंस समाप्ति की तारीख।';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'सॉफ्टवेयर को निर्माता द्वारा बंद कर दिया गया है। आमतौर पर एक नए संस्करण द्वारा प्रतिस्थापित किया जाता है। रखरखाव अभी भी उपलब्ध हो सकता है।';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'सॉफ्टवेयर को अद्यतन करने की तारीख अब प्राप्त नहीं हुई है और पूरी तरह से बंद कर दिया गया है। रखरखाव बंद कर दिया गया है।';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'इस मद की तारीख को बदल दिया गया था या जोड़ा गया था (केवल पढ़ें). नोट - यह सर्वर से टाइमस्टैम्प है।';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'जब यह परिणाम बनाया गया था तब तारीख / समय।';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'महीने का दिन जब इस कार्य को निष्पादित करना चाहिए (* हर दिन)।';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'सप्ताह के दिन जब इस कार्य को निष्पादित करना चाहिए (* हर दिन)।';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'डीबग स्तर (प्रत्यक्ष विंडो को कमांड करने के लिए आउटपुट होगा)। कम से कम 0 आउटपुट के साथ कम उत्पादन का मतलब है।';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'डिफ़ॉल्ट खोज स्कैन विकल्प अल्ट्राफास्ट सेट है।';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'इस विधि द्वारा बनाई गई किसी भी उपयोगकर्ता को निर्दिष्ट डिफ़ॉल्ट भाषा।';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'डिवाइस को ऑनलाइन माना जाने से पहले Nmap पिंग का जवाब देना चाहिए।';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'ओपन-ऑडिट के भीतर डिवाइस। लिंक <code>devices.id</code>।';

$GLOBALS["lang"]['The direct link for the script is'] = 'स्क्रिप्ट के लिए सीधा लिंक है';

$GLOBALS["lang"]['The email address of the receiver'] = 'पारस्परिक का ईमेल पता';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'फर्स्टवेव से उद्यम द्विआधारी लाइसेंस के लिए आवश्यक है। कृपया Open-Audit को डाउनलोड करें';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'इस परिणाम से संबंधित संपूर्ण आधार रेखा है।';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'शोषण किया vulnerability कमजोर घटक की सुरक्षा प्राधिकरण से परे संसाधनों को प्रभावित कर सकते हैं। इसका मतलब आमतौर पर एक विशेषाधिकार या ट्रस्ट सीमा को पार किया जाता है (उदाहरण के लिए, एक कंटेनर से होस्ट ओएस तक फैल गया)।';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'शोषण किए गए भेद्यता केवल एक ही सुरक्षा प्राधिकरण के भीतर संसाधनों को कमजोर घटक के रूप में प्रभावित करती है। दूसरे शब्दों में, हमलावर की कार्रवाई मूल ट्रस्ट सीमा के भीतर रहती है।';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'बाह्य रूप से संदर्भित स्थान ID। आमतौर पर क्लाउड ऑडिट द्वारा पॉप्युलेट किया जाता है।';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'एकीकरण के साथ जुड़े क्षेत्रों को डेटाबेस में वस्तुओं की एक JSON सरणी के रूप में संग्रहीत किया जाता है। प्रत्येक क्षेत्र में निम्नलिखित गुण होते हैं';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'पहली बार जब ओपन-ऑडिट ने इस डिवाइस का विवरण पुनः प्राप्त किया।';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'मंजिल रैक पर स्थित है।';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'विदेशी तालिका संदर्भ में। इनमें से एक होना चाहिए: उपकरण, स्थान, अंग या क्वेरी।';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'आपके डेटा का प्रारूप फॉर्म में होना चाहिए';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'प्रारूप को ईमेल करने के लिए आउटपुट के लिए इस्तेमाल किया जाता है।';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'पूरी तरह से योग्य स्तंभ जिस पर समूह द्वारा किया जाता है। नोट: जब टाइप = ट्रैफिक होता है, तो यह लाल क्वेरी आईडी का प्रतिनिधित्व करता है।';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'पूरी तरह से योग्य नाम बाहरी प्रणाली द्वारा वापस आ गया। EG: NMIS के लिए हम विन्यास का उपयोग करते हैं। भूमिका प्रकार';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'पूरी तरह से योग्य टेबल। कॉलम। एकाधिक प्रदान किया जा सकता है, एक अल्पविराम (कोई स्थान नहीं) द्वारा अलग।';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'इस vulnerability के लिए परीक्षण करने के लिए उत्पन्न SQL क्वेरी। इस क्षेत्र को आवश्यकतानुसार क्वेरी को सही करने के लिए संपादित किया जा सकता है।';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'उन उपकरणों का समूह जिस पर बेसलाइन के खिलाफ चली गई थी।';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'समूह जो एकीकरण के लिए उपकरणों की सूची प्रदान करता है। लिंक <code>groups.id</code>।';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'जब इस कार्य को निष्पादित करना चाहिए (* हर घंटे के लिए).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'लिंक्ड डिवाइस का आईडी। लिंक <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'डेटाबेस में पहचानकर्ता स्तंभ (integer) (केवल पढ़ें).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'इस बेसलाइन का महत्व ( अभी तक इस्तेमाल नहीं किया गया)।';

$GLOBALS["lang"]['The integer of severity.'] = 'गंभीरता का पूर्णांक।';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'आंतरिक मूल्य, इस प्रारूप में सुधार हुआ।';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'एथ विधि का आईपी पता।';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'भाषा उपयोगकर्ता के लिए वेब इंटरफ़ेस का अनुवाद करने के लिए।';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'अंतिम तारीख और समय इस मद को निष्पादित किया गया था (केवल पढ़ें).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'आखिरी बार जब ओपन-ऑडिट ने इस डिवाइस का विवरण पुनः प्राप्त किया।';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'पिछली बार इस बेंचमार्क को निष्पादित किया गया था।';

$GLOBALS["lang"]['The last time this integration was run.'] = 'आखिरी बार यह एकीकरण चल रहा था।';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'लाइसेंस समापन बिंदु आपको अपने उपकरणों पर पाए गए लाइसेंस की संख्या को ट्रैक करने की अनुमति देता है।';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'इस संबंध के अंत में प्रदाता द्वारा लाइन को सौंपा गया लाइन नंबर।';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'रैक स्थान में स्थित है। लिंक <code>locations.id</code>।';

$GLOBALS["lang"]['The locations address.'] = 'स्थान पता';

$GLOBALS["lang"]['The locations area.'] = 'स्थान क्षेत्र।';

$GLOBALS["lang"]['The locations city.'] = 'शहर';

$GLOBALS["lang"]['The locations country.'] = 'स्थान देश';

$GLOBALS["lang"]['The locations district.'] = 'स्थान जिला';

$GLOBALS["lang"]['The locations latitude.'] = 'स्थान अक्षांश।';

$GLOBALS["lang"]['The locations level.'] = 'स्थान स्तर';

$GLOBALS["lang"]['The locations longitude.'] = 'स्थान देशांतर';

$GLOBALS["lang"]['The locations phone.'] = 'स्थान फ़ोन';

$GLOBALS["lang"]['The locations postcode.'] = 'पोस्टकोड';

$GLOBALS["lang"]['The locations region.'] = 'स्थान क्षेत्र।';

$GLOBALS["lang"]['The locations room.'] = 'स्थान';

$GLOBALS["lang"]['The locations state.'] = 'स्थान';

$GLOBALS["lang"]['The locations suburb.'] = 'स्थान उपनगर';

$GLOBALS["lang"]['The locations suite.'] = 'स्थान सूट';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'उपकरण मिलान के लिए तर्क उपकरणों_helper.php फ़ाइल में निहित है, जो लिनक्स इंस्टॉल पर यहां पाया जा सकता है।';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'मशीन-डिफ़ अनुमति सेटिंग्स के साथ COM सर्वर एप्लिकेशन के लिए स्थानीय सक्रियण अनुमति नहीं दी जाती है';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'अधिकतम शारीरिक वजन (केजी में) इस रैक पकड़ सकते हैं।';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'इस रैक के लिए अधिकतम कुल BTUs को रेट किया गया है।';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'विशेषताओं के लिए न्यूनतम आवश्यक गुण हैं';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'जब इस कार्य को निष्पादित करना चाहिए (* प्रत्येक मिनट के लिए).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'वर्ष के महीने जब इस कार्य को निष्पादित करना चाहिए (* हर महीने के लिए)।';

$GLOBALS["lang"]['The name given to this item.'] = 'इस मद को दिया गया नाम।';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'इस मद को दिया गया नाम। आदर्श रूप से यह अद्वितीय होना चाहिए।';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'इस उपयोगकर्ता को दिए गए नाम (लॉगिन करने के लिए इस्तेमाल किया)। आदर्श रूप से यह अद्वितीय होना चाहिए।';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'संबद्ध क्लाउड का नाम (यदि आवश्यक हो)।';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'सॉफ्टवेयर पैकेज का नाम, जैसा कि ओपन-ऑडिट द्वारा ऑडिट किया गया है। % का उपयोग एक वाइल्डकार्ड के रूप में करें।';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'उपयोगकर्ता का नाम जो इस आइटम को बदल या जोड़ा गया (केवल पढ़ें)।';

$GLOBALS["lang"]['The name provided by the provider.'] = 'प्रदाता द्वारा प्रदान किया गया नाम।';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'प्रारूप में नेटवर्क 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'खोज को निष्पादित करने के लिए नेटवर्क सबनेट।';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'नया एजेंट VBScript (हाँ, यह आ रहा है) की व्याख्या के लिए तैयारी में पुराने ऑडिट स्क्रिप्ट का PowerShell संस्करण चलाता है।';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'इस डिवाइस पर आरयू की संख्या रखता है।';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'संबद्ध स्थानों की संख्या। लिंक <code>locations.cloud_id</code>।';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'संबद्ध नेटवर्क की संख्या। लिंक <code>networks.cloud_id</code>।';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'इस बादल में लेखापरीक्षित उपकरणों की संख्या। लिंक <code>devices.cloud_id</code> और <code>devices.serial</code>।';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'फर्स्टवेव (आपके डेटाबेस में नहीं) द्वारा आयोजित क्रिटिकल गंभीरता vulnerability की संख्या।';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'इस खोज से प्राप्त उपकरणों की संख्या।';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'संबद्ध समूह में उपकरणों की संख्या।';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'इस क्लाउड में चलने की स्थिति के साथ उपकरणों की संख्या। लिंक <code>devices.cloud_id</code> और <code>devices.instance_state</code>।';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'इस बादल में उपकरणों की संख्या रुकने की स्थिति के साथ। लिंक <code>devices.cloud_id</code> और <code>devices.instance_state</code>।';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'इस क्लाउड में उपकरणों की संख्या। लिंक <code>devices.cloud_id</code>।';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'उपकरणों की संख्या इस बेंचमार्क को निष्पादित किया जाएगा। से वंचित <code>benchmarks.devices</code>।';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'इस खोज को सीमित करने के लिए उपकरणों की संख्या।';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave द्वारा आयोजित उच्च गंभीरता vulnerability की संख्या (आपके डेटाबेस में नहीं)।';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'फर्स्टवेव द्वारा आयोजित कम गंभीरता वाली कमजोरियों की संख्या (आपके डेटाबेस में नहीं)।';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'फर्स्टवेव (आपके डेटाबेस में नहीं) द्वारा आयोजित मध्यम गंभीरता vulnerability की संख्या।';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'खरीदे गए लाइसेंस की संख्या।';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'लक्ष्य आईपी के साथ प्रयास करने और संवाद करने के लिए सेकंड की संख्या।';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'फर्स्टवेव द्वारा आयोजित गंभीरता के बिना कमजोरियों की संख्या (आपके डेटाबेस में नहीं)।';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'ऑफसेट उन उपकरणों की गिनती है जिन्हें आप डेटा वापस करना चाहते हैं।';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'केवल आवश्यक अनुमति / नीति नाम (हमारे परीक्षण में) है';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'वैकल्पिक माध्यमिक स्तंभ। नोट: जब टाइप = ट्रैफिक होता है, तो यह पीले क्वेरी आईडी का प्रतिनिधित्व करता है।';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'वैकल्पिक तीसरा स्तंभ। नोट: जब टाइप = ट्रैफिक होता है, तो यह ग्रीन क्वेरी आईडी का प्रतिनिधित्व करता है।';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'सूचना पुनर्प्राप्ति का आदेश snmp, ssh, wmi है।';

$GLOBALS["lang"]['The orientation of this device.'] = 'इस उपकरण का अभिविन्यास।';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'पासवर्ड (यदि उपयोगकर्ता स्क्रिप्ट चलाने का उपयोग नहीं करता है)।';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Dn_account विशेषता के लिए पासवर्ड।';

$GLOBALS["lang"]['The password used to access the external system.'] = 'पासवर्ड बाहरी सिस्टम तक पहुंचने के लिए इस्तेमाल किया।';

$GLOBALS["lang"]['The path to the file or directory.'] = 'फ़ाइल या निर्देशिका का रास्ता।';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'फ़ाइल या निर्देशिका का रास्ता। निदेशकों को एक ट्रेलिंग स्लैश के साथ समाप्त होना चाहिए।';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'रैक की भौतिक गहराई (मुख्यमंत्री)।';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'रैक की भौतिक ऊंचाई (मुख्यमंत्री)।';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'वर्तमान में रैक के भौतिक वजन (किलोग्राम में)।';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'जब खाली हो तो रैक के भौतिक वजन (किलोग्राम में)।';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'रैक की भौतिक चौड़ाई (मुख्यमंत्री)।';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = '(यदि कोई हो) तो यह रैक का हिस्सा है।';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'पावर सर्किट इस रैक को संलग्न करता है।';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'प्राथमिक डेटाबेस तालिका जिस पर इस विजेट का आधार है।';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'प्राधिकरण के लिए प्राथमिक विधि (एक उपयोगकर्ता क्या कर सकता है) अब उपयोगकर्ताओं की भूमिकाओं पर आधारित है। भूमिकाओं को डिफ़ॉल्ट रूप से व्यवस्थापक, org_admin, रिपोर्टर और उपयोगकर्ता के रूप में परिभाषित किया गया है। प्रत्येक भूमिका में प्रत्येक समापन बिंदु के लिए अनुमतियों का एक सेट (Create, Read, Update, Delete) होता है। मानक भूमिकाओं के रूप में भेज दिया जाना चाहिए 99.9 % उपयोग के मामले। अतिरिक्त भूमिकाओं को परिभाषित करने और मौजूदा भूमिकाओं को संपादित करने की क्षमता ओपन-ऑडिट एंटरप्राइज में सक्षम है।';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'इस कतार आइटम की प्रक्रिया पहचानकर्ता।';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'प्रक्रिया जो डिवाइस के बारे में विवरण पुनर्प्राप्त करने के लिए अंतिम उपयोग की गई थी';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'इस लाइसेंसिंग पृष्ठ का उद्देश्य खुले स्रोत कार्यों के आधार पर उत्पादों सहित फर्स्टवेव वाणिज्यिक उत्पादों में शामिल उत्पादों और लाइसेंसों को सूचीबद्ध करना है। ओपन-ऑडिट को AGPLv3 के तहत फर्स्टवेव से या बाद में व्यावसायिक शर्तों के तहत लाइसेंस प्राप्त एंटरप्राइज़ और व्यावसायिक कार्यक्षमता के साथ लाइसेंस प्राप्त है। जब फर्स्टवे से डाउनलोड किया जाता है तो ओपन-ऑडिट में निम्नलिखित पुस्तकालयों और परियोजनाओं को शामिल किया जा सकता है, जो संकेत के रूप में अनुज्ञापित और लाइसेंस प्राप्त हैं:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'क्वेरी जो एकीकरण के लिए उपकरणों की एक सूची प्रदान करती है। लिंक <code>queries.id</code>।';

$GLOBALS["lang"]['The rack asset number.'] = 'रैक परिसंपत्ति संख्या।';

$GLOBALS["lang"]['The rack asset tag.'] = 'रैक परिसंपत्ति टैग।';

$GLOBALS["lang"]['The rack bar code.'] = 'रैक बार कोड।';

$GLOBALS["lang"]['The rack model.'] = 'रैक मॉडल।';

$GLOBALS["lang"]['The rack serial.'] = 'रैक सीरियल।';

$GLOBALS["lang"]['The rack series.'] = 'रैक श्रृंखला।';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'रैक इस उपकरण में स्थित है। लिंक <code>racks.id</code>।';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'पहचाने गए सुरक्षा भेद्यता को संबोधित करने और ठीक करने की सिफारिश की प्रक्रिया। इसमें आम तौर पर संभावित जोखिम को खत्म करने के लिए पैच, अद्यतन या अन्य उपायों को लागू करना शामिल है।';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'आपकी निर्देशिका का नियमित डोमेन नोटेशन। Eg - <code>open-audit.lan</code>।';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'अनुरोधित गुण एक अल्पविराम-अलग सूची में होना चाहिए। गुण पूरी तरह से योग्य होना चाहिए - यानी, system.hostname (केवल होस्टनाम नहीं)।';

$GLOBALS["lang"]['The result of the command.'] = 'आदेश का परिणाम।';

$GLOBALS["lang"]['The room the rack is located in.'] = 'कमरा रैक में स्थित है।';

$GLOBALS["lang"]['The row the rack is located in.'] = 'पंक्ति में स्थित है।';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP सर्वर पर समूह की खोज विफल हो गई। LDAP सर्वर लॉग की जाँच करें। क्या आपने इन समूहों को LDAP सर्वर पर बनाया है और उन्हें LDAP उपयोगकर्ताओं को सौंपा है?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'गुप्त कुंजी आपके AWS EC2 API कुंजी के साथ संयोजन के रूप में इस्तेमाल किया।';

$GLOBALS["lang"]['The software end-of-life date.'] = 'सॉफ्टवेयर अंत के जीवन की तारीख।';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'सॉफ्टवेयर अंत सेवा जीवन की तारीख।';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'निर्दिष्ट डेटाबेस तालिका से विशिष्ट डेटाबेस कॉलम।';

$GLOBALS["lang"]['The specific database table.'] = 'विशिष्ट डेटाबेस तालिका।';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'मानक Nmap समय विकल्प। पहले T4 (ggressive) पर सेट करें।';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'मानक Nmap समय विकल्प। हम आमतौर पर -T4 (Aggressive) का उपयोग करते हैं क्योंकि यह एक सभ्य ब्रॉडबैंड या ईथरनेट कनेक्शन के लिए अनुशंसित है।';

$GLOBALS["lang"]['The status of this integration'] = 'इस एकीकरण की स्थिति';

$GLOBALS["lang"]['The status of this queued item.'] = 'इस मद की स्थिति।';

$GLOBALS["lang"]['The steps below outline the process.'] = 'नीचे दिए गए कदम इस प्रक्रिया को रेखांकित करते हैं।';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'लक्ष्य आईपी इस लॉग प्रविष्टि रेफरी (यदि कोई हो)।';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = '\\" का अर्थ स्थानीयहोस्ट है।';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'प्रति परिणाम लाइन उत्पन्न करने के लिए लिंक के लिए टेम्पलेट।';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'एक लाइन चार्ट (केवल) में चार्ट के नीचे के लिए पाठ।';

$GLOBALS["lang"]['The text that is displayed.'] = 'पाठ जो प्रदर्शित होता है।';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'इसके बाद, इस कार्य को शुरू करना चाहिए। उदाहरण के लिए, 1 जून 2017 को 10am पर एक कार्य चलाएं, इसे सेट करें <code>2017-06-01 09:59:00</code>। यह मान शून्य गद्देदार होना चाहिए (i, 09, 9 नहीं)। यह मूल्य चूक करने के लिए <code>2000-01-01 00:00:00</code> जिसका अर्थ डिफ़ॉल्ट रूप से होता है, एक निर्धारित कार्य अगले निर्धारित निष्पादन समय पर चलेगा।';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'शीर्ष 10, 100 या 1000 (या कोई नहीं) TCP बंदरगाह आमतौर पर Nmap के अनुसार उपयोग में।';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'शीर्ष 10, 100 या 1000 (या कोई नहीं) UDP पोर्ट आमतौर पर Nmap के अनुसार उपयोग में।';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'इस रैक द्वारा कुल बीटीयू आउटपुट।';

$GLOBALS["lang"]['The type of device.'] = 'डिवाइस का प्रकार।';

$GLOBALS["lang"]['The type of organisation.'] = 'संगठन का प्रकार।';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'रैक का प्रकार (कंप्यूट, पावर, नेटवर्क, आदि)।';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'चलाने के लिए कार्य का प्रकार। में से एक: बेसलाइन, बेंचमार्क, क्लाउड खोज, खोज, एकीकरण, रिपोर्ट, क्वेरी।';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'एकीकरण का प्रकार (आमतौर पर बाहरी प्रणाली के नाम पर)।';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'unfiltered राज्य का मतलब है कि एक बंदरगाह सुलभ है, लेकिन Nmap यह निर्धारित करने में असमर्थ है कि यह खुला है या बंद है। केवल ACK स्कैन, जिसका उपयोग फ़ायरवॉल नियमों के नक्शे के लिए किया जाता है, इस राज्य में बंदरगाहों को वर्गीकृत करता है। अन्य स्कैन प्रकार जैसे विंडो स्कैन, SYN स्कैन, या FIN स्कैन के साथ अनफ़िल्टर्ड बंदरगाहों को स्कैन करना, यह हल करने में मदद कर सकता है कि क्या बंदरगाह खुला है।';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'इस सर्वर के अद्वितीय पहचानकर्ता।';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'उपयोगकर्ता इस कलेक्टर का उपयोग करता है। लिंक <code>users.id</code>।';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'सक्रिय निर्देशिका / OpenLDAP में उपयोगकर्ता भूमिकाओं और संगठनों के लिए आवश्यक ओपन-ऑडिट समूहों का प्रत्यक्ष सदस्य होना चाहिए। एक समूह का सदस्य जो एक सदस्य दूसरा समूह है जो ओपन-ऑडिट समूह का सदस्य काम नहीं करेगा।';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'उपयोगकर्ता LDAP में है और उनके क्रेडेंशियल मान्य हैं, लेकिन संगठन के लिए ओपन-ऑडिट LDAP समूहों में से किसी में नहीं है।';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'उपयोगकर्ता LDAP में है और उनकी क्रेडेंशियल मान्य हैं, लेकिन रोल्स के लिए ओपन-ऑडिट LDAP समूहों में से किसी में नहीं है।';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'उपयोगकर्ता LDAP में है और उनके क्रेडेंशियल मान्य हैं, लेकिन आवश्यक ओपन-ऑडिट LDAP समूहों में से किसी में नहीं है।';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'उपयोगकर्ता LDAP समूह में है जो इस संगठन से मेल खाता है।';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'उपयोगकर्ता LDAP समूह में है जो इस रोल से मेल खाता है।';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'उपयोगकर्ता LDAP समूह में नहीं है जो इस संगठन से मेल खाता है।';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'उपयोगकर्ता LDAP समूह में नहीं है जो इस रोल से मेल खाता है।';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'उपयोगकर्ता जो LDAP में निर्दिष्ट किया गया था, लेकिन ओपन-ऑडिट को भूमिकाओं के लिए LDAP समूहों का उपभोग करने के लिए कॉन्फ़िगर नहीं किया गया है और वह उपयोगकर्ता ओपन-ऑडिट के भीतर मौजूद नहीं है। चयन <i>रोल्स के लिए LDAP का उपयोग करें</i> ओपन-ऑडिट LDAP पर सर्वर स्क्रीन या ओपन-ऑडिट के भीतर इस उपयोगकर्ता को बनाने और भूमिकाओं और orgs को असाइन करने के लिए।';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'उपयोगकर्ता नाम (यदि उपयोगकर्ता स्क्रिप्ट चलाने का उपयोग नहीं करता है)।';

$GLOBALS["lang"]['The username used to access the external system.'] = 'उपयोगकर्ता नाम बाहरी सिस्टम तक पहुंचने के लिए उपयोग किया जाता है।';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'उपयोगकर्ताओं के विवरण को LDAP से पुनर्प्राप्त नहीं किया गया था। LDAP सर्वर लॉग की जाँच करें।';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'उपयोगकर्ताओं का विवरण LDAP से लिया गया था।';

$GLOBALS["lang"]['The users email address.'] = 'उपयोगकर्ता ईमेल पता।';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'इस साइट पर ऑपरेशन के सामान्य घंटे।';

$GLOBALS["lang"]['The value assigned to the item.'] = 'आइटम को सौंपा गया मूल्य।';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'इस विशेष आइटम के लिए संग्रहीत मूल्य।';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'सीपीई प्रविष्टियों के अनुसार विक्रेता का नाम।';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'विक्रेता ने सीपीई से लिया।';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'होस्ट पर वेब निर्देशिका जो ओपन-ऑडआईटी स्थापित है (ट्रैलिंग स्लैश की आवश्यकता)।';

$GLOBALS["lang"]['The widget at position '] = 'स्थिति में विजेट ';

$GLOBALS["lang"]['The width of this device.'] = 'इस उपकरण की चौड़ाई।';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'उनके वंशज और उनके वंशज';

$GLOBALS["lang"]['Their OrgIDs only'] = 'उनका संगठन केवल';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'उनके संगठन, आरोही और वंशज';

$GLOBALS["lang"]['Then'] = 'फिर';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'फिर मेनू में जाकर ओपन-ऑडिट में एक नया Auth विधि बनाएं -> व्यवस्थापक -> प्राधिकरण विधियाँ -> Auth. एक नाम प्रदान करें और सेट करें <i>प्रकार</i> Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'फिर आप ग्राहकों से सीधे ऑडिट डेटा प्राप्त करने के लिए ओपन-ऑडिट (अनसपोर्ट) का उपयोग कर सकते हैं। डिस्कवरी <strong>असफल</strong>, लेकिन अगर आपका डिस्कवरी का उपयोग नहीं कर रहा है (मुख्य विशेषता ओपन-ऑडिट को डिज़ाइन किया गया था), तो आप अभी भी डिवाइस डेटा प्राप्त कर सकते हैं। आपको cron का उपयोग करके सीधे ग्राहकों पर ऑडिट स्क्रिप्ट चलाने की आवश्यकता होगी, या Windows एजेंट सुविधा का उपयोग करना होगा।';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'JSON को निर्यात करने के लिए एक बटन है। यह केवल विशेषताओं की डिवाइस तालिका प्रदर्शित करेगा। डिवाइस को सभी संबद्ध घटक तालिकाओं के साथ निर्यात करने के लिए, डिवाइस विवरण देखें, फिर जोड़ें';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'प्रत्येक व्यक्तिगत डिवाइस को मैन्युअल रूप से संपादित करने की कोई आवश्यकता नहीं है।';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'यदि आप लिनक्स सर्वर पर ओपन-ऑडिट चला रहे हैं तो कुछ भी करने की आवश्यकता नहीं है।<br/><br/>विंडोज क्लाइंट सिर्फ ठीक हैं और इसके लिए कोई विशेष कार्य की आवश्यकता नहीं है। इस सुविधा को सक्षम करने के लिए ऑडिट स्क्रिप्ट को लक्ष्य विंडोज सिस्टम पर स्थानीय रूप से चलाया जाना चाहिए। यह दूरस्थ रूप से नहीं चलाया जा सकता क्योंकि हम WMI कॉल के साथ करते हैं जब एक Windows मशीन पर ऑडिट स्क्रिप्ट चलाते हैं, जबकि एक दूसरे Windows मशीन को लक्षित करते हैं। ऐसा करने के लिए हमें लक्ष्य विंडोज मशीन में ऑडिट स्क्रिप्ट की प्रतिलिपि बनाने की आवश्यकता है और फिर इसे चलाने की आवश्यकता है। दुर्भाग्य से सेवा खाता है कि अपाचे के तहत चल रहा है स्थानीय सिस्टम खाता है। इस खाते में रिमोट (नेटवर्क आधारित) संसाधनों तक कोई पहुंच नहीं है। इस मुद्दे के आसपास काम करने के लिए सेवा को दूसरे खाते में चलाया जाना चाहिए। केवल स्थानीय प्रशासक खाते का उपयोग करना आसान है, लेकिन जब तक आपके पास आवश्यक विशेषाधिकार है, तब तक आप किसी भी खाते की कोशिश कर सकते हैं। स्थानीय सिस्टम खाते में स्थानीय प्रशासक खाते के रूप में ज्यादा स्थानीय एक्सेस है।';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'ये केवल उदाहरण हैं। आपको अपने विशेष LDAP के अनुरूप इन विशेषताओं को समायोजित करने की आवश्यकता हो सकती है।';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'यह पैरामीटर आपको केवल वही ऑडिट करने में सक्षम बनाता है जो आपके लिए उपयोगी और प्रासंगिक है, प्रसंस्करण समय की बचत करता है और आपको अपने नेटवर्क को व्यवस्थित तरीके से खोजने की अनुमति देता है।';

$GLOBALS["lang"]['Thing'] = 'थिंग';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Mail.domain1.com और Mail.domain2.com - समान होस्टनाम।';

$GLOBALS["lang"]['Third'] = 'तीसरा';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'यदि यह मौजूद है तो इस CVE को मौजूदा CVE को पुनः प्राप्त किया जाएगा और ओवरराइट किया जाएगा।';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'इस संगठन में कोई AD समूह निर्दिष्ट नहीं है। ओपन-ऑडिट के भीतर भूमिकाओं के विवरण की जांच करें।';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'इस संगठन में कोई AD समूह निर्दिष्ट नहीं है। ओपन-ऑडिट के भीतर भूमिकाओं के विवरण की जांच करें। <span class=\'\"confluence-link\"\'>क्या आपने इन समूहों को LDAP सर्वर पर बनाया है और उन्हें LDAP उपयोगकर्ताओं को सौंपा है?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'इस भूमिका में कोई एडी समूह निर्दिष्ट नहीं है। ओपन-ऑडिट के भीतर भूमिकाओं के विवरण की जांच करें।';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'यह विशेषता JSON ऑब्जेक्ट के रूप में संग्रहीत है। यह सभी संग्रहों की सूची है और इसमें संग्रह का नाम शामिल है <code>c</code>, <code>r</code>, <code>u</code> और, या <code>d</code> जो बनाने, पढ़ने, अद्यतन करने और हटाने का प्रतिनिधित्व करता है। ये ऐसे कार्य हैं जो एक उपयोगकर्ता उस विशेष संग्रह से वस्तुओं पर प्रदर्शन कर सकता है।';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'यह या तो एक varchar (एक पाठ क्षेत्र) हो सकता है, एक सूची (मूल्य है कि चुना जा सकता है की एक सूची) या एक तारीख।';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'यह कोड द्वारा किए गए महान कार्य पर निर्भर करता है';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'यह कलेक्टर सार्वभौमिक रूप से अद्वितीय पहचानकर्ता है।';

$GLOBALS["lang"]['This column is required by'] = 'इस स्तंभ द्वारा आवश्यक है';

$GLOBALS["lang"]['This column is required by '] = 'इस स्तंभ द्वारा आवश्यक है ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'यह विवरण ऑटो-पॉप्युलेट है और इसे आदर्श रूप से छोड़ दिया जाना चाहिए।';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'यह समापन बिंदु आपको उन कनेक्शनों को जोड़ने में सक्षम बनाता है जो आपके नेटवर्क अवसंरचना का हिस्सा हैं, यह आपको विभिन्न विशेषताओं को अनुकूलित करने की अनुमति देता है, यह निर्दिष्ट करता है कि यह कनेक्शन कहाँ स्थित है और यह वह संगठन है जो यह है।';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'यह त्रुटि इंगित करती है कि SMB1 को लक्ष्य मशीन से अक्षम या हटा दिया गया है। यह विंडोज के आधुनिक संस्करण के लिए सामान्य है और आप केवल इस संदेश को देखेंगे जब SMB2 कनेक्शन प्रयास विफल हो गया है। यदि SMB2 कनेक्शन विफल हो जाता है, तो हम SMB1 को विंडोज के पुराने संस्करणों पर खोज को सक्षम करने का प्रयास करते हैं। यदि लक्ष्य Windows मशीन <i>है</i> विंडोज के पुराने संस्करण को चलाने की संभावना है कि आपके क्रेडेंशियल विफल हो गए हैं। उस मामले में, देखें';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'यह त्रुटि इंगित करती है कि निर्दिष्ट ऑपरेशन को पूरा करने के लिए पर्याप्त वर्चुअल मेमोरी या पेजिंग फ़ाइल कोटा उपलब्ध नहीं है। बाद में आपको फिर से कोशिश करनी चाहिए।';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'यह त्रुटि इंगित करती है कि उपयोग की जाने वाली क्रेडेंशियल भी गलत हैं, मौजूद नहीं हैं या लक्ष्य विंडोज मशीन के लिए दूरस्थ रूप से लॉग ऑन करने के लिए पर्याप्त विशेषाधिकार नहीं है। आपको क्रेडेंशियल को सत्यापित करना चाहिए और नीचे की जाँच करनी चाहिए।';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'इस उदाहरण के रूप में चिह्नित सभी मॉड्यूल की एक सूची बनाता है';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'यह उदाहरण एनएमएपी स्कैन द्वारा पाए गए उपकरणों और खुले बंदरगाहों, प्रोटोकॉल और कार्यक्रमों की एक सूची बनाता है।';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'यह उदाहरण उन उपकरणों की सूची बनाता है जहां फंक्शन या विवरण फ़ील्ड रिक्त हैं या खरीद की तारीख डिफ़ॉल्ट है।';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'यह उदाहरण क्वेरी 3 साल पुराने उपकरणों की एक सूची को पुनः प्राप्त करती है। आज क्वेरी का उपयोग करता है';

$GLOBALS["lang"]['This example uses'] = 'इस उदाहरण का उपयोग';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'इस सुविधा के लिए एक पेशेवर या एक एंटरप्राइज़ लाइसेंस की आवश्यकता होती है।';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'यह सुविधा, क्योंकि यह सामान्य से अधिक लक्षित उपकरणों को प्रभावित करने की क्षमता है, मैन्युअल रूप से सक्षम होना चाहिए। इस सुविधा को सक्षम करने के लिए, कॉन्फ़िगरेशन आइटम सुविधा_executables को बदलने के लिए <i>हाँ</i>।';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'यह फ़ाइल लिनक्स को यह निर्धारित करने के लिए कहता है कि क्या कोई निर्धारित कार्य है जिसे चलाया जाना चाहिए।';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'यह फॉर्म आपके नेटवर्क पर उपकरणों की खोज शुरू करने का एक सरल तरीका प्रदान करता है। अधिक विस्तृत विकल्पों के लिए, आप व्यक्तिगत रूप से बना सकते हैं';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'यह भी तरीका है कि PAExec काम करता है।';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'यह एक वैकल्पिक विन्यास विकल्प है, जो वैश्विक विन्यास में खोज_use_org_id_match स्थापित करके सक्षम है।';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'यह आम तौर पर प्राथमिक स्तंभ है, जब तक अन्यथा कॉन्फ़िगर नहीं किया जाता है। नोट: जब टाइप = ट्रैफिक होता है, तो यह माध्यमिक पाठ का प्रतिनिधित्व करता है।';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'यह संभावना है कि MySQL समय बंद होने के कारण। MySQL आम तौर पर मेजबान उपकरणों के समय का उपयोग करता है। आप इसे देख सकते हैं';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'यह उपयोगकर्ताओं द्वारा निर्धारित किया गया है और इसलिए हालांकि यह वैश्विक स्तर पर अद्वितीय होना चाहिए, निश्चित रूप से इसकी कोई गारंटी नहीं है।';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'यह निर्देशिका है जहां हम उपकरणों के लिए किसी भी अटैचमेंट को स्टोर करते हैं।';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'इसका उपयोग ओपन-ऑडिट मुद्दों को परेशान करते समय कॉल के पहले बिंदु के रूप में किया जाना है। आप इसे JSON फ़ाइल के रूप में पुनः प्राप्त करने के लिए शीर्ष दाईं ओर निर्यात बटन पर क्लिक कर सकते हैं (समर्थन टिकट / ईमेल में जोड़ा जा सकता है)।';

$GLOBALS["lang"]['This issue is under investigation.'] = 'यह मुद्दा जांच के अधीन है।';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'इस मद को चयनित विशेषता के मूल्य से मिलान करना चाहिए या इसमें क्वेरी की आईडी का इस्तेमाल किया जाना चाहिए।';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'इस मद को चयनित विशेषता के मूल्य से मिलान करना चाहिए।';

$GLOBALS["lang"]['This license expires on'] = 'यह लाइसेंस समाप्त हो जाता है';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'इस सुरक्षा अनुमति को घटक सेवा प्रशासनिक उपकरण का उपयोग करके संशोधित किया जा सकता है।';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'डीबग मोड के रूप में समस्या निवारण के बाद यह टिप्पणी की जानी चाहिए, बिना किसी लाभ के डिस्क पर बहुत सारे लॉग उत्पन्न करेंगे।';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'यह वैश्विक स्तर पर अद्वितीय होना चाहिए, लेकिन मैंने उन उदाहरणों को देखा है जहां यह नहीं है।';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'इसे या तो 1 या रैक की ऊंचाई पर सेट किया जाना चाहिए।';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'यह डेटाबेस में पूरी तरह से योग्य फ़ील्ड नाम होना चाहिए। वर्तमान में सिस्टम, फ़ील्ड और क्रेडेंशियल टेबल के कॉलम समर्थित हैं। EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'इस राज्य का उपयोग तब किया जाता है जब एनमैप यह निर्धारित करने में असमर्थ है कि एक बंदरगाह बंद है या फ़िल्टर किया गया है। यह केवल आईपी आईडी निष्क्रिय स्कैन के लिए प्रयोग किया जाता है।';

$GLOBALS["lang"]['This will auto-populate.'] = 'यह ऑटो-पॉप्युलेट होगा।';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'यह खोज स्कैन को काफी धीमा कर देगा।';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'यह वर्तमान पंक्तियों को हटा देगा';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'यह स्थायी रूप से इस लाइसेंस को वितरित करेगा।';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'यह आपको बल्क एडिट फॉर्म दिखाता है। आपके द्वारा निर्धारित किसी भी विशेषता को सभी चयनित उपकरणों पर लागू किया जाएगा। आप एक बार में कई विशेषताओं को सेट कर सकते हैं।';

$GLOBALS["lang"]['Thursday'] = 'गुरुवार';

$GLOBALS["lang"]['time_caption'] = 'टाइम कैप्शन';

$GLOBALS["lang"]['Time Caption'] = 'टाइम कैप्शन';

$GLOBALS["lang"]['time_daylight'] = 'टाइम डेलाइट';

$GLOBALS["lang"]['Time Daylight'] = 'टाइम डेलाइट';

$GLOBALS["lang"]['Time to Execute'] = 'समय';

$GLOBALS["lang"]['timeout'] = 'टाइमआउट';

$GLOBALS["lang"]['Timeout'] = 'टाइमआउट';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'टाइमआउट प्रति लक्ष्य (दूसरा)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'प्रति लक्ष्य टाइमआउट। एक लक्ष्य प्रतिक्रिया के लिए X सेकंड के लिए प्रतीक्षा करें।';

$GLOBALS["lang"]['Timesatamp'] = 'टाइमटाम्प';

$GLOBALS["lang"]['Timestamp'] = 'टाइमस्टैम्प';

$GLOBALS["lang"]['timing'] = 'समय';

$GLOBALS["lang"]['Timing'] = 'समय';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'शीर्षक';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = '.env नामक एक नई फ़ाइल (एक ही निर्देशिका में). अब संपादित करें कि नई फ़ाइल और असंतोष ( # को हटा दें) नीचे की पंक्ति (लाइन 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'वास्तव में क्वेरी को निष्पादित करने के लिए, एक / निष्पादित करें, इस प्रकार / open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'एक मशीन का परीक्षण करने के लिए, आपके पास क्रेडेंशियल और प्रशासक लेवल एक्सेस होना चाहिए।';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'एक सक्रिय निर्देशिका डोमेन पर एक दूरस्थ मशीन का ऑडिट करने के लिए, आपका आपूर्ति उपयोगकर्ता (या यदि कोई प्रदान नहीं किया गया है, तो उपयोगकर्ता स्क्रिप्ट चला रहा है) लक्ष्य मशीनों प्रशासक समूह (या उपसमूह) का सदस्य होना चाहिए।';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'एक दूरस्थ मशीन का ऑडिट करने के लिए जो डोमेन में नहीं है, आपको व्यवस्थापक खाते का उपयोग करना चाहिए (नहीं) <i>एक</i> व्यवस्थापक खाता, <i>The number of the</i> व्यवस्थापक खाता) लक्ष्य पीसी पर। #1';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'स्थानीयहोस्ट की लेखा परीक्षा के लिए, किसी भी आपूर्ति की गई क्रेडेंशियल को अस्वीकार कर दिया जाता है और कनेक्शन को स्क्रिप्ट चलाने वाले उपयोगकर्ता के विवरण का उपयोग करके बनाया जाता है।';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'सॉफ्टवेयर की तुलना करने के लिए हम नाम और संस्करण की जांच करते हैं। क्योंकि संस्करण संख्या प्रारूप में सभी मानकीकृत नहीं हैं, जब हम एक लेखा परीक्षा परिणाम प्राप्त करते हैं तो हम सॉफ्टवेयर_पैड नामक एक नया विशेषता बनाते हैं जिसे हम प्रत्येक पैकेज के लिए शेष सॉफ्टवेयर विवरण के साथ डेटाबेस में स्टोर करते हैं। इस कारण से, सॉफ़्टवेयर नीतियों का उपयोग करके बेसलाइन काम नहीं करेगा जब किसी उपकरण के खिलाफ चली जाती है जिसे 1.10 (कम से कम) द्वारा ऑडिट नहीं किया गया है। सॉफ्टवेयर नीतियों संस्करण के खिलाफ परीक्षण कर सकते हैं <i>बराबर</i>, <i>अधिक से अधिक</i> या <i>बराबर या अधिक</i>।';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'एक नई प्रविष्टि बनाने के लिए ऊपरी दाहिने हाथ के कोने में बटन बनाएं।';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'संसाधन बनाने के लिए, आपको आवश्यक डेटा पोस्ट करना चाहिए।';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'एक दूरस्थ मशीन (Vista या ऊपर) को सक्षम करने के लिए एक डोमेन पर नहीं, प्रशासक समूह में एक खाता द्वारा, वास्तविक व्यवस्थापक खाते के अलावा UAC पर नीचे अनुभाग देखें।';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'इसे सक्षम करने के लिए, मेनू में जाकर एक नया Auth आइटम बनायें -> व्यवस्थापक -> Auth -> Auth विधि बनाएँ।';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Windows Powershell स्क्रिप्ट को निष्पादित करने के लिए, प्रशासक के रूप में एक कमांड प्रॉम्प्ट खोलें और निम्नलिखित कमांड का उपयोग करें';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'ऑडिट स्क्रिप्ट को निष्पादित करने के लिए, एक टर्मिनल खोलें और निम्नलिखित कमांड का उपयोग करें';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'संपत्ति मूल्य द्वारा फ़िल्टर करने के लिए, संपत्ति का नाम का उपयोग करें। जिन ऑपरेटरों को मूल्य निर्धारित करना चाहिए वे हैं';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Windows पर Nmap स्थापित करने के लिए, Nmap पृष्ठ पर जाएं';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'बदलाव करने के लिए, बस नीचे दिए गए चरणों का पालन करें।';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'किरायेदार आईडी को पुनर्प्राप्त करने के लिए। ओपन एज़्योर पोर्टल एज़्योर सक्रिय निर्देशिका, गुण और किरायेदार आईडी पर क्लिक करें आपकी डायरेक्टरी आईडी के रूप में प्रदर्शित किया गया है - मुझे नाम के लिए गलतफहमी नहीं है, यह कैसे माइक्रोसॉफ्ट रोल है।';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'अपनी कुंजी को पुनर्प्राप्त करने के लिए, एडब्ल्यूएस कंसोल में लॉग इन करें और अपने उपयोगकर्ता नाम का चयन करें, फिर मेरी सुरक्षा क्रेडेंशियल।';

$GLOBALS["lang"]['To return a specific component item.'] = 'एक विशिष्ट घटक आइटम वापस करने के लिए।';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'एक विशिष्ट उपकरण के लिए एक compnent प्रकार के लिए सभी आइटम वापस करने के लिए।';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'एक घटक प्रकार के लिए सभी वस्तुओं को वापस करने के लिए। यदि आप चाहते हैं कि आप सभी सॉफ्टवेयर का उपयोग करेंगे';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'रिवर्स सॉर्ट करने के लिए, माइनस डालें, इस प्रकार,';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'लक्ष्य विंडोज पीसी पर परीक्षण स्क्रिप्ट चलाने के लिए';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'एकीकृत करने के लिए उपकरणों का चयन करने के लिए, हम nmis_manage = y का उपयोग करते हैं, लेकिन आप (उदाहरण के लिए) प्रकार = रूटर पसंद कर सकते हैं। यदि आप कुछ और जटिल पसंद करते हैं तो आप एक समूह या क्वेरी का भी उपयोग कर सकते हैं।';

$GLOBALS["lang"]['To sort by a database column, use'] = 'डेटाबेस कॉलम द्वारा क्रमबद्ध करने के लिए, उपयोग करें';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'इस एंटरप्राइज़ सुविधा का उपयोग करने के लिए, आपको पहले अपने उपयोगकर्ता को सामान्य रूप से ओपन-ऑडिट में बनाने की आवश्यकता है। पासवर्ड देना आवश्यक नहीं है। आपको भूमिकाओं और संगठनों को असाइन करना होगा। ओपन-ऑडिट में उपयोगकर्ता का नाम एनट्रा से मेल होना चाहिए <i>पसंदीदा उपयोगकर्ता नाम</i> विशेषता। एक पूर्ण नाम या ईमेल की कोई आवश्यकता नहीं है - ये इंट्रा से पॉप्युलेट किया जाएगा। यदि आप अपने उपयोगकर्ताओं को नहीं जानते हैं <i>पसंदीदा उपयोगकर्ता नाम</i>, डर नहीं। आप ओपन-ऑडिट और एनट्रा में एंटरप्राइज़ एप्लिकेशन में नया Auth मेथड बना सकते हैं और जब कोई उपयोगकर्ता पूर्व-existing उपयोगकर्ता के बिना ओपन-ऑडिट पर हस्ताक्षर करने का प्रयास करता है, तो लॉग की जांच करें और आपको उनकी राय होगी। <i>पसंदीदा उपयोगकर्ता नाम</i> अपने विवेक के लिए लॉग इन करें।';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'इस एंटरप्राइज़ सुविधा का उपयोग करने के लिए, आपको पहले अपने उपयोगकर्ता को सामान्य रूप से ओपन-ऑडिट में बनाने की आवश्यकता है। पासवर्ड देना आवश्यक नहीं है। आपको भूमिकाओं और संगठनों को असाइन करना होगा। ओपन-ऑडिट में उपयोगकर्ता नाम OKTA से मेल खाता है <i>नाम</i> विशेषता। एक पूर्ण नाम या ईमेल की आवश्यकता नहीं है - ये OKTA से पॉप्युलेट किया जाएगा। यदि आप अपने उपयोगकर्ताओं को नहीं जानते हैं <i>नाम<i>, डर नहीं। आप ओपन-ऑडिट में नया Auth Menthod बना सकते हैं और OKTA में आवेदन कर सकते हैं और जब एक उपयोगकर्ता पूर्व-existing उपयोगकर्ता के बिना ओपन-ऑडिट पर हस्ताक्षर करने का प्रयास करता है, तो लॉग्स की जांच करें और आपको उनकी राय होगी। <i>नाम<i> अपने विवेक के लिए लॉग इन करें।<br/><p>फिर मेनू में जाकर ओपन-ऑडिट में एक नया Auth विधि बनाएं -> व्यवस्थापक -> प्राधिकरण विधियाँ -> Auth. एक नाम प्रदान करें और सेट करें <i>प्रकार</i> ओक्टा।</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'इस सुविधा का उपयोग करने के लिए आपको कॉन्फ़िगरेशन आइटम match_mac (AWS के लिए) और match_hostname (Azure के लिए) सक्षम करना होगा। यह स्वचालित रूप से पहली बार क्लाउड खोज को निष्पादित किया जाएगा। Open-Audit मिलान नियमों पर अधिक के लिए यहाँ देखें: मिलान उपकरण';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'एक क्वेरी के विवरण को देखने के लिए, / ओपन-ऑडिट / इंडेक्स की मानक यूआरएल संरचना। PHP/queries/{$id} का इस्तेमाल किया जाना चाहिए।';

$GLOBALS["lang"]['Togo'] = 'टोगो';

$GLOBALS["lang"]['Tokelau'] = 'टोकिला';

$GLOBALS["lang"]['Tonga'] = 'टोंगा';

$GLOBALS["lang"]['toolbar_style'] = 'टूलबार शैली';

$GLOBALS["lang"]['Toolbar Style'] = 'टूलबार शैली';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'शीर्ष Nmap TCP पोर्ट';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'शीर्ष Nmap TCP पोर्ट। Nmaps "शीर्ष बंदरगाहों" विकल्पों के अनुसार स्कैन करने के लिए शीर्ष 10, 100, 1000 बंदरगाह।';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'शीर्ष Nmap UDP पोर्ट';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'शीर्ष Nmap UDP पोर्ट। Nmaps "शीर्ष बंदरगाहों" विकल्पों के अनुसार स्कैन करने के लिए शीर्ष 10, 100, 1000 बंदरगाह।';

$GLOBALS["lang"]['Traditional Chinese'] = 'पारंपरिक चीनी';

$GLOBALS["lang"]['Traffic Light'] = 'ट्रैफिक लाइट';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'त्रिनिदाद और टोबैगो';

$GLOBALS["lang"]['Troubleshooting'] = 'समस्या निवारण';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAP लॉगिन समस्या निवारण';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'ओपन-ऑडिट की कोशिश करें एंटरप्राइज़, एक समय सीमा के बिना हमें। एंटरप्राइज़ की सभी विशेषताएं। 20 उपकरणों तक सीमित।';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Open-Audit Enterprise के मुफ्त 100 डिवाइस लाइसेंस के साथ सभी नवीनतम सुविधाओं की कोशिश करें। कृपया पढ़िए ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'LDAP उपयोगकर्ता का उपयोग करने में लॉग इन करें। हम मानते हैं कि यह विफल हो जाएगा (अन्यथा, आप अभी भी क्यों पढ़ रहे हैं?)। इसके बाद, ऊपर ther फ़ाइल से लाइन को टिप्पणी करें।';

$GLOBALS["lang"]['Tuesday'] = 'मंगलवार';

$GLOBALS["lang"]['Tunisia'] = 'ट्यूनीशिया';

$GLOBALS["lang"]['Turkey'] = 'तुर्की';

$GLOBALS["lang"]['Turkish'] = 'तुर्की';

$GLOBALS["lang"]['Turkmenistan'] = 'तुर्कमेनिस्तान';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'तुर्क और कैकोस द्वीपसमूह';

$GLOBALS["lang"]['Tuvalu'] = 'तुर्क';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx स्तर';

$GLOBALS["lang"]['Tx Level'] = 'Tx स्तर';

$GLOBALS["lang"]['tx_power'] = 'टीएक्स पावर';

$GLOBALS["lang"]['Tx Power'] = 'टीएक्स पावर';

$GLOBALS["lang"]['tx_profile'] = 'Tx प्रोफ़ाइल';

$GLOBALS["lang"]['Tx Profile'] = 'Tx प्रोफ़ाइल';

$GLOBALS["lang"]['type'] = 'प्रकार';

$GLOBALS["lang"]['Type'] = 'प्रकार';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'प्रकार: यह या तो एक varchar (एक पाठ क्षेत्र) हो सकता है या एक सूची (उन मूल्यों को चुना जा सकता है)।';

$GLOBALS["lang"]['Types of Networks'] = 'नेटवर्क के प्रकार';

$GLOBALS["lang"]['URL'] = 'यूआरएल';

$GLOBALS["lang"]['uuid'] = 'यूआईडी';

$GLOBALS["lang"]['UUID'] = 'यूआईडी';

$GLOBALS["lang"]['udp_ports'] = 'Udp पोर्ट';

$GLOBALS["lang"]['Udp Ports'] = 'Udp पोर्ट';

$GLOBALS["lang"]['Uganda'] = 'युगांडा';

$GLOBALS["lang"]['Ukraine'] = 'यूक्रेन';

$GLOBALS["lang"]['Ukrainian'] = 'यूक्रेनियन';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'अंडरगो स्टेज 1 ऑडिशन (दस्ताव समीक्षा)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'अंडरगो स्टेज 2 ऑडिशन (सरलीकरण समीक्षा)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'अंडरगोइंग विश्लेषण';

$GLOBALS["lang"]['Unfiltered'] = 'Unfiltered';

$GLOBALS["lang"]['uninstall'] = 'स्थापना रद्द करें';

$GLOBALS["lang"]['Uninstall'] = 'स्थापना रद्द करें';

$GLOBALS["lang"]['Uninstall the Agent'] = 'एजेंट की स्थापना रद्द करें';

$GLOBALS["lang"]['United Arab Emirates'] = 'संयुक्त अरब अमीरात';

$GLOBALS["lang"]['United Kingdom'] = 'यूनाइटेड किंगडम';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'संयुक्त राज्य अमेरिका Minor Outlying द्वीप';

$GLOBALS["lang"]['United States Virgin Islands'] = 'संयुक्त राज्य अमेरिका वर्जिन द्वीप';

$GLOBALS["lang"]['United States of America'] = 'संयुक्त राज्य अमेरिका';

$GLOBALS["lang"]['Unknown'] = 'अज्ञात';

$GLOBALS["lang"]['unlock_pin'] = 'अनलॉक पिन';

$GLOBALS["lang"]['Unlock Pin'] = 'अनलॉक पिन';

$GLOBALS["lang"]['Unscheduled'] = 'Unscheduled';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Unused as at 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'अप्रयुक्त';

$GLOBALS["lang"]['Update'] = 'अपडेट';

$GLOBALS["lang"]['update_external_count'] = 'बाहरी गणना अद्यतन करें';

$GLOBALS["lang"]['Update External Count'] = 'बाहरी गणना अद्यतन करें';

$GLOBALS["lang"]['update_external_from_internal'] = 'आंतरिक से बाहरी अद्यतन';

$GLOBALS["lang"]['Update External From Internal'] = 'आंतरिक से बाहरी अद्यतन';

$GLOBALS["lang"]['update_internal_count'] = 'आंतरिक गणना अद्यतन करें';

$GLOBALS["lang"]['Update Internal Count'] = 'आंतरिक गणना अद्यतन करें';

$GLOBALS["lang"]['update_internal_from_external'] = 'बाहरी से आंतरिक अद्यतन';

$GLOBALS["lang"]['Update Internal From External'] = 'बाहरी से आंतरिक अद्यतन';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Open-Audit से NMIS उपकरणों को अपडेट करें';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'ओपन-ऑडिट अपडेट उपकरण ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'ओपन-ऑडिट अपडेट NMIS से उपकरण';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Vulnerability अद्यतन';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'एक {collection} प्रविष्टि की विशेषता अपडेट करें।';

$GLOBALS["lang"]['Update attributes'] = 'अद्यतन विशेषताएँ';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'प्रत्येक बार खोज को IPs के साथ निष्पादित किया गया है जिसे जवाब देने के लिए पता चला है।';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'प्रत्येक बार की खोज को IP के साथ निष्पादित किया गया है जिसे Nmap द्वारा स्कैन किया गया है।';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'प्रत्येक बार खोज को उन उपकरणों के साथ निष्पादित किया गया है जिन्हें हम ऑडिट करने में सक्षम थे।';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'प्रत्येक बार खोज को उन उपकरणों के साथ निष्पादित किया गया है जिन्हें हम क्वेरी करने में सक्षम थे।';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'प्रत्येक बार खोज को निष्पादित किया गया है।';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'प्रत्येक बार खोज को निष्पादित किया गया है।';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'प्रत्येक बार खोज ने निष्पादन पूरा किया है।';

$GLOBALS["lang"]['Updating'] = 'अद्यतन';

$GLOBALS["lang"]['Upgrade'] = 'अपग्रेड';

$GLOBALS["lang"]['Upload an audit result file'] = 'एक लेखा परीक्षा परिणाम फ़ाइल अपलोड';

$GLOBALS["lang"]['Upper Case'] = 'ऊपरी मामला';

$GLOBALS["lang"]['uptime'] = 'अपटाइम';

$GLOBALS["lang"]['Uptime'] = 'अपटाइम';

$GLOBALS["lang"]['Urdu'] = 'उर्दू';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'उरुग्वे, पूर्वी गणराज्य';

$GLOBALS["lang"]['usb'] = 'यूएसबी';

$GLOBALS["lang"]['Usb'] = 'यूएसबी';

$GLOBALS["lang"]['use'] = 'उपयोग';

$GLOBALS["lang"]['Use'] = 'उपयोग';

$GLOBALS["lang"]['use_authentication'] = 'प्रमाणीकरण का उपयोग करें';

$GLOBALS["lang"]['Use Authentication'] = 'प्रमाणीकरण का उपयोग करें';

$GLOBALS["lang"]['use_authorisation'] = 'प्राधिकरण का उपयोग';

$GLOBALS["lang"]['Use Authorisation'] = 'प्राधिकरण का उपयोग';

$GLOBALS["lang"]['Use Proxy'] = 'प्रॉक्सी';

$GLOBALS["lang"]['Use SNMP'] = 'एसएनएमपी का उपयोग करें';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'सुरक्षित (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'सेवा संस्करण जांच का उपयोग करें';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'सेवा संस्करण जांच का उपयोग करें। जब एक पता लगाया गया बंदरगाह खुला के रूप में पता लगाया जाता है, अगर सेट करने के लिए <i>Y</i>, Nmap इस बंदरगाह पर चल रही सेवा के संस्करण को निर्धारित करने के प्रयास में लक्ष्य डिवाइस को क्वेरी करेगा।<br/>यह अवर्गीकृत उपकरणों की पहचान करते समय उपयोगी हो सकता है। यह पहले इस्तेमाल नहीं किया गया था।';

$GLOBALS["lang"]['Use WMI'] = 'WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'उपयोग करना <i>साइन-इन विधि</i> ओआईडीसी - ओपनआईडी कनेक्ट और एक <i>आवेदन प्रकार</i> वेब अनुप्रयोग क्लिक करें <i>अगला</i>।';

$GLOBALS["lang"]['Use for Authentication'] = 'प्रमाणीकरण के लिए उपयोग';

$GLOBALS["lang"]['Use for Roles'] = 'रोल्स के लिए उपयोग करें';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'प्रदर्शित होने पर मानक इंस्टॉल विकल्पों का उपयोग करें और क्लिक करें <i>मैं सहमत हूँ</i>, <i>अगला</i> और <i>स्थापित करना</i> Nmap स्थापित करने के लिए बटन।';

$GLOBALS["lang"]['used'] = 'प्रयुक्त';

$GLOBALS["lang"]['Used'] = 'प्रयुक्त';

$GLOBALS["lang"]['used_count'] = 'प्रयुक्त गणना';

$GLOBALS["lang"]['Used Count'] = 'प्रयुक्त गणना';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'केवल OpenLDAP द्वारा उपयोग किया जाता है।';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'एक उपकरण की खोज करते समय आंतरिक रूप से उपयोग किया जाता है।';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'एक उपकरण की खोज करते समय आंतरिक रूप से उपयोग किया जाता है। लिंक <code>devices.id</code>।';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'जब LDAP सर्वर को उपयोगकर्ताओं के विवरण को पॉप्युलेट करने के लिए कॉन्फ़िगर किया गया है तो इसका उपयोग उन संगठनों को शामिल करता है जिनमें उनके पास पहुंच है। यदि कोई उपयोगकर्ता इस LDAP समूह में है, तो उन्हें इस org को सौंपा गया है।';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'जब LDAP सर्वर को उपयोगकर्ताओं के विवरण को पॉप्युलेट करने के लिए कॉन्फ़िगर किया गया है तो इसका उपयोग किया जाता है - इसमें उन भूमिकाओं को शामिल किया गया है जिन्हें उन्हें सौंपा गया है। यदि कोई उपयोगकर्ता इस LDAP समूह में है, तो उन्हें इस भूमिका को सौंपा गया है।';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'जब एक समूह के सदस्यों को Uid उपयोगकर्ताओं से मिलान करने के लिए OpenLDAP खोज का उपयोग किया जाता है। डिफ़ॉल्ट <code>memberUid</code>। केवल OpenLDAP द्वारा उपयोग किया जाता है।';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'एकीकरण और फर्स्टवे निगरानी अनुप्रयोगों के साथ उपयोग किया जाता है।';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'एकीकरण और फर्स्टवे निगरानी अनुप्रयोगों के साथ उपयोग किया जाता है। यदि काम कर रहा है तो SNMP खोज से पता चला।';

$GLOBALS["lang"]['user'] = 'उपयोगकर्ता';

$GLOBALS["lang"]['User'] = 'उपयोगकर्ता';

$GLOBALS["lang"]['User DN'] = 'उपयोगकर्ता डीएन';

$GLOBALS["lang"]['user_group'] = 'उपयोगकर्ता समूह';

$GLOBALS["lang"]['User Group'] = 'उपयोगकर्ता समूह';

$GLOBALS["lang"]['user_id'] = 'प्रयोक्ता ID';

$GLOBALS["lang"]['User ID'] = 'प्रयोक्ता ID';

$GLOBALS["lang"]['user_interaction'] = 'उपयोगकर्ता इंटरेक्शन';

$GLOBALS["lang"]['User Interaction'] = 'उपयोगकर्ता इंटरेक्शन';

$GLOBALS["lang"]['User Membership Attribute'] = 'उपयोगकर्ता सदस्यता विशेषता';

$GLOBALS["lang"]['user_name'] = 'उपयोगकर्ता का नाम';

$GLOBALS["lang"]['User Name'] = 'उपयोगकर्ता का नाम';

$GLOBALS["lang"]['User Policies'] = 'उपयोगकर्ता नीतियां';

$GLOBALS["lang"]['Username'] = 'उपयोगकर्ता नाम';

$GLOBALS["lang"]['username'] = 'उपयोगकर्ता नाम';

$GLOBALS["lang"]['users'] = 'उपयोगकर्ता';

$GLOBALS["lang"]['Users'] = 'उपयोगकर्ता';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'उपयोगकर्ता नेटस्टैट पोर्ट्स के समान काम करते हैं। यदि कोई उपयोगकर्ता मिलान नाम, स्थिति और पासवर्ड विवरण (परिवर्तनीय, समाप्ति, आवश्यक) के साथ मौजूद है तो पॉलिसी गुजरती है।';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'उपयोगकर्ता, भूमिकाओं और संगठनों';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'CodeIgniter PHP फ्रेमवर्क का उपयोग करता है।';

$GLOBALS["lang"]['Using'] = 'उपयोग';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Auth के लिए Entra का उपयोग करना';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Auth के लिए OKTA का उपयोग करना';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'एक वेब ब्राउज़र का उपयोग करते समय प्रारूप विकल्प का उपयोग करना उपयोगी होता है लेकिन आप JSON प्रारूप में परिणाम देखना चाहते हैं। जोड़ना प्रारूप = जेसन इसे प्राप्त करता है। आम तौर पर एक वेब ब्राउज़र HTML के लिए अपने स्वीकार्य हेडर सेट करेगा, इसलिए उस मामले में, हम रेंडर किए गए पृष्ठ को वापस करते हैं। JSON को पुनः प्राप्त करने के लिए API का उपयोग करते हुए आपको स्वीकार्य हैडर को सेट करना चाहिए';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'आमतौर पर Mbs, स्थान A से।';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'आमतौर पर Mbs, स्थान B से।';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'आमतौर पर Mbs स्थान A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'आमतौर पर Mbs, स्थान B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'आमतौर पर 3 पर सेट किया जाना चाहिए।';

$GLOBALS["lang"]['Uzbekistan'] = 'उजबेकिस्तान';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'से मान्य';

$GLOBALS["lang"]['Valid From'] = 'से मान्य';

$GLOBALS["lang"]['valid_from_raw'] = 'रॉ से मान्य';

$GLOBALS["lang"]['Valid From Raw'] = 'रॉ से मान्य';

$GLOBALS["lang"]['valid_to'] = 'मान्य करने के लिए';

$GLOBALS["lang"]['Valid To'] = 'मान्य करने के लिए';

$GLOBALS["lang"]['valid_to_raw'] = 'रॉ के लिए मान्य';

$GLOBALS["lang"]['Valid To Raw'] = 'रॉ के लिए मान्य';

$GLOBALS["lang"]['Valid Values'] = 'मान्य मूल्य';

$GLOBALS["lang"]['value'] = 'मूल्य';

$GLOBALS["lang"]['Value'] = 'मूल्य';

$GLOBALS["lang"]['Value Types'] = 'मूल्य प्रकार';

$GLOBALS["lang"]['values'] = 'मूल्य';

$GLOBALS["lang"]['Values'] = 'मूल्य';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'मान: एक मामले में <i>सूची</i> क्षेत्र, यह वैध मूल्यों की एक अल्पसंख्यक अलग सूची होना चाहिए।';

$GLOBALS["lang"]['Vanuatu'] = 'वानुअतु';

$GLOBALS["lang"]['VarChar'] = 'वारशर';

$GLOBALS["lang"]['Varchar'] = 'वारचर';

$GLOBALS["lang"]['variable'] = 'चर';

$GLOBALS["lang"]['Variable'] = 'चर';

$GLOBALS["lang"]['Various'] = 'विभिन्न';

$GLOBALS["lang"]['vendor'] = 'विक्रेता';

$GLOBALS["lang"]['Vendor'] = 'विक्रेता';

$GLOBALS["lang"]['Vendor Report'] = 'विक्रेता रिपोर्ट';

$GLOBALS["lang"]['vendors'] = 'विक्रेता';

$GLOBALS["lang"]['Vendors'] = 'विक्रेता';

$GLOBALS["lang"]['Venezuela'] = 'वेनेजुएला';

$GLOBALS["lang"]['Version'] = 'संस्करण';

$GLOBALS["lang"]['version_padded'] = 'संस्करण गद्देदार';

$GLOBALS["lang"]['Version Padded'] = 'संस्करण गद्देदार';

$GLOBALS["lang"]['version_raw'] = 'संस्करण रॉ';

$GLOBALS["lang"]['Version Raw'] = 'संस्करण रॉ';

$GLOBALS["lang"]['version_string'] = 'संस्करण स्ट्रिंग';

$GLOBALS["lang"]['Version String'] = 'संस्करण स्ट्रिंग';

$GLOBALS["lang"]['video'] = 'वीडियो';

$GLOBALS["lang"]['Video'] = 'वीडियो';

$GLOBALS["lang"]['Vietnam'] = 'वियतनाम';

$GLOBALS["lang"]['Vietnamese'] = 'वियतनामी';

$GLOBALS["lang"]['View'] = 'देखें';

$GLOBALS["lang"]['View All'] = 'सभी देखें';

$GLOBALS["lang"]['View Details'] = 'विवरण देखें';

$GLOBALS["lang"]['View Device'] = 'डिवाइस देखें';

$GLOBALS["lang"]['View Discovery'] = 'डिस्कवरी';

$GLOBALS["lang"]['View Policy'] = 'नीति देखें';

$GLOBALS["lang"]['View Racks'] = 'रैक देखें';

$GLOBALS["lang"]['View the'] = 'देखें';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'प्रश्न में खोज देखें, फिर शीर्ष दाएं टूलबार में समर्थन बटन पर क्लिक करें। यह खोज सेटिंग्स, विन्यास आइटम, खोज उपकरण सूची के साथ-साथ इस विशेष खोज के लिए लॉग प्रदान करेगा।';

$GLOBALS["lang"]['View the release notes on the'] = 'पर रिलीज नोट्स देखें';

$GLOBALS["lang"]['Virtual Private Network'] = 'वर्चुअल प्राइवेट नेटवर्क';

$GLOBALS["lang"]['Virtual private network'] = 'वर्चुअल प्राइवेट नेटवर्क';

$GLOBALS["lang"]['Virtualisation'] = 'वर्चुअलाइजेशन';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'हमारे YouTube चैनल को निर्देशात्मक वीडियो के लिए देखें।';

$GLOBALS["lang"]['vlan'] = 'वेला';

$GLOBALS["lang"]['Vlan'] = 'वेला';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'वीएम';

$GLOBALS["lang"]['Vm'] = 'वीएम';

$GLOBALS["lang"]['vm_device_id'] = 'Vm डिवाइस ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm डिवाइस ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm आइडेंट';

$GLOBALS["lang"]['Vm Ident'] = 'Vm आइडेंट';

$GLOBALS["lang"]['vm_server_name'] = 'Vm सर्वर का नाम';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm सर्वर का नाम';

$GLOBALS["lang"]['vm_vendor'] = 'Vm विक्रेता';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm विक्रेता';

$GLOBALS["lang"]['vuln_status'] = 'Vuln स्थिति';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln स्थिति';

$GLOBALS["lang"]['vulnerabilities'] = 'क्षमता';

$GLOBALS["lang"]['Vulnerabilities'] = 'क्षमता';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerability कैश';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerability कैश';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'परिणाम';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerability शुरू में 1 जनवरी, 2025 (डिफ़ॉल्ट द्वारा). हम साल पहले से वापसी में कोई भावना नहीं देखते। इसे विन्यास में बदला जा सकता है।';

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Vulnerability स्थिति';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - सॉफ़्टवेयर नीतियों का उपयोग करके बेसलाइन बनाते समय, वर्तमान में सेंटोस और रेडहैट ने नामों का उपयोग करके कर्नेल को पैकेज किया <i>कर्नेल</i> और <i>कर्नेल-डेवल</i>। इस नाम और अलग-अलग संस्करणों के साथ कई पैकेज हो सकते हैं। डेबियन आधारित वितरण जैसे नामों का उपयोग करते हैं <i>linux-image-3.13.0-24-generic</i>, ध्यान दें कि संस्करण संख्या पैकेज नाम में शामिल है। चूंकि RedHat आधारित ऑपरेटिंग सिस्टम इस प्रारूप का उपयोग करते हैं और बाद में विभिन्न संस्करणों के साथ कई समान पैकेज नाम हैं जिन्हें हम वर्तमान में बाहर निकालते हैं <i>कर्नेल</i> और <i>कर्नेल-डेवल</i> सॉफ्टवेयर नीतियों से। यह भविष्य में अद्यतन में संबोधित किया जा सकता है।';

$GLOBALS["lang"]['WHERE'] = 'कहाँ';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials आवश्यकताएँ';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'इसे पूरा करने के लिए प्रतीक्षा करें, फिर एजेंट को स्थापित करने के लिए इस अगली पंक्ति में पेस्ट करें।';

$GLOBALS["lang"]['wall_port'] = 'वॉल पोर्ट';

$GLOBALS["lang"]['Wall Port'] = 'वॉल पोर्ट';

$GLOBALS["lang"]['Wallis and Futuna'] = 'वालिस और फ़ुतुना';

$GLOBALS["lang"]['Want to know more?'] = 'अधिक जानना चाहते हैं?';

$GLOBALS["lang"]['Warning'] = 'चेतावनी';

$GLOBALS["lang"]['warranty'] = 'वारंटी';

$GLOBALS["lang"]['Warranty'] = 'वारंटी';

$GLOBALS["lang"]['warranty_duration'] = 'वारंटी अवधि';

$GLOBALS["lang"]['Warranty Duration'] = 'वारंटी अवधि';

$GLOBALS["lang"]['warranty_expires'] = 'वारंटी एक्सपायर';

$GLOBALS["lang"]['Warranty Expires'] = 'वारंटी एक्सपायर';

$GLOBALS["lang"]['warranty_status'] = 'वारंटी स्थिति';

$GLOBALS["lang"]['Warranty Status'] = 'वारंटी स्थिति';

$GLOBALS["lang"]['warranty_type'] = 'वारंटी प्रकार';

$GLOBALS["lang"]['Warranty Type'] = 'वारंटी प्रकार';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'हमारे पास स्कैन से पहले पिंग का विकल्प भी है (लंबे समय तक रहने वाले एआरपी कैश वाले राउटर के लिए महत्वपूर्ण)। यह आमतौर पर एक अच्छा विचार है।';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'हमारे पास हमारे एक्शन आइटम भी हैं (जो नीचे दिए गए आदेश में निष्पादित किए गए हैं):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'अक्सर पूछे जाने वाले प्रश्न और उत्तर <i>यह निर्भर करता है</i>। यह स्कैन किए जाने वाले आईपी की संख्या पर निर्भर करता है, नेटवर्क कनेक्शन की गति, स्कैन किए जाने वाले उपकरणों की गति, स्कैन किए जाने वाले उपकरणों का प्रकार, परीक्षण किए जाने वाले विभिन्न क्रेडेंशियलों की संख्या और ओपन-ऑडिट सर्वर की गति पर निर्भर करता है। हमारे पास एक कैलकुलेटर नहीं है जो हमें उन चरों को इनपुट करने और मूल्य वापस करने की अनुमति देगा। यह बस बहुत जटिल है। आम तौर पर मैं अपनी खोज को 256 आईपी पते - यानी, ए / 24 सबनेट को सीमित करता हूं। हमारे पास ग्राहक स्कैन / 16 सबनेट (65k एड्रेस) हैं और यह काम करता है - लेकिन यह लंबे समय तक ले सकता है। आप /24 ब्लॉक में स्कैनिंग से बेहतर हैं। यदि आप केवल यह नहीं जानते कि आपका पता क्या है, तो यह बीज खोज के लिए एक अच्छा मामला है।';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'हमारे पास अधिक विस्तृत निर्देश हैं';

$GLOBALS["lang"]['We have tests for:'] = 'हमारे पास निम्नलिखित परीक्षण हैं:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'हम आशा करते हैं कि आप ओपन-ऑडिट को हम जितना उपयोगी मानते हैं।';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'हम शुरू में डिफ़ॉल्ट विकल्प के साथ स्क्रिप्ट की डिफ़ॉल्ट सूची निर्धारित करते हैं। स्क्रिप्ट की सूची /scripts पर देखी जा सकती है। इन डिफ़ॉल्ट लिपियों को हटाया नहीं जा सकता है। आप आवश्यकतानुसार उपयोग के लिए अतिरिक्त स्क्रिप्ट बना सकते हैं। आपकी स्क्रिप्ट मौजूदा लिपियों में से एक पर आधारित होगी और इसमें कस्टम विकल्प लागू होंगे। तब लिपियों को सूची पृष्ठ से मेनू पर डाउनलोड किया जा सकता है: डिस्कवर -> ऑडिट स्क्रिप्ट -> सूची ऑडिट स्क्रिप्ट';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'हमें अपने नेटवर्क पर उपकरणों से प्रभावी ढंग से बात करने में सक्षम होना चाहिए।';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'हम केवल डेटा की न्यूनतम राशि और एक संवेदनशील प्रकृति की कुछ भी नहीं भेजते हैं। हम अपने लाइसेंस डेटा (नाम, प्रकार, आदि), हमारे आवेदन डेटा (नाम, संस्करण, मंच, टाइमज़ोन, आदि), किसी भी लॉग त्रुटि, उपकरण प्रकार की गिनती और उपयोग की गई सुविधाओं की गिनती भेजते हैं। <i>कोई</i> पर्यावरण में उपकरण हैं और यह आपके डेटा का एकमात्र टुकड़ा है जिसे हम भेजते हैं। और केवल उपकरण के प्रकार और गिनती। निर्माता नहीं, मॉडल नहीं। हम विशेष नहीं भेजते हैं। कोई नेटवर्क नहीं आईपी पते नहीं। कोई OS संस्करण नहीं। कोई सॉफ्टवेयर नाम नहीं। UUID और सर्वर फ़ील्ड sha256 एन्कोडेड हैं ( इसलिए हम मूल्य नहीं जानते हैं)। हम सिर्फ उन डेटा को भेजते हैं जिन्हें हमें उत्पाद में सुधार करने की आवश्यकता है। हमें आशा है कि आप सभी को इस जानकारी के साथ लाभ देख सकते हैं। यह हमें निर्देशित दिशा प्रदान करेगा जहां उत्पाद में सुधार और नई सुविधाओं पर ध्यान केंद्रित करने के लिए।';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'हम Google क्रोम एक्सटेंशन का उपयोग करते हैं जिसे पोस्टमैन कहा जाता है। आप इसे स्थापित करना और उसके साथ परीक्षण करना चाहते हैं।';

$GLOBALS["lang"]['Web'] = 'वेब';

$GLOBALS["lang"]['Web Application Routes'] = 'वेब अनुप्रयोग रूट';

$GLOBALS["lang"]['Web Server Discovery'] = 'वेब सर्वर डिस्कवरी';

$GLOBALS["lang"]['Webserver'] = 'वेबसर्वर';

$GLOBALS["lang"]['Website'] = 'वेबसाइट';

$GLOBALS["lang"]['Wednesday'] = 'बुधवार';

$GLOBALS["lang"]['weight'] = 'वजन';

$GLOBALS["lang"]['Weight'] = 'वजन';

$GLOBALS["lang"]['weight_current'] = 'वजन वर्तमान';

$GLOBALS["lang"]['Weight Current'] = 'वजन वर्तमान';

$GLOBALS["lang"]['weight_empty'] = 'वजन खाली';

$GLOBALS["lang"]['Weight Empty'] = 'वजन खाली';

$GLOBALS["lang"]['weight_max'] = 'वजन मैक्स';

$GLOBALS["lang"]['Weight Max'] = 'वजन मैक्स';

$GLOBALS["lang"]['Welcome'] = 'स्वागत';

$GLOBALS["lang"]['Welcome Dashboard'] = 'आपका स्वागत है डैशबोर्ड';

$GLOBALS["lang"]['Welcome to'] = 'आपका स्वागत है';

$GLOBALS["lang"]['Western Sahara'] = 'पश्चिमी सहारा';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'मैं क्या उम्मीद कर सकता हूँ अगर मुझे कोई क्रेडेंशियल नहीं है';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'क्या मैं उन क्षेत्रों के बारे में चाहता हूं जो मैं एनएमआईएस से चाहते हैं जो ओपन-ऑडिट में नहीं हैं? हमने आपको कवर किया है। बाहरी प्रणाली (NMIS) में कोई भी क्षेत्र जो ओपन-ऑडिट में मौजूद नहीं है, स्वचालित रूप से ओपन-ऑडिट कस्टम फ़ील्ड के रूप में बनाया जाएगा।';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'अन्य नेटवर्क उपकरणों के बारे में क्या? थिंक स्विच, राउटर, प्रिंटर आदि। जाहिर है, अगर आप इन उपकरणों के लिए कुछ एसएनएमपी क्रेडेंशियल प्रदान कर सकते हैं तो यह सबसे अच्छा है। केवल जरूरत <i>केवल</i> पहुँच लेकिन अगर आप ऐसा नहीं करना चाहते हैं, तो आपको चलने वाली खोज से कुछ भी नहीं रोक रहा है, उपकरणों को ढूंढना और उन्हें पहचानने के लिए एक नियम या दो बनाना (उदाहरण के लिए, खुले बंदरगाहों के साथ संयोजन में मैक एड्रेस उपसर्ग का उपयोग करें)। आपके पास बहुत जानकारी नहीं है, लेकिन आपको पता होगा कि वे नेटवर्क पर हैं, वे क्या हैं, और आखिरी बार उन्हें देखा गया था। आप यह भी देखेंगे कि नेटवर्क पर कुछ नया दिखाई देता है।';

$GLOBALS["lang"]['What do we send?'] = 'हम क्या भेजते हैं?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'वास्तव में इसका क्या मतलब है?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'इस रैक का उद्देश्य क्या है।';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'इस स्थान का प्रकार क्या है। स्वीकार्य प्रकार में आयोजित <code>attributes</code> तालिका।';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'जब लिनक्स पर ओपन-ऑडिट एक विंडोज मशीन की खोज करता है, तो रिमोट कमांड को निष्पादित करने के लिए हम उपयोग करते हैं';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'जब विंडोज पर ओपन-ऑडिट एक विंडोज मशीन की खोज करता है, तो रिमोट कमांड को निष्पादित करने के लिए हम उपयोग करते हैं';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'जब ओपन-ऑड आईटी एक उपकरण के बारे में डेटा प्राप्त करता है, या तो किसी ऑडिट रन के दौरान डिवाइस की खोज करके या डिवाइस को आयात करने वाले उपयोगकर्ता द्वारा, यह निर्धारित करना चाहिए कि क्या यह खोजा गया डिवाइस उस डिवाइस से मेल खाता है जो पहले से ही अपने डेटाबेस में मौजूद है, या यदि यह एक नया उपकरण है जिसे जोड़ा जाना चाहिए। ओपन-ऑडिट इस निर्धारित करने के लिए बारह संपत्ति मैचों की एक श्रृंखला का उपयोग करता है। मैच नियम OR तुलना के रूप में काम करते हैं, नहीं और। इसका मतलब यह पहला नियम है जो खोजे गए डिवाइस में एक क्षेत्र से एक में एक क्षेत्र से मेल खाता है जो एक मौजूदा डिवाइस के रूप में हल करता है। सभी मिलान नियमों को एक उपकरण के लिए नए होने के लिए विफल होना चाहिए और परिणामस्वरूप एक नया रिकॉर्ड बनाया जा रहा है।';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'जब POSTing data, आप एक पहुँच टोकन शामिल होना चाहिए। प्रत्येक अनुरोध प्रकार के साथ एक एक्सेस टोकन उत्पन्न होता है, इसलिए एक GET (उदाहरण के लिए) और स्वीकार करें: आवेदन / जेसन, मेटा → access_token के लिए प्रतिक्रिया को पार करें, और इसमें शामिल हैं कि आपके अनुरोध के साथ। इसे फील्ड डेटा [access_token], IE, शीर्ष स्तर में रखा जाना चाहिए।';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'जब किसी उपकरण की खोज की जाती है तो ऑडिट स्क्रिप्ट को फ़ाइल (या निर्देशिका) विवरण के साथ इंजेक्ट किया जाएगा। दोनों audit_linux.sh और audit_windows.vbs को पॉप्युलेट किया जाएगा, भले ही फ़ाइल पथ हो। यदि आप सोच रहे हैं <i>लेकिन विंडोज मशीन में लिनक्स पथ डालने से चीजें टूट जाएगी!</i>, यह तोड़ नहीं है, आप सिर्फ उस फ़ाइल या निर्देशिका प्रविष्टि से किसी भी डेटा प्राप्त नहीं करेंगे।<br/>प्राप्त विवरण में संग्रहीत किया जाएगा <i>फ़ाइल</i> डेटाबेस तालिका और किसी अन्य विशेषता की तरह संग्रहीत हैं। फ़ाइल विवरण किसी अन्य विशेषता के रूप में संग्रहीत किया जाएगा और यदि निम्नलिखित विशेषताओं में से कोई परिवर्तन - अलर्ट उत्पन्न करेगा <i>पूरा नाम</i>, <i>हैश</i>, <i>वस्तु</i>, <i>Last_changed</i>। तालिका में एक system_id, first_seen, last_seen और वर्तमान स्तंभों के साथ-साथ फाइल विवरण शामिल हैं।<br/>दर्ज किए गए गुण निम्नलिखित हैं:<br/><ul><li>विंडोज - नाम, आकार, निर्देशिका, SHA1 हैश (फ़ाइल सामग्री का), आखिरी बदलाव, अनुमतियां, मालिक, संस्करण (फ़ाइल अनुमति)।</li><br/><li>लिनक्स - नाम, आकार, निर्देशिका, SHA1 हैश (फ़ाइल सामग्री का), अंतिम बदल गया, मेटा डेटा पिछले बदल गया, अनुमतियां, मालिक, समूह, inode।</li></ul>आप नीचे के रूप में विंडोज और लिनक्स ऑडिट स्क्रिप्ट दोनों में एक अनुभाग देखेंगे';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'जब एक खोज चली जाती है, तो प्रासंगिक खोज स्कैन विकल्प चुना जाता है और उन सेटिंग्स का उपयोग Nmap द्वारा लक्षित उपकरणों को स्कैन करने के लिए किया जाता है। स्कैन विकल्प यह निर्धारित करते हैं कि कौन से बंदरगाह एनमैप स्कैन करते हैं, वे कितनी तेजी से स्कैन करते हैं और क्या एनमैप पिंग का उपयोग पहले यह निर्धारित करने के लिए किया जाता है कि क्या आईपी लाइव है या नहीं।';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'जब एक खोज चली जाती है, तो प्रासंगिक खोज स्कैन विकल्प चुना जाता है और उन सेटिंग्स का उपयोग Nmap द्वारा लक्षित उपकरणों को स्कैन करने के लिए किया जाता है। यदि कोई विकल्प सेट नहीं चुना जाता है, तो डिफ़ॉल्ट कॉन्फ़िगरेशन आइटम (discovery_default_scan_option) का चयन और उपयोग किया जाता है। ओपन-ऑडिट समुदाय सभी खोजों के विन्यास के अनुसार डिफ़ॉल्ट विकल्प का उपयोग करेगा।';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'जब एक सबनेट खोज को इसे पहले रन निष्पादित किया जाता है, यदि चुना जाता है, तो रेंज या आईपी पते पर एक Nmap पिंग स्कैन। किसी भी उपकरण का जवाब स्कैन किया जाएगा। यदि कोई Nmap ping स्कैन अनुरोध नहीं है, तो प्रत्येक IP को व्यक्तिगत रूप से स्कैन किया जाता है। कौन से बंदरगाह? यही कारण है कि द्वारा निर्धारित किया जाता है';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'जब एसएसएच के माध्यम से लिनक्स डिवाइस का परीक्षण किया जाता है, तो कुछ लिनक्स वितरणों ने सुडो कमांड को टीटीई (जो हम कर रहे हैं) के बिना पारित करने की अनुमति नहीं दी है। इन लिनक्स वितरणों में से एक को पूरी तरह से ऑडिट करने के लिए रूट उपयोगकर्ता क्रेडेंशियल की आपूर्ति करना सबसे अच्छा है। यदि कोई रूट की आपूर्ति नहीं की जाती है और टीटीई के बिना सुडो संभव नहीं है, तो ऑडिट स्क्रिप्ट चली जाएगी लेकिन इसमें डेटा की मात्रा नहीं होगी। रूट (या स्थानीय रूप से सूडो का उपयोग करके) का उपयोग करके बाद के ऑडिट सिस्टम के बारे में अतिरिक्त विवरण प्रदान करेगा और कई उत्पन्न करेगा। <i>परिवर्तन</i>।';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'जब उपकरणों के संयोजन, जो सिस्टम सूचना के लिए आधिकारिक स्रोत है।';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'जब पूरा हो जाए, तो कमांड विंडो बंद करें और आप कर रहे हैं!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'जब आप विजेट बनाते हैं, तो आप चुनते हैं <i>उन्नत</i> बटन आप अपने खुद के कस्टम SQL अपलोड करने की क्षमता होगा।';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'बाहरी सिस्टम से उपकरणों को एकीकृत करते समय, यदि डिवाइस ओपन-ऑडिट में मौजूद नहीं है तो हमें इसे बनाना चाहिए?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'बाहरी सिस्टम से उपकरणों को एकीकृत करते समय, यदि डिवाइस को बाहरी सिस्टम में अपडेट किया गया है तो हमें इसे ओपन-ऑडिट में अपडेट करना चाहिए?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'डिस्कवरी की जांच करते समय, समर्थन निर्यात डिस्कवरी लॉग्स का अनुरोध करेगा। इनको पुनः प्राप्त करने के लिए, मेनू पर जाएं -> डिस्कवरी ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'जब एक लिनक्स आधारित डिवाइस से मेल खाता है, तो हम डीबस आईडी का उपयोग मेजबान नाम के साथ करना पसंद करते हैं। हम नीचे की तालिका के अनुसार अन्य विकल्पों का भी उपयोग कर सकते हैं, लेकिन हम रूट के बिना Dbus ID को पुनर्प्राप्त कर सकते हैं। UUID को पुनर्प्राप्त करने के लिए ( मदरबोर्ड से), हमें dmidecode चलाने की आवश्यकता है, जिसे रूट की आवश्यकता होती है। दुर्भाग्य से, जब आप एक ESXi अतिथि को क्लोन करते हैं, तो Dbus ID को फिर से बनाया नहीं जाता है - इसलिए हमारे मेजबान नाम के साथ इसे स्वीकार करते हैं। यहां एक अच्छा लेख है जो विवरण देता है <i>क्यों</i> हार्डवेयर ID';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'जब जेएसओएन का अनुरोध किया जाता है तो डिफ़ॉल्ट रूप से कोई सीमा निर्धारित नहीं होती है। स्क्रीन डिस्प्ले का अनुरोध करते समय सीमा डिफ़ॉल्ट रूप से 1000 तक निर्धारित की जाती है। इसे विन्यास में बदला जा सकता है। देखें <i>पृष्ठ</i> आइटम';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'जब किसी बाहरी डिवाइस को पुनर्प्राप्त किया जाता है, तो क्या हम उस पर खोज करते हैं?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'जब विंडोज पर ओपन-ऑडिट चल रहा है तो अपाचे सेवा खाता होना चाहिए <i>नियमित</i> उपयोगकर्ता (या प्रशासक)। ऐसा इसलिए है क्योंकि <i>स्थानीय प्रणाली</i> आम तौर पर अपाचे चलाने के लिए इस्तेमाल किया गया खाता किसी भी नेटवर्क संसाधनों तक पहुंच नहीं है। IE - जब Windows PC में ऑडिट स्क्रिप्ट की प्रतिलिपि बनाने के लिए स्थानीय सिस्टम खाता खाता खाता के रूप में चल रहा है तो हम अपाचे का उपयोग नहीं कर सकते।';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'जब विन्यास विकल्प सेट होता है, तो हम इसे एक निश्चित परिभाषित मैच नियमों के लिए उपकरणों के लिए खाते में लेते हैं जहां कॉन्फ़िगरेशन आइटम सक्षम किया गया है। ये नियम हैं:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'जब नियमों की खोज में चली जाती है, तो किसी भी मिलान नियम खोज लॉग में दिखाई देंगे। उदाहरण के लिए नीचे देखें।';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'जब यह बेंचमार्क निष्पादित किया जाता है। संबद्ध से वंचित <code>tasks.type</code> और <code>tasks.sub_resource_id</code>।';

$GLOBALS["lang"]['When this log was created.'] = 'जब यह लॉग बनाया गया था।';

$GLOBALS["lang"]['When this queue item started processing.'] = 'जब यह कतार आइटम प्रसंस्करण शुरू कर दिया।';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'ओपन-ऑडिट प्रोफेशनल या एंटरप्राइज का उपयोग करते समय, विजेट डैशबोर्ड पर प्रदर्शित होने के लिए उपलब्ध और अनुकूलन योग्य हैं।';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'जब हम बाहरी प्रणाली के लिए एक वस्तु के लिए आंतरिक रूप से चयनित डिवाइस को परिवर्तित कर रहे हैं, तो बाहरी डेटा क्या होना चाहिए। EG: पूर्णांक, स्ट्रिंग, आदि।';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'जब हम इस बेसलाइन को निष्पादित करते हैं, तो हमें उन उपकरणों पर आइटम की जांच करनी चाहिए जो इस बेसलाइन के लिए पॉलिसी में नहीं हैं।';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'जब हम एक खुला बंदरगाह प्राप्त करते हैं, तो हमें वर्तमान में उस पर चल रही सेवा के संस्करण के लिए परीक्षण करने का प्रयास करना चाहिए? यह वास्तविक चल रही सेवाओं की पुष्टि करने में सहायता करता है।';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'जब आप अपने अमेज़ॅन एडब्ल्यूएस उदाहरणों की खोज के लिए क्लाउड का उपयोग कर रहे हैं, तो आपको दो क्रेडेंशियल आइटम - कुंजी और गुप्त कुंजी की आवश्यकता होगी। आपकी कुंजी पहले से ही आपको और आपकी गुप्त कुंजी के लिए भी जानी चाहिए। ध्यान दें कि आप अमेज़ॅन द्वारा प्रदान किए गए एडब्ल्यूएस कंसोल का उपयोग करके अपनी गुप्त कुंजी को पुनर्प्राप्त नहीं कर सकते हैं। यदि आपने इसे गलत तरीके से बदल दिया है, तो आपको एक नया उत्पन्न करने की आवश्यकता होगी।';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'जब आप अपने Microsoft Azure उदाहरणों की खोज के लिए क्लाउड का उपयोग कर रहे हैं, तो आपको चार क्रेडेंशियल आइटम - सदस्यता आईडी, किरायेदार आईडी, क्लाइंट आईडी और क्लाइंट गुप्त की आवश्यकता होगी।';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'जब आप एक खोज बनाते हैं तो आपके पास devices_assigned_to_org का विकल्प होता है। इसका मतलब यह है कि इस खोज के लिए खोजे गए किसी भी उपकरण को सौंपा जाएगा (have) <code>devices.org_id</code> अपने चुने हुए संगठन को सेट करें।';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'जब आप एडवांस्ड बटन पर क्लिक करते हैं, तो आपके पास बदलने के कई विकल्प हैं, उनमें से एक खोज का प्रकार है। टाइप हमेशा सबनेट (ऊपर की रेंज, सबनेट, आईपी विकल्प) और सक्रिय निर्देशिका को शामिल करते हैं। v4.1 के रूप में, ओपन-ऑडिट में एक नया खोज प्रकार है जिसे बीज कहा जाता है।';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'जब आप एक क्वेरी को शेड्यूल पर चलाने में सक्षम होते हैं, तो क्वेरी को आपके चयनित पते पर ईमेल किया जाता है। आप मेनू के माध्यम से ईमेल स्थापित करना चाहिए -> व्यवस्थापक -> एंटरप्राइज़ -> ईमेल कॉन्फ़िगरेशन हमारे पास भी है <i>परीक्षण ईमेल<i> उस पृष्ठ पर बटन। अपने विवरण को इनपुट करें, इसे सहेजें और फिर इसका परीक्षण करें। आपके पास एक मोडल बॉक्स होना चाहिए जो आपको सूचित करता है कि क्या यह सफल है या नहीं और स्पष्ट रूप से एक परीक्षण ईमेल प्राप्त करना चाहिए यदि यह सफल है। एक बार जब आपके पास ईमेल कॉन्फ़िगर किया गया है, तो आपके निर्धारित क्वेरी को कॉन्फ़िगर किया जा सकता है।<br/><br/>एक नाम, वैकल्पिक विवरण प्रदान करें, चुनें <i>क्वेरी</i> प्रकार, वांछित क्वेरी का चयन करें, एक ईमेल पता प्रदान करें, एक प्रारूप चुनें और शेड्यूल सेट करें।<br/><br/>एक घंटे प्रदान करें (केवल घंटे, अभी तक कोई मिनट नहीं), कार्य को एक नाम दें (यह वास्तविक निर्धारित क्वेरी का नाम नहीं है), चयन करें कि आप किस दिन क्वेरी रन की तरह होंगे, कौन से क्वेरी आपको रन करना होगा, एक ईमेल पते की आपूर्ति करें और एक क्वेरी प्रारूप चुनें और आप कर रहे हैं।<br/>क्वेरी को क्वेरी के एक ईमेल शरीर ( HTML प्रारूप में) और अनुरोधित प्रारूप में संलग्न क्वेरी के साथ भेजा जाएगा।</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'जब आप एक कॉलम हेडिंग में टेक्स्ट दर्ज करते हैं, तो आप बस एक सामान्य शब्द का उपयोग कर सकते हैं। उदाहरण के लिए, जब आप प्रवेश करते हैं <code>computer</code> ऊपर सर्च बॉक्स में <i>प्रकार</i> कॉलम, खोज कंप्यूटर के प्रकार के साथ सभी उपकरणों को वापस कर देगा। अनिवार्य रूप से, ओपन-ऑड आईटी एक URL का उपयोग करके डेटा का अनुरोध करता है <code>devices?devices.type=computer</code>। अब डेटाटेबल्स खोज का उपयोग करते समय एक महत्वपूर्ण अंतर है, मानक बनाम';

$GLOBALS["lang"]['where'] = 'कहाँ';

$GLOBALS["lang"]['Where'] = 'कहाँ';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'जहां $x एक नंबर है। यह कई LDAP प्रविष्टियों DB में हैं और इसे पुनः प्राप्त किया गया है।';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'जहां डिवाइस विवरण स्क्रीन पर आप इस क्षेत्र को देखना चाहते हैं।';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'जहां रैक पंक्ति में है।';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'क्या भेद्यता अपने स्वयं के प्रभाव, उपलब्धता और गोपनीयता से परे घटकों को प्रभावित करती है।';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'क्या उपयोगकर्ता बातचीत की आवश्यकता है (कोई नहीं, निष्क्रिय, सक्रिय)।';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'कौन सा OS इस बेंचमार्क पर लागू होता है।';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'कौन-सा उपकरण ओपन-ऑडिट बाह्य प्रणाली (यदि कोई हो) से बना होना चाहिए। सभी का उपयोग करना, कोई नहीं या दिए गए प्रयास।';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'हमें किस नेटवर्क की खोज करनी चाहिए। यह प्रारूप में होना चाहिए';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'किस उप-मेनू को हम इस क्वेरी को प्रदर्शित करते हैं।';

$GLOBALS["lang"]['Who made this rack.'] = 'जिसने इस रैक को बनाया।';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'क्यों Windows सर्वर केवल?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'हम इस नीति को क्यों बाहर करते हैं?';

$GLOBALS["lang"]['Wide Area Network'] = 'वाइड एरिया नेटवर्क';

$GLOBALS["lang"]['Wide area network'] = 'वाइड एरिया नेटवर्क';

$GLOBALS["lang"]['Widget'] = 'विजेट';

$GLOBALS["lang"]['Widget #'] = 'विजेट #';

$GLOBALS["lang"]['Widget # '] = 'विजेट # ';

$GLOBALS["lang"]['Widget Type'] = 'विजेट प्रकार';

$GLOBALS["lang"]['widgets'] = 'विजेट';

$GLOBALS["lang"]['Widgets'] = 'विजेट';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'विजेट को डैशबोर्ड पर इस्तेमाल करने के लिए डिज़ाइन किया गया है। एंटरप्राइज़ उपयोगकर्ताओं को आवश्यकतानुसार विजेट बनाने, अद्यतन करने और हटाने की पूरी स्वतंत्रता है।';

$GLOBALS["lang"]['width'] = 'चौड़ाई';

$GLOBALS["lang"]['Width'] = 'चौड़ाई';

$GLOBALS["lang"]['windows'] = 'विंडोज';

$GLOBALS["lang"]['Windows'] = 'विंडोज';

$GLOBALS["lang"]['Windows Packages'] = 'विंडोज पैकेज';

$GLOBALS["lang"]['Windows Test Script'] = 'विंडोज टेस्ट स्क्रिप्ट';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'विंडोज उपयोगकर्ता कार्य इकाई #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'विंडोज उपयोगकर्ता कार्य इकाई #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'विंडोज भी सेवा शुरू करने से अवरुद्ध हो सकता है। लक्ष्य पर विंडोज सुरक्षा सेबेट शुरू करें और यह सुनिश्चित करें कि WinExeSvc निष्पादन योग्य को चलाने की अनुमति है (उपकरण पर अनुमति दें और फिर स्टार्ट एक्शन)।';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Samba पर Winexe page';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe को शुरू करने और चलाने के लिए निम्नलिखित Windows सेवाओं की आवश्यकता होती है: Netlogon और rpc सेवाओं को चलाने के लिए।<br/><br/>कृपया लक्ष्य विंडोज मशीन पर लॉग ऑन करें और नेटलॉगॉन और आरपीसी के लिए सेवाओं की जांच करें।';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe एक दूरस्थ सेवा (winexesvc) स्थापित करने और शुरू करने के लिए व्यवस्थापक$ और आरपीसी (नेट सर्विस स्टार्ट) का उपयोग करता है। यह सेवा एक नामित पाइप को शुरू करती है जिसका उपयोग ओपन-ऑडिट सर्वर से लक्ष्य और रिवर्स तरीके से आउटपुट के लिए किया जाता है। समाप्त होने पर, नामित पाइप बंद हो जाता है और वाइनेक्सिवेक अधिक कनेक्शन या अनइंस्टॉल ( दिए गए विकल्पों के आधार पर) के लिए इंतजार करता है।';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'वायरलेस स्थानीय क्षेत्र नेटवर्क';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'ओपन-ऑडिट की 3.3.0 रिलीज के साथ हमने क्लस्टर की अवधारणा को पेश किया है। यह सहज रूप से एक वेब क्लस्टर, डेटाबेस क्लस्टर या फ़ाइल क्लस्टर (या कई अन्य उद्देश्यों में से एक) के विचार के लिए नक्शे एक दिए गए प्रकार (उच्च उपलब्धता, अतिरेक, स्केलिंग, आदि) में।<br/><br/>चुने गए क्लस्टर के उद्देश्य के आधार पर, रिपोर्टिंग थोड़ा अलग होगी।<br/><br/>उदाहरण के लिए, यदि आप वर्चुअलाइजेशन के उद्देश्य से क्लस्टर बनाते हैं, तो जब आपने इसके लिए उपकरणों को जोड़ा है तो आप उन उपकरणों पर आभासी मशीनों को भी देखेंगे।';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'क्लाउड फीचर की शुरूआत के साथ, आप अपने क्लाउड, अमेज़न एडब्ल्यूएस या माइक्रोसॉफ्ट एज़्योर के विवरण की आपूर्ति कर सकते हैं, और ओपन-ऑडआईटी प्रासंगिक एपीआई का उपयोग स्थानों, नेटवर्क और उदाहरणों की एक सूची पुनर्प्राप्त करने के लिए करेगा, फिर इन प्रत्येक उदाहरणों को खोजेगा।';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'कार्यसमूह';

$GLOBALS["lang"]['Workgroup'] = 'कार्यसमूह';

$GLOBALS["lang"]['Working Credentials'] = 'कार्य क्रेडेंशियल';

$GLOBALS["lang"]['Wrap Up'] = 'लपेटना';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'PHP स्क्रिप्टिंग भाषा में लिखित।';

$GLOBALS["lang"]['XML'] = 'एक्सएमएल';

$GLOBALS["lang"]['Yellow Query'] = 'पीला';

$GLOBALS["lang"]['Yemen'] = 'यमन';

$GLOBALS["lang"]['Yes'] = 'हाँ';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'आप Executables संग्रह में प्रविष्टियों के रूप में स्कैन किए जाने वाले अतिरिक्त निर्देशिकाओं को परिभाषित करने में सक्षम हैं। जब परिभाषित किया जाता है, तो निर्देशिका और सभी उप-निर्देशिकाओं को उन फ़ाइलों के लिए स्कैन किया जाता है जो निष्पादन योग्य हैं। आप निर्देशिकाओं और फ़ाइलों को बाहर करने के लिए भी परिभाषित कर सकते हैं। जब सक्रिय हो जाता है, तो इन्हें लिनक्स ऑडिट स्क्रिप्ट में इंजेक्ट किया जाता है और जब भी यह चलाया जाता है (आमतौर पर एक खोज के हिस्से के रूप में) किया जाता है। यदि आप चाहते हैं कि ये स्क्रिप्ट में आप मैन्युअल रूप से लक्ष्य को कॉपी कर सकते हैं, तो मेनू का उपयोग करें -> डिस्कवर -> स्क्रिप्ट -> सूची स्क्रिप्ट और वहाँ से स्क्रिप्ट डाउनलोड करें।';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'आप हमेशा अपनी विशिष्ट आवश्यकताओं के अनुरूप ऑडिट स्क्रिप्ट को संशोधित करने के लिए स्वतंत्र हैं। जब भी आप अपग्रेड करते हैं तो आपको उन परिवर्तनों को शामिल करना होगा क्योंकि वे डिफ़ॉल्ट स्क्रिप्ट द्वारा ओवरराइट किए जाएंगे। मैं सुझाव देता हूं कि आपके संशोधित स्क्रिप्ट की मास्टर कॉपी को सहेजना, ओपन-ऑडिट को अपग्रेड करना, फिर नए डिफ़ॉल्ट स्क्रिप्ट और आपकी संशोधित स्क्रिप्ट के बीच एक अंतर चला रहा है और मतभेदों को लागू करता है। लेखा-परीक्षा स्क्रिप्ट मूल लिपियों (विंडोज VBScript है, अन्य सभी बैश हैं) हैं। सरल और आसान बदलाव - बस अपग्रेड करने से पहले अपने परिवर्तनों की एक प्रति सुनिश्चित करें।';

$GLOBALS["lang"]['You are running version'] = 'आप चल रहे संस्करण हैं';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'आप सामान्य ओपन-ऑडिट JSON आधारित API का उपयोग करके संग्रह तक पहुंच सकते हैं। किसी अन्य संग्रह की तरह। कृपया देखें';

$GLOBALS["lang"]['You can also'] = 'आप भी कर सकते हैं';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'आप पेज के नीचे भी देख सकते हैं, जिसमें एक टेबल दिखाया गया है कि उपकरण में बदलाव लागू होंगे।';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'आप नीचे दिए गए प्रारूप का उपयोग करके गुणों को भी निर्दिष्ट कर सकते हैं।';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'आप हमेशा अपने आभासी बुनियादी ढांचे (ESX, Azure, एट अल) पर फर्स्टवेव वीएम चला सकते हैं। फर्स्टवेव वीएम डेबियन लिनक्स चलाता है और ओएस लाइसेंसिंग चिंताओं और सीमाओं से मुक्त है। या अपनी पसंद के लिनक्स डिस्ट्रो पर स्थापित करें। हम Redhat 9, Ubuntu 20.04, 22.04 और 24.04 के साथ-साथ डेबियन 11 और 12 का समर्थन करते हैं।';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'आप स्वचालित रूप से एक स्थान पर डिवाइस असाइन कर सकते हैं';

$GLOBALS["lang"]['You can assign devices using custom'] = 'आप कस्टम का उपयोग कर उपकरणों को असाइन कर सकते हैं';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'आप एक रजिस्ट्री कुंजी बनाकर वास्तविक प्रशासक खाते का उपयोग किए बिना दूरस्थ मशीन का ऑडिट कर सकते हैं। प्रत्येक मशीन पर नीचे दिए गए कुंजी को ऑडिट करने और यह सुनिश्चित करने के लिए कि उपयोग किए जाने वाले उपयोगकर्ता क्रेडेंशियल एडमिनिस्ट्रेटर समूह का सदस्य है।';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'हालांकि, आप निश्चित रूप से नेटवर्क के भीतर उपकरणों पर किसी भी वैध क्रेडेंशियल के बिना एक खोज चला सकते हैं, हालांकि, यह जानकारी पुनः प्राप्त की गई है, जो ओपन-ऑडिट की एक बहुत छोटी सबसेट होगी। <i>साथ</i> क्रेडेंशियल';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'आप एक आधार रेखा बना सकते हैं, इसे उपकरणों के एक समूह के खिलाफ चला सकते हैं और परिणाम देख सकते हैं, अनुसूचित निष्पादन जोड़ सकते हैं, तुलना के लिए अधिक तालिकाओं को जोड़ सकते हैं (वर्तमान में केवल सॉफ्टवेयर, नेटस्टैट पोर्ट और उपयोगकर्ता सक्षम हैं)।';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'आप किसी भी मौजूदा ऑडिट स्क्रिप्ट के लिए सभी विकल्पों के साथ एक स्क्रिप्ट बना सकते हैं - सिर्फ विंडोज नहीं। AIX, ESX, Linux, OSX और Windows सभी कवर किए गए हैं।';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'आप संपूर्ण एकीकरण को किस सिस्टम (NMIS या Open-AudIT) को प्रति फ़ील्ड आधार पर अनुकूलित कर सकते हैं। ओपन-ऑडिट या एनएमआईएस में अद्यतन उपकरण बनाने और / या अद्यतन करने के विकल्प हैं। क्या हम एक बनाए गए या अद्यतन किए गए उपकरण पर खोज करते हैं और बहुत कुछ। पृष्ठ के दाहिने तरफ प्रत्येक आइटम के लिए स्पष्टीकरण हैं।';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'आप एक एप्लिकेशन को परिभाषित कर सकते हैं और इस एप्लिकेशन को एक उपकरण को जोड़ सकते हैं। एक उपकरण एक से अधिक एप्लिकेशन से जुड़ा हो सकता है। एक अनुप्रयोग एक से अधिक डिवाइस से जुड़ा हो सकता है।';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'आप उपकरण विवरण पृष्ठ पर प्रत्येक व्यक्तिगत डिवाइस के लिए अतिरिक्त फ़ील्ड के मान को संपादित कर सकते हैं। उपकरण विवरण स्क्रीन देखें, क्षेत्र युक्त अनुभाग खोलें और (यदि आपके पास है)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'आप डिवाइस सीड डिस्कवरी को मापदंडों के एक सख्त सेट के भीतर गिरने के लिए सीमित कर सकते हैं: <i>सबनेट को प्रतिबंधित</i> और <i>निजी सचिव</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'आप मैन्युअल रूप से उपकरणों को असाइन कर सकते हैं';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'आप यूआरएल में प्रारूप विकल्प प्रदान करके इसे ओवरराइड कर सकते हैं।';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'आप व्यक्तिगत उपकरणों का चयन अपने चेकबॉक्स को दाईं ओर पर क्लिक करके या टेबल के शीर्ष दाईं ओर चेकबॉक्स पर क्लिक करने वाले सभी उपकरणों का चयन कर सकते हैं (एक पेंसिल की तरह दिखने वाले एडिट बटन के नीचे)।';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'आप सिस्टम (डिवाइस) तालिका और मिलान में किसी भी विशेषता का चयन करके एकीकृत होने वाले उपकरणों का चयन कर सकते हैं (देखें मेनू → व्यवस्थापक → डेटाबेस → लिस्ट टेबल्स → सिस्टम फॉर फील्ड्स)। एक विशेषता मैच केवल एक ही मूल्य से मेल खा सकता है।';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'आप किसी भी सर्वर को एक कलेक्टर में मेनू पर जाकर बदल सकते हैं -> व्यवस्थापक -> कलेक्टर -> इसे एक कलेक्टर स्थापित करें। आपको सर्वर पर लॉग ऑन करने के लिए क्रेडेंशियल की आवश्यकता होगी यह इंस्टॉल करने के लिए रिपोर्ट करेगा।';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'आप ब्लू व्यू आइकन पर क्लिक करके देख सकते हैं। यदि आपके पास अनुमति है तो आप संपादित या हटा सकते हैं।';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'आपके पास PHP MBString एक्सटेंशन स्थापित नहीं है। इस विस्तार की आवश्यकता है।';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'आपके पास PHP SNMP एक्सटेंशन स्थापित नहीं है। यह विस्तार अत्यधिक अनुशंसित है।';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'आप अपने कर्मचारियों को एक ईमेल में इस URL को कॉपी और पेस्ट करना चाहते हैं।';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'आप सक्रिय निर्देशिका या OpenLDAP अपने उपयोगकर्ताओं को प्रमाणित करना चाहते हैं, लेकिन प्राधिकरण प्रदान नहीं करते हैं। ऐसा करने के लिए, सुनिश्चित करें <i>प्रमाणीकरण के लिए उपयोग</i> Y पर सेट है और <i>रोल्स के लिए उपयोग करें</i> N. क्रेडेंशियल को LDAP द्वारा मान्य किया जाएगा, लेकिन आपको उपयोगकर्ता को पहले से ही ओपन-ऑडिट में रोल बनाने और सौंपने की आवश्यकता होगी। यह भी <i>स्वचालित रूप से</i> लागू करना';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'आपने देखा होगा कि ये मैच नियम उन वस्तुओं के लिए हैं जो वैश्विक रूप से अद्वितीय नहीं हो सकते हैं। कुछ उदाहरण:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'आपको नया लाइसेंस जोड़ने से पहले अपने मौजूदा लाइसेंस को हटाना होगा।';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'आपको एक बेंचमार्क निष्पादित करने के लिए एसएसएच क्रेडेंशियल्स काम करना होगा। निम्नलिखित ऑपरेटिंग सिस्टम वर्तमान में समर्थित हैं: Centos 7, डेबियन 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. हम आगे की रिलीज के साथ इन पर विस्तार करने की योजना बना रहे हैं।';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'आपको संपूर्ण फ़ाइल को टेक्स्टबॉक्स में कॉपी और पेस्ट करना चाहिए। नीचे दिए गए मामले में, सभी पाठ कॉपी करें।';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'आपको संपादित_by और संपादित_date फ़ील्ड शामिल नहीं होना चाहिए। यह स्वचालित रूप से सेट किया जाएगा।';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'आपको केवल पाठ के दूसरे वाक्य को बदलना चाहिए,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'आपको ATTRIBUTE_NAME के लिए आवश्यक कॉलम (जैसे, org_id) का विकल्प देना चाहिए।';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'आपको एक हेडर लाइन का उपयोग करना चाहिए जिसमें उन स्तंभों के नाम शामिल हैं जिन्हें आप पॉप्युलेट करना चाहते हैं, फिर नीचे की अपनी डेटा लाइनें।';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'आपको केवल उन तालिकाओं का उपयोग करना चाहिए जिनमें आपको आवश्यक गुण शामिल हैं। मैं आमतौर पर एक बायाँ शामिल होने का उपयोग करता हूँ। उदाहरण के लिए';

$GLOBALS["lang"]['You will need a'] = 'आपको आवश्यकता होगी';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'आपको विंडोज फ़ायरवॉल पर WMI के लिए प्रत्येक लक्ष्य विंडोज कंप्यूटर पर खुलने की आवश्यकता होगी। विंडोज के लिए कोर सर्वर, यह सुनिश्चित करते हैं कि आप फायरवॉल कनेक्शन के अनुसार अनुमति दें';

$GLOBALS["lang"]['You will see a list of'] = 'आपको एक सूची मिलेगी';

$GLOBALS["lang"]['YouTube Tutorials'] = 'यूट्यूब ट्यूटोरियल';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'आपकी AWS EC2 API कुंजी।';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'आपका Google Compute credentials JSON के रूप में।';

$GLOBALS["lang"]['Your Host is'] = 'आपका होस्ट है';

$GLOBALS["lang"]['Your Licenses'] = 'आपका लाइसेंस';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'आपका Microsoft Azure क्लाइंट ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'आपका Microsoft Azure क्लाइंट गुप्त।';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'आपकी Microsoft Azure सदस्यता ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'आपका Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'आपका PHP संस्करण है';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'आपके SQL को उन विशेषताओं का चयन करने के लिए जो इस क्वेरी को पॉप्युलेट करेंगे।';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'अपने SQL को उन उपकरणों का चयन करने के लिए जो इस समूह को पॉप्युलेट करेंगे।';

$GLOBALS["lang"]['Your SSH key.'] = 'आपकी SSH कुंजी।';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'उस बादल मूल एपीआई के अनुसार आपका अभिगम क्रेडेंशियल।';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'आपका डेटा आपका डेटा है। आप इसे किसी भी समय पसंद कर सकते हैं। हम सहायक रूप से CSV, JSON और XML को निर्यात प्रदान करते हैं। और हम एक JSON एपीआई है। और आप कस्टम रिपोर्ट लिख सकते हैं और CSV, XML और JSON में उन आउटपुट को प्राप्त कर सकते हैं! फिर, यह आपका डेटा है - कोई और नहीं। आप आश्वस्त हो सकते हैं कि आपके डेटा की सुरक्षा आपके हाथों में है।';

$GLOBALS["lang"]['Your database platform is'] = 'आपका डेटाबेस प्लेटफॉर्म है';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'इस संबंध की स्थिति का आपका विवरण (संशोधित, सेवानिवृत्त, आदि)।';

$GLOBALS["lang"]['Your description of this item.'] = 'इस मद का आपका विवरण।';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'सॉफ्टवेयर के इस टुकड़े के लिए आपका सामान्य नाम';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'सॉफ्टवेयर के इस टुकड़े के लिए आपका सामान्य संस्करण';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'अपने उपयोगकर्ता को अब लॉग इन करने में सक्षम होना चाहिए <i>Entra लोगो</i> ओपन-ऑडिट लोगोन पेज पर बटन। जैसा कि ऊपर उल्लेख किया गया है, यदि लोगो विफल हो जाता है, तो कृपया लॉगफ़ाइल की जांच करें और उपयोगकर्ताओं को सत्यापित करें <i>पसंदीदा उपयोगकर्ता नाम</i>।<br/><br/>यह सब कुछ होना चाहिए। अब आपके उपयोगकर्ताओं को याद रखने के लिए क्रेडेंशियल का एक कम सेट होना चाहिए!<br/><br/>हमेशा के रूप में, यदि आप इस सुविधा के साथ परेशान हैं, तो कृपया ईमेल करें';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'अपने उपयोगकर्ता को अब लॉग इन करने में सक्षम होना चाहिए <i>OKTA लोगो</i> ओपन-ऑडिट लोगोन पेज पर बटन। जैसा कि ऊपर उल्लेख किया गया है, यदि लोगो विफल हो जाता है, तो कृपया लॉगफ़ाइल की जांच करें और उपयोगकर्ताओं को सत्यापित करें <i>नाम</i>।<br/><br/>यह सब कुछ होना चाहिए। अब आपके उपयोगकर्ताओं को याद रखने के लिए क्रेडेंशियल का एक कम सेट होना चाहिए!<br/><br/>हमेशा के रूप में, यदि आप इस सुविधा के साथ परेशान हैं, तो कृपया ईमेल करें';

$GLOBALS["lang"]['Your web server is'] = 'आपका वेब सर्वर है';

$GLOBALS["lang"]['Zambia'] = 'जाम्बिया';

$GLOBALS["lang"]['Zimbabwe'] = 'जिम्बाब्वे';

$GLOBALS["lang"]['a String'] = 'स्ट्रिंग';

$GLOBALS["lang"]['active'] = 'सक्रिय';

$GLOBALS["lang"]['active directory'] = 'सक्रिय निर्देशिका';

$GLOBALS["lang"]['active/active'] = 'सक्रिय / सक्रिय';

$GLOBALS["lang"]['active/passive'] = 'सक्रिय / निष्क्रिय';

$GLOBALS["lang"]['advertisement'] = 'विज्ञापन';

$GLOBALS["lang"]['alert'] = 'चेतावनी';

$GLOBALS["lang"]['all'] = 'सब';

$GLOBALS["lang"]['allocated'] = 'आवंटित';

$GLOBALS["lang"]['amazon'] = 'अमेज़न';

$GLOBALS["lang"]['an Integer'] = 'Integer';

$GLOBALS["lang"]['and'] = 'और';

$GLOBALS["lang"]['and / or'] = 'या';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'और एक समर्थन टिकट बनाया जाएगा और कार्रवाई की जाएगी।';

$GLOBALS["lang"]['and another'] = 'अन्य';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'और नवीनतम रिलीज स्वयं इंस्टालर डाउनलोड करें। आपको यह पता लगाने के लिए पेज को नीचे स्क्रॉल करना होगा।';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'और अनुप्रयोगों के लिए जाना -> एंटरप्राइज़ एप्लीकेशन (फर बायीं मेनू), फिर क्लिक करें <i>नया अनुप्रयोग</i>।';

$GLOBALS["lang"]['and its current time is'] = 'इसका वर्तमान समय है';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'और आज से पहले एक वारंटी समाप्ति तिथि के लिए लग रहा है।';

$GLOBALS["lang"]['and review what is possible.'] = 'और समीक्षा क्या संभव है।';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'और साइन-आउट रीडायरेक्ट करें URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'और अंतिम पंक्तियाँ सबसे अधिक ब्याज की संभावना होगी। इन पंक्तियों को आपको सटीक बिंदु देना चाहिए जिस पर लॉगिन विफल रहा।';

$GLOBALS["lang"]['antivirus'] = 'एंटीवायरस';

$GLOBALS["lang"]['application'] = 'आवेदन';

$GLOBALS["lang"]['approved'] = 'अनुमोदित';

$GLOBALS["lang"]['are required.'] = 'आवश्यक हैं।';

$GLOBALS["lang"]['are used.'] = 'उपयोग किया जाता है।';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'इस बंदरगाह पर जवाब देने वाले उपकरण के रूप में।<br/>इससे कुछ ग्राहक मुद्दे पैदा हुए हैं जहां फायरवॉल एक गैर मौजूदा डिवाइस की ओर से जवाब देते हैं, और इसलिए झूठे सकारात्मक डिवाइस का पता लगाने का कारण बनता है। अब हमारे पास यह विशेषता प्रति स्कैन सेट करने के लिए उपलब्ध है।';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'जैसा कि संदर्भ बिंदु और सिस्टम की जांच के माध्यम से सभी आभासी मशीनों को फ़िल्टर करता है। वीएम के लिए सीरियल फील्ड।';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'assuming working and ग्राहक populated DNS';

$GLOBALS["lang"]['attribute'] = 'विशेषता';

$GLOBALS["lang"]['auto'] = 'ऑटो';

$GLOBALS["lang"]['backup'] = 'बैकअप';

$GLOBALS["lang"]['banned'] = 'प्रतिबंधित';

$GLOBALS["lang"]['blog'] = 'ब्लॉग';

$GLOBALS["lang"]['blue'] = 'नीला';

$GLOBALS["lang"]['bottom'] = 'नीचे';

$GLOBALS["lang"]['building'] = 'इमारत';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'उपयोगकर्ता प्रमाणीकरण के लिए इस्तेमाल किया जा सकता है (उपयोगकर्ताओं का नाम और पासवर्ड सही है) साथ ही उपयोगकर्ता प्राधिकरण (क्या भूमिकाएं और orgs उपयोगकर्ता के पास हैं)।<br/><br/>यदि कोई उपयोगकर्ता कॉन्फ़िगर LDAP में नहीं है, लेकिन ओपन-ऑडिट में है (उदाहरण के लिए:) <i>व्यवस्थापक</i> उपयोगकर्ता), ओपन-ऑडिट प्रमाणीकरण और प्राधिकरण दोनों के लिए खुद का उपयोग करने के लिए वापस आ जाएगा।<br/><br/>ओपन-ऑड आईटी भूमिकाओं और अंग के लिए विशिष्ट LDAP समूहों का उपयोग करता है। उपयोगकर्ता को ओपन-ऑडिट के लिए इन समूह (s) का प्रत्यक्ष सदस्य होना चाहिए ताकि यह निर्धारित किया जा सके कि उपयोगकर्ता एक्सेस।<br/><br/>जब सही ढंग से कॉन्फ़िगर किया गया है, तो LDAP उपयोग उपयोगकर्ताओं को ओपन-ऑडिट में बनाने की आवश्यकता को पूरी तरह से हटा सकता है। बस प्रमाणीकरण और प्राधिकरण दोनों के लिए LDAP का उपयोग करने के लिए ओपन-ऑडिट को कॉन्फ़िगर करें। यदि उपयोगकर्ता ओपन-ऑडआईटी में मौजूद नहीं है लेकिन एलडीएपी में मौजूद है और उनकी क्रेडेंशियल सही हैं और वे आवश्यक समूहों के सदस्य हैं ओपन-ऑडआईटी स्वचालित रूप से उपयोगकर्ता खाता बना देगा।';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'अब फ़ाइलों की एक फ़ाइल या निर्देशिका के बारे में विवरण पुनर्प्राप्त कर सकते हैं और ओपन-ऑडिट डेटाबेस में अन्य विशेषताओं के अनुसार परिवर्तन के लिए इन फ़ाइलों की निगरानी कर सकते हैं। यह सुविधा लिनक्स ओपन-ऑडिट सर्वर के लिए बॉक्स से बाहर काम करती है, लेकिन विंडोज ओपन-ऑडिट सर्वर के तहत सर्विस अकाउंट नाम में बदलाव की जरूरत है। समर्थित ग्राहक विंडोज और लिनक्स हैं।';

$GLOBALS["lang"]['changed'] = 'बदल गया';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'चुना गया। वहाँ से अगर WMI, SSH या SNMP के लिए एक बंदरगाह का पता लगाया गया है कि डिवाइस का जवाब दे आगे queried है का उपयोग कर ';

$GLOBALS["lang"]['cloud'] = 'बादल';

$GLOBALS["lang"]['code'] = 'कोड';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'संग्रह और विवरण पृष्ठ निष्पादित करने के लिए एक आइकन है।';

$GLOBALS["lang"]['collector'] = 'कलेक्टर';

$GLOBALS["lang"]['collectors'] = 'कलेक्टर';

$GLOBALS["lang"]['column'] = 'स्तंभ';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'कॉलम में या तो शामिल होंगे <i>Y</i> या <i>n</i>। यह इंगित करता है कि यह पंक्ति वर्तमान में डिवाइस पर मौजूद है। उदाहरण के लिए सॉफ्टवेयर स्थापित किया जा सकता है (जो परिणामस्वरूप होता है) <i>सॉफ्टवेयर = y</i>लेकिन बाद में लेखा परीक्षा में यह पता नहीं लगाया जा सकता है। इसके बाद ओपन-ऑडिट इस पंक्तियों को वर्तमान विशेषता में बदल देगा <i>n</i>।';

$GLOBALS["lang"]['column. The'] = 'स्तंभ। The The most of the';

$GLOBALS["lang"]['compute'] = 'समझौता';

$GLOBALS["lang"]['config'] = 'विन्यास';

$GLOBALS["lang"]['console'] = 'कंसोल';

$GLOBALS["lang"]['contains'] = 'शामिल';

$GLOBALS["lang"]['create'] = 'बनाना';

$GLOBALS["lang"]['created'] = 'बनाया';

$GLOBALS["lang"]['credentials'] = 'परिचय पत्र';

$GLOBALS["lang"]['critical'] = 'महत्वपूर्ण';

$GLOBALS["lang"]['cve'] = 'हिन्दी';

$GLOBALS["lang"]['database'] = 'डेटाबेस';

$GLOBALS["lang"]['debug'] = 'डिबग';

$GLOBALS["lang"]['delegated'] = 'प्रतिनिधि';

$GLOBALS["lang"]['delete'] = 'हटाना';

$GLOBALS["lang"]['deleted'] = 'हटाना';

$GLOBALS["lang"]['denied'] = 'इनकार';

$GLOBALS["lang"]['details'] = 'विवरण';

$GLOBALS["lang"]['devices'] = 'उपकरण';

$GLOBALS["lang"]['digitalocean'] = 'Digitalocean';

$GLOBALS["lang"]['discoveries'] = 'खोज';

$GLOBALS["lang"]['documentation for further details.'] = 'अधिक जानकारी के लिए प्रलेखन।';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'करता है <strong>नहीं</strong> निम्नलिखित के लिए vulnerability रिपोर्ट प्रदान करें';

$GLOBALS["lang"]['does not equal'] = 'बराबर नहीं';

$GLOBALS["lang"]['emergency'] = 'आपातकालीन';

$GLOBALS["lang"]['entra'] = 'इंट्रा';

$GLOBALS["lang"]['equals'] = 'बराबर';

$GLOBALS["lang"]['error'] = 'त्रुटि';

$GLOBALS["lang"]['established'] = 'स्थापित';

$GLOBALS["lang"]['excluded'] = 'बाहर रखा';

$GLOBALS["lang"]['expired'] = 'समाप्त';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'चरम - जिसके बिना, संगठन विफल हो जाएगा।

बहुत अधिक - संगठनों के अस्तित्व के लिए आवश्यक कार्य और तुरंत बहाल किया जाना चाहिए।

उच्च - महत्वपूर्ण कार्य जिन्हें जल्दी से बहाल किया जाना चाहिए लेकिन इसमें थोड़ी देर की वसूली समय हो सकता है।

मध्यम - कार्य जो आवश्यक हैं लेकिन लंबे समय तक सहन कर सकते हैं।

कम - गैर-आवश्यक कार्य जो महत्वपूर्ण प्रभाव के बिना देरी हो सकती है।

unassigned - तब तक डिफ़ॉल्ट।';

$GLOBALS["lang"]['fail'] = 'असफल';

$GLOBALS["lang"]['false'] = 'झूठ';

$GLOBALS["lang"]['file'] = 'फ़ाइल';

$GLOBALS["lang"]['firewall'] = 'फायरवाल';

$GLOBALS["lang"]['first'] = 'पहला';

$GLOBALS["lang"]['fixed'] = 'निर्धारित';

$GLOBALS["lang"]['floor'] = 'मंजिल';

$GLOBALS["lang"]['for'] = 'के लिए';

$GLOBALS["lang"]['for authentication'] = 'प्रमाणीकरण के लिए';

$GLOBALS["lang"]['for this information.'] = 'इस जानकारी के लिए।';

$GLOBALS["lang"]['from Audit Script Result'] = 'ऑडिट स्क्रिप्ट परिणाम से';

$GLOBALS["lang"]['from NMIS'] = 'NMIS से';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'पते से स्थानीयहोस्ट (LRPC का उपयोग) आवेदन कंटेनर में चल रहा है';

$GLOBALS["lang"]['front'] = 'सामने';

$GLOBALS["lang"]['front-left'] = 'फ्रंट-लेफ्ट';

$GLOBALS["lang"]['front-right'] = 'फ्रंट-राइट';

$GLOBALS["lang"]['github'] = 'Github';

$GLOBALS["lang"]['google'] = 'गूगल';

$GLOBALS["lang"]['greater or equals'] = 'अधिक या बराबर';

$GLOBALS["lang"]['greater than'] = 'अधिक से अधिक';

$GLOBALS["lang"]['group'] = 'समूह';

$GLOBALS["lang"]['has not been set'] = 'निर्धारित नहीं किया गया';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'विंडोज पीसी के लक्ष्य के लिए एक कामकाजी रिवर्स DNS निराकरण योग्य आईपी है।';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'निष्पादित करने की क्षमता है। पर';

$GLOBALS["lang"]['head'] = 'सिर';

$GLOBALS["lang"]['here'] = 'यहाँ';

$GLOBALS["lang"]['high availability'] = 'उच्च उपलब्धता';

$GLOBALS["lang"]['howto'] = 'कैसे';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'यदि आप लिनक्स वर्चुअल मशीन को क्लोन करते हैं, तो जब तक आप मैन्युअल रूप से इस (और मेरे अनुभव में, लोग ऐसा नहीं करते) को फिर से उत्पन्न नहीं करते हैं।';

$GLOBALS["lang"]['ignored'] = 'अनदेखा';

$GLOBALS["lang"]['import the example device data'] = 'उदाहरण डिवाइस डेटा आयात करें';

$GLOBALS["lang"]['in'] = 'में';

$GLOBALS["lang"]['in Enterprise.'] = 'उद्यम में।';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'इनपुट में निम्नलिखित मान हो सकते हैं।';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'आउटपुट में निम्नलिखित मान हो सकते हैं।';

$GLOBALS["lang"]['inactive'] = 'निष्क्रिय';

$GLOBALS["lang"]['incomplete'] = 'अधूरी';

$GLOBALS["lang"]['info'] = 'जानकारी';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'इंस्टॉलर अपने मानक स्थापित स्थानों में Nmap की उपस्थिति के लिए परीक्षण करेगा';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, पाठ, bool (y / n), आदि';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'राष्ट्रीय मानक और प्रौद्योगिकी संस्थान द्वारा बनाए रखा अमेरिकी मानक है';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'सूचना सुरक्षा के प्रबंधन के लिए एक अंतरराष्ट्रीय मानक है। यह सूचना सुरक्षा प्रबंधन प्रणाली (ISMS) की स्थापना, कार्यान्वयन, रखरखाव और लगातार सुधार के लिए एक ढांचा प्रदान करता है।';

$GLOBALS["lang"]['is based upon'] = 'पर आधारित है';

$GLOBALS["lang"]['is licensed to'] = 'लाइसेंस प्राप्त है';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'सूची में आगे है और ओपन-ऑडिट पासवर्ड और कुंजी प्रमाणीकरण का उपयोग कर सकते हैं। ओपन-ऑडआईटी भी एक सुडो सक्षम उपयोगकर्ता का उपयोग सीधे रूट उपयोग के विपरीत कर सकता है (हालांकि यह रूट का भी उपयोग कर सकता है)। सर्वोत्तम परिणामों के लिए, रूट उपयोगकर्ता या एक सुडो सक्षम उपयोगकर्ता का उपयोग किया जाना चाहिए (विकि पर रूट और टारगेट क्लाइंट कॉन्फ़िगरेशन के बिना लिनक्स को ऑडिट करना देखें)। विंडोज डिवाइस भी एसएसएच चला सकते हैं, हालांकि अगर ओपन-ऑडिट पता लगाता है कि यह एसएसएच प्रश्नों को रोक देगा और इसके बजाय WMI (WMI credentials) का उपयोग करेगा।';

$GLOBALS["lang"]['is the link to the'] = 'के लिए लिंक है';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'विशिष्ट तालिकाओं और उनके स्तंभों को देखने के लिए आइटम। यह आपको वास्तव में क्या जरूरत है, बल्कि स्कीमा निर्माण स्क्रिप्ट के MySQL कंसोल के माध्यम से ट्रॉल करने के बजाय, ठीक से खोजने में सक्षम होगा।';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'लेट / लंबे और प्रदर्शित मानचित्र को पुनर्प्राप्त करने के लिए आवश्यक कुंजी। देखें';

$GLOBALS["lang"]['left'] = 'बाएं';

$GLOBALS["lang"]['less or equals'] = 'कम या बराबर';

$GLOBALS["lang"]['less than'] = 'कम से कम';

$GLOBALS["lang"]['license'] = 'लाइसेंस';

$GLOBALS["lang"]['licenses'] = 'लाइसेंस';

$GLOBALS["lang"]['like'] = 'लाइक';

$GLOBALS["lang"]['line'] = 'रेखा';

$GLOBALS["lang"]['list'] = 'सूची';

$GLOBALS["lang"]['list View, using the Create button'] = 'सूची व्यू, का उपयोग करके बनाएँ बटन';

$GLOBALS["lang"]['load balancing'] = 'लोड संतुलन';

$GLOBALS["lang"]['location'] = 'स्थान';

$GLOBALS["lang"]['locations'] = 'स्थान';

$GLOBALS["lang"]['managed'] = 'प्रबंधित';

$GLOBALS["lang"]['methods'] = 'विधि';

$GLOBALS["lang"]['microsoft'] = 'माइक्रोसॉफ्ट';

$GLOBALS["lang"]['mount point'] = 'माउंट प्वाइंट';

$GLOBALS["lang"]['must'] = 'होना';

$GLOBALS["lang"]['network'] = 'नेटवर्क';

$GLOBALS["lang"]['news'] = 'समाचार';

$GLOBALS["lang"]['no'] = 'नहीं';

$GLOBALS["lang"]['node'] = 'नोड';

$GLOBALS["lang"]['none'] = 'कोई नहीं';

$GLOBALS["lang"]['normal'] = 'सामान्य';

$GLOBALS["lang"]['not applicable'] = 'लागू नहीं';

$GLOBALS["lang"]['not in'] = 'नहीं';

$GLOBALS["lang"]['not like'] = 'पसंद नहीं';

$GLOBALS["lang"]['notice'] = 'नोटिस';

$GLOBALS["lang"]['notification'] = 'अधिसूचना';

$GLOBALS["lang"]['okta'] = 'ओक्टा';

$GLOBALS["lang"]['on devices where'] = 'उपकरणों पर जहां';

$GLOBALS["lang"]['openldap'] = 'खुला';

$GLOBALS["lang"]['optimized'] = 'अनुकूलित';

$GLOBALS["lang"]['optionally '] = 'वैकल्पिक ';

$GLOBALS["lang"]['or'] = 'या';

$GLOBALS["lang"]['or the GitHub page at'] = 'या GitHub पृष्ठ पर';

$GLOBALS["lang"]['other'] = 'अन्य';

$GLOBALS["lang"]['package'] = 'पैकेज';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'पृष्ठ अपने LDAP सर्वर को मेनू से निर्यात करें -> व्यवस्थापक -> LDAP सर्वर -> JSON को विवरण और इस डेटा को भी बचाते हैं।';

$GLOBALS["lang"]['partition'] = 'विभाजन';

$GLOBALS["lang"]['pass'] = 'पास';

$GLOBALS["lang"]['pending'] = 'लंबित';

$GLOBALS["lang"]['performance'] = 'प्रदर्शन';

$GLOBALS["lang"]['performed'] = 'प्रदर्शन';

$GLOBALS["lang"]['permission'] = 'अनुमति';

$GLOBALS["lang"]['permissions required per endpoint'] = 'प्रति समापन बिंदु के लिए आवश्यक अनुमतियां';

$GLOBALS["lang"]['pie'] = 'पाई';

$GLOBALS["lang"]['planning'] = 'योजना';

$GLOBALS["lang"]['predictable'] = 'भविष्यवाणी';

$GLOBALS["lang"]['query'] = 'क्वेरी';

$GLOBALS["lang"]['rear'] = 'पीछे';

$GLOBALS["lang"]['rear-left'] = 'रियर-left';

$GLOBALS["lang"]['rear-right'] = 'रियर राइट';

$GLOBALS["lang"]['regex'] = 'रेगेक्स';

$GLOBALS["lang"]['release'] = 'रिलीज';

$GLOBALS["lang"]['removed from display, but has been set'] = 'प्रदर्शन से हटा दिया गया है, लेकिन इसे सेट किया गया है';

$GLOBALS["lang"]['reserved'] = 'आरक्षित';

$GLOBALS["lang"]['right'] = 'सही';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'आप इसे संपादित करने के लिए फ़ील्ड मान पर क्लिक कर सकते हैं।';

$GLOBALS["lang"]['role'] = 'भूमिका';

$GLOBALS["lang"]['room'] = 'कमरा';

$GLOBALS["lang"]['row'] = 'पंक्ति';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'निम्नलिखित त्रुटि के कारण सेवा शुरू करने में विफल रही';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'इसलिए ओपन-ऑडिट उचित संगठन को अपनी क्वेरी को प्रतिबंधित करने के लिए जानता है।';

$GLOBALS["lang"]['stand-alone'] = 'स्टैंडअलोन';

$GLOBALS["lang"]['standard'] = 'मानक';

$GLOBALS["lang"]['starts with'] = 'शुरू';

$GLOBALS["lang"]['storage'] = 'भंडारण';

$GLOBALS["lang"]['subnet'] = 'सबनेट';

$GLOBALS["lang"]['table'] = 'टेबल';

$GLOBALS["lang"]['table and insert the original rows.'] = 'तालिका और मूल पंक्तियों को सम्मिलित करें।';

$GLOBALS["lang"]['team'] = 'टीम';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'पाठ पहला सरणी सूचकांक है और इसे छोड़ दिया जाना चाहिए। सूचकांक का उपयोग टेम्पलेट्स में अनुवादित पाठ को देखने के लिए किया जाता है।';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'फिर टेबल के लिए विवरण बटन पर क्लिक करें।';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'फिर टेबल के लिए विवरण बटन पर क्लिक करें। डिवाइस विवरण में संग्रहीत किए जाते हैं';

$GLOBALS["lang"]['timestamp'] = 'टाइमस्टैम्प';

$GLOBALS["lang"]['to'] = 'to';

$GLOBALS["lang"]['to create an item of this type'] = 'इस प्रकार का एक आइटम बनाने के लिए';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'यूआरएल के लिए आपको पूर्ण डेटाबेस प्रविष्टि मिलेगी, जिसमें सभी घटक तालिकाओं, किसी दिए गए डिवाइस के शामिल हैं।';

$GLOBALS["lang"]['to the user'] = 'उपयोगकर्ता को';

$GLOBALS["lang"]['top'] = 'शीर्ष';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'शीर्ष रहस्य - सैन्य / सरकारी वर्गीकरण। प्रकटीकरण राष्ट्रीय सुरक्षा के लिए असाधारण रूप से गंभीर खतरा पैदा करेगा।

गुप्त - सैन्य / सरकारी वर्गीकरण। प्रकटीकरण राष्ट्रीय सुरक्षा के लिए गंभीर क्षति का कारण होगा।

गोपनीय - सैन्य / सरकार और निजी क्षेत्र वर्गीकरण। गोपनीय डेटा में व्यापार रहस्य, बौद्धिक डेटा, अनुप्रयोग प्रोग्रामिंग कोड और अन्य डेटा शामिल हैं जो संगठन को गंभीर रूप से प्रभावित कर सकते हैं यदि अनधिकृत प्रकटीकरण हुआ है। इस स्तर पर डेटा केवल उन संगठन में कर्मियों के लिए उपलब्ध होगा जिनकी कार्य की जरूरत है, या सीधे एक्सेस डेटा से संबंधित है। गोपनीय डेटा तक पहुंच को आमतौर पर प्रत्येक एक्सेस के लिए प्राधिकरण की आवश्यकता होती है।

निजी क्षेत्र वर्गीकरण निजी डेटा में कर्मियों से संबंधित कोई जानकारी शामिल है, जिसमें मानव संसाधन रिकॉर्ड, चिकित्सा रिकॉर्ड और वेतन जानकारी शामिल है, जिसका उपयोग केवल संगठन के भीतर ही किया जाता है।

संवेदनशील - सैन्य / सरकार और निजी क्षेत्र वर्गीकरण। संवेदनशील डेटा में संगठनात्मक वित्तीय जानकारी शामिल है और इसकी सीआईए और सटीकता सुनिश्चित करने के लिए अतिरिक्त उपायों की आवश्यकता होती है। प्रकटीकरण राष्ट्रीय सुरक्षा को नुकसान पहुंचा सकता है।

सार्वजनिक - निजी क्षेत्र वर्गीकरण। सार्वजनिक डेटा वह डेटा है जो आम तौर पर जनता के साथ साझा किया जाता है और संगठन पर नकारात्मक प्रभाव नहीं डालेगा। सार्वजनिक डेटा के उदाहरणों में शामिल हैं कि संगठन में कितने लोग काम करते हैं और कौन से उत्पाद एक संगठन निर्माण या बिक्री करता है।

अवर्गीकृत - सैन्य / सरकारी वर्गीकरण। किसी भी जानकारी को आम तौर पर राष्ट्रीय हित के लिए किसी भी खतरे के बिना जनता को वितरित किया जा सकता है।

unassigned - तब तक डिफ़ॉल्ट।';

$GLOBALS["lang"]['traffic'] = 'यातायात';

$GLOBALS["lang"]['true'] = 'सच';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'सही या झूठी (JSON संदर्भ में)';

$GLOBALS["lang"]['unallocated'] = 'unallocated';

$GLOBALS["lang"]['unauthorised'] = 'अनधिकृत';

$GLOBALS["lang"]['unchanged'] = 'अपरिवर्तित';

$GLOBALS["lang"]['unknown'] = 'अज्ञात';

$GLOBALS["lang"]['unmanaged'] = 'अप्रबंधित';

$GLOBALS["lang"]['unused'] = 'अप्रयुक्त';

$GLOBALS["lang"]['update'] = 'अपडेट';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'अपने उपकरणों से एकत्रित डेटा का उपयोग करता है और प्रदान किए गए मूल्य के साथ स्थापित सॉफ्टवेयर से मेल खाता है, यह गणना करता है कि कितने लाइसेंस का उपयोग किया गया है और कितने बचे हैं। यह जंगली कार्ड के उपयोग की अनुमति देता है <i>मैच स्ट्रिंग</i> वह क्षेत्र जो सॉफ्टवेयर से मेल खाता है। नाम विशेषता।';

$GLOBALS["lang"]['using the main menu items.'] = 'मुख्य मेनू आइटम का उपयोग करना।';

$GLOBALS["lang"]['valid'] = 'मान्य';

$GLOBALS["lang"]['version'] = 'संस्करण';

$GLOBALS["lang"]['virtualisation'] = 'वर्चुअलाइजेशन';

$GLOBALS["lang"]['warning'] = 'चेतावनी';

$GLOBALS["lang"]['web'] = 'वेब';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'स्थानीय और दूरस्थ पहुँच अनुमतियों के साथ सेट।';

$GLOBALS["lang"]['with devices::update permission.'] = 'उपकरणों के साथ: अद्यतन अनुमति।';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'साइन-ऑन रीडायरेक्ट यूआरआई के साथ';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'डेवलपर्स से परिचित तरीके से सरल और सहज पहुंच प्रदान करने के इरादे से। इस एपीआई के अलावा, वेब इंटरफ़ेस एक ही अनुरोध प्रारूप का उपयोग करेगा और कुछ अतिरिक्त कार्यों की आपूर्ति करेगा (उदाहरण के लिए: एचटीएमएल आइटम बनाने के लिए फॉर्म)।';

$GLOBALS["lang"]['yes'] = 'हाँ';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'आपको फर्स्टवेव उत्पादों का उपयोग करने के लिए एक उच्च चार्ट लाइसेंस की आवश्यकता नहीं है। लाइसेंस';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'आप किसी भी उपकरण को उस संगठन या स्थान पर निर्दिष्ट करेंगे।';

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

