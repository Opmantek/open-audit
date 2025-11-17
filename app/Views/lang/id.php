<?php
$GLOBALS["lang"][' Default, currently '] = ' Baku, saat ini ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Jika sesuatu tidak bekerja seperti yang diharapkan, hal pertama Anda lakukan adalah memeriksa log.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' kini didukung dengan berkas bahasa. Untuk mengubah pengguna Anda memakai bahasa ini, klik ';

$GLOBALS["lang"][' seconds'] = ' detik';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', tapi tidak perlu mengingat set terpisah mandat logon.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', yang kami memasok lebih dari tiga puluh sebagai set default. Pengguna profesional tidak dapat mengubah ini, tapi pengguna Enterprise memiliki kemampuan penyesuaian lengkap - termasuk membuat Anda sendiri.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', Anda <i>harus</i> be using https on your Open-Audite server to use Entra for Auth. Silakan konfigurasi Apache untuk digunakan <strong>https</strong> sebelum mengatur Entra untuk auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Untuk mengaktifkan ini, sunting butir konfigurasi untuk ';

$GLOBALS["lang"]['10 Minutes'] = '10 Menit';

$GLOBALS["lang"]['15 Minutes'] = '15 Menit';

$GLOBALS["lang"]['30 Minutes'] = '30 Menit';

$GLOBALS["lang"]['5 Minutes'] = '5 Menit';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrol dikelompokkan ke dalam organisasi, orang, fisik, dan kategori teknologi';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>CATATAN</strong> - Anda mengakses URL ini dari server Open- Audit lokal. Skrip yang diunduh tidak akan dapat mengirimkan ketika dijalankan pada mesin lain. Jika Anda perlu mengaudit mesin lain, silakan unduh naskah dari mesin manapun, tanpa menggunakan peramban pada server Open-Auditt itu sendiri.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">CATATAN</strong> - Anda harus memiliki bekerja SSH atau SSH Kunci kredensial untuk mengeksekusi benchmarks atas perangkat target.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Dasar</strong> - Dokumen overarching yang berisi definisi dasar dan tes kebijakan individu.<br/> <br/> <strong>Kebijakan</strong> - Tes individu yang terkandung dalam Baseline. Setiap tes adalah untuk item tertentu. Contoh untuk menguji SSH versi 1.2.3.<br/> <br/> <strong>Rincian</strong> - Baselines dapat membandingkan port netstat, pengguna dan perangkat lunak.<br/> <br/> <strong>Perangkat Lunak</strong> - Untuk membandingkan perangkat lunak kita memeriksa nama dan versi. Karena nomor versi tidak semua standardised dalam format, ketika kita menerima hasil audit kita membuat atribut baru yang disebut software _ padded yang kita simpan dalam database bersama dengan sisa rincian perangkat lunak untuk setiap paket. Untuk alasan ini, baselees menggunakan kebijakan perangkat lunak tidak akan bekerja ketika dijalankan terhadap perangkat yang belum diaudit oleh 1.10 (setidaknya). Kebijakan perangkat lunak dapat menguji terhadap versi yang "sama dengan", "lebih besar dari" atau "sama dengan atau lebih besar dari".<br/> <br/> <strong>Port Netstat</strong> - Netstat Ports menggunakan kombinasi dari nomor port, protokol dan program. Jika semua hadir kebijakan berlalu.<br/> <br/> <strong>Pengguna</strong> - Pengguna bekerja serupa dengan Netstat Ports. Jika pengguna ada dengan nama, status, dan rincian sandi yang cocok (dapat diubah, kadaluarsa, diperlukan) maka kebijakan akan lewat.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Lokasi adalah alamat fisik yang dapat memiliki perangkat yang terkait dengannya.<br/> <br/>Anda dapat menetapkan koordinat (lat / panjang) dan jika ada perangkat yang ditugaskan, lokasi akan muncul pada peta Open-AuditT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Jaringan berasal dari entri penemuan dan atribut perangkat.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Ringkasan akan menampilkan daftar butir, dikelompokkan dengan nilai yang berbeda dari atribut yang dispesifikasikan oleh <code>table</code> dan <code>column</code> atribut.<br/> <br/>Ketika sebuah ringkasan dijalankan, hasil akan menjadi daftar nilai yang berbeda untuk itu <code>table</code> dan <code>column</code>. Akan ada taut pada nilai yang memungkinkan pengguna melihat perangkat yang cocok.<br/> <br/>Jika atribut <code>extra_columns</code> adalah penduduk, halaman yang dihasilkan akan berisi kolom-kolom ini selain kolom-kolom perangkat standar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agen membiarkan Anda audit PC tanpa penemuan. Instal agen dan itu akan check-in dengan server setiap hari dan audit sendiri. Tidak peduli apakah komputer Anda firewall, data audit masih akan muncul dalam Open- Audit.</p><p>Ketika pengujian <strong>jika</strong> agen harus melakukan tindakan, ketiga tes harus lulus (jika tes diatur). <strong>Lalu</strong> tindakan diambil.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplikasi didefinisikan oleh Anda, pengguna dan disimpan untuk Open-Auditt untuk dipakai dan diasosiasikan dengan perangkat.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atribut disimpan bagi Open-Audite untuk digunakan untuk bidang tertentu.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Mampu menentukan mesin mana yang dikonfigurasi sama adalah bagian utama sistem administrasi dan audit - dan sekarang melaporkan yang akan dibuat sederhana dan otomatis. Setelah Anda mendefinisikan baseline Anda secara otomatis akan berjalan melawan satu set perangkat pada jadwal yang telah ditentukan. Keluaran dari baselees yang dieksekusi ini akan tersedia untuk penayangan web, mengimpor ke dalam sistem pihak ketiga atau bahkan sebagai laporan yang dicetak.<br/> <br/> Baseline memungkinkan Anda untuk menggabungkan data audit dengan satu set atribut yang sebelumnya telah didefinisikan (Anda baseline) untuk menentukan kepatuhan dari perangkat.<br/> <br/> Misalnya - Anda mungkin membuat garis dasar dari perangkat berjalan Sentos 6 yang bertindak sebagai salah satu server Apache Anda di sebuah cluster. Anda tahu server khusus ini dikonfigurasi persis seperti yang Anda inginkan tetapi Anda tidak yakin apakah server lain di cluster dikonfigurasi persis sama. Baselin memungkinkan Anda untuk menentukan ini.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Cluster disimpan dalam Open-Audit untuk mengasosiasikan perangkat untuk merekam lebih baik, mengelola dan memperkirakan biaya lisensi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponen adalah istilah generik yang dipakai untuk tabel yang menyimpan atribut bagi suatu perangkat. Tabel tersebut adalah: access _ point, arp, bios, certificate, cli _ config, disk, dns, file, ips, license, log, memory, module, monitor, motherboard, netstat, netstat, nmap, option, pagefile, partisi, partisi, print _ queare, radio, rute, sksi, server, server _ item, layanan, share, software _ key, sound, sound, usk, usb, user, user, group, vm.</p><p> Selain itu kita kelas tabel berikut juga sebagai perangkat terkait: aplikasi, lampiran, cluster, kredensial, gambar.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Kredensial dienkripsi ketika disimpan dalam database.<br/> <br/>Ketika Discovery dijalankan, perangkat memiliki kredensial yang diambil dan diuji untuk koneksi pertama (dari <code>credential</code> tabel). Jika gagal, maka kredensial terkait dengan Org yang diberikan <code>credentials.org_id</code> juga diuji terhadap perangkat. Kredensial kerja disimpan pada tingkat perangkat individu dalam tabel kredensial (catatan - tidak ada "s" dalam nama tabel).<br/> <br/>Kunci SSH diuji sebelum nama pengguna / sandi SSH. Ketika pengujian SSH, kredensial juga akan ditandai sebagai bekerja dengan sudo atau menjadi root.<br/> <br/>Untuk memudahkan penggunaan, sandi Windows tak boleh memuat satu atau dua kutipan. Ini adalah keterbatasan WMI jarak jauh, bukan keterbatasan Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Kredensial digunakan untuk mengakses perangkat.<br/> <br/>Mengkonfigurasi kredensial harus menjadi salah satu hal pertama yang Anda lakukan setelah memasang Open- Auditt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Tentukan rak Anda dan assign perangkat ke posisi mereka. Anda sudah memiliki perangkat Anda di Open-Audite dan Anda tahu lokasi Anda. Buka - Audit memperluas ini untuk memungkinkan Anda untuk membuat rak dan menetapkan perangkat untuk itu. Buka - Audit bahkan akan memberikan visualisasi rak dan perangkat yang terkandung di dalamnya. Jika Anda memberikan gambar perangkat, gambar yang akan digunakan dalam visualisasi. Anda dapat melihat rak di layar dan melihat item yang sama Anda akan melihat jika Anda berdiri di depannya.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Perangkat di jaringan Anda perlu dikelola. Tapi bagaimana Anda menjaga catatan Anda sampai saat ini? Sebuah lembar kerja - tidak pasti. Yang akan keluar dari tanggal dalam jam, jika tidak hari. Mengapa secara manual mencoba untuk mengikuti. Gunakan Open-Audit untuk secara otomatis memindai jaringan Anda dan merekam perangkat Anda - produsen, model, serial dan lebih dari 100 atribut lainnya. Daftar lengkap perangkat lunak, layanan, disk, port terbuka, pengguna, dll. Otomatis lihat apakah atribut telah ditambahkan, dihapus, atau berubah.<br/> <br/>Setelah Open- Audit diatur, Anda dapat duduk kembali dan bersantai. Memiliki laporan perubahan diemail kepada Anda pada jadwal, misalnya - apa perangkat baru yang kita temukan minggu ini? Perangkat lunak baru apa yang dipasang minggu ini? Apakah ada perubahan hardware bulan lalu?<br/> <br/>Perluas pada bidang yang tersimpan dengan mudah dengan atribut gubahan Anda sendiri.<br/> <br/>Bahkan menambah perangkat yang tidak terhubung ke jaringan Anda atau perangkat yang Anda buka-Auditt server tidak dapat dicapai.<br/> <br/>Komputer, switch, router, printer atau perangkat lain pada jaringan Anda - Open- Audit dapat audit mereka semua.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Temukan berada di jantung dari apa yang Open- Audit lakukan.<br/> <br/>Bagaimana lagi kau tahu "Apa yang ada di jaringanku?"<br/> <br/>Temukan data item yang siap yang memungkinkan Anda untuk menjalankan penemuan atas jaringan dalam satu klik, tanpa memasukkan rincian jaringan itu setiap kali.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Opsi adalah pengaturan global berubah dalam <a href="../configuration?configuration.name=discovery_default_scan_option">konfigurasi</a>. Jika Anda memiliki lisensi Open-Auditt Enterprise ini dapat diselesaikan setiap penemuan dan di tambahan futher disesuaikan seperti yang diperlukan. Discovery Pilihan sebagai berikut (termasuk waktu indikator untuk memindai IP individu):<br/><br/><strong>UltraFast</strong>: <i>1 detik</i>. Pindai hanya port yang diperlukan Open-Audit untuk berbicara dengan perangkat dan mendeteksi perangkat IOS (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port tidak dianggap terbuka. Perangkat harus merespon ping Nmap. Gunakan waktu yang agresif.<br/><br><strong>SuperFast</strong>: <i>5 detik</i>. Pindai 10 besar pelabuhan TCP dan UDP, serta port 62078 (deteksi IOS Apple). An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port tidak dianggap terbuka. Perangkat harus merespon ping Nmap. Gunakan waktu yang agresif.<br><br/><strong>Cepat</strong>: <i>40 detik</i>. Pindai port top 100 TCP dan UDP, serta port 62078 (deteksi IOS Apple). An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port tidak dianggap terbuka. Perangkat harus merespon ping Nmap. Gunakan waktu yang agresif.<br/><br/><strong>Sedang (Klasik)</strong>: <i>90 detik</i>. Sebagai dekat dengan Open- Audit scan tradisional karena kita bisa membuatnya. Pindai port top 1000 TCP, juga 62078 (deteksi IOS Apple) dan UDP 161 (SNMP). An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port dianggap terbuka (dan akan memicu deteksi perangkat). Perangkat dipindai terlepas dari respon ke ping Nmap. Gunakan waktu yang agresif.<br/><br/><strong>Sedang</strong>: <i>100 detik</i>. Pindai top 1000 TCP dan 100 top UDP port, serta port 62078 (deteksi IOS Apple). An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port tidak dianggap terbuka. Perangkat harus merespon ping Nmap. Gunakan waktu yang agresif.<br/><br/><strong>Lambat</strong>: <i>4 menit</i>. Pindai top 1000 TCP dan 100 top UDP port, serta port 62078 (deteksi IOS Apple). Pendeteksi versi diaktifkan. An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port dianggap terbuka (dan akan memicu deteksi perangkat). Perangkat harus merespon ping Nmap. Gunakan waktu normal.<br/><br/><strong>UltraSlow</strong>: <i>20 menit</i>. Tidak direkomendasikan. Pindai port top 1000 TCP dan UDP, serta port 62078 (deteksi IOS Apple). Perangkat dipindai terlepas dari respon ke ping Nmap. Pendeteksi versi diaktifkan. An <code>open|filtered</code> Port dianggap terbuka. A <code>filtered</code> port dianggap terbuka (dan akan memicu deteksi perangkat). Gunakan waktu yang sopan.<br/><br/><strong>Gubahan</strong>: <i>Waktu tak dikenal</i>. Ketika opsi selain seperti yang diatur oleh penemuan standar preset diubah.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Kelompok-kelompok digunakan sebagai daftar sederhana perangkat yang cocok dengan kondisi yang diperlukan. Jika diminta menggunakan JSON mereka mengembalikan daftar <code>devices.id</code> Hanya. Jika diminta memakai antar muka web, mereka mengembalikan daftar atribut kolom standar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Jika pengguna log on ke Open-Audit tidak memiliki akses untuk pencarian LDAP (dan Anda menggunakan OpenLDAP), Anda dapat menggunakan akun lain yang memiliki akses ini. Gunakan <code>ldap_dn_account</code> dan <code>ldap_dn_password</code> untuk mengatur ini.<br/> <br/><strong>Dokumentasi Bantuan</strong><br/> <br/><a href="/index.php/auth/help">Bantuan Auth Umum</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Menggunakan Entra untuk Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Menggunakan OKTA untuk Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Log Masuk LDAP bermasalah</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Pengguna, Roles dan Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Bila Anda menambahkan suatu tipe perangkat, untuk menampilkan ikon yang terkait Anda harus menyalin secara manual berkas .svg terformat ke direktori:<br/><em>Linux</em>: / usr / local / open-audit / public / device _ images<br/><em>Jendela</em>: c:\ xampp\ htdocs\ open-audit\ device _ image<br/> <br/>Jika Anda menambahkan suatu tipe lokasi, untuk menampilkan ikon yang terkait Anda harus menyalin secara manual ikon 32x32px ke direktori:<br/><em>Linux</em>: / usr / local / open-audit / public / images / map _ icons<br/><em>Jendela</em>: c:\ xampp\ htdocs\ open-audit\ images\ map _ icon</p><p>Ketika <i>sumber daya</i> adalah <code>device</code>, valid <i>jenis</i> adalah: <code>class</code>, <code>environment</code>, <code>status</code> dan <code>type</code>. Jika <i>sumber daya</i> adalah <code>locations</code> atau <code>org</code> satu-satunya valid <i>jenis</i> adalah <code>type</code>. Jika <i>sumber daya</i> adalah <code>query</code> satu-satunya valid <i>jenis</i> adalah <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Jika Anda berniat untuk sepenuhnya audit mesin awan Anda, jangan lupa Anda juga akan membutuhkan kredensial disimpan dalam Open-Auditt.</p><p>Pastikan Anda mengizinkan port yang benar jika Anda menggunakan Microsoft Azure (22 untuk SSH, dsb). Periksa Mesin Virtual Anda - > Aturan jaringan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Bila Anda memilih suatu tipe Daftar, ruas "nilai" akan diaktifkan. Anda harus menempatkan daftar nilai yang dipisahkan koma di sini. Ini akan ditampilkan dalam kotak dropdown setiap kali bidang diedit.<br/> <br/>Seperti kebanyakan atribut lain, Fields dapat diedit secara massal. Gunakan fungsi Sunting Bulk seperti biasanya dan Anda akan melihat Fields tersedia untuk masukan.<br/> <br/>Lihat layar rincian perangkat, buka seksi yang memuat ruas dan (jika Anda memiliki akses yang cukup) Anda dapat mengklik pada nilai ruas untuk mengeditnya.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Dalam dunia yang terus-mengubah keamanan komputer di mana kerentanan baru sedang ditemukan dan ditambal setiap hari, menegakkan keterlibatan keamanan harus proses yang terus menerus. Hal ini juga memerlukan cara untuk membuat penyesuaian terhadap kebijakan, serta penilaian periodik dan pengawasan risiko. ekosistem OpenSCAP menyediakan alat dan kebijakan yang dapat diubah dengan cepat, dengan biaya-efektif dan fleksibel dalam proses-proses ini.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrasi memungkinkan Anda untuk menyetel pilihan perangkat dan jadwal untuk Open- Audit untuk berbicara dengan sistem eksternal.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Sistem desktop Windows memiliki keterbatasan jaringan yang mungkin berdampak pada kinerja Open- Auditt. stack TCP / IP membatasi jumlah simultan tidak lengkap upaya sambungan TCP. Setelah batas tercapai, upaya koneksi berikutnya dimasukkan ke dalam antrian dan akan diselesaikan dengan kecepatan tetap (10 per detik). Jika terlalu banyak masukkan antrian, mereka mungkin akan jatuh. Dan akhirnya, Apache akan dijalankan kembali oleh OS. Untuk alasan ini, memasang Open-Audite pada sistem operasi Windows desktop tidak didukung.<br/><br/>Tidak ada yang salah dengan kode Open- Audit, juga tidak dapat kita lakukan apa pun untuk mengatasi masalah ini pada mesin klien Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Rincian waktu Nmap ditemukan di bagian bawah halaman terkait ini <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / buku / man- perforce.html</a>. Dari halaman itu:<br/> <br/><em>Jika Anda berada di broadband yang layak atau koneksi ethernet, saya akan merekomendasikan selalu menggunakan -T4 (Agresif). Beberapa orang suka -T5 (Gila) meskipun terlalu agresif untuk selera saya. Orang kadang-kadang menentukan -T2 (Kebijakan) karena mereka pikir itu kurang mungkin untuk crash host atau karena mereka menganggap diri mereka untuk sopan pada umumnya. Mereka sering tidak menyadari betapa lambat -T2 sebenarnya. Pemindaian mereka mungkin memakan waktu sepuluh kali lebih lama dari pemindaian default. Kecelakaan mesin dan masalah bandwidth jarang terjadi dengan opsi waktu baku -T3 (Normal) jadi saya biasanya merekomendasikan itu untuk scanner yang berhati-hati. Mengakui deteksi versi jauh lebih efektif daripada bermain dengan nilai waktu untuk mengurangi masalah ini.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Buka -Auditt dapat dikonfigurasi untuk menggunakan metode yang berbeda untuk mengotorisasi pengguna dan sebagai tambahan, untuk membuat akun pengguna menggunakan peran yang ditugaskan dan orgs berdasarkan keanggotaan grup.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT dapat mengambil rincian tentang berkas atau direktori berkas dan memantau berkas-berkas ini untuk perubahan sesuai atribut lain dalam basis data Open-AuditT.<br/> <br/>Fitur ini bekerja di luar kotak untuk server Linux Open-Audit, tapi perlu perubahan ke nama akun layanan di bawah server Windows Open- Auditt.<br/> <br/>Klien yang didukung adalah Windows dan Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT dapat mengambil rincian tentang berkas, tanyakan manajer paket asli jika mereka dikenal dan memonitor berkas-berkas ini untuk perubahan sesuai atribut lain dalam basis data Open- AuDIT.<br/> <br/>Klien yang didukung hanya Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud IT dapat menyimpan informasi dalam ruas gubahan yang diasosiasikan dengan setiap perangkat.<br/> <br/>Setelah Medan Tambahan telah dibuat dapat digunakan dalam kueri dan kelompok sama seperti atribut lain dalam basis data.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Buka - Audit datang dengan banyak kueri dibangun. Jika Anda memerlukan kueri spesifik dan tidak ada kueri pra-paket yang sesuai dengan kebutuhan Anda, cukup mudah untuk membuat yang baru dan memasukkannya ke dalam Open-Auditt untuk berjalan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Buka - Auditt datang dengan banyak ringkasan dibangun. Jika Anda memerlukan ringkasan spesifik dan tidak ada ringkasan pra-paket sesuai dengan kebutuhan Anda, cukup mudah untuk membuat yang baru dan beban ke Open-Audite untuk berjalan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open- Audit didukung oleh FirstWave dengan tingkat dukungan yang luar biasa. Jika Anda lebih suka komunitas pendukung aktif, ada yang seperti itu juga. Dimana lagi kau bisa bicara langsung dengan para pengembang dan mendapat respon dalam 24 jam? Cobalah dengan produk lain! Dukungan luar biasa. Berhenti. Anda perlu dukungan, kami memberikan dukungan. Tak ada tapi-tapian. Dukungan besar. Titik.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open- Audit menyediakan multi- tenancy keluar dari kotak!<br/> <br/>Orgs (organisasi) dalam Open-Audit adalah item kunci. Seorang pengguna memiliki Org primer serta daftar Orgs yang dapat mereka akses. Pengguna memadukan ini dengan daftar yang ditugaskan "Roles" yang menentukan tindakan apa yang dapat mereka ambil pada item yang ditugaskan ke Orgs yang mereka punya akses ke. Kombinasi dari pengguna "organ" dan "peran" mendefinisikan apa yang mereka bisa dan tidak bisa dilakukan dalam Open-Auditt.<br/> <br/>Kebanyakan item dalam Open- Auditt ditugaskan ke suatu Org. Perangkat, Lokasi, Networks, dll.<br/> <br/>Orgs dapat memiliki anak Orgs. Pikirkan sebuah struktur organisasi (pohon). Jika pengguna memiliki akses ke organ tertentu, mereka juga memiliki akses ke keturunan Orgs. Untuk informasi lebih lanjut, lihat ini <a href="/index.php/faq?name=Users, Roles and Orgs">PSD</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open- Audit menyediakan multi- tenancy keluar dari kotak!<br/> <br/>Orgs (organisasi) dalam Open-Audit adalah item kunci. Seorang pengguna memiliki Org primer serta daftar Orgs yang dapat mereka akses. Pengguna memadukan ini dengan daftar yang ditugaskan "Roles" yang menentukan tindakan apa yang dapat mereka ambil pada item yang ditugaskan ke Orgs yang mereka punya akses ke. Kombinasi dari pengguna "organ" dan "peran" mendefinisikan apa yang mereka bisa dan tidak bisa dilakukan dalam Open-Auditt.<br/> <br/>Kebanyakan item dalam Open- Auditt ditugaskan ke suatu Org. Perangkat, Lokasi, Networks, dll.<br/> <br/>Orgs dapat memiliki anak Orgs. Pikirkan sebuah struktur organisasi (pohon). Jika pengguna memiliki akses ke organ tertentu, mereka juga memiliki akses ke keturunan Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Cepat lihat status perangkat pada jaringan Anda.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Peran di Open-Aud IT adalah item kunci. Seorang pengguna memiliki Org primer serta daftar Orgs yang dapat mereka akses. Pengguna memadukan ini dengan daftar yang diberikan pada Roles yang menentukan tindakan apa yang dapat mereka ambil pada item yang ditugaskan ke Orgs yang mereka punya akses. Kombinasi dari pengguna "organ" dan "peran" mendefinisikan apa yang mereka bisa dan tidak bisa dilakukan dalam Open-Auditt.<br/> <br/>Dapatkan lengkap pengalaman Open-Auditt Enterprise. Membuat peran memungkinkan pengendalian gravitasi halus atas apa yang dapat pengguna Anda lakukan dalam Open-Auditt.<br/> <br/>Metode primer untuk otorisasi (apa yang dapat dilakukan pengguna) didasarkan pada pengguna Roles. Peran baku didefinisikan sebagai admin, org _ admin, reporter dan pengguna. Setiap peran memiliki seperangkat izin (Buat, Baca, Update, Hapus) untuk setiap titik akhir. Kemampuan untuk mendefinisikan peran tambahan dan menyunting peran yang ada diaktifkan dalam Open-Auditt Enterprise.<br/> <br/>Peran juga dapat digunakan dengan LDAP (Direktori Aktif dan otorisasi OpenLDAP). Instalasi berlisensi Enterprise memiliki kemampuan untuk menyesuaikan grup LDAP untuk setiap peran didefinisikan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Aturan memeriksa atribut dan membuat cahnges berdasarkan aturan yang sesuai.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Memindai opsi memungkinkan Anda dengan mudah menerapkan seperangkat opsi ke penemuan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Simple, intuitif, akurat pemetaan geografis disediakan oleh Google Maps. Open- Auditt memanfaatkan Google Maps untuk menyediakan pemetaan geografis interaktif dari lokasi perangkat. Konversi otomatis dari alamat jalan untuk geocode dan bujur / lintang.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Perangkat lunak Packages dipakai untuk menentukan apakah antivirus, cadangan, firewall, disetujui atau dilarang perangkat lunak dipasang.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Beberapa contoh atribut Subnet yang valid adalah: 192.168.1.1 (satu alamat IP), 192.168.1.0 / 24 (sebuah jaringan), 192.168.1-3.1-20 (kisaran alamat IP).<br/> <br/><em>CATATAN</em> - Hanya subnet (sesuai dengan contoh - 192.168.1.0 / 24) akan dapat secara otomatis membuat jaringan yang valid untuk Open-Auditt. <br/> <br/>Jika Anda memakai tipe Direktori Aktif, pastikan Anda memiliki kredensial yang sesuai untuk berbicara dengan Pengontrol Domain Anda <a href="../credentials">kredensial</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standars disimpan dalam Open- Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Klien yang didukung hanya Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Tugas memiliki jadwal yang mencerminkan jadwal unix cron. Atribut untuk menit, jam, hari per bulan, bulan, hari-minggu semua bertindak sesuai definisi cron. Anda dapat memilih kelipatan dari nilai-nilai ini menggunakan koma yang dipisahkan (tanpa spasi). Anda dapat memilih setiap nilai menggunakan *.<br/> <br/>The <code>type</code> tugas dapat menjadi salah satu dari: Baselines, kolektor, penemuan, kueri, laporan atau rangkuman.<br/> <br/>Jika Anda ingin menjadwalkan suatu Baseline atau Discovery, Anda harus membuat ini sebelum membuat tugas. Anda harus menggunakan ID dari jenis butir dalam <code>sub_resource_id</code>. Sebagai contoh jika Anda ingin menjadwalkan Discovery, gunakan ID Discofies tertentu di <code>sub_resource_id</code>.<br/> <br/>Nilai untuk <code>uuid</code> spesifik untuk setiap server Open-Audite. Nilai unik Anda dapat ditemukan dalam konfigurasi.<br/> <br/>The <code>options</code> atribut adalah sebuah dokumen JSON berisi atribut ekstra yang diperlukan untuk menjalankan tugas. Atribut tambahan untuk laporan, kueri dan rangkuman adalah: <code>email_address</code> dan <code>format</code>. Atribut ekstra untuk Bselines adalah <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> lokasi akan menentukan ikon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Atribut titik akhir memungkinkan Anda untuk menambahkan nilai yang disesuaikan ke atribut yang berbeda dalam Open-Auditt, pada saat fitur ini bekerja pada Kelas, Lingkungan, Status dan Jenis atribut pada Perangkat, Jenis atribut untuk kedua Lokasi dan Org serta Kategori Menu untuk Queries. Jika Anda melihat satu butir dari salah satu tipe provious (katakanlah view a Lkocation) Anda akan melihat atribut Tipe harus dipilih dari kotak drop-down. Di sinilah nilai-nilai tersebut disimpan. Oleh karena itu, jika Anda ingin menambahkan Tipe Baru untuk dipilih untuk Lokasi, tambahkan menggunakan Fitur Atribut.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Fitur Kolektor memungkinkan Anda untuk mengelola banyak komputer "kolektor" yang melakukan penemuan jaringan. Semua Kolektor dikendalikan secara sentral dari Server. Satu-satunya pelabuhan jaringan yang diperlukan antara Kolektor dan Server adalah 80 dan / atau 443.<br/> <br/>Ini membuat mengelola jaringan berbeda cepat, mudah dan sederhana. Membuka Audit Enterprise lisensi mendapatkan lisensi kolektor tunggal termasuk dan memiliki pilihan untuk membeli lebih banyak seperti yang diperlukan..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Bagian SELECT dari SQL Anda <em>harus</em> berisi kolom yang memenuhi syarat penuh. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Bagian mana dari SQL Anda <em>harus</em> berisi <code>WHERE @filter</code> sehingga Open-Auditt tahu untuk membatasi permintaan Anda ke Orgs yang sesuai. SQL tidak berisi kondisi ini akan menghasilkan query yang gagal dibuat, kecuali anda memiliki peran Admin.<br/> <br/>Sebuah query contoh SQL menampilkan atribut pada perangkat yang memiliki <code>os_group</code> atribut dari "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Bagian SELECT dari SQL Anda <em>harus</em> hanya berisi <code>DISTINCT(devices.id)</code>.<br/> <br/>Bagian mana dari SQL Anda <em>harus</em> berisi <code>WHERE @filter</code> sehingga Open-Auditt tahu untuk membatasi permintaan Anda ke Orgs yang sesuai. SQL tidak berisi kondisi ini akan mengakibatkan dalam grup gagal untuk dibuat.<br/> <br/>Contoh untuk SQL untuk memilih semua perangkat yang menjalankan OS Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Titik akhir lisensi memungkinkan Anda untuk melacak jumlah lisensi yang ditemukan pada perangkat Anda.<br/> <br/>Untuk membuat entri untuk melacak lisensi Anda <em>harus</em> untuk memberikan nama, organisasi, jumlah lisensi yang diperoleh dan nama perangkat lunak. Di lapangan <code>match_string</code> Anda harus memberikan nama perangkat lunak yang ingin Anda lacak, Anda dapat menggunakan tanda persen (%) sebagai wildcard dalam match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Jaringan harus dalam format 192.168.1.0 / 24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Item sekunder primer dan opsional harus sepenuhnya memenuhi syarat - ie, perangkat. tipe atau perangkat lunak. nama.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Tidak perlu melakukan apa-apa jika Anda menjalankan Open- Auditt pada server Linux.<br/><br/>Klien Windows baik-baik saja dan tidak memerlukan tindakan khusus, bagaimanapun.... untuk mengaktifkan fitur ini naskah audit harus dijalankan secara lokal pada sistem target Windows. Tidak dapat dijalankan dari jarak jauh seperti yang kita lakukan dengan panggilan WMI ketika menjalankan naskah audit pada satu mesin Windows, sementara menargetkan mesin Windows kedua. Untuk melakukan ini kita perlu menyalin naskah audit ke mesin target Windows dan kemudian menjalankannya. Sayangnya rekening layanan yang dijalankan Apache adalah akun sistem lokal. Akun ini tidak memiliki akses ke sumber daya remote (jaringan berbasis). Untuk bekerja di sekitar masalah ini layanan harus dijalankan di bawah account lain. Hal ini paling mudah untuk hanya menggunakan akun Administrator lokal, tetapi Anda dapat mencoba akun apapun yang Anda suka selama memiliki hak khusus yang diperlukan. Akun Sistem Lokal memiliki akses lokal sebanyak akun Administrator lokal.<br/><br/>Lihat halaman kami saat mengaktifkan <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Menjalankan Layanan Apache Open-Auditt di bawah Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Ini adalah perangkat yang hidup dalam rak.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Titik akhir ini memungkinkan Anda untuk menambahkan rincian infrastruktur awan Anda. Buka - Audit kemudian akan menjangkau awan Anda menggunakan API asli mereka dan kembali server Anda, seperti perangkat lain dalam Open- Audit.<br/> <br/><em>CATATAN</em> - Untuk menggunakan fitur ini, kita <em>harus</em> aktifkan item konfigurasi cocok dengan _ mac (for AWS) dan cocokkan _ hostname (for Azure). Ini akan dilakukan secara otomatis pertama kalinya penemuan awan dijalankan.<br/> <br/>Kredensial untuk awan Anda (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> atau <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) dibutuhkan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilities pelaporan berdasarkan feed NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Kami awalnya menyusun daftar baku skrip dengan opsi baku. Skrip baku ini tidak dapat dihapus. Anda dapat membuat skrip tambahan untuk digunakan oleh anda seperti yang diperlukan. Skrip Anda akan didasarkan pada salah satu skrip yang ada dan memiliki opsi gubahan yang diterapkan. Naskah kemudian dapat diunduh dari halaman daftar pada menu - > Temukan - > Skrip Audit - > Skrip Audit Daftar<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Ketika menggunakan Regex untuk pencocokan, halaman yang membantu dapat ditemukan pada <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Situs PHP</a>. Beberapa perbedaan ke Perl Regex dapat ditemukan <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">sini</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widget dapat dengan mudah diciptakan untuk menunjukkan apa yang spesifik bagi lingkungan Anda di dashboard Anda.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Dengan Open- Audit Profesional dan Enterprise Anda dapat otomatis dan jadwal penemuan, laporan generasi, atau pemeriksaan baseline untuk dijalankan ketika Anda inginkan, dan sesering yang Anda butuhkan. Jadwalkan penemuan Anda untuk berjalan malam dan laporan yang akan dihasilkan dan diemail ke personil kunci setiap pagi. Kompleks atau jadwal sederhana, penemuan perangkat dan generasi laporan hanya klik pergi.<br/> <br/>Buat jadwal penemuan individu untuk setiap pengontrol subnet atau AD, tambahkan laporan yang akan dibuat untuk pemirsa yang ditargetkan. Mengembangkan jadwal sederhana atau kompleks untuk mendukung kebutuhan perusahaan, menghindari backup atau dampak operasi, atau hanya untuk menyebarkan beban dan speed- up audit selesai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Anda dapat membuat skrip dengan semua pilihan untuk skrip audit yang ada - bukan hanya Windows. AIX, ESX, Linux, OSX dan Windows semua tertutup.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Anda dapat menggunakan tanda persen% sebagai wildcard dalam korek _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>rak Anda membantu memperbaiki persis di mana perangkat Anda berada.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>CATATAN</strong> - Anda mengakses URL ini dari server Open- Audit lokal. Skrip yang diunduh tidak akan dapat mengirimkan ketika dijalankan pada mesin lain. Jika Anda perlu mengaudit mesin lain, silakan unduh naskah dari mesin manapun, tanpa menggunakan peramban pada server Open-Auditt itu sendiri.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Suatu item CVE yang tidak memuat filter untuk menentukan item yang terpengaruh.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Sebuah Peta Google API Kunci dibutuhkan untuk fungsi ini.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Sebuah JSON array ID perangkat yang akan memiliki benchmark ini dieksekusi.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Sebuah objek JSON array yang cocok dengan nama perangkat lunak yang diambil dari CVE, diperkaya dengan nama perangkat lunak yang diambil oleh Open-Auditt.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Sebuah nilai-nilai JSON untuk menguji kerentanan ini.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Dokumen JSON berisi Orgs yang ditugaskan pada pengguna ini. ID diambil dari <code>orgs.id</code>. Jika pengguna memiliki akses ke Org, mereka memiliki akses ke Orgs keturunan.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Sebuah dokumen JSON berisi atribut yang diperlukan tergantung pada <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Sebuah dokumen JSON berisi atribut yang diperlukan menimpa penemuan _ scan _ options yang dipilih.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Sebuah dokumen JSON berisi atribut yang diperlukan overriding opsi perangkat baku yang cocok.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Dokumen JSON berisi peran yang diberikan kepada pengguna ini. Nama peran diambil dari <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Sebuah objek JSON berisi sebuah array atribut untuk mengubah jika pertandingan terjadi.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Objek JSON berisi array atribut yang cocok.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Objek JSON berisi opsi spesifik koleksi.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Objek JSON dihuni melalui penemuan Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Representasi JSON berisi rincian butir antrian yang akan dieksekusi.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Sebuah representasi JSON dari bidang untuk integrasi ini.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Sebuah representasi JSON dari tes individu dan hasil mereka pada semua perangkat baseline ini telah dijalankan melawan.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Sebuah representasi JSON dari tes yang membuat kebijakan ini.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Sebuah LAN dapat terhubung ke WAN menggunakan router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Sebuah jaringan area Metropolitan (MAN) adalah jaringan komputer besar yang biasanya mencakup sebuah kota atau kampus besar.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Penemuan benih menggunakan IP awal untuk mengambil IP dari perangkat lain yang tahu tentang, menambahkan mereka IP ke daftar dan scan mereka - lagi meminta IP apapun perangkat tambahan tahu tentang. Bilas dan ulangi. Hal ini cukup cerdas untuk mengetahui apakah sudah dipindai IP yang diberikan dalam eksekusi dan membuang apapun yang sudah dipindai (atau bahkan pada daftar untuk dipindai).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Sebuah subnet penemuan akan memindai IP disediakan.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Suatu URL yang diberikan ke agen yang kemudian akan mengunduh berkas dan menyimpannya di disk lokal.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Sebuah URL ke berkas untuk diunduh.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Jaringan tulang belakang adalah bagian dari infrastruktur jaringan komputer yang menyediakan jalan untuk pertukaran informasi antara lans yang berbeda atau jaringan sub-. Sebuah tulang punggung dapat mengikat bersama berbagai jaringan dalam gedung yang sama, di bangunan yang berbeda, atau lebih dari luas daerah.<br/><br/>Misalnya, sebuah perusahaan besar mungkin mengimplementasikan jaringan tulang belakang untuk menghubungkan departemen yang terletak di seluruh dunia. Peralatan yang menghubungkan jaringan departemen merupakan tulang punggung jaringan. Ketika merancang tulang punggung jaringan, kinerja jaringan dan kemacetan jaringan adalah faktor penting untuk diperhitungkan. Biasanya, kapasitas jaringan tulang belakang lebih besar daripada jaringan individu yang terhubung dengannya.<br/><br/>Contoh lain dari jaringan tulang belakang adalah tulang punggung Internet, yang merupakan set jaringan luas area (WANG) dan router inti yang menghubungkan semua jaringan terhubung ke Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Sebuah bidang yang dihitung yang menampilkan jumlah kali perangkat lunak ini ditemukan pada komputer di Org yang dipilih (dan keturunannya jika dikonfigurasi).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Sebuah jaringan area kampus (CAN) terbuat dari sambungan trans dalam area geografis terbatas. Peralatan jaringan (switch, router) dan media transmisi (serat optik, pabrik tembaga, cabling Cat5, dll.) hampir seluruhnya dimiliki oleh penyewa kampus / pemilik (perusahaan, universitas, pemerintah, dll).<br/><br/>Misalnya, jaringan kampus universitas kemungkinan untuk menghubungkan berbagai bangunan kampus untuk menghubungkan perguruan tinggi atau departemen, perpustakaan, dan ruang tinggal mahasiswa.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Port tertutup dapat diakses (ia menerima dan menanggapi paket probe Nmap), tapi tidak ada aplikasi yang mendengarkannya. Mereka dapat membantu dalam menunjukkan bahwa host ada di alamat IP (penemuan host, atau ping scanning), dan sebagai bagian dari deteksi OS. Karena port tertutup dapat dihubungi, mungkin layak untuk dipindai nanti jika ada yang buka. Administrator mungkin ingin mempertimbangkan memblokir port tersebut dengan firewall. Kemudian mereka akan muncul dalam keadaan disaring, dibahas berikutnya.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Seorang kolektor baik di collector atau Stand- Alone mode.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Daftar yang dipisahkan oleh koma dari CVE yang bisa diterapkan.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Daftar nilai yang dipisahkan koma, salah satunya dapat dipilih.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Perintah untuk dijalankan. Ketika agen berbasis Windows, perintah ini dijalankan dari dalam agen powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Sebuah dashboard terdiri dari tiga kolom dan dua baris dari apa yang kita sebut <i>widget</i>. Sebuah widget sangat mirip dengan sebuah ringkasan, hanya saja kita mengambil konsep ringkasan sedikit lebih jauh. Widget diciptakan dengan cara sederhana menggunakan beberapa kotak drop down - atau Anda dapat memilih untuk menggunakan SQL Anda sendiri untuk dapat disesuaikan secara lengkap.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Port disaring dianggap terbuka (dan akan memicu deteksi perangkat).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Sebuah jaringan area global (GAN) adalah jaringan yang digunakan untuk mendukung mobile di sebuah nomor acak dari LANs nirkabel, area cakupan satelit, dll. Tantangan utama dalam komunikasi mobile adalah menyerahkan komunikasi pengguna dari satu area liputan lokal ke area berikutnya. Dalam proyek IEEE 802, ini melibatkan suksesi terestrial nirkabel LANs.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Sebuah jaringan area rumah (HAN) adalah tempat tinggal yang digunakan untuk komunikasi antara perangkat digital biasanya digunakan di rumah, biasanya sejumlah kecil komputer dan aksesoris pribadi, seperti printer dan perangkat komputasi mobile. Fungsi penting adalah berbagi akses internet, seringkali layanan broadband melalui TV kabel atau baris pelanggan digital (DSL) penyedia.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Daftar port TCP khusus untuk dipindai (22 adalah SSH, 135 adalah WMI, 62078 adalah iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Daftar port UDP untuk dipindai (161 adalah SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Jaringan area lokal (LAN) adalah jaringan yang menghubungkan komputer dan perangkat di daerah geografis terbatas seperti rumah, sekolah, gedung kantor, atau kelompok bangunan dengan posisi dekat. Setiap komputer atau perangkat pada jaringan adalah sebuah titik. Wired Lans kemungkinan besar didasarkan pada teknologi Ethernet. Standar baru seperti ITU- T G.hn juga menyediakan cara untuk membuat sebuah LAN kabel menggunakan kabel yang ada, seperti kabel coaxial, saluran telepon, dan kabel listrik.<br/><br/>Mendefinisikan karakteristik dari LAN, berbeda dengan jaringan luas area (WAN), termasuk tingkat transfer data yang lebih tinggi, kisaran geografis terbatas, dan kurangnya ketergantungan pada penyewaan baris untuk menyediakan konektivitas. Ethernet atau teknologi IEEE 802.3LAN lainnya beroperasi pada tingkat transfer data hingga 100 Gbit / s, standardisasi oleh IEEE pada tahun 2010. Saat ini, 400 Gbit / s Ethernet sedang dikembangkan.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Lokasi adalah alamat fisik yang dapat memiliki perangkat yang terkait dengannya. Anda dapat menetapkan koordinat dan jika ada perangkat yang ditugaskan, lokasi akan muncul pada Peta ketika Anda memiliki lisensi Open-AuditT Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Nama lokasi akan membantumu menemukan perangkat ini di masa depan.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Angka yang lebih rendah berarti akan diterapkan sebelum aturan lain.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Angka yang lebih rendah berarti akan diterapkan sebelum aturan lain. Beratnya 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Pengguna baru yang masuk ke Open-Audit dan telah dikonfirmasi dan disahkan oleh keputusan LDAP. Pengguna itu kemudian dibuat dalam Open- Audit dan log masuk. Sukses.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Sebuah paket adalah sepotong softare terpasang. Sebuah paket memiliki tipe - antivirus, disetujui, cadangan, dilarang, awan, firewall, diabaikan, lisensi atau lainnya.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Sandi (disimpan sebagai hash) yang memungkinkan logon ketika menggunakan otentikasi aplikasi.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Seseorang memiliki akun dalam aplikasi Open- Audit. Akun pengguna mereka memiliki daftar Roles dan Organisasi yang terkait. Peran pengguna telah menentukan apa yang bisa mereka lakukan. Organisasi seorang pengguna telah menentukan item WHICH yang dapat mereka kerjakan.<br/><br/>Ketika seorang pengguna meminta untuk melakukan operasi (membuat, baca, update, delete) pada suatu butir koleksi, peran-peran tersebut berkonsultasi untuk melihat apakah mereka diijinkan untuk melakukan aksi tersebut, maka orgs berkonsultasi untuk menentukan apakah butir koleksi tersebut termasuk sebuah org yang telah diijinkan untuk dijalankan pengguna.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Jaringan area pribadi (PAN) adalah jaringan komputer yang digunakan untuk komunikasi antara komputer dan perangkat teknologi informasi yang berbeda dekat dengan satu orang. Beberapa contoh perangkat yang digunakan dalam PAN adalah komputer pribadi, printer, mesin faks, telepon, PDA, scanner, dan bahkan konsol video game. PAN mungkin termasuk kabel dan perangkat nirkabel. Mencapai PAN biasanya meluas ke 10 meter. PAN kabel biasanya dibangun dengan koneksi USB dan FireWire sementara teknologi seperti Bluetooth dan komunikasi inframerah biasanya membentuk PAN nirkabel.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Sebuah query pada dasarnya adalah pernyataan SQL. Pernyataan ini dijalankan terhadap basis data dengan penambahan otomatis dari batas, disaring untuk hanya diterapkan ke item-item yang diminta dan hanya item yang pengguna memiliki izin untuk melihat. Sebuah Query dapat dibuat menggunakan menu - > Kelola - > Kueri - > Buat Queries. Kueri berisi sebuah org _ id dan karenanya dibatasi ke pengguna yang sesuai. Pengguna harus memiliki peran org _ admin atau reporter untuk membuat, memperbarui atau menghapus permintaan. Semua pengguna dapat menjalankan permintaan. Query memiliki atribut nama yang digunakan untuk butir menu serta atribut kategori menu. Ini memberitahu GUI Open- Audit yang submenu untuk menempatkan permintaan masuk Ada juga menu display yang harus diset ke <i>y</i> untuk mengaktifkan query di GUI (<i>n</i> untuk mencegah permintaan dari muncul sama sekali). Query masih akan berjalan jika dipanggil menggunakan nya <code>id</code>, terlepas dari nilai tampilan menu.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Sebuah rak adalah koleksi perangkat yang ditugaskan posisi dan ketinggian dalam rak. Sebuah perangkat bisa saja memiliki gambar yang terkait dengannya. Sebuah rak diletakkan berturut-turut. Kami telah menciptakan sistem yang sangat granular untuk posisi rak, yang sebagai berikut. Pada tingkat atas (seperti biasa) adalah Organisasi (Org). Org dapat memiliki beberapa lokasi (seperti yang selalu terjadi). Dengan tambahan fitur Racks, lokasi sekarang dapat berisi satu atau lebih Bangunan. Sebuah bangunan dapat berisi satu atau lebih Floors. Lantai dapat berisi satu atau lebih Rooms. Sebuah ruangan dapat berisi satu atau lebih Rows. Ini terdengar seperti banyak pekerjaan, tetapi default diciptakan untuk Anda. Buat Lokasi baru dan komponen sub- akan otomatis dibuat untuk Anda. Jika Anda membutuhkan lebih banyak barang (bangunan, dll) Anda dapat menambahkan mereka seperti yang Anda inginkan. Sebuah rak juga bisa menjadi bagian dari <i>pod</i> rak. Atribut pod bekerja sebagai tag, daripada model warisan hirarki yang ketat seperti per bangunan, lantai, dll.<br/><br/>Racks adalah fitur yang tersedia bagi pelanggan Open-Auditt Enterprise yang berlisensi.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Sebuah domain routing atau ruang alamat dimana alamat IP dan alamat MAC unik.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Berkas cron sampel untuk Linux ada di bawah. Ini harus ditempatkan di';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Zona keamanan adalah domain administratif atau domain kebijakan dalam Domain Jaringan.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Sebuah penemuan benih adalah jenis lain penemuan, di mana Anda memberikan IP dari tunggal <i>benih</i> alat. Perangkat ini diaudit, dan setiap IP yang diketahui kemudian ditambahkan ke daftar IP untuk diaudit. Kemudian, perangkat tersebut diaudit dan IP apapun mereka tahu juga ditambahkan ke daftar IP untuk audit. Proses ini kemudian melanjutkan dalam parameter yang dikonfigurasi oleh pengguna.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Deskripsi singkat dari entri log.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Jaringan area penyimpanan (SAN) adalah jaringan khusus yang menyediakan akses ke penyimpanan data tingkat blok. SANs terutama digunakan untuk membuat perangkat penyimpanan, seperti array disk, perpustakaan tape, dan kotak musik optik, diakses ke server sehingga perangkat tampak seperti perangkat terpasang lokal ke sistem operasi. SAN biasanya memiliki jaringan sendiri dari perangkat penyimpanan yang umumnya tidak dapat diakses melalui jaringan area lokal oleh perangkat lain. Biaya dan kompleksitas dari SANs turun pada awal 2000-an untuk tingkat memungkinkan adopsi yang lebih luas di kedua perusahaan dan kecil untuk lingkungan bisnis medium berukuran.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Sebuah string yang cocok dengan <code>software.name</code> atribut. Anda dapat menggunakan wildcard SQL standar dari persen (%) untuk mencocokkan satu atau lebih karakter.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Sebuah sistem terstruktur untuk mengelola informasi sensitif';

$GLOBALS["lang"]['A timestamp.'] = 'Sebuah penanda waktu.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Seorang pengguna memiliki Org primer serta daftar Orgs yang dapat mereka akses. Pengguna memadukan ini dengan daftar peran yang diberikan yang menentukan tindakan apa yang dapat mereka ambil pada item yang ditugaskan ke Orgs yang mereka punya akses ke. Kombinasi dari pengguna <i>orgs</i> dan <i>peran</i> definisikan apa yang mereka bisa dan tidak bisa lakukan dalam Open-Auditt.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Pengguna akan memiliki daftar organisasi yang terkait (orgs). Tiap org pengguna telah mengijinkan mereka untuk bertindak atas butir dalam org tersebut sesuai peran mereka.<br/><br/>Semua orgs kecuali org baku memiliki induk. Pikirkan Org Chart. Jika pengguna memiliki izin pada Org, mereka juga memiliki izin pada setiap keturunan dari Org itu.<br/><br/>Pengguna juga diijinkan meminta izin pada anak org untuk melihat item dari orgs induk untuk koleksi tertentu. Itu adalah: dashboard, penemuan _ scan _ options, field, files, group, kueri, laporan, peran, aturan, script, ringkasan, widget.<br/><br/>Jangan lupa Anda memiliki kontrol granular atas apa yang dapat dilihat pengguna dan lakukan menggunakan Roles di Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Pengguna akan memiliki daftar organisasi yang terkait (orgs). Tiap org pengguna telah mengijinkan mereka untuk bertindak atas butir dalam org tersebut sesuai peran mereka.<br/><br/>Semua orgs kecuali org baku memiliki induk. Pikirkan Org Chart. Jika pengguna memiliki izin pada Org, mereka juga memiliki izin pada setiap keturunan dari Org itu.<br/><br/>Kami juga mengizinkan pengguna dengan izin pada anak org untuk melihat item dari orgs induk untuk koleksi tertentu. Ini adalah: dashboard, penemuan _ scan _ options, field, files, group, kueri, peran, aturan, skrip, rangkuman, widget.<br/><br/>Jangan lupa Anda memiliki kontrol granular atas apa yang dapat dilihat pengguna dan lakukan menggunakan';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Sebuah jaringan pribadi virtual (VPN) adalah jaringan overlay di mana beberapa hubungan antara node dibawa oleh sirkuit terbuka atau virtual dalam beberapa jaringan yang lebih besar (misalnya, Internet) daripada oleh kabel fisik. Protokol lapisan link data dari jaringan virtual dikatakan tunneled melalui jaringan yang lebih besar ketika ini terjadi. Salah satu aplikasi umum adalah komunikasi aman melalui Internet publik, tapi VPN tidak perlu memiliki fitur keamanan eksplisit, seperti otentikasi atau enkripsi isi. VPNs, misalnya, dapat digunakan untuk memisahkan lalu lintas komunitas pengguna berbeda melalui jaringan yang mendasari dengan fitur keamanan yang kuat.<br/><br/>VPN mungkin memiliki kinerja terbaik, atau mungkin memiliki persetujuan tingkat layanan tertentu (SLA) antara pelanggan VPN dan penyedia layanan VPN. Umumnya, VPN memiliki topologi yang lebih kompleks daripada titik ke titik.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Kerapuhan mempengaruhi ketersediaan dapat memungkinkan penyerang mengganggu layanan, sistem kecelakaan, atau menyebabkan penolakan layanan (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Kerapuhan mempengaruhi kerahasiaan dapat memungkinkan penyerang untuk membaca data sensitif, seperti informasi pribadi, kredensial, atau kepemilikan data bisnis (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Kerapuhan mempengaruhi integritas dapat memungkinkan penyerang untuk memodifikasi data, menyuntikkan kode berbahaya, atau mengubah konfigurasi sistem (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Sebuah kerentanan dapat diedit dan nama paket yang lebih spesifik disediakan di mana data pengayaan tidak cukup atau SQL yang dihasilkan tidak cukup benar.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Sebuah item kerentanan dalam Open- Auditt dapat dianggap sebagai pada dasarnya query terhadap database Anda untuk menentukan potensi paparan Anda dengan laporan CVE yang diberikan. Sebuah kerentanan terdiri dari laporan CVE, bersama dengan pengayaan data dari FirstWave. Kedua item ini dikombinasikan untuk menghasilkan pencarian yang cocok yang secara otomatis diunduh dari FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Sebuah jaringan luas area (WAN) adalah jaringan komputer yang mencakup daerah geografis besar seperti kota, negara, atau Spanyol bahkan jarak antar benua. Sebuah WAN menggunakan saluran komunikasi yang menggabungkan banyak jenis media seperti saluran telepon, kabel, dan gelombang udara. WAN sering menggunakan fasilitas transmisi yang disediakan oleh operator umum, seperti perusahaan telepon. Teknologi WAN umumnya berfungsi pada tiga lapisan lebih rendah dari model referensi OSI: lapisan fisik, lapisan link data, dan lapisan jaringan.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, dll.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALL IP';

$GLOBALS["lang"]['API / Web Access'] = 'Akses API / Web';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentasi API';

$GLOBALS["lang"]['API Key required.'] = 'Kunci API diperlukan.';

$GLOBALS["lang"]['API Result'] = 'Hasil API';

$GLOBALS["lang"]['About'] = 'Tentang';

$GLOBALS["lang"]['Above are the only required items.'] = 'Di atas adalah satu-satunya item yang diperlukan.';

$GLOBALS["lang"]['Accept'] = 'Terima';

$GLOBALS["lang"]['Access Model'] = 'Model Akses';

$GLOBALS["lang"]['access_point'] = 'Titik Akses';

$GLOBALS["lang"]['Access Point'] = 'Titik Akses';

$GLOBALS["lang"]['access_token'] = 'Token Akses';

$GLOBALS["lang"]['Access Token'] = 'Token Akses';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Akses ke admin $share dan RPC menggunakan protokol SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Tanggal Ack';

$GLOBALS["lang"]['Ack Date'] = 'Tanggal Ack';

$GLOBALS["lang"]['ack_time'] = 'Waktu Ack';

$GLOBALS["lang"]['Ack Time'] = 'Waktu Ack';

$GLOBALS["lang"]['action'] = 'Aksi';

$GLOBALS["lang"]['Action'] = 'Aksi';

$GLOBALS["lang"]['action_audit'] = 'Audit Aksi';

$GLOBALS["lang"]['Action Audit'] = 'Audit Aksi';

$GLOBALS["lang"]['action_command'] = 'Perintah Aksi';

$GLOBALS["lang"]['Action Command'] = 'Perintah Aksi';

$GLOBALS["lang"]['action_date'] = 'Tanggal Aksi';

$GLOBALS["lang"]['Action Date'] = 'Tanggal Aksi';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Aksi Perangkat Diassign Ke Lokasi';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Aksi Perangkat Diassign Ke Lokasi';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Aksi Perangkat Diassign Untuk Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Aksi Perangkat Diassign Untuk Org';

$GLOBALS["lang"]['action_download'] = 'Aksi Unduh';

$GLOBALS["lang"]['Action Download'] = 'Aksi Unduh';

$GLOBALS["lang"]['action_uninstall'] = 'Hapus Aksi';

$GLOBALS["lang"]['Action Uninstall'] = 'Hapus Aksi';

$GLOBALS["lang"]['actioned'] = 'Actioned';

$GLOBALS["lang"]['Actioned'] = 'Actioned';

$GLOBALS["lang"]['actioned_by'] = 'Actioned By';

$GLOBALS["lang"]['Actioned By'] = 'Actioned By';

$GLOBALS["lang"]['actioned_date'] = 'Tanggal Yang Diisi';

$GLOBALS["lang"]['Actioned Date'] = 'Tanggal Yang Diisi';

$GLOBALS["lang"]['actions'] = 'Aksi';

$GLOBALS["lang"]['Actions'] = 'Aksi';

$GLOBALS["lang"]['Activate'] = 'Aktifkan';

$GLOBALS["lang"]['Activate Free License'] = 'Aktifkan Lisensi Bebas';

$GLOBALS["lang"]['Activate Key'] = 'Aktifkan Kunci';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktifkan lisensi Enterprise gratis';

$GLOBALS["lang"]['Active'] = 'Aktif';

$GLOBALS["lang"]['Active / Active'] = 'Aktif / Aktif';

$GLOBALS["lang"]['Active / Passive'] = 'Aktif / Passive';

$GLOBALS["lang"]['Active Directory'] = 'Direktori Aktif';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domain Direktori Aktif';

$GLOBALS["lang"]['active_directory_ou'] = 'Direktori Aktif Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Direktori Aktif Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Server Direktori Aktif';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Direktori Aktif dan OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Domain Ad';

$GLOBALS["lang"]['Ad Domain'] = 'Domain Ad';

$GLOBALS["lang"]['ad_group'] = 'Grup Ad';

$GLOBALS["lang"]['Ad Group'] = 'Grup Ad';

$GLOBALS["lang"]['ad_server'] = 'Server Ad';

$GLOBALS["lang"]['Ad Server'] = 'Server Ad';

$GLOBALS["lang"]['Add'] = 'Tambah';

$GLOBALS["lang"]['Add Credentials'] = 'Tambah Kredensial';

$GLOBALS["lang"]['Add Device'] = 'Tambah Perangkat';

$GLOBALS["lang"]['Add Device to Application'] = 'Tambahkan Perangkat ke Aplikasi';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Tambah Perangkat ke Cluster';

$GLOBALS["lang"]['Add Exception'] = 'Tambah Eksepsi';

$GLOBALS["lang"]['Add Field'] = 'Kolom Tambah';

$GLOBALS["lang"]['Add If'] = 'Tambah Jika';

$GLOBALS["lang"]['Add Policies from Device'] = 'Tambah Kebijakan dari Perangkat';

$GLOBALS["lang"]['Add Policy'] = 'Tambah Kebijakan';

$GLOBALS["lang"]['Add Then'] = 'Tambah Kemudian';

$GLOBALS["lang"]['Add Your Credentials'] = 'Tambah Kredensial Anda';

$GLOBALS["lang"]['Add image'] = 'Tambah gambar';

$GLOBALS["lang"]['additional_items'] = 'Objek Tambahan';

$GLOBALS["lang"]['Additional Items'] = 'Objek Tambahan';

$GLOBALS["lang"]['address'] = 'Alamat';

$GLOBALS["lang"]['Address'] = 'Alamat';

$GLOBALS["lang"]['Address any nonconformities'] = 'Alamat setiap nonkonformites';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Audit alamat temuan dan tindakan perbaikan';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Status Admin';

$GLOBALS["lang"]['Admin Status'] = 'Status Admin';

$GLOBALS["lang"]['advanced'] = 'Tingkat lanjut';

$GLOBALS["lang"]['Advanced'] = 'Tingkat lanjut';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Setelah Integrasi telah dibuat, ketika Anda melihat rincian dari Integrasi Anda akan melihat lapangan bernama Debug. Ini diatur ke no secara baku. Mengubah ke ya menyediakan log ekstra ketika sebuah Integrasi dijalankan. Debug tidak boleh dibiarkan sebagai ya. Hal ini karena keluaran debug akan berisi segala sesuatu yang diambil dari sistem eksternal - termasuk item seperti WMI dan SNMP kredensial. Opsi debug harus digunakan hanya ketika masalah telah terjadi dan Anda ingin menggali lebih dalam untuk melihat apakah Anda dapat menentukan mengapa.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Setelah menyelesaikan di atas, uninstall agen.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agen? Discovery? Kredensial?';

$GLOBALS["lang"]['agents'] = 'Agen';

$GLOBALS["lang"]['Agents'] = 'Agen';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Entri agen dapat dibuat yang menyatakan durasi, jaringan dan sistem operasi. Jika semua tes cocok, server kemudian meminta agen untuk melakukan tindakan. Jika tes apapun tidak ditetapkan, itu dikeluarkan dari <i>semua harus cocok</i> persyaratan.<br/><br/>Anda dapat membuat beberapa agen dan memeriksa server satu atau semua entri agen. Anda mungkin (misalnya) menspesifikasikan satu agen yang mengatakan <i>Bila agen IP berada dalam jaringan ini, atur lokasi _ id dari perangkat</i>.<br/><br/>Contoh lain mungkin tidak menjalankan audit sama sekali, melainkan mengunduh naskah dan menjalankannya. Jika agen dipasang dengan hak admin, Anda sekarang dapat mengelola mesin Anda tanpa membuka <strong>sebarang</strong> pelabuhan dari itu ke dunia.<p>Mengaktifkan agen canggih berarti seorang agen dapat diinstruksikan untuk mengunduh berkas apapun dan mengeksekusi perintah apapun. <strong>PERINGATAN</strong>: Hal ini datang dengan risiko keamanan. Konfigurasi ini akan <strong>hanya</strong> fungsi ketika berjalan Open-Audit menggunakan HTTPS dan valid (Certificate Authority disediakan) sertifikat untuk </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresif';

$GLOBALS["lang"]['Aland Islands'] = 'Kepulauan Aland';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'Albania';

$GLOBALS["lang"]['alert_style'] = 'Gaya Peringatan';

$GLOBALS["lang"]['Alert Style'] = 'Gaya Peringatan';

$GLOBALS["lang"]['Algeria'] = 'Aljazair';

$GLOBALS["lang"]['algorithm'] = 'Algoritma';

$GLOBALS["lang"]['Algorithm'] = 'Algoritma';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Semua';

$GLOBALS["lang"]['All IPs'] = 'Semua IP';

$GLOBALS["lang"]['All Policies'] = 'Semua Kebijakan';

$GLOBALS["lang"]['All Queued Items'] = 'Semua Objek Diantrikan';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Semua koleksi memakai format';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Semua sub- tabel perangkat berisi beberapa kolom penting.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Semua perangkat dengan jenis seperti komputer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Semua perangkat dengan jenis komputer atau router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Semua perangkat tanpa suatu tipe switch dan pencetak.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Semua perangkat tanpa suatu tipe switch dan pencetak. Pada dasarnya sama dengan permintaan di atas.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Semua opsi penemuan reguler juga tersedia untuk digunakan dalam Penemuan Benih Perangkat.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Semua tugas dapat dibuat sama di Windows dan Linux. Tugas memakai metode CRON untuk eksekusi penjadwalan.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Seiring dengan permintaan informasi ini, kami mengirim kembali ke data FirstWave yang akan memberikan kami beberapa informasi yang sangat diperlukan pada fitur penggunaan dan instalasi Anda.';

$GLOBALS["lang"]['Also can be created from the'] = 'Juga dapat dibuat dari';

$GLOBALS["lang"]['Alternatives'] = 'Alternatif';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Ruas';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Sebuah penemuan Direktori Aktif akan query Active Directory untuk daftar jaringan dan memindai IP terkait seperti penemuan Subnet biasa.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organisasi) adalah pemilik dari sebagian besar item dalam koleksi dalam Open- Auditt. Dengan pengecualian item global seperti <i>konfigurasi</i>(Dan barang-barang yang ada di muka bumi) sebagai milik Nabi saw. sendiri, yaitu berupa emas dan perak, serta barang-barang lainnya (adalah untuk selamanya.) Seorang pengguna memiliki akses ke item-item dalam koleksi, yang di bawah ke Org pengguna memiliki izin.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Sebuah aplikasi secara aktif menerima koneksi TCP, datagram UDP atau asosiasi SCTP di port ini. Menemukan ini sering menjadi tujuan utama dari pemindaian pelabuhan. Orang berpikiran sekuritytahu bahwa setiap port terbuka adalah jalan untuk menyerang. Penyerang dan penguji penis ingin mengeksploitasi port terbuka, sementara administrator mencoba untuk menutup atau melindungi mereka dengan firewall tanpa menggagalkan pengguna yang sah. Port terbuka juga menarik bagi pemindaian keamanan non-keamanan karena mereka menampilkan layanan yang tersedia untuk digunakan pada jaringan.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Suatu array <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Suatu array <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Sebuah array objek mewakili link eksternal ke informasi lebih lanjut.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Sebuah tebakan terdidik untuk identitas dan jenis perangkat';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Sebuah dokumen terenkripsi JSON berisi atribut yang diperlukan tergantung pada <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Sebuah jaringan swasta perusahaan adalah jaringan yang dibangun satu organisasi untuk menghubungkan lokasi kantornya (misalnya, situs produksi, kantor kepala, kantor-kantor terpencil, toko-toko) sehingga mereka dapat berbagi sumber daya komputer.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Entri dapat dibuat menggunakan antar muka web bila pengguna saat ini log masuk memiliki peran yang memuat';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Contoh tubuh JSON POST ada di bawah. Ini mesti dicantolkan ke butir formulir "data".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Contoh widget SQL menampilkan perangkat yang dihitung setiap lokasi.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Pengguna Open- Audit telah dikonfirmasi dan disahkan oleh server LDAP. Sukses.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Sebuah indikasi tingkat layanan yang diperlukan oleh situs ini.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Sebuah bidang internal yang menunjukkan jika penemuan telah selesai.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Port terbuka 124; filter dianggap terbuka (dan akan memicu deteksi perangkat).<br/>Sebelumnya, Open-Aud IT dianggap sebagai respon Nmap dari';

$GLOBALS["lang"]['An optional GeoCode'] = 'Sebuah pilihan GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Sandi opsional untuk memakai sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Dianalisa';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Dan akhirnya, klik Kirim untuk mengeksekusi penemuan ini.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Dan jika ada yang salah?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Dan klik terakhir <i>Kirim</i> untuk membuat metode Open-Auditt Auth untuk Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Dan terakhir, tidak begitu banyak masalah keamanan - lebih ketenangan pikiran. Struktur data terbuka dan didokumentasikan. Anda dapat melihat mereka';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Dan berikan nama _ mu - kami dengan rendah hati merekomendasikan Open-AuDIT, tapi nama _ mu akan tetap disitu Pastikan opsi untuk <i>Integrasikan aplikasi lain yang tak Anda temukan di galeri (Tanpa galeri)</i> dipilih. Dan kemudian klik <i>Buat<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Dan masih banyak lagi.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Annex A Controls';

$GLOBALS["lang"]['Antarctica'] = 'Antartika';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Paket AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua dan Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Port TCP apapun (koma dipisahkan, tidak ada spasi) Anda ingin mengecualikan dari penemuan ini. Hanya tersedia ketika menggunakan Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Port UDP apapun (koma dipisahkan, tidak ada spasi) anda ingin mengecualikan dari penemuan ini. Hanya tersedia ketika menggunakan Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Ada dokumentasi tambahan yang kau butuhkan.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Setiap catatan tambahan yang Anda peduli untuk membuat.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Atribut apapun yang diikuti oleh * mengindikasikan bahwa data CVSS kurang dari v4 digunakan untuk melengkapi bidang ini. Secara baku, kami mencoba untuk menggunakan bidang v4, namun jika mereka tidak berpenduduk kami akan mundur ke versi sebelumnya untuk atribut.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Setiap perangkat akan ditugaskan ke Org ini ketika mereka menjalankan naskah audit mereka (jika diatur).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Setiap perangkat akan ditugaskan ke Org ini ketika mereka menjalankan naskah audit mereka (jika diatur). Taut ke <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Setiap perangkat yang ditemukan akan ditugaskan ke Lokasi ini jika diatur. Taut ke <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Setiap perangkat yang ditemukan akan ditugaskan ke Lokasi ini ketika mereka menjalankan naskah audit mereka (jika diatur).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Setiap perangkat yang ditemukan akan ditugaskan ke Lokasi ini ketika mereka menjalankan naskah audit mereka (jika diatur). Taut ke <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Setiap perangkat yang ditemukan akan ditugaskan untuk Org ini jika diatur. Jika tidak ditetapkan, mereka ditugaskan ke <code>org_id</code> penemuan ini. Taut ke <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Setiap berkas yang ditemukan dalam cara ini disimpan dalam <i>dapat dieksekusi</i> tabel sebagai setiap komponen perangkat lain.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Setiap filter yang diperlukan. CATATAN: Ketika tipe = lalu lintas, ini merepresentasikan ikon font- awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Port khusus TCP yang ingin Anda uji (koma dipisahkan, tanpa spasi).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Port UDP tertentu yang ingin Anda uji (koma dipisahkan, tanpa spasi).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Setiap pengguna upload gambar ditempatkan di sini.';

$GLOBALS["lang"]['Application'] = 'Aplikasi';

$GLOBALS["lang"]['Application Definitions'] = 'Definisi Aplikasi';

$GLOBALS["lang"]['application_id'] = 'ID Aplikasi';

$GLOBALS["lang"]['Application ID'] = 'ID Aplikasi';

$GLOBALS["lang"]['Application Licenses'] = 'Licenses Aplikasi';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplikasi, Sistem Operasi atau Perangkat Keras.';

$GLOBALS["lang"]['applications'] = 'Aplikasi';

$GLOBALS["lang"]['Applications'] = 'Aplikasi';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Aplikasi hanya merupakan fitur Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Aplikasi diperkenalkan dalam Open-Auditt 2.2 dengan pandangan untuk memperluas konsep sebagai pengembangan lebih lanjut dibuat.';

$GLOBALS["lang"]['applied'] = 'Diapan';

$GLOBALS["lang"]['Applied'] = 'Diapan';

$GLOBALS["lang"]['Approved'] = 'Disetujui';

$GLOBALS["lang"]['Approved Packages'] = 'Disetujui Paket';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['Arabic'] = 'Arab';

$GLOBALS["lang"]['architecture'] = 'Arsitektur';

$GLOBALS["lang"]['Architecture'] = 'Arsitektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Anda yakin ingin menghapus butir masukan ini?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Anda yakin ingin menghapus butir keluaran ini?';

$GLOBALS["lang"]['Are you sure?'] = 'Kau yakin?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Kau yakin? Ini akan menghapus semua masukan antrian dan mencegah IP yang tersisa dari yang ditemukan.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Kau yakin? Ini akan mereset jumlah pemrosesan antrian dan dapat menyebabkan beban pada server.';

$GLOBALS["lang"]['area'] = 'Area';

$GLOBALS["lang"]['Area'] = 'Area';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Sebagai pengingat bagaimana otorisasi bekerja dalam Open- Audit, lihat';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Sebagai hasilnya, kami <strong>harus</strong> memiliki admin $share tersedia untuk pengguna kredensial penemuan. Harap periksa target Windows menyediakan mesin <i>tulis</i> akses untuk pengguna kredensial penemuan.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Seperti yang disebutkan di atas, pengembang tidak berbicara semua bahasa terjemahan yang ditawarkan. Ini berarti kita tidak dapat meninjau dengan akurasi, teks terjemahan. Kami mencoba untuk tinjauan singkat. Jika Anda melihat sesuatu yang tidak diterjemahkan dengan benar, Anda dapat mengubahnya sendiri. Sunting berkas bahasa yang sesuai (seperti di bawah) dan temukan teks yang akan diubah. Mungkin tidak ada dan Anda perlu untuk menambahkannya. Hanya mengubah teks, menyimpan file dan menyegarkan halaman Anda. Tidak perlu memulai ulang layanan apapun / daemon untuk itu untuk mengambil efek. Anda mungkin perlu memaksa menyegarkan peramban Anda.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Sesuai standar OpenSCAP - <i>Jangan coba mengimplementasikan setingan dalam benchmark ini tanpa terlebih dahulu menguji mereka dalam lingkungan yang tidak operasional. Pencipta benchmark ini menganggap tidak bertanggung jawab apapun untuk penggunaannya oleh pihak lain, dan tidak membuat jaminan, diekspresikan atau tersirat, tentang kualitas, kepercayaan, atau karakteristik lainnya.</i><br/><br/>Serius, jangan membabi buta mulai <i>memperbaiki</i> isu mengungkapkan setelah menjalankan benchmark tanpa terlebih dahulu benar-benar pengujian dalam non-produksi, lingkungan identik.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Sesuai atribut untuk lingkungan perangkat. Produksi, Pelatihan, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Sebagaimana naskah audit menggunakan Bash, Anda dapat menggunakan wildcard dari * ketika Anda mendefinisikan direktori dan pengecualian.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Seperti biasa, pergi ke menu Aboge Manage ----Integrations Create Integration. Seperti di atas, jika Anda berjalan pada Linux dan Anda memiliki NMIS pada server yang sama, Anda tidak perlu melakukan apa pun selain klik <i>Kirim</i>. Aku tidak bisa membuatnya lebih mudah dari itu.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Saat kami menjalankan Pencarian dan mengumpulkan hasil perangkat kami mengisi daftar jaringan. Fitur Subnets yang diberkati menggunakan daftar jaringan ini hanya untuk menerima data dari perangkat tersebut.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Ketika Anda memiliki Kolektor terdaftar, silakan pilih di mana untuk mengeksekusi penemuan ini.';

$GLOBALS["lang"]['Ask me later'] = 'Tanya aku nanti.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Mintalah bantuan masyarakat atau kontribusi jawaban bagi orang lain.';

$GLOBALS["lang"]['aspect_ratio'] = 'Rasio Aspek';

$GLOBALS["lang"]['Aspect Ratio'] = 'Rasio Aspek';

$GLOBALS["lang"]['Asset ID'] = 'ID Asset';

$GLOBALS["lang"]['asset_ident'] = 'Identasi Asset';

$GLOBALS["lang"]['Asset Ident'] = 'Identasi Asset';

$GLOBALS["lang"]['asset_number'] = 'Nomor Aset';

$GLOBALS["lang"]['Asset Number'] = 'Nomor Aset';

$GLOBALS["lang"]['asset_tag'] = 'Tag Asset';

$GLOBALS["lang"]['Asset Tag'] = 'Tag Asset';

$GLOBALS["lang"]['Assign Device to Application'] = 'Atur Perangkat ke Aplikasi';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Atur Perangkat ke Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Atur Perangkat ke Lokasi';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Atur Perangkat ke Organisasi';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Atur Perangkat ke Lokasi';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Atur Perangkat ke Organisasi';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Atur manajer atau tim IMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Tugaskan Operator';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Masukkan perangkat yang diaudit ke Org ini. Tinggalkan kosong untuk meninggalkan perangkat pada Org (atau untuk mengatur baku).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Atur Perangkat ke Lokasi';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Atur perangkat ke suatu Org';

$GLOBALS["lang"]['Assigned To'] = 'Ditugaskan Ke';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Menunjuk Perangkat Yang DiTemukan';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Saat ini kita dapat menggunakan netstat _ port, perangkat lunak dan pengguna.';

$GLOBALS["lang"]['attached_device_id'] = 'ID Perangkat Yang Lampirkan';

$GLOBALS["lang"]['Attached Device ID'] = 'ID Perangkat Yang Lampirkan';

$GLOBALS["lang"]['attached_to'] = 'Tercantol Ke';

$GLOBALS["lang"]['Attached To'] = 'Tercantol Ke';

$GLOBALS["lang"]['attachment'] = 'Lampiran';

$GLOBALS["lang"]['Attachment'] = 'Lampiran';

$GLOBALS["lang"]['attachments'] = 'Lampiran';

$GLOBALS["lang"]['Attachments'] = 'Lampiran';

$GLOBALS["lang"]['attack_complexity'] = 'Kompleksitas Serangan';

$GLOBALS["lang"]['Attack Complexity'] = 'Kompleksitas Serangan';

$GLOBALS["lang"]['attack_requirements'] = 'Serangan Permintaan';

$GLOBALS["lang"]['Attack Requirements'] = 'Serangan Permintaan';

$GLOBALS["lang"]['attack_vector'] = 'Serangan Vektor';

$GLOBALS["lang"]['Attack Vector'] = 'Serangan Vektor';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Mencoba untuk ping perangkat jika kita tidak audit localhost.';

$GLOBALS["lang"]['Attribute'] = 'Atribut';

$GLOBALS["lang"]['attributes'] = 'Atribut';

$GLOBALS["lang"]['Attributes'] = 'Atribut';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atribut disimpan bagi Open-Auditt untuk digunakan untuk bidang tertentu, saat ini semua bidang didasarkan pada perangkat, lokasi, orgs dan query tabel. Atribut yang dapat Anda sunting diasosiasikan dengan kolom berikut: Kelas, Lingkungan, Status & Tipe.';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Log Audit';

$GLOBALS["lang"]['Audit Log'] = 'Log Audit';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Audit PC saya';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Masukan Hasil Audit';

$GLOBALS["lang"]['Audit Software'] = 'Perangkat Lunak Audit';

$GLOBALS["lang"]['Audit Status'] = 'Status Audit';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Produk';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audit Perangkat';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'Agustus';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Metode Auth';

$GLOBALS["lang"]['Authenticate only'] = 'Hanya otentikasi';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Frasa Sandi Otentikasi';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protokol Otentikasi';

$GLOBALS["lang"]['authority_key_ident'] = 'Identasi Kunci Otoritas';

$GLOBALS["lang"]['Authority Key Ident'] = 'Identasi Kunci Otoritas';

$GLOBALS["lang"]['Auto'] = 'Otomatis';

$GLOBALS["lang"]['auto_renew'] = 'Perbarui Otomatis';

$GLOBALS["lang"]['Auto Renew'] = 'Perbarui Otomatis';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto dihuni oleh Open- Audit Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Dapat otomatis';

$GLOBALS["lang"]['Automatable'] = 'Dapat otomatis';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Secara otomatis berpenduduk berdasarkan OS Kolektor.';

$GLOBALS["lang"]['availability'] = 'Ketersediaan';

$GLOBALS["lang"]['Availability'] = 'Ketersediaan';

$GLOBALS["lang"]['Available Benchmarks'] = 'Benchmarks Tersedia';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Menunggu Analisis';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaijan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaijan';

$GLOBALS["lang"]['Azure Active Directory'] = 'Direktori Aktif Azure';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'Total BTU';

$GLOBALS["lang"]['Backbone network'] = 'Jaringan tulang belakang';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Banned';

$GLOBALS["lang"]['Banned Packages'] = 'Paket Berban';

$GLOBALS["lang"]['bar_code'] = 'Kode Batang';

$GLOBALS["lang"]['Bar Code'] = 'Kode Batang';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'DN Dasar';

$GLOBALS["lang"]['base_score'] = 'Nilai Dasar';

$GLOBALS["lang"]['Base Score'] = 'Nilai Dasar';

$GLOBALS["lang"]['base_severity'] = 'Severity Dasar';

$GLOBALS["lang"]['Base Severity'] = 'Severity Dasar';

$GLOBALS["lang"]['based_on'] = 'Berdasarkan Pada';

$GLOBALS["lang"]['Based On'] = 'Berdasarkan Pada';

$GLOBALS["lang"]['baseline'] = 'Dasar';

$GLOBALS["lang"]['Baseline'] = 'Dasar';

$GLOBALS["lang"]['baseline_id'] = 'ID Dasar';

$GLOBALS["lang"]['Baseline ID'] = 'ID Dasar';

$GLOBALS["lang"]['baselines'] = 'Baselin';

$GLOBALS["lang"]['Baselines'] = 'Baselin';

$GLOBALS["lang"]['baselines_policies'] = 'Kebijakan Baselin';

$GLOBALS["lang"]['Baselines Policies'] = 'Kebijakan Baselin';

$GLOBALS["lang"]['Baselines Policy'] = 'Kebijakan Baselin';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Rincian Kebijakan Baseline';

$GLOBALS["lang"]['baselines_results'] = 'Hasil Baselin';

$GLOBALS["lang"]['Baselines Results'] = 'Hasil Baselin';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines dapat membandingkan port netstat, pengguna dan perangkat lunak.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Baseline memungkinkan Anda untuk menggabungkan data audit dengan satu set atribut yang sebelumnya telah didefinisikan (Anda baseline) untuk menentukan kepatuhan dari perangkat.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Baselin untuk Perbandingan Perangkat';

$GLOBALS["lang"]['Basic'] = 'Dasar';

$GLOBALS["lang"]['Basque'] = 'Basque';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Karena kami mencoba untuk setransparan mungkin, inilah data sebenarnya yang kami kirim.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Mampu menentukan mesin mana yang dikonfigurasi dengan cara yang sama adalah bagian utama sistem administrasi dan audit - dan sekarang melaporkan bahwa akan dibuat sederhana dan otomatis. Setelah Anda mendefinisikan baseline Anda secara otomatis akan berjalan melawan satu set perangkat pada jadwal yang telah ditentukan. Keluaran dari baselees yang dieksekusi ini akan tersedia untuk penayangan web, mengimpor ke dalam sistem pihak ketiga atau bahkan sebagai laporan yang dicetak.<br/><br/>Untuk audit dan tujuan manajemen dapat menguntungkan untuk baseline perangkat individu terhadap perangkat tetap, dikenal baik. Baseline memungkinkan Anda untuk menggabungkan data audit dengan satu set atribut yang sebelumnya telah didefinisikan (Anda baseline) untuk menentukan kepatuhan dari perangkat.';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Di bawah ini adalah contoh dari format csv yang diperlukan.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Di bawah baris ini adalah di mana variabel disuntikkan ke dalam skrip. Berikut dari contoh sebelumnya, skrip audit Linux berpopulasi dengan direktori kami seperti ini';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Di bawah ini Anda dapat melihat contoh Org Chart. Jika pengguna memiliki izin pada <i>Keuangan A</i> Org, mereka juga memiliki izin pada keturunan Orgs dari Dept A, B & C. Ini adalah terlepas dari koleksi yang diminta.<br/><br/>Jika koleksi yang diminta memungkinkan ascendants, maka pengguna juga akan memiliki akses ke Perusahaan # 1 dan Buatannya item Org. Demikian itu (kewajiban membayar fidyah) bagi orang-orang yang takut (kepada Allah).<br/><br/>Catatan - Seorang pengguna mungkin memiliki akses ke permintaan dari Org Baku, tapi itu adalah permintaan itu sendiri bukan hasilnya. Hasilnya hanya akan menampilkan perangkat bahwa pengguna memiliki akses ke - perangkat IE dari Keuangan A dan Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID Benchmark';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Tugas dibuat secara otomatis ketika benchmark dibuat.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Eksekusi dan pemrosesan Benchmark dapat memakan waktu yang lama, sehingga preferensi untuk menjadwalkan mereka dan tidak menjalankannya ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Pengecualian Benchmarks';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Pengecualian Benchmarks';

$GLOBALS["lang"]['benchmarks_log'] = 'Log Benchmarks';

$GLOBALS["lang"]['Benchmarks Log'] = 'Log Benchmarks';

$GLOBALS["lang"]['benchmarks_policies'] = 'Kebijakan Benchmarks';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Kebijakan Benchmarks';

$GLOBALS["lang"]['benchmarks_result'] = 'Hasil Penanda';

$GLOBALS["lang"]['Benchmarks Result'] = 'Hasil Penanda';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks diciptakan dengan menyediakan sistem operasi dan Versi, dikombinasikan dengan panduan tertentu dan daftar mesin untuk melaksanakannya. Setelah penciptaan, benchmarks dieksekusi terhadap daftar mesin pada jadwal.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks untuk Konfigurasi Praktis Terbaik';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks menyediakan rekomendasi keamanan bagi komputer Anda, menggunakan alat dan kebijakan OpenSCAP.<p><i>Dari laman OpenSCAP:</i> Dalam dunia yang terus-mengubah keamanan komputer di mana kerentanan baru sedang ditemukan dan ditambal setiap hari, menegakkan keterlibatan keamanan harus proses yang terus menerus. Hal ini juga memerlukan cara untuk membuat penyesuaian terhadap kebijakan, serta penilaian periodik dan pengawasan risiko. ekosistem OpenSCAP menyediakan alat dan kebijakan yang dapat diubah dengan cepat, dengan biaya-efektif dan fleksibel dalam proses-proses ini.</p>';

$GLOBALS["lang"]['Benefits'] = 'Keuntungan';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Terbaik Praktek';

$GLOBALS["lang"]['Best Practises'] = 'Terbaik Praktek';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Tubuh';

$GLOBALS["lang"]['Body'] = 'Tubuh';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y / n';

$GLOBALS["lang"]['boot_device'] = 'Perangkat Boot';

$GLOBALS["lang"]['Boot Device'] = 'Perangkat Boot';

$GLOBALS["lang"]['bootable'] = 'Dapat dibuka';

$GLOBALS["lang"]['Bootable'] = 'Dapat dibuka';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia dan Herzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Kedua bentuk';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugis Brasil';

$GLOBALS["lang"]['Breaking it Down'] = 'Breaking it Down';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Wilayah Samudera Hindia (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Kepulauan Virgin Inggris';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Ramban bawah pohon ke Akar Konsol - > Layanan Komponen - > Komputer - > Komputer saya<br/><br/>Klik kanan pada <i>Komputer saya</i> dan memilih properti<br/><br/>Pilih <i>Properti Baku</i> tab';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Nomor Build';

$GLOBALS["lang"]['Build Number'] = 'Nomor Build';

$GLOBALS["lang"]['build_number_full'] = 'Build Nomor Penuh';

$GLOBALS["lang"]['Build Number Full'] = 'Build Nomor Penuh';

$GLOBALS["lang"]['Building'] = 'Bangunan';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Membangun kepercayaan dengan klien dan mitra';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Sunting Blak';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Formulir Sunting Bulk';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atribut Perangkat Editing Bulk';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Pilihan penyuntingan bulk tidak akan tetap dipilih setelah mengklik halaman berikutnya.';

$GLOBALS["lang"]['Burkina Faso'] = 'Kryina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Permintaan Bisnis';

$GLOBALS["lang"]['Business Requirements'] = 'Permintaan Bisnis';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Tapi aku Hanya Memiliki Mesin Klien Windows Tersedia!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Tapi aku tidak ingin harus mengubah file bahasa setiap kali saya update!';

$GLOBALS["lang"]['Buy'] = 'Beli';

$GLOBALS["lang"]['Buy More'] = 'Beli Lebih';

$GLOBALS["lang"]['Buy More Licenses'] = 'Beli Lebih Licenses';

$GLOBALS["lang"]['By'] = 'Oleh';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Secara baku kami mengintegrasikan semua perangkat dengan atribut nmis _ management mereka diatur ke <i>y</i>. Dengan 4.2.0 kami juga mengirimkan aturan yang mengatakan <i>Jika kita menemukan perangkat dan memiliki SNMP OID valid, tandai perangkat yang dikelola oleh NMIS</i>. Jelas Anda dapat menonaktifkan ini jika bukan apa yang Anda inginkan.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Secara baku, kami melewatkan validasi sertifikat karena pelanggan cenderung menggunakan sertifikat yang ditandatangani sendiri. Untuk mengaktifkan validasi sertifikat, sunting berkas di bawah ini';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfigurasi';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfigurasi';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE dengan status menerima, menunggu analisis, menjalani analisis, ditolak. CVE ini tidak berisi informasi yang cukup untuk mengaktifkan kita untuk membuat kueri SQL yang benar.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Dihitung dari penemuan.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Menghitung jumlah total alamat IP yang valid untuk jaringan ini.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Diukur setelah selesai, waktu yang diambil untuk mengeksekusi item ini.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi sebuah representasi JSON dari perangkat dalam integrasi ini. Setiap taut ke <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi perwakilan JSON dari lokasi dalam integrasi ini. Setiap taut ke <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi jumlah perangkat yang dipilih dari Open- Auditt.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi jumlah perangkat yang dipilih sistem eksternal.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi jumlah perangkat yang akan diperbarui dalam sistem eksternal.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Dikalkulasi ketika integrasi dijalankan dan berisi jumlah perangkat yang diperbarui dalam Open- Auditt.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Memanggil sebuah command prompt dengan mengklik Awal dan mencari <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kamboja';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Jaringan Area Kampus';

$GLOBALS["lang"]['Campus area network'] = 'Jaringan area kampus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Bisa <code>active</code>, <code>passive</code> atau kosong.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Bisa <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> atau kosong.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Bisa <code>auto</code>, <code>fixed</code>, <code>other</code> atau kosong.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Bisa <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> atau kosong.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Bisa <code>line</code>, <code>pie</code> atau <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Bisa <code>user</code> atau <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Dapat diatur oleh penemuan atau pengguna.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Dapat diatur oleh penemuan atau pengguna. Gunakan ID dari tabel lokasi.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Dapatkah pengguna menyunting item ini.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Batal';

$GLOBALS["lang"]['capabilities'] = 'Kemampuan';

$GLOBALS["lang"]['Capabilities'] = 'Kemampuan';

$GLOBALS["lang"]['Capacity'] = 'Kapasitas';

$GLOBALS["lang"]['Cape Verde'] = 'Cape Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalis';

$GLOBALS["lang"]['caption'] = 'Kapsi';

$GLOBALS["lang"]['Caption'] = 'Kapsi';

$GLOBALS["lang"]['Catalan'] = 'Catalan';

$GLOBALS["lang"]['Cayman Islands'] = 'Kepulauan Cayman';

$GLOBALS["lang"]['Cellular Details'] = 'Rincian Seluler';

$GLOBALS["lang"]['Central African Republic'] = 'Republik Afrika Tengah';

$GLOBALS["lang"]['certificate'] = 'Sertifikat';

$GLOBALS["lang"]['Certificate'] = 'Sertifikat';

$GLOBALS["lang"]['certificate_file'] = 'Berkas Sertifikat';

$GLOBALS["lang"]['Certificate File'] = 'Berkas Sertifikat';

$GLOBALS["lang"]['certificate_name'] = 'Nama Sertifikat';

$GLOBALS["lang"]['Certificate Name'] = 'Nama Sertifikat';

$GLOBALS["lang"]['certificates'] = 'Sertifikat';

$GLOBALS["lang"]['Certificates'] = 'Sertifikat';

$GLOBALS["lang"]['Certification'] = 'Sertifikasi';

$GLOBALS["lang"]['Certification Audit'] = 'Audit Sertifikasi';

$GLOBALS["lang"]['Certification Process'] = 'Proses Sertifikasi';

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['Change'] = 'Ubah';

$GLOBALS["lang"]['change_id'] = 'Ubah ID';

$GLOBALS["lang"]['Change ID'] = 'Ubah ID';

$GLOBALS["lang"]['change_log'] = 'Ubah Log';

$GLOBALS["lang"]['Change Log'] = 'Ubah Log';

$GLOBALS["lang"]['Change Logs'] = 'Ubah Log';

$GLOBALS["lang"]['change_type'] = 'Ubah Tipe';

$GLOBALS["lang"]['Change Type'] = 'Ubah Tipe';

$GLOBALS["lang"]['check_minutes'] = 'Periksa Menit';

$GLOBALS["lang"]['Check Minutes'] = 'Periksa Menit';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Periksa SSH di port ini';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Periksa pelabuhan ini untuk layanan SSH apapun.';

$GLOBALS["lang"]['Chile'] = 'Chili';

$GLOBALS["lang"]['China'] = 'Cina';

$GLOBALS["lang"]['Chinese'] = 'Cina';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Cina (tradisional)';

$GLOBALS["lang"]['Choose'] = 'Pilih';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Pilih (pilih OS pertama)';

$GLOBALS["lang"]['Choose a Device'] = 'Pilih Perangkat';

$GLOBALS["lang"]['Choose a Table'] = 'Pilih Tabel';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Pilih jenis tugas dari drop pertama. Ini akan mengatur ruas tambahan yang diperlukan tergantung pada jenis tugas.';

$GLOBALS["lang"]['Christmas Island'] = 'Pulau Natal';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Cacah Circuit';

$GLOBALS["lang"]['Circuit Count'] = 'Cacah Circuit';

$GLOBALS["lang"]['circuit_status'] = 'Status Circuit';

$GLOBALS["lang"]['Circuit Status'] = 'Status Circuit';

$GLOBALS["lang"]['city'] = 'Kota';

$GLOBALS["lang"]['City'] = 'Kota';

$GLOBALS["lang"]['class'] = 'Kelas';

$GLOBALS["lang"]['Class'] = 'Kelas';

$GLOBALS["lang"]['class_text'] = 'Teks Kelas';

$GLOBALS["lang"]['Class Text'] = 'Teks Kelas';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klik <i>Rahasia klien baru</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klik Kirim untuk Jalankan';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klik pada <i>Properti</i> di bawah <i>Kelola</i> tajuk dalam kolom menu pusat. Salin <i>URL Akses Pengguna</i>. Setelah disalin, tempelkan ke penyunting teks yout. Anda harus menyalin satu bagian dari bidang ini.<br/><br/>Bidang contoh kami terlihat seperti ini<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Bagian yang kita butuhkan adalah <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (ID penyewa). Ini digunakan dalam Open-Audit sebagai <i>Tenant</i> lapangan, jadi paste di sana.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klik pada Registrasi App untuk membuat Aplikasi baru, kemudian klik Registrasi Aplikasi Baru. Berikan sebuah nama (saya memakai Open-Auditt), pilih aplikasi Web / API sebagai jenisnya dan sediakan URL apapun (URL tidak penting) dan sekarang klik Buat.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klik pada OK dan tutup jendela DCOMCNFG.<br/><br/>Perubahan di atas akan memerlukan reboot untuk mengambil efek.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klik pada aplikasi yang baru saja Anda buat. ID Aplikasi yang ditampilkan adalah ID Klien.<br/><br/>Untuk membuat rahasia klien, klik Pengaturan, lalu Kunci. Menyediakan nama kunci dan memilih tanggal kadaluarsa yang sesuai, kemudian klik Simpan.<br/><br/>Nilai akan berpenduduk untuk Anda - ini adalah Rahasia Klien.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klik tombol Hapus untuk menghapus perangkat contoh dari Open- Auditt.<br/>Ini akan menghapus perangkat di bawah dari basis data. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klik tombol Sunting untuk <i>SaML Dasar Konfigurasi</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klik tombol Impor di bawah ini untuk mengisi Open-Auditt dengan data perangkat contoh.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klik ikon di sebelah kanan ruas yang ingin Anda sunting. Ubah ruas dan klik ikon hijau untuk mengirimkan.';

$GLOBALS["lang"]['Client ID'] = 'ID Klien';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID klien dan Rahasia';

$GLOBALS["lang"]['client_ident'] = 'Identasi Klien';

$GLOBALS["lang"]['Client Ident'] = 'Identasi Klien';

$GLOBALS["lang"]['client_secret'] = 'Rahasia Klien';

$GLOBALS["lang"]['Client Secret'] = 'Rahasia Klien';

$GLOBALS["lang"]['client_site_name'] = 'Nama Lokasi Klien';

$GLOBALS["lang"]['Client Site Name'] = 'Nama Lokasi Klien';

$GLOBALS["lang"]['Close'] = 'Tutup';

$GLOBALS["lang"]['Closed'] = 'Tutup';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Rincian Awan';

$GLOBALS["lang"]['Cloud Discovery'] = 'Discovery Awan';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Discovery Cloud dan Auditing';

$GLOBALS["lang"]['cloud_id'] = 'ID Cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID Cloud';

$GLOBALS["lang"]['cloud_log'] = 'Log Awan';

$GLOBALS["lang"]['Cloud Log'] = 'Log Awan';

$GLOBALS["lang"]['cloud_name'] = 'Nama Awan';

$GLOBALS["lang"]['Cloud Name'] = 'Nama Awan';

$GLOBALS["lang"]['Cloud Network'] = 'Jaringan Awan';

$GLOBALS["lang"]['clouds'] = 'Awan';

$GLOBALS["lang"]['Clouds'] = 'Awan';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Awan adalah fitur yang tersedia untuk pelanggan Open-Auditt Enterprise yang berlisensi.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'ID Cluster';

$GLOBALS["lang"]['Cluster ID'] = 'ID Cluster';

$GLOBALS["lang"]['cluster_name'] = 'Nama Cluster';

$GLOBALS["lang"]['Cluster Name'] = 'Nama Cluster';

$GLOBALS["lang"]['cluster_type'] = 'Tipe Cluster';

$GLOBALS["lang"]['Cluster Type'] = 'Tipe Cluster';

$GLOBALS["lang"]['clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Clusters dan Pelaporan';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kepulauan Cocos (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Koleksi';

$GLOBALS["lang"]['Collections'] = 'Koleksi';

$GLOBALS["lang"]['Collector'] = 'Kolektor';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolektor (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Kolektor / Server adalah fitur hanya Enterprise. Pelanggan Enterprise menerima satu lisensi kolektor gratis. Lisensi Kolektor tambahan dapat dibeli seperti yang diperlukan.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Kolektor / Server dirancang sehingga Anda dapat memiliki remote atau <i>kolektor</i> instance of Open- Auditt running on a remote machine. Alat kolektor itu mungkin berada di zona keamanan lain, jaringan internet, instansi host awan atau di situs pelanggan. Kolektor jauh kemudian melakukan semua penemuan dan audit perangkat secara lokal menghindari jaringan dan api kompleksitas. Kolektor sekali telah terdaftar sepenuhnya dikendalikan oleh <i>server</i>. Ini berarti Anda hanya perlu koneksi HTTP atau HTTP dari Kolektor ke Server.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Dashboard Kolektor';

$GLOBALS["lang"]['Collector Name'] = 'Nama Kolektor';

$GLOBALS["lang"]['collector_uuid'] = 'Uuid Kolektor';

$GLOBALS["lang"]['Collector Uuid'] = 'Uuid Kolektor';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Tugas kolektor secara otomatis diatur ketika fitur kolektor diaktifkan. Tugas kolektor tidak boleh dibuat secara langsung oleh pengguna. Tugas kolektor dapat memiliki frekuensi mereka diedit setelah penciptaan. Jika server Open- Auditt memiliki Kolektor melaporkan kepadanya, penurunan tambahan tersedia. Anda dapat memilih ini untuk menentukan collector mana yang harus dijalankan. Hanya tugas Discovery yang didukung untuk Kolektor.';

$GLOBALS["lang"]['Collectors'] = 'Kolektor';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kolektor dapat beroperasi di salah satu dari dua mode, kolektor dan Standalone. Ketika dalam mode collector, instansi Open-Auditt dikelola oleh server utama. Ketika dalam mode Stand Alone, instansi dikelola lokal dan maju perangkat yang ditemukan ke server utama.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Kolektor bagi Discovery Jauh';

$GLOBALS["lang"]['Colombia'] = 'Kolombia';

$GLOBALS["lang"]['color'] = 'Warna';

$GLOBALS["lang"]['Color'] = 'Warna';

$GLOBALS["lang"]['Column'] = 'Kolom';

$GLOBALS["lang"]['Columns'] = 'Kolom';

$GLOBALS["lang"]['command'] = 'Perintah';

$GLOBALS["lang"]['Command'] = 'Perintah';

$GLOBALS["lang"]['command_options'] = 'Opsi Perintah';

$GLOBALS["lang"]['Command Options'] = 'Opsi Perintah';

$GLOBALS["lang"]['command_output'] = 'Keluaran Perintah';

$GLOBALS["lang"]['Command Output'] = 'Keluaran Perintah';

$GLOBALS["lang"]['command_status'] = 'Status Perintah';

$GLOBALS["lang"]['Command Status'] = 'Status Perintah';

$GLOBALS["lang"]['command_time_to_execute'] = 'Waktu Perintah Untuk Dieksekusi';

$GLOBALS["lang"]['Command Time To Execute'] = 'Waktu Perintah Untuk Dieksekusi';

$GLOBALS["lang"]['comment'] = 'Komentar';

$GLOBALS["lang"]['Comment'] = 'Komentar';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komentar di bawah garis (sekitar baris 49 atau lebih). Hanya menempatkan hash # di awal baris.';

$GLOBALS["lang"]['comments'] = 'Komentar';

$GLOBALS["lang"]['Comments'] = 'Komentar';

$GLOBALS["lang"]['commercial'] = 'Komersial';

$GLOBALS["lang"]['Commercial'] = 'Komersial';

$GLOBALS["lang"]['Commercial Support'] = 'Dukungan Komersial';

$GLOBALS["lang"]['common_name'] = 'Nama Umum';

$GLOBALS["lang"]['Common Name'] = 'Nama Umum';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Umumnya disebut sebagai klien.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Umumnya disebut sebagai Rahasia Klien.';

$GLOBALS["lang"]['Community'] = 'Komunitas';

$GLOBALS["lang"]['Community Questions'] = 'Pertanyaan Komunitas';

$GLOBALS["lang"]['Community String'] = 'String Komunitas';

$GLOBALS["lang"]['Comoros the'] = 'Comoros';

$GLOBALS["lang"]['Compact'] = 'Kompak';

$GLOBALS["lang"]['Company'] = 'Perusahaan';

$GLOBALS["lang"]['Complete these steps.'] = 'Selesaikan langkah-langkah ini.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksitas serangan (Rendah atau Tinggi).';

$GLOBALS["lang"]['Component Table'] = 'Tabel Komponen';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponen (Semua Perangkat)';

$GLOBALS["lang"]['Compute'] = 'Komputer';

$GLOBALS["lang"]['Condition'] = 'Kondisi';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Melakukan penilaian risiko';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Lakukan kesadaran dan program pelatihan';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Rapat ulasan manajemen dilakukan';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Lakukan audit pengawasan rutin (biasanya setiap tahun)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Dilakukan oleh tubuh terakreditasi dalam dua tahap';

$GLOBALS["lang"]['Config'] = 'Konfigurasi';

$GLOBALS["lang"]['Config Default, currently '] = 'Default Konfigurasi, saat ini ';

$GLOBALS["lang"]['config_file'] = 'Berkas Konfigurasi';

$GLOBALS["lang"]['Config File'] = 'Berkas Konfigurasi';

$GLOBALS["lang"]['config_manager_error_code'] = 'Kode Galat Manajer Konfigurasi';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Kode Galat Manajer Konfigurasi';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Peran Dapat Dikonfirmasi Berdasarkan Kontrol Akses (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfigurasi';

$GLOBALS["lang"]['Configuration'] = 'Konfigurasi';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigurasi Ubah Deteksi dan Pelaporan';

$GLOBALS["lang"]['Configure'] = 'Atur';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Mengkonfigurasi agen server-side untuk melakukan audit pada jadwal';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Tersambung Ke';

$GLOBALS["lang"]['connection'] = 'Koneksi';

$GLOBALS["lang"]['Connection'] = 'Koneksi';

$GLOBALS["lang"]['Connection Options'] = 'Opsi Koneksi';

$GLOBALS["lang"]['connection_status'] = 'Status Koneksi';

$GLOBALS["lang"]['Connection Status'] = 'Status Koneksi';

$GLOBALS["lang"]['connections'] = 'Koneksi';

$GLOBALS["lang"]['Connections'] = 'Koneksi';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Pertimbangkan disaring Ports Buka';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Pertimbangkan buka £124; disaring Ports Buka';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konsultasi, implementasi dan layanan lain tersedia melalui';

$GLOBALS["lang"]['contact'] = 'Kontak';

$GLOBALS["lang"]['Contact'] = 'Kontak';

$GLOBALS["lang"]['contact_name'] = 'Nama Kontak';

$GLOBALS["lang"]['Contact Name'] = 'Nama Kontak';

$GLOBALS["lang"]['contained_in'] = 'Tersimpan Masuk';

$GLOBALS["lang"]['Contained In'] = 'Tersimpan Masuk';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Berisi rincian objek JSON widget yang terkait dan posisi mereka.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Berisi bidang yang menentukan jika kita harus menggunakan pilihan penemuan ssh, smp dan wmi. Sebuah objek JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Konteks & Kepemimpinan';

$GLOBALS["lang"]['Context Engine ID'] = 'ID Mesin Konteks';

$GLOBALS["lang"]['Context Name'] = 'Nama Konteks';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Terus-menerus meningkatkan IMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Obligasi Kontratual';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obligasi Kontratual';

$GLOBALS["lang"]['Cook Islands'] = 'Kepulauan Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Salin dan tempel hasil audit';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Salin dan tempelkan di bawah ke forum, contoh lain Open- Audit atau di tempat lain Anda perlu menyediakan item ini.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Salin <i>ID Aplikasi</i> field dan paste ke Open- Auditt <i>ID Klien</i> lapangan untuk Auth Method baru.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Salin <i>ID Klien</i> dan paste ke dalam Open-Audit <i>ID Klien</i> lapangan.<br/>Jika tidak ada rahasia, klik <i>Hasilkan rahasia baru</i>, kemudian salin nilai dan paste ke Open- Auditt <i>Rahasia Klien</i> lapangan.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Salin nilai dan tempelkan ke dalam bentuk Open- Audite untuk <i>Rahasia Klien</i> lapangan.';

$GLOBALS["lang"]['core_count'] = 'Cacah Inti';

$GLOBALS["lang"]['Core Count'] = 'Cacah Inti';

$GLOBALS["lang"]['Cores'] = 'Inti';

$GLOBALS["lang"]['cost_center'] = 'Pusat Biaya';

$GLOBALS["lang"]['Cost Center'] = 'Pusat Biaya';

$GLOBALS["lang"]['cost_code'] = 'Kode Biaya';

$GLOBALS["lang"]['Cost Code'] = 'Kode Biaya';

$GLOBALS["lang"]['Costa Rica'] = 'Kosta Rika';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'Cacah';

$GLOBALS["lang"]['Count'] = 'Cacah';

$GLOBALS["lang"]['country'] = 'Negara';

$GLOBALS["lang"]['Country'] = 'Negara';

$GLOBALS["lang"]['country_code'] = 'Kode Negara';

$GLOBALS["lang"]['Country Code'] = 'Kode Negara';

$GLOBALS["lang"]['cpu_count'] = 'Cacah Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Cacah Cpu';

$GLOBALS["lang"]['Create'] = 'Buat';

$GLOBALS["lang"]['Create Example Devices'] = 'Buat Perangkat Contoh';

$GLOBALS["lang"]['create_external_count'] = 'Buat Cacah Eksternal';

$GLOBALS["lang"]['Create External Count'] = 'Buat Cacah Eksternal';

$GLOBALS["lang"]['create_external_from_internal'] = 'Buat Eksternal Dari Internal';

$GLOBALS["lang"]['Create External From Internal'] = 'Buat Eksternal Dari Internal';

$GLOBALS["lang"]['Create File'] = 'Buat Berkas';

$GLOBALS["lang"]['Create Geocode'] = 'Buat Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Buat Cacah Internal';

$GLOBALS["lang"]['Create Internal Count'] = 'Buat Cacah Internal';

$GLOBALS["lang"]['create_internal_from_external'] = 'Buat Internal Dari Eksternal';

$GLOBALS["lang"]['Create Internal From External'] = 'Buat Internal Dari Eksternal';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Buat Perangkat NMIS dari Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Buat Open-Audit Perangkat dari ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Buat Open-Audit Perangkat dari NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Buat suatu Baseline bagi perangkat contoh';

$GLOBALS["lang"]['Create a Discovery'] = 'Buat Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Buat Pernyataan Applikabilitas (SoA)';

$GLOBALS["lang"]['created_by'] = 'Dibuat Oleh';

$GLOBALS["lang"]['Created By'] = 'Dibuat Oleh';

$GLOBALS["lang"]['created_date'] = 'Tanggal Dibuat';

$GLOBALS["lang"]['Created Date'] = 'Tanggal Dibuat';

$GLOBALS["lang"]['Creating'] = 'Membuat';

$GLOBALS["lang"]['Creating Credentials'] = 'Membuat Kredensial';

$GLOBALS["lang"]['Creating Device'] = 'Membuat Perangkat';

$GLOBALS["lang"]['Creating Widgets'] = 'Membuat Widget';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Membuat Discovery Pindai entri Opsi';

$GLOBALS["lang"]['Creating a Query'] = 'Membuat Query';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Membuat Pernyataan SQL bagi Grup';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Membuat Pernyataan SQL untuk Queries';

$GLOBALS["lang"]['Creating an Integration'] = 'Membuat Integrasi';

$GLOBALS["lang"]['creator'] = 'Pembuat';

$GLOBALS["lang"]['Creator'] = 'Pembuat';

$GLOBALS["lang"]['credential'] = 'Kredensial';

$GLOBALS["lang"]['Credential'] = 'Kredensial';

$GLOBALS["lang"]['Credentials'] = 'Kredensial';

$GLOBALS["lang"]['Credentials Client ID'] = 'ID Klien Kredensial';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Subscription Kredensial ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'ID Kredentasi';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Kredensial disimpan dalam <i>kredensial</i> Meja database. Informasi kredensial sebenarnya dienkripsi dalam penyimpanan. Ketika Discovery dijalankan, sebuah perangkat memiliki kredensial spesifik diambil dari database, didekripsi dan diuji. Jika daftar kredensial ini gagal juga diambil, didekripsi dan kemudian diuji terhadap perangkat yang dimulai dengan kredensial yang dikenal sebelumnya. Kredensial spesifik perangkat disimpan pada tingkat perangkat individu di <i>kredensial</i> tabel (catatan - tidak <i>s</i> dalam nama tabel). Kunci SSH diuji sebelum nama pengguna / sandi SSH. Ketika pengujian SSH, kredensial juga akan ditandai sebagai bekerja dengan sudo atau menjadi root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Kredensial dapat memiliki satu dari beberapa jenis yang berbeda - snmp v.1 / v.2, smp v.3, ssh, ssh kunci, jendela semua diimplementasikan. CAVEAT - kunci ssh tidak diimplementasikan untuk Windows Open- Auditt server belum.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Kredensial untuk Amazon AWS digunakan dalam Discovery Awan';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Kredensial untuk Microsoft Azure digunakan dalam Discovery Awan';

$GLOBALS["lang"]['Critical'] = 'Kritis';

$GLOBALS["lang"]['criticality'] = 'Kritik';

$GLOBALS["lang"]['Criticality'] = 'Kritik';

$GLOBALS["lang"]['Croatia'] = 'Kroasia';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Saat ini';

$GLOBALS["lang"]['Current'] = 'Saat ini';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Proses Discovery Kini';

$GLOBALS["lang"]['Current date & time is '] = 'Tanggal & waktu saat ini ';

$GLOBALS["lang"]['Currently Installed'] = 'Terpasang';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Tipe yang kini didukung <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> atau <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Ruas Ubahan';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Port TCP Gubahan';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Ports TCP Kustom. Setiap port khusus kami akan liquin dipindai selain TCP Ports Top. Comma dipisahkan, tidak ada ruang.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP Gubahan Port';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Ports UDP Gubahan. Setiap port khusus yang akan kita pindai dengan liquel sebagai tambahan ke Top UDP Ports. Comma dipisahkan, tidak ada ruang.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Opsi Memindai Dapat Dipakai per Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Siprus';

$GLOBALS["lang"]['Czech'] = 'Ceko';

$GLOBALS["lang"]['Czech Republic'] = 'Republik Ceko';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Akun DN (opsional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'Sandi DN (opsional)';

$GLOBALS["lang"]['DNS FQDN'] = 'FQDN DNS';

$GLOBALS["lang"]['DNS Hostname'] = 'Nama host DNS';

$GLOBALS["lang"]['Danish'] = 'Denmark';

$GLOBALS["lang"]['dashboard_id'] = 'ID Dashboard';

$GLOBALS["lang"]['Dashboard ID'] = 'ID Dashboard';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widget Dashboard';

$GLOBALS["lang"]['dashboards'] = 'Dashboard';

$GLOBALS["lang"]['Dashboards'] = 'Dashboard';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboard dan Widgets memungkinkan pelanggan berlisensi Enterprise untuk membuat, membaca, memperbarui dan menghapus kedua koleksi ini untuk memastikan homepage mereka persis apa yang perlu mereka lihat. Tidak hanya itu, tapi pengguna mampu mengatur dasbor yang diberikan sebagai homepage mereka sendiri. Semua orang tidak perlu menggunakan homepage yang sama (dashboard), maupun widget yang sama pada dashboard itu. Pelanggan berlisensi profesional dapat memilih antara dua dashboard yang telah ditentukan untuk ditetapkan sebagai homepage mereka sendiri.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboard menyediakan <i>sekilas</i> visibilitas penting untuk perubahan terjadi pada jaringan Anda serta menyediakan link cepat ke tipe perangkat, produsen, dan sistem operasi dan jauh lebih banyak lagi.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboard digunakan';

$GLOBALS["lang"]['Data'] = 'Data';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Ekspor Data - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Retensi Data';

$GLOBALS["lang"]['Database'] = 'Basis Data';

$GLOBALS["lang"]['db_action'] = 'Aksi Basis Data';

$GLOBALS["lang"]['Database Action'] = 'Aksi Basis Data';

$GLOBALS["lang"]['db_column'] = 'Kolom Basis Data';

$GLOBALS["lang"]['Database Column'] = 'Kolom Basis Data';

$GLOBALS["lang"]['Database Definition'] = 'Definisi Basis Data';

$GLOBALS["lang"]['db_row'] = 'Baris Basis Data';

$GLOBALS["lang"]['Database Row'] = 'Baris Basis Data';

$GLOBALS["lang"]['Database Schema'] = 'Skema Basis Data';

$GLOBALS["lang"]['Database Server Discovery'] = 'Discovery Server Basis Data';

$GLOBALS["lang"]['db_table'] = 'Tabel Basis Data';

$GLOBALS["lang"]['Database Table'] = 'Tabel Basis Data';

$GLOBALS["lang"]['Database Tables'] = 'Tabel Basis Data';

$GLOBALS["lang"]['dataset_title'] = 'Judul Dataset';

$GLOBALS["lang"]['Dataset Title'] = 'Judul Dataset';

$GLOBALS["lang"]['date'] = 'Tanggal';

$GLOBALS["lang"]['Date'] = 'Tanggal';

$GLOBALS["lang"]['Date D-M-Y'] = 'Tanggal D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Tanggal M- D- Y';

$GLOBALS["lang"]['Date Now'] = 'Tanggal Sekarang';

$GLOBALS["lang"]['date_of_manufacture'] = 'Tanggal Manufacture';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Tanggal Manufacture';

$GLOBALS["lang"]['date_paid'] = 'Tanggal Dibayar';

$GLOBALS["lang"]['Date Paid'] = 'Tanggal Dibayar';

$GLOBALS["lang"]['date_received'] = 'Tanggal Diterima';

$GLOBALS["lang"]['Date Received'] = 'Tanggal Diterima';

$GLOBALS["lang"]['Date Y-M-D'] = 'Tanggal Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Tanggal dan waktu ketika CVE terakhir diperbarui.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Tanggal dan waktu ketika CVE diterbitkan.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Tanggal ketika CVE diterbitkan.';

$GLOBALS["lang"]['DateTime Now'] = 'Tanggal Sekarang';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Waktu Tanggal Y-M-D S:';

$GLOBALS["lang"]['day_of_month'] = 'Hari Bulan';

$GLOBALS["lang"]['Day Of Month'] = 'Hari Bulan';

$GLOBALS["lang"]['day_of_week'] = 'Day Of Week';

$GLOBALS["lang"]['Day Of Week'] = 'Day Of Week';

$GLOBALS["lang"]['Day of Month'] = 'Hari Bulan';

$GLOBALS["lang"]['dbus_identifier'] = 'Identifikasi Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identifikasi Dbus';

$GLOBALS["lang"]['Debug'] = 'Awakutu';

$GLOBALS["lang"]['Debugging'] = 'Pengawakutuan';

$GLOBALS["lang"]['Debugging a Script'] = 'Menghalangi Skrip';

$GLOBALS["lang"]['December'] = 'Desember';

$GLOBALS["lang"]['Decommission'] = 'Dekompresi';

$GLOBALS["lang"]['Default'] = 'Baku';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Otentikasi Baku Tingkat - Atur ke Sambung';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Penipuan Baku Tingkat - Atur ke Identifikasi';

$GLOBALS["lang"]['Default Items'] = 'Objek Standar';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Grup Bawaan Orgs';

$GLOBALS["lang"]['Default Roles Groups'] = 'Grup Baris Baku';

$GLOBALS["lang"]['Default Value'] = 'Nilai Baku';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Default 389. Biasanya 636 digunakan untuk Direktori Aktif LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Baku <code>3</code> untuk LDAP dan Direktori Aktif.';

$GLOBALS["lang"]['Defaults'] = 'Baku';

$GLOBALS["lang"]['Deferred'] = 'Disukai';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Tentukan lingkup projek dan tujuan';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Tentukan lingkup ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Tentukan konteks organisasi (masalah internal / eksternal)';

$GLOBALS["lang"]['delay_minutes'] = 'Tunda Menit';

$GLOBALS["lang"]['Delay Minutes'] = 'Tunda Menit';

$GLOBALS["lang"]['Delete'] = 'Hapus';

$GLOBALS["lang"]['Delete Example Devices'] = 'Hapus Perangkat Contoh';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Hapus Eksternal Dari Internal';

$GLOBALS["lang"]['Delete External From Internal'] = 'Hapus Eksternal Dari Internal';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Hapus NMIS Perangkat jika tidak dalam Open-Audit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Hapus entri {collect}.';

$GLOBALS["lang"]['Delete from Application'] = 'Hapus dari Aplikasi';

$GLOBALS["lang"]['Delete from Cluster'] = 'Hapus dari Cluster';

$GLOBALS["lang"]['Denmark'] = 'Denmark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Diserahkan oleh audit atau diatur secara manual oleh pengguna.';

$GLOBALS["lang"]['Derived by audit.'] = 'Diwarisi oleh audit.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Berasal dari <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Berasal dari <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Berasal dari penemuan kolektor.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Berasal dari OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Berasal dari penemuan awan.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Berasal dari perangkat audit.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Berasal dari jenis perangkat dan OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Berasal dari penemuan.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Berasal dari nama host, sysName, nama host dan IP dalam urutan itu.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Berasal dari keparahan integer.';

$GLOBALS["lang"]['description'] = 'Deskripsi';

$GLOBALS["lang"]['Description'] = 'Deskripsi';

$GLOBALS["lang"]['destination'] = 'Tujuan';

$GLOBALS["lang"]['Destination'] = 'Tujuan';

$GLOBALS["lang"]['detail'] = 'Detail';

$GLOBALS["lang"]['Detail'] = 'Detail';

$GLOBALS["lang"]['Details'] = 'Rincian';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detail dari siapa yang biasanya dapat konteks di situs ini.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Determine seberapa sering Anda ingin menjalankan pemeriksaan Baseline terhadap basis data dan membuat Laporan Terjadwal';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Menentukan pilihan perawatan risiko';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Mengembangkan Resiko Rencana Pengobatan';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Mengembangkan kebijakan, prosedur, dan kontrol';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Develop diperlukan dokumentasi IMS (kebijakan, prosedur, dll)';

$GLOBALS["lang"]['device'] = 'Perangkat';

$GLOBALS["lang"]['Device'] = 'Perangkat';

$GLOBALS["lang"]['Device Audits'] = 'Audits Perangkat';

$GLOBALS["lang"]['Device Component Names'] = 'Nama Komponen Perangkat';

$GLOBALS["lang"]['Device ID'] = 'ID Perangkat';

$GLOBALS["lang"]['device_id'] = 'ID Perangkat';

$GLOBALS["lang"]['device_id_a'] = 'ID Perangkat A';

$GLOBALS["lang"]['Device ID A'] = 'ID Perangkat A';

$GLOBALS["lang"]['device_id_b'] = 'ID Perangkat B';

$GLOBALS["lang"]['Device ID B'] = 'ID Perangkat B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Aturan Pencocokan Perangkat';

$GLOBALS["lang"]['Device Name'] = 'Nama Perangkat';

$GLOBALS["lang"]['Device Result'] = 'Hasil Perangkat';

$GLOBALS["lang"]['Device Results'] = 'Hasil Perangkat';

$GLOBALS["lang"]['Device Seed'] = 'Benih Perangkat';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Benih Perangkat Temukan adalah pilihan yang baik jika Anda tahu bahwa jaringan Anda terdiri dari berbagai subnets, tetapi Anda tidak yakin apa yang mereka. Benih penemuan dengan router lokal dan menonton jaringan Anda terungkap di depan mata Anda.';

$GLOBALS["lang"]['Device Seed IP'] = 'IP Benih Perangkat';

$GLOBALS["lang"]['Device Status'] = 'Status Perangkat';

$GLOBALS["lang"]['Device Types'] = 'Tipe Perangkat';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Auditing Perangkat Lunak dan Perangkat Keras';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Perangkat dalam Subnet';

$GLOBALS["lang"]['Devices'] = 'Perangkat';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Perangkat Diassign Ke Lokasi';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Perangkat Diassign Ke Lokasi';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Perangkat Ditugaskan Untuk Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Perangkat Ditugaskan Untuk Org';

$GLOBALS["lang"]['Devices Audited'] = 'Divais Audited';

$GLOBALS["lang"]['Devices Collection'] = 'Koleksi Perangkat';

$GLOBALS["lang"]['Devices Created in '] = 'Perangkat dibuat dalam ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Perangkat yang dibuat dalam Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Perangkat Kolom Tampilan Baku';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Perangkat Kolom Tampilan Baku';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Perangkat Ditemukan 7 Hari Terakhir';

$GLOBALS["lang"]['Devices Found Today'] = 'Perangkat Ditemukan Hari ini';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Perangkat Ditemukan Kemarin';

$GLOBALS["lang"]['Devices Missing Information'] = 'Perangkat Informasi Hilang';

$GLOBALS["lang"]['Devices Not Audited'] = 'Perangkat Tidak Diudit';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Perangkat Tidak Terlihat 30 Hari';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Perangkat Tidak Terlihat 7 Hari';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Perangkat Tidak Terlihat 90 Hari';

$GLOBALS["lang"]['Devices Older Than X'] = 'Devices Older Than X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Perangkat Diambil melalui API';

$GLOBALS["lang"]['Devices Selected from '] = 'Perangkat Yang Dipilih dari ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Perangkat Yang Dipilih dari Open-Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Perangkat Diperbarui di ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Perangkat Diperbarui dalam Open-Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Perangkat yang benchmark.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Perangkat tidak benchmark.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Perangkat bisa benchmark.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Perangkat dari Open-Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Perangkat dalam Keadaan Berjalan';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Perangkat dalam Keadaan Terhenti';

$GLOBALS["lang"]['Devices in this'] = 'Perangkat dalam hal ini';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Perangkat tidak akan cocok jika status mereka diset ke <i>dihapus</i>. Status lainnya akan memungkinkan pertandingan terjadi.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Perangkat dengan Perintah Terbatas';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Didevired dari tipe atau OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Diaktifkan';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Diaktifkan';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Diamati';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Diamati';

$GLOBALS["lang"]['dhcp_server'] = 'Server Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Server Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Apakah perintah berhasil dan kembali data yang diharapkan.';

$GLOBALS["lang"]['direction'] = 'Arah';

$GLOBALS["lang"]['Direction'] = 'Arah';

$GLOBALS["lang"]['directory'] = 'Direktori';

$GLOBALS["lang"]['Directory'] = 'Direktori';

$GLOBALS["lang"]['disabled'] = 'Dinonaktifkan';

$GLOBALS["lang"]['Disabled'] = 'Dinonaktifkan';

$GLOBALS["lang"]['discard'] = 'Buang';

$GLOBALS["lang"]['Discard'] = 'Buang';

$GLOBALS["lang"]['Discover'] = 'Temukan';

$GLOBALS["lang"]['Discoveries'] = 'Temukan';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Temukan berada di jantung dari apa yang Open- Audit lakukan. Bagaimana lagi kau tahu <i>Whats On Your Network?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Temukan adalah entri yang memungkinkan Anda untuk menjalankan penemuan pada jaringan dalam satu klik, tanpa memasukkan rincian dari jaringan itu setiap kali.';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Log Perubahan Discovery';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'ID Discovery';

$GLOBALS["lang"]['Discovery ID'] = 'ID Discovery';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery Issues';

$GLOBALS["lang"]['discovery_log'] = 'Log Discovery';

$GLOBALS["lang"]['Discovery Log'] = 'Log Discovery';

$GLOBALS["lang"]['Discovery Match Options'] = 'Opsi Cocovery Match';

$GLOBALS["lang"]['Discovery Name'] = 'Nama Discovery';

$GLOBALS["lang"]['Discovery Options'] = 'Opsi Discovery';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Cacah Antrian Discovery';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Batas Antrian Discovery';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opsi Pemindaian Discovery';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opsi Pemindaian Discovery';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Pemindaian Discovery Pilihan hanya koleksi item lain. Pengguna Enterprise dapat membuat, membaca, memperbarui dan menghapus entri seperti yang diperlukan. Pengguna profesional dapat membaca semua entri, tapi tidak membuat entri baru, memperbaharui entri yang ada atau hapus. Pengguna masyarakat tidak memiliki GUI yang mengijinkan akses ke koleksi ini.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Tipe Pemindaian Discovery';

$GLOBALS["lang"]['Discovery Support'] = 'Dukungan Discovery';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Penemuan telah berhenti bekerja';

$GLOBALS["lang"]['disk'] = 'Diska';

$GLOBALS["lang"]['Disk'] = 'Diska';

$GLOBALS["lang"]['display_version'] = 'Versi Tampilan';

$GLOBALS["lang"]['Display Version'] = 'Versi Tampilan';

$GLOBALS["lang"]['Display in Menu'] = 'Tampilan dalam Menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Tampilkan bentuk web standar untuk dikirim ke POST / {collect}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Tampilkan bentuk web standar untuk dikirim ke POST / {collect} / import.';

$GLOBALS["lang"]['district'] = 'Distrik';

$GLOBALS["lang"]['District'] = 'Distrik';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Domain Dns';

$GLOBALS["lang"]['Dns Domain'] = 'Domain Dns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Domain Domain Reg Diaktifkan';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Domain Domain Reg Diaktifkan';

$GLOBALS["lang"]['dns_fqdn'] = 'Dos Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dos Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Nama Host Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Nama Host Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Nama host Dns';

$GLOBALS["lang"]['Dns Hostname'] = 'Nama host Dns';

$GLOBALS["lang"]['dns_server'] = 'Server Dns';

$GLOBALS["lang"]['Dns Server'] = 'Server Dns';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Jangan lupa tentang Open-Audite wiki untuk semua dokumentasi Anda.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Jangan lupa ada gunung dokumentasi pada wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Jangan memindai port TCP ini.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Jangan pindai port UDP ini.';

$GLOBALS["lang"]['Do not show me again'] = 'Jangan tunjukkan lagi';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Apakah Anda memiliki contoh yang sempurna dari konfigurasi ini? Mungkin perangkat yang terletak di lingkungan lab atau tempat kerja yang kau gunakan untuk mengkloning VM.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Apakah Anda ingin menggunakan transportasi aman (LDAPS) atau LDAP biasa yang tidak dienkripsi.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Apakah Anda ingin melihat batang sisi standar di sebelah kiri.';

$GLOBALS["lang"]['documentation'] = 'Dokumentasi';

$GLOBALS["lang"]['Documentation'] = 'Dokumentasi';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentasi tentang koleksi tertentu.';

$GLOBALS["lang"]['Does Not Equal'] = 'Tidak sama';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Apakah lisensi berlaku untuk anak Orgs.';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Alamat Pengontrol Domain';

$GLOBALS["lang"]['Domain Controller Address'] = 'Alamat Pengontrol Domain';

$GLOBALS["lang"]['domain_controller_name'] = 'Pengontrol Domain Nama';

$GLOBALS["lang"]['Domain Controller Name'] = 'Pengontrol Domain Nama';

$GLOBALS["lang"]['domain_role'] = 'Peran Domain';

$GLOBALS["lang"]['Domain Role'] = 'Peran Domain';

$GLOBALS["lang"]['domain_short'] = 'Pendek Domain';

$GLOBALS["lang"]['Domain Short'] = 'Pendek Domain';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Republik Dominika';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Jangan pegang tanganku, aku tahu apa yang kulakukan. Tidak ada filter dan kemampuan untuk bergabung dengan tabel gubahan.';

$GLOBALS["lang"]['Download'] = 'Unduh';

$GLOBALS["lang"]['Download a File'] = 'Unduh Berkas';

$GLOBALS["lang"]['Download a file from URL'] = 'Unduh berkas dari URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Unduh script test _ windows _ client.vbs secara langsung';

$GLOBALS["lang"]['Download your updated version from'] = 'Unduh versi terbaru Anda dari';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplikasi Perangkat / Perangkat Hilang';

$GLOBALS["lang"]['duration'] = 'Durasi';

$GLOBALS["lang"]['Duration'] = 'Durasi';

$GLOBALS["lang"]['Dutch'] = 'Belanda';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Setiap IP dipindai dengan opsi yang dikonfigurasi (lihat Pilihan Discovery Scan dan Discovery - Community vs Profesional vs Enterprise pada wiki). Secara umum, Nmap akan menguji pelabuhan 22 (ssh), 135 (wmi), 62078 (iPhone) dan UDP 161 (smp). Jika 22, 135 atau 161 merespon daftar kredensial diambil dan setiap kredensial diuji pada gilirannya. Kredensial kerja pertama digunakan untuk query lebih lanjut langsung dari perangkat. Catatan - jika perangkat telah ditemukan sebelumnya dan memiliki kredensial kerja, kredensial tersebut diuji terlebih dahulu. Hanya jika mereka gagal adalah kredensial lainnya kemudian dicoba.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Setiap kali perangkat ditemukan atau hasil audit diproses, semua aturan diambil dari database dan dijalankan melawan atribut perangkat tertentu. Aturan dijalankan terhadap satu perangkat pada satu waktu - tidak ada fasilitas untuk mengatakan <i>Jalankan aturan terhadap semua perangkat<i> atau <i>Jalankan aturan terhadap perangkat ini<i>. Sebuah aturan individu akan menguji satu atau lebih atribut perangkat dan jika mereka cocok dengan aturan, hasilnya akan diterapkan. Beberapa atribut dapat diuji. Beberapa atribut dapat ditetapkan. Pikirkan ini sebagai Jika Ini, Lalu Sistem itu untuk OpenAuditt.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Mudah menjalankan penemuan atas jaringan dalam satu klik, tanpa memasukkan rincian dari jaringan itu setiap kali.';

$GLOBALS["lang"]['Ecuador'] = 'Ekuador';

$GLOBALS["lang"]['Edit'] = 'Sunting';

$GLOBALS["lang"]['edit_log'] = 'Sunting Log';

$GLOBALS["lang"]['Edit Log'] = 'Sunting Log';

$GLOBALS["lang"]['editable'] = 'Dapat disunting';

$GLOBALS["lang"]['Editable'] = 'Dapat disunting';

$GLOBALS["lang"]['edited_by'] = 'Edited By';

$GLOBALS["lang"]['Edited By'] = 'Edited By';

$GLOBALS["lang"]['edited_date'] = 'Tanggal Disunting';

$GLOBALS["lang"]['Edited Date'] = 'Tanggal Disunting';

$GLOBALS["lang"]['edition'] = 'Edisi';

$GLOBALS["lang"]['Edition'] = 'Edisi';

$GLOBALS["lang"]['Egypt'] = 'Mesir';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Entah Amazon, Google atau Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Entah tidak ada atau hadir.

<strong>Nihil</strong> - Serangan yang sukses tidak tergantung pada penyebaran dan kondisi eksekusi dari sistem yang rentan. Penyerang dapat berharap untuk dapat mencapai kerentanan dan mengeksekusi exploit di bawah semua atau kebanyakan dari kerentanan.

<strong>Hadir</strong> - Serangan yang berhasil tergantung pada adanya penyebaran tertentu dan kondisi eksekusi dari sistem rentan yang memungkinkan serangan. Termasuk ini:

Sebuah kondisi ras harus dimenangkan untuk berhasil mengeksploitasi kerentanan. Keberadaan serangan itu dikondisikan pada kondisi eksekusi yang tidak berada di bawah kendali penuh penyerang. Serangan mungkin perlu diluncurkan beberapa kali terhadap satu target sebelum berhasil.

Suntikan jaringan. Penyerang harus menyuntikkan diri ke jalur jaringan logis antara target dan sumber daya yang diminta oleh korban (misalnya kerentanan membutuhkan penyerang on- path).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Surel';

$GLOBALS["lang"]['Email'] = 'Surel';

$GLOBALS["lang"]['email_address'] = 'Alamat Surel';

$GLOBALS["lang"]['Email Address'] = 'Alamat Surel';

$GLOBALS["lang"]['Email Configuration'] = 'Konfigurasi Surel';

$GLOBALS["lang"]['Email to send test to'] = 'Surel untuk mengirim tes ke';

$GLOBALS["lang"]['Enable'] = 'Aktifkan';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Aktifkan COM yang didistribusikan di komputer ini - Opsi dicentang';

$GLOBALS["lang"]['enabled'] = 'Diaktifkan';

$GLOBALS["lang"]['Enabled'] = 'Diaktifkan';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Mengaktifkan Fitur Di Bawah Jendela';

$GLOBALS["lang"]['encryption'] = 'Enkripsi';

$GLOBALS["lang"]['Encryption'] = 'Enkripsi';

$GLOBALS["lang"]['encryption_method'] = 'Metode Enkripsi';

$GLOBALS["lang"]['Encryption Method'] = 'Metode Enkripsi';

$GLOBALS["lang"]['encryption_status'] = 'Status Enkripsi';

$GLOBALS["lang"]['Encryption Status'] = 'Status Enkripsi';

$GLOBALS["lang"]['end_date'] = 'Tanggal Akhir';

$GLOBALS["lang"]['End Date'] = 'Tanggal Akhir';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ID Akhir Produk Hidup';

$GLOBALS["lang"]['end_of_life'] = 'Akhir Kehidupan';

$GLOBALS["lang"]['End Of Life'] = 'Akhir Kehidupan';

$GLOBALS["lang"]['end_of_production'] = 'Akhir Produksi';

$GLOBALS["lang"]['End Of Production'] = 'Akhir Produksi';

$GLOBALS["lang"]['end_of_service'] = 'Akhir Layanan';

$GLOBALS["lang"]['End Of Service'] = 'Akhir Layanan';

$GLOBALS["lang"]['end_of_service_life'] = 'Akhir Kehidupan Layanan';

$GLOBALS["lang"]['End Of Service Life'] = 'Akhir Kehidupan Layanan';

$GLOBALS["lang"]['Endpoint'] = 'Endpoint';

$GLOBALS["lang"]['English'] = 'Inggris';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Ketaatan aturan Enhances';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Pengamatan selesai. CVE memiliki metadata penuh dan dianggap stabil.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Pastikan dokumentasi dikendalikan dan dapat diakses';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Jaringan privat Enterprise';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipe Pendek';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Lingkungan';

$GLOBALS["lang"]['Environment'] = 'Lingkungan';

$GLOBALS["lang"]['Equal To'] = 'Sama dengan';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Equal To or Greater Than';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Sama atau Kurang Dari';

$GLOBALS["lang"]['Equals'] = 'Sama';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekuatorial Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Galat';

$GLOBALS["lang"]['Error Code'] = 'Kode Galat';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Menetapkan sebuah proyek rencana dan timeline';

$GLOBALS["lang"]['Establish an information security policy'] = 'Menetapkan kebijakan keamanan informasi';

$GLOBALS["lang"]['Established'] = 'Didirikan';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Estonian'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Ethiopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Evaluasi IMS secara internal';

$GLOBALS["lang"]['Every'] = 'Setiap';

$GLOBALS["lang"]['Every Day'] = 'Setiap hari';

$GLOBALS["lang"]['Example'] = 'Contoh';

$GLOBALS["lang"]['Example Devices'] = 'Perangkat Contoh';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Contoh Bagan Org dengan Akses';

$GLOBALS["lang"]['Example text from'] = 'Contoh teks dari';

$GLOBALS["lang"]['Examples'] = 'Contoh';

$GLOBALS["lang"]['Exceptions'] = 'Eksepsi';

$GLOBALS["lang"]['exclude'] = 'Kecualikan';

$GLOBALS["lang"]['Exclude'] = 'Kecualikan';

$GLOBALS["lang"]['exclude_ip'] = 'Abaikan IP';

$GLOBALS["lang"]['Exclude IP'] = 'Abaikan IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Abaikan Alamat IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Exclude IP Addresses (individu IP - 192.168.1.20, range - 192.168.1.30 - 40 atau subnets - 192.168.1.100 / 30) terdaftar dari pemindaian. Comma dipisahkan, tidak ada ruang.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Abaikan Port TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Sport Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Sport Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Abaikan Port UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Kecuali port yang terdaftar dari pemindaian. Comma dipisahkan, tidak ada ruang.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Abaikan alamat IP ini dari pemindaian Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Diabaikan';

$GLOBALS["lang"]['exclusion_reasons'] = 'Reasons Eksklusif';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Reasons Eksklusif';

$GLOBALS["lang"]['executable'] = 'Dapat dieksekusi';

$GLOBALS["lang"]['Executable'] = 'Dapat dieksekusi';

$GLOBALS["lang"]['executable_id'] = 'ID Executable';

$GLOBALS["lang"]['Executable ID'] = 'ID Executable';

$GLOBALS["lang"]['executables'] = 'Executable';

$GLOBALS["lang"]['Executables'] = 'Executable';

$GLOBALS["lang"]['Execute'] = 'Jalankan';

$GLOBALS["lang"]['Executing'] = 'Menjalankan';

$GLOBALS["lang"]['exemption_reason'] = 'Alasan Exemption';

$GLOBALS["lang"]['Exemption Reason'] = 'Alasan Exemption';

$GLOBALS["lang"]['Existing Building'] = 'Bangunan Yang Telah Ada';

$GLOBALS["lang"]['Existing Floor'] = 'Lantai Yang Telah Ada';

$GLOBALS["lang"]['Existing Room'] = 'Ruang Yang Telah Ada';

$GLOBALS["lang"]['Existing Row'] = 'Baris Yang Telah Ada';

$GLOBALS["lang"]['expire_date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['Expire Date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['expire_minutes'] = 'Ekstrasikan Menit';

$GLOBALS["lang"]['Expire Minutes'] = 'Ekstrasikan Menit';

$GLOBALS["lang"]['expires'] = 'Kadaluwarsa';

$GLOBALS["lang"]['Expires'] = 'Kadaluwarsa';

$GLOBALS["lang"]['expiry_date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['Expiry Date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Export'] = 'Ekspor';

$GLOBALS["lang"]['Export by Device'] = 'Ekspor menurut Perangkat';

$GLOBALS["lang"]['Export by Policy'] = 'Ekspor menurut Kebijakan';

$GLOBALS["lang"]['Export data to'] = 'Ekspor data ke';

$GLOBALS["lang"]['Exporting a Device'] = 'Mengekspor suatu Perangkat';

$GLOBALS["lang"]['expose'] = 'Ekspose';

$GLOBALS["lang"]['Expose'] = 'Ekspose';

$GLOBALS["lang"]['External'] = 'Eksternal';

$GLOBALS["lang"]['External Field Name'] = 'Nama Ruas Eksternal';

$GLOBALS["lang"]['External Field Type'] = 'Tipe Field Eksternal';

$GLOBALS["lang"]['External Field Types'] = 'Tipe Field Eksternal';

$GLOBALS["lang"]['external_ident'] = 'Identasi Eksternal';

$GLOBALS["lang"]['External Ident'] = 'Identasi Eksternal';

$GLOBALS["lang"]['external_link'] = 'Tautan Eksternal';

$GLOBALS["lang"]['External Link'] = 'Tautan Eksternal';

$GLOBALS["lang"]['extra_columns'] = 'Kolom Ekstra';

$GLOBALS["lang"]['Extra Columns'] = 'Kolom Ekstra';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Pelaporan berbasis Ekstra dan Waktu';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Pencatatan ekstra dan lebih verbose dihasilkan untuk discodehooting.';

$GLOBALS["lang"]['FAQ'] = 'PSD';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revisi FW';

$GLOBALS["lang"]['Fail'] = 'Gagal';

$GLOBALS["lang"]['Failed'] = 'Gagal';

$GLOBALS["lang"]['Failed Severity'] = 'Gagal Severity';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Kepulauan Falkland (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Family';

$GLOBALS["lang"]['Faroe Islands'] = 'Kepulauan Faroe';

$GLOBALS["lang"]['Features'] = 'Fitur';

$GLOBALS["lang"]['February'] = 'Februari';

$GLOBALS["lang"]['field'] = 'Ruas';

$GLOBALS["lang"]['Field'] = 'Ruas';

$GLOBALS["lang"]['field_id'] = 'ID Ruas';

$GLOBALS["lang"]['Field ID'] = 'ID Ruas';

$GLOBALS["lang"]['Field Name'] = 'Nama Ruas';

$GLOBALS["lang"]['Field Type'] = 'Tipe Ruas';

$GLOBALS["lang"]['Fields'] = 'Ruas';

$GLOBALS["lang"]['fields'] = 'Ruas';

$GLOBALS["lang"]['Fields attributes are'] = 'Atribut field adalah';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Kepulauan Fiji';

$GLOBALS["lang"]['File'] = 'Berkas';

$GLOBALS["lang"]['File Auditing'] = 'Audit Berkas';

$GLOBALS["lang"]['File Import'] = 'Impor Berkas';

$GLOBALS["lang"]['File Input'] = 'Masukan Berkas';

$GLOBALS["lang"]['file_name'] = 'Nama Berkas';

$GLOBALS["lang"]['File Name'] = 'Nama Berkas';

$GLOBALS["lang"]['File Share Discovery'] = 'Berkas Berbagi Discovery';

$GLOBALS["lang"]['file_size'] = 'Ukuran Berkas';

$GLOBALS["lang"]['File Size'] = 'Ukuran Berkas';

$GLOBALS["lang"]['filename'] = 'Nama berkas';

$GLOBALS["lang"]['Filename'] = 'Nama berkas';

$GLOBALS["lang"]['files'] = 'Berkas';

$GLOBALS["lang"]['Files'] = 'Berkas';

$GLOBALS["lang"]['files_id'] = 'ID Berkas';

$GLOBALS["lang"]['Files ID'] = 'ID Berkas';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Disaring';

$GLOBALS["lang"]['Filtered'] = 'Disaring';

$GLOBALS["lang"]['Filtered Ports'] = 'Ports Disaring';

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Finnish'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Paket Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Aturan Firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Aturan Firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revisi Firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Revisi Firmware';

$GLOBALS["lang"]['First'] = 'Pertama';

$GLOBALS["lang"]['First Name'] = 'Nama Pertama';

$GLOBALS["lang"]['first_run'] = 'Lari Pertama';

$GLOBALS["lang"]['First Run'] = 'Lari Pertama';

$GLOBALS["lang"]['first_seen'] = 'Pertama Terlihat';

$GLOBALS["lang"]['First Seen'] = 'Pertama Terlihat';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Pertama fokus pada apa yang dibutuhkan akhir adalah: apakah Anda mencoba untuk baseline software, pengguna, atau data Netstat? Apa hal penting untuk membandingkan dan melaporkan?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Perbaiki';

$GLOBALS["lang"]['Fixed'] = 'Tetap';

$GLOBALS["lang"]['Fixing the Issue'] = 'Memperbaiki Isu';

$GLOBALS["lang"]['Floor'] = 'Lantai';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Ikuti salah satu tautan di bawah ini dan temukan cara memakai Open- Audit untuk mencari tahu <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['For'] = 'Untuk';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Untuk <i>Tipe</i> pastikan untuk memilih Baseline, dan untuk Grup Anda harus memilih sekelompok perangkat, jika diterapkan ke baseline ini, yang terbaik mewakili perangkat untuk menerapkan baseline terhadap. Ini akan mencegah entri salah.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Untuk Debian / Ubuntu, termasuk pengaturan dpkg untuk mengingat override anda sehingga suatu apt-get upgrade tidak akan rusak';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Untuk SNMP Open-Audit dapat menggunakan v1, v2 dan kredensial v3. Perangkat ini kueri terlepas dari itu menjadi router, switch (regular network devices) atau komputer (Linux dan Windows sering menjalankan SNMP untuk alat pemantauan).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'For a primer on cron, see this Wikipedia page';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Untuk penemuan benih, harus saya hanya menemukan IP di ruang alamat IP pribadi.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Untuk penemuan benih, harus saya hanya menemukan IP pada subnet yang dipilih.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Untuk penemuan benih, aku harus ping jaring sebelum menjalankan penemuan.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Untuk entri lanjutan dari kueri SQL mentah. Sesuai dengan Queries, Anda harus memasukkan <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Untuk setiap proses melahirkan, bagian bawah terjadi.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Misalnya - Anda mungkin membuat garis dasar dari perangkat yang menjalankan Redhat 9 yang bertindak sebagai salah satu server Apache Anda di sebuah cluster. Anda tahu server khusus ini dikonfigurasi persis seperti yang Anda inginkan tetapi Anda tidak yakin apakah server lain di cluster dikonfigurasi persis sama. Baselin memungkinkan Anda untuk menentukan ini.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Misalnya - Anda mungkin membuat garis dasar dari perangkat yang menjalankan Redhat 9 yang bertindak sebagai salah satu server Apache Anda di sebuah cluster. Anda tahu server khusus ini dikonfigurasi persis seperti yang Anda inginkan tetapi Anda tidak yakin apakah server lain di cluster dikonfigurasi persis sama. Baselin memungkinkan Anda untuk menentukan ini.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Untuk informasi lebih lanjut, lihat wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Untuk lisensi yang tidak abadi, kapan lisensi berakhir.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Untuk informasi yang lebih rinci, periksa Basis Pengetahuan Open- Audit.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Untuk informasi lebih lanjut silakan lihat panduan berikut yang meliputi video. Gunakan';

$GLOBALS["lang"]['For more information, see'] = 'Untuk informasi lebih lanjut, lihat';

$GLOBALS["lang"]['form_factor'] = 'Faktor Bentuk';

$GLOBALS["lang"]['Form Factor'] = 'Faktor Bentuk';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Keempat';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Perancis, Republik Perancis';

$GLOBALS["lang"]['free'] = 'Bebas';

$GLOBALS["lang"]['Free'] = 'Bebas';

$GLOBALS["lang"]['French'] = 'Perancis';

$GLOBALS["lang"]['French Guiana'] = 'Guiana Perancis';

$GLOBALS["lang"]['French Polynesia'] = 'Polinesia Perancis';

$GLOBALS["lang"]['French Southern Territories'] = 'French Southern Territories';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Pertanyaan Yang Sering Muncul';

$GLOBALS["lang"]['Friday'] = 'Jumat';

$GLOBALS["lang"]['From 100 Devices'] = 'Dari 100 Perangkat';

$GLOBALS["lang"]['From 500 Devices'] = 'Dari 500 Perangkat';

$GLOBALS["lang"]['From that page'] = 'Dari halaman itu';

$GLOBALS["lang"]['full_name'] = 'Nama Lengkap';

$GLOBALS["lang"]['Full Name'] = 'Nama Lengkap';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Awan penuh mengaudit dengan semua rincian dari audit Opendit dan rincian yang biasa seperti jenis mesin dan ukuran.';

$GLOBALS["lang"]['function'] = 'Fungsi';

$GLOBALS["lang"]['Function'] = 'Fungsi';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galician';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Analisis Gap (opsional)';

$GLOBALS["lang"]['gateway'] = 'Gerbang';

$GLOBALS["lang"]['Gateway'] = 'Gerbang';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Dihasilkan Oleh';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Peta Geografis';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Jerman';

$GLOBALS["lang"]['Germany'] = 'Jerman';

$GLOBALS["lang"]['Get Lat/Long'] = 'Dapatkan Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Dapatkan Berita';

$GLOBALS["lang"]['Get Started'] = 'Mulai';

$GLOBALS["lang"]['Get a Free License'] = 'Dapatkan Lisensi Bebas';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Kenali platform Open- Audit dan jelajahi beberapa fitur.';

$GLOBALS["lang"]['Getting Started'] = 'Mulai';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Guthub';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opsi Discovery Global';

$GLOBALS["lang"]['Global area network'] = 'Jaringan area global';

$GLOBALS["lang"]['Go'] = 'Pergi';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Kembali ke server Open-Audite anda dan buat penemuan dengan target Windows komputer IP Address sebagai subnet (ini akan menyimpan untuk menemukan seluruh jaringan lagi). Jalankan penemuan, mencatat masalah apapun. Untuk masalah apapun yang ditemukan, mengambil tindakan yang tepat.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Pergi target Windows PC (atau gunakan RDP) dan log on sebagai pengguna yang digunakan oleh set kredensial penemuan Anda.';

$GLOBALS["lang"]['Go to menu'] = 'Pergi ke menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Pergi ke <i>Aplikasi</i> - > <i>Registrasi App</i> menu item di sebelah kiri. Cari Open- Audit. Klik entri Open- Auditt dalam daftar (asumsikan anda menamakan aplikasi Open-Auditt).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Pergi ke <i>Sertifikat dan rahasia</i> objek menu di bawah <i>Kelola</i> di menu tengah.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Pergi ke <i>Single sign-on</i> objek menu dan klik SAML untuk <i>Pilih sebuah sinyal-on metoda</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Kredensial';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Kunci';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Bagus, maka kau bisa membantu! Kirim Pertama Wave teks yang ditampilkan di GUI dan apa yang harus ditampilkan. Kita akan memasukkan bahwa dalam file bahasa sehingga akan maju, terjemahan ditingkatkan dan Anda tidak perlu khawatir tentang memperbarui untuk setiap rilis!';

$GLOBALS["lang"]['Greater Than'] = 'Lebih besar dari';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Lebih besar dari atau sama';

$GLOBALS["lang"]['Greece'] = 'Yunani';

$GLOBALS["lang"]['Greek'] = 'Yunani';

$GLOBALS["lang"]['Green Query'] = 'Query Hijau';

$GLOBALS["lang"]['Greenland'] = 'Greenland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grup';

$GLOBALS["lang"]['group_by'] = 'Grup Oleh';

$GLOBALS["lang"]['Group By'] = 'Grup Oleh';

$GLOBALS["lang"]['group_id'] = 'ID Kelompok';

$GLOBALS["lang"]['Group ID'] = 'ID Kelompok';

$GLOBALS["lang"]['groups'] = 'Grup';

$GLOBALS["lang"]['Groups'] = 'Grup';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Kelompok-kelompok digunakan sebagai daftar sederhana perangkat yang cocok dengan kondisi yang diperlukan. Jika diminta menggunakan JSON mereka mengembalikan daftar <i>device.id</i> Hanya. Jika diminta memakai antar muka web, mereka mengembalikan daftar atribut kolom standar. Kelompok dapat digunakan untuk Integration, Baselines dan item lainnya.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'ID Perangkat Tamu';

$GLOBALS["lang"]['Guest Device ID'] = 'ID Perangkat Tamu';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Revisi HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Indeks Hard Drive';

$GLOBALS["lang"]['Hard Drive Index'] = 'Indeks Hard Drive';

$GLOBALS["lang"]['Hardware'] = 'Perangkat Keras';

$GLOBALS["lang"]['hardware_revision'] = 'Revisi Perangkat Keras';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisi Perangkat Keras';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Apakah kebijakan ini telah diterapkan dalam organisasi ini.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Apakah agen selalu menjalankan script audit terbaru (jika Anda meng-upgrade Open-Auditt dan secara manual menyalin script ke target, maka set cron - Anda harus memperbarui script ini untuk setiap upgrade).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Minta pengguna Anda membuka suatu prompt perintah (pakai <i>Jalankan sebagai Administrator</i>). Tempelkan di bawah ke prompt untuk mengunduh Agen.';

$GLOBALS["lang"]['Head'] = 'Kepala';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Ibrani';

$GLOBALS["lang"]['height'] = 'Tinggi';

$GLOBALS["lang"]['Height'] = 'Tinggi';

$GLOBALS["lang"]['Height in RU'] = 'Tinggi RU';

$GLOBALS["lang"]['Help'] = 'Bantuan';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Bantuan dan Pertanyaan Yang Sering Muncul';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Membantu mengelola dan mengurangi risiko keamanan informasi';

$GLOBALS["lang"]['Hide Audit Window'] = 'Sembunyikan Jendela Audit';

$GLOBALS["lang"]['high'] = 'Tinggi';

$GLOBALS["lang"]['High'] = 'Tinggi';

$GLOBALS["lang"]['High Availability'] = 'Ketersediaan tinggi';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Rumah';

$GLOBALS["lang"]['home'] = 'Rumah';

$GLOBALS["lang"]['Home Area Network'] = 'Jaringan Area Rumah';

$GLOBALS["lang"]['Home area network'] = 'Jaringan area rumah';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nama host';

$GLOBALS["lang"]['Hostname'] = 'Nama host';

$GLOBALS["lang"]['hour'] = 'Jam';

$GLOBALS["lang"]['Hour'] = 'Jam';

$GLOBALS["lang"]['How Does It Work?'] = 'Bagaimana cara kerjanya?';

$GLOBALS["lang"]['How Does it Work?'] = 'Bagaimana cara kerjanya?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Berapa lama waktu yang dibutuhkan';

$GLOBALS["lang"]['How and Why is'] = 'Bagaimana dan mengapa';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Bagaimana dan Mengapa Open-Auditt Lebih Aman';

$GLOBALS["lang"]['How do they work?'] = 'Bagaimana cara kerjanya?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Bagaimana cara Device Seed Discovery menemukan IP yang dikenal?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Berapa lama perintah itu dilaksanakan.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Berapa lama Nmap harus menunggu respon, per perangkat.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Berapa banyak circuit feed ke rak ini.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Berapa banyak kebijakan menghasilkan kegagalan.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Berapa banyak kebijakan menghasilkan lulus.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Berapa banyak soket listrik di rak ini.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Berapa banyak unit rak yang tinggi rak ini.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Seberapa sering kolektor harus meminta server untuk tugas.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Bagaimana kita harus memilih perangkat untuk diintegrasi (memakai Atribut, Query, atau Grup).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Bagaimana kerentanan dieksploitasi (misalnya, Jaringan, Advokat, Lokal, Fisik).';

$GLOBALS["lang"]['How to compare'] = 'Bagaimana membandingkan';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Manusia dapat dibaca penjelasan dari kerentanan.';

$GLOBALS["lang"]['Hungarian'] = 'Hungaria';

$GLOBALS["lang"]['Hungary'] = 'Hungaria';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Aku telah membaca EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Saya harap pos ini telah meringankan kekhawatiran apapun yang Anda miliki tentang Open-Audit dan Keamanan. Jika Anda memiliki pertanyaan sama sekali, jangan ragu untuk menjangkau kami di sini di FirstWave. Kami selalu senang membahas kekhawatiran dan kebutuhanmu. Dan mungkin jika pertanyaan Anda bukan sesuatu yang saya telah dibahas di sini, saya dapat menambahkan di sini untuk pengguna masa depan';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'PENTING';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'Versi IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Alamat IP';

$GLOBALS["lang"]['IP Addresses'] = 'Alamat IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set By';

$GLOBALS["lang"]['ISMS'] = 'IMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Hanya ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islandia';

$GLOBALS["lang"]['icon'] = 'Ikon';

$GLOBALS["lang"]['Icon'] = 'Ikon';

$GLOBALS["lang"]['Icon and Text'] = 'Ikon dan Teks';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Hanya ikon, teks, ikon, dan teks.';

$GLOBALS["lang"]['id_internal'] = 'Id Internal';

$GLOBALS["lang"]['Id Internal'] = 'Id Internal';

$GLOBALS["lang"]['id_number'] = 'Nomor Id';

$GLOBALS["lang"]['Id Number'] = 'Nomor Id';

$GLOBALS["lang"]['identification'] = 'Identifikasi';

$GLOBALS["lang"]['Identification'] = 'Identifikasi';

$GLOBALS["lang"]['Identify information assets'] = 'Mengidentifikasi aset informasi';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifikasi pihak yang tertarik dan persyaratan mereka';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identifikasi pemegang kunci dan menetapkan peran';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identifikasi perangkat yang patut dicontoh, atau <i>gambar emas</i> Anda ingin membandingkan perangkat serupa terhadap.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Mengidentifikasi dan mengevaluasi risiko keamanan';

$GLOBALS["lang"]['If'] = 'Jika';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Jika perangkat secara individual ditemukan menggunakan <i>Temukan Perangkat</i> link pada halaman rincian perangkat, kami pertama kali memeriksa apakah perangkat ini telah ditemukan sebelumnya (oleh Discovery) dan jika demikian, gunakan opsi penemuan dari pemindaian tersebut. Jika belum ditemukan sebelumnya, kami kembali ke penemuan butir konfigurasi _ default _ scan _ pilihan pengaturan.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Jika Org baru dibuat, nama grup LDAP secara otomatis berasal dari nama. Sebagai contoh, jika Org baru dibuat dan bernama Test, grup LDAP yang berhubungan akan bernama open-audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jika port merespon dengan disaring, harus kita pertimbangkan tersedia.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jika port merespon dengan terbuka 124; disaring, harus kita anggap tersedia.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jika perangkat jarak jauh tidak ada dalam perangkat Open- Auditt terpilih, sebaiknya kita menghapusnya dari sistem eksternal.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jika perangkat Open- Auditt telah diubah, sebaiknya kita memperbarui sistem eksternal.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jika perangkat Open- Auditt tidak ada di sistem eksternal, haruskah kita membuatnya.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jika agen melaporkan IP utamanya ada di jaringan ini, lakukan aksinya.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Jika salah satu port (koma dipisahkan, tidak ada spasi) terdeteksi, asumsikan SSH berjalan di atasnya dan menggunakannya untuk audit. Tidak perlu menambahkan port ini ke port Custom TCP - itu akan ditambahkan secara otomatis.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Jika tidak ada operator yang dispesifikasikan, baku adalah =. Properti harus sepenuhnya memenuhi syarat - ie, device.hostname (bukan hanya nama host).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Jika tidak ada nilai yang ada, pasangkan nilai ini. EG: untuk sistem.nmis _ group / configuraion. grup yang kita gunakan';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Bila ditata, memuat suatu array JSON dari kolom perangkat spesifik yang dipilih pengguna untuk melihat, selain dari konfigurasi baku.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Jika OS Family (seperti yang dilaporkan oleh perangkat) berisi item ini, lewat.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Jika server Open- Auditt memiliki Kolektor melaporkan kepadanya, penurunan tambahan tersedia. Anda dapat memilih ini untuk menentukan collector mana yang harus dijalankan. Hanya tugas Discovery yang didukung untuk Kolektor.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jika agen OS keluarga (tidak sensitif) berisi string ini, melakukan tindakan.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Bila biner tak ditemukan di kedua lokasi ini, pesan peringatan akan ditampilkan di pemasang.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jika kondisi berikut dipenuhi:<br/><ul><li>sebuah Peran memiliki sebuah ad _ group yang ditugaskan</li><li>sebuah Org memiliki sebuah ad _ group yang ditugaskan</li><li>sebuah LDAP Server telah memakai _ peran ke y</li><li>seorang pengguna ada dalam LDAP (biarlah itu Direktori Aktif atau OpenLDAP) dan berada dalam ad _ group yang ditugaskan</li></ul>Pengguna tersebut dapat masuk ke Open-Auditt tanpa akun dalam Open- Auditt yang perlu dibuat. Open-Audit akan query LDAP dalam pertanyaan dan jika pengguna berada dalam kelompok yang diperlukan tetapi tidak dalam Open-AuDIT, atribut pengguna mereka (nama, nama lengkap, email, peran, orgs, dll) dalam Open-AuditT akan secara otomatis dihuni dan mereka akan log on.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Jika daerah lokal benar (bool) atau y (string) atau Y (string) atau 1 (integer) maka set data eksternal ke 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Jika daerah lokal benar (bool) atau y (string) atau Y (string) atau 1 (integer) maka set data eksternal ke y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Jika IP primer (seperti yang dilaporkan oleh perangkat) dalam subnet ini, lewat.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Jika akun pengguna tidak benar-benar ada dalam Open- Auditt dan <code>use_authorisation</code> ditata, pengguna akan dibuat. Jika memang ada, rincian seperti email, nama lengkap, dll akan dihuni.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Bila pengguna tak punya kredensial yang valid atau tak ada paling tidak satu Peran Open-AuditT dan Grup (ketika memakai <code>use_authorisation</code>), Open-Auditt akan fallback untuk menggunakan lokal Open- Auditt rincian pengguna dan coba otentikasi dan otorisasi sana. Gagal itu, pengguna akan ditolak akses.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jika pengguna masuk ke Open-Auditt tidak memiliki akses untuk mencari LDAP, Anda dapat menggunakan akun lain yang memiliki akses ini.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Jika pengguna log on ke Open-Audit tidak memiliki akses untuk mencari OpenLDAP, Anda dapat menggunakan akun lain yang memiliki akses ini. Gunakan dn _ account dan dn _ password untuk mengkonfigurasi ini.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Bila nilai tak ditentukan, penanda waktu saat ini akan dipakai.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Bila nilai ditata, nilai timestamp akan dipakai.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Jika perubahan ini tidak bekerja untuk Anda, semua tidak hilang. Kami telah menambahkan item konfigurasi (diatur ke n secara baku, sehingga ini tidak akan menggunakan opsi baru ini keluar dari kotak) yang disebut penemuan _ use _ org _ id _ match. Jika Anda mengubahnya menjadi y maka Orthan yang ditugaskan ke perangkat oleh penemuan akan digunakan dalam aturan pertandingan yang relevan.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Jika ini beberapa menit (atau lebih) telah berlalu sejak server terakhir melihat perangkat, lulus.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jika beberapa atau lebih menit telah berlalu sejak perangkat menghubungi server, melakukan tindakan.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Jika hal ini terjadi maka masalah yang Anda lihat berhubungan dengan kontrol tabel yang digunakan pada halaman web. Ini hanya menyimpan dalam memori keadaan kotak cek untuk halaman saat ini sedang dilihat. Jika Anda membuat pilihan, maka halaman depan / belakang pilihan tersebut akan hilang. Anda dapat, bagaimanapun, mencapai apa yang Anda inginkan dengan memperluas jumlah perangkat yang ditunjukkan pada setiap halaman. Di pojok kiri atas adalah sebuah drop-down berlabel "record per halaman"; gunakan ini untuk memperluas jumlah entri yang ditampilkan sampai Anda melihat semua yang ingin Anda pilih untuk Blak Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Jika kita mendeteksi perangkat lunak manajemen san, harus kita jalankan auto- menemukan sebelum query.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Bila Anda menambahkan Jenis Lokasi, tambahkan ikon tersebut ke';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Bila Anda menambahkan suatu tipe perangkat, untuk menampilkan ikon yang terkait Anda harus menyalin secara manual berkas .svg terformat ke direktori';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Jika Anda adalah pelanggan FirstWave yang didukung, beberapa item akan membuat membantu Anda lebih mudah. Membuka tiket dukungan dengan FirstWave dan melampirkan berkas log. Juga termasuk keluaran dari tombol Dukungan di sebelah kanan atas';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Jika Anda adalah pelanggan yang didukung dan membuka tiket dukungan dengan FirstWave, silakan pasang berkas-berkas ini.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please kontak the FirstWave support team.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Bila Anda berada di Windows atau server NMIS Anda jauh, Anda perlu menyediakan URL, nama pengguna, dan sandi untuk mengakses server itu.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Jika Anda berada di broadband yang layak atau koneksi ethernet, saya akan merekomendasikan selalu menggunakan -T4 (Agresif). Beberapa orang suka -T5 (Gila) meskipun terlalu agresif untuk selera saya. Orang kadang-kadang menentukan -T2 (Kebijakan) karena mereka pikir itu kurang mungkin untuk crash host atau karena mereka menganggap diri mereka untuk sopan pada umumnya. Mereka sering tidak menyadari betapa lambat -T2 sebenarnya. Pemindaian mereka mungkin memakan waktu sepuluh kali lebih lama dari pemindaian default. Kecelakaan mesin dan masalah bandwidth jarang terjadi dengan opsi waktu baku -T3 (Normal) jadi saya biasanya merekomendasikan itu untuk scanner yang berhati-hati. Mengakui deteksi versi jauh lebih efektif daripada bermain dengan nilai waktu untuk mengurangi masalah ini.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Jika Anda menjalankan sistem RedHat atau Centos dan Anda telah meng-upgrade Nmap, silakan reset SUID pada biner dengan';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Bila Anda menjalankan server Open-Audite pada Linux, hal ini tidak mempengaruhi Anda.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Bila Anda memakai Open-Audite pada Windows atau bila server NMIS Anda bukan pada Server Open- Auditit Anda (dalam kasus instalasi Linux), Anda perlu menyediakan kredensial akses dan URL ke NMIS jauh - tapi itu saja! Ya - Integration antara NMIS dan Open- Audit bahkan bekerja dengan Windows berbasis Open- Auditt sekarang!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jika Anda memilih Kolektor, itu akan dijadwalkan untuk mengeksekusi pada batas 5 menit berikutnya.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Jika Anda secara normal mengatur perangkat _ assigned _ to _ org dan item konfigurasi diaktifkan, maka OrgID akan digunakan untuk lebih lanjut memperbaiki kecocokan.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Jika Anda tidak secara normal mengatur perangkat _ assigned _ to _ org, maka itu tidak akan memiliki efek. Kami hanya memeriksa menggunakan OrgID jika telah diset dalam penemuan (atau secara manual dalam skrip audit) dan diaktifkan dalam konfigurasi.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Jika Anda mengaktifkan butir konfigurasi, gunakan penemuan untuk menetapkan suatu Org dan kemudian mengubah OrganID dari perangkat setelah penemuan maka Anda mungkin akan memiliki perangkat baru dibuat saat berikutnya penemuan berjalan. Dalam hal ini, Anda mungkin harus hanya unset perangkat _ asted _ to _ org sebelum berjalan penemuan berikutnya. Ini karena (dalam hal ini) Anda telah mengatakan Open-Audit <i>perangkat ini dari penemuan ini milik Org X<i>, tapi kemudian mengubah Org perangkat. Anda telah mengubah informasi perangkat yang tersimpan. Dalam hal ini - tidak ada lagi perangkat milik Org X, jadi kami membuat yang baru.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Jika Anda memiliki perangkat lunak Anti- Virus berjalan, memungkinkan layanan Opmantek (omkd), Apache (apache2.2) dan MySQL (mysql) untuk dijalankan secara otomatis adalah penting. Layanan-layanan ini digunakan oleh Open-Audit. Kau hanya perlu melakukan ini sekali. Jika program Anti- Virus Anda terus mendorong Anda tentang Open- Audit, silakan posting ke forum atau mengirim email untuk mendukung dengan nama dan versi perangkat lunak Anti- Virus Anda.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Jika Anda memiliki kredensial kerja, Anda dapat mengharapkan jumlah penuh informasi mungkin.<br/><br/>Jelas, cara terbaik untuk menggunakan Open-Audit adalah memiliki kredensial yang bekerja untuk perangkat yang ditemukan (jadilah mereka WMI, SSH, atau SNMP kredensial).<br/><br/>Kami juga memiliki halaman audit tanpa kredensial.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Jika Anda termasuk\ "id\" field <strong>dan</strong> set dengan sebuah nomor, bahwa item akan diperbarui daripada dibuat.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Jika Anda perlu mengatur akses Direktori Aktif, Anda biasanya dapat menggunakan contoh <code>cn=Users,dc=your,dc=domain,dc=com</code> untuk Anda <code>base_dn</code>. Tidak perlu untuk mengatur <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Jika Anda perlu mengatur akses OpenLDAP bagi pengguna Anda dan akses DN pengguna yang diberikan biasanya <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> maka Anda harus mengatur <code>base_dn</code> ke <code>dc=your,dc=domain,dc=com</code> dan <code>user_dn</code> ke <code>uid=@username@@domain,cn=People</code>. Kata-kata khusus <code>@username</code> dan <code>@domain</code> akan digantikan oleh rincian login yang disediakan oleh pengguna anda pada halaman login.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Jika Anda menjalankan penemuan di atas subnet bahwa Server (atau Kolektor) secara langsung terpasang, Anda dapat mengharapkan berikut untuk menjawab perangkat';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Jika Anda menjalankan penemuan di atas jaring yang server (atau kolektor) tidak dipasang secara langsung, Anda dapat mengharapkan berikut untuk menjawab perangkat';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Jika Anda memilih suatu tipe Daftar, sebuah ruas tambahan akan muncul Nilai yang disebut. Anda harus menempatkan daftar nilai yang dipisahkan koma di sini. Ini akan ditampilkan dalam kotak dropdown setiap kali bidang diedit.';

$GLOBALS["lang"]['If you set the values for'] = 'Jika Anda menentukan nilai untuk';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Jika Anda ingin memaksa Agen Anda untuk menggunakan konfigurasi tertentu, Anda dapat menyediakan ID dari entri agen untuk digunakan, sebagai di bawah (ganti $id dengan jumlah dari entry Agen). Ketika Agen ini diinstal, itu akan check-in dengan sevrer dan <strong>hanya</strong> periksa bahwa satu individu Agen entrys atribut (tes dan aksi). Ini mungkin berguna jika Anda seorang MSP - membuat entri Agen untuk pelanggan tertentu dan memiliki perangkat mereka semua menggunakan entri ini, yang menugaskan mereka untuk Org dan Lokasi.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Jika Anda ingin menggali dan menyesuaikan Integrasi, klik tombol Advanced (dan coba untuk tidak kewalahan!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Bila Anda ingin menjalankan Discovery pada perangkat yang disediakan secara eksternal, pilih opsi dan ketika Integrasi dibuat, maka Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Jika anda ingin menggunakan script di luar Discovery kami telah membuat titik akhir lain yang disebut <i>skrip</i>. Lihat dokumentasi';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Jika pengguna anda tidak memiliki <i>Jalankan sebagai Administrator</i> Hak, mereka masih dapat men-download agen (perintah pertama di atas) dan menjalankannya untuk mengirimkan audit sebagai di bawah. Ini akan menjadi audit satu - off tanpa Agen yang sedang dipasang atau dijadwalkan.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Abaikan SSL yang tak valid';

$GLOBALS["lang"]['Ignored'] = 'Diabaikan';

$GLOBALS["lang"]['image'] = 'Gambar';

$GLOBALS["lang"]['Image'] = 'Gambar';

$GLOBALS["lang"]['Images'] = 'Gambar';

$GLOBALS["lang"]['impact_availability'] = 'Ketersediaan Dampak';

$GLOBALS["lang"]['Impact Availability'] = 'Ketersediaan Dampak';

$GLOBALS["lang"]['impact_confidentiality'] = 'Dampak Kerahasiaan';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Dampak Kerahasiaan';

$GLOBALS["lang"]['impact_integrity'] = 'Integritas Dampak';

$GLOBALS["lang"]['Impact Integrity'] = 'Integritas Dampak';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implikasi kontrol dan prosedur yang dipilih';

$GLOBALS["lang"]['Implementation'] = 'Implementasi';

$GLOBALS["lang"]['implementation_notes'] = 'Catatan Implementasi';

$GLOBALS["lang"]['Implementation Notes'] = 'Catatan Implementasi';

$GLOBALS["lang"]['Import'] = 'Impor';

$GLOBALS["lang"]['Import Example Data'] = 'Impor Data Contoh';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Impor multiple {collect} memakai CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Kesempatan Menimbulkan';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Kesempatan Menimbulkan';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Meningkatkan kelanjutan bisnis dan ketahanan';

$GLOBALS["lang"]['In'] = 'Masuk';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Dalam tab kedua atau jendela menuju konsol OKTA dan klik <i>Buat Integrasi App</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Dalam tab kedua atau jendela sinyal ke Anda';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Menurut pendapat pribadi saya, cara terbaik untuk menemukan dan mengaudit setiap barang di jaringan Anda adalah Discovery Benih untuk setiap jaringan, dibatasi oleh jaringan internet tersebut (menggunakan kredensial). Seed Discoveries menggunakan switch, router dan tabel alamat MAC komputer untuk tidak melewatkan satu perangkat pun. Jika terhubung ke jaringan dan menggunakan TCP / IP, switch / router / komputer harus tahu itu ada - thats hanya bagaimana TCP / IP bekerja. Mengkombinasikan dengan port UDP dan / atau UDP suai dan Anda seharusnya dapat menentukan jenis perangkat tersebut juga. Tapi itu hanya preferensi pribadi saya';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Agar Open-Auditt dapat menerapkan izin pengguna pada item, kami mandat pengguna <code>WHERE @filter</code>. Jika Anda tidak menggunakan format ini, formatnya akan memberi peringatan. Hanya pengguna dengan peran Admin yang diizinkan untuk membuat kueri yang kurang atribut ini dan bahkan kemudian, hanya setelah item konfigurasi untuk <i>_ Kueri tingkat lanjut</i> telah diaktifkan.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Akun Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Untuk menggunakan API Istirahat Azure, Anda perlu membuat Aplikasi Direktori Aktif Azure yang dipakai untuk otentikasi.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Dalam rangka untuk menggunakan fungsionalitas ini, itu harus diaktifkan dalam konfigurasi - klik';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Dalam daftar (koma dipisahkan)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Dalam kasus <code>in</code> dan <code>notin</code>, Anda harus menutup nilai dalam kurung bulat dan memisahkan mereka menggunakan koma (hanya koma, bukan koma, lalu spasi).<br/><br/>Dengan operator ini Anda dapat menyaring cukup dimengerti.<br/><br/>Ketika Anda menambahkan data dan filter pada beberapa kolom, kolom-kolom tersebut dikombinasikan menggunakan <strong>DAN</strong>. Anda tidak dapat menyaring menggunakan <strong>OR</strong> kondisi. Dengan penyertaan <code>notin</code>, Anda harus dapat mendapatkan pencarian paling bekerja. Dan bagi mereka yang benar-benar memerlukan pilihan yang tidak didukung dan kompleks, Anda selalu dapat menulis permintaan yang sebenarnya.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Dalam kasus di mana kami menyimpan beberapa bidang (biasanya dalam format JSON) di dalam bidang MySQL BIGTET (misalnya: kredensial. kredensial - kolom kredensial dalam tabel kredensial), anda seharusnya menggunakan format';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Dalam shell command prompt, menavigasi ke direktori unduh (kemungkinan <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Tidak aktif';

$GLOBALS["lang"]['Incomplete'] = 'Tidak lengkap';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Indonesian'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Hanya informasi.';

$GLOBALS["lang"]['Informational'] = 'Informasional';

$GLOBALS["lang"]['initial_size'] = 'Ukuran Awal';

$GLOBALS["lang"]['Initial Size'] = 'Ukuran Awal';

$GLOBALS["lang"]['Initial login credentials are'] = 'Kredensial log masuk awal adalah';

$GLOBALS["lang"]['Initiation'] = 'Inisiasi';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Masukan';

$GLOBALS["lang"]['Input Type'] = 'Tipe Masukan';

$GLOBALS["lang"]['inputs'] = 'Masukan';

$GLOBALS["lang"]['Inputs'] = 'Masukan';

$GLOBALS["lang"]['Insane'] = 'Gila';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Masukkan entri baru {collection}.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Masukkan contoh data dan menemukan semua yang Open-Audit dapat memberitahu Anda.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Sisipkan Lisensi yang dibeli Kunci';

$GLOBALS["lang"]['install'] = 'Pasang';

$GLOBALS["lang"]['Install'] = 'Pasang';

$GLOBALS["lang"]['install_date'] = 'Pasang Tanggal';

$GLOBALS["lang"]['Install Date'] = 'Pasang Tanggal';

$GLOBALS["lang"]['install_directory'] = 'Pasang Direktori';

$GLOBALS["lang"]['Install Directory'] = 'Pasang Direktori';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Pasang OpenScap bila diperlukan';

$GLOBALS["lang"]['install_source'] = 'Pasang Sumber';

$GLOBALS["lang"]['Install Source'] = 'Pasang Sumber';

$GLOBALS["lang"]['Install Support'] = 'Pasang Dukungan';

$GLOBALS["lang"]['installed_by'] = 'Diinstal oleh';

$GLOBALS["lang"]['Installed By'] = 'Diinstal oleh';

$GLOBALS["lang"]['installed_on'] = 'Terpasang Pada';

$GLOBALS["lang"]['Installed On'] = 'Terpasang Pada';

$GLOBALS["lang"]['Installing'] = 'Memasang';

$GLOBALS["lang"]['Installing on Linux'] = 'Memasang Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Memasang di MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Memasang Windows';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Identasi Instance';

$GLOBALS["lang"]['Instance Ident'] = 'Identasi Instance';

$GLOBALS["lang"]['instance_options'] = 'Opsi Instance';

$GLOBALS["lang"]['Instance Options'] = 'Opsi Instance';

$GLOBALS["lang"]['instance_provider'] = 'Penyedia Instance';

$GLOBALS["lang"]['Instance Provider'] = 'Penyedia Instance';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Reservasi Instance Indentasi';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Reservasi Instance Indentasi';

$GLOBALS["lang"]['instance_state'] = 'Keadaan';

$GLOBALS["lang"]['Instance State'] = 'Keadaan';

$GLOBALS["lang"]['instance_tags'] = 'Tag Instance';

$GLOBALS["lang"]['Instance Tags'] = 'Tag Instance';

$GLOBALS["lang"]['instance_type'] = 'Tipe Instance';

$GLOBALS["lang"]['Instance Type'] = 'Tipe Instance';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integrasi';

$GLOBALS["lang"]['integrations'] = 'Integrasi';

$GLOBALS["lang"]['Integrations'] = 'Integrasi';

$GLOBALS["lang"]['integrations_id'] = 'ID Integrasinya';

$GLOBALS["lang"]['Integrations ID'] = 'ID Integrasinya';

$GLOBALS["lang"]['integrations_log'] = 'Log Integrasinya';

$GLOBALS["lang"]['Integrations Log'] = 'Log Integrasinya';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrasi dapat dijadwalkan sesuai keinginan. Ini diserahkan ke pengguna.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrasi dapat dijadwalkan sesuai dengan Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Dashboard Interaktif';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Dashboard interaktif memberikan visibilitas instan ke status persediaan jaringan memungkinkan tim IT untuk melihat perangkat yang baru ditemukan dan perilaku perangkat yang tidak biasa sekilas.';

$GLOBALS["lang"]['interface'] = 'Antarmuka';

$GLOBALS["lang"]['Interface'] = 'Antarmuka';

$GLOBALS["lang"]['interface_id'] = 'ID Antar Muka';

$GLOBALS["lang"]['Interface ID'] = 'ID Antar Muka';

$GLOBALS["lang"]['interface_type'] = 'Tipe Antar Muka';

$GLOBALS["lang"]['Interface Type'] = 'Tipe Antar Muka';

$GLOBALS["lang"]['Internal'] = 'Internal';

$GLOBALS["lang"]['Internal Audit'] = 'Audit Internal';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Audit Internal & Review';

$GLOBALS["lang"]['Internal Field Name'] = 'Nama Lapangan Internal';

$GLOBALS["lang"]['Internal ID'] = 'ID Internal';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Internal JSON array dari token akses yang valid untuk pengguna ini.';

$GLOBALS["lang"]['Introduction'] = 'Perkenalan';

$GLOBALS["lang"]['invoice'] = 'Invoice';

$GLOBALS["lang"]['Invoice'] = 'Invoice';

$GLOBALS["lang"]['invoice_id'] = 'ID Suara';

$GLOBALS["lang"]['Invoice ID'] = 'ID Suara';

$GLOBALS["lang"]['invoice_item'] = 'Butir Suara';

$GLOBALS["lang"]['Invoice Item'] = 'Butir Suara';

$GLOBALS["lang"]['ios_version'] = 'Versi Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versi Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Alamat Ip Eksternal A';

$GLOBALS["lang"]['Ip Address External A'] = 'Alamat Ip Eksternal A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Alamat Ip Eksternal B';

$GLOBALS["lang"]['Ip Address External B'] = 'Alamat Ip Eksternal B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Alamat Ip Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Alamat Ip Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Alamat Ip Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Alamat Ip Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Semua Cacah';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Semua Cacah';

$GLOBALS["lang"]['ip_audited_count'] = 'Cacah Ip Audited';

$GLOBALS["lang"]['Ip Audited Count'] = 'Cacah Ip Audited';

$GLOBALS["lang"]['ip_discovered_count'] = 'Cacah Yang Ditemukan Ip';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Cacah Yang Ditemukan Ip';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Diaktifkan';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Diaktifkan';

$GLOBALS["lang"]['ip_responding_count'] = 'Cacah Tanggapan Ip';

$GLOBALS["lang"]['Ip Responding Count'] = 'Cacah Tanggapan Ip';

$GLOBALS["lang"]['ip_scanned_count'] = 'Cacah Scanned Ip';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Cacah Scanned Ip';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irlandia';

$GLOBALS["lang"]['Irish'] = 'Irlandia';

$GLOBALS["lang"]['Is FRU'] = 'Apakah FRU';

$GLOBALS["lang"]['is_fru'] = 'Apakah Fru';

$GLOBALS["lang"]['Is Fru'] = 'Apakah Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Apakah server lokal NMIS (pada server Open-Audit) atau remote ini?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Apakah akun ini aktif? Jika diatur ke <code>n</code>, pengguna tidak dapat logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Apakah query ini dibatasi untuk pelanggan berlisensi.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Apakah tugas ini diaktifkan (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Isu';

$GLOBALS["lang"]['issuer'] = 'Penerbit';

$GLOBALS["lang"]['Issuer'] = 'Penerbit';

$GLOBALS["lang"]['issuer_name'] = 'Nama Penerbit';

$GLOBALS["lang"]['Issuer Name'] = 'Nama Penerbit';

$GLOBALS["lang"]['Issues'] = 'Masalah';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Ini <i>Hanya Bekerja</i> dengan NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Tersedia di Menu - > Bantuan - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Penting untuk dicatat bahwa ketika Open-Auditt menentukan kecocokan properti apapun yang ditata ke <i>y</i> harus cocok persis (dan tidak kosong) dalam rangka untuk Open-Audit untuk menentukan bahwa perangkat yang ditemukan cocok dengan perangkat yang sudah dalam database. Bila tak ada properti yang ditandai <i>y</i> cocok, maka masukan perangkat baru akan dibuat, yang dapat mengakibatkan entri perangkat duplikat. Dalam situasi di mana properti diduplikasi, misalnya dbus _ id disalin selama klon VM, maka perangkat yang ada mungkin tidak benar mendapatkan ditulis ulang / diperbarui bukan entri baru yang dibuat menghasilkan perangkat hilang.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Hal ini tidak biasa untuk memiliki ruang alamat tumpang tindih dalam Organisasi yang diberikan. Tidak ideal, tapi tidak biasa.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Hal ini sangat umum untuk motherboard tingkat kedua produsen untuk tidak mengatur ini, untuk mengatur ke semua <i>0</i>s atau bahkan semua <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'Italia';

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Item tidak dalam Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Impor';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Januari';

$GLOBALS["lang"]['Japan'] = 'Jepang';

$GLOBALS["lang"]['Japanese'] = 'Jepang';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Versi Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versi Kernel';

$GLOBALS["lang"]['Key'] = 'Kunci';

$GLOBALS["lang"]['Key Components'] = 'Komponen Kunci';

$GLOBALS["lang"]['Key Password (optional)'] = 'Sandi Kunci (opsional)';

$GLOBALS["lang"]['keys'] = 'Tombol';

$GLOBALS["lang"]['Keys'] = 'Tombol';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kyrgyz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Republik Kyrgyz';

$GLOBALS["lang"]['LDAP Group'] = 'Grup LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP dicari untuk pengguna ini dan rekening mereka ditemukan.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP dicari untuk pengguna ini dan akun mereka tidak ditemukan. Periksa log server LDAP. Kredensial pengguna telah bekerja, tetapi pengguna tidak ditemukan. Juga periksa apakah anda telah menspesifikasikan atribut Basis DN yang benar ketika anda membuat Server LDAP dalam Open- Audit.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Bahasa';

$GLOBALS["lang"]['Language'] = 'Bahasa';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Perubahan Terakhir';

$GLOBALS["lang"]['Last Changed'] = 'Perubahan Terakhir';

$GLOBALS["lang"]['last_finished'] = 'Akhir Selesai';

$GLOBALS["lang"]['Last Finished'] = 'Akhir Selesai';

$GLOBALS["lang"]['last_logon'] = 'Logon Terakhir';

$GLOBALS["lang"]['Last Logon'] = 'Logon Terakhir';

$GLOBALS["lang"]['Last Name'] = 'Nama Belakang';

$GLOBALS["lang"]['last_os_update'] = 'Perbarui Os Terakhir';

$GLOBALS["lang"]['Last Os Update'] = 'Perbarui Os Terakhir';

$GLOBALS["lang"]['last_result'] = 'Hasil Terakhir';

$GLOBALS["lang"]['Last Result'] = 'Hasil Terakhir';

$GLOBALS["lang"]['last_run'] = 'Last Run';

$GLOBALS["lang"]['Last Run'] = 'Last Run';

$GLOBALS["lang"]['last_seen'] = 'Terakhir Terlihat';

$GLOBALS["lang"]['Last Seen'] = 'Terakhir Terlihat';

$GLOBALS["lang"]['last_seen_by'] = 'Terakhir Terlihat Oleh';

$GLOBALS["lang"]['Last Seen By'] = 'Terakhir Terlihat Oleh';

$GLOBALS["lang"]['last_user'] = 'Pengguna Terakhir';

$GLOBALS["lang"]['Last User'] = 'Pengguna Terakhir';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Terakhir WMI. Bagi Windows dalam Linux, seorang pengguna dengan akses level Administrator lebih disukai (lihat Konfigurasi Target Klien pada wiki).';

$GLOBALS["lang"]['lastModified'] = 'Diubah Terakhir';

$GLOBALS["lang"]['LastModified'] = 'Diubah Terakhir';

$GLOBALS["lang"]['latitude'] = 'Garis lintang';

$GLOBALS["lang"]['Latitude'] = 'Garis lintang';

$GLOBALS["lang"]['Latvia'] = 'Latvia';

$GLOBALS["lang"]['Latvian'] = 'Latvia';

$GLOBALS["lang"]['Layout'] = 'Tata Letak';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Basis Ldap Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Basis Ldap Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Akun Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Akun Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Sandi Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Sandi Ldap Dn';

$GLOBALS["lang"]['Learn About'] = 'Pelajari Tentang';

$GLOBALS["lang"]['Learn More'] = 'Pelajari Lebih';

$GLOBALS["lang"]['lease_expiry_date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Tanggal Kadaluwarsa';

$GLOBALS["lang"]['Lebanon'] = 'Lebanon';

$GLOBALS["lang"]['legal_requirements'] = 'Permintaan Hukum';

$GLOBALS["lang"]['Legal Requirements'] = 'Permintaan Hukum';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Kurang Dari';

$GLOBALS["lang"]['Less Than or Equals'] = 'Kurang Dari atau Sama';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Mari kita atur logging ke debug. Salin berkas:';

$GLOBALS["lang"]['level'] = 'Tingkat';

$GLOBALS["lang"]['Level'] = 'Tingkat';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Tingkat hak istimewa diperlukan untuk mengeksploitasi (Tidak, Rendah, Tinggi).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Pustaka (ie, kode bahwa program lain mungkin termasuk). Ini adalah biasanya item seperti ekstensi Wordpress, ekstensi drupal, perpustakaan node.js, Android / iPhone / Windows perpustakaan, perpustakaan python, dll.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Orang Libya Arab Jamaiya';

$GLOBALS["lang"]['License'] = 'Lisensi';

$GLOBALS["lang"]['License Key'] = 'Kunci Lisensi';

$GLOBALS["lang"]['License Required'] = 'Lisensi Diperlukan';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Pengguna licensed bebas untuk menambahkan atau memodifikasi aturan seperti yang Anda lihat cocok. Jika Anda memiliki perangkat dengan OID SNMP yang tidak cocok dengan model yang sudah ada di berkas - sekarang Anda dapat menambahkannya dengan mudah. Tidak ada lagi menunggu bagi kita untuk menyediakan patch dan menambahkannya ke basis kode untuk Anda.<br/><br/>Ketika Anda membuat entri Aturan, Anda harus memberikan nama dan daftar masukan dan keluaran. Masukan dan keluar disimpan sebagai deretan JSON dalam database.<br/><br/>Masukan memiliki tabel dan atribut, operator dan nilai. Ketika mengeksekusi kondisi, ia bekerja demikian: Jika tabel $. $atribut $operator $$nilai kemudian menerapkan keluaran.<br/><br/>Suatu contoh aturan yang cocok dengan OID SNMP dan set model di bawah ini.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licenses';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Seperti';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Seperti sebagian besar atribut lain, Tambahan Fields dapat banyak disunting. Gunakan fungsi Sunting Bulk seperti biasanya dan Anda akan melihat Medan Tambahan tersedia untuk masukan.';

$GLOBALS["lang"]['Like versus Equals'] = 'Seperti versus Equals';

$GLOBALS["lang"]['limit'] = 'Batas';

$GLOBALS["lang"]['Limit'] = 'Batas';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Batasi permintaan ke item X pertama.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Terbatas 100 baris.';

$GLOBALS["lang"]['line_amount'] = 'Baris Amount';

$GLOBALS["lang"]['Line Amount'] = 'Baris Amount';

$GLOBALS["lang"]['Line Graph'] = 'Grafik Baris';

$GLOBALS["lang"]['line_number_a'] = 'Nomor Baris A';

$GLOBALS["lang"]['Line Number A'] = 'Nomor Baris A';

$GLOBALS["lang"]['line_number_b'] = 'Nomor Baris B';

$GLOBALS["lang"]['Line Number B'] = 'Nomor Baris B';

$GLOBALS["lang"]['line_text'] = 'Teks Baris';

$GLOBALS["lang"]['Line Text'] = 'Teks Baris';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Grafik baris harus kembali tanggal atau tanggal _ saya, deskripsi atau deskripsi saya dan menghitung.';

$GLOBALS["lang"]['link'] = 'Taut';

$GLOBALS["lang"]['Link'] = 'Taut';

$GLOBALS["lang"]['Link (Advanced)'] = 'Taut (Lanjutan)';

$GLOBALS["lang"]['Linked Files'] = 'Berkas Terkait';

$GLOBALS["lang"]['links'] = 'Taut';

$GLOBALS["lang"]['Links'] = 'Taut';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Hubungkan penemuan ini ke awan yang terkait (jika diperlukan). Taut ke <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Taut ke <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Taut ke <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Taut ke <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Paket Linux';

$GLOBALS["lang"]['List'] = 'Daftar';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Daftar Semua Port NMAP, Protokol dan Program Untuk Setiap Perangkat';

$GLOBALS["lang"]['List Devices'] = 'Perangkat Daftar';

$GLOBALS["lang"]['List Discoveries'] = 'Daftar Temukan';

$GLOBALS["lang"]['list_table_format'] = 'Format Tabel Daftar';

$GLOBALS["lang"]['List Table Format'] = 'Format Tabel Daftar';

$GLOBALS["lang"]['List Tables'] = 'Tabel Daftar';

$GLOBALS["lang"]['Lithuania'] = 'Lithuania';

$GLOBALS["lang"]['Lithuanian'] = 'Lithuania';

$GLOBALS["lang"]['Load Balancing'] = 'Muat Balancing';

$GLOBALS["lang"]['Local'] = 'Lokal';

$GLOBALS["lang"]['Local Area Network'] = 'Jaringan Area Lokal';

$GLOBALS["lang"]['local_port'] = 'Port Lokal';

$GLOBALS["lang"]['Local Port'] = 'Port Lokal';

$GLOBALS["lang"]['Local area network'] = 'Jaringan area lokal';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalisasi';

$GLOBALS["lang"]['Location'] = 'Lokasi';

$GLOBALS["lang"]['Location A'] = 'Lokasi A';

$GLOBALS["lang"]['Location B'] = 'Lokasi B';

$GLOBALS["lang"]['location_id'] = 'ID Lokasi';

$GLOBALS["lang"]['Location ID'] = 'ID Lokasi';

$GLOBALS["lang"]['location_id_a'] = 'ID Lokasi A';

$GLOBALS["lang"]['Location ID A'] = 'ID Lokasi A';

$GLOBALS["lang"]['location_id_b'] = 'ID Lokasi B';

$GLOBALS["lang"]['Location ID B'] = 'ID Lokasi B';

$GLOBALS["lang"]['location_latitude'] = 'Lokasi Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Lokasi Latitude';

$GLOBALS["lang"]['location_level'] = 'Tingkat Lokasi';

$GLOBALS["lang"]['Location Level'] = 'Tingkat Lokasi';

$GLOBALS["lang"]['location_longitude'] = 'Lokasi Bujur';

$GLOBALS["lang"]['Location Longitude'] = 'Lokasi Bujur';

$GLOBALS["lang"]['Location Name'] = 'Nama Lokasi';

$GLOBALS["lang"]['location_rack'] = 'Rack Lokasi';

$GLOBALS["lang"]['Location Rack'] = 'Rack Lokasi';

$GLOBALS["lang"]['location_rack_position'] = 'Posisi Rack Lokasi';

$GLOBALS["lang"]['Location Rack Position'] = 'Posisi Rack Lokasi';

$GLOBALS["lang"]['location_rack_size'] = 'Ukuran Rack Lokasi';

$GLOBALS["lang"]['Location Rack Size'] = 'Ukuran Rack Lokasi';

$GLOBALS["lang"]['location_room'] = 'Ruang Lokasi';

$GLOBALS["lang"]['Location Room'] = 'Ruang Lokasi';

$GLOBALS["lang"]['location_suite'] = 'Lokasi Suite';

$GLOBALS["lang"]['Location Suite'] = 'Lokasi Suite';

$GLOBALS["lang"]['Locations'] = 'Lokasi';

$GLOBALS["lang"]['Locations in this'] = 'Lokasi di sini';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Format Log';

$GLOBALS["lang"]['Log Format'] = 'Format Log';

$GLOBALS["lang"]['Log Line'] = 'Baris Log';

$GLOBALS["lang"]['log_path'] = 'Path Log';

$GLOBALS["lang"]['Log Path'] = 'Path Log';

$GLOBALS["lang"]['log_rotation'] = 'Putar Log';

$GLOBALS["lang"]['Log Rotation'] = 'Putar Log';

$GLOBALS["lang"]['log_status'] = 'Status Log';

$GLOBALS["lang"]['Log Status'] = 'Status Log';

$GLOBALS["lang"]['Logging in'] = 'Log masuk';

$GLOBALS["lang"]['Logical Cores '] = 'Otak Logis ';

$GLOBALS["lang"]['logical_count'] = 'Cacah Logis';

$GLOBALS["lang"]['Logical Count'] = 'Cacah Logis';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Log';

$GLOBALS["lang"]['longitude'] = 'Bujur';

$GLOBALS["lang"]['Longitude'] = 'Bujur';

$GLOBALS["lang"]['low'] = 'Rendah';

$GLOBALS["lang"]['Low'] = 'Rendah';

$GLOBALS["lang"]['Lower Case'] = 'Huruf kecil';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nama host Huruf Kecil';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'Alamat MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Manufaktur';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Alamat Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Paket MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Menjaga catatan penilaian risiko dan perawatan';

$GLOBALS["lang"]['maintenance_expires'] = 'Expires Pemeliharaan';

$GLOBALS["lang"]['Maintenance Expires'] = 'Expires Pemeliharaan';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Buat Dashboard Bawaan';

$GLOBALS["lang"]['Make this install a Collector'] = 'Buat ini menginstal Kolektor';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Melayu';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldives';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Kelola';

$GLOBALS["lang"]['Manage Licenses'] = 'Kelola Licenses';

$GLOBALS["lang"]['Manage in NMIS'] = 'Kelola di NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Kelola insiden dan bukan ketentuan';

$GLOBALS["lang"]['Managed'] = 'Diatur';

$GLOBALS["lang"]['managed_by'] = 'Managed By';

$GLOBALS["lang"]['Managed By'] = 'Managed By';

$GLOBALS["lang"]['Manual Input'] = 'Masukan Manual';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Diatur secara manual oleh pengguna, baku ke Produksi.';

$GLOBALS["lang"]['Manually set by user.'] = 'Diatur secara manual oleh pengguna.';

$GLOBALS["lang"]['manufacture_date'] = 'Tanggal Pembuat';

$GLOBALS["lang"]['Manufacture Date'] = 'Tanggal Pembuat';

$GLOBALS["lang"]['manufacturer'] = 'Manufaktur';

$GLOBALS["lang"]['Manufacturer'] = 'Manufaktur';

$GLOBALS["lang"]['manufacturer_code'] = 'Kode Pembuat';

$GLOBALS["lang"]['Manufacturer Code'] = 'Kode Pembuat';

$GLOBALS["lang"]['Map'] = 'Peta';

$GLOBALS["lang"]['maps'] = 'Peta';

$GLOBALS["lang"]['Maps'] = 'Peta';

$GLOBALS["lang"]['March'] = 'Maret';

$GLOBALS["lang"]['Marshall Islands'] = 'Kepulauan Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Mask';

$GLOBALS["lang"]['Mask'] = 'Mask';

$GLOBALS["lang"]['Match'] = 'Cocok';

$GLOBALS["lang"]['match_options'] = 'Opsi Cocok';

$GLOBALS["lang"]['Match Options'] = 'Opsi Cocok';

$GLOBALS["lang"]['Match Order'] = 'Urutan Cocok';

$GLOBALS["lang"]['Match Process'] = 'Cocok Proses';

$GLOBALS["lang"]['match_string'] = 'Cocok String';

$GLOBALS["lang"]['Match String'] = 'Cocok String';

$GLOBALS["lang"]['Matching Attribute'] = 'Atribut Yang Cocok';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Perangkat Pencocokan - Termasuk OrganID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Cocok dengan Perangkat Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Cocok dilakukan dalam urutan berikut';

$GLOBALS["lang"]['maturity_level'] = 'Tingkat Maturity';

$GLOBALS["lang"]['Maturity Level'] = 'Tingkat Maturity';

$GLOBALS["lang"]['maturity_score'] = 'Nilai Maturity';

$GLOBALS["lang"]['Maturity Score'] = 'Nilai Maturity';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Ukuran Berkas Maks';

$GLOBALS["lang"]['Max File Size'] = 'Ukuran Berkas Maks';

$GLOBALS["lang"]['Max Length'] = 'Panjang Max';

$GLOBALS["lang"]['max_size'] = 'Ukuran Max';

$GLOBALS["lang"]['Max Size'] = 'Ukuran Max';

$GLOBALS["lang"]['May'] = 'Mei';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mengukur kemungkinan kerentanan yang diserang, dan didasarkan pada keadaan saat ini mengeksploitasi teknik, mengeksploitasi ketersediaan kode, atau aktif, "di-the- liar" eksploitasi.';

$GLOBALS["lang"]['medium'] = 'Sedang';

$GLOBALS["lang"]['Medium'] = 'Sedang';

$GLOBALS["lang"]['members'] = 'Anggota';

$GLOBALS["lang"]['Members'] = 'Anggota';

$GLOBALS["lang"]['memory'] = 'Memori';

$GLOBALS["lang"]['Memory'] = 'Memori';

$GLOBALS["lang"]['memory_count'] = 'Cacah Memori';

$GLOBALS["lang"]['Memory Count'] = 'Cacah Memori';

$GLOBALS["lang"]['memory_slot_count'] = 'Cacah Slot Memori';

$GLOBALS["lang"]['Memory Slot Count'] = 'Cacah Slot Memori';

$GLOBALS["lang"]['menu_category'] = 'Kategori Menu';

$GLOBALS["lang"]['Menu Category'] = 'Kategori Menu';

$GLOBALS["lang"]['menu_display'] = 'Tampilan Menu';

$GLOBALS["lang"]['Menu Display'] = 'Tampilan Menu';

$GLOBALS["lang"]['message'] = 'Pesan';

$GLOBALS["lang"]['Message'] = 'Pesan';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Terakhir Berubah';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Terakhir Berubah';

$GLOBALS["lang"]['metric'] = 'Metrik';

$GLOBALS["lang"]['Metric'] = 'Metrik';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Jaringan Area Metropolitan';

$GLOBALS["lang"]['Metropolitan area network'] = 'Jaringan area Metropolitan';

$GLOBALS["lang"]['Mexico'] = 'Meksiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikrotime';

$GLOBALS["lang"]['Microtime'] = 'Mikrotime';

$GLOBALS["lang"]['minute'] = 'Menit';

$GLOBALS["lang"]['Minute'] = 'Menit';

$GLOBALS["lang"]['Minutes'] = 'Menit';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Menit Sejak Audit lalu yang Greater daripada';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Keluarga Model';

$GLOBALS["lang"]['Model Family'] = 'Keluarga Model';

$GLOBALS["lang"]['Modified'] = 'Diubah';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Mengubah Skrip Yang Telah Ada';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Indeks Modul';

$GLOBALS["lang"]['Module Index'] = 'Indeks Modul';

$GLOBALS["lang"]['Modules'] = 'Modul';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Senin';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitor dan ukuran kinerja IMS';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Bulan';

$GLOBALS["lang"]['Month'] = 'Bulan';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Informasi Lebih';

$GLOBALS["lang"]['More Secure'] = 'Lebih Aman';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Lebih rumit SQL dapat digunakan untuk grup atribut dalam jangkauan. Di bawah ini menunjukkan perangkat SQL yang belum pernah dilihat dalam grafik pie dikelompokkan oleh rentang tanggal terakhir yang terlihat.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Informasi lebih lanjut tentang debug ini dapat ditemukan pada thread Stack Overflow yang membantu';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Kemungkinan besar firewall Windows (atau firewall pihak ketiga) menolak usaha sambungan.<br/><br/>Silakan log on ke target Windows mesin dan memeriksa pengaturan firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Sebagian besar Open- Auditt adalah Licensed dengan GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Titik Kait';

$GLOBALS["lang"]['Mount Point'] = 'Titik Kait';

$GLOBALS["lang"]['mount_type'] = 'Jenis Kait';

$GLOBALS["lang"]['Mount Type'] = 'Jenis Kait';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Harus merespon ke Ping. Jika diatur, Nmap akan berusaha mengirim dan mendengarkan respon ICMP. Jika perangkat tidak merespon, tidak ada pemindaian lebih lanjut akan terjadi.<br/>Sebelumnya sebuah perangkat tidak perlu merespon ke ping untuk Open- Auditt untuk melanjutkan pemindaian.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Harus merespon Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'AntiVirus saya mendorong saya untuk menyangkal / memungkinkan hal-hal';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'My time is off in Open-Audit';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N-to- 1';

$GLOBALS["lang"]['N-to-N'] = 'N-to- N';

$GLOBALS["lang"]['NMIS Business Service'] = 'Layanan Bisnis NMIS';

$GLOBALS["lang"]['NMIS Customer'] = 'Pelanggan NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opsi Perangkat NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Pemilihan Perangkat NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nama Field NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Tipe Field NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Peran';

$GLOBALS["lang"]['NOTE'] = 'CATATAN';

$GLOBALS["lang"]['NOTE #2'] = 'CATATAN # 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'CATATAN - Untuk informasi lebih lanjut dalam format DateTime, lihat';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'CATATAN - Jika Anda meminta sebuah CSV yang diunduh, XML atau format JSON (baik satu kredensial, atau koleksi lengkap) rincian kredensial aktual akan dikirim. Bukan string terenkripsi, nama pengguna sebenarnya, sandi, string komunitas, dll. Rincian sensitif apapun tidak ditampilkan dalam GUI web, tetapi dibuat tersedia melalui format lain. Untuk mencegah ekspor item konfigurasi ini tersedia yang bernama decrypt _ credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'CATATAN - Kurly kurung dalam data yang diajukan harus digunakan as - adalah (tidak diganti sebagai per contoh lain di atas).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'CATATAN - Anda dapat mencegah kredensial teks polos ditampilkan di bawah ini dengan menset item konfigurasi untuk <code>decrypt_credentials</code> ke <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nama';

$GLOBALS["lang"]['Name'] = 'Nama';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nama yang kau berikan pada bidang ini. Idealnya harus unik.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Indeks Net';

$GLOBALS["lang"]['Net Index'] = 'Indeks Net';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antilles Belanda';

$GLOBALS["lang"]['Netherlands the'] = 'Belanda';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Kebijakan Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Port Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports menggunakan kombinasi dari nomor port, protokol, dan program. Jika semua hadir kebijakan berlalu.';

$GLOBALS["lang"]['Network'] = 'Jaringan';

$GLOBALS["lang"]['network_address'] = 'Alamat Jaringan';

$GLOBALS["lang"]['Network Address'] = 'Alamat Jaringan';

$GLOBALS["lang"]['Network Discovery'] = 'Discovery Jaringan';

$GLOBALS["lang"]['network_domain'] = 'Domain Jaringan';

$GLOBALS["lang"]['Network Domain'] = 'Domain Jaringan';

$GLOBALS["lang"]['Network Types'] = 'Tipe Jaringan';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Tipe jaringan diatur ke Jaringan Area Lokal secara baku, tetapi dapat diubah oleh pengguna seperti yang mereka inginkan. Tipe yang didukung di bawah (dengan berkat Wikipedia).<br/><br/>Jaringan dapat ditandai dengan kapasitas fisik atau tujuan organisasinya. Penggunaan jaringan, termasuk otorisasi pengguna dan hak akses, berbeda sesuai.';

$GLOBALS["lang"]['networks'] = 'Jaringan';

$GLOBALS["lang"]['Networks'] = 'Jaringan';

$GLOBALS["lang"]['Networks Generated By'] = 'Networks Generated By';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Jaringan diperbarui dengan setiap penemuan. Item seperti IP Tersedia dan IP Digunakan, bersama dengan Gateways, DHCP dan DNS Server ditambahkan seperti ditemukan.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Jaringan merespon berbeda tergantung pada bagaimana mereka dikonfigurasi. Beberapa router dan / atau firewall dapat merespon <i>Atas nama</i> dari IP di sisi lain dari antarmuka mereka ke Open- Audit Server. Hal ini cukup umum untuk melihat Nmap melaporkan probe untuk SNMP (port UDP 161) untuk merespon sebagai terbuka £124; disaring untuk perangkat yang dilakukan dan tidak ada. Ini menyesatkan karena tidak ada perangkat pada IP itu, namun berakhir dengan entri perangkat dalam database. 99,9% dari waktu, itu bukan Open-Audit, atau bahkan Nmap, tetapi jaringan yang menyebabkan masalah ini. Sekarang kita memiliki pilihan untuk mengobati terbuka £124; ports disaring sebagai baik terbuka atau tertutup, kita dapat menghilangkan banyak kebingungan ini. Pengguna Enterprise bahkan memiliki pilihan untuk mengubah ini pada dasar penemuan (lebih dari sekedar menggunakan item Medium (Classic), seperti di atas).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Jaringan memakai Mask CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Nama Bangunan Baru';

$GLOBALS["lang"]['New Caledonia'] = 'New Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nama Lantai Baru';

$GLOBALS["lang"]['New Room Name'] = 'Nama Kamar Baru';

$GLOBALS["lang"]['New Row Name'] = 'Nama Baris Baru';

$GLOBALS["lang"]['New Zealand'] = 'Selandia Baru';

$GLOBALS["lang"]['News'] = 'Berita';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Periksa berita-dalam setiap kali Anda login untuk query terbaru & paket, rekomendasi konfigurasi, rilis pengumuman, posting blog dan banyak lagi.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Berita adalah cara kami untuk membuat Anda up- to-date dengan perbaikan terbaru, pengumuman, query update, versi perangkat lunak dan lebih.<br/><br/>Anda tidak perlu menjaga di atas wiki atau memeriksa untuk rilis baru, kami dapat mengirim ini kepada Anda!';

$GLOBALS["lang"]['next_hop'] = 'Hop Berikutnya';

$GLOBALS["lang"]['Next Hop'] = 'Hop Berikutnya';

$GLOBALS["lang"]['next_run'] = 'Run Berikutnya';

$GLOBALS["lang"]['Next Run'] = 'Run Berikutnya';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Klik berikutnya <i>Buat aplikasi Anda sendiri</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Selanjutnya, klik OK, lalu klik kanan layanan Apache 2.4 dan klik Ulang. Selesai!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Selanjutnya, klik kanan layanan Apache2.4 dan pilih Properti, lalu klik Log On tab.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Respon Memindai Port Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Port Tcp Nmap';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Port Tcp Nmap';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Port Udp Nmap';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Port Udp Nmap';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap tidak dapat menentukan apakah port terbuka karena penyaringan paket mencegah probe dari mencapai port. Penyaringan dapat dari perangkat firewall berdedikasi, aturan router, atau perangkat lunak firewall berbasis host. Penghalang pelabuhan ini karena mereka memberikan sedikit informasi. Kadang-kadang mereka menanggapi dengan pesan error ICMP seperti tipe 3 kode 13 (tujuan tidak dapat dicapai: komunikasi secara administratif dilarang), tetapi filter yang hanya drop probe tanpa menanggapi jauh lebih umum. Hal ini memaksa Nmap untuk mencoba lagi beberapa kali dalam kasus probe itu dijatuhkan karena kemacetan jaringan daripada penyaringan. Ini memperlambat pemindaian secara dramatis.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap menempatkan port dalam keadaan ini ketika tidak dapat menentukan apakah port terbuka atau disaring. Hal ini terjadi untuk tipe pemindaian di mana port terbuka tidak memberikan respon. Kurangnya respon dapat juga berarti bahwa filter paket menjatuhkan probe atau respon apapun itu elicited. Jadi Nmap tidak tahu pasti apakah port terbuka atau disaring. UDP, protokol IP, FIN, NULL, dan Xmas scan mengklasifikasikan port dengan cara ini.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Rincian waktu Nmap ditemukan di bagian bawah halaman terkait ini';

$GLOBALS["lang"]['nmis_business_service'] = 'Layanan Bisnis Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Layanan Bisnis Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Pelanggan';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Pelanggan';

$GLOBALS["lang"]['nmis_group'] = 'Grup Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Grup Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Manage Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Manage Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Nama Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nama Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Catatan Catatan';

$GLOBALS["lang"]['Nmis Notes'] = 'Catatan Catatan';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poler';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poler';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poler Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poler Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Peran Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Peran Nmis';

$GLOBALS["lang"]['No'] = 'Tidak';

$GLOBALS["lang"]['No Devices Returned'] = 'Tidak ada Perangkat Kembali';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Tidak ada Google Maps API Kunci kini, Anda tidak akan dapat menampilkan peta.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Tidak ada Lisensi untuk Profesional atau Enterprise';

$GLOBALS["lang"]['No Results'] = 'Tidak ada hasil';

$GLOBALS["lang"]['No data in License Key'] = 'Tak ada data di Kunci Lisensi';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Tak ada peningkatan basis data yang diperlukan saat ini.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Tidak ada perangkat dalam database.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Nihil';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Kepulauan Mariana Utara';

$GLOBALS["lang"]['Norway'] = 'Norwegia';

$GLOBALS["lang"]['Norwegian'] = 'Norwegia';

$GLOBALS["lang"]['Not Applicable'] = 'Tak Dapat Diapan';

$GLOBALS["lang"]['Not Checked'] = 'Belum diperiksa';

$GLOBALS["lang"]['Not Equals'] = 'Tidak Setara';

$GLOBALS["lang"]['Not In'] = 'Tidak Masuk';

$GLOBALS["lang"]['Not Like'] = 'Tidak Seperti';

$GLOBALS["lang"]['Not Set'] = 'Tak Ditata';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Tidak semua komputer akan berhasil menyelesaikan sebuah benchmark. Kita telah melihat beberapa kegagalan dalam pengujian untuk alasan di luar kendali kita. Log akan membantu mengarahkan Anda ke arah yang benar untuk item ini.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Tidak dalam daftar (koma dipisahkan)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Tidak biasanya digunakan. Bila ditata, ini memerlukan perangkat untuk memiliki port terbuka (sesuai dengan Opsi Pindai) untuk dipertimbangkan merespon. Suatu alamat MAC, arp response atau ping respon tidak cukup dianggap cukup untuk dipertimbangkan menanggapi. Berguna bila suatu router atau firewall antara server Open-AuditT dan target IP menanggapi pemindaian port pada nama IP.';

$GLOBALS["lang"]['Note'] = 'Catatan';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Catat - Memilih orang tua secara otomatis akan memberikan akses ke anak-anaknya (walaupun tidak akan ditampilkan di sini).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Perhatikan bahwa 100 perangkat lisensi Enterprise tidak termasuk dukungan.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Catatan, Anda mungkin perlu membuat skrip dapat dieksekusi dengan';

$GLOBALS["lang"]['Notes'] = 'Catatan';

$GLOBALS["lang"]['notes'] = 'Catatan';

$GLOBALS["lang"]['Notice'] = 'Pemberitahuan';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Sekarang untuk ID berlangganan, klik All Services, Subscriptions dan salin.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Sekarang kita perlu menyediakan aplikasi Azure Active Directory akses ke langganan Anda.<br/><br/>Klik Kelompok Sumber Daya dan kemudian kelompok sumber daya Anda ingin Aplikasi Direktori Aktif Azure Anda untuk memiliki akses ke.<br/><br/>Klik Tambah. Peran harus Kontributor dan kemudian mencari aplikasi (Open-Auditt). Kemudian klik Save.<br/><br/>Sekarang aplikasi memiliki akses ke langganan, sehingga kita dapat membuat panggilan API. Panggilan API akan diminta atas nama aplikasi, bukan pengguna Anda.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Keluarga OS';

$GLOBALS["lang"]['OS Family'] = 'Keluarga OS';

$GLOBALS["lang"]['OS Group'] = 'Grup OS';

$GLOBALS["lang"]['OUTPUTS'] = 'OUTPUTS';

$GLOBALS["lang"]['oae_manage'] = 'Manage Oae';

$GLOBALS["lang"]['Oae Manage'] = 'Manage Oae';

$GLOBALS["lang"]['object_ident'] = 'Identasi Obyek';

$GLOBALS["lang"]['Object Ident'] = 'Identasi Obyek';

$GLOBALS["lang"]['Obtain top management support'] = 'Menahan dukungan manajemen atas';

$GLOBALS["lang"]['October'] = 'Oktober';

$GLOBALS["lang"]['Offset'] = 'Ofset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Hidup';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Pada Windows, Open-Auditt menggunakan WMI sebagai metode utama audit. Windows memiliki reputasi terkenal di mana WMI yang bersangkutan. Ini cenderung baik <i>hanya bekerja</i> atau beberapa item misteri pada target membutuhkan perubahan. Jika Anda mengalami kesulitan audit remote Windows PC, kami telah membuat sebuah script yang disebut test _ windows _ client.vbs. Anda dapat menjalankan skrip ini <strong>lokal</strong> pada mesin yang bersangkutan, setelah menandatangani sebagai pengguna yang digunakan oleh Open- Audit untuk melakukan audit. Skrip membuat <strong>tidak ada perubahan</strong> ke perangkat target. Ini memeriksa paling (tidak semua item di bawah ini dan menghasilkan PASS, FAIL dan INFO tag untuk berbagai properti. CATATAN - Jika sistem target Anda sedang diaudit dengan benar, Anda seharusnya tidak mengubah setingan apapun. Beberapa di bawah ini tidak ada pada Windows PC yang dapat diaudit dan beberapa ada. Hanya mengubah pengaturan jika penemuan Anda pada PC tertentu tidak bekerja seperti yang diharapkan.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Pada halaman Daftar Tugas, klik <i>Tambah Baru</i> tombol untuk mengatur suatu tugas.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Di lapangan <i>Cocok String</i> Anda harus memberikan nama perangkat lunak yang ingin Anda lacak. Anda dapat menggunakan tanda persen (%) sebagai wildcard di mana dibutuhkan.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Pada halaman berikutnya Anda akan dapat memilih Tombol Akses dan melihat kunci Anda atau membuat kunci baru.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Pada target Windows PC, jalankan utilitas DCOM dan verifikasi (atau set) di bawah atribut. Mulai - > Jalankan, Masukkan DCOMCNFG dan tekan OK. Ini akan membuka jendela DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Di kanan atas (di bawah bilah menu) anda akan melihat beberapa tombol. Ini memungkinkan Anda untuk memilih dasbor lain, set dasbor saat ini sebagai homepage Anda (jika belum) dan edit dasbor kini (jika Anda memiliki izin).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Promise, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Setelah Medan Tambahan telah dibuat dapat digunakan dalam kueri dan kelompok sama seperti atribut lain dalam basis data.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Setelah komentar keluar, sertifikat Anda akan divalidasi, tetapi mungkin juga gagal validasi ini jika Anda menggunakan sertifikat yang ditandatangani sendiri dan belum dikonfigurasi server Anda dengan benar.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Setelah naskah telah berjalan pada target, harus menghapus sendiri script.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Setelah kueri awal (snmp, ssh, wmi) selesai, jika perangkat tersebut didukung oleh skrip audit (Windows, Linux, OSX, AIX, HP-UX, Solaris, dan ESXi), skrip audit yang benar akan disalin ke target dan dieksekusi. Skrip audit akan menghapus sendiri setelah selesai. Hasilnya akan disimpan di mesin target sebagai berkas XML. Server Open- Auditt kemudian akan mengambil berkas hasil untuk memproses dan menghapus berkas hasil pada target. Lokasi skrip audit disalin ke perangkat target (paling tidak untuk audit SSH) dapat diatur dengan menyunting penemuan _ linux _ script _ directory config item. Secara baku ini diatur ke / tmp /. Ini mungkin perlu diubah jika / tmp memiliki set noexec. Berkas hasil kemudian diproses dan rincian perangkat diperbarui dalam Open-Auditt.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Setelah Anda mengklik tombol eksekusi, Open-Audit akan menelurkan proses untuk memulai penemuan dan mengembalikan pengguna ke halaman detail penemuan. Proses baru spawned mengambil opsi penemuan yang dikonfigurasi dan mengeksekusi perintah Nmap untuk menentukan daftar awal dari alamat IP yang akan dipindai (atau kueri Direktori Aktif jika tipe ini digunakan). Setiap IP yang akan dipindai ditempatkan ke dalam antrian. Setelah proses awal telah selesai (dan ada IP untuk dipindai dalam antrian) sejumlah proses akan disebarluaskan untuk memindai lebih lanjut setiap IP dalam paralel. Jumlah proses ini dapat diubah dalam konfigurasi, menyunting atribut <i>batas antrian</i>. Secara baku ini diatur ke 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Setelah Anda memilih perangkat Anda untuk disunting, klik tombol pensil di sebelah kanan atas meja.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Setelah Anda melakukan ini, Open-Auditt akan mencoba memverifikasi rincian logon pengguna Anda terhadap Auth Method yang dikonfigurasi. Bila pengguna memiliki kredensial yang valid dan <code>use_authorisation</code> is set, Open-Auditt akan meminta daftar grup milik pengguna. Jika pengguna berada dalam kelompok terkait untuk Open- Auditt Roles dan Orgs, Roles dan Orgs tersebut akan diterapkan pada pengguna tersebut.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Setelah Anda menghasilkan Definisi Dasar Anda dapat menjadwalkannya untuk dijalankan terhadap kelompok perangkat tertentu.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Setelah Anda memiliki item tersebut, di Open- Audit Enterprise Anda dapat pergi ke menu - > Temukan - > Awan - > Buat Awan, pilih <i>Amazon AWS</i> ketik dan paste mereka masuk Selesai.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Setelah Anda memiliki item tersebut, di Open- Audit Enterprise Anda dapat pergi ke menu - > Temukan - > Awan - > Buat Awan, pilih <i>Microsoft Azure</i> ketik dan paste mereka masuk Selesai.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Setelah Anda memiliki kredensial awan Anda, itu hanya masalah menciptakan awan baru dan menjalankan penemuan - atau penjadwalan penemuan pertama / masa depan. Pastikan Anda juga memiliki kredensial yang diperlukan untuk log on ke mesin awan Anda, dan itu semua dilakukan untuk Anda seperti penemuan biasa. Kredensial untuk awan Anda';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Salah <code>3x2</code>, <code>4x2</code>, <code>4x3</code> atau <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Salah satu Jaringan Area Campus, Jaringan Cloud, Jaringan Pribadi Enterprise, Jaringan Area Lokal, Jaringan Area Lokal Metropolitan, Jaringan Area Lokal Passive, Jaringan Area Lokal Pribadi, Penyimpanan-Area, Jaringan System-Area, Jaringan Serba Virtual, Jaringan Pribadi, Jaringan Area Wide, Jaringan Area Lokal Nirkabel, Jaringan Lokal Lokal Nirkabel.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Salah satu Pengembangan, Pemulihan Bencana, Evaluasi, Produksi, Produksi, Pengujian, Pelatihan, Pengujian Penerimaan Pengguna';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Salah satu dialokasikan, delegasi, perencanaan, pendiam, tidak dialokasikan, tidak diketahui, tidak dikelola. Default untuk dialokasikan.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Salah satu dari keduanya <code>active directory</code> atau <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Salah satu: antivirus, backup, firewall, disetujui, dilarang, diabaikan atau lainnya.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Satu item lain untuk berhati-hati dari - pastikan Anda menggunakan nama host (atau fqdn) dari LDAP Anda Server yang cocok dengan sertifikat (bukan hanya alamat IP Server LDAP Server) ketika membuat entri LDAP dalam Open- AuDIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentasi Daring';

$GLOBALS["lang"]['Open'] = 'Buka';

$GLOBALS["lang"]['Open Data'] = 'Buka Data';

$GLOBALS["lang"]['Open Source'] = 'Buka Sumber';

$GLOBALS["lang"]['Open-AudIT'] = 'Buka -Audit';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Buka -Audit Source code tersedia di GitHub. Anda didorong untuk memeriksa setiap kode yang Anda miliki keprihatinan tentang, dan karena itu adalah sumber terbuka - Anda juga didorong untuk meminta kami tentang masalah apapun yang Anda miliki atau melaporkan penemuan apapun. Kami selalu lebih dari senang untuk menerima kode kontribusi, laporan kerentanan, atau bahkan pertanyaan sederhana. Kami di sini untuk membantu.<br/><br/>Skrip audit sendiri (Windows, Linux, MacOS, et al) sengaja ditulis dalam script shell asli yang dapat dibaca (VBScript untuk Windows, Bash untuk * nix). Anda dapat melihat persis apa perintah dijalankan. Anda dapat menghapus perintah apapun yang Anda merasa tidak perlu. Anda dapat meminta pihak ketiga untuk memeriksa kode untuk Anda dan (jika Anda ingin) melaporkan penemuan apapun.<br/><br/>Buka -Audit Enterprise melakukan penambahan pada fungsi komersial untuk Open- Auditt Community. Hal ini termasuk dalam satu berkas yang dikompilasi tanpa ketergantungan eksternal. Dimana Enterprise sendiri melakukan fungsi, jika anda peduli dengan masalah apapun Gelombang pertama adalah senang untuk bekerja melalui mereka dengan Anda - hanya bertanya! Coba itu dengan penjual perangkat lunak komersial lain!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Pemilihan Perangkat Open- Auditt';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Buka -Audit Enterprise memiliki kemampuan untuk memilih dari daftar yang telah ditentukan sebelumnya dari opsi pemindaian penemuan dan juga untuk menyesuaikan pilihan individu per penemuan.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open- Audit Enterprise. Penemuan berskala tinggi dan solusi audit untuk jaringan yang besar. Semua fitur Profesional plus: Baselees, File Auditing, Cloud Discovery, Rack Management, Peran Dapat Dikonfirmasi Berdasarkan Kontrol Akses termasuk Direktori Aktif dan LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nama Ruas Open- Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Buka Licenses-Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Pilihan Open-Auditt';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- Auditt Profesional dan Enterprise termasuk Enhanced Pelaporan fitur, termasuk waktu-berbasis, sejarah, dan mutilasi berbasis fitur pelaporan dalam multiple format.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Buka -Audit Profesional memiliki kemampuan untuk memilih dari daftar yang telah ditentukan sebelumnya dari opsi pemindaian penemuan, per penemuan.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Buka Audit Profesional. Dunia.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.'] = 'Buka Audit Profesional. Dunia yang paling fleksibel penemuan jaringan dan solusi audit. Semua fitur Komunitas Plus: Dashboard Interaktif, Peta Geografis, Waktu Terjadwal berbasis atau Laporan Sejarah, Dukungan Komersial.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud IT dapat dikonfigurasi untuk menggunakan server LDAP (Microsoft Active Directory and / or OpenLDAP) untuk mengotorisasi dan mengotorisasi pengguna dan sebagai tambahan, untuk membuat akun pengguna dalam Open- AuditT menggunakan peran yang diberikan dan organ berdasarkan keanggotaan grup LDAP. Hal ini juga dapat menggunakan';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud IT dapat dijalankan pada server Anda di pusat data Anda. Tidak perlu akses ke internet sama sekali. Bahkan instalasi pada Linux di mana kami menggunakan manajer paket distribusi untuk prasyarat kami dapat dinogasikan oleh Anda menggunakan in- rumah dan keamanan tim-diterima penyimpanan paket.<br/><br/>Open-Aud Itu tidak menyimpan data kalian di awan. Bahkan informasi lisensi dapat disediakan tanpa harus mengakses internet dari server OpenAudite.<br/><br/>Tentu, lebih mudah untuk memungkinkan untuk mengakses internet untuk mengunduh paket (termasuk perbaikan keamanan) untuk distribusi Anda, tapi itu terserah Anda dan kebijakan keamanan Anda. Buka - Audit tidak perlu internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- Auditt dapat men-download, mengurai dan menggunakan NIST CVE laporan vulneraibility.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud Ini dapat menunjukkan dalam beberapa bahasa. Bagaimana kau bisa memperbaiki ini?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud IT dapat menyimpan informasi dalam bidang tambahan yang terkait dengan setiap perangkat.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Buka-Audit dapat menggunakan Microsoft Entra (sebelumnya dikenal sebagai Microsoft Azure Active Directory) sebagai metode otentikasi. Ini berarti pengguna Anda dalam Open-Audit dapat mengklik Logon menggunakan tombol Entra di halaman logon dan menggunakan kredensial Entra mereka untuk logon. Pengguna itu harus sudah ada dalam Open- Audit (dan ditugaskan';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- Audit dapat menggunakan OKTA sebagai metode otentikasi. Ini berarti pengguna Anda dalam Open-Audit dapat mengklik Logon menggunakan tombol OKTA di halaman logon dan menggunakan kredensial OKTA mereka untuk logon. Pengguna itu harus sudah ada dalam kredensial Open- Audite (dan akan diberikan Roles dan Orgs), tapi tidak perlu mengingat satu set mandat logon terpisah.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Buka - Audit datang dengan banyak kueri dibangun. Jika Anda memerlukan kueri spesifik dan tidak ada kueri pra-paket yang sesuai dengan kebutuhan Anda, cukup mudah untuk membuat yang baru dan memasukkannya ke dalam Open-Auditt untuk berjalan.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open- Auditt memiliki API Restful JSON untuk digunakan baik dalam antarmuka web dan melalui permintaan JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud IT memiliki sistem perizinan granular untuk menentukan apa pengguna dalam Open- Auditt dapat melakukannya, dan item yang dapat dia lakukan. Open- Audit dapat seluruhnya berisi, atau gunakan Direktori Aktif atau OpenLDAP untuk otentikasi dan / atau otorisasi.<br/><br/>Ini sepenuhnya terserah kepada administrator Open- Audit bagaimana mereka ingin Peran Berdasarkan Kontrol Akses untuk bekerja.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud IT memiliki mesin deteksi perubahan yang kuat. Atribut perangkat apapun yang ditambahkan, dihapus atau diubah akan terdeteksi dan disimpan. Perubahan ini dapat dilaporkan dan data yang relevan dikonfirmasi untuk apa yang diharapkan dari perusahaan Anda berubah dan proses rilis.<br/><br/>Ketika perangkat diaudit, atribut dibagi dalam bagian yang sesuai dengan tabel dalam basis data.<br/><br/>Setiap perangkat (komputer, router, pencetak, et al) memiliki entri di <code>devices</code> meja. Setiap entri dalam tabel perangkat memiliki <code>id</code> kolom. Nilai ini unik - itu adalah id peningkatan otomatis.<br/><br/>Ketika hasil audit diproses, setiap item di setiap bagian memiliki hasil audit dibandingkan dengan apa yang ada di database.<br/><br/>Untuk setiap bagian, jika kolom kunci (lihat di bawah tabel) berisi nilai identik, itu dianggap telah terpasang dan memiliki nya <code>last_seen</code> atribut diperbarui. Tak ada entri perubahan _ log dibuat.<br/><br/>Bila salah satu kolom kunci tidak cocok, dianggap sebagai atribut baru dan dimasukkan. A <code>change_log</code> entri dibuat jika perangkat memiliki atribut lain telah ada di tabel.<br/><br/>Pada penyelesaian pemrosesan audit, semua item basis data yang belum diperbarui (atau dimasukkan) dianggap tidak ada. The <code>current</code> atribut untuk butir ini diset ke <i>n</i> dan sebuah masukan change _ log dihasilkan.<br/><br/>Jadi, kita dapat menentukan apakah ada sesuatu yang sedang terpasang - kolom saat ini <i>y</i>.<br/><br/>Kita dapat menentukan ketika sesuatu awalnya terdeteksi - yang <i>pertama _ lihat</i>.<br/><br/>Kita dapat menentukan apakah ada sesuatu yang terpasang setelah audit awal - pertama terlihat akan berbeda dalam komponen dan tabel perangkat.<br/><br/>Kita dapat menentukan apakah ada sesuatu yang belum terpasang, tapi sebelumnya - saat ini = <i>n</i>.<br/><br/>Kita dapat menentukan terakhir kali kita mendeteksi item - last _ seen.<br/><br/>Pada titik tertentu, kita dapat menentukan apa yang ada di sistem - dengan menggunakan audit _ log tabel dan memilih komponen yang relevan berdasarkan _ seen pertama dan terakhir _ seen.<br/><br/>Setiap bagian dan kolom kunci yang cocok berada di bawah.<br/><br/>CATATAN - Ada beberapa pengecualian sebagai rinci di bawah ini.<br/><br/>* 1 - Untuk kartu jaringan, jika komputer adalah mesin VMware Esx ia juga menggunakan kolom net _ index dan koneksi.<br/><br/>* 2 - Untuk partisi, f komputer adalah mesin AIX, kami menggunakan nama partisi.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open- Audit adalah program yang dirancang untuk melacak dan melaporkan pada IT dan rincian aset terkait dan konfigurasi. Buka -Audit dapat memberitahu <i>Apa yang ada di jaringan Anda?</i>, bagaimana dikonfigurasi dan jika ada perubahan. Buka - Audit memberikan ramping, fleksibel dan mudah untuk menggunakan platform untuk penemuan perangkat, IT audit dan inventaris manajemen otomatisasi langsung keluar dari kotak.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud IT membuatnya mudah untuk menyunting atribut dari beberapa perangkat sekaligus.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT memerlukan izin direktori tertentu untuk dapat membuat berkas, mengunggah hasil, dsb. Silakan set sebagai di bawah.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Buka - Audit menyediakan banyak built - dalam queries dan membuatnya sederhana untuk membuat Anda sendiri.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT kapal dengan inbuilt peran untuk admin, org _ admin dan pengguna.<br/><br/>Umumnya, seorang pengguna yang merupakan administrator aplikasi Open- Audit sendiri harus memiliki admin dan mungkin org _ admin peran.<br/><br/>Seorang pengguna dapat memiliki beberapa peran. IE, jika pengguna memiliki peran pengguna dan org _ admin, mereka akan dapat membuat lokasi karena org _ admin memberikan izin ini, walaupun peran pengguna tidak.<br/><br/>Peran admin memungkinkan akses ke koleksi seperti konfigurasi, basis data, grup, server ldap, log, kueri, dan peran. Item global yang mempengaruhi seluruh aplikasi.<br/><br/>Peran org _ admin biasanya mengijinkan membuat, membaca, memperbarui, dan menghapus aksi untuk setiap koleksi yang berisi kolom org _ id. Hampir semua data kecuali beberapa koleksi yang disebutkan di atas akan berisi <code>org_id</code> kolom.<br/><br/>Peran pengguna biasanya hanya mengijinkan membaca akses ke semua butir dengan kolom org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT kapal dengan inbuilt peran untuk admin, org _ admin dan pengguna.<br/><br/>Umumnya, seorang pengguna yang merupakan administrator aplikasi Open- Audit sendiri harus memiliki admin dan mungkin org _ admin peran.<br/><br/>Seorang pengguna dapat memiliki beberapa peran. IE, jika pengguna memiliki peran pengguna dan org _ admin, mereka akan dapat membuat lokasi karena org _ admin memberikan izin ini, walaupun peran pengguna tidak.<br/><br/>Peran admin memungkinkan akses ke koleksi seperti konfigurasi, basis data, grup, server ldap, log, kueri, dan peran. Item global yang mempengaruhi seluruh aplikasi.<br/><br/>Peran org _ admin biasanya mengijinkan membuat, membaca, memperbarui, dan menghapus aksi untuk setiap koleksi yang berisi kolom org _ id. Hampir semua data kecuali beberapa koleksi yang disebutkan di atas akan memuat kolom org _ id.<br/><br/>Peran pengguna biasanya hanya mengijinkan membaca akses ke semua butir dengan kolom org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Kapal Open- Audite dengan beberapa Dashboard yang sudah dikonfigurasi sebelumnya. Jika Anda seorang pengguna Profesional, Anda dapat memilih antara dua ini dan set sebagai halaman baku Anda ketika Anda logon. Jika Anda seorang pengguna Enterprise, Anda tidak hanya dapat memilih antara lima Dashboard yang telah diatur, tetapi Anda juga memiliki kemampuan untuk membuat Anda sendiri.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- Audit mesti dipasang pada 64bit Windows <strong>Server</strong> Hanya sistem. Windows 10 dan Windows 11 adalah <strong>tidak</strong> didukung.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open- Auditt menggunakan Nmap dalam fungsi Discovery nya. Perangkat pelacak peta untuk port terbuka. Perangkat idealnya harus merespon dengan terbuka untuk port kerja. Perangkat sering tidak merespon dengan ini. Respon yang beragam adalah rinci di bawah ini.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open- Auditt menggunakan Nmap dalam fungsi Discovery nya. Tanpa Nmap, Open-Auditt tidak akan berfungsi dengan benar. Setiap instal Open-Auditt mengasumsikan Nmap telah terpasang dan juga akan mengujinya pada halaman web Discovery. Informasi lebih lanjut tentang Open-Auditt dan Nmap tersedia di sini';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open- Auditt menggunakan Nmap dalam fungsi Discovery nya. Tanpa Nmap, Open-Auditt tidak akan berfungsi dengan benar. Setiap instal Open-Auditt mengasumsikan Nmap telah terpasang dan akan diuji di halaman web Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud IT menggunakan kredensial untuk mengakses perangkat Anda. Ini dienkripsi dan disimpan, seperti yang Anda harapkan.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- Auditt ditulis oleh berbahasa Inggris berbahasa Australia. Segala sesuatu dalam aplikasi menggunakan kata-kata Inggris. Namun Open-Auditt selalu mendukung berbagai bahasa untuk ditampilkan. Translasi ini tidak selalu benar, karena pengembang tidak secara native berbicara bahasa setiap terjemahan yang ditawarkan.<br/><br/>Apa yang dapat Anda lakukan jika sesuatu tidak benar dalam terjemahan?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap Diinstal';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Membuka Tiket Dukungan?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Pengguna Openldap Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Pengguna Openldap Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atribut Pengelola Pengguna Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atribut Pengelola Pengguna Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Buka 124; disaring';

$GLOBALS["lang"]['Open|filtered'] = 'Buka 124; disaring';

$GLOBALS["lang"]['Operating System'] = 'Sistem Operasi';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Keluarga Sistem Operasi Berisi';

$GLOBALS["lang"]['Operating Systems'] = 'Sistem Operasi';

$GLOBALS["lang"]['Operators'] = 'Operator';

$GLOBALS["lang"]['optical'] = 'Optik';

$GLOBALS["lang"]['Optical'] = 'Optik';

$GLOBALS["lang"]['Optimized'] = 'Teroptimasi';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opsi # 1 - Ubah data';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opsi # 2 - Ubah berkas terjemahan';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Audit Berdasarkan Agen Opsional';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versi opsional yang diaudit oleh Open- Audit. Gunakan tanda persen% sebagai wildcard.';

$GLOBALS["lang"]['options'] = 'Opsi';

$GLOBALS["lang"]['Options'] = 'Opsi';

$GLOBALS["lang"]['Options, options, options'] = 'Opsi, opsi, opsi';

$GLOBALS["lang"]['Or'] = 'Atau';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Atau pilih dari ruas di bawah.';

$GLOBALS["lang"]['org_descendants'] = 'Keturunan Org';

$GLOBALS["lang"]['Org Descendants'] = 'Keturunan Org';

$GLOBALS["lang"]['org_id'] = 'ID Org';

$GLOBALS["lang"]['Org ID'] = 'ID Org';

$GLOBALS["lang"]['Organisation'] = 'Organisasi';

$GLOBALS["lang"]['organisation'] = 'Organisasi';

$GLOBALS["lang"]['Organisation Descendants'] = 'Keturunan Organisasi';

$GLOBALS["lang"]['Organisations'] = 'Organisasi';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisasi dapat memperluas dan meningkatkan tingkat detail yang disimpan terhadap setiap perangkat yang ditemukan menggunakan bidang gubahan dan inti terbuka memungkinkan integrasi mudah ke CMDB, manajemen acara dan sistem ticketing.';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Nama Orgs';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Org dalam Open-Auditt adalah item kunci. Seorang pengguna memiliki Org primer serta daftar Orgs yang dapat mereka akses. Pengguna memadukan ini dengan daftar peran yang diberikan yang menentukan tindakan apa yang dapat mereka ambil pada item yang ditugaskan ke Orgs yang mereka punya akses ke. Kombinasi dari pengguna <i>orgs</i> dan <i>peran</i> definisikan apa yang mereka bisa dan tidak bisa lakukan dalam Open-Auditt.<br/><br/>Kebanyakan item dalam Open- Auditt ditugaskan ke suatu Org. Perangkat, Lokasi, Networks, dsb, dsb.<br/><br/>Orgs dapat memiliki anak Orgs. Pikirkan sebuah struktur organisasi (pohon). Jika pengguna memiliki akses ke organ tertentu, sebagian besar waktu (tidak selalu) mereka juga memiliki akses ke keturunan babi itu.';

$GLOBALS["lang"]['orientation'] = 'Orientasi';

$GLOBALS["lang"]['Orientation'] = 'Orientasi';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Arch Os';

$GLOBALS["lang"]['Os Arch'] = 'Arch Os';

$GLOBALS["lang"]['os_bit'] = 'Bit Os';

$GLOBALS["lang"]['Os Bit'] = 'Bit Os';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Versi Tampilan Os';

$GLOBALS["lang"]['Os Display Version'] = 'Versi Tampilan Os';

$GLOBALS["lang"]['os_family'] = 'Keluarga Os';

$GLOBALS["lang"]['Os Family'] = 'Keluarga Os';

$GLOBALS["lang"]['os_group'] = 'Grup Os';

$GLOBALS["lang"]['Os Group'] = 'Grup Os';

$GLOBALS["lang"]['os_installation_date'] = 'Tanggal Instalasi Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Tanggal Instalasi Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Lisensi Os';

$GLOBALS["lang"]['Os License'] = 'Lisensi Os';

$GLOBALS["lang"]['os_license_code'] = 'Kode Lisensi Os';

$GLOBALS["lang"]['Os License Code'] = 'Kode Lisensi Os';

$GLOBALS["lang"]['os_license_mode'] = 'Moda Lisensi Os';

$GLOBALS["lang"]['Os License Mode'] = 'Moda Lisensi Os';

$GLOBALS["lang"]['os_license_type'] = 'Tipe Lisensi Os';

$GLOBALS["lang"]['Os License Type'] = 'Tipe Lisensi Os';

$GLOBALS["lang"]['os_name'] = 'Nama Os';

$GLOBALS["lang"]['Os Name'] = 'Nama Os';

$GLOBALS["lang"]['os_version'] = 'Versi Os';

$GLOBALS["lang"]['Os Version'] = 'Versi Os';

$GLOBALS["lang"]['Other'] = 'Lainnya';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Selain pembatasan itu, Anda bebas memilih atribut seperti yang diperlukan. Adalah ide yang baik untuk menggunakan menu';

$GLOBALS["lang"]['Others'] = 'Lainnya';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Integrasi baku kami juga memungkinkan penemuan pada perangkat yang disediakan dari luar. Jadi kami mengirimkan penemuan baku untuk Integrasi Baku keluar dari kotak. Ini menggunakan aturan pencocokan baku, tetapi juga mengaktifkan pencocokan di alamat IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Contoh kami akan menggunakan <i>jenis</i> kolom.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Kerangka kerja kami mengunggah file di sini untuk diproses, kemudian menghapusnya. Pikirkan hasil audit yang diajukan, dll.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Tujuan kami dengan rilis integrasi awal secara khusus bagi NMIS untuk membuka integrasi Audit ke <i>hanya bekerja</i>. Jika Anda menggunakan program pada Linux, Anda dapat mengklik satu tombol untuk mengeksekusi integrasi. Tidak perlu lagi. Setelah mengatakan itu, integrasi itu sendiri sangat dapat diubah - jadi jika sesuatu tidak sesuai dengan pilihan Anda, dapat dengan mudah diubah.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Fitur baru kita yang disebut Vulnerabilities memberi Anda kemampuan untuk menentukan dengan cepat apakah perangkat apapun terpengaruh oleh CVE (Pameran Vulneraibility Umum) - tapi bagaimana?<br/><br/>FirstWave terus mengkonsumsi hasil dari NVD feed Nist. Kami mengambil ini dan menerapkan beberapa pembatasan, kemudian mengekstrak program yang terpengaruh dan membangun permintaan SQL untuk pelaporan. Instansi Open-Auditt Anda mencapai FirstWave dan meminta setiap kerentanan baru secara teratur. Ketika menerima rekor kerentanan baru, itu dijalankan terhadap database dan hasilnya disimpan. Setiap kali sebuah perangkat diproses, semua kerentanan yang cocok dijalankan lagi dan hasilnya disimpan. Ini berarti ketika melihat daftar kerapuhan, kita tidak perlu menghitung semua perangkat yang terpengaruh - kita sudah memiliki hasilnya. Ketika Anda melihat rekor kerentanan individu, kita memang menghitung kembali hasil dari kerentanan tunggal ini.<br/><br/>Jadi, Anda selalu up to date!<br/><br/>Selain itu, kami juga menghitung hasil dari semua kerentanan untuk semua perangkat sehari-hari (biasanya pada waktu yang tenang, katakanlah 2 am).<br/><br/>Dalam contoh Open-Audit, kami mengijinkan anda untuk memilih vendor mana yang anda pedulikan. yaitu tidak ada gunanya mengambil catatan kerentanan dari vendor yang perangkat lunak Anda tidak menggunakan atau telah dipasang. Secara baku, daftar vendor kami adalah Adobe, Apple, Cisco, Google, Microsoft, Mozilla, dan Redhat.<br/><br/>Ini semua terdengar sangat sederhana, tetapi di balik layar <b>banyak</b> sedang terjadi. Sebagai contoh, CVE record berisi daftar perangkat lunak yang terpengaruh - tetapi nama-nama perangkat lunak tidak cocok apa yang kita terima ketika kita mengaudit komputer. Contoh yang bagus adalah Apache. Biasanya, rekaman CVE akan mengatakan perangkat lunak yang terpengaruh adalah http _ server. Pada kenyataannya, ini muncul sebagai apache2 (Ubuntu), httpd (Redhat), Server Apache HTTP (Windows) - dan lainnya. Jadi, kita harus pertama-tama menentukan apa nama sebenarnya dari program yang kita terima ketika kita meminta komputer, dan mungkin ada beberapa nama. Setelah itu kita harus mengurai rekaman CVE dan membuat pernyataan SQL yang cocok. Memungkinkan beberapa nama program sebagai di atas, dan beberapa versi, versi berkisar, dan bahkan beberapa bagian yang berbeda dari perangkat lunak (misalnya Thunderbird dan Firefox dalam satu CVE). Dan instansi Anda dari Open-Auditt harus mengambil ini dan menerapkan Orgs penyaringan juga. Dan itu hanya CVE tunggal. Bagaimana dengan menentukan CVE mana yang Anda miliki dan tidak memiliki? Bagaimana dengan menambahkan penjual ke daftar nanti? Begitu banyak hal untuk dipertimbangkan!<br/><br/>Seperti yang biasa dilaporkan, kami juga memiliki beberapa widget baru yang tersedia untuk Dashboard, berdasarkan data Vulneraibility.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Waktu habis kami untuk respon SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Waktu istirahat kita untuk respon WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Waktu istirahat kita untuk respon SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Waktu habis kami untuk audit tanggapan script';

$GLOBALS["lang"]['output'] = 'Keluaran';

$GLOBALS["lang"]['Output'] = 'Keluaran';

$GLOBALS["lang"]['outputs'] = 'Keluaran';

$GLOBALS["lang"]['Outputs'] = 'Keluaran';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Nilai keparahan berlebihan (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Timpa';

$GLOBALS["lang"]['Overwrite'] = 'Timpa';

$GLOBALS["lang"]['owner'] = 'Pemilik';

$GLOBALS["lang"]['Owner'] = 'Pemilik';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec adalah program bebas-dapat didistribusikan ulang implementasi SysInternal / Microsofts populer PsExec. PAExec bertujuan untuk menjadi drop dalam penggantian untuk PsExec, sehingga penggunaan -line identik, dengan pilihan tambahan juga didukung. Karya ini awalnya terinspirasi oleh Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Mengambil data';

$GLOBALS["lang"]['Package'] = 'Paket';

$GLOBALS["lang"]['packages'] = 'Paket';

$GLOBALS["lang"]['Packages'] = 'Paket';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Paket digunakan untuk melaporkan hal-hal seperti <i>perangkat lunak dilarang</i>, Antivirus di server, dll.<br/><br/>Buka -Auditt menyediakan widget yang dibangun atas repo yang juga diberikan untuk mendetemin status antivirus, firewall dan perangkat lunak lainnya.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Wilayah Palestina';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nugini';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parameter';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Induk';

$GLOBALS["lang"]['parent_id'] = 'ID Induk';

$GLOBALS["lang"]['Parent ID'] = 'ID Induk';

$GLOBALS["lang"]['parent_name'] = 'Nama Induk';

$GLOBALS["lang"]['Parent Name'] = 'Nama Induk';

$GLOBALS["lang"]['part_number'] = 'Nomor Bagian';

$GLOBALS["lang"]['Part Number'] = 'Nomor Bagian';

$GLOBALS["lang"]['part_of_domain'] = 'Bagian Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Bagian Domain';

$GLOBALS["lang"]['Partition'] = 'Partisi';

$GLOBALS["lang"]['partition_count'] = 'Cacah Partisi';

$GLOBALS["lang"]['Partition Count'] = 'Cacah Partisi';

$GLOBALS["lang"]['partition_disk_index'] = 'Indeks Disk Partisi';

$GLOBALS["lang"]['Partition Disk Index'] = 'Indeks Disk Partisi';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Lulus';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Jaringan Area Lokal Optical Passive';

$GLOBALS["lang"]['Password'] = 'Sandi';

$GLOBALS["lang"]['password'] = 'Sandi';

$GLOBALS["lang"]['password_changeable'] = 'Dapat Dipindahkan Kata Sandi';

$GLOBALS["lang"]['Password Changeable'] = 'Dapat Dipindahkan Kata Sandi';

$GLOBALS["lang"]['password_disabled'] = 'Kata Sandi Dinonaktifkan';

$GLOBALS["lang"]['Password Disabled'] = 'Kata Sandi Dinonaktifkan';

$GLOBALS["lang"]['password_expires'] = 'Kadalusandi';

$GLOBALS["lang"]['Password Expires'] = 'Kadalusandi';

$GLOBALS["lang"]['password_last_changed'] = 'Sandi Terakhir Diubah';

$GLOBALS["lang"]['Password Last Changed'] = 'Sandi Terakhir Diubah';

$GLOBALS["lang"]['password_required'] = 'Sandi Diperlukan';

$GLOBALS["lang"]['Password Required'] = 'Sandi Diperlukan';

$GLOBALS["lang"]['patch_panel'] = 'Panel Patch';

$GLOBALS["lang"]['Patch Panel'] = 'Panel Patch';

$GLOBALS["lang"]['patch_panel_port'] = 'Port Panel Patch';

$GLOBALS["lang"]['Patch Panel Port'] = 'Port Panel Patch';

$GLOBALS["lang"]['path'] = 'Path';

$GLOBALS["lang"]['Path'] = 'Path';

$GLOBALS["lang"]['Performance'] = 'Penampilan';

$GLOBALS["lang"]['Performed'] = 'Performed';

$GLOBALS["lang"]['Permission'] = 'Izin';

$GLOBALS["lang"]['Permission Required'] = 'Izin Diperlukan';

$GLOBALS["lang"]['permissions'] = 'Hak';

$GLOBALS["lang"]['Permissions'] = 'Hak';

$GLOBALS["lang"]['Persian'] = 'Persia';

$GLOBALS["lang"]['Personal Area Network'] = 'Jaringan Area Pribadi';

$GLOBALS["lang"]['Personal area network'] = 'Jaringan area pribadi';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipina';

$GLOBALS["lang"]['phone'] = 'Telepon';

$GLOBALS["lang"]['Phone'] = 'Telepon';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU Fisik';

$GLOBALS["lang"]['physical_count'] = 'Cacah Fisik';

$GLOBALS["lang"]['Physical Count'] = 'Cacah Fisik';

$GLOBALS["lang"]['physical_depth'] = 'Kedalaman Fisik';

$GLOBALS["lang"]['Physical Depth'] = 'Kedalaman Fisik';

$GLOBALS["lang"]['physical_height'] = 'Tinggi Fisik';

$GLOBALS["lang"]['Physical Height'] = 'Tinggi Fisik';

$GLOBALS["lang"]['physical_width'] = 'Lebar Fisik';

$GLOBALS["lang"]['Physical Width'] = 'Lebar Fisik';

$GLOBALS["lang"]['picture'] = 'Gambar';

$GLOBALS["lang"]['Picture'] = 'Gambar';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Bagan Pie';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Grafik Pie harus mengembalikan nama atau nama _ ku, deskripsi atau deskripsi dan hitunganku.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Target Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Kepulauan Pitcairn';

$GLOBALS["lang"]['placement'] = 'Penempatan';

$GLOBALS["lang"]['Placement'] = 'Penempatan';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Rencana dan melakukan audit internal';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Harap memiliki logon administrator Open- Audit dan upgrade database.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Silahkan masuk dan ganti ini secepatnya.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Silakan log on ke Server Open-Audit (baik Windows atau Linux) dan jalankan <code>nslookup IP_ADDRESS_OF_TARGET</code> dalam perintah prompt atau shell. Ini harus dapat menyelesaikan IP ke nama.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Harap dicatat bahwa kotak pilihan akan menimpa kotak masukan teks.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Tolong temui FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Tolong kirimkan semua tiga file ke kontak dukungan Anda di Opmantek dan jelaskan masalah Anda.';

$GLOBALS["lang"]['Please set using'] = 'Silakan set menggunakan';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Silakan kunjungi homepage di';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polandia';

$GLOBALS["lang"]['Policies'] = 'Kebijakan';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Kebijakan memiliki pengecualian.';

$GLOBALS["lang"]['policy'] = 'Kebijakan';

$GLOBALS["lang"]['Policy'] = 'Kebijakan';

$GLOBALS["lang"]['policy_id'] = 'ID Kebijakan';

$GLOBALS["lang"]['Policy ID'] = 'ID Kebijakan';

$GLOBALS["lang"]['Policy Result'] = 'Hasil Kebijakan';

$GLOBALS["lang"]['Policy Results'] = 'Hasil Kebijakan';

$GLOBALS["lang"]['Polish'] = 'Polandia';

$GLOBALS["lang"]['Polite'] = 'Sopan';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populasi dengan nilai yang diberikan di bawah ini:';

$GLOBALS["lang"]['Populated by audit.'] = 'Dipopulasi oleh audit.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Didukung oleh penemuan dan audit.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Secara dinamis.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Dibangun dari DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Dipopulasikan dari penemuan SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Dibangun dari perangkat audit.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Dipopulasikan dari nama host.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Dipopulasi dari mesin-id pada Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Diunduh dari IP untuk rute baku atau IP terdeteksi dalam penemuan.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Dipopulasikan dari perintah hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Dipopulasi dengan data tambahan dari sistem eksternal, dalam representasi JSON.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Nama Port';

$GLOBALS["lang"]['Port Name'] = 'Nama Port';

$GLOBALS["lang"]['port_number'] = 'Nomor Port';

$GLOBALS["lang"]['Port Number'] = 'Nomor Port';

$GLOBALS["lang"]['ports_in_order'] = 'Port Dalam Urutan';

$GLOBALS["lang"]['Ports In Order'] = 'Port Dalam Urutan';

$GLOBALS["lang"]['ports_stop_after'] = 'Port Stop Setelah';

$GLOBALS["lang"]['Ports Stop After'] = 'Port Stop Setelah';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Republik Portugis';

$GLOBALS["lang"]['Portuguese'] = 'Portugis';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugis (Brasil)';

$GLOBALS["lang"]['position'] = 'Posisi';

$GLOBALS["lang"]['Position'] = 'Posisi';

$GLOBALS["lang"]['Post-Certification'] = 'Sertifikasi-Surat';

$GLOBALS["lang"]['postcode'] = 'Kode pos';

$GLOBALS["lang"]['Postcode'] = 'Kode pos';

$GLOBALS["lang"]['power_circuit'] = 'Sirkuit Daya';

$GLOBALS["lang"]['Power Circuit'] = 'Sirkuit Daya';

$GLOBALS["lang"]['power_sockets'] = 'Soket Daya';

$GLOBALS["lang"]['Power Sockets'] = 'Soket Daya';

$GLOBALS["lang"]['Predictable'] = 'Dapat diprediksi';

$GLOBALS["lang"]['Preferences'] = 'Preferensi';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Siapkan untuk perbaikan setiap 3 tahun';

$GLOBALS["lang"]['Prerequisites'] = 'Prasyarat';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Prasyarat dan Tes';

$GLOBALS["lang"]['present'] = 'Hadir';

$GLOBALS["lang"]['Present'] = 'Hadir';

$GLOBALS["lang"]['previous_value'] = 'Nilai Sebelumnya';

$GLOBALS["lang"]['Previous Value'] = 'Nilai Sebelumnya';

$GLOBALS["lang"]['primary'] = 'Primer';

$GLOBALS["lang"]['Primary'] = 'Primer';

$GLOBALS["lang"]['Primary Key'] = 'Kunci Utama';

$GLOBALS["lang"]['print_queue'] = 'Antrian Cetak';

$GLOBALS["lang"]['Print Queue'] = 'Antrian Cetak';

$GLOBALS["lang"]['printer_color'] = 'Warna Pencetak';

$GLOBALS["lang"]['Printer Color'] = 'Warna Pencetak';

$GLOBALS["lang"]['printer_duplex'] = 'Duplex Pencetak';

$GLOBALS["lang"]['Printer Duplex'] = 'Duplex Pencetak';

$GLOBALS["lang"]['printer_port_name'] = 'Nama Port Pencetak';

$GLOBALS["lang"]['Printer Port Name'] = 'Nama Port Pencetak';

$GLOBALS["lang"]['printer_shared'] = 'Pencetak Bersama';

$GLOBALS["lang"]['Printer Shared'] = 'Pencetak Bersama';

$GLOBALS["lang"]['printer_shared_name'] = 'Nama Bersama Pencetak';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nama Bersama Pencetak';

$GLOBALS["lang"]['priority'] = 'Prioritas';

$GLOBALS["lang"]['Priority'] = 'Prioritas';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Frasa Sandi Privasi';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protokol Privasi';

$GLOBALS["lang"]['privileges_required'] = 'Diperlukan hak khusus';

$GLOBALS["lang"]['Privileges Required'] = 'Diperlukan hak khusus';

$GLOBALS["lang"]['processor'] = 'Prosesor';

$GLOBALS["lang"]['Processor'] = 'Prosesor';

$GLOBALS["lang"]['processor_count'] = 'Cacah Prosesor';

$GLOBALS["lang"]['Processor Count'] = 'Cacah Prosesor';

$GLOBALS["lang"]['processor_slot_count'] = 'Jumlah Prosesor Slot';

$GLOBALS["lang"]['Processor Slot Count'] = 'Jumlah Prosesor Slot';

$GLOBALS["lang"]['processor_type'] = 'Tipe Prosesor';

$GLOBALS["lang"]['Processor Type'] = 'Tipe Prosesor';

$GLOBALS["lang"]['Processors'] = 'Prosesor';

$GLOBALS["lang"]['product_name'] = 'Nama Produk';

$GLOBALS["lang"]['Product Name'] = 'Nama Produk';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nama Produk Cocok dari CPE: ';

$GLOBALS["lang"]['products'] = 'Produk';

$GLOBALS["lang"]['Products'] = 'Produk';

$GLOBALS["lang"]['Professional'] = 'Profesional';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Properti';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietary. Jika Anda ingin memodifikasi HighCharts Anda mungkin memerlukan';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Melindungi kerahasiaan, integritas, dan ketersediaan informasi';

$GLOBALS["lang"]['protocol'] = 'Protokol';

$GLOBALS["lang"]['Protocol'] = 'Protokol';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Menyediakan deskripsi dan pilih dan durasi kadaluarsa.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Procept]\\\\ "name\\\"\\ "\\"\\\ "\\"\\\ "is preserved recommand Open-Auditt, but name it\\\\\\"\\\ ">" asal\\ {\\ cHC08CF1}<br/>Dari formulir Open-Audit, salin nilai untuk <i>Ubah URI</i> field dan paste ke dalam <i>Sinyal-dalam URI redirect</i> lapangan di OKTA.<br/>Sinyal-out URI redirect adalah opsional, tetapi jika Anda ingin Anda dapat menggunakan audit-audit / indeks. php / logout dengan server Open-Auditt http alamat, sesuai dengan cuplikan layar.<br/>Biasanya Anda Buka URL -Audit akan terlihat seperti';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Menyediakan anda memiliki kredensial yang benar, Discovery Device Benih sebagai berikut';

$GLOBALS["lang"]['provider'] = 'Penyedia';

$GLOBALS["lang"]['Provider'] = 'Penyedia';

$GLOBALS["lang"]['published'] = 'Diterbitkan';

$GLOBALS["lang"]['Published'] = 'Diterbitkan';

$GLOBALS["lang"]['published_date'] = 'Tanggal Terbitkan';

$GLOBALS["lang"]['Published Date'] = 'Tanggal Terbitkan';

$GLOBALS["lang"]['publisher'] = 'Penerbit';

$GLOBALS["lang"]['Publisher'] = 'Penerbit';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Membeli';

$GLOBALS["lang"]['purchase_amount'] = 'Pembelian Amount';

$GLOBALS["lang"]['Purchase Amount'] = 'Pembelian Amount';

$GLOBALS["lang"]['purchase_cost_center'] = 'Pusat Biaya Pembelian';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Pusat Biaya Pembelian';

$GLOBALS["lang"]['purchase_count'] = 'Cacah Pembelian';

$GLOBALS["lang"]['Purchase Count'] = 'Cacah Pembelian';

$GLOBALS["lang"]['purchase_date'] = 'Tanggal Pembelian';

$GLOBALS["lang"]['Purchase Date'] = 'Tanggal Pembelian';

$GLOBALS["lang"]['purchase_invoice'] = 'Membeli Invoice';

$GLOBALS["lang"]['Purchase Invoice'] = 'Membeli Invoice';

$GLOBALS["lang"]['purchase_order'] = 'Perintah Pembelian';

$GLOBALS["lang"]['Purchase Order'] = 'Perintah Pembelian';

$GLOBALS["lang"]['purchase_order_number'] = 'Nomor Urutan Pembelian';

$GLOBALS["lang"]['Purchase Order Number'] = 'Nomor Urutan Pembelian';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Nomor Kontrak Layanan Pembelian';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Nomor Kontrak Layanan Pembelian';

$GLOBALS["lang"]['purchase_vendor'] = 'Beli Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Beli Vendor';

$GLOBALS["lang"]['purpose'] = 'Tujuan';

$GLOBALS["lang"]['Purpose'] = 'Tujuan';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Kueri';

$GLOBALS["lang"]['Queries'] = 'Kueri';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Query adalah bagian penting dari Open-Audit. Mereka adalah apa yang memungkinkan Anda untuk mendapatkan informasi bermakna dari semua data perangkat yang telah Anda temukan. Seiring dengan rangkuman dan kelompok, mereka menyediakan mekanisme kuat untuk mengekstrak informasi penting.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Kueri untuk Grup seharusnya hanya memilih';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Kuiri atribut Direktori Aktif pertama untuk menentukan unit kerja pengguna.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Kuiri atribut Direktori Aktif kedua untuk menentukan unit kerja pengguna.';

$GLOBALS["lang"]['queue'] = 'Antrian';

$GLOBALS["lang"]['Queue'] = 'Antrian';

$GLOBALS["lang"]['Queue Limit'] = 'Batas Antrian';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audit Perangkat Antrian';

$GLOBALS["lang"]['Queued IP Scans'] = 'Teks IP Antrian';

$GLOBALS["lang"]['Queued Items'] = 'Objek Antrian';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC untuk Direktori Aktif dan OpenLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Awal';

$GLOBALS["lang"]['RX Bitrate'] = 'Laju Bit RX';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Tingkat RX';

$GLOBALS["lang"]['RX Power'] = 'Daya RX';

$GLOBALS["lang"]['RX Profile'] = 'Profil RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Perangkat Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Perangkat Rack';

$GLOBALS["lang"]['rack_id'] = 'ID RAC';

$GLOBALS["lang"]['Rack ID'] = 'ID RAC';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Manajemen dan Pelaporan';

$GLOBALS["lang"]['Racks'] = 'Rack';

$GLOBALS["lang"]['racks'] = 'Rack';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rasionale';

$GLOBALS["lang"]['Rationale'] = 'Rasionale';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Baca';

$GLOBALS["lang"]['Read'] = 'Baca';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Baca dokumentasi online kami pada Open-Auditt Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Baca melalui berkas log di';

$GLOBALS["lang"]['Received'] = 'Diterima';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Baru-baru ini kami telah diminta pertanyaan - apakah Anda mempertimbangkan Open-Auditt lebih aman daripada program serupa lainnya? Seperti kebanyakan hal, jawabannya adalah <i>tergantung</i>.<br/><br/>Open-Aud IT dapat dioperasikan sedemikian rupa agar sangat aman. Tapi seperti biasa dengan keamanan berbasis komputer, semakin aman Anda ingin membuat sesuatu, semakin nyaman menjadi digunakan. Kalimat lama <i>komputer yang paling aman adalah salah satu yang dimatikan dan dalam lemari<i> datang ke pikiran.<br/><br/>Di bawah ini kita akan menguraikan beberapa pilihan yang dapat digunakan dengan Open- Auditt yang akan meningkatkan keamanan. Seperti kebanyakan item dalam Open-Audit, ini adalah pilihan dan tidak wajib. Seberapa jauh Anda mengambil keamanan terserah Anda.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Resertifikasi: Perlu setiap tiga tahun';

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Ubah URI';

$GLOBALS["lang"]['redirect_uri'] = 'Ubah Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Ubah Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Mempertaruhkan risiko pelanggaran data dan ancaman cyber';

$GLOBALS["lang"]['references'] = 'Referensi';

$GLOBALS["lang"]['References'] = 'Referensi';

$GLOBALS["lang"]['region'] = 'Daerah';

$GLOBALS["lang"]['Region'] = 'Daerah';

$GLOBALS["lang"]['registered_user'] = 'Pengguna Terdaftar';

$GLOBALS["lang"]['Registered User'] = 'Pengguna Terdaftar';

$GLOBALS["lang"]['Rejected'] = 'Ditolak';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Rilis';

$GLOBALS["lang"]['remediation'] = 'Perbaikan';

$GLOBALS["lang"]['Remediation'] = 'Perbaikan';

$GLOBALS["lang"]['Remote'] = 'Jauh';

$GLOBALS["lang"]['remote_address'] = 'Alamat Jauh';

$GLOBALS["lang"]['Remote Address'] = 'Alamat Jauh';

$GLOBALS["lang"]['remote_port'] = 'Port Jauh';

$GLOBALS["lang"]['Remote Port'] = 'Port Jauh';

$GLOBALS["lang"]['Remove'] = 'Hapus';

$GLOBALS["lang"]['Remove Exception'] = 'Hapus Eksepsi';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Ulangi sampai Anda telah menemukan dan audit Windows PC.';

$GLOBALS["lang"]['Report'] = 'Laporkan';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Laporkan pada perangkat Anda, jaringan dan lebih';

$GLOBALS["lang"]['reportable'] = 'Reportabel';

$GLOBALS["lang"]['Reportable'] = 'Reportabel';

$GLOBALS["lang"]['Reports'] = 'Laporan';

$GLOBALS["lang"]['request'] = 'Permintaan';

$GLOBALS["lang"]['Request'] = 'Permintaan';

$GLOBALS["lang"]['Request Method'] = 'Permintaan Metode';

$GLOBALS["lang"]['Request Vulnerability'] = 'Permintaan Vulnerability';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Meminta Spesifik CVE';

$GLOBALS["lang"]['requested'] = 'Diminta';

$GLOBALS["lang"]['Requested'] = 'Diminta';

$GLOBALS["lang"]['require_port'] = 'Perlu Port';

$GLOBALS["lang"]['Require Port'] = 'Perlu Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Perlu Port Terbuka';

$GLOBALS["lang"]['Required'] = 'Diperlukan';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Hak akses pengguna AWS yang diperlukan';

$GLOBALS["lang"]['Required Fields'] = 'Ruas Diperlukan';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Reset Semua Data';

$GLOBALS["lang"]['Reset to Default'] = 'Reset ke Baku';

$GLOBALS["lang"]['resource'] = 'Sumber Daya';

$GLOBALS["lang"]['Resource'] = 'Sumber Daya';

$GLOBALS["lang"]['Resource Name'] = 'Nama Sumber Daya';

$GLOBALS["lang"]['Resources'] = 'Sumber Daya';

$GLOBALS["lang"]['response'] = 'Respon';

$GLOBALS["lang"]['Response'] = 'Respon';

$GLOBALS["lang"]['responsibility'] = 'Tanggung Jawab';

$GLOBALS["lang"]['Responsibility'] = 'Tanggung Jawab';

$GLOBALS["lang"]['Restore my Licenses'] = 'Kembalikan Licensesku';

$GLOBALS["lang"]['Restrict to Private'] = 'Batasi ke Pribadi';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Batasi ke Subnet';

$GLOBALS["lang"]['result'] = 'Hasil';

$GLOBALS["lang"]['Result'] = 'Hasil';

$GLOBALS["lang"]['Resulting Function'] = 'Menghasilkan Fungsi';

$GLOBALS["lang"]['Results'] = 'Hasil';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Ambil daftar perangkat di';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Ambil daftar perangkat dengan nama OS seperti Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Ambil semua rincian tentang perangkat dengan id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Ambil semua perangkat yang menjalankan Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Ambil semua perangkat dengan kolom standar';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Ambil 10 perangkat pertama yang dijalankan Windows yang diperintahkan oleh hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Ambil id properti, IP, hostname, domain, ketik dari semua perangkat';

$GLOBALS["lang"]['retrieved'] = 'Diambil';

$GLOBALS["lang"]['Retrieved'] = 'Diambil';

$GLOBALS["lang"]['retrieved_ident'] = 'Ambil Identasi';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ambil Identasi';

$GLOBALS["lang"]['retrieved_name'] = 'Nama Diambil';

$GLOBALS["lang"]['Retrieved Name'] = 'Nama Diambil';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Mengambil dari perangkat - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim-cmd hostsvc / hostringkasan, HP-UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Mengambil Daftar Kredensial';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Mengambil atau Membuat';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Kembalikan sebuah koleksi dari perangkat dengan set baku dari kolom (device.id, device.ices.ic.type, devices.name, devoices.ip, device.dns _ fqdn, device.identify, device.devices.deves.compustries, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Kembalikan daftar semua Modul yang terpasang pada Router';

$GLOBALS["lang"]['Return an individual device details.'] = 'Kembalikan rincian perangkat individu.';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Mengembalikan daftar dari {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Mengembalikan rincian {collection}.';

$GLOBALS["lang"]['Reunion'] = 'Reuni';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Ulasan praktek saat ini terhadap ISO 27001 persyaratan';

$GLOBALS["lang"]['revision'] = 'Revisi';

$GLOBALS["lang"]['Revision'] = 'Revisi';

$GLOBALS["lang"]['risk_assesment_result'] = 'Hasil Assesment Resiko';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Hasil Assesment Resiko';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Rangkaian Resiko & Pengobatan';

$GLOBALS["lang"]['Risk Management'] = 'Manajemen Resiko';

$GLOBALS["lang"]['Role'] = 'Peran';

$GLOBALS["lang"]['roles'] = 'Peran';

$GLOBALS["lang"]['Roles'] = 'Peran';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Peran hanya dapat dibuat dan diedit jika Anda memiliki lisensi Open- Audit Enterprise. Bagi kebanyakan pengguna, set baku Roles harus semua yang diperlukan.';

$GLOBALS["lang"]['Romania'] = 'Rumania';

$GLOBALS["lang"]['Romanian'] = 'Rumania';

$GLOBALS["lang"]['Room'] = 'Kamar';

$GLOBALS["lang"]['route'] = 'Rute';

$GLOBALS["lang"]['Route'] = 'Rute';

$GLOBALS["lang"]['Row'] = 'Baris';

$GLOBALS["lang"]['Row Count'] = 'Cacah Baris';

$GLOBALS["lang"]['row_position'] = 'Posisi Baris';

$GLOBALS["lang"]['Row Position'] = 'Posisi Baris';

$GLOBALS["lang"]['Rows'] = 'Baris';

$GLOBALS["lang"]['ru_height'] = 'Tinggi Ru';

$GLOBALS["lang"]['Ru Height'] = 'Tinggi Ru';

$GLOBALS["lang"]['ru_start'] = 'Ru Mulai';

$GLOBALS["lang"]['Ru Start'] = 'Ru Mulai';

$GLOBALS["lang"]['rule_group'] = 'Grup Aturan';

$GLOBALS["lang"]['Rule Group'] = 'Grup Aturan';

$GLOBALS["lang"]['rules'] = 'Aturan';

$GLOBALS["lang"]['Rules'] = 'Aturan';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Aturan dibuat dan dijalankan terhadap perangkat ketika perangkat ditemukan atau hasil audit diproses. Aturan dapat digunakan untuk menset atribut perangkat berdasarkan atribut lain.<br/><br/>CATATAN - Saat ini kita tidak dapat menghapus sebuah masukan aturan atau keluaran yang berisi a /. Ini karena kerangka kerja parsing bagian dari URL dan mengembalikan 404, bahkan sebelum kode kita berjalan. Cara kerja untuk ini adalah menghapus Aturan itu sendiri, lalu menciptakan ulang masukan dan keluaran seperti yang diperlukan. Untungnya masukan dan keluaran yang berisi a / adalah langka (memang, tidak ada secara baku).';

$GLOBALS["lang"]['Run Discovery'] = 'Jalankan Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Jalankan Dicovery pada Perangkat';

$GLOBALS["lang"]['Run Your Discovery'] = 'Jalankan Discovery Anda';

$GLOBALS["lang"]['Run a Command'] = 'Jalankan perintah';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Jalankan penemuan dan mencari tahu <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Jalankan skrip dengan mengetik <code>cscript test_windows_client.vbs</code> di konsol.';

$GLOBALS["lang"]['Run this Command'] = 'Jalankan Perintah ini';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Berjalan';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Menjalankan Layanan Apache Open-Auditt di bawah Windows';

$GLOBALS["lang"]['Russian'] = 'Rusia';

$GLOBALS["lang"]['Russian Federation'] = 'Federasi Rusia';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Laju Bit Rx';

$GLOBALS["lang"]['Rx Bitrate'] = 'Laju Bit Rx';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Tingkat Rx';

$GLOBALS["lang"]['Rx Level'] = 'Tingkat Rx';

$GLOBALS["lang"]['rx_power'] = 'Daya Rx';

$GLOBALS["lang"]['Rx Power'] = 'Daya Rx';

$GLOBALS["lang"]['rx_profile'] = 'Profil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Profil Rx';

$GLOBALS["lang"]['SAN Audit'] = 'Audit SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Temukan';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versi SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Rincian';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Versi SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Lanjutan)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Pembuatan Statemen';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL tidak berisi kondisi ini akan mengakibatkan widget gagal dijalankan.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Kunci';

$GLOBALS["lang"]['SW Revision'] = 'Revisi SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts dan Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre dan Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent and the Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome dan Principe';

$GLOBALS["lang"]['Saturday'] = 'Sabtu';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arab Saudi';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Simpan dan jalankan berkasnya. Pastikan Anda menjalankan berkas sebagai Administrator untuk memasangnya (klik kanan, Jalankan sebagai Administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Simpan sebagai Baku';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Simpan berkas yang diunduh.';

$GLOBALS["lang"]['scaling'] = 'Skala';

$GLOBALS["lang"]['Scaling'] = 'Skala';

$GLOBALS["lang"]['scan_options'] = 'Opsi Pindai';

$GLOBALS["lang"]['Scan Options'] = 'Opsi Pindai';

$GLOBALS["lang"]['Scan Options ID'] = 'ID Opsi Pindai';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Pindai port ini dan jika terdeteksi terbuka, gunakan port ini untuk komunikasi SSH. Ini ditambahkan ke daftar Pport TCP Kustom di atas (jika belum termasuk), jadi tidak perlu memasukkan dalam daftar itu juga. Comma dipisahkan, tidak ada ruang.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Pindai nomor atas Nmap dari port TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Pindai nomor atas Nmap dari port UDP.';

$GLOBALS["lang"]['schedule'] = 'Jadwal';

$GLOBALS["lang"]['Schedule'] = 'Jadwal';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Pencarian perangkat terjadwal dan pelaporan membuat Open-Auditt Profesional solusi yang efisien bagi para profesional IT yang sibuk mencari untuk mengurangi overhead dan meningkatkan wawasan.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Penjadwalan - penemuan, pelaporan & lebih';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Scope dikenal sebagai Scope Otorisasi, mewakili apakah kerentanan mempengaruhi sumber daya luar otoritas keamanan asli komponen rentan.<br/><br/>Hanya dua nilai yang valid untuk atribut ini';

$GLOBALS["lang"]['script_timeout'] = 'Tenggat Skrip';

$GLOBALS["lang"]['Script Timeout'] = 'Tenggat Skrip';

$GLOBALS["lang"]['scripts'] = 'Skrip';

$GLOBALS["lang"]['Scripts'] = 'Skrip';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Bus Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Bus Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Unit Logis Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Unit Logis Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Port Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Port Scsi';

$GLOBALS["lang"]['Search'] = 'Cari';

$GLOBALS["lang"]['Search For a Device'] = 'Cari Perangkat';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Mencari Tata Data';

$GLOBALS["lang"]['Second'] = 'Kedua';

$GLOBALS["lang"]['secondary'] = 'Second';

$GLOBALS["lang"]['Secondary'] = 'Second';

$GLOBALS["lang"]['Secondary Text'] = 'Teks Second';

$GLOBALS["lang"]['Secret Key'] = 'Kunci Rahasia';

$GLOBALS["lang"]['section'] = 'Bagian';

$GLOBALS["lang"]['Section'] = 'Bagian';

$GLOBALS["lang"]['secure'] = 'Aman';

$GLOBALS["lang"]['Secure'] = 'Aman';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protokol Automatisasi Konten Keamanan';

$GLOBALS["lang"]['Security Level'] = 'Tingkat Keamanan';

$GLOBALS["lang"]['Security Name'] = 'Nama Keamanan';

$GLOBALS["lang"]['Security Status'] = 'Status Keamanan';

$GLOBALS["lang"]['security_zone'] = 'Zona Keamanan';

$GLOBALS["lang"]['Security Zone'] = 'Zona Keamanan';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Lihat di atas. CATATAN - Ini juga dapat disebabkan oleh sertifikat yang ditandatangani sendiri pada server LDAP. Kami bekerja untuk memungkinkan ini dalam rilis masa depan.';

$GLOBALS["lang"]['See our page on enabling'] = 'Lihat halaman kami saat mengaktifkan';

$GLOBALS["lang"]['Seed Discoveries'] = 'Penemuan Benih';

$GLOBALS["lang"]['seed_ip'] = 'IP Benih';

$GLOBALS["lang"]['Seed IP'] = 'IP Benih';

$GLOBALS["lang"]['seed_ping'] = 'Ping Benih';

$GLOBALS["lang"]['Seed Ping'] = 'Ping Benih';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Pembatasan Benih Untuk Pribadi';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Pembatasan Benih Untuk Pribadi';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Pembatasan Benih Ke Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Pembatasan Benih Ke Subnet';

$GLOBALS["lang"]['Select'] = 'Pilih';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Pilih Admin - > Tugas - > Buat Tugas dari menu.';

$GLOBALS["lang"]['Select All'] = 'Pilih Semua';

$GLOBALS["lang"]['Select All Devices'] = 'Pilih Semua Perangkat';

$GLOBALS["lang"]['select_external_attribute'] = 'Pilih Atribut Eksternal';

$GLOBALS["lang"]['Select External Attribute'] = 'Pilih Atribut Eksternal';

$GLOBALS["lang"]['select_external_count'] = 'Pilih Cacah Eksternal';

$GLOBALS["lang"]['Select External Count'] = 'Pilih Cacah Eksternal';

$GLOBALS["lang"]['select_external_type'] = 'Pilih Eksternal Tipe';

$GLOBALS["lang"]['Select External Type'] = 'Pilih Eksternal Tipe';

$GLOBALS["lang"]['select_external_value'] = 'Pilih Eksternal Nilai';

$GLOBALS["lang"]['Select External Value'] = 'Pilih Eksternal Nilai';

$GLOBALS["lang"]['select_internal_attribute'] = 'Pilih Atribut Internal';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Pilih Atribut Internal';

$GLOBALS["lang"]['select_internal_count'] = 'Pilih Cacah Internal';

$GLOBALS["lang"]['Select Internal Count'] = 'Pilih Cacah Internal';

$GLOBALS["lang"]['select_internal_type'] = 'Pilih Internal Tipe';

$GLOBALS["lang"]['Select Internal Type'] = 'Pilih Internal Tipe';

$GLOBALS["lang"]['select_internal_value'] = 'Pilih Internal Nilai';

$GLOBALS["lang"]['Select Internal Value'] = 'Pilih Internal Nilai';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Pilih Menu - > Kelola - > Baseline - > Daftar Baseline.';

$GLOBALS["lang"]['Select a Table'] = 'Pilih Tabel';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Pilih sebuah tubuh sertifikasi terakreditasi';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Pilih dan menerapkan kontrol yang sesuai (Annex A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Pilih <i>COM Keamanan</i> tab<br/><br/>Klik pada Hak Akses Sunting Baku';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Pilih <i>Masuk</i> tab dan salin nilai untuk <i>Penerbit</i> (hanya URL sendiri). Tempelkan ini ke Open- Audit <i>Penerbit</i> lapangan.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Pilih <i>Akun ini</i> checkbox dan memberikan nama akun dan sandi.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Pilih menu awal dan tipe <i>layanan < .i >. Klik ikon Layanan.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Pilih tipe Auth Menthod untuk membuat dan masukan rincian yang relevan.';

$GLOBALS["lang"]['Self Delete'] = 'Hapus Sendiri';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Sensitivitas';

$GLOBALS["lang"]['Sensitivity'] = 'Sensitivitas';

$GLOBALS["lang"]['September'] = 'September';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Sim Serial';

$GLOBALS["lang"]['Serial Sim'] = 'Sim Serial';

$GLOBALS["lang"]['series'] = 'Seri';

$GLOBALS["lang"]['Series'] = 'Seri';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'ID Server';

$GLOBALS["lang"]['Server ID'] = 'ID Server';

$GLOBALS["lang"]['Server Is'] = 'Server Is';

$GLOBALS["lang"]['server_item'] = 'Butir Server';

$GLOBALS["lang"]['Server Item'] = 'Butir Server';

$GLOBALS["lang"]['Server Status'] = 'Status Server';

$GLOBALS["lang"]['Servers'] = 'Server';

$GLOBALS["lang"]['Servers Only'] = 'Hanya Server';

$GLOBALS["lang"]['service'] = 'Layanan';

$GLOBALS["lang"]['Service'] = 'Layanan';

$GLOBALS["lang"]['service_identifier'] = 'Pengenal Layanan';

$GLOBALS["lang"]['Service Identifier'] = 'Pengenal Layanan';

$GLOBALS["lang"]['service_level_a'] = 'Tingkat Layanan A';

$GLOBALS["lang"]['Service Level A'] = 'Tingkat Layanan A';

$GLOBALS["lang"]['service_level_b'] = 'Tingkat Layanan B';

$GLOBALS["lang"]['Service Level B'] = 'Tingkat Layanan B';

$GLOBALS["lang"]['service_network'] = 'Jaringan Layanan';

$GLOBALS["lang"]['Service Network'] = 'Jaringan Layanan';

$GLOBALS["lang"]['service_number'] = 'Nomor Layanan';

$GLOBALS["lang"]['Service Number'] = 'Nomor Layanan';

$GLOBALS["lang"]['service_pack'] = 'Paket Layanan';

$GLOBALS["lang"]['Service Pack'] = 'Paket Layanan';

$GLOBALS["lang"]['service_plan'] = 'Rencana Layanan';

$GLOBALS["lang"]['Service Plan'] = 'Rencana Layanan';

$GLOBALS["lang"]['service_provider'] = 'Penyedia Layanan';

$GLOBALS["lang"]['Service Provider'] = 'Penyedia Layanan';

$GLOBALS["lang"]['service_tag'] = 'Tag Layanan';

$GLOBALS["lang"]['Service Tag'] = 'Tag Layanan';

$GLOBALS["lang"]['service_type'] = 'Jenis Layanan';

$GLOBALS["lang"]['Service Type'] = 'Jenis Layanan';

$GLOBALS["lang"]['Service Under Windows'] = 'Layanan Di Bawah Jendela';

$GLOBALS["lang"]['service_version'] = 'Versi Layanan';

$GLOBALS["lang"]['Service Version'] = 'Versi Layanan';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set Oleh';

$GLOBALS["lang"]['Set By'] = 'Set Oleh';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Set oleh fungsi Discovery - jangan secara normal set ini secara manual.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Diatur oleh audit _ domain atau menemukan skrip _ domain. Jangan diatur.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Set teks eksternal untuk memanfaatkan versi data internal.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Tata teks eksternal ke huruf kecil.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Tata teks eksternal ke huruf besar.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Set ukuran (normal atau kompak) dari tabel pada layar Daftar.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Tata ini jika Anda ingin memasukkan sistem dari AD yang mungkin tidak dapat dikontakbel, tetapi telah dilihat oleh AD sejak tanggal itu.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Mengatur Discovery pada jaringan hampir identik dengan menjalankan Discovery biasa melalui antarmuka web. Satu-satunya item tambahan yang dijadwalkan jam dan hari dan nama untuk Tugas Terjadwal itu sendiri. Anda dapat mengambil keuntungan dari hal ini untuk menjadwalkan berbagai penemuan menggunakan set kredensial yang berbeda.<br/><br/>Sebagaimana Discovery Subnet, Discovery Direktori Aktif juga merupakan bidang yang sama sebagai Discovery Direktori Aktif Biasa dengan penambahan hari, jam, dan nama.<br/><br/>Jika server Open- Auditt memiliki Kolektor melaporkan kepadanya, penurunan tambahan tersedia. Anda dapat memilih ini untuk menentukan collector mana yang harus dijalankan. Hanya tugas Discovery yang didukung untuk Kolektor. Nyatakan item yang sama sebagai Discovery biasa, tapi sediakan Kolektor alternatif untuk menjalankan tugas ini.';

$GLOBALS["lang"]['severity'] = 'Severity';

$GLOBALS["lang"]['Severity'] = 'Severity';

$GLOBALS["lang"]['severity_text'] = 'Teks Severity';

$GLOBALS["lang"]['Severity Text'] = 'Teks Severity';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severity dihitung dari <code>base_score</code> dan bisa menjadi salah satu dari "None, Low, Medium, High, Critical".';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Berbagi';

$GLOBALS["lang"]['Share'] = 'Berbagi';

$GLOBALS["lang"]['Share Name'] = 'Berbagi Nama';

$GLOBALS["lang"]['shared'] = 'Bersama';

$GLOBALS["lang"]['Shared'] = 'Bersama';

$GLOBALS["lang"]['shared_name'] = 'Nama Bersama';

$GLOBALS["lang"]['Shared Name'] = 'Nama Bersama';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Tanggal Kapal';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Dikirim adalah satu set dari item baku. Ini dapat ditemukan dengan menu';

$GLOBALS["lang"]['short'] = 'Singkat';

$GLOBALS["lang"]['Short'] = 'Singkat';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Haruskah aku menghapus semua data non-current dari perangkat ini?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Haruskah berkas (atau pola) ini digunakan untuk melarang berkas dilaporkan. Biasanya, untuk mengaudit file, ini diatur ke <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Haruskah penjual ini digunakan ketika mengambil kerentanan dari FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Haruskah kita menambahkan perangkat dari layanan remote, lokal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Haruskah kita menerapkan lisensi ini ke Org yang dipilih serta anak-anak Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Haruskah kita mengaudit sebuah SAN jika perangkat lunak manajemen terdeteksi.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Haruskah kita mengaudit titik mount.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Haruskah kita mengaudit port netstat (ya, tidak, server saja).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Haruskah kita audit perangkat lunak terpasang.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Haruskah kita mempertimbangkan port disaring untuk menjadi port terbuka - dan karena itu bendera IP ini sebagai memiliki perangkat terpasang?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Haruskah kita mempertimbangkan port terbuka pada 124; disaring untuk menjadi port terbuka - dan karena itu tandai IP ini sebagai memiliki perangkat yang terpasang?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Haruskah kita mengubah nama host ke huruf kecil.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Haruskah kita membuat file berdasarkan hasil audit.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Haruskah kita mengekspos kelompok ini dalam antarmuka web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Haruskah kita mengekspos query ini dalam daftar laporan di bawah menu Laporan di antarmuka web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Haruskah kita mengekspos query ini dalam daftar laporan di bawah menu Laporan di antarmuka web.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Haruskah kita sembunyikan jendela audit ketika mengeksekusi.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Haruskah kita mengabaikan sertifikat SSL yang tidak valid atau self signed sendiri dan tetap mengirimkan hasilnya.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Haruskah kita menginstal Open- Scap pada mesin target.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Haruskah kita mencocokkan alamat mac berbasis perangkat bahkan jika yang dikenal mungkin duplikat dari VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Haruskah kita mencocokkan perangkat berdasarkan DNS fqdn nya.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Haruskah kita mencocokkan perangkat berdasarkan nama host DNS nya.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Haruskah kita mencocokkan perangkat berdasarkan UUID nya.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Haruskah kita mencocokkan perangkat berdasarkan id dbus nya.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Haruskah kita mencocokkan perangkat berdasarkan fqdn nya.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Haruskah kita mencocokkan perangkat berdasarkan nama host dan UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Haruskah kita mencocokkan perangkat berdasarkan nama host dan id dbus nya.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Haruskah kita mencocokkan perangkat berdasarkan nama host dan serinya.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Haruskah kita mencocokkan perangkat berdasarkan IP nya jika kita memiliki perangkat yang ada tanpa data.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Haruskah kita mencocokkan perangkat berdasarkan ip nya.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Haruskah kita mencocokkan perangkat berdasarkan alamat mac nya.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Haruskah kita mencocokkan perangkat berdasarkan seri dan tipenya.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Haruskah kita mencocokkan perangkat berdasarkan nomor serialnya.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Haruskah kita mencocokkan perangkat berdasarkan hanya pada SNMP nya sysName dan serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Haruskah kita mencocokkan perangkat berdasarkan hanya pada SNMP nya sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Haruskah kita mencocokkan perangkat berdasarkan hanya pada nama host nya.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Haruskah kita ping IP sebelum mencoba untuk memindainya? Jika tidak merespon ping, lewati perangkat ini.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Haruskah kita mengisi sistem eksternal dari perangkat lokal kita.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Haruskah kita mengambil semua nama DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Haruskah kita jalankan audit dan mengirimkannya (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Haruskah kita menguji SNMP menggunakan port UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Haruskah kita menguji SSH menggunakan TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Haruskah kita menguji untuk WMI menggunakan TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Haruskah kita uninstall agen (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Haruskah kita menggunakan proksi tingkat sistem atau pengguna untuk mengirimkan hasil audit.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Haruskah kita menggunakan win32 _ product kelas WMI (tidak disarankan oleh Microsoft) ketika mengambil perangkat lunak terpasang.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Haruskah kita menggunakan metode ini untuk mengotorisasi kredensial pengguna. Atur ke <code>y</code> atau <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Haruskah kita menggunakan metode ini untuk mengisi peran pengguna. Lapangan <code>use_auth</code> harus diset ke <code>y</code> untuk menggunakan ini. Atur ke <code>y</code> atau <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Haruskah kita menggunakan nilai ini untuk mencocokkan perangkat eksternal dan internal. Integrasi baku kami menggunakan IP dan UUID di sini. Jika salah satu dari ini cocok antara eksternal dan perangkat internal, kami menganggap mereka menjadi perangkat yang sama.';

$GLOBALS["lang"]['Show All'] = 'Tampilkan Semua';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Batang sisi';

$GLOBALS["lang"]['Sidebar'] = 'Batang sisi';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapura';

$GLOBALS["lang"]['Site A'] = 'Situs A';

$GLOBALS["lang"]['Site B'] = 'Situs B';

$GLOBALS["lang"]['site_hours_a'] = 'Jam Duduk A';

$GLOBALS["lang"]['Site Hours A'] = 'Jam Duduk A';

$GLOBALS["lang"]['site_hours_b'] = 'Jam B Situs';

$GLOBALS["lang"]['Site Hours B'] = 'Jam B Situs';

$GLOBALS["lang"]['size'] = 'Ukuran';

$GLOBALS["lang"]['Size'] = 'Ukuran';

$GLOBALS["lang"]['slaves'] = 'Budak';

$GLOBALS["lang"]['Slaves'] = 'Budak';

$GLOBALS["lang"]['Slovak'] = 'Slovak';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakia (Republik Slovakia)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

$GLOBALS["lang"]['Slovenian'] = 'Slovenia';

$GLOBALS["lang"]['Smart Status'] = 'Status Cerdas';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Licik';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'ID Somp Enterprise';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'ID Somp Enterprise';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nama Somp Enterprise';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nama Somp Enterprise';

$GLOBALS["lang"]['snmp_oid'] = 'Stamp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Stamp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Tenggat Stamp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Tenggat Stamp';

$GLOBALS["lang"]['snmp_version'] = 'Versi Moncong';

$GLOBALS["lang"]['Snmp Version'] = 'Versi Moncong';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Jadi naskah tidak bekerja pada perangkat recalcitrant. Grrr. Skrip untuk Windows, Linux, dan MacOS semua menerima argumen debug. Ini dapat diatur dalam skrip itu sendiri, atau disediakan pada baris perintah. Jalankan skrip memakai opsi yang ditata ke 5 dan Anda harus melihat bagian mana dari skrip kegagalan terjadi. Misalnya';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Jadi selain kata biasa, apa pilihan lain yang ada - saya senang Anda bertanya! Sesuai standar Open- Audit API, kami memiliki beberapa operator untuk penyaringan. Operator yang dapat mendahului nilai';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Jadi Anda memiliki masalah yang menyediakan kredensial Open-Auditt untuk menemukan perangkat Anda. Aku punya jawaban - Kalau begitu jangan! Tentu, maksudku, penemuan adalah hal terbaik sejak irisan roti. Anda tidak perlu tahu sebelumnya <i>Whats On Your Network</i>. Tapi bagaimana Anda bisa mengekstrak data dari perangkat tanpa menyediakan kredensial?<br/><br/>Dalam kasus komputer, pilihan yang mudah adalah menyalin naskah audit yang sesuai ke mesin sasaran dan mengaturnya untuk dijalankan sesuai jadwal. Lebih rinci tentang wiki. Mesin-mesin akan mengirimkan data mereka ke Open-Audite pada jadwal itu, hampir seolah-olah Anda menjalankan penemuan. Perangkat ini hanya menjalankan skrip audit dengan jadwal (lagi, Anda dapat membaca skrip audit) seperti yang Anda suruh dan mengirim keluaran ke server. Tidak ada kredensial yang terlibat sama sekali.<br/><br/>Dan sekarang kita punya Agen untuk Windows. Keuntungan dari Agen yang terpasang yang sebenarnya';

$GLOBALS["lang"]['socket'] = 'Soket';

$GLOBALS["lang"]['Socket'] = 'Soket';

$GLOBALS["lang"]['software'] = 'Perangkat Lunak';

$GLOBALS["lang"]['Software'] = 'Perangkat Lunak';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Perangkat Lunak Ditemukan 7 Hari Terakhir';

$GLOBALS["lang"]['Software Found Today'] = 'Perangkat Lunak Ditemukan Hari ini';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Perangkat Lunak Ditemukan Kemarin';

$GLOBALS["lang"]['software_key'] = 'Kunci Perangkat Lunak';

$GLOBALS["lang"]['Software Key'] = 'Kunci Perangkat Lunak';

$GLOBALS["lang"]['Software License Reporting'] = 'Laporan Lisensi Perangkat Lunak';

$GLOBALS["lang"]['software_name'] = 'Nama Software';

$GLOBALS["lang"]['Software Name'] = 'Nama Software';

$GLOBALS["lang"]['Software Policies'] = 'Kebijakan Software';

$GLOBALS["lang"]['software_revision'] = 'Revisi Perangkat Lunak';

$GLOBALS["lang"]['Software Revision'] = 'Revisi Perangkat Lunak';

$GLOBALS["lang"]['software_version'] = 'Versi Perangkat Lunak';

$GLOBALS["lang"]['Software Version'] = 'Versi Perangkat Lunak';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Kepulauan Solomon';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Republik Somalia';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Beberapa koleksi dapat dieksekusi - query, dll - lihat di bawah ini.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Beberapa contoh berada di bagian bawah halaman ini. Semua titik akhir juga memiliki daftar minimal ruas yang diperlukan. Ini di bawah.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Beberapa templat kami mendukung langkah baru ke tabel data, menggunakan pemrosesan sisi server. Tukang pijat ini meningkatkan beban kali.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Beberapa kesalahan lain telah terjadi ketika mencoba untuk mengikat ke server LDAP. Ini adalah konteks (ie, <i>menyambung</i> di atas telah bekerja), tetapi untuk beberapa alasan lain, mengikat belum terjadi. Periksa log di server LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Ada sesuatu yang salah. Buka -Audit tidak dapat membaca <i>orgs</i> meja.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Ada sesuatu yang salah. Buka -Audit tidak dapat membaca <i>peran</i> meja.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Terkadang penemuan tanpa agenda tidak sesuai dengan kasusmu. Mungkin Anda PC memiliki firewall ketat. Mungkin mereka tidak ada di jaringan ketika penemuanmu dijadwalkan. Mungkin mereka digunakan oleh pekerja jauh. Apapun masalahnya, di sinilah agen bisa membantu. Pasang di mesin target dan itu akan <i>check-in</i> dengan server Open-Audite anda pada jadwal dan menerima tugas. Tugas paling umum yang diminta server adalah untuk mengaudit agen itu sendiri dan mengirim hasilnya.';

$GLOBALS["lang"]['Sort'] = 'Urutkan';

$GLOBALS["lang"]['sound'] = 'Suara';

$GLOBALS["lang"]['Sound'] = 'Suara';

$GLOBALS["lang"]['source'] = 'Sumber';

$GLOBALS["lang"]['Source'] = 'Sumber';

$GLOBALS["lang"]['South Africa'] = 'Afrika Selatan';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Kepulauan South Georgia dan Sandwich Selatan';

$GLOBALS["lang"]['Spain'] = 'Spanyol';

$GLOBALS["lang"]['Spanish'] = 'Spanyol';

$GLOBALS["lang"]['Specific to Azure.'] = 'Khusus untuk Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Khusus untuk OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Tentukan daftar target yang dipisahkan koma (tak ada spasi) yang dikeluarkan dari pemindaian. Daftar yang Anda masukkan menggunakan sintaks Nmap normal, sehingga dapat memuat nama host, jaringan CIDR, jangkauan oktet, dll.';

$GLOBALS["lang"]['speed'] = 'Kecepatan';

$GLOBALS["lang"]['Speed'] = 'Kecepatan';

$GLOBALS["lang"]['speed_down_a'] = 'Kecepatan Turun A';

$GLOBALS["lang"]['Speed Down A'] = 'Kecepatan Turun A';

$GLOBALS["lang"]['speed_down_b'] = 'Kecepatan Bawah B';

$GLOBALS["lang"]['Speed Down B'] = 'Kecepatan Bawah B';

$GLOBALS["lang"]['speed_up_a'] = 'Kecepatan Naik A';

$GLOBALS["lang"]['Speed Up A'] = 'Kecepatan Naik A';

$GLOBALS["lang"]['speed_up_b'] = 'Kecepatan Naik B';

$GLOBALS["lang"]['Speed Up B'] = 'Kecepatan Naik B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Port';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Port';

$GLOBALS["lang"]['ssh_timeout'] = 'Tenggat Ssh';

$GLOBALS["lang"]['Ssh Timeout'] = 'Tenggat Ssh';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Tahap 1: Review Dokumentasi';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Tahap 2: Review implikasi dan efektivitas';

$GLOBALS["lang"]['Stand-Alone'] = 'Berdiri sendiri';

$GLOBALS["lang"]['Standard'] = 'Standar';

$GLOBALS["lang"]['standard_id'] = 'ID Standar';

$GLOBALS["lang"]['Standard ID'] = 'ID Standar';

$GLOBALS["lang"]['standards'] = 'Standar';

$GLOBALS["lang"]['Standards'] = 'Standar';

$GLOBALS["lang"]['standards_policies'] = 'Kebijakan Standar';

$GLOBALS["lang"]['Standards Policies'] = 'Kebijakan Standar';

$GLOBALS["lang"]['standards_results'] = 'Hasil Standar';

$GLOBALS["lang"]['Standards Results'] = 'Hasil Standar';

$GLOBALS["lang"]['start_date'] = 'Tanggal Awal';

$GLOBALS["lang"]['Start Date'] = 'Tanggal Awal';

$GLOBALS["lang"]['start_mode'] = 'Mode Awal';

$GLOBALS["lang"]['Start Mode'] = 'Mode Awal';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Mulai peramban web dan pergi ke';

$GLOBALS["lang"]['started_date'] = 'Tanggal Dimulai';

$GLOBALS["lang"]['Started Date'] = 'Tanggal Dimulai';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Mulai Juni 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Sebelumnya, kebanyakan pengguna dengan penggunaan moderat dapat menggunakan Google Maps, yang tertanam dalam opCharts dan Open-AuditT Profesional / Enterprise, secara gratis. Kebijakan baru Google diuraikan di sini,';

$GLOBALS["lang"]['Starts With'] = 'Dimulai dengan';

$GLOBALS["lang"]['state'] = 'Keadaan';

$GLOBALS["lang"]['State'] = 'Keadaan';

$GLOBALS["lang"]['Stats'] = 'Stat';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Penyimpanan';

$GLOBALS["lang"]['storage_count'] = 'Cacah Penyimpanan';

$GLOBALS["lang"]['Storage Count'] = 'Cacah Penyimpanan';

$GLOBALS["lang"]['Storage area network'] = 'Jaringan area penyimpanan';

$GLOBALS["lang"]['Storage-Area Network'] = 'Penyimpanan Jaringan Area';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'ID Sub Sumber Daya';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID Sub Sumber Daya';

$GLOBALS["lang"]['sub_type'] = 'Sub Tipe';

$GLOBALS["lang"]['Sub Type'] = 'Sub Tipe';

$GLOBALS["lang"]['subject_key_ident'] = 'Identasi Kunci Subjek';

$GLOBALS["lang"]['Subject Key Ident'] = 'Identasi Kunci Subjek';

$GLOBALS["lang"]['Submit'] = 'Kirim';

$GLOBALS["lang"]['Submit Online'] = 'Kirim Daring';

$GLOBALS["lang"]['Submitted From'] = 'Diberikan Dari';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Temukan Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'ID berlangganan';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Sukses';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sandi Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (opsional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Ringkasan';

$GLOBALS["lang"]['Summaries'] = 'Ringkasan';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Ringkasan adalah permintaan tunggal terhadap basis data dengan sebuah <i>grup oleh</i> perintah. Menggunakan metode sederhana ini kita dapat dengan mudah membuat ringkasan untuk hampir setiap atribut.<br/><br/>Kami tidak lagi membutuhkan laporan terpisah untuk masing-masing <i>jenis</i> dari perangkat. Kami sekarang hanya memiliki ringkasan bahwa kelompok oleh <i>perangkat. jenis</i> dan menunjukkan hasilnya. Anda kemudian dapat mengklik tipe yang diberikan dari daftar dan melihat perangkat yang cocok. Dalam kasus ini, satu Ringkasan menggantikan (berpotensi) 78 laporan (ada 78 jenis perangkat).<br/><br/>Sebuah ringkasan berbeda untuk query dalam bahwa ringkasan dirancang untuk grup item dengan atribut yang diberikan kemudian menyediakan <i>klik melalui</i> link ke perangkat sebenarnya. Query hanyalah daftar butir tanpa link lebih lanjut. Seperti di atas - ini dari sebuah Ringkasan sebagai gabungan <i>laporan + sublaporan</i>, sedangkan query hanya satu Laporan.<br/><br/>Ringkasan memiliki berbeda koleksi template ke sumber daya lain dalam Open- Audit. Templat ini menunjukkan Ringkasan seperti yang Anda harapkan dan juga menampilkan tombol dengan jumlah sumber daya lain. Halaman ini dirancang untuk menjadi HomePage of OpenAuditt.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Ringkasan dirancang untuk mengelompokkan item berdasarkan kolom yang cocok dan kemudian menyediakan link ke perangkat individu. Dalam versi sebelumnya Open-Audit, ini akan menjadi dua item yang berbeda - laporan dan laporan tambahan. Kami sekarang telah bundled ini ke dalam apa yang kita sebut Ringkasan.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Ringkasan menyediakan drilldown kemampuan pelaporan. Sederhana, intuitif, kuat.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Ringkasan mengambil argumen yang sama seperti Queries.';

$GLOBALS["lang"]['Summary'] = 'Ringkasan';

$GLOBALS["lang"]['Sunday'] = 'Minggu';

$GLOBALS["lang"]['supplier'] = 'Suplier';

$GLOBALS["lang"]['Supplier'] = 'Suplier';

$GLOBALS["lang"]['Support'] = 'Dukungan';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tipe yang didukung <code>subnet</code>, <code>seed</code> dan <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Mendukung kepatuhan dengan persyaratan hukum dan regulasi';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Audit Surveillance: Audit tahunan untuk menjaga sertifikasi';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Kepulauan Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Swedia';

$GLOBALS["lang"]['Swedish'] = 'Swedia';

$GLOBALS["lang"]['switch_device_id'] = 'Ganti ID Perangkat';

$GLOBALS["lang"]['Switch Device ID'] = 'Ganti ID Perangkat';

$GLOBALS["lang"]['switch_port'] = 'Port Switch';

$GLOBALS["lang"]['Switch Port'] = 'Port Switch';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Swiss, Swiss Confederation';

$GLOBALS["lang"]['Symptom'] = 'Symptom';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Republik Arab Suriah';

$GLOBALS["lang"]['sysContact'] = 'Kontak SysContact';

$GLOBALS["lang"]['SysContact'] = 'Kontak SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'Lokasi SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'Lokasi SysLocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Komponen Sistem';

$GLOBALS["lang"]['System Component'] = 'Komponen Sistem';

$GLOBALS["lang"]['System-Area Network'] = 'Jaringan System- Area';

$GLOBALS["lang"]['TX Bitrate'] = 'Laju Bit TX';

$GLOBALS["lang"]['TX Freq'] = 'Freq TX';

$GLOBALS["lang"]['TX Level'] = 'Tingkat TX';

$GLOBALS["lang"]['TX Power'] = 'Daya TX';

$GLOBALS["lang"]['TX Profile'] = 'Profil TX';

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tag';

$GLOBALS["lang"]['Tags'] = 'Tag';

$GLOBALS["lang"]['Tags :: '] = 'Tag:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Perhatikan semua keluaran dan aksi setiap butir sesuai.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Komputer Target';

$GLOBALS["lang"]['task'] = 'Tugas';

$GLOBALS["lang"]['Task'] = 'Tugas';

$GLOBALS["lang"]['tasks'] = 'Tugas';

$GLOBALS["lang"]['Tasks'] = 'Tugas';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Tugas dapat menjadi salah satu dari beberapa tipe berbeda: Baseline, Discovery, Report, Query, Summary atau collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Port Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Port Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Rincian Teknis';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'ID Tenant';

$GLOBALS["lang"]['Tennant ID'] = 'ID Tennant';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Tes 1';

$GLOBALS["lang"]['Test 2'] = 'Tes 2';

$GLOBALS["lang"]['Test 3'] = 'Tes 3';

$GLOBALS["lang"]['Test Email'] = 'Surel Uji';

$GLOBALS["lang"]['test_minutes'] = 'Menit Uji';

$GLOBALS["lang"]['Test Minutes'] = 'Menit Uji';

$GLOBALS["lang"]['test_os'] = 'Os Uji';

$GLOBALS["lang"]['Test Os'] = 'Os Uji';

$GLOBALS["lang"]['test_subnet'] = 'Subnet Uji';

$GLOBALS["lang"]['Test Subnet'] = 'Subnet Uji';

$GLOBALS["lang"]['tests'] = 'Tes';

$GLOBALS["lang"]['Tests'] = 'Tes';

$GLOBALS["lang"]['Text'] = 'Teks';

$GLOBALS["lang"]['Thai'] = 'Thai';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Terima kasih untuk memulai perjalanan Anda dengan terbaik penemuan dan alat inventaris sekitar.';

$GLOBALS["lang"]['Thanks to'] = 'Terima kasih';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Itu dia! Anda baru saja mengedit atribut sebanyak perangkat yang Anda butuhkan.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The <i>Peran</i> titik akhir memungkinkan anda untuk mengelola seperangkat perizinan (Buat, Baca, Baca, Update, Hapus) yang diberikan kepada pengguna dan diterapkan ke setiap titik akhir.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API menggunakan cookie. Anda dapat meminta cookie dengan mengirim POST ke URL di bawah ini, berisi nama pengguna dan atribut sandi dan nilai:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Domain Direktori Aktif untuk mengambil daftar subnets dari.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Server Direktori Aktif untuk mengambil daftar subnets dari.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Titik akhir Aplikasi memungkinkan Anda mendefinisikan aplikasi yang kemudian dapat Anda hubungkan ke perangkat (atau perangkat).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Atribut titik akhir memungkinkan Anda untuk menambahkan nilai yang disesuaikan ke atribut yang berbeda dalam Open-Auditt, pada saat fitur ini bekerja pada Kelas, Lingkungan, Status dan Jenis atribut pada Perangkat, Jenis atribut untuk kedua Lokasi dan Org serta Kategori Menu untuk Queries. Jika Anda melihat satu butir dari salah satu tipe provious (katakanlah view a Lkocation) Anda akan melihat atribut Tipe harus dipilih dari kotak drop-down. Di sinilah nilai-nilai tersebut disimpan. Oleh karena itu, jika Anda ingin menambahkan Tipe Baru untuk dipilih untuk Lokasi, tambahkan menggunakan Fitur Atribut.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Metameter otomatis menangkap jawaban dari pertanyaan <strong>Dapatkah penyerang otomatisasi peristiwa untuk kerentanan ini di beberapa target?</strong> berdasarkan langkah 1-4 dari rantai pembunuh. Langkah-langkah ini pengintaian, persenjataan, pengiriman, dan eksploitasi (Tidak ditentukan, Tidak, Ya).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE telah ditandai sebagai tidak valid atau ditarik dalam CVE List. Masih dalam NVD tetapi dikecualikan dari hasil pencarian baku.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE telah dipublikasikan ke CVE List dan termasuk dalam data NVD. Intrusi awalnya saja.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE telah diperbarui setelah analisis awal. Data pengayaan NVD mungkin telah direvisi.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Pengenal CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE secara aktif diperkaya dengan skor CVSS, klasifikasi CWE, tanda referensi, dan peralatan CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE saat ini tidak memprioritaskan untuk memperkaya karena batasan sumber daya atau alasan lain.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE adalah antrian untuk pengayaan oleh analis NVD. Belum ada metadata rinci.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Cloud yang memiliki item ini. Taut ke <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Discovery Benih Perangkat adalah metode terbaru yang efektif untuk merangkak jaringan, memberi Anda kemampuan untuk menargetkan jaringan Anda sebagai sempit atau seluas yang Anda butuhkan. Hal ini cepat, bekerja dan itu adalah besar.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'The Discovery Scan Pilihan kita kapal rinci di meja di bawah ini. Seperti di atas, pengguna Enterprise dapat membuat lebih dari ini atau menyunting item yang dikirim.';

$GLOBALS["lang"]['The Elevated User query'] = 'Kuiri Pengguna Tingkatkan';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Fitur eksekusi memindai disk dari perangkat sebagai bagian dari audit dan memeriksa bahwa setiap berkas executable dikenal oleh manajer paket. Karena ia menggunakan manajer paket, fitur hanya berlaku bagi perangkat target Linux, dan lebih jauh dari itu, hanya rpm atau deb berbasis distribusinya. Apa pun berbasis Redhat atau Debian harus bekerja.';

$GLOBALS["lang"]['The FROM'] = 'THE DARI';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grup dulu menjalankan Baseline. Taut ke <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID dari tabel perangkat (device.name akan ditampilkan) dari NTU pada akhir sambungan ini. Taut ke <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID dari kebijakan benchmark impor.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID dari tabel lokasi (locations.name akan ditampilkan) dari akhir sambungan ini. Taut ke <code>locations.id</code>. Lokasi A biasanya <code>FROM</code> lokasi.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID dari tabel lokasi (locations.name akan ditampilkan) dari akhir sambungan ini. Taut ke <code>locations.id</code>. Lokasi B biasanya <code>TO</code> lokasi.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'ID dari perangkat yang terkait (jika ada). Taut ke <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'ID dari penemuan yang terkait. Terhubung ke <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID dari butir dari tipe yang terkait.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'ID dari orgs ini org induk. Terhubung ke <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'ID yang diberikan oleh penyedia.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID diambil dari penemuan Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Alamat IP kolektor ini digunakan untuk berkomunikasi dengan server.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP dari perangkat untuk memulai penemuan benih dengan.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP dari antarmuka eksternal.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP interface internal.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO / IEC 27001 proses sertifikasi dan elemen kuncinya.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP atau Telco menyediakan link ini.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Catatan JSON dari Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Catatan JSON dari NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU dari pengguna ini (jika LDAP digunakan).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Server LDAP tidak dapat terhubung. Sama sekali. Periksa ini dapat ditayangkan dari server Open- Audite. Periksa port yang benar terbuka ke server Open-Auditt. Sebuah nmap dari server Open-Audit akan menampilkan ini. Mengganti IP server LDAP untuk $ip. Coba:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Tipe server LDAP tidak valid. Ini harus baik <i>direktori aktif</i> atau <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Server LDAP tersambung dan kredensial pengguna diterima untuk bind.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Pemasang Linux Open-Auditt akan diuji untuk dan jika diperlukan, instal ketergantungan Open-Auditts dari repositori distribusi Anda, termasuk pengaturan SetUID Nmap. Hal ini diperlukan untuk deteksi SNMP (UDP 161) oleh pengguna non-root. Ini didukung pada RedHat / Centos dan Debian / Ubuntu. Bila Anda perlu menginstal Nmap secara manual:<br/><br/>Untuk RedHat / Centos lakukan (CATATAN - jika Anda meng-upgrade menggunakan yum, Anda akan perlu menerapkan ulang ini <i>chmod</i> pengaturan).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Lokasi yang berisi jaringan ini. Taut ke <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Status dasar NVD ditugaskan.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Institut Nasional Standards dan Teknologi adalah badan teknologi federal. Mereka memajukan teknologi resmi, pengukuran ilmu pengetahuan dan standar.';

$GLOBALS["lang"]['The Network to Discover'] = 'Jaringan untuk Discover';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Waktu Nmap sudah siap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS paket ini harus dilaporkan melawan. Kosong untuk semua. Gunakan tanda persen% sebagai wildcard. Akan diuji melawan os _ group, os _ family dan os _ name dalam urutan itu.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'API Open- Audit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Id Open- Auditt dari awan terkait. Taut ke <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud Kode server IT dikeluarkan dalam berkas ini.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud Kode server IT dikeluarkan dalam fungsi ini.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'ekosistem OpenSCAP menyediakan beberapa alat untuk membantu administrator dan audit dengan penilaian, pengukuran, dan penegakan baseline keamanan termasuk berbagai panduan dan baseline konfigurasi dikembangkan oleh masyarakat open source, memastikan bahwa Anda dapat memilih kebijakan keamanan yang paling sesuai dengan kebutuhan organisasi Anda, terlepas dari ukuran.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Proyek OpenSCAP adalah koleksi dari perangkat open source untuk menerapkan dan menegakkan standar ini, dan telah dianugerahi sertifikasi SCAP 1,2 oleh NIST pada tahun 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisasi yang memiliki item ini. Taut ke <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Pengenal Proses dari penemuan yang terkait.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Positon RU dari bagian atas perangkat ini.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Fitur Racks digunakan untuk mengelola dan memvisualisasikan penggunaan rak Anda dengan Organisasi, Lokasi, Bangunan, Lantai, Kamar dan Baris.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP adalah spesifikasi untuk mengekspresikan dan memanipulasi data keamanan dengan cara standar. SCAP menggunakan beberapa spesifikasi individu dalam konser untuk memantau secara otomatis, manajemen kerentanan, dan kebijakan keamanan untuk mengevaluasi';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Seksi SELECT dari query harus menggunakan notasi titik penuh dan juga meminta ruas dengan nama titik penuh. Perangkat IE-SELECT. id AS \'device.id\'. Setiap bidang harus dipilih dalam mode ini untuk mengaktifkan penyaringan atribut sisi GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Seksi SELECT dari SQL anda harus memuat kolom yang memenuhi syarat penuh dan menyatakan kolom tertentu.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Senar komunitas SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Sandi Otentikasi SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protokol Otentikasi SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privasi Pasfrasa.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Protokol Privasi SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Tingkat Keamanan SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Nama Keamanan SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'ID konteks SNMPv3 (opsional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nama konteks SNMPv3 (opsional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL tidak dapat memuat <strong>WHERE @ filter OR</strong>. Bahwa SQL tidak akan dieksekusi, namun <strong>WHERE @ filter AND</strong> Kueri diperbolehkan.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Kueri SQL yang digunakan dalam Open- Audit memerlukan penggunaan karakter - \'dan Bukan kutipan tunggal standar untuk ruas. Pada sebagian besar keyboard US Windows tombol backtick terletak di atas - kiri dari keyboard bersama dengan tilde ~. Pada keyboard AS Mac kunci backtick terletak di sebelah kunci SHIFT. Kutipan tunggal standar masih digunakan untuk menutup nilai sebagai contoh di bawah ilustrasi.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Kueri SQL pada dasarnya dibagi menjadi tiga bagian.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Fungsi Standards dalam sertifikasi Open- Audit memungkinkan Anda untuk, sebelum waktu, menyelesaikan pertanyaan audit yang diperlukan ketika menyelesaikan ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL dari sistem eksternal.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL Open-Audit Anda Server yang akan dilaporkan Kolektor ini (tidak ada garis miring).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL script audit harus mengirimkan hasilnya.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Titik akhir pengguna memungkinkan Anda mengelola akun pengguna dalam Open- Auditt.';

$GLOBALS["lang"]['The WHERE'] = 'WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Bagian mana dari SQL Anda <em>harus</em> berisi';

$GLOBALS["lang"]['The Windows'] = 'Jendela';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Log Windows mungkin mengatakan berikut';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Akun harus memiliki sandi; WMI tidak mengijinkan sandi kosong.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Sandi akun TIDAK boleh memuat\ "(tanda kutip ganda). Ini karena cscript (dan wscript) tidak dapat mengurai nilai argumen yang berisi tanda kutip ganda. Mereka hanya dilucuti. Tidak (sebelum meminta) melarikan diri tidak akan berhasil. Ini adalah keterbatasan naskah dan tidak ada hubungannya dengan Open-Auditt.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Nama lengkap pengguna ini.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Alamat halaman pengiriman server Open-Auditt.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administrator diberikan kredensial yang berhasil digunakan untuk mengikat ke LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administrator yang diberikan kredensial untuk mengikat ke server LDAP, tetapi mereka belum diterima oleh sevrer LDAP. Periksa ulang kredensial pada server LDAP, lalu periksa (atau reset mereka) pada entri server Open- AuditT LDAP.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agen dan server juga cukup cerdas untuk memperbarui sendiri jika versi baru dipasang di server (katakan setelah meningkatkan Open-Auditt).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agen harus mengunduh salinan baru naskah audit, menjalankannya dan mengirimkan hasilnya ke server.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Aplikasi ini menciptakan audit scrotip sementara di sini, menyalin mereka ke mesin sasaran, kemudian menghapusnya.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Garis dasar yang terkait. Taut ke <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Penemuan terkait (jika diperlukan). Taut ke <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Atribut untuk diuji (dari <code>devices</code> tabel).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Atribut untuk diuji (harus cocok dengan nama ruas eksternal dari bawah).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Atribut untuk opsi pemindaian penemuan sama dengan di bawah.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Naskah audit yang digunakan untuk mendasari penyesuaian Anda.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Skrip audit akan menggunakan berkas [] array dan mengambil rincian berkas.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Naskah audit semua menerima sebuah argumen debug. Anda dapat menjalankan naskah memanfaatkan itu dan melihat secara rinci apa masalahnya. Dan jika Anda tidak dapat mencari tahu - itulah yang kita di sini untuk! Membuka kasus dukungan dan kita akan mendapatkan hal-hal berjalan dalam waktu singkat.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Jalur dasar tempat mencari Pengguna.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Langkah-langkah di bawah ini bukanlah kesalahan atau unik bagi Open-Audit dan akan mempengaruhi <strong>sebarang</strong> aplikasi penemuan menggunakan WMI jauh dan / atau Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Tipe benchmark.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Bangunan rak terletak di.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Jumlah perangkat yang dihitung yang akan dibuat secara eksternal.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Jumlah perangkat yang dihitung yang akan dibuat dalam Open- Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'ID klien adalah ID dari aplikasi Direktori Aktif Azure. Rahasia klien adalah kunci yang Anda berikan aplikasi itu.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Kolektor pada dasarnya adalah instalasi penuh Open- Auditt dalam <i>kolektor</i> modus. Kolektor ini dirancang untuk menjalankan penemuan pada jaringan itu terletak di. Hal ini tidak dibatasi untuk hanya jaringan itu, tetapi idealnya itu pada dasarnya akan menjadi satu kolektor per jaringan di mana dibutuhkan. Kolektor didorong pada jadwal oleh server dan berjalan penemuan pada jaringan seperti yang ditentukan.<br/>Ketika di Stand Modus tunggal Kolektor bertindak sebagai server independen, hanya meneruskan semua perangkat yang ditemukan ke server utama.<br/><br/>Setelah dipasang dan dipasang, kendali Kolektor dilakukan pada Server (bukan dalam mode Stand Alone).<br/><br/>Port jaringan yang diperlukan antara kolektor dan server adalah 80 atau 443 (koneksi TCP didirikan dari Kolektor ke Server). Basis data Open- Audit bukan (dan tidak dapat) dibagikan di antara instalasi ini.<br/><br/>Secara baku kolektor (tidak dalam mode Stand Alone) akan meminta dari server setiap tugas penemuan setiap 5 menit (Anda dapat mengkonfigurasi ini pada server untuk Kolektor baru menggunakan item konfigurasi collector _ check _ minutes) sehingga setiap tugas penemuan untuk kolektor harus dijadwalkan untuk 0, 5, 10, 15, dll menit.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Kolektor pada dasarnya adalah instalasi penuh Open- Auditt dalam <i>kolektor</i> modus. Mode ini akan mengurangi fungsionalitas terlihat dalam upaya untuk menyederhanakan dan memfokuskan aplikasi. Ini dirancang untuk mengumpulkan informasi tentang jaringan lokal dan perangkat, di mana firewall dan / atau jaringan traversal adalah masalah dari server.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kolektor internal IP digunakan ketika menjalankan penemuan.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Nama kolom dari meja asing. Harus salah satu dari: kelas, lingkungan, status, tipe atau menu _ kategori.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Perintah dijalankan atas perangkat target atau kode server Open-Auditt dieksekusi selama penemuan.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurasi cluster Anda dapat: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> atau kosong.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Password kredensial. Bila kredensial merupakan Kunci SSH, ini adalah sandi yang dipakai untuk membuka kunci dan opsional.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Kredensial yang diberikan pengguna gagal.';

$GLOBALS["lang"]['The credentials username.'] = 'Nama pengguna kredensial.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Tanggal dan waktu saat ini dalam format: Y-m-d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Tanggal saat ini dalam format Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Status saat ini dari Discovery Cloud.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Status penemuan saat ini.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Dasbor yang akan ditampilkan secara baku bagi pengguna ini. Taut ke <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Data yang tersimpan dalam basis data tidak ditampilkan dalam aplikasi diterjemahkan. Kami meninggalkan data seperti itu. Namun, tidak ada yang menghentikan Anda, pengguna, mengubah nama (misalnya) dari item dalam basis data ke bahasa Anda.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Data yang Anda masukan akan digunakan dalam <code>LIKE</code> clause, bukan (sesuai API) sebuah <code>equals</code> Klausul. Contoh lain - jika Anda masukan <code>comput</code>, itu masih akan mengembalikan semua komputer. Dan karena kita menggunakan <code>LIKE</code> Klausa, itu karena - sensitif.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Skema basis data dapat ditemukan pada aplikasi jika pengguna memiliki basis data:: izin baca dengan pergi ke menu: Admin - > Basis data - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Versi basis data dan versi web tidak konsisten.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Tanggal kedaluwarsa lisensi.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Tanggal perangkat lunak dihentikan oleh produsen. Biasanya diganti dengan versi yang lebih baru. Pemeliharaan mungkin masih tersedia.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Tanggal perangkat lunak tidak lagi menerima pemutakhiran dan secara efektif tidak dilanjutkan sama sekali. Pemeliharaan tidak dilanjutkan.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Tanggal butir ini diubah atau ditambahkan (hanya membaca). CATATAN - Ini adalah penanda waktu dari server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Tanggal / waktu ketika hasil ini dibuat.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '(Sesungguhnya kamu akan dibangkitkan) pada hari ketika tiupan pertama menggoncang alam,';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Hari ketika tugas ini harus dilaksanakan.';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Aras debug (akan keluar ke jendela perintah prompt). Lower berarti kurang keluaran dengan 0 tanpa keluaran.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Opsi pemindaian standar adalah set UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Bahasa baku yang diberikan ke pengguna manapun yang dibuat oleh metode ini.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Perangkat harus merespon ping Nmap sebelum dianggap daring.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Perangkat dalam Open- Audit. Taut ke <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Tautan langsung untuk skrip adalah';

$GLOBALS["lang"]['The email address of the reciever'] = 'Alamat surel dari penerima';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Biner perusahaan dari FirstWave diperlukan untuk lisensi. Silakan unduh Open-Audit dari';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Seluruh dasar terkait hasil ini adalah dari.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Kerapuhan yang dieksploitasi dapat mempengaruhi sumber daya luar otoritas keamanan komponen rentan. Ini biasanya berarti hak istimewa atau batas kepercayaan disilangkan (misalnya, melarikan diri dari wadah ke host OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Kerapuhan yang dieksploitasi hanya dampak sumber daya dalam otoritas keamanan yang sama sebagai komponen rentan. Dengan kata lain, tindakan penyerang tetap dalam batas kepercayaan asli.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'ID lokasi yang direferensikan secara eksternal. Biasanya dihuni oleh audit Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Bidang yang terkait dengan Integrasi disimpan dalam database sebagai objek array JSON. Setiap ruas memiliki atribut berikut';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Pertama kalinya Open-Audit mengambil rincian perangkat ini.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Lantai rak terletak di.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Meja asing untuk referensi. Harus salah satu dari: perangkat, lokasi, orgs atau kueri.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Format data Anda mesti dalam bentuk';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Format keluaran yang dipakai untuk diemail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Kolom memenuhi syarat penuh yang digunakan untuk berkelompok. CATATAN: Ketika tipe = lalu lintas, ini merepresentasikan id query merah.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Nama yang memenuhi syarat sepenuhnya dikembalikan oleh sistem eksternal. EG: untuk NMIS kami menggunakan konfigurasi. peran Tipe.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Meja yang memenuhi syarat sepenuhnya. Beberapa dapat disediakan, dipisahkan oleh koma (tidak ada spasi).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Query SQL yang dihasilkan untuk menguji kerentanan ini. Bidang ini dapat disunting untuk memperbaiki permintaan seperti yang diperlukan.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Kelompok perangkat di mana garis dasar dijalankan melawan.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grup yang menyediakan daftar perangkat untuk integrasi. Taut ke <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '(Sesungguhnya kamu akan dibangkitkan) pada hari ketika tiupan pertama menggoncang alam,';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'ID dari perangkat terkait. Taut ke <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Kolom identifier (integer) dalam basis data (hanya baca).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Pentingnya baseline ini (belum digunakan).';

$GLOBALS["lang"]['The integer of severity.'] = 'The integer dari keparahan.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Nilai internal, diformat ulang dalam format ini.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Alamat IP dari metode Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Bahasa untuk menerjemahkan antarmuka web ke dalam pengguna.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Tanggal dan waktu terakhir item ini dieksekusi (hanya membaca).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Terakhir kali Open-Audit mengambil rincian perangkat ini.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Terakhir kali benchmarks ini dieksekusi.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Terakhir kali integrasi ini dijalankan.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Titik akhir lisensi memungkinkan Anda untuk melacak jumlah lisensi yang ditemukan pada perangkat Anda.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Nomor baris yang ditugaskan oleh penyedia ke baris pada akhir sambungan ini.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Lokasi rak terletak di. Taut ke <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Lokasi alamat.';

$GLOBALS["lang"]['The locations area.'] = 'Area lokasi.';

$GLOBALS["lang"]['The locations city.'] = 'Lokasi kota.';

$GLOBALS["lang"]['The locations country.'] = 'Negara lokasi.';

$GLOBALS["lang"]['The locations district.'] = 'Distrik lokasi.';

$GLOBALS["lang"]['The locations latitude.'] = 'Lokasi lintang.';

$GLOBALS["lang"]['The locations level.'] = 'Tingkat lokasi.';

$GLOBALS["lang"]['The locations longitude.'] = 'Lokasi bujur.';

$GLOBALS["lang"]['The locations phone.'] = 'Lokasi telepon.';

$GLOBALS["lang"]['The locations postcode.'] = 'Lokasi kode pos.';

$GLOBALS["lang"]['The locations region.'] = 'Daerah lokasi.';

$GLOBALS["lang"]['The locations room.'] = 'Ruang lokasi.';

$GLOBALS["lang"]['The locations state.'] = 'Lokasi negara.';

$GLOBALS["lang"]['The locations suburb.'] = 'Lokasi pinggiran kota.';

$GLOBALS["lang"]['The locations suite.'] = 'Lokasi suite.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Logika bagi perangkat yang cocok berisi dalam berkas perangkat _ helper.php, yang pada instalasi Linux dapat ditemukan di sini';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Pengaturan perizinan mesin-baku tidak memberikan izin aktivasi lokal bagi aplikasi server COM dengan';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Berat fisik maksimum (dalam KG) rak ini dapat terus.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Total maksimum BTU rak ini dinilai untuk.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Atribut minimal yang diperlukan untuk atribut adalah';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Menit saat tugas ini harus dijalankan (* untuk setiap menit).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Bulan ketika tugas ini harus dilaksanakan.';

$GLOBALS["lang"]['The name given to this item.'] = 'Nama yang diberikan pada item ini.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Nama yang diberikan pada item ini. Idealnya harus unik.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Nama yang diberikan ke pengguna ini (digunakan untuk log masuk). Idealnya harus unik.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Nama awan yang terkait (jika diperlukan).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Nama paket perangkat lunak, yang diaudit oleh OpenAuditt. Gunakan tanda persen% sebagai wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Nama pengguna yang terakhir berubah atau menambahkan item ini (hanya membaca).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Nama yang disediakan oleh penyedia.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Jaringan dalam format 192.168.1.0 / 24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Jaringan jaringan untuk menjalankan penemuan.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Agen baru menjalankan versi PowerShell dari skrip audit lama dalam persiapan untuk penyusutan VBScript (ya, itu datang).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Jumlah RUs perangkat ini menempati.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Jumlah lokasi yang terkait. Taut ke <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Jumlah jaringan yang terkait. Taut ke <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Jumlah perangkat yang diaudit di awan ini. Taut ke <code>devices.cloud_id</code> dan <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Jumlah kerentanan berat kritis yang dipegang oleh FirstWave (bukan dalam basis data Anda).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Jumlah perangkat yang ditemukan oleh penemuan ini.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Jumlah perangkat dalam grup yang terkait.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Jumlah perangkat di awan ini dengan keadaan berjalan. Taut ke <code>devices.cloud_id</code> dan <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Jumlah perangkat di awan ini dengan keadaan berhenti. Taut ke <code>devices.cloud_id</code> dan <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Jumlah perangkat di awan ini. Taut ke <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Jumlah perangkat benchmark ini akan dijalankan atas. Berasal dari <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Jumlah perangkat untuk membatasi penemuan ini.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Jumlah kerentanan tingkat tinggi yang dipegang oleh FirstWave (bukan dalam database Anda).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Jumlah kerentanan tingkat tinggi yang ditahan oleh FirstWave (bukan di database Anda).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Jumlah kerentanan berat sedang yang dipegang oleh FirstWave (bukan dalam basis data Anda).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Jumlah lisensi yang dibeli.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Jumlah detik untuk mencoba dan berkomunikasi dengan target IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Jumlah kerentanan tanpa keparahan yang dipegang oleh FirstWave (bukan dalam database Anda).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Ofset adalah jumlah perangkat yang ingin Anda kembalikan.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Satu-satunya nama izin / kebijakan yang diperlukan (dalam pengujian kami) adalah';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Kolom sekunder opsional. CATATAN: Ketika tipe = lalu lintas, ini mewakili query id kuning.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Kolom ketiga opsional. CATATAN: Ketika tipe = lalu lintas, ini merupakan query id hijau.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Urutan pengambilan informasi adalah sunggul, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Orientasi perangkat ini.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Sandi (jika tidak menggunakan pengguna yang menjalankan skrip).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Sandi bagi atribut dn _ account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Sandi yang digunakan untuk mengakses sistem eksternal.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Lokasi ke berkas atau direktori.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Lokasi ke berkas atau direktori. Direktori harus berakhir dengan garis miring trailing.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Kedalaman fisik (dalam CM) rak.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Tinggi fisik (dalam CM) rak.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Berat fisik (dalam KG) rak saat ini.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Berat fisik (dalam KG) rak ketika kosong.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Lebar fisik (dalam CM) rak.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Kapsul (jika ada) di rak ini.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Sirkuit listrik yang digunakan rak ini.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Tabel basis data primer yang digunakan untuk mendasari widget ini.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Metode primer untuk otorisasi (apa yang pengguna dapat lakukan) sekarang didasarkan pada pengguna Roles. Peran didefinisikan sebagai admin, org _ admin, reporter, dan pengguna secara baku. Setiap peran memiliki seperangkat izin (Buat, Baca, Update, Hapus) untuk setiap titik akhir. Peran standar yang dikirim harus mencakup 99,9 persen dari kasus-kasus yang digunakan. Kemampuan untuk mendefinisikan peran tambahan dan menyunting peran yang ada diaktifkan dalam Open-Auditt Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Pengenal proses dari butir antrian ini.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Proses yang digunakan terakhir untuk mengambil rincian tentang perangkat';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Tujuan dari halaman lisensi ini adalah untuk daftar produk dan lisensi termasuk dalam produk komersial Firstwave termasuk produk berdasarkan karya open source. Open- Audit dilisensikan dari Firstwave di bawah AGPLv3 atau kemudian dengan Enterprise dan Fungsi Profesional berlisensi di bawah istilah komersial. Buka -Audit ketika diunduh dari FirstWave mungkin termasuk pustaka dan proyek berikut, yang diberikan tidak diubah dan berlisensi seperti yang ditunjukkan:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Kuiri yang menyediakan daftar perangkat untuk integrasi. Taut ke <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Nomor aset rak.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Tanda Aset rak.';

$GLOBALS["lang"]['The rack bar code.'] = 'Kode rak bar.';

$GLOBALS["lang"]['The rack model.'] = 'Model rak.';

$GLOBALS["lang"]['The rack serial.'] = 'Seri rak.';

$GLOBALS["lang"]['The rack series.'] = 'Seri rak.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Rak perangkat ini terletak di dalam. Taut ke <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Proses pengalamatan dan memperbaiki kerentanan keamanan diidentifikasi. Ini biasanya melibatkan menerapkan patch, update, atau tindakan lain untuk menghilangkan risiko yang ditimbulkan oleh kerentanan.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Notasi domain reguler dari direktori Anda. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Properti yang diminta mesti berada dalam daftar yang dipisahkan dengan koma. Properti harus sepenuhnya memenuhi syarat - ie, system.hostname (bukan hanya nama host).';

$GLOBALS["lang"]['The result of the command.'] = 'Hasil dari perintah.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Ruangan rak terletak di.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Baris rak terletak di.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Pencarian grup pada server LDAP gagal. Periksa log server LDAP. Apakah Anda membuat grup ini (untuk peran dan organ) pada server LDAP dan menugaskan pengguna LDAP kepada mereka?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Kunci rahasia yang dipakai bersama dengan kunci EC2 API AWS Anda.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Perangkat lunak akhir dari tanggal kehidupan.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Perangkat lunaknya sudah berakhir.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Kolom basis data spesifik dari tabel basis data yang dispesifikasikan.';

$GLOBALS["lang"]['The specific database table.'] = 'Meja database khusus.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Pilihan waktu Nmap standar. Sebelumnya ditetapkan di T4 (agresif).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Pilihan waktu Nmap standar. Kami biasanya menggunakan -T4 (Agresif) karena ini direkomendasikan untuk broadband yang layak atau koneksi ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Status integrasi ini';

$GLOBALS["lang"]['The status of this queued item.'] = 'Status dari item antrian ini.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Langkah-langkah di bawah garis besar proses.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Target IP referensi log ini untuk (jika ada).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Target komputer untuk audit. "\" berarti localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Templat untuk link yang akan dihasilkan setiap baris hasil.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Teks untuk bagian bawah bagan dalam bagan baris (hanya).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Teks yang ditampilkan.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Timstemp setelah itu, tugas ini harus dijalankan. Sebagai contoh, jalankan tugas setelah 1 Juni 2017 pukul 10 pagi, atur ke <code>2017-06-01 09:59:00</code>. Nilai ini harus nol padded (ie, 09, bukan 9). Nilai ini default ke <code>2000-01-01 00:00:00</code> yang berarti secara default, tugas yang dijadwalkan akan berjalan pada jadwal berikutnya waktu eksekusi.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '10 top, 100 atau 1000 (atau tidak) port TCP biasanya digunakan menurut Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '10 besar, 100 atau 1000 (atau tidak) port UDP biasanya digunakan menurut Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Total keluaran BTU di rak ini.';

$GLOBALS["lang"]['The type of device.'] = 'Jenis perangkat.';

$GLOBALS["lang"]['The type of organisation.'] = 'Jenis organisasi.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Jenis rak (kompute, power, network, dll).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Tugas yang harus dijalankan. Satu dari: baseline, benchmark, penemuan awan, penemuan, integrasi, laporan, query.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Jenis integrasi (biasanya dinamai dari sistem eksternal).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Keadaan yang tidak disaring berarti bahwa port dapat diakses, tapi Nmap tidak dapat menentukan apakah itu terbuka atau tertutup. Hanya auckscan, yang digunakan untuk memetakan aturan firewall, mengklasifikasikan port ke negara ini. Memindai port yang tidak disaring dengan tipe pemindaian lain seperti pemindaian jendela, pemindaian SYN, atau pemindaian FIN, mungkin membantu menyelesaikan apakah port terbuka.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Pengenal unik dari server ini.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Rekening pengguna yang digunakan kolektor ini. Taut ke <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Pengguna dalam Direktori Aktif / OpenLDAP harus menjadi anggota langsung dari kelompok Open- Audit yang diperlukan untuk Roles dan Orgs. Seorang anggota kelompok yang merupakan anggota kelompok lain yang merupakan anggota dari kelompok OpenAudit tidak akan bekerja.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Pengguna dalam LDAP dan kredensial mereka valid, tetapi tidak dalam Open- AuditT kelompok LDAP untuk Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Pengguna dalam LDAP dan kredensial mereka valid, tetapi tidak dalam Open- AuditT kelompok LDAP untuk Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Pengguna dalam LDAP dan kredensial mereka valid, tetapi tidak dalam grup Open- AuditT LDAP yang diperlukan.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Pengguna dalam grup LDAP yang cocok dengan Org ini.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Pengguna dalam grup LDAP yang cocok dengan Peran ini.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Pengguna tidak dalam grup LDAP yang cocok dengan Org ini.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Pengguna tidak dalam grup LDAP yang cocok dengan Peran ini.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Pengguna yang dinyatakan ada di LDAP, tapi Open-Auditt tidak dikonfigurasikan untuk mengkonsumsi kelompok LDAP untuk peran dan pengguna itu tidak ada dalam Open- Auditt. Pilih salah satu <i>Gunakan LDAP untuk Roles</i> di Open- Auditt LDAP Layar server atau membuat pengguna ini dalam Open-Audite dan menetapkan peran dan organ.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Nama pengguna (jika tidak memakai pengguna yang menjalankan skrip).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Nama pengguna yang dipakai untuk mengakses sistem eksternal.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Rincian pengguna tidak diambil dari LDAP. Periksa log server LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Rincian pengguna diambil dari LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Alamat surel pengguna.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Jam biasa operasi di situs ini.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Nilai yang diberikan ke item.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Nilai yang disimpan untuk item ini.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Nama penjual sebagai entri per CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Penjual yang diambil dari CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Direktori web pada host yang dipasang Open-Auditt (memerlukan garis miring).';

$GLOBALS["lang"]['The widget at position '] = 'Widget pada posisi ';

$GLOBALS["lang"]['The width of this device.'] = 'Lebar perangkat ini.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'OrganID mereka dan keturunan mereka';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Hanya OrganID mereka';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Organ mereka, Ascendancucu';

$GLOBALS["lang"]['Then'] = 'Lalu';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Kemudian membuat sebuah metode Auth baru dalam Open-Auditt dengan pergi ke menu - > admin - > Metode Auth - > Buat Auth. Menyediakan nama dan set <i>jenis</i> untuk Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Kemudian Anda dapat menggunakan Open-Auditt (tidak didukung) untuk menerima data audit langsung dari klien. Discovery <strong>akan gagal</strong>, tetapi jika Anda tidak menggunakan Discovery (fitur utama Open-Auditt dirancang sekitar), Anda masih dapat mendapatkan data perangkat. Anda harus menjalankan skrip audit secara langsung pada klien menggunakan cron, atau menggunakan fitur Windows Agent (hanya untuk Enterprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Ada tombol untuk mengekspor ke JSON. Ini hanya akan menampilkan tabel perangkat dari atribut. Untuk mengekspor perangkat dengan semua tabel komponen yang terkait, lihat rincian perangkat, lalu tambahkan';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Sama sekali tidak perlu untuk mengubah secara manual setiap perangkat individu.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Tidak perlu melakukan apa-apa jika Anda menjalankan Open- Auditt pada server Linux.<br/><br/>Klien Windows baik-baik saja dan tidak memerlukan tindakan khusus, bagaimanapun.... untuk mengaktifkan fitur ini naskah audit harus dijalankan secara lokal pada sistem target Windows. Tidak dapat dijalankan dari jarak jauh seperti yang kita lakukan dengan panggilan WMI ketika menjalankan naskah audit pada satu mesin Windows, sementara menargetkan mesin Windows kedua. Untuk melakukan ini kita perlu menyalin naskah audit ke mesin target Windows dan kemudian menjalankannya. Sayangnya rekening layanan yang dijalankan Apache adalah akun sistem lokal. Akun ini tidak memiliki akses ke sumber daya remote (jaringan berbasis). Untuk bekerja di sekitar masalah ini layanan harus dijalankan di bawah account lain. Hal ini paling mudah untuk hanya menggunakan akun Administrator lokal, tetapi Anda dapat mencoba akun apapun yang Anda suka selama memiliki hak khusus yang diperlukan. Akun Sistem Lokal memiliki akses lokal sebanyak akun Administrator lokal.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Ini hanya contoh. Anda mungkin perlu menyesuaikan atribut ini sesuai dengan LDAP tertentu Anda.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Parameter ini memungkinkan Anda untuk mengaudit hanya apa yang berguna dan relevan bagi Anda, menghemat waktu pemrosesan dan memungkinkan Anda untuk menemukan jaringan Anda secara teratur.';

$GLOBALS["lang"]['Thing'] = 'Hal';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pikirkan mail.domain1.com dan mail.domain2.com - nama host yang sama.';

$GLOBALS["lang"]['Third'] = 'Ketiga';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'CVE ini akan diambil dan menimpa CVE yang ada jika ada.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Org ini tidak memiliki grup AD yang dispesifikasikan. Periksa rincian peran dalam Open-Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Org ini tidak memiliki grup AD yang dispesifikasikan. Periksa rincian peran dalam Open-Audit. <span class=\'\"confluence-link\"\'>Apakah Anda menciptakan kelompok ini (untuk orgs) pada server LDAP dan ditugaskan pengguna LDAP kepada mereka?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Peran ini tidak memiliki grup AD yang dispesifikasikan. Periksa rincian peran dalam Open-Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Atribut ini disimpan sebagai objek JSON. Ini adalah daftar dari semua koleksi dan berisi nama koleksi bersama dengan <code>c</code>, <code>r</code>, <code>u</code> dan, atau <code>d</code> yang mewakili pembuatan, baca, perbarui dan hapus. Ini adalah tindakan yang dapat dilakukan pengguna pada item dari koleksi tertentu.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Ini dapat berupa varchar (kolom teks), daftar (daftar nilai yang dapat dipilih) atau tanggal.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Kode ini relys pada pekerjaan besar yang dilakukan oleh';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Kolektor ini identifikasi unik universal.';

$GLOBALS["lang"]['This column is required by'] = 'Kolom ini diperlukan oleh';

$GLOBALS["lang"]['This column is required by '] = 'Kolom ini diperlukan oleh ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Deskripsi ini adalah auto- penduduk dan harus idealnya ditinggalkan as-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Titik akhir ini memungkinkan Anda untuk menambahkan koneksi yang merupakan bagian dari infrastruktur jaringan Anda, itu memungkinkan Anda untuk menyesuaikan berbagai atribut, menentukan di mana koneksi ini berada dan organisasi yang seharusnya berada.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Galat ini menunjukkan bahwa SMB1 telah dinonaktifkan atau dihapus dari mesin sasaran. Ini normal untuk versi modern Windows dan Anda hanya akan melihat pesan ini ketika upaya koneksi SMB2 telah gagal. Jika koneksi SMB2 gagal, kami mencoba SMB1 untuk mengaktifkan penemuan pada versi lama Windows. Jika target mesin Windows <i>adalah</i> menjalankan versi lama Windows, kemungkinan kredensial Anda telah gagal. Dalam hal ini, lihat';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Galat ini mengindikasikan bahwa tak cukup memori virtual atau tanda kutip berkas kuota tersedia untuk menyelesaikan operasi yang dinyatakan. Anda harus mencoba lagi nanti.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Galat ini mengindikasikan kredensial yang dipakai salah, tak ada atau tak punya hak akses yang cukup untuk log masuk jarak jauh ke target Mesin Windows. Anda harus memverifikasi kredensial dan memeriksa di bawah.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Contoh ini membuat daftar semua Modul ditandai sebagai';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Contoh ini menciptakan daftar perangkat dan Ports terbuka, Protokol, dan Program yang ditemukan oleh pemindaian NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Contoh ini menciptakan daftar perangkat di mana ruas Fungsi atau Deskripsi kosong OR Tanggal Pembelian adalah baku.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Ini query contoh mengambil daftar perangkat LEBIH 3 tahun. Kuiri menggunakan hari ini';

$GLOBALS["lang"]['This example uses'] = 'Contoh ini menggunakan';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Fitur ini memerlukan lisensi Profesional atau Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Fitur ini, karena memiliki kemampuan untuk mempengaruhi perangkat target lebih dari biasanya harus secara manual diaktifkan. Untuk mengaktifkan fitur ini, ubah butir konfigurasi fitur _ executables ke <i>ya</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Berkas ini memberitahu Linux untuk polling aplikasi untuk menentukan apakah ada tugas yang dijadwalkan yang mesti dijalankan.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Bentuk ini menyediakan cara sederhana untuk mulai menemukan perangkat pada jaringan Anda. Untuk pilihan lebih rinci (jauh lebih), Anda dapat membuat individu';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Ini juga cara kerja Paexec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Ini adalah opsi konfigurasi opsional, diaktifkan dengan menyetel penemuan _ use _ org _ id _ match dalam konfigurasi global.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Ini umumnya kolom primer, kecuali jika tidak dikonfigurasi. CATATAN: Ketika tipe = lalu lintas, ini mewakili teks sekunder.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Hal ini mungkin karena waktu MySQL sedang off. MySQL biasanya menggunakan waktu perangkat host. Anda dapat memeriksa ini dengan';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Hal ini dapat diselesaikan oleh pengguna dan meskipun harus unik secara global, tentu saja tidak ada jaminan ini.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Ini adalah direktori di mana kita menyimpan lampiran apapun ke perangkat.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Ini akan digunakan sebagai titik pertama panggilan ketika memecahkan isu Open- Auditt. Anda dapat mengklik tombol Ekspor di kanan atas untuk mengambil ini sebagai berkas JSON (untuk ditambahkan ke tiket dukungan / email.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Masalah ini sedang diselidiki.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Item ini harus cocok dengan nilai atribut yang dipilih atau memuat ID dari query yang akan dipakai.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Item ini harus cocok dengan nilai atribut yang dipilih.';

$GLOBALS["lang"]['This license expires on'] = 'Lisensi ini berakhir pada';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Izin keamanan ini dapat diubah menggunakan alat administratif Layanan Komponen.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Hal ini harus berkomentar setelah discohooting sebagai mode debug akan menghasilkan banyak log di disk tanpa manfaat.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Ini harus unik secara global, tapi saya telah melihat contoh di mana tidak.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ini harus ditetapkan baik 1 atau tinggi rak.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Ini harus menjadi nama field yang memenuhi syarat dalam database. Kolom saat ini dari sistem, ruas dan tabel kredensial didukung. EG: system.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Keadaan ini digunakan ketika Nmap tidak dapat menentukan apakah port ditutup atau disaring. Ini hanya digunakan untuk ID IP idle scan.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ini akan mengpopulasi otomatis.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Ini akan memperlambat pemindaian penemuan.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Ini akan menghapus baris saat ini di';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Ini akan secara permanen DELETE lisensi ini.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Ini akan menunjukkan bentuk Edit Bulk. Atribut apapun yang Anda set pada formulir ini akan diterapkan ke semua perangkat yang dipilih. Anda dapat mengatur multiple atribut sekaligus.';

$GLOBALS["lang"]['Thursday'] = 'Kamis';

$GLOBALS["lang"]['time_caption'] = 'Judul Waktu';

$GLOBALS["lang"]['Time Caption'] = 'Judul Waktu';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Waktu untuk Menjalankan';

$GLOBALS["lang"]['timeout'] = 'Waktu habis';

$GLOBALS["lang"]['Timeout'] = 'Waktu habis';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tenggat Per Target (Detik)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Waktu habis setiap target. Tunggu untuk X detik untuk respon target.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesataamp';

$GLOBALS["lang"]['Timestamp'] = 'Penanda waktu';

$GLOBALS["lang"]['timing'] = 'Waktu';

$GLOBALS["lang"]['Timing'] = 'Waktu';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Judul';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Ke berkas baru bernama .env (dalam direktori yang sama). Sekarang edit berkas baru itu dan jangan berkomentar (hapus #) baris di bawah (baris 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Untuk benar-benar melaksanakan query, menambahkan a / execute, sehingga / open-audit / index.php / query / {$id} / execution.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Untuk audit mesin, Anda harus memiliki kredensial dan tingkat akses administrator.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Untuk mengaudit mesin jauh pada domain Direktori Aktif, pengguna yang diberikan (atau jika tidak disediakan, pengguna yang menjalankan skrip) harus menjadi anggota dari grup administrator target (atau subgrup).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Untuk mengaudit mesin jauh yang tidak dalam domain, Anda harus menggunakan akun Administrator (bukan <i>an</i> admin account, <i>yang</i> Akun administrator) pada target PC. # 1 dan # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Untuk mengaudit localhost, setiap kredensial yang diberikan diabaikan dan koneksi dibuat menggunakan rincian pengguna yang menjalankan skrip.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Untuk membandingkan perangkat lunak kita memeriksa nama dan versi. Karena nomor versi tidak semua standardised dalam format, ketika kita menerima hasil audit kita membuat atribut baru yang disebut software _ padded yang kita simpan dalam database bersama dengan sisa rincian perangkat lunak untuk setiap paket. Untuk alasan ini, baselees menggunakan kebijakan perangkat lunak tidak akan bekerja ketika dijalankan terhadap perangkat yang belum diaudit oleh 1.10 (setidaknya). Kebijakan perangkat lunak dapat menguji terhadap versi yang <i>sama dengan</i>, <i>lebih besar dari</i> atau <i>setara dengan atau lebih besar dari</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Untuk membuat entri baru klik tombol Buat di sudut kanan atas.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Untuk membuat sumber daya, Anda harus POST data yang diperlukan.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Untuk mengaktifkan sebuah mesin jauh (Vista atau di atas) untuk diaudit yang tidak ada di domain, oleh sebuah akun dalam grup Administrator, selain akun Administrator yang sebenarnya melihat bagian bawah UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Untuk mengaktifkan ini, membuat sebuah objek Auth baru dengan pergi ke menu - > admin - > Auth - > Buat Metode Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Untuk menjalankan skrip powershell Windows, buka prompt perintah sebagai Administrator dan gunakan perintah berikut';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Untuk menjalankan skrip audit, buka terminal dan gunakan perintah berikut';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Untuk menyaring dengan nilai properti, gunakan nama properti. Operator yang seharusnya mendahului nilai adalah';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Untuk memasang Nmap di Windows, kunjungi halaman Nmap di';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Untuk membuat perubahan, ikuti saja langkah-langkah di bawah.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Untuk mengambil ID Tenant. Buka klik portal Azure pada Direktori Aktif Azure, Properti dan ID Tenant ditampilkan sebagai ID Direktori Anda - jangan salahkan saya untuk nama tidak cocok, itulah bagaimana Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Untuk mengambil kunci Anda, log in ke AWS Console dan pilih nama pengguna Anda, kemudian My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Untuk mengembalikan item komponen tertentu.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Untuk mengembalikan semua item untuk jenis compenent untuk perangkat tertentu.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Untuk mengembalikan semua butir untuk suatu tipe komponen. Jika Anda ingin semua perangkat lunak yang akan Anda gunakan';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Untuk urutan terbalik, masukkan minus, sehingga';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Untuk menjalankan script tes pada target Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Untuk memilih perangkat untuk diintegrasikan, kami menggunakan nmis _ management = y, tetapi anda mungkin seperti (misalnya) tipe = router. Anda juga dapat menggunakan Grup atau Query jika Anda lebih suka sesuatu yang lebih kompleks.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Untuk mengurutkan menurut kolom basis data, gunakan';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Untuk menggunakan fitur Enterprise ini, Anda pertama kali perlu membuat pengguna Anda dalam Open-Auditt seperti biasa. Memberikan kata sandi tidak perlu. Kau harus menugaskan Roles dan Orgs. Nama pengguna dalam Open-Auditt seharusnya cocok dengan Entra <i>Nama pengguna yang disukai</i> atribut. Tidak perlu untuk Full Name atau Email - ini akan penduduk dari Entra. Jika Anda tidak tahu pengguna Anda <i>Nama pengguna yang disukai</i>, Jangan takut. Anda dapat membuat Metode Auth baru dalam Open- Audite dan Aplikasi Enterprise di Entra dan ketika pengguna mencoba untuk menanda-tangani ke Open-Auditt tanpa pengguna sebelumnya yang ada, periksa log dan Anda akan melihat mereka <i>Nama pengguna yang disukai</i> Login for your convinence.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Untuk menggunakan fitur Enterprise ini, Anda pertama kali perlu membuat pengguna Anda dalam Open-Auditt seperti biasa. Memberikan kata sandi tidak perlu. Kau harus menugaskan Roles dan Orgs. Nama pengguna dalam Open-Audit seharusnya cocok dengan OKTA <i>nama</i> atribut. Tidak perlu untuk Full Name atau Email - ini akan penduduk dari OKTA. Jika Anda tidak tahu pengguna Anda <i>nama<i>, Jangan takut. Anda dapat membuat Auth Menthod baru dalam Open-Auditt dan Aplikasi di OKTA dan ketika pengguna mencoba untuk menanda-tangani ke Open-Auditt tanpa pengguna sebelumnya yang ada, periksa log dan Anda akan melihat mereka <i>nama<i> Login for your convinence.<br/><p>Kemudian membuat sebuah metode Auth baru dalam Open-Auditt dengan pergi ke menu - > admin - > Metode Auth - > Buat Auth. Menyediakan nama dan set <i>jenis</i> untuk Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Untuk menggunakan fitur ini Anda harus mengaktifkan item konfigurasi cocok dengan _ mac (for AWS) dan cocok _ hostname (for Azure). Ini akan dilakukan secara otomatis pertama kalinya penemuan awan dijalankan. Untuk lebih lanjut pada aturan yang cocok Open- Audits lihat DI SINI: Perangkat yang cocok';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Untuk melihat rincian sebuah query, struktur URL standar dari / open-audit / indeks. php / kueries / {$id} harus digunakan.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokepau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Gaya Bilah Alat';

$GLOBALS["lang"]['Toolbar Style'] = 'Gaya Bilah Alat';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Port TCP Nmap Top';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. 10 top, 100, 1000 port untuk memindai sesuai dengan opsi "top port".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Port UDP Nmap Top';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Ports UDP Nmap Top. 10 top, 100, 1000 port untuk memindai sesuai dengan opsi "top port".';

$GLOBALS["lang"]['Traditional Chinese'] = 'Cina tradisional';

$GLOBALS["lang"]['Traffic Light'] = 'Cahaya Lalu Lintas';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad dan Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Penelusuran masalah';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Log Masuk LDAP bermasalah';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Coba Open-Audit Enterprise, pada kami tanpa batas waktu. Semua fitur Enterprise. Terbatas pada 20 perangkat.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Coba semua fitur terbaru dengan FREE 100 lisensi perangkat Open- Audit Enterprise. Silakan baca ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Coba log masuk menggunakan pengguna LDAP. Kami berasumsi ini akan gagal (sebaliknya, mengapa kau masih membaca ini?) Selanjutnya, komentar keluar baris dari file di atas.';

$GLOBALS["lang"]['Tuesday'] = 'Selasa';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turki';

$GLOBALS["lang"]['Turkish'] = 'Turki';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Kepulauan Turki dan Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Laju Bit Tx';

$GLOBALS["lang"]['Tx Bitrate'] = 'Laju Bit Tx';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tingkat Tx';

$GLOBALS["lang"]['Tx Level'] = 'Tingkat Tx';

$GLOBALS["lang"]['tx_power'] = 'Daya Tx';

$GLOBALS["lang"]['Tx Power'] = 'Daya Tx';

$GLOBALS["lang"]['tx_profile'] = 'Profil Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Profil Tx';

$GLOBALS["lang"]['type'] = 'Tipe';

$GLOBALS["lang"]['Type'] = 'Tipe';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipe: Ini dapat berupa varchar (kolom teks) atau Daftar (daftar nilai yang dapat dipilih).';

$GLOBALS["lang"]['Types of Networks'] = 'Jenis Networks';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Port Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Port Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraina';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Audit Tahap 1 Undergo (review dokumentasi)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Audit Tahap 2 Undergo (ulasan implementasi)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Analisis Pengamatan';

$GLOBALS["lang"]['Unfiltered'] = 'Tanpa filter';

$GLOBALS["lang"]['uninstall'] = 'Batalkan';

$GLOBALS["lang"]['Uninstall'] = 'Batalkan';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Lepaskan Agen';

$GLOBALS["lang"]['United Arab Emirates'] = 'Uni Emirat Arab';

$GLOBALS["lang"]['United Kingdom'] = 'Inggris';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Kepulauan Terluar Minor Amerika Serikat';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Kepulauan Virgin Amerika Serikat';

$GLOBALS["lang"]['United States of America'] = 'Amerika Serikat';

$GLOBALS["lang"]['Unknown'] = 'Tak dikenal';

$GLOBALS["lang"]['unlock_pin'] = 'Buka Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Buka Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Tak terjadwal';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Tidak digunakan seperti pada 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Tak terpakai.';

$GLOBALS["lang"]['Update'] = 'Perbarui';

$GLOBALS["lang"]['update_external_count'] = 'Mutakhirkan Cacah Eksternal';

$GLOBALS["lang"]['Update External Count'] = 'Mutakhirkan Cacah Eksternal';

$GLOBALS["lang"]['update_external_from_internal'] = 'Mutakhirkan Eksternal Dari Internal';

$GLOBALS["lang"]['Update External From Internal'] = 'Mutakhirkan Eksternal Dari Internal';

$GLOBALS["lang"]['update_internal_count'] = 'Mutakhirkan Cacah Internal';

$GLOBALS["lang"]['Update Internal Count'] = 'Mutakhirkan Cacah Internal';

$GLOBALS["lang"]['update_internal_from_external'] = 'Mutakhirkan Internal From External';

$GLOBALS["lang"]['Update Internal From External'] = 'Mutakhirkan Internal From External';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Mutakhirkan Perangkat NMIS dari Open- Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Mutakhirkan Open-Audit Perangkat dari ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Mutakhirkan Open-Audit Perangkat dari NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Perbarui Vulnerbility';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Mutakhirkan atribut entri {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Mutakhirkan atribut';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Diperbarui setiap kali penemuan telah dieksekusi dengan IP terdeteksi untuk menanggapi.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Diperbarui setiap kali penemuan telah dieksekusi dengan IP yang telah dipindai oleh Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Diperbarui setiap kali penemuan telah dieksekusi dengan perangkat kami mampu audit.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Diperbarui setiap kali penemuan telah dieksekusi dengan perangkat kami mampu query.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Diperbarui setiap kali penemuan telah dieksekusi.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Diperbarui setiap kali penemuan telah dieksekusi.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Diperbarui setiap kali penemuan telah menyelesaikan eksekusi.';

$GLOBALS["lang"]['Updating'] = 'Memperbarui';

$GLOBALS["lang"]['Upgrade'] = 'Tingkatkan';

$GLOBALS["lang"]['Upload an audit result file'] = 'Unggah berkas hasil audit';

$GLOBALS["lang"]['Upper Case'] = 'Huruf Besar';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Republik Timur';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Gunakan';

$GLOBALS["lang"]['Use'] = 'Gunakan';

$GLOBALS["lang"]['use_authentication'] = 'Gunakan Otentikasi';

$GLOBALS["lang"]['Use Authentication'] = 'Gunakan Otentikasi';

$GLOBALS["lang"]['use_authorisation'] = 'Gunakan Otorisasi';

$GLOBALS["lang"]['Use Authorisation'] = 'Gunakan Otorisasi';

$GLOBALS["lang"]['Use Proxy'] = 'Gunakan Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Gunakan SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Gunakan SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Gunakan Aman (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Gunakan Deteksi Versi Layanan';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Gunakan Deteksi Versi Layanan. Ketika port terdeteksi terdeteksi terdeteksi sebagai terbuka, jika diset ke <i>y</i>, Nmap akan query perangkat target dalam upaya untuk menentukan versi layanan berjalan di port ini.<br/>Ini dapat berguna ketika mengidentifikasi perangkat yang tidak diklasifikasikan. Ini sebelumnya tidak digunakan.';

$GLOBALS["lang"]['Use WMI'] = 'Gunakan WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Gunakan <i>Sinyal-dalam metoda</i> OpenID Connect dan <i>Tipe Aplikasi</i> Aplikasi Web. Klik <i>Berikutnya</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Gunakan untuk Otentikasi';

$GLOBALS["lang"]['Use for Roles'] = 'Gunakan untuk Peran';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Gunakan opsi standar instalasi ketika ditampilkan dan klik <i>Aku setuju</i>, <i>Berikutnya</i> dan <i>Pasang</i> tombol untuk memasang Nmap.';

$GLOBALS["lang"]['used'] = 'Digunakan';

$GLOBALS["lang"]['Used'] = 'Digunakan';

$GLOBALS["lang"]['used_count'] = 'Cacah Digunakan';

$GLOBALS["lang"]['Used Count'] = 'Cacah Digunakan';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Digunakan oleh OpenLDAP saja.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Digunakan secara internal ketika menemukan satu perangkat.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Digunakan secara internal ketika menemukan satu perangkat. Taut ke <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Digunakan ketika server LDAP telah dikonfigurasi untuk mengpopulasi suatu rincian pengguna - ini termasuk Orgs yang mereka memiliki akses. Jika pengguna berada dalam grup LDAP ini, mereka ditugaskan org ini.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Digunakan ketika server LDAP telah dikonfigurasi untuk mengpopulasi suatu rincian pengguna - ini termasuk Roles yang mereka ditugaskan. Jika pengguna berada dalam grup LDAP ini, mereka ditugaskan peran ini.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Digunakan ketika mencari OpenLDAP untuk mencocokkan uid pengguna ke anggota grup. Baku <code>memberUid</code>. Digunakan oleh OpenLDAP saja.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Digunakan dengan aplikasi pemantauan Integrations dan FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Digunakan dengan aplikasi pemantauan Integrations dan FirstWave. Atur ke y jika bekerja SNMP terdeteksi oleh penemuan.';

$GLOBALS["lang"]['user'] = 'Pengguna';

$GLOBALS["lang"]['User'] = 'Pengguna';

$GLOBALS["lang"]['User DN'] = 'DN Pengguna';

$GLOBALS["lang"]['user_group'] = 'Grup Pengguna';

$GLOBALS["lang"]['User Group'] = 'Grup Pengguna';

$GLOBALS["lang"]['user_id'] = 'ID Pengguna';

$GLOBALS["lang"]['User ID'] = 'ID Pengguna';

$GLOBALS["lang"]['user_interaction'] = 'Interaksi Pengguna';

$GLOBALS["lang"]['User Interaction'] = 'Interaksi Pengguna';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atribut Keanggotaan Pengguna';

$GLOBALS["lang"]['user_name'] = 'Nama Pengguna';

$GLOBALS["lang"]['User Name'] = 'Nama Pengguna';

$GLOBALS["lang"]['User Policies'] = 'Kebijakan Pengguna';

$GLOBALS["lang"]['Username'] = 'Nama pengguna';

$GLOBALS["lang"]['username'] = 'Nama pengguna';

$GLOBALS["lang"]['users'] = 'Pengguna';

$GLOBALS["lang"]['Users'] = 'Pengguna';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Pengguna bekerja serupa dengan Netstat Ports. Jika pengguna ada dengan nama, status, dan rincian sandi yang cocok (dapat diubah, kadaluarsa, diperlukan) maka kebijakan akan lewat.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Pengguna, Roles dan Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Menggunakan Framework PHP CodeIgniter.';

$GLOBALS["lang"]['Using'] = 'Menggunakan';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Menggunakan Entra untuk Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Menggunakan LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Menggunakan OKTA untuk Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Menggunakan opsi format berguna ketika memakai peramban web tapi Anda ingin melihat hasil dalam format JSON. Format tambah = json mencapai ini. Biasanya peramban web akan mengatur header penerimaan ke HTML, jadi dalam hal ini, kita kembalikan halaman yang dirender. Menggunakan API untuk mengambil JSON Anda harus mengatur header terima ke';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Biasanya Mbs, dari Lokasi A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Biasanya Mbs, dari Lokasi B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Biasanya Mbs, ke Lokasi A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Biasanya Mbs, ke Lokasi B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Biasanya harus diatur ke 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'ID VLAN';

$GLOBALS["lang"]['valid_from'] = 'Berlaku Dari';

$GLOBALS["lang"]['Valid From'] = 'Berlaku Dari';

$GLOBALS["lang"]['valid_from_raw'] = 'Berlaku Dari Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Berlaku Dari Raw';

$GLOBALS["lang"]['valid_to'] = 'Berlaku Ke';

$GLOBALS["lang"]['Valid To'] = 'Berlaku Ke';

$GLOBALS["lang"]['valid_to_raw'] = 'Valid Untuk Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valid Untuk Raw';

$GLOBALS["lang"]['Valid Values'] = 'Nilai Yang Berlaku';

$GLOBALS["lang"]['value'] = 'Nilai';

$GLOBALS["lang"]['Value'] = 'Nilai';

$GLOBALS["lang"]['Value Types'] = 'Tipe Nilai';

$GLOBALS["lang"]['values'] = 'Nilai';

$GLOBALS["lang"]['Values'] = 'Nilai';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Nilai: Dalam kasus <i>daftar</i> field, ini harus menjadi daftar koma dipisahkan dari nilai yang valid.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['Various'] = 'Berbagai';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor Report'] = 'Laporan Vendor';

$GLOBALS["lang"]['vendors'] = 'Vendor';

$GLOBALS["lang"]['Vendors'] = 'Vendor';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Versi';

$GLOBALS["lang"]['version_padded'] = 'Padded Versi';

$GLOBALS["lang"]['Version Padded'] = 'Padded Versi';

$GLOBALS["lang"]['version_raw'] = 'Raw Versi';

$GLOBALS["lang"]['Version Raw'] = 'Raw Versi';

$GLOBALS["lang"]['version_string'] = 'String Versi';

$GLOBALS["lang"]['Version String'] = 'String Versi';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Tilik';

$GLOBALS["lang"]['View All'] = 'Tilik Semua';

$GLOBALS["lang"]['View Details'] = 'Tilik Rincian';

$GLOBALS["lang"]['View Device'] = 'Tilik Perangkat';

$GLOBALS["lang"]['View Discovery'] = 'Tilik Discovery';

$GLOBALS["lang"]['View Policy'] = 'Lihat Kebijakan';

$GLOBALS["lang"]['View Racks'] = 'Lihat Rack';

$GLOBALS["lang"]['View the'] = 'Lihat';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Melihat penemuan dalam pertanyaan, kemudian klik tombol Dukungan di toolbar kanan atas. Ini akan menyediakan pengaturan penemuan, item konfigurasi, daftar perangkat penemuan serta log untuk penemuan tertentu.';

$GLOBALS["lang"]['View the release notes on the'] = 'Lihat catatan rilis pada';

$GLOBALS["lang"]['Virtual Private Network'] = 'Jaringan Pribadi Virtual';

$GLOBALS["lang"]['Virtual private network'] = 'Jaringan privat virtual';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisasi';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Kunjungi kanal YouTube kami untuk video instruksi.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'ID Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'ID Vlan';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID Perangkat Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID Perangkat Vm';

$GLOBALS["lang"]['vm_group'] = 'Grup Vm';

$GLOBALS["lang"]['Vm Group'] = 'Grup Vm';

$GLOBALS["lang"]['vm_ident'] = 'Identasi Vm';

$GLOBALS["lang"]['Vm Ident'] = 'Identasi Vm';

$GLOBALS["lang"]['vm_server_name'] = 'Nama Server Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nama Server Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Status Vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Status Vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerbility';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerbility';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Cache Vulnerbility';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Cache Vulnerbility';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnerbilities dan Hasil';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerbilities diterbitkan sebelum 1 Januari 2025 (secara baku). Kita tidak melihat rasa dalam mengembalikan kerentanan dari tahun sebelumnya. Hal ini dapat diubah dalam konfigurasi.';

$GLOBALS["lang"]['vulnerability_id'] = 'ID kerapuhan';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID kerapuhan';

$GLOBALS["lang"]['Vulnerability Status'] = 'Status rentan';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'PERINGATAN - Ketika membuat sebuah baseline menggunakan kebijakan perangkat lunak, saat ini Centos dan RedHat paket kernel menggunakan nama <i>kernel</i> dan <i>Kernel- devel</i>. Ada beberapa paket dengan nama ini dan versi berbeda yang terpasang. Debian berbasis distribusi menggunakan nama seperti <i>linux-image- 3.13.0 -24- umum</i>, catatan nomor versi disertakan dalam nama paket. Karena sistem operasi berbasis RedHat menggunakan format ini dan kemudian memiliki beberapa nama paket identik dengan versi yang berbeda kami saat ini mengecualikan <i>kernel</i> dan <i>Kernel- devel</i> dari kebijakan perangkat lunak. Hal ini mungkin ditangani dalam pemutakhiran masa depan.';

$GLOBALS["lang"]['WHERE'] = 'MANA';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Requients';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Tunggu untuk menyelesaikan, kemudian pasta dalam baris berikutnya untuk menginstal Agen.';

$GLOBALS["lang"]['wall_port'] = 'Port Dinding';

$GLOBALS["lang"]['Wall Port'] = 'Port Dinding';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis dan Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Ingin tahu lebih banyak?';

$GLOBALS["lang"]['Warning'] = 'Peringatan';

$GLOBALS["lang"]['warranty'] = 'Warranty';

$GLOBALS["lang"]['Warranty'] = 'Warranty';

$GLOBALS["lang"]['warranty_duration'] = 'Durasi Warranty';

$GLOBALS["lang"]['Warranty Duration'] = 'Durasi Warranty';

$GLOBALS["lang"]['warranty_expires'] = 'Kadaluwarsa Warranty';

$GLOBALS["lang"]['Warranty Expires'] = 'Kadaluwarsa Warranty';

$GLOBALS["lang"]['warranty_status'] = 'Status Warranty';

$GLOBALS["lang"]['Warranty Status'] = 'Status Warranty';

$GLOBALS["lang"]['warranty_type'] = 'Tipe Warranty';

$GLOBALS["lang"]['Warranty Type'] = 'Tipe Warranty';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Kami juga memiliki pilihan untuk Ping Sebelum Pindai (penting untuk router dengan cache ARP hidup lama). Ini biasanya ide bagus.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Kami juga memiliki item aksi kami (yang dijalankan dalam urutan bawah):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Kami sering ditanya pertanyaan ini dan jawaban yang paling pasti adalah <i>tergantung</i>. Ini tergantung pada jumlah IP yang akan dipindai, kecepatan koneksi jaringan, kecepatan perangkat yang dipindai, jenis perangkat yang akan dipindai, jumlah kredensial yang berbeda sedang diuji dan kecepatan server Open- Auditt. Kami tidak memiliki kalkulator yang akan memungkinkan kita untuk memasukkan variabel-variabel dan kembali nilai. Ini terlalu rumit. Umumnya saya membatasi penemuan saya untuk 256 alamat IP - ie, a / 24 subnet. Kami telah memiliki pelanggan scan / 16 subnets (65k alamat) dan itu tidak bekerja - tetapi dapat mengambil waktu yang lama. Kau jauh lebih baik dari pemindaian di / 24 blok. Jika Anda tidak tahu apa asal alamat Anda, maka kasus ini bagus untuk penemuan Benih.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Kami memiliki instruksi lebih rinci pada';

$GLOBALS["lang"]['We have tests for:'] = 'Kami memiliki tes untuk:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Kami harap Anda menemukan Open-Auditt sebagai berguna seperti yang kita lakukan.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Kami awalnya menyusun daftar baku skrip dengan opsi baku. Daftar skrip dapat dilihat di / skrip. Skrip baku ini tidak dapat dihapus. Anda dapat membuat skrip tambahan untuk digunakan oleh anda seperti yang diperlukan. Skrip Anda akan didasarkan pada salah satu skrip yang ada dan memiliki opsi gubahan yang diterapkan. Skrip kemudian dapat diunduh dari halaman daftar pada menu: Temukan - > Skrip Audit - > Daftar Skrip Audit.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Kita perlu beberapa kredensial untuk dapat berbicara secara efektif dengan perangkat pada jaringan Anda.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Kami hanya mengirim jumlah data minimum dan tidak ada yang sensitif alam. Kami mengirim data lisensi kami (nama, tipe, dsb), data aplikasi kami (nama, versi, platform, zona waktu, dll), kesalahan log, jumlah jenis perangkat dan jumlah fitur yang dipakai. <i>Apapun</i> lingkungan memiliki perangkat dan itu adalah satu-satunya bagian dari data Anda kita kirim. Dan hanya jenis perangkat dan menghitung. Bukan produsen, bukan model. Kami tidak mengirim sesuatu yang istimewa. Tidak ada jaringan. Tidak ada alamat IP. Tidak ada versi OS. Tidak ada nama perangkat lunak. RuUID dan Server dikodekan dengan sha256 (jadi kita tidak tahu nilainya). Kami hanya mengirim data yang diperlukan untuk meningkatkan produk. Kami harap Anda melihat keuntungan bagi kita semua dengan informasi ini. Ini akan memberikan kita arah panduan tentang di mana untuk fokus perbaikan dan fitur baru dalam produk.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Kami cenderung menggunakan ekstensi Google Chrome yang disebut Postman untuk menguji query istirahat yang sebenarnya. Anda mungkin ingin menginstal dan menguji dengan itu.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Route Aplikasi Web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Discovery Server Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Situs web';

$GLOBALS["lang"]['Wednesday'] = 'Rabu';

$GLOBALS["lang"]['weight'] = 'Berat';

$GLOBALS["lang"]['Weight'] = 'Berat';

$GLOBALS["lang"]['weight_current'] = 'Berat Saat Ini';

$GLOBALS["lang"]['Weight Current'] = 'Berat Saat Ini';

$GLOBALS["lang"]['weight_empty'] = 'Berat Kosong';

$GLOBALS["lang"]['Weight Empty'] = 'Berat Kosong';

$GLOBALS["lang"]['weight_max'] = 'Berat Max';

$GLOBALS["lang"]['Weight Max'] = 'Berat Max';

$GLOBALS["lang"]['Welcome'] = 'Selamat Datang';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Selamat Datang Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Selamat Datang';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara Barat';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'What Can I Expect if I Have no Credentials';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Bagaimana dengan bidang yang saya inginkan dari NMIS yang tidak dalam Open- Auditt? Kami sudah melindungimu. Setiap bidang di sistem eksternal (NMIS) yang tidak ada dalam Open- Auditt akan secara otomatis dibuat sebagai ruas Gubahan Open- Audit.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Bagaimana dengan perangkat jaringan lain? Pikirkan switch, router, printer, dll. Jelas, adalah yang terbaik jika Anda dapat memberikan beberapa SNMP kredensial untuk perangkat ini. Mereka hanya perlu <i>baca-saja</i> Akses. Tetapi jika Anda tidak ingin melakukan hal itu, tidak ada yang menghentikan Anda dari pencarian, menemukan perangkat, dan membuat satu atau dua aturan untuk mengidentifikasi mereka (mungkin menggunakan awalan Alamat MAC dalam kombinasi dengan port terbuka, misalnya). Anda wont memiliki banyak informasi, tetapi Anda akan tahu mereka berada di jaringan, apa yang mereka, dan ketika terakhir kali mereka terlihat. Anda juga akan melihat apakah ada sesuatu yang baru muncul di jaringan.';

$GLOBALS["lang"]['What do we send?'] = 'Apa yang kita kirim?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Apa artinya ini bagimu?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Apa tujuan rak ini.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Apa jenis lokasi ini. Tipe yang dapat dialokasikan <code>attributes</code> meja.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Ketika Open-Auditt pada Linux menemukan sebuah mesin Windows, untuk menjalankan perintah remote yang kita gunakan';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Ketika Open-Auditt di Windows menemukan mesin Windows, untuk menjalankan perintah remote yang kita gunakan';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Ketika Open-Aud IT menerima data tentang perangkat, baik dengan menemukan perangkat selama jalankan audit atau oleh pengguna mengimpor perangkat, itu harus menentukan apakah perangkat ini ditemukan cocok dengan perangkat yang sudah ada dalam database, atau jika itu adalah perangkat baru yang harus ditambahkan. Buka - Auditt menggunakan serangkaian dua belas properti cocok untuk menentukan hal ini. Aturan Match bekerja sebagai perbandingan OR, bukan DAN. Ini berarti aturan pertama yang cocok dengan bidang dalam perangkat yang ditemukan ke satu di dB menyelesaikan sebagai perangkat yang ada. Semua Aturan Cocok harus gagal agar perangkat menjadi baru dan menghasilkan rekor baru yang dibuat.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Ketika mengambil data, Anda harus memasukkan sebuah token akses. Sebuah token akses dibuat dengan setiap tipe permintaan, jadi buat GET (sebagai contoh) dan Terima: aplikasi / json, parse respon untuk meta meragukan access _ token, dan sertakan dengan permintaan anda. Ini harus ditempatkan dalam data lapangan [access _ token], IE, tingkat atas.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Ketika suatu perangkat DiTemukan skrip audit akan disuntikkan dengan rincian berkas (atau direktori). Baik audit _ linux.sh dan audit _ windows.vbs akan dihuni, terlepas dari jalur berkas. Jika Anda berpikir <i>tapi menempatkan jalur Linux ke dalam mesin Windows akan memecahkan sesuatu!</i>, itu tidak akan pecah, Anda hanya tidak akan menerima data apapun dari file atau masukan direktori.<br/>Mengambil rincian akan disimpan dalam <i>berkas</i> tabel basis data dan disimpan seperti atribut lain. Rincian berkas akan disimpan sebagai atribut lain dan hasilkan peringatan jika ada atribut berikut berubah - <i>_ Nama lengkap</i>, <i>hash</i>, <i>inode</i>, <i>last _ changed</i>. Tabel berisi sebuah sistem _ id, first _ seen, last _ seen dan kolom sekarang serta rincian berkas.<br/>Atribut yang direkam adalah:<br/><ul><li>Windows - nama, ukuran, direktori, hash SHA1 (dari isi berkas), terakhir berubah, izin, pemilik, versi (file masuk).</li><br/><li>Linux - nama, ukuran, direktori, hash SHA1 (dari isi berkas), terakhir berubah, meta data terakhir berubah, perizinan, pemilik, grup, inode.</li></ul>Anda akan melihat sebuah bagian dalam skrip audit Windows dan Linux sebagai dibawah';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Ketika sebuah penemuan dijalankan, opsi pemindaian yang relevan dipilih dan pengaturan tersebut digunakan oleh Nmap untuk memindai perangkat target. Opsi pemindaian menentukan port nmap scan, seberapa cepat mereka memindai dan apakah ping nmap pertama kali digunakan untuk menentukan apakah IP hidup atau tidak.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Ketika sebuah penemuan dijalankan, opsi pemindaian penemuan yang relevan dipilih dan pengaturan yang digunakan oleh Nmap untuk memindai perangkat target. Bila tak ada opsi yang dipilih, butir konfigurasi baku (convention _ default _ scan _ option) dipilih dan digunakan. Open- Auditt Community akan menggunakan opsi baku sesuai dengan konfigurasi untuk semua penemuan.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Ketika sebuah penemuan subnet dijalankan maka jalankan pertama, jika dipilih, sebuah pemindaian ping Nmap pada jangkauan atau alamat IP. Setiap perangkat menanggapi akan port dipindai. Jika pemindaian ping Nmap tidak diminta, setiap IP dipindai secara individual. Pelabuhan yang mana? Yang ditentukan oleh';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Ketika mengaudit perangkat Linux via SSH, beberapa distribusi Linux tidak mengijinkan perintah sudo untuk dilewatkan tanpa TTY (yang kita lakukan). Untuk benar-benar mengaudit salah satu distribusi linux ini adalah yang terbaik untuk memasok kredensial root user. Jika tidak ada akar yang diberikan dan sudo tanpa TTY tidak mungkin, naskah audit akan dijalankan tetapi tidak akan berisi jumlah data seperti yang akan dinyatakan. Audit berikutnya menggunakan root (atau dijalankan secara lokal menggunakan sudo) akan memberikan rincian ekstra tentang sistem dan menghasilkan beberapa <i>perubahan</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Ketika menggabungkan perangkat, sistem yang merupakan sumber otoriter untuk informasi.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Ketika selesai, menutup jendela perintah dan Anda selesai!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Ketika membuat widget, bila Anda memilih <i>Tingkat lanjut</i> tombol Anda akan memiliki kemampuan untuk meng-upload Anda sendiri kustom SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Ketika mengintegrasikan perangkat dari sistem eksternal, jika perangkat tidak ada dalam OpenAuditt-Haruskah kita membuatnya?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Ketika mengintegrasikan perangkat dari sistem eksternal, jika perangkat telah diperbarui dalam sistem eksternal harus kita perbarui dalam Open-Auditt?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Ketika menyelidiki Discovery, dukungan akan meminta Discovery Logs Exported. Untuk mengambil ini, pergi ke menu - > Temukan - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Ketika mencocokkan perangkat berbasis Linux, kami lebih suka menggunakan id Dbus yang dikonkatenasi dengan nama host. Kita juga dapat menggunakan pilihan lain sesuai dengan tabel di bawah, tetapi kita dapat mengambil Dbus ID tanpa root. Untuk mengambil UUID (dari motherboard), kita perlu menjalankan dmidecode, yang memang membutuhkan akar. Sayangnya, ketika Anda mengkloning seorang tamu ESXi, ID Dbus tidak mendapatkan diciptakan kembali - maka kami konkatenting ini dengan nama host. Ada artikel yang bagus yang terkait di sini. <i>mengapa</i> ID hardware.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Ketika meminta JSON, secara default tidak ada batas yang ditetapkan. Ketika meminta tampilan layar, batas diatur ke 1000 secara baku. Hal ini dapat diubah dalam konfigurasi. Lihat <i>halaman _ ukuran</i> butir';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Ketika mengambil perangkat eksternal, harus kita jalankan penemuan di atasnya?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Ketika menjalankan Open-Auditt di Windows akun layanan Apache mesti demikian <i>regular</i> pengguna (atau Administrator). Ini karena <i>Sistem Lokal</i> akun biasanya digunakan untuk menjalankan Apache tidak memiliki akses ke setiap sumber daya jaringan. IE - Kita tidak dapat menggunakan Apache ketika berjalan sebagai akun sistem lokal untuk menyalin naskah audit ke Windows PC.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Ketika opsi konfigurasi diatur, kami mengambil ini ke dalam akun untuk perangkat untuk subset tertentu cocok aturan di mana item konfigurasi telah diaktifkan. Aturan ini adalah:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Ketika aturan dijalankan dalam penemuan, aturan yang cocok apapun akan muncul dalam catatan penemuan. Lihat di bawah ini sebagai contoh.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Ketika ini benchmark dijadwalkan akan dieksekusi. Berasal dari yang terkait <code>tasks.type</code> dan <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Ketika log ini dibuat.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Ketika butir antrian ini mulai memproses.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Ketika memakai Open- Auditt Profesional atau Enterprise, widget tersedia dan dapat disesuaikan untuk ditampilkan di Dashboard.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Ketika kita mengubah perangkat yang dipilih secara internal ke sebuah objek untuk sistem eksternal, apa yang harus berupa data eksternal. EG: integer, string, dsb.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Ketika kita menjalankan baseline ini, haruskah kita memeriksa item pada perangkat yang tidak dalam kebijakan untuk baseline ini.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Ketika kita menerima port terbuka, kita harus mencoba untuk menguji untuk versi layanan saat ini berjalan di atasnya? Ini membantu dalam mengkonfirmasi layanan berlari aktual.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Ketika Anda menggunakan Awan untuk menemukan instansi Amazon AWS Anda, Anda akan memerlukan dua item kredensial - kunci dan kunci rahasia. Kunci Anda harus sudah diketahui oleh Anda dan kunci rahasia Anda juga. Dari catatan adalah bahwa Anda tidak dapat mengambil kunci rahasia Anda menggunakan Console AWS yang disediakan oleh Amazon. Jika kau salah menaruhnya, kau harus membuat yang baru.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Ketika Anda menggunakan Awan untuk menemukan contoh Microsoft Azure Anda, Anda akan memerlukan empat item kredensial - id berlangganan, id penyewa, id klien dan rahasia klien.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Ketika Anda membuat sebuah penemuan Anda memiliki opsi untuk perangkat _ assigned _ to _ org. Ini berarti bahwa setiap perangkat yang ditemukan untuk penemuan ini akan ditugaskan (memiliki <code>devices.org_id</code> diatur ke) Organisasi yang Anda pilih.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Ketika Anda membuat penemuan baru jika Anda mengklik tombol Advanced, Anda memiliki lebih banyak pilihan untuk berubah, salah satunya adalah jenis penemuan. Jenis selalu menjadi Subnet (meliputi jangkauan di atas, subnet, opsi IP) dan Direktori Aktif. Seperti pada v4.1, Open- Audit memiliki penemuan baru yang disebut Benih.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Ketika Anda mengaktifkan Query yang akan dijalankan pada jadwal, permintaan akan dikirimkan ke alamat yang Anda pilih. Anda harus telah menyiapkan email via menu - > admin - > Enterprise - > Konfigurasi Surel. Kami juga memiliki <i>uji email<i> tombol di halaman itu. Masukan rincian Anda, menyimpannya dan kemudian mengujinya. Anda harus memiliki kotak modal yang memberitahu Anda apakah itu berhasil atau tidak dan jelas email tes harus tiba jika itu berhasil. Setelah Anda memiliki email dikonfigurasi, permintaan yang dijadwalkan Anda dapat dikonfigurasi.<br/><br/>Menyediakan nama, deskripsi opsional, pilih <i>Query</i> tipe, pilih query yang diinginkan, sediakan alamat email, pilih format dan atur jadwal.<br/><br/>Menyediakan satu jam saja (tidak ada menit lagi), berikan tugas sebuah nama (ini bukan nama dari kueri yang sebenarnya), pilih hari mana anda ingin query run, pilih query yang anda ingin jalankan, sediakan alamat email dan pilih format query dan anda selesai.<br/>Kueri akan dikirim dengan tubuh surel dari query (dalam format html) dan query yang dicantolkan dalam format yang diminta.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Ketika Anda memasukkan teks ke salah satu judul kolom, Anda dapat hanya menggunakan kata normal. Misalnya, ketika Anda memasukkan <code>computer</code> ke kotak pencarian di atas <i>Tipe</i> kolom, pencarian akan mengembalikan semua perangkat dengan tipe Komputer. Pada dasarnya, Open- Aud IT meminta data menggunakan URL seperti <code>devices?devices.type=computer</code>. Sekarang ada satu perbedaan yang signifikan ketika menggunakan pencarian tabel data, dibandingkan standar';

$GLOBALS["lang"]['where'] = 'Dimana';

$GLOBALS["lang"]['Where'] = 'Dimana';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Dimana $x adalah angka. Jumlah LDAP sebanyak ini ada di DB dan telah diambil.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Dimana pada Layar Rincian Perangkat Anda ingin melihat bidang ini muncul.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Dimana rak berada di baris.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Apakah kerentanan mempengaruhi komponen di luar sendiri menggunakan Dampak, Ketersediaan dan Kerahasiaan.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Apakah interaksi pengguna diperlukan (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Yang OS benchmark ini berlaku untuk.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Yang perangkat harus Open-Audit membuat dari sistem eksternal (jika ada). Menggunakan Semua, Tidak ada atau Atribut yang diberikan.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Jaringan mana yang harus kita temukan. Ini seharusnya dalam format';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Menu sub- mana yang harus kita tampilkan permintaan ini.';

$GLOBALS["lang"]['Who made this rack.'] = 'Siapa yang membuat rak ini.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Mengapa hanya Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Mengapa kita mengecualikan kebijakan ini?';

$GLOBALS["lang"]['Wide Area Network'] = 'Jaringan Luas Area';

$GLOBALS["lang"]['Wide area network'] = 'Jaringan area lebar';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Tipe Widget';

$GLOBALS["lang"]['widgets'] = 'Widget';

$GLOBALS["lang"]['Widgets'] = 'Widget';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widget dirancang untuk digunakan di Dashboard. Pengguna Enterprise memiliki kebebasan lengkap untuk membuat, memperbarui dan menghapus widget seperti yang diperlukan.';

$GLOBALS["lang"]['width'] = 'Lebar';

$GLOBALS["lang"]['Width'] = 'Lebar';

$GLOBALS["lang"]['windows'] = 'Jendela';

$GLOBALS["lang"]['Windows'] = 'Jendela';

$GLOBALS["lang"]['Windows Packages'] = 'Paket Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Skrip Uji Windows';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows mungkin juga telah memblokir layanan dari awal. Pada target memulai aplet keamanan Windows dan pastikan eksekusi WinExeSvc diijinkan untuk dijalankan (klik Ijinkan pada Perangkat dan kemudian Mulai Aksi).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Halaman Winexe di Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe memerlukan layanan Windows berikut untuk dijalankan dan dijalankan: layanan netlogon dan rpc yang akan dijalankan.<br/><br/>Silakan log on ke target Windows mesin dan memeriksa layanan untuk netlogon dan rpc sedang berjalan.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe memakai admin $dan RPC (awal layanan net) untuk memasang dan memulai layanan remote (winexesvc). Layanan ini menginisialisasi pipa bernama yang digunakan untuk mengangkut perintah dari server Open- AuditIT ke target dan keluaran secara terbalik. Ketika selesai, pipa bernama menutup dan winexesvc menunggu koneksi lebih atau tidak dipasang (tergantung dari pilihan yang diberikan).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Jaringan Area Lokal Nirkabel';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Dengan rilis 3.3,0 Open- Audit kami telah memperkenalkan konsep Cluster. Ini secara intuitif memetakan ide dari sebuah cluster web, cluster basis data atau file cluster (atau salah satu dari beberapa tujuan lain) menjadi tipe yang diberikan (tersedia, redundansi, skala, dll).<br/><br/>Tergantung pada tujuan cluster dipilih, pelaporan akan sedikit berbeda.<br/><br/>Sebagai contoh, jika Anda membuat Cluster dengan tujuan virtualisasi, ketika Anda telah menambahkan perangkat ke dalamnya Anda juga akan melihat mesin virtual pada perangkat tersebut.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Dengan pengenalan fitur Awan, Anda dapat menyediakan rincian awan Anda, Amazon AWS atau Microsoft Azure, dan Open-Audit akan menggunakan API relevan untuk mengambil daftar lokasi, jaringan, dan contoh, kemudian menemukan masing-masing instansi ini.';

$GLOBALS["lang"]['wmi_fails'] = 'Kegagalan Wmi';

$GLOBALS["lang"]['Wmi Fails'] = 'Kegagalan Wmi';

$GLOBALS["lang"]['wmi_timeout'] = 'Waktu habis Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Waktu habis Wmi';

$GLOBALS["lang"]['workgroup'] = 'Kelompok Kerja';

$GLOBALS["lang"]['Workgroup'] = 'Kelompok Kerja';

$GLOBALS["lang"]['Working Credentials'] = 'Kredensial Kerja';

$GLOBALS["lang"]['Wrap Up'] = 'Bungkus';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Ditulis dalam bahasa naskah PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Query Kuning';

$GLOBALS["lang"]['Yemen'] = 'Yaman';

$GLOBALS["lang"]['Yes'] = 'Ya';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Anda dapat mendefinisikan direktori tambahan untuk dipindai sebagai entri dalam koleksi Executables. Ketika didefinisikan, direktori dan semua sub- direktori dipindai untuk berkas yang dapat dieksekusi. Anda juga dapat mendefinisikan direktori dan berkas yang akan dikeluarkan. Ketika diaktifkan, ini disuntikkan ke dalam naskah audit linux dan dilakukan kapanpun dijalankan (biasanya sebagai bagian dari penemuan). Jika Anda ingin ini dalam skrip Anda dapat secara manual menyalin ke target, gunakan menu - > Temukan - > Skrip - > Daftar Skrip dan unduh script dari sana.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Anda selalu bebas untuk memodifikasi skrip audit sendiri agar sesuai dengan persyaratan spesifik Anda. Anda perlu memasukkan perubahan tersebut setiap kali Anda meng-upgrade karena akan ditimpa oleh skrip baku. Saya akan menyarankan untuk menyimpan salinan master dari skrip yang telah diubah, meningkatkan Open-Auditt, kemudian menjalankan diff antara skrip baku baru dan skrip yang diubah dan menerapkan perbedaan. Naskah audit adalah skrip asli (Windows adalah VBScript, yang lainnya adalah Bash). Sederhana dan mudah untuk mengubah - pastikan untuk memiliki salinan perubahan Anda sebelum Anda upgrade.';

$GLOBALS["lang"]['You are running version'] = 'Anda menjalankan versi';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Anda dapat mengakses koleksi menggunakan Open- Auditt JSON berbasis API normal. Sama seperti koleksi lainnya. Tolong lihat';

$GLOBALS["lang"]['You can also'] = 'Kau juga bisa.';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Anda juga dapat melihat pada bagian bawah halaman meja yang menampilkan perangkat perubahan akan diterapkan.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Anda juga dapat menentukan properti menggunakan format di bawah.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Anda selalu dapat menjalankan VM Firstwave pada infrastruktur virtual Anda (ESX, Azure, et al). The Firstwave VM berjalan Debian linux dan bebas dari OS lisensi kekhawatiran dan keterbatasan. Atau instal pada Linux distro pilihan Anda sendiri. Kami mendukung Redhat 9, Ubuntu 20.04, 22.04 dan 24.04 serta Debian 11 dan 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Anda dapat menetapkan perangkat ke lokasi secara otomatis menggunakan';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Anda dapat menetapkan perangkat menggunakan gubahan';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Anda dapat mengaudit mesin jarak jauh tanpa menggunakan akun Administrator yang sebenarnya dengan membuat kunci registri. Buat kunci bawah pada setiap mesin untuk diaudit dan pastikan kredensial pengguna yang dipakai adalah anggota dari grup Administrator.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Anda tentu dapat menjalankan penemuan tanpa kredensial yang valid pada perangkat dalam jaringan, bagaimanapun, informasi yang diambil akan menjadi bagian yang sangat kecil dari apa Open- Auditt memiliki kemampuan untuk mengambil <i>dengan</i> Kredensial.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Anda dapat membuat sebuah baseline, menjalankannya terhadap sekelompok perangkat dan melihat hasilnya, menambah eksekusi yang dijadwalkan, menambahkan lebih banyak tabel untuk perbandingan (saat ini hanya perangkat lunak, port netstat dan pengguna yang aktif), di tempat baseline edit, arsip hasil dan banyak lagi.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Anda dapat membuat skrip dengan semua pilihan untuk skrip audit yang ada - bukan hanya Windows. AIX, ESX, Linux, OSX dan Windows semua tertutup.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Anda dapat menyesuaikan seluruh integrasi ke sistem mana (NMIS atau OpenAuDIT) adalah otoritas per bidang. Ada opsi untuk membuat dan / atau memperbarui perangkat dalam Open-Auditt atau NMIS. Haruskah kita menjalankan penemuan pada perangkat dibuat atau diperbarui dan begitu banyak lagi. Ada penjelasan untuk setiap item di sisi kanan halaman.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Anda dapat mendefinisikan aplikasi dan menghubungkan perangkat ke aplikasi ini. Perangkat mungkin diasosiasikan ke lebih dari satu aplikasi. Sebuah aplikasi mungkin diasosiasikan ke lebih dari satu perangkat.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Anda dapat menyunting nilai Kolom Tambahan untuk setiap perangkat individu pada halaman rincian perangkat. Lihat layar rincian perangkat, buka bagian yang memuat ruas dan (jika Anda memiliki';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Anda dapat membatasi Discovery Benih Perangkat untuk jatuh dalam set ketat parameter, termasuk: <i>Batasi ke Subnet</i> dan <i>Batasi ke Pribadi</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Anda dapat secara manual menetapkan perangkat menggunakan';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Anda dapat mengambil alih ini dengan menyediakan opsi format di URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Anda dapat memilih perangkat individu dengan mengklik kotak cek mereka di sisi kanan atau memilih semua perangkat yang mengklik kotak cek di sebelah kanan atas tabel (di bawah tombol Sunting yang terlihat seperti pensil).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Anda dapat memilih perangkat untuk diintegrasi dengan memilih atribut apapun dalam sistem (perangkat) tabel dan pencocokan (lihat menu 2.Admin Database Daftar Data List ibn Tabel Lant untuk daftar ruas). Sebuah atribut cocok hanya dapat cocok dengan satu nilai.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Anda dapat mengubah server apapun menjadi kolektor dengan pergi ke menu - > admin - > Kolektor - > Buat ini menginstal Kolektor. Anda akan memerlukan kredensial untuk log on ke server instalasi ini akan melaporkan ke.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Anda dapat melihat dengan mengklik pada ikon tampilan biru. Anda juga dapat mengedit atau menghapus jika Anda memiliki izin.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Anda tidak memiliki ekstensi PHP MBString terpasang. Ekstensi ini diperlukan.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Anda tidak memiliki ekstensi PHP SNMP terpasang. Ekstensi ini sangat direkomendasikan.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Anda mungkin ingin menyalin dan menempelkan URL ini dalam email kepada staf Anda.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Anda mungkin ingin memiliki Direktori Aktif atau OpenLDAP mengotorisasi pengguna Anda, tetapi tidak memberikan otorisasi. Untuk melakukan ini, pastikan <i>Gunakan untuk Otentikasi</i> diatur ke Y dan <i>Gunakan untuk Peran</i> diatur ke N. Kredensial akan divalidasi oleh LDAP, tetapi Anda akan perlu memiliki pengguna sudah dibuat dan ditugaskan Roles dalam Open-Auditt. Ini juga <i>otomatis</i> berlaku untuk';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Anda mungkin telah memperhatikan aturan-aturan pertandingan ini adalah untuk butir-butir yang mungkin tidak unik secara global. Beberapa contoh:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Anda harus menghapus lisensi yang ada sebelum menambahkan lisensi baru.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Anda harus memiliki kredensial SSH bekerja untuk mengeksekusi sebuah benchmark. Sistem Operasi berikut saat ini didukung: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, Redhat, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Kami berencana untuk memperluas ini dengan rilis lebih lanjut.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Anda harus menyalin dan menempelkan seluruh berkas ke dalam kotak teks. Dalam kasus di bawah ini, salin semua teks.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Anda tidak boleh memasukkan ruas sunting _ by dan edit _ date. Ini akan otomatis diatur.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Anda hanya harus mengubah kalimat kedua teks,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Anda harus mengganti kolom yang diperlukan (mis, org _ id) untuk ATRIBUTE _ NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Anda harus menggunakan baris header yang berisi nama kolom yang ingin Anda populasi, lalu baris data Anda di bawah itu.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Anda hanya harus menggunakan tabel-tabel yang berisi atribut yang Anda butuhkan. Saya biasanya menggunakan join kiri. Misalnya';

$GLOBALS["lang"]['You will need a'] = 'Anda akan membutuhkan';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Anda akan membutuhkan port untuk WMI pada firewall Windows dibuka pada setiap target Windows komputer. Untuk Windows Server inti, pastikan Anda mengijinkan koneksi firewall sesuai dengan';

$GLOBALS["lang"]['You will see a list of'] = 'Anda akan melihat daftar';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutorial YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Kunci EC2 API milikmu.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google Compute credential Anda sebagai JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Anda Host adalah';

$GLOBALS["lang"]['Your Licenses'] = 'Licenses Anda';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'ID Microsoft Azure Client Anda.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Client Secret milikmu.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'ID Microsoft Azure-mu.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID-mu.';

$GLOBALS["lang"]['Your PHP version is'] = 'Versi PHP Anda';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQL Anda untuk memilih atribut yang akan mengisi permintaan ini.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'SQL Anda untuk memilih perangkat yang akan mengisi grup ini.';

$GLOBALS["lang"]['Your SSH key.'] = 'Kunci SSH-mu.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Kredensial akses Anda, sesuai dengan awan API asli.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Data Anda adalah data Anda. Anda dapat mengekstrak setiap kali Anda suka. Kami bahkan menyediakan ekspor ke CSV, JSON, dan XML. Dan kita punya JSON API. Dan Anda dapat menulis laporan custom dan memiliki keluaran tersebut di CSV, XML, dan JSON! Sekali lagi, itu adalah data Anda - tidak orang lain. Kau bisa yakin bahwa keamanan datamu ada di tanganmu.';

$GLOBALS["lang"]['Your database platform is'] = 'Platform basis data Anda';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Deskripsi Anda tentang status koneksi ini (diberikan, pensiun, dll).';

$GLOBALS["lang"]['Your description of this item.'] = 'Deskripsi Anda dari item ini.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Nama generik Anda bagi perangkat lunak ini';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Versi generik Anda bagi perangkat lunak ini';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Pengguna Anda sekarang harus dapat logon dengan mengklik <i>Logon dengan Entra</i> tombol pada halaman Open-Auditt logon. Seperti yang disebutkan di atas, jika logon gagal, silakan periksa berkas catatan dan verifikasi pengguna <i>Nama pengguna yang disukai</i>.<br/><br/>Dan itu harus semua ada terlalu itu. Sekarang pengguna Anda harus memiliki satu set kredensial kurang untuk diingat!<br/><br/>Seperti biasa, jika Anda memiliki masalah dengan fitur ini, silakan email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Pengguna Anda sekarang harus dapat logon dengan mengklik <i>Logon dengan OKTA</i> tombol pada halaman Open-Auditt logon. Seperti yang disebutkan di atas, jika logon gagal, silakan periksa berkas catatan dan verifikasi pengguna <i>nama</i>.<br/><br/>Dan itu harus semua ada terlalu itu. Sekarang pengguna Anda harus memiliki satu set kredensial kurang untuk diingat!<br/><br/>Seperti biasa, jika Anda memiliki masalah dengan fitur ini, silakan email';

$GLOBALS["lang"]['Your web server is'] = 'Server web Anda';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'sebuah String';

$GLOBALS["lang"]['active'] = 'aktif';

$GLOBALS["lang"]['active directory'] = 'direktori aktif';

$GLOBALS["lang"]['active/active'] = 'aktif / aktif';

$GLOBALS["lang"]['active/passive'] = 'aktif / pasif';

$GLOBALS["lang"]['advertisement'] = 'iklan';

$GLOBALS["lang"]['alert'] = 'waspada';

$GLOBALS["lang"]['all'] = 'semua';

$GLOBALS["lang"]['allocated'] = 'dialokasikan';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'sebuah Integer';

$GLOBALS["lang"]['and'] = 'dan';

$GLOBALS["lang"]['and / or'] = 'dan / atau';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'dan tiket dukungan akan dibuat dan dilaksanakan.';

$GLOBALS["lang"]['and another'] = 'dan lain';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'dan download yang Laterest Rilis self-installer. Anda mungkin perlu untuk menggulung ke bawah halaman untuk menemukannya.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'dan pergi ke Aplikasi - > Aplikasi Enterprise (menu kiri jauh), kemudian klik <i>Aplikasi baru</i>.';

$GLOBALS["lang"]['and its current time is'] = 'dan saat ini adalah';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'dan mencari garansi tanggal kedaluwarsa sebelum hari ini.';

$GLOBALS["lang"]['and review what is possible.'] = 'dan meninjau apa yang mungkin.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'dan URI redirect Sinyal';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'dan garis akhir mungkin akan menjadi yang paling menarik. Baris-baris ini harus memberikan titik yang tepat di mana log masuk gagal.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'aplikasi';

$GLOBALS["lang"]['approved'] = 'disetujui';

$GLOBALS["lang"]['are required.'] = 'diperlukan.';

$GLOBALS["lang"]['are used.'] = 'Digunakan.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'sebagai perangkat menanggapi port ini.<br/>Hal ini telah menyebabkan beberapa masalah pelanggan di mana firewall menanggapi atas nama perangkat yang tidak ada, dan karenanya menyebabkan deteksi perangkat positif palsu. Sekarang kita memiliki atribut ini tersedia untuk mengatur per scan.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'sebagai titik referensi dan filter keluar semua mesin virtual melalui cek sistem. lapangan serial untuk VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'mengasumsikan bekerja dan klien berpenduduk DNS';

$GLOBALS["lang"]['attribute'] = 'atribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'cadangan';

$GLOBALS["lang"]['banned'] = 'dilarang';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'biru';

$GLOBALS["lang"]['bottom'] = 'dasar';

$GLOBALS["lang"]['building'] = 'bangunan';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'dapat digunakan untuk otentikasi pengguna (adalah nama pengguna dan kata sandi benar) serta otorisasi pengguna (peran dan orgs apa yang dimiliki pengguna).<br/><br/>Bila pengguna tidak berada dalam LDAP yang dikonfigurasi tetapi dalam Open-Auditt (eg: <i>admin</i> pengguna), Open-Auditt akan fallback untuk menggunakan dirinya sendiri untuk otentikasi dan otorisasi baik.<br/><br/>Open-Aud IT menggunakan grup LDAP spesifik untuk peran dan organ. Seorang pengguna harus menjadi anggota langsung dari grup ini agar Open- Auditt dapat menentukan akses pengguna tersebut.<br/><br/>Ketika dikonfigurasi dengan benar, LDAP dapat menghapus kebutuhan untuk membuat pengguna dalam Open- Auditt. Cukup konfigurasi Open-Audit untuk menggunakan LDAP untuk baik otentikasi dan otorisasi. Jika pengguna tidak ada dalam Open- Auditt tetapi memang ada di LDAP dan kredensial mereka benar dan mereka adalah anggota dari kelompok yang diperlukan Open- Auditt akan membuat akun pengguna secara otomatis.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'kini dapat mengambil rincian tentang berkas atau direktori dari berkas dan memantau berkas ini untuk perubahan sesuai atribut lain dalam basis data Open-AuditT. Fitur ini bekerja di luar kotak untuk server Linux Open-Audit, tapi perlu perubahan ke nama akun layanan di bawah server Windows Open- Auditt. Klien yang didukung adalah Windows dan Linux.';

$GLOBALS["lang"]['changed'] = 'berubah';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Terpilih. Dari sana jika sebuah port untuk WMI, SSH atau SNMP terdeteksi menanggapi perangkat lebih lanjut kueri menggunakan ';

$GLOBALS["lang"]['cloud'] = 'awan';

$GLOBALS["lang"]['code'] = 'kode';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'koleksi dan halaman rincian adalah ikon untuk dijalankan.';

$GLOBALS["lang"]['collector'] = 'kolektor';

$GLOBALS["lang"]['collectors'] = 'kolektor';

$GLOBALS["lang"]['column'] = 'kolom';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'kolom akan berisi baik <i>y</i> atau <i>n</i>. Ini mengindikasikan apakah baris ini saat ini ada pada perangkat. Misalnya perangkat lunak dapat diinstal (yang akan menghasilkan <i>softwer.current = y</i>), tetapi pada audit berikutnya mungkin tidak terdeteksi. Buka -Auditt kemudian akan mengubah baris atribut ini sekarang ke <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'kolom. The';

$GLOBALS["lang"]['compute'] = 'kompute';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konsol';

$GLOBALS["lang"]['contains'] = 'berisi';

$GLOBALS["lang"]['create'] = 'buat';

$GLOBALS["lang"]['created'] = 'dibuat';

$GLOBALS["lang"]['credentials'] = 'kredensial';

$GLOBALS["lang"]['critical'] = 'kritis';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'basis data';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'didelegasikan';

$GLOBALS["lang"]['delete'] = 'hapus';

$GLOBALS["lang"]['deleted'] = 'dihapus';

$GLOBALS["lang"]['denied'] = 'ditolak';

$GLOBALS["lang"]['details'] = 'rincian';

$GLOBALS["lang"]['devices'] = 'perangkat';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['discoveries'] = 'penemuan';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentasi untuk rincian lebih lanjut.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'tidak <strong>tidak</strong> menyediakan laporan kerentanan untuk berikut';

$GLOBALS["lang"]['does not equal'] = 'tidak sama';

$GLOBALS["lang"]['emergency'] = 'darurat';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'sama dengan';

$GLOBALS["lang"]['error'] = 'galat';

$GLOBALS["lang"]['established'] = 'didirikan';

$GLOBALS["lang"]['excluded'] = 'tidak termasuk';

$GLOBALS["lang"]['expired'] = 'kadaluarsa';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'ekstrim - tanpa itu, organisasi akan gagal.

sangat tinggi - Fungsi yang penting untuk kelangsungan hidup organisasi dan harus dipulihkan segera.

tinggi - fungsi penting yang harus dipulihkan dengan cepat tetapi mungkin memiliki waktu pemulihan sedikit lebih lama.

sedang - Fungsi yang diperlukan tetapi dapat mentolerir lebih lama downtime.

fungsi tidak penting yang dapat tertunda tanpa dampak signifikan.

unassign-the default until set.';

$GLOBALS["lang"]['fail'] = 'gagal';

$GLOBALS["lang"]['false'] = 'salah';

$GLOBALS["lang"]['file'] = 'berkas';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'pertama';

$GLOBALS["lang"]['fixed'] = 'tetap';

$GLOBALS["lang"]['floor'] = 'lantai';

$GLOBALS["lang"]['for'] = 'untuk';

$GLOBALS["lang"]['for authentication'] = 'untuk otentikasi';

$GLOBALS["lang"]['for this information.'] = 'untuk informasi ini.';

$GLOBALS["lang"]['from Audit Script Result'] = 'dari Hasil Skrip Audit';

$GLOBALS["lang"]['from NMIS'] = 'dari NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'dari alamat LocalHost (Menggunakan LRPC) berjalan dalam wadah aplikasi';

$GLOBALS["lang"]['front'] = 'depan';

$GLOBALS["lang"]['front-left'] = 'depan-kiri';

$GLOBALS["lang"]['front-right'] = 'depan-kanan';

$GLOBALS["lang"]['github'] = 'ithub';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'lebih besar atau sama';

$GLOBALS["lang"]['greater than'] = 'lebih besar dari';

$GLOBALS["lang"]['group'] = 'grup';

$GLOBALS["lang"]['has not been set'] = 'belum ditetapkan';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'memiliki reverse DNS resolable IP ke target Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'memiliki kemampuan untuk dieksekusi. Pada';

$GLOBALS["lang"]['head'] = 'kepala';

$GLOBALS["lang"]['here'] = 'sini';

$GLOBALS["lang"]['high availability'] = 'tersedia tinggi';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'jika Anda mengkloning sebuah mesin Linux virtual, kecuali jika Anda secara manual meregenerasi ini (dan dalam pengalaman saya, orang tidak) itu akan tetap sama.';

$GLOBALS["lang"]['ignored'] = 'diabaikan';

$GLOBALS["lang"]['import the example device data'] = 'impor data perangkat contoh';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'di Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'dalam Input dapat memiliki nilai berikut.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'dalam Outputs dapat memiliki nilai berikut.';

$GLOBALS["lang"]['inactive'] = 'tidak aktif';

$GLOBALS["lang"]['incomplete'] = 'tidak lengkap';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer akan menguji keberadaan Nmap dalam standar lokasi instalasi dari';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n), dsb';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'adalah standar AS dijaga oleh National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'adalah standar internasional untuk mengelola keamanan informasi. Ini menyediakan kerangka kerja untuk membangun, menerapkan, mempertahankan, dan terus-menerus meningkatkan Sistem Manajemen Keamanan Informasi (ISM).';

$GLOBALS["lang"]['is based upon'] = 'didasarkan pada';

$GLOBALS["lang"]['is licensed to'] = 'dilisensikan ke';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'berikutnya pada daftar dan Open-Auditt dapat menggunakan password dan otentikasi kunci. Buka -Audit juga dapat menggunakan sebuah sudo pengguna aktif sebagai lawan dari penggunaan root secara langsung (walaupun juga dapat menggunakan root). Untuk hasil terbaik, pengguna root atau sebuah sudo pengguna aktif harus digunakan (lihat Auditing Linux tanpa root dan Target Klien Konfigurasi pada wiki). Perangkat Windows juga dapat menjalankan ssh, namun jika Open- Audit mendeteksi hal ini akan menghentikan kueri SSH dan sebaliknya menggunakan WMI (mengasumsikan bekerja dengan kredensial WMI).';

$GLOBALS["lang"]['is the link to the'] = 'adalah link ke';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'butir untuk melihat tabel tertentu dan kolom mereka. Ini akan memungkinkan Anda untuk menemukan apa yang Anda butuhkan, daripada berjalan-jalan melalui konsol MySQL dari skrip penciptaan skema.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'kunci dibutuhkan untuk mengambil lat / long dan peta tampilan. Lihat';

$GLOBALS["lang"]['left'] = 'kiri';

$GLOBALS["lang"]['less or equals'] = 'kurang atau sama';

$GLOBALS["lang"]['less than'] = 'kurang dari';

$GLOBALS["lang"]['license'] = 'lisensi';

$GLOBALS["lang"]['licenses'] = 'Lisensi';

$GLOBALS["lang"]['like'] = 'seperti';

$GLOBALS["lang"]['line'] = 'baris';

$GLOBALS["lang"]['list'] = 'daftar';

$GLOBALS["lang"]['list View, using the Create button'] = 'tampilkan Tilikan, memakai tombol Buat';

$GLOBALS["lang"]['load balancing'] = 'pembesaran beban';

$GLOBALS["lang"]['location'] = 'lokasi';

$GLOBALS["lang"]['locations'] = 'lokasi';

$GLOBALS["lang"]['managed'] = 'dikelola';

$GLOBALS["lang"]['methods'] = 'metode';

$GLOBALS["lang"]['microsoft'] = 'mikroft';

$GLOBALS["lang"]['mount point'] = 'titik mount';

$GLOBALS["lang"]['must'] = 'harus';

$GLOBALS["lang"]['network'] = 'jaringan';

$GLOBALS["lang"]['news'] = 'berita';

$GLOBALS["lang"]['no'] = 'tidak';

$GLOBALS["lang"]['node'] = 'titik';

$GLOBALS["lang"]['none'] = 'kosong';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'tidak dapat diterapkan';

$GLOBALS["lang"]['not in'] = 'tidak masuk';

$GLOBALS["lang"]['not like'] = 'tidak seperti';

$GLOBALS["lang"]['notice'] = 'pemberitahuan';

$GLOBALS["lang"]['notification'] = 'pemberitahuan';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'di perangkat dimana';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'dioptimisasi';

$GLOBALS["lang"]['optionally '] = 'secara optimal ';

$GLOBALS["lang"]['or'] = 'atau';

$GLOBALS["lang"]['or the GitHub page at'] = 'atau halaman GitHub di';

$GLOBALS["lang"]['other'] = 'lain';

$GLOBALS["lang"]['package'] = 'paket';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'halaman. Ekspor server LDAP Anda dari menu - > admin - > Server LDAP - > Detail ke JSON dan simpan dan masukkan data ini juga.';

$GLOBALS["lang"]['partition'] = 'partisi';

$GLOBALS["lang"]['pass'] = 'lewat';

$GLOBALS["lang"]['pending'] = 'tertunda';

$GLOBALS["lang"]['performance'] = 'performa';

$GLOBALS["lang"]['performed'] = 'dilakukan';

$GLOBALS["lang"]['permission'] = 'ijin';

$GLOBALS["lang"]['permissions required per endpoint'] = 'perizinan dibutuhkan per titik akhir';

$GLOBALS["lang"]['pie'] = 'pie';

$GLOBALS["lang"]['planning'] = 'perencanaan';

$GLOBALS["lang"]['predictable'] = 'dapat diprediksi';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'belakang';

$GLOBALS["lang"]['rear-left'] = 'belakang-kiri';

$GLOBALS["lang"]['rear-right'] = 'return-right';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'rilis';

$GLOBALS["lang"]['removed from display, but has been set'] = 'dihapus dari tampilan, tetapi telah diset';

$GLOBALS["lang"]['reserved'] = 'disimpan';

$GLOBALS["lang"]['right'] = 'kanan';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'hak) anda dapat mengklik pada nilai field untuk mengeditnya.';

$GLOBALS["lang"]['role'] = 'peran';

$GLOBALS["lang"]['room'] = 'ruang';

$GLOBALS["lang"]['row'] = 'baris';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'layanan gagal untuk memulai karena kesalahan berikut';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'sehingga Open-Auditt tahu untuk membatasi permintaan Anda ke Orgs yang sesuai.';

$GLOBALS["lang"]['stand-alone'] = 'berdiri saja';

$GLOBALS["lang"]['standard'] = 'standar';

$GLOBALS["lang"]['starts with'] = 'diawali dengan';

$GLOBALS["lang"]['storage'] = 'penyimpanan';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'tabel';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabel dan memasukkan baris asli.';

$GLOBALS["lang"]['team'] = 'tim';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'teks. Yang pertama adalah indeks array dan harus kiri as-is. Indeks digunakan dalam template untuk mencari teks yang diterjemahkan.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'kemudian mengklik pada tombol rincian untuk meja.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'kemudian mengklik pada tombol rincian untuk meja. Rincian perangkat tersimpan';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

$GLOBALS["lang"]['to'] = 'ke';

$GLOBALS["lang"]['to create an item of this type'] = 'untuk membuat sebuah butir dari tipe ini';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'ke URL, Anda akan mendapatkan entri basis data lengkap, termasuk semua tabel komponen, dari perangkat yang diberikan.';

$GLOBALS["lang"]['to the user'] = 'ke pengguna';

$GLOBALS["lang"]['top'] = 'atas';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'sangat rahasia - klasifikasi Militer / Pemerintah. Penutupan akan menyebabkan sangat berbahaya bagi keamanan nasional.

rahasia - klasifikasi Militer / Pemerintah. Penutupan akan menyebabkan kerusakan serius bagi keamanan nasional.

Rahasia / Pemerintah Militer dan klasifikasi Sektor Swasta. Data yang rahasia termasuk rahasia perdagangan, data intelektual, kode pemrograman aplikasi, dan data lain yang serius dapat mempengaruhi organisasi jika pengungkapan tidak sah terjadi. Data pada tingkat ini hanya akan tersedia untuk personil dalam organisasi yang pekerjaannya perlu, atau langsung berhubungan dengan, data diakses. Akses ke data rahasia biasanya membutuhkan otorisasi untuk setiap akses.

private-Private Sektor klasifikasi. Data yang bersifat pribadi termasuk informasi yang berhubungan dengan personil, termasuk catatan sumber daya manusia, catatan medis, dan informasi gaji, yang hanya digunakan dalam organisasi.

sensitif - Militer / Pemerintah dan klasifikasi Sektor Swasta. Data yang sensitif termasuk informasi organisasi keuangan dan membutuhkan langkah-langkah ekstra untuk memastikan CIA dan akurasi. Pengungkapan mungkin membahayakan keamanan nasional.

public - Private Sektor klasifikasi. Data publik adalah data yang umum dibagi dengan publik dan tidak akan menyebabkan dampak negatif pada organisasi. Contoh data publik termasuk berapa banyak orang yang bekerja di organisasi dan apa produk yang diproduksi atau dijual oleh organisasi.

klasifikasi Militer / Pemerintah. Setiap informasi yang umumnya dapat didistribusikan ke publik tanpa ancaman terhadap kepentingan nasional.

unassign-the default until set.';

$GLOBALS["lang"]['traffic'] = 'lalu lintas';

$GLOBALS["lang"]['true'] = 'benar';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true atau false (dalam konteks JSON)';

$GLOBALS["lang"]['unallocated'] = 'tidak dialokasikan';

$GLOBALS["lang"]['unauthorised'] = 'tidak sah';

$GLOBALS["lang"]['unchanged'] = 'tidak berubah';

$GLOBALS["lang"]['unknown'] = 'tidak diketahui';

$GLOBALS["lang"]['unmanaged'] = 'tidak dikelola';

$GLOBALS["lang"]['unused'] = 'tak digunakan';

$GLOBALS["lang"]['update'] = 'perbarui';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'menggunakan data yang dikumpulkan dari perangkat Anda dan mencocokkan perangkat lunak yang terpasang dengan nilai yang diberikan, itu menghitung kecocokan menghitung berapa banyak lisensi yang telah digunakan dan berapa banyak yang tersisa. Hal ini memungkinkan penggunaan wildcard pada <i>string cocok</i> field yang cocok dengan perangkat lunak. atribut nama.';

$GLOBALS["lang"]['using the main menu items.'] = 'menggunakan item menu utama.';

$GLOBALS["lang"]['valid'] = 'valid';

$GLOBALS["lang"]['version'] = 'versi';

$GLOBALS["lang"]['virtualisation'] = 'virtualisasi';

$GLOBALS["lang"]['warning'] = 'peringatan';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'dengan set akses lokal dan remote.';

$GLOBALS["lang"]['with devices::update permission.'] = 'dengan perangkat:: ijin update.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'dengan Sinyal-Pada URI Redirect sedang';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'dengan tujuan menyediakan akses sederhana dan intuitif dalam cara yang akrab dengan pengembang. Selain API ini, antarmuka web akan menggunakan format permintaan yang sama dan menyediakan beberapa aksi tambahan (eg: bentuk HTML untuk membuat butir).';

$GLOBALS["lang"]['yes'] = 'ya';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Anda tidak memerlukan izin HighCharts untuk menggunakan produk Firstwave. Lisensi';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Anda akan menetapkan perangkat yang ditemukan ke Org atau Lokasi.';

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

