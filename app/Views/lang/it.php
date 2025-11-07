<?php
$GLOBALS["lang"][' Default, currently '] = ' Predefinito, attualmente ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' è ora supportato con un file di lingua. Per cambiare l\'utente per usare questa lingua, fare clic ';

$GLOBALS["lang"][' seconds'] = ' secondi';

$GLOBALS["lang"]['10 Minutes'] = '10 minuti';

$GLOBALS["lang"]['15 Minutes'] = '15 minuti';

$GLOBALS["lang"]['30 Minutes'] = '30 minuti';

$GLOBALS["lang"]['5 Minutes'] = '5 minuti';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>NOTA</strong> - Accedete a questo URL dal server locale Open-AudIT. Lo script scaricato non sarà in grado di inviare quando viene eseguito su qualsiasi altra macchina. Se è necessario controllare altre macchine, si prega di scaricare lo script da qualsiasi macchina remota, non utilizzando un browser sul server Open-AudIT stesso.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'Un URL a un file da scaricare.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un campo calcolato che visualizza il numero di volte che questo pezzo di software è stato trovato sui computer nel Org selezionato (e i suoi discendenti se configurati).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un collettore è in modalità Collector o Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Un elenco separato da virgola dei CVE applicabili.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Un elenco separato da virgola di valori, uno dei quali può essere selezionato.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un comando da eseguire. Quando l\'agente è basato su Windows, questo comando viene eseguito dall\'interno dell\'agente Powerhell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Un elenco di porte TCP personalizzate da scansionare (22 è SSH, 135 è WMI, 62078 è sincronizzazione iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Un elenco di porte UDP personalizzate da scansionare (161 è SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un numero inferiore significa che verrà applicato prima di altre regole.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un numero inferiore significa che verrà applicato prima di altre regole. Il peso predefinito è 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Una password (configurata come hash) che consente di accedere quando si utilizza l\'autenticazione dell\'applicazione.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un dominio di routing o uno spazio di indirizzo dove gli indirizzi IP e gli indirizzi MAC sono unici.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Una zona di sicurezza è un dominio amministrativo o un dominio politico all\'interno del dominio di rete.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Una breve descrizione della voce di registro.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Una stringa che corrisponde al <code>software.name</code> attributo. È possibile utilizzare lo standard SQL wildcard del percento (%) per abbinare uno o più caratteri.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Una vulnerabilità che influisce sulla disponibilità può consentire agli aggressori di interrompere i servizi, i sistemi di crash o causare la negazione del servizio (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Una vulnerabilità che influisce sulla riservatezza può consentire agli aggressori di leggere dati sensibili, come informazioni personali, credenziali o dati aziendali proprietari (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Una vulnerabilità che influenza l\'integrità può consentire agli aggressori di modificare i dati, iniettare codice dannoso, o modificare le configurazioni di sistema (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'Gruppo AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, ecc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Tutti gli IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Accesso Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentazione API';

$GLOBALS["lang"]['API Key required.'] = 'Chiave API necessaria.';

$GLOBALS["lang"]['API Result'] = 'Risultato API';

$GLOBALS["lang"]['About'] = 'Informazioni su';

$GLOBALS["lang"]['Accept'] = 'Accettare';

$GLOBALS["lang"]['access_point'] = 'Punto di accesso';

$GLOBALS["lang"]['Access Point'] = 'Punto di accesso';

$GLOBALS["lang"]['access_token'] = 'Token di accesso';

$GLOBALS["lang"]['Access Token'] = 'Token di accesso';

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

$GLOBALS["lang"]['Add image'] = 'Aggiungi immagine';

$GLOBALS["lang"]['additional_items'] = 'Articoli aggiuntivi';

$GLOBALS["lang"]['Additional Items'] = 'Articoli aggiuntivi';

$GLOBALS["lang"]['address'] = 'Indirizzo';

$GLOBALS["lang"]['Address'] = 'Indirizzo';

$GLOBALS["lang"]['Admin'] = 'Amministrazioni';

$GLOBALS["lang"]['admin_status'] = 'Stato di amministrazione';

$GLOBALS["lang"]['Admin Status'] = 'Stato di amministrazione';

$GLOBALS["lang"]['advanced'] = 'Avanzato';

$GLOBALS["lang"]['Advanced'] = 'Avanzato';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agenti';

$GLOBALS["lang"]['Agents'] = 'Agenti';

$GLOBALS["lang"]['Aggressive'] = 'Aggressiva';

$GLOBALS["lang"]['Aland Islands'] = 'Isole Aland';

$GLOBALS["lang"]['Albania'] = 'Albania';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campi';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Una serie di <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Una serie di <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Una serie di oggetti che rappresentano collegamenti esterni a maggiori informazioni.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un documento JSON crittografato contenente gli attributi richiesti in base alla <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Indicazione del livello di servizio richiesto da questo sito.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un campo interno che indica se la scoperta è completata.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Un GeoCode opzionale';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Una password opzionale da usare sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antartide';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua e Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Eventuali porte TCP (comma seperate, senza spazi) che si desidera escludere da questa scoperta. Disponibile solo quando si utilizza Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Eventuali porte UDP (comma seperato, senza spazi) si desidera escludere da questa scoperta. Disponibile solo quando si utilizza Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Qualsiasi documentazione aggiuntiva di cui hai bisogno.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Qualsiasi ulteriore nota che ti interessa fare.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Tutti i dispositivi saranno assegnati a questo Org quando eseguono il loro script di audit (se impostato). Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Qualsiasi dispositivo scoperto sarà assegnato a questa posizione se impostato. Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Tutti i dispositivi scoperti saranno assegnati a questa posizione quando eseguono il loro script di audit (se impostato). Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Qualsiasi dispositivo scoperto verrà assegnato a questo Org se impostato. Se non impostato, sono assegnati al <code>org_id</code> di questa scoperta. Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Qualsiasi filtro richiesto. NOTA: Quando il tipo = traffico, questo rappresenta l\'icona font-awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Eventuali porte TCP specifiche che si desidera testato (comma seperato, senza spazi).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Eventuali porte UDP specifiche che si desidera testato (comma seperato, senza spazi).';

$GLOBALS["lang"]['Application'] = 'Applicazione';

$GLOBALS["lang"]['application_id'] = 'ID di applicazione';

$GLOBALS["lang"]['Application ID'] = 'ID di applicazione';

$GLOBALS["lang"]['Application Licenses'] = 'Licenza d\'applicazione';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Applicazione, Sistema Operativo o Hardware.';

$GLOBALS["lang"]['applications'] = 'Applicazioni';

$GLOBALS["lang"]['Applications'] = 'Applicazioni';

$GLOBALS["lang"]['applied'] = 'Applicato';

$GLOBALS["lang"]['Applied'] = 'Applicato';

$GLOBALS["lang"]['Approved'] = 'Approvazione';

$GLOBALS["lang"]['April'] = 'Aprile';

$GLOBALS["lang"]['architecture'] = 'Architettura';

$GLOBALS["lang"]['Architecture'] = 'Architettura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Sei sicuro di voler eliminare questa voce di input?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Sei sicuro di voler eliminare questo prodotto di output?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Sei sicuro? Questo rimuoverà tutte le voci della coda e impedirà che gli IP rimanenti vengano scoperti.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Sei sicuro? Questo resetterà il conteggio di elaborazione della coda e potrebbe causare il carico sul server.';

$GLOBALS["lang"]['area'] = 'Settore';

$GLOBALS["lang"]['Area'] = 'Settore';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Artìcolo';

$GLOBALS["lang"]['Arp'] = 'Artìcolo';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Come per gli attributi per gli ambienti del dispositivo. Produzione, Formazione, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Assegnare un operatore';

$GLOBALS["lang"]['Assigned To'] = 'Assegnato a';

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

$GLOBALS["lang"]['Attribute'] = 'Attribuzione';

$GLOBALS["lang"]['attributes'] = 'Attributi';

$GLOBALS["lang"]['Attributes'] = 'Attributi';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Il mio PC';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Reult Input';

$GLOBALS["lang"]['Audit Status'] = 'Stato dell\'audit';

$GLOBALS["lang"]['Audit Windows'] = 'Audit di Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Controllare il dispositivo';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autenticazione Passphrase';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaigian';

$GLOBALS["lang"]['BTU Max'] = 'BT1 RT RT RT RT RT RT RT RT';

$GLOBALS["lang"]['BTU Total'] = 'BT1 RT RT RT RT RT RT RT RT';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banca';

$GLOBALS["lang"]['Bank'] = 'Banca';

$GLOBALS["lang"]['Banned'] = 'Banati';

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

$GLOBALS["lang"]['Basic'] = 'Base di base';

$GLOBALS["lang"]['Belarus'] = 'Bielorussia';

$GLOBALS["lang"]['Belgium'] = 'Belgio';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID Benchmark';

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

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Isola di Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasile';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portoghese brasiliano';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Territorio dell\'Oceano Indiano britannico (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Isole Vergini Britanniche';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Modifica';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Attributi del dispositivo di modifica della lampadina';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisiti di business';

$GLOBALS["lang"]['Business Requirements'] = 'Requisiti di business';

$GLOBALS["lang"]['Buy'] = 'Comprare';

$GLOBALS["lang"]['Buy More'] = 'Ulteriori informazioni';

$GLOBALS["lang"]['Buy More Licenses'] = 'Acquista più licenze';

$GLOBALS["lang"]['By'] = '#';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maschera';

$GLOBALS["lang"]['cli_config'] = 'CLI Configurazione';

$GLOBALS["lang"]['CLI Config'] = 'CLI Configurazione';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CENTRO';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calcolato dalla scoperta.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Numero totale calcolato di indirizzi IP validi per questa rete.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calcolato al termine, il tempo necessario per eseguire questo articolo.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene una rappresentazione JSON dei dispositivi in questa integrazione. Ogni link a <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene una rappresentazione JSON dei luoghi in questa integrazione. Ogni link a <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi selezionati da Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi selezionati il sistema esterno.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi da aggiornare nel sistema esterno.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calcolato quando l\'integrazione viene eseguita e contiene il numero di dispositivi aggiornati in Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Cambogia';

$GLOBALS["lang"]['Cameroon'] = 'Camerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Rete di area del campus';

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

$GLOBALS["lang"]['Chad'] = 'Ciad';

$GLOBALS["lang"]['change_id'] = 'Cambia ID';

$GLOBALS["lang"]['Change ID'] = 'Cambia ID';

$GLOBALS["lang"]['change_log'] = 'Cambia Log';

$GLOBALS["lang"]['Change Log'] = 'Cambia Log';

$GLOBALS["lang"]['change_type'] = 'Tipo di cambiamento';

$GLOBALS["lang"]['Change Type'] = 'Tipo di cambiamento';

$GLOBALS["lang"]['check_minutes'] = 'Controllare il processo verbale';

$GLOBALS["lang"]['Check Minutes'] = 'Controllare il processo verbale';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Controllare SSH su questi porti';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Controlla questa porta per qualsiasi servizio SSH.';

$GLOBALS["lang"]['Chile'] = 'Cile';

$GLOBALS["lang"]['China'] = 'Cina';

$GLOBALS["lang"]['Choose'] = 'Scegli';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Scegliere (selezionare OS prima)';

$GLOBALS["lang"]['Choose a Device'] = 'Scegli un dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Scegli un tavolo';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Fare clic sul pulsante Elimina per rimuovere i dispositivi di esempio da Open-AudIT.<br/>Questo rimuoverà i dispositivi sottostanti dal database. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Fare clic sul pulsante Importa qui sotto per popolare Open-AudIT con i dati del dispositivo di esempio.';

$GLOBALS["lang"]['Client ID'] = 'ID cliente';

$GLOBALS["lang"]['client_ident'] = 'Identificazione del cliente';

$GLOBALS["lang"]['Client Ident'] = 'Identificazione del cliente';

$GLOBALS["lang"]['client_secret'] = 'Segreto del cliente';

$GLOBALS["lang"]['Client Secret'] = 'Segreto del cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nome del sito del cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nome del sito del cliente';

$GLOBALS["lang"]['Close'] = 'Chiudi';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Dettagli sul cloud';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'ID cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID cloud';

$GLOBALS["lang"]['cloud_log'] = 'Log Cloud';

$GLOBALS["lang"]['Cloud Log'] = 'Log Cloud';

$GLOBALS["lang"]['cloud_name'] = 'Nome del cloud';

$GLOBALS["lang"]['Cloud Name'] = 'Nome del cloud';

$GLOBALS["lang"]['Cloud Network'] = 'Rete cloud';

$GLOBALS["lang"]['clouds'] = 'Nuvole';

$GLOBALS["lang"]['Clouds'] = 'Nuvole';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Isole Cocos (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Collezionista';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collezionista (UUUID)';

$GLOBALS["lang"]['Collector Name'] = 'Nome del collezionista';

$GLOBALS["lang"]['collector_uuid'] = 'Collezionista Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collezionista Uuid';

$GLOBALS["lang"]['collectors'] = 'Collezionisti';

$GLOBALS["lang"]['Collectors'] = 'Collezionisti';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Colore';

$GLOBALS["lang"]['Color'] = 'Colore';

$GLOBALS["lang"]['column'] = 'Colonna';

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

$GLOBALS["lang"]['comments'] = 'Osservazioni';

$GLOBALS["lang"]['Comments'] = 'Osservazioni';

$GLOBALS["lang"]['commercial'] = 'Commercializzazione';

$GLOBALS["lang"]['Commercial'] = 'Commercializzazione';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complessità dell\'attacco (Low o High).';

$GLOBALS["lang"]['Component Table'] = 'Tabella dei componenti';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componenti (Tutti i dispositivi)';

$GLOBALS["lang"]['Compute'] = 'Computo';

$GLOBALS["lang"]['Condition'] = 'Condizione';

$GLOBALS["lang"]['Config'] = 'Configurazione';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, attualmente ';

$GLOBALS["lang"]['config_file'] = 'File di configurazione';

$GLOBALS["lang"]['Config File'] = 'File di configurazione';

$GLOBALS["lang"]['config_manager_error_code'] = 'Codice di errore di Gestore di conflitto';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Codice di errore di Gestore di conflitto';

$GLOBALS["lang"]['configuration'] = 'Configurazione';

$GLOBALS["lang"]['Configuration'] = 'Configurazione';

$GLOBALS["lang"]['Configure'] = 'Configurazione';

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

$GLOBALS["lang"]['contact'] = 'Contatto';

$GLOBALS["lang"]['Contact'] = 'Contatto';

$GLOBALS["lang"]['contact_name'] = 'Nome di contatto';

$GLOBALS["lang"]['Contact Name'] = 'Nome di contatto';

$GLOBALS["lang"]['contained_in'] = 'Contenuti';

$GLOBALS["lang"]['Contained In'] = 'Contenuti';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contiene un oggetto JSON dettagli i widget associati e le loro posizioni.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contiene i campi che determinano se dovremmo usare opzioni di scoperta ssh, snmp e wmi. Un oggetto JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'ID motore contestuale';

$GLOBALS["lang"]['Context Name'] = 'Nome del testo';

$GLOBALS["lang"]['contractual_obligations'] = 'Obblighi contrattuali';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obblighi contrattuali';

$GLOBALS["lang"]['Cook Islands'] = 'Isole Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copiare e incollare un risultato di audit';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiare e incollare il sotto al forum, un\'altra istanza di Open-AudIT o in qualsiasi altro luogo è necessario fornire questo articolo.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Creare Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Creare un conteggio interno';

$GLOBALS["lang"]['Create Internal Count'] = 'Creare un conteggio interno';

$GLOBALS["lang"]['create_internal_from_external'] = 'Creare interna dall\'esterno';

$GLOBALS["lang"]['Create Internal From External'] = 'Creare interna dall\'esterno';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Crea dispositivi NMIS da Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Creare Open-AudIT Dispositivi da ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Creare Open-AudIT Dispositivi di NMIS';

$GLOBALS["lang"]['created_by'] = 'Creato da';

$GLOBALS["lang"]['Created By'] = 'Creato da';

$GLOBALS["lang"]['created_date'] = 'Data creata';

$GLOBALS["lang"]['Created Date'] = 'Data creata';

$GLOBALS["lang"]['Creating'] = 'Creare';

$GLOBALS["lang"]['Creating Device'] = 'Creazione del dispositivo';

$GLOBALS["lang"]['Creating a Query'] = 'Creare una Query';

$GLOBALS["lang"]['creator'] = 'Creatore';

$GLOBALS["lang"]['Creator'] = 'Creatore';

$GLOBALS["lang"]['credential'] = 'Credenziali';

$GLOBALS["lang"]['Credential'] = 'Credenziali';

$GLOBALS["lang"]['credentials'] = 'Credenziali';

$GLOBALS["lang"]['Credentials'] = 'Credenziali';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credenziali ID cliente';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credenziali Abbonamento ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credenziali ID inquilino';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Porte TCP personalizzate';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personalizzato Porti';

$GLOBALS["lang"]['Cve'] = 'C.';

$GLOBALS["lang"]['Cyprus'] = 'Cipro';

$GLOBALS["lang"]['Czech'] = 'Ceco';

$GLOBALS["lang"]['Czech Republic'] = 'Repubblica ceca';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Account DN (opzionale)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (opzionale)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nome host DNS';

$GLOBALS["lang"]['dashboard_id'] = 'ID Dashboard';

$GLOBALS["lang"]['Dashboard ID'] = 'ID Dashboard';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Azione del database';

$GLOBALS["lang"]['Database Action'] = 'Azione del database';

$GLOBALS["lang"]['db_column'] = 'Colonna del database';

$GLOBALS["lang"]['Database Column'] = 'Colonna del database';

$GLOBALS["lang"]['Database Definition'] = 'Definizione del database';

$GLOBALS["lang"]['db_row'] = 'Titolo del database';

$GLOBALS["lang"]['Database Row'] = 'Titolo del database';

$GLOBALS["lang"]['Database Schema'] = 'Schema del database';

$GLOBALS["lang"]['db_table'] = 'Tabella del database';

$GLOBALS["lang"]['Database Table'] = 'Tabella del database';

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

$GLOBALS["lang"]['December'] = 'Dicembre';

$GLOBALS["lang"]['Default'] = 'Predefinito';

$GLOBALS["lang"]['Default Items'] = 'Oggetti predefiniti';

$GLOBALS["lang"]['Default Value'] = 'Valore predefinito';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Predefinito del 389. Normalmente 636 utilizzato per Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Predefinizione <code>3</code> per LDAP e Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Predefiniti';

$GLOBALS["lang"]['delay_minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Delay Minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Delete'] = 'Cancella';

$GLOBALS["lang"]['Delete Example Devices'] = 'Eliminare i dispositivi di esempio';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Eliminare esterno dall\'interno';

$GLOBALS["lang"]['Delete External From Internal'] = 'Eliminare esterno dall\'interno';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Eliminare NMIS Dispositivi se non in Open-AudIT';

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

$GLOBALS["lang"]['details'] = 'Dettagli';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Dettagli di chi è generalmente contattabile in questo sito.';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Audit del dispositivo';

$GLOBALS["lang"]['Device ID'] = 'ID dispositivo';

$GLOBALS["lang"]['device_id'] = 'ID dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID dispositivo B';

$GLOBALS["lang"]['Device Name'] = 'Nome del dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Risultato del dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Risultati del dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Seme di dispositivo';

$GLOBALS["lang"]['Device Seed IP'] = 'Dispositivo Separato IP';

$GLOBALS["lang"]['Device Status'] = 'Stato del dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipi di dispositivo';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Il dispositivo è nel Subnet';

$GLOBALS["lang"]['Devices'] = 'Apparecchi';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivi assegnati alla posizione';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivi assegnati alla posizione';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivi assegnati a Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivi assegnati a Org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositivi controllati';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivi creati in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivi creati in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Dispositivi colonne di visualizzazione predefinite';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Dispositivi colonne di visualizzazione predefinite';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivi trovati Ultimi 7 giorni';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivi trovati oggi';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivi trovati ieri';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivi non controllati';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivi non visti 30 giorni';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivi non visti 7 giorni';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivi non visti 90 giorni';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivi recuperati tramite API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivi Selezionati da ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivi selezionati da Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivi Aggiornati in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivi Aggiornati in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'I dispositivi sono benchmark.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'I dispositivi non sono benchmark.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'I dispositivi potrebbero essere benchmark.';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivi in stato di esecuzione';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivi in Stato bloccato';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivi in questo';

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

$GLOBALS["lang"]['discoveries'] = 'Scoperte';

$GLOBALS["lang"]['Discoveries'] = 'Scoperte';

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

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Visualizzazione della versione';

$GLOBALS["lang"]['Display Version'] = 'Visualizzazione della versione';

$GLOBALS["lang"]['Display in Menu'] = 'Visualizza nel menu';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Non eseguire la scansione di queste porte TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Non eseguire la scansione di queste porte UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Non farmi vedere di nuovo';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Si desidera utilizzare il trasporto sicuro (LDAPS) o regolare LDAP non crittografato.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Volete vedere la barra laterale standard sulla sinistra.';

$GLOBALS["lang"]['documentation'] = 'Documentazione';

$GLOBALS["lang"]['Documentation'] = 'Documentazione';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Scarica un file dall\'URL';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Durata';

$GLOBALS["lang"]['Duration'] = 'Durata';

$GLOBALS["lang"]['ESXi'] = 'ESXI';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Abilitato';

$GLOBALS["lang"]['Enabled'] = 'Abilitato';

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

$GLOBALS["lang"]['English'] = 'Inglese';

$GLOBALS["lang"]['enterprise'] = 'Imprese';

$GLOBALS["lang"]['Enterprise'] = 'Imprese';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo di entrata';

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

$GLOBALS["lang"]['Established'] = 'Istituito';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Every'] = 'Ogni';

$GLOBALS["lang"]['Every Day'] = 'Ogni giorno';

$GLOBALS["lang"]['Exceptions'] = 'Eccezioni';

$GLOBALS["lang"]['exclude'] = 'Escluso';

$GLOBALS["lang"]['Exclude'] = 'Escluso';

$GLOBALS["lang"]['exclude_ip'] = 'Escluso IP';

$GLOBALS["lang"]['Exclude IP'] = 'Escluso IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Escludere indirizzi IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Escludere le porte TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Escluso Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Escluso Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Escluso UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Escluso Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Escluso Udp Ports';

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

$GLOBALS["lang"]['expose'] = 'Esposizione';

$GLOBALS["lang"]['Expose'] = 'Esposizione';

$GLOBALS["lang"]['External'] = 'Esterno';

$GLOBALS["lang"]['External Field Name'] = 'Nome del campo esterno';

$GLOBALS["lang"]['External Field Type'] = 'Tipo di campo esterno';

$GLOBALS["lang"]['external_ident'] = 'Identificazione esterna';

$GLOBALS["lang"]['External Ident'] = 'Identificazione esterna';

$GLOBALS["lang"]['external_link'] = 'Link esterno';

$GLOBALS["lang"]['External Link'] = 'Link esterno';

$GLOBALS["lang"]['extra_columns'] = 'Colonne extra';

$GLOBALS["lang"]['Extra Columns'] = 'Colonne extra';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Isole Fiji';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Import'] = 'Importazione file';

$GLOBALS["lang"]['File Input'] = 'Input file';

$GLOBALS["lang"]['file_name'] = 'Nome del file';

$GLOBALS["lang"]['File Name'] = 'Nome del file';

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

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Regola del firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Regola del firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revisione firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Revisione firmware';

$GLOBALS["lang"]['First Name'] = 'Nome';

$GLOBALS["lang"]['first_run'] = 'Prima corsa';

$GLOBALS["lang"]['First Run'] = 'Prima corsa';

$GLOBALS["lang"]['first_seen'] = 'Prima vista';

$GLOBALS["lang"]['First Seen'] = 'Prima vista';

$GLOBALS["lang"]['FirstWave'] = 'Prima guerra mondiale';

$GLOBALS["lang"]['Fix'] = 'Fisso';

$GLOBALS["lang"]['Fixed'] = 'Fisso';

$GLOBALS["lang"]['Floor'] = 'Piano terra';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Segui uno qualsiasi dei link qui sotto e scopri come utilizzare Open-AudIT per scoprire <b>Cosa c\'è sulla tua rete?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Per una scoperta dei semi, dovrei scoprire solo gli IP nello spazio dell\'indirizzo IP privato.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Per una scoperta dei semi, dovrei scoprire solo gli IP sulla sottorete scelta.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Per una scoperta di semi, devo ping la subnet prima di eseguire la scoperta.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Per l\'ingresso avanzato di una query SQL cruda. Come per le query, è necessario includere <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Per licenze che non sono perpetuo, quando scade la licenza.';

$GLOBALS["lang"]['form_factor'] = 'Fattore di forma';

$GLOBALS["lang"]['Form Factor'] = 'Fattore di forma';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

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

$GLOBALS["lang"]['full_name'] = 'Nome completo';

$GLOBALS["lang"]['Full Name'] = 'Nome completo';

$GLOBALS["lang"]['function'] = 'Funzione';

$GLOBALS["lang"]['Function'] = 'Funzione';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPO';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generato da';

$GLOBALS["lang"]['geo'] = 'Geografica';

$GLOBALS["lang"]['Geo'] = 'Geografica';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Germania';

$GLOBALS["lang"]['Germany'] = 'Germania';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Iniziare';

$GLOBALS["lang"]['Get a Free License'] = 'Ottieni una licenza gratuita';

$GLOBALS["lang"]['Getting Started'] = 'Iniziare';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibilterra';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opzioni globali di scoperta';

$GLOBALS["lang"]['Go'] = 'Vai.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Chiave';

$GLOBALS["lang"]['Greater Than'] = 'Più grande';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Più grande rispetto o uguale';

$GLOBALS["lang"]['Greece'] = 'Grecia';

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

$GLOBALS["lang"]['hardware_revision'] = 'Revisione hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisione hardware';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Questa politica è stata applicata in questa organizzazione.';

$GLOBALS["lang"]['hash'] = 'Hash!';

$GLOBALS["lang"]['Hash'] = 'Hash!';

$GLOBALS["lang"]['Head'] = 'Capo';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island e McDonald Islands';

$GLOBALS["lang"]['height'] = 'Altezza';

$GLOBALS["lang"]['Height'] = 'Altezza';

$GLOBALS["lang"]['Height in RU'] = 'Altezza in RU';

$GLOBALS["lang"]['Help'] = 'Aiuto';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Aiuto e domande frequenti';

$GLOBALS["lang"]['high'] = 'Alto';

$GLOBALS["lang"]['High'] = 'Alto';

$GLOBALS["lang"]['High Availability'] = 'Alta disponibilità';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sede (Stato della Città del Vaticano)';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nome host';

$GLOBALS["lang"]['Hostname'] = 'Nome host';

$GLOBALS["lang"]['hour'] = 'Orario';

$GLOBALS["lang"]['Hour'] = 'Orario';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Come e perché è Open-AudIT Più sicuro';

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

$GLOBALS["lang"]['Hungary'] = 'Ungheria';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Iperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Iperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Ho letto l\'EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'Versione IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Indirizzo IP';

$GLOBALS["lang"]['IP Addresses'] = 'Indirizzo IP';

$GLOBALS["lang"]['IP Last Seen'] = 'Ultimo accesso IP';

$GLOBALS["lang"]['IP Set By'] = 'Impostazione IP da';

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

$GLOBALS["lang"]['If'] = 'Se';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se una porta risponde con filtrato, dovremmo considerarla disponibile.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Se una porta risponde con Open|filtered, dovremmo considerarla disponibile.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se un dispositivo remoto non esiste nei dispositivi selezionati Open-AudIT, dovremmo eliminarlo dal sistema esterno.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se un dispositivo Open-AudIT è stato modificato, dovremmo aggiornare il sistema esterno.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se un dispositivo Open-AudIT non è sul sistema esterno, dovremmo crearlo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se un agente segnala che il suo IP primario è in questa sottorete, eseguire le azioni.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se uno qualsiasi di questi (comma seperato, nessun spazio) porte sono rilevati, presumere SSH sta correndo su di loro e usarli per il controllo. Non c\'è bisogno di aggiungere questa porta alle porte TCP personalizzate - verrà aggiunta automaticamente.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se impostato, detiene una serie JSON di colonne di dispositivo specifiche che l\'utente ha scelto di vedere, oltre al default di configurazione.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se la famiglia agente OS (caso insensibile) contiene questa stringa, eseguire le azioni.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se sono soddisfatte le seguenti condizioni:<br/><ul><li>a Role ha un ad_group assegnato</li><li>un Org ha un ad_group assegnato</li><li>un LDAP Server ha usato_roles impostato su y</li><li>un utente esiste in LDAP (sia esso Active Directory o OpenLDAP) ed è nei gruppi ad_ assegnati</li></ul>L\'utente può accedere a Open-AudIT senza un account in Open-AudIT che deve essere creato. Open-AudIT queryrà il LDAP in questione e se l\'utente è nei gruppi richiesti ma non in Open-AudIT, i loro attributi utente (nome, nome completo, e-mail, ruoli, org, ecc) all\'interno di Open-AudIT saranno automaticamente popolati e saranno registrati.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se l\'utente accede a Open-AudIT non ha l\'accesso alla ricerca LDAP, è possibile utilizzare un altro account che ha questo accesso.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Se questo molti o più minuti sono passati da quando il dispositivo ha contattato il server, eseguire le azioni.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se si sceglie un Collector, sarà previsto eseguire il prossimo 5 minuti di confine.';

$GLOBALS["lang"]['ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Sequestro';

$GLOBALS["lang"]['Iflastchange'] = 'Sequestro';

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

$GLOBALS["lang"]['implementation_notes'] = 'Note di attuazione';

$GLOBALS["lang"]['Implementation Notes'] = 'Note di attuazione';

$GLOBALS["lang"]['Import'] = 'Importazioni';

$GLOBALS["lang"]['Import Example Data'] = 'Importazione Esempio Dati';

$GLOBALS["lang"]['improvement_opportunities'] = 'Opportunità di miglioramento';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Opportunità di miglioramento';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inattivo';

$GLOBALS["lang"]['Include'] = 'Includere';

$GLOBALS["lang"]['Incomplete'] = 'Incompleto';

$GLOBALS["lang"]['Index'] = 'Indice';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informazioni';

$GLOBALS["lang"]['initial_size'] = 'Dimensione iniziale';

$GLOBALS["lang"]['Initial Size'] = 'Dimensione iniziale';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Tipo di ingresso';

$GLOBALS["lang"]['inputs'] = 'Ingressi';

$GLOBALS["lang"]['Inputs'] = 'Ingressi';

$GLOBALS["lang"]['Insane'] = 'Inutile';

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

$GLOBALS["lang"]['installed_by'] = 'Installato da';

$GLOBALS["lang"]['Installed By'] = 'Installato da';

$GLOBALS["lang"]['installed_on'] = 'Installato su';

$GLOBALS["lang"]['Installed On'] = 'Installato su';

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

$GLOBALS["lang"]['interface'] = 'Interfaccia';

$GLOBALS["lang"]['Interface'] = 'Interfaccia';

$GLOBALS["lang"]['interface_id'] = 'ID interfaccia';

$GLOBALS["lang"]['Interface ID'] = 'ID interfaccia';

$GLOBALS["lang"]['interface_type'] = 'Tipo di interfaccia';

$GLOBALS["lang"]['Interface Type'] = 'Tipo di interfaccia';

$GLOBALS["lang"]['Internal'] = 'Interno';

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

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Articoli non in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON per l\'importazione';

$GLOBALS["lang"]['Jamaica'] = 'Giamaica';

$GLOBALS["lang"]['January'] = 'Gennaio';

$GLOBALS["lang"]['Japan'] = 'Giappone';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Giordania';

$GLOBALS["lang"]['July'] = 'Luglio';

$GLOBALS["lang"]['June'] = 'Giugno';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakistan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Versione del Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versione del Kernel';

$GLOBALS["lang"]['Key'] = 'Chiave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Password chiave (opzionale)';

$GLOBALS["lang"]['keys'] = 'Chiavi';

$GLOBALS["lang"]['Keys'] = 'Chiavi';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corea del Sud';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Repubblica di Kirghizistan';

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

$GLOBALS["lang"]['lastModified'] = 'Ultimo aggiornamento';

$GLOBALS["lang"]['LastModified'] = 'Ultimo aggiornamento';

$GLOBALS["lang"]['latitude'] = 'Latitudine';

$GLOBALS["lang"]['Latitude'] = 'Latitudine';

$GLOBALS["lang"]['Latvia'] = 'Lettonia';

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

$GLOBALS["lang"]['level'] = 'Livello';

$GLOBALS["lang"]['Level'] = 'Livello';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Livello di privilegi necessari per sfruttare (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libico arabo Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licenza';

$GLOBALS["lang"]['License Key'] = 'Chiave di licenza';

$GLOBALS["lang"]['License Required'] = 'Richiesta di licenza';

$GLOBALS["lang"]['licenses'] = 'Le licenze';

$GLOBALS["lang"]['Licenses'] = 'Le licenze';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = '#';

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

$GLOBALS["lang"]['List'] = 'Elenco';

$GLOBALS["lang"]['list_table_format'] = 'Elenco Formato della tabella';

$GLOBALS["lang"]['List Table Format'] = 'Elenco Formato della tabella';

$GLOBALS["lang"]['Lithuania'] = 'Lituania';

$GLOBALS["lang"]['Load Balancing'] = 'Bilanciamento del carico';

$GLOBALS["lang"]['Local'] = 'Locale locale';

$GLOBALS["lang"]['Local Area Network'] = 'Rete locale';

$GLOBALS["lang"]['local_port'] = 'Porto locale';

$GLOBALS["lang"]['Local Port'] = 'Porto locale';

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

$GLOBALS["lang"]['locations'] = 'Località';

$GLOBALS["lang"]['Locations'] = 'Località';

$GLOBALS["lang"]['Locations in this'] = 'Località in questo';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Formato di registro';

$GLOBALS["lang"]['Log Format'] = 'Formato di registro';

$GLOBALS["lang"]['log_path'] = 'Percorso di accesso';

$GLOBALS["lang"]['Log Path'] = 'Percorso di accesso';

$GLOBALS["lang"]['log_rotation'] = 'Rotazione di registro';

$GLOBALS["lang"]['Log Rotation'] = 'Rotazione di registro';

$GLOBALS["lang"]['log_status'] = 'Stato';

$GLOBALS["lang"]['Log Status'] = 'Stato';

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

$GLOBALS["lang"]['Luxembourg'] = 'Lussemburgo';

$GLOBALS["lang"]['MAC Address'] = 'MAC Indirizzo';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Produttore';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Indirizzo Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['maintenance_expires'] = 'Spese di manutenzione';

$GLOBALS["lang"]['Maintenance Expires'] = 'Spese di manutenzione';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Fai il mio Dashboard predefinito';

$GLOBALS["lang"]['Make this install a Collector'] = 'Fare questo installare un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malesia';

$GLOBALS["lang"]['Maldives'] = 'Maldive';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Gestione';

$GLOBALS["lang"]['Manage Licenses'] = 'Gestione licenze';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gestione in NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Sforzo di corrispondenza';

$GLOBALS["lang"]['Match String'] = 'Sforzo di corrispondenza';

$GLOBALS["lang"]['Matching Attribute'] = 'Attributi di corrispondenza';

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

$GLOBALS["lang"]['Mexico'] = 'Messico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Micro-';

$GLOBALS["lang"]['Microtime'] = 'Micro-';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Dal momento che l\'ultima Audit è più grande di';

$GLOBALS["lang"]['model'] = 'Modello';

$GLOBALS["lang"]['Model'] = 'Modello';

$GLOBALS["lang"]['model_family'] = 'Modello Famiglia';

$GLOBALS["lang"]['Model Family'] = 'Modello Famiglia';

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

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mese';

$GLOBALS["lang"]['Month'] = 'Mese';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marocco';

$GLOBALS["lang"]['motherboard'] = 'Scheda madre';

$GLOBALS["lang"]['Motherboard'] = 'Scheda madre';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Tipo di montaggio';

$GLOBALS["lang"]['Mount Type'] = 'Tipo di montaggio';

$GLOBALS["lang"]['Mozambique'] = 'Mozambico';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Deve rispondere a Ping';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - È possibile impedire che vengano visualizzate le credenziali di testo semplici impostando l\'elemento di configurazione per <code>decrypt_credentials</code> a <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nome';

$GLOBALS["lang"]['Name'] = 'Nome';

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

$GLOBALS["lang"]['Network'] = 'Rete di rete';

$GLOBALS["lang"]['network_address'] = 'Indirizzo di rete';

$GLOBALS["lang"]['Network Address'] = 'Indirizzo di rete';

$GLOBALS["lang"]['network_domain'] = 'Dominio di rete';

$GLOBALS["lang"]['Network Domain'] = 'Dominio di rete';

$GLOBALS["lang"]['Network Types'] = 'Tipi di rete';

$GLOBALS["lang"]['networks'] = 'Reti';

$GLOBALS["lang"]['Networks'] = 'Reti';

$GLOBALS["lang"]['Networks Generated By'] = 'Reti generate da';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Reti utilizzando una maschera CIDR di';

$GLOBALS["lang"]['New Building Name'] = 'Nuovo nome di costruzione';

$GLOBALS["lang"]['New Caledonia'] = 'Nuova Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nome del nuovo piano';

$GLOBALS["lang"]['New Room Name'] = 'Nome della camera';

$GLOBALS["lang"]['New Row Name'] = 'Nuovo nome di riga';

$GLOBALS["lang"]['New Zealand'] = 'Nuova Zelanda';

$GLOBALS["lang"]['News'] = 'Notizie';

$GLOBALS["lang"]['next_hop'] = 'Prossimo Hop';

$GLOBALS["lang"]['Next Hop'] = 'Prossimo Hop';

$GLOBALS["lang"]['next_run'] = 'Prossima corsa';

$GLOBALS["lang"]['Next Run'] = 'Prossima corsa';

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

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Nessuno';

$GLOBALS["lang"]['Norfolk Island'] = 'Isola di Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normale';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Isole Marianne';

$GLOBALS["lang"]['Norway'] = 'Norvegia';

$GLOBALS["lang"]['Not Applicable'] = 'Non applicabile';

$GLOBALS["lang"]['Not Checked'] = 'Non controllato';

$GLOBALS["lang"]['Not Equals'] = 'Non uguali';

$GLOBALS["lang"]['Not In'] = 'Non';

$GLOBALS["lang"]['Not Like'] = 'Non mi piace';

$GLOBALS["lang"]['Not Set'] = 'Non impostato';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Non normalmente usato. Se impostato, questo richiede che il dispositivo abbia una porta aperta (come per Opzioni di scansione) da considerare rispondere. Un indirizzo MAC, risposta arp o risposta ping non è considerato sufficiente per essere considerato rispondere. Utile se un router o un firewall tra il server Open-AudIT e l\'IP di destinazione risponde alle scansioni delle porte per conto degli IP.';

$GLOBALS["lang"]['Note'] = 'Nota';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - La selezione di un genitore fornirà automaticamente l\'accesso ai propri figli (anche se non verrà mostrato qui).';

$GLOBALS["lang"]['Notes'] = 'Note';

$GLOBALS["lang"]['notes'] = 'Note';

$GLOBALS["lang"]['Notice'] = 'Avviso';

$GLOBALS["lang"]['notin'] = 'No.';

$GLOBALS["lang"]['Notin'] = 'No.';

$GLOBALS["lang"]['November'] = 'Novembre';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDINANZA';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Famiglie';

$GLOBALS["lang"]['OS Family'] = 'Famiglia OS';

$GLOBALS["lang"]['OS Group'] = 'Gruppo OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Oggetto Identificazione';

$GLOBALS["lang"]['Object Ident'] = 'Oggetto Identificazione';

$GLOBALS["lang"]['October'] = 'Ottobre';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Su';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Uno <code>3x2</code>♪ <code>4x2</code>♪ <code>4x3</code> o <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Una di rete di area del campus, rete di cloud, rete privata aziendale, rete di area domestica, rete locale, rete di area metropolitana, rete di area locale passiva, rete di area personale, rete di storage-Area, rete di sistema-Area, rete privata virtuale, rete di ampia area, rete locale wireless.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Uno di sviluppo, Disaster Recovery, Valutazione, Pre-Produzione, Produzione, Testing, Formazione, Test di accettazione utente';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Uno degli stanziati, delegato, pianificazione, riservato, non legato, sconosciuto, non gestito. Predefiniti da assegnare.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Uno di entrambi <code>active directory</code> o <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Uno di: antivirus, backup, firewall, approvato, vietato, ignorato o altro.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentazione online';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Comunità Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selezione dispositivi Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Soluzione di scoperta e audit flessibili su larga scala per grandi reti. Tutte le caratteristiche di Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control tra cui Active Directory e LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nome del campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licenze Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opzioni Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Professionale Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Il mondo\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT e Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap è installato';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Attribuzione degli utenti di Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Attribuzione degli utenti di Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'Sistema operativo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Sistema operativo Famiglia Contiene';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemi operativi';

$GLOBALS["lang"]['optical'] = 'Ottica';

$GLOBALS["lang"]['Optical'] = 'Ottica';

$GLOBALS["lang"]['Optimized'] = 'Ottimizzato';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versione opzionale come controllata da Open-AudIT. Utilizzare il segno percentuale % come wildcard.';

$GLOBALS["lang"]['options'] = 'Opzioni';

$GLOBALS["lang"]['Options'] = 'Opzioni';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Oppure selezionare dai campi sottostanti.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID Org';

$GLOBALS["lang"]['Org ID'] = 'ID Org';

$GLOBALS["lang"]['Organisation'] = 'Organizzazione';

$GLOBALS["lang"]['organisation'] = 'Organizzazione';

$GLOBALS["lang"]['Organisation Descendants'] = 'Discendanti dell\'organizzazione';

$GLOBALS["lang"]['Organisations'] = 'Organizzazioni';

$GLOBALS["lang"]['orgs'] = 'Org.';

$GLOBALS["lang"]['Orgs'] = 'Org.';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Nome';

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

$GLOBALS["lang"]['Others'] = 'Altri';

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

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'PODICE';

$GLOBALS["lang"]['Package'] = 'Pacchetto';

$GLOBALS["lang"]['packages'] = 'Pacchetti';

$GLOBALS["lang"]['Packages'] = 'Pacchetti';

$GLOBALS["lang"]['pagefile'] = 'Pagina';

$GLOBALS["lang"]['Pagefile'] = 'Pagina';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territorio palestinese';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nuova Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

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

$GLOBALS["lang"]['permission'] = 'Permesso';

$GLOBALS["lang"]['Permission'] = 'Permesso';

$GLOBALS["lang"]['permissions'] = 'Permissioni';

$GLOBALS["lang"]['Permissions'] = 'Permissioni';

$GLOBALS["lang"]['Personal Area Network'] = 'Rete di Area Personale';

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

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Isole Pitcairn';

$GLOBALS["lang"]['placement'] = 'Luogo';

$GLOBALS["lang"]['Placement'] = 'Luogo';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Si prega di avere un logo dell\'amministratore Open-AudIT e aggiornare il database.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Si prega di notare che la casella di selezione supererà la casella di input di testo.';

$GLOBALS["lang"]['Please set using'] = 'Si prega di impostare utilizzando';

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

$GLOBALS["lang"]['Polite'] = 'Politica';

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

$GLOBALS["lang"]['position'] = 'Posizione';

$GLOBALS["lang"]['Position'] = 'Posizione';

$GLOBALS["lang"]['postcode'] = 'Codice postale';

$GLOBALS["lang"]['Postcode'] = 'Codice postale';

$GLOBALS["lang"]['power_circuit'] = 'Circuito di potenza';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito di potenza';

$GLOBALS["lang"]['power_sockets'] = 'Prese elettriche';

$GLOBALS["lang"]['Power Sockets'] = 'Prese elettriche';

$GLOBALS["lang"]['Predictable'] = 'Prevedibile';

$GLOBALS["lang"]['Preferences'] = 'Preferenze';

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

$GLOBALS["lang"]['profile'] = 'Profilo';

$GLOBALS["lang"]['Profile'] = 'Profilo';

$GLOBALS["lang"]['program'] = 'Programma';

$GLOBALS["lang"]['Program'] = 'Programma';

$GLOBALS["lang"]['protocol'] = 'Protocollo';

$GLOBALS["lang"]['Protocol'] = 'Protocollo';

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

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Qui.';

$GLOBALS["lang"]['Queue'] = 'Qui.';

$GLOBALS["lang"]['Queue Limit'] = 'Limite di coda';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audit del dispositivo in coda';

$GLOBALS["lang"]['Queued IP Scans'] = 'Scansioni IP queued';

$GLOBALS["lang"]['Queued Items'] = 'Articoli riprodotti';

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

$GLOBALS["lang"]['Red Query'] = 'Query rosso';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['references'] = 'Referenze';

$GLOBALS["lang"]['References'] = 'Referenze';

$GLOBALS["lang"]['region'] = 'Regione';

$GLOBALS["lang"]['Region'] = 'Regione';

$GLOBALS["lang"]['registered_user'] = 'Utente registrato';

$GLOBALS["lang"]['Registered User'] = 'Utente registrato';

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

$GLOBALS["lang"]['Report'] = 'Relazione';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapporto sui dispositivi, reti e altro ancora';

$GLOBALS["lang"]['reportable'] = 'Rapporti';

$GLOBALS["lang"]['Reportable'] = 'Rapporti';

$GLOBALS["lang"]['Reports'] = 'Relazioni';

$GLOBALS["lang"]['request'] = 'Richiesta';

$GLOBALS["lang"]['Request'] = 'Richiesta';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Richiedi uno specifico CENTRO';

$GLOBALS["lang"]['requested'] = 'Richiesta';

$GLOBALS["lang"]['Requested'] = 'Richiesta';

$GLOBALS["lang"]['require_port'] = 'Richiesta Porto';

$GLOBALS["lang"]['Require Port'] = 'Richiesta Porto';

$GLOBALS["lang"]['Require an Open Port'] = 'Richiedi una porta aperta';

$GLOBALS["lang"]['Required'] = 'Obbligo';

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

$GLOBALS["lang"]['Results'] = 'Risultati';

$GLOBALS["lang"]['retrieved'] = 'Recuperato';

$GLOBALS["lang"]['Retrieved'] = 'Recuperato';

$GLOBALS["lang"]['retrieved_ident'] = 'Ritirato Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ritirato Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nome recuperato';

$GLOBALS["lang"]['Retrieved Name'] = 'Nome recuperato';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Recuperato dal dispositivo - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Riunione';

$GLOBALS["lang"]['revision'] = 'Revisione';

$GLOBALS["lang"]['Revision'] = 'Revisione';

$GLOBALS["lang"]['risk_assesment_result'] = 'Rischio Rischio Risultato';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Rischio Rischio Risultato';

$GLOBALS["lang"]['role'] = 'Role';

$GLOBALS["lang"]['Role'] = 'Role';

$GLOBALS["lang"]['roles'] = 'Roles';

$GLOBALS["lang"]['Roles'] = 'Roles';

$GLOBALS["lang"]['Romania'] = 'Romania';

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

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Eseguire Discovery sui dispositivi';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Eseguire una scoperta e scoprire <b>Cosa c\'è sulla tua rete?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Esegui questo comando';

$GLOBALS["lang"]['runas'] = 'Scappa.';

$GLOBALS["lang"]['Runas'] = 'Scappa.';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Eseguire Open-AudIT Apache Service Sotto Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Salvare come predefinito';

$GLOBALS["lang"]['scaling'] = 'Scalatura';

$GLOBALS["lang"]['Scaling'] = 'Scalatura';

$GLOBALS["lang"]['scan_options'] = 'Opzioni di scansione';

$GLOBALS["lang"]['Scan Options'] = 'Opzioni di scansione';

$GLOBALS["lang"]['Scan Options ID'] = 'Opzioni di scansione ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scansiona il numero superiore Nmap delle porte TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scansiona il numero superiore Nmap delle porte UDP.';

$GLOBALS["lang"]['schedule'] = 'Orari';

$GLOBALS["lang"]['Schedule'] = 'Orari';

$GLOBALS["lang"]['scope'] = 'Ambito';

$GLOBALS["lang"]['Scope'] = 'Ambito';

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

$GLOBALS["lang"]['Search for Device'] = 'Ricerca per Dispositivo';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Ricerca utilizzando DataTables';

$GLOBALS["lang"]['secondary'] = 'Secondario';

$GLOBALS["lang"]['Secondary'] = 'Secondario';

$GLOBALS["lang"]['Secondary Text'] = 'Testo secondario';

$GLOBALS["lang"]['section'] = 'Sezione';

$GLOBALS["lang"]['Section'] = 'Sezione';

$GLOBALS["lang"]['secure'] = 'Sicuro';

$GLOBALS["lang"]['Secure'] = 'Sicuro';

$GLOBALS["lang"]['Security Name'] = 'Nome di sicurezza';

$GLOBALS["lang"]['Security Status'] = 'Stato di sicurezza';

$GLOBALS["lang"]['security_zone'] = 'Zona di sicurezza';

$GLOBALS["lang"]['Security Zone'] = 'Zona di sicurezza';

$GLOBALS["lang"]['seed_ip'] = 'Protezione IP';

$GLOBALS["lang"]['Seed IP'] = 'Protezione IP';

$GLOBALS["lang"]['seed_ping'] = 'Seed Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Seed Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Limite di seme al privato';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Limite di seme al privato';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Limitare il seme a Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Limitare il seme a Subnet';

$GLOBALS["lang"]['Select'] = 'Seleziona';

$GLOBALS["lang"]['Select All'] = 'Seleziona tutto';

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

$GLOBALS["lang"]['Select a Table'] = 'Seleziona una tabella';

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

$GLOBALS["lang"]['service_version'] = 'Versione di servizio';

$GLOBALS["lang"]['Service Version'] = 'Versione di servizio';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set da';

$GLOBALS["lang"]['Set By'] = 'Set da';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Impostare la dimensione (normale o compatta) delle tabelle sugli schermi List.';

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

$GLOBALS["lang"]['short'] = 'Breve';

$GLOBALS["lang"]['Short'] = 'Breve';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Dovrei rimuovere tutti i dati non correnti da questo dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Se questo file (o modello) viene utilizzato per escludere i file da essere segnalato. Normalmente, per i file di audit, questo è impostato su <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Se questo fornitore viene utilizzato quando si recuperano vulnerabilità da FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Se aggiungiamo dispositivi dal servizio remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Dovremmo applicare questa licenza all\'org selezionato e ai bambini Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Dovremmo considerare una porta filtrata per essere una porta aperta - e quindi contrassegnare questo IP come un dispositivo collegato?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Dovremmo considerare una porta aperta|filtered come una porta aperta - e quindi contrassegnare questo IP come un dispositivo collegato?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Dovremmo esporre questo gruppo nell\'interfaccia web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Dovremmo esporre questa query nell\'elenco dei rapporti sotto il menu Report nell\'interfaccia web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Dovremmo esporre questa query nell\'elenco dei rapporti sotto il menu Report nell\'interfaccia web.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Dovremmo eseguire un audit e inviarlo (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Dovremmo testare per SNMP utilizzando la porta UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Dovremmo testare per SSH usando la porta TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Dovremmo testare per WMI utilizzando la porta TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Dovremmo disinstallare l\'agente (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Dovremmo usare questo metodo per autenticare le credenziali dell\'utente. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Dovremmo usare questo metodo per popolare un ruolo degli utenti. Il campo <code>use_auth</code> deve essere impostato su <code>y</code> per usare questo. Set to <code>y</code> o <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovacchia (Repubblica slovacca)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

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

$GLOBALS["lang"]['socket'] = 'Presa';

$GLOBALS["lang"]['Socket'] = 'Presa';

$GLOBALS["lang"]['software'] = 'Software software';

$GLOBALS["lang"]['Software'] = 'Software software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Trovato Ultimi 7 Giorni';

$GLOBALS["lang"]['Software Found Today'] = 'Software trovato oggi';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software trovato ieri';

$GLOBALS["lang"]['software_key'] = 'Chiave del software';

$GLOBALS["lang"]['Software Key'] = 'Chiave del software';

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

$GLOBALS["lang"]['started_date'] = 'Data di inizio';

$GLOBALS["lang"]['Started Date'] = 'Data di inizio';

$GLOBALS["lang"]['state'] = 'Stato';

$GLOBALS["lang"]['State'] = 'Stato';

$GLOBALS["lang"]['Stats'] = 'Statistiche';

$GLOBALS["lang"]['status'] = 'Stato';

$GLOBALS["lang"]['Status'] = 'Stato';

$GLOBALS["lang"]['Storage'] = 'Stoccaggio';

$GLOBALS["lang"]['storage_count'] = 'Contenitore di stoccaggio';

$GLOBALS["lang"]['Storage Count'] = 'Contenitore di stoccaggio';

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

$GLOBALS["lang"]['Submitted From'] = 'Inviato da';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

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

$GLOBALS["lang"]['Summary'] = 'Sintesi';

$GLOBALS["lang"]['Sunday'] = 'Domenica';

$GLOBALS["lang"]['supplier'] = 'Fornitore';

$GLOBALS["lang"]['Supplier'] = 'Fornitore';

$GLOBALS["lang"]['Support'] = 'Supporto';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'I tipi supportati sono <code>subnet</code>♪ <code>seed</code> e <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Isole Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Svezia';

$GLOBALS["lang"]['switch_device_id'] = 'Interruttore ID dispositivo';

$GLOBALS["lang"]['Switch Device ID'] = 'Interruttore ID dispositivo';

$GLOBALS["lang"]['switch_port'] = 'Porto di commutazione';

$GLOBALS["lang"]['Switch Port'] = 'Porto di commutazione';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svizzera, Confederazione svizzera';

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

$GLOBALS["lang"]['table'] = 'Tabella';

$GLOBALS["lang"]['Table'] = 'Tabella';

$GLOBALS["lang"]['tag'] = 'Tag:';

$GLOBALS["lang"]['Tag'] = 'Tag:';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Taggato 3';

$GLOBALS["lang"]['Tag 3'] = 'Taggato 3';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tag: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Attività';

$GLOBALS["lang"]['Task'] = 'Attività';

$GLOBALS["lang"]['tasks'] = 'Compiti';

$GLOBALS["lang"]['Tasks'] = 'Compiti';

$GLOBALS["lang"]['tcp_ports'] = 'Porte Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Porte Tcp';

$GLOBALS["lang"]['tenant'] = 'Inquinamento';

$GLOBALS["lang"]['Tenant'] = 'Inquinamento';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Prova 1';

$GLOBALS["lang"]['Test 2'] = 'Prova 2';

$GLOBALS["lang"]['Test 3'] = 'Prova 3';

$GLOBALS["lang"]['test_minutes'] = 'Processo verbale';

$GLOBALS["lang"]['Test Minutes'] = 'Processo verbale';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Test';

$GLOBALS["lang"]['Tests'] = 'Test';

$GLOBALS["lang"]['Text'] = 'Testo';

$GLOBALS["lang"]['Thailand'] = 'Thailandia';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Il dominio Active Directory per recuperare un elenco di sottorete da.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Il server Active Directory per recuperare un elenco di sottorete da.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La metrica automatizzabile cattura la risposta alla domanda <strong>Può un aggressore automatizzare gli eventi di sfruttamento per questa vulnerabilità attraverso obiettivi multipli?</strong> basato sui passi 1-4 della catena di uccisione. Questi passaggi sono ricognizione, armamento, consegna e sfruttamento (Not Defined, No, Sì).';

$GLOBALS["lang"]['The CVE identifier.'] = 'L\'identificatore CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Il Cloud che possiede questo prodotto. Collegamenti a <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'L\'ISP o Telco forniscono questo link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Il record JSON di Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Il record JSON del feed NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'L\'UOU LDAP di questo utente (se LDAP viene utilizzato).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'La posizione che contiene questa rete. Collegamenti a <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Il NVD ha assegnato lo stato di base.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Il preset di temporizzazione Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Il sistema operativo questo pacchetto dovrebbe essere segnalato contro. Per tutti. Utilizzare il segno percentuale % come wildcard. Sarà testato contro os_group, os_famiglia e os_name in tale ordine.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'L\'API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'L\'ID Open-AudIT del cloud collegato. Collegamenti a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'L\'Open-Aud Il codice server IT è stato espulso all\'interno di questo file.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'L\'Open-Aud Il codice server IT è stato espulso all\'interno di questa funzione.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'L\'Organizzazione che possiede questo oggetto. Collegamenti a <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Il Process Identifier della scoperta associata in esecuzione.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Il positone RU della parte superiore di questo dispositivo.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La stringa della comunità SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Il Passphrase di autenticazione SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Il protocollo di autenticazione SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'La SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Il protocollo sulla privacy SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Il livello di sicurezza SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Il nome di sicurezza SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Il contesto SNMPv3 Engine ID (opzionale).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Il nome contestuale SNMPv3 (opzionale).';

$GLOBALS["lang"]['The URL of the external system.'] = 'L\'URL del sistema esterno.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'L\'URL del tuo Open-AudIT Server che questo Collector riferirà a (nessuno slash trailing).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'L\'URL a cui gli script di audit devono presentare il loro risultato.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Il nome completo effettivo di questo utente.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La linea base associata. Collegamenti a <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La scoperta associata (se richiesto). Collegamenti a <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'L\'attributo alla prova (dalla <code>devices</code> tabella).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'L\'attributo alla prova (deve corrispondere a un nome di campo esterno dal basso).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Lo script di audit su cui basare le personalizzazioni.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Il percorso base da cui cercare gli utenti.';

$GLOBALS["lang"]['The benchmark type.'] = 'Il tipo di riferimento.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'L\'edificio il rack si trova in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Il numero calcolato di dispositivi da creare esternamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Il numero calcolato di dispositivi da creare in Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'I collettori interni IP utilizzati quando esegue una scoperta.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Il nome della colonna dalla tabella straniera. Dovrebbe essere uno di: classe, ambiente, stato, tipo o menu_categoria.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Il comando eseguito sul dispositivo di destinazione o il codice server Open-AudIT eseguito durante la scoperta.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configurazione del cluster può essere: <code>active/active</code>♪ <code>active/passive</code>♪ <code>N+1</code>♪ <code>N+M</code>♪ <code>N-to-1</code>♪ <code>N-to-N</code>♪ <code>other</code> o vuoto.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La password delle credenziali. Se le credenziali sono una chiave SSH, questa è la password utilizzata per sbloccare la chiave ed è facoltativa.';

$GLOBALS["lang"]['The credentials username.'] = 'Il nome utente delle credenziali.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Lo stato attuale della Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Lo stato attuale della scoperta.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Il cruscotto che verrà visualizzato per impostazione predefinita per questo utente. Collegamenti a <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La versione del database e la versione web sono inconsistenti.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La data di scadenza della licenza.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La data in cui il software viene interrotto dal produttore. Solitamente sostituito da una versione più recente. La manutenzione può essere ancora disponibile.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La data in cui il software non riceve più aggiornamenti ed è effettivamente interrotto del tutto. La manutenzione è sospesa.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La data in cui questo articolo è stato modificato o aggiunto (leggi solo). NOTA - Questo è il timestamp dal server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La data/ora in cui questo risultato è stato creato.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Il giorno del mese in cui questo compito dovrebbe eseguire (* per ogni giorno).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Il giorno della settimana in cui questo compito dovrebbe eseguire (* per ogni giorno).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La lingua predefinita assegnata a qualsiasi utente creato da questo metodo.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Il dispositivo deve rispondere a un ping Nmap prima che sia considerato online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Il dispositivo all\'interno di Open-AudIT. Collegamenti a <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Il link diretto per lo script è';

$GLOBALS["lang"]['The email address of the reciever'] = 'L\'indirizzo email del reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Il binario di impresa da FirstWave è richiesto per una licenza. Scarica Open-AudIT da';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'L\'intera linea base associata questo risultato è da.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'L\'ID della posizione di riferimento esterno. Solitamente popolato da audit Cloud.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La prima volta che Open-AudIT ha recuperato i dettagli di questo dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Il pavimento il rack si trova su.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La tavola straniera a riferimento. Dovrebbe essere uno di: dispositivi, posizioni, org o query.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Il formato utilizzato per l\'output da e-mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La colonna completamente qualificata su cui raggrupparsi. NOTA: Quando il tipo = traffico, questo rappresenta la query rossa id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Il tavolo completamente qualificato.colonna. Possono essere forniti multipli, separati da una virgola (senza spazi).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La query SQL generata per testare questa vulnerabilità. Questo campo può essere modificato per correggere la query come richiesto.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Il gruppo di dispositivi su cui la linea di base è stata eseguita contro.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Il gruppo che fornisce un elenco di dispositivi per l\'integrazione. Collegamenti a <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'L\'ora del giorno in cui questo compito dovrebbe eseguire (* per ogni ora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Il dispositivo collegato. Collegamenti a <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La colonna identificativa (integer) nel database (leggi solo).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'L\'importanza di questa linea di base (non ancora utilizzata).';

$GLOBALS["lang"]['The integer of severity.'] = 'L\'integer della gravità.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'L\'indirizzo ip del metodo Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La lingua per tradurre l\'interfaccia web in per l\'utente.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'L\'ultima data e l\'ora che questo articolo è stato eseguito (leggi solo).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'L\'ultima volta che Open-AudIT ha recuperato i dettagli di questo dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'L\'ultima volta che questo benchmark è stato eseguito.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'L\'ultima volta che questa integrazione è stata eseguita.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Il peso fisico massimo (in KGs) questo rack può contenere.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Il massimo totale BTUs questo rack è valutato per.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La colonna secondaria opzionale. NOTA: Quando il tipo = traffico, questo rappresenta la query gialla id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La terza colonna opzionale. NOTA: Quando il tipo = traffico, questo rappresenta il verde query id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'L\'orientamento di questo dispositivo.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'L\'identificatore di processo di questa voce di coda.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Il processo che è stato utilizzato per recuperare i dettagli sul dispositivo';

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

$GLOBALS["lang"]['The result of the command.'] = 'Il risultato del comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La stanza in cui si trova il rack.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La fila in cui si trova il rack.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La chiave segreta utilizzata in combinazione con la chiave API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La data di fine vita del software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La data di fine servizio.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La colonna specifica del database dalla tabella del database specificata.';

$GLOBALS["lang"]['The specific database table.'] = 'La tabella specifica del database.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Le opzioni standard di tempistica Nmap. Usiamo solitamente -T4 (Aggressivo) come questo è raccomandato per una connessione a banda larga decente o ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Lo stato di questa integrazione';

$GLOBALS["lang"]['The status of this queued item.'] = 'Lo stato di questa voce in coda.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'L\'IP di destinazione a cui si riferiscono gli accessi (se presenti).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'L\'identificatore unico di questo server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'L\'account utente utilizzato da questo collezionista. Collegamenti a <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Il nome utente utilizzato per accedere al sistema esterno.';

$GLOBALS["lang"]['The users email address.'] = 'L\'indirizzo email degli utenti.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Le ore abituali di funzionamento in questo sito.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Il valore assegnato alla voce.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Il valore che viene memorizzato per questo particolare articolo.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Il nome del fornitore come per le voci CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Il fornitore preso dal CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'La directory web sull\'host che Open-AudIT è installato (richiede uno slash trailing).';

$GLOBALS["lang"]['The widget at position '] = 'Il widget in posizione ';

$GLOBALS["lang"]['The width of this device.'] = 'La larghezza di questo dispositivo.';

$GLOBALS["lang"]['Then'] = 'Allora';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Questo CVE sarà recuperato e sovrascrivere il CVE esistente se esiste.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Questo attributo viene memorizzato come oggetto JSON. È la lista di tutte le collezioni e contiene il nome della collezione insieme <code>c</code>♪ <code>r</code>♪ <code>u</code> e, o <code>d</code> che rappresentano creare, leggere, aggiornare ed eliminare. Queste sono le azioni che un utente può eseguire su elementi di quella particolare collezione.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Questo può essere un varchar (un campo di testo), un elenco (un elenco di valori che possono essere selezionati) o una data.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Questo raccoglitore identifica univoco universale.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Questa descrizione è auto-popolata e dovrebbe idealmente essere lasciato come-è.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Questa funzione richiede una licenza professionale o Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Questa è generalmente la colonna primaria, se non diversamente configurata. NOTA: Quando il tipo = traffico, questo rappresenta il testo secondario.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Questa voce deve corrispondere al valore dell\'attributo selezionato o contiene l\'ID della query da utilizzare.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Questa voce deve corrispondere al valore dell\'attributo selezionato.';

$GLOBALS["lang"]['This license expires on'] = 'Questa licenza scade su';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Questo dovrebbe essere impostato su 1 o l\'altezza del rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Questo si auto-popola.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Questo rallenta notevolmente la scansione scoperta.';

$GLOBALS["lang"]['Thursday'] = 'Giovedì';

$GLOBALS["lang"]['time_caption'] = 'Captazione del tempo';

$GLOBALS["lang"]['Time Caption'] = 'Captazione del tempo';

$GLOBALS["lang"]['time_daylight'] = 'Tempo diurno';

$GLOBALS["lang"]['Time Daylight'] = 'Tempo diurno';

$GLOBALS["lang"]['Time to Execute'] = 'Tempo di esecuzione';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per obiettivo (secondi)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesat';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor Est';

$GLOBALS["lang"]['Title'] = 'Titolo';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Stile della barra degli strumenti';

$GLOBALS["lang"]['Toolbar Style'] = 'Stile della barra degli strumenti';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Principali porte TCP Nmap';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Cinese tradizionale';

$GLOBALS["lang"]['Traffic Light'] = 'Luce del traffico';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad e Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Risoluzione dei problemi LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Prova tutte le ultime funzionalità con una licenza di dispositivo GRATUITA 100 di Open-AudIT Enterprise. Si prega di leggere il <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Martedì';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turchia';

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

$GLOBALS["lang"]['URL'] = 'URL pagina';

$GLOBALS["lang"]['uuid'] = 'UU';

$GLOBALS["lang"]['UUID'] = 'UU';

$GLOBALS["lang"]['udp_ports'] = 'Porte Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Porte Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ucraina';

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

$GLOBALS["lang"]['Use SNMP'] = 'Utilizzare SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Utilizzare SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utilizzare Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Utilizzare la versione di servizio';

$GLOBALS["lang"]['Use WMI'] = 'Utilizzare WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Utilizzare per l\'autenticazione';

$GLOBALS["lang"]['Use for Roles'] = 'Utilizzare per Roles';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Utenti, ruoli e org';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Utilizzo dell\'ingresso per Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Utilizzo di OKTA per Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Di solito Mb/s, dalla posizione A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Di solito Mb/s, dalla posizione B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Di solito Mb/s, alla posizione A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Di solito Mb/s, alla posizione B.';

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

$GLOBALS["lang"]['values'] = 'Valori';

$GLOBALS["lang"]['Values'] = 'Valori';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabile';

$GLOBALS["lang"]['Variable'] = 'Variabile';

$GLOBALS["lang"]['vendor'] = 'Venditore';

$GLOBALS["lang"]['Vendor'] = 'Venditore';

$GLOBALS["lang"]['vendors'] = 'Venditore';

$GLOBALS["lang"]['Vendors'] = 'Venditore';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versione';

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

$GLOBALS["lang"]['View'] = 'Vista';

$GLOBALS["lang"]['View All'] = 'Vedi tutto';

$GLOBALS["lang"]['View Details'] = 'Visualizza dettagli';

$GLOBALS["lang"]['View Device'] = 'Visualizza dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Visualizza Discovery';

$GLOBALS["lang"]['View Policy'] = 'Politica di visualizzazione';

$GLOBALS["lang"]['Virtual Private Network'] = 'Rete privata virtuale';

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

$GLOBALS["lang"]['vulnerability_id'] = 'ID vulnerabilità';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID vulnerabilità';

$GLOBALS["lang"]['WHERE'] = 'DOVE';

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

$GLOBALS["lang"]['Web'] = 'Web';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Benvenuti a FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara occidentale';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Cosa posso aspettarmi se non ho Credenziali';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Qual è lo scopo di questo rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Qual è il tipo di questa posizione. Tipologie ammissibili detenute <code>attributes</code> tavolo.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Quando si integrano dispositivi dal sistema esterno, se il dispositivo non esiste in Open-AudIT dovremmo crearlo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Quando si integrano dispositivi dal sistema esterno, se il dispositivo è stato aggiornato nel sistema esterno dovremmo aggiornarlo in Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Quando si recupera un dispositivo esterno, si dovrebbe eseguire la scoperta su di esso?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Quando questo benchmark deve essere eseguito. Derivato dal associato <code>tasks.type</code> e <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quando questo registro è stato creato.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Quando questa voce di coda ha iniziato l\'elaborazione.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Quando eseguiamo questa linea di base, dobbiamo controllare gli elementi su dispositivi che non sono in una politica per questa linea di base.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Quando riceviamo una porta aperta, dovremmo tentare di testare la versione del servizio attualmente in esecuzione su di esso? Questo aiuta a confermare i servizi di esecuzione effettivi.';

$GLOBALS["lang"]['where'] = 'Dove?';

$GLOBALS["lang"]['Where'] = 'Dove?';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Dove sulla schermata Dettagli dispositivo si desidera vedere questo campo appaiono.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Dove si trova il rack.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Se la vulnerabilità colpisce componenti al di là del proprio uso di impatto, disponibilità e riservatezza.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Se l\'interazione dell\'utente è richiesta (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A quale OS si applica questo benchmark.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Quali dispositivi dovrebbero creare Open-AudIT dal sistema esterno (se presenti). Usando Tutto, Nessuno o un dato Attributo.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Quale sub-menu dovrebbe mostrare questa query dentro.';

$GLOBALS["lang"]['Who made this rack.'] = 'Chi ha fatto questo rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Perché solo Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Perché escludiamo questa politica?';

$GLOBALS["lang"]['Wide Area Network'] = 'Rete di area larga';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget! ';

$GLOBALS["lang"]['Widget Type'] = 'Tipo Widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Larghezza';

$GLOBALS["lang"]['Width'] = 'Larghezza';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Rete locale senza fili';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fais';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fais';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Gruppo di lavoro';

$GLOBALS["lang"]['Workgroup'] = 'Gruppo di lavoro';

$GLOBALS["lang"]['Working Credentials'] = 'Credenziali di lavoro';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Query giallo';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Sì.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Si può desiderare di copiare e incollare questo URL in una e-mail al vostro personale.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'È necessario eliminare la licenza esistente prima di aggiungere una nuova licenza.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutorial di YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'La chiave API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Le credenziali di Google Compute come JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Le tue licenze';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Il tuo ID client Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Il tuo client Microsoft Azure Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Il tuo ID Abbonamento Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Il tuo ID Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Il tuo SQL per selezionare gli attributi che popolano questa query.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Il tuo SQL per selezionare dispositivi che popolano questo gruppo.';

$GLOBALS["lang"]['Your SSH key.'] = 'La tua chiave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Le tue credenziali di accesso, come per quelle nuvole API native.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'La vostra descrizione dello stato di questo collegamento (provvisto, ritirato, ecc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'La vostra descrizione di questo articolo.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Il tuo nome generico per questo pezzo di software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'La tua versione generica per questo software';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'attivo';

$GLOBALS["lang"]['active directory'] = 'directory attiva';

$GLOBALS["lang"]['active/active'] = 'attivo/attivo';

$GLOBALS["lang"]['active/passive'] = 'attivo/passivo';

$GLOBALS["lang"]['advertisement'] = 'pubblicità';

$GLOBALS["lang"]['alert'] = 'avviso';

$GLOBALS["lang"]['all'] = 'Tutto';

$GLOBALS["lang"]['allocated'] = 'assegnata';

$GLOBALS["lang"]['amazon'] = 'Amazzoni';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'applicazione';

$GLOBALS["lang"]['approved'] = 'approvato';

$GLOBALS["lang"]['attribute'] = 'attributo';

$GLOBALS["lang"]['auto'] = 'auto auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'vietato';

$GLOBALS["lang"]['blog'] = 'blog blog blog';

$GLOBALS["lang"]['bottom'] = 'inferiore';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'costruzione';

$GLOBALS["lang"]['cloud'] = 'cloud cloud';

$GLOBALS["lang"]['code'] = 'codice';

$GLOBALS["lang"]['collector'] = 'collezionista';

$GLOBALS["lang"]['compute'] = 'computo';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'contiene';

$GLOBALS["lang"]['create'] = 'creare';

$GLOBALS["lang"]['created'] = 'creato';

$GLOBALS["lang"]['critical'] = 'critica';

$GLOBALS["lang"]['cve'] = 'c.';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'Debug';

$GLOBALS["lang"]['delegated'] = 'delegato';

$GLOBALS["lang"]['delete'] = 'Cancella';

$GLOBALS["lang"]['deleted'] = 'cancellato';

$GLOBALS["lang"]['denied'] = 'negato';

$GLOBALS["lang"]['devices'] = 'dispositivi';

$GLOBALS["lang"]['digitalocean'] = 'digitalizzazione';

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

$GLOBALS["lang"]['fixed'] = 'fisso';

$GLOBALS["lang"]['floor'] = 'piano';

$GLOBALS["lang"]['front'] = 'anteriore';

$GLOBALS["lang"]['front-left'] = 'a sinistra';

$GLOBALS["lang"]['front-right'] = 'davanti a destra';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'maggiore o uguale';

$GLOBALS["lang"]['greater than'] = 'maggiore';

$GLOBALS["lang"]['group'] = 'gruppo';

$GLOBALS["lang"]['head'] = 'testa';

$GLOBALS["lang"]['here'] = 'Qui.';

$GLOBALS["lang"]['high availability'] = 'elevata disponibilità';

$GLOBALS["lang"]['howto'] = 'come';

$GLOBALS["lang"]['ignored'] = 'ignorato';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'inattivo';

$GLOBALS["lang"]['incomplete'] = 'incompleto';

$GLOBALS["lang"]['info'] = 'Informazioni';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, testo, bool (y/n), ecc';

$GLOBALS["lang"]['is licensed to'] = 'è autorizzato a';

$GLOBALS["lang"]['left'] = 'sinistra';

$GLOBALS["lang"]['less or equals'] = 'meno o uguale';

$GLOBALS["lang"]['less than'] = 'meno di';

$GLOBALS["lang"]['license'] = 'licenza';

$GLOBALS["lang"]['like'] = 'come';

$GLOBALS["lang"]['line'] = 'linea';

$GLOBALS["lang"]['load balancing'] = 'bilanciamento del carico';

$GLOBALS["lang"]['location'] = 'posizione';

$GLOBALS["lang"]['managed'] = 'gestito';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punto di fissaggio';

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

$GLOBALS["lang"]['openldap'] = 'aperto';

$GLOBALS["lang"]['optimized'] = 'ottimizzato';

$GLOBALS["lang"]['optionally '] = 'facoltativamente ';

$GLOBALS["lang"]['other'] = 'altri';

$GLOBALS["lang"]['package'] = 'pacchetto';

$GLOBALS["lang"]['partition'] = 'partizione';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'in sospeso';

$GLOBALS["lang"]['performance'] = 'performance';

$GLOBALS["lang"]['performed'] = 'eseguito';

$GLOBALS["lang"]['pie'] = 'Torta';

$GLOBALS["lang"]['planning'] = 'pianificazione';

$GLOBALS["lang"]['predictable'] = 'prevedibile';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'posteriore posteriore';

$GLOBALS["lang"]['rear-left'] = 'posteriore sinistra';

$GLOBALS["lang"]['rear-right'] = 'posteriore destro';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['release'] = 'rilascio';

$GLOBALS["lang"]['reserved'] = 'riservato';

$GLOBALS["lang"]['right'] = 'destra';

$GLOBALS["lang"]['room'] = 'camera';

$GLOBALS["lang"]['row'] = 'riga';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'inizia con';

$GLOBALS["lang"]['storage'] = 'stoccaggio';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

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

$GLOBALS["lang"]['unallocated'] = 'non legato';

$GLOBALS["lang"]['unauthorised'] = 'non autorizzato';

$GLOBALS["lang"]['unknown'] = 'sconosciuto';

$GLOBALS["lang"]['unmanaged'] = 'non gestiti';

$GLOBALS["lang"]['unused'] = 'inutilizzato';

$GLOBALS["lang"]['update'] = 'aggiornamento';

$GLOBALS["lang"]['valid'] = 'valido';

$GLOBALS["lang"]['virtualisation'] = 'virtualizzazione';

$GLOBALS["lang"]['warning'] = 'avvertimento';

$GLOBALS["lang"]['web'] = 'web web web';

$GLOBALS["lang"]['yes'] = 'Sì.';

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

