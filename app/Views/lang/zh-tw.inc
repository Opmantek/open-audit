<?php

$GLOBALS["lang"][' Default, currently '] = '默认, 目前';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = '现在支持语言文件。 要更改用户使用此语言,请单击';

$GLOBALS["lang"][' seconds'] = '秒数';

$GLOBALS["lang"]['10 Minutes'] = '10分钟';

$GLOBALS["lang"]['15 Minutes'] = '15分钟';

$GLOBALS["lang"]['30 Minutes'] = '30分钟';

$GLOBALS["lang"]['5 Minutes'] = '5分钟';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br > <strong>NOTE </strong > - 您正在从本地的 Open-AudIT 服务器访问此 URL 。 在其它机器上运行时, 下载的脚本将无法提交 。 如果需要审计其他机器,请从任何远程机器下载脚本,不要在Open-AudIT服务器本身上使用浏览器.';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '(原始内容存档于2017-03-26). p><strong class="text-danger". 注</强> - 您必须有工作 SSH 或 SSH 密钥证书才能执行目标设备的基准。</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong > Baseline </strong > - 包含基准定义和单个政策测试的总体文件。 <br > <br > <strong > 政策 </strong > - 包含在基线中的单个测试。 每个测试都是针对特定项目. 一个例子是测试SSH 版本 1.2.3 <br> <strong > <Details </strong > - 基线可以比较净统计端口、用户和软件. <br> <strong > > <Software </strong > - 为了比较软件,我们检查名称和版本。 由于版本编号并非全部在格式上标准化,当我们收到审计结果时,我们创建了一个新的属性,称为软件_插件,与每个软件包的其他软件细节一起存储在数据库中. 因此,使用软件政策的基线在运行于一个未经1.10(至少)审计的设备时不会起作用。 软件政策可以针对版本的"等值","大于"或"等于或大于"进行测试. <br> <br> <strong>Netstat Ports </strong> -Netstat Ports使用端口号,协议和程序的组合. 如果所有人都在场,则政策通过。<br><br><strong>>Users</strong>-用户的工作类似于Netstat Ports。 如果用户有匹配的名称、状态和密码细节(可更改、过期、需要),则政策通过。<br> <br> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p> 语句 一个位置是一个物理地址,可以拥有与之相关的设备. <br> <br> 您可以指定它坐标( lat/ long), 如果指定了设备, 该位置将出现在 Open-AudIT Enterprise地图上. <br> <br></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br>Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br> <br></p>'] = '<p>一个网络来自发现条目和设备属性. <br> <br> Open-AudIT可以配置到只能接受这里包含的网络的审计结果. 要设置此选项, 请设置属性 < code> blessed_ subnets_ use </code>. < br> < br></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>摘要将显示一个项目列表,按<code>表 </code>和<code>栏目 </code>属性指定的属性的不同值分组. <br> <br>当执行一个摘要时,结果将是该<code>表 </code>和<code>栏目 </code>的不同值列表. 在允许用户查看匹配设备的值上会有链接. <br> <br> <br> 如果包含 <code> extra_colins </code> 的属性,那么产生的页面除了标准设备列外,还会包含这些列. <br> <br></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>代理允许您在没有发现的情况下审核个人计算机。 安装代理, 它会每天与服务器进行登录, 并自己审计 。 如果你的电脑有防火墙,审计数据仍然会在Open-AudIT中出现。</p><p> 测试 < strong > if </ strong > 时 代理人应当进行操作,所有三项测试都必须通过(如果测试确定的话)。 < 强> 然后 </ 强> 已采取行动。</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>应用程序由您,用户定义并存储在 Open-AudIT 中使用和连接设备. <br> <br></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>属性为 Open-AudIT 存储,用于特定的字段。</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p> 能够确定哪些机器配置相同是系统管理和审计 – 的主要部分, 现在报告这一点将变得简单和自动化。 一旦您定义了基线, 它将自动运行在预定时间表上的一组设备上 。 这些已执行基线的输出将可用于网页查看、导入第三方系统或甚至用作打印报告。<br> <br>基线使您能够将审计数据与您先前定义的一组属性(你的基线)结合起来,以确定设备的合规性。<br> <br> > 例如,您可以从运行Centos 6的设备中创建基线,该设备在集群中充当您的阿帕切服务器之一。 您知道这个特定的服务器是按您想要的方式配置的, 但是您不确定集群中的其他服务器是否配置完全相同 。 基线允许您确定此值。 <br > < br > < /p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>模块存储在Open-AudIT中,用于关联设备,以便更好地记录、管理和估计许可费用。<br> <br></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>components是一个通用术语,用于存储设备属性的表格. 这些表格是: access_point, arp, bios, 证书, cli_config, 磁盘, dns, 文件, ip, 日志, 内存, 模块, 显示器, 母板, netstat, 网络, nmap, 光学, 页面文件, 分区, 政策, 打印_ queue, 处理器, 收音机, 路由, san, scsi, 服务器, 服务器_项目, 服务, 共享, 软件, 软件_ key, 声音, 任务, usb, 用户, 用户_ 组, 变量, 视频, vm, 窗口。 </p><p> 此外,我们还将以下表格归类为设备相关:应用程序、附件、集群、证书、图像。</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>证书在存储到数据库时会加密. <br> <br>当一个发现运行时,一个设备的证书会先被检索并测试连接(从<code>证书</code>表). 如果失败, 那么与给定的 Org <code> crediences.org_id </code> 相关的证书也会通过设备测试. 工作证书保存在证书表的单个设备级别(注 - 在表格名称中没有"s"). <br> <br> SSH密钥在SSH用户名/密码之前进行测试. 在测试 SSH 时, 证书也会被标记为与 sudo 合作或成为 root. < br> < br> 为方便使用, Windows 密码中不应包含单引号或双引号. 这是一个远程的WMI限制,而不是Open-AudIT限制. <br> <br></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>证书用于访问设备。 <br> <br> 配置证书应当是您在安装 Open-AudIT 后首先要做的事情之一。<br> <br></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p> 保护好你的架子, 并分配设备到他们的位置。 你已经在Open-AudIT中拥有了你的设备,你知道自己的位置. Open-AudIT 扩展此选项, 允许您创建一个机架并给它分配设备 。 Open-AudIT甚至会提供机架和内装设备的可视化. 如果您提供了设备图片,该图片将被用于可视化. 您可以查看屏幕上的架子, 并看到同样的东西, 如果你站在屏幕的前面你会看到。 < br> < br></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>网络上的设备需要管理。 但你的唱片怎么更新? 电子表格 - defintley no. 数小时后,如果不是几天,就会过时。 为什么手动尝试跟上。 使用Open-AudIT自动扫描您的网络并记录您的设备——制造商,模型,串行和超过100个其他属性. 软件,服务,磁盘,开放端口,用户等的完整清单. 自动查看属性是否已被添加,删除或更改. <br> <br>> <Once Open-AudIT已设置,您可以坐下来放松. 例如,我们本周发现了哪些新设备? 这周安装了什么样的新软件? 上个月是否有硬件变化 ? < br > < br> 扩展到存储的字段上, 容易使用您的自定义属性 。 < br > < br> 甚至添加无法连接到您的网络或您的 Open- AudIT 服务器无法访问的设备 。 < br > < br> < 计算机、 开关、 路由器、 打印机或您的网络上的任何其他设备 - Open- AudIT 可以全部审计 。 < br> < br > < /p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>发现是Open-AudIT所作所为的核心。 <br> <br>你怎么会知道“我的网络是什么?><br> <br>发现是准备的数据项目,可以让你在一次点击中运行一个网络上的发现,而不每次输入该网络的细节。 <br> <br> <br></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p> 发现 选项是在<a href=>./configation?configation.name=discovery_default_scan_option>=configation </a>中更改的全局设置. 如果您持有Open-AudIT Entertainment许可证,这些许可证可按规定在每次发现时确定,此外,还可按要求自行定制。 发现 选项如下(包括扫描单个IP的提示时间):<br/><br><strong>UltraFast</strong>:<i>1秒</i>。 只扫描Open-AudIT需要用来与设备交谈的端口,并检测一个IOS设备(WMI,SSH,SNMP,Apple Sync). <code>openQQfiltered </code> 端口被视为打开。 <code>filtered </code> 端口不视为打开。 设备必须响应 Nmap ping 。 使用侵略性计时器。 < br></ > strong > SuperFast </strong > : <i> 5秒 </i>。 扫描前10个TCP和UDP端口,以及端口62078(Apple IOS检测). <code>openQQfiltered </code> 端口被视为打开。 <code>filtered </code> 端口不视为打开。 设备必须响应 Nmap ping 。 使用侵略性计时.<br/QQbr/QQstrong>Fast</strong>:<i>40秒</i>. 扫描前100个TCP和UDP端口,以及端口62078(Apple IOS检测). <code>openQQfiltered </code> 端口被视为打开。 <code>filtered </code> 端口不视为打开。 设备必须响应 Nmap ping 。 使用侵略性计时.<br/></></><强>中ed(Classic)</strong强>:<i>90秒</i>. 和传统的Open-AudIT扫描差不多 我们能做的一样 扫描前1000TCP端口,以及62078(Apple IOS检测)和UDP 161(SNMP). <code>openQQfiltered </code> 端口被视为打开。 一个 <code>filtered </code>端口被认为是开放的(并将触发设备检测). 无论Nmap ping的响应如何,设备都会被扫描. 使用侵略性计时.<br/></><r/><r>> 中ed </strongr>>:<i>100秒</i>. 扫描前1000TCP和前100 UDP端口,以及端口62078(Apple IOS检测). <code>openQQfiltered </code> 端口被视为打开。 <code>filtered </code> 端口不视为打开。 设备必须响应 Nmap ping 。 使用侵略性计时.<br/><r/><rstrongr>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r r r r>r>r>r l>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>i>r>r>r>r>r>r>r>r>r>r>i>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>r>. 扫描前1000TCP和前100 UDP端口,以及端口62078(Apple IOS检测). 版本检测启用 。 <code>openQQfiltered </code> 端口被视为打开。 一个 <code>filtered </code>端口被认为是开放的(并将触发设备检测). 设备必须响应 Nmap ping 。 使用正常时间. < br/></></ ><strstrong > UlSlow </strstrong > : <i>20分钟 </i>. 未建议。 扫描1000顶TCP和UDP端口,以及62078端口(Apple IOS检测). 无论Nmap ping的响应如何,设备都会被扫描. 版本检测启用 。 <code>openQQfiltered </code> 端口被视为打开。 一个 <code>filtered </code>端口被认为是开放的(并将触发设备检测). 使用礼貌的计时. <br/></></强>Custom </强>:<i>未知时间</i>. 当更改标准发现预设设置以外的选项时 。 < br>< br></ p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p> Groups被用作符合所需条件的简单设备列表. 如果使用 JSON 请求, 它们只返回 < code> devices.id </code> 列表 。 如果使用网络界面请求,它们会返回标准列属性列表. <br> <br></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p> 如果用户登录到 Open-AudIT 无法访问搜索 LDAP(而您正在使用 OpenLDAP),您可以使用另一个有此访问权限的账户. 使用<code>ldap_dn_count</code>和<code>ldap_dn_password</code>来配置此语句.<br><br><strong>帮助文档</strong><br><br>
<a href=\'/index.php/auth/help> Auth General Help </a></br> <br> (中文(简体) ).
<a href=\'/index.php/faq?name=Using Entra for Auth> </a></br> <br> 请检查url=值 (帮助)
<a href=\'/index.php/faq?name=使用OKTA换Auth\' > 使用OKTA换Auth</a></br> <br>
<a href=\'/index.php/faq?name=Troubleshooting LDAP Logins> <Troubleshooting LDAP Logins</a></br> <br> (中文(简体) ).
<a href=\'/index.php/faq?name=用户、角色和兽群><用户、角色和兽群</a><br><br></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p> 语句 如果您添加了设备类型, 您需要手动将 . svg 格式化的文件复制到目录 : < br><em> Linux </em > : /usr/local/open- object/ public/device_images < br><em> Windows </em > : c:\xampp\htdocs\open-opopen-object_device > <br> 如果您添加了位置类型, 您需要手动将 32x32px 格式化的文件复制到目录 : < br><m> Linux </ / open- obleadit/publict/image/map_icons < br><m> Windows </em > : c:\xampp\hthtdoc\-op\ audit\images_p> 。 当<i>资源<i>为<code>device</code>时,有效的<i>类型</i>为:<code>class</code>,<code>环境</code>,<code>status</code>和<code>类型</code>. 如果<i>资源<i>是<code>位置</code>或<code>org</code> 唯一有效的<i>类型</i>是<code>类型</code>。 如果<i>资源<i>是一个<code>query</code> 唯一有效的<i>类型</i>是<code>菜单_分类</code>。</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p> 如果您打算完全审计您的云端机器, 请不要忘记您还需要在 Open- AudIT 中保存的证书。 </p><p> 如果您正在使用微软 Azure( 22 for SSH, etc. 检查您的虚拟机 - > 网络规则 。 < br > < br></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p> 如果选择列表类型,将启用“值”字段。 您应该在此设置一个可选值的逗号分隔列表 。 当字段被编辑时,这些字段将显示在一个下拉框中。 <br> <br> 和其他大多数属性一样,字段可以被编辑。 按您通常的意愿使用批量编辑功能, 您将会看到字段可供输入 。 < br> < br> 查看设备细节屏幕, 打开包含字段的部分, 并且( 如果您有足够的访问权限) 您可以点击字段值来编辑它 。 < br> < br></ p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p> 在日益变化的计算机安全世界中,每天都发现并补齐新的弱点,因此,执行安全合规必须是一个持续的过程。 它还需要包括调整政策以及定期评估和风险监测的方法。 OpenSCAP生态系统为快速、成本效益高和灵活地实施这些进程提供了工具和定制政策。 </p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>集成允许您为 Open-AudIT 设置设备选择和调度,以与外部系统交谈. <br> <br></p>';

$GLOBALS["lang"]['<p>It is easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen over time. All the devices discovered last week, last month or any other period. New software found. What about devices that have not been seen - where are they? How useful to be able to specify these items over time.<br> <br></p>'] = '<p> 语句 随着时间的推移,很容易看到报告极其有用。 不仅可以看到Open-AudIT的数据,现在也可以看到它随着时间的推移所看到的. 上个星期、上个月或任何其他时期发现的所有装置。 找到新软件 。 那没有被看见的装置呢? 它们在哪里? 如何在一段时间内指定这些项目。<br> < br></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap计时详情见此链接页的下方<a href=\'https://nmap.org/book/man-performance.html\'目标="_blank">https://nmap.org/book/man-perforce.html</a>. 从该页面看:<br><br><em>> 如果您在连接一个像样的宽带或醚网,我建议始终使用-T4(主动性)。 有些人喜欢T5, 人们有时会指定-T2(Polite),因为他们认为崩溃主机的可能性较小,或者因为他们认为自己在一般情况下是礼貌的. 他们常常不知道T2到底有多慢 他们的扫描可能比默认扫描要长十倍. 机器崩溃和带宽问题在默认的计时选项-T3(Normal)中是罕见的,所以我通常建议谨慎的扫描仪使用. 刻录版本检测比玩计时值减少这些问题更有效。</em><footer>Gordon<i>Fyodor</i> 里昂 </脚 > > > > > > > > > > > > > > > > > > > > > > >';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p> Open-AudIT可以配置,以使用不同方法认证一个用户,此外,还可以使用基于组成员资格的指定角色和类词创建用户账户. <br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p> 打开奥德 IT可以检索文件或文件目录的细节,并根据Open-AudIT数据库中的其他属性来监控这些文件的更改. <br> <br>这个功能在Linux Open-AudIT服务器的框外工作,但需要在Windows Open-AudIT服务器下更改服务账户名称. <br> <br>支持客户端是Windows和Linux.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p> 打开奥德 IT可以检索一个文件的细节,询问本地软件包管理器是否为它所知,并根据Open-AudIT数据库中的其他属性对这些文件进行监控.<br><br><支持客户端仅是Linux.<br><br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p> Open-AudIT 可以存储与每个设备相关的自定义字段中的信息. <br> <br> 一旦创建了附加字段,它就可以像数据库中任何其他属性一样用于查询和组中. <br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p> 打开奥德 它带来了许多内置的询问。 如果您需要特定查询, 且预装的查询都不符合您的需要, 很容易创建新的查询并加载到 Open- AudIT 中以进行运行 。 <br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p> 打开奥德 它包含许多内置摘要。 如果您需要具体摘要, 且预装摘要中没有一个符合您的需要, 很容易创建新的摘要并加载到 Open- AudIT 中运行 。 <br> < br></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p> Open-AudIT由FirstWave以惊人的支持水平支持. 如果你更喜欢一个积极的支持者群体, 也一样。 你还能在哪里直接和开发者交谈,并在24小时内得到回复? 用其他产品试试看! 惊人的支持。 完全停下来。 你需要支持,我们提供支持。 没有如果或但是。 广大供养. 周期。<br><br></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '在 Open-AudIT 中, <p> Open-AudIT 中提供多租位! <br> <br> Orgs(组织)是一个关键项目。 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将它与一个被指派的"Roles"列表结合起来,该列表定义了他们可以对分配给他们可以访问的Orgs的项目采取什么行动. 用户"orgs"和"roles"的组合定义了他们在Open-AudIT内所能做和不能做的. <br> <br>在Open-AudIT中的大多数项目被分配到一个Org. 设备,位置,网络等. <br> <br>Orgs可以拥有孩子Orgs. 想想组织图(树)结构. 如果用户可以访问特定的Org,他们也可以访问Orgs后裔. 更多信息请参见此<a href=/index.php/faq?name=用户,角色和兽类>. FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '在 Open-AudIT 中, <p> Open-AudIT 中提供多租位! <br> <br> Orgs(组织)是一个关键项目。 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将它与一个被指派的"Roles"列表结合起来,该列表定义了他们可以对分配给他们可以访问的Orgs的项目采取什么行动. 用户"orgs"和"roles"的组合定义了他们在Open-AudIT内所能做和不能做的. <br> <br>在Open-AudIT中的大多数项目被分配到一个Org. 设备,位置,网络等. <br> <br>Orgs可以拥有孩子Orgs. 想想组织图(树)结构. 如果用户可以访问特定的Org,他们也可以访问Orgs的后代. </p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>快速查看您网络上设备的状态。<br> <br></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>在 Open-Aud 中的 Roles 它是一个关键项目。 一个用户有一个主 Org 以及可以访问的 Org 列表. 一个用户将此与指定角色列表结合起来,该列表定义了他们可以对其可以访问的Orgs项目采取的行动. 一个用户"orgs"和"roles"的组合定义了他们在 Open-AudIT 内能做什么和不能做什么. <br> <br>
获得完整的Open-AudIT Enterprise体验. 创建角色可以对用户在 Open-AudIT 中所能做的事情进行精细的逐条控制. <br> <br>
授权的主要方法(用户可以做什么)基于用户角色. 默认角色被定义为管理员,org_admin,记者和用户. 每个角色对每个端点都有一组权限(创建,读,更新,删除). 在 Open-AudIT Entertainment 中启用了定义更多角色和编辑现有角色的能力. <br> <br> Roles 也可以在LDAP(主动目录和OpenLDAP)的授权下使用. 企业许可设施有能力为每个定义的角色定制LDAP组. <br> <br></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p> 规则检查属性,并根据适当的规则制作粗体。</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>扫描选项允许您在发现时轻松应用一组选项. <br> <br></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>由Google地图提供的简单,直观,准确的地理测绘. 开放-AudIT杠杆 谷歌地图提供设备位置的现场,交互式地理绘图. 街道地址自动转换为地理编码和经度/纬度. <br> <br>
</p> 语句';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>软件包用于确定是否安装了抗病毒,备份,防火墙,批准或禁止的软件. <br> <br></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>一些有效子网属性的例子有:192.168.1.1(一个IP地址),192.168.1.0/24(一个子网),192.168.1-3.1-20(一个IP地址范围). <br> <br><em>NOTE</em> - 只有子网(根据例子——192.168.1.0/24)才能自动为Open-AudIT创建一个有效的网络. <br> <br> 如果您使用活动目录类型, 请确保您拥有适当的证书, 可以在<a href=> 中与您的域控制器交谈. / 证书\' > 证书<a>. <br> <br> <br></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>支持的客户端只有Linux. <br> <br></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>任务有对应 unix cron 调度的时间表 。 分钟、 小时、 日_ 月、 月、 日_ 周的属性都按照 cron 定义行事 。 您可以使用逗号分隔值( 无空格) 选择其中的多个 。 您可以使用 *. < br > < br> < 代码 > 类型 < code > 选择任务的每个值, 可以是: 基线、 采集器、 发现、 查询、 报告或摘要 。 < br > < br> 如果您想要安排基线或发现, 您需要在创建任务之前创建这些值 。 您必须使用<code>sub_resource_id</code>中项目类型的ID。 例如,如果您想要安排发现器,请在<code>sub_resource_id</code>中使用该特定的发现器ID.<br><br><code>uuid</code>的值是每个Open-AudIT服务器所特有的. 您的独特值可以在配置中找到. <br> <br> <code>options </code>属性是一个JSON文档,包含执行任务所需的任何额外属性. 报告、查询和摘要的额外属性为:<code>email_address </code>和<code>format </code>。 Bselines 的额外属性为 <code>group_id</code>. <br> <br></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>该位置的 <code>类型 </code>将指定其图标。<br> <br></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p> 语句 属性端点允许您在 Open-AudIT 中将定制值添加到不同的属性中,此时此特性在设备上的类,环境,状态和类型属性,位置和兽类的类型属性以及查询的菜单类. 如果您查看了其中一种类型的项目( 显示 Lkocation) , 您会注意到必须从下拉框中选择类型属性 。 这就是这些值被存储的地方。 因此,如果您想要为位置添加新类型,请使用属性特性添加该类型。</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p> 语句 Collectors 特性使您能够轻松地管理许多执行网络发现的"collector"计算机. 所有收集器都由服务器集中控制. 收集器和服务器之间唯一需要的网络端口是80和/或443. <br> <br>,这使得管理不同的网络变得迅速、简单和简单。 Open-AudIT Enterprise许可证持有者获得单一的集邮许可证,并有权按要求购买更多。<br> <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p> 您的 SQL <em> must </em> 中的SELECT 部分包含完全合格的列。 IE - <code>SELECT设备.id AS ‘devices.id\', 设备.name AS`devices.name`.</code>.<br><br> 您的SQL<em> must</em> 中的部分包含 <code>WHERE@filter</code>,所以Open-AudIT知道将您的查询限制在相应的Orgs。 不包含此条件的 SQL 会导致查询失败, 除非您有管理员角色. < br> < br> 一个实例查询 SQL 显示在具有"Linux" - < br><xcode > SELECT 设备属性的设备上的属性. id AS `devices.id\', device.icon AS `devices.icon\', 设备. 类型为 AS ‘devices.type\',设备.name AS ‘devices.name\',设备.os_name AS ‘devices.os_name\' 从设备中调出 @ filter and 设备.os_group = "Linux" </code><br > <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>您的 SQL 的 SELECT 区域 <em> must </em> 只包含 <code>DISTINCT(devices.id) </code>.<br> <br> 您的SQL <em> must </em> 中的部分包含 <code>WHERE@filter </code>,所以Open-AudIT知道将您的查询限制在相应的 Orgs。 不包含此条件的 SQL 将导致组无法创建 。 < br> < br> 一个 SQL 选择所有运行 Debian OS - < code> SELECT DISTINCT( devices. id) 的设备的例子 从@ filter 和设备.os_family = "Debian" </code></br> <br></p>的设备中获取';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p> 语句 许可证端点允许您跟踪设备上发现的许可证数量。 < br> < br> 要创建条目来跟踪您的许可证, 以提供名称、 组织、 获得的许可证数量和软件名称 。 球场上 <code> match_string </code> 您必须提供您想要跟踪的软件的名称, 您可以在匹配_ 字符串中将% 的符号(%) 作为通配符。 < br> < br></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p> 语句 网络格式应为192.168.1.0/24. <br> <br></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p> 语句 初级和可选次级项目应具有完全的资质 -- -- 即设备。 类型或软件.name.<br> <br></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p> 语句 如果您正在 Linux 服务器上运行 Open- AudIT , 无需做任何事情 。 < br>
< br> (英语)
然而,Windows客户端很好,不需要特殊动作. . 要启用这个功能,审计脚本必须在目标Windows系统上本地运行. 它不能远程运行,因为我们在运行一个Windows机上的审计脚本时会和WMI通话一样,同时瞄准第二个Windows机. 要做到这一点,我们需要将审计脚本复制到目标Windows机器,然后运行. 不幸的是,Apache运行在下面的服务账户是本地系统账户。 该账户无法访问远程(基于网络)资源。 要解决这个问题,服务必须在另一个账户下进行。 仅使用本地管理员账户是很容易的, 但是只要您有所需的权限, 您就可以尝试您喜欢的任何账户 。 本地系统账户的本地访问权限与本地管理员账户相同。<br>
< br> (英语)
参见我们关于启用<a href=\'/index.php/faq的页面?name=运行 Open-AudIT Apache Service under Windows">运行 Open-AudIT Apache Service under Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p> 语句 这些设备生活在架子内。<br> <br></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p> 语句 此端点允许您添加您的云基础设施细节 。 Open-AudIT随后将使用本地的 API 伸手到您的云中并返回您的服务器, 就像 Open-AudIT 中的任何其他设备一样。 <br> <br><em>NOTE </em> - 要使用此功能, 我们 <em> must </em> 启用配置项目匹配_mac(用于 AWS) 和匹配_hostname(用于 Azure) 。 这将在首次执行云发现时自动完成。 <br> <br> 您云的证书(<a href=]/index.php/faq?name=微软证书) 云发现中使用的Azure">Azure</a>或<a href=\'/index.php/faq?name=云发现中使用的亚马逊AWS的证书">AWS</a>)是需要的.<br><br></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>我们最初设置带有默认选项的默认脚本列表. 这些默认脚本无法删除 。 您可以根据需要创建额外的脚本供您使用. 您的脚本将基于现有的脚本之一, 并应用自定义选项 。 脚本可以按菜单从列表页面下载 - > 发现 - > 审计脚本 - > 列表 审计脚本<br><br></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>在使用Regex进行匹配时,可在<a href=>https://www.php.net/manual/en/regexp.regic.meta.php\'目标="_blank"上找到一个帮助的页面. ưμ㼯A 与Perl Regex的一些区别可参见"https://www.php.net/manual/en/Reference.pcre.pattern.differences.php"目标="\'_blank\'>here</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p> Widgets 很容易被创建,以便在您的仪表板上显示环境所特有的内容. <br> <br></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p> 带有 Open-AudIT 专业和企业,你可以自动化 和安排发现, 报告生成, 或基线检查运行 当你想运行, 并随需要。 安排你的发现 晚上运行,报告 生成和电子邮件给关键人员 每天早上。 复杂或简单的调度,设备发现和报表生成只是一击即逝. <br> <br>为每个子网或AD控制器创建单个发现时间表,在为目标受众创建的报告中添加. 开发简单或复杂的时间表,以支持公司需求,避免备份或对业务的影响,或只是分散负载和速度审计完成. <br> <br></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p> 语句 您可以为任何现有的审计脚本创建包含所有选项的脚本 - 不仅仅是Windows. AIX,ESX,Linux,OSX和Windows全部覆盖. <br> <br></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p> 语句 您可以在匹配_ 字符串中将% 的签名% 作为通配符。 < br > < br></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>你的架子有助于精确地完善设备所在位置。<br> <br></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = '谷歌地图 API 密码 此功能需要密钥 .';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = '将执行此基准的 JSON 设备标识组 .';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = '包含指定给此用户的 Orgs 的 JSON 文件 。 ID取自<code>orgs.id</code>. 如果用户可以接触一个Org,他们可以接触Orgs后裔.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON 文档,根据<code>scripts.type </code>,包含所需的属性.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON 文档, 包含高于所选发现的必需属性_ 扫描_ 选项 .';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON 文档, 包含默认设备匹配选项上必须的属性 .';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = '包含指定给该用户的角色的 JSON 文件 。 角色名称取自<code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = '包含一系列属性的 JSON 对象,如果匹配发生,则要更改 .';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON 对象包含一系列匹配的属性 .';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = '一个包含收藏特定选项的 JSON 对象 .';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON通过云号发现而发现的物体.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = '包含要执行的队列项目细节的 JSON 描述 .';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON代表这一一体化的领域.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON对所有装置的个别试验及其结果作了说明,但这一基准被对照.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON代表构成这项政策的测试.';

$GLOBALS["lang"]['A URL to a file to download.'] = '要下载的文件的 URL .';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '一个计算出来的字段,显示此软件件在所选 Org 中的计算机上被发现的次数(如果配置的话它的后代).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = '收藏家要么是收集器,要么是备用状态.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '一个逗号分隔的数值列表,其中之一可以选择.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '命令要运行。 当代理基于Windows时,此命令会从动力壳代理内部运行.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = '一张自定义TCP端口扫描列表(22是SSH,135是WMI,62078是iPhone同步).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = '用于扫描的自定义 UDP 端口列表(161 是 SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '更低的数值意味着它将被应用在其他规则之前.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '更低的数值意味着它将被应用在其他规则之前. 默认重量为100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = '在使用应用程序认证时允许登录的密码( 存储为散列) .';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = '一个路由域或地址空间,其中IP地址和MAC地址是独一无二的.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = '安全区是网络域内的行政域或政策域.';

$GLOBALS["lang"]['A short description of the log entry.'] = '日志条目简介.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = '匹配 <code>software.name </code>属性的字符串。 您可以使用% 的标准 SQL 通配符来匹配一个或多个字符 .';

$GLOBALS["lang"]['AD Group'] = 'AD 组';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL、氢氟碳化合物、ISDN等.';

$GLOBALS["lang"]['AIX'] = '大赦国际';

$GLOBALS["lang"]['ALL IPs'] = '所有实施伙伴';

$GLOBALS["lang"]['API / Web Access'] = 'API / 网络访问';

$GLOBALS["lang"]['API Key required.'] = '需要 API 密钥 .';

$GLOBALS["lang"]['API Result'] = 'API 结果';

$GLOBALS["lang"]['About'] = '关于';

$GLOBALS["lang"]['Accept'] = '接受';

$GLOBALS["lang"]['access_point'] = '访问点';

$GLOBALS["lang"]['Access Point'] = '访问点';

$GLOBALS["lang"]['access_token'] = '访问托肯';

$GLOBALS["lang"]['Access Token'] = '访问托肯';

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

$GLOBALS["lang"]['action_devices_assigned_to_location'] = '指定到位置的动作设备';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = '指定到位置的动作设备';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = '指定给 Org 的动作设备';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = '指定给 Org 的动作设备';

$GLOBALS["lang"]['action_download'] = '动作下载';

$GLOBALS["lang"]['Action Download'] = '动作下载';

$GLOBALS["lang"]['action_uninstall'] = '动作卸载';

$GLOBALS["lang"]['Action Uninstall'] = '动作卸载';

$GLOBALS["lang"]['actions'] = '行动';

$GLOBALS["lang"]['Actions'] = '行动';

$GLOBALS["lang"]['Activate'] = '启动';

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

$GLOBALS["lang"]['Add image'] = '添加图像';

$GLOBALS["lang"]['additional_items'] = '增列项目';

$GLOBALS["lang"]['Additional Items'] = '增列项目';

$GLOBALS["lang"]['address'] = '地址';

$GLOBALS["lang"]['Address'] = '地址';

$GLOBALS["lang"]['admin_status'] = '管理状态';

$GLOBALS["lang"]['Admin Status'] = '管理状态';

$GLOBALS["lang"]['advanced'] = '高级';

$GLOBALS["lang"]['Advanced'] = '高级';

$GLOBALS["lang"]['Afghanistan'] = '阿富汗';

$GLOBALS["lang"]['agents'] = '探员';

$GLOBALS["lang"]['Agents'] = '探员';

$GLOBALS["lang"]['Aggressive'] = '侵略性';

$GLOBALS["lang"]['Aland Islands'] = '奥兰群岛';

$GLOBALS["lang"]['Albania'] = '阿尔巴尼亚';

$GLOBALS["lang"]['Algeria'] = '阿尔及利亚';

$GLOBALS["lang"]['algorithm'] = '算法';

$GLOBALS["lang"]['Algorithm'] = '算法';

$GLOBALS["lang"]['alias'] = '别名';

$GLOBALS["lang"]['Alias'] = '别名';

$GLOBALS["lang"]['All'] = '全体';

$GLOBALS["lang"]['All IPs'] = '所有实施伙伴';

$GLOBALS["lang"]['All Policies'] = '所有政策';

$GLOBALS["lang"]['All Queued Items'] = '所有排队项目';

$GLOBALS["lang"]['Amazon AWS Fields'] = '亚马逊AWS 字段';

$GLOBALS["lang"]['American Samoa'] = '美属萨摩亚';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '<code>基准标记.id</code>的数组.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '<code>devices.id </code>的数组.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '一个加密的JSON文档,根据<code>creditities.type</code>,包含所需的属性.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '说明本站所需服务水平.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '显示发现是否完成的内部领域.';

$GLOBALS["lang"]['An optional GeoCode'] = '可选的地理代码';

$GLOBALS["lang"]['An optional password to use sudo.'] = '使用 sudo 的可选密码 .';

$GLOBALS["lang"]['Andorra'] = '安道尔';

$GLOBALS["lang"]['Angola'] = '安哥拉';

$GLOBALS["lang"]['Anguilla'] = '安圭拉';

$GLOBALS["lang"]['Antarctica'] = '南极洲';

$GLOBALS["lang"]['AntiVirus'] = '抗病毒药';

$GLOBALS["lang"]['Antigua and Barbuda'] = '安提瓜和巴布达';

$GLOBALS["lang"]['Antivirus'] = '抗病毒药';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '您想要从此发现中排除任何 TCP 端口( 压缩、 无空格 ) 。 仅在使用Nmap 7+时可用.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '您想要从此发现中排除任何 UDP 端口( 压缩、 无空格 ) 。 仅在使用Nmap 7+时可用.';

$GLOBALS["lang"]['Any additional documentation you need.'] = '任何需要的额外文件.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '任何你想要补充的笔记.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = '任何设备在运行审计脚本( 如果设置) 时都会被指定给此 Org 。 链接到 <code>orgs.id </code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '如果设定, 任何已发现的设备都会被指定到此位置 。 链接到 <code>位置.id </code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '在运行审计脚本(如果设置)时,任何发现的设备都会被分配到此位置. 链接到 <code>位置.id </code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '如果设置, 任何发现的设备都将被指定给此 Org 。 如果没有设定,它们会被分配到此发现的<code>org_id</code>. 链接到 <code>orgs.id </code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '任何需要的过滤器。 注:当类型 = 流量时,这代表字体良好的图标.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '您想要测试的任何特定的 TCP 端口( 已连接, 无空格) .';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = '任何您想要测试的 UDP 特定端口( 已连接, 无空格 ) .';

$GLOBALS["lang"]['Application'] = '应用程序';

$GLOBALS["lang"]['application_id'] = '应用程序标识';

$GLOBALS["lang"]['Application ID'] = '应用程序标识';

$GLOBALS["lang"]['Application Licenses'] = '申请许可证';

$GLOBALS["lang"]['applications'] = '应用程序';

$GLOBALS["lang"]['Applications'] = '应用程序';

$GLOBALS["lang"]['applied'] = '应用';

$GLOBALS["lang"]['Applied'] = '应用';

$GLOBALS["lang"]['Approved'] = '核定数';

$GLOBALS["lang"]['April'] = '4月(半天会议)';

$GLOBALS["lang"]['architecture'] = '建筑';

$GLOBALS["lang"]['Architecture'] = '建筑';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '您确定要删除此输入项吗 ?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '您确定要删除此输出项吗 ?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '你确定吗? 这将删除所有队列条目,防止发现剩余的IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '你确定吗? 这将重置队列处理计数, 并可能导致服务器负载 .';

$GLOBALS["lang"]['area'] = '区域';

$GLOBALS["lang"]['Area'] = '区域';

$GLOBALS["lang"]['Argentina'] = '联合国';

$GLOBALS["lang"]['Armenia'] = '亚美尼亚';

$GLOBALS["lang"]['arp'] = '阿尔普';

$GLOBALS["lang"]['Arp'] = '阿尔普';

$GLOBALS["lang"]['Aruba'] = '阿鲁巴';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = '根据设备环境的属性. 生产、培训等.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = '已注册的收集器请选择执行此发现的地点 .';

$GLOBALS["lang"]['Ask me later'] = '以后再问我';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = '向社区寻求帮助或为他人提供答案.';

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

$GLOBALS["lang"]['Assign an Operator'] = '指定运算符';

$GLOBALS["lang"]['Assigned To'] = '被指派';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = '目前,我们可以使用netstat_ports,软件和用户.';

$GLOBALS["lang"]['attached_device_id'] = '附加设备标识';

$GLOBALS["lang"]['Attached Device ID'] = '附加设备标识';

$GLOBALS["lang"]['attached_to'] = '附着于';

$GLOBALS["lang"]['Attached To'] = '附着于';

$GLOBALS["lang"]['attachment'] = '附录';

$GLOBALS["lang"]['Attachment'] = '附录';

$GLOBALS["lang"]['attachments'] = '附录';

$GLOBALS["lang"]['Attachments'] = '附录';

$GLOBALS["lang"]['Attribute'] = '属性';

$GLOBALS["lang"]['attributes'] = '属性';

$GLOBALS["lang"]['Attributes'] = '属性';

$GLOBALS["lang"]['Audit'] = '审计';

$GLOBALS["lang"]['Audit AIX'] = '审计';

$GLOBALS["lang"]['Audit ESXi'] = '审计 ESXI';

$GLOBALS["lang"]['Audit Linux'] = '审计 Linux';

$GLOBALS["lang"]['audit_log'] = '审计日志';

$GLOBALS["lang"]['Audit Log'] = '审计日志';

$GLOBALS["lang"]['Audit My PC'] = '审计我的电脑';

$GLOBALS["lang"]['Audit OSX'] = '审计业务厅';

$GLOBALS["lang"]['Audit Result Input'] = '审计结果投入';

$GLOBALS["lang"]['Audit Status'] = '审计状况';

$GLOBALS["lang"]['Audit Windows'] = '审计窗口';

$GLOBALS["lang"]['Audit the Device'] = '审计设备';

$GLOBALS["lang"]['Audits'] = '审计';

$GLOBALS["lang"]['August'] = '8月(半天会议)';

$GLOBALS["lang"]['Australia'] = '澳大利亚';

$GLOBALS["lang"]['Austria'] = '奥地利';

$GLOBALS["lang"]['auth'] = '自动';

$GLOBALS["lang"]['Auth'] = '自动';

$GLOBALS["lang"]['Authentication Passphrase'] = '认证密码句';

$GLOBALS["lang"]['Auto'] = '自动';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = '由 Open-AudIT 服务器自动居住.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = '基于收集器OS自动配置.';

$GLOBALS["lang"]['availability'] = '可用性';

$GLOBALS["lang"]['Availability'] = '可用性';

$GLOBALS["lang"]['Azerbaijan'] = '阿塞拜疆';

$GLOBALS["lang"]['BTU Max'] = 'BTU 马克斯';

$GLOBALS["lang"]['BTU Total'] = 'BTU 共计';

$GLOBALS["lang"]['Backup'] = '备份';

$GLOBALS["lang"]['Bahamas the'] = '巴哈马';

$GLOBALS["lang"]['Bahrain'] = '巴林语';

$GLOBALS["lang"]['Bangladesh'] = '孟加拉国';

$GLOBALS["lang"]['bank'] = '银行';

$GLOBALS["lang"]['Bank'] = '银行';

$GLOBALS["lang"]['Banned'] = '被禁绝';

$GLOBALS["lang"]['bar_code'] = '条形码';

$GLOBALS["lang"]['Bar Code'] = '条形码';

$GLOBALS["lang"]['Barbados'] = '巴巴多斯';

$GLOBALS["lang"]['Base DN'] = '基础DNA';

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

$GLOBALS["lang"]['Basic'] = '基础';

$GLOBALS["lang"]['batch'] = '批次';

$GLOBALS["lang"]['Batch'] = '批次';

$GLOBALS["lang"]['Belarus'] = '白俄罗斯';

$GLOBALS["lang"]['Belgium'] = '比利时';

$GLOBALS["lang"]['Belize'] = '伯利兹';

$GLOBALS["lang"]['Benchmark'] = '基准';

$GLOBALS["lang"]['benchmark_id'] = '基准标识';

$GLOBALS["lang"]['Benchmark ID'] = '基准标识';

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

$GLOBALS["lang"]['Benin'] = '贝宁';

$GLOBALS["lang"]['Bermuda'] = '百慕大';

$GLOBALS["lang"]['best_practises'] = '最佳实践';

$GLOBALS["lang"]['Best Practises'] = '最佳实践';

$GLOBALS["lang"]['Bhutan'] = '不丹';

$GLOBALS["lang"]['bios'] = '生物';

$GLOBALS["lang"]['Bios'] = '生物';

$GLOBALS["lang"]['Bolivia'] = '玻利维亚';

$GLOBALS["lang"]['Boolean'] = '布尔';

$GLOBALS["lang"]['Boolean 1/0'] = '布尔 1/ 0';

$GLOBALS["lang"]['Boolean y/n'] = '布尔y/n';

$GLOBALS["lang"]['boot_device'] = '启动设备';

$GLOBALS["lang"]['Boot Device'] = '启动设备';

$GLOBALS["lang"]['bootable'] = '备忘';

$GLOBALS["lang"]['Bootable'] = '备忘';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = '波斯尼亚和黑塞哥维那';

$GLOBALS["lang"]['Botswana'] = '博茨瓦纳';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = '布韦特岛(布韦托亚)';

$GLOBALS["lang"]['Brazil'] = '联合国';

$GLOBALS["lang"]['Brazilian Portuguese'] = '巴西葡萄牙语';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '英属印度洋领土(查戈斯群岛)';

$GLOBALS["lang"]['British Virgin Islands'] = '英属维尔京群岛';

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

$GLOBALS["lang"]['Bulgaria'] = '保加利亚';

$GLOBALS["lang"]['Bulk Edit'] = '批量编辑';

$GLOBALS["lang"]['Burkina Faso'] = '布基纳法索';

$GLOBALS["lang"]['Burundi'] = '布隆迪';

$GLOBALS["lang"]['business_requirements'] = '业务要求';

$GLOBALS["lang"]['Business Requirements'] = '业务要求';

$GLOBALS["lang"]['Buy'] = '买';

$GLOBALS["lang"]['Buy More'] = '买更多';

$GLOBALS["lang"]['By'] = '以';

$GLOBALS["lang"]['CIDR'] = 'CIDR 数据交换中心';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR 数据交换中心 遮罩';

$GLOBALS["lang"]['cli_config'] = '国 际 配置';

$GLOBALS["lang"]['CLI Config'] = '国 际 配置';

$GLOBALS["lang"]['CPU'] = 'CPU 软件';

$GLOBALS["lang"]['CPUs'] = 'CPU 组合';

$GLOBALS["lang"]['CSV'] = '简历';

$GLOBALS["lang"]['Calculated from discovery.'] = '从发现中计算出来.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = '计算了此网络的有效IP地址总数 .';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '完成时计算出执行此项目所需的时间 .';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '当集成运行时计算,并包含该集成中设备的JSON表示. 每个链接到<code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '合并运行时计算,并包含该合并地点的JSON代表。 每一个链接到<code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '当集成运行时计算,并包含从Open-AudIT中选择的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '当集成运行时进行计算,并包含选择外部系统的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '当集成运行时计算,并包含外部系统中要更新的设备数量.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '当集成运行时计算,并包含在Open-AudIT中更新的设备数量.';

$GLOBALS["lang"]['Cambodia'] = '柬埔寨';

$GLOBALS["lang"]['Cameroon'] = '喀麦隆';

$GLOBALS["lang"]['Campus Area Network'] = '校园区域网';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = '可以是<code>活动</code>,<code>被动</code>或空白.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = '可以是<code>application</code>,<code>compute</code>,<code>数据库</code>,<code>存储</code>,<code>虚拟化</code>,<code>web</code>,<code>其他</code>或空白.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = '可以是<code>auto</code>,<code>固定</code>,<code>其他</code>或空白.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = '可以是<code>高可用性</code>,<code>负载平衡</code>,<code>性能</code>,<code>存储</code>,<code>其他</code>或空白.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = '可以是<code>line</code>,<code>pie</code>或<code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = '可以是<code>用户</code>或<code>收集 </code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = '可以通过发现或用户设定.';

$GLOBALS["lang"]['Can the user edit this item.'] = '用户能否编辑此项目 .';

$GLOBALS["lang"]['Canada'] = '加拿大';

$GLOBALS["lang"]['Cancel'] = '取消';

$GLOBALS["lang"]['capabilities'] = '能力';

$GLOBALS["lang"]['Capabilities'] = '能力';

$GLOBALS["lang"]['Capacity'] = '能力';

$GLOBALS["lang"]['Cape Verde'] = '佛得角';

$GLOBALS["lang"]['Capitalise'] = '大写';

$GLOBALS["lang"]['caption'] = '说明';

$GLOBALS["lang"]['Caption'] = '说明';

$GLOBALS["lang"]['Cayman Islands'] = '开曼群岛';

$GLOBALS["lang"]['Cellular Details'] = '手机细节';

$GLOBALS["lang"]['Central African Republic'] = '中非共和国';

$GLOBALS["lang"]['certificate'] = '证书';

$GLOBALS["lang"]['Certificate'] = '证书';

$GLOBALS["lang"]['certificates'] = '证书';

$GLOBALS["lang"]['Certificates'] = '证书';

$GLOBALS["lang"]['Chad'] = '乍得';

$GLOBALS["lang"]['change_id'] = '更改标识';

$GLOBALS["lang"]['Change ID'] = '更改标识';

$GLOBALS["lang"]['change_log'] = '更改日志';

$GLOBALS["lang"]['Change Log'] = '更改日志';

$GLOBALS["lang"]['change_type'] = '更改类型';

$GLOBALS["lang"]['Change Type'] = '更改类型';

$GLOBALS["lang"]['chart'] = '图表';

$GLOBALS["lang"]['Chart'] = '图表';

$GLOBALS["lang"]['check_minutes'] = '检查分钟';

$GLOBALS["lang"]['Check Minutes'] = '检查分钟';

$GLOBALS["lang"]['Check for SSH on these ports'] = '检查这些端口的 SSH';

$GLOBALS["lang"]['Check this port for any SSH service.'] = '检查此端口是否为 SSH 服务 .';

$GLOBALS["lang"]['Chile'] = '地址';

$GLOBALS["lang"]['China'] = '中国';

$GLOBALS["lang"]['Choose'] = '选择';

$GLOBALS["lang"]['Choose (select OS first)'] = '选择( 先选择 OS)';

$GLOBALS["lang"]['Choose a Device'] = '选择设备';

$GLOBALS["lang"]['Choose a Table'] = '选择表格';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = '单击删除按钮从 Open-AudIT 中删除示例设备。 <br> 这将从数据库中删除以下设备 .';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '单击下面的导入按钮,将 Open-AudIT 添加到示例设备数据中.';

$GLOBALS["lang"]['Client ID'] = '客户身份';

$GLOBALS["lang"]['client_ident'] = '客户端标识';

$GLOBALS["lang"]['Client Ident'] = '客户端标识';

$GLOBALS["lang"]['client_secret'] = '客户端机密';

$GLOBALS["lang"]['Client Secret'] = '客户端机密';

$GLOBALS["lang"]['client_site_name'] = '客户端网站名称';

$GLOBALS["lang"]['Client Site Name'] = '客户端网站名称';

$GLOBALS["lang"]['Close'] = '关闭';

$GLOBALS["lang"]['Cloud'] = '云头';

$GLOBALS["lang"]['Cloud Details'] = '云层细节';

$GLOBALS["lang"]['Cloud Discovery'] = '云发现';

$GLOBALS["lang"]['cloud_id'] = '云号';

$GLOBALS["lang"]['Cloud ID'] = '云号';

$GLOBALS["lang"]['cloud_log'] = '云日志';

$GLOBALS["lang"]['Cloud Log'] = '云日志';

$GLOBALS["lang"]['cloud_name'] = '云名称';

$GLOBALS["lang"]['Cloud Name'] = '云名称';

$GLOBALS["lang"]['Cloud Network'] = '云层网络';

$GLOBALS["lang"]['clouds'] = '云层';

$GLOBALS["lang"]['Clouds'] = '云层';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = '科科斯(基林)群岛';

$GLOBALS["lang"]['Collector'] = '收集器';

$GLOBALS["lang"]['Collector (UUID)'] = '收集器( UUID)';

$GLOBALS["lang"]['Collector Name'] = '收藏者名称';

$GLOBALS["lang"]['collector_uuid'] = '收集器Uuid';

$GLOBALS["lang"]['Collector Uuid'] = '收集器Uuid';

$GLOBALS["lang"]['collectors'] = '收集器';

$GLOBALS["lang"]['Collectors'] = '收集器';

$GLOBALS["lang"]['Colombia'] = '哥伦比亚';

$GLOBALS["lang"]['color'] = '颜色';

$GLOBALS["lang"]['Color'] = '颜色';

$GLOBALS["lang"]['column'] = '栏';

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

$GLOBALS["lang"]['comments'] = '评论';

$GLOBALS["lang"]['Comments'] = '评论';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = '一般称为客户端Id.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = '一般称为客户端Secret.';

$GLOBALS["lang"]['Community'] = '社区';

$GLOBALS["lang"]['Community Questions'] = '社区问题';

$GLOBALS["lang"]['Community String'] = '社区字符串';

$GLOBALS["lang"]['Comoros the'] = '科摩罗';

$GLOBALS["lang"]['Compact'] = '压缩';

$GLOBALS["lang"]['Component Table'] = '构成部分表';

$GLOBALS["lang"]['Components (All Devices)'] = '组件( 所有设备)';

$GLOBALS["lang"]['Compute'] = '计算';

$GLOBALS["lang"]['Condition'] = '条件';

$GLOBALS["lang"]['config'] = '配置';

$GLOBALS["lang"]['Config'] = '配置';

$GLOBALS["lang"]['Config Default, currently '] = '配置默认值, 目前';

$GLOBALS["lang"]['config_file'] = '配置文件';

$GLOBALS["lang"]['Config File'] = '配置文件';

$GLOBALS["lang"]['config_manager_error_code'] = '配置管理器错误代码';

$GLOBALS["lang"]['Config Manager Error Code'] = '配置管理器错误代码';

$GLOBALS["lang"]['configuration'] = '配置';

$GLOBALS["lang"]['Configuration'] = '配置';

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

$GLOBALS["lang"]['contact'] = '联系人';

$GLOBALS["lang"]['Contact'] = '联系人';

$GLOBALS["lang"]['contact_name'] = '联系人名称';

$GLOBALS["lang"]['Contact Name'] = '联系人名称';

$GLOBALS["lang"]['contained_in'] = '包含在';

$GLOBALS["lang"]['Contained In'] = '包含在';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = '包含一个 JSON 对象,详细列出相关的部件及其位置 .';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = '包含决定我们是否应使用 ssh, snmp 和 wmi 发现选项的字段 。 一个JSON对象.';

$GLOBALS["lang"]['Context Engine ID'] = '背景引擎标识';

$GLOBALS["lang"]['Context Name'] = '上下文名称';

$GLOBALS["lang"]['contractual_obligations'] = '合同义务';

$GLOBALS["lang"]['Contractual Obligations'] = '合同义务';

$GLOBALS["lang"]['Cook Islands'] = '库克群岛';

$GLOBALS["lang"]['Copy and paste an audit result'] = '复制并粘贴审计结果';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '复制并粘贴到论坛、 Open-AudIT 或您需要提供该项目的任何地方.';

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

$GLOBALS["lang"]['Create Geocode'] = '创建地理代码';

$GLOBALS["lang"]['create_internal_count'] = '创建内部计数';

$GLOBALS["lang"]['Create Internal Count'] = '创建内部计数';

$GLOBALS["lang"]['create_internal_from_external'] = '从外部创建内部';

$GLOBALS["lang"]['Create Internal From External'] = '从外部创建内部';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = '从 Open-AudIT 创建 NSIS 设备';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = '创建 Open-AudIT 设备从';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = '创建 Open-AudIT NMIS 设备';

$GLOBALS["lang"]['created_at'] = '创建时间';

$GLOBALS["lang"]['Created At'] = '创建时间';

$GLOBALS["lang"]['created_by'] = '创建者';

$GLOBALS["lang"]['Created By'] = '创建者';

$GLOBALS["lang"]['created_date'] = '创建日期';

$GLOBALS["lang"]['Created Date'] = '创建日期';

$GLOBALS["lang"]['Creating'] = '创建';

$GLOBALS["lang"]['creator'] = '创建者';

$GLOBALS["lang"]['Creator'] = '创建者';

$GLOBALS["lang"]['credential'] = '证书';

$GLOBALS["lang"]['Credential'] = '证书';

$GLOBALS["lang"]['credentials'] = '全权证书';

$GLOBALS["lang"]['Credentials'] = '全权证书';

$GLOBALS["lang"]['Croatia'] = '克罗地亚';

$GLOBALS["lang"]['Cuba'] = '古巴';

$GLOBALS["lang"]['current'] = '当前';

$GLOBALS["lang"]['Current'] = '当前';

$GLOBALS["lang"]['Current Discovery Processes'] = '当前发现进程';

$GLOBALS["lang"]['Current date & time is '] = '当前日期和时间是( T)';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = '目前支持的类型有:<code>snmp</code>,<code>snmp_v3</code>,<code>ssh</code>,<code>ssh_key</code>或<code>窗口</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = '自定义 TCP 端口';

$GLOBALS["lang"]['Custom UDP Ports'] = '自定义 UDP 港口';

$GLOBALS["lang"]['Cyprus'] = '塞浦路斯';

$GLOBALS["lang"]['Czech'] = '捷克语';

$GLOBALS["lang"]['Czech Republic'] = '捷克共和国';

$GLOBALS["lang"]['DHCP'] = 'DHCP 人权方案';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN 账户( 可选)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN 密码( 可选)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS 东帝汶国防军';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS 主机名';

$GLOBALS["lang"]['dashboard_id'] = '盘式识别码';

$GLOBALS["lang"]['Dashboard ID'] = '盘式识别码';

$GLOBALS["lang"]['dashboards'] = '电线板';

$GLOBALS["lang"]['Dashboards'] = '电线板';

$GLOBALS["lang"]['Database'] = '数据库';

$GLOBALS["lang"]['db_action'] = '数据库动作';

$GLOBALS["lang"]['Database Action'] = '数据库动作';

$GLOBALS["lang"]['db_column'] = '数据库列';

$GLOBALS["lang"]['Database Column'] = '数据库列';

$GLOBALS["lang"]['Database Definition'] = '数据库定义';

$GLOBALS["lang"]['db_row'] = '数据库行';

$GLOBALS["lang"]['Database Row'] = '数据库行';

$GLOBALS["lang"]['Database Schema'] = '数据库Schema';

$GLOBALS["lang"]['db_table'] = '数据库表';

$GLOBALS["lang"]['Database Table'] = '数据库表';

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

$GLOBALS["lang"]['December'] = '12月(半天)';

$GLOBALS["lang"]['Default'] = '默认';

$GLOBALS["lang"]['Default Items'] = '默认项目';

$GLOBALS["lang"]['Default Value'] = '默认值';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '默认389。 通常636用于活动目录LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'LDAP 和活动目录的<code>3</code>的默认值.';

$GLOBALS["lang"]['delay_minutes'] = '延迟分钟';

$GLOBALS["lang"]['Delay Minutes'] = '延迟分钟';

$GLOBALS["lang"]['Delete'] = '删除';

$GLOBALS["lang"]['Delete Example Devices'] = '删除示例设备';

$GLOBALS["lang"]['delete_external_from_internal'] = '从内部删除外部';

$GLOBALS["lang"]['Delete External From Internal'] = '从内部删除外部';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = '删除 NMIS 如果没有在 Open-AudIT 中安装设备';

$GLOBALS["lang"]['Delete from Application'] = '删除应用程序';

$GLOBALS["lang"]['Delete from Cluster'] = '从集群删除';

$GLOBALS["lang"]['deleted_at'] = '删除时间';

$GLOBALS["lang"]['Deleted At'] = '删除时间';

$GLOBALS["lang"]['Denmark'] = '丹麦';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = '由审计衍生或用户手动设定.';

$GLOBALS["lang"]['Derived by audit.'] = '由审计衍生.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = '衍生自<code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = '衍生自<code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = '来源于收集器的发现.';

$GLOBALS["lang"]['Derived from OS Name.'] = '衍生自OS名称.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = '衍生自云发现.';

$GLOBALS["lang"]['Derived from device audits.'] = '来自设备审计.';

$GLOBALS["lang"]['Derived from device type and OS.'] = '衍生自设备类型和OS.';

$GLOBALS["lang"]['Derived from discovery.'] = '来源于发现.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = '从主机名, sysName, dns hostname 和 IP 按此顺序衍生.';

$GLOBALS["lang"]['Derived from the integer severity.'] = '由整数严重性衍生出来.';

$GLOBALS["lang"]['description'] = '说明';

$GLOBALS["lang"]['Description'] = '说明';

$GLOBALS["lang"]['destination'] = '目标';

$GLOBALS["lang"]['Destination'] = '目标';

$GLOBALS["lang"]['detail'] = '细节';

$GLOBALS["lang"]['Detail'] = '细节';

$GLOBALS["lang"]['Details'] = '细节';

$GLOBALS["lang"]['details'] = '细节';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '关于谁通常在这个网站可以接触的细节.';

$GLOBALS["lang"]['device'] = '设备';

$GLOBALS["lang"]['Device'] = '设备';

$GLOBALS["lang"]['Device Audits'] = '设备审计';

$GLOBALS["lang"]['device_id'] = '设备标识';

$GLOBALS["lang"]['Device ID'] = '设备标识';

$GLOBALS["lang"]['device_id_a'] = '设备 ID A';

$GLOBALS["lang"]['Device ID A'] = '设备 ID A';

$GLOBALS["lang"]['device_id_b'] = '设备 ID B';

$GLOBALS["lang"]['Device ID B'] = '设备 ID B';

$GLOBALS["lang"]['Device Name'] = '设备名称';

$GLOBALS["lang"]['Device Result'] = '设备结果';

$GLOBALS["lang"]['Device Results'] = '设备结果';

$GLOBALS["lang"]['Device Seed'] = '设备种子';

$GLOBALS["lang"]['Device Seed IP'] = '设备种子 IP';

$GLOBALS["lang"]['Device Status'] = '设备状态';

$GLOBALS["lang"]['Device Types'] = '设备类型';

$GLOBALS["lang"]['Device is in the Subnet'] = '设备在子网';

$GLOBALS["lang"]['Devices'] = '设备';

$GLOBALS["lang"]['devices_assigned_to_location'] = '设备指定到位置';

$GLOBALS["lang"]['Devices Assigned To Location'] = '设备指定到位置';

$GLOBALS["lang"]['devices_assigned_to_org'] = '指定给 Org 的设备';

$GLOBALS["lang"]['Devices Assigned To Org'] = '指定给 Org 的设备';

$GLOBALS["lang"]['Devices Audited'] = '已审计设备';

$GLOBALS["lang"]['Devices Created in '] = '创建于';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = '在 Open-AudIT 中创建的设备';

$GLOBALS["lang"]['devices_default_display_columns'] = '设备默认显示列';

$GLOBALS["lang"]['Devices Default Display Columns'] = '设备默认显示列';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '设备找到最后7天';

$GLOBALS["lang"]['Devices Found Today'] = '今天找到的设备';

$GLOBALS["lang"]['Devices Found Yesterday'] = '昨天找到的设备';

$GLOBALS["lang"]['Devices Not Audited'] = '未审计的设备';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '未见设备 30 天';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '未见设备 7 天';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '未见设备 90 天';

$GLOBALS["lang"]['Devices Retrieved via API'] = '通过 API 获取的设备';

$GLOBALS["lang"]['Devices Selected from '] = '从选中的设备';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = '从 Open-AudIT 中选择的设备';

$GLOBALS["lang"]['Devices Updated in '] = '设备更新于';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = '在 Open-AudIT 中更新的设备';

$GLOBALS["lang"]['Devices are being benchmarked.'] = '设备正在基准化.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = '设备没有设定基准 .';

$GLOBALS["lang"]['Devices could be benchmarked.'] = '设备可以设定基准 .';

$GLOBALS["lang"]['Devices in Running State'] = '运行状态中的设备';

$GLOBALS["lang"]['Devices in Stopped State'] = '停止状态中的设备';

$GLOBALS["lang"]['Devices in this'] = '此设备';

$GLOBALS["lang"]['Devired from type or OS.'] = '从类型或OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp 启用';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp 启用';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp 租赁期满';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp 租赁期满';

$GLOBALS["lang"]['dhcp_lease_obtained'] = '租赁';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = '租赁';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp 服务器';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp 服务器';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = '命令是否成功完成并返回预期数据 .';

$GLOBALS["lang"]['direction'] = '方向';

$GLOBALS["lang"]['Direction'] = '方向';

$GLOBALS["lang"]['directory'] = '目录';

$GLOBALS["lang"]['Directory'] = '目录';

$GLOBALS["lang"]['disabled'] = '已禁用';

$GLOBALS["lang"]['Disabled'] = '已禁用';

$GLOBALS["lang"]['discard'] = '丢弃';

$GLOBALS["lang"]['Discard'] = '丢弃';

$GLOBALS["lang"]['Discover'] = '发现';

$GLOBALS["lang"]['discoveries'] = '发现';

$GLOBALS["lang"]['Discoveries'] = '发现';

$GLOBALS["lang"]['Discovery'] = '发现';

$GLOBALS["lang"]['discovery_id'] = '发现身份';

$GLOBALS["lang"]['Discovery ID'] = '发现身份';

$GLOBALS["lang"]['Discovery Issues'] = '发现问题';

$GLOBALS["lang"]['discovery_log'] = '发现日志';

$GLOBALS["lang"]['Discovery Log'] = '发现日志';

$GLOBALS["lang"]['Discovery Name'] = '发现名称';

$GLOBALS["lang"]['Discovery Options'] = '发现选项';

$GLOBALS["lang"]['Discovery Queue Count'] = '发现队列计数';

$GLOBALS["lang"]['Discovery Queue Limit'] = '发现队列限制';

$GLOBALS["lang"]['discovery_run'] = '发现运行';

$GLOBALS["lang"]['Discovery Run'] = '发现运行';

$GLOBALS["lang"]['discovery_scan_options'] = '发现扫描选项';

$GLOBALS["lang"]['Discovery Scan Options'] = '发现扫描选项';

$GLOBALS["lang"]['disk'] = '磁盘';

$GLOBALS["lang"]['Disk'] = '磁盘';

$GLOBALS["lang"]['Display in Menu'] = '在菜单中显示';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = '不要扫描这些 TCP 端口 .';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = '不要扫描这些 UDP 端口 .';

$GLOBALS["lang"]['Do not show me again'] = '别再给我看';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '您想要使用安全运输( LDAPS) 或普通的未加密的 LDAP .';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '您是否想要看到左侧的标准边栏 .';

$GLOBALS["lang"]['documentation'] = '文档';

$GLOBALS["lang"]['Documentation'] = '文档';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = '许可证是否适用于儿童兽人.';

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

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = '别牵我的手,我知道我在干嘛 没有过滤器和加入自定义表格的能力 .';

$GLOBALS["lang"]['Download'] = '下载';

$GLOBALS["lang"]['Download a file from URL'] = '从 URL 下载文件';

$GLOBALS["lang"]['driver'] = '驱动程序';

$GLOBALS["lang"]['Driver'] = '驱动程序';

$GLOBALS["lang"]['duplex'] = '双面';

$GLOBALS["lang"]['Duplex'] = '双面';

$GLOBALS["lang"]['duration'] = '会期';

$GLOBALS["lang"]['Duration'] = '会期';

$GLOBALS["lang"]['ESXi'] = '欧西';

$GLOBALS["lang"]['EULA'] = '欧盟LA';

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

$GLOBALS["lang"]['El Salvador'] = '萨尔瓦多';

$GLOBALS["lang"]['email'] = '电子邮件';

$GLOBALS["lang"]['Email'] = '电子邮件';

$GLOBALS["lang"]['email_address'] = '电子邮件地址';

$GLOBALS["lang"]['Email Address'] = '电子邮件地址';

$GLOBALS["lang"]['Email to send test to'] = '发送测试的电子邮件';

$GLOBALS["lang"]['Enable'] = '启用';

$GLOBALS["lang"]['enabled'] = '已启用';

$GLOBALS["lang"]['Enabled'] = '已启用';

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

$GLOBALS["lang"]['English'] = '联合国';

$GLOBALS["lang"]['enterprise'] = '企业';

$GLOBALS["lang"]['Enterprise'] = '企业';

$GLOBALS["lang"]['Enterprise Private Network'] = '企业私营网络';

$GLOBALS["lang"]['Entitlement Type'] = '应享权利类型';

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

$GLOBALS["lang"]['Estonia'] = '爱沙尼亚';

$GLOBALS["lang"]['Ethernet MAC'] = '以太网MAC';

$GLOBALS["lang"]['ethernet_mac'] = '以太网麦克';

$GLOBALS["lang"]['Ethernet Mac'] = '以太网麦克';

$GLOBALS["lang"]['Ethiopia'] = '埃塞俄比亚';

$GLOBALS["lang"]['Every'] = '每个';

$GLOBALS["lang"]['Every Day'] = '每天都会';

$GLOBALS["lang"]['Exceptions'] = '例外';

$GLOBALS["lang"]['exclude'] = '不包括';

$GLOBALS["lang"]['Exclude'] = '不包括';

$GLOBALS["lang"]['exclude_ip'] = '不包括 IP';

$GLOBALS["lang"]['Exclude IP'] = '不包括 IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = '排除 IP 地址';

$GLOBALS["lang"]['Exclude TCP Ports'] = '不包括 TCP 端口';

$GLOBALS["lang"]['exclude_tcp_ports'] = '不包括 Tcp 端口';

$GLOBALS["lang"]['Exclude Tcp Ports'] = '不包括 Tcp 端口';

$GLOBALS["lang"]['Exclude UDP Ports'] = '不包括 UDP 端口';

$GLOBALS["lang"]['exclude_udp_ports'] = '不包括 Udp 端口';

$GLOBALS["lang"]['Exclude Udp Ports'] = '不包括 Udp 端口';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = '排除这些IP地址进行Nmap扫描.';

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

$GLOBALS["lang"]['expire_minutes'] = '过期分钟';

$GLOBALS["lang"]['Expire Minutes'] = '过期分钟';

$GLOBALS["lang"]['expiry_date'] = '过期日期';

$GLOBALS["lang"]['Expiry Date'] = '过期日期';

$GLOBALS["lang"]['Export CSV'] = '导出 CSV';

$GLOBALS["lang"]['Export JSON'] = '导出 JSON';

$GLOBALS["lang"]['Export by Device'] = '通过设备导出';

$GLOBALS["lang"]['Export by Policy'] = '按政策导出';

$GLOBALS["lang"]['Export data to'] = '导出数据到';

$GLOBALS["lang"]['expose'] = '曝光';

$GLOBALS["lang"]['Expose'] = '曝光';

$GLOBALS["lang"]['External'] = '外部';

$GLOBALS["lang"]['External Field Name'] = '外部字段名称';

$GLOBALS["lang"]['External Field Type'] = '外部字段类型';

$GLOBALS["lang"]['external_ident'] = '外部标识';

$GLOBALS["lang"]['External Ident'] = '外部标识';

$GLOBALS["lang"]['external_link'] = '外部链接';

$GLOBALS["lang"]['External Link'] = '外部链接';

$GLOBALS["lang"]['extra_columns'] = '额外列';

$GLOBALS["lang"]['Extra Columns'] = '额外列';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = '额外的和更多的动词记录生成用于排除故障.';

$GLOBALS["lang"]['FQDN'] = '东帝汶国防军';

$GLOBALS["lang"]['FW Revision'] = 'FW 修订';

$GLOBALS["lang"]['factories'] = '工厂';

$GLOBALS["lang"]['Factories'] = '工厂';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = '斐济、斐济群岛';

$GLOBALS["lang"]['file'] = '文件';

$GLOBALS["lang"]['File'] = '文件';

$GLOBALS["lang"]['File Import'] = '文件导入';

$GLOBALS["lang"]['File Input'] = '文件输入';

$GLOBALS["lang"]['file_name'] = '文件名称';

$GLOBALS["lang"]['File Name'] = '文件名称';

$GLOBALS["lang"]['file_size'] = '文件大小';

$GLOBALS["lang"]['File Size'] = '文件大小';

$GLOBALS["lang"]['filename'] = '文件名';

$GLOBALS["lang"]['Filename'] = '文件名';

$GLOBALS["lang"]['files'] = '文件';

$GLOBALS["lang"]['Files'] = '文件';

$GLOBALS["lang"]['files_id'] = '文件编号';

$GLOBALS["lang"]['Files ID'] = '文件编号';

$GLOBALS["lang"]['filtered'] = '过滤';

$GLOBALS["lang"]['Filtered'] = '过滤';

$GLOBALS["lang"]['Finland'] = '芬兰';

$GLOBALS["lang"]['Firewall'] = '防火墙';

$GLOBALS["lang"]['firewall_rule'] = '防火墙规则';

$GLOBALS["lang"]['Firewall Rule'] = '防火墙规则';

$GLOBALS["lang"]['firmware'] = '固件';

$GLOBALS["lang"]['Firmware'] = '固件';

$GLOBALS["lang"]['firmware_revision'] = '固件修订';

$GLOBALS["lang"]['Firmware Revision'] = '固件修订';

$GLOBALS["lang"]['first_run'] = '第一个运行';

$GLOBALS["lang"]['First Run'] = '第一个运行';

$GLOBALS["lang"]['first_seen'] = '第一次见到';

$GLOBALS["lang"]['First Seen'] = '第一次见到';

$GLOBALS["lang"]['FirstWave'] = '第一条';

$GLOBALS["lang"]['Fix'] = '修补';

$GLOBALS["lang"]['Fixed'] = '固定';

$GLOBALS["lang"]['Floor'] = '楼层';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '跟踪下面的任何链接并发现如何使用 Open-AudIT 查找 <b> 您的网络上有什么?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = '对于种子发现,我是否应该只在私人IP地址空间中发现IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = '对于种子的发现,我是否只 发现IP在选定的子网.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '对于种子的发现, 我应该在运行 发现之前打开子网.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = '用于原始 SQL 查询的高级条目 。 根据查询,您必须在您的 SQL 中包含 <code> WHERE @ filter and <code> .';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = '对于不是永久的许可证,许可证何时到期.';

$GLOBALS["lang"]['form_factor'] = '窗体因子';

$GLOBALS["lang"]['Form Factor'] = '窗体因子';

$GLOBALS["lang"]['format'] = '格式';

$GLOBALS["lang"]['Format'] = '格式';

$GLOBALS["lang"]['fqdn'] = '弗克当';

$GLOBALS["lang"]['Fqdn'] = '弗克当';

$GLOBALS["lang"]['France, French Republic'] = '法国、法兰西共和国';

$GLOBALS["lang"]['free'] = '免费';

$GLOBALS["lang"]['Free'] = '免费';

$GLOBALS["lang"]['free_percent'] = '免费百分比';

$GLOBALS["lang"]['Free Percent'] = '免费百分比';

$GLOBALS["lang"]['French'] = '法语';

$GLOBALS["lang"]['French Guiana'] = '法属圭亚那';

$GLOBALS["lang"]['French Polynesia'] = '法属波利尼西亚';

$GLOBALS["lang"]['French Southern Territories'] = '法国南部领地';

$GLOBALS["lang"]['Frequently Asked Questions'] = '经常问的问题';

$GLOBALS["lang"]['Friday'] = '星期五';

$GLOBALS["lang"]['From 100 Devices'] = '来自100个设备';

$GLOBALS["lang"]['From 500 Devices'] = '从500个设备';

$GLOBALS["lang"]['full_name'] = '完整名称';

$GLOBALS["lang"]['Full Name'] = '完整名称';

$GLOBALS["lang"]['function'] = '函数';

$GLOBALS["lang"]['Function'] = '函数';

$GLOBALS["lang"]['GROUP BY'] = '集团';

$GLOBALS["lang"]['Gabon'] = '加蓬';

$GLOBALS["lang"]['Gambia the'] = '冈比亚';

$GLOBALS["lang"]['gateway'] = '网关';

$GLOBALS["lang"]['Gateway'] = '网关';

$GLOBALS["lang"]['gateways'] = '网关';

$GLOBALS["lang"]['Gateways'] = '网关';

$GLOBALS["lang"]['Generated By'] = '生成者';

$GLOBALS["lang"]['geo'] = '地理';

$GLOBALS["lang"]['Geo'] = '地理';

$GLOBALS["lang"]['Georgia'] = '格鲁吉亚';

$GLOBALS["lang"]['German'] = '德语';

$GLOBALS["lang"]['Germany'] = '德国';

$GLOBALS["lang"]['Get Lat/Long'] = '获取 Lat/ 长';

$GLOBALS["lang"]['Get Started'] = '开始';

$GLOBALS["lang"]['Get a Free License'] = '获取自由许可证';

$GLOBALS["lang"]['Getting Started'] = '开始';

$GLOBALS["lang"]['Ghana'] = '加纳';

$GLOBALS["lang"]['Gibraltar'] = '直布罗陀';

$GLOBALS["lang"]['Go'] = '走开';

$GLOBALS["lang"]['Google Compute Fields'] = '谷歌计算字段';

$GLOBALS["lang"]['graph'] = '图';

$GLOBALS["lang"]['Graph'] = '图';

$GLOBALS["lang"]['Greater Than'] = '超过';

$GLOBALS["lang"]['Greater Than or Equals'] = '大于等于数';

$GLOBALS["lang"]['Greece'] = '希腊';

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

$GLOBALS["lang"]['hardware_revision'] = '硬件修订';

$GLOBALS["lang"]['Hardware Revision'] = '硬件修订';

$GLOBALS["lang"]['hash'] = '哈许';

$GLOBALS["lang"]['Hash'] = '哈许';

$GLOBALS["lang"]['Head'] = '头';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = '霍德岛和麦当劳群岛';

$GLOBALS["lang"]['height'] = '高度';

$GLOBALS["lang"]['Height'] = '高度';

$GLOBALS["lang"]['Height in RU'] = '在 RU 中的高度';

$GLOBALS["lang"]['Help'] = '帮助';

$GLOBALS["lang"]['High'] = '高级';

$GLOBALS["lang"]['High Availability'] = '高可用性';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '罗马教廷(瓦蒂坎州)';

$GLOBALS["lang"]['home'] = '页 次';

$GLOBALS["lang"]['Home'] = '页 次';

$GLOBALS["lang"]['Home Area Network'] = '家园区域网';

$GLOBALS["lang"]['Honduras'] = '洪都拉斯';

$GLOBALS["lang"]['Hong Kong'] = '香港';

$GLOBALS["lang"]['host'] = '东道主';

$GLOBALS["lang"]['Host'] = '东道主';

$GLOBALS["lang"]['hostname'] = '主机名';

$GLOBALS["lang"]['Hostname'] = '主机名';

$GLOBALS["lang"]['hour'] = '小时';

$GLOBALS["lang"]['Hour'] = '小时';

$GLOBALS["lang"]['How long did the command take to execute.'] = '命令执行需要多长时间.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Nmap应该等待多久 每个设备的反应.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = '这个架子有多少个电路.';

$GLOBALS["lang"]['How many policies results in a fail.'] = '有多少政策导致失败.';

$GLOBALS["lang"]['How many policies results in a pass.'] = '有多少政策取得了成功.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = '这个架子有多少个电源插座.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = '高处有多少架子是这个架子.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = '收藏家应该多久向服务器询问一个任务.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = '我们应该如何选择要集成的设备(使用属性、查询或组).';

$GLOBALS["lang"]['How to compare'] = '如何比较';

$GLOBALS["lang"]['Hungary'] = '匈牙利';

$GLOBALS["lang"]['hyperthreading'] = '超线程';

$GLOBALS["lang"]['Hyperthreading'] = '超线程';

$GLOBALS["lang"]['id'] = '身份证';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = '若为';

$GLOBALS["lang"]['IOS Version'] = 'IOS 版本';

$GLOBALS["lang"]['ip'] = '执行伙伴';

$GLOBALS["lang"]['IP'] = '执行伙伴';

$GLOBALS["lang"]['IP Address'] = 'IP 地址';

$GLOBALS["lang"]['IP Addresses'] = 'IP 地址';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 最后一个视图';

$GLOBALS["lang"]['IP Set By'] = 'IP 设置为';

$GLOBALS["lang"]['Iceland'] = '冰岛';

$GLOBALS["lang"]['icon'] = '图标';

$GLOBALS["lang"]['Icon'] = '图标';

$GLOBALS["lang"]['Icon and Text'] = '图标和文本';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = '只有图标,只有文本或图标和文本.';

$GLOBALS["lang"]['id_internal'] = '内部';

$GLOBALS["lang"]['Id Internal'] = '内部';

$GLOBALS["lang"]['id_number'] = '编号';

$GLOBALS["lang"]['Id Number'] = '编号';

$GLOBALS["lang"]['identification'] = '鉴定';

$GLOBALS["lang"]['Identification'] = '鉴定';

$GLOBALS["lang"]['If'] = '若为';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = '如果一个端口用过滤器响应,我们是否认为它可用.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = '如果一个端口有被打开的过滤器响应, 我们是否认为它可用 .';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = '如果在Open-AudIT所选设备中不存在远程设备,我们是否应该从外部系统中删除.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = '如果 Open-AudIT 设备已被更改, 我们是否应该更新外部系统 .';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = '如果一个 Open-AudIT 设备不在外部系统中,我们是否应该创建它.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = '如果代理报称其主IP在此子网中,则执行动作.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = '如果检测到任何这些( 压缩、 无空格 ) 端口, 假设 SSH 运行在端口上, 并将其用于审计 。 不需要将此端口添加到自定义 TCP 端口 - 它将自动添加 .';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '如果设定了, 则持有一个 JSON 阵列, 由该用户选择查看的特定设备列组成, 但配置默认值除外 .';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = '如果代理 OS 家族( 大小写不敏感) 包含此字符串, 请执行动作 .';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '如果满足下列条件:<br><ul><li>a 角色指定了 ad_ group </li><li> a Org 指定了一个 ad_ group </li><li> an LDAP 数据 服务器在 LDAP (无论是活动目录还是 OpenLDAP) 中已使用设置为 y </li><li> 的 roles 用户, 并且处于指定的 ad_ groups </li></ ul > 中 该用户无需在 Open-AudIT 中创建账户即可登录到 Open-AudIT 。 Open-AudIT将查询相关LDAP,如果用户属于需要的组,但不属于Open-AudIT,其Open-AudIT内部的用户属性(名称,全名,电子邮件,角色,orgs等)将自动被覆盖并登录. <br> <br>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = '如果登录到 Open-AudIT 的用户无法访问搜索 LDAP, 您可以使用另一个有此访问权限的账户 .';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = '如果设备联系到服务器后这多或多分钟已经过去,请执行动作.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = '如果你选择一个收集器,它将被安排在接下来的5分钟边界上执行.';

$GLOBALS["lang"]['ifadminstatus'] = '成人状态';

$GLOBALS["lang"]['Ifadminstatus'] = '成人状态';

$GLOBALS["lang"]['iflastchange'] = '最后更改';

$GLOBALS["lang"]['Iflastchange'] = '最后更改';

$GLOBALS["lang"]['Ignored'] = '已忽略';

$GLOBALS["lang"]['image'] = '图像';

$GLOBALS["lang"]['Image'] = '图像';

$GLOBALS["lang"]['Images'] = '图像';

$GLOBALS["lang"]['implementation_notes'] = '执行说明';

$GLOBALS["lang"]['Implementation Notes'] = '执行说明';

$GLOBALS["lang"]['Import'] = '导入';

$GLOBALS["lang"]['Import CSV'] = '导入 CSV';

$GLOBALS["lang"]['Import Example Data'] = '导入示例数据';

$GLOBALS["lang"]['Import JSON'] = '导入 JSON';

$GLOBALS["lang"]['improvement_opportunities'] = '改善机会';

$GLOBALS["lang"]['Improvement Opportunities'] = '改善机会';

$GLOBALS["lang"]['In'] = '内';

$GLOBALS["lang"]['Inactive'] = '非活动';

$GLOBALS["lang"]['Include'] = '包含';

$GLOBALS["lang"]['Index'] = '指数';

$GLOBALS["lang"]['India'] = '印度';

$GLOBALS["lang"]['Indonesia'] = '印度尼西亚';

$GLOBALS["lang"]['Info'] = '资讯';

$GLOBALS["lang"]['Informational'] = '资料';

$GLOBALS["lang"]['initial_size'] = '初始大小';

$GLOBALS["lang"]['Initial Size'] = '初始大小';

$GLOBALS["lang"]['inode'] = '图标';

$GLOBALS["lang"]['Inode'] = '图标';

$GLOBALS["lang"]['Input Type'] = '输入类型';

$GLOBALS["lang"]['inputs'] = '输入';

$GLOBALS["lang"]['Inputs'] = '输入';

$GLOBALS["lang"]['Insane'] = '神经病';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = '插入示例数据并发现 Open-AudIT 能告诉你的所有信息 .';

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

$GLOBALS["lang"]['installed_by'] = '安装于';

$GLOBALS["lang"]['Installed By'] = '安装于';

$GLOBALS["lang"]['installed_on'] = '安装于';

$GLOBALS["lang"]['Installed On'] = '安装于';

$GLOBALS["lang"]['Installing'] = '安装';

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

$GLOBALS["lang"]['interface'] = '接口';

$GLOBALS["lang"]['Interface'] = '接口';

$GLOBALS["lang"]['interface_id'] = '接口 ID';

$GLOBALS["lang"]['Interface ID'] = '接口 ID';

$GLOBALS["lang"]['interface_type'] = '接口类型';

$GLOBALS["lang"]['Interface Type'] = '接口类型';

$GLOBALS["lang"]['Internal'] = '内部';

$GLOBALS["lang"]['Internal Field Name'] = '内部字段名称';

$GLOBALS["lang"]['Internal ID'] = '内部标识';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = '内部 JSON 阵列, 此用户的有效访问符 .';

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

$GLOBALS["lang"]['Is FRU'] = '是FRU吗';

$GLOBALS["lang"]['is_fru'] = '是芙鲁吗';

$GLOBALS["lang"]['Is Fru'] = '是芙鲁吗';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'NSIS服务器是本地的(在这个Open-AudIT服务器上)还是远程的?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '这个账户正常吗? 如果设置为<code>n</code>,则用户无法登录.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = '是否启用此任务( y/ n) .';

$GLOBALS["lang"]['Isle of Man'] = '马恩岛';

$GLOBALS["lang"]['Israel'] = '以色列';

$GLOBALS["lang"]['Issue'] = '问题';

$GLOBALS["lang"]['issuer'] = '发行商';

$GLOBALS["lang"]['Issuer'] = '发行商';

$GLOBALS["lang"]['Issues'] = '问题';

$GLOBALS["lang"]['Italy'] = '意大利';

$GLOBALS["lang"]['JSON'] = '贾森';

$GLOBALS["lang"]['JSON to Import'] = 'JSON 到导入';

$GLOBALS["lang"]['Jamaica'] = '牙买加';

$GLOBALS["lang"]['January'] = '1月(半天会议)';

$GLOBALS["lang"]['Japan'] = '日本';

$GLOBALS["lang"]['Jersey'] = '泽西岛';

$GLOBALS["lang"]['Jordan'] = '约旦';

$GLOBALS["lang"]['July'] = '7月(半天会议)';

$GLOBALS["lang"]['June'] = '6月份';

$GLOBALS["lang"]['Kazakhstan'] = '哈萨克斯坦';

$GLOBALS["lang"]['Kenya'] = '肯尼亚';

$GLOBALS["lang"]['kernel_version'] = '内核版本';

$GLOBALS["lang"]['Kernel Version'] = '内核版本';

$GLOBALS["lang"]['Key'] = '密钥';

$GLOBALS["lang"]['Key Password (optional)'] = '密钥密码( 可选)';

$GLOBALS["lang"]['keys'] = '键';

$GLOBALS["lang"]['Keys'] = '键';

$GLOBALS["lang"]['Kiribati'] = '基里巴斯';

$GLOBALS["lang"]['Korea'] = '韩国';

$GLOBALS["lang"]['Kuwait'] = '科威特';

$GLOBALS["lang"]['Kyrgyz Republic'] = '吉尔吉斯共和国';

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

$GLOBALS["lang"]['latitude'] = '纬度';

$GLOBALS["lang"]['Latitude'] = '纬度';

$GLOBALS["lang"]['Latvia'] = '拉脱维亚';

$GLOBALS["lang"]['Layout'] = '版式';

$GLOBALS["lang"]['ldap'] = '长发';

$GLOBALS["lang"]['Ldap'] = '长发';

$GLOBALS["lang"]['ldap_base_dn'] = '立体基础 Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = '立体基础 Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn 账户';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn 账户';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn 密码';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn 密码';

$GLOBALS["lang"]['lease_expiry_date'] = '租赁到期日期';

$GLOBALS["lang"]['Lease Expiry Date'] = '租赁到期日期';

$GLOBALS["lang"]['Lebanon'] = '黎巴嫩';

$GLOBALS["lang"]['legal_requirements'] = '法律要求';

$GLOBALS["lang"]['Legal Requirements'] = '法律要求';

$GLOBALS["lang"]['Lesotho'] = '莱索托';

$GLOBALS["lang"]['Less Than'] = '减去';

$GLOBALS["lang"]['Less Than or Equals'] = '小于或等于';

$GLOBALS["lang"]['level'] = '职等';

$GLOBALS["lang"]['Level'] = '职等';

$GLOBALS["lang"]['Liberia'] = '利比里亚';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = '阿拉伯利比亚民众国';

$GLOBALS["lang"]['License'] = '许可证';

$GLOBALS["lang"]['License Key'] = '许可证密钥';

$GLOBALS["lang"]['License Required'] = '需要许可证';

$GLOBALS["lang"]['licenses'] = '许可证';

$GLOBALS["lang"]['Licenses'] = '许可证';

$GLOBALS["lang"]['Liechtenstein'] = '列支敦士登';

$GLOBALS["lang"]['Like'] = '喜欢';

$GLOBALS["lang"]['limit'] = '限制';

$GLOBALS["lang"]['Limit'] = '限制';

$GLOBALS["lang"]['Limit the query to the first X items.'] = '将查询限制在第一批 X 项 .';

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

$GLOBALS["lang"]['link'] = '链接';

$GLOBALS["lang"]['Link'] = '链接';

$GLOBALS["lang"]['Link (Advanced)'] = '链接( 高级)';

$GLOBALS["lang"]['linked_row'] = '链接行';

$GLOBALS["lang"]['Linked Row'] = '链接行';

$GLOBALS["lang"]['linked_table'] = '链接表格';

$GLOBALS["lang"]['Linked Table'] = '链接表格';

$GLOBALS["lang"]['links'] = '链接';

$GLOBALS["lang"]['Links'] = '链接';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = '将此发现链接到关联云(如果需要). 链接到 <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = '链接到 <code>发现_scan_options.id </code>.';

$GLOBALS["lang"]['Linux'] = '链接';

$GLOBALS["lang"]['List'] = '列表';

$GLOBALS["lang"]['list_table_format'] = '列表格式';

$GLOBALS["lang"]['List Table Format'] = '列表格式';

$GLOBALS["lang"]['Lithuania'] = '立陶宛';

$GLOBALS["lang"]['Load Balancing'] = '装入平衡';

$GLOBALS["lang"]['Local'] = '当地';

$GLOBALS["lang"]['Local Area Network'] = '局域网';

$GLOBALS["lang"]['local_port'] = '本地端口';

$GLOBALS["lang"]['Local Port'] = '本地端口';

$GLOBALS["lang"]['Localhost'] = '本地主机';

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

$GLOBALS["lang"]['locations'] = '地点';

$GLOBALS["lang"]['Locations'] = '地点';

$GLOBALS["lang"]['Locations in this'] = '此处的位置';

$GLOBALS["lang"]['log'] = '日志';

$GLOBALS["lang"]['Log'] = '日志';

$GLOBALS["lang"]['log_format'] = '日志格式';

$GLOBALS["lang"]['Log Format'] = '日志格式';

$GLOBALS["lang"]['log_path'] = '日志路径';

$GLOBALS["lang"]['Log Path'] = '日志路径';

$GLOBALS["lang"]['log_rotation'] = '日志旋转';

$GLOBALS["lang"]['Log Rotation'] = '日志旋转';

$GLOBALS["lang"]['log_status'] = '日志状态';

$GLOBALS["lang"]['Log Status'] = '日志状态';

$GLOBALS["lang"]['Logical Cores '] = '逻辑核心';

$GLOBALS["lang"]['logical_count'] = '逻辑计算';

$GLOBALS["lang"]['Logical Count'] = '逻辑计算';

$GLOBALS["lang"]['Logs'] = '日志';

$GLOBALS["lang"]['longitude'] = '经度';

$GLOBALS["lang"]['Longitude'] = '经度';

$GLOBALS["lang"]['Low'] = '低档';

$GLOBALS["lang"]['Lower Case'] = '小写';

$GLOBALS["lang"]['Luxembourg'] = '卢森堡';

$GLOBALS["lang"]['MAC Address'] = 'MAC 地址';

$GLOBALS["lang"]['MAC Manufacturer'] = '邮件 制造商';

$GLOBALS["lang"]['mac'] = '麦克';

$GLOBALS["lang"]['Mac'] = '麦克';

$GLOBALS["lang"]['Mac Address'] = '麦克地址';

$GLOBALS["lang"]['MacOS'] = '麦克OS';

$GLOBALS["lang"]['Macao'] = '澳门';

$GLOBALS["lang"]['Macedonia'] = '马其顿';

$GLOBALS["lang"]['Madagascar'] = '马达加斯加';

$GLOBALS["lang"]['maintenance_expires'] = '保养过期';

$GLOBALS["lang"]['Maintenance Expires'] = '保养过期';

$GLOBALS["lang"]['Malawi'] = '马拉维';

$GLOBALS["lang"]['Malaysia'] = '马来西亚';

$GLOBALS["lang"]['Maldives'] = '马尔代夫';

$GLOBALS["lang"]['Mali'] = '马里';

$GLOBALS["lang"]['Malta'] = '马耳他';

$GLOBALS["lang"]['Manage in NMIS'] = '在 NMIS 中管理';

$GLOBALS["lang"]['Manual Input'] = '手动输入';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = '用户手动设定,默认为Production.';

$GLOBALS["lang"]['Manually set by user.'] = '用户手动设定 .';

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

$GLOBALS["lang"]['match_string'] = '匹配字符串';

$GLOBALS["lang"]['Match String'] = '匹配字符串';

$GLOBALS["lang"]['Matching Attribute'] = '匹配属性';

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

$GLOBALS["lang"]['Metropolitan Area Network'] = '都市地区网';

$GLOBALS["lang"]['Mexico'] = '墨西哥';

$GLOBALS["lang"]['Micronesia'] = '密克罗尼西亚';

$GLOBALS["lang"]['Microsoft Azure Fields'] = '微软 Azure 字段';

$GLOBALS["lang"]['microtime'] = '微时间';

$GLOBALS["lang"]['Microtime'] = '微时间';

$GLOBALS["lang"]['migrations'] = '移徙';

$GLOBALS["lang"]['Migrations'] = '移徙';

$GLOBALS["lang"]['minute'] = '分钟';

$GLOBALS["lang"]['Minute'] = '分钟';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '自上次审计以来';

$GLOBALS["lang"]['model'] = '型号';

$GLOBALS["lang"]['Model'] = '型号';

$GLOBALS["lang"]['model_family'] = '模范家庭组织';

$GLOBALS["lang"]['Model Family'] = '模范家庭组织';

$GLOBALS["lang"]['module'] = '模块';

$GLOBALS["lang"]['Module'] = '模块';

$GLOBALS["lang"]['module_index'] = '模块索引';

$GLOBALS["lang"]['Module Index'] = '模块索引';

$GLOBALS["lang"]['Moldova'] = '摩尔多瓦';

$GLOBALS["lang"]['Monaco'] = '摩纳哥';

$GLOBALS["lang"]['Monday'] = '星期一';

$GLOBALS["lang"]['Mongolia'] = '蒙古国';

$GLOBALS["lang"]['monitor'] = '监视器';

$GLOBALS["lang"]['Monitor'] = '监视器';

$GLOBALS["lang"]['Montenegro'] = '黑山';

$GLOBALS["lang"]['month'] = '月数';

$GLOBALS["lang"]['Month'] = '月数';

$GLOBALS["lang"]['Montserrat'] = '蒙特塞拉特';

$GLOBALS["lang"]['Morocco'] = '摩洛哥';

$GLOBALS["lang"]['motherboard'] = '主板';

$GLOBALS["lang"]['Motherboard'] = '主板';

$GLOBALS["lang"]['mount_point'] = '挂载点';

$GLOBALS["lang"]['Mount Point'] = '挂载点';

$GLOBALS["lang"]['mount_type'] = '挂载类型';

$GLOBALS["lang"]['Mount Type'] = '挂载类型';

$GLOBALS["lang"]['Mozambique'] = '莫桑比克';

$GLOBALS["lang"]['Must Respond to Ping'] = '一定要回复到小平';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = '注 - 您可以将 < code> decrypt_creditities</code> 的配置项目设置为 < code>n</code> , 防止在下面显示纯文本证书.';

$GLOBALS["lang"]['name'] = '名称';

$GLOBALS["lang"]['Name'] = '名称';

$GLOBALS["lang"]['namespace'] = '命名空间';

$GLOBALS["lang"]['Namespace'] = '命名空间';

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

$GLOBALS["lang"]['Network'] = '网络';

$GLOBALS["lang"]['network_address'] = '网络地址';

$GLOBALS["lang"]['Network Address'] = '网络地址';

$GLOBALS["lang"]['network_domain'] = '网络域';

$GLOBALS["lang"]['Network Domain'] = '网络域';

$GLOBALS["lang"]['Network Types'] = '网络类型';

$GLOBALS["lang"]['networks'] = '网络';

$GLOBALS["lang"]['Networks'] = '网络';

$GLOBALS["lang"]['Networks Generated By'] = '由网络生成';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = '使用 CIDR 遮罩的网络';

$GLOBALS["lang"]['New Building Name'] = '新建筑名称';

$GLOBALS["lang"]['New Caledonia'] = '新喀里多尼亚';

$GLOBALS["lang"]['New Floor Name'] = '新楼层名称';

$GLOBALS["lang"]['New Room Name'] = '新建房间名称';

$GLOBALS["lang"]['New Row Name'] = '新建行名称';

$GLOBALS["lang"]['New Zealand'] = '新西兰';

$GLOBALS["lang"]['next_hop'] = '下一个跳';

$GLOBALS["lang"]['Next Hop'] = '下一个跳';

$GLOBALS["lang"]['next_run'] = '下一个运行';

$GLOBALS["lang"]['Next Run'] = '下一个运行';

$GLOBALS["lang"]['Nicaragua'] = '尼加拉瓜';

$GLOBALS["lang"]['Niger'] = '尼日尔';

$GLOBALS["lang"]['Nigeria'] = '尼日利亚';

$GLOBALS["lang"]['Niue'] = '纽埃';

$GLOBALS["lang"]['nmap'] = '地图';

$GLOBALS["lang"]['Nmap'] = '地图';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp 端口';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp 端口';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp 端口';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp 端口';

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

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = '没有谷歌地图 API 密钥当前, 您无法显示地图 .';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = '无专业或企业许可证';

$GLOBALS["lang"]['No Results'] = '无结果';

$GLOBALS["lang"]['No data in License Key'] = '许可证密钥中没有数据';

$GLOBALS["lang"]['No database upgrade required at this time.'] = '目前不需要更新数据库 .';

$GLOBALS["lang"]['Node'] = '节点';

$GLOBALS["lang"]['None'] = '无';

$GLOBALS["lang"]['Norfolk Island'] = '诺福克岛';

$GLOBALS["lang"]['Normal'] = '常规';

$GLOBALS["lang"]['Northern Mariana Islands'] = '北马里亚纳群岛';

$GLOBALS["lang"]['Norway'] = '挪威';

$GLOBALS["lang"]['Not Applicable'] = '不适用';

$GLOBALS["lang"]['Not Checked'] = '未检查';

$GLOBALS["lang"]['Not Equals'] = '不等于';

$GLOBALS["lang"]['Not In'] = '不进';

$GLOBALS["lang"]['Not Like'] = '不喜欢';

$GLOBALS["lang"]['Not Set'] = '未设定';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '通常不使用。 如果设定, 这需要设备有一个开放的端口( 根据扫描选项) 来考虑响应 。 一个MAC地址、ARP响应或ping响应被认为不足以被视为响应。 如果Open-AudIT服务器与目标IP之间的路由器或防火墙正代表IP响应端口扫描,则有用.';

$GLOBALS["lang"]['Note'] = '说明';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '注 - 选择父母会自动为孩子提供访问权限(虽然不会在这里显示).';

$GLOBALS["lang"]['Notes'] = '页:1';

$GLOBALS["lang"]['notes'] = '页:1';

$GLOBALS["lang"]['Notice'] = '通知';

$GLOBALS["lang"]['November'] = '11月(半天会议)';

$GLOBALS["lang"]['ORDER BY'] = '命令';

$GLOBALS["lang"]['OS'] = '业务办';

$GLOBALS["lang"]['OS Families'] = 'OS 家庭';

$GLOBALS["lang"]['OS Family'] = 'OS 家庭';

$GLOBALS["lang"]['OS Group'] = 'OS 组';

$GLOBALS["lang"]['oae_manage'] = 'Oae 管理系统';

$GLOBALS["lang"]['Oae Manage'] = 'Oae 管理系统';

$GLOBALS["lang"]['object_ident'] = '对象标识';

$GLOBALS["lang"]['Object Ident'] = '对象标识';

$GLOBALS["lang"]['October'] = '10月(半天会议)';

$GLOBALS["lang"]['Oman'] = '阿曼';

$GLOBALS["lang"]['omk_uuid'] = '奥姆克·威德';

$GLOBALS["lang"]['Omk Uuid'] = '奥姆克·威德';

$GLOBALS["lang"]['On'] = '打开';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = '一种为<code>3x2</code>,<code>4x2</code>,<code>4x3</code>或<code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = '校园区网之一 云网 企业民营网 家园区网 局域网 都市区网 被动光学局域网 个人区网 存储区网 系统区网 虚拟民营网 广域网 无线局域网.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '发展、灾后恢复、评价、前期生产、生产、测试、培训、用户接受测试';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '其中分配,授权,规划,预留,未分配,未知,未管理. 默认分配 .';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = '<code>活动目录</code>或<code>openldap</code>中的一种.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '其中:抗病毒,备份,防火墙,批准,禁止,忽略或其他.';

$GLOBALS["lang"]['Online Documentation'] = '在线文档';

$GLOBALS["lang"]['Open-AudIT'] = '打开AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = '开放AudIT社区';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT 设备选择';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT 企业';

$GLOBALS["lang"]['Open-AudIT Field Name'] = '打开 AudIT 字段名称';

$GLOBALS["lang"]['Open-AudIT Licenses'] = '开放AudIT许可证';

$GLOBALS["lang"]['Open-AudIT Options'] = '打开AudIT 选项';

$GLOBALS["lang"]['Open-AudIT Professional'] = '专业人员';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap 已安装';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap 用户 Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap 用户 Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap 用户成员属性';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap 用户成员属性';

$GLOBALS["lang"]['open|filtered'] = '已过滤';

$GLOBALS["lang"]['Open|filtered'] = '已过滤';

$GLOBALS["lang"]['Operating System'] = '操作系统';

$GLOBALS["lang"]['Operating System Family Contains'] = '操作系统家庭包含';

$GLOBALS["lang"]['Operating Systems'] = '操作系统';

$GLOBALS["lang"]['optical'] = '光学';

$GLOBALS["lang"]['Optical'] = '光学';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = '经Open-AudIT审计的可选版本. 使用% 签名% 作为通配符 .';

$GLOBALS["lang"]['options'] = '选项';

$GLOBALS["lang"]['Options'] = '选项';

$GLOBALS["lang"]['Or select from the below fields.'] = '或从以下字段选择.';

$GLOBALS["lang"]['org_descendants'] = '欧格后裔';

$GLOBALS["lang"]['Org Descendants'] = '欧格后裔';

$GLOBALS["lang"]['org_id'] = '奥尔格标识';

$GLOBALS["lang"]['Org ID'] = '奥尔格标识';

$GLOBALS["lang"]['Organisation'] = '日历';

$GLOBALS["lang"]['organisation'] = '日历';

$GLOBALS["lang"]['Organisation Descendants'] = '后代组织';

$GLOBALS["lang"]['orgs'] = '鸟类';

$GLOBALS["lang"]['Orgs'] = '鸟类';

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

$GLOBALS["lang"]['Others'] = '其他人员';

$GLOBALS["lang"]['Our timeout for a SSH response'] = '我们暂停使用 SSH 响应';

$GLOBALS["lang"]['Our timeout for a WMI response'] = '我们暂停WMI的响应';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = '我们暂停 SNMP 响应';

$GLOBALS["lang"]['Our timeout for an audit script response'] = '我们暂停审计脚本回应';

$GLOBALS["lang"]['output'] = '产出';

$GLOBALS["lang"]['Output'] = '产出';

$GLOBALS["lang"]['outputs'] = '产出';

$GLOBALS["lang"]['Outputs'] = '产出';

$GLOBALS["lang"]['overwrite'] = '覆盖';

$GLOBALS["lang"]['Overwrite'] = '覆盖';

$GLOBALS["lang"]['owner'] = '拥有者';

$GLOBALS["lang"]['Owner'] = '拥有者';

$GLOBALS["lang"]['PHP'] = 'ƯΜ㼯A';

$GLOBALS["lang"]['POD'] = 'POD 密码';

$GLOBALS["lang"]['package'] = '软件包';

$GLOBALS["lang"]['Package'] = '软件包';

$GLOBALS["lang"]['packages'] = '软件包';

$GLOBALS["lang"]['Packages'] = '软件包';

$GLOBALS["lang"]['pagefile'] = '页面文件';

$GLOBALS["lang"]['Pagefile'] = '页面文件';

$GLOBALS["lang"]['Pakistan'] = '巴基斯坦';

$GLOBALS["lang"]['Palau'] = '帕劳';

$GLOBALS["lang"]['Palestinian Territory'] = '巴勒斯坦领土';

$GLOBALS["lang"]['Panama'] = '巴拿马';

$GLOBALS["lang"]['Papua New Guinea'] = '巴布亚新几内亚';

$GLOBALS["lang"]['Paraguay'] = '巴拉圭';

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

$GLOBALS["lang"]['password'] = '密码';

$GLOBALS["lang"]['Password'] = '密码';

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

$GLOBALS["lang"]['permission'] = '权限';

$GLOBALS["lang"]['Permission'] = '权限';

$GLOBALS["lang"]['permissions'] = '权限';

$GLOBALS["lang"]['Permissions'] = '权限';

$GLOBALS["lang"]['Personal Area Network'] = '个人区域网';

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

$GLOBALS["lang"]['ping'] = 'Ing';

$GLOBALS["lang"]['Ping'] = 'Ing';

$GLOBALS["lang"]['Pitcairn Islands'] = '皮特凯恩群岛';

$GLOBALS["lang"]['placement'] = '安置情况';

$GLOBALS["lang"]['Placement'] = '安置情况';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = '请有一个 Open-AudIT 管理员登录并升级数据库 .';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '请注意,选定的框将覆盖文本输入框.';

$GLOBALS["lang"]['Please set using'] = '请使用';

$GLOBALS["lang"]['pod'] = '邮箱';

$GLOBALS["lang"]['Pod'] = '邮箱';

$GLOBALS["lang"]['Poland'] = '波兰';

$GLOBALS["lang"]['Policies'] = '政策';

$GLOBALS["lang"]['Policies have exceptions.'] = '政策有例外.';

$GLOBALS["lang"]['policy'] = '政策';

$GLOBALS["lang"]['Policy'] = '政策';

$GLOBALS["lang"]['policy_id'] = '政策标识';

$GLOBALS["lang"]['Policy ID'] = '政策标识';

$GLOBALS["lang"]['Policy Result'] = '政策结果';

$GLOBALS["lang"]['Policy Results'] = '政策成果';

$GLOBALS["lang"]['Polite'] = '礼貌';

$GLOBALS["lang"]['Populated by audit.'] = '通过审计进行.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = '以发现和审计为主.';

$GLOBALS["lang"]['Populated dynamically.'] = '充满活力.';

$GLOBALS["lang"]['Populated from DNS.'] = '由DNS传播.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = '由 SNMP 发现而成.';

$GLOBALS["lang"]['Populated from device audits.'] = '由设备审计提供.';

$GLOBALS["lang"]['Populated from hostname.'] = '从主机名复制.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = '由Linux上的机器编号传播.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = '用于默认路径或发现时检测到的IP的IP充值.';

$GLOBALS["lang"]['Populated from the hostname command.'] = '从主机名命令复制 .';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = '以外部系统的额外数据作为JSON代表.';

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

$GLOBALS["lang"]['position'] = '立场';

$GLOBALS["lang"]['Position'] = '立场';

$GLOBALS["lang"]['postcode'] = '邮政编码';

$GLOBALS["lang"]['Postcode'] = '邮政编码';

$GLOBALS["lang"]['power_circuit'] = '电路';

$GLOBALS["lang"]['Power Circuit'] = '电路';

$GLOBALS["lang"]['power_sockets'] = '电袜';

$GLOBALS["lang"]['Power Sockets'] = '电袜';

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

$GLOBALS["lang"]['profile'] = '简介';

$GLOBALS["lang"]['Profile'] = '简介';

$GLOBALS["lang"]['program'] = '程序';

$GLOBALS["lang"]['Program'] = '程序';

$GLOBALS["lang"]['protocol'] = '议定书';

$GLOBALS["lang"]['Protocol'] = '议定书';

$GLOBALS["lang"]['provider'] = '供应商';

$GLOBALS["lang"]['Provider'] = '供应商';

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

$GLOBALS["lang"]['Query'] = '查询';

$GLOBALS["lang"]['queue'] = '队列';

$GLOBALS["lang"]['Queue'] = '队列';

$GLOBALS["lang"]['Queue Limit'] = '队列限制';

$GLOBALS["lang"]['Queued Device Audits'] = '排队设备审计';

$GLOBALS["lang"]['Queued IP Scans'] = '排队 IP 扫描';

$GLOBALS["lang"]['Queued Items'] = '排队项目';

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

$GLOBALS["lang"]['racks'] = '垃圾袋';

$GLOBALS["lang"]['Racks'] = '垃圾袋';

$GLOBALS["lang"]['radio'] = '无线电';

$GLOBALS["lang"]['Radio'] = '无线电';

$GLOBALS["lang"]['Radio MAC'] = 'MAC电台';

$GLOBALS["lang"]['rationale'] = '理由';

$GLOBALS["lang"]['Rationale'] = '理由';

$GLOBALS["lang"]['Read'] = '读取';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = '央视网上"开放AudIT维基"的文档.';

$GLOBALS["lang"]['Red Query'] = '红色查询';

$GLOBALS["lang"]['Redirect URI'] = '重定向 URI';

$GLOBALS["lang"]['redirect_uri'] = '调整 Uri 方向';

$GLOBALS["lang"]['Redirect Uri'] = '调整 Uri 方向';

$GLOBALS["lang"]['region'] = '地区';

$GLOBALS["lang"]['Region'] = '地区';

$GLOBALS["lang"]['registered_user'] = '注册用户';

$GLOBALS["lang"]['Registered User'] = '注册用户';

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

$GLOBALS["lang"]['Report'] = '报告';

$GLOBALS["lang"]['Report on your devices, networks and more'] = '报告您的设备、网络和更多';

$GLOBALS["lang"]['reportable'] = '可报告';

$GLOBALS["lang"]['Reportable'] = '可报告';

$GLOBALS["lang"]['request'] = '请求';

$GLOBALS["lang"]['Request'] = '请求';

$GLOBALS["lang"]['require_port'] = '需要端口';

$GLOBALS["lang"]['Require Port'] = '需要端口';

$GLOBALS["lang"]['Require an Open Port'] = '需要打开端口';

$GLOBALS["lang"]['Required'] = '要求数';

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

$GLOBALS["lang"]['Restrict to Private'] = '限于私人';

$GLOBALS["lang"]['Restrict to Subnet'] = '限于子网';

$GLOBALS["lang"]['result'] = '结果';

$GLOBALS["lang"]['Result'] = '结果';

$GLOBALS["lang"]['Results'] = '结果';

$GLOBALS["lang"]['retrieved'] = '获取';

$GLOBALS["lang"]['Retrieved'] = '获取';

$GLOBALS["lang"]['retrieved_ident'] = '获取标识';

$GLOBALS["lang"]['Retrieved Ident'] = '获取标识';

$GLOBALS["lang"]['retrieved_name'] = '获取名称';

$GLOBALS["lang"]['Retrieved Name'] = '获取名称';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = '从设备中检索到 - Windows:Win32_ComputerSystemProduction, Linux:dmidecode, , MacOS:系统定位器,ESXi:vim-cmd hostsvc/主机摘要,HP-UX:machinfo, Solaris:smbios, AIX: uname. 中国植物物种信息数据库.';

$GLOBALS["lang"]['Reunion'] = '团圆';

$GLOBALS["lang"]['revision'] = '订正';

$GLOBALS["lang"]['Revision'] = '订正';

$GLOBALS["lang"]['risk_assesment_result'] = '风险分担结果';

$GLOBALS["lang"]['Risk Assesment Result'] = '风险分担结果';

$GLOBALS["lang"]['role'] = '作用';

$GLOBALS["lang"]['Role'] = '作用';

$GLOBALS["lang"]['roles'] = '角色';

$GLOBALS["lang"]['Roles'] = '角色';

$GLOBALS["lang"]['Romania'] = '罗马尼亚';

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

$GLOBALS["lang"]['Run Discovery'] = '运行发现';

$GLOBALS["lang"]['Run Discovery on Devices'] = '在设备上运行发现';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '运行一个发现并查找<b> 您的网络上有什么?</b>';

$GLOBALS["lang"]['Run this Command'] = '运行此命令';

$GLOBALS["lang"]['runas'] = '鲁纳斯';

$GLOBALS["lang"]['Runas'] = '鲁纳斯';

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

$GLOBALS["lang"]['SELECT'] = '独立';

$GLOBALS["lang"]['SID'] = '小岛屿发展中国家';

$GLOBALS["lang"]['SM Version'] = 'SM 版本';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2) (韩语)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP 状态 细节';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID 编辑器';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP 版本';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3 (英语)';

$GLOBALS["lang"]['SQL'] = 'SQL 数据';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (高级)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL 创建语句';

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

$GLOBALS["lang"]['Save as Default'] = '另存为默认';

$GLOBALS["lang"]['scaling'] = '缩放';

$GLOBALS["lang"]['Scaling'] = '缩放';

$GLOBALS["lang"]['scan_options'] = '扫描选项';

$GLOBALS["lang"]['Scan Options'] = '扫描选项';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = '扫描 TCP 端口的 Nmap 顶号 .';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = '扫描 UDP 端口的 Nmap 顶号 .';

$GLOBALS["lang"]['schedule'] = '时间表';

$GLOBALS["lang"]['Schedule'] = '时间表';

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

$GLOBALS["lang"]['Search for Device'] = '搜索设备';

$GLOBALS["lang"]['secondary'] = '中学';

$GLOBALS["lang"]['Secondary'] = '中学';

$GLOBALS["lang"]['Secondary Text'] = '次要文本';

$GLOBALS["lang"]['section'] = '节次';

$GLOBALS["lang"]['Section'] = '节次';

$GLOBALS["lang"]['secure'] = '安全';

$GLOBALS["lang"]['Secure'] = '安全';

$GLOBALS["lang"]['Security Name'] = '安全名称';

$GLOBALS["lang"]['Security Status'] = '安全状况';

$GLOBALS["lang"]['security_zone'] = '安全区';

$GLOBALS["lang"]['Security Zone'] = '安全区';

$GLOBALS["lang"]['seed_ip'] = '种子 IP';

$GLOBALS["lang"]['Seed IP'] = '种子 IP';

$GLOBALS["lang"]['seed_ping'] = '种子平';

$GLOBALS["lang"]['Seed Ping'] = '种子平';

$GLOBALS["lang"]['seed_restrict_to_private'] = '种子限制为私人';

$GLOBALS["lang"]['Seed Restrict To Private'] = '种子限制为私人';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = '种子限制到子网';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = '种子限制到子网';

$GLOBALS["lang"]['Select'] = '选择';

$GLOBALS["lang"]['Select All'] = '全部选择';

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

$GLOBALS["lang"]['Select a Table'] = '选择表格';

$GLOBALS["lang"]['Senegal'] = '塞内加尔';

$GLOBALS["lang"]['September'] = '9月 (中文(简体) )';

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

$GLOBALS["lang"]['Servers'] = '服务器';

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

$GLOBALS["lang"]['service_version'] = '服务版本';

$GLOBALS["lang"]['Service Version'] = '服务版本';

$GLOBALS["lang"]['Set'] = '设定';

$GLOBALS["lang"]['set_by'] = '设定';

$GLOBALS["lang"]['Set By'] = '设定';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = '设置列表屏幕上表格的大小(正常或紧凑).';

$GLOBALS["lang"]['severity'] = '严重性';

$GLOBALS["lang"]['Severity'] = '严重性';

$GLOBALS["lang"]['severity_text'] = '严重性文本';

$GLOBALS["lang"]['Severity Text'] = '严重性文本';

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

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '我应该从这个设备中删除所有非当前数据吗?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = '如果使用此文件( 或模式) 来排除文件被报告 。 通常情况下,对于审计文件,此设置为<code>y</code>.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = '我们是否应该从远程服务中添加设备, 本地.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '我们是否应该对被选中的Org以及Orgs的孩子发放这种许可证?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '我们是否应该将过滤的端口视为一个开放端口——因此将这个IP标为带有设备附加?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '我们是否应该将一个开放的QQ过滤端口视为一个开放端口——因此将这个IP标为带有设备的标志?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = '我们是否应该在网络界面中曝光这个组.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = '如果我们在网络界面“报告”菜单下的报告列表中披露此查询.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = '如果我们在网络界面的《报告》菜单下的报告列表中披露这一查询.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = '我们应该在目标机器上安装Open-Scap.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = '我们是否应该匹配基于设备的 mac 地址, 即使它可能从 VMware 复制 .';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = '我们是否应该匹配基于其DNS fqdn的设备.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = '是否匹配基于 DNS 主机名的设备 .';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = '如果我们匹配一个基于其UUID的设备.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = '我们是否应该匹配基于其dbus id的装置.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = '我们是否应该匹配一个基于fqdn的设备.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = '是否匹配基于主机名和 UUID 的设备 .';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = '是否匹配基于主机名和 dbus id 的设备 .';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = '我们是否应该匹配基于其主机名和序列的设备 .';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = '如果我们有一个没有数据的现有设备, 我们是否应该根据它的 ip 来匹配一个设备 .';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = '我们是否应该匹配基于其ip的设备.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = '我们是否应该匹配基于其mac地址的设备.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = '我们是否应该根据其序列和类型来匹配一个设备.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = '我们是否应该根据其序列号来匹配一个设备.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = '我们是否应该匹配一个仅基于其SNMP sysName和串行的设备.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = '我们是否应该匹配仅基于其 SNMP sys 的设备Name.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = '我们是否应该只根据其主机名匹配一个设备 .';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '在试图扫描前, 要不要先查一下IP? 如果它不响应 ping , 请跳过此设备 .';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = '如果我们把外部系统从本地设备中充斥出来.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '我们是否应该进行审计并提交(y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = '是否应该使用UDP端口161测试SNMP.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = '我们应该使用TCP端口22测试SSH.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = '我们应该使用TCP端口135测试WMI.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = '是否应该解除代理(y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = '我们是否应该使用这种方法验证用户证书 。 设定为<code>y</code>或<code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = '如果我们使用这种方法来充斥用户角色. 字段 < code> us_ auth </code> 必须设置为 < code>y </code> 才能使用。 设定为<code>y</code>或<code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = '斯洛伐克(斯洛伐克共和国)';

$GLOBALS["lang"]['Slovenia'] = '斯洛文尼亚';

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

$GLOBALS["lang"]['socket'] = '套装';

$GLOBALS["lang"]['Socket'] = '套装';

$GLOBALS["lang"]['software'] = '软件';

$GLOBALS["lang"]['Software'] = '软件';

$GLOBALS["lang"]['Software Found Last 7 Days'] = '软件找到最后7天';

$GLOBALS["lang"]['Software Found Today'] = '今天找到软件';

$GLOBALS["lang"]['Software Found Yesterday'] = '昨天发现的软件';

$GLOBALS["lang"]['software_key'] = '软件密钥';

$GLOBALS["lang"]['Software Key'] = '软件密钥';

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

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = '指定一个以逗号分隔的目标列表(无空格),以排除在扫描之外。 您通过的清单使用正常的 Nmap 语法, 因此可以包括主机名、 CIDR 网块、 octet 范围等 .';

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

$GLOBALS["lang"]['ssh_timeout'] = 'Sh 超时';

$GLOBALS["lang"]['Ssh Timeout'] = 'Sh 超时';

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

$GLOBALS["lang"]['started_date'] = '开始日期';

$GLOBALS["lang"]['Started Date'] = '开始日期';

$GLOBALS["lang"]['state'] = '状态';

$GLOBALS["lang"]['State'] = '状态';

$GLOBALS["lang"]['Stats'] = '状态';

$GLOBALS["lang"]['status'] = '状态';

$GLOBALS["lang"]['Status'] = '状态';

$GLOBALS["lang"]['Storage'] = '储存';

$GLOBALS["lang"]['storage_count'] = '存储数';

$GLOBALS["lang"]['Storage Count'] = '存储数';

$GLOBALS["lang"]['Storage-Area Network'] = '存储区域网络';

$GLOBALS["lang"]['string'] = '字符串';

$GLOBALS["lang"]['String'] = '字符串';

$GLOBALS["lang"]['sub_resource_id'] = '子资源标识';

$GLOBALS["lang"]['Sub Resource ID'] = '子资源标识';

$GLOBALS["lang"]['sub_type'] = '子类型';

$GLOBALS["lang"]['Sub Type'] = '子类型';

$GLOBALS["lang"]['Submit'] = '提交';

$GLOBALS["lang"]['Submitted From'] = '提交日期';

$GLOBALS["lang"]['subnet'] = '子网络';

$GLOBALS["lang"]['Subnet'] = '子网络';

$GLOBALS["lang"]['Subscription ID'] = '订阅编号';

$GLOBALS["lang"]['suburb'] = '郊区';

$GLOBALS["lang"]['Suburb'] = '郊区';

$GLOBALS["lang"]['Success'] = '成绩';

$GLOBALS["lang"]['Sudan'] = '苏丹';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo 密码( 可选)';

$GLOBALS["lang"]['suite'] = '套间';

$GLOBALS["lang"]['Suite'] = '套间';

$GLOBALS["lang"]['summaries'] = '摘要';

$GLOBALS["lang"]['Summaries'] = '摘要';

$GLOBALS["lang"]['summary'] = '目 录';

$GLOBALS["lang"]['Summary'] = '目 录';

$GLOBALS["lang"]['Sunday'] = '礼拜';

$GLOBALS["lang"]['supplier'] = '供应商';

$GLOBALS["lang"]['Supplier'] = '供应商';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = '支持的类型为<code>subnet</code>,<code>种子</code>和<code>活动目录</code>.';

$GLOBALS["lang"]['Suriname'] = '苏里南';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = '斯瓦尔巴德和扬马延群岛';

$GLOBALS["lang"]['Swaziland'] = '斯威士兰';

$GLOBALS["lang"]['Sweden'] = '瑞典';

$GLOBALS["lang"]['switch_device_id'] = '切换设备标识';

$GLOBALS["lang"]['Switch Device ID'] = '切换设备标识';

$GLOBALS["lang"]['switch_port'] = '切换端口';

$GLOBALS["lang"]['Switch Port'] = '切换端口';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = '瑞士、瑞士联邦';

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

$GLOBALS["lang"]['table'] = '图表';

$GLOBALS["lang"]['Table'] = '图表';

$GLOBALS["lang"]['tag'] = '标记';

$GLOBALS["lang"]['Tag'] = '标记';

$GLOBALS["lang"]['tag_1'] = '标记 1';

$GLOBALS["lang"]['Tag 1'] = '标记 1';

$GLOBALS["lang"]['tag_2'] = '标记 2';

$GLOBALS["lang"]['Tag 2'] = '标记 2';

$GLOBALS["lang"]['tag_3'] = '标记 3';

$GLOBALS["lang"]['Tag 3'] = '标记 3';

$GLOBALS["lang"]['tags'] = '标记';

$GLOBALS["lang"]['Tags'] = '标记';

$GLOBALS["lang"]['Tags :: '] = '* 标记';

$GLOBALS["lang"]['Taiwan'] = '台湾';

$GLOBALS["lang"]['Tajikistan'] = '塔吉克斯坦';

$GLOBALS["lang"]['Tanzania'] = '坦桑尼亚';

$GLOBALS["lang"]['task'] = '任务';

$GLOBALS["lang"]['Task'] = '任务';

$GLOBALS["lang"]['tasks'] = '任务';

$GLOBALS["lang"]['Tasks'] = '任务';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp 端口';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp 端口';

$GLOBALS["lang"]['tenant'] = '租户';

$GLOBALS["lang"]['Tenant'] = '租户';

$GLOBALS["lang"]['ternary'] = '三级';

$GLOBALS["lang"]['Ternary'] = '三级';

$GLOBALS["lang"]['Test 1'] = '测试 1';

$GLOBALS["lang"]['Test 2'] = '试验2';

$GLOBALS["lang"]['Test 3'] = '测试 3';

$GLOBALS["lang"]['test_minutes'] = '测试分钟';

$GLOBALS["lang"]['Test Minutes'] = '测试分钟';

$GLOBALS["lang"]['test_os'] = '测试 Os';

$GLOBALS["lang"]['Test Os'] = '测试 Os';

$GLOBALS["lang"]['test_subnet'] = '测试子网';

$GLOBALS["lang"]['Test Subnet'] = '测试子网';

$GLOBALS["lang"]['tests'] = '测试';

$GLOBALS["lang"]['Tests'] = '测试';

$GLOBALS["lang"]['Text'] = '文本';

$GLOBALS["lang"]['Thailand'] = '泰国';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = '从中获取子网列表的 Active Directory 域 .';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = '活动目录服务器从中获取子网列表 .';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = '拥有此品之云. 链接到 <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = '专家组曾管理基线。 链接到 <code> groups.id </code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU 设备表( 设备. 名称将显示) 的ID 在连接的这一端 。 链接到 <code>devices.id </code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = '进口基准政策的ID.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = '连接此端位置表( 位置. name 将显示) 的ID 。 链接到 <code>位置.id </code>. A位置通常为<code>FROM</code>位置.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = '连接此端位置表( 位置. name 将显示) 的ID 。 链接到 <code>位置.id </code>. B位置通常是 <code>TO </code>位置.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = '相关设备的ID( 如果有的话) 。 链接到 <code>devices.id </code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = '相关发现的ID. 链接到 <code>发现.id </code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = '相关类型项目的ID .';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = '此 Orgs 父 Org 的标识 。 链接到 <code>orgs.id </code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = '提供人提供的身份证.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = '身份是从云号发现中找到的.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = '此收藏器的IP地址曾与服务器通信.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = '用于启动种子发现的设备的IP.';

$GLOBALS["lang"]['The IP of the external interface.'] = '外部接口的IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = '内部接口的IP.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = '提供这种链接的ISP或Telco.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = '这个用户的LDAP OU(如果使用LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = '包含此网络的位置 。 链接到 <code>位置.id </code>.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap 计时预设 .';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = '这套软件包应对照OS报告。 空为众生. 使用% 签名% 作为通配符 。 将按此顺序测试 os_ group, os_ family 和 os_ name .';

$GLOBALS["lang"]['The Open-AudIT API'] = '开放的AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = '链接云的Open-AudIT id. 链接到 <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = '开放的奥德 IT服务器代码在此文件中被执行.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = '开放的奥德 IT服务器代码在此功能内被执行.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = '拥有此项目的组织 。 链接到 <code>orgs.id </code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '运行中相关发现的流程识别符 .';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = '这个装置顶部的RU正体.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP社区字符串.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 认证密码句 .';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 认证协议.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 隐私密码句 .';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 隐私协议.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 安全级别.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 安全名称.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 上下文引擎 ID (可选).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 上下文名称( 可选) .';

$GLOBALS["lang"]['The URL of the external system.'] = '外部系统的URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = '您的 Open-AudIT 的 URL 服务器, 此收藏器将报告( 没有跟踪斜线 ) .';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '审计脚本应当向URL提交结果.';

$GLOBALS["lang"]['The actual full name of this user.'] = '此用户的实际全名.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '相关基线。 链接到 <code>基线.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '相关发现(如有需要). 链接到 <code>discoveries.id </code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = '测试的属性( 从 < code> devices </code> 表) .';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = '测试的属性( 必须从下面匹配外部字段名称) .';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = '您自定义所依据的审计脚本 .';

$GLOBALS["lang"]['The base path from which to search for Users.'] = '查找用户的基础路径 .';

$GLOBALS["lang"]['The benchmark type.'] = '基准类型.';

$GLOBALS["lang"]['The building the rack is located in.'] = '车架所在的建筑.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '外部创建的设备的计算数量 .';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT中要创建的设备的计算数量.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '收集器内部IP在运行一个发现时使用.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '列名从外表. 应为:类,环境,状态,类型或菜单_类之一.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = '在发现时执行的目标设备或Open-AudIT服务器代码上执行的命令.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = '组别配置为:<code>active/active</code>,<code>active/被动</code>,<code>N+1</code>,<code>N+M</code>,<code>N-to-1</code>,<code>N-to-N</code>,<cde>其他</code>或空白.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '证书密码 如果证书是 SSH 密钥, 这是用于解锁密钥的密码, 是可选的 .';

$GLOBALS["lang"]['The credentials username.'] = '证书用户名.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = '云发现者现状.';

$GLOBALS["lang"]['The current status of the discovery.'] = '发现现状.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = '该用户默认显示的仪表板 。 链接到 <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = '数据库版本和网页版本不一致.';

$GLOBALS["lang"]['The date of license expiration.'] = '执照失效日期.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = '该软件被制造商终止的日期。 通常被较新的版本所取代. 仍可提供维修.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = '该软件不再得到更新的日期实际上完全停止。 维护工作中止.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = '本项目更改或添加的日期(仅阅读)。 注 - 这是服务器发送的时间戳 .';

$GLOBALS["lang"]['The date/time when this result was created.'] = '创建此结果的日期/ 时间 .';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '执行这项任务的月份日(*每天).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = '每周执行这项任务的当天(*每天).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = '此方法创建的任何用户都使用默认语言 .';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = '该设备必须响应Nmap ping,然后才被视为在线.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT内部的设备. 链接到 <code>devices.id </code>.';

$GLOBALS["lang"]['The direct link for the script is'] = '脚本的直接链接是';

$GLOBALS["lang"]['The email address of the reciever'] = '回信器的电子邮件地址';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = '这一结果来自整个相关基线.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '外部引用的地点编号 。 通常以Cloud审计为居民.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT首次检索此设备的细节.';

$GLOBALS["lang"]['The floor the rack is located on.'] = '架子位于地面上.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '外表为参考. 应该是设备、地点、兽群或查询之一.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '以电子邮件传送输出所使用的格式 .';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '完全合格的栏目,可编组。 注:当类型=流量时,这代表红色查询编号.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '完全合格表. 栏目. 多个可以提供,用逗号分隔(没有空格).';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = '基线所对应的一组装置.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '提供集成设备列表的组. 链接到 <code> groups.id </code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '执行这项任务的当天时间(*每个小时).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = '链接设备的ID. 链接到 <code>devices.id </code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = '数据库中的标识栏(整数)(只读).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = '这一基线的重要性(尚未使用).';

$GLOBALS["lang"]['The integer of severity.'] = '严重程度的整数.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth 方法的 ip 地址 .';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = '为用户翻译网页界面的语言.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '此项目的最后日期和时间被执行( 只读) .';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT最后一次检索此设备的细节.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = '上一次执行这一基准.';

$GLOBALS["lang"]['The last time this integration was run.'] = '最后一次进行这种整合.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = '连接的这一端由提供者指定给线路的行号.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = '车架所在位置. 链接到 <code>位置.id </code>.';

$GLOBALS["lang"]['The locations address.'] = '地点地址.';

$GLOBALS["lang"]['The locations area.'] = '地点.';

$GLOBALS["lang"]['The locations city.'] = '地点城市.';

$GLOBALS["lang"]['The locations country.'] = '地点国.';

$GLOBALS["lang"]['The locations district.'] = '地点区.';

$GLOBALS["lang"]['The locations latitude.'] = '位置纬度.';

$GLOBALS["lang"]['The locations level.'] = '地点级别.';

$GLOBALS["lang"]['The locations longitude.'] = '位置经纬度.';

$GLOBALS["lang"]['The locations phone.'] = '地点电话.';

$GLOBALS["lang"]['The locations postcode.'] = '地点邮编码.';

$GLOBALS["lang"]['The locations region.'] = '地点区域.';

$GLOBALS["lang"]['The locations room.'] = '地点的房间.';

$GLOBALS["lang"]['The locations state.'] = '地点州.';

$GLOBALS["lang"]['The locations suburb.'] = '地点在郊区.';

$GLOBALS["lang"]['The locations suite.'] = '地点套房.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '最大物理重量(以KGs计) 这个架子可以保持.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = '这个架子的最大总BTU被评为.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = '此任务执行时的分钟( * 每分钟) .';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = '这一任务应当执行的年份的月份(*每月).';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = '本项目的名称 。 理想的情况应该是独一无二的.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = '给这个用户的名称( 用于登录) 。 理想的情况应该是独一无二的.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = '相关云名称(如有需要).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = '软件包的名称,由Open-AudIT审计. 使用% 签名% 作为通配符 .';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = '最后更改或添加此项目的用户名称( 只读) .';

$GLOBALS["lang"]['The name provided by the provider.'] = '供养者提供之名.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = '网易格式192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = '执行此发现的网络子网 .';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = '此设备占用的 RU 数量 .';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = '相关地点的数目。 链接到 <code>位置.cloud_id </code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = '关联网络的数量. 链接到 <code>网络.cloud_id </code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = '此云中已审计设备的数量 。 链接到<code>devices.cloud_id</code>和<code>devices.serial</code>.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = '这个发现发现的装置数量.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = '关联组中的设备数量 .';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '此云中具有运行状态的设备数量 。 链接到 <code>devices.cloud_id</code>和 <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '此云中已停止状态的设备数量 。 链接到 <code>devices.cloud_id</code>和 <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = '此云器数. 链接到 <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = '此基准将执行设备的数量 。 衍生自<code>基准标记.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = '限制此发现的装置数量 .';

$GLOBALS["lang"]['The number of purchased licenses.'] = '购买许可证的数量.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = '尝试与目标IP通信的秒数.';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = '选第二栏. 注:当类型=流量时,这代表黄色查询id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = '选第三栏. 注:当类型=流量时,这代表绿色查询编号.';

$GLOBALS["lang"]['The orientation of this device.'] = '这个装置的方向.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Dn_count 属性的密码 .';

$GLOBALS["lang"]['The password used to access the external system.'] = '用于访问外部系统的密码.';

$GLOBALS["lang"]['The path to the file or directory.'] = '文件或目录的路径 .';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = '文件或目录的路径 。 Directories的结尾应该有一个后遗症.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = '机架的物理深度(在CMS中).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = '机架的物理高度(在CMS).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = '目前机架的物理重量(KGs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = '架空时的物理重量(KGs).';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = '机架的物理宽度(在CMS中).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = '这个架子是其中的一部分.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = '这个架子的电路.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = '用于此部件的主数据库表 .';

$GLOBALS["lang"]['The process identifier of this queue item.'] = '此队列项的进程标识符 .';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = '最后用于获取设备细节的过程';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = '提供集成设备列表的查询. 链接到 <code>queries.id </code>.';

$GLOBALS["lang"]['The rack asset number.'] = '架子资产号.';

$GLOBALS["lang"]['The rack asset tag.'] = '机架资产标签.';

$GLOBALS["lang"]['The rack bar code.'] = '架子条码.';

$GLOBALS["lang"]['The rack model.'] = '车架模型.';

$GLOBALS["lang"]['The rack serial.'] = '架子连载.';

$GLOBALS["lang"]['The rack series.'] = '架子丛书.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = '此设备的架子位于其中. 链接到 <code>racks.id </code>.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = '您目录的正则域名标记 。 Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = '命令的结果.';

$GLOBALS["lang"]['The room the rack is located in.'] = '车架所在的房间.';

$GLOBALS["lang"]['The row the rack is located in.'] = '架子所在的行.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = '与您的 AWS EC2 API 密钥结合使用的密钥 .';

$GLOBALS["lang"]['The software end-of-life date.'] = '软件报废日期.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = '软件报废使用年限.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '指定数据库表格中的特定数据库列.';

$GLOBALS["lang"]['The specific database table.'] = '具体数据库表.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Nmap 标准计时选项 。 我们通常使用 -T4(Agressive),因为这被推荐为像样的宽带或醚网连接.';

$GLOBALS["lang"]['The status of this integration'] = '这种一体化的现状';

$GLOBALS["lang"]['The status of this queued item.'] = '此队列项的状态 .';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = '目标IP 此日志条目引用( 如果有) .';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = '每个结果行生成的链接模板.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = '直线图中图底的文字(仅限).';

$GLOBALS["lang"]['The text that is displayed.'] = '显示的文本 .';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2001-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = '时间戳之后,这项任务应该进行。 例如,在2017年6月1日10时后运行一个任务,设定为 <code>2017-06-01 09:59:00 </code>. 此值应为零加法( e, 09, 不是 9) 。 这个值默认为<code>2001-01-01 00:00</code>,这意味着默认情况下,一个预定任务将在下一个预定执行时间运行.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '根据Nmap通常使用的前10,100或1000(或无)TCP端口.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '根据Nmap通常使用的前10,100或1000(或无)UDP端口.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'BTU的总输出通过这个架.';

$GLOBALS["lang"]['The type of device.'] = '器类.';

$GLOBALS["lang"]['The type of organisation.'] = '组织的类型.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = '机架类型(计算,功率,网络等).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = '要执行的任务类型 。 其中:基线,基准,云发现,发现,整合,报告,查询.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = '集成类型(通常以外部系统命名).';

$GLOBALS["lang"]['The unique identifier of this server.'] = '此服务器的唯一标识符 .';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = '此收藏器使用的用户账户 。 链接到 <code>用户.id </code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = '用于访问外部系统的用户名.';

$GLOBALS["lang"]['The users email address.'] = '用户电子邮件地址 .';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '这里正常的营业时间.';

$GLOBALS["lang"]['The value assigned to the item.'] = '分配给项目的值 .';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = '此特定项目的存储值 .';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = '安装 Open-AudIT 的主机上的网络目录( 需要后继斜线) .';

$GLOBALS["lang"]['The widget at position '] = '位置上的部件';

$GLOBALS["lang"]['The width of this device.'] = '此设备的宽度 .';

$GLOBALS["lang"]['Then'] = '礛';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = '此属性作为 JSON 对象存储 。 它是所有收藏的列表,并载有收藏名称以及 <code>c</code>,<code>r</code>,<code>u</code>和,或<code>d</code>,代表创建、阅读、更新和删除。 这些是用户可以对来自该特定收藏的物品采取的行动.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = '这可以是 varchar(文本字段),列表(可以选择的数值列表)或日期.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = '这个收藏家具有普遍独特的识别特征.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = '这种描述是自动流行的,最好还是保持原样.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = '这一特点需要专业或企业许可证.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = '这一般是主列,除非另有配置. 注:当类型=流量时,这是次要文本.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = '本项目必须匹配所选属性的值或包含要使用的查询的ID.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = '此项目必须匹配所选属性的值 .';

$GLOBALS["lang"]['This license expires on'] = '此许可证过期于';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = '这应当设定为1或架高.';

$GLOBALS["lang"]['This will auto-populate.'] = '这会自动流行.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '这将大大减缓发现扫描的速度.';

$GLOBALS["lang"]['Thursday'] = '星期四';

$GLOBALS["lang"]['time'] = '时间';

$GLOBALS["lang"]['Time'] = '时间';

$GLOBALS["lang"]['time_caption'] = '时间说明';

$GLOBALS["lang"]['Time Caption'] = '时间说明';

$GLOBALS["lang"]['time_daylight'] = '时间日光';

$GLOBALS["lang"]['Time Daylight'] = '时间日光';

$GLOBALS["lang"]['Time to Execute'] = '执行时间';

$GLOBALS["lang"]['timeout'] = '超时';

$GLOBALS["lang"]['Timeout'] = '超时';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = '每个目标超时(秒)';

$GLOBALS["lang"]['Timesatamp'] = '时间标签';

$GLOBALS["lang"]['Timestamp'] = '时间戳';

$GLOBALS["lang"]['timing'] = '时间安排';

$GLOBALS["lang"]['Timing'] = '时间安排';

$GLOBALS["lang"]['Timor-Leste'] = '东帝汶';

$GLOBALS["lang"]['Title'] = '标题';

$GLOBALS["lang"]['Togo'] = '多哥';

$GLOBALS["lang"]['Tokelau'] = '托克劳';

$GLOBALS["lang"]['Tonga'] = '汤加';

$GLOBALS["lang"]['toolbar_style'] = '工具栏样式';

$GLOBALS["lang"]['Toolbar Style'] = '工具栏样式';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = '顶端 Nmap TCP 端口';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = '顶端 Nmap UDP 端口';

$GLOBALS["lang"]['Traditional Chinese'] = '传统汉语';

$GLOBALS["lang"]['Traffic Light'] = '交通灯';

$GLOBALS["lang"]['Trinidad and Tobago'] = '特立尼达和多巴哥';

$GLOBALS["lang"]['Tuesday'] = '星期二';

$GLOBALS["lang"]['Tunisia'] = '突尼斯';

$GLOBALS["lang"]['Turkey'] = '土耳其';

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

$GLOBALS["lang"]['URL'] = '網址';

$GLOBALS["lang"]['uuid'] = '用户';

$GLOBALS["lang"]['UUID'] = '用户';

$GLOBALS["lang"]['udp_ports'] = 'Udp 端口';

$GLOBALS["lang"]['Udp Ports'] = 'Udp 端口';

$GLOBALS["lang"]['Uganda'] = '乌干达';

$GLOBALS["lang"]['uid'] = '用户';

$GLOBALS["lang"]['Uid'] = '用户';

$GLOBALS["lang"]['Ukraine'] = '乌克兰';

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

$GLOBALS["lang"]['Unused as at 5.2.0.'] = '未使用,为5.2.0.';

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

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = '更新 Open-AudIT 设备从';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = '更新 Open-AudIT NMIS 设备';

$GLOBALS["lang"]['updated_at'] = '更新时间';

$GLOBALS["lang"]['Updated At'] = '更新时间';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '每次发现被执行时都会更新,检测到IP响应.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = '每次发现都用Nmap扫描过的IP执行更新.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '每次发现时都会更新 我们用能够审计的设备执行.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = '每次发现被执行时都会更新, 设备我们能够查询 .';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '每次发现执行后都会更新.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '每次发现被执行时都会更新.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '每次发现完成后都会更新.';

$GLOBALS["lang"]['Upgrade'] = '升级';

$GLOBALS["lang"]['Upload an audit result file'] = '上传审计结果文件';

$GLOBALS["lang"]['Upper Case'] = '大写';

$GLOBALS["lang"]['uptime'] = '时间';

$GLOBALS["lang"]['Uptime'] = '时间';

$GLOBALS["lang"]['url'] = '乌尔尔';

$GLOBALS["lang"]['Url'] = '乌尔尔';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = '乌拉圭,东共和国';

$GLOBALS["lang"]['usb'] = '用户b';

$GLOBALS["lang"]['Usb'] = '用户b';

$GLOBALS["lang"]['use_authentication'] = '使用认证';

$GLOBALS["lang"]['Use Authentication'] = '使用认证';

$GLOBALS["lang"]['use_authorisation'] = '使用授权';

$GLOBALS["lang"]['Use Authorisation'] = '使用授权';

$GLOBALS["lang"]['Use SNMP'] = '使用 SNMP';

$GLOBALS["lang"]['Use SSH'] = '使用 SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = '使用安全( LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = '使用服务版本检测';

$GLOBALS["lang"]['Use WMI'] = '使用 WMI 软件';

$GLOBALS["lang"]['Use for Authentication'] = '用于认证';

$GLOBALS["lang"]['Use for Roles'] = '用于角色';

$GLOBALS["lang"]['used'] = '已使用';

$GLOBALS["lang"]['Used'] = '已使用';

$GLOBALS["lang"]['used_count'] = '已使用的计数';

$GLOBALS["lang"]['Used Count'] = '已使用的计数';

$GLOBALS["lang"]['used_percent'] = '使用百分比';

$GLOBALS["lang"]['Used Percent'] = '使用百分比';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = '仅由OpenLDAP使用.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = '发现单个设备时内部使用.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = '发现单个设备时内部使用. 链接到 <code>devices.id </code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = '当 LDAP 服务器被配置以填充用户细节时使用 - 这包括他们可以访问的 Orgs 。 如果用户属于此 LDAP 组, 它们会被指定为此 org .';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = '当 LDAP 服务器被配置以添加用户细节时使用 - 这包括他们被指派的角色 。 如果一个用户在这个LDAP组中,他们就被分配这个角色.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = '搜索 OpenLDAP 时用于匹配用户 uid 组成员 。 <code>memberUid </code>的默认值。 仅由OpenLDAP使用.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = '用于整合和第一Wave监测应用程序.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = '用于整合和第一Wave监测应用程序。 如果通过发现检测到工作 SNMP 则设定为 Y .';

$GLOBALS["lang"]['user'] = '用户';

$GLOBALS["lang"]['User'] = '用户';

$GLOBALS["lang"]['User DN'] = '用户 DN';

$GLOBALS["lang"]['user_group'] = '用户组';

$GLOBALS["lang"]['User Group'] = '用户组';

$GLOBALS["lang"]['user_id'] = '用户代号';

$GLOBALS["lang"]['User ID'] = '用户代号';

$GLOBALS["lang"]['User Membership Attribute'] = '用户成员属性';

$GLOBALS["lang"]['user_name'] = '用户名';

$GLOBALS["lang"]['User Name'] = '用户名';

$GLOBALS["lang"]['User Policies'] = '用户政策';

$GLOBALS["lang"]['username'] = '用户名';

$GLOBALS["lang"]['Username'] = '用户名';

$GLOBALS["lang"]['users'] = '用户';

$GLOBALS["lang"]['Users'] = '用户';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = '通常为Mb/s,来自地点A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = '通常为Mb/s,来自B位置.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = '通常为Mb/s,到位置A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = '通常为Mb/s,到B位置.';

$GLOBALS["lang"]['Uzbekistan'] = '乌兹别克斯坦';

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

$GLOBALS["lang"]['values'] = '数值';

$GLOBALS["lang"]['Values'] = '数值';

$GLOBALS["lang"]['Vanuatu'] = '瓦努阿图';

$GLOBALS["lang"]['VarChar'] = '瓦尔察';

$GLOBALS["lang"]['Varchar'] = '瓦尔查尔';

$GLOBALS["lang"]['variable'] = '变量';

$GLOBALS["lang"]['Variable'] = '变量';

$GLOBALS["lang"]['vendor'] = '供应商';

$GLOBALS["lang"]['Vendor'] = '供应商';

$GLOBALS["lang"]['Venezuela'] = '委内瑞拉';

$GLOBALS["lang"]['version'] = '版本';

$GLOBALS["lang"]['Version'] = '版本';

$GLOBALS["lang"]['version_padded'] = '版本添加';

$GLOBALS["lang"]['Version Padded'] = '版本添加';

$GLOBALS["lang"]['version_string'] = '版本字符串';

$GLOBALS["lang"]['Version String'] = '版本字符串';

$GLOBALS["lang"]['video'] = '视频';

$GLOBALS["lang"]['Video'] = '视频';

$GLOBALS["lang"]['Vietnam'] = '越南';

$GLOBALS["lang"]['View'] = '视图';

$GLOBALS["lang"]['View All'] = '全部查看';

$GLOBALS["lang"]['View Details'] = '查看细节';

$GLOBALS["lang"]['View Device'] = '查看设备';

$GLOBALS["lang"]['View Discovery'] = '查看发现';

$GLOBALS["lang"]['View Policy'] = '查看策略';

$GLOBALS["lang"]['Virtual Private Network'] = '虚拟私人网络';

$GLOBALS["lang"]['Virtualisation'] = '虚拟化';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = '访问我们的YouTube频道 教学视频.';

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

$GLOBALS["lang"]['WHERE'] = '何处';

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

$GLOBALS["lang"]['Web'] = '网页';

$GLOBALS["lang"]['Webserver'] = 'Web 服务器';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = '欢迎来到第一Wave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = '西撒哈拉';

$GLOBALS["lang"]['what'] = '什麽';

$GLOBALS["lang"]['What'] = '什麽';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '这个架子的目的是什么.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '这个位置是什么类型 。 在 < code> 属性 </code> 表格中保存的允许类型.';

$GLOBALS["lang"]['when'] = '何时';

$GLOBALS["lang"]['When'] = '何时';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '在从外部系统整合设备时,如果设备在Open-AudIT中不存在,我们应该创建它吗?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '在从外部系统集成设备时,如果设备在外部系统中已经更新,我们是否应该在Open-AudIT中更新?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '在取回一个外部设备时,我们是否应该进行发现?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = '计划执行此基准时 。 衍生自关联的<code> tasks.type</code>和<code> tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = '此日志创建时 .';

$GLOBALS["lang"]['When this queue item started processing.'] = '当此队列项目开始处理时 .';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '当我们收到一个开放的端口时,我们是否应该尝试测试目前运行在端口上的服务版本? 这有助于确认实际运行的服务.';

$GLOBALS["lang"]['where'] = '何处';

$GLOBALS["lang"]['Where'] = '何处';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = '在设备细节屏幕上您想要看到此字段的出现 .';

$GLOBALS["lang"]['Where the rack is in the row.'] = '架在行处.';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = '此基准适用于哪一个 OS .';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '哪些设备应从外部系统创建 Open-AudIT( 如果有的话) 。 使用全部, 无或给定属性 .';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = '我们应该在哪个子菜单中显示此查询 .';

$GLOBALS["lang"]['Who made this rack.'] = '谁做的这个架子.';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '为什么我们排斥这一政策?';

$GLOBALS["lang"]['Wide Area Network'] = '广域网';

$GLOBALS["lang"]['Widget'] = '部件';

$GLOBALS["lang"]['Widget # '] = '部件 #';

$GLOBALS["lang"]['Widget Type'] = '部件类型';

$GLOBALS["lang"]['widgets'] = '部件';

$GLOBALS["lang"]['Widgets'] = '部件';

$GLOBALS["lang"]['width'] = '宽度';

$GLOBALS["lang"]['Width'] = '宽度';

$GLOBALS["lang"]['windows'] = '窗口';

$GLOBALS["lang"]['Windows'] = '窗口';

$GLOBALS["lang"]['Wireless Local Area Network'] = '无线局域网';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi 失败';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi 失败';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi 超时';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi 超时';

$GLOBALS["lang"]['workgroup'] = '工作组';

$GLOBALS["lang"]['Workgroup'] = '工作组';

$GLOBALS["lang"]['Working Credentials'] = '工作全权证书';

$GLOBALS["lang"]['XML'] = 'XML 数据';

$GLOBALS["lang"]['Yellow Query'] = '黄问';

$GLOBALS["lang"]['Yemen'] = '也门';

$GLOBALS["lang"]['Yes'] = '对';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = '您可能想要在电子邮件中复制并粘贴此 URL .';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '您必须先删除您已有的许可证, 然后再添加新的许可证 .';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube 教习';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = '您的 AWS EC2 API 密钥 .';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = '您的谷歌计算证书为 JSON .';

$GLOBALS["lang"]['Your Licenses'] = '您的驾照';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = '你的微软Azure客户端ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = '您的微软 Azure 客户端机密 .';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = '您的微软 Azure 订阅 ID .';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = '你的微软Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = '您的 SQL 选择将包含此查询的属性 .';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = '您的 SQL 要选择将包含此组的设备 .';

$GLOBALS["lang"]['Your SSH key.'] = '你的SSH钥匙.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = '您的访问权限, 根据云的本地API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = '您描述此连接的状况( 已提供、 已退休等) .';

$GLOBALS["lang"]['Your description of this item.'] = '你对这个项目的描述.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = '此软件的通用名称';

$GLOBALS["lang"]['Your generic version for this piece of software'] = '您的软件通用版本';

$GLOBALS["lang"]['Zambia'] = '赞比亚';

$GLOBALS["lang"]['Zimbabwe'] = '津巴布韦';

$GLOBALS["lang"]['active'] = '活动';

$GLOBALS["lang"]['active directory'] = '活动目录';

$GLOBALS["lang"]['active/active'] = '活动/活动';

$GLOBALS["lang"]['active/passive'] = '活动/被动';

$GLOBALS["lang"]['ad hoc'] = '特设';

$GLOBALS["lang"]['alert'] = '警报';

$GLOBALS["lang"]['all'] = '全部';

$GLOBALS["lang"]['allocated'] = '拨款';

$GLOBALS["lang"]['amazon'] = '亚马逊';

$GLOBALS["lang"]['antivirus'] = '抗病毒药';

$GLOBALS["lang"]['application'] = '应用程序';

$GLOBALS["lang"]['approved'] = '核定数';

$GLOBALS["lang"]['attribute'] = '属性';

$GLOBALS["lang"]['auto'] = '自动';

$GLOBALS["lang"]['backup'] = '备份';

$GLOBALS["lang"]['banned'] = '被禁止';

$GLOBALS["lang"]['bottom'] = '下边';

$GLOBALS["lang"]['building'] = '大楼';

$GLOBALS["lang"]['cloud'] = '阴云';

$GLOBALS["lang"]['collector'] = '收藏家';

$GLOBALS["lang"]['compute'] = '计算';

$GLOBALS["lang"]['contains'] = '包含';

$GLOBALS["lang"]['create'] = '创建';

$GLOBALS["lang"]['created'] = '创建';

$GLOBALS["lang"]['critical'] = '关键';

$GLOBALS["lang"]['database'] = '数据库';

$GLOBALS["lang"]['debug'] = '调试';

$GLOBALS["lang"]['defined process'] = '定义进程';

$GLOBALS["lang"]['delegated'] = '授权';

$GLOBALS["lang"]['delete'] = '删除';

$GLOBALS["lang"]['deleted'] = '删除';

$GLOBALS["lang"]['denied'] = '拒绝';

$GLOBALS["lang"]['devices'] = '设备';

$GLOBALS["lang"]['digitalocean'] = '数字海洋';

$GLOBALS["lang"]['does not equal'] = '不等于';

$GLOBALS["lang"]['emergency'] = '紧急';

$GLOBALS["lang"]['entra'] = '内';

$GLOBALS["lang"]['equals'] = '等于';

$GLOBALS["lang"]['error'] = '错误';

$GLOBALS["lang"]['excluded'] = '不包括';

$GLOBALS["lang"]['expired'] = '过期';

$GLOBALS["lang"]['fail'] = '失败';

$GLOBALS["lang"]['false'] = '虚假';

$GLOBALS["lang"]['firewall'] = '防火墙';

$GLOBALS["lang"]['fixed'] = '固定';

$GLOBALS["lang"]['floor'] = '楼层';

$GLOBALS["lang"]['front'] = '前面';

$GLOBALS["lang"]['front-left'] = '前左侧';

$GLOBALS["lang"]['front-right'] = '右前边';

$GLOBALS["lang"]['github'] = ' gi';

$GLOBALS["lang"]['google'] = '谷歌';

$GLOBALS["lang"]['greater or equals'] = '大于或等于';

$GLOBALS["lang"]['greater than'] = '大于';

$GLOBALS["lang"]['group'] = '组';

$GLOBALS["lang"]['head'] = '头';

$GLOBALS["lang"]['here'] = '这里';

$GLOBALS["lang"]['high availability'] = '高可用性';

$GLOBALS["lang"]['ignored'] = '忽略';

$GLOBALS["lang"]['in'] = '内';

$GLOBALS["lang"]['inactive'] = '不活动';

$GLOBALS["lang"]['info'] = '信息';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = '内置、文本、布尔(y/n)等';

$GLOBALS["lang"]['is licensed to'] = '被许可使用';

$GLOBALS["lang"]['left'] = '左边';

$GLOBALS["lang"]['less or equals'] = '小数或等于';

$GLOBALS["lang"]['less than'] = '小于';

$GLOBALS["lang"]['license'] = '许可证';

$GLOBALS["lang"]['like'] = '喜欢';

$GLOBALS["lang"]['line'] = '线条';

$GLOBALS["lang"]['load balancing'] = '负载平衡';

$GLOBALS["lang"]['location'] = '地点';

$GLOBALS["lang"]['managed and measurable'] = '管理和可衡量';

$GLOBALS["lang"]['microsoft'] = '微软';

$GLOBALS["lang"]['mount point'] = '挂载点';

$GLOBALS["lang"]['network'] = '网络';

$GLOBALS["lang"]['no'] = '无';

$GLOBALS["lang"]['node'] = '节点';

$GLOBALS["lang"]['non-existent'] = '不存在';

$GLOBALS["lang"]['none'] = '无';

$GLOBALS["lang"]['normal'] = '常规';

$GLOBALS["lang"]['not applicable'] = '不适用';

$GLOBALS["lang"]['not in'] = '没有在';

$GLOBALS["lang"]['not like'] = '不喜欢';

$GLOBALS["lang"]['notice'] = '通知';

$GLOBALS["lang"]['okta'] = '罢';

$GLOBALS["lang"]['openldap'] = '打开';

$GLOBALS["lang"]['optimized'] = '优化';

$GLOBALS["lang"]['optionally '] = '可选';

$GLOBALS["lang"]['other'] = '其他项目';

$GLOBALS["lang"]['partition'] = '分区';

$GLOBALS["lang"]['pass'] = '通过';

$GLOBALS["lang"]['pending'] = '待处理';

$GLOBALS["lang"]['performance'] = '业绩';

$GLOBALS["lang"]['pie'] = '馅饼';

$GLOBALS["lang"]['planning'] = '规划';

$GLOBALS["lang"]['query'] = '查询';

$GLOBALS["lang"]['rear'] = '后边';

$GLOBALS["lang"]['rear-left'] = '后左边';

$GLOBALS["lang"]['rear-right'] = '后侧';

$GLOBALS["lang"]['regex'] = '缩写';

$GLOBALS["lang"]['repeatable but intuitive'] = '可重复但直观';

$GLOBALS["lang"]['reserved'] = '保留';

$GLOBALS["lang"]['right'] = '对';

$GLOBALS["lang"]['room'] = '房间';

$GLOBALS["lang"]['row'] = '线条';

$GLOBALS["lang"]['stand-alone'] = '独立';

$GLOBALS["lang"]['standard'] = '标准';

$GLOBALS["lang"]['starts with'] = '开始于';

$GLOBALS["lang"]['storage'] = '存储';

$GLOBALS["lang"]['timestamp'] = '时间戳';

$GLOBALS["lang"]['top'] = '顶端';

$GLOBALS["lang"]['traffic'] = '运输';

$GLOBALS["lang"]['true'] = '真实';

$GLOBALS["lang"]['unallocated'] = '未分配';

$GLOBALS["lang"]['unauthorised'] = '未授权';

$GLOBALS["lang"]['unknown'] = '不详';

$GLOBALS["lang"]['unmanaged'] = '未管理';

$GLOBALS["lang"]['unused'] = '未使用';

$GLOBALS["lang"]['update'] = '更新';

$GLOBALS["lang"]['valid'] = '无效';

$GLOBALS["lang"]['virtualisation'] = '虚拟化';

$GLOBALS["lang"]['warning'] = '警告';

$GLOBALS["lang"]['web'] = '网页';

$GLOBALS["lang"]['yes'] = '对';

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
