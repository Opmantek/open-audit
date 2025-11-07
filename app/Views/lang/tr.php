<?php
$GLOBALS["lang"][' Default, currently '] = ' Varsayılan olarak, şu anda ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Şimdi bir dil dosyası ile destekleniyor. Kullanıcınızı bu dili kullanmak için değiştirmek için tıklayın, tıklayın ';

$GLOBALS["lang"][' seconds'] = ' saniye saniye saniye saniye saniye';

$GLOBALS["lang"]['10 Minutes'] = '10 Dakika';

$GLOBALS["lang"]['15 Minutes'] = '15 Dakika 15 Dakika';

$GLOBALS["lang"]['30 Minutes'] = '30 Dakika';

$GLOBALS["lang"]['5 Minutes'] = '5 Dakika';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>NOT NOT Not NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT NOT</strong> - Bu URL\'ye yerel Open-AudIT sunucusundan erişebilirsiniz. İndirilen senaryo başka herhangi bir makinede çalıştırıldığında gönderemeyecek. Diğer makineleri denetlemeniz gerekiyorsa, lütfen senaryoyu herhangi bir uzaktan makineden indirmeniz gerekir, Open-AudIT sunucusunun kendi başına bir tarayıcı kullanmıyorsunuz.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'indirmek için bir URL.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Bu yazılım parçasının sayısını gösteren hesaplanmış bir alan, seçilen Org\'deki bilgisayarlarda bulundu (ve yapılandırılırsa torunları).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Bir koleksiyoncu ya da Stand-Alone modunda.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Geçerli CVE\'lerin ayrı bir listesi.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Değerlerin ayrı bir listesi, bunlardan biri seçilebilir.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'koşmak için bir emir. Ajan Windows tabanlı olduğunda, bu komut güçshell ajanı içinde çalıştırılır.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'SSH\'yi taramak için özel TCP portlarının bir listesi, 135 WMI, 62078 iPhone senkronizasyonudur.';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'taramak için özel UDP limanlarının bir listesi (161 SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Daha düşük bir sayı, diğer kurallardan önce uygulanacaktır.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Daha düşük bir sayı, diğer kurallardan önce uygulanacaktır. Varsayılan ağırlık 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Başvuru doğrulamasını kullanırken logon\'u sağlayan bir şifre (örneğin bir tane).';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP adresleri ve MAC adreslerinin benzersiz olduğu bir routing domain veya adres alanı.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bir güvenlik alanı, Network Domain içinde idari bir alan veya politika domainidir.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Giriş girişinin kısa bir açıklaması.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string that maçlarını <code>software.name</code> Özellikler. Yüzde standart SQL vahşi kartı kullanabilirsiniz (%) bir veya daha fazla karakterle eşleştirebilirsiniz.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Kullanılabilirliği etkileyen bir kırılganlık, saldırganların hizmetleri, kaza sistemlerini bozmalarına veya inkâr etmemelerine izin verebilir (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Gizliliği etkileyen kırılganlık, saldırganların kişisel bilgi, kimlik veya özel iş verileri gibi hassas verileri okumalarına izin verebilir (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Bütünlüğü etkileyen bir kırılganlık, saldırganların verileri değiştirmelerine veya sistem yapılandırmalarına izin verebilir (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'AD Grubu';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN vs.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TÜM IP\'ler';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Dokümantasyon';

$GLOBALS["lang"]['API Key required.'] = 'API Key gerekli.';

$GLOBALS["lang"]['API Result'] = 'API Sonuç';

$GLOBALS["lang"]['About'] = 'About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About About';

$GLOBALS["lang"]['Accept'] = 'Kabul Kabul Kabul Kabul';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Access Token Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token Token';

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

$GLOBALS["lang"]['Add image'] = 'Add image';

$GLOBALS["lang"]['additional_items'] = 'Ek Maddeler';

$GLOBALS["lang"]['Additional Items'] = 'Ek Maddeler';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Admin'] = 'Admin Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Adaları';

$GLOBALS["lang"]['Albania'] = 'Arnavutluk';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Alanlar';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Bir dizi bir dizi <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Bir dizi bir dizi <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Dış bağlantıları daha fazla bilgi için temsil eden bir nesne dizisi.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Gerekli özellikleri içeren şifreli bir JSON belgesi, bağlı olarak <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Bu site tarafından gerekli olan hizmet seviyesinin bir göstergesidir.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Keşif tamamlandığını gösteren bir iç alan.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Seçmeli bir GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Sudo kullanmak için opsiyonel bir şifre.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ve Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirüs';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Herhangi bir TCP portu (ortalama, yer yok) bu keşiften dışlanmak istiyorsunuz. Sadece Nmap 7+ kullanırken kullanılabilir.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Herhangi bir UDP limanları (ortalama, yer yok) bu keşiften dışlanmak istiyorsunuz. Sadece Nmap 7+ kullanırken kullanılabilir.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'İhtiyacınız olan herhangi bir ek belge.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Yapmaya çalıştığınız ek notlar.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Herhangi bir cihaz denetim senaryosu çalıştırdığında bu Org\'a atanacaktır (if set). Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Herhangi bir keşfedilen cihazlar, ayarlandığında bu Konuma atanacaktır. Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Herhangi bir keşfedilen cihazlar denetim senaryosu çalıştırdığında bu Konuma tayin edilecektir (if set). Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Herhangi bir keşfedilen cihazlar, ayarlandığında bu Org\'a atanacaktır. Eğer ayarlanmadıysa, onlar <code>org_id</code> Bu keşiften. Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Herhangi bir gerekli filtre. NOT: Tür = trafik, bu font-awesome ikonunu temsil eder.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Test ettiğiniz herhangi bir özel TCP portu (ortalama, yer yok).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Herhangi bir UDP limanları test etmeyi arzu ediyorsunuz (ortalama, yer yok).';

$GLOBALS["lang"]['Application'] = 'Uygulama Uygulaması';

$GLOBALS["lang"]['application_id'] = 'Uygulama ID';

$GLOBALS["lang"]['Application ID'] = 'Uygulama ID';

$GLOBALS["lang"]['Application Licenses'] = 'Uygulama Lisansları';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Uygulama, İşletim Sistemi veya Donanım.';

$GLOBALS["lang"]['applications'] = 'Uygulamalar';

$GLOBALS["lang"]['Applications'] = 'Uygulamalar';

$GLOBALS["lang"]['applied'] = 'Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied';

$GLOBALS["lang"]['Applied'] = 'Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied Applied';

$GLOBALS["lang"]['Approved'] = 'Onaylanmış Onaylanmış Onaylanmış Onay Onay Onaylandı';

$GLOBALS["lang"]['April'] = 'Nisan Nisan Nisan Nisan';

$GLOBALS["lang"]['architecture'] = 'Mimari Mimari Mimari';

$GLOBALS["lang"]['Architecture'] = 'Mimari Mimari Mimari';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Bu girdi kaynağını silmek istediğinizden emin misiniz?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Bu çıktı öğeyi silmek istediğinizden emin misiniz?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Emin misiniz? Bu tüm kuyruk girişlerini kaldıracak ve kalan IP\'lerin keşfedilmesini sağlayacaktır.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Emin misiniz? Bu, kuyruk işleme sayısını sıfırlayacak ve sunucuya yük olabilir.';

$GLOBALS["lang"]['area'] = 'Alan Alanı';

$GLOBALS["lang"]['Area'] = 'Alan Alanı';

$GLOBALS["lang"]['Argentina'] = 'Arjantin Arjantin';

$GLOBALS["lang"]['Armenia'] = 'Ermenistan';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Cihaz ortamları için özellikleri olarak. Üretim, Eğitim, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Bir Operatör olarak';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

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

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes'] = 'Attributes';

$GLOBALS["lang"]['Audit'] = 'Denetim Denetim Denetimi';

$GLOBALS["lang"]['Audit AIX'] = 'Denetim AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Denetim ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Denetim Linux';

$GLOBALS["lang"]['audit_log'] = 'Denetim Log';

$GLOBALS["lang"]['Audit Log'] = 'Denetim Log';

$GLOBALS["lang"]['Audit My PC'] = 'PC My PC';

$GLOBALS["lang"]['Audit OSX'] = 'Denetim OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Denetim Sonuç Girişi';

$GLOBALS["lang"]['Audit Status'] = 'Denetim Durumu';

$GLOBALS["lang"]['Audit Windows'] = 'Denetim Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Cihazı Denetim';

$GLOBALS["lang"]['Audits'] = 'Denetimler';

$GLOBALS["lang"]['August'] = 'Ağustos Ağustos Ağustos Ağustos Ağustos Ağustos';

$GLOBALS["lang"]['Australia'] = 'Avustralya Avustralya Avustralya';

$GLOBALS["lang"]['Austria'] = 'Avusturya Avusturya';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Kimlik Numarası';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaycan Azerbaycan Azerbaycan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Backup Backup Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamalar';

$GLOBALS["lang"]['Bahrain'] = 'Bahreyn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeş';

$GLOBALS["lang"]['bank'] = 'Banka Bankası';

$GLOBALS["lang"]['Bank'] = 'Banka Bankası';

$GLOBALS["lang"]['Banned'] = 'Yasaklandı';

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

$GLOBALS["lang"]['Basic'] = 'Temel Temel Temel Temel Temel Temel Temel';

$GLOBALS["lang"]['Belarus'] = 'Belarus Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belçika Belçika Belçika';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Ben';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

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

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Adası (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brezilya';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brezilyalı Portekiz';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'İngiliz Hint Okyanusu Bölgesi (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'İngiliz Virgin Adaları';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaristan';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'İş Gereksinimleri';

$GLOBALS["lang"]['Business Requirements'] = 'İş Gereksinimleri';

$GLOBALS["lang"]['Buy'] = 'Satın Al Satın Al';

$GLOBALS["lang"]['Buy More'] = 'Daha Fazla Satın Al';

$GLOBALS["lang"]['Buy More Licenses'] = 'Daha Fazla Lisans Satın Al';

$GLOBALS["lang"]['By'] = 'Yemin olsun';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maske Maske';

$GLOBALS["lang"]['cli_config'] = 'Clinton Config';

$GLOBALS["lang"]['CLI Config'] = 'Clinton Config';

$GLOBALS["lang"]['CPU'] = 'CPU CPU CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU\'lar';

$GLOBALS["lang"]['CSV'] = 'Kataloğu';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Keşiften hesaplandı.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Bu ağ için toplam geçerli IP adreslerini hesaplayın.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Tamamlandıktan sonra, bu öğeyi uygulamak için alınan zaman.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Entegrasyon bittiğinde hesaplandı ve bu entegrasyondaki cihazların JSON gösterimini içeriyor. Her bağlantı için <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Entegrasyon bittiğinde hesaplandı ve bu entegrasyondaki yerlerin JSON gösterimini içeriyor. Her bağlantı için <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Entegrasyon bittiğinde hesaplandı ve Open-AudIT\'den seçilen cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'İntegrasyon bittiğinde hesaplanır ve dış sistemi seçilen cihazların sayısını içerir.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'İntegrasyon bittiğinde hesaplandı ve dış sistemde güncellenecek cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Entegrasyon bittiğinde hesaplandı ve Open-AudIT\'de güncellenen cihazların sayısını içeriyor.';

$GLOBALS["lang"]['Cambodia'] = 'Kamboçya';

$GLOBALS["lang"]['Cameroon'] = 'Cameroon';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampüs Alan Ağı';

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

$GLOBALS["lang"]['Chad'] = 'Chad Chad';

$GLOBALS["lang"]['change_id'] = 'Değişim ID';

$GLOBALS["lang"]['Change ID'] = 'Değişim ID';

$GLOBALS["lang"]['change_log'] = 'Log Change Log Change';

$GLOBALS["lang"]['Change Log'] = 'Log Change Log Change';

$GLOBALS["lang"]['change_type'] = 'Change Type';

$GLOBALS["lang"]['Change Type'] = 'Change Type';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Bu limanlarda SSH için kontrol edin';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Bu limanı herhangi bir SSH hizmeti için kontrol edin.';

$GLOBALS["lang"]['Chile'] = 'Şili';

$GLOBALS["lang"]['China'] = 'Çin Çin Çin Çin';

$GLOBALS["lang"]['Choose'] = 'seçin';

$GLOBALS["lang"]['Choose (select OS first)'] = 'seçin (select OS ilk)';

$GLOBALS["lang"]['Choose a Device'] = 'Bir Device seçin';

$GLOBALS["lang"]['Choose a Table'] = 'Bir tablo seçin';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Örnek cihazları Open-AudIT\'den kaldırmak için Delete düğmesine tıklayın.<br/>Bu, aşağıdaki cihazları veritabanından kaldıracaktır. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Örneğin cihaz verileri ile açık-AudIT\'i populate Open-AudIT\'i aşağıdaki İthalat düğmesine tıklayın.';

$GLOBALS["lang"]['Client ID'] = 'Müşteri ID';

$GLOBALS["lang"]['client_ident'] = 'Müşteri Ident';

$GLOBALS["lang"]['Client Ident'] = 'Müşteri Ident';

$GLOBALS["lang"]['client_secret'] = 'Müşteri Gizli';

$GLOBALS["lang"]['Client Secret'] = 'Müşteri Gizli';

$GLOBALS["lang"]['client_site_name'] = 'Müşteri Site Adı';

$GLOBALS["lang"]['Client Site Name'] = 'Müşteri Site Adı';

$GLOBALS["lang"]['Close'] = 'Close Close Close Close Close';

$GLOBALS["lang"]['Cloud'] = 'Bulut Bulut';

$GLOBALS["lang"]['Cloud Details'] = 'Bulut Detayları';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Bulut ID';

$GLOBALS["lang"]['Cloud ID'] = 'Bulut ID';

$GLOBALS["lang"]['cloud_log'] = 'Bulut Girişi';

$GLOBALS["lang"]['Cloud Log'] = 'Bulut Girişi';

$GLOBALS["lang"]['cloud_name'] = 'Bulut Adı';

$GLOBALS["lang"]['Cloud Name'] = 'Bulut Adı';

$GLOBALS["lang"]['Cloud Network'] = 'Bulut Ağı';

$GLOBALS["lang"]['clouds'] = 'Bulutlar';

$GLOBALS["lang"]['Clouds'] = 'Bulutlar';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Adaları';

$GLOBALS["lang"]['Collector'] = 'koleksiyoncu';

$GLOBALS["lang"]['Collector (UUID)'] = '(UUUID)';

$GLOBALS["lang"]['Collector Name'] = 'Hemşire Adı';

$GLOBALS["lang"]['collector_uuid'] = 'Jewel Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Jewel Uuid';

$GLOBALS["lang"]['collectors'] = 'Koleksiyonlar';

$GLOBALS["lang"]['Collectors'] = 'Koleksiyonlar';

$GLOBALS["lang"]['Colombia'] = 'Kolombiya Kolombiya Kolombiya';

$GLOBALS["lang"]['color'] = 'Renkli Renk';

$GLOBALS["lang"]['Color'] = 'Renkli Renk';

$GLOBALS["lang"]['column'] = 'Köşe';

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

$GLOBALS["lang"]['comments'] = 'Yorumlar';

$GLOBALS["lang"]['Comments'] = 'Yorumlar';

$GLOBALS["lang"]['commercial'] = 'Ticari Ticaret';

$GLOBALS["lang"]['Commercial'] = 'Ticari Ticaret';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Saldırının karmaşıklığı (Low veya High).';

$GLOBALS["lang"]['Component Table'] = 'Bitirme Tablosu';

$GLOBALS["lang"]['Components (All Devices)'] = 'Bileşenler (Tüm cihazlar)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'Durum';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, şu anda ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['configuration'] = 'Yapılandırma';

$GLOBALS["lang"]['Configuration'] = 'Yapılandırma';

$GLOBALS["lang"]['Configure'] = 'Configure';

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

$GLOBALS["lang"]['contact'] = 'İletişim';

$GLOBALS["lang"]['Contact'] = 'İletişim';

$GLOBALS["lang"]['contact_name'] = 'İletişim Adı';

$GLOBALS["lang"]['Contact Name'] = 'İletişim Adı';

$GLOBALS["lang"]['contained_in'] = 'Ölmüş';

$GLOBALS["lang"]['Contained In'] = 'Ölmüş';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Bir JSON nesnesi ilişkili pencereleri ve konumlarını detaylandırır.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Eğer ssh, snmp ve wmi keşif seçenekleri kullanmamız gerektiğini belirleyen alanlar. Bir JSON nesnesi.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Context Name';

$GLOBALS["lang"]['contractual_obligations'] = 'Sözleşmesel Borçlar';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sözleşmesel Borçlar';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Adaları';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopyalayın ve denetim sonucu yapıştırın';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Forumlara aşağıdakileri kopyalayın ve yapıştırın, başka bir Open-AudIT veya başka bir yerde bu öğeyi sağlamanız gerekir.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Create Internal Count';

$GLOBALS["lang"]['Create Internal Count'] = 'Create Internal Count';

$GLOBALS["lang"]['create_internal_from_external'] = 'Dıştan Dış Yaratın';

$GLOBALS["lang"]['Create Internal From External'] = 'Dıştan Dış Yaratın';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS Cihazları Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT cihazlardan gelen cihazlar ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT NMIS';

$GLOBALS["lang"]['created_by'] = 'Yaratarak';

$GLOBALS["lang"]['Created By'] = 'Yaratarak';

$GLOBALS["lang"]['created_date'] = 'Oluşturulmuş Tarih';

$GLOBALS["lang"]['Created Date'] = 'Oluşturulmuş Tarih';

$GLOBALS["lang"]['Creating'] = 'Oluşturmak';

$GLOBALS["lang"]['Creating Device'] = 'Cihaz oluşturmak';

$GLOBALS["lang"]['Creating a Query'] = 'Bir Sorgu oluşturmak';

$GLOBALS["lang"]['creator'] = 'Yaratıcı';

$GLOBALS["lang"]['Creator'] = 'Yaratıcı';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Müşteri ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials Aboneliği ID ID ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Özel TCP Ports';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Özel UDP Ports';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kıbrıs';

$GLOBALS["lang"]['Czech'] = 'Çek Çek Çek Çek';

$GLOBALS["lang"]['Czech Republic'] = 'Çek Cumhuriyeti Çek Cumhuriyeti';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Hesabı (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Veritabanı Veritabanı';

$GLOBALS["lang"]['db_action'] = 'Veritabanı';

$GLOBALS["lang"]['Database Action'] = 'Veritabanı';

$GLOBALS["lang"]['db_column'] = 'Veritabanı';

$GLOBALS["lang"]['Database Column'] = 'Veritabanı';

$GLOBALS["lang"]['Database Definition'] = 'Database Description';

$GLOBALS["lang"]['db_row'] = 'Veritabanı Row';

$GLOBALS["lang"]['Database Row'] = 'Veritabanı Row';

$GLOBALS["lang"]['Database Schema'] = 'Database Schema';

$GLOBALS["lang"]['db_table'] = 'Veritabanı';

$GLOBALS["lang"]['Database Table'] = 'Veritabanı';

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

$GLOBALS["lang"]['December'] = 'Aralık Aralık Aralık Aralık';

$GLOBALS["lang"]['Default'] = 'Tembel';

$GLOBALS["lang"]['Default Items'] = 'Temsil Maddeleri';

$GLOBALS["lang"]['Default Value'] = 'Varsayılan değer';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normalde Active Directory LDAPS için kullanılan 636.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Teminatın Belirlenmesi <code>3</code> LDAP ve Active Directory için.';

$GLOBALS["lang"]['Defaults'] = 'Temsiller';

$GLOBALS["lang"]['delay_minutes'] = 'Geç Dakikalar';

$GLOBALS["lang"]['Delay Minutes'] = 'Geç Dakikalar';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Delete Örnek Cihazları';

$GLOBALS["lang"]['delete_external_from_internal'] = 'İçten Dış';

$GLOBALS["lang"]['Delete External From Internal'] = 'İçten Dış';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS Open-AudIT\'de değilse cihazlar';

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

$GLOBALS["lang"]['details'] = 'Detaylar';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Genellikle bu sitede temasa geçen ayrıntıları.';

$GLOBALS["lang"]['device'] = 'Cihaz';

$GLOBALS["lang"]['Device'] = 'Cihaz';

$GLOBALS["lang"]['Device Audits'] = 'Cihaz Denetimleri';

$GLOBALS["lang"]['Device ID'] = 'Device ID';

$GLOBALS["lang"]['device_id'] = 'Device ID';

$GLOBALS["lang"]['device_id_a'] = 'Device ID A';

$GLOBALS["lang"]['Device ID A'] = 'Device ID A';

$GLOBALS["lang"]['device_id_b'] = 'Device ID B';

$GLOBALS["lang"]['Device ID B'] = 'Device ID B';

$GLOBALS["lang"]['Device Name'] = 'Device Name Adı';

$GLOBALS["lang"]['Device Result'] = 'Cihaz Sonuçları';

$GLOBALS["lang"]['Device Results'] = 'Cihaz Sonuçları';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Device Status';

$GLOBALS["lang"]['Device Types'] = 'Cihaz Türü';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Device is in the Subnet';

$GLOBALS["lang"]['Devices'] = 'Cihazlar';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Yere Hazırlanan cihazlar';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Yere Hazırlanan cihazlar';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Cihazlar Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Cihazlar Org';

$GLOBALS["lang"]['Devices Audited'] = 'Cihazlar Denetimli';

$GLOBALS["lang"]['Devices Created in '] = 'Oluşturulan cihazlar ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Bayilik Ekran Köşeleri';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Bayilik Ekran Köşeleri';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Cihazlar Son 7 Gün';

$GLOBALS["lang"]['Devices Found Today'] = 'Bugün bulunan cihazlar';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Cihazları Dün Buldu';

$GLOBALS["lang"]['Devices Not Audited'] = 'Cihazlar Denetim Değil';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Cihazlar Görmez 30 Gün';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Cihazları Görmüyor 7 Gün';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Cihazlar 90 Gün Görmez';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API aracılığıyla erişim';

$GLOBALS["lang"]['Devices Selected from '] = 'Kullanılan cihazlar ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudIT tarafından seçilen cihazlar';

$GLOBALS["lang"]['Devices Updated in '] = 'Güncellemeler içinde Güncellemeler ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Cihazlar kıyaslanıyor.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Cihazlar karşılaştırılmıyor.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Cihazlar kıyaslanabilir.';

$GLOBALS["lang"]['Devices in Running State'] = 'Run State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Stopped State Cihazları';

$GLOBALS["lang"]['Devices in this'] = 'Bu cihazlarda cihazlar';

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

$GLOBALS["lang"]['discoveries'] = 'Discoveries Discoveries';

$GLOBALS["lang"]['Discoveries'] = 'Discoveries Discoveries';

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

$GLOBALS["lang"]['disk'] = 'Disk Disk';

$GLOBALS["lang"]['Disk'] = 'Disk Disk';

$GLOBALS["lang"]['display_version'] = 'Ekran Versiyon';

$GLOBALS["lang"]['Display Version'] = 'Ekran Versiyon';

$GLOBALS["lang"]['Display in Menu'] = 'Menüde Ekran';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Bu TCP limanlarını taramayın.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Bu UDP limanlarını taramayın.';

$GLOBALS["lang"]['Do not show me again'] = 'Beni tekrar göstermiyor';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Güvenli taşıma (LDAPS) veya normal şifrelenmemiş LDAP kullanmak istiyorsunuz.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Soldaki standart sidebar görmek istiyorsunuz.';

$GLOBALS["lang"]['documentation'] = 'Dokümantasyon';

$GLOBALS["lang"]['Documentation'] = 'Dokümantasyon';

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

$GLOBALS["lang"]['Download a file from URL'] = 'URL\'den bir dosya indir';

$GLOBALS["lang"]['driver'] = 'Sürücü Sürücü';

$GLOBALS["lang"]['Driver'] = 'Sürücü Sürücü';

$GLOBALS["lang"]['duplex'] = 'Duplex Duplex Duplex Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex Duplex Duplex Duplex';

$GLOBALS["lang"]['duration'] = 'Süre süresi';

$GLOBALS["lang"]['Duration'] = 'Süre süresi';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

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

$GLOBALS["lang"]['English'] = 'İngilizce İngilizce İngilizce English';

$GLOBALS["lang"]['enterprise'] = 'Enterprise Enterprise Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise Enterprise Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'Entitlement Type';

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

$GLOBALS["lang"]['Established'] = 'kuruldu';

$GLOBALS["lang"]['Estonia'] = 'Estonya Estonya';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiyopya';

$GLOBALS["lang"]['Every'] = 'Her Her Her Şey Her Her Her Şey Her Her Her Şey Her Her Her Her Her Şey Her Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Şey Her Her Şey Her Her Her Şey Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Her Her Her Her Her Her Her Şey Her Şey Her Her Her Şey Her Şey Her Şey Her Her Şey Her Şey Her Her Her Her Her Her Şey Her Her Şey Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Şey Her Şey Her Şey Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her Her';

$GLOBALS["lang"]['Every Day'] = 'Her Gün';

$GLOBALS["lang"]['Exceptions'] = 'istisnalar hariç';

$GLOBALS["lang"]['exclude'] = 'Exclude';

$GLOBALS["lang"]['Exclude'] = 'Exclude';

$GLOBALS["lang"]['exclude_ip'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresses';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

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

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Dış Dış Dış Dış Dış Dış Dış';

$GLOBALS["lang"]['External Field Name'] = 'Dış Alan Adı';

$GLOBALS["lang"]['External Field Type'] = 'Dış Alan Türü';

$GLOBALS["lang"]['external_ident'] = 'Dış Ident';

$GLOBALS["lang"]['External Ident'] = 'Dış Ident';

$GLOBALS["lang"]['external_link'] = 'Dış Link';

$GLOBALS["lang"]['External Link'] = 'Dış Link';

$GLOBALS["lang"]['extra_columns'] = 'Ekstra Köşeler';

$GLOBALS["lang"]['Extra Columns'] = 'Ekstra Köşeler';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Adaları';

$GLOBALS["lang"]['File'] = 'Dosya';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'Dosya Girişi';

$GLOBALS["lang"]['file_name'] = 'Dosya Adı';

$GLOBALS["lang"]['File Name'] = 'Dosya Adı';

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

$GLOBALS["lang"]['Finland'] = 'Finlandiya Finlandiya';

$GLOBALS["lang"]['Firewall'] = 'Güvenlik Duvarı';

$GLOBALS["lang"]['firewall_rule'] = 'Güvenlik Kuralı';

$GLOBALS["lang"]['Firewall Rule'] = 'Güvenlik Kuralı';

$GLOBALS["lang"]['firmware'] = 'Şirketware';

$GLOBALS["lang"]['Firmware'] = 'Şirketware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmaware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmaware Revision';

$GLOBALS["lang"]['First Name'] = 'İlk Adı';

$GLOBALS["lang"]['first_run'] = 'İlk Run';

$GLOBALS["lang"]['First Run'] = 'İlk Run';

$GLOBALS["lang"]['first_seen'] = 'İlk Seen';

$GLOBALS["lang"]['First Seen'] = 'İlk Seen';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Sabit Sabit';

$GLOBALS["lang"]['Floor'] = 'Kat';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Aşağıdaki bağlantıların herhangi birini takip edin ve Open-AudIT\'ı nasıl kullanılacağını keşfedin <b>Ağınızda ne var?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Bir tohum keşfi için, sadece özel IP adresi alanında IP\'leri keşfetmeliyim.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Bir tohum keşfi için, sadece seçilmiş subnet\'te IP\'leri keşfetmeliyim.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Bir tohum keşfi için, keşif koşmadan önce subnet\'i kesmeliyim.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Bir ham SQL sorgusunun ileri girişi için. Queries olarak, dahil olmak zorundasınız <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Sürekli olmayan lisanslar için, lisans sona erdiğinde.';

$GLOBALS["lang"]['form_factor'] = 'Form Faktör';

$GLOBALS["lang"]['Form Factor'] = 'Form Faktör';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

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

$GLOBALS["lang"]['full_name'] = 'Full Name';

$GLOBALS["lang"]['Full Name'] = 'Full Name';

$GLOBALS["lang"]['function'] = 'Fonksiyonlar';

$GLOBALS["lang"]['Function'] = 'Fonksiyonlar';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Genrated Tarafından';

$GLOBALS["lang"]['geo'] = 'Geo Geo Geo Geo';

$GLOBALS["lang"]['Geo'] = 'Geo Geo Geo Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgia Georgia';

$GLOBALS["lang"]['German'] = 'Alman Alman Alman';

$GLOBALS["lang"]['Germany'] = 'Almanya Almanya Almanya Almanya';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat /Long';

$GLOBALS["lang"]['Get Started'] = 'Başlayın';

$GLOBALS["lang"]['Get a Free License'] = 'Ücretsiz bir lisans alın';

$GLOBALS["lang"]['Getting Started'] = 'Başlanmaya başladı';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Seçenekleri';

$GLOBALS["lang"]['Go'] = 'Go Go Go Go';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['Greater Than'] = 'Greater Than Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Greater Than veya Equals';

$GLOBALS["lang"]['Greece'] = 'Yunanistan Yunanistan';

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

$GLOBALS["lang"]['hardware_revision'] = 'Donanım Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Donanım Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Bu politika bu organizasyonda uygulandı.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Head Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island ve McDonald Adaları';

$GLOBALS["lang"]['height'] = 'Yükseklik';

$GLOBALS["lang"]['Height'] = 'Yükseklik';

$GLOBALS["lang"]['Height in RU'] = 'RU\'de Yükseklik';

$GLOBALS["lang"]['Help'] = 'Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım Yardım';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Yardım ve Sık Sorulan Sorular';

$GLOBALS["lang"]['high'] = 'Yüksek yüksek yüksek';

$GLOBALS["lang"]['High'] = 'Yüksek yüksek yüksek';

$GLOBALS["lang"]['High Availability'] = 'Yüksek Erişilebilirlik';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Kutsal Görme (Vatik Şehir Devleti)';

$GLOBALS["lang"]['Home'] = 'Home Home Home Home';

$GLOBALS["lang"]['home'] = 'Home Home Home Home';

$GLOBALS["lang"]['Home Area Network'] = 'Ev Alan Ağı';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host Host Host';

$GLOBALS["lang"]['Host'] = 'Host Host Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Saat Saat Saat';

$GLOBALS["lang"]['Hour'] = 'Saat Saat Saat';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Nasıl ve Neden Açık-AudIT Daha Güvenli';

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

$GLOBALS["lang"]['Hungary'] = 'Macaristan Macaristan';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'EULA\'yı okudum.';

$GLOBALS["lang"]['id'] = 'ID ID ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP IP IP IP';

$GLOBALS["lang"]['ip'] = 'IP IP IP IP';

$GLOBALS["lang"]['IP Address'] = 'IP Adresi';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set Tarafından';

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

$GLOBALS["lang"]['If'] = 'If if if if if if if if if if if if if if if if if if if if if if if if if';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Bir liman filtrelenen ile yanıt verirse, mevcut olduğunu düşünmeliyiz.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Bir liman açık filtre ile yanıt verirse, mevcut olduğunu düşünmeliyiz.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Uzak bir cihaz Open-AudIT seçilmiş cihazlarda mevcut değilse, dış sistemden silmeliyiz.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Open-AudIT cihazı değiştirildiyse, dış sistemi güncellemeliyiz.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Open-AudIT cihazı dış sistemde değilse, bunu yaratmalıyız.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Bir ajan birincil IP\'sini bu subnet\'te rapor ederse, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Eğer bunlardan herhangi biri (ortalama, hiçbir yer) liman tespit edilirse, SSH\'nin onları çalıştırdığını ve denetim için kullanıldığını varsayın. Bu limanı Özel TCP limanlarına eklemeye gerek yok - otomatik olarak eklenecektir.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Eğer set, belirli bir cihaz sütunlarının JSON serisine sahipseniz, bu kullanıcı yapılandırma varsayılan olarak diğerini görmeyi seçti.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ajan OS ailesi (daha duyarlı) bu dizeyi içeriyorsa, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Aşağıdaki koşullar karşılanırsa:<br/><ul><li>Bir Rol atanmış bir ad_grup vardır</li><li>Bir Org atanmış bir ad_group</li><li>Bir LDAP Server, yroles set to y y</li><li>Bir kullanıcı LDAP\'da var (aktif Rehber veya OpenLDAP) ve atanmış ad_gruplarda.</li></ul>Bu kullanıcı, Open-AudIT\'in oluşturulması gereken bir hesap olmadan Open-AudIT\'ye giriş yapabilir. Open-AudIT, LDAP\'ı sorgulayacak ve eğer kullanıcı gerekli gruplardaysa, Open-AudIT\'de değil, kullanıcı özellikleri (isim, tam adı, e-posta, roller, orgs, vs) Open-AudIT içinde otomatik olarak yaşayacak ve giriş yapacaklar.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Kullanıcı Open-AudIT\'ye giriş yapmak LDAP\'ı aramak için erişime sahip değilse, bu erişimi olan başka bir hesabı kullanabilirsiniz.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Bu çok veya daha fazla dakika, cihaz sunucuyla temasa geçtiyse, eylemleri gerçekleştirir.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Bir koleksiyoncuyu seçerseniz, bir sonraki 5 dakikalık sınırda uygulamak planlanıyor.';

$GLOBALS["lang"]['ifadminstatus'] = 'Eğeradminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Eğeradminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

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

$GLOBALS["lang"]['implementation_notes'] = 'Uygulama Notları';

$GLOBALS["lang"]['Implementation Notes'] = 'Uygulama Notları';

$GLOBALS["lang"]['Import'] = 'İthalat';

$GLOBALS["lang"]['Import Example Data'] = 'İthalat Örnek Data';

$GLOBALS["lang"]['improvement_opportunities'] = 'İyileştirme Fırsatları';

$GLOBALS["lang"]['Improvement Opportunities'] = 'İyileştirme Fırsatları';

$GLOBALS["lang"]['In'] = 'In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In In';

$GLOBALS["lang"]['Inactive'] = 'Inaktif';

$GLOBALS["lang"]['Include'] = 'Add Add Add Add Add Add Add Add';

$GLOBALS["lang"]['Incomplete'] = 'Tamamlandığında';

$GLOBALS["lang"]['Index'] = 'Index Index Index Index';

$GLOBALS["lang"]['India'] = 'Hindistan Hindistan';

$GLOBALS["lang"]['Indonesia'] = 'Endonezya';

$GLOBALS["lang"]['Info'] = 'Info Info';

$GLOBALS["lang"]['Informational'] = 'Bilgi';

$GLOBALS["lang"]['initial_size'] = 'İlk Boyut';

$GLOBALS["lang"]['Initial Size'] = 'İlk Boyut';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Giriş Türü';

$GLOBALS["lang"]['inputs'] = 'Girişler';

$GLOBALS["lang"]['Inputs'] = 'Girişler';

$GLOBALS["lang"]['Insane'] = 'Insan';

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

$GLOBALS["lang"]['installed_by'] = 'Tarafından';

$GLOBALS["lang"]['Installed By'] = 'Tarafından';

$GLOBALS["lang"]['installed_on'] = 'Yüklemek için';

$GLOBALS["lang"]['Installed On'] = 'Yüklemek için';

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

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Type';

$GLOBALS["lang"]['Interface Type'] = 'Interface Type';

$GLOBALS["lang"]['Internal'] = 'İç İç İç İç';

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

$GLOBALS["lang"]['Italy'] = 'İtalya İtalya İtalya';

$GLOBALS["lang"]['Items not in Baseline'] = 'Basel\'de olmayan öğeler';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON için';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika Jamaika';

$GLOBALS["lang"]['January'] = 'Ocak Ocak Ocak Ocak';

$GLOBALS["lang"]['Japan'] = 'Japonya Japonya Japonya';

$GLOBALS["lang"]['Jersey'] = 'Jersey Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan Jordan';

$GLOBALS["lang"]['July'] = 'Temmuz Temmuz Temmuz Temmuz';

$GLOBALS["lang"]['June'] = 'Haziran Haziran Haziran Haziran';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakistan Kazakistan Kazakistan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Analog Version';

$GLOBALS["lang"]['Kernel Version'] = 'Analog Version';

$GLOBALS["lang"]['Key'] = 'Anahtar Anahtar Anahtar Anahtar';

$GLOBALS["lang"]['Key Password (optional)'] = 'Anahtar Şifre (bağlayıcı)';

$GLOBALS["lang"]['keys'] = 'Anahtarlar';

$GLOBALS["lang"]['Keys'] = 'Anahtarlar';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Kore Kore';

$GLOBALS["lang"]['Kuwait'] = 'Kuveyt';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kırgız Cumhuriyeti';

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

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'hayali';

$GLOBALS["lang"]['Latitude'] = 'hayali';

$GLOBALS["lang"]['Latvia'] = 'Letonya Letonya Letonya';

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

$GLOBALS["lang"]['level'] = 'Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Düzey';

$GLOBALS["lang"]['Level'] = 'Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Seviye Düzey';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Kullanılması gereken ayrıcalıkların seviyesi (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberya';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libya Arap Jamahiriya';

$GLOBALS["lang"]['License'] = 'Lisans Lisans Lisans Lisans Lisans Lisans Lisans';

$GLOBALS["lang"]['License Key'] = 'Lisans Anahtar';

$GLOBALS["lang"]['License Required'] = 'Lisans Gerekli';

$GLOBALS["lang"]['licenses'] = 'Lisanslar';

$GLOBALS["lang"]['Licenses'] = 'Lisanslar';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like';

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

$GLOBALS["lang"]['List'] = 'Liste Listesi';

$GLOBALS["lang"]['list_table_format'] = 'Masa Biçimi';

$GLOBALS["lang"]['List Table Format'] = 'Masa Biçimi';

$GLOBALS["lang"]['Lithuania'] = 'Litvanya';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Yerel Yerel Yerel Yerel Yerel';

$GLOBALS["lang"]['Local Area Network'] = 'Yerel Alan Ağı';

$GLOBALS["lang"]['local_port'] = 'Local Port';

$GLOBALS["lang"]['Local Port'] = 'Local Port';

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

$GLOBALS["lang"]['locations'] = 'Konumlar';

$GLOBALS["lang"]['Locations'] = 'Konumlar';

$GLOBALS["lang"]['Locations in this'] = 'Konums in this';

$GLOBALS["lang"]['log'] = 'Log Log Log';

$GLOBALS["lang"]['Log'] = 'Log Log Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Log Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Log Rotation';

$GLOBALS["lang"]['log_status'] = 'Log Status';

$GLOBALS["lang"]['Log Status'] = 'Log Status';

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

$GLOBALS["lang"]['Luxembourg'] = 'Lüksemburg Lüksemburg Lüksemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC Adres';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Üretici yapımcı';

$GLOBALS["lang"]['mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Adres';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonya Makedonya';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Bakım Açıklamaları';

$GLOBALS["lang"]['Maintenance Expires'] = 'Bakım Açıklamaları';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'My Default Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Bunu bir koleksiyon oluşturun';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malezya Malezya Malezya Malezya';

$GLOBALS["lang"]['Maldives'] = 'Maldivler';

$GLOBALS["lang"]['Mali'] = 'Mali Mali Mali';

$GLOBALS["lang"]['Malta'] = 'Malta Malta Malta Malta';

$GLOBALS["lang"]['Manage'] = 'Yönetim Yönetimi Yönetimi Yönetimi';

$GLOBALS["lang"]['Manage Licenses'] = 'Lisansları Yönetin';

$GLOBALS["lang"]['Manage in NMIS'] = 'NMIS\'da Yönetin';

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

$GLOBALS["lang"]['match_string'] = 'Maç';

$GLOBALS["lang"]['Match String'] = 'Maç';

$GLOBALS["lang"]['Matching Attribute'] = 'Attribute';

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

$GLOBALS["lang"]['Mexico'] = 'Meksika Meksika';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute Minute';

$GLOBALS["lang"]['Minute'] = 'Minute Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Son Denetim Büyük olduğundan Dakikalar';

$GLOBALS["lang"]['model'] = 'Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model';

$GLOBALS["lang"]['Model'] = 'Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model Model';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

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

$GLOBALS["lang"]['Montenegro'] = 'Montenegro Montenegro';

$GLOBALS["lang"]['month'] = 'Ay Ay';

$GLOBALS["lang"]['Month'] = 'Ay Ay';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Fas Fas Fas';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Ping\'e yanıt vermeli';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOT - Aşağıdaki yapılandırma eşyasını ayarlayarak aşağıdaki metin bilgilerini önleyebilirsiniz <code>decrypt_credentials</code> tom için <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name Name Name Name Name Name';

$GLOBALS["lang"]['Name'] = 'Name Name Name Name Name Name';

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

$GLOBALS["lang"]['Network'] = 'Ağ Ağı Ağı';

$GLOBALS["lang"]['network_address'] = 'Ağ Adres';

$GLOBALS["lang"]['Network Address'] = 'Ağ Adres';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'Ağ türleri';

$GLOBALS["lang"]['networks'] = 'Ağlar';

$GLOBALS["lang"]['Networks'] = 'Ağlar';

$GLOBALS["lang"]['Networks Generated By'] = 'Ağlar Genrated Tarafından';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Ağlar bir CIDR Maskesi kullanarak';

$GLOBALS["lang"]['New Building Name'] = 'Yeni Yapı Adı';

$GLOBALS["lang"]['New Caledonia'] = 'Yeni Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'New Floor Name';

$GLOBALS["lang"]['New Room Name'] = 'New Room Name';

$GLOBALS["lang"]['New Row Name'] = 'New Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Yeni Zelanda';

$GLOBALS["lang"]['News'] = 'Haberler';

$GLOBALS["lang"]['next_hop'] = 'Sonraki Hop';

$GLOBALS["lang"]['Next Hop'] = 'Sonraki Hop';

$GLOBALS["lang"]['next_run'] = 'Sonraki Run';

$GLOBALS["lang"]['Next Run'] = 'Sonraki Run';

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

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Hiçbir şey yok';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal Normal Normal Normal Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Kuzey Mariana Adaları';

$GLOBALS["lang"]['Norway'] = 'Norveç Norveç Norveç';

$GLOBALS["lang"]['Not Applicable'] = 'Geçerli değil';

$GLOBALS["lang"]['Not Checked'] = 'Checked';

$GLOBALS["lang"]['Not Equals'] = 'Eşit değil';

$GLOBALS["lang"]['Not In'] = 'Değil';

$GLOBALS["lang"]['Not Like'] = 'Like Not Like Not Like';

$GLOBALS["lang"]['Not Set'] = 'Set Değil';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normalde kullanılmaz. Eğer set halinde, bu, yanıt olarak kabul edilmek için açık bir limana sahip olmak için cihazı gerektirir. Bir MAC adresi, arp yanıt veya ping yanıtı cevap olarak kabul edilmesi yeterli değildir. Open-AudIT sunucusu arasındaki bir yönlendirici veya güvenlik duvarı ve hedef IP IP, IP adına port taramalarına yanıt veriyor.';

$GLOBALS["lang"]['Note'] = 'Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not NotNote';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Not - Bir ebeveyn seçmek otomatik olarak çocuklarına erişimi sağlayacaktır (burada gösterilmemesine rağmen).';

$GLOBALS["lang"]['Notes'] = 'Notlar Notlar Notlar Not Notlar Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Notlar';

$GLOBALS["lang"]['notes'] = 'Notlar Notlar Notlar Not Notlar Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Not Notlar';

$GLOBALS["lang"]['Notice'] = 'Duyuru';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Kasım Kasım Kasım Kasım';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS OS OS';

$GLOBALS["lang"]['OS Families'] = 'OS Family';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['October'] = 'Ekim Ekim Ekim Ekim';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Onda';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of One Of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> veya <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Kampüs Alan Ağı, Bulut Ağı, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Kablosuz Yerel Alan Ağı.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Bir Geliştirme, Afet Kurtarma, Değerlendirme, Pre-Production, Production, Test, Eğitim, Kullanıcı Kabul Testi';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'tahsis edilenlerden biri, delege, planlama, rezerve edilemez, bilinmeyen, yönetilmemiş. Ayrılmak için sıralayıcılar.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Biri ya da <code>active directory</code> veya <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Bir tanesi: antivirüs, yedekleme, güvenlik duvarı, onaylanmış, yasaklanmış veya başka.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Dokümantasyon';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT Community';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Büyük ağlar için yüksek ölçekli esnek keşif ve denetim çözümü. Profesyonel artının tüm özellikleri: Baselines, File Denetim, Cloud Discovery, Raf Management, Configurable Rol Tabanlı Erişim Kontrolü Active Directory ve LDAP dahil.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Field Name';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Lisansları';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Seçenekleri';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Profesyonel';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Dünya';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT ve Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap kaldırıldı';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Kullanıcı Üyelik Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Kullanıcı Üyelik Attribute';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'İşletim Sistemi';

$GLOBALS["lang"]['Operating System Family Contains'] = 'İşletim Sistemi Ailesi Contains';

$GLOBALS["lang"]['Operating Systems'] = 'İşletim Sistemleri';

$GLOBALS["lang"]['optical'] = 'Optik Optik Optik Optik Optik Optik';

$GLOBALS["lang"]['Optical'] = 'Optik Optik Optik Optik Optik Optik';

$GLOBALS["lang"]['Optimized'] = 'Optimized';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudIT tarafından denetim edildiği gibi Seçmeli sürüm. Yüzde işareti vahşi bir kart olarak kullanın.';

$GLOBALS["lang"]['options'] = 'Seçenekleri';

$GLOBALS["lang"]['Options'] = 'Seçenekleri';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Veya aşağıdaki alanlardan seçin.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Veya';

$GLOBALS["lang"]['Org ID'] = 'Veya';

$GLOBALS["lang"]['Organisation'] = 'Organizasyon Organizasyon';

$GLOBALS["lang"]['organisation'] = 'Organizasyon Organizasyon';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizasyon Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organizasyonlar';

$GLOBALS["lang"]['orgs'] = 'Veya';

$GLOBALS["lang"]['Orgs'] = 'Veya';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

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

$GLOBALS["lang"]['Others'] = 'Diğerleri';

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

$GLOBALS["lang"]['PHP'] = 'PHP PHP PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Paket Paketi';

$GLOBALS["lang"]['packages'] = 'Paketler Paketler';

$GLOBALS["lang"]['Packages'] = 'Paketler Paketler';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan Pakistan Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Filistinli Bölge';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Yeni Gine';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

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

$GLOBALS["lang"]['permission'] = 'İzin';

$GLOBALS["lang"]['Permission'] = 'İzin';

$GLOBALS["lang"]['permissions'] = 'İzinler';

$GLOBALS["lang"]['Permissions'] = 'İzinler';

$GLOBALS["lang"]['Personal Area Network'] = 'Kişisel Alan Ağı';

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

$GLOBALS["lang"]['ping'] = 'Ping Ping';

$GLOBALS["lang"]['Ping'] = 'Ping Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Adaları';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Lütfen Open-AudIT yönetici logon var ve veritabanını yükseltin.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Lütfen seçim kutusunun metin girişi kutusunu genişleteceğini unutmayın.';

$GLOBALS["lang"]['Please set using'] = 'Lütfen kullanarak';

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

$GLOBALS["lang"]['Polite'] = 'Polite';

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

$GLOBALS["lang"]['position'] = 'Pozisyon pozisyonu';

$GLOBALS["lang"]['Position'] = 'Pozisyon pozisyonu';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Güç Devresi';

$GLOBALS["lang"]['Power Circuit'] = 'Güç Devresi';

$GLOBALS["lang"]['power_sockets'] = 'Power Uses';

$GLOBALS["lang"]['Power Sockets'] = 'Power Uses';

$GLOBALS["lang"]['Predictable'] = 'Tahmin edilebilir';

$GLOBALS["lang"]['Preferences'] = 'Tercihler';

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

$GLOBALS["lang"]['profile'] = 'Profil Profili';

$GLOBALS["lang"]['Profile'] = 'Profil Profili';

$GLOBALS["lang"]['program'] = 'Program Programı';

$GLOBALS["lang"]['Program'] = 'Program Programı';

$GLOBALS["lang"]['protocol'] = 'Protokol Protokolü';

$GLOBALS["lang"]['Protocol'] = 'Protokol Protokolü';

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

$GLOBALS["lang"]['Query'] = 'Sorgu Sorgulama';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Materials';

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

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Emekli URI';

$GLOBALS["lang"]['redirect_uri'] = 'Emekli Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Emekli Uri';

$GLOBALS["lang"]['references'] = 'Referanslar Referanslar';

$GLOBALS["lang"]['References'] = 'Referanslar Referanslar';

$GLOBALS["lang"]['region'] = 'Bölge Bölgesi';

$GLOBALS["lang"]['Region'] = 'Bölge Bölgesi';

$GLOBALS["lang"]['registered_user'] = 'Registered User';

$GLOBALS["lang"]['Registered User'] = 'Registered User';

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

$GLOBALS["lang"]['Report'] = 'Rapor';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Cihazlarınızda rapor, ağlar ve daha fazlası';

$GLOBALS["lang"]['reportable'] = 'Raporlanabilir';

$GLOBALS["lang"]['Reportable'] = 'Raporlanabilir';

$GLOBALS["lang"]['Reports'] = 'Raporlar';

$GLOBALS["lang"]['request'] = 'Talep İste';

$GLOBALS["lang"]['Request'] = 'Talep İste';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Özel bir istek CVE';

$GLOBALS["lang"]['requested'] = 'İstekli';

$GLOBALS["lang"]['Requested'] = 'İstekli';

$GLOBALS["lang"]['require_port'] = 'Port';

$GLOBALS["lang"]['Require Port'] = 'Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Bir Open Port';

$GLOBALS["lang"]['Required'] = 'Gerekli Gerekli Gerekli Gerekli Gerekli';

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

$GLOBALS["lang"]['Results'] = 'Sonuçlar Sonuçlar Sonuçlar Sonuçlar';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Erişim tarihi: Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Erişim tarihi: Ident';

$GLOBALS["lang"]['retrieved_name'] = 'WEB';

$GLOBALS["lang"]['Retrieved Name'] = 'WEB';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Cihazdan yararlanın - Windows:Win32_Computer SystemÜrün, Linux:dmidecode, MacOS:system_ profilr, ESXi:vim-cmd hostvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Değerlendirme Sonuçları';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Değerlendirme Sonuçları';

$GLOBALS["lang"]['role'] = 'Rol Rolü';

$GLOBALS["lang"]['Role'] = 'Rol Rolü';

$GLOBALS["lang"]['roles'] = 'Roller';

$GLOBALS["lang"]['Roles'] = 'Roller';

$GLOBALS["lang"]['Romania'] = 'Romanya Romanya Romanya';

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

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Cihazların Üzerinde Discovery';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Bir keşif yapın ve öğrenin <b>Ağınızda ne var?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Bu Komutayı Run';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache Service Under Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Varsayılan olarak Kaydet';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Scan Seçenekleri';

$GLOBALS["lang"]['Scan Options'] = 'Scan Seçenekleri';

$GLOBALS["lang"]['Scan Options ID'] = 'Tarama Seçenekleri ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Nmap\'u en üst düzey TCP portlarını tara.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Nmap\'u UDP limanlarının en üst sayısını tarayın.';

$GLOBALS["lang"]['schedule'] = 'Schedule Schedule Schedule';

$GLOBALS["lang"]['Schedule'] = 'Schedule Schedule Schedule';

$GLOBALS["lang"]['scope'] = 'Kapsam';

$GLOBALS["lang"]['Scope'] = 'Kapsam';

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

$GLOBALS["lang"]['Search for Device'] = 'Device for Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'DataTables kullanarak arama';

$GLOBALS["lang"]['secondary'] = 'Orta orta orta';

$GLOBALS["lang"]['Secondary'] = 'Orta orta orta';

$GLOBALS["lang"]['Secondary Text'] = 'ikincil Text';

$GLOBALS["lang"]['section'] = 'Bölüm Bölüm Bölüm';

$GLOBALS["lang"]['Section'] = 'Bölüm Bölüm Bölüm';

$GLOBALS["lang"]['secure'] = 'Güvenli Güvenli Güvenli Güvenli Güvenli';

$GLOBALS["lang"]['Secure'] = 'Güvenli Güvenli Güvenli Güvenli Güvenli';

$GLOBALS["lang"]['Security Name'] = 'Güvenlik Adı';

$GLOBALS["lang"]['Security Status'] = 'Güvenlik Durumu';

$GLOBALS["lang"]['security_zone'] = 'Güvenlik Bölgesi';

$GLOBALS["lang"]['Security Zone'] = 'Güvenlik Bölgesi';

$GLOBALS["lang"]['seed_ip'] = 'Tohum IP';

$GLOBALS["lang"]['Seed IP'] = 'Tohum IP';

$GLOBALS["lang"]['seed_ping'] = 'Tohum Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Tohum Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Tohum Özelliği';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Tohum Özelliği';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Tohum Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Tohum Subnet';

$GLOBALS["lang"]['Select'] = 'Select Select Select';

$GLOBALS["lang"]['Select All'] = 'All Select All';

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

$GLOBALS["lang"]['Select a Table'] = 'Bir tablo seçin';

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

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set Set Set Set';

$GLOBALS["lang"]['set_by'] = 'Set Tarafından Set';

$GLOBALS["lang"]['Set By'] = 'Set Tarafından Set';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Listedeki tabloların boyutunu (normal veya kompakt) ayarlayın.';

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

$GLOBALS["lang"]['short'] = 'Kısa Kısa Kısa Kısa';

$GLOBALS["lang"]['Short'] = 'Kısa Kısa Kısa Kısa';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Bu cihazdan mevcut olmayan tüm verileri kaldırmalıyım?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Bu dosya (veya desen) bildirilen dosyaları dışlamak için kullanılmalıdır. Normalde, dosyaları denetlemek için, bu ayarlanıyor <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Bu satıcı, FirstWave\'den gelen güvenlikleri geri alırken kullanılmalıdır.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Uzak servisten cihazlar eklemeliyiz, yerel olarak.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Bu lisansı seçilmiş Org\'a ve Orgs çocukları için de uygulamalıyız?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Açık bir liman olmak için filtrelenmiş bir liman düşünmeliyiz - ve bu nedenle bu IP\'yi bağlı bir cihaz olarak mı bayrağız?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Açık bir port olarak açık bir port dikkate almalı mıyız - ve bu nedenle bu IP\'yi bağlı bir cihaz olarak mı bayrağın?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Bu grubu web arayüzünde açığa çıkarmalıyız.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Bu sorguyu web arayüzünde rapor menüsü altındaki raporlar listesinde açığa çıkarmalıyız.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Bu soruyu web arayüzündeki Raporlar menüsü altındaki raporlar listesinde açığa çıkarmalıyız.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Bir denetim yürütüp (y/n) göndermeliyiz.';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'UDP port 161 kullanarak SNMP için test etmeliyiz.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'SSH için TCP port 22 kullanarak test etmeliyiz.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'TCP port 135 kullanarak WMI için test etmeliyiz.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ajanı kaldırmamalıyız (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Bu yöntemi kullanıcı kimliklerini doğrulamak için kullanmalıdır. Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to <code>y</code> veya <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Bu yöntemi bir kullanıcı rollerini populate etmek için kullanmalıyız. Alan <code>use_auth</code> ayarlanmalıdır <code>y</code> Bunu kullanmak için. Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to Set to <code>y</code> veya <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakya (Slovak Cumhuriyeti)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenya';

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

$GLOBALS["lang"]['socket'] = 'Use';

$GLOBALS["lang"]['Socket'] = 'Use';

$GLOBALS["lang"]['software'] = 'Yazılım';

$GLOBALS["lang"]['Software'] = 'Yazılım';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Found Last 7 Days';

$GLOBALS["lang"]['Software Found Today'] = 'Software Found Today Today';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software Found Dün';

$GLOBALS["lang"]['software_key'] = 'Software Keyif';

$GLOBALS["lang"]['Software Key'] = 'Software Keyif';

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

$GLOBALS["lang"]['started_date'] = 'Tarih başladı';

$GLOBALS["lang"]['Started Date'] = 'Tarih başladı';

$GLOBALS["lang"]['state'] = 'Devlet Devleti';

$GLOBALS["lang"]['State'] = 'Devlet Devleti';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Durum durumu';

$GLOBALS["lang"]['Status'] = 'Durum durumu';

$GLOBALS["lang"]['Storage'] = 'Depolama';

$GLOBALS["lang"]['storage_count'] = 'Storage Count';

$GLOBALS["lang"]['Storage Count'] = 'Storage Count';

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

$GLOBALS["lang"]['Submitted From'] = 'Yemin ederim';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

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

$GLOBALS["lang"]['Summary'] = 'Özet Özet Özet Özet';

$GLOBALS["lang"]['Sunday'] = 'Pazar Pazar Pazar Pazar Pazar';

$GLOBALS["lang"]['supplier'] = 'Tedarikçi';

$GLOBALS["lang"]['Supplier'] = 'Tedarikçi';

$GLOBALS["lang"]['Support'] = 'Destek Desteği Destek Desteği Destek Desteği Destek Desteği Destek Desteği Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek Destek';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Desteklenen türler <code>subnet</code>, <code>seed</code> ve <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Adaları';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'İsveç İsveç İsveç İsveç';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Device ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Device ID';

$GLOBALS["lang"]['switch_port'] = 'Switch Port';

$GLOBALS["lang"]['Switch Port'] = 'Switch Port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'İsviçre, İsviçre Konfederasyonu';

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

$GLOBALS["lang"]['table'] = 'Masa';

$GLOBALS["lang"]['Table'] = 'Masa';

$GLOBALS["lang"]['tag'] = 'Tag Tag';

$GLOBALS["lang"]['Tag'] = 'Tag Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Etiketler Etiketler';

$GLOBALS["lang"]['Tags'] = 'Etiketler Etiketler';

$GLOBALS["lang"]['Tags :: '] = 'Etiketler :: ';

$GLOBALS["lang"]['Taiwan'] = 'Tayvan Tayvan';

$GLOBALS["lang"]['Tajikistan'] = 'Tacikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanya';

$GLOBALS["lang"]['task'] = 'Görev Görevi';

$GLOBALS["lang"]['Task'] = 'Görev Görevi';

$GLOBALS["lang"]['tasks'] = 'Görevler Görevler';

$GLOBALS["lang"]['Tasks'] = 'Görevler Görevler';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['test_minutes'] = 'Test Dakikaları Test';

$GLOBALS["lang"]['Test Minutes'] = 'Test Dakikaları Test';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Testler Testler';

$GLOBALS["lang"]['Tests'] = 'Testler Testler';

$GLOBALS["lang"]['Text'] = 'Text Text Text';

$GLOBALS["lang"]['Thailand'] = 'Tayland';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory alanı, subnets listesini almak için.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory sunucusu, subnets listesini almak için.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable metrik, soruya cevabı yakalar <strong>Birden fazla hedefteki bu kırılganlık için saldırgan bir sömürü olayları olabilir mi?</strong> öldürme zincirinin 1-4 adımlarına dayanarak. Bu adımlar reconnaissance, silahlanma, teslimat ve sömürüdür (Tined, Hayır, Evet).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE tanımlayıcı.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Bulut bu öğeye sahip. Bağlantılar için bağlantılar <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP veya Telco bu bağlantıyı sağlar.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Mitre\'den JSON kaydı.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'NVD yeminden JSON kaydı.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU bu kullanıcının (eğer LDAP kullanılırsa).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Bu ağı içeren yer. Bağlantılar için bağlantılar <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD temel statüsü tayin etti.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap zamanlama preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS bu pakete karşı raporlanmalıdır. Her şey için Blank. Yüzde işareti vahşi bir kart olarak kullanın. Os_group, os_aile ve os_name\'ye karşı test edilecektir.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open-AudIT, bağlantılı bulutun açık kaydı. Bağlantılar için bağlantılar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud IT server kodu bu dosya içinde ortaya çıktı.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud IT server kodu bu işlevin içinde ortaya çıktı.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Bu öğeye sahip olan Organizasyon. Bağlantılar için bağlantılar <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'İşbirlikçi keşiften sorumlu olan Süreç.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Bu cihazın üst kısmındaki RU poziton.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP topluluğu dizesi.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Kimlik Sınırı';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Kimlik Doğrulama Protokolü.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Gizlilik Protokolü.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 Güvenlik Düzeyi.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 Güvenlik Adı.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Dış sistemin URL\'si.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Open-AudIT URL\'niz Server bu koleksiyoncunun rapor edeceğine göre (görüntü kesme)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL denetim senaryoları sonucu sunmalıdır.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Bu kullanıcının gerçek tam adı.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'İlgili temel line. Bağlantılar için bağlantılar <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'İlgili keşif (eğer gerekliyse). Bağlantılar için bağlantılar <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Test etme özelliği (ondan) <code>devices</code> Masa).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Test etme özelliği (aşağıdan dış bir alan adı eşleştirmek).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Özelleştirmelerinizi temellemek için denetim senaryosu.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Kullanıcılar için aramanın temel yolu.';

$GLOBALS["lang"]['The benchmark type.'] = 'Karşılaştırma türü.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Raf inşa etmek içeridedir.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Hesaplanan cihazların sayısı dış olarak oluşturulacak.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Açık-AudIT\'de oluşturulacak hesaplanan cihazların sayısı.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'koleksiyoncular bir keşif yaparken kullanılan iç IP.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Yabancı masadan sütun adı. Bir tane olmalıdır: sınıf, çevre, statü, tip veya menü_category.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komut, keşif sırasında yürütülen hedef cihaz veya Open-AudIT server kodu üzerine idam edildi.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Kümenizin konfigürasyonu olabilir: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> veya boş.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Şifre bildirimleri. Bilgi bir SSH Key ise, anahtarı kilidini açmak için kullanılan şifredir ve isteğe bağlıdır.';

$GLOBALS["lang"]['The credentials username.'] = 'Bilgi adı.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Bulut Keşif\'in mevcut durumu.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Keşifin mevcut durumu.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Bu kullanıcı için varsayılan olarak gösterilecektir. Bağlantılar için bağlantılar <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Veritabanı versiyonu ve web versiyonu çelişkilidir.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Lisans sona erme tarihi.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Yazılım üretici tarafından durduruluyor. Genellikle yeni bir sürüm tarafından değiştirildi. Bakım hala mevcut olabilir.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Yazılım artık güncellemeler almaz ve tamamen durdurulur. Bakım kesildi.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Bu öğe değişti veya eklendi (yalnızca hazır). NOT - Bu sunucudan zamanlayıcıdır.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Bu sonucun yaratıldığı tarih/zaman.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Bu görevin uygulanması gereken ayın günü (* her gün).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Bu görevin ne zaman uygulanması gerektiği haftanın günü (* her gün).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Varsayılan dil bu yöntem tarafından yaratılan herhangi bir kullanıcıya tayin edildi.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Cihazın online olarak kabul edilmeden önce Nmap ping\'e yanıt vermesi gerekir.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Open-AudIT içindeki cihaz. Bağlantılar için bağlantılar <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Senaryo için doğrudan bağlantı,';

$GLOBALS["lang"]['The email address of the reciever'] = 'Reciever\'in e-posta adresi';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'İlkWave\'den gelen kurumsal ikili bir lisans için gereklidir. Lütfen Open-AudIT\'ı indirin';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Tüm ilişkili temel bu sonucun hepsinden biridir.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Dış olarak referans edilen yer ID. Genellikle Bulut denetimleri tarafından doldurulur.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT bu cihazın ayrıntılarını ilk kez aldı.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Zemin, rafın üzerindedir.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Yabancı masa referans için. Bir tane olmalıdır: cihazlar, konumlar veya sorgular.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Çıktı için kullanılan format e-postal.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Hangi grup tarafından gruplandırılacak tam nitelikli sütun. NOT: Tür = trafik, bu kırmızı sorguyu temsil eder.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Tam nitelikli masa.column. Birden çok kişi bir komün (no uzaylar) tarafından ayırt edilebilir.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Bu kırılganlığı test etmek için üretilen SQL sorgusu. Bu alan, sorguyu gerekli olarak düzeltmek için düzenlenebilir.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Temelin karşı çalıştığı cihazlar grubu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'entegrasyon için bir cihaz listesi sağlayan grup. Bağlantılar için bağlantılar <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Bu görevin uygulanması gereken günün saati (* her saat için).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Bağlantılı cihazın boşu. Bağlantılar için bağlantılar <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Veritabanında (sadece okuyun) tanımlayıcı sütunu (sadece okuyun).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Bu temelin önemi ( henüz kullanılmamıştır).';

$GLOBALS["lang"]['The integer of severity.'] = 'şiddetin tam tersi.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth yönteminin ip adresi.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Web arayüzünü kullanıcı için tercüme etmek için dil.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Son tarih ve zaman bu öğe idam edildi (yalnızca hazır).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Open-AudIT\'in bu cihazın ayrıntılarını alması son kez.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Son kez bu karşılaştırmalar idam edildi.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Son kez bu entegrasyon yapıldı.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'En yüksek fiziksel ağırlık (in KGs) bu raf tutabilir.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Bu rafın en yüksek toplam BTU\'ları için derecelendirilmiştir.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Seçmeli ikincil sütun. NOT: Tür = trafik, bu sarı sorguyu temsil eder.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Seçmeli üçüncü sütun. NOT: Tür = trafik, bu yeşil sorguyu temsil eder.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Bu cihazın yönlendirmesi.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Bu kuyruk öğenin süreç tanımlayıcısı.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Cihaz hakkında ayrıntıları almak için son kullanılan süreç';

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

$GLOBALS["lang"]['The result of the command.'] = 'Emirin sonucu.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Odada raf bulunmaktadır.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Sırada raf bulunur.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'AWS EC2 API anahtarı ile birlikte kullanılan gizli anahtar.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Yazılım son yaşam tarihi.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Yazılım son hizmet-yaşam tarihi.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Belirtilen veritabanı masasından belirli veritabanı sütunu.';

$GLOBALS["lang"]['The specific database table.'] = 'Özel veritabanı masası.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standart Nmap zamanlama seçenekleri. Genellikle kullanıyoruz -T4 (Aggressive) çünkü bu iyi bir genişban veya ethernet bağlantısı için önerilir.';

$GLOBALS["lang"]['The status of this integration'] = 'Bu entegrasyon durumu';

$GLOBALS["lang"]['The status of this queued item.'] = 'Bu kuyruklanmış öğenin durumu.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Hedef IP bu günlük giriş referansları (eğer herhangi biri)';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Bu sunucunun eşsiz tanımlayıcısı.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Kullanıcı bu koleksiyoncuyu kullanır. Bağlantılar için bağlantılar <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Kullanıcı dış sisteme erişmek için kullanılır.';

$GLOBALS["lang"]['The users email address.'] = 'Kullanıcılar e-posta adresi.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Bu sitedeki olağan çalışma saatleri.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Ürüne verilen değer.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Bu özel eşya için depolanan değer.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Satıcı adı CPE girişleri olarak.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'satıcı CPE\'den alındı.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT\'in yüklü olduğu ev sahibine web rehberi (bir izing slash).';

$GLOBALS["lang"]['The widget at position '] = 'pozisyondaki pencere ';

$GLOBALS["lang"]['The width of this device.'] = 'Bu cihazın genişliği.';

$GLOBALS["lang"]['Then'] = 'Sonra';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Bu CVE, varsa mevcut CVE\'yi devralacak ve yazacaktır.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Bu özellik bir JSON nesnesi olarak depolanır. Tüm koleksiyonların listesidir ve koleksiyon adını birlikte içerir <code>c</code>, <code>r</code>, <code>u</code> ve <code>d</code> Hangi yaratır, okuyun, güncelleştirme ve silinir. Bunlar, bir kullanıcının bu özel koleksiyondan öğeleri gerçekleştirebileceği eylemlerdir.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Bu ya bir varchar (a text alanı), bir liste ( seçilebilir değer listesi) veya bir tarih olabilir.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Bu koleksiyoncular evrensel olarak eşsiz tanımlayıcılar.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Bu açıklama otomatik olarak kısaltılır ve ideal olarak sollanmalıdır.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Bu özellik profesyonel veya bir Enterprise lisansı gerektirir.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Bu genellikle birincil sütundur, aksi takdirde yapılandırılamaz. NOT: Tür = trafik, bu ikincil metni temsil eder.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Bu öğe, seçilen özelliklerin değerini veya kullanılan sorgunun kimliğini içermelidir.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Bu öğe seçilen özelliğin değerini eşleştirmelidir.';

$GLOBALS["lang"]['This license expires on'] = 'Bu lisans sona ermektedir';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Bu, 1 veya rafın yüksekliğine ayarlanmalıdır.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Bu oto-popüle olacaktır.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Bu keşif taramasını önemli ölçüde yavaşlatacaktır.';

$GLOBALS["lang"]['Thursday'] = 'Perşembe Perşembe Perşembe Perşembe Perşembe';

$GLOBALS["lang"]['time_caption'] = 'Zaman Caption';

$GLOBALS["lang"]['Time Caption'] = 'Zaman Caption';

$GLOBALS["lang"]['time_daylight'] = 'Zaman Günü';

$GLOBALS["lang"]['Time Daylight'] = 'Zaman Günü';

$GLOBALS["lang"]['Time to Execute'] = 'Zaman Execute';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (İkinciler)';

$GLOBALS["lang"]['Timesatamp'] = 'Times';

$GLOBALS["lang"]['Timestamp'] = 'Times';

$GLOBALS["lang"]['timing'] = 'Timing Timing';

$GLOBALS["lang"]['Timing'] = 'Timing Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Başlık:';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Geleneksel Çin';

$GLOBALS["lang"]['Traffic Light'] = 'Trafik Işığı';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ve Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problemshooting LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Open-AudIT Enterprise\'ın ÜCRETSİZ 100 cihaz lisansı ile tüm son özellikleri deneyin. Lütfen <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Salı Salı Salı Salı Salı';

$GLOBALS["lang"]['Tunisia'] = 'Tunus';

$GLOBALS["lang"]['Turkey'] = 'Türkiye Türkiye Türkiye';

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

$GLOBALS["lang"]['URL'] = 'URL URL URL URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Port';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Port';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukrayna Ukrayna Ukrayna';

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

$GLOBALS["lang"]['Use SNMP'] = 'SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSHSHSH kullanın';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Güvenli (LDAPS) kullanın';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Use Service Version Tespiti';

$GLOBALS["lang"]['Use WMI'] = 'WMI kullanın';

$GLOBALS["lang"]['Use for Authentication'] = 'Kimlik için kullanım';

$GLOBALS["lang"]['Use for Roles'] = 'Rol için kullanım';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Kullanıcılar, Roller ve Orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra for Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Auth için OKTA kullanımı';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Genellikle Mb /s, Konum A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Genellikle Mb/s, Yer B\'den.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Genellikle Mb/s, A. Yere.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Genellikle Mb/s, B. Yere.';

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

$GLOBALS["lang"]['values'] = 'Değerler Değerler';

$GLOBALS["lang"]['Values'] = 'Değerler Değerler';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'Var';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Değişken Değişken Değişken Değişken';

$GLOBALS["lang"]['Variable'] = 'Değişken Değişken Değişken Değişken';

$GLOBALS["lang"]['vendor'] = 'Satışcı';

$GLOBALS["lang"]['Vendor'] = 'Satışcı';

$GLOBALS["lang"]['vendors'] = 'Satışçılar';

$GLOBALS["lang"]['Vendors'] = 'Satışçılar';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version Version Version Version';

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

$GLOBALS["lang"]['View'] = 'View View View View';

$GLOBALS["lang"]['View All'] = 'Hepsini Görüntüle';

$GLOBALS["lang"]['View Details'] = 'View Details';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['Virtual Private Network'] = 'Sanal Özel Ağ Ağı';

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

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['WHERE'] = 'WHERE';

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

$GLOBALS["lang"]['Web'] = 'Web Web Web Web';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'FirstWave Open-AudIT\'a hoş geldiniz';

$GLOBALS["lang"]['Western Sahara'] = 'Batı Sahra';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Credentials olmasaydım ne bekleyebilirim';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Bu rafın amacı nedir.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Bu yerin türü nedir. İzinli türler içinde tutulur <code>attributes</code> masa.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Cihazları dış sistemden entegre ederken, eğer cihaz Open-AudIT\'de mevcut değilse, bunu yaratmalıyız?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Dış sistemdeki cihazlar entegre edildiğinde, cihaz dış sistemde güncellenirse, Open-AudIT\'de güncellemeliyiz?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Dış bir cihaz alırken, bunun üzerine keşif yapmalıyız mı?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Bu kriter idam edilmek için planlandığında. Tanıklardan <code>tasks.type</code> ve <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Bu log oluşturulduğunda.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Bu kuyruk öğe işlemeye başladığında.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Bu temel çizgisi uygularsak, bu temel için bir politikada olmayan cihazlarda eşyaları kontrol etmeliyiz.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Açık bir liman aldığımızda, şu anda üzerinde çalışan hizmetin versiyonu için test etmeye çalışmalıyız? Bu, gerçek çalışan hizmetleri onaylarken yardımcı olur.';

$GLOBALS["lang"]['where'] = 'Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede?';

$GLOBALS["lang"]['Where'] = 'Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede Nerede?';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Cihazın Detayları Ekranda nerede bu alanı görmek istersiniz.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Rafın arka planda olduğu yerde.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'kırılganlık, etki, erişilebilirlik ve Gizlilik kullanarak bileşenleri etkiler.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Kullanıcı etkileşimi gereklidir (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Hangi OS bu kriter uygulanır.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Hangi cihazlar Open-AudIT dış sistemden yaratmalıdır (eğer herhangi biri varsa). All, None veya verilen Attribute\'yi kullanarak.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Hangi sub-menu bu soruyu göstermeliyiz.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kim bu rafı yaptı.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Windows Server neden sadece?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Neden bu politikayı dışlıyoruz?';

$GLOBALS["lang"]['Wide Area Network'] = 'Geniş Alan Ağı';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Type';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Genişlik genişliği Genişlik genişliği';

$GLOBALS["lang"]['Width'] = 'Genişlik genişliği Genişlik genişliği';

$GLOBALS["lang"]['windows'] = 'Windows Windows Windows Windows';

$GLOBALS["lang"]['Windows'] = 'Windows Windows Windows Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Senaryo';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Kablosuz Yerel Alan Ağı';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Working Credentials'] = 'Çalışma Credentials';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Sarı Soru';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Evet Evet Evet';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Bu URL\'yi personelinize bir e-postada kopyalayıp yapıştırmak isteyebilirsiniz.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Yeni bir lisans eklemeden önce mevcut lisansınızı silmelisiniz.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube mphs';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API anahtarınız.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google\'ınız JSON olarak ayrıntılı bilgi edinin.';

$GLOBALS["lang"]['Your Licenses'] = 'Lisanslarınız';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure Müşteriniz ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Müşteri Gizli.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure Aboneliğiniz ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQLiniz bu sorguyu ortaya çıkaracak özellikleri seçmek için.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'SQLiniz bu grubu populate edecek cihazlar seçmek için.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH anahtarınız.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Erişim bilgileriniz, o bulutların başına API olarak.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Bu bağlantının statüsünün tanımınız (provisioned, Emekli, vs).';

$GLOBALS["lang"]['Your description of this item.'] = 'Bu öğenin tanımınız.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Bu yazılım parçası için genel adın';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Bu yazılım parçası için genel sürüm';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabve Zimbabve';

$GLOBALS["lang"]['active'] = 'aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif aktif';

$GLOBALS["lang"]['active directory'] = 'Aktif dizi';

$GLOBALS["lang"]['active/active'] = 'Aktif/aktif';

$GLOBALS["lang"]['active/passive'] = 'Aktif /';

$GLOBALS["lang"]['advertisement'] = 'reklam reklam reklam reklam';

$GLOBALS["lang"]['alert'] = 'Uyarı';

$GLOBALS["lang"]['all'] = 'Bütün hepsi';

$GLOBALS["lang"]['allocated'] = 'Ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı ayrı';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirüs antivirüs';

$GLOBALS["lang"]['application'] = 'Uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama uygulama';

$GLOBALS["lang"]['approved'] = 'onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış onaylanmış';

$GLOBALS["lang"]['attribute'] = 'Özellikler';

$GLOBALS["lang"]['auto'] = 'Otomatik otomatik otomatik otomatik otomatik';

$GLOBALS["lang"]['backup'] = 'yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme yedekleme';

$GLOBALS["lang"]['banned'] = 'yasaklanmış yasak yasak yasaklanmış yasak yasak yasaklanmış yasak yasak yasaklanmış yasak yasak yasak yasaklanmış yasak yasak';

$GLOBALS["lang"]['blog'] = 'Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog Blog';

$GLOBALS["lang"]['bottom'] = 'alt alt alt alt alt';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'Bina binası inşa binası inşa binası';

$GLOBALS["lang"]['cloud'] = 'bulut bulut bulut bulut';

$GLOBALS["lang"]['code'] = 'kod kodu kod kodu kod kodu';

$GLOBALS["lang"]['collector'] = 'koleksiyoncu koleksiyoncu';

$GLOBALS["lang"]['compute'] = 'hesaplama';

$GLOBALS["lang"]['config'] = 'Yapı';

$GLOBALS["lang"]['contains'] = 'Tesisler içerir';

$GLOBALS["lang"]['create'] = 'Oluştur oluşturmak';

$GLOBALS["lang"]['created'] = 'Oluşturulmuş yaratılmış yaratılmış yaratılmış yaratılmış yaratılmış';

$GLOBALS["lang"]['critical'] = 'kritik kritik kritik kritik kritik kritik';

$GLOBALS["lang"]['cve'] = 'c';

$GLOBALS["lang"]['database'] = 'veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı veritabanı database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'Delege';

$GLOBALS["lang"]['delete'] = 'silinir';

$GLOBALS["lang"]['deleted'] = 'silinmiş silinmiş silinmiş silinmiş silinmiş silinmiş';

$GLOBALS["lang"]['denied'] = 'inkar etmedi inkar etmedi inkar';

$GLOBALS["lang"]['devices'] = 'cihazlar';

$GLOBALS["lang"]['digitalocean'] = 'dijitalocean';

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

$GLOBALS["lang"]['fixed'] = 'sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit sabit';

$GLOBALS["lang"]['floor'] = 'zemin zemin zemin zemin';

$GLOBALS["lang"]['front'] = 'Ön cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe cephe ön cephe';

$GLOBALS["lang"]['front-left'] = 'ön sol';

$GLOBALS["lang"]['front-right'] = 'Ön sağ';

$GLOBALS["lang"]['github'] = 'izle';

$GLOBALS["lang"]['google'] = 'google google google';

$GLOBALS["lang"]['greater or equals'] = 'Daha büyük veya eşitler';

$GLOBALS["lang"]['greater than'] = 'Daha büyük Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Than Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük Daha Büyük';

$GLOBALS["lang"]['group'] = 'Grup grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu grubu';

$GLOBALS["lang"]['head'] = 'Baş kafa başı';

$GLOBALS["lang"]['here'] = 'İşte burada burada';

$GLOBALS["lang"]['high availability'] = 'yüksek kullanılabilirlik';

$GLOBALS["lang"]['howto'] = 'HowtoHowtoHowto';

$GLOBALS["lang"]['ignored'] = 'Göz ardı ardı ardı ardı ardı ardı ardı ardı ardı ardı';

$GLOBALS["lang"]['in'] = 'İçinde in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in in';

$GLOBALS["lang"]['inactive'] = 'Inaktif';

$GLOBALS["lang"]['incomplete'] = 'Eksik eksik eksik eksik eksik';

$GLOBALS["lang"]['info'] = 'Bilgi bilgi';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Int, text, bool (y/n) vs.';

$GLOBALS["lang"]['is licensed to'] = 'Lisanslanır';

$GLOBALS["lang"]['left'] = 'Sol sol sol sol sol soldan ayrıldı';

$GLOBALS["lang"]['less or equals'] = 'Daha az veya eşitler';

$GLOBALS["lang"]['less than'] = 'Daha az';

$GLOBALS["lang"]['license'] = 'Lisans lisansı';

$GLOBALS["lang"]['like'] = 'Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like Like';

$GLOBALS["lang"]['line'] = 'line line line line line line';

$GLOBALS["lang"]['load balancing'] = 'Yük dengelemek';

$GLOBALS["lang"]['location'] = 'Konum lokasyon';

$GLOBALS["lang"]['managed'] = 'yönetilen yönetilen yönetilen yönetilen yönetilen';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Dağın noktası';

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

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize optimize';

$GLOBALS["lang"]['optionally '] = 'Seçmeli olarak ';

$GLOBALS["lang"]['other'] = 'Diğer diğer diğer diğer diğer diğer diğer diğer';

$GLOBALS["lang"]['package'] = 'Paket paketi';

$GLOBALS["lang"]['partition'] = 'Bölüm';

$GLOBALS["lang"]['pass'] = 'Geç geçiş';

$GLOBALS["lang"]['pending'] = 'Beklemek için bekleyen bekleme';

$GLOBALS["lang"]['performance'] = 'performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans performans';

$GLOBALS["lang"]['performed'] = 'gerçekleştirildi';

$GLOBALS["lang"]['pie'] = 'pasta';

$GLOBALS["lang"]['planning'] = 'Planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama planlama';

$GLOBALS["lang"]['predictable'] = 'öngörülebilir öngörülebilir öngörülebilir öngörülebilir';

$GLOBALS["lang"]['query'] = 'Soru Soru';

$GLOBALS["lang"]['rear'] = 'Arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka arka';

$GLOBALS["lang"]['rear-left'] = 'Arka sol';

$GLOBALS["lang"]['rear-right'] = 'Arka sağ';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'sürüm sürüm sürüm sürüm';

$GLOBALS["lang"]['reserved'] = 'Ayrı ayrı ayrı ayrı ayrı ayrı ayrı';

$GLOBALS["lang"]['right'] = 'Doğru doğru doğru doğru doğru doğru doğru';

$GLOBALS["lang"]['room'] = 'Oda odası';

$GLOBALS["lang"]['row'] = 'Sıra sıra sıra sıra';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart standart';

$GLOBALS["lang"]['starts with'] = 'Başlamak ile başlar';

$GLOBALS["lang"]['storage'] = 'depolama depolama depolama depolama depolama depolama depolama';

$GLOBALS["lang"]['timestamp'] = 'Zamanlar';

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

$GLOBALS["lang"]['unallocated'] = 'Unallocated';

$GLOBALS["lang"]['unauthorised'] = 'Hiçbir yazar';

$GLOBALS["lang"]['unknown'] = 'Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen Bilinmeyen';

$GLOBALS["lang"]['unmanaged'] = 'yönetilmedi.';

$GLOBALS["lang"]['unused'] = 'Kullanılmamış olmayan';

$GLOBALS["lang"]['update'] = 'update update update';

$GLOBALS["lang"]['valid'] = 'Geçerli geçerli geçerli geçerli geçerli geçerli geçerli';

$GLOBALS["lang"]['virtualisation'] = 'Sanallaştırma';

$GLOBALS["lang"]['warning'] = 'Uyarı';

$GLOBALS["lang"]['web'] = 'web web web web';

$GLOBALS["lang"]['yes'] = 'evet evet evet';

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

