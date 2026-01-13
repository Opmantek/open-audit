<?php
$GLOBALS["lang"][' Default, currently '] = ' 기본, 현재 ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' 예상대로 작동하지 않는 경우, 당신의 첫 번째 일은 로그를 확인합니다.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' 이제 언어 파일로 지원됩니다. 이 언어를 사용하는 사용자를 변경하려면 클릭 ';

$GLOBALS["lang"][' seconds'] = ' 지원하다';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', 그러나 Logon credentials의 분리된 세트를 기억할 필요가 없습니다.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', 우리가 기본 설정으로 thirty 이상 공급. Professional 사용자는 이러한 변경할 수 없지만 Enterprise 사용자는 자신의 생성을 포함하여 사용자 정의 능력을 완료했습니다.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', 너 <i>지원하다</i> Open-AudIT 서버에서 Auth에 Entra를 사용할 수 있습니다. 아파치 설정하기 <strong>https://www.google.com/</strong> auth를 위한 Entra 구성하기 전에.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '· 이를 활성화하려면 구성 항목을 편집합니다. ';

$GLOBALS["lang"]['10 Minutes'] = '10 분';

$GLOBALS["lang"]['15 Minutes'] = '15 분';

$GLOBALS["lang"]['30 Minutes'] = '30 분';

$GLOBALS["lang"]['5 Minutes'] = '5 분';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 통제는 조직, 사람들, 육체 및 과학적인 종류로 그룹화했습니다';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>이름 *</strong> - 로컬 Open-AudIT 서버에서 이 URL에 액세스하고 있습니다. 다운로드된 스크립트는 다른 기계에서 실행할 때 제출할 수 없습니다. 다른 기계를 감사 할 필요가 있다면, Open-AudIT 서버 자체에 브라우저를 사용하지 않는 모든 원격 기계에서 스크립트를 다운로드하십시오.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">이름 *</strong> - 대상 장치에 벤치 마크를 실행하려면 SSH 또는 SSH 키 자격 증명을 작업해야합니다.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>기본 정보</strong> - 기본 정의와 개별 정책 테스트를 포함하는 overarching 문서.<br/> <br/> <strong>회사연혁</strong> - Baseline에 포함된 개별 시험. 각 시험은 특정한 품목을 위해 입니다. 예를 들어 SSH 버전 1.2.3에 대한 테스트가 될 것입니다.<br/> <br/> <strong>이름 *</strong> - Baselines는 netstat 포트, 사용자 및 소프트웨어를 비교할 수 있습니다.<br/> <br/> <strong>소프트웨어</strong> - 소프트웨어를 비교하기 위해 우리는 이름과 버전을 확인합니다. 버전 번호가 형식에서 표준되지 않기 때문에 감사 결과를받을 때 우리는 각 패키지에 대한 소프트웨어 세부 사항의 나머지와 함께 데이터베이스에 저장하는 소프트웨어_padded라는 새로운 속성을 만듭니다. 이러한 이유로, 소프트웨어 정책을 사용하는 기본은 1.10 (최소)에 의해 감사되지 않은 장치에 대해 실행 할 때 작동하지 않을 것입니다. 소프트웨어 정책은 "equal to", "greater than"또는 "equal to 또는 그 이상의 버전에 대해 테스트 할 수 있습니다.<br/> <br/> <strong>Netstat 포트</strong> - Netstat 포트는 포트 번호, 프로토콜 및 프로그램의 조합을 사용합니다. 모든 것이 정책 패스입니다.<br/> <br/> <strong>이름 *</strong> - 사용자는 Netstat 항구와 유사합니다. 사용자의 일치 이름, 상태 및 암호 세부 사항 (변경 가능, 만료, 필요) 그런 다음 정책 패스.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>위치는 그것과 관련된 장치를 가질 수있는 물리적 주소입니다.<br/> <br/>좌표(lat/long)을 지정할 수 있으며, 지정된 장치가 있다면, 위치는 Open-AudIT Enterprise 맵에 표시됩니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>네트워크는 discovery 항목 및 장치 속성에서 파생됩니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>요약은 지정된 속성의 특정 값에 의해 분류 된 항목의 목록을 표시합니다. <code>table</code> · <code>column</code> 이름 *<br/> <br/>요약이 실행되면 결과가 해당 값의 목록이 될 것입니다. <code>table</code> · <code>column</code>· 사용자를 허용하는 값에 대한 링크가 일치 장치를 볼 수 있습니다.<br/> <br/>속성이면 <code>extra_columns</code> 결과 페이지는 표준 장치 열 이외에 이러한 열을 포함 할 것입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>에이전트는 발견 없이 PC를 감사 합니다. 에이전트를 설치하고 매일 서버로 체크인하고 감사 자체. 컴퓨터가 방화벽이면, 감사 데이터가 여전히 Open-AudIT에 나타날 것입니다.</p><p>테스트 <strong>이름 *</strong> 에이전트는 작업을 수행해야합니다, 모든 세 가지 테스트는 통과해야합니다 (테스트가 설정되면). <strong>다음 것</strong> 작업이 수행됩니다.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>응용 프로그램은 사용자에게 정의되며 Open-AudIT에 저장되어 장치와 연결됩니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>속성은 Open-AudIT에 저장됩니다.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>기계가 동일한 구성을 결정할 수 있기 때문에 시스템 관리 및 감사의 주요 부분입니다. 그리고 이제는 간단하고 자동화 될 것입니다. 기본 설정을 정의하면 미리 결정된 일정에 장치 세트에 대해 자동으로 실행됩니다. 이 실행된 기본 설정의 출력은 웹보기를 위해 사용할 수 있으며, 제3자 시스템 또는 인쇄 된 보고서로 가져올 수 있습니다.<br/> <br/> Baselines는 이전에 정의된 속성의 세트로 감사 데이터를 결합하여 기기의 준수를 결정할 수 있습니다.<br/> <br/> 예를 들어, 클러스터에서 apache 서버 중 하나인 Centos 6을 실행하는 장치에서 baseline을 생성할 수 있습니다. 이 특정 서버는 당신이 그것을 원하지만 클러스터의 다른 서버가 정확히 동일하게 구성되는지 확인하는 방법입니다. Baselines는 이것을 결정할 수 있습니다.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>클러스터는 Open-AudIT에 저장되어 더 나은 기록, 관리 및 견적의 라이센싱 비용을 확보합니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>구성 요소는 장치에 대한 속성을 저장하는 테이블에 사용되는 일반적인 용어입니다. 이 테이블은 다음과 같습니다 access_point, arp, bios, 인증서, cli_config, 디스크, dns, 파일, IP, 라이센스, 로그, 메모리, 모듈, 모니터, 모더 보드, netstat, 네트워크, nmap, 광학, 페이지 파일, 파티션, 정책, print_queue, 프로세서, 라디오, 경로, 산, scsi, 서버, server_item, 서비스, 공유, 소프트웨어, software_key, 사운드, 작업, USB, 사용자, user_group, 변수, 비디오, vm.</p><p> 또한 우리는 다음과 같은 테이블을 장치 관련 분류 : 응용 프로그램, 첨부 파일, 클러스터, 자격, 이미지.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials는 데이터베이스에 저장될 때 암호화됩니다.<br/> <br/>디스커버리가 실행될 때, 디바이스는 먼저 연결하기 위해 재평가하고 테스트해 줍니다 (from) <code>credential</code> 테이블). 이 실패한 경우, 주어진 Org와 관련된 자격 <code>credentials.org_id</code> 또한 장치에 대하여 시험됩니다. 작업 자격 증명은 자격 증명 테이블 (참고 - 테이블 이름에서 "s" 없음)의 개별 장치 수준에 저장됩니다.<br/> <br/>SSH 키는 SSH 사용자 이름 / 암호 전에 테스트됩니다. SSH를 테스트 할 때, credentials는 sudo 또는 뿌리로 작업으로 표시 될 것입니다.<br/> <br/>사용의 용이성, Windows 비밀번호는 단일 또는 이중 견적을 포함하지 않아야합니다. 이것은 원격 WMI 제한이며, Open-AudIT 제한이 아닙니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credentials는 접근 장치에 사용됩니다.<br/> <br/>구성 자격은 Open-AudIT를 설치 한 후 수행 한 첫 번째 것들 중 하나입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>랙을 정의하고 장치가 위치를 지정합니다. 당신은 이미 Open-AudIT에서 장치를 가지고 당신은 당신의 위치를 알고. Open-AudIT는 선반을 만들고 장치를 할당할 수 있도록 합니다. Open-AudIT는 선반의 시각화를 제공 할 것이며, 내부에 포함된 장치. 장치 그림을 제공하면 그림이 시각화에 사용됩니다. 화면에 선반을 볼 수 있고 당신이 그것을 앞에 서 있는 경우에 동일한 품목을 볼 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>네트워크의 장치 관리해야 합니다. 그러나 당신은 당신의 기록을 최신 상태로 유지하는 방법? 스프레드시트 - defintley not. 그것은 시간 내에 날짜가 될 것입니다. 왜 수동으로 유지하려고합니다. Open-AudIT를 사용하여 네트워크를 자동으로 스캔하고 장치를 기록하십시오 - 제조업체, 모델, 시리얼 및 기타 100 개 이상의 속성. 소프트웨어, 서비스, 디스크, 오픈 포트, 사용자 등 전체 목록 속성이 추가되었는지 자동 참조, 제거 또는 변경.<br/> <br/>Open-AudIT가 설정되면 다시 앉아 휴식을 취할 수 있습니다. 변경 보고서는 일정에 이메일로 전송됩니다. 예를 들어, 새로운 장치가 이번 주에 발견되었습니까? 이번 주에 새로운 소프트웨어를 설치 했습니까? 지난 달 어떤 하드웨어 변경이 있습니까?<br/> <br/>저장 된 필드에 쉽게 자신의 사용자 정의 속성.<br/> <br/>네트워크 또는 Open-AudIT 서버에 연결되지 않는 장치도 도달할 수 없습니다.<br/> <br/>컴퓨터, 스위치, 라우터, 프린터 또는 네트워크의 다른 장치 - Open-AudIT는 모두 감사 할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>디스커버리는 Open-AudIT가 하는 것의 아주 심장에 있습니다.<br/> <br/>당신은 "내 네트워크에 무슨 일이?<br/> <br/>Discoveries는 각 네트워크의 세부 사항을 입력하지 않고 단일 클릭에서 네트워크에 발견을 실행 할 수있는 데이터 항목을 준비하고 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>팟캐스트 옵션은 글로벌 설정에서 변경됩니다. <a href="../configuration?configuration.name=discovery_default_scan_option">제품 설명</a>· Open-AudIT Enterprise 라이센스가 있는 경우, 발견 및 추가 futher customizable에 따라 설정할 수 있습니다. 팟캐스트 옵션은 다음과 같습니다. (개인 IP를 스캔하는 indicitave 시간을 포함):<br/><br/><strong>UltraFast로</strong>:: <i>1 초</i>· Open-AudIT가 장치에 대해 이야기하고 IOS 장치 (WMI, SSH, SNMP, Apple Sync)를 감지하는 데 필요한 포트 만 스캔합니다. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 항구는 여겨지지 않습니다. 장치는 Nmap ping에 응답해야합니다. 공격적인 타이밍을 사용하십시오.<br/><br><strong>슈퍼빠스트</strong>:: <i>5 초</i>· 상위 10 TCP 및 UDP 포트를 스캔, 뿐만 아니라 포트 62078 (Apple IOS 탐지). 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 항구는 여겨지지 않습니다. 장치는 Nmap ping에 응답해야합니다. 공격적인 타이밍을 사용하십시오.<br><br/><strong>빠른 속도</strong>:: <i>40 초</i>· 최고 100 TCP 및 UDP 포트를 스캔하고 62078 (Apple IOS 탐지)를 포트합니다. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 항구는 여겨지지 않습니다. 장치는 Nmap ping에 응답해야합니다. 공격적인 타이밍을 사용하십시오.<br/><br/><strong>중간 (클래식)</strong>:: <i>90 초</i>· 기존의 Open-AudIT 스캔에 닫습니다. 상위 1000 TCP 포트뿐만 아니라 62078 (Apple IOS 탐지) 및 UDP 161 (SNMP)를 스캔합니다. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 포트가 열 것으로 간주됩니다 (그리고 장치 감지를 트리거합니다). 장치는 Nmap ping에 대한 응답에 관계없이 스캔됩니다. 공격적인 타이밍을 사용하십시오.<br/><br/><strong>한국어</strong>:: <i>100 초</i>· 상위 1000 TCP 및 상위 100 UDP 포트뿐만 아니라 포트 62078 (Apple IOS 탐지)를 스캔합니다. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 항구는 여겨지지 않습니다. 장치는 Nmap ping에 응답해야합니다. 공격적인 타이밍을 사용하십시오.<br/><br/><strong>이름 *</strong>:: <i>4 분</i>· 상위 1000 TCP 및 상위 100 UDP 포트뿐만 아니라 포트 62078 (Apple IOS 탐지)를 스캔합니다. 버전 탐지 활성화. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 포트가 열 것으로 간주됩니다 (그리고 장치 감지를 트리거합니다). 장치는 Nmap ping에 응답해야합니다. 정상적인 타이밍을 사용하십시오.<br/><br/><strong>울트라슬로우</strong>:: <i>20 분</i>· 자주 묻는 질문 상위 1000 TCP 및 UDP 포트를 스캔하고 62078 (Apple IOS 탐지)를 포트합니다. 장치는 Nmap ping에 대한 응답에 관계없이 스캔됩니다. 버전 탐지 활성화. 이름 * <code>open|filtered</code> 항구는 여겨집니다. · <code>filtered</code> 포트가 열 것으로 간주됩니다 (그리고 장치 감지를 트리거합니다). polite 타이밍을 사용하십시오.<br/><br/><strong>제품 정보</strong>:: <i>자주 묻는 질문</i>· 표준 discovery preset에 의해 설정 한 옵션이 변경 될 때.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>그룹은 필수 조건과 일치하는 장치의 간단한 목록으로 사용됩니다. JSON을 사용하여 요청한 경우, 목록의 반환 <code>devices.id</code> 이름 * 웹 인터페이스를 사용하려면 표준 열 속성 목록을 반환합니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Open-AudIT에 로그인하면 LDAP(OpenLDAP)를 검색할 수 있는 액세스가 없습니다. 이 액세스가 있는 다른 계정을 사용할 수 있습니다. 사용 방법 <code>ldap_dn_account</code> · <code>ldap_dn_password</code> 설정하기<br/> <br/><strong>자주 묻는 질문</strong><br/> <br/><a href="/index.php/auth/help">일반 Auth 도움말</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Auth를 위한 Entra 사용하기</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Auth를 위한 OKTA 사용하기</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">LDAP 로그인</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">사용자, 역할 및 Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>장치를 추가하면 관련 아이콘을 표시하려면 .svg 포맷 된 파일을 디렉토리에 복사해야합니다.<br/><em>리눅스</em>:/usr/local/open-audit/public/device_images<br/><em>윈도우</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>해당 아이콘을 표시하려면 32x32px 아이콘을 디렉토리에 복사해야 합니다.<br/><em>리눅스</em>:/usr/local/open-audit/public/images/map_icons<br/><em>윈도우</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>언제까지 <i>주요 특징</i> 한국어 <code>device</code>, 유효한 <i>제품정보</i> 이름: <code>class</code>· <code>environment</code>· <code>status</code> · <code>type</code>· 만약에 <i>주요 특징</i> 이름 * <code>locations</code> 또는 <code>org</code> 만 유효한 <i>제품정보</i> 이름 * <code>type</code>· 만약에 <i>주요 특징</i> 한국어 <code>query</code> 만 유효한 <i>제품정보</i> 이름 * <code>menu_category</code>·</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>클라우드 기계를 완전히 감사하려는 경우, 당신은 또한 Open-AudIT에서 저장된 그 자격 증명을 필요로하지 않습니다.</p><p>Microsoft Azure를 사용하는 경우 올바른 포트를 허용하십시오 (SSH, 기타 22). 가상 머신 확인 -> 네트워크 규칙.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>목록 유형을 선택하면 "값" 필드가 활성화됩니다. 선택 가능한 값의 comma 분리된 목록을 넣어야 합니다. 이 필드가 편집될 때마다 드롭다운 박스에 표시됩니다.<br/> <br/>대부분의 다른 속성처럼, 필드는 대량 편집 될 수 있습니다. 일반적으로 대량 편집 기능을 사용하여 필드를 입력 할 수 있습니다.<br/> <br/>장치 세부 화면을보기, 필드를 포함하는 섹션을 열고 (당신은 충분한 액세스가 있는지) 당신은 그것을 편집 할 필드 값에 클릭 할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>새로운 취약점이 발견되고 패치되는 컴퓨터 보안의 세계에서 보안 규정 준수는 지속적인 과정이어야합니다. 또한 정책에 대한 조정을 할 수있는 방법을 포함해야하며 정기적 평가 및 위험 모니터링. OpenSCAP 생태계는 이 프로세스의 빠르고 비용 효율적인 유연한 구현을위한 도구 및 사용자 정의 정책을 제공합니다.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>통합은 외부 시스템에 대화하기 위해 Open-AudIT에 대한 장치 선택 및 일정을 설정할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>마이크로 소프트 Windows 데스크톱 시스템은 Open-AudIT의 성능에 영향을 미칠 수있는 네트워크 제한이 있습니다. TCP/IP 스택은 동시 불완전 아웃바운드 TCP 연결 시도의 수를 제한합니다. 제한이 도달 한 후, 후속 연결 시도는 큐에 넣고 고정 속도 (10 초당)에서 해결됩니다. 너무 많은 수를 입력하면 떨어질 수 있습니다. 그리고 마지막으로, 아파치는 OS에 의해 다시 시작합니다. Windows 데스크톱 운영 체제에서 Open-AudIT 설치가 지원되지 않습니다.<br/><br/>Open-AudIT 코드와 아무런 문제가 없습니다, 또는 우리는 Windows 클라이언트 기계에 이 문제를 해결하기 위해 아무것도 할 수 있습니다.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap 타이밍 세부 사항은 링크된 페이지의 하단에 있습니다. <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html (영어)</a>· 그 페이지:<br/> <br/><em>괜찮은 광대역 또는 에테르 연결에 있다면, 항상 -T4 (Aggressive)를 사용하는 것이 좋습니다. 어떤 사람들은 사랑 - T5 (Insane) 내 취향에 너무 적극적이지만. 사람들은 때때로 -T2 (Polite)를 지정합니다. 그들은 호스트를 충돌하거나 일반적으로 비석되기 때문에 덜 가능성이 있다고 생각합니다. 그들은 종종 느리게 실현하지 않습니다 - T2 정말. 그들의 검사는 기본 검사 보다는 더 긴 10배 걸릴지도 모릅니다. 기계 충돌 및 대역폭 문제는 기본 타이밍 옵션 - T3 (Normal)과 드물고 일반적으로 신중하게 스캐너를 권장합니다. Omitting 버전 탐지는 이 문제를 감소시키기에 타이밍 가치와 더 효과적입니다.</em><footer>채용 정보 <i>이름 *</i> 스낵 바</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT는 사용자를 인증하는 다른 방법을 사용하여 구성 할 수 있으며 그룹 회원을 기반으로 할당 된 역할과 orgs를 사용하여 사용자 계정을 만들 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>오시는 길 IT는 파일 또는 파일 디렉토리에 대한 세부 정보를 검색하고 Open-AudIT 데이터베이스의 다른 속성에 따라 이러한 파일을 모니터링 할 수 있습니다.<br/> <br/>이 기능은 Linux Open-AudIT 서버에 대한 상자에서 작동하지만 Windows Open-AudIT 서버에서 서비스 계정 이름으로 변경해야합니다.<br/> <br/>지원된 클라이언트는 Windows와 리눅스입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>오시는 길 IT는 파일에 대한 세부 정보를 검색 할 수 있으며 Open-AudIT 데이터베이스의 다른 속성에 따라 이러한 파일을 모니터링하는 경우 기본 패키지 관리자에게 문의하십시오.<br/> <br/>지원된 클라이언트는 리눅스에서만 입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>오시는 길 IT는 각 장치와 관련된 사용자 정의 필드에 정보를 저장할 수 있습니다.<br/> <br/>추가 필드가 생성되면 쿼리 및 그룹에서 데이터베이스의 다른 속성과 같이 사용할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT는 많은 쿼리가 내장되었습니다. 특정 쿼리 및 사전 포장 쿼리의 아무도가 필요하면, 새로운 것을 만들고 실행을위한 Open-AudIT로로드하는 것이 매우 쉽습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT는 많은 summaries가 내장되어 있습니다. 당신은 특정 요약을 요구하고 사전 포장 summaries의 아무도 당신의 필요를 적합, 그것은 새로운 것을 만들고 실행을위한 Open-AudIT로로드하는 것은 매우 쉽습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT는 FirstWave에 의해 지원됩니다. 지원 감초의 적극적인 커뮤니티를 선호한다면, 그 밖에도 있습니다. 개발자에게 직접 대화할 수 있으며 24 시간 내에 응답을 얻을 수 있습니까? 다른 제품과 함께 시도! 놀라운 지원. 전체 정지. 지원이 필요합니다. 그렇지 않은 경우 좋은 지원. 기간.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT는 상자에서 다층을 제공합니다!<br/> <br/>Open-AudIT의 Orgs (organisations)는 중요한 항목입니다. 사용자에는 1 차 Org뿐만 아니라 Orgs 목록이 있습니다. 사용자가 Orgs에 할당 된 항목에 걸릴 수있는 작업을 정의하는 할당 된 "Roles" 목록과 결합합니다. 사용자 "orgs"와 "roles"의 조합은 그들이 할 수있는 것을 정의하고 Open-AudIT 내에서 할 수 없습니다.<br/> <br/>Open-AudIT의 대부분의 항목은 Org. 장치, 위치, 네트워크 등에 할당됩니다.<br/> <br/>Orgs는 아이 Orgs를 가질 수 있습니다. 조직 차트 (tree) 구조의 생각. 사용자가 특정 Org에 액세스 할 경우, 그들은 또한 그 Orgs 후손에 액세스해야합니다. 더 많은 정보를 원하시면, 이 참조 <a href="/index.php/faq?name=Users, Roles and Orgs">제품 정보</a>·</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT는 상자에서 다층을 제공합니다!<br/> <br/>Open-AudIT의 Orgs (organisations)는 중요한 항목입니다. 사용자에는 1 차 Org뿐만 아니라 Orgs 목록이 있습니다. 사용자가 Orgs에 할당 된 항목에 걸릴 수있는 작업을 정의하는 할당 된 "Roles" 목록과 결합합니다. 사용자 "orgs"와 "roles"의 조합은 그들이 할 수있는 것을 정의하고 Open-AudIT 내에서 할 수 없습니다.<br/> <br/>Open-AudIT의 대부분의 항목은 Org. 장치, 위치, 네트워크 등에 할당됩니다.<br/> <br/>Orgs는 아이 Orgs를 가질 수 있습니다. 조직 차트 (tree) 구조의 생각. 사용자가 특정 Org에 액세스 할 경우, 그들은 또한 그 Orgs 후손에 액세스해야합니다.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>네트워크의 상태를 빠르게 볼 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Open-Aud의 역할 IT는 중요한 품목입니다. 사용자에는 1 차 Org뿐만 아니라 Orgs 목록이 있습니다. 사용자가 Orgs에 할당 된 항목에 걸릴 수있는 작업을 정의하는 할당 된 역할 목록을 결합합니다. 사용자 "orgs"와 "roles"의 조합은 그들이 할 수있는 것을 정의하고 Open-AudIT 내에서 할 수 없습니다.<br/> <br/>완벽한 Open-AudIT Enterprise 경험을 얻으십시오. 역할 만들기는 사용자가 Open-AudIT 내에서 수행 할 수있는 것을 통해 미세 곡물 제어를 허용합니다.<br/> <br/>저자화를위한 기본 방법 (사용자가 할 수있는 일)은 사용자 역할에 근거합니다. 기본 역할은 admin, org_admin, reporter 및 user로 정의됩니다. 각 역할에는 각 엔드포인트에 대한 허가 (Create, Read, Update, Delete) 세트가 있습니다. 추가적인 역할을 정의하고 기존의 역할은 Open-AudIT Enterprise에서 활성화됩니다.<br/> <br/>역할도 LDAP (Active Directory 및 OpenLDAP) 인증과 함께 사용할 수 있습니다. Enterprise 라이센스 설치에는 각 정의 된 역할에 대한 LDAP 그룹을 사용자 정의 할 수있는 기능이 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>규칙은 속성을 검사하고 적절한 규칙을 기반으로 한 cahnges를 만듭니다.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Scanning 옵션은 쉽게 발견 할 수있는 옵션을 적용 할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Google지도에서 제공하는 간단하고 직관적 인 지리적 인 매핑. Open-AudIT 레버리지 Google Maps는 장치 위치의 실시간 대화형 지리적 매핑을 제공합니다. Geocodes 및 경도 / 경도에 거리 주소의 자동화 변환.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>소프트웨어 패키지는 바이러스 백신, 백업, 방화벽, 승인 또는 금지된 소프트웨어가 설치되어 있는지 결정하는 데 사용됩니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>유효한 Subnet 속성의 몇몇 예는: 192.168.1.1 (단 하나 IP 주소), 192.168.1.0/24 (소형), 192.168.1-3.1-20 (IP 주소의 범위).<br/> <br/><em>이름 *</em> - 하위넷 만 (예당 - 192.168.1.0/24)은 Open-AudIT의 유효한 네트워크를 자동으로 만들 수 있습니다. <br/> <br/>Active Directory 유형을 사용하는 경우 도메인 컨트롤러에 이미 얘기하기 위해 적절한 자격 증명을해야합니다. <a href="../credentials">한국어</a>·<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>표준은 Open-AudIT에 저장됩니다.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>지원된 클라이언트는 리눅스에서만 입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>작업에는 unix cron 일정을 미러링하는 일정이 있습니다. 분, 시간, day_of_month, 월, day_of_week에 대한 속성은 모두 cron 정의에 따라 작동합니다. comma seperated 값 (공간 없음)을 사용하여 여러 가지를 선택할 수 있습니다. *를 사용하여 모든 값을 선택할 수 있습니다.<br/> <br/>더 보기 <code>type</code> 작업 중 하나가 될 수 있습니다 : 기본, 수집가, 발견, 쿼리, 보고서 또는 요약.<br/> <br/>Baseline 또는 Discovery를 계획하려는 경우, 작업을 생성하기 전에 생성해야 합니다. 항목의 ID를 사용해야합니다. <code>sub_resource_id</code>· 예를 들어 디스커버리를 계획하고 싶다면 특정 Discoveries ID를 사용하십시오. <code>sub_resource_id</code>·<br/> <br/>가치에 대한 <code>uuid</code> 각 Open-AudIT 서버에 특정합니다. 당신의 유일한 가치는 윤곽에서 찾아낼 수 있습니다.<br/> <br/>더 보기 <code>options</code> 속성은 작업 실행에 필요한 추가 속성을 포함하는 JSON 문서입니다. 보고서에 대한 추가 속성, 쿼리 및 요약은: <code>email_address</code> · <code>format</code>· Bselines의 추가 속성은 <code>group_id</code>·<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>더 보기 <code>type</code> 위치의 아이콘을 지정합니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributes endpoint는 Open-AudIT의 다른 속성에 사용자 정의 된 값을 추가 할 수 있습니다. 현재이 기능은 클래스, 환경, 상태 및 유형 속성에서 작동합니다. 장치, 위치 및 Orgs의 유형 속성뿐만 아니라 Queries의 메뉴 범주. prvious types (Lkocation 보기) 중 하나의 항목을 볼 경우 유형 속성을 드롭다운 박스에서 선택해야합니다. 이 값이 저장되는 곳이다. Hence, 새로운 유형이 위치를 선택하도록 추가하려면 Attributes 기능을 사용하여 추가하십시오.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>수집가 기능은 네트워크 검색을 수행하는 많은 "collector"컴퓨터를 쉽게 관리 할 수 있습니다. 모든 수집가는 Server에서 중앙으로 제어됩니다. 수집가와 서버 사이의 유일한 필수 네트워크 포트는 80 및 / 또는 443입니다.<br/> <br/>그것은 네트워크를 빨리 관리하고, 쉽고 간단합니다. Open-AudIT Enterprise 라이센스는 단일 수집가 라이센스를 받고 필요에 따라 더 많은 것을 구입할 수있는 옵션을 제공합니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SQL의 선택 섹션 <em>지원하다</em> 완전히 자격이 된 란을 포함합니다. 지원하다 <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>·<br/> <br/>SQL의 WHERE 섹션 <em>지원하다</em> 제품 설명 <code>WHERE @filter</code> 그래서 Open-AudIT는 적절한 Orgs에 쿼리를 제한하는 것을 알고 있습니다. 이 조건을 포함하지 SQL은 관리자 역할을하지 않는 한 생성 된 쿼리에 실패합니다.<br/> <br/>example 쿼리 SQL 표시 속성에 있는 장치 <code>os_group</code> "Linux"의 속성 - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SQL의 선택 섹션 <em>지원하다</em> 만 포함 <code>DISTINCT(devices.id)</code>·<br/> <br/>SQL의 WHERE 섹션 <em>지원하다</em> 제품 설명 <code>WHERE @filter</code> 그래서 Open-AudIT는 적절한 Orgs에 쿼리를 제한하는 것을 알고 있습니다. 이 조건을 포함하지 SQL은 생성 된 그룹에 실패합니다.<br/> <br/>Debian OS를 실행하는 모든 장치를 선택하는 SQL의 예 - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>라이센스 엔드포인트는 기기에서 발견된 라이센스 수를 추적할 수 있습니다.<br/> <br/>라이센스를 추적하는 항목 만들기 <em>지원하다</em> 이름, 조직, 라이센스 번호 취득 및 소프트웨어의 이름을 제공하기 위해. 현장에 <code>match_string</code> 추적하려는 소프트웨어의 이름을 제공해야 합니다. match_string의 와일드카드로 % sign (%)를 사용할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>네트워크는 192.168.1.0/24 형식이어야 합니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>1 차 및 선택적인 이차 품목은 완전히 자격이 있어야 합니다 - ie의 장치. 유형 또는 소프트웨어. 이름.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Linux 서버에서 Open-AudIT를 실행하면 아무것도 할 필요가 없습니다.<br/><br/>Windows 클라이언트는 다만 벌금이 있고 특별한 행동이 요구되지 않습니다, 그러나.... 이 특징을 가능하게 하기 위하여 감사는 목표 Windows 체계에 국부적으로 실행되어야 합니다. 그것은 우리가 한 Windows 기계에 감사 스크립트를 실행할 때 WMI 통화로 원격으로 실행할 수 없습니다, 두 번째 Windows 기계를 대상으로. 이렇게하려면 대상 Windows 기계에 감사 스크립트를 복사하고 실행해야합니다. Apache가 실행한 서비스 계정은 로컬 시스템 계정입니다. 이 계정은 원격에 액세스 할 수 없습니다 (network 기반) 자원. 이 문제를 해결하기 위해 서비스는 다른 계정에서 실행해야합니다. 로컬 Administrator 계정을 사용하는 것이 가장 쉽습니다. 필수 권한이 있기 때문에 어떤 계정을 시도 할 수 있습니다. 로컬 시스템 계정은 로컬 Administrator 계정으로 많은 로컬 액세스가 있습니다.<br/><br/>고객지원 <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Windows에서 Open-AudIT Apache Service 실행</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>이것은 선반 안에 사는 장치입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>이 엔드포인트는 클라우드 인프라 세부 정보를 추가할 수 있습니다. Open-AudIT는 기본 API를 사용하여 클라우드에 도달하고 Open-AudIT에서 다른 장치와 같은 서버를 반환합니다.<br/> <br/><em>이름 *</em> - 이 기능을 사용하려면, 우리는 <em>지원하다</em> 구성 항목 match_mac ( AWS 용) 및 match_hostname (Azure 용)을 활성화하십시오. 이것은 클라우드 발견이 실행되는 첫 번째 시간을 자동으로 수행됩니다.<br/> <br/>당신의 구름을 위한 Credentials (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure 클라우드</a> 또는 <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">사이트맵</a>) 필수입니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVE 피드에 근거한 취약성 보고.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>우리는 초기 설정 기본 옵션과 스크립트의 기본 목록. 이 기본 스크립트는 삭제할 수 없습니다. 필요한 경우 추가 스크립트를 만들 수 있습니다. 스크립트는 기존 스크립트 중 하나에 기반하고 사용자 정의 옵션이 적용됩니다. 스크립트는 메뉴에서 목록 페이지에서 다운로드 할 수 있습니다 -> 발견 -> 감사 스크립트 -> 감사 스크립트 목록<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>일치를 위해 Regex를 사용할 때, 유용한 페이지는 찾을 수 있습니다 <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP 웹 사이트</a>· 일부 차이점은 Perl Regex 찾을 수 있습니다 <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">이름 *</a>·</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets는 쉽게 당신의 대쉬보드에 당신의 환경에 특정한 것을 보여주기 위하여 창조될 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>오픈-AudIT 전문가와 기업은 당신이 원하는 때, 그리고 당신이 필요로 한 것과 같이 수시로 실행할 것이다 자동 및 일정 발견, 보고 발생, 또는 기본 검사 할 수 있습니다. 밤을 달리는 발견을 계획하고 각 아침의 핵심 인력에 생성하고 이메일로보고하십시오. 복잡한 또는 간단한 일정, 장치 발견 및 보고서 생성은 단지 클릭.<br/> <br/>각 하위넷 또는 AD 컨트롤러에 대한 개별 발견 일정을 작성하여 대상 관객을 위해 작성된 보고서에 추가합니다. 회사 요구를 지원하기 위해 간단하고 복잡한 일정을 개발, 백업을 방지하거나 작업에 미치는 영향, 또는 단순히 부하 및 속도 업 감사 완료를 확산.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>기존 감사 스크립트에 대한 모든 옵션과 스크립트를 만들 수 있습니다. - 그냥 Windows. AIX, ESX, Linux, OSX 및 Windows는 모두 커버됩니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>match_string의 와일드카드로 %의 기호를 사용할 수 있습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>당신의 선반은 당신의 장치가 어디에 있는 정확하게 정유를 돕습니다.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>이름 *</strong> - 로컬 Open-AudIT 서버에서 이 URL에 액세스하고 있습니다. 다운로드된 스크립트는 다른 기계에서 실행할 때 제출할 수 없습니다. 다른 기계를 감사 할 필요가 있다면, Open-AudIT 서버 자체에 브라우저를 사용하지 않는 모든 원격 기계에서 스크립트를 다운로드하십시오.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = '필터를 포함하지 않는 CVE 항목은 영향을받는 항목 (s)를 결정합니다.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google지도 사이트맵 열쇠는 이 기능을 위해 요구됩니다.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = '이 벤치 마크가 실행될 디바이스 ID의 JSON 배열.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVE에서 가져온 소프트웨어 이름과 일치하는 개체의 JSON 배열은 Open-AudIT에 의해 검색된 소프트웨어 이름과 풍부합니다.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = '이 취약점에 대한 테스트에 대한 JSON 배열.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Orgs가 이 사용자에게 할당된 JSON 문서입니다. ID에서 촬영 <code>orgs.id</code>· 사용자가 Org에 액세스 할 경우, 그들은 그 Orgs 후손에 액세스해야합니다.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = '필요한 속성을 포함하는 JSON 문서 <code>scripts.type</code>·';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = '필요한 속성을 포함하는 JSON 문서는 선택한 discovery_scan_options를 overriding.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = '필요한 속성을 포함하는 JSON 문서는 기본 장치 일치 옵션을 overriding.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = '이 사용자에게 할당된 역할이 포함된 JSON 문서. 역할 이름에서 촬영 <code>roles.name</code>·';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = '속성의 배열을 포함하는 JSON 객체는 일치가 발생하면 변경합니다.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = '속성의 배열을 포함하는 JSON 객체.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = '특정 옵션을 포함하는 JSON 객체.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Cloud discovery를 통해 JSON 객체를 변환합니다.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'queue 항목의 세부 사항을 포함하는 JSON 표현.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = '이 통합 분야에 대한 JSON 표현.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = '개인 테스트의 JSON 표현과 모든 장치에서 결과가 기본에 대해 실행되었습니다.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = '이 정책을 작성한 테스트의 JSON 표현.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN은 라우터를 사용하여 WAN에 연결할 수 있습니다.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = '수도권 네트워크 (MAN)는 도시 또는 대형 캠퍼스에 걸쳐 큰 컴퓨터 네트워크입니다.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = '· Seed discovery는 다른 장치의 IP를 검색하는 초기 IP를 사용하여 그 IP를 목록에 추가하고 해당 IP를 스캔합니다. 추가 장치가 알고있는 IP를 다시 묻습니다. Rinse와 반복. 이미 실행중인 IP를 스캔하고 이미 스캔 한 경우를 알고 충분히 지능적입니다 (또는 스캔 된 목록에도).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Subnet discovery는 제공된 IP를 스캔합니다.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = '그런 다음 파일을 다운로드하고 로컬 디스크에 저장하는 에이전트에 제공 된 URL.';

$GLOBALS["lang"]['A URL to a file to download.'] = '다운로드 할 파일에 URL.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = '백본 네트워크는 다른 LAN이나 sub-networks 간의 정보 교환을 제공하는 컴퓨터 네트워크 인프라의 일부입니다. 백본은 다른 건물, 또는 넓은 지역에 걸쳐 같은 건물 내에서 다양한 네트워크를 결합 할 수 있습니다.<br/><br/>예를 들어, 대형 회사는 전 세계의 부서를 연결하는 백본 네트워크를 구현할 수 있습니다. 부서 네트워크가 네트워크 백본을 구성하는 장비. 네트워크 백본을 설계할 때 네트워크 성능과 네트워크 혼잡은 계정으로 들어가는 중요한 요소입니다. 정상적으로, backbone 네트워크 수용량은 그것에 연결된 개인 네트워크의 그것 보다는 더 중대합니다.<br/><br/>백본 네트워크의 또 다른 예는 인터넷에 연결되는 모든 네트워크를 결합하는 넓은 지역 네트워크 (WANs) 및 핵심 라우터 세트 인 인터넷 백본입니다.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '이 소프트웨어의 숫자를 표시하는 계산 된 필드는 선택된 Org의 컴퓨터에서 발견되었다 (그리고 그 후손으로 구성).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = '캠퍼스 지역 네트워크 (CAN)는 제한된 지리적 영역 내에서 LAN의 상호 연결으로 구성됩니다. 네트워킹 장비 (스위치, 대패)와 전송 매체 (광섬유, 구리 식물, Cat5 케이블을 달기, 등)는 거의 온전한 캠퍼스 tenant/주사 (기업, 대학, 정부, 등)에 의해 소유됩니다.<br/><br/>예를 들어, 대학 캠퍼스 네트워크는 다양한 캠퍼스 건물을 연결하기 위해 대학 또는 부서, 도서관 및 학생 기숙사 홀.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = '닫힌 포트는 접근 가능 (Nmap 프로브 패킷에 수신 및 응답), 하지만 그것에 듣는 응용 프로그램이 없습니다. 호스트가 IP 주소(host discovery, 또는 ping 스캐닝)에 올라있는 것을 보여주는 데 도움이 될 수 있습니다. OS 감지의 일부로. 닫히는 항구가 닿을 수 있기 때문에, 그것은 케이스에서 나중에 스캔 할 수 있습니다. 관리자는 방화벽과 같은 포트 차단을 고려할 수 있습니다. 그런 다음 그들은 거짓 상태에 나타날 것입니다.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = '수집가는 수집가 또는 대 혼자 모드 중 하나입니다.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = '적용 가능한 CVEs의 comma 분리 된 목록.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '선택될 수 있는 값의 comma 분리된 목록.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '실행 명령. 에이전트가 Windows 기반 경우,이 명령은 Powershell 에이전트 내에서 실행됩니다.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = '대시보드는 3개의 열과 2개의 줄로 구성되어 있습니다. <i>사이트 맵</i>· 위젯은 요약과 매우 유사합니다, 단지 우리는 요약 개념을 좀 더 가지고. Widgets는 두 개의 드롭 다운 박스를 사용하여 간단한 패션에서 생성됩니다. 또는 완전한 사용자 정의에 대한 자신의 SQL을 사용할 수 있습니다.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = '필터링 포트가 열 것으로 간주됩니다 (그리고 장치 감지를 트리거합니다).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = '글로벌 지역 네트워크 (GAN)은 무선 LAN, 위성 적용 분야 등 다양한 무선 LAN, 위성 적용 분야를 통해 모바일 지원에 사용되는 네트워크입니다. 모바일 통신의 핵심 과제는 하나의 로컬 적용 영역에서 다음으로 사용자 통신을 차단하고 있습니다. IEEE Project 802에서는 지상 무선 LAN의 성공을 거두었습니다.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = '홈 영역 네트워크 (HAN)는 디지털 장치 간의 통신에 사용되는 주거용 LAN은 일반적으로 프린터 및 모바일 컴퓨팅 장치와 같은 개인용 컴퓨터 및 액세서리의 작은 수입니다. 중요한 기능은 인터넷 액세스의 공유, 종종 케이블 TV 또는 디지털 구독자 라인 (DSL) 공급자를 통해 광대역 서비스입니다.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = '스캔 할 사용자 정의 TCP 포트 목록 (22 SSH, 135은 WMI, 62078은 iPhone 동기화입니다).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = '사용자 정의 UDP 포트의 목록 (161 SNMP입니다).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = '지역 네트워크 (LAN)는 가정, 학교, 사무실 건물, 또는 건물의 밀접한 위치 그룹과 같은 제한된 지리적 영역에서 컴퓨터 및 장치를 연결하는 네트워크입니다. 네트워크의 각 컴퓨터 또는 장치는 노드입니다. 유선 LAN은 Ethernet 기술을 기반으로 합니다. ITU-T G.hn과 같은 새로운 표준은 동축 케이블, 전화선 및 동력선과 같은 기존 배선을 사용하여 유선 LAN을 만드는 방법을 제공합니다.<br/><br/>LAN의 정의 특성, 넓은 지역 네트워크 (WAN)에 대비하여 높은 데이터 전송률, 제한된 지리적 범위 및 임대 라인에 대한 신뢰성의 부족을 포함. 현재 이더네트 또는 다른 IEEE 802.3LAN 기술은 2010년에 IEEE에 의해 표준화된 100개 Gbit/s까지 자료 이동 비율에서 운영합니다. 현재, 400 Gbit/s Ethernet이 개발되고 있습니다.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = '위치는 그것과 관련된 장치를 가질 수있는 물리적 주소입니다. 당신은 좌표를 할당 할 수 있으며, 지정된 장치가있는 경우, 위치는 Open-AudIT Enterprise 라이센스가있을 때지도에 나타납니다.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = '위치 이름은 미래에 이러한 장치를 찾는 데 도움이 될 것입니다.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '더 낮은 숫자는 다른 규칙의 앞에 적용될 것입니다.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '더 낮은 숫자는 다른 규칙의 앞에 적용될 것입니다. 기본 중량은 100입니다.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Open-AudIT에 로그인하고 LDAP sever에 의해 인증 된 새로운 사용자. 그런 다음 Open-AudIT에서 생성되었습니다. 성공 사례';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = '패키지는 설치 된 softare의 조각입니다. 패키지에는 유형이 있습니다 - 바이러스 백신, 승인, 백업, 금지, 클라우드, 방화벽, 무시, 라이센스 또는 기타.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = '애플리케이션 인증을 사용할 때 Logon을 활성화하는 비밀번호(stored as a hash).';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Open-AudIT 응용 프로그램에 계정이 있습니다. 사용자 계정은 관련 역할 및 조직 목록을 가지고 있습니다. 사용자가 할 수있는 것을 결정했습니다. 사용자는 WHICH 항목을 결정합니다.<br/><br/>사용자 요청이 작업을 수행 할 때 (창조, 읽기, 업데이트, 삭제) 수집 항목에, 역할은 그 작업을 수행 할 수 있는지 볼 수 있도록 상담, 다음 orgs는 수집 항목이 org에 속한 경우 결정하는 것으로 상담됩니다. 사용자는 행동 할 권한을 가지고 있습니다.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = '개인 영역 네트워크 (PAN)는 컴퓨터와 다른 정보 기술 장치 중 통신에 사용되는 컴퓨터 네트워크입니다. PAN에서 사용되는 장치의 일부 예는 개인 컴퓨터, 프린터, 팩스 기계, 전화, PDA, 스캐너 및 비디오 게임 콘솔입니다. PAN은 유선 및 무선 장치를 포함 할 수 있습니다. PAN의 범위는 일반적으로 10 미터로 확장됩니다. 유선 PAN은 Bluetooth와 적외선 통신과 같은 기술이 전형적으로 무선 PAN을 형성하면서 USB 및 FireWire 연결로 일반적으로 구성됩니다.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = '쿼리는 기본적으로 SQL 문입니다. 이 진술은 제한의 자동 추가와 데이터베이스에 대해 실행되며 해당 항목에만 적용 할 수 있으며 사용자가 볼 수있는 권한이 있습니다. Query 메뉴를 사용하여 만들 수 있습니다 -> 관리 -> Queries -> Queries 만들기. Queries는 org_id를 포함하고 적절한 사용자에게 제한됩니다. 사용자는 org_admin 또는 reporter 역할(s)가 작성, 업데이트 또는 쿼리를 삭제해야 합니다. 모든 사용자는 쿼리를 실행할 수 있습니다. 쿼리에는 메뉴 항목뿐만 아니라 메뉴 범주 속성에 사용되는 이름 속성이 있습니다. Open-Audit GUI에 쿼리를 배치합니다. 설정해야 할 메뉴 표시도 있습니다. <i>₢ 킹</i> GUI에서 쿼리를 활성화하기 (<i>₢ 킹</i> 본문내용 바로가기 주메뉴 바로가기 쿼리는 여전히 그것을 사용하는 경우 실행 <code>id</code>메뉴 디스플레이 값에 관계없이';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = '선반은 선반 안에 위치와 고도를 할당한 장치의 수집입니다. 장치는 선택적으로 그것과 관련된 그림이 있을 수 있습니다. 랙은 행에 배치됩니다. 우리는 다음과 같이 선반의 포지셔닝을 위한 아주 과립상 체계를 창조했습니다. 상위 수준에서 (현재)는 Organisation (Org)입니다. Org는 여러 위치가있을 수 있습니다 (이 경우 항상있다). 선반 특징의 추가로, 위치는 지금 1개 이상 건물을 포함할 수 있습니다. 건물에는 1개 이상 지면을 포함할 수 있습니다. 층은 1 개 이상의 객실을 포함 할 수 있습니다. 방은 1개 이상 줄을 포함할 수 있습니다. 이것은 많은 일을 좋아하지만, 기본적으로 당신을 위해 만들어집니다. 새로운 위치를 만들고 하위 구성 요소가 자동으로 생성됩니다. 당신이 더 많은 품목 (건조, 방, 등)를 필요로 하는 경우에 당신은 그(것)들을 좋아할 수 있습니다. 선반은 또한 부속일 수 있습니다 <i>팟</i> 선반의. pod 속성은 태그로 작동, 오히려 엄격한 계층 상속 모델 건물, 층, 등.<br/><br/>Racks는 Open-AudIT Enterprise 라이센스 고객에게 제공되는 기능입니다.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP 주소와 MAC 주소가 독특하다는 것을 routing 도메인 또는 주소 공간.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linux용 샘플 크론 파일은 아래와 같습니다. 이것은 안으로 두어야 합니다';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = '보안 영역은 네트워크 도메인 내에서 관리 도메인 또는 정책 도메인입니다.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = '씨앗 발견은 또 다른 유형의 발견입니다. 단일의 IP를 제공하는 곳 <i>이름 *</i> 장치. 이 장치는 감사되고, 어떤 IPs는 그 후에 감사될 IPs의 명부에 추가됩니다. 그런 다음 그 장치는 감사하고 그들이 알고있는 모든 IP는 감사에 대한 IP 목록에 추가됩니다. 이 프로세스는 사용자가 구성한 매개 변수 내에서 계속됩니다.';

$GLOBALS["lang"]['A short description of the log entry.'] = '로그 입력의 짧은 설명.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = '스토리지 영역 네트워크 (SAN)는 통합, 블록 레벨 데이터 스토리지에 대한 액세스를 제공하는 전용 네트워크입니다. SAN은 주로 디스크 배열, 테이프 라이브러리 및 광 주전자 상자와 같은 저장 장치를 만들기 위해 사용되므로 장치가 로컬에 부착 된 장치와 같은 장치가 작동 시스템에 나타납니다. SAN은 일반적으로 다른 장치로 로컬 영역 네트워크를 통해 액세스 할 수없는 스토리지 장치의 자체 네트워크가 있습니다. SAN의 비용과 복잡성은 초기 2000 년대에 떨어졌습니다. 기업과 중소기업 환경 모두에서 더 넓은 채택을 가능하게합니다.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = '일치하는 문자열 <code>software.name</code> 이름 * 표준 SQL 와일드 카드의 % (%)를 사용하여 하나 이상의 문자와 일치 할 수 있습니다.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = '민감한 정보를 관리하기위한 구조화 된 시스템';

$GLOBALS["lang"]['A timestamp.'] = '타임 스탬프.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = '사용자에는 1 차 Org뿐만 아니라 Orgs 목록이 있습니다. 사용자는 Orgs에 할당 된 항목에 걸릴 수있는 작업을 정의 할당 된 역할 목록을 결합합니다. 사용자의 조합 <i>한국어</i> · <i>이름 *</i> 그들이 할 수있는 것을 정의하고 Open-AudIT 내에서 할 수 없습니다.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = '사용자는 관련 조직 (orgs) 목록이 있습니다. 각 org 사용자는 자신의 역할에 따라 그 org 내에서 항목을 수행 할 수 있습니다.<br/><br/>기본적으로 org를 제외한 모든 orgs에는 부모가 있습니다. Org 차트의 생각. 사용자가 Org에 권한을 가지고 있다면, 그들은 또한 그 Org의 모든 후손에 권한을 가지고.<br/><br/>사용자는 특정 컬렉션에 대한 부모 orgs의 항목을 볼 수있는 어린이 org에 권한이 있습니다. 이들은: 대쉬보드, discovery_scan_options, 필드, 파일, 그룹, 쿼리, 보고서, 역할, 규칙, 스크립트, 요약, 위젯.<br/><br/>사용자들이 볼 수 있는 것을 통해 알갱이 컨트롤을 잊지 마십시오.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = '사용자는 관련 조직 (orgs) 목록이 있습니다. 각 org 사용자는 자신의 역할에 따라 그 org 내에서 항목을 수행 할 수 있습니다.<br/><br/>기본적으로 org를 제외한 모든 orgs에는 부모가 있습니다. Org 차트의 생각. 사용자가 Org에 권한을 가지고 있다면, 그들은 또한 그 Org의 모든 후손에 권한을 가지고.<br/><br/>우리는 또한 사용자가 특정 컬렉션에 대한 부모 orgs에서 항목을 볼 수있는 어린이 org의 권한을 허용. 이들은: 대쉬보드, discovery_scan_options, 필드, 파일, 그룹, 쿼리, 역할, 규칙, 스크립트, 요약, 위젯.<br/><br/>사용자가 볼 수 있고 사용 할 수 있도록 과립 제어를 잊지 마십시오.';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = '가상 개인 네트워크 (VPN)는 노드 간의 링크 중 일부가 물리적 인 와이어 대신 일부 더 큰 네트워크 (예 : 인터넷)에서 개방 연결 또는 가상 회로로 수행되는 오버레이 네트워크입니다. 가상 네트워크의 데이터 링크 계층 프로토콜은이 경우 더 큰 네트워크를 통해 터널을 파고 있다고 말했다. 일반적인 응용 프로그램은 공공 인터넷을 통해 안전한 통신이지만, VPN은 인증 또는 콘텐츠 암호화와 같은 명시적 보안 기능이 없습니다. 예를 들어, VPN은 강력한 보안 기능을 갖춘 네트워크에서 다른 사용자 커뮤니티의 트래픽을 분리하는 데 사용될 수 있습니다.<br/><br/>VPN은 VPN 고객 및 VPN 서비스 제공 업체의 사용자 정의 서비스 수준 계약 (SLA)을 가질 수 있습니다. 일반적으로 VPN은 포인트포인트보다 더 복잡합니다.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '취약점에 영향을 미치는 취약점은 공격자가 서비스, 충돌 시스템, 또는 denial-of-service (DoS) (None, Low, High)를 혼란시킬 수 있습니다.';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '기밀에 영향을 미치는 취약점은 개인 정보, 자격 증명, 또는 독점적 인 비즈니스 데이터 (None, Low, High)와 같은 민감한 데이터를 읽을 수 있습니다.';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = '무결성에 영향을 미치는 취약점은 공격자가 데이터를 수정하거나 악의적인 코드 또는 변경 시스템 구성 (None, Low, High)을 수정할 수 있습니다.';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'vulnerability는 enrichment 자료가 충분하거나 생성 된 SQL이 확실히 정확하지 않은 곳에 제공되는 더 많은 특정 패키지 이름을 편집 할 수 있습니다.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudIT의 취약점 항목은 데이터베이스에 대한 필수 쿼리로 CVE 보고서에 잠재적 노출을 결정할 수 있습니다. 취약점은 FirstWave의 엔리치먼트 데이터와 함께 CVE 보고서를 작성했습니다. 이 두 항목은 FirstWave에서 자동으로 다운로드되는 적절한 쿼리를 생성하는 결합됩니다.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = '넓은 지역 네트워크 (WAN)는 도시, 국가, 또는 간선 거리와 같은 큰 지리적 지역을 커버하는 컴퓨터 네트워크입니다. WAN은 전화선, 케이블 및 공기파와 같은 많은 종류의 미디어를 결합하는 통신 채널을 사용합니다. WAN은 종종 전화 회사와 같은 일반적인 캐리어에 의해 제공되는 전송 시설의 사용. WAN 기술 일반적으로 OSI 참조 모델의 낮은 3 층에서 기능 : 물리적 층, 데이터 링크 층 및 네트워크 층.';

$GLOBALS["lang"]['AD Group'] = 'AD 그룹';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, 등.';

$GLOBALS["lang"]['AIX'] = '사이트맵';

$GLOBALS["lang"]['ALL IPs'] = '모든 IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / 웹 액세스';

$GLOBALS["lang"]['API Documentation'] = 'API 문서';

$GLOBALS["lang"]['API Key required.'] = 'API 키 필요.';

$GLOBALS["lang"]['API Result'] = 'API 결과';

$GLOBALS["lang"]['About'] = '제품정보';

$GLOBALS["lang"]['Above are the only required items.'] = '위의 항목은 필수 항목입니다.';

$GLOBALS["lang"]['Accept'] = '이름 *';

$GLOBALS["lang"]['Access Model'] = '액세스 모델';

$GLOBALS["lang"]['access_point'] = '액세스 포인트';

$GLOBALS["lang"]['Access Point'] = '액세스 포인트';

$GLOBALS["lang"]['access_token'] = '액세스 토큰';

$GLOBALS["lang"]['Access Token'] = '액세스 토큰';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = '관리자 $ 공유 및 RPC에 액세스는 SMB2 프로토콜을 사용합니다.';

$GLOBALS["lang"]['ack_by'] = 'Ack 로';

$GLOBALS["lang"]['Ack By'] = 'Ack 로';

$GLOBALS["lang"]['ack_date'] = 'Ack 날짜';

$GLOBALS["lang"]['Ack Date'] = 'Ack 날짜';

$GLOBALS["lang"]['ack_time'] = 'Ack 시간';

$GLOBALS["lang"]['Ack Time'] = 'Ack 시간';

$GLOBALS["lang"]['action'] = '- 연혁';

$GLOBALS["lang"]['Action'] = '- 연혁';

$GLOBALS["lang"]['action_audit'] = '활동 감사';

$GLOBALS["lang"]['Action Audit'] = '활동 감사';

$GLOBALS["lang"]['action_command'] = '동작 명령';

$GLOBALS["lang"]['Action Command'] = '동작 명령';

$GLOBALS["lang"]['action_date'] = '작업 날짜';

$GLOBALS["lang"]['Action Date'] = '작업 날짜';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = '활동 장치 위치 할당';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = '활동 장치 위치 할당';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Org에 할당 된 액션 장치';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Org에 할당 된 액션 장치';

$GLOBALS["lang"]['action_download'] = '다운로드';

$GLOBALS["lang"]['Action Download'] = '다운로드';

$GLOBALS["lang"]['action_uninstall'] = '활동 제거';

$GLOBALS["lang"]['Action Uninstall'] = '활동 제거';

$GLOBALS["lang"]['actioned'] = '이름 *';

$GLOBALS["lang"]['Actioned'] = '이름 *';

$GLOBALS["lang"]['actioned_by'] = '에 의해';

$GLOBALS["lang"]['Actioned By'] = '에 의해';

$GLOBALS["lang"]['actioned_date'] = '작업 날짜';

$GLOBALS["lang"]['Actioned Date'] = '작업 날짜';

$GLOBALS["lang"]['actions'] = '관련 기사';

$GLOBALS["lang"]['Actions'] = '관련 기사';

$GLOBALS["lang"]['Activate'] = '이름 *';

$GLOBALS["lang"]['Activate Free License'] = '무료 라이선스 활성화';

$GLOBALS["lang"]['Activate Key'] = '키 입력';

$GLOBALS["lang"]['Activate a free Enterprise license'] = '무료 Enterprise 라이선스 활성화';

$GLOBALS["lang"]['Active'] = '지원하다';

$GLOBALS["lang"]['Active / Active'] = '활동 / 활동';

$GLOBALS["lang"]['Active / Passive'] = 'Active / 수동';

$GLOBALS["lang"]['Active Directory'] = '연락처';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory 도메인';

$GLOBALS["lang"]['active_directory_ou'] = '활성 디렉토리 Ou';

$GLOBALS["lang"]['Active Directory Ou'] = '활성 디렉토리 Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory 서버';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory 및 OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = '광고 영역';

$GLOBALS["lang"]['Ad Domain'] = '광고 영역';

$GLOBALS["lang"]['ad_group'] = '광고 그룹';

$GLOBALS["lang"]['Ad Group'] = '광고 그룹';

$GLOBALS["lang"]['ad_server'] = '광고 서버';

$GLOBALS["lang"]['Ad Server'] = '광고 서버';

$GLOBALS["lang"]['Add'] = '더 보기';

$GLOBALS["lang"]['Add Credentials'] = 'Credentials 추가';

$GLOBALS["lang"]['Add Device'] = '관련 제품';

$GLOBALS["lang"]['Add Device to Application'] = '관련 제품';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Cluster에 장치 추가';

$GLOBALS["lang"]['Add Exception'] = '추가 예외';

$GLOBALS["lang"]['Add Field'] = '더 보기';

$GLOBALS["lang"]['Add If'] = '더 알아보기';

$GLOBALS["lang"]['Add Policies from Device'] = 'Device에서 Policies 추가';

$GLOBALS["lang"]['Add Policy'] = '추가 정책';

$GLOBALS["lang"]['Add Then'] = '다음 것';

$GLOBALS["lang"]['Add Your Credentials'] = '당신의 Credentials 추가';

$GLOBALS["lang"]['Add image'] = '이미지 추가';

$GLOBALS["lang"]['additional_items'] = '관련 항목';

$GLOBALS["lang"]['Additional Items'] = '관련 항목';

$GLOBALS["lang"]['address'] = '이름 *';

$GLOBALS["lang"]['Address'] = '이름 *';

$GLOBALS["lang"]['Address any nonconformities'] = '모든 비품';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = '주소 감사 발견 및 교정 작업';

$GLOBALS["lang"]['Admin'] = '계정 관리';

$GLOBALS["lang"]['admin_status'] = '관리자 상태';

$GLOBALS["lang"]['Admin Status'] = '관리자 상태';

$GLOBALS["lang"]['advanced'] = '지원하다';

$GLOBALS["lang"]['Advanced'] = '지원하다';

$GLOBALS["lang"]['Afghanistan'] = '아프리카';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = '통합이 생성된 후, 통합의 세부 정보를 볼 때 Debug라는 필드를 알 수 있습니다. 기본값은 없습니다. 통합이 실행될 때 추가 로깅을 제공합니다. 디버그는 예로 남지 않아야 합니다. 이 디버그 출력은 WMI 및 SNMP 자격과 같은 항목과 같은 외부 시스템에서 모든 검색을 포함하기 때문입니다. 디버그 옵션은 문제가 발생했을 때만 사용되어야하며, 왜 결정할 수 있는지 볼 때 더 깊은 디그를 원합니다.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = '위의 완료 후, 에이전트를 제거.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = '에이전트? 발견? 자격?';

$GLOBALS["lang"]['agents'] = '이름 *';

$GLOBALS["lang"]['Agents'] = '이름 *';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = '에이전트 항목은 기간, 네트워크 및 운영 체제를 지정할 수 있습니다. 모든 테스트 일치하면 서버가 작업을 수행하는 에이전트를 요청합니다. 어떤 시험이 설정되지 않는 경우, 그것은 제외됩니다 <i>모두 일치해야합니다</i> 제품 설명<br/><br/>여러 에이전트를 만들 수 있으며 서버는 하나 또는 모든 에이전트 항목을 확인합니다. 당신은 (예를 들어) 말한다 하나의 에이전트를 지정할 수 있습니다 <i>대리인 IP가 이 subnet에 있는 경우에, device_id를 놓으십시오</i>·<br/><br/>또 다른 예는 전혀 감사를 실행하지 않을 수 있으므로 스크립트를 다운로드하고 실행하십시오. 에이전트가 관리자 권한으로 설치되면, 이제 기계가 열지 않고 관리 할 수 있습니다. <strong>이름 *</strong> 세계에서 항구.<p>고급 에이전트가 에이전트가 어떤 파일을 다운로드하고 모든 명령을 실행하도록 지시 할 수 있음을 의미합니다. <strong>기타 제품</strong>:: 보안 위험이 있습니다. 이 구성은 <strong>한국어</strong> HTTPS 및 유효한 (Certificate Authority 제공) 인증서를 사용하여 Open-AudIT를 실행할 때 기능 </p>';

$GLOBALS["lang"]['Aggressive'] = '관련 기사';

$GLOBALS["lang"]['Aland Islands'] = 'Aland 제도';

$GLOBALS["lang"]['Albania'] = '한국어';

$GLOBALS["lang"]['Albanian'] = '알바니아';

$GLOBALS["lang"]['alert_style'] = 'Alert 스타일';

$GLOBALS["lang"]['Alert Style'] = 'Alert 스타일';

$GLOBALS["lang"]['Algeria'] = '알제리';

$GLOBALS["lang"]['algorithm'] = 'Algorithm, 그리스';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm, 그리스';

$GLOBALS["lang"]['alias'] = '이름 *';

$GLOBALS["lang"]['Alias'] = '이름 *';

$GLOBALS["lang"]['All'] = '모든 것';

$GLOBALS["lang"]['All IPs'] = '모든 IP';

$GLOBALS["lang"]['All Policies'] = '모든 정책';

$GLOBALS["lang"]['All Queued Items'] = '모든 Queued 항목';

$GLOBALS["lang"]['All collections URLs use the format'] = '모든 컬렉션 URL은 형식을 사용';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = '모든 장치 하위 테이블은 중요한 열의 쌍을 포함합니다.';

$GLOBALS["lang"]['All devices with a type like computer.'] = '컴퓨터와 같은 유형의 모든 장치.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = '컴퓨터 또는 라우터 유형의 모든 장치.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = '스위치와 인쇄 기계의 유형 없이 모든 장치.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = '스위치와 인쇄 기계의 유형 없이 모든 장치. 위의 쿼리와 동일합니다.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = '모든 일반 발견 옵션은 Device Seed Discoveries에서 사용할 수 있습니다.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = '모든 작업은 Windows 및 Linux와 동일하게 만들 수 있습니다. 작업은 스케줄링 실행을위한 CRON 방법을 사용합니다.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = '이 요청에 대한 정보와 함께, 우리는 기능 사용 및 설치에 대한 몇 가지 필요한 정보를 제공하기 위해 FirstWave 데이터 포인트로 돌아갑니다.';

$GLOBALS["lang"]['Also can be created from the'] = '또한 만들 수 있습니다';

$GLOBALS["lang"]['Alternatives'] = '기타 제품';

$GLOBALS["lang"]['Amazon AWS Fields'] = '아마존 AWS 제품정보';

$GLOBALS["lang"]['American Samoa'] = '미국 사모아';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory discovery는 네트워크 목록의 Active Directory를 쿼리하고 일반 Subnet discovery와 같은 관련 IP를 스캔합니다.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organization)는 Open-AudIT 내에서 수집하는 대부분의 항목의 소유자입니다. 글로벌 아이템의 예외로 <i>제품 설명</i>대부분의 항목은 Org에 할당됩니다. 사용자가 수집 한 항목에 액세스 할 수 있습니다. Org 아래에 사용자 권한을 가지고 있습니다.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = '이 포트에서 TCP 연결, UDP 데이터그램 또는 SCTP 협회를 적극적으로 수용합니다. 이 찾기는 종종 포트 스캐닝의 1 차 목표입니다. 보안 지향적 인 사람들은 각 개방 포트가 공격에 대한 수익입니다. 공격자 및 펜 테스트는 오픈 포트를 악용하고, 관리자는 합법적인 사용자를 파괴하지 않고 방화벽을 닫거나 보호하는 동안. 개방 포트는 네트워크에서 사용할 수있는 서비스를 표시하기 때문에 비 보안 검사에도 흥미 있습니다.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '한국어 <code>benchmarks.id</code>·';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '한국어 <code>devices.id</code>·';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '외부 링크가 더 많은 정보를 나타내는 객체의 배열.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = '기기의 정체성과 유형에 대한 교육';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '필요한 속성을 포함하는 암호화 된 JSON 문서 <code>credentials.type</code>·';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = '기업 개인 네트워크는 단일 조직이 사무실 위치 (예를들면, 생산 위치, 본사, 원격 사무실, 상점)를 상호 연결하도록 구축하는 네트워크입니다. 따라서 컴퓨터 리소스를 공유 할 수 있습니다.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = '웹 인터페이스를 사용하여 입력 할 수 있습니다. 현재 사용자가 로그인 한 경우';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = '예제 JSON POST 몸은 아래와 같습니다. "data" 폼 아이템에 첨부해야합니다.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = '예를 들어 위젯 SQL 표시 장치가 위치 당 계산.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = '기존 Open-AudIT 사용자는 LDAP 서버에 의해 인증 및 인증되었습니다. 성공 사례';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '이 사이트에서 필요한 서비스의 수준 표시.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '발견이 완료되면 내부 필드.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'open|filtered port는 open(장치 감지)로 간주됩니다.<br/>이전, Open-Aud IT는 Nmap 응답으로 간주됩니다.';

$GLOBALS["lang"]['An optional GeoCode'] = '옵션 GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'sudo를 사용하는 옵션 암호.';

$GLOBALS["lang"]['Analyzed'] = '항문핥기';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = '그리고 마지막으로, 이 발견을 실행하기 위해 제출을 클릭합니다.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '그리고 뭔가 잘못되면?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = '그리고 마지막으로 클릭 <i>제출하기</i> Entra를 위한 Open-AudIT Auth 메소드를 만듭니다.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = '그리고 마지막으로, 너무 많은 보안 문제 - 더 평화의 마음. 데이터 구조는 열리고 문서화됩니다. 당신은 그들을 볼 수 있습니다';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = '그리고 이름을 제공합니다 - 우리는 humbly 추천 Open-AudIT 😀, 하지만 당신은 당신이 좋아하는 것을 이름을 수 있습니다. 옵션 확인 <i>갤러리에서 찾을 수없는 다른 응용 프로그램을 통합 (Non-gallery)</i> 선택 사항 다음을 클릭합니다 <i>이름 *<i>·</i></i>';

$GLOBALS["lang"]['And so much more.'] = '그리고 훨씬 더.';

$GLOBALS["lang"]['Andorra'] = '이름 *';

$GLOBALS["lang"]['Angola'] = '앵귈라';

$GLOBALS["lang"]['Anguilla'] = '스낵 바';

$GLOBALS["lang"]['Annex A Controls'] = '별관 A 통제';

$GLOBALS["lang"]['Antarctica'] = '아프리카';

$GLOBALS["lang"]['AntiVirus'] = '안티 바이러스';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus 패키지';

$GLOBALS["lang"]['Antigua and Barbuda'] = '안티구아와 바부다';

$GLOBALS["lang"]['Antivirus'] = '안티 바이러스';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '어떤 TCP 포트 (comma seperated, no space) 당신은이 발견에서 제외. Nmap 7+를 사용할 때만 사용할 수 있습니다.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '모든 UDP 포트 (comma seperated, no space) 당신은이 발견에서 제외. Nmap 7+를 사용할 때만 사용할 수 있습니다.';

$GLOBALS["lang"]['Any additional documentation you need.'] = '필요한 추가 문서';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '어떤 추가 메모를 만들 수 있습니다.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = '*에 따라 모든 속성은 CVSS 데이터가이 필드를 완료하는 데 사용되었음을 나타냅니다. 기본적으로 v4 필드를 사용하려고하지만, 그들이 대중화되지 않은 경우 우리는 속성에 대한 이전 버전 (s)에 삭제됩니다.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = '모든 장치는 감사 스크립트를 실행할 때이 Org에 할당됩니다 (설정한 경우).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = '모든 장치는 감사 스크립트를 실행할 때이 Org에 할당됩니다 (설정한 경우). 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '발견된 모든 장치는 이 위치에 할당될 것입니다. 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = '발견된 모든 장치는 감사 스크립트를 실행할 때이 위치에 할당됩니다 (설정한 경우).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '발견된 모든 장치는 감사 스크립트를 실행할 때이 위치에 할당됩니다 (설정한 경우). 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '어떤 발견된 장치는 이 Org에 놓인 경우에 할당될 것입니다. 설정하지 않는 경우, 그들은 할당됩니다 <code>org_id</code> 이 발견의. 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = '이 방법으로 발견 된 모든 파일은 저장됩니다 <i>파일 형식</i> 다른 장치 성분에 의하여 테이블.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '어떤 필수 필터. 참고: = 트래픽을 입력할 때, 이것은 글꼴 awesome 아이콘을 나타냅니다.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '테스트하려는 특정 TCP 포트 (comma seperated, 공백 없음).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = '테스트하려는 특정 UDP 포트 (comma seperated, 공백 없음).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = '모든 사용자 업로드 이미지가 여기에 있습니다.';

$GLOBALS["lang"]['Application'] = '제품 설명';

$GLOBALS["lang"]['Application Definitions'] = '신청 정의';

$GLOBALS["lang"]['application_id'] = '신청 ID';

$GLOBALS["lang"]['Application ID'] = '신청 ID';

$GLOBALS["lang"]['Application Licenses'] = '신청 면허';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '신청, 운영 체계 또는 기계설비.';

$GLOBALS["lang"]['applications'] = '이름 *';

$GLOBALS["lang"]['Applications'] = '이름 *';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = '응용 프로그램은 기업 전용 기능입니다.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = '응용 프로그램은 Open-AudIT 2.2에 도입되어 더 많은 개발이 이루어집니다.';

$GLOBALS["lang"]['applied'] = '제품정보';

$GLOBALS["lang"]['Applied'] = '제품정보';

$GLOBALS["lang"]['Approved'] = '이름 *';

$GLOBALS["lang"]['Approved Packages'] = '승인 된 패키지';

$GLOBALS["lang"]['April'] = '4 월';

$GLOBALS["lang"]['Arabic'] = '주요 특징';

$GLOBALS["lang"]['architecture'] = '회사연혁';

$GLOBALS["lang"]['Architecture'] = '회사연혁';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '이 입력 항목을 삭제하시겠습니까?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '이 출력 항목을 삭제하시겠습니까?';

$GLOBALS["lang"]['Are you sure?'] = '견적 요청';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '견적 요청 이 모든 큐 항목을 제거하고 발견 된 나머지 IP를 방지합니다.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '견적 요청 이 쿼리 처리 수를 재설정하고 서버에로드를 일으킬 수 있습니다.';

$GLOBALS["lang"]['area'] = '- 연혁';

$GLOBALS["lang"]['Area'] = '- 연혁';

$GLOBALS["lang"]['Argentina'] = '아르헨티나';

$GLOBALS["lang"]['Armenia'] = '주요 특징';

$GLOBALS["lang"]['arp'] = '사이트맵';

$GLOBALS["lang"]['Arp'] = '사이트맵';

$GLOBALS["lang"]['Aruba'] = '아루바';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = '저자가 Open-AudIT에서 작동하는 방법의 알림으로, 참조';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = '결과적으로, 우리는 <strong>지원하다</strong> discovery credentials 사용자에게 제공되는 admin$ 공유가 있습니다. 대상 Windows 기계를 확인하십시오 <i>이름 *</i> discovery credentials 사용자에 대한 액세스.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = '위에서 언급했듯이, 개발자는 모든 번역 언어를 사용할 수 없습니다. 이것은 우리가 acuracy와 검토 할 수 없습니다, 번역 된 텍스트. 우리는 호기심 검토를 시도합니다. 제대로 번역되지 않은 것을 볼 때, 당신은 스스로 바꿀 수 있습니다. 적절한 언어 파일 편집 (아래로) 및 텍스트를 변경할 수 있습니다. 아마도 존재하지 않으며 추가해야합니다. 텍스트를 변경하고 파일을 저장하고 페이지를 새로 고침하십시오. 어떤 service/daemons를 다시 시작할 필요가 없습니다. 브라우저를 새로 고침해야 할 수도 있습니다.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'OpenSCAP 벤치 마크에 따라 - <i>이 벤치 마크에서 설정의 어떤 구현을 시도하지 마십시오. 먼저 비 운영 환경에 테스트하지. 이 벤치 마크의 제작자는 다른 당사자에 의해 그것의 사용을 위해 어떤 책임도 지지 않으며, 그것의 질, 신뢰성, 또는 다른 어떤 특성에 관하여 보증, 표현되거나 implied를, 만듭니다.</i><br/><br/>심각하게, 장님으로 시작하지 마십시오 <i>수정하기</i> 문제는 비생산, 동일한 환경에서 최초의 철저히 테스트하지 않고 벤치 마크를 실행 한 후 밝혀졌습니다.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = '장치 환경에 대한 속성에 따라. 생산, 훈련, 등.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = '감사 스크립트는 bash를 사용합니다. *의 와일드 카드를 사용할 수 있습니다. 디렉터리와 제외.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = '일반적으로 메뉴로 이동 → 관리 → 통합 → 통합 만들기. 위에서, Linux에서 실행중인 경우, 동일한 서버에서 NMIS를 가지고 있는 경우, 다른 것을 클릭하지 않아도 됩니다. <i>제출하기</i>· 그보다 쉽게 만들 수 없습니다.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = '우리는 Discoveries를 실행하고 장치 결과를 수집하여 네트워크 목록을 팝업합니다. Blessed Subnets 기능은 이 목록을 사용하여 네트워크의 데이터를 수신합니다.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = '수집가가가가가 등록 된 경우, 이 발견을 실행하는 곳을 선택하십시오.';

$GLOBALS["lang"]['Ask me later'] = '더 알아보기';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = '도움이 필요하거나 다른 사람에 대한 답변에 기여하는 커뮤니티에 문의하십시오.';

$GLOBALS["lang"]['aspect_ratio'] = '종횡비';

$GLOBALS["lang"]['Aspect Ratio'] = '종횡비';

$GLOBALS["lang"]['Asset ID'] = '자산 ID';

$GLOBALS["lang"]['asset_ident'] = '자산 ID';

$GLOBALS["lang"]['Asset Ident'] = '자산 ID';

$GLOBALS["lang"]['asset_number'] = '자산 번호';

$GLOBALS["lang"]['Asset Number'] = '자산 번호';

$GLOBALS["lang"]['asset_tag'] = '자산 태그';

$GLOBALS["lang"]['Asset Tag'] = '자산 태그';

$GLOBALS["lang"]['Assign Device to Application'] = '적용분야';

$GLOBALS["lang"]['Assign Device to Cluster'] = '클러스터에 장치 할당';

$GLOBALS["lang"]['Assign Device to Location'] = '자주 묻는 질문';

$GLOBALS["lang"]['Assign Device to Organisation'] = '조직에 장치 할당';

$GLOBALS["lang"]['Assign Devices to Location'] = '현재 위치';

$GLOBALS["lang"]['Assign Devices to Organisation'] = '조직에 할당된 장치';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS 관리자 또는 팀 할당';

$GLOBALS["lang"]['Assign an Operator'] = '운영자 할당';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = '이 Org에 감사 된 장치를 할당합니다. 현재 할당 된 Org (또는 기본 설정)에서 장치를 떠날 공백을 남겨 둡니다.';

$GLOBALS["lang"]['Assign the Device to a Location'] = '장치에 할당';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Org에 장치를 할당';

$GLOBALS["lang"]['Assigned To'] = '견적 요청';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Assigning 발견된 장치';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = '현재 우리는 netstat_ports, 소프트웨어 및 사용자를 사용할 수 있습니다.';

$GLOBALS["lang"]['attached_device_id'] = '첨부된 장치 ID';

$GLOBALS["lang"]['Attached Device ID'] = '첨부된 장치 ID';

$GLOBALS["lang"]['attached_to'] = '첨부파일';

$GLOBALS["lang"]['Attached To'] = '첨부파일';

$GLOBALS["lang"]['attachment'] = '첨부파일';

$GLOBALS["lang"]['Attachment'] = '첨부파일';

$GLOBALS["lang"]['attachments'] = '첨부파일';

$GLOBALS["lang"]['Attachments'] = '첨부파일';

$GLOBALS["lang"]['attack_complexity'] = '공격 Complexity';

$GLOBALS["lang"]['Attack Complexity'] = '공격 Complexity';

$GLOBALS["lang"]['attack_requirements'] = '관련 상품';

$GLOBALS["lang"]['Attack Requirements'] = '관련 상품';

$GLOBALS["lang"]['attack_vector'] = '공격 Vector';

$GLOBALS["lang"]['Attack Vector'] = '공격 Vector';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = '로컬 호스트를 감사하지 않는 경우 장치를 ping하는 것에 동의합니다.';

$GLOBALS["lang"]['Attribute'] = '사이트 맵';

$GLOBALS["lang"]['attributes'] = '관련 기사';

$GLOBALS["lang"]['Attributes'] = '관련 기사';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributes는 특정 분야에 사용하기 위해 Open-AudIT에 저장됩니다. 현재 모든 필드는 장치, 위치, orgs 및 쿼리 테이블을 기반으로합니다. 편집 할 수있는 속성은 다음과 같은 열과 관련이 있습니다. 종류, 환경, 상태 및 유형.';

$GLOBALS["lang"]['Audit'] = '회사연혁';

$GLOBALS["lang"]['Audit AIX'] = '감사 AIX';

$GLOBALS["lang"]['Audit DNS'] = '감사 DNS';

$GLOBALS["lang"]['Audit ESXi'] = '감사 ESXi';

$GLOBALS["lang"]['Audit Linux'] = '감사 리눅스';

$GLOBALS["lang"]['audit_log'] = '감사 로그';

$GLOBALS["lang"]['Audit Log'] = '감사 로그';

$GLOBALS["lang"]['Audit Mount Point'] = '감사 산 점';

$GLOBALS["lang"]['Audit My PC'] = '감사 내 PC';

$GLOBALS["lang"]['Audit Netstat'] = '감사 Netstat';

$GLOBALS["lang"]['Audit OSX'] = '감사 OSX';

$GLOBALS["lang"]['Audit Result Input'] = '감사 결과 입력';

$GLOBALS["lang"]['Audit Software'] = '감사 소프트웨어';

$GLOBALS["lang"]['Audit Status'] = '감사현황';

$GLOBALS["lang"]['Audit Win32 Product'] = '감사 Win32 제품정보';

$GLOBALS["lang"]['Audit Windows'] = '감사 Windows';

$GLOBALS["lang"]['Audit the Device'] = '감사합니다.';

$GLOBALS["lang"]['Audits'] = '회사연혁';

$GLOBALS["lang"]['August'] = '8 월';

$GLOBALS["lang"]['Australia'] = '담당자: Ms.';

$GLOBALS["lang"]['Austria'] = '오스트리아';

$GLOBALS["lang"]['Auth'] = '오스';

$GLOBALS["lang"]['auth'] = '오스';

$GLOBALS["lang"]['Auth Methods'] = 'Auth 방법';

$GLOBALS["lang"]['Authenticate only'] = '인증만';

$GLOBALS["lang"]['Authentication Passphrase'] = '인증 Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = '인증 프로토콜';

$GLOBALS["lang"]['authority_key_ident'] = '권위 핵심 Ident';

$GLOBALS["lang"]['Authority Key Ident'] = '권위 핵심 Ident';

$GLOBALS["lang"]['Auto'] = '자동차';

$GLOBALS["lang"]['auto_renew'] = '자동차 리뉴얼';

$GLOBALS["lang"]['Auto Renew'] = '자동차 리뉴얼';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Open-AudIT Server에 의해 자동 변환.';

$GLOBALS["lang"]['AutoRenew'] = '자동 갱신';

$GLOBALS["lang"]['automatable'] = 'Automatable의 특징';

$GLOBALS["lang"]['Automatable'] = 'Automatable의 특징';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Collectors OS를 기반으로 자동 팝업.';

$GLOBALS["lang"]['availability'] = '적용분야';

$GLOBALS["lang"]['Availability'] = '적용분야';

$GLOBALS["lang"]['Available Benchmarks'] = '사용 가능한 벤치 마크';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Awaiting 분석';

$GLOBALS["lang"]['Azerbaijan'] = '한국어';

$GLOBALS["lang"]['Azerbaijani'] = '한국어';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active 디렉토리';

$GLOBALS["lang"]['BTU Max'] = 'BTU 최대';

$GLOBALS["lang"]['BTU Total'] = 'BTU 총';

$GLOBALS["lang"]['Backbone network'] = 'Backbone 네트워크';

$GLOBALS["lang"]['Backup'] = '지원하다';

$GLOBALS["lang"]['Bahamas the'] = '바하마';

$GLOBALS["lang"]['Bahrain'] = '주 메뉴';

$GLOBALS["lang"]['Bangladesh'] = '뚱 베어';

$GLOBALS["lang"]['bank'] = '은행 계좌';

$GLOBALS["lang"]['Bank'] = '은행 계좌';

$GLOBALS["lang"]['Banned'] = '이름 *';

$GLOBALS["lang"]['Banned Packages'] = 'Banned 패키지';

$GLOBALS["lang"]['bar_code'] = '바 코드';

$GLOBALS["lang"]['Bar Code'] = '바 코드';

$GLOBALS["lang"]['Barbados'] = '스낵 바';

$GLOBALS["lang"]['Base DN'] = '기초 DN';

$GLOBALS["lang"]['base_score'] = '기본 점수';

$GLOBALS["lang"]['Base Score'] = '기본 점수';

$GLOBALS["lang"]['base_severity'] = '기초 Severity';

$GLOBALS["lang"]['Base Severity'] = '기초 Severity';

$GLOBALS["lang"]['based_on'] = '제품정보';

$GLOBALS["lang"]['Based On'] = '제품정보';

$GLOBALS["lang"]['baseline'] = '기본 정보';

$GLOBALS["lang"]['Baseline'] = '기본 정보';

$GLOBALS["lang"]['baseline_id'] = '기본 ID';

$GLOBALS["lang"]['Baseline ID'] = '기본 ID';

$GLOBALS["lang"]['baselines'] = '기본 사항';

$GLOBALS["lang"]['Baselines'] = '기본 사항';

$GLOBALS["lang"]['baselines_policies'] = '기본 정책';

$GLOBALS["lang"]['Baselines Policies'] = '기본 정책';

$GLOBALS["lang"]['Baselines Policy'] = '기본 정책';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Baselines 정책 세부 사항';

$GLOBALS["lang"]['baselines_results'] = 'Baselines 결과';

$GLOBALS["lang"]['Baselines Results'] = 'Baselines 결과';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines는 netstat 포트, 사용자 및 소프트웨어를 비교할 수 있습니다.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Baselines는 이전에 정의된 속성의 세트로 감사 데이터를 결합하여 기기의 준수를 결정할 수 있습니다.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Device 비교';

$GLOBALS["lang"]['Basic'] = '기본 정보';

$GLOBALS["lang"]['Basque'] = '스낵 바';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = '우리가 가능한 한 투명하게하려고하기 때문에, 우리가 보낸 실제 데이터입니다.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = '기계가 같은 방법으로 구성되는 것을 결정할 수 있기 때문에 시스템 관리 및 감사의 주요 부분입니다. 그리고 이제는 간단하고 자동화 될 것입니다. 기본 설정을 정의하면 미리 결정된 일정에 장치 세트에 대해 자동으로 실행됩니다. 이 실행된 기본 설정의 출력은 웹보기를 위해 사용할 수 있으며, 제3자 시스템 또는 인쇄 된 보고서로 가져올 수 있습니다.<br/><br/>감사 및 관리 목적으로 고정, 알려진 좋은 장치에 대한 개별 장치를 기본으로 활용할 수 있습니다. Baselines는 이전에 정의된 속성의 세트로 감사 데이터를 결합하여 기기의 준수를 결정할 수 있습니다.';

$GLOBALS["lang"]['Belarus'] = '벨라루스';

$GLOBALS["lang"]['Belgium'] = '대한민국';

$GLOBALS["lang"]['Belize'] = '벨라루스';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = '아래는 필수 csv 형식의 예입니다.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = '이 줄의 아래는 변수가 스크립트에 주입되는 곳입니다. 아래에서 우리의 이전 예제, 리눅스 감사 스크립트는 같은 우리의 디렉토리와 함께 팝업됩니다';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = '아래 예제 Org Chart를 볼 수 있습니다. 사용자의 권한이 있는 경우 <i>금융 A</i> Org, 그들은 또한 Dept A, B & C의 후손 Orgs에 권한을 가지고. 요청된 수집에 관계가 있습니다.<br/><br/>요청된 수집이 상승할 수 있는 경우, 사용자는 회사 #1 및 기본 Org 항목에 액세스할 수 있습니다. 이것은 (위로) 쿼리, 그룹, 등입니다.<br/><br/>Note - 사용자가 Default Org에서 쿼리에 액세스 할 수 있지만 쿼리 자체가 결과가 아닙니다. 결과는 사용자가 액세스 할 수있는 장치 만 표시됩니다 - 금융 A 및 Dept A, B & C에서 IE 장치.';

$GLOBALS["lang"]['Benchmark'] = '벤치 마크';

$GLOBALS["lang"]['benchmark_id'] = '벤치 마크 ID';

$GLOBALS["lang"]['Benchmark ID'] = '벤치 마크 ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark 작업은 벤치 마크가 생성되면 자동으로 생성됩니다.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = '벤치 마크 실행 및 처리는 시간의 긴 금액을 취할 수 있습니다, 따라서 그들을 계획하고 그들을 실행하지 않는 설정 광고 - 호c.';

$GLOBALS["lang"]['benchmarks'] = '벤치 마크';

$GLOBALS["lang"]['Benchmarks'] = '벤치 마크';

$GLOBALS["lang"]['benchmarks_exceptions'] = '벤치 마크 예외';

$GLOBALS["lang"]['Benchmarks Exceptions'] = '벤치 마크 예외';

$GLOBALS["lang"]['benchmarks_log'] = '벤치 마크 로그';

$GLOBALS["lang"]['Benchmarks Log'] = '벤치 마크 로그';

$GLOBALS["lang"]['benchmarks_policies'] = '벤치 마크 정책';

$GLOBALS["lang"]['Benchmarks Policies'] = '벤치 마크 정책';

$GLOBALS["lang"]['benchmarks_result'] = '벤치 마크 결과';

$GLOBALS["lang"]['Benchmarks Result'] = '벤치 마크 결과';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks는 특정 가이드와 기계의 목록과 결합된 운영 체계 및 버전 제공에 의해 창조됩니다. 작성 후, 벤치 마크는 일정에 기계 목록에 대해 실행됩니다.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Best Practise 구성에 대한 벤치 마크';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks는 컴퓨터의 보안 권고를 제공하며 OpenSCAP 도구 및 정책을 활용합니다.<p><i>OpenSCAP 홈페이지에서:</i> 새로운 취약점이 발견되고 패치되는 컴퓨터 보안의 세계에서 보안 규정 준수는 지속적인 과정이어야합니다. 또한 정책에 대한 조정을 할 수있는 방법을 포함해야하며 정기적 평가 및 위험 모니터링. OpenSCAP 생태계는 이 프로세스의 빠르고 비용 효율적인 유연한 구현을위한 도구 및 사용자 정의 정책을 제공합니다.</p>';

$GLOBALS["lang"]['Benefits'] = '이름 *';

$GLOBALS["lang"]['Bengali'] = '채용정보';

$GLOBALS["lang"]['Benin'] = '베냉';

$GLOBALS["lang"]['Bermuda'] = '한국어';

$GLOBALS["lang"]['best_practises'] = '최고의 연습';

$GLOBALS["lang"]['Best Practises'] = '최고의 연습';

$GLOBALS["lang"]['Bhutan'] = '스낵 바';

$GLOBALS["lang"]['bios'] = '바이오스';

$GLOBALS["lang"]['Bios'] = '바이오스';

$GLOBALS["lang"]['body'] = '이름 *';

$GLOBALS["lang"]['Body'] = '이름 *';

$GLOBALS["lang"]['Bolivia'] = '콜롬비아';

$GLOBALS["lang"]['Boolean'] = '스낵 바';

$GLOBALS["lang"]['Boolean 1/0'] = '볼란 1/0';

$GLOBALS["lang"]['Boolean y/n'] = '볼란 y/n';

$GLOBALS["lang"]['boot_device'] = '부트 장치';

$GLOBALS["lang"]['Boot Device'] = '부트 장치';

$GLOBALS["lang"]['bootable'] = '기타 제품';

$GLOBALS["lang"]['Bootable'] = '기타 제품';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = '보스니아 헤비나';

$GLOBALS["lang"]['Both forms of'] = '두 가지 형태';

$GLOBALS["lang"]['Botswana'] = '콜롬비아';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = '부베 섬 (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = '인기 카테고리';

$GLOBALS["lang"]['Brazilian Portuguese'] = '브라질 포르투갈어';

$GLOBALS["lang"]['Breaking it Down'] = '그것을 끊기';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '영국 인디언 오션 테리토리 (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = '영국령 버진 아일랜드';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = '콘솔 루트에 나무를 찾아 -> 구성요소 서비스 -> 컴퓨터 -> 내 컴퓨터<br/><br/>자주 묻는 질문 <i>내 컴퓨터</i> 옵션 선택<br/><br/>선택하기 <i>기본 속성</i> 이름 *';

$GLOBALS["lang"]['Brunei Darussalam'] = '브루나이 Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu 최대';

$GLOBALS["lang"]['Btu Max'] = 'Btu 최대';

$GLOBALS["lang"]['btu_total'] = 'Btu 총';

$GLOBALS["lang"]['Btu Total'] = 'Btu 총';

$GLOBALS["lang"]['build_number'] = '부품 번호';

$GLOBALS["lang"]['Build Number'] = '부품 번호';

$GLOBALS["lang"]['build_number_full'] = '부품 번호';

$GLOBALS["lang"]['Build Number Full'] = '부품 번호';

$GLOBALS["lang"]['Building'] = '회사연혁';

$GLOBALS["lang"]['Builds trust with clients and partners'] = '고객과의 신뢰를 구축';

$GLOBALS["lang"]['Bulgaria'] = '대한민국';

$GLOBALS["lang"]['Bulgarian'] = '한국어';

$GLOBALS["lang"]['Bulk Edit'] = '대량 편집';

$GLOBALS["lang"]['Bulk Edit Form'] = '대량 편집 양식';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = '대량 편집 장치 Attributes';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = '대량 편집 선택은 다음 페이지를 클릭 한 후 선택하지 않습니다.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina 파소';

$GLOBALS["lang"]['Burundi'] = '버룬디';

$GLOBALS["lang"]['business_requirements'] = '회사 소개';

$GLOBALS["lang"]['Business Requirements'] = '회사 소개';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = '그러나 Windows 클라이언트 기계만 사용할 수 있습니다!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = '그러나 나는 언어 파일을 업데이트 할 필요가 없습니다!';

$GLOBALS["lang"]['Buy'] = '구매하기';

$GLOBALS["lang"]['Buy More'] = '더 보기';

$GLOBALS["lang"]['Buy More Licenses'] = '더 많은 라이센스를 구입';

$GLOBALS["lang"]['By'] = '이름 *';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = '기본적으로 nmis_manage 속성 설정으로 모든 장치를 통합합니다. <i>₢ 킹</i>· 4.2.0으로 우리는 또한 말한다 규칙을 발송 <i>장치를 발견하면 유효한 SNMP OID가 있고, NMIS에 의해 관리되는 장치 표시</i>· 분명히 당신이 원하는 것이 아니라면 이것을 비활성화 할 수 있습니다.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = '기본적으로, 우리는 고객이 자기 서명 인증서를 사용하는 경향이 있기 때문에 인증서 검증을 건너. 인증서 유효성을 활성화하려면 아래 파일을 편집하십시오.';

$GLOBALS["lang"]['CIDR'] = 'CIDR 소개';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR 소개 제품정보';

$GLOBALS["lang"]['cli_config'] = '제품정보 사이트맵';

$GLOBALS["lang"]['CLI Config'] = '제품정보 사이트맵';

$GLOBALS["lang"]['CPU'] = 'CPU의 CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU의';

$GLOBALS["lang"]['CSV'] = 'CSV 파일';

$GLOBALS["lang"]['CVE'] = '사이트맵';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = '수신 상태와 CVE, 분석, 분석 수행, 거부. 이 CVEs (mostly)는 올바른 SQL 쿼리를 생성 할 수있는 충분한 정보를 포함하지 않습니다.';

$GLOBALS["lang"]['Calculated from discovery.'] = '발견에서 계산.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = '이 네트워크의 유효한 IP 주소의 총 수 계산.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '완료시 계산, 이 항목을 실행하는 시간을.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '통합이 실행될 때 계산하고 이 통합에 있는 장치의 JSON 표현을 포함합니다. 각 링크 <code>devices.id</code>·';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '통합이 실행되고 이 통합의 위치의 JSON 표현을 포함합니다. 각 링크 <code>locations.id</code>·';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '통합이 실행될 때 계산하고 Open-AudIT에서 선택한 장치 수를 포함합니다.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '통합이 실행될 때 계산하고 외부 시스템을 선택한 장치 수를 포함합니다.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '통합이 실행되고 외부 시스템에 업데이트 될 수있는 장치 수를 포함 할 때 계산.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '통합이 실행될 때 계산하고 Open-AudIT에서 업데이트된 장치 수를 포함합니다.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = '시작 및 검색을 클릭하여 명령 프롬프트를 호출 <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = '한국어';

$GLOBALS["lang"]['Cameroon'] = '카메룬';

$GLOBALS["lang"]['Campus Area Network'] = '캠퍼스 지역 네트워크';

$GLOBALS["lang"]['Campus area network'] = '캠퍼스 영역 네트워크';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = '수 있습니다 <code>active</code>· <code>passive</code> 또는 공백.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = '수 있습니다 <code>application</code>· <code>compute</code>· <code>database</code>· <code>storage</code>· <code>virtualisation</code>· <code>web</code>· <code>other</code> 또는 공백.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = '수 있습니다 <code>auto</code>· <code>fixed</code>· <code>other</code> 또는 공백.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = '수 있습니다 <code>high availability</code>· <code>load balancing</code>· <code>performance</code>· <code>storage</code>· <code>other</code> 또는 공백.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = '수 있습니다 <code>line</code>· <code>pie</code> 또는 <code>traffic</code>·';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = '수 있습니다 <code>user</code> 또는 <code>collector</code>·';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'discovery 또는 user로 설정할 수 있습니다.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'discovery 또는 user로 설정할 수 있습니다. 위치 표에서 ID를 사용합니다.';

$GLOBALS["lang"]['Can the user edit this item.'] = '이 아이템을 편집할 수 있습니다.';

$GLOBALS["lang"]['Canada'] = '한국어';

$GLOBALS["lang"]['Cancel'] = '이름 *';

$GLOBALS["lang"]['capabilities'] = '관련 상품';

$GLOBALS["lang"]['Capabilities'] = '관련 상품';

$GLOBALS["lang"]['Capacity'] = '제품정보';

$GLOBALS["lang"]['Cape Verde'] = '카테고리';

$GLOBALS["lang"]['Capitalise'] = '회사연혁';

$GLOBALS["lang"]['caption'] = '회사 소개';

$GLOBALS["lang"]['Caption'] = '회사 소개';

$GLOBALS["lang"]['Catalan'] = '카테고리';

$GLOBALS["lang"]['Cayman Islands'] = '케이맨 제도';

$GLOBALS["lang"]['Cellular Details'] = '공급 업체';

$GLOBALS["lang"]['Central African Republic'] = '중앙아프리카 공화국';

$GLOBALS["lang"]['certificate'] = '인증번호';

$GLOBALS["lang"]['Certificate'] = '인증번호';

$GLOBALS["lang"]['certificate_file'] = '인증서 파일';

$GLOBALS["lang"]['Certificate File'] = '인증서 파일';

$GLOBALS["lang"]['certificate_name'] = '인증서 이름';

$GLOBALS["lang"]['Certificate Name'] = '인증서 이름';

$GLOBALS["lang"]['certificates'] = '인증서';

$GLOBALS["lang"]['Certificates'] = '인증서';

$GLOBALS["lang"]['Certification'] = '인증 및 인증';

$GLOBALS["lang"]['Certification Audit'] = '인증 감사';

$GLOBALS["lang"]['Certification Process'] = '인증과정';

$GLOBALS["lang"]['Chad'] = '스낵 바';

$GLOBALS["lang"]['Change'] = '- 기타';

$GLOBALS["lang"]['change_id'] = 'ID 변경';

$GLOBALS["lang"]['Change ID'] = 'ID 변경';

$GLOBALS["lang"]['change_log'] = '공지사항';

$GLOBALS["lang"]['Change Log'] = '공지사항';

$GLOBALS["lang"]['Change Logs'] = '비밀번호';

$GLOBALS["lang"]['change_type'] = '변경 유형';

$GLOBALS["lang"]['Change Type'] = '변경 유형';

$GLOBALS["lang"]['check_minutes'] = '자주 묻는 질문';

$GLOBALS["lang"]['Check Minutes'] = '자주 묻는 질문';

$GLOBALS["lang"]['Check for SSH on these ports'] = '이러한 포트에서 SSH 확인';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'SSH 서비스에 대한이 포트를 확인하십시오.';

$GLOBALS["lang"]['Chile'] = '칠레';

$GLOBALS["lang"]['China'] = '중국 중국';

$GLOBALS["lang"]['Chinese'] = '한국어';

$GLOBALS["lang"]['Chinese (traditional)'] = '한국어 (Korean)';

$GLOBALS["lang"]['Choose'] = '제품 정보';

$GLOBALS["lang"]['Choose (select OS first)'] = '선택 (선택 OS 먼저)';

$GLOBALS["lang"]['Choose a Device'] = '장치 선택';

$GLOBALS["lang"]['Choose a Table'] = '테이블 선택';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = '첫 번째 드롭 다운에서 작업의 유형을 선택합니다. 작업 유형에 따라 필요한 추가 필드를 구성합니다.';

$GLOBALS["lang"]['Christmas Island'] = '크리스마스 섬';

$GLOBALS["lang"]['cidr'] = '주 메뉴';

$GLOBALS["lang"]['Cidr'] = '주 메뉴';

$GLOBALS["lang"]['circuit_count'] = '회로 조사';

$GLOBALS["lang"]['Circuit Count'] = '회로 조사';

$GLOBALS["lang"]['circuit_status'] = '회로 상태';

$GLOBALS["lang"]['Circuit Status'] = '회로 상태';

$GLOBALS["lang"]['city'] = '(주)';

$GLOBALS["lang"]['City'] = '(주)';

$GLOBALS["lang"]['class'] = '수업시간';

$GLOBALS["lang"]['Class'] = '수업시간';

$GLOBALS["lang"]['class_text'] = '클래스 텍스트';

$GLOBALS["lang"]['Class Text'] = '클래스 텍스트';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = '이름 * <i>새로운 클라이언트 비밀</i>·';

$GLOBALS["lang"]['Click Submit to Execute'] = '자주 묻는 질문';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = '계정 만들기 <i>제품 정보</i> 이름 * <i>계정 관리</i> 중앙 메뉴 열의 헤더. 제출하기 <i>사용자 액세스 URL</i>· 일단 복사, 텍스트 편집기에 붙여넣기. 이 필드의 한 부분을 복사해야합니다.<br/><br/>우리의 예제 필드는 다음과 같습니다.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>·<br/><br/>우리가 필요로 하는 단면도 <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (특허증). Open-AudIT에 사용됩니다. <i>한국어</i> 필드, 그래서 거기에 그것을 붙여.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'App 등록을 클릭하여 새 신청서를 작성한 다음 새 신청서 등록을 클릭합니다. 이름을 부여 (나는 Open-AudIT를 사용), 유형으로 웹 앱 / API를 선택하고 URL을 제공 (URL은 중요하지 않습니다) 지금 Create을 클릭합니다.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'OK를 클릭하고 DCOMCNFG 창을 닫습니다.<br/><br/>위의 변화는 재부팅이 효력을 발생합니다.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = '당신이 만든 응용 프로그램을 클릭합니다. 표시된 Application ID는 Client ID입니다.<br/><br/>클라이언트 비밀을 만들려면, 설정 클릭, 다음 키. 중요한 이름을 제공하고 적절한 만료 날짜를 선택하면 Save를 클릭하십시오.<br/><br/>이 값은 고객 비밀입니다.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Open-AudIT에서 예제 장치를 제거하려면 삭제 버튼을 클릭합니다.<br/>이 데이터베이스에서 아래의 장치를 제거합니다. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = '편집 버튼을 클릭 <i>기본 SAML 제품 설명</i>·';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '아래 가져 오기 버튼을 클릭하여 다음 장치 데이터를 팝업하십시오.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = '편집하려는 필드의 오른쪽 아이콘을 클릭합니다. 필드를 변경하고 녹색 아이콘을 클릭하여 제출하십시오.';

$GLOBALS["lang"]['Client ID'] = '고객 ID';

$GLOBALS["lang"]['Client ID and Secret'] = '고객 ID 및 비밀';

$GLOBALS["lang"]['client_ident'] = '고객 ID';

$GLOBALS["lang"]['Client Ident'] = '고객 ID';

$GLOBALS["lang"]['client_secret'] = '고객 비밀';

$GLOBALS["lang"]['Client Secret'] = '고객 비밀';

$GLOBALS["lang"]['client_site_name'] = '고객 사이트 이름';

$GLOBALS["lang"]['Client Site Name'] = '고객 사이트 이름';

$GLOBALS["lang"]['Close'] = '이름 *';

$GLOBALS["lang"]['Closed'] = '【특징】';

$GLOBALS["lang"]['Cloud'] = '클라우드';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud 세부사항';

$GLOBALS["lang"]['Cloud Discovery'] = '클라우드 디스커버리';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery 및 감사';

$GLOBALS["lang"]['cloud_id'] = '클라우드 ID';

$GLOBALS["lang"]['Cloud ID'] = '클라우드 ID';

$GLOBALS["lang"]['cloud_log'] = '클라우드 로그';

$GLOBALS["lang"]['Cloud Log'] = '클라우드 로그';

$GLOBALS["lang"]['cloud_name'] = '클라우드 이름';

$GLOBALS["lang"]['Cloud Name'] = '클라우드 이름';

$GLOBALS["lang"]['Cloud Network'] = '클라우드 네트워크';

$GLOBALS["lang"]['clouds'] = '클라우드';

$GLOBALS["lang"]['Clouds'] = '클라우드';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Clouds는 Open-AudIT Enterprise 라이센스 고객에게 제공하는 기능입니다.';

$GLOBALS["lang"]['cluster'] = '회사 소개';

$GLOBALS["lang"]['Cluster'] = '회사 소개';

$GLOBALS["lang"]['cluster_id'] = '클러스터 ID';

$GLOBALS["lang"]['Cluster ID'] = '클러스터 ID';

$GLOBALS["lang"]['cluster_name'] = '클러스터 이름';

$GLOBALS["lang"]['Cluster Name'] = '클러스터 이름';

$GLOBALS["lang"]['cluster_type'] = '클러스터 유형';

$GLOBALS["lang"]['Cluster Type'] = '클러스터 유형';

$GLOBALS["lang"]['clusters'] = '회사 소개';

$GLOBALS["lang"]['Clusters'] = '회사 소개';

$GLOBALS["lang"]['Clusters and Reporting'] = '클러스터 및 보고';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (키링) 섬';

$GLOBALS["lang"]['Collection'] = '제품정보';

$GLOBALS["lang"]['Collections'] = '회사 소개';

$GLOBALS["lang"]['Collector'] = '회사 소개';

$GLOBALS["lang"]['Collector (UUID)'] = '수집가 (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server는 기업 전용 기능입니다. Enterprise 고객은 무료 한 수집가 라이센스를받습니다. 추가 수집가 라이센스는 필요에 따라 구입할 수 있습니다.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server는 원격 또는 <i>회사 소개</i> 원격 기계에서 실행되는 Open-AudIT의 인스턴스. 즉 수집가 인스턴스는 다른 보안 영역, 하위넷, 클라우드 호스팅 인스턴스 또는 고객 사이트에있을 수 있습니다. 원격 수집가는 네트워크 및 방화벽 복잡성을 방지하는 장치의 모든 발견 및 감사를하고 있습니다. 일단 등록되면 수집가는 완전히 통제됩니다. <i>계정 관리</i>· 즉, 해당 서버의 HTTP 또는 HTTPS 연결을 필요로 합니다.';

$GLOBALS["lang"]['Collector Dashboard'] = '수집가 Dashboard';

$GLOBALS["lang"]['Collector Name'] = '수집가 이름';

$GLOBALS["lang"]['collector_uuid'] = '수집가 Uuid';

$GLOBALS["lang"]['Collector Uuid'] = '수집가 Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = '수집가 기능을 사용할 때 수집가 작업이 자동으로 설정됩니다. 수집 작업은 사용자가 직접 만들 수 없습니다. 수집 작업은 생성 후 편집 된 주파수를 가질 수 있습니다. Open-AudIT Server가 수집가가가가 보고되면, 추가 드롭 다운이 제공됩니다. 작업이 실행되어야 하는 것을 지정할 수 있습니다. 디스커버리 작업 만 지원됩니다.';

$GLOBALS["lang"]['Collectors'] = '회사 소개';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = '수집가는 2개의 형태 중 하나에서 작동할 수 있습니다: 수집가 및 StandAlone. 수집가 모드에서, Open-AudIT의 인스턴스는 메인 서버에서 관리됩니다. Stand Alone 모드에서, 인스턴스는 로컬로 관리하고 주요 서버에 발견된 장치를 전달합니다.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Remote Discovery를 위한 수집가';

$GLOBALS["lang"]['Colombia'] = '콜롬비아';

$GLOBALS["lang"]['color'] = '색깔: 회색';

$GLOBALS["lang"]['Color'] = '색깔: 회색';

$GLOBALS["lang"]['Column'] = '제품정보';

$GLOBALS["lang"]['Columns'] = '사이트맵';

$GLOBALS["lang"]['command'] = '이름 *';

$GLOBALS["lang"]['Command'] = '이름 *';

$GLOBALS["lang"]['command_options'] = '명령 옵션';

$GLOBALS["lang"]['Command Options'] = '명령 옵션';

$GLOBALS["lang"]['command_output'] = '명령 출력';

$GLOBALS["lang"]['Command Output'] = '명령 출력';

$GLOBALS["lang"]['command_status'] = '명령 상태';

$GLOBALS["lang"]['Command Status'] = '명령 상태';

$GLOBALS["lang"]['command_time_to_execute'] = '명령 시간 실행';

$GLOBALS["lang"]['Command Time To Execute'] = '명령 시간 실행';

$GLOBALS["lang"]['comment'] = '이름 *';

$GLOBALS["lang"]['Comment'] = '이름 *';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = '아래 라인에서 댓글 (약 라인 49 또는 이렇게). 줄의 시작 부분에 해시 #를 배치합니다.';

$GLOBALS["lang"]['comments'] = '이름 *';

$GLOBALS["lang"]['Comments'] = '이름 *';

$GLOBALS["lang"]['commercial'] = '회사 소개';

$GLOBALS["lang"]['Commercial'] = '회사 소개';

$GLOBALS["lang"]['Commercial Support'] = '상업 지원';

$GLOBALS["lang"]['common_name'] = '이름 *';

$GLOBALS["lang"]['Common Name'] = '이름 *';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = '일반적으로 clientId라고합니다.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = '일반적으로 clientSecret라고합니다.';

$GLOBALS["lang"]['Community'] = '- 연혁';

$GLOBALS["lang"]['Community Questions'] = '커뮤니티 질문';

$GLOBALS["lang"]['Community String'] = '커뮤니티 문자열';

$GLOBALS["lang"]['Comoros the'] = '코모로스';

$GLOBALS["lang"]['Compact'] = '기본 정보';

$GLOBALS["lang"]['Company'] = '회사 정보';

$GLOBALS["lang"]['Complete these steps.'] = '이 단계를 완료합니다.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = '공격의 복잡성 (낮거나 높음).';

$GLOBALS["lang"]['Component Table'] = '구성 요소 테이블';

$GLOBALS["lang"]['Components (All Devices)'] = '구성 요소 (모든 장치)';

$GLOBALS["lang"]['Compute'] = '회사 소개';

$GLOBALS["lang"]['Condition'] = '(주)';

$GLOBALS["lang"]['Conduct a risk assessment'] = '위험 평가';

$GLOBALS["lang"]['Conduct awareness and training programs'] = '행동 인식 및 교육 프로그램';

$GLOBALS["lang"]['Conduct management review meetings'] = '행동 관리 검토 회의';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = '정기적인 감시 감사 (보통 매년)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = '2단계의 공인체계에 의해 수행';

$GLOBALS["lang"]['Config'] = '사이트맵';

$GLOBALS["lang"]['Config Default, currently '] = 'Config 기본값, 현재 ';

$GLOBALS["lang"]['config_file'] = 'Config 파일';

$GLOBALS["lang"]['Config File'] = 'Config 파일';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config 관리자 오류 코드';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config 관리자 오류 코드';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = '구성 가능한 역할 기반 액세스 제어 (RBAC)';

$GLOBALS["lang"]['configuration'] = '제품 설명';

$GLOBALS["lang"]['Configuration'] = '제품 설명';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = '구성 변경 탐지 및 보고';

$GLOBALS["lang"]['Configure'] = '설정하기';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = '일정에 감사를 수행하는 에이전트 서버 측 구성';

$GLOBALS["lang"]['Congo'] = '한국어';

$GLOBALS["lang"]['Congo the'] = '오시는 길';

$GLOBALS["lang"]['Connected To'] = '연결하기';

$GLOBALS["lang"]['connection'] = '연결하기';

$GLOBALS["lang"]['Connection'] = '연결하기';

$GLOBALS["lang"]['Connection Options'] = '연결 옵션';

$GLOBALS["lang"]['connection_status'] = '연결 상태';

$GLOBALS["lang"]['Connection Status'] = '연결 상태';

$GLOBALS["lang"]['connections'] = '연결하기';

$GLOBALS["lang"]['Connections'] = '연결하기';

$GLOBALS["lang"]['Consider filtered Ports Open'] = '필터링 포트 오픈';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = '열린다|filtered 포트 오픈';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = '컨설팅, 구현 및 기타 서비스 제공';

$GLOBALS["lang"]['contact'] = '제품정보';

$GLOBALS["lang"]['Contact'] = '제품정보';

$GLOBALS["lang"]['contact_name'] = '담당자 이름';

$GLOBALS["lang"]['Contact Name'] = '담당자 이름';

$GLOBALS["lang"]['contained_in'] = '계속하기';

$GLOBALS["lang"]['Contained In'] = '계속하기';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'JSON 객체는 관련 위젯과 그 위치를 나타냅니다.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = '우리가 ssh, snmp 및 wmi 발견 옵션을 사용해야하는 경우 결정하는 필드를 포함합니다. JSON 객체.';

$GLOBALS["lang"]['Context & Leadership'] = 'Context & 리더십';

$GLOBALS["lang"]['Context Engine ID'] = 'Context 엔진 ID';

$GLOBALS["lang"]['Context Name'] = 'Context 이름';

$GLOBALS["lang"]['Continuously improve the ISMS'] = '지속적으로 ISMS 개선';

$GLOBALS["lang"]['contractual_obligations'] = '계약 의무';

$GLOBALS["lang"]['Contractual Obligations'] = '계약 의무';

$GLOBALS["lang"]['Cook Islands'] = '콜롬비아';

$GLOBALS["lang"]['Copy and paste an audit result'] = '복사 및 붙여넣기 결과';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '포럼에 아래의 복사 및 붙여넣기, Open-AudIT의 또 다른 인스턴스 또는 이 항목을 제공해야 할 곳.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = '제출하기 <i>신청 ID</i> 필드는 Open-AudIT에 붙여넣기 <i>고객 ID</i> 새로운 Auth 방법을 위한 분야.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = '제출하기 <i>고객 ID</i> Open-AudIT에 붙여넣기 <i>고객 ID</i> 이름 *<br/>비밀이 없는 경우, 클릭 <i>새로운 비밀 생성</i>, 다음 값을 복사하고 Open-AudIT로 붙여 넣기 <i>고객 비밀</i> 이름 *';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = '값을 복사하고 Open-AudIT 형태로 붙여넣기 <i>고객 비밀</i> 이름 *';

$GLOBALS["lang"]['core_count'] = '핵심 조사';

$GLOBALS["lang"]['Core Count'] = '핵심 조사';

$GLOBALS["lang"]['Cores'] = '사이트맵';

$GLOBALS["lang"]['cost_center'] = '회사연혁';

$GLOBALS["lang"]['Cost Center'] = '회사연혁';

$GLOBALS["lang"]['cost_code'] = '비용 코드';

$GLOBALS["lang"]['Cost Code'] = '비용 코드';

$GLOBALS["lang"]['Costa Rica'] = '코스타리카';

$GLOBALS["lang"]['Cote d Ivoire'] = '카테고리';

$GLOBALS["lang"]['count'] = '제품정보';

$GLOBALS["lang"]['Count'] = '제품정보';

$GLOBALS["lang"]['country'] = '이름 *';

$GLOBALS["lang"]['Country'] = '이름 *';

$GLOBALS["lang"]['country_code'] = '국가 코드';

$GLOBALS["lang"]['Country Code'] = '국가 코드';

$GLOBALS["lang"]['cpu_count'] = 'Cpu 조사';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu 조사';

$GLOBALS["lang"]['Create'] = '이름 *';

$GLOBALS["lang"]['Create Example Devices'] = '예를들면';

$GLOBALS["lang"]['create_external_count'] = '외부 조사';

$GLOBALS["lang"]['Create External Count'] = '외부 조사';

$GLOBALS["lang"]['create_external_from_internal'] = '내부에서 외부 만들기';

$GLOBALS["lang"]['Create External From Internal'] = '내부에서 외부 만들기';

$GLOBALS["lang"]['Create File'] = '파일 만들기';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode 만들기';

$GLOBALS["lang"]['create_internal_count'] = '내부 조사';

$GLOBALS["lang"]['Create Internal Count'] = '내부 조사';

$GLOBALS["lang"]['create_internal_from_external'] = '외부에서 내부 만들기';

$GLOBALS["lang"]['Create Internal From External'] = '외부에서 내부 만들기';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-AudIT에서 NMIS 장치 만들기';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT 만들기 장치에서 ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT 만들기 NMIS의 장치';

$GLOBALS["lang"]['Create a Baseline for the example device'] = '예를 들면 디바이스의 Baseline 만들기';

$GLOBALS["lang"]['Create a Discovery'] = 'Discovery 만들기';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Applicability (SoA)의 성명 작성';

$GLOBALS["lang"]['created_by'] = '로그인';

$GLOBALS["lang"]['Created By'] = '로그인';

$GLOBALS["lang"]['created_date'] = '생성 날짜';

$GLOBALS["lang"]['Created Date'] = '생성 날짜';

$GLOBALS["lang"]['Creating'] = '회사연혁';

$GLOBALS["lang"]['Creating Credentials'] = 'Credentials 만들기';

$GLOBALS["lang"]['Creating Device'] = '회사연혁';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets 만들기';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Discovery 만들기 스캔 옵션 항목';

$GLOBALS["lang"]['Creating a Query'] = 'Query 만들기';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = '그룹에 대한 SQL 선언 작성';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = '쿼리에 대한 SQL 선언 작성';

$GLOBALS["lang"]['Creating an Integration'] = '통합 만들기';

$GLOBALS["lang"]['creator'] = '회사 소개';

$GLOBALS["lang"]['Creator'] = '회사 소개';

$GLOBALS["lang"]['credential'] = '관련 상품';

$GLOBALS["lang"]['Credential'] = '관련 상품';

$GLOBALS["lang"]['Credentials'] = '회사 소개';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials 클라이언트 ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = '연락처 이름 *';

$GLOBALS["lang"]['Credentials Tenant ID'] = '필수품 ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credentials는 저장됩니다 <i>한국어</i> 데이터베이스 테이블. 실제 증명 정보는 저장에 암호화됩니다. 디스커버리가 실행될 때, 디바이스는 데이터베이스에서 검색된 특정 자격 증명을 가지고 있으며, 해독 및 테스트합니다. 이러한 자격 증명 목록이 실패하면 이전에 일한 자격 증명으로 시작된 기기에 대해 재평가, 해독 및 테스트됩니다. 장치 특정 자격 증명은 개별 장치 수준에 저장됩니다 <i>회사 소개</i> 테이블 (노트 - no <i>₢ 킹</i> 테이블 이름). SSH 키는 SSH 사용자 이름 / 암호 전에 테스트됩니다. SSH를 테스트 할 때, credentials는 sudo 또는 뿌리로 작업으로 표시 될 것입니다.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials는 몇몇 다른 유형의 하나가 있을 수 있습니다 - snmp v.1/v.2, snmp v.3, ssh, ssh 열쇠, 창은 전부 실행됩니다. CAVEAT - ssh 키는 Windows Open-AudIT 서버에 아직 구현되지 않습니다.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Cloud Discovery에서 사용되는 Amazon AWS용 Credentials';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoft를 위한 Credentials Cloud Discovery에서 사용하는 Azure';

$GLOBALS["lang"]['Critical'] = '한국어';

$GLOBALS["lang"]['criticality'] = '중요 사항';

$GLOBALS["lang"]['Criticality'] = '중요 사항';

$GLOBALS["lang"]['Croatia'] = '팟캐스트';

$GLOBALS["lang"]['Cuba'] = '언어: English';

$GLOBALS["lang"]['current'] = '현재 위치';

$GLOBALS["lang"]['Current'] = '현재 위치';

$GLOBALS["lang"]['Current Discovery Processes'] = '현재 디스커버리 프로세스';

$GLOBALS["lang"]['Current date & time is '] = '현재 날짜 & 시간은 입니다 ';

$GLOBALS["lang"]['Currently Installed'] = '현재 설치';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = '현재 지원되는 유형은 <code>snmp</code>· <code>snmp_v3</code>· <code>ssh</code>· <code>ssh_key</code> 또는 <code>windows</code>·';

$GLOBALS["lang"]['Custom Fields'] = '주문 분야';

$GLOBALS["lang"]['Custom TCP Ports'] = '사용자 정의 TCP 포트';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = '사용자 정의 TCP 포트. 어떤 특정 포트 우리는 상단 TCP 포트에 더 많은 것을 검사합니다. Comma 분리, 공간 없음.';

$GLOBALS["lang"]['Custom UDP Ports'] = '주문 UDP 항구 항구';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = '사용자 정의 UDP 포트. 어떤 특정 포트 우리는 상단 UDP 포트에 더 많은 것을 검사합니다. Comma 분리, 공간 없음.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Discovery 당 사용자 정의 스캔 옵션';

$GLOBALS["lang"]['Cve'] = '뚱 베어';

$GLOBALS["lang"]['Cyprus'] = '팟캐스트';

$GLOBALS["lang"]['Czech'] = '한국어';

$GLOBALS["lang"]['Czech Republic'] = '대한민국';

$GLOBALS["lang"]['DHCP'] = '사이트맵';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN 계정 (선택 사항)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN 암호 (선택)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS 서버';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS 호스트명';

$GLOBALS["lang"]['Danish'] = '담당자: Ms.';

$GLOBALS["lang"]['dashboard_id'] = '대시보드 ID';

$GLOBALS["lang"]['Dashboard ID'] = '대시보드 ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard 위젯';

$GLOBALS["lang"]['dashboards'] = '대시보드';

$GLOBALS["lang"]['Dashboards'] = '대시보드';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards 및 Widgets는 Enterprise 라이센스 고객이 작성, 읽기, 업데이트 및 삭제할 수 있습니다. 이러한 컬렉션 모두는 홈페이지가 올바르게 볼 필요가 있는지 확인합니다. 그뿐만 아니라 사용자는 자신의 홈페이지로 주어진 대시보드를 설정할 수 있습니다. 모두가 동일한 홈페이지 (dashboard)를 사용 할 필요가 없으며, 그 대시보드에 동일한 위젯. 전문 라이센스 고객은 두 개의 사전 정의 대시보드 사이에 자신의 홈페이지로 설정할 수 있습니다.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards 제공 <i>한 눈에</i> 네트워크에서 발생하는 변화에 대한 중요한 가시성뿐만 아니라 장치 유형, 제조업체 및 운영 체제에 빠른 링크 제공 등 훨씬 더.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards 사용';

$GLOBALS["lang"]['Data'] = '자료실';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = '데이터 내보내기 - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = '데이터 보유';

$GLOBALS["lang"]['Database'] = '관련 기사';

$GLOBALS["lang"]['db_action'] = '데이터베이스';

$GLOBALS["lang"]['Database Action'] = '데이터베이스';

$GLOBALS["lang"]['db_column'] = '데이터베이스 열';

$GLOBALS["lang"]['Database Column'] = '데이터베이스 열';

$GLOBALS["lang"]['Database Definition'] = 'Database 정의';

$GLOBALS["lang"]['db_row'] = '데이터베이스 행';

$GLOBALS["lang"]['Database Row'] = '데이터베이스 행';

$GLOBALS["lang"]['Database Schema'] = '데이터베이스 Schema';

$GLOBALS["lang"]['Database Server Discovery'] = '데이터베이스 서버 Discovery';

$GLOBALS["lang"]['db_table'] = '데이터베이스 테이블';

$GLOBALS["lang"]['Database Table'] = '데이터베이스 테이블';

$GLOBALS["lang"]['Database Tables'] = '데이터베이스 테이블';

$GLOBALS["lang"]['dataset_title'] = 'Dataset 제목';

$GLOBALS["lang"]['Dataset Title'] = 'Dataset 제목';

$GLOBALS["lang"]['date'] = '이름 *';

$GLOBALS["lang"]['Date'] = '이름 *';

$GLOBALS["lang"]['Date D-M-Y'] = '날짜 D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = '날짜 M-D-Y';

$GLOBALS["lang"]['Date Now'] = '현재 위치';

$GLOBALS["lang"]['date_of_manufacture'] = '제조의 날짜';

$GLOBALS["lang"]['Date Of Manufacture'] = '제조의 날짜';

$GLOBALS["lang"]['date_paid'] = '날짜 유료';

$GLOBALS["lang"]['Date Paid'] = '날짜 유료';

$GLOBALS["lang"]['date_received'] = '이름 *';

$GLOBALS["lang"]['Date Received'] = '이름 *';

$GLOBALS["lang"]['Date Y-M-D'] = '날짜 Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'CVE가 마지막으로 업데이트된 날짜와 시간.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVE가 출판되었을 때 날짜와 시간.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE가 출판되었을 때 날짜.';

$GLOBALS["lang"]['DateTime Now'] = '현재 위치';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = '날짜시간 사이트맵 H:M:S';

$GLOBALS["lang"]['day_of_month'] = '달의 날';

$GLOBALS["lang"]['Day Of Month'] = '달의 날';

$GLOBALS["lang"]['day_of_week'] = '주간의 날';

$GLOBALS["lang"]['Day Of Week'] = '주간의 날';

$GLOBALS["lang"]['Day of Month'] = '달의 날';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus 식별자';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus 식별자';

$GLOBALS["lang"]['Debug'] = '디버그';

$GLOBALS["lang"]['Debugging'] = '관련 링크';

$GLOBALS["lang"]['Debugging a Script'] = 'Script를 디버깅';

$GLOBALS["lang"]['December'] = '12 월';

$GLOBALS["lang"]['Decommission'] = '공지사항';

$GLOBALS["lang"]['Default'] = '기본 정보';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = '기본 인증 레벨 - 연결하기';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = '기본 Impersonation 레벨 - Identify 설정';

$GLOBALS["lang"]['Default Items'] = '기본 항목';

$GLOBALS["lang"]['Default Orgs Groups'] = '기본 Orgs 그룹';

$GLOBALS["lang"]['Default Roles Groups'] = '기본 역할 그룹';

$GLOBALS["lang"]['Default Value'] = '기본 값';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389의 기본. 일반적으로 636 Active Directory LDAPS에 사용.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = '기본 값 <code>3</code> LDAP 및 Active Directory의 경우.';

$GLOBALS["lang"]['Defaults'] = '기본 사항';

$GLOBALS["lang"]['Deferred'] = '연락처';

$GLOBALS["lang"]['Define project scope and objectives'] = '프로젝트 범위 및 목표 정의';

$GLOBALS["lang"]['Define the ISMS scope'] = 'ISMS 범위 정의';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = '조직의 상황에 정의 (내부 / 외부 문제)';

$GLOBALS["lang"]['delay_minutes'] = '지연 분';

$GLOBALS["lang"]['Delay Minutes'] = '지연 분';

$GLOBALS["lang"]['Delete'] = '이름 *';

$GLOBALS["lang"]['Delete Example Devices'] = '파일 삭제';

$GLOBALS["lang"]['delete_external_from_internal'] = '내부에서 외부 삭제';

$GLOBALS["lang"]['Delete External From Internal'] = '내부에서 외부 삭제';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS 삭제 Open-AudIT에 없는 경우 장치';

$GLOBALS["lang"]['Delete a {collection} entry.'] = '{collection} 항목 삭제.';

$GLOBALS["lang"]['Delete from Application'] = '자주 묻는 질문';

$GLOBALS["lang"]['Delete from Cluster'] = '클러스터에서 삭제';

$GLOBALS["lang"]['Denmark'] = '한국어';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = '감사 또는 수동으로 사용자에 의해 설정.';

$GLOBALS["lang"]['Derived by audit.'] = '감사에 의해 결정.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = '관련 기사 <code>rack_devices.device_id</code>·';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = '관련 기사 <code>rack_devices.rack_id</code>·';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Collector discovery에서 설명합니다.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'OS 이름에서 설명합니다.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = '구름 발견에서 파생.';

$GLOBALS["lang"]['Derived from device audits.'] = '장치 감사에서 위임.';

$GLOBALS["lang"]['Derived from device type and OS.'] = '장치 유형과 OS에서 발송하는.';

$GLOBALS["lang"]['Derived from discovery.'] = '발견에서 파생.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'hostname, sysName, dns Hostname 및 IP에서 해당 주문에 대해 설명합니다.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'integer severity에서 파생.';

$GLOBALS["lang"]['description'] = '이름 *';

$GLOBALS["lang"]['Description'] = '이름 *';

$GLOBALS["lang"]['destination'] = '여행 정보';

$GLOBALS["lang"]['Destination'] = '여행 정보';

$GLOBALS["lang"]['detail'] = '제품 정보';

$GLOBALS["lang"]['Detail'] = '제품 정보';

$GLOBALS["lang"]['Details'] = '이름 *';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '이 사이트에서 일반적으로 접촉 할 수있는 사람의 세부 사항.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = '데이터베이스에 대한 Baseline 검사를 실행하고 Scheduled Report를 만드는 방법';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Determine 위험 치료 옵션';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = '위험 치료 계획 개발';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = '정책, 절차 및 통제 개발';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'ISMS 문서 개발 (폴리시, 절차 등)';

$GLOBALS["lang"]['device'] = '제품정보';

$GLOBALS["lang"]['Device'] = '제품정보';

$GLOBALS["lang"]['Device Audits'] = '장치 감사';

$GLOBALS["lang"]['Device Component Names'] = '장치 성분 이름';

$GLOBALS["lang"]['Device ID'] = '장치 ID';

$GLOBALS["lang"]['device_id'] = '장치 ID';

$GLOBALS["lang"]['device_id_a'] = '장치 ID A';

$GLOBALS["lang"]['Device ID A'] = '장치 ID A';

$GLOBALS["lang"]['device_id_b'] = '장치 ID B';

$GLOBALS["lang"]['Device ID B'] = '장치 ID B';

$GLOBALS["lang"]['Device Matching Rules'] = '장치 일치 규칙';

$GLOBALS["lang"]['Device Name'] = '장치 이름';

$GLOBALS["lang"]['Device Result'] = '장치 결과';

$GLOBALS["lang"]['Device Results'] = '장치 결과';

$GLOBALS["lang"]['Device Seed'] = '장치 Seed';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = '장치 Seed 디스커버리는 네트워크가 하위넷의 범위로 구성되었는지 알고 있다면 좋은 옵션입니다. 그러나 그들은 무엇을 확신하지 않습니다. 로컬 라우터에 대한 발견을 씨앗하고 눈 앞에 네트워크가 펼쳐집니다.';

$GLOBALS["lang"]['Device Seed IP'] = '장치 씨 IP';

$GLOBALS["lang"]['Device Status'] = '장치 상태';

$GLOBALS["lang"]['Device Types'] = '장치 유형';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = '장치 및 소프트웨어 및 하드웨어 감사';

$GLOBALS["lang"]['Device is in the Subnet'] = '장치는 Subnet에 있습니다';

$GLOBALS["lang"]['Devices'] = '제품정보';

$GLOBALS["lang"]['devices_assigned_to_location'] = '장치 위치에 할당';

$GLOBALS["lang"]['Devices Assigned To Location'] = '장치 위치에 할당';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Org에 할당된 장치';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Org에 할당된 장치';

$GLOBALS["lang"]['Devices Audited'] = '시스템 감사';

$GLOBALS["lang"]['Devices Collection'] = '장치 수집';

$GLOBALS["lang"]['Devices Created in '] = '생성된 장치 ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT에 생성된 장치';

$GLOBALS["lang"]['devices_default_display_columns'] = '장치 과태 전시 란';

$GLOBALS["lang"]['Devices Default Display Columns'] = '장치 과태 전시 란';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '마지막으로 발견된 장치 7 일';

$GLOBALS["lang"]['Devices Found Today'] = '오늘 발견된 장치';

$GLOBALS["lang"]['Devices Found Yesterday'] = '어제 발견 된 장치';

$GLOBALS["lang"]['Devices Missing Information'] = '장치 Missing 정보';

$GLOBALS["lang"]['Devices Not Audited'] = '장치 감사되지 않음';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '장치 30 일';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '장치 7 일이 보이지 않는';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '장치 90 일';

$GLOBALS["lang"]['Devices Older Than X'] = 'X보다 오래된 장치';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API를 통해 검색된 장치';

$GLOBALS["lang"]['Devices Selected from '] = '선택된 장치 ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudIT에서 선택된 장치';

$GLOBALS["lang"]['Devices Updated in '] = '업데이트 된 장치 ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT에서 업데이트 된 장치';

$GLOBALS["lang"]['Devices are being benchmarked.'] = '장치는 벤치 마크가됩니다.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = '장치는 벤치 마크가되지 않습니다.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = '장치는 벤치 마크 될 수있다.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open-AudIT의 장치';

$GLOBALS["lang"]['Devices in Running State'] = '실행 상태의 장치';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Stopped 상태의 장치';

$GLOBALS["lang"]['Devices in this'] = '이 문서';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = '디바이스는 상태가 설정된 경우 일치하지 않습니다. <i>이름 *</i>· 다른 모든 상태는 경기가 발생할 수 있습니다.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Expired Warranties를 가진 장치';

$GLOBALS["lang"]['Devired from type or OS.'] = '유형 또는 OS에서 Devired.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp 사용 가능';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp 사용 가능';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease 만료';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease 만료';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease 획득';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease 획득';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp 서버';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp 서버';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = '명령이 성공적으로 완료하고 예상 데이터를 반환했습니다.';

$GLOBALS["lang"]['direction'] = '오시는 길';

$GLOBALS["lang"]['Direction'] = '오시는 길';

$GLOBALS["lang"]['directory'] = '관련 기사';

$GLOBALS["lang"]['Directory'] = '관련 기사';

$GLOBALS["lang"]['disabled'] = '지원하다';

$GLOBALS["lang"]['Disabled'] = '지원하다';

$GLOBALS["lang"]['discard'] = '팟캐스트';

$GLOBALS["lang"]['Discard'] = '팟캐스트';

$GLOBALS["lang"]['Discover'] = '제품정보';

$GLOBALS["lang"]['Discoveries'] = '회사 소개';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = '디스커버리는 Open-AudIT가 하는 것의 아주 심장에 있습니다. 어떻게 알 수 있습니까? <i>어떤 네트워크?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Discoveries는 각 네트워크의 세부 사항을 입력하지 않고 단일 클릭에서 네트워크에 발견을 실행할 수있는 항목입니다.';

$GLOBALS["lang"]['Discovery'] = '팟캐스트';

$GLOBALS["lang"]['Discovery Change Logs'] = '검색 변경 로그';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery 데이터 보유';

$GLOBALS["lang"]['discovery_id'] = '검색 ID';

$GLOBALS["lang"]['Discovery ID'] = '검색 ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery 문제';

$GLOBALS["lang"]['discovery_log'] = '디스커버리 로그';

$GLOBALS["lang"]['Discovery Log'] = '디스커버리 로그';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery 매치 옵션';

$GLOBALS["lang"]['Discovery Name'] = '검색 이름';

$GLOBALS["lang"]['Discovery Options'] = 'Discovery 옵션';

$GLOBALS["lang"]['Discovery Queue Count'] = '검색 결과';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue 제한';

$GLOBALS["lang"]['discovery_run'] = '디스커버리';

$GLOBALS["lang"]['Discovery Run'] = '디스커버리';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan 옵션';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan 옵션';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = '디스커버리 스캔 옵션은 다른 항목 컬렉션입니다. Enterprise 사용자는 필수 항목, 읽기, 업데이트 및 삭제할 수 있습니다. Professional 사용자는 모든 항목을 읽을 수 있지만 새로운 항목을 만들지 않고 기존 항목을 업데이트하거나 항목을 삭제합니다. 커뮤니티 사용자는 이 컬렉션에 액세스 할 수있는 GUI가 없습니다.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery 스캔 유형';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery 지원';

$GLOBALS["lang"]['Discovery has stopped working'] = '디스커버리는 작업 중단';

$GLOBALS["lang"]['disk'] = '팟캐스트';

$GLOBALS["lang"]['Disk'] = '팟캐스트';

$GLOBALS["lang"]['display_version'] = '표시 버전';

$GLOBALS["lang"]['Display Version'] = '표시 버전';

$GLOBALS["lang"]['Display in Menu'] = '메뉴의 표시';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'POST /{collection}에 대한 표준 웹 양식을 표시합니다.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST /{collection}/import에 대한 표준 웹 양식을 표시합니다.';

$GLOBALS["lang"]['district'] = '지역 명소';

$GLOBALS["lang"]['District'] = '지역 명소';

$GLOBALS["lang"]['Djibouti'] = '사이트맵';

$GLOBALS["lang"]['dns'] = '사이트맵';

$GLOBALS["lang"]['Dns'] = '사이트맵';

$GLOBALS["lang"]['dns_domain'] = 'Dns 도메인';

$GLOBALS["lang"]['Dns Domain'] = 'Dns 도메인';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns 도메인 등록 활성화';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns 도메인 등록 활성화';

$GLOBALS["lang"]['dns_fqdn'] = '댄스 Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = '댄스 Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns 호스트 이름';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns 호스트 이름';

$GLOBALS["lang"]['dns_hostname'] = 'Dns 호스트 이름';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns 호스트 이름';

$GLOBALS["lang"]['dns_server'] = 'Dns 서버';

$GLOBALS["lang"]['Dns Server'] = 'Dns 서버';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = '문서의 Open-AudIT wiki에 대해 잊지 마십시오.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = '위키에 문서의 산은 잊지 마십시오';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = '이러한 TCP 포트를 스캔하지 마십시오.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = '이 UDP 포트를 스캔하지 마십시오.';

$GLOBALS["lang"]['Do not show me again'] = '나를 다시 표시하지 마십시오';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = '이 구성의 완벽한 예가 있습니까? 아마도 실험실 환경이나 워크스테이션에 위치한 장치로 클론 워크스테이션 VM을 사용합니다.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '안전한 운송 (LDAPS) 또는 일반 암호화 LDAP를 사용하려면.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '왼쪽에 표준 사이드바를보고 싶습니다.';

$GLOBALS["lang"]['documentation'] = '회사연혁';

$GLOBALS["lang"]['Documentation'] = '회사연혁';

$GLOBALS["lang"]['Documentation about a particular collection.'] = '특정 컬렉션에 대한 문서.';

$GLOBALS["lang"]['Does Not Equal'] = '이름 *';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = '라이센스는 아이 Orgs에 적용됩니다.';

$GLOBALS["lang"]['domain'] = '이름 *';

$GLOBALS["lang"]['Domain'] = '이름 *';

$GLOBALS["lang"]['domain_controller_address'] = '도메인 컨트롤러 주소';

$GLOBALS["lang"]['Domain Controller Address'] = '도메인 컨트롤러 주소';

$GLOBALS["lang"]['domain_controller_name'] = '도메인 컨트롤러 이름 *';

$GLOBALS["lang"]['Domain Controller Name'] = '도메인 컨트롤러 이름 *';

$GLOBALS["lang"]['domain_role'] = '도메인 역할';

$GLOBALS["lang"]['Domain Role'] = '도메인 역할';

$GLOBALS["lang"]['domain_short'] = '도메인 Short';

$GLOBALS["lang"]['Domain Short'] = '도메인 Short';

$GLOBALS["lang"]['Dominica'] = '한국어';

$GLOBALS["lang"]['Dominican Republic'] = '도미니카 공화국';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = '내 손을 잡아, 나는 내가 무엇을하고 있는지 알고. 필터 및 사용자 정의 테이블에 가입 할 수있는 능력이 없습니다.';

$GLOBALS["lang"]['Download'] = '다운로드';

$GLOBALS["lang"]['Download a File'] = '파일 다운로드';

$GLOBALS["lang"]['Download a file from URL'] = 'URL에서 파일 다운로드';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'test_windows_client.vbs 스크립트를 직접 다운로드';

$GLOBALS["lang"]['Download your updated version from'] = '업데이트 된 버전 다운로드';

$GLOBALS["lang"]['driver'] = '관련 기사';

$GLOBALS["lang"]['Driver'] = '관련 기사';

$GLOBALS["lang"]['duplex'] = '연락처';

$GLOBALS["lang"]['Duplex'] = '연락처';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = '중복 장치 / Missing 장치';

$GLOBALS["lang"]['duration'] = '이름 *';

$GLOBALS["lang"]['Duration'] = '이름 *';

$GLOBALS["lang"]['Dutch'] = '담당자: Ms.';

$GLOBALS["lang"]['ESXi'] = '사이트맵';

$GLOBALS["lang"]['EULA'] = '유럽 연합';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = '각 IP는 발견 된 옵션으로 스캔됩니다 (Discovery Scan Options and Discovery - 위키에서 커뮤니티 vs Professional vs Enterprise 참조). 일반적으로 Nmap은 포트 22 (ssh), 135 (wmi), 62078 (iPhone) 및 UDP 161 (snmp)를 테스트합니다. 22, 135 또는 161의 경우 자격 증명 목록이 검색되고 각 자격 증명이 차례로 테스트됩니다. 첫 번째 작업 자격은 장치에서 직접 쿼리에 사용됩니다. 참고 - 이전에 발견 된 장치가 발견 된 경우, 그 자격 증명은 먼저 테스트됩니다. 실패하면 다른 자격 증명이 시도됩니다.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = '장치가 발견되거나 감사 결과가 처리됩니다. 모든 규칙은 데이터베이스에서 검색되며 특정 장치의 속성에 대해 실행됩니다. 규칙은 한 번에 하나의 장치에서 실행 - 말할 수있는 시설이 없습니다 <i>모든 장치에 대한 규칙을 실행<i> 또는 <i>이 장치에 대한 규칙을 실행<i>· 개별 규칙은 장치의 하나 이상의 속성을 테스트하고 규칙과 일치하면 결과가 적용됩니다. 몇몇 특성은 시험될 수 있습니다. 몇몇 특성은 놓일 수 있습니다. 이런 생각이면 Open-AudIT의 시스템.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = '네트워크에 대해 쉽게 발견을 실행할 수 있습니다.';

$GLOBALS["lang"]['Ecuador'] = '에콰도르';

$GLOBALS["lang"]['Edit'] = '제품정보';

$GLOBALS["lang"]['edit_log'] = '비밀번호';

$GLOBALS["lang"]['Edit Log'] = '비밀번호';

$GLOBALS["lang"]['editable'] = '관련 기사';

$GLOBALS["lang"]['Editable'] = '관련 기사';

$GLOBALS["lang"]['edited_by'] = '에 의해 편집';

$GLOBALS["lang"]['Edited By'] = '에 의해 편집';

$GLOBALS["lang"]['edited_date'] = '편집 날짜';

$GLOBALS["lang"]['Edited Date'] = '편집 날짜';

$GLOBALS["lang"]['edition'] = '계정 만들기';

$GLOBALS["lang"]['Edition'] = '계정 만들기';

$GLOBALS["lang"]['Egypt'] = '담당자: Jack';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = '아마존, 구글 또는 마이크로소프트.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = '아무도 또는 현재.

<strong>이름 *</strong> - 성공적인 공격은 취약 시스템의 배포 및 실행 조건에 의존하지 않습니다. 공격자는 취약점에 도달 할 수 있으며 취약점의 모든 또는 대부분의 인스턴스에서 악용을 실행할 수 있습니다.

<strong>이름 *</strong> - 성공적인 공격은 특정 배포 및 공격을 가능하게하는 취약 시스템의 실행 조건의 존재에 따라 달라집니다. 다음을 포함합니다:

레이스 상태는 성공적으로 취약점을 악화해야합니다. 공격의 성공은 공격자의 전체 통제하에 있지 않는 실행 조건에서 조절됩니다. 공격은 성공하기 전에 단일 목표에 대해 여러 번 출시해야합니다.

네트워크 주입. 공격자는 대상 간 논리 네트워크 경로로 스스로 주입해야하며 피해자가 요청한 리소스 (예를들면 공감 공격자가 필요한 취약점).';

$GLOBALS["lang"]['El Salvador'] = '엘살바도르';

$GLOBALS["lang"]['email'] = '이름 *';

$GLOBALS["lang"]['Email'] = '이름 *';

$GLOBALS["lang"]['email_address'] = '이메일 주소';

$GLOBALS["lang"]['Email Address'] = '이메일 주소';

$GLOBALS["lang"]['Email Configuration'] = '이메일 설정';

$GLOBALS["lang"]['Email to send test to'] = '시험에 보내기';

$GLOBALS["lang"]['Enable'] = '이름 *';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = '이 컴퓨터에서  Distributed COM 사용 가능 - 옵션 확인';

$GLOBALS["lang"]['enabled'] = '이름 *';

$GLOBALS["lang"]['Enabled'] = '이름 *';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Windows에서 기능 활성화';

$GLOBALS["lang"]['encryption'] = '암호화';

$GLOBALS["lang"]['Encryption'] = '암호화';

$GLOBALS["lang"]['encryption_method'] = '암호화 방법';

$GLOBALS["lang"]['Encryption Method'] = '암호화 방법';

$GLOBALS["lang"]['encryption_status'] = '암호화 상태';

$GLOBALS["lang"]['Encryption Status'] = '암호화 상태';

$GLOBALS["lang"]['end_date'] = '종료 날짜';

$GLOBALS["lang"]['End Date'] = '종료 날짜';

$GLOBALS["lang"]['End OF Life Product ID'] = '생활 제품 ID의 끝';

$GLOBALS["lang"]['end_of_life'] = '생활의 끝';

$GLOBALS["lang"]['End Of Life'] = '생활의 끝';

$GLOBALS["lang"]['end_of_production'] = '생산의 끝';

$GLOBALS["lang"]['End Of Production'] = '생산의 끝';

$GLOBALS["lang"]['end_of_service'] = '서비스의 끝';

$GLOBALS["lang"]['End Of Service'] = '서비스의 끝';

$GLOBALS["lang"]['end_of_service_life'] = '서비스 기간의 끝';

$GLOBALS["lang"]['End Of Service Life'] = '서비스 기간의 끝';

$GLOBALS["lang"]['Endpoint'] = '끝점';

$GLOBALS["lang"]['English'] = '한국어';

$GLOBALS["lang"]['Enhances regulatory compliance'] = '규제 준수 향상';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Enrichment는 완료됩니다. CVE는 전체 메타데이터를 가지고 있으며 안정적으로 간주됩니다.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = '문서 관리 및 접근';

$GLOBALS["lang"]['enterprise'] = '회사 소개';

$GLOBALS["lang"]['Enterprise'] = '회사 소개';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise 개인 네트워크';

$GLOBALS["lang"]['Enterprise private network'] = 'Enterprise 개인 네트워크';

$GLOBALS["lang"]['Entitlement Type'] = '제목 유형';

$GLOBALS["lang"]['Entra'] = '이름 *';

$GLOBALS["lang"]['environment'] = '환경 정책';

$GLOBALS["lang"]['Environment'] = '환경 정책';

$GLOBALS["lang"]['Equal To'] = 'Equal에';

$GLOBALS["lang"]['Equal To or Greater Than'] = '더 큰 것 보다는 동등한 것';

$GLOBALS["lang"]['Equal To or Less Than'] = '더 적은에 동등한 것';

$GLOBALS["lang"]['Equals'] = '이름 *';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Equatorial 기니';

$GLOBALS["lang"]['Eritrea'] = '에리트레아';

$GLOBALS["lang"]['Error'] = '오류 수정';

$GLOBALS["lang"]['Error Code'] = '오류 코드';

$GLOBALS["lang"]['Esperanto'] = '에스페란토';

$GLOBALS["lang"]['Establish a project plan and timeline'] = '프로젝트 계획 및 타임라인 구축';

$GLOBALS["lang"]['Establish an information security policy'] = '정보 보안 정책 수립';

$GLOBALS["lang"]['Established'] = '회사연혁';

$GLOBALS["lang"]['Estonia'] = '에스토니아';

$GLOBALS["lang"]['Estonian'] = '에스토니아';

$GLOBALS["lang"]['Ethernet MAC'] = '이더넷 MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet 맥';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet 맥';

$GLOBALS["lang"]['Ethiopia'] = '에 의해';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'ISMS를 내부적으로 평가';

$GLOBALS["lang"]['Every'] = '모든 제품';

$GLOBALS["lang"]['Every Day'] = '매일';

$GLOBALS["lang"]['Example'] = '이름 *';

$GLOBALS["lang"]['Example Devices'] = '회사연혁';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Access로 Org Chart 예제';

$GLOBALS["lang"]['Example text from'] = '예제 텍스트';

$GLOBALS["lang"]['Examples'] = '이름 *';

$GLOBALS["lang"]['Exceptions'] = '이름 *';

$GLOBALS["lang"]['exclude'] = '이름 *';

$GLOBALS["lang"]['Exclude'] = '이름 *';

$GLOBALS["lang"]['exclude_ip'] = 'IP 제외';

$GLOBALS["lang"]['Exclude IP'] = 'IP 제외';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP 주소 제외';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'IP 주소 포함 (개인 IP - 192.168.1.20, 범위 - 192.168.1.30-40 또는 하위넷 - 192.168.1.100/30) 스캔 중 나열. Comma 분리, 공간 없음.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP 포트 제외';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp 포트 제외';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp 포트 제외';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP 포트 제외';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp 포트 제외';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp 포트 제외';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = '스캔 된 모든 포트를 제외합니다. Comma 분리, 공간 없음.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Nmap에서 이러한 IP 주소를 스캔했습니다.';

$GLOBALS["lang"]['Excluded'] = '이름 *';

$GLOBALS["lang"]['exclusion_reasons'] = '예외 이유';

$GLOBALS["lang"]['Exclusion Reasons'] = '예외 이유';

$GLOBALS["lang"]['executable'] = '실행하기';

$GLOBALS["lang"]['Executable'] = '실행하기';

$GLOBALS["lang"]['executable_id'] = '실행 가능한 ID';

$GLOBALS["lang"]['Executable ID'] = '실행 가능한 ID';

$GLOBALS["lang"]['executables'] = '실행하기';

$GLOBALS["lang"]['Executables'] = '실행하기';

$GLOBALS["lang"]['Execute'] = '계정 관리';

$GLOBALS["lang"]['Executing'] = '회사연혁';

$GLOBALS["lang"]['exemption_reason'] = '면제 Reason';

$GLOBALS["lang"]['Exemption Reason'] = '면제 Reason';

$GLOBALS["lang"]['Existing Building'] = '회사연혁';

$GLOBALS["lang"]['Existing Floor'] = '연락처';

$GLOBALS["lang"]['Existing Room'] = '주변관광';

$GLOBALS["lang"]['Existing Row'] = 'Existing 줄';

$GLOBALS["lang"]['expire_date'] = 'Expire 날짜';

$GLOBALS["lang"]['Expire Date'] = 'Expire 날짜';

$GLOBALS["lang"]['expire_minutes'] = '몇 분';

$GLOBALS["lang"]['Expire Minutes'] = '몇 분';

$GLOBALS["lang"]['expires'] = '패스워드';

$GLOBALS["lang"]['Expires'] = '패스워드';

$GLOBALS["lang"]['expiry_date'] = '유효 기간';

$GLOBALS["lang"]['Expiry Date'] = '유효 기간';

$GLOBALS["lang"]['exploit_maturity'] = '폭발성';

$GLOBALS["lang"]['Exploit Maturity'] = '폭발성';

$GLOBALS["lang"]['Export'] = '수출입';

$GLOBALS["lang"]['Export by Device'] = 'Device로 내보내기';

$GLOBALS["lang"]['Export by Policy'] = '수출 정책';

$GLOBALS["lang"]['Export data to'] = '수출 자료';

$GLOBALS["lang"]['Exporting a Device'] = '장치 수출';

$GLOBALS["lang"]['expose'] = '제품정보';

$GLOBALS["lang"]['Expose'] = '제품정보';

$GLOBALS["lang"]['External'] = '기타 제품';

$GLOBALS["lang"]['External Field Name'] = '외부 분야 이름';

$GLOBALS["lang"]['External Field Type'] = '외부 분야 유형';

$GLOBALS["lang"]['External Field Types'] = '외부 분야 유형';

$GLOBALS["lang"]['external_ident'] = '외부 Ident';

$GLOBALS["lang"]['External Ident'] = '외부 Ident';

$GLOBALS["lang"]['external_link'] = '외부 링크';

$GLOBALS["lang"]['External Link'] = '외부 링크';

$GLOBALS["lang"]['extra_columns'] = '추가 열';

$GLOBALS["lang"]['Extra Columns'] = '추가 열';

$GLOBALS["lang"]['Extra and Time based Reporting'] = '추가 및 시간 기반 보고';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = '추가 및 더 많은 verbose 로깅은 문제 해결을 위해 생성됩니다.';

$GLOBALS["lang"]['FAQ'] = '제품 정보';

$GLOBALS["lang"]['FQDN'] = '사이트맵';

$GLOBALS["lang"]['FW Revision'] = 'FW 개정';

$GLOBALS["lang"]['Fail'] = '뚱 베어';

$GLOBALS["lang"]['Failed'] = '실패한';

$GLOBALS["lang"]['Failed Severity'] = '실패한 심각성';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falkland 제도 (말리아)';

$GLOBALS["lang"]['Family'] = '이름 *';

$GLOBALS["lang"]['Faroe Islands'] = '콜롬비아';

$GLOBALS["lang"]['Features'] = '주요 특징';

$GLOBALS["lang"]['February'] = '2 월';

$GLOBALS["lang"]['field'] = '제품정보';

$GLOBALS["lang"]['Field'] = '제품정보';

$GLOBALS["lang"]['field_id'] = '필드 ID';

$GLOBALS["lang"]['Field ID'] = '필드 ID';

$GLOBALS["lang"]['Field Name'] = '필드 이름';

$GLOBALS["lang"]['Field Type'] = '필드 유형';

$GLOBALS["lang"]['Fields'] = '제품정보';

$GLOBALS["lang"]['fields'] = '제품정보';

$GLOBALS["lang"]['Fields attributes are'] = 'Fields 속성은';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = '피지 섬';

$GLOBALS["lang"]['File'] = '파일 형식';

$GLOBALS["lang"]['File Auditing'] = '파일 감사';

$GLOBALS["lang"]['File Import'] = '파일 가져 오기';

$GLOBALS["lang"]['File Input'] = '파일 입력';

$GLOBALS["lang"]['file_name'] = '파일 이름';

$GLOBALS["lang"]['File Name'] = '파일 이름';

$GLOBALS["lang"]['File Share Discovery'] = '파일 공유 Discovery';

$GLOBALS["lang"]['file_size'] = '파일 크기';

$GLOBALS["lang"]['File Size'] = '파일 크기';

$GLOBALS["lang"]['filename'] = '파일명';

$GLOBALS["lang"]['Filename'] = '파일명';

$GLOBALS["lang"]['files'] = '파일 형식';

$GLOBALS["lang"]['Files'] = '파일 형식';

$GLOBALS["lang"]['files_id'] = '파일 ID';

$GLOBALS["lang"]['Files ID'] = '파일 ID';

$GLOBALS["lang"]['filter'] = '제품정보';

$GLOBALS["lang"]['Filter'] = '제품정보';

$GLOBALS["lang"]['filtered'] = '필터링';

$GLOBALS["lang"]['Filtered'] = '필터링';

$GLOBALS["lang"]['Filtered Ports'] = '필터링 포트';

$GLOBALS["lang"]['Finland'] = '주요 특징';

$GLOBALS["lang"]['Finnish'] = '한국어';

$GLOBALS["lang"]['Firewall'] = '비밀번호';

$GLOBALS["lang"]['Firewall Packages'] = '방화벽 패키지';

$GLOBALS["lang"]['firewall_rule'] = '방화벽 규칙';

$GLOBALS["lang"]['Firewall Rule'] = '방화벽 규칙';

$GLOBALS["lang"]['firmware'] = '회사 소개';

$GLOBALS["lang"]['Firmware'] = '회사 소개';

$GLOBALS["lang"]['firmware_revision'] = '회사 소개';

$GLOBALS["lang"]['Firmware Revision'] = '회사 소개';

$GLOBALS["lang"]['First'] = '한국어';

$GLOBALS["lang"]['First Name'] = '이름 *';

$GLOBALS["lang"]['first_run'] = '첫 번째 실행';

$GLOBALS["lang"]['First Run'] = '첫 번째 실행';

$GLOBALS["lang"]['first_seen'] = '첫 경험';

$GLOBALS["lang"]['First Seen'] = '첫 경험';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = '첫 번째 초점은 다음과 같습니다. 기본 소프트웨어, 사용자 또는 Netstat 데이터로 시도하고 있습니까? 중요한 것은 무엇일까요?';

$GLOBALS["lang"]['FirstWave'] = '첫 번째웨이';

$GLOBALS["lang"]['Fix'] = '수정하기';

$GLOBALS["lang"]['Fixed'] = '설치하기';

$GLOBALS["lang"]['Fixing the Issue'] = '문제 수정';

$GLOBALS["lang"]['Floor'] = '층 -';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '아래 링크를 따르고 Open-AudIT를 사용하는 방법을 발견하십시오. <b>어떤 네트워크?</b>';

$GLOBALS["lang"]['For'] = '제품 정보';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = '제품 정보 <i>제품정보</i> Baseline을 선택해야 하며, 그룹을 선택해야 하며, 이 Baseline에 적용 가능한 경우, 이 Baseline에 적용 가능한 경우 Baseline을 적용할 수 있는 장치를 나타냅니다. 이것은 erroneous 입장을 방지할 것입니다.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian/Ubuntu 실행을 위해, 당신의 override를 기억하기 위하여 dpkg 조정을 포함하여 이렇게 apt-get 향상은 끊지 않을 것입니다';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open-AudIT는 v1, v2 및 v3 자격 증명을 사용할 수 있습니다. 이 장치는 라우터, 스위치 (일반 네트워크 장치) 또는 컴퓨터 (리눅스 및 Windows는 종종 모니터링 도구에 SNMP를 실행).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = '크론의 뇌관을 위해, 이 Wikipedia 페이지를 참조하십시오';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = '씨앗 발견을 위해 개인 IP 주소 공간에 IP를 발견해야합니다.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = '씨앗 발견을 위해 선택된 서브넷에 IP를 발견해야합니다.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '씨앗 발견을 위해, 발견을 실행하기 전에 subnet을 ping해야합니다.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'SQL 쿼리의 고급 항목. 쿼리에 따라, 당신은 포함해야 <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = '각 spawned 과정에 대 한, 아래 발생.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = '예를 들어, Redhat 9를 실행하는 장치에서 baseline을 만들 수 있습니다. 클러스터에서 Apache 서버 중 하나로서 작용합니다. 이 특정 서버는 당신이 그것을 원하지만 클러스터의 다른 서버가 정확히 동일하게 구성되는지 확인하는 방법입니다. Baselines는 이것을 결정할 수 있습니다.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = '예를 들어, Redhat 9를 실행하는 장치에서 baseline을 만들 수 있습니다. 클러스터에서 Apache 서버 중 하나로서 작용합니다. 이 특정 서버는 당신이 그것을 원하지만 클러스터의 다른 서버가 정확히 동일하게 구성되는지 확인하는 방법입니다. Baselines는 이것을 결정할 수 있습니다.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = '자세한 내용은 wiki를 참조하십시오.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = '영구적이지 않은 라이선스의 경우 라이선스가 만료됩니다.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = '자세한 내용은 Open-AudIT Knowledge Base를 확인하십시오.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = '자세한 내용은 다음 가이드를 참조하십시오. 제품 정보';

$GLOBALS["lang"]['For more information, see'] = '더 많은 정보를 원하시면,';

$GLOBALS["lang"]['form_factor'] = '폼 팩터';

$GLOBALS["lang"]['Form Factor'] = '폼 팩터';

$GLOBALS["lang"]['format'] = '지원하다';

$GLOBALS["lang"]['Format'] = '지원하다';

$GLOBALS["lang"]['Forth'] = '제품정보';

$GLOBALS["lang"]['fqdn'] = '사이트맵';

$GLOBALS["lang"]['Fqdn'] = '사이트맵';

$GLOBALS["lang"]['France, French Republic'] = '프랑스, 프랑스';

$GLOBALS["lang"]['free'] = '무료 다운로드';

$GLOBALS["lang"]['Free'] = '무료 다운로드';

$GLOBALS["lang"]['French'] = '담당자: Ms.';

$GLOBALS["lang"]['French Guiana'] = '프랑스 Guiana';

$GLOBALS["lang"]['French Polynesia'] = '프랑스 Polynesia';

$GLOBALS["lang"]['French Southern Territories'] = '프랑스 남부 지역';

$GLOBALS["lang"]['Frequently Asked Questions'] = '자주 묻는 질문';

$GLOBALS["lang"]['Friday'] = '월~금';

$GLOBALS["lang"]['From 100 Devices'] = '100개의 장치에서';

$GLOBALS["lang"]['From 500 Devices'] = '500대의 장치에서';

$GLOBALS["lang"]['From that page'] = '그 페이지';

$GLOBALS["lang"]['full_name'] = '이름 *';

$GLOBALS["lang"]['Full Name'] = '이름 *';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = '기계 유형과 크기와 같은 정규적인 Open-AudIT 감사 및 세부사항에서 모든 세부사항을 가진 가득 차있는 구름 감사.';

$GLOBALS["lang"]['function'] = '제품정보';

$GLOBALS["lang"]['Function'] = '제품정보';

$GLOBALS["lang"]['GROUP BY'] = '그룹 BY';

$GLOBALS["lang"]['Gabon'] = '스낵 바';

$GLOBALS["lang"]['Galician'] = '인기 카테고리';

$GLOBALS["lang"]['Gambia the'] = '감비아';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap 분석 (옵션)';

$GLOBALS["lang"]['gateway'] = '오시는 길';

$GLOBALS["lang"]['Gateway'] = '오시는 길';

$GLOBALS["lang"]['gateways'] = '오시는 길';

$GLOBALS["lang"]['Gateways'] = '오시는 길';

$GLOBALS["lang"]['Generated By'] = '리뷰 쓰기';

$GLOBALS["lang"]['geo'] = '사이트맵';

$GLOBALS["lang"]['Geo'] = '사이트맵';

$GLOBALS["lang"]['Geographical Maps'] = 'Geographical 지도';

$GLOBALS["lang"]['Georgia'] = '주요 특징';

$GLOBALS["lang"]['German'] = '한국어';

$GLOBALS["lang"]['Germany'] = '한국어';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long를 얻으십시오';

$GLOBALS["lang"]['Get News'] = '뉴스 받기';

$GLOBALS["lang"]['Get Started'] = '시작하기';

$GLOBALS["lang"]['Get a Free License'] = '무료 라이센스 받기';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Open-AudIT 플랫폼에 익숙하고 그 기능을 살펴보십시오.';

$GLOBALS["lang"]['Getting Started'] = '시작하기';

$GLOBALS["lang"]['Ghana'] = '뚱 베어';

$GLOBALS["lang"]['Gibraltar'] = '채용정보';

$GLOBALS["lang"]['Github'] = '뚱 베어';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery 옵션';

$GLOBALS["lang"]['Global area network'] = '글로벌 영역 네트워크';

$GLOBALS["lang"]['Go'] = '이름 *';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Open-AudIT 서버로 돌아가서 대상 Windows 컴퓨터 IP 주소로 검색을 생성하십시오. 발견을 실행, 어떤 문제의 메모를 복용. 어떤 문제가 발견되면 적절한 조치를 취하십시오.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = '대상 Windows PC (또는 RDP를 사용)를 이동하고 검색 크리덴셜 설정에 의해 사용되는 사용자로 로그인하십시오.';

$GLOBALS["lang"]['Go to menu'] = '본문 바로가기';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = '오시는 길 <i>이름 *</i> -> -> <i>앱 등록</i> 왼쪽의 메뉴 아이템. Open-AudIT에 대한 검색 목록에서 Open-AudIT 항목을 클릭 (앱 오픈-AudIT 이름을 지정).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = '오시는 길 <i>인증서 및 비밀</i> 메뉴 항목 <i>계정 관리</i> 본문 바로가기';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = '오시는 길 <i>단일 사인온</i> 메뉴 항목 및 SAML을 클릭 <i>단일 로그인 방법 선택</i>·';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute 필드';

$GLOBALS["lang"]['Google JSON Credentials'] = '구글 JSON 회사 소개';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google지도 API 이름 *';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = '좋은, 당신은 도울 수 있습니다! 처음 화면 GUI에 표시된 텍스트를 파고 무엇을 보아야 합니다. 번역이 개선되고 모든 릴리스에 대해 걱정할 필요가 없습니다!';

$GLOBALS["lang"]['Greater Than'] = '더 큰';

$GLOBALS["lang"]['Greater Than or Equals'] = '더 중대한 또는 동등한 것';

$GLOBALS["lang"]['Greece'] = '한국어';

$GLOBALS["lang"]['Greek'] = '담당자: Ms.';

$GLOBALS["lang"]['Green Query'] = '녹색 Query';

$GLOBALS["lang"]['Greenland'] = '그린랜드';

$GLOBALS["lang"]['Grenada'] = '인기 카테고리';

$GLOBALS["lang"]['Group'] = '이름 *';

$GLOBALS["lang"]['group_by'] = '그룹 By';

$GLOBALS["lang"]['Group By'] = '그룹 By';

$GLOBALS["lang"]['group_id'] = '그룹 ID';

$GLOBALS["lang"]['Group ID'] = '그룹 ID';

$GLOBALS["lang"]['groups'] = '회사 소개';

$GLOBALS["lang"]['Groups'] = '회사 소개';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = '그룹은 필수 조건과 일치하는 장치의 간단한 목록으로 사용됩니다. JSON을 사용하여 요청한 경우, 목록의 반환 <i>장치.id</i> 이름 * 웹 인터페이스를 사용하려면 표준 열 속성 목록을 반환합니다. 그룹은 통합, 기본 및 기타 항목에 사용할 수 있습니다.';

$GLOBALS["lang"]['Guadeloupe'] = '콜롬비아';

$GLOBALS["lang"]['Guam'] = '한국어';

$GLOBALS["lang"]['Guatemala'] = '스낵 바';

$GLOBALS["lang"]['Guernsey'] = '인기 카테고리';

$GLOBALS["lang"]['guest_device_id'] = '객실 ID';

$GLOBALS["lang"]['Guest Device ID'] = '객실 ID';

$GLOBALS["lang"]['guid'] = '이름 *';

$GLOBALS["lang"]['Guid'] = '이름 *';

$GLOBALS["lang"]['Guinea'] = '주요 특징';

$GLOBALS["lang"]['Guinea-Bissau'] = '쿠키 정책';

$GLOBALS["lang"]['Guyana'] = '인기 있는';

$GLOBALS["lang"]['HP-UX'] = 'HP 소프트웨어';

$GLOBALS["lang"]['HW Revision'] = 'HW 개정';

$GLOBALS["lang"]['Haiti'] = '아이티';

$GLOBALS["lang"]['hard_drive_index'] = '하드 드라이브 인덱스';

$GLOBALS["lang"]['Hard Drive Index'] = '하드 드라이브 인덱스';

$GLOBALS["lang"]['Hardware'] = '회사 소개';

$GLOBALS["lang"]['hardware_revision'] = '하드웨어 Revision';

$GLOBALS["lang"]['Hardware Revision'] = '하드웨어 Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = '이 정책은이 조직에서 적용됩니다.';

$GLOBALS["lang"]['hash'] = '해시태그';

$GLOBALS["lang"]['Hash'] = '해시태그';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = '에이전트는 항상 최신 감사 스크립트를 실행 (당신은 Open-AudIT를 업그레이드하고 수동으로 대상에 스크립트를 복사하면 cron을 설정 - 당신은 각 업그레이드에 대한이 스크립트를 업데이트해야합니다).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = '사용자가 명령 프롬프트를 엽니다 (using <i>Administrator로 실행</i>). 아래를 입력하여 에이전트를 다운로드합니다.';

$GLOBALS["lang"]['Head'] = '제품정보';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island와 맥도날드 섬';

$GLOBALS["lang"]['Hebrew'] = '한국어';

$GLOBALS["lang"]['height'] = '고도:';

$GLOBALS["lang"]['Height'] = '고도:';

$GLOBALS["lang"]['Height in RU'] = 'RU의 높이';

$GLOBALS["lang"]['Help'] = '지원하다';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = '자주 묻는 질문';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = '정보 보안 위험 관리 및 완화';

$GLOBALS["lang"]['Hide Audit Window'] = '숨기기 감사 창';

$GLOBALS["lang"]['high'] = '사이트맵';

$GLOBALS["lang"]['High'] = '사이트맵';

$GLOBALS["lang"]['High Availability'] = '높은 가용성';

$GLOBALS["lang"]['Hindi'] = '한국어';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '성 (Vatican City State)';

$GLOBALS["lang"]['Home'] = '홈 > 제품';

$GLOBALS["lang"]['home'] = '홈 > 제품';

$GLOBALS["lang"]['Home Area Network'] = '홈 지역 네트워크';

$GLOBALS["lang"]['Home area network'] = '홈 영역 네트워크';

$GLOBALS["lang"]['Honduras'] = '채용정보';

$GLOBALS["lang"]['Hong Kong'] = '홍콩';

$GLOBALS["lang"]['host'] = '이름 *';

$GLOBALS["lang"]['Host'] = '이름 *';

$GLOBALS["lang"]['hostname'] = '이름 *';

$GLOBALS["lang"]['Hostname'] = '이름 *';

$GLOBALS["lang"]['hour'] = '시간 :';

$GLOBALS["lang"]['Hour'] = '시간 :';

$GLOBALS["lang"]['How Does It Work?'] = '어떻게 작동합니까?';

$GLOBALS["lang"]['How Does it Work?'] = '어떻게 작동합니까?';

$GLOBALS["lang"]['How Long Does it Take'] = '얼마나 오래 걸리는';

$GLOBALS["lang"]['How and Why is'] = '왜?';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = '왜 Open-AudIT 더 안전한가요?';

$GLOBALS["lang"]['How do they work?'] = '그들은 어떻게 작동합니까?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Device Seed Discovery는 어떻게 알려진 IP를 찾는가?';

$GLOBALS["lang"]['How long did the command take to execute.'] = '긴 명령을 실행하는 방법.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Nmap이 응답을 기다리는 방법, 장치 당.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = '이 선반에 얼마나 많은 회로 급식.';

$GLOBALS["lang"]['How many policies results in a fail.'] = '실패의 몇 가지 정책 결과.';

$GLOBALS["lang"]['How many policies results in a pass.'] = '얼마나 많은 정책이 패스에 결과.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = '이 선반에 있는 얼마나 많은 힘 소켓.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = '고도에 있는 많은 선반 단위는 이 선반입니다.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = '수집가가가가가 작업에 대한 서버를 요청하는 방법.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = '통합되는 장치를 선택해야 하는 방법 (Aattribute, Query 또는 그룹 사용).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = '취약점이 악화되는 방법 (예, 네트워크, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = '비교하는 방법';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = '취약점에 대한 인간적인 설명.';

$GLOBALS["lang"]['Hungarian'] = '뚱 베어';

$GLOBALS["lang"]['Hungary'] = '한국어';

$GLOBALS["lang"]['hw_cpe'] = '사이트맵';

$GLOBALS["lang"]['Hw Cpe'] = '사이트맵';

$GLOBALS["lang"]['hyperthreading'] = '관련 기사';

$GLOBALS["lang"]['Hyperthreading'] = '관련 기사';

$GLOBALS["lang"]['I have read the EULA.'] = '나는 EULA를 읽었습니다.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = '이 게시물은 Open-AudIT 및 Security에 대해 궁금한 점이 발생했습니다. 당신이 모든 질문에 대한 질문이 있다면, FirstWave에서 우리에게 도달하는 것을 망설이지 마십시오. 우리는 항상 당신의 관심사 및 필요를 토론하게 행복합니다. 그리고 어쩌면 당신의 질문은 내가 여기에 주소가없는 경우, 나는 미래의 사용자에 대한 여기에 추가 할 수';

$GLOBALS["lang"]['id'] = '이름 *';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = '이름 *';

$GLOBALS["lang"]['IMPORTANT'] = '제품정보';

$GLOBALS["lang"]['INPUTS'] = '채용 정보';

$GLOBALS["lang"]['IOS Version'] = 'IOS 버전';

$GLOBALS["lang"]['IP'] = 'IP 정보';

$GLOBALS["lang"]['ip'] = 'IP 정보';

$GLOBALS["lang"]['IP Address'] = 'IP 주소';

$GLOBALS["lang"]['IP Addresses'] = 'IP 주소';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 정보';

$GLOBALS["lang"]['IP Set By'] = 'IP 세트';

$GLOBALS["lang"]['ISMS'] = '사이트맵';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 전용.';

$GLOBALS["lang"]['Iceland'] = '아이슬란드';

$GLOBALS["lang"]['icon'] = '아이콘';

$GLOBALS["lang"]['Icon'] = '아이콘';

$GLOBALS["lang"]['Icon and Text'] = '아이콘 및 텍스트';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = '아이콘, 텍스트 전용 또는 아이콘 및 텍스트.';

$GLOBALS["lang"]['id_internal'] = 'Id 내부';

$GLOBALS["lang"]['Id Internal'] = 'Id 내부';

$GLOBALS["lang"]['id_number'] = 'Id 번호';

$GLOBALS["lang"]['Id Number'] = 'Id 번호';

$GLOBALS["lang"]['identification'] = '이름 *';

$GLOBALS["lang"]['Identification'] = '이름 *';

$GLOBALS["lang"]['Identify information assets'] = '정보 자산 식별';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = '관심 당사자와 그들의 요구 사항을 식별';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = '주요 이해 관계자를 식별하고 역할 할당';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = '당신의 exemplary인 장치(s)를 식별하거나 <i>금 이미지</i> 당신은 유사한 장치를 비교하고 싶습니다.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = '보안 위험 파악';

$GLOBALS["lang"]['If'] = '이름 *';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = '장치가 개별적으로 발견되면 <i>관련 제품</i> 장치 상세 페이지에 대한 링크, 우리는이 장치가 이전에 발견 된 경우 첫 번째 체크 (Discovery) 그래서, 그 스캔에서 발견 옵션을 사용. 이전에 발견되지 않은 경우, 우리는 구성 항목 discovery_default_scan_option 설정에 반대합니다.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = '새로운 Org가 생성되면 LDAP 그룹 이름은 이름에서 자동으로 파생됩니다. 예를 들어, 새로운 Org이 생성되고 Test라는 경우, 해당 LDAP 그룹은 open-audit_orgs_test 이름을 지정합니다.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = '포트가 필터링 된 상태에서 응답하면 사용할 수 있습니다.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = '포트가 열리면|필터링 된 경우, 사용 가능한 것을 고려해야합니다.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = '원격 장치가 Open-AudIT 선택한 장치에서 존재하지 않으면 외부 시스템에서 삭제해야합니다.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudIT 장치가 변경되면 외부 시스템을 업데이트해야합니다.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Open-AudIT 장치가 외부 시스템에 있지 않으면 생성해야 합니다.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = '에이전트가 1 차 IP가이 하위넷에보고되면 작업을 수행합니다.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = '이러한 모든 경우 (일반적으로, 공간 없음) 포트가 감지되고, SSH가 그들을 실행하고 감사를 위해 그들을 사용합니다. 이 포트를 Custom TCP 포트에 추가할 필요가 없습니다 - 자동으로 추가됩니다.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = '연산자가 지정되지 않은 경우, 기본값은 =입니다. 속성은 완전히 자격이 있어야 합니다 - ie, device.hostname (만 호스트 이름).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = '값이 없는 경우, 이 값을 공급합니다. EG: system.nmis_group / 구성. 그룹 사용';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '설정하면 특정 장치 열의 JSON 배열을 붙듭니다. 이 사용자는 설정 기본값보다 다른 것을 볼 수 있습니다.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'OS 가족 (장치에 의해 보고되는 것과 같이) 이 품목, 통행을 포함합니다.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Open-AudIT Server가 수집가가가가 보고되면, 추가 드롭 다운이 제공됩니다. 작업이 실행되어야 하는 것을 지정할 수 있습니다. 디스커버리 작업 만 지원됩니다.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = '에이전트 OS 가족 (case insensitive)이 문자열을 포함하면 작업을 수행합니다.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = '이진이 이 위치 중 하나에서 찾을 수없는 경우, 경고 메시지는 설치자에 표시됩니다.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '다음 조건이 충족되면:<br/><ul><li>역할에는 할당된 ad_group가 있습니다.</li><li>Org에는 할당된 ad_group가 있습니다.</li><li>사이트맵 Server has use_roles set 에 y</li><li>사용자는 LDAP (Active Directory 또는 OpenLDAP)에 존재하며 할당된 ad_groups에 있습니다.</li></ul>이 사용자는 Open-AudIT의 계정 없이 Open-AudIT에 로그인할 수 있습니다. Open-AudIT는 질문에서 LDAP를 쿼리하고 사용자가 필요한 그룹에 있지만, Open-AudIT에서, 그들의 사용자 속성 (이름, 전체 이름, 이메일, 역할, orgs, 등) Open-AudIT 내에서 자동으로 채워질 것입니다.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = '로컬 필드가 true (bool) 또는 y (string) 또는 Y (string) 또는 1 (integer)이라면 외부 데이터를 1로 설정합니다.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = '로컬 필드가 true (bool) 또는 y (string) 또는 Y (string) 또는 1 (integer)이면 외부 데이터를 y로 설정합니다.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = '1차 IP (장치에 의해 보고되는 것과 같이)가 이 subnet에 있는 경우에, 통행.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = '사용자 계정이 실제로 Open-AudIT 내에서 존재하지 않는 경우 <code>use_authorisation</code> 설정된 사용자는 생성됩니다. 존재하지 않는 경우, 이메일과 같은 세부 사항, 전체 이름, 기타는 대체됩니다.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = '사용자가 유효한 자격 증명이 없거나 적어도 하나의 Open-AudIT 역할과 그룹에 있지 않는 경우 (사용 <code>use_authorisation</code>), Open-AudIT는 로컬 Open-AudIT 사용자 세부 정보 및 시도 인증 및 허가를 사용하여 삭제됩니다. 해당 이용 후기에 달린 코멘트가 없습니다.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Open-AudIT에 로그인하면 LDAP를 검색할 수 없습니다.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'OpenLDAP을 검색할 수 없는 Open-AudIT에 로그인하면, 다른 계정을 사용할 수 있습니다. dn_account와 dn_password를 사용하여 이것을 구성합니다.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = '값이 설정되지 않은 경우, 현재 타임스탬프가 사용됩니다.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = '값이 설정되면 타임스탬프 값이 사용됩니다.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = '이 변화가 당신을 위해 작동하지 않는 경우, 모두 손실되지 않습니다. 우리는 구성 항목을 추가했습니다 (기본적으로 n로 설정, 그래서이 새로운 상자에서 옵션을 사용하지 않습니다) discovery_use_org_id_match라고. 만약 당신이 y로 변경하면 OrgID는 발견에 의해 장치에 할당 된 관련 일치 규칙에 사용될 것입니다.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = '이 많은 분 (또는 더 많은)이 서버가 마지막으로 장치를 보았다 이후 통과 한 경우, 패스.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = '이 많거나 더 많은 분이 서버에 연락한 이후로 전달되면 작업을 수행합니다.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = '이 문제가 발생하면 웹 페이지에 사용되는 테이블 제어와 관련이 있습니다. 현재 페이지의 체크 박스의 상태만 저장합니다. 선택한 경우, 다음 페이지를 앞으로/뒤로 그 선택이 손실됩니다. 당신은 할 수 있습니다, 그러나, 각 페이지에 표시된 장치의 수를 확장하여 원하는 것을 달성. 상단 왼쪽 코너에서 드롭다운은 "페이지당 기록"입니다. 대량 편집을 선택하기 위해 원하는 모든 것을 볼 때까지 표시된 항목 수를 확장하기 위해 이것을 사용합니다.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'san 관리 소프트웨어를 감지하면 쿼리 전에 자동 발견을 실행해야합니다.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = '위치 유형을 추가하면 해당 아이콘을 추가합니다.';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = '장치를 추가하면 관련 아이콘을 표시하려면 .svg 포맷 된 파일을 디렉토리에 복사해야합니다.';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = '지원되는 FirstWave 고객인 경우에, 품목의 몇몇은 당신의 쉽게 돕는 것입니다. FirstWave와 함께 지원 티켓을 열고 로그파일을 첨부합니다. 또한 상단의 지원 버튼에서 출력을 포함';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = '지원되는 고객이라면 FirstWave와 함께 지원 티켓을 열어주세요.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Google Maps API 키 또는 귀하의 회사와 문제가 발생하면 Google Maps API 키를 만들 수 없습니다. FirstWave 지원 팀에 문의하십시오.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Windows 또는 귀하의 NMIS 서버가 원격이라면 서버에 액세스하려면 URL, 사용자 이름 및 암호를 공급해야 합니다.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = '괜찮은 광대역 또는 에테르 연결에 있다면, 항상 -T4 (Aggressive)를 사용하는 것이 좋습니다. 어떤 사람들은 사랑 - T5 (Insane) 내 취향에 너무 적극적이지만. 사람들은 때때로 -T2 (Polite)를 지정합니다. 그들은 호스트를 충돌하거나 일반적으로 비석되기 때문에 덜 가능성이 있다고 생각합니다. 그들은 종종 느리게 실현하지 않습니다 - T2 정말. 그들의 검사는 기본 검사 보다는 더 긴 10배 걸릴지도 모릅니다. 기계 충돌 및 대역폭 문제는 기본 타이밍 옵션 - T3 (Normal)과 드물고 일반적으로 신중하게 스캐너를 권장합니다. Omitting 버전 탐지는 이 문제를 감소시키기에 타이밍 가치와 더 효과적입니다.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'RedHat 또는 Centos 시스템을 실행하고 Nmap을 업그레이드 한 경우, 이진에 SUID를 재설정하십시오.';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Linux에서 Open-AudIT 서버를 실행하는 경우, 이것은 당신에게 영향을 미치지 않습니다.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Windows에서 Open-AudIT를 사용하거나 NMIS 서버가 Open-AudIT Server에 있지 않다면 (몇 가지 Linux 설치의 경우) 액세스 자격 증명 및 원격 NMIS에 URL을 공급해야합니다. 그러나 그게 전부입니다! 예 - NMIS와 Open-AudIT 간의 통합은 Windows 기반 Open-AudIT와 함께 작동합니다!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = '수집가를 선택하면 다음 5 분 경계에서 실행할 수 있습니다.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = '일반적으로 device_ 할당_to_org를 설정하고 구성 항목이 활성화되면 OrgID가 일치를 더 정제하는 데 사용됩니다.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = '일반적으로 device_ 할당_to_org를 설정하지 않으면 효과가 없습니다. 발견 (또는 감사 스크립트에서 수동으로) 설정된 경우 OrgID를 사용하여 검사하고 구성에서 활성화하십시오.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = '구성 항목을 활성화하면, 발견을 사용하여 Org을 할당하고 나중에 발견 한 후 장치의 OrgID를 변경하면 발견 된 새로운 장치가 발견 된 다음 시간을 생성 할 수 있습니다. 이 인스턴스에서, 당신은 아마도 나중에 발견을 실행하기 전에 device_ 할당_to_org를 해제해야합니다. 이것은 (이 인스턴스에서) 당신은 Open-AudIT에 말했다 <i>이 발견의이 장치는 Org X에 속합니다.<i>, 그러나 그 후에 장치의 Org를 바꿉니다. 저장된 장치 정보를 변경했습니다. 이 경우 - 더 이상 Org X에 속하는 장치가 없으므로 새로운 것을 만듭니다.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = '실행중인 안티 바이러스 소프트웨어가 있다면, Opmantek (omkd), Apache (apache2.2) 및 MySQL (mysql)의 서비스를 자동 시작으로 실행할 수 있습니다. 이 서비스는 Open-AudIT에 의해 사용됩니다. 한번만 해야 합니다. Anti-Virus 프로그램이 Open-AudIT에 대해 신속하게 유지되면 포럼에 게시하거나 Anti-Virus 소프트웨어의 이름과 버전과 함께 지원하기위한 이메일을 보내주십시오.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = '자격 증명을 갖는 경우, 가능한 전체 정보를 기대할 수 있습니다.<br/><br/>분명히, Open-AudIT를 사용하는 가장 좋은 방법은 발견되는 장치에 대한 자격 증명을 작업하는 것입니다 (WMI, SSH 또는 SNMP 자격 증명).<br/><br/>우리는 또한 credentials 없이 감사에 페이지가 있습니다.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = '"id" 필드를 포함하면 <strong>·</strong> 숫자로 설정, 그 항목은 생성보다 오히려 업데이트됩니다.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Active Directory 액세스를 구성해야 하는 경우 보통 example를 사용할 수 있습니다. <code>cn=Users,dc=your,dc=domain,dc=com</code> 제품 정보 <code>base_dn</code>· 설정할 필요가 없습니다 <code>user_dn</code>·';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = '사용자가 OpenLDAP 액세스를 구성해야하는 경우, 주어진 사용자 액세스 DN은 일반적으로 <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> 다음 설정해야 합니다. <code>base_dn</code> 으로 <code>dc=your,dc=domain,dc=com</code> · <code>user_dn</code> 으로 <code>uid=@username@@domain,cn=People</code>· 특별한 단어 <code>@username</code> · <code>@domain</code> 로그인 페이지에서 사용자에 의해 제공된 로그인 정보로 대체됩니다.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Server (or Collector)가 직접 설치되는 하위넷에서 발견을 실행하면 응답 장치에 대한 다음을 기대할 수 있습니다.';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = '서버 (또는 수집가)가 직접 설치되지 않은 하위넷에 발견을 실행하면 응답 장치에 대한 다음을 기대할 수 있습니다.';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = '목록 유형을 선택하면 추가 필드가 값을 호출합니다. 선택 가능한 값의 comma 분리된 목록을 넣어야 합니다. 이 필드가 편집될 때마다 드롭다운 박스에 표시됩니다.';

$GLOBALS["lang"]['If you set the values for'] = '값을 설정하면';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = '특정 구성을 사용하기 위해 에이전트를 강제하려는 경우, 아래의 에이전트 항목의 ID를 공급할 수 있습니다 (제원 항목 번호와 $ ID를 배치). 이 대리인이 설치될 때, 그것은 sevrer로 체크인하고 <strong>한국어</strong> 한 개인을 확인 에이전트 항목 속성 (tests and action). MSP가 있다면 유용 할 수 있습니다 - 특정 고객을위한 에이전트 항목을 만들고이 항목을 모두 사용하여 Org 및 위치에 할당합니다.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = '통합을 만들고 사용자 정의하려는 경우 고급 버튼을 클릭하십시오 (그리고 압도적이지 않습니다!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = '외부 제공 장치에서 Discovery를 실행하려면 옵션을 선택하고 통합이 생성되면 Discovery를 s.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = '디스커버리 밖에서 스크립트를 사용하고 싶다면 다른 엔드포인트를 생성했습니다. <i>스크립트</i>· 문서 보기';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = '사용자가 없는 경우 <i>Administrator로 실행</i> 권한, 그들은 여전히 에이전트를 다운로드 할 수 있습니다 (위의 첫 번째 명령) 아래에 감사를 제출하기 위해 실행. 에이전트가 설치되거나 예정되지 않고 한 번의 감사가 될 것입니다.';

$GLOBALS["lang"]['ifadminstatus'] = '계정 관리';

$GLOBALS["lang"]['Ifadminstatus'] = '계정 관리';

$GLOBALS["lang"]['iflastchange'] = '자주 묻는 질문';

$GLOBALS["lang"]['Iflastchange'] = '자주 묻는 질문';

$GLOBALS["lang"]['Ignore Invalid SSL'] = '잘못된 SSL';

$GLOBALS["lang"]['Ignored'] = '이름 *';

$GLOBALS["lang"]['image'] = '이름 *';

$GLOBALS["lang"]['Image'] = '이름 *';

$GLOBALS["lang"]['Images'] = '제품정보';

$GLOBALS["lang"]['impact_availability'] = '충격 가용성';

$GLOBALS["lang"]['Impact Availability'] = '충격 가용성';

$GLOBALS["lang"]['impact_confidentiality'] = '충격 기밀성';

$GLOBALS["lang"]['Impact Confidentiality'] = '충격 기밀성';

$GLOBALS["lang"]['impact_integrity'] = '충격 무결성';

$GLOBALS["lang"]['Impact Integrity'] = '충격 무결성';

$GLOBALS["lang"]['Implement selected controls and procedures'] = '선택된 통제 및 절차 구현';

$GLOBALS["lang"]['Implementation'] = '- 연혁';

$GLOBALS["lang"]['implementation_notes'] = '구현 노트';

$GLOBALS["lang"]['Implementation Notes'] = '구현 노트';

$GLOBALS["lang"]['Import'] = '제품정보';

$GLOBALS["lang"]['Import Example Data'] = '가져 오기 예 Data';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'CSV를 사용하여 여러 {collection} 가져 오기.';

$GLOBALS["lang"]['improvement_opportunities'] = '개선 기회';

$GLOBALS["lang"]['Improvement Opportunities'] = '개선 기회';

$GLOBALS["lang"]['Improves business continuity and resilience'] = '비즈니스 연속성 및 탄력 향상';

$GLOBALS["lang"]['In'] = '내 계정';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = '두 번째 탭 또는 창에서 OKTA 콘솔로 이동하고 클릭 <i>App 통합 만들기</i>·';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = '두 번째 탭 또는 창 로그인에';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = '내 개인적인 의견에서, 당신의 네트워크에 각 단 하나 품목을 찾아내고 감사하는 제일 방법은 그 subnet에 제한되는 각 subnet를 위한씨 디스커버리입니다 (신뢰를 사용하는). Seed Discoveries는 스위치, 라우터 및 컴퓨터 MAC 주소 테이블을 사용하여 단일 장치를 놓치지 않습니다. 네트워크에 연결되고 TCP/IP를 사용하는 경우, Switch/router/computer는 TCP/IP가 어떻게 작동하는지 알고 있어야 합니다. 사용자 정의 TCP 및 / 또는 UDP 포트와 결합하면 장치 유형도 결정할 수 있어야 합니다. 그러나 그것은 단지 내 개인적인 선호';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Open-AudIT에 대한 주문은 항목에 사용자 권한을 적용 할 수 있습니다, 우리는 사용자를 위임 <code>WHERE @filter</code>· 이 형식을 사용하지 않는 경우, queryCreateForm은 경고를 던집니다. 관리자 역할 만 사용자가이 속성을 부족한 쿼리를 만들 수 있으며, 구성 항목 후에만 <i>고급_queries</i> 지원하다';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Google지도를 활성화하려면 Google API Key가이 링크를 따르고 로그인해야합니다. Google 계정,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Azure Rest API를 사용하려면 인증에 사용되는 Azure Active Directory 응용 프로그램을 만들 필요가 있습니다.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = '이 기능을 사용하려면 구성에서 활성화해야합니다 - 클릭';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(comma seperated) 목록에서';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = '자주 묻는 질문 <code>in</code> · <code>notin</code>, 당신은 둥근 부류에 있는 가치를 둘러싸고 comma를 사용하여 분리되어야 합니다 (구부, comma, 그 후에 공간 아닙니다).<br/><br/>이러한 연산자를 사용하면 매우 포괄적으로 필터링 할 수 있습니다.<br/><br/>여러 열에 데이터 및 필터를 추가할 때, 그 열은 사용 <strong>이름 *</strong>· 필터를 사용할 수 없습니다. <strong>이름 *</strong> 상태. 결론으로 <code>notin</code>, 당신은 대부분의 검색 작업을 얻을 수 있어야한다. 그리고 실제로 지원되지 않고 복잡한 선택이 필요한 사람들을 위해, 당신은 항상 실제 쿼리를 작성할 수 있습니다.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'BIGTEXT MySQL 필드 내부의 여러 필드 (보통 JSON 형식)을 저장하는 경우 (예 : 자격. credentials - credentials 테이블에 있는 credentials 란, 당신은 체재를 사용해야 합니다';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = '명령 프롬프트 쉘에서 다운로드 디렉토리로 이동 (likely <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = '관련 기사';

$GLOBALS["lang"]['Incomplete'] = '불완전한';

$GLOBALS["lang"]['Index'] = '주요사업';

$GLOBALS["lang"]['India'] = '주요 특징';

$GLOBALS["lang"]['Indonesia'] = '한국어';

$GLOBALS["lang"]['Indonesian'] = '담당자: Ms.';

$GLOBALS["lang"]['Info'] = '- 한국어';

$GLOBALS["lang"]['Information only.'] = '정보 만.';

$GLOBALS["lang"]['Informational'] = '- 연혁';

$GLOBALS["lang"]['initial_size'] = '초기 크기';

$GLOBALS["lang"]['Initial Size'] = '초기 크기';

$GLOBALS["lang"]['Initial login credentials are'] = '초기 로그인 자격은';

$GLOBALS["lang"]['Initiation'] = '연구분야';

$GLOBALS["lang"]['inode'] = '로그인';

$GLOBALS["lang"]['Inode'] = '로그인';

$GLOBALS["lang"]['Input'] = '이름 *';

$GLOBALS["lang"]['Input Type'] = '입력 유형';

$GLOBALS["lang"]['inputs'] = '제품정보';

$GLOBALS["lang"]['Inputs'] = '제품정보';

$GLOBALS["lang"]['Insane'] = '담당자: Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = '새로운 {collection} 항목 삽입.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = '예제 데이터를 삽입하고 Open-AudIT가 당신에게 말할 수있는 모든 것을 발견하십시오.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = '내 계정 관련 상품 이름 *';

$GLOBALS["lang"]['install'] = '설치하기';

$GLOBALS["lang"]['Install'] = '설치하기';

$GLOBALS["lang"]['install_date'] = '설치 날짜';

$GLOBALS["lang"]['Install Date'] = '설치 날짜';

$GLOBALS["lang"]['install_directory'] = '연락처';

$GLOBALS["lang"]['Install Directory'] = '연락처';

$GLOBALS["lang"]['Install OpenScap if required'] = '필요한 경우 OpenScap 설치';

$GLOBALS["lang"]['install_source'] = '설치 소스';

$GLOBALS["lang"]['Install Source'] = '설치 소스';

$GLOBALS["lang"]['Install Support'] = '설치 지원';

$GLOBALS["lang"]['installed_by'] = '설치';

$GLOBALS["lang"]['Installed By'] = '설치';

$GLOBALS["lang"]['installed_on'] = '설치하기';

$GLOBALS["lang"]['Installed On'] = '설치하기';

$GLOBALS["lang"]['Installing'] = '설치하기';

$GLOBALS["lang"]['Installing on Linux'] = 'Linux 설치';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOS에 설치';

$GLOBALS["lang"]['Installing on Windows'] = 'Windows에서 설치';

$GLOBALS["lang"]['instance'] = '이름 *';

$GLOBALS["lang"]['Instance'] = '이름 *';

$GLOBALS["lang"]['instance_ident'] = 'Instance 식별';

$GLOBALS["lang"]['Instance Ident'] = 'Instance 식별';

$GLOBALS["lang"]['instance_options'] = 'Instance 옵션';

$GLOBALS["lang"]['Instance Options'] = 'Instance 옵션';

$GLOBALS["lang"]['instance_provider'] = 'Instance 공급자';

$GLOBALS["lang"]['Instance Provider'] = 'Instance 공급자';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance 예약 이름 *';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance 예약 이름 *';

$GLOBALS["lang"]['instance_state'] = 'Instance 국가';

$GLOBALS["lang"]['Instance State'] = 'Instance 국가';

$GLOBALS["lang"]['instance_tags'] = 'Instance 태그';

$GLOBALS["lang"]['Instance Tags'] = 'Instance 태그';

$GLOBALS["lang"]['instance_type'] = 'Instance 유형';

$GLOBALS["lang"]['Instance Type'] = 'Instance 유형';

$GLOBALS["lang"]['Integer'] = '팟캐스트';

$GLOBALS["lang"]['Integration'] = '통합';

$GLOBALS["lang"]['integrations'] = '통합';

$GLOBALS["lang"]['Integrations'] = '통합';

$GLOBALS["lang"]['integrations_id'] = '통합 ID';

$GLOBALS["lang"]['Integrations ID'] = '통합 ID';

$GLOBALS["lang"]['integrations_log'] = '통합 로그';

$GLOBALS["lang"]['Integrations Log'] = '통합 로그';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = '통합은 원하는대로 계획될 수 있습니다. 이것은 사용자에게 왼쪽입니다.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = '통합은 Discoveries, Queries, etc.에 의하여 예정될 수 있습니다.';

$GLOBALS["lang"]['Interactive Dashboards'] = '상호 작용하는 대시보드';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = '대화형 대시보드는 네트워크 인벤토리의 상태에 즉시 가시성을 제공하므로 IT 팀이 새로 발견된 기기와 특정 기기 행동을 눈에 파악할 수 있습니다.';

$GLOBALS["lang"]['interface'] = '제품 설명';

$GLOBALS["lang"]['Interface'] = '제품 설명';

$GLOBALS["lang"]['interface_id'] = '인터페이스 ID';

$GLOBALS["lang"]['Interface ID'] = '인터페이스 ID';

$GLOBALS["lang"]['interface_type'] = '공용영역 유형';

$GLOBALS["lang"]['Interface Type'] = '공용영역 유형';

$GLOBALS["lang"]['Internal'] = '내 계정';

$GLOBALS["lang"]['Internal Audit'] = '내부 감사';

$GLOBALS["lang"]['Internal Audit & Review'] = '내부 감사 및 검토';

$GLOBALS["lang"]['Internal Field Name'] = '내부 필드 이름';

$GLOBALS["lang"]['Internal ID'] = '내부 ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = '이 사용자를 위한 유효한 접근 토큰의 내부 JSON 배열.';

$GLOBALS["lang"]['Introduction'] = '제품정보';

$GLOBALS["lang"]['invoice'] = '회사 소개';

$GLOBALS["lang"]['Invoice'] = '회사 소개';

$GLOBALS["lang"]['invoice_id'] = '청구서 ID';

$GLOBALS["lang"]['Invoice ID'] = '청구서 ID';

$GLOBALS["lang"]['invoice_item'] = '청구서 항목';

$GLOBALS["lang"]['Invoice Item'] = '청구서 항목';

$GLOBALS["lang"]['ios_version'] = 'Ios 버전';

$GLOBALS["lang"]['Ios Version'] = 'Ios 버전';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip 주소 외부 A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip 주소 외부 A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip 주소 외부 B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip 주소 외부 B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip 주소 내부 A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip 주소 내부 A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip 주소 내부 B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip 주소 내부 B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip 모든 조사';

$GLOBALS["lang"]['Ip All Count'] = 'Ip 모든 조사';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip 감사 조사';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip 감사 조사';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip 발견된 조사';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip 발견된 조사';

$GLOBALS["lang"]['ip_enabled'] = 'Ip 지원';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip 지원';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip 응답 조사';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip 응답 조사';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip 스캔된 조사';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip 스캔된 조사';

$GLOBALS["lang"]['Iran'] = '이란';

$GLOBALS["lang"]['Iraq'] = '이라크';

$GLOBALS["lang"]['Ireland'] = '한국어';

$GLOBALS["lang"]['Irish'] = '이름 *';

$GLOBALS["lang"]['Is FRU'] = 'FRU는';

$GLOBALS["lang"]['is_fru'] = '이름 *';

$GLOBALS["lang"]['Is Fru'] = '이름 *';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'NMIS 서버 로컬(Open-AudIT 서버에서) 또는 리모트는?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '이 계정 활성화? 설정하기 <code>n</code>, 사용자는 로고가 할 수 없습니다.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = '이 질문은 자격이 된 고객에게 제한됩니다.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = '이 작업을 활성화 (y/n).';

$GLOBALS["lang"]['Isle of Man'] = '맨 섬';

$GLOBALS["lang"]['Israel'] = '한국어';

$GLOBALS["lang"]['Issue'] = '이름 *';

$GLOBALS["lang"]['issuer'] = '계정 관리';

$GLOBALS["lang"]['Issuer'] = '계정 관리';

$GLOBALS["lang"]['issuer_name'] = 'Issuer 이름';

$GLOBALS["lang"]['Issuer Name'] = 'Issuer 이름';

$GLOBALS["lang"]['Issues'] = '제품정보';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = '(주) <i>지원하다</i> NMIS로';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = '메뉴에서 사용할 수 있습니다 -> 도움말 ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Open-AudIT가 설정된 속성과 일치를 결정할 때 주의해야 합니다. <i>₢ 킹</i> Open-AudIT에 대한 주문에 정확히 일치해야합니다 (그리고 공백이 없습니다)는 발견 된 장치가 이미 데이터베이스에서 일치하도록 결정합니다. 표시된 속성의 아무도 <i>₢ 킹</i> 일치하면 새로운 장치 항목이 생성됩니다. 중복 장치 항목에서 결과 할 수 있습니다. 속성이 중복되는 경우, 예를 들어 dbus_id는 VM 클론에서 복사됩니다. 그 다음 기존 장치는 잘못된 장치에서 생성 된 새로운 항목이 아닌 overwritten/updated를 얻을 수 있습니다.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = '주어진 조직의 중복 주소 공간이 없습니다. 아니 이상, 하지만 uncommon.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = '그것은 두 번째 계층 마더 보드 제조 업체가이를 설정하지 않는 것이 매우 일반적입니다. <i>0 댓글</i>s 또는 모두 <i>₢ 킹</i>₢ 킹';

$GLOBALS["lang"]['Italian'] = '담당자: Mr. Li';

$GLOBALS["lang"]['Italy'] = '담당자: Mr. Li';

$GLOBALS["lang"]['Items not in Baseline'] = 'Baseline의 항목';

$GLOBALS["lang"]['JSON'] = '구글 맵';

$GLOBALS["lang"]['JSON to Import'] = 'JSON 가져오기';

$GLOBALS["lang"]['Jamaica'] = '자메이카';

$GLOBALS["lang"]['January'] = '1월 1일';

$GLOBALS["lang"]['Japan'] = '일본국';

$GLOBALS["lang"]['Japanese'] = '한국어';

$GLOBALS["lang"]['Jersey'] = '한국어';

$GLOBALS["lang"]['Jordan'] = '한국어';

$GLOBALS["lang"]['July'] = '7 월';

$GLOBALS["lang"]['June'] = '6 월';

$GLOBALS["lang"]['Kazakhstan'] = '주요 특징';

$GLOBALS["lang"]['Kenya'] = '담당자: Ms.';

$GLOBALS["lang"]['kernel_version'] = 'Kernel 버전';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel 버전';

$GLOBALS["lang"]['Key'] = '이름 *';

$GLOBALS["lang"]['Key Components'] = '핵심 부품';

$GLOBALS["lang"]['Key Password (optional)'] = '(선택) 중요한 암호';

$GLOBALS["lang"]['keys'] = '주요 특징';

$GLOBALS["lang"]['Keys'] = '주요 특징';

$GLOBALS["lang"]['Kiribati'] = '키리바시';

$GLOBALS["lang"]['Korea'] = '한국어';

$GLOBALS["lang"]['Korean'] = '한국어';

$GLOBALS["lang"]['Kuwait'] = '쿠웨이트';

$GLOBALS["lang"]['Kyrgyz'] = '키르기스';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyz 공화국';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP 그룹';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP는 이 사용자를 검색하고 계정이 발견되었습니다.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP는 이 사용자를 검색하고 계정이 발견되지 않았습니다. LDAP 서버 로그를 확인합니다. 사용자 자격은 일했지만 사용자는 찾을 수 없습니다. Open-AudIT에서 LDAP Server를 만들 때 올바른 Base DN 속성을 지정해야 합니다.';

$GLOBALS["lang"]['lang'] = '한국어';

$GLOBALS["lang"]['Lang'] = '한국어';

$GLOBALS["lang"]['language'] = '한국어';

$GLOBALS["lang"]['Language'] = '한국어';

$GLOBALS["lang"]['Lao'] = '라오';

$GLOBALS["lang"]['last_changed'] = '최근 변경';

$GLOBALS["lang"]['Last Changed'] = '최근 변경';

$GLOBALS["lang"]['last_finished'] = '끝마친';

$GLOBALS["lang"]['Last Finished'] = '끝마친';

$GLOBALS["lang"]['last_logon'] = '마지막 Logon';

$GLOBALS["lang"]['Last Logon'] = '마지막 Logon';

$GLOBALS["lang"]['Last Name'] = '이름 *';

$GLOBALS["lang"]['last_os_update'] = '마지막 Os 업데이트';

$GLOBALS["lang"]['Last Os Update'] = '마지막 Os 업데이트';

$GLOBALS["lang"]['last_result'] = '마지막 결과';

$GLOBALS["lang"]['Last Result'] = '마지막 결과';

$GLOBALS["lang"]['last_run'] = '마지막 실행';

$GLOBALS["lang"]['Last Run'] = '마지막 실행';

$GLOBALS["lang"]['last_seen'] = '이름 *';

$GLOBALS["lang"]['Last Seen'] = '이름 *';

$GLOBALS["lang"]['last_seen_by'] = '이름 * 이름 *';

$GLOBALS["lang"]['Last Seen By'] = '이름 * 이름 *';

$GLOBALS["lang"]['last_user'] = '최종 사용자';

$GLOBALS["lang"]['Last User'] = '최종 사용자';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = '마지막은 WMI입니다. Windows를 Linux에서 사용하려면 Administrator 레벨 액세스가 선호됩니다 (wiki에서 Target Client Configuration 참조).';

$GLOBALS["lang"]['lastModified'] = '최근Modified';

$GLOBALS["lang"]['LastModified'] = '최근Modified';

$GLOBALS["lang"]['latitude'] = '이름 *';

$GLOBALS["lang"]['Latitude'] = '이름 *';

$GLOBALS["lang"]['Latvia'] = '라트비아';

$GLOBALS["lang"]['Latvian'] = '라트비아';

$GLOBALS["lang"]['Layout'] = '제품정보';

$GLOBALS["lang"]['ldap'] = '사이트맵';

$GLOBALS["lang"]['Ldap'] = '사이트맵';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap 기초 Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap 기초 Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn 계정';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn 계정';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn 암호';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn 암호';

$GLOBALS["lang"]['Learn About'] = '자세히 알아보기';

$GLOBALS["lang"]['Learn More'] = '더 알아보기';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease 만기일';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease 만기일';

$GLOBALS["lang"]['Lebanon'] = '한국어';

$GLOBALS["lang"]['legal_requirements'] = '법적 요구 사항';

$GLOBALS["lang"]['Legal Requirements'] = '법적 요구 사항';

$GLOBALS["lang"]['Lesotho'] = '레퍼런스';

$GLOBALS["lang"]['Less Than'] = '더 적은 보다는';

$GLOBALS["lang"]['Less Than or Equals'] = '또는 동등한 것 보다는 더 적은';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = '벌레에 로깅을 설정하자. 파일 복사 :';

$GLOBALS["lang"]['level'] = '기본 정보';

$GLOBALS["lang"]['Level'] = '기본 정보';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = '악용에 필요한 권한의 수준 (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = '리비아';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Libraries (즉, 다른 프로그램이 포함 될 수있는 코드). 이것은 일반적으로 Wordpress 확장, drupal 확장, node.js 라이브러리, Android / iPhone / Windows 라이브러리, python 라이브러리 등과 같은 항목입니다.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = '리비아 아랍 Jamahiriya';

$GLOBALS["lang"]['License'] = '이름 *';

$GLOBALS["lang"]['License Key'] = '라이센스 키';

$GLOBALS["lang"]['License Required'] = '법적 고지';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = '라이센스된 사용자는 무료로 추가하거나 수정할 수 있습니다. SNMP OID를 가진 장치가 이미 파일에서 모델과 일치하지 않는 경우 - 이제 쉽게 추가 할 수 있습니다. 헝겊 조각을 제공하고 당신을 위한 부호 기초에 추가하는 저희를 기다리지 마십시오.<br/><br/>규칙 항목을 만들 때 입력 및 출력의 이름과 목록을 제공해야합니다. 입력 및 출력은 데이터베이스 내에서 JSON 배열으로 저장됩니다.<br/><br/>입력에는 테이블과 속성, 연산자 및 값이 있습니다. 상태를 실행할 때, 이렇게 작동한다: $table . $attribute $operator $value를 사용하면 출력을 적용합니다.<br/><br/>SNMP OID와 모델을 설정하는 예 규칙은 아래와 같습니다.<br/>';

$GLOBALS["lang"]['Licenses'] = '이름 *';

$GLOBALS["lang"]['Liechtenstein'] = '리히텐슈타인';

$GLOBALS["lang"]['Like'] = '이름 *';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = '다른 속성처럼, 추가 필드는 대량 편집 될 수 있습니다. 일반적으로 대량 편집 기능을 사용하면 추가 필드를 입력 할 수 있습니다.';

$GLOBALS["lang"]['Like versus Equals'] = 'versus Equals 처럼';

$GLOBALS["lang"]['limit'] = '지원하다';

$GLOBALS["lang"]['Limit'] = '지원하다';

$GLOBALS["lang"]['Limit the query to the first X items.'] = '첫번째 X 품목에 조회를 제한하십시오.';

$GLOBALS["lang"]['Limited to 100 rows.'] = '100개의 줄에 한정하십시오.';

$GLOBALS["lang"]['line_amount'] = '라인 금액';

$GLOBALS["lang"]['Line Amount'] = '라인 금액';

$GLOBALS["lang"]['Line Graph'] = '라인 그래프';

$GLOBALS["lang"]['line_number_a'] = '라인 번호 A';

$GLOBALS["lang"]['Line Number A'] = '라인 번호 A';

$GLOBALS["lang"]['line_number_b'] = '라인 번호 B';

$GLOBALS["lang"]['Line Number B'] = '라인 번호 B';

$GLOBALS["lang"]['line_text'] = '라인 텍스트';

$GLOBALS["lang"]['Line Text'] = '라인 텍스트';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = '라인 차트는 날짜 또는 my_date, 설명 또는 my_description 및 카운트를 반환해야합니다.';

$GLOBALS["lang"]['link'] = '링크 메뉴';

$GLOBALS["lang"]['Link'] = '링크 메뉴';

$GLOBALS["lang"]['Link (Advanced)'] = '링크 (고급)';

$GLOBALS["lang"]['Linked Files'] = '링크 된 파일';

$GLOBALS["lang"]['links'] = '관련 기사';

$GLOBALS["lang"]['Links'] = '관련 기사';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = '관련 클라우드에 대한이 발견 링크 (필수). 관련 기사 <code>clouds.id</code>·';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = '관련 기사 <code>discovery_scan_options.id</code>·';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = '관련 기사 <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = '관련 기사 <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = '리눅스';

$GLOBALS["lang"]['Linux Packages'] = 'Linux 패키지';

$GLOBALS["lang"]['List'] = '이름 *';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = '모든 NMAP 포트, 프로토콜 및 각 장치에 대한 프로그램 목록';

$GLOBALS["lang"]['List Devices'] = '공지사항';

$GLOBALS["lang"]['List Discoveries'] = '회사 소개';

$GLOBALS["lang"]['list_table_format'] = '테이블 형식';

$GLOBALS["lang"]['List Table Format'] = '테이블 형식';

$GLOBALS["lang"]['List Tables'] = '테이블 일람';

$GLOBALS["lang"]['Lithuania'] = '한국어';

$GLOBALS["lang"]['Lithuanian'] = '한국어';

$GLOBALS["lang"]['Load Balancing'] = '부하 Balancing';

$GLOBALS["lang"]['Local'] = '한국어';

$GLOBALS["lang"]['Local Area Network'] = '지역 네트워크';

$GLOBALS["lang"]['local_port'] = '지역 항구';

$GLOBALS["lang"]['Local Port'] = '지역 항구';

$GLOBALS["lang"]['Local area network'] = '지역 네트워크';

$GLOBALS["lang"]['Localhost'] = '지역호스트';

$GLOBALS["lang"]['Localisation'] = '지역화';

$GLOBALS["lang"]['Location'] = '제품정보';

$GLOBALS["lang"]['Location A'] = '위치 A';

$GLOBALS["lang"]['Location B'] = '위치 B';

$GLOBALS["lang"]['location_id'] = '위치 ID';

$GLOBALS["lang"]['Location ID'] = '위치 ID';

$GLOBALS["lang"]['location_id_a'] = '위치 ID A';

$GLOBALS["lang"]['Location ID A'] = '위치 ID A';

$GLOBALS["lang"]['location_id_b'] = '위치 ID B';

$GLOBALS["lang"]['Location ID B'] = '위치 ID B';

$GLOBALS["lang"]['location_latitude'] = '위치 위도';

$GLOBALS["lang"]['Location Latitude'] = '위치 위도';

$GLOBALS["lang"]['location_level'] = '위치 수준';

$GLOBALS["lang"]['Location Level'] = '위치 수준';

$GLOBALS["lang"]['location_longitude'] = '위치 경도';

$GLOBALS["lang"]['Location Longitude'] = '위치 경도';

$GLOBALS["lang"]['Location Name'] = '위치 이름';

$GLOBALS["lang"]['location_rack'] = '위치 선반';

$GLOBALS["lang"]['Location Rack'] = '위치 선반';

$GLOBALS["lang"]['location_rack_position'] = '위치 선반 위치';

$GLOBALS["lang"]['Location Rack Position'] = '위치 선반 위치';

$GLOBALS["lang"]['location_rack_size'] = '위치 선반 크기';

$GLOBALS["lang"]['Location Rack Size'] = '위치 선반 크기';

$GLOBALS["lang"]['location_room'] = '오시는 길';

$GLOBALS["lang"]['Location Room'] = '오시는 길';

$GLOBALS["lang"]['location_suite'] = '위치 Suite';

$GLOBALS["lang"]['Location Suite'] = '위치 Suite';

$GLOBALS["lang"]['Locations'] = '회사연혁';

$GLOBALS["lang"]['Locations in this'] = '현재 위치';

$GLOBALS["lang"]['log'] = '로그인';

$GLOBALS["lang"]['Log'] = '로그인';

$GLOBALS["lang"]['log_format'] = '로그 형식';

$GLOBALS["lang"]['Log Format'] = '로그 형식';

$GLOBALS["lang"]['Log Line'] = '공지사항';

$GLOBALS["lang"]['log_path'] = '로그 경로';

$GLOBALS["lang"]['Log Path'] = '로그 경로';

$GLOBALS["lang"]['log_rotation'] = '로그 회전';

$GLOBALS["lang"]['Log Rotation'] = '로그 회전';

$GLOBALS["lang"]['log_status'] = '로그인 상태';

$GLOBALS["lang"]['Log Status'] = '로그인 상태';

$GLOBALS["lang"]['Logging in'] = '인기있는';

$GLOBALS["lang"]['Logical Cores '] = 'Logical 핵심 ';

$GLOBALS["lang"]['logical_count'] = '비밀번호';

$GLOBALS["lang"]['Logical Count'] = '비밀번호';

$GLOBALS["lang"]['Logout'] = '로그아웃';

$GLOBALS["lang"]['Logs'] = '로그인';

$GLOBALS["lang"]['longitude'] = '경도';

$GLOBALS["lang"]['Longitude'] = '경도';

$GLOBALS["lang"]['low'] = '이름 *';

$GLOBALS["lang"]['Low'] = '이름 *';

$GLOBALS["lang"]['Lower Case'] = '낮은 케이스';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase 호스트 이름';

$GLOBALS["lang"]['Luxembourg'] = '룩셈부르크';

$GLOBALS["lang"]['MAC Address'] = 'MAC 주소';

$GLOBALS["lang"]['MAC Manufacturer'] = '주요 특징 주요 특징';

$GLOBALS["lang"]['mac'] = '한국어';

$GLOBALS["lang"]['Mac'] = '한국어';

$GLOBALS["lang"]['Mac Address'] = 'Mac 주소';

$GLOBALS["lang"]['MacOS'] = '맥 OS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS 패키지';

$GLOBALS["lang"]['Macao'] = '마카오';

$GLOBALS["lang"]['Macedonia'] = '맥도니아';

$GLOBALS["lang"]['Madagascar'] = '스낵 바';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = '위험 평가 및 치료의 기록 유지';

$GLOBALS["lang"]['maintenance_expires'] = '유지 보수 Expires';

$GLOBALS["lang"]['Maintenance Expires'] = '유지 보수 Expires';

$GLOBALS["lang"]['Make My Default Dashboard'] = '내 기본 대시보드 만들기';

$GLOBALS["lang"]['Make this install a Collector'] = '수집방법';

$GLOBALS["lang"]['Malawi'] = '스낵 바';

$GLOBALS["lang"]['Malay'] = '—— 크리스';

$GLOBALS["lang"]['Malaysia'] = '주요 특징';

$GLOBALS["lang"]['Maldives'] = '주 메뉴';

$GLOBALS["lang"]['Mali'] = '담당자: Mali';

$GLOBALS["lang"]['Malta'] = '담당자: James';

$GLOBALS["lang"]['Manage'] = '계정 관리';

$GLOBALS["lang"]['Manage Licenses'] = '라이센스 관리';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMIS 관리';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = '사건 및 비공식 관리';

$GLOBALS["lang"]['Managed'] = '지원하다';

$GLOBALS["lang"]['managed_by'] = '에 의해 관리';

$GLOBALS["lang"]['Managed By'] = '에 의해 관리';

$GLOBALS["lang"]['Manual Input'] = '수동 입력';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = '사용자에 의해 수동으로 설정, 기본적으로 생산.';

$GLOBALS["lang"]['Manually set by user.'] = '사용자에 의해 수동으로 설정.';

$GLOBALS["lang"]['manufacture_date'] = '제조 날짜';

$GLOBALS["lang"]['Manufacture Date'] = '제조 날짜';

$GLOBALS["lang"]['manufacturer'] = '주요 특징';

$GLOBALS["lang"]['Manufacturer'] = '주요 특징';

$GLOBALS["lang"]['manufacturer_code'] = '제조업체 코드';

$GLOBALS["lang"]['Manufacturer Code'] = '제조업체 코드';

$GLOBALS["lang"]['Map'] = '지도보기';

$GLOBALS["lang"]['maps'] = '지도보기';

$GLOBALS["lang"]['Maps'] = '지도보기';

$GLOBALS["lang"]['March'] = '3 월';

$GLOBALS["lang"]['Marshall Islands'] = '마린 제도';

$GLOBALS["lang"]['Martinique'] = '프로모션';

$GLOBALS["lang"]['mask'] = '제품정보';

$GLOBALS["lang"]['Mask'] = '제품정보';

$GLOBALS["lang"]['Match'] = '이름 *';

$GLOBALS["lang"]['match_options'] = '매치 옵션';

$GLOBALS["lang"]['Match Options'] = '매치 옵션';

$GLOBALS["lang"]['Match Order'] = '연락처';

$GLOBALS["lang"]['Match Process'] = '연락처';

$GLOBALS["lang"]['match_string'] = '일치 문자열';

$GLOBALS["lang"]['Match String'] = '일치 문자열';

$GLOBALS["lang"]['Matching Attribute'] = '매칭 Attribute';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = '일치 장치 - OrgID 포함';

$GLOBALS["lang"]['Matching Linux Devices'] = '일치 Linux 장치';

$GLOBALS["lang"]['Matching is conducted in the following order'] = '일치는 뒤에 오는 순서에서 실시됩니다';

$GLOBALS["lang"]['maturity_level'] = '성숙도 수준';

$GLOBALS["lang"]['Maturity Level'] = '성숙도 수준';

$GLOBALS["lang"]['maturity_score'] = 'Maturity 점수';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity 점수';

$GLOBALS["lang"]['Mauritania'] = '모리타니';

$GLOBALS["lang"]['Mauritius'] = '주 메뉴';

$GLOBALS["lang"]['max_file_size'] = '최대 파일 크기';

$GLOBALS["lang"]['Max File Size'] = '최대 파일 크기';

$GLOBALS["lang"]['Max Length'] = '최대 길이';

$GLOBALS["lang"]['max_size'] = '최대 크기';

$GLOBALS["lang"]['Max Size'] = '최대 크기';

$GLOBALS["lang"]['May'] = '5 월';

$GLOBALS["lang"]['Mayotte'] = '인기 카테고리';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = '공격되는 취약점의 likelihood를 측정하고, 악용 기술, 악용 코드 가용성, 또는 활성, "in-the-wild" 악용을 기반으로합니다.';

$GLOBALS["lang"]['medium'] = '한국어';

$GLOBALS["lang"]['Medium'] = '한국어';

$GLOBALS["lang"]['members'] = '이름 *';

$GLOBALS["lang"]['Members'] = '이름 *';

$GLOBALS["lang"]['memory'] = '기억하기';

$GLOBALS["lang"]['Memory'] = '기억하기';

$GLOBALS["lang"]['memory_count'] = '메모리 카운트';

$GLOBALS["lang"]['Memory Count'] = '메모리 카운트';

$GLOBALS["lang"]['memory_slot_count'] = '기억 구멍 조사';

$GLOBALS["lang"]['Memory Slot Count'] = '기억 구멍 조사';

$GLOBALS["lang"]['menu_category'] = '메뉴 범주';

$GLOBALS["lang"]['Menu Category'] = '메뉴 범주';

$GLOBALS["lang"]['menu_display'] = '메뉴 표시';

$GLOBALS["lang"]['Menu Display'] = '메뉴 표시';

$GLOBALS["lang"]['message'] = '이름 *';

$GLOBALS["lang"]['Message'] = '이름 *';

$GLOBALS["lang"]['meta_last_changed'] = '최근 수정';

$GLOBALS["lang"]['Meta Last Changed'] = '최근 수정';

$GLOBALS["lang"]['metric'] = '제품정보';

$GLOBALS["lang"]['Metric'] = '제품정보';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area 네트워크';

$GLOBALS["lang"]['Metropolitan area network'] = 'Metropolitan 영역 네트워크';

$GLOBALS["lang"]['Mexico'] = '주요 시장';

$GLOBALS["lang"]['Micronesia'] = '마이크로네시아';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure 필드';

$GLOBALS["lang"]['microtime'] = '마이크로타임';

$GLOBALS["lang"]['Microtime'] = '마이크로타임';

$GLOBALS["lang"]['minute'] = '이름 *';

$GLOBALS["lang"]['Minute'] = '이름 *';

$GLOBALS["lang"]['Minutes'] = '기타';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '마지막 감사 이후 분은 그 이상입니다.';

$GLOBALS["lang"]['model'] = '모델 번호:';

$GLOBALS["lang"]['Model'] = '모델 번호:';

$GLOBALS["lang"]['model_family'] = '모델 가족';

$GLOBALS["lang"]['Model Family'] = '모델 가족';

$GLOBALS["lang"]['Modified'] = '수정하기';

$GLOBALS["lang"]['Modifying an Existing Script'] = '기존 스크립트를 수정';

$GLOBALS["lang"]['module'] = '모듈';

$GLOBALS["lang"]['Module'] = '모듈';

$GLOBALS["lang"]['module_index'] = '모듈 인덱스';

$GLOBALS["lang"]['Module Index'] = '모듈 인덱스';

$GLOBALS["lang"]['Modules'] = '모듈';

$GLOBALS["lang"]['Moldova'] = '몰도바';

$GLOBALS["lang"]['Monaco'] = '한국어';

$GLOBALS["lang"]['Monday'] = '월요일, 월요일';

$GLOBALS["lang"]['Mongolia'] = '아프리카';

$GLOBALS["lang"]['monitor'] = '관련 상품';

$GLOBALS["lang"]['Monitor'] = '관련 상품';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = '모니터 및 측정 ISMS 성능';

$GLOBALS["lang"]['Montenegro'] = '인기 카테고리';

$GLOBALS["lang"]['month'] = '월 ~ 월';

$GLOBALS["lang"]['Month'] = '월 ~ 월';

$GLOBALS["lang"]['Montserrat'] = '스낵 바';

$GLOBALS["lang"]['More Information'] = '더 많은 정보';

$GLOBALS["lang"]['More Secure'] = '더 안전한';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = '더 정교한 SQL은 범위 내에서 그룹 속성에 사용할 수 있습니다. 아래는 마지막 본 날짜 범위에 의해 그룹된 파이 차트에서 볼 수없는 장치에 대한 SQL을 보여줍니다.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = '이 디버깅에 대한 더 많은 정보는 도움이되는 Stack Overflow Thread에서 찾을 수 있습니다.';

$GLOBALS["lang"]['Morocco'] = '한국어';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = '대부분의 경우 Windows 방화벽 (또는 타사 방화벽)은 연결 시도를 거부합니다.<br/><br/>대상 Windows 기계에 로그인하고 방화벽 설정을 확인하십시오.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Open-AudIT의 대부분은 GNU AGPL과 함께 라이센스됩니다.';

$GLOBALS["lang"]['motherboard'] = '메인메뉴';

$GLOBALS["lang"]['Motherboard'] = '메인메뉴';

$GLOBALS["lang"]['mount_point'] = '산 점';

$GLOBALS["lang"]['Mount Point'] = '산 점';

$GLOBALS["lang"]['mount_type'] = '산 유형';

$GLOBALS["lang"]['Mount Type'] = '산 유형';

$GLOBALS["lang"]['Mozambique'] = '모잠비크';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Ping에 응답해야 합니다. 설정하면 Nmap은 ICMP 응답을 보내고 듣게됩니다. 장치가 응답하지 않는 경우, 더 이상 스캔이 발생하지 않습니다.<br/>Previously 장치는 계속 스캔을 위해 Open-AudIT에 대한 핑에 응답하지 않았다.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Ping에 대응';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = '내 AntiVirus는 나에게 deny/allow 것들을 초래합니다.';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = '나의 시간은 Open-AudIT에서 떨어져 있습니다';

$GLOBALS["lang"]['Myanmar'] = '대한민국';

$GLOBALS["lang"]['N+1'] = '사이트맵';

$GLOBALS["lang"]['N+M'] = '사이트맵';

$GLOBALS["lang"]['N-to-1'] = 'N-에-1';

$GLOBALS["lang"]['N-to-N'] = '사이트맵';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS 비즈니스 서비스';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS 고객';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS 장치 옵션';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS 장치 선택';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS 필드 이름';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS 필드 유형';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS 그룹';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS 투표';

$GLOBALS["lang"]['NMIS Role'] = '사이트맵 사이트맵';

$GLOBALS["lang"]['NOTE'] = '이름 *';

$GLOBALS["lang"]['NOTE #2'] = '참고 #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTE - DateTime 형식에 대한 더 많은 정보를 원하시면, 참조';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NoteE - 다운로드된 CSV, XML 또는 JSON 형식을 요청하는 경우 (단 하나의 자격 증명, 또는 전체 컬렉션) 실제 자격 증명 세부 정보가 전송됩니다. 암호화 문자열, 실제 사용자 이름, 암호, 커뮤니티 문자열 등 어떤 민감한 정보는 웹 GUI에 표시되지 않지만 다른 형식을 통해 사용할 수 있습니다. 이 수출을 방지하기 위해 구성 항목은 decrypt_credentials로 호출됩니다.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOTE - 데이터 파일에 있는 곱슬 브래킷은 (위의 다른 예에 의하여 대체되지 않기 위하여) 것과 같이 사용되어야 합니다.';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTE - 구성 아이템을 설정하여 아래의 일반 텍스트 식별을 방지할 수 있습니다. <code>decrypt_credentials</code> 으로 <code>n</code>·';

$GLOBALS["lang"]['name'] = '이름 *';

$GLOBALS["lang"]['Name'] = '이름 *';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = '이름: 이 필드에 주는 이름. 이상적으로 그것은 독특합니다.';

$GLOBALS["lang"]['Namibia'] = '언어: 영어';

$GLOBALS["lang"]['Nauru'] = '나루';

$GLOBALS["lang"]['Nepal'] = '한국어';

$GLOBALS["lang"]['net_index'] = 'Net 인덱스';

$GLOBALS["lang"]['Net Index'] = 'Net 인덱스';

$GLOBALS["lang"]['Netherlands Antilles'] = '네덜란드 Antilles';

$GLOBALS["lang"]['Netherlands the'] = '네덜란드';

$GLOBALS["lang"]['netmask'] = '네트워크';

$GLOBALS["lang"]['Netmask'] = '네트워크';

$GLOBALS["lang"]['netstat'] = 'Netstat 정보';

$GLOBALS["lang"]['Netstat'] = 'Netstat 정보';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat 정책';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat 포트';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat 포트는 포트 번호, 프로토콜 및 프로그램의 조합을 사용합니다. 모든 것이 정책 패스입니다.';

$GLOBALS["lang"]['Network'] = '회사연혁';

$GLOBALS["lang"]['network_address'] = '네트워크 주소';

$GLOBALS["lang"]['Network Address'] = '네트워크 주소';

$GLOBALS["lang"]['Network Discovery'] = '네트워크 디스커버리';

$GLOBALS["lang"]['network_domain'] = '네트워크 도메인';

$GLOBALS["lang"]['Network Domain'] = '네트워크 도메인';

$GLOBALS["lang"]['Network Types'] = '네트워크 유형';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = '네트워크 유형은 기본적으로 Local Area Network로 설정되지만, 사용자가 맞는 것을 볼 수 있습니다. 지원되는 유형은 아래에 있습니다 (Wikipedia 덕분에).<br/><br/>네트워크는 물리적 용량 또는 조직적인 목적에 의해 특징으로 할 수 있습니다. 사용자 권한 및 액세스 권한을 포함하여 네트워크의 사용, 따라 다릅니다.';

$GLOBALS["lang"]['networks'] = '네트워크';

$GLOBALS["lang"]['Networks'] = '네트워크';

$GLOBALS["lang"]['Networks Generated By'] = 'Networks에 의해 생성';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = '네트워크는 모든 발견과 함께 업데이트됩니다. 사용 가능한 IP 및 IP와 같은 항목, 게이트웨이와 함께, DHCP 및 DNS 서버는 발견으로 추가됩니다.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = '네트워크는 구성하는 방법에 따라 다르게 응답합니다. 몇몇 대패 및/또는 방화벽은 반응할 수 있습니다 <i>회사 소개</i> Open-AudIT Server에 인터페이스의 다른 측면에 IP의. Nmap이 SNMP (UDP 포트 161)에 대한 조사를보고 공개적으로 대응하는 것은 매우 일반적입니다.|가용하고 존재하지 않는 장치에 대한 필터링. 이것은 그 IP에 장치가 없기 때문에 misleading이지만 데이터베이스에 장치 항목이 종료됩니다. 시간의 99.9%, 그것은 Open-AudIT, 심지어 Nmap, 하지만이 문제가 발생 네트워크. 이제 우리는 개방형을 치료하는 옵션이 있습니다|오픈 한 포트를 필터링하거나 닫아, 우리는이 혼란을 많이 제거 할 수 있습니다. Enterprise 사용자는 발견 기반에 이것을 변경할 수있는 옵션이 있습니다 (중간 (클래식) 아이템을 사용하여 더 많은).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDR 마스크를 사용하는 네트워크';

$GLOBALS["lang"]['New Building Name'] = '새로운 건물 이름';

$GLOBALS["lang"]['New Caledonia'] = '새로운 Caledonia';

$GLOBALS["lang"]['New Floor Name'] = '새 층 이름';

$GLOBALS["lang"]['New Room Name'] = '새 방 이름';

$GLOBALS["lang"]['New Row Name'] = '새로운 줄 이름';

$GLOBALS["lang"]['New Zealand'] = '뉴질랜드';

$GLOBALS["lang"]['News'] = '(주)';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = '뉴스는 업데이트 된 쿼리 및 패키지, 구성 추천, 릴리스 발표, 블로그 게시물 등을 위해 로그인 할 때마다 확인합니다.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = '뉴스는 최신 수정, 발표, 쿼리 업데이트, 소프트웨어 버전 등을 통해 최신 유지의 우리의 방법입니다.<br/><br/>당신은 위키의 상단에 유지하거나 새로운 릴리스에 대한 확인 필요가 없습니다, 우리는 당신에게 이것을 보낼 수 있습니다!';

$GLOBALS["lang"]['next_hop'] = '다음 홉';

$GLOBALS["lang"]['Next Hop'] = '다음 홉';

$GLOBALS["lang"]['next_run'] = '다음 실행';

$GLOBALS["lang"]['Next Run'] = '다음 실행';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = '다음 클릭 <i>자주 묻는 질문</i>·';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = '다음, 확인을 클릭 한 다음 Apache 2.4 서비스를 클릭하고 Restart를 클릭합니다. 이름 *';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = '다음, Apache2.4 서비스를 클릭하고 속성을 선택한 다음 탭에서 로그를 클릭합니다.';

$GLOBALS["lang"]['Nicaragua'] = '니카라과';

$GLOBALS["lang"]['Niger'] = '니제르';

$GLOBALS["lang"]['Nigeria'] = '한국어';

$GLOBALS["lang"]['Niue'] = '이름 *';

$GLOBALS["lang"]['nmap'] = '사이트맵';

$GLOBALS["lang"]['Nmap'] = '사이트맵';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap 포트 스캐닝 응답';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp 포트';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp 포트';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp 포트';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp 포트';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap은 패킷 필터링이 포트에 도달하여 프로브를 방지하기 때문에 포트가 열릴 수 없습니다. 필터링은 전용 방화벽 장치, 라우터 규칙 또는 호스트 기반 방화벽 소프트웨어에서 될 수 있습니다. 이 포트 frustrate attackers 때문에 그들은 너무 작은 정보를 제공. 때때로 그들은 유형 3 부호 13와 같은 ICMP 오류 메시지에 반응합니다 (불능한: 커뮤니케이션 관리하게 금지), 그러나 응답 없이 단순히 조사를 떨어지는 여과기는 것은 훨씬 더 일반적입니다. 이 힘 Nmap는 단지 조사가 필터링 보다는 오히려 네트워크 혼잡 때문에 감소된 경우에 몇몇 시간 다만 재기합니다. 이것은 스캔을 극적으로 느립니다.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = '포트가 열리거나 필터링 여부를 결정할 수 없을 때 Nmap 장소 포트. 포트가 응답을 제공하지 않는 스캔 유형에 대해 발생합니다. 응답의 부족은 또한 패킷 필터가 프로브 또는 어떤 응답을 떨어질 수 있음을 의미 할 수 있습니다. 그래서 Nmap은 포트가 열려 있거나 필터링되는지 확실하지 않습니다. UDP, IP 프로토콜, FIN, NULL 및 Xmas는 이 방법을 분류합니다.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap 타이밍 세부 사항은 링크된 페이지의 하단에 있습니다.';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis 비즈니스 서비스';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis 비즈니스 서비스';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis 고객';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis 고객';

$GLOBALS["lang"]['nmis_group'] = 'Nmis 그룹';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis 그룹';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis 관리';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis 관리';

$GLOBALS["lang"]['nmis_name'] = 'Nmis 이름';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis 이름';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis 노트';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis 노트';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis 투표';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis 투표';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller 우이드';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller 우이드';

$GLOBALS["lang"]['nmis_role'] = 'Nmis 역할';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis 역할';

$GLOBALS["lang"]['No'] = '이름 *';

$GLOBALS["lang"]['No Devices Returned'] = '장치 반환';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google지도 API 없음 현재, 당신은지도를 표시 할 수 없습니다.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = '전문가 또는 기업에 대한 라이센스 없음';

$GLOBALS["lang"]['No Results'] = '결과 없음';

$GLOBALS["lang"]['No data in License Key'] = '라이센스 키의 데이터 없음';

$GLOBALS["lang"]['No database upgrade required at this time.'] = '이 시간에 필요한 데이터베이스 업그레이드 없음.';

$GLOBALS["lang"]['No devices are in the database.'] = '장치가 데이터베이스에 없습니다.';

$GLOBALS["lang"]['Node'] = '이름 *';

$GLOBALS["lang"]['None'] = '이름 *';

$GLOBALS["lang"]['Norfolk Island'] = '노퍽 섬';

$GLOBALS["lang"]['Normal'] = '일반 정보';

$GLOBALS["lang"]['Northern Mariana Islands'] = '북부 마리아나 제도';

$GLOBALS["lang"]['Norway'] = '한국어';

$GLOBALS["lang"]['Norwegian'] = '한국어';

$GLOBALS["lang"]['Not Applicable'] = '적용 대상';

$GLOBALS["lang"]['Not Checked'] = '확인하기';

$GLOBALS["lang"]['Not Equals'] = '이름 *';

$GLOBALS["lang"]['Not In'] = '이름 *';

$GLOBALS["lang"]['Not Like'] = '이름 *';

$GLOBALS["lang"]['Not Set'] = '설정하기';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = '모든 컴퓨터가 벤치 마크를 성공적으로 완료 할 수 없습니다. 우리는 우리의 통제를 넘어 이유에 대한 테스트에 실패했습니다. 로그는이 항목에 대한 올바른 방향으로 당신을 도울 수 있어야합니다.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = '아니 (comma seperated) 목록';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '일반적으로 사용되지 않음. 설정하면,이 장치가 응답을 고려하기 위해 열린 포트 (스캔 옵션 당)를 가지고 있어야합니다. MAC 주소, arp 응답 또는 ping 응답은 응답으로 간주 될 충분하지 않다. Open-AudIT 서버와 Target IP 사이의 라우터 또는 방화벽이 IP를 대신하여 포트 스캔에 대응하는 경우 유용합니다.';

$GLOBALS["lang"]['Note'] = '이름 *';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '참고 - 부모를 선택하면 자동으로 자녀에 액세스 할 수 있습니다 (여기서는 여기에 표시되지 않습니다).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = '100개의 장치 기업 면허가 지원이 포함되지 않는 참고.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Note, 스크립트 실행을 할 필요가 있을 수 있습니다.';

$GLOBALS["lang"]['Notes'] = '지원하다';

$GLOBALS["lang"]['notes'] = '지원하다';

$GLOBALS["lang"]['Notice'] = '- 연혁';

$GLOBALS["lang"]['notin'] = '이름 *';

$GLOBALS["lang"]['Notin'] = '이름 *';

$GLOBALS["lang"]['November'] = '11 월';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = '구독 ID를 위해 모든 서비스, 구독 및 복사를 클릭합니다.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = '이제 구독에 Azure Active Directory 애플리케이션 액세스를 제공해야합니다.<br/><br/>리소스 그룹을 클릭하고 Azure Active Directory 응용 프로그램을 사용하여 액세스 할 수 있습니다.<br/><br/>자주 묻는 질문 역할은 기여자이어야하며 앱 검색 (Open-AudIT). 다음을 클릭합니다 저장.<br/><br/>이제 응용 프로그램은 구독에 액세스하므로 API 호출을 만들 수 있습니다. API 호출은 사용자가 아닌 응용 프로그램을 대신하여 요청됩니다.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd 존';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd 존';

$GLOBALS["lang"]['ORDER BY'] = '주문하기';

$GLOBALS["lang"]['OS'] = '운영 체제';

$GLOBALS["lang"]['OS Families'] = 'OS 가족';

$GLOBALS["lang"]['OS Family'] = 'OS 가족';

$GLOBALS["lang"]['OS Group'] = 'OS 그룹';

$GLOBALS["lang"]['OUTPUTS'] = '아웃퓨즈';

$GLOBALS["lang"]['oae_manage'] = 'Oae 관리';

$GLOBALS["lang"]['Oae Manage'] = 'Oae 관리';

$GLOBALS["lang"]['object_ident'] = '목표 Ident';

$GLOBALS["lang"]['Object Ident'] = '목표 Ident';

$GLOBALS["lang"]['Obtain top management support'] = '최고 관리 지원';

$GLOBALS["lang"]['October'] = '10월';

$GLOBALS["lang"]['Offset'] = '기타 제품';

$GLOBALS["lang"]['Okta'] = '오오타';

$GLOBALS["lang"]['Oman'] = '오만';

$GLOBALS["lang"]['omk_uuid'] = 'Omk 우이드';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk 우이드';

$GLOBALS["lang"]['On'] = '이름 *';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows에서, Open-AudIT는 감사의 1 차적인 방법입니다. Windows는 원격 WMI가 우려되는 악명 높은 명성을 가지고 있습니다. 그것은 하나에 경향이 <i>그냥 일</i> 또는 대상의 일부 미스터리 아이템은 변경해야합니다. 원격 Windows PC를 감사하는 어려움이 있는 경우, test_windows_client.vbs라는 스크립트를 만들었습니다. 이 스크립트를 실행할 수 있습니다. <strong>한국어</strong> 질문에 기계에, Open-AudIT에 의해 사용 된 사용자에 서명 한 후 감사를 수행. 스크립트는 <strong>변경 사항</strong> 대상 장치에. 아래 항목의 가장 (모든)를 확인하고 다양한 속성에 대한 PASS, FAIL 및 INFO 태그를 생성합니다. NOTE - 대상 시스템이 올바르게 감사되면 어떤 설정을 변경하지 않아야합니다. 아래의 일부는 감사하고 일부가 존재하는 Windows PC에 존재하지 않습니다. 특정 PC에 대한 발견이 의도하지 않는 경우에만 변경 설정.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = '작업 목록 페이지에서, 클릭 <i>새소식</i> 작업을 구성하려면 버튼.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = '현장에 <i>일치 문자열</i> 추적하려는 소프트웨어의 이름을 제공해야합니다. 필요한 경우 % 기호 (%)를 와일드 카드로 사용할 수 있습니다.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = '다음 페이지에서 Access Keys를 선택하고 키를 보거나 새로운 키를 만들 수 있습니다.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = '대상 Windows PC에서 DCOM 유틸리티를 실행하고 (또는 설정) 아래 속성을 확인합니다. 시작 -> DCOMCNFG를 입력하고 OK를 누릅니다. DCOMCNFG 창을 엽니다.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = '오른쪽 상단에 (메뉴 바 아래) 여러 버튼을 볼 수 있습니다. 현재 대시보드를 홈페이지로 설정할 수 있습니다. (이렇지 않은 경우)';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, 클라우드 없음';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = '추가 필드가 생성되면 쿼리 및 그룹에서 데이터베이스의 다른 속성과 같이 사용할 수 있습니다.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = '일단 댓글을 달아, 인증서는 유효하게 될 것입니다, 그러나 당신이 자기 서명 인증서를 사용하고 당신의 서버를 올바르게 구성하지 않은 경우이 검증 실패 할 수 있습니다.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = '스크립트가 대상에서 실행되면 스크립트가 삭제되어야 합니다.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = '초기 쿼리 (snmp, ssh, wmi)가 완료되면, 장치가 감사 스크립트 (Windows, Linux, OSX, AIX, HP-UX, Solaris 및 ESXi)에 의해 지원되는 경우, 올바른 감사 스크립트는 대상과 실행에 복사됩니다. 감사 스크립트는 완료시 자동으로 삭제됩니다. 결과는 대상 기계에 XML 파일로 저장됩니다. Open-AudIT 서버는 처리하고 대상에 결과를 삭제하기 위해 결과 파일을 검색합니다. 이 위치 감사 스크립트는 대상 장치에 복사됩니다 (SSH 감사에 대한 적어도) discovery_linux_script_directory config 항목을 편집하여 구성입니다. 기본적으로 /tmp/로 설정됩니다. /tmp가 noexec 세트가 있다면 변경할 수 있습니다. 결과 파일은 다음 처리되고 장치 세부 사항은 Open-AudIT 내에서 업데이트됩니다.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = '실행 버튼을 클릭한 후, Open-AudIT는 발견을 시작으로 사용자를 검색한 세부 페이지에 전달합니다. 새로 만들어진 프로세스는 구성 된 발견 옵션을 가지고 Nmap 명령을 실행하여 스캔 된 IP 주소의 초기 목록을 결정합니다 (또는 쿼리 Active Directory를 사용한다면). 스캔 된 각 IP는 큐에 배치됩니다. 초기 프로세스가 완료되면 (그리고 수표에서 스캔 할 IP가 있습니다) 프로세스의 수는 병렬에서 각 IP를 더 검사하기 위해 스파게 될 것입니다. 이 수의 프로세스는 구성에서 구성, 속성 편집 <i>queue_limit 설정</i>· 기본적으로 이것은 20로 설정됩니다.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = '장치를 편집하려면 테이블 오른쪽 상단에 연필 버튼을 클릭합니다.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = '이 작업을 완료하면 Open-AudIT는 구성 된 Auth 방법에 대한 사용자 로고 세부 사항을 확인하려고합니다. 사용자의 자격 증명 및 <code>use_authorisation</code> set, Open-AudIT는 사용자가 속한 그룹 목록을 요청합니다. 사용자가 Open-AudIT 역할과 Orgs의 대응 그룹에 있다면, 그 역할과 Orgs는 해당 사용자에게 적용됩니다.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Baseline 정의를 생성하면 지정된 장치 그룹에 대해 실행할 수 있습니다.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = '이 항목이 있으면 Open-AudIT에서 기업은 메뉴로 갈 수 있습니다 -> 발견 -> 클라우드 -> 이름 * Clouds, 선택 <i>아마존 AWS</i> 유형과 붙여넣기. 이름 *';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = '이 항목이 있으면 Open-AudIT에서 기업은 메뉴로 갈 수 있습니다 -> 발견 -> 클라우드 -> 이름 * Clouds, 선택 <i>마이크로 소프트 Azure</i> 유형과 붙여넣기. 이름 *';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Cloud credentials가 있으면 새로운 클라우드를 만들고 발견을 실행하는 데 문제가 있습니다. 또는 첫 번째 / 가구 발견을 스케줄링하십시오. 클라우드 기계에 로그인해야 할 자격 증명이 있는지 확인하고 일반 발견과 같은 모든 작업을 수행 할 수 있습니다. 당신의 구름을 위한 Credentials';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = '한국어 <code>3x2</code>· <code>4x2</code>· <code>4x3</code> 또는 <code>4x4</code>·';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = '캠퍼스 지역 네트워크, 클라우드 네트워크, 엔터프라이즈 개인 네트워크, 홈 지역 네트워크, 지역 네트워크, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '개발, 재해 복구, 평가, 사전 제작, 생산, 테스트, 교육, 사용자 수용 테스트';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '할당, 위임, 계획, 예약, 취소, 알 수없는, 관리. 할당 된 기본값.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = '중 하나 <code>active directory</code> 또는 <code>openldap</code>·';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '한 가지 : 바이러스 백신, 백업, 방화벽, 승인, 금지, 무시 또는 기타.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = '주의해야 할 다른 항목 - LDAP의 hostname (또는 fqdn)을 사용하는 것을 확인합니다. Open-AudIT에서 LDAP 엔트리를 만들 때 인증서 (LDAP 서버 IP 주소는 아닙니다)에 어떤 일치하는 서버.';

$GLOBALS["lang"]['Online Documentation'] = '온라인 문서';

$GLOBALS["lang"]['Open'] = '기타';

$GLOBALS["lang"]['Open Data'] = '열린 Data';

$GLOBALS["lang"]['Open Source'] = '회사연혁';

$GLOBALS["lang"]['Open-AudIT'] = '오시는 길';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = '오시는 길 커뮤니티 소스 코드는 GitHub에서 사용할 수 있습니다. 당신은 어떤 코드를 검사하는 것이 좋습니다, 그리고 그것은 오픈 소스이기 때문에 - 당신은 또한 당신이 가지고 또는 어떤 발견을보고 어떤 문제에 대해 문의하는 것이 좋습니다. 우리는 코드 기여, 취약성 보고서, 또는 간단한 질문에 대해 항상 행복합니다. 우리는 도움이 여기에 있습니다.<br/><br/>감사 스크립트 자체 (Windows, Linux, MacOS 등)는 읽기 쉬운 기본 쉘 스크립트 (VBScript for Windows, Bash for *nix)로 작성됩니다. 명령이 실행되는 것을 정확히 볼 수 있습니다. 당신은 당신이 필요로하지 않는 느낌 어떤 명령을 제거 할 수 있습니다. 당신은 당신을 위해 코드를 검사하는 제 3 자를 요청할 수 있습니다 (당신이 원하는 경우) 어떤 발견을보고.<br/><br/>오시는 길 Enterprise는 Open-AudIT 커뮤니티의 애드온 상용 기능을 수행합니다. 외부 의존성 없이 단일 컴파일된 파일로 포함되어 있습니다. Enterprise 자체가 기능(s)를 수행하면 어떤 문제와 관련하여 Firstwave는 당신을 통해 일하게 행복합니다 - 그냥 물어보십시오! 다른 상업 소프트웨어 공급 업체와 함께 시도!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT 장치 선택';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = '오시는 길 기업은 발견 스캔 옵션의 사전 정의 목록에서 선택할 수있는 능력과 발견 당 개별 옵션을 사용자 정의 할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT 기업. 대규모 유연한 발견 및 큰 네트워크에 대한 감사 솔루션. Professional plus의 모든 기능 : Baselines, File Auditing, Cloud Discovery, Rack Management, Active Directory 및 LDAP를 포함한 구성 가능한 역할 기반 액세스 제어.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT 필드 이름';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT 라이센스';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT 옵션';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional 및 Enterprise는 여러 형식의 시간 기반, 역사 및 muti-query 기반 보고 기능을 포함하여 향상된 보고 기능을 포함합니다.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = '오시는 길 Professional은 발견 당 사전 정의 된 목록에서 선택할 수있는 능력을 가지고 있습니다.';

$GLOBALS["lang"]['Open-AudIT Professional. The world'] = 'Open-AudIT 전문가 세계';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = '오시는 길 IT는 LDAP 서버(Microsoft Active Directory 및/또는 OpenLDAP)를 사용하여 사용자를 인증하고, LDAP 그룹 회원을 기반으로 할당된 역할과 orgs를 사용하여 Open-AudIT에서 사용자 계정을 만들 수 있습니다. 그것은 또한 사용할 수 있습니다';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = '오시는 길 IT는 데이터 센터에서 서버에서 실행할 수 있습니다. 인터넷에 접속할 필요가 없습니다. 우리는 우리의 선구자에 대한 배포 패키지 관리자를 사용하는 Linux의 설치는 사내 및 보안 팀 승인 패키지 저장소를 사용하여 저작 할 수 있습니다.<br/><br/>오시는 길 IT는 클라우드에서 데이터를 저장하지 않습니다. Open-AudIT 서버에서 인터넷에 액세스하지 않고도 라이선스 정보를 제공 할 수 있습니다.<br/><br/>물론, 인터넷에 액세스 할 수 있도록 쉽게 귀하의 배포에 대한 패키지 (보안 수정 포함)을 다운로드 할 수 있습니다, 그러나 그것은 당신과 보안 정책. Open-AudIT는 인터넷이 필요하지 않습니다.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT는 NIST CVE Vulnerability 보고서를 다운로드, 파스 및 사용 할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = '오시는 길 IT는 몇몇 언어 중 하나에서 보여줄 수 있습니다. 어떻게 개선할 수 있습니까?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = '오시는 길 IT는 각 장치와 관련된 추가 분야에서 정보를 저장할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT는 Microsoft Entra (이전 Microsoft Azure Active Directory로 알려진)를 인증 방법으로 사용할 수 있습니다. 이것은 Open-AudIT의 사용자가 로고 페이지에 Entra 버튼을 사용하여 로고를 클릭하고 로고에 Entra credentials를 사용합니다. 이 사용자는 Open-AudIT 내에서 이미 존재해야 할 것입니다 (그리고 할당됩니다.';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT는 인증 방법으로 OKTA를 사용할 수 있습니다. 이것은 Open-AudIT의 사용자가 로고 페이지에 OKTA 버튼을 사용하여 로고를 클릭하고 로고에 OKTA 자격 증명을 사용합니다. 이 사용자는 Open-AudIT (및 할당 된 역할과 Orgs) 내에서 이미 존재 할 필요가 있지만 Logon 자격 증명의 별도 세트를 기억할 필요가 없습니다.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT는 많은 쿼리가 내장되었습니다. 특정 쿼리 및 사전 포장 쿼리의 아무도가 필요하면, 새로운 것을 만들고 실행을위한 Open-AudIT로로드하는 것이 매우 쉽습니다.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT는 JSON 요청을 통해 웹 인터페이스에서 모두 사용할 JSON Restful API를 가지고 있습니다.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = '오시는 길 IT는 Open-AudIT 내에서 사용자를 결정하기 위해 과립 된 권한 시스템을 가지고 있으며, 그 항목은 수행 할 수 있습니다. Open-AudIT는 인증 및/또는 인증에 대한 Active Directory 또는 OpenLDAP를 완전히 자체 유지하거나 사용할 수 있습니다.<br/><br/>오픈 어드벤처의 관리자에게 전적으로 역할 기반 액세스 제어를 사용하는 방법.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = '오시는 길 IT는 강력한 변화 검출 엔진이 있습니다. 추가되고 제거되거나 변경되는 모든 장치 속성은 감지되고 저장됩니다. 이 변경은 회사 변경 및 공개 프로세스에서 예상되는 것과 같이 확인된 관련 데이터가 보고될 수 있습니다.<br/><br/>장치가 감사될 때, 속성은 데이터베이스에 테이블에 대응하는 섹션으로 나뉩니다.<br/><br/>각 장치 (컴퓨터, 대패, 인쇄 기계, 등)에는에 있는 입장이 있습니다 <code>devices</code> 테이블. 장치 테이블의 각 항목에는 <code>id</code> 열. 이 값은 독특합니다 - 그것은 자동 증가 ID입니다.<br/><br/>감사 결과가 처리되면 각 섹션의 각 항목에는 데이터베이스에 비해 감사 결과가 있습니다.<br/><br/>각 단면도를 위해, 열쇠 란 (아래 테이블을 보십시오)가 동일한 가치를 포함하면, 이미 설치되고 있습니다 <code>last_seen</code> 사이트 맵 change_log 항목이 생성되지 않습니다.<br/><br/>키 컬럼이 일치하지 않는 경우, 새로운 속성으로 간주되며 삽입됩니다. · <code>change_log</code> 장치는 이미 테이블에 존재하는 다른 속성이 있다면 항목이 생성됩니다.<br/><br/>감사 처리의 완료에서 업데이트되지 않은 데이터베이스 항목 (또는 삽입)은 현재 고려되지 않습니다. 더 보기 <code>current</code> 이 항목의 속성은 설정 <i>₢ 킹</i> change_log 항목이 생성됩니다.<br/><br/>그래서, 우리는 무언가가 현재 설치되는 경우에 결정해서 좋습니다 - 현재 란입니다 <i>₢ 킹</i>·<br/><br/>우리는 무언가가 처음 발견되었을 때 결정할 수 있습니다 - <i>처음_seen</i>·<br/><br/>우리는 초기 감사 후 뭔가가 설치되었는지 결정할 수 있습니다 - 처음 본은 구성 요소 및 장치 테이블에 다릅니다.<br/><br/>현재 설치되지 않은 경우를 결정할 수 있지만 이전에는 현재 = <i>₢ 킹</i>·<br/><br/>우리는 우리가 품목을 검출한 마지막 시간을 결정해서 좋습니다 - last_seen.<br/><br/>주어진 점에서, 우리는 시스템에서 무엇을 결정할 수 있습니다 - Audit_log 테이블을 사용 하 고 first_seen 및 last_seen에 따라 관련 구성 요소를 선택.<br/><br/>각 단면도 및 그것의 어울리는 열쇠 란은 아래에 있습니다.<br/><br/>NOTE - 아래에서 몇 가지 예외가 있습니다.<br/><br/>*1 - 네트워크 카드의 경우 컴퓨터가 VMware Esx 기계가 net_index 및 연결 열을 사용합니다.<br/><br/>*2 - 분할을 위해, f 컴퓨터는 AIX 기계입니다, 우리는 분할 이름을 사용합니다.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT는 IT 및 관련 자산 세부 사항 및 구성에 대한 추적 및 보고서하도록 설계된 프로그램입니다. Open-AudIT는 말할 수 있습니다 <i>당신의 네트워크에 무엇입니까?</i>, 구성하는 방법 및 변경 사항이있는 경우. Open-AudIT는 장치 검색, IT 감사 및 재고 관리 자동화를 위한 매끄럽고 유연하고 사용하기 쉬운 상자를 제공합니다.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = '오시는 길 IT는 한 번에 여러 기기의 속성을 쉽게 편집 할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = '오시는 길 파일, 업로드 결과 등을 만들 수 있는 특정 디렉토리 권한이 필요합니다. 아래에서 설정하십시오.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT는 많은 내장 쿼리를 제공하며 스스로 만들 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = '오시는 길 IT는 관리자, org_admin 및 사용자를위한 내장 된 역할을합니다.<br/><br/>일반적으로 Open-AudIT 응용 프로그램의 관리자 인 사용자는 admin 및 가능한 org_admin 역할이 있어야합니다.<br/><br/>사용자는 다수 역할을 할 수 있습니다. 사용자가 user와 org_admin의 역할을 가지고 있는 경우, org_admin이 권한을 부여하기 때문에 org_admin이 권한을 부여하기 때문에 위치를 만들 수 있습니다.<br/><br/>관리자 역할은 구성, 데이터베이스, 그룹, ldap 서버, 로그, 쿼리 및 역할과 같은 컬렉션에 액세스 할 수 있습니다. 전체 애플리케이션에 영향을 미치는 글로벌 아이템.<br/><br/>org_admin 역할은 일반적으로 org_id 열을 포함하는 모든 수집에 대한 생성, 읽기, 업데이트 및 삭제 작업을 허용합니다. 위에서 언급 한 컬렉션의 일부를 제외하고 거의 모든 데이터가 포함됩니다. <code>org_id</code> 열.<br/><br/>사용자 역할은 일반적으로 org_id 컬럼으로 모든 항목에만 액세스 할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = '오시는 길 IT는 관리자, org_admin 및 사용자를위한 내장 된 역할을합니다.<br/><br/>일반적으로 Open-AudIT 응용 프로그램의 관리자 인 사용자는 admin 및 가능한 org_admin 역할이 있어야합니다.<br/><br/>사용자는 다수 역할을 할 수 있습니다. 사용자가 user와 org_admin의 역할을 가지고 있는 경우, org_admin이 권한을 부여하기 때문에 org_admin이 권한을 부여하기 때문에 위치를 만들 수 있습니다.<br/><br/>관리자 역할은 구성, 데이터베이스, 그룹, ldap 서버, 로그, 쿼리 및 역할과 같은 컬렉션에 액세스 할 수 있습니다. 전체 애플리케이션에 영향을 미치는 글로벌 아이템.<br/><br/>org_admin 역할은 일반적으로 org_id 열을 포함하는 모든 수집에 대한 생성, 읽기, 업데이트 및 삭제 작업을 허용합니다. 위에서 언급 한 컬렉션 중 일부를 제외하고 거의 모든 데이터는 org_id 열을 포함합니다.<br/><br/>사용자 역할은 일반적으로 org_id 컬럼으로 모든 항목에만 액세스 할 수 있습니다.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT는 여러 사전 설정된 대시보드로 배송됩니다. 전문 사용자라면 두 개 중에서 선택할 수 있으며 기본 페이지로 설정할 수 있습니다. 엔터프라이즈 사용자라면, 5개의 사전 설정된 대시보드 중에서 선택할 수 없지만 자신만의 기능을 가지고 있습니다.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT는 64bit Windows에 설치되어야 합니다 <strong>계정 관리</strong> 시스템만. Windows 10 및 Windows 11는 입니다 <strong>아니다.</strong> 지원되는.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT는 Discovery 기능에서 Nmap을 사용합니다. Nmap probes 장치 오픈 포트. 장비는 이상적으로 일 항구를 위해 열려야 합니다. 장치는 종종 이것에 응답하지 않습니다. 다양한 응답은 아래와 같습니다.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT는 Discovery 기능에서 Nmap을 사용합니다. Nmap 없이, Open-AudIT는 제대로 작용하지 않을 것입니다. Open-AudIT 설치는 Nmap을 설치하고 Discovery 웹 페이지에서 테스트합니다. Open-AudIT 및 Nmap에 대한 자세한 정보는 여기를 참조하십시오.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT는 Discovery 기능에서 Nmap을 사용합니다. Nmap 없이, Open-AudIT는 제대로 작용하지 않을 것입니다. Open-AudIT 설치는 Nmap을 설치하고 Discovery 웹 페이지에서 테스트합니다.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = '오시는 길 IT는 기기에 접근하기 위해 자격 증명을 사용합니다. 이들은 암호화되고 저장됩니다.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT는 호주의 영어 말하기에 의해 작성되었습니다. 모든 응용 프로그램은 영어 단어를 사용합니다. 그러나 Open-AudIT는 항상 디스플레이에 대한 여러 언어를 지원했습니다. 이 번역은 항상 정확하지 않습니다, 개발자가 제공된 모든 번역의 언어를 기본적으로 말하지 않기 때문에.<br/><br/>번역을 수정하지 않는 경우 무엇을 할 수 있습니까?';

$GLOBALS["lang"]['OpenLDAP'] = '메뉴 열기';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap 설치';

$GLOBALS["lang"]['Opening a Support Ticket?'] = '지원 티켓 열기?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap 사용자 Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap 사용자 Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap 사용자 회원 속성';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap 사용자 회원 속성';

$GLOBALS["lang"]['open|filtered'] = '오픈|필터';

$GLOBALS["lang"]['Open|filtered'] = '오픈|필터';

$GLOBALS["lang"]['Operating System'] = '운영 체계';

$GLOBALS["lang"]['Operating System Family Contains'] = '운영 체제 가족 포함';

$GLOBALS["lang"]['Operating Systems'] = '운영 시스템';

$GLOBALS["lang"]['Operators'] = '회사 소개';

$GLOBALS["lang"]['optical'] = '제품정보';

$GLOBALS["lang"]['Optical'] = '제품정보';

$GLOBALS["lang"]['Optimized'] = '설치하기';

$GLOBALS["lang"]['Option #1 - Change the data'] = '옵션 정보 #1 - 데이터 변경';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Option #2 - 번역 파일을 변경';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = '선택적 에이전트 기반 감사';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT에 의해 감사되는 것과 같이 선택적인 버전. % sign %를 와일드 카드로 사용하십시오.';

$GLOBALS["lang"]['options'] = '옵션 정보';

$GLOBALS["lang"]['Options'] = '옵션 정보';

$GLOBALS["lang"]['Options, options, options'] = '옵션, 옵션, 옵션';

$GLOBALS["lang"]['Or'] = '또는';

$GLOBALS["lang"]['Or select from the below fields.'] = '또는 아래 필드에서 선택하십시오.';

$GLOBALS["lang"]['org_descendants'] = 'Org 공상';

$GLOBALS["lang"]['Org Descendants'] = 'Org 공상';

$GLOBALS["lang"]['org_id'] = '또는 ID';

$GLOBALS["lang"]['Org ID'] = '또는 ID';

$GLOBALS["lang"]['Organisation'] = '회사연혁';

$GLOBALS["lang"]['organisation'] = '회사연혁';

$GLOBALS["lang"]['Organisation Descendants'] = '조직도';

$GLOBALS["lang"]['Organisations'] = '회사연혁';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = '조직은 사용자 정의 필드를 사용하여 모든 발견 된 장치에 저장되는 세부 사항을 확장하고 개선 할 수 있으며 개방형 코어는 CMDB, 이벤트 관리 및 티켓 시스템에 쉽게 통합 할 수 있습니다.';

$GLOBALS["lang"]['orgs'] = '뚱 베어';

$GLOBALS["lang"]['Orgs'] = '뚱 베어';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs 이름';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Open-AudIT의 Orgs는 중요한 아이템입니다. 사용자에는 1 차 Org뿐만 아니라 Orgs 목록이 있습니다. 사용자는 Orgs에 할당 된 항목에 걸릴 수있는 작업을 정의 할당 된 역할 목록을 결합합니다. 사용자의 조합 <i>한국어</i> · <i>이름 *</i> 그들이 할 수있는 것을 정의하고 Open-AudIT 내에서 할 수 없습니다.<br/><br/>Open-AudIT의 대부분의 항목은 Org. 장치, 위치, 네트워크 등에 할당됩니다.<br/><br/>Orgs는 아이 Orgs를 가질 수 있습니다. 조직 차트 (tree) 구조의 생각. 사용자가 특정 Org에 액세스 할 경우, 대부분의 시간 ( 항상 아닙니다) 그들은 또한 그 Orgs 후손에 액세스해야합니다.';

$GLOBALS["lang"]['orientation'] = '회사연혁';

$GLOBALS["lang"]['Orientation'] = '회사연혁';

$GLOBALS["lang"]['os'] = '주요 특징';

$GLOBALS["lang"]['Os'] = '주요 특징';

$GLOBALS["lang"]['os_arch'] = 'Os 아치';

$GLOBALS["lang"]['Os Arch'] = 'Os 아치';

$GLOBALS["lang"]['os_bit'] = 'Os 비트';

$GLOBALS["lang"]['Os Bit'] = 'Os 비트';

$GLOBALS["lang"]['os_cpe'] = '오 Cpe';

$GLOBALS["lang"]['Os Cpe'] = '오 Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os 디스플레이 버전';

$GLOBALS["lang"]['Os Display Version'] = 'Os 디스플레이 버전';

$GLOBALS["lang"]['os_family'] = 'Os 가족';

$GLOBALS["lang"]['Os Family'] = 'Os 가족';

$GLOBALS["lang"]['os_group'] = 'Os 그룹';

$GLOBALS["lang"]['Os Group'] = 'Os 그룹';

$GLOBALS["lang"]['os_installation_date'] = 'Os 설치 날짜';

$GLOBALS["lang"]['Os Installation Date'] = 'Os 설치 날짜';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence 만';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence 만';

$GLOBALS["lang"]['os_license'] = 'Os 라이센스';

$GLOBALS["lang"]['Os License'] = 'Os 라이센스';

$GLOBALS["lang"]['os_license_code'] = 'Os 라이센스 코드';

$GLOBALS["lang"]['Os License Code'] = 'Os 라이센스 코드';

$GLOBALS["lang"]['os_license_mode'] = 'Os 라이센스 모드';

$GLOBALS["lang"]['Os License Mode'] = 'Os 라이센스 모드';

$GLOBALS["lang"]['os_license_type'] = 'Os 라이센스 유형';

$GLOBALS["lang"]['Os License Type'] = 'Os 라이센스 유형';

$GLOBALS["lang"]['os_name'] = 'Os 이름';

$GLOBALS["lang"]['Os Name'] = 'Os 이름';

$GLOBALS["lang"]['os_version'] = 'Os 버전';

$GLOBALS["lang"]['Os Version'] = 'Os 버전';

$GLOBALS["lang"]['Other'] = '이름 *';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = '제한 이외의 다른, 당신은 필요한 속성을 선택할 수 있습니다. 메뉴를 사용하는 좋은 아이디어입니다.';

$GLOBALS["lang"]['Others'] = '이름 *';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = '우리의 기본 통합은 외부 공급 장치에서 발견 할 수 있습니다. 그래서 우리는 상자에서 기본 통합을위한 기본 발견을 발송합니다. 이 기본 일치 규칙을 사용하지만 IP 주소에 일치 할 수 있습니다.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = '우리의 예제는 사용할 것입니다 <i>제품정보</i> 열.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = '우리의 프레임 워크 파일을 여기에 처리, 다음 삭제. 제출 감사 결과 등을 생각하십시오.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = '초기 통합을 가진 우리의 목표는 NMIS에 Open-AudIT 통합을 위해 특히 있었습니다 <i>그냥 일</i>· Linux에서 프로그램을 사용하는 경우, 통합을 실행하는 단일 버튼을 클릭 할 수 있습니다. 더 이상 필요하지 않습니다. 이를 통해 통합 자체는 매우 구성이 가능하므로 무언가가 선호하지 않는 경우 쉽게 변경할 수 있습니다.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Vulnerabilities라는 새로운 기능은 모든 장치가 CVE (Common Vulnerability Exposure)에 영향을 미치는지 신속하게 결정할 수있는 능력을 제공합니다. 그러나 어떻게?<br/><br/>FirstWave는 지속적으로 Nist NVD 피드에서 출력을 소비합니다. 이 작업을 수행하고 몇 가지 제한을 적용하고 영향을받는 프로그램을 추출하고보고 SQL 쿼리를 구축합니다. Open-AudIT 인스턴스는 FirstWave에 도달하고 일반 기초에 새로운 취약점을 요청합니다. 새로운 취약성 레코드를 수신하면 데이터베이스와 저장 결과에 대해 실행됩니다. 각 장치는 처리되고, 모든 일치 취약점은 다시 실행되고 결과 저장됩니다. 이것은 취약점을 볼 때, 우리는 모든 영향을받는 장치를 계산 할 필요가 없습니다 - 우리는 이미 결과를 가지고. 개인 취약성 기록을 볼 때, 우리는 실제로이 취약성에 대한 결과를 재 계산합니다.<br/><br/>그래서, 당신은 항상 최신입니다!<br/><br/>이 외에도 매일 모든 기기에 대한 모든 취약점의 결과를 계산합니다 (보통 조용한 시간에 2am).<br/><br/>Open-AudIT의 인스턴스에서, 우리는 당신을 선택할 수 있습니다. i.e. 소프트웨어를 사용하지 않거나 설치하지 않은 공급업체로부터 취약성 레코드를 검색하지 않습니다. 기본적으로, 우리의 공급 업체 목록은 Adobe, Apple, Cisco, Google, Microsoft, Mozilla 및 Redhat입니다.<br/><br/>이 모든 소리 매우 간단합니다, 하지만 뒤에 장면 a <b>한국어</b> 에 있다. 예를 들어, CVE 레코드는 영향을받는 소프트웨어 목록이 포함되어 있습니다. 그러나 그 소프트웨어 이름은 우리가 컴퓨터를 감사 할 때 수신되는 것과 일치하지 않습니다. 좋은 예는 아파치입니다. 일반적으로 CVE 레코드는 영향을받는 소프트웨어는 http_server입니다. 실제로, 이것은 apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows)로 나타났습니다. 그래서, 우리는 먼저 우리가 컴퓨터를 요청할 때 우리가받을 프로그램의 실제 이름이 무엇인지 결정해야, 그리고 여러 이름이있을 수 있습니다. CVE 레코드를 파고 SQL 문장을 작성해야합니다. 위의 여러 프로그램 이름을 허용, 및 여러 버전, 버전 범위, 심지어 소프트웨어의 여러 다른 조각 (예는 Thunderbird 및 Firefox 단일 CVE). Open-AudIT의 인스턴스는 이것을 가져와 Orgs 필터링을 적용해야 합니다. 단 하나의 CVE입니다. 당신이 가지고있는 CVEs를 결정하는 것은 어떨까요? 나중에 목록에 납품업자를 추가하는 것은 어떨까요? 너무 많은 것을 고려!<br/><br/>일반적으로보고뿐만 아니라, 우리는 또한 Vulnerabilities 데이터를 기반으로 대시 보드에 사용할 수있는 몇 가지 새로운 위젯이 있습니다.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'SSH 응답을 위한 우리의 timeout';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'WMI 응답을위한 우리의 타임 아웃';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'SNMP 응답을 위한 우리의 timeout';

$GLOBALS["lang"]['Our timeout for an audit script response'] = '감사 스크립트 응답을위한 우리의 timeout';

$GLOBALS["lang"]['output'] = '출력 전압';

$GLOBALS["lang"]['Output'] = '출력 전압';

$GLOBALS["lang"]['outputs'] = '제품정보';

$GLOBALS["lang"]['Outputs'] = '제품정보';

$GLOBALS["lang"]['Overall severity score (0–10).'] = '전체 엄격 점수 (0–10).';

$GLOBALS["lang"]['overwrite'] = '파일 형식';

$GLOBALS["lang"]['Overwrite'] = '파일 형식';

$GLOBALS["lang"]['owner'] = '이름 *';

$GLOBALS["lang"]['Owner'] = '이름 *';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec은 SysInternal/Microsofts 인기있는 PsExec 프로그램의 자유로움직입니다. PAExec은 PsExec의 교체에 드롭이 될 것을 목표로하므로 명령행 사용은 지원되는 추가 옵션과 동일합니다. 이 작품은 원래 Talha Tariqs RemCom에서 영감을 받았습니다.';

$GLOBALS["lang"]['PHP'] = 'PHP를';

$GLOBALS["lang"]['POD'] = '사이트맵';

$GLOBALS["lang"]['POSTing data'] = 'POSTing 자료';

$GLOBALS["lang"]['Package'] = '제품 정보';

$GLOBALS["lang"]['packages'] = '제품정보';

$GLOBALS["lang"]['Packages'] = '제품정보';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = '패키지는 같은 것들에 대한 보고서에 사용됩니다. <i>금지된 소프트웨어</i>서버, 등에 AntiVirus<br/><br/>Open-AudIT는 백신, 방화벽 및 기타 소프트웨어의 상태를 해독하기 위해 저장소를 공급하는 위젯을 제공합니다.';

$GLOBALS["lang"]['pagefile'] = '언어 선택';

$GLOBALS["lang"]['Pagefile'] = '언어 선택';

$GLOBALS["lang"]['Pakistan'] = '파키스탄';

$GLOBALS["lang"]['Palau'] = '스낵 바';

$GLOBALS["lang"]['Palestinian Territory'] = '팔레스타인 Territory';

$GLOBALS["lang"]['Panama'] = '파나마';

$GLOBALS["lang"]['Papua New Guinea'] = '파푸아 뉴기니';

$GLOBALS["lang"]['Paraguay'] = '채용정보';

$GLOBALS["lang"]['Parameters'] = '매개 변수';

$GLOBALS["lang"]['Paranoid'] = '관련 상품';

$GLOBALS["lang"]['Parent'] = '한국어';

$GLOBALS["lang"]['parent_id'] = '부모 ID';

$GLOBALS["lang"]['Parent ID'] = '부모 ID';

$GLOBALS["lang"]['parent_name'] = '부모 이름';

$GLOBALS["lang"]['Parent Name'] = '부모 이름';

$GLOBALS["lang"]['part_number'] = '부품 번호';

$GLOBALS["lang"]['Part Number'] = '부품 번호';

$GLOBALS["lang"]['part_of_domain'] = '영역의 부분';

$GLOBALS["lang"]['Part Of Domain'] = '영역의 부분';

$GLOBALS["lang"]['Partition'] = '기타 제품';

$GLOBALS["lang"]['partition_count'] = '분할 수';

$GLOBALS["lang"]['Partition Count'] = '분할 수';

$GLOBALS["lang"]['partition_disk_index'] = '파티션 디스크 인덱스';

$GLOBALS["lang"]['Partition Disk Index'] = '파티션 디스크 인덱스';

$GLOBALS["lang"]['Pass'] = '패스워드';

$GLOBALS["lang"]['Passed'] = '패스워드';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = '수동적인 광학적인 지역 네트워크';

$GLOBALS["lang"]['Password'] = '비밀번호';

$GLOBALS["lang"]['password'] = '비밀번호';

$GLOBALS["lang"]['password_changeable'] = '비밀번호 변경';

$GLOBALS["lang"]['Password Changeable'] = '비밀번호 변경';

$GLOBALS["lang"]['password_disabled'] = '비밀번호 비활성화';

$GLOBALS["lang"]['Password Disabled'] = '비밀번호 비활성화';

$GLOBALS["lang"]['password_expires'] = '비밀번호';

$GLOBALS["lang"]['Password Expires'] = '비밀번호';

$GLOBALS["lang"]['password_last_changed'] = '비밀번호';

$GLOBALS["lang"]['Password Last Changed'] = '비밀번호';

$GLOBALS["lang"]['password_required'] = '비밀번호필수';

$GLOBALS["lang"]['Password Required'] = '비밀번호필수';

$GLOBALS["lang"]['patch_panel'] = '패치 패널';

$GLOBALS["lang"]['Patch Panel'] = '패치 패널';

$GLOBALS["lang"]['patch_panel_port'] = '패치 패널 포트';

$GLOBALS["lang"]['Patch Panel Port'] = '패치 패널 포트';

$GLOBALS["lang"]['path'] = '오시는 길';

$GLOBALS["lang"]['Path'] = '오시는 길';

$GLOBALS["lang"]['Performance'] = '- 연혁';

$GLOBALS["lang"]['Performed'] = '이름 *';

$GLOBALS["lang"]['Permission'] = '제출';

$GLOBALS["lang"]['Permission Required'] = '제출하기';

$GLOBALS["lang"]['permissions'] = '제출';

$GLOBALS["lang"]['Permissions'] = '제출';

$GLOBALS["lang"]['Persian'] = '담당자: Ms.';

$GLOBALS["lang"]['Personal Area Network'] = '개인 영역 네트워크';

$GLOBALS["lang"]['Personal area network'] = '개인 영역 네트워크';

$GLOBALS["lang"]['Peru'] = '한국어';

$GLOBALS["lang"]['Philippines'] = '한국어';

$GLOBALS["lang"]['phone'] = '이름 *';

$GLOBALS["lang"]['Phone'] = '이름 *';

$GLOBALS["lang"]['Physical CPUs'] = '물리적 CPU';

$GLOBALS["lang"]['physical_count'] = '육체적인 조사';

$GLOBALS["lang"]['Physical Count'] = '육체적인 조사';

$GLOBALS["lang"]['physical_depth'] = '육체적인 깊이';

$GLOBALS["lang"]['Physical Depth'] = '육체적인 깊이';

$GLOBALS["lang"]['physical_height'] = '육체적인 고도';

$GLOBALS["lang"]['Physical Height'] = '육체적인 고도';

$GLOBALS["lang"]['physical_width'] = '육체적인 폭';

$GLOBALS["lang"]['Physical Width'] = '육체적인 폭';

$GLOBALS["lang"]['picture'] = '이름 *';

$GLOBALS["lang"]['Picture'] = '이름 *';

$GLOBALS["lang"]['pid'] = '사이트맵';

$GLOBALS["lang"]['Pid'] = '사이트맵';

$GLOBALS["lang"]['Pie Chart'] = '파이 차트';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie 도표는 이름 또는 my_name, 묘사 또는 my_description 및 조사를 돌려야 합니다.';

$GLOBALS["lang"]['ping'] = '핑거';

$GLOBALS["lang"]['Ping'] = '핑거';

$GLOBALS["lang"]['Ping Target'] = 'Ping 대상';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn 제도';

$GLOBALS["lang"]['placement'] = '회사연혁';

$GLOBALS["lang"]['Placement'] = '회사연혁';

$GLOBALS["lang"]['Plan and conduct internal audits'] = '계획 및 내부 감사';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Open-AudIT 관리자 로고를 가지고 데이터베이스를 업그레이드하십시오.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = '이 ASAP에 로그인하고 변경하십시오.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Open-AudIT Server (Windows 또는 Linux)에 로그인하고 실행하십시오. <code>nslookup IP_ADDRESS_OF_TARGET</code> 명령 프롬프트 또는 쉘에서. IP를 이름에 해결할 수 있어야 합니다.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '선택 상자가 텍스트 입력 상자를 삭제하는 것을주의하십시오.';

$GLOBALS["lang"]['Please see the FAQ'] = '자주 묻는 질문';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Opmantek에서 지원 접촉에 모든 3개의 파일을 보내고 당신의 문제점을 설명하십시오.';

$GLOBALS["lang"]['Please set using'] = '자주 묻는 질문';

$GLOBALS["lang"]['Please visit the homepage at'] = '홈페이지 방문';

$GLOBALS["lang"]['pod'] = '팟캐스트';

$GLOBALS["lang"]['Pod'] = '팟캐스트';

$GLOBALS["lang"]['Poland'] = '한국어';

$GLOBALS["lang"]['Policies'] = '회사연혁';

$GLOBALS["lang"]['Policies have exceptions.'] = '정책에는 예외가 있습니다.';

$GLOBALS["lang"]['policy'] = '- 연혁';

$GLOBALS["lang"]['Policy'] = '- 연혁';

$GLOBALS["lang"]['policy_id'] = '정책 ID';

$GLOBALS["lang"]['Policy ID'] = '정책 ID';

$GLOBALS["lang"]['Policy Result'] = '정책 결과';

$GLOBALS["lang"]['Policy Results'] = '정책 결과';

$GLOBALS["lang"]['Polish'] = '담당자: Ms.';

$GLOBALS["lang"]['Polite'] = '제품 정보';

$GLOBALS["lang"]['Populate the with values provided below:'] = '아래 제공된 값으로 Populate:';

$GLOBALS["lang"]['Populated by audit.'] = '감사합니다.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = '발견 및 감사에 의해 Populated.';

$GLOBALS["lang"]['Populated dynamically.'] = '역학적으로 Populated.';

$GLOBALS["lang"]['Populated from DNS.'] = 'DNS에서 Populated.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'SNMP 발견에서 Populated.';

$GLOBALS["lang"]['Populated from device audits.'] = '장치 감사에서 Populated.';

$GLOBALS["lang"]['Populated from hostname.'] = '호스트 이름에서 Populated.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Linux에서 기계 ID로 변환.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = '기본 경로 또는 IP에 대한 IP에서 변환 된 발견.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'hostname 명령에서 Populated.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = '외부 시스템에서 추가 데이터로 Populated, JSON 표현.';

$GLOBALS["lang"]['port'] = '항구 항구';

$GLOBALS["lang"]['Port'] = '항구 항구';

$GLOBALS["lang"]['port_name'] = '항구 이름';

$GLOBALS["lang"]['Port Name'] = '항구 이름';

$GLOBALS["lang"]['port_number'] = '항구 수';

$GLOBALS["lang"]['Port Number'] = '항구 수';

$GLOBALS["lang"]['ports_in_order'] = '주문에 항구';

$GLOBALS["lang"]['Ports In Order'] = '주문에 항구';

$GLOBALS["lang"]['ports_stop_after'] = '항구 정지 후에';

$GLOBALS["lang"]['Ports Stop After'] = '항구 정지 후에';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, 포르투갈';

$GLOBALS["lang"]['Portuguese'] = '한국어';

$GLOBALS["lang"]['Portuguese (Brazil)'] = '포르투갈어 (브라질)';

$GLOBALS["lang"]['position'] = '제품정보';

$GLOBALS["lang"]['Position'] = '제품정보';

$GLOBALS["lang"]['Post-Certification'] = '게시물 인증';

$GLOBALS["lang"]['postcode'] = '우편번호';

$GLOBALS["lang"]['Postcode'] = '우편번호';

$GLOBALS["lang"]['power_circuit'] = '힘 회로';

$GLOBALS["lang"]['Power Circuit'] = '힘 회로';

$GLOBALS["lang"]['power_sockets'] = '힘 소켓';

$GLOBALS["lang"]['Power Sockets'] = '힘 소켓';

$GLOBALS["lang"]['Predictable'] = '옵션 정보';

$GLOBALS["lang"]['Preferences'] = '옵션 정보';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = '3년마다 개정을 위한 준비';

$GLOBALS["lang"]['Prerequisites'] = '자주 묻는 질문';

$GLOBALS["lang"]['Prerequisites and Tests'] = '시험 및 시험';

$GLOBALS["lang"]['present'] = '이름 *';

$GLOBALS["lang"]['Present'] = '이름 *';

$GLOBALS["lang"]['previous_value'] = '이전 값';

$GLOBALS["lang"]['Previous Value'] = '이전 값';

$GLOBALS["lang"]['primary'] = '주요 특징';

$GLOBALS["lang"]['Primary'] = '주요 특징';

$GLOBALS["lang"]['Primary Key'] = '기본 키';

$GLOBALS["lang"]['print_queue'] = '인쇄 큐';

$GLOBALS["lang"]['Print Queue'] = '인쇄 큐';

$GLOBALS["lang"]['printer_color'] = '인쇄 기계 색깔';

$GLOBALS["lang"]['Printer Color'] = '인쇄 기계 색깔';

$GLOBALS["lang"]['printer_duplex'] = '인쇄 기계 Duplex';

$GLOBALS["lang"]['Printer Duplex'] = '인쇄 기계 Duplex';

$GLOBALS["lang"]['printer_port_name'] = '인쇄 기계 항구 이름';

$GLOBALS["lang"]['Printer Port Name'] = '인쇄 기계 항구 이름';

$GLOBALS["lang"]['printer_shared'] = 'Printer 공유';

$GLOBALS["lang"]['Printer Shared'] = 'Printer 공유';

$GLOBALS["lang"]['printer_shared_name'] = 'Printer 공유 이름';

$GLOBALS["lang"]['Printer Shared Name'] = 'Printer 공유 이름';

$GLOBALS["lang"]['priority'] = '회사연혁';

$GLOBALS["lang"]['Priority'] = '회사연혁';

$GLOBALS["lang"]['Privacy Passphrase'] = '비밀번호';

$GLOBALS["lang"]['Privacy Protocol'] = '개인 정보 정책';

$GLOBALS["lang"]['privileges_required'] = '필수 사항';

$GLOBALS["lang"]['Privileges Required'] = '필수 사항';

$GLOBALS["lang"]['processor'] = '관련 기사';

$GLOBALS["lang"]['Processor'] = '관련 기사';

$GLOBALS["lang"]['processor_count'] = '가공업자 조사';

$GLOBALS["lang"]['Processor Count'] = '가공업자 조사';

$GLOBALS["lang"]['processor_slot_count'] = '가공업자 구멍 조사';

$GLOBALS["lang"]['Processor Slot Count'] = '가공업자 구멍 조사';

$GLOBALS["lang"]['processor_type'] = '가공업자 유형';

$GLOBALS["lang"]['Processor Type'] = '가공업자 유형';

$GLOBALS["lang"]['Processors'] = '관련 기사';

$GLOBALS["lang"]['product_name'] = '제품 이름';

$GLOBALS["lang"]['Product Name'] = '제품 이름';

$GLOBALS["lang"]['Product Name Match from CPE: '] = '제품 이름 CPE에서 일치: ';

$GLOBALS["lang"]['products'] = '제품 정보';

$GLOBALS["lang"]['Products'] = '제품 정보';

$GLOBALS["lang"]['Professional'] = '지원하다';

$GLOBALS["lang"]['profile'] = '이름 *';

$GLOBALS["lang"]['Profile'] = '이름 *';

$GLOBALS["lang"]['program'] = '- 연혁';

$GLOBALS["lang"]['Program'] = '- 연혁';

$GLOBALS["lang"]['Properties'] = '제품 정보';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = '광고. HighCharts를 수정하려면 필요할 수 있습니다.';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = '기밀성, 무결성 및 정보의 가용성';

$GLOBALS["lang"]['protocol'] = '프로젝트';

$GLOBALS["lang"]['Protocol'] = '프로젝트';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = '설명 및 선택 및 만료 기간 제공.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = '이름을 제공 - 우리는 humbly recommand Open-AudIT 😀, 하지만 당신은 당신이 좋아하는 것을 이름을 수 있습니다.<br/>Open-AudIT 양식에서 값을 복사 <i>리디렉션 URI</i> 필드에 붙여넣기 <i>로그인 URI</i> OKTA에 있는 분야.<br/>Sign-out 리디렉션 URI는 선택 사항이지만, open-audit/index를 사용할 수 있습니다. php/logout with your Open-AudIT 서버 http 주소, 스크린 샷 당.<br/>정상적으로 당신의 Open-AudIT URL은 다음과 같은 것을 볼 것입니다';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = '올바른 자격 증명을 제공, Device Seed Discovery는 다음과 같이 작동합니다.';

$GLOBALS["lang"]['provider'] = '회사 소개';

$GLOBALS["lang"]['Provider'] = '회사 소개';

$GLOBALS["lang"]['published'] = '이름 *';

$GLOBALS["lang"]['Published'] = '이름 *';

$GLOBALS["lang"]['published_date'] = '게시 날짜';

$GLOBALS["lang"]['Published Date'] = '게시 날짜';

$GLOBALS["lang"]['publisher'] = '관련 기사';

$GLOBALS["lang"]['Publisher'] = '관련 기사';

$GLOBALS["lang"]['Puerto Rico'] = '푸에르토리코';

$GLOBALS["lang"]['Purchase'] = '구매하기';

$GLOBALS["lang"]['purchase_amount'] = '구매 금액';

$GLOBALS["lang"]['Purchase Amount'] = '구매 금액';

$GLOBALS["lang"]['purchase_cost_center'] = '구매비용센터';

$GLOBALS["lang"]['Purchase Cost Center'] = '구매비용센터';

$GLOBALS["lang"]['purchase_count'] = '구매방법';

$GLOBALS["lang"]['Purchase Count'] = '구매방법';

$GLOBALS["lang"]['purchase_date'] = '구매 날짜';

$GLOBALS["lang"]['Purchase Date'] = '구매 날짜';

$GLOBALS["lang"]['purchase_invoice'] = 'Invoice 구매';

$GLOBALS["lang"]['Purchase Invoice'] = 'Invoice 구매';

$GLOBALS["lang"]['purchase_order'] = '구매 주문';

$GLOBALS["lang"]['Purchase Order'] = '구매 주문';

$GLOBALS["lang"]['purchase_order_number'] = '구매 주문 번호';

$GLOBALS["lang"]['Purchase Order Number'] = '구매 주문 번호';

$GLOBALS["lang"]['purchase_service_contract_number'] = '구매 서비스 계약 번호';

$GLOBALS["lang"]['Purchase Service Contract Number'] = '구매 서비스 계약 번호';

$GLOBALS["lang"]['purchase_vendor'] = '구매 Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = '구매 Vendor';

$GLOBALS["lang"]['purpose'] = '제품정보';

$GLOBALS["lang"]['Purpose'] = '제품정보';

$GLOBALS["lang"]['Qatar'] = '사이트맵';

$GLOBALS["lang"]['queries'] = '이름 *';

$GLOBALS["lang"]['Queries'] = '이름 *';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Queries는 Open-AudIT의 중요한 부분입니다. 그들은 당신이 발견 한 모든 장치 데이터에서 의미있는 정보를 얻을 수있는 기능입니다. summaries 및 그룹과 함께 중요한 정보를 추출하는 강력한 메커니즘을 제공합니다.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = '그룹을위한 쿼리 만 선택해야합니다.';

$GLOBALS["lang"]['Query'] = '글쓰기';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Query this Active Directory 속성 먼저 사용자 작업 단위를 결정합니다.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Query 이 Active Directory 속성 두 번째 사용자가 작업 단위를 결정합니다.';

$GLOBALS["lang"]['queue'] = '이름 *';

$GLOBALS["lang"]['Queue'] = '이름 *';

$GLOBALS["lang"]['Queue Limit'] = 'Queue 한계';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued 장치 감사';

$GLOBALS["lang"]['Queued IP Scans'] = 'IP 스캔';

$GLOBALS["lang"]['Queued Items'] = '연락처';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'Active Directory 및 openLDAP의 RBAC';

$GLOBALS["lang"]['RU Start'] = 'RU 시작';

$GLOBALS["lang"]['RX Bitrate'] = 'RX 비트레이트';

$GLOBALS["lang"]['RX Freq'] = 'RX 프레스';

$GLOBALS["lang"]['RX Level'] = 'RX 레벨';

$GLOBALS["lang"]['RX Power'] = 'RX 힘';

$GLOBALS["lang"]['RX Profile'] = 'RX 프로필';

$GLOBALS["lang"]['Rack'] = '제품 정보';

$GLOBALS["lang"]['rack_devices'] = '선반 장치';

$GLOBALS["lang"]['Rack Devices'] = '선반 장치';

$GLOBALS["lang"]['rack_id'] = '선반 ID';

$GLOBALS["lang"]['Rack ID'] = '선반 ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = '선반 관리 및 보고';

$GLOBALS["lang"]['Racks'] = '회사 소개';

$GLOBALS["lang"]['racks'] = '회사 소개';

$GLOBALS["lang"]['radio'] = '라디오';

$GLOBALS["lang"]['Radio'] = '라디오';

$GLOBALS["lang"]['Radio MAC'] = '라디오 MAC';

$GLOBALS["lang"]['rationale'] = '연구분야';

$GLOBALS["lang"]['Rationale'] = '연구분야';

$GLOBALS["lang"]['raw'] = '주요 특징';

$GLOBALS["lang"]['Raw'] = '주요 특징';

$GLOBALS["lang"]['read'] = '...에서';

$GLOBALS["lang"]['Read'] = '...에서';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Open-AudIT Wiki의 온라인 문서 읽기.';

$GLOBALS["lang"]['Read through the log file at'] = '로그 파일을 읽으십시오';

$GLOBALS["lang"]['Received'] = '이름 *';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = '최근에 우리는 질문을했다 - 다른 유사한 프로그램보다 더 안전한 Open-AudIT 고려? 대부분의 것들로, 대답은 <i>그것은 달려 있습니다</i>·<br/><br/>오시는 길 IT는 매우 안전합니다. 그러나 컴퓨터 기반 보안과 평소처럼, 당신이 무언가를 만들고 싶은 더 안전한, 더 inconvenient 그것은 사용 됩니다. 오래된 구문 <i>가장 안전한 컴퓨터는 컵 보드에서 꺼져있는 것<i> 자주 묻는 질문<br/><br/>아래에서 우리는 보안을 높일 수있는 Open-AudIT와 함께 사용할 수있는 몇 가지 옵션을 개요 할 것입니다. Open-AudIT 내에서 대부분의 항목처럼, 이러한 옵션과 의무가 없습니다. 보안을 얻는 방법</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = '인증: 3년마다 필수';

$GLOBALS["lang"]['Red Query'] = '레드 Query';

$GLOBALS["lang"]['Redirect URI'] = '리디렉션 URI';

$GLOBALS["lang"]['redirect_uri'] = '리디렉션 Uri';

$GLOBALS["lang"]['Redirect Uri'] = '리디렉션 Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = '데이터 침해 및 사이버 위협의 위험 감소';

$GLOBALS["lang"]['references'] = '이름 *';

$GLOBALS["lang"]['References'] = '이름 *';

$GLOBALS["lang"]['region'] = '이름 *';

$GLOBALS["lang"]['Region'] = '이름 *';

$GLOBALS["lang"]['registered_user'] = '등록된 사용자';

$GLOBALS["lang"]['Registered User'] = '등록된 사용자';

$GLOBALS["lang"]['Rejected'] = '관련 상품';

$GLOBALS["lang"]['rel'] = '사이트맵';

$GLOBALS["lang"]['Rel'] = '사이트맵';

$GLOBALS["lang"]['Release'] = '제품정보';

$GLOBALS["lang"]['remediation'] = '연구분야';

$GLOBALS["lang"]['Remediation'] = '연구분야';

$GLOBALS["lang"]['Remote'] = '원격 제어';

$GLOBALS["lang"]['remote_address'] = '원격 주소';

$GLOBALS["lang"]['Remote Address'] = '원격 주소';

$GLOBALS["lang"]['remote_port'] = '먼 항구';

$GLOBALS["lang"]['Remote Port'] = '먼 항구';

$GLOBALS["lang"]['Remove'] = '기타 제품';

$GLOBALS["lang"]['Remove Exception'] = '예외 제거';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = '완전히 발견되고 감사된 Windows PC가 있을 때까지 반복하십시오.';

$GLOBALS["lang"]['Report'] = '제품정보';

$GLOBALS["lang"]['Report on your devices, networks and more'] = '당신의 장치, 네트워크 및 더 많은 것에 보고';

$GLOBALS["lang"]['reportable'] = '관련 기사';

$GLOBALS["lang"]['Reportable'] = '관련 기사';

$GLOBALS["lang"]['Reports'] = '제품정보';

$GLOBALS["lang"]['request'] = '제품 정보';

$GLOBALS["lang"]['Request'] = '제품 정보';

$GLOBALS["lang"]['Request Method'] = '자주 묻는 질문';

$GLOBALS["lang"]['Request Vulnerability'] = '자주 묻는 질문';

$GLOBALS["lang"]['Request a Specific CVE'] = '견적 요청 사이트맵';

$GLOBALS["lang"]['requested'] = '지원하다';

$GLOBALS["lang"]['Requested'] = '지원하다';

$GLOBALS["lang"]['require_port'] = 'Require 항구';

$GLOBALS["lang"]['Require Port'] = 'Require 항구';

$GLOBALS["lang"]['Require an Open Port'] = '오픈 포트 필요';

$GLOBALS["lang"]['Required'] = '견적 요청';

$GLOBALS["lang"]['Required AWS user permissions'] = '필수 AWS 사용자 권한';

$GLOBALS["lang"]['Required Fields'] = '필수 필드';

$GLOBALS["lang"]['Reset'] = '이름 *';

$GLOBALS["lang"]['Reset All Data'] = '모든 데이터 재설정';

$GLOBALS["lang"]['Reset to Default'] = '기본값으로 재설정';

$GLOBALS["lang"]['resource'] = '회사연혁';

$GLOBALS["lang"]['Resource'] = '회사연혁';

$GLOBALS["lang"]['Resource Name'] = '이름 *';

$GLOBALS["lang"]['Resources'] = '지원하다';

$GLOBALS["lang"]['response'] = '관련 기사';

$GLOBALS["lang"]['Response'] = '관련 기사';

$GLOBALS["lang"]['responsibility'] = '책임';

$GLOBALS["lang"]['Responsibility'] = '책임';

$GLOBALS["lang"]['Restore my Licenses'] = '내 라이센스를 복원';

$GLOBALS["lang"]['Restrict to Private'] = '자주 묻는 질문';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Subnet에 제한';

$GLOBALS["lang"]['result'] = '제품정보';

$GLOBALS["lang"]['Result'] = '제품정보';

$GLOBALS["lang"]['Resulting Function'] = '결과 기능';

$GLOBALS["lang"]['Results'] = '이름 *';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = '장치의 목록을 검색';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Windows 2008와 같은 OS 이름을 가진 장치의 목록을 검색';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'id 88로 장치에 대한 모든 세부 사항을 검색합니다.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Windows를 실행하는 모든 장치를 검색합니다.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = '표준 열을 가진 모든 장치를 검색';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'hostname에 의해 주문된 Windows를 실행하는 첫 번째 10 장치 검색';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = '속성 ID, IP, 호스트 이름, 도메인, 모든 장치에서 유형 검색';

$GLOBALS["lang"]['retrieved'] = '다운로드';

$GLOBALS["lang"]['Retrieved'] = '다운로드';

$GLOBALS["lang"]['retrieved_ident'] = '검색 Ident';

$GLOBALS["lang"]['Retrieved Ident'] = '검색 Ident';

$GLOBALS["lang"]['retrieved_name'] = '검색 이름';

$GLOBALS["lang"]['Retrieved Name'] = '검색 이름';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = '장치에서 검색 - Windows : Win32_ComputerSystemProduct, Linux : dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostvc/hostsummary, HP-UX:machinfo, 솔라리스:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Credentials의 목록을 검색';

$GLOBALS["lang"]['Retrieving or Creating'] = '연구 및 개발';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = '열 (devices.id, device.icon, device.type, device.name, device.ip, device.dns_fqdn, device.identification, device.description, device.manufacturer, device.os_family, device.status)의 기본 설정으로 장치의 컬렉션을 반환합니다.';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = '라우터에 설치된 모든 모듈 목록을 반환';

$GLOBALS["lang"]['Return an individual device details'] = '개별 기기를 반환\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = '{collection}의 목록을 반환합니다.';

$GLOBALS["lang"]['Returns a {collection} details.'] = '{collection} 세부 사항을 반환합니다.';

$GLOBALS["lang"]['Reunion'] = '지원하다';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001 요구사항에 대한 현재 관행';

$GLOBALS["lang"]['revision'] = '회사연혁';

$GLOBALS["lang"]['Revision'] = '회사연혁';

$GLOBALS["lang"]['risk_assesment_result'] = '위험 관리 결과';

$GLOBALS["lang"]['Risk Assesment Result'] = '위험 관리 결과';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = '위험 평가 및 치료';

$GLOBALS["lang"]['Risk Management'] = '위험 관리';

$GLOBALS["lang"]['Role'] = '사이트맵';

$GLOBALS["lang"]['roles'] = '제품정보';

$GLOBALS["lang"]['Roles'] = '제품정보';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = '롤은 Open-AudIT Enterprise 라이선스가 있는 경우에만 생성 및 편집할 수 있습니다. 대부분의 사용자의 경우, 역할의 기본 설정은 필요한 모든 것입니다.';

$GLOBALS["lang"]['Romania'] = '한국어';

$GLOBALS["lang"]['Romanian'] = '한국어';

$GLOBALS["lang"]['Room'] = '호텔소개';

$GLOBALS["lang"]['route'] = '오시는 길';

$GLOBALS["lang"]['Route'] = '오시는 길';

$GLOBALS["lang"]['Row'] = '주요 특징';

$GLOBALS["lang"]['Row Count'] = '줄 조사';

$GLOBALS["lang"]['row_position'] = '줄 위치';

$GLOBALS["lang"]['Row Position'] = '줄 위치';

$GLOBALS["lang"]['Rows'] = '사이트맵';

$GLOBALS["lang"]['ru_height'] = 'Ru 고도';

$GLOBALS["lang"]['Ru Height'] = 'Ru 고도';

$GLOBALS["lang"]['ru_start'] = 'Ru 시작';

$GLOBALS["lang"]['Ru Start'] = 'Ru 시작';

$GLOBALS["lang"]['rule_group'] = '규칙 그룹';

$GLOBALS["lang"]['Rule Group'] = '규칙 그룹';

$GLOBALS["lang"]['rules'] = '이름 *';

$GLOBALS["lang"]['Rules'] = '이름 *';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = '규칙은 기기가 발견되거나 감사 결과가 처리될 때 장치에 대하여 생성하고 실행됩니다. 규칙은 다른 속성에 따라 장치 속성을 설정하는 데 사용할 수 있습니다.<br/><br/>NOTE - 현재 우리는 /를 포함하는 규칙 입력 또는 출력을 삭제할 수 없습니다. 이것은 프레임 워크가 URL의 일부로 파싱하고 코드를 실행하기 전에 404을 반환하기 때문입니다. 이 작업 주위는 규칙 자체를 삭제하는 것입니다, 다음 입력 및 출력을 필요에 따라 다시. 다행히 입력 및 출력을 포함 / 드물게 (이제되지 않음).';

$GLOBALS["lang"]['Run Discovery'] = '디스커버리';

$GLOBALS["lang"]['Run Discovery on Devices'] = '장치에서 Discovery 실행';

$GLOBALS["lang"]['Run Your Discovery'] = '당신의 발견을 실행';

$GLOBALS["lang"]['Run a Command'] = '명령 실행';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '발견을 실행하고 알아 <b>어떤 네트워크?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = '입력하여 스크립트를 실행 <code>cscript test_windows_client.vbs</code> 콘솔에서.';

$GLOBALS["lang"]['Run this Command'] = '이 명령을 실행';

$GLOBALS["lang"]['runas'] = '다운로드';

$GLOBALS["lang"]['Runas'] = '다운로드';

$GLOBALS["lang"]['Running'] = '(주)';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Windows에서 Open-AudIT Apache Service 실행';

$GLOBALS["lang"]['Russian'] = '러시아';

$GLOBALS["lang"]['Russian Federation'] = '러시아 연방';

$GLOBALS["lang"]['Rwanda'] = '르네상스';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx 비트레이트';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx 비트레이트';

$GLOBALS["lang"]['rx_freq'] = 'Rx 프레스';

$GLOBALS["lang"]['Rx Freq'] = 'Rx 프레스';

$GLOBALS["lang"]['rx_level'] = 'Rx 수준';

$GLOBALS["lang"]['Rx Level'] = 'Rx 수준';

$GLOBALS["lang"]['rx_power'] = 'Rx 힘';

$GLOBALS["lang"]['Rx Power'] = 'Rx 힘';

$GLOBALS["lang"]['rx_profile'] = 'Rx 프로필';

$GLOBALS["lang"]['Rx Profile'] = 'Rx 프로필';

$GLOBALS["lang"]['SAN Audit'] = 'SAN 감사';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN 자동 발견';

$GLOBALS["lang"]['SELECT'] = '제품정보';

$GLOBALS["lang"]['SID'] = '사이트맵';

$GLOBALS["lang"]['SM Version'] = 'SM 버전';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = '사이트맵 이름 *';

$GLOBALS["lang"]['SNMP OID'] = '사이트맵';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP 버전';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP의 v3';

$GLOBALS["lang"]['SQL'] = '사이트맵';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (고급)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL 생성 문';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = '이 조건을 포함하지 SQL은 실행 될 위젯에서 실패합니다.';

$GLOBALS["lang"]['SSH'] = '사이트맵';

$GLOBALS["lang"]['SSH Key'] = '사이트맵 이름 *';

$GLOBALS["lang"]['SW Revision'] = 'SW 개정';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy, 영국';

$GLOBALS["lang"]['Saint Helena'] = '세인트 헬레나';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = '세인트 키츠와 네비스';

$GLOBALS["lang"]['Saint Lucia'] = '세인트루시아';

$GLOBALS["lang"]['Saint Martin'] = '세인트 마틴';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre 과 Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = '세인트빈센트와 그레나딘';

$GLOBALS["lang"]['Samoa'] = '주요 특징';

$GLOBALS["lang"]['san'] = '담당자: Ms.';

$GLOBALS["lang"]['San'] = '담당자: Ms.';

$GLOBALS["lang"]['San Marino'] = '산마리노';

$GLOBALS["lang"]['Sao Tome and Principe'] = '스파 & 웰빙 센터';

$GLOBALS["lang"]['Saturday'] = '·';

$GLOBALS["lang"]['Saudi Arabia'] = '사우디 아라비아';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = '파일 저장 및 실행. 당신은 그것을 설치하기 위해 관리자로 파일을 실행 확인 (오른쪽 클릭, 관리자로 실행).';

$GLOBALS["lang"]['Save as Default'] = '기본 설정';

$GLOBALS["lang"]['Save the downloaded file.'] = '다운로드 파일 저장.';

$GLOBALS["lang"]['scaling'] = '관련 상품';

$GLOBALS["lang"]['Scaling'] = '관련 상품';

$GLOBALS["lang"]['scan_options'] = '스캔 옵션';

$GLOBALS["lang"]['Scan Options'] = '스캔 옵션';

$GLOBALS["lang"]['Scan Options ID'] = '스캔 옵션 ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = '이 항구 (s)를 위한 검사 및 열려있는 검출한 경우에, SSH 커뮤니케이션을 위한 이 항구를 사용하십시오. 위의 사용자 정의 TCP 포트 목록에 추가됩니다 ( 이미 포함되지 않은 경우), 그래서 그 목록에 포함 할 필요가 없습니다. Comma 분리, 공간 없음.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'TCP 포트의 Nmap 상단 번호를 스캔합니다.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'UDP 포트의 Nmap 상단 번호를 스캔합니다.';

$GLOBALS["lang"]['schedule'] = '일정표';

$GLOBALS["lang"]['Schedule'] = '일정표';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = '계획된 장치 발견 및 보고는 Open-AudIT 전문가에게 overheads를 감소시키고 통찰력을 증가하는 것을 찾는 바쁜 IT 전문가를 위한 능률적인 해결책을 만듭니다.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - 발견, 보고 및 더 많은 것';

$GLOBALS["lang"]['scope'] = '관련 상품';

$GLOBALS["lang"]['Scope'] = '관련 상품';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Scope는 취약성 구성 요소의 원래 보안 권위를 넘어 자원에 영향을 미치는지 나타내는 권한 범위로 알려져 있습니다.<br/><br/>이 속성에 대한 유일한 두 가지 유효 값은';

$GLOBALS["lang"]['script_timeout'] = '스크립트 Timeout';

$GLOBALS["lang"]['Script Timeout'] = '스크립트 Timeout';

$GLOBALS["lang"]['scripts'] = '스크립트';

$GLOBALS["lang"]['Scripts'] = '스크립트';

$GLOBALS["lang"]['scsi'] = '사이트맵';

$GLOBALS["lang"]['Scsi'] = '사이트맵';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi 버스';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi 버스';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi 논리 단위';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi 논리 단위';

$GLOBALS["lang"]['scsi_port'] = 'Scsi 항구';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi 항구';

$GLOBALS["lang"]['Search'] = '이름 *';

$GLOBALS["lang"]['Search For a Device'] = '장치 검색';

$GLOBALS["lang"]['Searching Using DataTables'] = 'DataTables를 사용하여 검색';

$GLOBALS["lang"]['Second'] = '두 번째';

$GLOBALS["lang"]['secondary'] = '한국어';

$GLOBALS["lang"]['Secondary'] = '한국어';

$GLOBALS["lang"]['Secondary Text'] = '두 번째 텍스트';

$GLOBALS["lang"]['Secret Key'] = '비밀 키';

$GLOBALS["lang"]['section'] = '이름 *';

$GLOBALS["lang"]['Section'] = '이름 *';

$GLOBALS["lang"]['secure'] = '제품정보';

$GLOBALS["lang"]['Secure'] = '제품정보';

$GLOBALS["lang"]['Security Content Automation Protocol'] = '보안 콘텐츠 자동화 프로토콜';

$GLOBALS["lang"]['Security Level'] = '보안 수준';

$GLOBALS["lang"]['Security Name'] = '보안 이름';

$GLOBALS["lang"]['Security Status'] = '보안 상태';

$GLOBALS["lang"]['security_zone'] = '보안 영역';

$GLOBALS["lang"]['Security Zone'] = '보안 영역';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = '자세히 보기 NOTE - LDAP 서버의 자체 서명 인증서에 의해 발생할 수 있습니다. 우리는 미래 릴리스에서 이것을 허용하기 위해 노력하고 있습니다.';

$GLOBALS["lang"]['See our page on enabling'] = '고객지원';

$GLOBALS["lang"]['Seed Discoveries'] = '씨 디스커버리';

$GLOBALS["lang"]['seed_ip'] = '씨 IP';

$GLOBALS["lang"]['Seed IP'] = '씨 IP';

$GLOBALS["lang"]['seed_ping'] = '종자 Ping';

$GLOBALS["lang"]['Seed Ping'] = '종자 Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict 에 Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict 에 Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Subnet에 씨앗 제한';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Subnet에 씨앗 제한';

$GLOBALS["lang"]['Select'] = '제품정보';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = '관리자 선택 -> 작업 -> 이름 * 메뉴에서 작업.';

$GLOBALS["lang"]['Select All'] = '모두 보기';

$GLOBALS["lang"]['Select All Devices'] = '모든 장치 선택';

$GLOBALS["lang"]['select_external_attribute'] = '외부 특성';

$GLOBALS["lang"]['Select External Attribute'] = '외부 특성';

$GLOBALS["lang"]['select_external_count'] = '외부 조사';

$GLOBALS["lang"]['Select External Count'] = '외부 조사';

$GLOBALS["lang"]['select_external_type'] = '외부 선택 제품정보';

$GLOBALS["lang"]['Select External Type'] = '외부 선택 제품정보';

$GLOBALS["lang"]['select_external_value'] = '외부 선택 제품정보';

$GLOBALS["lang"]['Select External Value'] = '외부 선택 제품정보';

$GLOBALS["lang"]['select_internal_attribute'] = '내부 특성';

$GLOBALS["lang"]['Select Internal Attribute'] = '내부 특성';

$GLOBALS["lang"]['select_internal_count'] = '내부 조사';

$GLOBALS["lang"]['Select Internal Count'] = '내부 조사';

$GLOBALS["lang"]['select_internal_type'] = '내부 선택 제품정보';

$GLOBALS["lang"]['Select Internal Type'] = '내부 선택 제품정보';

$GLOBALS["lang"]['select_internal_value'] = '내부 선택 제품정보';

$GLOBALS["lang"]['Select Internal Value'] = '내부 선택 제품정보';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = '메뉴 선택 -> 관리 -> Baselines -> 기본 목록.';

$GLOBALS["lang"]['Select a Table'] = '테이블 선택';

$GLOBALS["lang"]['Select an accredited certification body'] = '인증기관 선택';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = '적절한 컨트롤 선택 및 적용 (Annex A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = '선택하기 <i>지원하다 보안 보안</i> 이름 *<br/><br/>액세스 권한 클릭 기본 설정';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = '선택하기 <i>이름 *</i> 탭 및 값 복사 <i>계정 관리</i> (단 URL 자체). Open-AudIT에 붙여넣기 <i>계정 관리</i> 이름 *';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = '선택하기 <i>이 계정</i> checkbox 및 계정 이름 및 암호를 제공합니다.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = '시작 메뉴 및 유형 선택 <i>서비스<.i>. 서비스 아이콘을 클릭합니다.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Auth Menthod의 유형을 선택하고 관련 정보를 입력합니다.';

$GLOBALS["lang"]['Self Delete'] = '자동 삭제';

$GLOBALS["lang"]['Senegal'] = '사이트맵';

$GLOBALS["lang"]['sensitivity'] = 'IR 정보';

$GLOBALS["lang"]['Sensitivity'] = 'IR 정보';

$GLOBALS["lang"]['September'] = '9 월';

$GLOBALS["lang"]['Serbia'] = '스낵 바';

$GLOBALS["lang"]['serial'] = '(주)';

$GLOBALS["lang"]['Serial'] = '(주)';

$GLOBALS["lang"]['serial_imei'] = '일련 Imei';

$GLOBALS["lang"]['Serial Imei'] = '일련 Imei';

$GLOBALS["lang"]['serial_sim'] = '직렬 심';

$GLOBALS["lang"]['Serial Sim'] = '직렬 심';

$GLOBALS["lang"]['series'] = '제품정보';

$GLOBALS["lang"]['Series'] = '제품정보';

$GLOBALS["lang"]['server'] = '계정 관리';

$GLOBALS["lang"]['Server'] = '계정 관리';

$GLOBALS["lang"]['server_id'] = '서버 ID';

$GLOBALS["lang"]['Server ID'] = '서버 ID';

$GLOBALS["lang"]['Server Is'] = '서버는';

$GLOBALS["lang"]['server_item'] = '서버 항목';

$GLOBALS["lang"]['Server Item'] = '서버 항목';

$GLOBALS["lang"]['Server Status'] = '서버 상태';

$GLOBALS["lang"]['Servers'] = '서버';

$GLOBALS["lang"]['Servers Only'] = '서버 만';

$GLOBALS["lang"]['service'] = '제품정보';

$GLOBALS["lang"]['Service'] = '제품정보';

$GLOBALS["lang"]['service_identifier'] = '서비스 Identifier';

$GLOBALS["lang"]['Service Identifier'] = '서비스 Identifier';

$GLOBALS["lang"]['service_level_a'] = '서비스 수준 A';

$GLOBALS["lang"]['Service Level A'] = '서비스 수준 A';

$GLOBALS["lang"]['service_level_b'] = '서비스 수준 B';

$GLOBALS["lang"]['Service Level B'] = '서비스 수준 B';

$GLOBALS["lang"]['service_network'] = '서비스 네트워크';

$GLOBALS["lang"]['Service Network'] = '서비스 네트워크';

$GLOBALS["lang"]['service_number'] = '서비스 번호';

$GLOBALS["lang"]['Service Number'] = '서비스 번호';

$GLOBALS["lang"]['service_pack'] = '서비스 팩';

$GLOBALS["lang"]['Service Pack'] = '서비스 팩';

$GLOBALS["lang"]['service_plan'] = '서비스 계획';

$GLOBALS["lang"]['Service Plan'] = '서비스 계획';

$GLOBALS["lang"]['service_provider'] = '회사 소개';

$GLOBALS["lang"]['Service Provider'] = '회사 소개';

$GLOBALS["lang"]['service_tag'] = '서비스 꼬리표';

$GLOBALS["lang"]['Service Tag'] = '서비스 꼬리표';

$GLOBALS["lang"]['service_type'] = '서비스 유형';

$GLOBALS["lang"]['Service Type'] = '서비스 유형';

$GLOBALS["lang"]['Service Under Windows'] = 'Windows의 밑에 서비스';

$GLOBALS["lang"]['service_version'] = '서비스 버전';

$GLOBALS["lang"]['Service Version'] = '서비스 버전';

$GLOBALS["lang"]['Set'] = '설치하기';

$GLOBALS["lang"]['set_by'] = '설정하기';

$GLOBALS["lang"]['Set By'] = '설정하기';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Discovery 기능에 의해 설정 - 일반적으로이 수동으로 설정하지 마십시오.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Audit_domain 또는 discover_domain 스크립트에 의해 설정합니다. 설정하지 마십시오.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = '내부 데이터의 자본화 된 버전에 대한 외부 텍스트를 설정합니다.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = '외부 텍스트를 Lowercase로 설정합니다.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = '외부 텍스트를 uppercase로 설정합니다.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = '목록 화면의 테이블의 크기 (일반 또는 컴팩트)를 설정합니다.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'AD에서 시스템을 삽입하려는 경우 이를 설정하면 연락할 수 없지만 그 날짜부터 AD에 의해 볼 수 있습니다.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'subnet에 Discovery 설정은 웹 인터페이스를 통해 일반 Discovery를 실행하는 거의 동일합니다. 추가 항목은 예정된 시간 및 일(s)이며 일정한 작업 자체의 이름입니다. 다른 종류의 credentials를 사용하여 여러 발견을 계획 할 수 있습니다.<br/><br/>Subnet Discovery에 의하여, Active Directory Discovery는 일, 시간 및 이름의 추가를 가진 정규적인 Active Directory Discovery로 단순히 동일한 분야입니다.<br/><br/>Open-AudIT Server가 수집가가가가 보고되면, 추가 드롭 다운이 제공됩니다. 작업이 실행되어야 하는 것을 지정할 수 있습니다. 디스커버리 작업 만 지원됩니다. 일반 디스커버리와 같은 아이템을 지정하지만, 이 작업을 실행하기 위해 alternate Collector를 제공합니다.';

$GLOBALS["lang"]['severity'] = '이름 *';

$GLOBALS["lang"]['Severity'] = '이름 *';

$GLOBALS["lang"]['severity_text'] = '비밀번호';

$GLOBALS["lang"]['Severity Text'] = '비밀번호';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severity는 계산됩니다. <code>base_score</code> 그리고 중 하나 일 수 있습니다: 없음, 낮은, 중간, 높은, 긴요한.';

$GLOBALS["lang"]['Seychelles'] = '주 메뉴';

$GLOBALS["lang"]['share'] = '지원하다';

$GLOBALS["lang"]['Share'] = '지원하다';

$GLOBALS["lang"]['Share Name'] = '공유 이름';

$GLOBALS["lang"]['shared'] = '이름 *';

$GLOBALS["lang"]['Shared'] = '이름 *';

$GLOBALS["lang"]['shared_name'] = '공유 이름';

$GLOBALS["lang"]['Shared Name'] = '공유 이름';

$GLOBALS["lang"]['shell'] = '사이트맵';

$GLOBALS["lang"]['Shell'] = '사이트맵';

$GLOBALS["lang"]['Ship Date'] = '선박 날짜';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped는 기본 항목의 세트입니다. 메뉴로 가기';

$GLOBALS["lang"]['short'] = '이름 *';

$GLOBALS["lang"]['Short'] = '이름 *';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '이 장치에서 모든 비 현재 데이터를 제거해야합니까?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = '이 파일 (또는 패턴)이보고 된 파일 제외에 사용되어야한다. 정상적으로, 감사 파일에, 이것은 설치됩니다 <code>y</code>·';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = '이 공급 업체가 FirstWave에서 취약점을 검색 할 때 사용됩니다.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = '원격 서비스에서 장치를 추가해야, 로컬.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '선택된 Org 및 Orgs 아이들에게이 라이센스를 적용해야합니까?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = '관리 소프트웨어가 감지되면 SAN을 감사해야 합니다.';

$GLOBALS["lang"]['Should we audit mount points.'] = '마운트 포인트를 감사해야 합니다.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'netstat 포트 (예, 아니, 서버 만) 감사해야 합니다.';

$GLOBALS["lang"]['Should we audit the installed software.'] = '설치된 소프트웨어를 감사해야 합니다.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '우리가 필터링 포트가 개방 포트가 될 것을 고려해야 - 따라서 장치가 붙어있는 것처럼이 IP를 플래그?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '오픈 포트를 고려해야 합니다. – 이 IP를 기기에 부착한 상태에서 끌어올릴 수 있습니까?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'hostname을 lowcase로 변환해야 합니다.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = '감사 결과에 따라 파일을 작성해야 합니다.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = '웹 인터페이스에서이 그룹을 노출해야합니다.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = '웹 인터페이스의 보고서 메뉴 아래 보고서 목록에서이 쿼리를 노출해야합니다.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = '웹 인터페이스의 보고서 메뉴 아래 보고서 목록에서이 쿼리를 노출해야합니다.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = '실행할 때 감사 스크립트 창을 숨길 필요가 있습니다.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = '잘못된 또는 자기 서명 SSL 인증서를 무시하고 결과를 어쨌든 제출해야합니다.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = '우리는 표적 기계에 Open-Scap를 설치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'VMware에서 알려진 가능성이 중복되는 경우에도 장치 기반 Mac 주소를 일치해야합니다.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'DNS fqdn에 기반한 장치와 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'DNS 호스트 이름에 근거한 장치와 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'UUID를 기반으로 기기와 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'dbus id를 기반으로 장치를 일치해야합니다.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = '우리는 그것의 fqdn에 근거를 둔 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = '호스트 이름과 UUID를 기반으로 기기와 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = '호스트 이름과 dbus id를 기반으로 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = '호스트 이름과 일련을 기반으로 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = '우리는 데이터를 가진 기존 장치가 없는 경우에 그것의 IP에 근거를 둔 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = '우리는 그것의 IP에 근거를 둔 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Mac 주소를 기반으로 장치를 일치해야합니다.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = '우리는 그것의 serial와 유형에 근거를 둔 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = '일련 번호에 근거를 둔 장치를 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'SNMP sysName과 serial에 근거한 장치만 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'SNMP sysName에 근거한 장치만 일치해야 합니다.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = '호스트 이름에 근거한 기기와 일치해야 합니다.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '우리는 그것을 검사하기 전에 IP를 ping해야합니까? ping에 응답하지 않는 경우,이 장치를 건너.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = '우리는 우리의 지역 장치에서 외부 체계를 대중화해야 합니다.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = '모든 DNS 이름을 검색해야 합니다.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '감사를 실행하고 제출해야합니다 (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDP 포트 161를 사용하여 SNMP를 테스트해야 합니다.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'TCP 포트 22을 사용하여 SSH 테스트해야 합니다.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCP 포트 135을 사용하여 WMI 테스트해야 합니다.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = '에이전트를 제거해야 (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = '시스템 또는 사용자 수준의 프록시를 사용하여 감사 결과를 제출하십시오.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'win32_product WMI class(Microsoft에서 권장하지 않음)를 사용해야 합니다.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = '이 방법을 사용하여 사용자 자격 증명을 인증합니다. 설정하기 <code>y</code> 또는 <code>n</code>·';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = '우리는이 방법을 사용하여 사용자가 역할을합니다. 제품정보 <code>use_auth</code> 설정하기 <code>y</code> 이용하기 설정하기 <code>y</code> 또는 <code>n</code>·';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = '외부 및 내부 장치와 일치하기 위해이 값을 사용합니다. 우리의 기본 통합은 IP와 UUID를 여기에 사용합니다. 외부와 내부 장치의 이러한 일치 중 하나 인 경우 우리는 동일한 장치로 간주합니다.';

$GLOBALS["lang"]['Show All'] = '모두보기';

$GLOBALS["lang"]['sid'] = '이름 *';

$GLOBALS["lang"]['Sid'] = '이름 *';

$GLOBALS["lang"]['sidebar'] = '사이드바';

$GLOBALS["lang"]['Sidebar'] = '사이드바';

$GLOBALS["lang"]['Sierra Leone'] = '시에라리온';

$GLOBALS["lang"]['Singapore'] = '싱가포르';

$GLOBALS["lang"]['Site A'] = '사이트 A';

$GLOBALS["lang"]['Site B'] = '사이트 B';

$GLOBALS["lang"]['site_hours_a'] = '사이트맵';

$GLOBALS["lang"]['Site Hours A'] = '사이트맵';

$GLOBALS["lang"]['site_hours_b'] = '사이트 시간 B';

$GLOBALS["lang"]['Site Hours B'] = '사이트 시간 B';

$GLOBALS["lang"]['size'] = '크기 (mm)';

$GLOBALS["lang"]['Size'] = '크기 (mm)';

$GLOBALS["lang"]['slaves'] = '인기있는';

$GLOBALS["lang"]['Slaves'] = '인기있는';

$GLOBALS["lang"]['Slovak'] = '슬로바키아';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = '슬로바키아 (슬로바키아)';

$GLOBALS["lang"]['Slovenia'] = '한국어';

$GLOBALS["lang"]['Slovenian'] = '한국어';

$GLOBALS["lang"]['Smart Status'] = '스마트 상태';

$GLOBALS["lang"]['smversion'] = 'Smversion의 특징';

$GLOBALS["lang"]['Smversion'] = 'Smversion의 특징';

$GLOBALS["lang"]['Sneaky'] = '뚱 베어';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp 기업 ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp 기업 ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise 이름';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise 이름';

$GLOBALS["lang"]['snmp_oid'] = '뱀 Oid';

$GLOBALS["lang"]['Snmp Oid'] = '뱀 Oid';

$GLOBALS["lang"]['snmp_timeout'] = '뱀 타임 아웃';

$GLOBALS["lang"]['Snmp Timeout'] = '뱀 타임 아웃';

$GLOBALS["lang"]['snmp_version'] = 'Snmp 버전';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp 버전';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = '그래서 스크립트는 recalcitrant 장치에서 작동하지 않습니다. 사이트맵 Windows, Linux 및 MacOS용 스크립트는 디버깅 인자를 모두 허용합니다. 이것은 스크립트 자체에서 설정할 수 있으며, 명령줄에 제공됩니다. 5로 설정된 옵션을 사용하여 스크립트를 실행하고 스크립트의 어떤 부분에 실패가 발생합니다. 예를 들어';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = '그래서 일반 단어에서 출발, 다른 옵션이 있는지 - 나는 당신이 물었다! 표준 Open-AudIT API에 의하여, 우리는 거르기를 위한 몇몇 통신수가 있습니다. 값을 precede 할 수있는 연산자는';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Open-AudIT credentials를 제공하는 문제가 있습니다. 나는 대답을 가지고 - 그때 기부! 물론, 나는 의미, 발견은 슬라이스 빵 이후 가장 좋은 것입니다. 당신은 시간이 앞서 알 필요가 없습니다 <i>네트워크</i>· 그러나 credentials를 제공하지 않고 장치에서 데이터를 추출 할 수 있습니까?<br/><br/>컴퓨터의 경우, 쉬운 옵션은 대상 기계에 적합한 감사 스크립트를 복사하고 일정을 실행하도록 설정한다. 위키에 더 많은 세부 사항. 이 기계는 당신이 발견을 실행 한 것처럼 그 일정에 Open-AudIT에 데이터를 보낼 것입니다. 이 장치는 단순히 일정에 감사 스크립트를 실행 (가인, 당신은 감사 스크립트를 읽을 수 있습니다) 사용자가 그것을 말하고 서버에 출력을 보냅니다. 자격은 전혀 없습니다.<br/><br/>그리고 지금 우리는 Windows를 위한 대리인이 있습니다. 실제 설치 에이전트의 장점은';

$GLOBALS["lang"]['socket'] = '관련 제품';

$GLOBALS["lang"]['Socket'] = '관련 제품';

$GLOBALS["lang"]['software'] = '소프트웨어';

$GLOBALS["lang"]['Software'] = '소프트웨어';

$GLOBALS["lang"]['Software Found Last 7 Days'] = '지난 7일 간 소프트웨어';

$GLOBALS["lang"]['Software Found Today'] = 'Software 오늘 발견';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software 어제 발견';

$GLOBALS["lang"]['software_key'] = '소프트웨어 키';

$GLOBALS["lang"]['Software Key'] = '소프트웨어 키';

$GLOBALS["lang"]['Software License Reporting'] = '소프트웨어 라이센스 Reporting';

$GLOBALS["lang"]['software_name'] = '소프트웨어 이름';

$GLOBALS["lang"]['Software Name'] = '소프트웨어 이름';

$GLOBALS["lang"]['Software Policies'] = '소프트웨어 정책';

$GLOBALS["lang"]['software_revision'] = '소프트웨어 개정';

$GLOBALS["lang"]['Software Revision'] = '소프트웨어 개정';

$GLOBALS["lang"]['software_version'] = '소프트웨어 버전';

$GLOBALS["lang"]['Software Version'] = '소프트웨어 버전';

$GLOBALS["lang"]['Solaris'] = '솔라리스';

$GLOBALS["lang"]['Solomon Islands'] = '솔로몬 제도';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, 소말리 공화국';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = '일부 컬렉션은 실행할 수 있습니다 - 쿼리, 기타 - 아래 참조.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = '이 페이지의 하단에 일부 예제가 있습니다. 모든 endpoints에는 최소 필요한 필드가 있습니다. 이 아래에 있습니다.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = '몇몇의 우리의 템플렛은 dataTables에 새로운 움직임을, 서버 측 처리를 사용하여 지원합니다. 이 massivley는 적재 시간을 개량합니다.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = '다른 오류는 LDAP 서버에 바인딩하려고 할 때 발생했습니다. 접촉할 수 있는 (즉, <i>연결하기</i> 위는 일했습니다), 그러나 다른 이유를 위해, 바인딩은 일어났습니다. LDAP 서버에서 로그를 확인합니다.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = '뭔가 잘못되었습니다. Open-AudIT는 읽을 수 없습니다 <i>한국어</i> 테이블.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = '뭔가 잘못되었습니다. Open-AudIT는 읽을 수 없습니다 <i>이름 *</i> 테이블.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = '때때로 Agentless discovery 다만 당신의 사용 케이스를 적합하지 않습니다. 어쩌면 PC는 꽉 방화벽이 있습니다. 어쩌면 발견이 예정될 때 네트워크에 있지 않습니다. 어쩌면 그들은 먼 노동자에 의해 사용됩니다. 어떤 경우, 이것은 에이전트가 도움이 될 수있는 곳입니다. 표적 기계에 그것을 설치하고 그것은 할 것입니다 <i>체크인</i> 스케줄에 Open-AudIT 서버와 작업을 수락합니다. 가장 일반적인 작업은 서버 요청은 자체 감사하고 결과를 보냅니다.';

$GLOBALS["lang"]['Sort'] = '제품정보';

$GLOBALS["lang"]['sound'] = '이름 *';

$GLOBALS["lang"]['Sound'] = '이름 *';

$GLOBALS["lang"]['source'] = '이름 *';

$GLOBALS["lang"]['Source'] = '이름 *';

$GLOBALS["lang"]['South Africa'] = '대한민국';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = '사우스 조지아와 사우스 샌드위치 제도';

$GLOBALS["lang"]['Spain'] = '이름 *';

$GLOBALS["lang"]['Spanish'] = '한국어';

$GLOBALS["lang"]['Specific to Azure.'] = 'Azure에 적합.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'OKTA에 적합.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = '스캔에서 제외될 대상 목록(공간 없음)을 지정합니다. 정상적인 Nmap 구문을 사용하는 목록에, 그래서 그것은 hostnames, CIDR netblocks, octet 범위, 등을 포함할 수 있습니다.';

$GLOBALS["lang"]['speed'] = '제품 정보';

$GLOBALS["lang"]['Speed'] = '제품 정보';

$GLOBALS["lang"]['speed_down_a'] = '속도 아래로 ·';

$GLOBALS["lang"]['Speed Down A'] = '속도 아래로 ·';

$GLOBALS["lang"]['speed_down_b'] = 'B 아래로 속도';

$GLOBALS["lang"]['Speed Down B'] = 'B 아래로 속도';

$GLOBALS["lang"]['speed_up_a'] = '속도 A';

$GLOBALS["lang"]['Speed Up A'] = '속도 A';

$GLOBALS["lang"]['speed_up_b'] = '속도 B';

$GLOBALS["lang"]['Speed Up B'] = '속도 B';

$GLOBALS["lang"]['sql'] = '사이트맵';

$GLOBALS["lang"]['Sql'] = '사이트맵';

$GLOBALS["lang"]['Sri Lanka'] = '스리랑카';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh 포트';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh 포트';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh 타임아웃';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh 타임아웃';

$GLOBALS["lang"]['Stage 1: Documentation review'] = '1 단계 : 문서 검토';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Stage 2 : 구현 및 효과 검토';

$GLOBALS["lang"]['Stand-Alone'] = '대 혼자';

$GLOBALS["lang"]['Standard'] = '주요 특징';

$GLOBALS["lang"]['standard_id'] = '표준 ID';

$GLOBALS["lang"]['Standard ID'] = '표준 ID';

$GLOBALS["lang"]['standards'] = '표준:';

$GLOBALS["lang"]['Standards'] = '표준:';

$GLOBALS["lang"]['standards_policies'] = '표준 정책';

$GLOBALS["lang"]['Standards Policies'] = '표준 정책';

$GLOBALS["lang"]['standards_results'] = '표준 결과';

$GLOBALS["lang"]['Standards Results'] = '표준 결과';

$GLOBALS["lang"]['start_date'] = '시작 날짜';

$GLOBALS["lang"]['Start Date'] = '시작 날짜';

$GLOBALS["lang"]['start_mode'] = '시작 형태';

$GLOBALS["lang"]['Start Mode'] = '시작 형태';

$GLOBALS["lang"]['Start a web browser and go to'] = '웹 브라우저를 시작하고 이동';

$GLOBALS["lang"]['started_date'] = '시작 날짜';

$GLOBALS["lang"]['Started Date'] = '시작 날짜';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = '2018년 6월 Google은 Google지도 플랫폼 API에 대한 유료 가격 모델을 구현했습니다. 너무 이른, 온건한 사용법을 가진 대부분의 사용자는 opCharts와 Open-AudIT Professional/Enterprise로 끼워넣어진 구글 지도를, 무료로 이용할 수 있었습니다. Googles 새로운 정책은 여기에 설명되어 있습니다.';

$GLOBALS["lang"]['Starts With'] = '시작하기';

$GLOBALS["lang"]['state'] = '주요 특징';

$GLOBALS["lang"]['State'] = '주요 특징';

$GLOBALS["lang"]['Stats'] = '통계 정보';

$GLOBALS["lang"]['status'] = '주요연혁';

$GLOBALS["lang"]['Status'] = '주요연혁';

$GLOBALS["lang"]['Storage'] = '제품 정보';

$GLOBALS["lang"]['storage_count'] = '저장 조사';

$GLOBALS["lang"]['Storage Count'] = '저장 조사';

$GLOBALS["lang"]['Storage area network'] = '스토리지 영역 네트워크';

$GLOBALS["lang"]['Storage-Area Network'] = '스토리지 영역';

$GLOBALS["lang"]['string'] = '스트레이트';

$GLOBALS["lang"]['String'] = '스트레이트';

$GLOBALS["lang"]['sub_resource_id'] = '서브 리소스 ID';

$GLOBALS["lang"]['Sub Resource ID'] = '서브 리소스 ID';

$GLOBALS["lang"]['sub_type'] = '서브 타입';

$GLOBALS["lang"]['Sub Type'] = '서브 타입';

$GLOBALS["lang"]['subject_key_ident'] = '제목 키 식별';

$GLOBALS["lang"]['Subject Key Ident'] = '제목 키 식별';

$GLOBALS["lang"]['Submit'] = '제출하기';

$GLOBALS["lang"]['Submit Online'] = '자주 묻는 질문';

$GLOBALS["lang"]['Submitted From'] = '제출하기';

$GLOBALS["lang"]['Subnet'] = '서브넷';

$GLOBALS["lang"]['Subnet Discoveries'] = '서브넷 디스커버리';

$GLOBALS["lang"]['Subscription ID'] = '구독 ID';

$GLOBALS["lang"]['suburb'] = '채용정보';

$GLOBALS["lang"]['Suburb'] = '채용정보';

$GLOBALS["lang"]['Success'] = '지원하다';

$GLOBALS["lang"]['Sudan'] = '이름 *';

$GLOBALS["lang"]['Sudo Password'] = '비밀번호';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (선택 사항)';

$GLOBALS["lang"]['suite'] = '한국어';

$GLOBALS["lang"]['Suite'] = '한국어';

$GLOBALS["lang"]['summaries'] = '관련 기사';

$GLOBALS["lang"]['Summaries'] = '관련 기사';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summaries는 데이터베이스에 대한 단일 쿼리입니다. <i>그룹으로</i> 명령. 이 간단한 방법을 사용하여 우리는 쉽게 가상으로 어떤 속성에 대한 요약을 만들 수 있습니다.<br/><br/>우리는 더 이상 각별 별도의 보고서가 필요하지 않습니다. <i>제품정보</i> 기기의. 우리는 이제 단순히 그룹에 의해 요약이 <i>장치. 제품정보</i> 그리고 결과를 보여줍니다. 목록에서 주어진 유형을 클릭하고 일치하는 장치를 볼 수 있습니다. 이 경우, 1개의 요약은 (주로) 78의 보고를 대체합니다 ( 78의 장치 유형입니다).<br/><br/>요약은 요약이 주어진 속성에 의해 그룹 항목에 설계되어있는 쿼리에 다릅니다. <i>공지사항</i> 실제 장치에 연결. 쿼리는 단순히 더 많은 링크없이 항목의 목록입니다. 위와 같이 - 이 요약의 결합 <i>보고서 + subreport</i>, 쿼리는 단순히 단일 보고서입니다.<br/><br/>Summaries에는 Open-AudIT 내에서 다른 리소스에 다른 컬렉션 템플릿이 있습니다. 이 템플릿은 예상대로 요약을 표시하고 다른 리소스의 수를 가진 버튼을 보여줍니다. 이 페이지는 Open-AudIT의 홈페이지가 될 수 있도록 설계되었습니다.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Summaries는 특정 일치하는 열에 의해 그룹 항목에 설계되어 개별 장치에 대한 링크를 제공합니다. Open-AudIT의 이전 버전에서, 이것은 두 개의 다른 항목이있을 것입니다 - 보고서 및 하위 저장소. 우리는 이제 우리가 요약을 호출하는 것과 같이 묶었습니다.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summaries는 drilldown 보고 기능을 제공합니다. 간단하고 직관적 인 강력한.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summaries는 Queries와 같은 인수를 취합니다.';

$GLOBALS["lang"]['Summary'] = '제품정보';

$GLOBALS["lang"]['Sunday'] = '주 메뉴';

$GLOBALS["lang"]['supplier'] = '제품 정보';

$GLOBALS["lang"]['Supplier'] = '제품 정보';

$GLOBALS["lang"]['Support'] = '지원하다';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = '지원 유형은 <code>subnet</code>· <code>seed</code> · <code>active directory</code>·';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = '법적 및 규제 요건 준수 지원';

$GLOBALS["lang"]['Suriname'] = '이름 *';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = '감시 감사: 인증 취득';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = '스파 & 웰빙 센터';

$GLOBALS["lang"]['Swaziland'] = '체류 시간';

$GLOBALS["lang"]['Sweden'] = '한국어';

$GLOBALS["lang"]['Swedish'] = '한국어';

$GLOBALS["lang"]['switch_device_id'] = '스위치 장치 ID';

$GLOBALS["lang"]['Switch Device ID'] = '스위치 장치 ID';

$GLOBALS["lang"]['switch_port'] = '스위치 항구';

$GLOBALS["lang"]['Switch Port'] = '스위치 항구';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = '스위스, 스위스 Confederation';

$GLOBALS["lang"]['Symptom'] = '증상';

$GLOBALS["lang"]['Syrian Arab Republic'] = '시리아 아랍 공화국';

$GLOBALS["lang"]['sysContact'] = '시즈문의';

$GLOBALS["lang"]['SysContact'] = '시즈문의';

$GLOBALS["lang"]['sysDescr'] = '카테고리';

$GLOBALS["lang"]['SysDescr'] = '카테고리';

$GLOBALS["lang"]['sysLocation'] = '시즈위치';

$GLOBALS["lang"]['SysLocation'] = '시즈위치';

$GLOBALS["lang"]['sysName'] = '이름 *';

$GLOBALS["lang"]['SysName'] = '이름 *';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID에 대하여';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID에 대하여';

$GLOBALS["lang"]['sysUpTime'] = '시즈업시간';

$GLOBALS["lang"]['SysUpTime'] = '시즈업시간';

$GLOBALS["lang"]['system_component'] = '시스템 구성';

$GLOBALS["lang"]['System Component'] = '시스템 구성';

$GLOBALS["lang"]['System-Area Network'] = '시스템 영역 네트워크';

$GLOBALS["lang"]['TX Bitrate'] = 'TX 비트레이트';

$GLOBALS["lang"]['TX Freq'] = 'TX 프레스';

$GLOBALS["lang"]['TX Level'] = 'TX 수준';

$GLOBALS["lang"]['TX Power'] = 'TX 힘';

$GLOBALS["lang"]['TX Profile'] = 'TX 프로필';

$GLOBALS["lang"]['Table'] = '제품정보';

$GLOBALS["lang"]['tag'] = '제품 정보';

$GLOBALS["lang"]['Tag'] = '제품 정보';

$GLOBALS["lang"]['tag_1'] = '태그 1';

$GLOBALS["lang"]['Tag 1'] = '태그 1';

$GLOBALS["lang"]['tag_2'] = '태그 2';

$GLOBALS["lang"]['Tag 2'] = '태그 2';

$GLOBALS["lang"]['tag_3'] = '태그 3';

$GLOBALS["lang"]['Tag 3'] = '태그 3';

$GLOBALS["lang"]['Tagalog'] = '다운로드';

$GLOBALS["lang"]['tags'] = '이름 *';

$GLOBALS["lang"]['Tags'] = '이름 *';

$GLOBALS["lang"]['Tags :: '] = '태그 :: ';

$GLOBALS["lang"]['Taiwan'] = '주요 특징';

$GLOBALS["lang"]['Tajikistan'] = '타지키스탄';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '모든 출력 및 동작을 적절한 상태로 유지하십시오.';

$GLOBALS["lang"]['Tanzania'] = '주요 특징';

$GLOBALS["lang"]['Target Computer'] = '대상 컴퓨터';

$GLOBALS["lang"]['task'] = '기타';

$GLOBALS["lang"]['Task'] = '기타';

$GLOBALS["lang"]['tasks'] = '기타';

$GLOBALS["lang"]['Tasks'] = '기타';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = '작업은 여러 가지 유형 중 하나가 될 수 있습니다: Baseline, Discovery, Report, Query, Summary or Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp 포트';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp 포트';

$GLOBALS["lang"]['Technical Details'] = '기술 정보';

$GLOBALS["lang"]['tenant'] = '한국어';

$GLOBALS["lang"]['Tenant'] = '한국어';

$GLOBALS["lang"]['Tenant ID'] = '카드 ID';

$GLOBALS["lang"]['Tennant ID'] = '제품 ID';

$GLOBALS["lang"]['ternary'] = '한국어';

$GLOBALS["lang"]['Ternary'] = '한국어';

$GLOBALS["lang"]['Test 1'] = '시험 1';

$GLOBALS["lang"]['Test 2'] = '시험 2';

$GLOBALS["lang"]['Test 3'] = '시험 3';

$GLOBALS["lang"]['Test Email'] = '시험 Email';

$GLOBALS["lang"]['test_minutes'] = '시험 분';

$GLOBALS["lang"]['Test Minutes'] = '시험 분';

$GLOBALS["lang"]['test_os'] = '시험 Os';

$GLOBALS["lang"]['Test Os'] = '시험 Os';

$GLOBALS["lang"]['test_subnet'] = '서브넷 테스트';

$GLOBALS["lang"]['Test Subnet'] = '서브넷 테스트';

$GLOBALS["lang"]['tests'] = '테스트';

$GLOBALS["lang"]['Tests'] = '테스트';

$GLOBALS["lang"]['Text'] = '이름 *';

$GLOBALS["lang"]['Thai'] = '뚱 베어';

$GLOBALS["lang"]['Thailand'] = '담당자: Mr. Li';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = '최고의 발견과 재고 도구로 여행을 시작해 주셔서 감사합니다.';

$GLOBALS["lang"]['Thanks to'] = '이름 *';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = '그것은! 당신은 당신이 필요로 할만큼 많은 장치의 속성을 편집했습니다.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = '더 보기 <i>제품정보</i> endpoint는 사용자에 부여되고 각 엔드포인트에 적용됩니다.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API는 쿠키를 사용합니다. 아래 URL로 POST를 전송하여 쿠키를 요청할 수 있습니다. 사용자 이름과 암호 속성 및 값 포함:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory 도메인에서 하위 도메인 목록을 검색합니다.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory 서버에서 하위넷 목록을 검색합니다.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = '애플리케이션 엔드포인트를 사용하면 장치(또는 장치)에 연결할 수 있는 응용 프로그램을 정의할 수 있습니다.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributes endpoint는 Open-AudIT의 다른 속성에 사용자 정의 된 값을 추가 할 수 있습니다. 현재이 기능은 클래스, 환경, 상태 및 유형 속성에서 작동합니다. 장치, 위치 및 Orgs의 유형 속성뿐만 아니라 Queries의 메뉴 범주. prvious types (Lkocation 보기) 중 하나의 항목을 볼 경우 유형 속성을 드롭다운 박스에서 선택해야합니다. 이 값이 저장되는 곳이다. Hence, 새로운 유형이 위치를 선택하도록 추가하려면 Attributes 기능을 사용하여 추가하십시오.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable 미터는 질문에 대한 답변을 캡처 <strong>이 취약점에 대한 공격자 automate 악용 이벤트를 여러 대상에 맞출 수 있습니까?</strong> kill chain의 1-4단계를 기반으로 합니다. 이 단계는 reconnaissance, 무기화, 납품, 및 악용 (Not Defined, 아니, 예)입니다.';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE는 CVE 목록에 잘못된 또는 인출으로 표시되었습니다. NVD에 남아 있지만 기본 검색 결과에서 제외됩니다.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE는 CVE 목록에 게시되었으며 NVD 데이터셋에 포함되어 있습니다. 초기 ingestion 만.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE는 초기 분석 후 업데이트되었습니다. NVD enrichment 자료는 개정되었습니다.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE 식별자.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE는 CVSS 점수, CWE 분류, 참조 태그 및 CPE 응용성에 능숙합니다.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE는 현재 자원 제약 또는 기타 이유로 인해 풍요로움을 위해 사전 제작되지 않습니다.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE는 NVD 분석가가에 의해 풍부하게합니다. 상세 메타데이터는 아직 없습니다.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = '이 아이템을 소유하는 클라우드. 관련 기사 <code>clouds.id</code>·';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = '장치 씨 디스커버리 유형은 네트워크 크롤러를 위한 가장 새로운 효과적인 방법, 당신이 필요로 하는 대로 당신의 네트워크를 좁게 또는 넓게 표적하는 당신을 주는 입니다. 그것은 빠르다, 그것은 작동합니다.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'The Discovery 스캔 우리가 배는 아래에 테이블에서 상세합니다. 위에, 기업 사용자는 이의 더 많은 것을 창조하거나 발송한 품목을 편집할 수 있습니다.';

$GLOBALS["lang"]['The Elevated User query'] = 'Elevated 사용자 쿼리';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = '실행 가능한 기능은 감사의 일부로 장치의 디스크를 스캔하고 모든 실행 가능한 파일이 패키지 관리자에 알려져 있는지 확인합니다. 패키지 관리자를 사용하고 있기 때문에, 기능은 Linux 대상 장치에만 적용되며, rpm 또는 deb 기반 배포만 가능합니다. 어떤 Redhat 또는 Debian 기반 작업을해야합니다.';

$GLOBALS["lang"]['The FROM'] = '이름 *';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Baseline을 실행하는 데 사용되는 그룹. 관련 기사 <code>groups.id</code>·';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = '연결 끝에 NTU의 장치 테이블 ( Device.name이 표시됩니다)의 ID. 관련 기사 <code>devices.id</code>·';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = '수입된 벤치 마크 정책의 ID.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = '위치 표의 ID ( 위치표는 표시될 것입니다) 연결의 끝. 관련 기사 <code>locations.id</code>· 위치는 보통 <code>FROM</code> 이름 *';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = '위치 표의 ID ( 위치표는 표시될 것입니다) 연결의 끝. 관련 기사 <code>locations.id</code>· B 위치는 보통입니다 <code>TO</code> 이름 *';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = '관련 장치의 ID (모든 경우). 관련 기사 <code>devices.id</code>·';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = '관련 발견의 ID. 연결하기 <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = '관련 유형의 항목의 ID.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = '이 orgs 부모의 ID. 연결하기 <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = '공급자가 제공하는 ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Cloud discovery에서 ID 검색.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = '이 수집가의 IP 주소는 서버와 통신하는 데 사용됩니다.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = '장치의 IP는 씨앗 발견을 시작합니다.';

$GLOBALS["lang"]['The IP of the external interface.'] = '외부 인터페이스의 IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = '내부 인터페이스의 IP.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 인증 과정과 핵심 요소.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = '이 링크를 제공하는 ISP 또는 Telco.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Mitre에서 JSON 레코드.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD 피드에서 JSON 레코드.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = '이 사용자의 LDAP OU (LDAP가 사용되는 경우).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP 서버는 연결할 수 없습니다. 모든 것. Open-AudIT 서버에서 설정할 수 있습니다. 올바른 포트가 Open-AudIT 서버에 열려 있습니다. Open-AudIT 서버에서 nmap이 표시됩니다. LDAP 서버 IP를 $ip로 구성합니다. 태그 :<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP 서버 유형은 유효하지 않습니다. 중 하나 <i>관련 링크</i> 또는 <i>공지사항</i>·';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP 서버가 연결되었고 사용자 자격 증명은 바인딩을 허용했습니다.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT 설치 프로그램은 필요한 경우, Nmap SetUID 설정을 포함하여 배포 저장소에서 Open-AudITs 의존성을 설치합니다. 이것은 SNMP (UDP 161) 탐지를 위해 non-root 사용자 요구됩니다. RedHat/CentOS 및 Debian/Ubuntu에서 지원됩니다. Nmap을 수동으로 설치해야 하는 경우:<br/><br/>RedHat/CentOS를 위해 (NOTE - 당신이 yum를 사용하여 격상시키는 경우에, 당신은 이것을 reapply 필요로 할 것입니다 <i>사이트맵</i> 설정).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = '이 네트워크를 포함하는 위치. 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD는 기본 상태를 할당했습니다.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = '국가 표준 및 기술 연구소는 연방 기술 기관입니다. 그들은 공식적인 기술, 측정 과학 및 기준을 전진합니다.';

$GLOBALS["lang"]['The Network to Discover'] = '네트워크 발견';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap 타이밍 preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS이 패키지에 대해보고해야합니다. 모든 것을 위한 공백. % sign %를 와일드 카드로 사용하십시오. os_group, os_family 및 os_name에 대해 테스트합니다.';

$GLOBALS["lang"]['The Open-AudIT API'] = '오픈 소스 API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = '연결된 클라우드의 Open-AudIT ID. 관련 기사 <code>clouds.id</code>·';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = '오시는 길 IT 서버 코드는 이 파일 내에서 exeucted.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = '오시는 길 IT 서버 코드는 이 기능 안에 exeucted.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP 생태계는 오픈소스 커뮤니티에 의해 개발된 다양한 경화 가이드와 구성 기본 라인을 포함한 다양한 보안 기본 요소의 평가, 측정 및 평가, 측정 및 시행을 지원하는 여러 도구를 제공합니다. 이러한 크기와 관계없이 조직의 요구에 가장 적합한 보안 정책을 선택할 수 있습니다.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP 프로젝트는 이 표준을 구현하고 처리하기위한 오픈 소스 도구 모음이며 2014 년 NIST의 SCAP 1.2 인증을 수상했습니다.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = '이 아이템을 소유하는 조직. 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '실행 관련 발견의 프로세스 식별자.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = '이 장치의 상단의 RU positon.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = '선반 특징은 조직화, 위치, 건물, 지면, 방 및 줄을 가진 당신의 선반 사용을 관리하고 시각화하기 위하여 이용됩니다.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP는 표준화된 방식으로 보안 데이터를 표현하고 조작하기 위한 사양입니다. SCAP는 연속 모니터링, 취약점 관리 및 보안 정책 준수 평가 보고서를 자동화하기 위해 콘서트의 여러 개별 사양을 사용합니다.';

$GLOBALS["lang"]['The SELECT'] = '제품정보';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = '쿼리의 SELECT 섹션은 전체 도트 표기를 사용하며 전체 도트 이름을 가진 필드를 요청해야 합니다. IE - 선택 장치. id AS `devices.id`. 각 필드는 이 패션에서 GUI 측면 속성 필터링을 활성화해야합니다.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SQL의 선택 섹션은 완전히 자격이 된 열을 포함하고 특정 열을 지정해야합니다.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP 커뮤니티 문자열.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 인증 Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 인증 프로토콜.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 개인 정보 보호 Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 개인 정보 보호 프로토콜.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 보안 수준.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 보안 이름.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 컨텍스트 엔진 ID (옵션).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 컨텍스트 이름 (선택 사항).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL은 포함 할 수 없습니다 <strong>WHERE @filter 또는</strong>· SQL은 실행되지 않습니다. 그러나 <strong>WHERE @filter와</strong> 수표는 허용됩니다.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT에서 사용되는 SQL 쿼리는 backtick의 사용을 요구합니다 - ` 문자 및 필드에 대한 표준 단일 견적. 대부분의 미국 Windows 키보드에서 backtick 키는 tilde ~와 함께 키보드의 왼쪽에 있습니다. US Mac 키보드에서 backtick 키는 SHIFT 키 옆에 있습니다. 표준 단일 따옴표는 여전히 illustrate의 예제로 값을 닫는 데 사용됩니다.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL 쿼리는 기본적으로 세 부분으로 끊어집니다.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudIT의 표준 기능은 시간이 지남에 따라 ISO 27001 인증을 완료할 때 필요한 질문을 완료합니다.';

$GLOBALS["lang"]['The URL of the external system.'] = '외부 시스템의 URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = '당신의 Open-AudIT의 URL 이 수집가가가가 보고서를 할 수 있도록하는 서버 (길래 슬래시 없음).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '감사 스크립트는 결과를 제출해야 합니다.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = '사용자 엔드포인트는 Open-AudIT 내에서 사용자 계정을 관리할 수 있습니다.';

$GLOBALS["lang"]['The WHERE'] = 'WHERE 소개';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'SQL의 WHERE 섹션 <em>지원하다</em> 제품 설명';

$GLOBALS["lang"]['The Windows'] = '윈도우';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows 로그는 다음과 같이 말할 수 있습니다.';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = '계정은 암호가 있어야 합니다. WMI는 빈 암호를 허용하지 않습니다.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = '계정 비밀번호는 "(double Quotes)"를 포함하지 않아야 합니다. 이것은 cscript (과 wscript)가 두 배 따옴표를 포함하는 인수 값을 구할 수 없기 때문입니다. 그들은 단순히 벗겨. 아니 (당신은 묻습니다) escaping 작동하지 않습니다. 이것은 cscript 제한이며 Open-AudIT와 아무것도 없습니다.';

$GLOBALS["lang"]['The actual full name of this user.'] = '이 사용자의 실제 이름.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT 서버의 주소는 페이지를 제출합니다.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = '관리자는 LDAP에 성공적으로 사용 된 자격 증명을 공급했습니다.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = '관리자는 LDAP 서버에 바인딩하는 자격 증명을 제공했지만 LDAP sevrer에 의해 허용되지 않았습니다. 두 배는 LDAP 서버에서 credentials 일을 검사하고, Open-AudIT LDAP 서버 입장에서 (또는 그(것)들을 검사합니다.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = '에이전트와 서버는 새로운 버전이 서버에 설치되는 경우 에이전트를 자체 업데이트하는 것이 충분히 지능적입니다 (업그레이딩 Open-AudIT 후).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = '에이전트는 감사 스크립트의 신선한 사본을 다운로드해야, 실행하고 서버에 결과를 제출.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = '이 응용 프로그램은 여기에 임시 감사 scrtips를 작성하고 대상 기계에 복사 한 다음 삭제합니다.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '관련 자료. 관련 기사 <code>baselines.id</code>·';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '관련 발견 (필수). 관련 기사 <code>discoveries.id</code>·';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = '시험의 속성 (from) <code>devices</code> 테이블).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = '테스트 속성 (아래에서 외부 필드 이름을 일치).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'discovery scan options의 속성은 아래와 같습니다.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = '사용자 정의를 기본으로하는 감사 스크립트.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = '감사 스크립트는 파일[ ] 배열을 사용하고 파일 내용을 검색합니다.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = '감사 스크립트 모두 debugging 인수를받습니다. 그런 스크립트를 실행하고 문제가 무엇인지 더 자세히 볼 수 있습니다. 당신이 그것을 알아낼 수없는 경우 - 우리가 여기있는 것은! 지원 케이스를 열고 우리는 시간에 달리는 것을 얻을 것입니다.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = '사용자를 검색하는 기본 경로.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = '아래 단계는 Open-AudIT에 대한 결함이 아니며 영향을 미칠 것입니다. <strong>이름 *</strong> 원격 WMI 및 / 또는 Windows를 사용하여 발견 응용 프로그램입니다.';

$GLOBALS["lang"]['The benchmark type.'] = '벤치 마크 유형.';

$GLOBALS["lang"]['The building the rack is located in.'] = '건물 선반은 안으로 있습니다.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '외부로 생성되는 장치의 산출 수.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT에서 생성될 수 있는 계산된 수.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = '클라이언트 ID는 Azure Active Directory 응용 프로그램의 ID입니다. 클라이언트 비밀은 당신이 그 응용 프로그램을주는 열쇠입니다.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = '수집가는 기본적으로 Open-AudIT의 전체 설치입니다. <i>회사 소개</i> 모드. 수집가는 네트워크에 발견을 실행하도록 설계되었습니다. 네트워크에만 제한이 없지만 필요한 서브넷당 일반적으로 수집가가가 될 것입니다. 수집가는 서버가 일정에 구동되고 지정된 네트워크에서 발견을 실행합니다.<br/>대기 중 Alone mode the Collector act as a independant server, 단순히 메인 서버에서 모든 장치를 전달.<br/><br/>일단 설치 및 설정되면, 수집가의 제어는 서버에서 수행됩니다 ( Stand Alone 모드에서).<br/><br/>수집가와 서버 사이의 전용 네트워크 포트는 80 또는 443 (TCP 연결은 수집가에서 서버로 설치)입니다. Open-AudIT 데이터베이스는 이 설치 사이에 공유되지 않습니다.<br/><br/>기본적으로 수집가 (스탠다드 혼자 모드 없음)는 서버에서 모든 발견 작업을 요청할 것입니다 5 분 (설정 항목 수집가_check_minutes를 사용하여 새로운 수집가에 이것을 구성 할 수 있습니다) 수집가에 대한 발견 작업이 0, 5, 10, 15, 기타 분 동안 예정되어야합니다.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = '수집가는 기본적으로 Open-AudIT의 전체 설치입니다. <i>회사 소개</i> 모드. 이 모드는 응용 프로그램을 단순화하고 집중하기 위해 노력의 눈에 띄는 기능을 줄일 수 있습니다. 그것은 로컬 네트워크 및 장치에 대한 정보를 수집하도록 설계되었습니다, 방화벽 및 / 또는 네트워크 트레이널은 서버의 문제입니다.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '수집가 내부 IP는 발견을 실행할 때 사용됩니다.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '외국 테이블에서 열 이름. 클래스, 환경, 상태, 유형 또는 menu_category 중 하나가 있어야 합니다.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = '대상 장치 또는 Open-AudIT 서버 코드에서 실행되는 명령.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = '클러스터의 구성은: <code>active/active</code>· <code>active/passive</code>· <code>N+1</code>· <code>N+M</code>· <code>N-to-1</code>· <code>N-to-N</code>· <code>other</code> 또는 공백.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '비밀번호 credentials가 SSH 열쇠인 경우에, 이것은 열쇠를 자물쇠로 열기 위하여 이용된 암호이고 선택적입니다.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = '사용자가 제공 한 자격 증명은 실패했습니다.';

$GLOBALS["lang"]['The credentials username.'] = '사용자 이름.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = '형식의 현재 날짜와 시간: 사이트맵 H:I:s.의';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y-m-d 형식의 현재 날짜.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Cloud Discovery의 현재 상태.';

$GLOBALS["lang"]['The current status of the discovery.'] = '발견의 현재 상태.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = '이 사용자의 기본으로 표시될 대시보드. 관련 기사 <code>dashboards.id</code>·';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = '데이터베이스에 저장된 데이터는 번역된 응용 프로그램에 표시되지 않습니다. 우리는 그것으로 자료를 떠나. 그러나, 당신을 중지하는 것은 아무것도 없다, 사용자, 데이터베이스에 항목의 이름 변경 (예를 들어) 당신의 언어.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = '입력된 데이터는 <code>LIKE</code> 항목, 아니 (API에 따라) <code>equals</code> 이름 * 또 다른 예 - 입력하면 <code>comput</code>, 그것은 아직도 모든 컴퓨터를 돌려보낼 것입니다. 우리가 사용하고 있기 때문에 <code>LIKE</code> 항목, 그것은 case-insensitive입니다.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = '데이터베이스 스키마는 사용자가 데이터베이스가있는 경우 응용 프로그램에 찾을 수 있습니다 :: 메뉴로 이동하여 권한 읽기 : Admin -> 데이터베이스 ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = '데이터베이스 버전 및 웹 버전은 일관성입니다.';

$GLOBALS["lang"]['The date of license expiration.'] = '라이센스 만료일.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = '이 날짜 소프트웨어는 제조업체에 의해 중단됩니다. 일반적으로 새 버전으로 교체. 유지 보수는 여전히 사용할 수 있습니다.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = '소프트웨어를 더 이상 업데이트하지 않고 효과적으로 중단 된 altogether. 유지 보수가 중단됩니다.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = '이 항목이 변경되거나 추가되었습니다 (읽기 만). NOTE - 서버에서 타임스탬프입니다.';

$GLOBALS["lang"]['The date/time when this result was created.'] = '이 결과가 생성된 날짜/시간.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '이 작업을 수행 할 때 달의 날 (* 매일).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = '이 작업이 실행되면 주일의 날 (* 매일).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = '디버그 수준 ( 명령 프롬프트 창에 출력 가능). 더 낮은 것은 0로 산출을 출력하지 않습니다.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = '기본 발견 스캔 옵션은 UltraFast 설정입니다.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = '이 방법으로 만든 모든 사용자에 할당 된 기본 언어.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = '장치는 온라인으로 간주되기 전에 Nmap에 응답해야합니다.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT 내의 장치. 관련 기사 <code>devices.id</code>·';

$GLOBALS["lang"]['The direct link for the script is'] = '스크립트에 대한 직접 링크는';

$GLOBALS["lang"]['The email address of the receiver'] = 'reciever의 이메일 주소';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'FirstWave의 엔터프라이즈 바이너리는 라이센스에 필요합니다. Open-AudIT 다운로드';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = '전체 관련 지형이 결과입니다.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = '악용 취약점은 취약점의 보안 권위를 넘어 리소스에 영향을 줄 수 있습니다. 이것은 일반적으로 특권 또는 신뢰 경계가 교차됩니다 (예를 들어, 컨테이너에서 호스트 OS에 escaping).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = '악용 취약점은 취약점으로 동일한 보안 기관 내에서만 리소스에 영향을 줍니다. 다른 말에서, 공격자의 행동은 원래의 신뢰 경계 내에서 유지.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '외부 참조 위치 ID. 클라우드 감사에 의해 일반적으로 대중화.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = '통합과 관련된 필드는 객체의 JSON 배열으로 데이터베이스에 저장됩니다. 각 필드에는 다음과 같은 속성이 있습니다.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT가 이 장치의 세부 사항을 검색 한 첫 번째 시간.';

$GLOBALS["lang"]['The floor the rack is located on.'] = '바닥은 선반에 있습니다.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '참고로 외국 테이블. 장치, 위치, orgs 또는 쿼리 중 하나가 있어야합니다.';

$GLOBALS["lang"]['The format of your data should be in the form'] = '데이터의 형식은 양식에 있어야합니다.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '출력에 사용 된 형식은 이메일입니다.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '그룹에 의해 완전히 자격이 된 열. NoteE: = 트래픽을 입력할 때, 이것은 빨간 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = '외부 시스템에 의해 반환된 완전히 자격이 된 이름. EG: NMIS를 위해 우리는 윤곽을 이용합니다. 이름 * 유형.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '완전히 자격이 된 table.column. 복수가 제공 될 수 있습니다, comma에 의해 분리 (공간 없음).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = '이 취약점을 테스트하는 생성 된 SQL 쿼리. 이 필드는 필수 쿼리를 수정할 수 있습니다.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'baseline이 런던 디바이스의 그룹.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '통합을위한 장치의 목록을 제공하는 그룹. 관련 기사 <code>groups.id</code>·';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '이 작업을 수행 할 때 일의 시간 (* 각 시간).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = '연결된 장치의 ID. 관련 기사 <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = '데이터베이스의 식별자 컬럼 (integer).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = '이 기준의 중요성 ( 아직 사용되지 않음).';

$GLOBALS["lang"]['The integer of severity.'] = '영원의 정수.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = '내부 값, 이 형식으로 재 포맷.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth 방법의 IP 주소.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = '웹 인터페이스를 사용자에게 번역하는 언어.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '마지막 날짜와 시간이 항목이 실행되었습니다 (읽기 만).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT가 이 장치의 세부 사항을 검색하는 마지막 시간.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = '마지막으로이 벤치 마크가 실행되었습니다.';

$GLOBALS["lang"]['The last time this integration was run.'] = '마지막으로이 통합이 실행되었습니다.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = '라이센스 엔드포인트는 기기에서 발견된 라이센스 수를 추적할 수 있습니다.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = '연결 끝에 공급자에 의해 할당된 선 번호.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = '위치 선반에 있습니다. 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['The locations address.'] = '위치 주소.';

$GLOBALS["lang"]['The locations area.'] = '위치 영역.';

$GLOBALS["lang"]['The locations city.'] = '위치 도시.';

$GLOBALS["lang"]['The locations country.'] = '위치 국가.';

$GLOBALS["lang"]['The locations district.'] = '위치 지구.';

$GLOBALS["lang"]['The locations latitude.'] = '위치 위도.';

$GLOBALS["lang"]['The locations level.'] = '위치 수준.';

$GLOBALS["lang"]['The locations longitude.'] = '위치 경도.';

$GLOBALS["lang"]['The locations phone.'] = '전화번호';

$GLOBALS["lang"]['The locations postcode.'] = '위치 우편 번호.';

$GLOBALS["lang"]['The locations region.'] = '지역.';

$GLOBALS["lang"]['The locations room.'] = '위치 방.';

$GLOBALS["lang"]['The locations state.'] = '위치 상태.';

$GLOBALS["lang"]['The locations suburb.'] = '위치 교외.';

$GLOBALS["lang"]['The locations suite.'] = '위치 스위트.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = '디바이스 매칭의 논리는 device_helper.php 파일에 포함되어 있으며, Linux 설치는 여기에서 찾을 수 있습니다.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Machine-default 권한 설정은 COM Server 응용 프로그램에 대한 로컬 활성화 권한을 부여하지 않습니다.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '최대 육체적인 무게 (KGs에서) 이 선반은 붙들 수 있습니다.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = '최대 총 BTUs 이 선반은 평가됩니다.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = '속성에 대한 최소 필수 속성은';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = '이 작업을 수행 할 때 시간의 분 (* 각 분).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = '이 작업을 수행 할 때 년의 달 (* 매월).';

$GLOBALS["lang"]['The name given to this item.'] = '이 항목에 주어진 이름.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = '이 항목에 주어진 이름. 이상적으로 그것은 독특합니다.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = '이 사용자에 주어진 이름 ( login에 사용). 이상적으로 그것은 독특합니다.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = '관련 구름의 이름 (필수).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = '소프트웨어 패키지의 이름, Open-AudIT에 의해 감사. % sign %를 와일드 카드로 사용하십시오.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = '마지막으로 바뀌거나이 항목을 추가하는 사용자의 이름 (읽기 만).';

$GLOBALS["lang"]['The name provided by the provider.'] = '공급자가 제공하는 이름.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = '형식의 네트워크 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = '네트워크 하위넷은 발견을 실행합니다.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = '새로운 에이전트는 VBScript의 depreciation에 대한 준비에 이전 감사 스크립트의 PowerShell 버전을 실행 (예, 그것은 오).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = '이 장치의 수는 점유합니다.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = '관련 위치의 수. 관련 기사 <code>locations.cloud_id</code>·';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = '관련 네트워크의 수. 관련 기사 <code>networks.cloud_id</code>·';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = '이 클라우드에서 감사된 장치의 수. 관련 기사 <code>devices.cloud_id</code> · <code>devices.serial</code>·';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave에 의해 개최되는 중요한 취약점의 수 (당신의 데이타베이스에 아닙니다).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = '이 발견에 의해 발견 된 장치의 수.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = '관련 그룹에 있는 장치의 수.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '이 클라우드의 수는 실행 상태입니다. 관련 기사 <code>devices.cloud_id</code> · <code>devices.instance_state</code>·';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '이 클라우드의 수는 중지 상태입니다. 관련 기사 <code>devices.cloud_id</code> · <code>devices.instance_state</code>·';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = '이 구름에 있는 장치의 수. 관련 기사 <code>devices.cloud_id</code>·';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = '이 벤치 마크가 실행될 수 있습니다. 관련 기사 <code>benchmarks.devices</code>·';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = '이 발견을 제한하는 장치 수.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave에 의해 개최 된 높은 severity 취약점 수 (당신의 데이터베이스에 아닙니다).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave에 의해 개최되는 저소음 취약점 수 (당신의 데이타베이스에 아닙니다).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave에 의해 개최되는 중력 취약점 수 (당신의 데이타베이스에 아닙니다).';

$GLOBALS["lang"]['The number of purchased licenses.'] = '구매된 라이선스의 수.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = '시도하고 표적 IP와 통신하는 초의 수.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'FirstWave에 의해 개최되는 severity 없이 취약점의 수 (당신의 데이타베이스에 아닙니다).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = '오프셋은 데이터를 반환하려는 장치의 수입니다.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = '필수 권한 / 정책 이름 (우리 테스트에서)은';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = '선택적인 이차 란. 참고 : = 트래픽을 입력하면 노란색 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = '선택적 세번째 열. 참고 : = 트래픽을 입력하면 녹색 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = '정보 검색 순서는 snmp, ssh, wmi입니다.';

$GLOBALS["lang"]['The orientation of this device.'] = '이 장치의 방향.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = '비밀번호 (사용자가 스크립트를 실행하지 않는 경우).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'dn_account 속성의 암호입니다.';

$GLOBALS["lang"]['The password used to access the external system.'] = '외부 시스템에 접근하는 암호.';

$GLOBALS["lang"]['The path to the file or directory.'] = '파일이나 디렉토리의 경로.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = '파일이나 디렉토리의 경로. 감독은 트레일 슬래시로 끝납니다.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = '랙의 물리적 깊이 (CM에서).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = '랙의 물리적 높이 (CM에서).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = '현재 선반의 물리적 무게 (KGs에서).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = '빈 때 랙의 물리적 무게 (KGs에서).';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = '랙의 물리적 폭 (CM에서).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'pod (if any) 이 랙의 일부입니다.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = '전원 회로 이 선반은 부착합니다.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = '이 위젯을베이스에 기본 데이터베이스 테이블.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = '저자화를위한 기본 방법 (사용자가 할 수있는 일)은 이제 사용자 역할에 근거합니다. 역할은 admin, org_admin, reporter 및 기본값으로 사용자 정의됩니다. 각 역할에는 각 엔드포인트에 대한 허가 (Create, Read, Update, Delete) 세트가 있습니다. 선적으로 표준 역할은 사용 케이스의 99.9 %를 커버해야합니다. 추가적인 역할을 정의하고 기존의 역할은 Open-AudIT Enterprise에서 활성화됩니다.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = '이 큐 항목의 프로세스 식별자.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = '기기에 대한 세부 정보를 검색하기 위해 마지막으로 사용 된 프로세스';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = '이 라이센싱 페이지의 목적은 오픈 소스 작품에 따라 제품을 포함한 Firstwave Commercial 제품에 포함된 제품 및 라이센스를 나열하는 것입니다. Open-AudIT는 AGPLv3 이하 Firstwave에서 사용하거나 상업적 이용 약관에 따라 Enterprise 및 Professional 기능 라이선스를 취득한 후 Firstwave에서 라이선스를 부여합니다. FirstWave에서 다운로드 할 때 Open-AudIT는 다음과 같은 라이브러리 및 프로젝트를 포함 할 수 있습니다.';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = '통합을위한 장치의 목록을 제공하는 쿼리. 관련 기사 <code>queries.id</code>·';

$GLOBALS["lang"]['The rack asset number.'] = '선반 자산 번호.';

$GLOBALS["lang"]['The rack asset tag.'] = '랙 자산 태그.';

$GLOBALS["lang"]['The rack bar code.'] = '선반 바코드.';

$GLOBALS["lang"]['The rack model.'] = '선반 모형.';

$GLOBALS["lang"]['The rack serial.'] = '선반 serial.';

$GLOBALS["lang"]['The rack series.'] = '선반 시리즈.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = '선반 이 장치는 안으로 있습니다. 관련 기사 <code>racks.id</code>·';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = '식별된 보안 취약점 해결 및 수정의 권장 프로세스. 일반적으로 패치, 업데이트, 기타 조치를 적용하여 취약점에 의해 발생하는 위험을 제거 할 수 있습니다.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = '디렉토리의 일반 도메인 표기. 사이트맵 <code>open-audit.lan</code>·';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = '요청된 속성은 comma-separated 목록에 있어야 합니다. 속성은 완전히 자격이 있어야 합니다 - ie, system.hostname (만 호스트명).';

$GLOBALS["lang"]['The result of the command.'] = '명령의 결과.';

$GLOBALS["lang"]['The room the rack is located in.'] = '방은 선반에 있습니다.';

$GLOBALS["lang"]['The row the rack is located in.'] = '행 선반은 안으로 있습니다.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP 서버에서 그룹 검색이 실패했습니다. LDAP 서버 로그를 확인합니다. LDAP 서버에서 이러한 그룹 ( 역할 및 orgs)을 생성하고 LDAP 사용자에게 할당 된 LDAP 사용자?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API 키와 함께 사용되는 비밀 키.';

$GLOBALS["lang"]['The software end-of-life date.'] = '소프트웨어 end-of-life 날짜.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = '소프트웨어 end-of-service-life 날짜.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '지정된 데이터베이스 테이블에서 특정 데이터베이스 열.';

$GLOBALS["lang"]['The specific database table.'] = '특정 데이터베이스 테이블.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = '표준 Nmap 타이밍 옵션. T4 (수입)에서 이전 설정.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = '표준 Nmap 타이밍 옵션. 우리는 일반적으로 - T4 (Aggressive)를 사용하여 괜찮은 광대역 또는 ethernet 연결을 권장합니다.';

$GLOBALS["lang"]['The status of this integration'] = '이 통합의 상태';

$GLOBALS["lang"]['The status of this queued item.'] = '이 누적 품목의 상태.';

$GLOBALS["lang"]['The steps below outline the process.'] = '아래 단계는 프로세스를 개요.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = '대상 IP 이 로그 항목 참조 (if any).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = '감사 대상 컴퓨터. "."는 localhost를 의미합니다.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = '결과 줄 당 생성되는 링크의 템플릿.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = '라인 차트의 하단의 텍스트 (만).';

$GLOBALS["lang"]['The text that is displayed.'] = '표시된 텍스트.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = '그런 후 타임스탬프,이 작업을 실행해야합니다. 예를 들어, 10am에서 2017 년 6 월 1 일 이후에 작업을 실행하면 설정 <code>2017-06-01 09:59:00</code>· 이 값은 0 패딩 (즉, 09, 9)이어야한다. 이 값 기본값은 <code>2000-01-01 00:00:00</code> 기본적으로, 예정된 작업은 다음 일정한 실행 시간에 실행됩니다.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '정상 10, 100 또는 1000 (또는 아무도) Nmap에 따라 일반적으로 TCP 포트.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '상단 10, 100 또는 1000 (또는 아무도) UDP 포트 일반적으로 Nmap에 따라 사용.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = '이 선반에 의해 총 BTU 산출.';

$GLOBALS["lang"]['The type of device.'] = '장치의 유형.';

$GLOBALS["lang"]['The type of organisation.'] = '조직의 유형.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = '선반 (compute, 힘, 네트워크, 등)의 유형.';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = '실행할 작업의 유형. 하나의 : 기본, 벤치 마크, 클라우드 발견, 발견, 통합, 보고서, 쿼리.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = '통합의 유형 (일반적으로 외부 체계 후에 지명되는).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = '압축되지 않은 상태는 포트가 접근 할 수 있음을 의미합니다. 그러나 Nmap은 열 또는 닫히는지 결정할 수 없습니다. ACK 스캔만, 방화벽 규칙을 지도하는 데 사용되며, 포트를 이 상태로 분류합니다. 윈도우 스캔, SYN 스캔, 또는 FIN 스캔과 같은 다른 스캔 유형의 필터 해제 포트를 스캔하면 포트가 열려 있는지 확인할 수 있습니다.';

$GLOBALS["lang"]['The unique identifier of this server.'] = '이 서버의 고유 식별자.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = '사용자 계정 이 수집가 사용. 관련 기사 <code>users.id</code>·';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP의 사용자는 역할 및 Orgs에 필요한 Open-AudIT 그룹의 직접 회원이어야합니다. Open-AudIT 그룹의 회원이 아닌 다른 그룹 회원입니다.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = '사용자는 LDAP에 있으며, 자격 증명은 유효하지만 Orgs의 Open-AudIT LDAP 그룹에 있지 않습니다.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = '사용자는 LDAP에 있으며 자격 증명은 유효하지만, 롤렉스의 Open-AudIT LDAP 그룹은 없습니다.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = '사용자는 LDAP에 있으며 자격 증명은 유효하지만 필요한 Open-AudIT LDAP 그룹에는 없습니다.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = '사용자는 이 Org와 일치하는 LDAP 그룹에 있습니다.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = '이 역할과 일치하는 LDAP 그룹에 있습니다.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = '사용자는 이 Org와 일치하는 LDAP 그룹에 없습니다.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = '사용자는 이 역할과 일치하는 LDAP 그룹에 없습니다.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'LDAP에 지정된 사용자이지만, Open-AudIT는 LDAP 그룹을 사용하도록 구성되지 않으며 사용자가 Open-AudIT 내에서 존재하지 않습니다. 자주 묻는 질문 <i>역할 LDAP 사용</i> Open-AudIT LDAP에서 Server 화면 또는 Open-AudIT 내에서이 사용자를 만들고 역할과 orgs를 할당합니다.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = '사용자명(Script를 실행하지 않는 경우).';

$GLOBALS["lang"]['The username used to access the external system.'] = '외부 시스템에 액세스하는 데 사용되는 사용자.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = '사용자는 LDAP에서 검색되지 않았습니다. LDAP 서버 로그를 확인합니다.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = '사용자 세부 사항은 LDAP에서 검색되었습니다.';

$GLOBALS["lang"]['The users email address.'] = '사용자 이메일 주소.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '이 사이트에서 작업의 일반적인 시간.';

$GLOBALS["lang"]['The value assigned to the item.'] = '아이템에 할당된 값.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = '이 특정 항목에 저장되는 값.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPE 항목에 따라 공급 업체 이름.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPE에서 가져온 공급 업체.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT가 설치되는 호스트의 웹 디렉토리 ( 트레일 슬래시 필요).';

$GLOBALS["lang"]['The widget at position '] = '위치의 위젯 ';

$GLOBALS["lang"]['The width of this device.'] = '이 장치의 폭.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = '그들의 OrgIDs 과 그들의 후손';

$GLOBALS["lang"]['Their OrgIDs only'] = '그들의 OrgIDs 만';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = '그들의 OrgIDs, ascendants 및 후손';

$GLOBALS["lang"]['Then'] = '다음 것';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = '그런 다음 메뉴로 이동하여 Open-AudIT에서 새로운 Auth 방법을 만듭니다 -> 관리자 -> Auth 방법 -> Auth 만들기. 이름 및 설정 제공 <i>제품정보</i> 엔트라';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = '그런 다음 Open-AudIT (unsupported)를 사용하여 고객이 직접 감사 데이터를 수신 할 수 있습니다. 팟캐스트 <strong>실패</strong>, 하지만 디스커버리를 사용하지 않는 경우 (주요 기능 Open-AudIT 주변 설계 되었습니다), 당신은 여전히 장치 데이터를 얻을 수 있습니다. cron을 사용하여 클라이언트에서 감사 스크립트를 직접 실행하거나 Windows Agent 기능을 사용하십시오 (Enterprise only).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'JSON으로 내보내는 버튼이 있습니다. 이것은 속성의 장치 테이블 만 표시합니다. 모든 관련 부품 테이블을 가진 장치를 수출하기 위하여, 장치 세부사항을 전망하고, 그 후에 추가하십시오';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = '각 개별 장치를 수동으로 편집 할 필요가 없습니다.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Linux 서버에서 Open-AudIT를 실행하면 아무것도 할 필요가 없습니다.<br/><br/>Windows 클라이언트는 다만 벌금이 있고 특별한 행동이 요구되지 않습니다, 그러나.... 이 특징을 가능하게 하기 위하여 감사는 목표 Windows 체계에 국부적으로 실행되어야 합니다. 그것은 우리가 한 Windows 기계에 감사 스크립트를 실행할 때 WMI 통화로 원격으로 실행할 수 없습니다, 두 번째 Windows 기계를 대상으로. 이렇게하려면 대상 Windows 기계에 감사 스크립트를 복사하고 실행해야합니다. Apache가 실행한 서비스 계정은 로컬 시스템 계정입니다. 이 계정은 원격에 액세스 할 수 없습니다 (network 기반) 자원. 이 문제를 해결하기 위해 서비스는 다른 계정에서 실행해야합니다. 로컬 Administrator 계정을 사용하는 것이 가장 쉽습니다. 필수 권한이 있기 때문에 어떤 계정을 시도 할 수 있습니다. 로컬 시스템 계정은 로컬 Administrator 계정으로 많은 로컬 액세스가 있습니다.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = '이것은 단지 예입니다. 특정 LDAP에 맞게 이러한 속성을 조정할 필요가 있습니다.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = '이 매개 변수는 당신에게 유용하고 관련있는 것을 감사 할 수 있습니다, 처리 시간을 절약하고 주문 방식으로 네트워크를 발견 할 수 있습니다.';

$GLOBALS["lang"]['Thing'] = '한국어';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'mail.domain1.com 및 mail.domain2.com의 생각 - 같은 hostname.';

$GLOBALS["lang"]['Third'] = '상세 정보';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = '이 CVE는 존재한다면 기존의 CVE를 재평가하고 과도하게 됩니다.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = '이 Org에는 지정된 AD 그룹이 없습니다. Open-AudIT 내에서 역할 세부 정보를 확인하십시오.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = '이 Org에는 지정된 AD 그룹이 없습니다. Open-AudIT 내에서 역할 세부 정보를 확인하십시오. <span class=\'\"confluence-link\"\'>LDAP 서버에서 이러한 그룹 (orgs)을 생성하고 LDAP 사용자에게 할당 된 LDAP 사용자?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = '이 역할에는 AD 그룹이 지정되지 않습니다. Open-AudIT 내에서 역할 세부 정보를 확인하십시오.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = '이 속성은 JSON 객체로 저장됩니다. 모든 컬렉션의 목록이며 수집 이름을 포함 <code>c</code>· <code>r</code>· <code>u</code> 그리고, <code>d</code> 생성, 읽기, 업데이트 및 삭제를 나타냅니다. 이 작업은 특정 컬렉션에서 항목을 수행 할 수 있습니다.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = '이것은 varchar (a text field), 목록 (선택할 수 있는 값의 목록) 또는 날짜 일 수 있습니다.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = '이 코드는 큰 일에 의해 수행';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = '이 수집가는 보편적으로 독특한 식별자.';

$GLOBALS["lang"]['This column is required by'] = '이 열은 필수입니다.';

$GLOBALS["lang"]['This column is required by '] = '이 열은 필수입니다. ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = '이 묘사는 자동 대중화되고 이상적으로 남아 있어야 합니다.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = '이 엔드포인트는 네트워크 인프라의 일부인 연결을 추가 할 수 있도록 다양한 속성을 사용자 정의 할 수 있습니다. 이 연결이 위치하고 조직이 속한 위치를 지정합니다.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = '이 오류는 SMB1이 비활성화되었거나 대상 기계에서 제거 된 것을 나타냅니다. 이것은 Windows의 현대 버전을 위한 정상이고 당신은 SMB2 연결 시도가 실패할 때 이 메시지를 볼 것입니다. SMB2 연결이 실패하면 SMB1을 시도하여 Windows의 이전 버전에서 발견 할 수 있습니다. 대상 Windows 기계 경우 <i>이름 *</i> Windows의 오래된 버전을 실행하면 자격 증명이 실패했습니다. 그 경우, 참조';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = '이 오류는 가상 메모리 또는 paging 파일 할당량은 지정된 작업을 완료 할 수 있음을 나타냅니다. 나중에 다시 시도해야합니다.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = '이 오류는 부정확한, 존재하지 않거나 대상 Windows 기계에 원격으로 로그인하는 충분한 권한이 없습니다. 자격 증명을 확인하고 아래를 확인하십시오.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = '이 예제는 모든 모듈의 목록을 만듭니다.';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = '이 예제는 NMAP 스캔에 의해 발견 된 장치 및 개방 포트, 프로토콜 및 프로그램 목록을 만듭니다.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = '이 예제는 기능 또는 설명 필드가 공백 또는 구매 날짜가 기본값 인 장치 목록을 생성합니다.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = '이 예제 쿼리는 3 세 이상 장치 목록을 검색합니다. 쿼리는 오늘 사용';

$GLOBALS["lang"]['This example uses'] = '이 예제는';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = '이 기능은 Professional 또는 Enterprise 라이센스가 필요합니다.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = '이 기능은, 대상 기기에 영향을 미칠 수 있기 때문에 평소보다는 수동으로 활성화해야합니다. 이 기능을 활성화하려면 구성 항목 feature_executables를 변경하십시오. <i>이름 *</i>·';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = '이 파일은 실행해야 할 예정된 작업이 있는지 결정하는 응용 프로그램을 투표하기 위해 리눅스를 말합니다.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = '이 양식은 네트워크에서 장치를 발견하는 간단한 방법을 제공합니다. 더 많은 (많은) 상세한 선택권을 위해, 당신은 개별적으로 창조할 수 있습니다';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'PAExec이 작동하는 방법이기도 합니다.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = '이것은 글로벌 구성에서 discovery_use_org_id_match를 설정하여 사용 가능한 옵션입니다.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = '이것은 일반적으로 기본 열입니다. 그렇지 않으면 구성되지 않습니다. 참고: = 트래픽을 입력할 때, 이차 텍스트를 나타냅니다.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = '이것은 MySQL 시간으로 인해 발생합니다. MySQL은 일반적으로 호스트 장치 시간을 사용합니다. 당신은 이것에 의해 확인할 수 있습니다';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = '이것은 사용자가 설정할 수 있으므로 전 세계적으로 독특해야하지만, 확실히이 보증이 없습니다.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = '이것은 우리가 장치에 첨부 파일을 저장하는 디렉토리입니다.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Open-AudIT 문제를 해결 할 때 호출의 첫 번째 지점으로 사용됩니다. JSON 파일로 검색하려면 오른쪽 상단의 내보내기 버튼을 클릭할 수 있습니다 (지원 티켓 / 이메일에 추가될 수 있습니다.';

$GLOBALS["lang"]['This issue is under investigation.'] = '이 문제는 조사 중입니다.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = '이 항목은 선택된 속성의 값을 일치하거나 사용 될 쿼리의 ID를 포함해야합니다.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = '이 항목은 선택한 속성의 값을 일치해야합니다.';

$GLOBALS["lang"]['This license expires on'] = '이 라이선스는 만료됩니다.';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = '이 보안 권한은 구성요소 서비스 관리 도구를 사용하여 수정할 수 있습니다.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = '디버그 모드로 문제 해결 후 삭제 된 것이 많은 로그를 얻을 수 없습니다.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = '이것은 전 세계적으로 독특해야합니다. 그러나 나는 그것이 아닙니다.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = '이것은 선반의 1 또는 고도로 놓아야 합니다.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = '이것은 데이터베이스에 완전히 자격이 된 필드 이름이어야한다. 현재 시스템, 필드 및 자격 테이블에서 열이 지원됩니다. EG: 시스템.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = '이 상태는 Nmap이 포트가 닫히거나 필터링 여부를 결정할 수 없을 때 사용됩니다. IP ID idle 스캔에만 사용됩니다.';

$GLOBALS["lang"]['This will auto-populate.'] = '이것은 자동 Populate 것입니다.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '이 발견 스캔을 상당히 느리게합니다.';

$GLOBALS["lang"]['This will delete the current rows in the'] = '이것은 현재 행을 삭제합니다.';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = '이 라이선스를 영구적으로 삭제합니다.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = '이것은 대량 편집 양식을 보여줍니다. 이 양식에 설정된 모든 속성은 모든 선택된 장치에 적용됩니다. 한 번에 여러 속성을 설정할 수 있습니다.';

$GLOBALS["lang"]['Thursday'] = '주 메뉴';

$GLOBALS["lang"]['time_caption'] = '시간 Caption';

$GLOBALS["lang"]['Time Caption'] = '시간 Caption';

$GLOBALS["lang"]['time_daylight'] = '시간 일광';

$GLOBALS["lang"]['Time Daylight'] = '시간 일광';

$GLOBALS["lang"]['Time to Execute'] = '실행 시간';

$GLOBALS["lang"]['timeout'] = '시간 아웃';

$GLOBALS["lang"]['Timeout'] = '시간 아웃';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = '대상당 타임아웃 (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = '대상 당 타임아웃. 대상 응답을 위해 X 초를 기다립니다.';

$GLOBALS["lang"]['Timesatamp'] = '스크린 샷';

$GLOBALS["lang"]['Timestamp'] = '스크린 샷';

$GLOBALS["lang"]['timing'] = '연락처';

$GLOBALS["lang"]['Timing'] = '연락처';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-리스테';

$GLOBALS["lang"]['Title'] = '이름 *';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = '.env라는 새로운 파일에 (같은 디렉토리에서). 이제 새 파일과 uncomment (#를 다시 시작합니다) 아래 라인 (라인 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = '실제로 쿼리를 실행하려면 /execute을 추가하십시오. 따라서 /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = '기계 감사에, 당신은 credentials와 관리자 수준 접근이 있어야 합니다.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Active Directory 도메인에 원격 머신을 감사하려면 공급 된 사용자 (또는 제공되지 않은 경우, 사용자가 스크립트를 실행) 대상 기계 관리자 그룹 (또는 하위 그룹)의 구성원이어야합니다.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = '도메인에없는 원격 기계를 감사하려면 Administrator 계정을 사용해야합니다 (not <i>이름 *</i> 관리자 계정, <i>이름 *</i> 대상 PC에서 관리자 계정). #1 과 #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = '로컬 호스트를 감사하려면 공급된 자격 증명이 무시되고 연결은 스크립트를 실행하는 사용자의 세부 정보를 사용하여 이루어집니다.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = '소프트웨어를 비교하기 위해 우리는 이름과 버전을 확인합니다. 버전 번호가 형식에서 표준되지 않기 때문에 감사 결과를받을 때 우리는 각 패키지에 대한 소프트웨어 세부 사항의 나머지와 함께 데이터베이스에 저장하는 소프트웨어_padded라는 새로운 속성을 만듭니다. 이러한 이유로, 소프트웨어 정책을 사용하는 기본은 1.10 (최소)에 의해 감사되지 않은 장치에 대해 실행 할 때 작동하지 않을 것입니다. 소프트웨어 정책은 버전에 대해 테스트 할 수 있습니다. <i>이름 *</i>· <i>더 많은 것</i> 또는 <i>또는 더 큰 것 보다는</i>·';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = '새 항목을 만들려면 오른쪽 상단 모서리에서 Create 버튼을 클릭합니다.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = '리소스를 만들려면 필요한 데이터를 POST해야합니다.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = '원격 기계 (Vista 이상)를 활성화하기 위해 도메인에없는 감사, Administrators 그룹의 계정, 실제 관리자 계정보다 다른 UAC의 아래 섹션을 참조하십시오.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = '이 작업을 수행하려면 메뉴로 이동하여 새로운 Auth 항목을 만듭니다 -> 관리자 -> Auth -> Auth 메서드 생성.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Windows Powershell 스크립트를 실행하려면 Administrator로 명령 프롬프트를 열고 다음 명령을 사용하십시오.';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = '감사 스크립트를 실행하려면 터미널을 열고 다음 명령을 사용하십시오.';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = '속성 값으로 필터링하려면 속성 이름을 사용하십시오. 값이 우선해야 하는 연산자는';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Windows에서 Nmap을 설치하려면 Nmap 페이지를 방문하십시오.';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = '변경하려면 아래 단계를 따르십시오.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Tenant ID를 검색하려면. Azure Active Directory, 속성 및 Tenant ID에서 Azure 포털 클릭을 열어 디렉토리 ID로 표시됩니다. 즉, Microsoft 롤이 어떻게 작동하는지 알 수 없습니다.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = '키를 검색하려면 AWS 콘솔에 로그인하고 사용자 이름을 선택하십시오. 다음 My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = '특정 부품 항목을 반환합니다.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = '특정 장치에 대한 compnent 유형에 대한 모든 항목을 반환합니다.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = '구성 요소 유형에 대한 모든 항목을 반환합니다. 모든 소프트웨어를 원하신다면';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = '반전 종류에, minus를 삽입하십시오, 따라서';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = '대상 Windows PC에서 테스트 스크립트를 실행하려면';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = '통합되는 장치를 선택하려면 nmis_manage = y를 사용하지만, (예를 들어) 타입 = 라우터와 같이 할 수 있습니다. 더 복잡한 것을 선호한다면 그룹 또는 Query를 사용할 수 있습니다.';

$GLOBALS["lang"]['To sort by a database column, use'] = '데이터베이스 열 정렬, 사용';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = '이 엔터프라이즈 기능을 사용하기 위해, 당신은 평소처럼 Open-AudIT에서 사용자를 만들 필요가. 비밀번호가 필요하지 않습니다. 역할과 Orgs를 할당해야 합니다. Open-AudIT의 사용자들은 Entra와 일치해야 합니다. <i>사용자 이름</i> 이름 * 전체 이름 또는 이메일은 필요하지 않습니다 - 이것은 Entra에서 전파됩니다. 사용자가 모르는 경우 <i>사용자 이름</i>, 두려움은 아닙니다. Open-AudIT 및 Entra의 엔터프라이즈 응용 프로그램에서 새로운 Auth 방법을 만들 수 있으며 사용자가 사전 승인없이 Open-AudIT에 가입하려고 할 때 로그를 확인하고 로그를 확인할 수 있습니다. <i>사용자 이름</i> 당신의 convienence에 로그인.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = '이 엔터프라이즈 기능을 사용하기 위해, 당신은 평소처럼 Open-AudIT에서 사용자를 만들 필요가. 비밀번호가 필요하지 않습니다. 역할과 Orgs를 할당해야 합니다. Open-AudIT의 사용자 이름은 OKTA와 일치해야 합니다. <i>이름 *</i> 이름 * 전체 이름 또는 이메일은 필요하지 않습니다 - 이것은 OKTA에서 전파됩니다. 사용자가 모르는 경우 <i>이름 *<i>, 두려움은 아닙니다. Open-AudIT의 새로운 Auth Menthod 및 OKTA의 응용 프로그램을 만들 수 있으며 사용자가 사전 승인없이 Open-AudIT에 서명하려고 할 때 로그를 확인하고 로그를 볼 수 있습니다. <i>이름 *<i> 당신의 convienence에 로그인.<br/><p>그런 다음 메뉴로 이동하여 Open-AudIT에서 새로운 Auth 방법을 만듭니다 -> 관리자 -> Auth 방법 -> Auth 만들기. 이름 및 설정 제공 <i>제품정보</i> 으로 Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = '이 기능을 사용하려면 구성 항목 match_mac ( AWS 용) 및 match_hostname (Azure 용)을 활성화해야합니다. 이것은 클라우드 발견이 실행되는 첫 번째 시간을 자동으로 수행됩니다. Open-AudITs 일치 규칙에 대한 자세한 내용은 HERE : 일치 장치';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = '쿼리의 세부 사항을 보려면 /open-audit/index의 표준 URL 구조. php/queries/{$id}를 사용해야 합니다.';

$GLOBALS["lang"]['Togo'] = '토토사이트';

$GLOBALS["lang"]['Tokelau'] = '토켈라우';

$GLOBALS["lang"]['Tonga'] = '팟캐스트';

$GLOBALS["lang"]['toolbar_style'] = '툴바 스타일';

$GLOBALS["lang"]['Toolbar Style'] = '툴바 스타일';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = '상위 Nmap TCP 포트';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = '상위 Nmap TCP 포트. 상단 10, 100, 1000 포트는 Nmaps "탑 포트"옵션에 따라 스캔합니다.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = '탑 Nmap UDP 포트';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = '상위 Nmap UDP 포트. 상단 10, 100, 1000 포트는 Nmaps "탑 포트"옵션에 따라 스캔합니다.';

$GLOBALS["lang"]['Traditional Chinese'] = '전통 중국';

$GLOBALS["lang"]['Traffic Light'] = '교통 빛';

$GLOBALS["lang"]['Trinidad and Tobago'] = '트리니다드 토바고';

$GLOBALS["lang"]['Troubleshooting'] = '문제 해결';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAP 로그인';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = '오픈 투어 기업, 시간에 제한 없이 저희. 기업의 모든 특징. 20개의 장치에 한정됩니다.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Open-AudIT Enterprise의 무료 100 장치 라이센스를 갖춘 모든 최신 기능을보십시오. 자주 묻는 질문 ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'LDAP 사용자를 사용하여 로그인하십시오. 우리는 실패합니다 (그렇게, 왜 여전히 이것을 읽는가?). 다음, 위의 ther 파일에서 선을 언급.';

$GLOBALS["lang"]['Tuesday'] = '(주)';

$GLOBALS["lang"]['Tunisia'] = '카테고리';

$GLOBALS["lang"]['Turkey'] = '뚱 베어';

$GLOBALS["lang"]['Turkish'] = '뚱 베어';

$GLOBALS["lang"]['Turkmenistan'] = '체류 시간';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks와 Caicos 섬';

$GLOBALS["lang"]['Tuvalu'] = '프로젝트';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx 비트레이트';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx 비트레이트';

$GLOBALS["lang"]['tx_freq'] = 'Tx 프레스';

$GLOBALS["lang"]['Tx Freq'] = 'Tx 프레스';

$GLOBALS["lang"]['tx_level'] = 'Tx 수준';

$GLOBALS["lang"]['Tx Level'] = 'Tx 수준';

$GLOBALS["lang"]['tx_power'] = 'Tx 힘';

$GLOBALS["lang"]['Tx Power'] = 'Tx 힘';

$GLOBALS["lang"]['tx_profile'] = 'Tx 프로필';

$GLOBALS["lang"]['Tx Profile'] = 'Tx 프로필';

$GLOBALS["lang"]['type'] = '제품정보';

$GLOBALS["lang"]['Type'] = '제품정보';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = '유형: 이것은 varchar (a text field) 또는 목록 (선택할 수 있는 가치의 명부)일 수 있습니다.';

$GLOBALS["lang"]['Types of Networks'] = '네트워크의 유형';

$GLOBALS["lang"]['URL'] = '사이트 맵';

$GLOBALS["lang"]['uuid'] = '사이트맵';

$GLOBALS["lang"]['UUID'] = '사이트맵';

$GLOBALS["lang"]['udp_ports'] = 'Udp 포트';

$GLOBALS["lang"]['Udp Ports'] = 'Udp 포트';

$GLOBALS["lang"]['Uganda'] = '한국어';

$GLOBALS["lang"]['Ukraine'] = '주요 특징';

$GLOBALS["lang"]['Ukrainian'] = '한국어';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 감사 (문서 검토)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 감사 (단일 검토)';

$GLOBALS["lang"]['Undergoing Analysis'] = '분석';

$GLOBALS["lang"]['Unfiltered'] = '필터링';

$GLOBALS["lang"]['uninstall'] = '다운로드';

$GLOBALS["lang"]['Uninstall'] = '다운로드';

$GLOBALS["lang"]['Uninstall the Agent'] = '에이전트 제거';

$GLOBALS["lang"]['United Arab Emirates'] = '아랍에미리트';

$GLOBALS["lang"]['United Kingdom'] = '대한민국';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = '미국 민들레 섬';

$GLOBALS["lang"]['United States Virgin Islands'] = '미국령 버진 아일랜드';

$GLOBALS["lang"]['United States of America'] = '미국 미국';

$GLOBALS["lang"]['Unknown'] = '이름 *';

$GLOBALS["lang"]['unlock_pin'] = '잠금 핀';

$GLOBALS["lang"]['Unlock Pin'] = '잠금 핀';

$GLOBALS["lang"]['Unscheduled'] = '자주 묻는 질문';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = '5.2.0에서 사용되지 않음.';

$GLOBALS["lang"]['Unused.'] = '사용되지 않음';

$GLOBALS["lang"]['Update'] = '(주)';

$GLOBALS["lang"]['update_external_count'] = '외부 조사';

$GLOBALS["lang"]['Update External Count'] = '외부 조사';

$GLOBALS["lang"]['update_external_from_internal'] = '내부에서 외부 업데이트';

$GLOBALS["lang"]['Update External From Internal'] = '내부에서 외부 업데이트';

$GLOBALS["lang"]['update_internal_count'] = '내부 조사';

$GLOBALS["lang"]['Update Internal Count'] = '내부 조사';

$GLOBALS["lang"]['update_internal_from_external'] = '외부에서 내부 업데이트';

$GLOBALS["lang"]['Update Internal From External'] = '외부에서 내부 업데이트';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Open-AudIT에서 NMIS 장치 업데이트';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Open-AudIT 업데이트 장치에서 ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Open-AudIT 업데이트 NMIS의 장치';

$GLOBALS["lang"]['Update Vulnerabilities'] = '업데이트 취약점';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = '{collection} 항목의 속성을 업데이트하십시오.';

$GLOBALS["lang"]['Update attributes'] = '업데이트 속성';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '각 시간 발견이 IP로 실행되었습니다.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = '각각의 시간 발견은 Nmap에 의해 스캔 된 IP로 실행되었습니다.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '각 시간 발견은 우리가 감사 할 수있는 장치와 함께 실행되었습니다.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = '각 시간 발견은 우리가 쿼리 할 수있는 장치와 함께 실행되었습니다.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '각 시간 발견이 실행되었습니다.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '발견이 실행된 때마다 업데이트됩니다.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '각 시간마다 발견이 완료되었습니다.';

$GLOBALS["lang"]['Updating'] = '공유하기';

$GLOBALS["lang"]['Upgrade'] = '지원하다';

$GLOBALS["lang"]['Upload an audit result file'] = '감사 결과 파일 업로드';

$GLOBALS["lang"]['Upper Case'] = '위 케이스';

$GLOBALS["lang"]['uptime'] = '현재 위치';

$GLOBALS["lang"]['Uptime'] = '현재 위치';

$GLOBALS["lang"]['Urdu'] = '채용 정보';

$GLOBALS["lang"]['url'] = '한국어';

$GLOBALS["lang"]['Url'] = '한국어';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, 동부 공화국';

$GLOBALS["lang"]['usb'] = 'USB 어댑터';

$GLOBALS["lang"]['Usb'] = 'USB 어댑터';

$GLOBALS["lang"]['use'] = '제품 정보';

$GLOBALS["lang"]['Use'] = '제품 정보';

$GLOBALS["lang"]['use_authentication'] = '사용 인증';

$GLOBALS["lang"]['Use Authentication'] = '사용 인증';

$GLOBALS["lang"]['use_authorisation'] = '사용 권한';

$GLOBALS["lang"]['Use Authorisation'] = '사용 권한';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy 사용';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP 사용';

$GLOBALS["lang"]['Use SSH'] = 'SSH 사용';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = '안전한 사용 (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = '서비스 버전 탐지';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = '서비스 버전 탐지를 사용하십시오. 감지 포트가 열리면 설정하면 <i>₢ 킹</i>, Nmap는 이 항구에 달리는 서비스의 버전을 결정하는 시도에 있는 표적 장치를 쿼리할 것입니다.<br/>분류되지 않은 장치를 식별 할 때 유용합니다. 이것은 이전에 사용되지 않았습니다.';

$GLOBALS["lang"]['Use WMI'] = 'WMI 사용';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = '사용 방법 <i>로그인 방법</i> OIDC - OpenID 연결 및 <i>신청 유형</i> 웹 신청의. 이름 * <i>이름 *</i>·';

$GLOBALS["lang"]['Use for Authentication'] = '인증에 대한 사용';

$GLOBALS["lang"]['Use for Roles'] = '역할 사용';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = '표시할 때 표준 설치 옵션을 사용하고 클릭 <i>나는 동의한다</i>· <i>이름 *</i> · <i>설치하기</i> Nmap을 설치하는 버튼.';

$GLOBALS["lang"]['used'] = '이름 *';

$GLOBALS["lang"]['Used'] = '이름 *';

$GLOBALS["lang"]['used_count'] = '사용 설명서';

$GLOBALS["lang"]['Used Count'] = '사용 설명서';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'OpenLDAP에서만 사용됩니다.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = '단일 장치를 발견 할 때 내부적으로 사용됩니다.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = '단일 장치를 발견 할 때 내부적으로 사용됩니다. 관련 기사 <code>devices.id</code>·';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'LDAP 서버가 사용자 세부 사항을 포팅하도록 구성되었을 때 사용하는 경우 - 이것은 액세스가 있는 Orgs를 포함합니다. 사용자가 이 LDAP 그룹에 있다면, 이 org를 할당합니다.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'LDAP 서버가 사용자 세부 사항을 포팅하도록 구성되었을 때 사용하는 경우 - 이것은 할당 된 역할이 포함되어 있습니다. 사용자가 LDAP 그룹에 있다면, 이 역할을 할당합니다.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'OpenLDAP를 검색하면 그룹 구성원에게 uid를 일치시킵니다. 기본 값 <code>memberUid</code>· OpenLDAP에서만 사용됩니다.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = '통합 및 FirstWave 모니터링 애플리케이션과 함께 사용됩니다.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = '통합 및 FirstWave 모니터링 애플리케이션과 함께 사용됩니다. SNMP가 발견한 경우 y로 설정한다.';

$GLOBALS["lang"]['user'] = '사용자 이름';

$GLOBALS["lang"]['User'] = '사용자 이름';

$GLOBALS["lang"]['User DN'] = '사용자 DN';

$GLOBALS["lang"]['user_group'] = '사용자 그룹';

$GLOBALS["lang"]['User Group'] = '사용자 그룹';

$GLOBALS["lang"]['user_id'] = '사용자 ID';

$GLOBALS["lang"]['User ID'] = '사용자 ID';

$GLOBALS["lang"]['user_interaction'] = '사용자 상호 작용';

$GLOBALS["lang"]['User Interaction'] = '사용자 상호 작용';

$GLOBALS["lang"]['User Membership Attribute'] = '사용자 멤버십 Attribute';

$GLOBALS["lang"]['user_name'] = '사용자 이름';

$GLOBALS["lang"]['User Name'] = '사용자 이름';

$GLOBALS["lang"]['User Policies'] = '사용자 정책';

$GLOBALS["lang"]['Username'] = '사용자 이름';

$GLOBALS["lang"]['username'] = '사용자 이름';

$GLOBALS["lang"]['users'] = '이름 *';

$GLOBALS["lang"]['Users'] = '이름 *';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = '사용자는 Netstat 항구와 유사합니다. 사용자의 일치 이름, 상태 및 암호 세부 사항 (변경 가능, 만료, 필요) 그런 다음 정책 패스.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = '사용자, 역할 및 Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'CodeIgniter PHP Framework를 사용합니다.';

$GLOBALS["lang"]['Using'] = '사용 방법';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Auth를 위한 Entra 사용하기';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS 사용';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Auth를 위한 OKTA 사용하기';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = '형식 옵션을 사용하면 웹 브라우저를 사용할 때 유용하지만 JSON 형식으로 결과를 볼 수 있습니다. format=json을 추가하면 됩니다. 일반적으로 웹 브라우저는 헤더를 HTML로 설정하므로 그 경우 렌더링 된 페이지를 반환합니다. JSON을 검색하려면 API를 사용하여 header를 설정해야 합니다.';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = '보통 Mbs, 위치 A에서.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = '일반적으로 위치 B에서 Mbs.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = '일반적으로 Mbs, 위치 A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = '보통 Mbs, 위치 B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = '일반적으로 설정해야합니다 3.';

$GLOBALS["lang"]['Uzbekistan'] = '우즈베키스탄';

$GLOBALS["lang"]['VLAN'] = '다운로드';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID를';

$GLOBALS["lang"]['valid_from'] = '옵션 정보';

$GLOBALS["lang"]['Valid From'] = '옵션 정보';

$GLOBALS["lang"]['valid_from_raw'] = '유효한 원료에서';

$GLOBALS["lang"]['Valid From Raw'] = '유효한 원료에서';

$GLOBALS["lang"]['valid_to'] = '제품 정보';

$GLOBALS["lang"]['Valid To'] = '제품 정보';

$GLOBALS["lang"]['valid_to_raw'] = '견적 요청';

$GLOBALS["lang"]['Valid To Raw'] = '견적 요청';

$GLOBALS["lang"]['Valid Values'] = '유효한 가치';

$GLOBALS["lang"]['value'] = '제품정보';

$GLOBALS["lang"]['Value'] = '제품정보';

$GLOBALS["lang"]['Value Types'] = '가치 유형';

$GLOBALS["lang"]['values'] = '제품정보';

$GLOBALS["lang"]['Values'] = '제품정보';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = '가치: 자주 묻는 질문 <i>이름 *</i> 필드, 이것은 유효한 값의 comma 분리 된 목록이어야한다.';

$GLOBALS["lang"]['Vanuatu'] = '한국어';

$GLOBALS["lang"]['VarChar'] = '스낵 바';

$GLOBALS["lang"]['Varchar'] = '스낵 바';

$GLOBALS["lang"]['variable'] = '옵션 정보';

$GLOBALS["lang"]['Variable'] = '옵션 정보';

$GLOBALS["lang"]['Various'] = '기타 제품';

$GLOBALS["lang"]['vendor'] = '회사 소개';

$GLOBALS["lang"]['Vendor'] = '회사 소개';

$GLOBALS["lang"]['Vendor Report'] = '공급 업체';

$GLOBALS["lang"]['vendors'] = '회사 소개';

$GLOBALS["lang"]['Vendors'] = '회사 소개';

$GLOBALS["lang"]['Venezuela'] = '베네수엘라';

$GLOBALS["lang"]['Version'] = '이름 *';

$GLOBALS["lang"]['version_padded'] = '버전 패딩';

$GLOBALS["lang"]['Version Padded'] = '버전 패딩';

$GLOBALS["lang"]['version_raw'] = '버전 Raw';

$GLOBALS["lang"]['Version Raw'] = '버전 Raw';

$GLOBALS["lang"]['version_string'] = '버전 문자열';

$GLOBALS["lang"]['Version String'] = '버전 문자열';

$GLOBALS["lang"]['video'] = '한국어';

$GLOBALS["lang"]['Video'] = '한국어';

$GLOBALS["lang"]['Vietnam'] = '한국어';

$GLOBALS["lang"]['Vietnamese'] = '담당자: Jack';

$GLOBALS["lang"]['View'] = '- 연혁';

$GLOBALS["lang"]['View All'] = '모두 보기';

$GLOBALS["lang"]['View Details'] = '더 보기';

$GLOBALS["lang"]['View Device'] = '공지사항';

$GLOBALS["lang"]['View Discovery'] = 'View 디스커버리';

$GLOBALS["lang"]['View Policy'] = '공지사항';

$GLOBALS["lang"]['View Racks'] = '랙 보기';

$GLOBALS["lang"]['View the'] = '더 보기';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = '질문에서 발견을보기, 다음 상단 오른쪽 도구 모음에서 지원 버튼을 클릭합니다. 이 발견 설정, 구성 항목, 발견 장치 목록뿐만 아니라이 특정 발견에 대한 로그를 제공합니다.';

$GLOBALS["lang"]['View the release notes on the'] = '출시 노트 보기';

$GLOBALS["lang"]['Virtual Private Network'] = '가상 사설망';

$GLOBALS["lang"]['Virtual private network'] = '가상 사설망';

$GLOBALS["lang"]['Virtualisation'] = '가상화';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = '저희 YouTube 채널을 방문해 보세요.';

$GLOBALS["lang"]['vlan'] = 'Vlan의';

$GLOBALS["lang"]['Vlan'] = 'Vlan의';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID를';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID를';

$GLOBALS["lang"]['vm'] = '사이트맵';

$GLOBALS["lang"]['Vm'] = '사이트맵';

$GLOBALS["lang"]['vm_device_id'] = 'Vm 장치 ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm 장치 ID';

$GLOBALS["lang"]['vm_group'] = 'Vm 그룹';

$GLOBALS["lang"]['Vm Group'] = 'Vm 그룹';

$GLOBALS["lang"]['vm_ident'] = 'Vm 식별';

$GLOBALS["lang"]['Vm Ident'] = 'Vm 식별';

$GLOBALS["lang"]['vm_server_name'] = 'Vm 서버 이름';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm 서버 이름';

$GLOBALS["lang"]['vm_vendor'] = 'Vm 공급 업체';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm 공급 업체';

$GLOBALS["lang"]['vuln_status'] = 'Vuln 상태';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln 상태';

$GLOBALS["lang"]['vulnerabilities'] = '취약점';

$GLOBALS["lang"]['Vulnerabilities'] = '취약점';

$GLOBALS["lang"]['vulnerabilities_cache'] = '취약성 캐시';

$GLOBALS["lang"]['Vulnerabilities Cache'] = '취약성 캐시';

$GLOBALS["lang"]['Vulnerabilities and Results'] = '취약점 및 결과';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilities는 1 월 1 일 이전에 처음 출판되었습니다. 2025 (기본값). 몇 년 전에 취약점을 반환하지 않습니다. 설정에서 변경할 수 있습니다.';

$GLOBALS["lang"]['vulnerability_id'] = '취약점 ID';

$GLOBALS["lang"]['Vulnerability ID'] = '취약점 ID';

$GLOBALS["lang"]['Vulnerability Status'] = '취약점 상태';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - 소프트웨어 정책을 사용하여 기본을 만들 때, 현재 Centos 및 RedHat 패키지는 이름을 사용하여 커널을 패키지 <i>커맨드</i> · <i>커널드벨</i>· 이 이름과 다른 버전 concurrently 설치를 가진 다수 포장일 수 있습니다. Debian 기반 배포 사용 이름 <i>리눅스-image-3.13.0-24-generic</i>, 참고 버전 번호는 패키지 이름에 포함되어 있습니다. RedHat 기반 운영 체제는이 형식을 사용하고 이후 여러 가지 동일한 패키지 이름을 가지고 있습니다. <i>커맨드</i> · <i>커널드벨</i> 소프트웨어 정책에서. 향후 업데이트에 대응할 수 있습니다.';

$GLOBALS["lang"]['WHERE'] = '팟캐스트';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI 자격 요건';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = '그것을 완료하려면 다음 에이전트를 설치하기 위해 다음 줄에 붙여 넣으십시오.';

$GLOBALS["lang"]['wall_port'] = '벽 항구';

$GLOBALS["lang"]['Wall Port'] = '벽 항구';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis와 Futuna';

$GLOBALS["lang"]['Want to know more?'] = '더 알고 싶으신가요?';

$GLOBALS["lang"]['Warning'] = '제품정보';

$GLOBALS["lang"]['warranty'] = '제품 설명';

$GLOBALS["lang"]['Warranty'] = '제품 설명';

$GLOBALS["lang"]['warranty_duration'] = '보증 기간';

$GLOBALS["lang"]['Warranty Duration'] = '보증 기간';

$GLOBALS["lang"]['warranty_expires'] = '보증 Expires';

$GLOBALS["lang"]['Warranty Expires'] = '보증 Expires';

$GLOBALS["lang"]['warranty_status'] = '보증 상태';

$GLOBALS["lang"]['Warranty Status'] = '보증 상태';

$GLOBALS["lang"]['warranty_type'] = '보증 유형';

$GLOBALS["lang"]['Warranty Type'] = '보증 유형';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = '우리는 또한 스캔 전에 Ping 옵션이 있습니다 (긴 살았던 ARP 캐시와 라우터에 대한 임포트). 이것은 보통 좋은 아이디어입니다.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = '우리는 또한 우리의 활동 품목 (아래 순서에서 실행되는)가 있습니다:';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = '우리는 종종이 질문을하고 가장 대답은 확실히 <i>그것은 달려 있습니다</i>· 그것은 스캔 할 IP의 수에 따라 달라집니다, 네트워크 연결 속도, 스캔 한 장치의 속도, 스캔 한 장치의 유형, 테스트되고 개방형 서버의 속도. 우리는 그 변수를 입력하고 값을 반환 할 수있는 계산기가 없습니다. 그것은 단순히 너무 복잡합니다. 일반적으로 나는 내 발견을 제한 256 IP 주소 - ie, a /24 subnet. 우리는 고객이 16 / 16 하위넷 (65k 주소)을 스캔했으며 작업 일 수 있지만 장시간 걸릴 수 있습니다. 24 블록에서 스캔을 훨씬 더 낫습니다. 당신이 단순히 당신의 주소 범위가 무엇인지 알 수없는 경우, 그 다음이 씨앗 발견을위한 좋은 사례입니다.';

$GLOBALS["lang"]['We have more detailed instructions on'] = '우리는 더 상세한 지시가 있습니다';

$GLOBALS["lang"]['We have tests for:'] = '우리는 시험을 가지고 있습니다:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = '우리는 당신이 우리가 할만큼 유용 Open-AudIT를 찾을 희망.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = '우리는 초기 설정 기본 옵션과 스크립트의 기본 목록. 스크립트 목록은 /scripts에서 볼 수 있습니다. 이 기본 스크립트는 삭제할 수 없습니다. 필요한 경우 추가 스크립트를 만들 수 있습니다. 스크립트는 기존 스크립트 중 하나에 기반하고 사용자 정의 옵션이 적용됩니다. 스크립트는 메뉴에서 목록 페이지에서 다운로드 할 수 있습니다 : 발견 -> 감사 스크립트 -> 감사 스크립트 목록.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = '네트워크에서 기기에 효과적으로 대화할 수 있도록 몇 가지 자격 증명이 필요합니다.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = '우리는 단지 데이터의 최소 금액을 보내고 민감한 성격의 아무것도. 우리는 우리의 면허 자료 (이름, 유형, 등), 우리의 신청 자료 (이름, 버전, 플랫폼, 시간대, 등), 어떤 기록한 과실, 장치 유형의 조사 및 사용된 특징의 조사를 보냅니다. <i>이름 *</i> 환경은 장치가 있고 우리가 보내는 당신의 자료의 유일한 조각입니다. 그리고 장치의 유형 및 조사. 제조자, 모형 아닙니다. 우리는 특별한 아무것도 보냅니다. 네트워크 없음. IP 주소 없음. OS 버전 없음. 소프트웨어 이름 없음. UUID 및 서버 필드는 sha256 인코딩 (그래서 우리는 값을 알 수 없습니다). 우리는 제품을 개량할 필요가 있는 자료 다만 보냅니다. 우리는 당신이이 정보를 가진 모든 것에 이익을 볼 희망. 제품의 개선과 새로운 기능에 집중하는 방법에 대한 안내 방향을 제공합니다.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = '우리는 실제 복구 쿼리를 테스트하기위한 Postman라는 Google 크롬 확장을 사용하는 경향이있다. 설치하고 테스트 할 수 있습니다.';

$GLOBALS["lang"]['Web'] = '웹 사이트';

$GLOBALS["lang"]['Web Application Routes'] = '웹 신청 노선';

$GLOBALS["lang"]['Web Server Discovery'] = '웹 서버 디스커버리';

$GLOBALS["lang"]['Webserver'] = '웹 서버';

$GLOBALS["lang"]['Website'] = '웹 사이트';

$GLOBALS["lang"]['Wednesday'] = '한국어';

$GLOBALS["lang"]['weight'] = '무게:';

$GLOBALS["lang"]['Weight'] = '무게:';

$GLOBALS["lang"]['weight_current'] = '무게 현재';

$GLOBALS["lang"]['Weight Current'] = '무게 현재';

$GLOBALS["lang"]['weight_empty'] = '무게 빈';

$GLOBALS["lang"]['Weight Empty'] = '무게 빈';

$GLOBALS["lang"]['weight_max'] = '무게 최대';

$GLOBALS["lang"]['Weight Max'] = '무게 최대';

$GLOBALS["lang"]['Welcome'] = '제품 정보';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Dashboard 정보';

$GLOBALS["lang"]['Welcome to'] = '제품정보';

$GLOBALS["lang"]['Western Sahara'] = '양 사하라';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '나는 Credentials가없는 경우 무엇을 기대할 수 있습니까?';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Open-AudIT에없는 NMIS에서 원하는 필드는 무엇입니까? 우리는 당신을 덮었습니다. Open-AudIT에 존재하지 않는 외부 시스템 (NMIS)의 모든 필드는 Open-AudIT Custom 필드로 자동 생성됩니다.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = '다른 네트워크 장치에 관하여? 스위치, 대패, 인쇄 기계, 등을 생각하십시오. 분명히, 이 장치에 대한 일부 SNMP 자격 증명을 제공 할 수 있다면 가장 좋습니다. 그들은 단지 필요 <i>자주 묻는 질문</i> 이름 * 그러나 그렇게 할 필요가 없다면, 발견을 실행하는 것을 멈추지 않고, 장치를 발견하고 규칙을 만들거나 두 가지를 확인하는 것은 없습니다 (예를 들어 오픈 포트와 함께 MAC 주소 접두사를 사용합니다). 당신은 많은 정보를 원하지만, 당신은 그들이 네트워크에 있다는 것을 알고, 그들은 무엇인가, 그리고 그들이 본 마지막 때. 네트워크에 새가 나타나면 볼 수도 있습니다.';

$GLOBALS["lang"]['What do we send?'] = '우리는 무엇을 보낼 것인가?';

$GLOBALS["lang"]['What does this actually mean to you?'] = '실제로 무엇을 의미합니까?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '이 선반의 목적은 무엇입니까?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '이 위치의 유형은 무엇입니까? 사용 가능한 유형 <code>attributes</code> 테이블.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Linux에서 Open-AudIT가 Windows 기계를 발견할 때, 우리가 사용하는 원격 명령을 실행하기 위해';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Windows에서 Open-AudIT가 Windows 기계를 발견할 때, 우리가 사용하는 원격 명령을 실행하기 위해';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = '공지사항 IT는 장비에 대한 데이터를 수신, 감사 실행 중에 장치를 발견하거나 장치 수입에 의해, 이 발견 된 장치가 이미 데이터베이스 내에서 존재하는 장치를 일치하면 결정해야, 또는 추가해야하는 새로운 장치. Open-AudIT는 12 개의 속성이 일치하여 이것을 결정합니다. 일치 규칙은 OR 비교, 아니 및. 이것은 발견된 장치에 있는 분야를 기존 장치로 결심하는 첫번째 규칙을 의미합니다. 모든 매칭 규칙은 장치의 주문에 실패하여 생성 된 새로운 기록에서 새로운 결과가됩니다.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'POSTing 데이터는 액세스 토큰을 포함해야 합니다. 액세스 토큰은 모든 요청 유형으로 생성되므로 GET (예를 들어)을 만들고 받아들입니다 : application/json, meta→access_token에 대한 응답을 파싱하고 요청을 포함하십시오. 이 필드 데이터[access_token], IE, 최상위에 배치되어야 합니다.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = '장치가 발견되면 감사 스크립트는 파일 (또는 디렉토리) 세부 사항으로 주입됩니다. Audit_linux.sh 및 Audit_windows.vbs 모두 파일 경로에 관계없이 팝업됩니다. 당신이 생각하는 경우 <i>그러나 Windows 기계에 리눅스 경로를 넣어 것들을 깰!</i>, 그것은 휴식하지 않습니다, 당신은 그 파일 또는 디렉토리 항목에서 모든 데이터를받을 수 없습니다.<br/>검색된 세부 사항은 저장됩니다. <i>이름 *</i> 데이터베이스 테이블과 다른 속성처럼 저장됩니다. File details will be storage as any other property and generate alerts if any of the following 속성 변경 - <i>전체_이름</i>· <i>뚱 베어</i>· <i>로그인</i>· <i>마지막_changed</i>· 테이블에는 system_id, first_seen, last_seen 및 현재 열뿐만 아니라 파일 세부 정보가 포함되어 있습니다.<br/>기록된 속성:<br/><ul><li>Windows - 이름, 크기, 디렉토리, SHA1 해시 (파일 내용의), 마지막 변경, 권한, 소유자, 버전 (파일 허용).</li><br/><li>Linux - 이름, 크기, 디렉토리, SHA1 해시 (파일 내용의), 마지막 변경, 메타 데이터 마지막 변경, 권한, 소유자, 그룹, inode.</li></ul>아래로 Windows 및 Linux 감사 스크립트 모두에서 섹션을 볼 수 있습니다.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = '발견이 실행되면 관련 발견 검사 옵션이 선택되고 해당 설정은 Nmap에서 대상 장치를 스캔합니다. 스캔 옵션은 nmap 스캔을 포트하는 것을 결정, 그들은 얼마나 빨리 스캔하고 여부 또는 nmap ping은 IP가 살고 또는 그렇지 않다면 결정하기 위해 처음 사용됩니다.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = '발견이 실행되면 관련 발견 검사 옵션이 선택되고 대상 장치를 스캔하기 위해 Nmap에 의해 사용되는 그 설정. 옵션 설정이 선택되지 않은 경우, 기본 설정 항목 (discovery_default_scan_option) 선택 및 사용. Open-AudIT Community는 모든 발견에 대한 구성에 따라 기본 옵션을 사용합니다.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = '하위넷 발견이 실행되면, 선택한 경우, Nmap 핑 스캔 범위 또는 IP 주소. 어떤 장치 응답은 검사된 항구일 것입니다. Nmap 핑 스캔이 요청되지 않은 경우, 각 IP는 개별적으로 포트 스캔됩니다. 어떤 항구? 즉,';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'SSH를 통해 Linux 장치를 감사 할 때, 일부 Linux 배포는 TTY없이 통과 할 수 없습니다 (우리는 할). 이 리눅스 배포판 중 하나를 완전히 감사하려면 루트 사용자 자격 증명을 공급하는 것이 가장 좋습니다. TTY없이 루트가 공급되고 sudo가 불가능하면 감사 스크립트가 실행되지만 데이터의 양을 별도로 포함하지 않습니다. root (또는 sudo를 사용하여 로컬로 실행)를 사용하여 해당 감사는 시스템에 대한 추가 정보를 제공하고 여러 가지를 생성합니다. <i>기타</i>·';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = '장치를 결합할 때, 이 시스템은 정보를 위한 권위 있는 근원입니다.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = '완료되면 명령 창을 닫고 완료됩니다!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = '위젯을 만들 때, 당신이 선택하면 <i>지원하다</i> 버튼은 사용자 정의 SQL을 업로드 할 수있는 능력이 있습니다.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '외부 시스템에서 장치를 통합 할 때, 장치가 Open-AudIT에 존재하지 않으면 우리는 그것을 만들 수 있습니까?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '외부 시스템에서 장치를 통합 할 때, 장치가 외부 시스템에 업데이트되면 Open-AudIT에서 업데이트해야합니까?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = '디스커버리를 조사할 때, 지원은 Exported Discovery Logs를 요청합니다. 이를 검색하려면 메뉴로 이동 -> 발견 ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Linux 기반 장치와 일치하면 호스트 이름과 함께 Dbus id를 사용하여 선호합니다. 아래 표에 따라 다른 옵션을 사용할 수 있지만, 루트없이 Dbus ID를 검색 할 수 있습니다. UUID (momboard에서)를 검색하려면 dmidecode를 실행해야합니다. 루트가 필요합니다. 불행히도, ESXi 게스트를 복제 할 때, Dbus ID는 다시 생성되지 않습니다 - 따라서 호스트 이름과 함께 이것을 요약합니다. 여기에 연결된 좋은 기사가 있습니다. <i>이름 *</i> 하드웨어 ID.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'JSON을 요청할 때, 기본적으로 제한이 설정되지 않습니다. 화면 표시를 요청할 때, 제한은 기본적으로 1000으로 설정됩니다. 설정에서 변경할 수 있습니다. 이름 * <i>페이지_size</i> 제품정보';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '외부 장치를 검색할 때, 발견을 실행해야 합니까?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Windows에서 Open-AudIT를 실행하면 Apache 서비스 계정이 있어야 합니다. <i>(주)</i> 사용자 (또는 관리자). 이 때문에 <i>지역 시스템</i> 아파치는 일반적으로 어떤 네트워크 리소스에 접근할 수 없습니다. IE - 로컬 시스템 계정 계정으로 실행할 때 Apache를 사용하지 않고 감사 스크립트를 Windows PC로 복사할 수 없습니다.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = '설정 옵션이 설정되면, 설정 항목이 활성화된 특정 정의된 일치 규칙에 대한 장치를 위한 계정으로 이동합니다. 이 규칙은:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = '룰이 발견에서 실행되면, 일치하는 규칙은 발견 로그에 표시됩니다. 예를 들어 아래를 참조하십시오.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = '이 벤치 마크가 실행될 예정일 때. 관련 법령 <code>tasks.type</code> · <code>tasks.sub_resource_id</code>·';

$GLOBALS["lang"]['When this log was created.'] = '이 로그가 생성되었을 때.';

$GLOBALS["lang"]['When this queue item started processing.'] = '이 큐 항목이 처리를 시작했을 때.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Open-AudIT Professional 또는 Enterprise를 사용할 때 위젯은 Dashboards에 표시 될 수 있으며 사용자 정의 할 수 있습니다.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = '외부 시스템에 대한 객체에 내부 선택된 장치를 변환 할 때, 외부 데이터가 무엇인지. EG : 정수, 문자열 등';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = '우리는이 기본을 실행할 때, 우리는이 기본에 대한 정책이 아닌 장치에서 항목을 확인해야합니다.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '오픈 포트를 받으면 현재 실행중인 서비스의 버전에 대한 테스트를 시도해야합니까? 실제 실행 서비스를 확인하는 데 도움이.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Clouds를 사용하여 Amazon AWS 인스턴스를 발견 할 때 두 가지 자격 증명 항목이 필요합니다. - 키 및 비밀 키. 당신의 열쇠는 이미 당신에 알려지고 당신의 비밀 열쇠 뿐 아니라. 참고는 Amazon에서 제공하는 AWS 콘솔을 사용하여 비밀 키를 검색할 수 없습니다. 당신이 그것을 잘못 한 경우, 당신은 새로운 것을 생성해야합니다.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Clouds를 사용하여 Microsoft Azure 인스턴스를 발견 할 때 4개의 자격 증명 항목이 필요합니다. - 구독 ID, tenant id, 클라이언트 ID 및 클라이언트 비밀.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = '당신이 발견 할 때 당신은 device_location_org에 옵션을 가지고. 이 발견 된 모든 장치가 할당 될 것임을 의미합니다 (have <code>devices.org_id</code> 설정) 선택된 조직.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = '고급 버튼을 클릭하면 새로운 발견을 만들 때 더 많은 옵션을 변경할 수 있습니다. Types는 항상 Subnet (위 범위, 서브넷, IP 옵션) 및 Active Directory를 우회합니다. v4.1에서 Open-AudIT는 씨앗이라는 새로운 발견 유형이 있습니다.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Query를 활성화하면 일정에 실행할 수 있습니다. 쿼리는 선택한 주소에 이메일로 전송됩니다. 메뉴를 통해 이메일을 설정해야합니다 -> 관리자 -> 기업 -> 이메일 Config. 우리는 또한 있습니다 <i>시험 이메일<i> 그 페이지의 버튼. 당신의 세부사항을 입력하고, 저장하고 그 후에 그것을 시험하십시오. 성공적이거나 명백하게 시험 이메일이 성공했는지 알 수 있는 modal 상자가 있어야 합니다. 설정된 이메일이 있으면 예약된 쿼리를 구성할 수 있습니다.<br/><br/>이름, 옵션 설명 제공, 선택 <i>글쓰기</i> 입력, 원하는 쿼리를 선택, 이메일 주소를 제공, 형식을 선택하고 일정을 설정.<br/><br/>한 시간 제공 (시간 만, 아직 몇 분), 작업 이름을 부여 (이것은 실제 예약 된 쿼리 자체의 이름이 아닙니다), 쿼리 실행을 좋아할 일 선택, 당신이 실행하고 싶은 쿼리를 선택, 이메일 주소를 공급하고 쿼리 형식을 선택하고 완료.<br/>쿼리는 쿼리 (html 형식에서)의 이메일 바디로 보내지고 요청 된 형식으로 첨부 된 쿼리.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = '텍스트를 열 제목 중 하나에 입력 할 때, 당신은 단순히 일반 단어를 사용할 수 있습니다. 예를 들어, 입력할 때 <code>computer</code> 위의 검색 상자에 <i>제품정보</i> 열, 검색은 컴퓨터의 유형으로 모든 장치를 반환합니다. 자주 묻는 질문 URL을 사용하여 IT 요청 데이터 <code>devices?devices.type=computer</code>· 이제 dataTables 검색을 사용할 때 중요한 차이점이 있습니다.';

$GLOBALS["lang"]['where'] = '이름 *';

$GLOBALS["lang"]['Where'] = '이름 *';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = '여기서 $x는 번호입니다. 이 많은 LDAP 항목은 DB에 있으며 retrieved되었습니다.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = '장치 세부 화면에서이 필드가 나타납니다.';

$GLOBALS["lang"]['Where the rack is in the row.'] = '선반은 행에 있습니다.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '취약점은 충격, 가용성 및 기밀성을 사용하여 자체를 넘어 구성 요소에 영향을 미칩니다.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '사용자 상호 작용이 필요한지 (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = '어떤 OS이 벤치 마크가 적용됩니다.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '어떤 장치가 외부 시스템에서 Open-AudIT 생성해야 (모든 경우). 모든 것을 사용, 없음 또는 주어진 속성.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = '어떤 네트워크가 발견되어야 합니다. 이것은 형식에 있어야한다';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = '어떤 sub-menu를 표시해야 합니다.';

$GLOBALS["lang"]['Who made this rack.'] = '누가이 선반을 만들었습니다.';

$GLOBALS["lang"]['Why Windows Server Only?'] = '왜 Windows 서버만?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '왜 우리는이 정책을 제외합니까?';

$GLOBALS["lang"]['Wide Area Network'] = '넓은 지역 네트워크';

$GLOBALS["lang"]['Wide area network'] = '넓은 지역 네트워크';

$GLOBALS["lang"]['Widget'] = '다운로드';

$GLOBALS["lang"]['Widget #'] = '위젯 #';

$GLOBALS["lang"]['Widget # '] = '위젯 # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget 유형';

$GLOBALS["lang"]['widgets'] = '다운로드';

$GLOBALS["lang"]['Widgets'] = '다운로드';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets는 대시보드에 사용하도록 설계되었습니다. Enterprise 사용자는 필요에 따라 위젯을 생성, 업데이트 및 삭제할 수 있습니다.';

$GLOBALS["lang"]['width'] = '폭 (mm)';

$GLOBALS["lang"]['Width'] = '폭 (mm)';

$GLOBALS["lang"]['windows'] = '윈도우';

$GLOBALS["lang"]['Windows'] = '윈도우';

$GLOBALS["lang"]['Windows Packages'] = 'Windows 패키지';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows 테스트 스크립트';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows 사용자 작업 단위 #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows 사용자 작업 단위 #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows는 또한 시작에서 서비스를 차단했습니다. 대상에서 Windows 보안 애플릿을 시작하고 WinExeSvc 실행을 보장하는 것은 실행할 수 있습니다 (장치에서 허용한 다음 동작을 시작합니다).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe 페이지에 Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe는 시작되고 달리기 위하여 다음 Windows 서비스를 요구합니다: netlogon와 rpc 서비스는 달리기 위하여.<br/><br/>대상 Windows 기계에 로그인하고 netlogon 및 rpc에 대한 서비스를 확인하십시오.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe는 관리자 $ 및 RPC (네트워크 서비스 시작)를 사용하여 원격 서비스 (winexesvc)를 설치하고 시작합니다. 이 서비스는 Open-AudIT 서버에서 대상과 역방향의 출력을 전달하기 위해 사용되는 지정된 파이프를 초기화합니다. 완성될 때, 지명된 관은 닫히고 winexesvc는 연결 또는 제거를 위해 기다립니다 (준한 선택권의 따라서).';

$GLOBALS["lang"]['Wireless Local Area Network'] = '무선 지역 네트워크';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Open-AudIT의 3.3.0 릴리스로 클러스터의 개념을 도입했습니다. 웹 클러스터, 데이터베이스 클러스터 또는 파일 클러스터의 아이디어에 직관적으로지도 (또는 여러 가지 목적 중 하나) 주어진 유형으로 (높은 가용성, 중복, 스케일링, 등).<br/><br/>선택된 클러스터의 목적에 따라, 보고는 약간 다릅니다.<br/><br/>예를 들어, 가상화의 목적으로 클러스터를 만들면 장치가 추가되면 해당 기기에서 가상 머신을 볼 수 있습니다.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Clouds 기능의 도입을 통해 클라우드, Amazon AWS 또는 Microsoft Azure의 세부 정보를 제공 할 수 있으며 Open-AudIT는 해당 API를 사용하여 위치, 네트워크 및 인스턴스 목록을 검색 할 수 있습니다. 그런 다음 각 인스턴스를 발견하십시오.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi 실패';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi 실패';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi 타임아웃';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi 타임아웃';

$GLOBALS["lang"]['workgroup'] = '작업 그룹';

$GLOBALS["lang"]['Workgroup'] = '작업 그룹';

$GLOBALS["lang"]['Working Credentials'] = '작업 Credentials';

$GLOBALS["lang"]['Wrap Up'] = '위로 돌아 가기';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'PHP 스크립트 언어에서 작성.';

$GLOBALS["lang"]['XML'] = '사이트맵';

$GLOBALS["lang"]['Yellow Query'] = '황색 조회';

$GLOBALS["lang"]['Yemen'] = '예멘';

$GLOBALS["lang"]['Yes'] = '이름 *';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = '실행표 수집에 항목으로 스캔 할 추가 디렉토리를 정의 할 수 있습니다. 정의 할 때, 디렉토리 및 모든 하위 디렉토리는 실행 가능한 파일에 대해 스캔됩니다. 디렉토리와 파일을 제외할 수도 있습니다. 활성화될 때, 이것은 리눅스 감사 스크립트로 주사되고 실행될 때마다 수행됩니다 (보통 발견의 일부로). 이 스크립트에서 원하는 경우 대상에 수동으로 복사 할 수 있습니다, 사용 메뉴 -> 발견 -> 스크립트 -> 스크립트 목록 및 거기에 스크립트를 다운로드.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = '감사 스크립트를 수정하는 것은 항상 무료입니다. 당신은 (re)가 기본 스크립트에 의해 overwritten 될 때 업그레이드 할 때마다 변경 사항이 필요합니다. 수정된 스크립트의 마스터 복사본을 저장하는 것이 좋습니다. Open-AudIT를 업그레이드하면 새로운 기본 스크립트와 수정된 스크립트와 차이점을 적용할 수 있습니다. 감사 스크립트는 기본 스크립트입니다 (Windows는 VBScript, 다른 사람이 Bash입니다). 단순하고 쉽게 수정 - 업그레이드하기 전에 변경 사항을 복사해야합니다.';

$GLOBALS["lang"]['You are running version'] = '버전 실행';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = '정상적인 Open-AudIT JSON 기반 API를 사용하여 수집에 액세스할 수 있습니다. 다른 컬렉션처럼. 오시는 길';

$GLOBALS["lang"]['You can also'] = '당신은 또한 할 수 있습니다';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = '또한 페이지 하단에서 볼 수 있습니다 테이블 표시 장치 변경에 적용 될 것입니다.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = '아래 형식을 사용하여 속성을 지정할 수 있습니다.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = '당신은 항상 가상 인프라 (ESX, Azure, 외)에 Firstwave VM을 실행할 수 있습니다. Firstwave VM은 Debian linux를 실행하고 OS 라이센스 문제 및 제한에서 무료입니다. 또는 선택의 자신의 리눅스 디트로에 설치. 우리는 Redhat 9, Ubuntu 20.04, 22.04 및 24.04뿐만 아니라 Debian 11 및 12을 지원합니다.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = '기기를 자동으로 사용하는 위치에 할당할 수 있습니다.';

$GLOBALS["lang"]['You can assign devices using custom'] = '사용자 정의를 사용하여 장치를 할당 할 수 있습니다.';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = '레지스트리 키를 생성하여 실제 관리자 계정없이 원격 기계를 감사 할 수 있습니다. 각 기계의 아래 키를 사용하여 감사하고 사용 된 사용자 자격 증명이 Administrators 그룹의 구성원인지 확인하십시오.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = '당신은 확실히 네트워크 내에서 장치에서 유효한 자격 증명 없이 발견을 실행할 수 있습니다, 그러나, 정보 검색은 Open-AudIT가 검색 할 수있는 기능의 매우 작은 하위 세트가 될 것입니다 <i>이름 *</i> 자격.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = '당신은 기본을 만들 수 있습니다, 장치의 그룹에 대해 실행하고 결과보기, 예약 된 실행을 추가, 비교에 대한 더 많은 테이블을 추가 (현재 소프트웨어, netstat 포트 및 사용자는 활성화), 배치 기본 편집, 결과의 보관 등.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = '기존 감사 스크립트에 대한 모든 옵션과 스크립트를 만들 수 있습니다. - 그냥 Windows. AIX, ESX, Linux, OSX 및 Windows는 모두 커버됩니다.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = '시스템(NMIS 또는 Open-AudIT)에 전체 통합을 사용자 정의할 수 있습니다. Open-AudIT 또는 NMIS에서 생성 및 / 또는 업데이트 장치가 있습니다. 생성되거나 업데이트된 장치에서 발견을 실행해야 합니다. 페이지 오른쪽에 각 항목에 대한 설명이 있습니다.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = '응용 프로그램을 정의하고이 응용 프로그램에 장치를 연결 할 수 있습니다. 장치는 1개 이상 신청과 관련될지도 모릅니다. 신청은 1개 이상 장치에 관계될지도 모릅니다.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = '장치 상세 페이지에 각 개별 기기에 대한 추가 필드의 값을 편집할 수 있습니다. 장치 세부 화면보기, 필드를 포함하는 섹션을 열고 (당신이 가지고있는 경우';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = '당신은 포함 된 매개 변수의 엄격한 세트 내에서 떨어지는 장치 씨앗 디스커버리를 제한 할 수 있습니다 : <i>Subnet에 제한</i> · <i>자주 묻는 질문</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = '기기를 수동으로 할당할 수 있습니다.';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'URL에서 형식 옵션을 제공함으로써 이것을 무시할 수 있습니다.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = '오른쪽에 체크 박스를 클릭하거나 테이블 오른쪽 상단의 체크 박스를 클릭하여 모든 장치를 선택할 수 있습니다 (필처럼 보이는 편집 버튼 아래).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = '시스템 (장치) 테이블 및 매칭 (메뉴 → Admin → Database → List Table → System for a list of field)에서 어떤 속성을 선택하여 통합 할 수있는 장치를 선택할 수 있습니다. 속성 일치는 단일 값 만 일치 할 수 있습니다.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = '당신은 메뉴로 이동하여 수집가에 어떤 서버를 켤 수 있습니다 -> 관리자 -> 수집가 -> 수집가를 설치합니다. 서버로 로그인하려면 자격 증명이 필요합니다.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Blue view 아이콘을 클릭하여 볼 수 있습니다. 권한이 있는 경우도 수정하거나 삭제할 수 있습니다.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'PHP MBString 확장이 설치되어 있지 않습니다. 이 확장은 필수입니다.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = '설치된 PHP SNMP 확장이 없습니다. 이 확장은 매우 좋습니다.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = '이 URL을 복사하고 붙여 넣을 수 있습니다.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Active Directory 또는 OpenLDAP가 사용자를 인증하고 싶지만, 허가를 제공하지 않습니다. 이 작업을 수행하려면 <i>인증에 대한 사용</i> Y로 설정 <i>역할 사용</i> N로 설정 자격 증명은 LDAP에 의해 유효하지만, 이미 생성 된 사용자와 Open-AudIT에 할당 된 역할이 있어야합니다. 현재 위치 <i>제품정보</i> 적용분야';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = '이 경기 규칙은 전 세계적으로 독특하지 않을 수 있는 항목입니다. 몇몇 예:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '새로운 라이선스를 추가하기 전에 기존 라이선스를 삭제해야 합니다.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = '벤치 마크를 실행하려면 SSH 자격 증명을해야합니다. 다음 운영 체제는 현재 지원됩니다 : Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. 우리는 더 많은 릴리스와 함께 이러한 확장 계획.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = '텍스트 상자에 전체 파일을 복사하고 붙여 야합니다. 아래에서 모든 텍스트를 복사합니다.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'edited_by와 edited_date 필드를 포함해서는 안됩니다. 이것은 자동으로 설정됩니다.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = '텍스트의 두 번째 문장 만 변경해야합니다.';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'ATTRIBUTE_NAME에 필요한 열(예, org_id)을 대체해야 합니다.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = '열의 이름을 포함 하 여 헤더 라인을 사용 해야 합니다. 다음 그 아래에 데이터 라인.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = '필요한 속성을 포함하는 그 테이블 만 사용해야합니다. 나는 보통 왼쪽 가입을 사용합니다. 예를 들어';

$GLOBALS["lang"]['You will need a'] = '당신은 필요';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Windows 방화벽에서 WMI의 포트가 각 대상 Windows 컴퓨터에서 열립니다. Windows를 위해 Core 서버, 방화벽 연결을 허용';

$GLOBALS["lang"]['You will see a list of'] = '목록을 볼 수 있습니다.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube 자습서';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API 키입니다.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'JSON으로 Google Compute 자격 증명.';

$GLOBALS["lang"]['Your Host is'] = '내 계정 호스트는';

$GLOBALS["lang"]['Your Licenses'] = '귀하의 라이센스';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure 클라이언트 ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure 클라이언트 비밀.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure 구독 ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = '귀하의 Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'PHP 버전은';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = '이 쿼리를 팝업하는 속성을 선택하기 위해 SQL.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = '이 그룹을 팝업하는 장치를 선택하기 위해 SQL.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH 키.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = '해당 클라우드 기본 API에 따라 액세스 자격 증명.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = '귀하의 데이터는 귀하의 데이터입니다. 언제든지 추출 할 수 있습니다. CSV, JSON 및 XML에 대한 수출을 가능하게 합니다. 그리고 JSON API가 있습니다. 사용자 정의 보고서를 작성하고 CSV, XML 및 JSON에서 그 출력을 가질 수 있습니다! 다시, 그것은 당신의 자료 - 다른 사람이 아닙니다. 데이터의 보안이 당신의 손에 있다는 것을 확신 할 수 있습니다.';

$GLOBALS["lang"]['Your database platform is'] = '귀하의 데이터베이스 플랫폼은';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = '이 연결 상태의 설명 (제공, 은퇴, 등).';

$GLOBALS["lang"]['Your description of this item.'] = '이 항목의 설명.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = '이 소프트웨어의 작품에 대한 일반적인 이름';

$GLOBALS["lang"]['Your generic version for this piece of software'] = '소프트웨어의이 조각에 대한 당신의 일반적인 버전';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '사용자는 이제 로고를 클릭해서 사용할 수 있어야 합니다. <i>Entra 로고</i> Open-AudIT 로고 페이지의 버튼. 위에서 언급했듯이, Logon이 실패한 경우, logfile을 확인하고 사용자를 확인합니다. <i>사용자 이름</i>·<br/><br/>그리고 그게 다야. 이제 사용자들은 기억하기 위해 더 적은 자격 세트가 있어야 합니다!<br/><br/>이 기능에 문제가 있으면 이메일을 보내주십시오.';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '사용자는 이제 로고를 클릭해서 사용할 수 있어야 합니다. <i>OKTA 로고</i> Open-AudIT 로고 페이지의 버튼. 위에서 언급했듯이, Logon이 실패한 경우, logfile을 확인하고 사용자를 확인합니다. <i>이름 *</i>·<br/><br/>그리고 그게 다야. 이제 사용자들은 기억하기 위해 더 적은 자격 세트가 있어야 합니다!<br/><br/>이 기능에 문제가 있으면 이메일을 보내주십시오.';

$GLOBALS["lang"]['Your web server is'] = '웹 서버는';

$GLOBALS["lang"]['Zambia'] = '한국어';

$GLOBALS["lang"]['Zimbabwe'] = '짐바브웨';

$GLOBALS["lang"]['a String'] = '스트링';

$GLOBALS["lang"]['active'] = '이름 *';

$GLOBALS["lang"]['active directory'] = '관련 링크';

$GLOBALS["lang"]['active/active'] = '활동/활동';

$GLOBALS["lang"]['active/passive'] = '활동/수동';

$GLOBALS["lang"]['advertisement'] = '광고안내';

$GLOBALS["lang"]['alert'] = '계정 관리';

$GLOBALS["lang"]['all'] = '모든 것';

$GLOBALS["lang"]['allocated'] = '분류되지 않음';

$GLOBALS["lang"]['amazon'] = '하마존';

$GLOBALS["lang"]['an Integer'] = '한국어';

$GLOBALS["lang"]['and'] = '·';

$GLOBALS["lang"]['and / or'] = '및 / 또는';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = '지원 티켓이 생성되고 행동합니다.';

$GLOBALS["lang"]['and another'] = '그리고 또 다른';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = '그리고 최신 릴리스 self-installer를 다운로드합니다. 페이지를 스크롤해야합니다.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = '응용 프로그램으로 이동 -> 기업 응용 프로그램 (far left menu), 다음 클릭 <i>새로운 신청</i>·';

$GLOBALS["lang"]['and its current time is'] = '그리고 그것의 현재 시간은 입니다';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = '오늘 이전에 보증 만료일을 찾습니다.';

$GLOBALS["lang"]['and review what is possible.'] = '가능한 한 리뷰.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = '그리고 URI를 리디렉션';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = '그리고 마지막 선은 가장 관심있을 것입니다. 이 라인은 로그인이 실패한 정확한 지점을 제공해야합니다.';

$GLOBALS["lang"]['antivirus'] = '안티 바이러스';

$GLOBALS["lang"]['application'] = '제품정보';

$GLOBALS["lang"]['approved'] = '이름 *';

$GLOBALS["lang"]['are required.'] = '참고사항';

$GLOBALS["lang"]['are used.'] = '이용안내';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = '이 항구에 응답하는 장치로.<br/>방화벽이 비효율적인 디바이스를 대신하여 응답하는 일부 고객 문제가 발생하고, 따라서 false Positive Device detection가 발생합니다. 우리는 이제 스캔 당 설정할 수있는이 속성이 있습니다.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = '참고점으로 시스템 점검을 통해 모든 가상 머신을 필터링합니다. VM를 위한 serial 분야.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'assuming 일 및 클라이언트는 DNS를 전했습니다';

$GLOBALS["lang"]['attribute'] = '이름 *';

$GLOBALS["lang"]['auto'] = '자동차';

$GLOBALS["lang"]['backup'] = '지원하다';

$GLOBALS["lang"]['banned'] = '이름 *';

$GLOBALS["lang"]['blog'] = '블로그';

$GLOBALS["lang"]['blue'] = '뚱 베어';

$GLOBALS["lang"]['bottom'] = '이름 *';

$GLOBALS["lang"]['building'] = '회사연혁';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = '사용자 인증에 사용할 수 있습니다 (사용자 이름 및 암호 수정) 뿐만 아니라 사용자 인증 (무엇 역할 및 orgs 사용자가).<br/><br/>LDAP를 구성하지 않으면 Open-AudIT (예: <i>관련 기사</i> 사용자), Open-AudIT는 인증 및 인증 모두를 위해 자체를 사용 하 여 삭제 됩니다.<br/><br/>오시는 길 IT는 역할과 orgs에 대한 특정 LDAP 그룹을 사용합니다. 사용자는 Open-AudIT를 위해 이 그룹의 직접 회원이어야 합니다.<br/><br/>올바르게 구성되면 LDAP 사용은 완전히 Open-AudIT에서 사용자를 만들 필요가 없습니다. Open-AudIT를 설정하여 인증 및 인증 모두에 대한 LDAP를 사용합니다. 사용자가 Open-AudIT에 존재하지 않는 경우, LDAP에 존재하며, 자격 증명은 정확하며 필요한 그룹 Open-AudIT의 구성원이 자동으로 사용자 계정을 만들 것입니다.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = '이제 파일을 파일이나 디렉토리에 대한 세부 정보를 검색하고 Open-AudIT 데이터베이스의 다른 속성에 따라 이러한 파일을 모니터링 할 수 있습니다. 이 기능은 Linux Open-AudIT 서버에 대한 상자에서 작동하지만 Windows Open-AudIT 서버에서 서비스 계정 이름으로 변경해야합니다. 지원된 클라이언트는 Windows와 리눅스입니다.';

$GLOBALS["lang"]['changed'] = '수정하기';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = '옵션 정보 WMI, SSH 또는 SNMP에 대한 포트가 장치가 더 queried에 대응하는 경우 ';

$GLOBALS["lang"]['cloud'] = '구름 많음';

$GLOBALS["lang"]['code'] = '이름 *';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = '수집 및 세부 페이지는 아이콘을 실행합니다.';

$GLOBALS["lang"]['collector'] = '회사 소개';

$GLOBALS["lang"]['collectors'] = '회사 소개';

$GLOBALS["lang"]['column'] = '주요 특징';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = '열은 둘 다 포함합니다 <i>₢ 킹</i> 또는 <i>₢ 킹</i>· 이 행이 현재 장치에 표시되는 경우를 나타냅니다. 예를 들어 소프트웨어가 설치될 수 있습니다. <i>소프트웨어.current = y</i>), 그러나 그 후에 감사에 그것은 검출될지도 모릅니다. Open-AudIT는 다음이 행의 현재 속성을 변경합니다. <i>₢ 킹</i>·';

$GLOBALS["lang"]['column. The'] = '열. 더 보기';

$GLOBALS["lang"]['compute'] = '뚱 베어';

$GLOBALS["lang"]['config'] = 'config 설정';

$GLOBALS["lang"]['console'] = '회사 소개';

$GLOBALS["lang"]['contains'] = '지원하다';

$GLOBALS["lang"]['create'] = '지원하다';

$GLOBALS["lang"]['created'] = '제품정보';

$GLOBALS["lang"]['credentials'] = '한국어';

$GLOBALS["lang"]['critical'] = '제품정보';

$GLOBALS["lang"]['cve'] = '뚱 베어';

$GLOBALS["lang"]['database'] = '관련 기사';

$GLOBALS["lang"]['debug'] = '디버그';

$GLOBALS["lang"]['delegated'] = '이름 *';

$GLOBALS["lang"]['delete'] = '기타 제품';

$GLOBALS["lang"]['deleted'] = '이름 *';

$GLOBALS["lang"]['denied'] = '뚱 베어';

$GLOBALS["lang"]['details'] = '이름 *';

$GLOBALS["lang"]['devices'] = '제품정보';

$GLOBALS["lang"]['digitalocean'] = '채용정보';

$GLOBALS["lang"]['discoveries'] = '관련 기사';

$GLOBALS["lang"]['documentation for further details.'] = '더 자세한 내용은 문서.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = '이름 * <strong>아니다.</strong> 다음의 취약성 보고서 제공';

$GLOBALS["lang"]['does not equal'] = '동일하지 않음';

$GLOBALS["lang"]['emergency'] = '기타 제품';

$GLOBALS["lang"]['entra'] = '이름 *';

$GLOBALS["lang"]['equals'] = '이름 *';

$GLOBALS["lang"]['error'] = '오류 수정';

$GLOBALS["lang"]['established'] = '설치하기';

$GLOBALS["lang"]['excluded'] = '제외 사항';

$GLOBALS["lang"]['expired'] = '구매하기';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '극단적 인 - 그없이, 조직은 실패합니다.

매우 높은 - 조직 생존에 필수적이며 즉시 복원해야합니다.

높은 - 빨리 회복되어야 하는 중요한 기능은 그러나 약간 더 긴 회복 시간이 있을지도 모릅니다.

중간 - 필요한 기능이지만 더 긴 가동 시간을 견딜 수 있습니다.

낮은 - 중요한 충격 없이 지연될 수 있는 비 essential 기능.

undefined - 설정할 때까지 기본값.';

$GLOBALS["lang"]['fail'] = '이름 *';

$GLOBALS["lang"]['false'] = '이름 *';

$GLOBALS["lang"]['file'] = '이름 *';

$GLOBALS["lang"]['firewall'] = '관련 기사';

$GLOBALS["lang"]['first'] = '첫 번째';

$GLOBALS["lang"]['fixed'] = '설치하기';

$GLOBALS["lang"]['floor'] = '1 층';

$GLOBALS["lang"]['for'] = '제품정보';

$GLOBALS["lang"]['for authentication'] = '인증현황';

$GLOBALS["lang"]['for this information.'] = '이 정보.';

$GLOBALS["lang"]['from Audit Script Result'] = '감사 스크립트 결과';

$GLOBALS["lang"]['from NMIS'] = 'NMIS에서';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'Application Container에서 실행되는 LocalHost (Using LRPC)에서';

$GLOBALS["lang"]['front'] = '오시는 길';

$GLOBALS["lang"]['front-left'] = '오시는 길';

$GLOBALS["lang"]['front-right'] = '프론트라이트';

$GLOBALS["lang"]['github'] = 'github의';

$GLOBALS["lang"]['google'] = '구글 +';

$GLOBALS["lang"]['greater or equals'] = '더 중대한 동등물';

$GLOBALS["lang"]['greater than'] = '더 많은 것';

$GLOBALS["lang"]['group'] = '이름 *';

$GLOBALS["lang"]['has not been set'] = '설정되지 않았습니다';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = '목표 Windows PC에 DNS resolvable IP가 작동 반전 있습니다.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = '실행할 수 있는 능력이 있습니다. 에 의해';

$GLOBALS["lang"]['head'] = '이름 *';

$GLOBALS["lang"]['here'] = '이름 *';

$GLOBALS["lang"]['high availability'] = '높은 가용성';

$GLOBALS["lang"]['howto'] = '사이트 맵';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Linux 가상 머신을 복제하면 수동으로 이 생성 (그리고 내 경험에서 사람들은하지 않습니다) 동일하게 유지됩니다.';

$GLOBALS["lang"]['ignored'] = '이름 *';

$GLOBALS["lang"]['import the example device data'] = '예를 들어 장치 데이터 가져 오기';

$GLOBALS["lang"]['in'] = '내 계정';

$GLOBALS["lang"]['in Enterprise.'] = '기업에서.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = '입력은 다음과 같은 값을 가질 수 있습니다.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = '출력은 다음과 같은 값을 가질 수 있습니다.';

$GLOBALS["lang"]['inactive'] = '관련 제품';

$GLOBALS["lang"]['incomplete'] = '전체장편';

$GLOBALS["lang"]['info'] = '제품 정보';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer는 표준 설치 위치에 Nmap의 존재를 위해 시험할 것입니다';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), 기타';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'National Institute of Standards and Technology에 의해 유지되는 미국 표준';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = '정보 보안을 관리하기위한 국제 표준입니다. 정보 보안 관리 시스템(ISMS)을 지속적으로 개선하고, 구현, 유지 및 지속적인 개선을 위한 프레임워크를 제공합니다.';

$GLOBALS["lang"]['is based upon'] = '현재 위치';

$GLOBALS["lang"]['is licensed to'] = '관련 상품';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = '목록과 Open-AudIT에 옆에 암호와 키 인증을 사용할 수 있습니다. Open-AudIT는 루트 사용에 직접 반대하는 sudo 활성화 사용자를 사용할 수 있습니다 (또한 루트를 사용할 수 있습니다). 최고의 결과를 위해 루트 사용자 또는 sudo 활성화된 사용자는 사용되어야 합니다 (wiki에 루트 및 Target Client Configuration 없이 감사 리눅스 참조). Windows 장치는 또한 ssh를 실행할 수 있습니다, 그러나 Open-AudIT가 이것을 감지하면 SSH 쿼리를 중지하고 대신 WMI를 사용 (작업 WMI 자격 증명).';

$GLOBALS["lang"]['is the link to the'] = '링크는';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = '특정 테이블과 열을 볼 수 있는 아이템. 이것은 당신이 필요로 정확히 찾을 수 있습니다, 오히려 스키마 생성 스크립트의 MySQL 콘솔을 통해 trawling보다.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'retrieve lat/long 및 표시 지도에 요구되는 열쇠. 이름 *';

$GLOBALS["lang"]['left'] = '이름 *';

$GLOBALS["lang"]['less or equals'] = '더 적은 또는 동등물';

$GLOBALS["lang"]['less than'] = '더 적은 보다는';

$GLOBALS["lang"]['license'] = '이름 *';

$GLOBALS["lang"]['licenses'] = '이름 *';

$GLOBALS["lang"]['like'] = '이름 *';

$GLOBALS["lang"]['line'] = '제품정보';

$GLOBALS["lang"]['list'] = '이름 *';

$GLOBALS["lang"]['list View, using the Create button'] = 'Create 버튼을 사용하여 목록 보기';

$GLOBALS["lang"]['load balancing'] = '짐 균형을 잡기';

$GLOBALS["lang"]['location'] = '이름 *';

$GLOBALS["lang"]['locations'] = '이름 *';

$GLOBALS["lang"]['managed'] = '회사연혁';

$GLOBALS["lang"]['methods'] = '제품 설명';

$GLOBALS["lang"]['microsoft'] = '마이크로 소프트';

$GLOBALS["lang"]['mount point'] = '산 점';

$GLOBALS["lang"]['must'] = '지원하다';

$GLOBALS["lang"]['network'] = '네트워크';

$GLOBALS["lang"]['news'] = '(주)';

$GLOBALS["lang"]['no'] = '없음';

$GLOBALS["lang"]['node'] = '기본 정보';

$GLOBALS["lang"]['none'] = '이름 *';

$GLOBALS["lang"]['normal'] = '일반 정보';

$GLOBALS["lang"]['not applicable'] = '적용되지 않음';

$GLOBALS["lang"]['not in'] = '뚱 베어';

$GLOBALS["lang"]['not like'] = '이름 *';

$GLOBALS["lang"]['notice'] = '제품정보';

$GLOBALS["lang"]['notification'] = '공지사항';

$GLOBALS["lang"]['okta'] = '뚱 베어';

$GLOBALS["lang"]['on devices where'] = '장치 위치';

$GLOBALS["lang"]['openldap'] = '공지사항';

$GLOBALS["lang"]['optimized'] = '제품정보';

$GLOBALS["lang"]['optionally '] = '옵션으로 ';

$GLOBALS["lang"]['or'] = '또는';

$GLOBALS["lang"]['or the GitHub page at'] = 'GitHub 페이지';

$GLOBALS["lang"]['other'] = '이름 *';

$GLOBALS["lang"]['package'] = '제품 설명';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = '사이트 맵 메뉴에서 LDAP 서버를 내보내기 -> 관리자 -> LDAP 서버 -> JSON에 대한 세부 사항 및 저장 및이 데이터를 포함.';

$GLOBALS["lang"]['partition'] = '파일 형식';

$GLOBALS["lang"]['pass'] = '패스워드';

$GLOBALS["lang"]['pending'] = '뚱 베어';

$GLOBALS["lang"]['performance'] = '제품정보';

$GLOBALS["lang"]['performed'] = '관련 기사';

$GLOBALS["lang"]['permission'] = '(주)';

$GLOBALS["lang"]['permissions required per endpoint'] = 'endpoint에 필요한 권한';

$GLOBALS["lang"]['pie'] = '뚱 베어';

$GLOBALS["lang"]['planning'] = '회사연혁';

$GLOBALS["lang"]['predictable'] = '견적 요청';

$GLOBALS["lang"]['query'] = '이름 *';

$GLOBALS["lang"]['rear'] = '기타 제품';

$GLOBALS["lang"]['rear-left'] = '후방 좌측';

$GLOBALS["lang"]['rear-right'] = '후방 빛';

$GLOBALS["lang"]['regex'] = '구독하기';

$GLOBALS["lang"]['release'] = '이름 *';

$GLOBALS["lang"]['removed from display, but has been set'] = '디스플레이에서 제거되었지만 설정되었습니다.';

$GLOBALS["lang"]['reserved'] = 'ο 회원 관리';

$GLOBALS["lang"]['right'] = '견적 요청';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = '권리) 당신은 편집 할 필드 값에 클릭 할 수 있습니다.';

$GLOBALS["lang"]['role'] = '이름 *';

$GLOBALS["lang"]['room'] = '룸 룸';

$GLOBALS["lang"]['row'] = '이름 *';

$GLOBALS["lang"]['service failed to start due to the following error'] = '서비스 다음 오류로 인해 시작 실패';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = '그래서 Open-AudIT는 적절한 Orgs에 쿼리를 제한하는 것을 알고 있습니다.';

$GLOBALS["lang"]['stand-alone'] = '대외협력';

$GLOBALS["lang"]['standard'] = '표준 크기';

$GLOBALS["lang"]['starts with'] = '시작하기';

$GLOBALS["lang"]['storage'] = '제품정보';

$GLOBALS["lang"]['subnet'] = '서브넷';

$GLOBALS["lang"]['table'] = '·';

$GLOBALS["lang"]['table and insert the original rows.'] = '테이블과 삽입 원래 행.';

$GLOBALS["lang"]['team'] = '팀 팀';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = '이름 * 첫번째는 배열 색인이고 것과 같이 왼쪽이어야 합니다. 인덱스는 템플릿에서 번역된 텍스트를 찾습니다.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = '테이블에 대한 세부 버튼을 클릭합니다.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = '테이블에 대한 세부 버튼을 클릭합니다. 장치 세부사항은 저장됩니다';

$GLOBALS["lang"]['timestamp'] = '타임 스탬프';

$GLOBALS["lang"]['to'] = '으로';

$GLOBALS["lang"]['to create an item of this type'] = '이 유형의 아이템을 만들려면';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL로, 주어진 장치의 모든 구성 요소 테이블을 포함하여 전체 데이터베이스 항목을 얻을 것이다.';

$GLOBALS["lang"]['to the user'] = '사용자에';

$GLOBALS["lang"]['top'] = '맨 위로';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - 군/정부 분류. Disclosure는 국가 보안에 탁월한 자력 위험을 일으킬 것입니다.

비밀 - 군사 / 정부 분류. Disclosure는 국가 보안에 심각한 손상을 일으킬 것입니다.

비밀 - 군사 / 정부 및 민간 부문 분류. 은밀한 데이터는 거래 비밀, 지적 데이터, 응용 프로그램 프로그래밍 코드 및 무단 공개가 발생하면 조직에 심각한 영향을 미칠 수 있는 다른 데이터를 포함합니다. 이 수준에서 데이터는 작업이 필요한 조직의 인력에만 사용할 수 있거나 직접 관련되어 있으며 액세스 된 데이터입니다. 은밀한 자료에 접근은 보통 각 접근을 위한 허가를 요구합니다.

개인 - 개인 분류. 개인 데이터에는 인력과 관련된 모든 정보가 포함되어 있습니다. 인간 자원 기록, 의료 기록, 급여 정보, 조직 내에서만 사용됩니다.

민감한 - 군사 / 정부 및 민간 부문 분류. 민감한 데이터는 조직 금융 정보를 포함하고 CIA 및 정확도를 보장하기 위해 여분의 조치를 요구합니다. 공개는 국가 보안을 해칠 수 있습니다.

공공 - 민간 부문 분류. 공공데이터는 일반적으로 공용으로 공유되며 조직에 부정적인 영향을 미칩니다. 공공 데이터의 예에는 조직에서 얼마나 많은 사람들이 일하고 어떤 제품 조직이 제조 또는 판매하는지 포함합니다.

분류되지 않음 - 군/정부 분류. 일반적으로 국가 관심에 위협없이 공공에 배포 할 수있는 모든 정보.

undefined - 설정할 때까지 기본값.';

$GLOBALS["lang"]['traffic'] = '교통 안내';

$GLOBALS["lang"]['true'] = '한국어';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true 또는 false ( JSON 컨텍스트에서)';

$GLOBALS["lang"]['unallocated'] = '기타 제품';

$GLOBALS["lang"]['unauthorised'] = '관련 제품';

$GLOBALS["lang"]['unchanged'] = '이름 *';

$GLOBALS["lang"]['unknown'] = '이름 *';

$GLOBALS["lang"]['unmanaged'] = '계정 관리';

$GLOBALS["lang"]['unused'] = '뚱 베어';

$GLOBALS["lang"]['update'] = '지원하다';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = '기기에서 수집한 데이터를 사용하여 제공된 값으로 설치된 소프트웨어를 일치시키며, 많은 라이센스가 사용되었는지 계산하고 얼마나 많은 남아 있는지 계산합니다. 야생 카드의 사용을 허용 <i>일치 문자열</i> 소프트웨어와 일치하는 분야. 이름 속성.';

$GLOBALS["lang"]['using the main menu items.'] = '본문 바로가기';

$GLOBALS["lang"]['valid'] = '인증: CE';

$GLOBALS["lang"]['version'] = '이름 *';

$GLOBALS["lang"]['virtualisation'] = '가상화';

$GLOBALS["lang"]['warning'] = '이름 *';

$GLOBALS["lang"]['web'] = '웹 사이트';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = '로컬 및 원격 액세스 권한 설정.';

$GLOBALS["lang"]['with devices::update permission.'] = '장치::update 권한으로.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'Redirect URI와 함께';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = '개발자에게 익숙한 방식으로 간단하고 직관적 인 액세스를 제공하는 의도. 이 API 외에도 웹 인터페이스는 동일한 요청 형식을 사용하고 추가 작업을 공급합니다 (예 : 항목 만들기위한 HTML 양식).';

$GLOBALS["lang"]['yes'] = '이름 *';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Firstwave 제품을 사용하려면 HighCharts 라이센스가 필요하지 않습니다. 이름 *';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = '당신은 그 Org 또는 위치에 어떤 발견된 장치를 할당할 것입니다.';

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

