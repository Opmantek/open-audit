<?php
$GLOBALS["lang"][' Default, currently '] = ' Varsayılan olarak, şu anda ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Bir şey beklendiği gibi çalışmazsa, yapılacak ilk şey logları kontrol etmektir.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Şimdi bir dil dosyası ile destekleniyor. Kullanıcınızı bu dili kullanmak için değiştirmek için tıklayın, tıklayın ';

$GLOBALS["lang"][' seconds'] = ' saniye saniye saniye saniye saniye';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = 'Ancak logon bilgilerini ayrı bir set hatırlamak zorunda kalmayacak.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = '30\'u varsayılan bir set olarak tedarik ettiğimiz şey. Profesyonel kullanıcılar bunları değiştiremez, ancak bir Enterprise kullanıcısı tamamen özelleştirme yeteneklerine sahiptir - kendi oluşturmak dahil.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Ama sen, <i>Gerekli olması gerekir</i> Auth için Entra\'yı kullanmak için Open-AudIT sunucunuzda https kullanılır. Lütfen Apache\'yi kullanmak için yapılandırın <strong>https://www.</strong> Entra for auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Bunu sağlamak için, yapılandırma öğesini düzenler ';

$GLOBALS["lang"]['10 Minutes'] = '10 Dakika';

$GLOBALS["lang"]['15 Minutes'] = '15 Dakika 15 Dakika';

$GLOBALS["lang"]['30 Minutes'] = '30 Dakika';

$GLOBALS["lang"]['5 Minutes'] = '5 Dakika';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrol grubu örgütsel, insanlar, fiziksel ve teknolojik kategorilere katıldı';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</strong> - Bu URL\'ye yerel Open-AudIT sunucusundan erişebilirsiniz. İndirilen senaryo başka herhangi bir makinede çalıştırıldığında gönderemeyecek. Diğer makineleri denetlemeniz gerekiyorsa, lütfen senaryoyu herhangi bir uzaktan makineden indirmeniz gerekir, Open-AudIT sunucusunun kendi başına bir tarayıcı kullanmıyorsunuz.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</strong> - Hedef bir cihaz üzerinde karşılaştırmaları yürütmek için SSH veya SSH anahtar bilgilerini çalışmanız gerekir.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Basel</strong> - Temel tanımı ve bireysel politika testleri içeren aşırı belge.<br/> <br/> <strong>Politika Politika Politika Politikaları Politika Politika Politikaları Politika Politika Politika Politikaları Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika</strong> - Basel\'de bulunan bireysel testler. Her test belirli bir öğe içindir. Bir örnek SSH sürüm 1.2.3 için test olacaktır.<br/> <br/> <strong>Detaylar</strong> - Baselines netstat limanlarını, kullanıcıları ve yazılımı karşılaştırabilir.<br/> <br/> <strong>Yazılım</strong> - İsmi ve versiyonunu kontrol ettiğimiz yazılımı karşılaştırmak. Çünkü sürüm numaraları formatta standartlaştırılmış değildir, bir denetim sonucu aldığımızda, her paket için yazılım ayrıntılarının geri kalanıyla birlikte veritabanında depoladığımız yeni bir özellik yaratırız. Bu nedenle, yazılım politikaları kullanarak temeller, 1.10 tarafından denetim edilmeyen bir cihaza karşı çalışırken çalışmayacaktır (en azından). Yazılım politikaları sürüme karşı test edebilir "emek", "daha büyük" veya "daha fazla" olabilir.<br/> <br/> <strong>Netstat Ports</strong> - Netstat Ports port numarası, protokol ve program kombinasyonu kullanır. Eğer her şey politika geçişi mevcutsa.<br/> <br/> <strong>Kullanıcılar Kullanıcılar</strong> Kullanıcılar Netstat Ports\'a benzer çalışır. Bir kullanıcı eşleşen bir isim, statü ve şifre detayları ile varsa (değiştirilebilir, süresiz, gerekli) o zaman politika geçer.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Bir yer onunla ilişkili cihazlara sahip olabilecek fiziksel bir adrestir.<br/> <br/>Bu koordinatları (lat/uzun) atayabilir ve eğer atanan cihazlar varsa, yer Open-AudIT Enterprise haritasında görünecektir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Bir ağ keşif girişlerinden ve cihaz özelliklerinden elde edilir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Bir özet, belirli özelliklerin farklı değerleri tarafından belirtilen öğelerin bir listesini gösterecektir. <code>table</code> ve <code>column</code> özellikler.<br/> <br/>Bir özet idam edildiğinde, sonuç bunun için farklı değerlerin bir listesi olacaktır. <code>table</code> ve <code>column</code>. Kullanıcının eşleşen cihazları görmesine izin veren değerler üzerinde bağlantılar olacaktır.<br/> <br/>Eğer özelliği varsa <code>extra_columns</code> Bu sütunları standart cihaz sütunlarına ek olarak içerecektir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agents, bir keşif olmadan PC\'leri denetim etmenize izin verir. Ajanı yükleyin ve her gün sunucu ile kontrol edecektir ve kendini denetletir. Bilgisayarlarınız güvenlik duvarıysa, denetim verileri hala Open-AudIT\'de görünecektir.</p><p>Test ne zaman test edildiğinde <strong>if if if if if if if if if if</strong> Bir ajan eylemleri gerçekleştirmeli, üç test geçmelidir (eğer test ayarlandığında). <strong>Sonra</strong> Eylemler alınır.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Uygulamalar sizinle tanımlanır, kullanıcı ve Open-AudIT için cihazlarla kullanmak ve ilişkilendirir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attributes, belirli alanlarda kullanmak için Open-AudIT için depolanır.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Hangi makinelerin aynı yapılandırıldığını belirleyebilmek, sistemler yönetiminin ve denetimlerin büyük bir parçasıdır – ve şimdi bunu basit ve otomatik hale getirecek şekilde rapor edebilir. Temelinizi tanımladığınızda, önceden belirlenmiş bir programda bir dizi cihaza otomatik olarak çalışacak. Bu idam edilen tabanların çıktısı, üçüncü bir parti sistemine ya da hatta basılı bir rapor olarak aktarılacak.<br/> <br/> Baselines, daha önce tanımlanmış bir dizi özellikle denetim verilerini bir araya getirmenizi sağlar (in bazline) cihazların uyumunu belirlemek için.<br/> <br/> Örneğin - bir gruptaki apache sunucularından biri olarak çalışan Centos 6\'dan bir temel oluşturabilirsiniz. Bu özel sunucunun sadece istediğiniz şekilde yapılandırıldığını biliyorsunuz, ancak kümedeki diğer sunucular tam olarak aynı yapılandırılırsa emin değilsiniz. Baselines bunu belirlemenizi sağlar.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters, daha iyi kayıt, yönetim maliyetlerini yönetmek ve tahmin etmek için Open-AudIT\'de depolanır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Bileşenler, bir cihaz için özellikleri barındıran masalar için kullanılan genel bir terimdir. Bu tablolar şunlardır: erişim_point, arp, bios, sertifika, cli_ configure, disk, dns, file, ip, lisans, log, bellek, modül, monitör, anneboard, netstat, ağ, nmap, optik, sayfa, bölüm, bölüm, politika, baskı_queue, işlemci, radyo, yol, san, scsi, server, server_item, hizmet, paylaşmak, yazılım_key, ses, görev, usb, kullanıcı, kullanıcı,_grup, değişken, video, vm, pencereler.</p><p> Ayrıca aşağıdaki tabloları da cihazla ilgili olarak sınıflıyoruz: uygulama, ek, küme, credential, image.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials veritabanında depolandığında şifrelenir.<br/> <br/>Bir Discovery çalıştırıldığında, bir cihazın ilk önce bağlantı için alınan ve test ettiği kimlikleri vardır (bundan itibaren). <code>credential</code> Masa). Bu başarısız olursa, verilen Org ile ilişkili kimlikler <code>credentials.org_id</code> Ayrıca cihaza karşı test edilir. Çalışma kimlikleri, credential masasında bireysel bir cihaz seviyesinde depolanır (note - masada "s" yoktur).<br/> <br/>SSH anahtarları SSH kullanıcı / paroladan önce test edilir. SSH test ettiğinde, bilgi aynı zamanda sudo ile çalışmak veya kök olmaktır.<br/> <br/>Kullanımı kolaylaştırmak için, Windows şifreleri tek veya çift bir alıntı içermemelidir. Bu uzak bir WMI sınırlaması, Open-AudIT sınırlaması değil.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credentials cihazlara erişmek için kullanılır.<br/> <br/>Güvenilirlik yapılandırması, Open-AudIT\'i kurduktan sonra yaptığınız ilk şeylerden biri olmalıdır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Raflarınızı tanımlayın ve cihazları pozisyonlarına tayin edin. Zaten Open-AudIT cihazlarınız var ve konumlarınızı biliyorsunuz. Open-AudIT, bir raf oluşturmanıza ve cihazlar atamanıza izin vermek için bunu genişletmektedir. Open-AudIT bile içinde bulunan raf ve cihazların görselleştirilmesi sağlayacaktır. Bir cihaz resmi sağlarsanız, bu resim görselleştirmede kullanılacaktır. Ekrandaki rafa bakabilir ve bunun önünde duran aynı eşyaları görebilirsiniz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Ağınızdaki cihazlar yönetilmelidir. Ama kayıtlarınızı tarihe kadar nasıl tutarsınız? A spreadsheet - defintley değil. Bu, saatlerce tarih dışında olacak, eğer günler değilse. Neden manuel olarak devam etmeye çalışır. Ağlarınızı otomatik olarak taramak ve cihazlarınızı kaydetmek için Open-AudIT kullanın - üretici, model, seri ve 100\'den fazla diğer özellik. Tüm yazılım listeleri, hizmetler, diskler, açık limanlar, kullanıcılar vs. Otomatik olarak bir özellik eklenmiş veya değiştirilmiş olup olmadığını görün.<br/> <br/>Open-AudIT kurulduktan sonra geri oturabilirsiniz ve rahatlayabilirsiniz. Örneğin, bir programda size e-posta iletildiniz - bu hafta yeni cihazlar neler keşfettik? Bu hafta yeni yazılım ne kuruldu? Geçen ay herhangi bir donanım değişikliği var mıydı?<br/> <br/>Depolama alanlarında kendi özel özelliklerinizle kolayca genişletin.<br/> <br/>Ağa veya bu cihazlara bağlı olmayan cihazlar bile Open-AudIT sunucunuz ulaşamaz.<br/> <br/>Bilgisayarlar, anahtarlar, yönlendiriciler, yazıcılar veya ağınızdaki diğer cihazlar - Open-AudIT hepsini kontrol edebilir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Keşfetler, Open-AudIT’in ne yaptığının çok kalbindedir.<br/> <br/>"Benim ağımda ne var?"<br/> <br/>Keşfetler, her ve her seferinde bu ağ ayrıntılarına girmeden bir ağ üzerinde bir keşif yapmanızı sağlayan veri öğeleri hazırlanmaktadır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Discovery Seçenekler, küresel bir ayar değişti <a href="../configuration?configuration.name=discovery_default_scan_option">yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma</a>. Bir Open-AudIT Enterprise lisansınız varsa, bu keşif için ayarlanır ve ek olarak, gerektiğinde özelleştirilebilir. Discovery Discovery Seçenekler aşağıdaki gibidir ( bireysel bir IP tarama zamanı dahil):<br/><br/><strong>UltraFast</strong>: <i>1 ikinci</i>. Sadece Open-AudIT\'nin cihazla konuşmak ve bir IOS cihazı tespit etmek için kullanması gereken limanlar (WMI, SSH, SNMP, Apple Sync). An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilmez. Cihaz bir Nmap ping\'e cevap vermelidir. agresif zamanlama kullanın.<br/><br><strong>SuperFast</strong>: <i>5 saniye</i>. En iyi 10 TCP ve UDP limanlarını ve port 62078 (Apple IOS algılama). An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilmez. Cihaz bir Nmap ping\'e cevap vermelidir. agresif zamanlama kullanın.<br><br/><strong>Hızlı Hızlı Hızlı Hızlı Hızlı</strong>: <i>40 saniye</i>. En üst 100 TCP ve UDP limanlarını ve port 62078 (Apple IOS algılama). An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilmez. Cihaz bir Nmap ping\'e cevap vermelidir. agresif zamanlama kullanın.<br/><br/><strong>Medium (Classic)</strong>: <i>90 saniye</i>. Bunu yapabildiğimiz gibi geleneksel bir Open-AudIT taramasına yakın olarak. En üst 1000 TCP portu, 62078 (Apple IOS algılama) ve UDP 161 (SNMP). An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilir (ve cihaz tespitini tetikleyecek). Cihazlar bir Nmap ping\'e yanıt vermeden taranır. agresif zamanlama kullanın.<br/><br/><strong>Medium Medium Medium Medium</strong>: <i>100 saniye</i>. En üst 1000 TCP ve en üst 100 UDP limanlarını ve port 62078 (Apple IOS algılama). An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilmez. Cihaz bir Nmap ping\'e cevap vermelidir. agresif zamanlama kullanın.<br/><br/><strong>Yavaş yavaş yavaş yavaş yavaş yavaş</strong>: <i>4 dakika</i>. En üst 1000 TCP ve en üst 100 UDP limanlarını ve port 62078 (Apple IOS algılama). Versiyon algılama etkinleştirildi. An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilir (ve cihaz tespitini tetikleyecek). Cihaz bir Nmap ping\'e cevap vermelidir. Normal zamanlama kullanın.<br/><br/><strong>UltraSlow</strong>: <i>20 dakika 20 dakika</i>. tavsiye edilmez. En üst 1000 TCP ve UDP limanlarını ve port 62078 (Apple IOS algılama). Cihazlar bir Nmap ping\'e yanıt vermeden taranır. Versiyon algılama etkinleştirildi. An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An An <code>open|filtered</code> port açık olarak kabul edilir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>filtered</code> port açık olarak kabul edilir (ve cihaz tespitini tetikleyecek). kibar zamanlama kullanın.<br/><br/><strong>Özel Özel Özel</strong>: <i>Bilinmeyen zaman</i>. Standart bir keşif başlangıcı tarafından belirlenen seçenekler değiştirildiği zaman.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Gruplar gerekli koşulları karşılayan basit cihazlar listesi olarak kullanılır. JSON kullanarak talep edilirse, bir liste döndürür <code>devices.id</code> Sadece. Web arayüzünü kullanarak talep edilirse, standart sütun özellikleri listesini döndürürler.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Eğer kullanıcı Open-AudIT\'ye giriş yapmak LDAP (ve OpenLDAP kullanıyorsanız), bu erişimi olan başka bir hesabı kullanabilirsiniz. Kullanın <code>ldap_dn_account</code> ve <code>ldap_dn_password</code> Bunu yapılandırmak için.<br/> <br/><strong>Helpful Documentation</strong><br/> <br/><a href="/index.php/auth/help">General Auth Help</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entra for Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Auth için OKTA kullanımı</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Problemshooting LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Kullanıcılar, Roller ve Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Bir cihaz tipi eklerseniz, ilişkili simgeyi görüntülemek için, . the formatlı dosyayı dizinine kopyalamalısın:<br/><em>Linux Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows Windows Windows Windows</em>c:\xampp\htdocs\open-audit\device_images<br/> <br/>Bir yer tipi eklerseniz, ilişkili simgeyi görüntülemek için, 32x32px ikonunu dizinine manuel olarak kopyalamanız gerekir:<br/><em>Linux Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows Windows Windows Windows</em>c:\xampp\htdocs\open-audit\images\map_icons</p><p>Ne zaman? <i>Kaynak kaynağı</i> Bir şeydir <code>device</code>, geçerli <i>türleri türleri</i> : <code>class</code>, <code>environment</code>, <code>status</code> ve <code>type</code>. Eğer <i>Kaynak kaynağı</i> Is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is <code>locations</code> veya <code>org</code> Tek geçerli <i>türü türü türü türü türü</i> Is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is <code>type</code>. Eğer <i>Kaynak kaynağı</i> Bir şeydir <code>query</code> Tek geçerli <i>türü türü türü türü türü</i> Is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Bulut makinelerinizi tamamen denetlemek istiyorsanız, Open-AudIT\'deki bu bilgilerin de ihtiyacınız olacağını unutmayın.</p><p>Microsoft Azure\'u kullanıyorsanız doğru limanlara izin verdiğinizden emin olun (22 SSH için vs). Sanal Makinenizi kontrol edin -> Ağlama kuralları.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Bir Liste türünü seçerseniz, "değer" alanı etkinleştirilecektir. Burada seçici değerlerin ayrı bir listesini koymanız gerekir. Bunlar, alan ne zaman ayarlandığında bir damla kutuda sergilenecektir.<br/> <br/>Diğer özelliklerin çoğu gibi, Fields büyük bir düzenleme olabilir. Bulk Edit işlevini normalde olduğu gibi kullanın ve Fields giriş için kullanılabilir göreceksiniz.<br/> <br/>Cihazın ayrıntılarını görüntülemek, alanı içeren bölümü açın ve (eğer yeterli erişim varsa) onu düzenlemek için alan değerine tıklayabilirsiniz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Her gün yeni güvenliklerin keşfedildiği ve yanıldığı bilgisayar güvenliği dünyasında sürekli bir süreç olmalıdır. Ayrıca, politikalara uyum sağlamanın bir yolunu, periyodik değerlendirme ve risk izlemesini de içerecektir. OpenSCAP ekosistemi, bu süreçlerin hızlı, maliyetli ve esnek uygulanması için araçlar ve özelleştirilmiş politikalar sağlar.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Entegrasyonlar, harici sistemlerle konuşmak için cihaz seçimi ve programları ayarlamanıza izin verir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows masaüstü sistemleri Open-AudIT performansını etkileyebilecek ağ sınırlamaları vardır. TCP/IP yığını, eşzamanlı olarak tamamlanmamış TCP bağlantı girişimleri sayısını sınırlar. Limite ulaştıktan sonra, sonraki bağlantı girişimleri bir kuyrukta yerleştirilir ve ikinci olarak sabit bir oran (10 olarak çözülecektir). Eğer çok fazla kuyruk girerse, düşebilir. Ve sonunda, Apache OS tarafından yeniden başlatılacaktır. Bu nedenle, bir Windows masaüstü işletim sistemi üzerinde Open-AudIT kurmak desteklenmez.<br/><br/>Open-AudIT kodu ile yanlış bir şey yok, ya da bu konuyu Windows müşteri makinelerinde ele almak için bir şey yapabiliriz.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap zamanlama ayrıntıları bu bağlantılı sayfanın alt kısmında bulunur <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-per.html</a>. Bu sayfadan:<br/> <br/><em>Eğer iyi bir geniş kapsamlı veya ethernet bağlantısındaysanız, her zaman kullanmayı öneririm -T4 (Aggressive). Bazı insanlar seviyor -T5 (Insane) tadım için çok agresif olsa da. İnsanlar bazen belirtmişlerdir -T2 (Polite) çünkü ev sahibi olma olasılığı daha az olduğunu düşünüyorlar veya genel olarak kendilerini kibar olduklarını düşünüyorlar. Sık sık yavaş nasıl olduğunu fark etmiyorlar -T2 gerçekten. taramaları varsayılan bir taramadan on kat daha uzun sürebilir. Makine kazaları ve bant genişliği sorunları varsayılan zamanlama seçenekleri ile nadirdir -T3 (Normal) ve bu yüzden normalde dikkatli tarayıcılar için tavsiye ederim. Bu sorunları azaltmak için zamanlama değerleri ile oynamaktan çok daha etkilidir.</em><footer>Gordon Gordon Gordon <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT, bir kullanıcıyı ve ek olarak, grup üyeliğine dayanan bir kullanıcı hesabı oluşturmak için farklı yöntemler kullanmak için yapılandırılabilir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT, dosyaların bir dosya veya dizi hakkında ayrıntıları alabilir ve bu dosyaları Open-AudIT veritabanındaki diğer özellikler olarak izleyebilir.<br/> <br/>Bu özellik Linux Open-AudIT sunucuları için kutudan çalışır, ancak Windows Open-AudIT sunucusu altında hizmet hesabına bir değişiklik gerekir.<br/> <br/>Desteklenen müşteriler Windows ve Linux\'tır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT bir dosya hakkında ayrıntıları alabilir, ana paket yöneticisine bunu biliyor ve Open-AudIT veritabanındaki değişiklikler için bu dosyaları izleyin.<br/> <br/>Desteklenen müşteriler sadece Linux\'tır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud IT, her cihazla ilişkili olan özel alanlarda bilgi saklayabilir.<br/> <br/>Ek bir alan oluşturulduktan sonra, veritabanında başka herhangi bir özellik gibi sorgu ve gruplarda kullanılabilir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT, yerleşik birçok sorgu ile geliyor. Belirli bir sorgu gerektirir ve önceden paketlenmiş sorguların hiçbiri ihtiyaçlarınıza uymazsa, yeni bir tane oluşturmak ve koşmak için Open-AudIT\'e yük olmak oldukça kolaydır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT, inşa edilmiş birçok summary ile geliyor. Belirli bir özet gerektirirseniz ve önceden paketlenmiş summünlerin hiçbiri ihtiyaçlarınıza uygun değilse, yeni bir tane oluşturmak ve koşmak için Open-AudIT\'a yüklemek oldukça kolaydır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT, FirstWave tarafından şaşırtıcı bir destek seviyesi ile desteklenir. Aktif bir destek topluluğu tercih ederseniz, bunun yanı sıra var. Diğeri doğrudan geliştiricilerle konuşabilir ve 24 saat içinde bir yanıt alabilir misiniz? Sadece bunu diğer ürünlerle deneyin! İnanılmaz destek. Full stop. desteğe ihtiyacınız var, destek veriyoruz. Hayır, yoksa ama Büyük destek. Dönem.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT kutudan çok fazla bebek sağlar!<br/> <br/>Orgs (organizasyonlar) Open-AudIT, önemli bir öğedir. Bir kullanıcının birincil Org\'a da erişebilecekleri bir Orgs listesi vardır. Bir kullanıcı bunu, eriştikleri Orgs\'e verilen eylemleri tanımlayan "Roles" isimli bir liste ile birleştirir. Bir kullanıcının "orgs" ve "roles" kombinasyonu, Open-AudIT içinde ne yapabileceklerini tanımlar.<br/> <br/>Open-AudIT\'deki çoğu ürün bir Org. cihazlara, Konums, Networks\'a verilir.<br/> <br/>Orgs çocuk Orgs olabilir. Bir organizasyon şeması (ağaç) yapısını düşünün. Bir kullanıcının belirli bir Org\'a erişimi varsa, o Orgs torunlarına da erişimleri vardır. Daha fazla bilgi için, bunu gör <a href="/index.php/faq?name=Users, Roles and Orgs">SSS SSS</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT kutudan çok fazla bebek sağlar!<br/> <br/>Orgs (organizasyonlar) Open-AudIT, önemli bir öğedir. Bir kullanıcının birincil Org\'a da erişebilecekleri bir Orgs listesi vardır. Bir kullanıcı bunu, eriştikleri Orgs\'e verilen eylemleri tanımlayan "Roles" isimli bir liste ile birleştirir. Bir kullanıcının "orgs" ve "roles" kombinasyonu, Open-AudIT içinde ne yapabileceklerini tanımlar.<br/> <br/>Open-AudIT\'deki çoğu ürün bir Org. cihazlara, Konums, Networks\'a verilir.<br/> <br/>Orgs çocuk Orgs olabilir. Bir organizasyon şeması (ağaç) yapısını düşünün. Bir kullanıcının belirli bir Org\'a erişimi varsa, o Orgs torunlarına da erişimleri vardır.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Hızlı bir şekilde ağınızdaki cihazların durumunu görün.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Open-Aud IT önemli bir öğedir. Bir kullanıcının birincil Org\'a da erişebilecekleri bir Orgs listesi vardır. Bir kullanıcı bunu, erişimleri olan Orgs\'e verilen öğeleri tanımlayan bir dizi görevle birleştirir. Bir kullanıcının "orgs" ve "roles" kombinasyonu, Open-AudIT içinde ne yapabileceklerini tanımlar.<br/> <br/>Tamam Open-AudIT Enterprise deneyimini alın. Roller oluşturmak, kullanıcılarınızın Open-AudIT içinde ne yapabileceğinin üzerinde ince tahıl kontrolü sağlar.<br/> <br/>Yazarizasyon için birincil yöntem (bir kullanıcı ne yapabilir) kullanıcıların Rollerine dayanmaktadır. Varsayılan roller yönetici veyag_admin, muhabir ve kullanıcı olarak tanımlanır. Her rol, her uç noktası için bir dizi izine sahiptir. Ek rolleri tanımlama ve mevcut rolleri düzenleme yeteneği Open-AudIT Enterprise\'da etkinleştirilir.<br/> <br/>Roller ayrıca LDAP (Active Directory ve OpenLDAP) yazarlığı ile kullanılabilir. Enterprise lisanslı yüklemeler her tanımlanmış rol için LDAP grubunu özelleştirme yeteneğine sahiptir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Kurallar nitelikleri inceler ve uygun kurala dayanan kalibreler yaparlar.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Scanning seçenekleri kolayca bir dizi seçeneği keşif için uygulamanıza izin verir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Basit, sezgisel, Google Maps tarafından sağlanan doğru coğrafi harita. Open-AudIT faydalanıyor Google Maps, cihaz konumlarının canlı, interaktif coğrafi haritasını sunmak için. Sokak adreslerini geocodes ve uzunlık / entitude\'a otomatik dönüştürme.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Yazılım Paketleri, antivirüs, yedekleme, güvenlik, onaylanmış veya yasaklanmış yazılımların kurulacağını belirlemek için kullanılır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Geçerli Subnet özellikleri bazı örnekler şunlardır: 192.168.1.1 ( tek bir IP adresi), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP address).<br/> <br/><em>NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</em> - Sadece bir subnet (örneğin, 192.168.1.0/24) Open-AudIT için geçerli bir ağ oluşturabilir. <br/> <br/>Aktif bir Rehber türü kullanıyorsanız, Domain Controller\'la konuşmak için uygun kimliklere sahip olduğunuzdan emin olun. <a href="../credentials">Referanslar</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standartlar Open-AudIT\'de depolanır.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Desteklenen müşteriler sadece Linux\'tır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Görevler, altı kroki programı yansıtan bir programa sahiptir. Dakikalar, saat, gün_of_ay, ay, gün_of_week tüm davranışları kroki tanımları olarak hareket eder. Bu kullanım comma seperated değerleri (no alanları) kullanarak bunlardan çok sayıda seçebilirsiniz. Her değeri kullanarak seçebilirsiniz *.<br/> <br/>The The The The The The The The <code>type</code> Görevden biri olabilir: tabanlar, koleksiyonerler, keşifler, sorgular, raporlar veya özetler.<br/> <br/>Bir Basel veya Discovery\'i planlamak istiyorsanız, görevleri yaratmadan önce bunları oluşturmanız gerekir. Türlü öğenin kimliğini kullanmanız gerekir <code>sub_resource_id</code>. Örneğin bir Discovery planlamak istiyorsanız, bu özel Discoveries ID\'yi kullanın <code>sub_resource_id</code>.<br/> <br/>Değer için değer <code>uuid</code> Her Open-AudIT sunucusuna özeldir. Benzersiz değeriniz yapılandırmada bulunabilir.<br/> <br/>The The The The The The The The <code>options</code> Özellikler, görevi yürütmek için gereken herhangi bir ekstra özellik içeren bir JSON belgesidir. Raporlar, sorgular ve özetler için ekstra özellikler şunlardır: <code>email_address</code> ve <code>format</code>. Bselines için ekstra özellikler <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The The The The The The The The <code>type</code> Yer onun ikonunu tayin edecek.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributes endpoint, Open-AudIT\'deki farklı niteliklere özel değer katmanıza izin verir, şu anda bu özellik Sınıf, Çevre, Durum ve Tip Özellikleri, Her iki Konum ve Orgs için Tip özellikleri üzerinde çalışır. Basit bir türden birinin bir eşyasını görürseniz (bir Lkocation’yu görün) Tip özelliğinin bir damla kutudan seçileceğini fark edeceksiniz. Bu, bu değerlerin depolandığı yerdir. Bu nedenle, bir Konum için seçilmiş olmak için yeni bir Type eklemek istiyorsanız, Attributes özelliğini kullanarak ekleyin.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Koleksiyonlar özelliği, ağ keşfi yapan birçok "kolector" bilgisayarı kolayca yönetmenizi sağlar. Tüm koleksiyonlar sunucudan merkezi olarak kontrol edilir. Kabin ve sunucu arasındaki tek gerekli ağ limanları 80 ve / veya 443.<br/> <br/>Parate ağlarını hızlı, kolay ve basit bir şekilde yönetiyor. Open-AudIT Enterprise lisansları, gerekli olarak daha fazla satın alma seçeneğine sahiptir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SQL\'inizin SE bölümü <em>Gerekli olması gerekir</em> Tamamen nitelikli sütunlar içerir. IE - IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>The WHERE section of your SQL <em>Gerekli olması gerekir</em> içerir <code>WHERE @filter</code> Bu yüzden Open-AudIT, sorgunuzu uygun Orgs\'e kısıtlamayı biliyor. Bu durumu içeren SQL, yönetici rolüniz olmadıkça sorguda başarısız olacaktır.<br/> <br/>Örnek bir sorgu SQL, sahip olan cihazlarda özellikleri gösterir <code>os_group</code> "Linux" özelliği - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SQL\'inizin SE bölümü <em>Gerekli olması gerekir</em> Sadece sadece içerir <code>DISTINCT(devices.id)</code>.<br/> <br/>The WHERE section of your SQL <em>Gerekli olması gerekir</em> içerir <code>WHERE @filter</code> Bu yüzden Open-AudIT, sorgunuzu uygun Orgs\'e kısıtlamayı biliyor. Bu durumu içeren SQL, grubun yaratılmadığı başarısız olacaktır.<br/> <br/>Stevie OS çalışan tüm cihazları seçmek için SQL için bir örnek - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Lisans uç noktası, cihazlarınızda bulunan lisans sayısını takip etmenizi sağlar.<br/> <br/>Lisanslarınızı takip etmek için bir giriş oluşturmak için <em>Gerekli olması gerekir</em> Bir isim, bir organizasyon, satın alınan lisans sayısı ve yazılımın adı. Alanda <code>match_string</code> Takip etmek istediğiniz yazılımın adını vermelisiniz, maç_string\'de vahşi bir kart olarak yüzde işareti kullanabilirsiniz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Ağ 192.168.1.0/24 formatında olmalıdır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>İlk ve opsiyonel ikincil öğeler tamamen kalifiye olmalıdır - ie, cihazlar. Tür veya yazılım. Adı.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Bir Linux sunucusunda Open-AudIT kullanıyorsanız hiçbir şey yapmamanız gerekmez.<br/><br/>Windows müşterileri sadece iyi ve özel eylemler gerektirmez, ancak... bu özelliği denetim senaryosunun hedef Windows sisteminde yerel olarak çalışabilmesi gerekir. Bir Windows makinesi üzerinde denetim senaryosu çalışırken WMI çağrılarıyla uzaktan çalıştırılamaz, ikinci bir Windows makinesi hedeflemekte iken. Bunu yapmak için, denetim senaryoyu hedef Windows makinesine kopyalamamız ve sonra onu çalıştırmamız gerekiyor. Ne yazık ki Apache\'nin altında çalıştığı hizmet hesabı yerel Sistem hesabıdır. Bu hesap uzaktan (network based) kaynaklara erişmiyor. Bu konuda çalışmak için hizmetin başka bir hesap altında çalıştırılması gerekir. Sadece yerel yönetici hesabı kullanmak en kolaydır, ancak gerekli ayrıcalıklara sahip olduğu sürece istediğiniz herhangi bir hesabı deneyebilirsiniz. Yerel Sistem hesabı yerel yönetici hesabı olarak çok yerel erişime sahiptir.<br/><br/>Sayfamıza bakın <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open-AudIT Apache Service Under Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Bunlar bir raf içinde yaşayan cihazlardır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Bu uç nokta, bulut altyapı bilgilerinizi eklemenizi sağlar. Open-AudIT daha sonra yerel API\'lerini kullanarak bulutlarınıza ulaşacak ve sunucularınızı geri getirecek, tıpkı Open-AudIT\'deki diğer herhangi bir cihaz gibi.<br/> <br/><em>NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</em> - Bu özelliği kullanmak için, biz <em>Gerekli olması gerekir</em> yapılandırma öğeleri maç_mac ( AWS için) ve maç_hostname ( Azure için). Bu otomatik olarak ilk kez bir bulut keşfi gerçekleştirilecektir.<br/> <br/>Credentials for your cloud (İngilizce)<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure Azure Azure</a> veya <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) gereklidir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVE beslemesine dayanan Vulner yükümlülükleri.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Başlangıçta varsayılan seçeneklerle senaryoların varsayılan listesini hazırladık. Bu varsayılan senaryolar silinemez. Sizin için gerekli olarak kullanmak için ek senaryolar oluşturabilirsiniz. Senaryonuz mevcut senaryolardan birine dayanan ve uygulanan özel seçeneklere sahip olacaktır. Senaryolar daha sonra liste sayfasından menü -> -> olarak indirilebilir. Discover -> Denetim Senaryoları -> Liste Editör<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Regex\'i eşleştirmek için kullanırken yardımcı bir sayfa bulunabilir <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP web sitesi</a>. Perl Regex için bazı farklılıklar bulunabilir <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">İşte burada burada</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets, panolarınızdaki çevrenize özel olan her şeyi göstermek için kolayca oluşturulabilir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Open-AudIT Profesyonel ve Enterprise, keşifleri otomatikleştirebilir, rapor nesil veya temel kontrolleri istediğiniz zaman çalıştırmak için kontrol edebilir ve ihtiyacınız olduğu kadar sık. Her sabah anahtar personel tarafından oluşturulacak ve e-postalandırılacak keşiflerinizi programlayın. Kompleks veya basit programlar, cihaz keşfi ve rapor nesli sadece bir tık uzaklıktadır.<br/> <br/>Her subnet veya AD kontrolörü için bireysel keşif programları oluşturun, hedefli izleyiciler için oluşturulacak raporlar ekleyin. Şirket ihtiyaçlarını desteklemek için basit veya karmaşık programlar geliştirir, yedeklemelerden veya operasyonların etkisinden kaçınır veya sadece yük ve hız kontrolü tamamlanmasını yaymak için.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Mevcut denetim senaryolarının herhangi biri için tüm seçeneklerle bir senaryo oluşturabilirsiniz - sadece Windows değil. AIX, ESX, Linux, OSX ve Windows hepsi kaplıdır.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Maç_string\'de vahşi bir kart olarak yüzde % işareti kullanabilirsiniz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Raflarınız cihazlarınızın tam olarak nerede bulunduğuna yardımcı olur.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</strong> - Bu URL\'ye yerel Open-AudIT sunucusundan erişebilirsiniz. İndirilen senaryo başka herhangi bir makinede çalıştırıldığında gönderemeyecek. Diğer makineleri denetlemeniz gerekiyorsa, lütfen senaryoyu herhangi bir uzaktan makineden indirmeniz gerekir, Open-AudIT sunucusunun kendi başına bir tarayıcı kullanmıyorsunuz.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Etkilenen öğeyi belirlemek için bir filtre içermeyen bir CVE öğe (s).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API API API API Anahtar bu işlev için gereklidir.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Bu kriteri idam edecek olan bir JSON serisi.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVE\'den alınan yazılım adı ile eşleşen bir JSON serisi, Open-AudIT tarafından alınan yazılım adı ile zenginleştirilmiştir.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Bu kırılganlığı test etmek için bir JSON serisi.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Bu kullanıcıya atanan Orgs içeren bir JSON belgesi. kimliklerden alındı <code>orgs.id</code>. Bir kullanıcının bir Org\'a erişimi varsa, o Orgs torunlarına erişimi vardır.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Gerekli özellikleri içeren bir JSON belgesi, bağlı olarak <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Seçilen keşif_scan_options üzerinde gerekli nitelikleri içeren bir JSON belgesi.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'varsayılan cihazın maç seçenekleri üzerinde gerekli nitelikleri içeren bir JSON belgesi.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Bu kullanıcıya verilen roller içeren bir JSON belgesi. Rol isimlerinden alındı <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Maç meydana gelirse değiştirmek için bir dizi özellik içeren bir JSON nesnesi.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Maç için bir dizi özellik içeren bir JSON nesnesi.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'koleksiyon özel seçenekleri içeren bir JSON nesnesi.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Bir JSON nesnesi bir Bulut keşfi ile dolu.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'kuyruk öğenin ayrıntıları içeren bir JSON gösterimi idam edilecek.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Bu entegrasyon için alanların JSON gösterimi.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Bireysel testlerin JSON gösterimi ve sonuçları bu temelin tümüne karşı yürütülmektedir.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Bu politikayı oluşturan testlerin JSON gösterimi.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Bir LAN bir yönlendirici kullanarak bir WAN ile bağlanabilir.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Bir Metropolitan alanı ağı (MAN) genellikle bir şehir veya büyük bir kampüste yayılan büyük bir bilgisayar ağıdır.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A Tohum keşfi, tanıdığı diğer cihazların IP\'lerini almak için bir ilk IP kullanır, bu IP\'leri listeye ekler ve bunları tarar - yine bu ek cihazlar hakkında bilgi sahibi olan herhangi bir IP\'leri isteyin. Rinse ve tekrar. Herhangi bir taramada zaten bir IP taranmış olup olmadığını bilmek yeterince akıllıdır (veya hatta listede bile taranır).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Subnet keşif, sağlanan IP\'leri tarayacak.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Daha sonra dosyayı indirecek ve yerel diskte depolayacak bir URL.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'indirmek için bir URL.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Bir sırt kemiği ağı, farklı LAN veya alt ağlar arasındaki bilgi değişimi için bir yol sağlayan bir bilgisayar ağı altyapısının parçasıdır. Bir sırt kemiği aynı bina içinde, farklı binalarda veya geniş bir alanda birlikte çeşitli ağlara bağlanabilir.<br/><br/>Örneğin, büyük bir şirket dünya çapında bulunan bölümlere bağlanmak için sırt kemiği ağı uygulayabilir. Bölüm ağı ile olan ekipman ağ omurgasını oluşturur. Bir ağ omurgasını tasarlarken, ağ performansı ve ağ sıkışıklığı hesabı almak için kritik faktörlerdir. Normalde, sırt kemiği ağ kapasitesi, ona bağlı olan bireysel ağlardan daha büyüktür.<br/><br/>Arka bir omurga ağının bir başka örneği, geniş alan ağlarının (WANs) ve internete bağlı tüm ağları birbirine bağlayan temel yönlendiriciler.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Bu yazılım parçasının sayısını gösteren hesaplanmış bir alan, seçilen Org\'deki bilgisayarlarda bulundu (ve yapılandırılırsa torunları).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Bir kampüs alanı ağı (CAN) sınırlı bir coğrafi alanda LAN\'ların bir araya getirilmesinden oluşur. Ağ ekipmanları (switches, yönlendiriciler) ve iletim medyası ( optik fiber, bakır bitki, Cat5 taksileme vs.) neredeyse tamamen kampüs onant / sahibine aittir (kimse, üniversite, hükümet vs.).<br/><br/>Örneğin, bir üniversite kampüs ağı, akademik kolejlere veya bölümlere, kütüphaneye ve öğrenci oturma salonlarına bağlanmak için çeşitli kampüs binalarını bağlayacak.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Kapalı bir port erişilebilir ( Nmap probe paketlerine alır ve yanıt verir), ancak bunu dinleyen bir uygulama yoktur. Bir ev sahibinin IP adresi üzerinde (host keşif veya ping tarama) olduğunu göstermekte yardımcı olabilirler ve OS algılamasının bir parçası olarak. Çünkü kapalı limanlar ulaşılabilir, bazı açık durumda daha sonra taramaya değer olabilir. Yöneticiler böyle limanları bir güvenlik duvarı ile engellemeyi düşünebilirler. Sonra filtreli durumda görüneceklerdi, bir sonraki tartıştılar.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Bir koleksiyoncu ya da Stand-Alone modunda.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Geçerli CVE\'lerin ayrı bir listesi.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Değerlerin ayrı bir listesi, bunlardan biri seçilebilir.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'koşmak için bir emir. Ajan Windows tabanlı olduğunda, bu komut güçshell ajanı içinde çalıştırılır.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Üç sütundan oluşur ve aradığımız iki satır <i>widgets</i>. Bir widget bir özet için çok benzer, sadece özet konsepti biraz daha ileri alıyoruz. Widgets, birkaç damla aşağı kutu kullanarak basit bir şekilde oluşturulur - veya tam özellik için kendi SQL\'inizi kullanmak için seçebilirsiniz.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Filtrelenmiş bir liman açık olarak kabul edilir (ve cihazı algılamayı tetikleyecek).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Küresel bir alan ağı (GAN), kablosuz LAN\'lar, uydu kapsama alanları, vb. arasında mobil destek için kullanılan bir ağdır. Mobil iletişimdeki anahtar meydan okuma, bir yerel kapsama alanından diğerine kullanıcı iletişimini engelliyor. IEEE Project 802\'de, bu, karasal kablosuz LAN\'ların bir başarısını içerir.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Bir ev alanı ağı (HAN) dijital cihazlar arasındaki iletişim için kullanılan bir konut LAN, genellikle küçük sayıda kişisel bilgisayar ve aksesuar, yazıcılar ve mobil bilişim cihazları gibi. Önemli bir işlev, İnternet erişiminin paylaşımıdır, genellikle kablo TV veya dijital abone hattı (DSL) sağlayıcısı aracılığıyla genişban bir hizmettir.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'SSH\'yi taramak için özel TCP portlarının bir listesi, 135 WMI, 62078 iPhone senkronizasyonudur.';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'taramak için özel UDP limanlarının bir listesi (161 SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Yerel bir alan ağı (LAN) bilgisayarları ve cihazları bir ev, okul, ofis binası veya yakın konumlanmış binalar grubu gibi sınırlı bir coğrafi alanda bağlayan bir ağdır. Ağdaki her bilgisayar veya cihaz bir node. Wired LANs muhtemelen Ethernet teknolojisine dayanmaktadır. ITU-T G.hn gibi yeni standartlar da mevcut kablolamaları kullanarak telli bir LAN oluşturmak için bir yol sağlar, örneğin eş aksiyel kablolar, telefon hatları ve güç hatları.<br/><br/>Bir LAN\'ın belirleyici özellikleri, geniş bir alan ağının aksine (WAN), daha yüksek veri transfer oranları, sınırlı coğrafi aralığı ve bağlantı sağlamak için kiralama hatlarına güvenme eksikliği. Mevcut Ethernet veya diğer IEEE 802.3LAN teknolojileri, 2010 yılında IEEE tarafından standartlaştırılmış 100 Gbit /s\'e kadar veri transfer oranlarında çalışır. Şu anda 400 Gbit / Ethernet geliştiriliyor.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Bir yer onunla ilişkili cihazlara sahip olabilecek fiziksel bir adrestir. Bu koordinatları atabilirsiniz ve eğer atanan cihazlar varsa, yer Açık AudIT Enterprise lisansınız olduğunda Haritada görünecektir.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Bir konum adı, gelecekte bu cihazları bulmanıza yardımcı olacaktır.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Daha düşük bir sayı, diğer kurallardan önce uygulanacaktır.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Daha düşük bir sayı, diğer kurallardan önce uygulanacaktır. Varsayılan ağırlık 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Yeni bir kullanıcı Open-AudIT\'e giriş yaptı ve LDAP kıvrımları tarafından kimliklendi ve yetkilendi. Bu kullanıcı daha sonra Open-AudIT\'de yaratıldı ve içeri girdi. Başarı.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Bir paket, yüklü yumuşak alanın bir parçası. Bir paketin bir türü vardır - antivirüs, onaylanmış, yedekleme, yasaklanmış, bulut, güvenlik, ruhsat veya diğer.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Başvuru doğrulamasını kullanırken logon\'u sağlayan bir şifre (örneğin bir tane).';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Bir kişinin Open-AudIT uygulamasında bir hesabı vardır. Kullanıcı hesabının ilişkili roller ve organizasyonların bir listesi vardır. Kullanıcının rolleri neler yapabileceğini belirler. Organizasyonlar bir kullanıcı üzerinde hareket edebilecekleri WHICH öğelerini belirledi.<br/><br/>Bir kullanıcı bir işlemi gerçekleştirmek için talep ettiğinde (örneğin, okumak, güncellemek, silinmek) bir koleksiyon öğesinde, roller bu eylemi gerçekleştirmek için izin verilirse, o zaman koleksiyon öğenin hareket izni olup olmadığını belirlemek için danışılır.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Kişisel bir alan ağı (PAN) bilgisayar ve farklı bilgi teknolojik cihazlar arasındaki iletişim için kullanılan bir bilgisayar ağıdır. Bir CD\'de kullanılan bazı cihazlar kişisel bilgisayarlar, yazıcılar, faks makineleri, telefonlar, PDAs, tarayıcılar ve hatta video oyun konsolları. Bir CD telli ve kablosuz cihazlar içerebilir. Bir paniğe ulaşmak genellikle 10 metreye kadar uzanır. Bir telli paniğe genellikle USB ve FireWire bağlantıları ile yapılırken, Bluetooth ve kızılötesi iletişim gibi teknolojiler genellikle kablosuz bir paniğe dönüşür.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Bir sorgu aslında bir SQL ifadesidir. Bu ifade, sınırlının otomatik eklenmesi ile veritabanına karşı yürütülür, yalnızca talep edilen eşyaları ve sadece kullanıcının görüş iznine sahip olması için filtrelenir. Bir Sorgu, menü -> kullanarak oluşturulabilir Yönetme -> Queries -> Queries. Queries bir org_id içerir ve bu nedenle uygun kullanıcılarla sınırlıdır. Bir kullanıcı, bir sorgu oluşturmak veya silmek için org_admin veya muhabir rolüne sahip olmalıdır. Tüm kullanıcılar bir sorgu uygulayabilir. Bir sorgunun menü öğesi için kullanılan bir isim özelliği vardır ve menü kategori özelliği olarak. Bu, submenu\'nun sorguyu yerine getirmesi için Open-Audit GUI\'ye anlatıyor. Ayrıca menü ekranı vardır ki ayarlanmalıdır. <i>y</i> GUI\'deki sorguyu etkinleştirin (The query in the GUI)<i>n n</i> Sorunun her şeyde ortaya çıkmasını engellemek için. Soru hala onu kullanarak çalıştırılırdı <code>id</code>menüsün değeri ne olursa olsun.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Bir raf, raf içinde bir pozisyon ve yüksekliğe atan cihazlar koleksiyonudur. Bir cihaz, onunla ilişkili bir resime sahip olabilir. Bir raf bir sıraya yerleştirilir. Rafların konumlanması için çok karmaşık bir sistem yarattık, bu da aşağıdaki gibi. Üst düzeyde (her zaman olduğu gibi) Organizasyondur (Organizasyon). Bir Org birden çok yerde olabilir (her zaman durumda olduğu gibi). Rafs özelliğinin yanı sıra, bir yer şimdi bir veya daha fazla bina içerebilir. Bir bina bir veya daha fazla kat içerebilir. Bir kat bir veya daha fazla Odalar içerebilir. Bir oda bir veya daha fazla Rows içerebilir. Bu çok fazla iş gibi geliyor, ancak varsayılanlar sizin için yaratıldı. Yeni bir yer oluşturun ve alt sorumlular sizin için otomatik olarak oluşturulacaktır. Daha fazla öğeye ihtiyacınız varsa (yapılar, odalar vs) onları sizin gibi ekleyebilirsiniz. Bir raf da bir parça olabilir <i>pod</i> Raflar. pod özelliği, binalar, zeminler vb. katı bir hiyerarşik miras modeli yerine bir etiket olarak çalışır.<br/><br/>Raflar Open-AudIT Enterprise lisanslı müşteriler için mevcut bir özelliktir.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP adresleri ve MAC adreslerinin benzersiz olduğu bir routing domain veya adres alanı.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linux için örnek bir cron dosyası aşağıdadır. Bu yerleştirilmeli';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bir güvenlik alanı, Network Domain içinde idari bir alan veya politika domainidir.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Bir tohum keşfi başka bir keşif türüdür, tek bir tek tek bir IP sağladığınız yerde <i>tohum</i> Cihaz. Bu cihaz denetim edilir ve bilir herhangi bir IP daha sonra denetim altına alınması için IP\'lerin listesine eklenir. Sonra, bu cihazlar denetimli ve bildikleri herhangi bir IP\'ler de denetim için IP\'lerin listesine eklenmektedir. Bu süreç sonra kullanıcı tarafından yapılandırılan parametreler içinde devam eder.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Giriş girişinin kısa bir açıklaması.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Bir depolama alanı ağı (SAN) konsolide, blok seviye veri depolamasına erişim sağlayan özel bir ağdır. SANs öncelikle disk dizileri, kaset kütüphaneleri ve optik jukeboxlar gibi depolama cihazları yapmak için kullanılır, böylece cihazlar yerel olarak bağlı cihazlar gibi görünür. Bir SAN genellikle diğer cihazlar tarafından yerel alan ağı üzerinden erişilebilir olmayan kendi depolama cihazlarına sahiptir. SAN\'lerin maliyeti ve karmaşıklığı 2000\'lerin başında hem işletme hem de küçük orta ölçekli işletme ortamları arasında daha geniş bir benimsenmesine izin vermek için düştü.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string that maçlarını <code>software.name</code> Özellikler. Yüzde standart SQL vahşi kartı kullanabilirsiniz (%) bir veya daha fazla karakterle eşleştirebilirsiniz.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Hassas bilgileri yönetmek için yapılandırılmış bir sistem';

$GLOBALS["lang"]['A timestamp.'] = 'Bir keretamp.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Bir kullanıcının birincil Org\'a da erişebilecekleri bir Orgs listesi vardır. Bir kullanıcı bunu, eriştikleri Orgs\'e verilen eşyaları tanımlayan bir rol listesi ile birleştirir. Bir kullanıcının kombinasyonu <i>veya</i> ve <i>rolleri rol rol rol rol rol rol rolleri</i> Açık-AudIT içinde ne yapabileceklerini tanımlayın.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Bir kullanıcı, ilişkili örgütlerin bir listesine sahip olacaktır (orgs). Kullanıcının her veyag, bu veyag içinde rollerine (s) göre öğeleri hareket etmelerine izin verecektir.<br/><br/>varsayılan veyag dışında tüm orgs bir ebeveyne sahiptir. Bir Org Chart düşünün. Bir kullanıcı bir Org\'a izin verirse, o Org\'in herhangi bir torunlarına da izin verirler.<br/><br/>Kullanıcılar ayrıca belirli koleksiyonlar için ebeveyn veya köpeklerden eşyaları görmek için bir çocuğa izin verilir. Bunlar: panolar, keşif_scan_options, alanlar, dosyalar, gruplar, sorgular, raporlar, roller, kurallar, senaryolar, özetler, widgets.<br/><br/>Kullanıcıların Enterprise\'daki Rolleri kullanabileceği ve kullanabilecekleri üzerinde granular kontrolü olduğunu unutmayın.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Bir kullanıcı, ilişkili örgütlerin bir listesine sahip olacaktır (orgs). Kullanıcının her veyag, bu veyag içinde rollerine (s) göre öğeleri hareket etmelerine izin verecektir.<br/><br/>varsayılan veyag dışında tüm orgs bir ebeveyne sahiptir. Bir Org Chart düşünün. Bir kullanıcı bir Org\'a izin verirse, o Org\'in herhangi bir torunlarına da izin verirler.<br/><br/>Ayrıca, belirli koleksiyonlar için ebeveyn veya köpeklerden eşyaları görmek için bir kullanıcı iznine de izin veriyoruz. Bunlar: panolar, keşif_scan_options, alanlar, dosyalar, gruplar, sorgular, roller, kurallar, senaryolar, özetler, widgets.<br/><br/>Kullanıcıların ne görebildiklerini ve kullanarak kullanabileceğinizi unutmayın';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Sanal özel bir ağ (VPN), düğümler arasındaki bağlantıların bir kısmının bazı daha büyük ağlarda veya sanal devreler tarafından gerçekleştirildiği bir aşırı ağdır (örneğin, internet). Sanal ağdaki veri bağlantı katmanı protokolleri, bu durumda olduğu zaman daha büyük ağ üzerinden tünel edildiği söylenir. Ortak bir uygulama kamu internet aracılığıyla güvenli iletişimdir, ancak bir VPN kimlik doğrulama veya içerik şifreleme gibi açık güvenlik özelliklerine sahip değildir. VPN\'ler, örneğin, güçlü güvenlik özellikleri olan altta farklı kullanıcı topluluklarının trafiğini ayırmak için kullanılabilir.<br/><br/>VPN en iyi niyetli performansa sahip olabilir veya VPN müşteri ve VPN hizmeti sağlayıcısı arasında tanımlanmış bir hizmet düzeyi anlaşması olabilir. Genel olarak, bir VPN\'in nokta noktadan daha karmaşık bir üstoloji vardır.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Kullanılabilirliği etkileyen bir kırılganlık, saldırganların hizmetleri, kaza sistemlerini bozmalarına veya inkâr etmemelerine izin verebilir (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Gizliliği etkileyen kırılganlık, saldırganların kişisel bilgi, kimlik veya özel iş verileri gibi hassas verileri okumalarına izin verebilir (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Bütünlüğü etkileyen bir kırılganlık, saldırganların verileri değiştirmelerine veya sistem yapılandırmalarına izin verebilir (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Bir kırılganlık, zenginleştirme verilerinin yetersiz olduğu veya üretilen SQL\'nin oldukça doğru olmadığı konusunda sağlanan daha spesifik paket isimleri düzenlenebilir.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudIT\'deki bir kırılganlık eşya, belirli bir CVE raporuna potansiyel maruz kalmanızı belirlemek için veritabanınıza karşı bir sorgu olarak düşünülebilir. Bir kırılganlık, ilkWave\'den zenginleştirilmiş verilerle birlikte CVE raporunun üzerinden yapılır. Bu iki madde, FirstWave\'den otomatik olarak indirilen uygun bir sorgu üretmek için birleştirilir.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Geniş bir alan ağı (WAN) bir şehir, ülke veya kıtalararası mesafeler gibi büyük bir coğrafi alanı kapsayan bir bilgisayar ağıdır. Bir WAN, telefon hatları, kablolar ve hava dalgaları gibi birçok medya türünü birleştiren bir iletişim kanalı kullanır. Bir WAN genellikle telefon şirketleri gibi ortak taşıyıcılar tarafından sağlanan iletim tesislerini kullanır. WAN teknolojileri genellikle OSI referans modelinin alt üç katmanında çalışır: fiziksel tabaka, veri bağlantı katmanı ve ağ katmanı.';

$GLOBALS["lang"]['AD Group'] = 'AD Grubu';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN vs.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TÜM IP\'ler';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Dokümantasyon';

$GLOBALS["lang"]['API Key required.'] = 'API Key gerekli.';

$GLOBALS["lang"]['API Result'] = 'API Sonuç';

$GLOBALS["lang"]['About'] = 'About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About';

$GLOBALS["lang"]['Above are the only required items.'] = 'Yukarıdaki tek gerekli öğelerdir.';

$GLOBALS["lang"]['Accept'] = 'Kabul Kabul Kabul Kabul';

$GLOBALS["lang"]['Access Model'] = 'Access Model Access Model';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Access Token Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Pay ve RPC\'ye erişim, SMB2 protokolü kullanır.';

$GLOBALS["lang"]['ack_by'] = 'Ack Tarafından';

$GLOBALS["lang"]['Ack By'] = 'Ack Tarafından';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Eylem';

$GLOBALS["lang"]['Action'] = 'Eylem';

$GLOBALS["lang"]['action_audit'] = 'Aksiyon Denetimi';

$GLOBALS["lang"]['Action Audit'] = 'Aksiyon Denetimi';

$GLOBALS["lang"]['action_command'] = 'Eylem Komutanlığı';

$GLOBALS["lang"]['Action Command'] = 'Eylem Komutanlığı';

$GLOBALS["lang"]['action_date'] = 'Action Date';

$GLOBALS["lang"]['Action Date'] = 'Action Date';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Eylem Cihazları Yere İmzalandı';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Eylem Cihazları Yere İmzalandı';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Eylem Cihazları Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Eylem Cihazları Org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Uygulama Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Uygulama Uninstall';

$GLOBALS["lang"]['actioned'] = 'Eylemlendi';

$GLOBALS["lang"]['Actioned'] = 'Eylemlendi';

$GLOBALS["lang"]['actioned_by'] = 'Tarafından Actioned By';

$GLOBALS["lang"]['Actioned By'] = 'Tarafından Actioned By';

$GLOBALS["lang"]['actioned_date'] = 'Eylem Tarihi';

$GLOBALS["lang"]['Actioned Date'] = 'Eylem Tarihi';

$GLOBALS["lang"]['actions'] = 'Eylemler';

$GLOBALS["lang"]['Actions'] = 'Eylemler';

$GLOBALS["lang"]['Activate'] = 'Activate';

$GLOBALS["lang"]['Activate Free License'] = 'Activate Free Lisans';

$GLOBALS["lang"]['Activate Key'] = 'Keyif';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Ücretsiz bir Enterprise lisansı';

$GLOBALS["lang"]['Active'] = 'Aktif Aktif Aktif Aktif Aktif Aktif Aktif';

$GLOBALS["lang"]['Active / Active'] = 'Aktif / Aktif / Aktif';

$GLOBALS["lang"]['Active / Passive'] = 'Aktif / Pasif';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory ve OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add Add';

$GLOBALS["lang"]['Add Credentials'] = 'Ekle Credentials';

$GLOBALS["lang"]['Add Device'] = 'Ekle Device Add Device';

$GLOBALS["lang"]['Add Device to Application'] = 'Uygulamaya Ekle Device to Application';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Ekle Device to Cluster';

$GLOBALS["lang"]['Add Exception'] = 'Add Exception';

$GLOBALS["lang"]['Add Field'] = 'Add Field';

$GLOBALS["lang"]['Add If'] = 'Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If Add If';

$GLOBALS["lang"]['Add Policies from Device'] = 'Device from Device';

$GLOBALS["lang"]['Add Policy'] = 'Politika Ekle';

$GLOBALS["lang"]['Add Then'] = 'Sonra ekleyin';

$GLOBALS["lang"]['Add Your Credentials'] = 'Credentials Ekle';

$GLOBALS["lang"]['Add image'] = 'Add image';

$GLOBALS["lang"]['additional_items'] = 'Ek Maddeler';

$GLOBALS["lang"]['Additional Items'] = 'Ek Maddeler';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adres any nonconformities';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Adres denetim bulguları ve düzeltici eylemler';

$GLOBALS["lang"]['Admin'] = 'Admin Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Bir entegrasyon oluşturulduktan sonra, bir Entegrasyonun ayrıntılarını gördüğünüzde, Debug adında bir alanı fark edeceksiniz. Bu varsayılan olarak ayarlanmamış değildir. Bunu evet\'e değiştirmek, bir entegrasyon gerçekleştiğinde ekstra bir giriş sağlar. Debug evet olarak bırakılmamalıdır. Bu nedenle debug çıkışı, WMI ve SNMP kimlikleri gibi öğeler dahil olmak üzere dış sistemlerden alınan her şeyi içerecektir. Debug seçeneği sadece bir sorun gerçekleştiğinde kullanılmalıdır ve nedenini tespit ederseniz daha derin görmek istersiniz.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Yukarıdakileri tamamladıktan sonra, acenteyi kaldırma.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Ajan? Discovery? Credentials?';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Ajans girişleri bir süre, bir ağ ve bir işletim sistemi oluşturan oluşturulabilir. Tüm testler maçsa, sunucu daha sonra acentenin eylemleri yapmasını ister. Herhangi bir test ayarlanmamışsa, dışlanmış <i>Her şey maç olmalı</i> Gereklilik.<br/><br/>Birden fazla ajan oluşturabilir ve sunucunun bir veya tüm ajan girişlerini kontrol edebilirsiniz. (örneğin) diyor bir ajan belirtebilirsiniz <i>Ajan IP bu subnet\'te ise, cihazın yerini belirledi</i>.<br/><br/>Başka bir örnek, bir senaryoyu indirmek ve çalıştırmak yerine bir denetim çalıştırılamaz. Ajan yönetim hakları ile kurulursa, makinelerinizi artık açmadan yönetebilirsiniz <strong>Herhangi bir şey herhangi bir</strong> Bu dünyadan limanlar.<p>Enabling gelişmiş ajanlar, herhangi bir dosyayı indirmek ve herhangi bir komut uygulamak için bir ajan talimat verebilir. <strong>WARNING</strong>: Bu güvenlik riskleri ile geliyor. Bu yapılandırma, bu yapılandırma will <strong>Sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece</strong> Open-AudIT\'ı HTTPS ve geçerli bir (Certificate Authority sağlanan) sertifikayı kullanırken </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Adaları';

$GLOBALS["lang"]['Albania'] = 'Arnavutluk';

$GLOBALS["lang"]['Albanian'] = 'Arnavutlar';

$GLOBALS["lang"]['alert_style'] = 'Alert Style';

$GLOBALS["lang"]['Alert Style'] = 'Alert Style';

$GLOBALS["lang"]['Algeria'] = 'Cezayir';

$GLOBALS["lang"]['algorithm'] = 'Algorithm';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Bütün Bütün Hepsi';

$GLOBALS["lang"]['All IPs'] = 'Tüm IP\'ler';

$GLOBALS["lang"]['All Policies'] = 'Bütün Politikalar';

$GLOBALS["lang"]['All Queued Items'] = 'Tüm Queued Elements';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Tüm koleksiyon URL\'ler format kullanıyor';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Tüm cihaz alt masaları birkaç önemli sütun içerir.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Bilgisayar gibi bir tür olan tüm cihazlar.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Bir tür bilgisayar veya yönlendirici ile tüm cihazlar.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Bir tür geçiş ve yazıcı olmadan tüm cihazlar.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Bir tür geçiş ve yazıcı olmadan tüm cihazlar. Temel olarak yukarıdaki sorgu ile aynı.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Tüm düzenli keşif seçenekleri, Device Seed Discoveries\'de de kullanılabilir.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Tüm görevler Windows ve Linux\'ta aynı yaratılabilir. Görevler, CRON metodunu zamanlama yürütme için kullanır.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Bu bilgi talebinin yanı sıra, bize özel kullanım ve yüklemeniz hakkında çok fazla gerekli bilgi verecek olan FirstWave veri noktalarına geri gönderiyoruz.';

$GLOBALS["lang"]['Also can be created from the'] = 'Ayrıca oluşturulabilir';

$GLOBALS["lang"]['Alternatives'] = 'Alternatifler';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Alanlar';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Aktif bir Rehber keşif, bir ağ listesi için Active Directory\'yi sorgulayacak ve normal bir Subnet keşfi gibi ilişkili IP\'leri tarayacaktır.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Bir Org (organizasyon) Open-AudIT içindeki koleksiyonlarda çoğu öğenin sahibidir. Küresel eşyaların istisnaı ile <i>yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma yapılandırma</i>Çoğu madde bir Org\'a (kendine ait) verilir. Bir kullanıcının bir koleksiyondaki bu öğelere erişimi vardır, kullanıcının izni vardır.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Bir uygulama aktif olarak TCP bağlantılarını kabul ediyor, UDP verigramları veya SCTP dernekleri bu limanda. Buları bulmak genellikle liman taramanın birincil hedefidir. Güvenlik fikirli insanlar her açık liman saldırı için bir avenue olduğunu bilirler. Saldırganlar ve pen-testers açık limanları kullanmak isterken, yöneticiler onları meşru kullanıcılar olmadan duvarları kapatmaya veya korumaya çalışırlar. Açık limanlar güvenlik taramaları için de ilginçtir çünkü ağda kullanım için mevcut hizmetleri gösteriyorlar.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Bir dizi bir dizi <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Bir dizi bir dizi <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Dış bağlantıları daha fazla bilgi için temsil eden bir nesne dizisi.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Eğitimli bir tahmin, cihazın kimlik ve tipine';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Gerekli özellikleri içeren şifreli bir JSON belgesi, bağlı olarak <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Bir işletme özel ağı, tek bir organizasyonun ofis yerlerini (örneğin, üretim siteleri, ofisler, uzaktan ofisler, dükkanlar) birbirine bağlamak için inşa ettiği bir ağdır.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Bir giriş, web arayüzünü kullanarak oluşturulabilir, eğer mevcut kullanıcı girişini içeren bir rolü varsa,';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Örneğin JSON POST vücudu aşağıdadır. Bu, "data" form öğesine eklenmelidir.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Örnek bir widget SQL, cihazlara yer başına sayılıyor.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Mevcut bir Open-AudIT kullanıcısı, LDAP sunucusu tarafından gerçekleştirildi ve yetkilendi. Başarı.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Bu site tarafından gerekli olan hizmet seviyesinin bir göstergesidir.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Keşif tamamlandığını gösteren bir iç alan.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Açık / filtreli bir port açık olarak kabul edilir (ve cihazı algılamayı tetikleyecek).<br/>Daha önce, Open-Aud IT bir Nmap cevabı olarak kabul edildi';

$GLOBALS["lang"]['An optional GeoCode'] = 'Seçmeli bir GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Sudo kullanmak için opsiyonel bir şifre.';

$GLOBALS["lang"]['Analyzed'] = 'Analyzed';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Ve sonunda, bu keşifleri yürütmek için gönderin.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Ve eğer bir şey yanlış giderse?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Ve son olarak tıklayın <i>Gönder</i> Entra için Open-AudIT Auth yönteminizi oluşturmak.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Ve son olarak, çok fazla güvenlik sorunu değil - daha fazla huzur. Veri yapıları açık ve belgelenmiştir. Onları görebilirsiniz';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Ve bir isim veriyoruz - Açık-Audfun ́i tavsiye ediyoruz, ancak istediğiniz her şeyi adlandırabilirsiniz. seçeneğin seçenek olduğundan emin olun <i>galeride bulamadığınız başka bir uygulama (Non-gallery)</i> seçilir. Ve sonra tıklayın <i>Create Create Create Create Create Create<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Ve çok daha fazlası.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Ek A Controls';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Paketleri';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ve Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirüs';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Herhangi bir TCP portu (ortalama, yer yok) bu keşiften dışlanmak istiyorsunuz. Sadece Nmap 7+ kullanırken kullanılabilir.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Herhangi bir UDP limanları (ortalama, yer yok) bu keşiften dışlanmak istiyorsunuz. Sadece Nmap 7+ kullanırken kullanılabilir.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'İhtiyacınız olan herhangi bir ek belge.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Yapmaya çalıştığınız ek notlar.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Bir * tarafından takip edilen herhangi bir özellik, CVSS verilerinin bu alanı tamamlamak için daha az kullanıldığını gösteriyor. Varsayılan olarak, v4 alanlarını kullanmaya çalışıyoruz, ancak eğer onlar, önceki sürüme (s) özellikler için geri dönmeyeceğiz.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Herhangi bir cihaz denetim senaryosu çalıştırdığında bu Org\'a atanacaktır (if set).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Herhangi bir cihaz denetim senaryosu çalıştırdığında bu Org\'a atanacaktır (if set). Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Herhangi bir keşfedilen cihazlar, ayarlandığında bu Konuma atanacaktır. Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Herhangi bir keşfedilen cihazlar denetim senaryosu çalıştırdığında bu Konuma tayin edilecektir (if set).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Herhangi bir keşfedilen cihazlar denetim senaryosu çalıştırdığında bu Konuma tayin edilecektir (if set). Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Herhangi bir keşfedilen cihazlar, ayarlandığında bu Org\'a atanacaktır. Eğer ayarlanmadıysa, onlar <code>org_id</code> Bu keşiften. Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Bu şekilde bulunan herhangi bir dosyalar depolanır <i>executable</i> Başka bir cihaz bileşeni olarak masa.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Herhangi bir gerekli filtre. NOT: Tür = trafik, bu font-awesome ikonunu temsil eder.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Test ettiğiniz herhangi bir özel TCP portu (ortalama, yer yok).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Herhangi bir UDP limanları test etmeyi arzu ediyorsunuz (ortalama, yer yok).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Herhangi bir kullanıcı yüklü görüntüler buraya yerleştirilir.';

$GLOBALS["lang"]['Application'] = 'Uygulama Uygulaması';

$GLOBALS["lang"]['Application Definitions'] = 'Uygulama Tanımları';

$GLOBALS["lang"]['application_id'] = 'Uygulama ID';

$GLOBALS["lang"]['Application ID'] = 'Uygulama ID';

$GLOBALS["lang"]['Application Licenses'] = 'Uygulama Lisansları';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Uygulama, İşletim Sistemi veya Donanım.';

$GLOBALS["lang"]['applications'] = 'Uygulamalar';

$GLOBALS["lang"]['Applications'] = 'Uygulamalar';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Uygulamalar sadece bir Enterprise\'dır.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Uygulamalar Open-AudIT 2.2\'de, konsept üzerinde daha fazla gelişme yapıldığı gibi genişletmek için bir görüşle tanıtıldı.';

$GLOBALS["lang"]['applied'] = 'Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied';

$GLOBALS["lang"]['Applied'] = 'Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied';

$GLOBALS["lang"]['Approved'] = 'Onaylanmış Onaylanmış Onaylanmış Onay Onay Onaylandı';

$GLOBALS["lang"]['Approved Packages'] = 'Onaylanmış Paketler';

$GLOBALS["lang"]['April'] = 'Nisan Nisan Nisan Nisan';

$GLOBALS["lang"]['Arabic'] = 'Arapça Arapça Arapça';

$GLOBALS["lang"]['architecture'] = 'Mimari Mimari Mimari';

$GLOBALS["lang"]['Architecture'] = 'Mimari Mimari Mimari';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Bu girdi kaynağını silmek istediğinizden emin misiniz?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Bu çıktı öğeyi silmek istediğinizden emin misiniz?';

$GLOBALS["lang"]['Are you sure?'] = 'Emin misiniz?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Emin misiniz? Bu tüm kuyruk girişlerini kaldıracak ve kalan IP\'lerin keşfedilmesini sağlayacaktır.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Emin misiniz? Bu, kuyruk işleme sayısını sıfırlayacak ve sunucuya yük olabilir.';

$GLOBALS["lang"]['area'] = 'Alan Alanı';

$GLOBALS["lang"]['Area'] = 'Alan Alanı';

$GLOBALS["lang"]['Argentina'] = 'Arjantin Arjantin';

$GLOBALS["lang"]['Armenia'] = 'Ermenistan';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Yazarlaşmaların Open-AudIT\'de nasıl çalıştığının bir hatırlatması olarak, bakınız';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Sonuç olarak, biz <strong>Gerekli olması gerekir</strong> Keşif bilgilerini kullanıcı için mevcut olan yönetici$ payına sahiptir. Lütfen hedef Windows makinesini kontrol edin <i>Write write</i> Keşif bildirimleri kullanıcısı için erişim.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Yukarıda belirtildiği gibi, geliştiriciler sunulan tüm çeviri dillerini konuşmazlar. Bu, acuracy ile gözden geçiremeyeceğimiz anlamına gelir, tercüme metin. Bir cursory incelemesi için çalışıyoruz. Doğru tercüme edilmeyen bir şey görürseniz, kendiniz değiştirebilirsiniz. Uygun dil dosyasını (aşağıda olduğu gibi) analiz edin ve metinin değiştirilmesini bulun. Belki var değil ve bunu eklemek zorundasınız. Sadece metni değiştirin, dosyayı kurtar ve sayfanızı yenilemek. Etkisi almak için herhangi bir hizmeti /daemonları yeniden başlatmaya gerek yok. Tarayıcınızı yenilemek gerekebilir.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'OpenSCAP kriterlerine gelince - <i>Bu kriterdeki herhangi bir ayarları ilk test etmeden uygulamaya çalışmayın. Bu kriterin yaratıcıları diğer taraflar tarafından kullanımı için hiçbir sorumluluk üstlenmiyor ve kalite, güvenilirlik veya başka herhangi bir özellik hakkında garanti vermiyorlar.</i><br/><br/>Cidden, kör bir şekilde başlama <i>Düzelt</i> Sorunlar, üretim olmayan, aynı ortamda ilk kapsamlı bir test olmadan bir kriter yayınlamadan sonra ortaya çıktı.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Cihaz ortamları için özellikleri olarak. Üretim, Eğitim, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Denetim senaryosu bash kullandığında, yönetmenleri ve dışlamaları tanımladığınızda, vahşi kartpostal kullanabilirsiniz.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Her zamanki gibi, menüye gidin → Yönetim → Bütünleşmeler → Bütünleşme Oluşturun. Yukarıda olduğu gibi, Linux\'ta çalışıyorsanız ve aynı sunucuda NMIS varsa, tıklamadan başka bir şey yapmanız gerekmez <i>Gönder</i>. Bunu bundan daha kolay yapamam.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Keşfetler ve topladığımız gibi, ağ listesini ortaya koyarız. En büyük Subnetler bu ağ listesini yalnızca bu ağlardaki cihazlardan verileri kabul etmek için kullanır.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'koleksiyoncuların kayıtlı olduğu gibi, lütfen bu keşfi nerede uygulayacağınızı seçin.';

$GLOBALS["lang"]['Ask me later'] = 'Daha sonra bana sorun';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Topluma yardım etmek veya başkaları için cevap vermek için sorun.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect';

$GLOBALS["lang"]['Asset ID'] = 'Varlık kimliği';

$GLOBALS["lang"]['asset_ident'] = 'Varlık Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Varlık Ident';

$GLOBALS["lang"]['asset_number'] = 'Varlık Numarası';

$GLOBALS["lang"]['Asset Number'] = 'Varlık Numarası';

$GLOBALS["lang"]['asset_tag'] = 'Asset Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Asset Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Assign Device to Application';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Kombine Cihazı';

$GLOBALS["lang"]['Assign Device to Location'] = 'Assign Device to Location';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Name Device to Organization';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Yere Kadar Adım Cihazları';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Organizasyon için Adım Cihazları';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS yöneticisi veya ekip olarak';

$GLOBALS["lang"]['Assign an Operator'] = 'Bir Operatör olarak';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Bu Org\'a herhangi bir denetimli cihazlar imzalarken, şu anda cihazı terk etmek için boş bırakın Org (veya varsayılan ayarlamak için).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Cihazı bir Konum olarak';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Cihazı bir Org\'a imzalarken';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Keşfedilen Cihazlar';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Şu anda netstat_ports, yazılım ve kullanıcılar kullanabiliriz.';

$GLOBALS["lang"]['attached_device_id'] = 'Bağlı Cihaz ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Bağlı Cihaz ID';

$GLOBALS["lang"]['attached_to'] = 'Arife';

$GLOBALS["lang"]['Attached To'] = 'Arife';

$GLOBALS["lang"]['attachment'] = 'Ata';

$GLOBALS["lang"]['Attachment'] = 'Ata';

$GLOBALS["lang"]['attachments'] = 'Atalar';

$GLOBALS["lang"]['Attachments'] = 'Atalar';

$GLOBALS["lang"]['attack_complexity'] = 'Saldırı Kompleksi';

$GLOBALS["lang"]['Attack Complexity'] = 'Saldırı Kompleksi';

$GLOBALS["lang"]['attack_requirements'] = 'Saldırı Gereksinimleri';

$GLOBALS["lang"]['Attack Requirements'] = 'Saldırı Gereksinimleri';

$GLOBALS["lang"]['attack_vector'] = 'Saldırı Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Saldırı Vector';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Yerelhost\'u denetlemesek cihazı kullanmayı deneyin.';

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributes, belirli alanlarda kullanılmak üzere Open-AudIT için depolanır, şu anda tüm alanlarda cihazlara, yerlere veya sorgu masalarına dayanmaktadır. Düzenleme yapabileceğiniz özellikler aşağıdaki sütunlarla ilişkilendirilir: Sınıf, Çevre, Durum ve Türü.';

$GLOBALS["lang"]['Audit'] = 'Denetim Denetim Denetimi';

$GLOBALS["lang"]['Audit AIX'] = 'Denetim AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Denetim DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Denetim ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Denetim Linux';

$GLOBALS["lang"]['audit_log'] = 'Denetim Log';

$GLOBALS["lang"]['Audit Log'] = 'Denetim Log';

$GLOBALS["lang"]['Audit Mount Point'] = 'Denetim Dağı Point';

$GLOBALS["lang"]['Audit My PC'] = 'PC My PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Denetim Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Denetim OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Denetim Sonuç Girişi';

$GLOBALS["lang"]['Audit Software'] = 'Kontrol Yazılım Kontrolü';

$GLOBALS["lang"]['Audit Status'] = 'Denetim Durumu';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Denetim Win32 Ürün';

$GLOBALS["lang"]['Audit Windows'] = 'Denetim Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Cihazı Denetim';

$GLOBALS["lang"]['Audits'] = 'Denetimler';

$GLOBALS["lang"]['August'] = 'Ağustos Ağustos Ağustos Ağustos Ağustos Ağustos';

$GLOBALS["lang"]['Australia'] = 'Avustralya Avustralya Avustralya';

$GLOBALS["lang"]['Austria'] = 'Avusturya Avusturya';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Methods';

$GLOBALS["lang"]['Authenticate only'] = 'Sadece sadece kimlik';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Kimlik Numarası';

$GLOBALS["lang"]['Authentication Protocol'] = 'Kimlik Doğrulama Protokolü';

$GLOBALS["lang"]['authority_key_ident'] = 'Otorite Key Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Otorite Key Ident';

$GLOBALS["lang"]['Auto'] = 'Auto Auto Auto Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Open-AudIT Server tarafından avlanır.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Otomatik olarak koleksiyoncular OS\'a dayanıyor.';

$GLOBALS["lang"]['availability'] = 'Erişilebilirlik';

$GLOBALS["lang"]['Availability'] = 'Erişilebilirlik';

$GLOBALS["lang"]['Available Benchmarks'] = 'Var Benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Bekleyen Analiz';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaycan Azerbaycan Azerbaycan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaycan';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backbone network'] = 'Back Bone network';

$GLOBALS["lang"]['Backup'] = 'Backup Backup Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamalar';

$GLOBALS["lang"]['Bahrain'] = 'Bahreyn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeş';

$GLOBALS["lang"]['bank'] = 'Banka Bankası';

$GLOBALS["lang"]['Bank'] = 'Banka Bankası';

$GLOBALS["lang"]['Banned'] = 'Yasaklandı';

$GLOBALS["lang"]['Banned Packages'] = 'Baned Paketler';

$GLOBALS["lang"]['bar_code'] = 'Bar Code';

$GLOBALS["lang"]['Bar Code'] = 'Bar Code';

$GLOBALS["lang"]['Barbados'] = 'Barbados Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Base Score';

$GLOBALS["lang"]['Base Score'] = 'Base Score';

$GLOBALS["lang"]['base_severity'] = 'Base Severity';

$GLOBALS["lang"]['Base Severity'] = 'Base Severity';

$GLOBALS["lang"]['based_on'] = 'tabanlı';

$GLOBALS["lang"]['Based On'] = 'tabanlı';

$GLOBALS["lang"]['baseline'] = 'Basel';

$GLOBALS["lang"]['Baseline'] = 'Basel';

$GLOBALS["lang"]['baseline_id'] = 'Basel';

$GLOBALS["lang"]['Baseline ID'] = 'Basel';

$GLOBALS["lang"]['baselines'] = 'Baselines';

$GLOBALS["lang"]['Baselines'] = 'Baselines';

$GLOBALS["lang"]['baselines_policies'] = 'Temel Politikalar Politikalar';

$GLOBALS["lang"]['Baselines Policies'] = 'Temel Politikalar Politikalar';

$GLOBALS["lang"]['Baselines Policy'] = 'Temel Politika Politikası';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Temel Politika Detayları';

$GLOBALS["lang"]['baselines_results'] = 'Baselines Sonuçlar Sonuçlar';

$GLOBALS["lang"]['Baselines Results'] = 'Baselines Sonuçlar Sonuçlar';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines netstat limanlarını, kullanıcıları ve yazılımı karşılaştırabilir.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Baselines, daha önce tanımlanmış bir dizi özellikle denetim verilerini bir araya getirmenizi sağlar (in bazline) cihazların uyumunu belirlemek için.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Cihaz Karşılaştırması';

$GLOBALS["lang"]['Basic'] = 'Temel Temel Temel Temel Temel Temel Temel';

$GLOBALS["lang"]['Basque'] = 'Basque';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Çünkü mümkün olduğunca şeffaf olmaya çalışıyoruz, burada gönderdiğimiz gerçek verileriniz.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Hangi makinelerin aynı şekilde yapılandırıldığını belirleyebilmek, sistemlerin yönetimi ve denetimlerinin büyük bir parçasıdır – ve şimdi bunun üzerinde rapor edilmesi basit ve otomatik hale gelecektir. Temelinizi tanımladığınızda, önceden belirlenmiş bir programda bir dizi cihaza otomatik olarak çalışacak. Bu idam edilen tabanların çıktısı, üçüncü bir parti sistemine ya da hatta basılı bir rapor olarak aktarılacak.<br/><br/>Denetim ve yönetim amaçları için sabit, bilinen iyi bir cihaza karşı temel bireysel cihazlara avantajlı olabilir. Baselines, daha önce tanımlanmış bir dizi özellikle denetim verilerini bir araya getirmenizi sağlar (in bazline) cihazların uyumunu belirlemek için.';

$GLOBALS["lang"]['Belarus'] = 'Belarus Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belçika Belçika Belçika';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Aşağıda gerekli csv formatının bir örneği.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Bu hatların altında değişkenlerin senaryoya enjekte edildiği yer. Daha önceki örneklerimizden sonra, Linux denetim senaryosu rehberimiz gibi rehberimizle dolu.';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Aşağıda bir örnek Org Chart görebilirsiniz. Bir kullanıcının izni varsa <i>Finans A</i> Org, aynı zamanda Dept A, B & C\'nin soyundan gelen iznine de sahiptir. Bu, talep edilen koleksiyondan bağımsız olarakdır.<br/><br/>Koleksiyon talep edilen koleksiyon yükselenlere izin verirse, o zaman kullanıcı da Şirket # ve Varsayılan Org öğelerine erişim sağlayacaktır. Bu (yukarıdaki gibi) sorgular, gruplar ve al.<br/><br/>Not - Bir kullanıcı, Varsayılan Org\'dan bir sorguya erişebilir, ancak bu sorunun kendisi sonucu değil. Sonuç sadece kullanıcının eriştiği cihazlar gösterecektir - Finans A ve Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Ben';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Tasks, bir kriter oluşturulduğunda otomatik olarak oluşturulur.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark execution ve işleme uzun bir süre alabilir, bu nedenle onları programlama tercihi ve onları ad-hoc çalıştırmayın.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Exceptions';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Exceptions';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks Politikaları';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks Politikaları';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks Sonuç';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks Sonuç';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks, belirli bir kılavuz ve onu yürütmek için bir işletim sistemi ve Versiyon sağlayarak oluşturulur. Yaratılıştan sonra, ölçümler bir programdaki makineler listesine karşı yapılır.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks for Best Practise Build';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks, bilgisayarlarınız için güvenlik önerileri sağlar, OpenSCAP araçlarını ve politikaları kullanın.<p><i>OpenSCAP sayfasından:</i> Her gün yeni güvenliklerin keşfedildiği ve yanıldığı bilgisayar güvenliği dünyasında sürekli bir süreç olmalıdır. Ayrıca, politikalara uyum sağlamanın bir yolunu, periyodik değerlendirme ve risk izlemesini de içerecektir. OpenSCAP ekosistemi, bu süreçlerin hızlı, maliyetli ve esnek uygulanması için araçlar ve özelleştirilmiş politikalar sağlar.</p>';

$GLOBALS["lang"]['Benefits'] = 'Faydaları';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'En İyi Practises';

$GLOBALS["lang"]['Best Practises'] = 'En İyi Practises';

$GLOBALS["lang"]['Bhutan'] = 'Butan Butan';

$GLOBALS["lang"]['bios'] = 'Bios Bios';

$GLOBALS["lang"]['Bios'] = 'Bios Bios';

$GLOBALS["lang"]['body'] = 'Vücut Bedeni';

$GLOBALS["lang"]['Body'] = 'Vücut Bedeni';

$GLOBALS["lang"]['Bolivia'] = 'Bolivya Bolivya Bolivya';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y /n';

$GLOBALS["lang"]['boot_device'] = 'Boot Device';

$GLOBALS["lang"]['Boot Device'] = 'Boot Device';

$GLOBALS["lang"]['bootable'] = 'Gözlenebilir';

$GLOBALS["lang"]['Bootable'] = 'Gözlenebilir';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosna';

$GLOBALS["lang"]['Both forms of'] = 'Her iki şekli de';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Adası (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brezilya';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brezilyalı Portekiz';

$GLOBALS["lang"]['Breaking it Down'] = 'Yemin ederim';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'İngiliz Hint Okyanusu Bölgesi (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'İngiliz Virgin Adaları';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Ağaçı Konsolosluk\'a göz atın -> Bitirme Hizmetleri -> Bilgisayarlar -> Bilgisayarım<br/><br/>Doğru tıklayın <i>Bilgisayarım</i> ve özelliklerini seçin<br/><br/>Seç <i>Varsayılan Özellikler</i> sekmesi';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Build Number Build Number';

$GLOBALS["lang"]['Build Number'] = 'Build Number Build Number';

$GLOBALS["lang"]['build_number_full'] = 'Build Number Full Full';

$GLOBALS["lang"]['Build Number Full'] = 'Build Number Full Full';

$GLOBALS["lang"]['Building'] = 'Bina';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Müşterilere ve ortaklara güvenmek';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaristan';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgar Bulgar Bulgar Bulgar';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Edit Form Form';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk edit seçimi bir sonraki sayfaya tıklayarak seçilmeyecektir.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'İş Gereksinimleri';

$GLOBALS["lang"]['Business Requirements'] = 'İş Gereksinimleri';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Ama sadece Windows Müşteri Makineleri Var!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Ama her zaman güncellemem gereken dili değiştirmek zorunda değilim!';

$GLOBALS["lang"]['Buy'] = 'Satın Al Satın Al';

$GLOBALS["lang"]['Buy More'] = 'Daha Fazla Satın Al';

$GLOBALS["lang"]['Buy More Licenses'] = 'Daha Fazla Lisans Satın Al';

$GLOBALS["lang"]['By'] = 'Yemin olsun';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Varsayılan olarak tüm cihazları nmis_manage özellikleri ile entegre ediyoruz <i>y</i>. 4.2.0 ile aynı zamanda söyleyen bir kural gemideyiz <i>Bir cihazı keşfedersek ve geçerli bir SNMP OID\'ye sahipse, cihazın NMIS tarafından yönetildiğini işaretleyin.</i>. Açıkçası bunu istediğiniz şey değilse devre dışı bırakabilirsin.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Varsayılan olarak, sertifikayı doğrulamayı atıyoruz çünkü müşteriler kendi imzalı sertifikaları kullanmaya eğilimlidir. Sertifika doğrulamasını sağlamak için, dosyayı aşağıda düzenler';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maske Maske';

$GLOBALS["lang"]['cli_config'] = 'Clinton Config';

$GLOBALS["lang"]['CLI Config'] = 'Clinton Config';

$GLOBALS["lang"]['CPU'] = 'CPU CPU CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU\'lar';

$GLOBALS["lang"]['CSV'] = 'Kataloğu';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'Kabul edilen bir statüye sahip CVEs, analiz bekliyor, analiz geçiriyor, reddedildi. Bu CVEs (çoğuly) doğru bir SQL sorgu üretmemizi sağlamak için yeterli bilgi içermiyor.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Keşiften hesaplandı.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Bu ağ için toplam geçerli IP adreslerini hesaplayın.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Tamamlandıktan sonra, bu öğeyi uygulamak için alınan zaman.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Entegrasyon bittiğinde hesaplandı ve bu entegrasyondaki cihazların JSON gösterimini içeriyor. Her bağlantı için <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Entegrasyon bittiğinde hesaplandı ve bu entegrasyondaki yerlerin JSON gösterimini içeriyor. Her bağlantı için <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Entegrasyon bittiğinde hesaplandı ve Open-AudIT\'den seçilen cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'İntegrasyon bittiğinde hesaplanır ve dış sistemi seçilen cihazların sayısını içerir.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'İntegrasyon bittiğinde hesaplandı ve dış sistemde güncellenecek cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Entegrasyon bittiğinde hesaplandı ve Open-AudIT\'de güncellenen cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Start\'e tıklayarak bir komut çağırın ve arama <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kamboçya';

$GLOBALS["lang"]['Cameroon'] = 'Cameroon';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampüs Alan Ağı';

$GLOBALS["lang"]['Campus area network'] = 'Kampüs alanı ağ ağı';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Olabilir <code>active</code>, <code>passive</code> veya boş.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Olabilir <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> veya boş.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Olabilir <code>auto</code>, <code>fixed</code>, <code>other</code> veya boş.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Olabilir <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> veya boş.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Olabilir <code>line</code>, <code>pie</code> veya <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Olabilir <code>user</code> veya <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Keşif veya kullanıcı tarafından ayarlanabilir.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Keşif veya kullanıcı tarafından ayarlanabilir. ID\'yi konum masasından kullanın.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kullanıcı bu öğeyi düzenleyebilir.';

$GLOBALS["lang"]['Canada'] = 'Kanada Kanada';

$GLOBALS["lang"]['Cancel'] = 'Cancel Cancel Cancel Cancel';

$GLOBALS["lang"]['capabilities'] = 'Yetenekler';

$GLOBALS["lang"]['Capabilities'] = 'Yetenekler';

$GLOBALS["lang"]['Capacity'] = 'Kapasite Kapasitesi';

$GLOBALS["lang"]['Cape Verde'] = 'Cape Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitalise';

$GLOBALS["lang"]['caption'] = 'Caption';

$GLOBALS["lang"]['Caption'] = 'Caption';

$GLOBALS["lang"]['Catalan'] = 'Katalan';

$GLOBALS["lang"]['Cayman Islands'] = 'Cayman Adaları';

$GLOBALS["lang"]['Cellular Details'] = 'Hücre Detaylı Bilgi';

$GLOBALS["lang"]['Central African Republic'] = 'Orta Afrika Cumhuriyeti';

$GLOBALS["lang"]['certificate'] = 'Sertifika Sertifikası';

$GLOBALS["lang"]['Certificate'] = 'Sertifika Sertifikası';

$GLOBALS["lang"]['certificate_file'] = 'Sertifikası';

$GLOBALS["lang"]['Certificate File'] = 'Sertifikası';

$GLOBALS["lang"]['certificate_name'] = 'Sertifika Adı';

$GLOBALS["lang"]['Certificate Name'] = 'Sertifika Adı';

$GLOBALS["lang"]['certificates'] = 'Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika';

$GLOBALS["lang"]['Certificates'] = 'Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika Sertifika';

$GLOBALS["lang"]['Certification'] = 'Sertifika Sertifikası';

$GLOBALS["lang"]['Certification Audit'] = 'Sertifika Denetimi';

$GLOBALS["lang"]['Certification Process'] = 'Sertifika Süreci';

$GLOBALS["lang"]['Chad'] = 'Chad Chad';

$GLOBALS["lang"]['Change'] = 'Change Change Change Change Change';

$GLOBALS["lang"]['change_id'] = 'Değişim ID';

$GLOBALS["lang"]['Change ID'] = 'Değişim ID';

$GLOBALS["lang"]['change_log'] = 'Log Change Log Change';

$GLOBALS["lang"]['Change Log'] = 'Log Change Log Change';

$GLOBALS["lang"]['Change Logs'] = 'Logs Change';

$GLOBALS["lang"]['change_type'] = 'Change Type';

$GLOBALS["lang"]['Change Type'] = 'Change Type';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Bu limanlarda SSH için kontrol edin';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Bu limanı herhangi bir SSH hizmeti için kontrol edin.';

$GLOBALS["lang"]['Chile'] = 'Şili';

$GLOBALS["lang"]['China'] = 'Çin Çin Çin Çin';

$GLOBALS["lang"]['Chinese'] = 'Çin Çin Çin';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Çin (geleneksel)';

$GLOBALS["lang"]['Choose'] = 'seçin';

$GLOBALS["lang"]['Choose (select OS first)'] = 'seçin (select OS ilk)';

$GLOBALS["lang"]['Choose a Device'] = 'Bir Device seçin';

$GLOBALS["lang"]['Choose a Table'] = 'Bir tablo seçin';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Görevin türünü ilk damladan seçin. Bu, görev türüne bağlı olarak gerekli ek alanları yapılandıracaktır.';

$GLOBALS["lang"]['Christmas Island'] = 'Noel Adası';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Devre Kont';

$GLOBALS["lang"]['Circuit Count'] = 'Devre Kont';

$GLOBALS["lang"]['circuit_status'] = 'Devre Durumu';

$GLOBALS["lang"]['Circuit Status'] = 'Devre Durumu';

$GLOBALS["lang"]['city'] = 'City City City';

$GLOBALS["lang"]['City'] = 'City City City';

$GLOBALS["lang"]['class'] = 'Sınıf Sınıfı';

$GLOBALS["lang"]['Class'] = 'Sınıf Sınıfı';

$GLOBALS["lang"]['class_text'] = 'Sınıf Text';

$GLOBALS["lang"]['Class Text'] = 'Sınıf Text';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Click Click Click Click Click <i>Yeni müşteri sırrı</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Execute';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Click on Click on Click <i>Özellikler Özellikler</i> altında <i>Yönetim Yönetimi Yönetimi Yönetimi</i> Merkez menü sütununda başlık. Kopyalayın <i>User Access URL</i>. Bir kez kopyalandığında, onu metin editörüne yapıştırın. Bu alanın bir bölümünü kopyalamanız gerekecek.<br/><br/>Örnek alanımız bu şekilde görünüyor<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>İhtiyacımız olan bölümdür <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (Onant ID). Bu, Open-AudIT\'de, <i>Tenant</i> Alan, bu yüzden oraya yapıştırın.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Yeni bir uygulama oluşturmak için App Kaydına tıklayın, sonra Yeni Uygulama Kaydına tıklayın. Ona bir isim verin (Open-AudIT kullandım), Web uygulamasını / API\'yi türü olarak seçin ve herhangi bir URL ( URL önemli değil) ve şimdi Create\'e tıklayın.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Tamam ve DCOMCNFG penceresini kapat.<br/><br/>Yukarıdaki değişiklikler etki almak için bir yeniden başlatma gerektirecektir.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Sadece yarattığınız uygulama üzerine tıklayın. Görüntülenen başvuru kimliği Müşteri ID\'dir.<br/><br/>Müşteri sırrı oluşturmak için, Ayarlara tıklayın, sonra Keys. Anahtar bir isim sağlayın ve uygun bir expiry tarihi seçin, sonra Kaydet\'e tıklayın.<br/><br/>Değer sizin için nüfuslu olacak - bu Müşteri Gizli.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Örnek cihazları Open-AudIT\'den kaldırmak için Delete düğmesine tıklayın.<br/>Bu, aşağıdaki cihazları veritabanından kaldıracaktır. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Edit düğmesine tıklayın <i>Temel SAML Yapılandırma</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Örneğin cihaz verileri ile açık-AudIT\'i populate Open-AudIT\'i aşağıdaki İthalat düğmesine tıklayın.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Düzenlemek istediğiniz alanın sağına ikonu tıklayın. Alanı değiştirin ve göndermek için yeşil ikona tıklayın.';

$GLOBALS["lang"]['Client ID'] = 'Müşteri ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Müşteri ID ve Gizli';

$GLOBALS["lang"]['client_ident'] = 'Müşteri Ident';

$GLOBALS["lang"]['Client Ident'] = 'Müşteri Ident';

$GLOBALS["lang"]['client_secret'] = 'Müşteri Gizli';

$GLOBALS["lang"]['Client Secret'] = 'Müşteri Gizli';

$GLOBALS["lang"]['client_site_name'] = 'Müşteri Site Adı';

$GLOBALS["lang"]['Client Site Name'] = 'Müşteri Site Adı';

$GLOBALS["lang"]['Close'] = 'Close Close Close Close Close';

$GLOBALS["lang"]['Closed'] = 'Kapalı Kapalı Kapalı Kapalı Kapalı';

$GLOBALS["lang"]['Cloud'] = 'Bulut Bulut';

$GLOBALS["lang"]['Cloud Details'] = 'Bulut Detayları';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery ve Denetim';

$GLOBALS["lang"]['cloud_id'] = 'Bulut ID';

$GLOBALS["lang"]['Cloud ID'] = 'Bulut ID';

$GLOBALS["lang"]['cloud_log'] = 'Bulut Girişi';

$GLOBALS["lang"]['Cloud Log'] = 'Bulut Girişi';

$GLOBALS["lang"]['cloud_name'] = 'Bulut Adı';

$GLOBALS["lang"]['Cloud Name'] = 'Bulut Adı';

$GLOBALS["lang"]['Cloud Network'] = 'Bulut Ağı';

$GLOBALS["lang"]['clouds'] = 'Bulutlar';

$GLOBALS["lang"]['Clouds'] = 'Bulutlar';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Bulutlar Open-AudIT Enterprise lisanslı müşteriler için mevcut bir özelliktir.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Cluster Name Name';

$GLOBALS["lang"]['Cluster Name'] = 'Cluster Name Name';

$GLOBALS["lang"]['cluster_type'] = 'Cluster Type';

$GLOBALS["lang"]['Cluster Type'] = 'Cluster Type';

$GLOBALS["lang"]['clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Clusterlar ve Raporlama';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Adaları';

$GLOBALS["lang"]['Collection'] = 'Koleksiyon';

$GLOBALS["lang"]['Collections'] = 'Koleksiyonlar';

$GLOBALS["lang"]['Collector'] = 'koleksiyoncu';

$GLOBALS["lang"]['Collector (UUID)'] = '(UUUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Jewel / Server sadece bir Enterprise özelliğidir. Enterprise müşterileri ücretsiz olarak bir koleksiyoncu lisansı alırlar. Ek koleksiyon lisansları gerekli olarak satın alınabilir.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Jewel / Server, uzaktan veya uzaktan sahip olabileceğiniz için tasarlanmıştır <i>koleksiyoncu koleksiyoncu</i> Örneğin Open-AudIT uzaktan bir makine üzerinde çalışıyor. Bu koleksiyoncu örneği başka bir güvenlik bölgesinde, subnet, bulut barındırma örneğinde veya bir müşteri sitesinde olabilir. Uzak koleksiyoncu daha sonra tüm cihazları yerel olarak ağ ve güvenlik karmaşıklığından kaçınmak ve denetlemek için yapıyor. Kayıt olduğu bir kez koleksiyoncu tamamen kontrol edilir <i>server sunucusu</i>. Bu, sadece bu koleksiyondan Server\'a bir HTTP veya HTTPS bağlantısına ihtiyacınız olduğu anlamına gelir.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Jewel Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Hemşire Adı';

$GLOBALS["lang"]['collector_uuid'] = 'Jewel Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Jewel Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Koleksiyoncu görevleri koleksiyoncu özelliği etkinleştirildiğinde otomatik olarak yapılandırılır. Kollektif görevler doğrudan kullanıcılar tarafından oluşturulmamalıdır. Kollektif görevleri, Yaratılıştan sonra frekansına sahip olabilir. Open-AudIT Server\'ın ona raporlaması varsa, ek bir düşüş sağlanır. Görevin hangi çalıştıracağını belirtmeniz için bunu seçebilirsiniz. Sadece Discovery görevleri koleksiyoncular için desteklenmektedir.';

$GLOBALS["lang"]['Collectors'] = 'Koleksiyonlar';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Koleksiyonlar iki moddan birinde çalışabilir: Kabin ve StandAlone. Kabin modundayken, Open-AudIT örneği ana sunucu tarafından yönetilir. Yalnız modda, örneğin yerel olarak yönetiliyor ve ana sunucuya bulunan herhangi bir cihazı ilerliyor.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Uzak Discovery için koleksiyoncular';

$GLOBALS["lang"]['Colombia'] = 'Kolombiya Kolombiya Kolombiya';

$GLOBALS["lang"]['color'] = 'Renkli Renk';

$GLOBALS["lang"]['Color'] = 'Renkli Renk';

$GLOBALS["lang"]['Column'] = 'Köşe';

$GLOBALS["lang"]['Columns'] = 'Köşeler';

$GLOBALS["lang"]['command'] = 'Komut';

$GLOBALS["lang"]['Command'] = 'Komut';

$GLOBALS["lang"]['command_options'] = 'Komut Seçenekleri';

$GLOBALS["lang"]['Command Options'] = 'Komut Seçenekleri';

$GLOBALS["lang"]['command_output'] = 'Komutan Çıktı';

$GLOBALS["lang"]['Command Output'] = 'Komutan Çıktı';

$GLOBALS["lang"]['command_status'] = 'Komut';

$GLOBALS["lang"]['Command Status'] = 'Komut';

$GLOBALS["lang"]['command_time_to_execute'] = 'Komut zamanı';

$GLOBALS["lang"]['Command Time To Execute'] = 'Komut zamanı';

$GLOBALS["lang"]['comment'] = 'Yorum bırakın';

$GLOBALS["lang"]['Comment'] = 'Yorum bırakın';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Aşağıdaki çizgiyi kapat (yaklaşık 49 veya benzeri). Sadece bir hash # hattın başlangıcında.';

$GLOBALS["lang"]['comments'] = 'Yorumlar';

$GLOBALS["lang"]['Comments'] = 'Yorumlar';

$GLOBALS["lang"]['commercial'] = 'Ticari Ticaret';

$GLOBALS["lang"]['Commercial'] = 'Ticari Ticaret';

$GLOBALS["lang"]['Commercial Support'] = 'Ticari Destek';

$GLOBALS["lang"]['common_name'] = 'Common Name Name';

$GLOBALS["lang"]['Common Name'] = 'Common Name Name';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Yaygın olarak müşteri olarak adlandırılır.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Yaygın olarak müşteri Sekreterliği olarak adlandırılır.';

$GLOBALS["lang"]['Community'] = 'Topluluk Topluluğu';

$GLOBALS["lang"]['Community Questions'] = 'Topluluk Soruları';

$GLOBALS["lang"]['Community String'] = 'Community String';

$GLOBALS["lang"]['Comoros the'] = 'Buenos Aires';

$GLOBALS["lang"]['Compact'] = 'Compact Compact Compact';

$GLOBALS["lang"]['Company'] = 'Şirket Şirketi';

$GLOBALS["lang"]['Complete these steps.'] = 'Bu adımları tamamlayın.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Saldırının karmaşıklığı (Low veya High).';

$GLOBALS["lang"]['Component Table'] = 'Bitirme Tablosu';

$GLOBALS["lang"]['Components (All Devices)'] = 'Bileşenler (Tüm cihazlar)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'Durum';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Risk Değerlendirmesi';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Farkındalık ve eğitim programları';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Yönetim değerlendirme toplantıları';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Düzenli gözetim denetimleri (genellikle her yıl)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'İki aşamada akredite edilmiş bir vücut tarafından yapılır';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, şu anda ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Güvenli Rol Kontrolü (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Yapılandırma';

$GLOBALS["lang"]['Configuration'] = 'Yapılandırma';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Build Change Tespit ve Raporlama';

$GLOBALS["lang"]['Configure'] = 'Configure';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Ajan sunucunun yerini bir programda denetimler gerçekleştirmek için yapılandırın';

$GLOBALS["lang"]['Congo'] = 'Kongo Demokratik Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo Demokratik';

$GLOBALS["lang"]['Connected To'] = 'Bağlanmak için';

$GLOBALS["lang"]['connection'] = 'Bağlantı Bağlantısı';

$GLOBALS["lang"]['Connection'] = 'Bağlantı Bağlantısı';

$GLOBALS["lang"]['Connection Options'] = 'Bağlantı Seçenekleri';

$GLOBALS["lang"]['connection_status'] = 'Bağlantı Durumu';

$GLOBALS["lang"]['Connection Status'] = 'Bağlantı Durumu';

$GLOBALS["lang"]['connections'] = 'Bağlantılar';

$GLOBALS["lang"]['Connections'] = 'Bağlantılar';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Filtrelenmiş olarak Ports Open';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Açık düşünün; Ports Open';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Danışmanlık, uygulama ve diğer hizmetler aracılığıyla mevcuttur';

$GLOBALS["lang"]['contact'] = 'İletişim';

$GLOBALS["lang"]['Contact'] = 'İletişim';

$GLOBALS["lang"]['contact_name'] = 'İletişim Adı';

$GLOBALS["lang"]['Contact Name'] = 'İletişim Adı';

$GLOBALS["lang"]['contained_in'] = 'Ölmüş';

$GLOBALS["lang"]['Contained In'] = 'Ölmüş';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Bir JSON nesnesi ilişkili pencereleri ve konumlarını detaylandırır.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Eğer ssh, snmp ve wmi keşif seçenekleri kullanmamız gerektiğini belirleyen alanlar. Bir JSON nesnesi.';

$GLOBALS["lang"]['Context & Leadership'] = 'Context & Leadership';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Context Name';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Sürekli olarak ISMS\'i geliştirir';

$GLOBALS["lang"]['contractual_obligations'] = 'Sözleşmesel Borçlar';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sözleşmesel Borçlar';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Adaları';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopyalayın ve denetim sonucu yapıştırın';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Forumlara aşağıdakileri kopyalayın ve yapıştırın, başka bir Open-AudIT veya başka bir yerde bu öğeyi sağlamanız gerekir.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopyalayın <i>Uygulama ID</i> Alan ve onu Open-AudIT\'e yapıştırın <i>Müşteri ID</i> Yeni Auth Yöntemi için alan.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopyalayın <i>Müşteri ID</i> Ve onu Open-AudIT\'a sallayın <i>Müşteri ID</i> Alan.<br/>Eğer sır yoksa, tıklayın <i>Genrate yeni gizli</i>Sonra değerini kopyalayın ve onu Open-AudIT\'e yapıştırın <i>Müşteri Gizli</i> Alan.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Değeri kopyalayın ve onu Open-AudIT formuna yapıştırın <i>Müşteri Gizli</i> Alan.';

$GLOBALS["lang"]['core_count'] = 'Core Count';

$GLOBALS["lang"]['Core Count'] = 'Core Count';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Maliyet Merkezi';

$GLOBALS["lang"]['Cost Center'] = 'Maliyet Merkezi';

$GLOBALS["lang"]['cost_code'] = 'Maliyet Kodu';

$GLOBALS["lang"]['Cost Code'] = 'Maliyet Kodu';

$GLOBALS["lang"]['Costa Rica'] = 'Kosta Rika';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'Kont';

$GLOBALS["lang"]['Count'] = 'Kont';

$GLOBALS["lang"]['country'] = 'Ülke Ülke Ülke Ülke';

$GLOBALS["lang"]['Country'] = 'Ülke Ülke Ülke Ülke';

$GLOBALS["lang"]['country_code'] = 'Ülke Kodu';

$GLOBALS["lang"]['Country Code'] = 'Ülke Kodu';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Create Create Create Create Create Create';

$GLOBALS["lang"]['Create Example Devices'] = 'Örnek Cihazları Oluşturun';

$GLOBALS["lang"]['create_external_count'] = 'Create outside Count';

$GLOBALS["lang"]['Create External Count'] = 'Create outside Count';

$GLOBALS["lang"]['create_external_from_internal'] = 'Dışı İçten Dış Oluşturun';

$GLOBALS["lang"]['Create External From Internal'] = 'Dışı İçten Dış Oluşturun';

$GLOBALS["lang"]['Create File'] = 'Create File File';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Create Internal Count';

$GLOBALS["lang"]['Create Internal Count'] = 'Create Internal Count';

$GLOBALS["lang"]['create_internal_from_external'] = 'Dıştan Dış Yaratın';

$GLOBALS["lang"]['Create Internal From External'] = 'Dıştan Dış Yaratın';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS Cihazları Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT cihazlardan gelen cihazlar ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Örnek cihaz için Basel\'i oluşturun';

$GLOBALS["lang"]['Create a Discovery'] = 'Bir Discovery oluşturun';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Applicability (SoA) hakkında bir açıklama oluşturun';

$GLOBALS["lang"]['created_by'] = 'Yaratarak';

$GLOBALS["lang"]['Created By'] = 'Yaratarak';

$GLOBALS["lang"]['created_date'] = 'Oluşturulmuş Tarih';

$GLOBALS["lang"]['Created Date'] = 'Oluşturulmuş Tarih';

$GLOBALS["lang"]['Creating'] = 'Oluşturmak';

$GLOBALS["lang"]['Creating Credentials'] = 'Credentials oluşturmak';

$GLOBALS["lang"]['Creating Device'] = 'Cihaz oluşturmak';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets oluşturmak';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Bir Discovery oluşturmak Tarama Seçenekleri Girişi';

$GLOBALS["lang"]['Creating a Query'] = 'Bir Sorgu oluşturmak';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Gruplar için bir SQL Bildirimi Oluşturma';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Queries için bir SQL Açıklama oluşturmak';

$GLOBALS["lang"]['Creating an Integration'] = 'Bir integral yaratmak';

$GLOBALS["lang"]['creator'] = 'Yaratıcı';

$GLOBALS["lang"]['Creator'] = 'Yaratıcı';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Müşteri ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials Aboneliği ID ID ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credentials depolanır <i>Referanslar</i> Veritabanı masası. Gerçek şifreli bilgi depolamada şifrelenir. Bir Discovery çalıştırıldığında, bir cihazın veritabanından alınan özel kimlikleri vardır, şifrelenmiş ve test edilmiştir. Bu bilgiler listesini başarısız olursa, şifrelenir ve daha önce çalışmış olan kimliklere karşı test edilir. Cihaz spesifik kimlikleri bireysel bir cihaz seviyesinde depolanır <i>credential</i> Masa (note - hayır <i>s</i> Masa adı altında). SSH anahtarları SSH kullanıcı / paroladan önce test edilir. SSH test ettiğinde, bilgi aynı zamanda sudo ile çalışmak veya kök olmaktır.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials birkaç farklı türden birine sahip olabilir - snmp v.1 / v.2, snmp v.3, ssh, ssh anahtarı, pencereler tüm uygulanır. CAVEAT - ssh anahtarları henüz Windows Open-AudIT sunucuları için uygulanmaz.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Cloud Discovery\'de kullanılan Amazon AWS için sansür';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoft için Azure Cloud Discovery\'de kullanılır';

$GLOBALS["lang"]['Critical'] = 'Eleştirel eleştirel';

$GLOBALS["lang"]['criticality'] = 'Eleştirellik';

$GLOBALS["lang"]['Criticality'] = 'Eleştirellik';

$GLOBALS["lang"]['Croatia'] = 'Hırvatistan';

$GLOBALS["lang"]['Cuba'] = 'Küba Küba Küba';

$GLOBALS["lang"]['current'] = 'Şimdiki akım';

$GLOBALS["lang"]['Current'] = 'Şimdiki akım';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Current Discovery Processes';

$GLOBALS["lang"]['Current date & time is '] = 'Şimdiki tarih ve zaman ';

$GLOBALS["lang"]['Currently Installed'] = 'Şu anda yükleniyor';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Şu anda desteklenen türleri desteklenmektedir <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> veya <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Özel Alanlar';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Özel TCP Ports';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Özel TCP Ports. Liuke\'nin Top TCP Ports\'a ek olarak tarayacağımız herhangi bir özel liman. Comma seperated, hiçbir yer yok.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Özel UDP Ports';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Özel UDP Ports. Liuke\'nin Top UDP Ports\'a ek olarak tarayacağımız belirli limanlar. Comma seperated, hiçbir yer yok.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Discovery başına özelleştirilmiş Tarama Seçenekleri';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kıbrıs';

$GLOBALS["lang"]['Czech'] = 'Çek Çek Çek Çek';

$GLOBALS["lang"]['Czech Republic'] = 'Çek Cumhuriyeti Çek Cumhuriyeti';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Hesabı (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Danimarka Danimarka Danimarka';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards ve Widgets, Enterprise lisanslı müşterileri oluşturmak, okumak, güncellemek ve bu koleksiyonların her ikisini de ana sayfalarının tam olarak görmeleri için silmelerine izin veriyor. Sadece bu değil, ancak bir kullanıcı kendi ana sayfası olarak verilen bir panoyu kurabilir. Herkes aynı ana sayfayı (dashboard) kullanmak zorunda değildir, bu panoda aynı widgets. Profesyonel lisanslı müşteriler kendi ana sayfası olarak ayarlamak için iki önceden tanımlanmış pano arasından seçim yapabilirler.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards sağlar <i>Bir bakışta</i> Ağınızda meydana gelen değişiklikler için önemli görünürlük, cihaz türleri, üreticiler ve işletim sistemleri ve çok daha fazlası için hızlı bağlantılar sağlar.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards kullanımı';

$GLOBALS["lang"]['Data'] = 'Data Data Data Data';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Data Retention';

$GLOBALS["lang"]['Database'] = 'Veritabanı Veritabanı';

$GLOBALS["lang"]['db_action'] = 'Veritabanı';

$GLOBALS["lang"]['Database Action'] = 'Veritabanı';

$GLOBALS["lang"]['db_column'] = 'Veritabanı';

$GLOBALS["lang"]['Database Column'] = 'Veritabanı';

$GLOBALS["lang"]['Database Definition'] = 'Database Description';

$GLOBALS["lang"]['db_row'] = 'Veritabanı Row';

$GLOBALS["lang"]['Database Row'] = 'Veritabanı Row';

$GLOBALS["lang"]['Database Schema'] = 'Database Schema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Veritabanı Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Veritabanı';

$GLOBALS["lang"]['Database Table'] = 'Veritabanı';

$GLOBALS["lang"]['Database Tables'] = 'Database Tables';

$GLOBALS["lang"]['dataset_title'] = 'Dataset Title';

$GLOBALS["lang"]['Dataset Title'] = 'Dataset Title';

$GLOBALS["lang"]['date'] = 'Tarih Tarihi';

$GLOBALS["lang"]['Date'] = 'Tarih Tarihi';

$GLOBALS["lang"]['Date D-M-Y'] = 'Tarih D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Tarih M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Tarih Şimdi';

$GLOBALS["lang"]['date_of_manufacture'] = 'Üretim Tarihi';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Üretim Tarihi';

$GLOBALS["lang"]['date_paid'] = 'Tarih Ücretli';

$GLOBALS["lang"]['Date Paid'] = 'Tarih Ücretli';

$GLOBALS["lang"]['date_received'] = 'Tarih Kabul Edildi';

$GLOBALS["lang"]['Date Received'] = 'Tarih Kabul Edildi';

$GLOBALS["lang"]['Date Y-M-D'] = 'Tarih Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Tarih ve zaman CVE son güncel olduğunda.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Tarih ve zaman CVE yayınlandığında.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE yayınlandığında tarih.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Gün Ay';

$GLOBALS["lang"]['Day Of Month'] = 'Gün Ay';

$GLOBALS["lang"]['day_of_week'] = 'Hafta';

$GLOBALS["lang"]['Day Of Week'] = 'Hafta';

$GLOBALS["lang"]['Day of Month'] = 'Ay Günü';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'Debugging';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging a script';

$GLOBALS["lang"]['December'] = 'Aralık Aralık Aralık Aralık';

$GLOBALS["lang"]['Decommission'] = 'Decommission';

$GLOBALS["lang"]['Default'] = 'Tembel';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Varsayılan Kimlik Doğrulama Seviye - Connect to Connect';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Tembel Impersonation Seviye - Tanımlamak için Set to Explain';

$GLOBALS["lang"]['Default Items'] = 'Temsil Maddeleri';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Varsayılan Orgs Grupları';

$GLOBALS["lang"]['Default Roles Groups'] = 'Varsayılan Rollar Gruplar';

$GLOBALS["lang"]['Default Value'] = 'Varsayılan değer';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normalde Active Directory LDAPS için kullanılan 636.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Teminatın Belirlenmesi <code>3</code> LDAP ve Active Directory için.';

$GLOBALS["lang"]['Defaults'] = 'Temsiller';

$GLOBALS["lang"]['Deferred'] = 'De ki:';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Proje kapsamı ve hedefleri';

$GLOBALS["lang"]['Define the ISMS scope'] = 'ISMS kapsamını tanımlar';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Organizasyonun bağlamını tanımlayın (internal/external issues)';

$GLOBALS["lang"]['delay_minutes'] = 'Geç Dakikalar';

$GLOBALS["lang"]['Delay Minutes'] = 'Geç Dakikalar';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Delete Örnek Cihazları';

$GLOBALS["lang"]['delete_external_from_internal'] = 'İçten Dış';

$GLOBALS["lang"]['Delete External From Internal'] = 'İçten Dış';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS Open-AudIT\'de değilse cihazlar';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Delete a {collection} girişi.';

$GLOBALS["lang"]['Delete from Application'] = 'Delete from Application';

$GLOBALS["lang"]['Delete from Cluster'] = 'Setten Delete';

$GLOBALS["lang"]['Denmark'] = 'Danimarka Danimarka Danimarka';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Kullanıcı tarafından denetim veya manuel olarak ayarlandığından alındı.';

$GLOBALS["lang"]['Derived by audit.'] = 'Denetim tarafından silindi.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derived from <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derived from <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Kollektif keşiften alındı.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'OS Name\'den alındı.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Bulut keşiflerinden alındı.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Cihaz denetimlerinden alındı.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Cihaz türü ve OS\'den türlenmiş.';

$GLOBALS["lang"]['Derived from discovery.'] = 'keşiften alındı.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'hostname, sysName, dns Hostname ve IP\'den bu siparişe alındı.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'tam anlamıyla ciddiyetle atılır.';

$GLOBALS["lang"]['description'] = 'Açıklama';

$GLOBALS["lang"]['Description'] = 'Açıklama';

$GLOBALS["lang"]['destination'] = 'Hedef';

$GLOBALS["lang"]['Destination'] = 'Hedef';

$GLOBALS["lang"]['detail'] = 'Detaylı Bilgi';

$GLOBALS["lang"]['Detail'] = 'Detaylı Bilgi';

$GLOBALS["lang"]['Details'] = 'Detaylar';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Genellikle bu sitede temasa geçen ayrıntıları.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Baseline check\'i veritabanına karşı ne sıklıkta çalıştırmak istediğinizi ve bir Scheduled Report oluşturmak istediğinizi belirleyin';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Risk tedavi seçeneklerini belirleme';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Risk Tedavisi Planını Geliştirmek';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Politikalar, prosedürler ve kontroller';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Gerekli ISMS belgeleri (politikalar, prosedürler vs.)';

$GLOBALS["lang"]['device'] = 'Cihaz';

$GLOBALS["lang"]['Device'] = 'Cihaz';

$GLOBALS["lang"]['Device Audits'] = 'Cihaz Denetimleri';

$GLOBALS["lang"]['Device Component Names'] = 'Device Component Names';

$GLOBALS["lang"]['Device ID'] = 'Device ID';

$GLOBALS["lang"]['device_id'] = 'Device ID';

$GLOBALS["lang"]['device_id_a'] = 'Device ID A';

$GLOBALS["lang"]['Device ID A'] = 'Device ID A';

$GLOBALS["lang"]['device_id_b'] = 'Device ID B';

$GLOBALS["lang"]['Device ID B'] = 'Device ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Device Matching Kuralları';

$GLOBALS["lang"]['Device Name'] = 'Device Name Adı';

$GLOBALS["lang"]['Device Result'] = 'Cihaz Sonuçları';

$GLOBALS["lang"]['Device Results'] = 'Cihaz Sonuçları';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Device Seed Keşfetler, ağınızın bir dizi subnetten oluştuğunu biliyorsanız iyi bir seçenektir, ancak ne olduğundan emin olabilirsiniz. Yerel bir yönlendirici ile keşif yapın ve ağınızı gözlerinizden önce izleyin.';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Device Status';

$GLOBALS["lang"]['Device Types'] = 'Cihaz Türü';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Cihaz ve Yazılım ve Donanım Denetimi';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Device is in the Subnet';

$GLOBALS["lang"]['Devices'] = 'Cihazlar';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Yere Hazırlanan cihazlar';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Yere Hazırlanan cihazlar';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Cihazlar Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Cihazlar Org';

$GLOBALS["lang"]['Devices Audited'] = 'Cihazlar Denetimli';

$GLOBALS["lang"]['Devices Collection'] = 'Cihazları Koleksiyon';

$GLOBALS["lang"]['Devices Created in '] = 'Oluşturulan cihazlar ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Bayilik Ekran Köşeleri';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Bayilik Ekran Köşeleri';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Cihazlar Son 7 Gün';

$GLOBALS["lang"]['Devices Found Today'] = 'Bugün bulunan cihazlar';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Cihazları Dün Buldu';

$GLOBALS["lang"]['Devices Missing Information'] = 'Eksik Bilgiler';

$GLOBALS["lang"]['Devices Not Audited'] = 'Cihazlar Denetim Değil';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Cihazlar Görmez 30 Gün';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Cihazları Görmüyor 7 Gün';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Cihazlar 90 Gün Görmez';

$GLOBALS["lang"]['Devices Older Than X'] = 'X x x x x';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API aracılığıyla erişim';

$GLOBALS["lang"]['Devices Selected from '] = 'Kullanılan cihazlar ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudIT tarafından seçilen cihazlar';

$GLOBALS["lang"]['Devices Updated in '] = 'Güncellemeler içinde Güncellemeler ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Cihazlar kıyaslanıyor.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Cihazlar karşılaştırılmıyor.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Cihazlar kıyaslanabilir.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Run State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Stopped State Cihazları';

$GLOBALS["lang"]['Devices in this'] = 'Bu cihazlarda cihazlar';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Cihazları, statülerinin ayarlandığı takdirde eşleşmeyecek <i>silinmiş silinmiş silinmiş silinmiş silinmiş silinmiş</i>. Başka herhangi bir durum, bir maçın gerçekleşmesine izin verecektir.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Expired Warranties ile cihazlar';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Türü veya OS\'den Devired.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Elde Edildi';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Elde Edildi';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Komut başarıyla tamamlandı ve beklenen verilere geri döndü.';

$GLOBALS["lang"]['direction'] = 'Yönellem';

$GLOBALS["lang"]['Direction'] = 'Yönellem';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'Engelliler';

$GLOBALS["lang"]['Disabled'] = 'Engelliler';

$GLOBALS["lang"]['discard'] = 'Discard';

$GLOBALS["lang"]['Discard'] = 'Discard';

$GLOBALS["lang"]['Discover'] = 'Discover Discover Discover Discover Discover Discover Discover';

$GLOBALS["lang"]['Discoveries'] = 'Discoveries Discoveries';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Keşfetler, Open-AudIT’in ne yaptığının çok kalbindedir. Başka nasıl bileceksiniz <i>Ağınızda ne var?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Keşfetler, her ve her seferinde bu ağ ayrıntılarına girmeden bir ağ üzerinde bir keşif yapmanızı sağlayan girişlerdir.';

$GLOBALS["lang"]['Discovery'] = 'Discovery Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery Issues';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery Match Seçenekleri';

$GLOBALS["lang"]['Discovery Name'] = 'Discovery Name Name';

$GLOBALS["lang"]['Discovery Options'] = 'Keşif Seçenekleri';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan Seçenekleri';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan Seçenekleri';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Seçenekler sadece başka bir öğe koleksiyonudur. Enterprise kullanıcıları, gerekli olarak giriş, güncelleme ve silinebilir. Profesyonel kullanıcılar tüm girişleri okuyabilir, ancak yeni girişler oluşturamaz, mevcut girişleri güncellemek veya girişleri silemez. Topluluk kullanıcılarının bu koleksiyona erişmesine izin veren bir GUI yoktur.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan Türleri';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery Support Support';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery çalışmayı bıraktı';

$GLOBALS["lang"]['disk'] = 'Disk Disk';

$GLOBALS["lang"]['Disk'] = 'Disk Disk';

$GLOBALS["lang"]['display_version'] = 'Ekran Versiyon';

$GLOBALS["lang"]['Display Version'] = 'Ekran Versiyon';

$GLOBALS["lang"]['Display in Menu'] = 'Menüde Ekran';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'POST / {collection}. için standart bir web formu görüntüler';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST / {collection}/import\'a teslim için standart bir web formu gösterir.';

$GLOBALS["lang"]['district'] = 'District District';

$GLOBALS["lang"]['District'] = 'District District';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Host Name';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Host Name';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Tüm belgeleriniz için Open-AudIT wiki\'yi unutmayın.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Unutma, wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Bu TCP limanlarını taramayın.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Bu UDP limanlarını taramayın.';

$GLOBALS["lang"]['Do not show me again'] = 'Beni tekrar göstermiyor';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Bu yapılandırmanın mükemmel bir örneği var mı? Belki de bir laboratuvar ortamında veya iş istasyonunda bulunan bir cihaz iş istasyonu VM\'leri klonlamak için kullandığınız.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Güvenli taşıma (LDAPS) veya normal şifrelenmemiş LDAP kullanmak istiyorsunuz.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Soldaki standart sidebar görmek istiyorsunuz.';

$GLOBALS["lang"]['documentation'] = 'Dokümantasyon';

$GLOBALS["lang"]['Documentation'] = 'Dokümantasyon';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Belirli bir koleksiyon hakkında dokümantasyon.';

$GLOBALS["lang"]['Does Not Equal'] = 'eşit değil';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Lisans çocuk Orgs\'e uygulanır.';

$GLOBALS["lang"]['domain'] = 'Domain Domain Domain Domain';

$GLOBALS["lang"]['Domain'] = 'Domain Domain Domain Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Adres';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Adres';

$GLOBALS["lang"]['domain_controller_name'] = 'Domain Controller Name Name Name Name Name Name';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domain Controller Name Name Name Name Name Name';

$GLOBALS["lang"]['domain_role'] = 'Domain Role';

$GLOBALS["lang"]['Domain Role'] = 'Domain Role';

$GLOBALS["lang"]['domain_short'] = 'Domain Short Domain';

$GLOBALS["lang"]['Domain Short'] = 'Domain Short Domain';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominik Cumhuriyeti';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Elimi tutma, ne yaptığımı biliyorum. Filtre yok ve özel masalara katılma yeteneği.';

$GLOBALS["lang"]['Download'] = 'Download Download Download Download Download';

$GLOBALS["lang"]['Download a File'] = 'Download a File';

$GLOBALS["lang"]['Download a file from URL'] = 'URL\'den bir dosya indir';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Test_windows_client.vbs doğrudan senaryoyu indirin';

$GLOBALS["lang"]['Download your updated version from'] = 'Güncelleme sürümünüzü indirmekten';

$GLOBALS["lang"]['driver'] = 'Sürücü Sürücü';

$GLOBALS["lang"]['Driver'] = 'Sürücü Sürücü';

$GLOBALS["lang"]['duplex'] = 'Duplex Duplex Duplex Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex Duplex Duplex Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Karmaşık cihazlar / Eksik cihazlar';

$GLOBALS["lang"]['duration'] = 'Süre süresi';

$GLOBALS["lang"]['Duration'] = 'Süre süresi';

$GLOBALS["lang"]['Dutch'] = 'Hollandalı Hollanda';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Her IP, keşif yapılandırılmış seçeneklerle taranır (bakınız Arama Seçenekleri ve Discovery\'e bakın - wiki\'deki Toplum vs Professional vs Enterprise). Genel olarak, Nmap limanları 22 (ssh), 135 (wmi), 62078 (iPhone) ve UDP 161 (snmp). Eğer 22, 135 veya 161, credential listesine cevap verir ve her bir credential yeniden test edilir. İlk çalışma kimlikleri doğrudan cihazdan daha fazla sorgu için kullanılır. Not - Bir cihaz daha önce keşfedildiyse ve çalışma kimlikleri varsa, bu bilgiler ilk olarak test edilir. Ancak bu başarısız diğer bilgiler ise o zaman denedi.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Her seferinde bir cihaz keşfedildi veya bir denetim sonucu işlenir, tüm kurallar veritabanından alınır ve belirli cihazın özelliklerine karşı çalışır. Kurallar bir seferde bir cihaza karşı çalışır - söylemek için tesis yoktur <i>Tüm cihazlara karşı kuralları çalıştırın<i> veya <i>Bu cihazlara karşı kuralları çalıştırın<i>. Bireysel bir kural, cihazın bir veya daha özelliklerini test edecek ve kuralla eşleştirecekse, sonuç uygulanacaktır. Birkaç özellik test edilebilir. Birkaç özellik ayarlanabilir. Bunu bir If This olarak düşünün, o zaman Open-AudIT için bu sistem.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Tek bir tıkla bir ağ üzerinde bir keşif kolayca çalıştırın, her ve her seferinde bu ağın ayrıntılarına girmeden.';

$GLOBALS["lang"]['Ecuador'] = 'Ekvador';

$GLOBALS["lang"]['Edit'] = 'Edit Edit';

$GLOBALS["lang"]['edit_log'] = 'Edit Log';

$GLOBALS["lang"]['Edit Log'] = 'Edit Log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Kur\'an\'a yemin ederim';

$GLOBALS["lang"]['Edited By'] = 'Kur\'an\'a yemin ederim';

$GLOBALS["lang"]['edited_date'] = 'Edited Date';

$GLOBALS["lang"]['Edited Date'] = 'Edited Date';

$GLOBALS["lang"]['edition'] = 'Edition Edition Edition Edition';

$GLOBALS["lang"]['Edition'] = 'Edition Edition Edition Edition';

$GLOBALS["lang"]['Egypt'] = 'Mısır';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Ya Amazon, Google veya Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ya hiç ya da mevcut değil.

<strong>Hiçbir şey yok</strong> - Başarılı saldırı, kırılgan sistemin dağıtım ve yürütme koşullarına bağlı değildir. Saldırgan, kırılganlığa ulaşabilecek ve kırılganlığın tüm veya çoğu örneği altında kullanılması bekleyebilir.

<strong>Present Present Present Present</strong> - Başarılı saldırı, saldırıyı etkinleştiren kırılgan sistemin belirli dağıtım ve yürütme koşullarını bağlıdır. Bunlar şunlardır:

Bir yarış koşulu, kırılganlığı başarıyla kullanmak için kazanılmalıdır. Saldırının başarılılığı, saldırganın tam kontrolü altında olmayan infaz koşullarını şartlandırır. Saldırı başarılı olmadan önce tek bir hedefe karşı birden fazla kez başlatılmalıdır.

Ağ enjeksiyonu. Saldırıcı kendilerini hedef ve kurban tarafından talep edilen kaynak arasında mantıksal ağ yoluna enjekte etmelidir (örneğin, on-path saldırganı gerektiren kırılganlar).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-posta e-posta e-posta';

$GLOBALS["lang"]['Email'] = 'E-posta e-posta e-posta';

$GLOBALS["lang"]['email_address'] = 'E-posta Adresi';

$GLOBALS["lang"]['Email Address'] = 'E-posta Adresi';

$GLOBALS["lang"]['Email Configuration'] = 'E-posta';

$GLOBALS["lang"]['Email to send test to'] = 'E-posta göndermek için test göndermek';

$GLOBALS["lang"]['Enable'] = 'Enable';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Bu bilgisayarda enable Dağıtılmış COM - Seçenek kontrol edilir';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Windows altında Özelliği Kolaylaştırın';

$GLOBALS["lang"]['encryption'] = 'Şifreleme';

$GLOBALS["lang"]['Encryption'] = 'Şifreleme';

$GLOBALS["lang"]['encryption_method'] = 'Şifreleme Yöntemi';

$GLOBALS["lang"]['Encryption Method'] = 'Şifreleme Yöntemi';

$GLOBALS["lang"]['encryption_status'] = 'Şifreleme Durumu';

$GLOBALS["lang"]['Encryption Status'] = 'Şifreleme Durumu';

$GLOBALS["lang"]['end_date'] = 'End Date';

$GLOBALS["lang"]['End Date'] = 'End Date';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Yaşam Ürününün Sonu';

$GLOBALS["lang"]['end_of_life'] = 'Yaşam Sonu';

$GLOBALS["lang"]['End Of Life'] = 'Yaşam Sonu';

$GLOBALS["lang"]['end_of_production'] = 'End Of Production';

$GLOBALS["lang"]['End Of Production'] = 'End Of Production';

$GLOBALS["lang"]['end_of_service'] = 'Hizmetin Sonu';

$GLOBALS["lang"]['End Of Service'] = 'Hizmetin Sonu';

$GLOBALS["lang"]['end_of_service_life'] = 'Hizmet Yaşamının Sonu';

$GLOBALS["lang"]['End Of Service Life'] = 'Hizmet Yaşamının Sonu';

$GLOBALS["lang"]['Endpoint'] = 'Endpoint';

$GLOBALS["lang"]['English'] = 'İngilizce İngilizce İngilizce English';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Geliştirilmişlar düzenleyici uyumluluk';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Zenginlik tamamlandı. CVE tam metadata vardır ve istikrarlı olarak kabul edilir.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Gerekli Belgeler kontrol edilir ve erişilebilir';

$GLOBALS["lang"]['enterprise'] = 'Enterprise Enterprise Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise Enterprise Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Enterprise private network';

$GLOBALS["lang"]['Entitlement Type'] = 'Entitlement Type';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Çevre';

$GLOBALS["lang"]['Environment'] = 'Çevre';

$GLOBALS["lang"]['Equal To'] = 'eşit';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'eşit To or Greater Than';

$GLOBALS["lang"]['Equal To or Less Than'] = 'eşit veya daha az';

$GLOBALS["lang"]['Equals'] = 'Eşitlikler';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Equatorial Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritre';

$GLOBALS["lang"]['Error'] = 'Hata';

$GLOBALS["lang"]['Error Code'] = 'Hata Kodu';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto Esperanto Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Bir proje planı ve zaman çizelgesi oluşturun';

$GLOBALS["lang"]['Establish an information security policy'] = 'Bir bilgi güvenliği politikası kurmak';

$GLOBALS["lang"]['Established'] = 'kuruldu';

$GLOBALS["lang"]['Estonia'] = 'Estonya Estonya';

$GLOBALS["lang"]['Estonian'] = 'Estonya';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiyopya';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'ISMS\'yi içsel olarak değerlendirin';

$GLOBALS["lang"]['Every'] = 'Her Her Her Şey Her Her Her Şey Her Her Her Şey Her Her Her Her Her Şey Her Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Şey Her Her Şey Her Her Her Şey Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Her Her Her Her Her Her Her Şey Her Şey Her Her Her Şey Her Şey Her Şey Her Her Şey Her Şey Her Her Her Her Her Her Şey Her Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her';

$GLOBALS["lang"]['Every Day'] = 'Her Gün';

$GLOBALS["lang"]['Example'] = 'Örnek Örnek Örnek Örnek Örnek Örnek Örnek Örnek';

$GLOBALS["lang"]['Example Devices'] = 'Örnek cihazlar';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Örnek Org Chart with Access';

$GLOBALS["lang"]['Example text from'] = 'Örnek metinden';

$GLOBALS["lang"]['Examples'] = 'Örnekler';

$GLOBALS["lang"]['Exceptions'] = 'istisnalar hariç';

$GLOBALS["lang"]['exclude'] = 'Exclude';

$GLOBALS["lang"]['Exclude'] = 'Exclude';

$GLOBALS["lang"]['exclude_ip'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresses';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Exclude IP Addresses (individual IP - 192.168.1.20, aralıklar - 192.168.1.30-40 veya altnet - 192.168.1.100/30) taranarak listelendi. Comma seperated, hiçbir yer yok.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Exclude, taranmaktan listelenen herhangi bir liman. Comma seperated, hiçbir yer yok.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Bu IP adreslerini Nmap\'in taranmasıyla genişletin.';

$GLOBALS["lang"]['Excluded'] = 'Excluded';

$GLOBALS["lang"]['exclusion_reasons'] = 'Exclusion Sebepleri';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Exclusion Sebepleri';

$GLOBALS["lang"]['executable'] = 'idam edilebilir';

$GLOBALS["lang"]['Executable'] = 'idam edilebilir';

$GLOBALS["lang"]['executable_id'] = 'Executable ID';

$GLOBALS["lang"]['Executable ID'] = 'Executable ID';

$GLOBALS["lang"]['executables'] = 'Executables';

$GLOBALS["lang"]['Executables'] = 'Executables';

$GLOBALS["lang"]['Execute'] = 'idam';

$GLOBALS["lang"]['Executing'] = 'Executing';

$GLOBALS["lang"]['exemption_reason'] = 'Exemption Sebep';

$GLOBALS["lang"]['Exemption Reason'] = 'Exemption Sebep';

$GLOBALS["lang"]['Existing Building'] = 'Mevcut Bina';

$GLOBALS["lang"]['Existing Floor'] = 'Varing Floor';

$GLOBALS["lang"]['Existing Room'] = 'Varing Room';

$GLOBALS["lang"]['Existing Row'] = 'Var olan Row';

$GLOBALS["lang"]['expire_date'] = 'Expire Date';

$GLOBALS["lang"]['Expire Date'] = 'Expire Date';

$GLOBALS["lang"]['expire_minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['expires'] = 'Expires';

$GLOBALS["lang"]['Expires'] = 'Expires';

$GLOBALS["lang"]['expiry_date'] = 'Expiry Date';

$GLOBALS["lang"]['Expiry Date'] = 'Expiry Date';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Export'] = 'İhracat İhracatı';

$GLOBALS["lang"]['Export by Device'] = 'Device tarafından';

$GLOBALS["lang"]['Export by Policy'] = 'Website tarafından';

$GLOBALS["lang"]['Export data to'] = 'İhracat verileri';

$GLOBALS["lang"]['Exporting a Device'] = 'Bir Device';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Dış Dış Dış Dış Dış Dış Dış';

$GLOBALS["lang"]['External Field Name'] = 'Dış Alan Adı';

$GLOBALS["lang"]['External Field Type'] = 'Dış Alan Türü';

$GLOBALS["lang"]['External Field Types'] = 'Dış Alan Türleri';

$GLOBALS["lang"]['external_ident'] = 'Dış Ident';

$GLOBALS["lang"]['External Ident'] = 'Dış Ident';

$GLOBALS["lang"]['external_link'] = 'Dış Link';

$GLOBALS["lang"]['External Link'] = 'Dış Link';

$GLOBALS["lang"]['extra_columns'] = 'Ekstra Köşeler';

$GLOBALS["lang"]['Extra Columns'] = 'Ekstra Köşeler';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Ekstra ve Zaman bazlı Raporlama';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Ekstra ve daha fazla fiilasyon sorun giderme için oluşturulur.';

$GLOBALS["lang"]['FAQ'] = 'SSS SSS';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Başarısız Başarısız Başarısız Başarısız Başarısız Başarısız';

$GLOBALS["lang"]['Failed'] = 'Başarısızlık';

$GLOBALS["lang"]['Failed Severity'] = 'Başarısızlık!';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falkland Adaları (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Aile Ailesi';

$GLOBALS["lang"]['Faroe Islands'] = 'Faroe Adaları';

$GLOBALS["lang"]['Features'] = 'Özellikler Özellikler Özellikler Özellikler Özellikler';

$GLOBALS["lang"]['February'] = 'Şubat Şubat Şubat Şubat';

$GLOBALS["lang"]['field'] = 'Field';

$GLOBALS["lang"]['Field'] = 'Field';

$GLOBALS["lang"]['field_id'] = 'Field ID';

$GLOBALS["lang"]['Field ID'] = 'Field ID';

$GLOBALS["lang"]['Field Name'] = 'Alan Adı';

$GLOBALS["lang"]['Field Type'] = 'Field Type';

$GLOBALS["lang"]['Fields'] = 'Alanlar';

$GLOBALS["lang"]['fields'] = 'Alanlar';

$GLOBALS["lang"]['Fields attributes are'] = 'Alanlar özellikleridir';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Adaları';

$GLOBALS["lang"]['File'] = 'Dosya';

$GLOBALS["lang"]['File Auditing'] = 'Dosya Denetimi';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'Dosya Girişi';

$GLOBALS["lang"]['file_name'] = 'Dosya Adı';

$GLOBALS["lang"]['File Name'] = 'Dosya Adı';

$GLOBALS["lang"]['File Share Discovery'] = 'File Share Discovery';

$GLOBALS["lang"]['file_size'] = 'Dosya Boyutu';

$GLOBALS["lang"]['File Size'] = 'Dosya Boyutu';

$GLOBALS["lang"]['filename'] = 'Dosya adı';

$GLOBALS["lang"]['Filename'] = 'Dosya adı';

$GLOBALS["lang"]['files'] = 'Dosyalar';

$GLOBALS["lang"]['Files'] = 'Dosyalar';

$GLOBALS["lang"]['files_id'] = 'Dosyalar ID';

$GLOBALS["lang"]['Files ID'] = 'Dosyalar ID';

$GLOBALS["lang"]['filter'] = 'Filtre';

$GLOBALS["lang"]['Filter'] = 'Filtre';

$GLOBALS["lang"]['filtered'] = 'Filtrelenmiş';

$GLOBALS["lang"]['Filtered'] = 'Filtrelenmiş';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtrelenmiş Ports';

$GLOBALS["lang"]['Finland'] = 'Finlandiya Finlandiya';

$GLOBALS["lang"]['Finnish'] = 'Finlandiya Finlandiya';

$GLOBALS["lang"]['Firewall'] = 'Güvenlik Duvarı';

$GLOBALS["lang"]['Firewall Packages'] = 'Güvenlik Paketleri';

$GLOBALS["lang"]['firewall_rule'] = 'Güvenlik Kuralı';

$GLOBALS["lang"]['Firewall Rule'] = 'Güvenlik Kuralı';

$GLOBALS["lang"]['firmware'] = 'Şirketware';

$GLOBALS["lang"]['Firmware'] = 'Şirketware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmaware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmaware Revision';

$GLOBALS["lang"]['First'] = 'First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First First';

$GLOBALS["lang"]['First Name'] = 'İlk Adı';

$GLOBALS["lang"]['first_run'] = 'İlk Run';

$GLOBALS["lang"]['First Run'] = 'İlk Run';

$GLOBALS["lang"]['first_seen'] = 'İlk Seen';

$GLOBALS["lang"]['First Seen'] = 'İlk Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'İlk önce ihtiyacınız olan şeye odaklanır: Temel yazılım, kullanıcılar veya Netstat verileri için mi çalışıyorsunuz? Hakkında karşılaştırmak ve rapor etmek için önemli olan nedir?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Sabit Sabit';

$GLOBALS["lang"]['Fixing the Issue'] = 'Sorunu düzeltin';

$GLOBALS["lang"]['Floor'] = 'Kat';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Aşağıdaki bağlantıların herhangi birini takip edin ve Open-AudIT\'ı nasıl kullanılacağını keşfedin <b>Ağınızda ne var?</b>';

$GLOBALS["lang"]['For'] = 'For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For For <i>Tipi Tipi Tipi Tipi</i> Baseline\'yi seçmenizden emin olun ve Grup için bir cihaz grubu seçmeniz gerekir, eğer bu temel çizgisine uygulanabilirse, en iyi cihazları taban çizgisine başvurmak için temsil eder. Bu, hatalı girişleri önleyecek.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Leicester/Ubuntu, override\'yi hatırlamak için dpkg belirlemek dahil olmak üzere koşmak, böylece apt-get yükseltme molası kırılmayacak';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open-AudIT için v1, v2 ve v3 kimlik kullanabilir. Cihazın bir yönlendirici, geçiş (regular ağ cihazları) veya bir bilgisayar (Linux ve Windows genellikle izleme araçları için SNMP çalıştırılır).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'cron\'da bir astar için, bu Wikipedia sayfasını görün';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Bir tohum keşfi için, sadece özel IP adresi alanında IP\'leri keşfetmeliyim.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Bir tohum keşfi için, sadece seçilmiş subnet\'te IP\'leri keşfetmeliyim.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Bir tohum keşfi için, keşif koşmadan önce subnet\'i kesmeliyim.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Bir ham SQL sorgusunun ileri girişi için. Queries olarak, dahil olmak zorundasınız <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Her spawned işlemi için, aşağıda meydana gelir.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Örneğin - bir setteki Apache sunucularından biri olarak hareket eden Redhat 9 çalışan bir cihazdan temel oluşturabilirsiniz. Bu özel sunucunun sadece istediğiniz şekilde yapılandırıldığını biliyorsunuz, ancak kümedeki diğer sunucular tam olarak aynı yapılandırılırsa emin değilsiniz. Baselines bunu belirlemenizi sağlar.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Örneğin - bir setteki Apache sunucularından biri olarak hareket eden Redhat 9 çalışan bir cihazdan temel oluşturabilirsiniz. Bu özel sunucunun sadece istediğiniz şekilde yapılandırıldığını biliyorsunuz, ancak kümedeki diğer sunucular tam olarak aynı yapılandırılırsa emin değilsiniz. Baselines bunu belirlemenizi sağlar.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Daha ayrıntılı bilgi için, wiki\'yi görün.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Sürekli olmayan lisanslar için, lisans sona erdiğinde.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Daha ayrıntılı bilgi için, Open-AudIT Knowledge Base\'ı kontrol edin.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Daha fazla bilgi için lütfen bir video içeren aşağıdaki kılavuzu görün. Use Use Use Use Use Use';

$GLOBALS["lang"]['For more information, see'] = 'Daha fazla bilgi için, bakınız';

$GLOBALS["lang"]['form_factor'] = 'Form Faktör';

$GLOBALS["lang"]['Form Factor'] = 'Form Faktör';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Fransa, Fransız Cumhuriyeti';

$GLOBALS["lang"]['free'] = 'Ücretsiz Ücretsiz Ücretsiz';

$GLOBALS["lang"]['Free'] = 'Ücretsiz Ücretsiz Ücretsiz';

$GLOBALS["lang"]['French'] = 'Fransız Fransız Fransız Fransız Fransız';

$GLOBALS["lang"]['French Guiana'] = 'Fransız Guiana';

$GLOBALS["lang"]['French Polynesia'] = 'Fransız Polinezi';

$GLOBALS["lang"]['French Southern Territories'] = 'Fransız Güney Territories';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Sık Sorulan Sorular';

$GLOBALS["lang"]['Friday'] = 'Cuma Cuma Cuma Cuma Cuma';

$GLOBALS["lang"]['From 100 Devices'] = '100\'den fazla cihaz';

$GLOBALS["lang"]['From 500 Devices'] = '500\'den fazla cihazdan';

$GLOBALS["lang"]['From that page'] = 'Bu sayfadan itibaren';

$GLOBALS["lang"]['full_name'] = 'Full Name';

$GLOBALS["lang"]['Full Name'] = 'Full Name';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Tüm bulut, makine tipi ve büyüklüğü gibi normal bir Open-AudIT denetim ve detaylardan tüm ayrıntılarıyla denetim eder.';

$GLOBALS["lang"]['function'] = 'Fonksiyonlar';

$GLOBALS["lang"]['Function'] = 'Fonksiyonlar';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galician';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap Analysis (optional)';

$GLOBALS["lang"]['gateway'] = 'Gateway Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Genrated Tarafından';

$GLOBALS["lang"]['geo'] = 'Geo Geo Geo Geo';

$GLOBALS["lang"]['Geo'] = 'Geo Geo Geo Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Coğrafi Haritalar';

$GLOBALS["lang"]['Georgia'] = 'Georgia Georgia';

$GLOBALS["lang"]['German'] = 'Alman Alman Alman';

$GLOBALS["lang"]['Germany'] = 'Almanya Almanya Almanya Almanya';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat /Long';

$GLOBALS["lang"]['Get News'] = 'Haberler alın';

$GLOBALS["lang"]['Get Started'] = 'Başlayın';

$GLOBALS["lang"]['Get a Free License'] = 'Ücretsiz bir lisans alın';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Open-AudIT platformu ile aşina olun ve bazı özelliklerini keşfedin.';

$GLOBALS["lang"]['Getting Started'] = 'Başlanmaya başladı';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Seçenekleri';

$GLOBALS["lang"]['Global area network'] = 'Global alan ağı ağı';

$GLOBALS["lang"]['Go'] = 'Go Go Go Go';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Open-AudIT sunucunuza geri dönün ve hedef Windows bilgisayar IP Adresi ile altnet olarak bir keşif yaratın (bu tekrar tüm altları keşfetmeyi sağlayacaktır). Keşifi çalıştırın, herhangi bir sorunun notunu alın. Herhangi bir konu için uygun eylemler alın.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Hedef Windows PC\'ye gidin (veya RDP\'yi kullanın) ve keşif credential setiniz tarafından kullanılan kullanıcı olarak giriş yapın.';

$GLOBALS["lang"]['Go to menu'] = 'menüye git';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Go to the Go to the <i>Uygulamalar</i> -> <i>App kayıtları</i> Uzak soldaki menü öğesi. Open-AudIT için arayın. Listedeki Open-AudIT girişine tıklayın (Uygulama Open-AudIT adını verdiğinizi varsayın).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Go to the Go to the <i>Sertifikalar ve sırları</i> menü öğesi altında <i>Yönetim Yönetimi Yönetimi Yönetimi</i> Merkez menüsünde.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Go to the Go to the <i>Single sign-on</i> Menü eşyası ve SAML\'ye tıklayın <i>Tek bir işaret-on yöntemi seçin</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credentials';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Büyük, sonra yardımcı olabilirsiniz! İlk önce Gönder GUI\'de gösterilen metin ve ne gösterilmelidir. Bunu dil dosyasında bu kadar ileriye gideceğimizi, çeviri geliştiriliyor ve her sürüm için güncellemeniz gerekmez!';

$GLOBALS["lang"]['Greater Than'] = 'Greater Than Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Greater Than veya Equals';

$GLOBALS["lang"]['Greece'] = 'Yunanistan Yunanistan';

$GLOBALS["lang"]['Greek'] = 'Yunanca';

$GLOBALS["lang"]['Green Query'] = 'Green Query';

$GLOBALS["lang"]['Greenland'] = 'Grönland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grup Grup Grup Grubu';

$GLOBALS["lang"]['group_by'] = 'Grup Tarafından';

$GLOBALS["lang"]['Group By'] = 'Grup Tarafından';

$GLOBALS["lang"]['group_id'] = 'Grup ID';

$GLOBALS["lang"]['Group ID'] = 'Grup ID';

$GLOBALS["lang"]['groups'] = 'Grup Grup Grupları';

$GLOBALS["lang"]['Groups'] = 'Grup Grup Grupları';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Gruplar gerekli koşulları karşılayan basit cihazlar listesi olarak kullanılır. JSON kullanarak talep edilirse, bir liste döndürür <i>cihazlar.idid</i> Sadece. Web arayüzünü kullanarak talep edilirse, standart sütun özellikleri listesini döndürürler. Gruplar entegrasyonlar, Baselines ve diğer eşyalar için kullanılabilir.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Guest Device ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Guest Device ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Gine';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Gine-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revision';

$GLOBALS["lang"]['Haiti'] = 'Haiti Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hard Drive Index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hardware'] = 'Donanım Donanım';

$GLOBALS["lang"]['hardware_revision'] = 'Donanım Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Donanım Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Bu politika bu organizasyonda uygulandı.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Ajan her zaman en son denetim senaryosu çalıştırır (Eğer Open-AudIT\'i yükseltseniz ve senaryoları hedeflere manuel olarak kopyalayın, sonra cron - bu senaryoları her yükseltme için güncellemeniz gerekir).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Kullanıcınız hızlı bir şekilde bir komut açın (teklemek) <i>Yönetici olarak Run as Administrator</i>). Ajanı indirmek için aşağıdakileri yapıştırın.';

$GLOBALS["lang"]['Head'] = 'Head Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island ve McDonald Adaları';

$GLOBALS["lang"]['Hebrew'] = 'İbranice';

$GLOBALS["lang"]['height'] = 'Yükseklik';

$GLOBALS["lang"]['Height'] = 'Yükseklik';

$GLOBALS["lang"]['Height in RU'] = 'RU\'de Yükseklik';

$GLOBALS["lang"]['Help'] = 'Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Yardım ve Sık Sorulan Sorular';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Bilgi güvenliği risklerini yönetmek ve azaltmak yardımcı olur';

$GLOBALS["lang"]['Hide Audit Window'] = 'Gizle Denetim Pencere';

$GLOBALS["lang"]['high'] = 'Yüksek yüksek yüksek';

$GLOBALS["lang"]['High'] = 'Yüksek yüksek yüksek';

$GLOBALS["lang"]['High Availability'] = 'Yüksek Erişilebilirlik';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Kutsal Görme (Vatik Şehir Devleti)';

$GLOBALS["lang"]['Home'] = 'Home Home Home Home';

$GLOBALS["lang"]['home'] = 'Home Home Home Home';

$GLOBALS["lang"]['Home Area Network'] = 'Ev Alan Ağı';

$GLOBALS["lang"]['Home area network'] = 'Ev alanı ağı';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host Host Host';

$GLOBALS["lang"]['Host'] = 'Host Host Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Saat Saat Saat';

$GLOBALS["lang"]['Hour'] = 'Saat Saat Saat';

$GLOBALS["lang"]['How Does It Work?'] = 'Nasıl çalışır?';

$GLOBALS["lang"]['How Does it Work?'] = 'Nasıl çalışır?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Ne kadar uzun sürer';

$GLOBALS["lang"]['How and Why is'] = 'Nasıl ve Neden';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Nasıl ve Neden Açık-AudIT Daha Güvenli';

$GLOBALS["lang"]['How do they work?'] = 'Nasıl çalışıyorlar?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Bir Device Seed Discovery bilinen IP\'leri nasıl bulur?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Komutan ne kadar süre idam etmeyi başardı.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Nmap bir yanıt için ne kadar süre beklemeli, cihaz başına.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Bu rafa kaç tane devre beslenir.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kaç politika başarısız oluyor.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Bir geçişte kaç politika sonuçları.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Bu rafta kaç tane güç soketi.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Yükseklikte kaç tane raf birim bu raf.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'koleksiyoncu bir görev için sunucuya ne sıklıkta sormalıdır.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Bir Attribute, Query veya Grup Kullanımı için cihazlar nasıl seçiliriz.';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'kırılganlık nasıl sömürüldü (örneğin, Network, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'Nasıl kıyaslanılır';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'kırılganlığın insan hazır açıklaması.';

$GLOBALS["lang"]['Hungarian'] = 'Macar';

$GLOBALS["lang"]['Hungary'] = 'Macaristan Macaristan';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'EULA\'yı okudum.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Umarım bu yazı, Open-AudIT ve Güvenlik hakkında sahip olduğunuz herhangi bir endişeyi hafifletti. Eğer herhangi bir sorunuz varsa, lütfen FirstWave\'de bize ulaşmak için tereddüt etmeyin. Endişelerinizi ve ihtiyaçlarınızı tartışmak için her zaman mutluuz. Ve belki de sorunuz burada ele aldığım bir şey değilse, gelecekteki kullanıcılar için buraya ekleyebilirim';

$GLOBALS["lang"]['id'] = 'ID ID ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'ÖNEMLİ';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP IP IP IP';

$GLOBALS["lang"]['ip'] = 'IP IP IP IP';

$GLOBALS["lang"]['IP Address'] = 'IP Adresi';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set Tarafından';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 sadece.';

$GLOBALS["lang"]['Iceland'] = 'İzlanda İzlanda';

$GLOBALS["lang"]['icon'] = 'Icon Icon';

$GLOBALS["lang"]['Icon'] = 'Icon Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icon and Text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icon only, text only or icon and text.';

$GLOBALS["lang"]['id_internal'] = 'Id Internal';

$GLOBALS["lang"]['Id Internal'] = 'Id Internal';

$GLOBALS["lang"]['id_number'] = 'Id Number';

$GLOBALS["lang"]['Id Number'] = 'Id Number';

$GLOBALS["lang"]['identification'] = 'Tanımlama';

$GLOBALS["lang"]['Identification'] = 'Tanımlama';

$GLOBALS["lang"]['Identify information assets'] = 'Bilgi varlıklarını tanımlamak';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'İlgilenen partiler ve onların gereksinimleri';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Anahtar paydaşları tanımlayın ve rolleri tayin edin';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Cihazı (s) tanımlayın, bu sizin exemplary, ya da <i>altın görüntü</i> Benzer cihazları karşı karşılaştırmak istiyorsunuz.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Güvenlik risklerini tanımlamak ve değerlendirmek';

$GLOBALS["lang"]['If'] = 'If if if if if if if if if if if if if if if if if if if if if if if if if';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Bir cihaz bireysel olarak kullanılarak keşfedildiyse <i>Discover Device</i> Cihazın ayrıntıları sayfasındaki bağlantı, bu cihazın daha önce (by Discovery) keşfedildiğini ve eğer öyleyse, bu taramadan keşif seçeneklerini kullanın. Daha önce keşfedildiyse, yapılandırma öğe keşif_default_scan_option the settings.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Yeni bir Org oluşturulursa, bir LDAP grubu adı otomatik olarak isimden elde edilir. Örneğin, yeni bir Org oluşturulsa ve Test denirse, ilgili LDAP grubu açık-audit_orgs_test olarak adlandırılacaktır.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Bir liman filtrelenen ile yanıt verirse, mevcut olduğunu düşünmeliyiz.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Bir liman açık filtre ile yanıt verirse, mevcut olduğunu düşünmeliyiz.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Uzak bir cihaz Open-AudIT seçilmiş cihazlarda mevcut değilse, dış sistemden silmeliyiz.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudIT cihazı değiştirildiyse, dış sistemi güncellemeliyiz.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Open-AudIT cihazı dış sistemde değilse, bunu yaratmalıyız.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Bir ajan birincil IP\'sini bu subnet\'te rapor ederse, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Eğer bunlardan herhangi biri (ortalama, hiçbir yer) liman tespit edilirse, SSH\'nin onları çalıştırdığını ve denetim için kullanıldığını varsayın. Bu limanı Özel TCP limanlarına eklemeye gerek yok - otomatik olarak eklenecektir.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Hiçbir operatör belirtmezse, varsayılan =. Özellikler tamamen kalifiye olmalıdır - ie, cihazlar.hostname (sadece hostname değil).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Değer mevcut değilse, bu değeri tedarik edin. EG: sistem için.nmis_group /  configureuraion. grubu kullanıyoruz';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Eğer set, belirli bir cihaz sütunlarının JSON serisine sahipseniz, bu kullanıcı yapılandırma varsayılan olarak diğerini görmeyi seçti.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'OS Ailesi (kul tarafından bildirilen) bu öğeyi içeriyorsa, geç.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Open-AudIT Server\'ın ona raporlaması varsa, ek bir düşüş sağlanır. Görevin hangi çalıştıracağını belirtmeniz için bunu seçebilirsiniz. Sadece Discovery görevleri koleksiyoncular için desteklenmektedir.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ajan OS ailesi (daha duyarlı) bu dizeyi içeriyorsa, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'İkili bu konumlardan birinde bulamazsa, taksitte bir uyarı mesajı gösterilecektir.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Aşağıdaki koşullar karşılanırsa:<br/><ul><li>Bir Rol atanmış bir ad_grup vardır</li><li>Bir Org atanmış bir ad_group</li><li>Bir LDAP Server, yroles set to y y</li><li>Bir kullanıcı LDAP\'da var (aktif Rehber veya OpenLDAP) ve atanmış ad_gruplarda.</li></ul>Bu kullanıcı, Open-AudIT\'in oluşturulması gereken bir hesap olmadan Open-AudIT\'ye giriş yapabilir. Open-AudIT, LDAP\'ı sorgulayacak ve eğer kullanıcı gerekli gruplardaysa, Open-AudIT\'de değil, kullanıcı özellikleri (isim, tam adı, e-posta, roller, orgs, vs) Open-AudIT içinde otomatik olarak yaşayacak ve giriş yapacaklar.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Yerel alan doğruysa (bool) veya y (string) veya Y (string) veya 1 (integer) sonra dış verileri 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Yerel alan doğruysa (bool) veya y (string) veya Y (string) veya 1 (integer) sonra dış verileri y\'ye ayarlar.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'birincil IP (kullanıcı tarafından bildirilen) bu subnet\'te ise geçiştir.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Kullanıcı hesabı aslında Open-AudIT içinde mevcut değilse ve <code>use_authorisation</code> Set, kullanıcı oluşturulacaktır. Eğer var ise, e-posta gibi ayrıntılar, tam adı, vb.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Kullanıcının da geçerli kimlikleri yoksa en azından bir Open-AudIT Rol ve Grup\'ta değil ( ne zaman kullanılır) <code>use_authorisation</code>), Open-AudIT yerel Open-AudIT kullanıcı bilgilerini kullanmak ve orada doğrulama ve yetkilendirmek için geri dönecek. Bunu başarısız olursa, kullanıcı erişimi reddedecektir.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Kullanıcı Open-AudIT\'ye giriş yapmak LDAP\'ı aramak için erişime sahip değilse, bu erişimi olan başka bir hesabı kullanabilirsiniz.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Open-AudIT\'ye giriş yapmak OpenLDAP aramak için erişime sahip değilse, bu erişimi olan başka bir hesabı kullanabilirsiniz. Bunu yapılandırmak için dn_account ve dn_password kullanın.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Değer belirlenmezse, mevcut zamantamp kullanılacaktır.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Değer ayarlandığında, o zamantamp değeri kullanılacaktır.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Bu değişiklik sizin için çalışmıyorsa, hepsi kaybolmaz. Bir yapılandırma öğesi ekledik ( varsayılan olarak n\'a kadar, bu yüzden bu yeni seçeneği kutudan kullanmayacak) keşif_use_org_id_match. Eğer bunu y\'ye değiştirirseniz, OrgID, keşif tarafından cihaza atanan OrgID ilgili maç kurallarında kullanılacaktır.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Eğer bu birçok dakika (veya daha fazla) cihazı son gören sunucudan geçtiyse, geç.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Bu çok veya daha fazla dakika, cihaz sunucuyla temasa geçtiyse, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Bu gerçekleşirse, gördüğünüz konu web sayfasında kullanılan masa kontrolü ile ilgilidir. Sadece mevcut sayfa için çek kutularının durumunu hafızada depolar. Seçimler yaparsanız, o zaman sayfayı ileri / geri döndürür. Bununla birlikte, her sayfada gösterilen cihazların sayısını genişleterek istediğiniz şeyi gerçekleştirebilirsiniz. Üst sol köşede, “sayfada kayıt altına alınanlar” bir damla etiket; Bulk Edit için seçtiğinize kadar gösterilen giriş sayısını genişletmek için bunu kullanın.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Sanık yönetimi yazılımı tespit edersek, sorgudan önce otomatik bir keşif yapmalıyız.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Bir Konum Type eklerseniz, bu simgeleri ekleyin';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Bir cihaz tipi eklerseniz, ilişkili simgeyi görüntülemek için . the formatlı dosyayı dizinine manuel olarak kopyalamanız gerekir.';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Desteklenen bir FirstWave müşteriyseniz, birkaç ürün daha kolay yardımcı olacaktır. FirstWave ile bir destek bileti açın ve logfile ekleyin. Ayrıca, Destek düğmesinden üst sağdaki çıktıyı da içerir.';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Desteklenen bir müşteriyseniz ve FirstWave ile bir destek bileti açın, lütfen bu dosyaları ekleyin.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Google Maps API anahtarları veya şirketiniz ile ilgili sorunlarınız varsa Google Maps API anahtarları oluşturmak için erişime sahip değildir, lütfen FirstWave destek ekibiyle iletişime geçin.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Windows veya NMIS sunucunuzdaysanız, bu sunucuya erişmek için URL, kullanıcı adı ve şifre tedarik etmeniz gerekir.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Eğer iyi bir geniş kapsamlı veya ethernet bağlantısındaysanız, her zaman kullanmayı öneririm -T4 (Aggressive). Bazı insanlar seviyor -T5 (Insane) tadım için çok agresif olsa da. İnsanlar bazen belirtmişlerdir -T2 (Polite) çünkü ev sahibi olma olasılığı daha az olduğunu düşünüyorlar veya genel olarak kendilerini kibar olduklarını düşünüyorlar. Sık sık yavaş nasıl olduğunu fark etmiyorlar -T2 gerçekten. taramaları varsayılan bir taramadan on kat daha uzun sürebilir. Makine kazaları ve bant genişliği sorunları varsayılan zamanlama seçenekleri ile nadirdir -T3 (Normal) ve bu yüzden normalde dikkatli tarayıcılar için tavsiye ederim. Bu sorunları azaltmak için zamanlama değerleri ile oynamaktan çok daha etkilidir.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Bir RedHat veya Centos sistemi çalıştırıyorsanız ve Nmap\'u yükseltmişseniz, lütfen SUID\'yi ikilide ikiliye sıfırlayın';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Linux\'ta Open-AudIT sunucusu kullanıyorsanız, bu sizi etkilemez.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Pencerede Open-AudIT kullanıyorsanız veya NMIS sunucunuz Open-AudIT Server\'da değil (bazı Linux yüklemeleri durumunda), erişim bilgilerini ve bir URL\'yi uzaktan NMIS\'ye tedarik etmeniz gerekir - ama hepsi bu! Evet - NMIS ve Open-AudIT arasındaki entegrasyonlar artık Windows tabanlı Open-AudIT ile çalışır!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Bir koleksiyoncuyu seçerseniz, bir sonraki 5 dakikalık sınırda uygulamak planlanıyor.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Normalde set cihazlar_assigned_to_org ve yapılandırma öğesi etkinleştirilirse, o zaman OrgID maçı daha da rafine etmek için kullanılacaktır.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Normalde ayarlanmış cihazlar_assigned_to_org değilseniz, o zaman hiçbir etkisi olmayacaktır. OrgID\'i yalnızca keşifte ayarlandığında (veya bir denetim senaryosunda manuel olarak) kontrol ediyoruz ve konfigürasyonda etkinleştiririz.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Yapı malzemesini etkinleştirseniz, bir Org atamak için keşif kullanın ve sonra keşifden sonra bir cihazın OrgID\'i değiştirirseniz, muhtemelen bir dahaki sefere keşif çalışır. Bu örnekte, daha sonraki keşifleri çalıştırmadan önce muhtemelen sadece başlangıçsız cihazlar_assigned_to_org olmalıdır. Bu, çünkü (örneğin) Open-AudIT’e söylemiştiniz <i>Bu keşiften bu cihazlar Org X\'e ait<i>Ama sonra cihazın Org\'unu değiştirdi. Depolama cihazları bilgilerini değiştirdiniz. Bu durumda - Org X\'e ait bir cihaz yoktur, bu yüzden yeni bir tane yaratırız.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Anti-Virus yazılımı çalışıyorsanız, Opmantek (omkd), Apache (apache2.2) ve Natasha (mysql) otomatik olarak başlamak ve çalıştırmak önemlidir. Bu hizmetler Open-AudIT tarafından kullanılıyor. Sadece bunu bir kez yapmanız gerekir. Anti-Virus programınız sizi Open-AudIT hakkında yönlendirmeye devam ederse, forumlara gönderin veya Anti-Virus yazılımınızın adı ve versiyonu ile destek için bir e-posta gönderin.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Çalışan bilgileriniz varsa, mümkün olan tüm bilgi miktarını bekleyebilirsiniz.<br/><br/>Açıkçası, Open-AudIT\'i kullanmak için en iyi yol, keşfettikleri cihazlar için çalışma bilgilerini sağlamaktır (onlar WMI, SSH veya SNMP kimlikleri).<br/><br/>Ayrıca kimliksiz denetimde bir sayfamız var.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Eğer \"id\" alanını içeriyorsanız <strong>ve</strong> Bunu bir numara ile ayarlayın, bu öğe, yaratılandan ziyade güncellenecektir.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Aktif Rehber erişimi yapılandırmanız gerekiyorsa, genellikle örneklerini kullanabilirsiniz <code>cn=Users,dc=your,dc=domain,dc=com</code> Senin için <code>base_dn</code>. Belirlenmesi gerek yok <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Kullanıcılarınız için OpenLDAP erişimi yapılandırmanız ve belirli bir kullanıcı erişim DN normalde normaldir. <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> O zaman ayarlamanız gerekir <code>base_dn</code> tom için <code>dc=your,dc=domain,dc=com</code> ve <code>user_dn</code> tom için <code>uid=@username@@domain,cn=People</code>. Özel kelimeler <code>@username</code> ve <code>@domain</code> Kullanıcınız tarafından giriş sayfasında verilen giriş ayrıntılarıyla değiştirilecektir.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Eğer Server\'ın (veya Kollektif) doğrudan kurulduğuna dair bir altnet üzerinde keşif yaparsanız, aşağıdaki cihazları yanıtlama için bekleyebilirsiniz.';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Sunucunuzun (veya koleksiyoncu) doğrudan yüklenmediği bir subnet üzerinde keşif yaparsanız, yanıt cihazları için aşağıdakileri bekleyebilirsiniz.';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Bir Liste türünü seçerseniz, ek bir alan Değerler olarak görünecektir. Burada seçici değerlerin ayrı bir listesini koymanız gerekir. Bunlar, alan ne zaman ayarlandığında bir damla kutuda sergilenecektir.';

$GLOBALS["lang"]['If you set the values for'] = 'Eğer değerler için ayarlarsanız';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Ajanlarınızı belirli bir yapılandırmayı kullanmaya zorlamak istiyorsanız, aşağıdaki ajanların kimliklerini kullanabilirsiniz ( Ajans girişi sayısı ile $ 1 dolar). Bu Ajan kurulduktan sonra, bu, huriyer ve <strong>Sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece sadece</strong> Bir kişinin bireysel olduğunu kontrol edin Ajan girişleri (testler ve eylemler). Bu, bir MSP iseniz yararlı olabilir - belirli bir müşteri için bir Agents girişi oluşturmak ve tüm cihazların bu girişi kullanmasına sahip olabilir, bu onları bir Org ve Konum olarak tayin eder.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Anlaşmayı kazmak ve dönüştürmek istiyorsanız, Gelişmiş düğmeye tıklayın (ve boğulmamaya çalışın!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Eğer dışlanmış bir cihazda bir Discovery çalıştırmak istiyorsanız, seçeneği seçin ve Entegrasyon oluşturulduğunda, bu yüzden Discovery\'i seçin.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Discovery dışındaki senaryoyu kullanmak istiyorsanız, başka bir uç noktası yarattık <i>Senaryolar</i>. Belgeler bakınız';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Kullanıcınız sahip değilse <i>Yönetici olarak Run as Administrator</i> Haklar, yine de ajanı (ilk komut yukarıdaki) indirebilir ve aşağıda bir denetim sunmak için çalıştırabilirler. Ajanın yüklenmesi veya planlanması olmadan tek bir denetim olacaktır.';

$GLOBALS["lang"]['ifadminstatus'] = 'Eğeradminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Eğeradminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore Invalid SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignored';

$GLOBALS["lang"]['image'] = 'Image Image Image';

$GLOBALS["lang"]['Image'] = 'Image Image Image';

$GLOBALS["lang"]['Images'] = 'Fotoğraflar';

$GLOBALS["lang"]['impact_availability'] = 'Etkilenebilirlik';

$GLOBALS["lang"]['Impact Availability'] = 'Etkilenebilirlik';

$GLOBALS["lang"]['impact_confidentiality'] = 'Etkisi Gizlilik';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Etkisi Gizlilik';

$GLOBALS["lang"]['impact_integrity'] = 'Etkisi';

$GLOBALS["lang"]['Impact Integrity'] = 'Etkisi';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Seçilen kontroller ve prosedürler';

$GLOBALS["lang"]['Implementation'] = 'Uygulama Uygulama Uygulama Uygulama';

$GLOBALS["lang"]['implementation_notes'] = 'Uygulama Notları';

$GLOBALS["lang"]['Implementation Notes'] = 'Uygulama Notları';

$GLOBALS["lang"]['Import'] = 'İthalat';

$GLOBALS["lang"]['Import Example Data'] = 'İthalat Örnek Data';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Birden fazla {collection} bir CSV kullanarak.';

$GLOBALS["lang"]['improvement_opportunities'] = 'İyileştirme Fırsatları';

$GLOBALS["lang"]['Improvement Opportunities'] = 'İyileştirme Fırsatları';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'İş sürekliliğini ve dayanıklılığını geliştirin';

$GLOBALS["lang"]['In'] = 'In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'İkinci bir sekmede veya pencere sizin OKTA konsoluna gider ve tıklayın <i>Create App Integration</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'İkinci bir sekmede veya pencere işareti-on\'a';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Kişisel görüşüme göre, ağınızdaki her bir öğeyi bulmak ve denetlemek için en iyi yol, bu subnet\'e sınırlı olan bir Tohum Discovery\'dir. Tohum Discoveries tek bir cihaz kaçırmamak için geçiş, yönlendirici ve bilgisayar MAC Adres masalarını kullanır. Ağa bağlıysa ve TCP/IP kullanıyorsa, bir geçiş/router/bilgisayar bunun olduğunu bilmek zorundadır - bu sadece TCP/IP nasıl çalışır. Bunu özel TCP ve / veya UDP portları ile birleştirin ve sonra cihazı da belirleyebilmeniz gerekir. Ama bu sadece kişisel tercihim';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Open-AudIT’in öğeleri üzerinde kullanıcı izinlerini uygulayabilmeleri için, kullanıcısını yetkilendiririz. <code>WHERE @filter</code>. Bu formatı kullanmıyorsanız, sorguCreateForm bir uyarı atacaktır. Yalnızca yönetici rolü olan kullanıcılar bu özelliği olmayan sorgular oluşturmak için izin verilir ve hatta o zaman sadece yapılandırma materyalinden sonra <i>Gelişmiş_queries</i> etkinleştirildi.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Google Haritalar\'ı etkinleştirebilmek için Google API Key bu bağlantıyı takip edecek ve oturum açmanız gerekir. Google hesabı,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Azure Rest API\'sini kullanmak için, kimlik doğrulama için kullanılan bir Azure Active Directory uygulaması oluşturmanız gerekir.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Bu işlevselliği kullanmak için, yapılandırmada etkinleştirilmelidir - tıklayın';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In the (comma seperated) list';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Davada <code>in</code> ve <code>notin</code>, yuvarlak para birimlerindeki değerleri kapatıp onları bir komün kullanarak ayırmanız gerekir (sadece bir komün değil, bir komün değil, sonra uzay).<br/><br/>Bu operatörlerle oldukça kapsamlı bir şekilde filtreleyebilirsiniz.<br/><br/>Birden fazla sütunda veri ve filtre eklediğinizde, bu sütunlar bir araya getirilir <strong>Ve</strong>. Bir filtre kullanamazsınız <strong>VEYA</strong> Durum. Buna ek olarak, <code>notin</code>En çok arama çalışmasını elde edebilirsiniz. Ve gerçekten desteklenmeyen ve karmaşık seçimlere ihtiyaç duyanlar için, her zaman gerçek bir sorgu yazabilirsiniz.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Birkaç alanı (genellikle JSON formatında) bir BÜYÜKTEXT Natasha alanında (örneğin: kimlikler. Referanslar - Bilgi masasındaki kimlik sütunu, format kullanmanız gerekir';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Komuta hızlı bir kabukta, indirme rehberine gidin (muhtemelen) <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inaktif';

$GLOBALS["lang"]['Incomplete'] = 'Tamamlandığında';

$GLOBALS["lang"]['Index'] = 'Index Index Index Index';

$GLOBALS["lang"]['India'] = 'Hindistan Hindistan';

$GLOBALS["lang"]['Indonesia'] = 'Endonezya';

$GLOBALS["lang"]['Indonesian'] = 'Endonezya';

$GLOBALS["lang"]['Info'] = 'Info Info';

$GLOBALS["lang"]['Information only.'] = 'Sadece bilgi.';

$GLOBALS["lang"]['Informational'] = 'Bilgi';

$GLOBALS["lang"]['initial_size'] = 'İlk Boyut';

$GLOBALS["lang"]['Initial Size'] = 'İlk Boyut';

$GLOBALS["lang"]['Initial login credentials are'] = 'İlk giriş bildirimleri';

$GLOBALS["lang"]['Initiation'] = 'Initiation';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Giriş giriş';

$GLOBALS["lang"]['Input Type'] = 'Giriş Türü';

$GLOBALS["lang"]['inputs'] = 'Girişler';

$GLOBALS["lang"]['Inputs'] = 'Girişler';

$GLOBALS["lang"]['Insane'] = 'Insan';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Yeni bir {collection} giriş yapın.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Örneğin veriler ekleyin ve tüm bu Open-AudIT size söyleyebilir.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Ekle your Satın alındı Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['install'] = 'Yükleme';

$GLOBALS["lang"]['Install'] = 'Yükleme';

$GLOBALS["lang"]['install_date'] = 'Yükleme Tarihi';

$GLOBALS["lang"]['Install Date'] = 'Yükleme Tarihi';

$GLOBALS["lang"]['install_directory'] = 'Yükleme';

$GLOBALS["lang"]['Install Directory'] = 'Yükleme';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Gerekirse OpenScap\'ı yükleyin';

$GLOBALS["lang"]['install_source'] = 'Yükleme Kaynağı';

$GLOBALS["lang"]['Install Source'] = 'Yükleme Kaynağı';

$GLOBALS["lang"]['Install Support'] = 'Yükleme Desteği';

$GLOBALS["lang"]['installed_by'] = 'Tarafından';

$GLOBALS["lang"]['Installed By'] = 'Tarafından';

$GLOBALS["lang"]['installed_on'] = 'Yüklemek için';

$GLOBALS["lang"]['Installed On'] = 'Yüklemek için';

$GLOBALS["lang"]['Installing'] = 'Yükleme';

$GLOBALS["lang"]['Installing on Linux'] = 'Linux üzerinde yükleme';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOS üzerinde yükleme';

$GLOBALS["lang"]['Installing on Windows'] = 'Windows üzerinde yükleme';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instance Options';

$GLOBALS["lang"]['Instance Options'] = 'Instance Options';

$GLOBALS["lang"]['instance_provider'] = 'Instance Provider';

$GLOBALS["lang"]['Instance Provider'] = 'Instance Provider';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance Rezervasyon Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance Rezervasyon Ident';

$GLOBALS["lang"]['instance_state'] = 'Instance State';

$GLOBALS["lang"]['Instance State'] = 'Instance State';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Instance Type';

$GLOBALS["lang"]['Instance Type'] = 'Instance Type';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'entegrasyon';

$GLOBALS["lang"]['integrations'] = 'Bütünleşmeler';

$GLOBALS["lang"]['Integrations'] = 'Bütünleşmeler';

$GLOBALS["lang"]['integrations_id'] = 'Entegrasyonlar ID';

$GLOBALS["lang"]['Integrations ID'] = 'Entegrasyonlar ID';

$GLOBALS["lang"]['integrations_log'] = 'Entegrasyonlar Log';

$GLOBALS["lang"]['Integrations Log'] = 'Entegrasyonlar Log';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Anlaşmazlıklar istenen olarak planlanabilir. Bu kullanıcıya bırakılır.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Entegrasyonlar Keşfetler, Queries, et al olarak planlanabilir.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Etkileşimli Dashboards';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Etkileşimli panjurlar, BT ekiplerinin yeni keşfedilen cihazlar ve alışılmadık cihaz davranışını bir bakışta gerçekleştirmesine olanak sağlar.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Type';

$GLOBALS["lang"]['Interface Type'] = 'Interface Type';

$GLOBALS["lang"]['Internal'] = 'İç İç İç İç';

$GLOBALS["lang"]['Internal Audit'] = 'İç Denetim';

$GLOBALS["lang"]['Internal Audit & Review'] = 'İç Denetim & İnceleme';

$GLOBALS["lang"]['Internal Field Name'] = 'İç Alan Adı';

$GLOBALS["lang"]['Internal ID'] = 'İç kimlik';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Bu kullanıcı için geçerli erişim jetonlarının iç JSON serisi.';

$GLOBALS["lang"]['Introduction'] = 'Giriş Giriş';

$GLOBALS["lang"]['invoice'] = 'Fatura';

$GLOBALS["lang"]['Invoice'] = 'Fatura';

$GLOBALS["lang"]['invoice_id'] = 'Fatura ID';

$GLOBALS["lang"]['Invoice ID'] = 'Fatura ID';

$GLOBALS["lang"]['invoice_item'] = 'Fatura';

$GLOBALS["lang"]['Invoice Item'] = 'Fatura';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Address Dış A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Address Dış A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Address Dış B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Address Dış B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Address Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Address Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Address Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Address Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Denetim Edildi';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Denetim Edildi';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Iran'] = 'İran İran';

$GLOBALS["lang"]['Iraq'] = 'Irak Irak Irak Irak';

$GLOBALS["lang"]['Ireland'] = 'İrlanda İrlanda İrlanda';

$GLOBALS["lang"]['Irish'] = 'İrlandalı İrlandalı';

$GLOBALS["lang"]['Is FRU'] = 'FRU';

$GLOBALS["lang"]['is_fru'] = 'Fruru';

$GLOBALS["lang"]['Is Fru'] = 'Fruru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'NMIS sunucusu yerel (bu Open-AudIT sunucusu) veya uzaktan mı?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Bu hesap aktif mi? Eğer ayarlanırsa <code>n</code>Ancak kullanıcı logon yapamaz.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Bu sorgu lisanslı müşterilere sınırlı.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Bu görev etkinleştirilir (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'İsrail İsrail İsrail';

$GLOBALS["lang"]['Issue'] = 'Sorun';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['issuer_name'] = 'Issuer Name';

$GLOBALS["lang"]['Issuer Name'] = 'Issuer Name';

$GLOBALS["lang"]['Issues'] = 'Sorunlar';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Bu <i>Just Works Just Works</i> NMIS ile';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Menu ->\'de mevcuttur Yardım -> Yardım';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Open-AudIT\'in bir maça ayarlandığından emin olmak önemlidir. <i>y</i> Açık-AudIT için tam olarak (ve boş olma) eşleştirmeli, keşfedilen cihazın zaten veritabanında bir cihaz oynadığını belirlemek için. Eğer özelliklerin hiçbiri işaretlenmedi <i>y</i> Maç, sonra yeni bir cihaz girişi oluşturulacak, bu da yinelenen cihaz girişlerine neden olabilir. Özelliklerin tekrarlandığı durumlarda, örneğin bir dbus_id bir VM klonu sırasında kopyalanır, sonra mevcut bir cihaz, eksik cihazlarda ortaya çıkan yeni bir girişin yanlış şekilde tekrarlanabilir.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Verilen bir Organizasyonda çakışan bir adres alanına sahip olmak nadir değildir. İdeal değil, ama nadir değil.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'İkinci katmanlı anneboard üreticilerinin bunu ayarlaması çok yaygındır, hepsini ayarlamak için <i>0 0 0 0</i>s veya hatta hepsi <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'İtalyan İtalyanca';

$GLOBALS["lang"]['Italy'] = 'İtalya İtalya İtalya';

$GLOBALS["lang"]['Items not in Baseline'] = 'Basel\'de olmayan öğeler';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON için';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika Jamaika';

$GLOBALS["lang"]['January'] = 'Ocak Ocak Ocak Ocak';

$GLOBALS["lang"]['Japan'] = 'Japonya Japonya Japonya';

$GLOBALS["lang"]['Japanese'] = 'Japon Japonca';

$GLOBALS["lang"]['Jersey'] = 'Jersey Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan Jordan';

$GLOBALS["lang"]['July'] = 'Temmuz Temmuz Temmuz Temmuz';

$GLOBALS["lang"]['June'] = 'Haziran Haziran Haziran Haziran';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakistan Kazakistan Kazakistan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Analog Version';

$GLOBALS["lang"]['Kernel Version'] = 'Analog Version';

$GLOBALS["lang"]['Key'] = 'Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['Key Components'] = 'Anahtar bileşenleri';

$GLOBALS["lang"]['Key Password (optional)'] = 'Anahtar Şifre (bağlayıcı)';

$GLOBALS["lang"]['keys'] = 'Anahtarlar';

$GLOBALS["lang"]['Keys'] = 'Anahtarlar';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Kore Kore';

$GLOBALS["lang"]['Korean'] = 'Koreli';

$GLOBALS["lang"]['Kuwait'] = 'Kuveyt';

$GLOBALS["lang"]['Kyrgyz'] = 'Kırgız Kırgız';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kırgız Cumhuriyeti';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Group Group';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP bu kullanıcı için aradı ve onların hesabı bulundu.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP bu kullanıcı için aradı ve onların hesabı bulunamadı. LDAP sunucu loglarını kontrol edin. Kullanıcı bildirimleri işe yaradı, ancak kullanıcı bulunamadı. Ayrıca, LDAP Server\'ı Open-AudIT\'de yarattığınızda doğru Base DN özelliklerini belirtmiş olduğunuzu kontrol edin.';

$GLOBALS["lang"]['lang'] = 'Lang Lang Lang';

$GLOBALS["lang"]['Lang'] = 'Lang Lang Lang';

$GLOBALS["lang"]['language'] = 'Dil Dili';

$GLOBALS["lang"]['Language'] = 'Dil Dili';

$GLOBALS["lang"]['Lao'] = 'Lao Lao Lao';

$GLOBALS["lang"]['last_changed'] = 'Son değişiklikler';

$GLOBALS["lang"]['Last Changed'] = 'Son değişiklikler';

$GLOBALS["lang"]['last_finished'] = 'Son bitirme tamamlandı';

$GLOBALS["lang"]['Last Finished'] = 'Son bitirme tamamlandı';

$GLOBALS["lang"]['last_logon'] = 'Son Logon';

$GLOBALS["lang"]['Last Logon'] = 'Son Logon';

$GLOBALS["lang"]['Last Name'] = 'Son Ad';

$GLOBALS["lang"]['last_os_update'] = 'Son Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Son Os Update';

$GLOBALS["lang"]['last_result'] = 'Son Son Son Son Sonuç';

$GLOBALS["lang"]['Last Result'] = 'Son Son Son Son Sonuç';

$GLOBALS["lang"]['last_run'] = 'Son Run';

$GLOBALS["lang"]['Last Run'] = 'Son Run';

$GLOBALS["lang"]['last_seen'] = 'Son Seen';

$GLOBALS["lang"]['Last Seen'] = 'Son Seen';

$GLOBALS["lang"]['last_seen_by'] = 'Son Seen Yemin olsun';

$GLOBALS["lang"]['Last Seen By'] = 'Son Seen Yemin olsun';

$GLOBALS["lang"]['last_user'] = 'Son Kullanıcı';

$GLOBALS["lang"]['Last User'] = 'Son Kullanıcı';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Son olarak WMI. Linux\'ta olduğu gibi Windows için, yönetici düzeyinde erişime sahip bir kullanıcı tercih edilir (Viki\'de Hedef Oluşturucuna bakın).';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'hayali';

$GLOBALS["lang"]['Latitude'] = 'hayali';

$GLOBALS["lang"]['Latvia'] = 'Letonya Letonya Letonya';

$GLOBALS["lang"]['Latvian'] = 'Letonya';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Hesabı';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Hesabı';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Öğrenme Hakkında Öğrenin';

$GLOBALS["lang"]['Learn More'] = 'Daha Fazla Öğrenin';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'Lübnan Lübnan';

$GLOBALS["lang"]['legal_requirements'] = 'Yasal Gereksinimler';

$GLOBALS["lang"]['Legal Requirements'] = 'Yasal Gereksinimler';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Daha az';

$GLOBALS["lang"]['Less Than or Equals'] = 'Daha az veya eşitler';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Girişi debug\'a ayarlayalım. Dosyayı kopyalayın:';

$GLOBALS["lang"]['level'] = 'Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Düzey';

$GLOBALS["lang"]['Level'] = 'Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Düzey';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Kullanılması gereken ayrıcalıkların seviyesi (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberya';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Kütüphaneler (ie, başka bir programın dahil olabileceği kod). Bunlar genellikle Wordpress uzantıları, drupal uzantıları, node.js kütüphaneleri, Android / iPhone / Windows kütüphaneleri, python kütüphaneleri gibi öğelerdir.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libya Arap Jamahiriya';

$GLOBALS["lang"]['License'] = 'Lisans Lisans Lisans Lisans Lisans Lisans Lisans';

$GLOBALS["lang"]['License Key'] = 'Lisans Anahtar';

$GLOBALS["lang"]['License Required'] = 'Lisans Gerekli';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Lisanslı kullanıcılar, uygun gördüğünüz gibi kuralları eklemek veya değiştirmek için ücretsizdir. Bir SNMP OID ile bir cihazınız varsa, dosyada zaten bir modelle eşleşmez - şimdi kolayca ekleyebilirsiniz. Bir yama sağlamak ve sizin için kod tabanına eklemek için bizi daha fazla beklemeyin.<br/><br/>Bir Kuralları girişi yarattığınızda, bir giriş ve çıkış listesini ve çıktıları vermeniz gerekir. Girişler ve çıkışlar veritabanı içinde JSON dizileri olarak depolanır.<br/><br/>Girişler bir masa ve özellik, bir operatör ve bir değere sahiptir. Durum uygularken, bu şekilde çalışır: Eğer $ . $attribute $operator $value o zaman çıktıları uygulayın.<br/><br/>Bir SNMP OID\'i eşleştirmek için örnek bir kural ve model aşağıdadır.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Lisanslar';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Diğer özelliklerin çoğu gibi, Ek Alanlar toplu olarak düzenlenebilir. Bulk Edit işlevini normalde olduğu gibi kullanın ve ek Fields giriş için kullanılabilir göreceksiniz.';

$GLOBALS["lang"]['Like versus Equals'] = 'eşitlere karşı gibi';

$GLOBALS["lang"]['limit'] = 'Limit Limit Limit Limit';

$GLOBALS["lang"]['Limit'] = 'Limit Limit Limit Limit';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Soruyu ilk X öğelerine sınırlayın.';

$GLOBALS["lang"]['Limited to 100 rows.'] = '100 satıra sınırlı.';

$GLOBALS["lang"]['line_amount'] = 'Line';

$GLOBALS["lang"]['Line Amount'] = 'Line';

$GLOBALS["lang"]['Line Graph'] = 'Line';

$GLOBALS["lang"]['line_number_a'] = 'Line Numarası A';

$GLOBALS["lang"]['Line Number A'] = 'Line Numarası A';

$GLOBALS["lang"]['line_number_b'] = 'Line Number B';

$GLOBALS["lang"]['Line Number B'] = 'Line Number B';

$GLOBALS["lang"]['line_text'] = 'Line Text';

$GLOBALS["lang"]['Line Text'] = 'Line Text';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Line grafikler tarih veya benim_date, açıklama veya my_description and count geri gelmelidir.';

$GLOBALS["lang"]['link'] = 'Link Link Link Link';

$GLOBALS["lang"]['Link'] = 'Link Link Link Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Linked Files';

$GLOBALS["lang"]['links'] = 'Linkler Linkler';

$GLOBALS["lang"]['Links'] = 'Linkler Linkler';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Bu keşifleri ilişkili buluta (eğer gerekirse). Bağlantılar için bağlantılar <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Bağlantılar için bağlantılar <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Bağlantılar için bağlantılar <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Bağlantılar için bağlantılar <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux Paketleri';

$GLOBALS["lang"]['List'] = 'Liste Listesi';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Tüm NMAP Ports, Her Cihaz için Protokoller ve Programlar';

$GLOBALS["lang"]['List Devices'] = 'Liste Cihazları Listesi';

$GLOBALS["lang"]['List Discoveries'] = 'Liste Discoveries';

$GLOBALS["lang"]['list_table_format'] = 'Masa Biçimi';

$GLOBALS["lang"]['List Table Format'] = 'Masa Biçimi';

$GLOBALS["lang"]['List Tables'] = 'Liste Tables';

$GLOBALS["lang"]['Lithuania'] = 'Litvanya';

$GLOBALS["lang"]['Lithuanian'] = 'Litvanyalı';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Yerel Yerel Yerel Yerel Yerel';

$GLOBALS["lang"]['Local Area Network'] = 'Yerel Alan Ağı';

$GLOBALS["lang"]['local_port'] = 'Local Port';

$GLOBALS["lang"]['Local Port'] = 'Local Port';

$GLOBALS["lang"]['Local area network'] = 'Yerel alan ağı';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Yerelleşme Yerelleşme';

$GLOBALS["lang"]['Location'] = 'Konum Location';

$GLOBALS["lang"]['Location A'] = 'Konum A Location A';

$GLOBALS["lang"]['Location B'] = 'Konum B';

$GLOBALS["lang"]['location_id'] = 'Konum ID';

$GLOBALS["lang"]['Location ID'] = 'Konum ID';

$GLOBALS["lang"]['location_id_a'] = 'Konum ID A';

$GLOBALS["lang"]['Location ID A'] = 'Konum ID A';

$GLOBALS["lang"]['location_id_b'] = 'Konum ID B';

$GLOBALS["lang"]['Location ID B'] = 'Konum ID B';

$GLOBALS["lang"]['location_latitude'] = 'Konum';

$GLOBALS["lang"]['Location Latitude'] = 'Konum';

$GLOBALS["lang"]['location_level'] = 'Konum Level';

$GLOBALS["lang"]['Location Level'] = 'Konum Level';

$GLOBALS["lang"]['location_longitude'] = 'Konum Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Konum Longitude';

$GLOBALS["lang"]['Location Name'] = 'Konum Name Name Name';

$GLOBALS["lang"]['location_rack'] = 'Konum Moon';

$GLOBALS["lang"]['Location Rack'] = 'Konum Moon';

$GLOBALS["lang"]['location_rack_position'] = 'Konum Raf Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Konum Raf Position';

$GLOBALS["lang"]['location_rack_size'] = 'Yer';

$GLOBALS["lang"]['Location Rack Size'] = 'Yer';

$GLOBALS["lang"]['location_room'] = 'Konum Room';

$GLOBALS["lang"]['Location Room'] = 'Konum Room';

$GLOBALS["lang"]['location_suite'] = 'Konum Suite';

$GLOBALS["lang"]['Location Suite'] = 'Konum Suite';

$GLOBALS["lang"]['Locations'] = 'Konumlar';

$GLOBALS["lang"]['Locations in this'] = 'Konums in this';

$GLOBALS["lang"]['log'] = 'Log Log Log';

$GLOBALS["lang"]['Log'] = 'Log Log Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['Log Line'] = 'Log Line';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Log Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Log Rotation';

$GLOBALS["lang"]['log_status'] = 'Log Status';

$GLOBALS["lang"]['Log Status'] = 'Log Status';

$GLOBALS["lang"]['Logging in'] = 'Logging in';

$GLOBALS["lang"]['Logical Cores '] = 'Mantıksal Cores ';

$GLOBALS["lang"]['logical_count'] = 'Mantıksal Kont';

$GLOBALS["lang"]['Logical Count'] = 'Mantıksal Kont';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Logs Logs';

$GLOBALS["lang"]['longitude'] = 'Uzunlık';

$GLOBALS["lang"]['Longitude'] = 'Uzunlık';

$GLOBALS["lang"]['low'] = 'Low Low Low Low';

$GLOBALS["lang"]['Low'] = 'Low Low Low Low';

$GLOBALS["lang"]['Lower Case'] = 'Alt Vaka';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Lüksemburg Lüksemburg Lüksemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC Adres';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Üretici yapımcı';

$GLOBALS["lang"]['mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Adres';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS Paketleri';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonya Makedonya';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Risk değerlendirmelerini ve tedavilerini korumak';

$GLOBALS["lang"]['maintenance_expires'] = 'Bakım Açıklamaları';

$GLOBALS["lang"]['Maintenance Expires'] = 'Bakım Açıklamaları';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'My Default Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Bunu bir koleksiyon oluşturun';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malezya Malezya Malezya Malezya';

$GLOBALS["lang"]['Maldives'] = 'Maldivler';

$GLOBALS["lang"]['Mali'] = 'Mali Mali Mali';

$GLOBALS["lang"]['Malta'] = 'Malta Malta Malta Malta';

$GLOBALS["lang"]['Manage'] = 'Yönetim Yönetimi Yönetimi Yönetimi';

$GLOBALS["lang"]['Manage Licenses'] = 'Lisansları Yönetin';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMIS\'da Yönetin';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Olayları ve nonkonformiteleri yönetin';

$GLOBALS["lang"]['Managed'] = 'Yönetilen Yönetilen Yönetilen Yönetişim';

$GLOBALS["lang"]['managed_by'] = 'Tarafından Yönetilen';

$GLOBALS["lang"]['Managed By'] = 'Tarafından Yönetilen';

$GLOBALS["lang"]['Manual Input'] = 'Manual Giriş';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manually kullanıcı tarafından belirlenir, üretime varsayılan.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manually kullanıcı tarafından belirlenir.';

$GLOBALS["lang"]['manufacture_date'] = 'Üretim Tarihi';

$GLOBALS["lang"]['Manufacture Date'] = 'Üretim Tarihi';

$GLOBALS["lang"]['manufacturer'] = 'Üretici yapımcı';

$GLOBALS["lang"]['Manufacturer'] = 'Üretici yapımcı';

$GLOBALS["lang"]['manufacturer_code'] = 'Üretici Kodu';

$GLOBALS["lang"]['Manufacturer Code'] = 'Üretici Kodu';

$GLOBALS["lang"]['Map'] = 'Map Map Map Map Map';

$GLOBALS["lang"]['maps'] = 'Haritalar';

$GLOBALS["lang"]['Maps'] = 'Haritalar';

$GLOBALS["lang"]['March'] = 'Mart Mart Mart Mart Mart';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshall Adaları';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maske Maske';

$GLOBALS["lang"]['Mask'] = 'Maske Maske';

$GLOBALS["lang"]['Match'] = 'Maç';

$GLOBALS["lang"]['match_options'] = 'Maç Seçenekleri';

$GLOBALS["lang"]['Match Options'] = 'Maç Seçenekleri';

$GLOBALS["lang"]['Match Order'] = 'Match Order';

$GLOBALS["lang"]['Match Process'] = 'Match Process';

$GLOBALS["lang"]['match_string'] = 'Maç';

$GLOBALS["lang"]['Match String'] = 'Maç';

$GLOBALS["lang"]['Matching Attribute'] = 'Attribute';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Eşleştirme Cihazları - YagID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Linux Cihazları';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Maç aşağıdaki sırayla yapılır';

$GLOBALS["lang"]['maturity_level'] = 'Maturity Level';

$GLOBALS["lang"]['Maturity Level'] = 'Maturity Level';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Max Dosya Boyutu';

$GLOBALS["lang"]['Max File Size'] = 'Max Dosya Boyutu';

$GLOBALS["lang"]['Max Length'] = 'Max Uzunluk';

$GLOBALS["lang"]['max_size'] = 'Max Boyut';

$GLOBALS["lang"]['Max Size'] = 'Max Boyut';

$GLOBALS["lang"]['May'] = 'Mayıs';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Güvenliklerin saldırıya uğrama olasılığını ölçer ve mevcut sömürü teknikleri, sömürü kodu kullanılabilirliği veya aktif, “in-wild” sömürüye dayanmaktadır.';

$GLOBALS["lang"]['medium'] = 'Medium Medium Medium Medium';

$GLOBALS["lang"]['Medium'] = 'Medium Medium Medium Medium';

$GLOBALS["lang"]['members'] = 'Üye Üyeleri';

$GLOBALS["lang"]['Members'] = 'Üye Üyeleri';

$GLOBALS["lang"]['memory'] = 'Hafıza';

$GLOBALS["lang"]['Memory'] = 'Hafıza';

$GLOBALS["lang"]['memory_count'] = 'Memory Count';

$GLOBALS["lang"]['Memory Count'] = 'Memory Count';

$GLOBALS["lang"]['memory_slot_count'] = 'Memory Slot Count';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memory Slot Count';

$GLOBALS["lang"]['menu_category'] = 'Menü Kategori';

$GLOBALS["lang"]['Menu Category'] = 'Menü Kategori';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'Mesaj';

$GLOBALS["lang"]['Message'] = 'Mesaj';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last modified';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last modified';

$GLOBALS["lang"]['metric'] = 'Metrik';

$GLOBALS["lang"]['Metric'] = 'Metrik';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Alan Ağı';

$GLOBALS["lang"]['Metropolitan area network'] = 'Metropolitan alanı ağ ağı';

$GLOBALS["lang"]['Mexico'] = 'Meksika Meksika';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute Minute';

$GLOBALS["lang"]['Minute'] = 'Minute Minute';

$GLOBALS["lang"]['Minutes'] = 'Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika Dakika';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Son Denetim Büyük olduğundan Dakikalar';

$GLOBALS["lang"]['model'] = 'Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model';

$GLOBALS["lang"]['Model'] = 'Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

$GLOBALS["lang"]['Modified'] = 'Modified';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Mevcut bir senaryoyu değiştirmek';

$GLOBALS["lang"]['module'] = 'Modül Modül';

$GLOBALS["lang"]['Module'] = 'Modül Modül';

$GLOBALS["lang"]['module_index'] = 'Modül Index';

$GLOBALS["lang"]['Module Index'] = 'Modül Index';

$GLOBALS["lang"]['Modules'] = 'Modüller';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco Monaco';

$GLOBALS["lang"]['Monday'] = 'Pazartesi Pazartesi Pazartesi Pazartesi';

$GLOBALS["lang"]['Mongolia'] = 'Moğolistan';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'İzleme ve ölçüm ISMS performans performansı';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro Montenegro';

$GLOBALS["lang"]['month'] = 'Ay Ay';

$GLOBALS["lang"]['Month'] = 'Ay Ay';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Daha fazla Bilgi';

$GLOBALS["lang"]['More Secure'] = 'Daha Güvenli Daha Güvenli';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Daha ayrıntılı SQL, bir aralık içinde grup özellikleri için kullanılabilir. Aşağıda, son görülen tarih aralıkları tarafından görülen bir pasta grafiğinde görülmeyen cihazlar için SQL\'i gösterir.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Bu silme hakkında daha fazla bilgi yararlı bir Stack Overflow thread üzerinde bulunabilir';

$GLOBALS["lang"]['Morocco'] = 'Fas Fas Fas';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Büyük olasılıkla Windows güvenlik duvarı (veya üçüncü bir parti duvarı) bağlantı girişimini inkar ediyor.<br/><br/>Lütfen hedef Windows makinesine giriş yapın ve güvenlik ayarlarını kontrol edin.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Open-AudIT çoğu GNU AGPL ile lisanslanır.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Ping\'e yanıt vermek gerekir. Eğer set halinde Nmap, bir ICMP yanıtını göndermeye ve dinlemeye çalışır. Eğer cihaz yanıt vermezse, başka bir tarama gerçekleşmeyecektir.<br/>Daha önce bir cihaz Open-AudIT için tarama yapmak zorunda değildi.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Ping\'e yanıt vermeli';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'AntiVirus beni inkar etmek / şeyleri inkar etmek için acele ediyor';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Zamanım Open-AudIT\'de';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Müşteri';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Device Seçenekleri';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Field Name';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Field Type Type';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rol Rolü';

$GLOBALS["lang"]['NOTE'] = 'NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT';

$GLOBALS["lang"]['NOTE #2'] = 'NOT # 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOT - DateTime formatları hakkında daha fazla bilgi için, bakınız';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NOT - indirilmiş bir CSV, XML veya JSON formatını talep ederseniz (Tek bir credential veya tam koleksiyon) gerçek credential ayrıntıları gönderilir. Şifreli dize değil, gerçek kullanıcı adı, şifre, topluluk dizesi vs. Web GUI\'de herhangi bir hassas detay görüntülenmez, ancak diğer formatlarda kullanılabilir. Bu ihracatın bir yapılandırma öğenin şifre_credentials olarak adlandırılmasını önlemek için.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOT - Yukarıda belirtilen verilerdeki eğriler kullanılmalıdır ( yukarıdaki diğer örnekler olarak değiştirilmemelidir).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOT - Aşağıdaki yapılandırma eşyasını ayarlayarak aşağıdaki metin bilgilerini önleyebilirsiniz <code>decrypt_credentials</code> tom için <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name Name Name Name Name Name';

$GLOBALS["lang"]['Name'] = 'Name Name Name Name Name Name';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Ad: Bu alana verdiğiniz isim. İdeal olarak benzersiz olmalıdır.';

$GLOBALS["lang"]['Namibia'] = 'Namibya';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal Nepal';

$GLOBALS["lang"]['net_index'] = 'Net Index Net Index';

$GLOBALS["lang"]['Net Index'] = 'Net Index Net Index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Hollanda Antilles';

$GLOBALS["lang"]['Netherlands the'] = 'Hollanda Hollanda';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikaları';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports liman numarası, protokol ve program kombinasyonu kullanır. Eğer her şey politika geçişi mevcutsa.';

$GLOBALS["lang"]['Network'] = 'Ağ Ağı Ağı';

$GLOBALS["lang"]['network_address'] = 'Ağ Adres';

$GLOBALS["lang"]['Network Address'] = 'Ağ Adres';

$GLOBALS["lang"]['Network Discovery'] = 'Network Discovery Network';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'Ağ türleri';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Network type is set to Local Area Network by default, but can be changed by the user as they see fit. Desteklenen türler aşağıdadır ( Wikipedia sayesinde).<br/><br/>Bir ağ fiziksel kapasitesi veya örgütsel amacı ile karakterize edilebilir. Kullanıcı izni ve erişim hakları da dahil olmak üzere ağ kullanımı, buna göre farklıdır.';

$GLOBALS["lang"]['networks'] = 'Ağlar';

$GLOBALS["lang"]['Networks'] = 'Ağlar';

$GLOBALS["lang"]['Networks Generated By'] = 'Ağlar Genrated Tarafından';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Ağlar her keşifle güncellenmektedir. IP\'ler kullanılabilir ve IP\'ler kullanılırken, Gateways, DHCP ve DNS Serverlar da bulunur.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Ağlar, nasıl yapılandırıldığına bağlı olarak farklı yanıt verirler. Bazı yönlendiriciler ve/veya güvenlik birimleri yanıt verebilir <i>adına</i> IP\'lerin diğer tarafında Open-AudIT Server\'a. Nmap’un SNMP için bir araştırma raporunu görmek oldukça yaygındır (UDP port 161) açık ve mevcut olmayan cihazlar için filtrelenmiş olarak yanıt vermek için. Bu IP\'de bir cihaz olmadığı gibi yanıltıcıdır, ancak veritabanında bir cihaz girişi ile sona erer. Zamanın% 99.9\'u, Open-AudIT değil, hatta Nmap değil, ama bu sorununa neden olan ağ. Şimdi açık ya da kapalı olarak açık limanları tedavi etmek için seçeneklerimiz var, bu karışıklıktan çok kurtulabiliriz. Enterprise kullanıcıları bile bunu bir keşif temeli üzerinde değiştirme seçeneğine sahiptir (sadece yukarıdaki gibi Medium (Classic) öğeyi kullanmaktan daha fazlası).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Ağlar bir CIDR Maskesi kullanarak';

$GLOBALS["lang"]['New Building Name'] = 'Yeni Yapı Adı';

$GLOBALS["lang"]['New Caledonia'] = 'Yeni Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'New Floor Name';

$GLOBALS["lang"]['New Room Name'] = 'New Room Name';

$GLOBALS["lang"]['New Row Name'] = 'New Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Yeni Zelanda';

$GLOBALS["lang"]['News'] = 'Haberler';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Haber, güncel sorgular ve paketler için giriş yaptığınızda, yapılandırma önerileri, duyurular, blog yazıları ve daha fazlası için giriş yaptığınızda.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Haberler sizi en son düzeltmeler, duyurular, sorgu güncelleştirmeleri, yazılım versiyonları ve daha fazlası ile güncel tutmanın yoludur.<br/><br/>wiki\'nin üstünde tutmak veya yeni sürümler için kontrol etmek zorunda değilsiniz, bunları size gönderebiliriz!';

$GLOBALS["lang"]['next_hop'] = 'Sonraki Hop';

$GLOBALS["lang"]['Next Hop'] = 'Sonraki Hop';

$GLOBALS["lang"]['next_run'] = 'Sonraki Run';

$GLOBALS["lang"]['Next Run'] = 'Sonraki Run';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Sonraki tıklama <i>Kendi uygulamanızı oluşturun</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Sonraki, Tamam tıklayın, sonra hemen Apache 2.4 servisine tıklayın ve Restart\'a tıklayın. Done!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Sonraki, sağ Apache2.4 servisine tıklayın ve Özellikler seçin, sonra Log On sekmeye tıklayın.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nijerya';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap liman açık olup olmadığını tespit edemez, çünkü paket filtreleme, sonlarını limana ulaşmasını engeller. Filtre, özel bir güvenlik aygıtından, yönlendirici kurallardan veya host tabanlı güvenlik yazılımından olabilir. Bu limanlar saldırganlar çünkü çok az bilgi sağlıyorlar. Bazen 3 kod 13 gibi ICMP hata mesajlarına cevap verirler (önemsiz: iletişim idari olarak yasaklanır), ancak yanıt vermeden yapılan filtreler çok daha yaygındır. Bu güçler Nmap\'ı birkaç kez yeniden denemesi için, Prodüksiyondan ziyade ağ sıkışıklığı nedeniyle düştü. Bu, taramayı dramatik bir şekilde yavaşlatır.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap bu eyalette limanların açık veya filtrelenmiş olup olmadığını tespit edemiyor. Bu, açık limanların yanıt vermediği tarama türleri için meydana gelir. Cevap eksikliği de bir paket filtresinin radyoyu ya da elicited herhangi bir yanıtın düşmesi anlamına gelebilir. Yani Nmap liman açık olup filtrelenmiş olup olmadığından emin değildir. UDP, IP protokolü, FIN, NULL ve Xmas bu şekilde limanları sınıflandırır.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap zamanlama ayrıntıları bu bağlantılı sayfanın alt kısmında bulunur';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Müşteri';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Müşteri';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Yönetimi';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Yönetimi';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Name';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Name';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notlar';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notlar';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Rol Rol';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Rol Rol';

$GLOBALS["lang"]['No'] = 'Hayır hayır hayır';

$GLOBALS["lang"]['No Devices Returned'] = 'Hiçbir cihaz geri dönmedi';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google Maps API Anahtar bugün, haritayı gösteremeyeceksiniz.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Profesyonel veya Enterprise için Hiçbir Lisans';

$GLOBALS["lang"]['No Results'] = 'Sonuçlar yok';

$GLOBALS["lang"]['No data in License Key'] = 'Lisans Keyifinde veri yok';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Bu zamanda gerekli olan veritabanı yükseltmesi yok.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Hiçbir cihaz veritabanında değildir.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Hiçbir şey yok';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal Normal Normal Normal Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Kuzey Mariana Adaları';

$GLOBALS["lang"]['Norway'] = 'Norveç Norveç Norveç';

$GLOBALS["lang"]['Norwegian'] = 'Norveç Norveç Norveç Norveç';

$GLOBALS["lang"]['Not Applicable'] = 'Geçerli değil';

$GLOBALS["lang"]['Not Checked'] = 'Checked';

$GLOBALS["lang"]['Not Equals'] = 'Eşit değil';

$GLOBALS["lang"]['Not In'] = 'Değil';

$GLOBALS["lang"]['Not Like'] = 'Like Not Like Not Like';

$GLOBALS["lang"]['Not Set'] = 'Set Değil';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Her bilgisayar bir kriteri başarıyla tamamlayamayacak. Kontrolümüzün ötesinde nedenlerden dolayı bazı başarısız gördük. Girişler, bu eşyalar için doğru yönde size yardımcı olmalıdır.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Not in the (comma seperated) list';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normalde kullanılmaz. Eğer set halinde, bu, yanıt olarak kabul edilmek için açık bir limana sahip olmak için cihazı gerektirir. Bir MAC adresi, arp yanıt veya ping yanıtı cevap olarak kabul edilmesi yeterli değildir. Open-AudIT sunucusu arasındaki bir yönlendirici veya güvenlik duvarı ve hedef IP IP, IP adına port taramalarına yanıt veriyor.';

$GLOBALS["lang"]['Note'] = 'Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not NotNote';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Not - Bir ebeveyn seçmek otomatik olarak çocuklarına erişimi sağlayacaktır (burada gösterilmemesine rağmen).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = '100 cihaz Enterprise lisansının destek içermediğini unutmayın.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Not, senaryoyu eklenebilir hale getirmeniz gerekebilir';

$GLOBALS["lang"]['Notes'] = 'Notlar Notlar Notlar Not Notlar Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Notlar';

$GLOBALS["lang"]['notes'] = 'Notlar Notlar Notlar Not Notlar Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Notlar';

$GLOBALS["lang"]['Notice'] = 'Duyuru';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Kasım Kasım Kasım Kasım';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Şimdi Abonelik ID için, Tüm Hizmetleri, Aboneleri tıklayın ve kopyalayın.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Şimdi Azure Active Directory uygulama erişimini aboneliklerinize sağlamalıyız.<br/><br/>Kaynak Grupları üzerine tıklayın ve sonra Azure Active Directory Uygulamanızın erişime sahip olmasını istediğiniz kaynak grubu.<br/><br/>Click Add. Rol Contributor olmalı ve sonra uygulamayı aramalıdır (Open-AudIT). Sonra Kaydet\'e tıklayın.<br/><br/>Şimdi uygulama abonelike erişime sahiptir, bu yüzden API çağrılarını yapabiliriz. API aramaları uygulama adına talep edilecektir, kullanıcınız değil.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS OS OS';

$GLOBALS["lang"]['OS Families'] = 'OS Family';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['OUTPUTS'] = 'OUTPUTS';

$GLOBALS["lang"]['oae_manage'] = 'Oae manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Üst yönetim desteği alın';

$GLOBALS["lang"]['October'] = 'Ekim Ekim Ekim Ekim';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Onda';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows\'da Open-AudIT, WMI\'yi birincil denetim yöntemi olarak kullanır. Windows, uzaktan WMI\'nin endişelendiği ünlü bir üne sahiptir. Bu yaya eğilimlidir. <i>Sadece sadece çalışma</i> Ya da hedefteki bazı gizem eşyası değişmeli. Uzak Windows PC\'leri denetim etmede zorluk yaşıyorsanız, test_windows_client.vbs adında bir senaryo yarattık. Bu senaryoyu çalıştırabilirsiniz <strong>yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel yerel</strong> Sorudaki makinede, Open-AudIT tarafından denetim yapmak için kullanılan kullanıcı olarak kaydolun. Senaryo yapar <strong>Hiçbir değişiklik yok</strong> Hedef cihazlara. Aşağıdaki eşyaların çoğu (hepsi değil) kontrol eder ve çeşitli özellikler için PASS, FAIL ve INFO etiketleri üretir. NOT - Hedef sisteminiz doğru bir şekilde denetim ediliyorsa, herhangi bir ayarları değiştirmelisiniz. Aşağıdan bazıları denetim edilebilir ve bazıları var. Sadece belirli PC\'lerdeki keşifleriniz amaçlandığı gibi çalışmıyorsa değişim ayarlarını değiştirir.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Görevler Listesi sayfasında, tıklayın <i>Yeni Ekle Yeni Ekle Yeni Yeni Ekle Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Add Yeni Add Yeni Add Yeni Add Add Yeni Add Add Add Yeni Add Yeni Add Add Yeni Add Yeni Add Add Add Yeni Add Yeni Add Add Add Yeni Add Add Yeni Add Add Yeni Add Add Yeni Add Add Add Yeni Add Yeni Add Add Add Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Yeni Add Add Add Yeni Add Yeni Add Add Add Yeni Add Yeni Add Add Add Add Yeni Add Yeni Add Yeni Add Add Add Add Add Add Yeni Add Add</i> Bir görevi yapılandırmak için düğme.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Alanda <i>Maç</i> Takip etmek istediğiniz yazılımın adını vermeniz gerekir. Yüzde işareti (%) gerektiğinde vahşi bir kart olarak kullanabilirsiniz.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Sonraki sayfada Access Keys\'i seçebilir ve anahtarınızı görebilir veya yeni bir anahtar oluşturabilirsiniz.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Hedef Windows PC\'de, DCOM faydasını çalıştırın ve aşağıdaki özellikleri doğrulayın. Başlangıç -> Run, DCOMCNFG\'ye girin ve tamam basın. Bu DCOMCNFG penceresini açacak.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Üst sağda ( menü çubuğunun altında) birkaç düğme göreceksiniz. Bunlar başka bir pano seçmenize izin verir, mevcut panoyu ana sayfanız olarak ayarlamanıza izin verir (eğer zaten değilse) ve mevcut panoyu düzenleyebilirsiniz (eğer izniniz varsa).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'In-Premise, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Ek bir alan oluşturulduktan sonra, veritabanında başka herhangi bir özellik gibi sorgu ve gruplarda kullanılabilir.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Bir kez yorumlandığında, sertifikanız onaylanacaktır, ancak bu geçerliliği kendi imzalanmış sertifikaları kullanıyorsanız ve sunucunuzu doğru bir şekilde yapılandıramayacaksınız.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Senaryo bir hedef üzerinde çalışırken, senaryo kendini silmelidir.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Bu ilk sorgular (snmp, ssh, wmi) tamamlandıktan sonra, cihaz denetim senaryoları tarafından desteklenmekteyse (Windows, Linux, OSX, AIX, HP-UX, Solaris ve ESXi), doğru denetim senaryosu hedefe kopyalanacaktır. Denetim senaryosu kendini tamamlayacaktır. Sonuç, hedef makinede bir XML dosyası olarak depolanacaktır. Open-AudIT sunucusu daha sonra sonuç dosyasını işlem için alır ve hedefteki dosyayı silecektir. Denetim senaryosu hedef cihazda kopyalanır (en azından SSH denetimleri için) keşif_linux_script_directory yapılandırılabilir. Varsayılan olarak, /tmp / için ayarlanır. Bu, eğer /tmp\'in hiçbirexec setine sahip olmadığını değiştirmek gerekebilir. Sonuç dosyası daha sonra işlenir ve Open-AudIT içinde güncellenen cihaz detayları.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Uygulama düğmesine tıkladığınızda, Open-AudIT keşif başlatmak ve kullanıcıyı keşif ayrıntıları sayfasına geri getirmek için bir işlem getirecektir. Yeni yenilenmiş süreç, yapısal keşif seçeneklerini alır ve Nmap komutlarını taramak için IP adreslerinin ilk listesini belirlemek için uygular (veya Active Directory’yi bu tür kullanılıyorsa sorgular). Gönderilecek her IP bir kuyruka yerleştirilir. İlk süreç tamamlandıktan sonra (ve kuyrukta taramak için IP’ler var) bir dizi işlem paralel olarak her IP\'yi daha fazla taramak için cazip olacaktır. Bu işlem sayısı konfigürasyonda yapılandırılabilir, özelliklerini düzenler <i>kuyruk_limit</i>. Varsayılan olarak bu 20\'ye ayarlanıyor.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Cihazlarınızı düzenlemek için seçtikten sonra, masanın ilk sağında kalem düğmesine tıklayın.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Bunu yaptıktan sonra, Open-AudIT, yapılandırılmış Auth Yöntemine karşı kullanıcı logonuzu doğrulamaya çalışacak. Kullanıcının geçerli kimlikleri varsa ve <code>use_authorisation</code> Set, Open-AudIT, kullanıcının ait olduğu grupların listesini isteyecektir. Kullanıcı Open-AudIT Rols ve Orgs için ilgili gruplar halindeyse, bu roller ve Orgs bu kullanıcıya uygulanacaktır.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Bir Basel Tanımını oluşturduktan sonra, belirli bir cihaz grubuna karşı koşmayı planlayabilirsiniz.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Bu eşyalarınız olduğunda, Open-AudIT Enterprise you can go to menu -> Discover -> Bulutlar -> Create Create Create Create Create Create Bulutlar, seçin <i>Amazon AWS</i> Tür ve onları içeri. Done.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Bu eşyalarınız olduğunda, Open-AudIT Enterprise you can go to menu -> Discover -> Bulutlar -> Create Create Create Create Create Create Bulutlar, seçin <i>Microsoft Azure</i> Tür ve onları içeri. Done.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Bulut bilginiz olduğunda, sadece yeni bir bulut oluşturmak ve keşif yürütmek önemlidir - veya ilk / gelecekteki keşifleri planlamak. Ayrıca bulut makinelerinize giriş için gerekli olan kimliklere sahip olduğundan emin olun ve her şey sizin için normal bir keşif gibi yapılır. Bulutlarınız için';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> veya <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Kampüs Alan Ağı, Bulut Ağı, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Kablosuz Yerel Alan Ağı.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Bir Geliştirme, Afet Kurtarma, Değerlendirme, Pre-Production, Production, Test, Eğitim, Kullanıcı Kabul Testi';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'tahsis edilenlerden biri, delege, planlama, rezerve edilemez, bilinmeyen, yönetilmemiş. Ayrılmak için sıralayıcılar.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Biri ya da <code>active directory</code> veya <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Bir tanesi: antivirüs, yedekleme, güvenlik duvarı, onaylanmış, yasaklanmış veya başka.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Bir başka eşya dikkatli olmak için - ev sahibi adını (veya fqdn) kullanmanızdan emin olun Sertifikada ne olduğunu gösteren Server (sadece LDAP Servers IP adresi değil) Açık-AudIT\'de LDAP girişi oluştururken.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Dokümantasyon';

$GLOBALS["lang"]['Open'] = 'Open Open Open Open';

$GLOBALS["lang"]['Open Data'] = 'Açık Veri';

$GLOBALS["lang"]['Open Source'] = 'Open Source';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Community kaynak kodu GitHub\'da mevcuttur. Endişeniz olan herhangi bir kodu incelemeye teşvik edilirsiniz ve çünkü açık kaynaktır - bize sahip olduğunuz veya herhangi bir bulguları raporladığınız herhangi bir konu hakkında sormak için de teşvik edilirsiniz. Kod katkılarını, kırılgan raporları veya hatta basit soruları kabul etmekten her zaman daha mutluuz. Yardım etmek için buradayız.<br/><br/>Denetim senaryoları kendileri (Windows, Linux, MacOS, et al) kasıtlı olarak okunabilir yerel kabuk senaryosu ( Windows, Bash for *nix). Tam olarak hangi komutların çalıştırıldığını görebilirsiniz. İhtiyacınız olmadığını hissettiğiniz herhangi bir komut kaldırabilirsiniz. Kodu sizin için denetlemek için üçüncü bir parti isteyebilirsiniz ve (eğer isterseniz) herhangi bir bulguları rapor edebilirsiniz.<br/><br/>Open-AudIT Enterprise, Open-AudIT Topluluğu için ek ticari işlevleri gerçekleştirir. Dış bağımlılıklarla tek bir derleyici dosya olarak dahil edilir. Enterprise\'ın kendisi işlevi (s) gerçekleştiriyorsa, herhangi bir konuda endişeleniyorsanız İlk dalga onlarla birlikte çalışmaktan mutlu - sadece sorun! Bunu başka bir ticari yazılım satıcısıyla deneyin!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise, keşif tarama seçeneklerinin önceden tanımlanmış bir listesinden seçme yeteneğine sahiptir ve ayrıca keşif başına bireysel seçenekleri özelleştirme yeteneğine sahiptir.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Büyük ağlar için yüksek ölçekli esnek keşif ve denetim çözümü. Profesyonel artının tüm özellikleri: Baselines, File Denetim, Cloud Discovery, Raf Management, Configurable Rol Tabanlı Erişim Kontrolü Active Directory ve LDAP dahil.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Field Name';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Lisansları';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Seçenekleri';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Profesyonel ve Enterprise, zaman temelli, tarihi ve muti-query temelli raporlama özellikleri dahil olmak üzere gelişmiş raporlama özellikleri içerir.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Profesyonel, keşif tarama seçeneklerinin önceden tanımlanmış bir listesini seçme yeteneğine sahiptir, keşif başına.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. Dünya';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud IT, LDAP sunucularını (Microsoft Active Directory ve / veya OpenLDAP) kullanmak için yapılandırılabilir ve ayrıca bir kullanıcı ve ek olarak, Sun-AudIT\'de görevlendirilmiş roller ve hatta LDAP grubuna dayanan bir kullanıcı hesabı oluşturmak için yapılandırılabilir. Ayrıca kullanabilir';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud IT, sunucunuzda veri merkezinizde çalıştırılabilir. Her şeyde internete erişim gerekmez. Linux\'ta önkoşullarımız için dağıtım paketi yöneticisini kullandığımız yükleme bile bir ev ve güvenlik ekibi onaylı bir paket havuzu kullanarak negated edilebilir.<br/><br/>Open-Aud IT, buluttaki herhangi bir veri depolamaz. Lisanslama bilgileri bile Open-AudIT sunucusundan internete erişmek olmadan sağlanabilir.<br/><br/>Elbette, internete dağıtımınız için paketler ( güvenlik düzeltmeleri dahil) indirmesine izin vermek daha kolaydır, ancak bu size ve güvenlik politikalarınıza bağlıdır. Open-AudIT internete ihtiyaç duymaz.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT, parse ve NIST CVE Vulnerability raporlarını kullanabilir.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud IT birkaç dilde gösterebilir. Bunu nasıl geliştirebilirsiniz?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud IT, her cihazla ilişkili ek alanlarda bilgi saklayabilir.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT, Microsoft Entra\'yı (özellikle Microsoft Azure Active Directory olarak bilinen) bir doğrulama yöntemi olarak kullanabilir. Bu, Open-AudIT\'deki kullanıcınızın logon sayfasında Entra butonunu kullanarak Logon\'a tıklaması ve Entra bilgilerini logon\'a kullanması anlamına gelir. Bu kullanıcının Open-AudIT içinde zaten var olması gerekir (ve atanılabilir';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT, OKTA\'yı bir doğrulama yöntemi olarak kullanabilir. Bu, Open-AudIT\'deki kullanıcınızın logon sayfasında OKTA butonunu kullanarak Logon\'a tıklaması ve logon için OKTA kimliklerini kullanabilmesi anlamına gelir. Bu kullanıcının Open-AudIT (ve atanan Rollar ve Orgs) içinde zaten var olması gerekir, ancak logon kimliklerinin ayrı bir setini hatırlaması gerekmez.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT, yerleşik birçok sorgu ile geliyor. Belirli bir sorgu gerektirir ve önceden paketlenmiş sorguların hiçbiri ihtiyaçlarınıza uymazsa, yeni bir tane oluşturmak ve koşmak için Open-AudIT\'e yük olmak oldukça kolaydır.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT, hem web arayüzünde hem de JSON talepleri aracılığıyla kullanılmak üzere bir JSON Restful API\'ye sahiptir.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud IT\'nin Open-AudIT içindeki bir kullanıcının ne yapabileceğini belirlemek için bir granular izni vardır ve bunu yapabileceği öğeler. Open-AudIT tamamen kendi kendine özgü olabilir veya kimlik doğrulama ve / veya izin için Active Directory veya OpenLDAP kullanabilir.<br/><br/>Open-AudIT’in yöneticisine tamamen çalışmak için Rol Tabanlı Erişim Kontrolü nasıl benzeyeceklerdir.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud IT\'nin güçlü bir değişim algılama motoru var. Eklenen veya değiştirilen herhangi bir cihaz özellikleri tespit edilir ve depolanacaktır. Bu değişiklikler rapor edilebilir ve şirket değişim ve salıverme sürecinden beklendiği gibi doğrulanan ilgili veriler.<br/><br/>Bir cihaz denetim edildiğinde, özellikler veritabanındaki tablolara karşılık gelen bölümlere bölünmüştür.<br/><br/>Her cihaz (bilgisayar, yönlendirici, yazıcı, et al) bir giriş vardır. <code>devices</code> masa. Cihazların masasındaki her giriş bir tane vardır <code>id</code> sütun. Bu değer eşsizdir - oto-incrementing id.<br/><br/>Denetim sonucu işlandığında, her bölümde her öğe veritabanında ne olduğu ile karşılaştırıldığında denetim sonucu vardır.<br/><br/>Her bölüm için, anahtar sütunlar (aşağıdaki tabloya bakın) aynı değerleri içeriyorsa, zaten kurulmuş ve onun kendi içinde bulunduğu düşünülmektedir. <code>last_seen</code> Özellikler güncellendi. No change_log entry is created.<br/><br/>Anahtar sütunların herhangi biri eşleşmezse, yeni bir özellik olarak kabul edilir ve eklenir. A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A <code>change_log</code> Giriş, cihazın zaten masada mevcut diğer özellikleri varsa oluşturulur.<br/><br/>Denetim işlemenin tamamlanmasında, güncellenmemiş herhangi bir veritabanı öğesi mevcut değildir. The The The The The The The The <code>current</code> Bu öğe için özellik ayarlandığında <i>n n</i> ve bir değişim_log girişi oluşturulur.<br/><br/>Yani, şu anda bir şey yüklü olup olmadığını belirleyebiliriz - mevcut sütun şu anda <i>y</i>.<br/><br/>Başlangıçta bir şeyin tespit edildiği zaman belirleyebiliriz - The can determine when something was initial detect - the the <i>İlk_seen</i>.<br/><br/>İlk denetimden sonra bir şey kurulduğunu belirleyebiliriz - ilk görülme bileşeni ve cihaz masalarında farklı olacaktır.<br/><br/>Şu anda kurulmuş olup olmadığını belirleyebiliriz, ancak daha önce - mevcut = <i>n n</i>.<br/><br/>Bir öğe tespit ettiğimiz son zamanı belirleyebiliriz - son_seen.<br/><br/>Herhangi bir noktada, bir sistem üzerinde ne olduğunu belirleyebiliriz - denetim_log masasını kullanarak ve ilk_seen ve son_seen\'e dayanan ilgili bileşenleri seçerek.<br/><br/>Her bölüm ve eşleşen anahtar sütunları aşağıdadır.<br/><br/>NOT - Aşağıda ayrıntılı olarak bazı istisnalar vardır.<br/><br/>*1 - Ağ kartları için, eğer bilgisayar bir VMware Esx makinesiyse, net_index ve bağlantı sütunlarını da kullanır.<br/><br/>*2 - Bölümler için, bilgisayar AIX makinesidir, bölüm adını kullanırız.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT, BT ve ilgili varlık ayrıntıları ve yapılandırmanız hakkında takip etmek ve rapor etmek için tasarlanmış bir programdır. Open-AudIT söyleyebilir <i>Ağınızda ne var?</i>Nasıl yapılandırılır ve herhangi bir değişiklik varsa. Open-AudIT, cihaz keşfi için platform kullanmak için bir sleek, esnek ve kolay bir platform sunar, IT denetim ve envanter yönetimi otomasyonu doğrudan kutudan çıkar.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud IT, birden çok cihazın özelliklerini bir kez düzenlemeyi kolaylaştırır.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT\'nin dosyaları oluşturabilmeleri için belirli dizi izinlere ihtiyacı vardır, sonuçları yükleme vs. Lütfen aşağıda olarak ayarlayın.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT birçok yerleşik sorgu sağlar ve kendi oluşturmak için basit yapar.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Yönetim, org_admin ve kullanıcı için yerleşik rollerle IT gemileri.<br/><br/>Genel olarak, Open-AudIT uygulamasının yöneticisi olan bir kullanıcı, yönetici ve olası veyag_admin rolleri olmalıdır.<br/><br/>Bir kullanıcının birden fazla rolü olabilir. İzin en izinsiz seviyede uygulanacaktır - IE, bir kullanıcının kullanıcı ve org_admin rolleri varsa, bu izni verebilirler, ancak kullanıcı rolü bu izni vermez.<br/><br/>Yönetim rolü, konfigürasyon, veritabanı, gruplar, ldap sunucuları, loglar, sorgular ve roller gibi koleksiyonlara erişim sağlar. Tüm uygulamayı etkileyen küresel öğeler.<br/><br/>org_admin rolü genellikle, org_id sütununu içeren herhangi bir koleksiyon için oluşturma, okuma, güncelleme ve silinme sağlar. Yukarıda bahsedilen bazı koleksiyonların dışında hemen tüm veriler bir araya getirecek <code>org_id</code> sütun.<br/><br/>Kullanıcı rolü genellikle sadece bir org_id sütunu ile tüm öğelere erişim sağlar.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Yönetim, org_admin ve kullanıcı için yerleşik rollerle IT gemileri.<br/><br/>Genel olarak, Open-AudIT uygulamasının yöneticisi olan bir kullanıcı, yönetici ve olası veyag_admin rolleri olmalıdır.<br/><br/>Bir kullanıcının birden fazla rolü olabilir. İzin en izinsiz seviyede uygulanacaktır - IE, bir kullanıcının kullanıcı ve org_admin rolleri varsa, bu izni verebilirler, ancak kullanıcı rolü bu izni vermez.<br/><br/>Yönetim rolü, konfigürasyon, veritabanı, gruplar, ldap sunucuları, loglar, sorgular ve roller gibi koleksiyonlara erişim sağlar. Tüm uygulamayı etkileyen küresel öğeler.<br/><br/>org_admin rolü genellikle, org_id sütununu içeren herhangi bir koleksiyon için oluşturma, okuma, güncelleme ve silinme sağlar. Yukarıdaki koleksiyonlardan bazıları dışında tüm veriler bir org_id sütunu içerecektir.<br/><br/>Kullanıcı rolü genellikle sadece bir org_id sütunu ile tüm öğelere erişim sağlar.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT gemileri birkaç önceden yapılandırılmış Dashboards ile. Profesyonel bir kullanıcıysanız, bunlardan ikisi arasında seçim yapabilirsiniz ve logon olduğunda varsayılan sayfanız olarak ayarlayabilirsiniz. Eğer bir Enterprise kullanıcısıysanız, sadece beş önceden yapılandırılmış Dashboards arasında seçim yapamazsınız, ama aynı zamanda kendi oluşturmak için yeteneğiniz var.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT 64bit Windows üzerinde kurulmalıdır <strong>Server Server Server</strong> sistemler sadece. Windows 10 ve Windows 11, <strong>Değil değil</strong> Desteklendi.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT, Nmap\'ı Discovery işlevinde kullanır. Nmap probes cihazlar açık limanlar için. İdeal olarak çalışan limanlar için açık bir şekilde cevap vermelidir. Cihazları genellikle bununla yanıt vermez. Farklı yanıtlar aşağıda ayrıntılıdır.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT, Nmap\'ı Discovery işlevinde kullanır. Nmap olmadan, Open-AudIT doğru şekilde çalışmaz. Her Open-AudIT install, Nmap\'un yüklü olduğunu varsayıyor ve ayrıca Discovery web sayfalarında da test edecek. Open-AudIT ve Nmap hakkında daha fazla bilgi burada mevcuttur';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT, Nmap\'ı Discovery işlevinde kullanır. Nmap olmadan, Open-AudIT doğru şekilde çalışmaz. Her Open-AudIT install, Nmap\'un yüklü olduğunu varsayıyor ve Discovery web sayfalarında test edecek.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud IT, cihazlarınıza erişmek için kimlik kullanır. Bunlar şifrelenir ve depolanır, tıpkı beklediğiniz gibi.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT, bir İngilizce konuşan Avustralya tarafından yazılmıştır. Uygulamadaki her şey İngilizce kelime kullanır. Ancak Open-AudIT her zaman görüntü için birden fazla dil destekledi. Bu çeviriler her zaman doğru değildir, çünkü geliştiriciler sunulan her çevirinin dilini yerel olarak konuşmazlar.<br/><br/>Çeviride bir şey doğru değilse ne yapabilirsiniz?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap kaldırıldı';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Destek Bileti Açın mı?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Kullanıcı Üyelik Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Kullanıcı Üyelik Attribute';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'İşletim Sistemi';

$GLOBALS["lang"]['Operating System Family Contains'] = 'İşletim Sistemi Ailesi Contains';

$GLOBALS["lang"]['Operating Systems'] = 'İşletim Sistemleri';

$GLOBALS["lang"]['Operators'] = 'Operatörler';

$GLOBALS["lang"]['optical'] = 'Optik Optik Optik Optik Optik Optik';

$GLOBALS["lang"]['Optical'] = 'Optik Optik Optik Optik Optik Optik';

$GLOBALS["lang"]['Optimized'] = 'Optimized';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Seçenek seçeneği #1 - Verileri Değiştirin';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Seçenek #2 - Çeviri dosyasını değiştirin';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Seçmeli Ajan Denetimli Denetim';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT tarafından denetim edildiği gibi Seçmeli sürüm. Yüzde işareti vahşi bir kart olarak kullanın.';

$GLOBALS["lang"]['options'] = 'Seçenekleri';

$GLOBALS["lang"]['Options'] = 'Seçenekleri';

$GLOBALS["lang"]['Options, options, options'] = 'Seçenekler, seçenekler, seçenekler';

$GLOBALS["lang"]['Or'] = 'Ya da';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Veya aşağıdaki alanlardan seçin.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Veya';

$GLOBALS["lang"]['Org ID'] = 'Veya';

$GLOBALS["lang"]['Organisation'] = 'Organizasyon Organizasyon';

$GLOBALS["lang"]['organisation'] = 'Organizasyon Organizasyon';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizasyon Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organizasyonlar';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizasyonlar, özel alanları kullanarak her keşfedilen cihaza karşı depolanan detay seviyesini genişletebilir ve genişletebilir ve açık temel CMDB, etkinlik yönetimi ve bilet sistemlerine kolay entegrasyon sağlar.';

$GLOBALS["lang"]['orgs'] = 'Veya';

$GLOBALS["lang"]['Orgs'] = 'Veya';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Open-AudIT\'deki Orgs önemli bir öğedir. Bir kullanıcının birincil Org\'a da erişebilecekleri bir Orgs listesi vardır. Bir kullanıcı bunu, eriştikleri Orgs\'e verilen eşyaları tanımlayan bir rol listesi ile birleştirir. Bir kullanıcının kombinasyonu <i>veya</i> ve <i>rolleri rol rol rol rol rol rol rolleri</i> Açık-AudIT içinde ne yapabileceklerini tanımlayın.<br/><br/>Open-AudIT\'deki çoğu ürün bir Org. cihazlara verilir, Konums, Networks, vb.<br/><br/>Orgs çocuk Orgs olabilir. Bir organizasyon şeması (ağaç) yapısını düşünün. Bir kullanıcının belirli bir Org\'a erişimi varsa, çoğu zaman (her zaman değil) o Orgs torunlarına da erişimleri vardır.';

$GLOBALS["lang"]['orientation'] = 'Oryantasyon';

$GLOBALS["lang"]['Orientation'] = 'Oryantasyon';

$GLOBALS["lang"]['os'] = 'Ey';

$GLOBALS["lang"]['Os'] = 'Ey';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bitti';

$GLOBALS["lang"]['Os Bit'] = 'Os Bitti';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version Version';

$GLOBALS["lang"]['os_family'] = 'Os Family';

$GLOBALS["lang"]['Os Family'] = 'Os Family';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os Installation Date';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Installation Date';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Açıklama';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Açıklama';

$GLOBALS["lang"]['os_license'] = 'Os Lisans';

$GLOBALS["lang"]['Os License'] = 'Os Lisans';

$GLOBALS["lang"]['os_license_code'] = 'Os Lisans Kodu';

$GLOBALS["lang"]['Os License Code'] = 'Os Lisans Kodu';

$GLOBALS["lang"]['os_license_mode'] = 'Os Lisans Modu';

$GLOBALS["lang"]['Os License Mode'] = 'Os Lisans Modu';

$GLOBALS["lang"]['os_license_type'] = 'Os Lisans Türü';

$GLOBALS["lang"]['Os License Type'] = 'Os Lisans Türü';

$GLOBALS["lang"]['os_name'] = 'Os Name';

$GLOBALS["lang"]['Os Name'] = 'Os Name';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Diğer Diğer Diğer';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Bu kısıtlamadan başka, gerekli olan özellikleri seçmek ücretsizdir. Menüyü kullanmak için iyi bir fikirdir';

$GLOBALS["lang"]['Others'] = 'Diğerleri';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Varsayılan Entegrasyonumuz ayrıca dış kaynaklı cihazlar üzerinde bir keşif sağlar. Bu yüzden kutudan Varsayılan Entegrasyon için varsayılan bir keşif gönderiyoruz. Bunlar varsayılan eşleştirme kurallarını kullanır, ancak aynı zamanda IP adresi ile uyum sağlar.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Örneklerimiz kullanacağım <i>türü türü türü türü türü</i> sütun.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Çerçevemiz burada işlem için dosyaları yükler, sonra onları siler. Yapılan denetim sonuçlarını düşünün, vs.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'İlk entegrasyonlarla hedefimiz özellikle NMIS için Open-AudIT entegrasyonu için <i>Sadece sadece çalışma</i>. Linux\'taki programları kullanıyorsanız, entegrasyonu yürütmek için tek bir düğmeye tıklayabilirsiniz. Hiçbir şey daha gerekli değildir. Bunu söyleyene göre, entegrasyon kendisi son derece yapılandırılabilir - bu yüzden bir şey tercihinize değilse, kolayca değiştirilebilir.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Vulner yükümlülükleri olarak adlandırılan yeni özellik, herhangi bir cihazın herhangi bir CVE (Common Vulnerability Exposure) tarafından etkilenmediğini hızlı bir şekilde belirleme yeteneğine sahiptir - ancak nasıl?<br/><br/>FirstWave sürekli olarak Nist NVD feed\'ten çıktıyı tüketiyor. Bunu alırız ve birkaç kısıtlama uygularız, sonra etkilenen programları çıkarın ve raporlama için bir SQL sorgusu oluşturun. Open-AudIT örneğiniz FirstWave\'e ulaşır ve normal bir şekilde yeni güvenlik talep eder. Yeni bir kırılganlık kaydı aldığında, veritabanına karşı çalışır ve depolanır. Her zaman bir cihaz işlenir, tüm eşleşen kırılganlar tekrar idam edilir ve depolanır. Bu, bir kırılgan listesi gördüğünde, tüm etkilenen cihazları hesaplamamız gerekmez - zaten sonucumuz var. Bireysel bir kırılganlık kaydı gördüğünüzde, bu tekil kırılganlık sonucu gerçekten yeniden hesaplıyoruz.<br/><br/>Yani, her zaman tarihe kadarsınız!<br/><br/>Buna ek olarak, günlük tüm cihazlar için tüm güvenliklerin sonuçlarını da hesaplıyoruz (genellikle sessiz bir zamanda 2am).<br/><br/>Open-AudIT örneğinizde, hangi satıcılara dikkat ettiğinizi seçmenize izin veriyoruz. i.e., kullanmadığınız veya yüklemediğiniz bir satıcıdan gelen güvenlik kayıtlarının tekrar kullanılması yoktur. Varsayılan olarak, satıcı listemiz Adobe, Apple, Cisco, Google, Microsoft, Mozilla ve Redhat.<br/><br/>Bu hepsi çok basit geliyor, ama sahnelerin arkasında <b>Çok fazla çok fazla</b> devam ediyor. Örneğin, CVE kaydı etkilenen bir yazılım listesi içeriyor - ancak bu yazılım isimleri bir bilgisayarı denetim ettiğimizde ne aldığımızla eşleşmez. İyi bir örnek Apache. Tipik olarak, CVE kaydı etkilenen yazılımın http_server olduğunu söyleyecek. Gerçekte, bu apache2 (Ubuntu), http (Redhat), Apache HTTP Server (Windows) ve diğerleri olarak görünür. Bu yüzden, bir bilgisayar sorduğumuzda aldığımız programın gerçek adının ne olduğunu ilk olarak belirlemeliyiz ve birden fazla isim olabilir. Bundan sonra CVE rekorunu parlamalıyız ve bir eşleştirme SQL ifadesi oluşturmalıyız. Yukarıdaki olarak birden fazla program adı ve birden çok versiyona izin vermek, sürüm aralıkları ve hatta birden çok farklı yazılım parçaları (örneğin Thunderbird ve Firefox tek bir CVE\'de). Ve Open-AudIT örneğiniz bunu almalı ve Orgs filtrelemeyi de uygulamalıdır. Ve bu sadece tek bir CVE. Hangi CVE’lerin sahip olduğunu ve sahip olmadığını belirlemek ne? Listeye bir satıcı eklemek hakkında daha sonra? Düşünmek için birçok şey!<br/><br/>Her zamanki raporlamanın yanı sıra, Dashboards için mevcut birkaç yeni penceremiz var, Vulner yükümlülüklerine göre.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Bir SSH cevabı için zamanımız';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Bir WMI yanıt için zamanımız';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Bir SNMP cevabı için zamanımız';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Bir denetim senaryo cevabı için zamanımız';

$GLOBALS["lang"]['output'] = 'Çıktı Çıktı Çıktı';

$GLOBALS["lang"]['Output'] = 'Çıktı Çıktı Çıktı';

$GLOBALS["lang"]['outputs'] = 'Çıktılar';

$GLOBALS["lang"]['Outputs'] = 'Çıktılar';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Genel olarak ciddiyet puanı (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Over write';

$GLOBALS["lang"]['Overwrite'] = 'Over write';

$GLOBALS["lang"]['owner'] = 'Sahibi';

$GLOBALS["lang"]['Owner'] = 'Sahibi';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec, SysInternal/Microsofts popüler PsExec programının özgürce dağıtılmasıdır. PAExec, PsExec için bir damla olmayı hedefliyor, bu nedenle komut satırı kullanımı aynı, ek seçeneklerle de destekleniyor. Bu çalışma aslında Talha Tariqs RemCom tarafından ilhamlandı.';

$GLOBALS["lang"]['PHP'] = 'PHP PHP PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTing data';

$GLOBALS["lang"]['Package'] = 'Paket Paketi';

$GLOBALS["lang"]['packages'] = 'Paketler Paketler';

$GLOBALS["lang"]['Packages'] = 'Paketler Paketler';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Paketler, gibi şeyler hakkında rapor etmek için kullanılır <i>Yasaklanmış yazılım yasaklanmış yazılım</i>, AntiVirus on servers, vs.<br/><br/>Open-AudIT, antivirüs, güvenlik duvarı ve diğer yazılım statüsünü ortadan kaldırmak için yenidenpotlar tedarik eden widgets sağlar.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan Pakistan Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Filistinli Bölge';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Yeni Gine';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parametreler';

$GLOBALS["lang"]['Paranoid'] = 'Paranoyak';

$GLOBALS["lang"]['Parent'] = 'Ebeveyn';

$GLOBALS["lang"]['parent_id'] = 'Ebeveyn ID';

$GLOBALS["lang"]['Parent ID'] = 'Ebeveyn ID';

$GLOBALS["lang"]['parent_name'] = 'Ebeveyn Adı';

$GLOBALS["lang"]['Parent Name'] = 'Ebeveyn Adı';

$GLOBALS["lang"]['part_number'] = 'Bölüm Numarası';

$GLOBALS["lang"]['Part Number'] = 'Bölüm Numarası';

$GLOBALS["lang"]['part_of_domain'] = 'Bölüm Of Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Bölüm Of Domain';

$GLOBALS["lang"]['Partition'] = 'Katılımcı';

$GLOBALS["lang"]['partition_count'] = 'Katılımcı Sayısı';

$GLOBALS["lang"]['Partition Count'] = 'Katılımcı Sayısı';

$GLOBALS["lang"]['partition_disk_index'] = 'Ekletion Disk Index';

$GLOBALS["lang"]['Partition Disk Index'] = 'Ekletion Disk Index';

$GLOBALS["lang"]['Pass'] = 'Pass Pass';

$GLOBALS["lang"]['Passed'] = 'Geçti';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasif Optik Alan Ağı';

$GLOBALS["lang"]['Password'] = 'Şifre Şifre';

$GLOBALS["lang"]['password'] = 'Şifre Şifre';

$GLOBALS["lang"]['password_changeable'] = 'Şifre Değiştirilebilir';

$GLOBALS["lang"]['Password Changeable'] = 'Şifre Değiştirilebilir';

$GLOBALS["lang"]['password_disabled'] = 'Şifre Başarısız';

$GLOBALS["lang"]['Password Disabled'] = 'Şifre Başarısız';

$GLOBALS["lang"]['password_expires'] = 'Şifre Expires';

$GLOBALS["lang"]['Password Expires'] = 'Şifre Expires';

$GLOBALS["lang"]['password_last_changed'] = 'Şifre Son Değişiklikler';

$GLOBALS["lang"]['Password Last Changed'] = 'Şifre Son Değişiklikler';

$GLOBALS["lang"]['password_required'] = 'Şifre Gerekli';

$GLOBALS["lang"]['Password Required'] = 'Şifre Gerekli';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Yol Yolu';

$GLOBALS["lang"]['Path'] = 'Yol Yolu';

$GLOBALS["lang"]['Performance'] = 'Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans Performans';

$GLOBALS["lang"]['Performed'] = 'Gerçekleştirilmiş';

$GLOBALS["lang"]['Permission'] = 'İzin';

$GLOBALS["lang"]['Permission Required'] = 'İzin Gerekli';

$GLOBALS["lang"]['permissions'] = 'İzinler';

$GLOBALS["lang"]['Permissions'] = 'İzinler';

$GLOBALS["lang"]['Persian'] = 'Farsça';

$GLOBALS["lang"]['Personal Area Network'] = 'Kişisel Alan Ağı';

$GLOBALS["lang"]['Personal area network'] = 'Kişisel Alan Ağı';

$GLOBALS["lang"]['Peru'] = 'Peru Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipinler';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fiziksel CPUlar';

$GLOBALS["lang"]['physical_count'] = 'Fiziksel Kont';

$GLOBALS["lang"]['Physical Count'] = 'Fiziksel Kont';

$GLOBALS["lang"]['physical_depth'] = 'Fiziksel Derinlik Derinliği';

$GLOBALS["lang"]['Physical Depth'] = 'Fiziksel Derinlik Derinliği';

$GLOBALS["lang"]['physical_height'] = 'Fiziksel Yükseklik';

$GLOBALS["lang"]['Physical Height'] = 'Fiziksel Yükseklik';

$GLOBALS["lang"]['physical_width'] = 'Fiziksel Genişlik';

$GLOBALS["lang"]['Physical Width'] = 'Fiziksel Genişlik';

$GLOBALS["lang"]['picture'] = 'Resim Resim';

$GLOBALS["lang"]['Picture'] = 'Resim Resim';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie grafikler isim veya my_name, açıklama veya my_description and count olmalıdır.';

$GLOBALS["lang"]['ping'] = 'Ping Ping';

$GLOBALS["lang"]['Ping'] = 'Ping Ping';

$GLOBALS["lang"]['Ping Target'] = 'Hedef';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Adaları';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Plan ve iç denetimler yürütmek';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Lütfen Open-AudIT yönetici logon var ve veritabanını yükseltin.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Lütfen oturum açın ve bu ASAP\'ı değiştirin.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Lütfen Open-AudIT Server\'a (veya Windows veya Linux) giriş yapın ve çalıştırın <code>nslookup IP_ADDRESS_OF_TARGET</code> Yemin ederim ya da kabuk. IP\'yi bir isim için çözebilmeli.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Lütfen seçim kutusunun metin girişi kutusunu genişleteceğini unutmayın.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Lütfen SSS\'yi görün';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Lütfen Opmantek\'deki destek bağlantınıza üç dosyayı gönderin ve sorununu tanımlayın.';

$GLOBALS["lang"]['Please set using'] = 'Lütfen kullanarak';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Lütfen ana sayfasını ziyaret edin';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polonya Polonya Polonya';

$GLOBALS["lang"]['Policies'] = 'Politika Politika Politika Politikaları Politika Politika Politikaları Politika Politika Politika Politikaları Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikaların istisnaları vardır.';

$GLOBALS["lang"]['policy'] = 'Politika Politikası';

$GLOBALS["lang"]['Policy'] = 'Politika Politikası';

$GLOBALS["lang"]['policy_id'] = 'Politika ID';

$GLOBALS["lang"]['Policy ID'] = 'Politika ID';

$GLOBALS["lang"]['Policy Result'] = 'Politika Sonuçları';

$GLOBALS["lang"]['Policy Results'] = 'Politika Sonuçları';

$GLOBALS["lang"]['Polish'] = 'Polonya';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Aşağıdaki değerler ile ilgili Populate:';

$GLOBALS["lang"]['Populated by audit.'] = 'denetim tarafından kısaltılır.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Keşif ve denetim tarafından mühürlendi.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Popated dynamically.';

$GLOBALS["lang"]['Populated from DNS.'] = 'DNS\'den Popated.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'SNMP keşfinden Popated.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Cihaz denetimlerinden Popated.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Ev sahibinden Popated.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Linux\'ta makineliden yapılmış.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'IP\'den varsayılan rota veya IP keşifte tespit edildi.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Ev sahibi isim komutlarından alındı.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Dış sistemden ek verilerle, bir JSON gösteriminde.';

$GLOBALS["lang"]['port'] = 'Port Port';

$GLOBALS["lang"]['Port'] = 'Port Port';

$GLOBALS["lang"]['port_name'] = 'Port Name';

$GLOBALS["lang"]['Port Name'] = 'Port Name';

$GLOBALS["lang"]['port_number'] = 'Port Number';

$GLOBALS["lang"]['Port Number'] = 'Port Number';

$GLOBALS["lang"]['ports_in_order'] = 'Ports In Order';

$GLOBALS["lang"]['Ports In Order'] = 'Ports In Order';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Dur After After After';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Dur After After After';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portekiz, Portekiz Cumhuriyeti';

$GLOBALS["lang"]['Portuguese'] = 'Portekiz Portekiz Portekiz Portekiz';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portekiz (Brazil)';

$GLOBALS["lang"]['position'] = 'Pozisyon pozisyonu';

$GLOBALS["lang"]['Position'] = 'Pozisyon pozisyonu';

$GLOBALS["lang"]['Post-Certification'] = 'Post-Certification';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Güç Devresi';

$GLOBALS["lang"]['Power Circuit'] = 'Güç Devresi';

$GLOBALS["lang"]['power_sockets'] = 'Power Uses';

$GLOBALS["lang"]['Power Sockets'] = 'Power Uses';

$GLOBALS["lang"]['Predictable'] = 'Tahmin edilebilir';

$GLOBALS["lang"]['Preferences'] = 'Tercihler';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Her 3 yılda tekrarlama için hazırlanın';

$GLOBALS["lang"]['Prerequisites'] = 'Ön Koşullar';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Önlemler ve Testler';

$GLOBALS["lang"]['present'] = 'Present Present Present Present';

$GLOBALS["lang"]['Present'] = 'Present Present Present Present';

$GLOBALS["lang"]['previous_value'] = 'Önceki Değer';

$GLOBALS["lang"]['Previous Value'] = 'Önceki Değer';

$GLOBALS["lang"]['primary'] = 'İlk önce birincil birincil birincil birincil';

$GLOBALS["lang"]['Primary'] = 'İlk önce birincil birincil birincil birincil';

$GLOBALS["lang"]['Primary Key'] = 'Temel Anahtar';

$GLOBALS["lang"]['print_queue'] = 'Yazdır Queue';

$GLOBALS["lang"]['Print Queue'] = 'Yazdır Queue';

$GLOBALS["lang"]['printer_color'] = 'Yazıcı Color';

$GLOBALS["lang"]['Printer Color'] = 'Yazıcı Color';

$GLOBALS["lang"]['printer_duplex'] = 'Yazıcı Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Yazıcı Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Yazıcı Port Name';

$GLOBALS["lang"]['Printer Port Name'] = 'Yazıcı Port Name';

$GLOBALS["lang"]['printer_shared'] = 'Yazıcı Paylaşımı';

$GLOBALS["lang"]['Printer Shared'] = 'Yazıcı Paylaşımı';

$GLOBALS["lang"]['printer_shared_name'] = 'Yazıcı Ortak Adı';

$GLOBALS["lang"]['Printer Shared Name'] = 'Yazıcı Ortak Adı';

$GLOBALS["lang"]['priority'] = 'Öncelik';

$GLOBALS["lang"]['Priority'] = 'Öncelik';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphrase';

$GLOBALS["lang"]['Privacy Protocol'] = 'Gizlilik Protokolü';

$GLOBALS["lang"]['privileges_required'] = 'Privileges Required';

$GLOBALS["lang"]['Privileges Required'] = 'Privileges Required';

$GLOBALS["lang"]['processor'] = 'Processor';

$GLOBALS["lang"]['Processor'] = 'Processor';

$GLOBALS["lang"]['processor_count'] = 'Processor Count';

$GLOBALS["lang"]['Processor Count'] = 'Processor Count';

$GLOBALS["lang"]['processor_slot_count'] = 'Processor Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Processor Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Processor Type';

$GLOBALS["lang"]['Processor Type'] = 'Processor Type';

$GLOBALS["lang"]['Processors'] = 'Süreçtörler';

$GLOBALS["lang"]['product_name'] = 'Ürün Adı';

$GLOBALS["lang"]['Product Name'] = 'Ürün Adı';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'CPE\'den Ürün Adı: ';

$GLOBALS["lang"]['products'] = 'Ürünler';

$GLOBALS["lang"]['Products'] = 'Ürünler';

$GLOBALS["lang"]['Professional'] = 'Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel Profesyonel';

$GLOBALS["lang"]['profile'] = 'Profil Profili';

$GLOBALS["lang"]['Profile'] = 'Profil Profili';

$GLOBALS["lang"]['program'] = 'Program Programı';

$GLOBALS["lang"]['Program'] = 'Program Programı';

$GLOBALS["lang"]['Properties'] = 'Özellikler Özellikler';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Perrietary. HighCharts\'i değiştirmek istiyorsanız, bir tane gerektirebilir';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Gizliliği, bütünlüğünü ve bilgi kullanılabilirliğini korur';

$GLOBALS["lang"]['protocol'] = 'Protokol Protokolü';

$GLOBALS["lang"]['Protocol'] = 'Protokol Protokolü';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Bir açıklama ve seçme ve süresi sona erer.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Bir isim verin - açık-AudIT ., ancak istediğiniz her şeyi adlandırabilirsiniz.<br/>Open-AudIT formundan, değerini kopyalayın <i>Emekli URI</i> Alan ve onu içine yapıştırın <i>Sign-in yönlendirme URIs</i> OKTA\'da alan.<br/>Sign-out yönlendirme URIs is recommended, but if you can use open-audit /index. php/logout with your Open-AudIT servers http adresi, as per the screen.<br/>Normalde normalde senin Open-AudIT URL gibi bir şey görünecek';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Doğru kimliklere sahip oldunuz, Device Seed Discovery aşağıdaki gibi çalışır';

$GLOBALS["lang"]['provider'] = 'Sağlayıcı';

$GLOBALS["lang"]['Provider'] = 'Sağlayıcı';

$GLOBALS["lang"]['published'] = 'Yayınlandı';

$GLOBALS["lang"]['Published'] = 'Yayınlandı';

$GLOBALS["lang"]['published_date'] = 'Yayınlanmış Tarih';

$GLOBALS["lang"]['Published Date'] = 'Yayınlanmış Tarih';

$GLOBALS["lang"]['publisher'] = 'Publisher Publisher';

$GLOBALS["lang"]['Publisher'] = 'Publisher Publisher';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Riko';

$GLOBALS["lang"]['Purchase'] = 'Satın Alma Satın Al';

$GLOBALS["lang"]['purchase_amount'] = 'Satın Alma Miktarı';

$GLOBALS["lang"]['Purchase Amount'] = 'Satın Alma Miktarı';

$GLOBALS["lang"]['purchase_cost_center'] = 'Satın Alma Maliyet Merkezi Satın Alma';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Satın Alma Maliyet Merkezi Satın Alma';

$GLOBALS["lang"]['purchase_count'] = 'Satın Alma Kont';

$GLOBALS["lang"]['Purchase Count'] = 'Satın Alma Kont';

$GLOBALS["lang"]['purchase_date'] = 'Satın almak Tarih';

$GLOBALS["lang"]['Purchase Date'] = 'Satın almak Tarih';

$GLOBALS["lang"]['purchase_invoice'] = 'Satın almak için';

$GLOBALS["lang"]['Purchase Invoice'] = 'Satın almak için';

$GLOBALS["lang"]['purchase_order'] = 'Satın Alma Siparişi';

$GLOBALS["lang"]['Purchase Order'] = 'Satın Alma Siparişi';

$GLOBALS["lang"]['purchase_order_number'] = 'Sipariş Numarası';

$GLOBALS["lang"]['Purchase Order Number'] = 'Sipariş Numarası';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Satın Alma Hizmeti Sözleşmesi Sayı Numarası';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Satın Alma Hizmeti Sözleşmesi Sayı Numarası';

$GLOBALS["lang"]['purchase_vendor'] = 'Satın Alma Satışor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Satın Alma Satışor';

$GLOBALS["lang"]['purpose'] = 'Amaç';

$GLOBALS["lang"]['Purpose'] = 'Amaç';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Queries';

$GLOBALS["lang"]['Queries'] = 'Queries';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Queries, Open-AudIT\'in önemli bir parçasıdır. keşfettiğiniz tüm cihaz verilerinden anlamlı bilgi almanızı sağlarlar. Summaries ve gruplarla birlikte, önemli bilgileri çıkarmak için güçlü bir mekanizma sağlarlar.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Gruplar için kuyruklar sadece seçmeli';

$GLOBALS["lang"]['Query'] = 'Sorgu Sorgulama';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Bu Active Directory, kullanıcıların çalışma ünitesini belirlemek için öncelikle sorgulayın.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Bu Active Directory, kullanıcıların çalışma ünitesini belirlemek için ikinci bir soru.';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Materials';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC Active Directory ve openLDAP için';

$GLOBALS["lang"]['RU Start'] = 'RU Başlangıç';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Seviye Düzeyi';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profil';

$GLOBALS["lang"]['Rack'] = 'Turun';

$GLOBALS["lang"]['rack_devices'] = 'Raf Cihazları';

$GLOBALS["lang"]['Rack Devices'] = 'Raf Cihazları';

$GLOBALS["lang"]['rack_id'] = 'Raf ID';

$GLOBALS["lang"]['Rack ID'] = 'Raf ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Raf Yönetimi ve Raporlama';

$GLOBALS["lang"]['Racks'] = 'Raflar';

$GLOBALS["lang"]['racks'] = 'Raflar';

$GLOBALS["lang"]['radio'] = 'Radyo Radyo';

$GLOBALS["lang"]['Radio'] = 'Radyo Radyo';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Karşılaştırma';

$GLOBALS["lang"]['Rationale'] = 'Karşılaştırma';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Read Oku';

$GLOBALS["lang"]['Read'] = 'Read Oku';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Open-AudIT Wiki\'de online belgemizi okuyun.';

$GLOBALS["lang"]['Read through the log file at'] = 'Giriş dosyası aracılığıyla okuyun';

$GLOBALS["lang"]['Received'] = 'Kabul edildi';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Son zamanlarda soruyu sorduk - Open-AudIT\'i diğer benzer programlardan daha güvenli görüyor musunuz? Çoğu şeyde olduğu gibi, cevap cevap, <i>Bu bağlıdır</i>.<br/><br/>Open-Aud IT, son derece güvenli olması gibi bir şekilde çalıştırılabilir. Ancak bilgisayar tabanlı güvenlik ile her zamanki gibi, bir şey yapmak istediğiniz daha güvenli, daha ikna edici hale gelir. Eski cümle <i>En güvenli bilgisayar, kapatılan ve dolapta<i> Düşünmeye gelir.<br/><br/>Aşağıda, güvenliği artıracak olan Open-AudIT ile kullanılabilir bazı seçenekleri özetleyeceğiz. Open-AudIT içindeki çoğu öğe gibi, bunlar seçeneklerdir ve zorunlu değildir. Güvenlik ne kadar sürer sana.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertification: Her üç yılda gerekli';

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Emekli URI';

$GLOBALS["lang"]['redirect_uri'] = 'Emekli Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Emekli Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Veri ihlallerinin ve siber tehditlerin riskini azaltır';

$GLOBALS["lang"]['references'] = 'Referanslar Referanslar';

$GLOBALS["lang"]['References'] = 'Referanslar Referanslar';

$GLOBALS["lang"]['region'] = 'Bölge Bölgesi';

$GLOBALS["lang"]['Region'] = 'Bölge Bölgesi';

$GLOBALS["lang"]['registered_user'] = 'Registered User';

$GLOBALS["lang"]['Registered User'] = 'Registered User';

$GLOBALS["lang"]['Rejected'] = 'Rejected';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Salı';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Uzak Uzak Uzak';

$GLOBALS["lang"]['remote_address'] = 'Uzak Adres';

$GLOBALS["lang"]['Remote Address'] = 'Uzak Adres';

$GLOBALS["lang"]['remote_port'] = 'Uzak Limanı';

$GLOBALS["lang"]['Remote Port'] = 'Uzak Limanı';

$GLOBALS["lang"]['Remove'] = 'Kaldırın';

$GLOBALS["lang"]['Remove Exception'] = 'Kaldırın';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Tamamen keşfedilen ve denetimli bir Windows PC\'ye sahip olana kadar tekrarlayın.';

$GLOBALS["lang"]['Report'] = 'Rapor';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Cihazlarınızda rapor, ağlar ve daha fazlası';

$GLOBALS["lang"]['reportable'] = 'Raporlanabilir';

$GLOBALS["lang"]['Reportable'] = 'Raporlanabilir';

$GLOBALS["lang"]['Reports'] = 'Raporlar';

$GLOBALS["lang"]['request'] = 'Talep İste';

$GLOBALS["lang"]['Request'] = 'Talep İste';

$GLOBALS["lang"]['Request Method'] = 'İstek Yöntemi';

$GLOBALS["lang"]['Request Vulnerability'] = 'Vulnerability';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Özel bir istek CVE';

$GLOBALS["lang"]['requested'] = 'İstekli';

$GLOBALS["lang"]['Requested'] = 'İstekli';

$GLOBALS["lang"]['require_port'] = 'Port';

$GLOBALS["lang"]['Require Port'] = 'Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Bir Open Port';

$GLOBALS["lang"]['Required'] = 'Gerekli Gerekli Gerekli Gerekli Gerekli';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Gerekli AWS kullanıcı izinleri';

$GLOBALS["lang"]['Required Fields'] = 'Gerekli Alanlar';

$GLOBALS["lang"]['Reset'] = 'reset';

$GLOBALS["lang"]['Reset All Data'] = 'Tüm Data';

$GLOBALS["lang"]['Reset to Default'] = 'Varsayılan olarak';

$GLOBALS["lang"]['resource'] = 'Kaynak';

$GLOBALS["lang"]['Resource'] = 'Kaynak';

$GLOBALS["lang"]['Resource Name'] = 'Kaynak Adı';

$GLOBALS["lang"]['Resources'] = 'Kaynaklar Kaynakları Kaynaklar';

$GLOBALS["lang"]['response'] = 'Yanıt';

$GLOBALS["lang"]['Response'] = 'Yanıt';

$GLOBALS["lang"]['responsibility'] = 'Sorumluluk Sorumluluk Sorumluluk';

$GLOBALS["lang"]['Responsibility'] = 'Sorumluluk Sorumluluk Sorumluluk';

$GLOBALS["lang"]['Restore my Licenses'] = 'Lisanslarımı geri yükleme';

$GLOBALS["lang"]['Restrict to Private'] = 'Özellik';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Subnet';

$GLOBALS["lang"]['result'] = 'Sonuç Sonuç';

$GLOBALS["lang"]['Result'] = 'Sonuç Sonuç';

$GLOBALS["lang"]['Resulting Function'] = 'Fonksiyonlar';

$GLOBALS["lang"]['Results'] = 'Sonuçlar Sonuçlar Sonuçlar Sonuçlar';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Bir cihaz listesi erişim';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Windows 2008 gibi OS Name ile bir cihaz listesi';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Cihazın 88 ile ilgili tüm ayrıntıları alın.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Windows çalışan tüm cihazlara erişim.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Standart sütunlarla tüm cihazlara erişim';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Windows kullanan ilk 10 cihaz hostname tarafından sipariş edildi';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Tüm cihazlardan kayıt, ip, hostname, domain, türü tüm cihazlardan';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Erişim tarihi: Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Erişim tarihi: Ident';

$GLOBALS["lang"]['retrieved_name'] = 'WEB';

$GLOBALS["lang"]['Retrieved Name'] = 'WEB';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Cihazdan yararlanın - Windows:Win32_Computer SystemÜrün, Linux:dmidecode, MacOS:system_ profilr, ESXi:vim-cmd hostvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Bir Credentials Listesine katkıda bulunmak';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Retrieving veya Yaratmak';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Varsayılan sütun setiyle bir cihaz koleksiyonu döndürür (devices.id, cihazlar.icon, cihazlar.ip, cihazlar.dns_fqdn, cihazlar.identification, cihazlar.description, devices.manufacturer, cihazlar.';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Yöncülere yüklenen tüm Modüllerin bir listesini döndürür';

$GLOBALS["lang"]['Return an individual device details'] = 'Bireysel bir cihaza dön';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Bir liste döndürür {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Bir {collection} ayrıntıları döndürür.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001 gereksinimlerine karşı mevcut uygulamaları gözden geçirin';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Değerlendirme Sonuçları';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Değerlendirme Sonuçları';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risk Değerlendirme ve Tedavi';

$GLOBALS["lang"]['Risk Management'] = 'Risk Yönetimi Risk Yönetimi';

$GLOBALS["lang"]['Role'] = 'Rol Rolü';

$GLOBALS["lang"]['roles'] = 'Roller';

$GLOBALS["lang"]['Roles'] = 'Roller';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roller sadece Open-AudIT Enterprise lisansınız varsa oluşturulabilir ve düzenlenebilir. Çoğu kullanıcı için, rollerin varsayılan seti gerekli olan her şey olmalıdır.';

$GLOBALS["lang"]['Romania'] = 'Romanya Romanya Romanya';

$GLOBALS["lang"]['Romanian'] = 'Romanya';

$GLOBALS["lang"]['Room'] = 'Oda Odası';

$GLOBALS["lang"]['route'] = 'Yol Tarifi';

$GLOBALS["lang"]['Route'] = 'Yol Tarifi';

$GLOBALS["lang"]['Row'] = 'Row Row';

$GLOBALS["lang"]['Row Count'] = 'Row Kont';

$GLOBALS["lang"]['row_position'] = 'Row Position';

$GLOBALS["lang"]['Row Position'] = 'Row Position';

$GLOBALS["lang"]['Rows'] = 'Rows';

$GLOBALS["lang"]['ru_height'] = 'Ru Boy';

$GLOBALS["lang"]['Ru Height'] = 'Ru Boy';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Kural Grup Kodu';

$GLOBALS["lang"]['Rule Group'] = 'Kural Grup Kodu';

$GLOBALS["lang"]['rules'] = 'Kurallar Kuralları';

$GLOBALS["lang"]['Rules'] = 'Kurallar Kuralları';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Kurallar, cihazın keşfedildiği veya denetim sonucu işlendiği bir cihaza karşı yapılır. Kurallar diğer niteliklere dayanan bir cihaz özelliği kurmak için kullanılabilir.<br/><br/>NOT - Şu anda, bir / içeren bir kural girişi veya çıktı silemeyiz. Bu, çünkü çerçeve URL\'nin bir parçası olarak ve kodumuzdan önce bile 404 geri dönüyor. Bunun için iş, kuralın kendisini silmek, sonra gerekli olan girdileri ve çıktıları yeniden yaratmaktır. Neyse ki bir / içeren girişler ve çıkışlar nadir değildir (ne yazık ki, varsayılan olarak mevcut değildir).';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Cihazların Üzerinde Discovery';

$GLOBALS["lang"]['Run Your Discovery'] = 'Your Discovery';

$GLOBALS["lang"]['Run a Command'] = 'Bir Komut';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Bir keşif yapın ve öğrenin <b>Ağınızda ne var?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Senaryoyu kopyalayarak çalıştırın <code>cscript test_windows_client.vbs</code> konsolda.';

$GLOBALS["lang"]['Run this Command'] = 'Bu Komutayı Run';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Run';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache Service Under Windows';

$GLOBALS["lang"]['Russian'] = 'Rus Rus Rus Rus';

$GLOBALS["lang"]['Russian Federation'] = 'Rusya Federasyonu';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx Level';

$GLOBALS["lang"]['Rx Level'] = 'Rx Level';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profil';

$GLOBALS["lang"]['SAN Audit'] = 'SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

$GLOBALS["lang"]['SELECT'] = 'SE';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaylar';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Açıklamaları';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'Bu durumu içeren SQL, icra edilemez widget\'ta sonuçlanacaktır.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts ve Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre ve Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent ve Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San San San San';

$GLOBALS["lang"]['San'] = 'San San San San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome ve Principe';

$GLOBALS["lang"]['Saturday'] = 'Cumartesi Cumartesi Cumartesi Cumartesi';

$GLOBALS["lang"]['Saudi Arabia'] = 'Suudi Arabistan';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Dosyayı kurtar ve çalıştırın. Dosyayı yüklemek için bir yönetici olarak çalıştırdığınızdan emin olun (sağ tıklama, Yönetici olarak Run).';

$GLOBALS["lang"]['Save as Default'] = 'Varsayılan olarak Kaydet';

$GLOBALS["lang"]['Save the downloaded file.'] = 'İndirilen dosyayı kurtarın.';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Scan Seçenekleri';

$GLOBALS["lang"]['Scan Options'] = 'Scan Seçenekleri';

$GLOBALS["lang"]['Scan Options ID'] = 'Tarama Seçenekleri ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Bu port(s) ve açık tespit edilirse, bu port SSH iletişim için kullanın. Bu, yukarıdaki Özel TCP Ports listesine eklenmiştir (eğer zaten dahil değilse), bu yüzden bu listede de dahil olmak zorunda değildir. Comma seperated, hiçbir yer yok.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Nmap\'u en üst düzey TCP portlarını tara.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Nmap\'u UDP limanlarının en üst sayısını tarayın.';

$GLOBALS["lang"]['schedule'] = 'Schedule Schedule Schedule';

$GLOBALS["lang"]['Schedule'] = 'Schedule Schedule Schedule';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Programlanmış cihaz keşfi ve raporlama Open-AudIT Profesyonelleri yoğun IT profesyonelleri için bir verimli bir çözüm sunar.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - keşif, raporlama ve daha fazlası';

$GLOBALS["lang"]['scope'] = 'Kapsam';

$GLOBALS["lang"]['Scope'] = 'Kapsam';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Kapsam, kırılgan bileşeninin orijinal güvenlik otoritesinin ötesinde bir kırılganlığı etkileyen kaynakları temsil eden Authorization Scope olarak bilinir.<br/><br/>Bu özellik için tek iki geçerli değer,';

$GLOBALS["lang"]['script_timeout'] = 'Senaryo Timeoutout';

$GLOBALS["lang"]['Script Timeout'] = 'Senaryo Timeoutout';

$GLOBALS["lang"]['scripts'] = 'Senaryolar';

$GLOBALS["lang"]['Scripts'] = 'Senaryolar';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Arama Arama';

$GLOBALS["lang"]['Search For a Device'] = 'Bir Device for a Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'DataTables kullanarak arama';

$GLOBALS["lang"]['Second'] = 'İkincisi';

$GLOBALS["lang"]['secondary'] = 'Orta orta orta';

$GLOBALS["lang"]['Secondary'] = 'Orta orta orta';

$GLOBALS["lang"]['Secondary Text'] = 'ikincil Text';

$GLOBALS["lang"]['Secret Key'] = 'Gizli Anahtar';

$GLOBALS["lang"]['section'] = 'Bölüm Bölüm Bölüm';

$GLOBALS["lang"]['Section'] = 'Bölüm Bölüm Bölüm';

$GLOBALS["lang"]['secure'] = 'Güvenli Güvenli Güvenli Güvenli Güvenli';

$GLOBALS["lang"]['Secure'] = 'Güvenli Güvenli Güvenli Güvenli Güvenli';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Güvenlik İçerik Otomasyon Protokolü Protokolü';

$GLOBALS["lang"]['Security Level'] = 'Güvenlik Düzeyi';

$GLOBALS["lang"]['Security Name'] = 'Güvenlik Adı';

$GLOBALS["lang"]['Security Status'] = 'Güvenlik Durumu';

$GLOBALS["lang"]['security_zone'] = 'Güvenlik Bölgesi';

$GLOBALS["lang"]['Security Zone'] = 'Güvenlik Bölgesi';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Yukarıda bakınız. NOT: Bu, LDAP sunucusunda kendi imzalı bir sertifika tarafından da kaynaklanabilir. Bunun gelecekteki bir serbest bırakılmasına izin vermek için çalışıyoruz.';

$GLOBALS["lang"]['See our page on enabling'] = 'Sayfamıza bakın';

$GLOBALS["lang"]['Seed Discoveries'] = 'Tohum Discoveries';

$GLOBALS["lang"]['seed_ip'] = 'Tohum IP';

$GLOBALS["lang"]['Seed IP'] = 'Tohum IP';

$GLOBALS["lang"]['seed_ping'] = 'Tohum Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Tohum Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Tohum Özelliği';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Tohum Özelliği';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Tohum Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Tohum Subnet';

$GLOBALS["lang"]['Select'] = 'Select Select Select';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Admin -> Görevler -> Create Create Create Create Create Create menüden görev.';

$GLOBALS["lang"]['Select All'] = 'All Select All';

$GLOBALS["lang"]['Select All Devices'] = 'Tüm cihazları seçin';

$GLOBALS["lang"]['select_external_attribute'] = 'Dış Attribute';

$GLOBALS["lang"]['Select External Attribute'] = 'Dış Attribute';

$GLOBALS["lang"]['select_external_count'] = 'Dış Kont seçin';

$GLOBALS["lang"]['Select External Count'] = 'Dış Kont seçin';

$GLOBALS["lang"]['select_external_type'] = 'Dış seçin Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['Select External Type'] = 'Dış seçin Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['select_external_value'] = 'Dış seçin Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['Select External Value'] = 'Dış seçin Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['select_internal_attribute'] = 'İç Attribute seçin';

$GLOBALS["lang"]['Select Internal Attribute'] = 'İç Attribute seçin';

$GLOBALS["lang"]['select_internal_count'] = 'İç Kont seçin';

$GLOBALS["lang"]['Select Internal Count'] = 'İç Kont seçin';

$GLOBALS["lang"]['select_internal_type'] = 'İç seçin Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['Select Internal Type'] = 'İç seçin Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['select_internal_value'] = 'İç seçin Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['Select Internal Value'] = 'İç seçin Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Menü seçin -> Yönetme -> Baselines -> Liste Baselines.';

$GLOBALS["lang"]['Select a Table'] = 'Bir tablo seçin';

$GLOBALS["lang"]['Select an accredited certification body'] = 'akredite bir sertifikasyon organı seçin';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Uygun kontrolleri seçin ve uygulayın (Annex A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Seç <i>İLETİŞİM Güvenlik Güvenliği</i> sekmesi<br/><br/>Access Permissions için tıklayın Noter';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Seç <i>Sign On</i> sekme ve değerini kopyalayın <i>Issuer</i> (Sadece URL\'nin kendisi). Bunu Open-AudIT\'a yapıştırın <i>Issuer</i> Alan.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Seç <i>Bu Hesap</i> checkbox ve hesap adı ve şifre sağlar.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Başlangıç menüsü ve tipi seçin <i>hizmetler<.i>. Hizmetler ikonunu tıklayın.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Auth Menthod tipini, ilgili ayrıntıları oluşturmak ve giriş yapmak için seçin.';

$GLOBALS["lang"]['Self Delete'] = 'Self Delete';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Hassasiyet';

$GLOBALS["lang"]['Sensitivity'] = 'Hassasiyet';

$GLOBALS["lang"]['September'] = 'Eylül Eylül Eylül';

$GLOBALS["lang"]['Serbia'] = 'Sırbistan';

$GLOBALS["lang"]['serial'] = 'Seri Seri Seri';

$GLOBALS["lang"]['Serial'] = 'Seri Seri Seri';

$GLOBALS["lang"]['serial_imei'] = 'Seri Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seri Imei';

$GLOBALS["lang"]['serial_sim'] = 'Seri Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Seri Sim';

$GLOBALS["lang"]['series'] = 'Serisi';

$GLOBALS["lang"]['Series'] = 'Serisi';

$GLOBALS["lang"]['server'] = 'Server Server Server';

$GLOBALS["lang"]['Server'] = 'Server Server Server';

$GLOBALS["lang"]['server_id'] = 'Server ID';

$GLOBALS["lang"]['Server ID'] = 'Server ID';

$GLOBALS["lang"]['Server Is'] = 'Server Is Server Is Server';

$GLOBALS["lang"]['server_item'] = 'Sunucu Adı';

$GLOBALS["lang"]['Server Item'] = 'Sunucu Adı';

$GLOBALS["lang"]['Server Status'] = 'Server Status';

$GLOBALS["lang"]['Servers'] = 'Servers';

$GLOBALS["lang"]['Servers Only'] = 'Serverlar Sadece';

$GLOBALS["lang"]['service'] = 'Servis Servisi';

$GLOBALS["lang"]['Service'] = 'Servis Servisi';

$GLOBALS["lang"]['service_identifier'] = 'Hizmet Identifier';

$GLOBALS["lang"]['Service Identifier'] = 'Hizmet Identifier';

$GLOBALS["lang"]['service_level_a'] = 'Hizmet Seviyesi A';

$GLOBALS["lang"]['Service Level A'] = 'Hizmet Seviyesi A';

$GLOBALS["lang"]['service_level_b'] = 'Servis Düzeyi B';

$GLOBALS["lang"]['Service Level B'] = 'Servis Düzeyi B';

$GLOBALS["lang"]['service_network'] = 'Servis Ağı';

$GLOBALS["lang"]['Service Network'] = 'Servis Ağı';

$GLOBALS["lang"]['service_number'] = 'Hizmet Numarası';

$GLOBALS["lang"]['Service Number'] = 'Hizmet Numarası';

$GLOBALS["lang"]['service_pack'] = 'Servis Paketi';

$GLOBALS["lang"]['Service Pack'] = 'Servis Paketi';

$GLOBALS["lang"]['service_plan'] = 'Hizmet Planı';

$GLOBALS["lang"]['Service Plan'] = 'Hizmet Planı';

$GLOBALS["lang"]['service_provider'] = 'Servis Sağlayıcı';

$GLOBALS["lang"]['Service Provider'] = 'Servis Sağlayıcı';

$GLOBALS["lang"]['service_tag'] = 'Servis Tag';

$GLOBALS["lang"]['Service Tag'] = 'Servis Tag';

$GLOBALS["lang"]['service_type'] = 'Servis Türü';

$GLOBALS["lang"]['Service Type'] = 'Servis Türü';

$GLOBALS["lang"]['Service Under Windows'] = 'Windows Under Windows';

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set Set Set Set';

$GLOBALS["lang"]['set_by'] = 'Set Tarafından Set';

$GLOBALS["lang"]['Set By'] = 'Set Tarafından Set';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Discovery işlevi tarafından ayarlayın - normalde bunu manuel olarak ayarlar.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Denetim_domain tarafından ayarlayın veya_domain senaryoları keşfedin. Set etmeyin.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'İç verilerin sermayelendirilmesi için dış metni ayarlayın.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Dış metni daha düşüklüğe ayarlayın.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Dış metni üst köşeye ayarlayın.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Listedeki tabloların boyutunu (normal veya kompakt) ayarlayın.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Bunu, AD’den gelen sistemleri eklemek istiyorsanız, bu tarihten beri AD tarafından görüldü.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Bir subnet üzerinde Discovery kurmak, web arayüzü aracılığıyla düzenli bir Discovery çalıştırmak için neredeyse aynıdır. Sadece ek eşyalar planlanan saat ve gün (s) ve Scheduled Görevin kendisi için bir isimdir. Farklı bilgi setlerini kullanarak birden fazla keşif planlamak için bundan yararlanabilirsiniz.<br/><br/>Subnet Discovery\'de olduğu gibi, Active Directory Discovery aynı alanlarda bir gün, saat (s) ve adı ile normal bir Active Directory Discovery olarak da aynıdır.<br/><br/>Open-AudIT Server\'ın ona raporlaması varsa, ek bir düşüş sağlanır. Görevin hangi çalıştıracağını belirtmeniz için bunu seçebilirsiniz. Sadece Discovery görevleri koleksiyoncular için desteklenmektedir. Aynı eşyaları düzenli bir Discovery olarak belirtin, ancak bu görevi yürütmek için alternatif koleksiyon sağlar.';

$GLOBALS["lang"]['severity'] = 'Şiddetlilık';

$GLOBALS["lang"]['Severity'] = 'Şiddetlilık';

$GLOBALS["lang"]['severity_text'] = 'Severity Text';

$GLOBALS["lang"]['Severity Text'] = 'Severity Text';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Şiddetlilık hesaplandı <code>base_score</code> Ve bir tane olabilir: Yok, Low, Medium, High, critical.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Share Share Share';

$GLOBALS["lang"]['Share'] = 'Share Share Share';

$GLOBALS["lang"]['Share Name'] = 'Share Name Name';

$GLOBALS["lang"]['shared'] = 'Paylaşılan Paylaşım Paylaşım';

$GLOBALS["lang"]['Shared'] = 'Paylaşılan Paylaşım Paylaşım';

$GLOBALS["lang"]['shared_name'] = 'Ortak İsim';

$GLOBALS["lang"]['Shared Name'] = 'Ortak İsim';

$GLOBALS["lang"]['shell'] = 'Shell Shell';

$GLOBALS["lang"]['Shell'] = 'Shell Shell';

$GLOBALS["lang"]['Ship Date'] = 'Gemi Tarihi';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped varsayılan eşyaların bir setidir. Bunlar menüye girerek bulunabilir';

$GLOBALS["lang"]['short'] = 'Kısa Kısa Kısa Kısa';

$GLOBALS["lang"]['Short'] = 'Kısa Kısa Kısa Kısa';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Bu cihazdan mevcut olmayan tüm verileri kaldırmalıyım?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Bu dosya (veya desen) bildirilen dosyaları dışlamak için kullanılmalıdır. Normalde, dosyaları denetlemek için, bu ayarlanıyor <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Bu satıcı, FirstWave\'den gelen güvenlikleri geri alırken kullanılmalıdır.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Uzak servisten cihazlar eklemeliyiz, yerel olarak.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Bu lisansı seçilmiş Org\'a ve Orgs çocukları için de uygulamalıyız?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Yönetim yazılımı tespit edilirse bir SAN’i denetim etmeliyiz.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Dağ puanlarını denetlemeliyiz.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Netstat limanlarını (evet, hayır, sunucular sadece).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Oluşturulan yazılımı denetlemeliyiz.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Açık bir liman olmak için filtrelenmiş bir liman düşünmeliyiz - ve bu nedenle bu IP\'yi bağlı bir cihaz olarak mı bayrağız?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Açık bir port olarak açık bir port dikkate almalı mıyız - ve bu nedenle bu IP\'yi bağlı bir cihaz olarak mı bayrağın?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'hostnameyi daha düşüklüğe dönüştürmeliyiz.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Denetim sonucuna dayanan bir dosya oluşturmalıyız.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Bu grubu web arayüzünde açığa çıkarmalıyız.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Bu sorguyu web arayüzünde rapor menüsü altındaki raporlar listesinde açığa çıkarmalıyız.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Bu soruyu web arayüzündeki Raporlar menüsü altındaki raporlar listesinde açığa çıkarmalıyız.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Uygulama yaparken denetim senaryo penceresini saklamalıyız.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Bir geçersiz veya kendi imzalanmış SSL sertifikasını görmezden gelmeli ve yine de sonuç vermelidir.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Open-Scap\'ı hedef makine üzerinde yüklemeliyiz.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'VMware\'den bilinen bir olası çoğaltma olsa bile bir cihaz bazlı mak adresiyle eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'DNS fqdn\'a dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'DNS hostnamesine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'UUID\'e dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Dbus idına dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'fqdn\'a dayanan bir cihazı eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Ev sahibi adı ve UUID\'e dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Ev sahibi adı ve dbus id\'a dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Ev sahibi adı ve serisine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Herhangi bir veri olmadan mevcut bir cihazın varsa ipine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Bir cihazı kendi ipine göre eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'mak adresine dayanan bir cihazı eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Bir cihazı seri ve türüne göre eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'seri numarasına dayanan bir cihazı eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Sadece SNMP sisName ve serisine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Sadece SNMP silerine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Sadece hostnamesine dayanan bir cihazla eşleştirmeliyiz.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'IP\'yi taramaya çalışmadan önce kesmeli miyiz? Eğer ping’e cevap vermezse, bu cihazı atlayın.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Yerel cihazlarımızdan dış sistemi ortaya çıkarmamız gerekir.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Tüm DNS isimlerini almalı mıyız';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Bir denetim yürütüp (y/n) göndermeliyiz.';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDP port 161 kullanarak SNMP için test etmeliyiz.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'SSH için TCP port 22 kullanarak test etmeliyiz.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCP port 135 kullanarak WMI için test etmeliyiz.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ajanı kaldırmamalıyız (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Kontrol sonucu sunmak için sistem veya kullanıcı proxy seviyesini kullanmalıdır.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Kazanan 32_product WMI sınıfı (Microsoft tarafından tavsiye edilmez) yeniden kurulduğunda.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Bu yöntemi kullanıcı kimliklerini doğrulamak için kullanmalıdır. Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to <code>y</code> veya <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Bu yöntemi bir kullanıcı rollerini populate etmek için kullanmalıyız. Alan <code>use_auth</code> ayarlanmalıdır <code>y</code> Bunu kullanmak için. Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to <code>y</code> veya <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Bu değeri dış ve iç cihazlarla eşleştirmeliyiz. Varsayılan integralimiz burada IP ve UUID kullanır. Dış ve iç cihaz arasındaki bu maçdan ikisi de aynı cihaz olduğunu düşünüyoruz.';

$GLOBALS["lang"]['Show All'] = 'Hepsini göster';

$GLOBALS["lang"]['sid'] = 'Sid Sid';

$GLOBALS["lang"]['Sid'] = 'Sid Sid';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapur Singapur';

$GLOBALS["lang"]['Site A'] = 'Site A Site';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'Site Saatleri A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Saatleri A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Saatleri B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Saatleri B';

$GLOBALS["lang"]['size'] = 'Boyut Boyutu';

$GLOBALS["lang"]['Size'] = 'Boyut Boyutu';

$GLOBALS["lang"]['slaves'] = 'Köleler';

$GLOBALS["lang"]['Slaves'] = 'Köleler';

$GLOBALS["lang"]['Slovak'] = 'Slovakya';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakya (Slovak Cumhuriyeti)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenya';

$GLOBALS["lang"]['Slovenian'] = 'Slovenya';

$GLOBALS["lang"]['Smart Status'] = 'Akıllı Durum';

$GLOBALS["lang"]['smversion'] = 'Smvers';

$GLOBALS["lang"]['Smversion'] = 'Smvers';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Bu yüzden bir senaryo recalcitrant cihazı üzerinde çalışmıyor. Grrr. Windows, Linux ve MacOS için senaryolar tüm debugging argümanını kabul eder. Bu, senaryonun kendisinde veya komut satırında ayarlanabilir. Bu seçeneğin 5\'e ayarlandığını kullanarak senaryoyu çalıştırın ve senaryonun hangi bölümünde başarısızlık meydana geldiğini görünmelisiniz. Örneğin';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Bu yüzden düzenli bir kelime dışında, başka seçenekler var - sorduğunuza sevindim! Standart Open-AudIT API\'si olarak, filtreleme için birkaç operatörümüz var. Değerden önce olabilecek Operatörler';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Bu yüzden cihazlarınızı keşfetmeniz için Open-AudIT kimliklerini sağlayan bir sorun var. Bir cevabım var - o zaman yok! Tabii ki, keşif dilimlenmiş ekmekten beri en iyi şeydir. Zamandan önce bilmeniz gerekmez <i>Ağınızda ne var</i>. Ancak, kimlik sağlamadan cihazlardan verileri nasıl çıkarabilirsiniz?<br/><br/>Bilgisayarlar durumunda, kolay bir seçenek, hedef makinelere uygun denetim senaryosunu kopyalamak ve bir program üzerinde yürütmeyi kurmaktır. wiki üzerinde daha fazla detay. Makineler, verileri bu programda Open-AudIT\'e gönderir, neredeyse sanki keşif yapıyormuş gibi. Cihaz sadece bir programda denetim senaryosu çalıştırıyor (again, denetim senaryoyu okuyabilirsiniz) çünkü bunu söyleyen ve sunucuya gönderirsiniz. Hiçbir bilgi her şeye dahil değildir.<br/><br/>Ve şimdi Windows için Agents var. Gerçek yüklü bir Ajanın avantajları';

$GLOBALS["lang"]['socket'] = 'Use';

$GLOBALS["lang"]['Socket'] = 'Use';

$GLOBALS["lang"]['software'] = 'Yazılım';

$GLOBALS["lang"]['Software'] = 'Yazılım';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Found Last 7 Days';

$GLOBALS["lang"]['Software Found Today'] = 'Software Found Today Today';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software Found Dün';

$GLOBALS["lang"]['software_key'] = 'Software Keyif';

$GLOBALS["lang"]['Software Key'] = 'Software Keyif';

$GLOBALS["lang"]['Software License Reporting'] = 'Yazılım Lisans raporlama';

$GLOBALS["lang"]['software_name'] = 'Yazılım Adı';

$GLOBALS["lang"]['Software Name'] = 'Yazılım Adı';

$GLOBALS["lang"]['Software Policies'] = 'Yazılım Politikaları';

$GLOBALS["lang"]['software_revision'] = 'Software Revision';

$GLOBALS["lang"]['Software Revision'] = 'Software Revision';

$GLOBALS["lang"]['software_version'] = 'Software Version';

$GLOBALS["lang"]['Software Version'] = 'Software Version';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Solomon Adaları';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somali, Somali';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Bazı koleksiyonlar idam edilebilir - sorgular, vs - aşağıda bakınız.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Bazı örnekler bu sayfanın alt kısmındadır. Tüm uç noktaları da gerekli alanların minimum listesine sahiptir. Bunlar aşağıdadır.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Bazı şablonlarımız yeni hareketi dataTables\'a destekliyor, sunucu yan işleme kullanıyor. Bu kitleselivley yük zamanlarını geliştirir.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Başka bir hata, LDAP sunucusuna bağlanmaya çalışırken gerçekleşti. İletişim edilebilir (yani, <i>Bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı bağlantı</i> Yukarıda çalıştı, ancak başka bir sebepten dolayı bağlayıcı gerçekleşmedi. LDAP sunucusundaki logları kontrol edin.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Bir şey ciddi şekilde yanlış gitti. Open-AudIT okuyamaz <i>veya</i> masa.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Bir şey ciddi şekilde yanlış gitti. Open-AudIT okuyamaz <i>rolleri rol rol rol rol rol rol rolleri</i> masa.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Bazen ajansız keşif sadece kullanımınıza uygun değildir. Belki PC\'leriniz sıkı güvenlik duvarlarına sahiptir. Belki keşifleriniz planlandığında ağda değiller. Belki uzak işçiler tarafından kullanılırlar. Durum ne olursa olsun, bu bir ajanın yardım edebileceği yerdir. Onu hedef makine üzerinde yükleyin ve bu olacak <i>check-in</i> Open-AudIT sunucunuzla bir program ve görevleri kabul edin. Sunucu isteklerinin en yaygın görevi, ajanın kendisini denetlemesi ve sonucu göndermektir.';

$GLOBALS["lang"]['Sort'] = 'Sort Sort Sort Sort';

$GLOBALS["lang"]['sound'] = 'Ses Ses';

$GLOBALS["lang"]['Sound'] = 'Ses Ses';

$GLOBALS["lang"]['source'] = 'Kaynak Kaynağı';

$GLOBALS["lang"]['Source'] = 'Kaynak Kaynağı';

$GLOBALS["lang"]['South Africa'] = 'Güney Afrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Güney Georgia ve Güney Sandviç Adaları';

$GLOBALS["lang"]['Spain'] = 'İspanya İspanya İspanya';

$GLOBALS["lang"]['Spanish'] = 'İspanyolca İspanyolca İspanyolca';

$GLOBALS["lang"]['Specific to Azure.'] = 'Azure\'a özel.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'TamamTA\'ya özel.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Taramadan dışlanmak için bir komünalize edilmiş hedefler listesini belirtir. Normal Nmap sözcülerini kullanarak geçen liste, bu yüzden hostnames, CIDR netblocks, octet ranges, vs. içerebilir.';

$GLOBALS["lang"]['speed'] = 'Hız Hız Hız Hız';

$GLOBALS["lang"]['Speed'] = 'Hız Hız Hız Hız';

$GLOBALS["lang"]['speed_down_a'] = 'Hız A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A';

$GLOBALS["lang"]['Speed Down A'] = 'Hız A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A A';

$GLOBALS["lang"]['speed_down_b'] = 'Hız Down B';

$GLOBALS["lang"]['Speed Down B'] = 'Hız Down B';

$GLOBALS["lang"]['speed_up_a'] = 'Hız A';

$GLOBALS["lang"]['Speed Up A'] = 'Hız A';

$GLOBALS["lang"]['speed_up_b'] = 'Hız';

$GLOBALS["lang"]['Speed Up B'] = 'Hız';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Aşama 1: Dokümantasyon incelemesi';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Aşama 2: Uygulama ve etkinlik incelemesi';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standart Standart Standart Standart';

$GLOBALS["lang"]['standard_id'] = 'Standart ID';

$GLOBALS["lang"]['Standard ID'] = 'Standart ID';

$GLOBALS["lang"]['standards'] = 'Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart';

$GLOBALS["lang"]['Standards'] = 'Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart Standart';

$GLOBALS["lang"]['standards_policies'] = 'Standart Politikalar';

$GLOBALS["lang"]['Standards Policies'] = 'Standart Politikalar';

$GLOBALS["lang"]['standards_results'] = 'Standart Sonuçlar';

$GLOBALS["lang"]['Standards Results'] = 'Standart Sonuçlar';

$GLOBALS["lang"]['start_date'] = 'Start Date';

$GLOBALS["lang"]['Start Date'] = 'Start Date';

$GLOBALS["lang"]['start_mode'] = 'Başlangıç Mode';

$GLOBALS["lang"]['Start Mode'] = 'Başlangıç Mode';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Bir web tarayıcıya başlayın ve git';

$GLOBALS["lang"]['started_date'] = 'Tarih başladı';

$GLOBALS["lang"]['Started Date'] = 'Tarih başladı';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Haziran 2018 Google Google, Google Haritalar Platform API\'leri için bir maaş fiyat modeli uyguladı. Daha önce, orta kullanımdaki çoğu kullanıcı Google Haritalar\'ı kullanabilir, ki bu da paraCharts ve Open-AudIT Professional/Enterprise\'ye dahil edilmiştir. Googles yeni politika burada belirtilmiştir,';

$GLOBALS["lang"]['Starts With'] = 'Starts with';

$GLOBALS["lang"]['state'] = 'Devlet Devleti';

$GLOBALS["lang"]['State'] = 'Devlet Devleti';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Durum durumu';

$GLOBALS["lang"]['Status'] = 'Durum durumu';

$GLOBALS["lang"]['Storage'] = 'Depolama';

$GLOBALS["lang"]['storage_count'] = 'Storage Count';

$GLOBALS["lang"]['Storage Count'] = 'Storage Count';

$GLOBALS["lang"]['Storage area network'] = 'Depolama alanı ağ ağı';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Network';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Sub Type';

$GLOBALS["lang"]['Sub Type'] = 'Sub Type';

$GLOBALS["lang"]['subject_key_ident'] = 'Konu Anahtar Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Konu Anahtar Ident';

$GLOBALS["lang"]['Submit'] = 'Gönder';

$GLOBALS["lang"]['Submit Online'] = 'Online';

$GLOBALS["lang"]['Submitted From'] = 'Yemin ederim';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

$GLOBALS["lang"]['Subscription ID'] = 'Abonelik ID';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Başarı Başarı Başarı Başarı';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (isteğen)';

$GLOBALS["lang"]['suite'] = 'Suite Suite';

$GLOBALS["lang"]['Suite'] = 'Suite Suite';

$GLOBALS["lang"]['summaries'] = 'Summaries';

$GLOBALS["lang"]['Summaries'] = 'Summaries';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summaries veritabanına karşı tek bir sorgu <i>Grup tarafından</i> komut. Bu basit yöntemi kullanarak hemen hemen herhangi bir özellik için bir özet oluşturabiliriz.<br/><br/>Artık her biri için ayrı bir rapor gerektirmez <i>türü türü türü türü türü</i> Bir cihazın. Biz şimdi sadece o grupları bir özeti var <i>cihazlar. türü türü türü türü türü</i> Ve sonucu gösterir. Daha sonra listeden belirli bir türe tıklayabilirsiniz ve eşleşen cihazları görebilirsiniz. Bu durumda, bir Özet (potansiyel olarak) 78 rapor ( 78 cihaz türü vardır).<br/><br/>Bir özet, belirli bir özellik tarafından grup öğeleri için tasarlanmış olan bir soru için farklıdır, sonra verilen bir özellik tarafından bir sorguya sunulur. <i>Click through through throughClick</i> Gerçek cihazlara bağlantı. Bir sorgu sadece daha fazla bağlantı olmayan öğelerin bir listesidir. Yukarıda olduğu gibi - bu bir birleşik olarak <i>Rapor + subreport</i>Ancak bir sorgu sadece tek bir rapordur.<br/><br/>Summaries Open-AudIT içindeki diğer kaynaklara farklı bir koleksiyon şablonuna sahiptir. Bu şablon Özeti beklediğiniz gibi gösterir ve ayrıca diğer kaynakların sayıları ile düğmeleri gösterir. Bu sayfa, Open-AudIT HomePage olmak için tasarlanmıştır.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Summaries belirli bir eşleştirme sütunu tarafından grup öğeleri için tasarlanmıştır ve sonra bireysel cihazlara bir bağlantı sağlamaktır. Open-AudIT’in önceki versiyonlarında, bu iki farklı ürün olurdu - bir rapor ve altport. Şimdi bunları bir Özet olarak adlandırdığımız şeye dönüştürdük.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summaries, matkap raporlama yetenekleri sağlar. Basit, sezgisel, güçlü.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summaries aynı argümanları Queries olarak alır.';

$GLOBALS["lang"]['Summary'] = 'Özet Özet Özet Özet';

$GLOBALS["lang"]['Sunday'] = 'Pazar Pazar Pazar Pazar Pazar';

$GLOBALS["lang"]['supplier'] = 'Tedarikçi';

$GLOBALS["lang"]['Supplier'] = 'Tedarikçi';

$GLOBALS["lang"]['Support'] = 'Destek Desteği Destek Desteği Destek Desteği Destek Desteği Destek Desteği Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Desteklenen türler <code>subnet</code>, <code>seed</code> ve <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Yasal ve düzenleyici gereksinimlere uyum sağlar';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Şaşırtıcı Denetimler: Sertifikayı korumak için yıllık denetimler';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Adaları';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'İsveç İsveç İsveç İsveç';

$GLOBALS["lang"]['Swedish'] = 'İsveç İsveç İsveç İsveç';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Device ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Device ID';

$GLOBALS["lang"]['switch_port'] = 'Switch Port';

$GLOBALS["lang"]['Switch Port'] = 'Switch Port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'İsviçre, İsviçre Konfederasyonu';

$GLOBALS["lang"]['Symptom'] = 'Symptom';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Suriye Arap Cumhuriyeti';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Sistem';

$GLOBALS["lang"]['System Component'] = 'Sistem';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX Level';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'TX Profil';

$GLOBALS["lang"]['Table'] = 'Masa';

$GLOBALS["lang"]['tag'] = 'Tag Tag';

$GLOBALS["lang"]['Tag'] = 'Tag Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Etiketler Etiketler';

$GLOBALS["lang"]['Tags'] = 'Etiketler Etiketler';

$GLOBALS["lang"]['Tags :: '] = 'Etiketler :: ';

$GLOBALS["lang"]['Taiwan'] = 'Tayvan Tayvan';

$GLOBALS["lang"]['Tajikistan'] = 'Tacikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Tüm çıktı ve her öğeyi uygun olarak dikkate alın.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanya';

$GLOBALS["lang"]['Target Computer'] = 'Hedef Bilgisayar Hedefi';

$GLOBALS["lang"]['task'] = 'Görev Görevi';

$GLOBALS["lang"]['Task'] = 'Görev Görevi';

$GLOBALS["lang"]['tasks'] = 'Görevler Görevler';

$GLOBALS["lang"]['Tasks'] = 'Görevler Görevler';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Görevler birkaç farklı türden biri olabilir: Baseline, Discovery, Report, Query, Özet veya Kollektif.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Teknik Detaylar';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'Tenant ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['Test Email'] = 'Test E-posta';

$GLOBALS["lang"]['test_minutes'] = 'Test Dakikaları Test';

$GLOBALS["lang"]['Test Minutes'] = 'Test Dakikaları Test';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Testler Testler';

$GLOBALS["lang"]['Tests'] = 'Testler Testler';

$GLOBALS["lang"]['Text'] = 'Text Text Text';

$GLOBALS["lang"]['Thai'] = 'Tayland';

$GLOBALS["lang"]['Thailand'] = 'Tayland';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Yolculuğunuza en iyi keşif ve envanter aracı ile başlamak için teşekkür ederiz.';

$GLOBALS["lang"]['Thanks to'] = 'Teşekkürler teşekkürler';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Bu! Sadece ihtiyacınız olduğu kadar birçok cihazın özelliklerini düzenlemeniz gerekiyor.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The The The The The The The The <i>Roller</i> endpoint, izin setlerini yönetmenize izin verir (Create, Read, Update, Delete) kullanıcılara verilir ve her uç noktaya uygulanır.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API bir kurabiye kullanır. Aşağıdaki URL\'ye bir POST göndererek bir kurabiye talep edebilirsiniz, kullanıcı ve şifre özellikleri ve değerleri içeren:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory alanı, subnets listesini almak için.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory sunucusu, subnets listesini almak için.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Uygulamalar uç noktası, bir cihazla (veya cihazlar) ilişkilendirebileceğiniz bir uygulama tanımlamanıza izin verir.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributes endpoint, Open-AudIT\'deki farklı niteliklere özel değer katmanıza izin verir, şu anda bu özellik Sınıf, Çevre, Durum ve Tip Özellikleri, Her iki Konum ve Orgs için Tip özellikleri üzerinde çalışır. Basit bir türden birinin bir eşyasını görürseniz (bir Lkocation’yu görün) Tip özelliğinin bir damla kutudan seçileceğini fark edeceksiniz. Bu, bu değerlerin depolandığı yerdir. Bu nedenle, bir Konum için seçilmiş olmak için yeni bir Type eklemek istiyorsanız, Attributes özelliğini kullanarak ekleyin.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable metrik, soruya cevabı yakalar <strong>Birden fazla hedefteki bu kırılganlık için saldırgan bir sömürü olayları olabilir mi?</strong> öldürme zincirinin 1-4 adımlarına dayanarak. Bu adımlar reconnaissance, silahlanma, teslimat ve sömürüdür (Tined, Hayır, Evet).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE, CVE Listesinde geçersiz veya geri çekilmiş olarak işaretlenmiştir. NVD\'de kalır, ancak varsayılan arama sonuçlarından dışlanır.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE Listeye yayınlandı ve NVD veri setine dahil edildi. İlk ingestion sadece.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE ilk analizden sonra güncellendi. NVD zenginleştirme verileri revize edilmiş olabilir.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE tanımlayıcı.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE aktif olarak CVSS puanları, CWE sınıflandırmaları, referans etiketleri ve CPE uygulanabilirliği ile zenginleştirilmiştir.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE şu anda kaynak kısıtlamaları veya diğer nedenlerle zenginleştirmeye öncelik vermiyor.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE, NVD analistlerinin zenginleştirilmesi için kuyruklanmıştır. Henüz ayrıntılı metadata yok.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Bulut bu öğeye sahip. Bağlantılar için bağlantılar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Device Seed Discovery türü, ağ tarama için en yeni son derece etkili bir yöntemdir, ihtiyacınız olduğu kadar ağınızı dar veya geniş bir şekilde hedefleme yeteneğinizi verir. Hızlı, çalışıyor ve harika.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'The Discovery Scan Aşağıdaki masada gemimiz ayrıntılı. Yukarıda olduğu gibi, Enterprise kullanıcıları sevk edilen eşyaları daha fazla oluşturabilir veya düzenleyebilir.';

$GLOBALS["lang"]['The Elevated User query'] = 'Elevated User query';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Executables, denetimin bir parçası olarak bir cihazın diskini tarar ve her executable dosyasının paket yöneticisi tarafından bilindiğini kontrol eder. Çünkü paketi yöneticisini kullanır, özellik yalnızca Linux hedef cihazlarına uygulanır ve bunun dışında, sadece rpm veya deb bazlı dağıtımlar sağlar. Redhat veya Leicester tabanlı her şey çalışmalıdır.';

$GLOBALS["lang"]['The FROM'] = 'Sizin için';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grup Basel’i çalıştırmak için kullandı. Bağlantılar için bağlantılar <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Cihazların masasından gelen kimlik, NTU\'nun bu bağlantının sonunda gösterilecektir. Bağlantılar için bağlantılar <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ithal kriter politikasından gelen kimlik.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Yer masasından gelen kimlik, bağlantının bu sonuna ait olacaktır. Bağlantılar için bağlantılar <code>locations.id</code>. Bir konum genellikle bir yer <code>FROM</code> Yer.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Yer masasından gelen kimlik, bağlantının bu sonuna ait olacaktır. Bağlantılar için bağlantılar <code>locations.id</code>. B konumu genellikle genellikle <code>TO</code> Yer.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'İlgili cihazın kimliği (eğer herhangi biri varsa). Bağlantılar için bağlantılar <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'İlgili keşifin kimliği. Linked to Linked to <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'İlgili türün eşyasının kimliği.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Bu orgs ebeveyn veyag\'in kimliği. Linked to Linked to <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Sağlayıcı tarafından sağlanan kimlik.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Bir Bulut keşifinden alınan kimlik.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Bu koleksiyoncunun IP adresi sunucuyla iletişim kurmak için kullanılır.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Cihazın IP\'si bir tohum keşfine başlamak için.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Dış arayüzün IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'İç arayüzün IP.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 sertifikasyon süreci ve anahtar unsurları.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP veya Telco bu bağlantıyı sağlar.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Mitre\'den JSON kaydı.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD yeminden JSON kaydı.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU bu kullanıcının (eğer LDAP kullanılırsa).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP sunucusu bağlantılı olamazdı. Her şeyde. Check it is pingable from the Open-AudIT server. Doğru liman Open-AudIT sunucusuna açıktır. Open-AudIT sunucusundan bir nmap bunu gösterecektir. LDAP sunucularınızı $ip için IP\'nizi altüst edin. Deneyin:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP sunucusu türü geçersizdir. Ya da olmalı <i>Aktif dizi</i> veya <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP sunucusu bağlantılıydı ve bağlantı için kabul edilen kullanıcı kimlikleri.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT installer test edecek ve gerekirse, Open-AudITs, Nmap SetUID\'i ayarlamak dahil olmak üzere dağıtımlarınızdan bağımlılıklara bağımlı olacaktır. Bu, SNMP (UDP 161) olmayan bir kullanıcı tarafından tespit edilmesi için gereklidir. Bu RedHat / CentOS ve Leicester/Ubuntu üzerinde desteklenmektedir. Nmap\'u manuel olarak yüklemeniz gerekiyorsa:<br/><br/>RedHat / CentOS (NOTE - yum kullanıyorsanız, bunu yeniden uygulamanız gerekecek <i>chmod</i> ayar).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Bu ağı içeren yer. Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD temel statüsü tayin etti.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Ulusal Standartlar ve Teknoloji Enstitüsü federal teknoloji ajansıdır. Resmi teknolojiyi, bilim ve standartları ilerletiyorlar.';

$GLOBALS["lang"]['The Network to Discover'] = 'Keşfet Ağı';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap zamanlama preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS bu pakete karşı raporlanmalıdır. Her şey için Blank. Yüzde işareti vahşi bir kart olarak kullanın. Os_group, os_aile ve os_name\'ye karşı test edilecektir.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open-AudIT, bağlantılı bulutun açık kaydı. Bağlantılar için bağlantılar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud IT server kodu bu dosya içinde ortaya çıktı.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud IT server kodu bu işlevin içinde ortaya çıktı.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP ekosistemi, yöneticilere ve denetçilere değerlendirme, ölçüm ve güvenlik temel hatlarının uygulanmasına yardımcı olmak için birçok araç sunar, açık kaynak topluluğu tarafından geliştirilen geniş çeşitli sertleştirici kılavuzlar ve konfigürasyon tabanları dahil olmak üzere, kuruluşunuzun ihtiyaçlarını en iyi şekilde seçebilirsiniz.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP projesi, bu standardı uygulamak ve uygulamak için açık kaynak araçları koleksiyonudur ve 2014 yılında NIST tarafından SCAP 1.2 sertifikasına layık görüldü.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Bu öğeye sahip olan Organizasyon. Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'İşbirlikçi keşiften sorumlu olan Süreç.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Bu cihazın üst kısmındaki RU poziton.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Rafs özelliği, bir Organizasyon, Konum, Building, Floor, Room ve Row ile raf kullanımını yönetmek ve görselleştirmek için kullanılır.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP, güvenlik verilerini standart şekillerde ifade etmek ve manipüle etmek için bir özelliktir. SCAP, sürekli izleme, kırılganlık yönetimi ve güvenlik politikası uyum değerlendirme raporlama raporlama raporlama raporlaması için konserde birkaç bireysel özellik kullanır.';

$GLOBALS["lang"]['The SELECT'] = 'SEÇİM';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Sorunun SE bölümü tam notasyon kullanmalı ve aynı zamanda alanı tam adı ile talep etmelidir. IE - SE cihazları. AS \'devices.id\'. Her alan bu modada GUI yan özelliği filtrelemesini sağlamak için seçilmelidir.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SQL\'inizin SE bölümü tamamen nitelikli sütunlar içermeli ve bazı sütunları belirtmelidir.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP topluluğu dizesi.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Kimlik Sınırı';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Kimlik Doğrulama Protokolü.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Gizlilik Protokolü.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 Güvenlik Düzeyi.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 Güvenlik Adı.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL içermiyor <strong>WHERE @filter OR</strong>. Ancak bu SQL uygulanmayacak, ancak <strong>WHERE @filter AND</strong> Sorular izin verilir.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT\'de kullanılan SQL sorguları arkadan kullanım gerektirir - " karakter ve alanlar için standart tek alıntı değil. Çoğu ABD\'de Windows klavyeleri arka anahtarı, tilde ile birlikte klavyenin ilk solunda bulunur -. Bir ABD Mac klavyesinde arka anahtarı SHIFT anahtarının yanındadır. Standart tek alıntı hala aşağıdaki örnekler olarak kapalı değerlere alışkındır.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL sorgusu aslında üç parçaya ayrılmıştır.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudIT\'deki Standartlar işlevselliği, zaman öncesinde, denetçilerin ISO 27001 sertifikasını tamamladıktan sonra ihtiyaç duydukları soruları tamamlamak için izin verir.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Dış sistemin URL\'si.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Open-AudIT URL\'niz Server bu koleksiyoncunun rapor edeceğine göre (görüntü kesme)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL denetim senaryoları sonucu sunmalıdır.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Kullanıcı uç noktası, Open-AudIT içinde kullanıcı hesaplarını yönetmenize izin verir.';

$GLOBALS["lang"]['The WHERE'] = 'WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'The WHERE section of your SQL <em>Gerekli olması gerekir</em> içerir';

$GLOBALS["lang"]['The Windows'] = 'Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows log aşağıdakileri söyleyebilir';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Hesabın bir şifresi olması gerekir; WMI boş şifrelere izin vermez.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Hesap şifresi \" (iki alıntı). Bu, cscript (ve wscript) çift alıntı içeren argüman değerlerini parselayamaz. Onlar sadece kaybolurlar. Hayır ( sormadan önce) kaçış işe yaramayacaktır. Bu bir cscript sınırlaması ve Open-AudIT ile hiçbir şey yapmamak.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Bu kullanıcının gerçek tam adı.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT sunucusunun adresi sayfayı gönderir.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Yönetici, LDAP\'a bağlanmak için başarıyla kullanılan kimlikler sağladı.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Yönetici LDAP sunucusuna bağlanmak için kimlik sağladı, ancak LDAP Cyrer tarafından kabul edilmediler. Çift, LDAP sunucusundaki bilgileri kontrol edin ve sonra Open-AudIT LDAP Server girişinde (veya sıfırlama) kontrol edin.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Ajan ve sunucu aynı zamanda yeni bir sürüm sunucuya kurulsa acenteye de yeterince akıllıdır (Open-AudIT’i yükseltmeden sonra).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Ajan denetim senaryosunun taze bir kopyasını indirmeli ve sonucu sunucuya göndermelidir.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Uygulama burada geçici denetim makasları yaratır, onları hedef makinelere kopyalar, sonra onları silir.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'İlgili temel line. Bağlantılar için bağlantılar <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'İlgili keşif (eğer gerekliyse). Bağlantılar için bağlantılar <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Test etme özelliği (ondan) <code>devices</code> Masa).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Test etme özelliği (aşağıdan dış bir alan adı eşleştirmek).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Keşif tarama seçenekleri için özellikler aşağıdadır.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Özelleştirmelerinizi temellemek için denetim senaryosu.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Denetim senaryosu dosyaları [ ] serisini kullanacak ve dosya detaylarını alacaktır.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Denetim senaryoları tüm bir debugging argümanını kabul eder. Bunu kullanarak senaryoyu çalıştırabilirsiniz ve konunun ne olduğunu daha ayrıntılı olarak görebilirsiniz. Ve bunu bulamazsanız - burada olduğumuz şey budur! Bir destek vakası açın ve hiçbir zaman çalışan şeyler alacağız.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Kullanıcılar için aramanın temel yolu.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Aşağıdaki adımlar, Open-AudIT\'e ait veya benzersiz değildir ve etkileyecektir. <strong>Herhangi bir şey herhangi bir</strong> Uzak WMI ve / veya Windows kullanarak keşif uygulamaları.';

$GLOBALS["lang"]['The benchmark type.'] = 'Karşılaştırma türü.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Raf inşa etmek içeridedir.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Hesaplanan cihazların sayısı dış olarak oluşturulacak.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Açık-AudIT\'de oluşturulacak hesaplanan cihazların sayısı.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Müşteri kimliği bir Azure Active Directory uygulamasının kimliğidir. Müşteri sırrı, bu uygulamayı verdiğiniz anahtardır.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'koleksiyoncu aslında Open-AudIT\'in tam bir yüklemesidir <i>koleksiyoncu koleksiyoncu</i> mod. koleksiyoncu, içinde bulunduğu ağ üzerinde keşif yapmak için tasarlanmıştır. Sadece bu ağla sınırlı değil, ancak ideal olarak gerekli olan subnet\'te bir koleksiyoncu olacaktır. koleksiyoncu sunucu tarafından bir programda yönlendirilir ve belirtilen şekilde ağ üzerinde keşif yapar.<br/>When in Stand Yalnız koleksiyoncu bağımsız bir sunucu olarak hareket eder, sadece ana sunucuya bulunan tüm cihazları ileri sürmektedir.<br/><br/>Oluşturun ve kurulumun ardından, koleksiyoncunun kontrolü Server\'da yapılır (yalnızca yalnız modda değil).<br/><br/>koleksiyoncu ve sunucu arasındaki tek gerekli ağ limanları 80 veya 443 (Polonya\'dan Server\'a kadar kurulanTCP bağlantısı). Open-AudIT veritabanı bu yüklemeler arasında paylaşılmıyor (ve olamaz).<br/><br/>Varsayılan olarak koleksiyoncu (sadece modunda değil) sunucudan her 5 dakikada herhangi bir keşif görevi talep edecektir (bu, yapılandırma öğe koleksiyoncusu_check_minutes kullanarak sunucuda yapılandırabilirsiniz).';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'koleksiyoncu aslında Open-AudIT\'in tam bir yüklemesidir <i>koleksiyoncu koleksiyoncu</i> mod. Bu mod, uygulamanın basitleştirilmesi ve odaklanması için görünür işlevselliği azaltacaktır. Yerel ağlar ve cihazlar hakkında bilgi toplamak için tasarlanmıştır, güvenlik ve / veya ağ özelliği sunucudan bir sorun.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'koleksiyoncular bir keşif yaparken kullanılan iç IP.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Yabancı masadan sütun adı. Bir tane olmalıdır: sınıf, çevre, statü, tip veya menü_category.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komut, keşif sırasında yürütülen hedef cihaz veya Open-AudIT server kodu üzerine idam edildi.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Kümenizin konfigürasyonu olabilir: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> veya boş.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Şifre bildirimleri. Bilgi bir SSH Key ise, anahtarı kilidini açmak için kullanılan şifredir ve isteğe bağlıdır.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Kullanıcı tarafından sağlanan bilgiler başarısız oldu.';

$GLOBALS["lang"]['The credentials username.'] = 'Bilgi adı.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Mevcut tarih ve formatta zaman: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y-m-d formatında mevcut tarih.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Bulut Keşif\'in mevcut durumu.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Keşifin mevcut durumu.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Bu kullanıcı için varsayılan olarak gösterilecektir. Bağlantılar için bağlantılar <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Veritabanında depolanan veriler, tercüme edilen uygulamada göstermiyor. Verileri olduğu gibi terk ediyoruz. Ancak, sizi durdurmak için hiçbir şey yok, kullanıcı, adı (örneğin) dilinize bir öğe değiştirmek.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Girişinizin kullanıldığı veriler bir anda kullanılacaktır <code>LIKE</code> Madde, değil ( API başına) <code>equals</code> Madde. Başka bir örnek - girdiyseniz <code>comput</code>Ancak hala tüm bilgisayarları geri döndürecektir. Çünkü biz bir tane kullanıyoruz <code>LIKE</code> Madde, bu durumda hassastır.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Veritabanı şeması, kullanıcının veritabanı olup olmadığını uygulamada bulunabilir: menüye giriş: Admin -> Veritabanı ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Veritabanı versiyonu ve web versiyonu çelişkilidir.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Lisans sona erme tarihi.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Yazılım üretici tarafından durduruluyor. Genellikle yeni bir sürüm tarafından değiştirildi. Bakım hala mevcut olabilir.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Yazılım artık güncellemeler almaz ve tamamen durdurulur. Bakım kesildi.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Bu öğe değişti veya eklendi (yalnızca hazır). NOT - Bu sunucudan zamanlayıcıdır.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Bu sonucun yaratıldığı tarih/zaman.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Bu görevin uygulanması gereken ayın günü (* her gün).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Bu görevin ne zaman uygulanması gerektiği haftanın günü (* her gün).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Debug seviyesi (Hızlı pencereyi komuta etmek için çıktı). Aşağı 0 ile daha az çıkış anlamına gelir.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Varsayılan keşif tarama seçeneği UltraFast setidir.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Varsayılan dil bu yöntem tarafından yaratılan herhangi bir kullanıcıya tayin edildi.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Cihazın online olarak kabul edilmeden önce Nmap ping\'e yanıt vermesi gerekir.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT içindeki cihaz. Bağlantılar için bağlantılar <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Senaryo için doğrudan bağlantı,';

$GLOBALS["lang"]['The email address of the reciever'] = 'Reciever\'in e-posta adresi';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'İlkWave\'den gelen kurumsal ikili bir lisans için gereklidir. Lütfen Open-AudIT\'ı indirin';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Tüm ilişkili temel bu sonucun hepsinden biridir.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Etkilenen kırılganlık, kırılgan bileşeninin güvenlik otoritesinin ötesinde kaynakları etkileyebilir. Bu genellikle bir ayrıcalık veya güven sınırı geçmek anlamına gelir (örneğin, ev sahibi OS\'ye bir konteynerden kaçmak).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Yararlı kırılganlık yalnızca aynı güvenlik otoritesi içindeki kaynakları savunmasız bileşen olarak etkiler. Başka bir deyişle, saldırganın eylemleri orijinal güven sınırı içinde kalır.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Dış olarak referans edilen yer ID. Genellikle Bulut denetimleri tarafından doldurulur.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Bir İntegra ile ilişkili alanlar veritabanında bir JSON dizi nesne olarak depolanır. Her alanın aşağıdaki özellikleri vardır';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT bu cihazın ayrıntılarını ilk kez aldı.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Zemin, rafın üzerindedir.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Yabancı masa referans için. Bir tane olmalıdır: cihazlar, konumlar veya sorgular.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Verilerinizin formatı formda olmalıdır';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Çıktı için kullanılan format e-postal.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Hangi grup tarafından gruplandırılacak tam nitelikli sütun. NOT: Tür = trafik, bu kırmızı sorguyu temsil eder.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Tamamen nitelikli isim dış sistem tarafından geri döndü. EG: NMIS için yapılandırma kullanıyoruz. rol rolü rol rolü rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rolü rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol Tip.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Tam nitelikli masa.column. Birden çok kişi bir komün (no uzaylar) tarafından ayırt edilebilir.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Bu kırılganlığı test etmek için üretilen SQL sorgusu. Bu alan, sorguyu gerekli olarak düzeltmek için düzenlenebilir.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Temelin karşı çalıştığı cihazlar grubu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'entegrasyon için bir cihaz listesi sağlayan grup. Bağlantılar için bağlantılar <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Bu görevin uygulanması gereken günün saati (* her saat için).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Bağlantılı cihazın boşu. Bağlantılar için bağlantılar <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Veritabanında (sadece okuyun) tanımlayıcı sütunu (sadece okuyun).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Bu temelin önemi ( henüz kullanılmamıştır).';

$GLOBALS["lang"]['The integer of severity.'] = 'şiddetin tam tersi.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'İç değer, bu formatta reforme edildi.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth yönteminin ip adresi.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Web arayüzünü kullanıcı için tercüme etmek için dil.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Son tarih ve zaman bu öğe idam edildi (yalnızca hazır).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT\'in bu cihazın ayrıntılarını alması son kez.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Son kez bu karşılaştırmalar idam edildi.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Son kez bu entegrasyon yapıldı.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Lisans uç noktası, cihazlarınızda bulunan lisans sayısını takip etmenizi sağlar.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Sağlayıcı tarafından bu bağlantının sonunda sıraya atanan çizgi numarası.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Rafın bulunduğu yer. Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Yer adresi.';

$GLOBALS["lang"]['The locations area.'] = 'Yer alanı.';

$GLOBALS["lang"]['The locations city.'] = 'Yer şehri.';

$GLOBALS["lang"]['The locations country.'] = 'Bölge ülkesi.';

$GLOBALS["lang"]['The locations district.'] = 'Yer bölgesi.';

$GLOBALS["lang"]['The locations latitude.'] = 'Konumlar entitude.';

$GLOBALS["lang"]['The locations level.'] = 'Yer seviyesi.';

$GLOBALS["lang"]['The locations longitude.'] = 'Yerler uzundur.';

$GLOBALS["lang"]['The locations phone.'] = 'Konum telefonu.';

$GLOBALS["lang"]['The locations postcode.'] = 'Konum postcode.';

$GLOBALS["lang"]['The locations region.'] = 'Yer bölgesi.';

$GLOBALS["lang"]['The locations room.'] = 'Yer odası.';

$GLOBALS["lang"]['The locations state.'] = 'Yer devleti.';

$GLOBALS["lang"]['The locations suburb.'] = 'Yerler banliyö.';

$GLOBALS["lang"]['The locations suite.'] = 'Yer süiti.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Cihaz eşleştirme mantığı, bir Linux yüklemesinde bulunan cihazlar_helper.php dosyasında yer almaktadır.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Makine-default izin ayarları, COM Server uygulaması için Yerel Aktivasyon izni vermiyor';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'En yüksek fiziksel ağırlık (in KGs) bu raf tutabilir.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Bu rafın en yüksek toplam BTU\'ları için derecelendirilmiştir.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Özellikleri için gerekli minimum nitelikler şunlardır:';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Bu görevin uygulanması gereken saatin dakikası (* her dakika için).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Bu görevin uygulanması gereken yıl (* her ay).';

$GLOBALS["lang"]['The name given to this item.'] = 'Bu öğeye verilen isim.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Bu öğeye verilen isim. İdeal olarak benzersiz olmalıdır.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Bu kullanıcıya verilen isim ( giriş için kullanılır). İdeal olarak benzersiz olmalıdır.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'İlgili bulutun adı (eğer gerekliyse).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Yazılım paketinin adı, Open-AudIT tarafından denetim edildiği gibi. Yüzde işareti vahşi bir kart olarak kullanın.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Bu öğeyi geçen veya ekleyen kullanıcının adı (yalnızca okuyun).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Sağlayıcı tarafından sağlanan isim.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Form 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Araştırmayı yürütmek için ağ subnet.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Yeni Ajan, VBiff\'in (evet, geliyor) depreciasyon için eski denetim senaryosunun bir versiyonunu yayınlamaktadır.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Bu cihazın sayısı kapılır.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'ilişkili yerlerin sayısı. Bağlantılar için bağlantılar <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'İlişkili ağ sayısı. Bağlantılar için bağlantılar <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Bu buluttaki denetimli cihazların sayısı. Bağlantılar için bağlantılar <code>devices.cloud_id</code> ve <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave tarafından tutulan kritik şiddet açıklarının sayısı ( veritabanınızda değil).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Bu keşif tarafından bulunan cihazların sayısı.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'İlgili gruptaki cihazların sayısı.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Bu buluttaki cihazların sayısı bir koşu durumu ile. Bağlantılar için bağlantılar <code>devices.cloud_id</code> ve <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Bu buluttaki cihazların sayısı durdu. Bağlantılar için bağlantılar <code>devices.cloud_id</code> ve <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Bu buluttaki cihazların sayısı. Bağlantılar için bağlantılar <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Bu kriterin sayısı üzerinde gerçekleştirilecektir. Derived from <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Bu keşfi sınırlamak için cihazların sayısı.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave tarafından tutulan yüksek ciddiyet güvenlik açıklarının sayısı ( veritabanınızda değil).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave tarafından tutulan düşük şiddet açıklarının sayısı ( veritabanınızda değil).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave tarafından tutulan orta ciddiyet açıklarının sayısı ( veritabanınızda değil).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Satın alınan lisans sayısı.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Hedef IP ile iletişim kurmak ve iletişim kurmak için saniye sayısı.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'FirstWave tarafından yapılan bir ciddiyet olmadan güvenlik sayısı ( veritabanınızda değil).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Boşluk, verileri iade etmek istediğiniz cihazların sayısıdır.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Sadece gerekli izin / politika adı ( testimiz)';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Seçmeli ikincil sütun. NOT: Tür = trafik, bu sarı sorguyu temsil eder.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Seçmeli üçüncü sütun. NOT: Tür = trafik, bu yeşil sorguyu temsil eder.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Bilgi retrieval siparişi, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Bu cihazın yönlendirmesi.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Şifre (Kullanıcıyı senaryoyu çalıştırmıyorsa).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Dn_account özelliği için şifre.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Dış sisteme erişmek için kullanılan şifre.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Dosya veya diziye giden yol.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Dosya veya diziye giden yol. Müdürler bir izle sona ermelidir.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Rafın fiziksel derinliği (in CMs).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Rafın fiziksel yüksekliği (in CMs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Şu anda rafın fiziksel ağırlığı (in KGs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Fiziksel ağırlık (in KGs) boş zaman rafın.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Rafın fiziksel genişliği (in CMs).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'pod (eğer varsa) bu rafın bir parçasıdır.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Güç devresi bu rafa bağlanır.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Bu widget\'ı temelleyecek birincil veritabanı masası.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'İzin için birincil yöntem (bir kullanıcı ne yapabilir) artık kullanıcıların Rollerine dayanmaktadır. Roller yönetici olarak veyag_admin, muhabir ve kullanıcı varsayılan olarak tanımlanır. Her rol, her uç noktası için bir dizi izine sahiptir. Gönderilen standart roller, kullanım davalarının yüzde 99.9\'unu kapsamalıdır. Ek rolleri tanımlama ve mevcut rolleri düzenleme yeteneği Open-AudIT Enterprise\'da etkinleştirilir.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Bu kuyruk öğenin süreç tanımlayıcısı.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Cihaz hakkında ayrıntıları almak için son kullanılan süreç';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Bu lisans sayfasının amacı, açık kaynak çalışmasına dayanan ilk dalga Ticari ürünlerde yer alan ürünleri ve lisansları listelemek. Open-AudIT, AGPLv3 veya daha sonra Enterprise ve Profesyonel işlevsellik ile ticari terimler altında lisanslanır. FirstWave\'den indirilen Open-AudIT, belirtilmiş ve lisanslı olarak sağlanan aşağıdaki kütüphaneleri ve projeleri içerebilir:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Entegrasyon için bir cihaz listesi sağlayan sorgu. Bağlantılar için bağlantılar <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Raf varlık numarası.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Raf varlık etiketi.';

$GLOBALS["lang"]['The rack bar code.'] = 'Raf bar kodu.';

$GLOBALS["lang"]['The rack model.'] = 'Raf modeli.';

$GLOBALS["lang"]['The rack serial.'] = 'Raf serisi.';

$GLOBALS["lang"]['The rack series.'] = 'Raf serisi.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Bu cihaz raf içeride bulunmaktadır. Bağlantılar için bağlantılar <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Önerilen adresleme ve tespit edilen güvenlik açıklarını düzeltme süreci. Bu genellikle yamaları, güncelleştirmeleri veya diğer önlemleri güvenlikleri tarafından önerilen riski ortadan kaldırmak için uygular.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Serinizin normal domaini. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Talep edilen özellikler bir komünalize listesinde olmalıdır. Özellikler tamamen nitelikli olmalıdır - ie, sistem.hostname (sadece hostname değil).';

$GLOBALS["lang"]['The result of the command.'] = 'Emirin sonucu.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Odada raf bulunmaktadır.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Sırada raf bulunur.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP sunucusu üzerinde grup arayışı başarısız oldu. LDAP sunucu loglarını kontrol edin. Bu grupları ( roller ve orgs için) LDAP sunucusunda yarattınız ve LDAP kullanıcılarını onlara verdiniz mi?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API anahtarı ile birlikte kullanılan gizli anahtar.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Yazılım son yaşam tarihi.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Yazılım son hizmet-yaşam tarihi.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Belirtilen veritabanı masasından belirli veritabanı sütunu.';

$GLOBALS["lang"]['The specific database table.'] = 'Özel veritabanı masası.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standart Nmap zamanlama seçenekleri. Daha önce T4\'te (aggressive).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standart Nmap zamanlama seçenekleri. Genellikle kullanıyoruz -T4 (Aggressive) çünkü bu iyi bir genişban veya ethernet bağlantısı için önerilir.';

$GLOBALS["lang"]['The status of this integration'] = 'Bu entegrasyon durumu';

$GLOBALS["lang"]['The status of this queued item.'] = 'Bu kuyruklanmış öğenin durumu.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Aşağıdaki adımlar süreci özetliyor.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Hedef IP bu günlük giriş referansları (eğer herhangi biri)';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Hedef bilgisayar denetim için. \" anlamına geliyor yerelhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Bağlantı için şablon sonuç çizgisinde oluşturulacaktır.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Bir çizgi grafiğin alt kısmındaki metin (yalnızca).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Gösterilen metin.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Bundan sonra zaman damgası, bu görev koşmalıdır. Örneğin, 1 Haziran 2017\'de 10am\'da bir görev çalıştırın, onu 10am\'da ayarlayın <code>2017-06-01 09:59:00</code>. Bu değer sıfır pedded olmalıdır (ie, 09, 9 değil). Bu değer varsayılanlar için <code>2000-01-01 00:00:00</code> Bu, varsayılan olarak, planlanan bir görev bir sonraki planlanan yürütme zamanında çalışacak.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'En iyi 10, 100 veya 1000 (veya hiçbiri) Nmap\'a göre yaygın olarak kullanılan TCP limanları.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'En iyi 10, 100 veya 1000 (veya hiçbiri) Nmap\'a göre yaygın olarak kullanılan UDP limanları.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Bu raf tarafından toplam BTU çıktı.';

$GLOBALS["lang"]['The type of device.'] = 'Cihaz türü.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organizasyon türü.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Raf türü (kompute, güç, ağ vs).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'koşmak için görev türü. Bir tanesi: temel, kriter, bulut keşif, keşif, entegrasyon, rapor, sorgu.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Entegrasyon türü (genellikle dış sistemden sonra adlandırılır).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Unfiltered devlet, bir liman erişilebilir olduğu anlamına gelir, ancak Nmap açık veya kapalı olup olmadığını tespit edemez. Sadece ACK taraması, bu duruma limanları sınıflandırır. Pencere tarama, SYN tarama veya FIN tarama gibi diğer tarama türleriyle filtrelenmemiş limanlar, limanın açık olup olmadığını çözmeye yardımcı olabilir.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Bu sunucunun eşsiz tanımlayıcısı.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Kullanıcı bu koleksiyoncuyu kullanır. Bağlantılar için bağlantılar <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP\'daki kullanıcı, Rollar ve Orgs için gerekli Open-AudIT gruplarının doğrudan bir üyesi olmalıdır. Open-AudIT grubunun bir üyesi olan bir grup üyesi çalışmayacak.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Kullanıcı LDAP\'da ve onların kimlikleri geçerlidir, ancak Orgs için Open-AudIT LDAP gruplarının herhangi birinde değildir.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Kullanıcı LDAP\'da ve onların kimlikleri geçerlidir, ancak Roller için Açık AudIT LDAP gruplarının herhangi birinde değildir.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Kullanıcı LDAP\'da ve onların kimlikleri geçerlidir, ancak gerekli Open-AudIT LDAP gruplarının herhangi birinde değildir.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Kullanıcı, bu Org\'i oynayan LDAP grubundadır.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Kullanıcı bu rolü oynayan LDAP grubundadır.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Kullanıcı, bu Org\'i oynayan LDAP grubunda değildir.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Kullanıcı bu rolü oynayan LDAP grubunda değildir.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'LDAP\'da belirtilen kullanıcı, ancak Open-AudIT, LDAP gruplarının roller için kullanılması için yapılandırılmıyor ve bu kullanıcının Open-AudIT içinde var olmadığını belirtti. Ya seçin <i>Rol için LDAP kullanın</i> Open-AudIT LDAP Server ekranı veya bu kullanıcıyı Open-AudIT içinde oluşturmak ve roller ve orgs atamak.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Kullanıcının komutunu kullanmadığı takdirde.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Kullanıcı dış sisteme erişmek için kullanılır.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Kullanıcı detayları LDAP\'dan alındı. LDAP sunucu loglarını kontrol edin.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Kullanıcı detayları LDAP\'dan alındı.';

$GLOBALS["lang"]['The users email address.'] = 'Kullanıcılar e-posta adresi.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Bu sitedeki olağan çalışma saatleri.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Ürüne verilen değer.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Bu özel eşya için depolanan değer.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Satıcı adı CPE girişleri olarak.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'satıcı CPE\'den alındı.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT\'in yüklü olduğu ev sahibine web rehberi (bir izing slash).';

$GLOBALS["lang"]['The widget at position '] = 'pozisyondaki pencere ';

$GLOBALS["lang"]['The width of this device.'] = 'Bu cihazın genişliği.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Onların OrgIDleri ve torunları';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Onların OrgIDleri sadece';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Onların OrgIDleri, yükselenler ve torunları';

$GLOBALS["lang"]['Then'] = 'Sonra';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Sonra Open-AudIT\'de yeni bir Auth yöntemi menü -> -> Admin -> Auth Methods -> Auth oluşturun. Bir isim verin ve seti verin <i>türü türü türü türü türü</i> Entra\'ya.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Ardından doğrudan müşterilerden denetim verileri almak için Open-AudIT (unsupported) kullanabilirsiniz. Discovery Discovery <strong>Başarısız olmayacak</strong>Ancak Discovery kullanmıyorsanız (Ana özellik Open-AudIT etrafında tasarlanmıştır), hala cihaz verilerini alabilirsiniz. Denetim senaryolarını doğrudan müşterilere cron kullanarak çalıştırmanız veya Windows Agent özelliğini kullanmanız gerekir (yalnızca memnun).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'JSON\'a ihracat için bir düğme var. Bu sadece özelliklerin cihaz masasını gösterecektir. Cihazı tüm ilişkili bileşen masaları ile ihraç etmek için, cihazı ayrıntılarına bakın, sonra ekleyin.';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Her bir bireysel cihazı manuel olarak düzenlemek kesinlikle gerekmez.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Bir Linux sunucusunda Open-AudIT kullanıyorsanız hiçbir şey yapmamanız gerekmez.<br/><br/>Windows müşterileri sadece iyi ve özel eylemler gerektirmez, ancak... bu özelliği denetim senaryosunun hedef Windows sisteminde yerel olarak çalışabilmesi gerekir. Bir Windows makinesi üzerinde denetim senaryosu çalışırken WMI çağrılarıyla uzaktan çalıştırılamaz, ikinci bir Windows makinesi hedeflemekte iken. Bunu yapmak için, denetim senaryoyu hedef Windows makinesine kopyalamamız ve sonra onu çalıştırmamız gerekiyor. Ne yazık ki Apache\'nin altında çalıştığı hizmet hesabı yerel Sistem hesabıdır. Bu hesap uzaktan (network based) kaynaklara erişmiyor. Bu konuda çalışmak için hizmetin başka bir hesap altında çalıştırılması gerekir. Sadece yerel yönetici hesabı kullanmak en kolaydır, ancak gerekli ayrıcalıklara sahip olduğu sürece istediğiniz herhangi bir hesabı deneyebilirsiniz. Yerel Sistem hesabı yerel yönetici hesabı olarak çok yerel erişime sahiptir.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Bunlar sadece örneklerdir. Bu özellikleri belirli LDAP\'a uyacak şekilde ayarlamanız gerekebilir.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Bu parametreler sadece sizin için neyin yararlı ve alakalı olduğunu denetlemenizi sağlar, işleme süresini tasarruf edin ve ağınızı bir şekilde keşfetmenize izin verir.';

$GLOBALS["lang"]['Thing'] = 'Şey';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Posta düşünün.domain1.com ve posta.domain2.com - aynı hostname.';

$GLOBALS["lang"]['Third'] = 'Üçüncü';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Bu CVE, varsa mevcut CVE\'yi devralacak ve yazacaktır.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Bu Org\'un AD grubu belirtilmedi. Open-AudIT içindeki rolleri kontrol edin.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Bu Org\'un AD grubu belirtilmedi. Open-AudIT içindeki rolleri kontrol edin. <span class=\'\"confluence-link\"\'>Bu grupları (örneğin) LDAP sunucusunda yarattınız ve LDAP kullanıcılarını onlara verdiniz mi?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Bu Rol hiçbir AD grubu belirtilmedi. Open-AudIT içindeki rolleri kontrol edin.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Bu özellik bir JSON nesnesi olarak depolanır. Tüm koleksiyonların listesidir ve koleksiyon adını birlikte içerir <code>c</code>, <code>r</code>, <code>u</code> ve <code>d</code> Hangi yaratır, okuyun, güncelleştirme ve silinir. Bunlar, bir kullanıcının bu özel koleksiyondan öğeleri gerçekleştirebileceği eylemlerdir.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Bu ya bir varchar (a text alanı), bir liste ( seçilebilir değer listesi) veya bir tarih olabilir.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Bu kod, büyük çalışmalara güvenir';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Bu koleksiyoncular evrensel olarak eşsiz tanımlayıcılar.';

$GLOBALS["lang"]['This column is required by'] = 'Bu sütun gereklidir';

$GLOBALS["lang"]['This column is required by '] = 'Bu sütun gereklidir ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Bu açıklama otomatik olarak kısaltılır ve ideal olarak sollanmalıdır.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Bu uç nokta, ağ altyapınızın bir parçası olan bağlantıları eklemenizi sağlar, bu bağlantının nerede bulunduğuna ve ait olduğu organizasyonun bulunduğuna dair çeşitli özellikleri özelleştirmenizi sağlar.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Bu hata SMB1\'in devre dışı kaldığını veya hedef makineden çıkarılmasını gösterir. Bu, Windows\'un modern versiyonu için normaldir ve SMB2 bağlantı girişimi başarısız olduğunda bu mesajı göreceksiniz. SMB2 bağlantısı başarısız olursa, SMB1\'i Windows\'un eski versiyonlarında keşif yapmaya çalışıyoruz. Hedef Windows makinesi <i>Is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is is</i> Windows\'un eski bir versiyonunu çalıştırın, muhtemelen kimlikleriniz başarısız oldu. Bu durumda, bakınız';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Bu hata, belirtilen işlemi tamamlamak için yeterli sanal bellek veya dosya kotasının mevcut olmadığını gösterir. Daha sonra tekrar denemelisin.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Bu hata, kullanılan kimliklerin yanlış olduğunu gösterir, mevcut değildir veya hedef Windows makinesine uzaktan giriş yapmak için yeterli ayrıcalıklar yoktur. Bilgileri doğrulamalı ve aşağıda kontrol etmelisiniz.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Bu örnek, tüm Modüllerin bir listesini oluşturur';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Bu örnek, cihazlar ve açık Limanlar, Protokoller ve NMAP taraması tarafından bulunan programlar listesini oluşturur.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Bu örnek, Fonksiyonlar veya Açıklama alanlarının boş olduğu cihazların bir listesini oluşturur OR Satınalma Tarihi varsayılandır.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Bu örnek, 3 yaşında bir cihaz listesini alır. Soru bugün kullanır';

$GLOBALS["lang"]['This example uses'] = 'Bu örnek kullanır';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Bu özellik profesyonel veya bir Enterprise lisansı gerektirir.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Bu özellik, çünkü hedef cihazları her zamankinden daha fazla etkileme yeteneğine sahiptir. Bu özelliği sağlamak için, yapılandırma öğe özelliği_executables değiştirmek <i>evet evet evet</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Bu dosya Linux\'a, çalıştırılması gereken herhangi bir planlanan görev olup olmadığını belirlemek için başvuruyu ankete söyler.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Bu form, cihazınızdaki cihazları keşfetmeye başlamak için basit bir yol sağlar. Daha fazla (daha fazla) ayrıntılı seçenekler için, bireysel olarak oluşturabilirsiniz';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Bu aynı zamanda PAExec\'in çalıştığı yoldur.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Bu, keşif_use_org_id_match\'i küresel konfigürasyonda ayarlama ile etkinleştirilen bir opsiyondur.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Bu genellikle birincil sütundur, aksi takdirde yapılandırılamaz. NOT: Tür = trafik, bu ikincil metni temsil eder.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Bu muhtemelen Natasha zamanından dolayıdır. Natasha genellikle ev sahibi cihazlar zamanını kullanır. Bunu kontrol edebilirsiniz';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Bu kullanıcılar tarafından belirlenir ve bu yüzden küresel olarak benzersiz olmasına rağmen, bunun kesinlikle garantisi yoktur.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Bu, cihazlara herhangi bir ek depoladığımız dizidir.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Bu, Open-AudIT sorunlarını sorunken ilk çağrı noktası olarak kullanılır. Bunu JSON dosyası olarak almak için en üstteki ihracat düğmesine tıklayabilirsiniz ( destek biletine / e-postaya eklenecektir.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Bu konu soruşturma altında.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Bu öğe, seçilen özelliklerin değerini veya kullanılan sorgunun kimliğini içermelidir.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Bu öğe seçilen özelliğin değerini eşleştirmelidir.';

$GLOBALS["lang"]['This license expires on'] = 'Bu lisans sona ermektedir';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Bu güvenlik izni, Bitirme Hizmetleri idari aracı kullanarak değiştirilebilir.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Bu, debug modu olarak sorun gidermeden sonra yorumlanmalıdır, hiçbir fayda için disk üzerinde çok fazla log üretecektir.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Bu küresel olarak benzersiz olmalı, ama bunun olmadığı durumlarda gördüm.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Bu, 1 veya rafın yüksekliğine ayarlanmalıdır.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Bu veritabanında tam donanımlı alan adı olmalıdır. Şu anda sistemden sütunlar, alanlar ve kimlik tabloları destekleniyor. EG: sistem.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Bu devlet, Nmap\'un bir liman kapalı veya filtrelenmiş olup olmadığını belirleyebildiği zaman kullanılır. IP ID idle tarama için sadece kullanılır.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Bu oto-popüle olacaktır.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Bu keşif taramasını önemli ölçüde yavaşlatacaktır.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Bu, mevcut satırları silecektir.';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Bu, bu lisansı kalıcı olarak DELETElayacaktır.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Bu size Bulk Edit formunu gösterecektir. Bu formda ayarladığınız herhangi bir özellik tüm seçilmiş cihazlara uygulanacaktır. Birden çok özellik ayarlayabilirsiniz.';

$GLOBALS["lang"]['Thursday'] = 'Perşembe Perşembe Perşembe Perşembe Perşembe';

$GLOBALS["lang"]['time_caption'] = 'Zaman Caption';

$GLOBALS["lang"]['Time Caption'] = 'Zaman Caption';

$GLOBALS["lang"]['time_daylight'] = 'Zaman Günü';

$GLOBALS["lang"]['Time Daylight'] = 'Zaman Günü';

$GLOBALS["lang"]['Time to Execute'] = 'Zaman Execute';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (İkinciler)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Hedef başına zamanout. Hedef yanıt için X saniye bekleyin.';

$GLOBALS["lang"]['Timesatamp'] = 'Times';

$GLOBALS["lang"]['Timestamp'] = 'Times';

$GLOBALS["lang"]['timing'] = 'Timing Timing';

$GLOBALS["lang"]['Timing'] = 'Timing Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Başlık:';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = '.env adında yeni bir dosyaya (aynı dizide). Şimdi, yeni dosya ve rakipsiz ( #) aşağıdaki çizgiyi (line 17) düzenler.';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Aslında sorguyu yürütmek için, bir /execute uygulayın, böylece /open-audit /index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Bir makineyi denetlemek için, bilgi ve yönetici seviye erişime sahip olmalısınız.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Aktif bir Rehberlik alanında uzaktan bir makineyi denetlemek için, tedarik edilen kullanıcınız (veya hiçbir şey sağlanamazsa), kullanıcı senaryoyu çalıştırmalıdır) hedef makine yöneticileri grubu (veya alt grup).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Bir alanda olmayan uzaktan bir makineyi denetlemek için, yönetici hesabı kullanmalısınız (not değil) <i>Birbiri</i> admin hesabı, <i>The the the the</i> Yönetici hesabı) hedef PC\'de. #1 ve #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Yerelhost\'u denetlemek için, herhangi bir bilgi göz ardı edilir ve bağlantı senaryoyu çalışan kullanıcının ayrıntıları kullanılarak yapılır.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'İsmi ve versiyonunu kontrol ettiğimiz yazılımı karşılaştırmak. Çünkü sürüm numaraları formatta standartlaştırılmış değildir, bir denetim sonucu aldığımızda, her paket için yazılım ayrıntılarının geri kalanıyla birlikte veritabanında depoladığımız yeni bir özellik yaratırız. Bu nedenle, yazılım politikaları kullanarak temeller, 1.10 tarafından denetim edilmeyen bir cihaza karşı çalışırken çalışmayacaktır (en azından). Yazılım politikaları sürüme karşı test edebilir <i>eşit eşit eşit</i>, <i>Daha büyük Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük</i> veya <i>eşit veya daha büyük</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Yeni bir giriş oluşturmak, üst sağ el köşesinde Create düğmesine tıklayın.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Bir kaynak oluşturmak için gerekli verileri POST gerekir.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Uzaktan bir makine (Vista veya yukarıdaki) bir alanda değil, yönetici grubundaki bir hesapla UAC\'deki aşağıdaki bölümü görmek için.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Bunu sağlamak için, menüye giden yeni bir Auth öğe oluşturmak -> Admin -> Auth -> Auth Method oluşturun.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Windows Powershell\'ı uygulamak için, bir komut yönetici olarak açın ve aşağıdaki komutu kullanın';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Denetim senaryosu uygulamak için, bir terminal açın ve aşağıdaki komutu kullanın';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Bir mülk değeri ile filtre yapmak, mülk adını kullanın. Değerden önce çıkmalı Operatörler';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Nmap\'u Windows\'da kurmak için, Nmap sayfasını ziyaret edin';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Değişim yapmak için, sadece aşağıdaki adımları takip edin.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Tenant ID\'yi almak için. Azure portalını Azure Active Directory, Özellikler ve Tenant ID\'niz olarak gösterilir - adımı yanlış eşleştirme için beni suçlamaz, bu Microsoft roll nasıl.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Anahtarınızı almak için, AWS Konsoluna giriş yapın ve kullanıcı adınızı seçin, sonra My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Belirli bir bileşen öğesi geri dönmek için.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Belirli bir cihaz için tutarlı bir tür için tüm eşyaları geri vermek.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Bir bileşen türü için tüm eşyaları geri almak. Kullandığınız tüm yazılımları istiyorsanız,';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Tür tersine, bir eksi ekleyin, böylece';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Test senaryosu hedef Windows PC\'de çalıştırmak için';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Tümleşik cihazlar seçmek için, nmis_manage = y, ama (örneğin) tipi = yönlendirici. Daha karmaşık bir şey tercih ederseniz bir Grup veya Sorgu kullanabilirsiniz.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Bir veritabanı sütunu ile, kullanmak';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Bu Enterprise özelliğini kullanmak için, kullanıcınızı her zamanki gibi Open-AudIT\'de oluşturmanız gerekir. Bir şifre imzalamak gerekli değildir. Rol ve Orgs atamanız gerekir. Open-AudIT\'daki kullanıcı adı Entra ile eşleşmelidir <i>Tercih edilen kullanıcı adı</i> Özellikler. Full Name veya E-posta için ihtiyaç yoktur - bunlar Entra\'dan gelir. Kullanıcılarınızı bilmiyorsanız <i>Tercih edilen kullanıcı adı</i>Korku değil. Open-AudIT ve Enterprise Application in Entra\'daki yeni Auth Yöntemi oluşturabilirsiniz ve bir kullanıcı önceden gelişmekte olan bir kullanıcı olmadan Open-AudIT\'ı imzalamaya çalışırken, girişlerini kontrol edin ve loglarını göreceksiniz. <i>Tercih edilen kullanıcı adı</i> Konvienence için giriş yapın.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Bu Enterprise özelliğini kullanmak için, kullanıcınızı her zamanki gibi Open-AudIT\'de oluşturmanız gerekir. Bir şifre imzalamak gerekli değildir. Rol ve Orgs atamanız gerekir. Open-AudIT\'daki kullanıcı adı OKTA ile eşleşmelidir <i>isim adı</i> Özellikler. Full Name veya E-posta için ihtiyaç yoktur - bunlar OKTA\'dan doldurulur. Kullanıcılarınızı bilmiyorsanız <i>isim adı<i>Korku değil. Open-AudIT\'deki yeni Auth Menthod\'u ve OKTA\'daki Uygulamayı oluşturabilirsiniz ve bir kullanıcı önceden gelişmekte olan bir kullanıcı olmadan Open-AudIT\'ı imzalamaya çalışıyorsa, girişlerini kontrol edin ve girişlerinizi göreceksiniz. <i>isim adı<i> Konvienence için giriş yapın.<br/><p>Sonra Open-AudIT\'de yeni bir Auth yöntemi menü -> -> Admin -> Auth Methods -> Auth oluşturun. Bir isim verin ve seti verin <i>türü türü türü türü türü</i> Okta\'ya.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Bu özelliği kullanmak için, yapılandırma öğeleri maç_mac (for AWS için) ve maç_hostname ( Azure için). Bu otomatik olarak ilk kez bir bulut keşfi gerçekleştirilecektir. Open-AudITs eşleştirme kuralları hakkında daha fazlası için BURADA: Eşleştirme Cihazları';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Bir sorgunun ayrıntılarını görmek için, /open-audit/index standart URL yapısı. php/queries/{$id} kullanılmalıdır.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. İlk 10, 100, 1000 portları Nmaps "top portlar" seçenekleri olarak taramak için.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. İlk 10, 100, 1000 portları Nmaps "top portlar" seçenekleri olarak taramak için.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Geleneksel Çin';

$GLOBALS["lang"]['Traffic Light'] = 'Trafik Işığı';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ve Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Sorun Giderme';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problemshooting LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Open-AudIT Enterprise, bir zaman sınırı olmadan bize. Enterprise\'ın tüm özellikleri. 20 cihazlara sınırlı.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Open-AudIT Enterprise\'ın ÜCRETSİZ 100 cihaz lisansı ile tüm son özellikleri deneyin. Lütfen okuyun ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Bir LDAP kullanıcısı kullanarak giriş yapın. Bunun başarısız olacağını varsayıyoruz (başka bir şekilde, neden bunu okuyorsunuz?). Sonraki, yukarıdaki ther dosyasının çizgisini yorumlayın.';

$GLOBALS["lang"]['Tuesday'] = 'Salı Salı Salı Salı Salı';

$GLOBALS["lang"]['Tunisia'] = 'Tunus';

$GLOBALS["lang"]['Turkey'] = 'Türkiye Türkiye Türkiye';

$GLOBALS["lang"]['Turkish'] = 'Türk Türkçesi';

$GLOBALS["lang"]['Turkmenistan'] = 'Türkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Türkler ve Caicos Adaları';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Level';

$GLOBALS["lang"]['Tx Level'] = 'Tx Level';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profil';

$GLOBALS["lang"]['type'] = 'Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['Type'] = 'Tipi Tipi Tipi Tipi';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Type: Bu, bir varchar (a text alanı) veya bir Liste ( seçilebilir değer listesi).';

$GLOBALS["lang"]['Types of Networks'] = 'Networks türleri';

$GLOBALS["lang"]['URL'] = 'URL URL URL URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Port';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Port';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukrayna Ukrayna Ukrayna';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraynalı Ukraynalı Ukraynalı Ukraynalı';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Aşama 1 denetim (documentation review)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 denetim (basit inceleme)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Devamlı Analiz';

$GLOBALS["lang"]['Unfiltered'] = 'Unfiltered';

$GLOBALS["lang"]['uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Birleşik Arap Emirlikleri';

$GLOBALS["lang"]['United Kingdom'] = 'Birleşik Krallık';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Amerika Birleşik Devletleri Azınlık Adaları';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Amerika Birleşik Devletleri Virgin Adaları';

$GLOBALS["lang"]['United States of America'] = 'Amerika Birleşik Devletleri';

$GLOBALS["lang"]['Unknown'] = 'Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen';

$GLOBALS["lang"]['unlock_pin'] = 'Unlock Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Unlock Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Unscheduled';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = '5.2.0 olarak kullanılmayan.';

$GLOBALS["lang"]['Unused.'] = 'Kullanılmıyor.';

$GLOBALS["lang"]['Update'] = 'Update Update Update Update Update Update Update';

$GLOBALS["lang"]['update_external_count'] = 'Güncelleme Tarihi';

$GLOBALS["lang"]['Update External Count'] = 'Güncelleme Tarihi';

$GLOBALS["lang"]['update_external_from_internal'] = 'Güncelleme: Out From Internal';

$GLOBALS["lang"]['Update External From Internal'] = 'Güncelleme: Out From Internal';

$GLOBALS["lang"]['update_internal_count'] = 'Update Internal Count';

$GLOBALS["lang"]['Update Internal Count'] = 'Update Internal Count';

$GLOBALS["lang"]['update_internal_from_external'] = 'Update Internal from outside';

$GLOBALS["lang"]['Update Internal From External'] = 'Update Internal from outside';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Update NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Update Open-AudIT cihazlardan gelen cihazlar ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Update Open-AudIT NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Update Vulner tasks';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Bir {collection} girişinin bir özelliği.';

$GLOBALS["lang"]['Update attributes'] = 'Güncelleme özellikleri';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Güncellemeler her zaman keşif, yanıt vermek için tespit edilen IP\'lerle gerçekleştirilmiştir.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Güncellemeler her zaman keşif, Nmap tarafından taranmış IPs ile gerçekleştirilmiştir.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Her zaman keşfi denetim edebileceğimiz cihazlarla yürütülmüştür.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Her seferinde keşif sorgulayabildiğimiz cihazlarla gerçekleştirilmiştir.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Her seferinde keşif idam edildi.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Her defasında keşif idam edildi.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Her defasında keşif tamamlandı.';

$GLOBALS["lang"]['Updating'] = 'Updating';

$GLOBALS["lang"]['Upgrade'] = 'Yükseltin';

$GLOBALS["lang"]['Upload an audit result file'] = 'Bir denetim sonucu dosya yükleme';

$GLOBALS["lang"]['Upper Case'] = 'Upper Case';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Doğu Cumhuriyeti';

$GLOBALS["lang"]['usb'] = 'Telefon';

$GLOBALS["lang"]['Usb'] = 'Telefon';

$GLOBALS["lang"]['use'] = 'Use Use Use Use Use Use';

$GLOBALS["lang"]['Use'] = 'Use Use Use Use Use Use';

$GLOBALS["lang"]['use_authentication'] = 'Gerçekleştirme Kullanımı';

$GLOBALS["lang"]['Use Authentication'] = 'Gerçekleştirme Kullanımı';

$GLOBALS["lang"]['use_authorisation'] = 'Use Authorisation';

$GLOBALS["lang"]['Use Authorisation'] = 'Use Authorisation';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy Use Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSHSHSH kullanın';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Güvenli (LDAPS) kullanın';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Use Service Version Tespiti';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Servis Version Tespitini kullanın. tespit edilmiş bir liman açık olarak tespit edildiğinde, ayarlandığında <i>y</i>Nmap, bu limanda çalışan hizmetin versiyonunu belirlemek için hedef cihazı sorgulayacaktır.<br/>Bu, sınıfsız cihazları tanımlarken faydalı olabilir. Bu daha önce kullanılmamıştı.';

$GLOBALS["lang"]['Use WMI'] = 'WMI kullanın';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Bir kullanın <i>Sign-in method</i> OIDC - OpenID Connect ve an <i>Uygulama Türü</i> Web Uygulaması. Click Click Click Click Click <i>Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Kimlik için kullanım';

$GLOBALS["lang"]['Use for Roles'] = 'Rol için kullanım';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Gösterilen ve tıkladığınızda standart yükleme seçenekleri kullanın <i>I Agree</i>, <i>Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki Sonraki</i> ve <i>Yükleme</i> Nmap yüklemek için düğmeler.';

$GLOBALS["lang"]['used'] = 'Kullanılmış kullanılır';

$GLOBALS["lang"]['Used'] = 'Kullanılmış kullanılır';

$GLOBALS["lang"]['used_count'] = 'Kullanılan Kont';

$GLOBALS["lang"]['Used Count'] = 'Kullanılan Kont';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'OpenLDAP tarafından sadece kullanılır.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Tek bir cihaz keşfederken içsel olarak kullanılır.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Tek bir cihaz keşfederken içsel olarak kullanılır. Bağlantılar için bağlantılar <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'LDAP sunucularının bir kullanıcı ayrıntıları oluşturmak için yapılandırıldığı zaman kullanılır - bu erişime sahip oldukları Orgs içerir. Eğer bir kullanıcı bu LDAP grubundaysa, bu ya dag tayin edilirler.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'LDAP sunucularının bir kullanıcı ayrıntıları oluşturmak için yapılandırıldığı zaman kullanılır - bu onların atandığı roller içerir. Eğer bir kullanıcı bu LDAP grubundaysa, bu rolü tayin ederler.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'OpenLDAP\'ı kullanıcılarla bir grup üyesine eşleştirmek için ararken kullanılır. Teminatın Belirlenmesi <code>memberUid</code>. OpenLDAP tarafından sadece kullanılır.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Entegrasyonlar ve FirstWave izleme uygulamaları ile kullanılır.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Entegrasyonlar ve FirstWave izleme uygulamaları ile kullanılır. Keşif tarafından tespit edilen SNMP\'ye ayarlayın.';

$GLOBALS["lang"]['user'] = 'Kullanıcı Kullanıcı';

$GLOBALS["lang"]['User'] = 'Kullanıcı Kullanıcı';

$GLOBALS["lang"]['User DN'] = 'User DN';

$GLOBALS["lang"]['user_group'] = 'Kullanıcı Grubu';

$GLOBALS["lang"]['User Group'] = 'Kullanıcı Grubu';

$GLOBALS["lang"]['user_id'] = 'Kullanıcı kimliği';

$GLOBALS["lang"]['User ID'] = 'Kullanıcı kimliği';

$GLOBALS["lang"]['user_interaction'] = 'Kullanıcı Etkileşimi';

$GLOBALS["lang"]['User Interaction'] = 'Kullanıcı Etkileşimi';

$GLOBALS["lang"]['User Membership Attribute'] = 'Kullanıcı Üyeliği Attribute';

$GLOBALS["lang"]['user_name'] = 'Kullanıcı Adı';

$GLOBALS["lang"]['User Name'] = 'Kullanıcı Adı';

$GLOBALS["lang"]['User Policies'] = 'Kullanıcı Politikaları';

$GLOBALS["lang"]['Username'] = 'Username';

$GLOBALS["lang"]['username'] = 'Username';

$GLOBALS["lang"]['users'] = 'Kullanıcılar Kullanıcılar';

$GLOBALS["lang"]['Users'] = 'Kullanıcılar Kullanıcılar';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Kullanıcılar Netstat Ports\'a benzer çalışır. Bir kullanıcı eşleşen bir isim, statü ve şifre detayları ile varsa (değiştirilebilir, süresiz, gerekli) o zaman politika geçer.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Kullanıcılar, Roller ve Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'KodIgniter PHP Framework\'ü kullanın.';

$GLOBALS["lang"]['Using'] = 'Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using Using';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra for Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Auth için OKTA kullanımı';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Format seçeneğini kullanarak bir web tarayıcısı kullanırken kullanışlıdır, ancak JSON formatındaki sonucu görmek istersiniz. Format =json bunu elde eder. Normalde bir web tarayıcısını HTML\'ye kabul edecek, bu yüzden bu durumda, verilen sayfayı geri getiriyoruz. JSON\'u almak için bir API kullanarak kabul başlığını kabul etmeniz gerekir';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Genellikle Mbs, Yerden A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Genellikle Mbs, Location B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Genellikle Mbs, A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Genellikle Mbs, B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Genellikle 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Özbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Valid From Valid From Valid From Valid From';

$GLOBALS["lang"]['Valid From'] = 'Valid From Valid From Valid From Valid From';

$GLOBALS["lang"]['valid_from_raw'] = 'Raw\'dan geçerli';

$GLOBALS["lang"]['Valid From Raw'] = 'Raw\'dan geçerli';

$GLOBALS["lang"]['valid_to'] = 'Geçerli olmak için';

$GLOBALS["lang"]['Valid To'] = 'Geçerli olmak için';

$GLOBALS["lang"]['valid_to_raw'] = 'Raw için geçerli';

$GLOBALS["lang"]['Valid To Raw'] = 'Raw için geçerli';

$GLOBALS["lang"]['Valid Values'] = 'Geçerli Değerler';

$GLOBALS["lang"]['value'] = 'Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['Value'] = 'Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer Değer';

$GLOBALS["lang"]['Value Types'] = 'Değer türleri';

$GLOBALS["lang"]['values'] = 'Değerler Değerler';

$GLOBALS["lang"]['Values'] = 'Değerler Değerler';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Değerler: Bir davada <i>liste listesi listesi listesi listesi listesi</i> Alan, bu geçerli değerlerin ayrı bir listesi olmalıdır.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'Var';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Değişken Değişken Değişken Değişken';

$GLOBALS["lang"]['Variable'] = 'Değişken Değişken Değişken Değişken';

$GLOBALS["lang"]['Various'] = 'Çeşitli Çeşitli Çeşitli Çeşitli Çeşitli Çeşitli Çeşitli Çeşitli Çeşitli';

$GLOBALS["lang"]['vendor'] = 'Satışcı';

$GLOBALS["lang"]['Vendor'] = 'Satışcı';

$GLOBALS["lang"]['Vendor Report'] = 'Satış Raporu';

$GLOBALS["lang"]['vendors'] = 'Satışçılar';

$GLOBALS["lang"]['Vendors'] = 'Satışçılar';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Version Version Version Version';

$GLOBALS["lang"]['version_padded'] = 'Version Padded';

$GLOBALS["lang"]['Version Padded'] = 'Version Padded';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video Video Video';

$GLOBALS["lang"]['Video'] = 'Video Video Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnam Vietnam Vietnam';

$GLOBALS["lang"]['View'] = 'View View View View';

$GLOBALS["lang"]['View All'] = 'Hepsini Görüntüle';

$GLOBALS["lang"]['View Details'] = 'View Details';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['View Racks'] = 'View Rafs';

$GLOBALS["lang"]['View the'] = 'View the View the View the';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Sorudaki keşifleri görüntüle, sonra üst sağ araç çubuğunda Destek düğmesine tıklayın. Bu, keşif ayarlarını, yapılandırıcı öğeleri, keşif cihazı listesini ve bu özel keşif için girişleri sağlayacaktır.';

$GLOBALS["lang"]['View the release notes on the'] = 'Yayın notlarını görüntüle';

$GLOBALS["lang"]['Virtual Private Network'] = 'Sanal Özel Ağ Ağı';

$GLOBALS["lang"]['Virtual private network'] = 'Sanal Özel Ağ';

$GLOBALS["lang"]['Virtualisation'] = 'Sanallaştırma';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'YouTube kanalımızı eğitim videoları için ziyaret edin.';

$GLOBALS["lang"]['vlan'] = 'Vlan V';

$GLOBALS["lang"]['Vlan'] = 'Vlan V';

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

$GLOBALS["lang"]['vulnerabilities'] = 'Vulner yükümlülükleri';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulner yükümlülükleri';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulner yükümlülükleri';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulner yükümlülükleri';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulner yükümlülükleri ve sonuçları';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulner yükümlülükler başlangıçta 1 Ocak 2025\'ten önce yayınlandı. Önümüzdeki yıllardan itibaren geri dönmede hiçbir anlam görmüyoruz. Bu konfigürasyonda değiştirilebilir.';

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Vulnerability Status';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - Yazılım politikaları kullanarak temel bir temel oluşturmakta, şu anda Centos ve RedHat paketi adı kullanarak çekirdekleri paketliyor <i>çekirdekli çekirdek</i> ve <i>çekirdek-devel</i>. Bu isim ve farklı versiyonlarla birden fazla paket olabilir. Debian temelli dağıtımlar isimleri gibi kullanır <i>Linux-image-3.13.0-24-generic</i>Ancak sürüm numarası paketin adına dahil edilir. Çünkü RedHat tabanlı işletim sistemleri bu formatı kullanıyor ve daha sonra şu anda dışlanmış farklı versiyonlarla aynı paket isimleri var. <i>çekirdekli çekirdek</i> ve <i>çekirdek-devel</i> Yazılım politikalarından. Bu gelecekteki bir güncellemede ele alınabilir.';

$GLOBALS["lang"]['WHERE'] = 'WHERE';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials Gereksinimler';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Tamamlamak için bekleyin, sonra bu sonraki çizgide Agent\'ı kurmak için yapıştırın.';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis ve Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Daha fazla bilgi edinmek ister misiniz?';

$GLOBALS["lang"]['Warning'] = 'Uyarı Uyarı Uyarı';

$GLOBALS["lang"]['warranty'] = 'Garanti Garanti';

$GLOBALS["lang"]['Warranty'] = 'Garanti Garanti';

$GLOBALS["lang"]['warranty_duration'] = 'Garanti süresi';

$GLOBALS["lang"]['Warranty Duration'] = 'Garanti süresi';

$GLOBALS["lang"]['warranty_expires'] = 'Garanti Açıklamaları';

$GLOBALS["lang"]['Warranty Expires'] = 'Garanti Açıklamaları';

$GLOBALS["lang"]['warranty_status'] = 'Garanti Durumu';

$GLOBALS["lang"]['Warranty Status'] = 'Garanti Durumu';

$GLOBALS["lang"]['warranty_type'] = 'Garanti Türü';

$GLOBALS["lang"]['Warranty Type'] = 'Garanti Türü';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Ayrıca Taramadan Önce Ping\'e bir seçeneğimiz var ( uzun zamandır yönlendiriciler için geçerlilik süresi ARP önbellekleri). Bu genellikle iyi bir fikirdir.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Ayrıca aşağıdaki sırayla idam edilen eylem öğelerimiz var:';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Sık sık bu soruyu soruyoruz ve cevabın çoğu kesinlikle <i>Bu bağlıdır</i>. IP\'lerin taranması için sayısına bağlıdır, ağ bağlantı hızı, cihazların hızı taranıyor, test edilen cihazların sayısı ve Open-AudIT sunucusunun hızı. Bu değişkenlere erişmemize ve bir değer geri dönmemize izin verecek bir hesaplayıcımız yok. Sadece çok karmaşık. Genellikle keşiflerimi 256 IP adreslerine sınırlandırıyorum - ie, a /24 subnet. Müşterilerimizin tarama /16 altnetleri vardı (65k adresleri) ve işe yarıyor - ama uzun zaman alabilir. /24 bloklarda taramaktan çok daha iyisiniz. Sadece adresinizin ne olduğunu bilmiyorsanız, o zaman bu bir Tohum keşfi için iyi bir durum.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Daha ayrıntılı talimatlarımız var';

$GLOBALS["lang"]['We have tests for:'] = 'Testlerimiz var:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Open-AudIT\'ı yaptığımız gibi faydalı bulduğunuzu umuyoruz.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Başlangıçta varsayılan seçeneklerle senaryoların varsayılan listesini hazırladık. Senaryonun listesi /scripts\'te görülebilir. Bu varsayılan senaryolar silinemez. Sizin için gerekli olarak kullanmak için ek senaryolar oluşturabilirsiniz. Senaryonuz mevcut senaryolardan birine dayanan ve uygulanan özel seçeneklere sahip olacaktır. Senaryolar daha sonra menüdeki liste sayfasından indirilebilir: Discover -> Denetim senaryoları -> Liste Denetim senaryoları.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Ağınızda cihazlarla etkili bir şekilde konuşabilmemiz için bazı bilgilere ihtiyacımız var.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Sadece en az miktarda veri gönderiyoruz ve hassas bir doğadan hiçbir şey yok. Lisans verimizi (isim, tip, vb), uygulama verilerimizi (isim, sürüm, platform, zaman bölgesi vs), herhangi bir giriş hataları, bir cihaz türü ve kullanılan özelliklerin bir sayısını gönderiyoruz. <i>Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any Any</i> Çevre cihazları var ve bu, gönderdiğimiz verilerin tek parçası. Ve sadece bir cihaz türü ve bir sayı. Üretici değil, model değil. Özel bir şey göndermeyiz. Ağ yok. IP adresleri yok. OS versiyonları yok. Hiçbir yazılım adı yok. UUID ve Server alanları sha256 encoded (bu yüzden değeri bilmiyoruz). Ürün geliştirmek için ihtiyaç duyduğumuz verileri gönderiyoruz. Umarız bu bilgilerle hepimize fayda görüyorsunuz. Üründeki iyileştirmelere ve yeni özelliklere odaklanmak için bize yön verecek.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Google Chrome uzantısını gerçek dinlenme sorguları test etmek için Postman olarak kullanmaya eğilimliyiz. Bunu yüklemek ve test etmek isteyebilirsiniz.';

$GLOBALS["lang"]['Web'] = 'Web Web Web Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Web Application Routes';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Web Sitesi Web Sitesi Web Sitesi Web Sitesi Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Site Web Sitesi';

$GLOBALS["lang"]['Wednesday'] = 'Çarşamba Çarşamba Çarşamba Çarşamba';

$GLOBALS["lang"]['weight'] = 'Ağırlık';

$GLOBALS["lang"]['Weight'] = 'Ağırlık';

$GLOBALS["lang"]['weight_current'] = 'Kilo Şimdiki';

$GLOBALS["lang"]['Weight Current'] = 'Kilo Şimdiki';

$GLOBALS["lang"]['weight_empty'] = 'Ağırlık Boş';

$GLOBALS["lang"]['Weight Empty'] = 'Ağırlık Boş';

$GLOBALS["lang"]['weight_max'] = 'Ağırlık Max';

$GLOBALS["lang"]['Weight Max'] = 'Ağırlık Max';

$GLOBALS["lang"]['Welcome'] = 'Hoşgeldiniz Welcome Welcome Hoşgeldiniz';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Welcome Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Hoş geldiniz to Welcome to Welcome to Welcome to Welcome to Welcome to';

$GLOBALS["lang"]['Western Sahara'] = 'Batı Sahra';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Credentials olmasaydım ne bekleyebilirim';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'NMIS\'dan istediğim alanlar Open-AudIT\'de değil mi? Size kapıldık. Open-AudIT\'de bulunmayan dış sistemdeki herhangi bir alan otomatik olarak Open-AudIT Özel alanları olarak yaratılacaktır.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Diğer ağ cihazları hakkında ne? Anahtarlar, yönlendiriciler, yazıcılar, vb. Açıkçası, bu cihazlar için bazı SNMP kimliklerini sağlayabilirseniz en iyisidir. Sadece ihtiyaçları var <i>Sadece oku</i> Erişim. Ancak bunu yapmak istemiyorsanız, çalışan keşiften sizi durduran hiçbir şey yok, cihazları bulmak ve onları tanımlamak için bir kural veya iki yapmak (belki açık limanlarla birlikte MAC Adres eki kullanmak gibi). Çok fazla bilginiz olmayacak, ancak ağda olduklarını bileceksiniz, gördükleri şey ve son gördükleri zaman. Ağda yeni bir şey ortaya çıkarsa da göreceksiniz.';

$GLOBALS["lang"]['What do we send?'] = 'Ne gönderiyoruz?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Bu aslında sizin için ne anlama geliyor?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Bu rafın amacı nedir.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Bu yerin türü nedir. İzinli türler içinde tutulur <code>attributes</code> masa.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Linux\'ta Open-AudIT bir Windows makinesi keşfederken, uzaktan kumanda uygulamak için kullanırız';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Windows\'da Open-AudIT bir Windows makinesi keşfederken, uzaktan kumanda uygulamak için kullanırız';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Open-Aud IT bir cihaz hakkında verileri alır, ya bir denetim sırasında cihazı keşfeder veya cihazın ithal ettiği kullanıcı tarafından, bu keşfedilen cihaz veritabanında zaten var olan bir cihazla eşleşmesi veya eklenmelidir. Open-AudIT bunu belirlemek için bir dizi on iki mülk maçı kullanır. Maç Kuralları OR karşılaştırmalar, değil ve olarak çalışır. Bu, keşfettiği cihazın bir alanını mevcut bir cihaz olarak çözdüğü ilk kural anlamına gelir. Tüm Matching Kuralları, bir cihazın yeni olmasını ve yeni bir rekor oluşturulmasını sağlamak için başarısız olmalıdır.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'POSTing verileri olduğunda, bir erişim token içereceksiniz. Bir erişim token her istek türü ile oluşturulur, bu yüzden bir GET (örneğin) yapın ve kabul edin: Uygulama /json, meta+eri_token için cevabı parse ve bunu isteğinizle içerir. Bu, alan verilerine yerleştirilmelidir [erişim_token], IE, üst düzey.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Bir cihaz denetim senaryoyu keşfettiğinde dosya (veya dizi) ayrıntıları ile enjekte edilecektir. Hem denetim_linux.sh hem de denetim_windows.vbs, dosya yolundan bağımsız olarak kalabalık olacak. Eğer düşünüyorsanız <i>Ancak bir Linux yolunu bir Windows makinesine koymak, şeyleri kıracaktır!</i>Ancak kırılmayacak, sadece bu dosya veya dizi girişinden herhangi bir veri alamayacaksınız.<br/>Erişimli detaylar depolanacaktır. <i>Dosya dosyası</i> Veritabanı masası ve diğer herhangi bir özellik gibi depolanır. Dosya detayları başka herhangi bir özellik olarak depolanacaktır ve aşağıdaki özelliklerin herhangi biri değişirse uyarılar üretecektir - <i>full_name</i>, <i>hash</i>, <i>Inode</i>, <i>Son_changed</i>. Masa bir sistem_id, ilk_seen, son_seen ve mevcut sütunları dosya ayrıntıları olarak içermektedir.<br/>Attributes kaydedildi:<br/><ul><li>Windows - isim, boyut, dizi, SHA1 hash ( Dosya içeriğinden), son değişiklikler, izinler, sahibi, sürüm (bellek izin).</li><br/><li>Linux - isim, boyut, dizi, SHA1 hash ( Dosya içeriğinden), son değişiklikler, meta verileri geçen değişiklikler, izinler, sahibi, grup, inode.</li></ul>Hem Windows hem de Linux denetim senaryolarında aşağıdaki gibi bir bölüm göreceksiniz';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Bir keşif bittiğinde, ilgili keşif tarama seçeneği seçilir ve bu ayarlar hedef cihazları taramak için Nmap tarafından kullanılır. Ekran seçenekleri hangi limanların nmap taramalarının, ne kadar hızlı taradıklarını ve nmap pinginin ilk olarak IP\'nin canlı olup olmadığını belirlemek için kullanılır.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Bir keşif bittiğinde, ilgili keşif tarama seçeneği seçilir ve Nmap tarafından hedef cihazları taramak için kullanılır. Herhangi bir seçenek seçilirse, varsayılan yapılandırma öğesi (discovery_default_scan_option) seçilir ve kullanılır. Open-AudIT Topluluğu tüm keşifler için yapılandırma başına varsayılan seçenekleri kullanacak.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Bir subnet keşif ilk çalıştırıldığında, seçilmişse, menzil veya IP adreslerinde bir Nmap ping taraması yapılır. Herhangi bir cihaz yanıtlanması port taraması olacaktır. Bir Nmap ping tarama talep edilmezse, her IP bireysel port taramasıdır. Hangi limanlar? Bu, tarafından belirlenir';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Bir Linux cihazı SSH aracılığıyla denetim yaparken, bazı Linux dağıtımları bir TTY olmadan geçilmelerine izin vermez (bu yapıyoruz). Bu Linux dağıtımlarından birini tamamen denetlemek, temel kullanıcı bilgilerini sağlamak için en iyisidir. Bir TTY olmadan kök temin edilmez ve sudo mümkün değilse, denetim senaryosu çalıştırılacaktır ancak aksi takdirde veri miktarını içermeyecektir. Daha sonra kök kullanarak denetimler (veya sudo kullanarak yerel olarak çalışır) bu nedenle sistem hakkında ekstra ayrıntılar sağlayacaktır ve birkaç tane üretecektir. <i>Değişiklikler değişiklikleri değişiklikler</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Cihazları birleştirdiğinizde, hangi sistem bilgi için yazarlayıcı kaynaktır.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Tamamlandığında, komut penceresini kapatın ve siz yapılırsınız!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Bir widget oluştururken, eğer seçerseniz <i>Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced</i> düğmeye kendi özel SQL yükleme yeteneğiniz olacak.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Cihazları dış sistemden entegre ederken, eğer cihaz Open-AudIT\'de mevcut değilse, bunu yaratmalıyız?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Dış sistemdeki cihazlar entegre edildiğinde, cihaz dış sistemde güncellenirse, Open-AudIT\'de güncellemeliyiz?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Bir Discovery\'yi araştırırken, destek İhracatlı Discovery Logs\'i isteyecektir. Bunu almak için, menüye gidin -> Discoveries ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Linux tabanlı bir cihazla eşleşen zaman, ev sahibi adı ile birlikte Dbus id concatenated kullanmayı tercih ederiz. Ayrıca aşağıdaki tabloda olduğu gibi diğer seçenekleri de kullanabiliriz, ancak Dbus ID\'yi kökü olmadan alabiliriz. UUID\'i almak için (Anne dolabından), kök gerektiren dmidecode çalıştırmak zorundayız. Ne yazık ki, ESXi misafirini klonlarken, Dbus ID yeniden yaratmıyor - bu yüzden ev sahibi adı ile birlikte bunu bir araya getirin. Burada bağlantılı iyi bir makale var, detaylar <i>Neden Neden Neden Neden Neden Neden?</i> Donanım kimlikleri.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'JSON\'u talep ettiğinde, varsayılan olarak hiçbir sınır belirlenmez. Ekran görüntüsü talep edildiğinde, limit varsayılan olarak 1000\'e ayarlanır. Bu konfigürasyonda değiştirilebilir. Görün bakalım, <i>Sayfa_size</i> item item';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Dış bir cihaz alırken, bunun üzerine keşif yapmalıyız mı?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Windows\'da Open-AudIT çalışırken, Apache hizmeti hesabı bu olmalıdır <i>Düzenli düzenli</i> kullanıcı (veya yönetici). Çünkü bu, <i>Yerel Sistem</i> Apache’yi çalıştırmak için normalde kullanılan hesap, herhangi bir ağ kaynağına erişmiyor. IE - Kontrol senaryoyu Windows PC\'lere kopyalamak için yerel Sistem hesabı olarak çalışırken Apache\'i kullanamayız.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'konfigürasyon seçeneği ayarlandığında, konfigürasyon öğenin etkinleştirildiği belirli bir maç kuralları için cihazlar için bunu dikkate alıyoruz. Bu kurallar şunlardır:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kurallar keşifte koşarken, herhangi bir eşleştirme kuralı keşif gününde görünecektir. Bir örnek için aşağıda görün.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Bu kriter idam edilmek için planlandığında. Tanıklardan <code>tasks.type</code> ve <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Bu log oluşturulduğunda.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Bu kuyruk öğe işlemeye başladığında.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Open-AudIT Profesyonel veya Enterprise kullanırken, widgets Dashboards\'larda görüntülenmek için kullanılabilir ve özelleştirilebilir.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'İçsel olarak seçilmiş bir cihazı dış sistem için bir nesneye dönüştürdüğümüzde, dış verilerin ne olması gerekir. EG: tam anlamıyla, dize, vs.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Bu temel çizgisi uygularsak, bu temel için bir politikada olmayan cihazlarda eşyaları kontrol etmeliyiz.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Açık bir liman aldığımızda, şu anda üzerinde çalışan hizmetin versiyonu için test etmeye çalışmalıyız? Bu, gerçek çalışan hizmetleri onaylarken yardımcı olur.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Amazon AWS örneklerinizi keşfetmek için Clouds kullanıyorsanız, iki anahtar ve gizli anahtara ihtiyacınız olacak. Anahtarınız zaten sizinle ve gizli anahtarınızla da bilinmelidir. Not, Amazon tarafından sağlanan AWS Konsolunu kullanarak gizli anahtarınızı alamazsınız. Eğer yanlış yere sahipseniz, yeni bir tane oluşturmanız gerekir.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Microsoft Azure örneklerinizi keşfetmek için Clouds kullanıyorsanız, dört temele ihtiyacınız olacak - abonelik id, onant id, müşteri id ve müşteri sırrı.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Bir keşif yaratırken, cihazlara bir seçeneğiniz var_assigned_to_org. Bu, bu keşif için keşfedilen herhangi bir cihazın atanacağı anlamına gelir (henüz) <code>devices.org_id</code> set to) seçilmiş Organizasyonunuz.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Gelişmiş düğmeye tıklayarak yeni bir keşif yaratırsanız, değiştirmek için daha fazla seçeneğiniz var, bunlardan biri keşif türü. Tipler her zaman Subnet ( yukarıdaki aralığı, subnet, ip seçenekleri) ve Active Directory olmuştur. v4.1\'de olduğu gibi, Open-AudIT, Tohum adı verilen yeni bir keşif türüne sahiptir.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Bir programda çalıştırmak için bir Sorgu etkinleştirdiğinizde, sorgu sizin seçtiğiniz adrese e-posta ile gönderilir. Menü ile e-posta ayarlamanız gerekir -> Admin -> Enterprise -> Email Config. Ayrıca birimiz var <i>test e-posta testi<i> Bu sayfada düğme. ayrıntılarınızı girin, kurtarın ve sonra test edin. Başarılı olup olmadığını ve belli bir test e-postasının başarılı olup olmadığını bildiren bir modal kutusuna sahip olmalısınız. E-posta yapılandırdığınızda, planlanan sorgunuz yapılandırılabilir.<br/><br/>Bir isim verin, Seçmeli açıklama, seçin <i>Sorgu Sorgulama</i> türü, istenen sorguyu seçin, bir e-posta adresi sağlayın, bir format seçin ve programı ayarlar.<br/><br/>Bir saat (saat sadece, henüz bir dakika), göreve bir isim verin (bu, gerçek planlanan sorgunun adı değil), sorgu koşmak istediğiniz günleri seçin, hangi soruları çalıştıracağınızı seçin ve bir e-posta adresi verin ve bir sorgu formatı seçin.<br/>Queries, sorgunun bir e-posta gövdesi (in html formatında) ve talep edilen formatta eklenen sorgu ile gönderilir.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Metine sütun başlıklarından birine girdiğinizde, normal bir kelime kullanabilirsiniz. Örneğin, girdiğinizde <code>computer</code> Yukarıdaki arama kutusu <i>Tipi Tipi Tipi Tipi</i> sütun, arama tüm cihazları bilgisayar türü ile geri dönecektir. Temel olarak, Open-Aud IT, bir URL kullanarak veri talep eder <code>devices?devices.type=computer</code>. Şimdi veriTables aramasını kullanırken önemli bir fark var, standart standart karşı';

$GLOBALS["lang"]['where'] = 'Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede?';

$GLOBALS["lang"]['Where'] = 'Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede?';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Nerede $x bir sayıdır. Bu birçok LDAP girişi DB\'de ve alındı.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Cihazın Detayları Ekranda nerede bu alanı görmek istersiniz.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Rafın arka planda olduğu yerde.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'kırılganlık, etki, erişilebilirlik ve Gizlilik kullanarak bileşenleri etkiler.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Kullanıcı etkileşimi gereklidir (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Hangi OS bu kriter uygulanır.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Hangi cihazlar Open-AudIT dış sistemden yaratmalıdır (eğer herhangi biri varsa). All, None veya verilen Attribute\'yi kullanarak.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Hangi ağ keşfetmeliyiz. Bu, formatta olmalıdır';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Hangi sub-menu bu soruyu göstermeliyiz.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kim bu rafı yaptı.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Windows Server neden sadece?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Neden bu politikayı dışlıyoruz?';

$GLOBALS["lang"]['Wide Area Network'] = 'Geniş Alan Ağı';

$GLOBALS["lang"]['Wide area network'] = 'Geniş alan ağı';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Type';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets, Dashboards\'ta kullanılmak üzere tasarlanmıştır. Enterprise kullanıcıları, gerekli olduğu gibi öğeleri oluşturmak, güncellemek ve silmek için tam bir özgürlüke sahiptir.';

$GLOBALS["lang"]['width'] = 'Genişlik genişliği Genişlik genişliği';

$GLOBALS["lang"]['Width'] = 'Genişlik genişliği Genişlik genişliği';

$GLOBALS["lang"]['windows'] = 'Windows Windows Windows Windows';

$GLOBALS["lang"]['Windows'] = 'Windows Windows Windows Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windows Paketleri';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Senaryo';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows ayrıca hizmeti baştan engelledi. Hedefde Windows Security elmat başlar ve WinExeSvc executable\'ın çalıştırmasına izin verilir (düşütme ve sonra Eylemleri başlatın).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe sayfasında Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe, çalıştırılacak ve çalıştırılacak aşağıdaki Windows hizmetleri gerektirir: Netlogon ve rpc hizmetleri çalıştırılmalıdır.<br/><br/>Lütfen hedef Windows makinesine giriş yapın ve netlogon ve rpc için hizmetleri kontrol edin.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe yönetici$ ve RPC (net servisi başlangıç) uzaktan bir servis (winexesvc) kurmak ve başlatmak için kullanır. Bu hizmet, Open-AudIT sunucusundan hedefe ve geri dönüş yolundaki çıktıya taşımak için kullanılan bir boruyu başlatır. Ne zaman bitince, adı verilen boru kapanır ve kazananlar daha fazla bağlantı veya yükleme beklerler ( verilen seçeneklerin bağımsız olarak).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Kablosuz Yerel Alan Ağı';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Open-AudIT\'in 3.3.0 sürümü ile bir Cluster kavramını tanıttık. Bu sezgisel haritalar bir web kümesi, veritabanı kümesi veya dosya kümesi (veya birkaç başka amaçtan biri) belirli bir türe (yüksek kullanılabilirlik, redundancy, ölçeklendirme vs).<br/><br/>Seçilen kümeye bağlı olarak, raporlama biraz farklı olacaktır.<br/><br/>Örneğin, sanallaştırmanın bir amacı ile bir küme oluşturabilirseniz, o cihazlardaki sanal makineleri de göreceksiniz.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Bulutların özelliğinin tanıtılması ile, bulut, Amazon AWS veya Microsoft Azure\'un ayrıntılarını tedarik edebilirsiniz ve Open-AudIT, tüm bu örnekleri bulmak için ilgili API\'yi kullanacak.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Working Credentials'] = 'Çalışma Credentials';

$GLOBALS["lang"]['Wrap Up'] = 'Yukarı';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'PHP senaryolu dilde yazılı.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Sarı Soru';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Evet Evet Evet';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Executables koleksiyonunda girişler olarak taramak için ekstra yönetmenleri tanımlayabilirsiniz. Tanımlandığında, rehber ve tüm alt-yönetmenler, eklenebilir dosyalar için taranır. Ayrıca yönetmenleri ve dosyaları dışlanmalıdır. Aktif olduğunda, bunlar Linux denetim senaryoya enjekte edilir ve ne zaman çalıştırılır (genellikle bir keşif parçası olarak). Bunu bir senaryoda istiyorsanız, hedefe manuel olarak kopyalayabilirsiniz, menü -> Discover -> scripts -> List scripts and download the script from there.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Denetim senaryolarını belirli gereksinimlerinize uygun olarak değiştirmek için her zaman ücretsizdir. Varsayılan senaryolar tarafından yazılacakları gibi yükseltildiğiniz zaman bu değişikliklere ihtiyacınız olacak. Değiştirilmiş senaryonuzun bir master kopyasını, Open-AudIT\'i yükseltmeyi öneririm, sonra yeni varsayılan senaryo ve değiştirilmiş senaryonuz arasında bir diff çalıştırın ve farklılıkları uygulayın. Denetim senaryoları yerli senaryolardır (Windows VBScript, diğerleri Bash). Basit ve kolay değiştirmek - sadece yükseltmeden önce değişikliklerinizin bir kopyasının olduğundan emin olun.';

$GLOBALS["lang"]['You are running version'] = 'You are running version';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Normal Open-AudIT JSON tabanlı API kullanarak koleksiyona erişebilirsiniz. Tıpkı başka herhangi bir koleksiyon gibi. Lütfen bakınız';

$GLOBALS["lang"]['You can also'] = 'Ayrıca yapabilirsiniz';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Ayrıca, değişiklikleri gösteren bir masanın alt kısmında da görebilirsiniz.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Ayrıca aşağıdaki formatı kullanarak özellikleri belirtebilirsiniz.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Her zaman sanal altyapınızda ilk dalga VM çalıştırabilirsiniz (ESX, Azure, et al). İlk dalga VM, Jameel Linux\'u çalıştırıyor ve OS lisans kaygılarından ve sınırlamalarından ücretsiz. Ya da kendi Linux seçimine yükleme. Redhat 9, Ubuntu 20.04, 22.04 ve 24.04\'i ve Leicester 11 ve 12\'yi de destekliyoruz.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Cihazları otomatik olarak kullanarak bir yere ataabilirsiniz';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Özel cihazları özel olarak kullanabilirsiniz';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Gerçek yönetici hesabı kullanarak bir kayıt anahtarı yaratarak uzaktan bir makineyi kontrol edebilirsiniz. Her makinedeki aşağıdaki anahtarı denetim altına almak ve kullanılan kullanıcı kimliklerinin yönetici grubunun bir üyesi olduğundan emin olmak.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Ağ içindeki cihazlarda geçerli herhangi bir kimlik olmadan kesinlikle bir keşif çalıştırabilirsiniz, ancak alınan bilgiler, Open-AudIT\'in hangi Open-AudIT\'un alabileceği çok küçük bir alt set olacaktır. <i>ile birlikte</i> Referanslar.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Bir temel oluşturabilirsiniz, bir grup cihazlara karşı çalıştırın ve sonuçları görebilirsiniz, planlanan yürütmeyi ekleyin, karşılaştırma için daha fazla masa ekleyin (şu anda sadece yazılım, netstat portları ve kullanıcılar etkinleştirilir), temel düzenleme, sonuçlar ve daha fazlası.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Mevcut denetim senaryolarının herhangi biri için tüm seçeneklerle bir senaryo oluşturabilirsiniz - sadece Windows değil. AIX, ESX, Linux, OSX ve Windows hepsi kaplıdır.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Tüm entegrasyonları hangi sisteme özelleştirebilirsiniz (NMIS veya Open-AudIT) bir alan temelinde otoritedir. Open-AudIT veya NMIS\'da ve/veya güncelleştirme cihazları oluşturmak için seçenekler var. Oluşturulmuş veya güncel bir cihaz üzerinde bir keşif yapmalıyız ve çok daha fazlası. Sayfanın sağ tarafında her öğe için açıklamalar var.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Bu uygulama için bir uygulama tanımlanabilir ve bir cihazla ilişkilendirebilirsiniz. Bir cihaz birden fazla uygulama ile ilişkilendirilebilir. Bir uygulama birden fazla cihazla ilişkilendirilebilir.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Cihazın detayları sayfasında her bireysel cihaz için Ek Alan değerini düzenleyebilirsiniz. Cihazın ayrıntılarını görüntülemek, alanı içeren bölümü açın ve (eğer sahipseniz)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Cihaz Tohum Discovery\'i katı bir dizi parametre içinde düşmesini sınırlayabilirsiniz: <i>Subnet</i> ve <i>Özellik</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Kullanabileceğiniz cihazlar manuel olarak sipariş edebilirsiniz';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Bunu URL\'de format seçeneği sağlayarak genişletebilirsiniz.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Kontrol ekranlarına doğru tıklayarak bireysel cihazlar seçebilirsiniz veya tüm cihazları masanın en iyi sağına tıklayın (proneath the Edit düğmesi gibi görünen).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Sistemdeki herhangi bir özelliği seçerek tüm cihazları seçebilirsiniz (device) tablo ve eşleştirme (bakınız → Admin → Database → List Tables → system for a list of fields). Bir özellik maç sadece tek bir değerle eşleştirebilir.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Herhangi bir sunucuyu menüye giderken bir koleksiyoncuya dönüştürebilirsiniz -> Admin -> Jeweller -> Bu yüklemeyi bir koleksiyon oluşturun. Bu yükleme sunucuya giriş için kimliklere ihtiyacınız olacak.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Mavi manzara simgesine tıklayarak görebilirsiniz. Ayrıca izinler varsa düzenleyebilir veya silebilirsiniz.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'PHP MBString uzantılı uzatmanız yoktur. Bu uzatma gereklidir.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'PHP SNMP uzatmasına sahip değilsiniz. Bu uzatma son derece tavsiye edilir.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Bu URL\'yi personelinize bir e-postada kopyalayıp yapıştırmak isteyebilirsiniz.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Active Directory veya OpenLDAP kullanıcılarınızı özgünleştirmek isteyebilir, ancak yetki sağlamayabilir. Bunu yapmak için, emin olun <i>Kimlik için kullanım</i> Y\'ye ve <i>Rol için kullanım</i> N\'ye ayarlanıyor. Kimlikler LDAP tarafından doğrulanacaktır, ancak Open-AudIT\'de zaten yaratılan ve görevlendirilen rollere sahip olmanız gerekir. Bu aynı zamanda da bu <i>otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik otomatik</i> Uygulanmak için geçerlidir';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Bu maç kurallarının küresel olarak benzersiz olmayabilir öğeler için olduğunu fark etmiş olabilirsiniz. Bazı örnekler:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Yeni bir lisans eklemeden önce mevcut lisansınızı silmelisiniz.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Bir kriter uygulamak için SSH kimliklerini çalışmanız gerekir. Aşağıdaki İşletim Sistemleri şu anda destekleniyor: Centos 7, Leicester 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Bunu daha fazla sürümle genişletmeyi planlıyoruz.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Tüm dosyayı metin kutusuna kopyalayıp yapıştırmalısınız. Aşağıdaki durumda, tüm metin kopyalayın.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Düzenlenen_by ve editör_date alanları dahil etmemelisiniz. Bunlar otomatik olarak ayarlanacaktır.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Sadece metin ikinci cümlesini değiştirmeniz gerekir,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'ATTRIBUTE_NAME için gerekli sütunu yerine getirmelisiniz.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Populate yapmak istediğiniz sütunların isimlerini içeren bir başlık kullanmanız gerekir, sonra aşağıdaki veri hatlarınız.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'İhtiyacınız olan özellikleri içeren sadece bu masaları kullanmalısınız. Genellikle bir sol katılmak kullanırım. Örneğin';

$GLOBALS["lang"]['You will need a'] = 'Bir şeye ihtiyacınız olacak';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Windows güvenlik duvarı üzerindeki WMI için limanlara ihtiyacınız olacak her hedef Windows bilgisayar üzerinde açılacaktır. Windows için Core servers, güvenlik bağlantılarının per başına girmesine izin verir';

$GLOBALS["lang"]['You will see a list of'] = 'Bir listesini göreceksiniz';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube mphs';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API anahtarınız.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google\'ınız JSON olarak ayrıntılı bilgi edinin.';

$GLOBALS["lang"]['Your Host is'] = 'Senin Senin Senin Host ev sahibi';

$GLOBALS["lang"]['Your Licenses'] = 'Lisanslarınız';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure Müşteriniz ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Müşteri Gizli.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure Aboneliğiniz ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'PHP sürümünüz sizin';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQLiniz bu sorguyu ortaya çıkaracak özellikleri seçmek için.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'SQLiniz bu grubu populate edecek cihazlar seçmek için.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH anahtarınız.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Erişim bilgileriniz, o bulutların başına API olarak.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Verileriniz sizin verilerinizdir. Beğendiğiniz her zaman ekleyebilirsiniz. Hatta yararlı bir şekilde CSV, JSON ve XML\'ye ihracat sağlarız. Ve JSON API\'si var. Ve özel raporlar yazabilirsiniz ve bu çıktıları CSV, XML ve JSON\'da bulabilirsiniz! Yine, bu sizin verileriniz - başka biri değil. Verilerinizin güvenliğinin ellerinizde olduğundan emin olabilirsiniz.';

$GLOBALS["lang"]['Your database platform is'] = 'Veritabanı platformunuz veritabanınızdır';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Bu bağlantının statüsünün tanımınız (provisioned, Emekli, vs).';

$GLOBALS["lang"]['Your description of this item.'] = 'Bu öğenin tanımınız.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Bu yazılım parçası için genel adın';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Bu yazılım parçası için genel sürüm';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Kullanıcınız şimdi logon\'u tıklayarak logon\'a girebilmeli <i>Logon with Entra</i> Open-AudIT logon sayfasındaki düğme. Yukarıda belirtildiği gibi, eğer logon başarısız olursa, lütfen log dosyalarını kontrol edin ve kullanıcıları doğrulayın <i>Tercih edilen kullanıcı adı</i>.<br/><br/>Ve hepsi de öyle olmalı. Şimdi kullanıcılarınız, hatırlamak için daha az sayıda bilgi sahibi olmalıdır!<br/><br/>Her zaman olduğu gibi, bu özellikle sıkıntılarınız varsa, lütfen e-posta';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Kullanıcınız şimdi logon\'u tıklayarak logon\'a girebilmeli <i>Logon with OKTA</i> Open-AudIT logon sayfasındaki düğme. Yukarıda belirtildiği gibi, eğer logon başarısız olursa, lütfen log dosyalarını kontrol edin ve kullanıcıları doğrulayın <i>isim adı</i>.<br/><br/>Ve hepsi de öyle olmalı. Şimdi kullanıcılarınız, hatırlamak için daha az sayıda bilgi sahibi olmalıdır!<br/><br/>Her zaman olduğu gibi, bu özellikle sıkıntılarınız varsa, lütfen e-posta';

$GLOBALS["lang"]['Your web server is'] = 'Web sunucunuz sizin';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabve Zimbabve';

$GLOBALS["lang"]['a String'] = 'Bir String';

$GLOBALS["lang"]['active'] = 'aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif';

$GLOBALS["lang"]['active directory'] = 'Aktif dizi';

$GLOBALS["lang"]['active/active'] = 'Aktif/aktif';

$GLOBALS["lang"]['active/passive'] = 'Aktif /';

$GLOBALS["lang"]['advertisement'] = 'reklam reklam reklam reklam';

$GLOBALS["lang"]['alert'] = 'Uyarı';

$GLOBALS["lang"]['all'] = 'Bütün hepsi';

$GLOBALS["lang"]['allocated'] = 'Ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'Bir Integer';

$GLOBALS["lang"]['and'] = 've';

$GLOBALS["lang"]['and / or'] = 've / veya';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'Ve bir destek bileti oluşturulacak ve harekete geçecek.';

$GLOBALS["lang"]['and another'] = 'Ve başka ve';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'Ve son salıverme kendini yükleme. Bunu bulmak için sayfayı aşağıya kaydırmanız gerekebilir.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'Uygulamaya gidin -> Enterprise Applications (far left menu), sonra tıklayın <i>Yeni uygulama</i>.';

$GLOBALS["lang"]['and its current time is'] = 'Ve mevcut zamanı';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'Ve bugünden önce bir garanti süresi için görünüyor.';

$GLOBALS["lang"]['and review what is possible.'] = 'Ve neyin mümkün olduğunu gözden geçirin.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'and the Sign-out yönlendirme URI being';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'Ve son çizgiler muhtemelen en ilgi çekici olacaktır. Bu çizgiler size girişin başarısız olduğu tam noktayı vermelidir.';

$GLOBALS["lang"]['antivirus'] = 'antivirüs antivirüs';

$GLOBALS["lang"]['application'] = 'Uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama';

$GLOBALS["lang"]['approved'] = 'onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış';

$GLOBALS["lang"]['are required.'] = 'Gereklidir.';

$GLOBALS["lang"]['are used.'] = 'kullanılır.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Bu limanda yanıt veren bir cihaz olarak.<br/>Bu, güvenlik birimlerinin mevcut olmayan bir cihaz adına yanıt verdiği bazı müşterilere neden oldu ve bu nedenle yanlış pozitif cihaz tespitine neden oldu. Artık bu özelliği tarama başına koymak için mevcut.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'Referans noktası olarak ve tüm sanal makineleri sistemin kontrolü aracılığıyla filtreler. VM için seri alanı.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Çalışmayı varsayın ve müşteri nüfusu DNS';

$GLOBALS["lang"]['attribute'] = 'Özellikler';

$GLOBALS["lang"]['auto'] = 'Otomatik otomatik otomatik otomatik otomatik';

$GLOBALS["lang"]['backup'] = 'yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme';

$GLOBALS["lang"]['banned'] = 'yasaklanmış yasak yasak yasaklanmış yasak yasak yasaklanmış yasak yasak yasaklanmış yasak yasak yasak yasaklanmış yasak yasak';

$GLOBALS["lang"]['blog'] = 'Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog';

$GLOBALS["lang"]['blue'] = 'mavi mavi mavi mavi mavi';

$GLOBALS["lang"]['bottom'] = 'alt alt alt alt alt';

$GLOBALS["lang"]['building'] = 'Bina binası inşa binası inşa binası';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'Kullanıcı doğrulaması için kullanılabilir (kullanıcı adı ve şifre doğru) ve kullanıcı izni (hangi roller ve orgs bir kullanıcının sahip olduğu).<br/><br/>Eğer bir kullanıcı yapılandırılmış LDAP\'da değilse, Open-AudIT (eg: the: The <i>admin</i> kullanıcı), Open-AudIT her iki kimlik doğrulama ve yetki için kendini kullanmaya geri dönecektir.<br/><br/>Open-Aud IT rolleri ve orgs için belirli LDAP grupları kullanır. Bir kullanıcı, kullanıcıların erişimini belirlemek için Open-AudIT için bu grubun doğrudan bir üyesi olmalıdır.<br/><br/>Doğru yapılandırıldığında, LDAP kullanımı tamamen Open-AudIT\'deki kullanıcıları yaratma ihtiyacını ortadan kaldırabilir. Her iki kimlik doğrulama ve yetki için LDAP\'ı kullanmak için Open-AudIT\'i yapılandırın. Kullanıcı Open-AudIT\'de mevcut değilse, LDAP\'da var ve onların kimlikleri doğru ve gerekli grupların bir üyesi Open-AudIT otomatik olarak kullanıcı hesabı yaratacaktır.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Artık dosyaların bir dosya veya dizi hakkında ayrıntıları alabilir ve bu dosyaları Open-AudIT veritabanındaki diğer özellikler olarak izleyebilir. Bu özellik Linux Open-AudIT sunucuları için kutudan çalışır, ancak Windows Open-AudIT sunucusu altında hizmet hesabına bir değişiklik gerekir. Desteklenen müşteriler Windows ve Linux\'tır.';

$GLOBALS["lang"]['changed'] = 'değişmiş değişiklikler değişmiş değişti';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'seçilmiş. WMI için bir liman varsa, SSH veya SNMP cihazı yanıtlıyorsa, cihazı kullanarak daha fazla queried using using using the port if a port for WMI, SSH or SNMP is detected response the device is further queried using using using using using using using using using the use ';

$GLOBALS["lang"]['cloud'] = 'bulut bulut bulut bulut';

$GLOBALS["lang"]['code'] = 'kod kodu kod kodu kod kodu';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'koleksiyonlar ve detaylar sayfaları uygulamak için bir simgedir.';

$GLOBALS["lang"]['collector'] = 'koleksiyoncu koleksiyoncu';

$GLOBALS["lang"]['collectors'] = 'koleksiyoncular';

$GLOBALS["lang"]['column'] = 'sütun sütun sütun';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'sütun da içerecektir <i>y</i> veya <i>n n</i>. Bu, şu anda cihazda mevcut olup olmadığını gösterir. Örneğin yazılımlar kurulabilir (bu da sonuçlanacaktır). <i>Yazılım = y</i>), ancak bir sonraki denetimde tespit edilemeyebilir. Open-AudIT o zaman bu satırların mevcut özelliklerini değiştirecek <i>n n</i>.';

$GLOBALS["lang"]['column. The'] = 'sütun. The The The The The The The The';

$GLOBALS["lang"]['compute'] = 'hesaplama';

$GLOBALS["lang"]['config'] = 'Yapı';

$GLOBALS["lang"]['console'] = 'konsol konsol konsol';

$GLOBALS["lang"]['contains'] = 'Tesisler içerir';

$GLOBALS["lang"]['create'] = 'Oluştur oluşturmak';

$GLOBALS["lang"]['created'] = 'Oluşturulmuş yaratılmış yaratılmış yaratılmış yaratılmış yaratılmış';

$GLOBALS["lang"]['credentials'] = 'Referanslar';

$GLOBALS["lang"]['critical'] = 'kritik kritik kritik kritik kritik kritik';

$GLOBALS["lang"]['cve'] = 'c';

$GLOBALS["lang"]['database'] = 'veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'Delege';

$GLOBALS["lang"]['delete'] = 'silinir';

$GLOBALS["lang"]['deleted'] = 'silinmiş silinmiş silinmiş silinmiş silinmiş silinmiş';

$GLOBALS["lang"]['denied'] = 'inkar etmedi inkar etmedi inkar';

$GLOBALS["lang"]['details'] = 'Detaylar';

$GLOBALS["lang"]['devices'] = 'cihazlar';

$GLOBALS["lang"]['digitalocean'] = 'dijitalocean';

$GLOBALS["lang"]['discoveries'] = 'keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif keşif';

$GLOBALS["lang"]['documentation for further details.'] = 'Daha fazla ayrıntı için belgeler.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'yapar. <strong>Değil değil</strong> Aşağıdaki güvenlik raporları için';

$GLOBALS["lang"]['does not equal'] = 'eşit değil';

$GLOBALS["lang"]['emergency'] = 'Acil acil acil acil acil durum';

$GLOBALS["lang"]['entra'] = 'Entra';

$GLOBALS["lang"]['equals'] = 'eşitler eşitler';

$GLOBALS["lang"]['error'] = 'hata hatası';

$GLOBALS["lang"]['established'] = 'kurulmuş kurulmuş kurulmuş kurulmuş kurulmuş kurulmuş kuruldu.';

$GLOBALS["lang"]['excluded'] = 'dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış dış';

$GLOBALS["lang"]['expired'] = 'süresi sona ermiş';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Aşırı - Bu olmadan, organizasyon başarısız olur.

Çok yüksek - Organizasyonların hayatta kalması için gerekli olan işlevler ve hemen restore edilmelidir.

Yüksek - Hızlı bir şekilde restore edilmesi gereken önemli fonksiyonlar, ancak biraz daha uzun bir kurtarma zamanı olabilir.

Orta - Gerekli olan Fonksiyonllar, ancak daha uzun zamana tahammül edebilir.

Düşük - Önemli bir etki olmadan gecikebilecek bağımsız fonksiyonlar.

Unassigned - ayarlanana kadar varsayılan.';

$GLOBALS["lang"]['fail'] = 'Başarısız başarısız başarısız başarısız başarısız';

$GLOBALS["lang"]['false'] = 'yanlış yanlış yanlış';

$GLOBALS["lang"]['file'] = 'Dosya dosyası';

$GLOBALS["lang"]['firewall'] = 'Güvenlik Duvarı';

$GLOBALS["lang"]['first'] = 'İlk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce ilk önce';

$GLOBALS["lang"]['fixed'] = 'sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit';

$GLOBALS["lang"]['floor'] = 'zemin zemin zemin zemin';

$GLOBALS["lang"]['for'] = 'Çünkü';

$GLOBALS["lang"]['for authentication'] = 'Onaylama için';

$GLOBALS["lang"]['for this information.'] = 'Bu bilgi için.';

$GLOBALS["lang"]['from Audit Script Result'] = 'Denetim Senaryo Sonuç';

$GLOBALS["lang"]['from NMIS'] = 'NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'YerelHost (Using LRPC) başvuru konteynerinde çalışan';

$GLOBALS["lang"]['front'] = 'Ön cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe ön cephe';

$GLOBALS["lang"]['front-left'] = 'ön sol';

$GLOBALS["lang"]['front-right'] = 'Ön sağ';

$GLOBALS["lang"]['github'] = 'izle';

$GLOBALS["lang"]['google'] = 'google google google';

$GLOBALS["lang"]['greater or equals'] = 'Daha büyük veya eşitler';

$GLOBALS["lang"]['greater than'] = 'Daha büyük Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük';

$GLOBALS["lang"]['group'] = 'Grup grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu';

$GLOBALS["lang"]['has not been set'] = 'ayarlanmış değil';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'Hedef Windows PC için bir çalışma ters DNS resolvable IP var.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'idam edilme yeteneği var. Onda';

$GLOBALS["lang"]['head'] = 'Baş kafa başı';

$GLOBALS["lang"]['here'] = 'İşte burada burada';

$GLOBALS["lang"]['high availability'] = 'yüksek kullanılabilirlik';

$GLOBALS["lang"]['howto'] = 'HowtoHowtoHowto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Eğer bir Linux sanal makine klonlayın, bunu manuel olarak yeniden üretmezseniz (ve benim tecrübemde insanlar aynı kalacaktır) kalacaktır.';

$GLOBALS["lang"]['ignored'] = 'Göz ardı ardı ardı ardı ardı ardı ardı ardı ardı ardı';

$GLOBALS["lang"]['import the example device data'] = 'Örnek cihazı verileri ithal edin';

$GLOBALS["lang"]['in'] = 'İçinde in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in';

$GLOBALS["lang"]['in Enterprise.'] = 'Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Girişlerde aşağıdaki değerlere sahip olabilir.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'Çıktılarda aşağıdaki değerlere sahip olabilir.';

$GLOBALS["lang"]['inactive'] = 'Inaktif';

$GLOBALS["lang"]['incomplete'] = 'Eksik eksik eksik eksik eksik';

$GLOBALS["lang"]['info'] = 'Bilgi bilgi';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer, Nmap\'un standart yükleme yerlerini test edecek';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Int, text, bool (y/n) vs.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'Ulusal Standartlar ve Teknoloji Enstitüsü tarafından muhafaza edilen ABD standardı';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'Bilgi güvenliğini yönetmek için uluslararası bir standarttır. Uygulama, bakımı ve sürekli olarak bir Bilgi Güvenliği Yönetim Sistemi (ISMS) geliştirmek için bir çerçeve sağlar.';

$GLOBALS["lang"]['is based upon'] = 'Kur\'an\'a dayanmaktadır.';

$GLOBALS["lang"]['is licensed to'] = 'Lisanslanır';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'Listede bir sonraki ve Open-AudIT şifre ve anahtar doğrulama kullanabilir. Open-AudIT aynı zamanda doğrudan kök kullanımına karşı koruyucu bir kullanıcı kullanabilir (aynı zamanda kök kullanabilir olsa da). En iyi sonuçlar için, kök kullanıcı veya bir sudo, kullanıcı kullanılmalıdır (Viki\'de kök ve hedef müşteri yapılandırması olmadan Denetim Linux\'a bakın). Windows cihazları aynı zamanda ssh çalıştırabilir, ancak Open-AudIT bunu tespit ederse, SSH sorgularını durduracaktır ve bunun yerine WMI\'yi (WMI kimliklerini varsayar).';

$GLOBALS["lang"]['is the link to the'] = 'bağlantıdır.';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'Özel tabloları ve sütunlarını görüntülemek için öğe. Bu, ihtiyacınız olanı tam olarak bulmanızı sağlayacaktır, çünkü şema oluşturma senaryosunun Natasha konsolundan geçerken.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'lat / uzun ve görüntü haritası almak için gerekli anahtar. See See See See See';

$GLOBALS["lang"]['left'] = 'Sol sol sol sol sol soldan ayrıldı';

$GLOBALS["lang"]['less or equals'] = 'Daha az veya eşitler';

$GLOBALS["lang"]['less than'] = 'Daha az';

$GLOBALS["lang"]['license'] = 'Lisans lisansı';

$GLOBALS["lang"]['licenses'] = 'Lisanslar Lisanslar';

$GLOBALS["lang"]['like'] = 'Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like';

$GLOBALS["lang"]['line'] = 'line line line line line line';

$GLOBALS["lang"]['list'] = 'liste listesi listesi listesi listesi listesi';

$GLOBALS["lang"]['list View, using the Create button'] = 'Liste View, Create düğmesine tıklayın';

$GLOBALS["lang"]['load balancing'] = 'Yük dengelemek';

$GLOBALS["lang"]['location'] = 'Konum lokasyon';

$GLOBALS["lang"]['locations'] = 'Yer lokasyonları';

$GLOBALS["lang"]['managed'] = 'yönetilen yönetilen yönetilen yönetilen yönetilen';

$GLOBALS["lang"]['methods'] = 'Yöntem yöntemleri';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Dağın noktası';

$GLOBALS["lang"]['must'] = 'Gerekli olması gerekir';

$GLOBALS["lang"]['network'] = 'ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ ağ';

$GLOBALS["lang"]['news'] = 'Haber Haber Haber haberler';

$GLOBALS["lang"]['no'] = 'Hayır hayır hayır hayır hayır hayır hayır';

$GLOBALS["lang"]['node'] = 'Hayır hayır';

$GLOBALS["lang"]['none'] = 'Hiçbir kimse hiçbir şey yok';

$GLOBALS["lang"]['normal'] = 'Normal normal normal normal normal';

$GLOBALS["lang"]['not applicable'] = 'Uygulanamaz';

$GLOBALS["lang"]['not in'] = 'Hayır, hayır';

$GLOBALS["lang"]['not like'] = 'beğenmemek gibi değil';

$GLOBALS["lang"]['notice'] = 'Fark';

$GLOBALS["lang"]['notification'] = 'bildirim';

$GLOBALS["lang"]['okta'] = 'Okta';

$GLOBALS["lang"]['on devices where'] = 'cihazlar üzerinde nerede';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize';

$GLOBALS["lang"]['optionally '] = 'Seçmeli olarak ';

$GLOBALS["lang"]['or'] = 'veya';

$GLOBALS["lang"]['or the GitHub page at'] = 'veya GitHub sayfası';

$GLOBALS["lang"]['other'] = 'Diğer diğer diğer diğer diğer diğer diğer diğer';

$GLOBALS["lang"]['package'] = 'Paket paketi';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Sayfa. LDAP sunucunuzu menüden çıkarın -> Admin -> LDAP Servers -> JSON\'a ayrıntılar ve bu verileri de içerir.';

$GLOBALS["lang"]['partition'] = 'Bölüm';

$GLOBALS["lang"]['pass'] = 'Geç geçiş';

$GLOBALS["lang"]['pending'] = 'Beklemek için bekleyen bekleme';

$GLOBALS["lang"]['performance'] = 'performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans';

$GLOBALS["lang"]['performed'] = 'gerçekleştirildi';

$GLOBALS["lang"]['permission'] = 'İzin izni';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Son nokta için gerekli izinler';

$GLOBALS["lang"]['pie'] = 'pasta';

$GLOBALS["lang"]['planning'] = 'Planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama';

$GLOBALS["lang"]['predictable'] = 'öngörülebilir öngörülebilir öngörülebilir öngörülebilir';

$GLOBALS["lang"]['query'] = 'Soru Soru';

$GLOBALS["lang"]['rear'] = 'Arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka';

$GLOBALS["lang"]['rear-left'] = 'Arka sol';

$GLOBALS["lang"]['rear-right'] = 'Arka sağ';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'sürüm sürüm sürüm sürüm';

$GLOBALS["lang"]['removed from display, but has been set'] = 'Ekrandan kaldırıldı, ama kuruldu';

$GLOBALS["lang"]['reserved'] = 'Ayrı ayrı ayrı ayrı ayrı ayrı ayrı';

$GLOBALS["lang"]['right'] = 'Doğru doğru doğru doğru doğru doğru doğru';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'haklar) Bunu düzenlemek için alan değerine tıklayabilirsiniz.';

$GLOBALS["lang"]['role'] = 'rol rolü rol rolü rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rolü rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol rol';

$GLOBALS["lang"]['room'] = 'Oda odası';

$GLOBALS["lang"]['row'] = 'Sıra sıra sıra sıra';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'Servis aşağıdaki hata nedeniyle başlamadı';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Bu yüzden Open-AudIT, sorgunuzu uygun Orgs\'e kısıtlamayı biliyor.';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart';

$GLOBALS["lang"]['starts with'] = 'Başlamak ile başlar';

$GLOBALS["lang"]['storage'] = 'depolama depolama depolama depolama depolama depolama depolama';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'Masa masası';

$GLOBALS["lang"]['table and insert the original rows.'] = 'Masa ve orijinal satırları ekleyin.';

$GLOBALS["lang"]['team'] = 'takım takım takım takımı';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Metin. İlki dizi indeksidir ve as-is olarak bırakılmalıdır. indeks, çeviri metni aramak için şablonlarda kullanılır.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Ardından masa için ayrıntılar düğmesine tıklayın.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Ardından masa için ayrıntılar düğmesine tıklayın. Cihaz detayları depolanır';

$GLOBALS["lang"]['timestamp'] = 'Zamanlar';

$GLOBALS["lang"]['to'] = 'tom için';

$GLOBALS["lang"]['to create an item of this type'] = 'Bu tür bir öğe oluşturmak için';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL\'ye, verilen bir cihazın tüm bileşeni masaları dahil olmak üzere tam veritabanı girişi alacaksınız.';

$GLOBALS["lang"]['to the user'] = 'Kullanıcıya';

$GLOBALS["lang"]['top'] = 'Top top';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'Üst sırrı - Askeri / Hükümet sınıflandırması. Açıklama, ulusal güvenlik için olağanüstü ciddi bir tehlikeye neden olacaktır.

Gizli - Askeri / Hükümet sınıflandırması. Açıklama, ulusal güvenlik için ciddi zararlara neden olacaktır.

Gizli - Askeri / Hükümet ve Özel Sektör sınıflandırması. Gizli olan veriler ticari sırlar, entelektüel veriler, uygulama programlama kodu ve yetkisiz açıklama gerçekleştiği takdirde organizasyonu ciddi şekilde etkileyebilecek diğer veriler içerir. Bu seviyedeki veriler sadece iş ihtiyacı olan organizasyondaki personele veya doğrudan ilgili olan verilere göre kullanılabilir. Gizli verilere erişim genellikle her erişim için izin gerektirir.

Özel - Özel Sektör sınıflandırması. Özel olan veriler, insan kaynakları kayıtları, tıbbi kayıtları ve maaş bilgileri dahil olmak üzere personelle ilgili herhangi bir bilgi içerir, bu sadece organizasyon içinde kullanılır.

Hassas - Askeri / Hükümet ve Özel Sektör sınıflandırması. Hassas olan veriler örgütsel finansal bilgileri içerir ve CIA ve doğruluğunu sağlamak için ekstra önlemler gerektirir. Açıklama ulusal güvenlike zarar verebilir.

kamu - Özel Sektör sınıflandırması. Kamu verileri genel olarak halkla paylaşılan verilerdir ve organizasyonda olumsuz bir etkiye neden olmaz. Kamu verileri örnekleri, organizasyonda kaç kişinin çalıştığını ve bir organizasyonun üretim veya satış yaptığını içerir.

Sınıfsız - Askeri / Hükümet sınıflandırması. Genel olarak ulusal ilgi için herhangi bir tehdit olmadan halka dağıtılabilecek herhangi bir bilgi.

Unassigned - ayarlanana kadar varsayılan.';

$GLOBALS["lang"]['traffic'] = 'trafik trafiği trafik trafiği';

$GLOBALS["lang"]['true'] = 'Gerçek gerçek gerçek gerçek gerçek gerçek gerçek gerçek';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'Doğru veya yanlış (In JSON context)';

$GLOBALS["lang"]['unallocated'] = 'Unallocated';

$GLOBALS["lang"]['unauthorised'] = 'Hiçbir yazar';

$GLOBALS["lang"]['unchanged'] = 'değişmeden değişmeden değişmeden değişmeden değişmeden';

$GLOBALS["lang"]['unknown'] = 'Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen';

$GLOBALS["lang"]['unmanaged'] = 'yönetilmedi.';

$GLOBALS["lang"]['unused'] = 'Kullanılmamış olmayan';

$GLOBALS["lang"]['update'] = 'update update update';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'Cihazlarınızdan toplanan verileri kullanın ve verilen değerle yüklenen yazılımı eşleştirin, birçok lisansın nasıl kullanıldığını ve kaç kişinin kaldığını hesaplar. Vahşi kartpostalların kullanımına izin verir <i>match string</i> Bilgisayarla oynayan alan. İsim özellikleri.';

$GLOBALS["lang"]['using the main menu items.'] = 'Ana menü öğelerini kullanarak.';

$GLOBALS["lang"]['valid'] = 'Geçerli geçerli geçerli geçerli geçerli geçerli geçerli';

$GLOBALS["lang"]['version'] = 'sürüm sürüm sürüm sürüm sürüm sürüm sürüm sürüm sürüm sürüm sürüm sürüm';

$GLOBALS["lang"]['virtualisation'] = 'Sanallaştırma';

$GLOBALS["lang"]['warning'] = 'Uyarı';

$GLOBALS["lang"]['web'] = 'web web web web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'Yerel ve Uzaktan erişim izni ile.';

$GLOBALS["lang"]['with devices::update permission.'] = 'cihazlarla: güncel izin.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'Sign-On Redirect URI ile';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'Geliştiricilere tanıdık bir şekilde basit ve sezgisel erişim sağlama niyetiyle. Bu API\'ye ek olarak, web arayüzü aynı istek formatını kullanacak ve bazı ek eylemleri tedarik edecektir (örneğin: öğeleri oluşturmak için HTML formları).';

$GLOBALS["lang"]['yes'] = 'evet evet evet';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'İlk dalga ürünlerini kullanmak için HighCharts lisansı gerektirmez. Lisans Lisans Lisans Lisans Lisans Lisans Lisans';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Bu Org veya Konum için bulunan herhangi bir cihaz atayacaksınız.';

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

