<?php
$GLOBALS["lang"][' Default, currently '] = ' 기본, 현재 ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' 이제 언어 파일로 지원됩니다. 이 언어를 사용하는 사용자를 변경하려면 클릭 ';

$GLOBALS["lang"][' seconds'] = ' 지원하다';

$GLOBALS["lang"]['10 Minutes'] = '10 분';

$GLOBALS["lang"]['15 Minutes'] = '15 분';

$GLOBALS["lang"]['30 Minutes'] = '30 분';

$GLOBALS["lang"]['5 Minutes'] = '5 분';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>이름 *</strong> - 로컬 Open-AudIT 서버에서 이 URL에 액세스하고 있습니다. 다운로드된 스크립트는 다른 기계에서 실행할 때 제출할 수 없습니다. 다른 기계를 감사 할 필요가 있다면, Open-AudIT 서버 자체에 브라우저를 사용하지 않는 모든 원격 기계에서 스크립트를 다운로드하십시오.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = '다운로드 할 파일에 URL.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '이 소프트웨어의 숫자를 표시하는 계산 된 필드는 선택된 Org의 컴퓨터에서 발견되었다 (그리고 그 후손으로 구성).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = '수집가는 수집가 또는 대 혼자 모드 중 하나입니다.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = '적용 가능한 CVEs의 comma 분리 된 목록.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '선택될 수 있는 값의 comma 분리된 목록.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '실행 명령. 에이전트가 Windows 기반 경우,이 명령은 Powershell 에이전트 내에서 실행됩니다.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = '스캔 할 사용자 정의 TCP 포트 목록 (22 SSH, 135은 WMI, 62078은 iPhone 동기화입니다).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = '사용자 정의 UDP 포트의 목록 (161 SNMP입니다).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '더 낮은 숫자는 다른 규칙의 앞에 적용될 것입니다.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '더 낮은 숫자는 다른 규칙의 앞에 적용될 것입니다. 기본 중량은 100입니다.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = '애플리케이션 인증을 사용할 때 Logon을 활성화하는 비밀번호(stored as a hash).';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP 주소와 MAC 주소가 독특하다는 것을 routing 도메인 또는 주소 공간.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = '보안 영역은 네트워크 도메인 내에서 관리 도메인 또는 정책 도메인입니다.';

$GLOBALS["lang"]['A short description of the log entry.'] = '로그 입력의 짧은 설명.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = '일치하는 문자열 <code>software.name</code> 이름 * 표준 SQL 와일드 카드의 % (%)를 사용하여 하나 이상의 문자와 일치 할 수 있습니다.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '취약점에 영향을 미치는 취약점은 공격자가 서비스, 충돌 시스템, 또는 denial-of-service (DoS) (None, Low, High)를 혼란시킬 수 있습니다.';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '기밀에 영향을 미치는 취약점은 개인 정보, 자격 증명, 또는 독점적 인 비즈니스 데이터 (None, Low, High)와 같은 민감한 데이터를 읽을 수 있습니다.';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = '무결성에 영향을 미치는 취약점은 공격자가 데이터를 수정하거나 악의적인 코드 또는 변경 시스템 구성 (None, Low, High)을 수정할 수 있습니다.';

$GLOBALS["lang"]['AD Group'] = 'AD 그룹';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, 등.';

$GLOBALS["lang"]['AIX'] = '사이트맵';

$GLOBALS["lang"]['ALL IPs'] = '모든 IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / 웹 액세스';

$GLOBALS["lang"]['API Documentation'] = 'API 문서';

$GLOBALS["lang"]['API Key required.'] = 'API 키 필요.';

$GLOBALS["lang"]['API Result'] = 'API 결과';

$GLOBALS["lang"]['About'] = '제품정보';

$GLOBALS["lang"]['Accept'] = '이름 *';

$GLOBALS["lang"]['access_point'] = '액세스 포인트';

$GLOBALS["lang"]['Access Point'] = '액세스 포인트';

$GLOBALS["lang"]['access_token'] = '액세스 토큰';

$GLOBALS["lang"]['Access Token'] = '액세스 토큰';

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

$GLOBALS["lang"]['Add image'] = '이미지 추가';

$GLOBALS["lang"]['additional_items'] = '관련 항목';

$GLOBALS["lang"]['Additional Items'] = '관련 항목';

$GLOBALS["lang"]['address'] = '이름 *';

$GLOBALS["lang"]['Address'] = '이름 *';

$GLOBALS["lang"]['Admin'] = '계정 관리';

$GLOBALS["lang"]['admin_status'] = '관리자 상태';

$GLOBALS["lang"]['Admin Status'] = '관리자 상태';

$GLOBALS["lang"]['advanced'] = '지원하다';

$GLOBALS["lang"]['Advanced'] = '지원하다';

$GLOBALS["lang"]['Afghanistan'] = '아프리카';

$GLOBALS["lang"]['agents'] = '이름 *';

$GLOBALS["lang"]['Agents'] = '이름 *';

$GLOBALS["lang"]['Aggressive'] = '관련 기사';

$GLOBALS["lang"]['Aland Islands'] = 'Aland 제도';

$GLOBALS["lang"]['Albania'] = '한국어';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = '아마존 AWS 제품정보';

$GLOBALS["lang"]['American Samoa'] = '미국 사모아';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '한국어 <code>benchmarks.id</code>·';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '한국어 <code>devices.id</code>·';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '외부 링크가 더 많은 정보를 나타내는 객체의 배열.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '필요한 속성을 포함하는 암호화 된 JSON 문서 <code>credentials.type</code>·';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '이 사이트에서 필요한 서비스의 수준 표시.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '발견이 완료되면 내부 필드.';

$GLOBALS["lang"]['An optional GeoCode'] = '옵션 GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'sudo를 사용하는 옵션 암호.';

$GLOBALS["lang"]['Andorra'] = '이름 *';

$GLOBALS["lang"]['Angola'] = '앵귈라';

$GLOBALS["lang"]['Anguilla'] = '스낵 바';

$GLOBALS["lang"]['Antarctica'] = '아프리카';

$GLOBALS["lang"]['AntiVirus'] = '안티 바이러스';

$GLOBALS["lang"]['Antigua and Barbuda'] = '안티구아와 바부다';

$GLOBALS["lang"]['Antivirus'] = '안티 바이러스';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '어떤 TCP 포트 (comma seperated, no space) 당신은이 발견에서 제외. Nmap 7+를 사용할 때만 사용할 수 있습니다.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '모든 UDP 포트 (comma seperated, no space) 당신은이 발견에서 제외. Nmap 7+를 사용할 때만 사용할 수 있습니다.';

$GLOBALS["lang"]['Any additional documentation you need.'] = '필요한 추가 문서';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '어떤 추가 메모를 만들 수 있습니다.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = '모든 장치는 감사 스크립트를 실행할 때이 Org에 할당됩니다 (설정한 경우). 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '발견된 모든 장치는 이 위치에 할당될 것입니다. 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '발견된 모든 장치는 감사 스크립트를 실행할 때이 위치에 할당됩니다 (설정한 경우). 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '어떤 발견된 장치는 이 Org에 놓인 경우에 할당될 것입니다. 설정하지 않는 경우, 그들은 할당됩니다 <code>org_id</code> 이 발견의. 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '어떤 필수 필터. 참고: = 트래픽을 입력할 때, 이것은 글꼴 awesome 아이콘을 나타냅니다.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '테스트하려는 특정 TCP 포트 (comma seperated, 공백 없음).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = '테스트하려는 특정 UDP 포트 (comma seperated, 공백 없음).';

$GLOBALS["lang"]['Application'] = '제품 설명';

$GLOBALS["lang"]['application_id'] = '신청 ID';

$GLOBALS["lang"]['Application ID'] = '신청 ID';

$GLOBALS["lang"]['Application Licenses'] = '신청 면허';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '신청, 운영 체계 또는 기계설비.';

$GLOBALS["lang"]['applications'] = '이름 *';

$GLOBALS["lang"]['Applications'] = '이름 *';

$GLOBALS["lang"]['applied'] = '제품정보';

$GLOBALS["lang"]['Applied'] = '제품정보';

$GLOBALS["lang"]['Approved'] = '이름 *';

$GLOBALS["lang"]['April'] = '4 월';

$GLOBALS["lang"]['architecture'] = '회사연혁';

$GLOBALS["lang"]['Architecture'] = '회사연혁';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '이 입력 항목을 삭제하시겠습니까?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '이 출력 항목을 삭제하시겠습니까?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '견적 요청 이 모든 큐 항목을 제거하고 발견 된 나머지 IP를 방지합니다.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '견적 요청 이 쿼리 처리 수를 재설정하고 서버에로드를 일으킬 수 있습니다.';

$GLOBALS["lang"]['area'] = '- 연혁';

$GLOBALS["lang"]['Area'] = '- 연혁';

$GLOBALS["lang"]['Argentina'] = '아르헨티나';

$GLOBALS["lang"]['Armenia'] = '주요 특징';

$GLOBALS["lang"]['arp'] = '사이트맵';

$GLOBALS["lang"]['Arp'] = '사이트맵';

$GLOBALS["lang"]['Aruba'] = '아루바';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = '장치 환경에 대한 속성에 따라. 생산, 훈련, 등.';

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

$GLOBALS["lang"]['Assign an Operator'] = '운영자 할당';

$GLOBALS["lang"]['Assigned To'] = '견적 요청';

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

$GLOBALS["lang"]['Attribute'] = '사이트 맵';

$GLOBALS["lang"]['attributes'] = '관련 기사';

$GLOBALS["lang"]['Attributes'] = '관련 기사';

$GLOBALS["lang"]['Audit'] = '회사연혁';

$GLOBALS["lang"]['Audit AIX'] = '감사 AIX';

$GLOBALS["lang"]['Audit ESXi'] = '감사 ESXi';

$GLOBALS["lang"]['Audit Linux'] = '감사 리눅스';

$GLOBALS["lang"]['audit_log'] = '감사 로그';

$GLOBALS["lang"]['Audit Log'] = '감사 로그';

$GLOBALS["lang"]['Audit My PC'] = '감사 내 PC';

$GLOBALS["lang"]['Audit OSX'] = '감사 OSX';

$GLOBALS["lang"]['Audit Result Input'] = '감사 결과 입력';

$GLOBALS["lang"]['Audit Status'] = '감사현황';

$GLOBALS["lang"]['Audit Windows'] = '감사 Windows';

$GLOBALS["lang"]['Audit the Device'] = '감사합니다.';

$GLOBALS["lang"]['Audits'] = '회사연혁';

$GLOBALS["lang"]['August'] = '8 월';

$GLOBALS["lang"]['Australia'] = '담당자: Ms.';

$GLOBALS["lang"]['Austria'] = '오스트리아';

$GLOBALS["lang"]['Auth'] = '오스';

$GLOBALS["lang"]['auth'] = '오스';

$GLOBALS["lang"]['Authentication Passphrase'] = '인증 Passphrase';

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

$GLOBALS["lang"]['Azerbaijan'] = '한국어';

$GLOBALS["lang"]['BTU Max'] = 'BTU 최대';

$GLOBALS["lang"]['BTU Total'] = 'BTU 총';

$GLOBALS["lang"]['Backup'] = '지원하다';

$GLOBALS["lang"]['Bahamas the'] = '바하마';

$GLOBALS["lang"]['Bahrain'] = '주 메뉴';

$GLOBALS["lang"]['Bangladesh'] = '뚱 베어';

$GLOBALS["lang"]['bank'] = '은행 계좌';

$GLOBALS["lang"]['Bank'] = '은행 계좌';

$GLOBALS["lang"]['Banned'] = '이름 *';

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

$GLOBALS["lang"]['Basic'] = '기본 정보';

$GLOBALS["lang"]['Belarus'] = '벨라루스';

$GLOBALS["lang"]['Belgium'] = '대한민국';

$GLOBALS["lang"]['Belize'] = '벨라루스';

$GLOBALS["lang"]['Benchmark'] = '벤치 마크';

$GLOBALS["lang"]['benchmark_id'] = '벤치 마크 ID';

$GLOBALS["lang"]['Benchmark ID'] = '벤치 마크 ID';

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

$GLOBALS["lang"]['Botswana'] = '콜롬비아';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = '부베 섬 (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = '인기 카테고리';

$GLOBALS["lang"]['Brazilian Portuguese'] = '브라질 포르투갈어';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '영국 인디언 오션 테리토리 (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = '영국령 버진 아일랜드';

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

$GLOBALS["lang"]['Bulgaria'] = '대한민국';

$GLOBALS["lang"]['Bulk Edit'] = '대량 편집';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = '대량 편집 장치 Attributes';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina 파소';

$GLOBALS["lang"]['Burundi'] = '버룬디';

$GLOBALS["lang"]['business_requirements'] = '회사 소개';

$GLOBALS["lang"]['Business Requirements'] = '회사 소개';

$GLOBALS["lang"]['Buy'] = '구매하기';

$GLOBALS["lang"]['Buy More'] = '더 보기';

$GLOBALS["lang"]['Buy More Licenses'] = '더 많은 라이센스를 구입';

$GLOBALS["lang"]['By'] = '이름 *';

$GLOBALS["lang"]['CIDR'] = 'CIDR 소개';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR 소개 제품정보';

$GLOBALS["lang"]['cli_config'] = '제품정보 사이트맵';

$GLOBALS["lang"]['CLI Config'] = '제품정보 사이트맵';

$GLOBALS["lang"]['CPU'] = 'CPU의 CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU의';

$GLOBALS["lang"]['CSV'] = 'CSV 파일';

$GLOBALS["lang"]['CVE'] = '사이트맵';

$GLOBALS["lang"]['Calculated from discovery.'] = '발견에서 계산.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = '이 네트워크의 유효한 IP 주소의 총 수 계산.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '완료시 계산, 이 항목을 실행하는 시간을.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '통합이 실행될 때 계산하고 이 통합에 있는 장치의 JSON 표현을 포함합니다. 각 링크 <code>devices.id</code>·';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '통합이 실행되고 이 통합의 위치의 JSON 표현을 포함합니다. 각 링크 <code>locations.id</code>·';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '통합이 실행될 때 계산하고 Open-AudIT에서 선택한 장치 수를 포함합니다.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '통합이 실행될 때 계산하고 외부 시스템을 선택한 장치 수를 포함합니다.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '통합이 실행되고 외부 시스템에 업데이트 될 수있는 장치 수를 포함 할 때 계산.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '통합이 실행될 때 계산하고 Open-AudIT에서 업데이트된 장치 수를 포함합니다.';

$GLOBALS["lang"]['Cambodia'] = '한국어';

$GLOBALS["lang"]['Cameroon'] = '카메룬';

$GLOBALS["lang"]['Campus Area Network'] = '캠퍼스 지역 네트워크';

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

$GLOBALS["lang"]['Chad'] = '스낵 바';

$GLOBALS["lang"]['change_id'] = 'ID 변경';

$GLOBALS["lang"]['Change ID'] = 'ID 변경';

$GLOBALS["lang"]['change_log'] = '공지사항';

$GLOBALS["lang"]['Change Log'] = '공지사항';

$GLOBALS["lang"]['change_type'] = '변경 유형';

$GLOBALS["lang"]['Change Type'] = '변경 유형';

$GLOBALS["lang"]['check_minutes'] = '자주 묻는 질문';

$GLOBALS["lang"]['Check Minutes'] = '자주 묻는 질문';

$GLOBALS["lang"]['Check for SSH on these ports'] = '이러한 포트에서 SSH 확인';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'SSH 서비스에 대한이 포트를 확인하십시오.';

$GLOBALS["lang"]['Chile'] = '칠레';

$GLOBALS["lang"]['China'] = '중국 중국';

$GLOBALS["lang"]['Choose'] = '제품 정보';

$GLOBALS["lang"]['Choose (select OS first)'] = '선택 (선택 OS 먼저)';

$GLOBALS["lang"]['Choose a Device'] = '장치 선택';

$GLOBALS["lang"]['Choose a Table'] = '테이블 선택';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Open-AudIT에서 예제 장치를 제거하려면 삭제 버튼을 클릭합니다.<br/>이 데이터베이스에서 아래의 장치를 제거합니다. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '아래 가져 오기 버튼을 클릭하여 다음 장치 데이터를 팝업하십시오.';

$GLOBALS["lang"]['Client ID'] = '고객 ID';

$GLOBALS["lang"]['client_ident'] = '고객 ID';

$GLOBALS["lang"]['Client Ident'] = '고객 ID';

$GLOBALS["lang"]['client_secret'] = '고객 비밀';

$GLOBALS["lang"]['Client Secret'] = '고객 비밀';

$GLOBALS["lang"]['client_site_name'] = '고객 사이트 이름';

$GLOBALS["lang"]['Client Site Name'] = '고객 사이트 이름';

$GLOBALS["lang"]['Close'] = '이름 *';

$GLOBALS["lang"]['Cloud'] = '클라우드';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud 세부사항';

$GLOBALS["lang"]['Cloud Discovery'] = '클라우드 디스커버리';

$GLOBALS["lang"]['cloud_id'] = '클라우드 ID';

$GLOBALS["lang"]['Cloud ID'] = '클라우드 ID';

$GLOBALS["lang"]['cloud_log'] = '클라우드 로그';

$GLOBALS["lang"]['Cloud Log'] = '클라우드 로그';

$GLOBALS["lang"]['cloud_name'] = '클라우드 이름';

$GLOBALS["lang"]['Cloud Name'] = '클라우드 이름';

$GLOBALS["lang"]['Cloud Network'] = '클라우드 네트워크';

$GLOBALS["lang"]['clouds'] = '클라우드';

$GLOBALS["lang"]['Clouds'] = '클라우드';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (키링) 섬';

$GLOBALS["lang"]['Collector'] = '회사 소개';

$GLOBALS["lang"]['Collector (UUID)'] = '수집가 (UUID)';

$GLOBALS["lang"]['Collector Name'] = '수집가 이름';

$GLOBALS["lang"]['collector_uuid'] = '수집가 Uuid';

$GLOBALS["lang"]['Collector Uuid'] = '수집가 Uuid';

$GLOBALS["lang"]['collectors'] = '회사 소개';

$GLOBALS["lang"]['Collectors'] = '회사 소개';

$GLOBALS["lang"]['Colombia'] = '콜롬비아';

$GLOBALS["lang"]['color'] = '색깔: 회색';

$GLOBALS["lang"]['Color'] = '색깔: 회색';

$GLOBALS["lang"]['column'] = '제품정보';

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

$GLOBALS["lang"]['comments'] = '이름 *';

$GLOBALS["lang"]['Comments'] = '이름 *';

$GLOBALS["lang"]['commercial'] = '회사 소개';

$GLOBALS["lang"]['Commercial'] = '회사 소개';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = '공격의 복잡성 (낮거나 높음).';

$GLOBALS["lang"]['Component Table'] = '구성 요소 테이블';

$GLOBALS["lang"]['Components (All Devices)'] = '구성 요소 (모든 장치)';

$GLOBALS["lang"]['Compute'] = '회사 소개';

$GLOBALS["lang"]['Condition'] = '(주)';

$GLOBALS["lang"]['Config'] = '사이트맵';

$GLOBALS["lang"]['Config Default, currently '] = 'Config 기본값, 현재 ';

$GLOBALS["lang"]['config_file'] = 'Config 파일';

$GLOBALS["lang"]['Config File'] = 'Config 파일';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config 관리자 오류 코드';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config 관리자 오류 코드';

$GLOBALS["lang"]['configuration'] = '제품 설명';

$GLOBALS["lang"]['Configuration'] = '제품 설명';

$GLOBALS["lang"]['Configure'] = '설정하기';

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

$GLOBALS["lang"]['contact'] = '제품정보';

$GLOBALS["lang"]['Contact'] = '제품정보';

$GLOBALS["lang"]['contact_name'] = '담당자 이름';

$GLOBALS["lang"]['Contact Name'] = '담당자 이름';

$GLOBALS["lang"]['contained_in'] = '계속하기';

$GLOBALS["lang"]['Contained In'] = '계속하기';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'JSON 객체는 관련 위젯과 그 위치를 나타냅니다.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = '우리가 ssh, snmp 및 wmi 발견 옵션을 사용해야하는 경우 결정하는 필드를 포함합니다. JSON 객체.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context 엔진 ID';

$GLOBALS["lang"]['Context Name'] = 'Context 이름';

$GLOBALS["lang"]['contractual_obligations'] = '계약 의무';

$GLOBALS["lang"]['Contractual Obligations'] = '계약 의무';

$GLOBALS["lang"]['Cook Islands'] = '콜롬비아';

$GLOBALS["lang"]['Copy and paste an audit result'] = '복사 및 붙여넣기 결과';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '포럼에 아래의 복사 및 붙여넣기, Open-AudIT의 또 다른 인스턴스 또는 이 항목을 제공해야 할 곳.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Geocode 만들기';

$GLOBALS["lang"]['create_internal_count'] = '내부 조사';

$GLOBALS["lang"]['Create Internal Count'] = '내부 조사';

$GLOBALS["lang"]['create_internal_from_external'] = '외부에서 내부 만들기';

$GLOBALS["lang"]['Create Internal From External'] = '외부에서 내부 만들기';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-AudIT에서 NMIS 장치 만들기';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT 만들기 장치에서 ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT 만들기 NMIS의 장치';

$GLOBALS["lang"]['created_by'] = '로그인';

$GLOBALS["lang"]['Created By'] = '로그인';

$GLOBALS["lang"]['created_date'] = '생성 날짜';

$GLOBALS["lang"]['Created Date'] = '생성 날짜';

$GLOBALS["lang"]['Creating'] = '회사연혁';

$GLOBALS["lang"]['Creating Device'] = '회사연혁';

$GLOBALS["lang"]['Creating a Query'] = 'Query 만들기';

$GLOBALS["lang"]['creator'] = '회사 소개';

$GLOBALS["lang"]['Creator'] = '회사 소개';

$GLOBALS["lang"]['credential'] = '관련 상품';

$GLOBALS["lang"]['Credential'] = '관련 상품';

$GLOBALS["lang"]['credentials'] = '회사 소개';

$GLOBALS["lang"]['Credentials'] = '회사 소개';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials 클라이언트 ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = '연락처 이름 *';

$GLOBALS["lang"]['Credentials Tenant ID'] = '필수품 ID';

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

$GLOBALS["lang"]['Custom TCP Ports'] = '사용자 정의 TCP 포트';

$GLOBALS["lang"]['Custom UDP Ports'] = '주문 UDP 항구 항구';

$GLOBALS["lang"]['Cve'] = '뚱 베어';

$GLOBALS["lang"]['Cyprus'] = '팟캐스트';

$GLOBALS["lang"]['Czech'] = '한국어';

$GLOBALS["lang"]['Czech Republic'] = '대한민국';

$GLOBALS["lang"]['DHCP'] = '사이트맵';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN 계정 (선택 사항)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN 암호 (선택)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS 서버';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS 호스트명';

$GLOBALS["lang"]['dashboard_id'] = '대시보드 ID';

$GLOBALS["lang"]['Dashboard ID'] = '대시보드 ID';

$GLOBALS["lang"]['dashboards'] = '대시보드';

$GLOBALS["lang"]['Dashboards'] = '대시보드';

$GLOBALS["lang"]['Database'] = '관련 기사';

$GLOBALS["lang"]['db_action'] = '데이터베이스';

$GLOBALS["lang"]['Database Action'] = '데이터베이스';

$GLOBALS["lang"]['db_column'] = '데이터베이스 열';

$GLOBALS["lang"]['Database Column'] = '데이터베이스 열';

$GLOBALS["lang"]['Database Definition'] = 'Database 정의';

$GLOBALS["lang"]['db_row'] = '데이터베이스 행';

$GLOBALS["lang"]['Database Row'] = '데이터베이스 행';

$GLOBALS["lang"]['Database Schema'] = '데이터베이스 Schema';

$GLOBALS["lang"]['db_table'] = '데이터베이스 테이블';

$GLOBALS["lang"]['Database Table'] = '데이터베이스 테이블';

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

$GLOBALS["lang"]['December'] = '12 월';

$GLOBALS["lang"]['Default'] = '기본 정보';

$GLOBALS["lang"]['Default Items'] = '기본 항목';

$GLOBALS["lang"]['Default Value'] = '기본 값';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389의 기본. 일반적으로 636 Active Directory LDAPS에 사용.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = '기본 값 <code>3</code> LDAP 및 Active Directory의 경우.';

$GLOBALS["lang"]['Defaults'] = '기본 사항';

$GLOBALS["lang"]['delay_minutes'] = '지연 분';

$GLOBALS["lang"]['Delay Minutes'] = '지연 분';

$GLOBALS["lang"]['Delete'] = '이름 *';

$GLOBALS["lang"]['Delete Example Devices'] = '파일 삭제';

$GLOBALS["lang"]['delete_external_from_internal'] = '내부에서 외부 삭제';

$GLOBALS["lang"]['Delete External From Internal'] = '내부에서 외부 삭제';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS 삭제 Open-AudIT에 없는 경우 장치';

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

$GLOBALS["lang"]['details'] = '이름 *';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '이 사이트에서 일반적으로 접촉 할 수있는 사람의 세부 사항.';

$GLOBALS["lang"]['device'] = '제품정보';

$GLOBALS["lang"]['Device'] = '제품정보';

$GLOBALS["lang"]['Device Audits'] = '장치 감사';

$GLOBALS["lang"]['Device ID'] = '장치 ID';

$GLOBALS["lang"]['device_id'] = '장치 ID';

$GLOBALS["lang"]['device_id_a'] = '장치 ID A';

$GLOBALS["lang"]['Device ID A'] = '장치 ID A';

$GLOBALS["lang"]['device_id_b'] = '장치 ID B';

$GLOBALS["lang"]['Device ID B'] = '장치 ID B';

$GLOBALS["lang"]['Device Name'] = '장치 이름';

$GLOBALS["lang"]['Device Result'] = '장치 결과';

$GLOBALS["lang"]['Device Results'] = '장치 결과';

$GLOBALS["lang"]['Device Seed'] = '장치 Seed';

$GLOBALS["lang"]['Device Seed IP'] = '장치 씨 IP';

$GLOBALS["lang"]['Device Status'] = '장치 상태';

$GLOBALS["lang"]['Device Types'] = '장치 유형';

$GLOBALS["lang"]['Device is in the Subnet'] = '장치는 Subnet에 있습니다';

$GLOBALS["lang"]['Devices'] = '제품정보';

$GLOBALS["lang"]['devices_assigned_to_location'] = '장치 위치에 할당';

$GLOBALS["lang"]['Devices Assigned To Location'] = '장치 위치에 할당';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Org에 할당된 장치';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Org에 할당된 장치';

$GLOBALS["lang"]['Devices Audited'] = '시스템 감사';

$GLOBALS["lang"]['Devices Created in '] = '생성된 장치 ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT에 생성된 장치';

$GLOBALS["lang"]['devices_default_display_columns'] = '장치 과태 전시 란';

$GLOBALS["lang"]['Devices Default Display Columns'] = '장치 과태 전시 란';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '마지막으로 발견된 장치 7 일';

$GLOBALS["lang"]['Devices Found Today'] = '오늘 발견된 장치';

$GLOBALS["lang"]['Devices Found Yesterday'] = '어제 발견 된 장치';

$GLOBALS["lang"]['Devices Not Audited'] = '장치 감사되지 않음';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '장치 30 일';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '장치 7 일이 보이지 않는';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '장치 90 일';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API를 통해 검색된 장치';

$GLOBALS["lang"]['Devices Selected from '] = '선택된 장치 ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudIT에서 선택된 장치';

$GLOBALS["lang"]['Devices Updated in '] = '업데이트 된 장치 ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT에서 업데이트 된 장치';

$GLOBALS["lang"]['Devices are being benchmarked.'] = '장치는 벤치 마크가됩니다.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = '장치는 벤치 마크가되지 않습니다.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = '장치는 벤치 마크 될 수있다.';

$GLOBALS["lang"]['Devices in Running State'] = '실행 상태의 장치';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Stopped 상태의 장치';

$GLOBALS["lang"]['Devices in this'] = '이 문서';

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

$GLOBALS["lang"]['discoveries'] = '회사 소개';

$GLOBALS["lang"]['Discoveries'] = '회사 소개';

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

$GLOBALS["lang"]['disk'] = '팟캐스트';

$GLOBALS["lang"]['Disk'] = '팟캐스트';

$GLOBALS["lang"]['display_version'] = '표시 버전';

$GLOBALS["lang"]['Display Version'] = '표시 버전';

$GLOBALS["lang"]['Display in Menu'] = '메뉴의 표시';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = '이러한 TCP 포트를 스캔하지 마십시오.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = '이 UDP 포트를 스캔하지 마십시오.';

$GLOBALS["lang"]['Do not show me again'] = '나를 다시 표시하지 마십시오';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '안전한 운송 (LDAPS) 또는 일반 암호화 LDAP를 사용하려면.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '왼쪽에 표준 사이드바를보고 싶습니다.';

$GLOBALS["lang"]['documentation'] = '회사연혁';

$GLOBALS["lang"]['Documentation'] = '회사연혁';

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

$GLOBALS["lang"]['Download a file from URL'] = 'URL에서 파일 다운로드';

$GLOBALS["lang"]['driver'] = '관련 기사';

$GLOBALS["lang"]['Driver'] = '관련 기사';

$GLOBALS["lang"]['duplex'] = '연락처';

$GLOBALS["lang"]['Duplex'] = '연락처';

$GLOBALS["lang"]['duration'] = '이름 *';

$GLOBALS["lang"]['Duration'] = '이름 *';

$GLOBALS["lang"]['ESXi'] = '사이트맵';

$GLOBALS["lang"]['EULA'] = '유럽 연합';

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

$GLOBALS["lang"]['enabled'] = '이름 *';

$GLOBALS["lang"]['Enabled'] = '이름 *';

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

$GLOBALS["lang"]['English'] = '한국어';

$GLOBALS["lang"]['enterprise'] = '회사 소개';

$GLOBALS["lang"]['Enterprise'] = '회사 소개';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise 개인 네트워크';

$GLOBALS["lang"]['Entitlement Type'] = '제목 유형';

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

$GLOBALS["lang"]['Established'] = '회사연혁';

$GLOBALS["lang"]['Estonia'] = '에스토니아';

$GLOBALS["lang"]['Ethernet MAC'] = '이더넷 MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet 맥';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet 맥';

$GLOBALS["lang"]['Ethiopia'] = '에 의해';

$GLOBALS["lang"]['Every'] = '모든 제품';

$GLOBALS["lang"]['Every Day'] = '매일';

$GLOBALS["lang"]['Exceptions'] = '이름 *';

$GLOBALS["lang"]['exclude'] = '이름 *';

$GLOBALS["lang"]['Exclude'] = '이름 *';

$GLOBALS["lang"]['exclude_ip'] = 'IP 제외';

$GLOBALS["lang"]['Exclude IP'] = 'IP 제외';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP 주소 제외';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP 포트 제외';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp 포트 제외';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp 포트 제외';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP 포트 제외';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp 포트 제외';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp 포트 제외';

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

$GLOBALS["lang"]['expose'] = '제품정보';

$GLOBALS["lang"]['Expose'] = '제품정보';

$GLOBALS["lang"]['External'] = '기타 제품';

$GLOBALS["lang"]['External Field Name'] = '외부 분야 이름';

$GLOBALS["lang"]['External Field Type'] = '외부 분야 유형';

$GLOBALS["lang"]['external_ident'] = '외부 Ident';

$GLOBALS["lang"]['External Ident'] = '외부 Ident';

$GLOBALS["lang"]['external_link'] = '외부 링크';

$GLOBALS["lang"]['External Link'] = '외부 링크';

$GLOBALS["lang"]['extra_columns'] = '추가 열';

$GLOBALS["lang"]['Extra Columns'] = '추가 열';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = '피지 섬';

$GLOBALS["lang"]['File'] = '파일 형식';

$GLOBALS["lang"]['File Import'] = '파일 가져 오기';

$GLOBALS["lang"]['File Input'] = '파일 입력';

$GLOBALS["lang"]['file_name'] = '파일 이름';

$GLOBALS["lang"]['File Name'] = '파일 이름';

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

$GLOBALS["lang"]['Finland'] = '주요 특징';

$GLOBALS["lang"]['Firewall'] = '비밀번호';

$GLOBALS["lang"]['firewall_rule'] = '방화벽 규칙';

$GLOBALS["lang"]['Firewall Rule'] = '방화벽 규칙';

$GLOBALS["lang"]['firmware'] = '회사 소개';

$GLOBALS["lang"]['Firmware'] = '회사 소개';

$GLOBALS["lang"]['firmware_revision'] = '회사 소개';

$GLOBALS["lang"]['Firmware Revision'] = '회사 소개';

$GLOBALS["lang"]['First Name'] = '이름 *';

$GLOBALS["lang"]['first_run'] = '첫 번째 실행';

$GLOBALS["lang"]['First Run'] = '첫 번째 실행';

$GLOBALS["lang"]['first_seen'] = '첫 경험';

$GLOBALS["lang"]['First Seen'] = '첫 경험';

$GLOBALS["lang"]['FirstWave'] = '첫 번째웨이';

$GLOBALS["lang"]['Fix'] = '수정하기';

$GLOBALS["lang"]['Fixed'] = '설치하기';

$GLOBALS["lang"]['Floor'] = '층 -';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '아래 링크를 따르고 Open-AudIT를 사용하는 방법을 발견하십시오. <b>어떤 네트워크?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = '씨앗 발견을 위해 개인 IP 주소 공간에 IP를 발견해야합니다.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = '씨앗 발견을 위해 선택된 서브넷에 IP를 발견해야합니다.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '씨앗 발견을 위해, 발견을 실행하기 전에 subnet을 ping해야합니다.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'SQL 쿼리의 고급 항목. 쿼리에 따라, 당신은 포함해야 <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = '영구적이지 않은 라이선스의 경우 라이선스가 만료됩니다.';

$GLOBALS["lang"]['form_factor'] = '폼 팩터';

$GLOBALS["lang"]['Form Factor'] = '폼 팩터';

$GLOBALS["lang"]['format'] = '지원하다';

$GLOBALS["lang"]['Format'] = '지원하다';

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

$GLOBALS["lang"]['full_name'] = '이름 *';

$GLOBALS["lang"]['Full Name'] = '이름 *';

$GLOBALS["lang"]['function'] = '제품정보';

$GLOBALS["lang"]['Function'] = '제품정보';

$GLOBALS["lang"]['GROUP BY'] = '그룹 BY';

$GLOBALS["lang"]['Gabon'] = '스낵 바';

$GLOBALS["lang"]['Gambia the'] = '감비아';

$GLOBALS["lang"]['gateway'] = '오시는 길';

$GLOBALS["lang"]['Gateway'] = '오시는 길';

$GLOBALS["lang"]['gateways'] = '오시는 길';

$GLOBALS["lang"]['Gateways'] = '오시는 길';

$GLOBALS["lang"]['Generated By'] = '리뷰 쓰기';

$GLOBALS["lang"]['geo'] = '사이트맵';

$GLOBALS["lang"]['Geo'] = '사이트맵';

$GLOBALS["lang"]['Georgia'] = '주요 특징';

$GLOBALS["lang"]['German'] = '한국어';

$GLOBALS["lang"]['Germany'] = '한국어';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long를 얻으십시오';

$GLOBALS["lang"]['Get Started'] = '시작하기';

$GLOBALS["lang"]['Get a Free License'] = '무료 라이센스 받기';

$GLOBALS["lang"]['Getting Started'] = '시작하기';

$GLOBALS["lang"]['Ghana'] = '뚱 베어';

$GLOBALS["lang"]['Gibraltar'] = '채용정보';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery 옵션';

$GLOBALS["lang"]['Go'] = '이름 *';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute 필드';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google지도 API 이름 *';

$GLOBALS["lang"]['Greater Than'] = '더 큰';

$GLOBALS["lang"]['Greater Than or Equals'] = '더 중대한 또는 동등한 것';

$GLOBALS["lang"]['Greece'] = '한국어';

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

$GLOBALS["lang"]['hardware_revision'] = '하드웨어 Revision';

$GLOBALS["lang"]['Hardware Revision'] = '하드웨어 Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = '이 정책은이 조직에서 적용됩니다.';

$GLOBALS["lang"]['hash'] = '해시태그';

$GLOBALS["lang"]['Hash'] = '해시태그';

$GLOBALS["lang"]['Head'] = '제품정보';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island와 맥도날드 섬';

$GLOBALS["lang"]['height'] = '고도:';

$GLOBALS["lang"]['Height'] = '고도:';

$GLOBALS["lang"]['Height in RU'] = 'RU의 높이';

$GLOBALS["lang"]['Help'] = '지원하다';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = '자주 묻는 질문';

$GLOBALS["lang"]['high'] = '사이트맵';

$GLOBALS["lang"]['High'] = '사이트맵';

$GLOBALS["lang"]['High Availability'] = '높은 가용성';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '성 (Vatican City State)';

$GLOBALS["lang"]['Home'] = '홈 > 제품';

$GLOBALS["lang"]['home'] = '홈 > 제품';

$GLOBALS["lang"]['Home Area Network'] = '홈 지역 네트워크';

$GLOBALS["lang"]['Honduras'] = '채용정보';

$GLOBALS["lang"]['Hong Kong'] = '홍콩';

$GLOBALS["lang"]['host'] = '이름 *';

$GLOBALS["lang"]['Host'] = '이름 *';

$GLOBALS["lang"]['hostname'] = '이름 *';

$GLOBALS["lang"]['Hostname'] = '이름 *';

$GLOBALS["lang"]['hour'] = '시간 :';

$GLOBALS["lang"]['Hour'] = '시간 :';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = '왜 Open-AudIT 더 안전한가요?';

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

$GLOBALS["lang"]['Hungary'] = '한국어';

$GLOBALS["lang"]['hw_cpe'] = '사이트맵';

$GLOBALS["lang"]['Hw Cpe'] = '사이트맵';

$GLOBALS["lang"]['hyperthreading'] = '관련 기사';

$GLOBALS["lang"]['Hyperthreading'] = '관련 기사';

$GLOBALS["lang"]['I have read the EULA.'] = '나는 EULA를 읽었습니다.';

$GLOBALS["lang"]['id'] = '이름 *';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = '이름 *';

$GLOBALS["lang"]['IOS Version'] = 'IOS 버전';

$GLOBALS["lang"]['IP'] = 'IP 정보';

$GLOBALS["lang"]['ip'] = 'IP 정보';

$GLOBALS["lang"]['IP Address'] = 'IP 주소';

$GLOBALS["lang"]['IP Addresses'] = 'IP 주소';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 정보';

$GLOBALS["lang"]['IP Set By'] = 'IP 세트';

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

$GLOBALS["lang"]['If'] = '이름 *';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = '포트가 필터링 된 상태에서 응답하면 사용할 수 있습니다.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = '포트가 열리면|필터링 된 경우, 사용 가능한 것을 고려해야합니다.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = '원격 장치가 Open-AudIT 선택한 장치에서 존재하지 않으면 외부 시스템에서 삭제해야합니다.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudIT 장치가 변경되면 외부 시스템을 업데이트해야합니다.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Open-AudIT 장치가 외부 시스템에 있지 않으면 생성해야 합니다.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = '에이전트가 1 차 IP가이 하위넷에보고되면 작업을 수행합니다.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = '이러한 모든 경우 (일반적으로, 공간 없음) 포트가 감지되고, SSH가 그들을 실행하고 감사를 위해 그들을 사용합니다. 이 포트를 Custom TCP 포트에 추가할 필요가 없습니다 - 자동으로 추가됩니다.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '설정하면 특정 장치 열의 JSON 배열을 붙듭니다. 이 사용자는 설정 기본값보다 다른 것을 볼 수 있습니다.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = '에이전트 OS 가족 (case insensitive)이 문자열을 포함하면 작업을 수행합니다.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '다음 조건이 충족되면:<br/><ul><li>역할에는 할당된 ad_group가 있습니다.</li><li>Org에는 할당된 ad_group가 있습니다.</li><li>사이트맵 Server has use_roles set 에 y</li><li>사용자는 LDAP (Active Directory 또는 OpenLDAP)에 존재하며 할당된 ad_groups에 있습니다.</li></ul>이 사용자는 Open-AudIT의 계정 없이 Open-AudIT에 로그인할 수 있습니다. Open-AudIT는 질문에서 LDAP를 쿼리하고 사용자가 필요한 그룹에 있지만, Open-AudIT에서, 그들의 사용자 속성 (이름, 전체 이름, 이메일, 역할, orgs, 등) Open-AudIT 내에서 자동으로 채워질 것입니다.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Open-AudIT에 로그인하면 LDAP를 검색할 수 없습니다.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = '이 많거나 더 많은 분이 서버에 연락한 이후로 전달되면 작업을 수행합니다.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = '수집가를 선택하면 다음 5 분 경계에서 실행할 수 있습니다.';

$GLOBALS["lang"]['ifadminstatus'] = '계정 관리';

$GLOBALS["lang"]['Ifadminstatus'] = '계정 관리';

$GLOBALS["lang"]['iflastchange'] = '자주 묻는 질문';

$GLOBALS["lang"]['Iflastchange'] = '자주 묻는 질문';

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

$GLOBALS["lang"]['implementation_notes'] = '구현 노트';

$GLOBALS["lang"]['Implementation Notes'] = '구현 노트';

$GLOBALS["lang"]['Import'] = '제품정보';

$GLOBALS["lang"]['Import Example Data'] = '가져 오기 예 Data';

$GLOBALS["lang"]['improvement_opportunities'] = '개선 기회';

$GLOBALS["lang"]['Improvement Opportunities'] = '개선 기회';

$GLOBALS["lang"]['In'] = '내 계정';

$GLOBALS["lang"]['Inactive'] = '관련 기사';

$GLOBALS["lang"]['Include'] = '이름 *';

$GLOBALS["lang"]['Incomplete'] = '불완전한';

$GLOBALS["lang"]['Index'] = '주요사업';

$GLOBALS["lang"]['India'] = '주요 특징';

$GLOBALS["lang"]['Indonesia'] = '한국어';

$GLOBALS["lang"]['Info'] = '- 한국어';

$GLOBALS["lang"]['Informational'] = '- 연혁';

$GLOBALS["lang"]['initial_size'] = '초기 크기';

$GLOBALS["lang"]['Initial Size'] = '초기 크기';

$GLOBALS["lang"]['inode'] = '로그인';

$GLOBALS["lang"]['Inode'] = '로그인';

$GLOBALS["lang"]['Input Type'] = '입력 유형';

$GLOBALS["lang"]['inputs'] = '제품정보';

$GLOBALS["lang"]['Inputs'] = '제품정보';

$GLOBALS["lang"]['Insane'] = '담당자: Insane';

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

$GLOBALS["lang"]['installed_by'] = '설치';

$GLOBALS["lang"]['Installed By'] = '설치';

$GLOBALS["lang"]['installed_on'] = '설치하기';

$GLOBALS["lang"]['Installed On'] = '설치하기';

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

$GLOBALS["lang"]['interface'] = '제품 설명';

$GLOBALS["lang"]['Interface'] = '제품 설명';

$GLOBALS["lang"]['interface_id'] = '인터페이스 ID';

$GLOBALS["lang"]['Interface ID'] = '인터페이스 ID';

$GLOBALS["lang"]['interface_type'] = '공용영역 유형';

$GLOBALS["lang"]['Interface Type'] = '공용영역 유형';

$GLOBALS["lang"]['Internal'] = '내 계정';

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

$GLOBALS["lang"]['Italy'] = '담당자: Mr. Li';

$GLOBALS["lang"]['Items not in Baseline'] = 'Baseline의 항목';

$GLOBALS["lang"]['JSON'] = '구글 맵';

$GLOBALS["lang"]['JSON to Import'] = 'JSON 가져오기';

$GLOBALS["lang"]['Jamaica'] = '자메이카';

$GLOBALS["lang"]['January'] = '1월 1일';

$GLOBALS["lang"]['Japan'] = '일본국';

$GLOBALS["lang"]['Jersey'] = '한국어';

$GLOBALS["lang"]['Jordan'] = '한국어';

$GLOBALS["lang"]['July'] = '7 월';

$GLOBALS["lang"]['June'] = '6 월';

$GLOBALS["lang"]['Kazakhstan'] = '주요 특징';

$GLOBALS["lang"]['Kenya'] = '담당자: Ms.';

$GLOBALS["lang"]['kernel_version'] = 'Kernel 버전';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel 버전';

$GLOBALS["lang"]['Key'] = '이름 *';

$GLOBALS["lang"]['Key Password (optional)'] = '(선택) 중요한 암호';

$GLOBALS["lang"]['keys'] = '주요 특징';

$GLOBALS["lang"]['Keys'] = '주요 특징';

$GLOBALS["lang"]['Kiribati'] = '키리바시';

$GLOBALS["lang"]['Korea'] = '한국어';

$GLOBALS["lang"]['Kuwait'] = '쿠웨이트';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyz 공화국';

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

$GLOBALS["lang"]['lastModified'] = '최근Modified';

$GLOBALS["lang"]['LastModified'] = '최근Modified';

$GLOBALS["lang"]['latitude'] = '이름 *';

$GLOBALS["lang"]['Latitude'] = '이름 *';

$GLOBALS["lang"]['Latvia'] = '라트비아';

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

$GLOBALS["lang"]['level'] = '기본 정보';

$GLOBALS["lang"]['Level'] = '기본 정보';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = '악용에 필요한 권한의 수준 (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = '리비아';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = '리비아 아랍 Jamahiriya';

$GLOBALS["lang"]['License'] = '이름 *';

$GLOBALS["lang"]['License Key'] = '라이센스 키';

$GLOBALS["lang"]['License Required'] = '법적 고지';

$GLOBALS["lang"]['licenses'] = '이름 *';

$GLOBALS["lang"]['Licenses'] = '이름 *';

$GLOBALS["lang"]['Liechtenstein'] = '리히텐슈타인';

$GLOBALS["lang"]['Like'] = '이름 *';

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

$GLOBALS["lang"]['List'] = '이름 *';

$GLOBALS["lang"]['list_table_format'] = '테이블 형식';

$GLOBALS["lang"]['List Table Format'] = '테이블 형식';

$GLOBALS["lang"]['Lithuania'] = '한국어';

$GLOBALS["lang"]['Load Balancing'] = '부하 Balancing';

$GLOBALS["lang"]['Local'] = '한국어';

$GLOBALS["lang"]['Local Area Network'] = '지역 네트워크';

$GLOBALS["lang"]['local_port'] = '지역 항구';

$GLOBALS["lang"]['Local Port'] = '지역 항구';

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

$GLOBALS["lang"]['locations'] = '회사연혁';

$GLOBALS["lang"]['Locations'] = '회사연혁';

$GLOBALS["lang"]['Locations in this'] = '현재 위치';

$GLOBALS["lang"]['log'] = '로그인';

$GLOBALS["lang"]['Log'] = '로그인';

$GLOBALS["lang"]['log_format'] = '로그 형식';

$GLOBALS["lang"]['Log Format'] = '로그 형식';

$GLOBALS["lang"]['log_path'] = '로그 경로';

$GLOBALS["lang"]['Log Path'] = '로그 경로';

$GLOBALS["lang"]['log_rotation'] = '로그 회전';

$GLOBALS["lang"]['Log Rotation'] = '로그 회전';

$GLOBALS["lang"]['log_status'] = '로그인 상태';

$GLOBALS["lang"]['Log Status'] = '로그인 상태';

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

$GLOBALS["lang"]['Luxembourg'] = '룩셈부르크';

$GLOBALS["lang"]['MAC Address'] = 'MAC 주소';

$GLOBALS["lang"]['MAC Manufacturer'] = '주요 특징 주요 특징';

$GLOBALS["lang"]['mac'] = '한국어';

$GLOBALS["lang"]['Mac'] = '한국어';

$GLOBALS["lang"]['Mac Address'] = 'Mac 주소';

$GLOBALS["lang"]['MacOS'] = '맥 OS';

$GLOBALS["lang"]['Macao'] = '마카오';

$GLOBALS["lang"]['Macedonia'] = '맥도니아';

$GLOBALS["lang"]['Madagascar'] = '스낵 바';

$GLOBALS["lang"]['maintenance_expires'] = '유지 보수 Expires';

$GLOBALS["lang"]['Maintenance Expires'] = '유지 보수 Expires';

$GLOBALS["lang"]['Make My Default Dashboard'] = '내 기본 대시보드 만들기';

$GLOBALS["lang"]['Make this install a Collector'] = '수집방법';

$GLOBALS["lang"]['Malawi'] = '스낵 바';

$GLOBALS["lang"]['Malaysia'] = '주요 특징';

$GLOBALS["lang"]['Maldives'] = '주 메뉴';

$GLOBALS["lang"]['Mali'] = '담당자: Mali';

$GLOBALS["lang"]['Malta'] = '담당자: James';

$GLOBALS["lang"]['Manage'] = '계정 관리';

$GLOBALS["lang"]['Manage Licenses'] = '라이센스 관리';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMIS 관리';

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

$GLOBALS["lang"]['match_string'] = '일치 문자열';

$GLOBALS["lang"]['Match String'] = '일치 문자열';

$GLOBALS["lang"]['Matching Attribute'] = '매칭 Attribute';

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

$GLOBALS["lang"]['Mexico'] = '주요 시장';

$GLOBALS["lang"]['Micronesia'] = '마이크로네시아';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure 필드';

$GLOBALS["lang"]['microtime'] = '마이크로타임';

$GLOBALS["lang"]['Microtime'] = '마이크로타임';

$GLOBALS["lang"]['minute'] = '이름 *';

$GLOBALS["lang"]['Minute'] = '이름 *';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '마지막 감사 이후 분은 그 이상입니다.';

$GLOBALS["lang"]['model'] = '모델 번호:';

$GLOBALS["lang"]['Model'] = '모델 번호:';

$GLOBALS["lang"]['model_family'] = '모델 가족';

$GLOBALS["lang"]['Model Family'] = '모델 가족';

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

$GLOBALS["lang"]['Montenegro'] = '인기 카테고리';

$GLOBALS["lang"]['month'] = '월 ~ 월';

$GLOBALS["lang"]['Month'] = '월 ~ 월';

$GLOBALS["lang"]['Montserrat'] = '스낵 바';

$GLOBALS["lang"]['Morocco'] = '한국어';

$GLOBALS["lang"]['motherboard'] = '메인메뉴';

$GLOBALS["lang"]['Motherboard'] = '메인메뉴';

$GLOBALS["lang"]['mount_point'] = '산 점';

$GLOBALS["lang"]['Mount Point'] = '산 점';

$GLOBALS["lang"]['mount_type'] = '산 유형';

$GLOBALS["lang"]['Mount Type'] = '산 유형';

$GLOBALS["lang"]['Mozambique'] = '모잠비크';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Ping에 대응';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTE - 구성 아이템을 설정하여 아래의 일반 텍스트 식별을 방지할 수 있습니다. <code>decrypt_credentials</code> 으로 <code>n</code>·';

$GLOBALS["lang"]['name'] = '이름 *';

$GLOBALS["lang"]['Name'] = '이름 *';

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

$GLOBALS["lang"]['Network'] = '회사연혁';

$GLOBALS["lang"]['network_address'] = '네트워크 주소';

$GLOBALS["lang"]['Network Address'] = '네트워크 주소';

$GLOBALS["lang"]['network_domain'] = '네트워크 도메인';

$GLOBALS["lang"]['Network Domain'] = '네트워크 도메인';

$GLOBALS["lang"]['Network Types'] = '네트워크 유형';

$GLOBALS["lang"]['networks'] = '네트워크';

$GLOBALS["lang"]['Networks'] = '네트워크';

$GLOBALS["lang"]['Networks Generated By'] = 'Networks에 의해 생성';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDR 마스크를 사용하는 네트워크';

$GLOBALS["lang"]['New Building Name'] = '새로운 건물 이름';

$GLOBALS["lang"]['New Caledonia'] = '새로운 Caledonia';

$GLOBALS["lang"]['New Floor Name'] = '새 층 이름';

$GLOBALS["lang"]['New Room Name'] = '새 방 이름';

$GLOBALS["lang"]['New Row Name'] = '새로운 줄 이름';

$GLOBALS["lang"]['New Zealand'] = '뉴질랜드';

$GLOBALS["lang"]['News'] = '(주)';

$GLOBALS["lang"]['next_hop'] = '다음 홉';

$GLOBALS["lang"]['Next Hop'] = '다음 홉';

$GLOBALS["lang"]['next_run'] = '다음 실행';

$GLOBALS["lang"]['Next Run'] = '다음 실행';

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

$GLOBALS["lang"]['Node'] = '이름 *';

$GLOBALS["lang"]['None'] = '이름 *';

$GLOBALS["lang"]['Norfolk Island'] = '노퍽 섬';

$GLOBALS["lang"]['Normal'] = '일반 정보';

$GLOBALS["lang"]['Northern Mariana Islands'] = '북부 마리아나 제도';

$GLOBALS["lang"]['Norway'] = '한국어';

$GLOBALS["lang"]['Not Applicable'] = '적용 대상';

$GLOBALS["lang"]['Not Checked'] = '확인하기';

$GLOBALS["lang"]['Not Equals'] = '이름 *';

$GLOBALS["lang"]['Not In'] = '이름 *';

$GLOBALS["lang"]['Not Like'] = '이름 *';

$GLOBALS["lang"]['Not Set'] = '설정하기';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '일반적으로 사용되지 않음. 설정하면,이 장치가 응답을 고려하기 위해 열린 포트 (스캔 옵션 당)를 가지고 있어야합니다. MAC 주소, arp 응답 또는 ping 응답은 응답으로 간주 될 충분하지 않다. Open-AudIT 서버와 Target IP 사이의 라우터 또는 방화벽이 IP를 대신하여 포트 스캔에 대응하는 경우 유용합니다.';

$GLOBALS["lang"]['Note'] = '이름 *';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '참고 - 부모를 선택하면 자동으로 자녀에 액세스 할 수 있습니다 (여기서는 여기에 표시되지 않습니다).';

$GLOBALS["lang"]['Notes'] = '지원하다';

$GLOBALS["lang"]['notes'] = '지원하다';

$GLOBALS["lang"]['Notice'] = '- 연혁';

$GLOBALS["lang"]['notin'] = '이름 *';

$GLOBALS["lang"]['Notin'] = '이름 *';

$GLOBALS["lang"]['November'] = '11 월';

$GLOBALS["lang"]['nvd_json'] = 'Nvd 존';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd 존';

$GLOBALS["lang"]['ORDER BY'] = '주문하기';

$GLOBALS["lang"]['OS'] = '운영 체제';

$GLOBALS["lang"]['OS Families'] = 'OS 가족';

$GLOBALS["lang"]['OS Family'] = 'OS 가족';

$GLOBALS["lang"]['OS Group'] = 'OS 그룹';

$GLOBALS["lang"]['oae_manage'] = 'Oae 관리';

$GLOBALS["lang"]['Oae Manage'] = 'Oae 관리';

$GLOBALS["lang"]['object_ident'] = '목표 Ident';

$GLOBALS["lang"]['Object Ident'] = '목표 Ident';

$GLOBALS["lang"]['October'] = '10월';

$GLOBALS["lang"]['Oman'] = '오만';

$GLOBALS["lang"]['omk_uuid'] = 'Omk 우이드';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk 우이드';

$GLOBALS["lang"]['On'] = '이름 *';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = '한국어 <code>3x2</code>· <code>4x2</code>· <code>4x3</code> 또는 <code>4x4</code>·';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = '캠퍼스 지역 네트워크, 클라우드 네트워크, 엔터프라이즈 개인 네트워크, 홈 지역 네트워크, 지역 네트워크, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '개발, 재해 복구, 평가, 사전 제작, 생산, 테스트, 교육, 사용자 수용 테스트';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '할당, 위임, 계획, 예약, 취소, 알 수없는, 관리. 할당 된 기본값.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = '중 하나 <code>active directory</code> 또는 <code>openldap</code>·';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '한 가지 : 바이러스 백신, 백업, 방화벽, 승인, 금지, 무시 또는 기타.';

$GLOBALS["lang"]['Online Documentation'] = '온라인 문서';

$GLOBALS["lang"]['Open-AudIT'] = '오시는 길';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT 커뮤니티';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT 장치 선택';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT 기업';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT 기업. 대규모 유연한 발견 및 큰 네트워크에 대한 감사 솔루션. Professional plus의 모든 기능 : Baselines, File Auditing, Cloud Discovery, Rack Management, Active Directory 및 LDAP를 포함한 구성 가능한 역할 기반 액세스 제어.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT 필드 이름';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT 라이센스';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT 옵션';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT 전문가';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT 전문가 세계 \\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT 및 Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap 설치';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap 사용자 Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap 사용자 Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap 사용자 회원 속성';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap 사용자 회원 속성';

$GLOBALS["lang"]['open|filtered'] = '오픈|필터';

$GLOBALS["lang"]['Open|filtered'] = '오픈|필터';

$GLOBALS["lang"]['Operating System'] = '운영 체계';

$GLOBALS["lang"]['Operating System Family Contains'] = '운영 체제 가족 포함';

$GLOBALS["lang"]['Operating Systems'] = '운영 시스템';

$GLOBALS["lang"]['optical'] = '제품정보';

$GLOBALS["lang"]['Optical'] = '제품정보';

$GLOBALS["lang"]['Optimized'] = '설치하기';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT에 의해 감사되는 것과 같이 선택적인 버전. % sign %를 와일드 카드로 사용하십시오.';

$GLOBALS["lang"]['options'] = '옵션 정보';

$GLOBALS["lang"]['Options'] = '옵션 정보';

$GLOBALS["lang"]['Or select from the below fields.'] = '또는 아래 필드에서 선택하십시오.';

$GLOBALS["lang"]['org_descendants'] = 'Org 공상';

$GLOBALS["lang"]['Org Descendants'] = 'Org 공상';

$GLOBALS["lang"]['org_id'] = '또는 ID';

$GLOBALS["lang"]['Org ID'] = '또는 ID';

$GLOBALS["lang"]['Organisation'] = '회사연혁';

$GLOBALS["lang"]['organisation'] = '회사연혁';

$GLOBALS["lang"]['Organisation Descendants'] = '조직도';

$GLOBALS["lang"]['Organisations'] = '회사연혁';

$GLOBALS["lang"]['orgs'] = '뚱 베어';

$GLOBALS["lang"]['Orgs'] = '뚱 베어';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs 이름';

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

$GLOBALS["lang"]['Others'] = '이름 *';

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

$GLOBALS["lang"]['PHP'] = 'PHP를';

$GLOBALS["lang"]['POD'] = '사이트맵';

$GLOBALS["lang"]['Package'] = '제품 정보';

$GLOBALS["lang"]['packages'] = '제품정보';

$GLOBALS["lang"]['Packages'] = '제품정보';

$GLOBALS["lang"]['pagefile'] = '언어 선택';

$GLOBALS["lang"]['Pagefile'] = '언어 선택';

$GLOBALS["lang"]['Pakistan'] = '파키스탄';

$GLOBALS["lang"]['Palau'] = '스낵 바';

$GLOBALS["lang"]['Palestinian Territory'] = '팔레스타인 Territory';

$GLOBALS["lang"]['Panama'] = '파나마';

$GLOBALS["lang"]['Papua New Guinea'] = '파푸아 뉴기니';

$GLOBALS["lang"]['Paraguay'] = '채용정보';

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

$GLOBALS["lang"]['permission'] = '제출';

$GLOBALS["lang"]['Permission'] = '제출';

$GLOBALS["lang"]['permissions'] = '제출';

$GLOBALS["lang"]['Permissions'] = '제출';

$GLOBALS["lang"]['Personal Area Network'] = '개인 영역 네트워크';

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

$GLOBALS["lang"]['ping'] = '핑거';

$GLOBALS["lang"]['Ping'] = '핑거';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn 제도';

$GLOBALS["lang"]['placement'] = '회사연혁';

$GLOBALS["lang"]['Placement'] = '회사연혁';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Open-AudIT 관리자 로고를 가지고 데이터베이스를 업그레이드하십시오.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '선택 상자가 텍스트 입력 상자를 삭제하는 것을주의하십시오.';

$GLOBALS["lang"]['Please set using'] = '자주 묻는 질문';

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

$GLOBALS["lang"]['Polite'] = '제품 정보';

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

$GLOBALS["lang"]['position'] = '제품정보';

$GLOBALS["lang"]['Position'] = '제품정보';

$GLOBALS["lang"]['postcode'] = '우편번호';

$GLOBALS["lang"]['Postcode'] = '우편번호';

$GLOBALS["lang"]['power_circuit'] = '힘 회로';

$GLOBALS["lang"]['Power Circuit'] = '힘 회로';

$GLOBALS["lang"]['power_sockets'] = '힘 소켓';

$GLOBALS["lang"]['Power Sockets'] = '힘 소켓';

$GLOBALS["lang"]['Predictable'] = '옵션 정보';

$GLOBALS["lang"]['Preferences'] = '옵션 정보';

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

$GLOBALS["lang"]['profile'] = '이름 *';

$GLOBALS["lang"]['Profile'] = '이름 *';

$GLOBALS["lang"]['program'] = '- 연혁';

$GLOBALS["lang"]['Program'] = '- 연혁';

$GLOBALS["lang"]['protocol'] = '프로젝트';

$GLOBALS["lang"]['Protocol'] = '프로젝트';

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

$GLOBALS["lang"]['Query'] = '글쓰기';

$GLOBALS["lang"]['queue'] = '이름 *';

$GLOBALS["lang"]['Queue'] = '이름 *';

$GLOBALS["lang"]['Queue Limit'] = 'Queue 한계';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued 장치 감사';

$GLOBALS["lang"]['Queued IP Scans'] = 'IP 스캔';

$GLOBALS["lang"]['Queued Items'] = '연락처';

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

$GLOBALS["lang"]['Red Query'] = '레드 Query';

$GLOBALS["lang"]['Redirect URI'] = '리디렉션 URI';

$GLOBALS["lang"]['redirect_uri'] = '리디렉션 Uri';

$GLOBALS["lang"]['Redirect Uri'] = '리디렉션 Uri';

$GLOBALS["lang"]['references'] = '이름 *';

$GLOBALS["lang"]['References'] = '이름 *';

$GLOBALS["lang"]['region'] = '이름 *';

$GLOBALS["lang"]['Region'] = '이름 *';

$GLOBALS["lang"]['registered_user'] = '등록된 사용자';

$GLOBALS["lang"]['Registered User'] = '등록된 사용자';

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

$GLOBALS["lang"]['Report'] = '제품정보';

$GLOBALS["lang"]['Report on your devices, networks and more'] = '당신의 장치, 네트워크 및 더 많은 것에 보고';

$GLOBALS["lang"]['reportable'] = '관련 기사';

$GLOBALS["lang"]['Reportable'] = '관련 기사';

$GLOBALS["lang"]['Reports'] = '제품정보';

$GLOBALS["lang"]['request'] = '제품 정보';

$GLOBALS["lang"]['Request'] = '제품 정보';

$GLOBALS["lang"]['Request a Specific CVE'] = '견적 요청 사이트맵';

$GLOBALS["lang"]['requested'] = '지원하다';

$GLOBALS["lang"]['Requested'] = '지원하다';

$GLOBALS["lang"]['require_port'] = 'Require 항구';

$GLOBALS["lang"]['Require Port'] = 'Require 항구';

$GLOBALS["lang"]['Require an Open Port'] = '오픈 포트 필요';

$GLOBALS["lang"]['Required'] = '견적 요청';

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

$GLOBALS["lang"]['Results'] = '이름 *';

$GLOBALS["lang"]['retrieved'] = '다운로드';

$GLOBALS["lang"]['Retrieved'] = '다운로드';

$GLOBALS["lang"]['retrieved_ident'] = '검색 Ident';

$GLOBALS["lang"]['Retrieved Ident'] = '검색 Ident';

$GLOBALS["lang"]['retrieved_name'] = '검색 이름';

$GLOBALS["lang"]['Retrieved Name'] = '검색 이름';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = '장치에서 검색 - Windows : Win32_ComputerSystemProduct, Linux : dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostvc/hostsummary, HP-UX:machinfo, 솔라리스:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = '지원하다';

$GLOBALS["lang"]['revision'] = '회사연혁';

$GLOBALS["lang"]['Revision'] = '회사연혁';

$GLOBALS["lang"]['risk_assesment_result'] = '위험 관리 결과';

$GLOBALS["lang"]['Risk Assesment Result'] = '위험 관리 결과';

$GLOBALS["lang"]['role'] = '사이트맵';

$GLOBALS["lang"]['Role'] = '사이트맵';

$GLOBALS["lang"]['roles'] = '제품정보';

$GLOBALS["lang"]['Roles'] = '제품정보';

$GLOBALS["lang"]['Romania'] = '한국어';

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

$GLOBALS["lang"]['Run Discovery'] = '디스커버리';

$GLOBALS["lang"]['Run Discovery on Devices'] = '장치에서 Discovery 실행';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '발견을 실행하고 알아 <b>어떤 네트워크?</b>';

$GLOBALS["lang"]['Run this Command'] = '이 명령을 실행';

$GLOBALS["lang"]['runas'] = '다운로드';

$GLOBALS["lang"]['Runas'] = '다운로드';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Windows에서 Open-AudIT Apache Service 실행';

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

$GLOBALS["lang"]['Save as Default'] = '기본 설정';

$GLOBALS["lang"]['scaling'] = '관련 상품';

$GLOBALS["lang"]['Scaling'] = '관련 상품';

$GLOBALS["lang"]['scan_options'] = '스캔 옵션';

$GLOBALS["lang"]['Scan Options'] = '스캔 옵션';

$GLOBALS["lang"]['Scan Options ID'] = '스캔 옵션 ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'TCP 포트의 Nmap 상단 번호를 스캔합니다.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'UDP 포트의 Nmap 상단 번호를 스캔합니다.';

$GLOBALS["lang"]['schedule'] = '일정표';

$GLOBALS["lang"]['Schedule'] = '일정표';

$GLOBALS["lang"]['scope'] = '관련 상품';

$GLOBALS["lang"]['Scope'] = '관련 상품';

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

$GLOBALS["lang"]['Search for Device'] = '장치 검색';

$GLOBALS["lang"]['Searching Using DataTables'] = 'DataTables를 사용하여 검색';

$GLOBALS["lang"]['secondary'] = '한국어';

$GLOBALS["lang"]['Secondary'] = '한국어';

$GLOBALS["lang"]['Secondary Text'] = '두 번째 텍스트';

$GLOBALS["lang"]['section'] = '이름 *';

$GLOBALS["lang"]['Section'] = '이름 *';

$GLOBALS["lang"]['secure'] = '제품정보';

$GLOBALS["lang"]['Secure'] = '제품정보';

$GLOBALS["lang"]['Security Name'] = '보안 이름';

$GLOBALS["lang"]['Security Status'] = '보안 상태';

$GLOBALS["lang"]['security_zone'] = '보안 영역';

$GLOBALS["lang"]['Security Zone'] = '보안 영역';

$GLOBALS["lang"]['seed_ip'] = '씨 IP';

$GLOBALS["lang"]['Seed IP'] = '씨 IP';

$GLOBALS["lang"]['seed_ping'] = '종자 Ping';

$GLOBALS["lang"]['Seed Ping'] = '종자 Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict 에 Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict 에 Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Subnet에 씨앗 제한';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Subnet에 씨앗 제한';

$GLOBALS["lang"]['Select'] = '제품정보';

$GLOBALS["lang"]['Select All'] = '모두 보기';

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

$GLOBALS["lang"]['Select a Table'] = '테이블 선택';

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

$GLOBALS["lang"]['service_version'] = '서비스 버전';

$GLOBALS["lang"]['Service Version'] = '서비스 버전';

$GLOBALS["lang"]['Set'] = '설치하기';

$GLOBALS["lang"]['set_by'] = '설정하기';

$GLOBALS["lang"]['Set By'] = '설정하기';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = '목록 화면의 테이블의 크기 (일반 또는 컴팩트)를 설정합니다.';

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

$GLOBALS["lang"]['short'] = '이름 *';

$GLOBALS["lang"]['Short'] = '이름 *';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '이 장치에서 모든 비 현재 데이터를 제거해야합니까?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = '이 파일 (또는 패턴)이보고 된 파일 제외에 사용되어야한다. 정상적으로, 감사 파일에, 이것은 설치됩니다 <code>y</code>·';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = '이 공급 업체가 FirstWave에서 취약점을 검색 할 때 사용됩니다.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = '원격 서비스에서 장치를 추가해야, 로컬.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '선택된 Org 및 Orgs 아이들에게이 라이센스를 적용해야합니까?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '우리가 필터링 포트가 개방 포트가 될 것을 고려해야 - 따라서 장치가 붙어있는 것처럼이 IP를 플래그?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '오픈 포트를 고려해야 합니다. – 이 IP를 기기에 부착한 상태에서 끌어올릴 수 있습니까?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = '웹 인터페이스에서이 그룹을 노출해야합니다.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = '웹 인터페이스의 보고서 메뉴 아래 보고서 목록에서이 쿼리를 노출해야합니다.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = '웹 인터페이스의 보고서 메뉴 아래 보고서 목록에서이 쿼리를 노출해야합니다.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '감사를 실행하고 제출해야합니다 (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDP 포트 161를 사용하여 SNMP를 테스트해야 합니다.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'TCP 포트 22을 사용하여 SSH 테스트해야 합니다.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCP 포트 135을 사용하여 WMI 테스트해야 합니다.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = '에이전트를 제거해야 (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = '이 방법을 사용하여 사용자 자격 증명을 인증합니다. 설정하기 <code>y</code> 또는 <code>n</code>·';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = '우리는이 방법을 사용하여 사용자가 역할을합니다. 제품정보 <code>use_auth</code> 설정하기 <code>y</code> 이용하기 설정하기 <code>y</code> 또는 <code>n</code>·';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = '슬로바키아 (슬로바키아)';

$GLOBALS["lang"]['Slovenia'] = '한국어';

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

$GLOBALS["lang"]['socket'] = '관련 제품';

$GLOBALS["lang"]['Socket'] = '관련 제품';

$GLOBALS["lang"]['software'] = '소프트웨어';

$GLOBALS["lang"]['Software'] = '소프트웨어';

$GLOBALS["lang"]['Software Found Last 7 Days'] = '지난 7일 간 소프트웨어';

$GLOBALS["lang"]['Software Found Today'] = 'Software 오늘 발견';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software 어제 발견';

$GLOBALS["lang"]['software_key'] = '소프트웨어 키';

$GLOBALS["lang"]['Software Key'] = '소프트웨어 키';

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

$GLOBALS["lang"]['started_date'] = '시작 날짜';

$GLOBALS["lang"]['Started Date'] = '시작 날짜';

$GLOBALS["lang"]['state'] = '주요 특징';

$GLOBALS["lang"]['State'] = '주요 특징';

$GLOBALS["lang"]['Stats'] = '통계 정보';

$GLOBALS["lang"]['status'] = '주요연혁';

$GLOBALS["lang"]['Status'] = '주요연혁';

$GLOBALS["lang"]['Storage'] = '제품 정보';

$GLOBALS["lang"]['storage_count'] = '저장 조사';

$GLOBALS["lang"]['Storage Count'] = '저장 조사';

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

$GLOBALS["lang"]['Submitted From'] = '제출하기';

$GLOBALS["lang"]['subnet'] = '서브넷';

$GLOBALS["lang"]['Subnet'] = '서브넷';

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

$GLOBALS["lang"]['Summary'] = '제품정보';

$GLOBALS["lang"]['Sunday'] = '주 메뉴';

$GLOBALS["lang"]['supplier'] = '제품 정보';

$GLOBALS["lang"]['Supplier'] = '제품 정보';

$GLOBALS["lang"]['Support'] = '지원하다';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = '지원 유형은 <code>subnet</code>· <code>seed</code> · <code>active directory</code>·';

$GLOBALS["lang"]['Suriname'] = '이름 *';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = '스파 & 웰빙 센터';

$GLOBALS["lang"]['Swaziland'] = '체류 시간';

$GLOBALS["lang"]['Sweden'] = '한국어';

$GLOBALS["lang"]['switch_device_id'] = '스위치 장치 ID';

$GLOBALS["lang"]['Switch Device ID'] = '스위치 장치 ID';

$GLOBALS["lang"]['switch_port'] = '스위치 항구';

$GLOBALS["lang"]['Switch Port'] = '스위치 항구';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = '스위스, 스위스 Confederation';

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

$GLOBALS["lang"]['table'] = '제품정보';

$GLOBALS["lang"]['Table'] = '제품정보';

$GLOBALS["lang"]['tag'] = '제품 정보';

$GLOBALS["lang"]['Tag'] = '제품 정보';

$GLOBALS["lang"]['tag_1'] = '태그 1';

$GLOBALS["lang"]['Tag 1'] = '태그 1';

$GLOBALS["lang"]['tag_2'] = '태그 2';

$GLOBALS["lang"]['Tag 2'] = '태그 2';

$GLOBALS["lang"]['tag_3'] = '태그 3';

$GLOBALS["lang"]['Tag 3'] = '태그 3';

$GLOBALS["lang"]['tags'] = '이름 *';

$GLOBALS["lang"]['Tags'] = '이름 *';

$GLOBALS["lang"]['Tags :: '] = '태그 :: ';

$GLOBALS["lang"]['Taiwan'] = '주요 특징';

$GLOBALS["lang"]['Tajikistan'] = '타지키스탄';

$GLOBALS["lang"]['Tanzania'] = '주요 특징';

$GLOBALS["lang"]['task'] = '기타';

$GLOBALS["lang"]['Task'] = '기타';

$GLOBALS["lang"]['tasks'] = '기타';

$GLOBALS["lang"]['Tasks'] = '기타';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp 포트';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp 포트';

$GLOBALS["lang"]['tenant'] = '한국어';

$GLOBALS["lang"]['Tenant'] = '한국어';

$GLOBALS["lang"]['ternary'] = '한국어';

$GLOBALS["lang"]['Ternary'] = '한국어';

$GLOBALS["lang"]['Test 1'] = '시험 1';

$GLOBALS["lang"]['Test 2'] = '시험 2';

$GLOBALS["lang"]['Test 3'] = '시험 3';

$GLOBALS["lang"]['test_minutes'] = '시험 분';

$GLOBALS["lang"]['Test Minutes'] = '시험 분';

$GLOBALS["lang"]['test_os'] = '시험 Os';

$GLOBALS["lang"]['Test Os'] = '시험 Os';

$GLOBALS["lang"]['test_subnet'] = '서브넷 테스트';

$GLOBALS["lang"]['Test Subnet'] = '서브넷 테스트';

$GLOBALS["lang"]['tests'] = '테스트';

$GLOBALS["lang"]['Tests'] = '테스트';

$GLOBALS["lang"]['Text'] = '이름 *';

$GLOBALS["lang"]['Thailand'] = '담당자: Mr. Li';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory 도메인에서 하위 도메인 목록을 검색합니다.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory 서버에서 하위넷 목록을 검색합니다.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable 미터는 질문에 대한 답변을 캡처 <strong>이 취약점에 대한 공격자 automate 악용 이벤트를 여러 대상에 맞출 수 있습니까?</strong> kill chain의 1-4단계를 기반으로 합니다. 이 단계는 reconnaissance, 무기화, 납품, 및 악용 (Not Defined, 아니, 예)입니다.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE 식별자.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = '이 아이템을 소유하는 클라우드. 관련 기사 <code>clouds.id</code>·';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = '이 링크를 제공하는 ISP 또는 Telco.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Mitre에서 JSON 레코드.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD 피드에서 JSON 레코드.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = '이 사용자의 LDAP OU (LDAP가 사용되는 경우).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = '이 네트워크를 포함하는 위치. 관련 기사 <code>locations.id</code>·';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD는 기본 상태를 할당했습니다.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap 타이밍 preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS이 패키지에 대해보고해야합니다. 모든 것을 위한 공백. % sign %를 와일드 카드로 사용하십시오. os_group, os_family 및 os_name에 대해 테스트합니다.';

$GLOBALS["lang"]['The Open-AudIT API'] = '오픈 소스 API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = '연결된 클라우드의 Open-AudIT ID. 관련 기사 <code>clouds.id</code>·';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = '오시는 길 IT 서버 코드는 이 파일 내에서 exeucted.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = '오시는 길 IT 서버 코드는 이 기능 안에 exeucted.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = '이 아이템을 소유하는 조직. 관련 기사 <code>orgs.id</code>·';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '실행 관련 발견의 프로세스 식별자.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = '이 장치의 상단의 RU positon.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP 커뮤니티 문자열.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 인증 Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 인증 프로토콜.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 개인 정보 보호 Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 개인 정보 보호 프로토콜.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 보안 수준.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 보안 이름.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 컨텍스트 엔진 ID (옵션).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 컨텍스트 이름 (선택 사항).';

$GLOBALS["lang"]['The URL of the external system.'] = '외부 시스템의 URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = '당신의 Open-AudIT의 URL 이 수집가가가가 보고서를 할 수 있도록하는 서버 (길래 슬래시 없음).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '감사 스크립트는 결과를 제출해야 합니다.';

$GLOBALS["lang"]['The actual full name of this user.'] = '이 사용자의 실제 이름.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '관련 자료. 관련 기사 <code>baselines.id</code>·';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '관련 발견 (필수). 관련 기사 <code>discoveries.id</code>·';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = '시험의 속성 (from) <code>devices</code> 테이블).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = '테스트 속성 (아래에서 외부 필드 이름을 일치).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = '사용자 정의를 기본으로하는 감사 스크립트.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = '사용자를 검색하는 기본 경로.';

$GLOBALS["lang"]['The benchmark type.'] = '벤치 마크 유형.';

$GLOBALS["lang"]['The building the rack is located in.'] = '건물 선반은 안으로 있습니다.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '외부로 생성되는 장치의 산출 수.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT에서 생성될 수 있는 계산된 수.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '수집가 내부 IP는 발견을 실행할 때 사용됩니다.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '외국 테이블에서 열 이름. 클래스, 환경, 상태, 유형 또는 menu_category 중 하나가 있어야 합니다.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = '대상 장치 또는 Open-AudIT 서버 코드에서 실행되는 명령.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = '클러스터의 구성은: <code>active/active</code>· <code>active/passive</code>· <code>N+1</code>· <code>N+M</code>· <code>N-to-1</code>· <code>N-to-N</code>· <code>other</code> 또는 공백.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '비밀번호 credentials가 SSH 열쇠인 경우에, 이것은 열쇠를 자물쇠로 열기 위하여 이용된 암호이고 선택적입니다.';

$GLOBALS["lang"]['The credentials username.'] = '사용자 이름.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Cloud Discovery의 현재 상태.';

$GLOBALS["lang"]['The current status of the discovery.'] = '발견의 현재 상태.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = '이 사용자의 기본으로 표시될 대시보드. 관련 기사 <code>dashboards.id</code>·';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = '데이터베이스 버전 및 웹 버전은 일관성입니다.';

$GLOBALS["lang"]['The date of license expiration.'] = '라이센스 만료일.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = '이 날짜 소프트웨어는 제조업체에 의해 중단됩니다. 일반적으로 새 버전으로 교체. 유지 보수는 여전히 사용할 수 있습니다.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = '소프트웨어를 더 이상 업데이트하지 않고 효과적으로 중단 된 altogether. 유지 보수가 중단됩니다.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = '이 항목이 변경되거나 추가되었습니다 (읽기 만). NOTE - 서버에서 타임스탬프입니다.';

$GLOBALS["lang"]['The date/time when this result was created.'] = '이 결과가 생성된 날짜/시간.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '이 작업을 수행 할 때 달의 날 (* 매일).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = '이 작업이 실행되면 주일의 날 (* 매일).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = '이 방법으로 만든 모든 사용자에 할당 된 기본 언어.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = '장치는 온라인으로 간주되기 전에 Nmap에 응답해야합니다.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT 내의 장치. 관련 기사 <code>devices.id</code>·';

$GLOBALS["lang"]['The direct link for the script is'] = '스크립트에 대한 직접 링크는';

$GLOBALS["lang"]['The email address of the reciever'] = 'reciever의 이메일 주소';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'FirstWave의 엔터프라이즈 바이너리는 라이센스에 필요합니다. Open-AudIT 다운로드';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = '전체 관련 지형이 결과입니다.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '외부 참조 위치 ID. 클라우드 감사에 의해 일반적으로 대중화.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT가 이 장치의 세부 사항을 검색 한 첫 번째 시간.';

$GLOBALS["lang"]['The floor the rack is located on.'] = '바닥은 선반에 있습니다.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '참고로 외국 테이블. 장치, 위치, orgs 또는 쿼리 중 하나가 있어야합니다.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '출력에 사용 된 형식은 이메일입니다.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '그룹에 의해 완전히 자격이 된 열. NoteE: = 트래픽을 입력할 때, 이것은 빨간 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '완전히 자격이 된 table.column. 복수가 제공 될 수 있습니다, comma에 의해 분리 (공간 없음).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = '이 취약점을 테스트하는 생성 된 SQL 쿼리. 이 필드는 필수 쿼리를 수정할 수 있습니다.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'baseline이 런던 디바이스의 그룹.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '통합을위한 장치의 목록을 제공하는 그룹. 관련 기사 <code>groups.id</code>·';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '이 작업을 수행 할 때 일의 시간 (* 각 시간).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = '연결된 장치의 ID. 관련 기사 <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = '데이터베이스의 식별자 컬럼 (integer).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = '이 기준의 중요성 ( 아직 사용되지 않음).';

$GLOBALS["lang"]['The integer of severity.'] = '영원의 정수.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth 방법의 IP 주소.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = '웹 인터페이스를 사용자에게 번역하는 언어.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '마지막 날짜와 시간이 항목이 실행되었습니다 (읽기 만).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT가 이 장치의 세부 사항을 검색하는 마지막 시간.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = '마지막으로이 벤치 마크가 실행되었습니다.';

$GLOBALS["lang"]['The last time this integration was run.'] = '마지막으로이 통합이 실행되었습니다.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '최대 육체적인 무게 (KGs에서) 이 선반은 붙들 수 있습니다.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = '최대 총 BTUs 이 선반은 평가됩니다.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = '선택적인 이차 란. 참고 : = 트래픽을 입력하면 노란색 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = '선택적 세번째 열. 참고 : = 트래픽을 입력하면 녹색 쿼리 ID를 나타냅니다.';

$GLOBALS["lang"]['The orientation of this device.'] = '이 장치의 방향.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = '이 큐 항목의 프로세스 식별자.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = '기기에 대한 세부 정보를 검색하기 위해 마지막으로 사용 된 프로세스';

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

$GLOBALS["lang"]['The result of the command.'] = '명령의 결과.';

$GLOBALS["lang"]['The room the rack is located in.'] = '방은 선반에 있습니다.';

$GLOBALS["lang"]['The row the rack is located in.'] = '행 선반은 안으로 있습니다.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API 키와 함께 사용되는 비밀 키.';

$GLOBALS["lang"]['The software end-of-life date.'] = '소프트웨어 end-of-life 날짜.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = '소프트웨어 end-of-service-life 날짜.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '지정된 데이터베이스 테이블에서 특정 데이터베이스 열.';

$GLOBALS["lang"]['The specific database table.'] = '특정 데이터베이스 테이블.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = '표준 Nmap 타이밍 옵션. 우리는 일반적으로 - T4 (Aggressive)를 사용하여 괜찮은 광대역 또는 ethernet 연결을 권장합니다.';

$GLOBALS["lang"]['The status of this integration'] = '이 통합의 상태';

$GLOBALS["lang"]['The status of this queued item.'] = '이 누적 품목의 상태.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = '대상 IP 이 로그 항목 참조 (if any).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = '이 서버의 고유 식별자.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = '사용자 계정 이 수집가 사용. 관련 기사 <code>users.id</code>·';

$GLOBALS["lang"]['The username used to access the external system.'] = '외부 시스템에 액세스하는 데 사용되는 사용자.';

$GLOBALS["lang"]['The users email address.'] = '사용자 이메일 주소.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '이 사이트에서 작업의 일반적인 시간.';

$GLOBALS["lang"]['The value assigned to the item.'] = '아이템에 할당된 값.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = '이 특정 항목에 저장되는 값.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPE 항목에 따라 공급 업체 이름.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPE에서 가져온 공급 업체.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT가 설치되는 호스트의 웹 디렉토리 ( 트레일 슬래시 필요).';

$GLOBALS["lang"]['The widget at position '] = '위치의 위젯 ';

$GLOBALS["lang"]['The width of this device.'] = '이 장치의 폭.';

$GLOBALS["lang"]['Then'] = '다음 것';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = '이 CVE는 존재한다면 기존의 CVE를 재평가하고 과도하게 됩니다.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = '이 속성은 JSON 객체로 저장됩니다. 모든 컬렉션의 목록이며 수집 이름을 포함 <code>c</code>· <code>r</code>· <code>u</code> 그리고, <code>d</code> 생성, 읽기, 업데이트 및 삭제를 나타냅니다. 이 작업은 특정 컬렉션에서 항목을 수행 할 수 있습니다.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = '이것은 varchar (a text field), 목록 (선택할 수 있는 값의 목록) 또는 날짜 일 수 있습니다.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = '이 수집가는 보편적으로 독특한 식별자.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = '이 묘사는 자동 대중화되고 이상적으로 남아 있어야 합니다.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = '이 기능은 Professional 또는 Enterprise 라이센스가 필요합니다.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = '이것은 일반적으로 기본 열입니다. 그렇지 않으면 구성되지 않습니다. 참고: = 트래픽을 입력할 때, 이차 텍스트를 나타냅니다.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = '이 항목은 선택된 속성의 값을 일치하거나 사용 될 쿼리의 ID를 포함해야합니다.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = '이 항목은 선택한 속성의 값을 일치해야합니다.';

$GLOBALS["lang"]['This license expires on'] = '이 라이선스는 만료됩니다.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = '이것은 선반의 1 또는 고도로 놓아야 합니다.';

$GLOBALS["lang"]['This will auto-populate.'] = '이것은 자동 Populate 것입니다.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '이 발견 스캔을 상당히 느리게합니다.';

$GLOBALS["lang"]['Thursday'] = '주 메뉴';

$GLOBALS["lang"]['time_caption'] = '시간 Caption';

$GLOBALS["lang"]['Time Caption'] = '시간 Caption';

$GLOBALS["lang"]['time_daylight'] = '시간 일광';

$GLOBALS["lang"]['Time Daylight'] = '시간 일광';

$GLOBALS["lang"]['Time to Execute'] = '실행 시간';

$GLOBALS["lang"]['timeout'] = '시간 아웃';

$GLOBALS["lang"]['Timeout'] = '시간 아웃';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = '대상당 타임아웃 (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = '스크린 샷';

$GLOBALS["lang"]['Timestamp'] = '스크린 샷';

$GLOBALS["lang"]['timing'] = '연락처';

$GLOBALS["lang"]['Timing'] = '연락처';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-리스테';

$GLOBALS["lang"]['Title'] = '이름 *';

$GLOBALS["lang"]['Togo'] = '토토사이트';

$GLOBALS["lang"]['Tokelau'] = '토켈라우';

$GLOBALS["lang"]['Tonga'] = '팟캐스트';

$GLOBALS["lang"]['toolbar_style'] = '툴바 스타일';

$GLOBALS["lang"]['Toolbar Style'] = '툴바 스타일';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = '상위 Nmap TCP 포트';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = '탑 Nmap UDP 포트';

$GLOBALS["lang"]['Traditional Chinese'] = '전통 중국';

$GLOBALS["lang"]['Traffic Light'] = '교통 빛';

$GLOBALS["lang"]['Trinidad and Tobago'] = '트리니다드 토바고';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAP 로그인';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Open-AudIT Enterprise의 무료 100 장치 라이센스를 갖춘 모든 최신 기능을보십시오. <a href="를 읽으십시오';

$GLOBALS["lang"]['Tuesday'] = '(주)';

$GLOBALS["lang"]['Tunisia'] = '카테고리';

$GLOBALS["lang"]['Turkey'] = '뚱 베어';

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

$GLOBALS["lang"]['URL'] = '사이트 맵';

$GLOBALS["lang"]['uuid'] = '사이트맵';

$GLOBALS["lang"]['UUID'] = '사이트맵';

$GLOBALS["lang"]['udp_ports'] = 'Udp 포트';

$GLOBALS["lang"]['Udp Ports'] = 'Udp 포트';

$GLOBALS["lang"]['Uganda'] = '한국어';

$GLOBALS["lang"]['Ukraine'] = '주요 특징';

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

$GLOBALS["lang"]['Use SNMP'] = 'SNMP 사용';

$GLOBALS["lang"]['Use SSH'] = 'SSH 사용';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = '안전한 사용 (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = '서비스 버전 탐지';

$GLOBALS["lang"]['Use WMI'] = 'WMI 사용';

$GLOBALS["lang"]['Use for Authentication'] = '인증에 대한 사용';

$GLOBALS["lang"]['Use for Roles'] = '역할 사용';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = '사용자, 역할 및 Orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Auth를 위한 Entra 사용하기';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Auth를 위한 OKTA 사용하기';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = '일반적으로 위치 A에서 Mb / s.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = '위치 B에서 보통 Mb/s.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = '일반적으로 Mb / s, 위치 A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = '일반적으로 Mb / s, 위치 B.';

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

$GLOBALS["lang"]['values'] = '제품정보';

$GLOBALS["lang"]['Values'] = '제품정보';

$GLOBALS["lang"]['Vanuatu'] = '한국어';

$GLOBALS["lang"]['VarChar'] = '스낵 바';

$GLOBALS["lang"]['Varchar'] = '스낵 바';

$GLOBALS["lang"]['variable'] = '옵션 정보';

$GLOBALS["lang"]['Variable'] = '옵션 정보';

$GLOBALS["lang"]['vendor'] = '회사 소개';

$GLOBALS["lang"]['Vendor'] = '회사 소개';

$GLOBALS["lang"]['vendors'] = '회사 소개';

$GLOBALS["lang"]['Vendors'] = '회사 소개';

$GLOBALS["lang"]['Venezuela'] = '베네수엘라';

$GLOBALS["lang"]['version'] = '이름 *';

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

$GLOBALS["lang"]['View'] = '- 연혁';

$GLOBALS["lang"]['View All'] = '모두 보기';

$GLOBALS["lang"]['View Details'] = '더 보기';

$GLOBALS["lang"]['View Device'] = '공지사항';

$GLOBALS["lang"]['View Discovery'] = 'View 디스커버리';

$GLOBALS["lang"]['View Policy'] = '공지사항';

$GLOBALS["lang"]['Virtual Private Network'] = '가상 사설망';

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

$GLOBALS["lang"]['vulnerability_id'] = '취약점 ID';

$GLOBALS["lang"]['Vulnerability ID'] = '취약점 ID';

$GLOBALS["lang"]['WHERE'] = '팟캐스트';

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

$GLOBALS["lang"]['Web'] = '웹 사이트';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'FirstWave Open-AudIT에 오신 것을 환영합니다.';

$GLOBALS["lang"]['Western Sahara'] = '양 사하라';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '나는 Credentials가없는 경우 무엇을 기대할 수 있습니까?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '이 선반의 목적은 무엇입니까?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '이 위치의 유형은 무엇입니까? 사용 가능한 유형 <code>attributes</code> 테이블.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '외부 시스템에서 장치를 통합 할 때, 장치가 Open-AudIT에 존재하지 않으면 우리는 그것을 만들 수 있습니까?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '외부 시스템에서 장치를 통합 할 때, 장치가 외부 시스템에 업데이트되면 Open-AudIT에서 업데이트해야합니까?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '외부 장치를 검색할 때, 발견을 실행해야 합니까?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = '이 벤치 마크가 실행될 예정일 때. 관련 법령 <code>tasks.type</code> · <code>tasks.sub_resource_id</code>·';

$GLOBALS["lang"]['When this log was created.'] = '이 로그가 생성되었을 때.';

$GLOBALS["lang"]['When this queue item started processing.'] = '이 큐 항목이 처리를 시작했을 때.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = '우리는이 기본을 실행할 때, 우리는이 기본에 대한 정책이 아닌 장치에서 항목을 확인해야합니다.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '오픈 포트를 받으면 현재 실행중인 서비스의 버전에 대한 테스트를 시도해야합니까? 실제 실행 서비스를 확인하는 데 도움이.';

$GLOBALS["lang"]['where'] = '이름 *';

$GLOBALS["lang"]['Where'] = '이름 *';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = '장치 세부 화면에서이 필드가 나타납니다.';

$GLOBALS["lang"]['Where the rack is in the row.'] = '선반은 행에 있습니다.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '취약점은 충격, 가용성 및 기밀성을 사용하여 자체를 넘어 구성 요소에 영향을 미칩니다.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '사용자 상호 작용이 필요한지 (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = '어떤 OS이 벤치 마크가 적용됩니다.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '어떤 장치가 외부 시스템에서 Open-AudIT 생성해야 (모든 경우). 모든 것을 사용, 없음 또는 주어진 속성.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = '어떤 sub-menu를 표시해야 합니다.';

$GLOBALS["lang"]['Who made this rack.'] = '누가이 선반을 만들었습니다.';

$GLOBALS["lang"]['Why Windows Server Only?'] = '왜 Windows 서버만?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '왜 우리는이 정책을 제외합니까?';

$GLOBALS["lang"]['Wide Area Network'] = '넓은 지역 네트워크';

$GLOBALS["lang"]['Widget'] = '다운로드';

$GLOBALS["lang"]['Widget # '] = '위젯 # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget 유형';

$GLOBALS["lang"]['widgets'] = '다운로드';

$GLOBALS["lang"]['Widgets'] = '다운로드';

$GLOBALS["lang"]['width'] = '폭 (mm)';

$GLOBALS["lang"]['Width'] = '폭 (mm)';

$GLOBALS["lang"]['windows'] = '윈도우';

$GLOBALS["lang"]['Windows'] = '윈도우';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows 테스트 스크립트';

$GLOBALS["lang"]['Wireless Local Area Network'] = '무선 지역 네트워크';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi 실패';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi 실패';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi 타임아웃';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi 타임아웃';

$GLOBALS["lang"]['workgroup'] = '작업 그룹';

$GLOBALS["lang"]['Workgroup'] = '작업 그룹';

$GLOBALS["lang"]['Working Credentials'] = '작업 Credentials';

$GLOBALS["lang"]['XML'] = '사이트맵';

$GLOBALS["lang"]['Yellow Query'] = '황색 조회';

$GLOBALS["lang"]['Yemen'] = '예멘';

$GLOBALS["lang"]['Yes'] = '이름 *';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = '이 URL을 복사하고 붙여 넣을 수 있습니다.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '새로운 라이선스를 추가하기 전에 기존 라이선스를 삭제해야 합니다.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube 자습서';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API 키입니다.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'JSON으로 Google Compute 자격 증명.';

$GLOBALS["lang"]['Your Licenses'] = '귀하의 라이센스';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure 클라이언트 ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure 클라이언트 비밀.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure 구독 ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = '귀하의 Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = '이 쿼리를 팝업하는 속성을 선택하기 위해 SQL.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = '이 그룹을 팝업하는 장치를 선택하기 위해 SQL.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH 키.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = '해당 클라우드 기본 API에 따라 액세스 자격 증명.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = '이 연결 상태의 설명 (제공, 은퇴, 등).';

$GLOBALS["lang"]['Your description of this item.'] = '이 항목의 설명.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = '이 소프트웨어의 작품에 대한 일반적인 이름';

$GLOBALS["lang"]['Your generic version for this piece of software'] = '소프트웨어의이 조각에 대한 당신의 일반적인 버전';

$GLOBALS["lang"]['Zambia'] = '한국어';

$GLOBALS["lang"]['Zimbabwe'] = '짐바브웨';

$GLOBALS["lang"]['active'] = '이름 *';

$GLOBALS["lang"]['active directory'] = '관련 링크';

$GLOBALS["lang"]['active/active'] = '활동/활동';

$GLOBALS["lang"]['active/passive'] = '활동/수동';

$GLOBALS["lang"]['advertisement'] = '광고안내';

$GLOBALS["lang"]['alert'] = '계정 관리';

$GLOBALS["lang"]['all'] = '모든 것';

$GLOBALS["lang"]['allocated'] = '분류되지 않음';

$GLOBALS["lang"]['amazon'] = '하마존';

$GLOBALS["lang"]['antivirus'] = '안티 바이러스';

$GLOBALS["lang"]['application'] = '제품정보';

$GLOBALS["lang"]['approved'] = '이름 *';

$GLOBALS["lang"]['attribute'] = '이름 *';

$GLOBALS["lang"]['auto'] = '자동차';

$GLOBALS["lang"]['backup'] = '지원하다';

$GLOBALS["lang"]['banned'] = '이름 *';

$GLOBALS["lang"]['blog'] = '블로그';

$GLOBALS["lang"]['bottom'] = '이름 *';

$GLOBALS["lang"]['browser_lang'] = '비밀번호';

$GLOBALS["lang"]['building'] = '회사연혁';

$GLOBALS["lang"]['cloud'] = '구름 많음';

$GLOBALS["lang"]['code'] = '이름 *';

$GLOBALS["lang"]['collector'] = '회사 소개';

$GLOBALS["lang"]['compute'] = '뚱 베어';

$GLOBALS["lang"]['config'] = 'config 설정';

$GLOBALS["lang"]['contains'] = '지원하다';

$GLOBALS["lang"]['create'] = '지원하다';

$GLOBALS["lang"]['created'] = '제품정보';

$GLOBALS["lang"]['critical'] = '제품정보';

$GLOBALS["lang"]['cve'] = '뚱 베어';

$GLOBALS["lang"]['database'] = '관련 기사';

$GLOBALS["lang"]['debug'] = '디버그';

$GLOBALS["lang"]['delegated'] = '이름 *';

$GLOBALS["lang"]['delete'] = '기타 제품';

$GLOBALS["lang"]['deleted'] = '이름 *';

$GLOBALS["lang"]['denied'] = '뚱 베어';

$GLOBALS["lang"]['devices'] = '제품정보';

$GLOBALS["lang"]['digitalocean'] = '채용정보';

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

$GLOBALS["lang"]['fixed'] = '설치하기';

$GLOBALS["lang"]['floor'] = '1 층';

$GLOBALS["lang"]['front'] = '오시는 길';

$GLOBALS["lang"]['front-left'] = '오시는 길';

$GLOBALS["lang"]['front-right'] = '프론트라이트';

$GLOBALS["lang"]['github'] = 'github의';

$GLOBALS["lang"]['google'] = '구글 +';

$GLOBALS["lang"]['greater or equals'] = '더 중대한 동등물';

$GLOBALS["lang"]['greater than'] = '더 많은 것';

$GLOBALS["lang"]['group'] = '이름 *';

$GLOBALS["lang"]['head'] = '이름 *';

$GLOBALS["lang"]['here'] = '이름 *';

$GLOBALS["lang"]['high availability'] = '높은 가용성';

$GLOBALS["lang"]['howto'] = '사이트 맵';

$GLOBALS["lang"]['ignored'] = '이름 *';

$GLOBALS["lang"]['in'] = '내 계정';

$GLOBALS["lang"]['inactive'] = '관련 제품';

$GLOBALS["lang"]['incomplete'] = '전체장편';

$GLOBALS["lang"]['info'] = '제품 정보';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), 기타';

$GLOBALS["lang"]['is licensed to'] = '관련 상품';

$GLOBALS["lang"]['left'] = '이름 *';

$GLOBALS["lang"]['less or equals'] = '더 적은 또는 동등물';

$GLOBALS["lang"]['less than'] = '더 적은 보다는';

$GLOBALS["lang"]['license'] = '이름 *';

$GLOBALS["lang"]['like'] = '이름 *';

$GLOBALS["lang"]['line'] = '제품정보';

$GLOBALS["lang"]['load balancing'] = '짐 균형을 잡기';

$GLOBALS["lang"]['location'] = '이름 *';

$GLOBALS["lang"]['managed'] = '회사연혁';

$GLOBALS["lang"]['microsoft'] = '마이크로 소프트';

$GLOBALS["lang"]['mount point'] = '산 점';

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

$GLOBALS["lang"]['openldap'] = '공지사항';

$GLOBALS["lang"]['optimized'] = '제품정보';

$GLOBALS["lang"]['optionally '] = '옵션으로 ';

$GLOBALS["lang"]['other'] = '이름 *';

$GLOBALS["lang"]['package'] = '제품 설명';

$GLOBALS["lang"]['partition'] = '파일 형식';

$GLOBALS["lang"]['pass'] = '패스워드';

$GLOBALS["lang"]['pending'] = '뚱 베어';

$GLOBALS["lang"]['performance'] = '제품정보';

$GLOBALS["lang"]['performed'] = '관련 기사';

$GLOBALS["lang"]['pie'] = '뚱 베어';

$GLOBALS["lang"]['planning'] = '회사연혁';

$GLOBALS["lang"]['predictable'] = '견적 요청';

$GLOBALS["lang"]['query'] = '이름 *';

$GLOBALS["lang"]['rear'] = '기타 제품';

$GLOBALS["lang"]['rear-left'] = '후방 좌측';

$GLOBALS["lang"]['rear-right'] = '후방 빛';

$GLOBALS["lang"]['regex'] = '구독하기';

$GLOBALS["lang"]['release'] = '이름 *';

$GLOBALS["lang"]['reserved'] = 'ο 회원 관리';

$GLOBALS["lang"]['right'] = '견적 요청';

$GLOBALS["lang"]['room'] = '룸 룸';

$GLOBALS["lang"]['row'] = '이름 *';

$GLOBALS["lang"]['stand-alone'] = '대외협력';

$GLOBALS["lang"]['standard'] = '표준 크기';

$GLOBALS["lang"]['starts with'] = '시작하기';

$GLOBALS["lang"]['storage'] = '제품정보';

$GLOBALS["lang"]['timestamp'] = '타임 스탬프';

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

$GLOBALS["lang"]['unallocated'] = '기타 제품';

$GLOBALS["lang"]['unauthorised'] = '관련 제품';

$GLOBALS["lang"]['unknown'] = '이름 *';

$GLOBALS["lang"]['unmanaged'] = '계정 관리';

$GLOBALS["lang"]['unused'] = '뚱 베어';

$GLOBALS["lang"]['update'] = '지원하다';

$GLOBALS["lang"]['valid'] = '인증: CE';

$GLOBALS["lang"]['virtualisation'] = '가상화';

$GLOBALS["lang"]['warning'] = '이름 *';

$GLOBALS["lang"]['web'] = '웹 사이트';

$GLOBALS["lang"]['yes'] = '이름 *';

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

