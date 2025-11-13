<?php
$GLOBALS["lang"][' Default, currently '] = ' Default, aktuell ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Wenn etwas nicht wie erwartet funktioniert, ist Ihre erste Sache zu tun, die Protokolle zu überprüfen.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' wird nun mit einer Sprachdatei unterstützt. Um Ihren Benutzer zu ändern, um diese Sprache zu verwenden, klicken Sie auf ';

$GLOBALS["lang"][' seconds'] = ' Sekunden';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', aber wird nicht brauchen, um eine separate Reihe von Anmeldeinformationen zu erinnern.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', von denen wir über dreißig als Standard-Set liefern. Professionelle Benutzer können diese nicht ändern, aber ein Enterprise-Benutzer hat komplette Anpassungsfähigkeiten - einschließlich der Erstellung Ihrer eigenen.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', du <i>müssen</i> verwenden Sie https auf Ihrem Open-AudIT-Server, um Entra für Auth zu verwenden. Bitte konfigurieren Sie Apache zur Verwendung <strong>https</strong> vor der Konfiguration von Entra für Auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Um dies zu ermöglichen, bearbeiten Sie den Konfigurationspunkt für ';

$GLOBALS["lang"]['10 Minutes'] = '10 Minuten';

$GLOBALS["lang"]['15 Minutes'] = '15 Minuten';

$GLOBALS["lang"]['30 Minutes'] = '30 Minuten';

$GLOBALS["lang"]['5 Minutes'] = '5 Minuten';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 Kontrollen gruppiert in organisatorische, personen, physische und technologische Kategorien';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>HINWEIS</strong> - Sie greifen auf diese URL vom lokalen Open-AudIT Server. Das heruntergeladene Skript wird nicht in der Lage sein, wenn Sie auf einem anderen Rechner laufen. Wenn Sie andere Maschinen überprüfen müssen, laden Sie das Skript von jedem Remote-Computer herunter, nicht mit einem Browser auf dem Open-AudIT Server selbst.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">HINWEIS</strong> - Sie müssen SSH- oder SSH-Schlüssel-Anmeldedaten arbeiten, um Benchmarks auf einem Zielgerät auszuführen.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Basel</strong> - Das übergeordnete Dokument, das die Basisdefinition und die einzelnen politischen Tests enthält.<br/> <br/> <strong>Politik</strong> - Die einzelnen Tests in einer Baseline. Jeder Test ist für einen bestimmten Gegenstand. Ein Beispiel wäre die Prüfung der SSH-Version 1.2.3.<br/> <br/> <strong>Details</strong> - Baselines können Netstat-Ports, Benutzer und Software vergleichen.<br/> <br/> <strong>Software</strong> - Um Software zu vergleichen, überprüfen wir den Namen und die Version. Da Versionsnummern nicht alle im Format standardisiert sind, erstellen wir ein neues Attribut namens software_pplus, das wir in der Datenbank zusammen mit den übrigen Software-Details für jedes Paket speichern. Aus diesem Grund werden die Basislinien, die Softwarerichtlinien verwenden, nicht funktionieren, wenn sie gegen ein Gerät laufen, das nicht von 1.10 geprüft wurde (zumindest). Softwarerichtlinien können testen, ob die Version "gleich", "größer" oder "gleich oder größer" ist.<br/> <br/> <strong>Netstat Ports</strong> - Netstat Ports verwenden eine Kombination aus Portnummer, Protokoll und Programm. Wenn alle anwesend sind, geht die Politik durch.<br/> <br/> <strong>Benutzer</strong> - Benutzer arbeiten ähnlich wie Netstat Ports. Wenn ein Benutzer mit einem passenden Namen, Status und Passwort-Details (änderbar, abläuft, erforderlich) existiert, dann geht die Richtlinie weiter.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Ein Ort ist eine physische Adresse, die Geräte zugeordnet werden kann.<br/> <br/>Sie können es Koordinaten (lat/long) zuordnen und wenn Geräte zugewiesen sind, wird der Standort auf der Open-AudIT Enterprise Karte angezeigt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Ein Netzwerk wird von Entdeckungseinträgen und Geräteattributen abgeleitet.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Eine Zusammenfassung zeigt eine Liste von Elementen, die durch die einzelnen Werte des Attributs gruppiert werden, die von der <code>table</code> und <code>column</code> Attribute.<br/> <br/>Wenn eine Zusammenfassung ausgeführt wird, wird das Ergebnis eine Liste von eindeutigen Werten dafür sein. <code>table</code> und <code>column</code>. Es gibt Links auf den Werten, die es dem Benutzer ermöglichen, die passenden Geräte zu sehen.<br/> <br/>Wenn das Attribut <code>extra_columns</code> wird bevölkert, die resultierende Seite wird diese Spalten zusätzlich zu den Standard-Gerät Spalten enthalten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenten lassen Sie PCs ohne Entdeckung testen. Installieren Sie den Agenten und es wird jeden Tag mit dem Server Check-in und Audit selbst. Es spielt keine Rolle, ob Ihre Computer Firewalled sind, Audit-Daten erscheinen immer noch in Open-AudIT.</p><p>Bei der Prüfung <strong>wenn</strong> ein Agent sollte Aktionen durchführen, alle drei Tests müssen passieren (wenn der Test eingestellt ist). <strong>Dann</strong> die Aktionen durchgeführt werden.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Anwendungen werden von Ihnen, dem Benutzer definiert und für Open-AudIT gespeichert, um Geräte zu verwenden und zu verknüpfen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attribute werden für Open-AudIT gespeichert, um für bestimmte Felder zu verwenden.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>In der Lage zu bestimmen, welche Maschinen gleich konfiguriert sind, ist ein wesentlicher Bestandteil der Systemverwaltung und -prüfung – und jetzt wird darüber berichtet, dass es einfach und automatisiert wird. Sobald Sie Ihre Basislinie definieren, wird sie automatisch auf einem bestimmten Zeitplan gegen einen Satz von Geräten laufen. Die Ausgabe dieser ausgeführten Basislinien wird für die Web-Betrachtung, Import in ein Drittland-System oder sogar als gedruckter Bericht zur Verfügung stehen.<br/> <br/> Basislinien ermöglichen es Ihnen, Auditdaten mit einer Reihe von Attributen zu kombinieren, die Sie zuvor definiert haben (Ihre Basislinie), um die Einhaltung von Geräten zu bestimmen.<br/> <br/> Zum Beispiel - Sie könnten eine Basislinie von einem Gerät erstellen, das Centos 6 betreibt, das als einer Ihrer apache Server in einem Cluster fungiert. Sie wissen, dass dieser bestimmte Server genau so konfiguriert ist, wie Sie es wollen, aber Sie sind nicht sicher, ob andere Server im Cluster genau das gleiche konfiguriert sind. Baselines ermöglicht es Ihnen, dies zu bestimmen.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Cluster werden in Open-AudIT gespeichert, um Geräte besser zu erfassen, verwalten und schätzen Lizenzkosten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenten ist ein allgemeiner Begriff für die Tabellen, die die Attribute für ein Gerät speichern. Diese Tabellen sind: access_point, arp, bios, Certificate, cli_config, disk, dns, file, ip, licence, log, memory, module, monitor, motherboard, netstat, network, nmap, Optical, pagefile, Partition, policy, print_queue, process, radio, route, san, scsi, server, server_item, service, share, software_key, sound, server</p><p> Darüber hinaus klassifizieren wir die folgenden Tabellen auch als Geräteverwandt: Anwendung, Anbau, Cluster, Anmeldeinformationen, Bild.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>In der Datenbank werden Credentials verschlüsselt.<br/> <br/>Wenn eine Discovery ausgeführt wird, hat ein Gerät seine Anmeldeinformationen abgerufen und auf die Verbindung getestet (von der <code>credential</code> Tabelle Wenn diese scheitern, dann Anmeldeinformationen mit dem gegebenen Org verbunden <code>credentials.org_id</code> wird auch gegen das Gerät getestet. In der Anmeldetabelle werden Arbeitsinformationen auf einer individuellen Geräteebene gespeichert (Anmerkung - keine "s" im Tabellennamen).<br/> <br/>SSH-Tasten werden vor SSH-Benutzername / Passwort getestet. Beim Testen von SSH werden die Anmeldeinformationen auch als Arbeiten mit Sudo oder als root markiert.<br/> <br/>Für einfache Bedienung sollten Windows-Passwörter kein einzelnes oder doppeltes Angebot enthalten. Dies ist eine Remote-WMI-Beschränkung, keine Open-AudIT-Beschränkung.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Informationen werden verwendet, um auf Geräte zuzugreifen.<br/> <br/>Die Konfiguration von Anmeldeinformationen sollte eines der ersten Dinge sein, die Sie nach der Installation von Open-AudIT tun.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definieren Sie Ihre Racks und ordnen Sie Geräte in ihre Positionen. Sie haben bereits Ihre Geräte in Open-AudIT und Sie kennen Ihre Standorte. Open-AudIT erweitert dies, damit Sie ein Rack erstellen und ihm Geräte zuweisen können. Open-AudIT wird sogar eine Visualisierung des Regals und der darin enthaltenen Geräte bieten. Wenn Sie ein Gerätebild bereitstellen, wird dieses Bild in der Visualisierung verwendet. Sie können das Rack auf dem Bildschirm ansehen und die gleichen Artikel sehen, die Sie sehen würden, ob Sie vor ihm stehen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Geräte in Ihrem Netzwerk müssen verwaltet werden. Aber wie halten Sie Ihre Aufzeichnungen auf dem Laufenden? Ein Tabellenblatt - defintley nicht. Das wird in Stunden, wenn nicht in Tagen, nicht sein. Warum manuell versuchen, aufrechtzuerhalten. Verwenden Sie Open-AudIT, um Ihre Netzwerke automatisch zu scannen und Ihre Geräte aufzunehmen - Hersteller, Modell, Serien und mehr als 100 andere Attribute. Volle Listen von Software, Dienstleistungen, Festplatten, offene Ports, Benutzer, etc. Sehen Sie automatisch, ob ein Attribut hinzugefügt, entfernt oder geändert wurde.<br/> <br/>Sobald Open-AudIT eingerichtet ist, können Sie sich zurücklehnen und entspannen. Haben Sie Berichte per E-Mail an Sie per Zeitplan geändert, zum Beispiel - welche neuen Geräte haben wir diese Woche entdeckt? Welche neue Software wurde diese Woche installiert? Gibt es im letzten Monat Hardwareänderungen?<br/> <br/>Erweitern Sie auf den gespeicherten Feldern einfach mit Ihren eigenen benutzerdefinierten Attributen.<br/> <br/>Auch Geräte hinzufügen, die nicht mit Ihrem Netzwerk verbunden sind oder die Geräte, die Ihr Open-AudIT Server nicht erreichen kann.<br/> <br/>Computer, Switche, Router, Drucker oder jedes andere Gerät auf Ihrem Netzwerk - Open-AudIT kann sie alle überprüfen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Entdeckungen sind im Herzen dessen, was Open-AudIT tut.<br/> <br/>Wie sonst wüsstest du "Was ist in meinem Netzwerk?"<br/> <br/>Entdeckungen sind vorbereitete Datenelemente, die es Ihnen ermöglichen, eine Entdeckung auf einem Netzwerk in einem einzigen Klick durchzuführen, ohne die Details dieses Netzwerks jedes Mal einzugeben.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Entdeckung Optionen sind eine globale Einstellung in der <a href="../configuration?configuration.name=discovery_default_scan_option">Konfiguration</a>. Wenn Sie eine Open-AudIT Enterprise Lizenz haben, sind diese pro Entdeckung und zusätzlich nach Bedarf anpassbar. Entdeckung Optionen sind wie folgt (einschließlich einer Indizitave-Zeit zum Scannen eines individuellen IP):<br/><br/><strong>UltraFast</strong>: <i>1 Sekunde</i>. Scannen Sie nur die Ports, die Open-AudIT verwenden muss, um mit dem Gerät zu sprechen und ein IOS-Gerät (WMI, SSH, SNMP, Apple Sync) zu erkennen. Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird nicht als offen betrachtet. Gerät muss auf eine Nmap-Ping reagieren. Verwenden Sie aggressives Timing.<br/><br><strong>SuperFast</strong>: <i>5 Sekunden</i>. Scannen Sie die Top 10 TCP- und UDP-Ports sowie Port 62078 (Apple IOS-Erkennung). Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird nicht als offen betrachtet. Gerät muss auf eine Nmap-Ping reagieren. Verwenden Sie aggressives Timing.<br><br/><strong>Schnell!</strong>: <i>40 Sekunden</i>. Scannen Sie die oberen 100 TCP- und UDP-Ports sowie Port 62078 (Apple IOS-Detektion). Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird nicht als offen betrachtet. Gerät muss auf eine Nmap-Ping reagieren. Verwenden Sie aggressives Timing.<br/><br/><strong>Mittel (Klassisch)</strong>: <i>90 Sekunden</i>. So nah an einem traditionellen Open-AudIT-Scan, wie wir es machen können. Scannen Sie die oberen 1000 TCP-Ports, sowie 62078 (Apple IOS-Detektion) und UDP 161 (SNMP). Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird als offen betrachtet (und löst Geräteerkennung aus). Geräte werden unabhängig von einer Antwort auf ein Nmap-Ping gescannt. Verwenden Sie aggressives Timing.<br/><br/><strong>Mittel</strong>: <i>100 Sekunden</i>. Scannen Sie die Top 1000 TCP und Top 100 UDP-Ports, sowie Port 62078 (Apple IOS-Erkennung). Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird nicht als offen betrachtet. Gerät muss auf eine Nmap-Ping reagieren. Verwenden Sie aggressives Timing.<br/><br/><strong>Langsam</strong>: <i>4 Minuten</i>. Scannen Sie die Top 1000 TCP und Top 100 UDP-Ports, sowie Port 62078 (Apple IOS-Erkennung). Versionserkennung aktiviert. Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird als offen betrachtet (und löst Geräteerkennung aus). Gerät muss auf eine Nmap-Ping reagieren. Verwenden Sie normales Timing.<br/><br/><strong>Ultraslow</strong>: <i>20 Minuten</i>. Nicht empfohlen. Scannen Sie die oberen 1000 TCP- und UDP-Ports sowie Port 62078 (Apple IOS-Erkennung). Geräte werden unabhängig von einer Antwort auf ein Nmap-Ping gescannt. Versionserkennung aktiviert. Eine <code>open|filtered</code> Hafen gilt als offen. A <code>filtered</code> Port wird als offen betrachtet (und löst Geräteerkennung aus). Verwenden Sie höfliches Timing.<br/><br/><strong>Zoll</strong>: <i>Unbekannte Zeit</i>. Wenn andere Optionen als durch eine Standard-Erkennungsvoreinstellung festgelegt werden.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Gruppen werden als einfache Listen von Geräten verwendet, die den gewünschten Bedingungen entsprechen. Auf Wunsch mit JSON geben sie eine Liste zurück <code>devices.id</code> Nur. Wenn Sie die Web-Schnittstelle verwenden möchten, geben Sie die Standard-Spalten-Attributliste zurück.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Wenn der Benutzer sich auf Open-AudIT anmelden hat nicht den Zugriff auf die Suche LDAP (und Sie verwenden OpenLDAP), können Sie ein anderes Konto verwenden, das diesen Zugriff hat. Verwenden Sie die <code>ldap_dn_account</code> und <code>ldap_dn_password</code> um dies zu konfigurieren.<br/> <br/><strong>Hilfreiche Dokumentation</strong><br/> <br/><a href="/index.php/auth/help">Allgemeine Auth Hilfe</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Mit Entra für Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA für Auth verwenden</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Fehlerbehebung LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Benutzer, Roles und Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Wenn Sie einen Gerätetyp hinzufügen, um das zugehörige Icon anzuzeigen, müssen Sie die .svg formatierte Datei manuell in das Verzeichnis kopieren:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Wenn Sie einen Standorttyp hinzufügen, um das zugehörige Symbol anzuzeigen, müssen Sie das 32x32px-Symbol manuell in das Verzeichnis kopieren:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Wenn <i>Ressourcen</i> ein <code>device</code>, gültig <i>Typen</i> sind: <code>class</code>, <code>environment</code>, <code>status</code> und <code>type</code>. Wenn <i>Ressourcen</i> ist <code>locations</code> oder <code>org</code> nur gültig <i>Typ</i> ist <code>type</code>. Wenn <i>Ressourcen</i> ein <code>query</code> nur gültig <i>Typ</i> ist <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Wenn Sie Ihre Cloud-Maschinen vollständig testen möchten, vergessen Sie nicht, dass Sie auch diese in Open-AudIT gespeicherten Anmeldeinformationen benötigen.</p><p>Stellen Sie sicher, dass Sie die richtigen Ports zulassen, wenn Sie Microsoft Azure verwenden (22 für SSH, etc.). Überprüfen Sie Ihre virtuelle Maschine -> Netzwerkregeln.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Wenn Sie einen Listentyp auswählen, wird das Feld "Werte" aktiviert. Sie sollten hier eine Komma getrennte Liste von wählbaren Werten setzen. Diese werden in einem Dropdown-Box angezeigt, wenn das Feld bearbeitet wird.<br/> <br/>Wie die meisten anderen Attribute, Felder können Bulk editiert werden. Verwenden Sie die Bulk Edit Funktion, wie Sie normalerweise würden und Sie werden sehen, dass die Felder für Eingabe zur Verfügung stehen.<br/> <br/>Zeigen Sie den Bildschirm der Gerätedetails, öffnen Sie den Abschnitt mit dem Feld und (wenn Sie genügend Zugriff haben) können Sie auf den Feldwert klicken, um es zu bearbeiten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>In der sich ständig verändernden Welt der Computersicherheit, in der täglich neue Sicherheitslücken entdeckt und gepatelt werden, muss die Durchsetzung der Sicherheitskonformität ein kontinuierlicher Prozess sein. Es muss auch eine Möglichkeit enthalten, Anpassungen an die Politik sowie regelmäßige Bewertung und Risikoüberwachung vorzunehmen. Das OpenSCAP-Ökosystem bietet Tools und anpassbare Richtlinien für eine schnelle, kostengünstige und flexible Umsetzung dieser Prozesse.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrationen ermöglichen es Ihnen, Geräteauswahl und -pläne für Open-AudIT zu erstellen, um mit externen Systemen zu sprechen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows-Desktopsysteme haben Netzwerkbeschränkungen, die die Leistung von Open-AudIT beeinflussen können. Der TCP/IP-Stack begrenzt die Anzahl der gleichzeitig unvollständigen TCP-Verbindungsversuche. Nach Erreichen der Grenze werden nachfolgende Verbindungsversuche in eine Warteschlange gestellt und mit einer festen Rate (10 pro Sekunde) gelöst. Wenn zu viele die Warteschlange betreten, können sie fallengelassen werden. Und schließlich wird Apache durch das Betriebssystem neu gestartet. Aus diesem Grund wird die Installation von Open-AudIT auf einem Windows-Desktop-Betriebssystem nicht unterstützt.<br/><br/>Es gibt nichts falsch mit dem Open-AudIT-Code, noch können wir alles tun, um dieses Problem auf Windows-Client-Maschinen zu behandeln.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap Timing Details finden Sie unten auf dieser Seite <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Von dieser Seite:<br/> <br/><em>Wenn Sie auf einer anständigen Breitband- oder Ethernet-Verbindung sind, würde ich empfehlen immer -T4 (Aggressive). Einige Leute lieben -T5 (Insane), obwohl es zu aggressiv für meinen Geschmack ist. Manchmal geben die Menschen -T2 (Polite) an, weil sie denken, dass es weniger wahrscheinlich ist, Gastgeber abzustürzen oder weil sie sich als höflich im Allgemeinen betrachten. Sie wissen oft nicht, wie langsam -T2 wirklich ist. Ihr Scan kann zehnmal länger dauern als ein Standard-Scan. Maschinenunfälle und Bandbreite Probleme sind selten mit den Standard-TIM-Optionen -T3 (Normal) und so empfehle ich normalerweise, dass für vorsichtige Scanner. Omitting Versionserkennung ist viel effektiver als das Spielen mit Timing-Werten, um diese Probleme zu reduzieren.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT kann konfiguriert werden, um verschiedene Methoden zur Authentisierung eines Benutzers zu verwenden und zusätzlich ein Benutzerkonto mit zugewiesenen Rollen und Orgs basierend auf Gruppenmitgliedschaft zu erstellen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud Die IT kann Informationen über eine Datei oder ein Verzeichnis von Dateien abrufen und diese Dateien für Änderungen gemäß anderen Attributen in der Open-AudIT-Datenbank überwachen.<br/> <br/>Diese Funktion funktioniert aus der Box für Linux Open-AudIT Server, benötigt aber eine Änderung des Service-Kontonamens unter einem Windows Open-AudIT Server.<br/> <br/>Unterstützte Clients sind Windows und Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud Die IT kann Informationen über eine Datei abrufen, den nativen Paketmanager fragen, ob sie ihm bekannt sind und diese Dateien für Änderungen gemäß anderen Attributen in der Open-AudIT-Datenbank überwachen.<br/> <br/>Unterstützte Clients sind nur Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud Die IT kann Informationen in benutzerdefinierten Feldern speichern, die jedem Gerät zugeordnet sind.<br/> <br/>Sobald ein zusätzliches Feld erstellt wurde, kann es in Abfragen und Gruppen verwendet werden, wie jedes andere Attribut in der Datenbank.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT kommt mit vielen Abfragen aufgebaut. Wenn Sie eine bestimmte Abfrage benötigen und keine der vorverpackten Abfragen Ihren Bedürfnissen entsprechen, ist es ganz einfach, eine neue zu erstellen und in Open-AudIT zum Laufen zu laden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT kommt mit vielen Zusammenfassungen eingebaut. Wenn Sie eine bestimmte Zusammenfassung benötigen und keine der vorverpackten Zusammenfassungen Ihren Bedürfnissen entsprechen, ist es ganz einfach, eine neue zu erstellen und sie in Open-AudIT zum Laufen zu laden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT wird von FirstWave mit einer erstaunlichen Unterstützung unterstützt. Wenn Sie eine aktive Gemeinschaft der Unterstützungsspender bevorzugen, gibt es das auch. Wo sonst können Sie direkt mit den Entwicklern sprechen und innerhalb von 24 Stunden eine Antwort bekommen? Versuchen Sie das mit anderen Produkten! Erstaunliche Unterstützung. Stopp. Sie brauchen Unterstützung, wir bieten Unterstützung. Nein. Tolle Unterstützung. Zeitraum.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT bietet Multi-Tenancy aus der Box!<br/> <br/>Orgs (Organisationen) in Open-AudIT sind ein wichtiger Punkt. Ein Benutzer hat eine primäre Org sowie eine Liste von Orgs sie zugreifen können. Ein Benutzer kombiniert dies mit einer Liste von zugewiesenen "Roles", die definieren, welche Aktionen sie auf den Orgs zugewiesenen Gegenständen übernehmen können, zu denen sie Zugang haben. Die Kombination von "orgs" und "roles" definieren, was sie innerhalb von Open-AudIT tun können und können.<br/> <br/>Die meisten Objekte in Open-AudIT werden einem Org zugeordnet. Geräte, Standorte, Netzwerke, etc.<br/> <br/>Orgs können Kinder Orgs haben. Denken Sie an eine Organisations-Chart (Straße) Struktur. Wenn ein Benutzer Zugang zu einem bestimmten Org hat, haben sie auch Zugriff auf diese Orgs Nachkommen. Weitere Informationen finden Sie hier <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT bietet Multi-Tenancy aus der Box!<br/> <br/>Orgs (Organisationen) in Open-AudIT sind ein wichtiger Punkt. Ein Benutzer hat eine primäre Org sowie eine Liste von Orgs sie zugreifen können. Ein Benutzer kombiniert dies mit einer Liste von zugewiesenen "Roles", die definieren, welche Aktionen sie auf den Orgs zugewiesenen Gegenständen übernehmen können, zu denen sie Zugang haben. Die Kombination von "orgs" und "roles" definieren, was sie innerhalb von Open-AudIT tun können und können.<br/> <br/>Die meisten Objekte in Open-AudIT werden einem Org zugeordnet. Geräte, Standorte, Netzwerke, etc.<br/> <br/>Orgs können Kinder Orgs haben. Denken Sie an eine Organisations-Chart (Straße) Struktur. Wenn ein Benutzer Zugang zu einem bestimmten Org hat, haben sie auch Zugriff auf diese Orgs Nachkommen.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Schnell den Status von Geräten in Ihrem Netzwerk anzeigen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roles in Open-Aud IT ist ein Schlüsselelement. Ein Benutzer hat eine primäre Org sowie eine Liste von Orgs sie zugreifen können. Ein Benutzer kombiniert dies mit einer Liste von zugewiesenen Roles, die definieren, welche Aktionen sie auf den Orgs zugewiesenen Gegenständen übernehmen können. Die Kombination von "orgs" und "roles" definieren, was sie innerhalb von Open-AudIT tun können und können.<br/> <br/>Holen Sie sich die komplette Open-AudIT Enterprise Erfahrung. Das Erstellen von Rollen ermöglicht eine feinkörnige Kontrolle darüber, was Ihre Benutzer innerhalb von Open-AudIT tun können.<br/> <br/>Die primäre Methode zur Zulassung (was ein Benutzer tun kann) basiert auf den Benutzern Roles. Default-Rollen werden als Admin, org_admin, Reporter und Benutzer definiert. Jede Rolle hat eine Reihe von Berechtigungen (Kreate, Lesen, Aktualisieren, Löschen) für jeden Endpunkt. Die Möglichkeit, zusätzliche Rollen zu definieren und bestehende Rollen zu bearbeiten ist in Open-AudIT Enterprise aktiviert.<br/> <br/>Roles können auch mit LDAP (Active Directory und OpenLDAP) Zulassung verwendet werden. Enterprise-lizenzierte Installationen haben die Möglichkeit, die LDAP-Gruppe für jede definierte Rolle anzupassen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regeln prüfen Attribute und machen Kahnges basierend auf der entsprechenden Regel.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Scanoptionen ermöglichen es Ihnen, eine Reihe von Optionen auf eine Entdeckung leicht anzuwenden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Einfache, intuitive, genaue geographische Kartierung von Google Maps. Open-AudIT Hebel Google Maps zur Bereitstellung von Live-, interaktiven geographischen Mappings von Gerätestandorten. Automatisierte Umwandlung von Straßenadressen zu Geocodes und Longitude / Breite.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Software-Pakete werden verwendet, um festzustellen, ob Antiviren-, Backup-, Firewall-, genehmigte oder verbotene Software installiert ist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Einige Beispiele für gültige Subnet-Attribute sind: 192.168.1.1 (eine einzelne IP-Adresse), 192.168.1.0/24 (ein Subnetz), 192.168.1-3.1-20 (eine Reichweite von IP-Adressen).<br/> <br/><em>HINWEIS</em> - Nur ein Subnetz (gemäß den Beispielen - 192.168.1.0/24) kann automatisch ein gültiges Netzwerk für Open-AudIT erstellen. <br/> <br/>Wenn Sie einen Active Directory-Typ verwenden, stellen Sie sicher, dass Sie entsprechende Anmeldeinformationen haben, um mit Ihrem Domain Controller bereits in <a href="../credentials">Anmeldeinformationen</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standards werden in Open-AudIT gespeichert.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Unterstützte Clients sind nur Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Aufgaben haben einen Zeitplan, der den unix cron Zeitplan widerspiegelt. Die Attribute für Minute, Stunde, Tag_of_Monat, Monat, Tag_of_Woche handeln alle nach den Cron Definitionen. Sie können mehrere davon mithilfe von komma seperierten Werten (keine Leerzeichen) auswählen. Sie können jeden Wert mit * auswählen.<br/> <br/>Die <code>type</code> der Aufgabe kann eine von: Basislinien, Sammler, Entdeckungen, Abfragen, Berichte oder Zusammenfassungen sein.<br/> <br/>Wenn Sie eine Baseline oder Discovery planen möchten, müssen Sie diese vor der Erstellung der Aufgaben erstellen. Sie müssen die ID der Art des Artikels in <code>sub_resource_id</code>. Zum Beispiel, wenn Sie eine Discovery planen möchten, verwenden Sie diese spezielle Discoveries ID in <code>sub_resource_id</code>.<br/> <br/>Der Wert für <code>uuid</code> ist spezifisch für jeden Open-AudIT Server. Ihr einzigartiger Wert finden Sie in der Konfiguration.<br/> <br/>Die <code>options</code> Attribut ist ein JSON-Dokument mit zusätzlichen Attributen, die zur Ausführung der Aufgabe erforderlich sind. Die zusätzlichen Attribute für Berichte, Abfragen und Zusammenfassungen sind: <code>email_address</code> und <code>format</code>. Das zusätzliche Attribut für Bselines ist <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Die <code>type</code> der Lage wird ihr Icon zuordnen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Mit dem Endpunkt Attributes können Sie in Open-AudIT individuelle Werte zu verschiedenen Attributen hinzufügen, im Moment funktioniert diese Funktion auf den Attributen Class, Environment, Status und Type auf Geräten, dem Attribut Type für beide Standorte und Orgs sowie der Menu Kategorie für Queries. Wenn Sie einen Artikel eines der prvious Typen anzeigen (siehe Ansicht einer Lkocation) werden Sie feststellen, dass das Typ Attribut aus einem Dropdown-Box ausgewählt werden muss. Hier werden diese Werte gespeichert. Wenn Sie also einen neuen Typ hinzufügen möchten, der für einen Standort gewählt werden soll, fügen Sie ihn mit der Attributes-Funktion hinzu.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Die Collectors Funktion ermöglicht es Ihnen, viele "Kollektor"-Computer, die Netzwerk-Erkennung durchführen, einfach zu verwalten. Alle Collectors werden zentral vom Server gesteuert. Die einzigen benötigten Netzwerk-Ports zwischen dem Collector und dem Server sind 80 und/oder 443.<br/> <br/>Es macht die Verwaltung disparate Netzwerke schnell, einfach und einfach. Open-AudIT Enterprise Lizenznehmer erhalten eine einzelne Sammlerlizenz und haben die Möglichkeit, mehr als erforderlich zu kaufen..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Der SELECT-Bereich Ihres SQL <em>müssen</em> vollständig qualifizierte Spalten enthalten. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Der WHERE Abschnitt Ihres SQL <em>müssen</em> enthalten <code>WHERE @filter</code> so Open-AudIT weiß, Ihre Anfrage auf die entsprechenden Orgs zu beschränken. SQL, der diese Bedingung nicht enthält, führt dazu, dass die Abfrage nicht erstellt wird, es sei denn, Sie haben die Admin-Rolle.<br/> <br/>Ein Beispiel Abfrage SQL zeigt Attribute auf Geräten, die eine <code>os_group</code> Attribute von "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Der SELECT-Bereich Ihres SQL <em>müssen</em> nur enthalten <code>DISTINCT(devices.id)</code>.<br/> <br/>Der WHERE Abschnitt Ihres SQL <em>müssen</em> enthalten <code>WHERE @filter</code> so Open-AudIT weiß, Ihre Anfrage auf die entsprechenden Orgs zu beschränken. SQL, der diese Bedingung nicht enthält, führt dazu, dass die Gruppe nicht erstellt wird.<br/> <br/>Ein Beispiel für SQL, um alle Geräte auszuwählen, die das Debian OS ausführen - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Mit dem Lizenzendpunkt können Sie die Anzahl der auf Ihren Geräten gefundenen Lizenzen verfolgen.<br/> <br/>Um einen Eintrag zu erstellen, um Ihre Lizenzen zu verfolgen <em>müssen</em> einen Namen, eine Organisation, die Anzahl der erworbenen Lizenzen und den Namen der Software bereitzustellen. Auf dem Feld <code>match_string</code> Sie müssen den Namen der Software bereitstellen, die Sie verfolgen möchten, Sie können das Prozentzeichen (%) als Wildcard im match_string verwenden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Das Netzwerk sollte im Format 192.168.1.0/24 liegen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Die primären und optionalen Sekundärartikel sollten vollständig qualifiziert sein - dh, Geräte. Typ oder Software. Name.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Es gibt keine Notwendigkeit, etwas zu tun, wenn Sie Open-AudIT auf einem Linux-Server laufen.<br/><br/>Windows-Clients sind einfach gut und erfordern keine speziellen Aktionen, aber.... um diese Funktion zu aktivieren, muss das Audit-Skript lokal auf dem Ziel-Windows-System ausgeführt werden. Es kann nicht remote ausgeführt werden, wie wir mit WMI-Anrufen tun, wenn das Audit-Skript auf einem Windows-Computer ausgeführt wird, während eine zweite Windows-Maschine anvisiert wird. Dazu müssen wir das Audit-Skript auf die Ziel-Windows-Maschine kopieren und dann ausführen. Leider ist das Service-Konto, unter dem Apache läuft, das lokale System-Konto. Dieses Konto hat keinen Zugriff auf Remote (Netzwerk-basierte) Ressourcen. Um diese Frage zu bearbeiten, muss der Dienst unter einem anderen Konto ausgeführt werden. Es ist am einfachsten, nur das lokale Administrator-Konto zu verwenden, aber Sie können jedes Konto versuchen, das Sie mögen, solange es die erforderlichen Privilegien hat. Das lokale System-Konto hat so viel lokalen Zugriff wie das lokale Administrator-Konto.<br/><br/>Sehen Sie unsere Seite auf Aktivierung <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open-AudIT Apache Service unter Windows laufen</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Dies sind die Geräte, die in einem Rack leben.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Mit diesem Endpoint können Sie Ihre Cloud-Infrastrukturdaten hinzufügen. Open-AudIT wird dann mit ihrer nativen API in Ihre Wolken gelangen und Ihre Server zurückgeben, genau wie jedes andere Gerät in Open-AudIT.<br/> <br/><em>HINWEIS</em> - Um diese Funktion zu nutzen, wir <em>müssen</em> die Konfigurationselemente match_mac (für AWS) und match_hostname (für Azure) aktivieren. Dies geschieht automatisch zum ersten Mal, wenn eine Cloud-Entdeckung ausgeführt wird.<br/> <br/>Informationen fÃ1⁄4r Ihre Cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azulen</a> oder <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) erforderlich sind.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Schwachstellen, die auf Basis des NIST CVE-Feeds gemeldet werden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Wir installieren zunächst die Standardliste der Skripte mit den Standardoptionen. Diese Standardskripte können nicht gelöscht werden. Sie können nach Bedarf zusätzliche Skripte für die Nutzung durch Sie erstellen. Ihr Skript basiert auf einem der vorhandenen Skripte und hat benutzerdefinierte Optionen angewendet. Die Skripte können dann auf der Listenseite im Menü -> heruntergeladen werden Entdecken -> Audit Scripts -> Liste Audit Skripte<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Bei der Verwendung von Regex zum Matching kann auf der Seite eine hilfreiche Seite gefunden werden. <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP Website</a>. Einige Unterschiede zu Perl Regex finden Sie <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Hier.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets können leicht erstellt werden, um zu zeigen, was für Ihre Umgebung auf Ihren Dashboards spezifisch ist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Mit Open-AudIT Professional und Enterprise können Sie Entdeckungen, Report-Generation oder Baseline-Checks automatisieren und planen, wenn Sie wollen, und so oft Sie brauchen. Planen Sie Ihre Entdeckungen, um nachts zu laufen und Berichte zu erstellen und per E-Mail an Schlüsselpersonal jeden Morgen. Komplexe oder einfache Zeitplan, Geräte-Erkennung und Report-Generation ist nur einen Klick entfernt.<br/> <br/>Erstellen Sie individuelle Entdeckungspläne für jeden Subnet- oder AD-Controller, fügen Sie in Berichten hinzu, die für gezielte Publikum erstellt werden sollen. Entwickeln Sie einfache oder komplexe Termine, um die Bedürfnisse des Unternehmens zu unterstützen, Backups oder Auswirkungen auf den Betrieb zu vermeiden oder einfach die Fertigstellung der Last- und Beschleunigungsprüfung zu verbreiten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Sie können ein Skript mit allen Optionen für eine der vorhandenen Audit-Skripte erstellen - nicht nur Windows. AIX, ESX, Linux, OSX und Windows sind alle abgedeckt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Sie können das prozentuale %-Zeichen als Wildcard im match_string verwenden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Ihre Racks helfen, genau dort zu verfeinern, wo sich Ihre Geräte befinden.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>HINWEIS</strong> - Sie greifen auf diese URL vom lokalen Open-AudIT Server. Das heruntergeladene Skript wird nicht in der Lage sein, wenn Sie auf einem anderen Rechner laufen. Wenn Sie andere Maschinen überprüfen müssen, laden Sie das Skript von jedem Remote-Computer herunter, nicht mit einem Browser auf dem Open-AudIT Server selbst.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Ein CVE-Element, das keinen Filter enthält, um die betroffenen Elemente zu bestimmen.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API Für diese Funktion ist der Schlüssel erforderlich.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Ein JSON-Array von Geräte-IDs, die diesen Benchmark ausgeführt haben.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Ein JSON-Array von Objekten, die dem Softwarenamen der CVE entsprechen, bereichert mit dem von Open-AudIT abgerufenen Softwarenamen.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Ein JSON-Array von Werten, um auf diese Schwachstelle zu testen.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Ein JSON-Dokument mit den Orgs, die diesem Benutzer zugeordnet sind. Ausgenommene IDs <code>orgs.id</code>. Wenn ein Benutzer Zugang zu einem Org hat, haben sie Zugriff auf diese Orgs Nachkommen.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Ein JSON-Dokument mit den erforderlichen Attributen je nach <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Ein JSON-Dokument mit den erforderlichen Attributen, die die ausgewählten Discovery_scan_Optionen überschreiben.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Ein JSON-Dokument mit den erforderlichen Attributen, die die Optionen der Standard-Geräteanpassung überschreiben.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Ein JSON-Dokument mit den Rollen, die diesem Benutzer zugewiesen werden. Rollennamen aus <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Ein JSON-Objekt, das eine Reihe von Attributen enthält, um zu ändern, wenn das Spiel auftritt.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Ein JSON-Objekt, das eine Reihe von Attributen enthält.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Ein JSON-Objekt mit spezifischen Optionen.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Ein JSON-Objekt, das über eine Cloud-Entdeckung auftaucht.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Eine JSON-Darstellung, die die Einzelheiten der auszuführenden Warteschlange enthält.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Eine JSON-Darstellung der Felder für diese Integration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Eine JSON-Darstellung der einzelnen Tests und deren Ergebnisse auf allen Geräten, gegen die diese Basislinie durchgeführt wurde.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Eine JSON Darstellung der Tests, die diese Politik ausmachen.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Ein LAN kann über einen Router mit einem WAN verbunden werden.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Ein Metropolitan Area Network (MAN) ist ein großes Computernetzwerk, das in der Regel eine Stadt oder einen großen Campus überspannt.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed Discovery verwendet eine erste IP, um die IPs von anderen Geräten, die es weiß, abzurufen, fügt diese IPs in die Liste und scannt diese - wieder fragen nach IPs, die diese zusätzlichen Geräte wissen. Rinse und wiederholen. Es ist intelligent genug, um zu wissen, ob es bereits ein bestimmtes IP in seiner Ausführung gescannt hat und alle bereits gescannt (oder sogar auf der zu scannenden Liste).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Eine Subnet-Erkennung scannt die bereitgestellten IPs.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Eine URL, die dem Agenten zur Verfügung gestellt wird, die dann die Datei herunterladen und auf der lokalen Festplatte speichern wird.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Eine URL zu einer Datei zum Download.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Ein Backbone-Netzwerk ist Teil einer Computer-Netzwerk-Infrastruktur, die einen Pfad zum Austausch von Informationen zwischen verschiedenen LANs oder Sub-Netzwerken bietet. Ein Rückgrat kann verschiedene Netzwerke innerhalb desselben Gebäudes, über verschiedene Gebäude oder über eine breite Fläche miteinander verbinden.<br/><br/>Beispielsweise könnte ein großes Unternehmen ein Backbone-Netzwerk implementieren, um Abteilungen zu verbinden, die sich auf der ganzen Welt befinden. Die Ausrüstung, die die Abteilungsnetze miteinander verbindet, stellt das Netzrückgrat dar. Bei der Konzeption eines Netzrückgrats sind die Netzleistung und die Netzüberlastung kritische Faktoren zu berücksichtigen. Normalerweise ist die Backbone-Netzwerkkapazität größer als die der einzelnen angeschlossenen Netzwerke.<br/><br/>Ein weiteres Beispiel für ein Backbone-Netzwerk ist das Internet-Backbone, das das Set von Wide Area Networks (WANs) und Core Routern ist, die alle Netzwerke verbinden, die mit dem Internet verbunden sind.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Ein berechnetes Feld, das die Anzahl der Zeiten dieser Software anzeigt, wurde auf den Computern im ausgewählten Org gefunden (und seine Nachkommen falls konfiguriert).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Ein Campus-Netz (CAN) besteht aus einer Verbindung von LANs innerhalb eines begrenzten geografischen Gebiets. Die Vernetzungsgeräte (Schalter, Router) und Übertragungsmedien (optische Faser, Kupferanlage, Cat5 Verkabelung, etc.) sind fast vollständig im Besitz des Campus Mieter / Eigentümer (ein Unternehmen, Universität, Regierung, etc.).<br/><br/>Zum Beispiel ist ein Universitätscampus-Netzwerk wahrscheinlich eine Vielzahl von Campus-Gebäuden zu verbinden akademischen Hochschulen oder Abteilungen, die Bibliothek und Studentenwohnheime.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Ein geschlossener Port ist erreichbar (er empfängt und reagiert auf Nmap-Sondenpakete), aber es gibt keine Anwendung hören darauf. Sie können hilfreich sein, um zu zeigen, dass ein Host auf einer IP-Adresse (Host-Erkennung oder Ping-Scanning) und als Teil der OS-Erkennung liegt. Da geschlossene Ports erreichbar sind, kann es später ein Scannen wert sein, falls einige offen sind. Administratoren können diese Ports mit einer Firewall blockieren möchten. Dann würden sie im gefilterten Zustand erscheinen, als nächstes diskutiert.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Ein Sammler ist entweder im Collector oder Stand-Alone Modus.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Eine komma getrennte Liste der anwendbaren CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Eine komma getrennte Liste von Werten, von denen einer ausgewählt werden kann.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Ein Befehl zum Laufen. Wenn der Agent Windows basiert, wird dieser Befehl innerhalb des powerhell agent ausgeführt.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Ein Dashboard besteht aus drei Spalten und zwei Zeilen von dem, was wir nennen <i>Widgets</i>. Ein Widget ist einer Zusammenfassung sehr ähnlich, nur wir nehmen die Zusammenfassung Konzept ein bisschen weiter. Widgets werden auf einfache Weise mit ein paar Dropdown-Boxen erstellt - oder Sie können wählen, um Ihren eigenen SQL für vollständige Anpassungsfähigkeit zu verwenden.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Ein gefilterter Port wird als offen betrachtet (und löst die Geräteerkennung aus).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Ein globales Flächennetz (GAN) ist ein Netzwerk, das für die Unterstützung von Mobilgeräten über eine beliebige Anzahl von drahtlosen LANs, Satellitenabdeckungsbereichen usw. verwendet wird. Die zentrale Herausforderung in der mobilen Kommunikation besteht darin, Benutzerkommunikationen von einem lokalen Erfassungsbereich zum nächsten zu übertragen. Im IEEE-Projekt 802 umfasst dies eine Folge terrestrialer drahtloser LANs.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Ein Home Area Network (HAN) ist ein Wohn-LAN, das für die Kommunikation zwischen digitalen Geräten verwendet wird, die typischerweise im Haus eingesetzt werden, in der Regel eine kleine Anzahl von Personal Computern und Zubehör, wie Drucker und mobile Computergeräte. Eine wichtige Funktion ist der Austausch von Internetzugang, oft ein Breitband-Service über Kabel-TV oder digitale Teilnehmeranschluß (DSL) Anbieter.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Eine Liste der benutzerdefinierten TCP-Ports zum Scannen (22 ist SSH, 135 ist WMI, 62078 ist iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Eine Liste der benutzerdefinierten UDP-Ports zum Scannen (161 ist SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Ein lokales Netzwerk (LAN) ist ein Netzwerk, das Computer und Geräte in einem begrenzten geographischen Bereich wie Haus, Schule, Bürogebäude oder eng positionierte Gebäudegruppe verbindet. Jeder Computer oder Gerät im Netzwerk ist ein Knoten. Wired LANs basieren höchstwahrscheinlich auf Ethernet-Technologie. Neue Standards wie ITU-T G.hn bieten auch die Möglichkeit, ein kabelgebundenes LAN mit bestehenden Leitungen wie Koaxialkabeln, Telefonleitungen und Stromleitungen zu schaffen.<br/><br/>Die definierenden Eigenschaften eines LAN, im Gegensatz zu einem breiten Bereich Netzwerk (WAN), umfassen höhere Datenübertragungsraten, begrenzte geographische Reichweite und mangelnde Abhängigkeit von vermieteten Leitungen, um Konnektivität zu bieten. Aktuelle Ethernet- oder andere IEEE 802.3LAN-Technologien arbeiten mit Datenübertragungsraten bis zu 100 Gbit/s, standardisiert von IEEE im Jahr 2010. Derzeit 400 Gbit/s Ethernet wird entwickelt.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Ein Ort ist eine physische Adresse, die Geräte zugeordnet werden kann. Sie können die Koordinaten zuordnen und wenn Geräte zugewiesen sind, wird der Standort auf der Karte angezeigt, wenn Sie eine Open-AudIT Enterprise Lizenz haben.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Ein Standortname hilft Ihnen, diese Geräte in Zukunft zu finden.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Eine geringere Anzahl bedeutet, dass sie vor anderen Regeln angewendet wird.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Eine geringere Anzahl bedeutet, dass sie vor anderen Regeln angewendet wird. Das Standardgewicht beträgt 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Ein neuer Benutzer, der bei Open-AudIT angemeldet wurde und vom LDAP sever authentifiziert und autorisiert wurde. Dieser Benutzer wurde dann in Open-AudIT erstellt und eingeloggt. Erfolg.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Ein Paket ist ein Stück installierter Softare. Ein Paket hat einen Typ - Antivirus, genehmigt, Backup, verboten, Cloud, Firewall, ignoriert, Lizenz oder andere.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Ein Passwort (gespeichert als Hash), das die Anmeldung bei der Anwendung Authentifizierung ermöglicht.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Eine Person hat ein Konto in der Open-AudIT-Anwendung. Ihr Benutzerkonto hat eine Liste der zugehörigen Rollen und Organisationen. Die Rollen, die der Benutzer hat, bestimmen, was er tun kann. Die Organisationen, die ein Benutzer hat, bestimmt, auf welche Elemente sie handeln können.<br/><br/>Wenn ein Benutzer eine Operation (Erstellen, Lesen, Aktualisieren, Löschen) auf einer Sammelstelle anfordert, werden die Rollen konsultiert, um zu sehen, ob sie diese Aktion ausführen dürfen, dann werden die Orgs konsultiert, um festzustellen, ob die Sammelstelle zu einem Org gehört, auf den der Benutzer die Erlaubnis hat, zu handeln.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Ein persönliches Netzwerk (PAN) ist ein Computernetzwerk, das für die Kommunikation zwischen Computern und verschiedenen technologischen Informationsgeräten in der Nähe einer Person verwendet wird. Einige Beispiele für Geräte, die in einem PAN verwendet werden, sind Personalcomputer, Drucker, Faxgeräte, Telefone, PDAs, Scanner und sogar Videospielkonsolen. Ein PAN kann drahtgebundene und drahtlose Geräte umfassen. Die Reichweite eines PAN erstreckt sich typischerweise auf 10 Meter. Ein verdrahtetes PAN ist in der Regel mit USB- und FireWire-Verbindungen aufgebaut, während Technologien wie Bluetooth und Infrarot-Kommunikation typischerweise eine drahtlose PAN bilden.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Eine Abfrage ist im Wesentlichen eine SQL-Anweisung. Diese Aussage wird mit der automatischen Ergänzung des Limits gegen die Datenbank geführt, gefiltert, um nur auf die angeforderten Gegenstände zu bewerben und nur jene Gegenstände, die der Benutzer zur Ansicht berechtigt. Eine Abfrage kann mit Menü erstellt werden -> Verwalten -> Queries -> Queries erstellen. Abfragen enthalten ein org_id und sind daher auf die entsprechenden Benutzer beschränkt. Ein Benutzer muss die org_admin oder Reporter-Rolle(n) haben, um eine Abfrage zu erstellen, zu aktualisieren oder zu löschen. Alle Benutzer können eine Abfrage durchführen. Eine Abfrage verfügt über ein Namensattribut, das für den Menüpunkt sowie ein Menükategorieat verwendet wird. Dies sagt der Open-Audit GUI, in der die Abfrage platziert wird. Es gibt auch Menü-Anzeige, die auf <i>y</i> die Abfrage in der GUI aktivieren (<i>n</i> um zu verhindern, dass die Abfrage überhaupt erscheint). Die Abfrage würde immer noch laufen, wenn sie aufgerufen wird <code>id</code>, unabhängig von Menü-Anzeigen Wert.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Ein Regal ist eine Sammlung von Geräten, die eine Position und Höhe innerhalb des Regals zugeordnet sind. Eine Vorrichtung kann optional ein ihr zugeordnetes Bild aufweisen. Ein Rack wird in einer Reihe platziert. Wir haben ein sehr körniges System zur Positionierung von Zahnstangen geschaffen, das wie folgt ist. Auf der obersten Ebene (wie immer) ist die Organisation (Org). Ein Org kann mehrere Standorte haben (wie es immer der Fall war). Mit der Ergänzung der Racks-Funktion kann ein Standort jetzt ein oder mehrere Gebäude enthalten. Ein Gebäude kann eine oder mehrere Stockwerke enthalten. Eine Etage kann ein oder mehrere Zimmer enthalten. Ein Zimmer kann eine oder mehrere Reihen enthalten. Das klingt wie eine Menge Arbeit, aber Standardeinstellungen werden für Sie erstellt. Erstellen Sie einen neuen Standort und die Teilkomponenten werden automatisch für Sie erstellt. Wenn Sie mehr Gegenstände (Gebäude, Zimmer usw.) benötigen, können Sie sie hinzufügen, wie Sie möchten. Ein Regal kann auch Teil eines <i>pod</i> von Racks. Das Pod-Attribut arbeitet als Tag, anstatt als strenges hierarchisches Erbschaftsmodell nach Gebäuden, Böden usw.<br/><br/>Racks sind eine Funktion, die Open-AudIT Enterprise lizenzierten Kunden zur Verfügung steht.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Ein Routing-Domain oder Adressraum, in dem die IP-Adressen und MAC-Adressen eindeutig sind.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Eine Sample Cron-Datei für Linux ist unten. Dies sollte in';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Eine Sicherheitszone ist eine Verwaltungs- oder Policy-Domain innerhalb der Netzwerk-Domain.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Eine Samenentdeckung ist eine andere Art von Entdeckung, wo Sie die IP einer einzigen <i>Samen</i> Gerät. Dieses Gerät wird geprüft, und alle IPs, die es weiß, werden dann in die Liste der zu prüfenden IPs hinzugefügt. Dann werden diese Geräte geprüft und alle IPs, die sie kennen, werden auch in die Liste der IPs zur Prüfung hinzugefügt. Dieser Vorgang setzt sich dann innerhalb der vom Benutzer konfigurierten Parameter fort.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Eine kurze Beschreibung des Log-Eintrags.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Ein Speicherbereich-Netzwerk (SAN) ist ein spezielles Netzwerk, das Zugriff auf konsolidierte Datenspeicherung bietet. SANs werden in erster Linie verwendet, um Speichergeräte wie Festplatten-Arrays, Bandbibliotheken und optische Jukeboxen für Server zugänglich zu machen, so dass die Geräte wie lokal angebrachte Geräte am Betriebssystem erscheinen. Ein SAN verfügt typischerweise über ein eigenes Netz von Speichergeräten, die in der Regel nicht über das lokale Netzwerk von anderen Geräten zugänglich sind. Die Kosten und Komplexität der SANs sanken in den frühen 2000er Jahren auf Niveaus, die eine breitere Übernahme sowohl in Unternehmen als auch in kleinen bis mittleren Unternehmensumgebungen ermöglichten.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Eine Saite, die dem <code>software.name</code> Attribut. Sie können die Standard SQL-Wildcard von Prozent (%) verwenden, um einen oder mehrere Zeichen zu entsprechen.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Ein strukturiertes System zur Verwaltung sensibler Informationen';

$GLOBALS["lang"]['A timestamp.'] = 'Ein Zeitstempel.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Ein Benutzer hat eine primäre Org sowie eine Liste von Orgs sie zugreifen können. Ein Benutzer kombiniert dies mit einer Liste von zugewiesenen Rollen, die definieren, welche Aktionen sie auf den Orgs zugewiesenen Gegenständen übernehmen können. Die Kombination eines Benutzers <i>Orgs</i> und <i>Rollen</i> definieren, was sie innerhalb von Open-AudIT tun können und können.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Ein Benutzer hat eine Liste der zugehörigen Organisationen (orgs). Jeder Org, den der Benutzer hat, ermöglicht es ihnen, auf Elemente innerhalb dieses Orgs gemäß ihrer Rolle(n) zu handeln.<br/><br/>Alle Orgs außer dem Standardorg haben einen Elternteil. Denk an ein Org-Diagramm. Wenn ein Benutzer eine Erlaubnis auf einem Org hat, haben sie auch eine Erlaubnis für alle Nachkommen dieses Org.<br/><br/>Benutzer sind auch erlaubt Erlaubnis auf einem Kind org, die Elemente von Elternorgs für bestimmte Sammlungen zu sehen. Das sind: Dashboards, Discovery_scan_Optionen, Felder, Dateien, Gruppen, Abfragen, Berichte, Rollen, Regeln, Skripte, Zusammenfassungen, Widgets.<br/><br/>Vergessen Sie nicht, dass Sie eine körnige Kontrolle darüber haben, was die Nutzer mit Roles in Enterprise sehen und tun können.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Ein Benutzer hat eine Liste der zugehörigen Organisationen (orgs). Jeder Org, den der Benutzer hat, ermöglicht es ihnen, auf Elemente innerhalb dieses Orgs gemäß ihrer Rolle(n) zu handeln.<br/><br/>Alle Orgs außer dem Standardorg haben einen Elternteil. Denk an ein Org-Diagramm. Wenn ein Benutzer eine Erlaubnis auf einem Org hat, haben sie auch eine Erlaubnis für alle Nachkommen dieses Org.<br/><br/>Wir haben auch zulassen, dass ein Benutzer mit Erlaubnis auf einem Kind org die Elemente von Elternorgs für bestimmte Sammlungen sehen. Das sind: Dashboards, Discover_scan_Optionen, Felder, Dateien, Gruppen, Abfragen, Rollen, Regeln, Skripte, Zusammenfassungen, Widgets.<br/><br/>Vergessen Sie nicht, dass Sie eine körnige Kontrolle über das, was Benutzer sehen und tun können';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Ein virtuelles privates Netzwerk (VPN) ist ein Overlay-Netzwerk, bei dem einige der Verbindungen zwischen Knoten durch offene Verbindungen oder virtuelle Schaltungen in einem größeren Netzwerk (z.B. das Internet) statt durch physikalische Drähte getragen werden. Die Datenlinkschichtprotokolle des virtuellen Netzes sollen durch das größere Netzwerk getunnelt werden, wenn dies der Fall ist. Eine gemeinsame Anwendung ist eine sichere Kommunikation über das öffentliche Internet, aber ein VPN braucht nicht explizite Sicherheitsfunktionen wie Authentifizierung oder Inhaltsverschlüsselung. VPNs können beispielsweise verwendet werden, um den Verkehr verschiedener Nutzergemeinschaften über ein zugrunde liegendes Netzwerk mit starken Sicherheitsmerkmalen zu trennen.<br/><br/>VPN kann die beste Leistungsfähigkeit haben oder eine definierte Service Level Agreement (SLA) zwischen dem VPN-Kunden und dem VPN-Dienstleister haben. Im Allgemeinen hat ein VPN eine Topologie komplexer als Punkt-zu-Punkt.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Eine Sicherheitslücke, die die Verfügbarkeit beeinträchtigt, kann Angreifern erlauben, Dienste, Crash-Systeme zu stören oder Denial-of-Service (DoS) (None, Low, High) zu verursachen.';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Eine Sicherheitslücke, die die Vertraulichkeit beeinträchtigt, kann Angreifern erlauben, sensible Daten, wie persönliche Informationen, Anmeldeinformationen oder proprietäre Geschäftsdaten (None, Low, High) zu lesen.';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Eine Schwachstelle, die Integrität beeinflusst, kann Angreifern erlauben, Daten zu ändern, schädlichen Code zu injizieren oder Systemkonfigurationen zu ändern (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Eine Schwachstelle kann editiert werden und spezifischere Paketnamen, sofern die Anreicherungsdaten nicht ausreichend sind oder der generierte SQL nicht ganz korrekt ist.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Eine Schwachstelle in Open-AudIT kann als im Wesentlichen eine Abfrage gegen Ihre Datenbank gedacht werden, um Ihre potenzielle Exposition gegenüber einem gegebenen CVE-Bericht zu bestimmen. Eine Schwachstelle besteht aus dem CVE-Bericht, zusammen mit Anreicherungsdaten von FirstWave. Diese beiden Elemente werden kombiniert, um eine geeignete Abfrage zu erstellen, die automatisch von FirstWave heruntergeladen wird.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Ein Breitbandnetz (WAN) ist ein Computernetzwerk, das einen großen geographischen Bereich wie Stadt, Land oder sogar interkontinentale Entfernungen umfasst. Ein WAN verwendet einen Kommunikationskanal, der viele Arten von Medien wie Telefonleitungen, Kabel und Luftwellen kombiniert. Ein WAN nutzt oft Übertragungseinrichtungen, die von gemeinsamen Verkehrsträgern wie Telefongesellschaften bereitgestellt werden. WAN-Technologien funktionieren in der Regel an den unteren drei Schichten des OSI-Referenzmodells: der physikalischen Schicht, der Datenlinkschicht und der Netzwerkschicht.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN usw.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Dokumentation';

$GLOBALS["lang"]['API Key required.'] = 'API Key erforderlich.';

$GLOBALS["lang"]['API Result'] = 'API Ergebnis';

$GLOBALS["lang"]['About'] = 'Über uns';

$GLOBALS["lang"]['Above are the only required items.'] = 'Oben sind die einzigen benötigten Gegenstände.';

$GLOBALS["lang"]['Accept'] = 'Annahme';

$GLOBALS["lang"]['Access Model'] = 'Zugang zum Modell';

$GLOBALS["lang"]['access_point'] = 'Zugang';

$GLOBALS["lang"]['Access Point'] = 'Zugang';

$GLOBALS["lang"]['access_token'] = 'Zugang zu Token';

$GLOBALS["lang"]['Access Token'] = 'Zugang zu Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Zugriff auf den Admin$-Aktien und RPC verwendet das SMB2-Protokoll.';

$GLOBALS["lang"]['ack_by'] = 'Ack von';

$GLOBALS["lang"]['Ack By'] = 'Ack von';

$GLOBALS["lang"]['ack_date'] = 'Datum';

$GLOBALS["lang"]['Ack Date'] = 'Datum';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Aktion';

$GLOBALS["lang"]['Action'] = 'Aktion';

$GLOBALS["lang"]['action_audit'] = 'Prüfung der Tätigkeit';

$GLOBALS["lang"]['Action Audit'] = 'Prüfung der Tätigkeit';

$GLOBALS["lang"]['action_command'] = 'Befehl';

$GLOBALS["lang"]['Action Command'] = 'Befehl';

$GLOBALS["lang"]['action_date'] = 'Zeitpunkt';

$GLOBALS["lang"]['Action Date'] = 'Zeitpunkt';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Zugeteilte Aktionsgeräte';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Zugeteilte Aktionsgeräte';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Org zugewiesene Action-Geräte';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Org zugewiesene Action-Geräte';

$GLOBALS["lang"]['action_download'] = 'Downloads für Actions';

$GLOBALS["lang"]['Action Download'] = 'Downloads für Actions';

$GLOBALS["lang"]['action_uninstall'] = 'Uninstallieren';

$GLOBALS["lang"]['Action Uninstall'] = 'Uninstallieren';

$GLOBALS["lang"]['actioned'] = 'Maßnahmen';

$GLOBALS["lang"]['Actioned'] = 'Maßnahmen';

$GLOBALS["lang"]['actioned_by'] = 'Von';

$GLOBALS["lang"]['Actioned By'] = 'Von';

$GLOBALS["lang"]['actioned_date'] = 'Datum';

$GLOBALS["lang"]['Actioned Date'] = 'Datum';

$GLOBALS["lang"]['actions'] = 'Maßnahmen';

$GLOBALS["lang"]['Actions'] = 'Maßnahmen';

$GLOBALS["lang"]['Activate'] = 'Aktivieren';

$GLOBALS["lang"]['Activate Free License'] = 'Freie Lizenz aktivieren';

$GLOBALS["lang"]['Activate Key'] = 'Schlüssel aktivieren';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivieren Sie eine kostenlose Enterprise Lizenz';

$GLOBALS["lang"]['Active'] = 'Aktiv';

$GLOBALS["lang"]['Active / Active'] = 'Aktiv / Aktiv';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiv / Passiv';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory und OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad-Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad-Domain';

$GLOBALS["lang"]['ad_group'] = 'Gruppe';

$GLOBALS["lang"]['Ad Group'] = 'Gruppe';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Hinzufügen';

$GLOBALS["lang"]['Add Credentials'] = 'Anmeldeinformationen hinzufügen';

$GLOBALS["lang"]['Add Device'] = 'Gerät hinzufügen';

$GLOBALS["lang"]['Add Device to Application'] = 'Gerät zur Anwendung hinzufügen';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Gerät zum Cluster hinzufügen';

$GLOBALS["lang"]['Add Exception'] = 'Ausnahme hinzufügen';

$GLOBALS["lang"]['Add Field'] = 'Feld hinzufügen';

$GLOBALS["lang"]['Add If'] = 'Wenn Sie';

$GLOBALS["lang"]['Add Policies from Device'] = 'Richtlinien von Gerät hinzufügen';

$GLOBALS["lang"]['Add Policy'] = 'Weitere Informationen';

$GLOBALS["lang"]['Add Then'] = 'Fügen Sie dann hinzu';

$GLOBALS["lang"]['Add Your Credentials'] = 'Fügen Sie Ihre Anmeldeinformationen hinzu';

$GLOBALS["lang"]['Add image'] = 'Bild vergrößern';

$GLOBALS["lang"]['additional_items'] = 'Weitere Artikel';

$GLOBALS["lang"]['Additional Items'] = 'Weitere Artikel';

$GLOBALS["lang"]['address'] = 'Anschrift';

$GLOBALS["lang"]['Address'] = 'Anschrift';

$GLOBALS["lang"]['Address any nonconformities'] = 'Nichtkonformität angeben';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Prüfungsergebnisse und Korrekturmaßnahmen';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Erweiterte';

$GLOBALS["lang"]['Advanced'] = 'Erweiterte';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Nachdem eine Integration erstellt wurde, werden Sie bei der Betrachtung der Details einer Integration ein Feld namens Debug bemerken. Dies wird standardmäßig auf nein gesetzt. Wenn eine Integration ausgeführt wird, bietet sie zusätzliche Protokollierung. Debug sollte nicht wie ja gelassen werden. Dies liegt daran, dass die Debug-Ausgabe alles enthalten wird, was von externen Systemen abgerufen wird - einschließlich Artikeln wie WMI und SNMP-Berechtigungen. Die Debug-Option sollte nur verwendet werden, wenn ein Problem aufgetreten ist und Sie möchten tiefer eingraben, um zu sehen, ob Sie bestimmen können, warum.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Nach Abschluss der oben genannten, deinstallieren Sie den Agenten.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent? Entdeckung? Anmeldeinformationen?';

$GLOBALS["lang"]['agents'] = 'Agenten';

$GLOBALS["lang"]['Agents'] = 'Agenten';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agenteneinträge können erstellt werden, die eine Dauer, ein Netzwerk und ein Betriebssystem angeben. Wenn alle Tests übereinstimmen, fragt der Server den Agenten, Aktionen durchzuführen. Ist eine Prüfung nicht festgelegt, so ist sie von der <i>alle müssen übereinstimmen</i> Anforderung.<br/><br/>Sie können mehrere Agenten erstellen und den Server eine oder alle Agenteneinträge überprüfen lassen. Sie können (zum Beispiel) einen Agenten angeben, der sagt <i>Ist der Agent IP in diesem Subnetz, setzen Sie die location_id des Geräts</i>.<br/><br/>Ein anderes Beispiel könnte überhaupt kein Audit laufen, sondern ein Skript herunterladen und ausführen. Wenn der Agent mit Admin-Rechten installiert ist, können Sie jetzt Ihre Maschinen verwalten, ohne zu öffnen <strong>alle</strong> Häfen von ihm zur Welt.<p>Enabling Advanced Agents bedeutet, dass ein Agent angewiesen werden kann, jede Datei herunterzuladen und jeden Befehl auszuführen. <strong>WAREN</strong>: Das kommt mit Sicherheitsrisiken. Diese Konfiguration wird <strong>nur</strong> Funktion beim Betrieb von Open-AudIT mit HTTPS und einem gültigen (geplante Zertifizierungsstelle)-Zertifikat für </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Alandinseln';

$GLOBALS["lang"]['Albania'] = 'Albanien';

$GLOBALS["lang"]['Albanian'] = 'Albanien';

$GLOBALS["lang"]['alert_style'] = 'Wie man sieht';

$GLOBALS["lang"]['Alert Style'] = 'Wie man sieht';

$GLOBALS["lang"]['Algeria'] = 'Algerien';

$GLOBALS["lang"]['algorithm'] = 'Algorithmen';

$GLOBALS["lang"]['Algorithm'] = 'Algorithmen';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Alle';

$GLOBALS["lang"]['All IPs'] = 'Alle IPs';

$GLOBALS["lang"]['All Policies'] = 'Alle Richtlinien';

$GLOBALS["lang"]['All Queued Items'] = 'Alle Queued Artikel';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Alle Sammlungen URLs verwenden das Format';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Alle Geräteuntertabellen enthalten ein paar wichtige Spalten.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Alle Geräte mit einem Typ wie Computer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Alle Geräte mit einem Computer oder Router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Alle Geräte ohne Schalter und Drucker.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Alle Geräte ohne Schalter und Drucker. Im Wesentlichen dasselbe wie die obige Abfrage.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Alle regelmäßigen Entdeckungsoptionen sind auch für den Einsatz in Device Seed Discoveries verfügbar.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Alle Aufgaben können in Windows und Linux gleich angelegt werden. Aufgaben verwenden die CRON-Methode für die Ablaufplanung.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Zusammen mit dieser Informationsanfrage senden wir an FirstWave-Datenpunkte zurück, die uns einige dringend benötigte Informationen über die Funktion und die Installation geben.';

$GLOBALS["lang"]['Also can be created from the'] = 'Auch kann aus dem';

$GLOBALS["lang"]['Alternatives'] = 'Alternativen';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Felder';

$GLOBALS["lang"]['American Samoa'] = 'Amerikanische Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Eine Active Directory-Entdeckung wird Active Directory für eine Liste von Netzwerken abfragen und die zugehörigen IPs wie eine regelmäßige Subnet-Entdeckung scannen.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Eine Org (Organisation) ist der Besitzer der meisten Artikel in Sammlungen innerhalb von Open-AudIT. Mit Ausnahme globaler Elemente wie <i>Konfiguration</i>, die meisten Artikel werden einem Org zugeordnet (besitzt). Ein Benutzer hat Zugriff auf diese Elemente in einer Sammlung, dass unten zu einem Org der Benutzer hat die Erlaubnis auf.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Eine Anwendung akzeptiert aktiv TCP-Verbindungen, UDP-Datengramme oder SCTP-Vereinbarungen auf diesem Port. Diese zu finden ist oft das primäre Ziel der Port-Scanning. Sicherheitsgesinnte wissen, dass jeder offene Hafen ein Anfall ist. Angreifer und Pen-Tester wollen die offenen Ports ausnutzen, während Administratoren versuchen, sie mit Firewalls zu schließen oder zu schützen, ohne legitime Benutzer zu vereiteln. Offene Ports sind auch für Nicht-Sicherheits-Scans interessant, weil sie Dienste zur Nutzung im Netzwerk anzeigen.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Eine Reihe von <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Eine Reihe von <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Eine Reihe von Objekten, die externe Links zu weiteren Informationen darstellen.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Eine gebildete Vermutung zur Identität und Art des Geräts';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Ein verschlüsseltes JSON-Dokument mit den erforderlichen Attributen je nach <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Ein privates Unternehmen ist ein Netzwerk, das eine einzelne Organisation baut, um ihre Bürostandorte (z.B. Produktionsstandorte, Hauptbüros, Fernbüros, Geschäfte) miteinander zu verbinden, damit sie Computerressourcen teilen können.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Ein Eintrag kann über die Web-Schnittstelle erstellt werden, wenn der aktuelle eingeloggte Benutzer eine Rolle hat, die die';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Ein Beispiel JSON POST Körper ist unten. Dies sollte an der Formularposition "Daten" angebracht werden.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Ein Beispiel Widget SQL zeigt Geräte pro Standort gezählt.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Ein bestehender Open-AudIT-Benutzer wurde vom LDAP-Server authentifiziert und autorisiert. Erfolg.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Ein Hinweis auf das von dieser Website benötigte Serviceniveau.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Ein internes Feld, das anzeigt, ob die Entdeckung abgeschlossen ist.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Ein offener, gefilterter Port gilt als offen (und löst die Geräteerkennung aus).<br/>Bisher, Open-Aud IT betrachtete eine Nmap Antwort';

$GLOBALS["lang"]['An optional GeoCode'] = 'Ein optionaler Geocode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Ein optionales Passwort, um sudo zu verwenden.';

$GLOBALS["lang"]['Analyzed'] = 'Analysiert';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Und schließlich, klicken Sie auf Senden, um diese Entdeckung auszuführen.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Und wenn etwas Falsches geht?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Und schließlich klicken <i>Einreichung</i> Ihre Open-AudIT Auth-Methode für Entra zu erstellen.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Und schließlich, nicht so viel ein Sicherheitsproblem - mehr Frieden des Verstandes. Die Datenstrukturen sind offen und dokumentiert. Sie können sie sehen';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Und geben Sie einen Namen - wir empfehlen Open-AudIT ≠, aber Sie können es alles nennen, was Sie möchten. Stellen Sie sicher, dass die Option für <i>Integrieren Sie jede andere Anwendung, die Sie nicht in der Galerie finden (Non-Galerie)</i> wird ausgewählt. Und dann klicken <i>Erstellung<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Und so viel mehr.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Anhang A Kontrollen';

$GLOBALS["lang"]['Antarctica'] = 'Antarktis';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Pakete';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua und Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle TCP-Ports (komma seperated, keine Leerzeichen) möchten Sie von dieser Entdeckung ausschließen. Nur bei Verwendung von Nmap 7+ verfügbar.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle UDP-Ports (comma seperated, keine Leerzeichen) möchten Sie von dieser Entdeckung ausschließen. Nur bei Verwendung von Nmap 7+ verfügbar.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Alle zusätzlichen Unterlagen, die Sie benötigen.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Alle zusätzlichen Notizen, die Sie machen möchten.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Alle Attribute, gefolgt von einem * zeigen, dass CVSS-Daten weniger als v4 verwendet wurden, um dieses Feld abzuschließen. Standardmäßig versuchen wir, v4 Felder zu verwenden, aber wenn sie nicht bevölkert werden, werden wir auf die vorherige Version(n) für Attribute zurückfallen.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Alle Geräte werden diesem Org zugewiesen, wenn sie ihr Audit-Skript (falls gesetzt) ausführen.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alle Geräte werden diesem Org zugewiesen, wenn sie ihr Audit-Skript (falls gesetzt) ausführen. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Alle entdeckten Geräte werden diesem Standort zugewiesen, wenn eingestellt. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Alle entdeckten Geräte werden diesem Standort zugeordnet, wenn sie ihr Audit-Skript (falls gesetzt) ausführen.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Alle entdeckten Geräte werden diesem Standort zugeordnet, wenn sie ihr Audit-Skript (falls gesetzt) ausführen. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Alle entdeckten Geräte werden diesem Org zugewiesen, wenn gesetzt. Wenn nicht gesetzt, werden sie dem <code>org_id</code> von dieser Entdeckung. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Alle auf diese Weise gefundenen Dateien werden in der <i>ausführbar</i> Tabelle nach jeder anderen Gerätekomponente.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Jeder benötigte Filter. HINWEIS: Wenn Typ = Verkehr, steht dies für die Schrift-Akku.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Alle spezifischen TCP-Ports, die Sie testen möchten (comma seperated, no Leerzeichen).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Alle spezifischen UDP-Ports, die Sie testen möchten (comma seperated, no Leerzeichen).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Alle hochgeladenen Bilder werden hier platziert.';

$GLOBALS["lang"]['Application'] = 'Anwendungsbereich';

$GLOBALS["lang"]['Application Definitions'] = 'Anwendungsbestimmungen';

$GLOBALS["lang"]['application_id'] = 'Anwendungs-ID';

$GLOBALS["lang"]['Application ID'] = 'Anwendungs-ID';

$GLOBALS["lang"]['Application Licenses'] = 'Bewerbungslizenzen';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Anwendung, Betriebssystem oder Hardware.';

$GLOBALS["lang"]['applications'] = 'Anwendungen';

$GLOBALS["lang"]['Applications'] = 'Anwendungen';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Anwendungen sind nur eine Enterprise-Funktion.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'In Open-AudIT 2.2 werden Anwendungen eingeführt, um das Konzept als Weiterentwicklung zu erweitern.';

$GLOBALS["lang"]['applied'] = 'Angemeldet';

$GLOBALS["lang"]['Applied'] = 'Angemeldet';

$GLOBALS["lang"]['Approved'] = 'genehmigt';

$GLOBALS["lang"]['Approved Packages'] = 'Genehmigte Pakete';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['Arabic'] = 'Arabisch';

$GLOBALS["lang"]['architecture'] = 'Architektur';

$GLOBALS["lang"]['Architecture'] = 'Architektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Sind Sie sicher, dass Sie diesen Eintrag löschen möchten?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Sind Sie sicher, dass Sie diesen Ausgabeteil löschen möchten?';

$GLOBALS["lang"]['Are you sure?'] = 'Bist du sicher?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Bist du sicher? Dadurch werden alle Warteschlangeneinträge entfernt und die verbleibenden IPs nicht entdeckt.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Bist du sicher? Dies wird die Warteschlangen-Verarbeitungszählung zurücksetzen und kann Belastung auf dem Server verursachen.';

$GLOBALS["lang"]['area'] = 'Gebiet';

$GLOBALS["lang"]['Area'] = 'Gebiet';

$GLOBALS["lang"]['Argentina'] = 'Argentinien';

$GLOBALS["lang"]['Armenia'] = 'Armenien';

$GLOBALS["lang"]['arp'] = 'A.';

$GLOBALS["lang"]['Arp'] = 'A.';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'In Erinnerung daran, wie Berechtigungen in Open-AudIT funktionieren, siehe';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Als Ergebnis, wir <strong>müssen</strong> haben die admin$-Aktien für die Entdeckungs-Anmeldeinformationen Benutzer verfügbar. Bitte überprüfen Sie die Ziel-Windows-Maschine bietet <i>Schreiben</i> Zugriff auf die Erkennungsberechtigungen Benutzer.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Wie oben erwähnt, sprechen die Entwickler nicht alle angebotenen Übersetzungssprachen. Das bedeutet, dass wir nicht mit der Richtigkeit, dem übersetzten Text überprüfen können. Wir versuchen eine Cursory-Review. Wenn Sie etwas sehen, das nicht korrekt übersetzt wird, können Sie es selbst ändern. Bearbeiten Sie die entsprechende Sprachdatei (wie unten) und finden Sie den zu ändernden Text. Vielleicht existiert es nicht und man muss es hinzufügen. Ändern Sie einfach den Text, speichern Sie die Datei und aktualisieren Sie die Seite. Keine Notwendigkeit, alle Dienstleistungen / Produkte neu zu starten, damit es wirksam wird. Sie müssen möglicherweise Ihren Browser aktualisieren.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Wie bei den OpenSCAP Benchmarks - <i>Versuchen Sie nicht, eine der Einstellungen in diesem Benchmark zu implementieren, ohne sie zunächst in einer nicht funktionierenden Umgebung zu testen. Die Macher dieses Benchmarks übernehmen keinerlei Verantwortung für seine Nutzung durch andere Parteien und machen keine Garantien, ausgedrückt oder impliziert, über seine Qualität, Zuverlässigkeit oder andere Merkmale.</i><br/><br/>Ernsthaft, nicht blind starten <i>Befestigung</i> Probleme, die nach Durchführung einer Benchmark ohne erste gründliche Tests in einer nicht-produktion, identischen Umgebung.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Entsprechend den Attributen für Geräteumgebungen. Produktion, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Da das Audit-Skript bash verwendet, können Sie die Wildcard von * verwenden, wenn Sie Verzeichnisse und Ausschlüsse definieren.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Wie üblich, gehen Sie zum Menü → Verwaltung → Integrationen → Integration erstellen. Wie oben, wenn Sie auf Linux laufen und haben NMIS auf dem gleichen Server, müssen Sie nichts anderes tun als klicken <i>Einreichung</i>. Ich kann es nicht einfacher machen als das.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Während wir Discoveries betreiben und Geräteergebnisse sammeln, bevölkern wir die Liste der Netzwerke. Die Blessed Subnets Funktion verwendet diese Liste von Netzwerken, um nur Daten von Geräten in diesen Netzwerken zu akzeptieren.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Wie Sie Collectors registriert haben, wählen Sie bitte, wo Sie diese Entdeckung durchführen.';

$GLOBALS["lang"]['Ask me later'] = 'Fragen Sie mich später';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Bitten Sie die Gemeinschaft um Hilfe oder um Antworten für andere.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Asset ID'] = 'Vermögensausweis';

$GLOBALS["lang"]['asset_ident'] = 'Anlage Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Anlage Ident';

$GLOBALS["lang"]['asset_number'] = 'Vermögensnummer';

$GLOBALS["lang"]['Asset Number'] = 'Vermögensnummer';

$GLOBALS["lang"]['asset_tag'] = 'Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Gerät der Anwendung zuordnen';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Gerät dem Cluster zuordnen';

$GLOBALS["lang"]['Assign Device to Location'] = 'Zuweisen von Gerät zu Standort';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Gerät der Organisation zuweisen';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Geräte zuordnen';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Einrichtungen der Organisation zuordnen';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS Manager oder Team zuweisen';

$GLOBALS["lang"]['Assign an Operator'] = 'Zuweisen eines Betreibers';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Geben Sie diesem Org alle geprüften Geräte zu. Lassen Sie leer, um das Gerät im aktuell zugewiesenen Org zu verlassen (oder Standardeinstellungen festzulegen).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Das Gerät einem Standort zuordnen';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Das Gerät einem Org zuordnen';

$GLOBALS["lang"]['Assigned To'] = 'Zugeteilt';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Entdeckte Geräte zuordnen';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Zur Zeit können wir netstat_ports, Software und Benutzer verwenden.';

$GLOBALS["lang"]['attached_device_id'] = 'Befestigte Geräte-ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Befestigte Geräte-ID';

$GLOBALS["lang"]['attached_to'] = 'Angefügt an';

$GLOBALS["lang"]['Attached To'] = 'Angefügt an';

$GLOBALS["lang"]['attachment'] = 'Anlage';

$GLOBALS["lang"]['Attachment'] = 'Anlage';

$GLOBALS["lang"]['attachments'] = 'Anhänge';

$GLOBALS["lang"]['Attachments'] = 'Anhänge';

$GLOBALS["lang"]['attack_complexity'] = 'Angriffskomplexität';

$GLOBALS["lang"]['Attack Complexity'] = 'Angriffskomplexität';

$GLOBALS["lang"]['attack_requirements'] = 'Angriffsbedingungen';

$GLOBALS["lang"]['Attack Requirements'] = 'Angriffsbedingungen';

$GLOBALS["lang"]['attack_vector'] = 'Angriffsvektor';

$GLOBALS["lang"]['Attack Vector'] = 'Angriffsvektor';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Versuchen Sie, das Gerät zu pingen, wenn wir nicht Auditing localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attribute';

$GLOBALS["lang"]['Attributes'] = 'Attribute';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attribute werden für Open-AudIT gespeichert, um für bestimmte Felder zu verwenden, derzeit basieren alle Felder auf den Geräten, Standorten, Orgs und Abfragetabellen. Die Attribute, die Sie bearbeiten können, sind den folgenden Spalten zugeordnet: Klasse, Umwelt, Status & Typ.';

$GLOBALS["lang"]['Audit'] = 'Prüfung';

$GLOBALS["lang"]['Audit AIX'] = 'Prüfung AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Prüfung DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Prüfung ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Prüfung Linux';

$GLOBALS["lang"]['audit_log'] = 'Prüfungsprotokoll';

$GLOBALS["lang"]['Audit Log'] = 'Prüfungsprotokoll';

$GLOBALS["lang"]['Audit Mount Point'] = 'Prüfung Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Mein PC testen';

$GLOBALS["lang"]['Audit Netstat'] = 'Finanzen';

$GLOBALS["lang"]['Audit OSX'] = 'Prüfung OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Ergebnis Eingabe';

$GLOBALS["lang"]['Audit Software'] = 'Prüfungssoftware';

$GLOBALS["lang"]['Audit Status'] = 'Prüfungsstatus';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Prüfung Win32 Erzeugnis';

$GLOBALS["lang"]['Audit Windows'] = 'Prüfung Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Prüfen Sie das Gerät';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australien';

$GLOBALS["lang"]['Austria'] = 'Österreich';

$GLOBALS["lang"]['Auth'] = 'Authentizität';

$GLOBALS["lang"]['auth'] = 'Authentizität';

$GLOBALS["lang"]['Auth Methods'] = 'Auth-Methoden';

$GLOBALS["lang"]['Authenticate only'] = 'Authenticate nur';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protokoll zur Authentifizierung';

$GLOBALS["lang"]['authority_key_ident'] = 'Schlüsselnummer';

$GLOBALS["lang"]['Authority Key Ident'] = 'Schlüsselnummer';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Autoerneuerung';

$GLOBALS["lang"]['Auto Renew'] = 'Autoerneuerung';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto bevölkert durch den Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenewing';

$GLOBALS["lang"]['automatable'] = 'Automatisierbar';

$GLOBALS["lang"]['Automatable'] = 'Automatisierbar';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'automatisch auf Basis des Collectors OS besiedelt.';

$GLOBALS["lang"]['availability'] = 'Verfügbarkeit';

$GLOBALS["lang"]['Availability'] = 'Verfügbarkeit';

$GLOBALS["lang"]['Available Benchmarks'] = 'Verfügbare Benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Awaiting Analyse';

$GLOBALS["lang"]['Azerbaijan'] = 'Asbest';

$GLOBALS["lang"]['Azerbaijani'] = 'Aserbaidschan';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU insgesamt';

$GLOBALS["lang"]['Backbone network'] = 'Backbone Netzwerk';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesch';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Verboten';

$GLOBALS["lang"]['Banned Packages'] = 'Verbotene Pakete';

$GLOBALS["lang"]['bar_code'] = 'Barcode';

$GLOBALS["lang"]['Bar Code'] = 'Barcode';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Basis DN';

$GLOBALS["lang"]['base_score'] = 'Basispunkte';

$GLOBALS["lang"]['Base Score'] = 'Basispunkte';

$GLOBALS["lang"]['base_severity'] = 'Basisstärke';

$GLOBALS["lang"]['Base Severity'] = 'Basisstärke';

$GLOBALS["lang"]['based_on'] = 'Basierend auf';

$GLOBALS["lang"]['Based On'] = 'Basierend auf';

$GLOBALS["lang"]['baseline'] = 'Basel';

$GLOBALS["lang"]['Baseline'] = 'Basel';

$GLOBALS["lang"]['baseline_id'] = 'Basler ID';

$GLOBALS["lang"]['Baseline ID'] = 'Basler ID';

$GLOBALS["lang"]['baselines'] = 'Basis';

$GLOBALS["lang"]['Baselines'] = 'Basis';

$GLOBALS["lang"]['baselines_policies'] = 'Grundlagenpolitik';

$GLOBALS["lang"]['Baselines Policies'] = 'Grundlagenpolitik';

$GLOBALS["lang"]['Baselines Policy'] = 'Grundlagenpolitik';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Details zur Basispolitik';

$GLOBALS["lang"]['baselines_results'] = 'Ergebnisse der Basis';

$GLOBALS["lang"]['Baselines Results'] = 'Ergebnisse der Basis';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Basislinien können Netstat-Ports, Benutzer und Software vergleichen.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Basislinien ermöglichen es Ihnen, Auditdaten mit einer Reihe von Attributen zu kombinieren, die Sie zuvor definiert haben (Ihre Basislinie), um die Einhaltung von Geräten zu bestimmen.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Grundlagen für Gerätevergleich';

$GLOBALS["lang"]['Basic'] = 'Basis';

$GLOBALS["lang"]['Basque'] = 'Basken';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Weil wir versuchen, so transparent wie möglich zu sein, sind hier Ihre tatsächlichen Daten, die wir senden.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'In der Lage zu bestimmen, welche Maschinen in der gleichen Weise konfiguriert sind, ist ein wesentlicher Teil der Systemverwaltung und -prüfung – und jetzt wird darüber berichtet, dass es einfach und automatisiert wird. Sobald Sie Ihre Basislinie definieren, wird sie automatisch auf einem bestimmten Zeitplan gegen einen Satz von Geräten laufen. Die Ausgabe dieser ausgeführten Basislinien wird für die Web-Betrachtung, Import in ein Drittland-System oder sogar als gedruckter Bericht zur Verfügung stehen.<br/><br/>Für Audit- und Managementzwecke kann es vorteilhaft sein, einzelne Vorrichtungen gegen ein feststehendes, bekanntes gutes Gerät zu stützen. Basislinien ermöglichen es Ihnen, Auditdaten mit einer Reihe von Attributen zu kombinieren, die Sie zuvor definiert haben (Ihre Basislinie), um die Einhaltung von Geräten zu bestimmen.';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belgien';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Unten ist ein Beispiel für das benötigte csv-Format.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Unter diesen Zeilen befinden sich die Variablen in das Skript. Im Anschluss an unser früheres Beispiel wird das Linux-Audit-Skript mit unserem Verzeichnis wie';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Unten sehen Sie ein Beispiel Org Chart. Wenn ein Benutzer eine Berechtigung auf dem <i>Finanzen</i> Org, sie haben auch die Erlaubnis auf den Nachkommen Orgs von Dept A, B & C. Dies ist unabhängig von der angeforderten Sammlung.<br/><br/>Wenn die angeforderte Sammlung die Aufsteiger erlaubt, hat der Benutzer auch Zugriff auf die Produkte der Firma #1 und Default Org. Dies ist für (wie oben) Abfragen, Gruppen, et al.<br/><br/>Hinweis - Ein Benutzer kann Zugriff auf eine Abfrage von Default Org haben, aber das ist die Abfrage selbst nicht das Ergebnis. Das Ergebnis zeigt nur Geräte, auf die der Benutzer Zugriff hat - IE-Geräte aus Finance A und Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmarking';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Tasks werden automatisch erstellt, wenn ein Benchmark erstellt wird.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark Ausführung und Verarbeitung kann eine lange Zeit dauern, daher die Präferenz, sie zu planen und nicht auszuführen ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Ausnahmen';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Ausnahmen';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks Politik';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks Politik';

$GLOBALS["lang"]['benchmarks_result'] = 'Ergebnisse der Benchmarks';

$GLOBALS["lang"]['Benchmarks Result'] = 'Ergebnisse der Benchmarks';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks werden erstellt, indem ein Betriebssystem und eine Version bereitgestellt werden, kombiniert mit einer bestimmten Anleitung und einer Liste von Maschinen, um es auszuführen. Nach der Erstellung werden Benchmarks gegen die Maschinenliste in einem Zeitplan ausgeführt.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks für Best Practise Configuration';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks bieten Sicherheitsempfehlungen für Ihre Computer und nutzen die OpenSCAP-Tools und -Richtlinien.<p><i>Von der OpenSCAP Homepage:</i> In der sich ständig verändernden Welt der Computersicherheit, in der täglich neue Sicherheitslücken entdeckt und gepatelt werden, muss die Durchsetzung der Sicherheitskonformität ein kontinuierlicher Prozess sein. Es muss auch eine Möglichkeit enthalten, Anpassungen an die Politik sowie regelmäßige Bewertung und Risikoüberwachung vorzunehmen. Das OpenSCAP-Ökosystem bietet Tools und anpassbare Richtlinien für eine schnelle, kostengünstige und flexible Umsetzung dieser Prozesse.</p>';

$GLOBALS["lang"]['Benefits'] = 'Vorteile';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Best Practises';

$GLOBALS["lang"]['Best Practises'] = 'Best Practises';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Körper';

$GLOBALS["lang"]['Body'] = 'Körper';

$GLOBALS["lang"]['Bolivia'] = 'Bolivien';

$GLOBALS["lang"]['Boolean'] = 'Boolen';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolen y/n';

$GLOBALS["lang"]['boot_device'] = 'Boot-Gerät';

$GLOBALS["lang"]['Boot Device'] = 'Boot-Gerät';

$GLOBALS["lang"]['bootable'] = 'Booten';

$GLOBALS["lang"]['Bootable'] = 'Booten';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnien und Herzegowina';

$GLOBALS["lang"]['Both forms of'] = 'Beide Formen';

$GLOBALS["lang"]['Botswana'] = 'Botsuana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilien';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasilianisches Portugiesisch';

$GLOBALS["lang"]['Breaking it Down'] = 'Aufbrechen';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britisches Territorium im Indischen Ozean (Chagos Archipel)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britische Jungferninseln';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Durchsuchen Sie den Baum zu Console Root -> Komponentendienste -> Computer -> Mein Computer<br/><br/>Rechtsklick auf <i>Mein Computer</i> und Eigenschaften auswählen<br/><br/>Wählen Sie die <i>Default Eigenschaften</i> Register';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Insgesamt';

$GLOBALS["lang"]['Btu Total'] = 'Insgesamt';

$GLOBALS["lang"]['build_number'] = 'Baunummer';

$GLOBALS["lang"]['Build Number'] = 'Baunummer';

$GLOBALS["lang"]['build_number_full'] = 'Vollständige Nummer erstellen';

$GLOBALS["lang"]['Build Number Full'] = 'Vollständige Nummer erstellen';

$GLOBALS["lang"]['Building'] = 'Gebäude';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'baut Vertrauen mit Kunden und Partnern';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarien';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgarien';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Formular für Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attribute';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk Edit Auswahlen, die nach dem Klick auf die nächste Seite nicht ausgewählt bleiben.';

$GLOBALS["lang"]['Burkina Faso'] = 'Das ist nicht so.';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Geschäftsanforderungen';

$GLOBALS["lang"]['Business Requirements'] = 'Geschäftsanforderungen';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Aber ich habe nur Windows Client Maschinen verfügbar!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Aber ich möchte nicht die Sprachdatei jedes Mal ändern müssen, wenn ich aktualisieren!';

$GLOBALS["lang"]['Buy'] = 'Kaufen';

$GLOBALS["lang"]['Buy More'] = 'Mehr erfahren';

$GLOBALS["lang"]['Buy More Licenses'] = 'Mehr Lizenzen kaufen';

$GLOBALS["lang"]['By'] = 'von';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Standardmäßig integrieren wir alle Geräte mit ihrem nmis_manage Attribut, das auf <i>y</i>. Mit 4.2.0 versenden wir auch eine Regel, die sagt <i>Wenn wir ein Gerät entdecken und es eine gültige SNMP OID hat, markieren Sie dieses Gerät wie von NMIS verwaltet</i>. Natürlich können Sie das deaktivieren, wenn es nicht das ist, was Sie wollen.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Standardmäßig überspringen wir die Zertifikatsvalidierung, weil Kunden tendenziell selbstsignierte Zertifikate verwenden. Um die Zertifikatsvalidierung zu aktivieren, bearbeiten Sie die untenstehende Datei';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maske';

$GLOBALS["lang"]['cli_config'] = 'CLI Konkret';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konkret';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs mit einem Status der empfangenen, erwarteten Analyse, einer Analyse unterzogen, abgelehnt. Diese CVEs (meist) enthalten keine ausreichenden Informationen, um eine korrekte SQL-Abfrage zu erstellen.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Berechnet von der Entdeckung.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Berechnete Gesamtzahl der gültigen IP-Adressen für dieses Netzwerk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Berechnet nach Fertigstellung, die Zeit zur Ausführung dieses Artikels.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Berechnet bei laufender Integration und enthält eine JSON-Darstellung der Geräte in dieser Integration. Alle Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Berechnet bei laufender Integration und enthält eine JSON-Darstellung der Standorte in dieser Integration. Alle Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der von Open-AudIT ausgewählten Geräte.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der ausgewählten Geräte das externe System.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der zu aktualisierenden Geräte im externen System.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der in Open-AudIT aktualisierten Geräte.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Rufen Sie eine Eingabeaufforderung an, indem Sie auf Start und Suche nach <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodscha';

$GLOBALS["lang"]['Cameroon'] = 'Kampanien';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Netzwerk des Campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Kann sein <code>active</code>, <code>passive</code> oder leer.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Kann sein <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Kann sein <code>auto</code>, <code>fixed</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Kann sein <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Kann sein <code>line</code>, <code>pie</code> oder <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Kann sein <code>user</code> oder <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Kann durch Entdeckung oder Benutzer eingestellt werden.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Kann durch Entdeckung oder Benutzer eingestellt werden. Benutzt die ID vom Standorttabelle.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kann der Benutzer diesen Artikel bearbeiten.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Abbrechen';

$GLOBALS["lang"]['capabilities'] = 'Fähigkeiten';

$GLOBALS["lang"]['Capabilities'] = 'Fähigkeiten';

$GLOBALS["lang"]['Capacity'] = 'Kapazität';

$GLOBALS["lang"]['Cape Verde'] = 'Kap Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapital';

$GLOBALS["lang"]['caption'] = 'Aufnahme';

$GLOBALS["lang"]['Caption'] = 'Aufnahme';

$GLOBALS["lang"]['Catalan'] = 'Katalanisch';

$GLOBALS["lang"]['Cayman Islands'] = 'Cayman Inseln';

$GLOBALS["lang"]['Cellular Details'] = 'Zellische Details';

$GLOBALS["lang"]['Central African Republic'] = 'Zentralafrikanische Republik';

$GLOBALS["lang"]['certificate'] = 'Bescheinigung';

$GLOBALS["lang"]['Certificate'] = 'Bescheinigung';

$GLOBALS["lang"]['certificate_file'] = 'Zertifikat Datei';

$GLOBALS["lang"]['Certificate File'] = 'Zertifikat Datei';

$GLOBALS["lang"]['certificate_name'] = 'Bezeichnung der Bescheinigung';

$GLOBALS["lang"]['Certificate Name'] = 'Bezeichnung der Bescheinigung';

$GLOBALS["lang"]['certificates'] = 'Zertifikate';

$GLOBALS["lang"]['Certificates'] = 'Zertifikate';

$GLOBALS["lang"]['Certification'] = 'Zertifizierung';

$GLOBALS["lang"]['Certification Audit'] = 'Zertifizierung Audit';

$GLOBALS["lang"]['Certification Process'] = 'Zertifizierungsverfahren';

$GLOBALS["lang"]['Chad'] = 'Tschad';

$GLOBALS["lang"]['Change'] = 'Veränderung';

$GLOBALS["lang"]['change_id'] = 'ID ändern';

$GLOBALS["lang"]['Change ID'] = 'ID ändern';

$GLOBALS["lang"]['change_log'] = 'Änderung der Registrierung';

$GLOBALS["lang"]['Change Log'] = 'Änderung der Registrierung';

$GLOBALS["lang"]['Change Logs'] = 'Logs ändern';

$GLOBALS["lang"]['change_type'] = 'Änderungsart';

$GLOBALS["lang"]['Change Type'] = 'Änderungsart';

$GLOBALS["lang"]['check_minutes'] = 'Protokoll überprüfen';

$GLOBALS["lang"]['Check Minutes'] = 'Protokoll überprüfen';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Überprüfen Sie SSH auf diesen Ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Überprüfen Sie diesen Port für jeden SSH-Service.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Chinese'] = 'China';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chinesisch (traditionell)';

$GLOBALS["lang"]['Choose'] = 'Wählen';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Wählen Sie (wählen Sie zuerst Betriebssystem)';

$GLOBALS["lang"]['Choose a Device'] = 'Wählen Sie ein Gerät';

$GLOBALS["lang"]['Choose a Table'] = 'Wählen Sie eine Tabelle';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Wählen Sie die Art der Aufgabe aus dem ersten Dropdown. Dies wird die zusätzlichen Felder, die je nach Art der Aufgabe benötigt werden, konfigurieren.';

$GLOBALS["lang"]['Christmas Island'] = 'Weihnachtsinsel';

$GLOBALS["lang"]['cidr'] = 'Cids';

$GLOBALS["lang"]['Cidr'] = 'Cids';

$GLOBALS["lang"]['circuit_count'] = 'Leistungszähler';

$GLOBALS["lang"]['Circuit Count'] = 'Leistungszähler';

$GLOBALS["lang"]['circuit_status'] = 'Schaltkreis';

$GLOBALS["lang"]['Circuit Status'] = 'Schaltkreis';

$GLOBALS["lang"]['city'] = 'Stadt';

$GLOBALS["lang"]['City'] = 'Stadt';

$GLOBALS["lang"]['class'] = 'Klasse';

$GLOBALS["lang"]['Class'] = 'Klasse';

$GLOBALS["lang"]['class_text'] = 'Klasse Text';

$GLOBALS["lang"]['Class Text'] = 'Klasse Text';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klicken Sie auf <i>Neues Client Geheimnis</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klicken Sie auf Abschicken';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klicken Sie auf <i>Eigenschaften</i> unter der <i>Verwalten</i> Header in der zentralen Menüspalte. Kopieren Sie die <i>Benutzerzugriff URL</i>. Einmal kopiert, fügen Sie es in Texteditor. Sie müssen einen Abschnitt dieses Feldes kopieren.<br/><br/>Unser Beispielfeld sieht so aus<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Der Abschnitt, den wir brauchen, ist <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (der Mieterausweis). Dies wird in Open-AudIT als <i>Spannkraft</i> Feld, kleben Sie es dort ein.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klicken Sie auf App-Registrierungen, um eine neue Anwendung zu erstellen, und klicken Sie dann auf Neuanmeldung. Geben Sie ihm einen Namen (Ich habe Open-AudIT verwendet), wählen Sie Web-App / API als Typ und stellen Sie eine URL (die URL ist nicht wichtig) und klicken Sie jetzt auf Erstellen.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klicken Sie auf OK und schließen Sie das DCOMCNFG Fenster.<br/><br/>Die obigen Änderungen erfordern einen Neustart.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klicken Sie auf die gerade erstellte Anwendung. Die angezeigte Applikations-ID ist die Client-ID.<br/><br/>Um das Client-Geheimnis zu erstellen, klicken Sie auf Einstellungen, dann Schlüssel. Geben Sie einen Schlüsselnamen an und wählen Sie ein entsprechendes Ablaufdatum aus, klicken Sie dann auf Speichern.<br/><br/>Der Wert wird für Sie bevölkert - das ist das Client Secret.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klicken Sie auf die Schaltfläche Löschen, um die Beispielgeräte von Open-AudIT zu entfernen.<br/>Dies wird die folgenden Geräte aus der Datenbank entfernen. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klicken Sie auf die Schaltfläche Bearbeiten <i>Basis SAML Konfiguration</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klicken Sie unten auf die Schaltfläche Importieren, um Open-AudIT mit Beispiel-Gerätendaten zu bevölkern.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klicken Sie auf das Symbol rechts auf das Feld, das Sie bearbeiten möchten. Ändern Sie das Feld und klicken Sie auf das grüne Symbol, um einzureichen.';

$GLOBALS["lang"]['Client ID'] = 'Kunden-ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Client ID und Secret';

$GLOBALS["lang"]['client_ident'] = 'Kundenidentität';

$GLOBALS["lang"]['Client Ident'] = 'Kundenidentität';

$GLOBALS["lang"]['client_secret'] = 'Kunden Geheimnis';

$GLOBALS["lang"]['Client Secret'] = 'Kunden Geheimnis';

$GLOBALS["lang"]['client_site_name'] = 'Name des Kunden';

$GLOBALS["lang"]['Client Site Name'] = 'Name des Kunden';

$GLOBALS["lang"]['Close'] = 'Schließen';

$GLOBALS["lang"]['Closed'] = 'Geschlossen';

$GLOBALS["lang"]['Cloud'] = 'Wolken';

$GLOBALS["lang"]['Cloud Details'] = 'Details zum Thema';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery und Auditing';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['Cloud Name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Clouds sind eine Funktion, die Open-AudIT Enterprise lizenzierten Kunden zur Verfügung steht.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['Cluster Name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['cluster_type'] = 'Clustertyp';

$GLOBALS["lang"]['Cluster Type'] = 'Clustertyp';

$GLOBALS["lang"]['clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Cluster und Reporting';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kakao (Keeling) Inseln';

$GLOBALS["lang"]['Collection'] = 'Erhebung';

$GLOBALS["lang"]['Collections'] = 'Sammlungen';

$GLOBALS["lang"]['Collector'] = 'Sammeln';

$GLOBALS["lang"]['Collector (UUID)'] = 'Sammler (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server ist nur eine Enterprise-Funktion. Enterprise Kunden erhalten eine Collector Lizenz kostenlos. Zusätzliche Collector-Lizenzen können nach Bedarf erworben werden.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server ist so konzipiert, dass Sie eine Fernbedienung haben können oder <i>Sammler</i> Beispiel von Open-AudIT läuft auf einer Remote-Maschine. Diese Kollektor-Instanz könnte in einer anderen Sicherheitszone, Subnet, Cloud-Hosting-Instanz oder auf einer Kundenseite sein. Der Fernsammler macht dann all die Entdeckung und Prüfung von Geräten lokal vermeiden Netzwerk- und Firewalling-Komplexität. Der Sammler, sobald er registriert ist, wird von der <i>Server</i>. Dies bedeutet, dass Sie nur eine HTTP- oder HTTPS-Verbindung von diesem Collector zum Server benötigen.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Sammeln Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Name des Sammlers';

$GLOBALS["lang"]['collector_uuid'] = 'Sammeln Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Sammeln Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Collector-Aufgaben werden automatisch eingerichtet, wenn die Kollektorfunktion aktiviert ist. Sammelaufgaben sollten nicht direkt von Nutzern erstellt werden. Collector Aufgaben können ihre Frequenz nach der Erstellung bearbeitet haben. Hat der Open-AudIT Server Collectors berichtet, wird ein zusätzlicher Dropdown bereitgestellt. Sie können dies auswählen, um anzugeben, auf welcher Collector die Aufgabe ausgeführt werden soll. Nur Discovery-Aufgaben werden für Sammler unterstützt.';

$GLOBALS["lang"]['Collectors'] = 'Sammler';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Sammler können in einem von zwei Modi arbeiten: Collector und StandAlone. Im Collector-Modus wird die Instanz von Open-AudIT vom Hauptserver verwaltet. Wenn im Stand Alone-Modus die Instanz lokal verwaltet wird und alle gefundenen Geräte an den Hauptserver weiterleitet.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Sammler für Remote Discovery';

$GLOBALS["lang"]['Colombia'] = 'Kolumbien';

$GLOBALS["lang"]['color'] = 'Farbe';

$GLOBALS["lang"]['Color'] = 'Farbe';

$GLOBALS["lang"]['Column'] = 'Spalte';

$GLOBALS["lang"]['Columns'] = 'Spalten';

$GLOBALS["lang"]['command'] = 'Befehl';

$GLOBALS["lang"]['Command'] = 'Befehl';

$GLOBALS["lang"]['command_options'] = 'Befehlsoptionen';

$GLOBALS["lang"]['Command Options'] = 'Befehlsoptionen';

$GLOBALS["lang"]['command_output'] = 'Befehlsausgabe';

$GLOBALS["lang"]['Command Output'] = 'Befehlsausgabe';

$GLOBALS["lang"]['command_status'] = 'Befehlsstatus';

$GLOBALS["lang"]['Command Status'] = 'Befehlsstatus';

$GLOBALS["lang"]['command_time_to_execute'] = 'Befehlszeit zum Ausführen';

$GLOBALS["lang"]['Command Time To Execute'] = 'Befehlszeit zum Ausführen';

$GLOBALS["lang"]['comment'] = 'Anmerkung';

$GLOBALS["lang"]['Comment'] = 'Anmerkung';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Kommentieren Sie die folgende Zeile (ca. Linie 49 oder so). Legen Sie einfach eine Hash # am Anfang der Linie.';

$GLOBALS["lang"]['comments'] = 'Bemerkungen';

$GLOBALS["lang"]['Comments'] = 'Bemerkungen';

$GLOBALS["lang"]['commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial Support'] = 'Kommanditgesellschaft';

$GLOBALS["lang"]['common_name'] = 'ANHANG';

$GLOBALS["lang"]['Common Name'] = 'ANHANG';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Häufig als ClientId bezeichnet.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Häufig als ClientSecret bezeichnet.';

$GLOBALS["lang"]['Community'] = 'Gemeinschaft';

$GLOBALS["lang"]['Community Questions'] = 'Fragen der Gemeinschaft';

$GLOBALS["lang"]['Community String'] = 'Gemeinschaftszug';

$GLOBALS["lang"]['Comoros the'] = 'Komoren';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Company'] = 'Unternehmen';

$GLOBALS["lang"]['Complete these steps.'] = 'Vervollständigen Sie diese Schritte.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Komplexität des Angriffs (Low oder High).';

$GLOBALS["lang"]['Component Table'] = 'Komponententabelle';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenten (Alle Geräte)';

$GLOBALS["lang"]['Compute'] = 'Berechnung';

$GLOBALS["lang"]['Condition'] = 'Zustand';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Durchführung einer Risikobewertung';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Sensibilisierung und Schulungsprogramme';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Durchführungsbesprechungen';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Durchführung regelmäßiger Überwachungsaudits (meist jährlich)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Durchführung durch eine akkreditierte Stelle in zwei Stufen';

$GLOBALS["lang"]['Config'] = 'Konkret';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, aktuell ';

$GLOBALS["lang"]['config_file'] = 'Bearbeiten von Dateien';

$GLOBALS["lang"]['Config File'] = 'Bearbeiten von Dateien';

$GLOBALS["lang"]['config_manager_error_code'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigurierbare Role Based Access Control (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfiguration';

$GLOBALS["lang"]['Configuration'] = 'Konfiguration';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfiguration ändern Erkennung und Reporting';

$GLOBALS["lang"]['Configure'] = 'Konfigurieren';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Konfigurieren Sie die Agent-Serverseite, um Audits auf einem Zeitplan durchzuführen';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Vernetzt an';

$GLOBALS["lang"]['connection'] = 'Verbindung';

$GLOBALS["lang"]['Connection'] = 'Verbindung';

$GLOBALS["lang"]['Connection Options'] = 'Verbindungsoptionen';

$GLOBALS["lang"]['connection_status'] = 'Verbindungsstatus';

$GLOBALS["lang"]['Connection Status'] = 'Verbindungsstatus';

$GLOBALS["lang"]['connections'] = 'Verbindungen';

$GLOBALS["lang"]['Connections'] = 'Verbindungen';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'als gefiltert Ports Open';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Betrachten Sie open|filtriert Ports Open';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Beratung, Implementierung und andere Dienstleistungen sind über';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontakt Name';

$GLOBALS["lang"]['Contact Name'] = 'Kontakt Name';

$GLOBALS["lang"]['contained_in'] = 'In den Warenkorb';

$GLOBALS["lang"]['Contained In'] = 'In den Warenkorb';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Enthält ein JSON-Objekt Details die zugehörigen Widgets und ihre Positionen.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Enthält die Felder, die bestimmen, ob wir ssh, snmp und wmi Entdeckungsoptionen verwenden sollten. Ein JSON-Objekt.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontext und Führung';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Bezeichnung';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Kontinuierliche Verbesserung des ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Vertragspflichten';

$GLOBALS["lang"]['Contractual Obligations'] = 'Vertragspflichten';

$GLOBALS["lang"]['Cook Islands'] = 'Cookinseln';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopieren und Einfügen eines Auditergebnisses';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopieren und fügen Sie die folgenden in die Foren, eine andere Instanz von Open-AudIT oder woanders Sie diesen Artikel zur Verfügung stellen müssen.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopieren Sie die <i>Anwendungs-ID</i> Feld und Einfügen in das Open-AudIT <i>Kunden-ID</i> Feld für die neue Auth-Methode.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopieren Sie die <i>Kunden-ID</i> und in das Open-AudIT einfügen <i>Kunden-ID</i> Feld.<br/>Wenn es kein Geheimnis gibt, klicken Sie <i>Neues Geheimnis generieren</i>, dann kopieren Sie den Wert und fügen Sie ihn in das Open-AudIT <i>Kunden Geheimnis</i> Feld.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Den Wert kopieren und in das Open-AudIT-Formular einfügen <i>Kunden Geheimnis</i> Feld.';

$GLOBALS["lang"]['core_count'] = 'Kernzähler';

$GLOBALS["lang"]['Core Count'] = 'Kernzähler';

$GLOBALS["lang"]['Cores'] = 'Kerne';

$GLOBALS["lang"]['cost_center'] = 'Kostenzentrum';

$GLOBALS["lang"]['Cost Center'] = 'Kostenzentrum';

$GLOBALS["lang"]['cost_code'] = 'Kostencode';

$GLOBALS["lang"]['Cost Code'] = 'Kostencode';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'Anzahl';

$GLOBALS["lang"]['Count'] = 'Anzahl';

$GLOBALS["lang"]['country'] = 'Land';

$GLOBALS["lang"]['Country'] = 'Land';

$GLOBALS["lang"]['country_code'] = 'Ländercode';

$GLOBALS["lang"]['Country Code'] = 'Ländercode';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Erstellung';

$GLOBALS["lang"]['Create Example Devices'] = 'Beispielgeräte erstellen';

$GLOBALS["lang"]['create_external_count'] = 'Externer Zähler erstellen';

$GLOBALS["lang"]['Create External Count'] = 'Externer Zähler erstellen';

$GLOBALS["lang"]['create_external_from_internal'] = 'Erstellen Sie Extern von Intern';

$GLOBALS["lang"]['Create External From Internal'] = 'Erstellen Sie Extern von Intern';

$GLOBALS["lang"]['Create File'] = 'Datei erstellen';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode erstellen';

$GLOBALS["lang"]['create_internal_count'] = 'Interner Zähler erstellen';

$GLOBALS["lang"]['Create Internal Count'] = 'Interner Zähler erstellen';

$GLOBALS["lang"]['create_internal_from_external'] = 'Erstellen Sie intern von extern';

$GLOBALS["lang"]['Create Internal From External'] = 'Erstellen Sie intern von extern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS Geräte aus Open-AudIT erstellen';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT erstellen Geräte von ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT erstellen Geräte von NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Erstellen Sie eine Baseline für das Beispielgerät';

$GLOBALS["lang"]['Create a Discovery'] = 'Eine Entdeckung erstellen';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Erstellung einer Erklärung der Anwendbarkeit (SoA)';

$GLOBALS["lang"]['created_by'] = 'Erstellt von';

$GLOBALS["lang"]['Created By'] = 'Erstellt von';

$GLOBALS["lang"]['created_date'] = 'Datum';

$GLOBALS["lang"]['Created Date'] = 'Datum';

$GLOBALS["lang"]['Creating'] = 'Erstellen';

$GLOBALS["lang"]['Creating Credentials'] = 'Erstellung von Credentials';

$GLOBALS["lang"]['Creating Device'] = 'Einrichtung erstellen';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets erstellen';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Eine Entdeckung erstellen Eintrag für Scanoptionen';

$GLOBALS["lang"]['Creating a Query'] = 'Eine Abfrage erstellen';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Erstellung einer SQL-Erklärung für Gruppen';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Erstellen einer SQL-Erklärung für Queries';

$GLOBALS["lang"]['Creating an Integration'] = 'Integration schaffen';

$GLOBALS["lang"]['creator'] = 'Schöpfer';

$GLOBALS["lang"]['Creator'] = 'Schöpfer';

$GLOBALS["lang"]['credential'] = 'Einverständnis';

$GLOBALS["lang"]['Credential'] = 'Einverständnis';

$GLOBALS["lang"]['Credentials'] = 'Angaben';

$GLOBALS["lang"]['Credentials Client ID'] = 'Anmeldeinformationen Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Anmeldeinformationen Ausweis';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Anmeldeinformationen Tenant ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'In der <i>Anmeldeinformationen</i> Datenbanktabelle. Die eigentlichen Anmeldeinformationen werden im Speicher verschlüsselt. Wenn eine Discovery ausgeführt wird, hat ein Gerät seine spezifischen Anmeldeinformationen aus der Datenbank abgerufen, entschlüsselt und getestet. Wenn diese scheitern, wird auch die Liste der Anmeldeinformationen abgerufen, entschlüsselt und dann mit bekannten Anmeldeinformationen gegen das Gerät getestet. Gerätespezifische Anmeldeinformationen werden auf einer individuellen Geräteebene in der <i>Anmelden</i> Tabelle (Anmerkung - nein <i>S</i> in der Tabelle). SSH-Tasten werden vor SSH-Benutzername / Passwort getestet. Beim Testen von SSH werden die Anmeldeinformationen auch als Arbeiten mit Sudo oder als root markiert.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials können eine von einigen verschiedenen Arten haben - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implementiert. CAVEAT - ssh-Tasten sind noch nicht für Windows Open-AudIT Server implementiert.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Anmeldeinformationen für Amazon AWS in Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Anmeldeinformationen für Microsoft Azure verwendet in Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritische';

$GLOBALS["lang"]['criticality'] = 'Kriterium';

$GLOBALS["lang"]['Criticality'] = 'Kriterium';

$GLOBALS["lang"]['Croatia'] = 'Kroatien';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Strom';

$GLOBALS["lang"]['Current'] = 'Strom';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Aktuelle Entdeckungsprozesse';

$GLOBALS["lang"]['Current date & time is '] = 'Aktuelles Datum und Uhrzeit ';

$GLOBALS["lang"]['Currently Installed'] = 'Derzeit installiert';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Derzeit unterstützte Typen <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> oder <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Kundenspezifische Felder';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kundenspezifische TCP-Ports';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Benutzerdefinierte TCP Ports. Alle spezifischen Ports, die wir zusammen mit den Top TCP Ports scannen würden. Komma seperiert, keine Räume.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Zoll UDP Häfen';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Benutzerdefinierte UDP-Ports. Alle spezifischen Ports, die wir zusätzlich zu den Top UDP Ports scannen würden. Komma seperiert, keine Räume.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Benutzerdefinierte Scanoptionen pro Entdeckung';

$GLOBALS["lang"]['Cve'] = 'Bucht';

$GLOBALS["lang"]['Cyprus'] = 'Zypern';

$GLOBALS["lang"]['Czech'] = 'Tschechische Republik';

$GLOBALS["lang"]['Czech Republic'] = 'Tschechische Republik';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-Konto (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Passwort (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Dänemark';

$GLOBALS["lang"]['dashboard_id'] = 'Personalausweis';

$GLOBALS["lang"]['Dashboard ID'] = 'Personalausweis';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards und Widgets ermöglichen es Enterprise lizenzierten Kunden, beide dieser Sammlungen zu erstellen, zu lesen, zu aktualisieren und zu löschen, um sicherzustellen, dass ihre Homepage genau das ist, was sie sehen müssen. Nicht nur das, sondern ein Benutzer kann ein bestimmtes Dashboard als eigene Homepage festlegen. Jeder muss nicht die gleiche Homepage (Dashboard) verwenden, noch die gleichen Widgets auf diesem Dashboard. Professionelle lizenzierte Kunden können zwischen zwei vordefinierten Dashboards wählen, um als eigene Homepage zu setzen.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards bieten <i>auf einen Blick</i> wichtige Sichtbarkeit für Veränderungen in Ihrem Netzwerk sowie schnelle Verbindungen zu Gerätetypen, Herstellern und Betriebssystemen und so viel mehr.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards verwenden';

$GLOBALS["lang"]['Data'] = 'Daten';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Datenretention';

$GLOBALS["lang"]['Database'] = 'Datenbank';

$GLOBALS["lang"]['db_action'] = 'Datenbank Aktion';

$GLOBALS["lang"]['Database Action'] = 'Datenbank Aktion';

$GLOBALS["lang"]['db_column'] = 'Datenbank Kolumne';

$GLOBALS["lang"]['Database Column'] = 'Datenbank Kolumne';

$GLOBALS["lang"]['Database Definition'] = 'Datenbankdefinition';

$GLOBALS["lang"]['db_row'] = 'Datenbank Row';

$GLOBALS["lang"]['Database Row'] = 'Datenbank Row';

$GLOBALS["lang"]['Database Schema'] = 'Datenbankschema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Datenbank Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Datenbank';

$GLOBALS["lang"]['Database Table'] = 'Datenbank';

$GLOBALS["lang"]['Database Tables'] = 'Datenbanktabellen';

$GLOBALS["lang"]['dataset_title'] = 'Datensatz Titel';

$GLOBALS["lang"]['Dataset Title'] = 'Datensatz Titel';

$GLOBALS["lang"]['date'] = 'Datum';

$GLOBALS["lang"]['Date'] = 'Datum';

$GLOBALS["lang"]['Date D-M-Y'] = 'Datum D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Datum M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Jetzt anmelden';

$GLOBALS["lang"]['date_of_manufacture'] = 'Datum der Herstellung';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Datum der Herstellung';

$GLOBALS["lang"]['date_paid'] = 'Datum bezahlt';

$GLOBALS["lang"]['Date Paid'] = 'Datum bezahlt';

$GLOBALS["lang"]['date_received'] = 'Datum empfangen';

$GLOBALS["lang"]['Date Received'] = 'Datum empfangen';

$GLOBALS["lang"]['Date Y-M-D'] = 'Datum Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Datum und Uhrzeit, als die CVE zuletzt aktualisiert wurde.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Datum und Uhrzeit, als die CVE veröffentlicht wurde.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Datum, als die CVE veröffentlicht wurde.';

$GLOBALS["lang"]['DateTime Now'] = 'Jetzt anmelden';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Datum Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Tag des Monats';

$GLOBALS["lang"]['Day Of Month'] = 'Tag des Monats';

$GLOBALS["lang"]['day_of_week'] = 'Tag der Woche';

$GLOBALS["lang"]['Day Of Week'] = 'Tag der Woche';

$GLOBALS["lang"]['Day of Month'] = 'Tag des Monats';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'Debugging';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging eines Skripts';

$GLOBALS["lang"]['December'] = 'Dezember';

$GLOBALS["lang"]['Decommission'] = 'Stilllegung';

$GLOBALS["lang"]['Default'] = 'Fehler';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Standard Authentication Ebene - Set zum Verbinden';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Default Imperson Ebene - Set zur Identifizierung';

$GLOBALS["lang"]['Default Items'] = 'Standard-Elemente';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Standard Orgs Gruppen';

$GLOBALS["lang"]['Default Roles Groups'] = 'Standard Roles Gruppen';

$GLOBALS["lang"]['Default Value'] = 'Standardwert';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standard von 389. Normalerweise verwendet 636 für Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standard <code>3</code> für LDAP und Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Fehler';

$GLOBALS["lang"]['Deferred'] = 'Abgeleitet';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Projektumfang und Ziele definieren';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definieren Sie den ISMS-Bereich';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definieren Sie den Kontext der Organisation (interne/externe Probleme)';

$GLOBALS["lang"]['delay_minutes'] = 'Verzögerungsprotokolle';

$GLOBALS["lang"]['Delay Minutes'] = 'Verzögerungsprotokolle';

$GLOBALS["lang"]['Delete'] = 'Löschen';

$GLOBALS["lang"]['Delete Example Devices'] = 'Beispielgeräte löschen';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Löschen Sie Extern von Intern';

$GLOBALS["lang"]['Delete External From Internal'] = 'Löschen Sie Extern von Intern';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Löschen Sie NMIS Geräte, wenn nicht in Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Löschen Sie einen Eintrag {collection}.';

$GLOBALS["lang"]['Delete from Application'] = 'Löschen der Anwendung';

$GLOBALS["lang"]['Delete from Cluster'] = 'Löschen von Cluster';

$GLOBALS["lang"]['Denmark'] = 'Dänemark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Abgeleitet durch Audit oder manuell vom Benutzer eingestellt.';

$GLOBALS["lang"]['Derived by audit.'] = 'Abgeleitet durch Audit.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Abgeleitet von <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Abgeleitet von <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Abgeleitet von Collector Entdeckung.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Abgeleitet von OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Von der Cloud-Entdeckung abgeleitet.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Abgeleitet von Geräteaudits.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Abgeleitet vom Gerätetyp und Betriebssystem.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Abgeleitet von der Entdeckung.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Abgeleitet von Hostname, sysName, dns Hostname und IP in dieser Reihenfolge.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Abgeleitet von der ganzzahligen Schwere.';

$GLOBALS["lang"]['description'] = 'Warenbezeichnung';

$GLOBALS["lang"]['Description'] = 'Warenbezeichnung';

$GLOBALS["lang"]['destination'] = 'Bestimmung';

$GLOBALS["lang"]['Destination'] = 'Bestimmung';

$GLOBALS["lang"]['detail'] = 'Detail';

$GLOBALS["lang"]['Detail'] = 'Detail';

$GLOBALS["lang"]['Details'] = 'Details';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details, wer in der Regel an dieser Seite kontaktiert werden kann.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Bestimmen Sie, wie oft Sie den Baseline-Check gegen die Datenbank ausführen möchten und erstellen Sie einen Scheduled Report';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Risikobehandlungsoptionen festlegen';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Entwicklung eines Risikobehandlungsplans';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Entwicklung von Politiken, Verfahren und Kontrollen';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Entwicklung der erforderlichen ISMS-Dokumentation (Politiken, Verfahren usw.)';

$GLOBALS["lang"]['device'] = 'Gerät';

$GLOBALS["lang"]['Device'] = 'Gerät';

$GLOBALS["lang"]['Device Audits'] = 'Geräteaudits';

$GLOBALS["lang"]['Device Component Names'] = 'Gerätekomponentennamen';

$GLOBALS["lang"]['Device ID'] = 'Gerätekennung';

$GLOBALS["lang"]['device_id'] = 'Gerätekennung';

$GLOBALS["lang"]['device_id_a'] = 'Geräte-ID A';

$GLOBALS["lang"]['Device ID A'] = 'Geräte-ID A';

$GLOBALS["lang"]['device_id_b'] = 'Geräte-ID B';

$GLOBALS["lang"]['Device ID B'] = 'Geräte-ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Geräteanpassungsregeln';

$GLOBALS["lang"]['Device Name'] = 'Name des Geräts';

$GLOBALS["lang"]['Device Result'] = 'Ergebnis des Geräts';

$GLOBALS["lang"]['Device Results'] = 'Ergebnisse der Geräte';

$GLOBALS["lang"]['Device Seed'] = 'Gerät gesehen';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Gerät gesehen Entdeckungen sind eine gute Option, wenn Sie wissen, dass Ihr Netzwerk aus einer Reihe von Subnetzen besteht, aber Sie sind unsicher, was sie sind. Sehen Sie die Entdeckung mit einem lokalen Router und beobachten Sie Ihr Netzwerk entfaltet sich vor Ihren Augen.';

$GLOBALS["lang"]['Device Seed IP'] = 'Gerät gesehen IP';

$GLOBALS["lang"]['Device Status'] = 'Gerätestatus';

$GLOBALS["lang"]['Device Types'] = 'Gerätetypen';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Geräte und Software und Hardware Auditing';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Gerät ist im Subnet';

$GLOBALS["lang"]['Devices'] = 'Geräte';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Zugeteilte Geräte';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Zugeteilte Geräte';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Org zugewiesene Geräte';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Org zugewiesene Geräte';

$GLOBALS["lang"]['Devices Audited'] = 'Geräte geprüft';

$GLOBALS["lang"]['Devices Collection'] = 'Geräte Sammlung';

$GLOBALS["lang"]['Devices Created in '] = 'Geräte, die in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Geräte, die in Open-AudIT erstellt wurden';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Geräte Standard Display-Spalten';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Geräte Standard Display-Spalten';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Geräte gefunden Letzte 7 Tage';

$GLOBALS["lang"]['Devices Found Today'] = 'Geräte heute gefunden';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Geräte gefunden gestern';

$GLOBALS["lang"]['Devices Missing Information'] = 'Geräte Fehlende Informationen';

$GLOBALS["lang"]['Devices Not Audited'] = 'Geräte nicht geprüft';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Geräte nicht gesehen 30 Tage';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Geräte nicht gesehen 7 Tage';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Geräte nicht gesehen 90 Tage';

$GLOBALS["lang"]['Devices Older Than X'] = 'Geräte älter als X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Geräte über API abrufbar';

$GLOBALS["lang"]['Devices Selected from '] = 'Ausgewählte Geräte ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Ausgewählte Geräte aus Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Geräte, die in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Geräte Aktualisiert in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Geräte werden bewertet.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Geräte werden nicht bewertet.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Geräte könnten Benchmarking sein.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Geräte von Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Geräte in Deutschland';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Geräte in Gestopptem Zustand';

$GLOBALS["lang"]['Devices in this'] = 'Geräte in diesem';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Geräte werden nicht angepasst, wenn ihr Status eingestellt wird <i>gelöscht</i>. Jeder andere Status erlaubt eine Übereinstimmung.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Geräte mit abgelaufenen Garantien';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Entvirt vom Typ oder Betriebssystem.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Aktiviert';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Aktiviert';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease erhält';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease erhält';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Hat der Befehl erfolgreich abgeschlossen und erwartete Daten zurückgegeben.';

$GLOBALS["lang"]['direction'] = 'Richtung';

$GLOBALS["lang"]['Direction'] = 'Richtung';

$GLOBALS["lang"]['directory'] = 'Verzeichnis';

$GLOBALS["lang"]['Directory'] = 'Verzeichnis';

$GLOBALS["lang"]['disabled'] = 'Behinderte';

$GLOBALS["lang"]['Disabled'] = 'Behinderte';

$GLOBALS["lang"]['discard'] = 'Discard';

$GLOBALS["lang"]['Discard'] = 'Discard';

$GLOBALS["lang"]['Discover'] = 'Entdecken Sie';

$GLOBALS["lang"]['Discoveries'] = 'Entdeckungen';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Entdeckungen sind im Herzen dessen, was Open-AudIT tut. Wie sonst würdest du wissen <i>Was ist auf Ihrem Netzwerk?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Entdeckungen sind Einträge, die es Ihnen ermöglichen, eine Entdeckung auf einem Netzwerk in einem einzigen Klick durchzuführen, ohne die Details dieses Netzwerks jedes Mal einzugeben.';

$GLOBALS["lang"]['Discovery'] = 'Entdeckung';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Logs von Discovery ändern';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Datenrettung entdecken';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Entdeckungsthemen';

$GLOBALS["lang"]['discovery_log'] = 'Entdecke das Log';

$GLOBALS["lang"]['Discovery Log'] = 'Entdecke das Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery Match Optionen';

$GLOBALS["lang"]['Discovery Name'] = 'Entdeckername';

$GLOBALS["lang"]['Discovery Options'] = 'Entdeckungsoptionen';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Entdecken Sie Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Entdecke Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Entdeckter Lauf';

$GLOBALS["lang"]['Discovery Run'] = 'Entdeckter Lauf';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan-Optionen';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan-Optionen';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Optionen sind nur eine weitere Artikelsammlung. Enterprise-Nutzer können Einträge nach Bedarf erstellen, lesen, aktualisieren und löschen. Professionelle Benutzer können alle Einträge lesen, aber keine neuen Einträge erstellen, bestehende Einträge aktualisieren oder Einträge löschen. Benutzer der Gemeinschaft haben keine GUI, die Zugang zu dieser Sammlung ermöglicht.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Entdecken Sie Scan-Typen';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery Support';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery hat aufgehört zu arbeiten';

$GLOBALS["lang"]['disk'] = 'Festplattenspeicher';

$GLOBALS["lang"]['Disk'] = 'Festplattenspeicher';

$GLOBALS["lang"]['display_version'] = 'Anzeige Version';

$GLOBALS["lang"]['Display Version'] = 'Anzeige Version';

$GLOBALS["lang"]['Display in Menu'] = 'Anzeige im Menü';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Zeigt ein Standard-Webformular zur Einreichung an POST /{collection} an.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Zeigt ein Standard-Webformular zur Einreichung an POST /{collection}/Import an.';

$GLOBALS["lang"]['district'] = 'Bezirk';

$GLOBALS["lang"]['District'] = 'Bezirk';

$GLOBALS["lang"]['Djibouti'] = 'Dschibuti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg aktivieren';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg aktivieren';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Host Name';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Host Name';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Vergessen Sie nicht das Open-AudIT-Wiki für alle Ihre Dokumentation.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Vergessen Sie nicht, dass es einen Berg der Dokumentation auf dem Wiki gibt';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scannen Sie diese TCP-Ports nicht.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scannen Sie diese UDP-Ports nicht.';

$GLOBALS["lang"]['Do not show me again'] = 'Nicht mehr zeigen';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Haben Sie ein perfektes Beispiel für diese Konfiguration? Vielleicht ein Gerät in einer Laborumgebung oder eine Workstation, die Sie verwenden, um Arbeitsplätze zu klonen VMs aus.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Möchten Sie einen sicheren Transport (LDAPS) oder einen regelmäßigen unverschlüsselten LDAP verwenden.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Möchten Sie die Standard-Seitenleiste auf der linken Seite sehen.';

$GLOBALS["lang"]['documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentation über eine bestimmte Sammlung.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nicht gleich';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Gilt die Lizenz für Kinder Orgs.';

$GLOBALS["lang"]['domain'] = 'Gebiet';

$GLOBALS["lang"]['Domain'] = 'Gebiet';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Adresse';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Adresse';

$GLOBALS["lang"]['domain_controller_name'] = 'Domain Controller Name';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domain Controller Name';

$GLOBALS["lang"]['domain_role'] = 'Domain auf Anfrage';

$GLOBALS["lang"]['Domain Role'] = 'Domain auf Anfrage';

$GLOBALS["lang"]['domain_short'] = 'Domain Short';

$GLOBALS["lang"]['Domain Short'] = 'Domain Short';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikanische Republik';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ich weiß, was ich tue. Kein Filter und die Möglichkeit, benutzerdefinierte Tabellen zu verbinden.';

$GLOBALS["lang"]['Download'] = 'Downloads';

$GLOBALS["lang"]['Download a File'] = 'Eine Datei herunterladen';

$GLOBALS["lang"]['Download a file from URL'] = 'Eine Datei von URL herunterladen';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Das Skript test_windows_client.vbs direkt herunterladen';

$GLOBALS["lang"]['Download your updated version from'] = 'Laden Sie Ihre aktualisierte Version herunter';

$GLOBALS["lang"]['driver'] = 'Fahrer';

$GLOBALS["lang"]['Driver'] = 'Fahrer';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplikate Geräte / fehlende Geräte';

$GLOBALS["lang"]['duration'] = 'Dauer';

$GLOBALS["lang"]['Duration'] = 'Dauer';

$GLOBALS["lang"]['Dutch'] = 'Niederländisch';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Jedes IP wird mit den Discovery-Konfigurationsoptionen gescannt (siehe Discovery Scan-Optionen und Discovery - Community vs Professional vs Enterprise auf dem Wiki). Im Allgemeinen wird Nmap für die Ports 22 (ssh), 135 (wmi), 62078 (iPhone) und UDP 161 (snmp) testen. Wenn 22, 135 oder 161 ansprechen, wird die Anmeldeliste abgerufen und jede Anmeldeprüfung wiederum. Die ersten Arbeitsinformationen werden für weitere Abfragen direkt vom Gerät verwendet. Hinweis - wenn ein Gerät zuvor entdeckt wurde und Arbeitsinformationen hat, werden diese Anmeldeinformationen zuerst geprüft. Nur wenn diese scheitern, sind die anderen Anmeldeinformationen dann versucht.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Jedes Mal, wenn ein Gerät entdeckt wird oder ein Auditergebnis verarbeitet wird, werden alle Regeln aus der Datenbank abgerufen und gegen die Attribute des bestimmten Geräts laufen. Regeln laufen gegen ein Gerät zu einem Zeitpunkt - es gibt keine Möglichkeit zu sagen <i>Regeln für alle Geräte ausführen<i> oder <i>Führen Sie die Regeln gegen diese Geräte<i>. Eine individuelle Regel wird ein oder mehrere Attribute des Geräts testen und wenn sie der Regel entsprechen, wird das Ergebnis angewendet. Mehrere Attribute können getestet werden. Mehrere Attribute können gesetzt werden. Denken Sie daran als Wenn dies, Dann Dieses System für Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Einfach eine Entdeckung auf einem Netzwerk in einem einzigen Klick ausführen, ohne die Details dieses Netzwerks jedes Mal einzugeben.';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Bearbeiten';

$GLOBALS["lang"]['edit_log'] = 'Anmelden bearbeiten';

$GLOBALS["lang"]['Edit Log'] = 'Anmelden bearbeiten';

$GLOBALS["lang"]['editable'] = 'Bearbeiten';

$GLOBALS["lang"]['Editable'] = 'Bearbeiten';

$GLOBALS["lang"]['edited_by'] = 'Bearbeitet von';

$GLOBALS["lang"]['Edited By'] = 'Bearbeitet von';

$GLOBALS["lang"]['edited_date'] = 'Bearbeitetes Datum';

$GLOBALS["lang"]['Edited Date'] = 'Bearbeitetes Datum';

$GLOBALS["lang"]['edition'] = 'Ausgabe';

$GLOBALS["lang"]['Edition'] = 'Ausgabe';

$GLOBALS["lang"]['Egypt'] = 'Ägypten';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google oder Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Entweder weder vorhanden noch vorhanden.

<strong>Keine</strong> - Der erfolgreiche Angriff hängt nicht von den Einsatz- und Ausführungsbedingungen des gefährdeten Systems ab. Der Angreifer kann erwarten, dass er in der Lage sein kann, die Sicherheitslücke zu erreichen und den Exploit unter allen oder meisten Fällen der Sicherheitslücke auszuführen.

<strong>Gegenwart</strong> - Der erfolgreiche Angriff hängt von der Anwesenheit bestimmter Einsatz- und Ausführungsbedingungen des gefährdeten Systems ab, die den Angriff ermöglichen. Dazu gehören:

Eine Rassenbedingung muss gewonnen werden, um die Schwachstelle erfolgreich auszunutzen. Die Erfolgsfähigkeit des Angriffs wird durch Ausführungsbedingungen bedingt, die nicht unter voller Kontrolle des Angreifers stehen. Der Angriff muss mehrmals gegen ein einziges Ziel gestartet werden, bevor er erfolgreich ist.

Netzwerkinjektion. Der Angreifer muss sich in den logischen Netzwerkpfad zwischen dem Ziel und der vom Opfer angeforderten Ressource (z.B. Sicherheitslücken, die einen On-path-Angreifer benötigen) einleiten.';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-Mail senden';

$GLOBALS["lang"]['Email'] = 'E-Mail senden';

$GLOBALS["lang"]['email_address'] = 'Email Adresse';

$GLOBALS["lang"]['Email Address'] = 'Email Adresse';

$GLOBALS["lang"]['Email Configuration'] = 'E-Mail Konfiguration';

$GLOBALS["lang"]['Email to send test to'] = 'Email to send test to';

$GLOBALS["lang"]['Enable'] = 'Ermöglichen';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Enable Distributed COM auf diesem Computer - Option wird geprüft';

$GLOBALS["lang"]['enabled'] = 'Ermöglicht';

$GLOBALS["lang"]['Enabled'] = 'Ermöglicht';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Aktivieren Sie das Feature unter Windows';

$GLOBALS["lang"]['encryption'] = 'Verschlüsselung';

$GLOBALS["lang"]['Encryption'] = 'Verschlüsselung';

$GLOBALS["lang"]['encryption_method'] = 'Verschlüsselungsmethode';

$GLOBALS["lang"]['Encryption Method'] = 'Verschlüsselungsmethode';

$GLOBALS["lang"]['encryption_status'] = 'Verschlüsselungsstatus';

$GLOBALS["lang"]['Encryption Status'] = 'Verschlüsselungsstatus';

$GLOBALS["lang"]['end_date'] = 'Enddatum';

$GLOBALS["lang"]['End Date'] = 'Enddatum';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Ende des Lebens Produkt-ID';

$GLOBALS["lang"]['end_of_life'] = 'Ende des Lebens';

$GLOBALS["lang"]['End Of Life'] = 'Ende des Lebens';

$GLOBALS["lang"]['end_of_production'] = 'Ende der Produktion';

$GLOBALS["lang"]['End Of Production'] = 'Ende der Produktion';

$GLOBALS["lang"]['end_of_service'] = 'Ende des Dienstes';

$GLOBALS["lang"]['End Of Service'] = 'Ende des Dienstes';

$GLOBALS["lang"]['end_of_service_life'] = 'Ende des Servicelebens';

$GLOBALS["lang"]['End Of Service Life'] = 'Ende des Servicelebens';

$GLOBALS["lang"]['Endpoint'] = 'Endpunkt';

$GLOBALS["lang"]['English'] = 'Englisch';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Verbessert die Einhaltung der Vorschriften';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Die Anreicherung ist abgeschlossen. Die CVE hat volle Metadaten und gilt als stabil.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Sicherstellung der Dokumentation kontrolliert und zugänglich';

$GLOBALS["lang"]['enterprise'] = 'Unternehmen';

$GLOBALS["lang"]['Enterprise'] = 'Unternehmen';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Unternehmen Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Privates Netzwerk';

$GLOBALS["lang"]['Entitlement Type'] = 'Art der Eintragung';

$GLOBALS["lang"]['Entra'] = 'Entgegennahme';

$GLOBALS["lang"]['environment'] = 'Umwelt';

$GLOBALS["lang"]['Environment'] = 'Umwelt';

$GLOBALS["lang"]['Equal To'] = 'Gleichheit';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Gleich oder größer als';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Gleich oder weniger als';

$GLOBALS["lang"]['Equals'] = 'Gleiche';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Äquatorialguinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Fehler';

$GLOBALS["lang"]['Error Code'] = 'Fehlercode';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Erstellung eines Projektplans und eines Zeitplans';

$GLOBALS["lang"]['Establish an information security policy'] = 'Einrichtung einer Informationssicherheitspolitik';

$GLOBALS["lang"]['Established'] = 'Gegründet';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Estonian'] = 'Estland';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Äthiopien';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Bewertung des ISMS intern';

$GLOBALS["lang"]['Every'] = 'Jedes';

$GLOBALS["lang"]['Every Day'] = 'Jeden Tag';

$GLOBALS["lang"]['Example'] = 'Beispiel';

$GLOBALS["lang"]['Example Devices'] = 'Beispiel Geräte';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Beispiel Org Diagramm mit Zugriff';

$GLOBALS["lang"]['Example text from'] = 'Beispieltext aus';

$GLOBALS["lang"]['Examples'] = 'Beispiele';

$GLOBALS["lang"]['Exceptions'] = 'Ausnahmen';

$GLOBALS["lang"]['exclude'] = 'Nicht verfügbar';

$GLOBALS["lang"]['Exclude'] = 'Nicht verfügbar';

$GLOBALS["lang"]['exclude_ip'] = 'IP ausfüllen';

$GLOBALS["lang"]['Exclude IP'] = 'IP ausfüllen';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP-Adressen ausschließen';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'IP-Adressen (individuelle IP - 192.168.1.20, Reichweiten - 192.168.1.30-40 oder Subnetze - 192.168.1.100/30) ausschließen, die aus dem Scannen aufgeführt sind. Komma seperiert, keine Räume.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP Ports ausschließen';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp Ports ausschließen';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp Ports ausschließen';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-Ports ausschließen';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp Ports ausschließen';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp Ports ausschließen';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Ausschließen Sie alle Ports, die von gescannt werden. Komma seperiert, keine Räume.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Ausschließen Sie diese IP-Adressen von Nmap-Scanning.';

$GLOBALS["lang"]['Excluded'] = 'Ausgeschlossen';

$GLOBALS["lang"]['exclusion_reasons'] = 'Ausschlussgründe';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Ausschlussgründe';

$GLOBALS["lang"]['executable'] = 'Ausführbar';

$GLOBALS["lang"]['Executable'] = 'Ausführbar';

$GLOBALS["lang"]['executable_id'] = 'Ausführende ID';

$GLOBALS["lang"]['Executable ID'] = 'Ausführende ID';

$GLOBALS["lang"]['executables'] = 'Ausführbare';

$GLOBALS["lang"]['Executables'] = 'Ausführbare';

$GLOBALS["lang"]['Execute'] = 'Durchführung';

$GLOBALS["lang"]['Executing'] = 'Durchführung';

$GLOBALS["lang"]['exemption_reason'] = 'Begründung';

$GLOBALS["lang"]['Exemption Reason'] = 'Begründung';

$GLOBALS["lang"]['Existing Building'] = 'Vorhandenes Gebäude';

$GLOBALS["lang"]['Existing Floor'] = 'Vorhandene Etage';

$GLOBALS["lang"]['Existing Room'] = 'Vorhandene Zimmer';

$GLOBALS["lang"]['Existing Row'] = 'Vorhandene Row';

$GLOBALS["lang"]['expire_date'] = 'Datum';

$GLOBALS["lang"]['Expire Date'] = 'Datum';

$GLOBALS["lang"]['expire_minutes'] = 'Abgelaufene Protokolle';

$GLOBALS["lang"]['Expire Minutes'] = 'Abgelaufene Protokolle';

$GLOBALS["lang"]['expires'] = 'Entfällt';

$GLOBALS["lang"]['Expires'] = 'Entfällt';

$GLOBALS["lang"]['expiry_date'] = 'Datum';

$GLOBALS["lang"]['Expiry Date'] = 'Datum';

$GLOBALS["lang"]['exploit_maturity'] = 'Ausnutzen der Reife';

$GLOBALS["lang"]['Exploit Maturity'] = 'Ausnutzen der Reife';

$GLOBALS["lang"]['Export'] = 'Ausfuhr';

$GLOBALS["lang"]['Export by Device'] = 'Exportieren von Gerät';

$GLOBALS["lang"]['Export by Policy'] = 'Export nach Politik';

$GLOBALS["lang"]['Export data to'] = 'Ausfuhrdaten';

$GLOBALS["lang"]['Exporting a Device'] = 'Exportieren eines Geräts';

$GLOBALS["lang"]['expose'] = 'Exposition';

$GLOBALS["lang"]['Expose'] = 'Exposition';

$GLOBALS["lang"]['External'] = 'Außen';

$GLOBALS["lang"]['External Field Name'] = 'Externer Feldname';

$GLOBALS["lang"]['External Field Type'] = 'Außenfeldtyp';

$GLOBALS["lang"]['External Field Types'] = 'Externe Feldarten';

$GLOBALS["lang"]['external_ident'] = 'Externer Gedankenstrich';

$GLOBALS["lang"]['External Ident'] = 'Externer Gedankenstrich';

$GLOBALS["lang"]['external_link'] = 'Externer Link';

$GLOBALS["lang"]['External Link'] = 'Externer Link';

$GLOBALS["lang"]['extra_columns'] = 'Extrasäulen';

$GLOBALS["lang"]['Extra Columns'] = 'Extrasäulen';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Extra- und Time Based Reporting';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra und mehr Verbose Protokollierung wird zur Fehlerbehebung erzeugt.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Fälligkeit';

$GLOBALS["lang"]['Failed'] = 'Versäumt';

$GLOBALS["lang"]['Failed Severity'] = 'Unverschämte Schwere';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandinseln (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Familie';

$GLOBALS["lang"]['Faroe Islands'] = 'Färöer';

$GLOBALS["lang"]['Features'] = 'Eigenschaften';

$GLOBALS["lang"]['February'] = 'Februar';

$GLOBALS["lang"]['field'] = 'Feld';

$GLOBALS["lang"]['Field'] = 'Feld';

$GLOBALS["lang"]['field_id'] = 'Feld ID';

$GLOBALS["lang"]['Field ID'] = 'Feld ID';

$GLOBALS["lang"]['Field Name'] = 'Feldname';

$GLOBALS["lang"]['Field Type'] = 'Feldtyp';

$GLOBALS["lang"]['Fields'] = 'Felder';

$GLOBALS["lang"]['fields'] = 'Felder';

$GLOBALS["lang"]['Fields attributes are'] = 'Felder Attribute sind';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidschi-Inseln';

$GLOBALS["lang"]['File'] = 'Datei';

$GLOBALS["lang"]['File Auditing'] = 'Dateiprüfung';

$GLOBALS["lang"]['File Import'] = 'Datei importieren';

$GLOBALS["lang"]['File Input'] = 'Datei Input';

$GLOBALS["lang"]['file_name'] = 'Dateiname';

$GLOBALS["lang"]['File Name'] = 'Dateiname';

$GLOBALS["lang"]['File Share Discovery'] = 'Datei teilen Discovery';

$GLOBALS["lang"]['file_size'] = 'Dateigröße';

$GLOBALS["lang"]['File Size'] = 'Dateigröße';

$GLOBALS["lang"]['filename'] = 'Dateiname';

$GLOBALS["lang"]['Filename'] = 'Dateiname';

$GLOBALS["lang"]['files'] = 'Dateien';

$GLOBALS["lang"]['Files'] = 'Dateien';

$GLOBALS["lang"]['files_id'] = 'Kennung der Dateien';

$GLOBALS["lang"]['Files ID'] = 'Kennung der Dateien';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Gefiltert';

$GLOBALS["lang"]['Filtered'] = 'Gefiltert';

$GLOBALS["lang"]['Filtered Ports'] = 'Gefilterte Häfen';

$GLOBALS["lang"]['Finland'] = 'Finnland';

$GLOBALS["lang"]['Finnish'] = 'Finnisch';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall Pakete';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall Regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall Regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First'] = 'Erste';

$GLOBALS["lang"]['First Name'] = 'Vorname';

$GLOBALS["lang"]['first_run'] = 'Erste Schritte';

$GLOBALS["lang"]['First Run'] = 'Erste Schritte';

$GLOBALS["lang"]['first_seen'] = 'Erste Lesung';

$GLOBALS["lang"]['First Seen'] = 'Erste Lesung';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Erster Fokus auf das, was das Endbedürfnis ist: versuchen Sie, Software, Benutzer oder Netstat-Daten zu erstellen? Was ist die wichtige Sache(n) zu vergleichen und zu berichten?';

$GLOBALS["lang"]['FirstWave'] = 'Erste Hilfe';

$GLOBALS["lang"]['Fix'] = 'Fehler';

$GLOBALS["lang"]['Fixed'] = 'Festgelegt';

$GLOBALS["lang"]['Fixing the Issue'] = 'Problembehebung';

$GLOBALS["lang"]['Floor'] = 'Boden';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Folgen Sie einer der unten stehenden Links und entdecken Sie, wie Sie Open-AudIT nutzen können, um herauszufinden, <b>Was ist auf Ihrem Netzwerk?</b>';

$GLOBALS["lang"]['For'] = 'Für';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Für <i>Typ</i> Stellen Sie sicher, Baseline auszuwählen, und für Gruppe sollten Sie eine Gruppe von Geräten auswählen, gegebenenfalls auf diese Basislinie, die am besten die Geräte darstellen, um die Basislinie anzuwenden. Dies verhindert fehlerhafte Einträge.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Für Debian/Ubuntu-Laufwerk, einschließlich der Einstellung dpkg, um sich an Ihr Override zu erinnern, so dass ein Apt-get-Upgrade nicht brechen';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Für SNMP Open-AudIT können v1, v2 und v3 Anmeldeinformationen verwendet werden. Das Gerät wird unabhängig davon abgefragt, ob Router, Switch (regelmäßige Netzwerkgeräte) oder ein Computer (Linux und Windows laufen oft SNMP zur Überwachung von Werkzeugen).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Für einen Primer auf Cron, siehe diese Wikipedia-Seite';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Für eine Saatgutentdeckung sollte ich nur IPs im privaten IP-Adressenraum entdecken.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Für eine Samenentdeckung sollte ich nur IPs auf dem ausgewählten Subnetz entdecken.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Für eine Samenentdeckung, sollte ich das Subnet ping, bevor die Entdeckung läuft.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Für fortgeschrittene Eingabe einer rohen SQL-Abfrage. Wie pro Queries müssen Sie <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Für jeden Laichprozess findet die folgende statt.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Zum Beispiel - Sie könnten eine Basiszeile aus einem Gerät mit Redhat 9 erstellen, das als einer Ihrer Apache-Server in einem Cluster fungiert. Sie wissen, dass dieser bestimmte Server genau so konfiguriert ist, wie Sie es wollen, aber Sie sind nicht sicher, ob andere Server im Cluster genau das gleiche konfiguriert sind. Basislinien ermöglichen es Ihnen, dies zu bestimmen.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Zum Beispiel - Sie könnten eine Basiszeile aus einem Gerät mit Redhat 9 erstellen, das als einer Ihrer Apache-Server in einem Cluster fungiert. Sie wissen, dass dieser bestimmte Server genau so konfiguriert ist, wie Sie es wollen, aber Sie sind nicht sicher, ob andere Server im Cluster genau das gleiche konfiguriert sind. Baselines ermöglicht es Ihnen, dies zu bestimmen.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Weitere Informationen finden Sie im Wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Für Lizenzen, die nicht dauerhaft sind, wann läuft die Lizenz ab.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Weitere Informationen finden Sie in der Open-AudIT Knowledge Base.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Weitere Informationen finden Sie in der folgenden Anleitung, die ein Video enthält. Verwendung';

$GLOBALS["lang"]['For more information, see'] = 'Für weitere Informationen siehe';

$GLOBALS["lang"]['form_factor'] = 'Formfaktor';

$GLOBALS["lang"]['Form Factor'] = 'Formfaktor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqd';

$GLOBALS["lang"]['Fqdn'] = 'Fqd';

$GLOBALS["lang"]['France, French Republic'] = 'Frankreich, Frankreich';

$GLOBALS["lang"]['free'] = 'Kostenlos';

$GLOBALS["lang"]['Free'] = 'Kostenlos';

$GLOBALS["lang"]['French'] = 'Französisch';

$GLOBALS["lang"]['French Guiana'] = 'Französisch-Guayana';

$GLOBALS["lang"]['French Polynesia'] = 'Französisch-Polynesien';

$GLOBALS["lang"]['French Southern Territories'] = 'Französische südliche Gebiete';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Häufig gestellte Fragen';

$GLOBALS["lang"]['Friday'] = 'Freitag';

$GLOBALS["lang"]['From 100 Devices'] = 'Von 100 Geräten';

$GLOBALS["lang"]['From 500 Devices'] = 'Von 500 Geräten';

$GLOBALS["lang"]['From that page'] = 'Von dieser Seite';

$GLOBALS["lang"]['full_name'] = 'Vollständiger Name';

$GLOBALS["lang"]['Full Name'] = 'Vollständiger Name';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Vollständiges Cloud-Auditing mit allen Details aus einem regelmäßigen Open-AudIT-Audit und Details wie Maschinentyp und Größe.';

$GLOBALS["lang"]['function'] = 'Funktion';

$GLOBALS["lang"]['Function'] = 'Funktion';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPEN';

$GLOBALS["lang"]['Gabon'] = 'Gabun';

$GLOBALS["lang"]['Galician'] = 'Galicien';

$GLOBALS["lang"]['Gambia the'] = 'Gambia die';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap-Analyse (optional)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Erstellt von';

$GLOBALS["lang"]['geo'] = 'Geophysik';

$GLOBALS["lang"]['Geo'] = 'Geophysik';

$GLOBALS["lang"]['Geographical Maps'] = 'Geografische Karten';

$GLOBALS["lang"]['Georgia'] = 'Georgien';

$GLOBALS["lang"]['German'] = 'Deutsch';

$GLOBALS["lang"]['Germany'] = 'Deutschland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Aktuelles';

$GLOBALS["lang"]['Get Started'] = 'Erste Schritte';

$GLOBALS["lang"]['Get a Free License'] = 'Kostenlose Lizenz';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Lernen Sie die Open-AudIT-Plattform kennen und erkunden Sie einige seiner Features.';

$GLOBALS["lang"]['Getting Started'] = 'Erste Schritte';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Optionen';

$GLOBALS["lang"]['Global area network'] = 'Globales Netz';

$GLOBALS["lang"]['Go'] = 'Los!';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Gehen Sie zurück zu Ihrem Open-AudIT Server und erstellen Sie eine Entdeckung mit dem Ziel Windows Computer IP Adresse als Subnetz (dies wird speichern, das gesamte Subnetz wieder zu entdecken). Führen Sie die Entdeckung aus und beachten Sie alle Probleme. Für alle gefundenen Probleme geeignete Maßnahmen ergreifen.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Gehen Sie den Ziel-Windows-PC (oder verwenden Sie RDP) und loggen Sie sich ein, wie der Benutzer durch Ihre Entdeckung Anmelde-Set verwendet.';

$GLOBALS["lang"]['Go to menu'] = 'Zum Menü';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Gehen Sie zum <i>Anwendungen</i> -> <i>Anmeldungen der App</i> Menüpunkt auf der linken Seite. Suche nach Open-AudIT. Klicken Sie auf den Open-AudIT-Eintrag in der Liste (unter Angabe der App Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Gehen Sie zum <i>Zertifikate und Geheimnisse</i> Menüpunkt unter <i>Verwalten</i> im Mittenmenü.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Gehen Sie zum <i>Einzelzeichen</i> Menüpunkt und klicken Sie auf SAML für <i>Wählen Sie eine einzelne Sign-on-Methode</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Angaben';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Schlüssel';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Großartig, dann können Sie helfen! Erste Hilfe Löschen Sie den in der GUI angezeigten Text und was angezeigt werden soll. Wir werden beinhalten, dass in der Sprachdatei, die so vorwärts geht, die Übersetzung verbessert wird und Sie müssen sich nicht um die Aktualisierung für jede Veröffentlichung sorgen!';

$GLOBALS["lang"]['Greater Than'] = 'Mehr zum Thema';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Mehr als oder Gleiche';

$GLOBALS["lang"]['Greece'] = 'Griechenland';

$GLOBALS["lang"]['Greek'] = 'Griechisch';

$GLOBALS["lang"]['Green Query'] = 'Grüne Abfrage';

$GLOBALS["lang"]['Greenland'] = 'Grünland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Gruppe';

$GLOBALS["lang"]['group_by'] = 'Gruppe von';

$GLOBALS["lang"]['Group By'] = 'Gruppe von';

$GLOBALS["lang"]['group_id'] = 'Gruppen-ID';

$GLOBALS["lang"]['Group ID'] = 'Gruppen-ID';

$GLOBALS["lang"]['groups'] = 'Gruppen';

$GLOBALS["lang"]['Groups'] = 'Gruppen';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Gruppen werden als einfache Listen von Geräten verwendet, die den gewünschten Bedingungen entsprechen. Auf Wunsch mit JSON geben sie eine Liste zurück <i>Geräte.id</i> Nur. Wenn Sie die Web-Schnittstelle verwenden möchten, geben Sie die Standard-Spalten-Attributliste zurück. Gruppen können für Integrationen, Baselines und andere Elemente verwendet werden.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadelousie';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Guest Device ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Guest Device ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revision';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Festplattenindex';

$GLOBALS["lang"]['Hard Drive Index'] = 'Festplattenindex';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware-Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware-Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Wurde diese Politik in dieser Organisation angewendet.';

$GLOBALS["lang"]['hash'] = 'Hash!';

$GLOBALS["lang"]['Hash'] = 'Hash!';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Lassen Sie den Agenten immer das neueste Audit-Skript laufen (wenn Sie Open-AudIT aktualisieren und die Skripte manuell auf die Ziele kopieren, dann cron - Sie müssen diese Skripte für jedes Upgrade aktualisieren).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Lassen Sie Ihren Benutzer eine Eingabeaufforderung öffnen (verwenden <i>Führen Sie als Administrator</i>) Fügen Sie die unten in die Aufforderung, den Agenten herunterzuladen.';

$GLOBALS["lang"]['Head'] = 'Kopf';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island und McDonald Inseln';

$GLOBALS["lang"]['Hebrew'] = 'Hebräisch';

$GLOBALS["lang"]['height'] = 'Höhe';

$GLOBALS["lang"]['Height'] = 'Höhe';

$GLOBALS["lang"]['Height in RU'] = 'Höhe in RU';

$GLOBALS["lang"]['Help'] = 'Hilfe';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hilfe und häufig gestellte Fragen';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Hilft bei der Bewältigung und Minderung von Informationssicherheitsrisiken';

$GLOBALS["lang"]['Hide Audit Window'] = 'Verstecken Audit Fenster';

$GLOBALS["lang"]['high'] = 'hoch';

$GLOBALS["lang"]['High'] = 'hoch';

$GLOBALS["lang"]['High Availability'] = 'Hohe Verfügbarkeit';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Heiliger Stuhl (Vatikanstadtstaat)';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Gastgeber';

$GLOBALS["lang"]['Host'] = 'Gastgeber';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Geruch';

$GLOBALS["lang"]['Hour'] = 'Geruch';

$GLOBALS["lang"]['How Does It Work?'] = 'Wie funktioniert es?';

$GLOBALS["lang"]['How Does it Work?'] = 'Wie funktioniert das?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Wie lange dauert es?';

$GLOBALS["lang"]['How and Why is'] = 'Wie und warum ist';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Wie und warum ist Open-AudIT sicherer';

$GLOBALS["lang"]['How do they work?'] = 'Wie funktionieren sie?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Wie findet ein Device Seed Discovery bekannte IPs?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Wie lange dauerte der Befehl, um auszuführen.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Wie lange sollte Nmap auf eine Antwort warten, pro Gerät.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Wie viele Schaltungen speisen zu diesem Rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Wie viele Politiken zu einem Scheitern führen.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Wie viele Politiken zu einem Pass führen.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Wie viele Steckdosen in diesem Rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Wie viele Regaleinheiten in der Höhe sind diese Rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Wie oft sollte der Sammler den Server für eine Aufgabe fragen.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Wie sollten wir Geräte auswählen, die integriert werden sollen (mit einem Attribut, Query oder einer Gruppe).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Wie die Schwachstelle ausgenutzt wird (z.B. Netzwerk, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'Wie zu vergleichen';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Menschlich lesbare Erklärung der Verwundbarkeit.';

$GLOBALS["lang"]['Hungarian'] = 'Ungarn';

$GLOBALS["lang"]['Hungary'] = 'Ungarn';

$GLOBALS["lang"]['hw_cpe'] = 'Hw C.';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw C.';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Ich habe die EULA gelesen.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Ich hoffe, dieser Beitrag hat alle Bedenken, die Sie über Open-AudIT und Sicherheit haben gelindert. Wenn Sie überhaupt Fragen haben, zögern Sie nicht, uns hier bei FirstWave zu erreichen. Wir freuen uns immer über Ihre Anliegen und Bedürfnisse. Und vielleicht, wenn Ihre Frage nicht etwas ist, das ich hier angesprochen habe, kann ich es hier für zukünftige Benutzer hinzufügen';

$GLOBALS["lang"]['id'] = 'Ausweis';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'F';

$GLOBALS["lang"]['IMPORTANT'] = 'EINFUHR';

$GLOBALS["lang"]['INPUTS'] = 'INPUS';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP-Adresse';

$GLOBALS["lang"]['ip'] = 'IP-Adresse';

$GLOBALS["lang"]['IP Address'] = 'IP-Adresse';

$GLOBALS["lang"]['IP Addresses'] = 'IP-Adressen';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Zuletzt gesehen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set von';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Nur ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Island';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icon und Text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icon nur, Text nur oder Icon und Text.';

$GLOBALS["lang"]['id_internal'] = 'Id intern';

$GLOBALS["lang"]['Id Internal'] = 'Id intern';

$GLOBALS["lang"]['id_number'] = 'Anzahl';

$GLOBALS["lang"]['Id Number'] = 'Anzahl';

$GLOBALS["lang"]['identification'] = 'Identifizierung';

$GLOBALS["lang"]['Identification'] = 'Identifizierung';

$GLOBALS["lang"]['Identify information assets'] = 'Identifizierung von Informationsvermögen';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifizierung der interessierten Parteien und ihrer Anforderungen';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Schlüsselakteure identifizieren und Rollen zuordnen';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'das Gerät(en) zu identifizieren, das Ihr Vorbild ist, oder <i>Goldbild</i> Sie möchten ähnliche Geräte gegen vergleichen.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identifizierung und Bewertung von Sicherheitsrisiken';

$GLOBALS["lang"]['If'] = 'wenn';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Wenn ein Gerät mit Hilfe der <i>Entdecken Sie das Gerät</i> Link auf der Gerätedetails-Seite, wir überprüfen zunächst, ob dieses Gerät bereits entdeckt wurde (von Discovery) und wenn ja, verwenden Sie die Entdeckungsoptionen von diesem Scan. Wenn es noch nicht entdeckt wurde, wenden wir uns an den Konfigurationsartikel Discovery_default_scan_Option der Einstellungen.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Wenn ein neuer Org erstellt wird, wird automatisch ein LDAP-Gruppenname vom Namen abgeleitet. Wenn beispielsweise ein neuer Org erstellt wird und Test genannt wird, wird die entsprechende LDAP-Gruppe als open-audit_orgs_test bezeichnet.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Wenn ein Port mit gefiltert reagiert, sollten wir es als verfügbar betrachten.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Wenn ein Port mit openfilterfiltered reagiert, sollten wir es als verfügbar betrachten.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Wenn in den ausgewählten Geräten kein Remote-Gerät vorhanden ist, sollten wir es aus dem externen System löschen.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Wenn ein Open-AudIT-Gerät geändert wurde, sollten wir das externe System aktualisieren.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Wenn ein Open-AudIT-Gerät nicht auf dem externen System ist, sollten wir es erstellen.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Wenn ein Agent berichtet, dass seine primäre IP in diesem Subnetz ist, führen Sie die Aktionen.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Wenn eine dieser (komma seperated, keine Leerzeichen) Ports erkannt werden, nehmen Sie an, dass SSH auf ihnen läuft und verwenden sie für die Prüfung. Keine Notwendigkeit, diesen Port zu den Custom TCP Ports hinzuzufügen - es wird automatisch hinzugefügt.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Wenn kein Bediener angegeben ist, ist der Standard =. Eigenschaften sollten vollständig qualifiziert sein - dh, device.hostname (nicht nur Hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Ist kein Wert vorhanden, liefert dieser Wert. EG: für system.nmis_group / konfiguraion. Gruppe wir verwenden';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Wenn eingestellt, hält ein JSON-Array von bestimmten Gerätespalten, hat dieser Benutzer gewählt, um zu sehen, außer der Konfigurationseinstellung.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Wenn die OS-Familie (wie vom Gerät gemeldet) diesen Artikel enthält, Pass.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Hat der Open-AudIT Server Collectors berichtet, wird ein zusätzlicher Dropdown bereitgestellt. Sie können dies auswählen, um anzugeben, auf welcher Collector die Aufgabe ausgeführt werden soll. Nur Discovery-Aufgaben werden für Sammler unterstützt.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Wenn die Agent OS Familie (case insensitive) enthält diese String, führen Sie die Aktionen.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Wird die Binärdatei nicht in einem dieser Standorte gefunden, wird im Installer eine Warnmeldung angezeigt.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Sind folgende Bedingungen erfüllt:<br/><ul><li>eine Rolle hat eine zugeordnete ad_group</li><li>ein Org hat eine zugeordnete ad_group</li><li>ein LDAP Server hat use_roles auf y gesetzt</li><li>ein Benutzer existiert in LDAP (be it Active Directory oder OpenLDAP) und ist in den zugewiesenen ad_groups</li></ul>Dieser Benutzer kann sich auf Open-AudIT anmelden, ohne dass ein Konto in Open-AudIT erstellt werden muss. Open-AudIT wird die betreffende LDAP abfragen und wenn der Benutzer in den gewünschten Gruppen, aber nicht in Open-AudIT ist, werden seine Benutzerattribute (Name, Vollname, E-Mail, Rollen, Orgs usw.) innerhalb von Open-AudIT automatisch bevölkert und sie werden eingeloggt.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Wenn das lokale Feld wahr ist (bool) oder y (string) oder Y (string) oder 1 (integer) dann setzen Sie die externen Daten auf 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Wenn das lokale Feld wahr ist (bool) oder y (string) oder Y (string) oder 1 (integer) dann setzen Sie die externen Daten auf y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Ist die primäre IP (wie vom Gerät angegeben) in diesem Subnetz, passieren Sie.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Wenn das Benutzerkonto nicht tatsächlich innerhalb von Open-AudIT existiert und <code>use_authorisation</code> wird eingestellt, der Benutzer wird erstellt. Wenn es existiert, werden Details wie E-Mail, Vollname, etc. bevölkert.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Wenn der Benutzer entweder keine gültigen Anmeldeinformationen hat oder nicht in mindestens einer Open-AudIT-Rolle und Gruppe (bei Verwendung <code>use_authorisation</code>), Open-AudIT wird zurückfallen, um lokale Open-AudIT-Benutzerdetails zu verwenden und dort Authentifizierung und Autorisierung zu versuchen. Dass der Benutzer den Zugriff verweigert.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Wenn der Benutzer, der sich auf Open-AudIT einloggt, keinen Zugriff auf die Suche LDAP hat, können Sie ein anderes Konto verwenden, das diesen Zugriff hat.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Wenn der Benutzer, der sich auf Open-AudIT einloggt, nicht über den Zugriff auf die Suche OpenLDAP verfügt, können Sie ein anderes Konto verwenden, das diesen Zugriff hat. Verwenden Sie den dn_account und dn_password, um diese zu konfigurieren.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Wird der Wert nicht gesetzt, wird der aktuelle Zeitstempel verwendet.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Wird der Wert eingestellt, wird dieser Zeitstempelwert verwendet.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Wenn diese Änderung nicht für Sie funktioniert, ist alles nicht verloren. Wir haben einen Konfigurationsartikel hinzugefügt (standardmäßig auf n gesetzt, so dass es nicht diese neue Option aus dem Feld verwenden wird) genannt Discover_use_org_id_match. Wenn Sie es auf y ändern, wird die OrgID, die dem Gerät durch die Entdeckung zugewiesen wird, in den entsprechenden Spielregeln verwendet.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Wenn diese vielen Minuten (oder mehr) vergangen sind, seit der Server zuletzt sah das Gerät, passieren.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Wenn diese viele oder mehr Minuten vergangen sind, seit das Gerät den Server kontaktiert, führen Sie die Aktionen aus.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Wenn dies geschieht, dann ist das Problem, das Sie sehen, mit der Tabellensteuerung verbunden, die auf der Webseite verwendet wird. Es speichert nur den Zustand der Kontrollkästchen für die aktuelle Seite. Wenn Sie Auswahl treffen, dann Seite vorwärts/zurück diese Auswahl wird verloren. Sie können jedoch erreichen, was Sie wollen, indem Sie die Anzahl der auf jeder Seite angezeigten Geräte erweitern. In der oberen linken Ecke ist eine Dropdown-Beschriftung “Records pro Seite”; verwenden Sie dies, um die Anzahl der angezeigten Einträge zu erweitern, bis Sie sehen, alles, was Sie für Bulk Edit auswählen möchten.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Wenn wir die San Management-Software erkennen, sollten wir eine Auto-Entdeckung vor der Abfrage durchführen.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Wenn Sie einen Standorttyp hinzufügen, fügen Sie diese Symbole hinzu';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Wenn Sie einen Gerätetyp hinzufügen, um das zugehörige Symbol anzuzeigen, müssen Sie die .svg formatierte Datei manuell in das Verzeichnis kopieren';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Wenn Sie ein unterstützter FirstWave-Kunde sind, werden ein paar Artikel Ihnen helfen. Öffnen Sie ein Support-Ticket mit FirstWave und befestigen Sie das Logfile. Auch die Ausgabe von der Support-Taste auf der oberen rechten Seite der';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Wenn Sie ein unterstützter Kunde sind und ein Support-Ticket mit FirstWave öffnen, befestigen Sie diese Dateien bitte.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Wenn Sie Probleme mit Google Maps API-Schlüsseln haben oder Ihr Unternehmen keinen Zugang hat, um Google Maps API-Schlüssel zu erstellen, kontaktieren Sie bitte das FirstWave Support-Team.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Wenn Sie unter Windows sind oder Ihr NMIS-Server entfernt ist, müssen Sie die URL, den Benutzernamen und das Passwort angeben, um auf diesen Server zuzugreifen.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Wenn Sie auf einer anständigen Breitband- oder Ethernet-Verbindung sind, würde ich empfehlen immer -T4 (Aggressive). Einige Leute lieben -T5 (Insane), obwohl es zu aggressiv für meinen Geschmack ist. Manchmal geben die Menschen -T2 (Polite) an, weil sie denken, dass es weniger wahrscheinlich ist, Gastgeber abzustürzen oder weil sie sich als höflich im Allgemeinen betrachten. Sie wissen oft nicht, wie langsam -T2 wirklich ist. Ihr Scan kann zehnmal länger dauern als ein Standard-Scan. Maschinenunfälle und Bandbreite Probleme sind selten mit den Standard-TIM-Optionen -T3 (Normal) und so empfehle ich normalerweise, dass für vorsichtige Scanner. Omitting Versionserkennung ist viel effektiver als das Spielen mit Timing-Werten, um diese Probleme zu reduzieren.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Wenn Sie ein RedHat- oder Centos-System betreiben und Nmap aktualisiert haben, setzen Sie bitte die SUID auf die Binärdatei um';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Wenn Sie einen Open-AudIT-Server auf Linux ausführen, wird dies Sie nicht beeinflussen.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Wenn Sie Open-AudIT unter Windows verwenden oder wenn Ihr NMIS-Server nicht auf Ihrem Open-AudIT Server (bei einigen Linux-Installationen) ist, müssen Sie Zugriffsdaten und eine URL auf das entfernte NMIS liefern - aber das ist alles! Ja - Integrationen zwischen NMIS und Open-AudIT funktionieren jetzt sogar mit Windows-basiertem Open-AudIT!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Wenn Sie einen Collector wählen, wird es geplant, auf der nächsten 5 Minuten Grenze auszuführen.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Wenn Sie normalerweise Geräte_assigned_to_org einstellen und das Konfigurationselement aktiviert ist, wird die OrgID verwendet, um das Spiel weiter zu verfeinern.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Wenn Sie nicht normalerweise Geräte_assigned_to_org einstellen, wird es keinen Effekt haben. Wir überprüfen nur mit der OrgID, ob sie auf Entdeckung gesetzt wurde (oder manuell in einem Audit-Skript) und in der Konfiguration aktiviert wurde.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Wenn Sie den Konfigurationsartikel aktivieren, verwenden Sie die Entdeckung, um einen Org zuzuordnen und anschließend die OrgID eines Geräts nach der Entdeckung zu ändern, dann werden Sie wahrscheinlich ein neues Gerät erstellt haben, wenn die Entdeckung läuft. In diesem Fall sollten Sie wahrscheinlich nur unset device_assigned_to_org vor dem Laufen nachfolgender Entdeckungen. Dies ist, weil (in diesem Fall) Sie Open-AudIT gesagt haben <i>Diese Geräte dieser Entdeckung gehören Org X<i>, aber dann die Org des Geräts geändert. Sie haben die gespeicherten Geräteinformationen geändert. In diesem Fall gibt es nicht mehr ein Gerät von Org X, so dass wir ein neues erstellen.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Wenn Sie Anti-Virus-Software laufen, so dass die Dienste von Opmantek (omkd), Apache (apache2.2) und MySQL (mysql) Autostart und -lauf ist unerlässlich. Diese Dienste werden von Open-AudIT genutzt. Du musst das nur einmal tun. Wenn Ihr Anti-Virus-Programm Sie weiterhin über Open-AudIT veranlasst, veröffentlichen Sie bitte die Foren oder senden Sie eine E-Mail, um mit dem Namen und der Version Ihrer Anti-Virus-Software zu unterstützen.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Wenn Sie Arbeitsinformationen haben, können Sie erwarten, dass die volle Menge an Informationen möglich ist.<br/><br/>Offensichtlich ist der beste Weg, Open-AudIT zu verwenden, um die gefundenen Geräte ( seien sie WMI, SSH oder SNMP-Berechtigungen) zu nutzen.<br/><br/>Wir haben auch eine Seite zum Auditing ohne Anmeldeinformationen.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Wenn Sie das Feld \"id\" einschließen <strong>und</strong> set it with a number, that item wird aktualisiert und nicht erstellt.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Wenn Sie Active Directory-Zugriff konfigurieren müssen, können Sie in der Regel das Beispiel von <code>cn=Users,dc=your,dc=domain,dc=com</code> für Sie <code>base_dn</code>. Es gibt keine Notwendigkeit zu setzen <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Wenn Sie OpenLDAP-Zugriff für Ihre Benutzer konfigurieren müssen und ein bestimmter Benutzer Zugriff DN ist normalerweise <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> dann sollten Sie <code>base_dn</code> bis <code>dc=your,dc=domain,dc=com</code> und <code>user_dn</code> bis <code>uid=@username@@domain,cn=People</code>. Die besonderen Worte <code>@username</code> und <code>@domain</code> wird durch die von Ihrem Benutzer auf der Anmeldeseite bereitgestellten Anmeldedaten ersetzt.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Wenn Sie eine Entdeckung auf einem Subnetz ausführen, auf dem der Server (oder Collector) direkt installiert ist, können Sie die folgenden für antwortende Geräte erwarten.';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Wenn Sie auf einem Subnetz entdecken, auf dem Ihr Server (oder Collector) nicht direkt installiert ist, können Sie die folgenden für die Antwort von Geräten erwarten';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Wenn Sie einen Listentyp auswählen, erscheint ein zusätzliches Feld als Werte. Sie sollten hier eine Komma getrennte Liste von wählbaren Werten setzen. Diese werden in einem Dropdown-Box angezeigt, wenn das Feld bearbeitet wird.';

$GLOBALS["lang"]['If you set the values for'] = 'Wenn Sie die Werte für';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Wenn Sie Ihre Agenten zwingen möchten, eine bestimmte Konfiguration zu verwenden, können Sie die ID des Agenten-Eintrags liefern, wie unten (ersetzen Sie $id mit der Anzahl der Agenten-Eintrag). Wenn dieser Agent installiert ist, wird er mit dem sevrer einchecken und <strong>nur</strong> überprüfen, ob eine Person Agent-Einträge Attribute (Tests und Aktionen). Dies kann nützlich sein, wenn Sie ein MSP sind - erstellen Sie einen Agenten-Eintrag für einen bestimmten Kunden und haben ihre Geräte alle verwenden diesen Eintrag, der sie einem Org und Standort zuweist.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Wenn Sie eingraben und die Integration anpassen möchten, klicken Sie auf die Erweiterte Schaltfläche (und versuchen Sie nicht überwältigt zu werden!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Wenn Sie eine Discovery auf einem extern bereitgestellten Gerät ausführen möchten, wählen Sie die Option und wenn die Integration erstellt wird, so s the Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Wenn Sie das Skript außerhalb von Discovery verwenden möchten, haben wir einen anderen Endpunkt namens <i>Skripte</i>. Siehe Dokumentation';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Wenn Ihr Benutzer nicht <i>Führen Sie als Administrator</i> Rechte, sie können immer noch den Agenten herunterladen (erste Befehl oben) und ausführen, um eine Prüfung wie unten einzureichen. Es wird ein einmaliges Audit sein, ohne dass der Agent installiert oder geplant ist.';

$GLOBALS["lang"]['ifadminstatus'] = 'Wenn Sie nicht';

$GLOBALS["lang"]['Ifadminstatus'] = 'Wenn Sie nicht';

$GLOBALS["lang"]['iflastchange'] = 'Wenn dies der Fall ist';

$GLOBALS["lang"]['Iflastchange'] = 'Wenn dies der Fall ist';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ungültige SSL ignorieren';

$GLOBALS["lang"]['Ignored'] = 'Ignoriert';

$GLOBALS["lang"]['image'] = 'Bild';

$GLOBALS["lang"]['Image'] = 'Bild';

$GLOBALS["lang"]['Images'] = 'Bilder';

$GLOBALS["lang"]['impact_availability'] = 'Verfügbarkeit auf Anfrage';

$GLOBALS["lang"]['Impact Availability'] = 'Verfügbarkeit auf Anfrage';

$GLOBALS["lang"]['impact_confidentiality'] = 'Auswirkungen Vertraulichkeit';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Auswirkungen Vertraulichkeit';

$GLOBALS["lang"]['impact_integrity'] = 'Auswirkungen Integrität';

$GLOBALS["lang"]['Impact Integrity'] = 'Auswirkungen Integrität';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implementierung ausgewählter Kontrollen und Verfahren';

$GLOBALS["lang"]['Implementation'] = 'Durchführung';

$GLOBALS["lang"]['implementation_notes'] = 'Durchführungshinweise';

$GLOBALS["lang"]['Implementation Notes'] = 'Durchführungshinweise';

$GLOBALS["lang"]['Import'] = 'Einfuhr';

$GLOBALS["lang"]['Import Example Data'] = 'Angaben zum Beispiel';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importieren Sie mehrere {collection} mit einem CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Verbesserungsmöglichkeiten';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Verbesserungsmöglichkeiten';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Verbessert die Kontinuität und Widerstandsfähigkeit der Unternehmen';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'In einem zweiten Tab oder Fenster gehen Sie zu Ihrer OKTA-Konsole und klicken Sie auf <i>App Integration erstellen</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'In einem zweiten Tab oder Fenster melden Sie sich an';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Meiner persönlichen Meinung nach ist der beste Weg, jeden einzelnen Artikel in Ihrem Netzwerk zu finden und zu prüfen, ein Seed Discovery für jedes Subnetz, das auf dieses Subnetz beschränkt ist (unter Verwendung von Anmeldeinformationen). Seed Discoveries verwenden Switch, Router und Computer MAC Adresse Tabellen, um kein einziges Gerät zu verpassen. Wenn es mit dem Netzwerk verbunden ist und TCP/IP verwendet, muss ein Switch/Router/Computer wissen, dass es da ist - das ist genau, wie TCP/IP funktioniert. Kombinieren Sie, dass mit benutzerdefinierten TCP- und/oder UDP-Ports und Sie sollten dann auch in der Lage sein, den Gerätetyp zu bestimmen. Aber das ist nur meine persönliche Präferenz';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Damit Open-AudIT Benutzerberechtigungen auf Gegenstände anwenden kann, beauftragen wir den Nutzer von <code>WHERE @filter</code>. Wenn Sie dieses Format nicht verwenden, wird die AbfrageCreateForm eine Warnung werfen. Nur Benutzer mit der Admin-Rolle sind erlaubt, Abfragen zu erstellen, die dieses Attribut fehlt und sogar dann erst nach dem Konfigurationspunkt für <i>Fortgeschrittene</i> wurde aktiviert.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Um Google Maps zu aktivieren, müssen Sie einen Google API Key folgen Sie diesem Link und melden Sie sich mit Ihrem Google-Konto,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Um die Azure Rest API zu verwenden, müssen Sie eine Azure Active Directory-Anwendung erstellen, die zur Authentifizierung verwendet wird.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Um diese Funktionalität zu nutzen, muss sie in der Konfiguration aktiviert werden - klicken Sie auf';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In der (komma seperated) Liste';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Im Falle <code>in</code> und <code>notin</code>, Sie sollten die Werte in runden Klammern einschließen und sie mit einem Komma trennen (nur ein Komma, nicht ein Komma, dann Raum).<br/><br/>Mit diesen Operatoren können Sie ganz umfassend filtern.<br/><br/>Wenn Sie Daten und Filter auf mehreren Spalten hinzufügen, werden diese Spalten mit Hilfe von <strong>UND</strong>. Sie können nicht filtern <strong>ANHANG</strong> Zustand. Mit der Aufnahme von <code>notin</code>, Sie sollten in der Lage, die meisten Suchvorgänge zu arbeiten. Und für diejenigen, die wirklich ununterstützte und komplexe Auswahlen benötigen, können Sie immer eine eigentliche Abfrage schreiben.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Für den Fall, dass wir mehrere Felder (in der Regel im JSON-Format) innerhalb eines BIGTEXT MySQL-Feldes speichern (z.B. Anmeldeinformationen. Anmeldeinformationen - die Anmeldeinformationen Spalte in der Anmeldetabelle), sollten Sie das Format verwenden';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'In der Eingabeaufforderung Shell, navigieren Sie zum Download-Verzeichnis (wahrscheinlich) <code>cd Downloads</code>)';

$GLOBALS["lang"]['Inactive'] = 'Inaktiv';

$GLOBALS["lang"]['Incomplete'] = 'Unvollständig';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'Indien';

$GLOBALS["lang"]['Indonesia'] = 'Indonesien';

$GLOBALS["lang"]['Indonesian'] = 'Indonesisch';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Nur Informationen.';

$GLOBALS["lang"]['Informational'] = 'Information';

$GLOBALS["lang"]['initial_size'] = 'Anfangsgröße';

$GLOBALS["lang"]['Initial Size'] = 'Anfangsgröße';

$GLOBALS["lang"]['Initial login credentials are'] = 'Erste Anmeldeinformationen sind';

$GLOBALS["lang"]['Initiation'] = 'Einleitung';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Eingang';

$GLOBALS["lang"]['Input Type'] = 'Eingangstyp';

$GLOBALS["lang"]['inputs'] = 'Eingänge';

$GLOBALS["lang"]['Inputs'] = 'Eingänge';

$GLOBALS["lang"]['Insane'] = 'Erbsen';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Fügen Sie einen neuen Eintrag {collection} ein.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Fügen Sie Beispieldaten ein und entdecken Sie alles, was Open-AudIT Ihnen sagen kann.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Fügen Sie Ihre Kauflizenz Schlüssel';

$GLOBALS["lang"]['install'] = 'Installieren';

$GLOBALS["lang"]['Install'] = 'Installieren';

$GLOBALS["lang"]['install_date'] = 'Datum der Installation';

$GLOBALS["lang"]['Install Date'] = 'Datum der Installation';

$GLOBALS["lang"]['install_directory'] = 'In den Warenkorb';

$GLOBALS["lang"]['Install Directory'] = 'In den Warenkorb';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installieren Sie OpenScap bei Bedarf';

$GLOBALS["lang"]['install_source'] = 'Quelle installieren';

$GLOBALS["lang"]['Install Source'] = 'Quelle installieren';

$GLOBALS["lang"]['Install Support'] = 'Support installieren';

$GLOBALS["lang"]['installed_by'] = 'In den Warenkorb';

$GLOBALS["lang"]['Installed By'] = 'In den Warenkorb';

$GLOBALS["lang"]['installed_on'] = 'In den Warenkorb';

$GLOBALS["lang"]['Installed On'] = 'In den Warenkorb';

$GLOBALS["lang"]['Installing'] = 'Installation';

$GLOBALS["lang"]['Installing on Linux'] = 'Installation auf Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installation auf MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installation unter Windows';

$GLOBALS["lang"]['instance'] = 'Rechtssache';

$GLOBALS["lang"]['Instance'] = 'Rechtssache';

$GLOBALS["lang"]['instance_ident'] = 'Rechtssache';

$GLOBALS["lang"]['Instance Ident'] = 'Rechtssache';

$GLOBALS["lang"]['instance_options'] = 'Rechtsmittel';

$GLOBALS["lang"]['Instance Options'] = 'Rechtsmittel';

$GLOBALS["lang"]['instance_provider'] = 'Anbieter';

$GLOBALS["lang"]['Instance Provider'] = 'Anbieter';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Zurückbehaltung Kennnummer';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Zurückbehaltung Kennnummer';

$GLOBALS["lang"]['instance_state'] = 'Rechtssache';

$GLOBALS["lang"]['Instance State'] = 'Rechtssache';

$GLOBALS["lang"]['instance_tags'] = 'Rechtssache';

$GLOBALS["lang"]['Instance Tags'] = 'Rechtssache';

$GLOBALS["lang"]['instance_type'] = 'Art der Rechtssache';

$GLOBALS["lang"]['Instance Type'] = 'Art der Rechtssache';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integration';

$GLOBALS["lang"]['integrations'] = 'Integration';

$GLOBALS["lang"]['Integrations'] = 'Integration';

$GLOBALS["lang"]['integrations_id'] = 'Integrations-ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrations-ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrationsprotokoll';

$GLOBALS["lang"]['Integrations Log'] = 'Integrationsprotokoll';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrationen können beliebig geplant werden. Dies ist dem Benutzer überlassen.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrationen können nach Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktive Armaturenbretter';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktive Dashboards bieten eine sofortige Sichtbarkeit in den Status von Netzwerk-Inventar, sodass IT-Teams auf einen Blick neu entdeckte Geräte und ungewöhnliches Geräteverhalten erkennen können.';

$GLOBALS["lang"]['interface'] = 'Schnittstelle';

$GLOBALS["lang"]['Interface'] = 'Schnittstelle';

$GLOBALS["lang"]['interface_id'] = 'Schnittstellen-ID';

$GLOBALS["lang"]['Interface ID'] = 'Schnittstellen-ID';

$GLOBALS["lang"]['interface_type'] = 'Schnittstellentyp';

$GLOBALS["lang"]['Interface Type'] = 'Schnittstellentyp';

$GLOBALS["lang"]['Internal'] = 'Interne';

$GLOBALS["lang"]['Internal Audit'] = 'Interne Prüfung';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Interne Prüfung und Überprüfung';

$GLOBALS["lang"]['Internal Field Name'] = 'Interner Feldname';

$GLOBALS["lang"]['Internal ID'] = 'Interne Kennung';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Internes JSON-Array gültiger Zugriffstoken für diesen Benutzer.';

$GLOBALS["lang"]['Introduction'] = 'Einleitung';

$GLOBALS["lang"]['invoice'] = 'Rechnung';

$GLOBALS["lang"]['Invoice'] = 'Rechnung';

$GLOBALS["lang"]['invoice_id'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Invoice ID'] = 'Passwort vergessen?';

$GLOBALS["lang"]['invoice_item'] = 'Invoice Item';

$GLOBALS["lang"]['Invoice Item'] = 'Invoice Item';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Adresse extern A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Adresse extern A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adresse extern B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adresse extern B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Adresse intern A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Adresse intern A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Adresse intern B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Adresse intern B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip geprüfter Zähler';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip geprüfter Zähler';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Entdeckter Graf';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Entdeckter Graf';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Ermöglicht';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Ermöglicht';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Beantwortungszähler';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Beantwortungszähler';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanning Count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanning Count';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irland';

$GLOBALS["lang"]['Irish'] = 'Irland';

$GLOBALS["lang"]['Is FRU'] = 'Ist FRU';

$GLOBALS["lang"]['is_fru'] = 'Ist Fru';

$GLOBALS["lang"]['Is Fru'] = 'Ist Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Ist der NMIS-Server lokal (auf diesem Open-AudIT-Server) oder remote?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ist das Konto aktiv? Wenn eingestellt <code>n</code>, der Benutzer kann sich nicht anmelden.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Ist diese Anfrage auf lizenzierte Kunden beschränkt.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Ist diese Aufgabe aktiviert (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Lieferung';

$GLOBALS["lang"]['issuer'] = 'Emittent';

$GLOBALS["lang"]['Issuer'] = 'Emittent';

$GLOBALS["lang"]['issuer_name'] = 'Emittentname';

$GLOBALS["lang"]['Issuer Name'] = 'Emittentname';

$GLOBALS["lang"]['Issues'] = 'Emissionen';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Es ist <i>Nur Arbeiten</i> mit NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Es ist verfügbar bei Menu -> Hilfe ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Es ist wichtig zu beachten, dass, wenn Open-AudIT eine Übereinstimmung mit allen Eigenschaften bestimmt, die auf <i>y</i> muss genau übereinstimmen (und nicht leer sein), um Open-AudIT zu bestimmen, dass das entdeckte Gerät bereits in der Datenbank mit einem Gerät übereinstimmt. Wenn keine der Eigenschaften markiert sind <i>y</i> Match, dann wird ein neuer Geräteeintrag erstellt, der zu doppelten Geräteeinträgen führen könnte. In Situationen, in denen Eigenschaften dupliziert werden, z.B. ein dbus_id während eines VM-Klons kopiert wird, kann ein bestehendes Gerät falsch überschrieben/updiert werden, anstatt dass ein neuer Eintrag erstellt wird, der zu fehlenden Geräten führt.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Es ist nicht ungewöhnlich, einen überlappenden Adressraum in einer bestimmten Organisation zu haben. Nicht ideal, aber nicht ungewöhnlich.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Es ist sehr häufig für die zweite Klasse Mainboard-Hersteller, dies nicht zu setzen, um es auf alle <i>0)</i>oder sogar alle <i>F</i>S.';

$GLOBALS["lang"]['Italian'] = 'Italienisch';

$GLOBALS["lang"]['Italy'] = 'Italien';

$GLOBALS["lang"]['Items not in Baseline'] = 'Artikel nicht in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON zum Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Januar';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Japanese'] = 'Japanisch';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanien';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'Schlüssel';

$GLOBALS["lang"]['Key Components'] = 'Schlüsselkomponenten';

$GLOBALS["lang"]['Key Password (optional)'] = 'Schlüsselwort (optional)';

$GLOBALS["lang"]['keys'] = 'Schlüssel';

$GLOBALS["lang"]['Keys'] = 'Schlüssel';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Koreanisch';

$GLOBALS["lang"]['Kuwait'] = 'Kuba';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgisier';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgisische Republik';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Gruppe';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP wurde für diesen Benutzer gesucht und ihr Konto wurde gefunden.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP wurde für diesen Benutzer gesucht und ihr Konto wurde nicht gefunden. Überprüfen Sie die LDAP-Serverprotokolle. Die Benutzerinformationen haben funktioniert, aber der Benutzer wurde nicht gefunden. Überprüfen Sie auch, ob Sie das richtige Basis-DN-Attribut angegeben haben, wenn Sie den LDAP-Server in Open-AudIT erstellt haben.';

$GLOBALS["lang"]['lang'] = 'Langlauf';

$GLOBALS["lang"]['Lang'] = 'Langlauf';

$GLOBALS["lang"]['language'] = 'Sprache';

$GLOBALS["lang"]['Language'] = 'Sprache';

$GLOBALS["lang"]['Lao'] = 'Lammfell';

$GLOBALS["lang"]['last_changed'] = 'Letzte Änderung';

$GLOBALS["lang"]['Last Changed'] = 'Letzte Änderung';

$GLOBALS["lang"]['last_finished'] = 'Letzte Fertigstellung';

$GLOBALS["lang"]['Last Finished'] = 'Letzte Fertigstellung';

$GLOBALS["lang"]['last_logon'] = 'Letzter Beitrag';

$GLOBALS["lang"]['Last Logon'] = 'Letzter Beitrag';

$GLOBALS["lang"]['Last Name'] = 'Letzter Name';

$GLOBALS["lang"]['last_os_update'] = 'Letztes Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Letztes Os Update';

$GLOBALS["lang"]['last_result'] = 'Letztes Ergebnis';

$GLOBALS["lang"]['Last Result'] = 'Letztes Ergebnis';

$GLOBALS["lang"]['last_run'] = 'Letzter Beitrag';

$GLOBALS["lang"]['Last Run'] = 'Letzter Beitrag';

$GLOBALS["lang"]['last_seen'] = 'Letzter Tag';

$GLOBALS["lang"]['Last Seen'] = 'Letzter Tag';

$GLOBALS["lang"]['last_seen_by'] = 'Letzter Tag von';

$GLOBALS["lang"]['Last Seen By'] = 'Letzter Tag von';

$GLOBALS["lang"]['last_user'] = 'Letzter Beitrag';

$GLOBALS["lang"]['Last User'] = 'Letzter Beitrag';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Letzter ist WMI. Für Windows wie in Linux wird ein Benutzer mit Administrator-Ebenenzugriff bevorzugt (siehe Target Client Configuration auf dem Wiki).';

$GLOBALS["lang"]['lastModified'] = 'Zuletzt geändert';

$GLOBALS["lang"]['LastModified'] = 'Zuletzt geändert';

$GLOBALS["lang"]['latitude'] = 'Breite';

$GLOBALS["lang"]['Latitude'] = 'Breite';

$GLOBALS["lang"]['Latvia'] = 'Lettland';

$GLOBALS["lang"]['Latvian'] = 'Lettisch';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'ANHANG';

$GLOBALS["lang"]['Ldap'] = 'ANHANG';

$GLOBALS["lang"]['ldap_base_dn'] = 'Basis Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Basis Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Kredit-Dn-Konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Kredit-Dn-Konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Passwort';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Passwort';

$GLOBALS["lang"]['Learn About'] = 'Erfahren Sie mehr';

$GLOBALS["lang"]['Learn More'] = 'Mehr erfahren';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Ablaufdatum';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Ablaufdatum';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Rechtliche Anforderungen';

$GLOBALS["lang"]['Legal Requirements'] = 'Rechtliche Anforderungen';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Weniger als';

$GLOBALS["lang"]['Less Than or Equals'] = 'Weniger als oder Gleiche';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Setzen Sie das Protokoll zum Debug. Kopie der Datei:';

$GLOBALS["lang"]['level'] = 'Ebene';

$GLOBALS["lang"]['Level'] = 'Ebene';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Höhe der Privilegien, die benötigt werden, um zu nutzen (Nein, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotheken (d.h. Code, dass ein anderes Programm enthalten könnte). Dies sind typischerweise Elemente wie Wordpress Erweiterungen, drupal Erweiterungen, node.js Bibliotheken, Android / iPhone / Windows-Bibliotheken, Python-Bibliotheken, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyen Arabische Jamahiriya';

$GLOBALS["lang"]['License'] = 'Lizenz';

$GLOBALS["lang"]['License Key'] = 'Lizenzschlüssel';

$GLOBALS["lang"]['License Required'] = 'Lizenz erforderlich';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Lizenzierte Benutzer sind frei, die Regeln hinzuzufügen oder zu ändern, wie Sie fit sehen. Wenn Sie ein Gerät mit einem SNMP OID haben, das kein Modell bereits in der Datei passt - jetzt können Sie es einfach hinzufügen. Kein Warten mehr auf uns, um ein Patch zu liefern und es zu der Code-Basis für Sie hinzufügen.<br/><br/>Wenn Sie einen Regeln-Eintrag erstellen, müssen Sie einen Namen und eine Liste von Eingaben und Ausgängen bereitstellen. Die Eingänge und Ausgänge werden als JSON-Arrays innerhalb der Datenbank gespeichert.<br/><br/>Eingänge haben eine Tabelle und ein Attribut, einen Operator und einen Wert. Bei der Ausführung der Bedingung funktioniert es also: Wenn $table . $attribute $operator $value dann die Ausgänge anwenden.<br/><br/>Eine Beispielregel, die einem SNMP OID entspricht und das Modell eingestellt wird, ist unten.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Lizenzen';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Wie';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Wie die meisten anderen Attribute können zusätzliche Felder sperrig bearbeitet werden. Verwenden Sie die Bulk Edit Funktion, wie Sie normalerweise würden und Sie sehen, dass die zusätzlichen Felder für die Eingabe verfügbar sind.';

$GLOBALS["lang"]['Like versus Equals'] = 'Wie versus Equals';

$GLOBALS["lang"]['limit'] = 'Grenzwert';

$GLOBALS["lang"]['Limit'] = 'Grenzwert';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Beschränken Sie die Abfrage auf die ersten X-Elemente.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limitiert auf 100 Zeilen.';

$GLOBALS["lang"]['line_amount'] = 'Betrag';

$GLOBALS["lang"]['Line Amount'] = 'Betrag';

$GLOBALS["lang"]['Line Graph'] = 'Liniendiagramm';

$GLOBALS["lang"]['line_number_a'] = 'Nummer A';

$GLOBALS["lang"]['Line Number A'] = 'Nummer A';

$GLOBALS["lang"]['line_number_b'] = 'Nummer B';

$GLOBALS["lang"]['Line Number B'] = 'Nummer B';

$GLOBALS["lang"]['line_text'] = 'Text';

$GLOBALS["lang"]['Line Text'] = 'Text';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Zeilendiagramme müssen Datum oder my_date, Beschreibung oder my_description und Count zurückgeben.';

$GLOBALS["lang"]['link'] = 'Link zur Seite';

$GLOBALS["lang"]['Link'] = 'Link zur Seite';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Erweitert)';

$GLOBALS["lang"]['Linked Files'] = 'Linked Files';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Links diese Entdeckung zur zugehörigen Cloud (falls erforderlich). Links zu <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links zu <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links zu <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links zu <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux-Pakete';

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Liste Alle NMAP Ports, Protokolle und Programme für jedes Gerät';

$GLOBALS["lang"]['List Devices'] = 'Geräte auflisten';

$GLOBALS["lang"]['List Discoveries'] = 'Liste Entdeckungen';

$GLOBALS["lang"]['list_table_format'] = 'Tabelle Format';

$GLOBALS["lang"]['List Table Format'] = 'Tabelle Format';

$GLOBALS["lang"]['List Tables'] = 'Liste Tabellen';

$GLOBALS["lang"]['Lithuania'] = 'Litauen';

$GLOBALS["lang"]['Lithuanian'] = 'Litauisch';

$GLOBALS["lang"]['Load Balancing'] = 'Last Balancing';

$GLOBALS["lang"]['Local'] = 'Ort';

$GLOBALS["lang"]['Local Area Network'] = 'Lokales Netzwerk';

$GLOBALS["lang"]['local_port'] = 'Lokaler Hafen';

$GLOBALS["lang"]['Local Port'] = 'Lokaler Hafen';

$GLOBALS["lang"]['Local area network'] = 'Ortsnetz';

$GLOBALS["lang"]['Localhost'] = 'Lokalität';

$GLOBALS["lang"]['Localisation'] = 'Lokalisierung';

$GLOBALS["lang"]['Location'] = 'Standort';

$GLOBALS["lang"]['Location A'] = 'Standort A';

$GLOBALS["lang"]['Location B'] = 'Standort B';

$GLOBALS["lang"]['location_id'] = 'Location ID';

$GLOBALS["lang"]['Location ID'] = 'Location ID';

$GLOBALS["lang"]['location_id_a'] = 'Standort ID A';

$GLOBALS["lang"]['Location ID A'] = 'Standort ID A';

$GLOBALS["lang"]['location_id_b'] = 'Standort ID B';

$GLOBALS["lang"]['Location ID B'] = 'Standort ID B';

$GLOBALS["lang"]['location_latitude'] = 'Standort Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Standort Latitude';

$GLOBALS["lang"]['location_level'] = 'Location Level';

$GLOBALS["lang"]['Location Level'] = 'Location Level';

$GLOBALS["lang"]['location_longitude'] = 'Standort Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Standort Longitude';

$GLOBALS["lang"]['Location Name'] = 'Ortsname';

$GLOBALS["lang"]['location_rack'] = 'Standort Rack';

$GLOBALS["lang"]['Location Rack'] = 'Standort Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Standort Rack Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Standort Rack Position';

$GLOBALS["lang"]['location_rack_size'] = 'Standort Rack Größe';

$GLOBALS["lang"]['Location Rack Size'] = 'Standort Rack Größe';

$GLOBALS["lang"]['location_room'] = 'Location Zimmer';

$GLOBALS["lang"]['Location Room'] = 'Location Zimmer';

$GLOBALS["lang"]['location_suite'] = 'Location Suite';

$GLOBALS["lang"]['Location Suite'] = 'Location Suite';

$GLOBALS["lang"]['Locations'] = 'Standorte';

$GLOBALS["lang"]['Locations in this'] = 'Standorte in diesem';

$GLOBALS["lang"]['log'] = 'Protokoll';

$GLOBALS["lang"]['Log'] = 'Protokoll';

$GLOBALS["lang"]['log_format'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Log Format'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Log Line'] = 'Log Line';

$GLOBALS["lang"]['log_path'] = 'Logischer Pfad';

$GLOBALS["lang"]['Log Path'] = 'Logischer Pfad';

$GLOBALS["lang"]['log_rotation'] = 'Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Rotation';

$GLOBALS["lang"]['log_status'] = 'Anmelden';

$GLOBALS["lang"]['Log Status'] = 'Anmelden';

$GLOBALS["lang"]['Logging in'] = 'Anmeldung';

$GLOBALS["lang"]['Logical Cores '] = 'Logische Kerne ';

$GLOBALS["lang"]['logical_count'] = 'Logischer Zähler';

$GLOBALS["lang"]['Logical Count'] = 'Logischer Zähler';

$GLOBALS["lang"]['Logout'] = 'Anmeldung';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Länge';

$GLOBALS["lang"]['Longitude'] = 'Länge';

$GLOBALS["lang"]['low'] = 'Niedrig';

$GLOBALS["lang"]['Low'] = 'Niedrig';

$GLOBALS["lang"]['Lower Case'] = 'Rechtssache';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Hostname:';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-Adresse';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Hersteller';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Adresse';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS Pakete';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Mazedonien';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Aufzeichnungen über Risikobewertungen und Behandlungen';

$GLOBALS["lang"]['maintenance_expires'] = 'Wartungsausfälle';

$GLOBALS["lang"]['Maintenance Expires'] = 'Wartungsausfälle';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Mein Standard-Dashboard machen';

$GLOBALS["lang"]['Make this install a Collector'] = 'Machen Sie die Installation eines Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Malediven';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Verwalten';

$GLOBALS["lang"]['Manage Licenses'] = 'Lizenzen verwalten';

$GLOBALS["lang"]['Manage in NMIS'] = 'Verwalten in NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Verwalten von Vorkommnissen und Nichtkonformitäten';

$GLOBALS["lang"]['Managed'] = 'Verwaltet';

$GLOBALS["lang"]['managed_by'] = 'Verwaltet von';

$GLOBALS["lang"]['Managed By'] = 'Verwaltet von';

$GLOBALS["lang"]['Manual Input'] = 'Manuelle Eingabe';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manuell von Benutzer eingestellt, standardmäßig auf Produktion.';

$GLOBALS["lang"]['Manually set by user.'] = 'manuell vom Benutzer eingestellt.';

$GLOBALS["lang"]['manufacture_date'] = 'Datum des Inkrafttretens';

$GLOBALS["lang"]['Manufacture Date'] = 'Datum des Inkrafttretens';

$GLOBALS["lang"]['manufacturer'] = 'Hersteller';

$GLOBALS["lang"]['Manufacturer'] = 'Hersteller';

$GLOBALS["lang"]['manufacturer_code'] = 'Hersteller-Code';

$GLOBALS["lang"]['Manufacturer Code'] = 'Hersteller-Code';

$GLOBALS["lang"]['Map'] = 'Karte';

$GLOBALS["lang"]['maps'] = 'Karten';

$GLOBALS["lang"]['Maps'] = 'Karten';

$GLOBALS["lang"]['March'] = 'März';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshallinseln';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maske';

$GLOBALS["lang"]['Mask'] = 'Maske';

$GLOBALS["lang"]['Match'] = 'Matching';

$GLOBALS["lang"]['match_options'] = 'Spieloptionen';

$GLOBALS["lang"]['Match Options'] = 'Spieloptionen';

$GLOBALS["lang"]['Match Order'] = 'Spielauftrag';

$GLOBALS["lang"]['Match Process'] = 'Matching-Prozess';

$GLOBALS["lang"]['match_string'] = 'Passende Streichung';

$GLOBALS["lang"]['Match String'] = 'Passende Streichung';

$GLOBALS["lang"]['Matching Attribute'] = 'Passendes Attribut';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Passende Geräte - Inklusive OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Passende Linux Geräte';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Die Abstimmung erfolgt in der folgenden Reihenfolge';

$GLOBALS["lang"]['maturity_level'] = 'Reifegrad';

$GLOBALS["lang"]['Maturity Level'] = 'Reifegrad';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Mauretanien';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Max File Größe';

$GLOBALS["lang"]['Max File Size'] = 'Max File Größe';

$GLOBALS["lang"]['Max Length'] = 'Max Länge';

$GLOBALS["lang"]['max_size'] = 'Max Größe';

$GLOBALS["lang"]['Max Size'] = 'Max Größe';

$GLOBALS["lang"]['May'] = 'Mai';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Messt die Wahrscheinlichkeit, dass die Schwachstelle angegriffen wird, und basiert auf dem aktuellen Zustand der Exploit-Techniken, nutzen Code-Verfügbarkeit, oder aktive, “in-the-wild” Ausbeutung.';

$GLOBALS["lang"]['medium'] = 'Mittel';

$GLOBALS["lang"]['Medium'] = 'Mittel';

$GLOBALS["lang"]['members'] = 'Mitglieder';

$GLOBALS["lang"]['Members'] = 'Mitglieder';

$GLOBALS["lang"]['memory'] = 'Speichermedien';

$GLOBALS["lang"]['Memory'] = 'Speichermedien';

$GLOBALS["lang"]['memory_count'] = 'Speicherzähler';

$GLOBALS["lang"]['Memory Count'] = 'Speicherzähler';

$GLOBALS["lang"]['memory_slot_count'] = 'Speicherplatz Zählen';

$GLOBALS["lang"]['Memory Slot Count'] = 'Speicherplatz Zählen';

$GLOBALS["lang"]['menu_category'] = 'Kategorie';

$GLOBALS["lang"]['Menu Category'] = 'Kategorie';

$GLOBALS["lang"]['menu_display'] = 'Menü anzeigen';

$GLOBALS["lang"]['Menu Display'] = 'Menü anzeigen';

$GLOBALS["lang"]['message'] = 'Nachricht';

$GLOBALS["lang"]['Message'] = 'Nachricht';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Letzte Änderung';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Letzte Änderung';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Netzwerk der Metropolregion';

$GLOBALS["lang"]['Metropolitan area network'] = 'Netzwerk der Metropolregion';

$GLOBALS["lang"]['Mexico'] = 'Mexiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesien';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikrozeit';

$GLOBALS["lang"]['Microtime'] = 'Mikrozeit';

$GLOBALS["lang"]['minute'] = 'Minuten';

$GLOBALS["lang"]['Minute'] = 'Minuten';

$GLOBALS["lang"]['Minutes'] = 'Minuten';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokolle Seit letztem Audit sind größer als';

$GLOBALS["lang"]['model'] = 'Modell';

$GLOBALS["lang"]['Model'] = 'Modell';

$GLOBALS["lang"]['model_family'] = 'Modell Familie';

$GLOBALS["lang"]['Model Family'] = 'Modell Familie';

$GLOBALS["lang"]['Modified'] = 'Geändert';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Änderung eines vorhandenen Skripts';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Modul Index';

$GLOBALS["lang"]['Module Index'] = 'Modul Index';

$GLOBALS["lang"]['Modules'] = 'Module';

$GLOBALS["lang"]['Moldova'] = 'Moldau';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Montag';

$GLOBALS["lang"]['Mongolia'] = 'Mongolei';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Überwachung und Messung der ISMS-Leistung';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Monat';

$GLOBALS["lang"]['Month'] = 'Monat';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Mehr Informationen';

$GLOBALS["lang"]['More Secure'] = 'Mehr Sicherheit';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Detaillierter SQL kann verwendet werden, um Attribute innerhalb eines Bereichs zu gruppieren. Unten zeigt der SQL für Geräte, die nicht in einem Pier-Diagramm gesehen wurden, das von letzten gesehenen Datumsbereichen gruppiert wurde.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Weitere Informationen zum Debuggen finden Sie auf einem hilfreichen Stack Overflow Thread';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Am wahrscheinlichsten ist die Windows Firewall (oder eine dritte Firewall) den Verbindungsversuch zu leugnen.<br/><br/>Bitte melden Sie sich an der Ziel-Windows-Maschine und überprüfen Sie die Firewall-Einstellungen.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Der größte Teil der Open-AudIT ist mit GNU AGPL lizenziert.';

$GLOBALS["lang"]['motherboard'] = 'Mutterschaft';

$GLOBALS["lang"]['Motherboard'] = 'Mutterschaft';

$GLOBALS["lang"]['mount_point'] = 'Auf Lager';

$GLOBALS["lang"]['Mount Point'] = 'Auf Lager';

$GLOBALS["lang"]['mount_type'] = 'Bauart';

$GLOBALS["lang"]['Mount Type'] = 'Bauart';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Muss auf Ping reagieren. Wenn eingestellt, Nmap wird fist versuchen, eine ICMP-Reaktion zu senden und zu hören. Wenn das Gerät nicht reagiert, wird keine weitere Abtastung auftreten.<br/>Bisher musste ein Gerät nicht auf ein Ping für Open-AudIT reagieren, um weiter zu scannen.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Muss auf Ping reagieren';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mein AntiVirus ruft mich dazu auf, Dinge zu verleugnen/zu schließen';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Meine Zeit ist in Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-zu-1';

$GLOBALS["lang"]['N-to-N'] = 'N-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Kunden';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Geräteoptionen';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Geräteauswahl';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Feldname';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Feldtyp';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Gruppe';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rolle';

$GLOBALS["lang"]['NOTE'] = 'HINWEIS';

$GLOBALS["lang"]['NOTE #2'] = 'HINWEIS #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTE - Für weitere Informationen zu DateTime-Formaten siehe';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'HINWEIS - Wenn Sie ein heruntergeladenes CSV-, XML- oder JSON-Format (entweder ein einziges Anmelde- oder die vollständige Sammlung) anfordern, werden die aktuellen Anmeldedaten gesendet. Nicht der verschlüsselte String, der eigentliche Benutzername, Passwort, Community string, etc. Alle sensiblen Details werden nicht in der Web-GUI angezeigt, sondern über andere Formate bereitgestellt. Um diesen Export zu verhindern, steht ein Konfigurationsartikel als decrypt_credentials zur Verfügung.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'HINWEIS - Die lockigen Klammern in den eingereichten Daten sollten als-is verwendet werden (nicht wie nach anderen Beispielen oben ersetzt).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'HINWEIS - Sie können verhindern, dass einzelne Text-Anmeldeinformationen unten angezeigt werden, indem Sie das Konfigurationselement für <code>decrypt_credentials</code> bis <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name';

$GLOBALS["lang"]['Name'] = 'Name';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Name: Der Name, den Sie diesem Feld geben. Idealerweise sollte es einzigartig sein.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Nettoindex';

$GLOBALS["lang"]['Net Index'] = 'Nettoindex';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Niederländische Antillen';

$GLOBALS["lang"]['Netherlands the'] = 'Niederlande';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Nettowert';

$GLOBALS["lang"]['Netstat'] = 'Nettowert';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Richtlinien';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports verwenden eine Kombination aus Portnummer, Protokoll und Programm. Wenn alle anwesend sind, geht die Politik durch.';

$GLOBALS["lang"]['Network'] = 'Netzwerk';

$GLOBALS["lang"]['network_address'] = 'Netzwerkadresse';

$GLOBALS["lang"]['Network Address'] = 'Netzwerkadresse';

$GLOBALS["lang"]['Network Discovery'] = 'Network Discovery';

$GLOBALS["lang"]['network_domain'] = 'Netzwerk Domain';

$GLOBALS["lang"]['Network Domain'] = 'Netzwerk Domain';

$GLOBALS["lang"]['Network Types'] = 'Netzwerktypen';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Netzwerktyp wird standardmäßig auf Local Area Network gesetzt, kann aber vom Benutzer geändert werden, da sie fit sehen. Die unterstützten Typen sind unten (mit Dank Wikipedia).<br/><br/>Ein Netzwerk kann durch seine physische Kapazität oder seinen organisatorischen Zweck charakterisiert werden. Die Nutzung des Netzes, einschließlich Benutzerberechtigung und Zugriffsrechte, unterscheidet sich entsprechend.';

$GLOBALS["lang"]['networks'] = 'Netzwerke';

$GLOBALS["lang"]['Networks'] = 'Netzwerke';

$GLOBALS["lang"]['Networks Generated By'] = 'Netzwerke, die von';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Netzwerke werden mit jeder Entdeckung aktualisiert. Elemente wie IPs Verfügbar und IPs verwendet, zusammen mit Gateways, DHCP und DNS Server werden wie gefunden hinzugefügt.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Netzwerke reagieren je nach Konfiguration unterschiedlich. Einige Router und/oder Firewalls können antworten <i>im Namen</i> IPs auf der anderen Seite ihrer Schnittstellen zum Open-AudIT Server. Es ist durchaus üblich, zu sehen, Nmap eine Sonde für SNMP (UDP-Port 161) als openfilterfiltered für Geräte, die tun und nicht existieren. Dies ist irreführend, da es kein Gerät in dieser IP gibt, aber es endet mit einem Geräteeintrag in der Datenbank. 99,9% der Zeit, es ist nicht Open-AudIT, noch Nmap, aber das Netzwerk verursacht dieses Problem. Nun, da wir die Möglichkeiten haben, offener, gefilterter Häfen zu behandeln, wie offen oder geschlossen, können wir eine Menge dieser Verwirrung beseitigen. Enterprise-Nutzer haben sogar die Möglichkeit, dies je nach Entdeckungsbasis zu ändern (mehr als nur mit dem Medium (Klassic) Artikel, wie oben).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netzwerke mit einer CIDR Maske von';

$GLOBALS["lang"]['New Building Name'] = 'Neues Gebäude Name';

$GLOBALS["lang"]['New Caledonia'] = 'Neukaledonien';

$GLOBALS["lang"]['New Floor Name'] = 'Name des neuen Bodens';

$GLOBALS["lang"]['New Room Name'] = 'Neues Zimmer Name';

$GLOBALS["lang"]['New Row Name'] = 'Neuer Name';

$GLOBALS["lang"]['New Zealand'] = 'Neuseeland';

$GLOBALS["lang"]['News'] = 'Nachrichten';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nachrichten überprüfen-in jedes Mal, wenn Sie sich für aktualisierte Abfragen & Pakete, Konfigurationsempfehlungen, Release Ankündigungen, Blog-Posts und mehr anmelden.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'News ist unser Weg, Sie mit den neuesten Fixes, Ankündigungen, Abfrageupdates, Softwareversionen und mehr aktuell zu halten.<br/><br/>Sie müssen nicht auf dem Wiki zu halten oder nach neuen Versionen überprüfen, können wir diese an Sie senden!';

$GLOBALS["lang"]['next_hop'] = 'Nächster Schritt';

$GLOBALS["lang"]['Next Hop'] = 'Nächster Schritt';

$GLOBALS["lang"]['next_run'] = 'Nächster Run';

$GLOBALS["lang"]['Next Run'] = 'Nächster Run';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Nächster Klick <i>Erstellen Sie Ihre eigene Anwendung</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Als nächstes klicken Sie auf OK, dann klicken Sie mit der rechten Maustaste auf den Apache 2.4 Service und klicken Sie auf Neustart. Fertig!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Als nächstes klicken Sie mit der rechten Maustaste auf den Apache2.4 Dienst und wählen Sie Eigenschaften, dann klicken Sie auf die Registerkarte Log On .';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Nitrat';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap kann nicht feststellen, ob der Port geöffnet ist, weil Paketfilterung verhindert, dass seine Sonden den Port erreichen. Die Filterung könnte von einem dedizierten Firewall-Gerät, Router-Regeln oder Host-basierte Firewall-Software sein. Diese Häfen frustrieren Angreifer, weil sie so wenig Informationen liefern. Manchmal reagieren sie mit ICMP-Fehlermeldungen wie Typ 3 Code 13 (destination unreachable: communication administrativ verboten), aber Filter, die Sonden einfach fallen lassen, ohne zu antworten, sind weit häufiger. Diese zwingt Nmap mehrmals wieder zu versuchen, nur falls die Sonde wegen Netzüberlastung fallen gelassen wurde, anstatt zu filtern. Das verlangsamt den Scan dramatisch.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap platziert Ports in diesem Zustand, wenn es nicht möglich ist festzustellen, ob ein Port geöffnet oder gefiltert ist. Dies geschieht bei Scan-Typen, bei denen offene Ports keine Antwort geben. Der Mangel an Antwort könnte auch bedeuten, dass ein Paketfilter die Sonde oder jede Antwort, die es elicited. So weiß Nmap nicht sicher, ob der Hafen geöffnet ist oder gefiltert wird. Das UDP-, IP-Protokoll, FIN-, NULL- und Xmas-Scans klassifizieren Ports auf diese Weise.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap Timing Details finden Sie unten auf dieser Seite';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Kunden';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Kunden';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Gruppe';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Gruppe';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Name';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Name';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Anmerkungen';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Anmerkungen';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Rolle';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Rolle';

$GLOBALS["lang"]['No'] = 'Nein';

$GLOBALS["lang"]['No Devices Returned'] = 'Keine Geräte zurückgegeben';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Keine Google Maps API Key Present, Sie werden nicht in der Lage, die Karte anzuzeigen.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Keine Lizenz für Professional oder Enterprise';

$GLOBALS["lang"]['No Results'] = 'Keine Ergebnisse';

$GLOBALS["lang"]['No data in License Key'] = 'Keine Daten im Lizenzschlüssel';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Kein Datenbank-Upgrade erforderlich zu dieser Zeit.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Keine Geräte sind in der Datenbank.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Keine';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Nördliche Marianen';

$GLOBALS["lang"]['Norway'] = 'Norwegen';

$GLOBALS["lang"]['Norwegian'] = 'Norwegen';

$GLOBALS["lang"]['Not Applicable'] = 'Nicht anwendbar';

$GLOBALS["lang"]['Not Checked'] = 'Nicht geprüft';

$GLOBALS["lang"]['Not Equals'] = 'Nicht gleich';

$GLOBALS["lang"]['Not In'] = 'Nicht in';

$GLOBALS["lang"]['Not Like'] = 'Nicht mögen';

$GLOBALS["lang"]['Not Set'] = 'Nicht eingestellt';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Nicht jeder Computer kann einen Benchmark erfolgreich abschließen. Aus Gründen, die über unsere Kontrolle hinausgehen, haben wir in einigen Fällen versagt. Die Protokolle sollten helfen, Sie in die richtige Richtung für diese Elemente zu zeigen.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Nicht in der (komma seperated) Liste';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Nicht normal verwendet. Wenn eingestellt, erfordert dies das Gerät einen offenen Port (nach Scanoptionen) als Antwort zu haben. Eine MAC-Adresse, arp-Antwort oder Ping-Antwort wird nicht als ausreichend angesehen, um als Antwort zu gelten. Nützlich, wenn ein Router oder eine Firewall zwischen dem Open-AudIT Server und der Ziel-IP auf Portscans im IPs-Namen reagiert.';

$GLOBALS["lang"]['Note'] = 'Anmerkung';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Hinweis - Die Auswahl eines Elternteils ermöglicht automatisch den Zugang zu seinen Kindern (obwohl es hier nicht angezeigt wird).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Beachten Sie, dass die 100 device Enterprise Lizenz keine Unterstützung beinhaltet.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Hinweis, Sie müssen möglicherweise das Skript ausführen mit';

$GLOBALS["lang"]['Notes'] = 'Anmerkungen';

$GLOBALS["lang"]['notes'] = 'Anmerkungen';

$GLOBALS["lang"]['Notice'] = 'Mitteilung';

$GLOBALS["lang"]['notin'] = 'nicht';

$GLOBALS["lang"]['Notin'] = 'nicht';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Jetzt für die Abonnement-ID, klicken Sie auf Alle Dienste, Abonnements und kopieren Sie es.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Jetzt müssen wir Ihnen den Azure Active Directory-Anwendungszugriff auf Ihr Abonnement bieten.<br/><br/>Klicken Sie auf Ressourcengruppen und dann auf die Ressourcengruppe, auf die Sie möchten, dass Ihre Azure Active Directory Application Zugriff hat.<br/><br/>Klicken Sie auf Hinzufügen. Die Rolle sollte Contributor sein und dann nach der App suchen (Open-AudIT). Dann klicken Sie auf Speichern.<br/><br/>Jetzt hat die Anwendung Zugriff auf das Abonnement, so können wir API Anrufe machen. Die API-Anrufe werden im Auftrag der Anwendung angefordert, nicht Ihr Benutzer.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'BINNENMARKT';

$GLOBALS["lang"]['OS'] = 'Sicherheit';

$GLOBALS["lang"]['OS Families'] = 'OS Familien';

$GLOBALS["lang"]['OS Family'] = 'OS Familie';

$GLOBALS["lang"]['OS Group'] = 'OS Gruppe';

$GLOBALS["lang"]['OUTPUTS'] = 'AUSGABEN';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Erhalten Sie Top-Management-Unterstützung';

$GLOBALS["lang"]['October'] = 'Oktober';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Auf';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Unter Windows verwendet Open-AudIT WMI, da es die primäre Methode der Prüfung ist. Windows hat einen bemerkenswerten Ruf, wo Remote WMI betroffen ist. Es neigt entweder <i>Nur Arbeit</i> oder ein Rätsel auf dem Ziel erfordert Änderungen. Wenn Sie Schwierigkeiten haben, Remote-Windows-PCs zu testen, haben wir ein Skript namens test_windows_client.vbs erstellt. Sie können dieses Skript ausführen <strong>lokal</strong> auf der betreffenden Maschine, nach Anmeldung als Benutzer, der von Open-AudIT zur Durchführung der Prüfung verwendet wird. Das Skript macht <strong>keine Änderungen</strong> auf die Zielgeräte. Es überprüft die meisten (nicht alle) der Artikel unten und erzeugt PASS, FAIL und INFO-Tags für verschiedene Eigenschaften. HINWEIS - Wenn Ihr Zielsystem korrekt geprüft wird, sollten Sie keine Einstellungen ändern. Einige der folgenden existieren nicht auf Windows-PCs, die geprüft werden können und einige existieren. Ändern Sie nur die Einstellungen, wenn Ihre Entdeckungen auf bestimmten PCs nicht wie beabsichtigt funktionieren.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Klicken Sie auf der Seite Aufgabenliste auf die <i>Neues hinzufügen</i> um eine Aufgabe zu konfigurieren.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Auf dem Feld <i>Passende Streichung</i> Sie sollten den Namen der Software bereitstellen, die Sie verfolgen möchten. Sie können das prozentuale Zeichen (%) als Wildcard verwenden.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Auf der nächsten Seite können Sie Access Keys auswählen und Ihren Schlüssel sehen oder einen neuen Schlüssel erstellen.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Auf dem Ziel-Windows-PC, führen Sie das DCOM-Dienstprogramm und überprüfen (oder setzen) die folgenden Attribute. Start -> Laufen, DCOMCNFG eingeben und OK drücken. Dies öffnet das DCOMCNFG Fenster.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Oben rechts (unterhalb der Menüleiste) sehen Sie mehrere Tasten. Mit diesen können Sie ein weiteres Dashboard auswählen, das aktuelle Dashboard als Ihre Homepage festlegen (wenn es nicht bereits ist) und das aktuelle Dashboard bearbeiten (wenn Sie eine Berechtigung haben).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, nicht Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Sobald ein zusätzliches Feld erstellt wurde, kann es in Abfragen und Gruppen verwendet werden, wie jedes andere Attribut in der Datenbank.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Sobald Sie herauskommen, wird Ihr Zertifikat validiert, kann aber auch diese Validierung versagen, wenn Sie selbst signierte Zertifikate verwenden und Ihren Server nicht korrekt konfiguriert haben.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Sobald das Skript auf einem Ziel ausgeführt ist, sollte das Skript selbst löschen.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Sobald diese ersten Abfragen (snmp, ssh, wmi) abgeschlossen sind, wenn das Gerät von den Audit-Skripten (Windows, Linux, OSX, AIX, HP-UX, Solaris und ESXi) unterstützt wird, wird das korrekte Audit-Skript auf das Ziel kopiert und ausgeführt. Das Audit-Skript wird selbst nach Abschluss löschen. Das Ergebnis wird auf der Zielmaschine als XML-Datei gespeichert. Der Open-AudIT Server wird dann die Ergebnisdatei zur Verarbeitung abrufen und die Ergebnisdatei auf dem Ziel löschen. Der Ort, an dem das Audit-Skript auf das Zielgerät kopiert wird (zumindest für SSH-Audits) ist durch die Bearbeitung des Discovery_linux_script_directory config item konfigurierbar. Standardmäßig wird es auf /tmp/ gesetzt. Dies kann ändern müssen, wenn /tmp noexec set hat. Die Ergebnisdatei wird dann verarbeitet und die Gerätedetails im Open-AudIT aktualisiert.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Sobald Sie auf die Schaltfläche Ausführung klicken, wird Open-AudIT einen Prozess auslaufen, um die Entdeckung zu initiieren und den Benutzer auf die Seite der Entdeckungsdetails zurückzugeben. Der neu laichende Prozess nimmt die konfigurierten Entdeckungsoptionen ein und führt Nmap-Befehle aus, um die erste Liste der zu scannenden IP-Adressen zu bestimmen (oder sucht Active Directory, wenn dieser Typ verwendet wird). Jedes zu scannende IP wird in eine Warteschlange gelegt. Sobald der Anfangsprozess abgeschlossen ist (und es gibt IPs, die in der Warteschlange abgetastet werden sollen) wird eine Reihe von Prozessen ausgestrahlt, um jede IP parallel weiter zu scannen. Diese Anzahl von Prozessen ist in der Konfiguration konfigurierbar, das Attribut bearbeiten <i>queue_limit</i>. Standardmäßig ist dies auf 20 gesetzt.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Sobald Sie Ihre Geräte ausgewählt haben, um zu bearbeiten, klicken Sie auf den Bleistift Knopf oben rechts auf der Tabelle.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Sobald Sie dies getan haben, wird Open-AudIT versuchen, Ihre Benutzer-Login-Details gegen die konfigurierte Auth-Methode zu überprüfen. Wenn der Benutzer gültige Anmeldeinformationen hat und <code>use_authorisation</code> wird gesetzt, Open-AudIT wird nach der Liste der Gruppen fragen, zu denen der Benutzer gehört. Wenn der Benutzer in den entsprechenden Gruppen für Open-AudIT Roles und Orgs ist, werden diese Roles und Orgs auf diesen Benutzer angewendet.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Sobald Sie eine Baseline Definition erstellt haben, können Sie es planen, gegen eine bestimmte Gruppe von Geräten laufen.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Sobald Sie diese Artikel haben, in Open-AudIT Enterprise können Sie zum Menü gehen -> Entdecken -> Wolken -> Erstellung Wolken, wählen Sie die <i>Amazon AWS</i> geben und einfügen. Fertig.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Sobald Sie diese Artikel haben, in Open-AudIT Enterprise können Sie zum Menü gehen -> Entdecken -> Wolken -> Erstellung Wolken, wählen Sie die <i>Microsoft Azure</i> geben und einfügen. Fertig.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Sobald Sie Ihre Cloud-Anmeldeinformationen haben, ist es nur eine Frage, eine neue Cloud zu erstellen und die Entdeckung zu betreiben - oder erste/zukünftige Entdeckungen zu planen. Stellen Sie sicher, dass Sie auch die Anmeldeinformationen benötigen, um sich an Ihre Cloud-Maschinen anzumelden, und es ist alles für Sie getan wie eine regelmäßige Entdeckung. Informationen fÃ1⁄4r Ihre Cloud';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Einer von <code>3x2</code>, <code>4x2</code>, <code>4x3</code> oder <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Einer der Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Netzwerk, Virtuelles Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Eine Entwicklung, Katastrophenrettung, Evaluation, Vorproduktion, Produktion, Testing, Training, Benutzerakzeptanztest';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Einer der zugewiesenen, delegierten, Planung, reserviert, nicht zugewiesen, unbekannt, nicht verwaltet. Defaults zugeteilt.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Einer von beiden <code>active directory</code> oder <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Einer von: Antivirus, Backup, Firewall, genehmigt, verboten, ignoriert oder andere.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Ein weiterer Artikel, um vorsichtig zu sein - stellen Sie sicher, dass Sie den Hostnamen (oder fqdn) Ihres LDAP verwenden Server, der dem entspricht, was im Zertifikat (nicht nur die LDAP Server IP-Adresse) bei der Erstellung des LDAP-Eintrags in Open-AudIT ist.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Dokumentation';

$GLOBALS["lang"]['Open'] = 'Öffnen';

$GLOBALS["lang"]['Open Data'] = 'Offene Daten';

$GLOBALS["lang"]['Open Source'] = 'Open Source';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Der gemeinschaftliche Quellcode ist auf GitHub verfügbar. Sie werden ermutigt, jeden Code zu überprüfen, den Sie Bedenken haben, und weil es Open Source ist - Sie sind auch ermutigt, uns zu Fragen zu stellen, die Sie haben oder Berichten. Wir sind immer mehr als glücklich, Codebeiträge, Schwachstellenberichte oder sogar einfache Fragen zu akzeptieren. Wir sind hier, um zu helfen.<br/><br/>Die Audit-Skripte selbst (Windows, Linux, MacOS, et al) werden bewusst in lesbarem nativem Shell-Skript geschrieben (VBScript for Windows, Bash for *nix). Sie können genau sehen, welche Befehle ausgeführt werden. Sie können alle Befehle entfernen, die Sie fühlen, dass Sie nicht brauchen. Sie können einen Dritten bitten, den Code für Sie zu überprüfen und (wenn Sie möchten) alle Ergebnisse melden.<br/><br/>Open-AudIT Enterprise übernimmt die zusätzlichen kommerziellen Funktionen für Open-AudIT Community. Es ist als einzelne kompilierte Datei ohne externe Abhängigkeiten enthalten. Wenn Enterprise selbst die Funktion(en) erfüllt, wenn Sie sich um Probleme kümmern Firstwave freut sich, mit Ihnen durch sie zu arbeiten - fragen Sie einfach! Versuchen Sie das mit einem anderen kommerziellen Software-Anbieter!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Geräteauswahl';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise hat die Möglichkeit, aus einer vordefinierten Liste von Discovery-Scan-Optionen auszuwählen und individuelle Optionen pro Entdeckung anzupassen.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Hochskalige flexible Entdeckungs- und Auditlösung für große Netzwerke. Alle Features von Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control einschließlich Active Directory und LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Feldname';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Lizenzen';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Optionen';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional und Enterprise umfassen erweiterte Reporting-Funktionen, einschließlich zeitbasierte, historische und muti-query basierende Reporting-Funktionen in mehreren Formaten.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Professional hat die Möglichkeit, aus einer vordefinierten Liste von Entdeckungs-Scan-Optionen, pro Entdeckung zu wählen.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. Die Welt';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud Die IT kann konfiguriert werden, um LDAP-Server (Microsoft Active Directory und/oder OpenLDAP) zu authentifizieren und zu autorisieren und zusätzlich ein Benutzerkonto in Open-AudIT mit zugewiesenen Rollen und Orgs basierend auf der LDAP-Gruppenmitgliedschaft zu erstellen. Es kann auch verwenden';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud Die IT kann auf Ihrem Server in Ihrem Rechenzentrum ausgeführt werden. Es braucht überhaupt keinen Zugang zum Internet. Selbst die Installation auf Linux, bei der wir den Distributionspaketmanager für unsere Voraussetzungen verwenden, kann durch Sie mit einem internen und sicherheitsgerichteten Paketrepository verneint werden.<br/><br/>Open-Aud IT speichert keine Ihrer Daten in der Cloud. Selbst Lizenzierungsinformationen können bereitgestellt werden, ohne dass der Open-AudIT-Server auf das Internet zugreifen muss.<br/><br/>Sicher, es ist einfacher, es zu ermöglichen, auf das Internet zuzugreifen, um Pakete (einschließlich Sicherheitsbehebungen) für Ihre Verteilung herunterladen, aber das ist für Sie und Ihre Sicherheitsrichtlinien. Open-AudIT braucht nicht das Internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT kann NIST CVE Vulnerability Reports herunterladen, parsen und verwenden.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud IT kann in einer von mehreren Sprachen zeigen. Wie können Sie das verbessern?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud Die IT kann Informationen in zusätzlichen Feldern speichern, die jedem Gerät zugeordnet sind.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT kann Microsoft Entra (vormals Microsoft Azure Active Directory) als Authentifizierungsmethode verwenden. Dies bedeutet, dass Ihr Benutzer in Open-AudIT auf die Logon klicken kann, indem Sie die Schaltfläche Entra auf der Anmeldeseite verwenden und ihre Anmeldeinformationen verwenden. Dieser Benutzer muss bereits innerhalb von Open-AudIT existieren (und zugewiesen werden';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT kann OKTA als Authentifizierungsmethode verwenden. Dies bedeutet, dass Ihr Benutzer in Open-AudIT auf die Logon klicken kann, indem OKTA-Taste auf der Anmeldeseite verwendet wird und seine OKTA-Anmeldeinformationen zur Anmeldung verwendet werden. Dieser Benutzer muss bereits innerhalb von Open-AudIT existieren (und Roles und Orgs zugewiesen werden), muss sich aber nicht an einen separaten Satz von Anmeldeinformationen erinnern.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT kommt mit vielen Abfragen aufgebaut. Wenn Sie eine bestimmte Abfrage benötigen und keine der vorverpackten Abfragen Ihren Bedürfnissen entsprechen, ist es ganz einfach, eine neue zu erstellen und in Open-AudIT zum Laufen zu laden.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT verfügt über eine JSON Restful API, die sowohl in der Web-Schnittstelle als auch über JSON-Anfragen verwendet werden kann.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud IT verfügt über ein körniges Berechtigungssystem, um zu bestimmen, was ein Benutzer innerhalb von Open-AudIT tun kann, und die Gegenstände, die er tun kann. Open-AudIT kann vollständig selbstbehalten sein oder Active Directory oder OpenLDAP zur Authentifizierung und/oder Autorisierung verwenden.<br/><br/>Es liegt ganz am Administrator von Open-AudIT, wie sie die Role Based Access Control zur Arbeit wünschen.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud IT hat eine leistungsstarke Änderungserkennungsmaschine. Alle Geräteattribute, die hinzugefügt, entfernt oder geändert werden, werden erkannt und gespeichert. Diese Änderungen können gemeldet werden und die relevanten Daten bestätigt werden, was von Ihrem Unternehmen Änderungen und Freigabeprozess erwartet wurde.<br/><br/>Wenn ein Gerät geprüft wird, werden Attribute in Abschnitte unterteilt, die den Tabellen in der Datenbank entsprechen.<br/><br/>Jedes Gerät (Computer, Router, Drucker, et al) hat einen Eintrag im <code>devices</code> Tisch. Jeder Eintrag in der Gerätetabelle hat eine <code>id</code> Spalte. Dieser Wert ist einzigartig - es ist eine auto-incrementing id.<br/><br/>Bei der Verarbeitung des Prüfungsergebnisses hat jeder Einzelteil sein Prüfungsergebnis gegenüber dem, was in der Datenbank liegt.<br/><br/>Für jeden Abschnitt, wenn die Schlüsselspalten (siehe untere Tabelle) die gleichen Werte enthalten, wird es als bereits installiert betrachtet und hat seine <code>last_seen</code> das Attribut aktualisiert. Es wird kein change_log-Eintrag erstellt.<br/><br/>Wenn eine der Schlüsselspalten nicht übereinstimmen, wird es als neues Attribut betrachtet und eingefügt. A <code>change_log</code> Der Eintrag wird erstellt, wenn das Gerät andere Attribute bereits in der Tabelle vorhanden hatte.<br/><br/>Bei Abschluss der Prüfungsabwicklung gelten keine Datenbankelemente, die nicht aktualisiert (oder eingefügt) wurden, als nicht vorhanden. Die <code>current</code> Attribut für diesen Artikel wird gesetzt <i>n</i> und ein change_log-Eintrag generiert wird.<br/><br/>So können wir feststellen, ob etwas aktuell installiert ist - die aktuelle Spalte ist <i>y</i>.<br/><br/>Wir können feststellen, wann etwas zuerst entdeckt wurde - die <i>Erster Teil</i>.<br/><br/>Wir können feststellen, ob etwas nach der ersten Prüfung installiert wurde - zuerst gesehen wird anders in den Komponenten- und Gerätetabellen.<br/><br/>Wir können feststellen, ob etwas derzeit nicht installiert ist, aber vorher war - current = <i>n</i>.<br/><br/>Wir können das letzte Mal feststellen, dass wir einen Artikel entdeckt haben - last_seen.<br/><br/>An jedem beliebigen Punkt können wir bestimmen, was auf einem System war - indem wir die audit_log Tabelle verwenden und die relevanten Komponenten basierend auf first_seen und last_seen auswählen.<br/><br/>Jeder Abschnitt und seine passenden Schlüsselspalten sind unten.<br/><br/>HINWEIS - Es gibt einige Ausnahmen wie unten beschrieben.<br/><br/>*1 - Für Netzwerkkarten, wenn der Computer ein VMware Esx Maschine ist, verwendet er auch die net_index und Verbindungsspalten.<br/><br/>*2 - Für Partitionen, f der Computer ist ein AIX-Maschine, verwenden wir den Partitionsnamen.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT ist ein Programm, das entwickelt wurde, um Ihre IT und damit verbundene Asset-Details und Konfiguration zu verfolgen und zu berichten. Open-AudIT kann sagen <i>Was ist auf Ihrem Netzwerk?</i>, wie es konfiguriert ist und wenn es irgendwelche Änderungen gab. Open-AudIT bietet eine schlanke, flexible und einfach zu bedienende Plattform für Geräteentdeckung, IT-Prüfung und Inventarverwaltungsautomatisierung direkt aus dem Kasten.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud IT macht es einfach, die Attribute mehrerer Geräte gleichzeitig zu bearbeiten.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT benötigt bestimmte Verzeichnisberechtigungen, um Dateien erstellen, Ergebnisse hochladen usw. Bitte setzen Sie sich wie unten.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT bietet viele integrierte Abfragen und macht es einfach, eigene zu erstellen.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT-Schiffe mit eingebauten Rollen für admin, org_admin und Benutzer.<br/><br/>Generell sollte ein Benutzer, der Administrator der Open-AudIT-Anwendung selbst ist, Admin und mögliche org_admin-Rollen haben.<br/><br/>Ein Benutzer kann mehrere Rollen haben. Die Berechtigung wird auf der höchstzulässigen Ebene angewendet - IE, wenn ein Benutzer die Rollen des Benutzers und org_admin hat, werden sie in der Lage sein, Orte zu erstellen, weil org_admin diese Erlaubnis erteilt, auch wenn die Benutzerrolle nicht.<br/><br/>Die Admin-Rolle ermöglicht Zugriff auf Sammlungen wie Konfiguration, Datenbank, Gruppen, Ldap-Server, Protokolle, Abfragen und Rollen. Globale Elemente, die die gesamte Anwendung beeinflussen.<br/><br/>Die org_admin-Rolle ermöglicht es in der Regel, Aktionen für jede Sammlung zu erstellen, zu lesen, zu aktualisieren und zu löschen, die die org_id-Spalte enthält. Fast alle Daten außer einigen der oben genannten Sammlungen enthalten eine <code>org_id</code> Spalte.<br/><br/>Die Benutzerrolle erlaubt es in der Regel, nur auf alle Elemente mit einer org_id-Spalte zuzugreifen.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT-Schiffe mit eingebauten Rollen für admin, org_admin und Benutzer.<br/><br/>Generell sollte ein Benutzer, der Administrator der Open-AudIT-Anwendung selbst ist, Admin und mögliche org_admin-Rollen haben.<br/><br/>Ein Benutzer kann mehrere Rollen haben. Die Berechtigung wird auf der höchstzulässigen Ebene angewendet - IE, wenn ein Benutzer die Rollen des Benutzers und org_admin hat, werden sie in der Lage sein, Orte zu erstellen, weil org_admin diese Erlaubnis erteilt, auch wenn die Benutzerrolle nicht.<br/><br/>Die Admin-Rolle ermöglicht Zugriff auf Sammlungen wie Konfiguration, Datenbank, Gruppen, Ldap-Server, Protokolle, Abfragen und Rollen. Globale Elemente, die die gesamte Anwendung beeinflussen.<br/><br/>Die org_admin-Rolle ermöglicht es in der Regel, Aktionen für jede Sammlung zu erstellen, zu lesen, zu aktualisieren und zu löschen, die die org_id-Spalte enthält. Fast alle Daten außer einigen der oben genannten Sammlungen enthalten eine org_id Spalte.<br/><br/>Die Benutzerrolle erlaubt es in der Regel, nur auf alle Elemente mit einer org_id-Spalte zuzugreifen.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT Schiffe mit mehreren vorkonfigurierten Dashboards. Wenn Sie ein professioneller Benutzer sind, können Sie zwischen zwei dieser wählen und als Standardseite festlegen, wenn Sie sich anmelden. Wenn Sie ein Enterprise-Benutzer sind, können Sie nicht nur zwischen den fünf vorkonfigurierten Dashboards wählen, sondern Sie haben auch die Möglichkeit, eigene zu erstellen.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT sollte auf 64bit Windows installiert werden <strong>Server</strong> Nur Systeme. Windows 10 und Windows 11 sind <strong>nicht</strong> unterstützt.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT nutzt Nmap in seiner Discovery-Funktion. Nmap-Sondengeräte für offene Ports. Geräte sollten ideal mit offen für funktionierende Ports reagieren. Geräte reagieren dabei oft nicht. Die unterschiedlichen Antworten sind unten detailliert dargestellt.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT nutzt Nmap in seiner Discovery-Funktion. Ohne Nmap funktioniert Open-AudIT nicht richtig. Jede Open-AudIT-Installation setzt voraus, dass Nmap installiert ist und auch auf den Discovery-Webseiten getestet wird. Weitere Informationen zu Open-AudIT und Nmap finden Sie hier';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT nutzt Nmap in seiner Discovery-Funktion. Ohne Nmap funktioniert Open-AudIT nicht richtig. Jede Open-AudIT-Installation setzt voraus, dass Nmap installiert ist und auf den Discovery-Webseiten testet.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud Die IT nutzt Anmeldeinformationen, um auf Ihre Geräte zuzugreifen. Diese werden verschlüsselt und gespeichert, wie Sie erwarten würden.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT wurde von einem englischsprachigen Australier geschrieben. Alles in der Anwendung verwendet englische Formulierung. Open-AudIT hat jedoch immer mehrere Sprachen zur Anzeige unterstützt. Diese Übersetzungen sind nicht immer korrekt, denn die Entwickler sprechen nicht die Sprache jeder angebotenen Übersetzung.<br/><br/>Was können Sie tun, wenn etwas in der Übersetzung nicht richtig ist?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap wird installiert';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Eröffnung eines Support-Tickets?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Benutzer Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Benutzer Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['open|filtered'] = 'Freigefiltert';

$GLOBALS["lang"]['Open|filtered'] = 'Freigefiltert';

$GLOBALS["lang"]['Operating System'] = 'Betriebssystem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Betriebssystem Familienbezüge';

$GLOBALS["lang"]['Operating Systems'] = 'Betriebssysteme';

$GLOBALS["lang"]['Operators'] = 'Betreiber';

$GLOBALS["lang"]['optical'] = 'optisch';

$GLOBALS["lang"]['Optical'] = 'optisch';

$GLOBALS["lang"]['Optimized'] = 'Optimiert';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Option #1 - Daten ändern';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Option #2 - Änderung der Übersetzungsdatei';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Optionales Auditing mit Agenten';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optionale Version als von Open-AudIT geprüft. Verwenden Sie das prozentuale Zeichen % als Wildcard.';

$GLOBALS["lang"]['options'] = 'Optionen';

$GLOBALS["lang"]['Options'] = 'Optionen';

$GLOBALS["lang"]['Options, options, options'] = 'Optionen, Optionen, Optionen';

$GLOBALS["lang"]['Or'] = 'Oder';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Oder wählen Sie aus den folgenden Feldern.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Org-ID';

$GLOBALS["lang"]['Org ID'] = 'Org-ID';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organisation';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisationen können das Detailniveau, das mit benutzerdefinierten Feldern gegen jedes entdeckte Gerät gespeichert wird, erweitern und verbessern. Der offene Kern ermöglicht eine einfache Integration in CMDB-, Eventmanagement- und Ticketing-Systeme.';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open-AudIT sind ein Schlüsselelement. Ein Benutzer hat eine primäre Org sowie eine Liste von Orgs sie zugreifen können. Ein Benutzer kombiniert dies mit einer Liste von zugewiesenen Rollen, die definieren, welche Aktionen sie auf den Orgs zugewiesenen Gegenständen übernehmen können. Die Kombination eines Benutzers <i>Orgs</i> und <i>Rollen</i> definieren, was sie innerhalb von Open-AudIT tun können und können.<br/><br/>Die meisten Objekte in Open-AudIT werden einem Org zugeordnet. Geräte, Standorte, Netzwerke, etc.<br/><br/>Orgs können Kinder Orgs haben. Denken Sie an eine Organisations-Chart (Straße) Struktur. Wenn ein Benutzer Zugang zu einem bestimmten Org hat, haben die meisten der Zeit (nicht immer) sie auch Zugang zu diesen Orgs Nachkommen.';

$GLOBALS["lang"]['orientation'] = 'Orientierung';

$GLOBALS["lang"]['Orientation'] = 'Orientierung';

$GLOBALS["lang"]['os'] = 'Oszillation';

$GLOBALS["lang"]['Os'] = 'Oszillation';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = '!';

$GLOBALS["lang"]['Os Bit'] = '!';

$GLOBALS["lang"]['os_cpe'] = 'Oskar';

$GLOBALS["lang"]['Os Cpe'] = 'Oskar';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version';

$GLOBALS["lang"]['os_family'] = 'Familie';

$GLOBALS["lang"]['Os Family'] = 'Familie';

$GLOBALS["lang"]['os_group'] = 'Gruppe';

$GLOBALS["lang"]['Os Group'] = 'Gruppe';

$GLOBALS["lang"]['os_installation_date'] = 'Datum der Installation';

$GLOBALS["lang"]['Os Installation Date'] = 'Datum der Installation';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expire';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expire';

$GLOBALS["lang"]['os_license'] = 'Führerschein';

$GLOBALS["lang"]['Os License'] = 'Führerschein';

$GLOBALS["lang"]['os_license_code'] = 'Os-Lizenz-Code';

$GLOBALS["lang"]['Os License Code'] = 'Os-Lizenz-Code';

$GLOBALS["lang"]['os_license_mode'] = 'Os Lizenzmodus';

$GLOBALS["lang"]['Os License Mode'] = 'Os Lizenzmodus';

$GLOBALS["lang"]['os_license_type'] = 'Os Lizenztyp';

$GLOBALS["lang"]['Os License Type'] = 'Os Lizenztyp';

$GLOBALS["lang"]['os_name'] = 'Name des Herstellers';

$GLOBALS["lang"]['Os Name'] = 'Name des Herstellers';

$GLOBALS["lang"]['os_version'] = 'Oszillation';

$GLOBALS["lang"]['Os Version'] = 'Oszillation';

$GLOBALS["lang"]['Other'] = 'Sonstige';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Abgesehen von dieser Einschränkung können Sie nach Bedarf Attribute auswählen. Es ist eine gute Idee, das Menü zu verwenden';

$GLOBALS["lang"]['Others'] = 'Sonstige';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Unsere standardmäßige Integration ermöglicht auch eine Entdeckung auf allen extern gelieferten Geräten. Wir versenden also eine Standard-Erkennung für die Default Integration aus dem Kasten. Diese verwenden die Standardanpassungsregeln, ermöglichen aber auch die Anpassung an die IP-Adresse.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Unsere Beispiele werden <i>Typ</i> Spalte.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Unser Framework lädt hier Dateien zur Verarbeitung hoch, löscht sie dann. Denken Sie nach Prüfungsergebnissen, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Unser Ziel mit der ersten Integrationsrelease war speziell für NMIS zur Open-AudIT-Integration auf <i>Nur Arbeit</i>. Wenn Sie die Programme auf Linux verwenden, können Sie buchstäblich auf eine einzelne Schaltfläche klicken, um die Integration auszuführen. Es ist nichts mehr nötig. Die Integration selbst ist äußerst konfigurierbar - wenn etwas nicht Ihrer Präferenz entspricht, kann sie leicht geändert werden.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Unsere neue Funktion namens Schwachstellen gibt Ihnen die Möglichkeit, schnell zu bestimmen, ob Geräte von einer CVE (Common Vulnerability Exposure) betroffen sind - aber wie?<br/><br/>FirstWave verbraucht ständig die Leistung aus dem Nist NVD Feed. Wir nehmen dies und wenden einige Einschränkungen an, extrahieren dann die betroffenen Programme und erstellen eine SQL-Abfrage für die Berichterstattung. Ihre Open-AudIT-Instanz erreicht FirstWave und verlangt regelmäßig neue Schwachstellen. Wenn er einen neuen Sicherheitsdatensatz erhält, wird er gegen die Datenbank und das gespeicherte Ergebnis geführt. Jedes Mal, wenn ein Gerät verarbeitet wird, werden alle passenden Sicherheitslücken wieder ausgeführt und das Ergebnis gespeichert. Dies bedeutet, wenn wir eine Schwachstellenliste betrachten, müssen wir nicht alle betroffenen Geräte berechnen - wir haben bereits das Ergebnis. Wenn Sie eine individuelle Schwachstelle anzeigen, berechnen wir das Ergebnis für diese einzigartige Schwachstelle.<br/><br/>Du bist also immer auf dem neuesten Stand!<br/><br/>Darüber hinaus berechnen wir auch das Ergebnis aller Schwachstellen für alle Geräte täglich (in der Regel zu einer ruhigen Zeit, sagen 2 Uhr).<br/><br/>In Ihrem Fall von Open-AudIT, ermöglichen wir Ihnen, auszuwählen, welche Anbieter Sie kümmern. d.h. es gibt keine Verwendung Abrufen von Sicherheitsdatensätzen von einem Anbieter, dessen Software Sie nicht verwenden oder installiert haben. Standardmäßig ist unsere Anbieterliste Adobe, Apple, Cisco, Google, Microsoft, Mozilla und Redhat.<br/><br/>Das klingt ganz einfach, aber hinter den Kulissen <b>Menge</b> geht weiter. Zum Beispiel enthält der CVE-Record eine Liste der betroffenen Software - aber diese Softwarenamen passen nicht dem, was wir erhalten, wenn wir einen Computer auditieren. Ein gutes Beispiel ist Apache. Typischerweise wird ein CVE-Record sagen, die betroffene Software ist http_server. In Wirklichkeit erscheint dies als apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - und andere. Also müssen wir zunächst bestimmen, was der eigentliche Name des Programms ist, das wir erhalten, wenn wir einen Computer fragen, und es kann mehrere Namen geben. Danach müssen wir den CVE-Datensatz parsieren und eine entsprechende SQL-Anweisung erstellen. Erlauben für mehrere Programmnamen wie oben, und mehrere Versionen, Versionsbereiche, und sogar mehrere verschiedene Stücke von Software (ein Beispiel ist Thunderbird und Firefox in einer einzigen CVE). Und Ihre Instanz von Open-AudIT muss dies nehmen und Orgs Filterung auch anwenden. Und das ist nur eine einzige CVE. Was ist mit der Bestimmung, welche CVEs Sie haben und nicht haben? Was ist mit dem Hinzufügen eines Anbieters in die Liste später? So viele Dinge zu beachten!<br/><br/>Neben der üblichen Berichterstattung haben wir auch einige neue Widgets für Dashboards, basierend auf Schwachstellendaten.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Unser Timeout für eine SSH Antwort';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Unser Timeout für eine WMI-Reaktion';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Unser Timeout für eine SNMP Antwort';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Unser Timeout für eine Prüfungsskriptantwort';

$GLOBALS["lang"]['output'] = 'Ausgabe';

$GLOBALS["lang"]['Output'] = 'Ausgabe';

$GLOBALS["lang"]['outputs'] = 'Ausgänge';

$GLOBALS["lang"]['Outputs'] = 'Ausgänge';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Gesamtwertung der Schwere (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Überschrift';

$GLOBALS["lang"]['Overwrite'] = 'Überschrift';

$GLOBALS["lang"]['owner'] = 'Eigentümer';

$GLOBALS["lang"]['Owner'] = 'Eigentümer';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec ist eine freiverteilbare Reimplementierung von SysInternal/Microsofts beliebtem PsExec Programm. PAExec zielt darauf ab, ein Ersatz für PsExec zu sein, so dass die Kommandozeilennutzung identisch ist, mit zusätzlichen Optionen auch unterstützt. Diese Arbeit wurde ursprünglich von Talha Tariqs RemCom inspiriert.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POSITIONEN';

$GLOBALS["lang"]['POSTing data'] = 'POST-Daten';

$GLOBALS["lang"]['Package'] = 'Paket';

$GLOBALS["lang"]['packages'] = 'Pakete';

$GLOBALS["lang"]['Packages'] = 'Pakete';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakete werden verwendet, um über Dinge wie <i>Software verboten</i>, AntiVirus auf Servern, etc.<br/><br/>Open-AudIT bietet Widgets, die auf auch gelieferten Repots bauen, um den Status von Antivirus, Firewall und anderen Software zu deteminieren.';

$GLOBALS["lang"]['pagefile'] = 'Seite';

$GLOBALS["lang"]['Pagefile'] = 'Seite';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palais';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palästinensische Autonomiebehörde';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Neuguinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parameter';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Eltern';

$GLOBALS["lang"]['parent_id'] = 'Personalausweis';

$GLOBALS["lang"]['Parent ID'] = 'Personalausweis';

$GLOBALS["lang"]['parent_name'] = 'Bezeichnung';

$GLOBALS["lang"]['Parent Name'] = 'Bezeichnung';

$GLOBALS["lang"]['part_number'] = 'Teilnummer';

$GLOBALS["lang"]['Part Number'] = 'Teilnummer';

$GLOBALS["lang"]['part_of_domain'] = 'Teil der Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Teil der Domain';

$GLOBALS["lang"]['Partition'] = 'Partition';

$GLOBALS["lang"]['partition_count'] = 'Partitionszähler';

$GLOBALS["lang"]['Partition Count'] = 'Partitionszähler';

$GLOBALS["lang"]['partition_disk_index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Pass'] = 'Reisepass';

$GLOBALS["lang"]['Passed'] = 'Passiert';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passives Optisches lokales Netzwerk';

$GLOBALS["lang"]['Password'] = 'Passwort vergessen?';

$GLOBALS["lang"]['password'] = 'Passwort vergessen?';

$GLOBALS["lang"]['password_changeable'] = 'Passwort ändernd';

$GLOBALS["lang"]['Password Changeable'] = 'Passwort ändernd';

$GLOBALS["lang"]['password_disabled'] = 'Passwort deaktiviert';

$GLOBALS["lang"]['Password Disabled'] = 'Passwort deaktiviert';

$GLOBALS["lang"]['password_expires'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Password Expires'] = 'Passwort vergessen?';

$GLOBALS["lang"]['password_last_changed'] = 'Passwort Letzte Änderung';

$GLOBALS["lang"]['Password Last Changed'] = 'Passwort Letzte Änderung';

$GLOBALS["lang"]['password_required'] = 'Passwort erforderlich';

$GLOBALS["lang"]['Password Required'] = 'Passwort erforderlich';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Pfad';

$GLOBALS["lang"]['Path'] = 'Pfad';

$GLOBALS["lang"]['Performance'] = 'Leistung';

$GLOBALS["lang"]['Performed'] = 'Ausgestellt';

$GLOBALS["lang"]['Permission'] = 'Genehmigung';

$GLOBALS["lang"]['Permission Required'] = 'Genehmigung erforderlich';

$GLOBALS["lang"]['permissions'] = 'Genehmigungen';

$GLOBALS["lang"]['Permissions'] = 'Genehmigungen';

$GLOBALS["lang"]['Persian'] = 'Persisch';

$GLOBALS["lang"]['Personal Area Network'] = 'Personalbereich Netzwerk';

$GLOBALS["lang"]['Personal area network'] = 'Persönliches Netzwerk';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Philippinen';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Physikalische CPUs';

$GLOBALS["lang"]['physical_count'] = 'Physikalischer Graf';

$GLOBALS["lang"]['Physical Count'] = 'Physikalischer Graf';

$GLOBALS["lang"]['physical_depth'] = 'Physikalische Tiefe';

$GLOBALS["lang"]['Physical Depth'] = 'Physikalische Tiefe';

$GLOBALS["lang"]['physical_height'] = 'Körpergröße';

$GLOBALS["lang"]['Physical Height'] = 'Körpergröße';

$GLOBALS["lang"]['physical_width'] = 'Physikalische Breite';

$GLOBALS["lang"]['Physical Width'] = 'Physikalische Breite';

$GLOBALS["lang"]['picture'] = 'Bild';

$GLOBALS["lang"]['Picture'] = 'Bild';

$GLOBALS["lang"]['pid'] = 'Pit';

$GLOBALS["lang"]['Pid'] = 'Pit';

$GLOBALS["lang"]['Pie Chart'] = 'Schaufenster';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie Charts müssen Namen oder my_name, Beschreibung oder my_description zurückgeben und zählen.';

$GLOBALS["lang"]['ping'] = 'Plüsch';

$GLOBALS["lang"]['Ping'] = 'Plüsch';

$GLOBALS["lang"]['Ping Target'] = 'Ziel verfolgen';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcair-Inseln';

$GLOBALS["lang"]['placement'] = 'Platzierung';

$GLOBALS["lang"]['Placement'] = 'Platzierung';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planung und Durchführung interner Audits';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Bitte haben Sie ein Open-AudIT-Administrator angemeldet und aktualisieren Sie die Datenbank.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Bitte loggen Sie sich ein und ändern Sie diese ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Bitte loggen Sie sich auf den Open-AudIT Server ein (entweder Windows oder Linux) und laufen <code>nslookup IP_ADDRESS_OF_TARGET</code> in der Befehlsanforderung oder Shell. Es muss in der Lage sein, die IP auf einen Namen zu lösen.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bitte beachten Sie, dass die Auswahlbox das Eingabefeld überschreiben wird.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Bitte beachten Sie die FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Senden Sie bitte alle drei Dateien an Ihren Supportkontakt bei Opmantek und beschreiben Sie Ihr Problem.';

$GLOBALS["lang"]['Please set using'] = 'Bitte setzen Sie mit';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Bitte besuchen Sie die Homepage';

$GLOBALS["lang"]['pod'] = 'Podest';

$GLOBALS["lang"]['Pod'] = 'Podest';

$GLOBALS["lang"]['Poland'] = 'Polen';

$GLOBALS["lang"]['Policies'] = 'Politik';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Richtlinien haben Ausnahmen.';

$GLOBALS["lang"]['policy'] = 'Politik';

$GLOBALS["lang"]['Policy'] = 'Politik';

$GLOBALS["lang"]['policy_id'] = 'Datenschutzerklärung';

$GLOBALS["lang"]['Policy ID'] = 'Datenschutzerklärung';

$GLOBALS["lang"]['Policy Result'] = 'Ergebnis';

$GLOBALS["lang"]['Policy Results'] = 'Ergebnisse der Politik';

$GLOBALS["lang"]['Polish'] = 'Polnisch';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Füllen Sie die mit folgenden Werten:';

$GLOBALS["lang"]['Populated by audit.'] = 'Bevölkert durch Audit.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populiert durch Entdeckung und Audit.';

$GLOBALS["lang"]['Populated dynamically.'] = 'dynamisch bevölkert.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populiert aus DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Bevölkert von SNMP Entdeckung.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Bevölkert von Geräteaudits.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populiert von Hostname.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populiert von Machine-ID auf Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Aus der IP für die Standardroute oder die in der Entdeckung erkannte IP gepopuliert.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populiert aus dem Hostname-Befehl.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populiert mit zusätzlichen Daten aus dem externen System, in einer JSON-Darstellung.';

$GLOBALS["lang"]['port'] = 'Hafen';

$GLOBALS["lang"]['Port'] = 'Hafen';

$GLOBALS["lang"]['port_name'] = 'Bezeichnung';

$GLOBALS["lang"]['Port Name'] = 'Bezeichnung';

$GLOBALS["lang"]['port_number'] = 'Hafen Nummer';

$GLOBALS["lang"]['Port Number'] = 'Hafen Nummer';

$GLOBALS["lang"]['ports_in_order'] = 'Ports in Bestellung';

$GLOBALS["lang"]['Ports In Order'] = 'Ports in Bestellung';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop nach';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop nach';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Portugiesische Republik';

$GLOBALS["lang"]['Portuguese'] = 'Portugiesisch';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugiesisch (Brasilien)';

$GLOBALS["lang"]['position'] = 'Position';

$GLOBALS["lang"]['Position'] = 'Position';

$GLOBALS["lang"]['Post-Certification'] = 'Nachzertifizierung';

$GLOBALS["lang"]['postcode'] = 'Postleitzahl';

$GLOBALS["lang"]['Postcode'] = 'Postleitzahl';

$GLOBALS["lang"]['power_circuit'] = 'Stromkreis';

$GLOBALS["lang"]['Power Circuit'] = 'Stromkreis';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Vorhersehbar';

$GLOBALS["lang"]['Preferences'] = 'Präferenzen';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Bereiten Sie alle 3 Jahre auf Rezertifizierung vor';

$GLOBALS["lang"]['Prerequisites'] = 'Voraussetzungen';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Voraussetzungen und Prüfungen';

$GLOBALS["lang"]['present'] = 'Gegenwart';

$GLOBALS["lang"]['Present'] = 'Gegenwart';

$GLOBALS["lang"]['previous_value'] = 'Vorheriger Wert';

$GLOBALS["lang"]['Previous Value'] = 'Vorheriger Wert';

$GLOBALS["lang"]['primary'] = 'Primäre';

$GLOBALS["lang"]['Primary'] = 'Primäre';

$GLOBALS["lang"]['Primary Key'] = 'Primärschlüssel';

$GLOBALS["lang"]['print_queue'] = 'Drucken Sie die Suche';

$GLOBALS["lang"]['Print Queue'] = 'Drucken Sie die Suche';

$GLOBALS["lang"]['printer_color'] = 'Drucker Farbe';

$GLOBALS["lang"]['Printer Color'] = 'Drucker Farbe';

$GLOBALS["lang"]['printer_duplex'] = 'Drucker Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Drucker Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Name des Druckers';

$GLOBALS["lang"]['Printer Port Name'] = 'Name des Druckers';

$GLOBALS["lang"]['printer_shared'] = 'Drucker geteilt';

$GLOBALS["lang"]['Printer Shared'] = 'Drucker geteilt';

$GLOBALS["lang"]['printer_shared_name'] = 'Drucker geteilter Name';

$GLOBALS["lang"]['Printer Shared Name'] = 'Drucker geteilter Name';

$GLOBALS["lang"]['priority'] = 'Priorität';

$GLOBALS["lang"]['Priority'] = 'Priorität';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Datenschutz Passphrase';

$GLOBALS["lang"]['Privacy Protocol'] = 'Datenschutzprotokoll';

$GLOBALS["lang"]['privileges_required'] = 'Vorrechte erforderlich';

$GLOBALS["lang"]['Privileges Required'] = 'Vorrechte erforderlich';

$GLOBALS["lang"]['processor'] = 'Verarbeiter';

$GLOBALS["lang"]['Processor'] = 'Verarbeiter';

$GLOBALS["lang"]['processor_count'] = 'Prozessorzähler';

$GLOBALS["lang"]['Processor Count'] = 'Prozessorzähler';

$GLOBALS["lang"]['processor_slot_count'] = 'Prozessor Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Prozessor Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Prozesstyp';

$GLOBALS["lang"]['Processor Type'] = 'Prozesstyp';

$GLOBALS["lang"]['Processors'] = 'Verarbeiter';

$GLOBALS["lang"]['product_name'] = 'Erzeugnisname';

$GLOBALS["lang"]['Product Name'] = 'Erzeugnisname';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produktname Match von CPE: ';

$GLOBALS["lang"]['products'] = 'Erzeugnisse';

$GLOBALS["lang"]['Products'] = 'Erzeugnisse';

$GLOBALS["lang"]['Professional'] = 'Beruf';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Programm';

$GLOBALS["lang"]['Program'] = 'Programm';

$GLOBALS["lang"]['Properties'] = 'Eigenschaften';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Richtig. Wenn Sie HighCharts ändern möchten, benötigen Sie möglicherweise eine';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Schützt Vertraulichkeit, Integrität und Verfügbarkeit von Informationen';

$GLOBALS["lang"]['protocol'] = 'Protokoll';

$GLOBALS["lang"]['Protocol'] = 'Protokoll';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Geben Sie eine Beschreibung an und wählen Sie und verfällt die Dauer.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Geben Sie einen Namen - wir humbly recommand Open-AudIT ≠, aber Sie können es alles nennen, was Sie möchten.<br/>Aus dem Open-AudIT-Formular kopieren Sie den Wert für die <i>Redirect URI</i> Feld und Paste in das <i>URI-Umleitung</i> Feld in OKTA.<br/>Die Sign-out-Umleitung URIs ist optional, aber wenn Sie möchten, können Sie open-audit/index verwenden. php/logout mit Ihren Open-AudIT Servern http Adresse, wie pro Screenshot.<br/>Normalerweise Ihr Open-AudIT URL wird so aussehen wie';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Sofern Sie die richtigen Anmeldeinformationen haben, arbeitet Device Seed Discovery wie folgt:';

$GLOBALS["lang"]['provider'] = 'Anbieter';

$GLOBALS["lang"]['Provider'] = 'Anbieter';

$GLOBALS["lang"]['published'] = 'Veröffentlicht';

$GLOBALS["lang"]['Published'] = 'Veröffentlicht';

$GLOBALS["lang"]['published_date'] = 'Datum';

$GLOBALS["lang"]['Published Date'] = 'Datum';

$GLOBALS["lang"]['publisher'] = 'Verlag';

$GLOBALS["lang"]['Publisher'] = 'Verlag';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Einkauf';

$GLOBALS["lang"]['purchase_amount'] = 'Kaufbetrag';

$GLOBALS["lang"]['Purchase Amount'] = 'Kaufbetrag';

$GLOBALS["lang"]['purchase_cost_center'] = 'Kauf Kosten Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Kauf Kosten Center';

$GLOBALS["lang"]['purchase_count'] = 'Kauf Count';

$GLOBALS["lang"]['Purchase Count'] = 'Kauf Count';

$GLOBALS["lang"]['purchase_date'] = 'Kaufdatum';

$GLOBALS["lang"]['Purchase Date'] = 'Kaufdatum';

$GLOBALS["lang"]['purchase_invoice'] = 'Kauf Invoice';

$GLOBALS["lang"]['Purchase Invoice'] = 'Kauf Invoice';

$GLOBALS["lang"]['purchase_order'] = 'Kaufen Bestellen';

$GLOBALS["lang"]['Purchase Order'] = 'Kaufen Bestellen';

$GLOBALS["lang"]['purchase_order_number'] = 'Bestellnummer';

$GLOBALS["lang"]['Purchase Order Number'] = 'Bestellnummer';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Kauf Service Vertragsnummer';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Kauf Service Vertragsnummer';

$GLOBALS["lang"]['purchase_vendor'] = 'Kaufen Verkäufer';

$GLOBALS["lang"]['Purchase Vendor'] = 'Kaufen Verkäufer';

$GLOBALS["lang"]['purpose'] = 'Zweck';

$GLOBALS["lang"]['Purpose'] = 'Zweck';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Abfragen';

$GLOBALS["lang"]['Queries'] = 'Abfragen';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Abfragen sind ein wichtiger Bestandteil von Open-AudIT. Sie sind, was Ihnen ermöglicht, aus allen von Ihnen entdeckten Gerätedaten sinnvolle Informationen zu erhalten. Zusammen mit Zusammenfassungen und Gruppen bieten sie einen mächtigen Mechanismus, um wichtige Informationen zu extrahieren.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Anfragen für Gruppen sollten nur die';

$GLOBALS["lang"]['Query'] = 'Abfrage';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Abfrage dieses Active Directory-Attribut zuerst, um die Benutzer-Arbeitseinheit zu bestimmen.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Abfrage dieses Active Directory-Attributs, um die Benutzer-Arbeitseinheit zu bestimmen.';

$GLOBALS["lang"]['queue'] = 'Frage';

$GLOBALS["lang"]['Queue'] = 'Frage';

$GLOBALS["lang"]['Queue Limit'] = 'Grenzwert für die Anforderung';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Gefragte IP-Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Items';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC für Active Directory und openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Level';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack-Geräte';

$GLOBALS["lang"]['Rack Devices'] = 'Rack-Geräte';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management und Reporting';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationalität';

$GLOBALS["lang"]['Rationale'] = 'Rationalität';

$GLOBALS["lang"]['raw'] = 'Roh';

$GLOBALS["lang"]['Raw'] = 'Roh';

$GLOBALS["lang"]['read'] = 'Weiterlesen';

$GLOBALS["lang"]['Read'] = 'Weiterlesen';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lesen Sie unsere Online-Dokumentation über das Open-AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Lesen Sie durch die Protokolldatei';

$GLOBALS["lang"]['Received'] = 'empfangen';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Vor kurzem wurden wir die Frage gestellt - halten Sie Open-AudIT sicherer als andere ähnliche Programme? Wie bei den meisten Dingen ist die Antwort <i>es hängt ab</i>.<br/><br/>Open-Aud Die IT kann extrem sicher betrieben werden. Aber wie üblich mit computergestützter Sicherheit, je sicherer Sie etwas machen möchten, desto unbequemer wird es zu verwenden. Der alte Satz <i>der sicherste Computer ist ein, der ausgeschaltet wird und im Schrank<i> kommt in den Sinn.<br/><br/>Im Folgenden werden wir einige Optionen, die mit Open-AudIT verwendet werden können, um die Sicherheit zu erhöhen. Wie die meisten Artikel innerhalb von Open-AudIT sind dies Optionen und nicht obligatorisch. Wie weit Sie die Sicherheit nehmen, liegt an Ihnen.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Berichtigung: Alle drei Jahre erforderlich';

$GLOBALS["lang"]['Red Query'] = 'Rote Abfrage';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Verringert das Risiko von Datenverletzungen und Cyber-Bedrohungen';

$GLOBALS["lang"]['references'] = 'Referenzen';

$GLOBALS["lang"]['References'] = 'Referenzen';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registrierter Benutzer';

$GLOBALS["lang"]['Registered User'] = 'Registrierter Benutzer';

$GLOBALS["lang"]['Rejected'] = 'Ausgestoßen';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = '!';

$GLOBALS["lang"]['remediation'] = 'Zurück zur Übersicht';

$GLOBALS["lang"]['Remediation'] = 'Zurück zur Übersicht';

$GLOBALS["lang"]['Remote'] = 'Fernbedienung';

$GLOBALS["lang"]['remote_address'] = 'Remote Address';

$GLOBALS["lang"]['Remote Address'] = 'Remote Address';

$GLOBALS["lang"]['remote_port'] = 'Remote Port';

$GLOBALS["lang"]['Remote Port'] = 'Remote Port';

$GLOBALS["lang"]['Remove'] = 'Entfernen';

$GLOBALS["lang"]['Remove Exception'] = 'Entfernen von Ausnahme';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Wiederholen, bis Sie einen vollständig entdeckten und geprüften Windows-PC haben.';

$GLOBALS["lang"]['Report'] = 'Bericht';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Bericht über Ihre Geräte, Netzwerke und mehr';

$GLOBALS["lang"]['reportable'] = 'Berichterstattung';

$GLOBALS["lang"]['Reportable'] = 'Berichterstattung';

$GLOBALS["lang"]['Reports'] = 'Berichte';

$GLOBALS["lang"]['request'] = 'Anfrage senden';

$GLOBALS["lang"]['Request'] = 'Anfrage senden';

$GLOBALS["lang"]['Request Method'] = 'Antragsverfahren';

$GLOBALS["lang"]['Request Vulnerability'] = 'Schwachstelle anfordern';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Fordern Sie eine bestimmte CVE';

$GLOBALS["lang"]['requested'] = 'Antrag';

$GLOBALS["lang"]['Requested'] = 'Antrag';

$GLOBALS["lang"]['require_port'] = 'Hafen suchen';

$GLOBALS["lang"]['Require Port'] = 'Hafen suchen';

$GLOBALS["lang"]['Require an Open Port'] = 'Erfordern Sie einen offenen Port';

$GLOBALS["lang"]['Required'] = 'Erforderlich';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Erforderliche AWS Benutzerrechte';

$GLOBALS["lang"]['Required Fields'] = 'Erforderliche Felder';

$GLOBALS["lang"]['Reset'] = 'Zurück zur Übersicht';

$GLOBALS["lang"]['Reset All Data'] = 'Alle Daten zurücksetzen';

$GLOBALS["lang"]['Reset to Default'] = 'Zurück zum Standard';

$GLOBALS["lang"]['resource'] = 'Ressourcen';

$GLOBALS["lang"]['Resource'] = 'Ressourcen';

$GLOBALS["lang"]['Resource Name'] = 'Ressourcenname';

$GLOBALS["lang"]['Resources'] = 'Ressourcen';

$GLOBALS["lang"]['response'] = 'Antwort';

$GLOBALS["lang"]['Response'] = 'Antwort';

$GLOBALS["lang"]['responsibility'] = 'Verantwortung';

$GLOBALS["lang"]['Responsibility'] = 'Verantwortung';

$GLOBALS["lang"]['Restore my Licenses'] = 'Wiederherstellen meiner Lizenzen';

$GLOBALS["lang"]['Restrict to Private'] = 'Beschränkung auf Privat';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Beschränkung auf Subnet';

$GLOBALS["lang"]['result'] = 'Ergebnis';

$GLOBALS["lang"]['Result'] = 'Ergebnis';

$GLOBALS["lang"]['Resulting Function'] = 'Ergebnisfunktion';

$GLOBALS["lang"]['Results'] = 'Ergebnisse';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Abrufen einer Liste von Geräten in der';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Abrufen einer Liste von Geräten mit OS Name wie Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Alle Details zum Gerät mit id 88 abrufen.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Alle Geräte mit Windows abrufen.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Alle Geräte mit den Standardspalten abrufen';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Abrufen Sie die ersten 10 Geräte, die von Windows bestellt werden';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Retrieve die Eigenschaften id, ip, hostname, domain, type from all device';

$GLOBALS["lang"]['retrieved'] = 'Abrufen';

$GLOBALS["lang"]['Retrieved'] = 'Abrufen';

$GLOBALS["lang"]['retrieved_ident'] = 'zurückgerufener Ausweis';

$GLOBALS["lang"]['Retrieved Ident'] = 'zurückgerufener Ausweis';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Abrufen vom Gerät - Windows:Win32_ComputerSystemProdukt, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Abruf einer Liste von Anmeldeinformationen';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Abrufen oder Erstellen';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Gibt eine Sammlung von Geräten mit dem Standard-Satz von Spalten zurück (devices.id, device.icon, device.type, device.name, device.ip, device.dns_fqdn, device.identification, device.description, device.manufacturer, device.os_family, device.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Gibt eine Liste aller Module an Routern zurück';

$GLOBALS["lang"]['Return an individual device details'] = 'Gibt ein einzelnes Gerät zurück';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Gibt eine Liste von {collection} zurück.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Gibt eine {collection}-Details zurück.';

$GLOBALS["lang"]['Reunion'] = 'Wiedervereinigung';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Überprüfen Sie aktuelle Praktiken gegen ISO 27001 Anforderungen';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risikobewertungsergebnis';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risikobewertungsergebnis';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risikobewertung und Behandlung';

$GLOBALS["lang"]['Risk Management'] = 'Risikomanagement';

$GLOBALS["lang"]['Role'] = 'Rolle';

$GLOBALS["lang"]['roles'] = 'Roggen';

$GLOBALS["lang"]['Roles'] = 'Roggen';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles können nur erstellt und bearbeitet werden, wenn Sie eine Open-AudIT Enterprise Lizenz haben. Für die meisten Benutzer sollte der Standardsatz von Roles alles sein, was erforderlich ist.';

$GLOBALS["lang"]['Romania'] = 'Rumänien';

$GLOBALS["lang"]['Romanian'] = 'Rumänien';

$GLOBALS["lang"]['Room'] = 'Zimmer';

$GLOBALS["lang"]['route'] = 'Route';

$GLOBALS["lang"]['Route'] = 'Route';

$GLOBALS["lang"]['Row'] = 'Kuh';

$GLOBALS["lang"]['Row Count'] = 'Row Count';

$GLOBALS["lang"]['row_position'] = 'Row Position';

$GLOBALS["lang"]['Row Position'] = 'Row Position';

$GLOBALS["lang"]['Rows'] = 'Kühe';

$GLOBALS["lang"]['ru_height'] = 'Ruhe';

$GLOBALS["lang"]['Ru Height'] = 'Ruhe';

$GLOBALS["lang"]['ru_start'] = 'Zurück zur Übersicht';

$GLOBALS["lang"]['Ru Start'] = 'Zurück zur Übersicht';

$GLOBALS["lang"]['rule_group'] = 'Artikelgruppe';

$GLOBALS["lang"]['Rule Group'] = 'Artikelgruppe';

$GLOBALS["lang"]['rules'] = 'Regeln';

$GLOBALS["lang"]['Rules'] = 'Regeln';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Regeln werden erstellt und gegen ein Gerät laufen, wenn das Gerät entdeckt wird oder ein Auditergebnis verarbeitet wird. Mit Regeln kann ein Geräteattribut basierend auf anderen Attributen eingestellt werden.<br/><br/>HINWEIS - Derzeit können wir keine Regeleingabe oder -ausgabe löschen, die eine / enthält. Dies liegt daran, dass das Framework die / als Teil der URL parsiert und eine 404 zurückgibt, auch bevor unser Code läuft. Dabei geht es darum, die Regel selbst zu löschen und die Ein- und Ausgänge nach Bedarf neu zu erstellen. Glücklicherweise sind Eingänge und Ausgänge, die ein / enthalten, selten (indeed, keine existiert standardmäßig).';

$GLOBALS["lang"]['Run Discovery'] = 'Entdecke die Flucht';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Entdecken Sie die Geräte';

$GLOBALS["lang"]['Run Your Discovery'] = 'Laufen Sie Ihre Entdeckung';

$GLOBALS["lang"]['Run a Command'] = 'Führen Sie ein Kommando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Eine Entdeckung starten und herausfinden <b>Was ist auf Ihrem Netzwerk?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Führen Sie das Skript durch Eingabe <code>cscript test_windows_client.vbs</code> in der Konsole.';

$GLOBALS["lang"]['Run this Command'] = 'Führen Sie das Kommando';

$GLOBALS["lang"]['runas'] = 'Runen';

$GLOBALS["lang"]['Runas'] = 'Runen';

$GLOBALS["lang"]['Running'] = 'Laufen';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache Service unter Windows laufen';

$GLOBALS["lang"]['Russian'] = 'Russisch';

$GLOBALS["lang"]['Russian Federation'] = 'Russische Föderation';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx Ebene';

$GLOBALS["lang"]['Rx Level'] = 'Rx Ebene';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profil';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

$GLOBALS["lang"]['SELECT'] = 'ELEKTRIZ';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM-Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Details';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Erweitert)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Statements';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL, der diese Bedingung nicht enthält, führt dazu, dass das Widget nicht ausgeführt wird.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Schlüssel';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelem';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'St. Kitts und Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre und Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'St. Vincent und die Grenadinen';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San Francisco';

$GLOBALS["lang"]['San'] = 'San Francisco';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome und Principe';

$GLOBALS["lang"]['Saturday'] = 'Samstag';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi Arabien';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Speichern und führen Sie die Datei. Stellen Sie sicher, dass Sie die Datei als Administrator ausführen, um sie zu installieren (rechtsklicken, als Administrator ausführen).';

$GLOBALS["lang"]['Save as Default'] = 'Speichern Sie den Standard';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Speichern Sie die heruntergeladene Datei.';

$GLOBALS["lang"]['scaling'] = 'Skalierung';

$GLOBALS["lang"]['Scaling'] = 'Skalierung';

$GLOBALS["lang"]['scan_options'] = 'Scanoptionen';

$GLOBALS["lang"]['Scan Options'] = 'Scanoptionen';

$GLOBALS["lang"]['Scan Options ID'] = 'Scanoptionen ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scannen Sie nach diesem Port und wenn geöffnet erkannt, verwenden Sie diesen Port für die SSH-Kommunikation. Dies wird in die Liste der benutzerdefinierten TCP-Ports oben (wenn nicht bereits enthalten), so gibt es keine Notwendigkeit, es auch in dieser Liste enthalten. Komma seperiert, keine Räume.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scannen Sie die Nmap Top-Nummer von TCP-Ports.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scannen Sie die Nmap Top-Nummer der UDP-Ports.';

$GLOBALS["lang"]['schedule'] = 'Fälligkeitsplan';

$GLOBALS["lang"]['Schedule'] = 'Fälligkeitsplan';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Geplante Geräteentdeckung und Berichterstattung machen Open-AudIT Professional zu einer effizienten Lösung für geschäftige IT-Profis, die Überköpfe reduzieren und Einblicke erhöhen möchten.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - Entdeckung, Berichterstattung & mehr';

$GLOBALS["lang"]['scope'] = 'Anwendungsbereich';

$GLOBALS["lang"]['Scope'] = 'Anwendungsbereich';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Scope ist als Authorization Scope bekannt, um festzustellen, ob eine Sicherheitslücke die Ressourcen über die ursprüngliche Sicherheitsbehörde der gefährdeten Komponente hinaus beeinflusst.<br/><br/>Die einzigen zwei gültigen Werte für dieses Attribut sind';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Schriften';

$GLOBALS["lang"]['Scripts'] = 'Schriften';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logic Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logic Unit';

$GLOBALS["lang"]['scsi_port'] = 'Hafen von Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Hafen von Scsi';

$GLOBALS["lang"]['Search'] = 'Suche';

$GLOBALS["lang"]['Search For a Device'] = 'Suche nach einem Gerät';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Suche mit DataTables';

$GLOBALS["lang"]['Second'] = 'Zwei';

$GLOBALS["lang"]['secondary'] = 'Sekundär';

$GLOBALS["lang"]['Secondary'] = 'Sekundär';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundärtext';

$GLOBALS["lang"]['Secret Key'] = 'Geheimer Schlüssel';

$GLOBALS["lang"]['section'] = 'Abschnitt';

$GLOBALS["lang"]['Section'] = 'Abschnitt';

$GLOBALS["lang"]['secure'] = 'Sicher';

$GLOBALS["lang"]['Secure'] = 'Sicher';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protokoll zur Automatisierung von Sicherheitsinhalten';

$GLOBALS["lang"]['Security Level'] = 'Sicherheitsstufe';

$GLOBALS["lang"]['Security Name'] = 'Sicherheitsname';

$GLOBALS["lang"]['Security Status'] = 'Sicherheitsstatus';

$GLOBALS["lang"]['security_zone'] = 'Sicherheitszone';

$GLOBALS["lang"]['Security Zone'] = 'Sicherheitszone';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Siehe oben. NOTE - Dies könnte auch durch ein selbstsigniertes Zertifikat auf dem LDAP-Server verursacht werden. Wir arbeiten daran, dies in einer zukünftigen Veröffentlichung zu ermöglichen.';

$GLOBALS["lang"]['See our page on enabling'] = 'Sehen Sie unsere Seite auf Aktivierung';

$GLOBALS["lang"]['Seed Discoveries'] = 'Seed Entdeckungen';

$GLOBALS["lang"]['seed_ip'] = 'Siehe IP';

$GLOBALS["lang"]['Seed IP'] = 'Siehe IP';

$GLOBALS["lang"]['seed_ping'] = 'Siehe Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Siehe Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Gesehene Einschränkung zu Privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Gesehene Einschränkung zu Privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Siehe Beschränkung auf Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Siehe Beschränkung auf Subnet';

$GLOBALS["lang"]['Select'] = 'Wählen';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Admin auswählen -> Aufgaben -> Erstellung Aufgabe aus dem Menü.';

$GLOBALS["lang"]['Select All'] = 'Alle anzeigen';

$GLOBALS["lang"]['Select All Devices'] = 'Alle Geräte auswählen';

$GLOBALS["lang"]['select_external_attribute'] = 'Externes Attribut auswählen';

$GLOBALS["lang"]['Select External Attribute'] = 'Externes Attribut auswählen';

$GLOBALS["lang"]['select_external_count'] = 'Externer Zähler auswählen';

$GLOBALS["lang"]['Select External Count'] = 'Externer Zähler auswählen';

$GLOBALS["lang"]['select_external_type'] = 'Wählen Sie Extern Typ';

$GLOBALS["lang"]['Select External Type'] = 'Wählen Sie Extern Typ';

$GLOBALS["lang"]['select_external_value'] = 'Wählen Sie Extern Wert';

$GLOBALS["lang"]['Select External Value'] = 'Wählen Sie Extern Wert';

$GLOBALS["lang"]['select_internal_attribute'] = 'Wählen Sie internes Attribut';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Wählen Sie internes Attribut';

$GLOBALS["lang"]['select_internal_count'] = 'Wählen Sie den internen Zähler';

$GLOBALS["lang"]['Select Internal Count'] = 'Wählen Sie den internen Zähler';

$GLOBALS["lang"]['select_internal_type'] = 'Wählen Sie intern Typ';

$GLOBALS["lang"]['Select Internal Type'] = 'Wählen Sie intern Typ';

$GLOBALS["lang"]['select_internal_value'] = 'Wählen Sie intern Wert';

$GLOBALS["lang"]['Select Internal Value'] = 'Wählen Sie intern Wert';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Menü auswählen -> Verwalten -> Basislinien -> Liste Basislinien.';

$GLOBALS["lang"]['Select a Table'] = 'Wählen Sie eine Tabelle';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Wählen Sie eine akkreditierte Zertifizierungsstelle aus';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Auswahl und Anwendung geeigneter Kontrollen (Anhang A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Wählen Sie die <i>KOMMEN Sicherheit</i> Register<br/><br/>Klicken Sie auf Zugangsberechtigungen Default bearbeiten';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Wählen Sie die <i>Auf der Karte</i> Tab und kopieren Sie den Wert für <i>Emittent</i> (nur die URL selbst). Fügen Sie das in das Open-AudIT ein <i>Emittent</i> Feld.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Wählen Sie die <i>Dieses Konto</i> checkbox und geben Sie den Kontonamen und das Passwort an.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Wählen Sie das Startmenü und den Typ <i>Dienstleistungen Klicken Sie auf das Symbol Services.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Wählen Sie die Art von Auth Menthod aus, um die relevanten Details zu erstellen und einzugeben.';

$GLOBALS["lang"]['Self Delete'] = 'Selbst löschen';

$GLOBALS["lang"]['Senegal'] = 'Schweden';

$GLOBALS["lang"]['sensitivity'] = 'Empfindlichkeit';

$GLOBALS["lang"]['Sensitivity'] = 'Empfindlichkeit';

$GLOBALS["lang"]['September'] = 'September';

$GLOBALS["lang"]['Serbia'] = 'Serbien';

$GLOBALS["lang"]['serial'] = 'Serie';

$GLOBALS["lang"]['Serial'] = 'Serie';

$GLOBALS["lang"]['serial_imei'] = 'Seriöse Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seriöse Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Server-ID';

$GLOBALS["lang"]['Server ID'] = 'Server-ID';

$GLOBALS["lang"]['Server Is'] = 'Server Is';

$GLOBALS["lang"]['server_item'] = 'Server-Element';

$GLOBALS["lang"]['Server Item'] = 'Server-Element';

$GLOBALS["lang"]['Server Status'] = 'Serverstatus';

$GLOBALS["lang"]['Servers'] = 'Server';

$GLOBALS["lang"]['Servers Only'] = 'Nur Server';

$GLOBALS["lang"]['service'] = 'Service';

$GLOBALS["lang"]['Service'] = 'Service';

$GLOBALS["lang"]['service_identifier'] = 'Service Identifier';

$GLOBALS["lang"]['Service Identifier'] = 'Service Identifier';

$GLOBALS["lang"]['service_level_a'] = 'Service Level A';

$GLOBALS["lang"]['Service Level A'] = 'Service Level A';

$GLOBALS["lang"]['service_level_b'] = 'Service Level B';

$GLOBALS["lang"]['Service Level B'] = 'Service Level B';

$GLOBALS["lang"]['service_network'] = 'Service Network';

$GLOBALS["lang"]['Service Network'] = 'Service Network';

$GLOBALS["lang"]['service_number'] = 'Servicenummer';

$GLOBALS["lang"]['Service Number'] = 'Servicenummer';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Serviceplan';

$GLOBALS["lang"]['Service Plan'] = 'Serviceplan';

$GLOBALS["lang"]['service_provider'] = 'Service Provider';

$GLOBALS["lang"]['Service Provider'] = 'Service Provider';

$GLOBALS["lang"]['service_tag'] = 'Tag';

$GLOBALS["lang"]['Service Tag'] = 'Tag';

$GLOBALS["lang"]['service_type'] = 'Serviceart';

$GLOBALS["lang"]['Service Type'] = 'Serviceart';

$GLOBALS["lang"]['Service Under Windows'] = 'Service unter Windows';

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'In Ordnung';

$GLOBALS["lang"]['Set By'] = 'In Ordnung';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Durch die Discovery-Funktion eingestellt - stellen Sie dies nicht normalerweise manuell fest.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Setzen Sie durch die audit_domain oder Discover_domain Skripte. Nicht einstellen.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Legen Sie den externen Text in die kapitalisierte Version der internen Daten ein.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Setzen Sie den externen Text in Kleinbuchstaben.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Legen Sie den externen Text in Großbuchstaben.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Legen Sie die Größe (normal oder kompakt) der Tabellen auf den Listen-Bildschirmen.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Setzen Sie diese, wenn Sie Systeme von AD einfügen möchten, die möglicherweise nicht berührbar sind, aber seit diesem Datum von AD gesehen wurden.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Die Einrichtung von Discovery auf einem Subnetz ist fast identisch mit einer regelmäßigen Discovery über die Web-Schnittstelle. Die einzigen zusätzlichen Elemente sind die geplante Stunde und Tag und ein Name für die geplante Aufgabe selbst. Sie können diese nutzen, um mehrere Entdeckungen mit verschiedenen Sätzen von Anmeldeinformationen zu planen.<br/><br/>Wie die Subnet Discovery, ist die Active Directory Discovery auch einfach die gleichen Felder wie eine regelmäßige Active Directory Discovery mit der Ergänzung eines Tages, Stunde(n) und Namen.<br/><br/>Hat der Open-AudIT Server Collectors berichtet, wird ein zusätzlicher Dropdown bereitgestellt. Sie können dies auswählen, um anzugeben, auf welcher Collector die Aufgabe ausgeführt werden soll. Nur Discovery-Aufgaben werden für Sammler unterstützt. Geben Sie die gleichen Elemente wie eine regelmäßige Entdeckung an, aber geben Sie dem alternativen Collector diese Aufgabe auszuführen.';

$GLOBALS["lang"]['severity'] = 'Schwere';

$GLOBALS["lang"]['Severity'] = 'Schwere';

$GLOBALS["lang"]['severity_text'] = 'Severity Text';

$GLOBALS["lang"]['Severity Text'] = 'Severity Text';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Die Schwere wird berechnet aus <code>base_score</code> und kann einer von: None, Low, Medium, High, Critical sein.';

$GLOBALS["lang"]['Seychelles'] = 'Seychellen';

$GLOBALS["lang"]['share'] = 'Anteil';

$GLOBALS["lang"]['Share'] = 'Anteil';

$GLOBALS["lang"]['Share Name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['shared'] = 'Geteilt';

$GLOBALS["lang"]['Shared'] = 'Geteilt';

$GLOBALS["lang"]['shared_name'] = 'Vorname';

$GLOBALS["lang"]['Shared Name'] = 'Vorname';

$GLOBALS["lang"]['shell'] = 'Schale';

$GLOBALS["lang"]['Shell'] = 'Schale';

$GLOBALS["lang"]['Ship Date'] = 'Datum des Inkrafttretens';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Verschifft sind eine Reihe von Standard-Elementen. Diese finden Sie beim Menü';

$GLOBALS["lang"]['short'] = 'Kurz';

$GLOBALS["lang"]['Short'] = 'Kurz';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Sollte ich alle nicht aktuellen Daten von diesem Gerät entfernen?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Sollte diese Datei (oder Muster) verwendet werden, um Dateien von der Meldung auszuschließen. Normalerweise, um Dateien zu überprüfen, ist dies auf <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Sollte dieser Anbieter beim Abruf von Schwachstellen von FirstWave verwendet werden.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Sollten wir Geräte aus dem Ferndienst hinzufügen, lokal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Sollten wir diese Lizenz sowohl auf den ausgewählten Org als auch auf die Orgs Kinder anwenden?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Sollten wir einen SAN prüfen, wenn die Managementsoftware erkannt wird.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Sollten wir Befestigungspunkte prüfen.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Sollten wir Netstat-Ports (ja, nein, nur Server) überprüfen.';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Sollten wir die installierte Software überprüfen.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Sollten wir einen gefilterten Port als offener Port betrachten - und damit diese IP als mit einem Gerät verbunden markieren?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Sollten wir einen openfilterfiltrierten Port als einen offenen Port betrachten - und damit diese IP als ein Gerät angehängt haben?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Sollten wir den Hostnamen in Kleinbuchstaben umwandeln.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Sollten wir eine Datei basierend auf dem Auditergebnis erstellen.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Sollten wir diese Gruppe in der Web-Schnittstelle aussetzen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Sollten wir diese Abfrage in der Liste der Berichte unter dem Bericht-Menü in der Web-Schnittstelle ausstellen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Sollten wir diese Abfrage in der Liste der Berichte unter dem Menü Berichte in der Web-Schnittstelle aussetzen.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Sollten wir das Audit-Skript-Fenster bei der Ausführung verstecken.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Sollten wir ein ungültiges oder selbst signiertes SSL-Zertifikat ignorieren und das Ergebnis trotzdem einreichen.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Sollten wir Open-Scap auf der Zielmaschine installieren.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Sollten wir mit einer gerätebasierten Mac-Adresse übereinstimmen, auch wenn dies ein bekannter wahrscheinlicher Duplikat von VMware ist.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Sollten wir ein Gerät auf Basis seiner DNS fqdn passen.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Sollten wir ein Gerät basierend auf seinem DNS-Hostname anpassen.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Sollten wir ein Gerät auf Basis seiner UUID passen.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Sollten wir ein Gerät auf Basis seiner dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Sollten wir ein Gerät auf Basis seiner fqdn passen.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Sollten wir auf einem Gerät basierend auf seinem Hostnamen und UUID passen.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Sollten wir ein Gerät auf Basis seines Hostnamens und dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Sollten wir ein Gerät auf Basis seines Hostnamens und seiner Serie zusammenstellen.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Sollten wir ein Gerät auf Basis seines ip passen, wenn wir ein bestehendes Gerät ohne Daten haben.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Sollten wir ein Gerät auf Basis seines ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Sollten wir ein Gerät auf Basis seiner Mac-Adresse anpassen.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Sollten wir ein Gerät auf Basis seiner Serie und Art passen.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Sollten wir ein Gerät auf Basis seiner Seriennummer anpassen.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Sollten wir ein Gerät nur auf der Basis seines SNMP sysName und seiner seriellen Konfiguration kombinieren.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Sollten wir ein Gerät nur auf Basis seines SNMP sysName zusammenstellen.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Sollten wir ein Gerät nur auf Basis seines Hostnamens anpassen.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Sollten wir das IP pingen, bevor wir es scannen wollen? Wenn es nicht auf das Ping reagiert, überspringen Sie dieses Gerät.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Sollten wir das externe System von unseren lokalen Geräten bevölkern.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Sollten wir alle DNS-Namen abrufen';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Sollten wir ein Audit durchführen und es einreichen (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Sollten wir SNMP mit UDP-Port 161 testen.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Sollten wir SSH mit TCP-Port 22 testen.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Sollten wir mit TCP-Port 135 auf WMI testen.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Sollten wir den Agenten deinstallieren (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Sollten wir die System- oder Benutzerebene Proxy verwenden, um das Auditergebnis einzureichen.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Sollten wir die win32_product WMI-Klasse (nicht von Microsoft empfohlen) beim Abrufen von installierter Software verwenden.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Sollten wir diese Methode verwenden, um Benutzerinformationen zu authentifizieren. Angepasst <code>y</code> oder <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Sollten wir diese Methode verwenden, um eine Benutzerrolle zu bevölkern. Das Feld <code>use_auth</code> muss eingestellt werden <code>y</code> das zu benutzen. Angepasst <code>y</code> oder <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Sollten wir diesen Wert verwenden, um externe und interne Geräte anzupassen. Unsere Standardintegration verwendet IP und UUID hier. Wenn eines dieser Übereinstimmung zwischen externem und internem Gerät, betrachten wir sie als das gleiche Gerät.';

$GLOBALS["lang"]['Show All'] = 'Alle anzeigen';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Seitenleiste';

$GLOBALS["lang"]['Sidebar'] = 'Seitenleiste';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapur';

$GLOBALS["lang"]['Site A'] = 'Standort A';

$GLOBALS["lang"]['Site B'] = 'Standort B';

$GLOBALS["lang"]['site_hours_a'] = 'Öffnungszeiten A';

$GLOBALS["lang"]['Site Hours A'] = 'Öffnungszeiten A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Hours B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Hours B';

$GLOBALS["lang"]['size'] = 'Größe';

$GLOBALS["lang"]['Size'] = 'Größe';

$GLOBALS["lang"]['slaves'] = 'Sklaven';

$GLOBALS["lang"]['Slaves'] = 'Sklaven';

$GLOBALS["lang"]['Slovak'] = 'Slowakisch';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slowakei (lowakische Republik)';

$GLOBALS["lang"]['Slovenia'] = 'Slowenien';

$GLOBALS["lang"]['Slovenian'] = 'Slowenien';

$GLOBALS["lang"]['Smart Status'] = 'Smart Status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Ein Skript funktioniert also nicht an einem Neuberechnungsgerät. Grrr. Die Skripte für Windows, Linux und MacOS akzeptieren alle das Debugging Argument. Dies kann im Skript selbst gesetzt oder auf der Befehlszeile bereitgestellt werden. Führen Sie das Skript mit dieser Option auf 5 und Sie sollten sehen, in welchem Abschnitt des Skripts der Fehler auftritt. Zum Beispiel';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Abgesehen von einem regulären Wort, was andere Optionen gibt - ich bin froh, dass Sie gefragt! Nach der Standard Open-AudIT API haben wir mehrere Operatoren zum Filtern. Betreiber, die dem Wert vorangehen können, sind';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'So haben Sie ein Problem mit Open-AudIT-Anmeldeinformationen, um Ihre Geräte zu entdecken. Ich habe eine Antwort - dann nicht! Sicher, ich meine, Entdeckung ist das Beste, seit Brot geschnitten. Sie müssen nicht vor der Zeit wissen <i>Was auf Ihrem Netzwerk</i>. Aber wie können Sie Daten von Geräten ohne Anmeldeinformationen extrahieren?<br/><br/>Im Falle von Computern ist eine einfache Möglichkeit, das entsprechende Audit-Skript auf die Zielmaschinen zu kopieren und es auf einen Zeitplan auszuführen. Mehr Details zum Wiki. Die Maschinen senden ihre Daten an Open-AudIT in diesem Zeitplan, fast als ob Sie die Entdeckung durchgeführt haben. Das Gerät führt einfach das Audit-Skript auf einem Zeitplan (wiederum können Sie das Audit-Skript lesen) als der Benutzer, den Sie ihm sagen, und sendet die Ausgabe an den Server. Es gibt keine Anmeldeinformationen.<br/><br/>Und jetzt haben wir Agenten für Windows. Die Vorteile eines tatsächlich installierten Agenten sind';

$GLOBALS["lang"]['socket'] = 'Sockel';

$GLOBALS["lang"]['Socket'] = 'Sockel';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software gefunden Letzte 7 Tage';

$GLOBALS["lang"]['Software Found Today'] = 'Software heute gefunden';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software wurde gestern gefunden';

$GLOBALS["lang"]['software_key'] = 'Softwareschlüssel';

$GLOBALS["lang"]['Software Key'] = 'Softwareschlüssel';

$GLOBALS["lang"]['Software License Reporting'] = 'Software-Lizenzberichte';

$GLOBALS["lang"]['software_name'] = 'Softwarename';

$GLOBALS["lang"]['Software Name'] = 'Softwarename';

$GLOBALS["lang"]['Software Policies'] = 'Softwarerichtlinien';

$GLOBALS["lang"]['software_revision'] = 'Software-Revision';

$GLOBALS["lang"]['Software Revision'] = 'Software-Revision';

$GLOBALS["lang"]['software_version'] = 'Softwareversion';

$GLOBALS["lang"]['Software Version'] = 'Softwareversion';

$GLOBALS["lang"]['Solaris'] = 'Solarium';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonen';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Somalia';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Einige Sammlungen können ausgeführt werden - Abfragen, etc. - siehe unten.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Einige Beispiele sind unten auf dieser Seite. Alle Endpunkte haben auch eine Mindestliste der benötigten Felder. Diese sind unten.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Einige unserer Vorlagen unterstützen den neuen Schritt zu dataTables, indem wir die serverseitige Verarbeitung verwenden. Diese Masse verbessert die Ladezeiten.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Ein anderer Fehler ist aufgetreten, wenn man versucht, an den LDAP-Server zu binden. Es ist berührbar (d.h. die <i>Verbindung</i> obig gearbeitet hat), aber aus irgendeinem anderen Grund ist die Bindung nicht aufgetreten. Überprüfen Sie die Protokolle auf dem LDAP-Server.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Irgendwas stimmt nicht. Open-AudIT kann die <i>Orgs</i> Tisch.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Irgendwas stimmt nicht. Open-AudIT kann die <i>Rollen</i> Tisch.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Manchmal passt eine nutzlose Entdeckung einfach nicht zu Ihrem Use-Case. Vielleicht haben Ihre PCs enge Firewalls. Vielleicht sind sie nicht im Netzwerk, wenn Ihre Entdeckungen geplant sind. Vielleicht werden sie von abgelegenen Arbeitern benutzt. Was auch immer der Fall ist, hier kann ein Agent helfen. Installieren Sie es auf der Zielmaschine und es wird <i>Check-in</i> mit Ihrem Open-AudIT Server auf einem Zeitplan und übernehmen Aufgaben. Die häufigste Aufgabe, die der Server fordert, ist, dass der Agent sich selbst überprüft und das Ergebnis sendet.';

$GLOBALS["lang"]['Sort'] = 'Sortierung';

$GLOBALS["lang"]['sound'] = 'Ton';

$GLOBALS["lang"]['Sound'] = 'Ton';

$GLOBALS["lang"]['source'] = 'Quelle';

$GLOBALS["lang"]['Source'] = 'Quelle';

$GLOBALS["lang"]['South Africa'] = 'Südafrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Südgeorgien und die Südsandwich-Inseln';

$GLOBALS["lang"]['Spain'] = 'Spanien';

$GLOBALS["lang"]['Spanish'] = 'Spanisch';

$GLOBALS["lang"]['Specific to Azure.'] = 'Spezifisch für Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Speziell für OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Gibt eine komma getrennte Liste von Zielen (keine Leerstellen) an, die vom Scan ausgeschlossen werden sollen. Die Liste, die Sie in verwenden normale Nmap Syntax, so kann es Hostname, CIDR-Netzblöcke, Oktett-Bereiche, etc. enthalten.';

$GLOBALS["lang"]['speed'] = 'Geschwindigkeit';

$GLOBALS["lang"]['Speed'] = 'Geschwindigkeit';

$GLOBALS["lang"]['speed_down_a'] = 'Geschwindigkeit nach unten A';

$GLOBALS["lang"]['Speed Down A'] = 'Geschwindigkeit nach unten A';

$GLOBALS["lang"]['speed_down_b'] = 'Geschwindigkeit nach unten B';

$GLOBALS["lang"]['Speed Down B'] = 'Geschwindigkeit nach unten B';

$GLOBALS["lang"]['speed_up_a'] = 'Geschwindigkeit A';

$GLOBALS["lang"]['Speed Up A'] = 'Geschwindigkeit A';

$GLOBALS["lang"]['speed_up_b'] = 'Geschwindigkeit B';

$GLOBALS["lang"]['Speed Up B'] = 'Geschwindigkeit B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Stufe 1: Dokumentationsüberprüfung';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Phase 2: Umsetzung und Wirksamkeit';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'Standard ID';

$GLOBALS["lang"]['Standard ID'] = 'Standard ID';

$GLOBALS["lang"]['standards'] = 'Normen';

$GLOBALS["lang"]['Standards'] = 'Normen';

$GLOBALS["lang"]['standards_policies'] = 'Richtlinien';

$GLOBALS["lang"]['Standards Policies'] = 'Richtlinien';

$GLOBALS["lang"]['standards_results'] = 'Ergebnisse der Normen';

$GLOBALS["lang"]['Standards Results'] = 'Ergebnisse der Normen';

$GLOBALS["lang"]['start_date'] = 'Startdatum';

$GLOBALS["lang"]['Start Date'] = 'Startdatum';

$GLOBALS["lang"]['start_mode'] = 'Startmodus';

$GLOBALS["lang"]['Start Mode'] = 'Startmodus';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Starten Sie einen Webbrowser und gehen Sie zu';

$GLOBALS["lang"]['started_date'] = 'Datum';

$GLOBALS["lang"]['Started Date'] = 'Datum';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Anfang Juni 2018 Google hat ein Pay-as-you-go-Preismodell für die Google Maps Platform APIs implementiert. Bisher konnten die meisten Nutzer mit moderater Nutzung Google Maps nutzen, die kostenlos in opCharts und Open-AudIT Professional/Enterprise eingebettet sind. Googles neue Politik wird hier umrissen,';

$GLOBALS["lang"]['Starts With'] = 'Beginnt mit';

$GLOBALS["lang"]['state'] = 'Staat';

$GLOBALS["lang"]['State'] = 'Staat';

$GLOBALS["lang"]['Stats'] = 'Stäbe';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Lagerung';

$GLOBALS["lang"]['storage_count'] = 'Speicherzähler';

$GLOBALS["lang"]['Storage Count'] = 'Speicherzähler';

$GLOBALS["lang"]['Storage area network'] = 'Speicherbereich Netzwerk';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Netzwerk';

$GLOBALS["lang"]['string'] = 'Streichung';

$GLOBALS["lang"]['String'] = 'Streichung';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Typ';

$GLOBALS["lang"]['Sub Type'] = 'Typ';

$GLOBALS["lang"]['subject_key_ident'] = 'Gegenstand';

$GLOBALS["lang"]['Subject Key Ident'] = 'Gegenstand';

$GLOBALS["lang"]['Submit'] = 'Einreichung';

$GLOBALS["lang"]['Submit Online'] = 'Online anmelden';

$GLOBALS["lang"]['Submitted From'] = 'Eingestellt von';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Entdeckungen';

$GLOBALS["lang"]['Subscription ID'] = 'Anmelden';

$GLOBALS["lang"]['suburb'] = 'Suburs';

$GLOBALS["lang"]['Suburb'] = 'Suburs';

$GLOBALS["lang"]['Success'] = 'Erfolg';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Passwort (optional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Summe';

$GLOBALS["lang"]['Summaries'] = 'Summe';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summäre sind eine einzige Abfrage gegen die Datenbank mit <i>Gruppe nach</i> Befehl. Mit dieser einfachen Methode können wir einfach eine Zusammenfassung für nahezu jedes Attribut erstellen.<br/><br/>Wir brauchen keinen gesonderten Bericht für jeden <i>Typ</i> einer Vorrichtung. Wir haben jetzt einfach eine Zusammenfassung von Gruppen von <i>Geräte. Typ</i> und zeigt das Ergebnis. Sie können dann auf einen bestimmten Typ aus der Liste klicken und die passenden Geräte sehen. In diesem Fall ersetzt eine Zusammenfassung (potentielle) 78 Berichte (es gibt 78 Gerätetypen).<br/><br/>Eine Zusammenfassung unterscheidet sich von einer Abfrage, indem eine Zusammenfassung entworfen wird, um Elemente durch ein bestimmtes Attribut zu gruppieren, und dann eine <i>Klicken Sie auf</i> Verbindung zu den eigentlichen Geräten. Eine Abfrage ist einfach eine Liste von Elementen ohne weitere Links. Wie oben - dies einer Zusammenfassung als kombiniert <i>Bericht + Unterbericht</i>, während eine Abfrage nur ein einziger Bericht ist.<br/><br/>Summaries haben eine andere Sammlungsvorlage für die anderen Ressourcen im Open-AudIT. Diese Vorlage zeigt die Zusammenfassung, wie Sie erwarten würden und zeigt auch Schaltflächen mit Zählungen anderer Ressourcen. Diese Seite ist das HomePage of Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Summäre sind dazu ausgelegt, Artikel durch eine bestimmte passende Spalte zu gruppieren und dann einen Link zu einzelnen Geräten bereitzustellen. In den vorherigen Versionen von Open-AudIT wäre dies zwei verschiedene Elemente gewesen - ein Bericht und Subreport. Wir haben diese nun in das gebündelt, was wir als Zusammenfassung bezeichnen.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summaries bietet die Möglichkeit der Berichterstattung. Einfach, intuitiv, leistungsstark.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summäre nehmen dieselben Argumente wie Queries.';

$GLOBALS["lang"]['Summary'] = 'Zusammenfassung';

$GLOBALS["lang"]['Sunday'] = 'Sonntag';

$GLOBALS["lang"]['supplier'] = 'Lieferant';

$GLOBALS["lang"]['Supplier'] = 'Lieferant';

$GLOBALS["lang"]['Support'] = 'Unterstützung';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Unterstützte Typen sind <code>subnet</code>, <code>seed</code> und <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Unterstützt die Einhaltung gesetzlicher und regulatorischer Anforderungen';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Überwachungsprüfungen: Jährliche Audits zur Aufrechterhaltung der Zertifizierung';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Inseln';

$GLOBALS["lang"]['Swaziland'] = 'Swasiland';

$GLOBALS["lang"]['Sweden'] = 'Schweden';

$GLOBALS["lang"]['Swedish'] = 'Schweden';

$GLOBALS["lang"]['switch_device_id'] = 'Schalter Geräte-ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Schalter Geräte-ID';

$GLOBALS["lang"]['switch_port'] = 'Schalter';

$GLOBALS["lang"]['Switch Port'] = 'Schalter';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Schweiz, Schweizerische Eidgenossenschaft';

$GLOBALS["lang"]['Symptom'] = 'Symptome';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Arabische Republik Syrien';

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

$GLOBALS["lang"]['system_component'] = 'Systemkomponenten';

$GLOBALS["lang"]['System Component'] = 'Systemkomponenten';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area-Netzwerk';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX Level';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'TX Profil';

$GLOBALS["lang"]['Table'] = 'Tabelle';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tag und Tag';

$GLOBALS["lang"]['tags'] = 'Schlagwörter';

$GLOBALS["lang"]['Tags'] = 'Schlagwörter';

$GLOBALS["lang"]['Tags :: '] = 'Schlagworte:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadschikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Beachten Sie alle Ausgabe und Aktion jedes Elements entsprechend.';

$GLOBALS["lang"]['Tanzania'] = 'Tansania';

$GLOBALS["lang"]['Target Computer'] = 'Zielcomputer';

$GLOBALS["lang"]['task'] = 'Aufgaben';

$GLOBALS["lang"]['Task'] = 'Aufgaben';

$GLOBALS["lang"]['tasks'] = 'Aufgaben';

$GLOBALS["lang"]['Tasks'] = 'Aufgaben';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Aufgaben können eine von mehreren verschiedenen Arten sein: Baseline, Discovery, Report, Query, Zusammenfassung oder Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Technische Details';

$GLOBALS["lang"]['tenant'] = 'Spannkraft';

$GLOBALS["lang"]['Tenant'] = 'Spannkraft';

$GLOBALS["lang"]['Tenant ID'] = 'Personalausweis';

$GLOBALS["lang"]['Tennant ID'] = 'Personalausweis';

$GLOBALS["lang"]['ternary'] = 'Laufzeit';

$GLOBALS["lang"]['Ternary'] = 'Laufzeit';

$GLOBALS["lang"]['Test 1'] = 'Prüfung 1';

$GLOBALS["lang"]['Test 2'] = 'Prüfung 2';

$GLOBALS["lang"]['Test 3'] = 'Prüfung 3';

$GLOBALS["lang"]['Test Email'] = 'Test E-Mail';

$GLOBALS["lang"]['test_minutes'] = 'Prüfprotokolle';

$GLOBALS["lang"]['Test Minutes'] = 'Prüfprotokolle';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Prüfungen';

$GLOBALS["lang"]['Tests'] = 'Prüfungen';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thai'] = 'Thailändische';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Vielen Dank, dass Sie Ihre Reise mit dem besten Entdeckungs- und Inventartool rundherum beginnen.';

$GLOBALS["lang"]['Thanks to'] = 'Dank';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Das ist es! Sie haben gerade die Attribute von so vielen Geräten bearbeitet, wie Sie brauchen.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Die <i>Roggen</i> Endpoint ermöglicht es Ihnen, den Satz von Berechtigungen zu verwalten (Kreate, Lesen, Aktualisieren, Löschen), die den Benutzern gewährt werden und auf jeden Endpunkt angewendet werden.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'Die API verwendet einen Cookie. Sie können ein Cookie anfordern, indem Sie eine POST an die untenstehende URL senden, die die Benutzernamen und Passwort-Attribute und -Werte enthält:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Die Active Directory-Domain, um eine Liste von Subnets aus.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Der Active Directory-Server, um eine Liste von Subnets aus.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Mit dem Endpunkt Applications können Sie eine Anwendung definieren, die Sie dann einem Gerät (oder Geräten) zuordnen können.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Mit dem Endpunkt Attributes können Sie in Open-AudIT individuelle Werte zu verschiedenen Attributen hinzufügen, im Moment funktioniert diese Funktion auf den Attributen Class, Environment, Status und Type auf Geräten, dem Attribut Type für beide Standorte und Orgs sowie der Menu Kategorie für Queries. Wenn Sie einen Artikel eines der prvious Typen anzeigen (siehe Ansicht einer Lkocation) werden Sie feststellen, dass das Typ Attribut aus einem Dropdown-Box ausgewählt werden muss. Hier werden diese Werte gespeichert. Wenn Sie also einen neuen Typ hinzufügen möchten, der für einen Standort gewählt werden soll, fügen Sie ihn mit der Attributes-Funktion hinzu.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Die Automatisierte Metrik erfasst die Antwort auf die Frage <strong>Kann ein Angreifer die Ausbeutungsereignisse für diese Schwachstelle über mehrere Ziele automatisieren?</strong> basierend auf den Schritten 1-4 der Killkette. Diese Schritte sind Aufklärung, Bewaffnung, Lieferung und Ausbeutung (Nicht Defined, Nein, Ja).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'Die CVE wurde als ungültig markiert oder in der CVE-Liste zurückgezogen. Es bleibt im NVD, wird aber von Standard-Suchergebnissen ausgeschlossen.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'Die CVE wurde in der CVE-Liste veröffentlicht und im NVD-Datensatz enthalten. Erstaufnahme nur.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'Die CVE wurde nach der ersten Analyse aktualisiert. NVD-Anreicherungsdaten wurden möglicherweise überarbeitet.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Die CVE-Kennung.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'Die CVE wird aktiv mit CVSS-Scores, CWE-Klassifikationen, Referenz-Tags und CPE-Applicability bereichert.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Die CVE wird derzeit aufgrund von Ressourcenzwängen oder anderen Gründen nicht zur Anreicherung priorisiert.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'Die CVE wird zur Anreicherung von NVD-Analysten abgefragt. Noch keine detaillierten Metadaten.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Die Cloud, die diesen Artikel besitzt. Links zu <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Der Typ Device Seed Discovery ist die neueste hochwirksame Methode für Netzwerk-Crawling, die Ihnen die Möglichkeit gibt, Ihr Netzwerk so eng oder so breit wie Sie brauchen anzusprechen. Es ist schnell, es funktioniert und es ist toll.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Der Discovery Scan Optionen, die wir versenden, sind in der Tabelle unten aufgeführt. Wie oben, Enterprise-Nutzer können mehr von diesen erstellen oder die versendeten Artikel bearbeiten.';

$GLOBALS["lang"]['The Elevated User query'] = 'Die erhöhte Benutzeranfrage';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Die Ausführungsfunktionen scannen die Festplatte eines Gerätes im Rahmen der Prüfung und prüfen, ob jede ausführbare Datei dem Paketmanager bekannt ist. Da es den Paketmanager verwendet, gilt das Feature nur für Linux-Zielgeräte und darüber hinaus nur UpM- oder Deb-basierte Distributionen. Alles, was Redhat oder Debian basiert, sollte funktionieren.';

$GLOBALS["lang"]['The FROM'] = 'Das FROM';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Die Gruppe leitete die Baseline. Links zu <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Die ID aus der Gerätetabelle (der Gerätename wird angezeigt) der NTU an diesem Ende der Verbindung. Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Die ID der eingeführten Benchmark-Politik.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Die ID aus der Positionstabelle (der Standortname wird angezeigt) dieses Endes der Verbindung. Links zu <code>locations.id</code>. Der A-Standort ist in der Regel <code>FROM</code> Standort.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Die ID aus der Positionstabelle (der Standortname wird angezeigt) dieses Endes der Verbindung. Links zu <code>locations.id</code>. Der B-Standort ist in der Regel <code>TO</code> Standort.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Die ID des zugehörigen Gerätes (falls vorhanden). Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Die ID der zugehörigen Entdeckung. Linked to <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Die ID des Produkts der zugehörigen Art.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Die ID dieses Orgs Elternorgs. Linked to <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Die vom Anbieter bereitgestellte ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Die ID wurde von einer Cloud-Entdeckung abgerufen.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Die IP-Adresse dieses Kollektors dient der Kommunikation mit dem Server.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Die IP des Geräts, um eine Samenentdeckung mit.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP der externen Schnittstelle.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP der internen Schnittstelle.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Das Zertifizierungsverfahren ISO/IEC 27001 und seine Schlüsselelemente.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Die ISP oder Telco bieten diesen Link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Der JSON-Recorder von Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Der JSON-Datensatz aus dem NVD-Feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Der LDAP OU dieses Benutzers (wenn LDAP verwendet wird).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Der LDAP-Server konnte nicht angeschlossen werden. Ganz und gar. Überprüfen Sie, ob es vom Open-AudIT Server abrufbar ist. Überprüfen Sie den korrekten Port auf dem Open-AudIT Server. Ein nmap vom Open-AudIT Server wird dies zeigen. Substituieren Sie Ihre LDAP Server IP für $ip. Versuchen Sie:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Der LDAP-Servertyp ist ungültig. Es sollte entweder <i>Aktives Verzeichnis</i> oder <i>Openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Der LDAP-Server wurde angeschlossen und die Benutzerinformationen für bind akzeptiert.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Der Linux Open-AudIT-Installer testet und installiert auf Bedarf Open-AudITs-Abhängigkeiten aus Ihrem Distributions-Repository, einschließlich der Einstellung der Nmap SetUID. Dies ist für die Erkennung von SNMP (UDP 161) durch einen nicht-root-Benutzer erforderlich. Dies wird auf RedHat/CentOS und Debian/Ubuntu unterstützt. Wenn Sie Nmap manuell installieren müssen:<br/><br/>Für RedHat/CentOS do (HINWEIS - wenn Sie mit yum upgraden, müssen Sie dies erneut anwenden <i>Kreide</i> Einstellung).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Der Ort, der dieses Netzwerk enthält. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Der NVD zugeordnete Basisstatus.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Das National Institute of Standards and Technology ist die Bundestechnologieagentur. Sie fördern offizielle Technologie, Messwissenschaft und Standards.';

$GLOBALS["lang"]['The Network to Discover'] = 'Das Netzwerk zu entdecken';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Das Nmap Timing Preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Das OS dieses Paket sollte berichtet werden. Blank für alle. Verwenden Sie das prozentuale Zeichen % als Wildcard. Wird in dieser Reihenfolge gegen os_group, os_family und os_name getestet.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Die Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Die Open-AudIT-ID der verknüpften Cloud. Links zu <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Der Open-Aud Der IT-Servercode wurde in dieser Datei ausgenutzt.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Der Open-Aud In dieser Funktion wurde der IT-Servercode ausgenutzt.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Das OpenSCAP-Ökosystem bietet mehrere Tools, um Administratoren und Auditoren bei der Bewertung, Messung und Durchsetzung von Sicherheits-Basislinien zu unterstützen, einschließlich einer Vielzahl von aushärtenden Anleitungen und Konfigurations-Basislinien, die von der Open Source-Community entwickelt wurden.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Das OpenSCAP-Projekt ist eine Sammlung von Open Source-Tools zur Umsetzung und Durchsetzung dieses Standards und wurde 2014 von NIST mit der SCAP 1.2 Zertifizierung ausgezeichnet.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Die Organisation, die diesen Artikel besitzt. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Der Prozess-Identifier der laufenden zugehörigen Entdeckung.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Das RU-Lager der Oberseite dieses Gerätes.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Die Racks-Funktion wird verwendet, um Ihre Rack-Nutzung mit einer Organisation, Standort, Gebäude, Boden, Raum und Row zu verwalten und zu visualisieren.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Der SCAP ist eine Spezifikation für das Ausdrücken und Manipulieren von Sicherheitsdaten in standardisierter Weise. SCAP verwendet mehrere Einzelspezifikationen, um die kontinuierliche Überwachung, das Sicherheitsmanagement und die Compliance-Bewertung der Sicherheitspolitik zu automatisieren.';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Der SELECT-Bereich der Abfrage sollte die volle Punkt-Notation verwenden und auch das Feld mit seinem vollen Punktnamen anfordern. IE - SELECT Geräte. id AS `devices.id`. Jedes Feld sollte auf diese Weise ausgewählt werden, um GUI-Seitenattributfilterung zu ermöglichen.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Der SELECT-Bereich Ihres SQL muss vollständig qualifizierte Spalten enthalten und bestimmte Spalten angeben.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Die SNMP Community-String.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Die SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Das SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Die SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Das SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Die Sicherheitsstufe SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Der Sicherheitsname SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Der SNMPv3-Kontext Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Der SNMPv3 Kontext Name (optional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Der SQL kann nicht enthalten <strong>WHERE @filter ODER</strong>. Dass SQL nicht ausgeführt wird, jedoch <strong>IN DER ERWÄGUNG</strong> Anfragen sind erlaubt.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Die SQL-Abfragen, die in Open-AudIT verwendet werden, erfordern die Verwendung des Backtick - ` Zeichen und NICHT das Standard-Einzelangebot für Felder. Auf den meisten US Windows-Tastaturen befindet sich die Backtick-Taste im oberen linken Bereich der Tastatur zusammen mit der tilde ~. Auf einer US Mac-Tastatur befindet sich die Backtick-Taste neben der SHIFT-Taste. Das Standard-Einzel-Zitrat wird weiterhin verwendet, um Werte einzuschließen, wie die nachfolgenden Beispiele illustrieren.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Die SQL-Abfrage wird im Wesentlichen in drei Teile zerlegt.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Die Standards-Funktionalität in Open-AudIT ermöglicht es Ihnen, die Fragen, die Auditoren benötigen, im Vorfeld der ISO 27001 Zertifizierung abzuschließen.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Die URL des externen Systems.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Die URL Ihres Open-AudIT Server, den dieser Collector melden wird (kein nachlaufender Slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Die URL der Audit-Skripte sollte ihr Ergebnis einreichen.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Mit dem Endpoint User können Sie Benutzerkonten innerhalb von Open-AudIT verwalten.';

$GLOBALS["lang"]['The WHERE'] = 'WAREN';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Der WHERE Abschnitt Ihres SQL <em>müssen</em> enthalten';

$GLOBALS["lang"]['The Windows'] = 'Die Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Das Windows-Log kann Folgendes sagen:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Das Konto muss ein Passwort haben; WMI erlaubt keine leeren Passwörter.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Das Konto-Passwort muss nicht \" enthalten (doppelte Zitate). Dies liegt daran, dass cscript (und wscript) Argumentwerte mit doppelten Zitaten nicht parsieren kann. Sie werden einfach gestreift. Nein (vor Sie fragen) Escaping wird nicht funktionieren. Dies ist eine Einschränkung der Schrift und nichts mit Open-AudIT zu tun.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Der eigentliche vollständige Name dieses Benutzers.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Die Adresse des Open-AudIT Servers reicht aus.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Der Administrator lieferte Anmeldeinformationen, die erfolgreich verwendet wurden, um an LDAP zu binden.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Der Administrator lieferte Anmeldeinformationen, um an den LDAP-Server zu binden, aber sie wurden nicht vom LDAP sevrer akzeptiert. Überprüfen Sie die Anmeldeinformationen auf dem LDAP-Server und überprüfen Sie dann im Open-AudIT LDAP Server Eintrag.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Der Agent und der Server sind auch intelligent genug, um den Agenten selbst zu aktualisieren, wenn eine neuere Version auf dem Server installiert ist (nach dem Upgrade von Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Der Agent sollte eine neue Kopie des Audit-Skripts herunterladen, ausführen und das Ergebnis an den Server senden.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Die Anwendung erstellt temporäre Audit Scrtips hier, kopiert sie auf die Zielmaschinen, dann löscht sie.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Die zugehörige Basislinie. Links zu <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Die zugehörige Entdeckung (falls erforderlich). Links zu <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Das Attribut zum Testen (aus dem <code>devices</code> Tabelle';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Das Attribut zum Testen (muss einen externen Feldnamen von unten entsprechen).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Die Attribute für Discovery-Scan-Optionen sind wie unten.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Das Audit-Skript, auf dem Ihre Anpassungen basieren.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Das Audit-Skript wird die Dateien[ ]-Array verwenden und die Dateidetails abrufen.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Die Audit-Skripte akzeptieren alle ein Debugging Argument. Sie können das Skript unter Verwendung dieser und sehen Sie im Detail, was das Problem ist. Und wenn Sie es nicht herausfinden können - das ist, wofür wir hier sind! Öffnen Sie einen Support-Fall und wir werden die Dinge in kürzester Zeit laufen lassen.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Der Basispfad, von dem aus Sie nach Benutzern suchen.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Die folgenden Schritte sind nicht die Schuld oder einzigartig zu Open-AudIT und würden beeinflussen <strong>alle</strong> Discovery Anwendung mit Remote WMI und/oder Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Der Benchmark-Typ.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Das Gebäude der Rack befindet sich in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Die berechnete Anzahl der extern zu erstellenden Geräte.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Die berechnete Anzahl der in Open-AudIT zu erstellenden Geräte.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Die Client-ID ist die ID einer Azure Active Directory-Anwendung. Das Client-Geheimnis ist der Schlüssel, den Sie diese Anwendung geben.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Der Sammler ist im Wesentlichen eine komplette Installation von Open-AudIT in <i>Sammler</i> Modus. Der Sammler ist entworfen, um Entdeckungen auf dem Netzwerk zu führen, in dem es sich befindet. Es ist nicht nur auf dieses Netzwerk beschränkt, sondern idealerweise wäre es im Wesentlichen ein Kollektor pro Subnetz, wenn erforderlich. Der Kollektor wird von dem Server auf einem Zeitplan betrieben und läuft auf dem angegebenen Netzwerk auf Entdeckung.<br/>Wann im Stand Alleinmodus der Collector fungiert als independanter Server und leitet einfach alle Geräte an den Hauptserver weiter.<br/><br/>Nach Installation und Einrichtung wird die Steuerung des Collector auf dem Server durchgeführt (nicht im Stand Alone Modus).<br/><br/>Die einzigen benötigten Netzwerk-Ports zwischen Kollektor und Server sind 80 oder 443 (TCP-Verbindung vom Collector zum Server). Die Open-AudIT-Datenbank wird zwischen diesen Installationen nicht (und nicht) geteilt.<br/><br/>Standardmäßig wird der Kollektor (nicht im Stand Alone Modus) vom Server alle 5 Minuten alle Entdeckungsaufgaben anfordern (Sie können dies auf dem Server für neue Collectors mit dem Konfigurationsartikel Collector_check_minutes konfigurieren), da alle Entdeckungsaufgaben für den Sammler für 0, 5, 10, 15 usw. Minuten geplant werden sollten.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Der Sammler ist im Wesentlichen eine komplette Installation von Open-AudIT in <i>Sammler</i> Modus. Dieser Modus würde die sichtbare Funktionalität reduzieren, um die Anwendung zu vereinfachen und zu fokussieren. Es ist konzipiert, um Informationen über lokale Netzwerke und Geräte zu sammeln, wobei Firewall und/oder Netzwerk-Traversal ein Problem des Servers ist.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Die Kollektoren intern IP verwendet, wenn es eine Entdeckung läuft.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Der Spaltenname aus dem Auslandstisch. Sollte eine von: Klasse, Umgebung, Status, Typ oder Menu_Kategorie sein.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Der Befehl, der auf dem Zielgerät oder Open-AudIT Servercode ausgeführt wird, der während der Entdeckung ausgeführt wird.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Die Konfiguration Ihres Clusters kann sein: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Das Anmelde-Passwort. Wenn die Anmeldeinformationen ein SSH Key sind, ist dies das Passwort, das verwendet wird, um den Schlüssel zu entsperren und optional ist.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Die vom Benutzer gelieferten Anmeldeinformationen haben versagt.';

$GLOBALS["lang"]['The credentials username.'] = 'Die Anmeldeinformationen Benutzername.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Datum und Uhrzeit im Format: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Das aktuelle Datum im Format Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Der aktuelle Status der Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Der aktuelle Status der Entdeckung.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Das Dashboard, das für diesen Benutzer standardmäßig angezeigt wird. Links zu <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Die in der Datenbank gespeicherten Daten werden in der übersetzten Anwendung nicht angezeigt. Wir verlassen die Daten, wie es ist. Es gibt jedoch nichts, um Sie, den Benutzer, den Namen (zum Beispiel) eines Artikels in der Datenbank auf Ihre Sprache zu ändern.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Die von Ihnen eingegebenen Daten werden in einem <code>LIKE</code> Klausel, nicht (nach der API) an <code>equals</code> Klausel. Ein weiteres Beispiel - wenn Sie eingeben <code>comput</code>, es würde immer noch alle Computer zurück. Und weil wir ein <code>LIKE</code> Klausel, es ist unempfindlich.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Das Datenbankschema kann in der Anwendung gefunden werden, wenn der Benutzer Datenbank hat::Gelesene Berechtigung durch Menü: Admin -> Datenbank ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Die Datenbank-Version und Web-Version sind inkonsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Das Datum der Lizenzlaufzeit.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Das Datum, an dem die Software vom Hersteller eingestellt wird. Normalerweise ersetzt durch eine neuere Version. Wartung kann noch verfügbar sein.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Das Datum, an dem die Software keine Updates mehr erhält, wird vollständig abgebrochen. Die Wartung wird eingestellt.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Das Datum dieses Artikels wurde geändert oder hinzugefügt (nur lesen). HINWEIS - Dies ist der Zeitstempel vom Server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datum/Zeit, als dieses Ergebnis erstellt wurde.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Der Tag des Monats, in dem diese Aufgabe ausgeführt werden soll (* für jeden Tag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Der Tag der Woche, an dem diese Aufgabe ausgeführt werden soll (* für jeden Tag).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Die Debug-Ebene (wird ausgegeben, um Eingabeaufforderung Fenster). Niedriger bedeutet weniger Ausgang, wobei 0 kein Ausgang ist.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Die Standard-Scan-Option ist das UltraFast-Set.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Die Standardsprache, die jedem Benutzer zugewiesen wird, der nach dieser Methode erstellt wurde.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Das Gerät muss auf eine Nmap-Ping reagieren, bevor es online betrachtet wird.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Das Gerät innerhalb von Open-AudIT. Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Der direkte Link zum Skript ist';

$GLOBALS["lang"]['The email address of the reciever'] = 'Die E-Mail-Adresse des Revers';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Das Unternehmen binär von FirstWave ist für eine Lizenz erforderlich. Bitte herunterladen Open-AudIT von';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Die gesamte zugeordnete Basislinie stammt aus.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Die ausgenutzte Sicherheitslücke kann die Ressourcen über die Sicherheitsbehörde der gefährdeten Komponente hinaus beeinflussen. Dies bedeutet in der Regel eine Privileg- oder Vertrauensgrenze (z.B. Flucht aus einem Container zum Host OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Die ausgenutzte Sicherheitslücke wirkt sich nur auf Ressourcen innerhalb derselben Sicherheitsbehörde aus wie die gefährdete Komponente. Mit anderen Worten bleiben die Handlungen des Angreifers innerhalb der ursprünglichen Vertrauensgrenze.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Die extern referenzierte Standort-ID. Üblicherweise von Cloud-Audits besiedelt.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Die mit einer Integration verbundenen Felder werden in der Datenbank als JSON-Array von Objekten gespeichert. Jedes Feld hat die folgenden Attribute';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Das erste Mal, dass Open-AudIT Details dieses Geräts abgerufen.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Der Boden der Rack befindet sich auf.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Die ausländische Tabelle zur Referenz. Sollte eines von: Geräten, Standorte, Orgs oder Abfragen sein.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Das Format Ihrer Daten sollte in Form sein';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Das Format, das für die Ausgabe verwendet wird, ist per E-Mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Die vollständig qualifizierte Spalte, nach der sie sich gliedern kann. HINWEIS: Wenn Typ = Verkehr, stellt dies die rote Abfrage id dar.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Der vollständig qualifizierte Name des externen Systems. EG: Für NMIS verwenden wir Konfiguration. Rolle Typ.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Die vollqualifizierte Tabelle. Spalte. Mehrere können vorgesehen sein, getrennt durch eine Komma (keine Räume).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Die generierte SQL-Abfrage, um diese Schwachstelle zu testen. Dieses Feld kann bearbeitet werden, um die Abfrage nach Bedarf zu korrigieren.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Die Gruppe der Geräte, an denen die Basislinie betrieben wurde.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Die Gruppe, die eine Liste von Geräten für die Integration bietet. Links zu <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Die Stunde des Tages, an dem diese Aufgabe ausgeführt werden soll (* für jede Stunde).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Die ID des verlinkten Geräts. Links zu <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Die Kennung Spalte (Integer) in der Datenbank (nur lesen).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Die Bedeutung dieser Basislinie (noch nicht genutzt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Die ganze Zahl der Schwere.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Der interne Wert, in diesem Format reformiert.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Die ip-Adresse der Auth-Methode.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Die Sprache, die Web-Schnittstelle für den Benutzer zu übersetzen.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Das letzte Datum und die Uhrzeit dieses Artikels wurden ausgeführt (nur lesen).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Das letzte Mal, dass Open-AudIT Details dieses Geräts abgerufen.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Das letzte Mal, dass diese Benchmarks ausgeführt wurden.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Letztes Mal wurde diese Integration durchgeführt.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Mit dem Lizenzendpunkt können Sie die Anzahl der auf Ihren Geräten gefundenen Lizenzen verfolgen.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Die vom Anbieter an diesem Ende der Verbindung der Leitung zugewiesene Zeilennummer.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Die Lage der Rack befindet sich in. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Die Adresse der Standorte.';

$GLOBALS["lang"]['The locations area.'] = 'Der Standortbereich.';

$GLOBALS["lang"]['The locations city.'] = 'Die Orte Stadt.';

$GLOBALS["lang"]['The locations country.'] = 'Das Standortland.';

$GLOBALS["lang"]['The locations district.'] = 'Die Standorte Bezirk.';

$GLOBALS["lang"]['The locations latitude.'] = 'Die Standorte sind geräumig.';

$GLOBALS["lang"]['The locations level.'] = 'Die Standorte Ebene.';

$GLOBALS["lang"]['The locations longitude.'] = 'Die Standorte sind lang.';

$GLOBALS["lang"]['The locations phone.'] = 'Die Standorte telefonieren.';

$GLOBALS["lang"]['The locations postcode.'] = 'Die Standorte Postleitzahl.';

$GLOBALS["lang"]['The locations region.'] = 'Die Standorte Region.';

$GLOBALS["lang"]['The locations room.'] = 'Die Locations Zimmer.';

$GLOBALS["lang"]['The locations state.'] = 'Die Standorte Zustand.';

$GLOBALS["lang"]['The locations suburb.'] = 'Die Orte Vorort.';

$GLOBALS["lang"]['The locations suite.'] = 'Die Locations Suite.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Die Logik zur Geräteanpassung ist in der device_helper.php-Datei enthalten, die auf einer Linux-Installation hier gefunden werden kann.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Die Einstellungen für die maschinelle Fehlerberechtigung gewähren keine lokale Aktivierungsberechtigung für die COM Server-Anwendung mit';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Das maximale physikalische Gewicht (in KGs) dieses Regal kann halten.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Die maximale Gesamt-BTUs dieses Rack ist für.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Die minimal erforderlichen Attribute für Attribute sind';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Die Minute der Stunde, in der diese Aufgabe ausführen sollte (* für jede Minute).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Der Monat des Jahres, in dem diese Aufgabe ausgeführt werden soll (* für jeden Monat).';

$GLOBALS["lang"]['The name given to this item.'] = 'Der Name dieses Artikels.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Der Name dieses Artikels. Idealerweise sollte es einzigartig sein.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Der Name, der diesem Benutzer angegeben wurde (zur Anmeldung). Idealerweise sollte es einzigartig sein.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Der Name der zugehörigen Cloud (falls erforderlich).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Der Name des Softwarepakets, wie von Open-AudIT geprüft. Verwenden Sie das prozentuale Zeichen % als Wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Der Name des Benutzers, der diesen Artikel zuletzt geändert oder hinzugefügt hat (nur lesen).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Der Name des Anbieters.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Das Netzwerk im Format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Das Netzwerk-Subnetz, um die Entdeckung durchzuführen.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Der neue Agent führt eine PowerShell-Version des alten Audit-Skripts in Vorbereitung auf die Abschreibung von VBScript (ja, es kommt).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Die Anzahl der RUs dieses Gerät besetzt.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Die Anzahl der zugehörigen Standorte. Links zu <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Die Anzahl der zugehörigen Netze. Links zu <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Die Anzahl der geprüften Geräte in dieser Cloud. Links zu <code>devices.cloud_id</code> und <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Die Anzahl der kritischen Schwere Schwachstellen von FirstWave (nicht in Ihrer Datenbank).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Die Anzahl der von dieser Entdeckung gefundenen Geräte.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Die Anzahl der Geräte in der zugehörigen Gruppe.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Die Anzahl der Geräte in dieser Cloud mit einem Zustand des Laufens. Links zu <code>devices.cloud_id</code> und <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Die Anzahl der Geräte in dieser Cloud mit einem Stand. Links zu <code>devices.cloud_id</code> und <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Die Anzahl der Geräte in dieser Cloud. Links zu <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Die Anzahl der Geräte, auf denen dieser Benchmark ausgeführt wird. Abgeleitet von <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Die Anzahl der Geräte, um diese Entdeckung zu begrenzen.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Die Anzahl der hohen Schwere Sicherheitslücken von FirstWave (nicht in Ihrer Datenbank).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Die Anzahl der Schwachstellen mit geringer Schwere (nicht in Ihrer Datenbank).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Die Anzahl der mittelschweren Schwachstellen von FirstWave (nicht in Ihrer Datenbank).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Anzahl der erworbenen Lizenzen.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Die Anzahl der Sekunden, um mit der Ziel-IP zu kommunizieren.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Die Anzahl der Schwachstellen ohne eine Schwere von FirstWave (nicht in Ihrer Datenbank).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Der Offset ist die Anzahl der Geräte, von denen Sie Daten zurückgeben möchten.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Die einzige erforderliche Berechtigung / Policy Name (in unserem Test) ist';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Die optionale Sekundärspalte. HINWEIS: Wenn Typ = Verkehr, stellt dies die gelbe Abfrage id dar.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Die optionale dritte Spalte. HINWEIS: Wenn Typ = Verkehr, stellt dies die grüne Abfrage id dar.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Die Reihenfolge der Informationen retrieval ist snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Die Orientierung dieser Vorrichtung.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Das Passwort (wenn nicht der Benutzer das Skript ausführen).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Das Passwort für das dn_account Attribut.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Das Passwort für den Zugriff auf das externe System.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Der Pfad zur Datei oder zum Verzeichnis.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Der Pfad zur Datei oder zum Verzeichnis. Die Direktoren sollten mit einem nachlaufenden Slash enden.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Die physische Tiefe (in CMs) des Regals.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Die physische Höhe (in CMs) des Regals.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Das physikalische Gewicht (in KGs) des Regals zur Zeit.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Das physikalische Gewicht (in KGs) des Regals, wenn es leer ist.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Die physikalische Breite (in CMs) des Regals.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Der Pod (falls vorhanden), dass dieser Rack Teil ist.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Der Stromkreis dieses Racks befestigt.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Die primäre Datenbanktabelle, auf der dieses Widget basiert.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Die primäre Methode zur Autorisierung (was ein Benutzer tun kann) basiert nun auf den Benutzern Roles. Roles werden standardmäßig als Admin, org_admin, Reporter und Benutzer definiert. Jede Rolle hat eine Reihe von Berechtigungen (Kreate, Lesen, Aktualisieren, Löschen) für jeden Endpunkt. Standardrollen sollten 99,9 Prozent der Anwendungsfälle umfassen. Die Möglichkeit, zusätzliche Rollen zu definieren und bestehende Rollen zu bearbeiten ist in Open-AudIT Enterprise aktiviert.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Die Prozesskennung dieser Warteschlange.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Der Prozess, der zuletzt verwendet wurde, um Details über das Gerät abzurufen';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Zweck dieser Lizenzierungsseite ist es, die Produkte und Lizenzen, die in Firstwave Commercial Produkten enthalten sind, einschließlich Produkte auf Basis von Open Source-Werken aufzulisten. Open-AudIT wird von Firstwave unter AGPLv3 lizenziert oder später mit Enterprise und Professional Funktionalität lizenziert unter kommerziellen Bedingungen. Open-AudIT beim Herunterladen von FirstWave kann die folgenden Bibliotheken und Projekte enthalten, die unmodifiziert und lizenziert wie angegeben geliefert werden:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Die Abfrage, die eine Liste von Geräten für die Integration bietet. Links zu <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Die Rack-Assetnummer.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Das Rack Asset-Tag.';

$GLOBALS["lang"]['The rack bar code.'] = 'Der Rack-Barcode.';

$GLOBALS["lang"]['The rack model.'] = 'Das Regalmodell.';

$GLOBALS["lang"]['The rack serial.'] = 'Das Regal seriell.';

$GLOBALS["lang"]['The rack series.'] = 'Die Rackserie.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Das Regal dieses Gerät befindet sich in. Links zu <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Der empfohlene Prozess der Adressierung und Fixierung identifiziert Sicherheitslücken. Dies beinhaltet typischerweise die Anwendung von Patches, Updates oder anderen Maßnahmen, um das von den Schwachstellen ausgehende Risiko zu beseitigen.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Die reguläre Domain-Notation Ihres Verzeichnisses. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Die angeforderten Eigenschaften sollten in einer gemeinschaftlichen Liste enthalten sein. Eigenschaften sollten vollständig qualifiziert sein - dh system.hostname (nicht nur Hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Das Ergebnis des Befehls.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Das Zimmer, in dem sich das Regal befindet.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'In der Reihe befindet sich das Regal.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Die Suche nach Gruppe auf dem LDAP-Server scheiterte. Überprüfen Sie die LDAP-Serverprotokolle. Haben Sie diese Gruppen (für Rollen und Orgs) auf dem LDAP-Server erstellt und ihnen LDAP-Benutzer zugewiesen?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Der geheime Schlüssel in Verbindung mit Ihrem AWS EC2 API Schlüssel verwendet.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Das Software-End-of-Life-Datum.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Das Software-End-of-Service-Lebensdatum.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Die spezifische Datenbankspalte aus der angegebenen Datenbanktabelle.';

$GLOBALS["lang"]['The specific database table.'] = 'Die spezifische Datenbanktabelle.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Die standardmäßigen Nmap Timing-Optionen. Zuvor auf T4 gesetzt (aggressiv).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Die standardmäßigen Nmap Timing-Optionen. Normalerweise verwenden wir -T4 (Aggressiv), da dies für eine anständige Breitband- oder Ethernet-Verbindung empfohlen wird.';

$GLOBALS["lang"]['The status of this integration'] = 'Der Status dieser Integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'Der Status dieses gelöschten Gegenstands.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Die folgenden Schritte skizzieren den Prozess.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Das Ziel IP dieser Protokolleintragsverweise auf (falls vorhanden).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Der Zielcomputer zur Prüfung. \"\" bedeutet localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Die Vorlage für den Link pro Ergebniszeile generiert werden.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Der Text für den unteren Teil des Diagramms in einem Zeilendiagramm (nur).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Der Text, der angezeigt wird.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Danach sollte diese Aufgabe laufen. Führen Sie beispielsweise eine Aufgabe nach dem 1. Juni 2017 um 10 Uhr aus, setzen Sie sie auf <code>2017-06-01 09:59:00</code>. Dieser Wert sollte null gepolstert sein (d.h. 09, nicht 9). Dieser Wert wird standardmäßig <code>2000-01-01 00:00:00</code> Das bedeutet standardmäßig, eine geplante Aufgabe wird zur nächsten geplanten Ausführungszeit ausgeführt.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Die Top 10, 100 oder 1000 (oder keine) TCP-Ports, die üblicherweise gemäß Nmap verwendet werden.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Die Top 10, 100 oder 1000 (oder keine) UDP-Ports, die üblicherweise gemäß Nmap verwendet werden.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Die gesamte BTU wird von diesem Rack ausgegeben.';

$GLOBALS["lang"]['The type of device.'] = 'Die Art des Geräts.';

$GLOBALS["lang"]['The type of organisation.'] = 'Die Art der Organisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Die Art des Racks (Compute, Power, Netzwerk usw.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Die Art der Aufgabe zu laufen. Einer von: Basis, Benchmark, Cloud-Erkennung, Entdeckung, Integration, Bericht, Abfrage.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Typ der Integration (in der Regel nach dem externen System benannt).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Der ungefilterte Zustand bedeutet, dass ein Port erreichbar ist, aber Nmap kann nicht feststellen, ob er offen oder geschlossen ist. Nur der ACK-Scan, der verwendet wird, um Firewall-Regeln abzubilden, klassifiziert Ports in diesen Zustand. Scannen ungefilterter Ports mit anderen Scan-Typen wie Fenster-Scan, SYN-Scan oder FIN-Scan, kann helfen, zu lösen, ob der Port geöffnet ist.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Die eindeutige Kennung dieses Servers.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Das Benutzerkonto dieses Sammlers. Links zu <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Der Benutzer in Active Directory / OpenLDAP muss ein direktes Mitglied der benötigten Open-AudIT-Gruppen für Roles und Orgs sein. Ein Mitglied einer Gruppe, die Mitglied einer anderen Gruppe ist, die Mitglied der Open-AudIT Gruppe ist, wird nicht funktionieren.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Der Benutzer ist in LDAP und seine Anmeldeinformationen sind gültig, aber nicht in einer der Open-AudIT LDAP Gruppen für Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Der Benutzer ist in LDAP und seine Anmeldeinformationen sind gültig, aber nicht in einer der Open-AudIT LDAP Gruppen für Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Der Benutzer ist in LDAP und seine Anmeldeinformationen sind gültig, aber nicht in einer der benötigten Open-AudIT LDAP Gruppen.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Der Benutzer ist in der LDAP Gruppe, die diesem Org entspricht.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Der Benutzer ist in der LDAP Gruppe, die dieser Rolle entspricht.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Der Benutzer ist nicht in der LDAP Gruppe, die diesem Org entspricht.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Der Benutzer ist nicht in der LDAP Gruppe, die dieser Rolle entspricht.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Der angegebene Benutzer existiert in LDAP, aber Open-AudIT ist nicht konfiguriert, um die LDAP-Gruppen für Rollen zu konsumieren und dass der Benutzer nicht innerhalb von Open-AudIT existiert. Wählen Sie <i>LDAP für Roles verwenden</i> auf dem Open-AudIT LDAP Server-Bildschirm oder erstellen Sie diesen Benutzer innerhalb von Open-AudIT und vergeben Rollen und Orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Der Benutzername (wenn nicht der Benutzer das Skript läuft).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Der Benutzername für den Zugriff auf das externe System.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Die Benutzerdaten wurden nicht von LDAP abgerufen. Überprüfen Sie die LDAP-Serverprotokolle.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Die Benutzerdaten wurden von LDAP abgerufen.';

$GLOBALS["lang"]['The users email address.'] = 'Die Benutzer-E-Mail-Adresse.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Die üblichen Betriebsstunden an dieser Stelle.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Der dem Gegenstand zugeordnete Wert.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Der für diesen bestimmten Artikel gespeicherte Wert.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Der Verkäufername nach CPE-Einträgen.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Der Verkäufer vom CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Das Web-Verzeichnis auf dem Host, das Open-AudIT installiert ist (erfordert einen nachlaufenden Slash).';

$GLOBALS["lang"]['The widget at position '] = 'Das Widget an Position ';

$GLOBALS["lang"]['The width of this device.'] = 'Die Breite dieser Vorrichtung.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Ihre OrgIDs und ihre Nachkommen';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Ihre OrgIDs nur';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Ihre OrgIDs, Aufsteiger und Nachkommen';

$GLOBALS["lang"]['Then'] = 'Dann';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Dann erstellen Sie eine neue Auth-Methode in Open-AudIT durch Menü -> Admin -> Auth-Methoden -> Erstelle Auth. Geben Sie einen Namen und setzen Sie die <i>Typ</i> zu Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Dann können Sie Open-AudIT (ununterstützt) verwenden, um Auditdaten direkt von den Kunden zu erhalten. Entdeckung <strong>wird scheitern</strong>, aber wenn Sie nicht mit Discovery (die Hauptfunktion Open-AudIT wurde um entwickelt), können Sie immer noch Gerätedaten erhalten. Sie müssten die Audit-Skripte direkt auf den Clients unter Verwendung von cron ausführen oder die Windows Agent Funktion verwenden (nur Unternehmen).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Es gibt eine Schaltfläche, um nach JSON zu exportieren. Dies wird nur die Gerätetabelle von Attributen anzeigen. Um das Gerät mit allen zugehörigen Komponententabellen zu exportieren, sehen Sie die Gerätedetails an, dann hinzufügen';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Es gibt absolut keine Notwendigkeit, jedes einzelne Gerät manuell zu bearbeiten.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Es gibt keine Notwendigkeit, etwas zu tun, wenn Sie Open-AudIT auf einem Linux-Server laufen.<br/><br/>Windows-Clients sind einfach gut und erfordern keine speziellen Aktionen, aber.... um diese Funktion zu aktivieren, muss das Audit-Skript lokal auf dem Ziel-Windows-System ausgeführt werden. Es kann nicht remote ausgeführt werden, wie wir mit WMI-Anrufen tun, wenn das Audit-Skript auf einem Windows-Computer ausgeführt wird, während eine zweite Windows-Maschine anvisiert wird. Dazu müssen wir das Audit-Skript auf die Ziel-Windows-Maschine kopieren und dann ausführen. Leider ist das Service-Konto, unter dem Apache läuft, das lokale System-Konto. Dieses Konto hat keinen Zugriff auf Remote (Netzwerk-basierte) Ressourcen. Um diese Frage zu bearbeiten, muss der Dienst unter einem anderen Konto ausgeführt werden. Es ist am einfachsten, nur das lokale Administrator-Konto zu verwenden, aber Sie können jedes Konto versuchen, das Sie mögen, solange es die erforderlichen Privilegien hat. Das lokale System-Konto hat so viel lokalen Zugriff wie das lokale Administrator-Konto.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Dies sind nur Beispiele. Sie müssen diese Attribute möglicherweise an Ihr bestimmtes LDAP anpassen.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Diese Parameter ermöglichen es Ihnen, nur das zu prüfen, was für Sie nützlich und relevant ist, die Verarbeitungszeit einzusparen und Ihr Netzwerk auf geordnete Weise zu entdecken.';

$GLOBALS["lang"]['Thing'] = 'Thing';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Denken Sie an mail.domain1.com und mail.domain2.com - gleiche Hostname.';

$GLOBALS["lang"]['Third'] = 'Drittens';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Diese CVE wird abgerufen und die bestehende CVE überschreiben, wenn sie existiert.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Diese Org hat keine AD-Gruppe angegeben. Überprüfen Sie die Rollendetails innerhalb von Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Diese Org hat keine AD-Gruppe angegeben. Überprüfen Sie die Rollendetails innerhalb von Open-AudIT. <span class=\'\"confluence-link\"\'>Haben Sie diese Gruppen (für Orgs) auf dem LDAP-Server erstellt und ihnen LDAP-Benutzer zugewiesen?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Diese Rolle hat keine AD-Gruppe angegeben. Überprüfen Sie die Rollendetails innerhalb von Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Dieses Attribut wird als JSON-Objekt gespeichert. Es ist die Liste aller Sammlungen und enthält den Sammelnamen zusammen mit <code>c</code>, <code>r</code>, <code>u</code> und <code>d</code> die erstellen, lesen, aktualisieren und löschen. Dies sind die Aktionen, die ein Benutzer auf Gegenständen aus dieser bestimmten Sammlung ausführen kann.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dies kann entweder ein Varchar (ein Textfeld), eine Liste (eine Liste von Werten, die ausgewählt werden können) oder ein Datum sein.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Dieser Code stützt sich auf die große Arbeit, die von der';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Diese Kollektoren universell einzigartige Kennung.';

$GLOBALS["lang"]['This column is required by'] = 'Diese Spalte ist erforderlich';

$GLOBALS["lang"]['This column is required by '] = 'Diese Spalte ist erforderlich ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Diese Beschreibung ist autopopuliert und sollte idealerweise as-is gelassen werden.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Dieser Endpunkt ermöglicht es Ihnen, die Verbindungen hinzuzufügen, die Teil Ihrer Netzwerkinfrastruktur sind, es ermöglicht Ihnen, eine Vielzahl von Attributen anzupassen, anzugeben, wo diese Verbindung liegt und die Organisation, die es gehört.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Dieser Fehler zeigt an, dass SMB1 deaktiviert oder aus der Zielmaschine entfernt wurde. Dies ist normal für die moderne Version von Windows und Sie werden diese Nachricht nur sehen, wenn der SMB2-Verbindungsversuch versagt hat. Wenn die SMB2-Verbindung ausfällt, versuchen wir SMB1, die Entdeckung auf alten Versionen von Windows zu ermöglichen. Wenn das Ziel Windows Maschine <i>ist</i> mit einer alten Version von Windows, es ist wahrscheinlich Ihre Anmeldeinformationen haben gescheitert. In diesem Fall siehe';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Dieser Fehler zeigt an, dass nicht genug virtuelle Speicher oder Paging-Dateiquote zur Verfügung steht, um den angegebenen Betrieb abzuschließen. Du solltest es später nochmal versuchen.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Dieser Fehler zeigt an, dass die verwendeten Anmeldeinformationen entweder falsch sind, nicht existieren oder nicht über ausreichende Privilegien verfügen, um sich remote an die Ziel-Windows-Maschine anzumelden. Sie sollten die Anmeldeinformationen überprüfen und die folgenden überprüfen.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Dieses Beispiel erstellt eine Liste aller Module, die als';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Dieses Beispiel erstellt eine Liste von Geräten und den offenen Ports, Protokollen und Programmen, die vom NMAP-Scan gefunden wurden.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Dieses Beispiel erstellt eine Liste von Geräten, bei denen die Felder Funktion oder Beschreibung leer sind oder das Bestelldatum der Standard ist.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Dieses Beispiel Abfrage ruft eine Liste von Geräten ab, die 3 Jahre alt sind. Die Abfrage nutzt heute';

$GLOBALS["lang"]['This example uses'] = 'Dieses Beispiel verwendet';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Diese Funktion erfordert eine Professional- oder eine Enterprise-Lizenz.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Diese Funktion, da sie die Möglichkeit hat, Zielgeräte mehr als üblich zu beeinflussen, muss manuell aktiviert werden. Um diese Funktion zu aktivieren, ändern Sie das Konfigurationselement feature_executables, um <i>Ja.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Diese Datei sagt Linux, um die Anwendung abzufragen, um festzustellen, ob es geplante Aufgaben gibt, die ausgeführt werden sollten.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Dieses Formular bietet eine einfache Möglichkeit, die Geräte in Ihrem Netzwerk zu entdecken. Für weitere (viel mehr) detaillierte Optionen können Sie individuell erstellen';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'So funktioniert PAExec auch.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Dies ist eine optionale Konfigurationsoption, die durch das Setzen von Discovery_org_id_match in der globalen Konfiguration aktiviert wird.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dies ist in der Regel die Primärspalte, sofern nicht anders konfiguriert. HINWEIS: Wenn Typ = Verkehr, stellt dies den Sekundärtext dar.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Dies ist wahrscheinlich, weil MySQL Zeit aus. MySQL verwendet typischerweise die Host-Geräte Zeit. Sie können das überprüfen';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Dies ist von den Nutzern festgelegt, und obwohl es weltweit einzigartig sein sollte, gibt es sicherlich keine Garantie dafür.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Dies ist das Verzeichnis, in dem wir alle Anhänge an Geräten speichern.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Dies gilt als erster Anlaufpunkt bei der Fehlerbehebung von Open-AudIT-Problemen. Sie können auf die Schaltfläche Export oben rechts klicken, um diese als JSON-Datei abzurufen (zum Support-Ticket / E-Mail hinzugefügt zu werden.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Diese Frage wird untersucht.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dieser Punkt muss dem Wert des ausgewählten Attributs entsprechen oder die ID der zu verwendenden Abfrage enthalten.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dieser Punkt muss dem Wert des ausgewählten Attributs entsprechen.';

$GLOBALS["lang"]['This license expires on'] = 'Diese Lizenz läuft ab';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Diese Sicherheitsberechtigung kann mit dem Verwaltungstool Komponentendienste geändert werden.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Dies sollte kommentiert werden, nachdem Fehlerbehebung als Debug-Modus wird eine Menge Protokolle auf der Festplatte für keinen Nutzen generieren.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Dies sollte global einzigartig sein, aber ich habe Fälle gesehen, wo es nicht ist.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dies sollte entweder auf 1 oder die Höhe des Regals eingestellt werden.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Dies sollte der vollständig qualifizierte Feldname in der Datenbank sein. Derzeit werden Spalten aus dem System, Felder und Anmeldetabellen unterstützt. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Dieser Zustand wird verwendet, wenn Nmap nicht feststellen kann, ob ein Port geschlossen oder gefiltert wird. Es wird nur für den IP-ID-Idle-Scan verwendet.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Das wird automatisch bevölkert.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dies wird den Entdeckungssscan erheblich verlangsamen.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Dies wird die aktuellen Zeilen in der';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Dies wird diese Lizenz dauerhaft löschen.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Dies zeigt Ihnen das Formular Bulk Edit. Alle Attribute, die Sie auf diesem Formular gesetzt werden, werden auf alle ausgewählten Geräte angewendet. Sie können mehrere Attribute auf einmal festlegen.';

$GLOBALS["lang"]['Thursday'] = 'Donnerstag';

$GLOBALS["lang"]['time_caption'] = 'Zeiterfassung';

$GLOBALS["lang"]['Time Caption'] = 'Zeiterfassung';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Zeit zum Ausführen';

$GLOBALS["lang"]['timeout'] = 'Zeit';

$GLOBALS["lang"]['Timeout'] = 'Zeit';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per Target (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout per Target. Warten Sie auf X Sekunden für eine Zielantwort.';

$GLOBALS["lang"]['Timesatamp'] = 'Die Zeit der Zeit';

$GLOBALS["lang"]['Timestamp'] = 'Zeitstempel';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Zu einer neuen Datei namens .env (im gleichen Verzeichnis). Jetzt bearbeiten Sie die neue Datei und Uncomment (Entfernen Sie die #) die folgende Zeile (Linie 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Um die Abfrage tatsächlich auszuführen, fügen Sie eine /execute an, also /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Um eine Maschine zu testen, müssen Sie Zugangsdaten und Administratorebenenzugriff haben.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Um eine Remote-Maschine auf einer Active Directory-Domain zu testen, muss der mitgelieferte Benutzer (oder falls kein vorhandener Benutzer das Skript ausgeführt) Mitglied der Zielmaschinen-Administratorengruppe (oder Untergruppe) sein.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Um eine Remote-Maschine zu testen, die nicht in einer Domain ist, müssen Sie das Administratorkonto verwenden (nicht <i>eine</i> Admin-Konto, <i>die</i> Administratorkonto) auf dem Ziel-PC. #1 und #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Zur Prüfung von localhost werden alle mitgelieferten Anmeldeinformationen außer Acht gelassen und die Verbindung erfolgt über die Details des Benutzers, der das Skript betreibt.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Um Software zu vergleichen, überprüfen wir den Namen und die Version. Da Versionsnummern nicht alle im Format standardisiert sind, erstellen wir ein neues Attribut namens software_pplus, das wir in der Datenbank zusammen mit den übrigen Software-Details für jedes Paket speichern. Aus diesem Grund werden die Basislinien, die Softwarerichtlinien verwenden, nicht funktionieren, wenn sie gegen ein Gerät laufen, das nicht von 1.10 geprüft wurde (zumindest). Softwarerichtlinien können gegen die Version testen <i>gleich</i>, <i>größer als</i> oder <i>gleich oder größer als</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Um einen neuen Eintrag zu erstellen, klicken Sie auf die Schaltfläche Erstellen in der oberen rechten Ecke.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Um eine Ressource zu erstellen, sollten Sie die erforderlichen Daten POST.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Damit eine Remote-Maschine (Vista oder höher) geprüft werden kann, die nicht auf einer Domäne liegt, sehen Sie bei einem Konto in der Gruppe Administratoren, außer dem eigentlichen Administratorkonto, den folgenden Abschnitt auf UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Um dies zu ermöglichen, erstellen Sie ein neues Auth-Element durch Menü -> Admin -> Auth -> Auth-Methode erstellen.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Um das Windows-powerhell-Skript auszuführen, öffnen Sie eine Befehlsanforderung als Administrator und verwenden Sie den folgenden Befehl';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Um das Audit-Skript auszuführen, öffnen Sie ein Terminal und verwenden Sie den folgenden Befehl';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Um einen Eigenschaftswert zu filtern, verwenden Sie den Eigenschaftsnamen. Betreiber, die dem Wert vorangehen sollten, sind';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Um Nmap unter Windows zu installieren, besuchen Sie die Nmap-Seite unter';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Um die Änderung vorzunehmen, folgen Sie einfach den Schritten unten.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Um die Tenant ID abzurufen. Öffnen Sie das Azure-Portal auf Azure Active Directory, Properties und die Tenant ID wird als Ihre Directory-ID angezeigt - geben Sie mir nicht die Schuld für den Namen mismatch, das ist, wie Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Um Ihren Schlüssel abzurufen, melden Sie sich in der AWS-Konsole an und wählen Sie Ihren Benutzernamen, dann My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Um eine bestimmte Komponente zurückzugeben.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Um alle Elemente für einen bestimmten Typ für ein bestimmtes Gerät zurückzugeben.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Um alle Elemente für einen Bauteiltyp zurückzugeben. Wenn Sie alle Software wünschen würden Sie verwenden';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Um die Sortierung umzukehren, ein Minus einsetzen, also';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Um das Testskript auf dem Ziel Windows PC auszuführen';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Zur Auswahl der zu integrierenden Geräte verwenden wir nmis_manage = y, aber Sie mögen (z.B.) Typ = Router. Sie können auch eine Gruppe oder Query verwenden, wenn Sie etwas komplexer bevorzugen.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Um eine Datenbankspalte zu sortieren, verwenden';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Um diese Enterprise-Funktion zu nutzen, müssen Sie zunächst Ihren Benutzer in Open-AudIT wie üblich erstellen. Die Zuordnung eines Passworts ist nicht erforderlich. Sie müssen Roles und Orgs zuordnen. Der Benutzername in Open-AudIT sollte der Entra entsprechen <i>bevorzugte Benutzername</i> Attribut. Es gibt keine Notwendigkeit für einen vollständigen Namen oder E-Mail - diese werden von Entra besiedelt. Wenn Sie Ihre Benutzer nicht kennen <i>bevorzugte Benutzername</i>Angst nicht. Sie können die neue Auth-Methode in Open-AudIT und die Enterprise-Anwendung in Entra erstellen und wenn ein Benutzer versucht, auf Open-AudIT ohne vorbestehenden Benutzer zu unterzeichnen, die Protokolle zu überprüfen und Sie werden ihre <i>bevorzugte Benutzername</i> für Ihre Konvienenz angemeldet.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Um diese Enterprise-Funktion zu nutzen, müssen Sie zunächst Ihren Benutzer in Open-AudIT wie üblich erstellen. Die Zuordnung eines Passworts ist nicht erforderlich. Sie müssen Roles und Orgs zuordnen. Der Benutzername in Open-AudIT sollte dem OKTA entsprechen <i>Name</i> Attribut. Es gibt keine Notwendigkeit für einen vollständigen Namen oder E-Mail - diese werden von OKTA besiedelt. Wenn Sie Ihre Benutzer nicht kennen <i>Name<i>Angst nicht. Sie können das neue Auth Menthod in Open-AudIT und die Anwendung in OKTA erstellen und wenn ein Benutzer versucht, sich ohne vorbestehenden Benutzer auf Open-AudIT zu unterschreiben, die Protokolle zu überprüfen und Sie werden ihre <i>Name<i> für Ihre Konvienenz angemeldet.<br/><p>Dann erstellen Sie eine neue Auth-Methode in Open-AudIT durch Menü -> Admin -> Auth-Methoden -> Erstelle Auth. Geben Sie einen Namen und setzen Sie die <i>Typ</i> bis Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Um diese Funktion zu nutzen, müssen Sie die Konfigurationselemente match_mac (für AWS) und match_hostname (für Azure) aktivieren. Dies geschieht automatisch zum ersten Mal, wenn eine Cloud-Entdeckung ausgeführt wird. Weitere Informationen zu Open-AudITs übereinstimmenden Regeln siehe HIER: passende Geräte';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Um die Details einer Abfrage anzuzeigen, die Standard-URL-Struktur von /open-audit/index. php/queries/{$id} sollte verwendet werden.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Der Stil der Liebe';

$GLOBALS["lang"]['Toolbar Style'] = 'Der Stil der Liebe';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Die Top 10, 100, 1000 Ports zum Scannen nach Nmaps "Top Ports" Optionen.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Die Top 10, 100, 1000 Ports zum Scannen nach Nmaps "Top Ports" Optionen.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditionelle chinesische';

$GLOBALS["lang"]['Traffic Light'] = 'Verkehr Licht';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad und Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Fehlerbehebung';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Fehlerbehebung LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Probieren Sie Open-AudIT Enterprise, auf uns ohne Frist. Alle Features von Enterprise. Limitiert auf 20 Geräte.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Probieren Sie alle neuesten Features mit einer KOSTENLOSE 100 Gerätelizenz von Open-AudIT Enterprise. Bitte lesen Sie die ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Versuchen Sie, sich mit einem LDAP-Benutzer einloggen. Wir gehen davon aus, dass dies scheitern wird (sonst, warum lesen Sie das noch?). Als nächstes kommentieren Sie die Zeile aus der r-Datei oben.';

$GLOBALS["lang"]['Tuesday'] = 'Dienstag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesien';

$GLOBALS["lang"]['Turkey'] = 'Türkei';

$GLOBALS["lang"]['Turkish'] = 'Türkisch';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks- und Caicosinseln';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Ebene';

$GLOBALS["lang"]['Tx Level'] = 'Tx Ebene';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profil';

$GLOBALS["lang"]['type'] = 'Typ';

$GLOBALS["lang"]['Type'] = 'Typ';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Typ: Dies kann entweder ein Varchar (ein Textfeld) oder eine Liste sein (eine Liste von Werten, die ausgewählt werden können).';

$GLOBALS["lang"]['Types of Networks'] = 'Arten von Netzwerken';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraine';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 Audit (Bewertung der Dokumentation)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 Audit (Umsetzungsprüfung)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Unterwegsanalyse';

$GLOBALS["lang"]['Unfiltered'] = 'ungefiltert';

$GLOBALS["lang"]['uninstall'] = 'Deinstallieren';

$GLOBALS["lang"]['Uninstall'] = 'Deinstallieren';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Deinstallieren Sie den Agenten';

$GLOBALS["lang"]['United Arab Emirates'] = 'Vereinigte Arabische Emirate';

$GLOBALS["lang"]['United Kingdom'] = 'Vereinigtes Königreich';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Vereinigte Staaten Minor Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Vereinigte Staaten von Amerika';

$GLOBALS["lang"]['United States of America'] = 'USA';

$GLOBALS["lang"]['Unknown'] = 'Unbekannt';

$GLOBALS["lang"]['unlock_pin'] = 'Pin entsperren';

$GLOBALS["lang"]['Unlock Pin'] = 'Pin entsperren';

$GLOBALS["lang"]['Unscheduled'] = 'Ungeplant';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Nicht verwendet wie bei 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Nicht verwendet.';

$GLOBALS["lang"]['Update'] = 'Aktualisierung';

$GLOBALS["lang"]['update_external_count'] = 'Externer Zähler aktualisieren';

$GLOBALS["lang"]['Update External Count'] = 'Externer Zähler aktualisieren';

$GLOBALS["lang"]['update_external_from_internal'] = 'Update extern von intern';

$GLOBALS["lang"]['Update External From Internal'] = 'Update extern von intern';

$GLOBALS["lang"]['update_internal_count'] = 'Interner Zähler aktualisieren';

$GLOBALS["lang"]['Update Internal Count'] = 'Interner Zähler aktualisieren';

$GLOBALS["lang"]['update_internal_from_external'] = 'Update intern von extern';

$GLOBALS["lang"]['Update Internal From External'] = 'Update intern von extern';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'NMIS-Geräte von Open-AudIT aktualisieren';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Open-AudIT aktualisieren Geräte von ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Open-AudIT aktualisieren Geräte von NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Schwachstellen aktualisieren';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Aktualisieren Sie ein Attribut eines Eintrags {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Attribute aktualisieren';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Aktualisierte jedes Mal Entdeckung wurde mit IPs erkannt zu reagieren.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aktualisierte jedes Mal Entdeckung wurde mit IPs ausgeführt, die von Nmap gescannt wurden.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Jedes Mal, wenn die Entdeckung mit Geräten durchgeführt wurde, konnten wir überprüfen.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Jedes Mal, wenn die Entdeckung mit Geräten durchgeführt wurde, konnten wir abfragen.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Jedes Mal wurde die Entdeckung aktualisiert.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aktualisiert jedes Mal, wenn die Entdeckung ausgeführt wurde.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aktualisiert jedes Mal, wenn die Entdeckung die Ausführung abgeschlossen hat.';

$GLOBALS["lang"]['Updating'] = 'Aktualisierung';

$GLOBALS["lang"]['Upgrade'] = 'Upgrade';

$GLOBALS["lang"]['Upload an audit result file'] = 'Hochladen einer Auditergebnisdatei';

$GLOBALS["lang"]['Upper Case'] = 'Rechtssache';

$GLOBALS["lang"]['uptime'] = 'Aktualisierung';

$GLOBALS["lang"]['Uptime'] = 'Aktualisierung';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, östliche Republik';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Verwendung';

$GLOBALS["lang"]['Use'] = 'Verwendung';

$GLOBALS["lang"]['use_authentication'] = 'Verwendung Authentication';

$GLOBALS["lang"]['Use Authentication'] = 'Verwendung Authentication';

$GLOBALS["lang"]['use_authorisation'] = 'Nutzungsberechtigung';

$GLOBALS["lang"]['Use Authorisation'] = 'Nutzungsberechtigung';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy verwenden';

$GLOBALS["lang"]['Use SNMP'] = 'Verwenden Sie SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Verwenden Sie Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Verwendung Service Version Detektion';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Verwenden Sie Service Version Detection. Wenn ein erkannter Port als geöffnet erkannt wird, wenn <i>y</i>, Nmap wird das Zielgerät in einem Versuch abfragen, die Version des Dienstes zu bestimmen, der auf diesem Port läuft.<br/>Dies kann nützlich sein, wenn unklassifizierte Geräte identifiziert werden. Dies wurde bisher nicht verwendet.';

$GLOBALS["lang"]['Use WMI'] = 'WMI verwenden';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Verwenden eines <i>Anmeldemethode</i> von OIDC - OpenID Connect und eine <i>Anwendungsart</i> von Web Application. Klicken Sie auf <i>Nächste</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Verwendung für Authentication';

$GLOBALS["lang"]['Use for Roles'] = 'Verwendung für Roles';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Verwenden Sie die Standard-Installationsoptionen, wenn Sie angezeigt werden und klicken Sie auf die <i>I Agree</i>, <i>Nächste</i> und <i>Installieren</i> Tasten, um Nmap zu installieren.';

$GLOBALS["lang"]['used'] = 'Verwendet';

$GLOBALS["lang"]['Used'] = 'Verwendet';

$GLOBALS["lang"]['used_count'] = 'Gebraucht';

$GLOBALS["lang"]['Used Count'] = 'Gebraucht';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Nur von OpenLDAP verwendet.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Wird intern bei der Entdeckung eines einzigen Geräts verwendet.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Wird intern bei der Entdeckung eines einzigen Geräts verwendet. Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Wird verwendet, wenn LDAP-Server konfiguriert wurden, um eine Benutzerdetails zu bevölkern - dies beinhaltet die Orgs, auf die sie Zugriff haben. Ist ein Benutzer in dieser LDAP-Gruppe, werden diese org zugeordnet.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Wird verwendet, wenn LDAP-Server konfiguriert wurden, um eine Benutzerdetails zu bevölkern - dies beinhaltet die Roles, die sie zugewiesen werden. Wenn ein Benutzer in dieser LDAP-Gruppe ist, werden diese Rolle zugewiesen.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Wird bei der Suche nach OpenLDAP verwendet, um den Benutzern zu entsprechen, die an eine Gruppenmitglieder weitergeleitet werden. Standard <code>memberUid</code>. Nur von OpenLDAP verwendet.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Verwendet mit Integrations- und FirstWave Monitoring-Anwendungen.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Verwendet mit Integrations- und FirstWave Monitoring-Anwendungen. Setzen Sie auf y, wenn die Arbeit SNMP durch Entdeckung erkannt.';

$GLOBALS["lang"]['user'] = 'Benutzer';

$GLOBALS["lang"]['User'] = 'Benutzer';

$GLOBALS["lang"]['User DN'] = 'Benutzer DN';

$GLOBALS["lang"]['user_group'] = 'Benutzergruppe';

$GLOBALS["lang"]['User Group'] = 'Benutzergruppe';

$GLOBALS["lang"]['user_id'] = 'Benutzerkennung';

$GLOBALS["lang"]['User ID'] = 'Benutzerkennung';

$GLOBALS["lang"]['user_interaction'] = 'Benutzerinteraktion';

$GLOBALS["lang"]['User Interaction'] = 'Benutzerinteraktion';

$GLOBALS["lang"]['User Membership Attribute'] = 'Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['user_name'] = 'Benutzername';

$GLOBALS["lang"]['User Name'] = 'Benutzername';

$GLOBALS["lang"]['User Policies'] = 'Benutzerrichtlinien';

$GLOBALS["lang"]['Username'] = 'Benutzername';

$GLOBALS["lang"]['username'] = 'Benutzername';

$GLOBALS["lang"]['users'] = 'Benutzer';

$GLOBALS["lang"]['Users'] = 'Benutzer';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Benutzer arbeiten ähnlich wie Netstat Ports. Wenn ein Benutzer mit einem passenden Namen, Status und Passwort-Details (änderbar, abläuft, erforderlich) existiert, dann geht die Richtlinie weiter.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Benutzer, Roles und Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Verwenden Sie das CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Verwendung';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Mit Entra für Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Verwendung von LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA für Auth verwenden';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Die Verwendung der Formatoption ist nützlich, wenn Sie einen Webbrowser verwenden, aber Sie möchten das Ergebnis im JSON-Format sehen. Das Hinzufügen von format=json erreicht. Normalerweise wird ein Web-Browser seinen Akzeptanz-Header auf HTML setzen, so in diesem Fall, wir geben die Rendered-Seite zurück. Mit einer API zum Abrufen von JSON sollten Sie den akzeptieren Header festlegen';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Meistens Mbs, ab Ort A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Meistens Mbs, ab Standort B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Meistens Mbs, zu Position A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Meistens Mbs, nach Standort B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Normalerweise sollte auf 3 gesetzt werden.';

$GLOBALS["lang"]['Uzbekistan'] = 'Usbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Gültig von';

$GLOBALS["lang"]['Valid From'] = 'Gültig von';

$GLOBALS["lang"]['valid_from_raw'] = 'Gültig von der Straße';

$GLOBALS["lang"]['Valid From Raw'] = 'Gültig von der Straße';

$GLOBALS["lang"]['valid_to'] = 'Gültig bis';

$GLOBALS["lang"]['Valid To'] = 'Gültig bis';

$GLOBALS["lang"]['valid_to_raw'] = 'Gültig an der Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Gültig an der Raw';

$GLOBALS["lang"]['Valid Values'] = 'Gültige Werte';

$GLOBALS["lang"]['value'] = 'Wert';

$GLOBALS["lang"]['Value'] = 'Wert';

$GLOBALS["lang"]['Value Types'] = 'Wertetypen';

$GLOBALS["lang"]['values'] = 'Werte';

$GLOBALS["lang"]['Values'] = 'Werte';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Werte: Im Falle eines <i>Liste</i> Feld, dies sollte eine komma getrennte Liste der gültigen Werte sein.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['Various'] = 'Verschiedene';

$GLOBALS["lang"]['vendor'] = 'Verkäufer';

$GLOBALS["lang"]['Vendor'] = 'Verkäufer';

$GLOBALS["lang"]['Vendor Report'] = 'Bericht des Verkäufers';

$GLOBALS["lang"]['vendors'] = 'Verkäufer';

$GLOBALS["lang"]['Vendors'] = 'Verkäufer';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version gepolstert';

$GLOBALS["lang"]['Version Padded'] = 'Version gepolstert';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamesisch';

$GLOBALS["lang"]['View'] = 'Blick';

$GLOBALS["lang"]['View All'] = 'Alle anzeigen';

$GLOBALS["lang"]['View Details'] = 'Details anzeigen';

$GLOBALS["lang"]['View Device'] = 'Gerät anzeigen';

$GLOBALS["lang"]['View Discovery'] = 'Discovery ansehen';

$GLOBALS["lang"]['View Policy'] = 'Zur Übersicht';

$GLOBALS["lang"]['View Racks'] = 'Racks ansehen';

$GLOBALS["lang"]['View the'] = 'Sehen Sie die';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Sehen Sie die Entdeckung in Frage, klicken Sie dann auf die Schaltfläche Support in der oberen rechten Symbolleiste. Dies wird die Entdeckungseinstellungen, config-Elemente, die Discovery-Geräteliste sowie die Protokolle für diese besondere Entdeckung liefern.';

$GLOBALS["lang"]['View the release notes on the'] = 'Anzeigen der Release Notes auf der';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuelles Privates Netzwerk';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuelles privates Netzwerk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisierung';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Besuchen Sie unseren YouTube-Kanal für Unterrichtsvideos.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Geräte-ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Geräte-ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Gruppe';

$GLOBALS["lang"]['Vm Group'] = 'Vm Gruppe';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Name';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'Schwachstellen';

$GLOBALS["lang"]['Vulnerabilities'] = 'Schwachstellen';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Schwachstellen Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Schwachstellen Cache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Schwachstellen und Ergebnisse';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Schwachstellen, die ursprünglich vor dem 1. Januar 2025 veröffentlicht wurden (standardmäßig). Wir sehen keinen Sinn, Schwachstellen von Jahren vorher zurückzugeben. Dies kann in der Konfiguration geändert werden.';

$GLOBALS["lang"]['vulnerability_id'] = 'Sicherheits-ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sicherheits-ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Sicherheitsstatus';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - Beim Erstellen einer Basislinie mit Softwarerichtlinien, derzeit Centos und RedHat Paket den Kernel mit den Namen <i>Kernel</i> und <i>Kernelentwickler</i>. Es können mehrere Pakete mit diesem Namen und verschiedene Versionen gleichzeitig installiert werden. Debian basierte Distributionen verwenden Namen wie <i>linux-image-3.13.0-24-generic</i>, beachten Sie, dass die Versionsnummer im Paketnamen enthalten ist. Da RedHat-basierte Betriebssysteme dieses Format verwenden und anschließend mehrere identische Paketnamen mit verschiedenen Versionen haben, schließen wir derzeit aus <i>Kernel</i> und <i>Kernelentwickler</i> von Softwarerichtlinien. Dies kann in einem zukünftigen Update behandelt werden.';

$GLOBALS["lang"]['WHERE'] = 'HINWEIS';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials Anforderungen';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Warten Sie, bis es abgeschlossen ist, und fügen Sie dann in dieser nächsten Zeile, um den Agenten zu installieren.';

$GLOBALS["lang"]['wall_port'] = 'Hafen von Port';

$GLOBALS["lang"]['Wall Port'] = 'Hafen von Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis und Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Möchten Sie mehr wissen?';

$GLOBALS["lang"]['Warning'] = 'Warnung';

$GLOBALS["lang"]['warranty'] = 'Garantie';

$GLOBALS["lang"]['Warranty'] = 'Garantie';

$GLOBALS["lang"]['warranty_duration'] = 'Garantiedauer';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantiedauer';

$GLOBALS["lang"]['warranty_expires'] = 'Warrants Expires';

$GLOBALS["lang"]['Warranty Expires'] = 'Warrants Expires';

$GLOBALS["lang"]['warranty_status'] = 'Status der Garantie';

$GLOBALS["lang"]['Warranty Status'] = 'Status der Garantie';

$GLOBALS["lang"]['warranty_type'] = 'Garantieart';

$GLOBALS["lang"]['Warranty Type'] = 'Garantieart';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Wir haben auch eine Option zum Ping Vor Scan (wichtig für Router mit langen ARP-Caches). Das ist in der Regel eine gute Idee.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Wir haben auch unsere Aktionspunkte (die in der nachstehenden Reihenfolge ausgeführt werden):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Wir werden oft diese Frage gestellt und die Antwort auf jeden Fall ist <i>es hängt ab</i>. Es hängt von der Anzahl der zu scannenden IPs, der Netzanschlussgeschwindigkeit, der Geschwindigkeit der zu scannenden Geräte, der Art der zu scannenden Geräte, der Anzahl der verschiedenen Anmeldeinformationen und der Geschwindigkeit des Open-AudIT-Servers ab. Wir haben keinen Rechner, der es uns erlaubt, diese Variablen einzugeben und einen Wert zurückzugeben. Es ist einfach zu kompliziert. Generell begrenzt ich meine Entdeckungen auf 256 IP-Adressen - dh ein /24 Subnetz. Wir haben Kunden scannen /16 Subnetze (65k Adressen) und es funktioniert - aber es kann eine lange Zeit dauern. Sie sind viel besser beim Scannen in /24 Blöcken. Wenn Sie einfach nicht wissen, was Ihre Adressbereiche sind, dann ist dies ein guter Fall für eine Seed Entdeckung.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Wir haben detailliertere Anweisungen auf';

$GLOBALS["lang"]['We have tests for:'] = 'Wir haben Tests für:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Wir hoffen, dass Sie Open-AudIT so nützlich finden wie wir.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Wir installieren zunächst die Standardliste der Skripte mit den Standardoptionen. Die Skriptliste ist bei /scripts sichtbar. Diese Standardskripte können nicht gelöscht werden. Sie können nach Bedarf zusätzliche Skripte für die Nutzung durch Sie erstellen. Ihr Skript basiert auf einem der vorhandenen Skripte und hat benutzerdefinierte Optionen angewendet. Die Skripte können dann auf der Listenseite im Menü heruntergeladen werden: Discover -> Audit Scripts -> List Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Wir brauchen einige Anmeldeinformationen, um effektiv mit den Geräten in Ihrem Netzwerk sprechen zu können.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Wir senden nur die minimale Datenmenge und nichts sensibler Art. Wir senden unsere Lizenzdaten (Name, Typ, etc.), unsere Anwendungsdaten (Name, Version, Plattform, Zeitzone usw.), alle protokollierten Fehler, eine Anzahl von Gerätetypen und eine Anzahl der verwendeten Funktionen. <i>Irgendwas.</i> Umwelt verfügt über Geräte und das ist das einzige Stück Ihrer Daten, die wir senden. Und nur die Art des Geräts und eine Zählung. Nicht der Hersteller, nicht das Modell. Wir schicken nichts Besonderes. Keine Netzwerke. Keine IP-Adressen. Keine Betriebssystemversionen. Keine Softwarenamen. Die UUID- und Server-Felder werden kodiert (so kennen wir den Wert nicht). Wir senden nur die Daten, die wir benötigen, um das Produkt zu verbessern. Wir hoffen, dass Sie den Nutzen für uns alle mit diesen Informationen sehen. Es wird uns geführte Richtung bieten, wo Verbesserungen und neue Features im Produkt zu fokussieren.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Wir neigen dazu, die Google Chrome-Erweiterung namens Postman für die Prüfung von tatsächlichen restful Abfragen verwenden. Vielleicht installieren und testen Sie das.';

$GLOBALS["lang"]['Web'] = 'Weblink';

$GLOBALS["lang"]['Web Application Routes'] = 'Web Application Routen';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Webseite';

$GLOBALS["lang"]['Wednesday'] = 'Mittwoch';

$GLOBALS["lang"]['weight'] = 'Gewicht';

$GLOBALS["lang"]['Weight'] = 'Gewicht';

$GLOBALS["lang"]['weight_current'] = 'Gewicht Strom';

$GLOBALS["lang"]['Weight Current'] = 'Gewicht Strom';

$GLOBALS["lang"]['weight_empty'] = 'Gewicht leer';

$GLOBALS["lang"]['Weight Empty'] = 'Gewicht leer';

$GLOBALS["lang"]['weight_max'] = 'Gewicht Max';

$GLOBALS["lang"]['Weight Max'] = 'Gewicht Max';

$GLOBALS["lang"]['Welcome'] = 'Willkommen!';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Willkommen Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Willkommen bei';

$GLOBALS["lang"]['Western Sahara'] = 'Westsahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Was kann ich erwarten, wenn ich keine Credentials habe';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Was ist mit Feldern, die ich von NMIS will, die nicht in Open-AudIT sind? Wir haben dich bedeckt. Alle Felder im externen System (NMIS), die nicht in Open-AudIT existieren, werden automatisch als Open-AudIT Custom Felder erstellt.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Was ist mit anderen Netzwerkgeräten? Denken Sie Schalter, Router, Drucker, etc. Natürlich ist es am besten, wenn Sie einige SNMP-Anmeldeinformationen für diese Geräte bereitstellen können. Sie brauchen nur <i>nur lesen</i> Zugang. Aber wenn Sie nicht einmal das tun wollen, gibt es nichts, das Sie von der laufenden Entdeckung abhält, die Geräte zu finden und eine Regel oder zwei zu machen, um sie zu identifizieren (kann MAC Adresse Präfix in Kombination mit offenen Ports verwenden, zum Beispiel). Sie haben nicht viele Informationen, aber Sie werden wissen, dass sie im Netzwerk sind, was sie sind, und wenn das letzte Mal, dass sie gesehen wurden, war. Sie werden auch sehen, ob etwas Neues im Netzwerk erscheint.';

$GLOBALS["lang"]['What do we send?'] = 'Was schicken wir?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Was bedeutet das eigentlich für Sie?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Was ist der Zweck dieses Regals.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Was ist die Art dieses Ortes. Zulässige Typen <code>attributes</code> Tisch.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Wenn Open-AudIT auf Linux eine Windows-Maschine entdeckt, um einen Remote-Befehl auszuführen, verwenden wir';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Wenn Open-AudIT unter Windows eine Windows-Maschine entdeckt, um einen Remote-Befehl auszuführen, verwenden wir';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Wann Open-Aud Die IT erhält Daten über ein Gerät, entweder durch das Erkennen des Geräts während eines Auditlaufs oder durch den Benutzer, der das Gerät importiert, muss feststellen, ob dieses entdeckte Gerät einem Gerät entspricht, das bereits in seiner Datenbank vorhanden ist, oder wenn es sich um ein neues Gerät handelt, das hinzugefügt werden soll. Open-AudIT verwendet eine Reihe von zwölf Objektspielen, um dies zu bestimmen. Die Spielregeln funktionieren als OR-Vergleich, nicht AND. Dies bedeutet die erste Regel, die einem Feld im entdeckten Gerät zu einem in der dB passt, löst sich als bestehendes Gerät. Alle Matching-Regeln müssen scheitern, damit ein Gerät neu ist und eine neue Platte entsteht.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Wenn POSTing Daten, müssen Sie einen Zugriff auf Token enthalten. Ein Zugriffstoken wird mit jedem Anforderungstyp generiert, also ein GET (z.B.) und Akzeptieren: Anwendung/Json, parse die Antwort auf meta →access_token und beinhalten das mit Ihrer Anfrage. Dies sollte in den Felddaten[access_token], IE, der oberen Ebene platziert werden.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Wenn ein Gerät entdeckt wird, wird das Audit-Skript mit den Daten der Datei (oder Verzeichnis) injiziert. Beide audit_linux.sh und audit_windows.vbs werden bevölkert, unabhängig vom Dateipfad. Wenn du denkst <i>aber einen Linux-Pfad in eine Windows-Maschine zu setzen, bricht die Dinge!</i>, es wird nicht brechen, Sie erhalten nur keine Daten von dieser Datei oder Verzeichniseintrag.<br/>Retrieved details werden in der <i>Datei</i> Datenbanktabelle und werden wie jedes andere Attribut gespeichert. Dateidetails werden als jedes andere Attribut gespeichert und Alarme generiert, wenn sich eine der folgenden Attribute ändern - <i>Vollständiger Name</i>, <i>Hash</i>, <i>Inode</i>, <i>Zuletzt geändert</i>. Die Tabelle enthält eine system_id, first_seen, last_seen und aktuelle Spalten sowie die Dateidetails.<br/>Attribute aufgezeichnet sind:<br/><ul><li>Windows - Name, Größe, Verzeichnis, SHA1 Hash (der Dateiinhalte), zuletzt geändert, Berechtigungen, Inhaber, Version (Dateigenehmigung).</li><br/><li>Linux - Name, Größe, Verzeichnis, SHA1 Hash (der Dateiinhalte), zuletzt geändert, Metadaten zuletzt geändert, Berechtigungen, Eigentümer, Gruppe, Inode.</li></ul>Sie werden einen Abschnitt in den Windows- und Linux-Auditskripten wie unten sehen';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Wenn eine Entdeckung ausgeführt wird, wird die entsprechende Erkennungs-Scan-Option gewählt und diese Einstellungen werden von Nmap verwendet, um die Zielgeräte zu scannen. Die Scan-Optionen bestimmen, welche Ports nmap scannt, wie schnell sie scannen und ob nmap ping zuerst verwendet wird, um festzustellen, ob das IP live ist oder nicht.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Wenn eine Entdeckung ausgeführt wird, wird die entsprechende Erkennungs-Scan-Option ausgewählt und die von Nmap verwendeten Einstellungen, um die Zielgeräte zu scannen. Wird kein Optionssatz gewählt, wird der Standardkonfigurationspunkt (discovery_default_scan_option) ausgewählt und verwendet. Open-AudIT Community nutzt die Standardoptionen nach der Konfiguration für alle Entdeckungen.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Wenn eine Subnet-Ermittlung ausgeführt wird, läuft sie zunächst, falls ausgewählt, einen Nmap-Ping-Scan auf der Reichweite oder IP-Adressen. Jedes Gerät reagiert wird port gescannt. Wenn ein Nmap-Ping-Scan nicht angefordert wird, wird jede IP einzeln port gescannt. Welche Häfen? Das ist von der';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Bei der Prüfung eines Linux-Geräts über SSH erlauben einige Linux-Distributionen nicht, dass Sudo-Befehle ohne TTY (die wir tun) weitergegeben werden. Um eine dieser Linux-Distributionen vollständig zu prüfen, ist es am besten, die Root-Benutzer-Berechtigungen zu liefern. Wenn keine Wurzel geliefert wird und Sudo ohne TTY nicht möglich ist, wird das Audit-Skript ausgeführt, aber nicht die Menge der Daten enthalten, wie es sonst wäre. Nachfolgende Audits mit root (oder lokal mit sudo) werden daher zusätzliche Details zum System liefern und mehrere generieren <i>Änderungen</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Bei der Kombination von Geräten, das System ist die maßgebliche Quelle für Informationen.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Schließen Sie das Befehlsfenster und Sie sind fertig!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Beim Erstellen eines Widgets, wenn Sie die <i>Erweiterte</i> Sie haben die Möglichkeit, Ihren eigenen benutzerdefinierten SQL hochzuladen.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Bei der Integration von Geräten aus dem externen System, wenn das Gerät nicht in Open-AudIT existiert, sollten wir es erstellen?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Bei der Integration von Geräten aus dem externen System, wenn das Gerät im externen System aktualisiert wurde, sollten wir es in Open-AudIT aktualisieren?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Bei der Untersuchung einer Entdeckung wird Unterstützung die Exported Discovery Logs verlangen. Um diese abzurufen, gehen Sie zum Menü -> Entdeckungen ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Beim Anpassen eines Linux-basierten Gerätes bevorzugen wir die Verwendung des mit dem Hostnamen konzierten Dbus-ID. Wir können auch andere Optionen gemäß der folgenden Tabelle verwenden, aber wir können die Dbus-ID ohne root abrufen. Um die UUID (vom Mainboard) abzurufen, müssen wir dmidecode ausführen, was root erfordert. Leider, wenn Sie einen ESXi-Gäste klonen, wird die Dbus-ID nicht wieder neu erstellt - daher unsere Konkretisierung dieses mit dem Hostnamen. Es gibt einen guten Artikel hier verlinkt, die Details <i>Warum?</i> von Hardware-IDs.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Bei der Anforderung von JSON wird standardmäßig kein Limit gesetzt. Bei der Anforderung der Bildschirmanzeige wird die Grenze standardmäßig auf 1000 gesetzt. Dies kann in der Konfiguration geändert werden. Siehe <i>Seite(n)</i> Erzeugnis';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Wenn wir ein externes Gerät abrufen, sollten wir es entdecken?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Bei der Ausführung von Open-AudIT unter Windows muss das Apache-Service-Konto das eines <i>regelmäßig</i> Benutzer (oder Administrator). Das ist, weil <i>Lokales System</i> Konto, das normalerweise verwendet wird, um Apache zu betreiben, hat keinen Zugriff auf Netzwerkressourcen. IE - Wir können Apache nicht verwenden, wenn Sie als lokales System-Konto-Konto ausgeführt werden, um das Audit-Skript auf Windows-PCs zu kopieren.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Bei der Einstellung der Konfigurationsoption berücksichtigen wir dies für Geräte für eine bestimmte Teilmenge von Übereinstimmungsregeln, bei denen der Konfigurationspunkt aktiviert ist. Diese Regeln sind:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Wenn die Regeln in der Entdeckung laufen, werden alle passenden Regeln im Discovery-Log angezeigt. Siehe unten ein Beispiel.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Wenn dieser Benchmark ausgeführt werden soll. Abgeleitet vom zugehörigen <code>tasks.type</code> und <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Als dieses Protokoll erstellt wurde.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Wenn diese Warteschlange beginnt die Verarbeitung.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Bei der Verwendung von Open-AudIT Professional oder Enterprise sind Widgets verfügbar und können auf Dashboards angezeigt werden.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Wenn wir ein intern ausgewähltes Gerät in ein Objekt für das externe System umwandeln, sollten die externen Daten sein. EG: Ganzzahl, String usw.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Wenn wir diese Basislinie ausführen, sollten wir nach Artikeln auf Geräten überprüfen, die nicht in einer Richtlinie für diese Basislinie sind.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Wenn wir einen offenen Port erhalten, sollten wir versuchen, auf die Version des Dienstes zu testen, der derzeit läuft? Dies hilft bei der Bestätigung der tatsächlichen laufenden Dienste.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Wenn Sie Clouds verwenden, um Ihre Amazon AWS-Instanzen zu entdecken, benötigen Sie zwei Anmeldeinformationen - Schlüssel und geheime Schlüssel. Ihr Schlüssel sollte Ihnen und Ihrem geheimen Schlüssel bereits bekannt sein. Beachten Sie, dass Sie Ihren geheimen Schlüssel nicht mit der von Amazon bereitgestellten AWS Console abrufen können. Wenn Sie es falsch platziert haben, müssen Sie eine neue erstellen.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Wenn Sie Clouds verwenden, um Ihre Microsoft Azure-Instanzen zu entdecken, benötigen Sie vier Anmeldeinformationen - Abo-ID, tenant id, Client-ID und Client-Geheimnis.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Wenn Sie eine Entdeckung erstellen, haben Sie eine Option zu device_assigned_to_org. Dies bedeutet, dass alle für diese Entdeckung entdeckten Geräte zugewiesen werden (Haben <code>devices.org_id</code> auf) Ihre gewählte Organisation.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Wenn Sie eine neue Entdeckung erstellen, wenn Sie auf die Erweiterte Schaltfläche klicken, haben Sie viele weitere Optionen zu ändern, eine von ihnen ist die Art der Entdeckung. Arten wurden immer Subnet (die oben genannten Bereich, Subnet, ip Optionen) und Active Directory. Wie bei v4.1, Open-AudIT hat einen neuen Entdeckungstyp namens Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Wenn Sie eine Abfrage in einem Zeitplan ausführen können, wird die Abfrage an Ihre gewählte Adresse per E-Mail gesendet. Sie müssen E-Mail über Menü eingerichtet haben -> Admin -> Enterprise -> E-Mail Config. Wir haben auch <i>Test E-Mail<i> Knopf auf dieser Seite. Geben Sie Ihre Daten ein, speichern Sie es und testen Sie es. Sie sollten eine Modalbox haben, die Sie informiert, wenn es erfolgreich oder nicht und offensichtlich eine Test-E-Mail ankommen sollte, wenn es erfolgreich ist. Sobald Sie E-Mail konfiguriert haben, kann Ihre geplante Abfrage konfiguriert werden.<br/><br/>Geben Sie einen Namen, optionale Beschreibung, wählen <i>Abfrage</i> Typ, wählen Sie die gewünschte Abfrage, geben Sie eine E-Mail-Adresse, wählen Sie ein Format und setzen Sie den Zeitplan.<br/><br/>Geben Sie eine Stunde (nur Stunde, noch keine Minuten), geben Sie der Aufgabe einen Namen (dies ist nicht der Name der eigentlichen geplanten Abfrage selbst), wählen Sie, welche Tage Sie möchten die Abfrage laufen, wählen Sie, welche Abfrage Sie ausführen möchten, eine E-Mail-Adresse angeben und wählen Sie ein Anfrageformat und Sie sind fertig.<br/>Abfragen werden mit einem E-Mail-Körper der Abfrage (im HTML-Format) und der im angeforderten Format beigefügten Abfrage gesendet.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Wenn Sie Text in eine der Spaltenüberschriften eingeben, können Sie einfach ein normales Wort verwenden. Zum Beispiel, wenn Sie eingeben <code>computer</code> in das Suchfeld oberhalb der <i>Typ</i> Spalte, die Suche wird alle Geräte mit der Art des Computers zurück. Im Wesentlichen, Open-Aud IT verlangt Daten über eine URL wie <code>devices?devices.type=computer</code>. Jetzt gibt es einen signifikanten Unterschied bei der Verwendung der dataTables Suche, gegen den Standard';

$GLOBALS["lang"]['where'] = 'Ort';

$GLOBALS["lang"]['Where'] = 'Ort';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Wo $x eine Nummer ist. Diese vielen LDAP-Einträge sind in der DB und wurden abgerufen.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Wo auf dem Bildschirm Device Details sehen Sie dieses Feld erscheinen möchten.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Wo das Regal in der Reihe ist.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Ob die Verwundbarkeit die Komponenten über ihre eigenen hinaus mit Impact, Verfügbarkeit und Vertraulichkeit beeinflusst.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Ob Benutzerinteraktion erforderlich ist (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Welches Betriebssystem dieser Benchmark gilt.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Welche Geräte sollten Open-AudIT aus dem externen System (falls vorhanden) erstellen. Mit All, Keine oder einem bestimmten Attribut.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Welches Netzwerk sollten wir entdecken. Dies sollte in Form von';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Welche Untermenüs sollten wir diese Abfrage anzeigen.';

$GLOBALS["lang"]['Who made this rack.'] = 'Wer hat das Rack gemacht.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Warum nur Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Warum schließen wir diese Politik aus?';

$GLOBALS["lang"]['Wide Area Network'] = 'Netzwerk für breite Bereiche';

$GLOBALS["lang"]['Wide area network'] = 'Netz für große Flächen';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget ';

$GLOBALS["lang"]['Widget Type'] = 'Widget-Typ';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets sind entworfen, um auf Dashboards verwendet werden. Enterprise-Nutzer haben völlige Freiheit, Widgets wie erforderlich zu erstellen, zu aktualisieren und zu löschen.';

$GLOBALS["lang"]['width'] = 'Breite';

$GLOBALS["lang"]['Width'] = 'Breite';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windows-Pakete';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Skript';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows kann auch den Dienst vom Start blockiert haben. Auf dem Ziel starten Sie das Windows Security Applet und stellen Sie sicher, dass das WinExeSvc ausführbar ist (klicken Sie auf Gerät zulassen und dann Aktionen starten).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe Seite auf Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe erfordert die folgenden Windows-Dienste gestartet und ausgeführt werden: netlogon und rpc-Dienste laufen.<br/><br/>Bitte melden Sie sich an der Ziel-Windows-Maschine und überprüfen Sie die Dienste für netlogon und rpc laufen.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe verwendet den Admin$ und RPC (net service start) um einen Remote-Service (winexesvc) zu installieren und zu starten. Dieser Dienst initialisiert ein benanntes Rohr, das verwendet wird, um Befehle vom Open-AudIT-Server auf das Ziel und die Ausgabe in umgekehrter Weise zu transportieren. Nach Fertigstellung schließt sich das benannte Rohr und der winexesvc wartet auf weitere Verbindungen oder Deinstallate (je nach den angegebenen Optionen).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Netzwerk für den lokalen Bereich';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Mit der 3.3.0 Veröffentlichung von Open-AudIT haben wir das Konzept eines Clusters vorgestellt. Dies abgebildet intuitiv auf die Idee eines Web-Clusters, Datenbank-Clusters oder Datei-Clusters (oder eines von mehreren anderen Zwecken) in einen bestimmten Typ (hohe Verfügbarkeit, Redundanz, Skalierung usw.).<br/><br/>Je nach gewähltem Cluster wird die Berichterstattung etwas anders sein.<br/><br/>Wenn Sie zum Beispiel einen Cluster mit einem Ziel der Virtualisierung erstellen, wenn Sie dazu Geräte hinzugefügt haben, sehen Sie auch die virtuellen Maschinen auf diesen Geräten.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Mit der Einführung der Clouds-Funktion können Sie Details über Ihre Cloud, Amazon AWS oder Microsoft Azure liefern, und Open-AudIT wird die entsprechende API verwenden, um eine Liste von Standorten, Netzwerken und Instanzen abzurufen, dann entdecken Sie jede dieser Instanzen.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Arbeitsgruppe';

$GLOBALS["lang"]['Workgroup'] = 'Arbeitsgruppe';

$GLOBALS["lang"]['Working Credentials'] = 'Erstellung von Arbeitsinformationen';

$GLOBALS["lang"]['Wrap Up'] = 'Wrap Up';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Geschrieben in der PHP-Skriptingsprache.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gelbe Querung';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ja.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Sie können zusätzliche Verzeichnisse definieren, die als Einträge in der Ausführbaren Sammlung gescannt werden. Wenn definiert, werden das Verzeichnis und alle Unterverzeichnisse für Dateien gescannt, die ausführbar sind. Sie können auch Verzeichnisse und Dateien definieren, die ausgeschlossen werden. Beim Aktivieren werden diese in das Linux-Auditskript eingespritzt und ausgeführt, wann immer es ausgeführt wird (in der Regel als Teil einer Entdeckung). Wenn Sie diese in einem Skript möchten, können Sie manuell auf das Ziel kopieren, verwenden Sie das Menü -> Entdecken Sie -> Scripts -> List Scripts und laden Sie das Skript von dort herunter.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Sie sind jederzeit frei, die Audit-Skripte selbst an Ihre spezifischen Anforderungen anzupassen. Sie müssen diese Änderungen einbinden, wenn Sie upgraden, da sie durch die Standard-Skripte überschrieben werden. Ich würde vorschlagen, eine Master-Kopie Ihres modifizierten Skripts zu speichern, Open-AudIT zu aktualisieren, dann einen Diff zwischen dem neuen Standard-Skript und Ihrem modifizierten Skript auszuführen und die Unterschiede anzuwenden. Die Audit-Skripte sind native Skripte (Windows ist VBScript, alle anderen sind Bash). Einfach und einfach zu modifizieren - stellen Sie einfach sicher, eine Kopie Ihrer Änderungen zu haben, bevor Sie Upgrade.';

$GLOBALS["lang"]['You are running version'] = 'Sie haben die Ausführung';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Sie können über die normale Open-AudIT JSON basierte API auf die Sammlung zugreifen. Wie jede andere Sammlung. Bitte';

$GLOBALS["lang"]['You can also'] = 'Sie können auch';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Sie können auch unten auf der Seite eine Tabelle sehen, auf die die Geräte die Änderungen angewendet werden.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Sie können auch Eigenschaften mit dem folgenden Format angeben.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Sie können immer die Firstwave VM auf Ihrer virtuellen Infrastruktur betreiben (ESX, Azure, et al. Das Firstwave VM betreibt Debian linux und ist frei von OS-Lizenzbelangen und Einschränkungen. Oder installieren Sie auf Ihrem eigenen Linux Distro der Wahl. Wir unterstützen Redhat 9, Ubuntu 20.04, 22.04 und 24.04 sowie Debian 11 und 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Sie können Geräte automatisch mit einem Standort zuordnen';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Sie können Geräte mit benutzerdefinierten';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Sie können eine Remote-Maschine ohne die Verwendung des eigentlichen Administratorkontos durch Erstellen eines Registrierungsschlüssels überprüfen. Erstellen Sie den untenstehenden Schlüssel auf jedem zu prüfenden Gerät und stellen Sie sicher, dass die verwendeten Benutzerinformationen ein Mitglied der Gruppe Administratoren sind.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Sie können sicherlich eine Entdeckung ohne gültige Anmeldeinformationen auf den Geräten innerhalb des Netzwerks laufen, aber die abgerufenen Informationen werden eine sehr kleine Teilmenge von dem, was Open-AudIT hat die Fähigkeit, abzurufen <i>mit</i> Anmeldeinformationen.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Sie können eine Basislinie erstellen, sie gegen eine Gruppe von Geräten ausführen und die Ergebnisse anzeigen, eine geplante Ausführung hinzufügen, mehr Tabellen zum Vergleich hinzufügen (derzeit werden nur Software, Netstat-Ports und Benutzer aktiviert), die Basiszeilenbearbeitung, Archivierung von Ergebnissen und mehr.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Sie können ein Skript mit allen Optionen für eine der vorhandenen Audit-Skripte erstellen - nicht nur Windows. AIX, ESX, Linux, OSX und Windows sind alle abgedeckt.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Sie können die gesamte Integration anpassen, auf welche System (NMIS oder Open-AudIT) die Autorität auf einer pro Feldbasis ist. Es gibt Optionen, um Geräte in Open-AudIT oder NMIS zu erstellen und/oder zu aktualisieren. Sollten wir eine Entdeckung auf einem erstellten oder aktualisierten Gerät und so viel mehr durchführen. Es gibt Erklärungen für jeden Artikel auf der rechten Seite der Seite.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Sie können eine Anwendung definieren und ein Gerät dieser Anwendung zuordnen. Eine Vorrichtung kann mehr als einer Anwendung zugeordnet sein. Eine Anwendung kann mehr als einer Vorrichtung zugeordnet sein.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Sie können den Wert des Zusatzfeldes für jedes einzelne Gerät auf der Gerätedetailseite bearbeiten. Ansicht der Gerätedetails Bildschirm, öffnen Sie den Abschnitt mit dem Feld und (wenn Sie haben';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Sie können die Device Seed Discovery begrenzen, um in einen strengen Satz von Parametern zu fallen, einschließlich: <i>Beschränkung auf Subnet</i> und <i>Beschränkung auf Privat</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Sie können Geräte manuell zuweisen';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Sie können dies überschreiben, indem Sie die Formatoption in der URL bereitstellen.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Sie können einzelne Geräte auswählen, indem Sie auf ihre Check-Boxen auf der rechten Seite klicken oder alle Geräte auswählen, die auf das Kontrollkästchen oben rechts auf der Tabelle klicken (unter der Schaltfläche Bearbeiten, die wie ein Bleistift aussieht).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Sie können die zu integrierenden Geräte auswählen, indem Sie ein beliebiges Attribut in der System (Geräte) Tabelle und Anpassung auswählen (siehe Menü → Admin → Datenbank → Listentabellen → System für eine Liste von Feldern). Eine Attributanpassung kann nur einem einzigen Wert entsprechen.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Sie können jeden Server in einen Sammler verwandeln, indem Sie Menü -> Admin -> Sammler -> Machen Sie die Installation eines Collector. Sie benötigen Anmeldeinformationen, um sich an den Server anzumelden, auf den diese installiert wird.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Sie können durch Klicken auf das Symbol der blauen Ansicht sehen. Sie können auch bearbeiten oder löschen, wenn Sie Berechtigungen haben.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Sie haben nicht die PHP MBString Erweiterung installiert. Diese Erweiterung ist erforderlich.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Sie haben nicht die PHP SNMP Erweiterung installiert. Diese Erweiterung ist sehr empfehlenswert.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Sie möchten diese URL möglicherweise in einer E-Mail an Ihr Personal kopieren und einfügen.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Sie können Active Directory oder OpenLDAP Ihre Benutzer authentifizieren möchten, aber keine Autorisierung. Um dies zu tun, stellen Sie sicher, <i>Verwendung für Authentication</i> Y und <i>Verwendung für Roles</i> wird auf N gesetzt. Die Anmeldeinformationen werden von LDAP validiert, aber Sie müssen den Benutzer bereits erstellt und Roles in Open-AudIT zugewiesen haben. Auch <i>automatisch</i> gilt für';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Sie haben vielleicht bemerkt, dass diese Spielregeln für Elemente sind, die nicht global einzigartig sein könnten. Einige Beispiele:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Sie müssen Ihre bestehende Lizenz löschen, bevor Sie eine neue Lizenz hinzufügen.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Sie müssen SSH-Berechtigungen zur Ausführung eines Benchmarks haben. Folgende Betriebssysteme werden derzeit unterstützt: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Wir planen, diese mit weiteren Releases zu erweitern.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Sie sollten die gesamte Datei in die Textbox kopieren und einfügen. In dem Fall unten, kopieren Sie ALL den Text.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Sie sollten die edited_by und edited_date Felder nicht einschließen. Diese werden automatisch eingestellt.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Sie sollten nur den zweiten Satz von Text ändern, die';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Sie sollten die erforderliche Spalte (z.B. org_id) für ATTRIBUTE_NAME ersetzen.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Sie sollten eine Header-Linie mit den Namen der Spalten verwenden, die Sie bevölkern möchten, dann Ihre Datenleitungen darunter.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Sie sollten nur die Tabellen verwenden, die Attribute enthalten, die Sie benötigen. Ich benutze meistens einen Linken. Zum Beispiel';

$GLOBALS["lang"]['You will need a'] = 'Sie benötigen ein';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Sie benötigen die Ports für WMI auf der Windows Firewall auf jedem Ziel Windows Computer geöffnet. Für Windows Core-Server, stellen Sie sicher, dass Sie die Firewall-Verbindungen wie pro';

$GLOBALS["lang"]['You will see a list of'] = 'Sie sehen eine Liste von';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Ihr AWS EC2 API Schlüssel.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Ihre Google Compute Anmeldeinformationen als JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Ihr Host ist';

$GLOBALS["lang"]['Your Licenses'] = 'Ihre Lizenzen';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Ihre Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Ihr Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ihre Microsoft Azure Abonnement ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Ihre Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Ihre PHP-Version ist';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Ihr SQL, um Attribute auszuwählen, die diese Abfrage bevölkern.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Ihr SQL, um Geräte auszuwählen, die diese Gruppe bevölkern.';

$GLOBALS["lang"]['Your SSH key.'] = 'Ihr SSH-Schlüssel.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Ihre Zugangsberechtigungen, je nach Cloud-Native API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Ihre Daten sind Ihre Daten. Du kannst es jederzeit extrahieren. Wir liefern sogar hilfreich Exporte nach CSV, JSON und XML. Und wir haben eine JSON API. Und Sie können benutzerdefinierte Berichte schreiben und diese Ausgabe in CSV, XML und JSON haben! Wieder sind es Ihre Daten - nicht jeder andere. Sie können sicher sein, dass die Sicherheit Ihrer Daten in Ihren Händen ist.';

$GLOBALS["lang"]['Your database platform is'] = 'Ihre Datenbankplattform ist';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Ihre Beschreibung des Status dieser Verbindung (vorgesehen, pensioniert, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Ihre Beschreibung dieses Artikels.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ihr generischer Name für dieses Stück Software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Ihre generische Version für dieses Stück Software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ihr Benutzer sollte sich jetzt anmelden können, indem Sie auf die <i>Logon mit Entra</i> Knopf auf der Open-AudIT-Loginseite. Wie oben erwähnt, überprüfen Sie, ob die Anmeldung ausfällt, bitte das Logfile und überprüfen Sie die Benutzer <i>bevorzugte Benutzername</i>.<br/><br/>Und das sollte alles sein, was es auch gibt. Jetzt sollten Ihre Benutzer ein weniger Satz von Anmeldeinformationen zu erinnern!<br/><br/>Wie immer, wenn Sie Probleme mit dieser Funktion haben, bitte E-Mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ihr Benutzer sollte sich jetzt anmelden können, indem Sie auf die <i>Logon mit OKTA</i> Knopf auf der Open-AudIT-Loginseite. Wie oben erwähnt, überprüfen Sie, ob die Anmeldung ausfällt, bitte das Logfile und überprüfen Sie die Benutzer <i>Name</i>.<br/><br/>Und das sollte alles sein, was es auch gibt. Jetzt sollten Ihre Benutzer ein weniger Satz von Anmeldeinformationen zu erinnern!<br/><br/>Wie immer, wenn Sie Probleme mit dieser Funktion haben, bitte E-Mail';

$GLOBALS["lang"]['Your web server is'] = 'Ihr Webserver ist';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Schweden';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'Wirkstoff';

$GLOBALS["lang"]['active directory'] = 'Aktives Verzeichnis';

$GLOBALS["lang"]['active/active'] = 'aktiv/aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv/passiv';

$GLOBALS["lang"]['advertisement'] = 'Werbung';

$GLOBALS["lang"]['alert'] = 'Alarmstufe';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'zugewiesen';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['an Integer'] = 'ein Integer';

$GLOBALS["lang"]['and'] = 'und';

$GLOBALS["lang"]['and / or'] = 'und/oder';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'und ein Support-Ticket wird erstellt und aktiviert.';

$GLOBALS["lang"]['and another'] = 'und andere';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'und downloaden Sie den neusten Release-Selbstinstallationer. Sie müssen möglicherweise die Seite nach unten scrollen, um sie zu finden.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'und gehen Sie zu Anwendungen -> Enterprise Applications (far Left Menü), dann klicken <i>Neue Anwendung</i>.';

$GLOBALS["lang"]['and its current time is'] = 'und seine aktuelle Zeit ist';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'und sucht eine Garantiefrist vor dem heutigen Tag.';

$GLOBALS["lang"]['and review what is possible.'] = 'und überprüfen, was möglich ist.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'und die Sign-out-Umleitung URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'und die Endlinien werden wahrscheinlich von größtem Interesse sein. Diese Zeilen sollten Ihnen den genauen Punkt geben, an dem die Anmeldung versagt hat.';

$GLOBALS["lang"]['antivirus'] = 'Antivirus';

$GLOBALS["lang"]['application'] = 'Anwendungsbereich';

$GLOBALS["lang"]['approved'] = 'genehmigt';

$GLOBALS["lang"]['are required.'] = 'sind erforderlich.';

$GLOBALS["lang"]['are used.'] = 'verwendet werden.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'als Gerät, das auf diesen Port reagiert.<br/>Dies hat einige Kunden Probleme verursacht, bei denen Firewalls im Auftrag eines nicht vorhandenen Geräts reagieren und somit eine falsche positive Geräteerkennung verursachen. Wir haben jetzt dieses Attribut verfügbar, um pro Scan einzustellen.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'als Referenzpunkt und filtert alle virtuellen Maschinen über eine Überprüfung des Systems aus. Serienfeld für VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'vorausgesetzt, arbeiten und Client besiedelt DNS';

$GLOBALS["lang"]['attribute'] = 'Eigenschaften';

$GLOBALS["lang"]['auto'] = 'Auto';

$GLOBALS["lang"]['backup'] = 'Sicherung';

$GLOBALS["lang"]['banned'] = 'verboten';

$GLOBALS["lang"]['blog'] = 'Blog';

$GLOBALS["lang"]['blue'] = 'Blau';

$GLOBALS["lang"]['bottom'] = 'Boden';

$GLOBALS["lang"]['building'] = 'Gebäude';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'kann für die Benutzerauthentifizierung verwendet werden (ist der Benutzername und Passwort korrekt) sowie Benutzerberechtigung (was Rollen und Orgs hat ein Benutzer).<br/><br/>Ist ein Benutzer nicht im konfigurierten LDAP, sondern in Open-AudIT (z.B.: <i>admin</i> Benutzer), Open-AudIT wird zurückfallen, um sich für die Authentifizierung und Berechtigung zu verwenden.<br/><br/>Open-Aud IT verwendet spezifische LDAP-Gruppen für Rollen und Orgs. Ein Benutzer muss ein direktes Mitglied dieser Gruppe(n) sein, um Open-AudIT zu bestimmen, dass Benutzer Zugriff.<br/><br/>Bei korrekter Konfiguration kann LDAP die Notwendigkeit vollständig entfernen, Benutzer in Open-AudIT zu erstellen. Konfigurieren Sie Open-AudIT einfach für die Verwendung von LDAP für die Authentifizierung und Autorisierung. Wenn der Benutzer nicht in Open-AudIT existiert, sondern in LDAP existiert und seine Anmeldeinformationen korrekt sind und sie ein Mitglied der benötigten Gruppen sind, wird Open-AudIT das Benutzerkonto automatisch erstellen.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'kann nun Informationen über eine Datei oder ein Verzeichnis von Dateien abrufen und diese Dateien für Änderungen gemäß anderen Attributen in der Open-AudIT-Datenbank überwachen. Diese Funktion funktioniert aus der Box für Linux Open-AudIT Server, benötigt aber eine Änderung des Service-Kontonamens unter einem Windows Open-AudIT Server. Unterstützte Clients sind Windows und Linux.';

$GLOBALS["lang"]['changed'] = 'geändert';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'gewählt. Von dort aus wird, wenn ein Port für WMI, SSH oder SNMP erkannt wird, das Gerät anzusprechen, mit Hilfe von ';

$GLOBALS["lang"]['cloud'] = 'Wolken';

$GLOBALS["lang"]['code'] = 'Code';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Sammlungen und Details Seiten ist ein Symbol auszuführen.';

$GLOBALS["lang"]['collector'] = 'Sammler';

$GLOBALS["lang"]['collectors'] = 'Sammler';

$GLOBALS["lang"]['column'] = 'Spalte';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'Spalte enthält entweder <i>y</i> oder <i>n</i>. Dies zeigt an, ob diese Zeile derzeit auf dem Gerät vorhanden ist. Beispielsweise kann Software installiert werden (was zu einer <i>Software.current = y</i>), aber bei einer späteren Prüfung darf sie nicht nachgewiesen werden. Open-AudIT wird dann dieses Zeilen aktuelle Attribut ändern <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'Spalte. Die';

$GLOBALS["lang"]['compute'] = 'Berechnung';

$GLOBALS["lang"]['config'] = 'Konfitüre';

$GLOBALS["lang"]['console'] = 'Konsole';

$GLOBALS["lang"]['contains'] = 'enthält';

$GLOBALS["lang"]['create'] = 'erstellen';

$GLOBALS["lang"]['created'] = 'erstellt';

$GLOBALS["lang"]['credentials'] = 'Anmeldeinformationen';

$GLOBALS["lang"]['critical'] = 'kritisch';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'Datenbank';

$GLOBALS["lang"]['debug'] = 'Debug';

$GLOBALS["lang"]['delegated'] = 'Delegierte';

$GLOBALS["lang"]['delete'] = 'Löschen';

$GLOBALS["lang"]['deleted'] = 'gelöscht';

$GLOBALS["lang"]['denied'] = 'gekürzt';

$GLOBALS["lang"]['details'] = 'Details';

$GLOBALS["lang"]['devices'] = 'Geräte';

$GLOBALS["lang"]['digitalocean'] = 'Digitalocean';

$GLOBALS["lang"]['discoveries'] = 'Entdeckungen';

$GLOBALS["lang"]['documentation for further details.'] = 'Dokumentation für weitere Details.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'das <strong>nicht</strong> Verwundbarkeitsberichte für folgende';

$GLOBALS["lang"]['does not equal'] = 'nicht gleich';

$GLOBALS["lang"]['emergency'] = 'Notfall';

$GLOBALS["lang"]['entra'] = 'Entre';

$GLOBALS["lang"]['equals'] = 'gleich';

$GLOBALS["lang"]['error'] = 'Fehler';

$GLOBALS["lang"]['established'] = 'hergestellt';

$GLOBALS["lang"]['excluded'] = 'ausgeschlossen';

$GLOBALS["lang"]['expired'] = 'abgelaufen';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extreme - Ohne die würde die Organisation scheitern.

sehr hoch - Funktionen, die für das Überleben der Organisationen unerlässlich sind und sofort wiederhergestellt werden müssen.

hoch - Wichtige Funktionen, die schnell wiederhergestellt werden sollten, aber möglicherweise eine etwas längere Erholungszeit haben.

mittel - Funktionen, die notwendig sind, aber längere Ausfallzeiten tolerieren können.

low - Nicht-essentielle Funktionen, die ohne erhebliche Auswirkungen verzögert werden können.

nicht zugewiesen - Der Standard bis zum Set.';

$GLOBALS["lang"]['fail'] = 'Fehler';

$GLOBALS["lang"]['false'] = 'falsch';

$GLOBALS["lang"]['file'] = 'Datei';

$GLOBALS["lang"]['firewall'] = 'Firewall';

$GLOBALS["lang"]['first'] = 'erste';

$GLOBALS["lang"]['fixed'] = 'fest';

$GLOBALS["lang"]['floor'] = 'Boden';

$GLOBALS["lang"]['for'] = 'für';

$GLOBALS["lang"]['for authentication'] = 'zur Authentifizierung';

$GLOBALS["lang"]['for this information.'] = 'für diese Informationen.';

$GLOBALS["lang"]['from Audit Script Result'] = 'von Audit Script Ergebnis';

$GLOBALS["lang"]['from NMIS'] = 'von NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'von der Adresse LocalHost (Using LRPC) läuft im Anwendungsbehälter';

$GLOBALS["lang"]['front'] = 'Vorderseite';

$GLOBALS["lang"]['front-left'] = 'vorne links';

$GLOBALS["lang"]['front-right'] = 'vorne rechts';

$GLOBALS["lang"]['github'] = 'Github';

$GLOBALS["lang"]['google'] = 'Kohl';

$GLOBALS["lang"]['greater or equals'] = 'größer oder gleich';

$GLOBALS["lang"]['greater than'] = 'größer als';

$GLOBALS["lang"]['group'] = 'Gruppe';

$GLOBALS["lang"]['has not been set'] = 'wurde nicht gesetzt';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'haben eine funktionierende umgekehrte DNS-Resolvable IP auf den Ziel-Windows-PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'können ausgeführt werden. Auf';

$GLOBALS["lang"]['head'] = 'Kopf';

$GLOBALS["lang"]['here'] = 'Hier.';

$GLOBALS["lang"]['high availability'] = 'hohe Verfügbarkeit';

$GLOBALS["lang"]['howto'] = 'Wie man';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Wenn Sie eine Linux virtuelle Maschine klonen, es sei denn, Sie manuell regenerieren dies (und in meiner Erfahrung, Menschen nicht) wird es gleich bleiben.';

$GLOBALS["lang"]['ignored'] = 'ignoriert';

$GLOBALS["lang"]['import the example device data'] = 'Importieren der Beispielgerätedaten';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'in Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Inputs können folgende Werte haben.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'in Outputs können die folgenden Werte haben.';

$GLOBALS["lang"]['inactive'] = 'inaktiv';

$GLOBALS["lang"]['incomplete'] = 'unvollständig';

$GLOBALS["lang"]['info'] = 'Info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer wird testen für die Anwesenheit von Nmap in seinen standard-install Standorten von';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, Text, bool (y/n), usw.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'ist US-Standard von National Institute of Standards and Technology gehalten';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'ist ein internationaler Standard für die Verwaltung der Informationssicherheit. Es bietet einen Rahmen, um ein Informationssicherheitsmanagementsystem (ISMS) zu schaffen, umzusetzen, aufrechtzuerhalten und kontinuierlich zu verbessern.';

$GLOBALS["lang"]['is based upon'] = 'basiert auf';

$GLOBALS["lang"]['is licensed to'] = 'ist lizenziert';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'ist als nächstes auf der Liste und Open-AudIT kann Passwort und Schlüsselauthentifizierung verwenden. Open-AudIT kann auch einen sudo-fähigen Benutzer im Gegensatz zur Root-Nutzung direkt verwenden (obwohl es auch root verwenden kann). Für beste Ergebnisse sollte der root-Benutzer oder ein sudo-fähiges Benutzer verwendet werden (siehe Auditing Linux ohne root und Target Client Configuration auf dem Wiki). Windows-Geräte können auch ssh laufen, aber wenn Open-AudIT dies erkennt, wird es die SSH-Abfragen stoppen und stattdessen WMI verwenden (Arbeits-WMI-Anmeldeinformationen).';

$GLOBALS["lang"]['is the link to the'] = 'ist der Link zum';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'Artikel, um die spezifischen Tabellen und ihre Spalten anzuzeigen. Dies ermöglicht es Ihnen, genau das zu finden, was Sie brauchen, anstatt durch die MySQL-Konsole des Schema-Erstellungsskripts zu trawlen.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'Schlüssel erforderlich, um lat/long abzurufen und Karte anzuzeigen. Siehe';

$GLOBALS["lang"]['left'] = 'links';

$GLOBALS["lang"]['less or equals'] = 'kleiner oder gleich';

$GLOBALS["lang"]['less than'] = 'weniger als';

$GLOBALS["lang"]['license'] = 'Lizenz';

$GLOBALS["lang"]['licenses'] = 'Lizenzen';

$GLOBALS["lang"]['like'] = 'wie';

$GLOBALS["lang"]['line'] = 'Linie';

$GLOBALS["lang"]['list'] = 'Liste';

$GLOBALS["lang"]['list View, using the Create button'] = 'Liste Ansicht, mit der Schaltfläche Erstellen';

$GLOBALS["lang"]['load balancing'] = 'Lastausgleich';

$GLOBALS["lang"]['location'] = 'Standort';

$GLOBALS["lang"]['locations'] = 'Standort';

$GLOBALS["lang"]['managed'] = 'Verwaltung';

$GLOBALS["lang"]['methods'] = 'Methoden';

$GLOBALS["lang"]['microsoft'] = 'Mikrosoft';

$GLOBALS["lang"]['mount point'] = 'Befestigungspunkt';

$GLOBALS["lang"]['must'] = 'müssen';

$GLOBALS["lang"]['network'] = 'Netzwerk';

$GLOBALS["lang"]['news'] = 'Nachrichten';

$GLOBALS["lang"]['no'] = 'Nein';

$GLOBALS["lang"]['node'] = 'Knotenpunkt';

$GLOBALS["lang"]['none'] = 'keine';

$GLOBALS["lang"]['normal'] = 'Normalwert';

$GLOBALS["lang"]['not applicable'] = 'nicht anwendbar';

$GLOBALS["lang"]['not in'] = 'nicht';

$GLOBALS["lang"]['not like'] = 'nicht wie';

$GLOBALS["lang"]['notice'] = 'Mitteilung';

$GLOBALS["lang"]['notification'] = 'Mitteilung';

$GLOBALS["lang"]['okta'] = 'Ok';

$GLOBALS["lang"]['on devices where'] = 'auf Geräten, in denen';

$GLOBALS["lang"]['openldap'] = 'Openldap';

$GLOBALS["lang"]['optimized'] = 'optimiert';

$GLOBALS["lang"]['optionally '] = 'optional ';

$GLOBALS["lang"]['or'] = 'oder';

$GLOBALS["lang"]['or the GitHub page at'] = 'oder die GitHub Seite';

$GLOBALS["lang"]['other'] = 'andere';

$GLOBALS["lang"]['package'] = 'Paket';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Seite. Exportieren Sie Ihren LDAP-Server aus dem Menü -> Admin -> LDAP Server -> Details zu JSON und speichern und beinhalten diese Daten auch.';

$GLOBALS["lang"]['partition'] = 'Partition';

$GLOBALS["lang"]['pass'] = 'passieren';

$GLOBALS["lang"]['pending'] = 'bis';

$GLOBALS["lang"]['performance'] = 'Leistung';

$GLOBALS["lang"]['performed'] = 'durchgeführt';

$GLOBALS["lang"]['permission'] = 'Genehmigung';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Berechtigungen pro Endpunkt erforderlich';

$GLOBALS["lang"]['pie'] = 'Torf';

$GLOBALS["lang"]['planning'] = 'Planung';

$GLOBALS["lang"]['predictable'] = 'vorhersehbar';

$GLOBALS["lang"]['query'] = 'Anfrage';

$GLOBALS["lang"]['rear'] = 'Heck';

$GLOBALS["lang"]['rear-left'] = 'hinten links';

$GLOBALS["lang"]['rear-right'] = 'hinten rechts';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['release'] = 'Release';

$GLOBALS["lang"]['removed from display, but has been set'] = 'vom Display entfernt, aber eingestellt';

$GLOBALS["lang"]['reserved'] = 'reserviert';

$GLOBALS["lang"]['right'] = 'Recht';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Rechte) Sie können auf den Feldwert klicken, um ihn zu bearbeiten.';

$GLOBALS["lang"]['role'] = 'Rolle';

$GLOBALS["lang"]['room'] = 'Zimmer';

$GLOBALS["lang"]['row'] = 'Zeile';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'Service konnte aufgrund des folgenden Fehlers nicht starten';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'so Open-AudIT weiß, Ihre Anfrage auf die entsprechenden Orgs zu beschränken.';

$GLOBALS["lang"]['stand-alone'] = 'Stand-alone';

$GLOBALS["lang"]['standard'] = 'Standard';

$GLOBALS["lang"]['starts with'] = 'beginnt mit';

$GLOBALS["lang"]['storage'] = 'Lagerung';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['table'] = 'Tabelle';

$GLOBALS["lang"]['table and insert the original rows.'] = 'Tisch und die Originalzeilen einfügen.';

$GLOBALS["lang"]['team'] = 'Team';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Text. Der erste ist der Array-Index und sollte as-is gelassen werden. Der Index wird in den Vorlagen verwendet, um den übersetzten Text zu überprüfen.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Klicken Sie dann auf die Details Taste für die Tabelle.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Klicken Sie dann auf die Details Taste für die Tabelle. Gerätedetails werden in der';

$GLOBALS["lang"]['timestamp'] = 'Zeitstempel';

$GLOBALS["lang"]['to'] = 'bis';

$GLOBALS["lang"]['to create an item of this type'] = 'einen solchen Artikel zu erstellen';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'auf die URL erhalten Sie die vollständige Datenbankeingabe, einschließlich aller Komponententabellen, eines bestimmten Geräts.';

$GLOBALS["lang"]['to the user'] = 'zum Benutzer';

$GLOBALS["lang"]['top'] = 'Kopf';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top Geheimnis - Militär / Regierung Klassifizierung. Die Offenlegung würde eine außergewöhnlich große Gefahr für die nationale Sicherheit verursachen.

geheim - Militär / Regierung Klassifizierung. Die Offenlegung würde schwerwiegende Schäden an der nationalen Sicherheit verursachen.

vertraulich - Militär / Regierung und Privatsektor Klassifizierung. Daten, die vertraulich sind, umfassen Handelsgeheimnisse, intellektuelle Daten, Anwendungsprogrammierungscode und andere Daten, die die Organisation ernsthaft beeinflussen könnten, wenn eine unbefugte Offenlegung stattgefunden hat. Die Daten auf dieser Ebene würden nur dem Personal in der Organisation zur Verfügung stehen, dessen Arbeit die zugegriffenen Daten benötigt oder unmittelbar damit verbunden ist. Der Zugriff auf vertrauliche Daten erfordert normalerweise eine Berechtigung für jeden Zugriff.

privat - Privater Sektor Klassifizierung. Daten, die privat sind, beinhalten alle Informationen im Zusammenhang mit Personal, einschließlich Personalaufzeichnungen, medizinische Aufzeichnungen und Gehaltsinformationen, die nur innerhalb der Organisation verwendet werden.

empfindlich - Militär / Regierung und Privatsektor Klassifizierung. Daten, die empfindlich sind, beinhalten organisatorische Finanzinformationen und erfordern zusätzliche Maßnahmen, um seine CIA und Genauigkeit zu gewährleisten. Offenlegung könnte die nationale Sicherheit beeinträchtigen.

öffentlich - Privater Sektor Klassifizierung. Öffentliche Daten sind Daten, die in der Regel mit der Öffentlichkeit geteilt werden und keine negativen Auswirkungen auf die Organisation verursachen würden. Beispiele für öffentliche Daten sind, wie viele Menschen in der Organisation arbeiten und welche Produkte eine Organisation produziert oder verkauft.

unklassifiziert - Militär / Regierung Klassifizierung. Alle Informationen, die in der Regel an die Öffentlichkeit verteilt werden können, ohne dass nationales Interesse droht.

nicht zugewiesen - Der Standard bis zum Set.';

$GLOBALS["lang"]['traffic'] = 'Verkehr';

$GLOBALS["lang"]['true'] = 'wahr';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'wahr oder falsch (im JSON-Kontext)';

$GLOBALS["lang"]['unallocated'] = 'unvermittelt';

$GLOBALS["lang"]['unauthorised'] = 'unbefugt';

$GLOBALS["lang"]['unchanged'] = 'unverändert';

$GLOBALS["lang"]['unknown'] = 'unbekannt';

$GLOBALS["lang"]['unmanaged'] = 'unmanaged';

$GLOBALS["lang"]['unused'] = 'nicht verwendet';

$GLOBALS["lang"]['update'] = 'Aktualisierung';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'verwendet die von Ihren Geräten erhobenen Daten und entspricht der mit dem bereitgestellten Wert installierten Software, es zählt die Übereinstimmungen berechnet, wie viele Lizenzen verwendet wurden und wie viele übrig bleiben. Es ermöglicht die Verwendung von Wildcards auf der <i>Match string</i> Feld, das der Software entspricht. Name Attribut.';

$GLOBALS["lang"]['using the main menu items.'] = 'mit den wichtigsten Menüpunkten.';

$GLOBALS["lang"]['valid'] = 'gültig';

$GLOBALS["lang"]['version'] = 'Version';

$GLOBALS["lang"]['virtualisation'] = 'Virtualisierung';

$GLOBALS["lang"]['warning'] = 'Warnung';

$GLOBALS["lang"]['web'] = 'Waren';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'mit lokalen und Remote-Zugriffsberechtigungen eingestellt.';

$GLOBALS["lang"]['with devices::update permission.'] = 'mit Geräten::Update-Berechtigung.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'mit dem Sign-On Redirect URI';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'mit der Absicht, einen einfachen und intuitiven Zugriff auf die Entwickler zu ermöglichen. Zusätzlich zu dieser API wird die Web-Schnittstelle das gleiche Anforderungsformat verwenden und einige zusätzliche Aktionen liefern (z.B. HTML-Formulare für die Erstellung von Elementen).';

$GLOBALS["lang"]['yes'] = 'Ja.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Sie benötigen keine HighCharts Lizenz, um Firstwave Produkte zu verwenden. Lizenz';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Sie werden gefundene Geräte dieser Org oder Location zuweisen.';

$GLOBALS["lang"]['Import CSV'] = 'Einfuhr CSV';

$GLOBALS["lang"]['Import JSON'] = 'Einfuhr JSON';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br><br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br><br></p>'] = 'Ein Standort ist eine physische Adresse, die Geräte mit ihr verbunden haben kann.<br><br>Sie können es Koordinaten (lat/long) zuordnen und wenn Geräte zugewiesen sind, erscheint der Standort auf der Open-AudIT Enterprise map.<br><br></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It doesn\t matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agents lassen Sie PCs ohne Entdeckung testen. Installieren Sie den Agenten und es wird jeden Tag mit dem Server Check-in und Audit selbst. Es spielt keine Rolle, ob Ihre Computer Firewall sind, Audit-Daten erscheinen immer noch in Open-AudIT.</p>p> Prüfung <strong>if</strong> ein Agent sollte Aktionen durchführen, alle drei Tests müssen passieren (wenn der Test eingestellt ist). <strong>die</strong> Maßnahmen ergriffen werden.</p>';

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

