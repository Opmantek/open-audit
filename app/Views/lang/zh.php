<?php
$GLOBALS["lang"][' Default, currently '] = ' 默认, 目前 ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' 如果事情不能如预期的那样奏效,你的第一件事就是检查日志.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' 现在支持语言文件。 要更改用户使用此语言,请单击 ';

$GLOBALS["lang"][' seconds'] = ' 秒数';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ',但无需记住单独的一套登录证书。';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ',其中我们提供30多个作为默认集。 专业用户无法改变这些功能,但企业用户拥有完整的自定义能力——包括创建自己的功能.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ',你吗? <i>必须</i> 正在使用您的 Open-AudIT 服务器上的 https 来为 Auth 使用 Entra 。 请配置要使用的 Apache <strong>网页</strong> 在为认证配置 Entra 之前。';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '。 。 。 要启用此功能, 请编辑配置项 ';

$GLOBALS["lang"]['10 Minutes'] = '10分钟';

$GLOBALS["lang"]['15 Minutes'] = '15分钟';

$GLOBALS["lang"]['30 Minutes'] = '30分钟';

$GLOBALS["lang"]['5 Minutes'] = '5分钟';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93项控制分为组织、人员、物质和技术类别';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>说明</strong> 您正在从本地的 Open-AudIT 服务器访问此 URL 。 在其它机器上运行时, 下载的脚本将无法提交 。 如果需要审计其他机器,请从任何远程机器下载脚本,不要在Open-AudIT服务器本身上使用浏览器.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">说明</strong> - 您必须有工作 SSH 或 SSH 密钥证书来执行目标设备的基准 。</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>基线</strong> - 包含基线定义和个别政策测试的总体文件。<br/> <br/> <strong>政策</strong> - 基线范围内的个别试验。 每个测试都是针对特定项目. 例如,测试SSH 1.2.3版本。<br/> <br/> <strong>细节</strong> - 基线可以比较净统计端口、用户和软件。<br/> <br/> <strong>软件</strong> - 为了比较软件,我们检查名称和版本。 由于版本编号并非全部在格式上标准化,当我们收到审计结果时,我们创建了一个新的属性,称为软件_插件,与每个软件包的其他软件细节一起存储在数据库中. 因此,使用软件政策的基线在运行于一个未经1.10(至少)审计的设备时不会起作用。 软件政策可以针对版本的"对等","大于"或"等于或大于"进行测试.<br/> <br/> <strong>净点端口</strong> - Netstat Ports使用端口号,协议和程序的组合. 如果所有人都在场,则政策通过。<br/> <br/> <strong>用户</strong> -用户的工作类似于Netstat Ports. 如果用户有匹配的名称,状态和密码细节(可更改,到期,需要),则政策通过.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>一个位置是一个物理地址,可以拥有与之相关的设备.<br/> <br/>您可以指定它坐标( lat/ 长) , 如果指定了设备, 位置将会出现在 Open- AudIT Enterprise 地图上 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>网络来源于发现条目和设备属性.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>汇总将显示一个项目列表,按定义中指定的属性的不同值分组。 <code>table</code> 和 <code>column</code> 属性。<br/> <br/>当执行一个摘要时,结果将是列出一个与此相关的不同数值清单。 <code>table</code> 和 <code>column</code>。 。 。 在允许用户查看匹配设备的值上会有链接.<br/> <br/>如果属性 <code>extra_columns</code> 中,生成的页面除标准设备列外,还将包含这些列。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>特工让你在没有发现的情况下审核个人电脑 安装代理, 它会每天与服务器进行登录, 并自己审计 。 如果你的计算机有防火墙 审计数据仍然会在Open-AudIT中出现</p><p>测试时 <strong>若为</strong> 代理人应当进行操作,所有三项测试都必须通过(如果测试确定的话)。 <strong>礛</strong> 采取了这些行动。</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>应用程序由您,用户定义,并为Open-AudIT存储,以便使用和连接设备.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>属性被存储用于 Open-AudIT 用于特定字段.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>能够确定哪些机器配置相同,是系统管理和审计的主要部分 — — 而现在报告情况将变得简单和自动化。 一旦您定义了基线, 它将自动运行在预定时间表上的一组设备上 。 这些已执行基线的产出将可供网页浏览、输入第三方系统或甚至作为印刷报告。<br/> <br/> 基线使您能够将审计数据与之前定义的一组属性(你的基线)结合起来,以确定设备的合规性.<br/> <br/> 例如,您可能从运行 Centos 6 的设备创建基线,该设备在集群中充当您的 apache 服务器之一 。 您知道这个特定的服务器是按您想要的方式配置的, 但是您不确定集群中的其他服务器是否配置完全相同 。 基线可以让你确定这一点。<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>集群存储在Open-AudIT中,用于关联设备,以便更好地记录,管理和估计许可成本.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>组件是一个通用术语,用于存储设备属性的表格。 这些表格是: access_point, arp, bios, 证书, cli_config, 磁盘, dns, 文件, ip, 许可证, 日志, 内存, 模块, 显示器, 母板, netstat, 网络, nmap, 光学, 页面文件, 分区, 政策, print_queue, 处理器, 收音机, 路由, san, scsi, 服务器, 服务器_项目, 服务, 共享, 软件, 软件_ key, 声音, 任务, usb, 用户, 用户_组, 变量, 视频, vm, 窗口.</p><p> 此外,我们还将以下表格归类为设备相关:应用程序、附件、集群、证书、图像。</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>证书保存在数据库时会加密.<br/> <br/>当发现器运行时,设备会先检索并测试其证书,以便连接(从 <code>credential</code> 页:1 如果失败, 那么与给定 Org 相关的证书 <code>credentials.org_id</code> 也对该装置进行测试。 工作证书保存在证书表的单个设备级别(注-表名中没有"s").<br/> <br/>SSH 密钥在 SSH 用户名/ 密码前进行测试. 在测试 SSH 时, 证书也会被标记为与 sudo 合作或成为 root 。<br/> <br/>为方便使用,Windows密码不应包含单引号或双引号. 这是远程WMI限制,而不是Open-AudIT限制.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>证书用于访问设备。<br/> <br/>配置证书应该是您安装 Open-AudIT 后首先做的事情之一.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>确定你的架子 并分配设备到他们的位置 你已经在Open-AudIT中拥有了你的设备,你知道自己的位置. Open-AudIT 扩展此选项, 允许您创建一个机架并给它分配设备 。 Open-AudIT甚至会提供机架和内装设备的可视化. 如果您提供了设备图片,该图片将被用于可视化. 你可以看屏幕上的架子, 并看到同样的东西 你会看到,如果你站在它前面。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>需要管理您网络上的设备 。 但你的唱片怎么更新? 电子表格 - defintley no. 数小时后,如果不是几天,就会过时。 为什么手动尝试跟上。 使用Open-AudIT自动扫描您的网络并记录您的设备——制造商,模型,串行和超过100个其他属性. 软件,服务,磁盘,开放端口,用户等的完整清单. 自动查看属性是否已添加、删除或更改 。<br/> <br/>一旦Open-AudIT被设定,你可以坐下来放松. 例如,我们本周发现了哪些新设备? 这周安装了什么样的新软件? 上个月有什么硬件变化吗?<br/> <br/>以自定义属性在存储的字段上轻松扩展 。<br/> <br/>甚至添加没有连接到您的网络的设备, 或是您 Open-AudIT 服务器无法访问的设备 。<br/> <br/>计算机、开关、路由器、打印机或网络上的任何其他设备 - Open-AudIT可以对所有设备进行审计。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>发现是Open-AudIT工作的核心。<br/> <br/>不然你怎么知道"我的网络里有什么?"<br/> <br/>发现被准备了数据项,使您能够一次点击一次在网络上运行发现,而不每次输入网络的细节.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>发现 选项是一个全局设置,在 <a href="../configuration?configuration.name=discovery_default_scan_option">配置</a>。 。 。 如果您持有Open-AudIT Entertainment许可证,这些许可证可按规定在每次发现时确定,此外,还可按要求自行定制。 发现 选项如下(包括扫描单个IP的提示时间):<br/><br/><strong>超快视</strong>数字 : <i>1秒钟</i>。 。 。 只扫描Open-AudIT需要用来与设备交谈的端口,并检测一个IOS设备(WMI,SSH,SNMP,Apple Sync). 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口不视为开放。 设备必须响应 Nmap ping 。 使用攻击性的时间。<br/><br><strong>超级快感</strong>数字 : <i>5秒钟</i>。 。 。 扫描前10个TCP和UDP端口,以及端口62078(Apple IOS检测). 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口不视为开放。 设备必须响应 Nmap ping 。 使用攻击性的时间。<br><br/><strong>快点</strong>数字 : <i>40秒钟</i>。 。 。 扫描前100个TCP和UDP端口,以及端口62078(Apple IOS检测). 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口不视为开放。 设备必须响应 Nmap ping 。 使用攻击性的时间。<br/><br/><strong>介质( Classic)</strong>数字 : <i>90 秒钟</i>。 。 。 和传统的Open-AudIT扫描差不多 我们能做的一样 扫描前1000TCP端口,以及62078(Apple IOS检测)和UDP 161(SNMP). 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口被视为开放(并将触发设备检测). 无论Nmap ping的响应如何,设备都会被扫描. 使用攻击性的时间。<br/><br/><strong>中型</strong>数字 : <i>100 秒钟</i>。 。 。 扫描前1000TCP和前100 UDP端口,以及端口62078(Apple IOS检测). 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口不视为开放。 设备必须响应 Nmap ping 。 使用攻击性的时间。<br/><br/><strong>慢点</strong>数字 : <i>4分钟</i>。 。 。 扫描前1000TCP和前100 UDP端口,以及端口62078(Apple IOS检测). 版本检测启用 。 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口被视为开放(并将触发设备检测). 设备必须响应 Nmap ping 。 使用正常的时间。<br/><br/><strong>超低线</strong>数字 : <i>20分钟</i>。 。 。 未建议。 扫描1000顶TCP和UDP端口,以及62078端口(Apple IOS检测). 无论Nmap ping的响应如何,设备都会被扫描. 版本检测启用 。 一个 <code>open|filtered</code> 端口被认为是开放的。 A级 <code>filtered</code> 端口被视为开放(并将触发设备检测). 用礼貌的时机<br/><br/><strong>自定义</strong>数字 : <i>未知时间</i>。 。 。 当标准发现预设设置以外的选项被更改时.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>组作为符合所需条件的简单设备列表. 如果要求使用JSON,他们将返回一份清单。 <code>devices.id</code> 仅此而已。 如果请求使用网络界面,它们会返回标准列属性列表.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>如果登录到 Open-AudIT 的用户无法访问搜索 LDAP(您正在使用 OpenLDAP),您可以使用另一个有此访问权限的账户. 使用 <code>ldap_dn_account</code> 和 <code>ldap_dn_password</code> 来配置此选项。<br/> <br/><strong>帮助文档</strong><br/> <br/><a href="/index.php/auth/help">Auth 帮助</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">为 Auth 使用 Entra</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">对 Auth 使用 OKTA</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">清除 LDAP 登录中的问题</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">用户、角色和类</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>如果您添加了设备类型, 要显示相关的图标, 您必须手动将 . svg 格式化的文件复制到目录 :<br/><em>链接</em>:/usr/当地/公开审计/公共/设备图像<br/><em>窗口</em>: c:\ xampp\htdocs\ open- audit\ device_images<br/> <br/>如果您添加了位置类型, 要显示相关的图标, 您必须手动将 32x32px 图标复制到目录 :<br/><em>链接</em>:/usr/当地/公开审计/公共/图像/地图_图片<br/><em>窗口</em>: c:\ xampp\htdocs\ open- audit\ images\ map_icons</p><p>当 <i>资源</i> 是一个 <code>device</code>无效 <i>类型</i> 它们是: <code>class</code>, (中文). <code>environment</code>, (中文). <code>status</code> 和 <code>type</code>。 。 。 如果 <i>资源</i> 这是 <code>locations</code> 或者说 <code>org</code> 唯一有效的数据 <i>类型</i> 这是 <code>type</code>。 。 。 如果 <i>资源</i> 是一个 <code>query</code> 唯一有效的数据 <i>类型</i> 这是 <code>menu_category</code>。 。 。</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>如果你打算完全审计你的云机, 不要忘记你也会需要那些在Open-AudIT中保存的证书.</p><p>如果您正在使用微软 Azure( 22 for SSH, etc. 检查您的虚拟机 - > 网易规则.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>如果选择列表类型,将启用“值”字段。 您应该在此设置一个可选值的逗号分隔列表 。 当字段被编辑时, 这些字段会显示在一个下拉框中 。<br/> <br/>与大多数其它属性一样,Fields可以被批量编辑. 按您通常的意愿使用批量编辑功能, 您将会看到字段可供输入 。<br/> <br/>查看设备细节屏幕,打开包含字段的部分,并且(如果您有足够的访问权限)可以点击字段值进行编辑.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>在日益变化的计算机安全世界中,每天都发现和补上新的弱点,因此,执行安全规定必须是一个持续的过程。 它还需要包括调整政策以及定期评估和风险监测的方法。 OpenSCAP生态系统为快速、成本效益高和灵活地实施这些进程提供了工具和定制政策。</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>集成允许您设置设备选择和调度,用于Open-AudIT与外部系统交谈.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>微软 Windows桌面系统有网络限制,可能影响Open-AudIT的性能. TCP/IP堆栈限制同时不完全的出厂TCP连接尝试的次数. 在达到极限后,后续的连接尝试被排入队列,并将以固定的速率(10每秒)解决. 如果太多人进入队列,它们可能被丢弃. 最后,Apache会被OS重启. 因此,不支持在Windows桌面操作系统中安装Open-AudIT.<br/><br/>Open-AudIT代码没有问题,我们也不能在Windows客户端机器上做任何事情来解决这个问题.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>在链接页面的底部找到 Nmap 计时细节 <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html 页面存档备份,存于互联网档案馆.</a>。 。 。 从该页:<br/> <br/><em>若您使用良好的宽带或网路连接, 有些人喜欢T5, 人们有时会指定-T2(Polite),因为他们认为崩溃主机的可能性较小,或者因为他们认为自己在一般情况下是礼貌的. 他们常常不知道T2到底有多慢 他们的扫描可能比默认扫描要长十倍. 机器崩溃和带宽问题在默认的计时选项-T3(Normal)中是罕见的,所以我通常建议谨慎的扫描仪使用. 刻录版本检测比玩计时值减少这些问题更有效.</em><footer>高顿 <i>费奥多</i> 里昂</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>可以配置Open-AudIT,使用不同的方法认证一个用户,此外,还可以根据组成员身份,使用指定的角色和类词创建用户账户.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>打开Aud IT可以检索文件或文件目录的细节,并根据Open-AudIT数据库中的其他属性来监测这些文件的变化.<br/> <br/>这个功能在Linux Open-AudIT服务器的框外工作,但需要在Windows Open-AudIT服务器下更改服务账户名称.<br/> <br/>支持的客户端是Windows和Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>打开Aud IT可以检索一个文件的详情,询问本地软件包管理器是否知道,并根据Open-AudIT数据库中的其他属性来监测这些文件的更改.<br/> <br/>支持的客户端只有Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>打开Aud IT可以在与每个设备相关的自定义字段存储信息.<br/> <br/>附加字段创建后,它可以像数据库中任何其他属性一样用于查询和分组.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT带来许多内置的查询. 如果您需要特定查询, 且预装的查询都不符合您的需要, 很容易创建新查询并加载到 Open- AudIT 中进行运行 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT 有许多内置摘要。 如果您需要特定的摘要, 且预装摘要中没有符合您的需要, 很容易创建新的摘要并加载到 Open-AudIT 中运行。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT由FirstWave以惊人的支持水平支持. 如果你更喜欢一个积极的支持者群体, 也一样。 你还能在哪里直接和开发者交谈,并在24小时内得到回复? 用其他产品试试看! 惊人的支持。 完全停下来。 你需要支持,我们提供支持。 没有如果或但是。 广大供养. 期间。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT提供盒外的多租位!<br/> <br/>Open-AudIT中的 Orgs(组织)是一个关键项目. 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将它与一个被指派的"Roles"列表结合起来,该列表定义了他们可以对分配给他们可以访问的Orgs的项目采取什么行动. 一个用户"orgs"和"roles"的组合定义了他们在Open-AudIT内所能做和不能做的.<br/> <br/>Open-AudIT中的大部分项目被分配到一个 Org. 设备,位置,网络等.<br/> <br/>兽人可以生孩子. 想想组织图(树)结构. 如果用户可以访问特定的Org,他们也可以访问Orgs后裔. 详情请见此 <a href="/index.php/faq?name=Users, Roles and Orgs">财务问题</a>。 。 。</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT提供盒外的多租位!<br/> <br/>Open-AudIT中的 Orgs(组织)是一个关键项目. 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将它与一个被指派的"Roles"列表结合起来,该列表定义了他们可以对分配给他们可以访问的Orgs的项目采取什么行动. 一个用户"orgs"和"roles"的组合定义了他们在Open-AudIT内所能做和不能做的.<br/> <br/>Open-AudIT中的大部分项目被分配到一个 Org. 设备,位置,网络等.<br/> <br/>兽人可以生孩子. 想想组织图(树)结构. 如果用户可以访问特定的Org,他们也可以访问Orgs后裔.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>快速查看您网络上设备的状态 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>在开放奥德的作用 它是一个关键项目。 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将此与指定角色列表结合起来,该列表定义了他们可以对其可以访问的Orgs项目采取的行动. 一个用户"orgs"和"roles"的组合定义了他们在Open-AudIT内所能做和不能做的.<br/> <br/>获得完整的Open-AudIT Enterprise体验. 创建角色可以对用户在 Open-AudIT 内所能做的事情进行精细的粒化控制.<br/> <br/>授权的主要方法(用户可以做什么)基于用户角色. 默认角色被定义为管理员,org_admin,记者和用户. 每个角色对每个端点都有一组权限(创建,读,更新,删除). 在Open-AudIT Entertainment中启用了定义额外角色和编辑现有角色的能力.<br/> <br/>角色也可以在LDAP(主动目录和OpenLDAP)的授权下使用. 企业许可的设施有能力为每个确定的角色定制LDAP组.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>规则审查属性,并根据适当的规则制作琴谱.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>扫描选项可以方便地对发现应用一组选项.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>由Google地图提供的简单,直观,准确的地理测绘. 开放-AudIT杠杆 谷歌地图提供设备位置的现场,交互式地理绘图. 街道地址自动转换为地理编码和经度/纬度.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>软件包用于确定是否安装了抗病毒,备份,防火墙,批准或禁止的软件.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>一些有效的Subnet属性的例子有:192.168.1.1(一个IP地址),192.168.1.0/24(一个子网),192.168.1-3.1-20(一个IP地址的范围).<br/> <br/><em>说明</em> - 只有子网(根据实例——192.168.1.0/24)才能自动为Open-AudIT建立一个有效的网络。 <br/> <br/>如果您使用活动目录类型, 请确保您有合适的证书可以和您的域控制器交谈 。 <a href="../credentials">全权证书</a>。 。 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>标准存储在Open-AudIT中.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>支持的客户端只有Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>任务有对应 unix cron 时间表的时间表 。 分钟、 小时、 日_ 月、 月、 日_ 周的属性都按照 cron 定义行事 。 您可以使用逗号分隔值( 无空格) 选择其中的多个 。 您可以使用 * 选择每个值。<br/> <br/>那个 <code>type</code> 任务可以是:基线、收集器、发现、查询、报告或摘要。<br/> <br/>如果您想要安排基线或发现, 您需要在创建任务前创建这些任务 。 您必须在 <code>sub_resource_id</code>。 。 。 例如,如果您想要安排发现,请在 <code>sub_resource_id</code>。 。 。<br/> <br/>值为 <code>uuid</code> 指定每个 Open-AudIT 服务器。 您的独特价值可以在配置中找到 。<br/> <br/>那个 <code>options</code> 属性是 JSON 文档,其中包含执行任务所需的任何额外属性。 报告、查询和摘要的额外属性是: <code>email_address</code> 和 <code>format</code>。 。 。 Bselines 的额外属性是: <code>group_id</code>。 。 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>那个 <code>type</code> 图标。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>属性端点允许您在 Open-AudIT 中将定制值添加到不同的属性中,此时此特性在设备上的类,环境,状态和类型属性,位置和兽类的类型属性以及查询的菜单类. 如果您查看了其中一种类型的项目( 显示 Lkocation) , 您会注意到必须从下拉框中选择类型属性 。 这就是这些值被存储的地方。 因此,如果您想要为位置添加新类型,请使用属性特性添加该类型。</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Collectors 特性使您能够轻松地管理许多执行网络发现的"collector"计算机. 所有收集器都由服务器集中控制. 收集器和服务器之间唯一需要的网络端口是80和/或443.<br/> <br/>它使管理不同的网络变得迅速、简单和简单。 Open-AudIT Enterprise许可证持有者获得单一的收集许可证,并有权按要求购买更多。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>您的 SQL 中的 SELECT 部分 <em>必须</em> 包含完全合格的栏目。 爱 - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>。 。 。<br/> <br/>您的SQL 的哪个部分 <em>必须</em> 包含 <code>WHERE @filter</code> 所以Open-AudIT知道将您的查询限制在相应的Orgs. 不包含此条件的 SQL 将导致查询无法创建, 除非您拥有管理员角色 。<br/> <br/>一个实例查询 SQL 显示在设备上的属性 <code>os_group</code> “ Linux” 属性 - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>您的 SQL 中的 SELECT 部分 <em>必须</em> 只包含 <code>DISTINCT(devices.id)</code>。 。 。<br/> <br/>您的SQL 的哪个部分 <em>必须</em> 包含 <code>WHERE @filter</code> 所以Open-AudIT知道将您的查询限制在相应的Orgs. 不包含此条件的 SQL 将导致组无法创建 。<br/> <br/>SQL 选择所有运行 Debian OS 的设备的例子 - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>许可端点允许您追踪设备上发现的许可数量 。<br/> <br/>要创建一个条目来跟踪您的驾照 <em>必须</em> 提供名称、组织、获得的许可证数量和软件名称。 现场 <code>match_string</code> 您必须提供您想要跟踪的软件的名称,您可以在匹配_字符串中将% 的符号作为通配符。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>该网络的格式应为192.168.1.0/24。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>初级和可选次级项目应具有完全的资质 -- -- 即设备。 类型或软件。 名称。<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>如果您正在 Linux 服务器上运行 Open-AudIT , 则无需做任何事情 。<br/><br/>然而,Windows客户端很好,不需要特殊动作. . 要启用这个功能,审计脚本必须在目标Windows系统上本地运行. 它不能远程运行,因为我们在运行一个Windows机上的审计脚本时会和WMI通话一样,同时瞄准第二个Windows机. 要做到这一点,我们需要将审计脚本复制到目标Windows机器,然后运行. 不幸的是,Apache运行在下面的服务账户是本地系统账户。 该账户无法访问远程(基于网络)资源。 要解决这个问题,服务必须在另一个账户下进行。 仅使用本地管理员账户是很容易的, 但是只要您有所需的权限, 您就可以尝试您喜欢的任何账户 。 当地系统账户与当地署长账户一样有当地访问权。<br/><br/>见我们关于启用的页面 <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">在窗口下运行 Open-AudIT Apache 服务</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>这些是生活在架子内的装置.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>此端点允许您添加您的云基础设施细节 。 Open-AudIT随后会使用他们的本地 API 伸手到您的云端并返回您的服务器,就像Open-AudIT中的任何其他设备一样.<br/> <br/><em>说明</em> - 为了使用这个功能,我们 <em>必须</em> 启用配置项目匹配_mac(对于AWS)和匹配_hostname(对于Azure). 首次执行云的发现时会自动完成此任务.<br/> <br/>云层的全权证书( E)<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">阿苏雷</a> 或者说 <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">自动取款机</a>要求这样做。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>基于NIST CVE种子的脆弱度报告.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>我们最初设置带有默认选项的默认脚本列表. 这些默认脚本无法删除 。 您可以根据需要创建额外的脚本供您使用. 您的脚本将基于现有的脚本之一, 并应用自定义选项 。 脚本可以按菜单从列表页面下载 - > 发现 - > 审计脚本 - > 列表审计脚本<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>在使用Regex进行匹配时,可以在 <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> ưμ㼯A</a>。 。 。 可以找到 Perl Regex 的一些差异 <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">这里</a>。 。 。</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>部件可以很容易地被创造出来,在仪表板上显示你环境特有的东西.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>使用 Open-AudIT 专业和企业,你可以自动化 和安排发现, 报告生成, 或基线检查运行 当你想运行, 并随需要。 安排你的发现 晚上运行,报告 生成和电子邮件给关键人员 每天早上。 复杂或简单的调度,设备发现和报告生成只是一击即逝.<br/> <br/>为每个子网或AD控制器创建单个发现时间表,在为目标受众创建的报告中添加。 开发简单或复杂的时间表,以支持公司需求,避免备份或对业务的影响,或只是分散负载和速度审计完成.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>您可以为任何现有的审计脚本创建包含所有选项的脚本 - 不仅仅是Windows. AIX,ESX,Linux,OSX和Windows全部覆盖.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>您可以在匹配_ 字符串中将% 的标志作为通配符 。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>你的架子有助于精确地完善你的设备所在位置.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>说明</strong> 您正在从本地的 Open-AudIT 服务器访问此 URL 。 在其它机器上运行时, 下载的脚本将无法提交 。 如果需要审计其他机器,请从任何远程机器下载脚本,不要在Open-AudIT服务器本身上使用浏览器.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE 项不含确定受影响的项的过滤器。';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = '谷歌地图 API 密码 此功能需要密钥 。';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = '将执行此基准的 JSON 设备标识组 。';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = '与从 CVE 中提取的软件名称相匹配的 JSON 阵列,由 Open-AudIT 检索的软件名称丰富.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = '测试这种脆弱性的JSON系列值。';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = '包含指定给此用户的 Orgs 的 JSON 文件 。 身份证从 <code>orgs.id</code>。 。 。 如果用户可以接触一个Org,他们可以接触Orgs后裔.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = '包含所需属性的 JSON 文件,取决于 <code>scripts.type</code>。 。 。';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON 文档, 包含高于所选发现的必需属性_ 扫描_ 选项 。';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON 文档, 包含默认设备匹配选项上必须的属性 。';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = '包含指定给该用户的角色的 JSON 文件 。 角色名称取自 <code>roles.name</code>。 。 。';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = '包含一系列属性的 JSON 对象,如果匹配发生,则要更改 。';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON 对象包含一系列匹配的属性 。';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = '一个包含收藏特定选项的 JSON 对象 。';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON通过云号发现而发现的物体';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = '包含要执行的队列项目细节的 JSON 描述 。';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON代表这一一体化的领域。';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON对所有装置的个别试验及其结果作了说明,但这一基准被对照。';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON代表构成这项政策的测试。';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = '一个局域网可以使用路由器连接到一个WAN.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = '大都会地区网(MAN)是通常跨越一个城市或一个大校园的大型计算机网络.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A级 种子发现使用一个初始IP来检索它知道的任何其他设备的IP,将这些IP添加到列表中,并扫描这些——再次要求这些额外设备知道的任何IP. 润和复诵. 了解它在执行过程中是否已经扫描过一个给定的IP,并丢弃任何已经扫描过(或甚至在要扫描的列表中)的IP,是足够明智的.';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = '一个子网的发现将扫描所提供的IP.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = '提供给代理服务器的 URL 将下载文件并存储在本地磁盘上 。';

$GLOBALS["lang"]['A URL to a file to download.'] = '要下载的文件的 URL 。';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = '骨干网络是计算机网络基础设施的一部分,为不同局域网或子网络之间的信息交流提供路径. 骨干可以将同一建筑内部,跨不同建筑,或者在宽阔的区域内的各种网络连接起来.<br/><br/>例如,一家大公司可能实施一个骨干网络,将世界各地的部门连接起来。 将部门网络联系起来的设备构成网络的骨干。 在设计网络骨干时,网络性能和网络拥堵是需要考虑的关键因素. 一般情况下,骨干网络容量大于与之相连的单个网络容量.<br/><br/>骨干网络的另一个例子是互联网骨干,即将所有连接到互联网的网络连接在一起的广域网(WAN)和核心路由器的一组.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '一个计算出来的字段,显示此软件件在所选 Org 中的计算机上被发现的次数(如果配置的话它的后代).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = '校园区域网(CAN)由有限地理区域内的局域网互联组成. 网络设备(开关、路由器)和传输介质(光纤、铜厂、Cat5电缆等)几乎全部归校园租户/业主(一个企业、大学、政府等)所有。<br/><br/>例如,一个大学校园网络可能连接各种校园建筑,连接学术院校或部门,图书馆,以及学生宿舍.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = '一个封闭的端口是可访问的(它接收和响应Nmap探测包),但没有应用程序监听它. 它们可以帮助显示一个主机在IP地址(主机发现,或ping扫描)上,并作为OS检测的一部分. 由于封闭的端口是可到达的,也许值得稍后扫描,以防有人打开. 管理员不妨考虑用防火墙屏蔽此类端口. 然后它们就会出现在过滤状态中,接下来讨论。';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = '收藏家要么是收集器,要么是备用状态。';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = '一个逗号分离的可适用的CVE列表.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '一个逗号分隔的数值列表,其中之一可以选择.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '命令要运行。 当代理基于Windows时,此命令会从动力壳代理内部运行.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = '仪表板由三列和两列组成 我们称之为 <i>部件</i>。 。 。 一个部件与一个摘要非常相似,只有我们把摘要概念更进一步。 部件是用几个下拉框简单创建的 - 或者可以选择使用自己的SQL来完成自定义.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = '一个过滤的端口被认为是开放的(并将触发设备检测).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = '全球局域网(GAN)是一个网络,用于支持移动跨越任意数量的无线局域网,卫星覆盖区等. 移动通信的主要挑战是将用户通信从一个地方覆盖区转到另一个地方。 在IEEE项目802中,这涉及到一系列地面无线局域网.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = '家用局域网(HAN)是一种住宅局域网,用于通常部署在家中的数字设备之间的通信,通常是少量的个人计算机和配件,如打印机和移动计算设备. 一个重要的功能是共享互联网接入,通常是通过有线电视或数字用户线(DSL)供应商提供宽带服务.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = '一张自定义TCP端口扫描列表(22是SSH,135是WMI,62078是iPhone同步).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = '用于扫描的自定义 UDP 端口列表(161 是 SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = '局域网(LAN)是连接住宅,学校,办公楼等有限地理区域的计算机和装置,或定位严密的建筑群的网络. 网络上的每个计算机或设备都是节点. 线性局域网最有可能是基于以太网技术. ITU-T G.hn等较新的标准也提供了利用既有线缆,如同轴电缆,电话线,以及电力线等来创建有线局域网的方法.<br/><br/>与广域网相比,局域网的界定特征包括数据传输率较高、地理范围有限、缺乏对租赁线路的依赖以提供连通性。 目前以太网或其他IEEEE 802.3LAN技术以数据传输速率运行,最高可达100Gbit/s,2010年由IEEE标准化. 目前,400格比特/秒 以太网正在开发中.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = '一个位置是一个物理地址,可以拥有与之相关的设备. 您可以指定它坐标, 如果指定了设备, 当您有 Open-AudIT Enterprise 许可证时, 位置会出现在地图上 。';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = '一个位置名称可以帮助您在未来找到这些设备 。';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '更低的数值意味着它将被应用在其他规则之前.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '更低的数值意味着它将被应用在其他规则之前. 默认重量为100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = '一个新用户登录到Open-AudIT,并经过LDAP断开认证和授权. 该用户随后在Open-AudIT中创建并登录. 圆满成功.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = '包是安装的软体件. 一个软件包有一个类型——抗病毒,批准,备份,禁用,云,防火墙,忽略,许可或其他.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = '在使用应用程序认证时允许登录的密码( 存储为散列) 。';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = '一个人在Open-AudIT应用程序中有一个账户. 他们的用户账户有一份相关角色和组织的清单. 用户所扮演的角色决定了他们能做什么. 用户已经确定可以对哪些项目采取行动的组织。<br/><br/>当一个用户请求在收藏项上执行一个操作(创建,读取,更新,删除)时,会咨询角色,看看是否允许他们执行该动作,然后会咨询兽人,以确定该收藏项是否属于某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某某';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = '个人区域网络(PAN)是一种计算机网络,用于接近一个人的计算机和不同信息技术设备之间的通信. PAN中使用的一些设备的例子包括个人电脑,打印机,传真机,电话,PDA,扫描仪,甚至电子游戏控制台. PAN可能包括有线和无线设备. PAN的覆盖范围一般可延伸到10米. 一个有线PAN通常是用USB和FireWire连接而构建的,而蓝牙和红外通信等技术一般形成无线PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = '查询本质上是SQL语句. 此语句与数据库对齐运行,自动添加限制,过滤后仅适用于所请求的项目,并且仅适用于用户有权查看的项目. 使用菜单创建查询 - > 管理 - > 查询 - > 创建查询 。 查询包含一个 Org_id,因此仅限于适当的用户。 用户必须拥有org_admin或reporter角色来创建,更新或删除查询. 所有用户都可以执行查询. 一个查询有一个用于菜单项的名称属性和一个菜单类属性. 这告诉 Open- Audit GUI 将查询放入哪个子菜单 。 还有菜单显示,应该设置为 <i>尔</i> 以启用图形界面中的查询( E)<i>无</i> 以防止查询出现)。 如果调用它, 查询仍将运行 <code>id</code>,无论菜单显示的值。';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = '架子是指在架子内分配位置和高度的装置的集合. 一个设备可以可选择拥有与之相关的图片. 一个架子放在一排。 我们创造了一个非常颗粒状的架子定位系统,如下所示. 在最高一级(一如既往)是组织(Org)。 An Org可以有多个地点(一直如此). 随着Racks功能的加入,一个位置现在可以包含一个或多个建筑. 建筑物可以包含一个或多个楼层. 一层可以包含一个或多个房间. 一个房间可以包含一个或多个行. 这听起来像很多工作, 但默认为你创造了。 创建新位置, 将自动为您创建子组件 。 需要更多物品(建筑物,房间等)的,可以随意添加. 架子也可以是其中的一部分 <i>移动</i> 绳子 吊舱属性的作用是标记,而不是像每栋建筑,地板等那样严格的等级继承模式.<br/><br/>Racks是Open-AudIT Entertainment特许客户可以使用的功能.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = '一个路由域或地址空间,其中IP地址和MAC地址是独一无二的.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linux 的样本 cron 文件如下 。 这应该放在';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = '安全区是网络域内的行政域或政策域.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = '种子发现是另一类发现, 在那里您提供了单个的IP <i>种子</i> 设备。 这个设备经过审计,它知道的任何IP随后都会被添加到将要审计的IP列表中. 然后,这些设备被审计,他们知道的任何IP也被添加到用于审计的IP列表中. 然后在用户配置的参数范围内继续这一进程。';

$GLOBALS["lang"]['A short description of the log entry.'] = '日志条目简介.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = '储域网(SAN)是提供集成,块级数据存储的专用网络. SAN主要用于使存储设备,如磁盘阵列,磁带库,以及光学点唱箱等,可供服务器访问,这样这些设备就如同操作系统中的本地附属设备一样出现. 一个SAN一般有自己的存储设备网络,一般不能通过局域网通过其他设备访问. 在2000年代初期,小型和小型企业网络的成本和复杂性下降至允许企业和中小型企业环境更广泛地采用的水平。';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = '匹配 <code>software.name</code> 属性。 您可以使用% 的标准 SQL 通配符来匹配一个或多个字符 。';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = '管理敏感信息的结构化系统';

$GLOBALS["lang"]['A timestamp.'] = '时章.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = '一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将此与指定角色列表相结合,该列表定义了他们可以对其可以访问的Orgs项目采取的行动. 用户组合 <i>鸟类</i> 和 <i>角色</i> 定义它们在 Open-AudIT 中能够和不能做什么。';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = '一个用户会有一个相关组织的名单(orgs). 每个用户将允许他们按照各自的作用对该用户范围内的项目采取行动。<br/><br/>除了默认的Org之外,所有Orgs都有一个父母. 想想奥格图 如果用户对一个Org有许可,他们对该Org的任何后代也有许可.<br/><br/>允许用户在儿童角上看到来自家长角上的某些收藏品。 它们是:仪表板、发现_扫描_选项、字段、文件、组、查询、报告、角色、规则、脚本、摘要、部件。<br/><br/>别忘了你对用户在企业号中看到和使用的“角色”有颗粒控制。';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = '一个用户会有一个相关组织的名单(orgs). 每个用户将允许他们按照各自的作用对该用户范围内的项目采取行动。<br/><br/>除了默认的Org之外,所有Orgs都有一个父母. 想想奥格图 如果用户对一个Org有许可,他们对该Org的任何后代也有许可.<br/><br/>我们还允许一个在儿童角上获得许可的用户从家长角上看到某些收藏品。 它们是:仪表板、发现_扫描_选项、字段、文件、组、查询、角色、规则、脚本、摘要、部件。<br/><br/>别忘了你对用户可以看到和使用的颗粒控制';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = '虚拟私人网络(VPN)是一个覆盖网络,其中节点之间的一些连接由一些更大的网络(如互联网)中的开放连接或虚拟电路承载,而不是物理电线承载. 虚拟网络的数据链路层协议据说在出现这种情况时会穿过更大的网络。 一个常见的应用是通过公共互联网进行安全通信,但VPN不需要具有明确的安全特性,如认证或内容加密. 例如,VPN可以用来将不同用户群的流量隔开一个具有强大安全特性的基础网络.<br/><br/>VPN可能具有最佳的性能,或者VPN客户和VPN服务提供商之间可能有一个定义明确的服务级别协议(SLA). 一般来说,VPN的地形比点对点更为复杂.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '影响可用性的脆弱性可能使攻击者破坏服务、崩溃系统或造成拒绝服务(DoS)(无、低、高)。';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '影响保密性的脆弱性可能使攻击者能够读取敏感数据,如个人信息、证书或专有商业数据(None、Low、High)。';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = '影响完整性的脆弱性可能允许攻击者修改数据,注入恶意代码,或改变系统配置(None,Low,High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = '在浓缩数据不足或生成的SQL不完全正确的情况下,可以编辑脆弱性并提供更具体的包名。';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = '在 Open-AudIT 中,一个脆弱性项目可以被认为基本上是对您数据库的查询,以确定您可能接触特定 CVE 报告。 CVE报告以及FirstWave的浓缩数据构成脆弱性。 这两个项目合并生成一个从FirstWave自动下载的合适的查询.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = '广域网(WAN)是一种计算机网络,覆盖城市,国家等大地理区域,甚至跨洲距离. 一个WAN使用一个通信信道,将电话线,电缆,和气波等多种类型的媒介结合起来. 广域网经常利用电话公司等普通承运人提供的传输设施。 WAN技术一般在OSI参考模型的下三层运作:物理层,数据链接层,网络层.';

$GLOBALS["lang"]['AD Group'] = 'AD 组';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL、氢氟碳化合物、ISDN等';

$GLOBALS["lang"]['AIX'] = '大赦国际';

$GLOBALS["lang"]['ALL IPs'] = '所有实施伙伴';

$GLOBALS["lang"]['API / Web Access'] = 'API / 网络访问';

$GLOBALS["lang"]['API Documentation'] = 'API 文档';

$GLOBALS["lang"]['API Key required.'] = '需要 API 密钥 。';

$GLOBALS["lang"]['API Result'] = 'API 结果';

$GLOBALS["lang"]['About'] = '关于';

$GLOBALS["lang"]['Above are the only required items.'] = '以上是所需物品。';

$GLOBALS["lang"]['Accept'] = '接受';

$GLOBALS["lang"]['Access Model'] = '访问模式';

$GLOBALS["lang"]['access_point'] = '访问点';

$GLOBALS["lang"]['Access Point'] = '访问点';

$GLOBALS["lang"]['access_token'] = '访问托肯';

$GLOBALS["lang"]['Access Token'] = '访问托肯';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = '访问管理费份额,RPC使用SMB2协议.';

$GLOBALS["lang"]['ack_by'] = '点击';

$GLOBALS["lang"]['Ack By'] = '点击';

$GLOBALS["lang"]['ack_date'] = '点击日期';

$GLOBALS["lang"]['Ack Date'] = '点击日期';

$GLOBALS["lang"]['ack_time'] = '点击时间';

$GLOBALS["lang"]['Ack Time'] = '点击时间';

$GLOBALS["lang"]['action'] = '行动';

$GLOBALS["lang"]['Action'] = '行动';

$GLOBALS["lang"]['action_audit'] = '行动审计';

$GLOBALS["lang"]['Action Audit'] = '行动审计';

$GLOBALS["lang"]['action_command'] = '行动指挥';

$GLOBALS["lang"]['Action Command'] = '行动指挥';

$GLOBALS["lang"]['action_date'] = '行动日期';

$GLOBALS["lang"]['Action Date'] = '行动日期';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = '指定到位置的动作设备';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = '指定到位置的动作设备';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = '指定给 Org 的动作设备';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = '指定给 Org 的动作设备';

$GLOBALS["lang"]['action_download'] = '动作下载';

$GLOBALS["lang"]['Action Download'] = '动作下载';

$GLOBALS["lang"]['action_uninstall'] = '动作卸载';

$GLOBALS["lang"]['Action Uninstall'] = '动作卸载';

$GLOBALS["lang"]['actioned'] = '已采取行动';

$GLOBALS["lang"]['Actioned'] = '已采取行动';

$GLOBALS["lang"]['actioned_by'] = '由';

$GLOBALS["lang"]['Actioned By'] = '由';

$GLOBALS["lang"]['actioned_date'] = '行动日期';

$GLOBALS["lang"]['Actioned Date'] = '行动日期';

$GLOBALS["lang"]['actions'] = '行动';

$GLOBALS["lang"]['Actions'] = '行动';

$GLOBALS["lang"]['Activate'] = '启动';

$GLOBALS["lang"]['Activate Free License'] = '激活自由许可证';

$GLOBALS["lang"]['Activate Key'] = '激活密钥';

$GLOBALS["lang"]['Activate a free Enterprise license'] = '启用自由企业许可证';

$GLOBALS["lang"]['Active'] = '活动';

$GLOBALS["lang"]['Active / Active'] = '活动/ 活动';

$GLOBALS["lang"]['Active / Passive'] = '活动/ 被动';

$GLOBALS["lang"]['Active Directory'] = '活动目录';

$GLOBALS["lang"]['Active Directory Domain'] = '活动目录域';

$GLOBALS["lang"]['active_directory_ou'] = '活动目录 Ou';

$GLOBALS["lang"]['Active Directory Ou'] = '活动目录 Ou';

$GLOBALS["lang"]['Active Directory Server'] = '活动目录服务器';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = '活动目录和 OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = '域名';

$GLOBALS["lang"]['Ad Domain'] = '域名';

$GLOBALS["lang"]['ad_group'] = '特设小组';

$GLOBALS["lang"]['Ad Group'] = '特设小组';

$GLOBALS["lang"]['ad_server'] = 'Ad 服务器';

$GLOBALS["lang"]['Ad Server'] = 'Ad 服务器';

$GLOBALS["lang"]['Add'] = '添加';

$GLOBALS["lang"]['Add Credentials'] = '添加证书';

$GLOBALS["lang"]['Add Device'] = '添加设备';

$GLOBALS["lang"]['Add Device to Application'] = '向应用程序添加设备';

$GLOBALS["lang"]['Add Device to Cluster'] = '向集群添加设备';

$GLOBALS["lang"]['Add Exception'] = '添加例外';

$GLOBALS["lang"]['Add Field'] = '添加字段';

$GLOBALS["lang"]['Add If'] = '如果';

$GLOBALS["lang"]['Add Policies from Device'] = '从设备添加策略';

$GLOBALS["lang"]['Add Policy'] = '添加策略';

$GLOBALS["lang"]['Add Then'] = '添加然后';

$GLOBALS["lang"]['Add Your Credentials'] = '添加您的证书';

$GLOBALS["lang"]['Add image'] = '添加图像';

$GLOBALS["lang"]['additional_items'] = '增列项目';

$GLOBALS["lang"]['Additional Items'] = '增列项目';

$GLOBALS["lang"]['address'] = '地址';

$GLOBALS["lang"]['Address'] = '地址';

$GLOBALS["lang"]['Address any nonconformities'] = '处理任何不符合同之处';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = '处理审计结果和纠正行动';

$GLOBALS["lang"]['Admin'] = '管理员';

$GLOBALS["lang"]['admin_status'] = '管理状态';

$GLOBALS["lang"]['Admin Status'] = '管理状态';

$GLOBALS["lang"]['advanced'] = '高级';

$GLOBALS["lang"]['Advanced'] = '高级';

$GLOBALS["lang"]['Afghanistan'] = '阿富汗';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = '在创建集成后, 当您查看集成的细节时, 您会注意到一个名为调试的字段 。 此设定为默认无效 。 将其更改为是, 执行集成时会提供额外记录 。 调试不应留为是. 这是因为调试输出将包含从外部系统检索到的所有内容——包括WMI和SNMP证书等项目. 调试选项只应在问题发生时使用, 您希望更深入地挖掘, 看看您是否能确定原因 。';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = '完成上述工作后,解除代理.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = '探员? 发现? 证书?';

$GLOBALS["lang"]['agents'] = '代理程序';

$GLOBALS["lang"]['Agents'] = '代理程序';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = '可以创建指定持续时间,网络和操作系统的代理条目. 如果所有测试都匹配,那么服务器会要求代理执行动作. 如果未设置任何测试,则排除于 <i>全部必须匹配</i> 要求。<br/><br/>您可以创建多个代理并让服务器检查一个或所有代理条目. 您可以( 例如) 指定一个代理人, 说 <i>如果代理IP在此子网中, 请设置设备的位置_ id</i>。 。 。<br/><br/>另一个例子可能根本不是运行审计,而是下载脚本并运行. 如果代理安装了管理员权限, 您现在可以不打开而管理您的机器 <strong>任何</strong> 从这里到世界的港口<p>允许高级代理意味着可以指示代理下载任何文件并执行任何命令. <strong>警告</strong>数字 : 这带来安全风险。 此配置将 <strong>仅限</strong> 函数使用 HTTPS 运行 Open-AudIT 和有效证书( 提供了证书授权) 时 </p>';

$GLOBALS["lang"]['Aggressive'] = '侵略性';

$GLOBALS["lang"]['Aland Islands'] = '奥兰群岛';

$GLOBALS["lang"]['Albania'] = '阿尔巴尼亚';

$GLOBALS["lang"]['Albanian'] = '阿尔巴尼亚语Name';

$GLOBALS["lang"]['alert_style'] = '提醒样式';

$GLOBALS["lang"]['Alert Style'] = '提醒样式';

$GLOBALS["lang"]['Algeria'] = '阿尔及利亚';

$GLOBALS["lang"]['algorithm'] = '算法';

$GLOBALS["lang"]['Algorithm'] = '算法';

$GLOBALS["lang"]['alias'] = '别名';

$GLOBALS["lang"]['Alias'] = '别名';

$GLOBALS["lang"]['All'] = '全体';

$GLOBALS["lang"]['All IPs'] = '所有实施伙伴';

$GLOBALS["lang"]['All Policies'] = '所有政策';

$GLOBALS["lang"]['All Queued Items'] = '所有排队项目';

$GLOBALS["lang"]['All collections URLs use the format'] = '所有收藏 URL 使用该格式';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = '所有设备子表都包含几根重要的柱子.';

$GLOBALS["lang"]['All devices with a type like computer.'] = '所有有类似计算机类型的设备.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = '所有带有计算机或路由器类型的设备.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = '所有没有类型开关和打印机的设备.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = '所有没有类型开关和打印机的设备. 与上述查询基本相同.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = '所有常规的发现选项也可用于设备种子发现.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = '所有任务都可以在Windows和Linux中同样创建. 任务使用 CRON 方法调度执行.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = '在要求提供信息的同时,我们把数据点发回FirstWave,这些数据点将给我们一些关于特性使用和安装的急需的信息。';

$GLOBALS["lang"]['Also can be created from the'] = '也可以从';

$GLOBALS["lang"]['Alternatives'] = '替代品';

$GLOBALS["lang"]['Amazon AWS Fields'] = '亚马逊AWS 字段';

$GLOBALS["lang"]['American Samoa'] = '美属萨摩亚';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory的发现将查询Active Directory的网络列表,并像常规Subnet的发现一样扫描相关的IP.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'An Org(组织)是Open-AudIT中大多数收藏品的拥有者. 除全球项目外, <i>配置</i>,大多数物品被分配给(拥有)一个Org。 用户可以访问收藏中的这些物品,在Org以下,用户可以使用这些物品。';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = '一个应用程序正在积极接受TCP连接,UDP数据图或这个端口的SCTP协会. 发现这些往往是港口扫描的主要目标。 安全意识的人知道,每个开放的港口都是攻击的渠道. 攻击者和笔试者想要利用开放的端口,而管理员则试图用防火墙关闭或保护这些端口而不阻碍合法的用户. 开放端口对于非安全扫描也很有趣,因为它们显示在网络上可用的服务.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '数组 <code>benchmarks.id</code>。 。 。';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '数组 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '表示更多信息的外部链接的对象组。';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = '对设备的特性和类型进行有教养的猜测';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '加密的 JSON 文档,其中根据 <code>credentials.type</code>。 。 。';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = '企业私人网络是一个单一组织为连接其办公地点(如生产地点,总部,远程办公室,商店)而建立的网络,这样它们就可以共享计算机资源.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = '如果当前登录的用户的角色包含';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = '下面是JSON POST机构的例子。 这应当附在"数据"表单项上.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = '示例部件 SQL 显示每个位置计数的设备 。';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = '一个现有的Open-AudIT用户得到了LDAP服务器的认证和授权. 圆满成功.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '说明本站所需服务水平.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '显示发现是否完成的内部领域。';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = '一个开放的QQ过滤端口被认为是开放的(并且会触发设备检测).<br/>之前,开放奥德 它认为,';

$GLOBALS["lang"]['An optional GeoCode'] = '可选的地理代码';

$GLOBALS["lang"]['An optional password to use sudo.'] = '使用 sudo 的可选密码 。';

$GLOBALS["lang"]['Analyzed'] = '分析';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = '最后,单击“提交”以执行这一发现。';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '如果出了什么问题呢?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = '最后点击 <i>提交</i> 为 Entra 创建您的 Open-AudIT Auth 方法。';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = '最后,这不是一个安全问题,而是更平静的心态。 数据结构是开放的并有文件记录的。 你可以看他们';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = '并提供一个名字 - 我们谦卑地推荐 Open-AudIT 😀, 但你可以命名它任何你想要的。 确定选项 <i>整合您在画廊中找不到的任何其他应用程序( 非收藏)</i> 已选定。 然后点击 <i>创建<i>。 。 。</i></i>';

$GLOBALS["lang"]['And so much more.'] = '还有更多';

$GLOBALS["lang"]['Andorra'] = '安道尔';

$GLOBALS["lang"]['Angola'] = '安哥拉';

$GLOBALS["lang"]['Anguilla'] = '安圭拉';

$GLOBALS["lang"]['Annex A Controls'] = '附件A 控制措施';

$GLOBALS["lang"]['Antarctica'] = '南极洲';

$GLOBALS["lang"]['AntiVirus'] = '抗病毒药';

$GLOBALS["lang"]['AntiVirus Packages'] = '抗病毒药包';

$GLOBALS["lang"]['Antigua and Barbuda'] = '安提瓜和巴布达';

$GLOBALS["lang"]['Antivirus'] = '抗病毒药';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '您想要从此发现中排除任何 TCP 端口( 压缩、 无空格 ) 。 仅在使用Nmap 7+时可用.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '您想要从此发现中排除任何 UDP 端口( 压缩、 无空格 ) 。 仅在使用Nmap 7+时可用.';

$GLOBALS["lang"]['Any additional documentation you need.'] = '任何需要的额外文件。';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '任何你想要补充的笔记。';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = '* 之后的任何属性都表明CVSS数据少于v4用于完成此字段. 默认情况下, 我们尝试使用 v4 字段, 但是如果它们没有被覆盖的话, 我们将会回落到之前的版本 。';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = '任何设备在运行审计脚本( 如果设置) 时都会被指定给此 Org 。';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = '任何设备在运行审计脚本( 如果设置) 时都会被指定给此 Org 。 链接到 <code>orgs.id</code>。 。 。';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '如果设定, 任何已发现的设备都会被指定到此位置 。 链接到 <code>locations.id</code>。 。 。';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = '在运行审计脚本(如果设置)时,任何发现的设备都会被分配到此位置.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '在运行审计脚本(如果设置)时,任何发现的设备都会被分配到此位置. 链接到 <code>locations.id</code>。 。 。';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '如果设置, 任何发现的设备都将被指定给此 Org 。 如果没有设定,则指定给 <code>org_id</code> 这个发现。 链接到 <code>orgs.id</code>。 。 。';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = '以这种方式找到的任何文件都存储在 <i>可执行文件</i> 表格为其它设备组件。';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '任何需要的过滤器。 注:当类型 = 流量时,这代表字体良好的图标。';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '您想要测试的任何特定的 TCP 端口( 已连接, 无空格) 。';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = '任何您想要测试的 UDP 特定端口( 已连接, 无空格 ) 。';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = '任何用户上传的图像都放在此处 。';

$GLOBALS["lang"]['Application'] = '应用程序';

$GLOBALS["lang"]['Application Definitions'] = '应用定义';

$GLOBALS["lang"]['application_id'] = '应用程序标识';

$GLOBALS["lang"]['Application ID'] = '应用程序标识';

$GLOBALS["lang"]['Application Licenses'] = '申请许可证';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '应用,操作系统或硬件.';

$GLOBALS["lang"]['applications'] = '应用程序';

$GLOBALS["lang"]['Applications'] = '应用程序';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = '应用程序是企业号唯一的功能.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = '在Open-AudIT 2.2中正在引入应用,以期随着进一步发展而扩大这一概念。';

$GLOBALS["lang"]['applied'] = '应用';

$GLOBALS["lang"]['Applied'] = '应用';

$GLOBALS["lang"]['Approved'] = '核定数';

$GLOBALS["lang"]['Approved Packages'] = '核定套件';

$GLOBALS["lang"]['April'] = '4月(半天会议)';

$GLOBALS["lang"]['Arabic'] = '阿拉伯语';

$GLOBALS["lang"]['architecture'] = '建筑';

$GLOBALS["lang"]['Architecture'] = '建筑';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '您确定要删除此输入项吗 ?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '您确定要删除此输出项吗 ?';

$GLOBALS["lang"]['Are you sure?'] = '你确定吗?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '你确定吗? 这将删除所有队列条目,防止发现剩余的IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '你确定吗? 这将重置队列处理计数, 并可能导致服务器负载 。';

$GLOBALS["lang"]['area'] = '区域';

$GLOBALS["lang"]['Area'] = '区域';

$GLOBALS["lang"]['Argentina'] = '联合国';

$GLOBALS["lang"]['Armenia'] = '亚美尼亚';

$GLOBALS["lang"]['arp'] = '阿尔普';

$GLOBALS["lang"]['Arp'] = '阿尔普';

$GLOBALS["lang"]['Aruba'] = '阿鲁巴';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = '提醒大家在Open-AudIT中授权如何运作,请参见:';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = '因此,我们 <strong>必须</strong> 拥有提供给发现证书用户的管理费份额。 请检查 Windows 机提供的目标 <i>写入</i> 用于发现证书用户的访问。<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = '如上所述,开发人员不讲所提供的所有翻译语言。 这意味着我们不能以准确性来审查翻译文本。 我们确实尝试了粗略的回顾。 如果你看到一些不正确的翻译,你可以自己修改. 编辑合适的语言文件(如下),并找到要修改的文本. 也许它不存在, 你需要添加它。 只需更改文本, 保存文件并刷新您的网页 。 无需重新启动任何服务/演示程序使其生效 。 您可能需要强制更新您的浏览器 。';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = '根据OpenSCAP基准, <i>不先在非操作环境中测试,不要试图执行本基准中的任何设置。 这一基准的制定者不承担其他当事方使用该基准的任何责任,也不对其质量、可靠性或任何其他特征作出明示或暗示的保证。</i><br/><br/>说真的,不要盲目开始 <i>修复</i> 在一个非生产、相同的环境中,在未进行彻底测试的情况下,在运行基准后发现问题。';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = '根据设备环境的属性. 生产、培训等';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = '由于审计脚本使用bash,在定义目录和排除时可以使用*的通配符.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = '与往常一样,去菜单 – 管理 – 集成 – 创建集成 . 和上面一样,如果您运行在 Linux 上,并且您在同一服务器上有 NMIS, 您不需要做其他任何非点击 <i>提交</i>。 。 。 我不能让它变得更容易。';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = '当我们运行发现和收集设备结果时,我们大量涌现网络清单。 Blessed Subnets的特性使用这个网络列表只接受这些网络上设备的数据.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = '已注册的收集器请选择执行此发现的地点 。';

$GLOBALS["lang"]['Ask me later'] = '以后再问我';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = '向社区寻求帮助或为他人提供答案。';

$GLOBALS["lang"]['aspect_ratio'] = '光谱比';

$GLOBALS["lang"]['Aspect Ratio'] = '光谱比';

$GLOBALS["lang"]['Asset ID'] = '资产标识';

$GLOBALS["lang"]['asset_ident'] = '资产标识';

$GLOBALS["lang"]['Asset Ident'] = '资产标识';

$GLOBALS["lang"]['asset_number'] = '资产数量';

$GLOBALS["lang"]['Asset Number'] = '资产数量';

$GLOBALS["lang"]['asset_tag'] = '资产标记';

$GLOBALS["lang"]['Asset Tag'] = '资产标记';

$GLOBALS["lang"]['Assign Device to Application'] = '向应用程序指定设备';

$GLOBALS["lang"]['Assign Device to Cluster'] = '将设备指定为集群';

$GLOBALS["lang"]['Assign Device to Location'] = '指定设备到位置';

$GLOBALS["lang"]['Assign Device to Organisation'] = '指派设备到组织';

$GLOBALS["lang"]['Assign Devices to Location'] = '指定设备到位置';

$GLOBALS["lang"]['Assign Devices to Organisation'] = '指派设备到组织';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = '指派一个ISMS主管或团队';

$GLOBALS["lang"]['Assign an Operator'] = '指定运算符';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = '将任何已审计的设备指定给此 Org 。 留空以保留当前指定的 Org 中的设备( 或设置默认) 。';

$GLOBALS["lang"]['Assign the Device to a Location'] = '将设备指定为位置';

$GLOBALS["lang"]['Assign the device to an Org'] = '将设备指定为 Org';

$GLOBALS["lang"]['Assigned To'] = '被指派';

$GLOBALS["lang"]['Assigning Discovered Devices'] = '指定已发现的设备';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = '目前,我们可以使用netstat_ports,软件和用户.';

$GLOBALS["lang"]['attached_device_id'] = '附加设备标识';

$GLOBALS["lang"]['Attached Device ID'] = '附加设备标识';

$GLOBALS["lang"]['attached_to'] = '附着于';

$GLOBALS["lang"]['Attached To'] = '附着于';

$GLOBALS["lang"]['attachment'] = '附录';

$GLOBALS["lang"]['Attachment'] = '附录';

$GLOBALS["lang"]['attachments'] = '附录';

$GLOBALS["lang"]['Attachments'] = '附录';

$GLOBALS["lang"]['attack_complexity'] = '攻击复杂度';

$GLOBALS["lang"]['Attack Complexity'] = '攻击复杂度';

$GLOBALS["lang"]['attack_requirements'] = '攻击要求';

$GLOBALS["lang"]['Attack Requirements'] = '攻击要求';

$GLOBALS["lang"]['attack_vector'] = '攻击矢量';

$GLOBALS["lang"]['Attack Vector'] = '攻击矢量';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = '如果我们不审计本地主机,就试图拨打设备。';

$GLOBALS["lang"]['Attribute'] = '属性';

$GLOBALS["lang"]['attributes'] = '属性';

$GLOBALS["lang"]['Attributes'] = '属性';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = '属性被存储到 Open-AudIT 用于特定字段,目前所有字段都基于设备,位置,群和查询表. 您可以编辑的属性与以下列相关 : 类,环境,状态和类型.';

$GLOBALS["lang"]['Audit'] = '审计';

$GLOBALS["lang"]['Audit AIX'] = '审计';

$GLOBALS["lang"]['Audit DNS'] = '审计 DNS';

$GLOBALS["lang"]['Audit ESXi'] = '审计 ESXI';

$GLOBALS["lang"]['Audit Linux'] = '审计 Linux';

$GLOBALS["lang"]['audit_log'] = '审计日志';

$GLOBALS["lang"]['Audit Log'] = '审计日志';

$GLOBALS["lang"]['Audit Mount Point'] = '审计山点';

$GLOBALS["lang"]['Audit My PC'] = '审计我的电脑';

$GLOBALS["lang"]['Audit Netstat'] = '审计';

$GLOBALS["lang"]['Audit OSX'] = '审计业务厅';

$GLOBALS["lang"]['Audit Result Input'] = '审计结果投入';

$GLOBALS["lang"]['Audit Software'] = '审计软件';

$GLOBALS["lang"]['Audit Status'] = '审计状况';

$GLOBALS["lang"]['Audit Win32 Product'] = '审计 Win32 产品';

$GLOBALS["lang"]['Audit Windows'] = '审计窗口';

$GLOBALS["lang"]['Audit the Device'] = '审计设备';

$GLOBALS["lang"]['Audits'] = '审计';

$GLOBALS["lang"]['August'] = '8月(半天会议)';

$GLOBALS["lang"]['Australia'] = '澳大利亚';

$GLOBALS["lang"]['Austria'] = '奥地利';

$GLOBALS["lang"]['Auth'] = '自动';

$GLOBALS["lang"]['auth'] = '自动';

$GLOBALS["lang"]['Auth Methods'] = '认证方法';

$GLOBALS["lang"]['Authenticate only'] = '只认证';

$GLOBALS["lang"]['Authentication Passphrase'] = '认证密码句';

$GLOBALS["lang"]['Authentication Protocol'] = '认证协议';

$GLOBALS["lang"]['authority_key_ident'] = '权威密钥标识符';

$GLOBALS["lang"]['Authority Key Ident'] = '权威密钥标识符';

$GLOBALS["lang"]['Auto'] = '自动';

$GLOBALS["lang"]['auto_renew'] = '自动更新';

$GLOBALS["lang"]['Auto Renew'] = '自动更新';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = '由 Open-AudIT 服务器自动居住.';

$GLOBALS["lang"]['AutoRenew'] = '自动续签';

$GLOBALS["lang"]['automatable'] = '可自动调制';

$GLOBALS["lang"]['Automatable'] = '可自动调制';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = '基于收集器OS自动配置.';

$GLOBALS["lang"]['availability'] = '可用性';

$GLOBALS["lang"]['Availability'] = '可用性';

$GLOBALS["lang"]['Available Benchmarks'] = '可用基准';

$GLOBALS["lang"]['Awaiting Analysis'] = '等待分析';

$GLOBALS["lang"]['Azerbaijan'] = '阿塞拜疆';

$GLOBALS["lang"]['Azerbaijani'] = '阿塞拜疆语Name';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure 活动目录';

$GLOBALS["lang"]['BTU Max'] = 'BTU 马克斯';

$GLOBALS["lang"]['BTU Total'] = 'BTU 共计';

$GLOBALS["lang"]['Backbone network'] = '后骨网络';

$GLOBALS["lang"]['Backup'] = '备份';

$GLOBALS["lang"]['Bahamas the'] = '巴哈马';

$GLOBALS["lang"]['Bahrain'] = '巴林语';

$GLOBALS["lang"]['Bangladesh'] = '孟加拉国';

$GLOBALS["lang"]['bank'] = '银行';

$GLOBALS["lang"]['Bank'] = '银行';

$GLOBALS["lang"]['Banned'] = '被禁绝';

$GLOBALS["lang"]['Banned Packages'] = '被禁软件包';

$GLOBALS["lang"]['bar_code'] = '条形码';

$GLOBALS["lang"]['Bar Code'] = '条形码';

$GLOBALS["lang"]['Barbados'] = '巴巴多斯';

$GLOBALS["lang"]['Base DN'] = '基础DNA';

$GLOBALS["lang"]['base_score'] = '基数';

$GLOBALS["lang"]['Base Score'] = '基数';

$GLOBALS["lang"]['base_severity'] = '基部严重性';

$GLOBALS["lang"]['Base Severity'] = '基部严重性';

$GLOBALS["lang"]['based_on'] = '基于';

$GLOBALS["lang"]['Based On'] = '基于';

$GLOBALS["lang"]['baseline'] = '基线';

$GLOBALS["lang"]['Baseline'] = '基线';

$GLOBALS["lang"]['baseline_id'] = '基线标识';

$GLOBALS["lang"]['Baseline ID'] = '基线标识';

$GLOBALS["lang"]['baselines'] = '基线';

$GLOBALS["lang"]['Baselines'] = '基线';

$GLOBALS["lang"]['baselines_policies'] = '政策';

$GLOBALS["lang"]['Baselines Policies'] = '政策';

$GLOBALS["lang"]['Baselines Policy'] = '基线政策';

$GLOBALS["lang"]['Baselines Policy Details'] = '政策细节';

$GLOBALS["lang"]['baselines_results'] = '基线';

$GLOBALS["lang"]['Baselines Results'] = '基线';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = '基线可以比较净统计端口、用户和软件。';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = '基线使您能够将审计数据与之前定义的一组属性(你的基线)结合起来,以确定设备的合规性.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = '设备基线比较';

$GLOBALS["lang"]['Basic'] = '基础';

$GLOBALS["lang"]['Basque'] = '巴斯克语Name';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = '因为我们尽量做到透明 这是你们发送的数据';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = '能够确定哪些机器以同样的方式配置,是系统管理和审计的主要部分 — — 而现在,报告这项工作将变得简单和自动化。 一旦您定义了基线, 它将自动运行在预定时间表上的一组设备上 。 这些已执行基线的产出将可供网页浏览、输入第三方系统或甚至作为印刷报告。<br/><br/>为了审计和管理的目的,可以对固定的、已知的良好装置进行基准单个装置。 基线使您能够将审计数据与之前定义的一组属性(你的基线)结合起来,以确定设备的合规性.';

$GLOBALS["lang"]['Belarus'] = '白俄罗斯';

$GLOBALS["lang"]['Belgium'] = '比利时';

$GLOBALS["lang"]['Belize'] = '伯利兹';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = '以下为所需csv格式的示例.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = '在这些行下面是将变量注入脚本的地方. 从我们之前的例子来看, Linux 审计脚本中包含着我们这样的目录';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = '下面可以看到一个实例Org图. 如果用户有权限 <i>财务A</i> Org,他们也有A,B和C部的后裔Orgs的许可. 不论请求的收藏内容如何 。<br/><br/>如果请求的收藏允许长者,那么用户也会访问Company #1和默认Org项目. 这是针对(如上所述)查询、团体等的。<br/><br/>注意 - 用户可能可以访问默认 Org 的查询, 但这不是查询本身的结果 。 结果只显示用户可以从Finance A和Dept A,B & C处获取 - IE设备的设备.';

$GLOBALS["lang"]['Benchmark'] = '基准';

$GLOBALS["lang"]['benchmark_id'] = '基准标识';

$GLOBALS["lang"]['Benchmark ID'] = '基准标识';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = '在创建基准时自动创建基准任务.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = '基准的执行和处理需要很长的时间,因此倾向于安排时间而不是临时运行。';

$GLOBALS["lang"]['benchmarks'] = '基准';

$GLOBALS["lang"]['Benchmarks'] = '基准';

$GLOBALS["lang"]['benchmarks_exceptions'] = '基准例外';

$GLOBALS["lang"]['Benchmarks Exceptions'] = '基准例外';

$GLOBALS["lang"]['benchmarks_log'] = '基准日志';

$GLOBALS["lang"]['Benchmarks Log'] = '基准日志';

$GLOBALS["lang"]['benchmarks_policies'] = '政策';

$GLOBALS["lang"]['Benchmarks Policies'] = '政策';

$GLOBALS["lang"]['benchmarks_result'] = '结果';

$GLOBALS["lang"]['Benchmarks Result'] = '结果';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = '基准是通过提供操作系统和版本,结合一个具体的指南和一个执行该指南的机器清单来创建的. 创建后,基准在时间表上按照机器列表执行.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = '最佳实践配置基准';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = '使用 OpenSCAP 工具和政策为您的计算机提供安全建议。<p><i>OpenSCAP主页:</i> 在日益变化的计算机安全世界中,每天都发现和补上新的弱点,因此,执行安全规定必须是一个持续的过程。 它还需要包括调整政策以及定期评估和风险监测的方法。 OpenSCAP生态系统为快速、成本效益高和灵活地实施这些进程提供了工具和定制政策。</p>';

$GLOBALS["lang"]['Benefits'] = '福利';

$GLOBALS["lang"]['Bengali'] = '孟加拉语Name';

$GLOBALS["lang"]['Benin'] = '贝宁';

$GLOBALS["lang"]['Bermuda'] = '百慕大';

$GLOBALS["lang"]['best_practises'] = '最佳实践';

$GLOBALS["lang"]['Best Practises'] = '最佳实践';

$GLOBALS["lang"]['Bhutan'] = '不丹';

$GLOBALS["lang"]['bios'] = '生物';

$GLOBALS["lang"]['Bios'] = '生物';

$GLOBALS["lang"]['body'] = '体质';

$GLOBALS["lang"]['Body'] = '体质';

$GLOBALS["lang"]['Bolivia'] = '玻利维亚';

$GLOBALS["lang"]['Boolean'] = '布尔';

$GLOBALS["lang"]['Boolean 1/0'] = '布尔 1/ 0';

$GLOBALS["lang"]['Boolean y/n'] = '布尔y/n';

$GLOBALS["lang"]['boot_device'] = '启动设备';

$GLOBALS["lang"]['Boot Device'] = '启动设备';

$GLOBALS["lang"]['bootable'] = '备忘';

$GLOBALS["lang"]['Bootable'] = '备忘';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = '波斯尼亚和黑塞哥维那';

$GLOBALS["lang"]['Both forms of'] = '两种形式';

$GLOBALS["lang"]['Botswana'] = '博茨瓦纳';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = '布韦特岛(布韦托亚)';

$GLOBALS["lang"]['Brazil'] = '联合国';

$GLOBALS["lang"]['Brazilian Portuguese'] = '巴西葡萄牙语';

$GLOBALS["lang"]['Breaking it Down'] = '击倒它';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '英属印度洋领土(查戈斯群岛)';

$GLOBALS["lang"]['British Virgin Islands'] = '英属维尔京群岛';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = '向下浏览树到控制台根 - > 组件服务 - > 计算机 - > 我的电脑<br/><br/>右键点击 <i>我的电脑</i> 选择属性<br/><br/>选择 <i>默认属性</i> 选项卡';

$GLOBALS["lang"]['Brunei Darussalam'] = '文莱达鲁萨兰国';

$GLOBALS["lang"]['btu_max'] = '布图最大';

$GLOBALS["lang"]['Btu Max'] = '布图最大';

$GLOBALS["lang"]['btu_total'] = 'Btu 共计';

$GLOBALS["lang"]['Btu Total'] = 'Btu 共计';

$GLOBALS["lang"]['build_number'] = '构建编号';

$GLOBALS["lang"]['Build Number'] = '构建编号';

$GLOBALS["lang"]['build_number_full'] = '构建数字完整';

$GLOBALS["lang"]['Build Number Full'] = '构建数字完整';

$GLOBALS["lang"]['Building'] = '大楼';

$GLOBALS["lang"]['Builds trust with clients and partners'] = '与客户和伙伴建立信任';

$GLOBALS["lang"]['Bulgaria'] = '保加利亚';

$GLOBALS["lang"]['Bulgarian'] = '保加利亚语Name';

$GLOBALS["lang"]['Bulk Edit'] = '批量编辑';

$GLOBALS["lang"]['Bulk Edit Form'] = '批量编辑表单';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = '批量编辑设备属性';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = '点击下一页后, 批量编辑选择不会被保留 。';

$GLOBALS["lang"]['Burkina Faso'] = '布基纳法索';

$GLOBALS["lang"]['Burundi'] = '布隆迪';

$GLOBALS["lang"]['business_requirements'] = '业务要求';

$GLOBALS["lang"]['Business Requirements'] = '业务要求';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = '但我只有Windows客户端机器可用!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = '但我不想每次更新语言文件!';

$GLOBALS["lang"]['Buy'] = '买';

$GLOBALS["lang"]['Buy More'] = '买更多';

$GLOBALS["lang"]['Buy More Licenses'] = '购买更多许可证';

$GLOBALS["lang"]['By'] = '以';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = '默认情况下,我们将所有设备与他们的 nmis_ 管理属性集成到 <i>尔</i>。 。 。 以4.2.0,我们还运送了一个规则说 <i>如果我们发现一个设备并且它有一个有效的 SNMP OID, 标记该设备由 NMIS 管理</i>。 。 。 显然,如果这不是你想要的,你可以禁用它。';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = '默认情况下,我们跳过证书验证,因为客户倾向于使用自签证书. 要启用证书验证, 请编辑下面的文件';

$GLOBALS["lang"]['CIDR'] = 'CIDR 数据交换中心';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR 数据交换中心 遮罩';

$GLOBALS["lang"]['cli_config'] = '国 际 配置';

$GLOBALS["lang"]['CLI Config'] = '国 际 配置';

$GLOBALS["lang"]['CPU'] = 'CPU 软件';

$GLOBALS["lang"]['CPUs'] = 'CPU 组合';

$GLOBALS["lang"]['CSV'] = '简历';

$GLOBALS["lang"]['CVE'] = '简历';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = '有接收情况、等待分析、正在分析的CVEs被拒绝。 这些 CVES(大多)没有包含足够的信息以使我们能够生成正确的SQL查询.';

$GLOBALS["lang"]['Calculated from discovery.'] = '从发现中计算出来';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = '计算了此网络的有效IP地址总数 。';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '完成时计算出执行此项目所需的时间 。';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '当集成运行时计算,并包含该集成中设备的JSON表示. 每个链接 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '合并运行时计算,并包含该合并地点的JSON代表。 每个链接 <code>locations.id</code>。 。 。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '当集成运行时计算,并包含从Open-AudIT中选择的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '当集成运行时进行计算,并包含选择外部系统的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '当集成运行时计算,并包含外部系统中要更新的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '当集成运行时计算,并包含在Open-AudIT中更新的设备数量.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = '通过点击启动和搜索调用命令提示 <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = '柬埔寨';

$GLOBALS["lang"]['Cameroon'] = '喀麦隆';

$GLOBALS["lang"]['Campus Area Network'] = '校园区域网';

$GLOBALS["lang"]['Campus area network'] = '校园面积网';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = '可能会 <code>active</code>, (中文). <code>passive</code> 或空白。';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = '可能会 <code>application</code>, (中文). <code>compute</code>, (中文). <code>database</code>, (中文). <code>storage</code>, (中文). <code>virtualisation</code>, (中文). <code>web</code>, (中文). <code>other</code> 或空白。';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = '可能会 <code>auto</code>, (中文). <code>fixed</code>, (中文). <code>other</code> 或空白。';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = '可能会 <code>high availability</code>, (中文). <code>load balancing</code>, (中文). <code>performance</code>, (中文). <code>storage</code>, (中文). <code>other</code> 或空白。';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = '可能会 <code>line</code>, (中文). <code>pie</code> 或者说 <code>traffic</code>。 。 。';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = '可能会 <code>user</code> 或者说 <code>collector</code>。 。 。';

$GLOBALS["lang"]['Can be set by discovery or user.'] = '可以通过发现或用户设定.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = '可以通过发现或用户设定. 使用位置表的ID。';

$GLOBALS["lang"]['Can the user edit this item.'] = '用户能否编辑此项目 。';

$GLOBALS["lang"]['Canada'] = '加拿大';

$GLOBALS["lang"]['Cancel'] = '取消';

$GLOBALS["lang"]['capabilities'] = '能力';

$GLOBALS["lang"]['Capabilities'] = '能力';

$GLOBALS["lang"]['Capacity'] = '能力';

$GLOBALS["lang"]['Cape Verde'] = '佛得角';

$GLOBALS["lang"]['Capitalise'] = '大写';

$GLOBALS["lang"]['caption'] = '说明';

$GLOBALS["lang"]['Caption'] = '说明';

$GLOBALS["lang"]['Catalan'] = '加泰罗尼亚语Name';

$GLOBALS["lang"]['Cayman Islands'] = '开曼群岛';

$GLOBALS["lang"]['Cellular Details'] = '手机细节';

$GLOBALS["lang"]['Central African Republic'] = '中非共和国';

$GLOBALS["lang"]['certificate'] = '证书';

$GLOBALS["lang"]['Certificate'] = '证书';

$GLOBALS["lang"]['certificate_file'] = '证书文件';

$GLOBALS["lang"]['Certificate File'] = '证书文件';

$GLOBALS["lang"]['certificate_name'] = '证书名称';

$GLOBALS["lang"]['Certificate Name'] = '证书名称';

$GLOBALS["lang"]['certificates'] = '证书';

$GLOBALS["lang"]['Certificates'] = '证书';

$GLOBALS["lang"]['Certification'] = '认证';

$GLOBALS["lang"]['Certification Audit'] = '核证审计';

$GLOBALS["lang"]['Certification Process'] = '认证程序';

$GLOBALS["lang"]['Chad'] = '乍得';

$GLOBALS["lang"]['Change'] = '变动';

$GLOBALS["lang"]['change_id'] = '更改标识';

$GLOBALS["lang"]['Change ID'] = '更改标识';

$GLOBALS["lang"]['change_log'] = '更改日志';

$GLOBALS["lang"]['Change Log'] = '更改日志';

$GLOBALS["lang"]['Change Logs'] = '更改日志';

$GLOBALS["lang"]['change_type'] = '更改类型';

$GLOBALS["lang"]['Change Type'] = '更改类型';

$GLOBALS["lang"]['check_minutes'] = '检查分钟';

$GLOBALS["lang"]['Check Minutes'] = '检查分钟';

$GLOBALS["lang"]['Check for SSH on these ports'] = '检查这些端口的 SSH';

$GLOBALS["lang"]['Check this port for any SSH service.'] = '检查此端口是否为 SSH 服务 。';

$GLOBALS["lang"]['Chile'] = '地址';

$GLOBALS["lang"]['China'] = '中国';

$GLOBALS["lang"]['Chinese'] = '中国语';

$GLOBALS["lang"]['Chinese (traditional)'] = '汉语( 传统)';

$GLOBALS["lang"]['Choose'] = '选择';

$GLOBALS["lang"]['Choose (select OS first)'] = '选择( 先选择 OS)';

$GLOBALS["lang"]['Choose a Device'] = '选择设备';

$GLOBALS["lang"]['Choose a Table'] = '选择表格';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = '从第一次下移时选择任务类型 。 这将根据任务类型配置需要的额外字段 。';

$GLOBALS["lang"]['Christmas Island'] = '圣诞岛';

$GLOBALS["lang"]['cidr'] = '锡德';

$GLOBALS["lang"]['Cidr'] = '锡德';

$GLOBALS["lang"]['circuit_count'] = '电路计数';

$GLOBALS["lang"]['Circuit Count'] = '电路计数';

$GLOBALS["lang"]['circuit_status'] = '电路状态';

$GLOBALS["lang"]['Circuit Status'] = '电路状态';

$GLOBALS["lang"]['city'] = '城市';

$GLOBALS["lang"]['City'] = '城市';

$GLOBALS["lang"]['class'] = '类';

$GLOBALS["lang"]['Class'] = '类';

$GLOBALS["lang"]['class_text'] = '类文本';

$GLOBALS["lang"]['Class Text'] = '类文本';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = '单击 <i>新客户端机密</i>。 。 。';

$GLOBALS["lang"]['Click Submit to Execute'] = '单击提交执行';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = '点击 <i>属性</i> 标题下 <i>管理</i> 中央菜单栏中的页眉。 复制 <i>用户访问 URL</i>。 。 。 复制后,粘贴到Yout文本编辑器中. 您需要复制这个字段 。<br/><br/>我们的示范场是这样的<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>。 。 。<br/><br/>我们需要的是 <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (房客身份证). 这在 Open-AudIT 中用作 <i>租户</i> 球场,所以粘在上面。';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = '点击 App 注册创建新应用程序,然后点击新应用程序注册. 给它一个名字(我使用Open-AudIT),选择Web app / API作为类型,并提供任意的URL(URL不重要),现在点击Creat.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = '点击“确定”并关闭 DCOMCNFG 窗口。<br/><br/>上述变化需要重启才能生效。';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = '点击您刚刚创建的应用程序 。 显示的应用程序ID是客户端ID.<br/><br/>要创建客户端秘密,请点击设置,然后点击密钥 。 提供密钥名称并选择适当的过期日期,然后单击 Save。<br/><br/>您的值将被包含 - 这是客户端的秘密 。';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = '单击“删除”按钮从 Open-AudIT 中删除示例设备。<br/>这将从数据库中删除以下设备 。 ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = '单击编辑按钮 <i>基本 SAML 软件 配置</i>。 。 。';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '单击下面的导入按钮,将 Open-AudIT 添加到示例设备数据中。';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = '单击要编辑的字段右侧的图标。 更改字段并单击绿色图标提交。';

$GLOBALS["lang"]['Client ID'] = '客户身份';

$GLOBALS["lang"]['Client ID and Secret'] = '客户身份和秘密';

$GLOBALS["lang"]['client_ident'] = '客户端标识';

$GLOBALS["lang"]['Client Ident'] = '客户端标识';

$GLOBALS["lang"]['client_secret'] = '客户端机密';

$GLOBALS["lang"]['Client Secret'] = '客户端机密';

$GLOBALS["lang"]['client_site_name'] = '客户端网站名称';

$GLOBALS["lang"]['Client Site Name'] = '客户端网站名称';

$GLOBALS["lang"]['Close'] = '关闭';

$GLOBALS["lang"]['Closed'] = '关闭';

$GLOBALS["lang"]['Cloud'] = '云头';

$GLOBALS["lang"]['Cloud Details'] = '云层细节';

$GLOBALS["lang"]['Cloud Discovery'] = '云发现';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = '云发现与审计';

$GLOBALS["lang"]['cloud_id'] = '云号';

$GLOBALS["lang"]['Cloud ID'] = '云号';

$GLOBALS["lang"]['cloud_log'] = '云日志';

$GLOBALS["lang"]['Cloud Log'] = '云日志';

$GLOBALS["lang"]['cloud_name'] = '云名称';

$GLOBALS["lang"]['Cloud Name'] = '云名称';

$GLOBALS["lang"]['Cloud Network'] = '云层网络';

$GLOBALS["lang"]['clouds'] = '云层';

$GLOBALS["lang"]['Clouds'] = '云层';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Clouds是Open-AudIT Entertainment许可客户可以使用的功能.';

$GLOBALS["lang"]['cluster'] = '分组';

$GLOBALS["lang"]['Cluster'] = '分组';

$GLOBALS["lang"]['cluster_id'] = '集群标识';

$GLOBALS["lang"]['Cluster ID'] = '集群标识';

$GLOBALS["lang"]['cluster_name'] = '集群名称';

$GLOBALS["lang"]['Cluster Name'] = '集群名称';

$GLOBALS["lang"]['cluster_type'] = '集群类型';

$GLOBALS["lang"]['Cluster Type'] = '集群类型';

$GLOBALS["lang"]['clusters'] = '集群';

$GLOBALS["lang"]['Clusters'] = '集群';

$GLOBALS["lang"]['Clusters and Reporting'] = '分组和报告';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = '科科斯(基林)群岛';

$GLOBALS["lang"]['Collection'] = '收藏';

$GLOBALS["lang"]['Collections'] = '收款';

$GLOBALS["lang"]['Collector'] = '收集器';

$GLOBALS["lang"]['Collector (UUID)'] = '收集器( UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server是企业号唯一的特性. 企业客户可免费获得一份收藏许可证。 可根据需要购买额外收藏许可证。';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server 为您设计了一个远程或 <i>收藏家</i> 例如Open-AudIT在远程机器上运行。 收集器的例子可能位于另一个安全区,子网,云宿或客户点. 然后远程采集器在当地对设备进行所有发现和审计,以避免联网和防火墙的复杂性。 收集器一旦注册,就完全由 <i>服务器</i>。 。 。 这意味着您只需要从收集器到服务器的 HTTP 或 HTTPS 连接 。';

$GLOBALS["lang"]['Collector Dashboard'] = '收藏机盘';

$GLOBALS["lang"]['Collector Name'] = '收藏者名称';

$GLOBALS["lang"]['collector_uuid'] = '收集器Uuid';

$GLOBALS["lang"]['Collector Uuid'] = '收集器Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = '收藏器任务在启用收藏器特性时自动设置. 收集器任务不应由用户直接创建. 收集器任务可以在创建后进行频率编辑. 如果Open-AudIT服务器有向它报告的收集器,则会提供额外的下调. 您可以选择此选项来指定任务要运行的收集器 。 仅支持收集器的发现任务 。';

$GLOBALS["lang"]['Collectors'] = '收集器';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = '收集器可以使用两种模式之一:收集器和StandAlone. 在Collector模式下,Open-AudIT实例由主服务器管理. 在Stand Oleone模式下,实例被本地管理,并将任何发现的设备转发到主服务器.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = '远程发现采集器';

$GLOBALS["lang"]['Colombia'] = '哥伦比亚';

$GLOBALS["lang"]['color'] = '颜色';

$GLOBALS["lang"]['Color'] = '颜色';

$GLOBALS["lang"]['Column'] = '栏';

$GLOBALS["lang"]['Columns'] = '列数';

$GLOBALS["lang"]['command'] = '命令';

$GLOBALS["lang"]['Command'] = '命令';

$GLOBALS["lang"]['command_options'] = '命令选项';

$GLOBALS["lang"]['Command Options'] = '命令选项';

$GLOBALS["lang"]['command_output'] = '命令输出';

$GLOBALS["lang"]['Command Output'] = '命令输出';

$GLOBALS["lang"]['command_status'] = '命令状态';

$GLOBALS["lang"]['Command Status'] = '命令状态';

$GLOBALS["lang"]['command_time_to_execute'] = '执行的命令时间';

$GLOBALS["lang"]['Command Time To Execute'] = '执行的命令时间';

$GLOBALS["lang"]['comment'] = '注释';

$GLOBALS["lang"]['Comment'] = '注释';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = '注释下行(约行49左右). 把大麻放在线的开头';

$GLOBALS["lang"]['comments'] = '评论';

$GLOBALS["lang"]['Comments'] = '评论';

$GLOBALS["lang"]['commercial'] = '商业';

$GLOBALS["lang"]['Commercial'] = '商业';

$GLOBALS["lang"]['Commercial Support'] = '商业支助';

$GLOBALS["lang"]['common_name'] = '通用名称';

$GLOBALS["lang"]['Common Name'] = '通用名称';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = '一般称为客户端Id.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = '一般称为客户端Secret.';

$GLOBALS["lang"]['Community'] = '社区';

$GLOBALS["lang"]['Community Questions'] = '社区问题';

$GLOBALS["lang"]['Community String'] = '社区字符串';

$GLOBALS["lang"]['Comoros the'] = '科摩罗';

$GLOBALS["lang"]['Compact'] = '压缩';

$GLOBALS["lang"]['Company'] = '企业';

$GLOBALS["lang"]['Complete these steps.'] = '完成这些步骤。';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = '攻击的复杂性(低或高).';

$GLOBALS["lang"]['Component Table'] = '构成部分表';

$GLOBALS["lang"]['Components (All Devices)'] = '组件( 所有设备)';

$GLOBALS["lang"]['Compute'] = '计算';

$GLOBALS["lang"]['Condition'] = '条件';

$GLOBALS["lang"]['Conduct a risk assessment'] = '进行风险评估';

$GLOBALS["lang"]['Conduct awareness and training programs'] = '开展提高认识和培训方案';

$GLOBALS["lang"]['Conduct management review meetings'] = '举行管理审查会议';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = '进行定期监督审计(通常每年一次)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = '由一个经认可的机构分两个阶段进行';

$GLOBALS["lang"]['Config'] = '配置';

$GLOBALS["lang"]['Config Default, currently '] = '配置默认值, 目前 ';

$GLOBALS["lang"]['config_file'] = '配置文件';

$GLOBALS["lang"]['Config File'] = '配置文件';

$GLOBALS["lang"]['config_manager_error_code'] = '配置管理器错误代码';

$GLOBALS["lang"]['Config Manager Error Code'] = '配置管理器错误代码';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = '基于角色的配置访问控制';

$GLOBALS["lang"]['configuration'] = '配置';

$GLOBALS["lang"]['Configuration'] = '配置';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = '配置变化检测和报告';

$GLOBALS["lang"]['Configure'] = '配置';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = '配置代理服务器侧以按时间表进行审计';

$GLOBALS["lang"]['Congo'] = '刚果';

$GLOBALS["lang"]['Congo the'] = '刚果';

$GLOBALS["lang"]['Connected To'] = '已连接到';

$GLOBALS["lang"]['connection'] = '连接';

$GLOBALS["lang"]['Connection'] = '连接';

$GLOBALS["lang"]['Connection Options'] = '连接选项';

$GLOBALS["lang"]['connection_status'] = '连接状态';

$GLOBALS["lang"]['Connection Status'] = '连接状态';

$GLOBALS["lang"]['connections'] = '连接';

$GLOBALS["lang"]['Connections'] = '连接';

$GLOBALS["lang"]['Consider filtered Ports Open'] = '考虑过滤 打开端口';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = '认为已过滤 打开端口';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = '咨询、执行和其他服务可通过下列途径提供:';

$GLOBALS["lang"]['contact'] = '联系人';

$GLOBALS["lang"]['Contact'] = '联系人';

$GLOBALS["lang"]['contact_name'] = '联系人名称';

$GLOBALS["lang"]['Contact Name'] = '联系人名称';

$GLOBALS["lang"]['contained_in'] = '包含在';

$GLOBALS["lang"]['Contained In'] = '包含在';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = '包含一个 JSON 对象,详细列出相关的部件及其位置 。';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = '包含决定我们是否应使用 ssh, snmp 和 wmi 发现选项的字段 。 一个JSON对象。';

$GLOBALS["lang"]['Context & Leadership'] = '背景和领导';

$GLOBALS["lang"]['Context Engine ID'] = '背景引擎标识';

$GLOBALS["lang"]['Context Name'] = '上下文名称';

$GLOBALS["lang"]['Continuously improve the ISMS'] = '不断改进信息管理系统';

$GLOBALS["lang"]['contractual_obligations'] = '合同义务';

$GLOBALS["lang"]['Contractual Obligations'] = '合同义务';

$GLOBALS["lang"]['Cook Islands'] = '库克群岛';

$GLOBALS["lang"]['Copy and paste an audit result'] = '复制并粘贴审计结果';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '复制并粘贴到论坛、 Open-AudIT 或您需要提供该项目的任何地方。';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = '复制 <i>应用程序标识</i> 字段并粘贴到 Open-AudIT 中 <i>客户身份</i> 字段。';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = '复制 <i>客户身份</i> 把它粘在公开的AudIT上 <i>客户身份</i> 字段。<br/>如果没有秘密,请点击 <i>生成新秘密</i>并粘贴到 Open-AudIT 中 <i>客户端机密</i> 字段。';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = '复制值并将其粘贴到 Open-AudIT 表格中 <i>客户端机密</i> 字段。';

$GLOBALS["lang"]['core_count'] = '核心数';

$GLOBALS["lang"]['Core Count'] = '核心数';

$GLOBALS["lang"]['Cores'] = '核心';

$GLOBALS["lang"]['cost_center'] = '费用中心';

$GLOBALS["lang"]['Cost Center'] = '费用中心';

$GLOBALS["lang"]['cost_code'] = '成本代码';

$GLOBALS["lang"]['Cost Code'] = '成本代码';

$GLOBALS["lang"]['Costa Rica'] = '哥斯达黎加';

$GLOBALS["lang"]['Cote d Ivoire'] = '科特迪瓦';

$GLOBALS["lang"]['count'] = '计数';

$GLOBALS["lang"]['Count'] = '计数';

$GLOBALS["lang"]['country'] = '国家';

$GLOBALS["lang"]['Country'] = '国家';

$GLOBALS["lang"]['country_code'] = '国家代码';

$GLOBALS["lang"]['Country Code'] = '国家代码';

$GLOBALS["lang"]['cpu_count'] = 'Cpu 数';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu 数';

$GLOBALS["lang"]['Create'] = '创建';

$GLOBALS["lang"]['Create Example Devices'] = '创建示例设备';

$GLOBALS["lang"]['create_external_count'] = '创建外部计数';

$GLOBALS["lang"]['Create External Count'] = '创建外部计数';

$GLOBALS["lang"]['create_external_from_internal'] = '从内部创建外部';

$GLOBALS["lang"]['Create External From Internal'] = '从内部创建外部';

$GLOBALS["lang"]['Create File'] = '创建文件';

$GLOBALS["lang"]['Create Geocode'] = '创建地理代码';

$GLOBALS["lang"]['create_internal_count'] = '创建内部计数';

$GLOBALS["lang"]['Create Internal Count'] = '创建内部计数';

$GLOBALS["lang"]['create_internal_from_external'] = '从外部创建内部';

$GLOBALS["lang"]['Create Internal From External'] = '从外部创建内部';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = '从 Open-AudIT 创建 NSIS 设备';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = '创建 Open-AudIT 设备从 ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = '创建 Open-AudIT NMIS 设备';

$GLOBALS["lang"]['Create a Baseline for the example device'] = '为示例设备创建基线';

$GLOBALS["lang"]['Create a Discovery'] = '创建发现';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = '创建适用声明';

$GLOBALS["lang"]['created_by'] = '创建者';

$GLOBALS["lang"]['Created By'] = '创建者';

$GLOBALS["lang"]['created_date'] = '创建日期';

$GLOBALS["lang"]['Created Date'] = '创建日期';

$GLOBALS["lang"]['Creating'] = '创建';

$GLOBALS["lang"]['Creating Credentials'] = '创建证书';

$GLOBALS["lang"]['Creating Device'] = '创建设备';

$GLOBALS["lang"]['Creating Widgets'] = '创建部件';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = '创建发现 扫描选项条目';

$GLOBALS["lang"]['Creating a Query'] = '创建查询';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = '为组创建 SQL 语句';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = '为查询创建 SQL 语句';

$GLOBALS["lang"]['Creating an Integration'] = '创造一体化';

$GLOBALS["lang"]['creator'] = '创建者';

$GLOBALS["lang"]['Creator'] = '创建者';

$GLOBALS["lang"]['credential'] = '证书';

$GLOBALS["lang"]['Credential'] = '证书';

$GLOBALS["lang"]['Credentials'] = '全权证书';

$GLOBALS["lang"]['Credentials Client ID'] = '身份验证客户端标识';

$GLOBALS["lang"]['Credentials Subscription ID'] = '全权证书订阅 身份证';

$GLOBALS["lang"]['Credentials Tenant ID'] = '身份证';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = '全权证书存于 <i>全权证书</i> 数据库表格。 实际的证书信息在存储中加密. 当一个发现器运行时,一个设备会从数据库中获取其特定的证书,解密并测试. 如果失败,则还检索到证书清单,进行解密,然后从已知以前工作过的证书开始对设备进行测试。 设备特定证书存储在 <i>证书</i> 表格(注-无) <i>编号</i> 页:1 SSH 密钥在 SSH 用户名/ 密码前进行测试. 在测试 SSH 时, 证书也会被标记为与 sudo 合作或成为 root 。';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = '证书可以有几种不同类型之一 - snmp v.1 / v.2, snmp v.3, ssh, ssh 密钥,窗口全部执行. CAVET - Ssh密钥尚未为Windows Open-AudIT服务器执行.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Cloud Discovery 中使用的 Amazon AWS 证书';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = '微软的全权证书 Azure 用于云发现';

$GLOBALS["lang"]['Critical'] = '关键';

$GLOBALS["lang"]['criticality'] = '关键度';

$GLOBALS["lang"]['Criticality'] = '关键度';

$GLOBALS["lang"]['Croatia'] = '克罗地亚';

$GLOBALS["lang"]['Cuba'] = '古巴';

$GLOBALS["lang"]['current'] = '当前';

$GLOBALS["lang"]['Current'] = '当前';

$GLOBALS["lang"]['Current Discovery Processes'] = '当前发现进程';

$GLOBALS["lang"]['Current date & time is '] = '当前日期和时间是( T) ';

$GLOBALS["lang"]['Currently Installed'] = '目前已安装';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = '目前支持的类型是 <code>snmp</code>, (中文). <code>snmp_v3</code>, (中文). <code>ssh</code>, (中文). <code>ssh_key</code> 或者说 <code>windows</code>。 。 。';

$GLOBALS["lang"]['Custom Fields'] = '自定义字段';

$GLOBALS["lang"]['Custom TCP Ports'] = '自定义 TCP 端口';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = '自定义 TCP 端口. 除了顶级TCP港外 我们还会扫描任何特定港口 逗号隔离,没有空格.';

$GLOBALS["lang"]['Custom UDP Ports'] = '自定义 UDP 港口';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = '自定义 UDP 端口 。 除了UDP顶端口岸之外 我们还会扫描任何特定港口 逗号隔离,没有空格.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = '每个发现可自定义扫描选项';

$GLOBALS["lang"]['Cve'] = '简历';

$GLOBALS["lang"]['Cyprus'] = '塞浦路斯';

$GLOBALS["lang"]['Czech'] = '捷克语';

$GLOBALS["lang"]['Czech Republic'] = '捷克共和国';

$GLOBALS["lang"]['DHCP'] = 'DHCP 人权方案';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN 账户( 可选)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN 密码( 可选)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS 东帝汶国防军';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS 主机名';

$GLOBALS["lang"]['Danish'] = '丹麦语Name';

$GLOBALS["lang"]['dashboard_id'] = '盘式识别码';

$GLOBALS["lang"]['Dashboard ID'] = '盘式识别码';

$GLOBALS["lang"]['Dashboard Widgets'] = '磁盘板部件';

$GLOBALS["lang"]['dashboards'] = '仪表板';

$GLOBALS["lang"]['Dashboards'] = '仪表板';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards和Widgets让企业号获得许可的客户可以创建,阅读,更新和删除这两份收藏,以确保其主页正是他们需要看到的. 不仅如此,用户还可以将给定的仪表板设置为自己的主页. 每个人不需要使用同一个主页(dashboard),也不需要同一个部件在仪表板上. 专业的持证客户可以在两个预先定义的仪表板中选择设置为自己的主页.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = '提供电线板 <i>一览</i> 对您网络上发生的变化有重要可见度, 同时提供设备类型、制造商、操作系统等的快速链接。';

$GLOBALS["lang"]['Dashboards use'] = '使用电线板';

$GLOBALS["lang"]['Data'] = '数据';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = '数据导出 - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = '数据保留';

$GLOBALS["lang"]['Database'] = '数据库';

$GLOBALS["lang"]['db_action'] = '数据库动作';

$GLOBALS["lang"]['Database Action'] = '数据库动作';

$GLOBALS["lang"]['db_column'] = '数据库列';

$GLOBALS["lang"]['Database Column'] = '数据库列';

$GLOBALS["lang"]['Database Definition'] = '数据库定义';

$GLOBALS["lang"]['db_row'] = '数据库行';

$GLOBALS["lang"]['Database Row'] = '数据库行';

$GLOBALS["lang"]['Database Schema'] = '数据库Schema';

$GLOBALS["lang"]['Database Server Discovery'] = '数据库服务器发现';

$GLOBALS["lang"]['db_table'] = '数据库表';

$GLOBALS["lang"]['Database Table'] = '数据库表';

$GLOBALS["lang"]['Database Tables'] = '数据库表格';

$GLOBALS["lang"]['dataset_title'] = '数据集标题';

$GLOBALS["lang"]['Dataset Title'] = '数据集标题';

$GLOBALS["lang"]['date'] = '日期';

$GLOBALS["lang"]['Date'] = '日期';

$GLOBALS["lang"]['Date D-M-Y'] = '日期 D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = '日期 M -D -Y';

$GLOBALS["lang"]['Date Now'] = '现在约会';

$GLOBALS["lang"]['date_of_manufacture'] = '制造日期';

$GLOBALS["lang"]['Date Of Manufacture'] = '制造日期';

$GLOBALS["lang"]['date_paid'] = '支付日期';

$GLOBALS["lang"]['Date Paid'] = '支付日期';

$GLOBALS["lang"]['date_received'] = '收到日期';

$GLOBALS["lang"]['Date Received'] = '收到日期';

$GLOBALS["lang"]['Date Y-M-D'] = '约会Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'CVE最后一次更新的日期和时间.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVE出版日期和时间.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE出版日期.';

$GLOBALS["lang"]['DateTime Now'] = '现在约会时间';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = '日期时间 Y -M -D (英语). H:M:S (韩语)';

$GLOBALS["lang"]['day_of_month'] = '月数日';

$GLOBALS["lang"]['Day Of Month'] = '月数日';

$GLOBALS["lang"]['day_of_week'] = '周日( 周日 )';

$GLOBALS["lang"]['Day Of Week'] = '周日( 周日 )';

$GLOBALS["lang"]['Day of Month'] = '月份天数';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus 标识符';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus 标识符';

$GLOBALS["lang"]['Debug'] = '调试';

$GLOBALS["lang"]['Debugging'] = '调试';

$GLOBALS["lang"]['Debugging a Script'] = '调试脚本';

$GLOBALS["lang"]['December'] = '12月(半天)';

$GLOBALS["lang"]['Decommission'] = '退役';

$GLOBALS["lang"]['Default'] = '默认';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = '默认验证 级别 - 设定为连接';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = '默认假名 级别 - 设定为识别';

$GLOBALS["lang"]['Default Items'] = '默认项目';

$GLOBALS["lang"]['Default Orgs Groups'] = '默认组合';

$GLOBALS["lang"]['Default Roles Groups'] = '默认角色组';

$GLOBALS["lang"]['Default Value'] = '默认值';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '默认389。 通常636用于活动目录LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = '默认 <code>3</code> 用于 LDAP 和活动目录。';

$GLOBALS["lang"]['Defaults'] = '默认';

$GLOBALS["lang"]['Deferred'] = '推迟';

$GLOBALS["lang"]['Define project scope and objectives'] = '界定项目范围和目标';

$GLOBALS["lang"]['Define the ISMS scope'] = '界定信息系统管理系统的范围';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = '界定组织的背景(内部/外部问题)';

$GLOBALS["lang"]['delay_minutes'] = '延迟分钟';

$GLOBALS["lang"]['Delay Minutes'] = '延迟分钟';

$GLOBALS["lang"]['Delete'] = '删除';

$GLOBALS["lang"]['Delete Example Devices'] = '删除示例设备';

$GLOBALS["lang"]['delete_external_from_internal'] = '从内部删除外部';

$GLOBALS["lang"]['Delete External From Internal'] = '从内部删除外部';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = '删除 NMIS 如果没有在 Open-AudIT 中安装设备';

$GLOBALS["lang"]['Delete a {collection} entry.'] = '删除 {收集} 条目 。';

$GLOBALS["lang"]['Delete from Application'] = '删除应用程序';

$GLOBALS["lang"]['Delete from Cluster'] = '从集群删除';

$GLOBALS["lang"]['Denmark'] = '丹麦';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = '由审计衍生或用户手动设定.';

$GLOBALS["lang"]['Derived by audit.'] = '由审计衍生.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = '来源 <code>rack_devices.device_id</code>。 。 。';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = '来源 <code>rack_devices.rack_id</code>。 。 。';

$GLOBALS["lang"]['Derived from Collector discovery.'] = '来源于收集器的发现.';

$GLOBALS["lang"]['Derived from OS Name.'] = '衍生自OS名称.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = '衍生自云发现.';

$GLOBALS["lang"]['Derived from device audits.'] = '来自设备审计。';

$GLOBALS["lang"]['Derived from device type and OS.'] = '衍生自设备类型和OS.';

$GLOBALS["lang"]['Derived from discovery.'] = '来源于发现。';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = '从主机名, sysName, dns hostname 和 IP 按此顺序衍生.';

$GLOBALS["lang"]['Derived from the integer severity.'] = '由整数严重性衍生出来.';

$GLOBALS["lang"]['description'] = '说明';

$GLOBALS["lang"]['Description'] = '说明';

$GLOBALS["lang"]['destination'] = '目标';

$GLOBALS["lang"]['Destination'] = '目标';

$GLOBALS["lang"]['detail'] = '细节';

$GLOBALS["lang"]['Detail'] = '细节';

$GLOBALS["lang"]['Details'] = '细节';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '关于谁通常在这个网站可以接触的细节.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = '确定要对数据库进行基线检查并创建列表报告的次数';

$GLOBALS["lang"]['Determine risk treatment options'] = '确定风险处理备选方案';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = '制定风险处理计划';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = '制定政策、程序和控制措施';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = '编制必要的ISMS文件(政策、程序等)';

$GLOBALS["lang"]['device'] = '设备';

$GLOBALS["lang"]['Device'] = '设备';

$GLOBALS["lang"]['Device Audits'] = '设备审计';

$GLOBALS["lang"]['Device Component Names'] = '设备组件名称';

$GLOBALS["lang"]['Device ID'] = '设备标识';

$GLOBALS["lang"]['device_id'] = '设备标识';

$GLOBALS["lang"]['device_id_a'] = '设备 ID A';

$GLOBALS["lang"]['Device ID A'] = '设备 ID A';

$GLOBALS["lang"]['device_id_b'] = '设备 ID B';

$GLOBALS["lang"]['Device ID B'] = '设备 ID B';

$GLOBALS["lang"]['Device Matching Rules'] = '设备匹配规则';

$GLOBALS["lang"]['Device Name'] = '设备名称';

$GLOBALS["lang"]['Device Result'] = '设备结果';

$GLOBALS["lang"]['Device Results'] = '设备结果';

$GLOBALS["lang"]['Device Seed'] = '设备种子';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = '设备种子 发现是一个很好的选择,如果你知道你的网络由一系列的子网组成,但是你不确定它们是什么. 用本地路由器播种发现,并观看你的网络在你的眼前展开.';

$GLOBALS["lang"]['Device Seed IP'] = '设备种子 IP';

$GLOBALS["lang"]['Device Status'] = '设备状态';

$GLOBALS["lang"]['Device Types'] = '设备类型';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = '设备、软件和硬件审计';

$GLOBALS["lang"]['Device is in the Subnet'] = '设备在子网';

$GLOBALS["lang"]['Devices'] = '设备';

$GLOBALS["lang"]['devices_assigned_to_location'] = '设备指定到位置';

$GLOBALS["lang"]['Devices Assigned To Location'] = '设备指定到位置';

$GLOBALS["lang"]['devices_assigned_to_org'] = '指定给 Org 的设备';

$GLOBALS["lang"]['Devices Assigned To Org'] = '指定给 Org 的设备';

$GLOBALS["lang"]['Devices Audited'] = '已审计设备';

$GLOBALS["lang"]['Devices Collection'] = '设备收藏';

$GLOBALS["lang"]['Devices Created in '] = '创建于 ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = '在 Open-AudIT 中创建的设备';

$GLOBALS["lang"]['devices_default_display_columns'] = '设备默认显示列';

$GLOBALS["lang"]['Devices Default Display Columns'] = '设备默认显示列';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '设备找到最后7天';

$GLOBALS["lang"]['Devices Found Today'] = '今天找到的设备';

$GLOBALS["lang"]['Devices Found Yesterday'] = '昨天找到的设备';

$GLOBALS["lang"]['Devices Missing Information'] = '设备缺少信息';

$GLOBALS["lang"]['Devices Not Audited'] = '未审计的设备';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '未见设备 30 天';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '未见设备 7 天';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '未见设备 90 天';

$GLOBALS["lang"]['Devices Older Than X'] = '设备旧于 X';

$GLOBALS["lang"]['Devices Retrieved via API'] = '通过 API 获取的设备';

$GLOBALS["lang"]['Devices Selected from '] = '从选中的设备 ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = '从 Open-AudIT 中选择的设备';

$GLOBALS["lang"]['Devices Updated in '] = '设备更新于 ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = '在 Open-AudIT 中更新的设备';

$GLOBALS["lang"]['Devices are being benchmarked.'] = '设备正在基准化。';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = '设备没有设定基准 。';

$GLOBALS["lang"]['Devices could be benchmarked.'] = '设备可以设定基准 。';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open-AudIT 设备';

$GLOBALS["lang"]['Devices in Running State'] = '运行状态中的设备';

$GLOBALS["lang"]['Devices in Stopped State'] = '停止状态中的设备';

$GLOBALS["lang"]['Devices in this'] = '此设备';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = '如果设备状态设定为 <i>删除</i>。 。 。 任何其他状态都允许出现匹配.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = '有过期保证的设备';

$GLOBALS["lang"]['Devired from type or OS.'] = '从类型或OS。';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp 启用';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp 启用';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp 租赁期满';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp 租赁期满';

$GLOBALS["lang"]['dhcp_lease_obtained'] = '租赁';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = '租赁';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp 服务器';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp 服务器';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = '命令是否成功完成并返回预期数据 。';

$GLOBALS["lang"]['direction'] = '方向';

$GLOBALS["lang"]['Direction'] = '方向';

$GLOBALS["lang"]['directory'] = '目录';

$GLOBALS["lang"]['Directory'] = '目录';

$GLOBALS["lang"]['disabled'] = '已禁用';

$GLOBALS["lang"]['Disabled'] = '已禁用';

$GLOBALS["lang"]['discard'] = '丢弃';

$GLOBALS["lang"]['Discard'] = '丢弃';

$GLOBALS["lang"]['Discover'] = '发现';

$GLOBALS["lang"]['Discoveries'] = '发现';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = '发现是Open-AudIT工作的核心。 不然你怎么会知道? <i>你的网络上有什么?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = '发现(Discoveries)是允许您在一次点击中运行网络上的发现的条目,而不每次输入网络的细节.';

$GLOBALS["lang"]['Discovery'] = '发现';

$GLOBALS["lang"]['Discovery Change Logs'] = '发现更改日志';

$GLOBALS["lang"]['Discovery Data Retention'] = '发现数据保留';

$GLOBALS["lang"]['discovery_id'] = '发现身份';

$GLOBALS["lang"]['Discovery ID'] = '发现身份';

$GLOBALS["lang"]['Discovery Issues'] = '发现问题';

$GLOBALS["lang"]['discovery_log'] = '发现日志';

$GLOBALS["lang"]['Discovery Log'] = '发现日志';

$GLOBALS["lang"]['Discovery Match Options'] = '发现匹配选项';

$GLOBALS["lang"]['Discovery Name'] = '发现名称';

$GLOBALS["lang"]['Discovery Options'] = '发现选项';

$GLOBALS["lang"]['Discovery Queue Count'] = '发现队列计数';

$GLOBALS["lang"]['Discovery Queue Limit'] = '发现队列限制';

$GLOBALS["lang"]['discovery_run'] = '发现运行';

$GLOBALS["lang"]['Discovery Run'] = '发现运行';

$GLOBALS["lang"]['discovery_scan_options'] = '发现扫描选项';

$GLOBALS["lang"]['Discovery Scan Options'] = '发现扫描选项';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = '发现扫描 选项只是另一个项目收藏 。 企业用户可以根据需要创建,阅读,更新和删除条目. 专业用户可以阅读所有条目,但不创建新条目,更新现有条目或删除条目. 社区用户没有允许访问此收藏的GUI.';

$GLOBALS["lang"]['Discovery Scan Types'] = '发现扫描类型';

$GLOBALS["lang"]['Discovery Support'] = '发现支持';

$GLOBALS["lang"]['Discovery has stopped working'] = '发现已经停止工作了';

$GLOBALS["lang"]['disk'] = '磁盘';

$GLOBALS["lang"]['Disk'] = '磁盘';

$GLOBALS["lang"]['display_version'] = '显示版本';

$GLOBALS["lang"]['Display Version'] = '显示版本';

$GLOBALS["lang"]['Display in Menu'] = '在菜单中显示';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = '显示提交 POST /{Collection} 的标准网页表 。';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = '显示提交 POST /{collection}/ 导入的标准网络表 。';

$GLOBALS["lang"]['district'] = '地区';

$GLOBALS["lang"]['District'] = '地区';

$GLOBALS["lang"]['Djibouti'] = '吉布提';

$GLOBALS["lang"]['dns'] = '单位';

$GLOBALS["lang"]['Dns'] = '单位';

$GLOBALS["lang"]['dns_domain'] = 'Dns 域';

$GLOBALS["lang"]['Dns Domain'] = 'Dns 域';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns 域注册已启用';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns 域注册已启用';

$GLOBALS["lang"]['dns_fqdn'] = '日记';

$GLOBALS["lang"]['Dns Fqdn'] = '日记';

$GLOBALS["lang"]['dns_host_name'] = 'Dns 主机名称';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns 主机名称';

$GLOBALS["lang"]['dns_hostname'] = 'Dns 主机名';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns 主机名';

$GLOBALS["lang"]['dns_server'] = 'Dns 服务器';

$GLOBALS["lang"]['Dns Server'] = 'Dns 服务器';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = '不要忘记所有文档的 Open-AudIT wiki 。';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = '别忘了维基上有一大堆文献';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = '不要扫描这些 TCP 端口 。';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = '不要扫描这些 UDP 端口 。';

$GLOBALS["lang"]['Do not show me again'] = '别再给我看';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = '你有这个配置的完美例子吗? 也许一个位于实验室环境中的设备 或者一个工作站 你用来克隆工作站 VMs 从。';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '您想要使用安全运输( LDAPS) 或普通的未加密的 LDAP 。';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '您是否想要看到左侧的标准边栏 。';

$GLOBALS["lang"]['documentation'] = '文档';

$GLOBALS["lang"]['Documentation'] = '文档';

$GLOBALS["lang"]['Documentation about a particular collection.'] = '某集文献.';

$GLOBALS["lang"]['Does Not Equal'] = '不等于一个';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = '许可证是否适用于儿童兽人。';

$GLOBALS["lang"]['domain'] = '域名';

$GLOBALS["lang"]['Domain'] = '域名';

$GLOBALS["lang"]['domain_controller_address'] = '域控制器地址';

$GLOBALS["lang"]['Domain Controller Address'] = '域控制器地址';

$GLOBALS["lang"]['domain_controller_name'] = '域控制器 名称';

$GLOBALS["lang"]['Domain Controller Name'] = '域控制器 名称';

$GLOBALS["lang"]['domain_role'] = '域名角色';

$GLOBALS["lang"]['Domain Role'] = '域名角色';

$GLOBALS["lang"]['domain_short'] = '域短';

$GLOBALS["lang"]['Domain Short'] = '域短';

$GLOBALS["lang"]['Dominica'] = '多米尼克';

$GLOBALS["lang"]['Dominican Republic'] = '多米尼加共和国';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = '别牵我的手,我知道我在干嘛 没有过滤器和加入自定义表格的能力 。';

$GLOBALS["lang"]['Download'] = '下载';

$GLOBALS["lang"]['Download a File'] = '下载文件';

$GLOBALS["lang"]['Download a file from URL'] = '从 URL 下载文件';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = '直接下载测试窗口_ 客户端. vbs 脚本';

$GLOBALS["lang"]['Download your updated version from'] = '下载您的更新版本';

$GLOBALS["lang"]['driver'] = '驱动程序';

$GLOBALS["lang"]['Driver'] = '驱动程序';

$GLOBALS["lang"]['duplex'] = '双面';

$GLOBALS["lang"]['Duplex'] = '双面';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = '复制设备/ 丢失设备';

$GLOBALS["lang"]['duration'] = '会期';

$GLOBALS["lang"]['Duration'] = '会期';

$GLOBALS["lang"]['Dutch'] = '荷兰语Name';

$GLOBALS["lang"]['ESXi'] = '欧西';

$GLOBALS["lang"]['EULA'] = '欧盟LA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = '每个IP都会被扫描到已配置的发现选项(参见发现扫描选项和发现 - Community vs Professional vs Enterprise on the wiki). 一般来说,Nmap会测试端口22(sh),135(wmi),62078(iPhone)和UDP 161(snmp). 如果22、135或161回复,则取回证书清单,并依次测试每个证书。 第一批工作全权证书用于从设备直接进行进一步查询。 注 -- -- 如果先前发现并持有工作证书的设备,则首先测试这些证书。 只有在失败的情况下,其他证书才会尝试。';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = '每次发现一个设备或处理一个审计结果,都会从数据库中检索所有规则,并与特定设备的属性相对应运行. 规则一次对一个设备运行 - 没有设施说 <i>对所有设备执行规则<i> 或者说 <i>针对这些设备运行规则<i>。 。 。 单个规则会测试设备的一个或多个属性,如果这些属性符合规则,结果会被应用. 有几个属性可以测试. 可以设置几个属性. 把这当做是Open-AudIT的系统</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = '很容易在网络上运行一个发现,一次点击一次,而不每次输入网络的细节.';

$GLOBALS["lang"]['Ecuador'] = '厄瓜多尔';

$GLOBALS["lang"]['Edit'] = '编辑';

$GLOBALS["lang"]['edit_log'] = '编辑日志';

$GLOBALS["lang"]['Edit Log'] = '编辑日志';

$GLOBALS["lang"]['editable'] = '可编辑';

$GLOBALS["lang"]['Editable'] = '可编辑';

$GLOBALS["lang"]['edited_by'] = '编辑由';

$GLOBALS["lang"]['Edited By'] = '编辑由';

$GLOBALS["lang"]['edited_date'] = '编辑日期';

$GLOBALS["lang"]['Edited Date'] = '编辑日期';

$GLOBALS["lang"]['edition'] = '编辑';

$GLOBALS["lang"]['Edition'] = '编辑';

$GLOBALS["lang"]['Egypt'] = '埃及';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = '无论是亚马逊,谷歌还是微软.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = '要么没有,要么现在。

<strong>无</strong> - 攻击的成功不取决于脆弱系统的部署和执行条件。 攻击者可以期望能够达到脆弱性,并在所有或大多数脆弱性情况下进行剥削。

<strong>现</strong> - 攻击成功与否,取决于脆弱系统的具体部署和执行条件。 其中包括:

必须赢得一个种族条件,以成功地利用脆弱性。 攻击成功与否取决于执行条件,而这些条件并非完全由攻击者控制。 在成功之前,可能需要对单一目标进行多次攻击。

网络注射. 攻击者必须在目标与受害者请求的资源之间注入逻辑网络路径(例如需要路径上攻击者的弱点).';

$GLOBALS["lang"]['El Salvador'] = '萨尔瓦多';

$GLOBALS["lang"]['email'] = '电子邮件';

$GLOBALS["lang"]['Email'] = '电子邮件';

$GLOBALS["lang"]['email_address'] = '电子邮件地址';

$GLOBALS["lang"]['Email Address'] = '电子邮件地址';

$GLOBALS["lang"]['Email Configuration'] = '电子邮件配置';

$GLOBALS["lang"]['Email to send test to'] = '发送测试的电子邮件';

$GLOBALS["lang"]['Enable'] = '启用';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = '启用此计算机上的分布式COM - 选中选项';

$GLOBALS["lang"]['enabled'] = '已启用';

$GLOBALS["lang"]['Enabled'] = '已启用';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = '启用窗口下的特性';

$GLOBALS["lang"]['encryption'] = '加密';

$GLOBALS["lang"]['Encryption'] = '加密';

$GLOBALS["lang"]['encryption_method'] = '加密方法';

$GLOBALS["lang"]['Encryption Method'] = '加密方法';

$GLOBALS["lang"]['encryption_status'] = '加密状态';

$GLOBALS["lang"]['Encryption Status'] = '加密状态';

$GLOBALS["lang"]['end_date'] = '结束日期';

$GLOBALS["lang"]['End Date'] = '结束日期';

$GLOBALS["lang"]['End OF Life Product ID'] = '生命产品标识';

$GLOBALS["lang"]['end_of_life'] = '生命的终结';

$GLOBALS["lang"]['End Of Life'] = '生命的终结';

$GLOBALS["lang"]['end_of_production'] = '生产结束';

$GLOBALS["lang"]['End Of Production'] = '生产结束';

$GLOBALS["lang"]['end_of_service'] = '服务终了';

$GLOBALS["lang"]['End Of Service'] = '服务终了';

$GLOBALS["lang"]['end_of_service_life'] = '服务寿命终止';

$GLOBALS["lang"]['End Of Service Life'] = '服务寿命终止';

$GLOBALS["lang"]['Endpoint'] = '终点';

$GLOBALS["lang"]['English'] = '联合国';

$GLOBALS["lang"]['Enhances regulatory compliance'] = '提高监管合规性';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = '浓缩完成. CVE拥有完整的元数据,被认为是稳定的.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = '确保文件得到控制和查阅';

$GLOBALS["lang"]['enterprise'] = '企业';

$GLOBALS["lang"]['Enterprise'] = '企业';

$GLOBALS["lang"]['Enterprise Private Network'] = '企业私营网络';

$GLOBALS["lang"]['Enterprise private network'] = '企业私营网络';

$GLOBALS["lang"]['Entitlement Type'] = '应享权利类型';

$GLOBALS["lang"]['Entra'] = '内容';

$GLOBALS["lang"]['environment'] = '环境';

$GLOBALS["lang"]['Environment'] = '环境';

$GLOBALS["lang"]['Equal To'] = '等为';

$GLOBALS["lang"]['Equal To or Greater Than'] = '等于或大于';

$GLOBALS["lang"]['Equal To or Less Than'] = '等于或小于';

$GLOBALS["lang"]['Equals'] = '等数';

$GLOBALS["lang"]['Equatorial Guinea'] = '赤道几内亚';

$GLOBALS["lang"]['Eritrea'] = '厄立特里亚';

$GLOBALS["lang"]['Error'] = '错误';

$GLOBALS["lang"]['Error Code'] = '错误代码';

$GLOBALS["lang"]['Esperanto'] = '世界语';

$GLOBALS["lang"]['Establish a project plan and timeline'] = '制定项目计划和时间表';

$GLOBALS["lang"]['Establish an information security policy'] = '制定信息安全政策';

$GLOBALS["lang"]['Established'] = '已设立';

$GLOBALS["lang"]['Estonia'] = '爱沙尼亚';

$GLOBALS["lang"]['Estonian'] = '爱沙尼亚语';

$GLOBALS["lang"]['Ethernet MAC'] = '以太网MAC';

$GLOBALS["lang"]['ethernet_mac'] = '以太网麦克';

$GLOBALS["lang"]['Ethernet Mac'] = '以太网麦克';

$GLOBALS["lang"]['Ethiopia'] = '埃塞俄比亚';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = '内部评价信息系统管理系统';

$GLOBALS["lang"]['Every'] = '每个';

$GLOBALS["lang"]['Every Day'] = '每天都会';

$GLOBALS["lang"]['Example'] = '示例';

$GLOBALS["lang"]['Example Devices'] = '示例设备';

$GLOBALS["lang"]['Example Org Chart with Access'] = '有访问权限的示例曲线图';

$GLOBALS["lang"]['Example text from'] = '示例文本从';

$GLOBALS["lang"]['Examples'] = '实例';

$GLOBALS["lang"]['Exceptions'] = '例外';

$GLOBALS["lang"]['exclude'] = '不包括';

$GLOBALS["lang"]['Exclude'] = '不包括';

$GLOBALS["lang"]['exclude_ip'] = '不包括 IP';

$GLOBALS["lang"]['Exclude IP'] = '不包括 IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = '排除 IP 地址';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = '不包括所列IP地址(个人IP - 192.168.1.20,范围 - 192.168.1.30-40或子网 - 192.168.1.100/30)的扫描。 逗号隔离,没有空格.';

$GLOBALS["lang"]['Exclude TCP Ports'] = '不包括 TCP 端口';

$GLOBALS["lang"]['exclude_tcp_ports'] = '不包括 Tcp 端口';

$GLOBALS["lang"]['Exclude Tcp Ports'] = '不包括 Tcp 端口';

$GLOBALS["lang"]['Exclude UDP Ports'] = '不包括 UDP 端口';

$GLOBALS["lang"]['exclude_udp_ports'] = '不包括 Udp 端口';

$GLOBALS["lang"]['Exclude Udp Ports'] = '不包括 Udp 端口';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = '排除任何列出的端口进行扫描。 逗号隔离,没有空格.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = '排除这些IP地址进行Nmap扫描.';

$GLOBALS["lang"]['Excluded'] = '不包括';

$GLOBALS["lang"]['exclusion_reasons'] = '排除理由';

$GLOBALS["lang"]['Exclusion Reasons'] = '排除理由';

$GLOBALS["lang"]['executable'] = '可执行文件';

$GLOBALS["lang"]['Executable'] = '可执行文件';

$GLOBALS["lang"]['executable_id'] = '可执行的ID';

$GLOBALS["lang"]['Executable ID'] = '可执行的ID';

$GLOBALS["lang"]['executables'] = '可执行文件';

$GLOBALS["lang"]['Executables'] = '可执行文件';

$GLOBALS["lang"]['Execute'] = '执行';

$GLOBALS["lang"]['Executing'] = '执行';

$GLOBALS["lang"]['exemption_reason'] = '豁免理由';

$GLOBALS["lang"]['Exemption Reason'] = '豁免理由';

$GLOBALS["lang"]['Existing Building'] = '现有大楼';

$GLOBALS["lang"]['Existing Floor'] = '现有楼层';

$GLOBALS["lang"]['Existing Room'] = '现有房间';

$GLOBALS["lang"]['Existing Row'] = '现有行';

$GLOBALS["lang"]['expire_date'] = '过期日期';

$GLOBALS["lang"]['Expire Date'] = '过期日期';

$GLOBALS["lang"]['expire_minutes'] = '过期分钟';

$GLOBALS["lang"]['Expire Minutes'] = '过期分钟';

$GLOBALS["lang"]['expires'] = '过期';

$GLOBALS["lang"]['Expires'] = '过期';

$GLOBALS["lang"]['expiry_date'] = '过期日期';

$GLOBALS["lang"]['Expiry Date'] = '过期日期';

$GLOBALS["lang"]['exploit_maturity'] = '剥削';

$GLOBALS["lang"]['Exploit Maturity'] = '剥削';

$GLOBALS["lang"]['Export'] = '导出';

$GLOBALS["lang"]['Export by Device'] = '通过设备导出';

$GLOBALS["lang"]['Export by Policy'] = '按政策导出';

$GLOBALS["lang"]['Export data to'] = '导出数据到';

$GLOBALS["lang"]['Exporting a Device'] = '导出设备';

$GLOBALS["lang"]['expose'] = '曝光';

$GLOBALS["lang"]['Expose'] = '曝光';

$GLOBALS["lang"]['External'] = '外部';

$GLOBALS["lang"]['External Field Name'] = '外部字段名称';

$GLOBALS["lang"]['External Field Type'] = '外部字段类型';

$GLOBALS["lang"]['External Field Types'] = '外部字段类型';

$GLOBALS["lang"]['external_ident'] = '外部标识';

$GLOBALS["lang"]['External Ident'] = '外部标识';

$GLOBALS["lang"]['external_link'] = '外部链接';

$GLOBALS["lang"]['External Link'] = '外部链接';

$GLOBALS["lang"]['extra_columns'] = '额外列';

$GLOBALS["lang"]['Extra Columns'] = '额外列';

$GLOBALS["lang"]['Extra and Time based Reporting'] = '额外报告和基于时间的报告';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = '额外的和更多的动词记录生成用于排除故障.';

$GLOBALS["lang"]['FAQ'] = '财务问题';

$GLOBALS["lang"]['FQDN'] = '东帝汶国防军';

$GLOBALS["lang"]['FW Revision'] = 'FW 修订';

$GLOBALS["lang"]['Fail'] = '失败';

$GLOBALS["lang"]['Failed'] = '失败';

$GLOBALS["lang"]['Failed Severity'] = '严重性失败';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = '福克兰群岛(马尔维纳斯)';

$GLOBALS["lang"]['Family'] = '家庭';

$GLOBALS["lang"]['Faroe Islands'] = '法罗群岛';

$GLOBALS["lang"]['Features'] = '特征';

$GLOBALS["lang"]['February'] = '2月(半天会议)';

$GLOBALS["lang"]['field'] = '外地';

$GLOBALS["lang"]['Field'] = '外地';

$GLOBALS["lang"]['field_id'] = '实地标识';

$GLOBALS["lang"]['Field ID'] = '实地标识';

$GLOBALS["lang"]['Field Name'] = '字段名称';

$GLOBALS["lang"]['Field Type'] = '字段类型';

$GLOBALS["lang"]['Fields'] = '字段';

$GLOBALS["lang"]['fields'] = '字段';

$GLOBALS["lang"]['Fields attributes are'] = '字段属性为';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = '斐济、斐济群岛';

$GLOBALS["lang"]['File'] = '文件';

$GLOBALS["lang"]['File Auditing'] = '文件审计';

$GLOBALS["lang"]['File Import'] = '文件导入';

$GLOBALS["lang"]['File Input'] = '文件输入';

$GLOBALS["lang"]['file_name'] = '文件名称';

$GLOBALS["lang"]['File Name'] = '文件名称';

$GLOBALS["lang"]['File Share Discovery'] = '文件共享发现';

$GLOBALS["lang"]['file_size'] = '文件大小';

$GLOBALS["lang"]['File Size'] = '文件大小';

$GLOBALS["lang"]['filename'] = '文件名';

$GLOBALS["lang"]['Filename'] = '文件名';

$GLOBALS["lang"]['files'] = '文件';

$GLOBALS["lang"]['Files'] = '文件';

$GLOBALS["lang"]['files_id'] = '文件编号';

$GLOBALS["lang"]['Files ID'] = '文件编号';

$GLOBALS["lang"]['filter'] = '过滤器';

$GLOBALS["lang"]['Filter'] = '过滤器';

$GLOBALS["lang"]['filtered'] = '过滤';

$GLOBALS["lang"]['Filtered'] = '过滤';

$GLOBALS["lang"]['Filtered Ports'] = '过滤的端口';

$GLOBALS["lang"]['Finland'] = '芬兰';

$GLOBALS["lang"]['Finnish'] = '芬兰语';

$GLOBALS["lang"]['Firewall'] = '防火墙';

$GLOBALS["lang"]['Firewall Packages'] = '防火墙包';

$GLOBALS["lang"]['firewall_rule'] = '防火墙规则';

$GLOBALS["lang"]['Firewall Rule'] = '防火墙规则';

$GLOBALS["lang"]['firmware'] = '固件';

$GLOBALS["lang"]['Firmware'] = '固件';

$GLOBALS["lang"]['firmware_revision'] = '固件修订';

$GLOBALS["lang"]['Firmware Revision'] = '固件修订';

$GLOBALS["lang"]['First'] = '第一届';

$GLOBALS["lang"]['First Name'] = '名称';

$GLOBALS["lang"]['first_run'] = '第一个运行';

$GLOBALS["lang"]['First Run'] = '第一个运行';

$GLOBALS["lang"]['first_seen'] = '第一次见到';

$GLOBALS["lang"]['First Seen'] = '第一次见到';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = '首先关注最终需要的是什么:你是否试图基线软件,用户,还是Netstat数据? 比较和报告哪些重要事项?';

$GLOBALS["lang"]['FirstWave'] = '第一条';

$GLOBALS["lang"]['Fix'] = '修补';

$GLOBALS["lang"]['Fixed'] = '固定';

$GLOBALS["lang"]['Fixing the Issue'] = '解决问题';

$GLOBALS["lang"]['Floor'] = '楼层';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '跟踪下面的任何链接并发现如何使用 Open-AudIT 查找 <b>你的网络上有什么?</b>';

$GLOBALS["lang"]['For'] = '对于';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = '对于 <i>类型</i> 确保选择基线,对于分组,如果适用于这一基线,则您应当选择一组设备,这些设备最能代表各种设备,以应用基准。 这将防止错误的条目。';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = '对于 Debian/Ubuntu 运行, 包括设置 dpkg 来记住您的覆盖, 这样一个 apt-get 升级将不会中断';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = '对于SNMP Open-AudIT,可以使用v1,v2和v3证书. 该设备无论是路由器,切换器(常规网络设备)还是计算机(Linux和Windows经常为监测工具运行SNMP),都会被询问.';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Cron上的初级读物请参见此维基百科页面';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = '对于种子发现,我是否应该只在私人IP地址空间中发现IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = '对于种子的发现,我是否只 发现IP在选定的子网。';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '对于种子的发现, 我应该在运行 发现之前打开子网。';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = '用于原始 SQL 查询的高级条目 。 根据查询,您必须包含 <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = '对于每个产卵过程,以下发生.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = '例如,您可能从运行 Redhat 9 的设备中创建基线,该设备在集群中充当您的 Apache 服务器之一 。 您知道这个特定的服务器是按您想要的方式配置的, 但是您不确定集群中的其他服务器是否配置完全相同 。 基线可以让你确定这一点。';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = '例如,您可能从运行 Redhat 9 的设备中创建基线,该设备在集群中充当您的 Apache 服务器之一 。 您知道这个特定的服务器是按您想要的方式配置的, 但是您不确定集群中的其他服务器是否配置完全相同 。 基线可以让你确定这一点。';

$GLOBALS["lang"]['For further details information, see the wiki.'] = '详见维基文库.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = '对于不是永久的许可证,许可证何时到期。';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = '详情请查看Open-AudIT知识库.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = '详情请见以下指南,其中包括录像。 使用';

$GLOBALS["lang"]['For more information, see'] = '更多信息见';

$GLOBALS["lang"]['form_factor'] = '窗体因子';

$GLOBALS["lang"]['Form Factor'] = '窗体因子';

$GLOBALS["lang"]['format'] = '格式';

$GLOBALS["lang"]['Format'] = '格式';

$GLOBALS["lang"]['Forth'] = '福尔';

$GLOBALS["lang"]['fqdn'] = '弗克当';

$GLOBALS["lang"]['Fqdn'] = '弗克当';

$GLOBALS["lang"]['France, French Republic'] = '法国、法兰西共和国';

$GLOBALS["lang"]['free'] = '免费';

$GLOBALS["lang"]['Free'] = '免费';

$GLOBALS["lang"]['French'] = '法语';

$GLOBALS["lang"]['French Guiana'] = '法属圭亚那';

$GLOBALS["lang"]['French Polynesia'] = '法属波利尼西亚';

$GLOBALS["lang"]['French Southern Territories'] = '法国南部领地';

$GLOBALS["lang"]['Frequently Asked Questions'] = '经常问的问题';

$GLOBALS["lang"]['Friday'] = '星期五';

$GLOBALS["lang"]['From 100 Devices'] = '来自100个设备';

$GLOBALS["lang"]['From 500 Devices'] = '从500个设备';

$GLOBALS["lang"]['From that page'] = '从那页';

$GLOBALS["lang"]['full_name'] = '完整名称';

$GLOBALS["lang"]['Full Name'] = '完整名称';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = '全云审计包含定期开放-AudIT审计的所有细节以及机器类型和大小等细节.';

$GLOBALS["lang"]['function'] = '函数';

$GLOBALS["lang"]['Function'] = '函数';

$GLOBALS["lang"]['GROUP BY'] = '集团';

$GLOBALS["lang"]['Gabon'] = '加蓬';

$GLOBALS["lang"]['Galician'] = '加利西亚语Name';

$GLOBALS["lang"]['Gambia the'] = '冈比亚';

$GLOBALS["lang"]['Gap Analysis (optional)'] = '差距分析(可选)';

$GLOBALS["lang"]['gateway'] = '网关';

$GLOBALS["lang"]['Gateway'] = '网关';

$GLOBALS["lang"]['gateways'] = '网关';

$GLOBALS["lang"]['Gateways'] = '网关';

$GLOBALS["lang"]['Generated By'] = '生成者';

$GLOBALS["lang"]['geo'] = '地理';

$GLOBALS["lang"]['Geo'] = '地理';

$GLOBALS["lang"]['Geographical Maps'] = '地理地图';

$GLOBALS["lang"]['Georgia'] = '格鲁吉亚';

$GLOBALS["lang"]['German'] = '德语';

$GLOBALS["lang"]['Germany'] = '德国';

$GLOBALS["lang"]['Get Lat/Long'] = '获取 Lat/ 长';

$GLOBALS["lang"]['Get News'] = '获取新闻';

$GLOBALS["lang"]['Get Started'] = '开始';

$GLOBALS["lang"]['Get a Free License'] = '获取自由许可证';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = '熟悉Open-AudIT平台,探索其部分功能.';

$GLOBALS["lang"]['Getting Started'] = '开始';

$GLOBALS["lang"]['Ghana'] = '加纳';

$GLOBALS["lang"]['Gibraltar'] = '直布罗陀';

$GLOBALS["lang"]['Github'] = '吉图布';

$GLOBALS["lang"]['Global Discovery Options'] = '全球发现选项';

$GLOBALS["lang"]['Global area network'] = '局域网';

$GLOBALS["lang"]['Go'] = '走开';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = '回到您的 Open-AudIT 服务器, 以目标 Windows 计算机 IP 地址作为子网创建一个发现( 这将节省再次发现整个子网) 。 调查一下发现情况 注意任何问题 对于发现的任何问题,采取适当行动。';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = '访问目标 Windows PC( 或使用 RDP) 并登录为您发现证书集使用的用户 。';

$GLOBALS["lang"]['Go to menu'] = '转到菜单';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = '转到 <i>应用程序</i> - > 开口 <i>应用程序注册</i> 菜单项。 寻找开放AudIT. 点击列表中的 Open-AudIT 条目(假设您命名了 app Open-AudIT) 。';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = '转到 <i>证书和秘密</i> 菜单 <i>管理</i> 在中菜单中。';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = '转到 <i>单笔签名</i> 菜单项并单击 SAML <i>选择单一的签名方法</i>。 。 。';

$GLOBALS["lang"]['Google Compute Fields'] = '谷歌计算字段';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON (英语) 全权证书';

$GLOBALS["lang"]['Google Maps API Key'] = '谷歌地图 API 密钥';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = '好极了,你可以帮忙了! 先发送 挥动图形界面中显示的文本和应当显示的内容。 我们将包含在语言文件中,如此向前发展, 翻译得到改进, 你不需要担心更新它 对于每次发布!';

$GLOBALS["lang"]['Greater Than'] = '超过';

$GLOBALS["lang"]['Greater Than or Equals'] = '大于等于数';

$GLOBALS["lang"]['Greece'] = '希腊';

$GLOBALS["lang"]['Greek'] = '捷克语Name';

$GLOBALS["lang"]['Green Query'] = '绿色查询';

$GLOBALS["lang"]['Greenland'] = '格陵兰';

$GLOBALS["lang"]['Grenada'] = '格林纳达';

$GLOBALS["lang"]['Group'] = '组';

$GLOBALS["lang"]['group_by'] = '分组方式';

$GLOBALS["lang"]['Group By'] = '分组方式';

$GLOBALS["lang"]['group_id'] = '组 ID';

$GLOBALS["lang"]['Group ID'] = '组 ID';

$GLOBALS["lang"]['groups'] = '组';

$GLOBALS["lang"]['Groups'] = '组';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = '组作为符合所需条件的简单设备列表. 如果要求使用JSON,他们将返回一份清单。 <i>设备.id</i> 仅此而已。 如果请求使用网络界面,它们会返回标准列属性列表. 组合可用于整合,基线和其他项目.';

$GLOBALS["lang"]['Guadeloupe'] = '瓜德罗普岛';

$GLOBALS["lang"]['Guam'] = '关岛';

$GLOBALS["lang"]['Guatemala'] = '危地马拉';

$GLOBALS["lang"]['Guernsey'] = '根西岛';

$GLOBALS["lang"]['guest_device_id'] = '客机设备标识';

$GLOBALS["lang"]['Guest Device ID'] = '客机设备标识';

$GLOBALS["lang"]['guid'] = '指导';

$GLOBALS["lang"]['Guid'] = '指导';

$GLOBALS["lang"]['Guinea'] = '几内亚';

$GLOBALS["lang"]['Guinea-Bissau'] = '几内亚比绍';

$GLOBALS["lang"]['Guyana'] = '圭亚那';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX 设备';

$GLOBALS["lang"]['HW Revision'] = 'HW 修订';

$GLOBALS["lang"]['Haiti'] = '海地';

$GLOBALS["lang"]['hard_drive_index'] = '硬盘索引';

$GLOBALS["lang"]['Hard Drive Index'] = '硬盘索引';

$GLOBALS["lang"]['Hardware'] = '硬件';

$GLOBALS["lang"]['hardware_revision'] = '硬件修订';

$GLOBALS["lang"]['Hardware Revision'] = '硬件修订';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = '这个组织是否实行过这项政策。';

$GLOBALS["lang"]['hash'] = '哈许';

$GLOBALS["lang"]['Hash'] = '哈许';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = '让代理总是运行最新的审计脚本(如果您将 Open-AudIT 升级并手动将脚本复制到目标,然后设置 cron - 您需要为每次升级更新这些脚本) 。';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = '让用户打开命令提示( 使用 ) <i>作为管理员运行</i>) (中文(简体) ). 粘贴到下面以下载代理 。';

$GLOBALS["lang"]['Head'] = '头';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = '霍德岛和麦当劳群岛';

$GLOBALS["lang"]['Hebrew'] = '希伯来语Name';

$GLOBALS["lang"]['height'] = '高度';

$GLOBALS["lang"]['Height'] = '高度';

$GLOBALS["lang"]['Height in RU'] = '在 RU 中的高度';

$GLOBALS["lang"]['Help'] = '帮助';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = '帮助和常问问题';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = '帮助管理和减轻信息安全风险';

$GLOBALS["lang"]['Hide Audit Window'] = '隐藏审计窗口';

$GLOBALS["lang"]['high'] = '高级';

$GLOBALS["lang"]['High'] = '高级';

$GLOBALS["lang"]['High Availability'] = '高可用性';

$GLOBALS["lang"]['Hindi'] = '印地语';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '罗马教廷(瓦蒂坎州)';

$GLOBALS["lang"]['Home'] = '首页';

$GLOBALS["lang"]['home'] = '首页';

$GLOBALS["lang"]['Home Area Network'] = '家园区域网';

$GLOBALS["lang"]['Home area network'] = '家园区域网';

$GLOBALS["lang"]['Honduras'] = '洪都拉斯';

$GLOBALS["lang"]['Hong Kong'] = '香港';

$GLOBALS["lang"]['host'] = '东道主';

$GLOBALS["lang"]['Host'] = '东道主';

$GLOBALS["lang"]['hostname'] = '主机名';

$GLOBALS["lang"]['Hostname'] = '主机名';

$GLOBALS["lang"]['hour'] = '小时';

$GLOBALS["lang"]['Hour'] = '小时';

$GLOBALS["lang"]['How Does It Work?'] = '怎么样?';

$GLOBALS["lang"]['How Does it Work?'] = '怎么样?';

$GLOBALS["lang"]['How Long Does it Take'] = '需要多长时间';

$GLOBALS["lang"]['How and Why is'] = '如何和为什么';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = '开放-AudIT如何和为什么更加安全';

$GLOBALS["lang"]['How do they work?'] = '他们怎么工作的?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = '设备种子发现如何找到已知的IP?.';

$GLOBALS["lang"]['How long did the command take to execute.'] = '命令执行需要多长时间.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Nmap应该等待多久 每个设备的反应。';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = '这个架子有多少个电路';

$GLOBALS["lang"]['How many policies results in a fail.'] = '有多少政策导致失败。';

$GLOBALS["lang"]['How many policies results in a pass.'] = '有多少政策取得了成功。';

$GLOBALS["lang"]['How many power sockets in this rack.'] = '这个架子有多少个电源插座';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = '高处有多少架子是这个架子.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = '收藏家应该多久向服务器询问一个任务.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = '我们应该如何选择要集成的设备(使用属性、查询或组)。';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = '如何利用脆弱性(例如网络、邻近、地方、物质)。';

$GLOBALS["lang"]['How to compare'] = '如何比较';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = '人能读到的关于脆弱性的解释。';

$GLOBALS["lang"]['Hungarian'] = '匈牙利语Name';

$GLOBALS["lang"]['Hungary'] = '匈牙利';

$GLOBALS["lang"]['hw_cpe'] = '高调';

$GLOBALS["lang"]['Hw Cpe'] = '高调';

$GLOBALS["lang"]['hyperthreading'] = '超线程';

$GLOBALS["lang"]['Hyperthreading'] = '超线程';

$GLOBALS["lang"]['I have read the EULA.'] = '我读过欧洲国际法。';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = '希望这篇文章能缓解你对开放-AudIT和安全的任何担忧。 如果你有任何问题 请在第一大道和我们联系 我们总是乐于讨论你们的关切和需要。 如果你的问题不是我在这里讨论过的问题, 我可以在这里添加它给未来的用户';

$GLOBALS["lang"]['id'] = '身份证';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = '若为';

$GLOBALS["lang"]['IMPORTANT'] = '重要性';

$GLOBALS["lang"]['INPUTS'] = '投资';

$GLOBALS["lang"]['IOS Version'] = 'iOS 版本';

$GLOBALS["lang"]['IP'] = '执行伙伴';

$GLOBALS["lang"]['ip'] = '执行伙伴';

$GLOBALS["lang"]['IP Address'] = 'IP 地址';

$GLOBALS["lang"]['IP Addresses'] = 'IP 地址';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 最后一个视图';

$GLOBALS["lang"]['IP Set By'] = 'IP 设置为';

$GLOBALS["lang"]['ISMS'] = '信息管理系统';

$GLOBALS["lang"]['ISO 27001 only.'] = '仅限ISO 27001。';

$GLOBALS["lang"]['Iceland'] = '冰岛';

$GLOBALS["lang"]['icon'] = '图标';

$GLOBALS["lang"]['Icon'] = '图标';

$GLOBALS["lang"]['Icon and Text'] = '图标和文本';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = '只有图标,只有文本或图标和文本。';

$GLOBALS["lang"]['id_internal'] = '内部';

$GLOBALS["lang"]['Id Internal'] = '内部';

$GLOBALS["lang"]['id_number'] = '编号';

$GLOBALS["lang"]['Id Number'] = '编号';

$GLOBALS["lang"]['identification'] = '鉴定';

$GLOBALS["lang"]['Identification'] = '鉴定';

$GLOBALS["lang"]['Identify information assets'] = '识别信息资产';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = '确定有关各方及其要求';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = '确定关键利益攸关方并分配角色';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = '确定属于你的模范设备,或 <i>金色图像</i> 您想要比较类似的设备。';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = '查明和评价安全风险';

$GLOBALS["lang"]['If'] = '若为';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = '如果使用下列设备单独发现: <i>发现设备</i> 链接在设备细节页面上,我们首先检查此设备是否在之前(通过发现)被发现,如果是的话,使用从扫描中发现的选项。 如果它之前尚未发现, 我们恢复到配置项目发现_ default_scan_ 选择设置 。';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = '如果创建了新的Org,则LDAP组名会自动从名称中衍生出来. 例如,如果创建一个新的Org并命名为Test,相应的LDAP组将被命名为open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = '如果一个端口用过滤器响应,我们是否认为它可用.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = '如果一个端口有被打开的过滤器响应, 我们是否认为它可用 。';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = '如果在Open-AudIT所选设备中不存在远程设备,我们是否应该从外部系统中删除.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = '如果 Open-AudIT 设备已被更改, 我们是否应该更新外部系统 。';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = '如果一个 Open-AudIT 设备不在外部系统中,我们是否应该创建它.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = '如果代理报称其主IP在此子网中,则执行动作.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = '如果检测到任何这些( 压缩、 无空格 ) 端口, 假设 SSH 运行在端口上, 并将其用于审计 。 不需要将此端口添加到自定义 TCP 端口 - 它将自动添加 。';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = '如果没有指定运算符,则默认值为=. 属性应完全合格 - ie, 设备. hostname( 不仅仅是主机名) 。';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = '如果没有值,请提供该值。 EG:用于system.nmis_group / 配置. 我们使用的组';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '如果设定了, 则持有一个 JSON 阵列, 由该用户选择查看的特定设备列组成, 但配置默认值除外 。';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = '如果OS Family(由设备报告)包含此项目,请通过.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = '如果Open-AudIT服务器有向它报告的收集器,则会提供额外的下调. 您可以选择此选项来指定任务要运行的收集器 。 仅支持收集器的发现任务 。';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = '如果代理 OS 家族( 大小写不敏感) 包含此字符串, 请执行动作 。';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = '如果在上述两个位置都找不到二进制,则会在安装器中显示警告消息.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '符合下列条件的: 1.<br/><ul><li>a 角色指定了组</li><li>一个 Org 指定了一个 ad_ 组</li><li>一个 LDAP 服务器已使用_ roles 设置为 Y</li><li>用户存在于 LDAP( 无论是活动目录还是 OpenLDAP) , 并存在于指定的 ad_ groups</li></ul>该用户无需在 Open-AudIT 中创建账户即可登录到 Open-AudIT 。 Open-AudIT将查询相关的LDAP,如果用户属于需要的组,但不属于Open-AudIT,其Open-AudIT内部的用户属性(名称,全名,电子邮件,角色,orgs等)将自动被登录并登录.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = '如果本地字段为真(bool)或y(字符串)或Y(字符串)或1(整数),那么将外部数据设置为1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = '如果本地字段为真(bool)或y(字符串)或Y(字符串)或1(整数),则将外部数据设置为y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = '如果初级IP(由设备报告)在这个子网中,通过.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = '如果用户账户在 Open-AudIT 和 <code>use_authorisation</code> ,将创建用户。 如果它确实存在,则会包含电子邮件,全名等细节.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = '如果用户没有有效证书,或至少没有在 Open-AudIT 角色和组中(在使用时) <code>use_authorisation</code>),Open-AudIT将回落到使用本地的Open-AudIT用户细节,并在那里尝试认证和授权. 否则,用户将被拒绝访问。';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = '如果登录到 Open-AudIT 的用户无法访问搜索 LDAP, 您可以使用另一个有此访问权限的账户 。';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = '如果登录到 Open-AudIT 的用户无法访问搜索 OpenLDAP, 您可以使用另一个有此访问权限的账户 。 使用 dn_count 和 dn_ password 来配置此选项 。';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = '如果不设定值,将使用当前时间戳 。';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = '如果设置了值,则使用时间戳值。';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = '如果这个改变对你没有用,就不会失去一切。 我们添加了一个配置项目(默认设置为n,因此它不会使用框外的这个新选项),称为发现_use_org_id_ match. 如果将其更改为y,则由发现分配给设备的OrgID将在相关匹配规则中使用.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = '如果从服务器上次看到设备后这几分钟(或更长)已经过去,请通过.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = '如果设备联系到服务器后这多或多分钟已经过去,请执行动作.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = '如果发生这种情况, 那么您所看到的问题与网页上使用的表格控制有关 。 它只存储当前页面查看的复选框状态。 如果您选择了, 那么这些选择将会丢失 。 然而,您可以通过扩充每页显示的设备数量来完成您想要的任务. 在左上角有一个下拉式标签的“每页记录”;使用这个来扩展显示的条目数,直到您看到您想要为批量编辑选择的所有条目。';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = '如果我们检测到San管理软件,我们应该在查询前运行一个自动发现器.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = '如果添加位置类型,请将图标添加到';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = '如果您添加了设备类型, 要显示相关的图标, 您必须手动将 . svg 格式化文件复制到目录中';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = '如果您是FirstWave的客户,一些东西会帮助您。 使用 FirstWave 打开支持票并附加日志文件. 还包括支持按钮在右上方的输出';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = '如果您是受支持的客户, 并用 FirstWave 打开支持票, 请附上这些文件 。';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = '如果您与 Google Maps API 密钥有问题, 或者您的公司无法创建 Google Maps API 密钥, 请联系 FirstWave 支援团队 。';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = '如果您在 Windows 或者您的 NMIS 服务器是远程的, 您需要提供访问该服务器的 URL、 用户名和密码 。';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = '若您使用良好的宽带或网路连接, 有些人喜欢T5, 人们有时会指定-T2(Polite),因为他们认为崩溃主机的可能性较小,或者因为他们认为自己在一般情况下是礼貌的. 他们常常不知道T2到底有多慢 他们的扫描可能比默认扫描要长十倍. 机器崩溃和带宽问题在默认的计时选项-T3(Normal)中是罕见的,所以我通常建议谨慎的扫描仪使用. 刻录版本检测比玩计时值减少这些问题更有效.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = '如果您正在运行一个 RedHat 或 Centos 系统, 您已经升级了 Nmap, 请在二进制上重置 SUID 。';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = '如果您正在 Linux 上运行 Open-AudIT 服务器, 这不会影响您 。';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = '如果您正在Windows上使用 Open-AudIT, 或者您的 NMIS 服务器不在 Open-AudIT 服务器上( 如果是一些 Linux 安装的话), 您将需要向远程 NMIS 提供访问权限和 URL - 但仅此而已 ! 是的 - NMIS和Open-AudIT之间的整合,甚至现在与基于Windows的Open-AudIT合作!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = '如果你选择一个收集器,它将被安排在接下来的5分钟边界上执行.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = '如果您在正常情况下设置了设备_ assigned_to_org,并启用了配置项目,则会使用OrgID来进一步完善匹配.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = '如果您通常不设置设备_ assigned_to_org,则将无效果 。 我们只检查OrgID是否在发现中被设定(或手动在审计脚本中),并在配置中启用.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = '如果您启用配置项目, 请使用发现来指定一个 Org , 然后在发现后更改设备的 OrgID , 那么您很可能在下一次发现运行时创建一个新设备 。 在此情况下, 在运行后续发现之前, 您可能只应该使用未设置的设备_ assigned_to_org 。 这是因为你告诉了Open-AudIT <i>这些设备属于Org X<i>,但后来更改了设备的 Org 。 您已更改存储的设备信息 。 在这种情况下 - 不再有属于Org X的设备,所以我们创造了一个新的设备.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = '如果您有Anti-Virus软件运行,允许Opmantek(omkd),Apache(apach2.2)和MySQL(mysql)自动启动和运行的服务是必不可少的. 这些服务被Open-AudIT使用. 你应该只做一次 如果您的反病毒程序继续提示您关于 Open-AudIT 的内容, 请发送到论坛或发送电子邮件支持您的反病毒软件的名称和版本 。';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = '若您有工作证明,您可期待获得所有可能的信息。<br/><br/>显然,使用Open-AudIT的最佳方式是拥有被发现设备的工作证书(无论是WMI,SSH,还是SNMP证书).<br/><br/>我们还有一个关于无证书的审计的网页。';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = '如果您包含 & “ id\” 字段 <strong>和</strong> 设置一个编号,该项目将更新而不是创建。';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = '如果需要配置活动目录访问,通常可以使用示例 <code>cn=Users,dc=your,dc=domain,dc=com</code> 送给你的 <code>base_dn</code>。 。 。 没有必要设置 <code>user_dn</code>。 。 。';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = '如果您需要配置用户的 OpenLDAP 访问权限, 而给定用户访问 DN 通常是 <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> 那你应该准备好 <code>base_dn</code> 改为: <code>dc=your,dc=domain,dc=com</code> 和 <code>user_dn</code> 改为: <code>uid=@username@@domain,cn=People</code>。 。 。 特别的词 <code>@username</code> 和 <code>@domain</code> 将被用户在登录页面上提供的登录细节所取代。';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = '如果您在服务器( 或收集器) 直接安装的子网上运行发现, 您可以期待响应设备的以下操作';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = '如果您运行一个子网发现您的服务器( 或 Collector) 没有直接安装, 您可以期待响应设备的以下操作';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = '如果选择列表类型,则会出现一个额外的字段,称为值。 您应该在此设置一个可选值的逗号分隔列表 。 当字段被编辑时, 这些字段会显示在一个下拉框中 。';

$GLOBALS["lang"]['If you set the values for'] = '如果设置值为:';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = '如果您想要强迫你的特工使用特定的配置,您可以提供要使用的代理条目的ID,如下文所示(用代理条目的号码替换$id). 当这个代理安装后,它将会与Sevrer和 <strong>仅限</strong> 检查一个人 代理条目属性(测试和动作). 如果您是MSP - 为特定客户创建代理条目, 并让其设备全部使用此条目, 指定它们为 Org 和 位置, 这可能有用 。';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = '如果您想要挖掘并自定义集成, 请单击高级按钮( 并尽量不被覆盖 !) 。';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = '如果您希望在外部提供的设备上运行一个发现器,请选择选项和创建集成器时,所以选择发现器.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = '如果您想在"发现"之外使用剧本,我们创建了另一个终点,叫做 <i>脚本</i>。 。 。 见文件';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = '如果用户没有 <i>作为管理员运行</i> 权利,他们仍然可以下载代理(上面的第一命令)并运行它提交如下的审计. 这将是一次性审计,没有安装或安排代理。';

$GLOBALS["lang"]['ifadminstatus'] = '成人状态';

$GLOBALS["lang"]['Ifadminstatus'] = '成人状态';

$GLOBALS["lang"]['iflastchange'] = '最后更改';

$GLOBALS["lang"]['Iflastchange'] = '最后更改';

$GLOBALS["lang"]['Ignore Invalid SSL'] = '忽略无效的 SSL';

$GLOBALS["lang"]['Ignored'] = '已忽略';

$GLOBALS["lang"]['image'] = '图像';

$GLOBALS["lang"]['Image'] = '图像';

$GLOBALS["lang"]['Images'] = '图像';

$GLOBALS["lang"]['impact_availability'] = '影响';

$GLOBALS["lang"]['Impact Availability'] = '影响';

$GLOBALS["lang"]['impact_confidentiality'] = '影响 保密';

$GLOBALS["lang"]['Impact Confidentiality'] = '影响 保密';

$GLOBALS["lang"]['impact_integrity'] = '完整性';

$GLOBALS["lang"]['Impact Integrity'] = '完整性';

$GLOBALS["lang"]['Implement selected controls and procedures'] = '执行选定的控制和程序';

$GLOBALS["lang"]['Implementation'] = '执行情况';

$GLOBALS["lang"]['implementation_notes'] = '执行说明';

$GLOBALS["lang"]['Implementation Notes'] = '执行说明';

$GLOBALS["lang"]['Import'] = '导入';

$GLOBALS["lang"]['Import Example Data'] = '导入示例数据';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = '使用 CSV 导入多个 {收集} 。';

$GLOBALS["lang"]['improvement_opportunities'] = '改善机会';

$GLOBALS["lang"]['Improvement Opportunities'] = '改善机会';

$GLOBALS["lang"]['Improves business continuity and resilience'] = '提高业务连续性和复原力';

$GLOBALS["lang"]['In'] = '内';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = '在第二个标签或窗口中到您的 OKTA 控制台点击 <i>创建 App 集成</i>。 。 。';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = '在第二个标签或窗口上签名到您';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = '我个人认为,在你的网络上找到和审计每个单项的最佳方式是每个子网的种子发现,仅限于该子网(使用证书). 种子发现者使用开关,路由器和计算机MAC地址表来不错过单个设备. 如果连接到网络并使用TCP/IP,开关/路由器/计算机必须知道它的存在——这就是TCP/IP的运作方式. 与自定义 TCP 和/或 UDP 端口合并, 您也应该能够确定设备类型 。 但那只是我个人的偏好';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = '为了使Open-AudIT能够对项目应用用户权限,我们授权用户 <code>WHERE @filter</code>。 。 。 如果您不使用此格式, 查询CreateForm 将发出警告 。 仅允许具有管理员作用的用户创建缺少此属性的查询,即使如此,也只能在配置项之后 <i>高级</i> 已启用。';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = '为了启用 Google 地图, 您需要一个 Google API 密钥 。 谷歌账户,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = '为了使用Azure Rest API,您需要创建用于认证的Azure Active 目录应用程序.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = '要使用此功能, 必须启用配置 - 单击';

$GLOBALS["lang"]['In the (comma seperated) list'] = '在( 汇总) 列表中';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = '在涉及 <code>in</code> 和 <code>notin</code>中,您应当将数值置于圆括号中,并使用逗号(只是逗号,而不是逗号,然后是空格)将其分开。<br/><br/>使用这些运算符,您可以相当全面地过滤 。<br/><br/>当在多个列上添加数据和过滤器时,这些列会使用 <strong>和</strong>。 。 。 您无法使用一个 <strong>或</strong> 条件。 列入 <code>notin</code>,你应该能够 让大多数搜索工作。 而对于那些确实需要不支持和复杂的选择的人,你总是可以写一个实际的查询.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = '在BIGTEXT MySQL字段(如:certification)内存储多个字段(通常为JSON格式)的情况下. 全权证书 - 全权证书表内的全权证书栏,请使用格式';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = '在命令提示 shell中,导航到下载目录(可能 <code>cd Downloads</code>) (中文(简体) ).';

$GLOBALS["lang"]['Inactive'] = '非活动';

$GLOBALS["lang"]['Incomplete'] = '不完整';

$GLOBALS["lang"]['Index'] = '指数';

$GLOBALS["lang"]['India'] = '印度';

$GLOBALS["lang"]['Indonesia'] = '印度尼西亚';

$GLOBALS["lang"]['Indonesian'] = '印度尼西亚语';

$GLOBALS["lang"]['Info'] = '资讯';

$GLOBALS["lang"]['Information only.'] = '仅供参考。';

$GLOBALS["lang"]['Informational'] = '资料';

$GLOBALS["lang"]['initial_size'] = '初始大小';

$GLOBALS["lang"]['Initial Size'] = '初始大小';

$GLOBALS["lang"]['Initial login credentials are'] = '初始登录证书为';

$GLOBALS["lang"]['Initiation'] = '启动';

$GLOBALS["lang"]['inode'] = '图标';

$GLOBALS["lang"]['Inode'] = '图标';

$GLOBALS["lang"]['Input'] = '投入';

$GLOBALS["lang"]['Input Type'] = '输入类型';

$GLOBALS["lang"]['inputs'] = '输入';

$GLOBALS["lang"]['Inputs'] = '输入';

$GLOBALS["lang"]['Insane'] = '神经病';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = '插入新 {收集} 条目 。';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = '插入示例数据并发现 Open-AudIT 能告诉你的所有信息 。';

$GLOBALS["lang"]['Insert your Purchased license Key'] = '插入您的密码 购买许可证 密钥';

$GLOBALS["lang"]['install'] = '安装';

$GLOBALS["lang"]['Install'] = '安装';

$GLOBALS["lang"]['install_date'] = '安装日期';

$GLOBALS["lang"]['Install Date'] = '安装日期';

$GLOBALS["lang"]['install_directory'] = '安装目录';

$GLOBALS["lang"]['Install Directory'] = '安装目录';

$GLOBALS["lang"]['Install OpenScap if required'] = '需要安装 OpenScap';

$GLOBALS["lang"]['install_source'] = '安装源';

$GLOBALS["lang"]['Install Source'] = '安装源';

$GLOBALS["lang"]['Install Support'] = '安装支持';

$GLOBALS["lang"]['installed_by'] = '安装于';

$GLOBALS["lang"]['Installed By'] = '安装于';

$GLOBALS["lang"]['installed_on'] = '安装于';

$GLOBALS["lang"]['Installed On'] = '安装于';

$GLOBALS["lang"]['Installing'] = '安装';

$GLOBALS["lang"]['Installing on Linux'] = '在 Linux 上安装';

$GLOBALS["lang"]['Installing on MacOS'] = '在 MacOS 上安装';

$GLOBALS["lang"]['Installing on Windows'] = '在窗口上安装';

$GLOBALS["lang"]['instance'] = '实例';

$GLOBALS["lang"]['Instance'] = '实例';

$GLOBALS["lang"]['instance_ident'] = '实例标识';

$GLOBALS["lang"]['Instance Ident'] = '实例标识';

$GLOBALS["lang"]['instance_options'] = '实例选项';

$GLOBALS["lang"]['Instance Options'] = '实例选项';

$GLOBALS["lang"]['instance_provider'] = '实例提供者';

$GLOBALS["lang"]['Instance Provider'] = '实例提供者';

$GLOBALS["lang"]['instance_reservation_ident'] = '实例保留 标识';

$GLOBALS["lang"]['Instance Reservation Ident'] = '实例保留 标识';

$GLOBALS["lang"]['instance_state'] = '实例国';

$GLOBALS["lang"]['Instance State'] = '实例国';

$GLOBALS["lang"]['instance_tags'] = '实例标记';

$GLOBALS["lang"]['Instance Tags'] = '实例标记';

$GLOBALS["lang"]['instance_type'] = '实例类型';

$GLOBALS["lang"]['Instance Type'] = '实例类型';

$GLOBALS["lang"]['Integer'] = '整数';

$GLOBALS["lang"]['Integration'] = '一体化';

$GLOBALS["lang"]['integrations'] = '一体化';

$GLOBALS["lang"]['Integrations'] = '一体化';

$GLOBALS["lang"]['integrations_id'] = '整合标识';

$GLOBALS["lang"]['Integrations ID'] = '整合标识';

$GLOBALS["lang"]['integrations_log'] = '整合日志';

$GLOBALS["lang"]['Integrations Log'] = '整合日志';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = '一体化可以按需要安排。 这是留给用户的 。';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = '整合可以按照"发现","查询"等计划进行.';

$GLOBALS["lang"]['Interactive Dashboards'] = '交互式盘片';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = '互动仪表板可以即时可见网络库存状况,使IT团队可以一目了然地发现新发现的装置和不寻常的装置行为.';

$GLOBALS["lang"]['interface'] = '接口';

$GLOBALS["lang"]['Interface'] = '接口';

$GLOBALS["lang"]['interface_id'] = '接口 ID';

$GLOBALS["lang"]['Interface ID'] = '接口 ID';

$GLOBALS["lang"]['interface_type'] = '接口类型';

$GLOBALS["lang"]['Interface Type'] = '接口类型';

$GLOBALS["lang"]['Internal'] = '内部';

$GLOBALS["lang"]['Internal Audit'] = '内部审计';

$GLOBALS["lang"]['Internal Audit & Review'] = '内部审计和审查';

$GLOBALS["lang"]['Internal Field Name'] = '内部字段名称';

$GLOBALS["lang"]['Internal ID'] = '内部标识';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = '内部 JSON 阵列, 此用户的有效访问符 。';

$GLOBALS["lang"]['Introduction'] = '导言';

$GLOBALS["lang"]['invoice'] = '发票';

$GLOBALS["lang"]['Invoice'] = '发票';

$GLOBALS["lang"]['invoice_id'] = '发票身份证';

$GLOBALS["lang"]['Invoice ID'] = '发票身份证';

$GLOBALS["lang"]['invoice_item'] = '发票项目';

$GLOBALS["lang"]['Invoice Item'] = '发票项目';

$GLOBALS["lang"]['ios_version'] = 'Ios 版本';

$GLOBALS["lang"]['Ios Version'] = 'Ios 版本';

$GLOBALS["lang"]['ip_address_external_a'] = '叶地址外部 A';

$GLOBALS["lang"]['Ip Address External A'] = '叶地址外部 A';

$GLOBALS["lang"]['ip_address_external_b'] = '叶地址 外部 B';

$GLOBALS["lang"]['Ip Address External B'] = '叶地址 外部 B';

$GLOBALS["lang"]['ip_address_internal_a'] = '叶地址内部 A';

$GLOBALS["lang"]['Ip Address Internal A'] = '叶地址内部 A';

$GLOBALS["lang"]['ip_address_internal_b'] = '叶地址 内部 B';

$GLOBALS["lang"]['Ip Address Internal B'] = '叶地址 内部 B';

$GLOBALS["lang"]['ip_all_count'] = '叶子全数';

$GLOBALS["lang"]['Ip All Count'] = '叶子全数';

$GLOBALS["lang"]['ip_audited_count'] = '叶子审计数';

$GLOBALS["lang"]['Ip Audited Count'] = '叶子审计数';

$GLOBALS["lang"]['ip_discovered_count'] = '发现的叶子数';

$GLOBALS["lang"]['Ip Discovered Count'] = '发现的叶子数';

$GLOBALS["lang"]['ip_enabled'] = '叶子已启用';

$GLOBALS["lang"]['Ip Enabled'] = '叶子已启用';

$GLOBALS["lang"]['ip_responding_count'] = '叶回应计数';

$GLOBALS["lang"]['Ip Responding Count'] = '叶回应计数';

$GLOBALS["lang"]['ip_scanned_count'] = '叶子扫描数';

$GLOBALS["lang"]['Ip Scanned Count'] = '叶子扫描数';

$GLOBALS["lang"]['Iran'] = '伊朗伊斯兰共和国';

$GLOBALS["lang"]['Iraq'] = '伊拉克';

$GLOBALS["lang"]['Ireland'] = '爱尔兰';

$GLOBALS["lang"]['Irish'] = '爱尔兰语Name';

$GLOBALS["lang"]['Is FRU'] = '是FRU吗?';

$GLOBALS["lang"]['is_fru'] = '是芙鲁吗?';

$GLOBALS["lang"]['Is Fru'] = '是芙鲁吗?';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'NSIS服务器是本地的(在这个Open-AudIT服务器上)还是远程的?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '这个账户正常吗? 如果设置为 <code>n</code>,用户无法登录。';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = '此查询是否仅限于有执照的客户 。';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = '是否启用此任务( y/ n) 。';

$GLOBALS["lang"]['Isle of Man'] = '马恩岛';

$GLOBALS["lang"]['Israel'] = '以色列';

$GLOBALS["lang"]['Issue'] = '问题';

$GLOBALS["lang"]['issuer'] = '发行商';

$GLOBALS["lang"]['Issuer'] = '发行商';

$GLOBALS["lang"]['issuer_name'] = '发行者名称';

$GLOBALS["lang"]['Issuer Name'] = '发行者名称';

$GLOBALS["lang"]['Issues'] = '问题';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = '这个 <i>刚刚工作</i> 与 NMIS 连接';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = '可在菜单上查阅 - > 帮助 - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = '需要注意的是,当 Open-AudIT 确定匹配任意属性时, <i>尔</i> 必须精确匹配(而不是空白),以便Open-AudIT确定发现的设备是否匹配数据库中已经存在的设备。 如果没有标记属性 <i>尔</i> 匹配,然后创建一个新设备条目,这可能导致设备条目重复。 在属性重复的情况下,例如dbus_id在VM克隆时被复制,那么一个已有的设备可能会被错误地重写/更新,而不是生成一个新的条目,导致设备缺失.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = '在特定组织内有重叠地址空间的情况并不罕见。 不理想 但并不罕见';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = '第二级母板制造商通常不设置,而是设置给所有人 <i>0 个</i>甚至是所有 <i>页:1</i>编号';

$GLOBALS["lang"]['Italian'] = '意大利语Name';

$GLOBALS["lang"]['Italy'] = '意大利';

$GLOBALS["lang"]['Items not in Baseline'] = '非基线项目';

$GLOBALS["lang"]['JSON'] = '贾森';

$GLOBALS["lang"]['JSON to Import'] = 'JSON 到导入';

$GLOBALS["lang"]['Jamaica'] = '牙买加';

$GLOBALS["lang"]['January'] = '1月(半天会议)';

$GLOBALS["lang"]['Japan'] = '日本';

$GLOBALS["lang"]['Japanese'] = '日语';

$GLOBALS["lang"]['Jersey'] = '泽西岛';

$GLOBALS["lang"]['Jordan'] = '约旦';

$GLOBALS["lang"]['July'] = '7月(半天会议)';

$GLOBALS["lang"]['June'] = '6月份';

$GLOBALS["lang"]['Kazakhstan'] = '哈萨克斯坦';

$GLOBALS["lang"]['Kenya'] = '肯尼亚';

$GLOBALS["lang"]['kernel_version'] = '内核版本';

$GLOBALS["lang"]['Kernel Version'] = '内核版本';

$GLOBALS["lang"]['Key'] = '密钥';

$GLOBALS["lang"]['Key Components'] = '关键部件';

$GLOBALS["lang"]['Key Password (optional)'] = '密钥密码( 可选)';

$GLOBALS["lang"]['keys'] = '键';

$GLOBALS["lang"]['Keys'] = '键';

$GLOBALS["lang"]['Kiribati'] = '基里巴斯';

$GLOBALS["lang"]['Korea'] = '韩国';

$GLOBALS["lang"]['Korean'] = '韩语';

$GLOBALS["lang"]['Kuwait'] = '科威特';

$GLOBALS["lang"]['Kyrgyz'] = '吉尔吉斯斯坦语Name';

$GLOBALS["lang"]['Kyrgyz Republic'] = '吉尔吉斯共和国';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP 组';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP被搜索到这个用户,他们的账户被找到.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP 被搜索到此用户, 而他们的账户没有找到 。 检查 LDAP 服务器日志 。 用户证书已经奏效,但是没有找到用户。 同时检查您在 Open-AudIT 中创建 LDAP 服务器时指定了正确的 Base DN 属性 。';

$GLOBALS["lang"]['lang'] = '兰';

$GLOBALS["lang"]['Lang'] = '兰';

$GLOBALS["lang"]['language'] = '语言';

$GLOBALS["lang"]['Language'] = '语言';

$GLOBALS["lang"]['Lao'] = '老挝';

$GLOBALS["lang"]['last_changed'] = '上次更改';

$GLOBALS["lang"]['Last Changed'] = '上次更改';

$GLOBALS["lang"]['last_finished'] = '上次完成';

$GLOBALS["lang"]['Last Finished'] = '上次完成';

$GLOBALS["lang"]['last_logon'] = '最后一个登录';

$GLOBALS["lang"]['Last Logon'] = '最后一个登录';

$GLOBALS["lang"]['Last Name'] = '姓';

$GLOBALS["lang"]['last_os_update'] = '最后一个 Os 更新';

$GLOBALS["lang"]['Last Os Update'] = '最后一个 Os 更新';

$GLOBALS["lang"]['last_result'] = '最后结果';

$GLOBALS["lang"]['Last Result'] = '最后结果';

$GLOBALS["lang"]['last_run'] = '上次运行';

$GLOBALS["lang"]['Last Run'] = '上次运行';

$GLOBALS["lang"]['last_seen'] = '最后见到';

$GLOBALS["lang"]['Last Seen'] = '最后见到';

$GLOBALS["lang"]['last_seen_by'] = '最后见到 以';

$GLOBALS["lang"]['Last Seen By'] = '最后见到 以';

$GLOBALS["lang"]['last_user'] = '最后一个用户';

$GLOBALS["lang"]['Last User'] = '最后一个用户';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = '最后一个是WMI。 对于像Linux中的Windows,首选的是具有管理员级别访问权限的用户(见wiki上的目标客户端配置).';

$GLOBALS["lang"]['lastModified'] = '最后修改';

$GLOBALS["lang"]['LastModified'] = '最后修改';

$GLOBALS["lang"]['latitude'] = '纬度';

$GLOBALS["lang"]['Latitude'] = '纬度';

$GLOBALS["lang"]['Latvia'] = '拉脱维亚';

$GLOBALS["lang"]['Latvian'] = '拉脱维亚语Name';

$GLOBALS["lang"]['Layout'] = '版式';

$GLOBALS["lang"]['ldap'] = '长发';

$GLOBALS["lang"]['Ldap'] = '长发';

$GLOBALS["lang"]['ldap_base_dn'] = '立体基础 Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = '立体基础 Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn 账户';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn 账户';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn 密码';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn 密码';

$GLOBALS["lang"]['Learn About'] = '学习关于';

$GLOBALS["lang"]['Learn More'] = '学习更多';

$GLOBALS["lang"]['lease_expiry_date'] = '租赁到期日期';

$GLOBALS["lang"]['Lease Expiry Date'] = '租赁到期日期';

$GLOBALS["lang"]['Lebanon'] = '黎巴嫩';

$GLOBALS["lang"]['legal_requirements'] = '法律要求';

$GLOBALS["lang"]['Legal Requirements'] = '法律要求';

$GLOBALS["lang"]['Lesotho'] = '莱索托';

$GLOBALS["lang"]['Less Than'] = '减去';

$GLOBALS["lang"]['Less Than or Equals'] = '小于或等于';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = '让我们设定日志以调试 。 复制文件 :';

$GLOBALS["lang"]['level'] = '职等';

$GLOBALS["lang"]['Level'] = '职等';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = '开发所需的特权水平(无、低、高)。';

$GLOBALS["lang"]['Liberia'] = '利比里亚';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = '图书馆(i,另一个程序可能包含的代码). 这些通常是Wordpress扩展,drupal扩展,节点.js库,Android / iPhone / Windows库,python库等项目.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = '阿拉伯利比亚民众国';

$GLOBALS["lang"]['License'] = '许可证';

$GLOBALS["lang"]['License Key'] = '许可证密钥';

$GLOBALS["lang"]['License Required'] = '需要许可证';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = '被许可的用户可以随意添加或修改您认为合适的规则. 如果您有一个设备带有一个SNMP OID, 它不匹配已经存在于文件中的模型 - 现在你可以轻松添加它 。 不要再等待我们提供补丁 并添加到你的代码基础。<br/><br/>创建规则条目时,需要提供名称和输入及输出列表。 投入和产出作为JSON阵列储存在数据库中.<br/><br/>输入有一个表格和属性,一个操作符和一个值. 因此,在执行条件时,可以: 如果使用$表. $属性$operator $值,则应用产出。<br/><br/>匹配 SNMP OID 并设置模型的示例规则如下.<br/>';

$GLOBALS["lang"]['Licenses'] = '许可证';

$GLOBALS["lang"]['Liechtenstein'] = '列支敦士登';

$GLOBALS["lang"]['Like'] = '喜欢';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = '与大多数其他属性一样,附加字段可以进行批量编辑. 使用通常情况下的批量编辑功能,您将看到附加字段可供输入 。';

$GLOBALS["lang"]['Like versus Equals'] = '像对等';

$GLOBALS["lang"]['limit'] = '限制';

$GLOBALS["lang"]['Limit'] = '限制';

$GLOBALS["lang"]['Limit the query to the first X items.'] = '将查询限制在第一批 X 项 。';

$GLOBALS["lang"]['Limited to 100 rows.'] = '限于百行.';

$GLOBALS["lang"]['line_amount'] = '金额';

$GLOBALS["lang"]['Line Amount'] = '金额';

$GLOBALS["lang"]['Line Graph'] = '行图';

$GLOBALS["lang"]['line_number_a'] = 'A号线';

$GLOBALS["lang"]['Line Number A'] = 'A号线';

$GLOBALS["lang"]['line_number_b'] = 'B号线';

$GLOBALS["lang"]['Line Number B'] = 'B号线';

$GLOBALS["lang"]['line_text'] = '线条文字';

$GLOBALS["lang"]['Line Text'] = '线条文字';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = '线性图表必须返回日期或我的_日期、描述或我的_描述和计算。';

$GLOBALS["lang"]['link'] = '链接';

$GLOBALS["lang"]['Link'] = '链接';

$GLOBALS["lang"]['Link (Advanced)'] = '链接( 高级)';

$GLOBALS["lang"]['Linked Files'] = '链接文件';

$GLOBALS["lang"]['links'] = '链接';

$GLOBALS["lang"]['Links'] = '链接';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = '将此发现链接到关联云(如果需要). 链接到 <code>clouds.id</code>。 。 。';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = '链接到 <code>discovery_scan_options.id</code>。 。 。';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = '链接到 <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = '链接到 <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = '链接';

$GLOBALS["lang"]['Linux Packages'] = 'Linux 软件包';

$GLOBALS["lang"]['List'] = '列表';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = '列出每个设备的所有 NMAP 端口、协议和程序';

$GLOBALS["lang"]['List Devices'] = '列出设备';

$GLOBALS["lang"]['List Discoveries'] = '列表发现';

$GLOBALS["lang"]['list_table_format'] = '列表格式';

$GLOBALS["lang"]['List Table Format'] = '列表格式';

$GLOBALS["lang"]['List Tables'] = '列表表格';

$GLOBALS["lang"]['Lithuania'] = '立陶宛';

$GLOBALS["lang"]['Lithuanian'] = '立陶宛语Name';

$GLOBALS["lang"]['Load Balancing'] = '装入平衡';

$GLOBALS["lang"]['Local'] = '当地';

$GLOBALS["lang"]['Local Area Network'] = '局域网';

$GLOBALS["lang"]['local_port'] = '本地端口';

$GLOBALS["lang"]['Local Port'] = '本地端口';

$GLOBALS["lang"]['Local area network'] = '局域网';

$GLOBALS["lang"]['Localhost'] = '本地主机';

$GLOBALS["lang"]['Localisation'] = '本地化';

$GLOBALS["lang"]['Location'] = '地点';

$GLOBALS["lang"]['Location A'] = '地点A';

$GLOBALS["lang"]['Location B'] = '地点B';

$GLOBALS["lang"]['location_id'] = '位置标识';

$GLOBALS["lang"]['Location ID'] = '位置标识';

$GLOBALS["lang"]['location_id_a'] = '地点 ID A';

$GLOBALS["lang"]['Location ID A'] = '地点 ID A';

$GLOBALS["lang"]['location_id_b'] = '地点 ID B';

$GLOBALS["lang"]['Location ID B'] = '地点 ID B';

$GLOBALS["lang"]['location_latitude'] = '位置纬度';

$GLOBALS["lang"]['Location Latitude'] = '位置纬度';

$GLOBALS["lang"]['location_level'] = '地点级别';

$GLOBALS["lang"]['Location Level'] = '地点级别';

$GLOBALS["lang"]['location_longitude'] = '位置经度';

$GLOBALS["lang"]['Location Longitude'] = '位置经度';

$GLOBALS["lang"]['Location Name'] = '地点名称';

$GLOBALS["lang"]['location_rack'] = '地点 Rack';

$GLOBALS["lang"]['Location Rack'] = '地点 Rack';

$GLOBALS["lang"]['location_rack_position'] = '地点 Rack 位置';

$GLOBALS["lang"]['Location Rack Position'] = '地点 Rack 位置';

$GLOBALS["lang"]['location_rack_size'] = '地点 Rack 大小';

$GLOBALS["lang"]['Location Rack Size'] = '地点 Rack 大小';

$GLOBALS["lang"]['location_room'] = '地点';

$GLOBALS["lang"]['Location Room'] = '地点';

$GLOBALS["lang"]['location_suite'] = '地点套件';

$GLOBALS["lang"]['Location Suite'] = '地点套件';

$GLOBALS["lang"]['Locations'] = '地点';

$GLOBALS["lang"]['Locations in this'] = '此处的位置';

$GLOBALS["lang"]['log'] = '日志';

$GLOBALS["lang"]['Log'] = '日志';

$GLOBALS["lang"]['log_format'] = '日志格式';

$GLOBALS["lang"]['Log Format'] = '日志格式';

$GLOBALS["lang"]['Log Line'] = '日志行';

$GLOBALS["lang"]['log_path'] = '日志路径';

$GLOBALS["lang"]['Log Path'] = '日志路径';

$GLOBALS["lang"]['log_rotation'] = '日志旋转';

$GLOBALS["lang"]['Log Rotation'] = '日志旋转';

$GLOBALS["lang"]['log_status'] = '日志状态';

$GLOBALS["lang"]['Log Status'] = '日志状态';

$GLOBALS["lang"]['Logging in'] = '登录';

$GLOBALS["lang"]['Logical Cores '] = '逻辑核心 ';

$GLOBALS["lang"]['logical_count'] = '逻辑计算';

$GLOBALS["lang"]['Logical Count'] = '逻辑计算';

$GLOBALS["lang"]['Logout'] = '注销';

$GLOBALS["lang"]['Logs'] = '日志';

$GLOBALS["lang"]['longitude'] = '经度';

$GLOBALS["lang"]['Longitude'] = '经度';

$GLOBALS["lang"]['low'] = '低档';

$GLOBALS["lang"]['Low'] = '低档';

$GLOBALS["lang"]['Lower Case'] = '小写';

$GLOBALS["lang"]['Lowercase Hostname'] = '小写主机名';

$GLOBALS["lang"]['Luxembourg'] = '卢森堡';

$GLOBALS["lang"]['MAC Address'] = 'MAC 地址';

$GLOBALS["lang"]['MAC Manufacturer'] = '邮件 制造商';

$GLOBALS["lang"]['mac'] = '麦克';

$GLOBALS["lang"]['Mac'] = '麦克';

$GLOBALS["lang"]['Mac Address'] = '麦克地址';

$GLOBALS["lang"]['MacOS'] = '麦克OS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS 软件包';

$GLOBALS["lang"]['Macao'] = '澳门';

$GLOBALS["lang"]['Macedonia'] = '马其顿';

$GLOBALS["lang"]['Madagascar'] = '马达加斯加';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = '保持风险评估和治疗记录';

$GLOBALS["lang"]['maintenance_expires'] = '保养过期';

$GLOBALS["lang"]['Maintenance Expires'] = '保养过期';

$GLOBALS["lang"]['Make My Default Dashboard'] = '制作我的默认板';

$GLOBALS["lang"]['Make this install a Collector'] = '将此安装为收藏器';

$GLOBALS["lang"]['Malawi'] = '马拉维';

$GLOBALS["lang"]['Malay'] = '马来语Name';

$GLOBALS["lang"]['Malaysia'] = '马来西亚';

$GLOBALS["lang"]['Maldives'] = '马尔代夫';

$GLOBALS["lang"]['Mali'] = '马里';

$GLOBALS["lang"]['Malta'] = '马耳他';

$GLOBALS["lang"]['Manage'] = '管理';

$GLOBALS["lang"]['Manage Licenses'] = '管理许可证';

$GLOBALS["lang"]['Manage in NMIS'] = '在 NMIS 中管理';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = '管理事件和不合规定之处';

$GLOBALS["lang"]['Managed'] = '管理';

$GLOBALS["lang"]['managed_by'] = '管理单位';

$GLOBALS["lang"]['Managed By'] = '管理单位';

$GLOBALS["lang"]['Manual Input'] = '手动输入';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = '用户手动设定,默认为Production.';

$GLOBALS["lang"]['Manually set by user.'] = '用户手动设定 。';

$GLOBALS["lang"]['manufacture_date'] = '制造日期';

$GLOBALS["lang"]['Manufacture Date'] = '制造日期';

$GLOBALS["lang"]['manufacturer'] = '制造商';

$GLOBALS["lang"]['Manufacturer'] = '制造商';

$GLOBALS["lang"]['manufacturer_code'] = '制造商代码';

$GLOBALS["lang"]['Manufacturer Code'] = '制造商代码';

$GLOBALS["lang"]['Map'] = '地图';

$GLOBALS["lang"]['maps'] = '地图';

$GLOBALS["lang"]['Maps'] = '地图';

$GLOBALS["lang"]['March'] = '3月(半天会议)';

$GLOBALS["lang"]['Marshall Islands'] = '马绍尔群岛';

$GLOBALS["lang"]['Martinique'] = '马提尼克语Name';

$GLOBALS["lang"]['mask'] = '遮罩';

$GLOBALS["lang"]['Mask'] = '遮罩';

$GLOBALS["lang"]['Match'] = '匹配';

$GLOBALS["lang"]['match_options'] = '匹配选项';

$GLOBALS["lang"]['Match Options'] = '匹配选项';

$GLOBALS["lang"]['Match Order'] = '匹配顺序';

$GLOBALS["lang"]['Match Process'] = '匹配进程';

$GLOBALS["lang"]['match_string'] = '匹配字符串';

$GLOBALS["lang"]['Match String'] = '匹配字符串';

$GLOBALS["lang"]['Matching Attribute'] = '匹配属性';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = '匹配设备 - 包括 OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = '匹配 Linux 设备';

$GLOBALS["lang"]['Matching is conducted in the following order'] = '匹配按以下顺序进行';

$GLOBALS["lang"]['maturity_level'] = '成熟程度';

$GLOBALS["lang"]['Maturity Level'] = '成熟程度';

$GLOBALS["lang"]['maturity_score'] = '成熟分数';

$GLOBALS["lang"]['Maturity Score'] = '成熟分数';

$GLOBALS["lang"]['Mauritania'] = '毛里塔尼亚';

$GLOBALS["lang"]['Mauritius'] = '毛里求斯';

$GLOBALS["lang"]['max_file_size'] = '最大文件大小';

$GLOBALS["lang"]['Max File Size'] = '最大文件大小';

$GLOBALS["lang"]['Max Length'] = '最大长度';

$GLOBALS["lang"]['max_size'] = '最大大小';

$GLOBALS["lang"]['Max Size'] = '最大大小';

$GLOBALS["lang"]['May'] = '5月(半天会议)';

$GLOBALS["lang"]['Mayotte'] = '马约特';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = '衡量脆弱性受到攻击的可能性,其依据是目前开发技术、开发代码可用性或积极、“无处不在”开发的现状。';

$GLOBALS["lang"]['medium'] = '中型';

$GLOBALS["lang"]['Medium'] = '中型';

$GLOBALS["lang"]['members'] = '成员';

$GLOBALS["lang"]['Members'] = '成员';

$GLOBALS["lang"]['memory'] = '内存';

$GLOBALS["lang"]['Memory'] = '内存';

$GLOBALS["lang"]['memory_count'] = '内存计数';

$GLOBALS["lang"]['Memory Count'] = '内存计数';

$GLOBALS["lang"]['memory_slot_count'] = '记忆槽计数';

$GLOBALS["lang"]['Memory Slot Count'] = '记忆槽计数';

$GLOBALS["lang"]['menu_category'] = '菜单类别';

$GLOBALS["lang"]['Menu Category'] = '菜单类别';

$GLOBALS["lang"]['menu_display'] = '菜单显示';

$GLOBALS["lang"]['Menu Display'] = '菜单显示';

$GLOBALS["lang"]['message'] = '消息';

$GLOBALS["lang"]['Message'] = '消息';

$GLOBALS["lang"]['meta_last_changed'] = '上次更改的元';

$GLOBALS["lang"]['Meta Last Changed'] = '上次更改的元';

$GLOBALS["lang"]['metric'] = '计量';

$GLOBALS["lang"]['Metric'] = '计量';

$GLOBALS["lang"]['Metropolitan Area Network'] = '都市地区网.';

$GLOBALS["lang"]['Metropolitan area network'] = '都市局域网';

$GLOBALS["lang"]['Mexico'] = '墨西哥';

$GLOBALS["lang"]['Micronesia'] = '密克罗尼西亚';

$GLOBALS["lang"]['Microsoft Azure Fields'] = '微软 Azure 字段';

$GLOBALS["lang"]['microtime'] = '微时间';

$GLOBALS["lang"]['Microtime'] = '微时间';

$GLOBALS["lang"]['minute'] = '分钟';

$GLOBALS["lang"]['Minute'] = '分钟';

$GLOBALS["lang"]['Minutes'] = '分钟';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '自上次审计以来';

$GLOBALS["lang"]['model'] = '型号';

$GLOBALS["lang"]['Model'] = '型号';

$GLOBALS["lang"]['model_family'] = '模范家庭组织';

$GLOBALS["lang"]['Model Family'] = '模范家庭组织';

$GLOBALS["lang"]['Modified'] = '已修改';

$GLOBALS["lang"]['Modifying an Existing Script'] = '修改已有脚本';

$GLOBALS["lang"]['module'] = '模块';

$GLOBALS["lang"]['Module'] = '模块';

$GLOBALS["lang"]['module_index'] = '模块索引';

$GLOBALS["lang"]['Module Index'] = '模块索引';

$GLOBALS["lang"]['Modules'] = '模块';

$GLOBALS["lang"]['Moldova'] = '摩尔多瓦';

$GLOBALS["lang"]['Monaco'] = '摩纳哥';

$GLOBALS["lang"]['Monday'] = '星期一';

$GLOBALS["lang"]['Mongolia'] = '蒙古国';

$GLOBALS["lang"]['monitor'] = '监视器';

$GLOBALS["lang"]['Monitor'] = '监视器';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = '监测和衡量ISMS的绩效';

$GLOBALS["lang"]['Montenegro'] = '黑山';

$GLOBALS["lang"]['month'] = '月数';

$GLOBALS["lang"]['Month'] = '月数';

$GLOBALS["lang"]['Montserrat'] = '蒙特塞拉特';

$GLOBALS["lang"]['More Information'] = '更多信息';

$GLOBALS["lang"]['More Secure'] = '更加安全';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = '更细致的SQL可以用来在一个范围内分组属性. 以下显示在馅饼图中未见的设备的 SQL 。';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = '关于调试的更多信息可以在有用的 Stack Overflow 线条中找到';

$GLOBALS["lang"]['Morocco'] = '摩洛哥';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = '很可能Windows防火墙(或第三方防火墙)正在否认连接尝试.<br/><br/>请登录目标Windows机器并检查防火墙设置.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = '大部分Open-AudIT的许可使用GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = '主板';

$GLOBALS["lang"]['Motherboard'] = '主板';

$GLOBALS["lang"]['mount_point'] = '挂载点';

$GLOBALS["lang"]['Mount Point'] = '挂载点';

$GLOBALS["lang"]['mount_type'] = '挂载类型';

$GLOBALS["lang"]['Mount Type'] = '挂载类型';

$GLOBALS["lang"]['Mozambique'] = '莫桑比克';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = '一定要回复到平. 如果设定, Nmap 会尝试发送并听取 ICMP 响应 。 如果设备不响应,将不再进行扫描.<br/>以前一个设备不需要响应一个ping,Open-AudIT就可以继续扫描.';

$GLOBALS["lang"]['Must Respond to Ping'] = '一定要回复到小平';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = '我的抗病毒药正促使我否认/保有';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = '我在Open-AudIT休息时间';

$GLOBALS["lang"]['Myanmar'] = '缅甸';

$GLOBALS["lang"]['N+1'] = 'N+1 数据';

$GLOBALS["lang"]['N+M'] = '无+M';

$GLOBALS["lang"]['N-to-1'] = 'N-1级';

$GLOBALS["lang"]['N-to-N'] = 'N对N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS 业务处';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS 客户';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS 设备选项';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS 设备选择';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS 字段名称';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS 字段类型';

$GLOBALS["lang"]['NMIS Group'] = '国家管理信息系统小组';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS POLLER 系统';

$GLOBALS["lang"]['NMIS Role'] = '国家管理信息系统 作用';

$GLOBALS["lang"]['NOTE'] = '说明';

$GLOBALS["lang"]['NOTE #2'] = '说明2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = '注 - 关于日期时间格式的更多信息,见';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = '注 - 如果您要求下载 CSV, XML 或 JSON 格式( 单份证书, 或完整的收藏) , 将发送实际的证书细节 。 不是加密字符串,是实际用户名,密码,社区字符串等. 任何敏感的细节都不在网页图形界面中显示,而是通过其他格式提供. 为了防止此导出, 一个配置项叫做解密_ 证书 。';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = '注 -- 所提交数据中的卷曲括号应作为现用(而不是按照以上其他例子替换)。';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = '注 - 您可以设置配置项目, 防止下面显示纯文本证书 <code>decrypt_credentials</code> 改为: <code>n</code>。 。 。';

$GLOBALS["lang"]['name'] = '名称';

$GLOBALS["lang"]['Name'] = '名称';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = '名称: 您给此字段的名称 。 理想的情况应该是独一无二的。';

$GLOBALS["lang"]['Namibia'] = '纳米比亚';

$GLOBALS["lang"]['Nauru'] = '瑙鲁';

$GLOBALS["lang"]['Nepal'] = '尼泊尔';

$GLOBALS["lang"]['net_index'] = '净指数';

$GLOBALS["lang"]['Net Index'] = '净指数';

$GLOBALS["lang"]['Netherlands Antilles'] = '荷属安的列斯群岛';

$GLOBALS["lang"]['Netherlands the'] = '荷兰';

$GLOBALS["lang"]['netmask'] = '网络任务';

$GLOBALS["lang"]['Netmask'] = '网络任务';

$GLOBALS["lang"]['netstat'] = '净统计';

$GLOBALS["lang"]['Netstat'] = '净统计';

$GLOBALS["lang"]['Netstat Policies'] = '净统计政策';

$GLOBALS["lang"]['Netstat Ports'] = '净点端口';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports使用端口号,协议和程序的组合. 如果所有人都在场,则政策通过。';

$GLOBALS["lang"]['Network'] = '网络';

$GLOBALS["lang"]['network_address'] = '网络地址';

$GLOBALS["lang"]['Network Address'] = '网络地址';

$GLOBALS["lang"]['Network Discovery'] = '网络发现';

$GLOBALS["lang"]['network_domain'] = '网络域';

$GLOBALS["lang"]['Network Domain'] = '网络域';

$GLOBALS["lang"]['Network Types'] = '网络类型';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = '网络类型默认设置为局域网,但用户可以视情修改. 所支持的类型如下(感谢维基百科).<br/><br/>一个网络的特点可以是其实际能力或组织目的。 网络的使用,包括用户授权和访问权,也相应不同.';

$GLOBALS["lang"]['networks'] = '网络';

$GLOBALS["lang"]['Networks'] = '网络';

$GLOBALS["lang"]['Networks Generated By'] = '由网络生成';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = '网络随时随地更新 如所发现的,添加了诸如现有和使用的IP以及Gateways、DHCP和DNS服务器等项目。';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = '网络的反应因如何配置而异. 一些路由器和/或防火墙可以响应 <i>代表</i> 将 IP 设置在连接到 Open-AudIT 服务器的接口的另一端。 Nmap 报告 SNMP (UDP 端口 161) 的探测器以 openQQ filtered 的形式对存在和不存在的设备进行响应是很常见的. 这有误导性,因为在那个IP上没有设备,然而它最后却在数据库中有一个设备条目. 99.9%的时间,它不是Open-AudIT,甚至Nmap,而是导致这个问题的网络. 现在我们可以选择将开放的 过滤端口视为开放的或封闭的, 我们可以消除很多这样的混乱。 企业用户甚至可以选择在每次发现的基础上修改(比仅使用Medium(Classic)项,如上).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = '使用 CIDR 遮罩的网络';

$GLOBALS["lang"]['New Building Name'] = '新建筑名称';

$GLOBALS["lang"]['New Caledonia'] = '新喀里多尼亚';

$GLOBALS["lang"]['New Floor Name'] = '新楼层名称';

$GLOBALS["lang"]['New Room Name'] = '新建房间名称';

$GLOBALS["lang"]['New Row Name'] = '新建行名称';

$GLOBALS["lang"]['New Zealand'] = '新西兰';

$GLOBALS["lang"]['News'] = '新闻';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = '每次登入新闻检查时,都会进行更新的查询和包,配置建议,发布公告,博客帖子等等.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = '新闻是我们不断向您通报最新修改、公告、查询更新、软件版本等情况的方式。<br/><br/>你不需要在维基上面 或检查新的发行, 我们可以发送这些给你!';

$GLOBALS["lang"]['next_hop'] = '下一个跳';

$GLOBALS["lang"]['Next Hop'] = '下一个跳';

$GLOBALS["lang"]['next_run'] = '下一个运行';

$GLOBALS["lang"]['Next Run'] = '下一个运行';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = '下一次点击 <i>创建自己的应用程序</i>。 。 。';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = '接下来点击“确定”,然后右键点击“Apache 2.4”服务,然后点击“重新启动”。 没问题!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = '接下来,右键单击 Apache2.4 服务并选择属性,然后单击日志标签。';

$GLOBALS["lang"]['Nicaragua'] = '尼加拉瓜';

$GLOBALS["lang"]['Niger'] = '尼日尔';

$GLOBALS["lang"]['Nigeria'] = '尼日利亚';

$GLOBALS["lang"]['Niue'] = '纽埃';

$GLOBALS["lang"]['nmap'] = '地图';

$GLOBALS["lang"]['Nmap'] = '地图';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap 端口扫描响应';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp 端口';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp 端口';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp 端口';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp 端口';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap无法确定端口是否打开,因为包过滤阻止其探测器到达端口. 过滤可能来自专用防火墙设备,路由器规则,或基于主机的防火墙软件. 这些港口让攻击者感到沮丧,因为它们提供的信息很少。 有时它们会用ICMP错误消息如3型代码13(命运无法到达:通讯在行政上被禁止)进行响应,但简单地放下探针而不响应的过滤器则更为常见. 这迫使Nmap多次重试,以防探测器因网络拥堵而不是过滤而掉落. 这大大降低了扫描速度。';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap 无法确定一个端口是否打开或过滤时将端口置于此状态. 这对于打开的端口没有响应的扫描类型发生. 缺乏响应还可能意味着一个包过滤器放下了探测器或它引发的任何响应. 因此Nmap不确定端口是开放的还是被过滤的. UDP,IP协议,FIN,NULL,和Xmas扫描将端口这样分类.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = '在链接页面的底部找到 Nmap 计时细节';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis 商业服务';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis 商业服务';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis 客户';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis 客户';

$GLOBALS["lang"]['nmis_group'] = 'Nmis 集团';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis 集团';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis 管理';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis 管理';

$GLOBALS["lang"]['nmis_name'] = 'Nmis 名称';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis 名称';

$GLOBALS["lang"]['nmis_notes'] = '注解';

$GLOBALS["lang"]['Nmis Notes'] = '注解';

$GLOBALS["lang"]['nmis_poller'] = '纳米斯·波勒';

$GLOBALS["lang"]['Nmis Poller'] = '纳米斯·波勒';

$GLOBALS["lang"]['nmis_poller_uuid'] = '尼斯·波勒·乌伊德';

$GLOBALS["lang"]['Nmis Poller Uuid'] = '尼斯·波勒·乌伊德';

$GLOBALS["lang"]['nmis_role'] = 'Nmis 角色';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis 角色';

$GLOBALS["lang"]['No'] = '没有';

$GLOBALS["lang"]['No Devices Returned'] = '没有设备返回';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = '没有谷歌地图 API 密钥当前, 您无法显示地图 。';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = '无专业或企业许可证';

$GLOBALS["lang"]['No Results'] = '无结果';

$GLOBALS["lang"]['No data in License Key'] = '许可证密钥中没有数据';

$GLOBALS["lang"]['No database upgrade required at this time.'] = '目前不需要更新数据库 。';

$GLOBALS["lang"]['No devices are in the database.'] = '数据库中没有设备 。';

$GLOBALS["lang"]['Node'] = '节点';

$GLOBALS["lang"]['None'] = '无';

$GLOBALS["lang"]['Norfolk Island'] = '诺福克岛';

$GLOBALS["lang"]['Normal'] = '常规';

$GLOBALS["lang"]['Northern Mariana Islands'] = '北马里亚纳群岛';

$GLOBALS["lang"]['Norway'] = '挪威';

$GLOBALS["lang"]['Norwegian'] = '挪威语';

$GLOBALS["lang"]['Not Applicable'] = '不适用';

$GLOBALS["lang"]['Not Checked'] = '未检查';

$GLOBALS["lang"]['Not Equals'] = '不等于';

$GLOBALS["lang"]['Not In'] = '不进';

$GLOBALS["lang"]['Not Like'] = '不喜欢';

$GLOBALS["lang"]['Not Set'] = '未设定';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = '并不是每台计算机都能成功完成一个基准. 我们看到,由于我们无法控制的原因,试验失败。 日志应帮助您为这些项目指明正确的方向。';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = '不在( 压缩) 列表中';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '通常不使用。 如果设定, 这需要设备有一个开放的端口( 根据扫描选项) 来考虑响应 。 一个MAC地址、ARP响应或ping响应被认为不足以被视为响应。 如果Open-AudIT服务器与目标IP之间的路由器或防火墙正代表IP响应端口扫描,则有用.';

$GLOBALS["lang"]['Note'] = '说明';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '注 - 选择父母会自动为孩子提供访问权限(虽然不会在这里显示).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = '注意100设备企业许可证不包括支持.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = '注意,可能需要使脚本可执行';

$GLOBALS["lang"]['Notes'] = '页:1';

$GLOBALS["lang"]['notes'] = '页:1';

$GLOBALS["lang"]['Notice'] = '通知';

$GLOBALS["lang"]['notin'] = '笔记';

$GLOBALS["lang"]['Notin'] = '笔记';

$GLOBALS["lang"]['November'] = '11月(半天会议)';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = '现在用于订阅ID,点击所有服务,订阅并复制.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = '现在我们需要为您的订阅提供 Azure Active Directory 应用程序访问权限.<br/><br/>点击资源组, 然后点击您想要访问的 Azure 活动目录应用程序的资源组 。<br/><br/>点击添加。 角色应为贡献者,然后搜索应用(Open-AudIT). 然后点击“保存”。<br/><br/>现在应用程序可以访问订阅,这样我们就可以给API打电话. API 呼叫将代表应用程序而不是您的用户请求.';

$GLOBALS["lang"]['nvd_json'] = '恩夫德·杰森(英语:Nvd Json)';

$GLOBALS["lang"]['Nvd Json'] = '恩夫德·杰森(英语:Nvd Json)';

$GLOBALS["lang"]['ORDER BY'] = '命令';

$GLOBALS["lang"]['OS'] = '业务办';

$GLOBALS["lang"]['OS Families'] = 'OS 家庭';

$GLOBALS["lang"]['OS Family'] = 'OS 家庭';

$GLOBALS["lang"]['OS Group'] = 'OS 组';

$GLOBALS["lang"]['OUTPUTS'] = '输出';

$GLOBALS["lang"]['oae_manage'] = 'Oae 管理系统';

$GLOBALS["lang"]['Oae Manage'] = 'Oae 管理系统';

$GLOBALS["lang"]['object_ident'] = '对象标识';

$GLOBALS["lang"]['Object Ident'] = '对象标识';

$GLOBALS["lang"]['Obtain top management support'] = '获得高层管理支持';

$GLOBALS["lang"]['October'] = '10月(半天会议)';

$GLOBALS["lang"]['Offset'] = '折换';

$GLOBALS["lang"]['Okta'] = '大冈';

$GLOBALS["lang"]['Oman'] = '阿曼';

$GLOBALS["lang"]['omk_uuid'] = '奥姆克·威德';

$GLOBALS["lang"]['Omk Uuid'] = '奥姆克·威德';

$GLOBALS["lang"]['On'] = '打开';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = '在Windows上,Open-AudIT使用WMI作为主要的审计方法. Windows在远程WMI方面有着臭名昭著的声誉. 也一样 <i>刚刚工作</i> 或者目标上的一些神秘物品需要改变 如果您在审计远程 Windows 个人计算机时遇到困难, 我们创建了一个名为 test_windows_client.vbs 的脚本 。 您可以运行此脚本 <strong>当地</strong> ,在作为Open-AudIT用于执行审计的用户签字后。 剧本制作 <strong>无变化</strong> 到目标设备。 它检查下面的大部分(不是全部)物品,并生成各种属性的PASS,FAIL和INFO标记. 注 - 如果您的目标系统正在被正确审计, 您不应该改变任何设置 。 以下一些在Windows PC上并不存在能够被审计,有些确实存在. 只有在您在特定个人计算机上的发现没有达到预期效果时才会更改设置 。';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = '在任务列表页面上,单击 <i>添加新内容</i> 按钮来配置任务。';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = '现场 <i>匹配字符串</i> 您应当提供要跟踪的软件的名称。 您可以在需要时使用% 符号作为通配符 。';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = '在下一页,您可以选择访问密钥并查看您的密钥或创建新密钥 。';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = '在目标Windows PC上,运行DCOM工具并验证(或设置)以下属性. 开始 - > 运行, 输入 DCOMCNFG 并按好 。 这将打开 DCOMCNFG 窗口 。';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = '在右上方(菜单栏下面),你会看到几个按钮。 这些允许您选择另一个仪表板,将当前仪表板设定为您的主页(如果还没有),并编辑当前仪表板(如果您有权限).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = '精选,不是云';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = '附加字段创建后,它可以像数据库中任何其他属性一样用于查询和分组.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = '一旦评论出来,您的证书将会被验证,但是如果您正在使用自签名的证书,并且没有正确配置您的服务器,也可能失败此验证.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = '一旦脚本运行在目标上,脚本就应当自行删除.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = '一旦这些初始查询(snmp, ssh, wmi)完成,如果设备是由审计脚本(Windows, Linux, OSX, AIX, HP-UX, Solaris和ESXi)支持的,正确的审计脚本将被复制到目标并被执行. 审计脚本完成后将自行删除。 结果将作为XML文件存储在目标机上. Open-AudIT服务器随后会检索结果文件进行处理,并删除目标上的结果文件. 在目标设备上复制的审计脚本的位置(至少用于SSH审计)通过编辑发现_linux_scription_directory config项目可以配置. 默认为 /tmp/ 。 如果 /tmp 没有执行设置, 这可能需要改变 。 然后处理结果文件,并在Open-AudIT中更新设备细节.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = '一旦点击执行按钮,Open-AudIT将生成启动发现的过程,并将用户返回到发现细节页面. 新产卵过程采用配置的发现选项,执行Nmap命令,以确定要扫描的IP地址的初始列表(或者如果使用该类型的话查询Active Directory). 每个要扫描的IP都被排入队列. 一旦初始过程完成(并且队列中还有需要扫描的IP),将培育出一些过程来进一步平行扫描每个IP. 在配置中可配置这些进程, 编辑属性 <i>队列(_L)</i>。 。 。 默认情况下, 设定为 20 。';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = '一旦您选择了您要编辑的设备, 请单击表格右上角的铅笔按钮 。';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = '完成此任务后, Open- AudIT 会尝试对照配置的 Auth 方法验证您的用户登录细节 。 如果用户持有有效全权证书,且 <code>use_authorisation</code> 设置, Open-AudIT 将询问用户所属组的列表。 如果用户在 Open-AudIT 角色和类群中,这些角色和类群将应用于该用户.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = '一旦您生成了基线定义, 您就可以将它排在指定的设备组上 。';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = '一旦你拿到这些东西,在Open-AudIT 企业可以到菜单 - > 发现 - > 云 - > 创建 云,选择 <i>亚马逊AWS</i> 类型并粘贴在。 结束了。';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = '一旦你拿到这些东西,在Open-AudIT 企业可以到菜单 - > 发现 - > 云 - > 创建 云,选择 <i>微软 Azure</i> 类型并粘贴在。 结束了。';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = '一旦你拿到你的云层证书, 这仅仅是一个问题 创建一个新的云层 运行发现 - 或者安排第一个/未来的发现。 确保您也拥有登录云端机器所需的资质, 这一切都是为了您而做的 就像一个正常的发现。 您云层的证明';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = '一个 <code>3x2</code>, (中文). <code>4x2</code>, (中文). <code>4x3</code> 或者说 <code>4x4</code>。 。 。';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = '校园区网之一 云网 企业民营网 家园区网 局域网 都市区网 被动光学局域网 个人区网 存储区网 系统区网 虚拟民营网 广域网 无线局域网';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '发展、灾后恢复、评价、前期生产、生产、测试、培训、用户接受测试';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '其中分配,授权,规划,预留,未分配,未知,未管理. 默认分配 。';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = '其中一个 <code>active directory</code> 或者说 <code>openldap</code>。 。 。';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '其中:抗病毒,备份,防火墙,批准,禁止,忽略或其他.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = '另一个要小心的项目 - 确保您使用您的 LDAP 的主机名( 或 fqdn) 。 在 Open-AudIT 中创建 LDAP 条目时匹配证书中内容的服务器(不仅仅是 LDAP Servers IP 地址).';

$GLOBALS["lang"]['Online Documentation'] = '在线文档';

$GLOBALS["lang"]['Open'] = '打开';

$GLOBALS["lang"]['Open Data'] = '打开数据';

$GLOBALS["lang"]['Open Source'] = '开源';

$GLOBALS["lang"]['Open-AudIT'] = '打开AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = '打开AudIT GitHub上有社区源代码。 鼓励您检查您所关心的任何代码, 并且因为它是开放源码 - 您还鼓励您询问我们您有任何问题或报告任何发现 。 我们总是非常乐于接受代码贡献,脆弱性报告,甚至简单的问题. 我们是来帮忙的<br/><br/>审计脚本本身(Windows,Linux,MacOS等)被刻意用可读的本地贝壳脚本(VBScript for Windows,Bash for *nix)写成. 你可以看到什么命令是运行。 您可以删除任何你觉得不需要的命令 。 您可以要求第三方为您检查密码( 如果您愿意) 报告任何发现 。<br/><br/>打开AudIT 企业为Open-AudIT社区履行附加商业功能。 它作为单一编译文件列入,没有外部依赖性. 企业部本身履行该职能的地方,如果涉及任何问题 第一波乐于与你合作, 跟另一个商业软件供应商试试看!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT 设备选择';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = '打开AudIT 企业有能力从预定义的发现扫描选项列表中进行选择,也可以自定义每个发现的单个选项.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = '开放AudIT企业. 大型网络的高尺度灵活发现和审计解决方案. 专业+的所有特征:基线,文件审计,云发现,Rack管理,可配置角色基础访问控制包括Active Directory和LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = '打开 AudIT 字段名称';

$GLOBALS["lang"]['Open-AudIT Licenses'] = '开放AudIT许可证';

$GLOBALS["lang"]['Open-AudIT Options'] = '打开AudIT 选项';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT专业和企业包括强化报告功能,包括基于时间的,历史的,基于哗变的多种格式报告功能.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = '打开AudIT 专业人员有能力从预定义的发现扫描选项列表中选择,每个发现.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = '开放AudIT专业. 这个世界';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = '打开Aud IT可以配置为使用LDAP服务器(微软主动目录和(或)OpenLDAP)认证和授权一个用户,此外,在Open-AudIT中使用基于LDAP组成员的指定角色和类群创建用户账户. 还可以用';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = '打开Aud 可以在你的数据中心的服务器上运行 它根本不需要互联网。 连Linux上的安装,我们使用分发包管理器作为我们的先决条件,也可以通过你使用一个内部和安全团队批准的包存储器来抵消.<br/><br/>打开Aud 它不存储任何数据 在云。 甚至可以提供许可证发放信息,而不必从Open-AudIT服务器进入互联网。<br/><br/>当然,允许它上网下载您分发的软件包(包括安全修正)比较容易,但这取决于您和您的安全政策。 Open-AudIT不需要互联网。';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT可以下载,剖析和使用NIST CVE脆弱性报告.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = '打开Aud 它可以用几种语言之一显示。 你怎么能改进这个?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = '打开Aud 信息技术可以在与每个设备相关的额外领域存储信息.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT可以使用Microsoft Entra(以前称为Microsoft Azure Active Directory)作为认证方法. 这意味着在Open-AudIT中的用户可以使用登录页面上的Entra按钮点击登录,并使用他们的Entra证书进行登录. 该用户需要在 Open-AudIT 中已经存在(并被指定)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT可以使用OKTA作为认证方法. 这意味着在 Open-AudIT 中的用户可以使用 OKTA 按钮在登录页面上点击登录,并使用他们的 OKTA 证书进行登录. 该用户需要在Open-AudIT中已经存在(并被指派角色和Orgs),但无需记住单独的一组登录证书.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT带来许多内置的查询. 如果您需要特定查询, 且预装的查询都不符合您的需要, 很容易创建新查询并加载到 Open- AudIT 中进行运行 。';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT有一个JSON休息API,既用于网络界面,也通过JSON请求.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = '打开Aud IT有一个颗粒授权系统来确定Open-AudIT内部的用户可以做什么,以及他可以做的项目. Open-AudIT可以完全自成一体,也可以使用Active Directory或OpenLDAP进行认证和/或授权.<br/><br/>这完全取决于Open-AudIT的管理员,他们希望基于角色的接入控制如何工作。';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = '打开Aud IT拥有强大的变化探测引擎. 任何添加,移除或更改的设备属性都会被检测和存储. 可以报告这些变化,并证实有关数据,说明你们公司的变更和发布过程预期会发生什么。<br/><br/>当一个设备被审计时,属性被分为与数据库中的表格相对应的部分.<br/><br/>每个设备(计算机、路由器、打印机等)都有一个条目。 <code>devices</code> 表单。 设备表格中的每个条目都有 <code>id</code> 栏。 这个值是独一无二的——它是自动递增的ID.<br/><br/>当处理审计结果时,每个科的每个项目都拥有与数据库中内容相比的审计结果.<br/><br/>对于每一节,如果关键栏(见下表)包含相同的值,则视为已安装,并有其 <code>last_seen</code> 属性更新。 没有创建更改_log条目 。<br/><br/>如果任何密钥列不匹配,则视为新属性并插入. A级 <code>change_log</code> 如果设备在表格中已有其他属性,则创建条目。<br/><br/>在完成审计处理时,任何尚未更新(或插入)的数据库项目都被视为不存在。 那个 <code>current</code> 此项目的属性设定为 <i>无</i> 并生成更改_日志条目。<br/><br/>因此,我们可以确定是否正在安装某物 - 当前列是 <i>尔</i>。 。 。<br/><br/>我们可以确定什么时候才发现... <i>先见</i>。 。 。<br/><br/>我们可以确定在初步审计之后是否安装了某种东西——首先看到的是组件和设备表格中的不同.<br/><br/>我们可以确定某物是否目前没有安装, 但以前是 - 当前 = <i>无</i>。 。 。<br/><br/>我们可以确定我们最后一次检测到物品的时间 - 最后一次_ 见.<br/><br/>在任何特定的时间点,我们可以确定一个系统上的内容——通过使用审计_日志表,并根据先看后看来选择相关组件.<br/><br/>每一节及其对应的关键栏如下。<br/><br/>注 - 有一些例外情况,详见下文。<br/><br/>*1 - 对于网络卡,如果计算机是VMware Esx机,它也使用net_index和连接列.<br/><br/>*2 - 对于分区,f计算机是AIX机,我们使用分区名称.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT是一个程序,旨在跟踪和报告您的IT和相关资产细节和配置. Open-AudIT 能分辨出来 <i>你的网络是什么?</i>,如何配置,是否有变化。 Open-AudIT为设备的发现,IT审计和库存管理自动化直接提供精密,灵活和易于使用的平台.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = '打开Aud IT使得同时编辑多个设备的属性变得容易.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = '打开Aud IT需要特定的目录权限才能创建文件,上传结果等. 请如下。';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT提供了许多内置的查询,并使得创建自己的简单.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = '打开Aud IT船具有内置的角色,供管理员,org_admin和用户使用.<br/><br/>一般来说,作为Open-AudIT应用程序管理员的用户本身应该具有管理员和可能的org_admin角色.<br/><br/>用户可以扮演多个角色. 许可将在最允许的级别上应用 - IE,如果用户具有用户和org_admin的作用,他们将能够创建位置,因为org_admin给予此许可,即使用户角色没有.<br/><br/>管理员角色可以访问集,如配置,数据库,组,ldap服务器,日志,查询和角色. 影响整个应用程序的全球项目。<br/><br/>org_admin角色通常允许为包含org_id列的任何收藏创建,读取,更新和删除动作. 除上述一些收集资料外,几乎所有数据都将包括: <code>org_id</code> 栏。<br/><br/>用户角色一般只允许读取带有 Org_id 列的所有项目.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = '打开Aud IT船具有内置的角色,供管理员,org_admin和用户使用.<br/><br/>一般来说,作为Open-AudIT应用程序管理员的用户本身应该具有管理员和可能的org_admin角色.<br/><br/>用户可以扮演多个角色. 许可将在最允许的级别上应用 - IE,如果用户具有用户和org_admin的作用,他们将能够创建位置,因为org_admin给予此许可,即使用户角色没有.<br/><br/>管理员角色可以访问集,如配置,数据库,组,ldap服务器,日志,查询和角色. 影响整个应用程序的全球项目。<br/><br/>org_admin角色通常允许为包含org_id列的任何收藏创建,读取,更新和删除动作. 除上述部分集合外,几乎所有数据都将包含一个org_id列.<br/><br/>用户角色一般只允许读取带有 Org_id 列的所有项目.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = '开放AudIT舰载数艘预装Dashboard. 如果您是专业用户, 您可以在其中两个用户之间选择, 在登录时设置为默认页面 。 如果您是企业号用户,您不仅可以在预配置的5个Dashboard中选择,还拥有自己创建的能力.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT 应安装在64bit Windows上 <strong>服务器</strong> 仅限系统。 Windows 10和Windows 11分别是 <strong>没有</strong> 支持 。';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT在其发现功能中使用Nmap. Nmap 探测器设备用于开放端口. 设备最好能对工作端口开放。 设备经常不用这个响应. 下文详述了不同的答复。';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT在其发现功能中使用Nmap. 没有Nmap, Open-AudIT将无法正确运行. 每一个Open-AudIT安装都假设Nmap已经安装,也会在发现者网页上测试. 关于Open-AudIT和Nmap的更多信息,请访问';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT在其发现功能中使用Nmap. 没有Nmap, Open-AudIT将无法正确运行. 每个Open-AudIT安装都假定Nmap已经安装,并将在发现者网页上测试.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = '打开Aud 它使用证书 访问您的设备。 这些是加密和存储的 就像你所期望的';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT是由一位说英语的澳大利亚人写的. 应用程序中的所有内容都使用英语措辞. 然而Open-AudIT一直支持多种语言进行显示. 这些译名并不总是正确的,因为开发者不会在本地说每个译名的语言.<br/><br/>如果翻译中有些不对劲,你能做什么?';

$GLOBALS["lang"]['OpenLDAP'] = '打开LDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap 已安装';

$GLOBALS["lang"]['Opening a Support Ticket?'] = '开张支持票?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap 用户 Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap 用户 Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap 用户成员属性';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap 用户成员属性';

$GLOBALS["lang"]['open|filtered'] = '已过滤';

$GLOBALS["lang"]['Open|filtered'] = '已过滤';

$GLOBALS["lang"]['Operating System'] = '操作系统';

$GLOBALS["lang"]['Operating System Family Contains'] = '操作系统家庭包含';

$GLOBALS["lang"]['Operating Systems'] = '操作系统';

$GLOBALS["lang"]['Operators'] = '运算符';

$GLOBALS["lang"]['optical'] = '光学';

$GLOBALS["lang"]['Optical'] = '光学';

$GLOBALS["lang"]['Optimized'] = '优化';

$GLOBALS["lang"]['Option #1 - Change the data'] = '选项 # 1 - 更改数据';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = '选项 # 2 - 更改翻译文件';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = '选择性代理审计';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = '经Open-AudIT审计的可选版本. 使用% 签名% 作为通配符 。';

$GLOBALS["lang"]['options'] = '选项';

$GLOBALS["lang"]['Options'] = '选项';

$GLOBALS["lang"]['Options, options, options'] = '选项、选项、选项';

$GLOBALS["lang"]['Or'] = '或者说';

$GLOBALS["lang"]['Or select from the below fields.'] = '或从以下字段选择.';

$GLOBALS["lang"]['org_descendants'] = '欧格后裔';

$GLOBALS["lang"]['Org Descendants'] = '欧格后裔';

$GLOBALS["lang"]['org_id'] = '奥尔格标识';

$GLOBALS["lang"]['Org ID'] = '奥尔格标识';

$GLOBALS["lang"]['Organisation'] = '日历';

$GLOBALS["lang"]['organisation'] = '日历';

$GLOBALS["lang"]['Organisation Descendants'] = '后代组织';

$GLOBALS["lang"]['Organisations'] = '组织';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = '组织可以使用自定义字段来扩展和提高每个发现的设备的存储细节水平,开放的核心可以方便地融入CMDB,事件管理和罚单系统.';

$GLOBALS["lang"]['orgs'] = '鸟类';

$GLOBALS["lang"]['Orgs'] = '鸟类';

$GLOBALS["lang"]['Orgs Name'] = '兽名';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Open-AudIT中的 Orgs 是一个关键项目. 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将此与指定角色列表相结合,该列表定义了他们可以对其可以访问的Orgs项目采取的行动. 用户组合 <i>鸟类</i> 和 <i>角色</i> 定义它们在 Open-AudIT 中能够和不能做什么。<br/><br/>Open-AudIT中的大多数项目被分配到一个 Org. 设备,位置,网络等.<br/><br/>兽人可以生孩子. 想想组织图(树)结构. 如果用户可以访问特定的Org,大多数时间(并不总是)他们也可以访问该Orgs后代.';

$GLOBALS["lang"]['orientation'] = '方向';

$GLOBALS["lang"]['Orientation'] = '方向';

$GLOBALS["lang"]['os'] = '奥斯';

$GLOBALS["lang"]['Os'] = '奥斯';

$GLOBALS["lang"]['os_arch'] = '奥斯拱门';

$GLOBALS["lang"]['Os Arch'] = '奥斯拱门';

$GLOBALS["lang"]['os_bit'] = '奥斯比特';

$GLOBALS["lang"]['Os Bit'] = '奥斯比特';

$GLOBALS["lang"]['os_cpe'] = '奥斯 Cpe';

$GLOBALS["lang"]['Os Cpe'] = '奥斯 Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os 显示版本';

$GLOBALS["lang"]['Os Display Version'] = 'Os 显示版本';

$GLOBALS["lang"]['os_family'] = '奥斯家庭';

$GLOBALS["lang"]['Os Family'] = '奥斯家庭';

$GLOBALS["lang"]['os_group'] = '奥斯组';

$GLOBALS["lang"]['Os Group'] = '奥斯组';

$GLOBALS["lang"]['os_installation_date'] = 'Os 安装日期';

$GLOBALS["lang"]['Os Installation Date'] = 'Os 安装日期';

$GLOBALS["lang"]['os_licence_expiry'] = '许可证过期';

$GLOBALS["lang"]['Os Licence Expiry'] = '许可证过期';

$GLOBALS["lang"]['os_license'] = '奥斯许可证';

$GLOBALS["lang"]['Os License'] = '奥斯许可证';

$GLOBALS["lang"]['os_license_code'] = '奥斯许可证代码';

$GLOBALS["lang"]['Os License Code'] = '奥斯许可证代码';

$GLOBALS["lang"]['os_license_mode'] = 'Os 许可模式';

$GLOBALS["lang"]['Os License Mode'] = 'Os 许可模式';

$GLOBALS["lang"]['os_license_type'] = '许可证类型';

$GLOBALS["lang"]['Os License Type'] = '许可证类型';

$GLOBALS["lang"]['os_name'] = '奥斯名称';

$GLOBALS["lang"]['Os Name'] = '奥斯名称';

$GLOBALS["lang"]['os_version'] = '奥斯版本';

$GLOBALS["lang"]['Os Version'] = '奥斯版本';

$GLOBALS["lang"]['Other'] = '其他人员';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = '除此限制外, 您可以根据需要选择属性 。 使用菜单是个好主意';

$GLOBALS["lang"]['Others'] = '其他人员';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = '我们的默认集成还能发现任何外部设备。 所以我们将默认的发现 用于默认的集成 从盒子。 这些使用默认匹配规则,但也允许在IP地址上进行匹配.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = '我们的例子将使用 <i>类型</i> 栏。';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = '我们的框架在这里上传文件进行处理,然后删除它们. 考虑提交审计结果等。';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = '我们最初的集成发布目标 具体是NMIS到Open-AudIT集成到 <i>刚刚工作</i>。 。 。 如果您正在 Linux 上使用程序, 您可以按下一个按钮来执行整合 。 不需要更多的钱。 虽然如此,融合本身是极其可塑的,因此,如果不是你所偏爱的,就很容易改变。';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = '我们的新特性叫做“脆弱” 使你能够迅速确定是否有任何设备受到任何CVE(共同脆弱性暴露)的影响,但如何?<br/><br/>FirstWave不断消耗Nist NVD种子的输出. 我们接受这个并应用一些限制,然后提取受影响的程序并构建一个SQL查询来进行报告. 您的 Open-AudIT 实例可联系到 FirstWave, 并请求任何新的弱点。 当它收到新的脆弱性记录时,就会与数据库和储存的结果相对应。 每次处理一个设备时,都会再次执行所有匹配的漏洞并存储结果. 这意味着,在查看脆弱程度清单时,我们不需要计算所有受影响的设备,我们已经有了结果。 当你看到个人的脆弱性记录时,我们确实会重新计算这种独特的脆弱性的结果。<br/><br/>所以,你总是更新的!<br/><br/>除此之外,我们还每天计算所有设备(通常在一个安静的时间,如2am)所有弱点的结果.<br/><br/>在Open-AudIT的例子中,我们允许你选择你关心的哪些摊贩. 即从软件不使用或安装的供应商处检索脆弱程度记录是没有用的。 默认情况下,我们的供应商名单是Adobe,苹果,思科,谷歌,微软,Mozilla,和Redhat.<br/><br/>这听起来很简单 但幕后是 <b>数量</b> 正在继续。 例如,CVE记录载有一份受影响的软件清单,但这些软件名称与我们在审计计算机时收到的内容不符。 一个很好的例子就是阿帕奇。 通常,一个CVE记录会说受影响的软件是http_server. 在现实中,它以apache2(Ubuntu),httpd(Redhat),Apache HTTP服务器(Windows)等形式出现. 因此,我们必须首先确定当我们问电脑时我们收到的程序的实际名称,可能还有多个名称. 在此之后,我们必须解析 CVE 记录并创建匹配的 SQL 语句 。 允许上面的多个程序名称,以及多个版本,版本范围,甚至多个不同的软件块(一个实例是雷鸟和Firefox在一个单一的CVE). 您的 Open-AudIT 实例必须接受这个并应用 Orgs 过滤。 这只是一个CVE。 确定你拥有和没有哪个CVE怎么样? 那以后再把卖家列入名单怎么样? 这么多事情要考虑!<br/><br/>与通常的报告一样,我们还根据脆弱性数据为Dashboards提供了一些新的部件。';

$GLOBALS["lang"]['Our timeout for a SSH response'] = '我们暂停使用 SSH 响应';

$GLOBALS["lang"]['Our timeout for a WMI response'] = '我们暂停WMI的响应';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = '我们暂停 SNMP 响应';

$GLOBALS["lang"]['Our timeout for an audit script response'] = '我们暂停审计脚本回应';

$GLOBALS["lang"]['output'] = '产出';

$GLOBALS["lang"]['Output'] = '产出';

$GLOBALS["lang"]['outputs'] = '产出';

$GLOBALS["lang"]['Outputs'] = '产出';

$GLOBALS["lang"]['Overall severity score (0–10).'] = '总严重程度分(0–10).';

$GLOBALS["lang"]['overwrite'] = '覆盖';

$GLOBALS["lang"]['Overwrite'] = '覆盖';

$GLOBALS["lang"]['owner'] = '拥有者';

$GLOBALS["lang"]['Owner'] = '拥有者';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec是SysInternal/Microsofts流行的PsExec程序的可自由回放的再执行程序. PAExec旨在作为PsExec的替换减少,因此命令行使用相同,另外还支持附加选项. 这部作品最初灵感来自塔尔哈·塔里克斯·雷姆科姆(Talha Tariks RemCom).';

$GLOBALS["lang"]['PHP'] = 'ưμ㼯A';

$GLOBALS["lang"]['POD'] = 'POD 密码';

$GLOBALS["lang"]['POSTing data'] = 'POST 数据';

$GLOBALS["lang"]['Package'] = '软件包';

$GLOBALS["lang"]['packages'] = '软件包';

$GLOBALS["lang"]['Packages'] = '软件包';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = '软件包被用来报告诸如 <i>被禁软件</i>,服务器上的AntiVirus等.<br/><br/>Open-AudIT提供了一些部件,这些部件也以所供应的可拆解抗病毒、防火墙和其他软件状态的复体为基础。';

$GLOBALS["lang"]['pagefile'] = '页面文件';

$GLOBALS["lang"]['Pagefile'] = '页面文件';

$GLOBALS["lang"]['Pakistan'] = '巴基斯坦';

$GLOBALS["lang"]['Palau'] = '帕劳';

$GLOBALS["lang"]['Palestinian Territory'] = '巴勒斯坦领土';

$GLOBALS["lang"]['Panama'] = '巴拿马';

$GLOBALS["lang"]['Papua New Guinea'] = '巴布亚新几内亚';

$GLOBALS["lang"]['Paraguay'] = '巴拉圭';

$GLOBALS["lang"]['Parameters'] = '参数';

$GLOBALS["lang"]['Paranoid'] = '妄想症';

$GLOBALS["lang"]['Parent'] = '家长';

$GLOBALS["lang"]['parent_id'] = '父母身份证';

$GLOBALS["lang"]['Parent ID'] = '父母身份证';

$GLOBALS["lang"]['parent_name'] = '父名称';

$GLOBALS["lang"]['Parent Name'] = '父名称';

$GLOBALS["lang"]['part_number'] = '编 号';

$GLOBALS["lang"]['Part Number'] = '编 号';

$GLOBALS["lang"]['part_of_domain'] = '域部分';

$GLOBALS["lang"]['Part Of Domain'] = '域部分';

$GLOBALS["lang"]['Partition'] = '分区';

$GLOBALS["lang"]['partition_count'] = '分区数';

$GLOBALS["lang"]['Partition Count'] = '分区数';

$GLOBALS["lang"]['partition_disk_index'] = '分区磁盘索引';

$GLOBALS["lang"]['Partition Disk Index'] = '分区磁盘索引';

$GLOBALS["lang"]['Pass'] = '过';

$GLOBALS["lang"]['Passed'] = '已经通过';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = '被动光学局域网';

$GLOBALS["lang"]['Password'] = '密码';

$GLOBALS["lang"]['password'] = '密码';

$GLOBALS["lang"]['password_changeable'] = '密码可更改';

$GLOBALS["lang"]['Password Changeable'] = '密码可更改';

$GLOBALS["lang"]['password_disabled'] = '密码已禁用';

$GLOBALS["lang"]['Password Disabled'] = '密码已禁用';

$GLOBALS["lang"]['password_expires'] = '密码过期';

$GLOBALS["lang"]['Password Expires'] = '密码过期';

$GLOBALS["lang"]['password_last_changed'] = '密码上次更改';

$GLOBALS["lang"]['Password Last Changed'] = '密码上次更改';

$GLOBALS["lang"]['password_required'] = '需要密码';

$GLOBALS["lang"]['Password Required'] = '需要密码';

$GLOBALS["lang"]['patch_panel'] = '补丁面板';

$GLOBALS["lang"]['Patch Panel'] = '补丁面板';

$GLOBALS["lang"]['patch_panel_port'] = '补丁面板端口';

$GLOBALS["lang"]['Patch Panel Port'] = '补丁面板端口';

$GLOBALS["lang"]['path'] = '路径';

$GLOBALS["lang"]['Path'] = '路径';

$GLOBALS["lang"]['Performance'] = '业绩';

$GLOBALS["lang"]['Performed'] = '已执行';

$GLOBALS["lang"]['Permission'] = '权限';

$GLOBALS["lang"]['Permission Required'] = '需要权限';

$GLOBALS["lang"]['permissions'] = '权限';

$GLOBALS["lang"]['Permissions'] = '权限';

$GLOBALS["lang"]['Persian'] = '波斯语Name';

$GLOBALS["lang"]['Personal Area Network'] = '个人区域网';

$GLOBALS["lang"]['Personal area network'] = '个人区域网';

$GLOBALS["lang"]['Peru'] = '秘鲁';

$GLOBALS["lang"]['Philippines'] = '菲律宾';

$GLOBALS["lang"]['phone'] = '电话';

$GLOBALS["lang"]['Phone'] = '电话';

$GLOBALS["lang"]['Physical CPUs'] = '物理 CPU 软件';

$GLOBALS["lang"]['physical_count'] = '物理计数';

$GLOBALS["lang"]['Physical Count'] = '物理计数';

$GLOBALS["lang"]['physical_depth'] = '物理深度';

$GLOBALS["lang"]['Physical Depth'] = '物理深度';

$GLOBALS["lang"]['physical_height'] = '物理高度';

$GLOBALS["lang"]['Physical Height'] = '物理高度';

$GLOBALS["lang"]['physical_width'] = '物理宽度';

$GLOBALS["lang"]['Physical Width'] = '物理宽度';

$GLOBALS["lang"]['picture'] = '图片';

$GLOBALS["lang"]['Picture'] = '图片';

$GLOBALS["lang"]['pid'] = '管道';

$GLOBALS["lang"]['Pid'] = '管道';

$GLOBALS["lang"]['Pie Chart'] = '派图';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = '拼图必须返回姓名或我的_名称、描述或我的_描述和计数。';

$GLOBALS["lang"]['ping'] = 'ing';

$GLOBALS["lang"]['Ping'] = 'ing';

$GLOBALS["lang"]['Ping Target'] = '平目标';

$GLOBALS["lang"]['Pitcairn Islands'] = '皮特凯恩群岛';

$GLOBALS["lang"]['placement'] = '安置情况';

$GLOBALS["lang"]['Placement'] = '安置情况';

$GLOBALS["lang"]['Plan and conduct internal audits'] = '规划和进行内部审计';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = '请有一个 Open-AudIT 管理员登录并升级数据库 。';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = '请尽快登录和更改这些';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = '请登录到 Open-AudIT 服务器( Windows 或 Linux) 并运行 <code>nslookup IP_ADDRESS_OF_TARGET</code> 在命令提示或贝壳中。 它必须能够解决IP到一个名字.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '请注意,选定的框将覆盖文本输入框。';

$GLOBALS["lang"]['Please see the FAQ'] = '请看FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = '请将所有三个文件发送到您在Opmantek的支持联系人,并描述您的问题.';

$GLOBALS["lang"]['Please set using'] = '请使用';

$GLOBALS["lang"]['Please visit the homepage at'] = '请访问网站主页';

$GLOBALS["lang"]['pod'] = '邮箱';

$GLOBALS["lang"]['Pod'] = '邮箱';

$GLOBALS["lang"]['Poland'] = '波兰';

$GLOBALS["lang"]['Policies'] = '政策';

$GLOBALS["lang"]['Policies have exceptions.'] = '政策有例外。';

$GLOBALS["lang"]['policy'] = '政策';

$GLOBALS["lang"]['Policy'] = '政策';

$GLOBALS["lang"]['policy_id'] = '政策标识';

$GLOBALS["lang"]['Policy ID'] = '政策标识';

$GLOBALS["lang"]['Policy Result'] = '政策结果';

$GLOBALS["lang"]['Policy Results'] = '政策成果';

$GLOBALS["lang"]['Polish'] = '波兰语Name';

$GLOBALS["lang"]['Polite'] = '礼貌';

$GLOBALS["lang"]['Populate the with values provided below:'] = '以下列数值填充:';

$GLOBALS["lang"]['Populated by audit.'] = '通过审计进行。';

$GLOBALS["lang"]['Populated by discovery and audit.'] = '以发现和审计为主。';

$GLOBALS["lang"]['Populated dynamically.'] = '充满活力。';

$GLOBALS["lang"]['Populated from DNS.'] = '由DNS传播.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = '由 SNMP 发现而成。';

$GLOBALS["lang"]['Populated from device audits.'] = '由设备审计提供。';

$GLOBALS["lang"]['Populated from hostname.'] = '从主机名复制.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = '由Linux上的机器编号传播.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = '用于默认路径或发现时检测到的IP的IP充值.';

$GLOBALS["lang"]['Populated from the hostname command.'] = '从主机名命令复制 。';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = '以外部系统的额外数据作为JSON代表。';

$GLOBALS["lang"]['port'] = '端口';

$GLOBALS["lang"]['Port'] = '端口';

$GLOBALS["lang"]['port_name'] = '端口名称';

$GLOBALS["lang"]['Port Name'] = '端口名称';

$GLOBALS["lang"]['port_number'] = '端口编号';

$GLOBALS["lang"]['Port Number'] = '端口编号';

$GLOBALS["lang"]['ports_in_order'] = '端口顺序';

$GLOBALS["lang"]['Ports In Order'] = '端口顺序';

$GLOBALS["lang"]['ports_stop_after'] = '后端口停止';

$GLOBALS["lang"]['Ports Stop After'] = '后端口停止';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = '葡萄牙、葡萄牙共和国';

$GLOBALS["lang"]['Portuguese'] = '葡萄牙语';

$GLOBALS["lang"]['Portuguese (Brazil)'] = '葡萄牙语( 巴西 )';

$GLOBALS["lang"]['position'] = '立场';

$GLOBALS["lang"]['Position'] = '立场';

$GLOBALS["lang"]['Post-Certification'] = '认证后';

$GLOBALS["lang"]['postcode'] = '邮政编码';

$GLOBALS["lang"]['Postcode'] = '邮政编码';

$GLOBALS["lang"]['power_circuit'] = '电路';

$GLOBALS["lang"]['Power Circuit'] = '电路';

$GLOBALS["lang"]['power_sockets'] = '电袜';

$GLOBALS["lang"]['Power Sockets'] = '电袜';

$GLOBALS["lang"]['Predictable'] = '可预见';

$GLOBALS["lang"]['Preferences'] = '首选项';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = '准备每三年重新认证一次';

$GLOBALS["lang"]['Prerequisites'] = '先决条件';

$GLOBALS["lang"]['Prerequisites and Tests'] = '先决条件和试验';

$GLOBALS["lang"]['present'] = '现';

$GLOBALS["lang"]['Present'] = '现';

$GLOBALS["lang"]['previous_value'] = '上一个数值';

$GLOBALS["lang"]['Previous Value'] = '上一个数值';

$GLOBALS["lang"]['primary'] = '小学';

$GLOBALS["lang"]['Primary'] = '小学';

$GLOBALS["lang"]['Primary Key'] = '主密钥';

$GLOBALS["lang"]['print_queue'] = '打印队列';

$GLOBALS["lang"]['Print Queue'] = '打印队列';

$GLOBALS["lang"]['printer_color'] = '打印机颜色';

$GLOBALS["lang"]['Printer Color'] = '打印机颜色';

$GLOBALS["lang"]['printer_duplex'] = '打印机双面';

$GLOBALS["lang"]['Printer Duplex'] = '打印机双面';

$GLOBALS["lang"]['printer_port_name'] = '打印机端口名称';

$GLOBALS["lang"]['Printer Port Name'] = '打印机端口名称';

$GLOBALS["lang"]['printer_shared'] = '打印机共享';

$GLOBALS["lang"]['Printer Shared'] = '打印机共享';

$GLOBALS["lang"]['printer_shared_name'] = '打印机共享名称';

$GLOBALS["lang"]['Printer Shared Name'] = '打印机共享名称';

$GLOBALS["lang"]['priority'] = '优先权';

$GLOBALS["lang"]['Priority'] = '优先权';

$GLOBALS["lang"]['Privacy Passphrase'] = '隐私密码句';

$GLOBALS["lang"]['Privacy Protocol'] = '隐私议定书';

$GLOBALS["lang"]['privileges_required'] = '所需特权';

$GLOBALS["lang"]['Privileges Required'] = '所需特权';

$GLOBALS["lang"]['processor'] = '处理器';

$GLOBALS["lang"]['Processor'] = '处理器';

$GLOBALS["lang"]['processor_count'] = '处理器计数';

$GLOBALS["lang"]['Processor Count'] = '处理器计数';

$GLOBALS["lang"]['processor_slot_count'] = '处理器槽计数';

$GLOBALS["lang"]['Processor Slot Count'] = '处理器槽计数';

$GLOBALS["lang"]['processor_type'] = '处理器类型';

$GLOBALS["lang"]['Processor Type'] = '处理器类型';

$GLOBALS["lang"]['Processors'] = '处理器';

$GLOBALS["lang"]['product_name'] = '产品名称';

$GLOBALS["lang"]['Product Name'] = '产品名称';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'CPE产品名称匹配 : ';

$GLOBALS["lang"]['products'] = '产品';

$GLOBALS["lang"]['Products'] = '产品';

$GLOBALS["lang"]['Professional'] = '专业人员';

$GLOBALS["lang"]['profile'] = '简介';

$GLOBALS["lang"]['Profile'] = '简介';

$GLOBALS["lang"]['program'] = '程序';

$GLOBALS["lang"]['Program'] = '程序';

$GLOBALS["lang"]['Properties'] = '属性';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = '专制. 如果您想要修改高图, 您可能需要';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = '保护信息的保密性、完整性和可获得性';

$GLOBALS["lang"]['protocol'] = '议定书';

$GLOBALS["lang"]['Protocol'] = '议定书';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = '提供说明,并选定期限。';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = '提供一个名字 - 我们谦卑地重新指挥 Open-AudIT QQ, 但你可以随便命名它。<br/>从 Open-AudIT 表格复制 <i>重定向 URI</i> 字段并粘贴到 <i>登录重定向 URI</i> 数据库中。<br/>Sign-out direct URI是可选的,但如果需要,可以使用开放审计/索引. 使用您的 Open- AudIT 服务器的 php/ logout 地址, 根据截图 。<br/>平时是你的 Open-AudIT URL 将看起来像';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = '设备种子发现工作如下';

$GLOBALS["lang"]['provider'] = '供应商';

$GLOBALS["lang"]['Provider'] = '供应商';

$GLOBALS["lang"]['published'] = '已出版';

$GLOBALS["lang"]['Published'] = '已出版';

$GLOBALS["lang"]['published_date'] = '发布日期';

$GLOBALS["lang"]['Published Date'] = '发布日期';

$GLOBALS["lang"]['publisher'] = '出版商';

$GLOBALS["lang"]['Publisher'] = '出版商';

$GLOBALS["lang"]['Puerto Rico'] = '波多黎各';

$GLOBALS["lang"]['Purchase'] = '购买';

$GLOBALS["lang"]['purchase_amount'] = '采购额';

$GLOBALS["lang"]['Purchase Amount'] = '采购额';

$GLOBALS["lang"]['purchase_cost_center'] = '采购费用中心';

$GLOBALS["lang"]['Purchase Cost Center'] = '采购费用中心';

$GLOBALS["lang"]['purchase_count'] = '采购数';

$GLOBALS["lang"]['Purchase Count'] = '采购数';

$GLOBALS["lang"]['purchase_date'] = '采购日期';

$GLOBALS["lang"]['Purchase Date'] = '采购日期';

$GLOBALS["lang"]['purchase_invoice'] = '购货发票';

$GLOBALS["lang"]['Purchase Invoice'] = '购货发票';

$GLOBALS["lang"]['purchase_order'] = '采购订单';

$GLOBALS["lang"]['Purchase Order'] = '采购订单';

$GLOBALS["lang"]['purchase_order_number'] = '采购订单号';

$GLOBALS["lang"]['Purchase Order Number'] = '采购订单号';

$GLOBALS["lang"]['purchase_service_contract_number'] = '采购服务合同编号';

$GLOBALS["lang"]['Purchase Service Contract Number'] = '采购服务合同编号';

$GLOBALS["lang"]['purchase_vendor'] = '采购供应商';

$GLOBALS["lang"]['Purchase Vendor'] = '采购供应商';

$GLOBALS["lang"]['purpose'] = '目的';

$GLOBALS["lang"]['Purpose'] = '目的';

$GLOBALS["lang"]['Qatar'] = '卡塔尔';

$GLOBALS["lang"]['queries'] = '查询';

$GLOBALS["lang"]['Queries'] = '查询';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = '查询是Open-AudIT的重要组成部分. 它们能让你从你发现的所有设备数据中获得有意义的信息。 它们与摘要和团体一道,为获取关键信息提供了强有力的机制。';

$GLOBALS["lang"]['Queries for Groups should select only the'] = '组查询只选择';

$GLOBALS["lang"]['Query'] = '查询';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = '查询此活动目录属性首先确定用户的工作单位 。';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = '查询此活动目录属性的第二位以确定用户工作单位 。';

$GLOBALS["lang"]['queue'] = '队列';

$GLOBALS["lang"]['Queue'] = '队列';

$GLOBALS["lang"]['Queue Limit'] = '队列限制';

$GLOBALS["lang"]['Queued Device Audits'] = '排队设备审计';

$GLOBALS["lang"]['Queued IP Scans'] = '排队 IP 扫描';

$GLOBALS["lang"]['Queued Items'] = '排队项目';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC 活动目录和开放LDAP';

$GLOBALS["lang"]['RU Start'] = 'RU 启动';

$GLOBALS["lang"]['RX Bitrate'] = 'RX 比特率';

$GLOBALS["lang"]['RX Freq'] = 'RX 弗赖克';

$GLOBALS["lang"]['RX Level'] = 'RX 级别';

$GLOBALS["lang"]['RX Power'] = 'RX 电源';

$GLOBALS["lang"]['RX Profile'] = 'RX 配置';

$GLOBALS["lang"]['Rack'] = '马克';

$GLOBALS["lang"]['rack_devices'] = 'Rack 设备';

$GLOBALS["lang"]['Rack Devices'] = 'Rack 设备';

$GLOBALS["lang"]['rack_id'] = '麦克身份证';

$GLOBALS["lang"]['Rack ID'] = '麦克身份证';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack 管理和报告';

$GLOBALS["lang"]['Racks'] = '机柜';

$GLOBALS["lang"]['racks'] = '机柜';

$GLOBALS["lang"]['radio'] = '无线电';

$GLOBALS["lang"]['Radio'] = '无线电';

$GLOBALS["lang"]['Radio MAC'] = 'MAC电台';

$GLOBALS["lang"]['rationale'] = '理由';

$GLOBALS["lang"]['Rationale'] = '理由';

$GLOBALS["lang"]['raw'] = '原始内容';

$GLOBALS["lang"]['Raw'] = '原始内容';

$GLOBALS["lang"]['read'] = '读取';

$GLOBALS["lang"]['Read'] = '读取';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = '央视网上"开放AudIT维基"的文档.';

$GLOBALS["lang"]['Read through the log file at'] = '通过日志文件读取 。';

$GLOBALS["lang"]['Received'] = '实收';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = '最近我们被问到这个问题——你觉得Open-AudIT比其它类似的程序安全吗? 就像大多数事情一样,答案是 <i>看情况</i>。 。 。<br/><br/>打开Aud 信息技术的操作可以极为安全。 但和通常的计算机安全一样, 你越想制造东西, 它就越不方便。 老话 <i>最安全的电脑是关机和柜子里的电脑<i> 想到了这一点。<br/><br/>下面我们概述一些可以与Open-AudIT一起使用的,可以增加安全性的选项. 同Open-AudIT中的大多数项目一样,这些是选项,而不是强制性的. 你带保安有多远取决于你</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = '重新认证 : 每三年需要一次';

$GLOBALS["lang"]['Red Query'] = '红色查询';

$GLOBALS["lang"]['Redirect URI'] = '重定向 URI';

$GLOBALS["lang"]['redirect_uri'] = '调整 Uri 方向';

$GLOBALS["lang"]['Redirect Uri'] = '调整 Uri 方向';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = '减少数据被破坏和网络威胁的风险';

$GLOBALS["lang"]['references'] = '参考资料';

$GLOBALS["lang"]['References'] = '参考资料';

$GLOBALS["lang"]['region'] = '地区';

$GLOBALS["lang"]['Region'] = '地区';

$GLOBALS["lang"]['registered_user'] = '注册用户';

$GLOBALS["lang"]['Registered User'] = '注册用户';

$GLOBALS["lang"]['Rejected'] = '被拒绝';

$GLOBALS["lang"]['rel'] = '转动';

$GLOBALS["lang"]['Rel'] = '转动';

$GLOBALS["lang"]['Release'] = '发布';

$GLOBALS["lang"]['remediation'] = '补救';

$GLOBALS["lang"]['Remediation'] = '补救';

$GLOBALS["lang"]['Remote'] = '远程';

$GLOBALS["lang"]['remote_address'] = '远程地址';

$GLOBALS["lang"]['Remote Address'] = '远程地址';

$GLOBALS["lang"]['remote_port'] = '远程端口';

$GLOBALS["lang"]['Remote Port'] = '远程端口';

$GLOBALS["lang"]['Remove'] = '删除';

$GLOBALS["lang"]['Remove Exception'] = '删除例外';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = '重复一次,直到你有一个完全发现和审计过的Windows PC.';

$GLOBALS["lang"]['Report'] = '报告';

$GLOBALS["lang"]['Report on your devices, networks and more'] = '报告您的设备、网络和更多';

$GLOBALS["lang"]['reportable'] = '可报告';

$GLOBALS["lang"]['Reportable'] = '可报告';

$GLOBALS["lang"]['Reports'] = '报告';

$GLOBALS["lang"]['request'] = '请求';

$GLOBALS["lang"]['Request'] = '请求';

$GLOBALS["lang"]['Request Method'] = '请求方法';

$GLOBALS["lang"]['Request Vulnerability'] = '请求脆弱性';

$GLOBALS["lang"]['Request a Specific CVE'] = '具体请求a 简历';

$GLOBALS["lang"]['requested'] = '请求';

$GLOBALS["lang"]['Requested'] = '请求';

$GLOBALS["lang"]['require_port'] = '需要端口';

$GLOBALS["lang"]['Require Port'] = '需要端口';

$GLOBALS["lang"]['Require an Open Port'] = '需要打开端口';

$GLOBALS["lang"]['Required'] = '要求数';

$GLOBALS["lang"]['Required AWS user permissions'] = '需要的 AWS 用户权限';

$GLOBALS["lang"]['Required Fields'] = '需要的字段';

$GLOBALS["lang"]['Reset'] = '重设';

$GLOBALS["lang"]['Reset All Data'] = '重置全部数据';

$GLOBALS["lang"]['Reset to Default'] = '重置为默认值';

$GLOBALS["lang"]['resource'] = '资源';

$GLOBALS["lang"]['Resource'] = '资源';

$GLOBALS["lang"]['Resource Name'] = '资源名称';

$GLOBALS["lang"]['Resources'] = '资源';

$GLOBALS["lang"]['response'] = '回应';

$GLOBALS["lang"]['Response'] = '回应';

$GLOBALS["lang"]['responsibility'] = '责任';

$GLOBALS["lang"]['Responsibility'] = '责任';

$GLOBALS["lang"]['Restore my Licenses'] = '恢复我的驾照';

$GLOBALS["lang"]['Restrict to Private'] = '限于私人';

$GLOBALS["lang"]['Restrict to Subnet'] = '限于子网';

$GLOBALS["lang"]['result'] = '结果';

$GLOBALS["lang"]['Result'] = '结果';

$GLOBALS["lang"]['Resulting Function'] = '结果函数';

$GLOBALS["lang"]['Results'] = '结果';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = '在';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = '获取像 Windows 2008 这样的 OS 名称的设备列表';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = '用 id 88. 获取设备的所有细节.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = '获取所有运行 Windows 的设备 。';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = '用标准栏检索所有设备';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = '获取按主机名命令运行 Windows 的前10个设备';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = '从所有设备中获取属性 id、 ip、 主机名、 域名、 类型';

$GLOBALS["lang"]['retrieved'] = '获取';

$GLOBALS["lang"]['Retrieved'] = '获取';

$GLOBALS["lang"]['retrieved_ident'] = '获取标识';

$GLOBALS["lang"]['Retrieved Ident'] = '获取标识';

$GLOBALS["lang"]['retrieved_name'] = '获取名称';

$GLOBALS["lang"]['Retrieved Name'] = '获取名称';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = '从设备中检索到 - Windows:Win32_ComputerSystemProduction, Linux:dmidecode, , MacOS:系统定位器,ESXi:vim-cmd hostsvc/主机摘要,HP-UX:machinfo, Solaris:smbios, AIX: uname. 中国植物物种信息数据库.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = '获取全权证书清单';

$GLOBALS["lang"]['Retrieving or Creating'] = '获取或创建';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = '返回默认列集(devices.id,ublices.icon,ublices.type,ublices.name,ublices.ip,ublic.dns_fqdn,ublices.description,ublic.manucourer,ublics.os_family,ublic.status)的设备集合.';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = '返回在路由器上安装的所有模块列表';

$GLOBALS["lang"]['Return an individual device details'] = '返回单个设备\\\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = '返回 {收集} 的列表 。';

$GLOBALS["lang"]['Returns a {collection} details.'] = '返回 {收集} 细节 。';

$GLOBALS["lang"]['Reunion'] = '团圆';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = '对照ISO 27001要求审查目前的做法';

$GLOBALS["lang"]['revision'] = '订正';

$GLOBALS["lang"]['Revision'] = '订正';

$GLOBALS["lang"]['risk_assesment_result'] = '风险分担结果';

$GLOBALS["lang"]['Risk Assesment Result'] = '风险分担结果';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = '风险评估和治疗';

$GLOBALS["lang"]['Risk Management'] = '风险管理';

$GLOBALS["lang"]['Role'] = '作用';

$GLOBALS["lang"]['roles'] = '角色';

$GLOBALS["lang"]['Roles'] = '角色';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = '角色只有在拥有Open-AudIT Enterprise许可证的情况下才能创建和编辑. 对于大多数用户来说,默认的一组角色应该是所需要的全部.';

$GLOBALS["lang"]['Romania'] = '罗马尼亚';

$GLOBALS["lang"]['Romanian'] = '罗马尼亚语';

$GLOBALS["lang"]['Room'] = '会议室';

$GLOBALS["lang"]['route'] = '路线';

$GLOBALS["lang"]['Route'] = '路线';

$GLOBALS["lang"]['Row'] = '行';

$GLOBALS["lang"]['Row Count'] = '行数';

$GLOBALS["lang"]['row_position'] = '行位置';

$GLOBALS["lang"]['Row Position'] = '行位置';

$GLOBALS["lang"]['Rows'] = '行数';

$GLOBALS["lang"]['ru_height'] = '鲁高';

$GLOBALS["lang"]['Ru Height'] = '鲁高';

$GLOBALS["lang"]['ru_start'] = '开始';

$GLOBALS["lang"]['Ru Start'] = '开始';

$GLOBALS["lang"]['rule_group'] = '规则组';

$GLOBALS["lang"]['Rule Group'] = '规则组';

$GLOBALS["lang"]['rules'] = '规则';

$GLOBALS["lang"]['Rules'] = '规则';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = '规则是在发现设备或处理审计结果时针对设备创建和运行的. 规则可以用来根据其他属性设置设备属性.<br/><br/>注 - 目前,我们不能删除包含 / 的规则输入或输出。 这是因为框架正在解析 / 作为 URL 的一部分并返回一个 404 , 甚至在我们代码运行之前 。 要做到这一点,就要删除规则本身,然后根据需要重新创建投入和产出。 幸运的是,含有 / 的输入和产出很少(事实上不存在默认)。';

$GLOBALS["lang"]['Run Discovery'] = '运行发现';

$GLOBALS["lang"]['Run Discovery on Devices'] = '在设备上运行发现';

$GLOBALS["lang"]['Run Your Discovery'] = '运行您的发现';

$GLOBALS["lang"]['Run a Command'] = '运行命令';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '调查一下发现 <b>你的网络上有什么?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = '通过打字运行脚本 <code>cscript test_windows_client.vbs</code> 在操纵台。';

$GLOBALS["lang"]['Run this Command'] = '运行此命令';

$GLOBALS["lang"]['runas'] = '鲁纳斯';

$GLOBALS["lang"]['Runas'] = '鲁纳斯';

$GLOBALS["lang"]['Running'] = '运行';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = '在窗口下运行 Open-AudIT Apache 服务';

$GLOBALS["lang"]['Russian'] = '俄罗斯联邦';

$GLOBALS["lang"]['Russian Federation'] = '俄罗斯联邦';

$GLOBALS["lang"]['Rwanda'] = '卢旺达';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx 位速率';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx 位速率';

$GLOBALS["lang"]['rx_freq'] = '缩写:Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = '缩写:Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx 级别';

$GLOBALS["lang"]['Rx Level'] = 'Rx 级别';

$GLOBALS["lang"]['rx_power'] = 'Rx 电源';

$GLOBALS["lang"]['Rx Power'] = 'Rx 电源';

$GLOBALS["lang"]['rx_profile'] = 'Rx 配置文件';

$GLOBALS["lang"]['Rx Profile'] = 'Rx 配置文件';

$GLOBALS["lang"]['SAN Audit'] = 'SAN 审计';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN 自动发现';

$GLOBALS["lang"]['SELECT'] = '独立';

$GLOBALS["lang"]['SID'] = '小岛屿发展中国家';

$GLOBALS["lang"]['SM Version'] = 'SM 版本';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2) (韩语).';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP 状态 细节';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID 编辑器';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP 版本';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3 (英语).';

$GLOBALS["lang"]['SQL'] = 'SQL 数据';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (高级)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL 创建语句';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = '不包含此条件的 SQL 将会导致部件无法执行 。';

$GLOBALS["lang"]['SSH'] = 'SSH 服务器';

$GLOBALS["lang"]['SSH Key'] = 'SSH 服务器 密钥';

$GLOBALS["lang"]['SW Revision'] = 'SW 修订';

$GLOBALS["lang"]['Saint Barthelemy'] = '圣巴瑟莱米';

$GLOBALS["lang"]['Saint Helena'] = '圣赫勒拿';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = '圣基茨和尼维斯';

$GLOBALS["lang"]['Saint Lucia'] = '圣卢西亚';

$GLOBALS["lang"]['Saint Martin'] = '圣马丁';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = '圣皮埃尔和密克隆';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = '圣文森特和格林纳丁斯';

$GLOBALS["lang"]['Samoa'] = '萨摩亚';

$GLOBALS["lang"]['san'] = '参';

$GLOBALS["lang"]['San'] = '参';

$GLOBALS["lang"]['San Marino'] = '圣马力诺';

$GLOBALS["lang"]['Sao Tome and Principe'] = '圣多美和普林西比';

$GLOBALS["lang"]['Saturday'] = '星期六(周六)';

$GLOBALS["lang"]['Saudi Arabia'] = '沙特阿拉伯';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = '保存并运行文件 。 确保您以管理员身份运行文件以安装( 右键单击, 以管理员身份运行) 。';

$GLOBALS["lang"]['Save as Default'] = '另存为默认';

$GLOBALS["lang"]['Save the downloaded file.'] = '保存下载的文件 。';

$GLOBALS["lang"]['scaling'] = '缩放';

$GLOBALS["lang"]['Scaling'] = '缩放';

$GLOBALS["lang"]['scan_options'] = '扫描选项';

$GLOBALS["lang"]['Scan Options'] = '扫描选项';

$GLOBALS["lang"]['Scan Options ID'] = '扫描选项 ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = '扫描此端口, 如果检测到打开, 请使用此端口进行 SSH 通信 。 这一点被添加到上面的自定义TCP端口列表中(如果尚未包括的话),因此没有必要也将其列入该列表中. 逗号隔离,没有空格.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = '扫描 TCP 端口的 Nmap 顶号 。';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = '扫描 UDP 端口的 Nmap 顶号 。';

$GLOBALS["lang"]['schedule'] = '时间表';

$GLOBALS["lang"]['Schedule'] = '时间表';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = '计划设备的发现和报告使Open-AudIT专业成为繁忙的信息技术专业人员寻求减少间接费用和增加见解的有效解决办法。';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = '时间安排 - 发现、报告和更多';

$GLOBALS["lang"]['scope'] = '范围';

$GLOBALS["lang"]['Scope'] = '范围';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = '范围称为授权范围,代表脆弱性是否影响到脆弱部分原先的安全权力以外的资源。<br/><br/>此属性唯一的两个有效值是';

$GLOBALS["lang"]['script_timeout'] = '脚本超时';

$GLOBALS["lang"]['Script Timeout'] = '脚本超时';

$GLOBALS["lang"]['scripts'] = '脚本';

$GLOBALS["lang"]['Scripts'] = '脚本';

$GLOBALS["lang"]['scsi'] = '斯凯';

$GLOBALS["lang"]['Scsi'] = '斯凯';

$GLOBALS["lang"]['scsi_bus'] = '斯克西公共汽车';

$GLOBALS["lang"]['Scsi Bus'] = '斯克西公共汽车';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi 逻辑股';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi 逻辑股';

$GLOBALS["lang"]['scsi_port'] = '斯凯港';

$GLOBALS["lang"]['Scsi Port'] = '斯凯港';

$GLOBALS["lang"]['Search'] = '搜索';

$GLOBALS["lang"]['Search For a Device'] = '搜索设备';

$GLOBALS["lang"]['Searching Using DataTables'] = '使用数据表搜索';

$GLOBALS["lang"]['Second'] = '第二届';

$GLOBALS["lang"]['secondary'] = '中学';

$GLOBALS["lang"]['Secondary'] = '中学';

$GLOBALS["lang"]['Secondary Text'] = '次要文本';

$GLOBALS["lang"]['Secret Key'] = '密钥';

$GLOBALS["lang"]['section'] = '节次';

$GLOBALS["lang"]['Section'] = '节次';

$GLOBALS["lang"]['secure'] = '安全';

$GLOBALS["lang"]['Secure'] = '安全';

$GLOBALS["lang"]['Security Content Automation Protocol'] = '安全内容自动化协议';

$GLOBALS["lang"]['Security Level'] = '安全级别';

$GLOBALS["lang"]['Security Name'] = '安全名称';

$GLOBALS["lang"]['Security Status'] = '安全状况';

$GLOBALS["lang"]['security_zone'] = '安全区';

$GLOBALS["lang"]['Security Zone'] = '安全区';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = '见上文。 注 - 这也可能是LDAP服务器上自签名的证书造成的. 我们正努力在今后的释放中允许这样做。';

$GLOBALS["lang"]['See our page on enabling'] = '见我们关于启用的页面';

$GLOBALS["lang"]['Seed Discoveries'] = '种子发现';

$GLOBALS["lang"]['seed_ip'] = '种子 IP';

$GLOBALS["lang"]['Seed IP'] = '种子 IP';

$GLOBALS["lang"]['seed_ping'] = '种子平';

$GLOBALS["lang"]['Seed Ping'] = '种子平';

$GLOBALS["lang"]['seed_restrict_to_private'] = '种子限制为私人';

$GLOBALS["lang"]['Seed Restrict To Private'] = '种子限制为私人';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = '种子限制到子网';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = '种子限制到子网';

$GLOBALS["lang"]['Select'] = '选择';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = '选择管理员 - > 任务 - > 创建 菜单中的任务 。';

$GLOBALS["lang"]['Select All'] = '全部选择';

$GLOBALS["lang"]['Select All Devices'] = '选择所有设备';

$GLOBALS["lang"]['select_external_attribute'] = '选择外部属性';

$GLOBALS["lang"]['Select External Attribute'] = '选择外部属性';

$GLOBALS["lang"]['select_external_count'] = '选择外部计数';

$GLOBALS["lang"]['Select External Count'] = '选择外部计数';

$GLOBALS["lang"]['select_external_type'] = '选择外部 类型';

$GLOBALS["lang"]['Select External Type'] = '选择外部 类型';

$GLOBALS["lang"]['select_external_value'] = '选择外部 数值';

$GLOBALS["lang"]['Select External Value'] = '选择外部 数值';

$GLOBALS["lang"]['select_internal_attribute'] = '选择内部属性';

$GLOBALS["lang"]['Select Internal Attribute'] = '选择内部属性';

$GLOBALS["lang"]['select_internal_count'] = '选择内部计数';

$GLOBALS["lang"]['Select Internal Count'] = '选择内部计数';

$GLOBALS["lang"]['select_internal_type'] = '选择内部 类型';

$GLOBALS["lang"]['Select Internal Type'] = '选择内部 类型';

$GLOBALS["lang"]['select_internal_value'] = '选择内部 数值';

$GLOBALS["lang"]['Select Internal Value'] = '选择内部 数值';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = '选择菜单 - > 管理 - > 基线 - > 清单基线。';

$GLOBALS["lang"]['Select a Table'] = '选择表格';

$GLOBALS["lang"]['Select an accredited certification body'] = '选择认证机构';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = '选择和应用适当的控制措施(附件A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = '选择 <i>通讯 警卫</i> 选项卡<br/><br/>点击访问权限 编辑默认';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = '选择 <i>签名打开</i> 选项卡和复制值 <i>发行商</i> (只是URL本身). 粘贴到 Open-AudIT 中 <i>发行商</i> 字段。';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = '选择 <i>此账户</i> 复选框并提供账户名称和密码。';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = '选择开始菜单和类型 <i>服务<.i>。 单击服务图标。</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = '选择用于创建和输入相关细节的 Auth Menthod 类型。';

$GLOBALS["lang"]['Self Delete'] = '自删除';

$GLOBALS["lang"]['Senegal'] = '塞内加尔';

$GLOBALS["lang"]['sensitivity'] = '敏感性';

$GLOBALS["lang"]['Sensitivity'] = '敏感性';

$GLOBALS["lang"]['September'] = '9月 (中文(简体) ).';

$GLOBALS["lang"]['Serbia'] = '塞尔维亚';

$GLOBALS["lang"]['serial'] = '序列';

$GLOBALS["lang"]['Serial'] = '序列';

$GLOBALS["lang"]['serial_imei'] = '序列 Imei';

$GLOBALS["lang"]['Serial Imei'] = '序列 Imei';

$GLOBALS["lang"]['serial_sim'] = '序列符号';

$GLOBALS["lang"]['Serial Sim'] = '序列符号';

$GLOBALS["lang"]['series'] = '系列';

$GLOBALS["lang"]['Series'] = '系列';

$GLOBALS["lang"]['server'] = '服务器';

$GLOBALS["lang"]['Server'] = '服务器';

$GLOBALS["lang"]['server_id'] = '服务器代号';

$GLOBALS["lang"]['Server ID'] = '服务器代号';

$GLOBALS["lang"]['Server Is'] = '服务器是';

$GLOBALS["lang"]['server_item'] = '服务器项目';

$GLOBALS["lang"]['Server Item'] = '服务器项目';

$GLOBALS["lang"]['Server Status'] = '服务器状态';

$GLOBALS["lang"]['Servers'] = '服务器';

$GLOBALS["lang"]['Servers Only'] = '只有服务器';

$GLOBALS["lang"]['service'] = '服务';

$GLOBALS["lang"]['Service'] = '服务';

$GLOBALS["lang"]['service_identifier'] = '服务标识符';

$GLOBALS["lang"]['Service Identifier'] = '服务标识符';

$GLOBALS["lang"]['service_level_a'] = 'A级服务';

$GLOBALS["lang"]['Service Level A'] = 'A级服务';

$GLOBALS["lang"]['service_level_b'] = 'B级服务';

$GLOBALS["lang"]['Service Level B'] = 'B级服务';

$GLOBALS["lang"]['service_network'] = '服务网络';

$GLOBALS["lang"]['Service Network'] = '服务网络';

$GLOBALS["lang"]['service_number'] = '服务人数';

$GLOBALS["lang"]['Service Number'] = '服务人数';

$GLOBALS["lang"]['service_pack'] = '服务包';

$GLOBALS["lang"]['Service Pack'] = '服务包';

$GLOBALS["lang"]['service_plan'] = '服务计划';

$GLOBALS["lang"]['Service Plan'] = '服务计划';

$GLOBALS["lang"]['service_provider'] = '服务提供者';

$GLOBALS["lang"]['Service Provider'] = '服务提供者';

$GLOBALS["lang"]['service_tag'] = '服务标记';

$GLOBALS["lang"]['Service Tag'] = '服务标记';

$GLOBALS["lang"]['service_type'] = '服务类型';

$GLOBALS["lang"]['Service Type'] = '服务类型';

$GLOBALS["lang"]['Service Under Windows'] = '窗口下的服务';

$GLOBALS["lang"]['service_version'] = '服务版本';

$GLOBALS["lang"]['Service Version'] = '服务版本';

$GLOBALS["lang"]['Set'] = '设定';

$GLOBALS["lang"]['set_by'] = '设定';

$GLOBALS["lang"]['Set By'] = '设定';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = '由发现函数设定 - 通常不手工设置 。';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = '由审计_域或发现_域脚本设定. 不设.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = '设置外部文本为内部数据资本化版本。';

$GLOBALS["lang"]['Set the external text to lowercase.'] = '将外部文本设置为小写。';

$GLOBALS["lang"]['Set the external text to uppercase.'] = '设置外部文本为大写 。';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = '设置列表屏幕上表格的大小(正常或紧凑)。';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = '如果您希望从AD中插入可能无法接触的系统,但AD从该日期开始就已看到这些系统,请设定此功能。';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = '在子网上设置Discovery几乎与通过网络界面运行常规Discovery完全相同. 唯一的附加项目是排定的时数和日数,以及计划任务本身的名称。 你可以利用这个来利用不同的证书来安排多个发现.<br/><br/>根据"子网发现","主动目录发现"也只是与普通的"主动目录发现"相同的字段,增加了一天,小时(s)和名称.<br/><br/>如果Open-AudIT服务器有向它报告的收集器,则会提供额外的下调. 您可以选择此选项来指定任务要运行的收集器 。 仅支持收集器的发现任务 。 指定与常规发现项目相同的项目, 但提供运行此任务的替代收集器 。';

$GLOBALS["lang"]['severity'] = '严重性';

$GLOBALS["lang"]['Severity'] = '严重性';

$GLOBALS["lang"]['severity_text'] = '严重性文本';

$GLOBALS["lang"]['Severity Text'] = '严重性文本';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = '严重性从 <code>base_score</code> 也可以是:无,低,中,高,临界之一.';

$GLOBALS["lang"]['Seychelles'] = '塞舌尔';

$GLOBALS["lang"]['share'] = '份额';

$GLOBALS["lang"]['Share'] = '份额';

$GLOBALS["lang"]['Share Name'] = '共享名称';

$GLOBALS["lang"]['shared'] = '共享';

$GLOBALS["lang"]['Shared'] = '共享';

$GLOBALS["lang"]['shared_name'] = '共享名称';

$GLOBALS["lang"]['Shared Name'] = '共享名称';

$GLOBALS["lang"]['shell'] = '贝壳';

$GLOBALS["lang"]['Shell'] = '贝壳';

$GLOBALS["lang"]['Ship Date'] = '船舶日期';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = '已装运是一组默认项目 。 这些可以通过菜单找到';

$GLOBALS["lang"]['short'] = '短数';

$GLOBALS["lang"]['Short'] = '短数';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '我应该从这个设备中删除所有非当前数据吗?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = '如果使用此文件( 或模式) 来排除文件被报告 。 通常情况下,对于审计文件,此设定为 <code>y</code>。 。 。';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = '如果在从FirstWave检索弱点时使用该供应商。';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = '我们是否应该从远程服务中添加设备, 本地。';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '我们是否应该对被选中的Org以及Orgs的孩子发放这种许可证?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = '如果发现管理软件,我们是否应该审计一个 SAN 。';

$GLOBALS["lang"]['Should we audit mount points.'] = '我们是否应该审计点数。';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = '我们是否应该审计净数据端口(是、否,只审计服务器)。';

$GLOBALS["lang"]['Should we audit the installed software.'] = '我们应该对安装的软件进行审计。';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '我们是否应该将过滤的端口视为一个开放端口——因此将这个IP标为带有设备附加?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '我们是否应该将一个开放的QQ过滤端口视为一个开放端口——因此将这个IP标为带有设备的标志?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = '我们是否应该将主机名转换为小写 。';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = '我们是否应根据审计结果创建文件。';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = '我们是否应该在网络界面中曝光这个组.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = '如果我们在网络界面“报告”菜单下的报告列表中披露此查询。';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = '如果我们在网络界面的《报告》菜单下的报告列表中披露这一查询。';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = '执行时应该隐藏审计脚本窗口.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = '如果我们忽略一个无效的或自签名的 SSL 证书, 无论如何提交结果 。';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = '我们应该在目标机器上安装Open-Scap';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = '我们是否应该匹配基于设备的 mac 地址, 即使它可能从 VMware 复制 。';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = '我们是否应该匹配基于其DNS fqdn的设备.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = '是否匹配基于 DNS 主机名的设备 。';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = '如果我们匹配一个基于其UUID的设备.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = '我们是否应该匹配基于其dbus id的装置.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = '我们是否应该匹配一个基于fqdn的设备.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = '是否匹配基于主机名和 UUID 的设备 。';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = '是否匹配基于主机名和 dbus id 的设备 。';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = '我们是否应该匹配基于其主机名和序列的设备 。';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = '如果我们有一个没有数据的现有设备, 我们是否应该根据它的 ip 来匹配一个设备 。';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = '我们是否应该匹配基于其ip的设备.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = '我们是否应该匹配基于其mac地址的设备.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = '我们是否应该根据其序列和类型来匹配一个设备.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = '我们是否应该根据其序列号来匹配一个设备.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = '我们是否应该匹配一个仅基于其SNMP sysName和串行的设备.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = '我们是否应该匹配仅基于其 SNMP sys 的设备Name';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = '我们是否应该只根据其主机名匹配一个设备 。';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '在试图扫描前, 要不要先查一下IP? 如果它不响应 ping , 请跳过此设备 。';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = '如果我们把外部系统从本地设备中充斥出来';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = '我们是否应该检索所有 DNS 名称';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '我们是否应该进行审计并提交(y/n)。';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = '是否应该使用UDP端口161测试SNMP.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = '我们应该使用TCP端口22测试SSH.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = '我们应该使用TCP端口135测试WMI.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = '是否应该解除代理(y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = '如果我们使用系统或用户级代理来提交审计结果.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = '如果我们在检索已安装软件时使用win32_产品WMI类(不是微软推荐的).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = '我们是否应该使用这种方法验证用户证书 。 设定为 <code>y</code> 或者说 <code>n</code>。 。 。';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = '如果我们使用这种方法来充斥用户角色. 实地 <code>use_auth</code> 必须设定为 <code>y</code> 用这个 设定为 <code>y</code> 或者说 <code>n</code>。 。 。';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = '如果我们用这个值来匹配外部和内部设备. 我们的默认集成在这里使用IP和UUID. 如果这些内外设备中的任何一个匹配,我们认为它们是同一个设备.';

$GLOBALS["lang"]['Show All'] = '全部显示';

$GLOBALS["lang"]['sid'] = '西德语Name';

$GLOBALS["lang"]['Sid'] = '西德语Name';

$GLOBALS["lang"]['sidebar'] = '边栏';

$GLOBALS["lang"]['Sidebar'] = '边栏';

$GLOBALS["lang"]['Sierra Leone'] = '塞拉利昂';

$GLOBALS["lang"]['Singapore'] = '新加坡';

$GLOBALS["lang"]['Site A'] = 'A站点';

$GLOBALS["lang"]['Site B'] = 'B站点';

$GLOBALS["lang"]['site_hours_a'] = 'A站点小时';

$GLOBALS["lang"]['Site Hours A'] = 'A站点小时';

$GLOBALS["lang"]['site_hours_b'] = 'B站点时数';

$GLOBALS["lang"]['Site Hours B'] = 'B站点时数';

$GLOBALS["lang"]['size'] = '大小';

$GLOBALS["lang"]['Size'] = '大小';

$GLOBALS["lang"]['slaves'] = '奴隶';

$GLOBALS["lang"]['Slaves'] = '奴隶';

$GLOBALS["lang"]['Slovak'] = '斯洛伐克语Name';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = '斯洛伐克(斯洛伐克共和国)';

$GLOBALS["lang"]['Slovenia'] = '斯洛文尼亚';

$GLOBALS["lang"]['Slovenian'] = '斯洛文尼亚语';

$GLOBALS["lang"]['Smart Status'] = '智能状态';

$GLOBALS["lang"]['smversion'] = '扭曲';

$GLOBALS["lang"]['Smversion'] = '扭曲';

$GLOBALS["lang"]['Sneaky'] = '狡猾';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp 企业标识';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp 企业标识';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp 企业名称';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp 企业名称';

$GLOBALS["lang"]['snmp_oid'] = '缩写 Oid';

$GLOBALS["lang"]['Snmp Oid'] = '缩写 Oid';

$GLOBALS["lang"]['snmp_timeout'] = '暂停';

$GLOBALS["lang"]['Snmp Timeout'] = '暂停';

$GLOBALS["lang"]['snmp_version'] = 'Snmp 版本';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp 版本';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = '因此一个脚本没有在顽抗设备上工作. 额 Windows,Linux,和MacOS的脚本都接受调试参数. 这可以设置在脚本本身,也可以在命令行上提供. 使用设置为 5 的选项运行脚本, 您应该看到脚本的哪个部分发生失败 。 比如说';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = '所以除了一个普通的词之外 还有别的选择吗? 根据Open-AudIT API的标准,我们有几个操作器进行过滤. 可以在数值前置的运算符是';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = '所以你有一个问题提供 Open-AudIT 证书来发现您的设备。 我有一个答案 - 那就不要! 当然,我的意思是,发现是最好的事情 自从切面包。 你不需要提前知道 <i>您的网络中的内容</i>。 。 。 但你怎么能在没有提供资质的情况下从设备中提取数据?<br/><br/>对于计算机,一个容易的选择是将适当的审计脚本复制到目标机器上,并设定在时间表上执行. 详见维基文库. 机器会把数据传送到Open-AudIT上, 几乎就好像你在运行发现。 该设备只是按一个时间表运行审计脚本(再次,您可以读取审计脚本),作为您告诉的用户,并将输出发送到服务器. 根本不涉及任何全权证书。<br/><br/>现在我们有Windows的特工 实际安装的代理的好处是';

$GLOBALS["lang"]['socket'] = '套装';

$GLOBALS["lang"]['Socket'] = '套装';

$GLOBALS["lang"]['software'] = '软件';

$GLOBALS["lang"]['Software'] = '软件';

$GLOBALS["lang"]['Software Found Last 7 Days'] = '软件找到最后7天';

$GLOBALS["lang"]['Software Found Today'] = '今天找到软件';

$GLOBALS["lang"]['Software Found Yesterday'] = '昨天发现的软件';

$GLOBALS["lang"]['software_key'] = '软件密钥';

$GLOBALS["lang"]['Software Key'] = '软件密钥';

$GLOBALS["lang"]['Software License Reporting'] = '软件许可证报告';

$GLOBALS["lang"]['software_name'] = '软件名称';

$GLOBALS["lang"]['Software Name'] = '软件名称';

$GLOBALS["lang"]['Software Policies'] = '软件政策';

$GLOBALS["lang"]['software_revision'] = '软件修订版';

$GLOBALS["lang"]['Software Revision'] = '软件修订版';

$GLOBALS["lang"]['software_version'] = '软件版本';

$GLOBALS["lang"]['Software Version'] = '软件版本';

$GLOBALS["lang"]['Solaris'] = '索拉里斯语Name';

$GLOBALS["lang"]['Solomon Islands'] = '所罗门群岛';

$GLOBALS["lang"]['Somalia, Somali Republic'] = '索马里、索马里共和国';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = '一些收藏可以执行——查询等,见下文.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = '一些例子位于本页底部. 所有终点也都有一个要求的字段的最小列表. 现列于下文。';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = '我们的一些模板支持新移动到数据表,使用服务器侧处理. 这辆大米维利改进了载荷时间.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = '在试图绑定到 LDAP 服务器时还发生了其他一些错误. 它可以接触(即: <i>连接</i> 但出于其他原因,没有产生约束力。 检查 LDAP 服务器上的日志 。';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = '出了点大问题 无法读取 Open-AudIT <i>鸟类</i> 表单。';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = '出了点大问题 无法读取 Open-AudIT <i>角色</i> 表单。';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = '有时无剂的发现 不符合你的用法 也许你的电脑有严密的防火墙 也许当你的发现被安排的时候 他们不在网络上 也许他们被远程工人使用。 不管发生什么 特工可以帮忙 安装在目标机器上,它会 <i>报到</i> 将您的 Open-AudIT 服务器设置在时间表上并接受任务。 服务器要求的最常见任务是让代理机构自行审计并发送结果.';

$GLOBALS["lang"]['Sort'] = '排序';

$GLOBALS["lang"]['sound'] = '声音';

$GLOBALS["lang"]['Sound'] = '声音';

$GLOBALS["lang"]['source'] = '来源';

$GLOBALS["lang"]['Source'] = '来源';

$GLOBALS["lang"]['South Africa'] = '南非';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = '南乔治亚岛和南桑威奇群岛';

$GLOBALS["lang"]['Spain'] = '页:1';

$GLOBALS["lang"]['Spanish'] = '西班牙语';

$GLOBALS["lang"]['Specific to Azure.'] = '特指阿苏尔.';

$GLOBALS["lang"]['Specific to OKTA.'] = '具体到OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = '指定一个以逗号分隔的目标列表(无空格),以排除在扫描之外。 您通过的清单使用正常的 Nmap 语法, 因此可以包括主机名、 CIDR 网块、 octet 范围等 。';

$GLOBALS["lang"]['speed'] = '速度';

$GLOBALS["lang"]['Speed'] = '速度';

$GLOBALS["lang"]['speed_down_a'] = '减速 A级';

$GLOBALS["lang"]['Speed Down A'] = '减速 A级';

$GLOBALS["lang"]['speed_down_b'] = '减速 B';

$GLOBALS["lang"]['Speed Down B'] = '减速 B';

$GLOBALS["lang"]['speed_up_a'] = '加速 A';

$GLOBALS["lang"]['Speed Up A'] = '加速 A';

$GLOBALS["lang"]['speed_up_b'] = '加速 B';

$GLOBALS["lang"]['Speed Up B'] = '加速 B';

$GLOBALS["lang"]['sql'] = '单曲';

$GLOBALS["lang"]['Sql'] = '单曲';

$GLOBALS["lang"]['Sri Lanka'] = '斯里兰卡';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh 端口';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh 端口';

$GLOBALS["lang"]['ssh_timeout'] = 'sh 超时';

$GLOBALS["lang"]['Ssh Timeout'] = 'sh 超时';

$GLOBALS["lang"]['Stage 1: Documentation review'] = '第一阶段:文件审查';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = '第二阶段:执行情况和成效审查';

$GLOBALS["lang"]['Stand-Alone'] = '无人驾驶';

$GLOBALS["lang"]['Standard'] = '标准';

$GLOBALS["lang"]['standard_id'] = '标准标识';

$GLOBALS["lang"]['Standard ID'] = '标准标识';

$GLOBALS["lang"]['standards'] = '标准';

$GLOBALS["lang"]['Standards'] = '标准';

$GLOBALS["lang"]['standards_policies'] = '标准政策';

$GLOBALS["lang"]['Standards Policies'] = '标准政策';

$GLOBALS["lang"]['standards_results'] = '结果';

$GLOBALS["lang"]['Standards Results'] = '结果';

$GLOBALS["lang"]['start_date'] = '开始日期';

$GLOBALS["lang"]['Start Date'] = '开始日期';

$GLOBALS["lang"]['start_mode'] = '开始模式';

$GLOBALS["lang"]['Start Mode'] = '开始模式';

$GLOBALS["lang"]['Start a web browser and go to'] = '启动网页浏览器并前往';

$GLOBALS["lang"]['started_date'] = '开始日期';

$GLOBALS["lang"]['Started Date'] = '开始日期';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = '2018年6月开始 Google为Google地图平台API实施了现收现付定价模式. 以前,大多数使用中度的用户都可以免费使用Google Maps,这些地图嵌入了opCharts和Open-AudIT专业/企业. 谷歌的新政策在此概述,';

$GLOBALS["lang"]['Starts With'] = '开始于';

$GLOBALS["lang"]['state'] = '状态';

$GLOBALS["lang"]['State'] = '状态';

$GLOBALS["lang"]['Stats'] = '状态';

$GLOBALS["lang"]['status'] = '状态';

$GLOBALS["lang"]['Status'] = '状态';

$GLOBALS["lang"]['Storage'] = '储存';

$GLOBALS["lang"]['storage_count'] = '存储数';

$GLOBALS["lang"]['Storage Count'] = '存储数';

$GLOBALS["lang"]['Storage area network'] = '储域网';

$GLOBALS["lang"]['Storage-Area Network'] = '存储区域网络';

$GLOBALS["lang"]['string'] = '字符串';

$GLOBALS["lang"]['String'] = '字符串';

$GLOBALS["lang"]['sub_resource_id'] = '子资源标识';

$GLOBALS["lang"]['Sub Resource ID'] = '子资源标识';

$GLOBALS["lang"]['sub_type'] = '子类型';

$GLOBALS["lang"]['Sub Type'] = '子类型';

$GLOBALS["lang"]['subject_key_ident'] = '主题密钥标识符';

$GLOBALS["lang"]['Subject Key Ident'] = '主题密钥标识符';

$GLOBALS["lang"]['Submit'] = '提交';

$GLOBALS["lang"]['Submit Online'] = '在线提交';

$GLOBALS["lang"]['Submitted From'] = '提交日期';

$GLOBALS["lang"]['Subnet'] = '子网络';

$GLOBALS["lang"]['Subnet Discoveries'] = '子网发现';

$GLOBALS["lang"]['Subscription ID'] = '订阅编号';

$GLOBALS["lang"]['suburb'] = '郊区';

$GLOBALS["lang"]['Suburb'] = '郊区';

$GLOBALS["lang"]['Success'] = '成绩';

$GLOBALS["lang"]['Sudan'] = '苏丹';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo 密码';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo 密码( 可选)';

$GLOBALS["lang"]['suite'] = '套间';

$GLOBALS["lang"]['Suite'] = '套间';

$GLOBALS["lang"]['summaries'] = '摘要';

$GLOBALS["lang"]['Summaries'] = '摘要';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = '摘要是一个针对数据库的单一查询,其中有一个 <i>组合</i> 命令。 使用这个简单的方法,我们很容易为几乎所有属性创建一个摘要.<br/><br/>我们不再需要对每个项目分别提出报告 <i>类型</i> 一个装置。 我们现在简单总结一下, <i>设备。 类型</i> 并显示结果。 然后从列表中单击指定类型,并查看匹配设备。 在这种情况下,一份摘要(可能)取代78份报告(有78种设备)。<br/><br/>摘要与查询不同,因为摘要旨在按给定属性分组项目,然后提供 <i>点击通过</i> 链接到实际设备。 查询只是一份没有进一步链接的项目清单。 上文----摘要作为综合 <i>报告+子报告</i>,而查询只是单一报告。<br/><br/>摘要在Open-AudIT内部的其他资源有不同的收藏模板. 本模板按您的期望显示摘要, 并显示包含其他资源的按钮 。 本页面设计为Open-AudIT的HomePage.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = '摘要旨在按特定匹配列组合项目,然后提供单个设备的链接. 在以前的Open-AudIT版本中,这将是两个不同的项目:报告和子报告。 我们现在把这些内容整理成我们所说的摘要。';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = '摘要提供钻井报告能力。 简单,直观,强大.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = '摘要采用与查询相同的参数.';

$GLOBALS["lang"]['Summary'] = '目 录';

$GLOBALS["lang"]['Sunday'] = '礼拜';

$GLOBALS["lang"]['supplier'] = '供应商';

$GLOBALS["lang"]['Supplier'] = '供应商';

$GLOBALS["lang"]['Support'] = '支助';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = '支持类型为 <code>subnet</code>, (中文). <code>seed</code> 和 <code>active directory</code>。 。 。';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = '支持遵守法律和规章要求';

$GLOBALS["lang"]['Suriname'] = '苏里南';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = '监督审计: 维持核证的年度审计';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = '斯瓦尔巴德和扬马延群岛';

$GLOBALS["lang"]['Swaziland'] = '斯威士兰';

$GLOBALS["lang"]['Sweden'] = '瑞典';

$GLOBALS["lang"]['Swedish'] = '瑞典语';

$GLOBALS["lang"]['switch_device_id'] = '切换设备标识';

$GLOBALS["lang"]['Switch Device ID'] = '切换设备标识';

$GLOBALS["lang"]['switch_port'] = '切换端口';

$GLOBALS["lang"]['Switch Port'] = '切换端口';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = '瑞士、瑞士联邦';

$GLOBALS["lang"]['Symptom'] = '症状';

$GLOBALS["lang"]['Syrian Arab Republic'] = '阿拉伯叙利亚共和国';

$GLOBALS["lang"]['sysContact'] = '关联';

$GLOBALS["lang"]['SysContact'] = '关联';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr 软件';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr 软件';

$GLOBALS["lang"]['sysLocation'] = '循环';

$GLOBALS["lang"]['SysLocation'] = '循环';

$GLOBALS["lang"]['sysName'] = '赛斯Name';

$GLOBALS["lang"]['SysName'] = '赛斯Name';

$GLOBALS["lang"]['sysObjectID'] = '对象';

$GLOBALS["lang"]['SysObjectID'] = '对象';

$GLOBALS["lang"]['sysUpTime'] = '时节';

$GLOBALS["lang"]['SysUpTime'] = '时节';

$GLOBALS["lang"]['system_component'] = '系统组件';

$GLOBALS["lang"]['System Component'] = '系统组件';

$GLOBALS["lang"]['System-Area Network'] = '系统区域网络';

$GLOBALS["lang"]['TX Bitrate'] = 'TX 位速率';

$GLOBALS["lang"]['TX Freq'] = 'TX 弗莱克语Name';

$GLOBALS["lang"]['TX Level'] = 'TX 级别';

$GLOBALS["lang"]['TX Power'] = 'TX 电源';

$GLOBALS["lang"]['TX Profile'] = 'TX 简介';

$GLOBALS["lang"]['Table'] = '图表';

$GLOBALS["lang"]['tag'] = '标记';

$GLOBALS["lang"]['Tag'] = '标记';

$GLOBALS["lang"]['tag_1'] = '标记 1';

$GLOBALS["lang"]['Tag 1'] = '标记 1';

$GLOBALS["lang"]['tag_2'] = '标记 2';

$GLOBALS["lang"]['Tag 2'] = '标记 2';

$GLOBALS["lang"]['tag_3'] = '标记 3';

$GLOBALS["lang"]['Tag 3'] = '标记 3';

$GLOBALS["lang"]['Tagalog'] = '标记';

$GLOBALS["lang"]['tags'] = '标记';

$GLOBALS["lang"]['Tags'] = '标记';

$GLOBALS["lang"]['Tags :: '] = '* 标记 ';

$GLOBALS["lang"]['Taiwan'] = '台湾';

$GLOBALS["lang"]['Tajikistan'] = '塔吉克斯坦';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '酌情注意到每个项目的所有产出和行动。';

$GLOBALS["lang"]['Tanzania'] = '坦桑尼亚';

$GLOBALS["lang"]['Target Computer'] = '目标计算机';

$GLOBALS["lang"]['task'] = '任务';

$GLOBALS["lang"]['Task'] = '任务';

$GLOBALS["lang"]['tasks'] = '任务';

$GLOBALS["lang"]['Tasks'] = '任务';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = '任务可以是几种不同类型之一:基线、发现、报告、查询、摘要或收集器。';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp 端口';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp 端口';

$GLOBALS["lang"]['Technical Details'] = '技术细节';

$GLOBALS["lang"]['tenant'] = '租户';

$GLOBALS["lang"]['Tenant'] = '租户';

$GLOBALS["lang"]['Tenant ID'] = '租户身份证';

$GLOBALS["lang"]['Tennant ID'] = '端口标识';

$GLOBALS["lang"]['ternary'] = '三级';

$GLOBALS["lang"]['Ternary'] = '三级';

$GLOBALS["lang"]['Test 1'] = '测试 1';

$GLOBALS["lang"]['Test 2'] = '试验2';

$GLOBALS["lang"]['Test 3'] = '测试 3';

$GLOBALS["lang"]['Test Email'] = '测试电子邮件';

$GLOBALS["lang"]['test_minutes'] = '测试分钟';

$GLOBALS["lang"]['Test Minutes'] = '测试分钟';

$GLOBALS["lang"]['test_os'] = '测试 Os';

$GLOBALS["lang"]['Test Os'] = '测试 Os';

$GLOBALS["lang"]['test_subnet'] = '测试子网';

$GLOBALS["lang"]['Test Subnet'] = '测试子网';

$GLOBALS["lang"]['tests'] = '测试';

$GLOBALS["lang"]['Tests'] = '测试';

$GLOBALS["lang"]['Text'] = '文本';

$GLOBALS["lang"]['Thai'] = '泰国语Name';

$GLOBALS["lang"]['Thailand'] = '泰国';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = '谢谢你用最好的发现和盘点工具开始你的旅程';

$GLOBALS["lang"]['Thanks to'] = '感谢';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = '就这样! 您刚刚编辑了所需设备的属性 。';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = '那个 <i>角色</i> 端点允许您管理授予用户并应用于每个端点的一组权限(创建,读取,更新,删除).';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API使用饼干. 您可以通过向下面的 URL 发送 POST 请求 cookie, 包含用户名和密码属性和值 :';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = '从中获取子网列表的 Active Directory 域 。';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = '活动目录服务器从中获取子网列表 。';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = '应用程序端点允许您定义一个应用程序,然后可以将其连接到设备(或设备)中.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = '属性端点允许您在 Open-AudIT 中将定制值添加到不同的属性中,此时此特性在设备上的类,环境,状态和类型属性,位置和兽类的类型属性以及查询的菜单类. 如果您查看了其中一种类型的项目( 显示 Lkocation) , 您会注意到必须从下拉框中选择类型属性 。 这就是这些值被存储的地方。 因此,如果您想要为位置添加新类型,请使用属性特性添加该类型。';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = '可自动调试的度量衡抓住了问题的答案 <strong>攻击者能否将针对这种脆弱性的剥削事件自动化到多个目标?</strong> 根据杀戮链的1 -4步骤 这些步骤是侦察、武器化、交货和剥削(未界定,否,是)。';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE在CVE列表中被标记为无效或撤回. 它仍保留在NVD中,但被排除在默认搜索结果之外.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE已发布至CVE列表,并被纳入NVD数据集. 初摄入而已.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = '经过初步分析,CVE已经更新. NVD浓缩数据可能已经修订.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE识别码.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE正在积极丰富CVSS的分数,CWE分类,参考标记,以及CPE的适用性.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = '由于资源限制或其他原因,目前没有优先进行浓缩工作。';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE被NVD分析员排队进行浓缩. 还没有详细的元数据 。';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = '拥有此品之云. 链接到 <code>clouds.id</code>。 。 。';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = '设备种子发现类型是网络爬行的最新高效方法,使你有能力以你所需要的范围狭小或广泛的方式瞄准你的网络. 它很快,它工作,它是伟大的。';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = '发现扫描 下表中详细列出了我们所运送的选项。 如上,企业用户可以创建更多的这些或编辑已发运的项目.';

$GLOBALS["lang"]['The Elevated User query'] = '高级用户查询';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = '可执行文件功能扫描设备的磁盘,作为审计的一部分,并检查每个可执行文件是否为软件包管理器所知. 由于它使用软件包管理器,该特性仅适用于Linux目标设备,并且更进一步,只有 rpm 或 deb 基于分布. 任何Redhat或Debian基地应该有用';

$GLOBALS["lang"]['The FROM'] = '从';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = '专家组曾管理基线。 链接到 <code>groups.id</code>。 。 。';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU 设备表( 设备. 名称将显示) 的ID 在连接的这一端 。 链接到 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = '进口基准政策的ID。';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = '连接此端位置表( 位置. name 将显示) 的ID 。 链接到 <code>locations.id</code>。 。 。 A位置通常是 <code>FROM</code> 地点。';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = '连接此端位置表( 位置. name 将显示) 的ID 。 链接到 <code>locations.id</code>。 。 。 B位置通常是 <code>TO</code> 地点。';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = '相关设备的ID( 如果有的话) 。 链接到 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = '相关发现的ID. 链接到 <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = '相关类型项目的ID 。';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = '此 Orgs 父 Org 的标识 。 链接到 <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = '提供人提供的身份证。';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = '身份是从云号发现中找到的';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = '此收藏器的IP地址曾与服务器通信.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = '用于启动种子发现的设备的IP.';

$GLOBALS["lang"]['The IP of the external interface.'] = '外部接口的IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = '内部接口的IP.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001认证程序及其关键要素。';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = '提供这种链接的ISP或Telco.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = '米特雷的JSON唱片.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON唱片来自NVD的种子.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = '这个用户的LDAP OU(如果使用LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP 服务器无法连接 。 一点都没有 请从 Open-AudIT 服务器中选中它 。 检查正确的端口对 Open-AudIT 服务器开放 。 Open-AudIT 服务器的nmap将显示此信息 。 将您的 LDAP 服务器 IP 替换为$ip 。 尝试 :<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP 服务器类型无效 。 应该是 <i>活动目录</i> 或者说 <i>打开</i>。 。 。';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP服务器已连接,用户证书被接受绑定.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT 安装器将测试并在需要时从您的分发寄存器中安装 Open-AudITs 依赖性,包括设置 Nmap SetUID 。 这是由非根基用户检测SNMP(UDP 161)所需要的. 这在RedHat/CentOS和Debian/Ubuntu上得到了支持。 如果您需要手动安装 Nmap :<br/><br/>对于RedHat/CentOS do(注 - 如果您使用yum升级, 您需要重新应用此功能) <i>常规</i> 页:1';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = '包含此网络的位置 。 链接到 <code>locations.id</code>。 。 。';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD指定了基础状态.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = '国家标准和技术研究所是联邦技术机构。 它们推进官方技术,测量科学和标准.';

$GLOBALS["lang"]['The Network to Discover'] = '要发现的网络';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap 计时预设 。';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = '这套软件包应对照OS报告。 空为众生. 使用% 签名% 作为通配符 。 将按此顺序测试 os_ group, os_ family 和 os_ name 。';

$GLOBALS["lang"]['The Open-AudIT API'] = '开放的AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = '链接云的Open-AudIT id. 链接到 <code>clouds.id</code>。 。 。';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = '开放的奥德 IT服务器代码在此文件中被执行.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = '开放的奥德 IT服务器代码在此功能内被执行.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP生态系统提供多种工具,协助管理员和审计人员评估、衡量和执行安全基线,包括开放源码社区制定的各种硬化指南和配置基线,确保你们能够选择最适合你们组织需要的安全政策,而不论其规模大小。';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP项目是一套用于实施和执行本标准的开源工具,并在2014年被NIST授予SCAP 1.2认证.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = '拥有此项目的组织 。 链接到 <code>orgs.id</code>。 。 。';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '运行中相关发现的流程识别符 。';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = '这个装置顶部的RU正体';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Racks的功能用于管理和可视化您的机架使用,包括组织,位置,建筑,地板,房间和行.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP是用于以标准化方式表达和操纵安全数据的规格. SCAP统一使用若干个别规格,实现持续监测、脆弱性管理和安全政策遵守情况评价报告自动化';

$GLOBALS["lang"]['The SELECT'] = '光线';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = '查询中的 SELECT 部分应当使用全点标记,同时请求字段全点名称. IE - SELECT设备. id AS ‘devices.id\'. 每个字段都应该以这种方式选择,以便GUI侧属性过滤.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = '您的 SQL 中的 SELECT 部分必须包含完全合格的列并指定某些列 。';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP社区字符串.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 认证密码句 。';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 认证协议.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 隐私密码句 。';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 隐私协议.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 安全级别.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 安全名称.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 上下文引擎 ID (可选).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 上下文名称( 可选) 。';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL 无法包含 <strong>位于 @ filter 或</strong>。 。 。 但SQL不会被执行 <strong>@ filter 和 @</strong> 允许查询。';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT中使用的SQL查询需要使用 backtick - \' 字符和字段的标准单引号。 在大多数美国Windows键盘上,反键与tilde~一起位于键盘左上方. 在美国的Mac键盘上,反键位于SHIFT键旁边. 如以下例子所示,标准单引号仍然用于附加数值。';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL查询基本上分为三个部分.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudIT中的标准功能允许您在完成ISO 27001认证时提前完成问题审计员需要的问题.';

$GLOBALS["lang"]['The URL of the external system.'] = '外部系统的URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = '您的 Open-AudIT 的 URL 服务器, 此收藏器将报告( 没有跟踪斜线 ) 。';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '审计脚本应当向URL提交结果.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = '用户端点允许您管理Open-AudIT内的用户账户.';

$GLOBALS["lang"]['The WHERE'] = '何处';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = '您的SQL 的哪个部分 <em>必须</em> 包含';

$GLOBALS["lang"]['The Windows'] = '窗口';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows 日志可能表示如下';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = '账户必须有密码; WMI 不允许空白密码.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = '账户密码不得包含\"(双引号). 这是因为cript (和 wript) 无法解析包含双引号的参数值 。 他们只是被剥光。 逃跑是行不通的。 这是一种文字限制,与Open-AudIT无关.';

$GLOBALS["lang"]['The actual full name of this user.'] = '此用户的实际全名.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT服务器的地址提交页面.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = '管理员提供了成功用于绑定LDAP的证书.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = '管理员提供了与LDAP服务器绑定的证书,但是这些证书未被LDAP sevrer接受. 双重检查LDAP服务器的证书工作,然后在Open-AudIT LDAP服务器条目中检查(或重置).';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = '如果在服务器上安装了较新的版本(在升级Open-AudIT后说),代理和服务器也足够智能,可以自行更新代理.';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = '代理机应当下载审计脚本的新稿件,运行,并将结果报送服务器.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = '应用程序在此创建临时审计scrtips,将其复制到目标机器,然后删除.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '相关基线。 链接到 <code>baselines.id</code>。 。 。';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '相关发现(如有需要). 链接到 <code>discoveries.id</code>。 。 。';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = '测试的属性(来自 <code>devices</code> 页:1';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = '测试的属性( 必须从下面匹配外部字段名称) 。';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = '用于发现扫描选项的属性如下.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = '您自定义所依据的审计脚本 。';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = '审计脚本将使用文件[ ]阵列并检索文件细节.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = '审计脚本都接受调试参数. 你可以用这个来运行剧本,并更详细地看到问题是什么. 如果你搞不懂 那就是我们来这里的目的 打开一个支持箱,我们马上就能办到';

$GLOBALS["lang"]['The base path from which to search for Users.'] = '查找用户的基础路径 。';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = '以下步骤并非Open-AudIT的过错或独有,而且会影响 <strong>任何</strong> 使用远程 WMI 和/或 Windows 的发现应用程序。';

$GLOBALS["lang"]['The benchmark type.'] = '基准类型。';

$GLOBALS["lang"]['The building the rack is located in.'] = '车架所在的建筑.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '外部创建的设备的计算数量 。';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT中要创建的设备的计算数量.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = '客户端ID是Azure Active Directory应用程序的ID. 客户秘密是你给申请的关键';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = '收集器基本上是在Open-AudIT中全装 <i>收藏家</i> 模式。 收集器的设计是为了在其所在的网络上进行发现。 它不仅仅限于该网络,而且最好是在必要时每个子网都有一个收集器。 收集器由服务器按时间表驱动,并按规定在网络上运行发现.<br/>当站立时 单独模式 Collector 充当不依赖的服务器, 简单地将找到的所有设备转发到主服务器 。<br/><br/>一旦安装和设置,对收集器的控制将在服务器上进行(不以Stand Oleone模式).<br/><br/>采集器和服务器之间唯一需要的网络端口是80或443(从收集器到服务器建立的TCP连接). Open-AudIT数据库不是(也不能)在这些安装之间共享。<br/><br/>默认情况下,采集器(不是Stand Oone模式)将每5分钟向服务器请求任何发现任务(您可以在服务器上为新采集器配置此功能,使用配置项采集器_check_minutes),因此采集器的任何发现任务应排在0,5,10,15等分钟.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = '收集器基本上是在Open-AudIT中全装 <i>收藏家</i> 模式。 这种模式将减少可见的功能,以努力简化和集中应用. 它旨在收集本地网络和设备的信息,其中防火墙和/或网络转盘是服务器的问题.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '收集器内部IP在运行一个发现时使用.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '列名从外表. 应为:类,环境,状态,类型或菜单_类之一.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = '在发现时执行的目标设备或Open-AudIT服务器代码上执行的命令.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = '您集群的配置可以是: <code>active/active</code>, (中文). <code>active/passive</code>, (中文). <code>N+1</code>, (中文). <code>N+M</code>, (中文). <code>N-to-1</code>, (中文). <code>N-to-N</code>, (中文). <code>other</code> 或空白。';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '证书密码 如果证书是 SSH 密钥, 这是用于解锁密钥的密码, 是可选的 。';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = '用户提供的证书失败 。';

$GLOBALS["lang"]['The credentials username.'] = '证书用户名.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = '格式中的当前日期和时间 : 对,对 H:i:s. (中文(简体) ).';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = '以 Y- m- d 格式显示的当前日期 。';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = '云发现者现状.';

$GLOBALS["lang"]['The current status of the discovery.'] = '发现现状.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = '该用户默认显示的仪表板 。 链接到 <code>dashboards.id</code>。 。 。';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = '存储在数据库中的数据没有在翻译的应用程序中显示. 我们把数据留在原地 然而,没有任何东西可以阻止您这个用户将数据库中某个项目的名称(例如)更改为您的语言。';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = '您输入的数据将被用于 <code>LIKE</code> 条款,而不是(根据API) <code>equals</code> 条款。 另一个示例 - 如果您输入 <code>comput</code>它仍然会归还所有的电脑。 因为我们正在使用 <code>LIKE</code> 条款,它是对案例的不敏感。';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = '如果用户有数据库:通过菜单读取权限: Admin - > ,则可以在应用程序中找到数据库计划。 数据库 - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = '数据库版本和网页版本不一致.';

$GLOBALS["lang"]['The date of license expiration.'] = '执照失效日期.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = '该软件被制造商终止的日期。 通常被较新的版本所取代. 仍可提供维修。';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = '该软件不再得到更新的日期实际上完全停止。 维护工作中止。';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = '本项目更改或添加的日期(仅阅读)。 注 - 这是服务器发送的时间戳 。';

$GLOBALS["lang"]['The date/time when this result was created.'] = '创建此结果的日期/ 时间 。';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '执行这项任务的月份日(*每天)。';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = '每周执行这项任务的当天(*每天)。';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = '调试级别( 输出到命令快速窗口) 。 较低表示输出较少, 0 表示没有输出.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = '默认的发现扫描选项是UltraFast集.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = '此方法创建的任何用户都使用默认语言 。';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = '该设备必须响应Nmap ping,然后才被视为在线.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT内部的设备. 链接到 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['The direct link for the script is'] = '脚本的直接链接是';

$GLOBALS["lang"]['The email address of the reciever'] = '回信器的电子邮件地址';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = '来自FirstWave的企业二进制必须持有许可证。 请从 Open-AudIT 下载';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = '这一结果来自整个相关基线。';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = '被利用的脆弱性会影响到超出脆弱部分安全权限的资源。 这通常意味着跨越特权或信任边界(例如从容器逃到主机OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = '被利用的脆弱性只影响到与脆弱部分相同的安全当局内的资源。 换句话说,攻击者的行为不超出最初的信任界限。';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '外部引用的地点编号 。 通常以Cloud审计为居民.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = '与集成相关的字段作为JSON对象阵列存储在数据库中. 每个字段都有以下属性:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT首次检索此设备的细节.';

$GLOBALS["lang"]['The floor the rack is located on.'] = '架子位于地面上.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '外表为参考. 应该是设备、地点、兽群或查询之一。';

$GLOBALS["lang"]['The format of your data should be in the form'] = '您的数据格式应当为:';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '以电子邮件传送输出所使用的格式 。';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '完全合格的栏目,可编组。 注:当类型=流量时,这代表红色查询编号。';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = '外部系统返回的完全合格的名称 。 EG: 对于NMIS,我们使用配置。 角色 类型';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '完全合格表. 栏目. 多个可以提供,用逗号分隔(没有空格).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = '生成的 SQL 查询以测试此脆弱性 。 可以编辑此字段, 以便按要求更正查询 。';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = '基线所对应的一组装置。';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '提供集成设备列表的组. 链接到 <code>groups.id</code>。 。 。';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '执行这项任务的当天时间(*每个小时)。';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = '链接设备的ID. 链接到 <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = '数据库中的标识栏(整数)(只读).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = '这一基线的重要性(尚未使用)。';

$GLOBALS["lang"]['The integer of severity.'] = '严重程度的整数。';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = '内部值,按此格式重新编排 。';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth 方法的 ip 地址 。';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = '为用户翻译网页界面的语言.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '此项目的最后日期和时间被执行( 只读) 。';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT最后一次检索此设备的细节.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = '上一次执行这一基准。';

$GLOBALS["lang"]['The last time this integration was run.'] = '最后一次进行这种整合。';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = '许可端点允许您追踪设备上发现的许可数量 。';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = '连接的这一端由提供者指定给线路的行号.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = '车架所在位置. 链接到 <code>locations.id</code>。 。 。';

$GLOBALS["lang"]['The locations address.'] = '地点地址';

$GLOBALS["lang"]['The locations area.'] = '地点';

$GLOBALS["lang"]['The locations city.'] = '地点城市。';

$GLOBALS["lang"]['The locations country.'] = '地点国.';

$GLOBALS["lang"]['The locations district.'] = '地点区。';

$GLOBALS["lang"]['The locations latitude.'] = '位置纬度。';

$GLOBALS["lang"]['The locations level.'] = '地点级别。';

$GLOBALS["lang"]['The locations longitude.'] = '位置经纬度。';

$GLOBALS["lang"]['The locations phone.'] = '地点电话。';

$GLOBALS["lang"]['The locations postcode.'] = '地点邮编码。';

$GLOBALS["lang"]['The locations region.'] = '地点区域。';

$GLOBALS["lang"]['The locations room.'] = '地点的房间。';

$GLOBALS["lang"]['The locations state.'] = '地点州。';

$GLOBALS["lang"]['The locations suburb.'] = '地点在郊区';

$GLOBALS["lang"]['The locations suite.'] = '地点套房。';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = '设备匹配的逻辑包含在设备_ helper.php文件中,在 Linux 安装上可以在这里找到';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = '机器默认权限设置不会给 COM 服务器应用程序以本地激活权限';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '最大物理重量(以KGs计) 这个架子可以保持.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = '这个架子的最大总BTU被评为.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = '属性所需的最小属性是 :';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = '此任务执行时的分钟( * 每分钟) 。';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = '这一任务应当执行的年份的月份(*每月)。';

$GLOBALS["lang"]['The name given to this item.'] = '本项目的名称 。';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = '本项目的名称 。 理想的情况应该是独一无二的。';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = '给这个用户的名称( 用于登录) 。 理想的情况应该是独一无二的。';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = '相关云名称(如有需要).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = '软件包的名称,由Open-AudIT审计. 使用% 签名% 作为通配符 。';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = '最后更改或添加此项目的用户名称( 只读) 。';

$GLOBALS["lang"]['The name provided by the provider.'] = '供养者提供之名.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = '网易格式192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = '执行此发现的网络子网 。';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = '新代理运行了PowerShell版本的旧审计脚本,为VBScript的折旧做准备(是的,即将出现).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = '此设备占用的 RU 数量 。';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = '相关地点的数目。 链接到 <code>locations.cloud_id</code>。 。 。';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = '关联网络的数量. 链接到 <code>networks.cloud_id</code>。 。 。';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = '此云中已审计设备的数量 。 链接到 <code>devices.cloud_id</code> 和 <code>devices.serial</code>。 。 。';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave持有的临界严重弱点数量(不在您的数据库中).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = '这个发现发现的装置数量.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = '关联组中的设备数量 。';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '此云中具有运行状态的设备数量 。 链接到 <code>devices.cloud_id</code> 和 <code>devices.instance_state</code>。 。 。';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '此云中已停止状态的设备数量 。 链接到 <code>devices.cloud_id</code> 和 <code>devices.instance_state</code>。 。 。';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = '此云器数. 链接到 <code>devices.cloud_id</code>。 。 。';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = '此基准将执行设备的数量 。 来源 <code>benchmarks.devices</code>。 。 。';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = '限制此发现的装置数量 。';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave持有的高度脆弱性数量(不在您的数据库中).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave持有的低度弱点数量(不在数据库中).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave持有的中等严重性弱点数量(不在数据库中)。';

$GLOBALS["lang"]['The number of purchased licenses.'] = '购买许可证的数量。';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = '尝试与目标IP通信的秒数.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'FirstWave(不在数据库中)持有的不严重弱点数量。';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = '偏移是您想要返回数据的设备数。';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = '唯一需要的许可/政策名称(在我们测试中)是';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = '选第二栏. 注:当类型=流量时,这代表黄色查询id。';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = '选第三栏. 注:当类型=流量时,这代表绿色查询编号。';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = '信息检索顺序为snmp,ssh,wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = '这个装置的方向.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = '密码(如果不使用运行脚本的用户).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'dn_count 属性的密码 。';

$GLOBALS["lang"]['The password used to access the external system.'] = '用于访问外部系统的密码.';

$GLOBALS["lang"]['The path to the file or directory.'] = '文件或目录的路径 。';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = '文件或目录的路径 。 Directories的结尾应该有一个后遗症。';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = '机架的物理深度(在CMS中).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = '机架的物理高度(在CMS).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = '目前机架的物理重量(KGs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = '架空时的物理重量(KGs).';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = '机架的物理宽度(在CMS中).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = '这个架子是其中的一部分';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = '这个架子的电路';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = '用于此部件的主数据库表 。';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = '授权的主要方法(用户可以做什么)现在是基于用户角色. 角色被定义为管理员,org_admin,记者,以及默认的用户. 每个角色对每个端点都有一组权限(创建,读,更新,删除). 运出的标准角色应占使用案例的99.9%。 在Open-AudIT Entertainment中启用了定义额外角色和编辑现有角色的能力.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = '此队列项的进程标识符 。';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = '最后用于获取设备细节的过程';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = '本许可证页的目的是列出Firstwave商业产品包括基于开放源码的产品所包含的产品和许可证。 Open-AudIT根据AGPLv3从第一波或以后根据商业条件获得企业和专业功能许可证。 从FirstWave下载时,Open-AudIT可能包括以下图书馆和项目,这些图书馆和项目提供未经修改,并按所示许可:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = '提供集成设备列表的查询. 链接到 <code>queries.id</code>。 。 。';

$GLOBALS["lang"]['The rack asset number.'] = '架子资产号.';

$GLOBALS["lang"]['The rack asset tag.'] = '机架资产标签。';

$GLOBALS["lang"]['The rack bar code.'] = '架子条码.';

$GLOBALS["lang"]['The rack model.'] = '车架模型.';

$GLOBALS["lang"]['The rack serial.'] = '架子连载.';

$GLOBALS["lang"]['The rack series.'] = '架子丛书.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = '此设备的架子位于其中. 链接到 <code>racks.id</code>。 。 。';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = '处理和解决已查明的安全弱点的建议进程。 这通常涉及采用补丁、更新或其他措施,以消除脆弱性造成的风险。';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = '您目录的正则域名标记 。 爱格 - <code>open-audit.lan</code>。 。 。';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = '请求的属性应列在逗号分隔列表中 。 属性应完全合格 - ie, system.hostname(不仅仅是主机名).';

$GLOBALS["lang"]['The result of the command.'] = '命令的结果。';

$GLOBALS["lang"]['The room the rack is located in.'] = '车架所在的房间';

$GLOBALS["lang"]['The row the rack is located in.'] = '架子所在的行.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = '在 LDAP 服务器上搜索组失败 。 检查 LDAP 服务器日志 。 您是否在 LDAP 服务器上创建了这些组( 用于角色和类) , 并为它们指派了 LDAP 用户 ?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = '与您的 AWS EC2 API 密钥结合使用的密钥 。';

$GLOBALS["lang"]['The software end-of-life date.'] = '软件报废日期.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = '软件报废使用年限.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '指定数据库表格中的特定数据库列。';

$GLOBALS["lang"]['The specific database table.'] = '具体数据库表.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Nmap 标准计时选项 。 以前设定为T4(侵略性).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Nmap 标准计时选项 。 我们通常使用 -T4(Agressive),因为这被推荐为像样的宽带或醚网连接.';

$GLOBALS["lang"]['The status of this integration'] = '这种一体化的现状';

$GLOBALS["lang"]['The status of this queued item.'] = '此队列项的状态 。';

$GLOBALS["lang"]['The steps below outline the process.'] = '以下步骤概述了这一进程。';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = '目标IP 此日志条目引用( 如果有) 。';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = '目标计算机 审计。\\\\\"表示本地主机。';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = '每个结果行生成的链接模板.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = '直线图中图底的文字(仅限).';

$GLOBALS["lang"]['The text that is displayed.'] = '显示的文本 。';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = '时间戳之后,这项任务应该进行。 例如,在2017年6月1日早上10点后执行一个任务,设定为 <code>2017-06-01 09:59:00</code>。 。 。 此值应为零加法( e, 09, 不是 9) 。 此值默认为 <code>2000-01-01 00:00:00</code> 这意味着默认情况下,一个预定任务将在下一个预定执行时间运行.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '根据Nmap通常使用的前10,100或1000(或无)TCP端口.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '根据Nmap通常使用的前10,100或1000(或无)UDP端口.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'BTU的总输出通过这个架.';

$GLOBALS["lang"]['The type of device.'] = '器类.';

$GLOBALS["lang"]['The type of organisation.'] = '组织的类型。';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = '机架类型(计算,功率,网络等).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = '要执行的任务类型 。 其中:基线,基准,云发现,发现,整合,报告,查询.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = '集成类型(通常以外部系统命名).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = '未过滤状态意味着一个端口可以访问,但Nmap无法确定它是开放的还是关闭的. 只有用于映射防火墙规则的ACK扫描将端口归类为此状态. 以窗口扫描,SYN扫描,或FIN扫描等其他扫描类型扫描未过滤端口,可能有助于解决端口是否打开.';

$GLOBALS["lang"]['The unique identifier of this server.'] = '此服务器的唯一标识符 。';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = '此收藏器使用的用户账户 。 链接到 <code>users.id</code>。 。 。';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP中的用户必须是要求的角色和兽类开放-AudIT组的直接成员. 一个属于另一个属于Open-AudIT集团的集团的成员将不会工作.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = '用户在LDAP中,他们的证书是有效的,但并不在Orgs的任何Open-AudIT LDAP组中.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = '用户在LDAP中,其身份证明有效,但不属于任何Open-AudIT LDAP角色组合.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = '用户在LDAP中,其证书有效,但不属于任何需要的Open-AudIT LDAP组.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = '用户位于匹配此 Org 的 LDAP 组中.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = '用户位于匹配此角色的LDAP组中.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = '用户不在匹配此 Org 的 LDAP 组中 。';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = '用户不在匹配此角色的 LDAP 组中 。';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = '在LDAP中指定的用户存在,但Open-AudIT没有配置为角色消耗LDAP组,用户在Open-AudIT中并不存在. 选择 <i>对角色使用 LDAP</i> 在 Open-AudIT LDAP 上打开 服务器屏幕或在 Open-AudIT 内创建此用户,并指定角色和orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = '用户名(如果不使用运行脚本的用户).';

$GLOBALS["lang"]['The username used to access the external system.'] = '用于访问外部系统的用户名.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = '用户细节没有从 LDAP 中检索到. 检查 LDAP 服务器日志 。';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = '用户详情从LDAP中检索。';

$GLOBALS["lang"]['The users email address.'] = '用户电子邮件地址 。';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '这里正常的营业时间';

$GLOBALS["lang"]['The value assigned to the item.'] = '分配给项目的值 。';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = '此特定项目的存储值 。';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPE条目中的供应商名称。';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = '卖主从CPE中取走.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = '安装 Open-AudIT 的主机上的网络目录( 需要后继斜线) 。';

$GLOBALS["lang"]['The widget at position '] = '位置上的部件 ';

$GLOBALS["lang"]['The width of this device.'] = '此设备的宽度 。';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = '他们的骨髓和后代';

$GLOBALS["lang"]['Their OrgIDs only'] = '仅限其 OrgID';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = '他们的骨髓、长辈和后代';

$GLOBALS["lang"]['Then'] = '礛';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = '然后在 Open-AudIT 中通过菜单创建新的 Auth 方法 - > 管理员 - > 认证方法 - > 创建 Auth 。 提供名称并设置 <i>类型</i> 给Entra。';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = '然后可以使用Open-AudIT(不支持)直接接收客户端的审计数据. 发现 <strong>将失败</strong>,但是如果你没有使用发现(Open-AudIT的主要功能是围绕设计的),仍然可以获得设备数据. 您需要使用 cron 直接运行客户端的审计脚本, 或使用 Windows Agent 特性( 只使用 Enterprise) 。';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = '有一个按钮要导出到 JSON 。 这将只显示属性的设备表 。 要将设备导出为所有相关组件表格,请查看设备细节,然后添加';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = '绝对不需要手动编辑每个单个设备.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = '如果您正在 Linux 服务器上运行 Open-AudIT , 则无需做任何事情 。<br/><br/>然而,Windows客户端很好,不需要特殊动作. . 要启用这个功能,审计脚本必须在目标Windows系统上本地运行. 它不能远程运行,因为我们在运行一个Windows机上的审计脚本时会和WMI通话一样,同时瞄准第二个Windows机. 要做到这一点,我们需要将审计脚本复制到目标Windows机器,然后运行. 不幸的是,Apache运行在下面的服务账户是本地系统账户。 该账户无法访问远程(基于网络)资源。 要解决这个问题,服务必须在另一个账户下进行。 仅使用本地管理员账户是很容易的, 但是只要您有所需的权限, 您就可以尝试您喜欢的任何账户 。 当地系统账户与当地署长账户一样有当地访问权。';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = '这些只是例子。 您可能需要调整这些属性以适应您特定的 LDAP 。';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = '这些参数只允许您审计对您有用和相关的内容,节省处理时间,并允许您有序地发现您的网络.';

$GLOBALS["lang"]['Thing'] = '东西';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = '想想mail.domain1.com和mail.domain2.com - 同名主机.';

$GLOBALS["lang"]['Third'] = '第三届';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = '如果 CVE 存在, 它将被检索并覆盖它 。';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = '此 Org 没有指定 AD 组 。 检查Open-AudIT内部的角色细节.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = '此 Org 没有指定 AD 组 。 检查Open-AudIT内部的角色细节. <span class=\'\"confluence-link\"\'>您是否在 LDAP 服务器上创建了这些组( for orgs) , 并为它们指派了 LDAP 用户 ?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = '此角色没有指定 AD 组 。 检查Open-AudIT内部的角色细节.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = '此属性作为 JSON 对象存储 。 它是所有藏品的列表,包含藏品名称以及 <code>c</code>, (中文). <code>r</code>, (中文). <code>u</code> 和,或 <code>d</code> 表示创建、读取、更新和删除。 这些是用户可以对来自该特定收藏的物品采取的行动。';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = '这可以是 varchar(文本字段),列表(可以选择的数值列表)或日期.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = '这个代码依赖于... ...';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = '这个收藏家具有普遍独特的识别特征。';

$GLOBALS["lang"]['This column is required by'] = '本栏由';

$GLOBALS["lang"]['This column is required by '] = '本栏由 ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = '这种描述是自动流行的,最好还是保持原样。';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = '此端点允许您添加网络基础设施中的连接, 它允许您自定义各种属性, 指定此连接的位置和所属组织 。';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = '此错误表明SMB1已被禁用或从目标机中移除. 这对现代版本的Windows来说是正常的,只有在SMB2连接尝试失败时才会看到这个消息. 如果 SMB2 连接失败,我们尝试 SMB1 以允许在旧版本的 Windows 上发现. 如果目标窗口机 <i>这是</i> 运行旧版本的 Windows, 您的证书可能已经失败 。 这样的话,你看';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = '此错误表明没有足够的虚拟内存或 page 文件配额来完成指定的操作. 你以后再试一次';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = '这一错误表明所使用的证书要么不正确,要么不存在,要么没有足够的权限远程登录目标Windows机. 请检查date=中的日期值 (帮助)';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = '此示例创建了一个列表, 列出所有标记为';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = '此示例创建了NMAP扫描所发现的设备和开放端口,协议以及程序列表.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = '此示例创建了函数或描述字段为空白或购买日期为默认的设备列表 。';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = '此示例查询可获取3岁以上设备列表 。 查询今天使用';

$GLOBALS["lang"]['This example uses'] = '此示例使用';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = '这一特点需要专业或企业许可证。';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = '这个特性,因为它比通常更有能力影响目标设备,因此必须手动启用. 为启用此特性, 将配置项目特性_ 可执行项更改为 <i>对</i>。 。 。';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = '此文件告诉Linux对应用程序进行投票,以确定是否有任何应该运行的预定任务.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = '这个表单提供了一种简单的开始在您的网络上发现设备的方法. 对于更多(很多)详细选项,您可以单独创建';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = '这也是PAExec的工作方式.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = '这是一个可选配置选项, 通过设置全局配置中的发现_ use_ org_ id_ match来启用 。';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = '这一般是主列,除非另有配置. 注:当类型=流量时,这是次要文本。';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = '这可能是由于 MySQL 时间关闭。 MySQL一般使用主机设备时间. 你可以看看这个';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = '这是用户可以确定的,因此,尽管它应该具有全球的独特性,但肯定不能保证这一点。';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = '这是我们存储设备附件的目录 。';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = '这是在排除Open-AudIT问题时作为第一个调用点. 您可以点击右上角的导出按钮以获取此文件为JSON文件( 将添加到支持票/ 电子邮件中 ) 。';

$GLOBALS["lang"]['This issue is under investigation.'] = '这个问题正在调查中。';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = '本项目必须匹配所选属性的值或包含要使用的查询的ID.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = '此项目必须匹配所选属性的值 。';

$GLOBALS["lang"]['This license expires on'] = '此许可证过期于';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = '这种安全许可可以使用构成部分服务行政工具修改。';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = '由于调试模式会在磁盘上生成大量日志,因此在排除故障后应该对此进行评论,而没有任何好处.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = '这应该具有全球的独特性,但我看到一些情况并非如此。';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = '这应当设定为1或架高.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = '这应该是数据库中完全合格的字段名称。 目前该系统的栏、字段和证书表都得到支持。 EG: system.nmis_role. (英语).';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = '当Nmap无法确定一个端口是关闭还是过滤时使用此状态. 它仅用于IPID闲置扫描.';

$GLOBALS["lang"]['This will auto-populate.'] = '这会自动流行。';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '这将大大减缓发现扫描的速度。';

$GLOBALS["lang"]['This will delete the current rows in the'] = '这将删除当前在';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = '这将会永久地解除这个执照。';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = '这将显示批量编辑表 。 您在此表单上设置的任何属性都将适用于所有选定的设备。 可以同时设置多个属性.';

$GLOBALS["lang"]['Thursday'] = '星期四';

$GLOBALS["lang"]['time_caption'] = '时间说明';

$GLOBALS["lang"]['Time Caption'] = '时间说明';

$GLOBALS["lang"]['time_daylight'] = '时间日光';

$GLOBALS["lang"]['Time Daylight'] = '时间日光';

$GLOBALS["lang"]['Time to Execute'] = '执行时间';

$GLOBALS["lang"]['timeout'] = '超时';

$GLOBALS["lang"]['Timeout'] = '超时';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = '每个目标超时(秒)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = '暂停每个目标。 等待X秒 目标响应。';

$GLOBALS["lang"]['Timesatamp'] = '时间标签';

$GLOBALS["lang"]['Timestamp'] = '时间戳';

$GLOBALS["lang"]['timing'] = '时间安排';

$GLOBALS["lang"]['Timing'] = '时间安排';

$GLOBALS["lang"]['Timor-Leste'] = '东帝汶';

$GLOBALS["lang"]['Title'] = '标题';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = '到一个名为.env的新文件(在同一目录中). 现在编辑新文件,并取消对下面(第17行)行的评论(删除#)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = '要实际执行查询, 请附加一个/ 执行, 从而 / open- audit/ index.php/ queries/{$id}/ 执行 。';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = '要审计一台机器,必须具备证书和管理员级别访问权限.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = '要对活动目录域上的远程机器进行审计,您提供的用户(如果没有提供,则运行脚本的用户)必须是目标机器管理员组(或分组)的成员.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = '要审计一个不在域内的远程机器,您必须使用管理员账户(不是 <i>a 一个</i> 管理账户, <i>联合国</i> 在目标个人计算机上。 1号和2号';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = '要审计本地主机,则不考虑所提供的任何证书,而使用运行脚本的用户的细节进行连接。';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = '为了比较软件,我们检查名称和版本。 由于版本编号并非全部在格式上标准化,当我们收到审计结果时,我们创建了一个新的属性,称为软件_插件,与每个软件包的其他软件细节一起存储在数据库中. 因此,使用软件政策的基线在运行于一个未经1.10(至少)审计的设备时不会起作用。 软件政策可以测试: <i>等于</i>, (中文). <i>大于</i> 或者说 <i>等于或大于</i>。 。 。';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = '要创建新条目,请单击右上角的“创建”按钮。';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = '要创建资源,您应该 POST 所需的数据 。';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = '为使远程机器(Vista或以上)能够由管理员组中除实际管理员账户外的账户审计某个领域以外的远程机器,见下文关于UAC的一节。';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = '要启用此选项, 请通过菜单创建新 Auth项 - > 管理员 - > Auth - > 创建 Auth 方法 。';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = '要执行 Windows Powershell 脚本,请作为管理员打开命令提示并使用以下命令';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = '执行审计脚本, 打开终端并使用以下命令';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = '要通过属性值过滤,请使用属性名称. 在数值之前的运算符是';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = '要在 Windows 上安装 Nmap, 请访问 Nmap 页面 :';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = '为了做出改变,只需遵循下面的步骤.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = '取回房客身份证 打开 Azure 门户网站点击 Azure Active Directory, 属性和租户ID 显示为您的 Directory ID - 不要怪我名字不匹配, 这就是微软如何滚动的.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = '要获取您的密钥, 请登录到 AWS 控制台, 然后选择您的用户名, 然后选择 My Security Census 。';

$GLOBALS["lang"]['To return a specific component item.'] = '返回特定组件项目。';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = '返回特定设备的压缩类型的全部项目。';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = '为组件类型返回所有项目。 如果你想要所有软件的话';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = '要逆向排序,请插入负数,从而';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = '在目标Windows PC上运行测试脚本';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = '要选择要集成的设备,我们使用nmis_manage=y,但您可能喜欢(例如)类型=路由器. 如果您喜欢更复杂的东西,也可以使用组合或查询.';

$GLOBALS["lang"]['To sort by a database column, use'] = '要按数据库列排序,请使用';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = '要使用此 Entertainment 特性, 您首先需要像往常一样在 Open- AudIT 中创建您的用户 。 不需要指定密码 。 您必须指定角色和兽类 。 Open-AudIT 中的用户名应当与 Entra 匹配 <i>首选用户名</i> 属性。 不需要全名或电子邮件,这些地址将从恩特拉寄来。 如果你不认识你的用户 <i>首选用户名</i>别害怕 您可以在 Open-AudIT 中创建新的 Auth 方法, 在 Entra 中创建企业应用程序, 当用户尝试在 Open-AudIT 上签名时, 请检查日志, 您将会看到它们 <i>首选用户名</i> 登录你的节奏。';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = '要使用此 Entertainment 特性, 您首先需要像往常一样在 Open- AudIT 中创建您的用户 。 不需要指定密码 。 您必须指定角色和兽类 。 Open-AudIT 中的用户名应匹配 OKTA <i>名称</i> 属性。 不需要全名或电子邮件,这些地址将来自OKTA。 如果你不认识你的用户 <i>名称<i>别害怕 您可以在 Open-AudIT 中创建新的 Auth Menthod 和 在 OKTA 中创建应用程序, 当用户尝试在 Open-AudIT 上签名时, 请检查日志并查看其内容 <i>名称<i> 登录你的节奏。<br/><p>然后在 Open-AudIT 中通过菜单创建新的 Auth 方法 - > 管理员 - > 认证方法 - > 创建 Auth 。 提供名称并设置 <i>类型</i> 去奥克塔</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = '要使用此特性, 您必须启用配置项目匹配_mac( 对于 AWS) 和匹配_ hostname( 对于 Azure) 。 首次执行云的发现时会自动完成此任务. 关于Open-AudITs匹配规则的更多信息请参见: 匹配设备';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = '要查看查询的细节,请查看/open-audit/index的标准URL结构. 应使用php/queries/{$id}。';

$GLOBALS["lang"]['Togo'] = '多哥';

$GLOBALS["lang"]['Tokelau'] = '托克劳';

$GLOBALS["lang"]['Tonga'] = '汤加';

$GLOBALS["lang"]['toolbar_style'] = '工具栏样式';

$GLOBALS["lang"]['Toolbar Style'] = '工具栏样式';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = '顶端 Nmap TCP 端口';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP港口. 前10,100,1000个端口可以按照Nmaps"顶端口"选项扫描.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = '顶端 Nmap UDP 端口';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP 端口. 前10,100,1000个端口可以按照Nmaps"顶端口"选项扫描.';

$GLOBALS["lang"]['Traditional Chinese'] = '传统汉语';

$GLOBALS["lang"]['Traffic Light'] = '交通灯';

$GLOBALS["lang"]['Trinidad and Tobago'] = '特立尼达和多巴哥';

$GLOBALS["lang"]['Troubleshooting'] = '解决问题';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = '清除 LDAP 登录中的问题';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = '尝试打开AudIT 企业号,我们没有时间限制。 企业号的所有特征. 仅限20个装置.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = '用Open-AudIT Entertainment的FREE 100设备许可证尝试所有最新的特性. 请阅读 ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = '尝试使用 LDAP 用户登录 。 我们假设这将会失败(不然,你为什么还读这个?) 接下来, 请从上面的 r 文件中评论此行 。';

$GLOBALS["lang"]['Tuesday'] = '星期二';

$GLOBALS["lang"]['Tunisia'] = '突尼斯';

$GLOBALS["lang"]['Turkey'] = '土耳其';

$GLOBALS["lang"]['Turkish'] = '土耳其语Name';

$GLOBALS["lang"]['Turkmenistan'] = '土库曼斯坦';

$GLOBALS["lang"]['Turks and Caicos Islands'] = '特克斯和凯科斯群岛';

$GLOBALS["lang"]['Tuvalu'] = '图瓦卢';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx 比特率';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx 比特率';

$GLOBALS["lang"]['tx_freq'] = 'Tx 弗莱克语Name';

$GLOBALS["lang"]['Tx Freq'] = 'Tx 弗莱克语Name';

$GLOBALS["lang"]['tx_level'] = 'Tx 级别';

$GLOBALS["lang"]['Tx Level'] = 'Tx 级别';

$GLOBALS["lang"]['tx_power'] = 'Tx 电源';

$GLOBALS["lang"]['Tx Power'] = 'Tx 电源';

$GLOBALS["lang"]['tx_profile'] = 'Tx 简介';

$GLOBALS["lang"]['Tx Profile'] = 'Tx 简介';

$GLOBALS["lang"]['type'] = '类型';

$GLOBALS["lang"]['Type'] = '类型';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = '类型: 可以是 varchar(一个文本字段) 也可以是列表(一个可以选择的数值列表).';

$GLOBALS["lang"]['Types of Networks'] = '网络类型';

$GLOBALS["lang"]['URL'] = '網址';

$GLOBALS["lang"]['uuid'] = '用户';

$GLOBALS["lang"]['UUID'] = '用户';

$GLOBALS["lang"]['udp_ports'] = 'Udp 端口';

$GLOBALS["lang"]['Udp Ports'] = 'Udp 端口';

$GLOBALS["lang"]['Uganda'] = '乌干达';

$GLOBALS["lang"]['Ukraine'] = '乌克兰';

$GLOBALS["lang"]['Ukrainian'] = '乌克兰语Name';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = '第一阶段审计(文件审查)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = '第二阶段审计(执行情况审查)';

$GLOBALS["lang"]['Undergoing Analysis'] = '正在进行中的分析';

$GLOBALS["lang"]['Unfiltered'] = '未过滤';

$GLOBALS["lang"]['uninstall'] = '卸载';

$GLOBALS["lang"]['Uninstall'] = '卸载';

$GLOBALS["lang"]['Uninstall the Agent'] = '解开代理';

$GLOBALS["lang"]['United Arab Emirates'] = '阿拉伯联合酋长国';

$GLOBALS["lang"]['United Kingdom'] = '联合王国';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = '美国小外岛';

$GLOBALS["lang"]['United States Virgin Islands'] = '美属维尔京群岛';

$GLOBALS["lang"]['United States of America'] = '美利坚合众国';

$GLOBALS["lang"]['Unknown'] = '未知';

$GLOBALS["lang"]['unlock_pin'] = '解锁键';

$GLOBALS["lang"]['Unlock Pin'] = '解锁键';

$GLOBALS["lang"]['Unscheduled'] = '未排定';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = '未使用,为5.2.0。';

$GLOBALS["lang"]['Unused.'] = '无用.';

$GLOBALS["lang"]['Update'] = '更新';

$GLOBALS["lang"]['update_external_count'] = '更新外部计数';

$GLOBALS["lang"]['Update External Count'] = '更新外部计数';

$GLOBALS["lang"]['update_external_from_internal'] = '从内部更新外部';

$GLOBALS["lang"]['Update External From Internal'] = '从内部更新外部';

$GLOBALS["lang"]['update_internal_count'] = '更新内部计数';

$GLOBALS["lang"]['Update Internal Count'] = '更新内部计数';

$GLOBALS["lang"]['update_internal_from_external'] = '从外部更新内部';

$GLOBALS["lang"]['Update Internal From External'] = '从外部更新内部';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = '从 Open-AudIT 更新 NSIS 设备';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = '更新 Open-AudIT 设备从 ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = '更新 Open-AudIT NMIS 设备';

$GLOBALS["lang"]['Update Vulnerabilities'] = '更新脆弱性';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = '更新 {collection} 条目的属性 。';

$GLOBALS["lang"]['Update attributes'] = '更新属性';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '每次发现被执行时都会更新,检测到IP响应.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = '每次发现都用Nmap扫描过的IP执行更新.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '每次发现时都会更新 我们用能够审计的设备执行';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = '每次发现被执行时都会更新, 设备我们能够查询 。';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '每次发现执行后都会更新.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '每次发现被执行时都会更新.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '每次发现完成后都会更新';

$GLOBALS["lang"]['Updating'] = '更新';

$GLOBALS["lang"]['Upgrade'] = '升级';

$GLOBALS["lang"]['Upload an audit result file'] = '上传审计结果文件';

$GLOBALS["lang"]['Upper Case'] = '大写';

$GLOBALS["lang"]['uptime'] = '时间';

$GLOBALS["lang"]['Uptime'] = '时间';

$GLOBALS["lang"]['Urdu'] = '乌尔都语';

$GLOBALS["lang"]['url'] = '乌尔尔';

$GLOBALS["lang"]['Url'] = '乌尔尔';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = '乌拉圭,东共和国';

$GLOBALS["lang"]['usb'] = '用户b';

$GLOBALS["lang"]['Usb'] = '用户b';

$GLOBALS["lang"]['use'] = '使用';

$GLOBALS["lang"]['Use'] = '使用';

$GLOBALS["lang"]['use_authentication'] = '使用认证';

$GLOBALS["lang"]['Use Authentication'] = '使用认证';

$GLOBALS["lang"]['use_authorisation'] = '使用授权';

$GLOBALS["lang"]['Use Authorisation'] = '使用授权';

$GLOBALS["lang"]['Use Proxy'] = '使用代理服务器';

$GLOBALS["lang"]['Use SNMP'] = '使用 SNMP';

$GLOBALS["lang"]['Use SSH'] = '使用 SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = '使用安全( LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = '使用服务版本检测';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = '使用服务版本检测. 当检测到一个端口为打开时, 如果设置为 <i>尔</i>,Nmap将查询目标设备,试图确定在这个端口运行的服务版本.<br/>这在识别非机密设备时可能有用. 这以前没有使用。';

$GLOBALS["lang"]['Use WMI'] = '使用 WMI 软件';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = '使用一个 <i>登录方法</i> OIDC - OpenID 连接和一个 <i>应用程序类型</i> 网络应用程序。 单击 <i>ưμ㼯A</i>。 。 。';

$GLOBALS["lang"]['Use for Authentication'] = '用于认证';

$GLOBALS["lang"]['Use for Roles'] = '用于角色';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = '显示时使用标准安装选项并单击 <i>我同意这一点。</i>, (中文). <i>ưμ㼯A</i> 和 <i>安装</i> 要安装 Nmap 按钮。';

$GLOBALS["lang"]['used'] = '已使用';

$GLOBALS["lang"]['Used'] = '已使用';

$GLOBALS["lang"]['used_count'] = '已使用的计数';

$GLOBALS["lang"]['Used Count'] = '已使用的计数';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = '仅由OpenLDAP使用.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = '发现单个设备时内部使用.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = '发现单个设备时内部使用. 链接到 <code>devices.id</code>。 。 。';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = '当 LDAP 服务器被配置以填充用户细节时使用 - 这包括他们可以访问的 Orgs 。 如果用户属于此 LDAP 组, 它们会被指定为此 org 。';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = '当 LDAP 服务器被配置以添加用户细节时使用 - 这包括他们被指派的角色 。 如果一个用户在这个LDAP组中,他们就被分配这个角色.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = '搜索 OpenLDAP 时用于匹配用户 uid 组成员 。 默认 <code>memberUid</code>。 。 。 仅由OpenLDAP使用.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = '用于整合和第一Wave监测应用程序。';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = '用于整合和第一Wave监测应用程序。 如果通过发现检测到工作 SNMP 则设定为 Y 。';

$GLOBALS["lang"]['user'] = '用户';

$GLOBALS["lang"]['User'] = '用户';

$GLOBALS["lang"]['User DN'] = '用户 DN';

$GLOBALS["lang"]['user_group'] = '用户组';

$GLOBALS["lang"]['User Group'] = '用户组';

$GLOBALS["lang"]['user_id'] = '用户代号';

$GLOBALS["lang"]['User ID'] = '用户代号';

$GLOBALS["lang"]['user_interaction'] = '用户交互';

$GLOBALS["lang"]['User Interaction'] = '用户交互';

$GLOBALS["lang"]['User Membership Attribute'] = '用户成员属性';

$GLOBALS["lang"]['user_name'] = '用户名';

$GLOBALS["lang"]['User Name'] = '用户名';

$GLOBALS["lang"]['User Policies'] = '用户政策';

$GLOBALS["lang"]['Username'] = '用户名';

$GLOBALS["lang"]['username'] = '用户名';

$GLOBALS["lang"]['users'] = '用户';

$GLOBALS["lang"]['Users'] = '用户';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = '用户的工作类似于Netstat Ports. 如果用户有匹配的名称,状态和密码细节(可更改,到期,需要),则政策通过.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = '用户、角色和类';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = '使用代码Igniter PHP框架.';

$GLOBALS["lang"]['Using'] = '使用';

$GLOBALS["lang"]['Using Entra for Auth'] = '为 Auth 使用 Entra';

$GLOBALS["lang"]['Using LDAPS'] = '使用 LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = '对 Auth 使用 OKTA';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = '在使用网页浏览器时使用格式选项是有用的,但您希望看到JSON格式的结果. 添加格式=json实现此目标. 通常一个网页浏览器会将其接受页眉设置到HTML,因此在这种情况下,我们返回已提供的页面. 使用 API 检索 JSON 您应该设置接收信头到';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = '通常为Mbs,来自地点A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = '通常为Mbs,来自B位置.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = '通常为Mbs,到位置A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = '通常为Mbs,到位置B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = '通常应该设置为3.';

$GLOBALS["lang"]['Uzbekistan'] = '乌兹别克斯坦';

$GLOBALS["lang"]['VLAN'] = '维也纳';

$GLOBALS["lang"]['VLAN ID'] = '维兰身份证';

$GLOBALS["lang"]['valid_from'] = '有效来源';

$GLOBALS["lang"]['Valid From'] = '有效来源';

$GLOBALS["lang"]['valid_from_raw'] = '从 Raw 校验';

$GLOBALS["lang"]['Valid From Raw'] = '从 Raw 校验';

$GLOBALS["lang"]['valid_to'] = '有效为';

$GLOBALS["lang"]['Valid To'] = '有效为';

$GLOBALS["lang"]['valid_to_raw'] = '有效改为 Raw';

$GLOBALS["lang"]['Valid To Raw'] = '有效改为 Raw';

$GLOBALS["lang"]['Valid Values'] = '有效值';

$GLOBALS["lang"]['value'] = '数值';

$GLOBALS["lang"]['Value'] = '数值';

$GLOBALS["lang"]['Value Types'] = '值类型';

$GLOBALS["lang"]['values'] = '数值';

$GLOBALS["lang"]['Values'] = '数值';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = '数值 : 涉及 <i>列表</i> 字段中,应该是一个逗号分隔的有效值列表。';

$GLOBALS["lang"]['Vanuatu'] = '瓦努阿图';

$GLOBALS["lang"]['VarChar'] = '瓦尔察';

$GLOBALS["lang"]['Varchar'] = '瓦尔查尔';

$GLOBALS["lang"]['variable'] = '变量';

$GLOBALS["lang"]['Variable'] = '变量';

$GLOBALS["lang"]['Various'] = '各种';

$GLOBALS["lang"]['vendor'] = '供应商';

$GLOBALS["lang"]['Vendor'] = '供应商';

$GLOBALS["lang"]['Vendor Report'] = '供应商报告';

$GLOBALS["lang"]['vendors'] = '供应商';

$GLOBALS["lang"]['Vendors'] = '供应商';

$GLOBALS["lang"]['Venezuela'] = '委内瑞拉';

$GLOBALS["lang"]['Version'] = '版本';

$GLOBALS["lang"]['version_padded'] = '版本添加';

$GLOBALS["lang"]['Version Padded'] = '版本添加';

$GLOBALS["lang"]['version_raw'] = '版本 Raw';

$GLOBALS["lang"]['Version Raw'] = '版本 Raw';

$GLOBALS["lang"]['version_string'] = '版本字符串';

$GLOBALS["lang"]['Version String'] = '版本字符串';

$GLOBALS["lang"]['video'] = '视频';

$GLOBALS["lang"]['Video'] = '视频';

$GLOBALS["lang"]['Vietnam'] = '越南';

$GLOBALS["lang"]['Vietnamese'] = '越南语Name';

$GLOBALS["lang"]['View'] = '视图';

$GLOBALS["lang"]['View All'] = '全部查看';

$GLOBALS["lang"]['View Details'] = '查看细节';

$GLOBALS["lang"]['View Device'] = '查看设备';

$GLOBALS["lang"]['View Discovery'] = '查看发现';

$GLOBALS["lang"]['View Policy'] = '查看策略';

$GLOBALS["lang"]['View Racks'] = '查看 Racks';

$GLOBALS["lang"]['View the'] = '查看';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = '查看相关发现,然后单击右上方工具栏中的支持按钮。 这将提供发现设置,配置项目,发现设备列表以及这一特定发现的日志.';

$GLOBALS["lang"]['View the release notes on the'] = '在';

$GLOBALS["lang"]['Virtual Private Network'] = '虚拟私人网络';

$GLOBALS["lang"]['Virtual private network'] = '虚拟私人网络';

$GLOBALS["lang"]['Virtualisation'] = '虚拟化';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = '访问我们的YouTube频道 教学视频。';

$GLOBALS["lang"]['vlan'] = '瓦兰';

$GLOBALS["lang"]['Vlan'] = '瓦兰';

$GLOBALS["lang"]['vlan_id'] = 'Vlan 身份证';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan 身份证';

$GLOBALS["lang"]['vm'] = '声波';

$GLOBALS["lang"]['Vm'] = '声波';

$GLOBALS["lang"]['vm_device_id'] = 'Vm 设备标识';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm 设备标识';

$GLOBALS["lang"]['vm_group'] = 'Vm 组';

$GLOBALS["lang"]['Vm Group'] = 'Vm 组';

$GLOBALS["lang"]['vm_ident'] = 'Vm 标识';

$GLOBALS["lang"]['Vm Ident'] = 'Vm 标识';

$GLOBALS["lang"]['vm_server_name'] = 'Vm 服务器名称';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm 服务器名称';

$GLOBALS["lang"]['vm_vendor'] = 'Vm 供应商';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm 供应商';

$GLOBALS["lang"]['vuln_status'] = 'Vuln 状态';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln 状态';

$GLOBALS["lang"]['vulnerabilities'] = ' 安全漏洞';

$GLOBALS["lang"]['Vulnerabilities'] = ' 安全漏洞';

$GLOBALS["lang"]['vulnerabilities_cache'] = '脆弱缓存';

$GLOBALS["lang"]['Vulnerabilities Cache'] = '脆弱缓存';

$GLOBALS["lang"]['Vulnerabilities and Results'] = '脆弱性和结果';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = '脆弱性最初在2025年1月1日前公布(默认). 我们认为,从前几年返回脆弱点毫无意义。 这可以在配置中更改.';

$GLOBALS["lang"]['vulnerability_id'] = '脆弱性识别';

$GLOBALS["lang"]['Vulnerability ID'] = '脆弱性识别';

$GLOBALS["lang"]['Vulnerability Status'] = '状况';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = '警告 - 在使用软件策略创建基线时, 目前在 Centos 和 RedHat 包中使用名称的内核 <i>内核</i> 和 <i>内核解析</i>。 。 。 可同时安装此名称和不同版本的多个软件包. 基于 Debian 的分布使用诸如 <i>linux-image-3.13.0-24-generic(英语:Linux-image-3.</i>,注意版本编号包含在软件包名称中。 因为基于 RedHat 的操作系统使用这种格式, 并随后有多个相同的软件包名称, 不同的版本, 目前我们排除 <i>内核</i> 和 <i>内核解析</i> 从软件政策。 这一点可在今后的更新中加以解决。';

$GLOBALS["lang"]['WHERE'] = '何处';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI 全权证书要求';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = '等待它完成,然后粘贴在这个下行安装代理.';

$GLOBALS["lang"]['wall_port'] = '墙壁端口';

$GLOBALS["lang"]['Wall Port'] = '墙壁端口';

$GLOBALS["lang"]['Wallis and Futuna'] = '瓦利斯和富图纳';

$GLOBALS["lang"]['Want to know more?'] = '想知道更多吗?';

$GLOBALS["lang"]['Warning'] = '3⁄4 ̧漯B';

$GLOBALS["lang"]['warranty'] = '担保';

$GLOBALS["lang"]['Warranty'] = '担保';

$GLOBALS["lang"]['warranty_duration'] = '保证期限';

$GLOBALS["lang"]['Warranty Duration'] = '保证期限';

$GLOBALS["lang"]['warranty_expires'] = '保证期限';

$GLOBALS["lang"]['Warranty Expires'] = '保证期限';

$GLOBALS["lang"]['warranty_status'] = '保证状态';

$GLOBALS["lang"]['Warranty Status'] = '保证状态';

$GLOBALS["lang"]['warranty_type'] = '保证类型';

$GLOBALS["lang"]['Warranty Type'] = '保证类型';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = '我们还可以选择Scan前的Ping(对于长寿的ARP缓存的路由器很重要). 这通常是一个好主意。';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = '我们还有行动项目(按以下顺序执行):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = '我们常常被问到这个问题,最肯定的答案是: <i>看情况</i>。 。 。 这取决于要扫描的IP数量,网络连接速度,被扫描设备的速度,被扫描设备的类型,测试的不同证书数量以及Open-AudIT服务器的速度. 我们没有计算器可以输入这些变量并返回一个值。 这太复杂了。 一般来说,我的发现仅限于256个IP地址——ie,一个24子网. 我们让顾客扫描16个子网(65k地址), 在24区扫描更好 如果你只是不知道你的地址范围, 那么这是种子发现的好例子。';

$GLOBALS["lang"]['We have more detailed instructions on'] = '我们有更详细的指示';

$GLOBALS["lang"]['We have tests for:'] = '我们有测试:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = '我们希望你们能像我们一样 找到开放的AudIT';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = '我们最初设置带有默认选项的默认脚本列表. 脚本列表可在/scripts查看. 这些默认脚本无法删除 。 您可以根据需要创建额外的脚本供您使用. 您的脚本将基于现有的脚本之一, 并应用自定义选项 。 然后可以在菜单列表页面下载脚本: 发现 - > 审计脚本 - > 列表 审计脚本.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = '我们需要一些资质 才能和你的网络上的设备有效交谈';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = '我们只发送最低数量的数据,没有任何敏感性质的数据。 我们发送我们的许可证数据(名称,类型等),我们的应用数据(名称,版本,平台,时区等),任何记录的错误,设备类型的数和所使用的特性的数. <i>任意</i> 环境有设备,这是你唯一的数据 我们发送。 只有装置类型和计数 不是制造商 不是模特儿 我们发的不是特别的。 无网. 没有IP地址 。 没有OS版本. 无软件名称. UUID 和 Server 字段被 sha256 编码(所以我们不知道值) 。 我们发送我们改进产品所需要的数据。 我们希望你们看到这些信息对我们所有人都有好处。 它将指导我们如何集中改进和产品的新特点。';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = '我们倾向于使用Google Chrome扩展名为Postman来测试实际的休息查询. 你可能想安装和测试这个。';

$GLOBALS["lang"]['Web'] = '网页';

$GLOBALS["lang"]['Web Application Routes'] = 'Web 应用程序路由';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web 服务器发现';

$GLOBALS["lang"]['Webserver'] = 'Web 服务器';

$GLOBALS["lang"]['Website'] = '网站';

$GLOBALS["lang"]['Wednesday'] = '星期三';

$GLOBALS["lang"]['weight'] = '重量';

$GLOBALS["lang"]['Weight'] = '重量';

$GLOBALS["lang"]['weight_current'] = '重量当前';

$GLOBALS["lang"]['Weight Current'] = '重量当前';

$GLOBALS["lang"]['weight_empty'] = '重量空';

$GLOBALS["lang"]['Weight Empty'] = '重量空';

$GLOBALS["lang"]['weight_max'] = '重量最大值';

$GLOBALS["lang"]['Weight Max'] = '重量最大值';

$GLOBALS["lang"]['Welcome'] = '欢迎光临';

$GLOBALS["lang"]['Welcome Dashboard'] = '欢迎板';

$GLOBALS["lang"]['Welcome to'] = '欢迎光临';

$GLOBALS["lang"]['Western Sahara'] = '西撒哈拉';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '如果我没有证书,我能期望什么?';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = '那我想从NMIS得到的不在Open-AudIT的田园呢? 我们掩护你 在Open-AudIT中不存在的外部系统(NMIS)中的任何字段都将自动创建为Open-AudIT Custom字段.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = '其他网络设备呢? 思维开关,路由器,打印机等. 显然,你最好能为这些设备提供一些SNMP证书. 他们只需要 <i>只读</i> 进入。 但是,如果你不想这样做,没有什么可以阻止你运行发现,找到设备,并作出一条或两条规则来识别它们(例如可能与开放端口结合使用MAC地址前缀). 你没有太多信息, 但你会知道他们在网络上, 他们是什么, 当他们最后一次被看到。 您也会看到网络上是否有新的信息 。';

$GLOBALS["lang"]['What do we send?'] = '我们发送什么?';

$GLOBALS["lang"]['What does this actually mean to you?'] = '这对你意味着什么?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '这个架子的目的是什么?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '这个位置是什么类型 。 持有的允许类型 <code>attributes</code> 表单。';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = '当 Linux 上的 Open-AudIT 发现 Windows 机器时, 为了执行远程命令, 我们使用';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = '当Windows上的 Open-AudIT 发现 Windows 机器时,为了执行远程命令,我们使用';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = '当打开时 IT接收到有关设备的数据,无论是通过在审计运行中发现设备还是由设备导入的用户来获取,它必须确定这个发现的设备是否与其数据库中已经存在的设备相匹配,或者是应该添加的新设备. Open-AudIT使用一系列12个属性匹配来决定这一点. 匹配规则是作为OR比较,而不是和. 这意味着将已发现设备中的字段与dB解析中作为现有设备的字段匹配的第一个规则. 所有匹配规则都必须失败,这样一个设备才能成为新设备,并导致新记录的创建.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = '当 Posting 数据时, 您必须包含访问符 。 使用每个请求类型生成访问令牌, 因此生成一个 GET( 例如) 并接受: 应用程序/json, 解析 meta_ access_token 的响应, 并随请求包含该响应 。 这应当放置在字段数据[access_token],IE,顶级.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = '当一个设备被发现时,审计脚本会被注入文件(或目录)的细节. 审计_linux.sh 和审计_windows.vbs 都会有人居住,无论文件路径如何. 如果你还在想 <i>但把Linux路径放进Windows机器会打破东西!</i>,它不会破裂,你只是不会收到 从该文件或目录条目的任何数据。<br/>获取的细节将存储在 <i>文件</i> 数据库表格,并与其他属性一样存储。 文件细节将作为任何其他属性存储,如果以下属性发生变化,则生成提醒 - <i>完整名称</i>, (中文). <i>散装</i>, (中文). <i>阴极</i>, (中文). <i>上次更改(_C)</i>。 。 。 表格包含一个系统_id,先看,最后看和当前列以及文件细节.<br/>记录的属性如下:<br/><ul><li>Windows - 名称,大小,目录,SHA1散列(文件内容),最后更改,权限,所有者,版本(文件允许).</li><br/><li>Linux - 名称,大小,目录,SHA1散列(文件内容),最后更改,元数据最后更改,权限,所有者,组,inode.</li></ul>您可以在 Windows 和 Linux 审计脚本中看到下面的一节';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = '当一个发现运行时,选择了相关的发现扫描选项,这些设置被Nmap用于扫描目标设备. 扫描选项决定了哪些端口nmap扫描,扫描速度以及nmap ping是否首先用于确定IP是否有效.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = '当一个发现运行时,会选择相关的发现扫描选项以及Nmap用于扫描目标设备的设置. 如果没有选择选项,则选择和使用默认配置项目(发现_默认_scan_option). Open-AudIT Community会按照配置对所有发现使用默认选项.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = '当子网的发现被执行时,它首先运行,如果选中的话,对范围或IP地址进行Nmap ping扫描. 任何设备响应都会通过端口扫描. 如果不要求Nmap ping扫描,每个IP都会单独扫描. 哪个港口? 这是由';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = '当通过 SSH 审计 Linux 设备时,一些 Linux 分布不允许在没有 TTY (我们正在做) 的情况下通过 sudo 命令 。 要完全审计其中的一款Linux发行,最好提供根用户证书. 如果不提供根,没有TTY的sudo是不可能的,审计脚本将会运行,但不会像其他方式包含数据的数量. 因此,随后使用root(或使用sudo在本地运行)的审计将提供关于该系统的额外细节,并生成若干 <i>变动</i>。 。 。';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = '在组合设备时,哪个系统是权威信息来源.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = '完成后, 关闭命令窗口即可完成 !';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = '创建部件时,如果选择 <i>高级</i> 按钮将具有上传自定义 SQL 的能力。';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '在从外部系统整合设备时,如果设备在Open-AudIT中不存在,我们应该创建它吗?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '在从外部系统集成设备时,如果设备在外部系统中已经更新,我们是否应该在Open-AudIT中更新?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = '在调查发现时,支持会请求输出发现日志. 要获取这些, 请到菜单 - > 发现 - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = '在匹配基于 Linux 的设备时,我们更喜欢使用与主机名连接的 Dbus id 。 我们还可以按照下表使用其他选项,但是我们可以不带根就检索Dbus ID. 要获取UUID( 从母板), 我们需要运行 dmidecode, 这需要root 。 不幸的是,当你克隆一个ESXi客人时,Dbus ID不会被重新创建,因此我们用主机名来装饰它。 这里有篇好文章 详细介绍 <i>为什么</i> 硬件标识。';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = '在请求 JSON 时, 默认情况下没有设定限制 。 请求屏幕显示时,默认限制为1000. 这可以在配置中更改. 见 <i>页面大小(_S)</i> 项目';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '在取回一个外部设备时,我们是否应该进行发现?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = '在 Windows 上运行 Open-AudIT 时, Apache 服务账户必须是 a <i>常设经常</i> 用户(或管理员)。 这是因为 <i>本地系统</i> 通常用于运行 Apache 的账户无法访问任何网络资源。 IE - 我们不能在作为本地系统账户运行时使用Apache来将审计脚本复制到Windows PC.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = '当设定配置选项时,我们对已启用配置项的某个定义匹配规则子集的设备加以考虑。 这些规则是:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = '当发现规则运行时,任何匹配规则都会出现在发现日志中. 例子见下文。';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = '计划执行此基准时 。 衍生自关联 <code>tasks.type</code> 和 <code>tasks.sub_resource_id</code>。 。 。';

$GLOBALS["lang"]['When this log was created.'] = '此日志创建时 。';

$GLOBALS["lang"]['When this queue item started processing.'] = '当此队列项目开始处理时 。';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = '在使用 Open-AudIT 专业或企业时, 部件是可用的, 可以自定义在 Dashboards 上显示 。';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = '当我们将一个内部选定的设备转换成外部系统的对象时,外部数据应该是什么. EG:整数,字符串等.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = '当我们执行这一基线时,我们是否应当检查该基线政策中没有的装置上的项目。';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '当我们收到一个开放的端口时,我们是否应该尝试测试目前运行在端口上的服务版本? 这有助于确认实际运行的服务。';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = '当您使用 Clouds 来发现您的 Amazon AWS 实例时, 您需要两个证书项 - 密钥和密钥 。 你的钥匙应该已经知道 你和你的秘密钥匙。 值得注意的是,你不能使用亚马逊提供的AWS控制台来获取您的密钥. 如果你弄错了,你需要生成一个新的。';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = '当您使用 Clouds 来发现您的微软 Azure 实例时, 您需要四个认证项目 : 订阅 ID 、 租户 ID 、 客户 ID 和 客户 秘密 。';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = '当创建发现时, 您可以选择设备_ assigned_to_org 。 这意味着为这一发现而发现的任何装置都将被指定(有: <code>devices.org_id</code> 设置为)您所选择的组织。';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = '当您点击“高级”按钮创建新的发现时,您还有更多的选项需要更改,其中之一是发现的类型。 类型一直是Subnet(包含上述范围,子网,ip options)和Active Directory. 至v4.1时,Open-AudIT有一种新的发现类型,称为种子.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = '当您允许在时间表上运行查询时, 查询会被电子邮件到您选择的地址 。 您必须通过菜单设置电子邮件 - > 管理员 - > 企业 - > 电子邮件配置。 我们还有一个 <i>测试电子邮件<i> 按钮。 输入细节,保存然后测试. 您应该有一个模式框, 通知您是否成功, 并且如果成功, 显然应该有一个测试电子邮件 。 一旦您配置了电子邮件, 可以配置您的预定查询 。<br/><br/>提供名称、可选描述、 选择 <i>查询</i> 键入、选择想要的查询、提供电子邮件地址、选择格式和设定时间表。<br/><br/>提供一小时( 小时, 还没有时间) , 给任务一个名称( 这不是实际预定查询本身的名称) , 选择您想要查询运行的天数 , 选择您想要运行的查询, 提供电子邮件地址和选择查询格式并完成 。<br/>查询将使用查询的电子邮件正文(以html格式)和所请求的格式所附查询发送。</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = '当将文本输入列标题时,可以简单地使用普通的单词。 例如,输入时 <code>computer</code> 输入上方的搜索框 <i>类型</i> 中,查找将返回所有设备的计算机类型。 基本上,开放的奥德 IT 请求使用类似 URL 的数据 <code>devices?devices.type=computer</code>。 。 。 现在使用数据表搜索与标准有一个显著的区别';

$GLOBALS["lang"]['where'] = '何处';

$GLOBALS["lang"]['Where'] = '何处';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = '$x是一个数字。 这么多 LDAP 条目都在 DB 中并已检索到 。';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = '在设备细节屏幕上您想要看到此字段的出现 。';

$GLOBALS["lang"]['Where the rack is in the row.'] = '架在行处.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '脆弱性是否利用影响、可得性和保密性影响其自身以外的组成部分。';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '是否需要用户交互(无,被动,主动).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = '此基准适用于哪一个 OS 。';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '哪些设备应从外部系统创建 Open-AudIT( 如果有的话) 。 使用全部, 无或给定属性 。';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = '我们该发现哪个网络 这应采用以下形式:';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = '我们应该在哪个子菜单中显示此查询 。';

$GLOBALS["lang"]['Who made this rack.'] = '谁做的这个架子。';

$GLOBALS["lang"]['Why Windows Server Only?'] = '为什么只有Windows服务器?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '为什么我们排斥这一政策?';

$GLOBALS["lang"]['Wide Area Network'] = '广域网';

$GLOBALS["lang"]['Wide area network'] = '广域网';

$GLOBALS["lang"]['Widget'] = '部件';

$GLOBALS["lang"]['Widget #'] = '部件 #';

$GLOBALS["lang"]['Widget # '] = '部件 # ';

$GLOBALS["lang"]['Widget Type'] = '部件类型';

$GLOBALS["lang"]['widgets'] = '控件';

$GLOBALS["lang"]['Widgets'] = '控件';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = '部件被设计成用于Dashboards. 企业用户有完全的自由根据需要创建,更新和删除部件.';

$GLOBALS["lang"]['width'] = '宽度';

$GLOBALS["lang"]['Width'] = '宽度';

$GLOBALS["lang"]['windows'] = '窗口';

$GLOBALS["lang"]['Windows'] = '窗口';

$GLOBALS["lang"]['Windows Packages'] = '窗口软件包';

$GLOBALS["lang"]['Windows Test Script'] = '窗口测试脚本';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows 用户工作单位 # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = '窗口用户工作单位 # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows也可能从一开始就封锁了服务. 在目标上启动Windows安全小程序,并确保允许WinExeSvc可执行文件运行(点击设备允许,然后启动动作).';

$GLOBALS["lang"]['Winexe page on Samba'] = '桑巴的Winexe页面';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe需要启动并运行以下Windows服务: Netlogon和rpc服务需要运行.<br/><br/>请登录到目标Windows机,并检查Netlogon和rpc正在运行的服务.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe使用admin$和RPC(网络服务启动)安装并启动远程服务(winexesvc). 此服务初始化了一个命名的管道,用于将命令从Open-AudIT服务器传输到目标及输出的反向方式. 完成后,命名的管道关闭,winexesvc等待更多的连接或未安装(取决于给出的选项).';

$GLOBALS["lang"]['Wireless Local Area Network'] = '无线局域网';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = '随着Open-AudIT的3.3.0发布,我们引入了集群的概念. 这种直观地将一个网络集群,数据库集群或文件集群(或几个其他目的之一)的想法映射到某个特定类型(高可用性,冗余,缩放等).<br/><br/>根据所选分组的目的,报告略有不同。<br/><br/>例如,如果你创建了一个以虚拟化为目的的集群,当你在其中添加了设备时,也会看到这些设备上的虚拟机器.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = '随着Clouds功能的引入,您可以提供您的云,Amazon AWS或Microsoft Azure的细节,Open-AudIT将使用相关的API来检索一个位置,网络,和实例的列表,然后发现其中的每一个实例.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi 失败';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi 失败';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi 超时';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi 超时';

$GLOBALS["lang"]['workgroup'] = '工作组';

$GLOBALS["lang"]['Workgroup'] = '工作组';

$GLOBALS["lang"]['Working Credentials'] = '工作全权证书';

$GLOBALS["lang"]['Wrap Up'] = '包装';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = '用 PHP 脚本语言编写 。';

$GLOBALS["lang"]['XML'] = 'XML 数据';

$GLOBALS["lang"]['Yellow Query'] = '黄问';

$GLOBALS["lang"]['Yemen'] = '也门';

$GLOBALS["lang"]['Yes'] = '对';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = '您可以定义要扫描的额外目录为执行文件收藏中的条目 。 当定义时,目录和所有子目录会被扫描,用于可执行的文件. 也可以定义要排除的目录和文件. 启动时,这些被注入linux审计脚本,并在运行时执行(通常是作为发现的一部分). 如果您想要这些脚本, 您可以手动复制到目标, 使用菜单 - > 发现 - > 脚本 - > 列表脚本,从那里下载脚本.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = '你总是可以自行修改审计脚本以适应你的具体要求. 您需要( 重新) 加入这些更改, 因为这些更改将被默认脚本覆盖 。 我建议保存您修改过的脚本的主拷贝, 更新 Open-AudIT, 然后在新的默认脚本和您修改过的脚本之间运行 diff, 并应用差异 。 审计脚本是本土脚本(Windows为VBScript,其他所有为Bash). 简单易变 - 在升级前确保有您更改的副本 。';

$GLOBALS["lang"]['You are running version'] = '您正在运行版本';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = '您可以使用基于 Open-AudIT JSON 的 API 访问收藏 。 就像其他收藏一样 请看';

$GLOBALS["lang"]['You can also'] = '你也可以这样';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = '您也可以在页面底部看到一个表格,显示将应用这些更改的设备。';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = '也可以使用以下格式指定属性。';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = '您可以在虚拟基础设施(ESX, Azure, et al)上运行第一波VM。 Firstwave VM运行Debian linux,不受OS许可的担忧和限制. 或自选安装Linux distro. 我们支持Redhat 9、Ubuntu 20.04、22.04和24.04以及Debian 11和12。';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = '您可以自动使用';

$GLOBALS["lang"]['You can assign devices using custom'] = '您可以使用自定义指定设备';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = '您可以创建注册密钥来审计远程机器, 而无需使用实际的管理员账户 。 在每台被审核的机器上创建下面的密钥,并确保所使用的用户证书是管理员组的成员.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = '您当然可以运行一个在网络内设备上没有任何有效证书的发现, 但是,所获取的信息将是Open-AudIT能够获取的非常小的子集 <i>与</i> 证书。';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = '您可以创建一个基线,对照一组设备运行,并查看结果,添加计划执行,添加更多的表格进行比较(目前只启用软件,netstat端口和用户),设置基线编辑,结果存档等等.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = '您可以为任何现有的审计脚本创建包含所有选项的脚本 - 不仅仅是Windows. AIX,ESX,Linux,OSX和Windows全部覆盖.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = '您可以自定义整个集成到哪个系统(NMIS或Open-AudIT)是每个字段的权威. 在 Open-AudIT 或 NMIS 中存在创建和/或更新设备的选项. 我们是否应该运行一个发现 一个创建或更新的设备 以及更多。 页面右侧的每个项目都有解释.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = '您可以定义一个应用程序,并将一个设备与这个应用程序关联起来。 一个设备可能与一个以上的应用程序相关联. 申请可能与一个以上的设备有关。';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = '您可以编辑设备细节页面上每个设备的附加字段值。 查看设备细节屏幕,打开包含字段的段落和(如果有的话)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = '您可以将设备种子发现限制在严格的一组参数范围内,包括: <i>限于子网</i> 和 <i>限于私人</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = '您可以使用';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = '您可以通过在 URL 中提供格式选项来覆盖此选项 。';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = '您可以通过点击右侧的复选框来选择单个设备,或者选择所有点击表格右上角的复选框的设备(下面是看上去像铅笔的编辑按钮).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = '您可以通过选择系统(device)表格中的任何属性和匹配(参见菜单 → 管理 → 数据库 → List Tables → system for a letters)来选择要集成的设备. 属性匹配只能匹配单个值.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = '您可以通过菜单将任何服务器变成收藏器 - > 管理员 - > 收集器 - > 让这个安装一个收集器 。 您需要证书才能登录到服务器上 此安装将报告给它 。';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = '您可以点击蓝色视图图标查看 。 如果您有权限,也可以编辑或删除.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = '您没有安装 PHP MBString 扩展 。 需要延期。';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = '您没有安装 PHP SNMP 扩展 。 强烈建议延长任期。';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = '您可能想要在电子邮件中复制并粘贴此 URL 。';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = '您可能希望有活动目录或 OpenLDAP 认证您的用户, 但不会提供授权 。 要做到这一点,确保 <i>用于认证</i> 设置为 Y 和 <i>用于角色</i> 设置为 N。 证书将由 LDAP 验证, 但您需要让用户在 Open-AudIT 中已经创建并指定角色 。 这个也是 <i>自动</i> 适用于';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = '你可能已经注意到这些匹配规则 对于可能不是全球独有的项目。 一些例子:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '您必须先删除您已有的许可证, 然后再添加新的许可证 。';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = '您必须有工作 SSH 证书来执行基准 。 目前支持的操作系统有:Centos 7,Debian 12,Redhat 7,Redhat 8,Redhat 9,SLES 15,Ubuntu 20.04,Ubuntu 22.04. 我们计划进一步扩充这些内容。';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = '您应该复制并粘贴整个文件到文本框中 。 在下文中,复制所有文本。';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = '您不应包含编辑的_by和编辑的_date字段。 这些将自动设定 。';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = '你只应该修改 文本的第二句,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = '您应该替换 ATTRIBUTE_NAME 所需的列( 如, org_id) 。';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = '您应该使用包含您想要填充的列名的页眉行, 然后使用下面的数据行 。';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = '您只应该使用包含您需要的属性的表格 。 我通常用左联 比如说';

$GLOBALS["lang"]['You will need a'] = '你需要一个';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = '您需要每个目标Windows计算机上打开的Windows防火墙上的WMI端口 。 对于窗口 核心服务器,确保您按照';

$GLOBALS["lang"]['You will see a list of'] = '你会看到一个列表';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube 教习';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = '您的 AWS EC2 API 密钥 。';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = '您的谷歌计算证书为 JSON 。';

$GLOBALS["lang"]['Your Host is'] = '你们 主机为';

$GLOBALS["lang"]['Your Licenses'] = '您的驾照';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = '你的微软Azure客户端ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = '您的微软 Azure 客户端机密 。';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = '您的微软 Azure 订阅 ID 。';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = '你的微软Azure Tennant ID。';

$GLOBALS["lang"]['Your PHP version is'] = '您的 PHP 版本为';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = '您的 SQL 选择将包含此查询的属性 。';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = '您的 SQL 要选择将包含此组的设备 。';

$GLOBALS["lang"]['Your SSH key.'] = '你的SSH钥匙';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = '您的访问权限, 根据云的本地API。';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = '你的数据是你的数据。 随时可以取出来 我们甚至向CSV、JSON和XML提供出口。 我们有JSON API。 你可以写自定义报告 并在CSV,XML,和JSON中拥有这些输出! 再说一遍,这是你的数据,不是其他人 你可以相信数据的安全掌握在你手中';

$GLOBALS["lang"]['Your database platform is'] = '您的数据库平台是';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = '您描述此连接的状况( 已提供、 已退休等) 。';

$GLOBALS["lang"]['Your description of this item.'] = '你对这个项目的描述。';

$GLOBALS["lang"]['Your generic name for this piece of software'] = '此软件的通用名称';

$GLOBALS["lang"]['Your generic version for this piece of software'] = '您的软件通用版本';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '您的用户现在应该能够点击 <i>用 Entra 登录</i> 按钮。 如上所述,如果登录失败, 请检查日志文件并验证用户 <i>首选用户名</i>。 。 。<br/><br/>这应该是所有的东西了。 现在,你的用户应该少 一套证书来记住!<br/><br/>和往常一样,如果你对这个功能有问题,请通过电子邮件';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '您的用户现在应该能够点击 <i>用 OKTA 登录</i> 按钮。 如上所述,如果登录失败, 请检查日志文件并验证用户 <i>名称</i>。 。 。<br/><br/>这应该是所有的东西了。 现在,你的用户应该少 一套证书来记住!<br/><br/>和往常一样,如果你对这个功能有问题,请通过电子邮件';

$GLOBALS["lang"]['Your web server is'] = '您的网络服务器是';

$GLOBALS["lang"]['Zambia'] = '赞比亚';

$GLOBALS["lang"]['Zimbabwe'] = '津巴布韦';

$GLOBALS["lang"]['a String'] = 'a 字符串';

$GLOBALS["lang"]['active'] = '活动';

$GLOBALS["lang"]['active directory'] = '活动目录';

$GLOBALS["lang"]['active/active'] = '活动/活动';

$GLOBALS["lang"]['active/passive'] = '活动/被动';

$GLOBALS["lang"]['advertisement'] = '广告';

$GLOBALS["lang"]['alert'] = '警报';

$GLOBALS["lang"]['all'] = '全部';

$GLOBALS["lang"]['allocated'] = '拨款';

$GLOBALS["lang"]['amazon'] = '亚马逊';

$GLOBALS["lang"]['an Integer'] = '整数';

$GLOBALS["lang"]['and'] = '和';

$GLOBALS["lang"]['and / or'] = '和/或(或)';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = '并制作一张支持票并采取行动。';

$GLOBALS["lang"]['and another'] = '和另一个';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = '并下载最新版的自我安装器。 您可能需要滚动下页才能找到它 。';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = ',然后单击 <i>新应用程序</i>。 。 。';

$GLOBALS["lang"]['and its current time is'] = '其当前时间是';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = '并寻找今天之前的保修期';

$GLOBALS["lang"]['and review what is possible.'] = '并审查可能的情况。';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = '和 签名重定向 URI 是';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = '最后几行很可能是最有意义的。 这些行应该给出登录失败的确切点 。';

$GLOBALS["lang"]['antivirus'] = '抗病毒药';

$GLOBALS["lang"]['application'] = '应用程序';

$GLOBALS["lang"]['approved'] = '核定数';

$GLOBALS["lang"]['are required.'] = '需要这样做。';

$GLOBALS["lang"]['are used.'] = '被使用。';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = '作为这个端口上的响应设备.<br/>这引起了一些顾客的问题,防火墙代表一个不存在的设备进行响应,从而导致假阳性设备检测. 我们现在有这个属性可以设定每次扫描。';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = '作为参考点,并通过系统检查过滤出所有虚拟机。 VM 的序列字段。';

$GLOBALS["lang"]['assuming working and client populated DNS'] = '假设有工作和客户的DNS';

$GLOBALS["lang"]['attribute'] = '属性';

$GLOBALS["lang"]['auto'] = '自动';

$GLOBALS["lang"]['backup'] = '备份';

$GLOBALS["lang"]['banned'] = '被禁止';

$GLOBALS["lang"]['blog'] = '博客';

$GLOBALS["lang"]['blue'] = '蓝色';

$GLOBALS["lang"]['bottom'] = '下边';

$GLOBALS["lang"]['building'] = '大楼';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = '可用于用户认证(是用户名称和密码正确)以及用户授权(用户的角色和类群有哪些).<br/><br/>如果用户不在配置的 LDAP 中,而是在 Open-AudIT(例如: <i>管理员</i> ),Open-AudIT将回落到将自身用于认证和授权.<br/><br/>打开Aud 它使用特定的 LDAP 组来扮演角色和类群. 用户必须是这些组(s)的直接成员,以便Open-AudIT确定用户访问.<br/><br/>在正确配置时,LDAP的使用可以完全消除在Open-AudIT中创建用户的需要. 简单配置 Open-AudIT 用于认证和授权的 LDAP 。 如果用户在Open-AudIT中并不存在,但在LDAP中确实存在,且他们的资质正确,并且他们是需要的组Open-AudIT的成员,则会自动创建用户账户.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = '现在可以检索文件或文件目录的细节,并根据Open-AudIT数据库中的其他属性来监测这些文件的更改. 这个功能在Linux Open-AudIT服务器的框外工作,但需要在Windows Open-AudIT服务器下更改服务账户名称. 支持的客户端是Windows和Linux.';

$GLOBALS["lang"]['changed'] = '已更改';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = '选择。 如果检测到WMI、 SSH 或 SNMP 的端口, 将使用此设备进行进一步查询 ';

$GLOBALS["lang"]['cloud'] = '阴云';

$GLOBALS["lang"]['code'] = '代码';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = '收藏和细节页面是需要执行的图标.';

$GLOBALS["lang"]['collector'] = '收藏家';

$GLOBALS["lang"]['collectors'] = '收藏家';

$GLOBALS["lang"]['column'] = '栏';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = '列将包含 <i>尔</i> 或者说 <i>无</i>。 。 。 这表示此行目前是否出现在设备上 。 例如,可以安装软件(这将导致 <i>软件。当前=y</i>),但在随后的审计中可能无法发现. Open-AudIT 然后将本行当前属性更改为 <i>无</i>。 。 。';

$GLOBALS["lang"]['column. The'] = '栏。 那个';

$GLOBALS["lang"]['compute'] = '计算';

$GLOBALS["lang"]['config'] = '配置';

$GLOBALS["lang"]['console'] = '控制台';

$GLOBALS["lang"]['contains'] = '包含';

$GLOBALS["lang"]['create'] = '创建';

$GLOBALS["lang"]['created'] = '创建';

$GLOBALS["lang"]['credentials'] = '全权证书';

$GLOBALS["lang"]['critical'] = '关键';

$GLOBALS["lang"]['cve'] = '简历';

$GLOBALS["lang"]['database'] = '数据库';

$GLOBALS["lang"]['debug'] = '调试';

$GLOBALS["lang"]['delegated'] = '授权';

$GLOBALS["lang"]['delete'] = '删除';

$GLOBALS["lang"]['deleted'] = '删除';

$GLOBALS["lang"]['denied'] = '拒绝';

$GLOBALS["lang"]['details'] = '细节';

$GLOBALS["lang"]['devices'] = '设备';

$GLOBALS["lang"]['digitalocean'] = '数字海洋';

$GLOBALS["lang"]['discoveries'] = '发现';

$GLOBALS["lang"]['documentation for further details.'] = '详细文件。';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = '已经 <strong>没有</strong> 提供以下方面的脆弱性报告:';

$GLOBALS["lang"]['does not equal'] = '不等于';

$GLOBALS["lang"]['emergency'] = '紧急';

$GLOBALS["lang"]['entra'] = '内';

$GLOBALS["lang"]['equals'] = '等于';

$GLOBALS["lang"]['error'] = '错误';

$GLOBALS["lang"]['established'] = '已设立';

$GLOBALS["lang"]['excluded'] = '不包括';

$GLOBALS["lang"]['expired'] = '过期';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '极端 - 否则,本组织将失败。

非常崇高 -- -- 对各组织生存至关重要,必须立即恢复的职能。

高度 - 应迅速恢复但恢复时间可能稍长的重要功能。

中 - 必要但可容忍较长停机时间的函数。

低 - 可以延迟而无重大影响的非基本功能.

未指定 - 直到设定默认值 。';

$GLOBALS["lang"]['fail'] = '失败';

$GLOBALS["lang"]['false'] = '虚假';

$GLOBALS["lang"]['file'] = '文件';

$GLOBALS["lang"]['firewall'] = '防火墙';

$GLOBALS["lang"]['first'] = '第一个';

$GLOBALS["lang"]['fixed'] = '固定';

$GLOBALS["lang"]['floor'] = '楼层';

$GLOBALS["lang"]['for'] = '(单位:千美元)';

$GLOBALS["lang"]['for authentication'] = '认证';

$GLOBALS["lang"]['for this information.'] = '用于此信息。';

$GLOBALS["lang"]['from Audit Script Result'] = '来自审计脚本结果';

$GLOBALS["lang"]['from NMIS'] = '国家监测信息系统';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = '从地址 LocalHost( Using LRPC) 在应用程序容器中运行';

$GLOBALS["lang"]['front'] = '前面';

$GLOBALS["lang"]['front-left'] = '前左侧';

$GLOBALS["lang"]['front-right'] = '右前边';

$GLOBALS["lang"]['github'] = ' gi';

$GLOBALS["lang"]['google'] = '谷歌';

$GLOBALS["lang"]['greater or equals'] = '大于或等于';

$GLOBALS["lang"]['greater than'] = '大于';

$GLOBALS["lang"]['group'] = '组';

$GLOBALS["lang"]['has not been set'] = '尚未设定';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = '在目标Windows PC上有一个工作逆向 DNS 可解析的IP.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = '有被执行的能力。 打开';

$GLOBALS["lang"]['head'] = '头';

$GLOBALS["lang"]['here'] = '这里';

$GLOBALS["lang"]['high availability'] = '高可用性';

$GLOBALS["lang"]['howto'] = '怎样';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = '如果你克隆了一个Linux虚拟机,除非你手动再生成这个(而根据我的经验,人们不会),它将保持不变.';

$GLOBALS["lang"]['ignored'] = '忽略';

$GLOBALS["lang"]['import the example device data'] = '导入示例设备数据';

$GLOBALS["lang"]['in'] = '内';

$GLOBALS["lang"]['in Enterprise.'] = '在企业号。';

$GLOBALS["lang"]['in Inputs can have the following values.'] = '在输入中,可以有下列值。';

$GLOBALS["lang"]['in Outputs can have the following values.'] = '在产出中可以有以下数值。';

$GLOBALS["lang"]['inactive'] = '不活动';

$GLOBALS["lang"]['incomplete'] = '不完整';

$GLOBALS["lang"]['info'] = '信息';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = '安装器将测试Nmap在其标准安装位置中的存在:';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = '内置、文本、布尔(y/n)等';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = '美国标准由国家标准和技术研究所维持';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = '是管理信息安全的国际标准。 它为建立、实施、维持和不断改进信息安全管理系统提供了一个框架。';

$GLOBALS["lang"]['is based upon'] = '数据基于';

$GLOBALS["lang"]['is licensed to'] = '被许可使用';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'Open-AudIT可以使用密码和密钥认证。 Open-AudIT也可以使用一个已启用的sudo用户而不是直接使用root(虽然它也可以使用root). 为了取得最佳结果,应该使用root用户或一个已启用的sudo用户(见Wiki上没有root的Linux审计和目标客户端配置). Windows设备也可以运行ssh,然而,如果Open-AudIT检测到这一点,它会停止SSH查询,而是使用WMI(假设正在工作的WMI证书).';

$GLOBALS["lang"]['is the link to the'] = '是链接到';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = '选项,以查看具体的表格及其列。 这将使你能够找到你需要的,而不是通过计划创建脚本的MySQL控制台拖网。';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = '键以获取 lat/ 长和显示地图。 见';

$GLOBALS["lang"]['left'] = '左边';

$GLOBALS["lang"]['less or equals'] = '小数或等于';

$GLOBALS["lang"]['less than'] = '小于';

$GLOBALS["lang"]['license'] = '许可证';

$GLOBALS["lang"]['licenses'] = '许可证';

$GLOBALS["lang"]['like'] = '喜欢';

$GLOBALS["lang"]['line'] = '线条';

$GLOBALS["lang"]['list'] = '列表';

$GLOBALS["lang"]['list View, using the Create button'] = '列表视图,使用创建按钮';

$GLOBALS["lang"]['load balancing'] = '负载平衡';

$GLOBALS["lang"]['location'] = '地点';

$GLOBALS["lang"]['locations'] = '地点';

$GLOBALS["lang"]['managed'] = '管理';

$GLOBALS["lang"]['methods'] = '方法';

$GLOBALS["lang"]['microsoft'] = '微软';

$GLOBALS["lang"]['mount point'] = '挂载点';

$GLOBALS["lang"]['must'] = '必须';

$GLOBALS["lang"]['network'] = '网络';

$GLOBALS["lang"]['news'] = '新闻';

$GLOBALS["lang"]['no'] = '无';

$GLOBALS["lang"]['node'] = '节点';

$GLOBALS["lang"]['none'] = '无';

$GLOBALS["lang"]['normal'] = '常规';

$GLOBALS["lang"]['not applicable'] = '不适用';

$GLOBALS["lang"]['not in'] = '没有在';

$GLOBALS["lang"]['not like'] = '不喜欢';

$GLOBALS["lang"]['notice'] = '通知';

$GLOBALS["lang"]['notification'] = '通知';

$GLOBALS["lang"]['okta'] = '罢';

$GLOBALS["lang"]['on devices where'] = '在设备上';

$GLOBALS["lang"]['openldap'] = '打开';

$GLOBALS["lang"]['optimized'] = '优化';

$GLOBALS["lang"]['optionally '] = '可选 ';

$GLOBALS["lang"]['or'] = '或者说';

$GLOBALS["lang"]['or the GitHub page at'] = '或 GitHub 页面';

$GLOBALS["lang"]['other'] = '其他项目';

$GLOBALS["lang"]['package'] = '软件包';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = '页面。 从菜单导出您的 LDAP 服务器 - > 管理员 - > LDAP 服务器 - > 详细信息给JSON,并保存和包含此数据.';

$GLOBALS["lang"]['partition'] = '分区';

$GLOBALS["lang"]['pass'] = '通过';

$GLOBALS["lang"]['pending'] = '待处理';

$GLOBALS["lang"]['performance'] = '业绩';

$GLOBALS["lang"]['performed'] = '执行';

$GLOBALS["lang"]['permission'] = '权限';

$GLOBALS["lang"]['permissions required per endpoint'] = '每个终点所需的权限';

$GLOBALS["lang"]['pie'] = '馅饼';

$GLOBALS["lang"]['planning'] = '规划';

$GLOBALS["lang"]['predictable'] = '可预见';

$GLOBALS["lang"]['query'] = '查询';

$GLOBALS["lang"]['rear'] = '后边';

$GLOBALS["lang"]['rear-left'] = '后左边';

$GLOBALS["lang"]['rear-right'] = '后侧';

$GLOBALS["lang"]['regex'] = '缩写';

$GLOBALS["lang"]['release'] = '释放';

$GLOBALS["lang"]['removed from display, but has been set'] = '从显示中删除, 但已设定';

$GLOBALS["lang"]['reserved'] = '保留';

$GLOBALS["lang"]['right'] = '对';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = ')可以单击字段值来编辑它。';

$GLOBALS["lang"]['role'] = '角色';

$GLOBALS["lang"]['room'] = '房间';

$GLOBALS["lang"]['row'] = '线条';

$GLOBALS["lang"]['service failed to start due to the following error'] = '由于以下错误, 服务启动失败';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = '所以Open-AudIT知道将您的查询限制在相应的Orgs.';

$GLOBALS["lang"]['stand-alone'] = '独立';

$GLOBALS["lang"]['standard'] = '标准';

$GLOBALS["lang"]['starts with'] = '开始于';

$GLOBALS["lang"]['storage'] = '存储';

$GLOBALS["lang"]['subnet'] = '子网络';

$GLOBALS["lang"]['table'] = '图表';

$GLOBALS["lang"]['table and insert the original rows.'] = '表格并插入原行。';

$GLOBALS["lang"]['team'] = '团队';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = '语句。 第一个是数组索引,应留为正数。 该索引用于模板中查找翻译文本。';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = '然后点击表格的细节按钮。';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = '然后点击表格的细节按钮。 设备细节存储于';

$GLOBALS["lang"]['timestamp'] = '时间戳';

$GLOBALS["lang"]['to'] = '改为:';

$GLOBALS["lang"]['to create an item of this type'] = '创建此类型项目';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = '到 URL,您将获得一个设备的全部数据库条目,包括所有组件表格。';

$GLOBALS["lang"]['to the user'] = '发送给用户';

$GLOBALS["lang"]['top'] = '顶端';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = '绝密 - 军事/政府分类. 披露会对国家安全造成特别严重的危险。

机密 - 军事/政府分类。 披露会对国家安全造成严重损害。

机密-军事/政府和私营部门分类。 保密数据包括商业秘密,知识数据,应用编程代码,以及如果发生未经授权的披露可能严重影响组织的其他数据. 这一级别的数据只提供给其工作需要或与所获取数据直接相关的组织人员。 访问机密数据通常需要每次访问的授权.

私营部门分类。 私人数据包括与人员有关的任何信息,包括人力资源记录、医疗记录和薪金信息,仅在组织内使用。

军事/政府和私营部门分类。 敏感数据包括组织财务信息,需要额外措施以确保其中央情报局和准确性。 披露可能会损害国家安全。

公共-私营部门分类。 公共数据是一般与公众共享的数据,不会对组织产生负面影响. 公共数据的例子包括有多少人在该组织工作,以及一个组织制造或销售什么产品。

未分类----军事/政府分类。 通常可以向公众散发的任何信息,而不会对国家利益造成任何威胁。

未指定 - 直到设定默认值 。';

$GLOBALS["lang"]['traffic'] = '运输';

$GLOBALS["lang"]['true'] = '真实';

$GLOBALS["lang"]['true or false (in JSON context)'] = '真假( 在 JSON 上下文中)';

$GLOBALS["lang"]['unallocated'] = '未分配';

$GLOBALS["lang"]['unauthorised'] = '未授权';

$GLOBALS["lang"]['unchanged'] = '不变';

$GLOBALS["lang"]['unknown'] = '不详';

$GLOBALS["lang"]['unmanaged'] = '未管理';

$GLOBALS["lang"]['unused'] = '未使用';

$GLOBALS["lang"]['update'] = '更新';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = '使用从设备中收集的数据,并将安装的软件与所提供的值匹配,它计算出使用过多少许可证和剩下多少许可证。 它允许在 <i>匹配字符串</i> 匹配软件的字段。 名称属性。';

$GLOBALS["lang"]['using the main menu items.'] = '使用主菜单项。';

$GLOBALS["lang"]['valid'] = '无效';

$GLOBALS["lang"]['version'] = '版本';

$GLOBALS["lang"]['virtualisation'] = '虚拟化';

$GLOBALS["lang"]['warning'] = '警告';

$GLOBALS["lang"]['web'] = '网页';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = '设置本地和远程访问权限。';

$GLOBALS["lang"]['with devices::update permission.'] = '有设备: 更新权限。';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = '重定向 URI 为';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = '意图以开发者熟悉的方式提供简单和直观的访问. 除了这个API,网页界面将使用相同的请求格式,并提供一些附加动作(如:HTML格式用于创建项目).';

$GLOBALS["lang"]['yes'] = '对';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = '您无需持有高图许可证即可使用第一波产品。 许可证';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = '您将指定任何发现的设备到该 Org 或 位置 。';

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

