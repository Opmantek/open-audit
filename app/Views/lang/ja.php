<?php
$GLOBALS["lang"][' Default, currently '] = ' デフォルト, 現在 ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' 言語ファイルに対応しました。 ユーザーがこの言語を使用するように変更するには、 ';

$GLOBALS["lang"][' seconds'] = ' 秒単位';

$GLOBALS["lang"]['10 Minutes'] = '10分';

$GLOBALS["lang"]['15 Minutes'] = '15分';

$GLOBALS["lang"]['30 Minutes'] = '30分';

$GLOBALS["lang"]['5 Minutes'] = '5分';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>お問い合わせ</strong> - ローカルOpen-AudITサーバーからこのURLにアクセスします。 ダウンロードしたスクリプトは、他のマシンで実行したときに送信できません。 他のマシンを監査する必要がある場合は、Open-AudITサーバー自体のブラウザを使用していないリモートマシンからスクリプトをダウンロードしてください。';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'ファイルをダウンロードするためのURL。';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = '選択したOrg(および設定されている場合、その子孫)のコンピュータに、このソフトウェアの回数を表示する計算されたフィールド。';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'コレクタはコレクターまたはスタンドアローンモードのいずれかです。';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = '該当するCVEのコンマ区切りリスト。';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '値のコンマ区切りリスト、いずれかを選択することができます。';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = '実行するコマンド。 エージェントが Windows ベースの場合、このコマンドはパワーシェルエージェント内で実行されます。';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'スキャンするカスタムTCPポートのリスト(22はSSH、135はWMI、62078はiPhoneの同期です)。';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'スキャンするカスタムUDPポートのリスト(161はSNMPです)。';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = '上記以外のルールの前に、より低い番号が適用されることを意味します。';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = '上記以外のルールの前に、より低い番号が適用されることを意味します。 デフォルト重量は100です。';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'アプリケーション認証時にログオンを有効にするパスワード(ハッシュとして保存)。';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IPアドレスとMACアドレスがユニークであるルーティングドメインまたはアドレススペース。';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'セキュリティゾーンは、ネットワークドメイン内の管理ドメインまたはポリシードメインです。';

$GLOBALS["lang"]['A short description of the log entry.'] = 'ログエントリの短い説明。';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'マッチする文字列 <code>software.name</code> 属性。 (%) の標準的な SQL のワイルドカードを 1 つ以上の文字にマッチさせることができます。';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '可用性に影響を与える脆弱性は、攻撃者がサービス、クラッシュシステム、またはサービス(DoS)(None、Low、High)を破壊することを可能にします。';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '機密性に影響を与える脆弱性は、攻撃者は、個人情報、資格情報、または独自のビジネスデータ(なし、低、高)などの機密データを読むことができます。';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = '完全性に影響を与える脆弱性は、攻撃者がデータを変更したり、悪意のあるコードを注入したり、システム構成(None、Low、High)を変更したりすることができます。';

$GLOBALS["lang"]['AD Group'] = 'ADグループ';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL、HFC、ISDN、等。';

$GLOBALS["lang"]['AIX'] = 'アックス';

$GLOBALS["lang"]['ALL IPs'] = 'すべてのIP';

$GLOBALS["lang"]['API / Web Access'] = 'API/Webアクセス';

$GLOBALS["lang"]['API Documentation'] = 'APIドキュメント';

$GLOBALS["lang"]['API Key required.'] = 'APIキーが必要です。';

$GLOBALS["lang"]['API Result'] = 'API 結果';

$GLOBALS["lang"]['About'] = 'お問い合わせ';

$GLOBALS["lang"]['Accept'] = 'お問い合わせ';

$GLOBALS["lang"]['access_point'] = 'アクセスポイント';

$GLOBALS["lang"]['Access Point'] = 'アクセスポイント';

$GLOBALS["lang"]['access_token'] = 'アクセストークン';

$GLOBALS["lang"]['Access Token'] = 'アクセストークン';

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

$GLOBALS["lang"]['Add image'] = '画像を追加';

$GLOBALS["lang"]['additional_items'] = '追加アイテム';

$GLOBALS["lang"]['Additional Items'] = '追加アイテム';

$GLOBALS["lang"]['address'] = '郵便番号';

$GLOBALS["lang"]['Address'] = '郵便番号';

$GLOBALS["lang"]['Admin'] = 'アドミン';

$GLOBALS["lang"]['admin_status'] = '管理者ステータス';

$GLOBALS["lang"]['Admin Status'] = '管理者ステータス';

$GLOBALS["lang"]['advanced'] = 'アドバンスト';

$GLOBALS["lang"]['Advanced'] = 'アドバンスト';

$GLOBALS["lang"]['Afghanistan'] = 'アフガニスタン';

$GLOBALS["lang"]['agents'] = 'エージェント';

$GLOBALS["lang"]['Agents'] = 'エージェント';

$GLOBALS["lang"]['Aggressive'] = '攻撃的';

$GLOBALS["lang"]['Aland Islands'] = 'アラン諸島';

$GLOBALS["lang"]['Albania'] = 'アルバニア';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'アマゾンAWS フィールド';

$GLOBALS["lang"]['American Samoa'] = 'アメリカ サモア';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '配列 <code>benchmarks.id</code>お問い合わせ';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '配列 <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '外部リンクを表すオブジェクトの配列は、より多くの情報につながります。';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '必要に応じて必要な属性を含む暗号化されたJSON文書 <code>credentials.type</code>お問い合わせ';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = '本サイトで必要なサービスレベルの表示';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '発見が完了したら、内部フィールドを示します。';

$GLOBALS["lang"]['An optional GeoCode'] = 'オプションのジオコード';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'sudo を使用するオプションのパスワード。';

$GLOBALS["lang"]['Andorra'] = 'アンドラ';

$GLOBALS["lang"]['Angola'] = 'アンゴラ';

$GLOBALS["lang"]['Anguilla'] = 'アンギラ';

$GLOBALS["lang"]['Antarctica'] = 'アンタルチカ';

$GLOBALS["lang"]['AntiVirus'] = 'アンチウイルス';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'アンティグア・バーブーダ';

$GLOBALS["lang"]['Antivirus'] = 'アンチウィルス';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'この発見から除外したいTCPポート(コンマ区切り、スペースなし)。 Nmap 7+ を使用した場合のみご利用いただけます。';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'この発見から除外したいUDPポート(コンマ区切り、スペースなし)。 Nmap 7+ を使用した場合のみご利用いただけます。';

$GLOBALS["lang"]['Any additional documentation you need.'] = '必要な追加のドキュメント。';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '注意する追加のメモ。';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'どのデバイスも、監査スクリプトを実行すると、この Org に割り当てられます。 サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '発見されたデバイスは、設定した場合、この場所に割り当てられます。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = '検出されたデバイスは、監査スクリプトを実行したときにこの場所に割り当てられます(設定した場合)。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = '発見されたデバイスは、設定した時にこの Org に割り当てられます。 設定されていない場合、それらはに割り当てられます <code>org_id</code> この発見について サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '必要なフィルター。 Note: 型 = トラフィックの場合、これはフォントのアイコンを表します。';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '特定の TCP ポートをテストしたい (コンマ区切り、スペースなし)。';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'テストした特定のUDPポート(コンマ区切り、スペースなし)。';

$GLOBALS["lang"]['Application'] = 'アプリケーション';

$GLOBALS["lang"]['application_id'] = 'アプリケーションID';

$GLOBALS["lang"]['Application ID'] = 'アプリケーションID';

$GLOBALS["lang"]['Application Licenses'] = 'アプリケーションライセンス';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '適用、オペレーティング システムかハードウェア。';

$GLOBALS["lang"]['applications'] = 'アプリケーション';

$GLOBALS["lang"]['Applications'] = 'アプリケーション';

$GLOBALS["lang"]['applied'] = '応用分野';

$GLOBALS["lang"]['Applied'] = '応用分野';

$GLOBALS["lang"]['Approved'] = '承認済み';

$GLOBALS["lang"]['April'] = '4月4日';

$GLOBALS["lang"]['architecture'] = '建築設計';

$GLOBALS["lang"]['Architecture'] = '建築設計';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'この入力項目を削除したいですか?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'この出力項目を削除したいですか?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'お問い合わせ これにより、すべてのキューエントリを削除し、残りのIPが発見されるのを防ぐことができます。';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'お問い合わせ これは、キュー処理回数をリセットし、サーバーに負荷を引き起こす可能性があります。';

$GLOBALS["lang"]['area'] = 'エリア';

$GLOBALS["lang"]['Area'] = 'エリア';

$GLOBALS["lang"]['Argentina'] = 'アルゼンチン';

$GLOBALS["lang"]['Armenia'] = 'アルメニア';

$GLOBALS["lang"]['arp'] = 'アルプ';

$GLOBALS["lang"]['Arp'] = 'アルプ';

$GLOBALS["lang"]['Aruba'] = 'アルバ';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'デバイス環境の属性として。 生産、訓練、等。';

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

$GLOBALS["lang"]['Assign an Operator'] = 'オペレータを割り当てる';

$GLOBALS["lang"]['Assigned To'] = 'に割り当てられた';

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

$GLOBALS["lang"]['Attribute'] = 'アトリビュート';

$GLOBALS["lang"]['attributes'] = 'アトリビュート';

$GLOBALS["lang"]['Attributes'] = 'アトリビュート';

$GLOBALS["lang"]['Audit'] = '監査';

$GLOBALS["lang"]['Audit AIX'] = '監査 AIX';

$GLOBALS["lang"]['Audit ESXi'] = '監査ESXi';

$GLOBALS["lang"]['Audit Linux'] = '監査Linux';

$GLOBALS["lang"]['audit_log'] = '監査ログ';

$GLOBALS["lang"]['Audit Log'] = '監査ログ';

$GLOBALS["lang"]['Audit My PC'] = '私のPCを監査';

$GLOBALS["lang"]['Audit OSX'] = '監査OSX';

$GLOBALS["lang"]['Audit Result Input'] = '監査結果入力';

$GLOBALS["lang"]['Audit Status'] = '監査状況';

$GLOBALS["lang"]['Audit Windows'] = '監査のWindows';

$GLOBALS["lang"]['Audit the Device'] = 'デバイスを監査する';

$GLOBALS["lang"]['Audits'] = '監査';

$GLOBALS["lang"]['August'] = '8月8日';

$GLOBALS["lang"]['Australia'] = 'オーストラリア';

$GLOBALS["lang"]['Austria'] = 'オーストリア';

$GLOBALS["lang"]['Auth'] = 'リリース';

$GLOBALS["lang"]['auth'] = 'リリース';

$GLOBALS["lang"]['Authentication Passphrase'] = '認証パスフレーズ';

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

$GLOBALS["lang"]['Azerbaijan'] = 'アゼルバイジャン';

$GLOBALS["lang"]['BTU Max'] = '最高BTU';

$GLOBALS["lang"]['BTU Total'] = 'BTU合計';

$GLOBALS["lang"]['Backup'] = 'バックアップ';

$GLOBALS["lang"]['Bahamas the'] = 'バハマ';

$GLOBALS["lang"]['Bahrain'] = 'バーレーン';

$GLOBALS["lang"]['Bangladesh'] = 'バングラデシュ';

$GLOBALS["lang"]['bank'] = '銀行口座';

$GLOBALS["lang"]['Bank'] = '銀行口座';

$GLOBALS["lang"]['Banned'] = '禁止事項';

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

$GLOBALS["lang"]['Basic'] = '基本情報';

$GLOBALS["lang"]['Belarus'] = 'ベラルーシ';

$GLOBALS["lang"]['Belgium'] = 'ベルギー';

$GLOBALS["lang"]['Belize'] = 'ベリーズ';

$GLOBALS["lang"]['Benchmark'] = 'ベンチマーク';

$GLOBALS["lang"]['benchmark_id'] = 'ベンチマークID';

$GLOBALS["lang"]['Benchmark ID'] = 'ベンチマークID';

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

$GLOBALS["lang"]['Botswana'] = 'ボツワナ';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'ブーヴェット島(ブーヴェトヤ)';

$GLOBALS["lang"]['Brazil'] = 'ブラジル';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'ブラジルポルトガル語';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = '英国インド洋領事(Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = '英国領バージン諸島';

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

$GLOBALS["lang"]['Bulgaria'] = 'ブルガリア';

$GLOBALS["lang"]['Bulk Edit'] = '一括編集';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'バルク編集装置属性';

$GLOBALS["lang"]['Burkina Faso'] = 'ブルキナファソ';

$GLOBALS["lang"]['Burundi'] = 'ブルンディ';

$GLOBALS["lang"]['business_requirements'] = 'ビジネス要件';

$GLOBALS["lang"]['Business Requirements'] = 'ビジネス要件';

$GLOBALS["lang"]['Buy'] = '買う';

$GLOBALS["lang"]['Buy More'] = 'もっと読む';

$GLOBALS["lang"]['Buy More Licenses'] = 'より多くのライセンスを購入';

$GLOBALS["lang"]['By'] = 'によって';

$GLOBALS["lang"]['CIDR'] = 'CIDRについて';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDRについて マスク';

$GLOBALS["lang"]['cli_config'] = 'お問い合わせ 設定';

$GLOBALS["lang"]['CLI Config'] = 'お問い合わせ 設定';

$GLOBALS["lang"]['CPU'] = 'ログイン';

$GLOBALS["lang"]['CPUs'] = 'CPUの';

$GLOBALS["lang"]['CSV'] = 'CSVシリーズ';

$GLOBALS["lang"]['CVE'] = 'ログイン';

$GLOBALS["lang"]['Calculated from discovery.'] = '発見から計算される。';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'このネットワークの有効なIPアドレスの総数を計算しました。';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '完了時に計算し、この項目を実行する時間。';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'インテグレーションが実行され、このインテグレーションでデバイスのJSON表現が含まれているときに計算されます。 各リンク <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'インテグレーションが実行され、このインテグレーション内の場所のJSON表現が含まれているときに計算されます。 各リンク <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '統合が実行されると計算され、Open-AudITから選択したデバイスの数が含まれています。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '統合が実行され、外部システムを選択したデバイスの数が含まれているときの計算。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '統合が実行され、外部システムに更新されるデバイスの数が含まれている場合に計算されます。';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '統合が実行されると計算され、Open-AudITで更新されたデバイスの数が含まれています。';

$GLOBALS["lang"]['Cambodia'] = 'カンボジア';

$GLOBALS["lang"]['Cameroon'] = 'キャメルーン';

$GLOBALS["lang"]['Campus Area Network'] = 'キャンパスエリアネットワーク';

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

$GLOBALS["lang"]['Chad'] = 'チャド';

$GLOBALS["lang"]['change_id'] = 'IDの変更';

$GLOBALS["lang"]['Change ID'] = 'IDの変更';

$GLOBALS["lang"]['change_log'] = '変更ログ';

$GLOBALS["lang"]['Change Log'] = '変更ログ';

$GLOBALS["lang"]['change_type'] = '変更の種類';

$GLOBALS["lang"]['Change Type'] = '変更の種類';

$GLOBALS["lang"]['check_minutes'] = '分をチェックする';

$GLOBALS["lang"]['Check Minutes'] = '分をチェックする';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'これらのポートでSSHをチェック';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'SSHサービスに関するこのポートを確認してください。';

$GLOBALS["lang"]['Chile'] = 'チリ';

$GLOBALS["lang"]['China'] = '中国・中国';

$GLOBALS["lang"]['Choose'] = 'お問い合わせ';

$GLOBALS["lang"]['Choose (select OS first)'] = '選択(OSを最初に選択)';

$GLOBALS["lang"]['Choose a Device'] = 'デバイスを選択';

$GLOBALS["lang"]['Choose a Table'] = 'テーブルを選ぶ';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = '[削除] ボタンをクリックして、Open-AudIT から例のデバイスを削除します。<br/>データベースから以下のデバイスを削除します。 ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '下の [インポート] ボタンをクリックして、デバイスデータを含む Open-AudIT を出力します。';

$GLOBALS["lang"]['Client ID'] = 'クライアントID';

$GLOBALS["lang"]['client_ident'] = 'クライアントID';

$GLOBALS["lang"]['Client Ident'] = 'クライアントID';

$GLOBALS["lang"]['client_secret'] = 'クライアントシークレット';

$GLOBALS["lang"]['Client Secret'] = 'クライアントシークレット';

$GLOBALS["lang"]['client_site_name'] = 'クライアントサイト名';

$GLOBALS["lang"]['Client Site Name'] = 'クライアントサイト名';

$GLOBALS["lang"]['Close'] = '閉じる';

$GLOBALS["lang"]['Cloud'] = 'クラウド';

$GLOBALS["lang"]['Cloud Details'] = 'クラウド詳細';

$GLOBALS["lang"]['Cloud Discovery'] = 'クラウドディスカバリー';

$GLOBALS["lang"]['cloud_id'] = 'クラウドID';

$GLOBALS["lang"]['Cloud ID'] = 'クラウドID';

$GLOBALS["lang"]['cloud_log'] = 'クラウドログ';

$GLOBALS["lang"]['Cloud Log'] = 'クラウドログ';

$GLOBALS["lang"]['cloud_name'] = 'クラウド名';

$GLOBALS["lang"]['Cloud Name'] = 'クラウド名';

$GLOBALS["lang"]['Cloud Network'] = 'クラウドネットワーク';

$GLOBALS["lang"]['clouds'] = 'クラウド';

$GLOBALS["lang"]['Clouds'] = 'クラウド';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'ココス諸島(ケイリング)';

$GLOBALS["lang"]['Collector'] = 'コレクター';

$GLOBALS["lang"]['Collector (UUID)'] = 'コレクター(UUID)';

$GLOBALS["lang"]['Collector Name'] = 'コレクター名';

$GLOBALS["lang"]['collector_uuid'] = 'コレクターUuid';

$GLOBALS["lang"]['Collector Uuid'] = 'コレクターUuid';

$GLOBALS["lang"]['collectors'] = 'コレクター';

$GLOBALS["lang"]['Collectors'] = 'コレクター';

$GLOBALS["lang"]['Colombia'] = 'コロンビア';

$GLOBALS["lang"]['color'] = 'カラー';

$GLOBALS["lang"]['Color'] = 'カラー';

$GLOBALS["lang"]['column'] = 'コラム';

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

$GLOBALS["lang"]['comments'] = 'コメント';

$GLOBALS["lang"]['Comments'] = 'コメント';

$GLOBALS["lang"]['commercial'] = '商業施設';

$GLOBALS["lang"]['Commercial'] = '商業施設';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = '攻撃の複雑さ(低または高)。';

$GLOBALS["lang"]['Component Table'] = 'コンポーネントテーブル';

$GLOBALS["lang"]['Components (All Devices)'] = 'コンポーネント(全デバイス)';

$GLOBALS["lang"]['Compute'] = 'コンピューティング';

$GLOBALS["lang"]['Condition'] = 'インフォメーション';

$GLOBALS["lang"]['Config'] = '設定';

$GLOBALS["lang"]['Config Default, currently '] = 'デフォルトの設定、現在 ';

$GLOBALS["lang"]['config_file'] = 'Config ファイル';

$GLOBALS["lang"]['Config File'] = 'Config ファイル';

$GLOBALS["lang"]['config_manager_error_code'] = '管理者エラーコードの設定';

$GLOBALS["lang"]['Config Manager Error Code'] = '管理者エラーコードの設定';

$GLOBALS["lang"]['configuration'] = 'コンテンツ';

$GLOBALS["lang"]['Configuration'] = 'コンテンツ';

$GLOBALS["lang"]['Configure'] = '設定';

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

$GLOBALS["lang"]['contact'] = 'お問い合わせ';

$GLOBALS["lang"]['Contact'] = 'お問い合わせ';

$GLOBALS["lang"]['contact_name'] = '連絡窓口';

$GLOBALS["lang"]['Contact Name'] = '連絡窓口';

$GLOBALS["lang"]['contained_in'] = 'で達成される';

$GLOBALS["lang"]['Contained In'] = 'で達成される';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'JSON オブジェクトの詳細は、関連するウィジェットとその位置が含まれています。';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'ssh、snmp、wmiの検出オプションを使用するかどうかを決定するフィールドが含まれています。 JSONオブジェクト。';

$GLOBALS["lang"]['Context Engine ID'] = 'コンテキストエンジンID';

$GLOBALS["lang"]['Context Name'] = 'コンテキスト名';

$GLOBALS["lang"]['contractual_obligations'] = '契約上の義務';

$GLOBALS["lang"]['Contractual Obligations'] = '契約上の義務';

$GLOBALS["lang"]['Cook Islands'] = 'クック諸島';

$GLOBALS["lang"]['Copy and paste an audit result'] = '監査結果をコピーして貼り付ける';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '以下をフォーラム、Open-AudITの他のインスタンス、またはこの項目を提供する必要がある場合にコピーして貼り付けます。';

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

$GLOBALS["lang"]['Create Geocode'] = 'ジオコードを作成する';

$GLOBALS["lang"]['create_internal_count'] = '内部カウントを作成する';

$GLOBALS["lang"]['Create Internal Count'] = '内部カウントを作成する';

$GLOBALS["lang"]['create_internal_from_external'] = '外部から内部を作成する';

$GLOBALS["lang"]['Create Internal From External'] = '外部から内部を作成する';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Open-AudITからNMISデバイスを作成する';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT の作成 デバイスから ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT の作成 NMISのデバイス';

$GLOBALS["lang"]['created_by'] = 'によって作成された';

$GLOBALS["lang"]['Created By'] = 'によって作成された';

$GLOBALS["lang"]['created_date'] = '作成された日付';

$GLOBALS["lang"]['Created Date'] = '作成された日付';

$GLOBALS["lang"]['Creating'] = '作成する';

$GLOBALS["lang"]['Creating Device'] = 'デバイスの作成';

$GLOBALS["lang"]['Creating a Query'] = 'クエリの作成';

$GLOBALS["lang"]['creator'] = 'クリエイター';

$GLOBALS["lang"]['Creator'] = 'クリエイター';

$GLOBALS["lang"]['credential'] = '資格情報';

$GLOBALS["lang"]['Credential'] = '資格情報';

$GLOBALS["lang"]['credentials'] = '資格情報';

$GLOBALS["lang"]['Credentials'] = '資格情報';

$GLOBALS["lang"]['Credentials Client ID'] = 'クライアントID';

$GLOBALS["lang"]['Credentials Subscription ID'] = '認証サブスクリプション インフォメーション';

$GLOBALS["lang"]['Credentials Tenant ID'] = '犯罪テナントID';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'カスタムTCPポート';

$GLOBALS["lang"]['Custom UDP Ports'] = 'カスタムUDP ポート';

$GLOBALS["lang"]['Cve'] = 'ログイン';

$GLOBALS["lang"]['Cyprus'] = 'キプロス';

$GLOBALS["lang"]['Czech'] = 'チェコ語';

$GLOBALS["lang"]['Czech Republic'] = 'チェコ共和国';

$GLOBALS["lang"]['DHCP'] = 'DHCPの特長';

$GLOBALS["lang"]['DN Account (optional)'] = 'DNアカウント(オプション)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN パスワード (任意)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS の FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNSホスト名';

$GLOBALS["lang"]['dashboard_id'] = 'ダッシュボードID';

$GLOBALS["lang"]['Dashboard ID'] = 'ダッシュボードID';

$GLOBALS["lang"]['dashboards'] = 'ダッシュボード';

$GLOBALS["lang"]['Dashboards'] = 'ダッシュボード';

$GLOBALS["lang"]['Database'] = 'データベース';

$GLOBALS["lang"]['db_action'] = 'データベースのアクション';

$GLOBALS["lang"]['Database Action'] = 'データベースのアクション';

$GLOBALS["lang"]['db_column'] = 'データベースのコラム';

$GLOBALS["lang"]['Database Column'] = 'データベースのコラム';

$GLOBALS["lang"]['Database Definition'] = 'データベースの定義';

$GLOBALS["lang"]['db_row'] = 'データベースの列';

$GLOBALS["lang"]['Database Row'] = 'データベースの列';

$GLOBALS["lang"]['Database Schema'] = 'データベーススキーマ';

$GLOBALS["lang"]['db_table'] = 'データベーステーブル';

$GLOBALS["lang"]['Database Table'] = 'データベーステーブル';

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

$GLOBALS["lang"]['December'] = '12月12日';

$GLOBALS["lang"]['Default'] = 'デフォルト';

$GLOBALS["lang"]['Default Items'] = 'デフォルト項目';

$GLOBALS["lang"]['Default Value'] = 'デフォルト値';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'デフォルト 389. アクティブ・ディレクトリ LDAPS に使用する普通 636。';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'デフォルト <code>3</code> LDAPとActive Directoryの';

$GLOBALS["lang"]['Defaults'] = 'デフォルト';

$GLOBALS["lang"]['delay_minutes'] = '遅延分';

$GLOBALS["lang"]['Delay Minutes'] = '遅延分';

$GLOBALS["lang"]['Delete'] = '削除';

$GLOBALS["lang"]['Delete Example Devices'] = 'サンプルデバイスの削除';

$GLOBALS["lang"]['delete_external_from_internal'] = '内部から外部を削除';

$GLOBALS["lang"]['Delete External From Internal'] = '内部から外部を削除';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMISを削除 Open-AudITでない場合のデバイス';

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

$GLOBALS["lang"]['details'] = 'ニュース';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '本サイトでは、通常連絡が取れる者の詳細をご覧いただけます。';

$GLOBALS["lang"]['device'] = 'デバイス';

$GLOBALS["lang"]['Device'] = 'デバイス';

$GLOBALS["lang"]['Device Audits'] = 'デバイス監査';

$GLOBALS["lang"]['Device ID'] = 'デバイスID';

$GLOBALS["lang"]['device_id'] = 'デバイスID';

$GLOBALS["lang"]['device_id_a'] = 'デバイス ID A';

$GLOBALS["lang"]['Device ID A'] = 'デバイス ID A';

$GLOBALS["lang"]['device_id_b'] = 'デバイス ID B';

$GLOBALS["lang"]['Device ID B'] = 'デバイス ID B';

$GLOBALS["lang"]['Device Name'] = 'デバイス名';

$GLOBALS["lang"]['Device Result'] = 'デバイス結果';

$GLOBALS["lang"]['Device Results'] = 'デバイス結果';

$GLOBALS["lang"]['Device Seed'] = 'デバイス種子';

$GLOBALS["lang"]['Device Seed IP'] = 'デバイスシードIP';

$GLOBALS["lang"]['Device Status'] = 'デバイスの状態';

$GLOBALS["lang"]['Device Types'] = 'デバイスの種類';

$GLOBALS["lang"]['Device is in the Subnet'] = 'デバイスはサブネットにあります';

$GLOBALS["lang"]['Devices'] = 'デバイス';

$GLOBALS["lang"]['devices_assigned_to_location'] = '装置は場所に割り当てました';

$GLOBALS["lang"]['Devices Assigned To Location'] = '装置は場所に割り当てました';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgに割り当てられた装置';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgに割り当てられた装置';

$GLOBALS["lang"]['Devices Audited'] = '監査対象デバイス';

$GLOBALS["lang"]['Devices Created in '] = 'デバイス作成 ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudITで作成されたデバイス';

$GLOBALS["lang"]['devices_default_display_columns'] = 'デバイスのデフォルト表示列';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'デバイスのデフォルト表示列';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '装置は最終7日見つけました';

$GLOBALS["lang"]['Devices Found Today'] = '今日のデバイス';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'デバイスが昨日発見';

$GLOBALS["lang"]['Devices Not Audited'] = '監査されていないデバイス';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '装置 30日見えない';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '装置 7日見えない';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '装置 90 日見えない';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API経由で取得するデバイス';

$GLOBALS["lang"]['Devices Selected from '] = 'デバイスから選択 ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITから選択したデバイス';

$GLOBALS["lang"]['Devices Updated in '] = 'デバイスの更新 ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT で更新されたデバイス';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'デバイスはベンチマークされています。';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'デバイスはベンチマークされていない。';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'デバイスはベンチマークできます。';

$GLOBALS["lang"]['Devices in Running State'] = '実行状態のデバイス';

$GLOBALS["lang"]['Devices in Stopped State'] = '停止状態のデバイス';

$GLOBALS["lang"]['Devices in this'] = 'このデバイス';

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

$GLOBALS["lang"]['discoveries'] = 'ニュース';

$GLOBALS["lang"]['Discoveries'] = 'ニュース';

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

$GLOBALS["lang"]['disk'] = 'ディスク';

$GLOBALS["lang"]['Disk'] = 'ディスク';

$GLOBALS["lang"]['display_version'] = 'ディスプレイバージョン';

$GLOBALS["lang"]['Display Version'] = 'ディスプレイバージョン';

$GLOBALS["lang"]['Display in Menu'] = 'メニュー表示';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'これらのTCPポートをスキャンしないでください。';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'これらのUDPポートをスキャンしないでください。';

$GLOBALS["lang"]['Do not show me again'] = '再び私に表示しないでください';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '安全な輸送(LDAPS)や定期的な暗号化されていないLDAPを使用する必要があります。';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '左に標準のサイドバーが表示されてほしい。';

$GLOBALS["lang"]['documentation'] = 'ドキュメント';

$GLOBALS["lang"]['Documentation'] = 'ドキュメント';

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

$GLOBALS["lang"]['Download a file from URL'] = 'URLからファイルをダウンロードする';

$GLOBALS["lang"]['driver'] = 'ドライバー';

$GLOBALS["lang"]['Driver'] = 'ドライバー';

$GLOBALS["lang"]['duplex'] = 'デュプレックス';

$GLOBALS["lang"]['Duplex'] = 'デュプレックス';

$GLOBALS["lang"]['duration'] = '期間';

$GLOBALS["lang"]['Duration'] = '期間';

$GLOBALS["lang"]['ESXi'] = 'ESXiについて';

$GLOBALS["lang"]['EULA'] = 'ユーラ';

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

$GLOBALS["lang"]['enabled'] = '有効化';

$GLOBALS["lang"]['Enabled'] = '有効化';

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

$GLOBALS["lang"]['English'] = '日本語 English';

$GLOBALS["lang"]['enterprise'] = 'エンタープライズ';

$GLOBALS["lang"]['Enterprise'] = 'エンタープライズ';

$GLOBALS["lang"]['Enterprise Private Network'] = 'エンタープライズプライベートネットワーク';

$GLOBALS["lang"]['Entitlement Type'] = '資格の種類';

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

$GLOBALS["lang"]['Established'] = '設立年月日';

$GLOBALS["lang"]['Estonia'] = 'エストニア語';

$GLOBALS["lang"]['Ethernet MAC'] = 'イーサネットMAC';

$GLOBALS["lang"]['ethernet_mac'] = 'イーサネットMac';

$GLOBALS["lang"]['Ethernet Mac'] = 'イーサネットMac';

$GLOBALS["lang"]['Ethiopia'] = 'エチオピア';

$GLOBALS["lang"]['Every'] = 'お問い合わせ';

$GLOBALS["lang"]['Every Day'] = '日替わり';

$GLOBALS["lang"]['Exceptions'] = '例外';

$GLOBALS["lang"]['exclude'] = 'エクスクルード';

$GLOBALS["lang"]['Exclude'] = 'エクスクルード';

$GLOBALS["lang"]['exclude_ip'] = 'IPを除外する';

$GLOBALS["lang"]['Exclude IP'] = 'IPを除外する';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IPアドレスを除外する';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCPポートを除外';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcpポートを除外';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcpポートを除外';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDPポートを除外';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udpポートを除外';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udpポートを除外';

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

$GLOBALS["lang"]['expose'] = '展示会情報';

$GLOBALS["lang"]['Expose'] = '展示会情報';

$GLOBALS["lang"]['External'] = '外部リンク';

$GLOBALS["lang"]['External Field Name'] = '外部フィールド名';

$GLOBALS["lang"]['External Field Type'] = '外部フィールドタイプ';

$GLOBALS["lang"]['external_ident'] = '外部インデント';

$GLOBALS["lang"]['External Ident'] = '外部インデント';

$GLOBALS["lang"]['external_link'] = '外部リンク';

$GLOBALS["lang"]['External Link'] = '外部リンク';

$GLOBALS["lang"]['extra_columns'] = '余分なコラム';

$GLOBALS["lang"]['Extra Columns'] = '余分なコラム';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'フィジー諸島';

$GLOBALS["lang"]['File'] = 'ファイル';

$GLOBALS["lang"]['File Import'] = 'ファイルインポート';

$GLOBALS["lang"]['File Input'] = 'ファイル入力';

$GLOBALS["lang"]['file_name'] = 'ファイル名';

$GLOBALS["lang"]['File Name'] = 'ファイル名';

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

$GLOBALS["lang"]['Finland'] = 'フィンランド';

$GLOBALS["lang"]['Firewall'] = '防火壁';

$GLOBALS["lang"]['firewall_rule'] = 'ファイアウォールルール';

$GLOBALS["lang"]['Firewall Rule'] = 'ファイアウォールルール';

$GLOBALS["lang"]['firmware'] = 'ファームウェア';

$GLOBALS["lang"]['Firmware'] = 'ファームウェア';

$GLOBALS["lang"]['firmware_revision'] = 'ファームウェアの修正';

$GLOBALS["lang"]['Firmware Revision'] = 'ファームウェアの修正';

$GLOBALS["lang"]['First Name'] = 'お名前(必須)';

$GLOBALS["lang"]['first_run'] = 'ファーストラン';

$GLOBALS["lang"]['First Run'] = 'ファーストラン';

$GLOBALS["lang"]['first_seen'] = '初めて見る';

$GLOBALS["lang"]['First Seen'] = '初めて見る';

$GLOBALS["lang"]['FirstWave'] = 'ファーストウェーブ';

$GLOBALS["lang"]['Fix'] = 'インストール';

$GLOBALS["lang"]['Fixed'] = '固定式';

$GLOBALS["lang"]['Floor'] = 'フロアマップ';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '下記のリンクのいずれかをフォローし、Open-AudITの使用方法を発見 <b>あなたのネットワーク上で何か?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'シード発見のために、私はプライベートIPアドレス空間でIPを発見するだけです。';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'シード発見のために、選択したサブネット上のIPだけを発見する必要があります。';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '種子発見のために、発見を実行する前にサブネットをpingする必要があります。';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = '生SQLクエリの高度なエントリ。 クエリごとに、 <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'ライセンスが期限切れになった場合、永久にないライセンスの場合。';

$GLOBALS["lang"]['form_factor'] = 'フォームファクター';

$GLOBALS["lang"]['Form Factor'] = 'フォームファクター';

$GLOBALS["lang"]['format'] = 'フォーマット';

$GLOBALS["lang"]['Format'] = 'フォーマット';

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

$GLOBALS["lang"]['full_name'] = '完全な名前';

$GLOBALS["lang"]['Full Name'] = '完全な名前';

$GLOBALS["lang"]['function'] = 'ファンクション';

$GLOBALS["lang"]['Function'] = 'ファンクション';

$GLOBALS["lang"]['GROUP BY'] = 'グループ別';

$GLOBALS["lang"]['Gabon'] = 'ガボン';

$GLOBALS["lang"]['Gambia the'] = 'ガンビア';

$GLOBALS["lang"]['gateway'] = 'ゲートウェイ';

$GLOBALS["lang"]['Gateway'] = 'ゲートウェイ';

$GLOBALS["lang"]['gateways'] = 'ゲートウェイ';

$GLOBALS["lang"]['Gateways'] = 'ゲートウェイ';

$GLOBALS["lang"]['Generated By'] = '生成されることによって';

$GLOBALS["lang"]['geo'] = 'ジオラマ';

$GLOBALS["lang"]['Geo'] = 'ジオラマ';

$GLOBALS["lang"]['Georgia'] = 'ジョージア州';

$GLOBALS["lang"]['German'] = 'ドイツ';

$GLOBALS["lang"]['Germany'] = 'ドイツ';

$GLOBALS["lang"]['Get Lat/Long'] = 'ラット/ロング';

$GLOBALS["lang"]['Get Started'] = '始める';

$GLOBALS["lang"]['Get a Free License'] = '無料ライセンスを取得';

$GLOBALS["lang"]['Getting Started'] = '始める';

$GLOBALS["lang"]['Ghana'] = 'ガーナ';

$GLOBALS["lang"]['Gibraltar'] = 'ジブラルタル';

$GLOBALS["lang"]['Global Discovery Options'] = 'グローバル・ディスカバリー・オプション';

$GLOBALS["lang"]['Go'] = 'おすすめ';

$GLOBALS["lang"]['Google Compute Fields'] = 'Googleの計算フィールド';

$GLOBALS["lang"]['Google Maps API Key'] = 'GoogleマップAPI キーキー';

$GLOBALS["lang"]['Greater Than'] = 'より大きい';

$GLOBALS["lang"]['Greater Than or Equals'] = 'より大きいまたは等しい';

$GLOBALS["lang"]['Greece'] = 'ギリシャ';

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

$GLOBALS["lang"]['hardware_revision'] = 'ハードウェアリビジョン';

$GLOBALS["lang"]['Hardware Revision'] = 'ハードウェアリビジョン';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'この方針は、この組織に適用されるものとします。';

$GLOBALS["lang"]['hash'] = 'ハッシュ';

$GLOBALS["lang"]['Hash'] = 'ハッシュ';

$GLOBALS["lang"]['Head'] = 'ヘッド';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'ヘアード島とマクドナルド諸島';

$GLOBALS["lang"]['height'] = '高さ';

$GLOBALS["lang"]['Height'] = '高さ';

$GLOBALS["lang"]['Height in RU'] = 'RUの高さ';

$GLOBALS["lang"]['Help'] = 'お問い合わせ';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'よくある質問';

$GLOBALS["lang"]['high'] = '高い';

$GLOBALS["lang"]['High'] = '高い';

$GLOBALS["lang"]['High Availability'] = '高可用性';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '聖なる参照(バチカン州)';

$GLOBALS["lang"]['Home'] = 'ホーム >';

$GLOBALS["lang"]['home'] = 'ホーム >';

$GLOBALS["lang"]['Home Area Network'] = 'ホーム エリアネットワーク';

$GLOBALS["lang"]['Honduras'] = 'ホンジュラス';

$GLOBALS["lang"]['Hong Kong'] = '香港';

$GLOBALS["lang"]['host'] = 'ホスト';

$GLOBALS["lang"]['Host'] = 'ホスト';

$GLOBALS["lang"]['hostname'] = 'ホスト名';

$GLOBALS["lang"]['Hostname'] = 'ホスト名';

$GLOBALS["lang"]['hour'] = '営業時間';

$GLOBALS["lang"]['Hour'] = '営業時間';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Open-AudITがより安全である理由';

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

$GLOBALS["lang"]['Hungary'] = 'ハンガリー';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpeの特長';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpeの特長';

$GLOBALS["lang"]['hyperthreading'] = 'ハイパースレッド';

$GLOBALS["lang"]['Hyperthreading'] = 'ハイパースレッド';

$GLOBALS["lang"]['I have read the EULA.'] = '私はEULAを読んでいます。';

$GLOBALS["lang"]['id'] = 'インフォメーション';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IFについて';

$GLOBALS["lang"]['IOS Version'] = 'IOSバージョン';

$GLOBALS["lang"]['IP'] = 'IPアドレス';

$GLOBALS["lang"]['ip'] = 'IPアドレス';

$GLOBALS["lang"]['IP Address'] = 'IPアドレス';

$GLOBALS["lang"]['IP Addresses'] = 'IPアドレス';

$GLOBALS["lang"]['IP Last Seen'] = 'IP 最終参照';

$GLOBALS["lang"]['IP Set By'] = 'IP によって置かれる';

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

$GLOBALS["lang"]['If'] = 'お問い合わせ';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'ポートがフィルタリングで応答する場合、利用可能なポートを考慮する必要があります。';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'ポートが open|filtered で応答する場合、利用可能なポートを検討してください。';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Open-AudIT 選択したデバイスにリモートデバイスが存在しない場合、外部システムから削除する必要があります。';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudITデバイスが変更されている場合は、外部システムを更新する必要があります。';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = '外部システムにOpen-AudIT装置がない場合は、その作成を行います。';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'エージェントがプライマリIPをこのサブネットで報告する場合、アクションを実行します。';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'これら(コンマ区切り、スペースなし)ポートが検出された場合、SSHはそれらを実行し、監査のためにそれらを使用すると仮定します。 このポートをカスタムTCPポートに追加する必要はありません。自動的に追加されます。';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '設定すると、特定のデバイス列の JSON 配列を保持します。このユーザは、設定のデフォルト以外の設定を選択しました。';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'エージェントOSファミリーがこの文字列を含んでいる場合、アクションを実行します。';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '次の条件が満たされた場合:<br/><ul><li>役割は割り当てられたad_group を持っています</li><li>org に割り当てられた ad_group があります。</li><li>エルダップ Server には use_roles が y に設定されています。</li><li>LDAP(Active DirectoryまたはOpenLDAP)に存在するユーザで、割り当てられたad_groups</li></ul>このユーザーは、Open-AudITのアカウントを作成せずにOpen-AudITにログインすることができます。 Open-AudIT は、質問の LDAP をクエリし、ユーザーが必要なグループにいる場合、Open-AudIT ではユーザ属性(名前、フルネーム、メール、ロール、orgs など)が Open-AudIT 内で自動的にポップアップされ、ログオンされます。<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Open-AudIT にログオンすると、LDAP を検索するアクセスがない場合、このアクセス権を持つ別のアカウントを使うことができます。';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'デバイスがサーバーに接触してからこの数分以上経過した場合、アクションを実行します。';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'コレクタを選択すると、次の5分の境界線で実行する予定です。';

$GLOBALS["lang"]['ifadminstatus'] = 'ifadminstatus ディレクティブ';

$GLOBALS["lang"]['Ifadminstatus'] = 'ifadminstatus ディレクティブ';

$GLOBALS["lang"]['iflastchange'] = 'ラストチェン';

$GLOBALS["lang"]['Iflastchange'] = 'ラストチェン';

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

$GLOBALS["lang"]['implementation_notes'] = '実装ノート';

$GLOBALS["lang"]['Implementation Notes'] = '実装ノート';

$GLOBALS["lang"]['Import'] = 'インポート';

$GLOBALS["lang"]['Import Example Data'] = 'インポート例データ';

$GLOBALS["lang"]['improvement_opportunities'] = '改善機会';

$GLOBALS["lang"]['Improvement Opportunities'] = '改善機会';

$GLOBALS["lang"]['In'] = 'インスタグラム';

$GLOBALS["lang"]['Inactive'] = 'インアクティブ';

$GLOBALS["lang"]['Include'] = '含まれるもの';

$GLOBALS["lang"]['Incomplete'] = '不完全な';

$GLOBALS["lang"]['Index'] = 'インデックス';

$GLOBALS["lang"]['India'] = 'インド';

$GLOBALS["lang"]['Indonesia'] = 'インドネシア';

$GLOBALS["lang"]['Info'] = 'インフォメーション';

$GLOBALS["lang"]['Informational'] = 'インフォメーション';

$GLOBALS["lang"]['initial_size'] = '初期サイズ';

$GLOBALS["lang"]['Initial Size'] = '初期サイズ';

$GLOBALS["lang"]['inode'] = 'イノード';

$GLOBALS["lang"]['Inode'] = 'イノード';

$GLOBALS["lang"]['Input Type'] = '入力タイプ';

$GLOBALS["lang"]['inputs'] = '入力';

$GLOBALS["lang"]['Inputs'] = '入力';

$GLOBALS["lang"]['Insane'] = 'インスタ';

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

$GLOBALS["lang"]['installed_by'] = 'インストール';

$GLOBALS["lang"]['Installed By'] = 'インストール';

$GLOBALS["lang"]['installed_on'] = 'インストールオン';

$GLOBALS["lang"]['Installed On'] = 'インストールオン';

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

$GLOBALS["lang"]['interface'] = 'インターフェース';

$GLOBALS["lang"]['Interface'] = 'インターフェース';

$GLOBALS["lang"]['interface_id'] = 'インターフェイス ID';

$GLOBALS["lang"]['Interface ID'] = 'インターフェイス ID';

$GLOBALS["lang"]['interface_type'] = 'インターフェイス タイプ';

$GLOBALS["lang"]['Interface Type'] = 'インターフェイス タイプ';

$GLOBALS["lang"]['Internal'] = 'インテリア';

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

$GLOBALS["lang"]['Italy'] = 'イタリア';

$GLOBALS["lang"]['Items not in Baseline'] = 'ベースラインにないアイテム';

$GLOBALS["lang"]['JSON'] = 'ジェソン';

$GLOBALS["lang"]['JSON to Import'] = 'インポートする JSON';

$GLOBALS["lang"]['Jamaica'] = 'ジャマイカ';

$GLOBALS["lang"]['January'] = '1月1日';

$GLOBALS["lang"]['Japan'] = 'ジャパンジャパン';

$GLOBALS["lang"]['Jersey'] = 'ジャージー';

$GLOBALS["lang"]['Jordan'] = 'ヨルダン';

$GLOBALS["lang"]['July'] = '7月7日';

$GLOBALS["lang"]['June'] = '6月6日';

$GLOBALS["lang"]['Kazakhstan'] = 'カザフスタン';

$GLOBALS["lang"]['Kenya'] = 'ケニア';

$GLOBALS["lang"]['kernel_version'] = 'カーネルバージョン';

$GLOBALS["lang"]['Kernel Version'] = 'カーネルバージョン';

$GLOBALS["lang"]['Key'] = 'キーキー';

$GLOBALS["lang"]['Key Password (optional)'] = '主パスワード(任意)';

$GLOBALS["lang"]['keys'] = 'キー';

$GLOBALS["lang"]['Keys'] = 'キー';

$GLOBALS["lang"]['Kiribati'] = 'キリバティ';

$GLOBALS["lang"]['Korea'] = '韓国';

$GLOBALS["lang"]['Kuwait'] = 'クウェート';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'キルギス共和国';

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

$GLOBALS["lang"]['lastModified'] = '最終修正';

$GLOBALS["lang"]['LastModified'] = '最終修正';

$GLOBALS["lang"]['latitude'] = '最近の投稿';

$GLOBALS["lang"]['Latitude'] = '最近の投稿';

$GLOBALS["lang"]['Latvia'] = 'ラトビア';

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

$GLOBALS["lang"]['level'] = 'レベル';

$GLOBALS["lang"]['Level'] = 'レベル';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = '悪用するために必要な特権のレベル(なし、低、高)。';

$GLOBALS["lang"]['Liberia'] = 'リベリア';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'リビア アラビアの Jamahiriya';

$GLOBALS["lang"]['License'] = 'ライセンス';

$GLOBALS["lang"]['License Key'] = 'ライセンスキー';

$GLOBALS["lang"]['License Required'] = 'ライセンス必須';

$GLOBALS["lang"]['licenses'] = 'ライセンス';

$GLOBALS["lang"]['Licenses'] = 'ライセンス';

$GLOBALS["lang"]['Liechtenstein'] = 'リヒテンシュタイン';

$GLOBALS["lang"]['Like'] = 'お問い合わせ';

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

$GLOBALS["lang"]['List'] = 'プロフィール';

$GLOBALS["lang"]['list_table_format'] = 'リスト表形式';

$GLOBALS["lang"]['List Table Format'] = 'リスト表形式';

$GLOBALS["lang"]['Lithuania'] = 'リトアニア';

$GLOBALS["lang"]['Load Balancing'] = 'ロードバランス';

$GLOBALS["lang"]['Local'] = 'ローカル';

$GLOBALS["lang"]['Local Area Network'] = '地域ネットワーク';

$GLOBALS["lang"]['local_port'] = 'ローカルポート';

$GLOBALS["lang"]['Local Port'] = 'ローカルポート';

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

$GLOBALS["lang"]['locations'] = 'アクセス';

$GLOBALS["lang"]['Locations'] = 'アクセス';

$GLOBALS["lang"]['Locations in this'] = 'この場所での位置';

$GLOBALS["lang"]['log'] = 'ログイン';

$GLOBALS["lang"]['Log'] = 'ログイン';

$GLOBALS["lang"]['log_format'] = 'ログフォーマット';

$GLOBALS["lang"]['Log Format'] = 'ログフォーマット';

$GLOBALS["lang"]['log_path'] = 'ログパス';

$GLOBALS["lang"]['Log Path'] = 'ログパス';

$GLOBALS["lang"]['log_rotation'] = 'ログローテーション';

$GLOBALS["lang"]['Log Rotation'] = 'ログローテーション';

$GLOBALS["lang"]['log_status'] = 'ログステータス';

$GLOBALS["lang"]['Log Status'] = 'ログステータス';

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

$GLOBALS["lang"]['Luxembourg'] = 'ルクセンブルク';

$GLOBALS["lang"]['MAC Address'] = 'MACアドレス';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MACについて メーカー';

$GLOBALS["lang"]['mac'] = 'メニュー';

$GLOBALS["lang"]['Mac'] = 'メニュー';

$GLOBALS["lang"]['Mac Address'] = 'Macアドレス';

$GLOBALS["lang"]['MacOS'] = 'MacOSの';

$GLOBALS["lang"]['Macao'] = 'マカオ';

$GLOBALS["lang"]['Macedonia'] = 'マケドニア';

$GLOBALS["lang"]['Madagascar'] = 'マダガスカル';

$GLOBALS["lang"]['maintenance_expires'] = 'メンテナンス終了';

$GLOBALS["lang"]['Maintenance Expires'] = 'メンテナンス終了';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'デフォルトのダッシュボードを作る';

$GLOBALS["lang"]['Make this install a Collector'] = 'これはコレクターをインストールします';

$GLOBALS["lang"]['Malawi'] = 'マラウイ';

$GLOBALS["lang"]['Malaysia'] = 'マレーシア';

$GLOBALS["lang"]['Maldives'] = 'モルディブ';

$GLOBALS["lang"]['Mali'] = 'マリ';

$GLOBALS["lang"]['Malta'] = 'マルタ';

$GLOBALS["lang"]['Manage'] = 'マネージング';

$GLOBALS["lang"]['Manage Licenses'] = 'ライセンスの管理';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMISで管理';

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

$GLOBALS["lang"]['match_string'] = 'マッチストリング';

$GLOBALS["lang"]['Match String'] = 'マッチストリング';

$GLOBALS["lang"]['Matching Attribute'] = 'マッチングアトリビュート';

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

$GLOBALS["lang"]['Mexico'] = 'メキシコ';

$GLOBALS["lang"]['Micronesia'] = 'マイクロネシア';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure フィールド';

$GLOBALS["lang"]['microtime'] = 'マイクロタイム';

$GLOBALS["lang"]['Microtime'] = 'マイクロタイム';

$GLOBALS["lang"]['minute'] = 'ツイート';

$GLOBALS["lang"]['Minute'] = 'ツイート';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '最後の監査がより優れているので分';

$GLOBALS["lang"]['model'] = 'モデル';

$GLOBALS["lang"]['Model'] = 'モデル';

$GLOBALS["lang"]['model_family'] = 'モデル 家族';

$GLOBALS["lang"]['Model Family'] = 'モデル 家族';

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

$GLOBALS["lang"]['Montenegro'] = 'モンテネグロ';

$GLOBALS["lang"]['month'] = 'カレンダー';

$GLOBALS["lang"]['Month'] = 'カレンダー';

$GLOBALS["lang"]['Montserrat'] = 'モンセラット';

$GLOBALS["lang"]['Morocco'] = 'モロッコ';

$GLOBALS["lang"]['motherboard'] = 'マザーボード';

$GLOBALS["lang"]['Motherboard'] = 'マザーボード';

$GLOBALS["lang"]['mount_point'] = 'マウントポイント';

$GLOBALS["lang"]['Mount Point'] = 'マウントポイント';

$GLOBALS["lang"]['mount_type'] = 'マウントタイプ';

$GLOBALS["lang"]['Mount Type'] = 'マウントタイプ';

$GLOBALS["lang"]['Mozambique'] = 'モザンビーク';

$GLOBALS["lang"]['Must Respond to Ping'] = '対処しなければならない ピン';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'Note - 設定項目を設定することで、以下のテキストの認証を解除できます。 <code>decrypt_credentials</code> お問い合わせ <code>n</code>お問い合わせ';

$GLOBALS["lang"]['name'] = 'お名前 (必須)';

$GLOBALS["lang"]['Name'] = 'お名前 (必須)';

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

$GLOBALS["lang"]['Network'] = 'ネットワーク';

$GLOBALS["lang"]['network_address'] = 'ネットワークアドレス';

$GLOBALS["lang"]['Network Address'] = 'ネットワークアドレス';

$GLOBALS["lang"]['network_domain'] = 'ネットワークドメイン';

$GLOBALS["lang"]['Network Domain'] = 'ネットワークドメイン';

$GLOBALS["lang"]['Network Types'] = 'ネットワークタイプ';

$GLOBALS["lang"]['networks'] = 'ネットワーク';

$GLOBALS["lang"]['Networks'] = 'ネットワーク';

$GLOBALS["lang"]['Networks Generated By'] = '生成されるネットワーク';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDRマスクを使用したネットワーク';

$GLOBALS["lang"]['New Building Name'] = '新建築名称';

$GLOBALS["lang"]['New Caledonia'] = 'ニューカレドニア';

$GLOBALS["lang"]['New Floor Name'] = '新しい床の名前';

$GLOBALS["lang"]['New Room Name'] = '新規ルーム名';

$GLOBALS["lang"]['New Row Name'] = '新しい列名';

$GLOBALS["lang"]['New Zealand'] = 'ニュージーランド';

$GLOBALS["lang"]['News'] = 'ニュース';

$GLOBALS["lang"]['next_hop'] = '次のホップ';

$GLOBALS["lang"]['Next Hop'] = '次のホップ';

$GLOBALS["lang"]['next_run'] = '次の実行';

$GLOBALS["lang"]['Next Run'] = '次の実行';

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

$GLOBALS["lang"]['Node'] = 'ノード';

$GLOBALS["lang"]['None'] = 'なし';

$GLOBALS["lang"]['Norfolk Island'] = 'ノーフォーク島';

$GLOBALS["lang"]['Normal'] = 'ノーマル';

$GLOBALS["lang"]['Northern Mariana Islands'] = '北マリアナ諸島';

$GLOBALS["lang"]['Norway'] = 'ノルウェー';

$GLOBALS["lang"]['Not Applicable'] = '該当なし';

$GLOBALS["lang"]['Not Checked'] = 'チェックされていない';

$GLOBALS["lang"]['Not Equals'] = '食べない';

$GLOBALS["lang"]['Not In'] = 'お問い合わせ';

$GLOBALS["lang"]['Not Like'] = '好きではない';

$GLOBALS["lang"]['Not Set'] = 'セットなし';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = '通常使用していません。 設定すると、デバイスがオープンポート(スキャンオプションごとに)を応答するようにする必要があります。 MACアドレス、arp応答またはping応答は、応答を考慮するのに十分考慮されません。 Open-AudITサーバーとターゲットIP間のルータまたはファイアウォールが、IPのポートスキャンに代わって対応している場合に便利です。';

$GLOBALS["lang"]['Note'] = 'お問い合わせ';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = '注意 - 親を選択すると、自動的にその子供へのアクセスを提供します(ここで表示されませんが)。';

$GLOBALS["lang"]['Notes'] = 'インフォメーション';

$GLOBALS["lang"]['notes'] = 'インフォメーション';

$GLOBALS["lang"]['Notice'] = 'お知らせ';

$GLOBALS["lang"]['notin'] = 'ログイン';

$GLOBALS["lang"]['Notin'] = 'ログイン';

$GLOBALS["lang"]['November'] = '11月11日';

$GLOBALS["lang"]['nvd_json'] = 'Nvd ジェイソン';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd ジェイソン';

$GLOBALS["lang"]['ORDER BY'] = '注文する';

$GLOBALS["lang"]['OS'] = 'ログアウト';

$GLOBALS["lang"]['OS Families'] = 'OSファミリー';

$GLOBALS["lang"]['OS Family'] = 'OSファミリー';

$GLOBALS["lang"]['OS Group'] = 'OSグループ';

$GLOBALS["lang"]['oae_manage'] = 'Oaeの管理';

$GLOBALS["lang"]['Oae Manage'] = 'Oaeの管理';

$GLOBALS["lang"]['object_ident'] = 'オブジェクト識別子';

$GLOBALS["lang"]['Object Ident'] = 'オブジェクト識別子';

$GLOBALS["lang"]['October'] = '10月10日';

$GLOBALS["lang"]['Oman'] = 'オマーン';

$GLOBALS["lang"]['omk_uuid'] = 'オムク・ユイド';

$GLOBALS["lang"]['Omk Uuid'] = 'オムク・ユイド';

$GLOBALS["lang"]['On'] = 'お問い合わせ';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'の 1 つ <code>3x2</code>, <code>4x2</code>, <code>4x3</code> または <code>4x4</code>お問い合わせ';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'キャンパスエリアネットワーク、クラウドネットワーク、エンタープライズプライベートネットワーク、ホームエリアネットワーク、ローカルエリアネットワーク、メトロポリタンエリアネットワーク、パッシブオプティカルローカルエリアネットワーク、パーソナルエリアネットワーク、ストレージエリアネットワーク、システムエリアネットワーク、バーチャルプライベートネットワーク、広域ネットワーク、ワイヤレスローカルエリアネットワーク。';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '開発、災害復旧、評価、生産、テスト、トレーニング、ユーザーアクセプタンステスト';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '割り当てられた、委任された、計画、予約済み、無許可、未管理。 デフォルトは割り当てられます。';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'いずれかの <code>active directory</code> または <code>openldap</code>お問い合わせ';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = '1 つ: アンチウィルス、バックアップ、ファイアウォール、承認、禁止、無視またはその他。';

$GLOBALS["lang"]['Online Documentation'] = 'オンラインドキュメント';

$GLOBALS["lang"]['Open-AudIT'] = 'オープンソース';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudITコミュニティ';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudITデバイス選択';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudITエンタープライズ';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudITエンタープライズ 大規模ネットワーク向けの高スケールの柔軟な発見と監査ソリューション プロフェッショナルのすべての機能:ベースライン、ファイル監査、クラウドディスカバリー、ラック管理、アクティブディレクトリとLDAPを含む構成可能なロールベースのアクセス制御。';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT フィールド名';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudITライセンス';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudITオプション';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudITプロフェッショナル';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudITプロフェッショナル。 世界\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudITとNmapをオープン';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScapのインストール';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap ユーザー Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap ユーザー Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap ユーザー メンバーシップ Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap ユーザー メンバーシップ Attribute';

$GLOBALS["lang"]['open|filtered'] = 'オープン|フィルター';

$GLOBALS["lang"]['Open|filtered'] = 'オープン|フィルター';

$GLOBALS["lang"]['Operating System'] = 'オペレーティング システム';

$GLOBALS["lang"]['Operating System Family Contains'] = 'オペレーティング システム家族は含んでいます';

$GLOBALS["lang"]['Operating Systems'] = 'オペレーティングシステム';

$GLOBALS["lang"]['optical'] = '光学';

$GLOBALS["lang"]['Optical'] = '光学';

$GLOBALS["lang"]['Optimized'] = '最適化された';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT で監査するオプションバージョン。 ワイルドカードとしてパーセント記号%を使用してください。';

$GLOBALS["lang"]['options'] = 'オプション';

$GLOBALS["lang"]['Options'] = 'オプション';

$GLOBALS["lang"]['Or select from the below fields.'] = 'または以下のフィールドから選択してください。';

$GLOBALS["lang"]['org_descendants'] = 'ラグデセンド';

$GLOBALS["lang"]['Org Descendants'] = 'ラグデセンド';

$GLOBALS["lang"]['org_id'] = 'ラグID';

$GLOBALS["lang"]['Org ID'] = 'ラグID';

$GLOBALS["lang"]['Organisation'] = '組織図';

$GLOBALS["lang"]['organisation'] = '組織図';

$GLOBALS["lang"]['Organisation Descendants'] = '組織の住人';

$GLOBALS["lang"]['Organisations'] = '組織図';

$GLOBALS["lang"]['orgs'] = 'オラグ';

$GLOBALS["lang"]['Orgs'] = 'オラグ';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs 名前';

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

$GLOBALS["lang"]['Others'] = 'その他';

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

$GLOBALS["lang"]['PHP'] = 'ログイン';

$GLOBALS["lang"]['POD'] = 'ポッド';

$GLOBALS["lang"]['Package'] = 'パッケージ';

$GLOBALS["lang"]['packages'] = 'パッケージ';

$GLOBALS["lang"]['Packages'] = 'パッケージ';

$GLOBALS["lang"]['pagefile'] = 'ページファイル';

$GLOBALS["lang"]['Pagefile'] = 'ページファイル';

$GLOBALS["lang"]['Pakistan'] = 'パキスタン';

$GLOBALS["lang"]['Palau'] = 'パラオ';

$GLOBALS["lang"]['Palestinian Territory'] = 'パレスチナ・テリトリー';

$GLOBALS["lang"]['Panama'] = 'パナマ';

$GLOBALS["lang"]['Papua New Guinea'] = 'パプアニューギニア';

$GLOBALS["lang"]['Paraguay'] = 'パラグアイ';

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

$GLOBALS["lang"]['permission'] = 'パーミッション';

$GLOBALS["lang"]['Permission'] = 'パーミッション';

$GLOBALS["lang"]['permissions'] = 'パーミッション';

$GLOBALS["lang"]['Permissions'] = 'パーミッション';

$GLOBALS["lang"]['Personal Area Network'] = 'パーソナルエリアネットワーク';

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

$GLOBALS["lang"]['ping'] = 'ピン';

$GLOBALS["lang"]['Ping'] = 'ピン';

$GLOBALS["lang"]['Pitcairn Islands'] = 'ピッチェラン諸島';

$GLOBALS["lang"]['placement'] = '開催場所';

$GLOBALS["lang"]['Placement'] = '開催場所';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Open-AudIT管理者がログオンしてデータベースをアップグレードしてください。';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '選択ボックスはテキスト入力ボックスを上書きします。';

$GLOBALS["lang"]['Please set using'] = 'お問い合わせ';

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

$GLOBALS["lang"]['Polite'] = 'ポライト';

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

$GLOBALS["lang"]['position'] = 'ポジション';

$GLOBALS["lang"]['Position'] = 'ポジション';

$GLOBALS["lang"]['postcode'] = '郵便番号';

$GLOBALS["lang"]['Postcode'] = '郵便番号';

$GLOBALS["lang"]['power_circuit'] = 'パワー回路';

$GLOBALS["lang"]['Power Circuit'] = 'パワー回路';

$GLOBALS["lang"]['power_sockets'] = 'パワーソケット';

$GLOBALS["lang"]['Power Sockets'] = 'パワーソケット';

$GLOBALS["lang"]['Predictable'] = '予測可能';

$GLOBALS["lang"]['Preferences'] = 'リファレンス';

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

$GLOBALS["lang"]['profile'] = 'プロフィール';

$GLOBALS["lang"]['Profile'] = 'プロフィール';

$GLOBALS["lang"]['program'] = 'プログラム';

$GLOBALS["lang"]['Program'] = 'プログラム';

$GLOBALS["lang"]['protocol'] = 'プロトコル';

$GLOBALS["lang"]['Protocol'] = 'プロトコル';

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

$GLOBALS["lang"]['Query'] = 'クエリ';

$GLOBALS["lang"]['queue'] = 'キュー';

$GLOBALS["lang"]['Queue'] = 'キュー';

$GLOBALS["lang"]['Queue Limit'] = 'キューリミット';

$GLOBALS["lang"]['Queued Device Audits'] = 'キュードデバイス監査';

$GLOBALS["lang"]['Queued IP Scans'] = 'キュードIPスキャン';

$GLOBALS["lang"]['Queued Items'] = 'キューイングアイテム';

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

$GLOBALS["lang"]['Red Query'] = '赤いクエリ';

$GLOBALS["lang"]['Redirect URI'] = 'リダイレクト URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uriをリダイレクトする';

$GLOBALS["lang"]['Redirect Uri'] = 'Uriをリダイレクトする';

$GLOBALS["lang"]['references'] = '参考文献';

$GLOBALS["lang"]['References'] = '参考文献';

$GLOBALS["lang"]['region'] = '地域紹介';

$GLOBALS["lang"]['Region'] = '地域紹介';

$GLOBALS["lang"]['registered_user'] = '登録ユーザー';

$GLOBALS["lang"]['Registered User'] = '登録ユーザー';

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

$GLOBALS["lang"]['Report'] = 'レポート';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'デバイス、ネットワークなどのレポート';

$GLOBALS["lang"]['reportable'] = 'レポート可能';

$GLOBALS["lang"]['Reportable'] = 'レポート可能';

$GLOBALS["lang"]['Reports'] = 'レポート';

$GLOBALS["lang"]['request'] = 'リクエスト';

$GLOBALS["lang"]['Request'] = 'リクエスト';

$GLOBALS["lang"]['Request a Specific CVE'] = '特定のリクエスト ログイン';

$GLOBALS["lang"]['requested'] = 'リクエスト';

$GLOBALS["lang"]['Requested'] = 'リクエスト';

$GLOBALS["lang"]['require_port'] = '港を要求して下さい';

$GLOBALS["lang"]['Require Port'] = '港を要求して下さい';

$GLOBALS["lang"]['Require an Open Port'] = '開いた港を要求して下さい';

$GLOBALS["lang"]['Required'] = 'お問い合わせ';

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

$GLOBALS["lang"]['Results'] = '結果発表';

$GLOBALS["lang"]['retrieved'] = 'フィードバック';

$GLOBALS["lang"]['Retrieved'] = 'フィードバック';

$GLOBALS["lang"]['retrieved_ident'] = '取得したインデント';

$GLOBALS["lang"]['Retrieved Ident'] = '取得したインデント';

$GLOBALS["lang"]['retrieved_name'] = '取得された名前';

$GLOBALS["lang"]['Retrieved Name'] = '取得された名前';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'デバイスから取得 - Windows:Win32_ComputerSystemProduct、Linux:dmidecode、 MacOS:system_profiler、ESXi:vim-cmd hostsvc/hostsummary、HP-UX:machinfo、 Solaris:smbios、AIX:uname。';

$GLOBALS["lang"]['Reunion'] = 'レユニオン';

$GLOBALS["lang"]['revision'] = 'リビジョン';

$GLOBALS["lang"]['Revision'] = 'リビジョン';

$GLOBALS["lang"]['risk_assesment_result'] = 'リスク評価結果';

$GLOBALS["lang"]['Risk Assesment Result'] = 'リスク評価結果';

$GLOBALS["lang"]['role'] = 'ログイン';

$GLOBALS["lang"]['Role'] = 'ログイン';

$GLOBALS["lang"]['roles'] = 'ロール';

$GLOBALS["lang"]['Roles'] = 'ロール';

$GLOBALS["lang"]['Romania'] = 'ルーマニア';

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

$GLOBALS["lang"]['Run Discovery'] = 'ディスカバリー';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'デバイス上のディスカバリーを実行';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '発見を実行し、発見 <b>あなたのネットワーク上で何か?</b>';

$GLOBALS["lang"]['Run this Command'] = 'このコマンドを実行する';

$GLOBALS["lang"]['runas'] = 'ランパス';

$GLOBALS["lang"]['Runas'] = 'ランパス';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Windows で Open-AudIT Apache サービスを実行する';

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

$GLOBALS["lang"]['Save as Default'] = 'デフォルトで保存';

$GLOBALS["lang"]['scaling'] = 'スケーリング';

$GLOBALS["lang"]['Scaling'] = 'スケーリング';

$GLOBALS["lang"]['scan_options'] = 'スキャンオプション';

$GLOBALS["lang"]['Scan Options'] = 'スキャンオプション';

$GLOBALS["lang"]['Scan Options ID'] = 'スキャンオプションID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'TCPポートのNmapトップ番号をスキャンします。';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'UDPポートのNmapトップ番号をスキャンします。';

$GLOBALS["lang"]['schedule'] = 'スケジュール';

$GLOBALS["lang"]['Schedule'] = 'スケジュール';

$GLOBALS["lang"]['scope'] = 'スコープ';

$GLOBALS["lang"]['Scope'] = 'スコープ';

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

$GLOBALS["lang"]['Search for Device'] = 'デバイス検索';

$GLOBALS["lang"]['Searching Using DataTables'] = 'データテーブルの検索';

$GLOBALS["lang"]['secondary'] = 'セカンダリー';

$GLOBALS["lang"]['Secondary'] = 'セカンダリー';

$GLOBALS["lang"]['Secondary Text'] = '二次テキスト';

$GLOBALS["lang"]['section'] = 'セクション';

$GLOBALS["lang"]['Section'] = 'セクション';

$GLOBALS["lang"]['secure'] = 'セキュア';

$GLOBALS["lang"]['Secure'] = 'セキュア';

$GLOBALS["lang"]['Security Name'] = 'セキュリティ名';

$GLOBALS["lang"]['Security Status'] = 'セキュリティ状態';

$GLOBALS["lang"]['security_zone'] = 'セキュリティゾーン';

$GLOBALS["lang"]['Security Zone'] = 'セキュリティゾーン';

$GLOBALS["lang"]['seed_ip'] = 'シードIP';

$GLOBALS["lang"]['Seed IP'] = 'シードIP';

$GLOBALS["lang"]['seed_ping'] = '種子ピン';

$GLOBALS["lang"]['Seed Ping'] = '種子ピン';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'プライベートへの種子制限';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'プライベートへの種子制限';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'サブネットへの種子制限';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'サブネットへの種子制限';

$GLOBALS["lang"]['Select'] = '選択する';

$GLOBALS["lang"]['Select All'] = 'すべてを選択';

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

$GLOBALS["lang"]['Select a Table'] = 'テーブルを選択';

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

$GLOBALS["lang"]['service_version'] = 'サービス版';

$GLOBALS["lang"]['Service Version'] = 'サービス版';

$GLOBALS["lang"]['Set'] = 'セット';

$GLOBALS["lang"]['set_by'] = 'セットバイ';

$GLOBALS["lang"]['Set By'] = 'セットバイ';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'リスト画面の表のサイズ(ノーマルまたはコンパクト)を設定します。';

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

$GLOBALS["lang"]['short'] = 'ショートショート';

$GLOBALS["lang"]['Short'] = 'ショートショート';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'このデバイスからすべての非現在のデータを削除する必要がありますか?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'このファイル(またはパターン)を使用して、ファイルが報告されていない場合。 通常、ファイルを監査するために、これは <code>y</code>お問い合わせ';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'FirstWaveから脆弱性を取得するときにこのベンダーを使用する必要があります。';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'ローカルサービスからデバイスを追加する必要があります。';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '選択した Org や Orgs の子供にこのライセンスを適用する必要がありますか?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'フィルタリングされたポートが開いているポートであることを考慮する必要があります。したがって、このIPをデバイスに取り付けたようにフラグを立てますか?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '開口部・開口部・開口部・開口部を考慮して、このIPを装置に取り付けることはできますか?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'このグループをWebインターフェイスで公開する必要があります。';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'このクエリを Web インターフェイスの [レポート] メニューの下にあるレポートのリストで公開する必要があります。';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'このクエリを Web インターフェイスの [レポート] メニューの下にあるレポートのリストで公開する必要があります。';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = '監査を実行し、それを提出する必要があります(y/n)。';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDPポート161を使用してSNMPをテストする必要があります。';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'TCPポート22を使用してSSHをテストする必要があります。';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCPポート135を使用してWMIをテストする必要があります。';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'エージェント(y/n)をアンインストールする必要があります。';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'このメソッドを使用して、ユーザーの資格情報を認証します。 設定する <code>y</code> または <code>n</code>お問い合わせ';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'ユーザの役割をポップするためにこのメソッドを使用する必要があります。 フィールド <code>use_auth</code> 設定する必要があります <code>y</code> これを使う。 設定する <code>y</code> または <code>n</code>お問い合わせ';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'スロバキア(スロバキア)';

$GLOBALS["lang"]['Slovenia'] = 'スワッピング';

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

$GLOBALS["lang"]['socket'] = 'ソケット';

$GLOBALS["lang"]['Socket'] = 'ソケット';

$GLOBALS["lang"]['software'] = 'ソフトウェア';

$GLOBALS["lang"]['Software'] = 'ソフトウェア';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'ソフトウェアは最後の7日を見つけました';

$GLOBALS["lang"]['Software Found Today'] = 'ソフトウェアは今日見つけました';

$GLOBALS["lang"]['Software Found Yesterday'] = 'ソフトウェア 発見された昨日';

$GLOBALS["lang"]['software_key'] = 'ソフトウェアキー';

$GLOBALS["lang"]['Software Key'] = 'ソフトウェアキー';

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

$GLOBALS["lang"]['started_date'] = '開始日';

$GLOBALS["lang"]['Started Date'] = '開始日';

$GLOBALS["lang"]['state'] = 'ステート';

$GLOBALS["lang"]['State'] = 'ステート';

$GLOBALS["lang"]['Stats'] = '統計情報';

$GLOBALS["lang"]['status'] = 'ステータス';

$GLOBALS["lang"]['Status'] = 'ステータス';

$GLOBALS["lang"]['Storage'] = 'ストレージ';

$GLOBALS["lang"]['storage_count'] = '貯蔵の計算';

$GLOBALS["lang"]['Storage Count'] = '貯蔵の計算';

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

$GLOBALS["lang"]['Submitted From'] = '投稿から';

$GLOBALS["lang"]['subnet'] = 'サブネット';

$GLOBALS["lang"]['Subnet'] = 'サブネット';

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

$GLOBALS["lang"]['Summary'] = 'ニュース';

$GLOBALS["lang"]['Sunday'] = '日曜日';

$GLOBALS["lang"]['supplier'] = 'サプライヤー';

$GLOBALS["lang"]['Supplier'] = 'サプライヤー';

$GLOBALS["lang"]['Support'] = 'サポート';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'サポートされているタイプは <code>subnet</code>, <code>seed</code> そして、 <code>active directory</code>お問い合わせ';

$GLOBALS["lang"]['Suriname'] = 'スリナム';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands, オーストラリア';

$GLOBALS["lang"]['Swaziland'] = 'スワジランド';

$GLOBALS["lang"]['Sweden'] = 'スウェーデン';

$GLOBALS["lang"]['switch_device_id'] = 'スイッチ装置ID';

$GLOBALS["lang"]['Switch Device ID'] = 'スイッチ装置ID';

$GLOBALS["lang"]['switch_port'] = 'スイッチ ポート';

$GLOBALS["lang"]['Switch Port'] = 'スイッチ ポート';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'スイス、スイス連邦';

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

$GLOBALS["lang"]['table'] = 'テーブル';

$GLOBALS["lang"]['Table'] = 'テーブル';

$GLOBALS["lang"]['tag'] = 'ツイート';

$GLOBALS["lang"]['Tag'] = 'ツイート';

$GLOBALS["lang"]['tag_1'] = 'タグ 1';

$GLOBALS["lang"]['Tag 1'] = 'タグ 1';

$GLOBALS["lang"]['tag_2'] = 'タグ 2';

$GLOBALS["lang"]['Tag 2'] = 'タグ 2';

$GLOBALS["lang"]['tag_3'] = 'タグ 3';

$GLOBALS["lang"]['Tag 3'] = 'タグ 3';

$GLOBALS["lang"]['tags'] = 'ニュース';

$GLOBALS["lang"]['Tags'] = 'ニュース';

$GLOBALS["lang"]['Tags :: '] = 'タグ :: ';

$GLOBALS["lang"]['Taiwan'] = '中国語(簡体)';

$GLOBALS["lang"]['Tajikistan'] = 'タジキスタン';

$GLOBALS["lang"]['Tanzania'] = 'タンザニア';

$GLOBALS["lang"]['task'] = 'タスク';

$GLOBALS["lang"]['Task'] = 'タスク';

$GLOBALS["lang"]['tasks'] = 'タスク';

$GLOBALS["lang"]['Tasks'] = 'タスク';

$GLOBALS["lang"]['tcp_ports'] = 'Tcpポート';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcpポート';

$GLOBALS["lang"]['tenant'] = 'テナント';

$GLOBALS["lang"]['Tenant'] = 'テナント';

$GLOBALS["lang"]['ternary'] = 'テレナリー';

$GLOBALS["lang"]['Ternary'] = 'テレナリー';

$GLOBALS["lang"]['Test 1'] = '試験 1';

$GLOBALS["lang"]['Test 2'] = '試験2';

$GLOBALS["lang"]['Test 3'] = '試験3';

$GLOBALS["lang"]['test_minutes'] = 'テストの議事録';

$GLOBALS["lang"]['Test Minutes'] = 'テストの議事録';

$GLOBALS["lang"]['test_os'] = 'テストOs';

$GLOBALS["lang"]['Test Os'] = 'テストOs';

$GLOBALS["lang"]['test_subnet'] = '試験サブネット';

$GLOBALS["lang"]['Test Subnet'] = '試験サブネット';

$GLOBALS["lang"]['tests'] = 'テスト';

$GLOBALS["lang"]['Tests'] = 'テスト';

$GLOBALS["lang"]['Text'] = 'テキスト';

$GLOBALS["lang"]['Thailand'] = 'タイ';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory ドメインで、サブネットのリストを取得します。';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory サーバーでサブネットのリストを取得します。';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable メトリックは、質問に対する答えをキャプチャします <strong>複数のターゲットを横断して、攻撃者がこの脆弱性の悪用イベントを自動化できますか?</strong> キルチェーンの1〜4ステップに基づいて。 これらの手順は、再認識、武器化、配信、および搾取(定義されていない、はい)です。';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE 識別子。';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'このアイテムを所有するクラウド。 サイトマップ <code>clouds.id</code>お問い合わせ';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'このリンクを提供するISPまたはTelco。';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'MitreのJSONレコード。';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVDフィードのJSONレコード。';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'このユーザーの LDAP OU (LDAP が使用される場合)。';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'このネットワークを含む場所。 サイトマップ <code>locations.id</code>お問い合わせ';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD はベースステータスを割り当てました。';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapのタイミングプリセット。';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'このパッケージは、OSに対して報告する必要があります。 すべてのために空白。 ワイルドカードとしてパーセント記号%を使用してください。 os_group、os_family、os_name に対してテストします。';

$GLOBALS["lang"]['The Open-AudIT API'] = 'オープンソース API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'リンクされたクラウドのOpen-AudIT ID。 サイトマップ <code>clouds.id</code>お問い合わせ';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'オープンオード IT サーバー コードはこのファイル内で実行されました。';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'オープンオード IT サーバー コードはこの関数内で実行されました。';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'この項目を所有する組織。 サイトマップ <code>orgs.id</code>お問い合わせ';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '実行中の関連発見のプロセス識別子。';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'このデバイスの上部のRUポトン。';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMPコミュニティ文字列。';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3認証パスフレーズ。';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3認証プロトコル。';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 プライバシーパスフレーズ。';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 プライバシープロトコル。';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3セキュリティレベル。';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3セキュリティ名。';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 コンテキストエンジン ID (オプション)。';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 コンテキスト名(オプション)。';

$GLOBALS["lang"]['The URL of the external system.'] = '外部システムのURL。';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Open-AudITのURL このコレクターが報告するサーバー(スラッシュを追跡しない)。';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = '監査スクリプトのURLは、結果を提出する必要があります。';

$GLOBALS["lang"]['The actual full name of this user.'] = '実際のユーザ名。';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '関連するベースライン。 サイトマップ <code>baselines.id</code>お問い合わせ';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '関連する発見(必要に応じて)。 サイトマップ <code>discoveries.id</code>お問い合わせ';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'テストの属性(から) <code>devices</code> テーブル)。';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'テストする属性(以下から外部フィールド名と一致しない)。';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'カスタム化をベースとする監査スクリプト。';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'ユーザーが検索するベースパス。';

$GLOBALS["lang"]['The benchmark type.'] = 'ベンチマークタイプ。';

$GLOBALS["lang"]['The building the rack is located in.'] = '建物は棚にあります。';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = '外部に作成するデバイスの計算番号。';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT で作成するデバイスの計算数。';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = '発見を実行するときに使用されるコレクター内部IP。';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '外部テーブルからのカラム名。 クラス、環境、ステータス、タイプ、またはメニュー_カテゴリのいずれかでなければなりません。';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'ターゲットデバイスまたは検出時に実行されるOpen-AudITサーバーコード。';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'クラスターの構成は次のようになります。 <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> または空白。';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '認証パスワード。 資格情報が SSH キーの場合、キーのロックを解除するために使用されるパスワードで、オプションです。';

$GLOBALS["lang"]['The credentials username.'] = 'ユーザー名。';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'クラウドディスカバリーの現状';

$GLOBALS["lang"]['The current status of the discovery.'] = '発見の現在の状態。';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'このユーザーのデフォルトで表示されるダッシュボード。 サイトマップ <code>dashboards.id</code>お問い合わせ';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'データベースバージョンとWebバージョンは矛盾しています。';

$GLOBALS["lang"]['The date of license expiration.'] = 'ライセンス有効期限';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'ソフトウェアがメーカーによって中止される日付。 通常は新しいバージョンに置き換えられます。 メンテナンスは可能です。';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'ソフトウェアが更新されず、効果的に完全に中止された日付。 メンテナンスは中止となります。';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'この項目が変更または追加された日付(読み込みのみ)。 Note - これはサーバからのタイムスタンプです。';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'この結果が作成された日付/時刻';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'このタスクを実行する月の日(*毎日)。';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'このタスクを実行する週の日(*毎日)。';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'このメソッドで作成したユーザに割り当てられたデフォルト言語。';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'デバイスは、オンラインで考慮される前に Nmap ping に応答しなければなりません。';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT 内のデバイス。 サイトマップ <code>devices.id</code>お問い合わせ';

$GLOBALS["lang"]['The direct link for the script is'] = 'スクリプトの直接リンクは';

$GLOBALS["lang"]['The email address of the reciever'] = 'レシーバーのメールアドレス';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'FirstWave のエンタープライズバイナリはライセンスが必要です。 Open-AudITのダウンロードはこちらから';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'この結果は、関連するベースライン全体が由来しています。';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '外部参照先ID。 通常はクラウド監査によってポップアップします。';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudITがこのデバイスの詳細を取得した最初の時間。';

$GLOBALS["lang"]['The floor the rack is located on.'] = '床は棚にあります。';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = '参照する外国のテーブル。 デバイス、場所、または問い合わせのいずれかでなければなりません。';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '出力に使用されるフォーマットは、電子メールで送信されます。';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = '完全に修飾された列でグループ化します。 Note: 型 = トラフィックの場合、赤いクエリ ID を表します。';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '十分に修飾されたtable.column。 コモマ(スペースなし)で区切って複数回指定できます。';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'この脆弱性をテストするための生成されたSQLクエリ。 このフィールドは、必要に応じてクエリを修正するために編集することができます。';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'ベースラインが反対に走っていたデバイスのグループ。';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '統合のためのデバイスのリストを提供するグループ。 サイトマップ <code>groups.id</code>お問い合わせ';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'このタスクが実行される日の時間(*毎時)。';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'リンクされたデバイスのid。 サイトマップ <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'データベース内の識別子の列(整数)(読み込みのみ)。';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'このベースラインの重要性(未使用)。';

$GLOBALS["lang"]['The integer of severity.'] = '重度の整数。';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth メソッドの ip アドレス';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Webインターフェイスをユーザに翻訳する言語。';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '最後の日付とこの項目が実行された時刻(読み込みのみ)。';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudITがこのデバイスの詳細を取得した最後の時間。';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'このベンチマークが実行された最後の時間。';

$GLOBALS["lang"]['The last time this integration was run.'] = 'この統合が実行された最後の時間。';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = '最大の体重(KGで)このラックは保持することができます。';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'このラックは、最大合計BTUが評価されています。';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'オプションの二次列。 Note: 型 = トラフィックの場合、これは黄色のクエリ ID を表します。';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'オプションの3番目の列。 Note: 型 = トラフィックの場合、これは緑色のクエリ ID を表します。';

$GLOBALS["lang"]['The orientation of this device.'] = 'このデバイスの方向性。';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'このキュー項目のプロセス識別子。';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'デバイスの詳細を取得するために最後に使用したプロセス';

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

$GLOBALS["lang"]['The result of the command.'] = 'コマンドの結果。';

$GLOBALS["lang"]['The room the rack is located in.'] = 'ラックのお部屋はございます。';

$GLOBALS["lang"]['The row the rack is located in.'] = '棚の列はあります。';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API キーと連携したシークレットキーです。';

$GLOBALS["lang"]['The software end-of-life date.'] = 'ソフトウェアの終生日。';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'ソフトウェアエンド・オブ・サービス・ライフの日付。';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = '指定されたデータベーステーブルから特定のデータベース列。';

$GLOBALS["lang"]['The specific database table.'] = '特定のデータベーステーブル。';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = '標準的なNmapのタイミングの選択。 通常、-T4 (攻撃的) は、これはまともなブロードバンドまたはイーサネット接続のために推奨されます。';

$GLOBALS["lang"]['The status of this integration'] = 'この統合のステータス';

$GLOBALS["lang"]['The status of this queued item.'] = 'このキューされた項目の状態。';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'ターゲットIP このログエントリのレファラー(もしあれば)。';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'このサーバーの固有の識別子。';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'このコレクターが使用するユーザーアカウント。 サイトマップ <code>users.id</code>お問い合わせ';

$GLOBALS["lang"]['The username used to access the external system.'] = '外部システムにアクセスするために使用されるユーザー名。';

$GLOBALS["lang"]['The users email address.'] = 'ユーザーのメールアドレス。';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = '当サイトでは、通常の営業時間が異なります。';

$GLOBALS["lang"]['The value assigned to the item.'] = '項目に割り当てられた値。';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'この特定の項目に格納されている値。';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPEエントリのベンダー名。';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPEから取られたベンダー。';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT がインストールされているホストの Web ディレクトリ (末尾のスラッシュが必要です)。';

$GLOBALS["lang"]['The widget at position '] = 'ウィジェットの位置 ';

$GLOBALS["lang"]['The width of this device.'] = 'この装置の幅。';

$GLOBALS["lang"]['Then'] = 'それから';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'このCVEは、存在するCVEを上書きします。';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'この属性は JSON オブジェクトとして保存されます。 すべてのコレクションの一覧で、コレクション名を同梱しています。 <code>c</code>, <code>r</code>, <code>u</code> そして、または <code>d</code> これは、作成、読み込み、更新、削除を表します。 これらは、ユーザーがその特定のコレクションからアイテムで実行できるアクションです。';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'これは、varchar(テキストフィールド)、リスト(選択できる値のリスト)、または日付のいずれかになります。';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'このコレクターは、完全にユニークな識別子です。';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'この説明は自動で保存され、理想的にはそのまま残すべきです。';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'この機能は、プロフェッショナルまたはエンタープライズライセンスが必要です。';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'これは、通常、設定されていない限り、主列です。 Note: 型 = トラフィックの場合、これは二次テキストを表します。';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'この項目は、選択した属性の値を一致するか、使用するクエリの ID を含む必要があります。';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'この項目は、選択した属性の値と一致しなければなりません。';

$GLOBALS["lang"]['This license expires on'] = 'このライセンスは期限切れとなります。';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'これは、ラックの高さ1または1に設定する必要があります。';

$GLOBALS["lang"]['This will auto-populate.'] = 'これは自動入力されます。';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '発見スキャンをかなり遅くします。';

$GLOBALS["lang"]['Thursday'] = '木曜日 木曜日';

$GLOBALS["lang"]['time_caption'] = '時間キャプション';

$GLOBALS["lang"]['Time Caption'] = '時間キャプション';

$GLOBALS["lang"]['time_daylight'] = 'タイムデイライト';

$GLOBALS["lang"]['Time Daylight'] = 'タイムデイライト';

$GLOBALS["lang"]['Time to Execute'] = '実行する時間';

$GLOBALS["lang"]['timeout'] = 'タイムアウト';

$GLOBALS["lang"]['Timeout'] = 'タイムアウト';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'ターゲットごとのタイムアウト(秒)';

$GLOBALS["lang"]['Timesatamp'] = 'タイムスタンプ';

$GLOBALS["lang"]['Timestamp'] = 'タイムスタンプ';

$GLOBALS["lang"]['timing'] = 'タイミング';

$GLOBALS["lang"]['Timing'] = 'タイミング';

$GLOBALS["lang"]['Timor-Leste'] = 'ティモール・レステ';

$GLOBALS["lang"]['Title'] = 'タイトル';

$GLOBALS["lang"]['Togo'] = 'トーゴ';

$GLOBALS["lang"]['Tokelau'] = 'トケラウ';

$GLOBALS["lang"]['Tonga'] = 'トンガ';

$GLOBALS["lang"]['toolbar_style'] = 'ツールバースタイル';

$GLOBALS["lang"]['Toolbar Style'] = 'ツールバースタイル';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'トップNmap TCPポート';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'トップNmap UDPポート';

$GLOBALS["lang"]['Traditional Chinese'] = '伝統中国';

$GLOBALS["lang"]['Traffic Light'] = '交通ライト';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'トリニダードとトバゴ';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAPログインのトラブルシューティング';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Open-AudIT Enterprise の無料 100 デバイスライセンスで最新の機能をすべてお試しください。 <a href=\" をお読みください。';

$GLOBALS["lang"]['Tuesday'] = '火曜日';

$GLOBALS["lang"]['Tunisia'] = 'チュニジア';

$GLOBALS["lang"]['Turkey'] = 'トルコ';

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

$GLOBALS["lang"]['URL'] = 'サイトマップ';

$GLOBALS["lang"]['uuid'] = 'ログイン';

$GLOBALS["lang"]['UUID'] = 'ログイン';

$GLOBALS["lang"]['udp_ports'] = 'Udpポート';

$GLOBALS["lang"]['Udp Ports'] = 'Udpポート';

$GLOBALS["lang"]['Uganda'] = 'ウガンダ';

$GLOBALS["lang"]['Ukraine'] = 'ウクライナ';

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

$GLOBALS["lang"]['Use SNMP'] = 'SNMPを使う';

$GLOBALS["lang"]['Use SSH'] = 'SSHを使う';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'セキュア(LDAPS)を使用する';

$GLOBALS["lang"]['Use Service Version Detection'] = 'サービス版の検出の使用';

$GLOBALS["lang"]['Use WMI'] = 'WMIの使用';

$GLOBALS["lang"]['Use for Authentication'] = '認証に使用する';

$GLOBALS["lang"]['Use for Roles'] = 'ロールの使用';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'ユーザー、ロール、オラグ';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Auth の Entra を使用する';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA の使用';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = '通常 Mb/s, 場所 A から.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = '通常 Mb/s, 場所 B から.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = '通常 Mb/s, 到着地 A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = '通常Mb/s、Bの位置に。';

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

$GLOBALS["lang"]['values'] = 'バリュー';

$GLOBALS["lang"]['Values'] = 'バリュー';

$GLOBALS["lang"]['Vanuatu'] = 'バヌアツ';

$GLOBALS["lang"]['VarChar'] = 'ヴァルチャー';

$GLOBALS["lang"]['Varchar'] = 'ヴァルチャー';

$GLOBALS["lang"]['variable'] = '変数';

$GLOBALS["lang"]['Variable'] = '変数';

$GLOBALS["lang"]['vendor'] = 'ベンダー';

$GLOBALS["lang"]['Vendor'] = 'ベンダー';

$GLOBALS["lang"]['vendors'] = 'ベンダー';

$GLOBALS["lang"]['Vendors'] = 'ベンダー';

$GLOBALS["lang"]['Venezuela'] = 'ベネズエラ';

$GLOBALS["lang"]['version'] = 'バージョン';

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

$GLOBALS["lang"]['View'] = 'ニュース';

$GLOBALS["lang"]['View All'] = 'すべて表示';

$GLOBALS["lang"]['View Details'] = '詳細を見る';

$GLOBALS["lang"]['View Device'] = 'デバイスを見る';

$GLOBALS["lang"]['View Discovery'] = 'ディスカバリーを見る';

$GLOBALS["lang"]['View Policy'] = 'ポリシーを見る';

$GLOBALS["lang"]['Virtual Private Network'] = 'バーチャルプライベートネットワーク';

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

$GLOBALS["lang"]['vulnerability_id'] = '脆弱性ID';

$GLOBALS["lang"]['Vulnerability ID'] = '脆弱性ID';

$GLOBALS["lang"]['WHERE'] = 'ログイン';

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

$GLOBALS["lang"]['Web'] = 'サイトマップ';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'FirstWave Open-AudITへようこそ';

$GLOBALS["lang"]['Western Sahara'] = '西サハラ';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '私は資格を持っていない場合、私は期待できるもの';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'この棚の目的は何ですか。';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'この場所のタイプは何ですか。 保有可能なタイプ <code>attributes</code> テーブル。';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '外部システムからデバイスを統合するときは、デバイスがOpen-AudITに存在しない場合は、それを作成する必要がありますか?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '外部システムからデバイスを統合する場合、外部システムにデバイスが更新されている場合は、Open-AudITで更新する必要がありますか?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '外部デバイスを取得する場合は、その時にディスカバリーを実行する必要がありますか?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'このベンチマークが実行されると 関連するから派生 <code>tasks.type</code> そして、 <code>tasks.sub_resource_id</code>お問い合わせ';

$GLOBALS["lang"]['When this log was created.'] = 'このログが作成されたとき。';

$GLOBALS["lang"]['When this queue item started processing.'] = 'このキュー項目が処理を開始したとき。';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'このベースラインを実行すると、このベースラインのポリシーにないデバイス上のアイテムを確認する必要があります。';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '開いているポートを受け取ると、現在稼働しているサービスのバージョンについてテストを試みる必要がありますか? 実際の走行サービスの確認を支援します。';

$GLOBALS["lang"]['where'] = 'どこまでも';

$GLOBALS["lang"]['Where'] = 'どこまでも';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'デバイスの詳細画面では、このフィールドが表示される場所が表示されます。';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'ラックが列にある場所。';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '脆弱性が影響、可用性、機密性を使用して、コンポーネントに影響するかどうか。';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'ユーザインタラクションが必要かどうか(なし、パッシブ、アクティブ)。';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'このベンチマークはどのOSにも適用されます。';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '外部システムからOpen-AudITを作成するデバイス(もしあれば)。 すべて、なし、または与えられた属性を使用します。';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'サブメニューがこのクエリを表示すべきである。';

$GLOBALS["lang"]['Who made this rack.'] = '誰がこのラックを作ったか。';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'なぜWindowsサーバーだけか。';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'なぜこのポリシーを除外しますか?';

$GLOBALS["lang"]['Wide Area Network'] = '広域ネットワーク';

$GLOBALS["lang"]['Widget'] = 'ウィジェット';

$GLOBALS["lang"]['Widget # '] = 'ウィジェット # ';

$GLOBALS["lang"]['Widget Type'] = 'ウィジェットの種類';

$GLOBALS["lang"]['widgets'] = 'ウィジェット';

$GLOBALS["lang"]['Widgets'] = 'ウィジェット';

$GLOBALS["lang"]['width'] = 'アクセス';

$GLOBALS["lang"]['Width'] = 'アクセス';

$GLOBALS["lang"]['windows'] = 'ウィンドウズ';

$GLOBALS["lang"]['Windows'] = 'ウィンドウズ';

$GLOBALS["lang"]['Windows Test Script'] = 'Windowsテストスクリプト';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'ワイヤレスローカルエリアネットワーク';

$GLOBALS["lang"]['wmi_fails'] = 'Wmiの失敗';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmiの失敗';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi タイムアウト';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi タイムアウト';

$GLOBALS["lang"]['workgroup'] = 'ワークグループ';

$GLOBALS["lang"]['Workgroup'] = 'ワークグループ';

$GLOBALS["lang"]['Working Credentials'] = '働く資格';

$GLOBALS["lang"]['XML'] = 'ログイン';

$GLOBALS["lang"]['Yellow Query'] = '黄色のクエリ';

$GLOBALS["lang"]['Yemen'] = 'イエメン';

$GLOBALS["lang"]['Yes'] = 'はい';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'このURLをスタッフにコピーして貼り付けることもできます。';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '新しいライセンスを追加する前に、既存のライセンスを削除する必要があります。';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTubeチュートリアル';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API キー';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'JSON として Google Compute の認証情報。';

$GLOBALS["lang"]['Your Licenses'] = 'あなたのライセンス';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft AzureクライアントID。';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azureクライアントシークレット';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft AzureサブスクリプションID。';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft AzureテナントID。';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'このクエリをポップアップする属性を選択するためのSQL。';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'このグループをポップアップするデバイスを選択するSQL。';

$GLOBALS["lang"]['Your SSH key.'] = 'SSHキー。';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'アクセス認証は、そのクラウドのネイティブ API によるものです。';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'この接続のステータス(暫定、退職など)の説明。';

$GLOBALS["lang"]['Your description of this item.'] = 'この項目の説明。';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'このソフトウェアの一般的な名前';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'このソフトウェアの一般的なバージョン';

$GLOBALS["lang"]['Zambia'] = 'ザンビア';

$GLOBALS["lang"]['Zimbabwe'] = 'ジンバブエ';

$GLOBALS["lang"]['active'] = 'アクティブ';

$GLOBALS["lang"]['active directory'] = 'アクティブディレクトリ';

$GLOBALS["lang"]['active/active'] = 'アクティブ/アクティブ';

$GLOBALS["lang"]['active/passive'] = 'アクティブ/パッシブ';

$GLOBALS["lang"]['advertisement'] = '広告掲載';

$GLOBALS["lang"]['alert'] = 'アラート';

$GLOBALS["lang"]['all'] = 'すべて';

$GLOBALS["lang"]['allocated'] = 'トップページ';

$GLOBALS["lang"]['amazon'] = 'アマゾン';

$GLOBALS["lang"]['antivirus'] = 'アンチウイルス';

$GLOBALS["lang"]['application'] = 'アプリケーション';

$GLOBALS["lang"]['approved'] = '認定資格';

$GLOBALS["lang"]['attribute'] = '属性属性';

$GLOBALS["lang"]['auto'] = 'オートロック';

$GLOBALS["lang"]['backup'] = 'バックアップ';

$GLOBALS["lang"]['banned'] = '禁止されている';

$GLOBALS["lang"]['blog'] = 'ニュース';

$GLOBALS["lang"]['bottom'] = 'ボトム';

$GLOBALS["lang"]['browser_lang'] = 'ブラウザ_lang';

$GLOBALS["lang"]['building'] = 'マンション';

$GLOBALS["lang"]['cloud'] = 'クラウド';

$GLOBALS["lang"]['code'] = 'コードコード';

$GLOBALS["lang"]['collector'] = 'コレクター';

$GLOBALS["lang"]['compute'] = 'コンシュート';

$GLOBALS["lang"]['config'] = '設定';

$GLOBALS["lang"]['contains'] = 'コンテンツ';

$GLOBALS["lang"]['create'] = '作成する';

$GLOBALS["lang"]['created'] = 'プロフィール';

$GLOBALS["lang"]['critical'] = '重要なポイント';

$GLOBALS["lang"]['cve'] = 'ログイン';

$GLOBALS["lang"]['database'] = 'データベース';

$GLOBALS["lang"]['debug'] = 'デバッグ';

$GLOBALS["lang"]['delegated'] = 'デリゲート';

$GLOBALS["lang"]['delete'] = '削除';

$GLOBALS["lang"]['deleted'] = '削除';

$GLOBALS["lang"]['denied'] = '拒否';

$GLOBALS["lang"]['devices'] = 'デバイス';

$GLOBALS["lang"]['digitalocean'] = 'デジタル';

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

$GLOBALS["lang"]['fixed'] = '固定式';

$GLOBALS["lang"]['floor'] = 'フロア';

$GLOBALS["lang"]['front'] = 'フロント';

$GLOBALS["lang"]['front-left'] = 'フロント左';

$GLOBALS["lang"]['front-right'] = 'フロントライト';

$GLOBALS["lang"]['github'] = 'ログイン';

$GLOBALS["lang"]['google'] = 'サイトマップ';

$GLOBALS["lang"]['greater or equals'] = '大きいか等しい';

$GLOBALS["lang"]['greater than'] = 'より大きい';

$GLOBALS["lang"]['group'] = 'グループ';

$GLOBALS["lang"]['head'] = 'ヘッドヘッド';

$GLOBALS["lang"]['here'] = '詳しくはこちら';

$GLOBALS["lang"]['high availability'] = '高可用性';

$GLOBALS["lang"]['howto'] = 'ハウツー';

$GLOBALS["lang"]['ignored'] = '無視される';

$GLOBALS["lang"]['in'] = 'お問い合わせ';

$GLOBALS["lang"]['inactive'] = 'インアクティブ';

$GLOBALS["lang"]['incomplete'] = '不完全な';

$GLOBALS["lang"]['info'] = 'インフォメーション';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int、テキスト、bool(y/n)、等';

$GLOBALS["lang"]['is licensed to'] = 'ライセンス';

$GLOBALS["lang"]['left'] = '左から';

$GLOBALS["lang"]['less or equals'] = 'より少ないか等しい';

$GLOBALS["lang"]['less than'] = 'より少しより';

$GLOBALS["lang"]['license'] = 'ライセンス';

$GLOBALS["lang"]['like'] = 'お問い合わせ';

$GLOBALS["lang"]['line'] = 'ライン';

$GLOBALS["lang"]['load balancing'] = '負荷分散';

$GLOBALS["lang"]['location'] = 'アクセス';

$GLOBALS["lang"]['managed'] = 'マネージング';

$GLOBALS["lang"]['microsoft'] = 'マイクロソフト';

$GLOBALS["lang"]['mount point'] = 'マウントポイント';

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

$GLOBALS["lang"]['openldap'] = 'オープンソース';

$GLOBALS["lang"]['optimized'] = '最適化';

$GLOBALS["lang"]['optionally '] = 'オプション ';

$GLOBALS["lang"]['other'] = 'その他';

$GLOBALS["lang"]['package'] = 'パッケージ';

$GLOBALS["lang"]['partition'] = 'パーティション';

$GLOBALS["lang"]['pass'] = 'パス';

$GLOBALS["lang"]['pending'] = 'ペンディング';

$GLOBALS["lang"]['performance'] = 'パフォーマンス';

$GLOBALS["lang"]['performed'] = '出演者';

$GLOBALS["lang"]['pie'] = 'ピエ';

$GLOBALS["lang"]['planning'] = 'プランニング';

$GLOBALS["lang"]['predictable'] = '予測可能';

$GLOBALS["lang"]['query'] = 'お問い合わせ';

$GLOBALS["lang"]['rear'] = 'バックナンバー';

$GLOBALS["lang"]['rear-left'] = '後部左';

$GLOBALS["lang"]['rear-right'] = 'リアライト';

$GLOBALS["lang"]['regex'] = 'レグテックス';

$GLOBALS["lang"]['release'] = 'リリース';

$GLOBALS["lang"]['reserved'] = 'スタッフ紹介';

$GLOBALS["lang"]['right'] = 'お問い合わせ';

$GLOBALS["lang"]['room'] = '客室のご案内';

$GLOBALS["lang"]['row'] = 'ログイン';

$GLOBALS["lang"]['stand-alone'] = 'スタンドアローン';

$GLOBALS["lang"]['standard'] = 'スタンダード';

$GLOBALS["lang"]['starts with'] = 'まずは';

$GLOBALS["lang"]['storage'] = 'ストレージ';

$GLOBALS["lang"]['timestamp'] = 'タイムスタンプ';

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

$GLOBALS["lang"]['unallocated'] = '非配置';

$GLOBALS["lang"]['unauthorised'] = '無許可';

$GLOBALS["lang"]['unknown'] = 'インフォメーション';

$GLOBALS["lang"]['unmanaged'] = 'マネージド';

$GLOBALS["lang"]['unused'] = '未使用';

$GLOBALS["lang"]['update'] = '更新情報';

$GLOBALS["lang"]['valid'] = 'よくある質問';

$GLOBALS["lang"]['virtualisation'] = '仮想化';

$GLOBALS["lang"]['warning'] = '警告';

$GLOBALS["lang"]['web'] = 'サイトマップ';

$GLOBALS["lang"]['yes'] = 'お問い合わせ';

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

