<?php
$GLOBALS["lang"][' Default, currently '] = ' デフォルト, 現在 ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' 何かが期待どおりに機能しない場合は、まず最初に行うことはログをチェックします。';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' 言語ファイルに対応しました。 ユーザーがこの言語を使用するように変更するには、 ';

$GLOBALS["lang"][' seconds'] = ' 秒単位';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', しかし、ログオン資格の別のセットを覚える必要はありません.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'つまり、デフォルトセットとしてthirtyを上回る。 プロフェッショナルなユーザーはこれらを変更することはできませんが、エンタープライズユーザーは独自の作成を含む完全なカスタマイズ能力を持っています。';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'お問い合わせ <i>必須</i> Open-AudIT サーバで Auth 用の Entra を使用する https を使用します。 Apache の設定を行ってください。 <strong>ツイート</strong> auth の Entra の設定の前に。';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = 'お問い合わせ これを有効にするには、設定項目を編集します。 ';

$GLOBALS["lang"]['10 Minutes'] = '10分';

$GLOBALS["lang"]['15 Minutes'] = '15分';

$GLOBALS["lang"]['30 Minutes'] = '30分';

$GLOBALS["lang"]['5 Minutes'] = '5分';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 は、組織、人、物理的、および技術的分野にグループ化された制御';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>お問い合わせ</strong> - ローカルOpen-AudITサーバーからこのURLにアクセスします。 ダウンロードしたスクリプトは、他のマシンで実行したときに送信できません。 他のマシンを監査する必要がある場合は、Open-AudITサーバー自体のブラウザを使用していないリモートマシンからスクリプトをダウンロードしてください。';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">お問い合わせ</strong> - 対象となるデバイスでベンチマークを実行するには、SSH または SSH キーの資格情報を取得する必要があります。</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>ベースライン</strong> - ベースライン定義と個々のポリシーテストを含む階層化文書。<br/> <br/> <strong>ポリシー</strong> - ベースラインに含まれる個々のテスト。 各テストは特定の項目のためです。 SSHバージョン1.2.3のテスト例<br/> <br/> <strong>ニュース</strong> - Baselinesはnetstatポート、ユーザー、ソフトウェアを比較できます。<br/> <br/> <strong>ソフトウェア</strong> - ソフトウェアを比較するには、名前とバージョンを確認してください。 バージョン番号はすべてフォーマットで標準化されていないため、監査結果を受け取ると、各パッケージのソフトウェア詳細の残りの部分とともにデータベースに保存されるSoftware_paddedという新しい属性が作成されます。 そのため、1.10(少なくとも)監査されていないデバイスに対して実行すると、ソフトウェアポリシーを使用してベースラインは動作しません。 ソフトウェアポリシーは、バージョンに対して「等しい」、または「より大きい」とテストすることができます。<br/> <br/> <strong>ネットスタットポート</strong> - Netstat ポートはポート番号、プロトコル、プログラムの組み合わせを使用します。 万が一、本方針を提示した場合。<br/> <br/> <strong>ユーザ名</strong> - ユーザーはネットスタットポートに似ています。 一致する名前、ステータス、パスワードの詳細(変更可能、期限切れ、必要)を持つユーザーがいる場合、ポリシーは渡します。<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>場所は、それに関連するデバイスを持つことができる物理的なアドレスです。<br/> <br/>座標(lat/long)を割り当て、デバイスが割り当てられている場合は、Open-AudIT Enterprise のマップに表示されます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>ディスカバリーエントリーとデバイス属性から得られるネットワークです。<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>要約は、指定した属性の異なる値でグループ化された項目のリストを表示します。 <code>table</code> そして、 <code>column</code> 属性。<br/> <br/>要約が実行されると、結果はその値の異なる値のリストになります。 <code>table</code> そして、 <code>column</code>お問い合わせ ユーザーがマッチングデバイスを見ることを可能にする値にリンクがあります。<br/> <br/>属性の属性が <code>extra_columns</code> デフォルトでは、結果ページには、標準のデバイス列に加えて、これらの列が含まれています。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>エージェントは、発見せずにPCを監査することができます。 エージェントをインストールし、毎日サーバーにチェックインして監査を行います。 コンピューターがファイアウォールされている場合、監査データはOpen-AudITに表示されません。</p><p>試験時 <strong>お問い合わせ</strong> エージェントはアクションを実行する必要があります。3つのテストはパスしなければなりません(テストがセットされている場合)。 <strong>それから</strong> アクションが取られます。</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>アプリケーションは、ユーザーが定義され、Open-AudITのために保存され、デバイスと関連付けます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>特定の分野に使用するOpen-AudITのために属性が保存されます。</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>同一のマシンが構成されているかを判断できるのは、システム管理と監査の主要部分です。そして今では、シンプルで自動化されたことを報告します。 ベースラインを定義すると、あらかじめ決められたスケジュールのデバイスに対して自動的に実行されます。 これらの実行されたベースラインの出力は、Web閲覧、第三者システムへのインポート、または印刷されたレポートとしてもご利用いただけます。<br/> <br/> ベースラインを使用すると、以前に定義した属性(ベースライン)のセットで監査データを組み合わせて、デバイスのコンプライアンスを決定できます。<br/> <br/> 例えば、Centos 6を実行しているデバイスからベースラインを作成すると、クラスター内のapacheサーバーの1つとして機能します。 この特定のサーバーは、あなたが望む方法だけで構成されている知っていますが、クラスター内の他のサーバーがまったく同じ構成されているかどうかは不明です。 ベースラインを使用すると、これを決定できます。<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>クラスターは、デバイスを関連付けるためにOpen-AudITに保存され、ライセンスコストを削減、管理、見積もります。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>コンポーネントは、属性をデバイスに保存するテーブルに使用される一般的な用語です。 これらのテーブルは: access_point、arp、BIOS、証明書、cli_config、ディスク、dns、ファイル、ip、ライセンス、ログ、メモリ、モジュール、モニター、マザーボード、ネットスタット、ネットワーク、nmap、光学、ページファイル、パーティション、ポリシー、print_queue、プロセッサ、ラジオ、ルート、san、scsi、サーバー、server_item、サービス、共有、ソフトウェア、ソフトウェア、ソフトウェア、ソフトウェア、タスク、usb、ユーザー、ユーザー、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、ビデオ、</p><p> また、アプリケーション、添付ファイル、クラスター、クレデンシャル、イメージなど、以下の表も分類しています。</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>データベースに保存されると、クレデンシャルが暗号化されます。<br/> <br/>ディスカバリーが実行されると、デバイスは最初に接続のために取得され、テストされた資格情報を持っています(から <code>credential</code> テーブル)。 これらが失敗した場合は、指定されたOrgに関連付けられている認証情報 <code>credentials.org_id</code> また、デバイスに対してテストされます。 作業資格情報は、クレデンシャルテーブル(表名に「s」という表記)の個々のデバイスレベルで保存されます。<br/> <br/>SSHのユーザー名/パスワードの前にSSHのキーがテストされます。 SSH をテストするときは、認証情報は sudo または root で動作するようにマークされます。<br/> <br/>使いやすさのために、Windowsのパスワードはシングルまたはダブルの引用符を含んでいません。 これは、Open-AudIT制限ではなく、リモートWMI制限です。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>デバイスへのアクセスには、認証情報を使用します。<br/> <br/>資格情報の設定は、Open-AudITをインストールした後に最初に行うものの1つでなければなりません。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>ラックを定義し、デバイスをポジションに割り当てます。 あなたは既にOpen-AudITであなたのデバイスを持っているし、あなたの場所を知っている. Open-AudIT は、ラックを作成し、デバイスを割り当てることを可能にします。 Open-AudITは、ラックやデバイスを内部に可視化することも可能です。 デバイス画像を提供している場合、その画像は視覚化で使用されます。 画面のラックを見て、正面に立っていたら、同じアイテムを見ることができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>ネットワーク上のデバイスは管理する必要があります。 しかし、あなたのレコードを最新の状態に保つ方法は? スプレッドシート - 定義されていない。 日がない場合は、時間外となります。 なぜ手動で追いつくべきか。 Open-AudIT を使用して、ネットワークを自動的にスキャンし、デバイス - メーカー、モデル、シリアル、および 100 以上の他の属性を記録します。 ソフトウェア、サービス、ディスク、オープンポート、ユーザーなどのフルリスト 属性の追加、削除、変更があった場合は自動的に確認します。<br/> <br/>Open-AudITがセットアップされると、座ってリラックスできます。 週に新しいデバイスが発見したのは? 今週は新しいソフトウェアがインストールされましたか? 先月のハードウェアの変更はありますか?<br/> <br/>保存されたフィールドを独自のカスタム属性で簡単に拡張できます。<br/> <br/>ネットワークに接続されていないデバイスや、Open-AudITサーバーに接続されていないデバイスもアクセスできません。<br/> <br/>コンピュータ、スイッチ、ルータ、プリンター、その他のネットワーク上のデバイス - Open-AudITはそれらをすべて監査することができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>発見は、Open-AudITが何をしているかの非常に中心にあります。<br/> <br/>「私のネットワーク上で何をすべきか」とお知りになりたいですか?<br/> <br/>ワンクリックでネットワーク上で発見を実行できるデータ項目を用意し、各ネットワークの内容を毎回入力せずに作成します。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>ディスカバリー オプションはグローバル設定で変更されます。 <a href="../configuration?configuration.name=discovery_default_scan_option">コンテンツ</a>お問い合わせ あなたがOpen-AudITエンタープライズライセンスを持っている場合は、これらは、必要に応じて、発見ごとに設定可能であり、さらには、必要に応じてカスタマイズ可能です。 ディスカバリー オプションは次の通りです。(個々のIPをスキャンする指標を含む)<br/><br/><strong>ウルトラファスト</strong>: : : <i>1秒目</i>お問い合わせ Open-AudITがデバイスに話し、IOSデバイス(WMI、SSH、SNMP、Apple Sync)を検出するために使用するポートのみをスキャンします。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いているとみなされません。 デバイスはNmap pingに応答しなければなりません。 積極的なタイミングを使用して下さい。<br/><br><strong>スーパーファスト</strong>: : : <i>5秒</i>お問い合わせ トップ10 TCPとUDPポートをスキャンし、ポート62078(Apple IOS検出)。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いているとみなされません。 デバイスはNmap pingに応答しなければなりません。 積極的なタイミングを使用して下さい。<br><br/><strong>ツイート</strong>: : : <i>40秒</i>お問い合わせ トップ100 TCPとUDPポートをスキャンし、ポート62078(Apple IOS検出)。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いているとみなされません。 デバイスはNmap pingに応答しなければなりません。 積極的なタイミングを使用して下さい。<br/><br/><strong>ミディアム(クラシック)</strong>: : : <i>90秒</i>お問い合わせ 従来のOpen-AudITスキャンに近くて作れます。 トップ1000 TCPポートをスキャンし、62078(Apple IOSの検出)とUDP 161(SNMP)。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いていると考えられます(デバイス検出をトリガーします)。 Nmap ping に対する応答に関係なく、デバイスをスキャンします。 積極的なタイミングを使用して下さい。<br/><br/><strong>メディア</strong>: : : <i>100秒</i>お問い合わせ トップ1000 TCPとトップ100 UDPポートをスキャンし、ポート62078(Apple IOS検出)。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いているとみなされません。 デバイスはNmap pingに応答しなければなりません。 積極的なタイミングを使用して下さい。<br/><br/><strong>スロウ</strong>: : : <i>4分</i>お問い合わせ トップ1000 TCPとトップ100 UDPポートをスキャンし、ポート62078(Apple IOS検出)。 バージョン検出を有効にしました。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いていると考えられます(デバイス検出をトリガーします)。 デバイスはNmap pingに応答しなければなりません。 通常のタイミングを使用してください。<br/><br/><strong>ウルトラスロー</strong>: : : <i>20分</i>お問い合わせ お勧めできません。 トップ1000 TCPとUDPポートをスキャンし、ポート62078(Apple IOS検出)。 Nmap ping に対する応答に関係なく、デバイスをスキャンします。 バージョン検出を有効にしました。 サインイン <code>open|filtered</code> ポートは開いていると見なされます。 ツイート <code>filtered</code> ポートは開いていると考えられます(デバイス検出をトリガーします)。 丁寧なタイミングを使用して下さい。<br/><br/><strong>カスタム</strong>: : : <i>未知の時間</i>お問い合わせ 標準の検出プリセットで設定する以外のオプションは変更されます。<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>グループは、必要な条件に合ったデバイスの簡単なリストとして使用されます。 JSON でリクエストされた場合、リストを返す <code>devices.id</code> お問い合わせ Webインターフェイスを使用して要求された場合、標準カラムの属性リストを返します。<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Open-AudIT にログオンしているユーザが LDAP を検索するアクセスがない場合 (OpenLDAP を使用している場合)、このアクセス権を持つ別のアカウントを使用できます。 利用する <code>ldap_dn_account</code> そして、 <code>ldap_dn_password</code> これを構成する。<br/> <br/><strong>役立つドキュメント</strong><br/> <br/><a href="/index.php/auth/help">一般 Auth ヘルプ</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Auth の Entra を使用する</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA の使用</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">LDAPログインのトラブルシューティング</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">ユーザー、ロール、オラグ</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>デバイスタイプを追加すると、関連するアイコンを表示するには、.svg 形式のファイルをディレクトリに手動でコピーする必要があります。<br/><em>ダウンロード</em>:/usr/local/open-audit/public/device_images<br/><em>ウィンドウズ</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>位置タイプを追加すると、関連するアイコンを表示するには、手動で32x32pxアイコンをディレクトリにコピーする必要があります。<br/><em>ダウンロード</em>:/usr/local/open-audit/public/images/map_icons<br/><em>ウィンドウズ</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>いつか <i>リソース</i> お問い合わせ <code>device</code>, 有効 <i>タイプ:</i> は: <code>class</code>, <code>environment</code>, <code>status</code> そして、 <code>type</code>お問い合わせ もし、 <i>リソース</i> お問い合わせ <code>locations</code> または <code>org</code> のみ有効 <i>タイプ:</i> お問い合わせ <code>type</code>お問い合わせ もし、 <i>リソース</i> お問い合わせ <code>query</code> のみ有効 <i>タイプ:</i> お問い合わせ <code>menu_category</code>お問い合わせ</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>クラウドマシンを完全に監査しようとすると、Open-AudITに保存されている資格情報も忘れないでください。</p><p>Microsoft Azure(22 for SSHなど)を使用している場合は、正しいポートを許可してください。 仮想マシンをチェック → ネットワークルール<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>リストタイプを選択すると「値」フィールドが有効になります。 ここで選択可能な値のコンマ区切りリストを置く必要があります。 フィールドが編集されると、ドロップダウンボックスに表示されます。<br/> <br/>他のほとんどの属性と同様に、フィールドは一括編集できます。 通常どおりにバルク編集機能を利用し、入力時にフィールドが利用できます。<br/> <br/>デバイスの詳細画面を表示し、フィールドを含むセクションを開き、(十分なアクセスがある場合)フィールド値をクリックして編集できます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>日々新しい脆弱性が発見され、パッチを当てるコンピュータセキュリティの時代を超えた世界では、セキュリティのコンプライアンスを強化することは、継続的なプロセスでなければなりません。 また、ポリシーへの調整、定期的な評価およびリスク監視の方法を含める必要があります。 OpenSCAPエコシステムは、これらのプロセスの迅速で費用効果が大きい、そして柔軟な実装のためのツールとカスタマイズ可能なポリシーを提供します。</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>インテグレーションを使用すると、デバイス選択とOpen-AudITのスケジュールを設定して、外部システムに話すことができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>マイクロソフト Windowsデスクトップシステムには、Open-AudITのパフォーマンスに影響を与えるネットワーク制限があります。 TCP/IP スタックは、同時不完全なアウトバウンド TCP 接続の試み数を制限します。 限界に達した後、その後の接続の試みはキューに入れられ、固定レート(毎秒10)で解決されます。 キューを多すぎると、キューを落とす可能性があります。 最後に、Apache は OS で再起動します。 そのため、WindowsデスクトップオペレーティングシステムにOpen-AudITをインストールしても対応していません。<br/><br/>Open-AudITコードに問題はありません。また、Windowsクライアントマシンでこの問題に対処するために何かを行うことができます。</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>このページの一番下にあるNmapのタイミングの詳細はリンクページ下部にあります。 <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>お問い合わせ そのページから:<br/> <br/><em>まともなブロードバンドまたはイーサネット接続にある場合は、必ず -T4(攻撃) を使用することをお勧めします。 私の好みのためにあまりにも積極的なにもかかわらず、何人かの人々は -T5 (インサン) が大好きです。 人々は時々-T2(Polite)を指定して、彼らはそれがホストをクラッシュする可能性が低いか、彼らは一般的に礼儀であることを自分自身を考慮するので。 彼らはしばしば遅い -T2が本当にあることを認識しません。 スキャンは、デフォルトスキャンよりも10回以上かかることがあります。 マシンのクラッシュや帯域幅の問題は、デフォルトのタイミングオプション-T3(ノーマル)でまれているため、通常は注意深いスキャナをお勧めします。 Omitting版の検出はこれらの問題を減らすでタイミングの価値と遊ぶよりずっと有効です。</em><footer>ゴードン <i>フイド</i> リヨン</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT は、異なるメソッドを使用して、ユーザーとまた、グループメンバーに基づいて、割り当てられたロールと orgs を使用してユーザーアカウントを作成するように設定できます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>オープン・オード IT は、ファイルやファイルのディレクトリや、Open-AudIT データベース内の他の属性ごとに変更するファイルを監視することができます。<br/> <br/>この機能は、Linux Open-AudITサーバー用のボックスで動作しますが、Windows Open-AudITサーバーのサービスアカウント名に変更が必要です。<br/> <br/>対応する顧客はWindowsおよびLinuxです。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>オープン・オード IT は、ファイルに関する詳細を取得できます。, ネイティブ パッケージ マネージャーに 知られている場合、 Open-AudIT データベース内の他の属性ごとに変更を監視します。.<br/> <br/>対応するクライアントはLinuxのみです。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>オープン・オード 各デバイスに関連付けられているカスタムフィールドに情報を格納することができます。<br/> <br/>追加フィールドが作成されると、データベース内の他の属性と同様に、クエリやグループで使用できます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudITは、多くの問い合わせを組み入れています。 特定のクエリとパッケージされたクエリのどれもあなたのニーズに合ったものが必要な場合は、新しいものを作成して実行するためのOpen-AudITにロードするのは非常に簡単です。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudITは、多くの要約が組み込まれています。 特定の要約と、あらかじめパッケージされた要約があなたのニーズに合ったものを必要とした場合、新しいものを作成して実行するためのOpen-AudITにロードするのは非常に簡単です。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudITは、FirstWaveがサポートする素晴らしいレベルのサポートを提供します。 支援者の活動的なコミュニティを好むなら、そのほかにも。 開発者に直接話し、24時間以内に応答を得ることができますか? 他の商品で試してみてください! 素晴らしいサポート。 フルストップ。 サポートが必要な場合は、サポートを提供します。 いやが、 優れたサポート 期間。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT は、複数のテナントを箱から提供しています!<br/> <br/>Open-AudIT の Orgs (organizations) は重要な項目です。 ユーザはプライマリ Org とアクセスできる Orgs のリストを持っています。 ユーザは、割り当てられた "Roles" のリストでこれを組み合わせて、彼らがアクセスしている Orgs に割り当てられた項目を取り出すことができる操作を定義します。 "orgs" と "roles" は、Open-AudIT 内で何ができるのかを定義します。<br/> <br/>Open-AudIT のほとんどの項目は Org. 装置、場所、ネットワーク、等に割り当てられます。<br/> <br/>オラグは子供オラグを持つことができます。 組織図(ツリー)構造を考える。 ユーザが特定の Org へのアクセス権を持っている場合、 Orgs の子孫にアクセスすることもできます。 詳しくはこちらをご覧ください。 <a href="/index.php/faq?name=Users, Roles and Orgs">よくある質問</a>お問い合わせ</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT は、複数のテナントを箱から提供しています!<br/> <br/>Open-AudIT の Orgs (organizations) は重要な項目です。 ユーザはプライマリ Org とアクセスできる Orgs のリストを持っています。 ユーザは、割り当てられた "Roles" のリストでこれを組み合わせて、彼らがアクセスしている Orgs に割り当てられた項目を取り出すことができる操作を定義します。 "orgs" と "roles" は、Open-AudIT 内で何ができるのかを定義します。<br/> <br/>Open-AudIT のほとんどの項目は Org. 装置、場所、ネットワーク、等に割り当てられます。<br/> <br/>オラグは子供オラグを持つことができます。 組織図(ツリー)構造を考える。 ユーザが特定の Org へのアクセス権を持っている場合、 Orgs の子孫にアクセスすることもできます。</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>ネットワーク上のデバイスのステータスをすばやく表示できます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>オープン・オードの役割 重要な項目です。 ユーザはプライマリ Org とアクセスできる Orgs のリストを持っています。 ユーザはこれを割り当てられたロールのリストと組み合わせて、彼らがアクセスしている Orgs に割り当てられた項目で取り込むことができる操作を定義します。 "orgs" と "roles" は、Open-AudIT 内で何ができるのかを定義します。<br/> <br/>完全なOpen-AudITエンタープライズ体験を入手してください。 ロールを作成すると、ユーザーがOpen-AudIT内で何ができるかを細かく穀物制御できます。<br/> <br/>正規化のためのプライマリメソッド(ユーザができること)は、ユーザーロールに基づいています。 デフォルトは管理者、org_admin、レポーター、ユーザーとして定義されます。 各ロールは、各エンドポイントの権限(作成、読み取り、更新、削除)のセットを持っています。 追加のロールを定義し、既存のロールを編集する機能は、Open-AudIT Enterprise で有効になっています。<br/> <br/>LDAP (Active Directory および OpenLDAP) の認可での役割も使用できます。 企業ライセンスインストールには、各定義されたロールのLDAPグループをカスタマイズする機能があります。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>規則は、適切な規則に基づいて、属性を調べ、cahngesを作る。</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>スキャンオプションを使用すると、簡単に発見にオプションのセットを適用することができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Googleマップが提供するシンプルで直感的で正確な地理的マッピング。 Open-AudITを活用 Googleマップは、デバイスの場所のライブ、インタラクティブな地理的マッピングを提供します。 道路アドレスの自動変換をジオコードや経度/緯度に。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>ソフトウェアパッケージは、アンチウイルス、バックアップ、ファイアウォール、承認または禁止されたソフトウェアがインストールされているかどうかを決定するために使用されます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>有効なSubnet属性のいくつかの例: 192.168.1.1 (単一のIPアドレス)、 192.168.1.0/24 (サブネット)、 192.168.1-3.1-20 (IPアドレスの範囲)。<br/> <br/><em>お問い合わせ</em> - サブネットのみ(例として - 192.168.1.0/24)は、Open-AudITの有効なネットワークを自動的に作成することができます。 <br/> <br/>Active Directory 型を使用する場合は、すでにドメイン コントローラーに話せる適切な認証情報を持っていることを確認してください。 <a href="../credentials">資格情報</a>お問い合わせ<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>スタンダードはOpen-AudITに保存されます。<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>対応するクライアントはLinuxのみです。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>タスクは、unix cronスケジュールをミラーリングするスケジュールを持っています。 分、時間、日_of_month、月、日_of_week の属性は、cron の定義に従って全て機能します。 これらをコンマ区切り値(スペースなし)で複数選択できます。 * を使用してすべての値を選択できます。<br/> <br/>インフォメーション <code>type</code> タスクは、ベースライン、コレクター、発見、クエリ、レポート、または要約のいずれかであることができます。<br/> <br/>ベースラインやディスカバリーをスケジュールしたい場合は、タスクを作成する前にこれらを作成する必要があります。 アイテムのタイプのIDを使用する必要があります。 <code>sub_resource_id</code>お問い合わせ たとえば、ディスカバリーをスケジュールしたい場合は、その特定のディスカバリーIDを使用してください。 <code>sub_resource_id</code>お問い合わせ<br/> <br/>値が <code>uuid</code> 各Open-AudITサーバーに固有のものです。 独自の値が設定で見つけることができます。<br/> <br/>インフォメーション <code>options</code> 属性はタスクを実行するために必要な属性を含む JSON ドキュメントです。 レポート、クエリ、および要約のための追加属性は次のとおりです。 <code>email_address</code> そして、 <code>format</code>お問い合わせ Bselines の属性は <code>group_id</code>お問い合わせ<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>インフォメーション <code>type</code> 場所は、そのアイコンを割り当てます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributesエンドポイントでは、Open-AudITの異なる属性にカスタマイズされた値を追加することができます。この機能は、デバイス上のクラス、環境、ステータス、およびタイプ属性、両方のロケーションとオーグとQueriesのメニューカテゴリで動作します。 繁殖型(Lkocation を表示)のいずれかの項目を表示している場合、Type 属性はドロップダウン ボックスから選択する必要があります。 これらの値が保存されるところです。 したがって、新しいタイプを Location で選択したい場合は、属性機能を使用して追加します。</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>コレクター機能により、ネットワークディスカバリーを実行する多くの「コレクター」コンピュータを簡単に管理できます。 すべてのコレクターはサーバーから集中的に制御されます。 コレクタとサーバー間で唯一のネットワークポートは80および/または443です。<br/> <br/>ネットワークを素早く簡単に管理できます。 Open-AudIT Enterprise ライセンスは、単一のコレクターライセンスが含まれているため、必要に応じて購入することができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SQLのSELECTセクション <em>必須</em> 十分に修飾されたコラムを含んでいます。 ツイート <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>お問い合わせ<br/> <br/>SQLのWHEREセクション <em>必須</em> 含まれるもの <code>WHERE @filter</code> Open-AudIT は、クエリを適切な Orgs に制限することを知っています。 この条件を含まないSQLは、管理者権限を持っている場合を除き、クエリが作成されないようになります。<br/> <br/>デバイスにSQLを示す例 <code>os_group</code> 「Linux」の属性 - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SQLのSELECTセクション <em>必須</em> 含まれているだけ <code>DISTINCT(devices.id)</code>お問い合わせ<br/> <br/>SQLのWHEREセクション <em>必須</em> 含まれるもの <code>WHERE @filter</code> Open-AudIT は、クエリを適切な Orgs に制限することを知っています。 この条件を含まないSQLは、グループが作成に失敗するようになります。<br/> <br/>Debian OS を実行しているすべてのデバイスを選択するための SQL の例 - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>ライセンスエンドポイントを使用すると、デバイスに見つかったライセンス数を追跡できます。<br/> <br/>ライセンスを追跡するためのエントリを作成する <em>必須</em> 取得するライセンスの名称、組織、ライセンス数、ソフトウェアの名前を提供する。 フィールドに <code>match_string</code> 追跡したいソフトウェアの名前を指定する必要があります。マッチのワイルドカードとしてパーセント記号(%)を使うことができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>ネットワークは、192.168.1.0/24 の形式である必要があります。<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>第一次および任意二次項目は十分に修飾されるべきです-すなわち、装置。 タイプかソフトウェア。 名前。<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>LinuxサーバーでOpen-AudITを実行している場合は、何もする必要はありません。<br/><br/>Windows のクライアントは、ただ細かく、特別なアクションを必要としませんが、この機能を有効にするには、監査スクリプトは、ターゲットの Windows システムにローカルで実行する必要があります。 2番目のWindowsマシンをターゲティングしながら、1つのWindowsマシンで監査スクリプトを実行するときにWMI呼び出しで行うとリモートで実行することはできません。 これを行うには、監査スクリプトを対象のWindowsマシンにコピーして実行する必要があります。 残念ながら、Apache が実行するサービスアカウントはローカルシステムアカウントです。 このアカウントは、リモート(ネットワークベースの)リソースにアクセスできません。 この問題を回避するには、サービスが別のアカウントで実行する必要があります。 ローカル管理者アカウントを使用するのは最も簡単ですが、必要な権限を持っている限り、好きなアカウントを試すことができます。 ローカルシステムアカウントはローカル管理者アカウントとして多くのローカルアクセスを持っています。<br/><br/>サイトマップ <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Windows で Open-AudIT Apache サービスを実行する</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>ラック内に住んでいる装置です。<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>このエンドポイントでは、クラウドインフラストラクチャの詳細を追加できます。 Open-AudIT は、ネイティブ API を使用してクラウドにアクセスし、Open-AudIT の他のデバイスと同様に、サーバーを返却します。<br/> <br/><em>お問い合わせ</em> - この機能を使用するには、 <em>必須</em> 設定項目のmatch_mac(AWS用)とmatch_hostname(Azure用)を有効にします。 クラウドディスカバリーの初回起動時に自動的に行います。<br/> <br/>クラウドの認証<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">ログイン</a> または <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">ツイート</a>) 必須です。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVEフィードに基づく脆弱性報告<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>デフォルトオプションでスクリプトのデフォルトリストを初期設定します。 これらのデフォルトスクリプトは削除できません。 必要に応じて追加のスクリプトを作成できます。 スクリプトは既存のスクリプトに基づいており、カスタムオプションが適用されます。 スクリプトは、メニューの一覧ページからダウンロードできます→ 発見 → 監査スクリプト -> リスト 監査スクリプト<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Regex をマッチングする際は、役に立つページが見つかります。 <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> サイトマップ</a>お問い合わせ Perl Regexへのいくつかの違いは、見つけることができます <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">詳しくはこちら</a>お問い合わせ</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>ウィジェットは簡単に作成して、ダッシュボードの環境に固有のものを表示することができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>オープンアディットで あなたが望むときに実行するために発見、レポート生成、またはベースラインチェックを自動化し、スケジュールすることができますプロフェッショナルとエンタープライズ、あなたが必要とするように。 発見をスケジュールし、毎晩の重要な人員に生成し、電子メールで報告します。 複雑なスケジュールや簡単なスケジュール、デバイス検出とレポート生成はクリックするだけで済みます。<br/> <br/>サブネットまたはADコントローラーごとに個別のディスカバリースケジュールを作成し、ターゲットオーディエンスのために作成するレポートを追加します。 企業のニーズをサポートするためのシンプルで複雑なスケジュールを開発し、バックアップや業務への影響を回避したり、単に負荷とスピードアップの監査完了を広める。<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Windowsだけでなく、既存の監査スクリプトのすべてのオプションでスクリプトを作成できます。 AIX、ESX、Linux、OSX、Windowsはすべてカバーされています。<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>match_string でワイルドカードとして % 記号を使うことができます。<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>あなたのラックは、あなたのデバイスがどこにいるかを正確に洗練するのに役立ちます。<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>お問い合わせ</strong> - ローカルOpen-AudITサーバーからこのURLにアクセスします。 ダウンロードしたスクリプトは、他のマシンで実行したときに送信できません。 他のマシンを監査する必要がある場合は、Open-AudITサーバー自体のブラウザを使用していないリモートマシンからスクリプトをダウンロードしてください。';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = '影響を受けた項目を決定するフィルターを含まないCVE項目。';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Googleマップ APIサービス この機能にはキーが必要です。';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'このベンチマークが実行されるデバイスの ID の JSON 配列。';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVEから取得したソフトウェア名に合ったオブジェクトのJSON配列で、Open-AudITで取得したソフトウェア名が豊富に含まれています。';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'この脆弱性をテストする値の JSON 配列。';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'このユーザに割り当てられた Orgs を含む JSON ドキュメント。 から取られたID <code>orgs.id</code>お問い合わせ ユーザーが Org にアクセスしている場合、その Orgs の子孫にアクセスできます。';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = '必要に応じて必要な属性を含むJSON文書 <code>scripts.type</code>お問い合わせ';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = '選択したdiscover_scan_optionsをオーバーライドする必要のある属性を含むJSONドキュメント。';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = '必要な属性を含む JSON ドキュメントは、デフォルトのデバイスマッチオプションをオーバーライドします。';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'このユーザに割り当てられたロールを含む JSON ドキュメント。 から取られた役割名 <code>roles.name</code>お問い合わせ';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'マッチが発生したときに変更する属性の配列を含む JSON オブジェクト。';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = '一致する属性の配列を含む JSON オブジェクト。';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'コレクション固有のオプションを含むJSONオブジェクト。';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'クラウドディスカバリーでポップアップしたJSONオブジェクト。';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = '実行するキュー項目の詳細を含む JSON 表現。';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'この統合のためのフィールドのJSON表現。';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'このベースラインが実行されているすべてのデバイス上の個々のテストと結果のJSON表現。';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = '本方針を構成する試験のJSON表現。';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'ルーターを使ってWANに接続することができます。';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = '首都圏ネットワーク(MAN)は、通常、都市や大きなキャンパスに及ぶ大きなコンピュータネットワークです。';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'ツイート 種子の発見は、それが知っている他のデバイスのIPを検索するために、最初のIPを使用して、リストにそれらのIPを追加し、それらをスキャン - 再び、それらの追加のデバイスが知っている任意のIPを求める。 すすぎて繰り返します。 既に実行中の特定のIPをスキャンし、既にスキャンした(またはスキャンされるリストでも)を破棄している場合に十分なインテリジェントです。';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'サブネットの発見は、提供されたIPをスキャンします。';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'ファイルをダウンロードし、ローカルディスクに保存するエージェントに提供されたURL。';

$GLOBALS["lang"]['A URL to a file to download.'] = 'ファイルをダウンロードするためのURL。';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'バックボーンネットワークは、異なるLANまたはサブネットワーク間で情報交換のためのパスを提供するコンピュータネットワークインフラストラクチャの一部です。 バックボーンは、同じ建物内の多様なネットワークを組み合わせたり、さまざまな建物を横断したり、広いエリアを横断したりすることができます。<br/><br/>例えば、世界中にある部署を繋ぐために、大企業はバックボーンネットワークを実装するかもしれません。 部門ネットワークと連携する機器は、ネットワークのバックボーンを構成する。 ネットワークのバックボーンを設計するとき、ネットワークのパフォーマンスとネットワークの輻輳は考慮に入れる重要な要因です。 通常、バックボーンネットワークの容量は、そのネットワークに接続された個々のネットワークよりも大きいです。<br/><br/>バックボーンネットワークのもう一つの例は、インターネットに接続されたすべてのネットワークを結びつける広域ネットワーク(WAN)とコアルータのセットであるインターネットのバックボーンです。';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '選択したOrg(および設定されている場合、その子孫)のコンピュータに、このソフトウェアの回数を表示する計算されたフィールド。';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'キャンパスエリアネットワーク(CAN)は、限られた地域内のLANの相互接続で構成されます。 ネットワーク機器(スイッチ、ルータ)およびトランスミッションメディア(光ファイバー、銅工場、Cat5ケーブルなど)は、キャンパステナント/所有者(企業、大学、政府など)がほとんど完全に所有しています。<br/><br/>たとえば、大学のキャンパスネットワークは、大学の大学や学部、図書館、学生のレジデンスホールを接続するために、さまざまなキャンパスビルをリンクする可能性があります。';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'クローズドポートはアクセス可能(Nmapプローブパケットを受信し、応答する)が、その上でリスニングするアプリケーションはありません。 ホストが IP アドレス (ホストの発見、または ping スキャン) で、OS の検出の一部として稼働していることを示すのに役立ちます。 クローズドポートが到達できるため、オープン時にスキャンする価値があります。 管理者は、このようなポートをファイアウォールでブロックすることを検討する場合があります。 次に、フィルタされた状態に表示され、次に説明した。';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'コレクタはコレクターまたはスタンドアローンモードのいずれかです。';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = '該当するCVEのコンマ区切りリスト。';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '値のコンマ区切りリスト、いずれかを選択することができます。';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '実行するコマンド。 エージェントが Windows ベースの場合、このコマンドはパワーシェルエージェント内で実行されます。';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'ダッシュボードは3つの列と2列で構成されます。 <i>ウィジェット</i>お問い合わせ ウィジェットはサマリーに似ていますが、サマリーコンセプトを少しでも取ります。 ウィジェットは、いくつかのドロップダウンボックスを使用してシンプルなファッションで作成されます。または、独自のSQLを使用して、完全なカスタマイズ性を選択できます。';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'フィルターポートは開いていると見なされます(そしてデバイス検出をトリガーします)。';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'グローバルエリアネットワーク(GAN)は、無線LAN、衛星カバレッジエリアなどの任意の数を渡るモバイルをサポートするネットワークです。 モバイルコミュニケーションの重要な課題は、ローカルのカバレッジエリアから次のカバレッジエリアへのユーザーコミュニケーションを遮断しています。 IEEEプロジェクト802では、これは地上無線LANの成功を含みます。';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'ホームエリアネットワーク(HAN)は、デジタルデバイス間の通信に使用される住宅LANで、通常、プリンタやモバイルコンピューティングデバイスなど、個人コンピュータやアクセサリの少ない数です。 重要な機能は、インターネットアクセスの共有であり、多くの場合、ケーブルテレビまたはデジタル加入者ライン(DSL)プロバイダを介してブロードバンドサービスです。';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'スキャンするカスタムTCPポートのリスト(22はSSH、135はWMI、62078はiPhoneの同期です)。';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'スキャンするカスタムUDPポートのリスト(161はSNMPです)。';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'ローカルエリアネットワーク(LAN)は、ホーム、学校、オフィスビル、または密接に建物のグループなどの限られた地理的な領域でコンピュータやデバイスを接続するネットワークです。 ネットワーク上の各コンピューターまたはデバイスはノードです。 有線LANは、イーサネット技術をベースにした可能性が高い。 ITU-T G.hnなどの新規格は、同軸ケーブル、電話回線、電力線などの既存の配線を使用して有線LANを作成する方法も提供します。<br/><br/>LANの定義特性は、広域ネットワーク(WAN)とは対照的に、より高いデータ転送速度、限られた地理的な範囲、および接続を提供するリースラインの信頼性の欠如を含みます。 現在のイーサネットまたは他のIEEE 802.3LANの技術は2010年にIEEEによって標準化される100 Gbit/sまでのデータ転送率で作動します。 現在 400 Gbit/s イーサネットを開発';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = '場所は、それに関連するデバイスを持つことができる物理的なアドレスです。 座標を割り当て、デバイスが割り当てられている場合は、Open-AudIT Enterprise ライセンスを持っているときにマップに位置が表示されます。';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = '位置名は、将来的にこれらのデバイスを見つけるのに役立ちます。';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '上記以外のルールの前に、より低い番号が適用されることを意味します。';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '上記以外のルールの前に、より低い番号が適用されることを意味します。 デフォルト重量は100です。';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Open-AudIT にログインし、LDAP sever によって認証および認可された新しいユーザー。 その後、Open-AudIT でユーザが作成され、ログインしました。 成功。';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'パッケージは、インストールされたSoftareの部分です。 パッケージには、アンチウィルス、承認済み、バックアップ、禁止、クラウド、ファイアウォール、無視、ライセンスなどのタイプがあります。';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'アプリケーション認証時にログオンを有効にするパスワード(ハッシュとして保存)。';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Open-AudITアプリケーションでアカウントをお持ちの方 ユーザーアカウントには、関連するロールや組織のリストがあります。 ユーザーができることを決定する役割。 ユーザーが行動できるWHICH項目を決定する組織。<br/><br/>ユーザーがコレクション項目の操作(作成、読み込み、更新、削除)を実行するように要求する場合、そのアクションを実行できるかどうかを確認するためにロールが相談され、そのオブジェクトは、コレクション項目が、ユーザーが動作する権限を持っているかどうかを判断するために相談されます。';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'パーソナルエリアネットワーク(PAN)は、コンピュータと異なる情報技術デバイス間での通信に使用されるコンピュータネットワークです。 PANで使用されているデバイスの例は、パーソナルコンピュータ、プリンター、FAX機、電話、PDA、スキャナ、ビデオゲーム機です。 PANは、有線およびワイヤレスデバイスを含む場合があります。 PAN のリーチは 10 メートルに普通拡張します。 有線PANは通常、Bluetoothや赤外線通信などの技術がワイヤレスPANを形成しながらUSBとFireWire接続で構築されています。';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'クエリは基本的にSQLステートメントです。 このステートメントは、制限の自動追加でデータベースに対して実行され、要求された項目だけに適用され、ユーザーが閲覧する権限を持っているそれらの項目のみに適用されます。 メニュー→でクエリを作成できます。 管理 -> Queries -> Queries の作成 Queries には org_id が含まれているため、適切なユーザーに制限されています。 ユーザは org_admin または Reporter ロール(s) を使ってクエリを作成、更新、削除する必要があります。 すべてのユーザーはクエリを実行できます。 クエリには、メニュー項目やメニューカテゴリ属性に使用する名前属性があります。 これは、クエリを配置するためにサブメニューのOpen-Audit GUIを指示します。 メニュー表示もあります。 <i>ログイン</i> GUI でクエリを有効にする (GUI)<i>ログイン</i> クエリがすべてで出現することを防ぐため)。 クエリは、その使用時に呼び出されるとまだ実行されます。 <code>id</code>メニューが値を表示するかどうか。';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'ラックは、ラック内の位置と高さを割り当てられたデバイスのコレクションです。 デバイスは、必要に応じてそれに関連した画像を持つことができます。 ラックは列に配置されます。 ラックの位置決めのための非常に粒状システムを作成しました。 トップレベル(常に)では、組織(組織)です。 Orgは複数の場所(常にケースとして)を持つことができます。 ラック機能の追加により、場所は1つ以上の建物を含むことができます。 建物は1つ以上のフロアを含むことができます。 フロアには、1つ以上の客室が設置されています。 1つ以上の行を含むことができます。 これは多くの仕事のように聞こえますが、デフォルトはあなたのために作成されます。 新しいロケーションを作成し、サブコンポーネントが自動的に作成されます。 より多くのアイテム(建物、部屋など)が必要な場合は、必要に応じてそれらを追加することができます。 ラックもラックの一部になることができます <i>ポッド</i> 棚の。 Pod属性は、建物、床などの厳しい階層継承モデルではなく、タグとして機能します。<br/><br/>ラックは、Open-AudIT Enterpriseライセンスされた顧客に利用可能な機能です。';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IPアドレスとMACアドレスがユニークであるルーティングドメインまたはアドレススペース。';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linux用のサンプルcronファイルは以下のとおりです。 これを置く必要があります。';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'セキュリティゾーンは、ネットワークドメイン内の管理ドメインまたはポリシードメインです。';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'シード発見は、単一のIPを提供する別のタイプの発見です。 <i>シード</i> デバイス。 このデバイスは、監査され、それが知っているIPは、監査されるIPのリストに追加されます。 その後、それらのデバイスが監査され、それらが知ったIPは、監査のためのIPのリストに追加されます。 このプロセスは、ユーザーが設定したパラメータ内で継続します。';

$GLOBALS["lang"]['A short description of the log entry.'] = 'ログエントリの短い説明。';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'ストレージ領域ネットワーク(SAN)は、統合、ブロックレベルのデータストレージへのアクセスを提供する専用のネットワークです。 主に、ディスクアレイ、テープライブラリ、光学式ジュークボックスなどのストレージデバイスをサーバーに接続して、デバイスがローカルに接続されたデバイスのように見えるようにします。 SANは、一般的に他のデバイスによってローカルエリアネットワークを介してアクセスできないストレージデバイスの独自のネットワークを持っています。 2000年代初頭にSANsのコストと複雑性が低下し、企業と中小企業の双方のビジネス環境を幅広く採用できるようにします。';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'マッチする文字列 <code>software.name</code> 属性。 (%) の標準的な SQL のワイルドカードを 1 つ以上の文字にマッチさせることができます。';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = '機密情報を管理するための構造化されたシステム';

$GLOBALS["lang"]['A timestamp.'] = 'タイムスタンプ。';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'ユーザはプライマリ Org とアクセスできる Orgs のリストを持っています。 ユーザーは、この機能を割り当てられたロールのリストと組み合わせて、アクセスした Orgs に割り当てられた項目に取り込むことができるアクションを定義します。 ユーザーの組み合わせ <i>ログイン</i> そして、 <i>ロール</i> Open-AudIT内でできることを定義し、できない。';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'ユーザーは、関連する組織(orgs)のリストを持っています。 ユーザが持つ各オーガナイゼーションは、その役割によって、そのオーガニゼーション内のアイテムを演じることを可能にします。<br/><br/>デフォルト org を除くすべての org には、親があります。 オラグチャートの考え方 ユーザーが Org に許可がある場合、その Org のどの子孫にも権限があります。<br/><br/>ユーザーは、特定のコレクションの親オーガナからアイテムを見るために、子供オーガナイザーへの許可も許可されます。 これらは、ダッシュボード、Discover_scan_options、フィールド、ファイル、グループ、クエリ、レポート、ロール、ルール、スクリプト、要約、ウィジェットです。<br/><br/>ユーザーがどのユーザーが見て、Enterpriseでロールを使用して実行できるかについて、詳細な制御を忘れないでください。';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'ユーザーは、関連する組織(orgs)のリストを持っています。 ユーザが持つ各オーガナイゼーションは、その役割によって、そのオーガニゼーション内のアイテムを演じることを可能にします。<br/><br/>デフォルト org を除くすべての org には、親があります。 オラグチャートの考え方 ユーザーが Org に許可がある場合、その Org のどの子孫にも権限があります。<br/><br/>また、特定のコレクションの親オーガナイザーからアイテムを閲覧するために、お子様のオーガナイザーへの許可を持つユーザーを許可しています。 これらは、ダッシュボード、Discover_scan_options、フィールド、ファイル、グループ、クエリ、ロール、ルール、スクリプト、要約、ウィジェットです。<br/><br/>何のユーザーが見ることができるかの粒状の制御をおよび使用することを忘れないで下さい';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = '仮想プライベートネットワーク(VPN)は、物理的なワイヤではなく、複数のネットワーク(例えば、インターネット)で、ノード間のリンクの一部がオープン接続または仮想回路によって実行されるオーバーレイネットワークです。 仮想ネットワークのデータリンクレイヤプロトコルは、このケースの場合、より大きなネットワークを介してトンネリングされると言われています。 1つの一般的なアプリケーションは、パブリックインターネットを介して安全な通信です, しかし、VPNは、認証やコンテンツの暗号化などの明示的なセキュリティ機能を持っていません. たとえば、VPNは、さまざまなユーザーコミュニティのトラフィックを強固なセキュリティ機能で根本的なネットワーク上に分離するために使用できます。<br/><br/>VPN は、最高のパフォーマンスを持つか、VPN 顧客と VPN サービスプロバイダ間で定義されたサービスレベルの合意(SLA)を持っているか、または可能性があります。 一般的に、VPNはポイントツーポイントよりもトポロジーが複雑になっています。';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '可用性に影響を与える脆弱性は、攻撃者がサービス、クラッシュシステム、またはサービス(DoS)(None、Low、High)を破壊することを可能にします。';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '機密性に影響を与える脆弱性は、攻撃者は、個人情報、資格情報、または独自のビジネスデータ(なし、低、高)などの機密データを読むことができます。';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = '完全性に影響を与える脆弱性は、攻撃者がデータを変更したり、悪意のあるコードを注入したり、システム構成(None、Low、High)を変更したりすることができます。';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = '脆弱性は編集可能で、濃縮データが不足しているか、生成された SQL が非常に正しい場所に提供されるより特定のパッケージ名を編集できます。';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudITの脆弱性項目は、特定のCVEレポートへの潜在的暴露を決定するために、基本的にデータベースに対するクエリと考えることができます。 脆弱性は、CVE レポートから構成され、FirstWave からのデータが充実しています。 これらの2つの項目はFirstWaveから自動的にダウンロードされる適した照会を作り出すために結合されます。';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = '広域ネットワーク(WAN)は、都市、国、またはスパンなどの大きな地理領域をカバーするコンピュータネットワークです。 WANは、電話回線、ケーブル、エア波などの多くのメディアを組み合わせる通信チャネルを使用しています。 WANは、電話会社など、普通の航空会社が提供した伝送施設を利用しています。 WAN テクノロジーは、一般的に OSI 参照モデルの 3 つの層下で機能します。物理層、データ リンク層、ネットワーク層。';

$GLOBALS["lang"]['AD Group'] = 'ADグループ';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL、HFC、ISDN、等。';

$GLOBALS["lang"]['AIX'] = 'アックス';

$GLOBALS["lang"]['ALL IPs'] = 'すべてのIP';

$GLOBALS["lang"]['API / Web Access'] = 'API/Webアクセス';

$GLOBALS["lang"]['API Documentation'] = 'APIドキュメント';

$GLOBALS["lang"]['API Key required.'] = 'APIキーが必要です。';

$GLOBALS["lang"]['API Result'] = 'API 結果';

$GLOBALS["lang"]['About'] = 'お問い合わせ';

$GLOBALS["lang"]['Above are the only required items.'] = '上記は必須項目です。';

$GLOBALS["lang"]['Accept'] = 'お問い合わせ';

$GLOBALS["lang"]['Access Model'] = 'アクセスモデル';

$GLOBALS["lang"]['access_point'] = 'アクセスポイント';

$GLOBALS["lang"]['Access Point'] = 'アクセスポイント';

$GLOBALS["lang"]['access_token'] = 'アクセストークン';

$GLOBALS["lang"]['Access Token'] = 'アクセストークン';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = '管理者 $ 共有および RPC へのアクセスは SMB2 プロトコルを使用します。';

$GLOBALS["lang"]['ack_by'] = 'Ack バイ';

$GLOBALS["lang"]['Ack By'] = 'Ack バイ';

$GLOBALS["lang"]['ack_date'] = 'Ack 日付';

$GLOBALS["lang"]['Ack Date'] = 'Ack 日付';

$GLOBALS["lang"]['ack_time'] = 'Ack 時間';

$GLOBALS["lang"]['Ack Time'] = 'Ack 時間';

$GLOBALS["lang"]['action'] = 'アクション';

$GLOBALS["lang"]['Action'] = 'アクション';

$GLOBALS["lang"]['action_audit'] = '行動監査';

$GLOBALS["lang"]['Action Audit'] = '行動監査';

$GLOBALS["lang"]['action_command'] = 'アクションコマンド';

$GLOBALS["lang"]['Action Command'] = 'アクションコマンド';

$GLOBALS["lang"]['action_date'] = 'アクション日付';

$GLOBALS["lang"]['Action Date'] = 'アクション日付';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = '行動装置 所在地に割り当てられる';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = '行動装置 所在地に割り当てられる';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Org に割り当てられた行為装置';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Org に割り当てられた行為装置';

$GLOBALS["lang"]['action_download'] = 'アクションダウンロード';

$GLOBALS["lang"]['Action Download'] = 'アクションダウンロード';

$GLOBALS["lang"]['action_uninstall'] = 'アクションアンインストール';

$GLOBALS["lang"]['Action Uninstall'] = 'アクションアンインストール';

$GLOBALS["lang"]['actioned'] = 'アクション';

$GLOBALS["lang"]['Actioned'] = 'アクション';

$GLOBALS["lang"]['actioned_by'] = 'アクション';

$GLOBALS["lang"]['Actioned By'] = 'アクション';

$GLOBALS["lang"]['actioned_date'] = 'アクション日付';

$GLOBALS["lang"]['Actioned Date'] = 'アクション日付';

$GLOBALS["lang"]['actions'] = 'アクション';

$GLOBALS["lang"]['Actions'] = 'アクション';

$GLOBALS["lang"]['Activate'] = 'アクティブ化';

$GLOBALS["lang"]['Activate Free License'] = '無料ライセンスを有効化';

$GLOBALS["lang"]['Activate Key'] = 'キーを活動化させます';

$GLOBALS["lang"]['Activate a free Enterprise license'] = '無料のエンタープライズライセンスを有効化';

$GLOBALS["lang"]['Active'] = 'アクティブ';

$GLOBALS["lang"]['Active / Active'] = '活動的な/活動的な';

$GLOBALS["lang"]['Active / Passive'] = 'アクティブ/パッシブ';

$GLOBALS["lang"]['Active Directory'] = 'アクティブディレクトリ';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory ドメイン';

$GLOBALS["lang"]['active_directory_ou'] = 'アクティブディレクトリOu';

$GLOBALS["lang"]['Active Directory Ou'] = 'アクティブディレクトリOu';

$GLOBALS["lang"]['Active Directory Server'] = 'アクティブなディレクトリ サーバー';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'アクティブディレクトリとOpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'アドドメイン';

$GLOBALS["lang"]['Ad Domain'] = 'アドドメイン';

$GLOBALS["lang"]['ad_group'] = '広告グループ';

$GLOBALS["lang"]['Ad Group'] = '広告グループ';

$GLOBALS["lang"]['ad_server'] = 'アドサーバー';

$GLOBALS["lang"]['Ad Server'] = 'アドサーバー';

$GLOBALS["lang"]['Add'] = '追加する';

$GLOBALS["lang"]['Add Credentials'] = '認証情報を追加';

$GLOBALS["lang"]['Add Device'] = 'デバイスを追加';

$GLOBALS["lang"]['Add Device to Application'] = 'デバイスをアプリケーションに追加';

$GLOBALS["lang"]['Add Device to Cluster'] = 'クラスタにデバイスを追加する';

$GLOBALS["lang"]['Add Exception'] = '例外の追加';

$GLOBALS["lang"]['Add Field'] = 'フィールドを追加';

$GLOBALS["lang"]['Add If'] = '追加する';

$GLOBALS["lang"]['Add Policies from Device'] = 'デバイスからポリシーを追加';

$GLOBALS["lang"]['Add Policy'] = 'ポリシーの追加';

$GLOBALS["lang"]['Add Then'] = 'それから追加';

$GLOBALS["lang"]['Add Your Credentials'] = '資格情報を追加';

$GLOBALS["lang"]['Add image'] = '画像を追加';

$GLOBALS["lang"]['additional_items'] = '追加アイテム';

$GLOBALS["lang"]['Additional Items'] = '追加アイテム';

$GLOBALS["lang"]['address'] = '郵便番号';

$GLOBALS["lang"]['Address'] = '郵便番号';

$GLOBALS["lang"]['Address any nonconformities'] = '不適合性';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = '監査結果と是正措置のアドレス';

$GLOBALS["lang"]['Admin'] = 'アドミン';

$GLOBALS["lang"]['admin_status'] = '管理者ステータス';

$GLOBALS["lang"]['Admin Status'] = '管理者ステータス';

$GLOBALS["lang"]['advanced'] = 'アドバンスト';

$GLOBALS["lang"]['Advanced'] = 'アドバンスト';

$GLOBALS["lang"]['Afghanistan'] = 'アフガニスタン';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'インテグレーションが作成されると、インテグレーションの詳細を見ると、Debugという名前のフィールドに通知します。 これはデフォルトでは設定されません。 インテグレーションが実行されると、余計なロギングを提供します。 デバッグは、はいのように残さないでください。 これは、デバッグ出力には、WMIやSNMP認証などの項目を含む、外部システムから取得されるすべてのものが含まれるためです。 デバッグオプションは、問題が発生したときにのみ使用し、なぜ決定できるか確認するために深く掘り下げる必要があります。';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = '上記完了後、エージェントをアンインストールします。';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'エージェント? ディスカバリー? 資格情報';

$GLOBALS["lang"]['agents'] = 'エージェント';

$GLOBALS["lang"]['Agents'] = 'エージェント';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'エージェントのエントリは、期間、ネットワーク、オペレーティングシステムを指定して作成することができます。 すべてのテストが一致する場合、サーバーはアクションを実行するためにエージェントに尋ねます。 任意のテストが設定されていない場合、それはから除外されます <i>すべてマッチしなければなりません</i> 条件。<br/><br/>複数のエージェントを作成し、サーバーに1つまたはすべてのエージェントエントリをチェックすることができます。 (例えば) 言うエージェントを 1 つ指定します。 <i>エージェント IP がこのサブネットにある場合は、デバイスの場所_id を設定します。</i>お問い合わせ<br/><br/>別の例は、監査をまったく実行していないかもしれませんが、スクリプトをダウンロードして実行します。 管理者権限でエージェントがインストールされている場合、開口部なしでマシンを管理できるようになりました。 <strong>その他</strong> 港から世界へ。<p>高度なエージェントを有効にすると、エージェントは任意のファイルをダウンロードし、任意のコマンドを実行するために指示することができます。 <strong>警告</strong>: : : セキュリティリスクが伴います。 この設定は <strong>メニュー</strong> HTTPS および有効な (証明書の権限が提供される) 証明書を使用して Open-AudIT を動くとき機能 </p>';

$GLOBALS["lang"]['Aggressive'] = '攻撃的';

$GLOBALS["lang"]['Aland Islands'] = 'アラン諸島';

$GLOBALS["lang"]['Albania'] = 'アルバニア';

$GLOBALS["lang"]['Albanian'] = 'アルバニア';

$GLOBALS["lang"]['alert_style'] = 'アラートスタイル';

$GLOBALS["lang"]['Alert Style'] = 'アラートスタイル';

$GLOBALS["lang"]['Algeria'] = 'アルジェリア';

$GLOBALS["lang"]['algorithm'] = 'アルゴリスム';

$GLOBALS["lang"]['Algorithm'] = 'アルゴリスム';

$GLOBALS["lang"]['alias'] = 'アリアス';

$GLOBALS["lang"]['Alias'] = 'アリアス';

$GLOBALS["lang"]['All'] = 'すべて';

$GLOBALS["lang"]['All IPs'] = 'すべてのIP';

$GLOBALS["lang"]['All Policies'] = 'すべてのポリシー';

$GLOBALS["lang"]['All Queued Items'] = 'すべてのキューイングアイテム';

$GLOBALS["lang"]['All collections URLs use the format'] = 'すべてのコレクションのURLはフォーマットを使用します';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'すべてのデバイスサブテーブルには、重要な列のカップルが含まれています。';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'コンピュータのようなタイプを持つすべてのデバイス。';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'コンピュータまたはルーターの種類を持つすべてのデバイス。';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'スイッチとプリンターの種類のないすべてのデバイス。';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'スイッチとプリンターの種類のないすべてのデバイス。 上記のクエリと同じです。';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = '定期的なディスカバリーオプションは、Device Seed Discoveriesでもご利用いただけます。';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'すべてのタスクは、WindowsとLinuxで同じように作成することができます。 タスクは、スケジュール実行にCRONメソッドを使用します。';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = '情報に対するこの要求に沿って、機能使用とインストールに関する必要な情報を提供するFirstWaveのデータポイントに戻ってきます。';

$GLOBALS["lang"]['Also can be created from the'] = 'また、から作成することもできます。';

$GLOBALS["lang"]['Alternatives'] = '代替品';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'アマゾンAWS フィールド';

$GLOBALS["lang"]['American Samoa'] = 'アメリカ サモア';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory のディスカバリーは、ネットワークのリストを Active Directory に問い合わせ、通常の Subnet ディスカバリーと同様に関連する IP をスキャンします。';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'オルグ(組織化)は、Open-AudIT内のコレクションのほとんどのアイテムの所有者です。 グローバルアイテムの例外 <i>コンテンツ</i>, ほとんどの項目は、Org に割り当てられます。 ユーザーは、収集中のアイテムへのアクセス権を持っています。以下は、ユーザーのOrgに許可されています。';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'このポートでは、TCP接続、UDPデータグラム、SCTPアソシエーションを積極的に受け入れています。 これらを見つけることは、ポートスキャンの第一次目標です。 セキュリティ志向の人々は、各開口ポートが攻撃のための道であることを知っています。 攻撃者やペンテスターは、オープンポートを悪用したいのですが、管理者は正当なユーザーを傷つけずにファイアウォールを閉じたり保護したりしようとします。 オープンポートは、ネットワーク上で利用可能なサービスを表示するため、非セキュリティスキャンにも興味深いです。';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '配列 <code>benchmarks.id</code>お問い合わせ';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '配列 <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '外部リンクを表すオブジェクトの配列は、より多くの情報につながります。';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'デバイスの種類とアイデンティティを推測';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '必要に応じて必要な属性を含む暗号化されたJSON文書 <code>credentials.type</code>お問い合わせ';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = '企業のプライベートネットワークは、単一の組織がオフィスの場所(例、生産拠点、本社、リモートオフィス、店舗)を相互接続できるように構築するネットワークです。';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = '現在のユーザーがログインしていると、Webインターフェイスを使用してエントリを作成できます。';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'JSON POST ボディは以下のとおりです。 「データ」フォーム項目に添付してください。';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'ウィジェット SQL は、場所ごとにカウントされたデバイスを表示します。';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = '既存の Open-AudIT ユーザーが LDAP サーバーによって認証され、認可されました。 成功。';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '本サイトで必要なサービスレベルの表示';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '発見が完了したら、内部フィールドを示します。';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = '開いている|ろ過された港は開いていると見なされます(そして装置検出を誘発します)。<br/>以前はオープンエイド IT は Nmap の応答を考慮した';

$GLOBALS["lang"]['An optional GeoCode'] = 'オプションのジオコード';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'sudo を使用するオプションのパスワード。';

$GLOBALS["lang"]['Analyzed'] = 'アナリスト';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = '最後に、[送信] をクリックしてこのディスカバリーを実行します。';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '何かが間違っているのか?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = '最後にクリック <i>送信する</i> Entra 用の Open-AudIT Auth メソッドを作成する';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'そして最後に、それほどセキュリティの問題ではありません - より多くの安心。 データ構造はオープンで文書化されています。 閲覧できます';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'そして名前を提供して下さい-私達はすぐにOpen-AudIT を推薦します、しかしあなたが望む何でもそれの名前をすることができます。 オプションを確認してください <i>ギャラリー(Non-gallery)で見つけられない他のアプリケーションを統合</i> 選択します。 そしてそれからかちりと鳴らして下さい <i>ダウンロード<i>お問い合わせ</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'もっと詳しく';

$GLOBALS["lang"]['Andorra'] = 'アンドラ';

$GLOBALS["lang"]['Angola'] = 'アンゴラ';

$GLOBALS["lang"]['Anguilla'] = 'アンギラ';

$GLOBALS["lang"]['Annex A Controls'] = 'アネックス A コントロール';

$GLOBALS["lang"]['Antarctica'] = 'アンタルチカ';

$GLOBALS["lang"]['AntiVirus'] = 'アンチウイルス';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirusパッケージ';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'アンティグア・バーブーダ';

$GLOBALS["lang"]['Antivirus'] = 'アンチウィルス';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'この発見から除外したいTCPポート(コンマ区切り、スペースなし)。 Nmap 7+ を使用した場合のみご利用いただけます。';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'この発見から除外したいUDPポート(コンマ区切り、スペースなし)。 Nmap 7+ を使用した場合のみご利用いただけます。';

$GLOBALS["lang"]['Any additional documentation you need.'] = '必要な追加のドキュメント。';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '注意する追加のメモ。';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = '* に続く任意の属性は、このフィールドを完了するために、CVSS のデータが v4 よりも少ないことを示します。 デフォルトでは、v4 フィールドを使用しようとしますが、 ポップアップされていない場合は、属性の以前のバージョン(s)に戻ります。';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'どのデバイスも、監査スクリプトを実行すると、この Org に割り当てられます。';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'どのデバイスも、監査スクリプトを実行すると、この Org に割り当てられます。 サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '発見されたデバイスは、設定した場合、この場所に割り当てられます。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = '検出されたデバイスは、監査スクリプトを実行したときにこの場所に割り当てられます(設定した場合)。';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '検出されたデバイスは、監査スクリプトを実行したときにこの場所に割り当てられます(設定した場合)。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '発見されたデバイスは、設定した時にこの Org に割り当てられます。 設定されていない場合、それらはに割り当てられます <code>org_id</code> この発見について サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'この方法で見つかったファイルは保存されます <i>実行可能</i> 他の装置の部品によってテーブル。';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '必要なフィルター。 Note: 型 = トラフィックの場合、これはフォントのアイコンを表します。';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '特定の TCP ポートをテストしたい (コンマ区切り、スペースなし)。';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'テストした特定のUDPポート(コンマ区切り、スペースなし)。';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'アップロードした画像は、こちらに掲載されます。';

$GLOBALS["lang"]['Application'] = 'アプリケーション';

$GLOBALS["lang"]['Application Definitions'] = 'アプリケーション定義';

$GLOBALS["lang"]['application_id'] = 'アプリケーションID';

$GLOBALS["lang"]['Application ID'] = 'アプリケーションID';

$GLOBALS["lang"]['Application Licenses'] = 'アプリケーションライセンス';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '適用、オペレーティング システムかハードウェア。';

$GLOBALS["lang"]['applications'] = 'アプリケーション';

$GLOBALS["lang"]['Applications'] = 'アプリケーション';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'アプリケーションはエンタープライズのみの機能です。';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Open-AudIT 2.2 では、さらなる開発が進むにつれて、コンセプトの拡大を視野に入れています。';

$GLOBALS["lang"]['applied'] = '応用分野';

$GLOBALS["lang"]['Applied'] = '応用分野';

$GLOBALS["lang"]['Approved'] = '承認済み';

$GLOBALS["lang"]['Approved Packages'] = '公認のパッケージ';

$GLOBALS["lang"]['April'] = '4月4日';

$GLOBALS["lang"]['Arabic'] = 'ログイン';

$GLOBALS["lang"]['architecture'] = '建築設計';

$GLOBALS["lang"]['Architecture'] = '建築設計';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'この入力項目を削除したいですか?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'この出力項目を削除したいですか?';

$GLOBALS["lang"]['Are you sure?'] = 'お問い合わせ';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'お問い合わせ これにより、すべてのキューエントリを削除し、残りのIPが発見されるのを防ぐことができます。';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'お問い合わせ これは、キュー処理回数をリセットし、サーバーに負荷を引き起こす可能性があります。';

$GLOBALS["lang"]['area'] = 'エリア';

$GLOBALS["lang"]['Area'] = 'エリア';

$GLOBALS["lang"]['Argentina'] = 'アルゼンチン';

$GLOBALS["lang"]['Armenia'] = 'アルメニア';

$GLOBALS["lang"]['arp'] = 'アルプ';

$GLOBALS["lang"]['Arp'] = 'アルプ';

$GLOBALS["lang"]['Aruba'] = 'アルバ';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Open-AudITで作製方法のリマインダーとして、';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'その結果、 <strong>必須</strong> ディスカバリー資格のユーザにadmin $の共有が利用できます。 対象となるWindowsマシンが提供されていることを確認してください <i>ログイン</i> ディスカバリー資格のユーザーへのアクセス<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = '上記のように、開発者は提供されているすべての翻訳言語を話しません。 つまり、翻訳されたテキストである acuracy ではレビューできません。 カーソルレビューをお試しください。 正しく翻訳されていないものを見ると、自分で変更できます。 適切な言語ファイルを編集し、変更するテキストを見つけます。 多分それは存在しませんし、あなたはそれを追加する必要があります。 テキストを変更し、ファイルを保存し、ページをリフレッシュしてください。 効果を取るために、任意のサービス/デーモンを再起動する必要はありません。 ブラウザをリフレッシュする必要があります。';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'OpenSCAPのベンチマークに従って - <i>非操作環境で最初にテストすることなく、このベンチマークの設定のいずれかを実装しようとしないでください。 このベンチマークの作成者は、他の当事者による使用について一切の責任を負わないものとし、その品質、信頼性、その他の特徴について、保証、表明、または黙示を問わず一切の責任を負わないものとします。</i><br/><br/>真剣に、盲目に始まりません <i>フィックス</i> 未生産の同一環境でテストを徹底することなくベンチマークを実行した後に明らかになった問題。';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'デバイス環境の属性として。 生産、訓練、等。';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = '監査スクリプトが bash を使用するため、* のワイルドカードをディレクトリと除外を定義するときに使用できます。';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = '通常通り、メニュー → 管理 → 統合 → 統合を作成します。 上記のように、Linux上で実行されていると、同じサーバーにNMISを持っている場合は、クリック以外の何もする必要はありません <i>送信する</i>お問い合わせ それよりも簡単に作れない。';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'ディスカバリーを実行し、デバイス結果を収集すると、ネットワークのリストがポップアップ表示されます。 Blessed Subnets 機能は、ネットワークのこのリストを使用して、それらのネットワーク上のデバイスからのデータだけを受け入れます。';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'コレクタが登録されているので、この発見を実行する場所を選択してください。';

$GLOBALS["lang"]['Ask me later'] = 'お問い合わせ';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'コミュニティに助けを求めるか、他の人のための答えを貢献する。';

$GLOBALS["lang"]['aspect_ratio'] = 'アスペクト比';

$GLOBALS["lang"]['Aspect Ratio'] = 'アスペクト比';

$GLOBALS["lang"]['Asset ID'] = '資産ID';

$GLOBALS["lang"]['asset_ident'] = 'アセット・アイデンティティ';

$GLOBALS["lang"]['Asset Ident'] = 'アセット・アイデンティティ';

$GLOBALS["lang"]['asset_number'] = '資産番号';

$GLOBALS["lang"]['Asset Number'] = '資産番号';

$GLOBALS["lang"]['asset_tag'] = 'アセットタグ';

$GLOBALS["lang"]['Asset Tag'] = 'アセットタグ';

$GLOBALS["lang"]['Assign Device to Application'] = 'デバイスをアプリケーションに割り当てる';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'デバイスをクラスタに割り当てる';

$GLOBALS["lang"]['Assign Device to Location'] = 'デバイスをロケーションに割り当てる';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'デバイスを組織に割り当てる';

$GLOBALS["lang"]['Assign Devices to Location'] = 'デバイスをロケーションに割り当てる';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'デバイスを組織に割り当てる';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS管理者またはチームを割り当てる';

$GLOBALS["lang"]['Assign an Operator'] = 'オペレータを割り当てる';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = '監査されたデバイスをこの Org に割り当てます。 現在割り当てられた Org (またはデフォルト設定) でデバイスを離れる空白のままにします。';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'デバイスをロケーションに割り当てる';

$GLOBALS["lang"]['Assign the device to an Org'] = 'デバイスを Org に割り当てる';

$GLOBALS["lang"]['Assigned To'] = 'に割り当てられた';

$GLOBALS["lang"]['Assigning Discovered Devices'] = '発見されたデバイスを割り当てる';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = '現時点ではnetstat_ports、ソフトウェア、ユーザーを使用できます。';

$GLOBALS["lang"]['attached_device_id'] = 'デバイス ID';

$GLOBALS["lang"]['Attached Device ID'] = 'デバイス ID';

$GLOBALS["lang"]['attached_to'] = '到着予定';

$GLOBALS["lang"]['Attached To'] = '到着予定';

$GLOBALS["lang"]['attachment'] = '添付ファイル';

$GLOBALS["lang"]['Attachment'] = '添付ファイル';

$GLOBALS["lang"]['attachments'] = '添付ファイル';

$GLOBALS["lang"]['Attachments'] = '添付ファイル';

$GLOBALS["lang"]['attack_complexity'] = '攻撃の複雑さ';

$GLOBALS["lang"]['Attack Complexity'] = '攻撃の複雑さ';

$GLOBALS["lang"]['attack_requirements'] = '攻撃要件';

$GLOBALS["lang"]['Attack Requirements'] = '攻撃要件';

$GLOBALS["lang"]['attack_vector'] = '攻撃ベクトル';

$GLOBALS["lang"]['Attack Vector'] = '攻撃ベクトル';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'ローカルホストを監査していない場合は、デバイスをpingしようとします。';

$GLOBALS["lang"]['Attribute'] = 'アトリビュート';

$GLOBALS["lang"]['attributes'] = 'アトリビュート';

$GLOBALS["lang"]['Attributes'] = 'アトリビュート';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributes は、Open-AudIT が特定のフィールドで使用するために保存されます。現在、すべてのフィールドは、デバイス、場所、orgs、およびクエリテーブルに基づいています。 編集できる属性は、次の列に関連付けられています。 クラス、環境、ステータス、タイプ。';

$GLOBALS["lang"]['Audit'] = '監査';

$GLOBALS["lang"]['Audit AIX'] = '監査 AIX';

$GLOBALS["lang"]['Audit DNS'] = '監査DNS';

$GLOBALS["lang"]['Audit ESXi'] = '監査ESXi';

$GLOBALS["lang"]['Audit Linux'] = '監査Linux';

$GLOBALS["lang"]['audit_log'] = '監査ログ';

$GLOBALS["lang"]['Audit Log'] = '監査ログ';

$GLOBALS["lang"]['Audit Mount Point'] = '監査の台紙ポイント';

$GLOBALS["lang"]['Audit My PC'] = '私のPCを監査';

$GLOBALS["lang"]['Audit Netstat'] = '監査ネットスタット';

$GLOBALS["lang"]['Audit OSX'] = '監査OSX';

$GLOBALS["lang"]['Audit Result Input'] = '監査結果入力';

$GLOBALS["lang"]['Audit Software'] = '監査ソフトウェア';

$GLOBALS["lang"]['Audit Status'] = '監査状況';

$GLOBALS["lang"]['Audit Win32 Product'] = '監査ウィン32 プロダクト';

$GLOBALS["lang"]['Audit Windows'] = '監査のWindows';

$GLOBALS["lang"]['Audit the Device'] = 'デバイスを監査する';

$GLOBALS["lang"]['Audits'] = '監査';

$GLOBALS["lang"]['August'] = '8月8日';

$GLOBALS["lang"]['Australia'] = 'オーストラリア';

$GLOBALS["lang"]['Austria'] = 'オーストリア';

$GLOBALS["lang"]['Auth'] = 'リリース';

$GLOBALS["lang"]['auth'] = 'リリース';

$GLOBALS["lang"]['Auth Methods'] = 'Auth メソッド';

$GLOBALS["lang"]['Authenticate only'] = '認証のみ';

$GLOBALS["lang"]['Authentication Passphrase'] = '認証パスフレーズ';

$GLOBALS["lang"]['Authentication Protocol'] = '認証プロトコル';

$GLOBALS["lang"]['authority_key_ident'] = '権限 キー ID';

$GLOBALS["lang"]['Authority Key Ident'] = '権限 キー ID';

$GLOBALS["lang"]['Auto'] = '自動車';

$GLOBALS["lang"]['auto_renew'] = '自動更新';

$GLOBALS["lang"]['Auto Renew'] = '自動更新';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Open-AudIT Server で自動ポップアップ';

$GLOBALS["lang"]['AutoRenew'] = '自動更新';

$GLOBALS["lang"]['automatable'] = 'オートマチック';

$GLOBALS["lang"]['Automatable'] = 'オートマチック';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'コレクターズOSに基づいて自動的にポップアップします。';

$GLOBALS["lang"]['availability'] = '交通アクセス';

$GLOBALS["lang"]['Availability'] = '交通アクセス';

$GLOBALS["lang"]['Available Benchmarks'] = '利用可能なベンチマーク';

$GLOBALS["lang"]['Awaiting Analysis'] = '待っている分析';

$GLOBALS["lang"]['Azerbaijan'] = 'アゼルバイジャン';

$GLOBALS["lang"]['Azerbaijani'] = 'アゼルバイジャン';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azureアクティブディレクトリ';

$GLOBALS["lang"]['BTU Max'] = '最高BTU';

$GLOBALS["lang"]['BTU Total'] = 'BTU合計';

$GLOBALS["lang"]['Backbone network'] = 'バックボーンネットワーク';

$GLOBALS["lang"]['Backup'] = 'バックアップ';

$GLOBALS["lang"]['Bahamas the'] = 'バハマ';

$GLOBALS["lang"]['Bahrain'] = 'バーレーン';

$GLOBALS["lang"]['Bangladesh'] = 'バングラデシュ';

$GLOBALS["lang"]['bank'] = '銀行口座';

$GLOBALS["lang"]['Bank'] = '銀行口座';

$GLOBALS["lang"]['Banned'] = '禁止事項';

$GLOBALS["lang"]['Banned Packages'] = '禁止されたパッケージ';

$GLOBALS["lang"]['bar_code'] = 'バーコード';

$GLOBALS["lang"]['Bar Code'] = 'バーコード';

$GLOBALS["lang"]['Barbados'] = 'バルバドス';

$GLOBALS["lang"]['Base DN'] = '基礎 DN';

$GLOBALS["lang"]['base_score'] = '基礎スコア';

$GLOBALS["lang"]['Base Score'] = '基礎スコア';

$GLOBALS["lang"]['base_severity'] = 'ベース重症';

$GLOBALS["lang"]['Base Severity'] = 'ベース重症';

$GLOBALS["lang"]['based_on'] = 'ベースオン';

$GLOBALS["lang"]['Based On'] = 'ベースオン';

$GLOBALS["lang"]['baseline'] = 'ベースライン';

$GLOBALS["lang"]['Baseline'] = 'ベースライン';

$GLOBALS["lang"]['baseline_id'] = 'ベースラインID';

$GLOBALS["lang"]['Baseline ID'] = 'ベースラインID';

$GLOBALS["lang"]['baselines'] = 'ベースライン';

$GLOBALS["lang"]['Baselines'] = 'ベースライン';

$GLOBALS["lang"]['baselines_policies'] = 'ベースラインポリシー';

$GLOBALS["lang"]['Baselines Policies'] = 'ベースラインポリシー';

$GLOBALS["lang"]['Baselines Policy'] = 'ベースラインポリシー';

$GLOBALS["lang"]['Baselines Policy Details'] = 'ベースラインポリシーの詳細';

$GLOBALS["lang"]['baselines_results'] = 'ベースライン結果';

$GLOBALS["lang"]['Baselines Results'] = 'ベースライン結果';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselinesはnetstatポート、ユーザー、ソフトウェアを比較できます。';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'ベースラインを使用すると、以前に定義した属性(ベースライン)のセットで監査データを組み合わせて、デバイスのコンプライアンスを決定できます。';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'デバイス比較のためのベースライン';

$GLOBALS["lang"]['Basic'] = '基本情報';

$GLOBALS["lang"]['Basque'] = 'バスク';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = '可能な限り透明になろうとしているので、送信する実際のデータです。';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = '同じ方法で構成されているマシンがシステム管理と監査の主要部分であるかどうかを判断できるようになり、その上で報告するのはシンプルで自動化されます。 ベースラインを定義すると、あらかじめ決められたスケジュールのデバイスに対して自動的に実行されます。 これらの実行されたベースラインの出力は、Web閲覧、第三者システムへのインポート、または印刷されたレポートとしてもご利用いただけます。<br/><br/>監査および管理目的のために、固定された、既知の優れたデバイスに対して、個々のデバイスをベースラインするのに有利であることができます。 ベースラインを使用すると、以前に定義した属性(ベースライン)のセットで監査データを組み合わせて、デバイスのコンプライアンスを決定できます。';

$GLOBALS["lang"]['Belarus'] = 'ベラルーシ';

$GLOBALS["lang"]['Belgium'] = 'ベルギー';

$GLOBALS["lang"]['Belize'] = 'ベリーズ';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = '以下は、必要な csv 形式の例です。';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'これらの行は、変数がスクリプトに注入される場所です。 以前の例に続いて、Linux 監査スクリプトは、そのようにディレクトリーでポップアップします。';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = '以下では、Org Chartの例を確認できます。 ユーザが権限を持っている場合 <i>財務 A</i> Org, 彼らはまた、部門A、B&Cの子孫オラグの許可を持っています。 リクエストされたコレクションに関係なく。<br/><br/>リクエストされたコレクションがアセンダントを許せば、ユーザはカンパニー1とデフォルトオーグのアイテムにアクセスすることもできます。 これは(上記のように)クエリ、グループ、または。<br/><br/>Note - ユーザはデフォルトオーグからクエリへアクセスできるかもしれませんが、クエリ自体は結果ではありません。 結果は、ユーザーがアクセスしているデバイスのみを表示します。 - IE デバイス 金融 A および部門 A、B&C から。';

$GLOBALS["lang"]['Benchmark'] = 'ベンチマーク';

$GLOBALS["lang"]['benchmark_id'] = 'ベンチマークID';

$GLOBALS["lang"]['Benchmark ID'] = 'ベンチマークID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark タスクは、ベンチマークを作成するときに自動的に作成されます。';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'ベンチマークの実行と処理は、時間の長い量を取ることができます, それ以来、それらをスケジュールし、それらアドホックを実行しない設定.';

$GLOBALS["lang"]['benchmarks'] = 'ベンチマーク';

$GLOBALS["lang"]['Benchmarks'] = 'ベンチマーク';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks 例外';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks 例外';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks ログ';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks ログ';

$GLOBALS["lang"]['benchmarks_policies'] = 'ベンチマークポリシー';

$GLOBALS["lang"]['Benchmarks Policies'] = 'ベンチマークポリシー';

$GLOBALS["lang"]['benchmarks_result'] = 'ベンチマーク結果';

$GLOBALS["lang"]['Benchmarks Result'] = 'ベンチマーク結果';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarksは、オペレーティングシステムとバージョンを提供し、特定のガイドと実行する機械のリストと組み合わせて作成されます。 作成後、スケジュール上の機械のリストに対してベンチマークが実行されます。';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'ベストプラクティス構成のベンチマーク';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarksは、コンピュータのセキュリティに関する推奨事項を提供し、OpenSCAPツールとポリシーを活用します。<p><i>OpenSCAPホームページから:</i> 日々新しい脆弱性が発見され、パッチを当てるコンピュータセキュリティの時代を超えた世界では、セキュリティのコンプライアンスを強化することは、継続的なプロセスでなければなりません。 また、ポリシーへの調整、定期的な評価およびリスク監視の方法を含める必要があります。 OpenSCAPエコシステムは、これらのプロセスの迅速で費用効果が大きい、そして柔軟な実装のためのツールとカスタマイズ可能なポリシーを提供します。</p>';

$GLOBALS["lang"]['Benefits'] = 'メリット';

$GLOBALS["lang"]['Bengali'] = 'ベンガル語';

$GLOBALS["lang"]['Benin'] = 'サインイン';

$GLOBALS["lang"]['Bermuda'] = 'バミューダ';

$GLOBALS["lang"]['best_practises'] = 'ベストプラクティス';

$GLOBALS["lang"]['Best Practises'] = 'ベストプラクティス';

$GLOBALS["lang"]['Bhutan'] = 'ブータン';

$GLOBALS["lang"]['bios'] = 'バイオス';

$GLOBALS["lang"]['Bios'] = 'バイオス';

$GLOBALS["lang"]['body'] = 'ボディ';

$GLOBALS["lang"]['Body'] = 'ボディ';

$GLOBALS["lang"]['Bolivia'] = 'ボリビア';

$GLOBALS["lang"]['Boolean'] = 'ボオラン';

$GLOBALS["lang"]['Boolean 1/0'] = 'ボオラン 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'ボオラン y/n';

$GLOBALS["lang"]['boot_device'] = 'ブーツ装置';

$GLOBALS["lang"]['Boot Device'] = 'ブーツ装置';

$GLOBALS["lang"]['bootable'] = 'ブーツ可能';

$GLOBALS["lang"]['Bootable'] = 'ブーツ可能';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'ボスニアとヘルツェゴビナ';

$GLOBALS["lang"]['Both forms of'] = '両方の形態';

$GLOBALS["lang"]['Botswana'] = 'ボツワナ';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'ブーヴェット島(ブーヴェトヤ)';

$GLOBALS["lang"]['Brazil'] = 'ブラジル';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'ブラジルポルトガル語';

$GLOBALS["lang"]['Breaking it Down'] = 'それを破壊する';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '英国インド洋領事(Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = '英国領バージン諸島';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'ツリーをコンソールルートに移動 → コンポーネントサービス -> コンピュータ -> 私のコンピュータ<br/><br/>右クリック <i>私のコンピュータ</i> プロパティを選択<br/><br/>選択する <i>デフォルトプロパティ</i> タブ';

$GLOBALS["lang"]['Brunei Darussalam'] = 'ブルネイ・ダルサラーム';

$GLOBALS["lang"]['btu_max'] = '最高Btu';

$GLOBALS["lang"]['Btu Max'] = '最高Btu';

$GLOBALS["lang"]['btu_total'] = 'Btu合計';

$GLOBALS["lang"]['Btu Total'] = 'Btu合計';

$GLOBALS["lang"]['build_number'] = 'ビルド番号';

$GLOBALS["lang"]['Build Number'] = 'ビルド番号';

$GLOBALS["lang"]['build_number_full'] = 'ビルド番号 完全';

$GLOBALS["lang"]['Build Number Full'] = 'ビルド番号 完全';

$GLOBALS["lang"]['Building'] = '建築設計';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'クライアントやパートナーとの信頼を築く';

$GLOBALS["lang"]['Bulgaria'] = 'ブルガリア';

$GLOBALS["lang"]['Bulgarian'] = 'インドネシア';

$GLOBALS["lang"]['Bulk Edit'] = '一括編集';

$GLOBALS["lang"]['Bulk Edit Form'] = 'バルク編集フォーム';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'バルク編集装置属性';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = '次のページをクリックすると、一括編集選択が選択されません。';

$GLOBALS["lang"]['Burkina Faso'] = 'ブルキナファソ';

$GLOBALS["lang"]['Burundi'] = 'ブルンディ';

$GLOBALS["lang"]['business_requirements'] = 'ビジネス要件';

$GLOBALS["lang"]['Business Requirements'] = 'ビジネス要件';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'しかし、私は唯一のWindowsクライアントマシンが利用可能を持っています!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'しかし、更新するたびに言語ファイルを変更する必要はありません!';

$GLOBALS["lang"]['Buy'] = '買う';

$GLOBALS["lang"]['Buy More'] = 'もっと読む';

$GLOBALS["lang"]['Buy More Licenses'] = 'より多くのライセンスを購入';

$GLOBALS["lang"]['By'] = 'によって';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'デフォルトでは、すべてのデバイスを nmis_manage 属性にセットして統合します。 <i>ログイン</i>お問い合わせ 4.2.0 では言うルールも発送します <i>デバイスを発見し、それが有効なSNMP OIDを持っている場合, NMISによって管理されているデバイスマーク</i>お問い合わせ あなたが望むものではないならば、明らかにあなたはこれを無効にすることができます。';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'デフォルトでは、自己署名証明書を使用する傾向があるので、証明書の検証をスキップします。 証明書の検証を有効にするには、以下のファイルを編集します。';

$GLOBALS["lang"]['CIDR'] = 'CIDRについて';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDRについて マスク';

$GLOBALS["lang"]['cli_config'] = 'お問い合わせ 設定';

$GLOBALS["lang"]['CLI Config'] = 'お問い合わせ 設定';

$GLOBALS["lang"]['CPU'] = 'ログイン';

$GLOBALS["lang"]['CPUs'] = 'CPUの';

$GLOBALS["lang"]['CSV'] = 'CSVシリーズ';

$GLOBALS["lang"]['CVE'] = 'ログイン';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEは、受信した状況、待ち受けた分析、分析を受け、拒否した。 これらのCVEは、正しいSQLクエリを生成するために十分な情報が含まれていません。';

$GLOBALS["lang"]['Calculated from discovery.'] = '発見から計算される。';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'このネットワークの有効なIPアドレスの総数を計算しました。';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '完了時に計算し、この項目を実行する時間。';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'インテグレーションが実行され、このインテグレーションでデバイスのJSON表現が含まれているときに計算されます。 各リンク <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'インテグレーションが実行され、このインテグレーション内の場所のJSON表現が含まれているときに計算されます。 各リンク <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '統合が実行されると計算され、Open-AudITから選択したデバイスの数が含まれています。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '統合が実行され、外部システムを選択したデバイスの数が含まれているときの計算。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '統合が実行され、外部システムに更新されるデバイスの数が含まれている場合に計算されます。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '統合が実行されると計算され、Open-AudITで更新されたデバイスの数が含まれています。';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = '[スタート]をクリックしてコマンドプロンプトを呼び出し、検索 <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'カンボジア';

$GLOBALS["lang"]['Cameroon'] = 'キャメルーン';

$GLOBALS["lang"]['Campus Area Network'] = 'キャンパスエリアネットワーク';

$GLOBALS["lang"]['Campus area network'] = 'キャンパスエリアネットワーク';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'できます <code>active</code>, <code>passive</code> または空白。';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'できます <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> または空白。';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'できます <code>auto</code>, <code>fixed</code>, <code>other</code> または空白。';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'できます <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> または空白。';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'できます <code>line</code>, <code>pie</code> または <code>traffic</code>お問い合わせ';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'できます <code>user</code> または <code>collector</code>お問い合わせ';

$GLOBALS["lang"]['Can be set by discovery or user.'] = '発見またはユーザーによって設定できます。';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = '発見またはユーザーによって設定できます。 位置表からIDを使用します。';

$GLOBALS["lang"]['Can the user edit this item.'] = 'この項目を編集することができます。';

$GLOBALS["lang"]['Canada'] = 'カナダ';

$GLOBALS["lang"]['Cancel'] = 'キャンセル';

$GLOBALS["lang"]['capabilities'] = '能力・能力';

$GLOBALS["lang"]['Capabilities'] = '能力・能力';

$GLOBALS["lang"]['Capacity'] = '定員';

$GLOBALS["lang"]['Cape Verde'] = 'ケープ・ヴェルデ';

$GLOBALS["lang"]['Capitalise'] = 'トピックス';

$GLOBALS["lang"]['caption'] = 'キャプション';

$GLOBALS["lang"]['Caption'] = 'キャプション';

$GLOBALS["lang"]['Catalan'] = 'カタロニア';

$GLOBALS["lang"]['Cayman Islands'] = 'ケイマン諸島';

$GLOBALS["lang"]['Cellular Details'] = '細胞の細部';

$GLOBALS["lang"]['Central African Republic'] = '中央アフリカ共和国';

$GLOBALS["lang"]['certificate'] = '証明書';

$GLOBALS["lang"]['Certificate'] = '証明書';

$GLOBALS["lang"]['certificate_file'] = '証明書ファイル';

$GLOBALS["lang"]['Certificate File'] = '証明書ファイル';

$GLOBALS["lang"]['certificate_name'] = '証明書の名前';

$GLOBALS["lang"]['Certificate Name'] = '証明書の名前';

$GLOBALS["lang"]['certificates'] = '証明書';

$GLOBALS["lang"]['Certificates'] = '証明書';

$GLOBALS["lang"]['Certification'] = '認証';

$GLOBALS["lang"]['Certification Audit'] = '認証監査';

$GLOBALS["lang"]['Certification Process'] = '認証プロセス';

$GLOBALS["lang"]['Chad'] = 'チャド';

$GLOBALS["lang"]['Change'] = '変更点';

$GLOBALS["lang"]['change_id'] = 'IDの変更';

$GLOBALS["lang"]['Change ID'] = 'IDの変更';

$GLOBALS["lang"]['change_log'] = '変更ログ';

$GLOBALS["lang"]['Change Log'] = '変更ログ';

$GLOBALS["lang"]['Change Logs'] = 'ログの変更';

$GLOBALS["lang"]['change_type'] = '変更の種類';

$GLOBALS["lang"]['Change Type'] = '変更の種類';

$GLOBALS["lang"]['check_minutes'] = '分をチェックする';

$GLOBALS["lang"]['Check Minutes'] = '分をチェックする';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'これらのポートでSSHをチェック';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'SSHサービスに関するこのポートを確認してください。';

$GLOBALS["lang"]['Chile'] = 'チリ';

$GLOBALS["lang"]['China'] = '中国・中国';

$GLOBALS["lang"]['Chinese'] = '中国語(簡体)';

$GLOBALS["lang"]['Chinese (traditional)'] = '中国語(繁体)';

$GLOBALS["lang"]['Choose'] = 'お問い合わせ';

$GLOBALS["lang"]['Choose (select OS first)'] = '選択(OSを最初に選択)';

$GLOBALS["lang"]['Choose a Device'] = 'デバイスを選択';

$GLOBALS["lang"]['Choose a Table'] = 'テーブルを選ぶ';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = '最初のドロップダウンからタスクの種類を選択します。 タスクの種類に応じて必要なフィールドを設定します。';

$GLOBALS["lang"]['Christmas Island'] = 'クリスマス島';

$GLOBALS["lang"]['cidr'] = 'シダー';

$GLOBALS["lang"]['Cidr'] = 'シダー';

$GLOBALS["lang"]['circuit_count'] = '回路計算';

$GLOBALS["lang"]['Circuit Count'] = '回路計算';

$GLOBALS["lang"]['circuit_status'] = '回路の状態';

$GLOBALS["lang"]['Circuit Status'] = '回路の状態';

$GLOBALS["lang"]['city'] = 'シティ';

$GLOBALS["lang"]['City'] = 'シティ';

$GLOBALS["lang"]['class'] = 'クラス';

$GLOBALS["lang"]['Class'] = 'クラス';

$GLOBALS["lang"]['class_text'] = 'クラステキスト';

$GLOBALS["lang"]['Class Text'] = 'クラステキスト';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'クリック <i>新しいクライアントの秘密</i>お問い合わせ';

$GLOBALS["lang"]['Click Submit to Execute'] = '送信をクリックして実行';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = '詳しくはこちら <i>プロパティ</i> 以下 <i>マネージング</i> 中央メニュー列のヘッダー。 コピーする <i>ユーザアクセス URL</i>お問い合わせ コピーしたら、テキストエディタに貼り付けます。 このフィールドのセクションをコピーする必要があります。<br/><br/>この例のフィールドはこのように見えます<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>お問い合わせ<br/><br/>必要なセクションは <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (テナントID) これはOpen-AudITでとして使用されます <i>テナント</i> フィールドに貼り付けます。';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'アプリの登録をクリックして新しいアプリケーションを作成してから、新規アプリケーション登録をクリックします。 名前 (私はOpen-AudITを使用して)、タイプとしてWebアプリ/ APIを選択し、任意のURL(URLが重要ではない)を提供し、作成をクリックします。';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'OKをクリックし、DCOMCNFGウィンドウを閉じます。<br/><br/>上記の変更は、リブートがエフェクトを取る必要があります。';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = '作成したアプリケーションをクリックします。 表示されるアプリケーション ID はクライアント ID です。<br/><br/>クライアントシークレットを作成するには、[設定] をクリックし、[キー] をクリックします。 キー名を入力して、適切な有効期限を選択し、[保存] をクリックします。<br/><br/>値がポップアップ表示されます - これはクライアントシークレットです。';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = '[削除] ボタンをクリックして、Open-AudIT から例のデバイスを削除します。<br/>データベースから以下のデバイスを削除します。 ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = '[編集]ボタンをクリックします <i>ベーシックSAML コンテンツ</i>お問い合わせ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '下の [インポート] ボタンをクリックして、デバイスデータを含む Open-AudIT を出力します。';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = '編集したいフィールドの右側にあるアイコンをクリックします。 フィールドを変更し、緑色のアイコンをクリックして送信します。';

$GLOBALS["lang"]['Client ID'] = 'クライアントID';

$GLOBALS["lang"]['Client ID and Secret'] = 'クライアントIDと秘密';

$GLOBALS["lang"]['client_ident'] = 'クライアントID';

$GLOBALS["lang"]['Client Ident'] = 'クライアントID';

$GLOBALS["lang"]['client_secret'] = 'クライアントシークレット';

$GLOBALS["lang"]['Client Secret'] = 'クライアントシークレット';

$GLOBALS["lang"]['client_site_name'] = 'クライアントサイト名';

$GLOBALS["lang"]['Client Site Name'] = 'クライアントサイト名';

$GLOBALS["lang"]['Close'] = '閉じる';

$GLOBALS["lang"]['Closed'] = '休館日';

$GLOBALS["lang"]['Cloud'] = 'クラウド';

$GLOBALS["lang"]['Cloud Details'] = 'クラウド詳細';

$GLOBALS["lang"]['Cloud Discovery'] = 'クラウドディスカバリー';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'クラウドディスカバリーと監査';

$GLOBALS["lang"]['cloud_id'] = 'クラウドID';

$GLOBALS["lang"]['Cloud ID'] = 'クラウドID';

$GLOBALS["lang"]['cloud_log'] = 'クラウドログ';

$GLOBALS["lang"]['Cloud Log'] = 'クラウドログ';

$GLOBALS["lang"]['cloud_name'] = 'クラウド名';

$GLOBALS["lang"]['Cloud Name'] = 'クラウド名';

$GLOBALS["lang"]['Cloud Network'] = 'クラウドネットワーク';

$GLOBALS["lang"]['clouds'] = 'クラウド';

$GLOBALS["lang"]['Clouds'] = 'クラウド';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Cloudsは、Open-AudIT Enterpriseライセンスの顧客に利用可能な機能です。';

$GLOBALS["lang"]['cluster'] = 'クラスター';

$GLOBALS["lang"]['Cluster'] = 'クラスター';

$GLOBALS["lang"]['cluster_id'] = 'クラスタID';

$GLOBALS["lang"]['Cluster ID'] = 'クラスタID';

$GLOBALS["lang"]['cluster_name'] = 'クラスタ名';

$GLOBALS["lang"]['Cluster Name'] = 'クラスタ名';

$GLOBALS["lang"]['cluster_type'] = 'クラスタの種類';

$GLOBALS["lang"]['Cluster Type'] = 'クラスタの種類';

$GLOBALS["lang"]['clusters'] = 'クラスタ';

$GLOBALS["lang"]['Clusters'] = 'クラスタ';

$GLOBALS["lang"]['Clusters and Reporting'] = 'クラスタとレポート';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'ココス諸島(ケイリング)';

$GLOBALS["lang"]['Collection'] = 'コレクション';

$GLOBALS["lang"]['Collections'] = 'コレクション';

$GLOBALS["lang"]['Collector'] = 'コレクター';

$GLOBALS["lang"]['Collector (UUID)'] = 'コレクター(UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'コレクター/サーバーは企業だけの特徴です。 企業のお客様は、無料で1つのコレクターライセンスを受け取ります。 必要に応じてコレクターライセンスを購入できます。';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'コレクター/サーバーはリモートか、またはあることができるように設計されます <i>コレクター</i> リモートマシン上で動作するOpen-AudITインスタンス。 そのコレクターインスタンスは、別のセキュリティゾーン、サブネット、クラウドホスティングインスタンス、または顧客サイトにある可能性があります。 リモートコレクターは、ネットワークとファイアウォールの複雑さを回避し、ローカルでデバイスを発見し、監査しています。 登録されたコレクターが完全に制御されると <i>サーバー</i>お問い合わせ これは、そのコレクターからサーバーへのHTTPまたはHTTPS接続のみを必要とすることを意味します。';

$GLOBALS["lang"]['Collector Dashboard'] = 'コレクターダッシュボード';

$GLOBALS["lang"]['Collector Name'] = 'コレクター名';

$GLOBALS["lang"]['collector_uuid'] = 'コレクターUuid';

$GLOBALS["lang"]['Collector Uuid'] = 'コレクターUuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'コレクタ機能を有効にしたときにコレクタータスクが自動的に設定されます。 コレクタータスクは、ユーザーによって直接作成されるべきではありません。 コレクタータスクは、作成後に編集された頻度を持つことができます。 Open-AudIT Server にコレクターが報告している場合、追加のドロップダウンが提供されます。 タスクを実行するコレクターを指定するためにこれを選択できます。 コレクターズのディスカバリータスクのみがサポートされます。';

$GLOBALS["lang"]['Collectors'] = 'コレクター';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'コレクターは、コレクターとスタンドアローンの2つのモードで動作させることができます。 コレクターモードでは、Open-AudITのインスタンスがメインサーバで管理されます。 スタンドアローンモードの場合、インスタンスはローカルで管理され、見つかったデバイスをメインサーバーに転送します。';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'リモートディスカバリーのためのコレクター';

$GLOBALS["lang"]['Colombia'] = 'コロンビア';

$GLOBALS["lang"]['color'] = 'カラー';

$GLOBALS["lang"]['Color'] = 'カラー';

$GLOBALS["lang"]['Column'] = 'コラム';

$GLOBALS["lang"]['Columns'] = 'コラム';

$GLOBALS["lang"]['command'] = 'コマンド';

$GLOBALS["lang"]['Command'] = 'コマンド';

$GLOBALS["lang"]['command_options'] = 'コマンドオプション';

$GLOBALS["lang"]['Command Options'] = 'コマンドオプション';

$GLOBALS["lang"]['command_output'] = 'コマンド出力';

$GLOBALS["lang"]['Command Output'] = 'コマンド出力';

$GLOBALS["lang"]['command_status'] = 'コマンドのステータス';

$GLOBALS["lang"]['Command Status'] = 'コマンドのステータス';

$GLOBALS["lang"]['command_time_to_execute'] = 'コマンドタイムを実行する';

$GLOBALS["lang"]['Command Time To Execute'] = 'コマンドタイムを実行する';

$GLOBALS["lang"]['comment'] = 'コメント';

$GLOBALS["lang"]['Comment'] = 'コメント';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = '以下の行(49行程度)をコメントアウトします。 行の先頭にハッシュ # を配置します。';

$GLOBALS["lang"]['comments'] = 'コメント';

$GLOBALS["lang"]['Comments'] = 'コメント';

$GLOBALS["lang"]['commercial'] = '商業施設';

$GLOBALS["lang"]['Commercial'] = '商業施設';

$GLOBALS["lang"]['Commercial Support'] = '商用サポート';

$GLOBALS["lang"]['common_name'] = '共通の名前';

$GLOBALS["lang"]['Common Name'] = '共通の名前';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'clientId とよく呼ばれます。';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = '一般に、clientSecret と呼ばれます。';

$GLOBALS["lang"]['Community'] = 'コミュニティ';

$GLOBALS["lang"]['Community Questions'] = 'コミュニティの質問';

$GLOBALS["lang"]['Community String'] = 'コミュニティストリング';

$GLOBALS["lang"]['Comoros the'] = 'コモロ';

$GLOBALS["lang"]['Compact'] = 'コンパクト';

$GLOBALS["lang"]['Company'] = '会社案内';

$GLOBALS["lang"]['Complete these steps.'] = 'これらの手順を完了します。';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = '攻撃の複雑さ(低または高)。';

$GLOBALS["lang"]['Component Table'] = 'コンポーネントテーブル';

$GLOBALS["lang"]['Components (All Devices)'] = 'コンポーネント(全デバイス)';

$GLOBALS["lang"]['Compute'] = 'コンピューティング';

$GLOBALS["lang"]['Condition'] = 'インフォメーション';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'リスク評価を実施';

$GLOBALS["lang"]['Conduct awareness and training programs'] = '啓発・研修プログラムの実施';

$GLOBALS["lang"]['Conduct management review meetings'] = '経営検討会議の実施';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = '定期的な監視監査を実施(通常毎年)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = '2つの段階に認定された体によって導かれる';

$GLOBALS["lang"]['Config'] = '設定';

$GLOBALS["lang"]['Config Default, currently '] = 'デフォルトの設定、現在 ';

$GLOBALS["lang"]['config_file'] = 'Config ファイル';

$GLOBALS["lang"]['Config File'] = 'Config ファイル';

$GLOBALS["lang"]['config_manager_error_code'] = '管理者エラーコードの設定';

$GLOBALS["lang"]['Config Manager Error Code'] = '管理者エラーコードの設定';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = '設定可能なロールベースのアクセス制御(RBAC)';

$GLOBALS["lang"]['configuration'] = 'コンテンツ';

$GLOBALS["lang"]['Configuration'] = 'コンテンツ';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = '構成変更の検出および報告';

$GLOBALS["lang"]['Configure'] = '設定';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'エージェントサーバー側のスケジュールで監査を実行するように設定する';

$GLOBALS["lang"]['Congo'] = 'コンゴ';

$GLOBALS["lang"]['Congo the'] = 'コンゴ';

$GLOBALS["lang"]['Connected To'] = '接続する';

$GLOBALS["lang"]['connection'] = 'コネクション';

$GLOBALS["lang"]['Connection'] = 'コネクション';

$GLOBALS["lang"]['Connection Options'] = '接続オプション';

$GLOBALS["lang"]['connection_status'] = '接続状況';

$GLOBALS["lang"]['Connection Status'] = '接続状況';

$GLOBALS["lang"]['connections'] = 'コネクション';

$GLOBALS["lang"]['Connections'] = 'コネクション';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'フィルタリングを検討 ポートオープン';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = '開封を検討|フィルタリング ポートオープン';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'コンサルティング、実装、その他のサービス';

$GLOBALS["lang"]['contact'] = 'お問い合わせ';

$GLOBALS["lang"]['Contact'] = 'お問い合わせ';

$GLOBALS["lang"]['contact_name'] = '連絡窓口';

$GLOBALS["lang"]['Contact Name'] = '連絡窓口';

$GLOBALS["lang"]['contained_in'] = 'で達成される';

$GLOBALS["lang"]['Contained In'] = 'で達成される';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'JSON オブジェクトの詳細は、関連するウィジェットとその位置が含まれています。';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'ssh、snmp、wmiの検出オプションを使用するかどうかを決定するフィールドが含まれています。 JSONオブジェクト。';

$GLOBALS["lang"]['Context & Leadership'] = 'コンテキストとリーダーシップ';

$GLOBALS["lang"]['Context Engine ID'] = 'コンテキストエンジンID';

$GLOBALS["lang"]['Context Name'] = 'コンテキスト名';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'ISMSの継続的な改善';

$GLOBALS["lang"]['contractual_obligations'] = '契約上の義務';

$GLOBALS["lang"]['Contractual Obligations'] = '契約上の義務';

$GLOBALS["lang"]['Cook Islands'] = 'クック諸島';

$GLOBALS["lang"]['Copy and paste an audit result'] = '監査結果をコピーして貼り付ける';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '以下をフォーラム、Open-AudITの他のインスタンス、またはこの項目を提供する必要がある場合にコピーして貼り付けます。';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'コピーする <i>アプリケーションID</i> フィールドに貼り付け、Open-AudITに貼り付ける <i>クライアントID</i> 新しいAuthメソッドのフィールド。';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'コピーする <i>クライアントID</i> Open-AudITに貼り付ける <i>クライアントID</i> フィールド。<br/>秘密がない場合、クリック <i>新しい秘密を生成</i>値をコピーし、それをOpen-AudITに貼り付ける <i>クライアントシークレット</i> フィールド。';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = '値をコピーし、Open-AudITフォームに貼り付けます <i>クライアントシークレット</i> フィールド。';

$GLOBALS["lang"]['core_count'] = 'コアカウント';

$GLOBALS["lang"]['Core Count'] = 'コアカウント';

$GLOBALS["lang"]['Cores'] = 'コア';

$GLOBALS["lang"]['cost_center'] = 'コストセンター';

$GLOBALS["lang"]['Cost Center'] = 'コストセンター';

$GLOBALS["lang"]['cost_code'] = 'コストコード';

$GLOBALS["lang"]['Cost Code'] = 'コストコード';

$GLOBALS["lang"]['Costa Rica'] = 'コスタリカ';

$GLOBALS["lang"]['Cote d Ivoire'] = 'コートジボワール';

$GLOBALS["lang"]['count'] = 'カウント';

$GLOBALS["lang"]['Count'] = 'カウント';

$GLOBALS["lang"]['country'] = 'カントリー';

$GLOBALS["lang"]['Country'] = 'カントリー';

$GLOBALS["lang"]['country_code'] = '国コード';

$GLOBALS["lang"]['Country Code'] = '国コード';

$GLOBALS["lang"]['cpu_count'] = 'Cpu カウント';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu カウント';

$GLOBALS["lang"]['Create'] = 'ダウンロード';

$GLOBALS["lang"]['Create Example Devices'] = 'サンプルデバイスの作成';

$GLOBALS["lang"]['create_external_count'] = '外部カウントを作成する';

$GLOBALS["lang"]['Create External Count'] = '外部カウントを作成する';

$GLOBALS["lang"]['create_external_from_internal'] = '内部から外部を作成する';

$GLOBALS["lang"]['Create External From Internal'] = '内部から外部を作成する';

$GLOBALS["lang"]['Create File'] = 'ファイルを作成する';

$GLOBALS["lang"]['Create Geocode'] = 'ジオコードを作成する';

$GLOBALS["lang"]['create_internal_count'] = '内部カウントを作成する';

$GLOBALS["lang"]['Create Internal Count'] = '内部カウントを作成する';

$GLOBALS["lang"]['create_internal_from_external'] = '外部から内部を作成する';

$GLOBALS["lang"]['Create Internal From External'] = '外部から内部を作成する';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-AudITからNMISデバイスを作成する';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT の作成 デバイスから ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT の作成 NMISのデバイス';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'デバイスのベースラインを作成する';

$GLOBALS["lang"]['Create a Discovery'] = 'ディスカバリーの作成';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = '申請書の作成(SoA)';

$GLOBALS["lang"]['created_by'] = 'によって作成された';

$GLOBALS["lang"]['Created By'] = 'によって作成された';

$GLOBALS["lang"]['created_date'] = '作成された日付';

$GLOBALS["lang"]['Created Date'] = '作成された日付';

$GLOBALS["lang"]['Creating'] = '作成する';

$GLOBALS["lang"]['Creating Credentials'] = 'クレデンシャルの作成';

$GLOBALS["lang"]['Creating Device'] = 'デバイスの作成';

$GLOBALS["lang"]['Creating Widgets'] = 'ウィジェットの作成';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'ディスカバリーの作成 スキャンオプションエントリ';

$GLOBALS["lang"]['Creating a Query'] = 'クエリの作成';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'グループのためのSQLステートメントを作成する';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Queries の SQL ステートメントを作成する';

$GLOBALS["lang"]['Creating an Integration'] = 'インテグレーションの作成';

$GLOBALS["lang"]['creator'] = 'クリエイター';

$GLOBALS["lang"]['Creator'] = 'クリエイター';

$GLOBALS["lang"]['credential'] = '資格情報';

$GLOBALS["lang"]['Credential'] = '資格情報';

$GLOBALS["lang"]['Credentials'] = '資格情報';

$GLOBALS["lang"]['Credentials Client ID'] = 'クライアントID';

$GLOBALS["lang"]['Credentials Subscription ID'] = '認証サブスクリプション インフォメーション';

$GLOBALS["lang"]['Credentials Tenant ID'] = '犯罪テナントID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'クレデンシャルは保存されます <i>資格情報</i> データベーステーブル。 実際のクレデンシャル情報は、保管中に暗号化されます。 ディスカバリーが実行されると、デバイスにはデータベースから取得した特定の認証情報があり、復号化およびテストされます。 これらが資格情報のリストが取得されない場合, 復号化し、以前に働いたことを知られている資格情報から始まるデバイスに対してテスト. デバイス固有の認証情報は、個々のデバイスレベルで保存されます。 <i>パスワード</i> テーブル(ノートなし) <i>ツイート</i> テーブル名で)。 SSHのユーザー名/パスワードの前にSSHのキーがテストされます。 SSH をテストするときは、認証情報は sudo または root で動作するようにマークされます。';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'クレデンシャルは、snmp v.1 / v.2、snmp v.3、ssh、sshキー、ウィンドウがすべて実装されているいくつかの異なるタイプの1つを持つことができます。 CAVEAT - ssh キーはまだWindows Open-AudITサーバーでは実装されていません。';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'クラウドディスカバリーで使用されるAmazon AWSの認証';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoftの認証 クラウドディスカバリーで使用されるAzure';

$GLOBALS["lang"]['Critical'] = 'クリティカル';

$GLOBALS["lang"]['criticality'] = '重要性';

$GLOBALS["lang"]['Criticality'] = '重要性';

$GLOBALS["lang"]['Croatia'] = 'クロアチア';

$GLOBALS["lang"]['Cuba'] = 'キューバ';

$GLOBALS["lang"]['current'] = '現在の位置:';

$GLOBALS["lang"]['Current'] = '現在の位置:';

$GLOBALS["lang"]['Current Discovery Processes'] = '現在のディスカバリープロセス';

$GLOBALS["lang"]['Current date & time is '] = '現在の日付と時刻 ';

$GLOBALS["lang"]['Currently Installed'] = '現在インストール済み';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = '現在サポートしているタイプは <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> または <code>windows</code>お問い合わせ';

$GLOBALS["lang"]['Custom Fields'] = 'カスタムフィールド';

$GLOBALS["lang"]['Custom TCP Ports'] = 'カスタムTCPポート';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'カスタムTCPポート。 トップTCPポートに加えてスキャンした特定のポート。 堆肥化、スペースなし。';

$GLOBALS["lang"]['Custom UDP Ports'] = 'カスタムUDP ポート';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'カスタムUDPポート。 トップUDPポートに加えてスキャンした特定のポート。 堆肥化、スペースなし。';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'ディスカバリーごとのカスタマイズ可能なスキャンオプション';

$GLOBALS["lang"]['Cve'] = 'ログイン';

$GLOBALS["lang"]['Cyprus'] = 'キプロス';

$GLOBALS["lang"]['Czech'] = 'チェコ語';

$GLOBALS["lang"]['Czech Republic'] = 'チェコ共和国';

$GLOBALS["lang"]['DHCP'] = 'DHCPの特長';

$GLOBALS["lang"]['DN Account (optional)'] = 'DNアカウント(オプション)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN パスワード (任意)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS の FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNSホスト名';

$GLOBALS["lang"]['Danish'] = 'デンマーク語';

$GLOBALS["lang"]['dashboard_id'] = 'ダッシュボードID';

$GLOBALS["lang"]['Dashboard ID'] = 'ダッシュボードID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'ダッシュボードウィジェット';

$GLOBALS["lang"]['dashboards'] = 'ダッシュボード';

$GLOBALS["lang"]['Dashboards'] = 'ダッシュボード';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboard と Widget により、エンタープライズ ライセンス のお客様は、これらのコレクションの双方を作成、読み、更新、削除することができます。これにより、ホームページの閲覧に必要な内容が正確に確認できます。 それだけではありませんが、ユーザは自分のホームページとして指定したダッシュボードを設定することができます。 同じホームページ(ダッシュボード)や、そのダッシュボードに同じウィジェットを使用する必要はありません。 専門の認可された顧客は2つの事前定義されたダッシュボード間で私達の自身のホームページとして置くことができます選ぶことができます。';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'ダッシュボードの提供 <i>お問い合わせ</i> お使いのネットワーク上の変更や、デバイスの種類、メーカー、およびオペレーティングシステムなどの迅速なリンクを提供する重要な可視性。';

$GLOBALS["lang"]['Dashboards use'] = 'ダッシュボードの使用';

$GLOBALS["lang"]['Data'] = 'データデータ';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'データエクスポート - CSV、XML、JSON';

$GLOBALS["lang"]['Data Retention'] = 'データ保持';

$GLOBALS["lang"]['Database'] = 'データベース';

$GLOBALS["lang"]['db_action'] = 'データベースのアクション';

$GLOBALS["lang"]['Database Action'] = 'データベースのアクション';

$GLOBALS["lang"]['db_column'] = 'データベースのコラム';

$GLOBALS["lang"]['Database Column'] = 'データベースのコラム';

$GLOBALS["lang"]['Database Definition'] = 'データベースの定義';

$GLOBALS["lang"]['db_row'] = 'データベースの列';

$GLOBALS["lang"]['Database Row'] = 'データベースの列';

$GLOBALS["lang"]['Database Schema'] = 'データベーススキーマ';

$GLOBALS["lang"]['Database Server Discovery'] = 'データベース サーバーディスカバリー';

$GLOBALS["lang"]['db_table'] = 'データベーステーブル';

$GLOBALS["lang"]['Database Table'] = 'データベーステーブル';

$GLOBALS["lang"]['Database Tables'] = 'データベーステーブル';

$GLOBALS["lang"]['dataset_title'] = 'データセット タイトル';

$GLOBALS["lang"]['Dataset Title'] = 'データセット タイトル';

$GLOBALS["lang"]['date'] = '生年月日';

$GLOBALS["lang"]['Date'] = '生年月日';

$GLOBALS["lang"]['Date D-M-Y'] = '日付 D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = '日付 M-D-Y';

$GLOBALS["lang"]['Date Now'] = '今すぐ登録';

$GLOBALS["lang"]['date_of_manufacture'] = '製造の日付';

$GLOBALS["lang"]['Date Of Manufacture'] = '製造の日付';

$GLOBALS["lang"]['date_paid'] = '日付 有料';

$GLOBALS["lang"]['Date Paid'] = '日付 有料';

$GLOBALS["lang"]['date_received'] = '受取日';

$GLOBALS["lang"]['Date Received'] = '受取日';

$GLOBALS["lang"]['Date Y-M-D'] = '日付 Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'CVEが更新された日付と時刻';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVEが公開された日付と時刻';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVEが公開された日付';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime 今';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = '日付時間 Y-M-Dの特長 H:M:S';

$GLOBALS["lang"]['day_of_month'] = '月の日';

$GLOBALS["lang"]['Day Of Month'] = '月の日';

$GLOBALS["lang"]['day_of_week'] = '週の日';

$GLOBALS["lang"]['Day Of Week'] = '週の日';

$GLOBALS["lang"]['Day of Month'] = '月の日';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbusの識別子';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbusの識別子';

$GLOBALS["lang"]['Debug'] = 'デブグ';

$GLOBALS["lang"]['Debugging'] = 'デバッギング';

$GLOBALS["lang"]['Debugging a Script'] = 'スクリプトのデバッグ';

$GLOBALS["lang"]['December'] = '12月12日';

$GLOBALS["lang"]['Decommission'] = '免責事項';

$GLOBALS["lang"]['Default'] = 'デフォルト';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'デフォルト認証 レベル - 接続する設定';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'デフォルト値 レベル - 識別するセット';

$GLOBALS["lang"]['Default Items'] = 'デフォルト項目';

$GLOBALS["lang"]['Default Orgs Groups'] = 'デフォルト Orgs グループ';

$GLOBALS["lang"]['Default Roles Groups'] = 'デフォルトロールグループ';

$GLOBALS["lang"]['Default Value'] = 'デフォルト値';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'デフォルト 389. アクティブ・ディレクトリ LDAPS に使用する普通 636。';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'デフォルト <code>3</code> LDAPとActive Directoryの';

$GLOBALS["lang"]['Defaults'] = 'デフォルト';

$GLOBALS["lang"]['Deferred'] = 'デファード';

$GLOBALS["lang"]['Define project scope and objectives'] = 'プロジェクトスコープと目的を定義する';

$GLOBALS["lang"]['Define the ISMS scope'] = 'ISMSスコープの定義';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = '組織のコンテキストを定義する(内部/外部の問題)';

$GLOBALS["lang"]['delay_minutes'] = '遅延分';

$GLOBALS["lang"]['Delay Minutes'] = '遅延分';

$GLOBALS["lang"]['Delete'] = '削除';

$GLOBALS["lang"]['Delete Example Devices'] = 'サンプルデバイスの削除';

$GLOBALS["lang"]['delete_external_from_internal'] = '内部から外部を削除';

$GLOBALS["lang"]['Delete External From Internal'] = '内部から外部を削除';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMISを削除 Open-AudITでない場合のデバイス';

$GLOBALS["lang"]['Delete a {collection} entry.'] = '{collection}エントリを削除します。';

$GLOBALS["lang"]['Delete from Application'] = 'アプリケーションから削除';

$GLOBALS["lang"]['Delete from Cluster'] = 'クラスタから削除する';

$GLOBALS["lang"]['Denmark'] = 'デンマーク';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'ユーザーによる監査または手動で設定します。';

$GLOBALS["lang"]['Derived by audit.'] = '監査によって派生。';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'から派生 <code>rack_devices.device_id</code>お問い合わせ';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'から派生 <code>rack_devices.rack_id</code>お問い合わせ';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'コレクターの発見から派生。';

$GLOBALS["lang"]['Derived from OS Name.'] = 'OSの名前から派生。';

$GLOBALS["lang"]['Derived from cloud discovery.'] = '雲の発見から派生。';

$GLOBALS["lang"]['Derived from device audits.'] = 'デバイスの監査から派生。';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'デバイスタイプとOSから派生。';

$GLOBALS["lang"]['Derived from discovery.'] = '発見から派生。';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'その順序でホスト名、sysName、dns Hostname、IP から派生。';

$GLOBALS["lang"]['Derived from the integer severity.'] = '整数の重度から派生。';

$GLOBALS["lang"]['description'] = 'コンテンツ';

$GLOBALS["lang"]['Description'] = 'コンテンツ';

$GLOBALS["lang"]['destination'] = '目的地';

$GLOBALS["lang"]['Destination'] = '目的地';

$GLOBALS["lang"]['detail'] = '詳細を見る';

$GLOBALS["lang"]['Detail'] = '詳細を見る';

$GLOBALS["lang"]['Details'] = 'ニュース';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '本サイトでは、通常連絡が取れる者の詳細をご覧いただけます。';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'データベースに対するベースラインチェックを実行し、スケジュールされたレポートを作成する頻度を決定します';

$GLOBALS["lang"]['Determine risk treatment options'] = 'リスク処理オプションを決定する';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'リスク・トリートメント・プランの開発';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'ポリシー、手順、および制御を開発する';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = '要求されるISMSの文書(優先順位、手順等)を開発して下さい';

$GLOBALS["lang"]['device'] = 'デバイス';

$GLOBALS["lang"]['Device'] = 'デバイス';

$GLOBALS["lang"]['Device Audits'] = 'デバイス監査';

$GLOBALS["lang"]['Device Component Names'] = 'デバイスコンポーネント名';

$GLOBALS["lang"]['Device ID'] = 'デバイスID';

$GLOBALS["lang"]['device_id'] = 'デバイスID';

$GLOBALS["lang"]['device_id_a'] = 'デバイス ID A';

$GLOBALS["lang"]['Device ID A'] = 'デバイス ID A';

$GLOBALS["lang"]['device_id_b'] = 'デバイス ID B';

$GLOBALS["lang"]['Device ID B'] = 'デバイス ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'デバイスマッチングルール';

$GLOBALS["lang"]['Device Name'] = 'デバイス名';

$GLOBALS["lang"]['Device Result'] = 'デバイス結果';

$GLOBALS["lang"]['Device Results'] = 'デバイス結果';

$GLOBALS["lang"]['Device Seed'] = 'デバイス種子';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'デバイス種子 ディスカバリーは、ネットワークがサブネットの範囲で構成されていることを知っているなら、良い選択肢です。しかし、あなたは彼らが何であるかを保証しています。 ローカルルーターで発見をシードし、あなたの目の前にあなたのネットワークの展開を見ます。';

$GLOBALS["lang"]['Device Seed IP'] = 'デバイスシードIP';

$GLOBALS["lang"]['Device Status'] = 'デバイスの状態';

$GLOBALS["lang"]['Device Types'] = 'デバイスの種類';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'デバイスおよびソフトウェアおよびハードウェアの監査';

$GLOBALS["lang"]['Device is in the Subnet'] = 'デバイスはサブネットにあります';

$GLOBALS["lang"]['Devices'] = 'デバイス';

$GLOBALS["lang"]['devices_assigned_to_location'] = '装置は場所に割り当てました';

$GLOBALS["lang"]['Devices Assigned To Location'] = '装置は場所に割り当てました';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgに割り当てられた装置';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgに割り当てられた装置';

$GLOBALS["lang"]['Devices Audited'] = '監査対象デバイス';

$GLOBALS["lang"]['Devices Collection'] = 'デバイスコレクション';

$GLOBALS["lang"]['Devices Created in '] = 'デバイス作成 ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudITで作成されたデバイス';

$GLOBALS["lang"]['devices_default_display_columns'] = 'デバイスのデフォルト表示列';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'デバイスのデフォルト表示列';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '装置は最終7日見つけました';

$GLOBALS["lang"]['Devices Found Today'] = '今日のデバイス';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'デバイスが昨日発見';

$GLOBALS["lang"]['Devices Missing Information'] = 'デバイス不足情報';

$GLOBALS["lang"]['Devices Not Audited'] = '監査されていないデバイス';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '装置 30日見えない';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '装置 7日見えない';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '装置 90 日見えない';

$GLOBALS["lang"]['Devices Older Than X'] = 'Xよりも古いデバイス';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API経由で取得するデバイス';

$GLOBALS["lang"]['Devices Selected from '] = 'デバイスから選択 ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITから選択したデバイス';

$GLOBALS["lang"]['Devices Updated in '] = 'デバイスの更新 ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT で更新されたデバイス';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'デバイスはベンチマークされています。';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'デバイスはベンチマークされていない。';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'デバイスはベンチマークできます。';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open-AudITのデバイス';

$GLOBALS["lang"]['Devices in Running State'] = '実行状態のデバイス';

$GLOBALS["lang"]['Devices in Stopped State'] = '停止状態のデバイス';

$GLOBALS["lang"]['Devices in this'] = 'このデバイス';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'ステータスが設定されている場合、デバイスは一致しません。 <i>削除</i>お問い合わせ 他のステータスでは、マッチが発生した状態になります。';

$GLOBALS["lang"]['Devices with Expired Warranties'] = '期限切れの保証を持つデバイス';

$GLOBALS["lang"]['Devired from type or OS.'] = 'タイプまたはOSから守られる。';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp 対応';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp 対応';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp リース Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp リース Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp リース取得';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp リース取得';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp サーバー';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp サーバー';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'コマンドは正常に完了し、予想されるデータを返す。';

$GLOBALS["lang"]['direction'] = 'アクセス';

$GLOBALS["lang"]['Direction'] = 'アクセス';

$GLOBALS["lang"]['directory'] = 'ディレクトリ';

$GLOBALS["lang"]['Directory'] = 'ディレクトリ';

$GLOBALS["lang"]['disabled'] = 'バリアフリー';

$GLOBALS["lang"]['Disabled'] = 'バリアフリー';

$GLOBALS["lang"]['discard'] = 'マスタード';

$GLOBALS["lang"]['Discard'] = 'マスタード';

$GLOBALS["lang"]['Discover'] = '詳しくはこちら';

$GLOBALS["lang"]['Discoveries'] = 'ニュース';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = '発見は、Open-AudITが何をしているかの非常に中心にあります。 お問い合わせ <i>あなたのネットワーク上で何か?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'ディスカバリーズは、各ネットワークの詳細を常に入力することなく、ワンクリックでネットワーク上で発見を実行することを可能にするエントリです。';

$GLOBALS["lang"]['Discovery'] = 'ディスカバリー';

$GLOBALS["lang"]['Discovery Change Logs'] = 'ディスカバリー変更ログ';

$GLOBALS["lang"]['Discovery Data Retention'] = 'ディスカバリーデータ保持';

$GLOBALS["lang"]['discovery_id'] = 'ディスカバリーID';

$GLOBALS["lang"]['Discovery ID'] = 'ディスカバリーID';

$GLOBALS["lang"]['Discovery Issues'] = 'ディスカバリーの問題';

$GLOBALS["lang"]['discovery_log'] = 'ディスカバリーログ';

$GLOBALS["lang"]['Discovery Log'] = 'ディスカバリーログ';

$GLOBALS["lang"]['Discovery Match Options'] = 'ディスカバリーマッチオプション';

$GLOBALS["lang"]['Discovery Name'] = 'ディスカバリー名';

$GLOBALS["lang"]['Discovery Options'] = 'ディスカバリーオプション';

$GLOBALS["lang"]['Discovery Queue Count'] = 'ディスカバリーキューカウント';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'ディスカバリーキューリミット';

$GLOBALS["lang"]['discovery_run'] = 'ディスカバリー・ラン';

$GLOBALS["lang"]['Discovery Run'] = 'ディスカバリー・ラン';

$GLOBALS["lang"]['discovery_scan_options'] = 'ディスカバリースキャンオプション';

$GLOBALS["lang"]['Discovery Scan Options'] = 'ディスカバリースキャンオプション';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'ディスカバリースキャン オプションは別のアイテムコレクションです。 企業ユーザーは、必要に応じてエントリを作成、読み込み、更新、削除することができます。 プロフェッショナルなユーザーは、すべてのエントリを読むことができますが、新しいエントリを作成したり、既存のエントリを更新したり、エントリを削除したりすることはできません。 コミュニティユーザーは、このコレクションにアクセスできるGUIはありません。';

$GLOBALS["lang"]['Discovery Scan Types'] = 'ディスカバリースキャンタイプ';

$GLOBALS["lang"]['Discovery Support'] = 'ディスカバリーサポート';

$GLOBALS["lang"]['Discovery has stopped working'] = 'ディスカバリーは作業を中止しました';

$GLOBALS["lang"]['disk'] = 'ディスク';

$GLOBALS["lang"]['Disk'] = 'ディスク';

$GLOBALS["lang"]['display_version'] = 'ディスプレイバージョン';

$GLOBALS["lang"]['Display Version'] = 'ディスプレイバージョン';

$GLOBALS["lang"]['Display in Menu'] = 'メニュー表示';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'POST /{collection} への投稿のための標準的なWebフォームを表示します。';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST /{collection}/import への投稿のための標準的なWebフォームを表示します。';

$GLOBALS["lang"]['district'] = 'ディストリクト';

$GLOBALS["lang"]['District'] = 'ディストリクト';

$GLOBALS["lang"]['Djibouti'] = 'ジブチ';

$GLOBALS["lang"]['dns'] = 'ログイン';

$GLOBALS["lang"]['Dns'] = 'ログイン';

$GLOBALS["lang"]['dns_domain'] = 'Dns ドメイン';

$GLOBALS["lang"]['Dns Domain'] = 'Dns ドメイン';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns ドメイン Reg 有効';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns ドメイン Reg 有効';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn(ドン・フクドン)';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn(ドン・フクドン)';

$GLOBALS["lang"]['dns_host_name'] = 'Dnsのホスト名';

$GLOBALS["lang"]['Dns Host Name'] = 'Dnsのホスト名';

$GLOBALS["lang"]['dns_hostname'] = 'Dns のホスト名';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns のホスト名';

$GLOBALS["lang"]['dns_server'] = 'Dns サーバー';

$GLOBALS["lang"]['Dns Server'] = 'Dns サーバー';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'すべてのドキュメントのOpen-AudIT wikiを忘れないでください。';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'wikiにドキュメントの山があることを忘れないでください';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'これらのTCPポートをスキャンしないでください。';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'これらのUDPポートをスキャンしないでください。';

$GLOBALS["lang"]['Do not show me again'] = '再び私に表示しないでください';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'この設定の完璧な例はありますか? おそらく、ラボ環境またはワークステーションのVMをクローンするために使用するワークステーションにあるデバイス。';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '安全な輸送(LDAPS)や定期的な暗号化されていないLDAPを使用する必要があります。';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '左に標準のサイドバーが表示されてほしい。';

$GLOBALS["lang"]['documentation'] = 'ドキュメント';

$GLOBALS["lang"]['Documentation'] = 'ドキュメント';

$GLOBALS["lang"]['Documentation about a particular collection.'] = '特定のコレクションに関するドキュメント。';

$GLOBALS["lang"]['Does Not Equal'] = '等しくない';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'ライセンスは、子オーグに適用します。';

$GLOBALS["lang"]['domain'] = 'ドメイン';

$GLOBALS["lang"]['Domain'] = 'ドメイン';

$GLOBALS["lang"]['domain_controller_address'] = 'ドメインコントローラーアドレス';

$GLOBALS["lang"]['Domain Controller Address'] = 'ドメインコントローラーアドレス';

$GLOBALS["lang"]['domain_controller_name'] = 'ドメインコントローラー お名前 (必須)';

$GLOBALS["lang"]['Domain Controller Name'] = 'ドメインコントローラー お名前 (必須)';

$GLOBALS["lang"]['domain_role'] = 'ドメインの役割';

$GLOBALS["lang"]['Domain Role'] = 'ドメインの役割';

$GLOBALS["lang"]['domain_short'] = 'ドメイン不足分';

$GLOBALS["lang"]['Domain Short'] = 'ドメイン不足分';

$GLOBALS["lang"]['Dominica'] = 'ドミニカ';

$GLOBALS["lang"]['Dominican Republic'] = 'ドミニカ共和国';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = '自分の手を握り、私が何をしているか知っています。 カスタムテーブルに参加するフィルタや能力はありません。';

$GLOBALS["lang"]['Download'] = 'ダウンロード';

$GLOBALS["lang"]['Download a File'] = 'ファイルのダウンロード';

$GLOBALS["lang"]['Download a file from URL'] = 'URLからファイルをダウンロードする';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'test_windows_client.vbs スクリプトを直接ダウンロード';

$GLOBALS["lang"]['Download your updated version from'] = '更新版をダウンロード';

$GLOBALS["lang"]['driver'] = 'ドライバー';

$GLOBALS["lang"]['Driver'] = 'ドライバー';

$GLOBALS["lang"]['duplex'] = 'デュプレックス';

$GLOBALS["lang"]['Duplex'] = 'デュプレックス';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = '重複装置/欠損装置';

$GLOBALS["lang"]['duration'] = '期間';

$GLOBALS["lang"]['Duration'] = '期間';

$GLOBALS["lang"]['Dutch'] = 'オランダ語';

$GLOBALS["lang"]['ESXi'] = 'ESXiについて';

$GLOBALS["lang"]['EULA'] = 'ユーラ';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = '各IPは、ディスカバリー・スキャン・オプションとディスカバリー・スキャン・オプションとディスカバリー - コミュニティとプロフェッショナルとウィキ上のエンタープライズをスキャンします。 一般的に、Nmapはポート22(ssh)、135(wmi)、62078(iPhone)、UDP 161(snmp)のテストを行います。 22, 135 または 161 がクレデンシャルリストが取得され、各クレデンシャルが順番でテストされます。 最初の作業資格情報は、デバイスから直接問い合わせるために使用されます。 注意 - デバイスが以前に発見され、認証情報を持っている場合、これらの認証情報は最初にテストされます。 それらの失敗が他の資格情報である場合だけ、試みられた。';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'デバイスが発見されるか、監査結果が処理されるたびに、すべてのルールはデータベースから取得され、特定のデバイスの属性に対して実行されます。 ルールは一度に1つのデバイスに対して実行されます - 言うための施設はありません <i>すべてのデバイスに対してルールを実行<i> または <i>これらのデバイスに対するルールを実行する<i>お問い合わせ 個々のルールは、デバイスの1つ以上の属性をテストし、ルールにマッチすると、結果が適用されます。 複数の属性をテストできます。 複数の属性を設定できます。 これが、もしそうなら、そのシステムがOpen-AudITの仕組みだと考えてください。</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'ワンクリックでネットワーク上で簡単に検出を実行し、各ネットワークの詳細を常に入力せずに実行できます。';

$GLOBALS["lang"]['Ecuador'] = 'エクアドル';

$GLOBALS["lang"]['Edit'] = '編集';

$GLOBALS["lang"]['edit_log'] = '編集ログ';

$GLOBALS["lang"]['Edit Log'] = '編集ログ';

$GLOBALS["lang"]['editable'] = '編集可能';

$GLOBALS["lang"]['Editable'] = '編集可能';

$GLOBALS["lang"]['edited_by'] = '編集者による';

$GLOBALS["lang"]['Edited By'] = '編集者による';

$GLOBALS["lang"]['edited_date'] = '編集日時';

$GLOBALS["lang"]['Edited Date'] = '編集日時';

$GLOBALS["lang"]['edition'] = 'エディション';

$GLOBALS["lang"]['Edition'] = 'エディション';

$GLOBALS["lang"]['Egypt'] = 'エジプト';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon、Google、Microsoftのいずれか。';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'どれも存在するか。

<strong>なし</strong> - 成功した攻撃は、脆弱なシステムの展開と実行条件に依存しません。 攻撃者は脆弱性に到達し、脆弱性のすべてのインスタンスまたはほとんどのインスタンスで悪用を実行できるように期待できます。

<strong>プレゼント</strong> - 成功した攻撃は、攻撃を可能にする脆弱なシステムの特定の展開と実行条件の存在に依存します。 以下が含まれます:

競争条件は、脆弱性をうまく活用するために勝たなければなりません。 攻撃の成功は、攻撃者の完全制御下にある実行条件で調整されます。 攻撃は成功する前に、単一のターゲットに対して複数回起動する必要があります。

ネットワークの注入。 攻撃者は、犠牲者によって要求されるターゲットとリソースの間の論理的なネットワークパスに自分自身を注入しなければなりません(例えば、オンパス攻撃者を必要とする脆弱性)。';

$GLOBALS["lang"]['El Salvador'] = 'エルサルバドール';

$GLOBALS["lang"]['email'] = '電子メール';

$GLOBALS["lang"]['Email'] = '電子メール';

$GLOBALS["lang"]['email_address'] = 'メールアドレス';

$GLOBALS["lang"]['Email Address'] = 'メールアドレス';

$GLOBALS["lang"]['Email Configuration'] = 'メール設定';

$GLOBALS["lang"]['Email to send test to'] = 'メールでテストを送信';

$GLOBALS["lang"]['Enable'] = 'アクセス';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'このコンピュータに分散COMを有効にする - オプションがチェックされます';

$GLOBALS["lang"]['enabled'] = '有効化';

$GLOBALS["lang"]['Enabled'] = '有効化';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Windowsで機能を有効にする';

$GLOBALS["lang"]['encryption'] = '暗号化';

$GLOBALS["lang"]['Encryption'] = '暗号化';

$GLOBALS["lang"]['encryption_method'] = '暗号化方法';

$GLOBALS["lang"]['Encryption Method'] = '暗号化方法';

$GLOBALS["lang"]['encryption_status'] = '暗号化ステータス';

$GLOBALS["lang"]['Encryption Status'] = '暗号化ステータス';

$GLOBALS["lang"]['end_date'] = '終了日';

$GLOBALS["lang"]['End Date'] = '終了日';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ライフ製品ID終了';

$GLOBALS["lang"]['end_of_life'] = '人生の終わり';

$GLOBALS["lang"]['End Of Life'] = '人生の終わり';

$GLOBALS["lang"]['end_of_production'] = '生産終了';

$GLOBALS["lang"]['End Of Production'] = '生産終了';

$GLOBALS["lang"]['end_of_service'] = 'サービス終了';

$GLOBALS["lang"]['End Of Service'] = 'サービス終了';

$GLOBALS["lang"]['end_of_service_life'] = 'サービス寿命の終了';

$GLOBALS["lang"]['End Of Service Life'] = 'サービス寿命の終了';

$GLOBALS["lang"]['Endpoint'] = 'エンドポイント';

$GLOBALS["lang"]['English'] = '日本語 English';

$GLOBALS["lang"]['Enhances regulatory compliance'] = '規制遵守を強化';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'エンリッチメントが完成しました。 CVE は全メタデータを持ち、安定していると見なされます。';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = '文書が管理され、アクセス可能であることを確認します';

$GLOBALS["lang"]['enterprise'] = 'エンタープライズ';

$GLOBALS["lang"]['Enterprise'] = 'エンタープライズ';

$GLOBALS["lang"]['Enterprise Private Network'] = 'エンタープライズプライベートネットワーク';

$GLOBALS["lang"]['Enterprise private network'] = 'エンタープライズプライベートネットワーク';

$GLOBALS["lang"]['Entitlement Type'] = '資格の種類';

$GLOBALS["lang"]['Entra'] = 'イントラ';

$GLOBALS["lang"]['environment'] = '環境方針';

$GLOBALS["lang"]['Environment'] = '環境方針';

$GLOBALS["lang"]['Equal To'] = 'お問い合わせ';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'またはより大きいに等しい';

$GLOBALS["lang"]['Equal To or Less Than'] = 'またはより少しに等しい';

$GLOBALS["lang"]['Equals'] = 'エコール';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Equatorial ギニア';

$GLOBALS["lang"]['Eritrea'] = 'エリトリア';

$GLOBALS["lang"]['Error'] = 'エラー';

$GLOBALS["lang"]['Error Code'] = 'エラーコード';

$GLOBALS["lang"]['Esperanto'] = 'エスペラント';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'プロジェクト計画とタイムラインの確立';

$GLOBALS["lang"]['Establish an information security policy'] = '情報セキュリティポリシーの策定';

$GLOBALS["lang"]['Established'] = '設立年月日';

$GLOBALS["lang"]['Estonia'] = 'エストニア語';

$GLOBALS["lang"]['Estonian'] = 'エストニア語';

$GLOBALS["lang"]['Ethernet MAC'] = 'イーサネットMAC';

$GLOBALS["lang"]['ethernet_mac'] = 'イーサネットMac';

$GLOBALS["lang"]['Ethernet Mac'] = 'イーサネットMac';

$GLOBALS["lang"]['Ethiopia'] = 'エチオピア';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = '内部でISMSを評価する';

$GLOBALS["lang"]['Every'] = 'お問い合わせ';

$GLOBALS["lang"]['Every Day'] = '日替わり';

$GLOBALS["lang"]['Example'] = '事例紹介';

$GLOBALS["lang"]['Example Devices'] = 'デバイス例';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'アクセスによる Org チャートの例';

$GLOBALS["lang"]['Example text from'] = 'テキストの例';

$GLOBALS["lang"]['Examples'] = '事例紹介';

$GLOBALS["lang"]['Exceptions'] = '例外';

$GLOBALS["lang"]['exclude'] = 'エクスクルード';

$GLOBALS["lang"]['Exclude'] = 'エクスクルード';

$GLOBALS["lang"]['exclude_ip'] = 'IPを除外する';

$GLOBALS["lang"]['Exclude IP'] = 'IPを除外する';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IPアドレスを除外する';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'IPアドレスを除外します。 (個人 IP - 192.168.1.20, 範囲 - 192.168.1.30-40 またはサブネット - 192.168.1.100/30) スキャンされているからリストされています。 堆肥化、スペースなし。';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCPポートを除外';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcpポートを除外';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcpポートを除外';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDPポートを除外';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udpポートを除外';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udpポートを除外';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'スキャンされているポートを除外します。 堆肥化、スペースなし。';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'これらの IP アドレスを Nmap から除外します。';

$GLOBALS["lang"]['Excluded'] = '除外される';

$GLOBALS["lang"]['exclusion_reasons'] = '除外理由';

$GLOBALS["lang"]['Exclusion Reasons'] = '除外理由';

$GLOBALS["lang"]['executable'] = '実行テーブル';

$GLOBALS["lang"]['Executable'] = '実行テーブル';

$GLOBALS["lang"]['executable_id'] = '実行可能ID';

$GLOBALS["lang"]['Executable ID'] = '実行可能ID';

$GLOBALS["lang"]['executables'] = '実行テーブル';

$GLOBALS["lang"]['Executables'] = '実行テーブル';

$GLOBALS["lang"]['Execute'] = '実行する';

$GLOBALS["lang"]['Executing'] = '実行する';

$GLOBALS["lang"]['exemption_reason'] = '免除理由';

$GLOBALS["lang"]['Exemption Reason'] = '免除理由';

$GLOBALS["lang"]['Existing Building'] = '既存の建物';

$GLOBALS["lang"]['Existing Floor'] = '既存の床';

$GLOBALS["lang"]['Existing Room'] = '既存の部屋';

$GLOBALS["lang"]['Existing Row'] = '既存の列';

$GLOBALS["lang"]['expire_date'] = '有効期限';

$GLOBALS["lang"]['Expire Date'] = '有効期限';

$GLOBALS["lang"]['expire_minutes'] = '終了 議事録';

$GLOBALS["lang"]['Expire Minutes'] = '終了 議事録';

$GLOBALS["lang"]['expires'] = 'プロモーション';

$GLOBALS["lang"]['Expires'] = 'プロモーション';

$GLOBALS["lang"]['expiry_date'] = '有効期限';

$GLOBALS["lang"]['Expiry Date'] = '有効期限';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit成熟度';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit成熟度';

$GLOBALS["lang"]['Export'] = 'エクスポート';

$GLOBALS["lang"]['Export by Device'] = 'デバイス別エクスポート';

$GLOBALS["lang"]['Export by Policy'] = 'ポリシーによるエクスポート';

$GLOBALS["lang"]['Export data to'] = 'データをエクスポートする';

$GLOBALS["lang"]['Exporting a Device'] = 'デバイスをエクスポートする';

$GLOBALS["lang"]['expose'] = '展示会情報';

$GLOBALS["lang"]['Expose'] = '展示会情報';

$GLOBALS["lang"]['External'] = '外部リンク';

$GLOBALS["lang"]['External Field Name'] = '外部フィールド名';

$GLOBALS["lang"]['External Field Type'] = '外部フィールドタイプ';

$GLOBALS["lang"]['External Field Types'] = '外部フィールドタイプ';

$GLOBALS["lang"]['external_ident'] = '外部インデント';

$GLOBALS["lang"]['External Ident'] = '外部インデント';

$GLOBALS["lang"]['external_link'] = '外部リンク';

$GLOBALS["lang"]['External Link'] = '外部リンク';

$GLOBALS["lang"]['extra_columns'] = '余分なコラム';

$GLOBALS["lang"]['Extra Columns'] = '余分なコラム';

$GLOBALS["lang"]['Extra and Time based Reporting'] = '余分および時間に基づく報告';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'トラブルシューティングのために、余分かつより動的なログが生成されます。';

$GLOBALS["lang"]['FAQ'] = 'よくある質問';

$GLOBALS["lang"]['FQDN'] = 'FQDNの特長';

$GLOBALS["lang"]['FW Revision'] = 'FWリビジョン';

$GLOBALS["lang"]['Fail'] = '失敗';

$GLOBALS["lang"]['Failed'] = '失敗した';

$GLOBALS["lang"]['Failed Severity'] = '失敗した重症';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'フォークランド諸島 (Malvinas)';

$GLOBALS["lang"]['Family'] = 'ファミリー';

$GLOBALS["lang"]['Faroe Islands'] = 'フェロー諸島';

$GLOBALS["lang"]['Features'] = '特徴:';

$GLOBALS["lang"]['February'] = '2月2日';

$GLOBALS["lang"]['field'] = 'フィールド';

$GLOBALS["lang"]['Field'] = 'フィールド';

$GLOBALS["lang"]['field_id'] = 'フィールドID';

$GLOBALS["lang"]['Field ID'] = 'フィールドID';

$GLOBALS["lang"]['Field Name'] = 'フィールド名';

$GLOBALS["lang"]['Field Type'] = 'フィールドタイプ';

$GLOBALS["lang"]['Fields'] = 'フィールド';

$GLOBALS["lang"]['fields'] = 'フィールド';

$GLOBALS["lang"]['Fields attributes are'] = 'フィールド属性は';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'フィジー諸島';

$GLOBALS["lang"]['File'] = 'ファイル';

$GLOBALS["lang"]['File Auditing'] = 'ファイル監査';

$GLOBALS["lang"]['File Import'] = 'ファイルインポート';

$GLOBALS["lang"]['File Input'] = 'ファイル入力';

$GLOBALS["lang"]['file_name'] = 'ファイル名';

$GLOBALS["lang"]['File Name'] = 'ファイル名';

$GLOBALS["lang"]['File Share Discovery'] = 'ファイル共有ディスカバリー';

$GLOBALS["lang"]['file_size'] = 'ファイル サイズ';

$GLOBALS["lang"]['File Size'] = 'ファイル サイズ';

$GLOBALS["lang"]['filename'] = 'ファイル名';

$GLOBALS["lang"]['Filename'] = 'ファイル名';

$GLOBALS["lang"]['files'] = 'ファイル';

$GLOBALS["lang"]['Files'] = 'ファイル';

$GLOBALS["lang"]['files_id'] = 'ファイルID';

$GLOBALS["lang"]['Files ID'] = 'ファイルID';

$GLOBALS["lang"]['filter'] = 'フィルター';

$GLOBALS["lang"]['Filter'] = 'フィルター';

$GLOBALS["lang"]['filtered'] = 'フィルター';

$GLOBALS["lang"]['Filtered'] = 'フィルター';

$GLOBALS["lang"]['Filtered Ports'] = 'ろ過された港';

$GLOBALS["lang"]['Finland'] = 'フィンランド';

$GLOBALS["lang"]['Finnish'] = 'フィンランド語';

$GLOBALS["lang"]['Firewall'] = '防火壁';

$GLOBALS["lang"]['Firewall Packages'] = 'ファイアウォールパッケージ';

$GLOBALS["lang"]['firewall_rule'] = 'ファイアウォールルール';

$GLOBALS["lang"]['Firewall Rule'] = 'ファイアウォールルール';

$GLOBALS["lang"]['firmware'] = 'ファームウェア';

$GLOBALS["lang"]['Firmware'] = 'ファームウェア';

$GLOBALS["lang"]['firmware_revision'] = 'ファームウェアの修正';

$GLOBALS["lang"]['Firmware Revision'] = 'ファームウェアの修正';

$GLOBALS["lang"]['First'] = 'ファースト';

$GLOBALS["lang"]['First Name'] = 'お名前(必須)';

$GLOBALS["lang"]['first_run'] = 'ファーストラン';

$GLOBALS["lang"]['First Run'] = 'ファーストラン';

$GLOBALS["lang"]['first_seen'] = '初めて見る';

$GLOBALS["lang"]['First Seen'] = '初めて見る';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'まずは、ソフトウェア、ユーザー、またはネットスタットデータをベースライン化しようとしています。 比較して報告する重要なことは何ですか?';

$GLOBALS["lang"]['FirstWave'] = 'ファーストウェーブ';

$GLOBALS["lang"]['Fix'] = 'インストール';

$GLOBALS["lang"]['Fixed'] = '固定式';

$GLOBALS["lang"]['Fixing the Issue'] = '問題の修正';

$GLOBALS["lang"]['Floor'] = 'フロアマップ';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '下記のリンクのいずれかをフォローし、Open-AudITの使用方法を発見 <b>あなたのネットワーク上で何か?</b>';

$GLOBALS["lang"]['For'] = 'お問い合わせ';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'お問い合わせ <i>タイプ:</i> ベースラインを選択し、グループの場合、このベースラインに適用される場合は、デバイスがベースラインを対に適用するのに最適なグループを選択する必要があります。 これは、誤ったエントリを防ぐことができます。';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian/Ubuntu の実行には、dpkg を設定してオーバーライドを記憶するなど、apt-get のアップグレードは壊れません。';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open-AudIT では v1、v2、v3 の認証情報を利用できます。 デバイスは、ルータ、スイッチ(通常ネットワークデバイス)、コンピュータ(LinuxおよびWindowsは、多くの場合、SNMPを監視ツールとして実行する)かどうかを問わない。';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'cron のプライマーについては、この Wikipedia のページを参照してください。';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'シード発見のために、私はプライベートIPアドレス空間でIPを発見するだけです。';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'シード発見のために、選択したサブネット上のIPだけを発見する必要があります。';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '種子発見のために、発見を実行する前にサブネットをpingする必要があります。';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = '生SQLクエリの高度なエントリ。 クエリごとに、 <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = '各工程では、以下の工程が発生します。';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = '例えば、Redhat 9を実行しているデバイスからベースラインを作成すると、クラスター内のApacheサーバーの1つとして機能します。 この特定のサーバーは、あなたが望む方法だけで構成されている知っていますが、クラスター内の他のサーバーがまったく同じ構成されているかどうかは不明です。 ベースラインを使用すると、これを決定できます。';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = '例えば、Redhat 9を実行しているデバイスからベースラインを作成すると、クラスター内のApacheサーバーの1つとして機能します。 この特定のサーバーは、あなたが望む方法だけで構成されている知っていますが、クラスター内の他のサーバーがまったく同じ構成されているかどうかは不明です。 ベースラインを使用すると、これを決定できます。';

$GLOBALS["lang"]['For further details information, see the wiki.'] = '詳細は wiki を参照してください。';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'ライセンスが期限切れになった場合、永久にないライセンスの場合。';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = '詳細については、Open-AudITナレッジベースをご覧ください。';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = '詳しくは動画を含む以下のガイドをご覧ください。 使用条件';

$GLOBALS["lang"]['For more information, see'] = '詳しくは、';

$GLOBALS["lang"]['form_factor'] = 'フォームファクター';

$GLOBALS["lang"]['Form Factor'] = 'フォームファクター';

$GLOBALS["lang"]['format'] = 'フォーマット';

$GLOBALS["lang"]['Format'] = 'フォーマット';

$GLOBALS["lang"]['Forth'] = 'フォース';

$GLOBALS["lang"]['fqdn'] = 'ログイン';

$GLOBALS["lang"]['Fqdn'] = 'ログイン';

$GLOBALS["lang"]['France, French Republic'] = 'フランス、フランス共和国';

$GLOBALS["lang"]['free'] = '無料';

$GLOBALS["lang"]['Free'] = '無料';

$GLOBALS["lang"]['French'] = 'フランス語';

$GLOBALS["lang"]['French Guiana'] = 'フランス領ギアナ';

$GLOBALS["lang"]['French Polynesia'] = 'フランスのポリネシア';

$GLOBALS["lang"]['French Southern Territories'] = 'フランスの南地域';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'よくある質問';

$GLOBALS["lang"]['Friday'] = '金曜日';

$GLOBALS["lang"]['From 100 Devices'] = '100台から';

$GLOBALS["lang"]['From 500 Devices'] = '500台から';

$GLOBALS["lang"]['From that page'] = 'そのページから';

$GLOBALS["lang"]['full_name'] = '完全な名前';

$GLOBALS["lang"]['Full Name'] = '完全な名前';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = '通常のOpen-AudIT監査からのすべての詳細を監査し、マシンの種類やサイズなどの詳細。';

$GLOBALS["lang"]['function'] = 'ファンクション';

$GLOBALS["lang"]['Function'] = 'ファンクション';

$GLOBALS["lang"]['GROUP BY'] = 'グループ別';

$GLOBALS["lang"]['Gabon'] = 'ガボン';

$GLOBALS["lang"]['Galician'] = 'ガリシア語';

$GLOBALS["lang"]['Gambia the'] = 'ガンビア';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'ギャップ分析(任意)';

$GLOBALS["lang"]['gateway'] = 'ゲートウェイ';

$GLOBALS["lang"]['Gateway'] = 'ゲートウェイ';

$GLOBALS["lang"]['gateways'] = 'ゲートウェイ';

$GLOBALS["lang"]['Gateways'] = 'ゲートウェイ';

$GLOBALS["lang"]['Generated By'] = '生成されることによって';

$GLOBALS["lang"]['geo'] = 'ジオラマ';

$GLOBALS["lang"]['Geo'] = 'ジオラマ';

$GLOBALS["lang"]['Geographical Maps'] = '地理的地図';

$GLOBALS["lang"]['Georgia'] = 'ジョージア州';

$GLOBALS["lang"]['German'] = 'ドイツ';

$GLOBALS["lang"]['Germany'] = 'ドイツ';

$GLOBALS["lang"]['Get Lat/Long'] = 'ラット/ロング';

$GLOBALS["lang"]['Get News'] = 'ニュース';

$GLOBALS["lang"]['Get Started'] = '始める';

$GLOBALS["lang"]['Get a Free License'] = '無料ライセンスを取得';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Open-AudITプラットフォームに精通し、機能の一部を探索しましょう。';

$GLOBALS["lang"]['Getting Started'] = '始める';

$GLOBALS["lang"]['Ghana'] = 'ガーナ';

$GLOBALS["lang"]['Gibraltar'] = 'ジブラルタル';

$GLOBALS["lang"]['Github'] = 'ギトハブ';

$GLOBALS["lang"]['Global Discovery Options'] = 'グローバル・ディスカバリー・オプション';

$GLOBALS["lang"]['Global area network'] = 'グローバルエリアネットワーク';

$GLOBALS["lang"]['Go'] = 'おすすめ';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'あなたのOpen-AudITサーバーに戻り、サブネットとしてターゲットWindowsコンピュータIPアドレスで発見を作成します(これは再びサブネット全体を発見するために保存します)。 発見を実行し、問題に注意を払ってください。 問題が見つかった場合は、適切な行動を取る。';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'ターゲットのWindows PC(またはRDPを使用する)を行き、あなたの発見の資格セットによって使用されるユーザーとしてログオンして下さい。';

$GLOBALS["lang"]['Go to menu'] = 'メニュー';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'お問い合わせ <i>アプリケーション</i> → → <i>アプリ登録</i> 左上のメニュー項目。 Open-AudITの検索 リストの[Open-AudIT]エントリーをクリックします(アプリのOpen-AudITの名前を付ける)。';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'お問い合わせ <i>証明書と秘密</i> 下のメニュー項目 <i>マネージング</i> 中央メニュー';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'お問い合わせ <i>シングルサインオン</i> メニュー項目をクリックし、SAMLをクリックします。 <i>シングルサインオン方式を選択</i>お問い合わせ';

$GLOBALS["lang"]['Google Compute Fields'] = 'Googleの計算フィールド';

$GLOBALS["lang"]['Google JSON Credentials'] = 'サイトマップ 資格情報';

$GLOBALS["lang"]['Google Maps API Key'] = 'GoogleマップAPI キーキー';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'お問い合わせ まずは送信 GUI で示されているテキストと表示されているテキストを切り替えます。 今後、言語ファイルでは、翻訳が改善され、すべてのリリースの更新を心配する必要はありません。';

$GLOBALS["lang"]['Greater Than'] = 'より大きい';

$GLOBALS["lang"]['Greater Than or Equals'] = 'より大きいまたは等しい';

$GLOBALS["lang"]['Greece'] = 'ギリシャ';

$GLOBALS["lang"]['Greek'] = 'ギリシャ人';

$GLOBALS["lang"]['Green Query'] = 'グリーンクエリ';

$GLOBALS["lang"]['Greenland'] = 'グリーンランド';

$GLOBALS["lang"]['Grenada'] = 'グレナダ';

$GLOBALS["lang"]['Group'] = 'グループ';

$GLOBALS["lang"]['group_by'] = 'グループ別';

$GLOBALS["lang"]['Group By'] = 'グループ別';

$GLOBALS["lang"]['group_id'] = 'グループID';

$GLOBALS["lang"]['Group ID'] = 'グループID';

$GLOBALS["lang"]['groups'] = 'グループ';

$GLOBALS["lang"]['Groups'] = 'グループ';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'グループは、必要な条件に合ったデバイスの簡単なリストとして使用されます。 JSON でリクエストされた場合、リストを返す <i>デバイスID</i> お問い合わせ Webインターフェイスを使用して要求された場合、標準カラムの属性リストを返します。 インテグレーション、ベースライン、その他の項目にグループを使用できます。';

$GLOBALS["lang"]['Guadeloupe'] = 'グアドルーペ';

$GLOBALS["lang"]['Guam'] = 'グアム';

$GLOBALS["lang"]['Guatemala'] = 'グアテマラ';

$GLOBALS["lang"]['Guernsey'] = 'グエルンシー';

$GLOBALS["lang"]['guest_device_id'] = 'ゲストデバイスID';

$GLOBALS["lang"]['Guest Device ID'] = 'ゲストデバイスID';

$GLOBALS["lang"]['guid'] = 'ログイン';

$GLOBALS["lang"]['Guid'] = 'ログイン';

$GLOBALS["lang"]['Guinea'] = 'ギニア';

$GLOBALS["lang"]['Guinea-Bissau'] = 'ギニア・ビサウ';

$GLOBALS["lang"]['Guyana'] = 'ガイアナ';

$GLOBALS["lang"]['HP-UX'] = 'HP-UXの特長';

$GLOBALS["lang"]['HW Revision'] = 'HWリビジョン';

$GLOBALS["lang"]['Haiti'] = 'ハイチ';

$GLOBALS["lang"]['hard_drive_index'] = 'ハードドライブインデックス';

$GLOBALS["lang"]['Hard Drive Index'] = 'ハードドライブインデックス';

$GLOBALS["lang"]['Hardware'] = 'ハードウェア';

$GLOBALS["lang"]['hardware_revision'] = 'ハードウェアリビジョン';

$GLOBALS["lang"]['Hardware Revision'] = 'ハードウェアリビジョン';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'この方針は、この組織に適用されるものとします。';

$GLOBALS["lang"]['hash'] = 'ハッシュ';

$GLOBALS["lang"]['Hash'] = 'ハッシュ';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'エージェントは常に最新の監査スクリプトを実行します(Open-AudITをアップグレードし、手動でスクリプトをターゲットにコピーすると、cron - 各アップグレード用のスクリプトを更新する必要があります)。';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'ユーザがコマンドプロンプトを開く(使用) <i>管理者として実行</i>)。 エージェントをダウンロードするためのプロンプトに以下を貼り付けます。';

$GLOBALS["lang"]['Head'] = 'ヘッド';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'ヘアード島とマクドナルド諸島';

$GLOBALS["lang"]['Hebrew'] = 'ヘブライ語';

$GLOBALS["lang"]['height'] = '高さ';

$GLOBALS["lang"]['Height'] = '高さ';

$GLOBALS["lang"]['Height in RU'] = 'RUの高さ';

$GLOBALS["lang"]['Help'] = 'お問い合わせ';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'よくある質問';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = '情報セキュリティリスクの管理と軽減を支援';

$GLOBALS["lang"]['Hide Audit Window'] = '監査ウィンドウを隠す';

$GLOBALS["lang"]['high'] = '高い';

$GLOBALS["lang"]['High'] = '高い';

$GLOBALS["lang"]['High Availability'] = '高可用性';

$GLOBALS["lang"]['Hindi'] = 'ヒンディー語';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '聖なる参照(バチカン州)';

$GLOBALS["lang"]['Home'] = 'ホーム >';

$GLOBALS["lang"]['home'] = 'ホーム >';

$GLOBALS["lang"]['Home Area Network'] = 'ホーム エリアネットワーク';

$GLOBALS["lang"]['Home area network'] = 'ホームエリアネットワーク';

$GLOBALS["lang"]['Honduras'] = 'ホンジュラス';

$GLOBALS["lang"]['Hong Kong'] = '香港';

$GLOBALS["lang"]['host'] = 'ホスト';

$GLOBALS["lang"]['Host'] = 'ホスト';

$GLOBALS["lang"]['hostname'] = 'ホスト名';

$GLOBALS["lang"]['Hostname'] = 'ホスト名';

$GLOBALS["lang"]['hour'] = '営業時間';

$GLOBALS["lang"]['Hour'] = '営業時間';

$GLOBALS["lang"]['How Does It Work?'] = 'それはどのように機能しますか?';

$GLOBALS["lang"]['How Does it Work?'] = 'それはどのように機能しますか?';

$GLOBALS["lang"]['How Long Does it Take'] = 'どのくらいの時間がかかりますか?';

$GLOBALS["lang"]['How and Why is'] = '方法と理由';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Open-AudITがより安全である理由';

$GLOBALS["lang"]['How do they work?'] = 'どうやって働きますか?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'デバイスシードディスカバリーが既知のIPを見つける方法は?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'コマンドが実行するのにどのくらいの時間がかかりました。';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = '応答、デバイスごとのNmapの待ち時間はどのくらいかかります。';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'この棚に何回路の供給か。';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'どのポリシーが失敗するか。';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'パスのポリシーがいくつあるか。';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'この棚のパワーソケットの数。';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = '高さのラックユニットは、このラックです。';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'コレクターがタスクのためにサーバーを尋ねる頻度。';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = '統合するデバイスを選択する方法(属性、クエリ、グループ)。';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = '脆弱性が悪用される方法(ネットワーク、アドジャセント、ローカル、物理的)';

$GLOBALS["lang"]['How to compare'] = '比較方法';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = '脆弱性の人為的な説明。';

$GLOBALS["lang"]['Hungarian'] = 'ハンガリー語';

$GLOBALS["lang"]['Hungary'] = 'ハンガリー';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpeの特長';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpeの特長';

$GLOBALS["lang"]['hyperthreading'] = 'ハイパースレッド';

$GLOBALS["lang"]['Hyperthreading'] = 'ハイパースレッド';

$GLOBALS["lang"]['I have read the EULA.'] = '私はEULAを読んでいます。';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'この投稿は、Open-AudITとSecurityに関する懸念を緩和しました。 まずはお気軽にご相談ください。 皆様のお悩みやご要望にお応えいたします。 あなたの質問がここに対処しているものではないかもしれません、私は将来のユーザーのためにここにそれを追加することができます';

$GLOBALS["lang"]['id'] = 'インフォメーション';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IFについて';

$GLOBALS["lang"]['IMPORTANT'] = 'インフォメーション';

$GLOBALS["lang"]['INPUTS'] = 'インプリント';

$GLOBALS["lang"]['IOS Version'] = 'IOSバージョン';

$GLOBALS["lang"]['IP'] = 'IPアドレス';

$GLOBALS["lang"]['ip'] = 'IPアドレス';

$GLOBALS["lang"]['IP Address'] = 'IPアドレス';

$GLOBALS["lang"]['IP Addresses'] = 'IPアドレス';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 最終参照';

$GLOBALS["lang"]['IP Set By'] = 'IP によって置かれる';

$GLOBALS["lang"]['ISMS'] = 'ISMSについて';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001のみ。';

$GLOBALS["lang"]['Iceland'] = 'アイスランド';

$GLOBALS["lang"]['icon'] = 'アイコン';

$GLOBALS["lang"]['Icon'] = 'アイコン';

$GLOBALS["lang"]['Icon and Text'] = 'アイコンとテキスト';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'アイコンのみ、テキストのみまたはアイコンとテキスト。';

$GLOBALS["lang"]['id_internal'] = 'Id 内部';

$GLOBALS["lang"]['Id Internal'] = 'Id 内部';

$GLOBALS["lang"]['id_number'] = 'ID番号';

$GLOBALS["lang"]['Id Number'] = 'ID番号';

$GLOBALS["lang"]['identification'] = 'インフォメーション';

$GLOBALS["lang"]['Identification'] = 'インフォメーション';

$GLOBALS["lang"]['Identify information assets'] = '情報資産を特定する';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = '関心のあるパーティーとその要件を特定する';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = '重要な利害関係者を特定し、役割を割り当てる';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'デバイスを識別します。 <i>金画像</i> 同様のデバイスを比較したい。';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'セキュリティリスクの特定・評価';

$GLOBALS["lang"]['If'] = 'お問い合わせ';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'デバイスが個別に発見された場合 <i>デバイスを見る</i> デバイスの詳細ページへのリンクは、このデバイスが以前に発見されたかどうかを最初に確認します(ディスカバリー)、そのスキャンから発見オプションを使用します。 以前に発見されていない場合は、設定項目のdiscover_default_scan_optionに再変換します。';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = '新しい Org が作成されると、LDAP のグループ名が自動的に名前から生成されます。 たとえば、新しい Org が作成され、 Test という名前で、対応する LDAP グループは open-audit_orgs_test と名付けられます。';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'ポートがフィルタリングで応答する場合、利用可能なポートを考慮する必要があります。';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'ポートが open|filtered で応答する場合、利用可能なポートを検討してください。';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Open-AudIT 選択したデバイスにリモートデバイスが存在しない場合、外部システムから削除する必要があります。';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudITデバイスが変更されている場合は、外部システムを更新する必要があります。';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = '外部システムにOpen-AudIT装置がない場合は、その作成を行います。';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'エージェントがプライマリIPをこのサブネットで報告する場合、アクションを実行します。';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'これら(コンマ区切り、スペースなし)ポートが検出された場合、SSHはそれらを実行し、監査のためにそれらを使用すると仮定します。 このポートをカスタムTCPポートに追加する必要はありません。自動的に追加されます。';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = '演算子が指定されていない場合、デフォルトは = です。 プロパティは完全に修飾されるべきです - すなわち、 device.hostname (ホスト名だけではありません)。';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = '値が存在しない場合、この値を供給してください。 EG:system.nmis_group / configuraion の場合。 グループ使用';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '設定すると、特定のデバイス列の JSON 配列を保持します。このユーザは、設定のデフォルト以外の設定を選択しました。';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'OSファミリー(デバイスによって報告される)がこの項目を含んでいる場合、パス。';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Open-AudIT Server にコレクターが報告している場合、追加のドロップダウンが提供されます。 タスクを実行するコレクターを指定するためにこれを選択できます。 コレクターズのディスカバリータスクのみがサポートされます。';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'エージェントOSファミリーがこの文字列を含んでいる場合、アクションを実行します。';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'これらの場所のいずれかでバイナリが見つからない場合は、インストーラーに警告メッセージが表示されます。';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '次の条件が満たされた場合:<br/><ul><li>役割は割り当てられたad_group を持っています</li><li>org に割り当てられた ad_group があります。</li><li>エルダップ Server には use_roles が y に設定されています。</li><li>LDAP(Active DirectoryまたはOpenLDAP)に存在するユーザで、割り当てられたad_groups</li></ul>このユーザーは、Open-AudITのアカウントを作成せずにOpen-AudITにログインすることができます。 Open-AudIT は、質問の LDAP をクエリし、ユーザーが必要なグループにいる場合、Open-AudIT ではユーザ属性(名前、フルネーム、メール、ロール、orgs など)が Open-AudIT 内で自動的にポップアップされ、ログオンされます。<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'ローカルフィールドがtrue(bool)またはy(string)またはY(string)または1(integer)の場合、外部データを1に設定します。';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'ローカルフィールドがtrue(bool)またはy(string)またはY(string)または1(integer)の場合、外部データをyに設定します。';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'プライマリIP(デバイスによって報告される)がこのサブネットにある場合、パス。';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'ユーザアカウントがOpen-AudIT内で実際に存在していない場合 <code>use_authorisation</code> ユーザが作成されます。 存在している場合、メール、フルネームなどなどの詳細がポップアップ表示されます。';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'ユーザーが有効な資格情報を持っていない、または少なくとも1つのOpen-AudITロールとグループ(使用時)でない場合 <code>use_authorisation</code>), Open-AudIT はローカル Open-AudIT ユーザの詳細と、認証と認可を試みるためにフォールバックされます。 失敗すると、ユーザはアクセスを拒否されます。';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Open-AudIT にログオンすると、LDAP を検索するアクセスがない場合、このアクセス権を持つ別のアカウントを使うことができます。';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Open-AudIT にログオンすると、OpenLDAP を検索するアクセスがない場合、このアクセス権を持つ別のアカウントを使用できます。 dn_account と dn_password を使って設定します。';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = '値が設定されていない場合、現在のタイムスタンプが使用されます。';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = '値が設定されている場合、そのタイムスタンプ値が使用されます。';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'この変更があなたのために機能しない場合は、すべて失われません。 設定項目(デフォルトではnに設定)を追加しましたので、この新しいオプションは箱から使用しません)。 それを y に変更すると、検出によってデバイスに割り当てられた OrgID が関連するマッチルールで使用されます。';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'サーバが最後のデバイスを見たので、この数分(以上)が経過した場合、パス。';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'デバイスがサーバーに接触してからこの数分以上経過した場合、アクションを実行します。';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'これが起きると、見ている問題は、ページ上で使われるテーブル制御に関連しています。 現在のページが表示されるチェックボックスの状態をメモリに保存するだけです。 選択をすると、ページを転送/バックすると、それらの選択が失われます。 ただし、各ページに表示されているデバイスの数を拡張することで望むものを達成することができます。 左上隅に「1ページあたりのレコード」というラベルが付いたドロップダウンです。 これを使用して、一括編集を選択したい場合に表示されるエントリの数を拡大します。';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'san 管理ソフトウェアを検出すると、クエリの前に自動ディスカバーを実行します。';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Location Type を追加すると、そのアイコンを';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'デバイスタイプを追加すると、関連するアイコンを表示するには、.svg 形式のファイルをディレクトリに手動でコピーする必要があります。';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'あなたがサポートしている場合 FirstWave 顧客, アイテムのカップルは、あなたの簡単に助けになります. FirstWaveでサポートチケットを開き、ログファイルを添付します。 また、右上にあるサポートボタンから出力を含んでいます。';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'サポートされているお客様で、FirstWave でサポートチケットを開く場合は、これらのファイルを添付してください。';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Google Maps API キーや、Google Maps API キーを発行するアクセスがない場合、FirstWave サポートチームにお問い合わせください。';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Windows または NMIS サーバーがリモートの場合、URL、ユーザー名、パスワードをサーバーにアクセスする必要があります。';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'まともなブロードバンドまたはイーサネット接続にある場合は、必ず -T4(攻撃) を使用することをお勧めします。 私の好みのためにあまりにも積極的なにもかかわらず、何人かの人々は -T5 (インサン) が大好きです。 人々は時々-T2(Polite)を指定して、彼らはそれがホストをクラッシュする可能性が低いか、彼らは一般的に礼儀であることを自分自身を考慮するので。 彼らはしばしば遅い -T2が本当にあることを認識しません。 スキャンは、デフォルトスキャンよりも10回以上かかることがあります。 マシンのクラッシュや帯域幅の問題は、デフォルトのタイミングオプション-T3(ノーマル)でまれているため、通常は注意深いスキャナをお勧めします。 Omitting版の検出はこれらの問題を減らすでタイミングの価値と遊ぶよりずっと有効です。';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'RedHat または Centos システムを実行している場合、Nmap をアップグレードしている場合は、バイナリの SUID をリセットしてください。';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Linux 上で Open-AudIT サーバーを実行している場合は、これには影響しません。';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'WindowsでOpen-AudITを使用している場合や、NMISサーバーがOpen-AudITサーバーにインストールされていない場合は、アクセス資格情報とリモートNMISへのURLを供給する必要があります。 はい - NMISとOpen-AudIT間の統合は、WindowsベースのOpen-AudITで動作します。';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'コレクタを選択すると、次の5分の境界線で実行する予定です。';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = '通常、 device_assigned_to_org と設定項目が有効になっている場合は、OrgID を使用して、マッチをさらに改良します。';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = '通常に device_assigned_to_org が設定されていない場合は、効果はありません。 ディスカバリー(または手動で監査スクリプトで設定されている場合は、 OrgID を使用してのみ確認し、設定で有効化します。';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = '設定項目を有効にすると、発見を使用して Org を割り当て、その後、ディスカバリー後にデバイスの OrgID を変更すると、ディスカバリーが実行する次回のデバイスが作成される可能性があります。 この例では、その後の発見を実行する前に、おそらくデバイスをunset_assigned_to_orgにしてください。 これは(この例では)Open-AudITと言われているからです。 <i>このディスカバリーのデバイスはOrg Xに所属しています。<i>デバイスの Org を変更しました。 保存したデバイス情報を変更しました。 この場合 - Org X に属するデバイスがなくなったため、新しいデバイスを作成します。</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'アンチウィルス ソフトウェアが実行されている場合は、Opmantek (omkd)、Apache (apache2.2) および MySQL (mysql) のサービスの起動と実行が不可欠です。 本サービスはOpen-AudITを利用しています。 一度だけこれを行う必要があります。 あなたのアンチウイルスプログラムがOpen-AudITについてあなたに通知し続ける場合は、フォーラムに投稿するか、アンチウイルスソフトウェアの名前とバージョンをサポートする電子メールを送信してください。';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = '資格情報を取得している場合は、可能な情報量を満たすことができます。<br/><br/>明らかに、Open-AudITを使用する最善の方法は、デバイスが発見されている(WMI、SSH、またはSNMPの資格情報)の資格情報を持っていることです。<br/><br/>また、資格情報のない監査のページもあります。';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = '\"id\" フィールドを含む場合 <strong>そして、</strong> 数値で設定すると、作成ではなく項目が更新されます。';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Active Directory のアクセスを構成する必要がある場合は、通常、たとえば <code>cn=Users,dc=your,dc=domain,dc=com</code> あなたのために <code>base_dn</code>お問い合わせ 設定する必要はありません <code>user_dn</code>お問い合わせ';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'ユーザーのOpenLDAPアクセスを構成する必要がある場合や、特定のユーザーアクセスDNは通常、 <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> あなたが設定する必要があります <code>base_dn</code> お問い合わせ <code>dc=your,dc=domain,dc=com</code> そして、 <code>user_dn</code> お問い合わせ <code>uid=@username@@domain,cn=People</code>お問い合わせ 特別な言葉 <code>@username</code> そして、 <code>@domain</code> ログインページでユーザーが指定したログイン情報に置き換えられます。';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'サーバー(またはコレクター)が直接インストールされているサブネットで検出を実行すると、デバイスに対応するには以下が期待できます。';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'サーバー(またはコレクター)が直接インストールされていないサブネットで検出を実行すると、デバイスに対応するには以下を期待できます。';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'リストタイプを選択すると、追加のフィールドは値と呼ばれます。 ここで選択可能な値のコンマ区切りリストを置く必要があります。 フィールドが編集されると、ドロップダウンボックスに表示されます。';

$GLOBALS["lang"]['If you set the values for'] = '値を設定した場合';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'エージェントが特定の設定を使用するように強制したい場合は、エージェントのエントリの ID を以下のように供給できます。(エージェントのエントリの数に $id を置換します)。 このエージェントがインストールされると、 sevrer と check-in がチェックされます。 <strong>メニュー</strong> 1人の個人を調べる エージェントエントリの属性(テストとアクション)。 MSPの場合、これは便利です - 特定の顧客のためのエージェントエントリを作成し、そのデバイスは、すべてのこのエントリを使用しており、これらを Org と Location に割り当てます。';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'インテグレーションを掘り下げてカスタマイズしたい場合は、[詳細]ボタンをクリックします(そして圧倒しないでください!)。';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = '外部に提供されているデバイスでディスカバリーを実行する場合は、オプションを選択し、インテグレーションが作成されると、ディスカバリーが作成されます。';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'ディスカバリーの外でスクリプトを使いたい場合は、別のエンドポイントを作成しました。 <i>スクリプト</i>お問い合わせ ドキュメントを見る';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'ユーザーがいない場合 <i>管理者として実行</i> 権利は、エージェント(上記の最初のコマンド)をダウンロードし、以下のように監査を提出することができます。 エージェントがインストールまたはスケジュールされていない1オフ監査になります。';

$GLOBALS["lang"]['ifadminstatus'] = 'ifadminstatus ディレクティブ';

$GLOBALS["lang"]['Ifadminstatus'] = 'ifadminstatus ディレクティブ';

$GLOBALS["lang"]['iflastchange'] = 'ラストチェン';

$GLOBALS["lang"]['Iflastchange'] = 'ラストチェン';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore 無効な SSL';

$GLOBALS["lang"]['Ignored'] = '無視される';

$GLOBALS["lang"]['image'] = 'サイトマップ';

$GLOBALS["lang"]['Image'] = 'サイトマップ';

$GLOBALS["lang"]['Images'] = 'イメージ';

$GLOBALS["lang"]['impact_availability'] = '影響の可用性';

$GLOBALS["lang"]['Impact Availability'] = '影響の可用性';

$GLOBALS["lang"]['impact_confidentiality'] = '影響の機密性';

$GLOBALS["lang"]['Impact Confidentiality'] = '影響の機密性';

$GLOBALS["lang"]['impact_integrity'] = '影響の完全性';

$GLOBALS["lang"]['Impact Integrity'] = '影響の完全性';

$GLOBALS["lang"]['Implement selected controls and procedures'] = '選択した制御と手順を実行';

$GLOBALS["lang"]['Implementation'] = '導入事例';

$GLOBALS["lang"]['implementation_notes'] = '実装ノート';

$GLOBALS["lang"]['Implementation Notes'] = '実装ノート';

$GLOBALS["lang"]['Import'] = 'インポート';

$GLOBALS["lang"]['Import Example Data'] = 'インポート例データ';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'CSV を使用して複数の {collection} をインポートします。';

$GLOBALS["lang"]['improvement_opportunities'] = '改善機会';

$GLOBALS["lang"]['Improvement Opportunities'] = '改善機会';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'ビジネスの継続性とレジリエンスを改善';

$GLOBALS["lang"]['In'] = 'インスタグラム';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = '2番目のタブまたはウィンドウでOKTAコンソールに移動し、クリックします <i>Appの統合を作成する</i>お問い合わせ';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = '2番目のタブまたはウィンドウサインオンで';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = '私の個人的な意見では、ネットワーク上のすべてのアイテムを検索し、監査するための最良の方法は、各サブネットのためのシードディスカバリーであり、そのサブネット(認証情報を使用して)制限されています。 Seed Discoveriesは、スイッチ、ルーター、コンピュータMACアドレステーブルを使用して、単一のデバイスを見逃さない。 ネットワークに接続し、TCP/IP を利用している場合、スイッチ/ルータ/コンピューターは、TCP/IP の仕組みを把握する必要があります。 カスタムTCPおよび/またはUDPポートと組み合わせて、デバイスの種類を決定できるようにする必要があります。 しかし、それは私の個人的な好みだけ';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Open-AudIT は、アイテムのユーザー権限を適用することができるようにするために、ユーザーの操作を行います。 <code>WHERE @filter</code>お問い合わせ この形式を使用しない場合、queryCreateForm は警告をスローします。 管理者権限を持つユーザーのみが、この属性を欠いているクエリを作成でき、設定項目の後にのみ <i>高度なクエリ</i> 有効になっています。';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Googleマップを有効にするには、Google APIキーがこのリンクをフォローしてログインする必要があります Googleアカウント、';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Azure Rest API を使用するには、認証に使用される Azure Active Directory アプリケーションを作成する必要があります。';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'この機能を使用するには、設定で有効にする必要があります - クリック';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(コンマ区切り) リスト';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'の場合 <code>in</code> そして、 <code>notin</code>, あなたは、丸括弧内の値を閉じ、コンマを使用してそれらを分離する必要があります (コンマだけ, コンマではなく, その後、スペース).<br/><br/>これらの演算子では、非常に総合的にフィルタリングできます。<br/><br/>複数の列にデータとフィルタを追加すると、それらの列は組み合わせられます。 <strong>そして、</strong>お問い合わせ フィルタは使用できません。 <strong>お問い合わせ</strong> 条件。 包含を使って <code>notin</code>, あなたはほとんどの検索作業を取得することができるはずです. そして、本当にサポートされていない複雑な選択を必要とする人のために、あなたは常に実際のクエリを書くことができます。';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'BIGTEXT MySQL フィールド内の複数のフィールド(通常 JSON 形式)を格納する場合(例: 認証情報)。 資格情報 - 資格情報テーブルの認証欄)、フォーマットを使用する必要があります';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'コマンドプロンプトシェルで、ダウンロードディレクトリに移動します(同様に) <code>cd Downloads</code>)。';

$GLOBALS["lang"]['Inactive'] = 'インアクティブ';

$GLOBALS["lang"]['Incomplete'] = '不完全な';

$GLOBALS["lang"]['Index'] = 'インデックス';

$GLOBALS["lang"]['India'] = 'インド';

$GLOBALS["lang"]['Indonesia'] = 'インドネシア';

$GLOBALS["lang"]['Indonesian'] = 'インドネシア';

$GLOBALS["lang"]['Info'] = 'インフォメーション';

$GLOBALS["lang"]['Information only.'] = '情報のみ。';

$GLOBALS["lang"]['Informational'] = 'インフォメーション';

$GLOBALS["lang"]['initial_size'] = '初期サイズ';

$GLOBALS["lang"]['Initial Size'] = '初期サイズ';

$GLOBALS["lang"]['Initial login credentials are'] = '初期ログイン資格情報は';

$GLOBALS["lang"]['Initiation'] = 'イニシエーション';

$GLOBALS["lang"]['inode'] = 'イノード';

$GLOBALS["lang"]['Inode'] = 'イノード';

$GLOBALS["lang"]['Input'] = 'パスワード';

$GLOBALS["lang"]['Input Type'] = '入力タイプ';

$GLOBALS["lang"]['inputs'] = '入力';

$GLOBALS["lang"]['Inputs'] = '入力';

$GLOBALS["lang"]['Insane'] = 'インスタ';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = '新しい {collection} エントリを入力します。';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'たとえばデータを入力し、Open-AudITがあなたを伝えることができるすべてのものを発見します。';

$GLOBALS["lang"]['Insert your Purchased license Key'] = '認証する ライセンスの購入 キーキー';

$GLOBALS["lang"]['install'] = 'インストール';

$GLOBALS["lang"]['Install'] = 'インストール';

$GLOBALS["lang"]['install_date'] = '日付をインストール';

$GLOBALS["lang"]['Install Date'] = '日付をインストール';

$GLOBALS["lang"]['install_directory'] = 'ディレクトリのインストール';

$GLOBALS["lang"]['Install Directory'] = 'ディレクトリのインストール';

$GLOBALS["lang"]['Install OpenScap if required'] = '必要に応じてOpenScapをインストールする';

$GLOBALS["lang"]['install_source'] = 'ソースのインストール';

$GLOBALS["lang"]['Install Source'] = 'ソースのインストール';

$GLOBALS["lang"]['Install Support'] = 'サポートのインストール';

$GLOBALS["lang"]['installed_by'] = 'インストール';

$GLOBALS["lang"]['Installed By'] = 'インストール';

$GLOBALS["lang"]['installed_on'] = 'インストールオン';

$GLOBALS["lang"]['Installed On'] = 'インストールオン';

$GLOBALS["lang"]['Installing'] = 'インストール';

$GLOBALS["lang"]['Installing on Linux'] = 'Linux のインストール';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOSにインストール';

$GLOBALS["lang"]['Installing on Windows'] = 'Windowsにインストール';

$GLOBALS["lang"]['instance'] = 'インスタンス';

$GLOBALS["lang"]['Instance'] = 'インスタンス';

$GLOBALS["lang"]['instance_ident'] = 'インスタンス識別';

$GLOBALS["lang"]['Instance Ident'] = 'インスタンス識別';

$GLOBALS["lang"]['instance_options'] = 'インスタンスオプション';

$GLOBALS["lang"]['Instance Options'] = 'インスタンスオプション';

$GLOBALS["lang"]['instance_provider'] = 'インスタンスプロバイダ';

$GLOBALS["lang"]['Instance Provider'] = 'インスタンスプロバイダ';

$GLOBALS["lang"]['instance_reservation_ident'] = 'インスタンス予約 ログイン';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'インスタンス予約 ログイン';

$GLOBALS["lang"]['instance_state'] = 'インスタンス状態';

$GLOBALS["lang"]['Instance State'] = 'インスタンス状態';

$GLOBALS["lang"]['instance_tags'] = 'インスタンスタグ';

$GLOBALS["lang"]['Instance Tags'] = 'インスタンスタグ';

$GLOBALS["lang"]['instance_type'] = 'インスタンスタイプ';

$GLOBALS["lang"]['Instance Type'] = 'インスタンスタイプ';

$GLOBALS["lang"]['Integer'] = 'インテガー';

$GLOBALS["lang"]['Integration'] = 'インテグレーション';

$GLOBALS["lang"]['integrations'] = 'インテグレーション';

$GLOBALS["lang"]['Integrations'] = 'インテグレーション';

$GLOBALS["lang"]['integrations_id'] = '統合ID';

$GLOBALS["lang"]['Integrations ID'] = '統合ID';

$GLOBALS["lang"]['integrations_log'] = '統合ログ';

$GLOBALS["lang"]['Integrations Log'] = '統合ログ';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = '必要に応じてインテグレーションをスケジュールすることができます。 ユーザに残されます。';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = '統合は、Discoveries、Queries、et al ごとにスケジュールできます。';

$GLOBALS["lang"]['Interactive Dashboards'] = 'インタラクティブなダッシュボード';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'インタラクティブなダッシュボードは、ITチームが新しく発見されたデバイスと異常なデバイス動作を一目で見やすくするネットワーク在庫のステータスに即座に可視化します。';

$GLOBALS["lang"]['interface'] = 'インターフェース';

$GLOBALS["lang"]['Interface'] = 'インターフェース';

$GLOBALS["lang"]['interface_id'] = 'インターフェイス ID';

$GLOBALS["lang"]['Interface ID'] = 'インターフェイス ID';

$GLOBALS["lang"]['interface_type'] = 'インターフェイス タイプ';

$GLOBALS["lang"]['Interface Type'] = 'インターフェイス タイプ';

$GLOBALS["lang"]['Internal'] = 'インテリア';

$GLOBALS["lang"]['Internal Audit'] = '内部監査';

$GLOBALS["lang"]['Internal Audit & Review'] = '内部監査とレビュー';

$GLOBALS["lang"]['Internal Field Name'] = '内部フィールド名';

$GLOBALS["lang"]['Internal ID'] = '内部 ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'このユーザーの有効なアクセストークンの内部JSON配列。';

$GLOBALS["lang"]['Introduction'] = '導入事例';

$GLOBALS["lang"]['invoice'] = 'インボイス';

$GLOBALS["lang"]['Invoice'] = 'インボイス';

$GLOBALS["lang"]['invoice_id'] = '請求書ID';

$GLOBALS["lang"]['Invoice ID'] = '請求書ID';

$GLOBALS["lang"]['invoice_item'] = '請求書項目';

$GLOBALS["lang"]['Invoice Item'] = '請求書項目';

$GLOBALS["lang"]['ios_version'] = 'Iosバージョン';

$GLOBALS["lang"]['Ios Version'] = 'Iosバージョン';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ipアドレス 外部 A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ipアドレス 外部 A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ipアドレス 外部B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ipアドレス 外部B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ipアドレス 内部 A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ipアドレス 内部 A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ipアドレス 内部 B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ipアドレス 内部 B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip すべてのカウント';

$GLOBALS["lang"]['Ip All Count'] = 'Ip すべてのカウント';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip 監査されたカウント';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip 監査されたカウント';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip 発見されたカウント';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip 発見されたカウント';

$GLOBALS["lang"]['ip_enabled'] = 'Ip 有効';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip 有効';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip 応答数';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip 応答数';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip スキャンされたカウント';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip スキャンされたカウント';

$GLOBALS["lang"]['Iran'] = 'イラン';

$GLOBALS["lang"]['Iraq'] = 'イラクサ';

$GLOBALS["lang"]['Ireland'] = 'アイルランド';

$GLOBALS["lang"]['Irish'] = 'アイルランド';

$GLOBALS["lang"]['Is FRU'] = 'FRUとは';

$GLOBALS["lang"]['is_fru'] = 'フリル';

$GLOBALS["lang"]['Is Fru'] = 'フリル';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'NMISサーバーはローカル(このOpen-AudITサーバーで)、またはリモートですか?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'このアカウントはアクティブですか? 設定する <code>n</code>ログアウトできません。';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'このクエリは、ライセンスされた顧客に制限されています。';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'このタスクが有効になっています(y/n)。';

$GLOBALS["lang"]['Isle of Man'] = '男の島';

$GLOBALS["lang"]['Israel'] = 'イスラエル';

$GLOBALS["lang"]['Issue'] = 'ニュース';

$GLOBALS["lang"]['issuer'] = '発行者';

$GLOBALS["lang"]['Issuer'] = '発行者';

$GLOBALS["lang"]['issuer_name'] = '発行者名';

$GLOBALS["lang"]['Issuer Name'] = '発行者名';

$GLOBALS["lang"]['Issues'] = '問題点';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'お問い合わせ <i>ジャストワークス</i> NMISの';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'メニュー -> ヘルプ ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Open-AudIT が設定した任意のプロパティにマッチすることを決定したときには、注意することが重要です。 <i>ログイン</i> 発見されたデバイスが既にデータベースに一致することを判断するために、Open-AudITのために(そして空白ではない)正確に一致しなければなりません。 マークされたプロパティのどれも <i>ログイン</i> マッチすると、新しいデバイスエントリが作成され、重複したデバイスエントリが生成されます。 プロパティが重複している状況では、例えば dbus_id は VM クローンの間にコピーされ、既存のデバイスが誤って上書き/更新されたり、新しいエントリが作成されなくなってしまったりします。';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = '特定の組織における重複アドレススペースを持つことは珍しくありません。 理想ではなく、珍しいことではありません。';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = '2番目の層マザーボードメーカーがこれを設定しないために非常に一般的です。 <i>0 の 0</i>s またはすべて <i>ツイート</i>お問い合わせ';

$GLOBALS["lang"]['Italian'] = 'イタリア';

$GLOBALS["lang"]['Italy'] = 'イタリア';

$GLOBALS["lang"]['Items not in Baseline'] = 'ベースラインにないアイテム';

$GLOBALS["lang"]['JSON'] = 'ジェソン';

$GLOBALS["lang"]['JSON to Import'] = 'インポートする JSON';

$GLOBALS["lang"]['Jamaica'] = 'ジャマイカ';

$GLOBALS["lang"]['January'] = '1月1日';

$GLOBALS["lang"]['Japan'] = 'ジャパンジャパン';

$GLOBALS["lang"]['Japanese'] = '日本語 English';

$GLOBALS["lang"]['Jersey'] = 'ジャージー';

$GLOBALS["lang"]['Jordan'] = 'ヨルダン';

$GLOBALS["lang"]['July'] = '7月7日';

$GLOBALS["lang"]['June'] = '6月6日';

$GLOBALS["lang"]['Kazakhstan'] = 'カザフスタン';

$GLOBALS["lang"]['Kenya'] = 'ケニア';

$GLOBALS["lang"]['kernel_version'] = 'カーネルバージョン';

$GLOBALS["lang"]['Kernel Version'] = 'カーネルバージョン';

$GLOBALS["lang"]['Key'] = 'キーキー';

$GLOBALS["lang"]['Key Components'] = '主要コンポーネント';

$GLOBALS["lang"]['Key Password (optional)'] = '主パスワード(任意)';

$GLOBALS["lang"]['keys'] = 'キー';

$GLOBALS["lang"]['Keys'] = 'キー';

$GLOBALS["lang"]['Kiribati'] = 'キリバティ';

$GLOBALS["lang"]['Korea'] = '韓国';

$GLOBALS["lang"]['Korean'] = '韓国人';

$GLOBALS["lang"]['Kuwait'] = 'クウェート';

$GLOBALS["lang"]['Kyrgyz'] = 'キルギス';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'キルギス共和国';

$GLOBALS["lang"]['LDAP Group'] = 'LDAPグループ';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP は、このユーザーとアカウントを検索しました。';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP は、このユーザーを検索し、アカウントが見つかりませんでした。 LDAP サーバーのログを確認します。 ユーザの資格情報は機能しましたが、ユーザは見つかりませんでした。 また、Open-AudIT で LDAP Server を作成したときに、正しい Base DN 属性を指定していることを確認してください。';

$GLOBALS["lang"]['lang'] = 'ログイン';

$GLOBALS["lang"]['Lang'] = 'ログイン';

$GLOBALS["lang"]['language'] = '日本語 English';

$GLOBALS["lang"]['Language'] = '日本語 English';

$GLOBALS["lang"]['Lao'] = 'ラオ';

$GLOBALS["lang"]['last_changed'] = '最終変更';

$GLOBALS["lang"]['Last Changed'] = '最終変更';

$GLOBALS["lang"]['last_finished'] = '最終仕上げ';

$GLOBALS["lang"]['Last Finished'] = '最終仕上げ';

$GLOBALS["lang"]['last_logon'] = '最終ログオン';

$GLOBALS["lang"]['Last Logon'] = '最終ログオン';

$GLOBALS["lang"]['Last Name'] = 'お名前 (必須)';

$GLOBALS["lang"]['last_os_update'] = '最新Osアップデート';

$GLOBALS["lang"]['Last Os Update'] = '最新Osアップデート';

$GLOBALS["lang"]['last_result'] = '最終結果';

$GLOBALS["lang"]['Last Result'] = '最終結果';

$GLOBALS["lang"]['last_run'] = '最終実行';

$GLOBALS["lang"]['Last Run'] = '最終実行';

$GLOBALS["lang"]['last_seen'] = '最終参照';

$GLOBALS["lang"]['Last Seen'] = '最終参照';

$GLOBALS["lang"]['last_seen_by'] = '最終参照 によって';

$GLOBALS["lang"]['Last Seen By'] = '最終参照 によって';

$GLOBALS["lang"]['last_user'] = '最後のユーザー';

$GLOBALS["lang"]['Last User'] = '最後のユーザー';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = '最後はWMIです。 Linux で Windows の場合、管理者レベルのアクセスを持つユーザが優先されます(Wiki の Target Client Configuration を参照してください)。';

$GLOBALS["lang"]['lastModified'] = '最終修正';

$GLOBALS["lang"]['LastModified'] = '最終修正';

$GLOBALS["lang"]['latitude'] = '最近の投稿';

$GLOBALS["lang"]['Latitude'] = '最近の投稿';

$GLOBALS["lang"]['Latvia'] = 'ラトビア';

$GLOBALS["lang"]['Latvian'] = 'ラトビアの';

$GLOBALS["lang"]['Layout'] = 'レイアウト';

$GLOBALS["lang"]['ldap'] = 'リダップ';

$GLOBALS["lang"]['Ldap'] = 'リダップ';

$GLOBALS["lang"]['ldap_base_dn'] = 'LdapベースDn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'LdapベースDn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dnアカウント';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dnアカウント';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn パスワード';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn パスワード';

$GLOBALS["lang"]['Learn About'] = '学習について';

$GLOBALS["lang"]['Learn More'] = 'もっと詳しく';

$GLOBALS["lang"]['lease_expiry_date'] = 'リース有効期限';

$GLOBALS["lang"]['Lease Expiry Date'] = 'リース有効期限';

$GLOBALS["lang"]['Lebanon'] = 'レバノン';

$GLOBALS["lang"]['legal_requirements'] = '法的要件';

$GLOBALS["lang"]['Legal Requirements'] = '法的要件';

$GLOBALS["lang"]['Lesotho'] = 'レソト';

$GLOBALS["lang"]['Less Than'] = 'より少しより';

$GLOBALS["lang"]['Less Than or Equals'] = 'より少なくまたは等しい';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'ログをデバッグに設定しましょう。 ファイルのコピー:';

$GLOBALS["lang"]['level'] = 'レベル';

$GLOBALS["lang"]['Level'] = 'レベル';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = '悪用するために必要な特権のレベル(なし、低、高)。';

$GLOBALS["lang"]['Liberia'] = 'リベリア';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'ライブラリ(つまり、別のプログラムが含まれている可能性があるコード)。 これらは通常、Wordpressの拡張子、drupal拡張子、node.jsライブラリ、Android / iPhone / Windowsライブラリ、Pythonライブラリなどの項目です。';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'リビア アラビアの Jamahiriya';

$GLOBALS["lang"]['License'] = 'ライセンス';

$GLOBALS["lang"]['License Key'] = 'ライセンスキー';

$GLOBALS["lang"]['License Required'] = 'ライセンス必須';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'ライセンスされたユーザーは、適宜ルールを追加または変更することができます。 SNMP OIDで既にモデルと一致しないデバイスを持っている場合は、簡単に追加できます。 パッチを提供して、あなたのためのコードベースにそれを追加するために私たちを待っていません。<br/><br/>ルールエントリを作成するときは、入力と出力の名前とリストを指定する必要があります。 入力と出力は、データベース内のJSON配列として保存されます。<br/><br/>入力にはテーブルと属性、演算子と値があります。 条件を実行すると、次のような機能があります。 $table . $attribute $operator $value なら、出力を適用します。<br/><br/>SNMP OIDにマッチし、以下のモデルを設定するための例です。<br/>';

$GLOBALS["lang"]['Licenses'] = 'ライセンス';

$GLOBALS["lang"]['Liechtenstein'] = 'リヒテンシュタイン';

$GLOBALS["lang"]['Like'] = 'お問い合わせ';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = '他のほとんどの属性と同様に、追加のフィールドは一括編集できます。 通常どおりにバルク編集機能を使うと、入力時に追加フィールドが利用可能になります。';

$GLOBALS["lang"]['Like versus Equals'] = '同等性愛';

$GLOBALS["lang"]['limit'] = 'ログイン';

$GLOBALS["lang"]['Limit'] = 'ログイン';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'クエリを最初のX項目に制限します。';

$GLOBALS["lang"]['Limited to 100 rows.'] = '100行限定';

$GLOBALS["lang"]['line_amount'] = 'ライン量';

$GLOBALS["lang"]['Line Amount'] = 'ライン量';

$GLOBALS["lang"]['Line Graph'] = 'ライングラフ';

$GLOBALS["lang"]['line_number_a'] = 'ライン番号 A';

$GLOBALS["lang"]['Line Number A'] = 'ライン番号 A';

$GLOBALS["lang"]['line_number_b'] = 'ライン番号 B';

$GLOBALS["lang"]['Line Number B'] = 'ライン番号 B';

$GLOBALS["lang"]['line_text'] = 'ラインテキスト';

$GLOBALS["lang"]['Line Text'] = 'ラインテキスト';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = '行のグラフは、日付またはmy_date、説明、my_description、および count を返す必要があります。';

$GLOBALS["lang"]['link'] = 'サイトマップ';

$GLOBALS["lang"]['Link'] = 'サイトマップ';

$GLOBALS["lang"]['Link (Advanced)'] = 'リンク(詳細)';

$GLOBALS["lang"]['Linked Files'] = 'リンクされたファイル';

$GLOBALS["lang"]['links'] = 'サイトマップ';

$GLOBALS["lang"]['Links'] = 'サイトマップ';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'この発見を関連するクラウド(必要に応じて)にリンクします。 サイトマップ <code>clouds.id</code>お問い合わせ';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'サイトマップ <code>discovery_scan_options.id</code>お問い合わせ';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'サイトマップ <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'サイトマップ <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'ダウンロード';

$GLOBALS["lang"]['Linux Packages'] = 'Linuxパッケージ';

$GLOBALS["lang"]['List'] = 'プロフィール';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = '各デバイス用のすべてのNMAPポート、プロトコル、プログラムを一覧表示';

$GLOBALS["lang"]['List Devices'] = 'リストデバイス';

$GLOBALS["lang"]['List Discoveries'] = 'リスト発見';

$GLOBALS["lang"]['list_table_format'] = 'リスト表形式';

$GLOBALS["lang"]['List Table Format'] = 'リスト表形式';

$GLOBALS["lang"]['List Tables'] = 'リストテーブル';

$GLOBALS["lang"]['Lithuania'] = 'リトアニア';

$GLOBALS["lang"]['Lithuanian'] = 'リトアニア語';

$GLOBALS["lang"]['Load Balancing'] = 'ロードバランス';

$GLOBALS["lang"]['Local'] = 'ローカル';

$GLOBALS["lang"]['Local Area Network'] = '地域ネットワーク';

$GLOBALS["lang"]['local_port'] = 'ローカルポート';

$GLOBALS["lang"]['Local Port'] = 'ローカルポート';

$GLOBALS["lang"]['Local area network'] = 'ローカルエリアネットワーク';

$GLOBALS["lang"]['Localhost'] = 'ローカルホスト';

$GLOBALS["lang"]['Localisation'] = 'ローカリゼーション';

$GLOBALS["lang"]['Location'] = 'アクセス';

$GLOBALS["lang"]['Location A'] = '所在地 A';

$GLOBALS["lang"]['Location B'] = '所在地 B';

$GLOBALS["lang"]['location_id'] = '所在地ID';

$GLOBALS["lang"]['Location ID'] = '所在地ID';

$GLOBALS["lang"]['location_id_a'] = '所在地ID A';

$GLOBALS["lang"]['Location ID A'] = '所在地ID A';

$GLOBALS["lang"]['location_id_b'] = '所在地ID B';

$GLOBALS["lang"]['Location ID B'] = '所在地ID B';

$GLOBALS["lang"]['location_latitude'] = '所在地 緯度';

$GLOBALS["lang"]['Location Latitude'] = '所在地 緯度';

$GLOBALS["lang"]['location_level'] = '所在地レベル';

$GLOBALS["lang"]['Location Level'] = '所在地レベル';

$GLOBALS["lang"]['location_longitude'] = '位置 経度';

$GLOBALS["lang"]['Location Longitude'] = '位置 経度';

$GLOBALS["lang"]['Location Name'] = '所在地名';

$GLOBALS["lang"]['location_rack'] = '位置の棚';

$GLOBALS["lang"]['Location Rack'] = '位置の棚';

$GLOBALS["lang"]['location_rack_position'] = '位置 棚の位置';

$GLOBALS["lang"]['Location Rack Position'] = '位置 棚の位置';

$GLOBALS["lang"]['location_rack_size'] = '位置の棚のサイズ';

$GLOBALS["lang"]['Location Rack Size'] = '位置の棚のサイズ';

$GLOBALS["lang"]['location_room'] = '宿泊約款';

$GLOBALS["lang"]['Location Room'] = '宿泊約款';

$GLOBALS["lang"]['location_suite'] = 'ロケーション スイート';

$GLOBALS["lang"]['Location Suite'] = 'ロケーション スイート';

$GLOBALS["lang"]['Locations'] = 'アクセス';

$GLOBALS["lang"]['Locations in this'] = 'この場所での位置';

$GLOBALS["lang"]['log'] = 'ログイン';

$GLOBALS["lang"]['Log'] = 'ログイン';

$GLOBALS["lang"]['log_format'] = 'ログフォーマット';

$GLOBALS["lang"]['Log Format'] = 'ログフォーマット';

$GLOBALS["lang"]['Log Line'] = 'ログライン';

$GLOBALS["lang"]['log_path'] = 'ログパス';

$GLOBALS["lang"]['Log Path'] = 'ログパス';

$GLOBALS["lang"]['log_rotation'] = 'ログローテーション';

$GLOBALS["lang"]['Log Rotation'] = 'ログローテーション';

$GLOBALS["lang"]['log_status'] = 'ログステータス';

$GLOBALS["lang"]['Log Status'] = 'ログステータス';

$GLOBALS["lang"]['Logging in'] = 'ログイン';

$GLOBALS["lang"]['Logical Cores '] = '論理コア ';

$GLOBALS["lang"]['logical_count'] = '論理計算';

$GLOBALS["lang"]['Logical Count'] = '論理計算';

$GLOBALS["lang"]['Logout'] = 'ログイン';

$GLOBALS["lang"]['Logs'] = 'ログイン';

$GLOBALS["lang"]['longitude'] = 'ロングワード';

$GLOBALS["lang"]['Longitude'] = 'ロングワード';

$GLOBALS["lang"]['low'] = '低い';

$GLOBALS["lang"]['Low'] = '低い';

$GLOBALS["lang"]['Lower Case'] = 'より低い場合';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase ホスト名';

$GLOBALS["lang"]['Luxembourg'] = 'ルクセンブルク';

$GLOBALS["lang"]['MAC Address'] = 'MACアドレス';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MACについて メーカー';

$GLOBALS["lang"]['mac'] = 'メニュー';

$GLOBALS["lang"]['Mac'] = 'メニュー';

$GLOBALS["lang"]['Mac Address'] = 'Macアドレス';

$GLOBALS["lang"]['MacOS'] = 'MacOSの';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOSパッケージ';

$GLOBALS["lang"]['Macao'] = 'マカオ';

$GLOBALS["lang"]['Macedonia'] = 'マケドニア';

$GLOBALS["lang"]['Madagascar'] = 'マダガスカル';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'リスク評価と治療の記録を維持';

$GLOBALS["lang"]['maintenance_expires'] = 'メンテナンス終了';

$GLOBALS["lang"]['Maintenance Expires'] = 'メンテナンス終了';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'デフォルトのダッシュボードを作る';

$GLOBALS["lang"]['Make this install a Collector'] = 'これはコレクターをインストールします';

$GLOBALS["lang"]['Malawi'] = 'マラウイ';

$GLOBALS["lang"]['Malay'] = 'マレー語';

$GLOBALS["lang"]['Malaysia'] = 'マレーシア';

$GLOBALS["lang"]['Maldives'] = 'モルディブ';

$GLOBALS["lang"]['Mali'] = 'マリ';

$GLOBALS["lang"]['Malta'] = 'マルタ';

$GLOBALS["lang"]['Manage'] = 'マネージング';

$GLOBALS["lang"]['Manage Licenses'] = 'ライセンスの管理';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMISで管理';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'インシデントと非適合性の管理';

$GLOBALS["lang"]['Managed'] = 'マネージド';

$GLOBALS["lang"]['managed_by'] = 'によって管理される';

$GLOBALS["lang"]['Managed By'] = 'によって管理される';

$GLOBALS["lang"]['Manual Input'] = '手動入力';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = '手動でユーザー、デフォルトでプロダクションに設定します。';

$GLOBALS["lang"]['Manually set by user.'] = 'ユーザーによる手動で設定します。';

$GLOBALS["lang"]['manufacture_date'] = '製造日';

$GLOBALS["lang"]['Manufacture Date'] = '製造日';

$GLOBALS["lang"]['manufacturer'] = 'メーカー';

$GLOBALS["lang"]['Manufacturer'] = 'メーカー';

$GLOBALS["lang"]['manufacturer_code'] = 'メーカーコード';

$GLOBALS["lang"]['Manufacturer Code'] = 'メーカーコード';

$GLOBALS["lang"]['Map'] = 'サイトマップ';

$GLOBALS["lang"]['maps'] = 'サイトマップ';

$GLOBALS["lang"]['Maps'] = 'サイトマップ';

$GLOBALS["lang"]['March'] = '3月3日';

$GLOBALS["lang"]['Marshall Islands'] = 'マーシャル諸島';

$GLOBALS["lang"]['Martinique'] = 'マルティニーク';

$GLOBALS["lang"]['mask'] = 'マスク';

$GLOBALS["lang"]['Mask'] = 'マスク';

$GLOBALS["lang"]['Match'] = 'マッチング';

$GLOBALS["lang"]['match_options'] = 'マッチオプション';

$GLOBALS["lang"]['Match Options'] = 'マッチオプション';

$GLOBALS["lang"]['Match Order'] = 'マッチオーダー';

$GLOBALS["lang"]['Match Process'] = 'マッチプロセス';

$GLOBALS["lang"]['match_string'] = 'マッチストリング';

$GLOBALS["lang"]['Match String'] = 'マッチストリング';

$GLOBALS["lang"]['Matching Attribute'] = 'マッチングアトリビュート';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'マッチングデバイス - OrgIDを含む';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Linuxデバイスのマッチング';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'マッチングは、次の順番で行います。';

$GLOBALS["lang"]['maturity_level'] = '成熟度レベル';

$GLOBALS["lang"]['Maturity Level'] = '成熟度レベル';

$GLOBALS["lang"]['maturity_score'] = '成熟度スコア';

$GLOBALS["lang"]['Maturity Score'] = '成熟度スコア';

$GLOBALS["lang"]['Mauritania'] = 'モーリタニア';

$GLOBALS["lang"]['Mauritius'] = 'モーリシャス';

$GLOBALS["lang"]['max_file_size'] = '最高のファイル サイズ';

$GLOBALS["lang"]['Max File Size'] = '最高のファイル サイズ';

$GLOBALS["lang"]['Max Length'] = '最高の長さ';

$GLOBALS["lang"]['max_size'] = '最高のサイズ';

$GLOBALS["lang"]['Max Size'] = '最高のサイズ';

$GLOBALS["lang"]['May'] = '5月5日';

$GLOBALS["lang"]['Mayotte'] = 'マヨッテ';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = '脆弱性が攻撃されている可能性を測定し、悪用技術、悪用コードの可用性、またはアクティブの「無水」の悪用に基づいています。';

$GLOBALS["lang"]['medium'] = 'メディア';

$GLOBALS["lang"]['Medium'] = 'メディア';

$GLOBALS["lang"]['members'] = 'メンバー';

$GLOBALS["lang"]['Members'] = 'メンバー';

$GLOBALS["lang"]['memory'] = 'メモリ';

$GLOBALS["lang"]['Memory'] = 'メモリ';

$GLOBALS["lang"]['memory_count'] = 'メモリカウント';

$GLOBALS["lang"]['Memory Count'] = 'メモリカウント';

$GLOBALS["lang"]['memory_slot_count'] = '記憶スロット計算';

$GLOBALS["lang"]['Memory Slot Count'] = '記憶スロット計算';

$GLOBALS["lang"]['menu_category'] = 'メニューカテゴリ';

$GLOBALS["lang"]['Menu Category'] = 'メニューカテゴリ';

$GLOBALS["lang"]['menu_display'] = 'メニュー表示';

$GLOBALS["lang"]['Menu Display'] = 'メニュー表示';

$GLOBALS["lang"]['message'] = 'メッセージ';

$GLOBALS["lang"]['Message'] = 'メッセージ';

$GLOBALS["lang"]['meta_last_changed'] = 'メタの最終変更';

$GLOBALS["lang"]['Meta Last Changed'] = 'メタの最終変更';

$GLOBALS["lang"]['metric'] = 'メトリック';

$GLOBALS["lang"]['Metric'] = 'メトリック';

$GLOBALS["lang"]['Metropolitan Area Network'] = '首都圏ネットワーク';

$GLOBALS["lang"]['Metropolitan area network'] = '首都圏ネットワーク';

$GLOBALS["lang"]['Mexico'] = 'メキシコ';

$GLOBALS["lang"]['Micronesia'] = 'マイクロネシア';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure フィールド';

$GLOBALS["lang"]['microtime'] = 'マイクロタイム';

$GLOBALS["lang"]['Microtime'] = 'マイクロタイム';

$GLOBALS["lang"]['minute'] = 'ツイート';

$GLOBALS["lang"]['Minute'] = 'ツイート';

$GLOBALS["lang"]['Minutes'] = 'ミニッツ';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '最後の監査がより優れているので分';

$GLOBALS["lang"]['model'] = 'モデル';

$GLOBALS["lang"]['Model'] = 'モデル';

$GLOBALS["lang"]['model_family'] = 'モデル 家族';

$GLOBALS["lang"]['Model Family'] = 'モデル 家族';

$GLOBALS["lang"]['Modified'] = '更新履歴';

$GLOBALS["lang"]['Modifying an Existing Script'] = '既存のスクリプトの変更';

$GLOBALS["lang"]['module'] = 'モジュール';

$GLOBALS["lang"]['Module'] = 'モジュール';

$GLOBALS["lang"]['module_index'] = 'モジュールインデックス';

$GLOBALS["lang"]['Module Index'] = 'モジュールインデックス';

$GLOBALS["lang"]['Modules'] = 'モジュール';

$GLOBALS["lang"]['Moldova'] = 'モルドバ';

$GLOBALS["lang"]['Monaco'] = 'メニュー';

$GLOBALS["lang"]['Monday'] = '月曜日';

$GLOBALS["lang"]['Mongolia'] = 'モンゴル';

$GLOBALS["lang"]['monitor'] = 'モニター';

$GLOBALS["lang"]['Monitor'] = 'モニター';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'ISMSの性能を監視し、測定して下さい';

$GLOBALS["lang"]['Montenegro'] = 'モンテネグロ';

$GLOBALS["lang"]['month'] = 'カレンダー';

$GLOBALS["lang"]['Month'] = 'カレンダー';

$GLOBALS["lang"]['Montserrat'] = 'モンセラット';

$GLOBALS["lang"]['More Information'] = '詳細情報';

$GLOBALS["lang"]['More Secure'] = 'より安全な';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'より詳細な elaborate SQL は、範囲内の属性をグループ化するために使用できます。 以下は、最後に見た日付範囲でグループ化されたパイチャートで見ていないデバイスのSQLを示しています。';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'デバッグに関する詳細は、Stack Overflow スレッドで確認できます。';

$GLOBALS["lang"]['Morocco'] = 'モロッコ';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'ほとんどの場合、Windowsファイアウォール(またはサードパーティファイアウォール)は接続の試みを拒否する可能性があります。<br/><br/>対象となるWindowsマシンにログインし、ファイアウォールの設定を確認してください。';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Open-AudIT のほとんどは GNU AGPL とライセンスされています。';

$GLOBALS["lang"]['motherboard'] = 'マザーボード';

$GLOBALS["lang"]['Motherboard'] = 'マザーボード';

$GLOBALS["lang"]['mount_point'] = 'マウントポイント';

$GLOBALS["lang"]['Mount Point'] = 'マウントポイント';

$GLOBALS["lang"]['mount_type'] = 'マウントタイプ';

$GLOBALS["lang"]['Mount Type'] = 'マウントタイプ';

$GLOBALS["lang"]['Mozambique'] = 'モザンビーク';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Ping への対応が必要です。 設定した場合、Nmap は ICMP 応答の送信とリスニングを試みます。 デバイスが応答しない場合、さらなるスキャンは発生しません。<br/>以前は、デバイスは、スキャンを続けるために、Open-AudIT用のpingに応答する必要はありませんでした。';

$GLOBALS["lang"]['Must Respond to Ping'] = '対処しなければならない ピン';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = '私のAntiVirusは、物事を否定/許可するために私を促しています';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = '私の時間はOpen-AudITでオフです';

$GLOBALS["lang"]['Myanmar'] = 'ミャンマー';

$GLOBALS["lang"]['N+1'] = 'N+1の';

$GLOBALS["lang"]['N+M'] = 'N+Mの';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1の特長';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N への N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMISビジネスサービス';

$GLOBALS["lang"]['NMIS Customer'] = 'NMISのお客様';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMISデバイスオプション';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMISデバイス選定';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMISフィールド名';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMISフィールドタイプ';

$GLOBALS["lang"]['NMIS Group'] = 'NMISグループ';

$GLOBALS["lang"]['NMIS Poller'] = 'NMISのポラー';

$GLOBALS["lang"]['NMIS Role'] = 'ログイン ログイン';

$GLOBALS["lang"]['NOTE'] = 'お問い合わせ';

$GLOBALS["lang"]['NOTE #2'] = '注2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'Note - DateTimeのフォーマットの詳細については、を参照してください';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = '注 - ダウンロードしたCSV、XML、JSON形式(シングルクレデンシャル、または完全なコレクション)をリクエストすると、実際のクレデンシャルの詳細が送信されます。 暗号化された文字列ではなく、実際のユーザー名、パスワード、コミュニティ文字列など。 Web GUI では、機密情報は表示されませんが、他のフォーマットで利用できます。 このエクスポートを防ぐため、設定項目は decrypt_credentials と呼ばれます。';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = '注意 - データファイル内の曲線括弧は、as-is(上記の他の例では置換されません) を使用する必要があります。';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'Note - 設定項目を設定することで、以下のテキストの認証を解除できます。 <code>decrypt_credentials</code> お問い合わせ <code>n</code>お問い合わせ';

$GLOBALS["lang"]['name'] = 'お名前 (必須)';

$GLOBALS["lang"]['Name'] = 'お名前 (必須)';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = '名前:この分野に与えている名前。 理想的にはユニークでなければなりません。';

$GLOBALS["lang"]['Namibia'] = 'ナミビア';

$GLOBALS["lang"]['Nauru'] = 'ナウル';

$GLOBALS["lang"]['Nepal'] = 'ネパール';

$GLOBALS["lang"]['net_index'] = 'ネットインデックス';

$GLOBALS["lang"]['Net Index'] = 'ネットインデックス';

$GLOBALS["lang"]['Netherlands Antilles'] = 'オランダ領アンティル';

$GLOBALS["lang"]['Netherlands the'] = 'オランダ';

$GLOBALS["lang"]['netmask'] = 'ネットマスク';

$GLOBALS["lang"]['Netmask'] = 'ネットマスク';

$GLOBALS["lang"]['netstat'] = 'ネットスタット';

$GLOBALS["lang"]['Netstat'] = 'ネットスタット';

$GLOBALS["lang"]['Netstat Policies'] = 'ネットスタットポリシー';

$GLOBALS["lang"]['Netstat Ports'] = 'ネットスタットポート';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat ポートはポート番号、プロトコル、プログラムの組み合わせを使用します。 万が一、本方針を提示した場合。';

$GLOBALS["lang"]['Network'] = 'ネットワーク';

$GLOBALS["lang"]['network_address'] = 'ネットワークアドレス';

$GLOBALS["lang"]['Network Address'] = 'ネットワークアドレス';

$GLOBALS["lang"]['Network Discovery'] = 'ネットワークディスカバリー';

$GLOBALS["lang"]['network_domain'] = 'ネットワークドメイン';

$GLOBALS["lang"]['Network Domain'] = 'ネットワークドメイン';

$GLOBALS["lang"]['Network Types'] = 'ネットワークタイプ';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'ネットワークタイプは、デフォルトでローカルエリアネットワークに設定されますが、ユーザーが適合するかどうかを変更できます。 対応するタイプは以下の通りです。(Wikipediaのおかげで)。<br/><br/>物理的な能力や組織的な目的によってネットワークを特徴づけることができます。 ユーザーの許可やアクセス権を含むネットワークの使用は、それに応じて異なります。';

$GLOBALS["lang"]['networks'] = 'ネットワーク';

$GLOBALS["lang"]['Networks'] = 'ネットワーク';

$GLOBALS["lang"]['Networks Generated By'] = '生成されるネットワーク';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'あらゆる発見でネットワークを更新 ゲートウェイ、DHCP、DNS Server など、IP や IP などの項目が記載されています。';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'ネットワークは、設定方法によって異なる応答します。 一部のルータおよび/またはファイアウォールが対応可能 <i>代表的な</i> IP は、Open-AudIT Server のインターフェースの反対側にあります。 Nmap は、SNMP (UDP ポート 161) のプローブをオープン|フィルタリングして存在しないデバイスに対応するために、Nmap の報告が非常に一般的です。 これは、そのIPでデバイスがない場合、それはデータベース内のデバイスエントリで終わるので、誤解を招きます。 時間の99.9%は、Open-AudITではなく、Nmapでも、この問題を引き起こしたネットワークではありません。 開口部・閉口部として開口部・濾過部を加工するオプションがありますが、この混練を多く排除できます。 エンタープライズユーザーは、上記のように、各ディスカバリーベース(ミディアム(クラシック)アイテムを使用するだけではありません)でこれを変更することもできます。';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDRマスクを使用したネットワーク';

$GLOBALS["lang"]['New Building Name'] = '新建築名称';

$GLOBALS["lang"]['New Caledonia'] = 'ニューカレドニア';

$GLOBALS["lang"]['New Floor Name'] = '新しい床の名前';

$GLOBALS["lang"]['New Room Name'] = '新規ルーム名';

$GLOBALS["lang"]['New Row Name'] = '新しい列名';

$GLOBALS["lang"]['New Zealand'] = 'ニュージーランド';

$GLOBALS["lang"]['News'] = 'ニュース';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = '更新されたクエリとパッケージ、設定の推奨事項、リリースの発表、ブログ投稿などにログインするたびにニュースチェックイン。';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'ニュースは、最新の修正、アナウンス、クエリ更新、ソフトウェアバージョンなど最新の状態に保つ方法です。<br/><br/>ウィキのトップに保つか、新しいリリースをチェックする必要はありません。';

$GLOBALS["lang"]['next_hop'] = '次のホップ';

$GLOBALS["lang"]['Next Hop'] = '次のホップ';

$GLOBALS["lang"]['next_run'] = '次の実行';

$GLOBALS["lang"]['Next Run'] = '次の実行';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = '次 クリック <i>独自のアプリケーションを作成する</i>お問い合わせ';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = '次に、[OK] をクリックし、[Apache 2.4 サービス] をクリックし、[Restart] をクリックします。 お問い合わせ';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = '次に、Apache2.4サービスをクリックしてプロパティを選択し、[ログオン]タブをクリックします。';

$GLOBALS["lang"]['Nicaragua'] = 'ニカラグア';

$GLOBALS["lang"]['Niger'] = 'ニジェール';

$GLOBALS["lang"]['Nigeria'] = 'ナイジェリア';

$GLOBALS["lang"]['Niue'] = 'ログイン';

$GLOBALS["lang"]['nmap'] = 'サイトマップ';

$GLOBALS["lang"]['Nmap'] = 'サイトマップ';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmapポートスキャン応答';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcpポート';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcpポート';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udpポート';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udpポート';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmapは、パケットフィルタリングがポートに到達するのを防ぐため、ポートが開いているかどうかを判断できません。 フィルタリングは、専用のファイアウォールデバイス、ルータルール、またはホストベースのファイアウォールソフトウェアから行うことができます。 これらのポートは、あまり情報を提供しているため、攻撃者を怖がらせます。 時々、型3コード13(宛先不明:通信管理禁止)などのICMPエラーメッセージに応答しますが、単に応答せずにプローブをドロップするフィルタははるかに一般的です。 この力 Nmap は、フィルタリングではなくネットワークの混雑によりプローブが低下した場合に数回再試行する。 スキャンが劇的に遅くなります。';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap は、ポートが開いているか、またはフィルタリングされたかを判断できない場合、この状態でポートを配置します。 これは、ポートを開くスキャンタイプが応答しません。 応答の欠如は、パケットフィルタがプローブを落とすか、その反応が排除されることを意味します。 Nmap は、ポートが開いているか、またはフィルタリングされているかどうかは不明です。 UDP、IPプロトコル、FIN、NULL、Xmasスキャンは、このようにポートを分類します。';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'このページの一番下にあるNmapのタイミングの詳細はリンクページ下部にあります。';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmisビジネスサービス';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmisビジネスサービス';

$GLOBALS["lang"]['nmis_customer'] = 'Nmisのお客様';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmisのお客様';

$GLOBALS["lang"]['nmis_group'] = 'Nmisグループ';

$GLOBALS["lang"]['Nmis Group'] = 'Nmisグループ';

$GLOBALS["lang"]['nmis_manage'] = 'Nmisの管理';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmisの管理';

$GLOBALS["lang"]['nmis_name'] = 'Nmisの名前';

$GLOBALS["lang"]['Nmis Name'] = 'Nmisの名前';

$GLOBALS["lang"]['nmis_notes'] = 'Nmisのノート';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmisのノート';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis ポーラー';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis ポーラー';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid, オーストラリア';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid, オーストラリア';

$GLOBALS["lang"]['nmis_role'] = 'Nmisの役割';

$GLOBALS["lang"]['Nmis Role'] = 'Nmisの役割';

$GLOBALS["lang"]['No'] = 'いいえ。';

$GLOBALS["lang"]['No Devices Returned'] = 'デバイスが返されない';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'GoogleマップAPIなし キープレゼント、地図を表示することはできません。';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = '専門家または企業のための免許証無し';

$GLOBALS["lang"]['No Results'] = '結果なし';

$GLOBALS["lang"]['No data in License Key'] = 'ライセンスキーのデータなし';

$GLOBALS["lang"]['No database upgrade required at this time.'] = '現時点ではデータベースのアップグレードは必要ありません。';

$GLOBALS["lang"]['No devices are in the database.'] = 'デバイスはデータベースにありません。';

$GLOBALS["lang"]['Node'] = 'ノード';

$GLOBALS["lang"]['None'] = 'なし';

$GLOBALS["lang"]['Norfolk Island'] = 'ノーフォーク島';

$GLOBALS["lang"]['Normal'] = 'ノーマル';

$GLOBALS["lang"]['Northern Mariana Islands'] = '北マリアナ諸島';

$GLOBALS["lang"]['Norway'] = 'ノルウェー';

$GLOBALS["lang"]['Norwegian'] = 'ノルウェー語';

$GLOBALS["lang"]['Not Applicable'] = '該当なし';

$GLOBALS["lang"]['Not Checked'] = 'チェックされていない';

$GLOBALS["lang"]['Not Equals'] = '食べない';

$GLOBALS["lang"]['Not In'] = 'お問い合わせ';

$GLOBALS["lang"]['Not Like'] = '好きではない';

$GLOBALS["lang"]['Not Set'] = 'セットなし';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'すべてのコンピュータがベンチマークを正常に完了させることができないわけではありません。 制御を超えた理由で、テストに失敗しました。 ログは、これらの項目の正しい方向にあなたを指すべきです。';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = '(コンマ区切り) リストではない';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '通常使用していません。 設定すると、デバイスがオープンポート(スキャンオプションごとに)を応答するようにする必要があります。 MACアドレス、arp応答またはping応答は、応答を考慮するのに十分考慮されません。 Open-AudITサーバーとターゲットIP間のルータまたはファイアウォールが、IPのポートスキャンに代わって対応している場合に便利です。';

$GLOBALS["lang"]['Note'] = 'お問い合わせ';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '注意 - 親を選択すると、自動的にその子供へのアクセスを提供します(ここで表示されませんが)。';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = '100デバイスエンタープライズライセンスはサポート対象外です。';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = '注意して、スクリプトを実行可能にする必要があるかもしれません。';

$GLOBALS["lang"]['Notes'] = 'インフォメーション';

$GLOBALS["lang"]['notes'] = 'インフォメーション';

$GLOBALS["lang"]['Notice'] = 'お知らせ';

$GLOBALS["lang"]['notin'] = 'ログイン';

$GLOBALS["lang"]['Notin'] = 'ログイン';

$GLOBALS["lang"]['November'] = '11月11日';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'サブスクリプション ID で、[すべてのサービス]、[サブスクリプション] をクリックしてコピーします。';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Azure Active Directory アプリケーションをサブスクリプションにインストールする必要があります。<br/><br/>リソースグループをクリックし、Azure Active Directory アプリケーションにアクセスしたいリソースグループをクリックします。<br/><br/>追加をクリックします。 役割はコントリビューターであり、その後、アプリ(Open-AudIT)を検索する必要があります。 保存をクリックします。<br/><br/>アプリケーションがサブスクリプションにアクセスできるので、API 呼び出しを実行できます。 API 呼び出しは、ユーザではなく、アプリケーションに代わって要求されます。';

$GLOBALS["lang"]['nvd_json'] = 'Nvd ジェイソン';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd ジェイソン';

$GLOBALS["lang"]['ORDER BY'] = '注文する';

$GLOBALS["lang"]['OS'] = 'ログアウト';

$GLOBALS["lang"]['OS Families'] = 'OSファミリー';

$GLOBALS["lang"]['OS Family'] = 'OSファミリー';

$GLOBALS["lang"]['OS Group'] = 'OSグループ';

$GLOBALS["lang"]['OUTPUTS'] = 'インフォメーション';

$GLOBALS["lang"]['oae_manage'] = 'Oaeの管理';

$GLOBALS["lang"]['Oae Manage'] = 'Oaeの管理';

$GLOBALS["lang"]['object_ident'] = 'オブジェクト識別子';

$GLOBALS["lang"]['Object Ident'] = 'オブジェクト識別子';

$GLOBALS["lang"]['Obtain top management support'] = 'トップマネジメントサポート';

$GLOBALS["lang"]['October'] = '10月10日';

$GLOBALS["lang"]['Offset'] = 'オフセット';

$GLOBALS["lang"]['Okta'] = 'オクタ';

$GLOBALS["lang"]['Oman'] = 'オマーン';

$GLOBALS["lang"]['omk_uuid'] = 'オムク・ユイド';

$GLOBALS["lang"]['Omk Uuid'] = 'オムク・ユイド';

$GLOBALS["lang"]['On'] = 'お問い合わせ';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows では、Open-AudIT は監査の第一次方法として WMI を使用します。 Windowsには、リモートWMIが懸念しているような評判があります。 それはどちらかに傾向があります <i>仕事だけ</i> またはターゲット上のいくつかのミステリーアイテムは変更する必要があります。 リモートのWindows PCを監査する難しさを経験している場合は、test_windows_client.vbsというスクリプトを作成しました。 このスクリプトを実行できます <strong>ローカル</strong> 質問のマシン上で、監査を実行するためにOpen-AudITによって使用されるユーザーとして署名した後。 スクリプトは <strong>変更なし</strong> 対象デバイスへ。 以下に示す項目のほとんど(すべてではない)をチェックし、さまざまなプロパティのPASS、FAIL、INFOタグを生成します。 Note - ターゲットシステムが正しく監査されていない場合は、設定を変更しないでください。 以下のいくつかは、監査できるWindows PCに存在せず、一部が存在します。 特定のPCの発見が意図どおりに機能していない場合にのみ設定を変更します。';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'タスクリストページで、 <i>新規追加</i> タスクを設定するボタン。';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'フィールドに <i>マッチストリング</i> 追跡したいソフトウェアの名前を提供する必要があります。 必要な場所でワイルドカードとしてパーセント記号(%)を使うことができます。';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = '次のページでは、アクセスキーを選択し、キーを表示したり、新しいキーを作成したりすることができます。';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = '対象となるWindows PCで、DCOMユーティリティを実行し、(またはセット)以下の属性を確認します。 スタート -> 実行し、DCOMCNFGを入力し、OKを押します。 DCOMCNFGウィンドウを開きます。';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = '右上(メニューバーの下)には、いくつかのボタンが表示されます。 これにより、別のダッシュボードを選択し、現在のダッシュボードをホームページ(まだない場合)に設定し、現在のダッシュボード(許可がある場合)を編集できます。';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'オンプレミス、クラウドなし';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = '追加フィールドが作成されると、データベース内の他の属性と同様に、クエリやグループで使用できます。';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'コメントが切れると、証明書が検証されますが、自己署名証明書を使用してサーバーを正しく設定されていない場合は、この検証に失敗することもあります。';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'スクリプトがターゲットで実行したら、スクリプト自体を削除する必要があります。';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'これらの初期クエリ(snmp、ssh、wmi)が完了すると、デバイスが監査スクリプト(Windows、Linux、OSX、AIX、HP-UX、Solaris、ESXi)でサポートされている場合は、正しい監査スクリプトがターゲットにコピーされ、実行されます。 監査スクリプトは、完了時に自己削除されます。 結果は、XMLファイルとしてターゲットマシンに保存されます。 Open-AudIT サーバは、結果ファイルを処理し、対象のファイルを削除します。 監査スクリプトが対象デバイス(SSH 監査の少なくとも)にコピーされる場所は、discover_linux_script_directory config 項目を編集することで構成可能です。 デフォルトでは /tmp/ に設定されます。 /tmp が noexec が設定されているかどうかを変更する必要があるかもしれません。 結果ファイルが処理され、デバイスの詳細がOpen-AudIT内で更新されます。';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = '実行ボタンをクリックすると、Open-AudIT がプロセスをスプーンし、ディスカバリーを開始し、ユーザーをディスカバリー詳細ページに戻します。 新しくスモールドされたプロセスは、設定されたディスカバリーオプションをとり、Nmap コマンドを実行して、スキャンされる IP アドレスの初期リスト(または、そのタイプが使用される場合は Active Directory をクエリする)を決定します。 スキャンされる各IPはキューに入れられます。 初期プロセスが完了すると(およびキューにスキャンするIPがあります)、各IPを並行してさらにスキャンするためにいくつかのプロセスが出現します。 このプロセスの数は、設定で設定可能で、属性を編集します。 <i>キュー_limit</i>お問い合わせ デフォルトでは、20に設定されます。';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'デバイスを選択して編集したら、テーブルの右上にある鉛筆ボタンをクリックします。';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'これが完了すると、Open-AudITは、設定されたAuthメソッドに対してユーザーのログオン詳細を検証しようとします。 ユーザーが有効な資格情報を持っている場合 <code>use_authorisation</code> Open-AudIT は、ユーザーが所属するグループのリストを要求します。 ユーザーが Open-AudIT ロールと Orgs の対応するグループにいる場合、そのユーザーにロールと Orgs が適用されます。';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Baseline の定義を生成したら、指定したデバイスグループに対して実行するようにスケジュールできます。';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'あなたがそれらの項目を持っていたら, で Open-AudIT メニュー -> 発見 → クラウド → ダウンロード クラウド、選択 <i>アマゾンAWS</i> それらをタイプし、貼り付けます。 お問い合わせ';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'あなたがそれらの項目を持っていたら, で Open-AudIT メニュー -> 発見 → クラウド → ダウンロード クラウド、選択 <i>マイクロソフトのAzure</i> それらをタイプし、貼り付けます。 お問い合わせ';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'クラウドの資格情報があれば、新しいクラウドを作成したり、発見を実行したり、最初の/未来を発見したりするだけです。 クラウドマシンにログオンするのに必要な資格情報もあるので、定期的な発見と同じようにすべて完了です。 クラウドの認証';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'の 1 つ <code>3x2</code>, <code>4x2</code>, <code>4x3</code> または <code>4x4</code>お問い合わせ';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'キャンパスエリアネットワーク、クラウドネットワーク、エンタープライズプライベートネットワーク、ホームエリアネットワーク、ローカルエリアネットワーク、メトロポリタンエリアネットワーク、パッシブオプティカルローカルエリアネットワーク、パーソナルエリアネットワーク、ストレージエリアネットワーク、システムエリアネットワーク、バーチャルプライベートネットワーク、広域ネットワーク、ワイヤレスローカルエリアネットワーク。';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '開発、災害復旧、評価、生産、テスト、トレーニング、ユーザーアクセプタンステスト';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '割り当てられた、委任された、計画、予約済み、無許可、未管理。 デフォルトは割り当てられます。';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'いずれかの <code>active directory</code> または <code>openldap</code>お問い合わせ';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '1 つ: アンチウィルス、バックアップ、ファイアウォール、承認、禁止、無視またはその他。';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = '注意すべきもう1つの項目 - LDAPのホスト名(またはfqdn)を使用することを確認してください Open-AudIT で LDAP エントリーを作成するときに、証明書(LDAP Servers IP アドレスだけでなく)に一致するサーバー。';

$GLOBALS["lang"]['Online Documentation'] = 'オンラインドキュメント';

$GLOBALS["lang"]['Open'] = 'オープン';

$GLOBALS["lang"]['Open Data'] = 'データを開く';

$GLOBALS["lang"]['Open Source'] = 'オープンソース';

$GLOBALS["lang"]['Open-AudIT'] = 'オープンソース';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'オープンソース コミュニティソースコードはGitHubで公開しています。 あなたが懸念しているコードを調べることを奨励しています、そしてそれがオープンソースだからです - あなたはまた、あなたが持っている問題について私達に尋ねるか、または任意の発見を報告することをお勧めします。 私たちは、コードの貢献、脆弱性報告、さらには簡単な質問を受け入れるのにいつも満足しています。 お問い合わせ<br/><br/>監査スクリプト自体(Windows、Linux、MacOS、et al)は、読みやすいネイティブシェルスクリプト(VBScript for Windows、Bash for *nix)で記述されています。 どのコマンドが実行されているかを正確に確認できます。 必要ないコマンドを削除できます。 あなたは、あなたのコードを調べるために、第三者に尋ねることができます (あなたが望む場合) 任意の発見を報告.<br/><br/>オープンソース 企業は、Open-AudITコミュニティのアドオン商用機能を実行します。 外部依存関係のない単一のコンパイルファイルとして含まれています。 企業自体が機能を実行する場所、問題に懸念している場合は ファーストウェーブはあなたと一緒に仕事に満足しています - ただ尋ねます! 別の商用ソフトウェアベンダーで試してみてください!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudITデバイス選択';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'オープンソース 企業は、発見スキャンオプションの事前定義されたリストから選択し、発見ごとに個々のオプションをカスタマイズする能力を持っています。';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudITエンタープライズ 大規模ネットワーク向けの高スケールの柔軟な発見と監査ソリューション プロフェッショナルのすべての機能:ベースライン、ファイル監査、クラウドディスカバリー、ラック管理、アクティブディレクトリとLDAPを含む構成可能なロールベースのアクセス制御。';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT フィールド名';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudITライセンス';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudITオプション';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT ProfessionalとEnterpriseは、複数のフォーマットでタイムベース、履歴、およびミューティクエリベースのレポート機能を含む、レポート機能を強化しています。';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'オープンソース 専門家は、発見ごとの発見スキャンオプションの事前定義されたリストから選択する能力を持っています。';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudITプロフェッショナル。 世界\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'オープン・オード IT は、LDAP サーバー (Microsoft Active Directory および/または OpenLDAP) を使用してユーザーを認証および認証するほか、LDAP グループ メンバーシップに基づく割り当てられたロールおよび orgs を使用して Open-AudIT でユーザーアカウントを作成できるように設定できます。 それはまた使用することができます';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'オープン・オード データセンター内のサーバーでITを実行できます。 インターネットへのアクセスは不要です。 ディストリビューションパッケージマネージャを使っているLinuxのインストールでも、社内とセキュリティチームによるパッケージリポジトリを使って、前提条件を無視できます。<br/><br/>オープン・オード IT は、クラウド内のデータを保存しません。 ライセンス情報は、Open-AudITサーバーからインターネットにアクセスすることなく提供できます。<br/><br/>確かに、インターネットにアクセスして、配布用のパッケージ(セキュリティ修正を含む)をダウンロードすることができますが、それはあなたやセキュリティポリシーまでです。 Open-AudITはインターネットを必要としません。';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudITは、NIST CVE脆弱性レポートをダウンロード、解析、使用することができます。';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'オープン・オード 複数の言語で表示できます。 これを改善する方法は?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'オープン・オード 各デバイスに関連付けられている追加のフィールドに情報を格納することができます。';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT は、認証方法として Microsoft Entra (Microsoft Azure Active Directory として主に知られている) を使用できます。 これは、Open-AudITのユーザーがログオンページにあるEntraボタンを使用してログオンをクリックして、Entraの認証情報をログオンに使用できます。 このユーザーは、Open-AudIT内で既に存在する必要があります(割り当てられます)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudITは認証方法としてOKTAを使うことができます。 これは、Open-AudITのユーザーがログオンページでOKTAボタンを使用してログオンをクリックして、OKTA認証情報をログオンに使用できます。 このユーザーは、すでにOpen-AudIT(およびロールとオーグを割り当てる)内で存在する必要がありますが、ログオン認証の別のセットを覚える必要はありません。';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudITは、多くの問い合わせを組み入れています。 特定のクエリとパッケージされたクエリのどれもあなたのニーズに合ったものが必要な場合は、新しいものを作成して実行するためのOpen-AudITにロードするのは非常に簡単です。';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudITには、WebインターフェイスとJSONリクエストの両方で使用できるJSON Restful APIがあります。';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'オープン・オード IT には、Open-AudIT 内のユーザが何をできるかを判断するための詳細な権限システムがあります。 Open-AudITは、認証および/または認証のために、Active DirectoryまたはOpenLDAPを完全に自己完結させることができます。<br/><br/>Open-AudITの管理者は、ロールベースのアクセス制御が機能するのが好きです。';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'オープン・オード 強力な変化検出エンジンを搭載しています。 追加、削除、変更されたデバイス属性が検出され、保存されます。 これらの変更は、会社の変更とリリースプロセスから期待されたものとして確認された関連データと報告できます。<br/><br/>デバイスが監査されると、属性はデータベース内のテーブルに対応するセクションに分けられます。<br/><br/>各装置(コンピュータ、ルーター、プリンター、ら)に記入項目があります <code>devices</code> テーブル。 デバイステーブルの各エントリには、 <code>id</code> カラム。 この値はユニークです - それは自動増分IDです。<br/><br/>監査結果が処理されると、各セクションの各項目は、その監査結果がデータベースのものと比べます。<br/><br/>各セクションでは、キー列(表の下の参照)に同一値が含まれている場合は、既にインストールされ、その <code>last_seen</code> 属性の更新。 change_log エントリは作成されません。<br/><br/>キー列が一致しない場合は、新しい属性と見なされます。 ツイート <code>change_log</code> デバイスがテーブルに既に存在する他の属性を持っていたらエントリが作成されます。<br/><br/>監査処理が完了すると、更新されていないデータベース項目(または入力されていない)が提示されないとみなされます。 インフォメーション <code>current</code> この項目の属性は、 <i>ログイン</i> change_log エントリが生成されます。<br/><br/>そこで、現在何かがインストールされているかどうかを判断することができます。現在の列は <i>ログイン</i>お問い合わせ<br/><br/>何かが最初に検出されたときに判断できます。 <i>ファースト_ティーン</i>お問い合わせ<br/><br/>初期監査後に何かがインストールされたかどうかを判断できます。最初に見たのはコンポーネントとデバイステーブルが異なります。<br/><br/>現在インストールされていないかどうかを判断できますが、以前は - 現在の = <i>ログイン</i>お問い合わせ<br/><br/>アイテムを検知した最後の時間 - last_seen を決定できます。<br/><br/>任意の時点では、システム上にあるものを決定することができます - 監査_logテーブルを使用して、first_seen と last_seen に基づいて、関連するコンポーネントを選択します。<br/><br/>各セクションとマッチングキーの列は以下の通りです。<br/><br/>注 - 以下にいくつかの例外があります。<br/><br/>*1 - ネットワークカードの場合、コンピュータがVMware Esxマシンの場合、net_indexと接続列も使用されます。<br/><br/>※2 - パーティションの場合、f は AIX マシンで、パーティション名を使用します。';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudITは、ITや関連アセットの詳細や構成を追跡し、報告するプログラムです。 Open-AudIT は <i>あなたのネットワークで何が?</i>, 設定方法と変更があったら. Open-AudITは、デバイスディスカバリー、IT監査、在庫管理の自動化をそのままに、洗練された柔軟性と使いやすいプラットフォームを提供します。';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'オープン・オード 複数のデバイスの属性を一度に簡単に編集できます。';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'オープン・オード IT は、ファイルやアップロード結果などを作成できる特定のディレクトリ権限が必要です。 お問い合わせ';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudITは多くの組み込みのクエリを提供し、自分で作成するのは簡単です。';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'オープン・オード 管理者、org_admin、およびユーザーのための組み込みロールでIT船。<br/><br/>一般的に、Open-AudITアプリケーション自体の管理者であるユーザは、管理者と可能なorg_adminロールを持っている必要があります。<br/><br/>複数のロールを持つことができます。 ユーザがユーザとorg_adminのロールを持っている場合、ユーザがこのパーミッションを付与するので、 org_adminがこのパーミッションを付与するので、そのパーミッションを生成することができます。<br/><br/>管理者の役割は、構成、データベース、グループ、ldapサーバー、ログ、クエリ、ロールなどのコレクションへのアクセスを可能にします。 アプリケーション全体に影響を及ぼすグローバルアイテム。<br/><br/>org_admin ロールは通常、org_id 列を含む任意のコレクションのアクションを作成、読み込み、更新、削除することができます。 上記のコレクションの一部を除いて、事実上すべてのデータが含まれている <code>org_id</code> カラム。<br/><br/>ユーザーのロールは、一般的に、org_id 列のすべての項目へのアクセスのみを読み込みます。';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'オープン・オード 管理者、org_admin、およびユーザーのための組み込みロールでIT船。<br/><br/>一般的に、Open-AudITアプリケーション自体の管理者であるユーザは、管理者と可能なorg_adminロールを持っている必要があります。<br/><br/>複数のロールを持つことができます。 ユーザがユーザとorg_adminのロールを持っている場合、ユーザがこのパーミッションを付与するので、 org_adminがこのパーミッションを付与するので、そのパーミッションを生成することができます。<br/><br/>管理者の役割は、構成、データベース、グループ、ldapサーバー、ログ、クエリ、ロールなどのコレクションへのアクセスを可能にします。 アプリケーション全体に影響を及ぼすグローバルアイテム。<br/><br/>org_admin ロールは通常、org_id 列を含む任意のコレクションのアクションを作成、読み込み、更新、削除することができます。 上記のコレクションの一部を除き、事実上すべてのデータには、org_id カラムが含まれます。<br/><br/>ユーザーのロールは、一般的に、org_id 列のすべての項目へのアクセスのみを読み込みます。';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT は、いくつかの事前構成済みのダッシュボードで出荷します。 プロフェッショナルなユーザーの場合、これら2つから選択し、ログオン時にデフォルトページとして設定できます。 エンタープライズユーザーの場合、5つの事前構成済みのダッシュボードから選択できるだけでなく、自分で作成する機能もあります。';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = '64bit WindowsにOpen-AudITをインストールする必要があります <strong>サーバー</strong> システムのみ。 Windows 10およびWindows 11はあります <strong>コメントはありません</strong> サポート';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT は、ディスカバリー機能で Nmap を使用します。 Nmapは、オープンポート用のデバイスをプローブします。 装置は働く港のための開いたと理想的に答えるべきです。 デバイスは、多くの場合、これを応答しません。 回答内容は下記の通りです。';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT は、ディスカバリー機能で Nmap を使用します。 Nmap がなければ、Open-AudIT は正しく機能しません。 Open-AudIT は、Nmap をインストールし、Discovery Web ページでテストします。 Open-AudITとNmapに関する詳細情報はこちら';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT は、ディスカバリー機能で Nmap を使用します。 Nmap がなければ、Open-AudIT は正しく機能しません。 Open-AudIT は、Nmap をインストールし、Discovery Web ページでテストします。';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'オープン・オード IT は、資格情報を使用してデバイスにアクセスします。 これらは暗号化され、保存されます。';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT は、オーストラリア語で英語を話すことで書かれました。 アプリケーション内のすべてが英語の単語を使用しています。 しかし、Open-AudITは、ディスプレイの複数の言語を常にサポートしています。 これらの翻訳は、開発者が提供されるすべての翻訳の言語をネイティブに話さないため、常に正しいわけではありません。<br/><br/>翻訳で何かが正しいかどうかはどうすればよいですか?';

$GLOBALS["lang"]['OpenLDAP'] = 'ダウンロード';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScapのインストール';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'サポートチケットを開く?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap ユーザー Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap ユーザー Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap ユーザー メンバーシップ Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap ユーザー メンバーシップ Attribute';

$GLOBALS["lang"]['open|filtered'] = 'オープン|フィルター';

$GLOBALS["lang"]['Open|filtered'] = 'オープン|フィルター';

$GLOBALS["lang"]['Operating System'] = 'オペレーティング システム';

$GLOBALS["lang"]['Operating System Family Contains'] = 'オペレーティング システム家族は含んでいます';

$GLOBALS["lang"]['Operating Systems'] = 'オペレーティングシステム';

$GLOBALS["lang"]['Operators'] = 'オペレータ';

$GLOBALS["lang"]['optical'] = '光学';

$GLOBALS["lang"]['Optical'] = '光学';

$GLOBALS["lang"]['Optimized'] = '最適化された';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'オプション #1 - データの変更';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Option #2 - 翻訳ファイルの変更';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'オプションのエージェントベースの監査';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT で監査するオプションバージョン。 ワイルドカードとしてパーセント記号%を使用してください。';

$GLOBALS["lang"]['options'] = 'オプション';

$GLOBALS["lang"]['Options'] = 'オプション';

$GLOBALS["lang"]['Options, options, options'] = 'オプション、オプション、オプション';

$GLOBALS["lang"]['Or'] = 'または';

$GLOBALS["lang"]['Or select from the below fields.'] = 'または以下のフィールドから選択してください。';

$GLOBALS["lang"]['org_descendants'] = 'ラグデセンド';

$GLOBALS["lang"]['Org Descendants'] = 'ラグデセンド';

$GLOBALS["lang"]['org_id'] = 'ラグID';

$GLOBALS["lang"]['Org ID'] = 'ラグID';

$GLOBALS["lang"]['Organisation'] = '組織図';

$GLOBALS["lang"]['organisation'] = '組織図';

$GLOBALS["lang"]['Organisation Descendants'] = '組織の住人';

$GLOBALS["lang"]['Organisations'] = '組織図';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = '組織は、カスタムフィールドとオープンコアを使用して、発見されたすべてのデバイスに対して保存される詳細のレベルを拡張し、高めることができます。これにより、CMDB、イベント管理、およびチケットシステムに簡単に統合できます。';

$GLOBALS["lang"]['orgs'] = 'オラグ';

$GLOBALS["lang"]['Orgs'] = 'オラグ';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs 名前';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Open-AudIT の Orgs は重要な項目です。 ユーザはプライマリ Org とアクセスできる Orgs のリストを持っています。 ユーザーは、この機能を割り当てられたロールのリストと組み合わせて、アクセスした Orgs に割り当てられた項目に取り込むことができるアクションを定義します。 ユーザーの組み合わせ <i>ログイン</i> そして、 <i>ロール</i> Open-AudIT内でできることを定義し、できない。<br/><br/>Open-AudIT のほとんどの項目は Org. 装置、場所、ネットワーク、等に割り当てられます。<br/><br/>オラグは子供オラグを持つことができます。 組織図(ツリー)構造を考える。 ユーザが特定の Org へのアクセス権を持っている場合、ほとんどの時間 (常にではありません) 彼らはまた、その Orgs の子孫へのアクセスを持っています。';

$GLOBALS["lang"]['orientation'] = 'オリエンテーション';

$GLOBALS["lang"]['Orientation'] = 'オリエンテーション';

$GLOBALS["lang"]['os'] = 'ツイート';

$GLOBALS["lang"]['Os'] = 'ツイート';

$GLOBALS["lang"]['os_arch'] = 'Os アーチ';

$GLOBALS["lang"]['Os Arch'] = 'Os アーチ';

$GLOBALS["lang"]['os_bit'] = 'Osビット';

$GLOBALS["lang"]['Os Bit'] = 'Osビット';

$GLOBALS["lang"]['os_cpe'] = 'OsのCpe';

$GLOBALS["lang"]['Os Cpe'] = 'OsのCpe';

$GLOBALS["lang"]['os_display_version'] = 'Osの表示版';

$GLOBALS["lang"]['Os Display Version'] = 'Osの表示版';

$GLOBALS["lang"]['os_family'] = 'Osファミリー';

$GLOBALS["lang"]['Os Family'] = 'Osファミリー';

$GLOBALS["lang"]['os_group'] = 'Osグループ';

$GLOBALS["lang"]['Os Group'] = 'Osグループ';

$GLOBALS["lang"]['os_installation_date'] = 'Osインストール日';

$GLOBALS["lang"]['Os Installation Date'] = 'Osインストール日';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os の Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os の Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Osライセンス';

$GLOBALS["lang"]['Os License'] = 'Osライセンス';

$GLOBALS["lang"]['os_license_code'] = 'Osライセンスコード';

$GLOBALS["lang"]['Os License Code'] = 'Osライセンスコード';

$GLOBALS["lang"]['os_license_mode'] = 'Osライセンスモード';

$GLOBALS["lang"]['Os License Mode'] = 'Osライセンスモード';

$GLOBALS["lang"]['os_license_type'] = 'Osライセンスタイプ';

$GLOBALS["lang"]['Os License Type'] = 'Osライセンスタイプ';

$GLOBALS["lang"]['os_name'] = 'Os の名前';

$GLOBALS["lang"]['Os Name'] = 'Os の名前';

$GLOBALS["lang"]['os_version'] = 'Osバージョン';

$GLOBALS["lang"]['Os Version'] = 'Osバージョン';

$GLOBALS["lang"]['Other'] = 'その他';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'その制限以外にも、必要に応じて属性を自由に選択できます。 メニューを使用するのは良い考えです';

$GLOBALS["lang"]['Others'] = 'その他';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = '当社のデフォルトインテグレーションにより、外部から提供されたデバイスへの検出も可能になります。 そのため、デフォルトインテグレーションの既定のディストリビューションを箱から出荷します。 これらはデフォルトのマッチングルールを使用しますが、IPアドレスでのマッチングを有効にします。';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = '私達の例は使用します <i>タイプ:</i> カラム。';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = '当社のフレームワークは、処理のためにファイルをアップロードし、それらを削除します。 提出された監査結果などを考える';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = '初期の統合リリースとの私たちの目標は、NMISがOpen-AudIT統合のために特別にありました <i>仕事だけ</i>お問い合わせ Linux でプログラムを使用している場合は、文字通り 1 つのボタンをクリックし、統合を実行できます。 お問い合わせ つまり、インテグレーション自体が非常に構成可能です。そのため、何かがあなたの好みにならない場合、簡単に変更できます。';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Vulnerabilitiesという新しい機能は、どんなデバイスがCVE(Common Vulnerability Exposure)の影響を受けているかを迅速に判断する機能を提供します。<br/><br/>まず、Nist NVD フィードから出力を常に消費します。 これを取り、いくつかの制限を適用し、影響を受けたプログラムを抽出し、レポートのSQLクエリを作成します。 Open-AudITインスタンスは、FirstWave にリーチし、定期的に新しい脆弱性を要求します。 新しい脆弱性レコードを受け取ると、データベースと保存された結果に対して実行されます。 デバイスが処理されるたびに、一致する脆弱性が再び実行され、結果が保存されます。 これは、脆弱性リストを表示する際には、影響を受けたすべてのデバイスを計算する必要はありません。結果は既にあります。 個々の脆弱性の記録を見ると、この一意の脆弱性に対する結果を再計算します。<br/><br/>ですから、常に最新です!<br/><br/>これに加えて、毎日すべてのデバイスに対するすべての脆弱性の結果を計算します(通常は静かな時間で、2am)。<br/><br/>Open-AudIT のインスタンスでは、どのベンダーが気にしているかを選択できます。 i.e. 使用するソフトウェアやインストールされていないベンダーから脆弱性レコードを取得する使用はありません。 デフォルトでは、当社のベンダーリストは、Adobe、Apple、Cisco、Google、Microsoft、Mozilla、Redhatです。<br/><br/>このすべてが非常に単純に聞こえますが、舞台の背後にある <b>お問い合わせ</b> お問い合わせ 例えば、CVEレコードには影響を受けるソフトウェアのリストが含まれていますが、そのソフトウェア名は、コンピュータを監査する際に受け取るものと一致しません。 よい例は Apache です。 通常、CVEレコードは、影響を受けたソフトウェアが http_server であると言う。 実際のところ、apache2(Ubuntu)、httpd(Redhat)、Apache HTTP Server(Windows)などです。 ですから、コンピュータを尋ねるときに受け取るプログラムの実際の名前が何であるかを最初に決定しなければなりません。複数の名前があるかもしれません。 その後、CVEレコードを解析し、一致するSQLステートメントを作成しなければなりません。 上記の複数のプログラム名、複数のバージョン、バージョン範囲、および複数の異なるソフトウェア(例えば、ThunderbirdとFirefoxは1つのCVE)で許可します。 そして、Open-AudITのインスタンスはこれを取る必要があり、 Orgsのフィルタリングも適用します。 そしてそれはちょうど単一のCVEです。 あなたが持っているCVEと持っていない決定について何か? リストにベンダーを追加するにはどうすればよいですか? お問い合わせ<br/><br/>通常のレポートと同様に、Vulnerabilitiesデータに基づいて、Dashboardsで利用可能ないくつかの新しいウィジェットもあります。';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'SSH対応のタイムアウト';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'WMI対応のタイムアウト';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'SNMP対応のタイムアウト';

$GLOBALS["lang"]['Our timeout for an audit script response'] = '監査スクリプト応答のタイムアウト';

$GLOBALS["lang"]['output'] = '出力';

$GLOBALS["lang"]['Output'] = '出力';

$GLOBALS["lang"]['outputs'] = '出力';

$GLOBALS["lang"]['Outputs'] = '出力';

$GLOBALS["lang"]['Overall severity score (0–10).'] = '全体的な重度のスコア(0～10)。';

$GLOBALS["lang"]['overwrite'] = 'ログイン';

$GLOBALS["lang"]['Overwrite'] = 'ログイン';

$GLOBALS["lang"]['owner'] = 'プロフィール';

$GLOBALS["lang"]['Owner'] = 'プロフィール';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExecは、SysInternal/Microsoftsの人気のPsExecプログラムを自由に再配布可能です。 PAExec は、PsExec の置換のドロップを目的とするので、コマンドラインの使い方は同一で、追加のオプションもサポートしています。 この作品は、もともとTalha Tariqs RemComに触発されました。';

$GLOBALS["lang"]['PHP'] = 'ログイン';

$GLOBALS["lang"]['POD'] = 'ポッド';

$GLOBALS["lang"]['POSTing data'] = 'データの保存';

$GLOBALS["lang"]['Package'] = 'パッケージ';

$GLOBALS["lang"]['packages'] = 'パッケージ';

$GLOBALS["lang"]['Packages'] = 'パッケージ';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'パッケージはのような事の報告に使用されます <i>禁止されたソフトウェア</i>、サーバー等でAntiVirus。<br/><br/>Open-AudITは、アンチウィルス、ファイアウォールなどのソフトウェアの状態をデテインするために、リポジトリも供給したウィジェットを提供します。';

$GLOBALS["lang"]['pagefile'] = 'ページファイル';

$GLOBALS["lang"]['Pagefile'] = 'ページファイル';

$GLOBALS["lang"]['Pakistan'] = 'パキスタン';

$GLOBALS["lang"]['Palau'] = 'パラオ';

$GLOBALS["lang"]['Palestinian Territory'] = 'パレスチナ・テリトリー';

$GLOBALS["lang"]['Panama'] = 'パナマ';

$GLOBALS["lang"]['Papua New Guinea'] = 'パプアニューギニア';

$GLOBALS["lang"]['Paraguay'] = 'パラグアイ';

$GLOBALS["lang"]['Parameters'] = 'パラメーター';

$GLOBALS["lang"]['Paranoid'] = 'パラノイド';

$GLOBALS["lang"]['Parent'] = '親子';

$GLOBALS["lang"]['parent_id'] = '両親ID';

$GLOBALS["lang"]['Parent ID'] = '両親ID';

$GLOBALS["lang"]['parent_name'] = '保護者名';

$GLOBALS["lang"]['Parent Name'] = '保護者名';

$GLOBALS["lang"]['part_number'] = '部品番号';

$GLOBALS["lang"]['Part Number'] = '部品番号';

$GLOBALS["lang"]['part_of_domain'] = 'ドメインの一部';

$GLOBALS["lang"]['Part Of Domain'] = 'ドメインの一部';

$GLOBALS["lang"]['Partition'] = 'セッション';

$GLOBALS["lang"]['partition_count'] = 'パーティションカウント';

$GLOBALS["lang"]['Partition Count'] = 'パーティションカウント';

$GLOBALS["lang"]['partition_disk_index'] = 'パーティションディスクインデックス';

$GLOBALS["lang"]['Partition Disk Index'] = 'パーティションディスクインデックス';

$GLOBALS["lang"]['Pass'] = 'パス';

$GLOBALS["lang"]['Passed'] = '渡された';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = '受動の光学ローカル区域ネットワーク';

$GLOBALS["lang"]['Password'] = 'パスワード';

$GLOBALS["lang"]['password'] = 'パスワード';

$GLOBALS["lang"]['password_changeable'] = 'パスワード変更可能';

$GLOBALS["lang"]['Password Changeable'] = 'パスワード変更可能';

$GLOBALS["lang"]['password_disabled'] = 'パスワード 無効';

$GLOBALS["lang"]['Password Disabled'] = 'パスワード 無効';

$GLOBALS["lang"]['password_expires'] = 'パスワードの有効期限';

$GLOBALS["lang"]['Password Expires'] = 'パスワードの有効期限';

$GLOBALS["lang"]['password_last_changed'] = 'パスワード 最終変更';

$GLOBALS["lang"]['Password Last Changed'] = 'パスワード 最終変更';

$GLOBALS["lang"]['password_required'] = 'パスワード 必須';

$GLOBALS["lang"]['Password Required'] = 'パスワード 必須';

$GLOBALS["lang"]['patch_panel'] = 'パッチパネル';

$GLOBALS["lang"]['Patch Panel'] = 'パッチパネル';

$GLOBALS["lang"]['patch_panel_port'] = 'パッチ パネルの港';

$GLOBALS["lang"]['Patch Panel Port'] = 'パッチ パネルの港';

$GLOBALS["lang"]['path'] = 'パス';

$GLOBALS["lang"]['Path'] = 'パス';

$GLOBALS["lang"]['Performance'] = 'パフォーマンス';

$GLOBALS["lang"]['Performed'] = 'パフォーマンス';

$GLOBALS["lang"]['Permission'] = 'パーミッション';

$GLOBALS["lang"]['Permission Required'] = '許可 必須';

$GLOBALS["lang"]['permissions'] = 'パーミッション';

$GLOBALS["lang"]['Permissions'] = 'パーミッション';

$GLOBALS["lang"]['Persian'] = 'ペルシア語';

$GLOBALS["lang"]['Personal Area Network'] = 'パーソナルエリアネットワーク';

$GLOBALS["lang"]['Personal area network'] = 'パーソナルエリアネットワーク';

$GLOBALS["lang"]['Peru'] = 'ペルー';

$GLOBALS["lang"]['Philippines'] = 'フィリピン';

$GLOBALS["lang"]['phone'] = '電話番号';

$GLOBALS["lang"]['Phone'] = '電話番号';

$GLOBALS["lang"]['Physical CPUs'] = '物理CPU';

$GLOBALS["lang"]['physical_count'] = '物理的なカウント';

$GLOBALS["lang"]['Physical Count'] = '物理的なカウント';

$GLOBALS["lang"]['physical_depth'] = '物理的な深さ';

$GLOBALS["lang"]['Physical Depth'] = '物理的な深さ';

$GLOBALS["lang"]['physical_height'] = '物理的な高さ';

$GLOBALS["lang"]['Physical Height'] = '物理的な高さ';

$GLOBALS["lang"]['physical_width'] = '物理的な幅';

$GLOBALS["lang"]['Physical Width'] = '物理的な幅';

$GLOBALS["lang"]['picture'] = 'プロフィール';

$GLOBALS["lang"]['Picture'] = 'プロフィール';

$GLOBALS["lang"]['pid'] = 'ピッド';

$GLOBALS["lang"]['Pid'] = 'ピッド';

$GLOBALS["lang"]['Pie Chart'] = 'パイチャート';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'パイチャートは、名前やmy_name、説明、my_description、カウントを返す必要があります。';

$GLOBALS["lang"]['ping'] = 'ピン';

$GLOBALS["lang"]['Ping'] = 'ピン';

$GLOBALS["lang"]['Ping Target'] = 'ピンターゲット';

$GLOBALS["lang"]['Pitcairn Islands'] = 'ピッチェラン諸島';

$GLOBALS["lang"]['placement'] = '開催場所';

$GLOBALS["lang"]['Placement'] = '開催場所';

$GLOBALS["lang"]['Plan and conduct internal audits'] = '内部監査の計画と実施';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Open-AudIT管理者がログオンしてデータベースをアップグレードしてください。';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'ASAPにログインして変更してください。';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Open-AudIT Server(WindowsまたはLinux)にログインし、実行してください。 <code>nslookup IP_ADDRESS_OF_TARGET</code> コマンドプロンプトまたはシェルで。 IP を名前に解決できる必要があります。';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '選択ボックスはテキスト入力ボックスを上書きします。';

$GLOBALS["lang"]['Please see the FAQ'] = 'よくある質問';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Opmantekでサポート連絡先に3つのファイルをすべて送信し、問題を説明してください。';

$GLOBALS["lang"]['Please set using'] = 'お問い合わせ';

$GLOBALS["lang"]['Please visit the homepage at'] = '詳しくはホームページをご覧ください。';

$GLOBALS["lang"]['pod'] = 'ポッド';

$GLOBALS["lang"]['Pod'] = 'ポッド';

$GLOBALS["lang"]['Poland'] = 'ポーランド';

$GLOBALS["lang"]['Policies'] = 'ポリシー';

$GLOBALS["lang"]['Policies have exceptions.'] = 'ポリシーには例外があります。';

$GLOBALS["lang"]['policy'] = 'プライバシーポリシー';

$GLOBALS["lang"]['Policy'] = 'プライバシーポリシー';

$GLOBALS["lang"]['policy_id'] = 'ポリシーID';

$GLOBALS["lang"]['Policy ID'] = 'ポリシーID';

$GLOBALS["lang"]['Policy Result'] = 'ポリシー結果';

$GLOBALS["lang"]['Policy Results'] = '政策提言';

$GLOBALS["lang"]['Polish'] = 'ポーランド語';

$GLOBALS["lang"]['Polite'] = 'ポライト';

$GLOBALS["lang"]['Populate the with values provided below:'] = '以下に示した値で入力します。';

$GLOBALS["lang"]['Populated by audit.'] = '監査による人口';

$GLOBALS["lang"]['Populated by discovery and audit.'] = '発見と監査によってポップアップ.';

$GLOBALS["lang"]['Populated dynamically.'] = '動的にポピュレートされた。';

$GLOBALS["lang"]['Populated from DNS.'] = 'DNS から出力される。';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'SNMPの発見からポピュレーション。';

$GLOBALS["lang"]['Populated from device audits.'] = 'デバイスの監査からポップアップ。';

$GLOBALS["lang"]['Populated from hostname.'] = 'ホスト名から出力される。';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Linux 上でマシン ID から出力される。';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = '既定のルートまたは検出されたIPのIPからポップアップします。';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'hostname コマンドから出力されます。';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'JSON 表現の外部システムから追加のデータが出力されます。';

$GLOBALS["lang"]['port'] = 'ポートレート';

$GLOBALS["lang"]['Port'] = 'ポートレート';

$GLOBALS["lang"]['port_name'] = '港の名前';

$GLOBALS["lang"]['Port Name'] = '港の名前';

$GLOBALS["lang"]['port_number'] = 'ポート番号';

$GLOBALS["lang"]['Port Number'] = 'ポート番号';

$GLOBALS["lang"]['ports_in_order'] = '順序の港';

$GLOBALS["lang"]['Ports In Order'] = '順序の港';

$GLOBALS["lang"]['ports_stop_after'] = '港はの後で停止します';

$GLOBALS["lang"]['Ports Stop After'] = '港はの後で停止します';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'ポルトガル、ポルトガル共和国';

$GLOBALS["lang"]['Portuguese'] = 'ポルトガル語';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'ポルトガル語(ブラジル)';

$GLOBALS["lang"]['position'] = 'ポジション';

$GLOBALS["lang"]['Position'] = 'ポジション';

$GLOBALS["lang"]['Post-Certification'] = 'ポスト認証';

$GLOBALS["lang"]['postcode'] = '郵便番号';

$GLOBALS["lang"]['Postcode'] = '郵便番号';

$GLOBALS["lang"]['power_circuit'] = 'パワー回路';

$GLOBALS["lang"]['Power Circuit'] = 'パワー回路';

$GLOBALS["lang"]['power_sockets'] = 'パワーソケット';

$GLOBALS["lang"]['Power Sockets'] = 'パワーソケット';

$GLOBALS["lang"]['Predictable'] = '予測可能';

$GLOBALS["lang"]['Preferences'] = 'リファレンス';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = '3年ごとに再認証の準備';

$GLOBALS["lang"]['Prerequisites'] = '前提条件';

$GLOBALS["lang"]['Prerequisites and Tests'] = '前提条件と試験';

$GLOBALS["lang"]['present'] = 'プレゼント';

$GLOBALS["lang"]['Present'] = 'プレゼント';

$GLOBALS["lang"]['previous_value'] = '前の値';

$GLOBALS["lang"]['Previous Value'] = '前の値';

$GLOBALS["lang"]['primary'] = 'プライマー';

$GLOBALS["lang"]['Primary'] = 'プライマー';

$GLOBALS["lang"]['Primary Key'] = 'プライマリキー';

$GLOBALS["lang"]['print_queue'] = 'プリントキュー';

$GLOBALS["lang"]['Print Queue'] = 'プリントキュー';

$GLOBALS["lang"]['printer_color'] = 'プリンター色';

$GLOBALS["lang"]['Printer Color'] = 'プリンター色';

$GLOBALS["lang"]['printer_duplex'] = 'プリンター二重';

$GLOBALS["lang"]['Printer Duplex'] = 'プリンター二重';

$GLOBALS["lang"]['printer_port_name'] = 'プリンター ポートの名前';

$GLOBALS["lang"]['Printer Port Name'] = 'プリンター ポートの名前';

$GLOBALS["lang"]['printer_shared'] = 'プリンター共有';

$GLOBALS["lang"]['Printer Shared'] = 'プリンター共有';

$GLOBALS["lang"]['printer_shared_name'] = 'プリンター共有名';

$GLOBALS["lang"]['Printer Shared Name'] = 'プリンター共有名';

$GLOBALS["lang"]['priority'] = '優先順位';

$GLOBALS["lang"]['Priority'] = '優先順位';

$GLOBALS["lang"]['Privacy Passphrase'] = 'プライバシーパスフレーズ';

$GLOBALS["lang"]['Privacy Protocol'] = 'プライバシープロトコル';

$GLOBALS["lang"]['privileges_required'] = '必要な特典';

$GLOBALS["lang"]['Privileges Required'] = '必要な特典';

$GLOBALS["lang"]['processor'] = 'プロセッサー';

$GLOBALS["lang"]['Processor'] = 'プロセッサー';

$GLOBALS["lang"]['processor_count'] = 'プロセッサ数';

$GLOBALS["lang"]['Processor Count'] = 'プロセッサ数';

$GLOBALS["lang"]['processor_slot_count'] = 'プロセッサ スロット計算';

$GLOBALS["lang"]['Processor Slot Count'] = 'プロセッサ スロット計算';

$GLOBALS["lang"]['processor_type'] = 'プロセッサのタイプ';

$GLOBALS["lang"]['Processor Type'] = 'プロセッサのタイプ';

$GLOBALS["lang"]['Processors'] = 'プロセッサ';

$GLOBALS["lang"]['product_name'] = '商品名称';

$GLOBALS["lang"]['Product Name'] = '商品名称';

$GLOBALS["lang"]['Product Name Match from CPE: '] = '製品名 CPEからの一致: ';

$GLOBALS["lang"]['products'] = '製品情報';

$GLOBALS["lang"]['Products'] = '製品情報';

$GLOBALS["lang"]['Professional'] = 'プロフェッショナル';

$GLOBALS["lang"]['profile'] = 'プロフィール';

$GLOBALS["lang"]['Profile'] = 'プロフィール';

$GLOBALS["lang"]['program'] = 'プログラム';

$GLOBALS["lang"]['Program'] = 'プログラム';

$GLOBALS["lang"]['Properties'] = 'プロパティ';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'プロモーション HighChartsを変更したい場合は、';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = '情報の機密性、完全性、可用性を保護します';

$GLOBALS["lang"]['protocol'] = 'プロトコル';

$GLOBALS["lang"]['Protocol'] = 'プロトコル';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = '説明を提供し、期限を期限切れにします。';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = '名前を提供-私達はすぐに開いたAudIT を再開しました、しかしあなたが好きなものを名前を付けることができます。<br/>Open-AudIT フォームから、値をコピーします。 <i>リダイレクト URI</i> フィールドに貼り付けて貼り付ける <i>サインイン リダイレクト URI</i> OKTAのフィールド。<br/>サインアウト リダイレクト URI はオプションですが、 open-audit/index を使用できます。 php/logout と Open-AudIT サーバ http アドレス, スクリーンショットのように.<br/>普通あなたの Open-AudIT URL は、';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = '正しい資格情報を提供, デバイスシードディスカバリーは、次のように動作します';

$GLOBALS["lang"]['provider'] = 'プロバイダー';

$GLOBALS["lang"]['Provider'] = 'プロバイダー';

$GLOBALS["lang"]['published'] = 'ニュース';

$GLOBALS["lang"]['Published'] = 'ニュース';

$GLOBALS["lang"]['published_date'] = '発行日';

$GLOBALS["lang"]['Published Date'] = '発行日';

$GLOBALS["lang"]['publisher'] = 'パブリッシャー';

$GLOBALS["lang"]['Publisher'] = 'パブリッシャー';

$GLOBALS["lang"]['Puerto Rico'] = 'プエルトリコ';

$GLOBALS["lang"]['Purchase'] = '購入方法';

$GLOBALS["lang"]['purchase_amount'] = '購入金額';

$GLOBALS["lang"]['Purchase Amount'] = '購入金額';

$GLOBALS["lang"]['purchase_cost_center'] = '購入コストセンター';

$GLOBALS["lang"]['Purchase Cost Center'] = '購入コストセンター';

$GLOBALS["lang"]['purchase_count'] = '購入回数';

$GLOBALS["lang"]['Purchase Count'] = '購入回数';

$GLOBALS["lang"]['purchase_date'] = '購入日';

$GLOBALS["lang"]['Purchase Date'] = '購入日';

$GLOBALS["lang"]['purchase_invoice'] = '請求書の購入';

$GLOBALS["lang"]['Purchase Invoice'] = '請求書の購入';

$GLOBALS["lang"]['purchase_order'] = '購入注文';

$GLOBALS["lang"]['Purchase Order'] = '購入注文';

$GLOBALS["lang"]['purchase_order_number'] = '購入注文番号';

$GLOBALS["lang"]['Purchase Order Number'] = '購入注文番号';

$GLOBALS["lang"]['purchase_service_contract_number'] = '購入サービス契約番号';

$GLOBALS["lang"]['Purchase Service Contract Number'] = '購入サービス契約番号';

$GLOBALS["lang"]['purchase_vendor'] = '購入ベンダー';

$GLOBALS["lang"]['Purchase Vendor'] = '購入ベンダー';

$GLOBALS["lang"]['purpose'] = 'ミッション';

$GLOBALS["lang"]['Purpose'] = 'ミッション';

$GLOBALS["lang"]['Qatar'] = 'カタール';

$GLOBALS["lang"]['queries'] = 'メニュー';

$GLOBALS["lang"]['Queries'] = 'メニュー';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Open-AudITの重要な部分です。 それらはあなたが発見したすべてのデバイスデータから有意義な情報を得ることを可能にするものです。 要約とグループとともに、重要な情報を抽出するための強力なメカニズムを提供します。';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'グループのためのクエリは、グループのみを選択する必要があります';

$GLOBALS["lang"]['Query'] = 'クエリ';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'この Active Directory 属性を最初にクエリして、ユーザーの作業単位を決定します。';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'この Active Directory 属性を 2 番目のクエリで、ユーザーの作業単位を決定します。';

$GLOBALS["lang"]['queue'] = 'キュー';

$GLOBALS["lang"]['Queue'] = 'キュー';

$GLOBALS["lang"]['Queue Limit'] = 'キューリミット';

$GLOBALS["lang"]['Queued Device Audits'] = 'キュードデバイス監査';

$GLOBALS["lang"]['Queued IP Scans'] = 'キュードIPスキャン';

$GLOBALS["lang"]['Queued Items'] = 'キューイングアイテム';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'アクティブディレクトリとOpenLDAP用のRBAC';

$GLOBALS["lang"]['RU Start'] = 'RUスタート';

$GLOBALS["lang"]['RX Bitrate'] = 'RXビットレート';

$GLOBALS["lang"]['RX Freq'] = 'RXのFreq';

$GLOBALS["lang"]['RX Level'] = 'RX レベル';

$GLOBALS["lang"]['RX Power'] = 'RXパワー';

$GLOBALS["lang"]['RX Profile'] = 'RXプロファイル';

$GLOBALS["lang"]['Rack'] = 'ラック';

$GLOBALS["lang"]['rack_devices'] = 'ラックデバイス';

$GLOBALS["lang"]['Rack Devices'] = 'ラックデバイス';

$GLOBALS["lang"]['rack_id'] = 'ラックID';

$GLOBALS["lang"]['Rack ID'] = 'ラックID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'ラック管理とレポーティング';

$GLOBALS["lang"]['Racks'] = 'ラック';

$GLOBALS["lang"]['racks'] = 'ラック';

$GLOBALS["lang"]['radio'] = 'ラジオ';

$GLOBALS["lang"]['Radio'] = 'ラジオ';

$GLOBALS["lang"]['Radio MAC'] = 'ラジオ MAC';

$GLOBALS["lang"]['rationale'] = 'リエーター';

$GLOBALS["lang"]['Rationale'] = 'リエーター';

$GLOBALS["lang"]['raw'] = 'ログイン';

$GLOBALS["lang"]['Raw'] = 'ログイン';

$GLOBALS["lang"]['read'] = '採用情報';

$GLOBALS["lang"]['Read'] = '採用情報';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Open-AudIT Wiki のオンラインドキュメントをお読みください。';

$GLOBALS["lang"]['Read through the log file at'] = 'ログファイルを読み込む';

$GLOBALS["lang"]['Received'] = '受付開始';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = '最近、私たちは質問をしました - あなたは他の同様のプログラムよりもより安全なOpen-AudITを検討していますか? ほとんどのことと同様に、答えは <i>それは依存します</i>お問い合わせ<br/><br/>オープン・オード ITは、非常に安全であるように、このような方法で操作することができます。 しかし、コンピュータベースのセキュリティでいつものように、何かを作るのがより安全です、それが使用することになるより不便。 古いフレーズ <i>最も安全なコンピュータは、オフとカップボードにある1つです<i> お問い合わせ<br/><br/>以下では、セキュリティを高めるOpen-AudITで使用できるオプションについて説明します。 Open-AudIT 内のほとんどの項目と同様に、これらはオプションであり、必須ではありません。 セキュリティは、あなた次第です。</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = '再認証: 3年ごとに必須';

$GLOBALS["lang"]['Red Query'] = '赤いクエリ';

$GLOBALS["lang"]['Redirect URI'] = 'リダイレクト URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uriをリダイレクトする';

$GLOBALS["lang"]['Redirect Uri'] = 'Uriをリダイレクトする';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'データ侵害やサイバー脅威のリスクを軽減';

$GLOBALS["lang"]['references'] = '参考文献';

$GLOBALS["lang"]['References'] = '参考文献';

$GLOBALS["lang"]['region'] = '地域紹介';

$GLOBALS["lang"]['Region'] = '地域紹介';

$GLOBALS["lang"]['registered_user'] = '登録ユーザー';

$GLOBALS["lang"]['Registered User'] = '登録ユーザー';

$GLOBALS["lang"]['Rejected'] = '注入される';

$GLOBALS["lang"]['rel'] = 'ログイン';

$GLOBALS["lang"]['Rel'] = 'ログイン';

$GLOBALS["lang"]['Release'] = 'リリース';

$GLOBALS["lang"]['remediation'] = 'インフォメーション';

$GLOBALS["lang"]['Remediation'] = 'インフォメーション';

$GLOBALS["lang"]['Remote'] = 'リモート';

$GLOBALS["lang"]['remote_address'] = 'リモートアドレス';

$GLOBALS["lang"]['Remote Address'] = 'リモートアドレス';

$GLOBALS["lang"]['remote_port'] = 'リモートポート';

$GLOBALS["lang"]['Remote Port'] = 'リモートポート';

$GLOBALS["lang"]['Remove'] = '削除';

$GLOBALS["lang"]['Remove Exception'] = '例外を削除';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = '完全に発見され、Windows PCを監査するまで繰り返します。';

$GLOBALS["lang"]['Report'] = 'レポート';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'デバイス、ネットワークなどのレポート';

$GLOBALS["lang"]['reportable'] = 'レポート可能';

$GLOBALS["lang"]['Reportable'] = 'レポート可能';

$GLOBALS["lang"]['Reports'] = 'レポート';

$GLOBALS["lang"]['request'] = 'リクエスト';

$GLOBALS["lang"]['Request'] = 'リクエスト';

$GLOBALS["lang"]['Request Method'] = 'リクエスト方法';

$GLOBALS["lang"]['Request Vulnerability'] = '脆弱性の要求';

$GLOBALS["lang"]['Request a Specific CVE'] = '特定のリクエスト ログイン';

$GLOBALS["lang"]['requested'] = 'リクエスト';

$GLOBALS["lang"]['Requested'] = 'リクエスト';

$GLOBALS["lang"]['require_port'] = '港を要求して下さい';

$GLOBALS["lang"]['Require Port'] = '港を要求して下さい';

$GLOBALS["lang"]['Require an Open Port'] = '開いた港を要求して下さい';

$GLOBALS["lang"]['Required'] = 'お問い合わせ';

$GLOBALS["lang"]['Required AWS user permissions'] = 'AWSユーザ権限が必要';

$GLOBALS["lang"]['Required Fields'] = '必須フィールド';

$GLOBALS["lang"]['Reset'] = 'リセット';

$GLOBALS["lang"]['Reset All Data'] = 'すべてのデータをリセットする';

$GLOBALS["lang"]['Reset to Default'] = 'デフォルトへのリセット';

$GLOBALS["lang"]['resource'] = 'リソース';

$GLOBALS["lang"]['Resource'] = 'リソース';

$GLOBALS["lang"]['Resource Name'] = 'リソース名';

$GLOBALS["lang"]['Resources'] = 'リソース';

$GLOBALS["lang"]['response'] = 'フィードバック';

$GLOBALS["lang"]['Response'] = 'フィードバック';

$GLOBALS["lang"]['responsibility'] = 'ミッション';

$GLOBALS["lang"]['Responsibility'] = 'ミッション';

$GLOBALS["lang"]['Restore my Licenses'] = 'ライセンスの復元';

$GLOBALS["lang"]['Restrict to Private'] = 'プライベートへの制限';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Subnetへの制限';

$GLOBALS["lang"]['result'] = '結果発表';

$GLOBALS["lang"]['Result'] = '結果発表';

$GLOBALS["lang"]['Resulting Function'] = '結果機能';

$GLOBALS["lang"]['Results'] = '結果発表';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'デバイスのリストを取得する';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Windows 2008のようなOS名でデバイスのリストを取得する';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'id 88でデバイスに関するすべての詳細を取得します。';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Windowsを実行しているすべてのデバイスを取得します。';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = '標準列ですべてのデバイスを取得する';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'ホスト名で注文したWindowsを実行している最初の10デバイスを取得する';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'プロパティID、ip、ホスト名、ドメイン、すべてのデバイスからタイプを取得する';

$GLOBALS["lang"]['retrieved'] = 'フィードバック';

$GLOBALS["lang"]['Retrieved'] = 'フィードバック';

$GLOBALS["lang"]['retrieved_ident'] = '取得したインデント';

$GLOBALS["lang"]['Retrieved Ident'] = '取得したインデント';

$GLOBALS["lang"]['retrieved_name'] = '取得された名前';

$GLOBALS["lang"]['Retrieved Name'] = '取得された名前';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'デバイスから取得 - Windows:Win32_ComputerSystemProduct、Linux:dmidecode、 MacOS:system_profiler、ESXi:vim-cmd hostsvc/hostsummary、HP-UX:machinfo、 Solaris:smbios、AIX:uname。';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'クレデンシャルのリストを取得する';

$GLOBALS["lang"]['Retrieving or Creating'] = '取得または作成';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = '列のデフォルトセット(devices.id, device.icon, device.type, device.name, device.ip, device.dns_fqdn, device.identification, device.description, device.manufacturer, device.os_family, device.status)でデバイスのコレクションを返します。';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'ルーターにインストールされているすべてのモジュールのリストを返します';

$GLOBALS["lang"]['Return an individual device details'] = '個々のデバイスを返す';

$GLOBALS["lang"]['Returns a list of {collection}.'] = '{collection} のリストを返します。';

$GLOBALS["lang"]['Returns a {collection} details.'] = '{collection} の詳細を返します。';

$GLOBALS["lang"]['Reunion'] = 'レユニオン';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001の要件に対する現在の慣行のレビュー';

$GLOBALS["lang"]['revision'] = 'リビジョン';

$GLOBALS["lang"]['Revision'] = 'リビジョン';

$GLOBALS["lang"]['risk_assesment_result'] = 'リスク評価結果';

$GLOBALS["lang"]['Risk Assesment Result'] = 'リスク評価結果';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'リスク評価と治療';

$GLOBALS["lang"]['Risk Management'] = 'リスクマネジメント';

$GLOBALS["lang"]['Role'] = 'ログイン';

$GLOBALS["lang"]['roles'] = 'ロール';

$GLOBALS["lang"]['Roles'] = 'ロール';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Open-AudIT Enterprise ライセンスがあれば、ロールの作成と編集ができます。 ほとんどのユーザーの場合、ロールのデフォルトセットは、必要なすべてのものでなければなりません。';

$GLOBALS["lang"]['Romania'] = 'ルーマニア';

$GLOBALS["lang"]['Romanian'] = 'ルーマニア';

$GLOBALS["lang"]['Room'] = '宿泊プラン';

$GLOBALS["lang"]['route'] = '交通アクセス';

$GLOBALS["lang"]['Route'] = '交通アクセス';

$GLOBALS["lang"]['Row'] = 'ログイン';

$GLOBALS["lang"]['Row Count'] = '列数';

$GLOBALS["lang"]['row_position'] = '列の位置';

$GLOBALS["lang"]['Row Position'] = '列の位置';

$GLOBALS["lang"]['Rows'] = 'ログイン';

$GLOBALS["lang"]['ru_height'] = 'ルーの高さ';

$GLOBALS["lang"]['Ru Height'] = 'ルーの高さ';

$GLOBALS["lang"]['ru_start'] = 'ルースタート';

$GLOBALS["lang"]['Ru Start'] = 'ルースタート';

$GLOBALS["lang"]['rule_group'] = 'ルールグループ';

$GLOBALS["lang"]['Rule Group'] = 'ルールグループ';

$GLOBALS["lang"]['rules'] = 'ルールルール';

$GLOBALS["lang"]['Rules'] = 'ルールルール';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'デバイスが発見されたり、監査結果が処理されたときに、規則を作成およびデバイスに対して実行されます。 ルールは、他の属性に基づいてデバイス属性を設定するために使用できます。<br/><br/>Note - 現時点では / を含むルール入力や出力を削除できません。 フレームワークが URL の一部として / をパースし、コードが実行される前にも 404 を返します。 これに対する回避策は、ルール自体を削除し、必要に応じて入力と出力を再作成することです。 幸いに / を含む入力と出力はまれです(デフォルトでは存在しない)。';

$GLOBALS["lang"]['Run Discovery'] = 'ディスカバリー';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'デバイス上のディスカバリーを実行';

$GLOBALS["lang"]['Run Your Discovery'] = 'あなたのディスカバリーを実行';

$GLOBALS["lang"]['Run a Command'] = 'コマンドを実行する';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '発見を実行し、発見 <b>あなたのネットワーク上で何か?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'スクリプトをタイピングで実行する <code>cscript test_windows_client.vbs</code> コンソールで。';

$GLOBALS["lang"]['Run this Command'] = 'このコマンドを実行する';

$GLOBALS["lang"]['runas'] = 'ランパス';

$GLOBALS["lang"]['Runas'] = 'ランパス';

$GLOBALS["lang"]['Running'] = 'ランニング';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Windows で Open-AudIT Apache サービスを実行する';

$GLOBALS["lang"]['Russian'] = 'ロシア人';

$GLOBALS["lang"]['Russian Federation'] = 'ロシア連邦';

$GLOBALS["lang"]['Rwanda'] = 'ルワンダ';

$GLOBALS["lang"]['rx_bitrate'] = 'Rxビットレート';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rxビットレート';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freqの特長';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freqの特長';

$GLOBALS["lang"]['rx_level'] = 'Rxレベル';

$GLOBALS["lang"]['Rx Level'] = 'Rxレベル';

$GLOBALS["lang"]['rx_power'] = 'Rx 力';

$GLOBALS["lang"]['Rx Power'] = 'Rx 力';

$GLOBALS["lang"]['rx_profile'] = 'Rx プロフィール';

$GLOBALS["lang"]['Rx Profile'] = 'Rx プロフィール';

$GLOBALS["lang"]['SAN Audit'] = 'サン監査';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'サンオートカバー';

$GLOBALS["lang"]['SELECT'] = 'お問い合わせ';

$GLOBALS["lang"]['SID'] = 'サインイン';

$GLOBALS["lang"]['SM Version'] = 'SMバージョン';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'スナップ ニュース';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OIDの特長';

$GLOBALS["lang"]['SNMP Version'] = 'SNMPバージョン';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'ログイン';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL(上級)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL作成ステートメント';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'この条件を含まないSQLは、ウィジェットが実行されないようになります。';

$GLOBALS["lang"]['SSH'] = 'スクラッチ';

$GLOBALS["lang"]['SSH Key'] = 'スクラッチ キーキー';

$GLOBALS["lang"]['SW Revision'] = 'SWリビジョン';

$GLOBALS["lang"]['Saint Barthelemy'] = 'セント・バーテレミー';

$GLOBALS["lang"]['Saint Helena'] = 'セントヘレナ';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'セントキッツとネイビス';

$GLOBALS["lang"]['Saint Lucia'] = 'セントルシア';

$GLOBALS["lang"]['Saint Martin'] = 'セント・マーティン';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'サンピエールとミクロン';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'セントビンセントとグレナディーン諸島';

$GLOBALS["lang"]['Samoa'] = 'サモア';

$GLOBALS["lang"]['san'] = 'サンセット';

$GLOBALS["lang"]['San'] = 'サンセット';

$GLOBALS["lang"]['San Marino'] = 'サンマリノ';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'トーメとプリンシペ';

$GLOBALS["lang"]['Saturday'] = '土曜日';

$GLOBALS["lang"]['Saudi Arabia'] = 'サウジアラビア';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'ファイルを保存して実行します。 インストールするには、ファイルを管理者として実行してください(右クリック、管理者として実行)。';

$GLOBALS["lang"]['Save as Default'] = 'デフォルトで保存';

$GLOBALS["lang"]['Save the downloaded file.'] = 'ダウンロードしたファイルを保存します。';

$GLOBALS["lang"]['scaling'] = 'スケーリング';

$GLOBALS["lang"]['Scaling'] = 'スケーリング';

$GLOBALS["lang"]['scan_options'] = 'スキャンオプション';

$GLOBALS["lang"]['Scan Options'] = 'スキャンオプション';

$GLOBALS["lang"]['Scan Options ID'] = 'スキャンオプションID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'このポート(s)をスキャンし、検出された場合、SSH通信用のポートを使用します。 上記カスタムTCPポートの一覧(既に含まれていない場合)に追加されますので、そのリストに含める必要はありません。 堆肥化、スペースなし。';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'TCPポートのNmapトップ番号をスキャンします。';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'UDPポートのNmapトップ番号をスキャンします。';

$GLOBALS["lang"]['schedule'] = 'スケジュール';

$GLOBALS["lang"]['Schedule'] = 'スケジュール';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'スケジュールされたデバイス検出とレポートにより、Open-AudIT Professionalは、大量のIT専門家がオーバーヘッドを削減し、インサイトを増加させるための効率的なソリューションを提供します。';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'スケジューリング - 発見、報告、その他';

$GLOBALS["lang"]['scope'] = 'スコープ';

$GLOBALS["lang"]['Scope'] = 'スコープ';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'ScopeはAuthorization Scopeとして知られており、脆弱性が脆弱なコンポーネントの元のセキュリティ権限を超えてリソースに影響を及ぼすかどうかを表しています。<br/><br/>この属性の2つの有効な値のみ';

$GLOBALS["lang"]['script_timeout'] = 'スクリプトタイムアウト';

$GLOBALS["lang"]['Script Timeout'] = 'スクリプトタイムアウト';

$GLOBALS["lang"]['scripts'] = 'スクリプト';

$GLOBALS["lang"]['Scripts'] = 'スクリプト';

$GLOBALS["lang"]['scsi'] = 'スカシ';

$GLOBALS["lang"]['Scsi'] = 'スカシ';

$GLOBALS["lang"]['scsi_bus'] = 'スクシバス';

$GLOBALS["lang"]['Scsi Bus'] = 'スクシバス';

$GLOBALS["lang"]['scsi_logical_unit'] = 'スクシ論理ユニット';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'スクシ論理ユニット';

$GLOBALS["lang"]['scsi_port'] = 'スクシ港';

$GLOBALS["lang"]['Scsi Port'] = 'スクシ港';

$GLOBALS["lang"]['Search'] = 'インフォメーション';

$GLOBALS["lang"]['Search For a Device'] = 'デバイスを探す';

$GLOBALS["lang"]['Searching Using DataTables'] = 'データテーブルの検索';

$GLOBALS["lang"]['Second'] = 'セカンド';

$GLOBALS["lang"]['secondary'] = 'セカンダリー';

$GLOBALS["lang"]['Secondary'] = 'セカンダリー';

$GLOBALS["lang"]['Secondary Text'] = '二次テキスト';

$GLOBALS["lang"]['Secret Key'] = '秘密鍵';

$GLOBALS["lang"]['section'] = 'セクション';

$GLOBALS["lang"]['Section'] = 'セクション';

$GLOBALS["lang"]['secure'] = 'セキュア';

$GLOBALS["lang"]['Secure'] = 'セキュア';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'セキュリティコンテンツオートメーションプロトコル';

$GLOBALS["lang"]['Security Level'] = 'セキュリティレベル';

$GLOBALS["lang"]['Security Name'] = 'セキュリティ名';

$GLOBALS["lang"]['Security Status'] = 'セキュリティ状態';

$GLOBALS["lang"]['security_zone'] = 'セキュリティゾーン';

$GLOBALS["lang"]['Security Zone'] = 'セキュリティゾーン';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = '上記をご覧ください。 注 - これは、LDAPサーバー上の自己署名証明書によっても引き起こされる可能性があります。 未来のリリースでこれを可能にしています。';

$GLOBALS["lang"]['See our page on enabling'] = 'サイトマップ';

$GLOBALS["lang"]['Seed Discoveries'] = '種子の発見';

$GLOBALS["lang"]['seed_ip'] = 'シードIP';

$GLOBALS["lang"]['Seed IP'] = 'シードIP';

$GLOBALS["lang"]['seed_ping'] = '種子ピン';

$GLOBALS["lang"]['Seed Ping'] = '種子ピン';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'プライベートへの種子制限';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'プライベートへの種子制限';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'サブネットへの種子制限';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'サブネットへの種子制限';

$GLOBALS["lang"]['Select'] = '選択する';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = '管理者を選択 → タスク -> ダウンロード メニューからのタスク。';

$GLOBALS["lang"]['Select All'] = 'すべてを選択';

$GLOBALS["lang"]['Select All Devices'] = 'すべてのデバイスを選択';

$GLOBALS["lang"]['select_external_attribute'] = '外部属性を選択';

$GLOBALS["lang"]['Select External Attribute'] = '外部属性を選択';

$GLOBALS["lang"]['select_external_count'] = '外部カウントを選択';

$GLOBALS["lang"]['Select External Count'] = '外部カウントを選択';

$GLOBALS["lang"]['select_external_type'] = '外部を選択 タイプ:';

$GLOBALS["lang"]['Select External Type'] = '外部を選択 タイプ:';

$GLOBALS["lang"]['select_external_value'] = '外部を選択 バリュー';

$GLOBALS["lang"]['Select External Value'] = '外部を選択 バリュー';

$GLOBALS["lang"]['select_internal_attribute'] = '内部属性を選択';

$GLOBALS["lang"]['Select Internal Attribute'] = '内部属性を選択';

$GLOBALS["lang"]['select_internal_count'] = '内部カウントを選択';

$GLOBALS["lang"]['Select Internal Count'] = '内部カウントを選択';

$GLOBALS["lang"]['select_internal_type'] = '内部選択 タイプ:';

$GLOBALS["lang"]['Select Internal Type'] = '内部選択 タイプ:';

$GLOBALS["lang"]['select_internal_value'] = '内部選択 バリュー';

$GLOBALS["lang"]['Select Internal Value'] = '内部選択 バリュー';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'メニューを選択 → 管理 -> ベースライン -> リストベースライン.';

$GLOBALS["lang"]['Select a Table'] = 'テーブルを選択';

$GLOBALS["lang"]['Select an accredited certification body'] = '認定認定認定機関を選択';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = '適切な制御(Annex A)を選択して適用します';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = '選択する <i>プロフィール セキュリティ</i> タブ<br/><br/>アクセス許可をクリック デフォルト編集';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = '選択する <i>サインイン</i> タブと値のコピー <i>発行者</i> (URL自体の調整) これをOpen-AudITに貼り付ける <i>発行者</i> フィールド。';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = '選択する <i>このアカウント</i> checkbox は、アカウント名とパスワードを指定します。';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'スタートメニューとタイプを選択 <i>サービス<.i> サービスアイコンをクリックします。</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Auth Menthod の種類を選択して、関連する詳細を作成および入力します。';

$GLOBALS["lang"]['Self Delete'] = '自己削除';

$GLOBALS["lang"]['Senegal'] = 'セネガル';

$GLOBALS["lang"]['sensitivity'] = 'フィードバック';

$GLOBALS["lang"]['Sensitivity'] = 'フィードバック';

$GLOBALS["lang"]['September'] = '9月9日';

$GLOBALS["lang"]['Serbia'] = 'セルビア';

$GLOBALS["lang"]['serial'] = 'シリアル';

$GLOBALS["lang"]['Serial'] = 'シリアル';

$GLOBALS["lang"]['serial_imei'] = 'シリアルImei';

$GLOBALS["lang"]['Serial Imei'] = 'シリアルImei';

$GLOBALS["lang"]['serial_sim'] = 'シリアルシム';

$GLOBALS["lang"]['Serial Sim'] = 'シリアルシム';

$GLOBALS["lang"]['series'] = 'シリーズ';

$GLOBALS["lang"]['Series'] = 'シリーズ';

$GLOBALS["lang"]['server'] = 'サーバー';

$GLOBALS["lang"]['Server'] = 'サーバー';

$GLOBALS["lang"]['server_id'] = 'サーバーID';

$GLOBALS["lang"]['Server ID'] = 'サーバーID';

$GLOBALS["lang"]['Server Is'] = 'サーバーはあります';

$GLOBALS["lang"]['server_item'] = 'サーバー項目';

$GLOBALS["lang"]['Server Item'] = 'サーバー項目';

$GLOBALS["lang"]['Server Status'] = 'サーバーの状態';

$GLOBALS["lang"]['Servers'] = 'サーバー';

$GLOBALS["lang"]['Servers Only'] = 'サーバーのみ';

$GLOBALS["lang"]['service'] = 'サービス';

$GLOBALS["lang"]['Service'] = 'サービス';

$GLOBALS["lang"]['service_identifier'] = 'サービス識別子';

$GLOBALS["lang"]['Service Identifier'] = 'サービス識別子';

$GLOBALS["lang"]['service_level_a'] = 'サービスレベルA';

$GLOBALS["lang"]['Service Level A'] = 'サービスレベルA';

$GLOBALS["lang"]['service_level_b'] = 'サービスレベルB';

$GLOBALS["lang"]['Service Level B'] = 'サービスレベルB';

$GLOBALS["lang"]['service_network'] = 'サービスネットワーク';

$GLOBALS["lang"]['Service Network'] = 'サービスネットワーク';

$GLOBALS["lang"]['service_number'] = 'サービス番号';

$GLOBALS["lang"]['Service Number'] = 'サービス番号';

$GLOBALS["lang"]['service_pack'] = 'サービスパック';

$GLOBALS["lang"]['Service Pack'] = 'サービスパック';

$GLOBALS["lang"]['service_plan'] = 'サービスプラン';

$GLOBALS["lang"]['Service Plan'] = 'サービスプラン';

$GLOBALS["lang"]['service_provider'] = 'サービスプロバイダ';

$GLOBALS["lang"]['Service Provider'] = 'サービスプロバイダ';

$GLOBALS["lang"]['service_tag'] = 'サービスタグ';

$GLOBALS["lang"]['Service Tag'] = 'サービスタグ';

$GLOBALS["lang"]['service_type'] = 'サービスタイプ';

$GLOBALS["lang"]['Service Type'] = 'サービスタイプ';

$GLOBALS["lang"]['Service Under Windows'] = 'Windowsでサービス';

$GLOBALS["lang"]['service_version'] = 'サービス版';

$GLOBALS["lang"]['Service Version'] = 'サービス版';

$GLOBALS["lang"]['Set'] = 'セット';

$GLOBALS["lang"]['set_by'] = 'セットバイ';

$GLOBALS["lang"]['Set By'] = 'セットバイ';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'ディスカバリー機能で設定 - 手動で設定しないでください。';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = '監査_domain または、find_domain スクリプトで設定します。 設定しないでください。';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = '外部テキストを設定して、内部データのバージョンを大幅化します。';

$GLOBALS["lang"]['Set the external text to lowercase.'] = '外部テキストを小文字にします。';

$GLOBALS["lang"]['Set the external text to uppercase.'] = '外部テキストを上方へ設定します。';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'リスト画面の表のサイズ(ノーマルまたはコンパクト)を設定します。';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'コンタクトできないADからシステムを差し込む場合は、この設定をしてくださいが、その日付からADで見てきました。';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'サブネット上のディスカバリーの設定は、Webインターフェイスを介して定期的なディスカバリーを実行するとほぼ同じです。 追加のアイテムは、スケジュールされたタスク自体のスケジュールされた時間と日です。 異なる種類の資格情報を使用して複数の発見をスケジュールするために、これを活用することができます。<br/><br/>Subnet ディスカバリーでは、Active Directory ディスカバリーは、1日、時間、名前を追加した通常の Active Directory ディスカバリーと同じフィールドです。<br/><br/>Open-AudIT Server にコレクターが報告している場合、追加のドロップダウンが提供されます。 タスクを実行するコレクターを指定するためにこれを選択できます。 コレクターズのディスカバリータスクのみがサポートされます。 通常のディスカバリーと同じ項目を指定しますが、このタスクを実行するための代替コレクターを提供します。';

$GLOBALS["lang"]['severity'] = 'サビティ';

$GLOBALS["lang"]['Severity'] = 'サビティ';

$GLOBALS["lang"]['severity_text'] = '重度のテキスト';

$GLOBALS["lang"]['Severity Text'] = '重度のテキスト';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = '重度の計算は、 <code>base_score</code> 以下のいずれかのことができます。: なし, 低, 中, 高, クリティカル.';

$GLOBALS["lang"]['Seychelles'] = 'セイシェル';

$GLOBALS["lang"]['share'] = 'シェア';

$GLOBALS["lang"]['Share'] = 'シェア';

$GLOBALS["lang"]['Share Name'] = '株式名';

$GLOBALS["lang"]['shared'] = 'シェアリング';

$GLOBALS["lang"]['Shared'] = 'シェアリング';

$GLOBALS["lang"]['shared_name'] = '共有名';

$GLOBALS["lang"]['Shared Name'] = '共有名';

$GLOBALS["lang"]['shell'] = 'シェル';

$GLOBALS["lang"]['Shell'] = 'シェル';

$GLOBALS["lang"]['Ship Date'] = '出荷日';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shippedはデフォルト項目のセットです。 メニューで見つけることができます。';

$GLOBALS["lang"]['short'] = 'ショートショート';

$GLOBALS["lang"]['Short'] = 'ショートショート';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'このデバイスからすべての非現在のデータを削除する必要がありますか?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'このファイル(またはパターン)を使用して、ファイルが報告されていない場合。 通常、ファイルを監査するために、これは <code>y</code>お問い合わせ';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'FirstWaveから脆弱性を取得するときにこのベンダーを使用する必要があります。';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'ローカルサービスからデバイスを追加する必要があります。';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '選択した Org や Orgs の子供にこのライセンスを適用する必要がありますか?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = '管理ソフトウェアが検出された場合、SANを監査する必要があります。';

$GLOBALS["lang"]['Should we audit mount points.'] = 'マウントポイントを監査する必要があります。';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'ネットスタットポート(はい、いいえ、サーバーのみ)を監査する必要があります。';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'インストールしたソフトウェアを監査する必要があります。';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'フィルタリングされたポートが開いているポートであることを考慮する必要があります。したがって、このIPをデバイスに取り付けたようにフラグを立てますか?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '開口部・開口部・開口部・開口部を考慮して、このIPを装置に取り付けることはできますか?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'ホスト名を小文字に変換する必要があります。';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = '監査結果に基づいてファイルを作成する必要があります。';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'このグループをWebインターフェイスで公開する必要があります。';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'このクエリを Web インターフェイスの [レポート] メニューの下にあるレポートのリストで公開する必要があります。';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'このクエリを Web インターフェイスの [レポート] メニューの下にあるレポートのリストで公開する必要があります。';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = '実行時に監査スクリプトウィンドウを非表示にする必要があります。';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = '無効または自己署名された SSL 証明書を無視し、結果をとにかく提出する必要があります。';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'ターゲットマシンにOpen-Scapをインストールする必要があります。';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'VMware からの既知の重複であっても、デバイスベースの mac アドレスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'DNS の fqdn に基づいてデバイスを一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'DNS のホスト名に基づいてデバイスに一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'UUIDに基づいてデバイスに一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'dbus id に基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'fqdn に基づいてデバイスを一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'ホスト名とUUIDに基づいてデバイスに一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'ホスト名とdbus idに基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'ホスト名とシリアルに基づいてデバイスを一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = '既存のデバイスにデータがない場合には、ip に基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'ip に基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'macアドレスに基づいてデバイスに一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'シリアルとタイプに基づいてデバイスをマッチングする必要があります。';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'シリアル番号に基づいてデバイスに一致させる必要があります。';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'SNMP sysName とシリアルのみに基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'SNMP sysName のみに基づいてデバイスにマッチする必要があります。';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'ホスト名だけに基づいてデバイスを一致させる必要があります。';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'スキャンしようとする前にIPをpingする必要がありますか? pingに反応しない場合は、このデバイスをスキップします。';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'ローカルデバイスから外部システムを入力する必要があります。';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'すべてのDNS名を取得する';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '監査を実行し、それを提出する必要があります(y/n)。';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDPポート161を使用してSNMPをテストする必要があります。';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'TCPポート22を使用してSSHをテストする必要があります。';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCPポート135を使用してWMIをテストする必要があります。';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'エージェント(y/n)をアンインストールする必要があります。';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'システムまたはユーザーレベルのプロキシを使用して、監査結果を提出する必要があります。';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'インストールされたソフトウェアを取得するときにwin32_product WMIクラス(Microsoftでは推奨されません)を使用する必要があります。';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'このメソッドを使用して、ユーザーの資格情報を認証します。 設定する <code>y</code> または <code>n</code>お問い合わせ';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'ユーザの役割をポップするためにこのメソッドを使用する必要があります。 フィールド <code>use_auth</code> 設定する必要があります <code>y</code> これを使う。 設定する <code>y</code> または <code>n</code>お問い合わせ';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = '外部デバイスと内部デバイスに合わせ、この値を使用する必要があります。 当社のデフォルト統合では、IP および UUID を使用します。 外部デバイスと内部デバイスとの間のこれらの一致のいずれかの場合、それらが同じデバイスであることを検討します。';

$GLOBALS["lang"]['Show All'] = 'すべて表示';

$GLOBALS["lang"]['sid'] = 'スイド';

$GLOBALS["lang"]['Sid'] = 'スイド';

$GLOBALS["lang"]['sidebar'] = 'サイドバー';

$GLOBALS["lang"]['Sidebar'] = 'サイドバー';

$GLOBALS["lang"]['Sierra Leone'] = 'シエラレオネ';

$GLOBALS["lang"]['Singapore'] = 'シンガポール';

$GLOBALS["lang"]['Site A'] = 'サイトマップ';

$GLOBALS["lang"]['Site B'] = 'サイトマップ';

$GLOBALS["lang"]['site_hours_a'] = 'サイトマップ';

$GLOBALS["lang"]['Site Hours A'] = 'サイトマップ';

$GLOBALS["lang"]['site_hours_b'] = '営業時間 B';

$GLOBALS["lang"]['Site Hours B'] = '営業時間 B';

$GLOBALS["lang"]['size'] = 'サイズ:';

$GLOBALS["lang"]['Size'] = 'サイズ:';

$GLOBALS["lang"]['slaves'] = 'スラブ';

$GLOBALS["lang"]['Slaves'] = 'スラブ';

$GLOBALS["lang"]['Slovak'] = 'スロバク';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'スロバキア(スロバキア)';

$GLOBALS["lang"]['Slovenia'] = 'スワッピング';

$GLOBALS["lang"]['Slovenian'] = 'スロベニア語';

$GLOBALS["lang"]['Smart Status'] = 'スマートステータス';

$GLOBALS["lang"]['smversion'] = 'バージョン';

$GLOBALS["lang"]['Smversion'] = 'バージョン';

$GLOBALS["lang"]['Sneaky'] = 'スニーカー';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'SnmpエンタープライズID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'SnmpエンタープライズID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmpエンタープライズ名';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmpエンタープライズ名';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oidの特長';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oidの特長';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmpタイムアウト';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmpタイムアウト';

$GLOBALS["lang"]['snmp_version'] = 'Snmpバージョン';

$GLOBALS["lang"]['Snmp Version'] = 'Snmpバージョン';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'そのため、スクリプトは再発デバイスで動作しません。 ログイン Windows、Linux、MacOS用のスクリプトはすべてデバッグ引数を受け入れます。 スクリプト自体で設定するか、コマンドラインで指定できます。 5 に設定するオプションを使用してスクリプトを実行し、失敗が発生したスクリプトのどのセクションにあるかを確認する必要があります。 例えば';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = '通常の言葉とは別に、他の選択肢が何であるか - 私はあなたが尋ねてうれしいです! 標準のOpen-AudIT APIにより、フィルタリング用の複数の演算子があります。 値を予測できる演算子は';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'そのため、Open-AudIT資格情報を提供してデバイスを発見する問題があります。 お問い合わせ 確かに、パンをスライスしたので、発見は最高のことです。 時間の前に知る必要はありません <i>あなたのネットワーク上のもの</i>お問い合わせ しかし、資格情報を提供せずにデバイスからデータを抽出する方法は?<br/><br/>コンピュータの場合、簡単なオプションは、適切な監査スクリプトをターゲットマシンにコピーし、スケジュールで実行するように設定することです。 wiki の詳細 マシンは、そのスケジュールでOpen-AudITにデータを送信します。 デバイスは、単にスケジュール上で監査スクリプトを実行します (再び, あなたは、監査スクリプトを読むことができます) あなたがそれを指示し、サーバーに出力を送信します. 資格情報は一切関与していません。<br/><br/>そして今私達にWindowsのための代理店があります。 実際のインストールエージェントの利点は';

$GLOBALS["lang"]['socket'] = 'ソケット';

$GLOBALS["lang"]['Socket'] = 'ソケット';

$GLOBALS["lang"]['software'] = 'ソフトウェア';

$GLOBALS["lang"]['Software'] = 'ソフトウェア';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'ソフトウェアは最後の7日を見つけました';

$GLOBALS["lang"]['Software Found Today'] = 'ソフトウェアは今日見つけました';

$GLOBALS["lang"]['Software Found Yesterday'] = 'ソフトウェア 発見された昨日';

$GLOBALS["lang"]['software_key'] = 'ソフトウェアキー';

$GLOBALS["lang"]['Software Key'] = 'ソフトウェアキー';

$GLOBALS["lang"]['Software License Reporting'] = 'ソフトウェアライセンス報告';

$GLOBALS["lang"]['software_name'] = 'ソフトウェア名';

$GLOBALS["lang"]['Software Name'] = 'ソフトウェア名';

$GLOBALS["lang"]['Software Policies'] = 'ソフトウェアポリシー';

$GLOBALS["lang"]['software_revision'] = 'ソフトウェア修正';

$GLOBALS["lang"]['Software Revision'] = 'ソフトウェア修正';

$GLOBALS["lang"]['software_version'] = 'ソフトウェアバージョン';

$GLOBALS["lang"]['Software Version'] = 'ソフトウェアバージョン';

$GLOBALS["lang"]['Solaris'] = 'ソラリス';

$GLOBALS["lang"]['Solomon Islands'] = 'ソロモン諸島';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'ソマリア、ソマリア共和国';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'いくつかのコレクションは実行できます - クエリなど - 以下を参照してください。';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'このページの一番下にある例がいくつかあります。 すべてのエンドポイントには、必要なフィールドの最小リストもあります。 以下です。';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'テンプレートの中には、サーバー側の処理を使用して、dataTables への新しい移動をサポートするものもあります。 このマッシブリーは、負荷時間を向上させます。';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'LDAP サーバーにバインドしようとすると、その他のエラーが発生しました。 接触可能(すなわち、 <i>ログイン</i> 上記は機能しましたが、何らかの理由で、バインディングは発生しません。 LDAP サーバーのログを確認します。';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = '何かが真剣に間違っています。 Open-AudITが読み取れない <i>ログイン</i> テーブル。';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = '何かが真剣に間違っています。 Open-AudITが読み取れない <i>ロール</i> テーブル。';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = '場合によっては、エージェントレスの発見は、あなたのユースケースに合わないだけです。 多分あなたのPCに堅いファイアウォールがあります。 多分、彼らはあなたの発見が予定されているとき、ネットワークにない. 多分彼らはリモートワーカーによって使用されます。. どんなケースでも、エージェントが助けることができる場所です。 ターゲットマシンにインストールすると、 <i>チェックイン</i> スケジュールでOpen-AudITサーバーを使ってタスクを受け付けます。 サーバ要求の最も一般的なタスクは、エージェントがそれ自体を監査し、結果を送信します。';

$GLOBALS["lang"]['Sort'] = 'ツイート';

$GLOBALS["lang"]['sound'] = 'サウンド';

$GLOBALS["lang"]['Sound'] = 'サウンド';

$GLOBALS["lang"]['source'] = 'ソース';

$GLOBALS["lang"]['Source'] = 'ソース';

$GLOBALS["lang"]['South Africa'] = '南アフリカ';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = '南ジョージアと南サンドイッチ諸島';

$GLOBALS["lang"]['Spain'] = 'スペイン';

$GLOBALS["lang"]['Spanish'] = 'スペイン語';

$GLOBALS["lang"]['Specific to Azure.'] = 'Azure に特有。';

$GLOBALS["lang"]['Specific to OKTA.'] = 'OKTA の特定。';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'スキャンから除外されるターゲット(スペースなし)のコンマ区切りリストを指定します。 通常のNmapの構文を使用するリストなので、ホスト名、CIDRのnetblocks、octetの範囲などを含むことができます。';

$GLOBALS["lang"]['speed'] = 'スピード';

$GLOBALS["lang"]['Speed'] = 'スピード';

$GLOBALS["lang"]['speed_down_a'] = 'スピードダウン ツイート';

$GLOBALS["lang"]['Speed Down A'] = 'スピードダウン ツイート';

$GLOBALS["lang"]['speed_down_b'] = 'スピードダウンB';

$GLOBALS["lang"]['Speed Down B'] = 'スピードダウンB';

$GLOBALS["lang"]['speed_up_a'] = 'スピードアップA';

$GLOBALS["lang"]['Speed Up A'] = 'スピードアップA';

$GLOBALS["lang"]['speed_up_b'] = 'スピードアップB';

$GLOBALS["lang"]['Speed Up B'] = 'スピードアップB';

$GLOBALS["lang"]['sql'] = 'スケル';

$GLOBALS["lang"]['Sql'] = 'スケル';

$GLOBALS["lang"]['Sri Lanka'] = 'スリランカ';

$GLOBALS["lang"]['ssh_ports'] = 'スッシュポート';

$GLOBALS["lang"]['Ssh Ports'] = 'スッシュポート';

$GLOBALS["lang"]['ssh_timeout'] = 'Sshタイムアウト';

$GLOBALS["lang"]['Ssh Timeout'] = 'Sshタイムアウト';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'ステージ1:ドキュメントレビュー';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'ステージ2:実装と有効性検討';

$GLOBALS["lang"]['Stand-Alone'] = 'スタンドアローン';

$GLOBALS["lang"]['Standard'] = 'スタンダード';

$GLOBALS["lang"]['standard_id'] = 'スタンダードID';

$GLOBALS["lang"]['Standard ID'] = 'スタンダードID';

$GLOBALS["lang"]['standards'] = 'スタンダード';

$GLOBALS["lang"]['Standards'] = 'スタンダード';

$GLOBALS["lang"]['standards_policies'] = 'スタンダードポリシー';

$GLOBALS["lang"]['Standards Policies'] = 'スタンダードポリシー';

$GLOBALS["lang"]['standards_results'] = '基準結果';

$GLOBALS["lang"]['Standards Results'] = '基準結果';

$GLOBALS["lang"]['start_date'] = '開始日';

$GLOBALS["lang"]['Start Date'] = '開始日';

$GLOBALS["lang"]['start_mode'] = '開始モード';

$GLOBALS["lang"]['Start Mode'] = '開始モード';

$GLOBALS["lang"]['Start a web browser and go to'] = 'ウェブブラウザを起動し、';

$GLOBALS["lang"]['started_date'] = '開始日';

$GLOBALS["lang"]['Started Date'] = '開始日';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = '2018年6月発売 Googleは、Googleマッププラットフォーム API の有料課金モデルを実装しています。 以前は、適度な使用法を持つほとんどのユーザーは、無料のOpChartsおよびOpen-AudIT Professional/Enterpriseに埋め込まれているGoogleマップを使用できます。 Googlesの新しい方針はここに概略します、';

$GLOBALS["lang"]['Starts With'] = '開始と';

$GLOBALS["lang"]['state'] = 'ステート';

$GLOBALS["lang"]['State'] = 'ステート';

$GLOBALS["lang"]['Stats'] = '統計情報';

$GLOBALS["lang"]['status'] = 'ステータス';

$GLOBALS["lang"]['Status'] = 'ステータス';

$GLOBALS["lang"]['Storage'] = 'ストレージ';

$GLOBALS["lang"]['storage_count'] = '貯蔵の計算';

$GLOBALS["lang"]['Storage Count'] = '貯蔵の計算';

$GLOBALS["lang"]['Storage area network'] = 'ストレージエリアネットワーク';

$GLOBALS["lang"]['Storage-Area Network'] = 'ストレージエリアネットワーク';

$GLOBALS["lang"]['string'] = 'ストリング';

$GLOBALS["lang"]['String'] = 'ストリング';

$GLOBALS["lang"]['sub_resource_id'] = 'サブリソースID';

$GLOBALS["lang"]['Sub Resource ID'] = 'サブリソースID';

$GLOBALS["lang"]['sub_type'] = 'サブタイプ';

$GLOBALS["lang"]['Sub Type'] = 'サブタイプ';

$GLOBALS["lang"]['subject_key_ident'] = '主インデント';

$GLOBALS["lang"]['Subject Key Ident'] = '主インデント';

$GLOBALS["lang"]['Submit'] = '送信する';

$GLOBALS["lang"]['Submit Online'] = 'オンライン投稿';

$GLOBALS["lang"]['Submitted From'] = '投稿から';

$GLOBALS["lang"]['Subnet'] = 'サブネット';

$GLOBALS["lang"]['Subnet Discoveries'] = 'サブネットの発見';

$GLOBALS["lang"]['Subscription ID'] = 'サブスクリプションID';

$GLOBALS["lang"]['suburb'] = 'サーブ';

$GLOBALS["lang"]['Suburb'] = 'サーブ';

$GLOBALS["lang"]['Success'] = '成功事例';

$GLOBALS["lang"]['Sudan'] = 'スーダン';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo パスワード';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo パスワード (オプション)';

$GLOBALS["lang"]['suite'] = 'スイート';

$GLOBALS["lang"]['Suite'] = 'スイート';

$GLOBALS["lang"]['summaries'] = 'サマリー';

$GLOBALS["lang"]['Summaries'] = 'サマリー';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summariesはデータベースに対する単一のクエリです。 <i>グループ別</i> コマンド。 この単純なメソッドを使用すると、任意の属性の要約を簡単に作成できます。<br/><br/>それぞれ別のレポートを必要としません <i>タイプ:</i> デバイスの 私たちは、単にグループが持つ要約を持っています <i>デバイス。 タイプ:</i> 結果を表示します。 リストから特定のタイプをクリックして、一致するデバイスを見ることができます。 この場合、サマリーは(暫定的に)78レポート(78種類のデバイスタイプ)を置き換えます。<br/><br/>要約は、指定した属性で項目をグループ化し、その要約がクエリと異なる <i>クリックして</i> 実際のデバイスへのリンク クエリは、単に追加のリンクのないアイテムのリストです。 上記のように - まとめたサマリーのこれ <i>レポート + サブレポート</i>, クエリは、単に単一のレポートです.<br/><br/>Summariesには、Open-AudIT内の他のリソースに異なるコレクションテンプレートがあります。 このテンプレートは、期待どおりのサマリーを表示し、他のリソースのカウントでボタンを表示することもできます。 このページは、Open-AudITのHomePageであるように設計されています。';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'サマリーは、特定の一致する列でアイテムをグループ化し、個々のデバイスへのリンクを提供するように設計されています。 Open-AudITの以前のバージョンでは、レポートとサブレポートの2つの異なる項目があります。 これらをまとめました。';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summariesはドリルダウンの報告機能を提供します。 シンプルで直感的で、強力です。';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summaries は Queries と同じ引数を取ります。';

$GLOBALS["lang"]['Summary'] = 'ニュース';

$GLOBALS["lang"]['Sunday'] = '日曜日';

$GLOBALS["lang"]['supplier'] = 'サプライヤー';

$GLOBALS["lang"]['Supplier'] = 'サプライヤー';

$GLOBALS["lang"]['Support'] = 'サポート';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'サポートされているタイプは <code>subnet</code>, <code>seed</code> そして、 <code>active directory</code>お問い合わせ';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = '法的および規制要件の遵守をサポート';

$GLOBALS["lang"]['Suriname'] = 'スリナム';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = '監視監査: 認証を維持するための年次監査';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands, オーストラリア';

$GLOBALS["lang"]['Swaziland'] = 'スワジランド';

$GLOBALS["lang"]['Sweden'] = 'スウェーデン';

$GLOBALS["lang"]['Swedish'] = 'スウェーデン語';

$GLOBALS["lang"]['switch_device_id'] = 'スイッチ装置ID';

$GLOBALS["lang"]['Switch Device ID'] = 'スイッチ装置ID';

$GLOBALS["lang"]['switch_port'] = 'スイッチ ポート';

$GLOBALS["lang"]['Switch Port'] = 'スイッチ ポート';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'スイス、スイス連邦';

$GLOBALS["lang"]['Symptom'] = 'シンプトム';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'シリア アラブ共和国';

$GLOBALS["lang"]['sysContact'] = 'お問い合わせ';

$GLOBALS["lang"]['SysContact'] = 'お問い合わせ';

$GLOBALS["lang"]['sysDescr'] = 'シックスデスク';

$GLOBALS["lang"]['SysDescr'] = 'シックスデスク';

$GLOBALS["lang"]['sysLocation'] = 'シンポジウム';

$GLOBALS["lang"]['SysLocation'] = 'シンポジウム';

$GLOBALS["lang"]['sysName'] = 'シンボル名';

$GLOBALS["lang"]['SysName'] = 'シンボル名';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID(シースオブジェクトID)';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID(シースオブジェクトID)';

$GLOBALS["lang"]['sysUpTime'] = 'シスターアップタイム';

$GLOBALS["lang"]['SysUpTime'] = 'シスターアップタイム';

$GLOBALS["lang"]['system_component'] = 'システムコンポーネント';

$GLOBALS["lang"]['System Component'] = 'システムコンポーネント';

$GLOBALS["lang"]['System-Area Network'] = 'システムエリアネットワーク';

$GLOBALS["lang"]['TX Bitrate'] = 'TXビットレート';

$GLOBALS["lang"]['TX Freq'] = 'TXのFreq';

$GLOBALS["lang"]['TX Level'] = 'TXレベル';

$GLOBALS["lang"]['TX Power'] = 'TXパワー';

$GLOBALS["lang"]['TX Profile'] = 'TXプロファイル';

$GLOBALS["lang"]['Table'] = 'テーブル';

$GLOBALS["lang"]['tag'] = 'ツイート';

$GLOBALS["lang"]['Tag'] = 'ツイート';

$GLOBALS["lang"]['tag_1'] = 'タグ 1';

$GLOBALS["lang"]['Tag 1'] = 'タグ 1';

$GLOBALS["lang"]['tag_2'] = 'タグ 2';

$GLOBALS["lang"]['Tag 2'] = 'タグ 2';

$GLOBALS["lang"]['tag_3'] = 'タグ 3';

$GLOBALS["lang"]['Tag 3'] = 'タグ 3';

$GLOBALS["lang"]['Tagalog'] = 'タガログ';

$GLOBALS["lang"]['tags'] = 'ニュース';

$GLOBALS["lang"]['Tags'] = 'ニュース';

$GLOBALS["lang"]['Tags :: '] = 'タグ :: ';

$GLOBALS["lang"]['Taiwan'] = '中国語(簡体)';

$GLOBALS["lang"]['Tajikistan'] = 'タジキスタン';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '各項目を適切に出力し、動作する全ての項目に注意してください。';

$GLOBALS["lang"]['Tanzania'] = 'タンザニア';

$GLOBALS["lang"]['Target Computer'] = 'ターゲットコンピューター';

$GLOBALS["lang"]['task'] = 'タスク';

$GLOBALS["lang"]['Task'] = 'タスク';

$GLOBALS["lang"]['tasks'] = 'タスク';

$GLOBALS["lang"]['Tasks'] = 'タスク';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'タスクは、ベースライン、ディスカバリー、レポート、クエリ、サマリー、コレクターなど、いくつかの異なるタイプの1つです。';

$GLOBALS["lang"]['tcp_ports'] = 'Tcpポート';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcpポート';

$GLOBALS["lang"]['Technical Details'] = '技術情報';

$GLOBALS["lang"]['tenant'] = 'テナント';

$GLOBALS["lang"]['Tenant'] = 'テナント';

$GLOBALS["lang"]['Tenant ID'] = 'テナントID';

$GLOBALS["lang"]['Tennant ID'] = 'テナントID';

$GLOBALS["lang"]['ternary'] = 'テレナリー';

$GLOBALS["lang"]['Ternary'] = 'テレナリー';

$GLOBALS["lang"]['Test 1'] = '試験 1';

$GLOBALS["lang"]['Test 2'] = '試験2';

$GLOBALS["lang"]['Test 3'] = '試験3';

$GLOBALS["lang"]['Test Email'] = '電子メールをテストする';

$GLOBALS["lang"]['test_minutes'] = 'テストの議事録';

$GLOBALS["lang"]['Test Minutes'] = 'テストの議事録';

$GLOBALS["lang"]['test_os'] = 'テストOs';

$GLOBALS["lang"]['Test Os'] = 'テストOs';

$GLOBALS["lang"]['test_subnet'] = '試験サブネット';

$GLOBALS["lang"]['Test Subnet'] = '試験サブネット';

$GLOBALS["lang"]['tests'] = 'テスト';

$GLOBALS["lang"]['Tests'] = 'テスト';

$GLOBALS["lang"]['Text'] = 'テキスト';

$GLOBALS["lang"]['Thai'] = 'タイ';

$GLOBALS["lang"]['Thailand'] = 'タイ';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = '最高の発見と在庫ツールで旅を始めていただきありがとうございます。';

$GLOBALS["lang"]['Thanks to'] = 'ありがとうございます。';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'それはそれです! 必要なだけ多くのデバイスの属性を編集しました。';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'インフォメーション <i>ロール</i> endpoint は、ユーザーに付与されたパーミッション(Create, Read, Update, Delete)のセットを管理し、各エンドポイントに適用されます。';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API は Cookie を使用します。 下記のURLにPOSTを送信すると、ユーザー名とパスワードの属性と値を含むクッキーをリクエストできます。';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory ドメインで、サブネットのリストを取得します。';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory サーバーでサブネットのリストを取得します。';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'アプリケーションエンドポイントを使用すると、デバイス(またはデバイス)に関連付けることができるアプリケーションを定義できます。';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributesエンドポイントでは、Open-AudITの異なる属性にカスタマイズされた値を追加することができます。この機能は、デバイス上のクラス、環境、ステータス、およびタイプ属性、両方のロケーションとオーグとQueriesのメニューカテゴリで動作します。 繁殖型(Lkocation を表示)のいずれかの項目を表示している場合、Type 属性はドロップダウン ボックスから選択する必要があります。 これらの値が保存されるところです。 したがって、新しいタイプを Location で選択したい場合は、属性機能を使用して追加します。';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable メトリックは、質問に対する答えをキャプチャします <strong>複数のターゲットを横断して、攻撃者がこの脆弱性の悪用イベントを自動化できますか?</strong> キルチェーンの1〜4ステップに基づいて。 これらの手順は、再認識、武器化、配信、および搾取(定義されていない、はい)です。';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE は、CVE リストで無効または撤退としてマークされています。 NVDに残っていますが、デフォルトの検索結果から除外されます。';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVEはCVEリストに公開され、NVDデータセットに含まれています。 初期摂取のみ。';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = '初期解析後にCVEが更新されました。 NVD濃縮データが変更される場合があります。';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE 識別子。';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVEはCVSSのスコア、CWEの分類、参照の札およびCPEの適用性と積極的に高められます。';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVEは現在、リソースの制約やその他の理由により、強化のために優先されません。';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVEは、NVDアナリストの充実のためにキュートです。 詳細なメタデータはまだありません。';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'このアイテムを所有するクラウド。 サイトマップ <code>clouds.id</code>お問い合わせ';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'デバイスシードディスカバリータイプは、ネットワーククローリング用の最新の高効果の高い方法です。必要に応じて、ネットワークを狭くまたは広くターゲットにすることができます。 それは速いです、それは働き、それは素晴らしいです。';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'ディスカバリースキャン 弊社が発送するオプションは、以下の表で詳細をご覧いただけます。 上記のように、エンタープライズユーザーは、これらをもっと作成したり、出荷されたアイテムを編集したりすることができます。';

$GLOBALS["lang"]['The Elevated User query'] = '関連するユーザークエリ';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Executables は、監査の一環としてデバイスのディスクをスキャンし、すべての実行ファイルがパッケージマネージャに知られることを確認します。 パッケージマネージャを使用するため、この機能は Linux ターゲット デバイスのみに適用され、それ以上は rpm または deb ベースのディストリビューションのみです。 Redhat または Debian ベースの機能が動作するはずです。';

$GLOBALS["lang"]['The FROM'] = 'メニュー';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'ベースラインを実行するために使用されるグループ。 サイトマップ <code>groups.id</code>お問い合わせ';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = '接続の最後にNTUのデバイステーブル(デバイス名が表示されます)からIDを表示します。 サイトマップ <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'インポートされたベンチマークポリシーからID。';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = '接続の終端にある位置表(場所名)からのIDが表示されます。 サイトマップ <code>locations.id</code>お問い合わせ Aの場所は通常あります <code>FROM</code> 所在地。';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = '接続の終端にある位置表(場所名)からのIDが表示されます。 サイトマップ <code>locations.id</code>お問い合わせ Bの場所は通常あります <code>TO</code> 所在地。';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = '関連するデバイスのID(もしあれば)。 サイトマップ <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = '関連する発見のID。 関連リンク <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = '関連するタイプの項目のID。';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'この orgs の親 org の ID。 関連リンク <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'プロバイダーが提供するID。';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'クラウドディスカバリーから取得したID。';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'このコレクターのIPアドレスは、サーバーと通信するために使用される。';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'デバイス IP はシードディスカバリーを開始します。';

$GLOBALS["lang"]['The IP of the external interface.'] = '外部インタフェースのIP。';

$GLOBALS["lang"]['The IP of the internal interface.'] = '内部インターフェイスのIP。';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001認証プロセスとその主要要素。';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'このリンクを提供するISPまたはTelco。';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'MitreのJSONレコード。';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVDフィードのJSONレコード。';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'このユーザーの LDAP OU (LDAP が使用される場合)。';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP サーバーは接続できません。 お問い合わせ Open-AudITサーバーからpingableであることを確認してください。 正しいポートがOpen-AudITサーバーに開きます。 Open-AudITサーバーからのnmapがこれを表示します。 LDAP サーバーの IP を $ip に置換します。 試してみてください:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP サーバータイプが無効です。 それはどちらかでなければなりません <i>アクティブディレクトリ</i> または <i>オープンソース</i>お問い合わせ';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP サーバが接続され、バインドに受け入れられるユーザの認証情報。';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT インストーラは、必要に応じて、Nmap SetUID の設定を含む、配布リポジトリから Open-AudITs の依存関係をインストールします。 非rootユーザによるSNMP(UDP 161)検出が必要です。 RedHat/CentOS と Debian/Ubuntu でサポートされています。 Nmap を手動でインストールする必要がある場合:<br/><br/>RedHat/CentOSの場合(NOTE - yumを使用してアップグレードする場合は、これを再適用する必要があります <i>ログイン</i> 設定)。';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'このネットワークを含む場所。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD はベースステータスを割り当てました。';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = '国立標準技術研究所は、連邦技術機関です。 公式の技術、測定の科学および標準を進歩させました。';

$GLOBALS["lang"]['The Network to Discover'] = '発見するネットワーク';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapのタイミングプリセット。';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'このパッケージは、OSに対して報告する必要があります。 すべてのために空白。 ワイルドカードとしてパーセント記号%を使用してください。 os_group、os_family、os_name に対してテストします。';

$GLOBALS["lang"]['The Open-AudIT API'] = 'オープンソース API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'リンクされたクラウドのOpen-AudIT ID。 サイトマップ <code>clouds.id</code>お問い合わせ';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'オープンオード IT サーバー コードはこのファイル内で実行されました。';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'オープンオード IT サーバー コードはこの関数内で実行されました。';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAPのエコシステムは、管理者や監査人に対して、さまざまなセキュリティベースラインのアセスメント、測定、および執行を支援するための複数のツールを提供しています。オープンソースコミュニティによって開発されたさまざまな硬化ガイドと構成ベースラインは、その規模に関係なく、組織のニーズに合ったセキュリティポリシーを選択できるようにします。';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAPプロジェクトは、この規格の実装と強化のためのオープンソースツールのコレクションであり、2014年にNISTのSCAP 1.2認証を取得しました。';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'この項目を所有する組織。 サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '実行中の関連発見のプロセス識別子。';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'このデバイスの上部のRUポトン。';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'ラック機能は、組織、場所、建物、床、部屋および列を使用してラックの使用を管理および視覚化するのに使用されています。';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAPは、標準化された方法でセキュリティデータを表現し、操作するための仕様です。 SCAPは、連続監視、脆弱性管理、セキュリティポリシーの遵守評価レポートを自動化するために、コンサートで複数の個々の仕様を使用しています。';

$GLOBALS["lang"]['The SELECT'] = 'コンセプト';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'クエリのSELECTセクションは、完全なドット表記を使用し、また、そのフルドット名でフィールドをリクエストする必要があります。 IE - SELECTデバイス。 id として `devices.id`。 各フィールドは、GUI 側属性フィルタリングを有効にするために、この方法で選択する必要があります。';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SQL の SELECT セクションには、完全に修飾された列が含まれており、特定の列を指定する必要があります。';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMPコミュニティ文字列。';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3認証パスフレーズ。';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3認証プロトコル。';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 プライバシーパスフレーズ。';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 プライバシープロトコル。';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3セキュリティレベル。';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3セキュリティ名。';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 コンテキストエンジン ID (オプション)。';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 コンテキスト名(オプション)。';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL は含まない <strong>WHERE @filter または</strong>お問い合わせ SQLは実行されませんが、 <strong>@filter および</strong> お問い合わせは受け付けております。';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT で使用される SQL クエリは、バックティック - 文字とフィールドの標準的な単一の引用語句を必要としません。 ほとんどの米国のWindowsキーボードでは、バックティックキーがチルドとキーボードの左上にあります。 US Mac キーボードでは、バックティックキーが SHIFT キーの横にあります。 標準のシングルクォートは、以下に示す例として値を閉じるために使用されます。';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQLクエリは3つの部分に本質的に壊れています。';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudITのStandards機能は、ISO 27001の認証を取得する際に必要となる質問の監査人を完了することができます。';

$GLOBALS["lang"]['The URL of the external system.'] = '外部システムのURL。';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Open-AudITのURL このコレクターが報告するサーバー(スラッシュを追跡しない)。';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '監査スクリプトのURLは、結果を提出する必要があります。';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'ユーザーエンドポイントでは、Open-AudIT 内でユーザーアカウントを管理することができます。';

$GLOBALS["lang"]['The WHERE'] = 'WHEREの特長';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'SQLのWHEREセクション <em>必須</em> 含まれるもの';

$GLOBALS["lang"]['The Windows'] = 'ウィンドウズ';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windowsのログは、次のことを言うかもしれません';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'このアカウントにはパスワードが必要です。WMIは空白のパスワードを許可しません。';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'アカウントのパスワードには、\" (ダブルクォート) が含まれていません。 これは、cscript(およびwscript)が二重引用を含む引数値を解析できないためです。 彼らは単に除去されます。 エスケープは動作しません。 これは、スクリプトの制限とOpen-AudITで行うことは何もありません。';

$GLOBALS["lang"]['The actual full name of this user.'] = '実際のユーザ名。';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudITサーバーのアドレスはページを提出します。';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = '管理者は、LDAP にバインドするのに成功した認証情報を提供しました。';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = '管理者はLDAPサーバーにバインドする資格情報を提供しましたが、LDAP sevrerによって受け入れられていません。 LDAP サーバ上での認証情報をダブルチェックし、Open-AudIT LDAP Server エントリーで (またはリセット) チェックを行います。';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'エージェントとサーバーは、サーバーに新しいバージョンがインストールされている場合、エージェントを自動更新するのに十分なインテリジェントです(Open-AudITをアップグレードした後に)。';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'エージェントは、監査スクリプトの新鮮なコピーをダウンロードし、それを実行し、結果をサーバーに送信する必要があります。';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'このアプリケーションは、仮の監査書をここに作成し、それらをターゲットマシンにコピーし、それらを削除します。';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '関連するベースライン。 サイトマップ <code>baselines.id</code>お問い合わせ';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '関連する発見(必要に応じて)。 サイトマップ <code>discoveries.id</code>お問い合わせ';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'テストの属性(から) <code>devices</code> テーブル)。';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'テストする属性(以下から外部フィールド名と一致しない)。';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = '検出スキャンオプションの属性は以下のとおりです。';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'カスタム化をベースとする監査スクリプト。';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = '監査スクリプトは file[ ] 配列を使用して、ファイルの詳細を取得します。';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = '監査スクリプトはすべてデバッグ引数を受け取ります。 その上でスクリプトを実行し、問題が何であるかを詳細に表示することができます。 そして、あなたがそれを把握できない場合 - それは我々がここにいるものです! サポートケースをオープンし、何度でも実行してもらえます。';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'ユーザーが検索するベースパス。';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = '以下の手順は、Open-AudITに固有の欠陥ではなく、影響しません <strong>その他</strong> リモートWMIおよび/またはWindowsを使用して検出アプリケーション。';

$GLOBALS["lang"]['The benchmark type.'] = 'ベンチマークタイプ。';

$GLOBALS["lang"]['The building the rack is located in.'] = '建物は棚にあります。';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '外部に作成するデバイスの計算番号。';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT で作成するデバイスの計算数。';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'クライアント ID は Azure Active Directory アプリケーション ID です。 クライアントシークレットは、そのアプリケーションを与えるキーです。';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'コレクタは、基本的にOpen-AudITのフルインストールです <i>コレクター</i> モード。 コレクタは、ネットワーク上で発見を実行するように設計されています。 そのネットワークだけに限定されませんが、理想的には、必要なサブネットごとに1つのコレクターになります。 コレクターはサーバーによってスケジュールに運転され、指定されたネットワーク上で発見を実行します。<br/>スタンド 単独モードでは、コレクターは独立したサーバーとして機能します。, 単にメインサーバに見つけたすべてのデバイスを転送.<br/><br/>インストールとセットアップが完了すると、コレクターの制御がサーバー上で実行されます(スタンドアローンモードではありません)。<br/><br/>コレクタとサーバー間で必要なネットワークポートは、80または443(コレクターからサーバーへのTCP接続)です。 Open-AudITデータベースは、これらのインストール間で共有されていない(およびできません)。<br/><br/>デフォルトでは、コレクター(スタンドアローンモードではありません)は、サーバーから5分ごとに任意のディスカバリーを要求します(コンフィギュレーション項目コレクタを使用して、新しいコレクター用のサーバーでこれを構成できます_チェック_分)、コレクターのための任意のディスカバリータスクは、0、5、10、15など分のためにスケジュールする必要があります。';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'コレクタは、基本的にOpen-AudITのフルインストールです <i>コレクター</i> モード。 このモードは、アプリケーションを簡素化し、集中する努力で可視機能を減らします。 ローカルネットワークやデバイスに関する情報を収集する設計で、ファイアウォールやネットワークのトラバーサルがサーバーからの問題です。';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '発見を実行するときに使用されるコレクター内部IP。';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '外部テーブルからのカラム名。 クラス、環境、ステータス、タイプ、またはメニュー_カテゴリのいずれかでなければなりません。';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'ターゲットデバイスまたは検出時に実行されるOpen-AudITサーバーコード。';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'クラスターの構成は次のようになります。 <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> または空白。';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '認証パスワード。 資格情報が SSH キーの場合、キーのロックを解除するために使用されるパスワードで、オプションです。';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'ユーザーが指定した認証情報は失敗しました。';

$GLOBALS["lang"]['The credentials username.'] = 'ユーザー名。';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'フォーマットの現在の日付と時刻: Y-m-dの特長 H:i:s。';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y-m-d形式の現在の日付。';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'クラウドディスカバリーの現状';

$GLOBALS["lang"]['The current status of the discovery.'] = '発見の現在の状態。';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'このユーザーのデフォルトで表示されるダッシュボード。 サイトマップ <code>dashboards.id</code>お問い合わせ';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'データベースに保存されたデータは、アプリケーション内で翻訳されていない。 データをそのまま残します。 しかし、ユーザは、データベース内の項目の名前(例えば)を言語に変えるのは止まらない。';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = '入力したデータは、 <code>LIKE</code> 句は、(APIごとに) <code>equals</code> 句。 別の例 - 入力した場合 <code>comput</code>それでも全てのコンピュータを返却します。 私たちが使っているから <code>LIKE</code> 句、それは場合無感覚です。';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'データベーススキーマは、ユーザがデータベースを持っている場合、アプリケーション内で見つけることができます::read 権限をメニューに移動: 管理者 -> データベース ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'データベースバージョンとWebバージョンは矛盾しています。';

$GLOBALS["lang"]['The date of license expiration.'] = 'ライセンス有効期限';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'ソフトウェアがメーカーによって中止される日付。 通常は新しいバージョンに置き換えられます。 メンテナンスは可能です。';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'ソフトウェアが更新されず、効果的に完全に中止された日付。 メンテナンスは中止となります。';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'この項目が変更または追加された日付(読み込みのみ)。 Note - これはサーバからのタイムスタンプです。';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'この結果が作成された日付/時刻';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'このタスクを実行する月の日(*毎日)。';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'このタスクを実行する週の日(*毎日)。';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'デバッグレベル(プロンプトウィンドウに出力します)。 0 で出力される出力が少なくなる。';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'デフォルトの検出スキャンオプションはUltraFastセットです。';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'このメソッドで作成したユーザに割り当てられたデフォルト言語。';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'デバイスは、オンラインで考慮される前に Nmap ping に応答しなければなりません。';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT 内のデバイス。 サイトマップ <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['The direct link for the script is'] = 'スクリプトの直接リンクは';

$GLOBALS["lang"]['The email address of the reciever'] = 'レシーバーのメールアドレス';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'FirstWave のエンタープライズバイナリはライセンスが必要です。 Open-AudITのダウンロードはこちらから';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'この結果は、関連するベースライン全体が由来しています。';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = '悪用された脆弱性は、脆弱なコンポーネントのセキュリティ権限を超えてリソースに影響を与えることができます。 これは、通常、特権または信託境界が交差することを意味します(例えば、コンテナからホストOSへのエスケープ)。';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = '悪用された脆弱性は、脆弱なコンポーネントと同じセキュリティ権限内でリソースにのみ影響します。 言い換えれば、攻撃者の行動は元の信頼境界内でとどまります。';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '外部参照先ID。 通常はクラウド監査によってポップアップします。';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'インテグレーションに関連するフィールドは、JSON オブジェクトの配列としてデータベースに保存されます。 各フィールドに次の属性があります。';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudITがこのデバイスの詳細を取得した最初の時間。';

$GLOBALS["lang"]['The floor the rack is located on.'] = '床は棚にあります。';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '参照する外国のテーブル。 デバイス、場所、または問い合わせのいずれかでなければなりません。';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'あなたのデータの形式は、フォームにある必要があります';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '出力に使用されるフォーマットは、電子メールで送信されます。';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '完全に修飾された列でグループ化します。 Note: 型 = トラフィックの場合、赤いクエリ ID を表します。';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = '外部システムで返された完全修飾された名前。 EG: NMIS では設定を使用します。 ログイン タイプ。';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '十分に修飾されたtable.column。 コモマ(スペースなし)で区切って複数回指定できます。';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'この脆弱性をテストするための生成されたSQLクエリ。 このフィールドは、必要に応じてクエリを修正するために編集することができます。';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'ベースラインが反対に走っていたデバイスのグループ。';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '統合のためのデバイスのリストを提供するグループ。 サイトマップ <code>groups.id</code>お問い合わせ';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'このタスクが実行される日の時間(*毎時)。';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'リンクされたデバイスのid。 サイトマップ <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'データベース内の識別子の列(整数)(読み込みのみ)。';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'このベースラインの重要性(未使用)。';

$GLOBALS["lang"]['The integer of severity.'] = '重度の整数。';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = '内部値、この形式で再フォーマットされる。';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth メソッドの ip アドレス';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Webインターフェイスをユーザに翻訳する言語。';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '最後の日付とこの項目が実行された時刻(読み込みのみ)。';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudITがこのデバイスの詳細を取得した最後の時間。';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'このベンチマークが実行された最後の時間。';

$GLOBALS["lang"]['The last time this integration was run.'] = 'この統合が実行された最後の時間。';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'ライセンスエンドポイントを使用すると、デバイスに見つかったライセンス数を追跡できます。';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'プロバイダーが接続の最後に行に割り当てられた行番号。';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = '棚の位置はあります。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['The locations address.'] = '所在地。';

$GLOBALS["lang"]['The locations area.'] = 'エリア。';

$GLOBALS["lang"]['The locations city.'] = '市街地。';

$GLOBALS["lang"]['The locations country.'] = '国の位置。';

$GLOBALS["lang"]['The locations district.'] = '地区の場所。';

$GLOBALS["lang"]['The locations latitude.'] = '所在地 緯度.';

$GLOBALS["lang"]['The locations level.'] = '場所のレベル。';

$GLOBALS["lang"]['The locations longitude.'] = '位置の経度。';

$GLOBALS["lang"]['The locations phone.'] = '電話番号';

$GLOBALS["lang"]['The locations postcode.'] = '郵便番号';

$GLOBALS["lang"]['The locations region.'] = '地域。';

$GLOBALS["lang"]['The locations room.'] = '場所部屋。';

$GLOBALS["lang"]['The locations state.'] = '場所の状態。';

$GLOBALS["lang"]['The locations suburb.'] = '郊外の場所。';

$GLOBALS["lang"]['The locations suite.'] = '場所スイート。';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'デバイスマッチングのロジックは、こちらにある device_helper.php ファイルに含まれています。';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'マシンデフォルト権限の設定は、COM Server アプリケーションのローカルアクティベーション権限を付与しません。';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '最大の体重(KGで)このラックは保持することができます。';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'このラックは、最大合計BTUが評価されています。';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = '属性の最小必須属性は';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'このタスクが実行される時間(毎分*)の分。';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'このタスクが実行される年月(*毎月)';

$GLOBALS["lang"]['The name given to this item.'] = 'この項目に与えられた名前。';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'この項目に与えられた名前。 理想的にはユニークでなければなりません。';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'このユーザーに与えられた名前(ログインに使用)。 理想的にはユニークでなければなりません。';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = '関連するクラウドの名前(必要に応じて)。';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudITによる監査として、ソフトウェアパッケージの名前。 ワイルドカードとしてパーセント記号%を使用してください。';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'この項目を変更または追加したユーザの名前(読み込みのみ)。';

$GLOBALS["lang"]['The name provided by the provider.'] = '提供者の名前。';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'フォーマットのネットワーク 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = '発見を実行するネットワークサブネット。';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = '新しい Agent は、古い監査スクリプトの PowerShell バージョンを実行し、VBScript の非推奨化 (はい、それは来ています) の準備を行います。';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'このデバイスが占有するRUの数。';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = '関連する場所の数。 サイトマップ <code>locations.cloud_id</code>お問い合わせ';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = '関連するネットワークの数。 サイトマップ <code>networks.cloud_id</code>お問い合わせ';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'このクラウドで監査されたデバイスの数。 サイトマップ <code>devices.cloud_id</code> そして、 <code>devices.serial</code>お問い合わせ';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave(データベースにない)が保持する重要な重大性脆弱性の数。';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = '発見したデバイス数。';

$GLOBALS["lang"]['The number of devices in the associated group.'] = '関連するグループ内のデバイスの数。';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '稼働状態の状態でこのクラウド内のデバイス数。 サイトマップ <code>devices.cloud_id</code> そして、 <code>devices.instance_state</code>お問い合わせ';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '停止した状態で、このクラウド内のデバイスの数。 サイトマップ <code>devices.cloud_id</code> そして、 <code>devices.instance_state</code>お問い合わせ';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'このクラウドのデバイス数。 サイトマップ <code>devices.cloud_id</code>お問い合わせ';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'このベンチマークが実行されるデバイス数。 から派生 <code>benchmarks.devices</code>お問い合わせ';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'この発見を制限するデバイスの数。';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave(データベースにない)が保持する高重度の脆弱性の数。';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaveが保有する低重度の脆弱性の数(データベースにない)。';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaveが保有する中程度の重度の脆弱性の数(データベースにはありません)。';

$GLOBALS["lang"]['The number of purchased licenses.'] = '購入したライセンスの数。';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'ターゲットIPで試して通信する秒数。';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'FirstWave(データベースにない)が保持する重度のない脆弱性の数。';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'オフセットは、データを返したいデバイスの数です。';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = '必須の許可/ポリシー名(試験中)のみ';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'オプションの二次列。 Note: 型 = トラフィックの場合、これは黄色のクエリ ID を表します。';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'オプションの3番目の列。 Note: 型 = トラフィックの場合、これは緑色のクエリ ID を表します。';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = '情報検索の順序は、snmp、ssh、wmiです。';

$GLOBALS["lang"]['The orientation of this device.'] = 'このデバイスの方向性。';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'パスワード(スクリプトを実行しているユーザを使わない場合)';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'dn_account 属性のパスワード。';

$GLOBALS["lang"]['The password used to access the external system.'] = '外部システムにアクセスするために使用されるパスワード。';

$GLOBALS["lang"]['The path to the file or directory.'] = 'ファイルやディレクトリへのパス。';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'ファイルやディレクトリへのパス。 ディレクトリは、末尾のスラッシュで終わるべきです。';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'ラックの物理的な深さ(CMで)。';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'ラックの物理的な高さ(CMで)。';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = '現在ラックの体重(KG)。';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'ラックの体重(キログラム)が空の場合。';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'ラックの物理的な幅(CM)。';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'このラックが一部であるポッド(もしあれば)。';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = '電源回路はこのラックに取り付けます。';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'このウィジェットをベースとするプライマリデータベーステーブル。';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = '認可の主な方法(ユーザーができること)は、ユーザーがロールに基づいています。 ロールは、デフォルトで管理者、org_admin、レポーター、およびユーザーとして定義されます。 各ロールは、各エンドポイントの権限(作成、読み取り、更新、削除)のセットを持っています。 出荷されるように標準的なロールは使用箱の99.9パーセントをカバーするべきです。 追加のロールを定義し、既存のロールを編集する機能は、Open-AudIT Enterprise で有効になっています。';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'このキュー項目のプロセス識別子。';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'デバイスの詳細を取得するために最後に使用したプロセス';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = '本ライセンスページの目的は、オープンソースの作品に基づいて製品やライセンスをFirstwave商用製品に含まれる製品やライセンスをリストすることです。 Open-AudIT は、商用条件下でライセンスされている Enterprise および Professional の機能で、AGPLv3 以降で Firstwave からライセンスされています。 FirstWave からダウンロードした Open-AudIT には、以下のライブラリとプロジェクトが含まれている場合があります。これらは、以下のように変更およびライセンスが付与されます。';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = '統合のためのデバイスのリストを提供するクエリ。 サイトマップ <code>queries.id</code>お問い合わせ';

$GLOBALS["lang"]['The rack asset number.'] = 'ラック資産番号。';

$GLOBALS["lang"]['The rack asset tag.'] = 'ラックアセットタグ。';

$GLOBALS["lang"]['The rack bar code.'] = 'ラックバーコード。';

$GLOBALS["lang"]['The rack model.'] = 'ラックモデル。';

$GLOBALS["lang"]['The rack serial.'] = 'ラック シリアル。';

$GLOBALS["lang"]['The rack series.'] = 'ラックシリーズ。';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'ラックこの装置はにあります。 サイトマップ <code>racks.id</code>お問い合わせ';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = '識別されたセキュリティ脆弱性の対処および修正の推奨プロセス。 これは、通常、脆弱性によって引き起こされるリスクを排除するためにパッチ、アップデート、または他の対策を適用することを含みます。';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'ディレクトリの定期的なドメイン表記。 お問い合わせ <code>open-audit.lan</code>お問い合わせ';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = '要求されたプロパティはコンマ区切りリストにある必要があります。 プロパティは完全に修飾されるべきです - すなわち、system.hostname(ホスト名だけではありません)。';

$GLOBALS["lang"]['The result of the command.'] = 'コマンドの結果。';

$GLOBALS["lang"]['The room the rack is located in.'] = 'ラックのお部屋はございます。';

$GLOBALS["lang"]['The row the rack is located in.'] = '棚の列はあります。';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP サーバーのグループ検索が失敗しました。 LDAP サーバーのログを確認します。 LDAP サーバーでこれらのグループ(ロールとオーガナイザー)を作成し、LDAP ユーザを割り当てましたか?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API キーと連携したシークレットキーです。';

$GLOBALS["lang"]['The software end-of-life date.'] = 'ソフトウェアの終生日。';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'ソフトウェアエンド・オブ・サービス・ライフの日付。';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '指定されたデータベーステーブルから特定のデータベース列。';

$GLOBALS["lang"]['The specific database table.'] = '特定のデータベーステーブル。';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = '標準的なNmapのタイミングの選択。 以前はT4(攻撃)で設定します。';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = '標準的なNmapのタイミングの選択。 通常、-T4 (攻撃的) は、これはまともなブロードバンドまたはイーサネット接続のために推奨されます。';

$GLOBALS["lang"]['The status of this integration'] = 'この統合のステータス';

$GLOBALS["lang"]['The status of this queued item.'] = 'このキューされた項目の状態。';

$GLOBALS["lang"]['The steps below outline the process.'] = '以下の手順は、プロセスを概説します。';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'ターゲットIP このログエントリのレファラー(もしあれば)。';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = '対象となるコンピューターを監査します。\" は localhost を意味します。';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = '結果行ごとに生成されるリンクのテンプレート。';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'ラインチャートの下部のテキスト(のみ)。';

$GLOBALS["lang"]['The text that is displayed.'] = '表示されるテキスト。';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'その後のタイムスタンプは、このタスクを実行する必要があります。 例えば、2017年6月1日午前10時以降にタスクを実行し、 <code>2017-06-01 09:59:00</code>お問い合わせ この値は、パッドをゼロにする必要があります(つまり、09、9ではなく)。 この値のデフォルト値 <code>2000-01-01 00:00:00</code> つまり、デフォルトでは、スケジュールされたタスクが次の実行時に実行されます。';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'トップ10、100または1000(またはなし)TCPポートは、一般的にNmapに従って使用しています。';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'トップ10、100または1000(またはなし)UDPポートは、一般的にNmapに従って使用しています。';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'このラックによって出力される総BTU。';

$GLOBALS["lang"]['The type of device.'] = 'デバイスのタイプ。';

$GLOBALS["lang"]['The type of organisation.'] = '組織の種類。';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'ラックの種類(入力、電力、ネットワークなど)。';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = '実行するタスクの種類。 の1:ベースライン、ベンチマーク、クラウド発見、発見、統合、レポート、クエリ。';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'インテグレーションの種類(通常は外部システムの名前)。';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = '未濾過状態とは、ポートがアクセス可能であることを意味しますが、Nmapは開いているか閉じているかを判断できません。 ファイアウォール規則をマップするために使用される ACK スキャンのみ、ポートをこの状態に分類します。 ウィンドウスキャン、SYNスキャン、またはFINスキャンなどの他のスキャンタイプの非濾過ポートをスキャンすると、ポートが開いているかどうかを解決できます。';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'このサーバーの固有の識別子。';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'このコレクターが使用するユーザーアカウント。 サイトマップ <code>users.id</code>お問い合わせ';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory/OpenLDAP のユーザは、ロールやオーグに必要な Open-AudIT グループの直接メンバーでなければなりません。 Open-AudITグループのメンバーである他のグループのメンバーが動作しません。';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'ユーザーはLDAP で、その資格情報は有効ですが、Orgs の Open-AudIT LDAP グループのいずれかではありません。';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'ユーザーが LDAP で、その資格情報は有効ですが、ロールの Open-AudIT LDAP グループのいずれかでは使用できません。';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'ユーザーはLDAPで、その資格情報は有効ですが、必要なOpen-AudIT LDAPグループでは使用できません。';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'この Org にマッチする LDAP グループのユーザーです。';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'ユーザーは、このロールにマッチするLDAPグループにあります。';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'この Org にマッチする LDAP グループではユーザがいない。';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'ユーザーは、このロールにマッチするLDAPグループではいません。';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'LDAP に指定されたユーザは存在しますが、Open-AudIT はロールの LDAP グループを消費し、Open-AudIT 内では存在しません。 いずれかを選択 <i>ロール用のLDAPを使用する</i> Open-AudIT LDAP について サーバー画面または Open-AudIT 内でこのユーザーを作成し、ロールと orgs を割り当てます。';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'ユーザ名(スクリプトを実行しているユーザを使用しない場合)。';

$GLOBALS["lang"]['The username used to access the external system.'] = '外部システムにアクセスするために使用されるユーザー名。';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'LDAP からユーザー情報を取得していません。 LDAP サーバーのログを確認します。';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'LDAPから取得したユーザー情報。';

$GLOBALS["lang"]['The users email address.'] = 'ユーザーのメールアドレス。';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '当サイトでは、通常の営業時間が異なります。';

$GLOBALS["lang"]['The value assigned to the item.'] = '項目に割り当てられた値。';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'この特定の項目に格納されている値。';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPEエントリのベンダー名。';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPEから取られたベンダー。';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT がインストールされているホストの Web ディレクトリ (末尾のスラッシュが必要です)。';

$GLOBALS["lang"]['The widget at position '] = 'ウィジェットの位置 ';

$GLOBALS["lang"]['The width of this device.'] = 'この装置の幅。';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'OrgIDとその子孫';

$GLOBALS["lang"]['Their OrgIDs only'] = 'OrgIDのみ';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = '彼らの OrgID, アセンダントと子孫';

$GLOBALS["lang"]['Then'] = 'それから';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = '次に、メニューに移動して、Open-AudITで新しいAuthメソッドを作成→ 管理者 -> Auth メソッド → Auth の作成 名前を提供し、置きます <i>タイプ:</i> お問い合わせ';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'その後、クライアントから直接監査データを受信するために、Open-AudIT(サポートされていない)を利用することができます。 ディスカバリー <strong>失敗する</strong>, しかし、あなたのディスカバリーを使用していない場合 (主な機能 Open-AudIT が周りに設計されました), あなたはまだデバイスデータを得ることができます. cron を使用してクライアントに直接監査スクリプトを実行したり、Windows Agent 機能を使用する必要があります(エンタープライズのみ)。';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'JSONにエクスポートするボタンがあります。 これは属性のデバイステーブルだけを表示します。 関連するすべてのコンポーネントテーブルでデバイスをエクスポートするには、デバイスの詳細を表示してから追加します。';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = '各デバイスを手動で編集する必要はありません。';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'LinuxサーバーでOpen-AudITを実行している場合は、何もする必要はありません。<br/><br/>Windows のクライアントは、ただ細かく、特別なアクションを必要としませんが、この機能を有効にするには、監査スクリプトは、ターゲットの Windows システムにローカルで実行する必要があります。 2番目のWindowsマシンをターゲティングしながら、1つのWindowsマシンで監査スクリプトを実行するときにWMI呼び出しで行うとリモートで実行することはできません。 これを行うには、監査スクリプトを対象のWindowsマシンにコピーして実行する必要があります。 残念ながら、Apache が実行するサービスアカウントはローカルシステムアカウントです。 このアカウントは、リモート(ネットワークベースの)リソースにアクセスできません。 この問題を回避するには、サービスが別のアカウントで実行する必要があります。 ローカル管理者アカウントを使用するのは最も簡単ですが、必要な権限を持っている限り、好きなアカウントを試すことができます。 ローカルシステムアカウントはローカル管理者アカウントとして多くのローカルアクセスを持っています。';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'これらは一例です。 これらの属性を特定のLDAPに合わせて調整する必要があります。';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'これらのパラメータを使用すると、処理時間を節約し、ネットワークを適切に発見できるように、便利で関連性の高いものだけを監査することができます。';

$GLOBALS["lang"]['Thing'] = 'お問い合わせ';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'mail.domain1.com と mail.domain2.com の考え - 同じホスト名。';

$GLOBALS["lang"]['Third'] = '第3条';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'このCVEは、存在するCVEを上書きします。';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'この Org は AD グループを指定していません。 Open-AudIT 内のロールの詳細を確認してください。';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'この Org は AD グループを指定していません。 Open-AudIT 内のロールの詳細を確認してください。 <span class=\'\"confluence-link\"\'>LDAP サーバーでこれらのグループ(orgs)を作成し、LDAP ユーザを割り当てましたか?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'このロールにはADグループが指定されていません。 Open-AudIT 内のロールの詳細を確認してください。';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'この属性は JSON オブジェクトとして保存されます。 すべてのコレクションの一覧で、コレクション名を同梱しています。 <code>c</code>, <code>r</code>, <code>u</code> そして、または <code>d</code> これは、作成、読み込み、更新、削除を表します。 これらは、ユーザーがその特定のコレクションからアイテムで実行できるアクションです。';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'これは、varchar(テキストフィールド)、リスト(選択できる値のリスト)、または日付のいずれかになります。';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'このコードは、大きな作業をすることによって行う';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'このコレクターは、完全にユニークな識別子です。';

$GLOBALS["lang"]['This column is required by'] = 'この列は、';

$GLOBALS["lang"]['This column is required by '] = 'この列は、 ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'この説明は自動で保存され、理想的にはそのまま残すべきです。';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'このエンドポイントを使用すると、ネットワークインフラストラクチャの一部である接続を追加できます。これにより、さまざまな属性をカスタマイズできます。この接続がどこにいるか、所属する組織を指定します。';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'このエラーは、SMB1が対象マシンから無効または削除されたことを示します。 これは、Windowsの近代的なバージョンでは正常であり、SMB2接続の試みが失敗したときにのみ、このメッセージが表示されます。 SMB2接続が失敗すると、SMB1がWindowsの古いバージョンで発見できるように試みます。 ターゲットWindowsマシンの場合 <i>お問い合わせ</i> 古いバージョンのWindowsを実行していると、資格情報が失敗している可能性があります。 その場合は、';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'このエラーは、指定された操作を完了するために十分な仮想メモリやメッセージングファイルクォータが利用できないことを示しています。 あとで試してみる。';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'このエラーは、どちらかが間違っている、存在しない、またはターゲットのWindowsマシンにリモートでログオンするのに十分な特権を持っていないかどうかを示す。 資格情報を確認し、以下を確認してください。';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'この例では、マークされているすべてのモジュールのリストを作成します。';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'この例では、NMAPスキャンで見つかったデバイスとオープンポート、プロトコル、およびプログラムのリストを作成します。';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'この例では、関数または説明フィールドが空白になっているか、購入日がデフォルトであるデバイスのリストを作成します。';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'この例では、3歳以上のデバイスのリストを取得します。 クエリは今日使用しています';

$GLOBALS["lang"]['This example uses'] = 'この例では、';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'この機能は、プロフェッショナルまたはエンタープライズライセンスが必要です。';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'この機能は、通常よりもターゲットデバイスに影響を及ぼす可能性があるため、手動で有効化する必要があります。 この機能を有効にするには、設定項目の functions_executables を変更します。 <i>お問い合わせ</i>お問い合わせ';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'このファイルは、実行する任意のスケジュールされたタスクがあるかどうかを決定するためにアプリケーションを投票するためにLinuxを指示します。';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'このフォームは、ネットワーク上のデバイスを発見し始める簡単な方法を提供します。 もっと(もっと)詳細なオプションは、個別に作成できます。';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'PAExecの仕組みでもある。';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'これは、グローバル設定でdiscover_use_org_id_matchを設定することにより、オプションの設定オプションです。';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'これは、通常、設定されていない限り、主列です。 Note: 型 = トラフィックの場合、これは二次テキストを表します。';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'MySQL がオフになっているためです。 MySQL は通常、ホストデバイス時間を使用します。 これをチェックすることができます';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'これは、ユーザーによって設定可能ですので、グローバルにユニークである必要がありますが、この保証はありません。';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = '添付ファイルをデバイスに保存するディレクトリです。';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'これは、Open-AudITの問題のトラブルシューティング時にコールの最初のポイントとして使用されます。 右上の[エクスポート]ボタンをクリックすると、JSONファイル(サポートチケット/メールに追加)として取得できます。';

$GLOBALS["lang"]['This issue is under investigation.'] = 'この問題は調査中です。';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'この項目は、選択した属性の値を一致するか、使用するクエリの ID を含む必要があります。';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'この項目は、選択した属性の値と一致しなければなりません。';

$GLOBALS["lang"]['This license expires on'] = 'このライセンスは期限切れとなります。';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'このセキュリティ権限は、コンポーネントサービス管理ツールを使用して変更できます。';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'これは、デバッグモードとしてトラブルシューティング後にコメントアウトする必要があります。 ディスク上の多くのログは利益なしになります。';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'これはグローバルにユニークであるべきだが、そうでないインスタンスを見てきました。';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'これは、ラックの高さ1または1に設定する必要があります。';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'これは、データベース内の完全に修飾されたフィールド名でなければなりません。 現在、システム、フィールド、認証テーブルの列がサポートされています。 EG:system.nmis_role。';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Nmap がポートを閉じるか、またはフィルタリングされたかを判断できないとき、この状態が使用されます。 IP ID ID アイドルスキャンのみに使用されます。';

$GLOBALS["lang"]['This will auto-populate.'] = 'これは自動入力されます。';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '発見スキャンをかなり遅くします。';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'これは、現在の行を削除します。';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'このライセンスを永久に削除します。';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = '一括編集フォームが表示されます。 このフォームで設定した属性は、選択したすべてのデバイスに適用されます。 複数の属性を一度に指定できます。';

$GLOBALS["lang"]['Thursday'] = '木曜日 木曜日';

$GLOBALS["lang"]['time_caption'] = '時間キャプション';

$GLOBALS["lang"]['Time Caption'] = '時間キャプション';

$GLOBALS["lang"]['time_daylight'] = 'タイムデイライト';

$GLOBALS["lang"]['Time Daylight'] = 'タイムデイライト';

$GLOBALS["lang"]['Time to Execute'] = '実行する時間';

$GLOBALS["lang"]['timeout'] = 'タイムアウト';

$GLOBALS["lang"]['Timeout'] = 'タイムアウト';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'ターゲットごとのタイムアウト(秒)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'ターゲットごとのタイムアウト。 ターゲット応答をX秒待ちます。';

$GLOBALS["lang"]['Timesatamp'] = 'タイムスタンプ';

$GLOBALS["lang"]['Timestamp'] = 'タイムスタンプ';

$GLOBALS["lang"]['timing'] = 'タイミング';

$GLOBALS["lang"]['Timing'] = 'タイミング';

$GLOBALS["lang"]['Timor-Leste'] = 'ティモール・レステ';

$GLOBALS["lang"]['Title'] = 'タイトル';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = '.env という名前の新しいファイルへ (同じディレクトリに)。 新しいファイルと非コメント(#を削除)下の行(17行)を編集するようになりました。';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = '実際にクエリを実行するには、 /execute を付加し、 /open-audit/index.php/queries/{$id}/execute を開きます。';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'マシンを監査するには、資格情報と管理者レベルのアクセスが必要です。';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Active Directory ドメインでリモートマシンを監査するには、提供されたユーザー(または提供されていない場合は、スクリプトを実行しているユーザー)は、対象マシンの管理者グループ(またはサブグループ)のメンバーでなければなりません。';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'ドメインにないリモートマシンを監査するには、管理者アカウントを使用する必要があります(ただし <i>ログイン</i> 管理者アカウント, <i>お問い合わせ</i> ターゲットPC上の管理者アカウント)。 #1 と #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'ローカルホストを監査するために、提供された資格情報は無視され、接続はスクリプトを実行しているユーザーの詳細を使用して行われます。';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'ソフトウェアを比較するには、名前とバージョンを確認します。 バージョン番号はすべてフォーマットで標準化されていないため、監査結果を受け取ると、各パッケージのソフトウェア詳細の残りの部分とともにデータベースに保存されるSoftware_paddedという新しい属性が作成されます。 そのため、1.10(少なくとも)監査されていないデバイスに対して実行すると、ソフトウェアポリシーを使用してベースラインは動作しません。 ソフトウェアポリシーは、バージョンに対してテストすることができます <i>等しい</i>, <i>より大きい</i> または <i>またはより大きいに等しい</i>お問い合わせ';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = '新しいエントリを作成するには、右上隅にある Create ボタンをクリックします。';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'リソースを作成するには、必要なデータをPOSTする必要があります。';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'リモートマシン(Vista以上)を有効にするには、ドメインではなく、管理者グループ内のアカウントで、実際の管理者アカウント以外のUACの下のセクションを参照してください。';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'これを有効にするには、メニュー -> 管理者 -> Auth -> Auth メソッドの作成';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Windows Powershellスクリプトを実行するには、コマンドプロンプトを管理者として開き、次のコマンドを使用します。';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = '監査スクリプトを実行するには、ターミナルを開き、次のコマンドを使用します。';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'プロパティ値でフィルタリングするには、プロパティ名を使用します。 値の前にすべき演算子は';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'WindowsにNmapをインストールするには、Nmapのページをご覧ください';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = '変更を行うには、以下の手順に従ってください。';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'テナントIDを取得する Azure ポータルを開き、Azure Active Directory、プロパティ、およびテナント ID を Directory ID として表示します。名前の不一致については、Microsoft のロールです。';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'キーを取得するには、AWSコンソールにログインしてユーザー名を選択し、My Security Credentials を選択します。';

$GLOBALS["lang"]['To return a specific component item.'] = '特定のコンポーネント項目を返す。';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = '特定のデバイスに対して、コンテントタイプのすべての項目を返す。';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'コンポーネントタイプのすべての項目を返すため。 すべてのソフトウェアが必要な場合は、';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = '逆ソートするには、マイナスを差し込みます。';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = '対象となるWindows PCでテストスクリプトを実行するには';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = '統合するデバイスを選択するには、nmis_manage = y を使用しますが、(例えば)型 = ルータのようなものがあります。 より複雑なものを好む場合は、グループやクエリを使うこともできます。';

$GLOBALS["lang"]['To sort by a database column, use'] = 'データベースの列でソートするには、';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'このエンタープライズ機能を使用するには、通常どおりOpen-AudITでユーザーを作成する必要があります。 パスワードの割り当ては不要です。 ロールとオーグを割り当てる必要があります。 Open-AudIT のユーザー名は Entra にマッチします。 <i>ユーザー名</i> 属性。 完全な名前または電子メールは必要ありません - これらは、Entraからポップアップ表示されます。 利用者がわからない場合 <i>ユーザー名</i>、恐れない。 Open-AudIT および Enterprise Application の新規 Auth メソッドを Entra で作成できます。また、既存のユーザーなしで Open-AudIT にサインインしようとすると、ログを調べて、ログが表示されるようになります。 <i>ユーザー名</i> あなたの環境のために記録される。';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'このエンタープライズ機能を使用するには、通常どおりOpen-AudITでユーザーを作成する必要があります。 パスワードの割り当ては不要です。 ロールとオーグを割り当てる必要があります。 Open-AudIT のユーザー名は OKTA にマッチする <i>お名前 (必須)</i> 属性。 フルネームやメールは必要ありません。これらはOKTAから入力されます。 利用者がわからない場合 <i>お名前 (必須)<i>、恐れない。 Open-AudIT と OKTA の Application で新しい Auth Menthod を作成でき、既存のユーザーなしで Open-AudIT にサインインしようとすると、ログを調べて、ログが表示されるようになります。 <i>お名前 (必須)<i> あなたの環境のために記録される。<br/><p>次に、メニューに移動して、Open-AudITで新しいAuthメソッドを作成→ 管理者 -> Auth メソッド → Auth の作成 名前を提供し、置きます <i>タイプ:</i> オクタへ。</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'この機能を使用するには、設定項目のmatch_mac(AWS用)とmatch_hostname(Azure用)を有効にする必要があります。 クラウドディスカバリーの初回起動時に自動的に行います。 Open-AudITs マッチングルールの詳細については、こちらを参照してください: マッチングデバイス';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'クエリの詳細は、/open-audit/index の標準的な URL 構造です。 php/queries/{$id} を使う必要があります。';

$GLOBALS["lang"]['Togo'] = 'トーゴ';

$GLOBALS["lang"]['Tokelau'] = 'トケラウ';

$GLOBALS["lang"]['Tonga'] = 'トンガ';

$GLOBALS["lang"]['toolbar_style'] = 'ツールバースタイル';

$GLOBALS["lang"]['Toolbar Style'] = 'ツールバースタイル';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'トップNmap TCPポート';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'トップNmap TCPポート Nmaps "top ports"オプションでスキャンする10、100、1000ポート。';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'トップNmap UDPポート';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Nmap UDPポートトップ Nmaps "top ports"オプションでスキャンする10、100、1000ポート。';

$GLOBALS["lang"]['Traditional Chinese'] = '伝統中国';

$GLOBALS["lang"]['Traffic Light'] = '交通ライト';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'トリニダードとトバゴ';

$GLOBALS["lang"]['Troubleshooting'] = 'トラブルシューティング';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAPログインのトラブルシューティング';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Open-AudITをお試しください 企業は、時間の制限なしに私たちを。 企業の特徴。 20台限定';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Open-AudIT Enterprise の無料 100 デバイスライセンスで最新の機能をすべてお試しください。 お問い合わせ ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'LDAP ユーザを使ってログインしてみてください。 こういったことは失敗します(もう、なぜまだこれを読んでいるのか?)。 続いて、上記ファイルから行をコメントアウトします。';

$GLOBALS["lang"]['Tuesday'] = '火曜日';

$GLOBALS["lang"]['Tunisia'] = 'チュニジア';

$GLOBALS["lang"]['Turkey'] = 'トルコ';

$GLOBALS["lang"]['Turkish'] = 'トルコ語';

$GLOBALS["lang"]['Turkmenistan'] = 'トルクメニスタン';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'タークス・カイコス諸島';

$GLOBALS["lang"]['Tuvalu'] = 'ツバル';

$GLOBALS["lang"]['tx_bitrate'] = 'Txビットレート';

$GLOBALS["lang"]['Tx Bitrate'] = 'Txビットレート';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freqの特長';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freqの特長';

$GLOBALS["lang"]['tx_level'] = 'Txレベル';

$GLOBALS["lang"]['Tx Level'] = 'Txレベル';

$GLOBALS["lang"]['tx_power'] = 'Txの力';

$GLOBALS["lang"]['Tx Power'] = 'Txの力';

$GLOBALS["lang"]['tx_profile'] = 'Tx プロフィール';

$GLOBALS["lang"]['Tx Profile'] = 'Tx プロフィール';

$GLOBALS["lang"]['type'] = 'タイプ:';

$GLOBALS["lang"]['Type'] = 'タイプ:';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'タイプ: これは、varchar(テキストフィールド)またはリスト(選択できる値のリスト)のいずれかになります。';

$GLOBALS["lang"]['Types of Networks'] = 'ネットワークの種類';

$GLOBALS["lang"]['URL'] = 'サイトマップ';

$GLOBALS["lang"]['uuid'] = 'ログイン';

$GLOBALS["lang"]['UUID'] = 'ログイン';

$GLOBALS["lang"]['udp_ports'] = 'Udpポート';

$GLOBALS["lang"]['Udp Ports'] = 'Udpポート';

$GLOBALS["lang"]['Uganda'] = 'ウガンダ';

$GLOBALS["lang"]['Ukraine'] = 'ウクライナ';

$GLOBALS["lang"]['Ukrainian'] = 'ウクライナ語';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 監査(ドキュメントレビュー)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 監査(導入検討)';

$GLOBALS["lang"]['Undergoing Analysis'] = '受託解析';

$GLOBALS["lang"]['Unfiltered'] = '非フィルタリング';

$GLOBALS["lang"]['uninstall'] = 'アンインストール';

$GLOBALS["lang"]['Uninstall'] = 'アンインストール';

$GLOBALS["lang"]['Uninstall the Agent'] = 'エージェントのアンインストール';

$GLOBALS["lang"]['United Arab Emirates'] = 'アラブ首長国連邦';

$GLOBALS["lang"]['United Kingdom'] = 'イギリス';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'アメリカ合衆国 Minor Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'アメリカ合衆国 バージン諸島';

$GLOBALS["lang"]['United States of America'] = 'アメリカ合衆国';

$GLOBALS["lang"]['Unknown'] = '未知の';

$GLOBALS["lang"]['unlock_pin'] = 'ロック解除ピン';

$GLOBALS["lang"]['Unlock Pin'] = 'ロック解除ピン';

$GLOBALS["lang"]['Unscheduled'] = 'キャンセル';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = '5.2.0で使用されていない。';

$GLOBALS["lang"]['Unused.'] = '未使用。';

$GLOBALS["lang"]['Update'] = 'ニュース';

$GLOBALS["lang"]['update_external_count'] = '外部カウントの更新';

$GLOBALS["lang"]['Update External Count'] = '外部カウントの更新';

$GLOBALS["lang"]['update_external_from_internal'] = '内部から外部の更新';

$GLOBALS["lang"]['Update External From Internal'] = '内部から外部の更新';

$GLOBALS["lang"]['update_internal_count'] = '内部カウントを更新する';

$GLOBALS["lang"]['Update Internal Count'] = '内部カウントを更新する';

$GLOBALS["lang"]['update_internal_from_external'] = '外部からの内部更新';

$GLOBALS["lang"]['Update Internal From External'] = '外部からの内部更新';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Open-AudITからNMISデバイスを更新';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Open-AudITの更新 デバイスから ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Open-AudITの更新 NMISのデバイス';

$GLOBALS["lang"]['Update Vulnerabilities'] = '脆弱性の更新';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = '{collection} エントリの属性を更新します。';

$GLOBALS["lang"]['Update attributes'] = '属性の更新';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '毎回検出されたIPが応答するたびに更新されます。';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'NmapでスキャンしたIPで毎回検出が実行されました。';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '監査可能なデバイスで毎回発見が実行されました。';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'クエリができたデバイスで毎回ディスカバリーが実行されました。';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '毎回ディスカバリーが実行されました。';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '発見が実行されるたびに更新されます。';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '発見が完了したたびに更新しました。';

$GLOBALS["lang"]['Updating'] = '新着情報';

$GLOBALS["lang"]['Upgrade'] = 'アップグレード';

$GLOBALS["lang"]['Upload an audit result file'] = '監査結果ファイルのアップロード';

$GLOBALS["lang"]['Upper Case'] = 'アッパーケース';

$GLOBALS["lang"]['uptime'] = 'アップタイム';

$GLOBALS["lang"]['Uptime'] = 'アップタイム';

$GLOBALS["lang"]['Urdu'] = 'ウルドゥー';

$GLOBALS["lang"]['url'] = 'ウルル';

$GLOBALS["lang"]['Url'] = 'ウルル';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'ウルグアイ、東共和国';

$GLOBALS["lang"]['usb'] = '会社概要';

$GLOBALS["lang"]['Usb'] = '会社概要';

$GLOBALS["lang"]['use'] = '使用条件';

$GLOBALS["lang"]['Use'] = '使用条件';

$GLOBALS["lang"]['use_authentication'] = '認証を使用する';

$GLOBALS["lang"]['Use Authentication'] = '認証を使用する';

$GLOBALS["lang"]['use_authorisation'] = '認証を使用する';

$GLOBALS["lang"]['Use Authorisation'] = '認証を使用する';

$GLOBALS["lang"]['Use Proxy'] = 'プロキシを使用する';

$GLOBALS["lang"]['Use SNMP'] = 'SNMPを使う';

$GLOBALS["lang"]['Use SSH'] = 'SSHを使う';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'セキュア(LDAPS)を使用する';

$GLOBALS["lang"]['Use Service Version Detection'] = 'サービス版の検出の使用';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'サービス版の検出を使用して下さい。 検出されたポートが開いているように検出される場合、 <i>ログイン</i>, Nmap は、このポート上で実行するサービスのバージョンを決定する試みで、ターゲットデバイスをクエリします。<br/>未分類のデバイスを識別する際に便利です。 以前は使用していませんでした。';

$GLOBALS["lang"]['Use WMI'] = 'WMIの使用';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = '利用する <i>サインイン方法</i> OIDC - OpenID 接続と接続 <i>応用タイプ</i> Webアプリケーション クリック <i>次へ</i>お問い合わせ';

$GLOBALS["lang"]['Use for Authentication'] = '認証に使用する';

$GLOBALS["lang"]['Use for Roles'] = 'ロールの使用';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = '表示時に標準インストールオプションを使用して、クリックします <i>お問い合わせ</i>, <i>次へ</i> そして、 <i>インストール</i> Nmap をインストールするボタン。';

$GLOBALS["lang"]['used'] = '使用条件';

$GLOBALS["lang"]['Used'] = '使用条件';

$GLOBALS["lang"]['used_count'] = '使用された計算';

$GLOBALS["lang"]['Used Count'] = '使用された計算';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'OpenLDAPでのみ使用';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = '単一の装置を発見するとき内部で使用されて。';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = '単一の装置を発見するとき内部で使用されて。 サイトマップ <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'LDAP サーバーがユーザーの詳細をポップアップするように設定されている場合に使用されます。これには、アクセスした Orgs が含まれます。 ユーザーがこのLDAPグループにいる場合、このorgに割り当てられます。';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'LDAP サーバーがユーザーの詳細をポップアップするように設定されている場合に使用されます。これは、割り当てられたロールを含みます。 ユーザーがこのLDAPグループにいる場合は、このロールを割り当てます。';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'OpenLDAP を検索して、グループのメンバーに uid したユーザーと一致するように使用します。 デフォルト <code>memberUid</code>お問い合わせ OpenLDAPでのみ使用';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = '統合およびFirstWaveの監視の適用と使用される。';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = '統合およびFirstWaveの監視の適用と使用される。 発見によって検出されるSNMPを働かせればyに置きます。';

$GLOBALS["lang"]['user'] = 'ユーザー登録';

$GLOBALS["lang"]['User'] = 'ユーザー登録';

$GLOBALS["lang"]['User DN'] = 'ユーザ DN';

$GLOBALS["lang"]['user_group'] = 'ユーザーグループ';

$GLOBALS["lang"]['User Group'] = 'ユーザーグループ';

$GLOBALS["lang"]['user_id'] = 'ユーザーID';

$GLOBALS["lang"]['User ID'] = 'ユーザーID';

$GLOBALS["lang"]['user_interaction'] = 'ユーザーインタラクション';

$GLOBALS["lang"]['User Interaction'] = 'ユーザーインタラクション';

$GLOBALS["lang"]['User Membership Attribute'] = 'ユーザーメンバーシップ属性';

$GLOBALS["lang"]['user_name'] = 'ユーザー名';

$GLOBALS["lang"]['User Name'] = 'ユーザー名';

$GLOBALS["lang"]['User Policies'] = 'ユーザーポリシー';

$GLOBALS["lang"]['Username'] = 'ユーザ名';

$GLOBALS["lang"]['username'] = 'ユーザ名';

$GLOBALS["lang"]['users'] = 'ユーザ名';

$GLOBALS["lang"]['Users'] = 'ユーザ名';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'ユーザはネットスタットポートと同様に動作します。 一致する名前、ステータス、パスワードの詳細(変更可能、期限切れ、必要)を持つユーザーがいる場合、ポリシーは渡します。';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'ユーザー、ロール、オラグ';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'CodeIgniter PHPフレームワークを使用します。';

$GLOBALS["lang"]['Using'] = '使用方法';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Auth の Entra を使用する';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPSの使用';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA の使用';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Webブラウザを使うと、フォーマットオプションを使うと便利ですが、JSON形式の結果が表示されます。 format=json を追加すると、このようになります。 通常、Webブラウザは受信ヘッダーをHTMLに設定しますので、その場合はレンダリングされたページを返します。 JSON を取得する API を使用して、受け入れヘッダーを設定する必要があります。';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = '通常 Mbs, 場所 A から.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = '通常 Mbs, 場所 B から.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = '通常 Mbs, 宛先 A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = '通常 Mbs, 宛先 B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = '通常は3に設定する必要があります。';

$GLOBALS["lang"]['Uzbekistan'] = 'ウズベキスタン';

$GLOBALS["lang"]['VLAN'] = 'プラン';

$GLOBALS["lang"]['VLAN ID'] = 'プランID';

$GLOBALS["lang"]['valid_from'] = '有効から';

$GLOBALS["lang"]['Valid From'] = '有効から';

$GLOBALS["lang"]['valid_from_raw'] = '未加工から有効';

$GLOBALS["lang"]['Valid From Raw'] = '未加工から有効';

$GLOBALS["lang"]['valid_to'] = '有効にするには';

$GLOBALS["lang"]['Valid To'] = '有効にするには';

$GLOBALS["lang"]['valid_to_raw'] = '未加工に有効な';

$GLOBALS["lang"]['Valid To Raw'] = '未加工に有効な';

$GLOBALS["lang"]['Valid Values'] = '有効な値';

$GLOBALS["lang"]['value'] = 'バリュー';

$GLOBALS["lang"]['Value'] = 'バリュー';

$GLOBALS["lang"]['Value Types'] = '値タイプ';

$GLOBALS["lang"]['values'] = 'バリュー';

$GLOBALS["lang"]['Values'] = 'バリュー';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = '値: の場合 <i>リスト</i> フィールドは、これは有効な値のコンマ区切りリストでなければなりません。';

$GLOBALS["lang"]['Vanuatu'] = 'バヌアツ';

$GLOBALS["lang"]['VarChar'] = 'ヴァルチャー';

$GLOBALS["lang"]['Varchar'] = 'ヴァルチャー';

$GLOBALS["lang"]['variable'] = '変数';

$GLOBALS["lang"]['Variable'] = '変数';

$GLOBALS["lang"]['Various'] = '各種';

$GLOBALS["lang"]['vendor'] = 'ベンダー';

$GLOBALS["lang"]['Vendor'] = 'ベンダー';

$GLOBALS["lang"]['Vendor Report'] = 'ベンダーレポート';

$GLOBALS["lang"]['vendors'] = 'ベンダー';

$GLOBALS["lang"]['Vendors'] = 'ベンダー';

$GLOBALS["lang"]['Venezuela'] = 'ベネズエラ';

$GLOBALS["lang"]['Version'] = 'バージョン';

$GLOBALS["lang"]['version_padded'] = 'バージョン Padded';

$GLOBALS["lang"]['Version Padded'] = 'バージョン Padded';

$GLOBALS["lang"]['version_raw'] = 'バージョンの未加工';

$GLOBALS["lang"]['Version Raw'] = 'バージョンの未加工';

$GLOBALS["lang"]['version_string'] = 'バージョン文字列';

$GLOBALS["lang"]['Version String'] = 'バージョン文字列';

$GLOBALS["lang"]['video'] = 'ビデオ';

$GLOBALS["lang"]['Video'] = 'ビデオ';

$GLOBALS["lang"]['Vietnam'] = 'ベトナム';

$GLOBALS["lang"]['Vietnamese'] = 'ベトナム';

$GLOBALS["lang"]['View'] = 'ニュース';

$GLOBALS["lang"]['View All'] = 'すべて表示';

$GLOBALS["lang"]['View Details'] = '詳細を見る';

$GLOBALS["lang"]['View Device'] = 'デバイスを見る';

$GLOBALS["lang"]['View Discovery'] = 'ディスカバリーを見る';

$GLOBALS["lang"]['View Policy'] = 'ポリシーを見る';

$GLOBALS["lang"]['View Racks'] = 'ラックを見る';

$GLOBALS["lang"]['View the'] = '詳細はこちら';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = '問題の発見を表示し、右上のツールバーの「サポート」ボタンをクリックします。 これは、発見の設定、設定項目、発見デバイスリスト、およびこの特定の発見のためのログを提供します。';

$GLOBALS["lang"]['View the release notes on the'] = 'リリースノートを見る';

$GLOBALS["lang"]['Virtual Private Network'] = 'バーチャルプライベートネットワーク';

$GLOBALS["lang"]['Virtual private network'] = '仮想プライベートネットワーク';

$GLOBALS["lang"]['Virtualisation'] = '仮想化';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'YouTubeチャンネルにアクセスして、チュートリアル動画をご覧ください。';

$GLOBALS["lang"]['vlan'] = 'ログイン';

$GLOBALS["lang"]['Vlan'] = 'ログイン';

$GLOBALS["lang"]['vlan_id'] = 'ブランID';

$GLOBALS["lang"]['Vlan ID'] = 'ブランID';

$GLOBALS["lang"]['vm'] = 'ログイン';

$GLOBALS["lang"]['Vm'] = 'ログイン';

$GLOBALS["lang"]['vm_device_id'] = 'VmデバイスID';

$GLOBALS["lang"]['Vm Device ID'] = 'VmデバイスID';

$GLOBALS["lang"]['vm_group'] = 'Vmグループ';

$GLOBALS["lang"]['Vm Group'] = 'Vmグループ';

$GLOBALS["lang"]['vm_ident'] = 'Vm の ID';

$GLOBALS["lang"]['Vm Ident'] = 'Vm の ID';

$GLOBALS["lang"]['vm_server_name'] = 'Vm サーバー名';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm サーバー名';

$GLOBALS["lang"]['vm_vendor'] = 'Vmのベンダー';

$GLOBALS["lang"]['Vm Vendor'] = 'Vmのベンダー';

$GLOBALS["lang"]['vuln_status'] = 'Vulnステータス';

$GLOBALS["lang"]['Vuln Status'] = 'Vulnステータス';

$GLOBALS["lang"]['vulnerabilities'] = '脆弱性';

$GLOBALS["lang"]['Vulnerabilities'] = '脆弱性';

$GLOBALS["lang"]['vulnerabilities_cache'] = '脆弱性キャッシュ';

$GLOBALS["lang"]['Vulnerabilities Cache'] = '脆弱性キャッシュ';

$GLOBALS["lang"]['Vulnerabilities and Results'] = '脆弱性と結果';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = '2025年1月1日以前に最初に公開された脆弱性(デフォルト)。 何年も前から受け継がれてきた脆弱性は感じません。 設定で変更できます。';

$GLOBALS["lang"]['vulnerability_id'] = '脆弱性ID';

$GLOBALS["lang"]['Vulnerability ID'] = '脆弱性ID';

$GLOBALS["lang"]['Vulnerability Status'] = '脆弱性状況';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - ソフトウェアポリシーを使用してベースラインを作成するとき、現在のCentosとRedHatは、名前を使用してカーネルをパッケージ化します <i>カーネル</i> そして、 <i>カーネルデベル</i>お問い合わせ この名前と異なるバージョンが同時インストールされている複数のパッケージがあります。 Debian ベースのディストリビューションは、名前を以下のように使用しています。 <i>linux-image-3.13.0-24-ジェネリック</i>パッケージ名にバージョン番号が含まれていることに注意してください。 RedHatベースのオペレーティングシステムは、この形式を使用しており、異なるバージョンの複数の同一パッケージ名が現在除外されているため <i>カーネル</i> そして、 <i>カーネルデベル</i> ソフトウェアポリシーから。 今後のアップデートに対処できます。';

$GLOBALS["lang"]['WHERE'] = 'ログイン';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI認証要件';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = '完了するまで待ってから、エージェントをインストールするには、次の行に貼り付けます。';

$GLOBALS["lang"]['wall_port'] = '壁港';

$GLOBALS["lang"]['Wall Port'] = '壁港';

$GLOBALS["lang"]['Wallis and Futuna'] = 'ウォリスとフツナ';

$GLOBALS["lang"]['Want to know more?'] = 'お問い合わせ';

$GLOBALS["lang"]['Warning'] = 'インフォメーション';

$GLOBALS["lang"]['warranty'] = '保証';

$GLOBALS["lang"]['Warranty'] = '保証';

$GLOBALS["lang"]['warranty_duration'] = '保証期間';

$GLOBALS["lang"]['Warranty Duration'] = '保証期間';

$GLOBALS["lang"]['warranty_expires'] = '保証終了';

$GLOBALS["lang"]['Warranty Expires'] = '保証終了';

$GLOBALS["lang"]['warranty_status'] = '保証の状態';

$GLOBALS["lang"]['Warranty Status'] = '保証の状態';

$GLOBALS["lang"]['warranty_type'] = '保証タイプ';

$GLOBALS["lang"]['Warranty Type'] = '保証タイプ';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'また、スキャン前のPing(長期滞在したARPキャッシュを持つルータの重要性)オプションもあります。 これは通常良い考えです。';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = '我々はまた、私たちの行動項目を持っています(以下、順に実行されます):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'この質問をよく聞かれ、最も間違いなく答えは <i>それは依存します</i>お問い合わせ スキャンされる IP の数に依存します。, ネットワーク接続速度, スキャンされているデバイスの速度, スキャンされるデバイスのタイプ, 異なる資格情報のテストとOpen-AudITサーバーの速度. これらの変数を入力し、値を返すことを可能にする計算機はありません。 単純に複雑すぎる。 一般的に、私は256 IPアドレスに私の発見を制限します - すなわち、/24サブネット。 お客様には、16個のサブネット(65kアドレス)をスキャンして作業していますが、長時間かかることもあります。 24ブロックでスキャンがより良くなります。 あなたのアドレス範囲が何であるかを単に知らなければ、これは種子の発見のための良いケースです。';

$GLOBALS["lang"]['We have more detailed instructions on'] = '私達により多くの詳しい指示があります';

$GLOBALS["lang"]['We have tests for:'] = '次のようなテストがあります:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Open-AudIT がお役に立てたら幸いです。';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'デフォルトオプションでスクリプトのデフォルトリストを初期設定します。 スクリプトのリストは /scripts で確認できます。 これらのデフォルトスクリプトは削除できません。 必要に応じて追加のスクリプトを作成できます。 スクリプトは既存のスクリプトに基づいており、カスタムオプションが適用されます。 スクリプトは、メニューの一覧ページからダウンロードできます: 発見 → 監査スクリプト -> 監査スクリプトのリスト.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'ネットワーク上のデバイスに効果的に話すことができる資格情報が必要です。';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = '最小限のデータ量と機密性のないデータを送信します。 ライセンスデータ(名前、種類など)、アプリケーションデータ(名前、バージョン、プラットフォーム、タイムゾーンなど)、記録されたエラー、デバイスの種類と使用される機能の数を送信します。 <i>その他</i> 環境はデバイスを持ち、送信するデータの唯一の部分です。 デバイスの種類と数だけ。 モデルではなく、メーカーではありません。 特別なものはありません。 ネットワークなし IPアドレスはありません。 OSバージョンはありません。 ソフトウェア名はありません。 UUID と Server のフィールドは、sha256 でエンコードされます(つまり、値がわかりません)。 製品の改良が必要なデータだけを送っています。 皆様のお越しをお待ちしております。 製品の改良や新機能の焦点を合わせる場所を案内します。';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = '私たちは、実際の残りのクエリをテストするために、Postmanと呼ばれるGoogle Chrome拡張を使用する傾向があります。 インストールしてテストしたいかもしれません。';

$GLOBALS["lang"]['Web'] = 'サイトマップ';

$GLOBALS["lang"]['Web Application Routes'] = 'Webアプリケーションルート';

$GLOBALS["lang"]['Web Server Discovery'] = 'Webサーバーのディスカバリー';

$GLOBALS["lang"]['Webserver'] = 'ウェブサーバ';

$GLOBALS["lang"]['Website'] = 'サイトマップ';

$GLOBALS["lang"]['Wednesday'] = '水曜日';

$GLOBALS["lang"]['weight'] = 'サイズ:';

$GLOBALS["lang"]['Weight'] = 'サイズ:';

$GLOBALS["lang"]['weight_current'] = '重量の流れ';

$GLOBALS["lang"]['Weight Current'] = '重量の流れ';

$GLOBALS["lang"]['weight_empty'] = '重量 空';

$GLOBALS["lang"]['Weight Empty'] = '重量 空';

$GLOBALS["lang"]['weight_max'] = '重量 最高';

$GLOBALS["lang"]['Weight Max'] = '重量 最高';

$GLOBALS["lang"]['Welcome'] = 'お問い合わせ';

$GLOBALS["lang"]['Welcome Dashboard'] = 'ウェルカムダッシュボード';

$GLOBALS["lang"]['Welcome to'] = 'ようこそ!';

$GLOBALS["lang"]['Western Sahara'] = '西サハラ';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '私は資格を持っていない場合、私は期待できるもの';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Open-AudITでないNMISから望むフィールドは? お問い合わせ Open-AudITに存在しない外部システム(NMIS)内のフィールドは、Open-AudITカスタムフィールドとして自動的に作成されます。';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = '他のネットワーク機器について スイッチ、ルータ、プリンターなどを考えます。 明らかに、これらのデバイスにSNMP認証情報を提供することができれば、それは最善です。 必要なだけ <i>読み取り専用</i> アクセス しかし、たとえそうしたくない場合は、発見の実行からあなたを停止し、デバイスを見つけ、ルールまたは2を識別するために何もありません(例えば、開いたポートと組み合わせてMACアドレス接頭辞を使用する)。 あまり情報がありませんが、彼らがネットワーク上にあること、彼らが何であるか、そして彼らが見られた最後の時間だったときを知るでしょう。 ネットワーク上に何か新しいものが現れているか確認します。';

$GLOBALS["lang"]['What do we send?'] = '送信内容';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'これは実際にあなたにとってどういう意味ですか?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'この棚の目的は何ですか。';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'この場所のタイプは何ですか。 保有可能なタイプ <code>attributes</code> テーブル。';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Linux で Open-AudIT が Windows マシンを発見したら、リモートコマンドを実行するには、';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'WindowsでOpen-AudITがWindowsマシンを発見するとき、リモートコマンドを実行するには、';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Open-Audの場合 IT は、監査実行中にデバイスを発見するか、デバイスをインポートするユーザーによって、デバイスに関するデータを受け取ります。この検出されたデバイスが既にデータベース内に存在するデバイスと一致するか、新しいデバイスを追加すべきかどうかを判断する必要があります。 Open-AudIT は、12 個のプロパティマッチのシリーズを使用して、これを決定します。 マッチルールは、または比較として機能します。 これは、発見されたデバイスでフィールドに一致する最初のルールが、dB で既存のデバイスとして解決することを意味します。 すべての一致ルールは、デバイスが新しくなり、新しいレコードが作成されるために失敗する必要があります。';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'データをPOSTするときは、アクセストークンを含める必要があります。 リクエストごとにアクセストークンが生成されるので、GET(例えば)を生成し、Accept: application/json は、meta→access_token のレスポンスを解析し、リクエストに含めます。 これはフィールドデータ[access_token]、IE、トップレベルに配置する必要があります。';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'デバイスが 監査スクリプトを発見すると、ファイル(またはディレクトリ)の詳細が注入されます。 両方のオーディション_linux.shとedit_windows.vbsは、ファイルパスに関係なく、ポップアップ表示されます。 考えれば <i>しかし、WindowsマシンにLinuxパスを置くと、物事が壊れます!</i>、それは壊れません、あなたはちょうどそのファイルやディレクトリエントリから任意のデータを受信しません。<br/>得られた細部はで貯えられます <i>ファイル</i> データベーステーブルは他の属性のように保存されます。 ファイルの詳細は他の属性として保存され、次の属性が変更された場合にアラートを生成します - <i>フルネーム</i>, <i>ハッシュ</i>, <i>ログイン</i>, <i>最後の変更</i>お問い合わせ 表には、system_id、first_seen、last_seen、現在のカラム、ファイルの詳細が含まれます。<br/>記録された属性は:<br/><ul><li>Windows - 名前、サイズ、ディレクトリ、SHA1ハッシュ(ファイルコンテンツの)、最後に変更、パーミッション、所有者、バージョン(ファイル許可)。</li><br/><li>Linux - 名前、サイズ、ディレクトリ、SHA1ハッシュ(ファイル内容の)、最後に変更されたメタデータ、最後に変更されたパーミッション、所有者、グループ、inode。</li></ul>WindowsとLinuxの両方の監査スクリプトのセクションを以下のように表示します。';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = '発見が実行されると、関連する検出スキャンオプションが選択され、それらの設定はNmapで対象デバイスをスキャンします。 スキャンオプションは、nmapスキャンのポート、スキャンの高速化、およびnmap pingが最初にIPがライブであるか否かを決定するために使用されます。';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = '発見が実行されると、関連する検出スキャンオプションが選択され、Nmapが対象デバイスをスキャンする設定が選択されます。 オプションが設定されていない場合、デフォルト設定項目(discovery_default_scan_option)が選択され、使用されます。 Open-AudITコミュニティは、すべての発見のための設定としてデフォルトオプションを使用します。';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'サブネットの検出が実行されると、選択した場合、Nmap ping は範囲または IP アドレスでスキャンします。 対応するデバイスはポートスキャンされます。 Nmap ping スキャンが要求されていない場合、各 IP は個別にスキャンされます。 どの港か。 それが決定される';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'SSH 経由で Linux デバイスを監査する場合、一部の Linux ディストリビューションでは、 sudo コマンドが TTY なしで渡されることはありません。 これらのLinuxディストリビューションの1つを完全に監査するには、rootユーザー資格情報を提供するのが最善です。 ルートが供給されず、TTYなしでsudoができない場合は、監査スクリプトは実行されますが、それ以外の場合はデータ量は含まれません。 ルート(またはsudoを使用してローカルで実行)を使用して下位監査は、したがって、システムの詳細を提供し、いくつかの生成を行います <i>変更点</i>お問い合わせ';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'デバイスを組み合わせると、情報に対する権威あるソースです。';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = '完了したら、コマンドウィンドウを閉じて完了です!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'ウィジェットを作成するときに、ウィジェットを選択した場合 <i>アドバンスト</i> ボタンには、独自のカスタムSQLをアップロードする機能があります。';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '外部システムからデバイスを統合するときは、デバイスがOpen-AudITに存在しない場合は、それを作成する必要がありますか?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '外部システムからデバイスを統合する場合、外部システムにデバイスが更新されている場合は、Open-AudITで更新する必要がありますか?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'ディスカバリーを調査する際には、エクスポートされたディスカバリーログをリクエストします。 これらを取得するには、メニュー -> 発見 →';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Linux ベースのデバイスと一致する場合、ホスト名で連結された Dbus id を使用することをお勧めします。 また、以下の表で他のオプションを使用できますが、ルートなしでDbus IDを取得できます。 UUID(マザーボードから)を取得するには、rootが必要なdmidecodeを実行する必要があります。 残念ながら、ESXiゲストをクローンすると、Dbus IDは再作成されません。したがって、ホスト名でこれを連結します。 ここにリンクしている良い記事があります。 <i>理由</i> ハードウェアID';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'JSON をリクエストする場合、デフォルトでは制限はありません。 スクリーンリクエストの表示時に、デフォルトで1000に設定されます。 設定で変更できます。 詳細はこちら <i>ページサイズ</i> アイテム';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '外部デバイスを取得する場合は、その時にディスカバリーを実行する必要がありますか?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Windows で Open-AudIT を実行するとき、Apache サービスアカウントは、 <i>レギュラー</i> ユーザ(または管理者)。 これは、 <i>ローカルシステム</i> 通常、Apache を実行するために使用されているアカウントは、任意のネットワークリソースにアクセスできません。 IE - 監査スクリプトをWindows PCにコピーするためにローカルシステムアカウントアカウントとして実行する際にApacheを使用することはできません。';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'コンフィギュレーションオプションが設定されている場合は、コンフィギュレーション項目が有効になっているマッチルールの特定の定義されたサブセットのために、デバイスのためにこれを考慮に入れます。 これらのルールは次のとおりです。';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = '発見時にルールが実行されると、任意のマッチングルールは、発見ログに表示されます。 以下を参照してください。';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'このベンチマークが実行されると 関連するから派生 <code>tasks.type</code> そして、 <code>tasks.sub_resource_id</code>お問い合わせ';

$GLOBALS["lang"]['When this log was created.'] = 'このログが作成されたとき。';

$GLOBALS["lang"]['When this queue item started processing.'] = 'このキュー項目が処理を開始したとき。';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Open-AudIT Professional または Enterprise を使用する場合は、Dashboards にウィジェットが利用でき、カスタム表示できます。';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = '内部で選択したデバイスを外部システム用のオブジェクトに変換すると、外部データが何であるか。 EG:整数、文字列など';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'このベースラインを実行すると、このベースラインのポリシーにないデバイス上のアイテムを確認する必要があります。';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '開いているポートを受け取ると、現在稼働しているサービスのバージョンについてテストを試みる必要がありますか? 実際の走行サービスの確認を支援します。';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Cloud を使用して Amazon AWS インスタンスを発見すると、2 つのクレデンシャルアイテム - キーとシークレットキーが必要になります。 あなたのキーは、すでにあなたとあなたの秘密鍵に知られています。 なお、Amazonが提供するAWSコンソールを使用して秘密鍵を取得することはできません。 誤った場合、新しいものを生成する必要があります。';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Cloud を使用して Microsoft Azure インスタンスを発見する場合、サブスクリプション ID、テナント ID、クライアント ID、クライアントシークレットの 4 つのクレデンシャルアイテムが必要です。';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'ディスカバリーを作成すると、 device_assigned_to_org のオプションがあります。 これは、この発見のために発見された任意のデバイスが割り当てられることを意味します(取得) <code>devices.org_id</code> 選択した組織に設定します。';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'アドバンストボタンをクリックすると、新しい発見を作成すると、変更する多くのオプションがあります。そのうちの1つは発見の種類です。 タイプは、常にサブネット(上記範囲、サブネット、ipオプション)、Active Directory です。 v4.1 では、Open-AudIT には、シードと呼ばれる新しい発見タイプがあります。';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'クエリをスケジュールで実行できるようにすると、クエリは選択したアドレスに電子メールが送信されます。 メニュー -> でメールを設定する必要があります 管理者 -> エンタープライズ -> 電子メール Config. 私達にまたあります <i>テストメール<i> そのページ上のボタン。 詳細情報を入力し、保存してからテストします。 成功しているか否認し、それが成功した場合は、明らかにテストメールが到着するかどうかを通知するモラルボックスを持っている必要があります。 設定したメールが送信されると、スケジュールされたクエリが設定できます。<br/><br/>名前、任意記述を提供して下さい、選ぶ <i>クエリ</i> タイプは、希望するクエリを選択し、メールアドレスを提供し、形式を選択し、スケジュールを設定します。<br/><br/>1時間(時間のみ)を提供して、タスクに名前を付けます(これは実際のスケジュールされたクエリ自体の名前ではありません)、クエリランを希望する日を選択し、実行したいクエリを選択し、メールアドレスを供給し、クエリ形式を選択し、完了します。<br/>クエリのメール本文(html形式)と、要求されたフォーマットに添付されたクエリーでクエリーが送信されます。</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = '列見出しの1つにテキストを入力すると、単に通常の単語を使うことができます。 例えば、入力時に <code>computer</code> 上記の検索ボックスに <i>タイプ:</i> 列、検索は、コンピュータの種類ですべてのデバイスを返します。 エッセンシャル、オープンオード URL のような URL を使ってデータをリクエストする <code>devices?devices.type=computer</code>お問い合わせ これで、dataTables の検索を使用して 1 つの重要な違いがあります。';

$GLOBALS["lang"]['where'] = 'どこまでも';

$GLOBALS["lang"]['Where'] = 'どこまでも';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = '$x は数です。 このLDAPエントリは、DB にあり、取得されています。';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'デバイスの詳細画面では、このフィールドが表示される場所が表示されます。';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'ラックが列にある場所。';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '脆弱性が影響、可用性、機密性を使用して、コンポーネントに影響するかどうか。';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'ユーザインタラクションが必要かどうか(なし、パッシブ、アクティブ)。';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'このベンチマークはどのOSにも適用されます。';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '外部システムからOpen-AudITを作成するデバイス(もしあれば)。 すべて、なし、または与えられた属性を使用します。';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = '私たちが発見するネットワーク これは、のフォーマットにある必要があります';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'サブメニューがこのクエリを表示すべきである。';

$GLOBALS["lang"]['Who made this rack.'] = '誰がこのラックを作ったか。';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'なぜWindowsサーバーだけか。';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'なぜこのポリシーを除外しますか?';

$GLOBALS["lang"]['Wide Area Network'] = '広域ネットワーク';

$GLOBALS["lang"]['Wide area network'] = '広域ネットワーク';

$GLOBALS["lang"]['Widget'] = 'ウィジェット';

$GLOBALS["lang"]['Widget #'] = 'ウィジェット #';

$GLOBALS["lang"]['Widget # '] = 'ウィジェット # ';

$GLOBALS["lang"]['Widget Type'] = 'ウィジェットの種類';

$GLOBALS["lang"]['widgets'] = 'ウィジェット';

$GLOBALS["lang"]['Widgets'] = 'ウィジェット';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'ウィジェットはDashboardsで使用するように設計されています。 企業ユーザーは、必要に応じてウィジェットを作成、更新、削除する完全自由を持っています。';

$GLOBALS["lang"]['width'] = 'アクセス';

$GLOBALS["lang"]['Width'] = 'アクセス';

$GLOBALS["lang"]['windows'] = 'ウィンドウズ';

$GLOBALS["lang"]['Windows'] = 'ウィンドウズ';

$GLOBALS["lang"]['Windows Packages'] = 'Windowsのパッケージ';

$GLOBALS["lang"]['Windows Test Script'] = 'Windowsテストスクリプト';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'ウィンドウズ ユーザー ワーク ユニット #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windowsユーザーワークユニット #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'ウィンドウズは、開始からサービスをブロックしている可能性があります。 ターゲットでは、Windows Security のアップルを起動し、WinExeSvc の実行可能が実行できるようにします(デバイス上で許可し、アクションを開始)。';

$GLOBALS["lang"]['Winexe page on Samba'] = 'SambaのWinexeページ';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe は、次の Windows サービスを開始し、実行する必要があります。: netlogon と rpc サービスを実行します。.<br/><br/>対象となるWindowsマシンにログオンし、netlogonとrpcが実行されているサービスを確認してください。';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe は、管理者 $ と RPC (ネットサービス開始) を使用してリモートサービス (winexesvc) をインストールし、開始します。 本サービスは、Open-AudITサーバーから、サブウェイに出力するコマンドを転送するために使用される名前付きパイプを初期化します。 終了すると、名前付きパイプが閉じて、 Winexesvc はより多くの接続を待ち、またはアンインストールします(与えられたオプションによって異なります)。';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'ワイヤレスローカルエリアネットワーク';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Open-AudITの3.3.0リリースで、クラスタの概念を導入しました。 これは、Webクラスター、データベースクラスター、またはファイルクラスター(または他の複数の目的のいずれか)のアイデアを特定のタイプ(高可用性、冗長性、スケーリングなど)に直感的にマップします。<br/><br/>選択したクラスターの目的に応じて、レポートは若干異なります。<br/><br/>たとえば、仮想化の目的でクラスターを作成すると、デバイスを追加したときに、それらのデバイス上の仮想マシンが表示されます。';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Clouds の機能の導入により、クラウド、Amazon AWS、Microsoft Azure、および Open-AudIT の詳細は、関連する API を使用して、各場所、ネットワーク、インスタンスのリストを取得し、各インスタンスを発見することができます。';

$GLOBALS["lang"]['wmi_fails'] = 'Wmiの失敗';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmiの失敗';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi タイムアウト';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi タイムアウト';

$GLOBALS["lang"]['workgroup'] = 'ワークグループ';

$GLOBALS["lang"]['Workgroup'] = 'ワークグループ';

$GLOBALS["lang"]['Working Credentials'] = '働く資格';

$GLOBALS["lang"]['Wrap Up'] = 'ラップアップ';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'PHPスクリプト言語で書かれています。';

$GLOBALS["lang"]['XML'] = 'ログイン';

$GLOBALS["lang"]['Yellow Query'] = '黄色のクエリ';

$GLOBALS["lang"]['Yemen'] = 'イエメン';

$GLOBALS["lang"]['Yes'] = 'はい';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Executablesコレクションのエントリとしてスキャンされる追加のディレクトリを定義できます。 定義されると、ディレクトリとサブディレクトリは実行可能であるファイルに対してスキャンされます。 ディレクトリとファイルを除外することも可能です。 アクティブにすると、これらはlinux監査スクリプトに注入され、実行されるたびに実行されます(通常、発見の一部として)。 これらをスクリプトで望むなら、手動でターゲットにコピーすることができます。 → スクリプト → スクリプトを一覧表示し、そこからスクリプトをダウンロードします。';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = '監査スクリプトを特定の要件に合わせて変更することは常に自由です。 デフォルトスクリプトで上書きされるので、アップグレードするときに(re)incorporateする必要があります。 変更されたスクリプトのマスターコピーを保存し、Open-AudIT をアップグレードし、新しいデフォルトスクリプトと変更されたスクリプトとの違いを diff を実行し、違いを適用することをお勧めします。 監査スクリプトはネイティブスクリプト(Windows は VBScript で、その他は Bash です)です。 シンプルで簡単な変更 - アップグレードする前に、変更のコピーを持っていることを確認してください。';

$GLOBALS["lang"]['You are running version'] = 'バージョンを実行している';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = '通常の Open-AudIT JSON ベースの API を使用してコレクションにアクセスすることができます。 他のコレクションと同じように。 お問い合わせ';

$GLOBALS["lang"]['You can also'] = 'また、';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'また、変更が適用されるデバイスを示すテーブルがページの下部に表示されます。';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = '下記のフォーマットでプロパティを指定することもできます。';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = '仮想インフラ(ESX、Azure、et al)でFirstwave VM を常に実行できます。 Firstwave VM は Debian linux を実行し、OS ライセンスの懸念と制限から無料です。 または選択のあなた自身のLinuxのdistroに取付けて下さい。 Redhat 9、Ubuntu 20.04、22.04、24.04、Debian 11と12をサポートしています。';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'デバイスを自動的に位置に割り当てることができます。';

$GLOBALS["lang"]['You can assign devices using custom'] = 'カスタムでデバイスを割り当てることができます';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'レジストリキーを作成することで、実際の管理者アカウントを使用していないリモートマシンを監査できます。 監査され、使用しているユーザーの資格情報が管理者グループのメンバーであることを確認するために、すべてのマシンで以下のキーを作成します。';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'あなたは確かにネットワーク内のデバイス上の有効な資格情報なしで発見を実行することができます, しかしながら, 取得した情報は、Open-AudITが取得する能力の非常に小さなサブセットになります <i>お問い合わせ</i> 認証情報';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'ベースラインを作成し、デバイスのグループに対して実行し、結果を表示し、スケジュールされた実行を追加し、比較のためのより多くのテーブルを追加します(現在のソフトウェア、ネットスタットポート、およびユーザーが有効になっています)、ベースライン編集、結果のアーカイブなど。';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Windowsだけでなく、既存の監査スクリプトのすべてのオプションでスクリプトを作成できます。 AIX、ESX、Linux、OSX、Windowsはすべてカバーされています。';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'システム(NMISまたはOpen-AudIT)の統合全体をフィールドベースでカスタマイズできます。 Open-AudITまたはNMISでデバイスを作成および/または更新するオプションがあります。 作成したデバイスや更新されたデバイスなどで発見を実行する必要があります。 ページの右側に各項目の説明があります。';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'アプリケーションを定義し、デバイスをこのアプリケーションに関連付けることができます。 デバイスは複数のアプリケーションに関連付けられている可能性があります。 アプリケーションは、複数のデバイスに関連付けられている可能性があります。';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'デバイス詳細ページにある各デバイス用の追加フィールドの値を編集できます。 デバイスの詳細画面を表示し、フィールドを含むセクションを開き、(あなたが持っている場合)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'デバイスシードディスカバリーを制限して、以下のパラメーターの厳密なセット内でフォールディングできます。 <i>Subnetへの制限</i> そして、 <i>プライベートへの制限</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = '手動でデバイスを割り当てることができます';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'URL でフォーマットオプションを指定することでこれをオーバーライドできます。';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = '右側のチェックボックスをクリックするか、テーブルの右上にあるチェックボックスをクリックすることで、個々のデバイスを選択することができます(鉛筆のように見える編集ボタンの下)。';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'システム(デバイス)テーブルの属性を選択し、マッチングすることで、統合するデバイスを選択できます(メニュー→管理者→データベース→リストテーブル→フィールドのリストのシステムを参照)。 属性のマッチは単一の値だけにマッチすることができます。';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'メニューに移動して、任意のサーバーをコレクターに変えることができます -> 管理者 -> コレクター-> このコレクターをインストールします。 インストールしたサーバーにログオンする資格情報が必要になります。';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = '青いビューのアイコンをクリックして表示できます。 許可があれば編集または削除することもできます。';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'PHP MBString の拡張子はインストールされていません。 この拡張子は必須です。';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'PHP SNMP 拡張子がインストールされていない。 この延長は強くお勧めします。';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'このURLをスタッフにコピーして貼り付けることもできます。';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Active Directory または OpenLDAP がユーザーを認証するのではなく、権限を提供してほしい。 これを行うには、必ず <i>認証に使用する</i> Yにセットされ、 <i>ロールの使用</i> N に設定します。 認証情報は LDAP によって検証されますが、ユーザーは既に作成済みで Open-AudIT にロールを割り当てる必要があります。 こちらも <i>自動的に</i> お問い合わせ';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'これらのマッチルールは、グローバルにユニークでないアイテムに気づくかもしれません。 いくつかの例:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '新しいライセンスを追加する前に、既存のライセンスを削除する必要があります。';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'ベンチマークを実行するには、SSH の資格情報を使用する必要があります。 現在、Centos 7、Debian 12、Redhat 7、Redhat 8、Redhat 9、SLES 15、Ubuntu 20.04、Ubuntu 22.04をサポートしています。 さらなるリリースで展開予定です。';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'ファイル全体をテキストボックスにコピーして貼り付ける必要があります。 以下の場合は、すべてのテキストをコピーします。';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'edited_by と edited_date フィールドは含まれません。 これらは自動的に設定されます。';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'テキストの2番目の文だけを変更する必要があります。';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'ATTRIBUTE_NAME の必要な列(例、org_id)を置換する必要があります。';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'ポップアップする列の名前を含むヘッダ行を使用する必要があります。その後、その下のデータ行を使用します。';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = '必要な属性を含むテーブルのみを使用する必要があります。 通常は左の参加を使用します。 例えば';

$GLOBALS["lang"]['You will need a'] = 'お問い合わせ';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = '各ターゲットのWindowsコンピュータで開くWindowsファイアウォールでWMI用のポートが必要になります。 Windows用 コアサーバーは、ファイアウォール接続を1つずつ確実に許可します。';

$GLOBALS["lang"]['You will see a list of'] = 'リストが表示されます';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTubeチュートリアル';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API キー';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'JSON として Google Compute の認証情報。';

$GLOBALS["lang"]['Your Host is'] = 'お問い合わせ ホストはあります';

$GLOBALS["lang"]['Your Licenses'] = 'あなたのライセンス';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft AzureクライアントID。';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azureクライアントシークレット';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft AzureサブスクリプションID。';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft AzureテナントID。';

$GLOBALS["lang"]['Your PHP version is'] = 'あなたの PHP バージョンは';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'このクエリをポップアップする属性を選択するためのSQL。';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'このグループをポップアップするデバイスを選択するSQL。';

$GLOBALS["lang"]['Your SSH key.'] = 'SSHキー。';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'アクセス認証は、そのクラウドのネイティブ API によるものです。';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'あなたのデータはあなたのデータです。 いつでも抽出できます。 CSV、JSON、XMLへのエクスポートも便利です。 JSON API を持っています。 また、カスタムレポートを作成し、CSV、XML、JSONで出力したレポートを作成することができます。 繰り返しますが、それはあなたのデータです - 他の人ではなく。 データのセキュリティがあなたの手元にあると確信できます。';

$GLOBALS["lang"]['Your database platform is'] = 'データベースプラットフォームは';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'この接続のステータス(暫定、退職など)の説明。';

$GLOBALS["lang"]['Your description of this item.'] = 'この項目の説明。';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'このソフトウェアの一般的な名前';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'このソフトウェアの一般的なバージョン';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'ユーザは、クリックしてログオンできるようになりました <i>Entraのロゴン</i> Open-AudITのロゴ入りページにあるボタンです。 上記のように、ログオンが失敗した場合は、ログファイルをチェックし、ユーザーの確認を行ってください。 <i>ユーザー名</i>お問い合わせ<br/><br/>そして、そこまでもそこまでは、そうでなければいけません。 今、あなたのユーザーは、覚える資格の1セットが少ないはずです!<br/><br/>いつものように、この機能に問題が生じた場合は、メールをお送りください。';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'ユーザは、クリックしてログオンできるようになりました <i>OKTAでログオン</i> Open-AudITのロゴ入りページにあるボタンです。 上記のように、ログオンが失敗した場合は、ログファイルをチェックし、ユーザーの確認を行ってください。 <i>お名前 (必須)</i>お問い合わせ<br/><br/>そして、そこまでもそこまでは、そうでなければいけません。 今、あなたのユーザーは、覚える資格の1セットが少ないはずです!<br/><br/>いつものように、この機能に問題が生じた場合は、メールをお送りください。';

$GLOBALS["lang"]['Your web server is'] = 'ウェブサーバは';

$GLOBALS["lang"]['Zambia'] = 'ザンビア';

$GLOBALS["lang"]['Zimbabwe'] = 'ジンバブエ';

$GLOBALS["lang"]['a String'] = '文字列';

$GLOBALS["lang"]['active'] = 'アクティブ';

$GLOBALS["lang"]['active directory'] = 'アクティブディレクトリ';

$GLOBALS["lang"]['active/active'] = 'アクティブ/アクティブ';

$GLOBALS["lang"]['active/passive'] = 'アクティブ/パッシブ';

$GLOBALS["lang"]['advertisement'] = '広告掲載';

$GLOBALS["lang"]['alert'] = 'アラート';

$GLOBALS["lang"]['all'] = 'すべて';

$GLOBALS["lang"]['allocated'] = 'トップページ';

$GLOBALS["lang"]['amazon'] = 'アマゾン';

$GLOBALS["lang"]['an Integer'] = 'インテガー';

$GLOBALS["lang"]['and'] = 'そして、';

$GLOBALS["lang"]['and / or'] = 'または';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = '支援チケットの作成と運営を行います。';

$GLOBALS["lang"]['and another'] = 'その他';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = '最新のリリースセルフインストーラをダウンロードします。 このページをスクロールして検索する必要があります。';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'アプリケーション -> エンタープライズ アプリケーション (ファーム左メニュー) に移動し、クリックします。 <i>新しいアプリケーション</i>お問い合わせ';

$GLOBALS["lang"]['and its current time is'] = 'そして現在の時間はあります';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'そして今日前に保証期限の日付を見て下さい。';

$GLOBALS["lang"]['and review what is possible.'] = '何ができるのかを調べてみる。';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'と サインアウト リダイレクト URI は';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'そして最終的なラインは最も興味があるかもしれません。 これらの行は、ログインが失敗した正確なポイントを与える必要があります。';

$GLOBALS["lang"]['antivirus'] = 'アンチウイルス';

$GLOBALS["lang"]['application'] = 'アプリケーション';

$GLOBALS["lang"]['approved'] = '認定資格';

$GLOBALS["lang"]['are required.'] = 'お問い合わせ';

$GLOBALS["lang"]['are used.'] = '使用しています。';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'このポートに応答する装置として。<br/>これは、ファイアウォールが非既存のデバイスに代わって応答し、したがって、偽陽性デバイス検出を引き起こす一部の顧客の問題を引き起こしました。 この属性はスキャンごとに設定できるようになりました。';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = '参照ポイントとして、システムをチェックしてすべての仮想マシンをフィルタアウトします。 VM 用のシリアルフィールド。';

$GLOBALS["lang"]['assuming working and client populated DNS'] = '作業とクライアントがDNSをポップス';

$GLOBALS["lang"]['attribute'] = '属性属性';

$GLOBALS["lang"]['auto'] = 'オートロック';

$GLOBALS["lang"]['backup'] = 'バックアップ';

$GLOBALS["lang"]['banned'] = '禁止されている';

$GLOBALS["lang"]['blog'] = 'ニュース';

$GLOBALS["lang"]['blue'] = 'ブルー';

$GLOBALS["lang"]['bottom'] = 'ボトム';

$GLOBALS["lang"]['building'] = 'マンション';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'ユーザ認証(ユーザ名とパスワードの正しい)、ユーザ認証(ユーザ権限とorgsがユーザを持っている)に使用できます。<br/><br/>ユーザーが設定した LDAP にないが Open-AudIT にある場合 (例: <i>ログイン</i> ユーザ), Open-AudIT は認証と認証の両方に使用するためにフォールバックされます。<br/><br/>オープン・オード 特定のLDAPグループがロールやオーガニゼーションに使用されます。 ユーザは、Open-AudITがユーザーのアクセスを決定するために、これらのグループ(s)の直接メンバーである必要があります。<br/><br/>正しく設定されている場合、LDAP は、Open-AudIT でユーザーを作成する必要性を完全に削除できます。 Open-AudIT は、認証と認証の両方にLDAPを使用するように設定するだけです。 ユーザーが Open-AudIT に存在していないが、LDAP に存在せず、その資格情報が正しい場合は、必要なグループ Open-AudIT のメンバーがユーザーアカウントを自動的に作成します。';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Open-AudITデータベース内の他の属性ごとにファイルやファイルのディレクトリやファイルを監視できるようになりました。 この機能は、Linux Open-AudITサーバー用のボックスで動作しますが、Windows Open-AudITサーバーのサービスアカウント名に変更が必要です。 対応する顧客はWindowsおよびLinuxです。';

$GLOBALS["lang"]['changed'] = '変更する';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = '選ばれる。 WMI、SSH、SNMPのポートが検出されるとそこから、デバイスがさらにクライドされる ';

$GLOBALS["lang"]['cloud'] = 'クラウド';

$GLOBALS["lang"]['code'] = 'コードコード';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'コレクションと詳細ページは、実行するアイコンです。';

$GLOBALS["lang"]['collector'] = 'コレクター';

$GLOBALS["lang"]['collectors'] = 'コレクター';

$GLOBALS["lang"]['column'] = 'コラム';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'カラムには、 <i>ログイン</i> または <i>ログイン</i>お問い合わせ この行が現在デバイスに存在するかを示します。 たとえば、ソフトウェアがインストールされる場合があります。 <i>ソフトウェア.current = y</i>)、しかし、その後の監査では検出されないことがあります。 Open-AudIT は、この行を現在の属性に変更します。 <i>ログイン</i>お問い合わせ';

$GLOBALS["lang"]['column. The'] = 'カラム。 インフォメーション';

$GLOBALS["lang"]['compute'] = 'コンシュート';

$GLOBALS["lang"]['config'] = '設定';

$GLOBALS["lang"]['console'] = 'コンソール';

$GLOBALS["lang"]['contains'] = 'コンテンツ';

$GLOBALS["lang"]['create'] = '作成する';

$GLOBALS["lang"]['created'] = 'プロフィール';

$GLOBALS["lang"]['credentials'] = '資格情報';

$GLOBALS["lang"]['critical'] = '重要なポイント';

$GLOBALS["lang"]['cve'] = 'ログイン';

$GLOBALS["lang"]['database'] = 'データベース';

$GLOBALS["lang"]['debug'] = 'デバッグ';

$GLOBALS["lang"]['delegated'] = 'デリゲート';

$GLOBALS["lang"]['delete'] = '削除';

$GLOBALS["lang"]['deleted'] = '削除';

$GLOBALS["lang"]['denied'] = '拒否';

$GLOBALS["lang"]['details'] = 'ニュース';

$GLOBALS["lang"]['devices'] = 'デバイス';

$GLOBALS["lang"]['digitalocean'] = 'デジタル';

$GLOBALS["lang"]['discoveries'] = '発見する';

$GLOBALS["lang"]['documentation for further details.'] = '詳細はドキュメントをご覧ください。';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'いいえ <strong>コメントはありません</strong> 以下の脆弱性レポートを提供';

$GLOBALS["lang"]['does not equal'] = '等しくない';

$GLOBALS["lang"]['emergency'] = '緊急事態';

$GLOBALS["lang"]['entra'] = 'ログイン';

$GLOBALS["lang"]['equals'] = 'イケメン';

$GLOBALS["lang"]['error'] = 'エラー';

$GLOBALS["lang"]['established'] = '設立年月日';

$GLOBALS["lang"]['excluded'] = '免責事項';

$GLOBALS["lang"]['expired'] = '有効期限';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '極端な - それなしで、組織は失敗します。

非常に高い - 組織の生存のために不可欠であり、すぐに復元する必要があります機能。

高 - すぐに復元されるべき重要な機能が、わずかに長い回復時間があるかもしれません。

中 - 必要なが、より長いダウンタイムを許容できる機能。

重要な影響なしで遅らせることができる低非必須機能。

unassigned - 設定までのデフォルト。';

$GLOBALS["lang"]['fail'] = '失敗';

$GLOBALS["lang"]['false'] = 'ログイン';

$GLOBALS["lang"]['file'] = 'ファイル';

$GLOBALS["lang"]['firewall'] = 'ファイアウォール';

$GLOBALS["lang"]['first'] = 'はじめて';

$GLOBALS["lang"]['fixed'] = '固定式';

$GLOBALS["lang"]['floor'] = 'フロア';

$GLOBALS["lang"]['for'] = 'お問い合わせ';

$GLOBALS["lang"]['for authentication'] = '認証のため';

$GLOBALS["lang"]['for this information.'] = 'この情報について';

$GLOBALS["lang"]['from Audit Script Result'] = '監査スクリプトの結果';

$GLOBALS["lang"]['from NMIS'] = 'NMISから';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'アプリケーションコンテナで実行されるアドレス LocalHost (LRPC の使用) から';

$GLOBALS["lang"]['front'] = 'フロント';

$GLOBALS["lang"]['front-left'] = 'フロント左';

$GLOBALS["lang"]['front-right'] = 'フロントライト';

$GLOBALS["lang"]['github'] = 'ログイン';

$GLOBALS["lang"]['google'] = 'サイトマップ';

$GLOBALS["lang"]['greater or equals'] = '大きいか等しい';

$GLOBALS["lang"]['greater than'] = 'より大きい';

$GLOBALS["lang"]['group'] = 'グループ';

$GLOBALS["lang"]['has not been set'] = '設定されていない';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = '対象のWindows PCにDNSのResolvable IPを働かせて下さい。';

$GLOBALS["lang"]['have the ability to be executed. On the'] = '実行する能力を持っています。 お問い合わせ';

$GLOBALS["lang"]['head'] = 'ヘッドヘッド';

$GLOBALS["lang"]['here'] = '詳しくはこちら';

$GLOBALS["lang"]['high availability'] = '高可用性';

$GLOBALS["lang"]['howto'] = 'ハウツー';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Linux の仮想マシンをクローンすると、手動でこれを再生しない限り(そして私の経験では、人々はそうではありません)、同じままになります。';

$GLOBALS["lang"]['ignored'] = '無視される';

$GLOBALS["lang"]['import the example device data'] = 'デバイスデータをインポートする';

$GLOBALS["lang"]['in'] = 'お問い合わせ';

$GLOBALS["lang"]['in Enterprise.'] = 'エンタープライズ';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'インプットでは、次の値を持つことができます。';

$GLOBALS["lang"]['in Outputs can have the following values.'] = '出力では、次の値を持つことができます。';

$GLOBALS["lang"]['inactive'] = 'インアクティブ';

$GLOBALS["lang"]['incomplete'] = '不完全な';

$GLOBALS["lang"]['info'] = 'インフォメーション';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'インストーラは、標準インストール場所のNmapの存在のためにテストします';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int、テキスト、bool(y/n)、等';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = '国立標準技術研究所の米国標準維持';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = '情報セキュリティ管理のための国際規格です。 情報セキュリティマネジメントシステム(ISMS)の確立、実施、維持、継続的に改善するためのフレームワークを提供します。';

$GLOBALS["lang"]['is based upon'] = '会社概要';

$GLOBALS["lang"]['is licensed to'] = 'ライセンス';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'リストの次に、Open-AudITはパスワードとキー認証を使用できます。 Open-AudIT は root の使用を直接反対に sudo を有効にしたユーザを使うこともできます(root を使うこともできますが)。 最良の結果を得るために、root ユーザまたは sudo 有効なユーザが使用すべきです( wiki で root および Target Client Configuration なしで Linux の監査を参照してください)。 Windowsデバイスはsshを実行することもできますが、Open-AudITがSSHのクエリを停止し、代わりにWMI(作業WMIの認証を要約する)を使用するかどうかを検知します。';

$GLOBALS["lang"]['is the link to the'] = 'リンクは';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = '特定のテーブルとその列を表示する項目。 これにより、スキーマ作成スクリプトの MySQL コンソールを trawling ではなく、必要なものを正確に見つけることができます。';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'lat/long および表示の地図を取るために要求されるキー。 お問い合わせ';

$GLOBALS["lang"]['left'] = '左から';

$GLOBALS["lang"]['less or equals'] = 'より少ないか等しい';

$GLOBALS["lang"]['less than'] = 'より少しより';

$GLOBALS["lang"]['license'] = 'ライセンス';

$GLOBALS["lang"]['licenses'] = 'ライセンス';

$GLOBALS["lang"]['like'] = 'お問い合わせ';

$GLOBALS["lang"]['line'] = 'ライン';

$GLOBALS["lang"]['list'] = 'リスト';

$GLOBALS["lang"]['list View, using the Create button'] = 'リスト ビュー, 作成ボタンを使用して';

$GLOBALS["lang"]['load balancing'] = '負荷分散';

$GLOBALS["lang"]['location'] = 'アクセス';

$GLOBALS["lang"]['locations'] = 'ロケーション';

$GLOBALS["lang"]['managed'] = 'マネージング';

$GLOBALS["lang"]['methods'] = 'メソッド';

$GLOBALS["lang"]['microsoft'] = 'マイクロソフト';

$GLOBALS["lang"]['mount point'] = 'マウントポイント';

$GLOBALS["lang"]['must'] = '必須';

$GLOBALS["lang"]['network'] = 'ネットワーク';

$GLOBALS["lang"]['news'] = 'ニュース';

$GLOBALS["lang"]['no'] = 'なし';

$GLOBALS["lang"]['node'] = 'ノード';

$GLOBALS["lang"]['none'] = 'なし';

$GLOBALS["lang"]['normal'] = 'ノーマル';

$GLOBALS["lang"]['not applicable'] = '該当なし';

$GLOBALS["lang"]['not in'] = 'お問い合わせ';

$GLOBALS["lang"]['not like'] = '好きではない';

$GLOBALS["lang"]['notice'] = 'お知らせ';

$GLOBALS["lang"]['notification'] = 'インフォメーション';

$GLOBALS["lang"]['okta'] = 'オクタ';

$GLOBALS["lang"]['on devices where'] = 'デバイス上の';

$GLOBALS["lang"]['openldap'] = 'オープンソース';

$GLOBALS["lang"]['optimized'] = '最適化';

$GLOBALS["lang"]['optionally '] = 'オプション ';

$GLOBALS["lang"]['or'] = 'または';

$GLOBALS["lang"]['or the GitHub page at'] = 'または GitHub ページ';

$GLOBALS["lang"]['other'] = 'その他';

$GLOBALS["lang"]['package'] = 'パッケージ';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'サイトマップ メニューからLDAPサーバーをエクスポート → 管理者 -> LDAP サーバー → JSON の詳細は、このデータを保存して保存します。';

$GLOBALS["lang"]['partition'] = 'パーティション';

$GLOBALS["lang"]['pass'] = 'パス';

$GLOBALS["lang"]['pending'] = 'ペンディング';

$GLOBALS["lang"]['performance'] = 'パフォーマンス';

$GLOBALS["lang"]['performed'] = '出演者';

$GLOBALS["lang"]['permission'] = 'アクセス';

$GLOBALS["lang"]['permissions required per endpoint'] = 'エンドポイントごとに必要な権限';

$GLOBALS["lang"]['pie'] = 'ピエ';

$GLOBALS["lang"]['planning'] = 'プランニング';

$GLOBALS["lang"]['predictable'] = '予測可能';

$GLOBALS["lang"]['query'] = 'お問い合わせ';

$GLOBALS["lang"]['rear'] = 'バックナンバー';

$GLOBALS["lang"]['rear-left'] = '後部左';

$GLOBALS["lang"]['rear-right'] = 'リアライト';

$GLOBALS["lang"]['regex'] = 'レグテックス';

$GLOBALS["lang"]['release'] = 'リリース';

$GLOBALS["lang"]['removed from display, but has been set'] = 'ディスプレイから削除されたが、セットされている';

$GLOBALS["lang"]['reserved'] = 'スタッフ紹介';

$GLOBALS["lang"]['right'] = 'お問い合わせ';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'フィールド値をクリックして編集できます。';

$GLOBALS["lang"]['role'] = 'ログイン';

$GLOBALS["lang"]['room'] = '客室のご案内';

$GLOBALS["lang"]['row'] = 'ログイン';

$GLOBALS["lang"]['service failed to start due to the following error'] = '次のエラーで起動できなかったサービス';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Open-AudIT は、クエリを適切な Orgs に制限することを知っています。';

$GLOBALS["lang"]['stand-alone'] = 'スタンドアローン';

$GLOBALS["lang"]['standard'] = 'スタンダード';

$GLOBALS["lang"]['starts with'] = 'まずは';

$GLOBALS["lang"]['storage'] = 'ストレージ';

$GLOBALS["lang"]['subnet'] = 'サブネット';

$GLOBALS["lang"]['table'] = 'テーブル';

$GLOBALS["lang"]['table and insert the original rows.'] = 'オリジナルの行をテーブルに差し込みます。';

$GLOBALS["lang"]['team'] = 'スタッフ';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'テキスト。 最初は配列のインデックスで、as-is のままにする必要があります。 インデックスは、翻訳されたテキストを調べるためにテンプレートで使用されます。';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'それからテーブルのための細部ボタンをかちりと鳴らして下さい。';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'それからテーブルのための細部ボタンをかちりと鳴らして下さい。 デバイスの詳細が保存されます';

$GLOBALS["lang"]['timestamp'] = 'タイムスタンプ';

$GLOBALS["lang"]['to'] = 'お問い合わせ';

$GLOBALS["lang"]['to create an item of this type'] = 'このタイプのアイテムを作成する';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL に、指定したデバイスのすべてのコンポーネントテーブルを含む完全なデータベースエントリを取得します。';

$GLOBALS["lang"]['to the user'] = 'ユーザーへ';

$GLOBALS["lang"]['top'] = 'トップトップ';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'トップシークレット - 軍事/政府の分類。 ディスクロージャーは、国民の安全保障に非常に重大な危険を引き起こします。

秘密 - 軍事/政府の分類。 ディスクロージャーは、国民のセキュリティに重大な損害を与えるものとします。

機密 - 軍事/政府および民間セクターの分類。 機密データには、不正な開示が発生した場合、組織に重大な影響を及ぼす可能性のある取引秘密、知的データ、アプリケーションプログラミングコード、およびその他のデータが含まれます。 このレベルのデータは、作業に必要な組織の人員、または直接関連している組織、アクセスされたデータのみが利用できます。 機密データへのアクセスは通常、各アクセスの許可が必要です。

プライベート - プライベートセクター分類。 プライベートなデータには、組織内でのみ使用される人的資源の記録、医療記録、給与情報を含む人的資源に関連する情報が含まれます。

機密 - 軍事/政府および民間セクターの分類。 機密性の高いデータには、組織の財務情報が含まれています。また、CIAおよび精度を確保するために追加の対策が必要です。 ディスクロージャーは、国家のセキュリティを害する可能性があります。

パブリック - プライベートセクター分類。 パブリックデータとは、一般に公開されているデータであり、組織に悪影響を及ぼすことはありません。 パブリックデータの例には、組織で働く人や、組織が製造・販売する製品が含まれます。

unclassified - 軍事/政府の分類。 一般に国民の利益に脅威なしで公衆に配布することができる情報。

unassigned - 設定までのデフォルト。';

$GLOBALS["lang"]['traffic'] = '交通アクセス';

$GLOBALS["lang"]['true'] = 'ログイン';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true または false (JSON コンテキストで)';

$GLOBALS["lang"]['unallocated'] = '非配置';

$GLOBALS["lang"]['unauthorised'] = '無許可';

$GLOBALS["lang"]['unchanged'] = '変更なし';

$GLOBALS["lang"]['unknown'] = 'インフォメーション';

$GLOBALS["lang"]['unmanaged'] = 'マネージド';

$GLOBALS["lang"]['unused'] = '未使用';

$GLOBALS["lang"]['update'] = '更新情報';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'デバイスから収集したデータを使用して、提供された値でインストールされたソフトウェアと一致します。マッチは、使用しているライセンス数と残数を計算します。 それはワイルドカードの使用を可能にします <i>マッチ文字列</i> ソフトウェアと一致するフィールド。 name 属性。';

$GLOBALS["lang"]['using the main menu items.'] = 'メインメニュー項目を使用して。';

$GLOBALS["lang"]['valid'] = 'よくある質問';

$GLOBALS["lang"]['version'] = 'バージョン';

$GLOBALS["lang"]['virtualisation'] = '仮想化';

$GLOBALS["lang"]['warning'] = '警告';

$GLOBALS["lang"]['web'] = 'サイトマップ';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'ローカルアクセス権限とリモートアクセス権限を設定します。';

$GLOBALS["lang"]['with devices::update permission.'] = 'デバイスを使って::update 権限。';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'サインオンリダイレクト URI が';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = '開発者に馴染みのある方法で、シンプルで直感的なアクセスを提供することを意図して。 この API に加えて、Web インターフェイスは同じリクエスト形式を使用し、追加のアクション (例: アイテムを作成するための HTML フォーム) を提供します。';

$GLOBALS["lang"]['yes'] = 'お問い合わせ';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'HighChartsライセンスをFirstwave製品に使用する必要はありません。 ライセンス';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = '見つかったデバイスを Org または Location に割り当てます。';

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

