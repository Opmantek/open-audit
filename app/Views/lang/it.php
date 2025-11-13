<?php
$GLOBALS["lang"][' Default, currently '] = ' Predefinito, attualmente ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Se qualcosa non funziona come previsto, la prima cosa da fare è controllare i registri.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' è ora supportato con un file di lingua. Per cambiare l\'utente per usare questa lingua, fare clic ';

$GLOBALS["lang"][' seconds'] = ' secondi';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', ma non avrà bisogno di ricordare un insieme separato di credenziali di logon.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', di cui forniamo oltre trenta come set predefinito. Gli utenti professionali non possono alterarli, ma un utente Enterprise ha abilità di personalizzazione complete - anche creando il proprio.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Tu <i>deve</i> utilizzare https sul server Open-AudIT da utilizzare per l\'Aut. Per favore configura Apache da usare <strong>https</strong> prima di configurare Entra for auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Per abilitare questo, modificare l\'elemento di configurazione per ';

$GLOBALS["lang"]['10 Minutes'] = '10 minuti';

$GLOBALS["lang"]['15 Minutes'] = '15 minuti';

$GLOBALS["lang"]['30 Minutes'] = '30 minuti';

$GLOBALS["lang"]['5 Minutes'] = '5 minuti';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 controlli raggruppati in categorie organizzative, persone, fisiche e tecnologiche';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOTA</strong> - Accedete a questo URL dal server locale Open-AudIT. Lo script scaricato non sarà in grado di inviare quando viene eseguito su qualsiasi altra macchina. Se è necessario controllare altre macchine, si prega di scaricare lo script da qualsiasi macchina remota, non utilizzando un browser sul server Open-AudIT stesso.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTA</strong> - È necessario disporre di credenziali SSH o SSH Key per eseguire i benchmark su un dispositivo di destinazione.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Linea di base</strong> - Il documento di overarching che contiene la definizione di base e i singoli test di politica.<br/> <br/> <strong>Politiche</strong> - I singoli test contenuti in una Baseline. Ogni prova è per un prodotto specifico. Un esempio sarebbe il test per la versione SSH 1.2.3.<br/> <br/> <strong>Dettagli</strong> - Le linee di base possono confrontare porte, utenti e software netstat.<br/> <br/> <strong>Software software</strong> - Per confrontare il software controlliamo il nome e la versione. Poiché i numeri di versione non sono tutti standardizzati in formato, quando riceviamo un risultato di audit creiamo un nuovo attributo chiamato software_paggiunta che memorizziamo nel database insieme al resto dei dettagli del software per ogni pacchetto. Per questo motivo, le linee di base che utilizzano le politiche software non funzioneranno quando vengono eseguite contro un dispositivo che non è stato controllato da 1.10 (almeno). Le politiche software possono testare contro la versione "uguale a", "più grande di" o "uguale o maggiore".<br/> <br/> <strong>Porte Netstat</strong> - Netstat Ports utilizzare una combinazione di numero di porta, protocollo e programma. Se tutti sono presenti la politica passa.<br/> <br/> <strong>Utenti</strong> - Gli utenti lavorano come Netstat Ports. Se un utente esiste con un nome corrispondente, dati di stato e password (cambiabile, scade, richiesto) allora il criterio passa.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Una posizione è un indirizzo fisico che può avere dispositivi associati con esso.<br/> <br/>È possibile assegnare coordinate (lat/long) e se ci sono dispositivi assegnati, la posizione apparirà sulla mappa di Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Una rete deriva dalle voci di scoperta e dagli attributi dei dispositivi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Un sommario visualizzerà un elenco di elementi raggruppati dai valori distinti dell\'attributo specificato dal <code>table</code> e <code>column</code> attributi.<br/> <br/>Quando viene eseguito un sommario, il risultato sarà un elenco di valori distinti per quello <code>table</code> e <code>column</code>. Ci saranno collegamenti sui valori che permettono all\'utente di vedere i dispositivi corrispondenti.<br/> <br/>Se l\'attributo di <code>extra_columns</code> è popolata, la pagina risultante conterrà queste colonne oltre alle colonne del dispositivo standard.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Gli agenti ti permettono di controllare i PC senza una scoperta. Installare l\'agente e il check-in con il server ogni giorno e l\'audit stesso. Non importa se i computer sono firewalled, i dati di audit verranno visualizzati in Open-AudIT.</p><p>Quando si verifica <strong>se</strong> un agente dovrebbe eseguire azioni, tutti e tre i test devono passare (se il test è impostato). <strong>Allora</strong> le azioni sono prese.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Le applicazioni sono definite dall\'utente, dall\'utente e memorizzate per Open-AudIT per l\'utilizzo e la connessione con i dispositivi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Gli attributi sono memorizzati per Open-AudIT da utilizzare per particolari campi.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Essere in grado di determinare quali macchine sono configurate la stessa è una parte importante dell\'amministrazione e dell\'audit dei sistemi – e ora la segnalazione su questo sarà resa semplice e automatizzata. Una volta che si definisce la vostra linea di base verrà automaticamente eseguito contro un insieme di dispositivi su un programma predeterminato. L\'output di queste basi eseguite sarà disponibile per la visualizzazione web, l\'importazione in un sistema di terze parti o anche come rapporto stampato.<br/> <br/> Le linee di base consentono di combinare i dati di audit con un insieme di attributi precedentemente definiti (la vostra linea di base) per determinare la conformità dei dispositivi.<br/> <br/> Ad esempio - si potrebbe creare una linea di base da un dispositivo che esegue Centos 6 che agisce come uno dei server di apache in un cluster. Sai che questo particolare server è configurato proprio come lo vuoi ma non sei sicuro se altri server nel cluster sono configurati esattamente lo stesso. Le linee di base permettono di determinare questo.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>I cluster vengono memorizzati in Open-AudIT per associare i dispositivi a una migliore registrazione, gestione e stima dei costi di licenza.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Components è un termine generico utilizzato per le tabelle che memorizzano gli attributi per un dispositivo. Quelle tabelle sono: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, licenza, log, memory, module, monitor, motherboard, netstat, network, nmap, ottica, pagefile, partizione, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_bkey, sound, user, user, task, user_group_</p><p> Inoltre classifichiamo le seguenti tabelle anche come dispositivo relativo: applicazione, allegato, cluster, credenzialial, immagine.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Le credenziali vengono crittografate quando vengono memorizzate nel database.<br/> <br/>Quando viene eseguito un Discovery, un dispositivo ha le sue credenziali recuperate e testate per la connessione prima (da <code>credential</code> tabella). Se questi falliscono, allora le credenziali associate al Org dato <code>credentials.org_id</code> è anche testato contro il dispositivo. Le credenziali di lavoro vengono memorizzate a livello di dispositivo individuale nella tabella delle credenziali (nota - no "s" nel nome della tabella).<br/> <br/>I tasti SSH sono testati prima del nome utente SSH / password. Durante il test SSH, le credenziali saranno contrassegnate anche come funzionando con sudo o essendo root.<br/> <br/>Per facilità d\'uso, le password di Windows non devono contenere una sola o doppia citazione. Questa è una limitazione WMI remota, non una limitazione Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Le credenziali sono utilizzate per accedere ai dispositivi.<br/> <br/>Le credenziali di configurazione dovrebbero essere una delle prime cose che fai dopo l\'installazione di Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definire i rack e assegnare i dispositivi nelle loro posizioni. Hai già i tuoi dispositivi in Open-AudIT e conosci le tue posizioni. Open-AudIT estende questo per consentire di creare un rack e assegnare dispositivi ad esso. Open-AudIT fornirà anche una visualizzazione del rack e dei dispositivi contenuti all\'interno. Se si fornisce un\'immagine del dispositivo, l\'immagine verrà utilizzata nella visualizzazione. È possibile guardare il rack sullo schermo e vedere gli stessi elementi che si vedrebbe se si era in piedi davanti a esso.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>I dispositivi sulla rete devono essere gestiti. Ma come fai a tenere aggiornati i tuoi registri? Un foglio di calcolo - defintley no. Sarà fuori orario, se non giorni. Perché cercare manualmente di tenere il passo. Utilizzare Open-AudIT per eseguire la scansione automatica delle reti e registrare i dispositivi - produttore, modello, seriale e più di 100 altri attributi. Elenchi completi di software, servizi, dischi, porte aperte, utenti, ecc. Vedere automaticamente se un attributo è stato aggiunto, rimosso o modificato.<br/> <br/>Una volta che Open-AudIT è impostato, si può sedersi e rilassarsi. Hai modificato i rapporti via email su un programma, per esempio - quali nuovi dispositivi abbiamo scoperto questa settimana? Quale nuovo software è stato installato questa settimana? Ci sono state modifiche hardware il mese scorso?<br/> <br/>Espandere i campi memorizzati facilmente con i propri attributi personalizzati.<br/> <br/>Anche aggiungere dispositivi che non sono collegati alla rete o a quei dispositivi che il server Open-AudIT non può raggiungere.<br/> <br/>Computer, switch, router, stampanti o qualsiasi altro dispositivo della rete - Open-AudIT può controllarli tutti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Le scoperte sono al centro di ciò che Open-AudIT fa.<br/> <br/>In che altro modo sapresti "Cosa c\'è nella mia rete?"<br/> <br/>Le scoperte sono dati preparati che consentono di eseguire una scoperta su una rete in un solo clic, senza inserire i dettagli di tale rete ogni volta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Le opzioni sono un\'impostazione globale cambiata nel <a href="../configuration?configuration.name=discovery_default_scan_option">configurazione</a>. Se si dispone di una licenza Open-AudIT Enterprise questi sono regolabili per la scoperta e in aggiunta futher personalizzabile come richiesto. Discovery Le opzioni sono le seguenti (incluso un tempo indicitavo per la scansione di un singolo IP):<br/><br/><strong>UltraFast</strong>: <i>1</i>. Scansiona solo le porte che Open-AudIT deve usare per parlare con il dispositivo e rilevare un dispositivo IOS (WMI, SSH, SNMP, Apple Sync). Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> il porto non è considerato aperto. Il dispositivo deve rispondere a un ping Nmap. Usa tempismo aggressivo.<br/><br><strong>SuperFast</strong>: <i>5 secondi</i>. Scansionare le 10 porte TCP e UDP superiori, così come la porta 62078 (Apple IOS detection). Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> il porto non è considerato aperto. Il dispositivo deve rispondere a un ping Nmap. Usa tempismo aggressivo.<br><br/><strong>Veloce</strong>: <i>40 secondi</i>. Scansionare le 100 porte TCP e UDP superiori, così come la porta 62078 (Rilevamento Apple IOS). Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> il porto non è considerato aperto. Il dispositivo deve rispondere a un ping Nmap. Usa tempismo aggressivo.<br/><br/><strong>Medio (Classico)</strong>: <i>90 secondi</i>. Come vicino a una scansione tradizionale Open-AudIT come possiamo farlo. Scansionare le 1000 porte TCP superiori, così come 62078 (Rilevamento IOS) e UDP 161 (SNMP). Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> la porta è considerata aperta (e si attiva il rilevamento del dispositivo). I dispositivi vengono scansionati indipendentemente da una risposta a un ping Nmap. Usa tempismo aggressivo.<br/><br/><strong>Media</strong>: <i>100 secondi</i>. Scansiona i primi 1000 TCP e i primi 100 porte UDP, così come la porta 62078 (Apple IOS detection). Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> il porto non è considerato aperto. Il dispositivo deve rispondere a un ping Nmap. Usa tempismo aggressivo.<br/><br/><strong>Piano.</strong>: <i>4 minuti</i>. Scansiona i primi 1000 TCP e i primi 100 porte UDP, così come la porta 62078 (Apple IOS detection). Rilevamento della versione abilitato. Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> la porta è considerata aperta (e si attiva il rilevamento del dispositivo). Il dispositivo deve rispondere a un ping Nmap. Usa i tempi normali.<br/><br/><strong>Ultraslow</strong>: <i>20 minuti</i>. Non consigliato. Scansiona le porte top 1000 TCP e UDP, così come la porta 62078 (Apple IOS detection). I dispositivi vengono scansionati indipendentemente da una risposta a un ping Nmap. Rilevamento della versione abilitato. Anonimo <code>open|filtered</code> il porto è considerato aperto. A <code>filtered</code> la porta è considerata aperta (e si attiva il rilevamento del dispositivo). Usa la tempistica lucida.<br/><br/><strong>Personale</strong>: <i>Tempo sconosciuto</i>. Quando le opzioni diverse da quelle impostate da un preset di scoperta standard vengono modificate.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>I gruppi sono utilizzati come semplici liste di dispositivi che corrispondono alle condizioni richieste. Se richiesto utilizzando JSON ritornano un elenco <code>devices.id</code> Solo. Se richiesto utilizzando l\'interfaccia web, restituisce l\'elenco degli attributi della colonna standard.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Se l\'utente accede a Open-AudIT non ha l\'accesso alla ricerca LDAP (e si utilizza OpenLDAP), è possibile utilizzare un altro account che ha questo accesso. Utilizzare <code>ldap_dn_account</code> e <code>ldap_dn_password</code> per configurare questo.<br/> <br/><strong>Documentazione utile</strong><br/> <br/><a href="/index.php/auth/help">Generale Auth Aiuto</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Utilizzo dell\'ingresso per Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Utilizzo di OKTA per Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Risoluzione dei problemi LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Utenti, ruoli e org</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Se aggiungi un tipo di dispositivo, per visualizzare l\'icona associata dovrai copiare manualmente il file formattato .svg nella directory:<br/><em>Linux</em>:/usr/local/open audit/public/device_images<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Se aggiungi un tipo di posizione, per visualizzare l\'icona associata dovrai copiare manualmente l\'icona 32x32px nella directory:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Quando <i>risorsa</i> è un <code>device</code>, valido <i>tipi</i> sono: <code>class</code>♪ <code>environment</code>♪ <code>status</code> e <code>type</code>. Se il <i>risorsa</i> è <code>locations</code> o <code>org</code> l\'unico valido <i>tipo</i> è <code>type</code>. Se il <i>risorsa</i> è un <code>query</code> l\'unico valido <i>tipo</i> è <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Se intendete controllare completamente le vostre macchine cloud, non dimenticate che avrete anche bisogno di quelle credenziali salvate in Open-AudIT.</p><p>Assicurarsi di consentire le porte corrette se si utilizza Microsoft Azure (22 per SSH, ecc). Controlla la tua macchina virtuale -> Regole di rete.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Se si seleziona un tipo Elenco, il campo "valori" sarà abilitato. È necessario inserire un elenco separato da virgola di valori selezionabili qui. Questi verranno visualizzati in una scatola a discesa ogni volta che il campo viene modificato.<br/> <br/>Come la maggior parte degli altri attributi, i campi possono essere modificati in massa. Utilizzare la funzione Modifica Bulk come si farebbe normalmente e vedrete i campi sono disponibili per l\'ingresso.<br/> <br/>Visualizza la schermata dei dettagli del dispositivo, apri la sezione contenente il campo e (se hai accesso sufficiente) puoi cliccare sul valore del campo per modificarlo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Nel mondo in continua evoluzione della sicurezza informatica dove vengono scoperte e patchate nuove vulnerabilità ogni giorno, il rafforzamento della conformità alla sicurezza deve essere un processo continuo. Ha anche bisogno di includere un modo per apportare modifiche alle politiche, nonché la valutazione periodica e il monitoraggio dei rischi. L\'ecosistema OpenSCAP fornisce strumenti e politiche personalizzabili per un\'implementazione rapida, economica e flessibile di questi processi.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Le integrazioni consentono di configurare la selezione dei dispositivi e gli orari per Open-AudIT per parlare con i sistemi esterni.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft I sistemi desktop di Windows hanno limitazioni di rete che possono influenzare le prestazioni di Open-AudIT. Lo stack TCP/IP limita il numero di tentativi di connessione TCP incompleti simultaneamente. Dopo il raggiungimento del limite, i tentativi di connessione successivi vengono messi in coda e saranno risolti ad un tasso fisso (10 al secondo). Se troppi entrano nella coda, possono essere eliminati. E infine, Apache sarà riavviato dal sistema operativo. Per questo motivo, l\'installazione di Open-AudIT su un sistema operativo desktop di Windows non è supportata.<br/><br/>Non c\'è niente di sbagliato nel codice Open-AudIT, né possiamo fare nulla per affrontare questo problema sulle macchine client di Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>I dettagli della tempistica Nmap si trovano nella parte inferiore di questa pagina collegata <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Da quella pagina:<br/> <br/><em>Se siete su una connessione a banda larga decente o ethernet, consiglio sempre di usare -T4 (Aggressivo). Alcune persone amano -T5 (Insane) anche se è troppo aggressivo per il mio gusto. Le persone a volte specificano -T2 (Polite) perché pensano che sia meno probabile che si schiantano gli host o perché si considerano educato in generale. Spesso non si rendono conto di quanto sia lenta -T2. La loro scansione può richiedere dieci volte più di una scansione predefinita. I crash della macchina e i problemi della larghezza di banda sono rari con le opzioni di temporizzazione predefinite -T3 (Normal) e quindi consiglio normalmente che per gli scanner cauti. Omettere il rilevamento della versione è molto più efficace che giocare con i valori di temporizzazione a ridurre questi problemi.</em><footer>Gordon <i>Fyodor</i> Lione</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT può essere configurato per utilizzare diversi metodi per autenticare un utente e, inoltre, per creare un account utente utilizzando ruoli e org assegnati in base all\'appartenenza a un gruppo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT può recuperare i dettagli su un file o una directory di file e monitorare questi file per le modifiche secondo altri attributi nel database Open-AudIT.<br/> <br/>Questa funzione funziona dalla casella per i server Linux Open-AudIT, ma ha bisogno di una modifica al nome dell\'account di servizio sotto un server Windows Open-AudIT.<br/> <br/>I client supportati sono Windows e Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT può recuperare i dettagli su un file, chiedere al gestore di pacchetti nativo se sono noti a esso e monitorare questi file per le modifiche come per altri attributi nel database Open-AudIT.<br/> <br/>I client supportati sono solo Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud IT può memorizzare informazioni in campi personalizzati che sono associati a ogni dispositivo.<br/> <br/>Una volta creato un campo aggiuntivo può essere utilizzato in query e gruppi come qualsiasi altro attributo nel database.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT viene fornito con molte domande integrate. Se avete bisogno di una query specifica e nessuna delle query pre-confezionate si adatta alle vostre esigenze, è abbastanza facile creare una nuova e caricare in Open-AudIT per l\'esecuzione.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT viene fornito con molti riassunti incorporati. Se avete bisogno di un riepilogo specifico e nessuno dei riassunti preconfezionati si adatta alle vostre esigenze, è abbastanza facile creare un nuovo e caricare in Open-AudIT per l\'esecuzione.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT è supportato da FirstWave con un incredibile livello di supporto. Se si preferisce una comunità attiva di sostenitori, c\'è anche questo. Dove altro puoi parlare direttamente con gli sviluppatori e ottenere una risposta entro 24 ore? Provalo con altri prodotti! Incredibile supporto. Fermata completa. Hai bisogno di supporto, forniamo supporto. No, se o no. Ottimo supporto. Punto.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT fornisce multi-tenancy fuori dalla scatola!<br/> <br/>Org (organizzazioni) in Open-AudIT sono un elemento chiave. Un utente ha un Org primario e un elenco di Org che possono accedere. Un utente combina questo con un elenco di "Roles" assegnati che definiscono quali azioni possono prendere su elementi assegnati agli Org a cui hanno accesso. La combinazione di un utente "orgs" e "roles" definisce ciò che possono e non possono fare all\'interno di Open-AudIT.<br/> <br/>La maggior parte degli elementi in Open-AudIT sono assegnati a un Org. Dispositivi, posizioni, reti, ecc.<br/> <br/>Org possono avere figli Orgs. Pensa a una struttura organizzativa (tree). Se un utente ha accesso a un Org specifico, hanno anche accesso a quei discendenti Orgs. Per ulteriori informazioni, vedere questo <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT fornisce multi-tenancy fuori dalla scatola!<br/> <br/>Org (organizzazioni) in Open-AudIT sono un elemento chiave. Un utente ha un Org primario e un elenco di Org che possono accedere. Un utente combina questo con un elenco di "Roles" assegnati che definiscono quali azioni possono prendere su elementi assegnati agli Org a cui hanno accesso. La combinazione di un utente "orgs" e "roles" definisce ciò che possono e non possono fare all\'interno di Open-AudIT.<br/> <br/>La maggior parte degli elementi in Open-AudIT sono assegnati a un Org. Dispositivi, posizioni, reti, ecc.<br/> <br/>Org possono avere figli Orgs. Pensa a una struttura organizzativa (tree). Se un utente ha accesso a un Org specifico, hanno anche accesso a quei discendenti Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Visualizza rapidamente lo stato dei dispositivi sulla rete.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roles in Open-Aud E\' un elemento chiave. Un utente ha un Org primario e un elenco di Org che possono accedere. Un utente combina questo con un elenco di Roles assegnati che definiscono quali azioni possono prendere su elementi assegnati agli Org a cui hanno accesso. La combinazione di un utente "orgs" e "roles" definisce ciò che possono e non possono fare all\'interno di Open-AudIT.<br/> <br/>Ottieni l\'esperienza completa di Open-AudIT Enterprise. La creazione di ruoli consente un controllo granulato su ciò che i tuoi utenti possono fare all\'interno di Open-AudIT.<br/> <br/>Il metodo principale per l\'autorizzazione (cosa che un utente può fare) si basa sugli utenti Roles. I ruoli predefiniti sono definiti come admin, org_admin, reporter e utente. Ogni ruolo ha una serie di autorizzazioni (Creare, leggere, aggiornare, cancellare) per ogni endpoint. La capacità di definire ruoli aggiuntivi e modificare ruoli esistenti è abilitata in Open-AudIT Enterprise.<br/> <br/>I ruoli possono essere utilizzati anche con l\'autorizzazione LDAP (Active Directory e OpenLDAP). Le installazioni con licenza Enterprise hanno la capacità di personalizzare il gruppo LDAP per ogni ruolo definito.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Le regole esaminano gli attributi e fanno cahnges in base alla regola appropriata.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Le opzioni di scansione consentono di applicare facilmente una serie di opzioni a una scoperta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Mappatura geografica semplice, intuitiva e accurata fornita da Google Maps. Leva Open-AudIT Google Maps per fornire live, mappatura geografica interattiva delle posizioni dei dispositivi. Conversione automatizzata di indirizzi di strada a geocodici e longitudine / latitudine.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>I pacchetti software vengono utilizzati per determinare se è installato antivirus, backup, firewall, software approvato o vietato.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Alcuni esempi di validi attributi Subnet sono: 192.168.1.1 (un unico indirizzo IP), 192.168.1.0/24 (una subnet), 192.168.1-3.1-20 (una gamma di indirizzi IP).<br/> <br/><em>NOTA</em> - Solo una sottorete (come per gli esempi - 192.168.1.0/24) sarà in grado di creare automaticamente una rete valida per Open-AudIT. <br/> <br/>Se si utilizza un tipo di Active Directory, assicurarsi di avere le credenziali appropriate per parlare con il controller di dominio già in <a href="../credentials">credenziali</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Gli standard sono memorizzati in Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>I client supportati sono solo Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>I compiti hanno un programma che rispecchia il programma di unix cron. Gli attributi per minuto, ora, day_of_month, mese, day_of_week tutti agiscono secondo le definizioni cron. È possibile selezionare multipli di questi utilizzando valori seperati da virgola (senza spazi). È possibile selezionare ogni valore utilizzando *.<br/> <br/>The <code>type</code> del compito può essere uno di: basi, collezionisti, scoperte, query, report o riassunti.<br/> <br/>Se si desidera pianificare una Baseline o Discovery, è necessario creare questi prima di creare le attività. È necessario utilizzare l\'ID del tipo di elemento in <code>sub_resource_id</code>. Per esempio se si desidera pianificare una Discovery, utilizzare quel particolare Discoveries ID in <code>sub_resource_id</code>.<br/> <br/>Il valore per <code>uuid</code> è specifico per ogni server Open-AudIT. Il vostro valore unico può essere trovato nella configurazione.<br/> <br/>The <code>options</code> attribute è un documento JSON contenente eventuali attributi aggiuntivi necessari per eseguire l\'attività. Gli attributi extra per report, query e riassunti sono: <code>email_address</code> e <code>format</code>. L\'attributo extra per Bselines è <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> della posizione assegnerà la sua icona.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>L\'endpoint Attributes consente di aggiungere valori personalizzati a diversi attributi in Open-AudIT, al momento in cui questa funzione funziona sugli attributi Class, Environment, Status e Type su Dispositivi, l\'attributo Type per entrambe le posizioni e Orgs, nonché la Categoria Menu per le query. Se si visualizza un elemento di uno dei tipi prvious (vedi una Lkocation) si noterà che l\'attributo Tipo deve essere selezionato da una casella a discesa. Questo è dove vengono memorizzati quei valori. Quindi, se si desidera aggiungere un nuovo tipo da scegliere per una posizione, aggiungerlo utilizzando la funzione Attributi.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La funzione Collectors consente di gestire facilmente molti computer "collector" che eseguono la scoperta della rete. Tutti i collettori sono controllati centralmente dal server. Le uniche porte di rete richieste tra il Collector e il Server sono 80 e/o 443.<br/> <br/>Rende la gestione di reti disparate veloce, facile e semplice. Le licenze Open-AudIT Enterprise ottengono una singola licenza di collettore inclusa e hanno la possibilità di acquistare di più come richiesto..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La sezione SELECT della tua SQL <em>deve</em> contengono colonne completamente qualificate. IE... <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La sezione DOVE del tuo SQL <em>deve</em> contiene <code>WHERE @filter</code> così Open-AudIT sa limitare la vostra query alle Org appropriate. SQL non contenente questa condizione si tradurrà nella query che non viene creato, a meno che non si abbia il ruolo Admin.<br/> <br/>Un esempio query SQL che mostra attributi su dispositivi che hanno un <code>os_group</code> attributo di "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La sezione SELECT della tua SQL <em>deve</em> solo contengono <code>DISTINCT(devices.id)</code>.<br/> <br/>La sezione DOVE del tuo SQL <em>deve</em> contiene <code>WHERE @filter</code> così Open-AudIT sa limitare la vostra query alle Org appropriate. SQL non contenente questa condizione si tradurrà nel gruppo che non viene creato.<br/> <br/>Un esempio per SQL per selezionare tutti i dispositivi che eseguono il sistema operativo Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>La licenza endpoint consente di monitorare il numero di licenze presenti sui dispositivi.<br/> <br/>Per creare una voce per monitorare le tue licenze <em>deve</em> fornire un nome, un\'organizzazione, il numero di licenze acquisite e il nome del software. Sul campo <code>match_string</code> è necessario fornire il nome del software che si desidera tracciare, è possibile utilizzare il segno percentuale (%) come wildcard nel match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>La rete dovrebbe essere nel formato 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Gli elementi secondari primari e facoltativi devono essere pienamente qualificati - cioè, dispositivi. tipo o software. Nome.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Non c\'è bisogno di fare nulla se si esegue Open-AudIT su un server Linux.<br/><br/>I client di Windows sono semplicemente eccellenti e non richiedono azioni speciali, tuttavia.... per abilitare questa funzione lo script di audit deve essere eseguito localmente sul sistema di Windows di destinazione. Non può essere eseguito da remoto come facciamo con le chiamate WMI quando si esegue lo script di audit su una macchina di Windows, mentre si rivolge a una seconda macchina di Windows. Per fare questo abbiamo bisogno di copiare lo script di audit alla macchina di Windows di destinazione e poi eseguirlo. Purtroppo l\'account di servizio che Apache gestisce è l\'account del sistema locale. Questo account non ha accesso alle risorse remote (con base di rete). Per lavorare intorno a questo problema il servizio deve essere eseguito in un altro conto. È più semplice usare l\'account Administrator locale, ma è possibile provare qualsiasi account che ti piace fino a quando ha i privilegi richiesti. L\'account Local System ha tanto accesso locale quanto l\'account Administrator locale.<br/><br/>Vedere la nostra pagina su abilitare <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Eseguire Open-AudIT Apache Service Sotto Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Questi sono i dispositivi che vivono all\'interno di un rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Questo endpoint consente di aggiungere i dettagli dell\'infrastruttura cloud. Open-AudIT raggiungerà le tue nuvole utilizzando le loro API native e restituirà i tuoi server, proprio come qualsiasi altro dispositivo in Open-AudIT.<br/> <br/><em>NOTA</em> - Per usare questa funzione, noi <em>deve</em> abilitare gli elementi di configurazione match_mac (per AWS) e match_hostname (per Azure). Questo verrà fatto automaticamente la prima volta che viene eseguita una scoperta cloud.<br/> <br/>Credenziali per la tua nuvola (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> o <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) sono necessari.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilità riferite sulla base del feed NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Inizialmente abbiamo impostato l\'elenco predefinito degli script con le opzioni predefinite. Questi script di default non possono essere eliminati. È possibile creare script aggiuntivi per l\'uso da voi come richiesto. Il vostro script sarà basato su uno degli script esistenti e hanno opzioni personalizzate applicate. Gli script possono quindi essere scaricati dalla pagina dell\'elenco al menu -> Scoprire -> Audit Scripts -> Elenco Script Audit<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Quando si utilizza Regex per la corrispondenza, una pagina utile può essere trovato sul <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Sito web PHP</a>. Alcune differenze a Perl Regex possono essere trovate <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Qui.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>I widget possono essere facilmente creati per mostrare ciò che è specifico per l\'ambiente sul vostro cruscotto.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Con Open-AudIT Professionale e Enterprise è possibile automatizzare e programmare le scoperte, la generazione di report o i controlli di base da eseguire quando si desidera, e spesso come è necessario. Pianifica le tue scoperte per eseguire la notte e i report per essere generati e inviati al personale chiave ogni mattina. Programmi complessi o semplici, la scoperta dei dispositivi e la generazione dei report è solo un clic di distanza.<br/> <br/>Creare programmi di scoperta individuale per ogni subnet o controller AD, aggiungere in report da creare per il pubblico mirato. Sviluppare programmi semplici o complessi per supportare le esigenze dell\'azienda, evitare i backup o l\'impatto alle operazioni, o semplicemente per diffondere il completamento dell\'audit di carico e speed-up.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>È possibile creare uno script con tutte le opzioni per uno qualsiasi degli script di audit esistenti - non solo Windows. AIX, ESX, Linux, OSX e Windows sono tutti coperti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>È possibile utilizzare il segno percentuale % come wildcard nel match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>I tuoi rack aiutano a raffinare esattamente dove si trovano i tuoi dispositivi.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOTA</strong> - Accedete a questo URL dal server locale Open-AudIT. Lo script scaricato non sarà in grado di inviare quando viene eseguito su qualsiasi altra macchina. Se è necessario controllare altre macchine, si prega di scaricare lo script da qualsiasi macchina remota, non utilizzando un browser sul server Open-AudIT stesso.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Un elemento CVE che non contiene un filtro per determinare l\'oggetto/i interessato.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Un Google Maps API La chiave è necessaria per questa funzione.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Una serie di ID di dispositivo JSON che avranno eseguito questo benchmark.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Una serie di oggetti JSON che corrispondono al nome del software preso dal CVE, arricchito con il nome del software recuperato da Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Una serie di valori JSON da testare per questa vulnerabilità.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Un documento JSON contenente gli Org assegnati a questo utente. ID prelevati da <code>orgs.id</code>. Se un utente ha accesso a un Org, ha accesso a quei discendenti Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Un documento JSON contenente gli attributi richiesti a seconda <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Un documento JSON contenente gli attributi richiesti sovrascrivendo le scoperte_scan_options scelte.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Un documento JSON contenente gli attributi richiesti sovrascrivendo le opzioni di corrispondenza del dispositivo predefinito.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Un documento JSON contenente i ruoli assegnati a questo utente. Nomi di ruolo presi da <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Un oggetto JSON contenente una serie di attributi da modificare se si verifica la corrispondenza.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Un oggetto JSON contenente una serie di attributi da abbinare.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Un oggetto JSON contenente opzioni specifiche di raccolta.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Un oggetto JSON popolato da una scoperta Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Una rappresentazione JSON contenente i dettagli dell\'elemento di coda da eseguire.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Una rappresentazione JSON dei campi per questa integrazione.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Una rappresentazione JSON dei singoli test e dei loro risultati su tutti i dispositivi che questa linea di base è stata eseguita contro.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Una rappresentazione JSON dei test che compongono questa politica.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Una LAN può essere collegata a un WAN utilizzando un router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Una rete di area metropolitana (MAN) è una grande rete di computer che di solito abbraccia una città o un grande campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed Discover utilizza un IP iniziale per recuperare gli IP di qualsiasi altro dispositivo che conosce, aggiunge quegli IP all\'elenco e scansiona quelli - chiedendo di nuovo qualsiasi IP di cui quei dispositivi aggiuntivi sanno. Risciacquare e ripetere. È abbastanza intelligente sapere se ha già scansionato un dato IP nella sua esecuzione e scarta qualsiasi già scansionato (o anche nella lista da scansionare).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Una scoperta Subnet esegue la scansione degli IP forniti.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Un URL fornito all\'agente che verrà poi scaricato il file e memorizzarlo sul disco locale.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Un URL a un file da scaricare.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Una rete a spina dorsale fa parte di un\'infrastruttura di rete informatica che fornisce un percorso per lo scambio di informazioni tra diverse LAN o sottorete. Una spina dorsale può collegare diverse reti all\'interno dello stesso edificio, attraverso edifici diversi, o su una vasta area.<br/><br/>Ad esempio, una grande azienda potrebbe implementare una rete a spina dorsale per collegare reparti che si trovano in tutto il mondo. L\'attrezzatura che unisce le reti dipartimentali costituisce la spina dorsale di rete. Quando si progetta una spina dorsale di rete, le prestazioni della rete e la congestione di rete sono fattori critici da tenere in considerazione. Normalmente, la capacità della rete spina dorsale è maggiore di quella delle singole reti ad essa collegate.<br/><br/>Un altro esempio di una rete a spina dorsale è la spina dorsale di Internet, che è l\'insieme di reti di ampia area (WAN) e router core che collegano tutte le reti collegate a Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un campo calcolato che visualizza il numero di volte che questo pezzo di software è stato trovato sui computer nel Org selezionato (e i suoi discendenti se configurati).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Una rete di area del campus (CAN) è costituita da un\'interconnessione di LAN all\'interno di una zona geografica limitata. Le apparecchiature di rete (interruttori, router) e i mezzi di trasmissione (fibra ottica, impianto di rame, Cat5 cablaggi, ecc.) sono quasi interamente di proprietà dell\'inquilino del campus / proprietario (un\'impresa, università, governo, ecc.).<br/><br/>Ad esempio, una rete universitaria del campus è probabile che collegare una varietà di edifici del campus per collegare college accademici o dipartimenti, la biblioteca e sale di residenza degli studenti.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Una porta chiusa è accessibile (riceve e risponde ai pacchetti di sonda Nmap), ma non c\'è applicazione che ci ascolti. Possono essere utili nel mostrare che un host è su un indirizzo IP (scoperta host, o scansione ping), e come parte del rilevamento del sistema operativo. Poiché le porte chiuse sono raggiungibili, può valere la scansione in seguito nel caso in cui alcuni si aprono. Gli amministratori possono considerare di bloccare tali porte con un firewall. Poi apparivano nello stato filtrato, discussi in seguito.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un collettore è in modalità Collector o Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Un elenco separato da virgola dei CVE applicabili.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Un elenco separato da virgola di valori, uno dei quali può essere selezionato.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un comando da eseguire. Quando l\'agente è basato su Windows, questo comando viene eseguito dall\'interno dell\'agente Powerhell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Un cruscotto è composto da tre colonne e due righe di quello che chiamiamo <i>widgets</i>. Un widget è molto simile a un sommario, solo prendiamo il concetto di sintesi un po \'più lontano. Widgets sono creati in modo semplice utilizzando un paio di scatole a discesa - o è possibile eleggere per utilizzare il proprio SQL per una completa personalizzazione.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Una porta filtrata è considerata aperta (e si attiva il rilevamento del dispositivo).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Una rete di area globale (GAN) è una rete utilizzata per supportare il mobile attraverso un numero arbitrario di LAN wireless, aree di copertura satellitare, ecc. La sfida chiave nelle comunicazioni mobili è disdire le comunicazioni degli utenti da un\'area di copertura locale all\'altra. In IEEE Project 802, questo comporta una successione di LAN wireless terrestri.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Una rete di home area (HAN) è una LAN residenziale utilizzata per la comunicazione tra dispositivi digitali tipicamente dispiegati in casa, di solito un piccolo numero di personal computer e accessori, come stampanti e dispositivi di mobile computing. Una funzione importante è la condivisione di accesso a Internet, spesso un servizio a banda larga attraverso un fornitore di TV via cavo o linea di abbonati digitale (DSL).';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Un elenco di porte TCP personalizzate da scansionare (22 è SSH, 135 è WMI, 62078 è sincronizzazione iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Un elenco di porte UDP personalizzate da scansionare (161 è SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Una rete locale (LAN) è una rete che collega computer e dispositivi in una zona geografica limitata come una casa, una scuola, un edificio per uffici o un gruppo di edifici strettamente posizionati. Ogni computer o dispositivo della rete è un nodo. Le LAN cablate sono molto probabilmente basate sulla tecnologia Ethernet. Gli standard più recenti come ITU-T G.hn offrono anche un modo per creare una LAN cablata utilizzando cablaggi esistenti, come cavi coassiali, linee telefoniche e linee elettriche.<br/><br/>Le caratteristiche di definizione di una LAN, in contrasto con una rete di ampia area (WAN), includono tassi di trasferimento dati più elevati, range geografico limitato, e la mancanza di affidabilità sulle linee affittate per fornire connettività. Le attuali tecnologie Ethernet o IEEE 802.3LAN operano a velocità di trasferimento dati fino a 100 Gbit/s, standardizzate da IEEE nel 2010. Attualmente, 400 Gbit/s Ethernet è in fase di sviluppo.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Una posizione è un indirizzo fisico che può avere dispositivi associati con esso. È possibile assegnare le coordinate e se ci sono dispositivi assegnati, la posizione apparirà sulla mappa quando si dispone di una licenza Open-AudIT Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Un nome di posizione vi aiuterà a trovare questi dispositivi in futuro.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un numero inferiore significa che verrà applicato prima di altre regole.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un numero inferiore significa che verrà applicato prima di altre regole. Il peso predefinito è 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Un nuovo utente ha effettuato l\'accesso a Open-AudIT ed è stato autenticato e autorizzato dal sever LDAP. L\'utente è stato quindi creato in Open-AudIT e connesso. Successo.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Un pacchetto è un pezzo di softare installato. Un pacchetto ha un tipo - antivirus, approvato, backup, vietato, cloud, firewall, ignorato, licenza o altro.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Una password (configurata come hash) che consente di accedere quando si utilizza l\'autenticazione dell\'applicazione.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Una persona ha un account nell\'applicazione Open-AudIT. Il loro account utente ha un elenco di ruoli e organizzazioni associate. I ruoli che l\'utente ha determina cosa possono fare. Le Organizzazioni che un utente ha determina gli elementi WHICH su cui possono agire.<br/><br/>Quando un utente richiede di eseguire un\'operazione (creare, leggere, aggiornare, eliminare) su un oggetto di raccolta, i ruoli sono consultati per vedere se sono autorizzati a eseguire tale azione, quindi gli org sono consultati per determinare se l\'elemento di raccolta appartiene a un org l\'utente ha il permesso di agire su.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Una rete di area personale (PAN) è una rete informatica utilizzata per la comunicazione tra computer e diversi dispositivi tecnologici di informazione vicino a una persona. Alcuni esempi di dispositivi che vengono utilizzati in un PAN sono personal computer, stampanti, fax, telefoni, PDA, scanner e anche console di videogiochi. Un PAN può includere dispositivi cablati e wireless. La portata di un PAN si estende tipicamente a 10 metri. Un PAN cablato è di solito costruito con connessioni USB e FireWire, mentre tecnologie come la comunicazione Bluetooth e infrarossi tipicamente formano un PAN wireless.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Una query è essenzialmente una dichiarazione SQL. Questa dichiarazione viene eseguita contro il database con l\'aggiunta automatica del limite, filtrato per applicare a solo quegli elementi richiesti e solo quegli elementi che l\'utente ha il permesso di visualizzare. Una query può essere creata usando il menu -> Gestione - > Query -> Creare query. Le query contengono un org_id e sono quindi limitate agli utenti appropriati. Un utente deve avere il ruolo org_admin o reporter per creare, aggiornare o eliminare una query. Tutti gli utenti possono eseguire una query. Una query ha un attributo di nome utilizzato per la voce del menu e un attributo della categoria di menu. Questo dice alla GUI Open-Audit in cui submenu posizionare la query. C\'è anche la visualizzazione del menu che dovrebbe essere impostato su <i>#</i> per abilitare la query nella GUI (<i>n</i> per evitare che la query apparisca affatto). La query sarebbe ancora in esecuzione se chiamato utilizzando la sua <code>id</code>, indipendentemente dal valore del menu visualizza.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Un rack è una collezione di dispositivi che vengono assegnati una posizione e un\'altezza all\'interno del rack. Un dispositivo può facoltativamente avere un\'immagine ad esso associata. Un rack è posto di fila. Abbiamo creato un sistema molto granulare per il posizionamento di rack, che è il seguente. Al livello superiore (come sempre) è l\'Organizzazione (Org). Un Org può avere più posizioni (come è sempre stato il caso). Con l\'aggiunta della funzione Racks, una posizione può ora contenere uno o più edifici. Un edificio può contenere uno o più piani. Un piano può contenere una o più camere. Una stanza può contenere una o più righe. Questo suona come un sacco di lavoro, ma i default sono creati per voi. Creare una nuova posizione e i subcomponenti saranno creati automaticamente per voi. Se avete bisogno di più elementi (edifici, camere, ecc) potete aggiungerli come volete. Un rack può anche essere parte di un <i>Po</i> di rack. L\'attributo pod funziona come un tag, piuttosto che un modello di eredità gerarchica rigoroso come per edifici, pavimenti, ecc.<br/><br/>Racks sono una caratteristica disponibile per i clienti con licenza Open-AudIT Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un dominio di routing o uno spazio di indirizzo dove gli indirizzi IP e gli indirizzi MAC sono unici.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Un file cron campione per Linux è qui sotto. Questo dovrebbe essere posto in';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Una zona di sicurezza è un dominio amministrativo o un dominio politico all\'interno del dominio di rete.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Una scoperta dei semi è un altro tipo di scoperta, dove fornisci l\'IP di un singolo <i>semenzaio</i> dispositivo. Questo dispositivo viene controllato, e qualsiasi IP che conosce viene quindi aggiunto all\'elenco degli IP da controllare. Poi, questi dispositivi sono controllati e qualsiasi IP che conoscono vengono aggiunti anche all\'elenco degli IP per l\'auditing. Questo processo continua quindi all\'interno dei parametri configurati dall\'utente.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Una breve descrizione della voce di registro.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Una rete di area di archiviazione (SAN) è una rete dedicata che consente l\'accesso all\'archiviazione dati consolidata a livello di blocco. Gli SAN sono utilizzati principalmente per rendere i dispositivi di archiviazione, come array di dischi, librerie di nastri e jukebox ottici, accessibili ai server in modo che i dispositivi appaiono come dispositivi collegati localmente al sistema operativo. A SAN tipicamente ha una propria rete di dispositivi di archiviazione che generalmente non sono accessibili attraverso la rete locale di altri dispositivi. I costi e la complessità di SAN sono diminuiti nei primi anni 2000 a livelli che permettono una più ampia adozione sia in ambito aziendale che in ambienti di piccole e medie dimensioni.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Una stringa che corrisponde al <code>software.name</code> attributo. È possibile utilizzare lo standard SQL wildcard del percento (%) per abbinare uno o più caratteri.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Un sistema strutturato per la gestione di informazioni sensibili';

$GLOBALS["lang"]['A timestamp.'] = 'Un timestamp.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Un utente ha un Org primario e un elenco di Org che possono accedere. Un utente combina questo con un elenco di ruoli assegnati che definiscono quali azioni possono prendere su elementi assegnati agli Org a cui hanno accesso. La combinazione di un utente <i>o</i> e <i>ruoli</i> definire ciò che possono e non possono fare all\'interno di Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Un utente avrà un elenco di organizzazioni associate (orgs). Ogni org che l\'utente ha permetterà loro di agire su elementi all\'interno di tale org secondo il loro ruolo(i).<br/><br/>Tutti gli org tranne l\'org predefinito hanno un genitore. Pensa a un Org Chart. Se un utente ha il permesso su un Org, hanno anche il permesso su qualsiasi discendente di quel Org.<br/><br/>Gli utenti sono anche autorizzati il permesso su un bambino org per vedere gli elementi da genitore org per determinate collezioni. Questi sono: dashboard, scoperte_scan_options, campi, file, gruppi, query, report, ruoli, regole, script, riassunti, widget.<br/><br/>Non dimenticate di avere il controllo granulare su ciò che gli utenti possono vedere e fare utilizzando Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Un utente avrà un elenco di organizzazioni associate (orgs). Ogni org che l\'utente ha permetterà loro di agire su elementi all\'interno di tale org secondo il loro ruolo(i).<br/><br/>Tutti gli org tranne l\'org predefinito hanno un genitore. Pensa a un Org Chart. Se un utente ha il permesso su un Org, hanno anche il permesso su qualsiasi discendente di quel Org.<br/><br/>Abbiamo anche permesso a un utente con il permesso su un bambino org di vedere gli elementi da genitore org per determinate collezioni. Questi sono: dashboard, scoperte_scan_options, campi, file, gruppi, query, ruoli, regole, script, riassunti, widget.<br/><br/>Non dimenticate di avere controllo granulare su ciò che gli utenti possono vedere e fare utilizzando';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Una rete privata virtuale (VPN) è una rete di sovrapposizione in cui alcuni dei collegamenti tra i nodi sono portati da connessioni aperte o circuiti virtuali in una rete più grande (ad esempio, Internet) invece che da fili fisici. I protocolli di livello di collegamento dati della rete virtuale sono detti tunnel attraverso la rete più grande quando questo è il caso. Un\'applicazione comune è la comunicazione sicura attraverso Internet pubblico, ma una VPN non deve avere funzionalità di sicurezza esplicite, come l\'autenticazione o la crittografia dei contenuti. Le VPN, ad esempio, possono essere utilizzate per separare il traffico di diverse comunità di utenti su una rete sottostante con forti funzionalità di sicurezza.<br/><br/>VPN potrebbe avere prestazioni migliori, o potrebbe avere un accordo di livello di servizio definito (SLA) tra il cliente VPN e il provider di servizi VPN. Generalmente, una VPN ha una topologia più complessa di punto a punto.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Una vulnerabilità che influisce sulla disponibilità può consentire agli aggressori di interrompere i servizi, i sistemi di crash o causare la negazione del servizio (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Una vulnerabilità che influisce sulla riservatezza può consentire agli aggressori di leggere dati sensibili, come informazioni personali, credenziali o dati aziendali proprietari (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Una vulnerabilità che influenza l\'integrità può consentire agli aggressori di modificare i dati, iniettare codice dannoso, o modificare le configurazioni di sistema (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Una vulnerabilità può essere editied e più specifici nomi dei pacchetti forniti dove i dati di arricchimento sono insufficienti o SQL generato non è abbastanza corretto.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Un elemento di vulnerabilità in Open-AudIT può essere considerato come essenzialmente una query contro il tuo database per determinare la tua potenziale esposizione a un dato rapporto CVE. Una vulnerabilità è costituita dalla relazione CVE, insieme ai dati di arricchimento di FirstWave. Questi due elementi sono combinati per produrre una query adatta che viene scaricata automaticamente da FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Una vasta rete di area (WAN) è una rete di computer che copre una vasta area geografica come una città, un paese, o si estende anche distanze intercontinentali. Un WAN utilizza un canale di comunicazione che combina molti tipi di media come linee telefoniche, cavi e onde d\'aria. Un WAN spesso fa uso di impianti di trasmissione forniti da vettori comuni, come le compagnie telefoniche. Le tecnologie WAN generalmente funzionano ai tre strati inferiori del modello di riferimento OSI: lo strato fisico, lo strato di collegamento dati e lo strato di rete.';

$GLOBALS["lang"]['AD Group'] = 'Gruppo AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, ecc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Tutti gli IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Accesso Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentazione API';

$GLOBALS["lang"]['API Key required.'] = 'Chiave API necessaria.';

$GLOBALS["lang"]['API Result'] = 'Risultato API';

$GLOBALS["lang"]['About'] = 'Informazioni su';

$GLOBALS["lang"]['Above are the only required items.'] = 'Sopra sono gli unici elementi richiesti.';

$GLOBALS["lang"]['Accept'] = 'Accettare';

$GLOBALS["lang"]['Access Model'] = 'Modello di accesso';

$GLOBALS["lang"]['access_point'] = 'Punto di accesso';

$GLOBALS["lang"]['Access Point'] = 'Punto di accesso';

$GLOBALS["lang"]['access_token'] = 'Token di accesso';

$GLOBALS["lang"]['Access Token'] = 'Token di accesso';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'L\'accesso alla condivisione di admin$ e RPC utilizza il protocollo SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Revisione:';

$GLOBALS["lang"]['Ack By'] = 'Revisione:';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Azione';

$GLOBALS["lang"]['Action'] = 'Azione';

$GLOBALS["lang"]['action_audit'] = 'Audit d\'azione';

$GLOBALS["lang"]['Action Audit'] = 'Audit d\'azione';

$GLOBALS["lang"]['action_command'] = 'Comando d\'azione';

$GLOBALS["lang"]['Action Command'] = 'Comando d\'azione';

$GLOBALS["lang"]['action_date'] = 'Data d\'azione';

$GLOBALS["lang"]['Action Date'] = 'Data d\'azione';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositivi di azione assegnati alla posizione';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositivi di azione assegnati alla posizione';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositivi di azione assegnati a Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositivi di azione assegnati a Org';

$GLOBALS["lang"]['action_download'] = 'Scarica l\'azione';

$GLOBALS["lang"]['Action Download'] = 'Scarica l\'azione';

$GLOBALS["lang"]['action_uninstall'] = 'Disinstallazione di azione';

$GLOBALS["lang"]['Action Uninstall'] = 'Disinstallazione di azione';

$GLOBALS["lang"]['actioned'] = 'Azioni';

$GLOBALS["lang"]['Actioned'] = 'Azioni';

$GLOBALS["lang"]['actioned_by'] = 'Azioni';

$GLOBALS["lang"]['Actioned By'] = 'Azioni';

$GLOBALS["lang"]['actioned_date'] = 'Data d\'azione';

$GLOBALS["lang"]['Actioned Date'] = 'Data d\'azione';

$GLOBALS["lang"]['actions'] = 'Azioni';

$GLOBALS["lang"]['Actions'] = 'Azioni';

$GLOBALS["lang"]['Activate'] = 'Attivare';

$GLOBALS["lang"]['Activate Free License'] = 'Attiva la licenza gratuita';

$GLOBALS["lang"]['Activate Key'] = 'Attiva la chiave';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Attivare una licenza Enterprise gratuita';

$GLOBALS["lang"]['Active'] = 'Attivo';

$GLOBALS["lang"]['Active / Active'] = 'Attivo / Attivo';

$GLOBALS["lang"]['Active / Passive'] = 'Attivo / Passivo';

$GLOBALS["lang"]['Active Directory'] = 'Directory attiva';

$GLOBALS["lang"]['Active Directory Domain'] = 'Dominio di Active Directory';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Server di Active Directory';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory e OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Dominio di annuncio';

$GLOBALS["lang"]['Ad Domain'] = 'Dominio di annuncio';

$GLOBALS["lang"]['ad_group'] = 'Gruppo di annunci';

$GLOBALS["lang"]['Ad Group'] = 'Gruppo di annunci';

$GLOBALS["lang"]['ad_server'] = 'Server degli annunci';

$GLOBALS["lang"]['Ad Server'] = 'Server degli annunci';

$GLOBALS["lang"]['Add'] = 'Aggiungi';

$GLOBALS["lang"]['Add Credentials'] = 'Aggiungi credenziali';

$GLOBALS["lang"]['Add Device'] = 'Aggiungi dispositivo';

$GLOBALS["lang"]['Add Device to Application'] = 'Aggiungi dispositivo all\'applicazione';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Aggiungi dispositivo a cluster';

$GLOBALS["lang"]['Add Exception'] = 'Aggiungi eccezione';

$GLOBALS["lang"]['Add Field'] = 'Aggiungi campo';

$GLOBALS["lang"]['Add If'] = 'Aggiungi se';

$GLOBALS["lang"]['Add Policies from Device'] = 'Aggiungi criteri dal dispositivo';

$GLOBALS["lang"]['Add Policy'] = 'Aggiungi criterio';

$GLOBALS["lang"]['Add Then'] = 'Aggiungere poi';

$GLOBALS["lang"]['Add Your Credentials'] = 'Aggiungi le tue credenziali';

$GLOBALS["lang"]['Add image'] = 'Aggiungi immagine';

$GLOBALS["lang"]['additional_items'] = 'Articoli aggiuntivi';

$GLOBALS["lang"]['Additional Items'] = 'Articoli aggiuntivi';

$GLOBALS["lang"]['address'] = 'Indirizzo';

$GLOBALS["lang"]['Address'] = 'Indirizzo';

$GLOBALS["lang"]['Address any nonconformities'] = 'Rivolgere qualsiasi non conformità';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Risultati dell\'audit di indirizzo e azioni correttive';

$GLOBALS["lang"]['Admin'] = 'Amministrazioni';

$GLOBALS["lang"]['admin_status'] = 'Stato di amministrazione';

$GLOBALS["lang"]['Admin Status'] = 'Stato di amministrazione';

$GLOBALS["lang"]['advanced'] = 'Avanzato';

$GLOBALS["lang"]['Advanced'] = 'Avanzato';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Dopo che un\'integrazione è stata creata, quando si visualizza i dettagli di un\'integrazione si noterà un campo chiamato Debug. Questo è impostato a no per impostazione predefinita. Cambiarlo a sì fornisce logging extra quando un\'integrazione viene eseguita. Debug non dovrebbe essere lasciato come si. Questo perché l\'output di debug conterrà tutto ciò che viene recuperato dai sistemi esterni, inclusi elementi come le credenziali WMI e SNMP. L\'opzione di debug dovrebbe essere utilizzata solo quando si è verificato un problema e si desidera scavare più a fondo per vedere se è possibile determinare il perché.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Dopo aver completato quanto sopra, disinstallare l\'agente.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agente? Discovery? Credenziali?';

$GLOBALS["lang"]['agents'] = 'Agenti';

$GLOBALS["lang"]['Agents'] = 'Agenti';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Le voci degli agenti possono essere create che specificano una durata, una rete e un sistema operativo. Se tutti i test corrispondono, il server chiede all\'agente di eseguire azioni. Se non è impostato alcun test, è escluso dal <i>tutti devono corrispondere</i> requisito.<br/><br/>È possibile creare più agenti e avere il server controllare una o tutte le voci dell\'agente. Si potrebbe (ad esempio) specificare un agente che dice <i>Se l\'agente IP è in questa subnet, impostare la posizione_id del dispositivo</i>.<br/><br/>Un altro esempio potrebbe non essere l\'esecuzione di un audit, piuttosto scaricare uno script ed eseguirlo. Se l\'agente è installato con i diritti di amministratore, è ora possibile gestire le macchine senza aprire <strong>qualsiasi</strong> porti da esso al mondo.<p>Attivare agenti avanzati significa che un agente può essere istruito per scaricare qualsiasi file ed eseguire qualsiasi comando. <strong>AVVERTENZA</strong>: Questo comporta rischi di sicurezza. Questa configurazione sarà <strong>solo</strong> funzione durante l\'esecuzione di Open-AudIT utilizzando HTTPS e un certificato valido (Autorità di certificazione fornita) per </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressiva';

$GLOBALS["lang"]['Aland Islands'] = 'Isole Aland';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'Albanese';

$GLOBALS["lang"]['alert_style'] = 'Stile di allarme';

$GLOBALS["lang"]['Alert Style'] = 'Stile di allarme';

$GLOBALS["lang"]['Algeria'] = 'Algeria';

$GLOBALS["lang"]['algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Tutti';

$GLOBALS["lang"]['All IPs'] = 'Tutti gli IP';

$GLOBALS["lang"]['All Policies'] = 'Tutte le politiche';

$GLOBALS["lang"]['All Queued Items'] = 'Tutti gli articoli queued';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Tutti gli URL delle collezioni utilizzano il formato';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Tutti i sotto-tavoli del dispositivo contengono un paio di colonne importanti.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Tutti i dispositivi con un tipo come computer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Tutti i dispositivi con un tipo di computer o router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Tutti i dispositivi senza un tipo di interruttore e stampante.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Tutti i dispositivi senza un tipo di interruttore e stampante. Essenzialmente lo stesso della query di cui sopra.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Tutte le opzioni di scoperta regolari sono disponibili anche per l\'uso in Dispositivi Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Tutte le attività possono essere create lo stesso in Windows e Linux. Le attività utilizzano il metodo CRON per l\'esecuzione di pianificazione.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Insieme a questa richiesta di informazioni, rispediamo ai datapoint di FirstWave che ci daranno alcune informazioni molto necessarie sull\'uso della funzionalità e sulla vostra installazione.';

$GLOBALS["lang"]['Also can be created from the'] = 'Anche può essere creato da';

$GLOBALS["lang"]['Alternatives'] = 'Alternative';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campi';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Una scoperta di Active Directory interroga Active Directory per un elenco di reti e la scansione degli IP associati come una normale scoperta Subnet.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Un Org (organizzazione) è il proprietario della maggior parte degli articoli in collezioni all\'interno di Open-AudIT. Con l\'eccezione di oggetti globali come <i>configurazione</i>, la maggior parte degli elementi sono assegnati a (di proprietà) un Org. Un utente ha accesso a quegli elementi in una raccolta, che di seguito a un Org l\'utente ha il permesso su.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Un\'applicazione accetta attivamente connessioni TCP, datagrammi UDP o associazioni SCTP su questa porta. Trovare questi è spesso l\'obiettivo primario della scansione della porta. Le persone che pensano alla sicurezza sanno che ogni porto aperto è un viale per l\'attacco. Gli aggressori e i pen-tester vogliono sfruttare le porte aperte, mentre gli amministratori cercano di chiuderle o proteggerle con i firewall senza ostacolare gli utenti legittimi. Le porte aperte sono anche interessanti per le scansioni non di sicurezza perché mostrano servizi disponibili per l\'uso in rete.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Una serie di <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Una serie di <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Una serie di oggetti che rappresentano collegamenti esterni a maggiori informazioni.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Un\'ipotesi educata all\'identità e al tipo di dispositivo';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un documento JSON crittografato contenente gli attributi richiesti in base alla <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Una rete privata aziendale è una rete che una singola organizzazione costruisce per interconnettere le sue sedi di uffici (ad esempio, siti di produzione, uffici di testa, uffici remoti, negozi) in modo da poter condividere risorse informatiche.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Una voce può essere creata utilizzando l\'interfaccia web se l\'utente corrente ha un ruolo che contiene';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Un esempio JSON POST corpo è qui sotto. Questo dovrebbe essere allegato al modulo "dati".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Un esempio widget SQL che mostra i dispositivi contati per posizione.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Un utente Open-AudIT esistente è stato autenticato e autorizzato dal server LDAP. Successo.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Indicazione del livello di servizio richiesto da questo sito.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un campo interno che indica se la scoperta è completata.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Una porta aperta viene considerata aperta (e attiva il rilevamento del dispositivo).<br/>Nelle puntate precedenti di Open-Aud IT considerato una risposta Nmap';

$GLOBALS["lang"]['An optional GeoCode'] = 'Un GeoCode opzionale';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Una password opzionale da usare sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analizzazioni';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'E infine, fare clic su Invia per eseguire questa scoperta.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'E se qualcosa va sbagliato?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'E infine clicca <i>Inviare</i> per creare il tuo metodo Open-AudIT Auth per Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'E infine, non tanto una questione di sicurezza - più pace della mente. Le strutture dei dati sono aperte e documentate. Puoi vederli';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'E fornire un nome - noi umilmente consigliamo Open-AudIT 🙂, ma si può nominare tutto ciò che ti piace. Assicurarsi l\'opzione per <i>Integra qualsiasi altra applicazione che non trovi nella galleria (Non-gallery)</i> è selezionato. E poi clicca <i>Creare<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'E molto altro.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Allegato A Controlli';

$GLOBALS["lang"]['Antarctica'] = 'Antartide';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Pacchetti AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua e Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Eventuali porte TCP (comma seperate, senza spazi) che si desidera escludere da questa scoperta. Disponibile solo quando si utilizza Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Eventuali porte UDP (comma seperato, senza spazi) si desidera escludere da questa scoperta. Disponibile solo quando si utilizza Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Qualsiasi documentazione aggiuntiva di cui hai bisogno.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Qualsiasi ulteriore nota che ti interessa fare.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Eventuali attributi seguiti da un * indicano che i dati CVSS meno di v4 sono stati utilizzati per completare questo campo. Per impostazione predefinita, cerchiamo di utilizzare i campi v4, tuttavia se non sono popolati, cadremo nella versione precedente per gli attributi.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Tutti i dispositivi saranno assegnati a questo Org quando eseguono il loro script di audit (se impostato).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Tutti i dispositivi saranno assegnati a questo Org quando eseguono il loro script di audit (se impostato). Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Qualsiasi dispositivo scoperto sarà assegnato a questa posizione se impostato. Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Tutti i dispositivi scoperti saranno assegnati a questa posizione quando eseguono il loro script di audit (se impostato).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Tutti i dispositivi scoperti saranno assegnati a questa posizione quando eseguono il loro script di audit (se impostato). Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Qualsiasi dispositivo scoperto verrà assegnato a questo Org se impostato. Se non impostato, sono assegnati al <code>org_id</code> di questa scoperta. Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Tutti i file trovati in questo modo sono memorizzati in <i>eseguibile</i> tabella come per qualsiasi altro componente del dispositivo.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Qualsiasi filtro richiesto. NOTA: Quando il tipo = traffico, questo rappresenta l\'icona font-awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Eventuali porte TCP specifiche che si desidera testato (comma seperato, senza spazi).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Eventuali porte UDP specifiche che si desidera testato (comma seperato, senza spazi).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Tutte le immagini caricate dall\'utente sono posizionate qui.';

$GLOBALS["lang"]['Application'] = 'Applicazione';

$GLOBALS["lang"]['Application Definitions'] = 'Definizioni di applicazione';

$GLOBALS["lang"]['application_id'] = 'ID di applicazione';

$GLOBALS["lang"]['Application ID'] = 'ID di applicazione';

$GLOBALS["lang"]['Application Licenses'] = 'Licenza d\'applicazione';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Applicazione, Sistema Operativo o Hardware.';

$GLOBALS["lang"]['applications'] = 'Applicazioni';

$GLOBALS["lang"]['Applications'] = 'Applicazioni';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Le applicazioni sono un\'unica funzione Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Le applicazioni sono in fase di introduzione in Open-AudIT 2.2 al fine di espandere il concetto come ulteriore sviluppo è fatto.';

$GLOBALS["lang"]['applied'] = 'Applicato';

$GLOBALS["lang"]['Applied'] = 'Applicato';

$GLOBALS["lang"]['Approved'] = 'Approvazione';

$GLOBALS["lang"]['Approved Packages'] = 'Pacchetti approvati';

$GLOBALS["lang"]['April'] = 'Aprile';

$GLOBALS["lang"]['Arabic'] = 'Arabo';

$GLOBALS["lang"]['architecture'] = 'Architettura';

$GLOBALS["lang"]['Architecture'] = 'Architettura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Sei sicuro di voler eliminare questa voce di input?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Sei sicuro di voler eliminare questo prodotto di output?';

$GLOBALS["lang"]['Are you sure?'] = 'Sei sicuro?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Sei sicuro? Questo rimuoverà tutte le voci della coda e impedirà che gli IP rimanenti vengano scoperti.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Sei sicuro? Questo resetterà il conteggio di elaborazione della coda e potrebbe causare il carico sul server.';

$GLOBALS["lang"]['area'] = 'Settore';

$GLOBALS["lang"]['Area'] = 'Settore';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Artìcolo';

$GLOBALS["lang"]['Arp'] = 'Artìcolo';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Come promemoria di come le autorizzazioni funzionano in Open-AudIT, vedi';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Di conseguenza, noi <strong>deve</strong> avere la condivisione di admin$ disponibile all\'utente delle credenziali di scoperta. Si prega di controllare il destinatario Windows macchina fornisce <i>scrivere</i> accesso per l\'utente delle credenziali di scoperta.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Come accennato in precedenza, gli sviluppatori non parlano tutte le lingue di traduzione offerte. Questo significa che non possiamo rivedere con acuracy, il testo tradotto. Proviamo per una recensione rapida. Se vedi qualcosa che non è tradotto correttamente, puoi cambiarlo da solo. Modificare il file di lingua appropriato (come di seguito) e trovare il testo da cambiare. Forse non esiste e devi aggiungerlo. Basta cambiare il testo, salvare il file e aggiornare la pagina. Non c\'è bisogno di riavviare i servizi / demoni per esso di prendere effetto. Potrebbe essere necessario forzare aggiornare il browser.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Come per i benchmark OpenSCAP - <i>Non tentare di implementare nessuna delle impostazioni in questo benchmark senza prima testarle in un ambiente non operativo. I creatori di questo benchmark non si assumono alcuna responsabilità per il suo utilizzo da parte di altre parti, e non fa garanzie, espresse o implicite, circa la sua qualità, affidabilità, o qualsiasi altra caratteristica.</i><br/><br/>Seriamente, non iniziare ciecamente <i>fissaggio</i> problemi rivelati dopo aver eseguito un benchmark senza prima testare accuratamente in un ambiente non produttivo, identico.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Come per gli attributi per gli ambienti del dispositivo. Produzione, Formazione, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Poiché lo script di audit utilizza bash, è possibile utilizzare la wildcard di * quando si definiscono directory ed esclusioni.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Come al solito, vai al menu → Gestisci → Integrazioni → Crea integrazione. Come sopra, se si è in esecuzione su Linux e si dispone di NMIS sullo stesso server, non è necessario fare altro che fare clic <i>Inviare</i>. Non posso rendere più facile di questo.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Mentre eseguiamo Discoveries e raccogliamo i risultati del dispositivo populateremo l\'elenco delle reti. La funzione Beato Subnets utilizza questa lista di reti per accettare solo i dati da dispositivi su tali reti.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Come hai registrato Collectors, scegli dove eseguire questa scoperta.';

$GLOBALS["lang"]['Ask me later'] = 'Chiedimelo più tardi';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Chiedi aiuto alla Comunità o contribuisci ad altre risposte.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Asset ID'] = 'ID di assetto';

$GLOBALS["lang"]['asset_ident'] = 'Settore';

$GLOBALS["lang"]['Asset Ident'] = 'Settore';

$GLOBALS["lang"]['asset_number'] = 'Numero di attività';

$GLOBALS["lang"]['Asset Number'] = 'Numero di attività';

$GLOBALS["lang"]['asset_tag'] = 'Tag:';

$GLOBALS["lang"]['Asset Tag'] = 'Tag:';

$GLOBALS["lang"]['Assign Device to Application'] = 'Assegnare dispositivo all\'applicazione';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Assegnare dispositivo a cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Assegnare dispositivo alla posizione';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assegnare dispositivo all\'organizzazione';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Assegnare dispositivi alla posizione';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Assegnare dispositivi all\'organizzazione';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Assegna un manager o un team ISMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Assegnare un operatore';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Assegnare qualsiasi dispositivo verificato a questo Org. Lascia vuoto per lasciare il dispositivo in Org attualmente assegnato (o per impostare il default).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Assegnare il dispositivo a una posizione';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Assegnare il dispositivo a un Org';

$GLOBALS["lang"]['Assigned To'] = 'Assegnato a';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Assegnazione dispositivi scoperti';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Attualmente possiamo usare netstat_ports, software e utenti.';

$GLOBALS["lang"]['attached_device_id'] = 'ID dispositivo allegato';

$GLOBALS["lang"]['Attached Device ID'] = 'ID dispositivo allegato';

$GLOBALS["lang"]['attached_to'] = 'Attaccato a';

$GLOBALS["lang"]['Attached To'] = 'Attaccato a';

$GLOBALS["lang"]['attachment'] = 'Allegato';

$GLOBALS["lang"]['Attachment'] = 'Allegato';

$GLOBALS["lang"]['attachments'] = 'Attacchi';

$GLOBALS["lang"]['Attachments'] = 'Attacchi';

$GLOBALS["lang"]['attack_complexity'] = 'Complessità di attacco';

$GLOBALS["lang"]['Attack Complexity'] = 'Complessità di attacco';

$GLOBALS["lang"]['attack_requirements'] = 'Requisiti di attacco';

$GLOBALS["lang"]['Attack Requirements'] = 'Requisiti di attacco';

$GLOBALS["lang"]['attack_vector'] = 'Attacco vettoriale';

$GLOBALS["lang"]['Attack Vector'] = 'Attacco vettoriale';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Tenta di ping il dispositivo se non stiamo controllando localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribuzione';

$GLOBALS["lang"]['attributes'] = 'Attributi';

$GLOBALS["lang"]['Attributes'] = 'Attributi';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Gli attributi sono memorizzati per Open-AudIT da utilizzare per particolari campi, attualmente tutti i campi si basano sui dispositivi, le posizioni, le tabelle org e query. Gli attributi che puoi modificare sono associati alle seguenti colonne: Classe, ambiente, stato e tipo.';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Il mio PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Reult Input';

$GLOBALS["lang"]['Audit Software'] = 'Software di controllo';

$GLOBALS["lang"]['Audit Status'] = 'Stato dell\'audit';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Prodotto';

$GLOBALS["lang"]['Audit Windows'] = 'Audit di Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Controllare il dispositivo';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Metodi di Auth';

$GLOBALS["lang"]['Authenticate only'] = 'Autentiche solo';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autenticazione Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protocollo di autenticazione';

$GLOBALS["lang"]['authority_key_ident'] = 'Autorità chiave Identificazione';

$GLOBALS["lang"]['Authority Key Ident'] = 'Autorità chiave Identificazione';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Rinnovamento automatico';

$GLOBALS["lang"]['Auto Renew'] = 'Rinnovamento automatico';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto popolata dal server Open-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenews';

$GLOBALS["lang"]['automatable'] = 'Automatizzazione';

$GLOBALS["lang"]['Automatable'] = 'Automatizzazione';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaticamente popolato in base al Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Disponibilità';

$GLOBALS["lang"]['Availability'] = 'Disponibilità';

$GLOBALS["lang"]['Available Benchmarks'] = 'Benchmarks disponibili';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Analisi di risveglio';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaigian';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaigian';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BT1 RT RT RT RT RT RT RT RT';

$GLOBALS["lang"]['BTU Total'] = 'BT1 RT RT RT RT RT RT RT RT';

$GLOBALS["lang"]['Backbone network'] = 'Rete di backbone';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banca';

$GLOBALS["lang"]['Bank'] = 'Banca';

$GLOBALS["lang"]['Banned'] = 'Banati';

$GLOBALS["lang"]['Banned Packages'] = 'Pacchetti bannati';

$GLOBALS["lang"]['bar_code'] = 'Codice a barre';

$GLOBALS["lang"]['Bar Code'] = 'Codice a barre';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Base Score';

$GLOBALS["lang"]['Base Score'] = 'Base Score';

$GLOBALS["lang"]['base_severity'] = 'Segreteria di base';

$GLOBALS["lang"]['Base Severity'] = 'Segreteria di base';

$GLOBALS["lang"]['based_on'] = 'Sulla base';

$GLOBALS["lang"]['Based On'] = 'Sulla base';

$GLOBALS["lang"]['baseline'] = 'Linea di base';

$GLOBALS["lang"]['Baseline'] = 'Linea di base';

$GLOBALS["lang"]['baseline_id'] = 'ID base';

$GLOBALS["lang"]['Baseline ID'] = 'ID base';

$GLOBALS["lang"]['baselines'] = 'Baseline';

$GLOBALS["lang"]['Baselines'] = 'Baseline';

$GLOBALS["lang"]['baselines_policies'] = 'Criteri di base';

$GLOBALS["lang"]['Baselines Policies'] = 'Criteri di base';

$GLOBALS["lang"]['Baselines Policy'] = 'Politica di base';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Informazioni sulla politica di base';

$GLOBALS["lang"]['baselines_results'] = 'Risultati di base';

$GLOBALS["lang"]['Baselines Results'] = 'Risultati di base';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Le linee di base possono confrontare porte, utenti e software netstat.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Le linee di base consentono di combinare i dati di audit con un insieme di attributi precedentemente definiti (la vostra linea di base) per determinare la conformità dei dispositivi.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Linee di base per il confronto dei dispositivi';

$GLOBALS["lang"]['Basic'] = 'Base di base';

$GLOBALS["lang"]['Basque'] = 'Baschi';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Perché cerchiamo di essere il più trasparente possibile, ecco i vostri dati reali che inviamo.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Essere in grado di determinare quali macchine sono configurate allo stesso modo è una parte importante dell\'amministrazione e dell\'audit dei sistemi – e ora la segnalazione su questo sarà resa semplice e automatizzata. Una volta che si definisce la vostra linea di base verrà automaticamente eseguito contro un insieme di dispositivi su un programma predeterminato. L\'output di queste basi eseguite sarà disponibile per la visualizzazione web, l\'importazione in un sistema di terze parti o anche come rapporto stampato.<br/><br/>Per scopi di auditing e gestione può essere vantaggioso per la linea di base singoli dispositivi contro un buon dispositivo fisso e conosciuto. Le linee di base consentono di combinare i dati di audit con un insieme di attributi precedentemente definiti (la vostra linea di base) per determinare la conformità dei dispositivi.';

$GLOBALS["lang"]['Belarus'] = 'Bielorussia';

$GLOBALS["lang"]['Belgium'] = 'Belgio';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Di seguito è riportato un esempio del formato csv richiesto.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Sotto queste righe sono dove le variabili vengono iniettate nello script. A seguito del nostro precedente esempio, lo script di audit Linux è popolato con la nostra directory così';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Sotto si può vedere un esempio Org Grafico. Se un utente ha il permesso sul <i>Finanza A</i> Org, hanno anche il permesso sul discendente Orgs di Dept A, B & C. Questo è indipendentemente dalla collezione richiesta.<br/><br/>Se la raccolta richiesta consente agli ascendenti, l\'utente avrà anche accesso agli articoli Company #1 e Default Org. Questo è per (come sopra) query, gruppi, et al.<br/><br/>Nota - Un utente può avere accesso a una query da Default Org, ma questa è la query stessa non il risultato. Il risultato mostrerà solo dispositivi a cui l\'utente ha accesso - dispositivi IE da Finance A e Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID Benchmark';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Le attività di Benchmark vengono create automaticamente quando viene creato un benchmark.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'L\'esecuzione e l\'elaborazione di Benchmark possono richiedere una lunga quantità di tempo, quindi la preferenza per programmarli e non eseguirli ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Eccezioni';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Eccezioni';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Criteri di Benchmarks';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Criteri di Benchmarks';

$GLOBALS["lang"]['benchmarks_result'] = 'Risultato dei marchi';

$GLOBALS["lang"]['Benchmarks Result'] = 'Risultato dei marchi';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks sono creati fornendo un sistema operativo e una versione, combinati con una guida specifica e un elenco di macchine per eseguirlo. Dopo la creazione, i benchmark vengono eseguiti contro l\'elenco delle macchine su un programma.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks per la migliore configurazione della pratica';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks fornisce raccomandazioni di sicurezza per i computer, utilizzando gli strumenti e le politiche OpenSCAP.<p><i>Dalla homepage di OpenSCAP:</i> Nel mondo in continua evoluzione della sicurezza informatica dove vengono scoperte e patchate nuove vulnerabilità ogni giorno, il rafforzamento della conformità alla sicurezza deve essere un processo continuo. Ha anche bisogno di includere un modo per apportare modifiche alle politiche, nonché la valutazione periodica e il monitoraggio dei rischi. L\'ecosistema OpenSCAP fornisce strumenti e politiche personalizzabili per un\'implementazione rapida, economica e flessibile di questi processi.</p>';

$GLOBALS["lang"]['Benefits'] = 'Vantaggi';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Migliori Pratiche';

$GLOBALS["lang"]['Best Practises'] = 'Migliori Pratiche';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bio';

$GLOBALS["lang"]['Bios'] = 'Bio';

$GLOBALS["lang"]['body'] = 'Corpo';

$GLOBALS["lang"]['Body'] = 'Corpo';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Dispositivo di avvio';

$GLOBALS["lang"]['Boot Device'] = 'Dispositivo di avvio';

$GLOBALS["lang"]['bootable'] = 'Stivali';

$GLOBALS["lang"]['Bootable'] = 'Stivali';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia-Erzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Entrambe le forme';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Isola di Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasile';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portoghese brasiliano';

$GLOBALS["lang"]['Breaking it Down'] = 'Rompere giù';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Territorio dell\'Oceano Indiano britannico (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Isole Vergini Britanniche';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Sfoglia l\'albero per Console Root -> Servizi componenti -> Computer -> Il mio computer<br/><br/>Fare clic destro su <i>Il mio computer</i> e selezionare le proprietà<br/><br/>Selezionare la <i>Proprietà di default</i> scheda';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Totale';

$GLOBALS["lang"]['Btu Total'] = 'Totale';

$GLOBALS["lang"]['build_number'] = 'Numero di costruzione';

$GLOBALS["lang"]['Build Number'] = 'Numero di costruzione';

$GLOBALS["lang"]['build_number_full'] = 'Numero di costruzione completo';

$GLOBALS["lang"]['Build Number Full'] = 'Numero di costruzione completo';

$GLOBALS["lang"]['Building'] = 'Edilizia';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Costruire fiducia con clienti e partner';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgaro';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Modifica';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Modifica modulo';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Attributi del dispositivo di modifica della lampadina';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk edit selezioni non verranno selezionate dopo aver cliccato sulla pagina successiva.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisiti di business';

$GLOBALS["lang"]['Business Requirements'] = 'Requisiti di business';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Ma ho solo macchine client di Windows disponibili!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Ma non voglio dover cambiare il file di lingua ogni volta che aggiorno!';

$GLOBALS["lang"]['Buy'] = 'Comprare';

$GLOBALS["lang"]['Buy More'] = 'Ulteriori informazioni';

$GLOBALS["lang"]['Buy More Licenses'] = 'Acquista più licenze';

$GLOBALS["lang"]['By'] = '#';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Per impostazione predefinita, integriamo tutti i dispositivi con il loro attributo nmis_manage impostato su <i>#</i>. Con 4.2.0 spediamo anche una regola che dice <i>Se scopriamo un dispositivo e ha un OID SNMP valido, contrassegnare quel dispositivo come gestito da NMIS</i>. Ovviamente puoi disabilitarlo se non è quello che vuoi.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Per impostazione predefinita, saltiamo la convalida del certificato perché i clienti tendono a utilizzare i certificati auto-firmati. Per abilitare la validazione del certificato, modificare il file qui sotto';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maschera';

$GLOBALS["lang"]['cli_config'] = 'CLI Configurazione';

$GLOBALS["lang"]['CLI Config'] = 'CLI Configurazione';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CENTRO';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs con uno stato di ricevuto, in attesa di analisi, in fase di analisi, respinto. Questi CVE (soprattutto) non contengono informazioni sufficienti per consentire di generare una query SQL corretta.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calcolato dalla scoperta.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Numero totale calcolato di indirizzi IP validi per questa rete.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calcolato al termine, il tempo necessario per eseguire questo articolo.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene una rappresentazione JSON dei dispositivi in questa integrazione. Ogni link a <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene una rappresentazione JSON dei luoghi in questa integrazione. Ogni link a <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi selezionati da Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi selezionati il sistema esterno.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi da aggiornare nel sistema esterno.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi aggiornati in Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Chiama un prompt dei comandi facendo clic su Avvio e cercando <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Cambogia';

$GLOBALS["lang"]['Cameroon'] = 'Camerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Rete di area del campus';

$GLOBALS["lang"]['Campus area network'] = 'Rete di area del campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Può essere <code>active</code>♪ <code>passive</code> o vuoto.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Può essere <code>application</code>♪ <code>compute</code>♪ <code>database</code>♪ <code>storage</code>♪ <code>virtualisation</code>♪ <code>web</code>♪ <code>other</code> o vuoto.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Può essere <code>auto</code>♪ <code>fixed</code>♪ <code>other</code> o vuoto.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Può essere <code>high availability</code>♪ <code>load balancing</code>♪ <code>performance</code>♪ <code>storage</code>♪ <code>other</code> o vuoto.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Può essere <code>line</code>♪ <code>pie</code> o <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Può essere <code>user</code> o <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Può essere impostato da scoperta o utente.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Può essere impostato da scoperta o utente. Utilizza l\'ID dalla tabella delle posizioni.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Può l\'utente modificare questo articolo.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Annulla';

$GLOBALS["lang"]['capabilities'] = 'Capacità';

$GLOBALS["lang"]['Capabilities'] = 'Capacità';

$GLOBALS["lang"]['Capacity'] = 'Capacità';

$GLOBALS["lang"]['Cape Verde'] = 'Capo Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitale';

$GLOBALS["lang"]['caption'] = 'Capacita\'';

$GLOBALS["lang"]['Caption'] = 'Capacita\'';

$GLOBALS["lang"]['Catalan'] = 'Catalano';

$GLOBALS["lang"]['Cayman Islands'] = 'Isole Cayman';

$GLOBALS["lang"]['Cellular Details'] = 'Dettagli cellulari';

$GLOBALS["lang"]['Central African Republic'] = 'Repubblica Centrafricana';

$GLOBALS["lang"]['certificate'] = 'Certificato';

$GLOBALS["lang"]['Certificate'] = 'Certificato';

$GLOBALS["lang"]['certificate_file'] = 'Certificato di file';

$GLOBALS["lang"]['Certificate File'] = 'Certificato di file';

$GLOBALS["lang"]['certificate_name'] = 'Nome del certificato';

$GLOBALS["lang"]['Certificate Name'] = 'Nome del certificato';

$GLOBALS["lang"]['certificates'] = 'Certificati';

$GLOBALS["lang"]['Certificates'] = 'Certificati';

$GLOBALS["lang"]['Certification'] = 'Certificazione';

$GLOBALS["lang"]['Certification Audit'] = 'Audit di certificazione';

$GLOBALS["lang"]['Certification Process'] = 'Processo di certificazione';

$GLOBALS["lang"]['Chad'] = 'Ciad';

$GLOBALS["lang"]['Change'] = 'Cambiamento';

$GLOBALS["lang"]['change_id'] = 'Cambia ID';

$GLOBALS["lang"]['Change ID'] = 'Cambia ID';

$GLOBALS["lang"]['change_log'] = 'Cambia Log';

$GLOBALS["lang"]['Change Log'] = 'Cambia Log';

$GLOBALS["lang"]['Change Logs'] = 'Cambia i registri';

$GLOBALS["lang"]['change_type'] = 'Tipo di cambiamento';

$GLOBALS["lang"]['Change Type'] = 'Tipo di cambiamento';

$GLOBALS["lang"]['check_minutes'] = 'Controllare il processo verbale';

$GLOBALS["lang"]['Check Minutes'] = 'Controllare il processo verbale';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Controllare SSH su questi porti';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Controlla questa porta per qualsiasi servizio SSH.';

$GLOBALS["lang"]['Chile'] = 'Cile';

$GLOBALS["lang"]['China'] = 'Cina';

$GLOBALS["lang"]['Chinese'] = 'Cinese';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Cinese (tradizionale)';

$GLOBALS["lang"]['Choose'] = 'Scegli';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Scegliere (selezionare OS prima)';

$GLOBALS["lang"]['Choose a Device'] = 'Scegli un dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Scegli un tavolo';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Scegliere il tipo di attività dal primo a discesa. Questo configura i campi aggiuntivi richiesti a seconda del tipo di attività.';

$GLOBALS["lang"]['Christmas Island'] = 'Isola di Natale';

$GLOBALS["lang"]['cidr'] = 'Cid.';

$GLOBALS["lang"]['Cidr'] = 'Cid.';

$GLOBALS["lang"]['circuit_count'] = 'Contatore di circuito';

$GLOBALS["lang"]['Circuit Count'] = 'Contatore di circuito';

$GLOBALS["lang"]['circuit_status'] = 'Stato del circuito';

$GLOBALS["lang"]['Circuit Status'] = 'Stato del circuito';

$GLOBALS["lang"]['city'] = 'Città';

$GLOBALS["lang"]['City'] = 'Città';

$GLOBALS["lang"]['class'] = 'Classe';

$GLOBALS["lang"]['Class'] = 'Classe';

$GLOBALS["lang"]['class_text'] = 'Testo di classe';

$GLOBALS["lang"]['Class Text'] = 'Testo di classe';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Fare clic <i>Nuovo segreto cliente</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Fare clic su Invia per eseguire';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Clicca su <i>Proprietà</i> sotto <i>Gestione</i> intestazione nella colonna del menu centrale. Copiare <i>URL di accesso utente</i>. Una volta copiato, incollalo nell\'editor di testo. Dovrai copiare una sezione di questo campo.<br/><br/>Il nostro campo di esempio sembra questo<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>La sezione che ci serve è <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (l\'ID dell\'inquilino). Questo viene utilizzato in Open-AudIT come <i>Inquinamento</i> campo, quindi incollalo lì dentro.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Fare clic su Registrazioni App per creare una nuova Applicazione, quindi fare clic su Nuova Registrazione Applicazione. Dagli un nome (ho usato Open-AudIT), seleziona l\'app Web / API come il tipo e fornisce qualsiasi URL (l\'URL non è importante) e ora fai clic su Crea.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Fare clic su OK e chiudere la finestra DCOMCNFG.<br/><br/>Le modifiche di cui sopra richiederanno un riavvio per prendere effetto.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Clicca sull\'applicazione che hai appena creato. L\'ID di applicazione visualizzato è l\'ID client.<br/><br/>Per creare il segreto client, fare clic su Impostazioni, quindi Keys. Fornire un nome chiave e selezionare una data di scadenza appropriata, quindi fare clic su Salva.<br/><br/>Il valore sarà popolato per voi - questo è il segreto del cliente.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Fare clic sul pulsante Elimina per rimuovere i dispositivi di esempio da Open-AudIT.<br/>Questo rimuoverà i dispositivi sottostanti dal database. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Fare clic sul pulsante Modifica per <i>SAML di base Configurazione</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Fare clic sul pulsante Importa qui sotto per popolare Open-AudIT con i dati del dispositivo di esempio.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Fare clic sull\'icona a destra del campo che si desidera modificare. Modificare il campo e fare clic sull\'icona verde da inviare.';

$GLOBALS["lang"]['Client ID'] = 'ID cliente';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID cliente e segreto';

$GLOBALS["lang"]['client_ident'] = 'Identificazione del cliente';

$GLOBALS["lang"]['Client Ident'] = 'Identificazione del cliente';

$GLOBALS["lang"]['client_secret'] = 'Segreto del cliente';

$GLOBALS["lang"]['Client Secret'] = 'Segreto del cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nome del sito del cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nome del sito del cliente';

$GLOBALS["lang"]['Close'] = 'Chiudi';

$GLOBALS["lang"]['Closed'] = 'Chiuso';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Dettagli sul cloud';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery e Auditing';

$GLOBALS["lang"]['cloud_id'] = 'ID cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID cloud';

$GLOBALS["lang"]['cloud_log'] = 'Log Cloud';

$GLOBALS["lang"]['Cloud Log'] = 'Log Cloud';

$GLOBALS["lang"]['cloud_name'] = 'Nome del cloud';

$GLOBALS["lang"]['Cloud Name'] = 'Nome del cloud';

$GLOBALS["lang"]['Cloud Network'] = 'Rete cloud';

$GLOBALS["lang"]['clouds'] = 'Nuvole';

$GLOBALS["lang"]['Clouds'] = 'Nuvole';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Le cloud sono una funzionalità disponibile per i clienti con licenza Open-AudIT Enterprise.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'ID cluster';

$GLOBALS["lang"]['Cluster ID'] = 'ID cluster';

$GLOBALS["lang"]['cluster_name'] = 'Nome del cluster';

$GLOBALS["lang"]['Cluster Name'] = 'Nome del cluster';

$GLOBALS["lang"]['cluster_type'] = 'Tipo Cluster';

$GLOBALS["lang"]['Cluster Type'] = 'Tipo Cluster';

$GLOBALS["lang"]['clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters'] = 'Cluster';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Cluster e Reporting';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Isole Cocos (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Collezione';

$GLOBALS["lang"]['Collections'] = 'Collezioni';

$GLOBALS["lang"]['Collector'] = 'Collezionista';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collezionista (UUUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server è un\'unica funzione Enterprise. I clienti Enterprise ricevono una licenza Collector gratuitamente. Le licenze aggiuntive di Collector possono essere acquistate come richiesto.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server è progettato in modo da poter avere un telecomando o <i>collezionista</i> istanza di Open-AudIT in esecuzione su una macchina remota. Quell\'istanza collettore potrebbe essere in un\'altra zona di sicurezza, subnet, cloud hosting istanza o in un sito del cliente. Il collettore remoto sta quindi facendo tutta la scoperta e l\'auditing di dispositivi localmente evitando networking e la complessità firewalling. Il collezionista una volta registrato è completamente controllato dal <i>server</i>. Ciò significa che hai solo bisogno di una connessione HTTP o HTTPS da quella Collector al Server.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Dashboard da collezione';

$GLOBALS["lang"]['Collector Name'] = 'Nome del collezionista';

$GLOBALS["lang"]['collector_uuid'] = 'Collezionista Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collezionista Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Le attività del collettore vengono configurate automaticamente quando la funzione del collettore è abilitata. Le attività di collettore non devono essere create direttamente dagli utenti. I compiti del collezionista possono avere la loro frequenza modificata dopo la creazione. Se il server Open-AudIT ha Collectors che vi segnala, viene fornito un ulteriore calo. È possibile selezionare questo per specificare quale Collector l\'attività dovrebbe essere eseguita. Solo le attività Discovery sono supportate per Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Collezionisti';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'I collettori possono operare in una delle due modalità: Collector e StandAlone. Quando in modalità Collector, l\'istanza di Open-AudIT è gestita dal server principale. Quando in modalità Stand Alone, l\'istanza viene gestita localmente e inoltra qualsiasi dispositivo trovato al server principale.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Collezionisti per la scoperta remota';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Colore';

$GLOBALS["lang"]['Color'] = 'Colore';

$GLOBALS["lang"]['Column'] = 'Colonna';

$GLOBALS["lang"]['Columns'] = 'Colonne';

$GLOBALS["lang"]['command'] = 'Comando';

$GLOBALS["lang"]['Command'] = 'Comando';

$GLOBALS["lang"]['command_options'] = 'Opzioni di comando';

$GLOBALS["lang"]['Command Options'] = 'Opzioni di comando';

$GLOBALS["lang"]['command_output'] = 'Uscita del comando';

$GLOBALS["lang"]['Command Output'] = 'Uscita del comando';

$GLOBALS["lang"]['command_status'] = 'Stato di comando';

$GLOBALS["lang"]['Command Status'] = 'Stato di comando';

$GLOBALS["lang"]['command_time_to_execute'] = 'Tempo di esecuzione';

$GLOBALS["lang"]['Command Time To Execute'] = 'Tempo di esecuzione';

$GLOBALS["lang"]['comment'] = 'Commento';

$GLOBALS["lang"]['Comment'] = 'Commento';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Commenta la linea seguente (circa la linea 49). Basta posizionare un hash all\'inizio della linea.';

$GLOBALS["lang"]['comments'] = 'Osservazioni';

$GLOBALS["lang"]['Comments'] = 'Osservazioni';

$GLOBALS["lang"]['commercial'] = 'Commercializzazione';

$GLOBALS["lang"]['Commercial'] = 'Commercializzazione';

$GLOBALS["lang"]['Commercial Support'] = 'Supporto commerciale';

$GLOBALS["lang"]['common_name'] = 'Nome comune';

$GLOBALS["lang"]['Common Name'] = 'Nome comune';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Comunemente indicato come il clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Comunemente indicato come il clientSecret.';

$GLOBALS["lang"]['Community'] = 'Comunità';

$GLOBALS["lang"]['Community Questions'] = 'Questioni comunitarie';

$GLOBALS["lang"]['Community String'] = 'Sforzo comunitario';

$GLOBALS["lang"]['Comoros the'] = 'Comore il';

$GLOBALS["lang"]['Compact'] = 'Compatto';

$GLOBALS["lang"]['Company'] = 'Società';

$GLOBALS["lang"]['Complete these steps.'] = 'Completa questi passaggi.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complessità dell\'attacco (Low o High).';

$GLOBALS["lang"]['Component Table'] = 'Tabella dei componenti';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componenti (Tutti i dispositivi)';

$GLOBALS["lang"]['Compute'] = 'Computo';

$GLOBALS["lang"]['Condition'] = 'Condizione';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Condurre una valutazione del rischio';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Condurre programmi di sensibilizzazione e formazione';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Riunioni di revisione della gestione dei processi';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Condurre controlli di sorveglianza regolari (solitamente annuali)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Condotto da un corpo accreditato in due fasi';

$GLOBALS["lang"]['Config'] = 'Configurazione';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, attualmente ';

$GLOBALS["lang"]['config_file'] = 'File di configurazione';

$GLOBALS["lang"]['Config File'] = 'File di configurazione';

$GLOBALS["lang"]['config_manager_error_code'] = 'Codice di errore di Gestore di conflitto';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Codice di errore di Gestore di conflitto';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Controllo di accesso basato sul ruolo configurabile (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Configurazione';

$GLOBALS["lang"]['Configuration'] = 'Configurazione';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Modifica di configurazione Rilevazione e Reporting';

$GLOBALS["lang"]['Configure'] = 'Configurazione';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configurare l\'agente lato server per eseguire audit in un programma';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Collegato a';

$GLOBALS["lang"]['connection'] = 'Connessione';

$GLOBALS["lang"]['Connection'] = 'Connessione';

$GLOBALS["lang"]['Connection Options'] = 'Opzioni di connessione';

$GLOBALS["lang"]['connection_status'] = 'Stato di connessione';

$GLOBALS["lang"]['Connection Status'] = 'Stato di connessione';

$GLOBALS["lang"]['connections'] = 'Collegamenti';

$GLOBALS["lang"]['Connections'] = 'Collegamenti';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Considerare filtrato Porti Aperto';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Considerare aperto Porti Aperto';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consulenza, implementazione e altri servizi sono disponibili attraverso';

$GLOBALS["lang"]['contact'] = 'Contatto';

$GLOBALS["lang"]['Contact'] = 'Contatto';

$GLOBALS["lang"]['contact_name'] = 'Nome di contatto';

$GLOBALS["lang"]['Contact Name'] = 'Nome di contatto';

$GLOBALS["lang"]['contained_in'] = 'Contenuti';

$GLOBALS["lang"]['Contained In'] = 'Contenuti';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contiene un oggetto JSON dettagli i widget associati e le loro posizioni.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contiene i campi che determinano se dovremmo usare opzioni di scoperta ssh, snmp e wmi. Un oggetto JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Contesto e leadership';

$GLOBALS["lang"]['Context Engine ID'] = 'ID motore contestuale';

$GLOBALS["lang"]['Context Name'] = 'Nome del testo';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Migliorare costantemente l\'ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Obblighi contrattuali';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obblighi contrattuali';

$GLOBALS["lang"]['Cook Islands'] = 'Isole Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copiare e incollare un risultato di audit';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiare e incollare il sotto al forum, un\'altra istanza di Open-AudIT o in qualsiasi altro luogo è necessario fornire questo articolo.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Copiare <i>ID di applicazione</i> campo e incollarlo in Open-AudIT <i>ID cliente</i> campo per il nuovo Metodo Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Copiare <i>ID cliente</i> e incollarlo in Open-AudIT <i>ID cliente</i> campo.<br/>Se non c\'è un segreto, clicca <i>Generare nuovo segreto</i>, quindi copiare il valore e incollarlo in Open-AudIT <i>Segreto del cliente</i> campo.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Copiare il valore e incollarlo nel modulo Open-AudIT per il <i>Segreto del cliente</i> campo.';

$GLOBALS["lang"]['core_count'] = 'Conteggio del nucleo';

$GLOBALS["lang"]['Core Count'] = 'Conteggio del nucleo';

$GLOBALS["lang"]['Cores'] = 'Nuclei';

$GLOBALS["lang"]['cost_center'] = 'Centro commerciale';

$GLOBALS["lang"]['Cost Center'] = 'Centro commerciale';

$GLOBALS["lang"]['cost_code'] = 'Codice del costo';

$GLOBALS["lang"]['Cost Code'] = 'Codice del costo';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d\'Avorio';

$GLOBALS["lang"]['count'] = 'Conte';

$GLOBALS["lang"]['Count'] = 'Conte';

$GLOBALS["lang"]['country'] = 'Paese';

$GLOBALS["lang"]['Country'] = 'Paese';

$GLOBALS["lang"]['country_code'] = 'Codice paese';

$GLOBALS["lang"]['Country Code'] = 'Codice paese';

$GLOBALS["lang"]['cpu_count'] = 'Conte';

$GLOBALS["lang"]['Cpu Count'] = 'Conte';

$GLOBALS["lang"]['Create'] = 'Creare';

$GLOBALS["lang"]['Create Example Devices'] = 'Creare dispositivi di esempio';

$GLOBALS["lang"]['create_external_count'] = 'Creare Conte esterno';

$GLOBALS["lang"]['Create External Count'] = 'Creare Conte esterno';

$GLOBALS["lang"]['create_external_from_internal'] = 'Crea esterno da interno';

$GLOBALS["lang"]['Create External From Internal'] = 'Crea esterno da interno';

$GLOBALS["lang"]['Create File'] = 'Crea file';

$GLOBALS["lang"]['Create Geocode'] = 'Creare Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Creare un conteggio interno';

$GLOBALS["lang"]['Create Internal Count'] = 'Creare un conteggio interno';

$GLOBALS["lang"]['create_internal_from_external'] = 'Creare interna dall\'esterno';

$GLOBALS["lang"]['Create Internal From External'] = 'Creare interna dall\'esterno';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Crea dispositivi NMIS da Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Creare Open-AudIT Dispositivi da ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Creare Open-AudIT Dispositivi di NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Creare una Baseline per il dispositivo di esempio';

$GLOBALS["lang"]['Create a Discovery'] = 'Creare una Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Creare una dichiarazione di applicabilità (SoA)';

$GLOBALS["lang"]['created_by'] = 'Creato da';

$GLOBALS["lang"]['Created By'] = 'Creato da';

$GLOBALS["lang"]['created_date'] = 'Data creata';

$GLOBALS["lang"]['Created Date'] = 'Data creata';

$GLOBALS["lang"]['Creating'] = 'Creare';

$GLOBALS["lang"]['Creating Credentials'] = 'Creare Credenziali';

$GLOBALS["lang"]['Creating Device'] = 'Creazione del dispositivo';

$GLOBALS["lang"]['Creating Widgets'] = 'Creazione di Widget';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Creare una Discovery Opzioni di scansione';

$GLOBALS["lang"]['Creating a Query'] = 'Creare una Query';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Creazione di una dichiarazione SQL per gruppi';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Creazione di una dichiarazione SQL per le query';

$GLOBALS["lang"]['Creating an Integration'] = 'Creare un\'integrazione';

$GLOBALS["lang"]['creator'] = 'Creatore';

$GLOBALS["lang"]['Creator'] = 'Creatore';

$GLOBALS["lang"]['credential'] = 'Credenziali';

$GLOBALS["lang"]['Credential'] = 'Credenziali';

$GLOBALS["lang"]['Credentials'] = 'Credenziali';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credenziali ID cliente';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credenziali Abbonamento ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credenziali ID inquilino';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Le credenziali sono memorizzate nella <i>credenziali</i> tabella del database. Le informazioni delle credenziali effettive sono crittografate nello storage. Quando viene eseguito un Discovery, un dispositivo ha le sue credenziali specifiche recuperate dal database, decifrate e testate. Se questi falliscono l\'elenco delle credenziali viene anche recuperato, decrittografato e poi testato contro il dispositivo a partire dalle credenziali conosciute per aver lavorato in precedenza. Le credenziali specifiche del dispositivo vengono memorizzate a livello di dispositivo individuale <i>credenziali</i> tavolo (nota - no <i>#</i> nel nome della tabella). I tasti SSH sono testati prima del nome utente SSH / password. Durante il test SSH, le credenziali saranno contrassegnate anche come funzionando con sudo o essendo root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials può avere uno dei pochi tipi diversi - snmp v.1 / v.2, snmp v.3, ssh, chiave ssh, finestre sono tutti implementati. CAVEAT - i tasti ssh non sono ancora implementati per i server Windows Open-AudIT.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credenziali per Amazon AWS utilizzati in Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credenziali per Microsoft Azure usato in Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Critica';

$GLOBALS["lang"]['criticality'] = 'Critica';

$GLOBALS["lang"]['Criticality'] = 'Critica';

$GLOBALS["lang"]['Croatia'] = 'Croazia';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Corrente';

$GLOBALS["lang"]['Current'] = 'Corrente';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Processi di scoperta attuali';

$GLOBALS["lang"]['Current date & time is '] = 'Data attuale e ora ';

$GLOBALS["lang"]['Currently Installed'] = 'Attualmente installato';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Attualmente i tipi supportati sono <code>snmp</code>♪ <code>snmp_v3</code>♪ <code>ssh</code>♪ <code>ssh_key</code> o <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Campi personalizzati';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Porte TCP personalizzate';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Porte TCP personalizzate. Eventuali porte specifiche che liuke avrebbe scansionato oltre alle porte TCP Top. Comma seduto, niente spazi.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personalizzato Porti';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Porte UDP personalizzate. Eventuali porte specifiche che liuke avrebbe scansionato oltre alle Porte UDP Top. Comma seduto, niente spazi.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Opzioni di scansione personalizzabili per Discovery';

$GLOBALS["lang"]['Cve'] = 'C.';

$GLOBALS["lang"]['Cyprus'] = 'Cipro';

$GLOBALS["lang"]['Czech'] = 'Ceco';

$GLOBALS["lang"]['Czech Republic'] = 'Repubblica ceca';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Account DN (opzionale)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (opzionale)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nome host DNS';

$GLOBALS["lang"]['Danish'] = 'Danese';

$GLOBALS["lang"]['dashboard_id'] = 'ID Dashboard';

$GLOBALS["lang"]['Dashboard ID'] = 'ID Dashboard';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widget di bordo';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards and Widgets consentono ai clienti autorizzati Enterprise di creare, leggere, aggiornare ed eliminare entrambe le collezioni per garantire che la loro homepage sia esattamente quello che devono vedere. Non solo, ma un utente è in grado di impostare una data dashboard come propria homepage. Tutti non hanno bisogno di utilizzare la stessa homepage (dashboard), né gli stessi widget su quella dashboard. I clienti con licenza professionale possono scegliere tra due dashboard predefiniti per impostare come propria homepage.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards forniscono <i>a colpo d\'occhio</i> visibilità importante per le modifiche che si verificano sulla vostra rete e fornire collegamenti rapidi ai tipi di dispositivi, produttori e sistemi operativi e molto altro ancora.';

$GLOBALS["lang"]['Dashboards use'] = 'Uso di Dashboard';

$GLOBALS["lang"]['Data'] = 'Dati';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Esportazione di dati - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Ritenzione dei dati';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Azione del database';

$GLOBALS["lang"]['Database Action'] = 'Azione del database';

$GLOBALS["lang"]['db_column'] = 'Colonna del database';

$GLOBALS["lang"]['Database Column'] = 'Colonna del database';

$GLOBALS["lang"]['Database Definition'] = 'Definizione del database';

$GLOBALS["lang"]['db_row'] = 'Titolo del database';

$GLOBALS["lang"]['Database Row'] = 'Titolo del database';

$GLOBALS["lang"]['Database Schema'] = 'Schema del database';

$GLOBALS["lang"]['Database Server Discovery'] = 'Discovery Server Database';

$GLOBALS["lang"]['db_table'] = 'Tabella del database';

$GLOBALS["lang"]['Database Table'] = 'Tabella del database';

$GLOBALS["lang"]['Database Tables'] = 'Tabelle di database';

$GLOBALS["lang"]['dataset_title'] = 'Titolo del Dataset';

$GLOBALS["lang"]['Dataset Title'] = 'Titolo del Dataset';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'Data D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Data MD-Y';

$GLOBALS["lang"]['Date Now'] = 'Data ora';

$GLOBALS["lang"]['date_of_manufacture'] = 'Data della fabbricazione';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Data della fabbricazione';

$GLOBALS["lang"]['date_paid'] = 'Data pagata';

$GLOBALS["lang"]['Date Paid'] = 'Data pagata';

$GLOBALS["lang"]['date_received'] = 'Data ricevuta';

$GLOBALS["lang"]['Date Received'] = 'Data ricevuta';

$GLOBALS["lang"]['Date Y-M-D'] = 'Data Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Data e ora in cui la CVE è stata aggiornata.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Data e ora in cui è stato pubblicato il CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Data di pubblicazione del CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Data Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Giorno di Mese';

$GLOBALS["lang"]['Day Of Month'] = 'Giorno di Mese';

$GLOBALS["lang"]['day_of_week'] = 'Giorno della settimana';

$GLOBALS["lang"]['Day Of Week'] = 'Giorno della settimana';

$GLOBALS["lang"]['Day of Month'] = 'Giorno di Mese';

$GLOBALS["lang"]['dbus_identifier'] = 'Identificazione Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identificazione Dbus';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'Debug';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging un Script';

$GLOBALS["lang"]['December'] = 'Dicembre';

$GLOBALS["lang"]['Decommission'] = 'Decommissione';

$GLOBALS["lang"]['Default'] = 'Predefinito';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Autenticazione predefinita Livello - Impostazione per collegare';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Impersonazione predefinita Livello - Impostare per identificare';

$GLOBALS["lang"]['Default Items'] = 'Oggetti predefiniti';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Gruppi di default Orgs';

$GLOBALS["lang"]['Default Roles Groups'] = 'Gruppi di ruoli predefiniti';

$GLOBALS["lang"]['Default Value'] = 'Valore predefinito';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Predefinito del 389. Normalmente 636 utilizzato per Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Predefinizione <code>3</code> per LDAP e Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Predefiniti';

$GLOBALS["lang"]['Deferred'] = 'Deferito';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Definire la portata e gli obiettivi del progetto';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definire lo scopo ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definire il contesto dell\'organizzazione (problemi interni/esterni)';

$GLOBALS["lang"]['delay_minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Delay Minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Delete'] = 'Cancella';

$GLOBALS["lang"]['Delete Example Devices'] = 'Eliminare i dispositivi di esempio';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Eliminare esterno dall\'interno';

$GLOBALS["lang"]['Delete External From Internal'] = 'Eliminare esterno dall\'interno';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Eliminare NMIS Dispositivi se non in Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Eliminare una voce {collezione}.';

$GLOBALS["lang"]['Delete from Application'] = 'Elimina dall\'applicazione';

$GLOBALS["lang"]['Delete from Cluster'] = 'Elimina dal cluster';

$GLOBALS["lang"]['Denmark'] = 'Danimarca';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Ritirato da audit o impostato manualmente dall\'utente.';

$GLOBALS["lang"]['Derived by audit.'] = 'Ritirato dall\'audit.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derivato da <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derivato da <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivato dalla scoperta di Collector.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Derivato dal nome del sistema operativo.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Derivato dalla scoperta del cloud.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Ritirato dai controlli dei dispositivi.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Derivato dal tipo di dispositivo e OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Derivato dalla scoperta.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derivato dal nome host, sysName, dns Hostname e IP in quell\'ordine.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derivato dalla gravità dell\'intestino.';

$GLOBALS["lang"]['description'] = 'Descrizione';

$GLOBALS["lang"]['Description'] = 'Descrizione';

$GLOBALS["lang"]['destination'] = 'Destinazione';

$GLOBALS["lang"]['Destination'] = 'Destinazione';

$GLOBALS["lang"]['detail'] = 'Dettaglio';

$GLOBALS["lang"]['Detail'] = 'Dettaglio';

$GLOBALS["lang"]['Details'] = 'Dettagli';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Dettagli di chi è generalmente contattabile in questo sito.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Determinare quanto spesso si desidera eseguire il controllo Baseline contro il database e creare un report pianificato';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Determinare le opzioni di trattamento dei rischi';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Sviluppare un piano di trattamento del rischio';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Sviluppare politiche, procedure e controlli';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Sviluppare la documentazione ISMS necessaria (politiche, procedure, ecc.)';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Audit del dispositivo';

$GLOBALS["lang"]['Device Component Names'] = 'Nome del componente del dispositivo';

$GLOBALS["lang"]['Device ID'] = 'ID dispositivo';

$GLOBALS["lang"]['device_id'] = 'ID dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID dispositivo B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Regole di corrispondenza del dispositivo';

$GLOBALS["lang"]['Device Name'] = 'Nome del dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Risultato del dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Risultati del dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Seme di dispositivo';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Seme di dispositivo Le scoperte sono una buona opzione se sai che la tua rete è composta da una serie di sottorete, ma non sei sicuro di quello che sono. Seed la scoperta con un router locale e guardare la rete dispiegarsi prima dei tuoi occhi.';

$GLOBALS["lang"]['Device Seed IP'] = 'Dispositivo Separato IP';

$GLOBALS["lang"]['Device Status'] = 'Stato del dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipi di dispositivo';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Controllo dispositivi e software e hardware';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Il dispositivo è nel Subnet';

$GLOBALS["lang"]['Devices'] = 'Apparecchi';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivi assegnati alla posizione';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivi assegnati alla posizione';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivi assegnati a Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivi assegnati a Org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositivi controllati';

$GLOBALS["lang"]['Devices Collection'] = 'Raccolta di dispositivi';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivi creati in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivi creati in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Dispositivi colonne di visualizzazione predefinite';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Dispositivi colonne di visualizzazione predefinite';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivi trovati Ultimi 7 giorni';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivi trovati oggi';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivi trovati ieri';

$GLOBALS["lang"]['Devices Missing Information'] = 'Dispositivi Informazioni mancanti';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivi non controllati';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivi non visti 30 giorni';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivi non visti 7 giorni';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivi non visti 90 giorni';

$GLOBALS["lang"]['Devices Older Than X'] = 'Dispositivi più vecchi di X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivi recuperati tramite API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivi Selezionati da ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivi selezionati da Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivi Aggiornati in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivi Aggiornati in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'I dispositivi sono benchmark.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'I dispositivi non sono benchmark.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'I dispositivi potrebbero essere benchmark.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Dispositivi da Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivi in stato di esecuzione';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivi in Stato bloccato';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivi in questo';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'I dispositivi non saranno abbinati se il loro stato è impostato su <i>cancellato</i>. Qualsiasi altro stato consentirà una corrispondenza.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Dispositivi con scadenze';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Deviato da tipo o OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp abilitato';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp abilitato';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Scadenze di locazione Dhcp';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Scadenze di locazione Dhcp';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease ottenuto';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease ottenuto';

$GLOBALS["lang"]['dhcp_server'] = 'Server Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Server Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Il comando è stato completato con successo e restituire i dati attesi.';

$GLOBALS["lang"]['direction'] = 'Direzione';

$GLOBALS["lang"]['Direction'] = 'Direzione';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'Disabili';

$GLOBALS["lang"]['Disabled'] = 'Disabili';

$GLOBALS["lang"]['discard'] = 'Discorso';

$GLOBALS["lang"]['Discard'] = 'Discorso';

$GLOBALS["lang"]['Discover'] = 'Scopri di più';

$GLOBALS["lang"]['Discoveries'] = 'Scoperte';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Le scoperte sono al centro di ciò che Open-AudIT fa. Come altrimenti sapresti <i>Cosa c\'è sulla tua rete?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Le scoperte sono voci che consentono di eseguire una scoperta su una rete in un solo clic, senza inserire i dettagli di tale rete ogni volta.';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Problemi alla scoperta';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Opzioni di corrispondenza Discovery';

$GLOBALS["lang"]['Discovery Name'] = 'Nome della scoperta';

$GLOBALS["lang"]['Discovery Options'] = 'Opzioni di scoperta';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opzioni di scansione Discovery';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opzioni di scansione Discovery';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Le opzioni sono solo un\'altra collezione di articoli. Gli utenti Enterprise possono creare, leggere, aggiornare ed eliminare le voci come richiesto. Gli utenti professionali possono leggere tutte le voci, ma non creare nuove voci, aggiornare le voci esistenti o cancellare le voci. Gli utenti comunitari non hanno GUI che consente l\'accesso a questa collezione.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Tipi di scansione alla scoperta';

$GLOBALS["lang"]['Discovery Support'] = 'Supporto alla scoperta';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery ha smesso di lavorare';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Visualizzazione della versione';

$GLOBALS["lang"]['Display Version'] = 'Visualizzazione della versione';

$GLOBALS["lang"]['Display in Menu'] = 'Visualizza nel menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Visualizza un modulo web standard per la presentazione a POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Visualizza un modulo web standard per la presentazione a POST /{collection}/import.';

$GLOBALS["lang"]['district'] = 'Distretto';

$GLOBALS["lang"]['District'] = 'Distretto';

$GLOBALS["lang"]['Djibouti'] = 'Gibuti';

$GLOBALS["lang"]['dns'] = 'D';

$GLOBALS["lang"]['Dns'] = 'D';

$GLOBALS["lang"]['dns_domain'] = 'Dominio Dns';

$GLOBALS["lang"]['Dns Domain'] = 'Dominio Dns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Reg di dominio Dns abilitato';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Reg di dominio Dns abilitato';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Nome host Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Nome host Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Server Dns';

$GLOBALS["lang"]['Dns Server'] = 'Server Dns';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Non dimenticatevi della wiki Open-AudIT per tutta la vostra documentazione.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Non dimenticate che c\'è una montagna di documentazione sul wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Non eseguire la scansione di queste porte TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Non eseguire la scansione di queste porte UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Non farmi vedere di nuovo';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Hai un esempio perfetto di questa configurazione? Forse un dispositivo situato in un ambiente di laboratorio o una workstation da cui si utilizza per clonare VM workstation.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Si desidera utilizzare il trasporto sicuro (LDAPS) o regolare LDAP non crittografato.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Volete vedere la barra laterale standard sulla sinistra.';

$GLOBALS["lang"]['documentation'] = 'Documentazione';

$GLOBALS["lang"]['Documentation'] = 'Documentazione';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentazione su una particolare collezione.';

$GLOBALS["lang"]['Does Not Equal'] = 'Non è uguale';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La licenza si applica ai bambini Orgs.';

$GLOBALS["lang"]['domain'] = 'Dominio';

$GLOBALS["lang"]['Domain'] = 'Dominio';

$GLOBALS["lang"]['domain_controller_address'] = 'Indirizzo del controller di dominio';

$GLOBALS["lang"]['Domain Controller Address'] = 'Indirizzo del controller di dominio';

$GLOBALS["lang"]['domain_controller_name'] = 'Controller di dominio Nome';

$GLOBALS["lang"]['Domain Controller Name'] = 'Controller di dominio Nome';

$GLOBALS["lang"]['domain_role'] = 'Ruolo di dominio';

$GLOBALS["lang"]['Domain Role'] = 'Ruolo di dominio';

$GLOBALS["lang"]['domain_short'] = 'Dominio corto';

$GLOBALS["lang"]['Domain Short'] = 'Dominio corto';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Repubblica Dominicana';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Non tenermi la mano, so cosa sto facendo. Nessun filtro e la possibilità di unire tavoli personalizzati.';

$GLOBALS["lang"]['Download'] = 'Scarica';

$GLOBALS["lang"]['Download a File'] = 'Scarica un file';

$GLOBALS["lang"]['Download a file from URL'] = 'Scarica un file dall\'URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Scarica lo script test_windows_client.vbs direttamente';

$GLOBALS["lang"]['Download your updated version from'] = 'Scarica la tua versione aggiornata da';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dispositivi duplicati / Dispositivi mancanti';

$GLOBALS["lang"]['duration'] = 'Durata';

$GLOBALS["lang"]['Duration'] = 'Durata';

$GLOBALS["lang"]['Dutch'] = 'Paesi Bassi';

$GLOBALS["lang"]['ESXi'] = 'ESXI';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Ogni IP viene scansionato con le opzioni configurate alla scoperta (vedere Opzioni di scansione Discovery e Discovery - Community vs Professional vs Enterprise sul wiki). In generale, Nmap testerà per i porti 22 (ssh), 135 (wmi), 62078 (iPhone) e UDP 161 (snmp). Se 22, 135 o 161 rispondono l\'elenco delle credenziali viene recuperato e ogni credenziale testato a sua volta. Le prime credenziali di lavoro vengono utilizzate per ulteriori query direttamente dal dispositivo. Nota - se un dispositivo è stato precedentemente scoperto e ha credenziali di lavoro, queste credenziali vengono testate prima. Solo se questi falliscono sono le altre credenziali allora tentato.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Ogni volta che un dispositivo viene scoperto o viene elaborato un risultato di audit, tutte le regole vengono recuperate dal database e vengono eseguite contro gli attributi del dispositivo specifico. Regole funzionano contro un dispositivo alla volta - non c\'è alcuna possibilità di dire <i>Eseguire le regole contro tutti i dispositivi<i> o <i>Eseguire le regole contro questi dispositivi<i>. Una regola individuale testerà uno o più attributi del dispositivo e se corrispondono alla regola, il risultato verrà applicato. Diversi attributi possono essere testati. Diversi attributi possono essere impostati. Pensa a questo come un Se questo, allora quel sistema per Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Facilmente eseguire una scoperta su una rete in un solo clic, senza inserire i dettagli di quella rete ogni volta.';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Modifica';

$GLOBALS["lang"]['edit_log'] = 'Modifica Log';

$GLOBALS["lang"]['Edit Log'] = 'Modifica Log';

$GLOBALS["lang"]['editable'] = 'Modificabile';

$GLOBALS["lang"]['Editable'] = 'Modificabile';

$GLOBALS["lang"]['edited_by'] = 'Modificato da';

$GLOBALS["lang"]['Edited By'] = 'Modificato da';

$GLOBALS["lang"]['edited_date'] = 'Data modificata';

$GLOBALS["lang"]['Edited Date'] = 'Data modificata';

$GLOBALS["lang"]['edition'] = 'Edizione';

$GLOBALS["lang"]['Edition'] = 'Edizione';

$GLOBALS["lang"]['Egypt'] = 'Egitto';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google o Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Nessuno o presente.

<strong>Nessuno</strong> - L\'attacco di successo non dipende dalle condizioni di distribuzione e di esecuzione del sistema vulnerabile. L\'attaccante può aspettarsi di essere in grado di raggiungere la vulnerabilità ed eseguire lo exploit sotto tutte o la maggior parte delle istanze della vulnerabilità.

<strong>Presente</strong> - L\'attacco di successo dipende dalla presenza di specifiche condizioni di implementazione e di esecuzione del sistema vulnerabile che permettono l\'attacco. Questi includono:

Una condizione di gara deve essere vinta per sfruttare con successo la vulnerabilità. Il successo dell\'attacco è condizionato alle condizioni di esecuzione che non sono sotto il pieno controllo dell\'attaccante. L\'attacco potrebbe essere necessario lanciare più volte contro un singolo obiettivo prima di avere successo.

Iniezione di rete. L\'aggressore deve iniettarsi nel percorso di rete logico tra l\'obiettivo e la risorsa richiesta dalla vittima (ad esempio, le vulnerabilità che richiedono un attaccante on-path).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'Indirizzo email';

$GLOBALS["lang"]['Email Address'] = 'Indirizzo email';

$GLOBALS["lang"]['Email Configuration'] = 'Configurazione e-mail';

$GLOBALS["lang"]['Email to send test to'] = 'Email per inviare test a';

$GLOBALS["lang"]['Enable'] = 'Abilitare';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Attivare Distributed COM su questo computer - L\'opzione è controllata';

$GLOBALS["lang"]['enabled'] = 'Abilitato';

$GLOBALS["lang"]['Enabled'] = 'Abilitato';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Attivare la funzionalità sotto Windows';

$GLOBALS["lang"]['encryption'] = 'Crittografia';

$GLOBALS["lang"]['Encryption'] = 'Crittografia';

$GLOBALS["lang"]['encryption_method'] = 'Metodo di crittografia';

$GLOBALS["lang"]['Encryption Method'] = 'Metodo di crittografia';

$GLOBALS["lang"]['encryption_status'] = 'Stato di crittografia';

$GLOBALS["lang"]['Encryption Status'] = 'Stato di crittografia';

$GLOBALS["lang"]['end_date'] = 'Data di fine';

$GLOBALS["lang"]['End Date'] = 'Data di fine';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ID prodotto fine vita';

$GLOBALS["lang"]['end_of_life'] = 'Fine della vita';

$GLOBALS["lang"]['End Of Life'] = 'Fine della vita';

$GLOBALS["lang"]['end_of_production'] = 'Fine della produzione';

$GLOBALS["lang"]['End Of Production'] = 'Fine della produzione';

$GLOBALS["lang"]['end_of_service'] = 'Fine del servizio';

$GLOBALS["lang"]['End Of Service'] = 'Fine del servizio';

$GLOBALS["lang"]['end_of_service_life'] = 'Fine della vita di servizio';

$GLOBALS["lang"]['End Of Service Life'] = 'Fine della vita di servizio';

$GLOBALS["lang"]['Endpoint'] = 'Fine';

$GLOBALS["lang"]['English'] = 'Inglese';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Migliora la conformità alle normative';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'L\'arricchimento è completo. Il CVE ha metadati completi ed è considerato stabile.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Assicurare la documentazione è controllata e accessibile';

$GLOBALS["lang"]['enterprise'] = 'Imprese';

$GLOBALS["lang"]['Enterprise'] = 'Imprese';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Rete privata';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo di entrata';

$GLOBALS["lang"]['Entra'] = 'Entrata';

$GLOBALS["lang"]['environment'] = 'Ambiente';

$GLOBALS["lang"]['Environment'] = 'Ambiente';

$GLOBALS["lang"]['Equal To'] = 'Uguale';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Pari a o più grande che';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Pari a o meno';

$GLOBALS["lang"]['Equals'] = 'Parità';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guinea equatoriale';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Errore';

$GLOBALS["lang"]['Error Code'] = 'Codice di errore';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Stabilire un piano di progetto e una linea temporale';

$GLOBALS["lang"]['Establish an information security policy'] = 'Stabilire una politica di sicurezza dell\'informazione';

$GLOBALS["lang"]['Established'] = 'Istituito';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Estonian'] = 'Estone';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Valutare l\'ISMS internamente';

$GLOBALS["lang"]['Every'] = 'Ogni';

$GLOBALS["lang"]['Every Day'] = 'Ogni giorno';

$GLOBALS["lang"]['Example'] = 'Esempio';

$GLOBALS["lang"]['Example Devices'] = 'Esempio di dispositivi';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Esempio Org Grafico con Accesso';

$GLOBALS["lang"]['Example text from'] = 'Esempio di testo da';

$GLOBALS["lang"]['Examples'] = 'Esempi';

$GLOBALS["lang"]['Exceptions'] = 'Eccezioni';

$GLOBALS["lang"]['exclude'] = 'Escluso';

$GLOBALS["lang"]['Exclude'] = 'Escluso';

$GLOBALS["lang"]['exclude_ip'] = 'Escluso IP';

$GLOBALS["lang"]['Exclude IP'] = 'Escluso IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Escludere indirizzi IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Escludi indirizzi IP (IP individuale - 192.168.1.20, intervalli - 192.168.1.30-40 o sottorete - 192.168.1.100/30) elencati per essere scansionati. Comma seduto, niente spazi.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Escludere le porte TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Escluso Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Escluso Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Escluso UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Escluso Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Escluso Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Escludi tutte le porte elencate dalla scansione. Comma seduto, niente spazi.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Escludi questi indirizzi IP dall\'acquisizione di Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Escluso';

$GLOBALS["lang"]['exclusion_reasons'] = 'Motivi di esclusione';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Motivi di esclusione';

$GLOBALS["lang"]['executable'] = 'Esecuzione';

$GLOBALS["lang"]['Executable'] = 'Esecuzione';

$GLOBALS["lang"]['executable_id'] = 'ID eseguibile';

$GLOBALS["lang"]['Executable ID'] = 'ID eseguibile';

$GLOBALS["lang"]['executables'] = 'Esecutivi';

$GLOBALS["lang"]['Executables'] = 'Esecutivi';

$GLOBALS["lang"]['Execute'] = 'Esecuzione';

$GLOBALS["lang"]['Executing'] = 'Esecuzione';

$GLOBALS["lang"]['exemption_reason'] = 'Motivo di esenzione';

$GLOBALS["lang"]['Exemption Reason'] = 'Motivo di esenzione';

$GLOBALS["lang"]['Existing Building'] = 'Edificio esistente';

$GLOBALS["lang"]['Existing Floor'] = 'Piano esistente';

$GLOBALS["lang"]['Existing Room'] = 'Camera esistente';

$GLOBALS["lang"]['Existing Row'] = 'riga esistente';

$GLOBALS["lang"]['expire_date'] = 'Data di scadenza';

$GLOBALS["lang"]['Expire Date'] = 'Data di scadenza';

$GLOBALS["lang"]['expire_minutes'] = 'Minuti scarsi';

$GLOBALS["lang"]['Expire Minutes'] = 'Minuti scarsi';

$GLOBALS["lang"]['expires'] = 'Scadenze';

$GLOBALS["lang"]['Expires'] = 'Scadenze';

$GLOBALS["lang"]['expiry_date'] = 'Data di scadenza';

$GLOBALS["lang"]['Expiry Date'] = 'Data di scadenza';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Export'] = 'Esportazione';

$GLOBALS["lang"]['Export by Device'] = 'Esportazione da dispositivo';

$GLOBALS["lang"]['Export by Policy'] = 'Esportazione per politica';

$GLOBALS["lang"]['Export data to'] = 'Esportazione dei dati';

$GLOBALS["lang"]['Exporting a Device'] = 'Esportazione di un dispositivo';

$GLOBALS["lang"]['expose'] = 'Esposizione';

$GLOBALS["lang"]['Expose'] = 'Esposizione';

$GLOBALS["lang"]['External'] = 'Esterno';

$GLOBALS["lang"]['External Field Name'] = 'Nome del campo esterno';

$GLOBALS["lang"]['External Field Type'] = 'Tipo di campo esterno';

$GLOBALS["lang"]['External Field Types'] = 'Tipologie di campo esterne';

$GLOBALS["lang"]['external_ident'] = 'Identificazione esterna';

$GLOBALS["lang"]['External Ident'] = 'Identificazione esterna';

$GLOBALS["lang"]['external_link'] = 'Link esterno';

$GLOBALS["lang"]['External Link'] = 'Link esterno';

$GLOBALS["lang"]['extra_columns'] = 'Colonne extra';

$GLOBALS["lang"]['Extra Columns'] = 'Colonne extra';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Rapporti basati su Extra e Tempo';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Logging extra e più verbose è generato per la risoluzione dei problemi.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revisione FW';

$GLOBALS["lang"]['Fail'] = 'Fail';

$GLOBALS["lang"]['Failed'] = 'Fatta.';

$GLOBALS["lang"]['Failed Severity'] = 'Severità fallita';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Isole Falkland (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Famiglia';

$GLOBALS["lang"]['Faroe Islands'] = 'Isole Faroe';

$GLOBALS["lang"]['Features'] = 'Caratteristiche';

$GLOBALS["lang"]['February'] = 'Febbraio';

$GLOBALS["lang"]['field'] = 'Campo';

$GLOBALS["lang"]['Field'] = 'Campo';

$GLOBALS["lang"]['field_id'] = 'ID campo';

$GLOBALS["lang"]['Field ID'] = 'ID campo';

$GLOBALS["lang"]['Field Name'] = 'Nome del campo';

$GLOBALS["lang"]['Field Type'] = 'Tipo di campo';

$GLOBALS["lang"]['Fields'] = 'Campi';

$GLOBALS["lang"]['fields'] = 'Campi';

$GLOBALS["lang"]['Fields attributes are'] = 'Gli attributi dei campi sono';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Isole Fiji';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Auditing'] = 'Controllo file';

$GLOBALS["lang"]['File Import'] = 'Importazione file';

$GLOBALS["lang"]['File Input'] = 'Input file';

$GLOBALS["lang"]['file_name'] = 'Nome del file';

$GLOBALS["lang"]['File Name'] = 'Nome del file';

$GLOBALS["lang"]['File Share Discovery'] = 'File Share Discovery';

$GLOBALS["lang"]['file_size'] = 'Dimensione del file';

$GLOBALS["lang"]['File Size'] = 'Dimensione del file';

$GLOBALS["lang"]['filename'] = 'Nome del file';

$GLOBALS["lang"]['Filename'] = 'Nome del file';

$GLOBALS["lang"]['files'] = 'File';

$GLOBALS["lang"]['Files'] = 'File';

$GLOBALS["lang"]['files_id'] = 'ID file';

$GLOBALS["lang"]['Files ID'] = 'ID file';

$GLOBALS["lang"]['filter'] = 'filtro';

$GLOBALS["lang"]['Filter'] = 'filtro';

$GLOBALS["lang"]['filtered'] = 'Filtraggio';

$GLOBALS["lang"]['Filtered'] = 'Filtraggio';

$GLOBALS["lang"]['Filtered Ports'] = 'Porte filtrate';

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Finnish'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Pacchetti Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Regola del firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Regola del firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revisione firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Revisione firmware';

$GLOBALS["lang"]['First'] = 'Primo';

$GLOBALS["lang"]['First Name'] = 'Nome';

$GLOBALS["lang"]['first_run'] = 'Prima corsa';

$GLOBALS["lang"]['First Run'] = 'Prima corsa';

$GLOBALS["lang"]['first_seen'] = 'Prima vista';

$GLOBALS["lang"]['First Seen'] = 'Prima vista';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Prima di tutto, concentrati su ciò che è necessario: stai cercando di basare software, utenti o dati Netstat? Qual è la cosa importante da confrontare e riferire su?';

$GLOBALS["lang"]['FirstWave'] = 'Prima guerra mondiale';

$GLOBALS["lang"]['Fix'] = 'Fisso';

$GLOBALS["lang"]['Fixed'] = 'Fisso';

$GLOBALS["lang"]['Fixing the Issue'] = 'Risolvere il problema';

$GLOBALS["lang"]['Floor'] = 'Piano terra';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Segui uno qualsiasi dei link qui sotto e scopri come utilizzare Open-AudIT per scoprire <b>Cosa c\'è sulla tua rete?</b>';

$GLOBALS["lang"]['For'] = 'Per';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Per <i>Tipo</i> assicurarsi di selezionare Baseline, e per Gruppo è necessario selezionare un gruppo di dispositivi, se applicabile a questa linea di base, che rappresentano al meglio i dispositivi per applicare la linea di base contro. Questo impedirà le voci errate.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Per l\'esecuzione Debian/Ubuntu, compresa l\'impostazione dpkg per ricordare il tuo override in modo che un aggiornamento apt-get non si rompa';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Per SNMP Open-AudIT è possibile utilizzare le credenziali v1, v2 e v3. Il dispositivo viene interrogato indipendentemente dal fatto che sia un router, un interruttore (dispositivi di rete regolari) o un computer (Linux e Windows spesso eseguire SNMP per strumenti di monitoraggio).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Per un primer su cron, vedere questa pagina di Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Per una scoperta dei semi, dovrei scoprire solo gli IP nello spazio dell\'indirizzo IP privato.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Per una scoperta dei semi, dovrei scoprire solo gli IP sulla sottorete scelta.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Per una scoperta di semi, devo ping la subnet prima di eseguire la scoperta.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Per l\'ingresso avanzato di una query SQL cruda. Come per le query, è necessario includere <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Per ogni processo generato, si verifica il seguente.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Ad esempio - si potrebbe creare una linea di base da un dispositivo che esegue Redhat 9 che agisce come uno dei vostri server Apache in un cluster. Sai che questo particolare server è configurato proprio come lo vuoi ma non sei sicuro se altri server nel cluster sono configurati esattamente lo stesso. Le linee di base consentono di determinare questo.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Ad esempio - si potrebbe creare una linea di base da un dispositivo che esegue Redhat 9 che agisce come uno dei vostri server Apache in un cluster. Sai che questo particolare server è configurato proprio come lo vuoi ma non sei sicuro se altri server nel cluster sono configurati esattamente lo stesso. Le linee di base permettono di determinare questo.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Per ulteriori informazioni, vedere il wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Per licenze che non sono perpetuo, quando scade la licenza.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Per informazioni più dettagliate, controllare la Base di conoscenza Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Per ulteriori informazioni, consultare la seguente guida che include un video. Uso';

$GLOBALS["lang"]['For more information, see'] = 'Per ulteriori informazioni, vedere';

$GLOBALS["lang"]['form_factor'] = 'Fattore di forma';

$GLOBALS["lang"]['Form Factor'] = 'Fattore di forma';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqd';

$GLOBALS["lang"]['Fqdn'] = 'Fqd';

$GLOBALS["lang"]['France, French Republic'] = 'Francia, Repubblica francese';

$GLOBALS["lang"]['free'] = 'Gratis';

$GLOBALS["lang"]['Free'] = 'Gratis';

$GLOBALS["lang"]['French'] = 'Francese';

$GLOBALS["lang"]['French Guiana'] = 'Guiana francese';

$GLOBALS["lang"]['French Polynesia'] = 'Polinesia francese';

$GLOBALS["lang"]['French Southern Territories'] = 'Territori del Sud francese';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Domande frequenti';

$GLOBALS["lang"]['Friday'] = 'Venerdì';

$GLOBALS["lang"]['From 100 Devices'] = 'Da 100 dispositivi';

$GLOBALS["lang"]['From 500 Devices'] = 'Da 500 dispositivi';

$GLOBALS["lang"]['From that page'] = 'Da quella pagina';

$GLOBALS["lang"]['full_name'] = 'Nome completo';

$GLOBALS["lang"]['Full Name'] = 'Nome completo';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Controllo cloud completo con tutti i dettagli di un normale audit Open-AudIT e dettagli come il tipo e la dimensione della macchina.';

$GLOBALS["lang"]['function'] = 'Funzione';

$GLOBALS["lang"]['Function'] = 'Funzione';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPO';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galiziano';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Analisi Gap (opzionale)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generato da';

$GLOBALS["lang"]['geo'] = 'Geografica';

$GLOBALS["lang"]['Geo'] = 'Geografica';

$GLOBALS["lang"]['Geographical Maps'] = 'Mappe geografiche';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Germania';

$GLOBALS["lang"]['Germany'] = 'Germania';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Novità';

$GLOBALS["lang"]['Get Started'] = 'Iniziare';

$GLOBALS["lang"]['Get a Free License'] = 'Ottieni una licenza gratuita';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Conosci la piattaforma Open-AudIT ed esplora alcune delle sue caratteristiche.';

$GLOBALS["lang"]['Getting Started'] = 'Iniziare';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibilterra';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opzioni globali di scoperta';

$GLOBALS["lang"]['Global area network'] = 'Rete di aree globali';

$GLOBALS["lang"]['Go'] = 'Vai.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Torna al tuo server Open-AudIT e crea una scoperta con l\'indirizzo IP dei computer Windows come subnet (questo salverà di dover scoprire l\'intera subnet di nuovo). Eseguire la scoperta, prendendo nota di eventuali problemi. Per qualsiasi problema trovato, prendere azioni appropriate.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Vai al PC Windows di destinazione (o utilizzare RDP) e accedi come utente utilizzato dal set di credenziali di scoperta.';

$GLOBALS["lang"]['Go to menu'] = 'Vai al menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Vai al <i>Applicazioni</i> - > <i>Registrazioni di app</i> menu voce sulla sinistra. Cercate Open-AudIT. Fare clic sulla voce Open-AudIT nella lista (supponendo di aver nominato l\'app Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Vai al <i>Certificati e segreti</i> voce menu sotto <i>Gestione</i> nel menu centrale.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Vai al <i>Segnale singolo</i> voce del menu e fare clic su SAML per <i>Selezionare un singolo metodo sign-on</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credenziali';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Chiave';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Bene, allora puoi aiutare! Invia prima Onda il testo mostrato nella GUI e cosa dovrebbe essere mostrato. Includiamo che nel file di lingua in modo da andare avanti, la traduzione è migliorata e non è necessario preoccuparsi di aggiornarlo per ogni rilascio!';

$GLOBALS["lang"]['Greater Than'] = 'Più grande';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Più grande rispetto o uguale';

$GLOBALS["lang"]['Greece'] = 'Grecia';

$GLOBALS["lang"]['Greek'] = 'Grecia';

$GLOBALS["lang"]['Green Query'] = 'Query verde';

$GLOBALS["lang"]['Greenland'] = 'Paesi Bassi';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Gruppo';

$GLOBALS["lang"]['group_by'] = 'Gruppo';

$GLOBALS["lang"]['Group By'] = 'Gruppo';

$GLOBALS["lang"]['group_id'] = 'ID gruppo';

$GLOBALS["lang"]['Group ID'] = 'ID gruppo';

$GLOBALS["lang"]['groups'] = 'Gruppi';

$GLOBALS["lang"]['Groups'] = 'Gruppi';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'I gruppi sono utilizzati come semplici liste di dispositivi che corrispondono alle condizioni richieste. Se richiesto utilizzando JSON ritornano un elenco <i>dispositivi.id</i> Solo. Se richiesto utilizzando l\'interfaccia web, restituisce l\'elenco degli attributi della colonna standard. I gruppi possono essere utilizzati per integrazioni, basi e altri elementi.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadalupa';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'ID dispositivo ospite';

$GLOBALS["lang"]['Guest Device ID'] = 'ID dispositivo ospite';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Revisione HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Indice del disco rigido';

$GLOBALS["lang"]['Hard Drive Index'] = 'Indice del disco rigido';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Revisione hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisione hardware';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Questa politica è stata applicata in questa organizzazione.';

$GLOBALS["lang"]['hash'] = 'Hash!';

$GLOBALS["lang"]['Hash'] = 'Hash!';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Avere l\'agente sempre eseguire l\'ultimo script di audit (se si aggiorna Open-AudIT e copia manualmente gli script per gli obiettivi, quindi impostare cron - è necessario aggiornare questi script per ogni aggiornamento).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Fai aprire un prompt dei comandi all\'utente (utilizzando <i>Eseguire come amministratore</i>). Incollare il seguente nel prompt per scaricare l\'agente.';

$GLOBALS["lang"]['Head'] = 'Capo';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island e McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Ebraico';

$GLOBALS["lang"]['height'] = 'Altezza';

$GLOBALS["lang"]['Height'] = 'Altezza';

$GLOBALS["lang"]['Height in RU'] = 'Altezza in RU';

$GLOBALS["lang"]['Help'] = 'Aiuto';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Aiuto e domande frequenti';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Aiuta a gestire e mitigare i rischi di sicurezza delle informazioni';

$GLOBALS["lang"]['Hide Audit Window'] = 'Nascondi finestra di controllo';

$GLOBALS["lang"]['high'] = 'Alto';

$GLOBALS["lang"]['High'] = 'Alto';

$GLOBALS["lang"]['High Availability'] = 'Alta disponibilità';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sede (Stato della Città del Vaticano)';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Rete domestica';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nome host';

$GLOBALS["lang"]['Hostname'] = 'Nome host';

$GLOBALS["lang"]['hour'] = 'Orario';

$GLOBALS["lang"]['Hour'] = 'Orario';

$GLOBALS["lang"]['How Does It Work?'] = 'Come funziona?';

$GLOBALS["lang"]['How Does it Work?'] = 'Come funziona?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Quanto tempo ci vuole';

$GLOBALS["lang"]['How and Why is'] = 'Come e perché è';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Come e perché è Open-AudIT Più sicuro';

$GLOBALS["lang"]['How do they work?'] = 'Come funzionano?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Come fa un dispositivo Seed Discovery a trovare IP conosciuti?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Quanto tempo ha richiesto il comando per eseguire.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Quanto tempo dovrebbe Nmap aspettare una risposta, per dispositivo.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Quanti circuiti si nutrono di questo rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Quante politiche comportano un fallimento.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Quante politiche risultano in un passaggio.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Quante prese di corrente in questo rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Quante unità rack in altezza è questo rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Quante volte il collettore dovrebbe chiedere al server un\'attività.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Come selezionare i dispositivi da integrare (utilizzando un Attributi, query o un Gruppo).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Come viene sfruttata la vulnerabilità (ad esempio, rete, adiacente, locale, fisica).';

$GLOBALS["lang"]['How to compare'] = 'Come confrontare';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Spiegazione leggibile dall\'uomo della vulnerabilità.';

$GLOBALS["lang"]['Hungarian'] = 'Ungheria';

$GLOBALS["lang"]['Hungary'] = 'Ungheria';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Iperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Iperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Ho letto l\'EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Spero che questo post abbia alleviato tutte le preoccupazioni che avete su Open-AudIT e Sicurezza. Se avete domande, non esitate a contattarci qui al FirstWave. Siamo sempre felici di discutere le vostre preoccupazioni e le vostre esigenze. E forse se la tua domanda non è qualcosa che ho affrontato qui, posso aggiungerlo qui per gli utenti futuri';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANTE';

$GLOBALS["lang"]['INPUTS'] = 'INPU';

$GLOBALS["lang"]['IOS Version'] = 'Versione IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Indirizzo IP';

$GLOBALS["lang"]['IP Addresses'] = 'Indirizzo IP';

$GLOBALS["lang"]['IP Last Seen'] = 'Ultimo accesso IP';

$GLOBALS["lang"]['IP Set By'] = 'Impostazione IP da';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 solo.';

$GLOBALS["lang"]['Iceland'] = 'Islanda';

$GLOBALS["lang"]['icon'] = 'Icona';

$GLOBALS["lang"]['Icon'] = 'Icona';

$GLOBALS["lang"]['Icon and Text'] = 'Icona e testo';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icona solo, solo testo o icona e testo.';

$GLOBALS["lang"]['id_internal'] = 'Id Interno';

$GLOBALS["lang"]['Id Internal'] = 'Id Interno';

$GLOBALS["lang"]['id_number'] = 'Numero';

$GLOBALS["lang"]['Id Number'] = 'Numero';

$GLOBALS["lang"]['identification'] = 'Identificazione';

$GLOBALS["lang"]['Identification'] = 'Identificazione';

$GLOBALS["lang"]['Identify information assets'] = 'Identificare le attività informative';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identificare le parti interessate e i loro requisiti';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identificare gli stakeholder chiave e assegnare ruoli';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identificare il dispositivo(i) che sono il vostro esemplare, o <i>immagine dell\'oro</i> si desidera confrontare dispositivi simili contro.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identificare e valutare i rischi di sicurezza';

$GLOBALS["lang"]['If'] = 'Se';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Se un dispositivo viene scoperto individualmente utilizzando <i>Scopri il dispositivo</i> link sulla pagina dei dettagli del dispositivo, controlliamo prima se questo dispositivo è stato scoperto in precedenza (da Discovery) e se è così, utilizzare le opzioni di scoperta da quella scansione. Se non è stato precedentemente scoperto, ritorniamo alle impostazioni dell\'elemento di configurazione find_default_scan_option.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Se viene creato un nuovo Org, il nome del gruppo LDAP deriva automaticamente dal nome. Ad esempio, se viene creato un nuovo Org e viene nominato Test, il gruppo LDAP corrispondente verrà nominato open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se una porta risponde con filtrato, dovremmo considerarla disponibile.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Se una porta risponde con Open|filtered, dovremmo considerarla disponibile.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se un dispositivo remoto non esiste nei dispositivi selezionati Open-AudIT, dovremmo eliminarlo dal sistema esterno.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se un dispositivo Open-AudIT è stato modificato, dovremmo aggiornare il sistema esterno.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se un dispositivo Open-AudIT non è sul sistema esterno, dovremmo crearlo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se un agente segnala che il suo IP primario è in questa sottorete, eseguire le azioni.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se uno qualsiasi di questi (comma seperato, nessun spazio) porte sono rilevati, presumere SSH sta correndo su di loro e usarli per il controllo. Non c\'è bisogno di aggiungere questa porta alle porte TCP personalizzate - verrà aggiunta automaticamente.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Se nessun operatore è specificato, il default è =. Le proprietà dovrebbero essere completamente qualificate - cioè, dispositivi.hostname (non solo hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Se non c\'è valore, fornire questo valore. EG: per system.nmis_group / configurazione. gruppo usiamo';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se impostato, detiene una serie JSON di colonne di dispositivo specifiche che l\'utente ha scelto di vedere, oltre al default di configurazione.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Se la famiglia OS (come riportato dal dispositivo) contiene questo articolo, passare.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Se il server Open-AudIT ha Collectors che vi segnala, viene fornito un ulteriore calo. È possibile selezionare questo per specificare quale Collector l\'attività dovrebbe essere eseguita. Solo le attività Discovery sono supportate per Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se la famiglia agente OS (caso insensibile) contiene questa stringa, eseguire le azioni.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Se il binario non si trova in una di queste posizioni, verrà visualizzato un messaggio di avviso nell\'installatore.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se sono soddisfatte le seguenti condizioni:<br/><ul><li>a Role ha un ad_group assegnato</li><li>un Org ha un ad_group assegnato</li><li>un LDAP Server ha usato_roles impostato su y</li><li>un utente esiste in LDAP (sia esso Active Directory o OpenLDAP) ed è nei gruppi ad_ assegnati</li></ul>L\'utente può accedere a Open-AudIT senza un account in Open-AudIT che deve essere creato. Open-AudIT queryrà il LDAP in questione e se l\'utente è nei gruppi richiesti ma non in Open-AudIT, i loro attributi utente (nome, nome completo, e-mail, ruoli, org, ecc) all\'interno di Open-AudIT saranno automaticamente popolati e saranno registrati.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Se il campo locale è vero (bool) o y (string) o Y (string) o 1 (integer) quindi impostare i dati esterni a 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Se il campo locale è vero (bool) o y (string) o Y (string) o 1 (integer) quindi impostare i dati esterni a y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Se l\'IP primario (come riportato dal dispositivo) è in questa subnet, passare.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Se l\'account utente non esiste realmente all\'interno di Open-AudIT e <code>use_authorisation</code> è impostato, l\'utente verrà creato. Se esiste, i dettagli come e-mail, nome completo, ecc saranno popolati.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Se l\'utente non dispone di credenziali valide o non è in almeno uno Open-AudIT Role and Group (quando utilizza <code>use_authorisation</code>), Open-AudIT ricadrà sull\'utilizzo dei dettagli utente Open-AudIT locali e tenterà l\'autenticazione e l\'autorizzazione. In caso contrario, l\'utente verrà negato l\'accesso.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se l\'utente accede a Open-AudIT non ha l\'accesso alla ricerca LDAP, è possibile utilizzare un altro account che ha questo accesso.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Se l\'utente accede a Open-AudIT non ha l\'accesso alla ricerca OpenLDAP, è possibile utilizzare un altro account che ha questo accesso. Utilizzare il conto dn_ e dn_password per configurare questo.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Se il valore non è impostato, verrà utilizzato il timestamp corrente.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Se il valore è impostato, verrà utilizzato il valore timestamp.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Se questo cambiamento non funziona per voi, tutto non è perso. Abbiamo aggiunto una voce di configurazione (set to n per impostazione predefinita, quindi userà non questa nuova opzione fuori dalla casella) chiamata Discover_use_org_id_match. Se lo si cambia a voi, il OrgID assegnato al dispositivo dalla scoperta verrà utilizzato nelle relative regole di partita.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Se questo molti minuti (o più) sono passati dall\'ultima volta che il server ha visto il dispositivo, passare.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Se questo molti o più minuti sono passati da quando il dispositivo ha contattato il server, eseguire le azioni.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Se questo accade allora il problema che state vedendo è relativo al controllo della tabella che viene utilizzato sulla pagina web. memorizza solo in memoria lo stato delle caselle di controllo per la pagina corrente che viene visualizzato. Se fai le selezioni, poi pagina in avanti / indietro quelle selezioni saranno perse. È tuttavia possibile ottenere ciò che si desidera espandendo il numero di dispositivi visualizzati in ogni pagina. Nell\'angolo in alto a sinistra c\'è un "records per pagina" etichettato a discesa; usa questo per espandere il numero di voci visualizzate fino a vedere tutto ciò che si desidera selezionare per Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Se rileviamo il software di gestione della san, dovremmo eseguire una scoperta automatica prima della query.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Se aggiungi un Tipo di Posizione, aggiungi quelle icone a';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Se aggiungi un tipo di dispositivo, per visualizzare l\'icona associata dovrai copiare manualmente il file formattato .svg nella directory';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Se sei un cliente supportato FirstWave, un paio di articoli renderà più facile il vostro aiuto. Aprire un biglietto di supporto con FirstWave e allegare il logfile. Includere anche l\'uscita dal pulsante Supporto sulla destra superiore del';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Se sei un cliente supportato e apri un biglietto di supporto con FirstWave, allega questi file.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Se hai problemi con le chiavi API di Google Maps o la tua azienda non ha accesso per creare le chiavi API di Google Maps, contatta il team di supporto FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Se sei su Windows o il tuo server NMIS è remoto, dovrai fornire l\'URL, il nome utente e la password per accedere a quel server.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Se siete su una connessione a banda larga decente o ethernet, consiglio sempre di usare -T4 (Aggressivo). Alcune persone amano -T5 (Insane) anche se è troppo aggressivo per il mio gusto. Le persone a volte specificano -T2 (Polite) perché pensano che sia meno probabile che si schiantano gli host o perché si considerano educato in generale. Spesso non si rendono conto di quanto sia lenta -T2. La loro scansione può richiedere dieci volte più di una scansione predefinita. I crash della macchina e i problemi della larghezza di banda sono rari con le opzioni di temporizzazione predefinite -T3 (Normal) e quindi consiglio normalmente che per gli scanner cauti. Omettere il rilevamento della versione è molto più efficace che giocare con i valori di temporizzazione a ridurre questi problemi.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Se si esegue un sistema RedHat o Centos e si ha aggiornato Nmap, si prega di ripristinare il SUID sul binario da';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Se stai eseguendo un server Open-AudIT su Linux, questo non ti interessa.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Se si utilizza Open-AudIT su Windows o se il server NMIS non è sul server Open-AudIT (nel caso di alcune installazioni Linux), è necessario fornire le credenziali di accesso e un URL al NMIS remoto - ma questo è tutto! Sì - Le integrazioni tra NMIS e Open-AudIT funzionano anche con Windows basato Open-AudIT ora!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se si sceglie un Collector, sarà previsto eseguire il prossimo 5 minuti di confine.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Se si imposta normalmente device_assigned_to_org e l\'elemento di configurazione è abilitato, l\'OrgID verrà utilizzato per perfezionare ulteriormente la partita.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Se non si imposta normalmente device_assigned_to_org, allora non avrà effetto. Controlliamo solo utilizzando il OrgID se è stato impostato in scoperta (o manualmente in uno script di audit) e abilitato nella configurazione.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Se si abilita l\'elemento di configurazione, utilizzare la scoperta per assegnare un Org e quindi successivamente cambiare l\'OrgID di un dispositivo dopo la scoperta, allora si avrà probabilmente un nuovo dispositivo creato la prossima volta che la scoperta viene eseguita. In questo caso, si dovrebbe probabilmente solo disattivare dispositivi_assigned_to_org prima di eseguire le scoperte successive. Questo perché (in questo caso) hai detto a Open-AudIT <i>questi dispositivi da questa scoperta appartengono a Org X<i>, ma poi ha cambiato l\'org del dispositivo. Hai cambiato le informazioni sui dispositivi memorizzati. In questo caso - non c\'è più un dispositivo appartenente a Org X, quindi creiamo uno nuovo.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Se si dispone di software Anti-Virus in esecuzione, permettendo i servizi di Opmantek (omkd), Apache (apache2.2) e MySQL (mysql) per avviare e eseguire automaticamente è essenziale. Questi servizi sono utilizzati da Open-AudIT. Dovresti farlo solo una volta. Se il tuo programma Anti-Virus continua a richiedere informazioni su Open-AudIT, ti preghiamo di inviare un messaggio al forum o di inviare un\'email a supporto con il nome e la versione del tuo software Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Se hai credenziali di lavoro, puoi aspettarti l\'intero numero di informazioni possibili.<br/><br/>Ovviamente, il modo migliore per utilizzare Open-AudIT è quello di avere credenziali di lavoro per i dispositivi che vengono scoperti (se sono credenziali WMI, SSH o SNMP).<br/><br/>Abbiamo anche una pagina sul controllo senza credenziali.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Se si include il campo \"id\" <strong>e</strong> impostarlo con un numero, quell\'elemento verrà aggiornato piuttosto che creato.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Se è necessario configurare l\'accesso di Active Directory, di solito è possibile utilizzare l\'esempio di <code>cn=Users,dc=your,dc=domain,dc=com</code> per il tuo <code>base_dn</code>. Non c\'è bisogno di impostare <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Se è necessario configurare l\'accesso OpenLDAP per gli utenti e un dato utente accede DN è normalmente <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> allora si dovrebbe impostare <code>base_dn</code> a <code>dc=your,dc=domain,dc=com</code> e <code>user_dn</code> a <code>uid=@username@@domain,cn=People</code>. Le parole speciali <code>@username</code> e <code>@domain</code> sarà sostituito dai dettagli di login forniti dall\'utente nella pagina di login.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Se si esegue la scoperta su una subnet che il Server (o Collector) è installato direttamente su, si può aspettare il seguente per rispondere ai dispositivi';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Se si esegue la scoperta su una subnet che il server (o Collector) non è installato direttamente su, è possibile aspettarsi che il seguente per rispondere ai dispositivi';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Se si seleziona un tipo Elenco, un campo aggiuntivo apparirà chiamato Valori. È necessario inserire un elenco separato da virgola di valori selezionabili qui. Questi verranno visualizzati in una scatola a discesa ogni volta che il campo viene modificato.';

$GLOBALS["lang"]['If you set the values for'] = 'Se si impostano i valori per';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Se vuoi costringere i tuoi Agenti a utilizzare una particolare configurazione, puoi fornire l\'ID dell\'ingresso degli agenti da utilizzare, come di seguito (sostituire $id con il numero dell\'ingresso Agenti). Quando questo agente è installato, controllerà con il sevrer e <strong>solo</strong> controllare che un individuo attributi delle entrate dell\'agente (test e azioni). Questo può essere utile se sei un MSP - creare una voce Agenti per un particolare cliente e avere i loro dispositivi tutti utilizzare questa voce, che li assegna a un Org e Location.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Se si desidera scavare e personalizzare l\'integrazione, fare clic sul pulsante Avanzato (e cercare di non essere sopraffatti!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Se si desidera eseguire una Discovery su un dispositivo esterno fornito, selezionare l\'opzione e quando l\'integrazione viene creata, quindi s la Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Se si desidera utilizzare lo script al di fuori della Discovery abbiamo creato un altro endpoint chiamato <i>script</i>. Vedi la documentazione';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Se il tuo utente non ha <i>Eseguire come amministratore</i> diritti, possono ancora scaricare l\'agente (primo comando sopra) ed eseguirlo per inviare un audit come di seguito. Sarà un audit one-off senza che l\'agente sia installato o programmato.';

$GLOBALS["lang"]['ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Sequestro';

$GLOBALS["lang"]['Iflastchange'] = 'Sequestro';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore SSL non valido';

$GLOBALS["lang"]['Ignored'] = 'Ignorato';

$GLOBALS["lang"]['image'] = 'Immagine';

$GLOBALS["lang"]['Image'] = 'Immagine';

$GLOBALS["lang"]['Images'] = 'Immagini';

$GLOBALS["lang"]['impact_availability'] = 'Disponibilità d\'impatto';

$GLOBALS["lang"]['Impact Availability'] = 'Disponibilità d\'impatto';

$GLOBALS["lang"]['impact_confidentiality'] = 'Confidenzialità d\'impatto';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Confidenzialità d\'impatto';

$GLOBALS["lang"]['impact_integrity'] = 'Impatto Integrità';

$GLOBALS["lang"]['Impact Integrity'] = 'Impatto Integrità';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implementare controlli e procedure selezionati';

$GLOBALS["lang"]['Implementation'] = 'Attuazione';

$GLOBALS["lang"]['implementation_notes'] = 'Note di attuazione';

$GLOBALS["lang"]['Implementation Notes'] = 'Note di attuazione';

$GLOBALS["lang"]['Import'] = 'Importazioni';

$GLOBALS["lang"]['Import Example Data'] = 'Importazione Esempio Dati';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importare più {collezione} utilizzando un CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Opportunità di miglioramento';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Opportunità di miglioramento';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Migliora la continuità aziendale e la resilienza';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'In una seconda scheda o finestra vai alla console OKTA e clicca <i>Crea l\'integrazione dell\'app</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'In una seconda scheda o finestra firma alla tua';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'A mio parere personale, il modo migliore per trovare e controllare ogni singolo elemento della rete è un Seed Discovery per ogni subnet, limitato a quella subnet (utilizzando le credenziali). Seed Discoveries utilizzare le tabelle di indirizzo MAC, router e computer per non perdere un singolo dispositivo. Se è collegato alla rete e utilizza TCP/IP, un interruttore/router/computer deve sapere che è lì - è proprio così che funziona TCP/IP. Combinare questo con porte TCP e/o UDP personalizzate e si dovrebbe quindi essere in grado di determinare il tipo di dispositivo pure. Ma questa è solo la mia preferenza personale';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Affinché Open-AudIT sia in grado di applicare le autorizzazioni dell\'utente sugli articoli, invieremo l\'utente <code>WHERE @filter</code>. Se non si utilizza questo formato, queryCreateForm getterà un avviso. Solo gli utenti con il ruolo Admin sono autorizzati a creare query che non hanno questo attributo e anche allora, solo dopo la voce di configurazione per <i>strumenti avanzati</i> è stato abilitato.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Al fine di abilitare Google Maps sarà necessario un Google API Key seguire questo link e accedere con il vostro Google account,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Per utilizzare l\'API Azure Rest, è necessario creare un\'applicazione Azure Active Directory che viene utilizzata per l\'autenticazione.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Per poter utilizzare questa funzionalità, deve essere abilitato nella configurazione - fare clic';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Nella lista (comma seperato)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'In caso di <code>in</code> e <code>notin</code>, è necessario racchiudere i valori in parentesi tonde e separarli utilizzando una virgola (solo una virgola, non una virgola, quindi spazio).<br/><br/>Con questi operatori è possibile filtrare completamente.<br/><br/>Quando aggiungi dati e filtri su più colonne, queste colonne vengono combinate utilizzando <strong>E</strong>. Non puoi filtrare usando un <strong>O</strong> condizione. Con l\'inclusione di <code>notin</code>, si dovrebbe essere in grado di ottenere la maggior parte delle ricerche di lavoro. E per coloro che richiedono davvero selezioni non supportate e complesse, è sempre possibile scrivere una domanda reale.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Nel caso in cui riportiamo diversi campi (solitamente in formato JSON) all\'interno di un campo BIGTEXT MySQL (ad esempio: credenziali. credenziali - la colonna delle credenziali nella tabella delle credenziali), è necessario utilizzare il formato';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Nella shell del prompt dei comandi, passare alla directory di download (con piacere <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inattivo';

$GLOBALS["lang"]['Incomplete'] = 'Incompleto';

$GLOBALS["lang"]['Index'] = 'Indice';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Indonesian'] = 'Indonesiano';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Solo informazioni.';

$GLOBALS["lang"]['Informational'] = 'Informazioni';

$GLOBALS["lang"]['initial_size'] = 'Dimensione iniziale';

$GLOBALS["lang"]['Initial Size'] = 'Dimensione iniziale';

$GLOBALS["lang"]['Initial login credentials are'] = 'Le credenziali di login iniziali sono';

$GLOBALS["lang"]['Initiation'] = 'Iniziazione';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Input';

$GLOBALS["lang"]['Input Type'] = 'Tipo di ingresso';

$GLOBALS["lang"]['inputs'] = 'Ingressi';

$GLOBALS["lang"]['Inputs'] = 'Ingressi';

$GLOBALS["lang"]['Insane'] = 'Inutile';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Inserisci una nuova voce {collezione}.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Inserisci i dati di esempio e scopri tutto ciò che Open-AudIT può dirti.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Inserisci il tuo Licenza acquistata Chiave';

$GLOBALS["lang"]['install'] = 'Installazione';

$GLOBALS["lang"]['Install'] = 'Installazione';

$GLOBALS["lang"]['install_date'] = 'Data di installazione';

$GLOBALS["lang"]['Install Date'] = 'Data di installazione';

$GLOBALS["lang"]['install_directory'] = 'Installare Directory';

$GLOBALS["lang"]['Install Directory'] = 'Installare Directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installare OpenScap se necessario';

$GLOBALS["lang"]['install_source'] = 'Installare Source';

$GLOBALS["lang"]['Install Source'] = 'Installare Source';

$GLOBALS["lang"]['Install Support'] = 'Installa il supporto';

$GLOBALS["lang"]['installed_by'] = 'Installato da';

$GLOBALS["lang"]['Installed By'] = 'Installato da';

$GLOBALS["lang"]['installed_on'] = 'Installato su';

$GLOBALS["lang"]['Installed On'] = 'Installato su';

$GLOBALS["lang"]['Installing'] = 'Installazione';

$GLOBALS["lang"]['Installing on Linux'] = 'Installazione su Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installazione su MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installazione su Windows';

$GLOBALS["lang"]['instance'] = 'Tribunale';

$GLOBALS["lang"]['Instance'] = 'Tribunale';

$GLOBALS["lang"]['instance_ident'] = 'Identificazione';

$GLOBALS["lang"]['Instance Ident'] = 'Identificazione';

$GLOBALS["lang"]['instance_options'] = 'Opzioni di esecuzione';

$GLOBALS["lang"]['Instance Options'] = 'Opzioni di esecuzione';

$GLOBALS["lang"]['instance_provider'] = 'Fornitore di posizione';

$GLOBALS["lang"]['Instance Provider'] = 'Fornitore di posizione';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Prenotazione Identificazione';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Prenotazione Identificazione';

$GLOBALS["lang"]['instance_state'] = 'Stato';

$GLOBALS["lang"]['Instance State'] = 'Stato';

$GLOBALS["lang"]['instance_tags'] = 'Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Tags';

$GLOBALS["lang"]['instance_type'] = 'Tipo di ricorso';

$GLOBALS["lang"]['Instance Type'] = 'Tipo di ricorso';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integrazione';

$GLOBALS["lang"]['integrations'] = 'Integrazioni';

$GLOBALS["lang"]['Integrations'] = 'Integrazioni';

$GLOBALS["lang"]['integrations_id'] = 'Integrazione ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrazione ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrazioni Log';

$GLOBALS["lang"]['Integrations Log'] = 'Integrazioni Log';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Le integrazioni possono essere programmate come desiderato. Questo è lasciato all\'utente.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Le integrazioni possono essere programmate come per Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Pacchetti interattivi';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'I cruscotti interattivi forniscono una visibilità istantanea nello stato dell\'inventario di rete che consente ai team IT di individuare dispositivi appena scoperti e comportamenti di dispositivo insoliti a colpo d\'occhio.';

$GLOBALS["lang"]['interface'] = 'Interfaccia';

$GLOBALS["lang"]['Interface'] = 'Interfaccia';

$GLOBALS["lang"]['interface_id'] = 'ID interfaccia';

$GLOBALS["lang"]['Interface ID'] = 'ID interfaccia';

$GLOBALS["lang"]['interface_type'] = 'Tipo di interfaccia';

$GLOBALS["lang"]['Interface Type'] = 'Tipo di interfaccia';

$GLOBALS["lang"]['Internal'] = 'Interno';

$GLOBALS["lang"]['Internal Audit'] = 'Audizione interna';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Audit interno e revisione';

$GLOBALS["lang"]['Internal Field Name'] = 'Nome del campo interno';

$GLOBALS["lang"]['Internal ID'] = 'ID interno';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interno JSON array di token di accesso valido per questo utente.';

$GLOBALS["lang"]['Introduction'] = 'Introduzione';

$GLOBALS["lang"]['invoice'] = 'Fatturato';

$GLOBALS["lang"]['Invoice'] = 'Fatturato';

$GLOBALS["lang"]['invoice_id'] = 'ID fattura';

$GLOBALS["lang"]['Invoice ID'] = 'ID fattura';

$GLOBALS["lang"]['invoice_item'] = 'Voce articolo';

$GLOBALS["lang"]['Invoice Item'] = 'Voce articolo';

$GLOBALS["lang"]['ios_version'] = 'Versione di Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versione di Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Indirizzo Ip esterno A';

$GLOBALS["lang"]['Ip Address External A'] = 'Indirizzo Ip esterno A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Indirizzo Ip esterno B';

$GLOBALS["lang"]['Ip Address External B'] = 'Indirizzo Ip esterno B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Indirizzo Ip Interno A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Indirizzo Ip Interno A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Indirizzo Ip Interno B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Indirizzo Ip Interno B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Contatore di risposta Ip';

$GLOBALS["lang"]['Ip Responding Count'] = 'Contatore di risposta Ip';

$GLOBALS["lang"]['ip_scanned_count'] = 'Conteggio scanner Ip';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Conteggio scanner Ip';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Iraq';

$GLOBALS["lang"]['Ireland'] = 'Irlanda';

$GLOBALS["lang"]['Irish'] = 'Irlanda';

$GLOBALS["lang"]['Is FRU'] = 'È FRU';

$GLOBALS["lang"]['is_fru'] = 'È Fru';

$GLOBALS["lang"]['Is Fru'] = 'È Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Il server NMIS è locale (su questo server Open-AudIT) o remoto?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Questo account è attivo? Se impostato su <code>n</code>, l\'utente non può accedere.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Questa domanda è limitata ai clienti autorizzati.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Questa funzione è abilitata (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israele';

$GLOBALS["lang"]['Issue'] = 'Fascicolo';

$GLOBALS["lang"]['issuer'] = 'Questionario';

$GLOBALS["lang"]['Issuer'] = 'Questionario';

$GLOBALS["lang"]['issuer_name'] = 'Nome dell\'emittente';

$GLOBALS["lang"]['Issuer Name'] = 'Nome dell\'emittente';

$GLOBALS["lang"]['Issues'] = 'Questioni';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Si\'. <i>Funziona e basta</i> con NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'È disponibile nel menu -> Aiuto';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'È importante notare che quando Open-AudIT determina una corrispondenza delle proprietà impostate per <i>#</i> deve corrispondere esattamente (e non essere vuoto) al fine di Open-AudIT per determinare che il dispositivo scoperto corrisponde a un dispositivo già nel database. Se nessuna delle proprietà contrassegnate <i>#</i> match, quindi verrà creata una nuova voce del dispositivo, che potrebbe portare a voci duplicate del dispositivo. In situazioni in cui le proprietà sono duplicate, ad esempio un dbus_id viene copiato durante un clone della VM, quindi un dispositivo esistente può erroneamente ottenere sovrascritto / aggiornato piuttosto che una nuova voce che viene creata con conseguente dispositivi mancanti.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Non è raro avere uno spazio di indirizzo sovrapposto in una data Organizzazione. Non ideale, ma non raro.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'È molto comune per i produttori di schede madri secondarie non impostare questo, per impostare a tutti <i>0</i>o anche tutti <i>F</i>S.';

$GLOBALS["lang"]['Italian'] = 'Italiano';

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Articoli non in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON per l\'importazione';

$GLOBALS["lang"]['Jamaica'] = 'Giamaica';

$GLOBALS["lang"]['January'] = 'Gennaio';

$GLOBALS["lang"]['Japan'] = 'Giappone';

$GLOBALS["lang"]['Japanese'] = 'Giapponese';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Giordania';

$GLOBALS["lang"]['July'] = 'Luglio';

$GLOBALS["lang"]['June'] = 'Giugno';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakistan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Versione del Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versione del Kernel';

$GLOBALS["lang"]['Key'] = 'Chiave';

$GLOBALS["lang"]['Key Components'] = 'Componenti chiave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Password chiave (opzionale)';

$GLOBALS["lang"]['keys'] = 'Chiavi';

$GLOBALS["lang"]['Keys'] = 'Chiavi';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corea del Sud';

$GLOBALS["lang"]['Korean'] = 'Coreano';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kyrgyz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Repubblica di Kirghizistan';

$GLOBALS["lang"]['LDAP Group'] = 'Gruppo LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP è stato cercato per questo utente e il loro account è stato trovato.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP è stato cercato per questo utente e il loro account non è stato trovato. Controlla i registri del server LDAP. Le credenziali utente hanno funzionato, ma l\'utente non è stato trovato. Controllare anche che hai specificato l\'attributo Base DN corretto quando hai creato il server LDAP in Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang.';

$GLOBALS["lang"]['Lang'] = 'Lang.';

$GLOBALS["lang"]['language'] = 'Lingua';

$GLOBALS["lang"]['Language'] = 'Lingua';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Ultimo cambiamento';

$GLOBALS["lang"]['Last Changed'] = 'Ultimo cambiamento';

$GLOBALS["lang"]['last_finished'] = 'Ultima finitura';

$GLOBALS["lang"]['Last Finished'] = 'Ultima finitura';

$GLOBALS["lang"]['last_logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Name'] = 'Ultimo nome';

$GLOBALS["lang"]['last_os_update'] = 'Ultimo aggiornamento Os';

$GLOBALS["lang"]['Last Os Update'] = 'Ultimo aggiornamento Os';

$GLOBALS["lang"]['last_result'] = 'Ultimo risultato';

$GLOBALS["lang"]['Last Result'] = 'Ultimo risultato';

$GLOBALS["lang"]['last_run'] = 'Ultima corsa';

$GLOBALS["lang"]['Last Run'] = 'Ultima corsa';

$GLOBALS["lang"]['last_seen'] = 'Ultimo accesso';

$GLOBALS["lang"]['Last Seen'] = 'Ultimo accesso';

$GLOBALS["lang"]['last_seen_by'] = 'Ultimo accesso #';

$GLOBALS["lang"]['Last Seen By'] = 'Ultimo accesso #';

$GLOBALS["lang"]['last_user'] = 'Ultimo utente';

$GLOBALS["lang"]['Last User'] = 'Ultimo utente';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'L\'ultima e\' la WMI. Per Windows come in Linux, viene preferito un utente con accesso a livello amministratore (vedere Configurazione client di destinazione sul wiki).';

$GLOBALS["lang"]['lastModified'] = 'Ultimo aggiornamento';

$GLOBALS["lang"]['LastModified'] = 'Ultimo aggiornamento';

$GLOBALS["lang"]['latitude'] = 'Latitudine';

$GLOBALS["lang"]['Latitude'] = 'Latitudine';

$GLOBALS["lang"]['Latvia'] = 'Lettonia';

$GLOBALS["lang"]['Latvian'] = 'Lettonia';

$GLOBALS["lang"]['Layout'] = 'Telaio';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Base di Ldap Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Base di Ldap Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Account Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Account Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Informazioni su';

$GLOBALS["lang"]['Learn More'] = 'Per saperne di più';

$GLOBALS["lang"]['lease_expiry_date'] = 'Data di scadenza del contratto';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Data di scadenza del contratto';

$GLOBALS["lang"]['Lebanon'] = 'Libano';

$GLOBALS["lang"]['legal_requirements'] = 'Requisiti legali';

$GLOBALS["lang"]['Legal Requirements'] = 'Requisiti legali';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Meno';

$GLOBALS["lang"]['Less Than or Equals'] = 'Meno di uguale o uguale';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Mettiamo la registrazione al debug. Copia il file:';

$GLOBALS["lang"]['level'] = 'Livello';

$GLOBALS["lang"]['Level'] = 'Livello';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Livello di privilegi necessari per sfruttare (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Biblioteche (cioè, codice che un altro programma potrebbe includere). Questi sono tipicamente elementi come estensioni Wordpress, estensioni drupal, librerie node.js, librerie Android / iPhone / Windows, librerie di pitone, ecc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libico arabo Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licenza';

$GLOBALS["lang"]['License Key'] = 'Chiave di licenza';

$GLOBALS["lang"]['License Required'] = 'Richiesta di licenza';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Gli utenti autorizzati sono liberi di aggiungere o modificare le regole come si vede in forma. Se hai un dispositivo con un OID SNMP che non corrisponde a un modello già nel file - ora puoi aggiungerlo facilmente. Basta aspettare che forniamo un patch e aggiungerlo alla base di codice per voi.<br/><br/>Quando si crea una voce Regole, è necessario fornire un nome e un elenco di ingressi e uscite. Gli input e gli output vengono memorizzati come array JSON all\'interno del database.<br/><br/>Gli ingressi hanno una tabella e un attributo, un operatore e un valore. Quando si esegue la condizione, funziona così: Se $table . $attribute $operator $value quindi applicare le uscite.<br/><br/>Una regola di esempio per abbinare un OID SNMP e impostare il modello è qui sotto.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Le licenze';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = '#';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Come la maggior parte degli altri attributi, Ulteriori campi possono essere modificati in massa. Utilizzare la funzione Bulk Edit come si farebbe normalmente e vedrete i campi aggiuntivi sono disponibili per l\'ingresso.';

$GLOBALS["lang"]['Like versus Equals'] = 'Come contro Equals';

$GLOBALS["lang"]['limit'] = 'Limite';

$GLOBALS["lang"]['Limit'] = 'Limite';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limitare la query ai primi elementi X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limitato a 100 righe.';

$GLOBALS["lang"]['line_amount'] = 'Importo della linea';

$GLOBALS["lang"]['Line Amount'] = 'Importo della linea';

$GLOBALS["lang"]['Line Graph'] = 'Grafico della linea';

$GLOBALS["lang"]['line_number_a'] = 'Numero della linea A';

$GLOBALS["lang"]['Line Number A'] = 'Numero della linea A';

$GLOBALS["lang"]['line_number_b'] = 'Numero della linea B';

$GLOBALS["lang"]['Line Number B'] = 'Numero della linea B';

$GLOBALS["lang"]['line_text'] = 'Testo della riga';

$GLOBALS["lang"]['Line Text'] = 'Testo della riga';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'I grafici di linea devono restituire la data o my_date, descrizione o my_description e conteggio.';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Avanzato)';

$GLOBALS["lang"]['Linked Files'] = 'File collegati';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Collega questa scoperta al cloud associato (se necessario). Collegamenti a <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Collegamenti a <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Collegamenti a <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Collegamenti a <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Pacchetti Linux';

$GLOBALS["lang"]['List'] = 'Elenco';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Elenca tutte le porte, protocolli e programmi NMAP per ogni dispositivo';

$GLOBALS["lang"]['List Devices'] = 'Elenco dispositivi';

$GLOBALS["lang"]['List Discoveries'] = 'Elenco Scoperte';

$GLOBALS["lang"]['list_table_format'] = 'Elenco Formato della tabella';

$GLOBALS["lang"]['List Table Format'] = 'Elenco Formato della tabella';

$GLOBALS["lang"]['List Tables'] = 'Elenco tabelle';

$GLOBALS["lang"]['Lithuania'] = 'Lituania';

$GLOBALS["lang"]['Lithuanian'] = 'Lituano';

$GLOBALS["lang"]['Load Balancing'] = 'Bilanciamento del carico';

$GLOBALS["lang"]['Local'] = 'Locale locale';

$GLOBALS["lang"]['Local Area Network'] = 'Rete locale';

$GLOBALS["lang"]['local_port'] = 'Porto locale';

$GLOBALS["lang"]['Local Port'] = 'Porto locale';

$GLOBALS["lang"]['Local area network'] = 'Rete locale';

$GLOBALS["lang"]['Localhost'] = 'Localhosting';

$GLOBALS["lang"]['Localisation'] = 'Localizzazione';

$GLOBALS["lang"]['Location'] = 'Location';

$GLOBALS["lang"]['Location A'] = 'Ubicazione A';

$GLOBALS["lang"]['Location B'] = 'Posizione B';

$GLOBALS["lang"]['location_id'] = 'ID posizione';

$GLOBALS["lang"]['Location ID'] = 'ID posizione';

$GLOBALS["lang"]['location_id_a'] = 'ID posizione A';

$GLOBALS["lang"]['Location ID A'] = 'ID posizione A';

$GLOBALS["lang"]['location_id_b'] = 'ID posizione B';

$GLOBALS["lang"]['Location ID B'] = 'ID posizione B';

$GLOBALS["lang"]['location_latitude'] = 'Posizione Latitudine';

$GLOBALS["lang"]['Location Latitude'] = 'Posizione Latitudine';

$GLOBALS["lang"]['location_level'] = 'Livello di localizzazione';

$GLOBALS["lang"]['Location Level'] = 'Livello di localizzazione';

$GLOBALS["lang"]['location_longitude'] = 'Ubicazione Longitudine';

$GLOBALS["lang"]['Location Longitude'] = 'Ubicazione Longitudine';

$GLOBALS["lang"]['Location Name'] = 'Nome della posizione';

$GLOBALS["lang"]['location_rack'] = 'Location Rack';

$GLOBALS["lang"]['Location Rack'] = 'Location Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Posizione Rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Posizione Rack';

$GLOBALS["lang"]['location_rack_size'] = 'Ubicazione Rack Size';

$GLOBALS["lang"]['Location Rack Size'] = 'Ubicazione Rack Size';

$GLOBALS["lang"]['location_room'] = 'Location';

$GLOBALS["lang"]['Location Room'] = 'Location';

$GLOBALS["lang"]['location_suite'] = 'Location Suite';

$GLOBALS["lang"]['Location Suite'] = 'Location Suite';

$GLOBALS["lang"]['Locations'] = 'Località';

$GLOBALS["lang"]['Locations in this'] = 'Località in questo';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Formato di registro';

$GLOBALS["lang"]['Log Format'] = 'Formato di registro';

$GLOBALS["lang"]['Log Line'] = 'Linea di controllo';

$GLOBALS["lang"]['log_path'] = 'Percorso di accesso';

$GLOBALS["lang"]['Log Path'] = 'Percorso di accesso';

$GLOBALS["lang"]['log_rotation'] = 'Rotazione di registro';

$GLOBALS["lang"]['Log Rotation'] = 'Rotazione di registro';

$GLOBALS["lang"]['log_status'] = 'Stato';

$GLOBALS["lang"]['Log Status'] = 'Stato';

$GLOBALS["lang"]['Logging in'] = 'Registrazione';

$GLOBALS["lang"]['Logical Cores '] = 'Nuclei logici ';

$GLOBALS["lang"]['logical_count'] = 'Contatore logico';

$GLOBALS["lang"]['Logical Count'] = 'Contatore logico';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Longitudine';

$GLOBALS["lang"]['Longitude'] = 'Longitudine';

$GLOBALS["lang"]['low'] = 'Basso';

$GLOBALS["lang"]['Low'] = 'Basso';

$GLOBALS["lang"]['Lower Case'] = 'Caso più basso';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nome host minuscolo';

$GLOBALS["lang"]['Luxembourg'] = 'Lussemburgo';

$GLOBALS["lang"]['MAC Address'] = 'MAC Indirizzo';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Produttore';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Indirizzo Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Pacchetti MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Mantenere i record di valutazioni e trattamenti dei rischi';

$GLOBALS["lang"]['maintenance_expires'] = 'Spese di manutenzione';

$GLOBALS["lang"]['Maintenance Expires'] = 'Spese di manutenzione';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Fai il mio Dashboard predefinito';

$GLOBALS["lang"]['Make this install a Collector'] = 'Fare questo installare un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malesia';

$GLOBALS["lang"]['Maldives'] = 'Maldive';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Gestione';

$GLOBALS["lang"]['Manage Licenses'] = 'Gestione licenze';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gestione in NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Gestione degli incidenti e delle non conformità';

$GLOBALS["lang"]['Managed'] = 'Gestione';

$GLOBALS["lang"]['managed_by'] = 'Gestito da';

$GLOBALS["lang"]['Managed By'] = 'Gestito da';

$GLOBALS["lang"]['Manual Input'] = 'Input manuale';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Impostazione manuale per utente, impostazione predefinita per la produzione.';

$GLOBALS["lang"]['Manually set by user.'] = 'Impostare manualmente dall\'utente.';

$GLOBALS["lang"]['manufacture_date'] = 'Data di fabbricazione';

$GLOBALS["lang"]['Manufacture Date'] = 'Data di fabbricazione';

$GLOBALS["lang"]['manufacturer'] = 'Produttore';

$GLOBALS["lang"]['Manufacturer'] = 'Produttore';

$GLOBALS["lang"]['manufacturer_code'] = 'Codice produttore';

$GLOBALS["lang"]['Manufacturer Code'] = 'Codice produttore';

$GLOBALS["lang"]['Map'] = 'Mappa';

$GLOBALS["lang"]['maps'] = 'Mappe';

$GLOBALS["lang"]['Maps'] = 'Mappe';

$GLOBALS["lang"]['March'] = 'Marzo';

$GLOBALS["lang"]['Marshall Islands'] = 'Isole Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinica';

$GLOBALS["lang"]['mask'] = 'Maschera';

$GLOBALS["lang"]['Mask'] = 'Maschera';

$GLOBALS["lang"]['Match'] = 'Abbinamento';

$GLOBALS["lang"]['match_options'] = 'Opzioni di corrispondenza';

$GLOBALS["lang"]['Match Options'] = 'Opzioni di corrispondenza';

$GLOBALS["lang"]['Match Order'] = 'Ordine di corrispondenza';

$GLOBALS["lang"]['Match Process'] = 'Processo di corrispondenza';

$GLOBALS["lang"]['match_string'] = 'Sforzo di corrispondenza';

$GLOBALS["lang"]['Match String'] = 'Sforzo di corrispondenza';

$GLOBALS["lang"]['Matching Attribute'] = 'Attributi di corrispondenza';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Dispositivi di corrispondenza - Compreso OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Abbinamento di dispositivi Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'La corrispondenza è effettuata nel seguente ordine';

$GLOBALS["lang"]['maturity_level'] = 'Livello di maturazione';

$GLOBALS["lang"]['Maturity Level'] = 'Livello di maturazione';

$GLOBALS["lang"]['maturity_score'] = 'Punteggio della maturità';

$GLOBALS["lang"]['Maturity Score'] = 'Punteggio della maturità';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Dimensione massima del file';

$GLOBALS["lang"]['Max File Size'] = 'Dimensione massima del file';

$GLOBALS["lang"]['Max Length'] = 'Lunghezza massima';

$GLOBALS["lang"]['max_size'] = 'Dimensione massima';

$GLOBALS["lang"]['Max Size'] = 'Dimensione massima';

$GLOBALS["lang"]['May'] = 'Maggio';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Misura la probabilità che la vulnerabilità venga attaccata, e si basa sullo stato attuale delle tecniche di exploit, sfrutta la disponibilità del codice o lo sfruttamento attivo, “in-the-wild”.';

$GLOBALS["lang"]['medium'] = 'Media';

$GLOBALS["lang"]['Medium'] = 'Media';

$GLOBALS["lang"]['members'] = 'Membri';

$GLOBALS["lang"]['Members'] = 'Membri';

$GLOBALS["lang"]['memory'] = 'Memoria';

$GLOBALS["lang"]['Memory'] = 'Memoria';

$GLOBALS["lang"]['memory_count'] = 'Conteggio di memoria';

$GLOBALS["lang"]['Memory Count'] = 'Conteggio di memoria';

$GLOBALS["lang"]['memory_slot_count'] = 'Conte di fessura di memoria';

$GLOBALS["lang"]['Memory Slot Count'] = 'Conte di fessura di memoria';

$GLOBALS["lang"]['menu_category'] = 'Menu Categoria';

$GLOBALS["lang"]['Menu Category'] = 'Menu Categoria';

$GLOBALS["lang"]['menu_display'] = 'Visualizzazione menu';

$GLOBALS["lang"]['Menu Display'] = 'Visualizzazione menu';

$GLOBALS["lang"]['message'] = 'Messaggio';

$GLOBALS["lang"]['Message'] = 'Messaggio';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Ultimo cambiamento';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Ultimo cambiamento';

$GLOBALS["lang"]['metric'] = 'Metrico';

$GLOBALS["lang"]['Metric'] = 'Metrico';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Rete di area metropolitana';

$GLOBALS["lang"]['Metropolitan area network'] = 'Rete di area metropolitana';

$GLOBALS["lang"]['Mexico'] = 'Messico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Micro-';

$GLOBALS["lang"]['Microtime'] = 'Micro-';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Dal momento che l\'ultima Audit è più grande di';

$GLOBALS["lang"]['model'] = 'Modello';

$GLOBALS["lang"]['Model'] = 'Modello';

$GLOBALS["lang"]['model_family'] = 'Modello Famiglia';

$GLOBALS["lang"]['Model Family'] = 'Modello Famiglia';

$GLOBALS["lang"]['Modified'] = 'Modificato';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modificare uno script esistente';

$GLOBALS["lang"]['module'] = 'Modulo';

$GLOBALS["lang"]['Module'] = 'Modulo';

$GLOBALS["lang"]['module_index'] = 'Indice del modulo';

$GLOBALS["lang"]['Module Index'] = 'Indice del modulo';

$GLOBALS["lang"]['Modules'] = 'Moduli';

$GLOBALS["lang"]['Moldova'] = 'Moldavia';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Lunedì';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitoraggio';

$GLOBALS["lang"]['Monitor'] = 'Monitoraggio';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitorare e misurare le prestazioni ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mese';

$GLOBALS["lang"]['Month'] = 'Mese';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Maggiori informazioni';

$GLOBALS["lang"]['More Secure'] = 'Più sicuro';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'SQL può essere utilizzato per raggruppare gli attributi all\'interno di un intervallo. Qui di seguito mostra l\'SQL per i dispositivi non visti in un grafico a torta raggruppato da intervalli di date visti.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Maggiori informazioni su debugging questo può essere trovato su un filetto di overflow Stack utile';

$GLOBALS["lang"]['Morocco'] = 'Marocco';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Molto probabilmente il firewall Windows (o un firewall di terze parti) sta negando il tentativo di connessione.<br/><br/>Si prega di accedere alla macchina Windows di destinazione e controllare le impostazioni del firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'La maggior parte di Open-AudIT è in licenza con GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Scheda madre';

$GLOBALS["lang"]['Motherboard'] = 'Scheda madre';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Tipo di montaggio';

$GLOBALS["lang"]['Mount Type'] = 'Tipo di montaggio';

$GLOBALS["lang"]['Mozambique'] = 'Mozambico';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Devo rispondere a Ping. Se impostato, Nmap tenterà di inviare e ascoltare una risposta ICMP. Se il dispositivo non risponde, non si verificherà ulteriore scansione.<br/>Precedentemente un dispositivo non ha dovuto rispondere a un ping per Open-AudIT per continuare la scansione.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Deve rispondere a Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Il mio AntiVirus mi spinge a negare/permettere cose';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Il mio tempo è finito in Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS cliente';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opzioni del dispositivo NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Selezione dispositivi NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nome del campo NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Tipo di campo NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Gruppo NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMI Role';

$GLOBALS["lang"]['NOTE'] = 'NOTA';

$GLOBALS["lang"]['NOTE #2'] = 'NOTA #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTA - Per ulteriori informazioni sui formati DateTime, vedere';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NOTA - Se richiedi un formato CSV, XML o JSON scaricato (una sola credenziale o la collezione completa) verranno inviati i dettagli delle credenziali effettive. Non la stringa crittografata, il nome utente effettivo, password, stringa comunitaria, ecc. Eventuali dettagli sensibili non vengono visualizzati nella GUI web, ma sono resi disponibili tramite altri formati. Per evitare questa esportazione è disponibile un elemento di configurazione chiamato decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOTA - Le parentesi ricci nei dati archiviati devono essere utilizzate come-is (non sostituite come per altri esempi sopra).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - È possibile impedire che vengano visualizzate le credenziali di testo semplici impostando l\'elemento di configurazione per <code>decrypt_credentials</code> a <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nome';

$GLOBALS["lang"]['Name'] = 'Nome';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nome: Il nome che stai dando a questo campo. Idealmente dovrebbe essere unico.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Indice netto';

$GLOBALS["lang"]['Net Index'] = 'Indice netto';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antille olandesi';

$GLOBALS["lang"]['Netherlands the'] = 'Paesi Bassi';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'NetStation';

$GLOBALS["lang"]['Netstat'] = 'NetStation';

$GLOBALS["lang"]['Netstat Policies'] = 'Politiche Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Porte Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports utilizza una combinazione di numero di porta, protocollo e programma. Se tutti sono presenti la politica passa.';

$GLOBALS["lang"]['Network'] = 'Rete di rete';

$GLOBALS["lang"]['network_address'] = 'Indirizzo di rete';

$GLOBALS["lang"]['Network Address'] = 'Indirizzo di rete';

$GLOBALS["lang"]['Network Discovery'] = 'Network Discovery';

$GLOBALS["lang"]['network_domain'] = 'Dominio di rete';

$GLOBALS["lang"]['Network Domain'] = 'Dominio di rete';

$GLOBALS["lang"]['Network Types'] = 'Tipi di rete';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Il tipo di rete è impostato su Local Area Network per impostazione predefinita, ma può essere modificato dall\'utente come si vede in forma. I tipi supportati sono di seguito (grazie a Wikipedia).<br/><br/>Una rete può essere caratterizzata dalla sua capacità fisica o dal suo scopo organizzativo. L\'uso della rete, inclusa l\'autorizzazione dell\'utente e i diritti di accesso, differiscono di conseguenza.';

$GLOBALS["lang"]['networks'] = 'Reti';

$GLOBALS["lang"]['Networks'] = 'Reti';

$GLOBALS["lang"]['Networks Generated By'] = 'Reti generate da';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Le reti sono aggiornate con ogni scoperta. Vengono aggiunti elementi come IPs Disponibile e IPs Usati, insieme a Gateways, DHCP e Server DNS.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Le reti rispondono in modo diverso a seconda di come sono configurate. Alcuni router e/o firewall possono rispondere <i>per conto</i> di IP dall\'altra parte delle loro interfacce al server Open-AudIT. È abbastanza comune vedere Nmap segnalare una sonda per SNMP (UDP port 161) per rispondere come open|filtered per dispositivi che fanno e non esistono. Questo è fuorviante in quanto non c\'è nessun dispositivo a quel IP, ma finisce con una voce del dispositivo nel database. 99,9% del tempo, non è Open-AudIT, né Nmap, ma la rete che causa questo problema. Ora che abbiamo le opzioni per trattare le porte Open|filtered come aperte o chiuse, possiamo eliminare un sacco di questa confusione. Gli utenti di Enterprise hanno anche la possibilità di modificarlo su base per scoperta (più che semplicemente utilizzando la voce Medium (Classic), come sopra).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Reti utilizzando una maschera CIDR di';

$GLOBALS["lang"]['New Building Name'] = 'Nuovo nome di costruzione';

$GLOBALS["lang"]['New Caledonia'] = 'Nuova Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nome del nuovo piano';

$GLOBALS["lang"]['New Room Name'] = 'Nome della camera';

$GLOBALS["lang"]['New Row Name'] = 'Nuovo nome di riga';

$GLOBALS["lang"]['New Zealand'] = 'Nuova Zelanda';

$GLOBALS["lang"]['News'] = 'Notizie';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'News check-in ogni volta che si effettua il login per domande aggiornate e pacchetti, raccomandazioni di configurazione, annunci di rilascio, post del blog e altro ancora.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'News è il nostro modo di tenervi aggiornati con le ultime correzioni, annunci, aggiornamenti di query, versioni software e altro ancora.<br/><br/>Non c\'è bisogno di rimanere in cima alla wiki o controllare le nuove versioni, possiamo inviarle a voi!';

$GLOBALS["lang"]['next_hop'] = 'Prossimo Hop';

$GLOBALS["lang"]['Next Hop'] = 'Prossimo Hop';

$GLOBALS["lang"]['next_run'] = 'Prossima corsa';

$GLOBALS["lang"]['Next Run'] = 'Prossima corsa';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Successivo click <i>Crea la tua applicazione</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Quindi, fare clic su OK, quindi fare clic con il pulsante destro del mouse sul servizio Apache 2.4 e fare clic su Riavvia. Fatto!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Quindi, fare clic con il pulsante destro del mouse sul servizio Apache2.4 e selezionare Proprietà, quindi fare clic sulla scheda Log On.';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap non può determinare se la porta è aperta perché il filtraggio dei pacchetti impedisce alle sonde di raggiungere la porta. Il filtraggio potrebbe essere da un dispositivo firewall dedicato, regole del router o software firewall basato su host. Questi porti frustrano gli attaccanti perché forniscono così poche informazioni. A volte rispondono con messaggi di errore ICMP come il codice di tipo 3 13 (destinazione irraggiungibile: comunicazione amministrativamente vietata), ma i filtri che semplicemente cadere sonde senza rispondere sono molto più comuni. Questo costringe Nmap a riprovare più volte solo nel caso in cui la sonda fosse caduta a causa di congestione di rete piuttosto che filtrare. Questo rallenta notevolmente la scansione.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap mette le porte in questo stato quando non è in grado di determinare se una porta è aperta o filtrata. Questo avviene per i tipi di scansione in cui le porte aperte non danno risposta. La mancanza di risposta potrebbe anche significare che un filtro di pacchetti ha abbandonato la sonda o qualsiasi risposta che ha richiesto. Così Nmap non sa per certo se la porta è aperta o essere filtrata. Il protocollo UDP, IP, FIN, NULL e Xmas esegue la classificazione delle porte in questo modo.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'I dettagli della tempistica Nmap si trovano nella parte inferiore di questa pagina collegata';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis cliente';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis cliente';

$GLOBALS["lang"]['nmis_group'] = 'Gruppo Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Gruppo Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Gestione di Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Gestione di Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Nome di Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nome di Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Note di Nmis';

$GLOBALS["lang"]['Nmis Notes'] = 'Note di Nmis';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'No.';

$GLOBALS["lang"]['No Devices Returned'] = 'Nessun dispositivo ripristinato';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'No Google Maps API Key presente, non sarà in grado di visualizzare la mappa.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Nessuna licenza per professionista o impresa';

$GLOBALS["lang"]['No Results'] = 'Nessun risultato';

$GLOBALS["lang"]['No data in License Key'] = 'Nessun dato in chiave di licenza';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Nessun aggiornamento del database richiesto in questo momento.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Nessun dispositivo è nel database.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Nessuno';

$GLOBALS["lang"]['Norfolk Island'] = 'Isola di Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normale';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Isole Marianne';

$GLOBALS["lang"]['Norway'] = 'Norvegia';

$GLOBALS["lang"]['Norwegian'] = 'Norvegia';

$GLOBALS["lang"]['Not Applicable'] = 'Non applicabile';

$GLOBALS["lang"]['Not Checked'] = 'Non controllato';

$GLOBALS["lang"]['Not Equals'] = 'Non uguali';

$GLOBALS["lang"]['Not In'] = 'Non';

$GLOBALS["lang"]['Not Like'] = 'Non mi piace';

$GLOBALS["lang"]['Not Set'] = 'Non impostato';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Non tutti i computer saranno in grado di completare con successo un benchmark. Abbiamo visto in qualche modo fallire nel testare per motivi al di là del nostro controllo. I registri dovrebbero aiutarti a puntare nella giusta direzione per questi elementi.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Non nella lista (comma seperato)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Non normalmente usato. Se impostato, questo richiede che il dispositivo abbia una porta aperta (come per Opzioni di scansione) da considerare rispondere. Un indirizzo MAC, risposta arp o risposta ping non è considerato sufficiente per essere considerato rispondere. Utile se un router o un firewall tra il server Open-AudIT e l\'IP di destinazione risponde alle scansioni delle porte per conto degli IP.';

$GLOBALS["lang"]['Note'] = 'Nota';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - La selezione di un genitore fornirà automaticamente l\'accesso ai propri figli (anche se non verrà mostrato qui).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Si noti che la licenza Enterprise 100 dispositivo non include il supporto.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Nota, potrebbe essere necessario rendere lo script eseguibile con';

$GLOBALS["lang"]['Notes'] = 'Note';

$GLOBALS["lang"]['notes'] = 'Note';

$GLOBALS["lang"]['Notice'] = 'Avviso';

$GLOBALS["lang"]['notin'] = 'No.';

$GLOBALS["lang"]['Notin'] = 'No.';

$GLOBALS["lang"]['November'] = 'Novembre';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Ora per l\'abbonamento ID, fare clic su Tutti i servizi, Abbonamenti e copiarlo.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Ora dobbiamo fornire l\'accesso dell\'applicazione Azure Active Directory al tuo abbonamento.<br/><br/>Fare clic su Gruppi di risorse e quindi sul gruppo di risorse a cui si desidera che l\'applicazione Azure Active Directory abbia accesso.<br/><br/>Fare clic su Aggiungi. Il ruolo dovrebbe essere Contributor e quindi cercare l\'app (Open-AudIT). Quindi fare clic su Salva.<br/><br/>Ora l\'applicazione ha accesso all\'abbonamento, in modo da poter effettuare chiamate API. Le chiamate API saranno richieste per conto dell\'applicazione, non per l\'utente.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDINANZA';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Famiglie';

$GLOBALS["lang"]['OS Family'] = 'Famiglia OS';

$GLOBALS["lang"]['OS Group'] = 'Gruppo OS';

$GLOBALS["lang"]['OUTPUTS'] = 'FUORI';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Oggetto Identificazione';

$GLOBALS["lang"]['Object Ident'] = 'Oggetto Identificazione';

$GLOBALS["lang"]['Obtain top management support'] = 'Ottenere supporto di gestione superiore';

$GLOBALS["lang"]['October'] = 'Ottobre';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Su';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Su Windows, Open-AudIT utilizza WMI in quanto è il metodo primario di auditing. Windows ha una notoria reputazione in cui WMI remoto è interessato. Si tende a <i>solo lavoro</i> o qualche oggetto misterioso sul bersaglio richiede il cambiamento. Se stai sperimentando difficoltà a controllare PC Windows remoti, abbiamo creato uno script chiamato test_windows_client.vbs. Puoi eseguire questo script <strong>locale</strong> sulla macchina in questione, dopo aver firmato come utente utilizzato da Open-AudIT per eseguire l\'audit. Lo script fa <strong>nessuna modifica</strong> ai dispositivi di destinazione. Controlla la maggior parte (non tutti) degli articoli qui sotto e genera tag PASS, FAIL e INFO per varie proprietà. NOTA - Se il sistema di destinazione viene controllato correttamente, non è necessario modificare le impostazioni. Alcuni dei seguenti non esistono su PC Windows che sono in grado di essere controllati e alcuni esistono. Modifica solo le impostazioni se le tue scoperte su PC particolari non funzionano come previsto.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Nella pagina Elenco delle attività fare clic su <i>Aggiungi nuovo</i> pulsante per configurare un\'attività.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Sul campo <i>Sforzo di corrispondenza</i> si dovrebbe fornire il nome del software che si desidera tracciare. È possibile utilizzare il segno percentuale (%) come wildcard in cui richiesto.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Nella pagina successiva sarà possibile selezionare Access Keys e vedere la chiave o creare una nuova chiave.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Sul PC Windows di destinazione, eseguire l\'utilità DCOM e verificare (o impostare) gli attributi sottostanti. Iniziare - > Eseguire, inserire DCOMCNFG e premere OK. Questo aprirà la finestra DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'In alto a destra (sotto la barra del menu) vedrete diversi pulsanti. Questi consentono di selezionare un altro cruscotto, impostare il cruscotto corrente come homepage (se non è già) e modificare il cruscotto corrente (se hai il permesso).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, Non Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Una volta creato un campo aggiuntivo può essere utilizzato in query e gruppi come qualsiasi altro attributo nel database.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Una volta commentato, il tuo certificato verrà convalidato, ma potrebbe anche fallire questa validazione se si utilizzano certificati auto-firmati e non hanno configurato correttamente il server.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Una volta che lo script è eseguito su un obiettivo, se lo script si cancella.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Una volta che queste domande iniziali (snmp, ssh, wmi) sono complete, se il dispositivo è un supportato dagli script di audit (Windows, Linux, OSX, AIX, HP-UX, Solaris e ESXi), lo script di audit corretto verrà copiato al bersaglio ed eseguito. Lo script di audit si eliminerà al completamento. Il risultato verrà memorizzato sulla macchina di destinazione come file XML. Il server Open-AudIT recupera il file di risultato per l\'elaborazione ed elimina il file di risultato sull\'obiettivo. La posizione in cui lo script di audit viene copiato sul dispositivo di destinazione (almeno per gli audit SSH) è configurabile modificando l\'elemento di configurazione find_linux_script_directory. Per impostazione predefinita è impostato su /tmp/. Questo può essere necessario cambiare se /tmp ha set noexec. Il file di risultato viene quindi elaborato e i dettagli del dispositivo aggiornati all\'interno di Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Una volta fatto clic sul pulsante di esecuzione, Open-AudIT definirà un processo per avviare la scoperta e restituire l\'utente alla pagina dei dettagli di scoperta. Il processo appena generato prende le opzioni di scoperta configurate ed esegue i comandi Nmap per determinare l\'elenco iniziale degli indirizzi IP da scansionare (o query Active Directory se questo tipo viene utilizzato). Ogni IP da scansionare viene inserito in una coda. Una volta completato il processo iniziale (e ci sono IP da scansionare nella coda) un certo numero di processi verrà generato per eseguire la scansione di ogni IP in parallelo. Questo numero di processi è configurabile nella configurazione, modificare l\'attributo <i>coda_limit</i>. Per impostazione predefinita questo è impostato a 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Una volta scelto i dispositivi da modificare, fare clic sul pulsante matita in alto a destra della tabella.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Una volta fatto questo, Open-AudIT cercherà di verificare i dettagli del tuo utente sul metodo Auth configurato. Se l\'utente ha credenziali valide e <code>use_authorisation</code> è impostato, Open-AudIT chiederà l\'elenco dei gruppi a cui l\'utente appartiene. Se l\'utente è nei gruppi corrispondenti per Open-AudIT Roles e Orgs, questi Roles e Orgs saranno applicati a quell\'utente.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Una volta generata una definizione Baseline è possibile programmarla per essere eseguita contro un gruppo specificato di dispositivi.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Una volta che hai quegli articoli, in Open-AudIT Impresa si può andare al menu -> Scoprire -> Nuvole -> Creare Nuvole, selezionare il <i>Amazon AWS</i> digitarli e incollarli. Fatto.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Una volta che hai quegli articoli, in Open-AudIT Impresa si può andare al menu -> Scoprire -> Nuvole -> Creare Nuvole, selezionare il <i>Microsoft Azure</i> digitarli e incollarli. Fatto.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Una volta che avete le credenziali del cloud, è solo una questione di creare una nuova nuvola ed eseguire la scoperta - o programmare scoperte di prima/futuro. Assicurarsi di avere anche le credenziali necessarie per accedere alle vostre macchine cloud, ed è tutto fatto per voi proprio come una scoperta regolare. Credenziali per il tuo cloud';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Uno <code>3x2</code>♪ <code>4x2</code>♪ <code>4x3</code> o <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Una di rete di area del campus, rete di cloud, rete privata aziendale, rete di area domestica, rete locale, rete di area metropolitana, rete di area locale passiva, rete di area personale, rete di storage-Area, rete di sistema-Area, rete privata virtuale, rete di ampia area, rete locale wireless.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Uno di sviluppo, Disaster Recovery, Valutazione, Pre-Produzione, Produzione, Testing, Formazione, Test di accettazione utente';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Uno degli stanziati, delegato, pianificazione, riservato, non legato, sconosciuto, non gestito. Predefiniti da assegnare.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Uno di entrambi <code>active directory</code> o <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Uno di: antivirus, backup, firewall, approvato, vietato, ignorato o altro.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Un altro elemento per stare attenti - assicurarsi di utilizzare il nome host (o fqdn) del vostro LDAP Server che corrisponde a quello che è nel certificato (non solo l\'indirizzo IP dei server LDAP) quando si crea l\'ingresso LDAP in Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentazione online';

$GLOBALS["lang"]['Open'] = 'Aperto';

$GLOBALS["lang"]['Open Data'] = 'Dati aperti';

$GLOBALS["lang"]['Open Source'] = 'Fonte aperta';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Il codice sorgente comunitario è disponibile su GitHub. Siete incoraggiati a ispezionare qualsiasi codice di cui avete dubbi, e perché è open source - siete anche incoraggiati a chiederci su qualsiasi problema avete o segnalare eventuali risultati. Siamo sempre più che felici di accettare contributi di codice, rapporti di vulnerabilità, o anche domande semplici. Siamo qui per aiutare.<br/><br/>Gli script di audit stessi (Windows, Linux, MacOS, et al) sono deliberatamente scritti in script di shell nativo leggibile (VBScript for Windows, Bash for *nix). È possibile vedere esattamente quali comandi sono eseguiti. È possibile rimuovere qualsiasi comando che si sente non è necessario. Puoi chiedere a una terza parte di controllare il codice per te e (se vuoi) segnalare eventuali risultati.<br/><br/>Open-AudIT Enterprise svolge le funzioni commerciali aggiuntive per la comunità Open-AudIT. È incluso come singolo file compilato senza dipendenze esterne. Se l\'Enterprise svolge la funzione(i), se si tratta di problemi Firstwave è felice di lavorare attraverso di loro con voi - basta chiedere! Provalo con un altro fornitore di software commerciale!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selezione dispositivi Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise ha la capacità di scegliere tra un elenco predefinito di opzioni di scansione scoperta e anche di personalizzare le opzioni individuali per la scoperta.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Soluzione di scoperta e audit flessibili su larga scala per grandi reti. Tutte le caratteristiche di Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control tra cui Active Directory e LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nome del campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licenze Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opzioni Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional e Enterprise includono le funzionalità di Reporting Enhanced, tra cui le funzionalità di reportistica basate su tempo, storico e muti-query in più formati.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Professionista ha la capacità di scegliere tra un elenco predefinito di opzioni di scansione scoperta, per scoperta.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. Il mondo\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud L\'IT può essere configurato per utilizzare server LDAP (Microsoft Active Directory e/o OpenLDAP) per autenticare e autorizzare un utente e, inoltre, creare un account utente in Open-AudIT utilizzando ruoli e org assegnati in base all\'appartenenza al gruppo LDAP. Può anche usare';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud L\'IT può essere eseguito sul tuo server nel tuo data center. Non ha bisogno di accesso a Internet affatto. Anche l\'installazione su Linux in cui utilizziamo il gestore dei pacchetti di distribuzione per i nostri prerequisiti può essere negata utilizzando un repository di pacchetti approvati dal team interno e di sicurezza.<br/><br/>Open-Aud IT non memorizza nessuno dei tuoi dati nel cloud. Anche le informazioni sulle licenze possono essere fornite senza dover accedere a Internet dal server Open-AudIT.<br/><br/>Certo, è più facile permettergli di accedere a Internet per scaricare i pacchetti (comprese le correzioni di sicurezza) per la vostra distribuzione, ma questo dipende da voi e dalle vostre politiche di sicurezza. Open-AudIT non ha bisogno di internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT può scaricare, parse e utilizzare report di Vulnerabilità NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud L\'IT può mostrare in una delle diverse lingue. Come si può migliorare questo?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud IT può memorizzare le informazioni in campi aggiuntivi associati a ciascun dispositivo.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT può utilizzare Microsoft Entra (precedentemente noto come Microsoft Azure Active Directory) come metodo di autenticazione. Questo significa che l\'utente in Open-AudIT può fare clic su Logon utilizzando il pulsante Entra nella pagina del logo e utilizzare le credenziali di accesso per accedere. Quell\'utente dovrà esistere già all\'interno di Open-AudIT (e sarà assegnato';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT può usare OKTA come metodo di autenticazione. Questo significa che l\'utente in Open-AudIT può fare clic su Logon utilizzando il pulsante OKTA nella pagina del logo e utilizzare le credenziali OKTA per la registrazione. Quell\'utente avrà bisogno di esistere già all\'interno di Open-AudIT (e sarà assegnato Roles e Orgs), ma non avrà bisogno di ricordare un insieme separato di credenziali di logon.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT viene fornito con molte domande integrate. Se avete bisogno di una query specifica e nessuna delle query pre-confezionate si adatta alle vostre esigenze, è abbastanza facile creare una nuova e caricare in Open-AudIT per l\'esecuzione.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT ha un\'API Restful JSON da utilizzare sia nell\'interfaccia web che tramite richieste JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud IT ha un sistema di autorizzazioni granulari per determinare a cosa un utente all\'interno di Open-AudIT può fare, e gli elementi a cui può farlo. Open-AudIT può essere completamente autosufficiente, o utilizzare Active Directory o OpenLDAP per l\'autenticazione e/o l\'autorizzazione.<br/><br/>Spetta all\'amministratore di Open-AudIT come vorrebbero il Role Based Access Control al lavoro.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud Ha un potente motore di rilevamento dei cambiamenti. Eventuali attributi del dispositivo che vengono aggiunti, rimossi o modificati verranno rilevati e memorizzati. Tali modifiche possono essere segnalate e i dati relativi confermati su quanto previsto dal processo di cambiamento e rilascio della società.<br/><br/>Quando un dispositivo viene controllato, gli attributi sono suddivisi in sezioni che corrispondono alle tabelle del database.<br/><br/>Ogni dispositivo (computer, router, stampante, et al) ha una voce nel <code>devices</code> tavolo. Ogni voce nella tabella dei dispositivi ha una <code>id</code> colonna. Questo valore è unico - è un id auto-incrementing.<br/><br/>Quando il risultato dell\'audit viene elaborato, ogni elemento in ogni sezione ha il suo risultato di audit rispetto a quello che è nel database.<br/><br/>Per ogni sezione, se le colonne chiave (vedi sotto tabella) contengono i valori identici, è considerato già installato e ha i suoi <code>last_seen</code> attributo aggiornato. Nessuna voce change_log è creata.<br/><br/>Se una delle colonne chiave non corrisponde, è considerato un nuovo attributo ed è inserito. A <code>change_log</code> l\'ingresso è creato se il dispositivo aveva altri attributi già presenti nella tabella.<br/><br/>Al completamento del processo di audit, tutti gli elementi del database che non sono stati aggiornati (o inseriti) sono considerati non presenti. The <code>current</code> attributo per questo articolo è impostato su <i>n</i> e viene generata una voce change_log.<br/><br/>Così, possiamo determinare se qualcosa è attualmente installato - la colonna corrente è <i>#</i>.<br/><br/>Possiamo determinare quando qualcosa è stato inizialmente rilevato - il <i>prima.</i>.<br/><br/>Possiamo determinare se qualcosa è stato installato dopo l\'audit iniziale - prima visto sarà diverso nelle tabelle dei componenti e dei dispositivi.<br/><br/>Possiamo determinare se qualcosa non è attualmente installato, ma in precedenza era - corrente = <i>n</i>.<br/><br/>Possiamo determinare l\'ultima volta che abbiamo rilevato un elemento - last_seen.<br/><br/>Ad ogni punto, possiamo determinare cosa c\'era su un sistema - utilizzando la tabella audit_log e selezionando i componenti rilevanti in base a first_seen e last_seen.<br/><br/>Ogni sezione e le relative colonne chiave corrispondenti sono qui sotto.<br/><br/>NOTA - Ci sono alcune eccezioni come riportato di seguito.<br/><br/>*1 - Per le schede di rete, se il computer è una macchina VMware Esx utilizza anche le colonne net_index e di connessione.<br/><br/>*2 - Per le partizioni, f il computer è una macchina AIX, usiamo il nome della partizione.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT è un programma progettato per tracciare e riferire sul tuo IT e relativi dettagli patrimoniali e configurazione. Open-AudIT può dire <i>Cosa c\'è sulla tua rete?</i>, come è configurato e se ci sono state modifiche. Open-AudIT offre una piattaforma elegante, flessibile e facile da usare per la scoperta dei dispositivi, l\'auditing IT e l\'automazione della gestione delle scorte direttamente fuori dalla scatola.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud IT rende facile modificare gli attributi di più dispositivi contemporaneamente.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT ha bisogno di autorizzazioni specifiche directory per essere in grado di creare file, caricare risultati, ecc. Si prega di impostare come di seguito.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT fornisce molte query integrate e rende semplice creare il proprio.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Nave IT con ruoli integrati per admin, org_admin e utente.<br/><br/>Generalmente, un utente che è un amministratore dell\'applicazione Open-AudIT dovrebbe avere ruoli admin e possibile org_admin.<br/><br/>Un utente può avere più ruoli. Il permesso sarà applicato a livello più permissivo - IE, se un utente ha i ruoli di utente e org_admin, saranno in grado di creare posizioni perché org_admin concede questo permesso, anche se il ruolo dell\'utente non lo fa.<br/><br/>Il ruolo di amministratore consente l\'accesso a collezioni come configurazione, database, gruppi, server ldap, log, query e ruoli. Oggetti globali che influiscono sull\'intera applicazione.<br/><br/>Il ruolo org_admin di solito consente di creare, leggere, aggiornare ed eliminare azioni per qualsiasi raccolta che contenga la colonna org_id. Praticamente tutti i dati tranne alcune delle collezioni di cui sopra conterranno un <code>org_id</code> colonna.<br/><br/>Il ruolo dell\'utente generalmente consente di leggere solo l\'accesso a tutti gli elementi con una colonna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Nave IT con ruoli integrati per admin, org_admin e utente.<br/><br/>Generalmente, un utente che è un amministratore dell\'applicazione Open-AudIT dovrebbe avere ruoli admin e possibile org_admin.<br/><br/>Un utente può avere più ruoli. Il permesso sarà applicato a livello più permissivo - IE, se un utente ha i ruoli di utente e org_admin, saranno in grado di creare posizioni perché org_admin concede questo permesso, anche se il ruolo dell\'utente non lo fa.<br/><br/>Il ruolo di amministratore consente l\'accesso a collezioni come configurazione, database, gruppi, server ldap, log, query e ruoli. Oggetti globali che influiscono sull\'intera applicazione.<br/><br/>Il ruolo org_admin di solito consente di creare, leggere, aggiornare ed eliminare azioni per qualsiasi raccolta che contenga la colonna org_id. Praticamente tutti i dati tranne alcune delle collezioni di cui sopra conterranno una colonna org_id.<br/><br/>Il ruolo dell\'utente generalmente consente di leggere solo l\'accesso a tutti gli elementi con una colonna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Navi Open-AudIT con diversi Dashboard preconfigurati. Se sei un utente professionale, puoi selezionare tra due di questi e impostarlo come pagina predefinita quando lo fai. Se sei un utente Enterprise, non puoi solo selezionare tra i cinque Dashboard preconfigurati, ma hai anche la possibilità di creare il tuo.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT dovrebbe essere installato su Windows 64bit <strong>Server</strong> solo sistemi. Windows 10 e Windows 11 sono <strong>non</strong> supportato.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT utilizza Nmap nella sua funzione Discovery. Nmap sonde dispositivi per porte aperte. I dispositivi idealmente dovrebbero rispondere con aperto per porte di lavoro. I dispositivi spesso non rispondono con questo. Le varie risposte sono dettagliate di seguito.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT utilizza Nmap nella sua funzione Discovery. Senza Nmap, Open-AudIT non funzionerà correttamente. Ogni installazione Open-AudIT presuppone che Nmap sia installata e ne testerà anche sulle pagine web Discovery. Maggiori informazioni su Open-AudIT e Nmap sono disponibili qui';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT utilizza Nmap nella sua funzione Discovery. Senza Nmap, Open-AudIT non funzionerà correttamente. Ogni installazione Open-AudIT presuppone che Nmap sia installata e ne testerà le pagine web Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud IT utilizza le credenziali per accedere ai dispositivi. Questi sono criptati e memorizzati, proprio come ci si aspetterebbe.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT è stato scritto da un australiano di lingua inglese. Tutto nell\'applicazione utilizza la formulazione inglese. Tuttavia Open-AudIT ha sempre sostenuto più lingue per la visualizzazione. Queste traduzioni non sono sempre corrette, perché gli sviluppatori non parlano in modo nativo la lingua di ogni traduzione offerta.<br/><br/>Cosa puoi fare se qualcosa non è corretto nella traduzione?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap è installato';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Aprire un biglietto di supporto?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Attribuzione degli utenti di Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Attribuzione degli utenti di Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'Sistema operativo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Sistema operativo Famiglia Contiene';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemi operativi';

$GLOBALS["lang"]['Operators'] = 'Operatori';

$GLOBALS["lang"]['optical'] = 'Ottica';

$GLOBALS["lang"]['Optical'] = 'Ottica';

$GLOBALS["lang"]['Optimized'] = 'Ottimizzato';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opzione #1 - Modifica dei dati';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opzione #2 - Modifica del file di traduzione';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Audizione facoltativa basata sull\'agente';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versione opzionale come controllata da Open-AudIT. Utilizzare il segno percentuale % come wildcard.';

$GLOBALS["lang"]['options'] = 'Opzioni';

$GLOBALS["lang"]['Options'] = 'Opzioni';

$GLOBALS["lang"]['Options, options, options'] = 'Opzioni, opzioni, opzioni';

$GLOBALS["lang"]['Or'] = 'O';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Oppure selezionare dai campi sottostanti.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID Org';

$GLOBALS["lang"]['Org ID'] = 'ID Org';

$GLOBALS["lang"]['Organisation'] = 'Organizzazione';

$GLOBALS["lang"]['organisation'] = 'Organizzazione';

$GLOBALS["lang"]['Organisation Descendants'] = 'Discendanti dell\'organizzazione';

$GLOBALS["lang"]['Organisations'] = 'Organizzazioni';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Le organizzazioni possono estendere e migliorare il livello di dettaglio che viene memorizzato contro ogni dispositivo scoperto utilizzando campi personalizzati e il nucleo aperto consente una facile integrazione in CMDB, gestione eventi e sistemi di ticketing.';

$GLOBALS["lang"]['orgs'] = 'Org.';

$GLOBALS["lang"]['Orgs'] = 'Org.';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Nome';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Gli org in Open-AudIT sono un elemento chiave. Un utente ha un Org primario e un elenco di Org che possono accedere. Un utente combina questo con un elenco di ruoli assegnati che definiscono quali azioni possono prendere su elementi assegnati agli Org a cui hanno accesso. La combinazione di un utente <i>o</i> e <i>ruoli</i> definire ciò che possono e non possono fare all\'interno di Open-AudIT.<br/><br/>La maggior parte degli elementi in Open-AudIT sono assegnati a un Org. Dispositivi, posizioni, reti, ecc.<br/><br/>Org possono avere figli Orgs. Pensa a una struttura organizzativa (tree). Se un utente ha accesso a un Org specifico, la maggior parte del tempo (non sempre) hanno anche accesso a quei discendenti Orgs.';

$GLOBALS["lang"]['orientation'] = 'Orientamento';

$GLOBALS["lang"]['Orientation'] = 'Orientamento';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os bit';

$GLOBALS["lang"]['Os Bit'] = 'Os bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Versione di Os Display';

$GLOBALS["lang"]['Os Display Version'] = 'Versione di Os Display';

$GLOBALS["lang"]['os_family'] = 'Famiglia Os';

$GLOBALS["lang"]['Os Family'] = 'Famiglia Os';

$GLOBALS["lang"]['os_group'] = 'Gruppo Os';

$GLOBALS["lang"]['Os Group'] = 'Gruppo Os';

$GLOBALS["lang"]['os_installation_date'] = 'Data di installazione di Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Data di installazione di Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Licenza Os';

$GLOBALS["lang"]['Os License'] = 'Licenza Os';

$GLOBALS["lang"]['os_license_code'] = 'Codice di licenza';

$GLOBALS["lang"]['Os License Code'] = 'Codice di licenza';

$GLOBALS["lang"]['os_license_mode'] = 'Modalità di licenza';

$GLOBALS["lang"]['Os License Mode'] = 'Modalità di licenza';

$GLOBALS["lang"]['os_license_type'] = 'Tipo di licenza';

$GLOBALS["lang"]['Os License Type'] = 'Tipo di licenza';

$GLOBALS["lang"]['os_name'] = 'Nome Os';

$GLOBALS["lang"]['Os Name'] = 'Nome Os';

$GLOBALS["lang"]['os_version'] = 'Versione di Os';

$GLOBALS["lang"]['Os Version'] = 'Versione di Os';

$GLOBALS["lang"]['Other'] = 'Altri';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Oltre a questa restrizione, sei libero di selezionare gli attributi come richiesto. È una buona idea usare il menu';

$GLOBALS["lang"]['Others'] = 'Altri';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'La nostra integrazione predefinita consente anche una scoperta su qualsiasi dispositivo fornito esternamente. Così spediamo una scoperta predefinita per l\'integrazione di default fuori dalla scatola. Questi utilizzano le regole di corrispondenza predefinite, ma abilitano anche la corrispondenza sull\'indirizzo IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'I nostri esempi useranno <i>tipo</i> colonna.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Il nostro framework carica i file qui per l\'elaborazione, quindi li cancella. Pensa ai risultati dell\'audit, ecc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Il nostro obiettivo con il rilascio iniziale di integrazioni è stato specificamente per NMIS per l\'integrazione Open-AudIT <i>solo lavoro</i>. Se si utilizzano i programmi su Linux, si può letteralmente fare clic su un singolo pulsante per eseguire l\'integrazione. Niente di più è richiesto. Detto questo, l\'integrazione stessa è estremamente configurabile - quindi se qualcosa non è alla vostra preferenza, può essere facilmente cambiato.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'La nostra nuova funzione chiamata Vulnerabilities ti dà la possibilità di determinare rapidamente se qualsiasi dispositivo è interessato da qualsiasi CVE (Common Vulnerability Exposure) - ma come?<br/><br/>FirstWave consuma costantemente l\'output dal feed Nist NVD. Prendiamo questo e applichiamo alcune restrizioni, poi estraiamo i programmi interessati e costruiamo una query SQL per la segnalazione. La tua istanza Open-AudIT raggiunge FirstWave e richiede regolarmente nuove vulnerabilità. Quando riceve un nuovo record di vulnerabilità, viene eseguito contro il database e il risultato memorizzato. Ogni volta che un dispositivo viene elaborato, tutte le vulnerabilità corrispondenti vengono eseguite di nuovo e il risultato memorizzato. Questo significa quando si visualizza un elenco di vulnerabilità, non abbiamo bisogno di calcolare tutti i dispositivi interessati - abbiamo già il risultato. Quando si visualizza un record di vulnerabilità individuale, noi effettivamente ricalcola il risultato per questa singolare vulnerabilità.<br/><br/>Quindi, sei sempre aggiornato!<br/><br/>Oltre a questo, calcoliamo anche il risultato di tutte le vulnerabilità per tutti i dispositivi al giorno (di solito in un momento tranquillo, diciamo 2am).<br/><br/>Nel tuo caso di Open-AudIT, ti permettiamo di selezionare quali fornitori ti interessano. i.e. non c\'è uso di recuperare i record di vulnerabilità da un fornitore il cui software non si utilizza o hanno installato. Per impostazione predefinita, la nostra lista dei fornitori è Adobe, Apple, Cisco, Google, Microsoft, Mozilla e Redhat.<br/><br/>Tutto questo suona molto semplice, ma dietro le quinte un <b>lotto</b> sta succedendo. Per esempio, il record CVE contiene un elenco di software interessati - ma quei nomi di software non corrispondono a quello che riceviamo quando controlliamo un computer. Un buon esempio è Apache. In genere, un record CVE dirà che il software interessato è http_server. In realtà, questo appare come apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - e altri. Quindi, dobbiamo prima determinare qual è il nome reale del programma che riceviamo quando chiediamo a un computer, e ci possono essere nomi multipli. Dopo di che dobbiamo analizzare il record CVE e creare una dichiarazione SQL corrispondente. Permettendo per più nomi di programmi come sopra, e più versioni, intervalli di versione, e anche più diversi pezzi di software (un esempio è Thunderbird e Firefox in un unico CVE). E la tua istanza di Open-AudIT deve prendere questo e applicare anche il filtro Orgs. E questo e\' solo un CVE. Che dire di determinare quali CVE avete e non avete? E poi aggiungere un venditore alla lista? Tante cose da considerare!<br/><br/>Oltre alla consueta segnalazione, abbiamo anche alcuni nuovi widget disponibili per Dashboards, sulla base dei dati Vulnerabilities.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Il nostro timeout per una risposta SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Il nostro timeout per una risposta WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Il nostro timeout per una risposta SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Il nostro timeout per una risposta agli script di audit';

$GLOBALS["lang"]['output'] = 'Produzione';

$GLOBALS["lang"]['Output'] = 'Produzione';

$GLOBALS["lang"]['outputs'] = 'Uscite';

$GLOBALS["lang"]['Outputs'] = 'Uscite';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Punteggio complessivo (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Overwrite';

$GLOBALS["lang"]['Overwrite'] = 'Overwrite';

$GLOBALS["lang"]['owner'] = 'Proprietà';

$GLOBALS["lang"]['Owner'] = 'Proprietà';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec è una riimplementazione liberamente ridistribuibile del programma PsExec di SysInternal/Microsofts. PAExec ha lo scopo di essere un drop in sostituzione di PsExec, quindi l\'utilizzo della riga di comando è identico, con opzioni aggiuntive supportate. Questo lavoro è stato originariamente ispirato da Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'PODICE';

$GLOBALS["lang"]['POSTing data'] = 'Dati POSTing';

$GLOBALS["lang"]['Package'] = 'Pacchetto';

$GLOBALS["lang"]['packages'] = 'Pacchetti';

$GLOBALS["lang"]['Packages'] = 'Pacchetti';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'I pacchetti sono utilizzati per segnalare cose come <i>software vietato</i>, AntiVirus sui server, ecc.<br/><br/>Open-AudIT fornisce widget che si basano anche su repot forniti per rilevare lo stato di antivirus, firewall e altri software.';

$GLOBALS["lang"]['pagefile'] = 'Pagina';

$GLOBALS["lang"]['Pagefile'] = 'Pagina';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territorio palestinese';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nuova Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parametri';

$GLOBALS["lang"]['Paranoid'] = 'Paranoico';

$GLOBALS["lang"]['Parent'] = 'Parità';

$GLOBALS["lang"]['parent_id'] = 'ID principale';

$GLOBALS["lang"]['Parent ID'] = 'ID principale';

$GLOBALS["lang"]['parent_name'] = 'Nome del genitore';

$GLOBALS["lang"]['Parent Name'] = 'Nome del genitore';

$GLOBALS["lang"]['part_number'] = 'Numero della parte';

$GLOBALS["lang"]['Part Number'] = 'Numero della parte';

$GLOBALS["lang"]['part_of_domain'] = 'Parte del dominio';

$GLOBALS["lang"]['Part Of Domain'] = 'Parte del dominio';

$GLOBALS["lang"]['Partition'] = 'Partizione';

$GLOBALS["lang"]['partition_count'] = 'Conteggio di partizione';

$GLOBALS["lang"]['Partition Count'] = 'Conteggio di partizione';

$GLOBALS["lang"]['partition_disk_index'] = 'Indice dei dischi di partizione';

$GLOBALS["lang"]['Partition Disk Index'] = 'Indice dei dischi di partizione';

$GLOBALS["lang"]['Pass'] = 'Passo';

$GLOBALS["lang"]['Passed'] = 'Passato';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Rete passiva di area locale';

$GLOBALS["lang"]['Password'] = 'Password';

$GLOBALS["lang"]['password'] = 'Password';

$GLOBALS["lang"]['password_changeable'] = 'Password Cambiabile';

$GLOBALS["lang"]['Password Changeable'] = 'Password Cambiabile';

$GLOBALS["lang"]['password_disabled'] = 'Password Disattivata';

$GLOBALS["lang"]['Password Disabled'] = 'Password Disattivata';

$GLOBALS["lang"]['password_expires'] = 'Scadenze di password';

$GLOBALS["lang"]['Password Expires'] = 'Scadenze di password';

$GLOBALS["lang"]['password_last_changed'] = 'Password Ultima modifica';

$GLOBALS["lang"]['Password Last Changed'] = 'Password Ultima modifica';

$GLOBALS["lang"]['password_required'] = 'Password richiesta';

$GLOBALS["lang"]['Password Required'] = 'Password richiesta';

$GLOBALS["lang"]['patch_panel'] = 'Pannello di Patch';

$GLOBALS["lang"]['Patch Panel'] = 'Pannello di Patch';

$GLOBALS["lang"]['patch_panel_port'] = 'Porta del pannello di Patch';

$GLOBALS["lang"]['Patch Panel Port'] = 'Porta del pannello di Patch';

$GLOBALS["lang"]['path'] = 'Sentiero';

$GLOBALS["lang"]['Path'] = 'Sentiero';

$GLOBALS["lang"]['Performance'] = 'Prestazioni';

$GLOBALS["lang"]['Performed'] = 'Eseguita';

$GLOBALS["lang"]['Permission'] = 'Permesso';

$GLOBALS["lang"]['Permission Required'] = 'Permesso richiesto';

$GLOBALS["lang"]['permissions'] = 'Permissioni';

$GLOBALS["lang"]['Permissions'] = 'Permissioni';

$GLOBALS["lang"]['Persian'] = 'Persiano';

$GLOBALS["lang"]['Personal Area Network'] = 'Rete di Area Personale';

$GLOBALS["lang"]['Personal area network'] = 'Rete di aree personali';

$GLOBALS["lang"]['Peru'] = 'Perù';

$GLOBALS["lang"]['Philippines'] = 'Filippine';

$GLOBALS["lang"]['phone'] = 'Telefono';

$GLOBALS["lang"]['Phone'] = 'Telefono';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU fisiche';

$GLOBALS["lang"]['physical_count'] = 'Contatore fisico';

$GLOBALS["lang"]['Physical Count'] = 'Contatore fisico';

$GLOBALS["lang"]['physical_depth'] = 'Profondità fisica';

$GLOBALS["lang"]['Physical Depth'] = 'Profondità fisica';

$GLOBALS["lang"]['physical_height'] = 'Altezza fisica';

$GLOBALS["lang"]['Physical Height'] = 'Altezza fisica';

$GLOBALS["lang"]['physical_width'] = 'Larghezza fisica';

$GLOBALS["lang"]['Physical Width'] = 'Larghezza fisica';

$GLOBALS["lang"]['picture'] = 'Immagine';

$GLOBALS["lang"]['Picture'] = 'Immagine';

$GLOBALS["lang"]['pid'] = 'Pidocchio';

$GLOBALS["lang"]['Pid'] = 'Pidocchio';

$GLOBALS["lang"]['Pie Chart'] = 'Grafico della torta';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'I grafici di Pie devono restituire il nome o il mio nome, la descrizione o la mia descrizione e il conteggio.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Obiettivo Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Isole Pitcairn';

$GLOBALS["lang"]['placement'] = 'Luogo';

$GLOBALS["lang"]['Placement'] = 'Luogo';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Pianificare e condurre audit interni';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Si prega di avere un logo dell\'amministratore Open-AudIT e aggiornare il database.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Si prega di accedere e modificare questi ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Accedere al server Open-AudIT (sia Windows che Linux) ed eseguire <code>nslookup IP_ADDRESS_OF_TARGET</code> nel prompt dei comandi o shell. Deve essere in grado di risolvere l\'IP a un nome.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Si prega di notare che la casella di selezione supererà la casella di input di testo.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Si prega di vedere le FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Si prega di inviare tutti e tre i file al vostro contatto di supporto a Opmantek e descrivere il problema.';

$GLOBALS["lang"]['Please set using'] = 'Si prega di impostare utilizzando';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Si prega di visitare la homepage a';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polonia';

$GLOBALS["lang"]['Policies'] = 'Politiche';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Le politiche hanno eccezioni.';

$GLOBALS["lang"]['policy'] = 'Politica';

$GLOBALS["lang"]['Policy'] = 'Politica';

$GLOBALS["lang"]['policy_id'] = 'Informativa';

$GLOBALS["lang"]['Policy ID'] = 'Informativa';

$GLOBALS["lang"]['Policy Result'] = 'Risultato della politica';

$GLOBALS["lang"]['Policy Results'] = 'Risultati della politica';

$GLOBALS["lang"]['Polish'] = 'Polacco';

$GLOBALS["lang"]['Polite'] = 'Politica';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Popolare i valori indicati di seguito:';

$GLOBALS["lang"]['Populated by audit.'] = 'Popolato dall\'audit.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Popolato dalla scoperta e dall\'audit.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populate dinamicamente.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populate da DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Popolato dalla scoperta di SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Populate dai controlli dei dispositivi.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populate dal nome host.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populate da machine-id su Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populate dall\'IP per l\'itinerario predefinito o l\'IP rilevato nella scoperta.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populate dal comando hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populate con dati aggiuntivi dal sistema esterno, in una rappresentazione JSON.';

$GLOBALS["lang"]['port'] = 'Porto';

$GLOBALS["lang"]['Port'] = 'Porto';

$GLOBALS["lang"]['port_name'] = 'Nome della porta';

$GLOBALS["lang"]['Port Name'] = 'Nome della porta';

$GLOBALS["lang"]['port_number'] = 'Numero della porta';

$GLOBALS["lang"]['Port Number'] = 'Numero della porta';

$GLOBALS["lang"]['ports_in_order'] = 'Porti in ordine';

$GLOBALS["lang"]['Ports In Order'] = 'Porti in ordine';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop After';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop After';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portogallo, Repubblica portoghese';

$GLOBALS["lang"]['Portuguese'] = 'Portoghese';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portoghese (Brasile)';

$GLOBALS["lang"]['position'] = 'Posizione';

$GLOBALS["lang"]['Position'] = 'Posizione';

$GLOBALS["lang"]['Post-Certification'] = 'Post-Certificazione';

$GLOBALS["lang"]['postcode'] = 'Codice postale';

$GLOBALS["lang"]['Postcode'] = 'Codice postale';

$GLOBALS["lang"]['power_circuit'] = 'Circuito di potenza';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito di potenza';

$GLOBALS["lang"]['power_sockets'] = 'Prese elettriche';

$GLOBALS["lang"]['Power Sockets'] = 'Prese elettriche';

$GLOBALS["lang"]['Predictable'] = 'Prevedibile';

$GLOBALS["lang"]['Preferences'] = 'Preferenze';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Prepararsi alla rettifica ogni 3 anni';

$GLOBALS["lang"]['Prerequisites'] = 'Prerequisiti';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Prerequisiti e test';

$GLOBALS["lang"]['present'] = 'Presente';

$GLOBALS["lang"]['Present'] = 'Presente';

$GLOBALS["lang"]['previous_value'] = 'Valore precedente';

$GLOBALS["lang"]['Previous Value'] = 'Valore precedente';

$GLOBALS["lang"]['primary'] = 'Primario';

$GLOBALS["lang"]['Primary'] = 'Primario';

$GLOBALS["lang"]['Primary Key'] = 'Chiave primaria';

$GLOBALS["lang"]['print_queue'] = 'Stampa';

$GLOBALS["lang"]['Print Queue'] = 'Stampa';

$GLOBALS["lang"]['printer_color'] = 'Colore della stampante';

$GLOBALS["lang"]['Printer Color'] = 'Colore della stampante';

$GLOBALS["lang"]['printer_duplex'] = 'Stampante Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Stampante Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nome della porta della stampante';

$GLOBALS["lang"]['Printer Port Name'] = 'Nome della porta della stampante';

$GLOBALS["lang"]['printer_shared'] = 'Stampante condivisa';

$GLOBALS["lang"]['Printer Shared'] = 'Stampante condivisa';

$GLOBALS["lang"]['printer_shared_name'] = 'Stampante Nome condiviso';

$GLOBALS["lang"]['Printer Shared Name'] = 'Stampante Nome condiviso';

$GLOBALS["lang"]['priority'] = 'Priorità';

$GLOBALS["lang"]['Priority'] = 'Priorità';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphrase';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protocollo sulla privacy';

$GLOBALS["lang"]['privileges_required'] = 'Privilegi richiesti';

$GLOBALS["lang"]['Privileges Required'] = 'Privilegi richiesti';

$GLOBALS["lang"]['processor'] = 'Processore';

$GLOBALS["lang"]['Processor'] = 'Processore';

$GLOBALS["lang"]['processor_count'] = 'Contatore di processore';

$GLOBALS["lang"]['Processor Count'] = 'Contatore di processore';

$GLOBALS["lang"]['processor_slot_count'] = 'Conteggio di Fessura del Processore';

$GLOBALS["lang"]['Processor Slot Count'] = 'Conteggio di Fessura del Processore';

$GLOBALS["lang"]['processor_type'] = 'Tipo di processore';

$GLOBALS["lang"]['Processor Type'] = 'Tipo di processore';

$GLOBALS["lang"]['Processors'] = 'Processori';

$GLOBALS["lang"]['product_name'] = 'Nome del prodotto';

$GLOBALS["lang"]['Product Name'] = 'Nome del prodotto';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nome del prodotto Partita da CPE: ';

$GLOBALS["lang"]['products'] = 'Prodotti';

$GLOBALS["lang"]['Products'] = 'Prodotti';

$GLOBALS["lang"]['Professional'] = 'Professionista';

$GLOBALS["lang"]['profile'] = 'Profilo';

$GLOBALS["lang"]['Profile'] = 'Profilo';

$GLOBALS["lang"]['program'] = 'Programma';

$GLOBALS["lang"]['Program'] = 'Programma';

$GLOBALS["lang"]['Properties'] = 'Proprietà';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietario. Se si desidera modificare HighCharts è possibile richiedere un';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protegge la riservatezza, l\'integrità e la disponibilità delle informazioni';

$GLOBALS["lang"]['protocol'] = 'Protocollo';

$GLOBALS["lang"]['Protocol'] = 'Protocollo';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Fornire una descrizione e selezionare e scade la durata.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Fornire un nome - noi umilmente recommand Open-AudIT 🙂, ma si può nominare tutto ciò che ti piace.<br/>Dal modulo Open-AudIT, copiare il valore per il <i>Redirect URI</i> campo e incollarlo nel <i>URI redirect Sign-in</i> campo in OKTA.<br/>Gli URI redirect Sign-out sono facoltativi, ma se vuoi puoi usare l\'audit/index aperto. php/logout con i server Open-AudIT Indirizzo http, come per lo screenshot.<br/>Normalmente il tuo URL Open-AudIT sembrerà qualcosa come';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Se hai le credenziali corrette, Device Seed Discovery funziona come segue';

$GLOBALS["lang"]['provider'] = 'Fornitore';

$GLOBALS["lang"]['Provider'] = 'Fornitore';

$GLOBALS["lang"]['published'] = 'Pubblicato';

$GLOBALS["lang"]['Published'] = 'Pubblicato';

$GLOBALS["lang"]['published_date'] = 'Data di pubblicazione';

$GLOBALS["lang"]['Published Date'] = 'Data di pubblicazione';

$GLOBALS["lang"]['publisher'] = 'Editore';

$GLOBALS["lang"]['Publisher'] = 'Editore';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Rico';

$GLOBALS["lang"]['Purchase'] = 'Acquisto';

$GLOBALS["lang"]['purchase_amount'] = 'Importo di acquisto';

$GLOBALS["lang"]['Purchase Amount'] = 'Importo di acquisto';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centro di acquisto';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centro di acquisto';

$GLOBALS["lang"]['purchase_count'] = 'Conto di acquisto';

$GLOBALS["lang"]['Purchase Count'] = 'Conto di acquisto';

$GLOBALS["lang"]['purchase_date'] = 'Data di acquisto';

$GLOBALS["lang"]['Purchase Date'] = 'Data di acquisto';

$GLOBALS["lang"]['purchase_invoice'] = 'Fattura di acquisto';

$GLOBALS["lang"]['Purchase Invoice'] = 'Fattura di acquisto';

$GLOBALS["lang"]['purchase_order'] = 'Ordine di acquisto';

$GLOBALS["lang"]['Purchase Order'] = 'Ordine di acquisto';

$GLOBALS["lang"]['purchase_order_number'] = 'Numero d\'ordine di acquisto';

$GLOBALS["lang"]['Purchase Order Number'] = 'Numero d\'ordine di acquisto';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Numero di contratto di acquisto';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Numero di contratto di acquisto';

$GLOBALS["lang"]['purchase_vendor'] = 'Acquisto venditore';

$GLOBALS["lang"]['Purchase Vendor'] = 'Acquisto venditore';

$GLOBALS["lang"]['purpose'] = 'Oggetto';

$GLOBALS["lang"]['Purpose'] = 'Oggetto';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Quesiti';

$GLOBALS["lang"]['Queries'] = 'Quesiti';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Le query sono una parte importante di Open-AudIT. Sono ciò che consente di ottenere informazioni significative da tutti i dati del dispositivo che hai scoperto. Insieme a sintesi e gruppi, forniscono un potente meccanismo per estrarre informazioni cruciali.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Le domande per gruppi devono selezionare solo le';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Query questo attributo Active Directory prima di determinare l\'unità di lavoro degli utenti.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Query questo attributo Active Directory secondo per determinare l\'unità di lavoro degli utenti.';

$GLOBALS["lang"]['queue'] = 'Qui.';

$GLOBALS["lang"]['Queue'] = 'Qui.';

$GLOBALS["lang"]['Queue Limit'] = 'Limite di coda';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audit del dispositivo in coda';

$GLOBALS["lang"]['Queued IP Scans'] = 'Scansioni IP queued';

$GLOBALS["lang"]['Queued Items'] = 'Articoli riprodotti';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC per Active Directory e openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Livello RX';

$GLOBALS["lang"]['RX Power'] = 'Potenza RX';

$GLOBALS["lang"]['RX Profile'] = 'Profilo RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack Dispositivi';

$GLOBALS["lang"]['Rack Devices'] = 'Rack Dispositivi';

$GLOBALS["lang"]['rack_id'] = 'ID Rack';

$GLOBALS["lang"]['Rack ID'] = 'ID Rack';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management e Reporting';

$GLOBALS["lang"]['Racks'] = 'Rack';

$GLOBALS["lang"]['racks'] = 'Rack';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Leggi';

$GLOBALS["lang"]['Read'] = 'Leggi';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Leggi la nostra documentazione online su Open-AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Leggi il file di registro a';

$GLOBALS["lang"]['Received'] = 'Ricevuto';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Recentemente ci è stato chiesto la domanda - si considera Open-AudIT più sicuro di altri programmi simili? Come per la maggior parte delle cose, la risposta è <i>dipende</i>.<br/><br/>Open-Aud L\'IT può essere gestito in modo da essere estremamente sicuro. Ma come al solito con sicurezza basata su computer, più sicuro si desidera fare qualcosa, più scomodo diventa usare. La vecchia frase <i>il computer più sicuro è quello che è spento e nell\'armadio<i> viene in mente.<br/><br/>Qui di seguito tratteremo alcune opzioni che possono essere utilizzate con Open-AudIT che aumenterà la sicurezza. Come la maggior parte degli elementi all\'interno di Open-AudIT, queste sono opzioni e non obbligatorio. Fino a che punto prendi la sicurezza dipende da te.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Certificazione: Richiesto ogni tre anni';

$GLOBALS["lang"]['Red Query'] = 'Query rosso';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Riduce il rischio di violazioni dei dati e minacce informatiche';

$GLOBALS["lang"]['references'] = 'Referenze';

$GLOBALS["lang"]['References'] = 'Referenze';

$GLOBALS["lang"]['region'] = 'Regione';

$GLOBALS["lang"]['Region'] = 'Regione';

$GLOBALS["lang"]['registered_user'] = 'Utente registrato';

$GLOBALS["lang"]['Registered User'] = 'Utente registrato';

$GLOBALS["lang"]['Rejected'] = 'Rifiuti';

$GLOBALS["lang"]['rel'] = 'Riferimenti';

$GLOBALS["lang"]['Rel'] = 'Riferimenti';

$GLOBALS["lang"]['Release'] = 'Comunicato';

$GLOBALS["lang"]['remediation'] = 'Rimediazione';

$GLOBALS["lang"]['Remediation'] = 'Rimediazione';

$GLOBALS["lang"]['Remote'] = 'Telecomando';

$GLOBALS["lang"]['remote_address'] = 'Indirizzo remoto';

$GLOBALS["lang"]['Remote Address'] = 'Indirizzo remoto';

$GLOBALS["lang"]['remote_port'] = 'Porto remoto';

$GLOBALS["lang"]['Remote Port'] = 'Porto remoto';

$GLOBALS["lang"]['Remove'] = 'Rimuovi';

$GLOBALS["lang"]['Remove Exception'] = 'Rimuovi l\'eccezione';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Ripeti finché non hai un PC Windows completamente scoperto e controllato.';

$GLOBALS["lang"]['Report'] = 'Relazione';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapporto sui dispositivi, reti e altro ancora';

$GLOBALS["lang"]['reportable'] = 'Rapporti';

$GLOBALS["lang"]['Reportable'] = 'Rapporti';

$GLOBALS["lang"]['Reports'] = 'Relazioni';

$GLOBALS["lang"]['request'] = 'Richiesta';

$GLOBALS["lang"]['Request'] = 'Richiesta';

$GLOBALS["lang"]['Request Method'] = 'Metodo di richiesta';

$GLOBALS["lang"]['Request Vulnerability'] = 'Richiesta vulnerabilità';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Richiedi uno specifico CENTRO';

$GLOBALS["lang"]['requested'] = 'Richiesta';

$GLOBALS["lang"]['Requested'] = 'Richiesta';

$GLOBALS["lang"]['require_port'] = 'Richiesta Porto';

$GLOBALS["lang"]['Require Port'] = 'Richiesta Porto';

$GLOBALS["lang"]['Require an Open Port'] = 'Richiedi una porta aperta';

$GLOBALS["lang"]['Required'] = 'Obbligo';

$GLOBALS["lang"]['Required AWS user permissions'] = 'autorizzazioni utente AWS richieste';

$GLOBALS["lang"]['Required Fields'] = 'Campi obbligatori';

$GLOBALS["lang"]['Reset'] = 'Ripristino';

$GLOBALS["lang"]['Reset All Data'] = 'Reimposta tutti i dati';

$GLOBALS["lang"]['Reset to Default'] = 'Ripristino di default';

$GLOBALS["lang"]['resource'] = 'Risorse';

$GLOBALS["lang"]['Resource'] = 'Risorse';

$GLOBALS["lang"]['Resource Name'] = 'Nome della risorsa';

$GLOBALS["lang"]['Resources'] = 'Risorse';

$GLOBALS["lang"]['response'] = 'Risposta';

$GLOBALS["lang"]['Response'] = 'Risposta';

$GLOBALS["lang"]['responsibility'] = 'Responsabilità';

$GLOBALS["lang"]['Responsibility'] = 'Responsabilità';

$GLOBALS["lang"]['Restore my Licenses'] = 'Ripristinare le mie licenze';

$GLOBALS["lang"]['Restrict to Private'] = 'Limitare a Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Limitare a Subnet';

$GLOBALS["lang"]['result'] = 'Risultato';

$GLOBALS["lang"]['Result'] = 'Risultato';

$GLOBALS["lang"]['Resulting Function'] = 'Funzione di isolamento';

$GLOBALS["lang"]['Results'] = 'Risultati';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Recuperare un elenco di dispositivi';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Recuperare un elenco di dispositivi con OS Nome come Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Recuperare tutti i dettagli sul dispositivo con id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Recuperare tutti i dispositivi che eseguono Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Recuperare tutti i dispositivi con le colonne standard';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Recuperare i primi 10 dispositivi che eseguono Windows ordinati da hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Recuperare le proprietà id, ip, hostname, dominio, digitare da tutti i dispositivi';

$GLOBALS["lang"]['retrieved'] = 'Recuperato';

$GLOBALS["lang"]['Retrieved'] = 'Recuperato';

$GLOBALS["lang"]['retrieved_ident'] = 'Ritirato Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ritirato Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nome recuperato';

$GLOBALS["lang"]['Retrieved Name'] = 'Nome recuperato';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Recuperato dal dispositivo - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Recuperare una Lista delle Credenziali';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Recupero o Creazione';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Restituisce una raccolta di dispositivi con il set predefinito di colonne (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Restituisce un elenco di tutti i moduli installati su Router';

$GLOBALS["lang"]['Return an individual device details'] = 'Restituisce un singolo dispositivo\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Restituisce un elenco di {collezione}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Restituisce un dettaglio {collezione}.';

$GLOBALS["lang"]['Reunion'] = 'Riunione';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Verificare le pratiche attuali contro i requisiti ISO 27001';

$GLOBALS["lang"]['revision'] = 'Revisione';

$GLOBALS["lang"]['Revision'] = 'Revisione';

$GLOBALS["lang"]['risk_assesment_result'] = 'Rischio Rischio Risultato';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Rischio Rischio Risultato';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Valutazione del rischio e trattamento';

$GLOBALS["lang"]['Risk Management'] = 'Gestione del rischio';

$GLOBALS["lang"]['Role'] = 'Role';

$GLOBALS["lang"]['roles'] = 'Roles';

$GLOBALS["lang"]['Roles'] = 'Roles';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles può essere creato e modificato solo se si dispone di una licenza Open-AudIT Enterprise. Per la maggior parte degli utenti, il set predefinito di Roles dovrebbe essere tutto ciò che è necessario.';

$GLOBALS["lang"]['Romania'] = 'Romania';

$GLOBALS["lang"]['Romanian'] = 'Rumeno';

$GLOBALS["lang"]['Room'] = 'Camera';

$GLOBALS["lang"]['route'] = 'Itinerario';

$GLOBALS["lang"]['Route'] = 'Itinerario';

$GLOBALS["lang"]['Row'] = 'Voce';

$GLOBALS["lang"]['Row Count'] = 'Conte';

$GLOBALS["lang"]['row_position'] = 'Posizione della riga';

$GLOBALS["lang"]['Row Position'] = 'Posizione della riga';

$GLOBALS["lang"]['Rows'] = 'Righe';

$GLOBALS["lang"]['ru_height'] = 'Ru Altezza';

$GLOBALS["lang"]['Ru Height'] = 'Ru Altezza';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Gruppo';

$GLOBALS["lang"]['Rule Group'] = 'Gruppo';

$GLOBALS["lang"]['rules'] = 'Regole';

$GLOBALS["lang"]['Rules'] = 'Regole';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Le regole vengono create ed eseguite contro un dispositivo quando il dispositivo viene scoperto o viene elaborato un risultato di audit. Le regole possono essere utilizzate per impostare un attributo del dispositivo in base ad altri attributi.<br/><br/>NOTA - Al momento non possiamo eliminare una regola input o output che contiene una /. Questo perché il framework sta analizzando il / come parte dell\'URL e restituisce un 404, anche prima che il nostro codice esegue. Il work-around per questo è quello di eliminare la regola stessa, quindi ricreare gli input e le uscite come richiesto. Fortunatamente gli input e gli output che contengono un / sono rari (indeed, nessuno esiste per impostazione predefinita).';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Eseguire Discovery sui dispositivi';

$GLOBALS["lang"]['Run Your Discovery'] = 'Esegui la tua scoperta';

$GLOBALS["lang"]['Run a Command'] = 'Eseguire un comando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Eseguire una scoperta e scoprire <b>Cosa c\'è sulla tua rete?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Eseguire lo script digitando <code>cscript test_windows_client.vbs</code> nella console.';

$GLOBALS["lang"]['Run this Command'] = 'Esegui questo comando';

$GLOBALS["lang"]['runas'] = 'Scappa.';

$GLOBALS["lang"]['Runas'] = 'Scappa.';

$GLOBALS["lang"]['Running'] = 'Correre';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Eseguire Open-AudIT Apache Service Sotto Windows';

$GLOBALS["lang"]['Russian'] = 'Russo';

$GLOBALS["lang"]['Russian Federation'] = 'Federazione russa';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Livello di Rx';

$GLOBALS["lang"]['Rx Level'] = 'Livello di Rx';

$GLOBALS["lang"]['rx_power'] = 'Potenza Rx';

$GLOBALS["lang"]['Rx Power'] = 'Potenza Rx';

$GLOBALS["lang"]['rx_profile'] = 'Profilo Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Profilo Rx';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN AutoDiscover';

$GLOBALS["lang"]['SELECT'] = 'SELEZIONE';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versione SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Dettagli';

$GLOBALS["lang"]['SNMP OID'] = 'OBIETTIVO SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'Versione SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avanzato)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Dichiarazione di creazione SQL';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL non contenente questa condizione si tradurrà nel widget di non essere eseguito.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Chiave';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Santa Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Sant\'Elena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts e Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Santa Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre e Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent e Grenadine';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San Giovanni';

$GLOBALS["lang"]['San'] = 'San Giovanni';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome e Principe';

$GLOBALS["lang"]['Saturday'] = 'Sabato';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arabia Saudita';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Salvare ed eseguire il file. Assicurarsi di eseguire il file come amministratore per installarlo (clic destro, eseguire come amministratore).';

$GLOBALS["lang"]['Save as Default'] = 'Salvare come predefinito';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Salvare il file scaricato.';

$GLOBALS["lang"]['scaling'] = 'Scalatura';

$GLOBALS["lang"]['Scaling'] = 'Scalatura';

$GLOBALS["lang"]['scan_options'] = 'Opzioni di scansione';

$GLOBALS["lang"]['Scan Options'] = 'Opzioni di scansione';

$GLOBALS["lang"]['Scan Options ID'] = 'Opzioni di scansione ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scansione per questa porta (s) e se rilevato aperto, utilizzare questa porta per la comunicazione SSH. Questo viene aggiunto all\'elenco delle porte TCP personalizzate sopra (se non già incluse), quindi non c\'è bisogno di includerlo anche in quella lista. Comma seduto, niente spazi.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scansiona il numero superiore Nmap delle porte TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scansiona il numero superiore Nmap delle porte UDP.';

$GLOBALS["lang"]['schedule'] = 'Orari';

$GLOBALS["lang"]['Schedule'] = 'Orari';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'La scoperta e la segnalazione dei dispositivi programmati rendono Open-AudIT Professional una soluzione efficiente per i professionisti IT impegnati che cercano di ridurre le overhead e aumentare le informazioni.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - scoperta, reporting e altro';

$GLOBALS["lang"]['scope'] = 'Ambito';

$GLOBALS["lang"]['Scope'] = 'Ambito';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Scope è conosciuto come Autorizzazione Scope, che rappresenta se una vulnerabilità colpisce le risorse oltre l\'autorità di sicurezza originale della componente vulnerabile.<br/><br/>Gli unici due valori validi per questo attributo sono';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scresi';

$GLOBALS["lang"]['Scsi'] = 'Scresi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Unità logica Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Unità logica Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Porto di Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Porto di Scsi';

$GLOBALS["lang"]['Search'] = 'Ricerca';

$GLOBALS["lang"]['Search For a Device'] = 'Ricerca di un dispositivo';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Ricerca utilizzando DataTables';

$GLOBALS["lang"]['Second'] = 'Secondo';

$GLOBALS["lang"]['secondary'] = 'Secondario';

$GLOBALS["lang"]['Secondary'] = 'Secondario';

$GLOBALS["lang"]['Secondary Text'] = 'Testo secondario';

$GLOBALS["lang"]['Secret Key'] = 'Chiave segreta';

$GLOBALS["lang"]['section'] = 'Sezione';

$GLOBALS["lang"]['Section'] = 'Sezione';

$GLOBALS["lang"]['secure'] = 'Sicuro';

$GLOBALS["lang"]['Secure'] = 'Sicuro';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protocollo di automazione dei contenuti di sicurezza';

$GLOBALS["lang"]['Security Level'] = 'Livello di sicurezza';

$GLOBALS["lang"]['Security Name'] = 'Nome di sicurezza';

$GLOBALS["lang"]['Security Status'] = 'Stato di sicurezza';

$GLOBALS["lang"]['security_zone'] = 'Zona di sicurezza';

$GLOBALS["lang"]['Security Zone'] = 'Zona di sicurezza';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Vedi sopra. NOTA - Questo potrebbe anche essere causato da un certificato autofirmato sul server LDAP. Stiamo lavorando per consentire questo in un futuro rilascio.';

$GLOBALS["lang"]['See our page on enabling'] = 'Vedere la nostra pagina su abilitare';

$GLOBALS["lang"]['Seed Discoveries'] = 'Seed Discovers';

$GLOBALS["lang"]['seed_ip'] = 'Protezione IP';

$GLOBALS["lang"]['Seed IP'] = 'Protezione IP';

$GLOBALS["lang"]['seed_ping'] = 'Seed Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Seed Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Limite di seme al privato';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Limite di seme al privato';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Limitare il seme a Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Limitare il seme a Subnet';

$GLOBALS["lang"]['Select'] = 'Seleziona';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Seleziona Admin -> Compiti - > Creare Compito dal menu.';

$GLOBALS["lang"]['Select All'] = 'Seleziona tutto';

$GLOBALS["lang"]['Select All Devices'] = 'Seleziona tutti i dispositivi';

$GLOBALS["lang"]['select_external_attribute'] = 'Selezionare l\'attributo esterno';

$GLOBALS["lang"]['Select External Attribute'] = 'Selezionare l\'attributo esterno';

$GLOBALS["lang"]['select_external_count'] = 'Selezionare Conte esterno';

$GLOBALS["lang"]['Select External Count'] = 'Selezionare Conte esterno';

$GLOBALS["lang"]['select_external_type'] = 'Selezionare Esterno Tipo';

$GLOBALS["lang"]['Select External Type'] = 'Selezionare Esterno Tipo';

$GLOBALS["lang"]['select_external_value'] = 'Selezionare Esterno Valore';

$GLOBALS["lang"]['Select External Value'] = 'Selezionare Esterno Valore';

$GLOBALS["lang"]['select_internal_attribute'] = 'Selezionare l\'attributo interno';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Selezionare l\'attributo interno';

$GLOBALS["lang"]['select_internal_count'] = 'Seleziona il conteggio interno';

$GLOBALS["lang"]['Select Internal Count'] = 'Seleziona il conteggio interno';

$GLOBALS["lang"]['select_internal_type'] = 'Seleziona Interno Tipo';

$GLOBALS["lang"]['Select Internal Type'] = 'Seleziona Interno Tipo';

$GLOBALS["lang"]['select_internal_value'] = 'Seleziona Interno Valore';

$GLOBALS["lang"]['Select Internal Value'] = 'Seleziona Interno Valore';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Seleziona menu -> Gestione - > Linee di base -> Lista Linee di base.';

$GLOBALS["lang"]['Select a Table'] = 'Seleziona una tabella';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Selezionare un corpo di certificazione accreditato';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Selezionare e applicare controlli appropriati (allegato A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Selezionare la <i>COMUNICAZIONE Sicurezza</i> scheda<br/><br/>Clicca sulle autorizzazioni di accesso Modifica predefinito';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Selezionare la <i>Firma</i> scheda e copia il valore per <i>Questionario</i> (solo l\'URL stesso). Incolla questo nell\'Open-AudIT <i>Questionario</i> campo.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Selezionare la <i>Questo account</i> casella di controllo e fornire il nome dell\'account e la password.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Selezionare il menu Start e digitare <i>servizi Fare clic sull\'icona Servizi.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Selezionare il tipo di Auth Menthod per creare e inserire i dettagli pertinenti.';

$GLOBALS["lang"]['Self Delete'] = 'Cancellazione di auto';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Sensibilità';

$GLOBALS["lang"]['Sensitivity'] = 'Sensibilità';

$GLOBALS["lang"]['September'] = 'Settembre';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serie';

$GLOBALS["lang"]['Serial'] = 'Serie';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Sim seriale';

$GLOBALS["lang"]['Serial Sim'] = 'Sim seriale';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'ID server';

$GLOBALS["lang"]['Server ID'] = 'ID server';

$GLOBALS["lang"]['Server Is'] = 'I server';

$GLOBALS["lang"]['server_item'] = 'Articolo del server';

$GLOBALS["lang"]['Server Item'] = 'Articolo del server';

$GLOBALS["lang"]['Server Status'] = 'Stato del server';

$GLOBALS["lang"]['Servers'] = 'Server';

$GLOBALS["lang"]['Servers Only'] = 'Solo server';

$GLOBALS["lang"]['service'] = 'Servizio';

$GLOBALS["lang"]['Service'] = 'Servizio';

$GLOBALS["lang"]['service_identifier'] = 'Identificazione del servizio';

$GLOBALS["lang"]['Service Identifier'] = 'Identificazione del servizio';

$GLOBALS["lang"]['service_level_a'] = 'Livello di servizio A';

$GLOBALS["lang"]['Service Level A'] = 'Livello di servizio A';

$GLOBALS["lang"]['service_level_b'] = 'Livello di servizio B';

$GLOBALS["lang"]['Service Level B'] = 'Livello di servizio B';

$GLOBALS["lang"]['service_network'] = 'Rete di servizi';

$GLOBALS["lang"]['Service Network'] = 'Rete di servizi';

$GLOBALS["lang"]['service_number'] = 'Numero di servizio';

$GLOBALS["lang"]['Service Number'] = 'Numero di servizio';

$GLOBALS["lang"]['service_pack'] = 'Pacchetto di servizio';

$GLOBALS["lang"]['Service Pack'] = 'Pacchetto di servizio';

$GLOBALS["lang"]['service_plan'] = 'Piano di servizio';

$GLOBALS["lang"]['Service Plan'] = 'Piano di servizio';

$GLOBALS["lang"]['service_provider'] = 'Fornitore di servizi';

$GLOBALS["lang"]['Service Provider'] = 'Fornitore di servizi';

$GLOBALS["lang"]['service_tag'] = 'Tag di servizio';

$GLOBALS["lang"]['Service Tag'] = 'Tag di servizio';

$GLOBALS["lang"]['service_type'] = 'Tipo di servizio';

$GLOBALS["lang"]['Service Type'] = 'Tipo di servizio';

$GLOBALS["lang"]['Service Under Windows'] = 'Servizio in Windows';

$GLOBALS["lang"]['service_version'] = 'Versione di servizio';

$GLOBALS["lang"]['Service Version'] = 'Versione di servizio';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set da';

$GLOBALS["lang"]['Set By'] = 'Set da';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Impostato dalla funzione Discovery - non impostare normalmente questo manualmente.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Impostato dagli script audit_domain o Discover_domain. Non impostare.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Impostare il testo esterno alla versione capitalizzata dei dati interni.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Impostare il testo esterno in minuscolo.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Impostare il testo esterno in maiuscolo.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Impostare la dimensione (normale o compatta) delle tabelle sugli schermi List.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Impostare questo se si desidera inserire sistemi da AD che non possono essere contattabili, ma sono stati visti da AD da quella data.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Impostare Discovery su una subnet è quasi identico a eseguire una Discovery regolare tramite l\'interfaccia web. Gli unici elementi aggiuntivi sono l\'ora e il giorno di programma e un nome per il Task pianificato stesso. È possibile approfittare di questo per pianificare più scoperte utilizzando diversi set di credenziali.<br/><br/>Come per la Subnet Discovery, la Active Directory Discovery è anche semplicemente gli stessi campi di una normale Active Directory Discovery con l\'aggiunta di un giorno, un\'ora o un nome.<br/><br/>Se il server Open-AudIT ha Collectors che vi segnala, viene fornito un ulteriore calo. È possibile selezionare questo per specificare quale Collector l\'attività dovrebbe essere eseguita. Solo le attività Discovery sono supportate per Collectors. Specificare gli stessi elementi di una Discovery regolare, ma fornire il collettore alternativo per eseguire questo compito.';

$GLOBALS["lang"]['severity'] = 'Severo';

$GLOBALS["lang"]['Severity'] = 'Severo';

$GLOBALS["lang"]['severity_text'] = 'Testo della gravità';

$GLOBALS["lang"]['Severity Text'] = 'Testo della gravità';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'La gravità è calcolata dal <code>base_score</code> e può essere uno di: Nessuno, basso, medio, alto, critico.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Condividi';

$GLOBALS["lang"]['Share'] = 'Condividi';

$GLOBALS["lang"]['Share Name'] = 'Nome della condivisione';

$GLOBALS["lang"]['shared'] = 'Condividi';

$GLOBALS["lang"]['Shared'] = 'Condividi';

$GLOBALS["lang"]['shared_name'] = 'Nome condiviso';

$GLOBALS["lang"]['Shared Name'] = 'Nome condiviso';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Data di spedizione';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped sono un insieme di elementi predefiniti. Questi possono essere trovati andando al menu';

$GLOBALS["lang"]['short'] = 'Breve';

$GLOBALS["lang"]['Short'] = 'Breve';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Dovrei rimuovere tutti i dati non correnti da questo dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Se questo file (o modello) viene utilizzato per escludere i file da essere segnalato. Normalmente, per i file di audit, questo è impostato su <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Se questo fornitore viene utilizzato quando si recuperano vulnerabilità da FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Se aggiungiamo dispositivi dal servizio remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Dovremmo applicare questa licenza all\'org selezionato e ai bambini Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Dovremmo controllare un SAN se il software di gestione viene rilevato.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Dovremmo controllare i punti di montaggio.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Se controlliamo le porte netstat (sì, no, solo i server).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Dovremmo controllare il software installato.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Dovremmo considerare una porta filtrata per essere una porta aperta - e quindi contrassegnare questo IP come un dispositivo collegato?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Dovremmo considerare una porta aperta|filtered come una porta aperta - e quindi contrassegnare questo IP come un dispositivo collegato?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Dovremmo convertire il nome host in minuscolo.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Dovremmo creare un file basato sul risultato dell\'audit.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Dovremmo esporre questo gruppo nell\'interfaccia web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Dovremmo esporre questa query nell\'elenco dei rapporti sotto il menu Report nell\'interfaccia web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Dovremmo esporre questa query nell\'elenco dei rapporti sotto il menu Report nell\'interfaccia web.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Dovremmo nascondere la finestra dello script dell\'audit durante l\'esecuzione.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Dovremmo ignorare un certificato SSL non valido o auto firmato e presentare il risultato comunque.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Dovremmo installare Open-Scap sulla macchina di destinazione.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Dovremmo abbinare un indirizzo mac basato su un dispositivo anche se il suo probabilmente duplicato noto da VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Dovremmo abbinare un dispositivo basato sul suo fqdn DNS.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Dovremmo abbinare un dispositivo basato sul suo nome host DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Dovremmo abbinare un dispositivo basato sul suo UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Dovremmo abbinare un dispositivo basato sul suo dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Dovremmo abbinare un dispositivo basato sul suo fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Dovremmo abbinare un dispositivo basato sul suo nome host e UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Dovremmo abbinare un dispositivo basato sul suo hostname e dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Dovremmo abbinare un dispositivo basato sul suo nome host e sul serial.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Dovremmo abbinare un dispositivo basato sul suo ip se abbiamo un dispositivo esistente senza dati.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Dovremmo abbinare un dispositivo basato sul suo ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Dovremmo abbinare un dispositivo basato sul suo indirizzo mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Dovremmo abbinare un dispositivo in base alla sua serie e al suo tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Dovremmo abbinare un dispositivo in base al suo numero di serie.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Dovremmo abbinare un dispositivo basato solo sul suo SNMP sysName e seriale.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Dovremmo abbinare un dispositivo basato solo sul suo SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Dovremmo abbinare un dispositivo basato solo sul suo nome host.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Dovremmo ping l\'IP prima di tentare di scansionarlo? Se non risponde al ping, saltare questo dispositivo.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Dovremmo popolare il sistema esterno dai nostri dispositivi locali.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Dovremmo recuperare tutti i nomi DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Dovremmo eseguire un audit e inviarlo (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Dovremmo testare per SNMP utilizzando la porta UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Dovremmo testare per SSH usando la porta TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Dovremmo testare per WMI utilizzando la porta TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Dovremmo disinstallare l\'agente (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Dovremmo usare il proxy di livello del sistema o dell\'utente per inviare il risultato dell\'audit.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Se si utilizza la classe win32_product WMI (non consigliata da Microsoft) quando si recupera il software installato.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Dovremmo usare questo metodo per autenticare le credenziali dell\'utente. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Dovremmo usare questo metodo per popolare un ruolo degli utenti. Il campo <code>use_auth</code> deve essere impostato su <code>y</code> per usare questo. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Dovremmo usare questo valore per abbinare dispositivi esterni e interni. La nostra integrazione predefinita utilizza IP e UUID qui. Se uno di questi match tra dispositivo esterno e interno, li consideriamo lo stesso dispositivo.';

$GLOBALS["lang"]['Show All'] = 'Mostra tutto';

$GLOBALS["lang"]['sid'] = 'Si\'.';

$GLOBALS["lang"]['Sid'] = 'Si\'.';

$GLOBALS["lang"]['sidebar'] = 'Barra laterale';

$GLOBALS["lang"]['Sidebar'] = 'Barra laterale';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore';

$GLOBALS["lang"]['Site A'] = 'Sito web A';

$GLOBALS["lang"]['Site B'] = 'Sito web B';

$GLOBALS["lang"]['site_hours_a'] = 'Orari del sito A';

$GLOBALS["lang"]['Site Hours A'] = 'Orari del sito A';

$GLOBALS["lang"]['site_hours_b'] = 'Orari del sito B';

$GLOBALS["lang"]['Site Hours B'] = 'Orari del sito B';

$GLOBALS["lang"]['size'] = 'Dimensione';

$GLOBALS["lang"]['Size'] = 'Dimensione';

$GLOBALS["lang"]['slaves'] = 'Schiavi';

$GLOBALS["lang"]['Slaves'] = 'Schiavi';

$GLOBALS["lang"]['Slovak'] = 'Slovacchia';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovacchia (Repubblica slovacca)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

$GLOBALS["lang"]['Slovenian'] = 'Sloveno';

$GLOBALS["lang"]['Smart Status'] = 'Stato intelligente';

$GLOBALS["lang"]['smversion'] = 'Sm.';

$GLOBALS["lang"]['Smversion'] = 'Sm.';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nome dell\'impresa';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nome dell\'impresa';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Versione di Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Versione di Snmp';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Quindi uno script non funziona su un dispositivo ricalcitrante. Grrr. Gli script per Windows, Linux e MacOS tutti accettano l\'argomento di debug. Questo può essere impostato nello script stesso, o fornito sulla riga di comando. Eseguire lo script utilizzando l\'opzione impostata a 5 e si dovrebbe vedere in quale sezione dello script si verifica il fallimento. Per esempio';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Quindi, a parte una parola regolare, quali altre opzioni ci sono - Sono contento che hai chiesto! Come per le API standard Open-AudIT, abbiamo diversi operatori per il filtraggio. Operatori che possono precedere il valore sono';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Quindi hai un problema che fornisce credenziali Open-AudIT per scoprire i tuoi dispositivi. Ho una risposta, non farlo! Certo, voglio dire, la scoperta è la cosa migliore dal pane affettato. Non c\'è bisogno di sapere in anticipo <i>Cosa c\'è sulla tua rete</i>. Ma come si possono estrarre i dati dai dispositivi senza fornire credenziali?<br/><br/>Nel caso dei computer, un\'opzione facile è quella di copiare lo script di audit appropriato alle macchine di destinazione e impostarlo per eseguire su un programma. Maggiori dettagli sul wiki. Le macchine invieranno i loro dati a Open-AudIT su quel programma, quasi come se stessi eseguendo la scoperta. Il dispositivo esegue semplicemente lo script di audit in un programma (di nuovo, è possibile leggere lo script di audit) come l\'utente a cui lo si dice e invia l\'output al server. Non ci sono credenziali.<br/><br/>E ora abbiamo agenti per Windows. I vantaggi di un agente installato effettivo sono';

$GLOBALS["lang"]['socket'] = 'Presa';

$GLOBALS["lang"]['Socket'] = 'Presa';

$GLOBALS["lang"]['software'] = 'Software software';

$GLOBALS["lang"]['Software'] = 'Software software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Trovato Ultimi 7 Giorni';

$GLOBALS["lang"]['Software Found Today'] = 'Software trovato oggi';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software trovato ieri';

$GLOBALS["lang"]['software_key'] = 'Chiave del software';

$GLOBALS["lang"]['Software Key'] = 'Chiave del software';

$GLOBALS["lang"]['Software License Reporting'] = 'Reporting della licenza del software';

$GLOBALS["lang"]['software_name'] = 'Nome del software';

$GLOBALS["lang"]['Software Name'] = 'Nome del software';

$GLOBALS["lang"]['Software Policies'] = 'Politiche software';

$GLOBALS["lang"]['software_revision'] = 'Revisione del software';

$GLOBALS["lang"]['Software Revision'] = 'Revisione del software';

$GLOBALS["lang"]['software_version'] = 'Versione del software';

$GLOBALS["lang"]['Software Version'] = 'Versione del software';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Isole Salomone';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Repubblica somala';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Alcune collezioni possono essere eseguite - query, ecc - vedere di seguito.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Alcuni esempi sono in fondo a questa pagina. Tutti gli endpoint hanno anche un elenco minimo dei campi richiesti. Sono qui sotto.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Alcuni dei nostri modelli supportano la nuova mossa a dataTables, utilizzando l\'elaborazione lato server. Questo massivley migliora i tempi di carico.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Qualche altro errore si è verificato quando si tenta di legare al server LDAP. È contattabile (cioè il <i>Collegamento</i> sopra ha lavorato), ma per qualche altra ragione, non si è verificato un legame. Controlla i registri sul server LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Qualcosa non va. Open-AudIT non può leggere <i>o</i> tavolo.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Qualcosa non va. Open-AudIT non può leggere <i>ruoli</i> tavolo.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'A volte la scoperta senza agenti non si adatta al tuo caso d\'uso. Forse i tuoi PC hanno dei firewall stretti. Forse non sono in rete quando le tue scoperte sono programmate. Forse sono usati da lavoratori remoti. Qualunque sia il caso, qui puo\' aiutare un agente. Installarlo sulla macchina di destinazione e sarà <i>check-in</i> con il server Open-AudIT su un programma e accettare le attività. L\'attività più comune che il server richiede è che l\'agente controlli se stesso e invii il risultato.';

$GLOBALS["lang"]['Sort'] = 'Ordina';

$GLOBALS["lang"]['sound'] = 'Suono';

$GLOBALS["lang"]['Sound'] = 'Suono';

$GLOBALS["lang"]['source'] = 'Fonte';

$GLOBALS["lang"]['Source'] = 'Fonte';

$GLOBALS["lang"]['South Africa'] = 'Sudafrica';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Georgia del Sud e Isole Sandwich del Sud';

$GLOBALS["lang"]['Spain'] = 'Spagna';

$GLOBALS["lang"]['Spanish'] = 'Spagnolo';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifico per Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifico per OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Specifica un elenco separato da virgola di obiettivi (senza spazi) da escludere dalla scansione. L\'elenco che si passa in utilizza la sintassi Nmap normale, in modo da poter includere nomi host, netblock CIDR, intervalli di ottate, ecc.';

$GLOBALS["lang"]['speed'] = 'Velocità';

$GLOBALS["lang"]['Speed'] = 'Velocità';

$GLOBALS["lang"]['speed_down_a'] = 'Velocità A';

$GLOBALS["lang"]['Speed Down A'] = 'Velocità A';

$GLOBALS["lang"]['speed_down_b'] = 'Velocità B';

$GLOBALS["lang"]['Speed Down B'] = 'Velocità B';

$GLOBALS["lang"]['speed_up_a'] = 'Velocità su una';

$GLOBALS["lang"]['Speed Up A'] = 'Velocità su una';

$GLOBALS["lang"]['speed_up_b'] = 'Velocità B';

$GLOBALS["lang"]['Speed Up B'] = 'Velocità B';

$GLOBALS["lang"]['sql'] = 'Sq.';

$GLOBALS["lang"]['Sql'] = 'Sq.';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Porte Ssh';

$GLOBALS["lang"]['Ssh Ports'] = 'Porte Ssh';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Fase 1: revisione della documentazione';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Fase 2: revisione dell\'attuazione e dell\'efficacia';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'ID standard';

$GLOBALS["lang"]['Standard ID'] = 'ID standard';

$GLOBALS["lang"]['standards'] = 'Standard';

$GLOBALS["lang"]['Standards'] = 'Standard';

$GLOBALS["lang"]['standards_policies'] = 'Politiche standard';

$GLOBALS["lang"]['Standards Policies'] = 'Politiche standard';

$GLOBALS["lang"]['standards_results'] = 'Risultati degli standard';

$GLOBALS["lang"]['Standards Results'] = 'Risultati degli standard';

$GLOBALS["lang"]['start_date'] = 'Data di inizio';

$GLOBALS["lang"]['Start Date'] = 'Data di inizio';

$GLOBALS["lang"]['start_mode'] = 'Modalità di avvio';

$GLOBALS["lang"]['Start Mode'] = 'Modalità di avvio';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Inizia un browser web e vai a';

$GLOBALS["lang"]['started_date'] = 'Data di inizio';

$GLOBALS["lang"]['Started Date'] = 'Data di inizio';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'A partire da giugno 2018 Google ha implementato un modello di prezzo pay-as-you-go per le API di Google Maps Platform. In precedenza, la maggior parte degli utenti con uso moderato potrebbe utilizzare Google Maps, che sono incorporati in opCharts e Open-AudIT Professional/Enterprise, gratuitamente. Googles nuova politica è delineato qui,';

$GLOBALS["lang"]['Starts With'] = 'Inizia con';

$GLOBALS["lang"]['state'] = 'Stato';

$GLOBALS["lang"]['State'] = 'Stato';

$GLOBALS["lang"]['Stats'] = 'Statistiche';

$GLOBALS["lang"]['status'] = 'Stato';

$GLOBALS["lang"]['Status'] = 'Stato';

$GLOBALS["lang"]['Storage'] = 'Stoccaggio';

$GLOBALS["lang"]['storage_count'] = 'Contenitore di stoccaggio';

$GLOBALS["lang"]['Storage Count'] = 'Contenitore di stoccaggio';

$GLOBALS["lang"]['Storage area network'] = 'Rete di area di stoccaggio';

$GLOBALS["lang"]['Storage-Area Network'] = 'Rete di stoccaggio-Area';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Tipo';

$GLOBALS["lang"]['Sub Type'] = 'Tipo';

$GLOBALS["lang"]['subject_key_ident'] = 'Oggetto chiave';

$GLOBALS["lang"]['Subject Key Ident'] = 'Oggetto chiave';

$GLOBALS["lang"]['Submit'] = 'Inviare';

$GLOBALS["lang"]['Submit Online'] = 'Inviare Online';

$GLOBALS["lang"]['Submitted From'] = 'Inviato da';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Scoperte Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'ID abbonamento';

$GLOBALS["lang"]['suburb'] = 'Suburbio';

$GLOBALS["lang"]['Suburb'] = 'Suburbio';

$GLOBALS["lang"]['Success'] = 'Successo';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Password di Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Password Sudo (opzionale)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Sintesi';

$GLOBALS["lang"]['Summaries'] = 'Sintesi';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'I riassunti sono una singola query contro il database con una <i>gruppo per</i> comando. Utilizzando questo metodo semplice possiamo facilmente creare un sommario per praticamente qualsiasi attributo.<br/><br/>Non abbiamo più bisogno di una relazione separata per ciascuno <i>tipo</i> di un dispositivo. Ora abbiamo semplicemente un riassunto che i gruppi <i>dispositivi. tipo</i> e mostra il risultato. È quindi possibile fare clic su un dato tipo dall\'elenco e vedere i dispositivi corrispondenti. In questo caso, un Riepilogo sostituisce (potenzialmente) 78 rapporti (ci sono 78 tipi di dispositivo).<br/><br/>Un riassunto è diverso da una query in quanto un sommario è progettato per raggruppare gli elementi da un dato attributo quindi fornire un <i>cliccare su</i> link ai dispositivi effettivi. Una query è semplicemente un elenco di elementi senza ulteriori link. Come sopra - questo di un riassunto come combinato <i>rapporto + sottorelazione</i>, mentre una query è semplicemente una relazione unica.<br/><br/>I riassunti hanno un modello di raccolta diverso per le altre risorse all\'interno di Open-AudIT. Questo modello mostra il Riepilogo come ci si aspetterebbe e mostra anche pulsanti con conteggi di altre risorse. Questa pagina è progettata per essere la HomePage of Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'I riassunti sono progettati per raggruppare gli elementi di una particolare colonna di corrispondenza e quindi per fornire un collegamento ai singoli dispositivi. Nelle versioni precedenti di Open-AudIT, questo sarebbe stato due elementi diversi - un rapporto e sottoreport. Ora abbiamo in bundle questi in quello che chiamiamo Sommario.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'I riassunti forniscono funzionalità di segnalazione di perforazione. Semplice, intuitivo, potente.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'I riassunti prendono gli stessi argomenti di Queries.';

$GLOBALS["lang"]['Summary'] = 'Sintesi';

$GLOBALS["lang"]['Sunday'] = 'Domenica';

$GLOBALS["lang"]['supplier'] = 'Fornitore';

$GLOBALS["lang"]['Supplier'] = 'Fornitore';

$GLOBALS["lang"]['Support'] = 'Supporto';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'I tipi supportati sono <code>subnet</code>♪ <code>seed</code> e <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Supporta la conformità ai requisiti legali e normativi';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Audit di sorveglianza: Audit annuali per mantenere la certificazione';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Isole Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Svezia';

$GLOBALS["lang"]['Swedish'] = 'Svezia';

$GLOBALS["lang"]['switch_device_id'] = 'Interruttore ID dispositivo';

$GLOBALS["lang"]['Switch Device ID'] = 'Interruttore ID dispositivo';

$GLOBALS["lang"]['switch_port'] = 'Porto di commutazione';

$GLOBALS["lang"]['Switch Port'] = 'Porto di commutazione';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svizzera, Confederazione svizzera';

$GLOBALS["lang"]['Symptom'] = 'Sintomo';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Repubblica araba siriana';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'Sistemazione';

$GLOBALS["lang"]['SysLocation'] = 'Sistemazione';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'Tempo libero';

$GLOBALS["lang"]['SysUpTime'] = 'Tempo libero';

$GLOBALS["lang"]['system_component'] = 'Componente del sistema';

$GLOBALS["lang"]['System Component'] = 'Componente del sistema';

$GLOBALS["lang"]['System-Area Network'] = 'Rete System-Area';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Livello TX';

$GLOBALS["lang"]['TX Power'] = 'Potenza TX';

$GLOBALS["lang"]['TX Profile'] = 'Profilo TX';

$GLOBALS["lang"]['Table'] = 'Tabella';

$GLOBALS["lang"]['tag'] = 'Tag:';

$GLOBALS["lang"]['Tag'] = 'Tag:';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Taggato 3';

$GLOBALS["lang"]['Tag 3'] = 'Taggato 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tag: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Prendere nota di tutta l\'output e azione ogni elemento come appropriato.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Computer di destinazione';

$GLOBALS["lang"]['task'] = 'Attività';

$GLOBALS["lang"]['Task'] = 'Attività';

$GLOBALS["lang"]['tasks'] = 'Compiti';

$GLOBALS["lang"]['Tasks'] = 'Compiti';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'I compiti possono essere uno dei diversi tipi distinti: Baseline, Discovery, Report, Query, Sintesi o Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Porte Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Porte Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Dettagli tecnici';

$GLOBALS["lang"]['tenant'] = 'Inquinamento';

$GLOBALS["lang"]['Tenant'] = 'Inquinamento';

$GLOBALS["lang"]['Tenant ID'] = 'ID inquilino';

$GLOBALS["lang"]['Tennant ID'] = 'ID di tensione';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Prova 1';

$GLOBALS["lang"]['Test 2'] = 'Prova 2';

$GLOBALS["lang"]['Test 3'] = 'Prova 3';

$GLOBALS["lang"]['Test Email'] = 'Test Email';

$GLOBALS["lang"]['test_minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Test Minutes'] = 'Processo verbale';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Test';

$GLOBALS["lang"]['Tests'] = 'Test';

$GLOBALS["lang"]['Text'] = 'Testo';

$GLOBALS["lang"]['Thai'] = 'Tailandese';

$GLOBALS["lang"]['Thailand'] = 'Thailandia';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Grazie per aver avviato il vostro viaggio con la migliore scoperta e strumento di inventario intorno.';

$GLOBALS["lang"]['Thanks to'] = 'Grazie a';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Ecco! Hai appena modificato gli attributi di tanti dispositivi di cui hai bisogno.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The <i>Roles</i> endpoint consente di gestire il set di autorizzazioni (Creare, leggere, aggiornare, cancellare) che sono concesse agli utenti e sono applicate a ogni endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'L\'API utilizza un cookie. È possibile richiedere un cookie inviando un POST all\'URL sottostante, contenente gli attributi e i valori del nome utente e della password:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Il dominio Active Directory per recuperare un elenco di sottorete da.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Il server Active Directory per recuperare un elenco di sottorete da.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'L\'endpoint Applicazioni consente di definire un\'applicazione che è possibile associare a un dispositivo (o dispositivi).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'L\'endpoint Attributes consente di aggiungere valori personalizzati a diversi attributi in Open-AudIT, al momento in cui questa funzione funziona sugli attributi Class, Environment, Status e Type su Dispositivi, l\'attributo Type per entrambe le posizioni e Orgs, nonché la Categoria Menu per le query. Se si visualizza un elemento di uno dei tipi prvious (vedi una Lkocation) si noterà che l\'attributo Tipo deve essere selezionato da una casella a discesa. Questo è dove vengono memorizzati quei valori. Quindi, se si desidera aggiungere un nuovo tipo da scegliere per una posizione, aggiungerlo utilizzando la funzione Attributi.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La metrica automatizzabile cattura la risposta alla domanda <strong>Può un aggressore automatizzare gli eventi di sfruttamento per questa vulnerabilità attraverso obiettivi multipli?</strong> basato sui passi 1-4 della catena di uccisione. Questi passaggi sono ricognizione, armamento, consegna e sfruttamento (Not Defined, No, Sì).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'La CVE è stata contrassegnata come invalida o revocata nell\'elenco CVE. Resta nel NVD ma è escluso dai risultati di ricerca predefiniti.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'La CVE è stata pubblicata nella lista CVE e inclusa nel dataset NVD. Solo ingestione iniziale.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'Il CVE è stato aggiornato dopo l\'analisi iniziale. I dati di arricchimento NVD potrebbero essere stati modificati.';

$GLOBALS["lang"]['The CVE identifier.'] = 'L\'identificatore CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'Il CVE è attivamente arricchito con i punteggi CVSS, le classificazioni CWE, i tag di riferimento e l\'applicabilità CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Il CVE non è attualmente prioritario per l\'arricchimento a causa di vincoli di risorse o altri motivi.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'Il CVE è in coda per l\'arricchimento da parte degli analisti NVD. Non ci sono ancora metadati dettagliati.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Il Cloud che possiede questo prodotto. Collegamenti a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Il tipo di dispositivo Seed Discovery è il metodo più recente altamente efficace per la rete che striscia, dando la possibilità di indirizzare la rete come strettamente o come in generale di cui hai bisogno. È veloce, funziona ed è grande.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'La scansione della scoperta Le opzioni che spediamo sono dettagliate nella tabella sottostante. Come sopra, gli utenti Enterprise possono creare più di questi o modificare gli articoli spediti.';

$GLOBALS["lang"]['The Elevated User query'] = 'La domanda dell\'utente rilevante';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'La funzione Executables esegue la scansione del disco di un dispositivo come parte dell\'audit e verifica che ogni file eseguibile è noto al gestore del pacchetto. Poiché utilizza il gestore del pacchetto, la funzione si applica solo ai dispositivi di destinazione Linux, e oltre a questo, solo le distribuzioni basate su rpm o deb. Tutto ciò che Redhat o Debian ha basato dovrebbe funzionare.';

$GLOBALS["lang"]['The FROM'] = 'IL FROM';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Il Gruppo dirigeva la Baseline. Collegamenti a <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'L\'ID dalla tabella dei dispositivi (i dispositivi.name saranno visualizzati) della NTU a questo fine della connessione. Collegamenti a <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'L\'ID della politica di benchmark importata.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'L\'ID dalla tabella delle posizioni (i luoghi.name verrà visualizzato) di questo fine della connessione. Collegamenti a <code>locations.id</code>. La posizione A è solitamente la <code>FROM</code> posizione.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'L\'ID dalla tabella delle posizioni (i luoghi.name verrà visualizzato) di questo fine della connessione. Collegamenti a <code>locations.id</code>. La posizione B è solitamente la <code>TO</code> posizione.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'L\'ID del dispositivo associato (se presente). Collegamenti a <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'L\'ID della scoperta associata. Link a <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'L\'ID della voce del tipo associato.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'L\'ID di questo org genitore org. Link a <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'L\'ID fornito dal fornitore.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'L\'ID recuperato da una scoperta Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'L\'indirizzo IP di questo raccoglitore utilizzato per comunicare con il server.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'L\'IP del dispositivo per avviare una scoperta dei semi.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'L\'IP dell\'interfaccia esterna.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'L\'IP dell\'interfaccia interna.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Il processo di certificazione ISO/IEC 27001 e i suoi elementi chiave.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'L\'ISP o Telco forniscono questo link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Il record JSON di Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Il record JSON del feed NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'L\'UOU LDAP di questo utente (se LDAP viene utilizzato).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Il server LDAP non poteva essere collegato. Per niente. Controllare che sia pingable dal server Open-AudIT. Controllare la porta corretta è aperta al server Open-AudIT. Un nmap del server Open-AudIT lo mostrerà. Sostituisci il tuo LDAP server IP per $ip. Prova:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Il tipo di server LDAP non è valido. Dovrebbe essere <i>directory attiva</i> o <i>aperto</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Il server LDAP è stato collegato e le credenziali dell\'utente accettate per legare.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'L\'installatore Linux Open-AudIT testerà e, se necessario, installerà dipendenze Open-AudITs dal repository delle distribuzioni, inclusa l\'impostazione di Nmap SetUID. Questo è necessario per il rilevamento SNMP (UDP 161) da un utente non root. Questo è supportato su RedHat/CentOS e Debian/Ubuntu. Se è necessario installare manualmente Nmap:<br/><br/>Per RedHat/CentOS fare (NOTE - se si aggiorna utilizzando yum, è necessario riapplicare questo <i>chmod</i> impostazione).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'La posizione che contiene questa rete. Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Il NVD ha assegnato lo stato di base.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Il National Institute of Standards and Technology è l\'agenzia federale di tecnologia. Essi avanzano la tecnologia ufficiale, la scienza di misura e gli standard.';

$GLOBALS["lang"]['The Network to Discover'] = 'La rete per scoprire';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Il preset di temporizzazione Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Il sistema operativo questo pacchetto dovrebbe essere segnalato contro. Per tutti. Utilizzare il segno percentuale % come wildcard. Sarà testato contro os_group, os_famiglia e os_name in tale ordine.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'L\'API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'L\'ID Open-AudIT del cloud collegato. Collegamenti a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'L\'Open-Aud Il codice server IT è stato espulso all\'interno di questo file.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'L\'Open-Aud Il codice server IT è stato espulso all\'interno di questa funzione.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'L\'ecosistema OpenSCAP fornisce molteplici strumenti per aiutare gli amministratori e i revisori con la valutazione, la misurazione e l\'applicazione delle basi di sicurezza, tra cui una vasta gamma di guide indurenti e basi di configurazione sviluppate dalla comunità open source, assicurando di poter scegliere una politica di sicurezza più adatta alle esigenze della vostra organizzazione, indipendentemente dalle sue dimensioni.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Il progetto OpenSCAP è una collezione di strumenti open source per l\'implementazione e l\'attuazione di questo standard, e ha ricevuto la certificazione SCAP 1.2 da NIST nel 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'L\'Organizzazione che possiede questo oggetto. Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Il Process Identifier della scoperta associata in esecuzione.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Il positone RU della parte superiore di questo dispositivo.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'La funzione Racks è utilizzata per gestire e visualizzare l\'uso del rack con un\'organizzazione, posizione, costruzione, pavimento, camera e riga.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Lo SCAP è una specifica per esprimere e manipolare i dati di sicurezza in modi standardizzati. SCAP utilizza diverse specifiche individuali in concerto per automatizzare il monitoraggio continuo, la gestione delle vulnerabilità e la valutazione della conformità della politica di sicurezza';

$GLOBALS["lang"]['The SELECT'] = 'Il SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'La sezione SELECT della query dovrebbe usare la notazione completa e richiedere anche il campo con il suo nome completo. IE - Dispositivi SELECT. id AS `devices.id`. Ogni campo deve essere selezionato in questo modo per consentire la filtrazione dell\'attributo lato GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'La sezione SELECT del vostro SQL deve contenere colonne completamente qualificate e specificare alcune colonne.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La stringa della comunità SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Il Passphrase di autenticazione SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Il protocollo di autenticazione SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'La SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Il protocollo sulla privacy SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Il livello di sicurezza SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Il nome di sicurezza SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Il contesto SNMPv3 Engine ID (opzionale).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Il nome contestuale SNMPv3 (opzionale).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'La SQL non può contenere <strong>DOVE @filter O</strong>. Che SQL non sarà eseguito, tuttavia <strong>Dove @filter E</strong> Le domande sono consentite.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Le query SQL utilizzate in Open-AudIT richiedono l\'uso del backtick - ` carattere e NON il singolo standard per i campi. Nella maggior parte delle tastiere di Windows degli Stati Uniti la chiave di backtick si trova nella parte superiore sinistra della tastiera insieme alla tilde ~. Su una tastiera Mac statunitense la chiave di backtick si trova accanto alla chiave SHIFT. La citazione singola standard è ancora usata per racchiudere i valori come gli esempi qui sotto illustrano.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'La query SQL è essenzialmente suddivisa in tre parti.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'La funzionalità Standards in Open-AudIT consente di completare, in anticipo, le domande richieste dai revisori al momento della certificazione ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'L\'URL del sistema esterno.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'L\'URL del tuo Open-AudIT Server che questo Collector riferirà a (nessuno slash trailing).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'L\'URL a cui gli script di audit devono presentare il loro risultato.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'L\'utente endpoint consente di gestire gli account utente all\'interno di Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'LA QUI';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'La sezione DOVE del tuo SQL <em>deve</em> contiene';

$GLOBALS["lang"]['The Windows'] = 'Il Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Il registro di Windows può dire il seguente';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'L\'account deve avere una password; WMI non consente password vuote.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'La password dell\'account NON deve contenere \" (doppia citazioni). Questo è perché cscript (e wscript) non può analizzare i valori dell\'argomento contenenti le doppie citazioni. Sono semplicemente spogliati. No (prima di chiedere) scappare non funzionerà. Questo è un limite di scrittura e niente a che fare con Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Il nome completo effettivo di questo utente.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'L\'indirizzo della pagina di presentazione del server Open-AudIT.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'L\'amministratore ha fornito le credenziali che sono state utilizzate con successo per legare a LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'L\'amministratore ha fornito le credenziali per legare al server LDAP, ma non sono state accettate dal sevrer LDAP. Controllare due volte le credenziali funzionano sul server LDAP e quindi controllare (o ripristinarle) nella voce Open-AudIT LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'L\'agente e il server sono anche abbastanza intelligenti per autoaggiornamento dell\'agente se una versione più recente è installata sul server (si dice dopo l\'aggiornamento Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'L\'agente deve scaricare una copia fresca dello script di audit, eseguirlo e inviare il risultato al server.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'L\'applicazione crea controlli temporanei di audit qui, li copia alle macchine di destinazione, quindi li cancella.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La linea base associata. Collegamenti a <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La scoperta associata (se richiesto). Collegamenti a <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'L\'attributo alla prova (dalla <code>devices</code> tabella).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'L\'attributo alla prova (deve corrispondere a un nome di campo esterno dal basso).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Gli attributi per le opzioni di scansione di scoperta sono come di seguito.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Lo script di audit su cui basare le personalizzazioni.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Lo script di audit utilizzerà i file[ ] array e recuperare i dettagli del file.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Gli script di audit accettano tutti un argomento di debug. È possibile eseguire lo script utilizzando che e vedere in modo più dettagliato qual è il problema. E se non riuscite a capirlo, ecco cosa siamo qui! Aprire un caso di supporto e faremo funzionare le cose in pochissimo tempo.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Il percorso base da cui cercare gli utenti.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'I passaggi sottostanti non sono la colpa o unica di Open-AudIT e influenzerebbero <strong>qualsiasi</strong> applicazione scoperta utilizzando WMI e/o Windows remoto.';

$GLOBALS["lang"]['The benchmark type.'] = 'Il tipo di riferimento.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'L\'edificio il rack si trova in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Il numero calcolato di dispositivi da creare esternamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Il numero calcolato di dispositivi da creare in Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'L\'ID client è l\'ID di un\'applicazione Azure Active Directory. Il segreto del cliente e\' la chiave che darai a quell\'applicazione.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Il collezionista è essenzialmente un\'installazione completa di Open-AudIT in <i>collezionista</i> Modalità. Il collettore è progettato per eseguire la scoperta sulla rete è situato in. Non è limitato solo a quella rete, ma idealmente sarebbe essenzialmente un collettore per subnet se necessario. Il collettore è guidato su un programma dal server ed esegue la scoperta sulla rete come specificato.<br/>Quando in piedi Modalità personale il Collector agisce come un server indipendente, semplicemente inviando tutti i dispositivi trovati al server principale.<br/><br/>Una volta installato e configurato, il controllo del Collector viene eseguito sul Server (non in modalità Stand Alone).<br/><br/>Le uniche porte di rete richieste tra il collettore e il server sono 80 o 443 (collegamento TCP stabilito dal Collector al Server). Il database Open-AudIT non è (e non può essere) condiviso tra queste installazioni.<br/><br/>Per impostazione predefinita, il collettore (non in modalità Stand Alone) richiederà dal server qualsiasi attività di scoperta ogni 5 minuti (è possibile configurare questo sul server per i nuovi Collectors utilizzando l\'elemento di configurazione collettore_check_minutes) per qualsiasi attività di scoperta per il collettore dovrebbe essere programmato per 0, 5, 10, 15, ecc minuti.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Il collezionista è essenzialmente un\'installazione completa di Open-AudIT in <i>collezionista</i> Modalità. Questa modalità ridurrebbe la funzionalità visibile nel tentativo di semplificare e focalizzare l\'applicazione. È progettato per raccogliere informazioni su reti e dispositivi locali, dove firewall e/o traversal di rete è un problema dal server.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'I collettori interni IP utilizzati quando esegue una scoperta.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Il nome della colonna dalla tabella straniera. Dovrebbe essere uno di: classe, ambiente, stato, tipo o menu_categoria.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Il comando eseguito sul dispositivo di destinazione o il codice server Open-AudIT eseguito durante la scoperta.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configurazione del cluster può essere: <code>active/active</code>♪ <code>active/passive</code>♪ <code>N+1</code>♪ <code>N+M</code>♪ <code>N-to-1</code>♪ <code>N-to-N</code>♪ <code>other</code> o vuoto.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La password delle credenziali. Se le credenziali sono una chiave SSH, questa è la password utilizzata per sbloccare la chiave ed è facoltativa.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Le credenziali fornite dall\'utente hanno fallito.';

$GLOBALS["lang"]['The credentials username.'] = 'Il nome utente delle credenziali.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'La data attuale e l\'ora nel formato: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'La data corrente in formato Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Lo stato attuale della Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Lo stato attuale della scoperta.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Il cruscotto che verrà visualizzato per impostazione predefinita per questo utente. Collegamenti a <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'I dati memorizzati nel database non vengono visualizzati nell\'applicazione tradotta. Lasciamo i dati così com\'è. Tuttavia, non c\'è nulla per fermarti, l\'utente, cambiando il nome (ad esempio) di un elemento nel database alla tua lingua.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'I dati inseriti verranno utilizzati in un <code>LIKE</code> clausola, non (come per l\'API) <code>equals</code> clausola. Un altro esempio - se si inserisce <code>comput</code>, sarebbe ancora restituire tutti i computer. E perché stiamo usando un <code>LIKE</code> clausola, è caso insensibile.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Lo schema del database può essere trovato nell\'applicazione se l\'utente ha un database::leggi il permesso andando al menu: Admin -> Database - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La versione del database e la versione web sono inconsistenti.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La data di scadenza della licenza.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La data in cui il software viene interrotto dal produttore. Solitamente sostituito da una versione più recente. La manutenzione può essere ancora disponibile.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La data in cui il software non riceve più aggiornamenti ed è effettivamente interrotto del tutto. La manutenzione è sospesa.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La data in cui questo articolo è stato modificato o aggiunto (leggi solo). NOTA - Questo è il timestamp dal server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La data/ora in cui questo risultato è stato creato.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Il giorno del mese in cui questo compito dovrebbe eseguire (* per ogni giorno).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Il giorno della settimana in cui questo compito dovrebbe eseguire (* per ogni giorno).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Il livello di debug (anderà alla finestra del prompt dei comandi). Minore significa meno uscita con 0 non essendo uscita.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'L\'opzione di scansione di default è il set UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La lingua predefinita assegnata a qualsiasi utente creato da questo metodo.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Il dispositivo deve rispondere a un ping Nmap prima che sia considerato online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Il dispositivo all\'interno di Open-AudIT. Collegamenti a <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Il link diretto per lo script è';

$GLOBALS["lang"]['The email address of the reciever'] = 'L\'indirizzo email del reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Il binario di impresa da FirstWave è richiesto per una licenza. Scarica Open-AudIT da';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'L\'intera linea base associata questo risultato è da.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'La vulnerabilità sfruttata può influenzare le risorse oltre l\'autorità di sicurezza della componente vulnerabile. Questo di solito significa un privilegio o un limite di fiducia è attraversato (ad esempio, sfuggire da un contenitore al sistema operativo host).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'La vulnerabilità sfruttata colpisce solo le risorse all\'interno della stessa autorità di sicurezza della componente vulnerabile. In altre parole, le azioni dell\'attaccante rimangono all\'interno del confine di fiducia originale.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'L\'ID della posizione di riferimento esterno. Solitamente popolato da audit Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'I campi associati a un\'integrazione vengono memorizzati nel database come una serie di oggetti JSON. Ogni campo ha i seguenti attributi';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La prima volta che Open-AudIT ha recuperato i dettagli di questo dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Il pavimento il rack si trova su.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La tavola straniera a riferimento. Dovrebbe essere uno di: dispositivi, posizioni, org o query.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Il formato dei tuoi dati dovrebbe essere nel modulo';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Il formato utilizzato per l\'output da e-mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La colonna completamente qualificata su cui raggrupparsi. NOTA: Quando il tipo = traffico, questo rappresenta la query rossa id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Il nome completamente qualificato restituito dal sistema esterno. EG: per NMIS utilizziamo la configurazione. ruolo Tipo.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Il tavolo completamente qualificato.colonna. Possono essere forniti multipli, separati da una virgola (senza spazi).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La query SQL generata per testare questa vulnerabilità. Questo campo può essere modificato per correggere la query come richiesto.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Il gruppo di dispositivi su cui la linea di base è stata eseguita contro.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Il gruppo che fornisce un elenco di dispositivi per l\'integrazione. Collegamenti a <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'L\'ora del giorno in cui questo compito dovrebbe eseguire (* per ogni ora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Il dispositivo collegato. Collegamenti a <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La colonna identificativa (integer) nel database (leggi solo).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'L\'importanza di questa linea di base (non ancora utilizzata).';

$GLOBALS["lang"]['The integer of severity.'] = 'L\'integer della gravità.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Il valore interno, riformattato in questo formato.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'L\'indirizzo ip del metodo Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La lingua per tradurre l\'interfaccia web in per l\'utente.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'L\'ultima data e l\'ora che questo articolo è stato eseguito (leggi solo).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'L\'ultima volta che Open-AudIT ha recuperato i dettagli di questo dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'L\'ultima volta che questo benchmark è stato eseguito.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'L\'ultima volta che questa integrazione è stata eseguita.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'La licenza endpoint consente di monitorare il numero di licenze presenti sui dispositivi.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Il numero di linea assegnato dal fornitore alla linea a questo fine della connessione.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'La posizione in cui si trova il rack. Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'L\'indirizzo delle posizioni.';

$GLOBALS["lang"]['The locations area.'] = 'La zona dei luoghi.';

$GLOBALS["lang"]['The locations city.'] = 'La città dei luoghi.';

$GLOBALS["lang"]['The locations country.'] = 'Il paese delle posizioni.';

$GLOBALS["lang"]['The locations district.'] = 'Il quartiere delle posizioni.';

$GLOBALS["lang"]['The locations latitude.'] = 'Le posizioni latitudine.';

$GLOBALS["lang"]['The locations level.'] = 'Il livello delle posizioni.';

$GLOBALS["lang"]['The locations longitude.'] = 'Le posizioni longitudine.';

$GLOBALS["lang"]['The locations phone.'] = 'Il telefono delle posizioni.';

$GLOBALS["lang"]['The locations postcode.'] = 'Le posizioni codice postale.';

$GLOBALS["lang"]['The locations region.'] = 'La regione dei luoghi.';

$GLOBALS["lang"]['The locations room.'] = 'La stanza delle posizioni.';

$GLOBALS["lang"]['The locations state.'] = 'Lo stato delle posizioni.';

$GLOBALS["lang"]['The locations suburb.'] = 'La periferia.';

$GLOBALS["lang"]['The locations suite.'] = 'La suite delle posizioni.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'La logica di corrispondenza del dispositivo è contenuta nel file device_helper.php, che su un\'installazione Linux può essere trovata qui';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Le impostazioni di autorizzazione di default della macchina non concedono il permesso di attivazione locale per l\'applicazione del server COM con';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Il peso fisico massimo (in KGs) questo rack può contenere.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Il massimo totale BTUs questo rack è valutato per.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Gli attributi minimi richiesti per gli attributi sono';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Il minuto dell\'ora in cui questo compito dovrebbe eseguire (* per ogni minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Il mese dell\'anno in cui questo compito dovrebbe eseguire (* per ogni mese).';

$GLOBALS["lang"]['The name given to this item.'] = 'Il nome dato a questo articolo.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Il nome dato a questo articolo. Idealmente dovrebbe essere unico.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Il nome dato a questo utente (utilizzato per il login). Idealmente dovrebbe essere unico.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Il nome del cloud associato (se richiesto).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Il nome del pacchetto software, come verificato da Open-AudIT. Utilizzare il segno percentuale % come wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Il nome dell\'utente che ha modificato o aggiunto questo articolo (leggi solo).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Il nome fornito dal fornitore.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'La rete nel formato 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'La rete subnet per eseguire la scoperta.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Il nuovo agente esegue una versione PowerShell del vecchio script di audit in preparazione per l\'ammortamento di VBScript (sì, sta arrivando).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Il numero di RUs questo dispositivo occupa.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Il numero di posizioni associate. Collegamenti a <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Il numero di reti associate. Collegamenti a <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Il numero di dispositivi controllati in questa nuvola. Collegamenti a <code>devices.cloud_id</code> e <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Il numero di vulnerabilità di gravità critica tenuto da FirstWave (non nel tuo database).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Il numero di dispositivi trovati da questa scoperta.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Il numero di dispositivi nel gruppo associato.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Il numero di dispositivi in questa nuvola con uno stato di esecuzione. Collegamenti a <code>devices.cloud_id</code> e <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Il numero di dispositivi in questa nuvola con uno stato di arresto. Collegamenti a <code>devices.cloud_id</code> e <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Il numero di dispositivi in questa nuvola. Collegamenti a <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Il numero di dispositivi su cui verrà eseguito questo benchmark. Derivato da <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Il numero di dispositivi a cui limitare questa scoperta.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Il numero di vulnerabilità ad alta gravità tenuto da FirstWave (non nel tuo database).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Il numero di vulnerabilità di gravità bassa tenuto da FirstWave (non nel tuo database).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Il numero di vulnerabilità di gravità media tenuto da FirstWave (non nel tuo database).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Il numero di licenze acquistate.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Il numero di secondi per provare e comunicare con l\'IP di destinazione.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Il numero di vulnerabilità senza una gravità tenuta da FirstWave (non nel tuo database).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'L\'offset è il numero di dispositivi da cui si desidera restituire i dati.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'L\'unico permesso richiesto / nome politico (nel nostro test) è';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La colonna secondaria opzionale. NOTA: Quando il tipo = traffico, questo rappresenta la query gialla id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La terza colonna opzionale. NOTA: Quando il tipo = traffico, questo rappresenta il verde query id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'L\'ordine di recupero di informazioni è snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'L\'orientamento di questo dispositivo.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'La password (se non si utilizza lo script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'La password per l\'attributo dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'La password utilizzata per accedere al sistema esterno.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Il percorso verso il file o la directory.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Il percorso verso il file o la directory. Le directory dovrebbero finire con uno slash trailing.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La profondità fisica (in CMs) del rack.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'L\'altezza fisica (in CMs) del rack.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Il peso fisico (in KGs) del rack al momento.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Il peso fisico (in KGs) del rack quando vuoto.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'La larghezza fisica (in CMs) del rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Il baccello (se c\'è) di cui questo rack fa parte.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Il circuito elettrico a cui si attacca questo rack.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La tabella principale del database su cui basare questo widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Il metodo principale per l\'autorizzazione (cosa che un utente può fare) è ora basato sugli utenti Roles. I ruoli sono definiti come admin, org_admin, reporter e utente per impostazione predefinita. Ogni ruolo ha una serie di autorizzazioni (Creare, leggere, aggiornare, cancellare) per ogni endpoint. I ruoli standard come spedito dovrebbero coprire il 99,9 per cento dei casi di utilizzo. La capacità di definire ruoli aggiuntivi e modificare ruoli esistenti è abilitata in Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'L\'identificatore di processo di questa voce di coda.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Il processo che è stato utilizzato per recuperare i dettagli sul dispositivo';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Lo scopo di questa pagina di licenza è quello di elencare i prodotti e le licenze inclusi nei prodotti Firstwave Commercial, compresi i prodotti basati su opere open source. Open-AudIT è concesso in licenza da Firstwave sotto AGPLv3 o versioni successive con funzionalità Enterprise e Professional con licenza commerciale. Open-AudIT scaricato da FirstWave può includere le seguenti librerie e progetti, che vengono forniti non modificati e autorizzati come indicato:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La query che fornisce un elenco di dispositivi per l\'integrazione. Collegamenti a <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Il numero di asset rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'L\'asset tag rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'Il codice a barre.';

$GLOBALS["lang"]['The rack model.'] = 'Il modello del rack.';

$GLOBALS["lang"]['The rack serial.'] = 'Il serial di rack.';

$GLOBALS["lang"]['The rack series.'] = 'La serie di rack.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Il rack questo dispositivo si trova in. Collegamenti a <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Il processo raccomandato di indirizzare e fissare le vulnerabilità di sicurezza identificate. Ciò comporta in genere l\'applicazione di patch, aggiornamenti o altre misure per eliminare il rischio posto dalle vulnerabilità.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'La notazione di dominio regolare della directory. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Le proprietà richieste dovrebbero essere in una lista separata da virgola. Le proprietà dovrebbero essere pienamente qualificate - cioè, system.hostname (non solo hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Il risultato del comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La stanza in cui si trova il rack.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La fila in cui si trova il rack.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'La ricerca del gruppo sul server LDAP è fallita. Controlla i registri del server LDAP. Hai creato questi gruppi (per ruoli e org) sul server LDAP e hai assegnato agli utenti LDAP?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La chiave segreta utilizzata in combinazione con la chiave API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La data di fine vita del software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La data di fine servizio.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La colonna specifica del database dalla tabella del database specificata.';

$GLOBALS["lang"]['The specific database table.'] = 'La tabella specifica del database.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Le opzioni standard di tempistica Nmap. Precedentemente impostato su T4 (aggressiva).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Le opzioni standard di tempistica Nmap. Usiamo solitamente -T4 (Aggressivo) come questo è raccomandato per una connessione a banda larga decente o ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Lo stato di questa integrazione';

$GLOBALS["lang"]['The status of this queued item.'] = 'Lo stato di questa voce in coda.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'I passi sottostanti delineano il processo.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'L\'IP di destinazione a cui si riferiscono gli accessi (se presenti).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Il computer di destinazione per l\'audit. \" significa localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Il modello per il collegamento da generare per linea di risultato.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Il testo per il fondo del grafico in un grafico di linea (solo).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Il testo che viene visualizzato.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Il timestamp dopo di che, questo compito dovrebbe funzionare. Ad esempio, eseguire un compito dopo il 1 ° giugno 2017 alle 10, impostare a <code>2017-06-01 09:59:00</code>. Questo valore dovrebbe essere zero imbottito (cioè, 09, non 9). Questo valore predefinito a <code>2000-01-01 00:00:00</code> che significa per impostazione predefinita, un\'attività programmata verrà eseguita al prossimo tempo di esecuzione programmata.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Le porte TCP top 10, 100 o 1000 (o nessuna) comunemente in uso secondo Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'I primi 10, 100 o 1000 (o nessuno) porte UDP comunemente in uso secondo Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'L\'uscita totale BTU da questo rack.';

$GLOBALS["lang"]['The type of device.'] = 'Il tipo di dispositivo.';

$GLOBALS["lang"]['The type of organisation.'] = 'Il tipo di organizzazione.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Il tipo di rack (computo, potenza, rete, ecc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Il tipo di compito da eseguire. Uno di: base, benchmark, cloud scoperta, scoperta, integrazione, report, query.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Il tipo di integrazione (solitamente chiamato dopo il sistema esterno).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Lo stato non filtrato significa che un porto è accessibile, ma Nmap non è in grado di determinare se è aperto o chiuso. Solo la scansione ACK, che viene utilizzata per mappare le regole del firewall, classifica le porte in questo stato. La scansione di porte non filtrate con altri tipi di scansione, come la scansione finestra, la scansione SYN o la scansione FIN, può aiutare a risolvere se la porta è aperta.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'L\'identificatore unico di questo server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'L\'account utente utilizzato da questo collezionista. Collegamenti a <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'L\'utente in Active Directory / OpenLDAP deve essere un membro diretto dei gruppi Open-AudIT richiesti per Roles e Orgs. Un membro di un gruppo che è un membro un altro gruppo che è un membro del gruppo Open-AudIT non funzionerà.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'L\'utente è in LDAP e le loro credenziali sono valide, ma non è in uno dei gruppi Open-AudIT LDAP per Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'L\'utente è in LDAP e le loro credenziali sono valide, ma non è in uno dei gruppi Open-AudIT LDAP per Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'L\'utente è in LDAP e le loro credenziali sono valide, ma non è in uno dei gruppi Open-AudIT LDAP richiesti.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'L\'utente è nel gruppo LDAP che corrisponde a questo Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'L\'utente è nel gruppo LDAP che corrisponde a questo Role.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'L\'utente non è nel gruppo LDAP che corrisponde a questo Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'L\'utente non è nel gruppo LDAP che corrisponde a questo Role.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'L\'utente specificato esiste in LDAP, ma Open-AudIT non è configurato per consumare i gruppi LDAP per ruoli e che l\'utente non esiste all\'interno di Open-AudIT. Seleziona <i>Utilizzare LDAP per i ruoli</i> su Open-AudIT LDAP schermata del server o creare questo utente all\'interno di Open-AudIT e assegnare ruoli e org.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Il nome utente (se non si utilizza lo script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Il nome utente utilizzato per accedere al sistema esterno.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'I dettagli degli utenti non sono stati recuperati da LDAP. Controlla i registri del server LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'I dettagli degli utenti sono stati recuperati da LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'L\'indirizzo email degli utenti.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Le ore abituali di funzionamento in questo sito.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Il valore assegnato alla voce.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Il valore che viene memorizzato per questo particolare articolo.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Il nome del fornitore come per le voci CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Il fornitore preso dal CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'La directory web sull\'host che Open-AudIT è installato (richiede uno slash trailing).';

$GLOBALS["lang"]['The widget at position '] = 'Il widget in posizione ';

$GLOBALS["lang"]['The width of this device.'] = 'La larghezza di questo dispositivo.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'I loro OrgID e i loro discendenti';

$GLOBALS["lang"]['Their OrgIDs only'] = 'I loro OrgID solo';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'I loro OrgID, ascendenti e discendenti';

$GLOBALS["lang"]['Then'] = 'Allora';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Quindi creare un nuovo metodo Auth in Open-AudIT andando al menu -> Admin -> Metodi di avanzamento - > Crea Auth. Fornire un nome e impostare il <i>tipo</i> a Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Quindi è possibile utilizzare Open-AudIT (non supportato) per ricevere i dati di audit direttamente dai clienti. Discovery <strong>fallirà</strong>, ma se non si utilizza Discovery (la caratteristica principale Open-AudIT è stato progettato intorno), è ancora possibile ottenere i dati del dispositivo. È necessario eseguire gli script di audit direttamente sui client utilizzando cron, o utilizzare la funzione agente di Windows (solo Intraprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'C\'è un pulsante per esportare a JSON. Questo visualizzerà solo la tabella degli attributi del dispositivo. Per esportare il dispositivo con tutte le tabelle dei componenti associati, visualizzare i dettagli del dispositivo, quindi aggiungere';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Non c\'è assolutamente bisogno di modificare manualmente ogni singolo dispositivo.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Non c\'è bisogno di fare nulla se si esegue Open-AudIT su un server Linux.<br/><br/>I client di Windows sono semplicemente eccellenti e non richiedono azioni speciali, tuttavia.... per abilitare questa funzione lo script di audit deve essere eseguito localmente sul sistema di Windows di destinazione. Non può essere eseguito da remoto come facciamo con le chiamate WMI quando si esegue lo script di audit su una macchina di Windows, mentre si rivolge a una seconda macchina di Windows. Per fare questo abbiamo bisogno di copiare lo script di audit alla macchina di Windows di destinazione e poi eseguirlo. Purtroppo l\'account di servizio che Apache gestisce è l\'account del sistema locale. Questo account non ha accesso alle risorse remote (con base di rete). Per lavorare intorno a questo problema il servizio deve essere eseguito in un altro conto. È più semplice usare l\'account Administrator locale, ma è possibile provare qualsiasi account che ti piace fino a quando ha i privilegi richiesti. L\'account Local System ha tanto accesso locale quanto l\'account Administrator locale.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Questi sono solo esempi. Potrebbe essere necessario regolare questi attributi per soddisfare il vostro particolare LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Questi parametri consentono di controllare solo ciò che è utile e rilevante per te, risparmiando tempo di elaborazione e permettendoti di scoprire la tua rete in modo ordinato.';

$GLOBALS["lang"]['Thing'] = 'Costo';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pensa a mail.domain1.com e mail.domain2.com - stesso nome host.';

$GLOBALS["lang"]['Third'] = 'Terzo';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Questo CVE sarà recuperato e sovrascrivere il CVE esistente se esiste.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Questo Org non ha specificato nessun gruppo AD. Controlla i dettagli dei ruoli all\'interno di Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Questo Org non ha specificato nessun gruppo AD. Controlla i dettagli dei ruoli all\'interno di Open-AudIT. <span class=\'\"confluence-link\"\'>Hai creato questi gruppi (per org) sul server LDAP e assegnato agli utenti LDAP?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Questo ruolo non ha specificato un gruppo AD. Controlla i dettagli dei ruoli all\'interno di Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Questo attributo viene memorizzato come oggetto JSON. È la lista di tutte le collezioni e contiene il nome della collezione insieme <code>c</code>♪ <code>r</code>♪ <code>u</code> e, o <code>d</code> che rappresentano creare, leggere, aggiornare ed eliminare. Queste sono le azioni che un utente può eseguire su elementi di quella particolare collezione.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Questo può essere un varchar (un campo di testo), un elenco (un elenco di valori che possono essere selezionati) o una data.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Questo codice si basa sul grande lavoro fatto dal';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Questo raccoglitore identifica univoco universale.';

$GLOBALS["lang"]['This column is required by'] = 'Questa colonna è richiesta da';

$GLOBALS["lang"]['This column is required by '] = 'Questa colonna è richiesta da ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Questa descrizione è auto-popolata e dovrebbe idealmente essere lasciato come-è.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Questo endpoint consente di aggiungere le connessioni che fanno parte dell\'infrastruttura di rete, consente di personalizzare una varietà di attributi, specificare dove si trova questa connessione e l\'organizzazione che appartiene.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Questo errore indica che SMB1 è stato disabilitato o rimosso dalla macchina di destinazione. Questo è normale per la versione moderna di Windows e vedrete solo questo messaggio quando il tentativo di connessione SMB2 è fallito. Se la connessione SMB2 fallisce, tentiamo SMB1 per abilitare la scoperta sulle vecchie versioni di Windows. Se la macchina Windows di destinazione <i>è</i> l\'esecuzione di una vecchia versione di Windows, è probabile che le credenziali hanno fallito. In tal caso, vedi';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Questo errore indica che non è sufficiente la memoria virtuale o la quota di file di paging è disponibile per completare l\'operazione specificata. Dovresti riprovare più tardi.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Questo errore indica che le credenziali utilizzate sono errate, non esistono o non hanno privilegi sufficienti per accedere da remoto alla macchina di Windows di destinazione. È necessario verificare le credenziali e controllare il seguente.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Questo esempio crea un elenco di tutti i moduli contrassegnati come';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Questo esempio crea un elenco di dispositivi e porte aperte, protocolli e programmi trovati dalla scansione NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Questo esempio crea un elenco di dispositivi in cui i campi Function o Descrizione sono vuoti O la data di acquisto è il default.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Questa query di esempio recupera un elenco di dispositivi over 3 anni. La query usa oggi';

$GLOBALS["lang"]['This example uses'] = 'Questo esempio utilizza';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Questa funzione richiede una licenza professionale o Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Questa funzione, perché ha la capacità di influenzare i dispositivi di destinazione più del solito deve essere abilitato manualmente. Per abilitare questa funzione, modifica la funzione di configurazione_executables <i>Sì.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Questo file dice a Linux di sondare l\'applicazione per determinare se ci sono compiti programmati che dovrebbero essere eseguiti.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Questo modulo fornisce un modo semplice per iniziare a scoprire i dispositivi sulla rete. Per ulteriori (molti più) opzioni dettagliate, è possibile creare individualmente';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Questo è anche il modo in cui PAExec lavora.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Questa è un\'opzione di configurazione opzionale, abilitata impostando Discover_use_org_id_match nella configurazione globale.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Questa è generalmente la colonna primaria, se non diversamente configurata. NOTA: Quando il tipo = traffico, questo rappresenta il testo secondario.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Questo è probabilmente a causa del tempo di MySQL fuori. MySQL tipicamente utilizza il tempo dei dispositivi host. Puoi controllare questo';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Questo è regolabile dagli utenti e così anche se dovrebbe essere globalmente unico, non c\'è certamente nessuna garanzia di questo.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Questa è la directory in cui riportiamo tutti gli allegati ai dispositivi.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Questo deve essere usato come primo punto di chiamata quando si verificano problemi Open-AudIT. È possibile fare clic sul pulsante Esporta in alto a destra per recuperare questo come file JSON (da aggiungere al biglietto di supporto / e-mail.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Questo problema e\' sotto indagine.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Questa voce deve corrispondere al valore dell\'attributo selezionato o contiene l\'ID della query da utilizzare.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Questa voce deve corrispondere al valore dell\'attributo selezionato.';

$GLOBALS["lang"]['This license expires on'] = 'Questa licenza scade su';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Questo permesso di sicurezza può essere modificato utilizzando lo strumento amministrativo Servizi componenti.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Questo dovrebbe essere commentato dopo la risoluzione dei problemi come modalità debug genererà un sacco di registri sul disco per nessun beneficio.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Questo dovrebbe essere globalmente unico, ma ho visto casi in cui non è.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Questo dovrebbe essere impostato su 1 o l\'altezza del rack.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Questo dovrebbe essere il nome del campo completamente qualificato nel database. Attualmente le colonne dal sistema, i campi e le tabelle credenziali sono supportate. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Questo stato viene utilizzato quando Nmap non è in grado di determinare se una porta è chiusa o filtrata. Viene utilizzato solo per la scansione idle IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Questo si auto-popola.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Questo rallenta notevolmente la scansione scoperta.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Questo cancellerà le righe correnti nelle';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Questa licenza sarà definitivamente DELETE.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Questo vi mostrerà il modulo Bulk Edit. Qualsiasi attributo impostato su questo modulo verrà applicato a tutti i dispositivi selezionati. È possibile impostare più attributi contemporaneamente.';

$GLOBALS["lang"]['Thursday'] = 'Giovedì';

$GLOBALS["lang"]['time_caption'] = 'Captazione del tempo';

$GLOBALS["lang"]['Time Caption'] = 'Captazione del tempo';

$GLOBALS["lang"]['time_daylight'] = 'Tempo diurno';

$GLOBALS["lang"]['Time Daylight'] = 'Tempo diurno';

$GLOBALS["lang"]['Time to Execute'] = 'Tempo di esecuzione';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per obiettivo (secondi)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout per Target. Attendere X secondi per una risposta di destinazione.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesat';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor Est';

$GLOBALS["lang"]['Title'] = 'Titolo';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'A un nuovo file chiamato .env (nella stessa directory). Ora modifica questo nuovo file e uncomment (rimuovere il #) la linea qui sotto (linea 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Per eseguire effettivamente la query, aggiungere un /execute, quindi /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Per controllare una macchina, è necessario disporre di credenziali e accesso a livello di amministratore.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Per controllare una macchina remota su un dominio Active Directory, l\'utente fornito (o se non fornito, l\'utente che esegue lo script) deve essere membro del gruppo Administrators (o sottogruppo).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Per controllare una macchina remota che non è in un dominio, è necessario utilizzare l\'account Administrator (non <i>Un</i> account amministratore, <i>il</i> account amministratore) sul PC di destinazione. #1 e #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Per controllare localhost, le credenziali fornite vengono ignorate e la connessione viene effettuata utilizzando i dettagli dell\'utente che esegue lo script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Per confrontare il software controlliamo il nome e la versione. Poiché i numeri di versione non sono tutti standardizzati in formato, quando riceviamo un risultato di audit creiamo un nuovo attributo chiamato software_paggiunta che memorizziamo nel database insieme al resto dei dettagli del software per ogni pacchetto. Per questo motivo, le linee di base che utilizzano le politiche software non funzioneranno quando vengono eseguite contro un dispositivo che non è stato controllato da 1.10 (almeno). Le politiche software possono testare contro l\'essere della versione <i>uguale a</i>♪ <i>maggiore</i> o <i>uguale o superiore a</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Per creare una nuova voce fare clic sul pulsante Crea nell\'angolo in alto a destra.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Per creare una risorsa, è necessario POST i dati richiesti.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Per consentire a una macchina remota (Vista o superiore) di essere verificata che non è su un dominio, da un account nel gruppo Administrators, diverso dall\'account Administrator effettivo vedere la sezione seguente su UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Per abilitare questo, creare una nuova voce Auth andando al menu -> Admin -> Auth -> Crea il Metodo Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Per eseguire lo script di Windows powerhell, aprire un prompt dei comandi come amministratore e utilizzare il comando seguente';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Per eseguire lo script di audit, aprire un terminale e utilizzare il comando seguente';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Per filtrare con un valore di proprietà, utilizzare il nome della proprietà. Operatori che dovrebbero precedere il valore sono';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Per installare Nmap su Windows, visita la pagina Nmap';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Per fare il cambiamento, basta seguire i passaggi sottostanti.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Per recuperare l\'ID inquilino. Aprire il portale Azure fare clic su Azure Active Directory, Proprietà e l\'ID inquilino viene visualizzato come ID directory - non incolpare me per il nome errore, ecco come Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Per recuperare la chiave, accedi alla Console AWS e seleziona il tuo nome utente, quindi My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Per restituire un elemento componente specifico.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Per restituire tutti gli elementi per un tipo compnent per un dispositivo specifico.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Per restituire tutti gli elementi per un tipo di componente. Se volessi tutto il software che useresti';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Per invertire il tipo, inserire un minus, quindi';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Per eseguire lo script di test sul PC Windows di destinazione';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Per selezionare i dispositivi da integrare, utilizziamo nmis_manage = y, ma potresti (ad esempio) digitare = router. Puoi anche usare un gruppo o una query se preferisci qualcosa di più complesso.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Per ordinare da una colonna di database, utilizzare';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Per utilizzare questa funzione Enterprise, è necessario creare il tuo utente in Open-AudIT come al solito. Assegnare una password non è necessario. Devi assegnare Roles e Orgs. Il nome utente in Open-AudIT dovrebbe corrispondere all\'ingresso <i>nome utente preferito</i> attributo. Non c\'è bisogno di un nome completo o un\'email - questi saranno popolati da Entra. Se non conosci i tuoi utenti <i>nome utente preferito</i>Non temere. È possibile creare il nuovo metodo Auth in Open-AudIT e l\'applicazione Enterprise in Entra e quando un utente tenta di accedere a Open-AudIT senza un utente preesistente, controllare i registri e vedrete i loro <i>nome utente preferito</i> per la tua convienence.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Per utilizzare questa funzione Enterprise, è necessario creare il tuo utente in Open-AudIT come al solito. Assegnare una password non è necessario. Devi assegnare Roles e Orgs. Il nome utente in Open-AudIT dovrebbe corrispondere alla OKTA <i>nome</i> attributo. Non c\'è bisogno di un nome completo o un\'email - questi saranno popolati da OKTA. Se non conosci i tuoi utenti <i>nome<i>Non temere. È possibile creare il nuovo Auth Menthod in Open-AudIT e l\'applicazione in OKTA e quando un utente tenta di accedere a Open-AudIT senza un utente preesistente, controllare i registri e vedrete i loro <i>nome<i> per la tua convienence.<br/><p>Quindi creare un nuovo metodo Auth in Open-AudIT andando al menu -> Admin -> Metodi di avanzamento - > Crea Auth. Fornire un nome e impostare il <i>tipo</i> a Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Per utilizzare questa funzione è necessario abilitare gli elementi di configurazione match_mac (per AWS) e match_hostname (per Azure). Questo verrà fatto automaticamente la prima volta che viene eseguita una scoperta cloud. Per ulteriori informazioni sulle regole di corrispondenza Open-AudITs vedere QUI: Dispositivi di corrispondenza';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Per visualizzare i dettagli di una query, la struttura URL standard di /open-audit/index. php/queries/{$id} dovrebbe essere utilizzato.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Stile della barra degli strumenti';

$GLOBALS["lang"]['Toolbar Style'] = 'Stile della barra degli strumenti';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Principali porte TCP Nmap';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Le prime 10, 100, 1000 porte da scansionare secondo le opzioni Nmaps "top ports".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Le prime 10, 100, 1000 porte da scansionare secondo le opzioni Nmaps "top ports".';

$GLOBALS["lang"]['Traditional Chinese'] = 'Cinese tradizionale';

$GLOBALS["lang"]['Traffic Light'] = 'Luce del traffico';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad e Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Risoluzione dei problemi';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Risoluzione dei problemi LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Provare Open-AudIT Enterprise, su di noi senza limiti di tempo. Tutte le caratteristiche di Enterprise. Limitato a 20 dispositivi.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Prova tutte le ultime funzionalità con una licenza di dispositivo GRATUITA 100 di Open-AudIT Enterprise. Si prega di leggere il ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Prova a registrarti usando un utente LDAP. Stiamo assumendo che questo fallirà (altrimenti, perché stai ancora leggendo questo?). Successivamente, commentare la linea dal file di ther sopra.';

$GLOBALS["lang"]['Tuesday'] = 'Martedì';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turchia';

$GLOBALS["lang"]['Turkish'] = 'Turco';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Isole Turks e Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Livello Tx';

$GLOBALS["lang"]['Tx Level'] = 'Livello Tx';

$GLOBALS["lang"]['tx_power'] = 'Potenza Tx';

$GLOBALS["lang"]['Tx Power'] = 'Potenza Tx';

$GLOBALS["lang"]['tx_profile'] = 'Profilo di Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Profilo di Tx';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipo: Questo può essere un varchar (un campo di testo) o un elenco (un elenco di valori che possono essere selezionati).';

$GLOBALS["lang"]['Types of Networks'] = 'Tipi di reti';

$GLOBALS["lang"]['URL'] = 'URL pagina';

$GLOBALS["lang"]['uuid'] = 'UU';

$GLOBALS["lang"]['UUID'] = 'UU';

$GLOBALS["lang"]['udp_ports'] = 'Porte Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Porte Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ucraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ucraino';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 audit (recensione documentale)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 audit (rivista sull\'attuazione)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Analisi in corso';

$GLOBALS["lang"]['Unfiltered'] = 'Non filtrato';

$GLOBALS["lang"]['uninstall'] = 'Disinstallare';

$GLOBALS["lang"]['Uninstall'] = 'Disinstallare';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Disinstallare l\'agente';

$GLOBALS["lang"]['United Arab Emirates'] = 'Emirati Arabi Uniti';

$GLOBALS["lang"]['United Kingdom'] = 'Regno Unito';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Isole Minori degli Stati Uniti';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Stati Uniti Isole Vergini';

$GLOBALS["lang"]['United States of America'] = 'Stati Uniti d\'America';

$GLOBALS["lang"]['Unknown'] = 'Sconosciuto';

$GLOBALS["lang"]['unlock_pin'] = 'Perno di sblocco';

$GLOBALS["lang"]['Unlock Pin'] = 'Perno di sblocco';

$GLOBALS["lang"]['Unscheduled'] = 'Non programmato';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Non utilizzata a 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Inutilizzato.';

$GLOBALS["lang"]['Update'] = 'Aggiornamento';

$GLOBALS["lang"]['update_external_count'] = 'Aggiornamento Conte esterno';

$GLOBALS["lang"]['Update External Count'] = 'Aggiornamento Conte esterno';

$GLOBALS["lang"]['update_external_from_internal'] = 'Aggiornamento esterno da interno';

$GLOBALS["lang"]['Update External From Internal'] = 'Aggiornamento esterno da interno';

$GLOBALS["lang"]['update_internal_count'] = 'Aggiornamento conteggio interno';

$GLOBALS["lang"]['Update Internal Count'] = 'Aggiornamento conteggio interno';

$GLOBALS["lang"]['update_internal_from_external'] = 'Aggiornamento interno da esterno';

$GLOBALS["lang"]['Update Internal From External'] = 'Aggiornamento interno da esterno';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Aggiornare i dispositivi NMIS da Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Aggiornamento Open-AudIT Dispositivi da ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Aggiornamento Open-AudIT Dispositivi di NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Aggiornamento delle vulnerabilità';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Aggiornare un attributo di una voce {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'attributi di aggiornamento';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Aggiornato ogni volta che la scoperta è stata eseguita con gli IP rilevati per rispondere.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aggiornato ogni volta la scoperta è stata eseguita con gli IP che sono stati scansionati da Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Aggiornato ogni volta che la scoperta è stata eseguita con i dispositivi che siamo stati in grado di controllare.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Aggiornato ogni volta la scoperta è stata eseguita con i dispositivi che siamo stati in grado di query.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Aggiornato ogni volta che la scoperta è stata eseguita.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aggiornato ogni volta che la scoperta è stata eseguita.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aggiornato ogni volta che la scoperta ha completato l\'esecuzione.';

$GLOBALS["lang"]['Updating'] = 'Aggiornamento';

$GLOBALS["lang"]['Upgrade'] = 'Aggiornamento';

$GLOBALS["lang"]['Upload an audit result file'] = 'Caricare un file dei risultati di audit';

$GLOBALS["lang"]['Upper Case'] = 'Caso superiore';

$GLOBALS["lang"]['uptime'] = 'Tempo libero';

$GLOBALS["lang"]['Uptime'] = 'Tempo libero';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Ur';

$GLOBALS["lang"]['Url'] = 'Ur';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Repubblica orientale';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Uso';

$GLOBALS["lang"]['Use'] = 'Uso';

$GLOBALS["lang"]['use_authentication'] = 'Utilizzare l\'autenticazione';

$GLOBALS["lang"]['Use Authentication'] = 'Utilizzare l\'autenticazione';

$GLOBALS["lang"]['use_authorisation'] = 'Utilizzo dell\'autorizzazione';

$GLOBALS["lang"]['Use Authorisation'] = 'Utilizzo dell\'autorizzazione';

$GLOBALS["lang"]['Use Proxy'] = 'Utilizzare il proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Utilizzare SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Utilizzare SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utilizzare Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Utilizzare la versione di servizio';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Utilizzare la versione di servizio. Quando una porta rilevata viene rilevata come aperta, se impostata a <i>#</i>, Nmap query il dispositivo di destinazione nel tentativo di determinare la versione del servizio in esecuzione su questa porta.<br/>Questo può essere utile quando si identificano dispositivi non classificati. Questo non era precedentemente usato.';

$GLOBALS["lang"]['Use WMI'] = 'Utilizzare WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Utilizzare un <i>Metodo di iscrizione</i> di OIDC - OpenID Connect e un <i>Tipo di applicazione</i> di Applicazione Web. Fare clic <i>Il prossimo</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Utilizzare per l\'autenticazione';

$GLOBALS["lang"]['Use for Roles'] = 'Utilizzare per Roles';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Utilizzare le opzioni di installazione standard quando visualizzato e fare clic su <i>Sono d\'accordo</i>♪ <i>Il prossimo</i> e <i>Installazione</i> pulsanti per installare Nmap.';

$GLOBALS["lang"]['used'] = 'Usato';

$GLOBALS["lang"]['Used'] = 'Usato';

$GLOBALS["lang"]['used_count'] = 'Conte Usato';

$GLOBALS["lang"]['Used Count'] = 'Conte Usato';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Usato solo da OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Utilizzato internamente quando si scopre un singolo dispositivo.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Utilizzato internamente quando si scopre un singolo dispositivo. Collegamenti a <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Utilizzato quando i server LDAP sono stati configurati per popolare i dettagli degli utenti - questo include gli Org a cui hanno accesso. Se un utente è in questo gruppo LDAP, viene assegnato questo org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Utilizzato quando i server LDAP sono stati configurati per popolare i dettagli degli utenti - questo include i Roles che vengono assegnati. Se un utente è in questo gruppo LDAP, viene assegnato questo ruolo.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Utilizzato quando si cerca OpenLDAP per abbinare un utente uid a un gruppo di membri. Predefinizione <code>memberUid</code>. Usato solo da OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Utilizzato con Integrazioni e applicazioni di monitoraggio FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Utilizzato con Integrazioni e applicazioni di monitoraggio FirstWave. Impostare a voi se funziona SNMP rilevato dalla scoperta.';

$GLOBALS["lang"]['user'] = 'Utente';

$GLOBALS["lang"]['User'] = 'Utente';

$GLOBALS["lang"]['User DN'] = 'Utente DN';

$GLOBALS["lang"]['user_group'] = 'Gruppo utenti';

$GLOBALS["lang"]['User Group'] = 'Gruppo utenti';

$GLOBALS["lang"]['user_id'] = 'ID utente';

$GLOBALS["lang"]['User ID'] = 'ID utente';

$GLOBALS["lang"]['user_interaction'] = 'Interazione utente';

$GLOBALS["lang"]['User Interaction'] = 'Interazione utente';

$GLOBALS["lang"]['User Membership Attribute'] = 'Attribuzione degli utenti';

$GLOBALS["lang"]['user_name'] = 'Nome utente';

$GLOBALS["lang"]['User Name'] = 'Nome utente';

$GLOBALS["lang"]['User Policies'] = 'Criteri utente';

$GLOBALS["lang"]['Username'] = 'Nome utente';

$GLOBALS["lang"]['username'] = 'Nome utente';

$GLOBALS["lang"]['users'] = 'Utenti';

$GLOBALS["lang"]['Users'] = 'Utenti';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Gli utenti lavorano come Netstat Ports. Se un utente esiste con un nome corrispondente, dati di stato e password (cambiabile, scade, richiesto) allora il criterio passa.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Utenti, ruoli e org';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Utilizza il CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Utilizzo';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Utilizzo dell\'ingresso per Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Utilizzo di LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Utilizzo di OKTA per Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Utilizzando l\'opzione di formato è utile quando si utilizza un browser web, ma si desidera vedere il risultato in formato JSON. Aggiungendo formato=json ottiene questo. Normalmente un browser web imposta la sua intestazione di accettare in HTML, quindi in questo caso, ritorniamo la pagina resid. Utilizzando un API per recuperare JSON si dovrebbe impostare l\'intestazione di accettare';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Di solito Mbs, dalla posizione A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Di solito Mbs, dalla posizione B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Di solito Mbs, alla posizione A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Di solito Mbs, alla posizione B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Di solito dovrebbe essere impostato su 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'VENDITA';

$GLOBALS["lang"]['VLAN ID'] = 'ID VLAN';

$GLOBALS["lang"]['valid_from'] = 'Valido da';

$GLOBALS["lang"]['Valid From'] = 'Valido da';

$GLOBALS["lang"]['valid_from_raw'] = 'Valido da Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Valido da Raw';

$GLOBALS["lang"]['valid_to'] = 'Valido per';

$GLOBALS["lang"]['Valid To'] = 'Valido per';

$GLOBALS["lang"]['valid_to_raw'] = 'Valido a crudo';

$GLOBALS["lang"]['Valid To Raw'] = 'Valido a crudo';

$GLOBALS["lang"]['Valid Values'] = 'Valori validi';

$GLOBALS["lang"]['value'] = 'Valore';

$GLOBALS["lang"]['Value'] = 'Valore';

$GLOBALS["lang"]['Value Types'] = 'Tipi di valore';

$GLOBALS["lang"]['values'] = 'Valori';

$GLOBALS["lang"]['Values'] = 'Valori';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Valori: In caso di <i>elenco</i> campo, questo dovrebbe essere un elenco separato da virgola di valori validi.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabile';

$GLOBALS["lang"]['Variable'] = 'Variabile';

$GLOBALS["lang"]['Various'] = 'Variazione';

$GLOBALS["lang"]['vendor'] = 'Venditore';

$GLOBALS["lang"]['Vendor'] = 'Venditore';

$GLOBALS["lang"]['Vendor Report'] = 'Rapporto del venditore';

$GLOBALS["lang"]['vendors'] = 'Venditore';

$GLOBALS["lang"]['Vendors'] = 'Venditore';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Versione';

$GLOBALS["lang"]['version_padded'] = 'Versione imbottita';

$GLOBALS["lang"]['Version Padded'] = 'Versione imbottita';

$GLOBALS["lang"]['version_raw'] = 'Versione cruda';

$GLOBALS["lang"]['Version Raw'] = 'Versione cruda';

$GLOBALS["lang"]['version_string'] = 'Versione String';

$GLOBALS["lang"]['Version String'] = 'Versione String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamita';

$GLOBALS["lang"]['View'] = 'Vista';

$GLOBALS["lang"]['View All'] = 'Vedi tutto';

$GLOBALS["lang"]['View Details'] = 'Visualizza dettagli';

$GLOBALS["lang"]['View Device'] = 'Visualizza dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Visualizza Discovery';

$GLOBALS["lang"]['View Policy'] = 'Politica di visualizzazione';

$GLOBALS["lang"]['View Racks'] = 'Visualizza Rack';

$GLOBALS["lang"]['View the'] = 'Vedi il';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Visualizza la scoperta in questione, quindi fare clic sul pulsante Supporto nella barra degli strumenti in alto a destra. Questo fornirà le impostazioni di scoperta, gli elementi di configurazione, l\'elenco dei dispositivi di scoperta e i registri per questa particolare scoperta.';

$GLOBALS["lang"]['View the release notes on the'] = 'Visualizza le note di rilascio';

$GLOBALS["lang"]['Virtual Private Network'] = 'Rete privata virtuale';

$GLOBALS["lang"]['Virtual private network'] = 'Rete privata virtuale';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizzazione';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visita il nostro canale YouTube per i video didattici.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'ID Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'ID Vlan';

$GLOBALS["lang"]['vm'] = 'V';

$GLOBALS["lang"]['Vm'] = 'V';

$GLOBALS["lang"]['vm_device_id'] = 'ID dispositivo Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID dispositivo Vm';

$GLOBALS["lang"]['vm_group'] = 'Gruppo Vm';

$GLOBALS["lang"]['Vm Group'] = 'Gruppo Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Nome del server Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nome del server Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Stato di Vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Stato di Vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerabilità';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerabilità';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilità Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilità Cache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Disponibilità e risultati';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilità inizialmente pubblicata prima del 1° gennaio 2025 (per impostazione predefinita). Non vediamo alcun senso nel restituire le vulnerabilità da anni precedenti. Questo può essere modificato nella configurazione.';

$GLOBALS["lang"]['vulnerability_id'] = 'ID vulnerabilità';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID vulnerabilità';

$GLOBALS["lang"]['Vulnerability Status'] = 'Stato di vulnerabilità';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'AVVERTENZA - Quando si crea una linea di base utilizzando le politiche software, al momento Centos e RedHat imballano il kernel utilizzando i nomi <i>kernel</i> e <i>kernel-devel</i>. Ci possono essere più pacchetti con questo nome e diverse versioni contemporaneamente installato. Le distribuzioni basate su Debian usano nomi come <i>Linux-image-3.13.0-24-generic</i>, nota il numero di versione è incluso nel nome del pacchetto. Poiché i sistemi operativi basati su RedHat utilizzano questo formato e successivamente hanno più nomi identici di pacchetto con diverse versioni, attualmente escludiamo <i>kernel</i> e <i>kernel-devel</i> dalle politiche software. Questo può essere affrontato in un futuro aggiornamento.';

$GLOBALS["lang"]['WHERE'] = 'DOVE';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials Requisiti';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Attendere che venga completato, quindi incollare in questa riga successiva per installare l\'agente.';

$GLOBALS["lang"]['wall_port'] = 'Porto di parete';

$GLOBALS["lang"]['Wall Port'] = 'Porto di parete';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis e Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Vuoi saperne di più?';

$GLOBALS["lang"]['Warning'] = 'Avvertenza';

$GLOBALS["lang"]['warranty'] = 'Garanzia';

$GLOBALS["lang"]['Warranty'] = 'Garanzia';

$GLOBALS["lang"]['warranty_duration'] = 'Durata della garanzia';

$GLOBALS["lang"]['Warranty Duration'] = 'Durata della garanzia';

$GLOBALS["lang"]['warranty_expires'] = 'Scadenze di garanzia';

$GLOBALS["lang"]['Warranty Expires'] = 'Scadenze di garanzia';

$GLOBALS["lang"]['warranty_status'] = 'Stato di garanzia';

$GLOBALS["lang"]['Warranty Status'] = 'Stato di garanzia';

$GLOBALS["lang"]['warranty_type'] = 'Tipo di garanzia';

$GLOBALS["lang"]['Warranty Type'] = 'Tipo di garanzia';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Abbiamo anche un\'opzione per Ping Before Scan (importante per i router con cache ARP di lunga durata). Di solito e\' una buona idea.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Abbiamo anche i nostri articoli di azione (che vengono eseguiti nell\'ordine sottostante):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Ci viene spesso chiesto questa domanda e la risposta è sicuramente <i>dipende</i>. Dipende dal numero di IP da scansionare, dalla velocità di connessione di rete, dalla velocità dei dispositivi in fase di scansione, dal tipo di dispositivi in fase di scansione, dal numero di diverse credenziali in fase di test e dalla velocità del server Open-AudIT. Non abbiamo una calcolatrice che ci permetta di inserire quelle variabili e restituire un valore. È semplicemente troppo complesso. Generalmente limito le mie scoperte a 256 indirizzi IP - vale a dire, una subnet /24. Abbiamo avuto clienti scan /16 subnet (65k indirizzi) e funziona - ma può richiedere molto tempo. Sei molto meglio fuori scansione in /24 blocchi. Se semplicemente non sai quali sono i tuoi indirizzi, allora questo è un buon caso per una scoperta di Seed.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Abbiamo istruzioni più dettagliate su';

$GLOBALS["lang"]['We have tests for:'] = 'Abbiamo dei test per:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Speriamo che tu trovi Open-AudIT utile come noi.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Inizialmente abbiamo impostato l\'elenco predefinito degli script con le opzioni predefinite. L\'elenco degli script è visibile a /scripts. Questi script di default non possono essere eliminati. È possibile creare script aggiuntivi per l\'uso da voi come richiesto. Il vostro script sarà basato su uno degli script esistenti e hanno opzioni personalizzate applicate. Gli script possono quindi essere scaricati dalla pagina della lista al menu: Audit Scripts -> Lista Script Audit.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Abbiamo bisogno di alcune credenziali per poter parlare efficacemente con i dispositivi della rete.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Inviamo solo la quantità minima di dati e niente di una natura sensibile. Inviamo i nostri dati di licenza (nome, tipo, ecc), i nostri dati di applicazione (nome, versione, piattaforma, fuso orario, ecc), eventuali errori registrati, un conteggio dei tipi di dispositivo e un conteggio delle funzionalità utilizzate. <i>Qualsiasi</i> ambiente ha dispositivi e questo è l\'unico pezzo dei tuoi dati che inviamo. E solo il tipo di dispositivo e un conteggio. Non il produttore, non il modello. Non inviamo niente di speciale. Niente reti. Nessun indirizzo IP. Nessuna versione del sistema operativo. Nessun nome di software. I campi UUID e Server sono codificati sha256 (quindi non conosciamo il valore). Inviamo solo i dati che dobbiamo migliorare il prodotto. Speriamo che tu veda il beneficio a tutti noi con queste informazioni. Ci fornirà direzione guidata su dove focalizzare miglioramenti e nuove funzionalità nel prodotto.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'tendiamo a utilizzare l\'estensione Google Chrome chiamato Postman per testare query reali riposanti. Ti piacerebbe installare e testare con questo.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Percorsi di applicazione Web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Sito web';

$GLOBALS["lang"]['Wednesday'] = 'Mercoledì';

$GLOBALS["lang"]['weight'] = 'Peso';

$GLOBALS["lang"]['Weight'] = 'Peso';

$GLOBALS["lang"]['weight_current'] = 'Corrente di peso';

$GLOBALS["lang"]['Weight Current'] = 'Corrente di peso';

$GLOBALS["lang"]['weight_empty'] = 'Peso vuoto';

$GLOBALS["lang"]['Weight Empty'] = 'Peso vuoto';

$GLOBALS["lang"]['weight_max'] = 'Peso massimo';

$GLOBALS["lang"]['Weight Max'] = 'Peso massimo';

$GLOBALS["lang"]['Welcome'] = 'Benvenuto';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Benvenuto Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Benvenuto';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara occidentale';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Cosa posso aspettarmi se non ho Credenziali';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'E i campi che voglio da NMIS che non sono in Open-AudIT? Ti abbiamo coperto. Eventuali campi nel sistema esterno (NMIS) che non esistono in Open-AudIT verranno creati automaticamente come campi personalizzati Open-AudIT.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'E altri dispositivi di rete? Pensare switch, router, stampanti, ecc. Ovviamente, è meglio se è possibile fornire alcune credenziali SNMP per questi dispositivi. Hanno solo bisogno di <i>sola lettura</i> accesso. Ma se non si vuole fare anche questo, non c\'è nulla che ti impedisce di eseguire la scoperta, trovare i dispositivi, e fare una regola o due per identificarli (forse utilizzare MAC Indirizzo prefisso in combinazione con porte aperte, per esempio). Non avrai molte informazioni, ma saprai che sono sulla rete, cosa sono, e quando l\'ultima volta che sono stati visti era. Vedrete anche se qualcosa di nuovo appare sulla rete.';

$GLOBALS["lang"]['What do we send?'] = 'Cosa inviamo?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Cosa significa per te?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Qual è lo scopo di questo rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Qual è il tipo di questa posizione. Tipologie ammissibili detenute <code>attributes</code> tavolo.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Quando Open-AudIT su Linux scopre una macchina Windows, per eseguire un comando remoto che utilizziamo';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Quando Open-AudIT su Windows scopre una macchina Windows, al fine di eseguire un comando remoto che utilizziamo';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Quando Open-Aud IT riceve dati su un dispositivo, sia scoprendo il dispositivo durante un\'esecuzione di audit o dall\'utente che importa il dispositivo, deve determinare se questo dispositivo scoperto corrisponde a un dispositivo che esiste già all\'interno del suo database, o se è un nuovo dispositivo che dovrebbe essere aggiunto. Open-AudIT utilizza una serie di dodici partite di proprietà per determinare questo. Le regole di corrispondenza funzionano come confronto O, non E. Ciò significa che la prima regola che corrisponde a un campo nel dispositivo scoperto a uno nel dB si risolve come un dispositivo esistente. Tutte le regole di corrispondenza devono fallire in modo che un dispositivo sia nuovo e si traduca in un nuovo record creato.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Quando i dati POSTing, è necessario includere un token di accesso. Un gettone di accesso viene generato con ogni tipo di richiesta, quindi fare un GET (ad esempio) e accettare: applicazione/json, parse la risposta per meta→access_token, e includere quello con la vostra richiesta. Questo dovrebbe essere inserito nei dati del campo[access_token], IE, il livello superiore.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Quando un dispositivo viene scoperto lo script di audit verrà iniettato con i dettagli del file (o della directory). Sia audit_linux.sh che audit_windows.vbs saranno popolati, indipendentemente dal percorso del file. Se stai pensando <i>ma mettere un percorso Linux in una macchina Windows romperà le cose!</i>, non si rompe, non si riceve alcun dato da quel file o voce directory.<br/>I dettagli recuperati saranno memorizzati nel <i>file</i> tabella del database e vengono memorizzati come qualsiasi altro attributo. I dettagli del file saranno memorizzati come qualsiasi altro attributo e generare avvisi se uno dei seguenti attributi cambia - <i>nome completo</i>♪ <i>Ha</i>♪ <i>Inode</i>♪ <i>Ultimo aggiornamento</i>. La tabella contiene un system_id, first_seen, last_seen e colonne attuali, nonché i dettagli del file.<br/>Gli attributi registrati sono:<br/><ul><li>Windows - nome, dimensione, directory, hash SHA1 (del contenuto del file), modificato da ultimo, autorizzazioni, proprietario, versione (file permettendo).</li><br/><li>Linux - nome, dimensione, directory, SHA1 hash (del contenuto del file), modificato l\'ultima volta, meta dati modificati, autorizzazioni, proprietario, gruppo, inode.</li></ul>Vedrete una sezione sia negli script di audit di Windows che Linux come di seguito';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Quando viene eseguita una scoperta, viene scelta l\'opzione di scansione della scoperta e queste impostazioni vengono utilizzate da Nmap per la scansione dei dispositivi di destinazione. Le opzioni di scansione determinano le scansioni di nmap, la velocità di scansione e se nmap ping viene utilizzato per la prima volta per determinare se l\'IP è vivo o meno.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Quando viene eseguita una scoperta, viene scelta l\'opzione di scansione della scoperta e quelle impostazioni utilizzate da Nmap per la scansione dei dispositivi di destinazione. Se non viene scelta alcuna opzione, viene selezionato e utilizzato l\'elemento di configurazione predefinito (discovery_default_scan_option). Open-AudIT Community utilizzerà le opzioni predefinite secondo la configurazione per tutte le scoperte.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Quando viene eseguita una scoperta subnet, viene eseguita per la prima volta, se selezionata, una scansione Nmap ping sull\'intervallo o gli indirizzi IP. Qualsiasi dispositivo di risposta verrà scansionato. Se non è richiesta una scansione Ping Nmap, ogni IP viene scansionato singolarmente. Quali porti? Questo è determinato dal';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Quando si verifica un dispositivo Linux tramite SSH, alcune distribuzioni Linux non consentono di passare i comandi sudo senza TTY (che stiamo facendo). Per controllare completamente una di queste distribuzioni linux è meglio fornire le credenziali utente root. Se nessuna radice viene fornita e sudo senza TTY non è possibile, lo script di audit verrà eseguito ma non conterrà la quantità di dati come altrimenti. Gli audit successivi utilizzando root (o eseguire localmente utilizzando sudo) forniranno quindi ulteriori dettagli sul sistema e genereranno diversi <i>modifiche</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Quando si combinano dispositivi, quale sistema è la fonte autorevole per le informazioni.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Quando completato, chiudi la finestra di comando e hai finito!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Quando si crea un widget, se si seleziona il <i>Avanzato</i> pulsante si avrà la possibilità di caricare il proprio SQL personalizzato.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Quando si integrano dispositivi dal sistema esterno, se il dispositivo non esiste in Open-AudIT dovremmo crearlo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Quando si integrano dispositivi dal sistema esterno, se il dispositivo è stato aggiornato nel sistema esterno dovremmo aggiornarlo in Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Quando si indaga su una Discovery, il supporto richiederà i registri di scoperta esportati. Per recuperarli, vai al menu -> Scoperte ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Quando si abbina un dispositivo basato su Linux, preferiamo usare il Dbus id concatenato con il nome host. Possiamo anche utilizzare altre opzioni come per la tabella sottostante, ma possiamo recuperare l\'ID Dbus senza radice. Per recuperare l\'UUUID (dalla scheda madre), abbiamo bisogno di eseguire dmidecode, che richiede root. Purtroppo, quando si clona un ospite ESXi, il Dbus ID non viene ricreato - quindi il nostro concatenando questo con il nome host. C\'è un buon articolo legato qui che dettagli <i>perché</i> di ID hardware.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Quando si richiede JSON, per impostazione predefinita non viene impostato alcun limite. Quando si richiede la visualizzazione dello schermo, il limite è impostato a 1000 per impostazione predefinita. Questo può essere modificato nella configurazione. Vedere la <i>page_size</i> Articolo';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Quando si recupera un dispositivo esterno, si dovrebbe eseguire la scoperta su di esso?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Quando si esegue Open-AudIT su Windows l\'account di servizio Apache deve essere quello di un <i>regolare</i> utente (o amministratore). Questo è perché <i>Sistema locale</i> account normalmente utilizzato per eseguire Apache non ha accesso a risorse di rete. IE - Non possiamo usare Apache quando si esegue come account di sistema locale per copiare lo script di audit su PC Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Quando l\'opzione di configurazione è impostata, prendiamo questo in considerazione per i dispositivi per un certo sottoinsieme definito di regole di corrispondenza in cui l\'elemento di configurazione è stato abilitato. Queste regole sono:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Quando le regole vengono eseguite alla scoperta, qualsiasi regola corrispondente apparirà nel registro di scoperta. Vedere di seguito per un esempio.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Quando questo benchmark deve essere eseguito. Derivato dal associato <code>tasks.type</code> e <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quando questo registro è stato creato.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Quando questa voce di coda ha iniziato l\'elaborazione.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Quando si utilizza Open-AudIT Professional o Enterprise, i widget sono disponibili e personalizzabili da visualizzare su Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Quando stiamo convertendo un dispositivo selezionato internamente a un oggetto per il sistema esterno, cosa dovrebbero essere i dati esterni. EG: integer, stringa, ecc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Quando eseguiamo questa linea di base, dobbiamo controllare gli elementi su dispositivi che non sono in una politica per questa linea di base.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Quando riceviamo una porta aperta, dovremmo tentare di testare la versione del servizio attualmente in esecuzione su di esso? Questo aiuta a confermare i servizi di esecuzione effettivi.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Quando si utilizza Clouds per scoprire le istanze Amazon AWS, avrete bisogno di due elementi credenziali - chiave e chiave segreta. La vostra chiave dovrebbe già essere conosciuta a voi e la vostra chiave segreta pure. Di nota è che non è possibile recuperare la chiave segreta utilizzando la console AWS fornito da Amazon. Se lo avete spostato male, è necessario generare una nuova.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Quando si utilizza Clouds per scoprire le istanze di Microsoft Azure, avrete bisogno di quattro elementi credenziali - abbonamento id, inquilino id, client id e client secret.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Quando si crea una scoperta si ha un\'opzione per dispositivi_assigned_to_org. Ciò significa che tutti i dispositivi scoperti per questa scoperta saranno assegnati (hanno <code>devices.org_id</code> a) l\'Organizzazione prescelta.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Quando si crea una nuova scoperta se si fa clic sul pulsante Avanzato, si hanno molte altre opzioni per cambiare, uno di loro è il tipo di scoperta. I tipi sono sempre stati Subnet (compassando la gamma di cui sopra, subnet, opzioni ip) e Active Directory. Come al v4.1, Open-AudIT ha un nuovo tipo di scoperta chiamato Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Quando si abilita un query ad essere eseguito in un programma, la query viene inviata via email all\'indirizzo scelto. Devi aver impostato e-mail tramite menu -> Admin -> Enterprise -> Email Config. Abbiamo anche un <i>test email<i> pulsante su quella pagina. Inserire i dati, salvarlo e poi testarlo. Dovresti avere una scatola modale che ti informa se ha successo o no e ovviamente un\'email di prova dovrebbe arrivare se ha successo. Una volta configurata l\'email, la richiesta programmata può essere configurata.<br/><br/>Fornire un nome, descrizione facoltativa, scegliere <i>Query</i> digitare, selezionare la query desiderata, fornire un indirizzo e-mail, scegliere un formato e impostare il programma.<br/><br/>Fornire un\'ora (solo ora, nessun minuto ancora), dare all\'attività un nome (questo non è il nome della vera domanda programmata stessa), selezionare quali giorni si desidera l\'esecuzione della query, scegliere quale query si desidera eseguire, fornire un indirizzo e-mail e scegliere un formato di query e si è fatto.<br/>Le domande saranno inviate con un corpo e-mail della query (in formato html) e la query allegata nel formato richiesto.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Quando inserisci il testo in una delle voci della colonna, puoi semplicemente usare una parola normale. Per esempio, quando si entra <code>computer</code> nella casella di ricerca sopra la <i>Tipo</i> colonna, la ricerca restituirà tutti i dispositivi con il tipo di Computer. Essenzialmente, Open-Aud L\'IT richiede dati utilizzando un URL come <code>devices?devices.type=computer</code>. Ora c\'è una differenza significativa quando si utilizza il dataTables ricerca, rispetto allo standard';

$GLOBALS["lang"]['where'] = 'Dove?';

$GLOBALS["lang"]['Where'] = 'Dove?';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Dove $x è un numero. Queste molte voci LDAP sono nel DB e sono state recuperate.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Dove sulla schermata Dettagli dispositivo si desidera vedere questo campo appaiono.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Dove si trova il rack.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Se la vulnerabilità colpisce componenti al di là del proprio uso di impatto, disponibilità e riservatezza.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Se l\'interazione dell\'utente è richiesta (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A quale OS si applica questo benchmark.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Quali dispositivi dovrebbero creare Open-AudIT dal sistema esterno (se presenti). Usando Tutto, Nessuno o un dato Attributo.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Quale rete dovremmo scoprire. Questo dovrebbe essere nel formato di';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Quale sub-menu dovrebbe mostrare questa query dentro.';

$GLOBALS["lang"]['Who made this rack.'] = 'Chi ha fatto questo rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Perché solo Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Perché escludiamo questa politica?';

$GLOBALS["lang"]['Wide Area Network'] = 'Rete di area larga';

$GLOBALS["lang"]['Wide area network'] = 'Rete ampia';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget!';

$GLOBALS["lang"]['Widget # '] = 'Widget! ';

$GLOBALS["lang"]['Widget Type'] = 'Tipo Widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'I widget sono progettati per essere utilizzati su Dashboards. Gli utenti Enterprise hanno la completa libertà di creare, aggiornare ed eliminare i widget come richiesto.';

$GLOBALS["lang"]['width'] = 'Larghezza';

$GLOBALS["lang"]['Width'] = 'Larghezza';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Pacchetti di Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Unità di lavoro utente di Windows #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Unità di lavoro utente di Windows #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows potrebbe anche aver bloccato il servizio dall\'inizio. Sul bersaglio avviare il applet di sicurezza di Windows e garantire che l\'eseguibile WinExeSvc è permesso di eseguire (cliccare Consenti sul dispositivo e quindi avviare azioni).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Pagina di Winexe su Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe richiede l\'avvio e l\'esecuzione dei seguenti servizi Windows: servizi netlogon e rpc da eseguire.<br/><br/>Si prega di accedere alla macchina Windows di destinazione e controllare i servizi per netlogon e rpc sono in esecuzione.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe utilizza l\'amministratore$ e RPC (avvio di servizio in rete) per installare e avviare un servizio remoto (winexesvc). Questo servizio inizializza un tubo chiamato che viene utilizzato per trasportare i comandi dal server Open-AudIT al target e l\'output in senso inverso. Quando è finito, il tubo chiamato si chiude e il winexesvc aspetta ulteriori connessioni o disinstalla (a seconda delle opzioni date).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Rete locale senza fili';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Con il rilascio 3.3.0 di Open-AudIT abbiamo introdotto il concetto di un cluster. Questo mappa intuitivamente all\'idea di un cluster web, cluster di database o cluster di file (o uno degli altri scopi) in un dato tipo (alta disponibilità, ridondanza, scaling, ecc).<br/><br/>A seconda dello scopo del cluster scelto, la segnalazione sarà leggermente diversa.<br/><br/>Ad esempio, se si crea un cluster con uno scopo di virtualizzazione, quando si dispone di dispositivi aggiunti, si vedrà anche le macchine virtuali su quei dispositivi.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Con l\'introduzione della funzione Clouds, è possibile fornire dettagli del cloud, Amazon AWS o Microsoft Azure, e Open-AudIT utilizzerà l\'API pertinente per recuperare un elenco di posizioni, reti e istanze, quindi scoprire ciascuna di queste istanze.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fais';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fais';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Gruppo di lavoro';

$GLOBALS["lang"]['Workgroup'] = 'Gruppo di lavoro';

$GLOBALS["lang"]['Working Credentials'] = 'Credenziali di lavoro';

$GLOBALS["lang"]['Wrap Up'] = '♪';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Scritto nella lingua di scrittura PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Query giallo';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Sì.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Siete in grado di definire directory extra da scansionare come voci nella collezione Executables. Quando definito, la directory e tutte le sottodirectory vengono scansionate per i file eseguibili. Puoi anche definire directory e file da escludere. Quando viene attivato, questi vengono iniettati nello script di audit linux e eseguiti ogni volta che viene eseguito (solitamente come parte di una scoperta). Se si desidera che questi in uno script è possibile copiare manualmente al target, utilizzare il menu -> Scopri -> Scripts -> Elenca Script e scarica lo script da lì.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Sei sempre libero di modificare gli script di audit per soddisfare le tue esigenze specifiche. Dovrai (re) incorporare tali modifiche ogni volta che si aggiorna come saranno sovrascritti dagli script di default. Suggerirei di salvare una copia master del tuo script modificato, aggiornare Open-AudIT, quindi eseguire un diff tra il nuovo script predefinito e il tuo script modificato e applicare le differenze. Gli script di audit sono script nativi (Windows è VBScript, tutti gli altri sono Bash). Semplice e facile da modificare - basta assicurarsi di avere una copia delle modifiche prima di aggiornare.';

$GLOBALS["lang"]['You are running version'] = 'Sei in esecuzione';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'È possibile accedere alla collezione utilizzando la normale API basata su Open-AudIT JSON. Come qualsiasi altra collezione. Per favore.';

$GLOBALS["lang"]['You can also'] = 'Si può anche';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Puoi anche vedere in fondo alla pagina una tabella che mostra i dispositivi a cui verranno applicate le modifiche.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'È inoltre possibile specificare le proprietà utilizzando il formato sottostante.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Puoi sempre eseguire la VM Firstwave sulla tua infrastruttura virtuale (ESX, Azure, et al). La Firstwave VM gestisce Debian linux ed è libera dalle preoccupazioni e dai limiti delle licenze del sistema operativo. Oppure installate sul vostro distro Linux di scelta. Supportiamo Redhat 9, Ubuntu 20.04, 22.04 e 24.04 così come Debian 11 e 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'È possibile assegnare automaticamente i dispositivi a una posizione';

$GLOBALS["lang"]['You can assign devices using custom'] = 'È possibile assegnare dispositivi utilizzando personalizzati';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'È possibile controllare una macchina remota senza l\'utilizzo dell\'account amministratore effettivo creando una chiave di registro. Creare il tasto seguente su ogni macchina da controllare e assicurarsi che le credenziali utente utilizzate sia un membro del gruppo Administrators.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'È possibile eseguire una scoperta senza alcuna valida credenziali sui dispositivi all\'interno della rete, tuttavia, le informazioni recuperate saranno un sottoinsieme molto piccolo di ciò che Open-AudIT ha la capacità di recuperare <i>con</i> credenziali.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'È possibile creare una linea di base, eseguirla contro un gruppo di dispositivi e visualizzare i risultati, aggiungere l\'esecuzione programmata, aggiungere più tabelle per il confronto (attualmente solo software, porte netstat e utenti sono abilitati), in luogo di editing della linea di base, archiviazione dei risultati e altro ancora.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'È possibile creare uno script con tutte le opzioni per uno qualsiasi degli script di audit esistenti - non solo Windows. AIX, ESX, Linux, OSX e Windows sono tutti coperti.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'È possibile personalizzare l\'intera integrazione fino a quale sistema (NMIS o Open-AudIT) è l\'autorità su base per campo. Ci sono opzioni per creare e/o aggiornare i dispositivi in Open-AudIT o NMIS. Dovremmo eseguire una scoperta su un dispositivo creato o aggiornato e molto altro ancora. Ci sono spiegazioni per ogni articolo sul lato destro della pagina.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'È possibile definire un\'applicazione e associare un dispositivo a questa applicazione. Un dispositivo può essere associato a più di un\'applicazione. Un\'applicazione può essere associata a più di un dispositivo.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'È possibile modificare il valore del campo aggiuntivo per ogni singolo dispositivo nella pagina dei dettagli del dispositivo. Visualizza la schermata dei dettagli del dispositivo, apri la sezione contenente il campo e (se hai';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'È possibile limitare il dispositivo Seed Discovery di cadere all\'interno di un set rigoroso di parametri, tra cui: <i>Limitare a Subnet</i> e <i>Limitare a Private</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'È possibile assegnare manualmente i dispositivi utilizzando';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'È possibile sovrascrivere questo fornendo l\'opzione di formato nell\'URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'È possibile selezionare singoli dispositivi facendo clic sulle caselle di controllo sul lato destro o selezionando tutti i dispositivi facendo clic sulla casella di controllo in alto a destra della tabella (sotto il pulsante Modifica che sembra una matita).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'È possibile selezionare i dispositivi da integrare scegliendo qualsiasi attributo nella tabella del sistema (dispositivo) e corrispondente (vedere menu → Admin → Database → Lista Tabelle → sistema per un elenco di campi). Un attributo match può corrispondere solo a un singolo valore.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'È possibile trasformare qualsiasi server in un collettore andando al menu -> Admin -> Collezionisti - > Fare questo installare un Collector. Avrai bisogno di credenziali per accedere al server a cui si riferirà l\'installazione.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'È possibile visualizzare cliccando sull\'icona della vista blu. Puoi anche modificare o eliminare se hai le autorizzazioni.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Non è installata l\'estensione MBString PHP. Questa estensione è richiesta.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Non è installata l\'estensione PHP SNMP. Questa estensione è altamente raccomandato.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Si può desiderare di copiare e incollare questo URL in una e-mail al vostro personale.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Si può desiderare di avere Active Directory o OpenLDAP autenticare i vostri utenti, ma non fornire l\'autorizzazione. Per fare questo, assicurarsi <i>Utilizzare per l\'autenticazione</i> è impostato su Y e <i>Utilizzare per Roles</i> è impostato su N. Le credenziali saranno convalidate da LDAP, ma sarà necessario avere l\'utente già creato e assegnato Roles in Open-AudIT. Anche questo <i>automaticamente</i> si applica';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Si potrebbe aver notato queste regole match sono per gli elementi che potrebbero non essere globalmente unici. Alcuni esempi:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'È necessario eliminare la licenza esistente prima di aggiungere una nuova licenza.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Devi avere delle credenziali SSH per eseguire un benchmark. I seguenti sistemi operativi sono attualmente supportati: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Abbiamo intenzione di espanderci su questi con ulteriori versioni.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'È necessario copiare e incollare l\'intero file nella casella di testo. Nel caso qui sotto, copia TUTTI il testo.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Non dovresti includere i campi edit_by e edit_date. Questi saranno automaticamente impostati.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Si dovrebbe solo cambiare la seconda frase di testo, la';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'È necessario sostituire la colonna richiesta (ad esempio, org_id) per ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'È necessario utilizzare una linea di intestazione contenente i nomi delle colonne che si desidera popolare, quindi le linee di dati sotto di quello.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Dovresti usare solo quelle tabelle che contengono attributi di cui hai bisogno. Di solito uso un\'unione a sinistra. Per esempio';

$GLOBALS["lang"]['You will need a'] = 'Avrai bisogno di';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Avrete bisogno delle porte per WMI sul firewall di Windows aperto su ogni computer Windows di destinazione. Per Windows Server core, assicurarsi di consentire le connessioni firewall come per';

$GLOBALS["lang"]['You will see a list of'] = 'Vedrai una lista di';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutorial di YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'La chiave API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Le credenziali di Google Compute come JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Il tuo Host è';

$GLOBALS["lang"]['Your Licenses'] = 'Le tue licenze';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Il tuo ID client Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Il tuo client Microsoft Azure Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Il tuo ID Abbonamento Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Il tuo ID Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'La tua versione PHP è';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Il tuo SQL per selezionare gli attributi che popolano questa query.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Il tuo SQL per selezionare dispositivi che popolano questo gruppo.';

$GLOBALS["lang"]['Your SSH key.'] = 'La tua chiave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Le tue credenziali di accesso, come per quelle nuvole API native.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'I tuoi dati sono i tuoi dati. Puoi estrarlo quando vuoi. Forniamo anche di aiuto le esportazioni a CSV, JSON e XML. E abbiamo una API JSON. E puoi scrivere report personalizzati e avere quelle uscite in CSV, XML e JSON! Ancora una volta, sono i tuoi dati - non chiunque altro. Puoi essere sicuro che la sicurezza dei tuoi dati sia nelle tue mani.';

$GLOBALS["lang"]['Your database platform is'] = 'La vostra piattaforma di database';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'La vostra descrizione dello stato di questo collegamento (provvisto, ritirato, ecc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'La vostra descrizione di questo articolo.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Il tuo nome generico per questo pezzo di software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'La tua versione generica per questo software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Il tuo utente dovrebbe ora essere in grado di accedere cliccando sul pulsante <i>Logon con ingresso</i> pulsante sulla pagina logon Open-AudIT. Come accennato in precedenza, se il logon non riesce, si prega di controllare il logfile e verificare gli utenti <i>nome utente preferito</i>.<br/><br/>E questo dovrebbe essere tutto quello che c\'è anche. Ora i tuoi utenti dovrebbero avere un meno set di credenziali da ricordare!<br/><br/>Come sempre, se hai problemi con questa funzione, per favore e-mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Il tuo utente dovrebbe ora essere in grado di accedere cliccando sul pulsante <i>Logon con OKTA</i> pulsante sulla pagina logon Open-AudIT. Come accennato in precedenza, se il logon non riesce, si prega di controllare il logfile e verificare gli utenti <i>nome</i>.<br/><br/>E questo dovrebbe essere tutto quello che c\'è anche. Ora i tuoi utenti dovrebbero avere un meno set di credenziali da ricordare!<br/><br/>Come sempre, se hai problemi con questa funzione, per favore e-mail';

$GLOBALS["lang"]['Your web server is'] = 'Il tuo server web è';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'uno String';

$GLOBALS["lang"]['active'] = 'attivo';

$GLOBALS["lang"]['active directory'] = 'directory attiva';

$GLOBALS["lang"]['active/active'] = 'attivo/attivo';

$GLOBALS["lang"]['active/passive'] = 'attivo/passivo';

$GLOBALS["lang"]['advertisement'] = 'pubblicità';

$GLOBALS["lang"]['alert'] = 'avviso';

$GLOBALS["lang"]['all'] = 'Tutto';

$GLOBALS["lang"]['allocated'] = 'assegnata';

$GLOBALS["lang"]['amazon'] = 'Amazzoni';

$GLOBALS["lang"]['an Integer'] = 'un Integer';

$GLOBALS["lang"]['and'] = 'e';

$GLOBALS["lang"]['and / or'] = 'e/o';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'e un biglietto di supporto sarà creato e attivato.';

$GLOBALS["lang"]['and another'] = 'e un altro';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'e scaricare l\'ultimo rilascio auto-installatore. Potrebbe essere necessario scorrere la pagina per trovarlo.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'e vai a Applicazioni -> Applicazioni aziendali (menu a sinistra), quindi fare clic <i>Nuova applicazione</i>.';

$GLOBALS["lang"]['and its current time is'] = 'e il suo tempo attuale è';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'e cerca una data di scadenza della garanzia prima di oggi.';

$GLOBALS["lang"]['and review what is possible.'] = 'e rivedere ciò che è possibile.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'e il segnale URI redirect essere';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'e le linee finali saranno probabilmente di maggior interesse. Queste linee dovrebbero darvi il punto esatto in cui il login è fallito.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'applicazione';

$GLOBALS["lang"]['approved'] = 'approvato';

$GLOBALS["lang"]['are required.'] = 'sono necessari.';

$GLOBALS["lang"]['are used.'] = 'vengono utilizzati.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'come dispositivo che risponde su questa porta.<br/>Ciò ha causato alcuni problemi dei clienti in cui i firewall rispondono per conto di un dispositivo non esistente, e quindi causano il rilevamento di dispositivi falsi positivi. Ora abbiamo questo attributo disponibile per impostare per scansione.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'come punto di riferimento e filtra tutte le macchine virtuali tramite un controllo del sistema. campo seriale per VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'supponendo lavoro e client DNS popolato';

$GLOBALS["lang"]['attribute'] = 'attributo';

$GLOBALS["lang"]['auto'] = 'auto auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'vietato';

$GLOBALS["lang"]['blog'] = 'blog blog blog';

$GLOBALS["lang"]['blue'] = 'blu blu';

$GLOBALS["lang"]['bottom'] = 'inferiore';

$GLOBALS["lang"]['building'] = 'costruzione';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'può essere utilizzato per l\'autenticazione dell\'utente (è il nome utente e la password corretta) così come l\'autorizzazione dell\'utente (quali ruoli e org hanno un utente).<br/><br/>Se un utente non è nel LDAP configurato ma è in Open-AudIT (ad esempio: <i>admin</i> utente), Open-AudIT si arretra all\'utilizzo per l\'autenticazione e l\'autorizzazione.<br/><br/>Open-Aud IT utilizza specifici gruppi LDAP per ruoli e org. Un utente deve essere un membro diretto di questi gruppi (s) al fine di Open-AudIT per determinare l\'accesso degli utenti.<br/><br/>Quando configurato correttamente, l\'uso LDAP può rimuovere completamente la necessità di creare utenti in Open-AudIT. È sufficiente configurare Open-AudIT per utilizzare LDAP sia per l\'autenticazione che per l\'autorizzazione. Se l\'utente non esiste in Open-AudIT ma esiste in LDAP e le sue credenziali sono corrette e sono un membro dei gruppi richiesti Open-AudIT creerà automaticamente l\'account utente.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'può ora recuperare i dettagli su un file o una directory di file e monitorare questi file per le modifiche secondo altri attributi nel database Open-AudIT. Questa funzione funziona dalla casella per i server Linux Open-AudIT, ma ha bisogno di una modifica al nome dell\'account di servizio sotto un server Windows Open-AudIT. I client supportati sono Windows e Linux.';

$GLOBALS["lang"]['changed'] = 'cambiato';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'scelto. Da lì se viene rilevata una porta per WMI, SSH o SNMP che risponde al dispositivo viene ulteriormente interrogata utilizzando ';

$GLOBALS["lang"]['cloud'] = 'cloud cloud';

$GLOBALS["lang"]['code'] = 'codice';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'collezioni e pagine dei dettagli è un\'icona da eseguire.';

$GLOBALS["lang"]['collector'] = 'collezionista';

$GLOBALS["lang"]['collectors'] = 'collezionisti';

$GLOBALS["lang"]['column'] = 'colonna';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'colonna conterrà o <i>#</i> o <i>n</i>. Questo indica se questa riga è attualmente presente sul dispositivo. Per esempio il software può essere installato (che si tradurrà in <i>software.current = y</i>), ma su un controllo successivo potrebbe non essere rilevato. Open-AudIT cambierà questo attributo corrente di righe a <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'colonna. The';

$GLOBALS["lang"]['compute'] = 'computo';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'console';

$GLOBALS["lang"]['contains'] = 'contiene';

$GLOBALS["lang"]['create'] = 'creare';

$GLOBALS["lang"]['created'] = 'creato';

$GLOBALS["lang"]['credentials'] = 'credenziali';

$GLOBALS["lang"]['critical'] = 'critica';

$GLOBALS["lang"]['cve'] = 'c.';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'Debug';

$GLOBALS["lang"]['delegated'] = 'delegato';

$GLOBALS["lang"]['delete'] = 'Cancella';

$GLOBALS["lang"]['deleted'] = 'cancellato';

$GLOBALS["lang"]['denied'] = 'negato';

$GLOBALS["lang"]['details'] = 'dettagli dettagli';

$GLOBALS["lang"]['devices'] = 'dispositivi';

$GLOBALS["lang"]['digitalocean'] = 'digitalizzazione';

$GLOBALS["lang"]['discoveries'] = 'scoperte';

$GLOBALS["lang"]['documentation for further details.'] = 'documentazione per ulteriori dettagli.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'fa <strong>non</strong> fornire report di vulnerabilità per i seguenti';

$GLOBALS["lang"]['does not equal'] = 'non uguale';

$GLOBALS["lang"]['emergency'] = 'emergenza';

$GLOBALS["lang"]['entra'] = 'entra dentro';

$GLOBALS["lang"]['equals'] = 'uguale';

$GLOBALS["lang"]['error'] = 'errore';

$GLOBALS["lang"]['established'] = 'stabilito';

$GLOBALS["lang"]['excluded'] = 'esclusi';

$GLOBALS["lang"]['expired'] = 'scaduto';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'estremo - Senza il quale, l\'organizzazione fallirebbe.

molto alto - Funzioni che sono essenziali per la sopravvivenza delle organizzazioni e devono essere ripristinate immediatamente.

alte - Funzioni importanti che dovrebbero essere ripristinate rapidamente ma possono avere un tempo di recupero leggermente più lungo.

medio - Funzioni che sono necessarie ma possono tollerare tempi di fermo più lunghi.

basso - Funzioni non essenziali che possono essere ritardate senza impatto significativo.

non firmata - Il default fino al set.';

$GLOBALS["lang"]['fail'] = 'fallire';

$GLOBALS["lang"]['false'] = 'falso';

$GLOBALS["lang"]['file'] = 'file';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'primo';

$GLOBALS["lang"]['fixed'] = 'fisso';

$GLOBALS["lang"]['floor'] = 'piano';

$GLOBALS["lang"]['for'] = 'per';

$GLOBALS["lang"]['for authentication'] = 'per l\'autenticazione';

$GLOBALS["lang"]['for this information.'] = 'per queste informazioni.';

$GLOBALS["lang"]['from Audit Script Result'] = 'da Audit Script Result';

$GLOBALS["lang"]['from NMIS'] = 'da NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'dall\'indirizzo LocalHost (Usando LRPC) in esecuzione nel contenitore di applicazione';

$GLOBALS["lang"]['front'] = 'anteriore';

$GLOBALS["lang"]['front-left'] = 'a sinistra';

$GLOBALS["lang"]['front-right'] = 'davanti a destra';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'maggiore o uguale';

$GLOBALS["lang"]['greater than'] = 'maggiore';

$GLOBALS["lang"]['group'] = 'gruppo';

$GLOBALS["lang"]['has not been set'] = 'non è stato impostato';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'hanno un IP risolvibile DNS inverso funzionante al PC Windows di destinazione.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'hanno la capacità di essere giustiziati. Sulla';

$GLOBALS["lang"]['head'] = 'testa';

$GLOBALS["lang"]['here'] = 'Qui.';

$GLOBALS["lang"]['high availability'] = 'elevata disponibilità';

$GLOBALS["lang"]['howto'] = 'come';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'se si clona una macchina virtuale Linux, a meno che non si rigenera manualmente questo (e nella mia esperienza, la gente non) rimarrà lo stesso.';

$GLOBALS["lang"]['ignored'] = 'ignorato';

$GLOBALS["lang"]['import the example device data'] = 'importare i dati del dispositivo di esempio';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'a Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'in Inputs può avere i seguenti valori.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'nelle uscite possono avere i seguenti valori.';

$GLOBALS["lang"]['inactive'] = 'inattivo';

$GLOBALS["lang"]['incomplete'] = 'incompleto';

$GLOBALS["lang"]['info'] = 'Informazioni';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer proverà per la presenza di Nmap nelle sue posizioni di installazione standard di';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, testo, bool (y/n), ecc';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'è lo standard degli Stati Uniti mantenuto dal National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'è uno standard internazionale per la gestione della sicurezza delle informazioni. Esso fornisce un quadro per stabilire, implementare, mantenere e migliorare continuamente un sistema di gestione della sicurezza dell\'informazione (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'è basato su';

$GLOBALS["lang"]['is licensed to'] = 'è autorizzato a';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'è il prossimo nella lista e Open-AudIT può utilizzare password e autenticazione chiave. Open-AudIT può anche utilizzare un utente abilitato sudo al contrario dell\'uso root direttamente (anche se può anche usare root). Per ottenere i migliori risultati, l\'utente root o un utente abilitato sudo dovrebbe essere utilizzato (vedi Auditing Linux senza root e Target Client Configuration sul wiki). I dispositivi Windows possono anche eseguire ssh, tuttavia se Open-AudIT rileva questo si fermerà le query SSH e invece utilizzare WMI (supponendo di lavorare le credenziali WMI).';

$GLOBALS["lang"]['is the link to the'] = 'è il link al';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'elemento per visualizzare le tabelle specifiche e le loro colonne. Questo vi permetterà di trovare esattamente ciò di cui avete bisogno, piuttosto che passare attraverso la console MySQL dello script di creazione dello schema.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'chiave necessaria per recuperare lat/long e visualizzare la mappa. Vedi';

$GLOBALS["lang"]['left'] = 'sinistra';

$GLOBALS["lang"]['less or equals'] = 'meno o uguale';

$GLOBALS["lang"]['less than'] = 'meno di';

$GLOBALS["lang"]['license'] = 'licenza';

$GLOBALS["lang"]['licenses'] = 'licenze';

$GLOBALS["lang"]['like'] = 'come';

$GLOBALS["lang"]['line'] = 'linea';

$GLOBALS["lang"]['list'] = 'elenco';

$GLOBALS["lang"]['list View, using the Create button'] = 'Visualizza, utilizzando il pulsante Crea';

$GLOBALS["lang"]['load balancing'] = 'bilanciamento del carico';

$GLOBALS["lang"]['location'] = 'posizione';

$GLOBALS["lang"]['locations'] = 'Località';

$GLOBALS["lang"]['managed'] = 'gestito';

$GLOBALS["lang"]['methods'] = 'metodi';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punto di fissaggio';

$GLOBALS["lang"]['must'] = 'deve';

$GLOBALS["lang"]['network'] = 'rete';

$GLOBALS["lang"]['news'] = 'notizie';

$GLOBALS["lang"]['no'] = 'No.';

$GLOBALS["lang"]['node'] = 'node';

$GLOBALS["lang"]['none'] = 'Nessuno';

$GLOBALS["lang"]['normal'] = 'normale';

$GLOBALS["lang"]['not applicable'] = 'non applicabile';

$GLOBALS["lang"]['not in'] = 'non in';

$GLOBALS["lang"]['not like'] = 'non mi piace';

$GLOBALS["lang"]['notice'] = 'avviso';

$GLOBALS["lang"]['notification'] = 'notifica';

$GLOBALS["lang"]['okta'] = 'Okta';

$GLOBALS["lang"]['on devices where'] = 'su dispositivi dove';

$GLOBALS["lang"]['openldap'] = 'aperto';

$GLOBALS["lang"]['optimized'] = 'ottimizzato';

$GLOBALS["lang"]['optionally '] = 'facoltativamente ';

$GLOBALS["lang"]['or'] = 'o';

$GLOBALS["lang"]['or the GitHub page at'] = 'o la pagina GitHub';

$GLOBALS["lang"]['other'] = 'altri';

$GLOBALS["lang"]['package'] = 'pacchetto';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'pagina. Esporta il tuo server LDAP dal menu -> Admin -> Server LDAP -> Dettagli a JSON e salvare e includere anche questi dati.';

$GLOBALS["lang"]['partition'] = 'partizione';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'in sospeso';

$GLOBALS["lang"]['performance'] = 'performance';

$GLOBALS["lang"]['performed'] = 'eseguito';

$GLOBALS["lang"]['permission'] = 'permesso';

$GLOBALS["lang"]['permissions required per endpoint'] = 'autorizzazioni richieste per endpoint';

$GLOBALS["lang"]['pie'] = 'Torta';

$GLOBALS["lang"]['planning'] = 'pianificazione';

$GLOBALS["lang"]['predictable'] = 'prevedibile';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'posteriore posteriore';

$GLOBALS["lang"]['rear-left'] = 'posteriore sinistra';

$GLOBALS["lang"]['rear-right'] = 'posteriore destro';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['release'] = 'rilascio';

$GLOBALS["lang"]['removed from display, but has been set'] = 'rimosso dal display, ma è stato impostato';

$GLOBALS["lang"]['reserved'] = 'riservato';

$GLOBALS["lang"]['right'] = 'destra';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'diritti) è possibile fare clic sul valore del campo per modificarlo.';

$GLOBALS["lang"]['role'] = 'ruolo';

$GLOBALS["lang"]['room'] = 'camera';

$GLOBALS["lang"]['row'] = 'riga';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'il servizio non è stato avviato a causa del seguente errore';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'così Open-AudIT sa limitare la vostra query alle Org appropriate.';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'inizia con';

$GLOBALS["lang"]['storage'] = 'stoccaggio';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['table'] = 'tavolo';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tavolo e inserire le righe originali.';

$GLOBALS["lang"]['team'] = 'squadra';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'testo. Il primo è l\'indice di array e dovrebbe essere lasciato come-è. L\'indice viene utilizzato nei modelli per cercare il testo tradotto.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'quindi fare clic sul pulsante dettagli per la tabella.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'quindi fare clic sul pulsante dettagli per la tabella. I dettagli del dispositivo sono memorizzati nel';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

$GLOBALS["lang"]['to'] = 'a';

$GLOBALS["lang"]['to create an item of this type'] = 'per creare un elemento di questo tipo';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'all\'URL, otterrai l\'ingresso completo del database, comprese tutte le tabelle dei componenti, di un dato dispositivo.';

$GLOBALS["lang"]['to the user'] = 'all\'utente';

$GLOBALS["lang"]['top'] = 'superiore';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - classificazione militare / governo. La divulgazione causerebbe un grave pericolo per la sicurezza nazionale.

segreto - Classificazione militare / governo. La divulgazione causerebbe gravi danni alla sicurezza nazionale.

confidenziale - Classificazione militare / Governo e settore privato. I dati riservati includono segreti commerciali, dati intellettuali, codice di programmazione delle applicazioni e altri dati che potrebbero influenzare seriamente l\'organizzazione se si verificasse la divulgazione non autorizzata. I dati a questo livello sarebbero disponibili solo al personale dell\'organizzazione il cui lavoro ha bisogno, o è direttamente correlato, dei dati accessibili. L\'accesso ai dati riservati richiede solitamente l\'autorizzazione per ogni accesso.

privato - classificazione del settore privato. I dati privati comprendono tutte le informazioni relative al personale, tra cui i registri delle risorse umane, i registri medici e le informazioni salariali, che vengono utilizzati solo all\'interno dell\'organizzazione.

sensibile - classificazione militare / governo e settore privato. I dati sensibili includono informazioni finanziarie organizzative e richiedono misure extra per garantire la sua CIA e precisione. La divulgazione potrebbe danneggiare la sicurezza nazionale.

pubblico - Classificazione settore privato. I dati pubblici sono dati che sono generalmente condivisi con il pubblico e non causano un impatto negativo sull\'organizzazione. Esempi di dati pubblici includono quante persone lavorano nell\'organizzazione e quali prodotti un\'organizzazione produce o vende.

non classificato - classificazione militare / governo. Tutte le informazioni che possono essere distribuite al pubblico senza alcuna minaccia per gli interessi nazionali.

non firmata - Il default fino al set.';

$GLOBALS["lang"]['traffic'] = 'traffico';

$GLOBALS["lang"]['true'] = 'vero';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'vero o falso (nel contesto JSON)';

$GLOBALS["lang"]['unallocated'] = 'non legato';

$GLOBALS["lang"]['unauthorised'] = 'non autorizzato';

$GLOBALS["lang"]['unchanged'] = 'invariato';

$GLOBALS["lang"]['unknown'] = 'sconosciuto';

$GLOBALS["lang"]['unmanaged'] = 'non gestiti';

$GLOBALS["lang"]['unused'] = 'inutilizzato';

$GLOBALS["lang"]['update'] = 'aggiornamento';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'utilizza i dati raccolti dai dispositivi e corrisponde al software installato con il valore fornito, conta le partite calcola quante licenze sono state utilizzate e quante sono rimaste. Consente l\'uso di jolly sul <i>stringa di corrispondenza</i> campo che corrisponde al software. nome attributo.';

$GLOBALS["lang"]['using the main menu items.'] = 'utilizzando i menu principali.';

$GLOBALS["lang"]['valid'] = 'valido';

$GLOBALS["lang"]['version'] = 'versione';

$GLOBALS["lang"]['virtualisation'] = 'virtualizzazione';

$GLOBALS["lang"]['warning'] = 'avvertimento';

$GLOBALS["lang"]['web'] = 'web web web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'con le autorizzazioni locali e remote impostate.';

$GLOBALS["lang"]['with devices::update permission.'] = 'con dispositivi::aggiornamento del permesso.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'con il Sign-On Redirect URI essere';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'con l\'intenzione di fornire un accesso semplice e intuitivo in modo familiare agli sviluppatori. Oltre a questa API, l\'interfaccia web utilizzerà lo stesso formato di richiesta e fornirà alcune azioni aggiuntive (ad esempio: moduli HTML per la creazione di elementi).';

$GLOBALS["lang"]['yes'] = 'Sì.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'non è necessario una licenza HighCharts per utilizzare i prodotti Firstwave. Licenza';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'assegnerà qualsiasi dispositivo trovato a quella Org o Location.';

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

