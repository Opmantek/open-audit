<?php

$GLOBALS["lang"][' Default, currently '] = ' Default, aktuell ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' wird nun mit einer Sprachdatei unterstützt. Um Ihren Benutzer zu ändern, um diese Sprache zu verwenden, klicken Sie auf ';

$GLOBALS["lang"][' seconds'] = ' Sekunden';

$GLOBALS["lang"]['10 Minutes'] = '10 Minuten';

$GLOBALS["lang"]['15 Minutes'] = '15 Minuten';

$GLOBALS["lang"]['30 Minutes'] = '30 Minuten';

$GLOBALS["lang"]['5 Minutes'] = '5 Minuten';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>HINWEIS</strong> - Sie greifen auf diese URL vom lokalen Open-AudIT Server. Das heruntergeladene Skript wird nicht in der Lage sein, wenn Sie auf einem anderen Rechner laufen. Wenn Sie andere Maschinen überprüfen müssen, laden Sie das Skript von jedem Remote-Computer herunter, nicht mit einem Browser auf dem Open-AudIT Server selbst.';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">HINWEIS</strong> - Sie müssen SSH- oder SSH-Schlüssel-Anmeldedaten arbeiten, um Benchmarks auf einem Zielgerät auszuführen.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Basel</strong> - Das übergeordnete Dokument, das die Basisdefinition und die einzelnen politischen Tests enthält.<br/> <br/> <strong>Politik</strong> - Die einzelnen Tests in einer Baseline. Jeder Test ist für einen bestimmten Gegenstand. Ein Beispiel wäre die Prüfung der SSH-Version 1.2.3.<br/> <br/> <strong>Details</strong> - Baselines können Netstat-Ports, Benutzer und Software vergleichen.<br/> <br/> <strong>Software</strong> - Um Software zu vergleichen, überprüfen wir den Namen und die Version. Da Versionsnummern nicht alle im Format standardisiert sind, erstellen wir ein neues Attribut namens software_pplus, das wir in der Datenbank zusammen mit den übrigen Software-Details für jedes Paket speichern. Aus diesem Grund werden die Basislinien, die Softwarerichtlinien verwenden, nicht funktionieren, wenn sie gegen ein Gerät laufen, das nicht von 1.10 geprüft wurde (zumindest). Softwarerichtlinien können testen, ob die Version "gleich", "größer" oder "gleich oder größer" ist.<br/> <br/> <strong>Netstat Ports</strong> - Netstat Ports verwenden eine Kombination aus Portnummer, Protokoll und Programm. Wenn alle anwesend sind, geht die Politik durch.<br/> <br/> <strong>Benutzer</strong> - Benutzer arbeiten ähnlich wie Netstat Ports. Wenn ein Benutzer mit einem passenden Namen, Status und Passwort-Details (änderbar, abläuft, erforderlich) existiert, dann geht die Richtlinie weiter.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Ein Ort ist eine physische Adresse, die Geräte zugeordnet werden kann.<br/> <br/>Sie können es Koordinaten (lat/long) zuordnen und wenn Geräte zugewiesen sind, wird der Standort auf der Open-AudIT Enterprise Karte angezeigt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br>Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br> <br></p>'] = '<p>Ein Netzwerk wird von Entdeckungseinträgen und Geräteattributen abgeleitet.<br/> <br/>Open-AudIT kann konfiguriert werden, um nur Auditergebnisse aus den hier enthaltenen Netzwerken zu akzeptieren. Um dies zu setzen gehen Sie auf die Konfiguration und setzen Sie das Attribut <code>blessed_subnets_use</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Eine Zusammenfassung zeigt eine Liste von Elementen, die durch die einzelnen Werte des Attributs gruppiert werden, die von der <code>table</code> und <code>column</code> Attribute.<br/> <br/>Wenn eine Zusammenfassung ausgeführt wird, wird das Ergebnis eine Liste von eindeutigen Werten dafür sein. <code>table</code> und <code>column</code>. Es gibt Links auf den Werten, die es dem Benutzer ermöglichen, die passenden Geräte zu sehen.<br/> <br/>Wenn das Attribut <code>extra_columns</code> wird bevölkert, die resultierende Seite wird diese Spalten zusätzlich zu den Standard-Gerät Spalten enthalten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenten lassen Sie PCs ohne Entdeckung testen. Installieren Sie den Agenten und es wird jeden Tag mit dem Server Check-in und Audit selbst. Es spielt keine Rolle, ob Ihre Computer Firewalled sind, Audit-Daten erscheinen immer noch in Open-AudIT.</p><p>Bei der Prüfung <strong>wenn</strong> ein Agent sollte Aktionen durchführen, alle drei Tests müssen passieren (wenn der Test eingestellt ist). <strong>Dann</strong> die Aktionen durchgeführt werden.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Anwendungen werden von Ihnen, dem Benutzer definiert und für Open-AudIT gespeichert, um Geräte zu verwenden und zu verknüpfen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attribute werden für Open-AudIT gespeichert, um für bestimmte Felder zu verwenden.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>In der Lage zu bestimmen, welche Maschinen gleich konfiguriert sind, ist ein wesentlicher Bestandteil der Systemverwaltung und -prüfung – und jetzt wird darüber berichtet, dass es einfach und automatisiert wird. Sobald Sie Ihre Basislinie definieren, wird sie automatisch auf einem bestimmten Zeitplan gegen einen Satz von Geräten laufen. Die Ausgabe dieser ausgeführten Basislinien wird für die Web-Betrachtung, Import in ein Drittland-System oder sogar als gedruckter Bericht zur Verfügung stehen.<br/> <br/> Basislinien ermöglichen es Ihnen, Auditdaten mit einer Reihe von Attributen zu kombinieren, die Sie zuvor definiert haben (Ihre Basislinie), um die Einhaltung von Geräten zu bestimmen.<br/> <br/> Zum Beispiel - Sie könnten eine Basislinie von einem Gerät erstellen, das Centos 6 betreibt, das als einer Ihrer apache Server in einem Cluster fungiert. Sie wissen, dass dieser bestimmte Server genau so konfiguriert ist, wie Sie es wollen, aber Sie sind nicht sicher, ob andere Server im Cluster genau das gleiche konfiguriert sind. Baselines ermöglicht es Ihnen, dies zu bestimmen.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Cluster werden in Open-AudIT gespeichert, um Geräte besser zu erfassen, verwalten und schätzen Lizenzkosten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenten ist ein allgemeiner Begriff für die Tabellen, die die Attribute für ein Gerät speichern. Diese Tabellen sind: access_point, arp, bios, Certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, Optical, pagefile, Partition, policy, print_queue, process, radio, route, san, scsi, server, server_item, service, share, software_group, software_key, sound, software, software</p><p> Darüber hinaus klassifizieren wir die folgenden Tabellen auch als Geräteverwandt: Anwendung, Anbau, Cluster, Anmeldeinformationen, Bild.</p>';

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

$GLOBALS["lang"]['<p>It is easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen over time. All the devices discovered last week, last month or any other period. New software found. What about devices that have not been seen - where are they? How useful to be able to specify these items over time.<br> <br></p>'] = '<p>Es ist leicht zu sehen, dass Berichte über die Zeit äußerst nützlich sind. Nicht nur können Sie die Open-AudIT-Daten sehen, sondern jetzt, was sie im Laufe der Zeit gesehen hat. Alle Geräte entdeckten letzte Woche, letzten Monat oder jede andere Periode. Neue Software gefunden. Was ist mit Geräten, die nicht gesehen wurden - wo sind sie? Wie nützlich, diese Elemente im Laufe der Zeit anzugeben.<br/> <br/></p>';

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

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Wir installieren zunächst die Standardliste der Skripte mit den Standardoptionen. Diese Standardskripte können nicht gelöscht werden. Sie können nach Bedarf zusätzliche Skripte für die Nutzung durch Sie erstellen. Ihr Skript basiert auf einem der vorhandenen Skripte und hat benutzerdefinierte Optionen angewendet. Die Skripte können dann auf der Listenseite im Menü -> heruntergeladen werden Entdecken -> Audit Scripts -> Liste Audit Skripte<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Bei der Verwendung von Regex zum Matching kann auf der Seite eine hilfreiche Seite gefunden werden. <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP Website</a>. Einige Unterschiede zu Perl Regex finden Sie <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Hier.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets können leicht erstellt werden, um zu zeigen, was für Ihre Umgebung auf Ihren Dashboards spezifisch ist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Mit Open-AudIT Professional und Enterprise können Sie Entdeckungen, Report-Generation oder Baseline-Checks automatisieren und planen, wenn Sie wollen, und so oft Sie brauchen. Planen Sie Ihre Entdeckungen, um nachts zu laufen und Berichte zu erstellen und per E-Mail an Schlüsselpersonal jeden Morgen. Komplexe oder einfache Zeitplan, Geräte-Erkennung und Report-Generation ist nur einen Klick entfernt.<br/> <br/>Erstellen Sie individuelle Entdeckungspläne für jeden Subnet- oder AD-Controller, fügen Sie in Berichten hinzu, die für gezielte Publikum erstellt werden sollen. Entwickeln Sie einfache oder komplexe Termine, um die Bedürfnisse des Unternehmens zu unterstützen, Backups oder Auswirkungen auf den Betrieb zu vermeiden oder einfach die Fertigstellung der Last- und Beschleunigungsprüfung zu verbreiten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Sie können ein Skript mit allen Optionen für eine der vorhandenen Audit-Skripte erstellen - nicht nur Windows. AIX, ESX, Linux, OSX und Windows sind alle abgedeckt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Sie können das prozentuale %-Zeichen als Wildcard im match_string verwenden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Ihre Racks helfen, genau dort zu verfeinern, wo sich Ihre Geräte befinden.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API Für diese Funktion ist der Schlüssel erforderlich.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Ein JSON-Array von Geräte-IDs, die diesen Benchmark ausgeführt haben.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'Eine URL zu einer Datei zum Download.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Ein berechnetes Feld, das die Anzahl der Zeiten dieser Software anzeigt, wurde auf den Computern im ausgewählten Org gefunden (und seine Nachkommen falls konfiguriert).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Ein Sammler ist entweder im Collector oder Stand-Alone Modus.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Eine komma getrennte Liste von Werten, von denen einer ausgewählt werden kann.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Ein Befehl zum Laufen. Wenn der Agent Windows basiert, wird dieser Befehl innerhalb des powerhell agent ausgeführt.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Eine Liste der benutzerdefinierten TCP-Ports zum Scannen (22 ist SSH, 135 ist WMI, 62078 ist iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Eine Liste der benutzerdefinierten UDP-Ports zum Scannen (161 ist SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Eine geringere Anzahl bedeutet, dass sie vor anderen Regeln angewendet wird.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Eine geringere Anzahl bedeutet, dass sie vor anderen Regeln angewendet wird. Das Standardgewicht beträgt 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Ein Passwort (gespeichert als Hash), das die Anmeldung bei der Anwendung Authentifizierung ermöglicht.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Ein Routing-Domain oder Adressraum, in dem die IP-Adressen und MAC-Adressen eindeutig sind.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Eine Sicherheitszone ist eine Verwaltungs- oder Policy-Domain innerhalb der Netzwerk-Domain.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Eine kurze Beschreibung des Log-Eintrags.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Eine Saite, die dem <code>software.name</code> Attribut. Sie können die Standard SQL-Wildcard von Prozent (%) verwenden, um einen oder mehrere Zeichen zu entsprechen.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN usw.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Key required.'] = 'API Key erforderlich.';

$GLOBALS["lang"]['API Result'] = 'API Ergebnis';

$GLOBALS["lang"]['About'] = 'Über uns';

$GLOBALS["lang"]['Accept'] = 'Annahme';

$GLOBALS["lang"]['access_point'] = 'Zugang';

$GLOBALS["lang"]['Access Point'] = 'Zugang';

$GLOBALS["lang"]['access_token'] = 'Zugang zu Token';

$GLOBALS["lang"]['Access Token'] = 'Zugang zu Token';

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

$GLOBALS["lang"]['Add image'] = 'Bild vergrößern';

$GLOBALS["lang"]['additional_items'] = 'Weitere Artikel';

$GLOBALS["lang"]['Additional Items'] = 'Weitere Artikel';

$GLOBALS["lang"]['address'] = 'Anschrift';

$GLOBALS["lang"]['Address'] = 'Anschrift';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Erweiterte';

$GLOBALS["lang"]['Advanced'] = 'Erweiterte';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agenten';

$GLOBALS["lang"]['Agents'] = 'Agenten';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Alandinseln';

$GLOBALS["lang"]['Albania'] = 'Albanien';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Felder';

$GLOBALS["lang"]['American Samoa'] = 'Amerikanische Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Eine Reihe von <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Eine Reihe von <code>devices.id</code>.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Ein verschlüsseltes JSON-Dokument mit den erforderlichen Attributen je nach <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Ein Hinweis auf das von dieser Website benötigte Serviceniveau.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Ein internes Feld, das anzeigt, ob die Entdeckung abgeschlossen ist.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Ein optionaler Geocode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Ein optionales Passwort, um sudo zu verwenden.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktis';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua und Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle TCP-Ports (komma seperated, keine Leerzeichen) möchten Sie von dieser Entdeckung ausschließen. Nur bei Verwendung von Nmap 7+ verfügbar.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle UDP-Ports (comma seperated, keine Leerzeichen) möchten Sie von dieser Entdeckung ausschließen. Nur bei Verwendung von Nmap 7+ verfügbar.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Alle zusätzlichen Unterlagen, die Sie benötigen.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Alle zusätzlichen Notizen, die Sie machen möchten.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alle Geräte werden diesem Org zugewiesen, wenn sie ihr Audit-Skript (falls gesetzt) ausführen. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Alle entdeckten Geräte werden diesem Standort zugewiesen, wenn eingestellt. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Alle entdeckten Geräte werden diesem Standort zugeordnet, wenn sie ihr Audit-Skript (falls gesetzt) ausführen. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Alle entdeckten Geräte werden diesem Org zugewiesen, wenn gesetzt. Wenn nicht gesetzt, werden sie dem <code>org_id</code> von dieser Entdeckung. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Jeder benötigte Filter. HINWEIS: Wenn Typ = Verkehr, steht dies für die Schrift-Akku.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Alle spezifischen TCP-Ports, die Sie testen möchten (comma seperated, no Leerzeichen).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Alle spezifischen UDP-Ports, die Sie testen möchten (comma seperated, no Leerzeichen).';

$GLOBALS["lang"]['Application'] = 'Anwendungsbereich';

$GLOBALS["lang"]['application_id'] = 'Anwendungs-ID';

$GLOBALS["lang"]['Application ID'] = 'Anwendungs-ID';

$GLOBALS["lang"]['Application Licenses'] = 'Bewerbungslizenzen';

$GLOBALS["lang"]['applications'] = 'Anwendungen';

$GLOBALS["lang"]['Applications'] = 'Anwendungen';

$GLOBALS["lang"]['applied'] = 'Angemeldet';

$GLOBALS["lang"]['Applied'] = 'Angemeldet';

$GLOBALS["lang"]['Approved'] = 'genehmigt';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['architecture'] = 'Architektur';

$GLOBALS["lang"]['Architecture'] = 'Architektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Sind Sie sicher, dass Sie diesen Eintrag löschen möchten?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Sind Sie sicher, dass Sie diesen Ausgabeteil löschen möchten?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Bist du sicher? Dadurch werden alle Warteschlangeneinträge entfernt und die verbleibenden IPs nicht entdeckt.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Bist du sicher? Dies wird die Warteschlangen-Verarbeitungszählung zurücksetzen und kann Belastung auf dem Server verursachen.';

$GLOBALS["lang"]['area'] = 'Gebiet';

$GLOBALS["lang"]['Area'] = 'Gebiet';

$GLOBALS["lang"]['Argentina'] = 'Argentinien';

$GLOBALS["lang"]['Armenia'] = 'Armenien';

$GLOBALS["lang"]['arp'] = 'A.';

$GLOBALS["lang"]['Arp'] = 'A.';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Entsprechend den Attributen für Geräteumgebungen. Produktion, Training, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Zuweisen eines Betreibers';

$GLOBALS["lang"]['Assigned To'] = 'Zugeteilt';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Zur Zeit können wir netstat_ports, Software und Benutzer verwenden.';

$GLOBALS["lang"]['attached_device_id'] = 'Befestigte Geräte-ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Befestigte Geräte-ID';

$GLOBALS["lang"]['attached_to'] = 'Angefügt an';

$GLOBALS["lang"]['Attached To'] = 'Angefügt an';

$GLOBALS["lang"]['attachment'] = 'Anlage';

$GLOBALS["lang"]['Attachment'] = 'Anlage';

$GLOBALS["lang"]['attachments'] = 'Anhänge';

$GLOBALS["lang"]['Attachments'] = 'Anhänge';

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attribute';

$GLOBALS["lang"]['Attributes'] = 'Attribute';

$GLOBALS["lang"]['Audit'] = 'Prüfung';

$GLOBALS["lang"]['Audit AIX'] = 'Prüfung AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Prüfung ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Prüfung Linux';

$GLOBALS["lang"]['audit_log'] = 'Prüfungsprotokoll';

$GLOBALS["lang"]['Audit Log'] = 'Prüfungsprotokoll';

$GLOBALS["lang"]['Audit My PC'] = 'Mein PC testen';

$GLOBALS["lang"]['Audit OSX'] = 'Prüfung OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Ergebnis Eingabe';

$GLOBALS["lang"]['Audit Status'] = 'Prüfungsstatus';

$GLOBALS["lang"]['Audit Windows'] = 'Prüfung Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Prüfen Sie das Gerät';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australien';

$GLOBALS["lang"]['Austria'] = 'Österreich';

$GLOBALS["lang"]['auth'] = 'Authentizität';

$GLOBALS["lang"]['Auth'] = 'Authentizität';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto bevölkert durch den Open-AudIT Server.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'automatisch auf Basis des Collectors OS besiedelt.';

$GLOBALS["lang"]['availability'] = 'Verfügbarkeit';

$GLOBALS["lang"]['Availability'] = 'Verfügbarkeit';

$GLOBALS["lang"]['Azerbaijan'] = 'Asbest';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU insgesamt';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesch';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Verboten';

$GLOBALS["lang"]['bar_code'] = 'Barcode';

$GLOBALS["lang"]['Bar Code'] = 'Barcode';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Basis DN';

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

$GLOBALS["lang"]['Basic'] = 'Basis';

$GLOBALS["lang"]['batch'] = 'Batch';

$GLOBALS["lang"]['Batch'] = 'Batch';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belgien';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmarking';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

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

$GLOBALS["lang"]['Botswana'] = 'Botsuana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilien';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasilianisches Portugiesisch';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britisches Territorium im Indischen Ozean (Chagos Archipel)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britische Jungferninseln';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarien';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Burkina Faso'] = 'Das ist nicht so.';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Geschäftsanforderungen';

$GLOBALS["lang"]['Business Requirements'] = 'Geschäftsanforderungen';

$GLOBALS["lang"]['Buy'] = 'Kaufen';

$GLOBALS["lang"]['Buy More'] = 'Mehr erfahren';

$GLOBALS["lang"]['By'] = 'von';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maske';

$GLOBALS["lang"]['cli_config'] = 'CLI Konkret';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konkret';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Berechnet von der Entdeckung.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Berechnete Gesamtzahl der gültigen IP-Adressen für dieses Netzwerk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Berechnet nach Fertigstellung, die Zeit zur Ausführung dieses Artikels.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Berechnet bei laufender Integration und enthält eine JSON-Darstellung der Geräte in dieser Integration. Alle Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Berechnet bei laufender Integration und enthält eine JSON-Darstellung der Standorte in dieser Integration. Alle Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der von Open-AudIT ausgewählten Geräte.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der ausgewählten Geräte das externe System.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der zu aktualisierenden Geräte im externen System.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Berechnet bei laufender Integration und enthält die Anzahl der in Open-AudIT aktualisierten Geräte.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodscha';

$GLOBALS["lang"]['Cameroon'] = 'Kampanien';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Kann sein <code>active</code>, <code>passive</code> oder leer.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Kann sein <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Kann sein <code>auto</code>, <code>fixed</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Kann sein <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Kann sein <code>line</code>, <code>pie</code> oder <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Kann sein <code>user</code> oder <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Kann durch Entdeckung oder Benutzer eingestellt werden.';

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

$GLOBALS["lang"]['Cayman Islands'] = 'Cayman Inseln';

$GLOBALS["lang"]['Cellular Details'] = 'Zellische Details';

$GLOBALS["lang"]['Central African Republic'] = 'Zentralafrikanische Republik';

$GLOBALS["lang"]['certificate'] = 'Bescheinigung';

$GLOBALS["lang"]['Certificate'] = 'Bescheinigung';

$GLOBALS["lang"]['certificates'] = 'Zertifikate';

$GLOBALS["lang"]['Certificates'] = 'Zertifikate';

$GLOBALS["lang"]['Chad'] = 'Tschad';

$GLOBALS["lang"]['change_id'] = 'ID ändern';

$GLOBALS["lang"]['Change ID'] = 'ID ändern';

$GLOBALS["lang"]['change_log'] = 'Änderung der Registrierung';

$GLOBALS["lang"]['Change Log'] = 'Änderung der Registrierung';

$GLOBALS["lang"]['change_type'] = 'Änderungsart';

$GLOBALS["lang"]['Change Type'] = 'Änderungsart';

$GLOBALS["lang"]['chart'] = 'Diagramm';

$GLOBALS["lang"]['Chart'] = 'Diagramm';

$GLOBALS["lang"]['check_minutes'] = 'Protokoll überprüfen';

$GLOBALS["lang"]['Check Minutes'] = 'Protokoll überprüfen';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Überprüfen Sie SSH auf diesen Ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Überprüfen Sie diesen Port für jeden SSH-Service.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Choose'] = 'Wählen';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Wählen Sie (wählen Sie zuerst Betriebssystem)';

$GLOBALS["lang"]['Choose a Device'] = 'Wählen Sie ein Gerät';

$GLOBALS["lang"]['Choose a Table'] = 'Wählen Sie eine Tabelle';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klicken Sie auf die Schaltfläche Löschen, um die Beispielgeräte von Open-AudIT zu entfernen.<br/>Dies wird die folgenden Geräte aus der Datenbank entfernen. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klicken Sie unten auf die Schaltfläche Importieren, um Open-AudIT mit Beispiel-Gerätendaten zu bevölkern.';

$GLOBALS["lang"]['Client ID'] = 'Kunden-ID';

$GLOBALS["lang"]['client_ident'] = 'Kundenidentität';

$GLOBALS["lang"]['Client Ident'] = 'Kundenidentität';

$GLOBALS["lang"]['client_secret'] = 'Kunden Geheimnis';

$GLOBALS["lang"]['Client Secret'] = 'Kunden Geheimnis';

$GLOBALS["lang"]['client_site_name'] = 'Name des Kunden';

$GLOBALS["lang"]['Client Site Name'] = 'Name des Kunden';

$GLOBALS["lang"]['Close'] = 'Schließen';

$GLOBALS["lang"]['Cloud'] = 'Wolken';

$GLOBALS["lang"]['Cloud Details'] = 'Details zum Thema';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['Cloud Name'] = 'Name des Unternehmens';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds'] = 'Wolken';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kakao (Keeling) Inseln';

$GLOBALS["lang"]['Collector'] = 'Sammeln';

$GLOBALS["lang"]['Collector (UUID)'] = 'Sammler (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Name des Sammlers';

$GLOBALS["lang"]['collector_uuid'] = 'Sammeln Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Sammeln Uuid';

$GLOBALS["lang"]['collectors'] = 'Sammler';

$GLOBALS["lang"]['Collectors'] = 'Sammler';

$GLOBALS["lang"]['Colombia'] = 'Kolumbien';

$GLOBALS["lang"]['color'] = 'Farbe';

$GLOBALS["lang"]['Color'] = 'Farbe';

$GLOBALS["lang"]['column'] = 'Spalte';

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

$GLOBALS["lang"]['comments'] = 'Bemerkungen';

$GLOBALS["lang"]['Comments'] = 'Bemerkungen';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Häufig als ClientId bezeichnet.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Häufig als ClientSecret bezeichnet.';

$GLOBALS["lang"]['Community'] = 'Gemeinschaft';

$GLOBALS["lang"]['Community Questions'] = 'Fragen der Gemeinschaft';

$GLOBALS["lang"]['Community String'] = 'Gemeinschaftszug';

$GLOBALS["lang"]['Comoros the'] = 'Komoren';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Component Table'] = 'Komponententabelle';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenten (Alle Geräte)';

$GLOBALS["lang"]['Compute'] = 'Berechnung';

$GLOBALS["lang"]['Condition'] = 'Zustand';

$GLOBALS["lang"]['config'] = 'Konkret';

$GLOBALS["lang"]['Config'] = 'Konkret';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, aktuell ';

$GLOBALS["lang"]['config_file'] = 'Bearbeiten von Dateien';

$GLOBALS["lang"]['Config File'] = 'Bearbeiten von Dateien';

$GLOBALS["lang"]['config_manager_error_code'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Passwort vergessen?';

$GLOBALS["lang"]['configuration'] = 'Konfiguration';

$GLOBALS["lang"]['Configuration'] = 'Konfiguration';

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

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontakt Name';

$GLOBALS["lang"]['Contact Name'] = 'Kontakt Name';

$GLOBALS["lang"]['contained_in'] = 'In den Warenkorb';

$GLOBALS["lang"]['Contained In'] = 'In den Warenkorb';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Enthält ein JSON-Objekt Details die zugehörigen Widgets und ihre Positionen.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Enthält die Felder, die bestimmen, ob wir ssh, snmp und wmi Entdeckungsoptionen verwenden sollten. Ein JSON-Objekt.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Bezeichnung';

$GLOBALS["lang"]['contractual_obligations'] = 'Vertragspflichten';

$GLOBALS["lang"]['Contractual Obligations'] = 'Vertragspflichten';

$GLOBALS["lang"]['Cook Islands'] = 'Cookinseln';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopieren und Einfügen eines Auditergebnisses';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopieren und fügen Sie die folgenden in die Foren, eine andere Instanz von Open-AudIT oder woanders Sie diesen Artikel zur Verfügung stellen müssen.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Geocode erstellen';

$GLOBALS["lang"]['create_internal_count'] = 'Interner Zähler erstellen';

$GLOBALS["lang"]['Create Internal Count'] = 'Interner Zähler erstellen';

$GLOBALS["lang"]['create_internal_from_external'] = 'Erstellen Sie intern von extern';

$GLOBALS["lang"]['Create Internal From External'] = 'Erstellen Sie intern von extern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS Geräte aus Open-AudIT erstellen';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-AudIT erstellen Geräte von ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-AudIT erstellen Geräte von NMIS';

$GLOBALS["lang"]['created_at'] = 'Erstellt bei';

$GLOBALS["lang"]['Created At'] = 'Erstellt bei';

$GLOBALS["lang"]['created_by'] = 'Erstellt von';

$GLOBALS["lang"]['Created By'] = 'Erstellt von';

$GLOBALS["lang"]['created_date'] = 'Datum';

$GLOBALS["lang"]['Created Date'] = 'Datum';

$GLOBALS["lang"]['Creating'] = 'Erstellen';

$GLOBALS["lang"]['creator'] = 'Schöpfer';

$GLOBALS["lang"]['Creator'] = 'Schöpfer';

$GLOBALS["lang"]['credential'] = 'Einverständnis';

$GLOBALS["lang"]['Credential'] = 'Einverständnis';

$GLOBALS["lang"]['credentials'] = 'Angaben';

$GLOBALS["lang"]['Credentials'] = 'Angaben';

$GLOBALS["lang"]['Croatia'] = 'Kroatien';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Strom';

$GLOBALS["lang"]['Current'] = 'Strom';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Aktuelle Entdeckungsprozesse';

$GLOBALS["lang"]['Current date & time is '] = 'Aktuelles Datum und Uhrzeit ';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Derzeit unterstützte Typen <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> oder <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kundenspezifische TCP-Ports';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Zoll UDP Häfen';

$GLOBALS["lang"]['Cyprus'] = 'Zypern';

$GLOBALS["lang"]['Czech'] = 'Tschechische Republik';

$GLOBALS["lang"]['Czech Republic'] = 'Tschechische Republik';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-Konto (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Passwort (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'Personalausweis';

$GLOBALS["lang"]['Dashboard ID'] = 'Personalausweis';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Datenbank';

$GLOBALS["lang"]['db_action'] = 'Datenbank Aktion';

$GLOBALS["lang"]['Database Action'] = 'Datenbank Aktion';

$GLOBALS["lang"]['db_column'] = 'Datenbank Kolumne';

$GLOBALS["lang"]['Database Column'] = 'Datenbank Kolumne';

$GLOBALS["lang"]['Database Definition'] = 'Datenbankdefinition';

$GLOBALS["lang"]['db_row'] = 'Datenbank Row';

$GLOBALS["lang"]['Database Row'] = 'Datenbank Row';

$GLOBALS["lang"]['Database Schema'] = 'Datenbankschema';

$GLOBALS["lang"]['db_table'] = 'Datenbank';

$GLOBALS["lang"]['Database Table'] = 'Datenbank';

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

$GLOBALS["lang"]['December'] = 'Dezember';

$GLOBALS["lang"]['Default'] = 'Fehler';

$GLOBALS["lang"]['Default Items'] = 'Standard-Elemente';

$GLOBALS["lang"]['Default Value'] = 'Standardwert';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standard von 389. Normalerweise verwendet 636 für Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standard <code>3</code> für LDAP und Active Directory.';

$GLOBALS["lang"]['delay_minutes'] = 'Verzögerungsprotokolle';

$GLOBALS["lang"]['Delay Minutes'] = 'Verzögerungsprotokolle';

$GLOBALS["lang"]['Delete'] = 'Löschen';

$GLOBALS["lang"]['Delete Example Devices'] = 'Beispielgeräte löschen';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Löschen Sie Extern von Intern';

$GLOBALS["lang"]['Delete External From Internal'] = 'Löschen Sie Extern von Intern';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Löschen Sie NMIS Geräte, wenn nicht in Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Löschen der Anwendung';

$GLOBALS["lang"]['Delete from Cluster'] = 'Löschen von Cluster';

$GLOBALS["lang"]['deleted_at'] = 'Gelöscht bei';

$GLOBALS["lang"]['Deleted At'] = 'Gelöscht bei';

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

$GLOBALS["lang"]['details'] = 'Details';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details, wer in der Regel an dieser Seite kontaktiert werden kann.';

$GLOBALS["lang"]['device'] = 'Gerät';

$GLOBALS["lang"]['Device'] = 'Gerät';

$GLOBALS["lang"]['Device Audits'] = 'Geräteaudits';

$GLOBALS["lang"]['device_id'] = 'Gerätekennung';

$GLOBALS["lang"]['Device ID'] = 'Gerätekennung';

$GLOBALS["lang"]['device_id_a'] = 'Geräte-ID A';

$GLOBALS["lang"]['Device ID A'] = 'Geräte-ID A';

$GLOBALS["lang"]['device_id_b'] = 'Geräte-ID B';

$GLOBALS["lang"]['Device ID B'] = 'Geräte-ID B';

$GLOBALS["lang"]['Device Name'] = 'Name des Geräts';

$GLOBALS["lang"]['Device Result'] = 'Ergebnis des Geräts';

$GLOBALS["lang"]['Device Results'] = 'Ergebnisse der Geräte';

$GLOBALS["lang"]['Device Seed'] = 'Gerät gesehen';

$GLOBALS["lang"]['Device Seed IP'] = 'Gerät gesehen IP';

$GLOBALS["lang"]['Device Status'] = 'Gerätestatus';

$GLOBALS["lang"]['Device Types'] = 'Gerätetypen';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Gerät ist im Subnet';

$GLOBALS["lang"]['Devices'] = 'Geräte';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Zugeteilte Geräte';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Zugeteilte Geräte';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Org zugewiesene Geräte';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Org zugewiesene Geräte';

$GLOBALS["lang"]['Devices Audited'] = 'Geräte geprüft';

$GLOBALS["lang"]['Devices Created in '] = 'Geräte, die in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Geräte, die in Open-AudIT erstellt wurden';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Geräte Standard Display-Spalten';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Geräte Standard Display-Spalten';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Geräte gefunden Letzte 7 Tage';

$GLOBALS["lang"]['Devices Found Today'] = 'Geräte heute gefunden';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Geräte gefunden gestern';

$GLOBALS["lang"]['Devices Not Audited'] = 'Geräte nicht geprüft';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Geräte nicht gesehen 30 Tage';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Geräte nicht gesehen 7 Tage';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Geräte nicht gesehen 90 Tage';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Geräte über API abrufbar';

$GLOBALS["lang"]['Devices Selected from '] = 'Ausgewählte Geräte ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Ausgewählte Geräte aus Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Geräte, die in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Geräte Aktualisiert in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Geräte werden bewertet.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Geräte werden nicht bewertet.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Geräte könnten Benchmarking sein.';

$GLOBALS["lang"]['Devices in Running State'] = 'Geräte in Deutschland';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Geräte in Gestopptem Zustand';

$GLOBALS["lang"]['Devices in this'] = 'Geräte in diesem';

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

$GLOBALS["lang"]['discoveries'] = 'Entdeckungen';

$GLOBALS["lang"]['Discoveries'] = 'Entdeckungen';

$GLOBALS["lang"]['Discovery'] = 'Entdeckung';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Entdeckungsthemen';

$GLOBALS["lang"]['discovery_log'] = 'Entdecke das Log';

$GLOBALS["lang"]['Discovery Log'] = 'Entdecke das Log';

$GLOBALS["lang"]['Discovery Name'] = 'Entdeckername';

$GLOBALS["lang"]['Discovery Options'] = 'Entdeckungsoptionen';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Entdecken Sie Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Entdecke Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Entdeckter Lauf';

$GLOBALS["lang"]['Discovery Run'] = 'Entdeckter Lauf';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan-Optionen';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan-Optionen';

$GLOBALS["lang"]['disk'] = 'Festplattenspeicher';

$GLOBALS["lang"]['Disk'] = 'Festplattenspeicher';

$GLOBALS["lang"]['Display in Menu'] = 'Anzeige im Menü';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scannen Sie diese TCP-Ports nicht.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scannen Sie diese UDP-Ports nicht.';

$GLOBALS["lang"]['Do not show me again'] = 'Nicht mehr zeigen';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Möchten Sie einen sicheren Transport (LDAPS) oder einen regelmäßigen unverschlüsselten LDAP verwenden.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Möchten Sie die Standard-Seitenleiste auf der linken Seite sehen.';

$GLOBALS["lang"]['documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation'] = 'Dokumentation';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Eine Datei von URL herunterladen';

$GLOBALS["lang"]['driver'] = 'Fahrer';

$GLOBALS["lang"]['Driver'] = 'Fahrer';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Dauer';

$GLOBALS["lang"]['Duration'] = 'Dauer';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-Mail senden';

$GLOBALS["lang"]['Email'] = 'E-Mail senden';

$GLOBALS["lang"]['email_address'] = 'Email Adresse';

$GLOBALS["lang"]['Email Address'] = 'Email Adresse';

$GLOBALS["lang"]['Email to send test to'] = 'Email to send test to';

$GLOBALS["lang"]['Enable'] = 'Ermöglichen';

$GLOBALS["lang"]['enabled'] = 'Ermöglicht';

$GLOBALS["lang"]['Enabled'] = 'Ermöglicht';

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

$GLOBALS["lang"]['English'] = 'Englisch';

$GLOBALS["lang"]['enterprise'] = 'Unternehmen';

$GLOBALS["lang"]['Enterprise'] = 'Unternehmen';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Unternehmen Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'Art der Eintragung';

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

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Äthiopien';

$GLOBALS["lang"]['Every'] = 'Jedes';

$GLOBALS["lang"]['Every Day'] = 'Jeden Tag';

$GLOBALS["lang"]['Exceptions'] = 'Ausnahmen';

$GLOBALS["lang"]['exclude'] = 'Nicht verfügbar';

$GLOBALS["lang"]['Exclude'] = 'Nicht verfügbar';

$GLOBALS["lang"]['exclude_ip'] = 'IP ausfüllen';

$GLOBALS["lang"]['Exclude IP'] = 'IP ausfüllen';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP-Adressen ausschließen';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP Ports ausschließen';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp Ports ausschließen';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp Ports ausschließen';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-Ports ausschließen';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp Ports ausschließen';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp Ports ausschließen';

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

$GLOBALS["lang"]['expire_minutes'] = 'Abgelaufene Protokolle';

$GLOBALS["lang"]['Expire Minutes'] = 'Abgelaufene Protokolle';

$GLOBALS["lang"]['expires'] = 'Entfällt';

$GLOBALS["lang"]['Expires'] = 'Entfällt';

$GLOBALS["lang"]['expiry_date'] = 'Datum';

$GLOBALS["lang"]['Expiry Date'] = 'Datum';

$GLOBALS["lang"]['Export CSV'] = 'Ausfuhr CSV';

$GLOBALS["lang"]['Export JSON'] = 'Ausfuhr JSON';

$GLOBALS["lang"]['Export by Device'] = 'Exportieren von Gerät';

$GLOBALS["lang"]['Export by Policy'] = 'Export nach Politik';

$GLOBALS["lang"]['Export data to'] = 'Ausfuhrdaten';

$GLOBALS["lang"]['expose'] = 'Exposition';

$GLOBALS["lang"]['Expose'] = 'Exposition';

$GLOBALS["lang"]['External'] = 'Außen';

$GLOBALS["lang"]['External Field Name'] = 'Externer Feldname';

$GLOBALS["lang"]['External Field Type'] = 'Außenfeldtyp';

$GLOBALS["lang"]['external_ident'] = 'Externer Gedankenstrich';

$GLOBALS["lang"]['External Ident'] = 'Externer Gedankenstrich';

$GLOBALS["lang"]['external_link'] = 'Externer Link';

$GLOBALS["lang"]['External Link'] = 'Externer Link';

$GLOBALS["lang"]['extra_columns'] = 'Extrasäulen';

$GLOBALS["lang"]['Extra Columns'] = 'Extrasäulen';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra und mehr Verbose Protokollierung wird zur Fehlerbehebung erzeugt.';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['factories'] = 'Faktoren';

$GLOBALS["lang"]['Factories'] = 'Faktoren';

$GLOBALS["lang"]['Fail'] = 'Fälligkeit';

$GLOBALS["lang"]['Failed'] = 'Versäumt';

$GLOBALS["lang"]['Failed Severity'] = 'Unverschämte Schwere';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandinseln (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Familie';

$GLOBALS["lang"]['Faroe Islands'] = 'Färöer';

$GLOBALS["lang"]['Features'] = 'Eigenschaften';

$GLOBALS["lang"]['February'] = 'Februar';

$GLOBALS["lang"]['feeds'] = 'Futtermittel';

$GLOBALS["lang"]['Feeds'] = 'Futtermittel';

$GLOBALS["lang"]['field'] = 'Feld';

$GLOBALS["lang"]['Field'] = 'Feld';

$GLOBALS["lang"]['field_id'] = 'Feld ID';

$GLOBALS["lang"]['Field ID'] = 'Feld ID';

$GLOBALS["lang"]['Field Name'] = 'Feldname';

$GLOBALS["lang"]['Field Type'] = 'Feldtyp';

$GLOBALS["lang"]['Fields'] = 'Felder';

$GLOBALS["lang"]['fields'] = 'Felder';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidschi-Inseln';

$GLOBALS["lang"]['file'] = 'Datei';

$GLOBALS["lang"]['File'] = 'Datei';

$GLOBALS["lang"]['File Import'] = 'Datei importieren';

$GLOBALS["lang"]['File Input'] = 'Datei Input';

$GLOBALS["lang"]['file_name'] = 'Dateiname';

$GLOBALS["lang"]['File Name'] = 'Dateiname';

$GLOBALS["lang"]['file_size'] = 'Dateigröße';

$GLOBALS["lang"]['File Size'] = 'Dateigröße';

$GLOBALS["lang"]['filename'] = 'Dateiname';

$GLOBALS["lang"]['Filename'] = 'Dateiname';

$GLOBALS["lang"]['files'] = 'Dateien';

$GLOBALS["lang"]['Files'] = 'Dateien';

$GLOBALS["lang"]['files_id'] = 'Kennung der Dateien';

$GLOBALS["lang"]['Files ID'] = 'Kennung der Dateien';

$GLOBALS["lang"]['filtered'] = 'Gefiltert';

$GLOBALS["lang"]['Filtered'] = 'Gefiltert';

$GLOBALS["lang"]['Finland'] = 'Finnland';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall Regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall Regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['first_run'] = 'Erste Schritte';

$GLOBALS["lang"]['First Run'] = 'Erste Schritte';

$GLOBALS["lang"]['first_seen'] = 'Erste Lesung';

$GLOBALS["lang"]['First Seen'] = 'Erste Lesung';

$GLOBALS["lang"]['FirstWave'] = 'Erste Hilfe';

$GLOBALS["lang"]['Fix'] = 'Fehler';

$GLOBALS["lang"]['Fixed'] = 'Festgelegt';

$GLOBALS["lang"]['Floor'] = 'Boden';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Folgen Sie einer der unten stehenden Links und entdecken Sie, wie Sie Open-AudIT nutzen können, um herauszufinden, <b>Was ist auf Ihrem Netzwerk?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Für eine Saatgutentdeckung sollte ich nur IPs im privaten IP-Adressenraum entdecken.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Für eine Samenentdeckung sollte ich nur IPs auf dem ausgewählten Subnetz entdecken.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Für eine Samenentdeckung, sollte ich das Subnet ping, bevor die Entdeckung läuft.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Für fortgeschrittene Eingabe einer rohen SQL-Abfrage. Wie pro Queries müssen Sie <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Für Lizenzen, die nicht dauerhaft sind, wann läuft die Lizenz ab.';

$GLOBALS["lang"]['form_factor'] = 'Formfaktor';

$GLOBALS["lang"]['Form Factor'] = 'Formfaktor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['fqdn'] = 'Fqd';

$GLOBALS["lang"]['Fqdn'] = 'Fqd';

$GLOBALS["lang"]['France, French Republic'] = 'Frankreich, Frankreich';

$GLOBALS["lang"]['free'] = 'Kostenlos';

$GLOBALS["lang"]['Free'] = 'Kostenlos';

$GLOBALS["lang"]['free_percent'] = 'Freier Prozentsatz';

$GLOBALS["lang"]['Free Percent'] = 'Freier Prozentsatz';

$GLOBALS["lang"]['French'] = 'Französisch';

$GLOBALS["lang"]['French Guiana'] = 'Französisch-Guayana';

$GLOBALS["lang"]['French Polynesia'] = 'Französisch-Polynesien';

$GLOBALS["lang"]['French Southern Territories'] = 'Französische südliche Gebiete';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Häufig gestellte Fragen';

$GLOBALS["lang"]['Friday'] = 'Freitag';

$GLOBALS["lang"]['From 100 Devices'] = 'Von 100 Geräten';

$GLOBALS["lang"]['From 500 Devices'] = 'Von 500 Geräten';

$GLOBALS["lang"]['full_name'] = 'Vollständiger Name';

$GLOBALS["lang"]['Full Name'] = 'Vollständiger Name';

$GLOBALS["lang"]['function'] = 'Funktion';

$GLOBALS["lang"]['Function'] = 'Funktion';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPEN';

$GLOBALS["lang"]['Gabon'] = 'Gabun';

$GLOBALS["lang"]['Gambia the'] = 'Gambia die';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Erstellt von';

$GLOBALS["lang"]['geo'] = 'Geophysik';

$GLOBALS["lang"]['Geo'] = 'Geophysik';

$GLOBALS["lang"]['Georgia'] = 'Georgien';

$GLOBALS["lang"]['German'] = 'Deutsch';

$GLOBALS["lang"]['Germany'] = 'Deutschland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Erste Schritte';

$GLOBALS["lang"]['Get a Free License'] = 'Kostenlose Lizenz';

$GLOBALS["lang"]['Getting Started'] = 'Erste Schritte';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Go'] = 'Los!';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['graph'] = 'Abbildung';

$GLOBALS["lang"]['Graph'] = 'Abbildung';

$GLOBALS["lang"]['Greater Than'] = 'Mehr zum Thema';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Mehr als oder Gleiche';

$GLOBALS["lang"]['Greece'] = 'Griechenland';

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

$GLOBALS["lang"]['hardware_revision'] = 'Hardware-Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware-Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Wurde diese Politik in dieser Organisation angewendet.';

$GLOBALS["lang"]['hash'] = 'Hash!';

$GLOBALS["lang"]['Hash'] = 'Hash!';

$GLOBALS["lang"]['Head'] = 'Kopf';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island und McDonald Inseln';

$GLOBALS["lang"]['height'] = 'Höhe';

$GLOBALS["lang"]['Height'] = 'Höhe';

$GLOBALS["lang"]['Height in RU'] = 'Höhe in RU';

$GLOBALS["lang"]['Help'] = 'Hilfe';

$GLOBALS["lang"]['High'] = 'hoch';

$GLOBALS["lang"]['High Availability'] = 'Hohe Verfügbarkeit';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Heiliger Stuhl (Vatikanstadtstaat)';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Gastgeber';

$GLOBALS["lang"]['Host'] = 'Gastgeber';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Geruch';

$GLOBALS["lang"]['Hour'] = 'Geruch';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Wie lange dauerte der Befehl, um auszuführen.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Wie lange sollte Nmap auf eine Antwort warten, pro Gerät.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Wie viele Schaltungen speisen zu diesem Rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Wie viele Politiken zu einem Scheitern führen.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Wie viele Politiken zu einem Pass führen.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Wie viele Steckdosen in diesem Rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Wie viele Regaleinheiten in der Höhe sind diese Rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Wie oft sollte der Sammler den Server für eine Aufgabe fragen.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Wie sollten wir Geräte auswählen, die integriert werden sollen (mit einem Attribut, Query oder einer Gruppe).';

$GLOBALS["lang"]['How to compare'] = 'Wie zu vergleichen';

$GLOBALS["lang"]['Hungary'] = 'Ungarn';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['id'] = 'Ausweis';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'F';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['ip'] = 'IP-Adresse';

$GLOBALS["lang"]['IP'] = 'IP-Adresse';

$GLOBALS["lang"]['IP Address'] = 'IP-Adresse';

$GLOBALS["lang"]['IP Addresses'] = 'IP-Adressen';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Zuletzt gesehen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set von';

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

$GLOBALS["lang"]['If'] = 'wenn';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Wenn ein Port mit gefiltert reagiert, sollten wir es als verfügbar betrachten.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Wenn ein Port mit openfilterfiltered reagiert, sollten wir es als verfügbar betrachten.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Wenn in den ausgewählten Geräten kein Remote-Gerät vorhanden ist, sollten wir es aus dem externen System löschen.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Wenn ein Open-AudIT-Gerät geändert wurde, sollten wir das externe System aktualisieren.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Wenn ein Open-AudIT-Gerät nicht auf dem externen System ist, sollten wir es erstellen.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Wenn ein Agent berichtet, dass seine primäre IP in diesem Subnetz ist, führen Sie die Aktionen.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Wenn eine dieser (komma seperated, keine Leerzeichen) Ports erkannt werden, nehmen Sie an, dass SSH auf ihnen läuft und verwenden sie für die Prüfung. Keine Notwendigkeit, diesen Port zu den Custom TCP Ports hinzuzufügen - es wird automatisch hinzugefügt.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Wenn eingestellt, hält ein JSON-Array von bestimmten Gerätespalten, hat dieser Benutzer gewählt, um zu sehen, außer der Konfigurationseinstellung.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Wenn die Agent OS Familie (case insensitive) enthält diese String, führen Sie die Aktionen.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Sind folgende Bedingungen erfüllt:<br/><ul><li>eine Rolle hat eine zugeordnete ad_group</li><li>ein Org hat eine zugeordnete ad_group</li><li>ein LDAP Server hat use_roles auf y gesetzt</li><li>ein Benutzer existiert in LDAP (be it Active Directory oder OpenLDAP) und ist in den zugewiesenen ad_groups</li></ul>Dieser Benutzer kann sich auf Open-AudIT anmelden, ohne dass ein Konto in Open-AudIT erstellt werden muss. Open-AudIT wird die betreffende LDAP abfragen und wenn der Benutzer in den gewünschten Gruppen, aber nicht in Open-AudIT ist, werden seine Benutzerattribute (Name, Vollname, E-Mail, Rollen, Orgs usw.) innerhalb von Open-AudIT automatisch bevölkert und sie werden eingeloggt.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Wenn der Benutzer, der sich auf Open-AudIT einloggt, keinen Zugriff auf die Suche LDAP hat, können Sie ein anderes Konto verwenden, das diesen Zugriff hat.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Wenn diese viele oder mehr Minuten vergangen sind, seit das Gerät den Server kontaktiert, führen Sie die Aktionen aus.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Wenn Sie einen Collector wählen, wird es geplant, auf der nächsten 5 Minuten Grenze auszuführen.';

$GLOBALS["lang"]['ifadminstatus'] = 'Wenn Sie nicht';

$GLOBALS["lang"]['Ifadminstatus'] = 'Wenn Sie nicht';

$GLOBALS["lang"]['iflastchange'] = 'Wenn dies der Fall ist';

$GLOBALS["lang"]['Iflastchange'] = 'Wenn dies der Fall ist';

$GLOBALS["lang"]['Ignored'] = 'Ignoriert';

$GLOBALS["lang"]['image'] = 'Bild';

$GLOBALS["lang"]['Image'] = 'Bild';

$GLOBALS["lang"]['Images'] = 'Bilder';

$GLOBALS["lang"]['implementation_notes'] = 'Durchführungshinweise';

$GLOBALS["lang"]['Implementation Notes'] = 'Durchführungshinweise';

$GLOBALS["lang"]['Import'] = 'Einfuhr';

$GLOBALS["lang"]['Import CSV'] = 'Einfuhr CSV';

$GLOBALS["lang"]['Import Example Data'] = 'Angaben zum Beispiel';

$GLOBALS["lang"]['Import JSON'] = 'Einfuhr JSON';

$GLOBALS["lang"]['improvement_opportunities'] = 'Verbesserungsmöglichkeiten';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Verbesserungsmöglichkeiten';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inaktiv';

$GLOBALS["lang"]['Include'] = 'Inklusive';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'Indien';

$GLOBALS["lang"]['Indonesia'] = 'Indonesien';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Information';

$GLOBALS["lang"]['initial_size'] = 'Anfangsgröße';

$GLOBALS["lang"]['Initial Size'] = 'Anfangsgröße';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Eingangstyp';

$GLOBALS["lang"]['inputs'] = 'Eingänge';

$GLOBALS["lang"]['Inputs'] = 'Eingänge';

$GLOBALS["lang"]['Insane'] = 'Erbsen';

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

$GLOBALS["lang"]['installed_by'] = 'In den Warenkorb';

$GLOBALS["lang"]['Installed By'] = 'In den Warenkorb';

$GLOBALS["lang"]['installed_on'] = 'In den Warenkorb';

$GLOBALS["lang"]['Installed On'] = 'In den Warenkorb';

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

$GLOBALS["lang"]['interface'] = 'Schnittstelle';

$GLOBALS["lang"]['Interface'] = 'Schnittstelle';

$GLOBALS["lang"]['interface_id'] = 'Schnittstellen-ID';

$GLOBALS["lang"]['Interface ID'] = 'Schnittstellen-ID';

$GLOBALS["lang"]['interface_type'] = 'Schnittstellentyp';

$GLOBALS["lang"]['Interface Type'] = 'Schnittstellentyp';

$GLOBALS["lang"]['Internal'] = 'Interne';

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

$GLOBALS["lang"]['Is FRU'] = 'Ist FRU';

$GLOBALS["lang"]['is_fru'] = 'Ist Fru';

$GLOBALS["lang"]['Is Fru'] = 'Ist Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Ist der NMIS-Server lokal (auf diesem Open-AudIT-Server) oder remote?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ist das Konto aktiv? Wenn eingestellt <code>n</code>, der Benutzer kann sich nicht anmelden.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Ist diese Aufgabe aktiviert (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Lieferung';

$GLOBALS["lang"]['issuer'] = 'Emittent';

$GLOBALS["lang"]['Issuer'] = 'Emittent';

$GLOBALS["lang"]['Issues'] = 'Emissionen';

$GLOBALS["lang"]['Italy'] = 'Italien';

$GLOBALS["lang"]['Items not in Baseline'] = 'Artikel nicht in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON zum Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Januar';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanien';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'Schlüssel';

$GLOBALS["lang"]['Key Password (optional)'] = 'Schlüsselwort (optional)';

$GLOBALS["lang"]['keys'] = 'Schlüssel';

$GLOBALS["lang"]['Keys'] = 'Schlüssel';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuba';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgisische Republik';

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

$GLOBALS["lang"]['latitude'] = 'Breite';

$GLOBALS["lang"]['Latitude'] = 'Breite';

$GLOBALS["lang"]['Latvia'] = 'Lettland';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'ANHANG';

$GLOBALS["lang"]['Ldap'] = 'ANHANG';

$GLOBALS["lang"]['ldap_base_dn'] = 'Basis Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Basis Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Kredit-Dn-Konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Kredit-Dn-Konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Passwort';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Passwort';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Ablaufdatum';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Ablaufdatum';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Rechtliche Anforderungen';

$GLOBALS["lang"]['Legal Requirements'] = 'Rechtliche Anforderungen';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Weniger als';

$GLOBALS["lang"]['Less Than or Equals'] = 'Weniger als oder Gleiche';

$GLOBALS["lang"]['level'] = 'Ebene';

$GLOBALS["lang"]['Level'] = 'Ebene';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyen Arabische Jamahiriya';

$GLOBALS["lang"]['License'] = 'Lizenz';

$GLOBALS["lang"]['License Key'] = 'Lizenzschlüssel';

$GLOBALS["lang"]['License Required'] = 'Lizenz erforderlich';

$GLOBALS["lang"]['licenses'] = 'Lizenzen';

$GLOBALS["lang"]['Licenses'] = 'Lizenzen';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Wie';

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

$GLOBALS["lang"]['link'] = 'Link zur Seite';

$GLOBALS["lang"]['Link'] = 'Link zur Seite';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Erweitert)';

$GLOBALS["lang"]['linked_row'] = 'Linked Row';

$GLOBALS["lang"]['Linked Row'] = 'Linked Row';

$GLOBALS["lang"]['linked_table'] = 'Linke Tabelle';

$GLOBALS["lang"]['Linked Table'] = 'Linke Tabelle';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Links diese Entdeckung zur zugehörigen Cloud (falls erforderlich). Links zu <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links zu <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links zu <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links zu <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['list_table_format'] = 'Tabelle Format';

$GLOBALS["lang"]['List Table Format'] = 'Tabelle Format';

$GLOBALS["lang"]['Lithuania'] = 'Litauen';

$GLOBALS["lang"]['Load Balancing'] = 'Last Balancing';

$GLOBALS["lang"]['Local'] = 'Ort';

$GLOBALS["lang"]['Local Area Network'] = 'Lokales Netzwerk';

$GLOBALS["lang"]['local_port'] = 'Lokaler Hafen';

$GLOBALS["lang"]['Local Port'] = 'Lokaler Hafen';

$GLOBALS["lang"]['Localhost'] = 'Lokalität';

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

$GLOBALS["lang"]['locations'] = 'Standorte';

$GLOBALS["lang"]['Locations'] = 'Standorte';

$GLOBALS["lang"]['Locations in this'] = 'Standorte in diesem';

$GLOBALS["lang"]['log'] = 'Protokoll';

$GLOBALS["lang"]['Log'] = 'Protokoll';

$GLOBALS["lang"]['log_format'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Log Format'] = 'Passwort vergessen?';

$GLOBALS["lang"]['log_path'] = 'Logischer Pfad';

$GLOBALS["lang"]['Log Path'] = 'Logischer Pfad';

$GLOBALS["lang"]['log_rotation'] = 'Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Rotation';

$GLOBALS["lang"]['log_status'] = 'Anmelden';

$GLOBALS["lang"]['Log Status'] = 'Anmelden';

$GLOBALS["lang"]['Logical Cores '] = 'Logische Kerne ';

$GLOBALS["lang"]['logical_count'] = 'Logischer Zähler';

$GLOBALS["lang"]['Logical Count'] = 'Logischer Zähler';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Länge';

$GLOBALS["lang"]['Longitude'] = 'Länge';

$GLOBALS["lang"]['Low'] = 'Niedrig';

$GLOBALS["lang"]['Lower Case'] = 'Rechtssache';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-Adresse';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Hersteller';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Adresse';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Mazedonien';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Wartungsausfälle';

$GLOBALS["lang"]['Maintenance Expires'] = 'Wartungsausfälle';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Malediven';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage in NMIS'] = 'Verwalten in NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Passende Streichung';

$GLOBALS["lang"]['Match String'] = 'Passende Streichung';

$GLOBALS["lang"]['Matching Attribute'] = 'Passendes Attribut';

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

$GLOBALS["lang"]['Mexico'] = 'Mexiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesien';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikrozeit';

$GLOBALS["lang"]['Microtime'] = 'Mikrozeit';

$GLOBALS["lang"]['migrations'] = 'Migration';

$GLOBALS["lang"]['Migrations'] = 'Migration';

$GLOBALS["lang"]['minute'] = 'Minuten';

$GLOBALS["lang"]['Minute'] = 'Minuten';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokolle Seit letztem Audit sind größer als';

$GLOBALS["lang"]['model'] = 'Modell';

$GLOBALS["lang"]['Model'] = 'Modell';

$GLOBALS["lang"]['model_family'] = 'Modell Familie';

$GLOBALS["lang"]['Model Family'] = 'Modell Familie';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Modul Index';

$GLOBALS["lang"]['Module Index'] = 'Modul Index';

$GLOBALS["lang"]['Moldova'] = 'Moldau';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Montag';

$GLOBALS["lang"]['Mongolia'] = 'Mongolei';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Monat';

$GLOBALS["lang"]['Month'] = 'Monat';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['motherboard'] = 'Mutterschaft';

$GLOBALS["lang"]['Motherboard'] = 'Mutterschaft';

$GLOBALS["lang"]['mount_point'] = 'Auf Lager';

$GLOBALS["lang"]['Mount Point'] = 'Auf Lager';

$GLOBALS["lang"]['mount_type'] = 'Bauart';

$GLOBALS["lang"]['Mount Type'] = 'Bauart';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Muss auf Ping reagieren';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'HINWEIS - Sie können verhindern, dass einzelne Text-Anmeldeinformationen unten angezeigt werden, indem Sie das Konfigurationselement für <code>decrypt_credentials</code> bis <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name';

$GLOBALS["lang"]['Name'] = 'Name';

$GLOBALS["lang"]['namespace'] = 'Name und Name';

$GLOBALS["lang"]['Namespace'] = 'Name und Name';

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

$GLOBALS["lang"]['Network'] = 'Netzwerk';

$GLOBALS["lang"]['network_address'] = 'Netzwerkadresse';

$GLOBALS["lang"]['Network Address'] = 'Netzwerkadresse';

$GLOBALS["lang"]['network_domain'] = 'Netzwerk Domain';

$GLOBALS["lang"]['Network Domain'] = 'Netzwerk Domain';

$GLOBALS["lang"]['Network Types'] = 'Netzwerktypen';

$GLOBALS["lang"]['networks'] = 'Netzwerke';

$GLOBALS["lang"]['Networks'] = 'Netzwerke';

$GLOBALS["lang"]['Networks Generated By'] = 'Netzwerke, die von';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netzwerke mit einer CIDR Maske von';

$GLOBALS["lang"]['New Building Name'] = 'Neues Gebäude Name';

$GLOBALS["lang"]['New Caledonia'] = 'Neukaledonien';

$GLOBALS["lang"]['New Floor Name'] = 'Name des neuen Bodens';

$GLOBALS["lang"]['New Room Name'] = 'Neues Zimmer Name';

$GLOBALS["lang"]['New Row Name'] = 'Neuer Name';

$GLOBALS["lang"]['New Zealand'] = 'Neuseeland';

$GLOBALS["lang"]['next_hop'] = 'Nächster Schritt';

$GLOBALS["lang"]['Next Hop'] = 'Nächster Schritt';

$GLOBALS["lang"]['next_run'] = 'Nächster Run';

$GLOBALS["lang"]['Next Run'] = 'Nächster Run';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Nitrat';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

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

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Keine';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Nördliche Marianen';

$GLOBALS["lang"]['Norway'] = 'Norwegen';

$GLOBALS["lang"]['Not Applicable'] = 'Nicht anwendbar';

$GLOBALS["lang"]['Not Checked'] = 'Nicht geprüft';

$GLOBALS["lang"]['Not Equals'] = 'Nicht gleich';

$GLOBALS["lang"]['Not In'] = 'Nicht in';

$GLOBALS["lang"]['Not Like'] = 'Nicht mögen';

$GLOBALS["lang"]['Not Set'] = 'Nicht eingestellt';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Nicht normal verwendet. Wenn eingestellt, erfordert dies das Gerät einen offenen Port (nach Scanoptionen) als Antwort zu haben. Eine MAC-Adresse, arp-Antwort oder Ping-Antwort wird nicht als ausreichend angesehen, um als Antwort zu gelten. Nützlich, wenn ein Router oder eine Firewall zwischen dem Open-AudIT Server und der Ziel-IP auf Portscans im IPs-Namen reagiert.';

$GLOBALS["lang"]['Note'] = 'Anmerkung';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Hinweis - Die Auswahl eines Elternteils ermöglicht automatisch den Zugang zu seinen Kindern (obwohl es hier nicht angezeigt wird).';

$GLOBALS["lang"]['Notes'] = 'Anmerkungen';

$GLOBALS["lang"]['notes'] = 'Anmerkungen';

$GLOBALS["lang"]['Notice'] = 'Mitteilung';

$GLOBALS["lang"]['notin'] = 'nicht';

$GLOBALS["lang"]['Notin'] = 'nicht';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['ORDER BY'] = 'BINNENMARKT';

$GLOBALS["lang"]['OS'] = 'Sicherheit';

$GLOBALS["lang"]['OS Families'] = 'OS Familien';

$GLOBALS["lang"]['OS Family'] = 'OS Familie';

$GLOBALS["lang"]['OS Group'] = 'OS Gruppe';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objekt Ident';

$GLOBALS["lang"]['October'] = 'Oktober';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Auf';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Einer von <code>3x2</code>, <code>4x2</code>, <code>4x3</code> oder <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Einer der Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Netzwerk, Virtuelles Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Eine Entwicklung, Katastrophenrettung, Evaluation, Vorproduktion, Produktion, Testing, Training, Benutzerakzeptanztest';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Einer der zugewiesenen, delegierten, Planung, reserviert, nicht zugewiesen, unbekannt, nicht verwaltet. Defaults zugeteilt.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Einer von beiden <code>active directory</code> oder <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Einer von: Antivirus, Backup, Firewall, genehmigt, verboten, ignoriert oder andere.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Dokumentation';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT Community';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Geräteauswahl';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Feldname';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Lizenzen';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Optionen';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap wird installiert';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Benutzer Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Benutzer Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['open|filtered'] = 'Freigefiltert';

$GLOBALS["lang"]['Open|filtered'] = 'Freigefiltert';

$GLOBALS["lang"]['Operating System'] = 'Betriebssystem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Betriebssystem Familienbezüge';

$GLOBALS["lang"]['Operating Systems'] = 'Betriebssysteme';

$GLOBALS["lang"]['optical'] = 'optisch';

$GLOBALS["lang"]['Optical'] = 'optisch';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optionale Version als von Open-AudIT geprüft. Verwenden Sie das prozentuale Zeichen % als Wildcard.';

$GLOBALS["lang"]['options'] = 'Optionen';

$GLOBALS["lang"]['Options'] = 'Optionen';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Oder wählen Sie aus den folgenden Feldern.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Org-ID';

$GLOBALS["lang"]['Org ID'] = 'Org-ID';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

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

$GLOBALS["lang"]['Others'] = 'Sonstige';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Unser Timeout für eine SSH Antwort';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Unser Timeout für eine WMI-Reaktion';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Unser Timeout für eine SNMP Antwort';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Unser Timeout für eine Prüfungsskriptantwort';

$GLOBALS["lang"]['output'] = 'Ausgabe';

$GLOBALS["lang"]['Output'] = 'Ausgabe';

$GLOBALS["lang"]['outputs'] = 'Ausgänge';

$GLOBALS["lang"]['Outputs'] = 'Ausgänge';

$GLOBALS["lang"]['overwrite'] = 'Überschrift';

$GLOBALS["lang"]['Overwrite'] = 'Überschrift';

$GLOBALS["lang"]['owner'] = 'Eigentümer';

$GLOBALS["lang"]['Owner'] = 'Eigentümer';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POSITIONEN';

$GLOBALS["lang"]['package'] = 'Paket';

$GLOBALS["lang"]['Package'] = 'Paket';

$GLOBALS["lang"]['packages'] = 'Pakete';

$GLOBALS["lang"]['Packages'] = 'Pakete';

$GLOBALS["lang"]['pagefile'] = 'Seite';

$GLOBALS["lang"]['Pagefile'] = 'Seite';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palais';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palästinensische Autonomiebehörde';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Neuguinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

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

$GLOBALS["lang"]['password'] = 'Passwort vergessen?';

$GLOBALS["lang"]['Password'] = 'Passwort vergessen?';

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

$GLOBALS["lang"]['permission'] = 'Genehmigung';

$GLOBALS["lang"]['Permission'] = 'Genehmigung';

$GLOBALS["lang"]['permissions'] = 'Genehmigungen';

$GLOBALS["lang"]['Permissions'] = 'Genehmigungen';

$GLOBALS["lang"]['Personal Area Network'] = 'Personalbereich Netzwerk';

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

$GLOBALS["lang"]['ping'] = 'Plüsch';

$GLOBALS["lang"]['Ping'] = 'Plüsch';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcair-Inseln';

$GLOBALS["lang"]['placement'] = 'Platzierung';

$GLOBALS["lang"]['Placement'] = 'Platzierung';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Bitte haben Sie ein Open-AudIT-Administrator angemeldet und aktualisieren Sie die Datenbank.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bitte beachten Sie, dass die Auswahlbox das Eingabefeld überschreiben wird.';

$GLOBALS["lang"]['Please set using'] = 'Bitte setzen Sie mit';

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

$GLOBALS["lang"]['Polite'] = 'Polit';

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

$GLOBALS["lang"]['position'] = 'Position';

$GLOBALS["lang"]['Position'] = 'Position';

$GLOBALS["lang"]['postcode'] = 'Postleitzahl';

$GLOBALS["lang"]['Postcode'] = 'Postleitzahl';

$GLOBALS["lang"]['power_circuit'] = 'Stromkreis';

$GLOBALS["lang"]['Power Circuit'] = 'Stromkreis';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

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

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Programm';

$GLOBALS["lang"]['Program'] = 'Programm';

$GLOBALS["lang"]['protocol'] = 'Protokoll';

$GLOBALS["lang"]['Protocol'] = 'Protokoll';

$GLOBALS["lang"]['provider'] = 'Anbieter';

$GLOBALS["lang"]['Provider'] = 'Anbieter';

$GLOBALS["lang"]['published'] = 'Veröffentlicht';

$GLOBALS["lang"]['Published'] = 'Veröffentlicht';

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

$GLOBALS["lang"]['Query'] = 'Abfrage';

$GLOBALS["lang"]['queue'] = 'Frage';

$GLOBALS["lang"]['Queue'] = 'Frage';

$GLOBALS["lang"]['Queue Limit'] = 'Grenzwert für die Anforderung';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Gefragte IP-Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Items';

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

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationalität';

$GLOBALS["lang"]['Rationale'] = 'Rationalität';

$GLOBALS["lang"]['read'] = 'Weiterlesen';

$GLOBALS["lang"]['Read'] = 'Weiterlesen';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lesen Sie unsere Online-Dokumentation über das Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Rote Abfrage';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registrierter Benutzer';

$GLOBALS["lang"]['Registered User'] = 'Registrierter Benutzer';

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

$GLOBALS["lang"]['Report'] = 'Bericht';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Bericht über Ihre Geräte, Netzwerke und mehr';

$GLOBALS["lang"]['reportable'] = 'Berichterstattung';

$GLOBALS["lang"]['Reportable'] = 'Berichterstattung';

$GLOBALS["lang"]['request'] = 'Anfrage senden';

$GLOBALS["lang"]['Request'] = 'Anfrage senden';

$GLOBALS["lang"]['requested'] = 'Antrag';

$GLOBALS["lang"]['Requested'] = 'Antrag';

$GLOBALS["lang"]['require_port'] = 'Hafen suchen';

$GLOBALS["lang"]['Require Port'] = 'Hafen suchen';

$GLOBALS["lang"]['Require an Open Port'] = 'Erfordern Sie einen offenen Port';

$GLOBALS["lang"]['Required'] = 'Erforderlich';

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

$GLOBALS["lang"]['Restrict to Private'] = 'Beschränkung auf Privat';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Beschränkung auf Subnet';

$GLOBALS["lang"]['result'] = 'Ergebnis';

$GLOBALS["lang"]['Result'] = 'Ergebnis';

$GLOBALS["lang"]['Results'] = 'Ergebnisse';

$GLOBALS["lang"]['retrieved'] = 'Abrufen';

$GLOBALS["lang"]['Retrieved'] = 'Abrufen';

$GLOBALS["lang"]['retrieved_ident'] = 'zurückgerufener Ausweis';

$GLOBALS["lang"]['Retrieved Ident'] = 'zurückgerufener Ausweis';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Abrufen vom Gerät - Windows:Win32_ComputerSystemProdukt, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Wiedervereinigung';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risikobewertungsergebnis';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risikobewertungsergebnis';

$GLOBALS["lang"]['role'] = 'Rolle';

$GLOBALS["lang"]['Role'] = 'Rolle';

$GLOBALS["lang"]['roles'] = 'Roggen';

$GLOBALS["lang"]['Roles'] = 'Roggen';

$GLOBALS["lang"]['Romania'] = 'Rumänien';

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

$GLOBALS["lang"]['Run Discovery'] = 'Entdecke die Flucht';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Entdecken Sie die Geräte';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Eine Entdeckung starten und herausfinden <b>Was ist auf Ihrem Netzwerk?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Führen Sie das Kommando';

$GLOBALS["lang"]['runas'] = 'Runen';

$GLOBALS["lang"]['Runas'] = 'Runen';

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

$GLOBALS["lang"]['Save as Default'] = 'Speichern Sie den Standard';

$GLOBALS["lang"]['scaling'] = 'Skalierung';

$GLOBALS["lang"]['Scaling'] = 'Skalierung';

$GLOBALS["lang"]['scan_options'] = 'Scanoptionen';

$GLOBALS["lang"]['Scan Options'] = 'Scanoptionen';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scannen Sie die Nmap Top-Nummer von TCP-Ports.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scannen Sie die Nmap Top-Nummer der UDP-Ports.';

$GLOBALS["lang"]['schedule'] = 'Fälligkeitsplan';

$GLOBALS["lang"]['Schedule'] = 'Fälligkeitsplan';

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

$GLOBALS["lang"]['Search for Device'] = 'Suche nach Gerät';

$GLOBALS["lang"]['secondary'] = 'Sekundär';

$GLOBALS["lang"]['Secondary'] = 'Sekundär';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundärtext';

$GLOBALS["lang"]['section'] = 'Abschnitt';

$GLOBALS["lang"]['Section'] = 'Abschnitt';

$GLOBALS["lang"]['secure'] = 'Sicher';

$GLOBALS["lang"]['Secure'] = 'Sicher';

$GLOBALS["lang"]['Security Name'] = 'Sicherheitsname';

$GLOBALS["lang"]['Security Status'] = 'Sicherheitsstatus';

$GLOBALS["lang"]['security_zone'] = 'Sicherheitszone';

$GLOBALS["lang"]['Security Zone'] = 'Sicherheitszone';

$GLOBALS["lang"]['seed_ip'] = 'Siehe IP';

$GLOBALS["lang"]['Seed IP'] = 'Siehe IP';

$GLOBALS["lang"]['seed_ping'] = 'Siehe Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Siehe Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Gesehene Einschränkung zu Privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Gesehene Einschränkung zu Privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Siehe Beschränkung auf Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Siehe Beschränkung auf Subnet';

$GLOBALS["lang"]['Select'] = 'Wählen';

$GLOBALS["lang"]['Select All'] = 'Alle anzeigen';

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

$GLOBALS["lang"]['Select a Table'] = 'Wählen Sie eine Tabelle';

$GLOBALS["lang"]['Senegal'] = 'Schweden';

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

$GLOBALS["lang"]['Servers'] = 'Server';

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

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'In Ordnung';

$GLOBALS["lang"]['Set By'] = 'In Ordnung';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Legen Sie die Größe (normal oder kompakt) der Tabellen auf den Listen-Bildschirmen.';

$GLOBALS["lang"]['severity'] = 'Schwere';

$GLOBALS["lang"]['Severity'] = 'Schwere';

$GLOBALS["lang"]['severity_text'] = 'Severity Text';

$GLOBALS["lang"]['Severity Text'] = 'Severity Text';

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

$GLOBALS["lang"]['short'] = 'Kurz';

$GLOBALS["lang"]['Short'] = 'Kurz';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Sollte ich alle nicht aktuellen Daten von diesem Gerät entfernen?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Sollte diese Datei (oder Muster) verwendet werden, um Dateien von der Meldung auszuschließen. Normalerweise, um Dateien zu überprüfen, ist dies auf <code>y</code>.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Sollten wir Geräte aus dem Ferndienst hinzufügen, lokal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Sollten wir diese Lizenz sowohl auf den ausgewählten Org als auch auf die Orgs Kinder anwenden?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Sollten wir einen gefilterten Port als offener Port betrachten - und damit diese IP als mit einem Gerät verbunden markieren?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Sollten wir einen openfilterfiltrierten Port als einen offenen Port betrachten - und damit diese IP als ein Gerät angehängt haben?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Sollten wir diese Gruppe in der Web-Schnittstelle aussetzen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Sollten wir diese Abfrage in der Liste der Berichte unter dem Bericht-Menü in der Web-Schnittstelle ausstellen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Sollten wir diese Abfrage in der Liste der Berichte unter dem Menü Berichte in der Web-Schnittstelle aussetzen.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Sollten wir ein Audit durchführen und es einreichen (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Sollten wir SNMP mit UDP-Port 161 testen.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Sollten wir SSH mit TCP-Port 22 testen.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Sollten wir mit TCP-Port 135 auf WMI testen.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Sollten wir den Agenten deinstallieren (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Sollten wir diese Methode verwenden, um Benutzerinformationen zu authentifizieren. Angepasst <code>y</code> oder <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Sollten wir diese Methode verwenden, um eine Benutzerrolle zu bevölkern. Das Feld <code>use_auth</code> muss eingestellt werden <code>y</code> das zu benutzen. Angepasst <code>y</code> oder <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slowakei (lowakische Republik)';

$GLOBALS["lang"]['Slovenia'] = 'Slowenien';

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

$GLOBALS["lang"]['socket'] = 'Sockel';

$GLOBALS["lang"]['Socket'] = 'Sockel';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software gefunden Letzte 7 Tage';

$GLOBALS["lang"]['Software Found Today'] = 'Software heute gefunden';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software wurde gestern gefunden';

$GLOBALS["lang"]['software_key'] = 'Softwareschlüssel';

$GLOBALS["lang"]['Software Key'] = 'Softwareschlüssel';

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

$GLOBALS["lang"]['started_date'] = 'Datum';

$GLOBALS["lang"]['Started Date'] = 'Datum';

$GLOBALS["lang"]['state'] = 'Staat';

$GLOBALS["lang"]['State'] = 'Staat';

$GLOBALS["lang"]['Stats'] = 'Stäbe';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Lagerung';

$GLOBALS["lang"]['storage_count'] = 'Speicherzähler';

$GLOBALS["lang"]['Storage Count'] = 'Speicherzähler';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Netzwerk';

$GLOBALS["lang"]['string'] = 'Streichung';

$GLOBALS["lang"]['String'] = 'Streichung';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Typ';

$GLOBALS["lang"]['Sub Type'] = 'Typ';

$GLOBALS["lang"]['Submit'] = 'Einreichung';

$GLOBALS["lang"]['Submitted From'] = 'Eingestellt von';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'Anmelden';

$GLOBALS["lang"]['suburb'] = 'Suburs';

$GLOBALS["lang"]['Suburb'] = 'Suburs';

$GLOBALS["lang"]['Success'] = 'Erfolg';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Passwort (optional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Summe';

$GLOBALS["lang"]['Summaries'] = 'Summe';

$GLOBALS["lang"]['summary'] = 'Zusammenfassung';

$GLOBALS["lang"]['Summary'] = 'Zusammenfassung';

$GLOBALS["lang"]['Sunday'] = 'Sonntag';

$GLOBALS["lang"]['supplier'] = 'Lieferant';

$GLOBALS["lang"]['Supplier'] = 'Lieferant';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Unterstützte Typen sind <code>subnet</code>, <code>seed</code> und <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Inseln';

$GLOBALS["lang"]['Swaziland'] = 'Swasiland';

$GLOBALS["lang"]['Sweden'] = 'Schweden';

$GLOBALS["lang"]['switch_device_id'] = 'Schalter Geräte-ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Schalter Geräte-ID';

$GLOBALS["lang"]['switch_port'] = 'Schalter';

$GLOBALS["lang"]['Switch Port'] = 'Schalter';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Schweiz, Schweizerische Eidgenossenschaft';

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

$GLOBALS["lang"]['table'] = 'Tabelle';

$GLOBALS["lang"]['Table'] = 'Tabelle';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Schlagwörter';

$GLOBALS["lang"]['Tags'] = 'Schlagwörter';

$GLOBALS["lang"]['Tags :: '] = 'Schlagworte:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadschikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tansania';

$GLOBALS["lang"]['task'] = 'Aufgaben';

$GLOBALS["lang"]['Task'] = 'Aufgaben';

$GLOBALS["lang"]['tasks'] = 'Aufgaben';

$GLOBALS["lang"]['Tasks'] = 'Aufgaben';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Spannkraft';

$GLOBALS["lang"]['Tenant'] = 'Spannkraft';

$GLOBALS["lang"]['ternary'] = 'Laufzeit';

$GLOBALS["lang"]['Ternary'] = 'Laufzeit';

$GLOBALS["lang"]['Test 1'] = 'Prüfung 1';

$GLOBALS["lang"]['Test 2'] = 'Prüfung 2';

$GLOBALS["lang"]['Test 3'] = 'Prüfung 3';

$GLOBALS["lang"]['test_minutes'] = 'Prüfprotokolle';

$GLOBALS["lang"]['Test Minutes'] = 'Prüfprotokolle';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Prüfungen';

$GLOBALS["lang"]['Tests'] = 'Prüfungen';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Die Active Directory-Domain, um eine Liste von Subnets aus.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Der Active Directory-Server, um eine Liste von Subnets aus.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Die Cloud, die diesen Artikel besitzt. Links zu <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Die ISP oder Telco bieten diesen Link.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Der LDAP OU dieses Benutzers (wenn LDAP verwendet wird).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Der Ort, der dieses Netzwerk enthält. Links zu <code>locations.id</code>.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Das Nmap Timing Preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Das OS dieses Paket sollte berichtet werden. Blank für alle. Verwenden Sie das prozentuale Zeichen % als Wildcard. Wird in dieser Reihenfolge gegen os_group, os_family und os_name getestet.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Die Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Die Open-AudIT-ID der verknüpften Cloud. Links zu <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Der Open-Aud Der IT-Servercode wurde in dieser Datei ausgenutzt.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Der Open-Aud In dieser Funktion wurde der IT-Servercode ausgenutzt.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Die Organisation, die diesen Artikel besitzt. Links zu <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Der Prozess-Identifier der laufenden zugehörigen Entdeckung.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Das RU-Lager der Oberseite dieses Gerätes.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Die SNMP Community-String.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Die SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Das SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Die SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Das SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Die Sicherheitsstufe SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Der Sicherheitsname SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Der SNMPv3-Kontext Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Der SNMPv3 Kontext Name (optional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Die URL des externen Systems.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Die URL Ihres Open-AudIT Server, den dieser Collector melden wird (kein nachlaufender Slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Die URL der Audit-Skripte sollte ihr Ergebnis einreichen.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Der eigentliche vollständige Name dieses Benutzers.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Die zugehörige Basislinie. Links zu <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Die zugehörige Entdeckung (falls erforderlich). Links zu <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Das Attribut zum Testen (aus dem <code>devices</code> Tabelle';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Das Attribut zum Testen (muss einen externen Feldnamen von unten entsprechen).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Das Audit-Skript, auf dem Ihre Anpassungen basieren.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Der Basispfad, von dem aus Sie nach Benutzern suchen.';

$GLOBALS["lang"]['The benchmark type.'] = 'Der Benchmark-Typ.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Das Gebäude der Rack befindet sich in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Die berechnete Anzahl der extern zu erstellenden Geräte.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Die berechnete Anzahl der in Open-AudIT zu erstellenden Geräte.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Die Kollektoren intern IP verwendet, wenn es eine Entdeckung läuft.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Der Spaltenname aus dem Auslandstisch. Sollte eine von: Klasse, Umgebung, Status, Typ oder Menu_Kategorie sein.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Der Befehl, der auf dem Zielgerät oder Open-AudIT Servercode ausgeführt wird, der während der Entdeckung ausgeführt wird.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Die Konfiguration Ihres Clusters kann sein: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> oder leer.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Das Anmelde-Passwort. Wenn die Anmeldeinformationen ein SSH Key sind, ist dies das Passwort, das verwendet wird, um den Schlüssel zu entsperren und optional ist.';

$GLOBALS["lang"]['The credentials username.'] = 'Die Anmeldeinformationen Benutzername.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Der aktuelle Status der Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Der aktuelle Status der Entdeckung.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Das Dashboard, das für diesen Benutzer standardmäßig angezeigt wird. Links zu <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Die Datenbank-Version und Web-Version sind inkonsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Das Datum der Lizenzlaufzeit.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Das Datum, an dem die Software vom Hersteller eingestellt wird. Normalerweise ersetzt durch eine neuere Version. Wartung kann noch verfügbar sein.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Das Datum, an dem die Software keine Updates mehr erhält, wird vollständig abgebrochen. Die Wartung wird eingestellt.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Das Datum dieses Artikels wurde geändert oder hinzugefügt (nur lesen). HINWEIS - Dies ist der Zeitstempel vom Server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datum/Zeit, als dieses Ergebnis erstellt wurde.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Der Tag des Monats, in dem diese Aufgabe ausgeführt werden soll (* für jeden Tag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Der Tag der Woche, an dem diese Aufgabe ausgeführt werden soll (* für jeden Tag).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Die Standardsprache, die jedem Benutzer zugewiesen wird, der nach dieser Methode erstellt wurde.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Das Gerät muss auf eine Nmap-Ping reagieren, bevor es online betrachtet wird.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Das Gerät innerhalb von Open-AudIT. Links zu <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Der direkte Link zum Skript ist';

$GLOBALS["lang"]['The email address of the reciever'] = 'Die E-Mail-Adresse des Revers';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Die gesamte zugeordnete Basislinie stammt aus.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Die extern referenzierte Standort-ID. Üblicherweise von Cloud-Audits besiedelt.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Das erste Mal, dass Open-AudIT Details dieses Geräts abgerufen.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Der Boden der Rack befindet sich auf.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Die ausländische Tabelle zur Referenz. Sollte eines von: Geräten, Standorte, Orgs oder Abfragen sein.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Das Format, das für die Ausgabe verwendet wird, ist per E-Mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Die vollständig qualifizierte Spalte, nach der sie sich gliedern kann. HINWEIS: Wenn Typ = Verkehr, stellt dies die rote Abfrage id dar.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Die vollqualifizierte Tabelle. Spalte. Mehrere können vorgesehen sein, getrennt durch eine Komma (keine Räume).';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Die Gruppe der Geräte, an denen die Basislinie betrieben wurde.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Die Gruppe, die eine Liste von Geräten für die Integration bietet. Links zu <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Die Stunde des Tages, an dem diese Aufgabe ausgeführt werden soll (* für jede Stunde).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Die ID des verlinkten Geräts. Links zu <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Die Kennung Spalte (Integer) in der Datenbank (nur lesen).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Die Bedeutung dieser Basislinie (noch nicht genutzt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Die ganze Zahl der Schwere.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Die ip-Adresse der Auth-Methode.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Die Sprache, die Web-Schnittstelle für den Benutzer zu übersetzen.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Das letzte Datum und die Uhrzeit dieses Artikels wurden ausgeführt (nur lesen).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Das letzte Mal, dass Open-AudIT Details dieses Geräts abgerufen.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Das letzte Mal, dass diese Benchmarks ausgeführt wurden.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Letztes Mal wurde diese Integration durchgeführt.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Das maximale physikalische Gewicht (in KGs) dieses Regal kann halten.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Die maximale Gesamt-BTUs dieses Rack ist für.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Die Minute der Stunde, in der diese Aufgabe ausführen sollte (* für jede Minute).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Der Monat des Jahres, in dem diese Aufgabe ausgeführt werden soll (* für jeden Monat).';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Der Name dieses Artikels. Idealerweise sollte es einzigartig sein.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Der Name, der diesem Benutzer angegeben wurde (zur Anmeldung). Idealerweise sollte es einzigartig sein.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Der Name der zugehörigen Cloud (falls erforderlich).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Der Name des Softwarepakets, wie von Open-AudIT geprüft. Verwenden Sie das prozentuale Zeichen % als Wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Der Name des Benutzers, der diesen Artikel zuletzt geändert oder hinzugefügt hat (nur lesen).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Der Name des Anbieters.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Das Netzwerk im Format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Das Netzwerk-Subnetz, um die Entdeckung durchzuführen.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Die Anzahl der RUs dieses Gerät besetzt.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Die Anzahl der zugehörigen Standorte. Links zu <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Die Anzahl der zugehörigen Netze. Links zu <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Die Anzahl der geprüften Geräte in dieser Cloud. Links zu <code>devices.cloud_id</code> und <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Die Anzahl der von dieser Entdeckung gefundenen Geräte.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Die Anzahl der Geräte in der zugehörigen Gruppe.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Die Anzahl der Geräte in dieser Cloud mit einem Zustand des Laufens. Links zu <code>devices.cloud_id</code> und <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Die Anzahl der Geräte in dieser Cloud mit einem Stand. Links zu <code>devices.cloud_id</code> und <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Die Anzahl der Geräte in dieser Cloud. Links zu <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Die Anzahl der Geräte, auf denen dieser Benchmark ausgeführt wird. Abgeleitet von <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Die Anzahl der Geräte, um diese Entdeckung zu begrenzen.';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Anzahl der erworbenen Lizenzen.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Die Anzahl der Sekunden, um mit der Ziel-IP zu kommunizieren.';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Die optionale Sekundärspalte. HINWEIS: Wenn Typ = Verkehr, stellt dies die gelbe Abfrage id dar.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Die optionale dritte Spalte. HINWEIS: Wenn Typ = Verkehr, stellt dies die grüne Abfrage id dar.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Die Orientierung dieser Vorrichtung.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Die Prozesskennung dieser Warteschlange.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Der Prozess, der zuletzt verwendet wurde, um Details über das Gerät abzurufen';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Die Abfrage, die eine Liste von Geräten für die Integration bietet. Links zu <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Die Rack-Assetnummer.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Das Rack Asset-Tag.';

$GLOBALS["lang"]['The rack bar code.'] = 'Der Rack-Barcode.';

$GLOBALS["lang"]['The rack model.'] = 'Das Regalmodell.';

$GLOBALS["lang"]['The rack serial.'] = 'Das Regal seriell.';

$GLOBALS["lang"]['The rack series.'] = 'Die Rackserie.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Das Regal dieses Gerät befindet sich in. Links zu <code>racks.id</code>.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Die reguläre Domain-Notation Ihres Verzeichnisses. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Das Ergebnis des Befehls.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Das Zimmer, in dem sich das Regal befindet.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'In der Reihe befindet sich das Regal.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Der geheime Schlüssel in Verbindung mit Ihrem AWS EC2 API Schlüssel verwendet.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Das Software-End-of-Life-Datum.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Das Software-End-of-Service-Lebensdatum.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Die spezifische Datenbankspalte aus der angegebenen Datenbanktabelle.';

$GLOBALS["lang"]['The specific database table.'] = 'Die spezifische Datenbanktabelle.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Die standardmäßigen Nmap Timing-Optionen. Normalerweise verwenden wir -T4 (Aggressiv), da dies für eine anständige Breitband- oder Ethernet-Verbindung empfohlen wird.';

$GLOBALS["lang"]['The status of this integration'] = 'Der Status dieser Integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'Der Status dieses gelöschten Gegenstands.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Das Ziel IP dieser Protokolleintragsverweise auf (falls vorhanden).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Die Vorlage für den Link pro Ergebniszeile generiert werden.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Der Text für den unteren Teil des Diagramms in einem Zeilendiagramm (nur).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Der Text, der angezeigt wird.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2001-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Danach sollte diese Aufgabe laufen. Führen Sie beispielsweise eine Aufgabe nach dem 1. Juni 2017 um 10 Uhr aus, setzen Sie sie auf <code>2017-06-01 09:59:00</code>. Dieser Wert sollte null gepolstert sein (d.h. 09, nicht 9). Dieser Wert wird standardmäßig <code>2001-01-01 00:00:00</code> Das bedeutet standardmäßig, eine geplante Aufgabe wird zur nächsten geplanten Ausführungszeit ausgeführt.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Die Top 10, 100 oder 1000 (oder keine) TCP-Ports, die üblicherweise gemäß Nmap verwendet werden.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Die Top 10, 100 oder 1000 (oder keine) UDP-Ports, die üblicherweise gemäß Nmap verwendet werden.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Die gesamte BTU wird von diesem Rack ausgegeben.';

$GLOBALS["lang"]['The type of device.'] = 'Die Art des Geräts.';

$GLOBALS["lang"]['The type of organisation.'] = 'Die Art der Organisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Die Art des Racks (Compute, Power, Netzwerk usw.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Die Art der Aufgabe zu laufen. Einer von: Basis, Benchmark, Cloud-Erkennung, Entdeckung, Integration, Bericht, Abfrage.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Typ der Integration (in der Regel nach dem externen System benannt).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Die eindeutige Kennung dieses Servers.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Das Benutzerkonto dieses Sammlers. Links zu <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Der Benutzername für den Zugriff auf das externe System.';

$GLOBALS["lang"]['The users email address.'] = 'Die Benutzer-E-Mail-Adresse.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Die üblichen Betriebsstunden an dieser Stelle.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Der dem Gegenstand zugeordnete Wert.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Der für diesen bestimmten Artikel gespeicherte Wert.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Das Web-Verzeichnis auf dem Host, das Open-AudIT installiert ist (erfordert einen nachlaufenden Slash).';

$GLOBALS["lang"]['The widget at position '] = 'Das Widget an Position ';

$GLOBALS["lang"]['The width of this device.'] = 'Die Breite dieser Vorrichtung.';

$GLOBALS["lang"]['Then'] = 'Dann';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Dieses Attribut wird als JSON-Objekt gespeichert. Es ist die Liste aller Sammlungen und enthält den Sammelnamen zusammen mit <code>c</code>, <code>r</code>, <code>u</code> und <code>d</code> die erstellen, lesen, aktualisieren und löschen. Dies sind die Aktionen, die ein Benutzer auf Gegenständen aus dieser bestimmten Sammlung ausführen kann.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dies kann entweder ein Varchar (ein Textfeld), eine Liste (eine Liste von Werten, die ausgewählt werden können) oder ein Datum sein.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Diese Kollektoren universell einzigartige Kennung.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Diese Beschreibung ist autopopuliert und sollte idealerweise as-is gelassen werden.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Diese Funktion erfordert eine Professional- oder eine Enterprise-Lizenz.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dies ist in der Regel die Primärspalte, sofern nicht anders konfiguriert. HINWEIS: Wenn Typ = Verkehr, stellt dies den Sekundärtext dar.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dieser Punkt muss dem Wert des ausgewählten Attributs entsprechen oder die ID der zu verwendenden Abfrage enthalten.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dieser Punkt muss dem Wert des ausgewählten Attributs entsprechen.';

$GLOBALS["lang"]['This license expires on'] = 'Diese Lizenz läuft ab';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dies sollte entweder auf 1 oder die Höhe des Regals eingestellt werden.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Das wird automatisch bevölkert.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dies wird den Entdeckungssscan erheblich verlangsamen.';

$GLOBALS["lang"]['Thursday'] = 'Donnerstag';

$GLOBALS["lang"]['time'] = 'Zeit';

$GLOBALS["lang"]['Time'] = 'Zeit';

$GLOBALS["lang"]['time_caption'] = 'Zeiterfassung';

$GLOBALS["lang"]['Time Caption'] = 'Zeiterfassung';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Zeit zum Ausführen';

$GLOBALS["lang"]['timeout'] = 'Zeit';

$GLOBALS["lang"]['Timeout'] = 'Zeit';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per Target (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Die Zeit der Zeit';

$GLOBALS["lang"]['Timestamp'] = 'Zeitstempel';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Der Stil der Liebe';

$GLOBALS["lang"]['Toolbar Style'] = 'Der Stil der Liebe';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditionelle chinesische';

$GLOBALS["lang"]['Traffic Light'] = 'Verkehr Licht';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad und Tobago';

$GLOBALS["lang"]['Tuesday'] = 'Dienstag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesien';

$GLOBALS["lang"]['Turkey'] = 'Türkei';

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

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['uid'] = 'NACHRICHTEN';

$GLOBALS["lang"]['Uid'] = 'NACHRICHTEN';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

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

$GLOBALS["lang"]['updated_at'] = 'Aktualisiert bei';

$GLOBALS["lang"]['Updated At'] = 'Aktualisiert bei';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Aktualisierte jedes Mal Entdeckung wurde mit IPs erkannt zu reagieren.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aktualisierte jedes Mal Entdeckung wurde mit IPs ausgeführt, die von Nmap gescannt wurden.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Jedes Mal, wenn die Entdeckung mit Geräten durchgeführt wurde, konnten wir überprüfen.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Jedes Mal, wenn die Entdeckung mit Geräten durchgeführt wurde, konnten wir abfragen.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Jedes Mal wurde die Entdeckung aktualisiert.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aktualisiert jedes Mal, wenn die Entdeckung ausgeführt wurde.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aktualisiert jedes Mal, wenn die Entdeckung die Ausführung abgeschlossen hat.';

$GLOBALS["lang"]['Upgrade'] = 'Upgrade';

$GLOBALS["lang"]['Upload an audit result file'] = 'Hochladen einer Auditergebnisdatei';

$GLOBALS["lang"]['Upper Case'] = 'Rechtssache';

$GLOBALS["lang"]['uptime'] = 'Aktualisierung';

$GLOBALS["lang"]['Uptime'] = 'Aktualisierung';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, östliche Republik';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use_authentication'] = 'Verwendung Authentication';

$GLOBALS["lang"]['Use Authentication'] = 'Verwendung Authentication';

$GLOBALS["lang"]['use_authorisation'] = 'Nutzungsberechtigung';

$GLOBALS["lang"]['Use Authorisation'] = 'Nutzungsberechtigung';

$GLOBALS["lang"]['Use SNMP'] = 'Verwenden Sie SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Verwenden Sie Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Verwendung Service Version Detektion';

$GLOBALS["lang"]['Use WMI'] = 'WMI verwenden';

$GLOBALS["lang"]['Use for Authentication'] = 'Verwendung für Authentication';

$GLOBALS["lang"]['Use for Roles'] = 'Verwendung für Roles';

$GLOBALS["lang"]['used'] = 'Verwendet';

$GLOBALS["lang"]['Used'] = 'Verwendet';

$GLOBALS["lang"]['used_count'] = 'Gebraucht';

$GLOBALS["lang"]['Used Count'] = 'Gebraucht';

$GLOBALS["lang"]['used_percent'] = 'Verwendeter Prozentsatz';

$GLOBALS["lang"]['Used Percent'] = 'Verwendeter Prozentsatz';

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

$GLOBALS["lang"]['User Membership Attribute'] = 'Benutzer Mitgliedschaft Attribut';

$GLOBALS["lang"]['user_name'] = 'Benutzername';

$GLOBALS["lang"]['User Name'] = 'Benutzername';

$GLOBALS["lang"]['User Policies'] = 'Benutzerrichtlinien';

$GLOBALS["lang"]['username'] = 'Benutzername';

$GLOBALS["lang"]['Username'] = 'Benutzername';

$GLOBALS["lang"]['users'] = 'Benutzer';

$GLOBALS["lang"]['Users'] = 'Benutzer';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Üblicherweise Mb/s, ab Standort A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Normalerweise Mb/s, ab Standort B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'In der Regel Mb/s, zu Position A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'In der Regel Mb/s, nach Standort B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Usbekistan';

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

$GLOBALS["lang"]['values'] = 'Werte';

$GLOBALS["lang"]['Values'] = 'Werte';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['vendor'] = 'Verkäufer';

$GLOBALS["lang"]['Vendor'] = 'Verkäufer';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version gepolstert';

$GLOBALS["lang"]['Version Padded'] = 'Version gepolstert';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Blick';

$GLOBALS["lang"]['View All'] = 'Alle anzeigen';

$GLOBALS["lang"]['View Details'] = 'Details anzeigen';

$GLOBALS["lang"]['View Device'] = 'Gerät anzeigen';

$GLOBALS["lang"]['View Discovery'] = 'Discovery ansehen';

$GLOBALS["lang"]['View Policy'] = 'Zur Übersicht';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuelles Privates Netzwerk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisierung';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Besuchen Sie unseren YouTube-Kanal für Unterrichtsvideos.';

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

$GLOBALS["lang"]['WHERE'] = 'HINWEIS';

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

$GLOBALS["lang"]['Web'] = 'Weblink';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Willkommen bei FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Westsahara';

$GLOBALS["lang"]['what'] = 'Was?';

$GLOBALS["lang"]['What'] = 'Was?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Was ist der Zweck dieses Regals.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Was ist die Art dieses Ortes. Zulässige Typen <code>attributes</code> Tisch.';

$GLOBALS["lang"]['when'] = 'Wann';

$GLOBALS["lang"]['When'] = 'Wann';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Bei der Integration von Geräten aus dem externen System, wenn das Gerät nicht in Open-AudIT existiert, sollten wir es erstellen?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Bei der Integration von Geräten aus dem externen System, wenn das Gerät im externen System aktualisiert wurde, sollten wir es in Open-AudIT aktualisieren?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Wenn wir ein externes Gerät abrufen, sollten wir es entdecken?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Wenn dieser Benchmark ausgeführt werden soll. Abgeleitet vom zugehörigen <code>tasks.type</code> und <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Als dieses Protokoll erstellt wurde.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Wenn diese Warteschlange beginnt die Verarbeitung.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Wenn wir diese Basislinie ausführen, sollten wir nach Artikeln auf Geräten überprüfen, die nicht in einer Richtlinie für diese Basislinie sind.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Wenn wir einen offenen Port erhalten, sollten wir versuchen, auf die Version des Dienstes zu testen, der derzeit läuft? Dies hilft bei der Bestätigung der tatsächlichen laufenden Dienste.';

$GLOBALS["lang"]['where'] = 'Ort';

$GLOBALS["lang"]['Where'] = 'Ort';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Wo auf dem Bildschirm Device Details sehen Sie dieses Feld erscheinen möchten.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Wo das Regal in der Reihe ist.';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Welches Betriebssystem dieser Benchmark gilt.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Welche Geräte sollten Open-AudIT aus dem externen System (falls vorhanden) erstellen. Mit All, Keine oder einem bestimmten Attribut.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Welche Untermenüs sollten wir diese Abfrage anzeigen.';

$GLOBALS["lang"]['Who made this rack.'] = 'Wer hat das Rack gemacht.';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Warum schließen wir diese Politik aus?';

$GLOBALS["lang"]['Wide Area Network'] = 'Netzwerk für breite Bereiche';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget ';

$GLOBALS["lang"]['Widget Type'] = 'Widget-Typ';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Breite';

$GLOBALS["lang"]['Width'] = 'Breite';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Netzwerk für den lokalen Bereich';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Arbeitsgruppe';

$GLOBALS["lang"]['Workgroup'] = 'Arbeitsgruppe';

$GLOBALS["lang"]['Working Credentials'] = 'Erstellung von Arbeitsinformationen';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gelbe Querung';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ja.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Sie möchten diese URL möglicherweise in einer E-Mail an Ihr Personal kopieren und einfügen.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Sie müssen Ihre bestehende Lizenz löschen, bevor Sie eine neue Lizenz hinzufügen.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Ihr AWS EC2 API Schlüssel.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Ihre Google Compute Anmeldeinformationen als JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Ihre Lizenzen';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Ihre Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Ihr Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ihre Microsoft Azure Abonnement ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Ihre Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Ihr SQL, um Attribute auszuwählen, die diese Abfrage bevölkern.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Ihr SQL, um Geräte auszuwählen, die diese Gruppe bevölkern.';

$GLOBALS["lang"]['Your SSH key.'] = 'Ihr SSH-Schlüssel.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Ihre Zugangsberechtigungen, je nach Cloud-Native API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Ihre Beschreibung des Status dieser Verbindung (vorgesehen, pensioniert, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Ihre Beschreibung dieses Artikels.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ihr generischer Name für dieses Stück Software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Ihre generische Version für dieses Stück Software';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Schweden';

$GLOBALS["lang"]['active'] = 'Wirkstoff';

$GLOBALS["lang"]['active directory'] = 'Aktives Verzeichnis';

$GLOBALS["lang"]['active/active'] = 'aktiv/aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv/passiv';

$GLOBALS["lang"]['ad hoc'] = 'Ad hoc';

$GLOBALS["lang"]['alert'] = 'Alarmstufe';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'zugewiesen';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['antivirus'] = 'Antivirus';

$GLOBALS["lang"]['application'] = 'Anwendungsbereich';

$GLOBALS["lang"]['approved'] = 'genehmigt';

$GLOBALS["lang"]['attribute'] = 'Eigenschaften';

$GLOBALS["lang"]['auto'] = 'Auto';

$GLOBALS["lang"]['backup'] = 'Sicherung';

$GLOBALS["lang"]['banned'] = 'verboten';

$GLOBALS["lang"]['bottom'] = 'Boden';

$GLOBALS["lang"]['building'] = 'Gebäude';

$GLOBALS["lang"]['cloud'] = 'Wolken';

$GLOBALS["lang"]['collector'] = 'Sammler';

$GLOBALS["lang"]['compute'] = 'Berechnung';

$GLOBALS["lang"]['contains'] = 'enthält';

$GLOBALS["lang"]['create'] = 'erstellen';

$GLOBALS["lang"]['created'] = 'erstellt';

$GLOBALS["lang"]['critical'] = 'kritisch';

$GLOBALS["lang"]['database'] = 'Datenbank';

$GLOBALS["lang"]['debug'] = 'Debug';

$GLOBALS["lang"]['defined process'] = 'definierter Prozess';

$GLOBALS["lang"]['delegated'] = 'Delegierte';

$GLOBALS["lang"]['delete'] = 'Löschen';

$GLOBALS["lang"]['deleted'] = 'gelöscht';

$GLOBALS["lang"]['denied'] = 'gekürzt';

$GLOBALS["lang"]['devices'] = 'Geräte';

$GLOBALS["lang"]['digitalocean'] = 'Digitalocean';

$GLOBALS["lang"]['does not equal'] = 'nicht gleich';

$GLOBALS["lang"]['emergency'] = 'Notfall';

$GLOBALS["lang"]['entra'] = 'Entre';

$GLOBALS["lang"]['equals'] = 'gleich';

$GLOBALS["lang"]['error'] = 'Fehler';

$GLOBALS["lang"]['excluded'] = 'ausgeschlossen';

$GLOBALS["lang"]['expired'] = 'abgelaufen';

$GLOBALS["lang"]['fail'] = 'Fehler';

$GLOBALS["lang"]['false'] = 'falsch';

$GLOBALS["lang"]['firewall'] = 'Firewall';

$GLOBALS["lang"]['fixed'] = 'fest';

$GLOBALS["lang"]['floor'] = 'Boden';

$GLOBALS["lang"]['front'] = 'Vorderseite';

$GLOBALS["lang"]['front-left'] = 'vorne links';

$GLOBALS["lang"]['front-right'] = 'vorne rechts';

$GLOBALS["lang"]['github'] = 'Github';

$GLOBALS["lang"]['google'] = 'Kohl';

$GLOBALS["lang"]['greater or equals'] = 'größer oder gleich';

$GLOBALS["lang"]['greater than'] = 'größer als';

$GLOBALS["lang"]['group'] = 'Gruppe';

$GLOBALS["lang"]['head'] = 'Kopf';

$GLOBALS["lang"]['here'] = 'Hier.';

$GLOBALS["lang"]['high availability'] = 'hohe Verfügbarkeit';

$GLOBALS["lang"]['ignored'] = 'ignoriert';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'inaktiv';

$GLOBALS["lang"]['info'] = 'Info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, Text, bool (y/n), usw.';

$GLOBALS["lang"]['is licensed to'] = 'ist lizenziert';

$GLOBALS["lang"]['left'] = 'links';

$GLOBALS["lang"]['less or equals'] = 'kleiner oder gleich';

$GLOBALS["lang"]['less than'] = 'weniger als';

$GLOBALS["lang"]['license'] = 'Lizenz';

$GLOBALS["lang"]['like'] = 'wie';

$GLOBALS["lang"]['line'] = 'Linie';

$GLOBALS["lang"]['load balancing'] = 'Lastausgleich';

$GLOBALS["lang"]['location'] = 'Standort';

$GLOBALS["lang"]['managed and measurable'] = 'verwaltet und messbar';

$GLOBALS["lang"]['microsoft'] = 'Mikrosoft';

$GLOBALS["lang"]['mount point'] = 'Befestigungspunkt';

$GLOBALS["lang"]['network'] = 'Netzwerk';

$GLOBALS["lang"]['no'] = 'Nein';

$GLOBALS["lang"]['node'] = 'Knotenpunkt';

$GLOBALS["lang"]['non-existent'] = 'nicht vorhanden';

$GLOBALS["lang"]['none'] = 'keine';

$GLOBALS["lang"]['normal'] = 'Normalwert';

$GLOBALS["lang"]['not applicable'] = 'nicht anwendbar';

$GLOBALS["lang"]['not in'] = 'nicht';

$GLOBALS["lang"]['not like'] = 'nicht wie';

$GLOBALS["lang"]['notice'] = 'Mitteilung';

$GLOBALS["lang"]['okta'] = 'Ok';

$GLOBALS["lang"]['openldap'] = 'Openldap';

$GLOBALS["lang"]['optimized'] = 'optimiert';

$GLOBALS["lang"]['optionally '] = 'optional ';

$GLOBALS["lang"]['other'] = 'andere';

$GLOBALS["lang"]['partition'] = 'Partition';

$GLOBALS["lang"]['pass'] = 'passieren';

$GLOBALS["lang"]['pending'] = 'bis';

$GLOBALS["lang"]['performance'] = 'Leistung';

$GLOBALS["lang"]['pie'] = 'Torf';

$GLOBALS["lang"]['planning'] = 'Planung';

$GLOBALS["lang"]['query'] = 'Anfrage';

$GLOBALS["lang"]['rear'] = 'Heck';

$GLOBALS["lang"]['rear-left'] = 'hinten links';

$GLOBALS["lang"]['rear-right'] = 'hinten rechts';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['repeatable but intuitive'] = 'wiederholbar aber intuitiv';

$GLOBALS["lang"]['reserved'] = 'reserviert';

$GLOBALS["lang"]['right'] = 'Recht';

$GLOBALS["lang"]['room'] = 'Zimmer';

$GLOBALS["lang"]['row'] = 'Zeile';

$GLOBALS["lang"]['stand-alone'] = 'Stand-alone';

$GLOBALS["lang"]['standard'] = 'Standard';

$GLOBALS["lang"]['starts with'] = 'beginnt mit';

$GLOBALS["lang"]['storage'] = 'Lagerung';

$GLOBALS["lang"]['timestamp'] = 'Zeitstempel';

$GLOBALS["lang"]['top'] = 'Kopf';

$GLOBALS["lang"]['traffic'] = 'Verkehr';

$GLOBALS["lang"]['true'] = 'wahr';

$GLOBALS["lang"]['unallocated'] = 'unvermittelt';

$GLOBALS["lang"]['unauthorised'] = 'unbefugt';

$GLOBALS["lang"]['unknown'] = 'unbekannt';

$GLOBALS["lang"]['unmanaged'] = 'unmanaged';

$GLOBALS["lang"]['unused'] = 'nicht verwendet';

$GLOBALS["lang"]['update'] = 'Aktualisierung';

$GLOBALS["lang"]['valid'] = 'gültig';

$GLOBALS["lang"]['virtualisation'] = 'Virtualisierung';

$GLOBALS["lang"]['warning'] = 'Warnung';

$GLOBALS["lang"]['web'] = 'Waren';

$GLOBALS["lang"]['yes'] = 'Ja.';

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
