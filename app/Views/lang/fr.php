<?php
$GLOBALS["lang"][' Default, currently '] = ' Par défaut, actuellement ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' est maintenant pris en charge avec un fichier de langue. Pour modifier votre utilisateur pour utiliser cette langue, cliquez sur ';

$GLOBALS["lang"][' seconds'] = ' secondes';

$GLOBALS["lang"]['10 Minutes'] = '10 minutes';

$GLOBALS["lang"]['15 Minutes'] = '15 minutes';

$GLOBALS["lang"]['30 Minutes'] = '30 minutes';

$GLOBALS["lang"]['5 Minutes'] = '5 minutes';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>NOTE</strong> - Vous accédez à cette URL depuis le serveur local Open-Audit. Le script téléchargé ne pourra pas être soumis lors de l\'exécution sur une autre machine. Si vous devez vérifier d\'autres machines, veuillez télécharger le script de n\'importe quelle machine distante, ne pas utiliser un navigateur sur le serveur Open-Audit lui-même.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTE</strong> - Vous devez avoir des identifiants SSH ou SSH Key pour exécuter des repères sur un périphérique cible.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Référence</strong> - Le document global qui contient la définition de base et les tests de politique individuelle.<br/> <br/> <strong>Politiques</strong> - Les tests individuels contenus dans une base de référence. Chaque test porte sur un élément spécifique. Un exemple serait l\'essai de la version 1.2.3 de la SSH.<br/> <br/> <strong>Détails</strong> - Les données de référence peuvent comparer les ports netstat, les utilisateurs et les logiciels.<br/> <br/> <strong>Logiciels</strong> - Pour comparer les logiciels, nous vérifions le nom et la version. Parce que les numéros de version ne sont pas tous standardisés en format, lorsque nous recevons un résultat d\'audit, nous créons un nouvel attribut appelé software_padded que nous stockons dans la base de données avec le reste des détails logiciels pour chaque paquet. Pour cette raison, les lignes de base utilisant des politiques logicielles ne fonctionneront pas lorsqu\'elles sont utilisées contre un appareil qui n\'a pas été vérifié au 1.10 (au moins). Les politiques logicielles peuvent tester contre la version étant "égale à", "plus grande que" ou "égale ou supérieure à".<br/> <br/> <strong>Ports Netstat</strong> - Les ports Netstat utilisent une combinaison de numéro de port, de protocole et de programme. Si tous sont présents, la politique passe.<br/> <br/> <strong>Utilisateur</strong> - Les utilisateurs travaillent comme Netstat Ports. Si un utilisateur existe avec un nom, un statut et des détails de mot de passe correspondants (changeable, expire, requis) alors la politique passe.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Un emplacement est une adresse physique qui peut avoir des dispositifs associés à elle.<br/> <br/>Vous pouvez lui assigner des coordonnées (lat/long) et s\'il y a des périphériques assignés, l\'emplacement apparaîtra sur la carte Open-Audit Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Un réseau est dérivé des entrées de découverte et des attributs du périphérique.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Un résumé affichera une liste d\'éléments, regroupés par les valeurs distinctes de l\'attribut spécifié par le <code>table</code> et <code>column</code> attributs.<br/> <br/>Lorsqu\'un résumé est exécuté, le résultat sera une liste de valeurs distinctes pour <code>table</code> et <code>column</code>. Il y aura des liens sur les valeurs qui permettront à l\'utilisateur de voir les appareils correspondants.<br/> <br/>Si l\'attribut <code>extra_columns</code> est peuplé, la page résultante contiendra ces colonnes en plus des colonnes standard de périphérique.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Les agents vous permettent de vérifier les PC sans découverte. Installez l\'agent et il s\'enregistrera avec le serveur chaque jour et se vérifiera lui-même. Peu importe si vos ordinateurs sont pare-feu, les données d\'audit apparaîtront toujours dans Open-Audit.</p><p>Lors des essais <strong>si</strong> un agent doit effectuer des actions, les trois tests doivent réussir (si le test est fixé). <strong>Alors</strong> les mesures sont prises.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Les applications sont définies par vous, l\'utilisateur et stockées pour Open-Audit à utiliser et à associer avec les appareils.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Les attributs sont stockés pour Open-Audit à utiliser pour des champs particuliers.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Être en mesure de déterminer quelles machines sont configurées de la même façon est une partie importante de l\'administration et de l\'audit des systèmes – et maintenant rendre compte de cela sera rendu simple et automatisé. Une fois que vous définissez votre base de référence, il fonctionnera automatiquement contre un ensemble de dispositifs sur un calendrier prédéterminé. La sortie de ces lignes de base exécutées sera disponible pour l\'affichage sur le Web, l\'importation dans un système tiers ou même sous forme de rapport imprimé.<br/> <br/> Les données de base vous permettent de combiner les données de vérification avec un ensemble d\'attributs que vous avez précédemment définis (votre base de référence) pour déterminer la conformité des appareils.<br/> <br/> Par exemple, vous pouvez créer une base de référence à partir d\'un périphérique exécutant Centos 6 qui agit comme l\'un de vos serveurs apache dans un cluster. Vous savez que ce serveur particulier est configuré comme vous le souhaitez, mais vous ne savez pas si d\'autres serveurs du cluster sont configurés exactement de la même façon. Les données de base vous permettent de déterminer cela.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Les grappes sont stockées dans Open-Audit pour associer des appareils afin de mieux enregistrer, gérer et estimer les coûts de licence.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Composants est un terme générique utilisé pour les tables qui stockent les attributs d\'un appareil. Ces tables sont: access_point, arp, bios, certificat, cli_config, disque, dns, fichier, ip, licence, log, mémoire, module, moniteur, carte mère, netstat, réseau, nmap, optique, fichier de page, partition, politique, print_queue, processeur, radio, route, san, scsi, serveur, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> De plus, nous classons les tableaux suivants comme étant liés à l\'appareil : application, pièce jointe, cluster, credential, image.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Les pouvoirs sont cryptés lorsqu\'ils sont stockés dans la base de données.<br/> <br/>Lorsqu\'un Discovery est lancé, un périphérique a ses identifiants récupérés et testés pour la connexion d\'abord (à partir de la <code>credential</code> tableau). Si ceux-ci échouent, alors les pouvoirs associés à l\'Org donné <code>credentials.org_id</code> est également testé contre le dispositif. Les références de travail sont stockées à un niveau d\'appareil individuel dans la table des références (note - pas de « s » dans le nom de la table).<br/> <br/>Les clés SSH sont testées avant le nom d\'utilisateur / mot de passe SSH. Lors du test SSH, les identifiants seront également marqués comme travaillant avec sudo ou étant root.<br/> <br/>Pour faciliter l\'utilisation, les mots de passe Windows ne doivent pas contenir de guillemet simple ou double. C\'est une limitation WMI à distance, pas une limitation Open-Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Les pouvoirs sont utilisés pour accéder aux appareils.<br/> <br/>La configuration des identifiants doit être l\'une des premières choses que vous faites après avoir installé Open-Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Définissez vos racks et assignez des périphériques dans leurs positions. Vous avez déjà vos appareils dans Open-Audit et vous connaissez vos emplacements. Open-Audit vous permet de créer un rack et de lui assigner des périphériques. Open-Audit fournira même une visualisation du rack et des dispositifs contenus à l\'intérieur. Si vous fournissez une image d\'appareil, cette image sera utilisée dans la visualisation. Vous pouvez regarder le rack sur l\'écran et voir les mêmes éléments que vous verriez si vous étiez debout devant lui.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Les appareils sur votre réseau doivent être gérés. Mais comment gardez-vous vos dossiers à jour ? Une feuille de calcul - définir pas. Ce sera dépassé en heures, sinon en jours. Pourquoi essayer manuellement de suivre. Utilisez Open-Audit pour analyser automatiquement vos réseaux et enregistrer vos appareils - fabricant, modèle, série et plus de 100 autres attributs. Listes complètes de logiciels, services, disques, ports ouverts, utilisateurs, etc. Voir automatiquement si un attribut a été ajouté, supprimé ou modifié.<br/> <br/>Une fois que Open-Audit est configuré, vous pouvez vous asseoir et vous détendre. Des rapports de changement vous ont-ils été envoyés par courriel sur un horaire, par exemple - quels nouveaux appareils avons-nous découverts cette semaine? Quel nouveau logiciel a été installé cette semaine ? Y a-t-il eu des changements matériels le mois dernier ?<br/> <br/>Expand sur les champs stockés facilement avec vos propres attributs personnalisés.<br/> <br/>Ajoutez même des appareils qui ne sont pas connectés à votre réseau ou à ceux que votre serveur Open-Audit ne peut pas atteindre.<br/> <br/>Ordinateurs, commutateurs, routeurs, imprimantes ou tout autre appareil de votre réseau - Open-Audit peut tous les vérifier.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Les découvertes sont au cœur de ce que fait Open-Audit.<br/> <br/>Comment peux-tu savoir ce qu\'il y a sur mon réseau ?<br/> <br/>Les découvertes sont des éléments de données préparés qui vous permettent d\'exécuter une découverte sur un réseau en un seul clic, sans entrer les détails de ce réseau à chaque fois.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Découverte Les options sont un contexte global modifié dans le <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. Si vous avez une licence Open-Audit Enterprise, celles-ci sont paramétrables par découverte et, en plus, personnalisables au besoin. Découverte Les options sont les suivantes (y compris un temps indicatif pour scanner une IP individuelle):<br/><br/><strong>Ultrarapide</strong>: <i>1 seconde</i>. Scanner uniquement les ports qu\'Open-Audit doit utiliser pour parler à l\'appareil et détecter un périphérique IOS (WMI, SSH, SNMP, Apple Sync). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port n\'est pas considéré comme ouvert. L\'appareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br><strong>SuperFast</strong>: <i>5 secondes</i>. Scanner les 10 principaux ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port n\'est pas considéré comme ouvert. L\'appareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br><br/><strong>Rapide</strong>: <i>40 secondes</i>. Scanner les 100 premiers ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port n\'est pas considéré comme ouvert. L\'appareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Moyenne (classique)</strong>: <i>90 secondes</i>. Aussi près d\'un scan traditionnel Open-Audit que nous pouvons le faire. Scanner les 1000 premiers ports TCP, ainsi que 62078 (détection Apple IOS) et UDP 161 (SNMP). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de l\'appareil). Les appareils sont scannés quelle que soit la réponse à une ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Moyenne</strong>: <i>100 secondes</i>. Scanner les 1000 premiers ports TCP et 100 premiers ports UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port n\'est pas considéré comme ouvert. L\'appareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Lentement</strong>: <i>4 minutes</i>. Scanner les 1000 premiers ports TCP et 100 premiers ports UDP, ainsi que le port 62078 (détection Apple IOS). Détection de version activée. Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de l\'appareil). L\'appareil doit répondre à un ping Nmap. Utilisez le timing normal.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Non recommandé. Scanner les 1000 premiers ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Les appareils sont scannés quelle que soit la réponse à une ping Nmap. Détection de version activée. Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de l\'appareil). Utilisez le timing poli.<br/><br/><strong>Personnalisé</strong>: <i>Heure inconnue</i>. Lorsque des options autres que celles définies par un préréglage de découverte standard sont modifiées.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Les groupes sont utilisés comme des listes simples d\'appareils qui correspondent aux conditions requises. Si la demande est faite en utilisant JSON, ils retournent une liste de <code>devices.id</code> Seulement. Si demandé en utilisant l\'interface Web, ils retournent la liste d\'attributs de colonne standard.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Si l\'utilisateur se connecte à Open-Audit n\'a pas accès à la recherche LDAP (et que vous utilisez OpenLDAP), vous pouvez utiliser un autre compte qui a cet accès. Utiliser <code>ldap_dn_account</code> et <code>ldap_dn_password</code> Pour configurer ceci.<br/> <br/><strong>Documentation utile</strong><br/> <br/><a href="/index.php/auth/help">Aide générale</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Utilisation d\'Entra pour Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Utilisation d\'OKTA pour Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Dépannage des connexions LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Utilisateurs, rôles et organismes</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Si vous ajoutez un type de périphérique, pour afficher l\'icône associée, vous devrez copier manuellement le fichier formaté .svg dans le répertoire :<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Fenêtres</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Si vous ajoutez un type d\'emplacement, pour afficher l\'icône associée, vous devrez copier manuellement l\'icône 32x32px dans le répertoire:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Fenêtres</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Lorsque <i>Ressources</i> est <code>device</code>, valable <i>types</i> sont: <code>class</code>, <code>environment</code>, <code>status</code> et <code>type</code>. Si <i>Ressources</i> est <code>locations</code> ou <code>org</code> la seule validité <i>type</i> est <code>type</code>. Si <i>Ressources</i> est <code>query</code> la seule validité <i>type</i> est <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Si vous avez l\'intention d\'auditer complètement vos machines cloud, n\'oubliez pas que vous aurez également besoin de ces identifiants enregistrés dans Open-Audit.</p><p>Assurez-vous d\'autoriser les ports corrects si vous utilisez Microsoft Azure (22 pour SSH, etc). Vérifiez votre machine virtuelle -> Règles de réseau.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Si vous sélectionnez un type de liste, le champ « valeurs » sera activé. Vous devriez mettre une liste séparée de virgules de valeurs sélectionnables ici. Celles-ci s\'affichent dans une boîte déroulante chaque fois que le champ est édité.<br/> <br/>Comme la plupart des autres attributs, Fields peut être modifié en bloc. Utilisez la fonction Édition en vrac comme vous le feriez normalement et vous verrez que les champs sont disponibles pour entrée.<br/> <br/>Consultez l\'écran des détails de l\'appareil, ouvrez la section contenant le champ et (si vous avez un accès suffisant) vous pouvez cliquer sur la valeur du champ pour le modifier.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Dans le monde en constante évolution de la sécurité informatique où de nouvelles vulnérabilités sont découvertes et corrigées chaque jour, le respect de la sécurité doit être un processus continu. Il doit également prévoir un moyen d\'apporter des ajustements aux politiques, ainsi qu\'une évaluation périodique et une surveillance des risques. L\'écosystème OpenSCAP fournit des outils et des politiques personnalisables pour une mise en œuvre rapide, rentable et flexible de ces processus.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Les intégrations vous permettent de configurer la sélection des appareils et les horaires pour Open-Audit pour parler aux systèmes externes.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Les détails du calendrier Nmap se trouvent au bas de cette page liée <a href="https://nmap.org/book/man-performance.html" target="_blank">Il s \' agit d \' un projet de loi intitulé < https://nmap.org/book/man-performance.html > .</a>. De cette page :<br/> <br/><em>Si vous êtes sur une connexion haut débit ou éthernet décente, je recommanderais toujours d\'utiliser -T4 (Agressive). Certaines personnes aiment -T5 (Insane) bien qu\'il soit trop agressif à mon goût. Les gens précisent parfois -T2 (Polite) parce qu\'ils pensent qu\'il est moins probable de planter des hôtes ou parce qu\'ils se considèrent comme polis en général. Ils ne se rendent souvent pas compte à quel point lent -T2 est vraiment. Leur balayage peut prendre dix fois plus de temps qu\'un balayage par défaut. Les pannes de machines et les problèmes de bande passante sont rares avec les options de timing par défaut -T3 (Normal) et je recommande donc normalement que pour les scanners prudents. La détection d\'omission de version est beaucoup plus efficace que de jouer avec des valeurs de temps pour réduire ces problèmes.</em><footer>Gordon <i>Poudre</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-Audit peut être configuré pour utiliser différentes méthodes pour authentifier un utilisateur et, en outre, pour créer un compte utilisateur en utilisant les rôles et les orgs assignés en fonction de l\'adhésion au groupe.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Aud ouvert L\'informatique peut récupérer les détails d\'un fichier ou d\'un répertoire de fichiers et surveiller ces fichiers pour les modifier selon les autres attributs de la base de données Open-Audit.<br/> <br/>Cette fonctionnalité fonctionne à partir de la boîte pour les serveurs Linux Open-Audit, mais a besoin d\'un changement au nom du compte de service sous un serveur Windows Open-Audit.<br/> <br/>Les clients pris en charge sont Windows et Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Aud ouvert L\'IT peut récupérer des détails sur un fichier, demander au gestionnaire de paquets natif s\'ils sont connus et surveiller ces fichiers pour les modifications selon les autres attributs de la base de données Open-Audit.<br/> <br/>Les clients pris en charge sont Linux seulement.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Aud ouvert L\'informatique peut stocker des informations dans des champs personnalisés qui sont associés à chaque appareil.<br/> <br/>Une fois qu\'un champ supplémentaire a été créé, il peut être utilisé dans les requêtes et les groupes comme n\'importe quel autre attribut de la base de données.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-Audit est livré avec de nombreuses requêtes intégrées. Si vous avez besoin d\'une requête spécifique et qu\'aucune des requêtes préemballées ne correspond à vos besoins, il est assez facile de créer une nouvelle requête et de la charger dans Open-Audit pour l\'exécuter.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-Audit est livré avec de nombreux résumés intégrés. Si vous avez besoin d\'un résumé spécifique et qu\'aucun des résumés préemballés ne correspond à vos besoins, il est assez facile de créer un nouveau résumé et de le charger dans Open-Audit pour fonctionner.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-Audit est supporté par FirstWave avec un niveau incroyable de support. Si vous préférez une communauté active de donateurs de soutien, il ya cela aussi. Où pouvez-vous parler directement aux développeurs et obtenir une réponse dans les 24 heures ? Essayez ça avec d\'autres produits ! Un soutien incroyable. Arrêt complet. Vous avez besoin d\'aide, nous vous aidons. Pas de si ou de mais. Grand soutien. Période.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-Audit fournit multi-tenance hors de la boîte!<br/> <br/>Les orgs (organisations) dans Open-Audit sont un élément clé. Un utilisateur a un Org primaire ainsi qu\'une liste d\'Orgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de "Roles" assignés qui définissent les actions qu\'ils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison d\'un utilisateur "orgs" et "roles" définit ce qu\'il peut et ne peut pas faire dans Open-Audit.<br/> <br/>La plupart des éléments dans Open-Audit sont assignés à un Org. Appareils, Emplacements, Réseaux, etc.<br/> <br/>Les Orgs peuvent avoir des Orgs enfants. Pensez à une structure d\'organigramme (arbre). Si un utilisateur a accès à un Org spécifique, il a également accès à ses descendants. Pour plus d\'informations, voir ceci <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-Audit fournit multi-tenance hors de la boîte!<br/> <br/>Les orgs (organisations) dans Open-Audit sont un élément clé. Un utilisateur a un Org primaire ainsi qu\'une liste d\'Orgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de "Roles" assignés qui définissent les actions qu\'ils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison d\'un utilisateur "orgs" et "roles" définit ce qu\'il peut et ne peut pas faire dans Open-Audit.<br/> <br/>La plupart des éléments dans Open-Audit sont assignés à un Org. Appareils, Emplacements, Réseaux, etc.<br/> <br/>Les Orgs peuvent avoir des Orgs enfants. Pensez à une structure d\'organigramme (arbre). Si un utilisateur a accès à un Org spécifique, il a également accès à ses descendants.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Consultez rapidement l\'état des appareils sur votre réseau.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Rôles dans l\'ouverture aud Les TI sont un élément clé. Un utilisateur a un Org primaire ainsi qu\'une liste d\'Orgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de rôles assignés qui définissent les actions qu\'ils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison d\'un utilisateur "orgs" et "roles" définit ce qu\'il peut et ne peut pas faire dans Open-Audit.<br/> <br/>Obtenez l\'expérience complète Open-Audit Enterprise. Créer des rôles permet un contrôle fin sur ce que vos utilisateurs peuvent faire dans Open-Audit.<br/> <br/>La principale méthode d\'autorisation (ce qu\'un utilisateur peut faire) repose sur les rôles des utilisateurs. Les rôles par défaut sont définis comme admin, org_admin, reporter et utilisateur. Chaque rôle a un ensemble de permissions (Créer, Lire, Mettre à jour, Supprimer) pour chaque paramètre. La possibilité de définir des rôles supplémentaires et de modifier des rôles existants est activée dans Open-Audit Enterprise.<br/> <br/>Les rôles peuvent également être utilisés avec l\'autorisation LDAP (Active Directory et OpenLDAP). Les installations sous licence d\'entreprise peuvent personnaliser le groupe LDAP pour chaque rôle défini.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Les règles examinent les attributs et font des cahnges en fonction de la règle appropriée.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Les options de numérisation vous permettent d\'appliquer facilement un ensemble d\'options à une découverte.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Carte géographique simple, intuitive et précise fournie par Google Maps. Les leviers d\'ouverture audit Google Maps fournit une cartographie géographique interactive en direct des emplacements des appareils. Conversion automatisée des adresses de rue en géocodes et longitude / latitude.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Les progiciels sont utilisés pour déterminer si des antivirus, des sauvegardes, des pare-feu, des logiciels approuvés ou interdits sont installés.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Voici quelques exemples d\'attributs de Subnet valides : 192.168.1.1 (une seule adresse IP), 192.168.1.0/24 (un sous-net), 192.168.1-3.1-20 (une plage d\'adresses IP).<br/> <br/><em>NOTE</em> - Seul un sous-réseau (selon les exemples - 192.168.1.0/24) pourra automatiquement créer un réseau valide pour Open-Audit. <br/> <br/>Si vous utilisez un type Active Directory, assurez-vous d\'avoir les identifiants appropriés pour parler à votre contrôleur de domaine déjà dans <a href="../credentials">pouvoirs</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Les normes sont stockées dans Open-Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Les clients pris en charge sont Linux seulement.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Les tâches ont un planning qui reflète le planning unix cron. Les attributs pour minute, heure, jour_de_mois, mois, jour_de_semaine agissent tous selon les définitions de cron. Vous pouvez sélectionner plusieurs de ces valeurs en utilisant des virgules séparées (pas d\'espaces). Vous pouvez sélectionner chaque valeur en utilisant *.<br/> <br/>Les <code>type</code> de la tâche peut être l\'un des: lignes de base, collecteurs, découvertes, requêtes, rapports ou résumés.<br/> <br/>Si vous souhaitez planifier une base ou une découverte, vous devrez les créer avant de créer les tâches. Vous devez utiliser l\'ID du type d\'élément dans <code>sub_resource_id</code>. Par exemple, si vous souhaitez programmer une Découverte, utilisez cette identification de Découvertes particulière dans <code>sub_resource_id</code>.<br/> <br/>La valeur pour <code>uuid</code> est spécifique à chaque serveur Open-Audit. Votre valeur unique peut être trouvée dans la configuration.<br/> <br/>Les <code>options</code> attribut est un document JSON contenant tous les attributs supplémentaires nécessaires pour exécuter la tâche. Les attributs supplémentaires pour les rapports, les questions et les résumés sont: <code>email_address</code> et <code>format</code>. L\'attribut supplémentaire pour Bselines est <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Les <code>type</code> de l\'emplacement attribuera son icône.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Le paramètre Attributs vous permet d\'ajouter des valeurs personnalisées à différents attributs dans Open-Audit, pour le moment cette fonctionnalité fonctionne sur les attributs Classe, Environnement, État et Type des périphériques, l\'attribut Type pour les emplacements et les orgs ainsi que la catégorie Menu pour les requêtes. Si vous visualisez un élément de l\'un des types prvieux (disons afficher un Lkocation), vous remarquerez que l\'attribut Type doit être sélectionné dans une boîte déroulante. C\'est là que ces valeurs sont stockées. Par conséquent, si vous souhaitez ajouter un nouveau Type à choisir pour un Emplacement, ajoutez-le en utilisant la fonctionnalité Attributs.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La fonctionnalité Collectors vous permet de gérer facilement de nombreux ordinateurs "collector" qui effectuent la découverte réseau. Tous les collecteurs sont contrôlés par le serveur. Les seuls ports réseau requis entre le collecteur et le serveur sont 80 et/ou 443.<br/> <br/>Il rend la gestion des réseaux disparates rapide, facile et simple. Open-Audit Enterprise licences obtenir une licence de collectionneur unique inclus et ont la possibilité d\'acheter plus au besoin..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La section SELECT de votre SQL <em>doit</em> contient des colonnes entièrement qualifiées. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La section WHERE de votre SQL <em>doit</em> contenant <code>WHERE @filter</code> donc Open-Audit sait limiter votre requête aux Orgs appropriés. SQL ne contenant pas cette condition entraînera le défaut de création de la requête, à moins que vous ayez le rôle d\'administrateur.<br/> <br/>Un exemple de requête SQL montrant des attributs sur des périphériques qui ont un <code>os_group</code> attribut de "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La section SELECT de votre SQL <em>doit</em> ne contiennent que <code>DISTINCT(devices.id)</code>.<br/> <br/>La section WHERE de votre SQL <em>doit</em> contenant <code>WHERE @filter</code> donc Open-Audit sait limiter votre requête aux Orgs appropriés. SQL ne contenant pas cette condition entraînera l\'échec de la création du groupe.<br/> <br/>Un exemple pour SQL pour sélectionner tous les périphériques exécutant le système d\'exploitation Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Le paramètre de licence vous permet de suivre le nombre de licences trouvées sur vos appareils.<br/> <br/>Pour créer une entrée pour suivre vos licences <em>doit</em> fournir un nom, une organisation, le nombre de licences acquises et le nom du logiciel. Sur le terrain <code>match_string</code> vous devez fournir le nom du logiciel que vous voulez suivre, vous pouvez utiliser le signe pour cent (%) comme wildcard dans le match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Le réseau devrait être au format 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Les articles primaires et secondaires facultatifs devraient être entièrement qualifiés, c\'est-à-dire les appareils. type ou logiciel. nom.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Il n\'est pas nécessaire de faire quoi que ce soit si vous utilisez Open-Audit sur un serveur Linux.<br/><br/>Les clients de Windows sont très bien et ne nécessitent aucune action spéciale, cependant.... pour activer cette fonctionnalité le script d\'audit doit être exécuté localement sur le système Windows cible. Il ne peut pas être exécuté à distance comme nous le faisons avec les appels WMI lors de l\'exécution du script d\'audit sur une machine Windows, tout en ciblant une seconde machine Windows. Pour ce faire, nous devons copier le script d\'audit sur la machine Windows cible, puis l\'exécuter. Malheureusement, le compte de service sous Apache est le compte système local. Ce compte n\'a pas accès aux ressources distantes (en réseau). Pour résoudre ce problème, le service doit être géré sous un autre compte. Il est plus facile de simplement utiliser le compte d\'administrateur local, mais vous pouvez essayer n\'importe quel compte que vous aimez tant qu\'il a les privilèges requis. Le compte Système local a autant d\'accès local que le compte Administrateur local.<br/><br/>Voir notre page sur activer <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Exécuter le service Apache Open-Audit sous Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Ce sont les appareils qui vivent dans un rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ce paramètre vous permet d\'ajouter les détails de votre infrastructure cloud. Open-Audit va ensuite atteindre vos nuages en utilisant leur API native et retourner vos serveurs, tout comme n\'importe quel autre périphérique dans Open-Audit.<br/> <br/><em>NOTE</em> - Pour utiliser cette fonctionnalité, nous <em>doit</em> activer les éléments de configuration match_mac (pour AWS) et match_hostname (pour Azure). Cela sera fait automatiquement la première fois qu\'une découverte de nuage est exécutée.<br/> <br/>Pouvoirs relatifs à votre nuage (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> ou <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) sont nécessaires.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Rapport de vulnérabilité basé sur le flux NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Nous avons initialement configuré la liste des scripts par défaut avec les options par défaut. Ces scripts par défaut ne peuvent pas être supprimés. Vous pouvez créer des scripts supplémentaires à utiliser par vous au besoin. Votre script sera basé sur l\'un des scripts existants et aura des options personnalisées appliquées. Les scripts peuvent ensuite être téléchargés depuis la page de la liste au menu -> Découvrir -> Scénarios d\'audit -> Liste des scripts de vérification<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Lors de l\'utilisation de Regex pour la correspondance, une page utile peut être trouvée sur la <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Site web PHP</a>. Certaines différences avec Perl Regex peuvent être trouvées <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">ici</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Les widgets peuvent facilement être créés pour montrer ce qui est spécifique à votre environnement sur vos tableaux de bord.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Avec Open-Audit Professional et Enterprise vous pouvez automatiser et programmer les découvertes, la génération de rapports, ou les vérifications de base pour exécuter quand vous voulez, et aussi souvent que vous avez besoin. Planifiez vos découvertes pour les faire fonctionner tous les soirs et les rapports à produire et envoyer par courriel chaque matin au personnel clé. Horaires complexes ou simples, découverte de l\'appareil et génération de rapports est juste un clic.<br/> <br/>Créer des calendriers de découverte individuels pour chaque sous-réseau ou contrôleur AD, ajouter dans les rapports à créer pour les publics ciblés. Élaborer des calendriers simples ou complexes pour répondre aux besoins de l\'entreprise, éviter les sauvegardes ou les impacts sur les opérations, ou simplement pour répartir la charge et accélérer l\'achèvement de la vérification.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Vous pouvez créer un script avec toutes les options pour tous les scripts d\'audit existants - pas seulement Windows. AIX, ESX, Linux, OSX et Windows sont tous couverts.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Vous pouvez utiliser le signe % % comme wildcard dans le match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Vos racks aident à affiner exactement l\'emplacement de vos appareils.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Une carte Google API La clé est nécessaire pour cette fonction.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Un tableau JSON d\'ID de périphérique qui fera exécuter cette référence.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Un tableau JSON d\'objets correspondant au nom du logiciel pris du CVE, enrichi du nom du logiciel récupéré par Open-Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Un tableau JSON de valeurs pour tester cette vulnérabilité.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Un document JSON contenant les Orgs assignés à cet utilisateur. Numéro d\'identification <code>orgs.id</code>. Si un utilisateur a accès à un Org, il a accès à ses descendants.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Un document JSON contenant les attributs requis selon <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Un document JSON contenant les attributs requis surplombant les options de découverte.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Un document JSON contenant les attributs requis surplombant les options de correspondance par défaut.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Un document JSON contenant les rôles assignés à cet utilisateur. Noms de rôles tirés de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Un objet JSON contenant un tableau d\'attributs à modifier si la correspondance se produit.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Un objet JSON contenant un tableau d\'attributs à correspondre.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Un objet JSON contenant des options spécifiques à la collection.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Un objet JSON peuplé par une découverte Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Une représentation JSON contenant les détails de l\'élément de file à exécuter.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Une représentation JSON des domaines de cette intégration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Une représentation JSON des tests individuels et leurs résultats sur tous les appareils contre lesquels cette valeur de référence a été utilisée.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Une représentation JSON des tests qui composent cette politique.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Une URL vers un fichier à télécharger.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un champ calculé qui affiche le nombre de fois que ce logiciel a été trouvé sur les ordinateurs dans l\'Org sélectionné (et ses descendants si configuré).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un collecteur est en mode Collector ou Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Une liste séparée par virgule des CVE applicables.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Une liste de valeurs séparées par des virgules, dont une peut être sélectionnée.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un ordre de courir. Lorsque l\'agent est basé sur Windows, cette commande est exécutée à partir de l\'agent powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Une liste de ports TCP personnalisés à scanner (22 est SSH, 135 est WMI, 62078 est iPhone synchro).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Une liste de ports UDP personnalisés à scanner (161 est SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un nombre inférieur signifie qu\'il sera appliqué avant d\'autres règles.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un nombre inférieur signifie qu\'il sera appliqué avant d\'autres règles. Le poids par défaut est de 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Un mot de passe (conservé comme un hash) qui permet de se connecter lors de l\'authentification de l\'application.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un domaine de routage ou un espace d\'adresses où les adresses IP et MAC sont uniques.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Une zone de sécurité est un domaine administratif ou politique dans le domaine réseau.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Une brève description de l\'entrée du journal.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Une corde qui correspond à la <code>software.name</code> attribut. Vous pouvez utiliser la carte SQL standard de pourcentage (%) pour correspondre à un ou plusieurs caractères.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Une vulnérabilité affectant la disponibilité peut permettre aux attaquants de perturber les services, les systèmes d\'écrasement ou de causer un déni de service (DoS) (Aucun, Faible, Élevé).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Une vulnérabilité affectant la confidentialité peut permettre aux attaquants de lire des données sensibles, comme des renseignements personnels, des références ou des données commerciales exclusives (Aucun, Faible, Élevée).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Une vulnérabilité affectant l\'intégrité peut permettre aux attaquants de modifier les données, d\'injecter du code malveillant ou de modifier les configurations du système (Aucune, Faible, Élevée).';

$GLOBALS["lang"]['AD Group'] = 'Groupe AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, RNIS, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TOUS LES PI';

$GLOBALS["lang"]['API / Web Access'] = 'API / Accès Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentation API';

$GLOBALS["lang"]['API Key required.'] = 'API Clé requise.';

$GLOBALS["lang"]['API Result'] = 'Résultat de l\'API';

$GLOBALS["lang"]['About'] = 'À propos';

$GLOBALS["lang"]['Accept'] = 'Accepter';

$GLOBALS["lang"]['access_point'] = 'Point d\'accès';

$GLOBALS["lang"]['Access Point'] = 'Point d\'accès';

$GLOBALS["lang"]['access_token'] = 'Jeton d\'accès';

$GLOBALS["lang"]['Access Token'] = 'Jeton d\'accès';

$GLOBALS["lang"]['ack_by'] = 'C\'est bon';

$GLOBALS["lang"]['Ack By'] = 'C\'est bon';

$GLOBALS["lang"]['ack_date'] = 'Date';

$GLOBALS["lang"]['Ack Date'] = 'Date';

$GLOBALS["lang"]['ack_time'] = 'Heure d\'arrêt';

$GLOBALS["lang"]['Ack Time'] = 'Heure d\'arrêt';

$GLOBALS["lang"]['action'] = 'Décision';

$GLOBALS["lang"]['Action'] = 'Décision';

$GLOBALS["lang"]['action_audit'] = 'Vérification des mesures';

$GLOBALS["lang"]['Action Audit'] = 'Vérification des mesures';

$GLOBALS["lang"]['action_command'] = 'Commande d\'action';

$GLOBALS["lang"]['Action Command'] = 'Commande d\'action';

$GLOBALS["lang"]['action_date'] = 'Date d\'action';

$GLOBALS["lang"]['Action Date'] = 'Date d\'action';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositifs d\'action assignés à l\'emplacement';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositifs d\'action assignés à l\'emplacement';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositifs d\'action assignés à Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositifs d\'action assignés à Org';

$GLOBALS["lang"]['action_download'] = 'Action Télécharger';

$GLOBALS["lang"]['Action Download'] = 'Action Télécharger';

$GLOBALS["lang"]['action_uninstall'] = 'Désinstaller l\'action';

$GLOBALS["lang"]['Action Uninstall'] = 'Désinstaller l\'action';

$GLOBALS["lang"]['actioned'] = 'Suite donnée';

$GLOBALS["lang"]['Actioned'] = 'Suite donnée';

$GLOBALS["lang"]['actioned_by'] = 'Mesures prises par';

$GLOBALS["lang"]['Actioned By'] = 'Mesures prises par';

$GLOBALS["lang"]['actioned_date'] = 'Suite donnée';

$GLOBALS["lang"]['Actioned Date'] = 'Suite donnée';

$GLOBALS["lang"]['actions'] = 'Actions';

$GLOBALS["lang"]['Actions'] = 'Actions';

$GLOBALS["lang"]['Activate'] = 'Activer';

$GLOBALS["lang"]['Activate Free License'] = 'Activer la licence libre';

$GLOBALS["lang"]['Activate Key'] = 'Activer la touche';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activer une licence d\'entreprise gratuite';

$GLOBALS["lang"]['Active'] = 'Activité';

$GLOBALS["lang"]['Active / Active'] = 'Active / Active';

$GLOBALS["lang"]['Active / Passive'] = 'Active / Passive';

$GLOBALS["lang"]['Active Directory'] = 'Répertoire actif';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domaine d\'annuaire actif';

$GLOBALS["lang"]['active_directory_ou'] = 'Annuaire actif Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Annuaire actif Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Serveur de répertoire actif';

$GLOBALS["lang"]['ad_domain'] = 'Domaine publicitaire';

$GLOBALS["lang"]['Ad Domain'] = 'Domaine publicitaire';

$GLOBALS["lang"]['ad_group'] = 'Groupe ad';

$GLOBALS["lang"]['Ad Group'] = 'Groupe ad';

$GLOBALS["lang"]['ad_server'] = 'Serveur publicitaire';

$GLOBALS["lang"]['Ad Server'] = 'Serveur publicitaire';

$GLOBALS["lang"]['Add'] = 'Ajouter';

$GLOBALS["lang"]['Add Credentials'] = 'Ajouter des pouvoirs';

$GLOBALS["lang"]['Add Device'] = 'Ajouter un périphérique';

$GLOBALS["lang"]['Add Device to Application'] = 'Ajouter un périphérique à l\'application';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Ajouter un périphérique au groupe';

$GLOBALS["lang"]['Add Exception'] = 'Ajouter une exception';

$GLOBALS["lang"]['Add Field'] = 'Ajouter un champ';

$GLOBALS["lang"]['Add If'] = 'Ajouter Si';

$GLOBALS["lang"]['Add Policies from Device'] = 'Ajouter des politiques à partir de l\'appareil';

$GLOBALS["lang"]['Add Policy'] = 'Ajouter une politique';

$GLOBALS["lang"]['Add Then'] = 'Ajouter ensuite';

$GLOBALS["lang"]['Add image'] = 'Ajouter une image';

$GLOBALS["lang"]['additional_items'] = 'Autres questions';

$GLOBALS["lang"]['Additional Items'] = 'Autres questions';

$GLOBALS["lang"]['address'] = 'Adresse';

$GLOBALS["lang"]['Address'] = 'Adresse';

$GLOBALS["lang"]['Admin'] = 'Administrateur';

$GLOBALS["lang"]['admin_status'] = 'État d\' administration';

$GLOBALS["lang"]['Admin Status'] = 'État d\' administration';

$GLOBALS["lang"]['advanced'] = 'Avancé';

$GLOBALS["lang"]['Advanced'] = 'Avancé';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Aggressive'] = 'Agressifs';

$GLOBALS["lang"]['Aland Islands'] = 'Îles Alandes';

$GLOBALS["lang"]['Albania'] = 'Albanie';

$GLOBALS["lang"]['alert_style'] = 'Style d\'alerte';

$GLOBALS["lang"]['Alert Style'] = 'Style d\'alerte';

$GLOBALS["lang"]['Algeria'] = 'Algérie';

$GLOBALS["lang"]['algorithm'] = 'Algorithme';

$GLOBALS["lang"]['Algorithm'] = 'Algorithme';

$GLOBALS["lang"]['alias'] = 'Autres';

$GLOBALS["lang"]['Alias'] = 'Autres';

$GLOBALS["lang"]['All'] = 'Tous';

$GLOBALS["lang"]['All IPs'] = 'Toutes les PI';

$GLOBALS["lang"]['All Policies'] = 'Toutes les politiques';

$GLOBALS["lang"]['All Queued Items'] = 'Tous les éléments en question';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazone Champs';

$GLOBALS["lang"]['American Samoa'] = 'Samoa américaines';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Une série de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Une série de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Un tableau d\'objets représentant des liens externes vers plus d\'informations.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un document JSON crypté contenant les attributs requis selon le <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Une indication du niveau de service requis par ce site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un champ interne qui indique si la découverte a été effectuée.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Un code géographique optionnel';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Un mot de passe optionnel pour utiliser sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorre';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarctique';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua-et-Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Tous les ports TCP (comma séparés, pas d\'espaces) que vous souhaitez exclure de cette découverte. Disponible uniquement en utilisant Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Tous les ports UDP (comma séparés, sans espaces) que vous souhaitez exclure de cette découverte. Disponible uniquement en utilisant Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Toute documentation supplémentaire dont vous avez besoin.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Toutes les notes supplémentaires que vous voulez faire.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Tout appareil sera affecté à cet Org lorsqu\'il exécutera son script d\'audit (si défini). Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Tout appareil découvert sera affecté à cet emplacement si défini. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Tout périphérique découvert sera affecté à cet emplacement lorsqu\'il exécutera son script d\'audit (si défini). Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Tout appareil découvert sera affecté à cet Org si défini. Si elles ne sont pas définies, elles sont affectées à la <code>org_id</code> de cette découverte. Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Tout filtre requis. REMARQUE: Lorsque le type = trafic, cela représente l\'icône de police-awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Tous les ports TCP spécifiques que vous souhaitez tester (comma séparé, pas d\'espaces).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Tous les ports UDP spécifiques que vous souhaitez tester (comma séparés, pas d\'espaces).';

$GLOBALS["lang"]['Application'] = 'Demande';

$GLOBALS["lang"]['application_id'] = 'ID de l\'application';

$GLOBALS["lang"]['Application ID'] = 'ID de l\'application';

$GLOBALS["lang"]['Application Licenses'] = 'Licences d\'application';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Application, système d\'exploitation ou matériel.';

$GLOBALS["lang"]['applications'] = 'Demandes';

$GLOBALS["lang"]['Applications'] = 'Demandes';

$GLOBALS["lang"]['applied'] = 'Montant appliqué';

$GLOBALS["lang"]['Applied'] = 'Montant appliqué';

$GLOBALS["lang"]['Approved'] = 'Approuvé';

$GLOBALS["lang"]['April'] = 'Avril';

$GLOBALS["lang"]['architecture'] = 'Architecture';

$GLOBALS["lang"]['Architecture'] = 'Architecture';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Voulez-vous vraiment supprimer cet élément d\'entrée?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Voulez-vous vraiment supprimer cet élément de sortie ?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tu es sûr ? Cela supprimera toutes les entrées de file d\'attente et empêchera la découverte des autres IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tu es sûr ? Cela réinitialisera le compte de traitement de la file d\'attente et pourrait entraîner une charge sur le serveur.';

$GLOBALS["lang"]['area'] = 'Domaine';

$GLOBALS["lang"]['Area'] = 'Domaine';

$GLOBALS["lang"]['Argentina'] = 'Argentine';

$GLOBALS["lang"]['Armenia'] = 'Arménie';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Selon les attributs pour les environnements de périphérique. Production, formation, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Comme vous avez des Collectors enregistrés, veuillez choisir où exécuter cette découverte.';

$GLOBALS["lang"]['Ask me later'] = 'Demande-moi plus tard.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Demander de l\'aide à la Communauté ou apporter des réponses aux autres.';

$GLOBALS["lang"]['aspect_ratio'] = 'Taux d \' aspect';

$GLOBALS["lang"]['Aspect Ratio'] = 'Taux d \' aspect';

$GLOBALS["lang"]['Asset ID'] = 'Identification de l\'actif';

$GLOBALS["lang"]['asset_ident'] = 'Identification de l\'actif';

$GLOBALS["lang"]['Asset Ident'] = 'Identification de l\'actif';

$GLOBALS["lang"]['asset_number'] = 'Numéro d\'actif';

$GLOBALS["lang"]['Asset Number'] = 'Numéro d\'actif';

$GLOBALS["lang"]['asset_tag'] = 'Étiquette de l\'actif';

$GLOBALS["lang"]['Asset Tag'] = 'Étiquette de l\'actif';

$GLOBALS["lang"]['Assign Device to Application'] = 'Attribuer l\'appareil à l\'application';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Attribuer le périphérique au groupe';

$GLOBALS["lang"]['Assign Device to Location'] = 'Attribuer le périphérique à l\'emplacement';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assigner le périphérique à l\'organisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Attribuer les dispositifs à l\'emplacement';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Attribuer les dispositifs à l\'organisation';

$GLOBALS["lang"]['Assign an Operator'] = 'Attribuer un opérateur';

$GLOBALS["lang"]['Assigned To'] = 'Affecté à';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Actuellement, nous pouvons utiliser netstat_ports, logiciels et utilisateurs.';

$GLOBALS["lang"]['attached_device_id'] = 'ID du périphérique attaché';

$GLOBALS["lang"]['Attached Device ID'] = 'ID du périphérique attaché';

$GLOBALS["lang"]['attached_to'] = 'Annexe';

$GLOBALS["lang"]['Attached To'] = 'Annexe';

$GLOBALS["lang"]['attachment'] = 'Pièce jointe';

$GLOBALS["lang"]['Attachment'] = 'Pièce jointe';

$GLOBALS["lang"]['attachments'] = 'Pièces jointes';

$GLOBALS["lang"]['Attachments'] = 'Pièces jointes';

$GLOBALS["lang"]['attack_complexity'] = 'Complexité d\'attaque';

$GLOBALS["lang"]['Attack Complexity'] = 'Complexité d\'attaque';

$GLOBALS["lang"]['attack_requirements'] = 'Exigences en matière d\'attaque';

$GLOBALS["lang"]['Attack Requirements'] = 'Exigences en matière d\'attaque';

$GLOBALS["lang"]['attack_vector'] = 'Vecteur d\'attaque';

$GLOBALS["lang"]['Attack Vector'] = 'Vecteur d\'attaque';

$GLOBALS["lang"]['Attribute'] = 'Attribut';

$GLOBALS["lang"]['attributes'] = 'Attributs';

$GLOBALS["lang"]['Attributes'] = 'Attributs';

$GLOBALS["lang"]['Audit'] = 'Vérification des comptes';

$GLOBALS["lang"]['Audit AIX'] = 'Vérification AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Vérification ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Registre de vérification';

$GLOBALS["lang"]['Audit Log'] = 'Registre de vérification';

$GLOBALS["lang"]['Audit My PC'] = 'Vérification de mon PC';

$GLOBALS["lang"]['Audit OSX'] = 'Vérification OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Résultat de la vérification';

$GLOBALS["lang"]['Audit Status'] = 'État de la vérification';

$GLOBALS["lang"]['Audit Windows'] = 'Vérification des fenêtres';

$GLOBALS["lang"]['Audit the Device'] = 'Vérification de l\'appareil';

$GLOBALS["lang"]['Audits'] = 'Vérification des comptes';

$GLOBALS["lang"]['August'] = 'Août';

$GLOBALS["lang"]['Australia'] = 'Australie';

$GLOBALS["lang"]['Austria'] = 'Autriche';

$GLOBALS["lang"]['Auth'] = 'Resp.:';

$GLOBALS["lang"]['auth'] = 'Resp.:';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentification';

$GLOBALS["lang"]['authority_key_ident'] = 'Numéro d\'identification de l\'autorité';

$GLOBALS["lang"]['Authority Key Ident'] = 'Numéro d\'identification de l\'autorité';

$GLOBALS["lang"]['Auto'] = 'Automatique';

$GLOBALS["lang"]['auto_renew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['Auto Renew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Autonome peuplé par le serveur Open-Audit.';

$GLOBALS["lang"]['AutoRenew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['automatable'] = 'Automatisation';

$GLOBALS["lang"]['Automatable'] = 'Automatisation';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatiquement peuplé sur la base du système d\'exploitation Collectors.';

$GLOBALS["lang"]['availability'] = 'Disponibilité';

$GLOBALS["lang"]['Availability'] = 'Disponibilité';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaïdjan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Sauvegarde';

$GLOBALS["lang"]['Bahamas the'] = 'États';

$GLOBALS["lang"]['Bahrain'] = 'Bahreïn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banque';

$GLOBALS["lang"]['Bank'] = 'Banque';

$GLOBALS["lang"]['Banned'] = 'Interdit';

$GLOBALS["lang"]['bar_code'] = 'Code barre';

$GLOBALS["lang"]['Bar Code'] = 'Code barre';

$GLOBALS["lang"]['Barbados'] = 'Barbade';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Score de base';

$GLOBALS["lang"]['Base Score'] = 'Score de base';

$GLOBALS["lang"]['base_severity'] = 'Sévérité de base';

$GLOBALS["lang"]['Base Severity'] = 'Sévérité de base';

$GLOBALS["lang"]['based_on'] = 'Sur la base';

$GLOBALS["lang"]['Based On'] = 'Sur la base';

$GLOBALS["lang"]['baseline'] = 'Référence';

$GLOBALS["lang"]['Baseline'] = 'Référence';

$GLOBALS["lang"]['baseline_id'] = 'ID de référence';

$GLOBALS["lang"]['Baseline ID'] = 'ID de référence';

$GLOBALS["lang"]['baselines'] = 'Données de référence';

$GLOBALS["lang"]['Baselines'] = 'Données de référence';

$GLOBALS["lang"]['baselines_policies'] = 'Politiques de référence';

$GLOBALS["lang"]['Baselines Policies'] = 'Politiques de référence';

$GLOBALS["lang"]['Baselines Policy'] = 'Politiques de référence';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Données de référence';

$GLOBALS["lang"]['baselines_results'] = 'Données de référence Résultats';

$GLOBALS["lang"]['Baselines Results'] = 'Données de référence Résultats';

$GLOBALS["lang"]['Basic'] = 'Niveau de base';

$GLOBALS["lang"]['Belarus'] = 'Bélarus';

$GLOBALS["lang"]['Belgium'] = 'Belgique';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Critères de référence';

$GLOBALS["lang"]['benchmark_id'] = 'Identification de référence';

$GLOBALS["lang"]['Benchmark ID'] = 'Identification de référence';

$GLOBALS["lang"]['benchmarks'] = 'Points de référence';

$GLOBALS["lang"]['Benchmarks'] = 'Points de référence';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Exceptions concernant les repères';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Exceptions concernant les repères';

$GLOBALS["lang"]['benchmarks_log'] = 'Registre des repères';

$GLOBALS["lang"]['Benchmarks Log'] = 'Registre des repères';

$GLOBALS["lang"]['benchmarks_policies'] = 'Politiques de référence';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Politiques de référence';

$GLOBALS["lang"]['benchmarks_result'] = 'Résultats de référence';

$GLOBALS["lang"]['Benchmarks Result'] = 'Résultats de référence';

$GLOBALS["lang"]['Benin'] = 'Bénin';

$GLOBALS["lang"]['Bermuda'] = 'Bermudes';

$GLOBALS["lang"]['best_practises'] = 'Meilleures pratiques';

$GLOBALS["lang"]['Best Practises'] = 'Meilleures pratiques';

$GLOBALS["lang"]['Bhutan'] = 'Bhoutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Corps';

$GLOBALS["lang"]['Body'] = 'Corps';

$GLOBALS["lang"]['Bolivia'] = 'Bolivie';

$GLOBALS["lang"]['Boolean'] = 'Booléen';

$GLOBALS["lang"]['Boolean 1/0'] = 'Booléenne 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Booléenne';

$GLOBALS["lang"]['boot_device'] = 'Dispositif de démarrage';

$GLOBALS["lang"]['Boot Device'] = 'Dispositif de démarrage';

$GLOBALS["lang"]['bootable'] = 'Démarrage';

$GLOBALS["lang"]['Bootable'] = 'Démarrage';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnie-Herzégovine';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Île Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brésil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugais brésilien';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Territoire britannique de l \' océan Indien (archipel des Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Îles Vierges britanniques';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunéi Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Numéro de construction';

$GLOBALS["lang"]['Build Number'] = 'Numéro de construction';

$GLOBALS["lang"]['build_number_full'] = 'Numéro de construction complet';

$GLOBALS["lang"]['Build Number Full'] = 'Numéro de construction complet';

$GLOBALS["lang"]['Building'] = 'Bâtiment';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarie';

$GLOBALS["lang"]['Bulk Edit'] = 'Édition en vrac';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Attributs du périphérique d\'édition en vrac';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Exigences opérationnelles';

$GLOBALS["lang"]['Business Requirements'] = 'Exigences opérationnelles';

$GLOBALS["lang"]['Buy'] = 'Acheter';

$GLOBALS["lang"]['Buy More'] = 'Acheter plus';

$GLOBALS["lang"]['Buy More Licenses'] = 'Acheter plus de licences';

$GLOBALS["lang"]['By'] = 'Par';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Masque';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculé à partir de la découverte.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Nombre total d\'adresses IP valides pour ce réseau.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculé à la fin, le temps nécessaire pour exécuter cet élément.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculé lorsque l\'intégration est exécutée et contient une représentation JSON des périphériques de cette intégration. Chaque lien vers <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculé lorsque l\'intégration est exécutée et contient une représentation JSON des emplacements de cette intégration. Chaque lien vers <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculé lors de l\'intégration et contient le nombre de périphériques sélectionnés à partir d\'Open-Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculé lors de l\'intégration et contient le nombre de périphériques sélectionnés par le système externe.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculé lorsque l\'intégration est exécutée et contient le nombre de périphériques à mettre à jour dans le système externe.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculé lors de l\'intégration et contient le nombre de périphériques mis à jour dans Open-Audit.';

$GLOBALS["lang"]['Cambodia'] = 'Cambodge';

$GLOBALS["lang"]['Cameroon'] = 'Cameroun';

$GLOBALS["lang"]['Campus Area Network'] = 'Réseau des régions du campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Peut être <code>active</code>, <code>passive</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Peut être <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Peut être <code>auto</code>, <code>fixed</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Peut être <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Peut être <code>line</code>, <code>pie</code> ou <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Peut être <code>user</code> ou <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Peut être défini par découverte ou utilisateur.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Peut être défini par découverte ou utilisateur. Utilise l\'ID de la table des emplacements.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'L\'utilisateur peut modifier cet élément.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Annuler';

$GLOBALS["lang"]['capabilities'] = 'Capacités';

$GLOBALS["lang"]['Capabilities'] = 'Capacités';

$GLOBALS["lang"]['Capacity'] = 'Capacité';

$GLOBALS["lang"]['Cape Verde'] = 'Cap-Vert';

$GLOBALS["lang"]['Capitalise'] = 'Capitalisation';

$GLOBALS["lang"]['caption'] = 'Légende';

$GLOBALS["lang"]['Caption'] = 'Légende';

$GLOBALS["lang"]['Cayman Islands'] = 'Îles Caïmanes';

$GLOBALS["lang"]['Cellular Details'] = 'Détails cellulaires';

$GLOBALS["lang"]['Central African Republic'] = 'République centrafricaine';

$GLOBALS["lang"]['certificate'] = 'Certificat';

$GLOBALS["lang"]['Certificate'] = 'Certificat';

$GLOBALS["lang"]['certificate_file'] = 'Fichier de certificat';

$GLOBALS["lang"]['Certificate File'] = 'Fichier de certificat';

$GLOBALS["lang"]['certificate_name'] = 'Nom du certificat';

$GLOBALS["lang"]['Certificate Name'] = 'Nom du certificat';

$GLOBALS["lang"]['certificates'] = 'Certificats';

$GLOBALS["lang"]['Certificates'] = 'Certificats';

$GLOBALS["lang"]['Chad'] = 'Tchad';

$GLOBALS["lang"]['change_id'] = 'Modifier l\'ID';

$GLOBALS["lang"]['Change ID'] = 'Modifier l\'ID';

$GLOBALS["lang"]['change_log'] = 'Modifier le journal';

$GLOBALS["lang"]['Change Log'] = 'Modifier le journal';

$GLOBALS["lang"]['change_type'] = 'Modifier le type';

$GLOBALS["lang"]['Change Type'] = 'Modifier le type';

$GLOBALS["lang"]['check_minutes'] = 'Vérifier le procès-verbal';

$GLOBALS["lang"]['Check Minutes'] = 'Vérifier le procès-verbal';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Vérifiez SSH sur ces ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Vérifiez ce port pour tout service SSH.';

$GLOBALS["lang"]['Chile'] = 'Chili';

$GLOBALS["lang"]['China'] = 'Chine';

$GLOBALS["lang"]['Choose'] = 'Choisir';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Choisissez (choisir d\'abord OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Choisir un périphérique';

$GLOBALS["lang"]['Choose a Table'] = 'Choisir une table';

$GLOBALS["lang"]['Christmas Island'] = 'Île de Noël';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Nombre de circuits';

$GLOBALS["lang"]['Circuit Count'] = 'Nombre de circuits';

$GLOBALS["lang"]['circuit_status'] = 'État du circuit';

$GLOBALS["lang"]['Circuit Status'] = 'État du circuit';

$GLOBALS["lang"]['city'] = 'Ville';

$GLOBALS["lang"]['City'] = 'Ville';

$GLOBALS["lang"]['class'] = 'Classe';

$GLOBALS["lang"]['Class'] = 'Classe';

$GLOBALS["lang"]['class_text'] = 'Texte de classe';

$GLOBALS["lang"]['Class Text'] = 'Texte de classe';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Cliquez sur le bouton Supprimer pour supprimer les exemples de périphériques d\'Open-Audit.<br/>Cela supprimera les appareils ci-dessous de la base de données. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Cliquez sur le bouton Importer ci-dessous pour remplir Open-Audit avec des données de périphérique exemple.';

$GLOBALS["lang"]['Client ID'] = 'Identification du client';

$GLOBALS["lang"]['client_ident'] = 'Identification du client';

$GLOBALS["lang"]['Client Ident'] = 'Identification du client';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Nom du site client';

$GLOBALS["lang"]['Client Site Name'] = 'Nom du site client';

$GLOBALS["lang"]['Close'] = 'Fermer';

$GLOBALS["lang"]['Cloud'] = 'Nuage';

$GLOBALS["lang"]['Cloud Details'] = 'Détails du nuage';

$GLOBALS["lang"]['Cloud Discovery'] = 'Découverte en nuage';

$GLOBALS["lang"]['cloud_id'] = 'ID Cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID Cloud';

$GLOBALS["lang"]['cloud_log'] = 'Log des nuages';

$GLOBALS["lang"]['Cloud Log'] = 'Log des nuages';

$GLOBALS["lang"]['cloud_name'] = 'Nom du nuage';

$GLOBALS["lang"]['Cloud Name'] = 'Nom du nuage';

$GLOBALS["lang"]['Cloud Network'] = 'Réseau Cloud';

$GLOBALS["lang"]['clouds'] = 'Nuages';

$GLOBALS["lang"]['Clouds'] = 'Nuages';

$GLOBALS["lang"]['cluster'] = 'Groupe';

$GLOBALS["lang"]['Cluster'] = 'Groupe';

$GLOBALS["lang"]['cluster_id'] = 'ID du groupe';

$GLOBALS["lang"]['Cluster ID'] = 'ID du groupe';

$GLOBALS["lang"]['cluster_name'] = 'Nom du groupe';

$GLOBALS["lang"]['Cluster Name'] = 'Nom du groupe';

$GLOBALS["lang"]['cluster_type'] = 'Type de groupe';

$GLOBALS["lang"]['Cluster Type'] = 'Type de groupe';

$GLOBALS["lang"]['clusters'] = 'Groupes';

$GLOBALS["lang"]['Clusters'] = 'Groupes';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Îles Cocos (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Collecteur';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collecteur (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Nom du collecteur';

$GLOBALS["lang"]['collector_uuid'] = 'Collecteur Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collecteur Uuid';

$GLOBALS["lang"]['collectors'] = 'Collecteurs';

$GLOBALS["lang"]['Collectors'] = 'Collecteurs';

$GLOBALS["lang"]['Colombia'] = 'Colombie';

$GLOBALS["lang"]['color'] = 'Couleur';

$GLOBALS["lang"]['Color'] = 'Couleur';

$GLOBALS["lang"]['column'] = 'Colonne';

$GLOBALS["lang"]['Column'] = 'Colonne';

$GLOBALS["lang"]['Columns'] = 'Colonnes';

$GLOBALS["lang"]['command'] = 'Commande';

$GLOBALS["lang"]['Command'] = 'Commande';

$GLOBALS["lang"]['command_options'] = 'Options de commande';

$GLOBALS["lang"]['Command Options'] = 'Options de commande';

$GLOBALS["lang"]['command_output'] = 'Sortie de commande';

$GLOBALS["lang"]['Command Output'] = 'Sortie de commande';

$GLOBALS["lang"]['command_status'] = 'État des commandes';

$GLOBALS["lang"]['Command Status'] = 'État des commandes';

$GLOBALS["lang"]['command_time_to_execute'] = 'Temps de commande pour exécuter';

$GLOBALS["lang"]['Command Time To Execute'] = 'Temps de commande pour exécuter';

$GLOBALS["lang"]['comment'] = 'Commentaire';

$GLOBALS["lang"]['Comment'] = 'Commentaire';

$GLOBALS["lang"]['comments'] = 'Commentaires';

$GLOBALS["lang"]['Comments'] = 'Commentaires';

$GLOBALS["lang"]['commercial'] = 'Commerce';

$GLOBALS["lang"]['Commercial'] = 'Commerce';

$GLOBALS["lang"]['common_name'] = 'Nom usuel';

$GLOBALS["lang"]['Common Name'] = 'Nom usuel';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'communément appelé le clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'communément appelé le clientSecret.';

$GLOBALS["lang"]['Community'] = 'Communauté';

$GLOBALS["lang"]['Community Questions'] = 'Questions communautaires';

$GLOBALS["lang"]['Community String'] = 'Chaîne communautaire';

$GLOBALS["lang"]['Comoros the'] = 'Comores';

$GLOBALS["lang"]['Compact'] = 'Compact';

$GLOBALS["lang"]['Company'] = 'Société';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexité de l\'attaque (faible ou élevée).';

$GLOBALS["lang"]['Component Table'] = 'Tableau des composantes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Composants (tous les appareils)';

$GLOBALS["lang"]['Compute'] = 'Calculer';

$GLOBALS["lang"]['Condition'] = 'État';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Par défaut, actuellement ';

$GLOBALS["lang"]['config_file'] = 'Fichier de configuration';

$GLOBALS["lang"]['Config File'] = 'Fichier de configuration';

$GLOBALS["lang"]['config_manager_error_code'] = 'Code d\'erreur du gestionnaire de configuration';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Code d\'erreur du gestionnaire de configuration';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configure'] = 'Configuration';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Connecté à';

$GLOBALS["lang"]['connection'] = 'Connexion';

$GLOBALS["lang"]['Connection'] = 'Connexion';

$GLOBALS["lang"]['Connection Options'] = 'Options de connexion';

$GLOBALS["lang"]['connection_status'] = 'État de la connexion';

$GLOBALS["lang"]['Connection Status'] = 'État de la connexion';

$GLOBALS["lang"]['connections'] = 'Connexions';

$GLOBALS["lang"]['Connections'] = 'Connexions';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Envisager de filtrer Ports ouverts';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Considérer ouvert Ports ouverts';

$GLOBALS["lang"]['contact'] = 'Personne à contacter';

$GLOBALS["lang"]['Contact'] = 'Personne à contacter';

$GLOBALS["lang"]['contact_name'] = 'Nom du contact';

$GLOBALS["lang"]['Contact Name'] = 'Nom du contact';

$GLOBALS["lang"]['contained_in'] = 'Contenu';

$GLOBALS["lang"]['Contained In'] = 'Contenu';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contient un objet JSON détaille les widgets associés et leurs positions.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contient les champs qui déterminent si nous devons utiliser ssh, snmp et wmi options de découverte. Un objet JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'ID du moteur';

$GLOBALS["lang"]['Context Name'] = 'Nom du contexte';

$GLOBALS["lang"]['contractual_obligations'] = 'Obligations contractuelles';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obligations contractuelles';

$GLOBALS["lang"]['Cook Islands'] = 'Îles Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copier et coller un résultat de vérification';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiez et collez ce qui suit sur les forums, une autre instance d\'Open-Audit ou n\'importe où vous devez fournir cet élément.';

$GLOBALS["lang"]['core_count'] = 'Numéro de base';

$GLOBALS["lang"]['Core Count'] = 'Numéro de base';

$GLOBALS["lang"]['Cores'] = 'Noyaux';

$GLOBALS["lang"]['cost_center'] = 'Centre des coûts';

$GLOBALS["lang"]['Cost Center'] = 'Centre des coûts';

$GLOBALS["lang"]['cost_code'] = 'Code des coûts';

$GLOBALS["lang"]['Cost Code'] = 'Code des coûts';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Côte d Ivoire';

$GLOBALS["lang"]['count'] = 'Nombre';

$GLOBALS["lang"]['Count'] = 'Nombre';

$GLOBALS["lang"]['country'] = 'Pays';

$GLOBALS["lang"]['Country'] = 'Pays';

$GLOBALS["lang"]['country_code'] = 'Code pays';

$GLOBALS["lang"]['Country Code'] = 'Code pays';

$GLOBALS["lang"]['cpu_count'] = 'Compte Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Compte Cpu';

$GLOBALS["lang"]['Create'] = 'Créer';

$GLOBALS["lang"]['Create Example Devices'] = 'Créer des exemples de périphériques';

$GLOBALS["lang"]['create_external_count'] = 'Créer un compte externe';

$GLOBALS["lang"]['Create External Count'] = 'Créer un compte externe';

$GLOBALS["lang"]['create_external_from_internal'] = 'Créer externe à partir de interne';

$GLOBALS["lang"]['Create External From Internal'] = 'Créer externe à partir de interne';

$GLOBALS["lang"]['Create Geocode'] = 'Créer un Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Créer un compte interne';

$GLOBALS["lang"]['Create Internal Count'] = 'Créer un compte interne';

$GLOBALS["lang"]['create_internal_from_external'] = 'Créer interne à partir de externe';

$GLOBALS["lang"]['Create Internal From External'] = 'Créer interne à partir de externe';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Créer des périphériques NMIS depuis Open-Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Créer Open-Audit Dispositifs ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Créer Open-Audit Dispositifs du NMIS';

$GLOBALS["lang"]['created_by'] = 'Créé par';

$GLOBALS["lang"]['Created By'] = 'Créé par';

$GLOBALS["lang"]['created_date'] = 'Date de création';

$GLOBALS["lang"]['Created Date'] = 'Date de création';

$GLOBALS["lang"]['Creating'] = 'Création';

$GLOBALS["lang"]['Creating Device'] = 'Création d\'un périphérique';

$GLOBALS["lang"]['Creating a Query'] = 'Création d\'une requête';

$GLOBALS["lang"]['creator'] = 'Créateur';

$GLOBALS["lang"]['Creator'] = 'Créateur';

$GLOBALS["lang"]['credential'] = 'Crédance';

$GLOBALS["lang"]['Credential'] = 'Crédance';

$GLOBALS["lang"]['credentials'] = 'Pouvoirs';

$GLOBALS["lang"]['Credentials'] = 'Pouvoirs';

$GLOBALS["lang"]['Credentials Client ID'] = 'Pouvoirs Identification du client';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Pouvoirs Abonnement Numéro d\'identification';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Pouvoirs Identification du locataire';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Pouvoirs pour Amazon AWS utilisé dans Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Pouvoirs de Microsoft Azure utilisé dans Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Critique';

$GLOBALS["lang"]['criticality'] = 'Criticité';

$GLOBALS["lang"]['Criticality'] = 'Criticité';

$GLOBALS["lang"]['Croatia'] = 'Croatie';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Actuellement';

$GLOBALS["lang"]['Current'] = 'Actuellement';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Processus de découverte actuels';

$GLOBALS["lang"]['Current date & time is '] = 'Date & heure actuelle est ';

$GLOBALS["lang"]['Currently Installed'] = 'Installé actuellement';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Les types actuellement pris en charge sont: <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> ou <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Ports TCP personnalisés';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personnalisé Ports';

$GLOBALS["lang"]['Cve'] = 'Cév';

$GLOBALS["lang"]['Cyprus'] = 'Chypre';

$GLOBALS["lang"]['Czech'] = 'Tchèque';

$GLOBALS["lang"]['Czech Republic'] = 'République tchèque';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Compte DN (facultatif)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Mot de passe (facultatif)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nom d\'hôte DNS';

$GLOBALS["lang"]['dashboard_id'] = 'ID du tableau de bord';

$GLOBALS["lang"]['Dashboard ID'] = 'ID du tableau de bord';

$GLOBALS["lang"]['dashboards'] = 'Tableaux de bord';

$GLOBALS["lang"]['Dashboards'] = 'Tableaux de bord';

$GLOBALS["lang"]['Database'] = 'Base de données';

$GLOBALS["lang"]['db_action'] = 'Action dans la base de données';

$GLOBALS["lang"]['Database Action'] = 'Action dans la base de données';

$GLOBALS["lang"]['db_column'] = 'Colonne de base de données';

$GLOBALS["lang"]['Database Column'] = 'Colonne de base de données';

$GLOBALS["lang"]['Database Definition'] = 'Définition des bases de données';

$GLOBALS["lang"]['db_row'] = 'Ligne de base de données';

$GLOBALS["lang"]['Database Row'] = 'Ligne de base de données';

$GLOBALS["lang"]['Database Schema'] = 'Schéma de base de données';

$GLOBALS["lang"]['db_table'] = 'Tableau de base de données';

$GLOBALS["lang"]['Database Table'] = 'Tableau de base de données';

$GLOBALS["lang"]['dataset_title'] = 'Titre de l\'ensemble de données';

$GLOBALS["lang"]['Dataset Title'] = 'Titre de l\'ensemble de données';

$GLOBALS["lang"]['date'] = 'Date';

$GLOBALS["lang"]['Date'] = 'Date';

$GLOBALS["lang"]['Date D-M-Y'] = 'Date D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Date M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Date maintenant';

$GLOBALS["lang"]['date_of_manufacture'] = 'Date de fabrication';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Date de fabrication';

$GLOBALS["lang"]['date_paid'] = 'Date de paiement';

$GLOBALS["lang"]['Date Paid'] = 'Date de paiement';

$GLOBALS["lang"]['date_received'] = 'Date de réception';

$GLOBALS["lang"]['Date Received'] = 'Date de réception';

$GLOBALS["lang"]['Date Y-M-D'] = 'Date Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Date et heure de la dernière mise à jour du CVE.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Date et heure de publication de la CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Date de publication de la CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Heure de la date';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateHeure Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Jour du mois';

$GLOBALS["lang"]['Day Of Month'] = 'Jour du mois';

$GLOBALS["lang"]['day_of_week'] = 'Jour de la semaine';

$GLOBALS["lang"]['Day Of Week'] = 'Jour de la semaine';

$GLOBALS["lang"]['Day of Month'] = 'Jour du mois';

$GLOBALS["lang"]['dbus_identifier'] = 'Identificateur Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identificateur Dbus';

$GLOBALS["lang"]['Debug'] = 'Débogues';

$GLOBALS["lang"]['December'] = 'Décembre';

$GLOBALS["lang"]['Default'] = 'Par défaut';

$GLOBALS["lang"]['Default Items'] = 'Éléments par défaut';

$GLOBALS["lang"]['Default Value'] = 'Valeur par défaut';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Par défaut de 389. Normalement 636 utilisé pour Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Par défaut de <code>3</code> pour LDAP et Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Par défaut';

$GLOBALS["lang"]['delay_minutes'] = 'Procès-verbal de retard';

$GLOBALS["lang"]['Delay Minutes'] = 'Procès-verbal de retard';

$GLOBALS["lang"]['Delete'] = 'Supprimer';

$GLOBALS["lang"]['Delete Example Devices'] = 'Supprimer des exemples de dispositifs';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Supprimer Externe De Interne';

$GLOBALS["lang"]['Delete External From Internal'] = 'Supprimer Externe De Interne';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Supprimer le NMIS Dispositifs si non dans Open-Audit';

$GLOBALS["lang"]['Delete from Application'] = 'Supprimer de la demande';

$GLOBALS["lang"]['Delete from Cluster'] = 'Supprimer du groupe';

$GLOBALS["lang"]['Denmark'] = 'Danemark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Dérivés par audit ou définis manuellement par l\'utilisateur.';

$GLOBALS["lang"]['Derived by audit.'] = 'Dérivés par vérification.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Dérivés <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Dérivés <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Dérivé de la découverte Collector.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Dérivé du nom de l\'OS.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Dérivé de la découverte du nuage.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Dérivé des audits d\'appareils.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Dérivé du type de périphérique et du système d\'exploitation.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Dérivé de la découverte.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Dérivé de hostname, sysName, dns Hostname et IP dans cet ordre.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Dérivé de la sévérité entière.';

$GLOBALS["lang"]['description'] = 'Désignation des marchandises';

$GLOBALS["lang"]['Description'] = 'Désignation des marchandises';

$GLOBALS["lang"]['destination'] = 'Destination';

$GLOBALS["lang"]['Destination'] = 'Destination';

$GLOBALS["lang"]['detail'] = 'Détail';

$GLOBALS["lang"]['Detail'] = 'Détail';

$GLOBALS["lang"]['Details'] = 'Détails';

$GLOBALS["lang"]['details'] = 'Détails';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Détails de qui est habituellement contactable sur ce site.';

$GLOBALS["lang"]['device'] = 'Appareil';

$GLOBALS["lang"]['Device'] = 'Appareil';

$GLOBALS["lang"]['Device Audits'] = 'Vérifications des appareils';

$GLOBALS["lang"]['Device ID'] = 'ID du périphérique';

$GLOBALS["lang"]['device_id'] = 'ID du périphérique';

$GLOBALS["lang"]['device_id_a'] = 'ID du périphérique A';

$GLOBALS["lang"]['Device ID A'] = 'ID du périphérique A';

$GLOBALS["lang"]['device_id_b'] = 'ID du périphérique B';

$GLOBALS["lang"]['Device ID B'] = 'ID du périphérique B';

$GLOBALS["lang"]['Device Name'] = 'Nom du périphérique';

$GLOBALS["lang"]['Device Result'] = 'Résultat du périphérique';

$GLOBALS["lang"]['Device Results'] = 'Résultats de l\'appareil';

$GLOBALS["lang"]['Device Seed'] = 'Semence du périphérique';

$GLOBALS["lang"]['Device Seed IP'] = 'IP de semences du périphérique';

$GLOBALS["lang"]['Device Status'] = 'État du périphérique';

$GLOBALS["lang"]['Device Types'] = 'Types de périphériques';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Le périphérique est dans le Subnet';

$GLOBALS["lang"]['Devices'] = 'Dispositifs';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositifs assignés à l\'emplacement';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositifs assignés à l\'emplacement';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositifs assignés à Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositifs assignés à Org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositifs audités';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositifs créés dans ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Appareils créés dans Open-Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Colonnes d\'affichage par défaut des périphériques';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Colonnes d\'affichage par défaut des périphériques';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositifs trouvés 7 derniers jours';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositifs trouvés aujourd\'hui';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositifs trouvés hier';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositifs non vérifiés';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositifs non vus 30 jours';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Appareils non vus 7 jours';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositifs non vus 90 jours';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositifs récupérés via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositifs sélectionnés parmi ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositifs sélectionnés dans Open-Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositifs mis à jour dans ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositifs mis à jour dans Open-Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Les appareils sont référencés.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Les appareils ne sont pas étalonnés.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'On pourrait comparer les appareils.';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositifs en état de fonctionnement';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositifs en état stoppé';

$GLOBALS["lang"]['Devices in this'] = 'Dispositifs dans ce';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Dévié de type ou OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp activé';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp activé';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Le contrat de location expire';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Le contrat de location expire';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Bail obtenu';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Bail obtenu';

$GLOBALS["lang"]['dhcp_server'] = 'Serveur Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Serveur Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'La commande a-t-elle réussi et renvoyé les données attendues.';

$GLOBALS["lang"]['direction'] = 'Direction';

$GLOBALS["lang"]['Direction'] = 'Direction';

$GLOBALS["lang"]['directory'] = 'Répertoire';

$GLOBALS["lang"]['Directory'] = 'Répertoire';

$GLOBALS["lang"]['disabled'] = 'Handicapé';

$GLOBALS["lang"]['Disabled'] = 'Handicapé';

$GLOBALS["lang"]['discard'] = 'Éliminer';

$GLOBALS["lang"]['Discard'] = 'Éliminer';

$GLOBALS["lang"]['Discover'] = 'Découvrir';

$GLOBALS["lang"]['discoveries'] = 'Découvertes';

$GLOBALS["lang"]['Discoveries'] = 'Découvertes';

$GLOBALS["lang"]['Discovery'] = 'Découverte';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Les journaux de changement de découverte';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Conservation des données de découverte';

$GLOBALS["lang"]['discovery_id'] = 'ID de découverte';

$GLOBALS["lang"]['Discovery ID'] = 'ID de découverte';

$GLOBALS["lang"]['Discovery Issues'] = 'Problèmes de découverte';

$GLOBALS["lang"]['discovery_log'] = 'Journal des découvertes';

$GLOBALS["lang"]['Discovery Log'] = 'Journal des découvertes';

$GLOBALS["lang"]['Discovery Match Options'] = 'Options de correspondance de découverte';

$GLOBALS["lang"]['Discovery Name'] = 'Nom de la découverte';

$GLOBALS["lang"]['Discovery Options'] = 'Options de découverte';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Nombre de files d\'attente découvertes';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Limite des files d\'attente à la découverte';

$GLOBALS["lang"]['discovery_run'] = 'Course à la découverte';

$GLOBALS["lang"]['Discovery Run'] = 'Course à la découverte';

$GLOBALS["lang"]['discovery_scan_options'] = 'Options de numérisation de découverte';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Options de numérisation de découverte';

$GLOBALS["lang"]['disk'] = 'Disque';

$GLOBALS["lang"]['Disk'] = 'Disque';

$GLOBALS["lang"]['display_version'] = 'Afficher la version';

$GLOBALS["lang"]['Display Version'] = 'Afficher la version';

$GLOBALS["lang"]['Display in Menu'] = 'Afficher dans le menu';

$GLOBALS["lang"]['district'] = 'District';

$GLOBALS["lang"]['District'] = 'District';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Domaine Dns';

$GLOBALS["lang"]['Dns Domain'] = 'Domaine Dns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domaine Reg activé';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domaine Reg activé';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Nom de l\'hôte Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Nom de l\'hôte Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Nom d\'hôte';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Nom d\'hôte';

$GLOBALS["lang"]['dns_server'] = 'Serveur Dns';

$GLOBALS["lang"]['Dns Server'] = 'Serveur Dns';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne pas scanner ces ports TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne pas scanner ces ports UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne me montre plus jamais';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Voulez-vous utiliser le transport sécurisé (LDAPS) ou LDAP non chiffré régulier.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Voulez-vous voir la barre latérale standard sur la gauche.';

$GLOBALS["lang"]['documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation'] = 'Documentation';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La licence s\'applique aux enfants Orgs.';

$GLOBALS["lang"]['domain'] = 'Domaine';

$GLOBALS["lang"]['Domain'] = 'Domaine';

$GLOBALS["lang"]['domain_controller_address'] = 'Adresse du contrôleur de domaine';

$GLOBALS["lang"]['Domain Controller Address'] = 'Adresse du contrôleur de domaine';

$GLOBALS["lang"]['domain_controller_name'] = 'Contrôleur de domaine Dénomination';

$GLOBALS["lang"]['Domain Controller Name'] = 'Contrôleur de domaine Dénomination';

$GLOBALS["lang"]['domain_role'] = 'Rôle du domaine';

$GLOBALS["lang"]['Domain Role'] = 'Rôle du domaine';

$GLOBALS["lang"]['domain_short'] = 'Domaine Court';

$GLOBALS["lang"]['Domain Short'] = 'Domaine Court';

$GLOBALS["lang"]['Dominica'] = 'Dominique';

$GLOBALS["lang"]['Dominican Republic'] = 'République dominicaine';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ne me tiens pas la main, je sais ce que je fais. Pas de filtre et la possibilité de joindre des tables personnalisées.';

$GLOBALS["lang"]['Download'] = 'Télécharger';

$GLOBALS["lang"]['Download a file from URL'] = 'Télécharger un fichier depuis l\'URL';

$GLOBALS["lang"]['driver'] = 'Conducteur';

$GLOBALS["lang"]['Driver'] = 'Conducteur';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Durée';

$GLOBALS["lang"]['Duration'] = 'Durée';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Équateur';

$GLOBALS["lang"]['Edit'] = 'Modifier';

$GLOBALS["lang"]['edit_log'] = 'Modifier le journal';

$GLOBALS["lang"]['Edit Log'] = 'Modifier le journal';

$GLOBALS["lang"]['editable'] = 'Éditable';

$GLOBALS["lang"]['Editable'] = 'Éditable';

$GLOBALS["lang"]['edited_by'] = 'Édité par';

$GLOBALS["lang"]['Edited By'] = 'Édité par';

$GLOBALS["lang"]['edited_date'] = 'Date de modification';

$GLOBALS["lang"]['Edited Date'] = 'Date de modification';

$GLOBALS["lang"]['edition'] = 'Édition';

$GLOBALS["lang"]['Edition'] = 'Édition';

$GLOBALS["lang"]['Egypt'] = 'Égypte';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google ou Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Aucun ou présent.

<strong>Aucune</strong> - L\'attaque réussie ne dépend pas des conditions de déploiement et d\'exécution du système vulnérable. L\'attaquant peut s\'attendre à être en mesure d\'atteindre la vulnérabilité et exécuter l\'exploitation dans tous les cas ou la plupart des cas de vulnérabilité.

<strong>Présent</strong> - L\'attaque réussie dépend de la présence de conditions spécifiques de déploiement et d\'exécution du système vulnérable qui permettent l\'attaque. Il s\'agit notamment :

Une condition de course doit être gagnée pour exploiter avec succès la vulnérabilité. Le succès de l\'attaque est conditionné par des conditions d\'exécution qui ne sont pas sous le contrôle total de l\'agresseur. L\'attaque peut devoir être lancée plusieurs fois contre une seule cible avant d\'être réussie.

Injection réseau. L\'agresseur doit s\'injecter dans le réseau logique entre la cible et la ressource demandée par la victime (p. ex. vulnérabilités nécessitant un attaquant sur le sentier).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Courriel';

$GLOBALS["lang"]['Email'] = 'Courriel';

$GLOBALS["lang"]['email_address'] = 'Adresse électronique';

$GLOBALS["lang"]['Email Address'] = 'Adresse électronique';

$GLOBALS["lang"]['Email Configuration'] = 'Configuration du courriel';

$GLOBALS["lang"]['Email to send test to'] = 'Courriel pour envoyer le test à';

$GLOBALS["lang"]['Enable'] = 'Activer';

$GLOBALS["lang"]['enabled'] = 'Activé';

$GLOBALS["lang"]['Enabled'] = 'Activé';

$GLOBALS["lang"]['encryption'] = 'Chiffrement';

$GLOBALS["lang"]['Encryption'] = 'Chiffrement';

$GLOBALS["lang"]['encryption_method'] = 'Méthode de chiffrement';

$GLOBALS["lang"]['Encryption Method'] = 'Méthode de chiffrement';

$GLOBALS["lang"]['encryption_status'] = 'État du chiffrement';

$GLOBALS["lang"]['Encryption Status'] = 'État du chiffrement';

$GLOBALS["lang"]['end_date'] = 'Date de fin';

$GLOBALS["lang"]['End Date'] = 'Date de fin';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Identification du produit en fin de vie';

$GLOBALS["lang"]['end_of_life'] = 'Fin de vie';

$GLOBALS["lang"]['End Of Life'] = 'Fin de vie';

$GLOBALS["lang"]['end_of_production'] = 'Fin de la production';

$GLOBALS["lang"]['End Of Production'] = 'Fin de la production';

$GLOBALS["lang"]['end_of_service'] = 'Fin de service';

$GLOBALS["lang"]['End Of Service'] = 'Fin de service';

$GLOBALS["lang"]['end_of_service_life'] = 'Fin de vie au service';

$GLOBALS["lang"]['End Of Service Life'] = 'Fin de vie au service';

$GLOBALS["lang"]['English'] = 'changements climatiques';

$GLOBALS["lang"]['enterprise'] = 'Entreprise';

$GLOBALS["lang"]['Enterprise'] = 'Entreprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Réseau privé d\'entreprise';

$GLOBALS["lang"]['Entitlement Type'] = 'Type de droit';

$GLOBALS["lang"]['environment'] = 'Environnement';

$GLOBALS["lang"]['Environment'] = 'Environnement';

$GLOBALS["lang"]['Equal To'] = 'égale à';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'égale ou supérieure à';

$GLOBALS["lang"]['Equal To or Less Than'] = 'égale ou inférieure à';

$GLOBALS["lang"]['Equals'] = 'Égal';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guinée équatoriale';

$GLOBALS["lang"]['Eritrea'] = 'Érythrée';

$GLOBALS["lang"]['Error'] = 'Erreur';

$GLOBALS["lang"]['Error Code'] = 'Code d\'erreur';

$GLOBALS["lang"]['Established'] = 'Création';

$GLOBALS["lang"]['Estonia'] = 'Espagne';

$GLOBALS["lang"]['Ethernet MAC'] = 'MAC Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Éthiopie';

$GLOBALS["lang"]['Every'] = 'Chaque';

$GLOBALS["lang"]['Every Day'] = 'Tous les jours';

$GLOBALS["lang"]['Exceptions'] = 'Exceptions';

$GLOBALS["lang"]['exclude'] = 'Exclure';

$GLOBALS["lang"]['Exclude'] = 'Exclure';

$GLOBALS["lang"]['exclude_ip'] = 'Exclure la PI';

$GLOBALS["lang"]['Exclude IP'] = 'Exclure la PI';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclure les adresses IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclure les ports TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclure les ports Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclure les ports Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclure les ports UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclure les ports Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclure les ports Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Exclure ces adresses IP d\'être numérisées Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Exclusion';

$GLOBALS["lang"]['exclusion_reasons'] = 'Motifs d\'exclusion';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Motifs d\'exclusion';

$GLOBALS["lang"]['executable'] = 'Exécutable';

$GLOBALS["lang"]['Executable'] = 'Exécutable';

$GLOBALS["lang"]['executable_id'] = 'ID exécutable';

$GLOBALS["lang"]['Executable ID'] = 'ID exécutable';

$GLOBALS["lang"]['executables'] = 'exécutables';

$GLOBALS["lang"]['Executables'] = 'exécutables';

$GLOBALS["lang"]['Execute'] = 'Exécuter';

$GLOBALS["lang"]['Executing'] = 'Exécution';

$GLOBALS["lang"]['exemption_reason'] = 'Exonération';

$GLOBALS["lang"]['Exemption Reason'] = 'Exonération';

$GLOBALS["lang"]['Existing Building'] = 'Bâtiment existant';

$GLOBALS["lang"]['Existing Floor'] = 'Plancher existant';

$GLOBALS["lang"]['Existing Room'] = 'Salle existante';

$GLOBALS["lang"]['Existing Row'] = 'Ligne existante';

$GLOBALS["lang"]['expire_date'] = 'Date d\'expiration';

$GLOBALS["lang"]['Expire Date'] = 'Date d\'expiration';

$GLOBALS["lang"]['expire_minutes'] = 'Expire le procès-verbal';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire le procès-verbal';

$GLOBALS["lang"]['expires'] = 'Expire';

$GLOBALS["lang"]['Expires'] = 'Expire';

$GLOBALS["lang"]['expiry_date'] = 'Date d\'expiration';

$GLOBALS["lang"]['Expiry Date'] = 'Date d\'expiration';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploiter la maturité';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploiter la maturité';

$GLOBALS["lang"]['Export'] = 'Exportations';

$GLOBALS["lang"]['Export by Device'] = 'Exportation par périphérique';

$GLOBALS["lang"]['Export by Policy'] = 'Exportation par politique';

$GLOBALS["lang"]['Export data to'] = 'Données d \' exportation';

$GLOBALS["lang"]['expose'] = 'Exposition';

$GLOBALS["lang"]['Expose'] = 'Exposition';

$GLOBALS["lang"]['External'] = 'Extérieur';

$GLOBALS["lang"]['External Field Name'] = 'Nom du champ externe';

$GLOBALS["lang"]['External Field Type'] = 'Type de champ externe';

$GLOBALS["lang"]['external_ident'] = 'Identification externe';

$GLOBALS["lang"]['External Ident'] = 'Identification externe';

$GLOBALS["lang"]['external_link'] = 'Lien externe';

$GLOBALS["lang"]['External Link'] = 'Lien externe';

$GLOBALS["lang"]['extra_columns'] = 'Colonnes supplémentaires';

$GLOBALS["lang"]['Extra Columns'] = 'Colonnes supplémentaires';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'L\'enregistrement supplémentaire et plus de verbes est généré pour le dépannage.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Révision FW';

$GLOBALS["lang"]['Fail'] = 'Échec';

$GLOBALS["lang"]['Failed'] = 'Échec';

$GLOBALS["lang"]['Failed Severity'] = 'Gravité échouée';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Îles Falkland (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Famille';

$GLOBALS["lang"]['Faroe Islands'] = 'Îles Féroé';

$GLOBALS["lang"]['Features'] = 'Caractéristiques';

$GLOBALS["lang"]['February'] = 'Février';

$GLOBALS["lang"]['field'] = 'Champ';

$GLOBALS["lang"]['Field'] = 'Champ';

$GLOBALS["lang"]['field_id'] = 'ID du champ';

$GLOBALS["lang"]['Field ID'] = 'ID du champ';

$GLOBALS["lang"]['Field Name'] = 'Nom du champ';

$GLOBALS["lang"]['Field Type'] = 'Type de champ';

$GLOBALS["lang"]['Fields'] = 'Champs';

$GLOBALS["lang"]['fields'] = 'Champs';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Îles Fidji';

$GLOBALS["lang"]['File'] = 'Fichier';

$GLOBALS["lang"]['File Import'] = 'Importation de fichier';

$GLOBALS["lang"]['File Input'] = 'Entrée du fichier';

$GLOBALS["lang"]['file_name'] = 'Nom du fichier';

$GLOBALS["lang"]['File Name'] = 'Nom du fichier';

$GLOBALS["lang"]['file_size'] = 'Taille du fichier';

$GLOBALS["lang"]['File Size'] = 'Taille du fichier';

$GLOBALS["lang"]['filename'] = 'Nom du fichier';

$GLOBALS["lang"]['Filename'] = 'Nom du fichier';

$GLOBALS["lang"]['files'] = 'Fichiers';

$GLOBALS["lang"]['Files'] = 'Fichiers';

$GLOBALS["lang"]['files_id'] = 'ID des fichiers';

$GLOBALS["lang"]['Files ID'] = 'ID des fichiers';

$GLOBALS["lang"]['filter'] = 'Filtre';

$GLOBALS["lang"]['Filter'] = 'Filtre';

$GLOBALS["lang"]['filtered'] = 'Filtré';

$GLOBALS["lang"]['Filtered'] = 'Filtré';

$GLOBALS["lang"]['Finland'] = 'Finlande';

$GLOBALS["lang"]['Firewall'] = 'Pare-feu';

$GLOBALS["lang"]['firewall_rule'] = 'Règle du pare-feu';

$GLOBALS["lang"]['Firewall Rule'] = 'Règle du pare-feu';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Révision du firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Révision du firmware';

$GLOBALS["lang"]['First Name'] = 'Prénom';

$GLOBALS["lang"]['first_run'] = 'Première course';

$GLOBALS["lang"]['First Run'] = 'Première course';

$GLOBALS["lang"]['first_seen'] = 'Première vue';

$GLOBALS["lang"]['First Seen'] = 'Première vue';

$GLOBALS["lang"]['FirstWave'] = 'Première attente';

$GLOBALS["lang"]['Fix'] = 'Correction';

$GLOBALS["lang"]['Fixed'] = 'Correction';

$GLOBALS["lang"]['Floor'] = 'Plancher';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Suivez l\'un des liens ci-dessous et découvrez comment utiliser Open-Audit pour découvrir <b>Qu\'y a-t-il sur votre réseau?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Pour une découverte de semences, ne devrais-je découvrir que des IP dans l\'espace d\'adresse IP privé.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Pour une découverte de semences, ne devrais-je découvrir que des IP sur le sous-réseau choisi.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Pour une découverte de graines, devrais-je lancer le sous-réseau avant de lancer la découverte.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Pour l\'entrée avancée d\'une requête SQL brute. Selon les requêtes, vous devez inclure <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Pour les licences qui ne sont pas perpétuelles, quand la licence expire.';

$GLOBALS["lang"]['form_factor'] = 'Facteur de forme';

$GLOBALS["lang"]['Form Factor'] = 'Facteur de forme';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'France, République française';

$GLOBALS["lang"]['free'] = 'Gratuit';

$GLOBALS["lang"]['Free'] = 'Gratuit';

$GLOBALS["lang"]['French'] = 'Français';

$GLOBALS["lang"]['French Guiana'] = 'Guyane française';

$GLOBALS["lang"]['French Polynesia'] = 'Polynésie française';

$GLOBALS["lang"]['French Southern Territories'] = 'Territoires du Sud français';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Foire aux questions';

$GLOBALS["lang"]['Friday'] = 'Vendredi';

$GLOBALS["lang"]['From 100 Devices'] = 'À partir de 100 appareils';

$GLOBALS["lang"]['From 500 Devices'] = 'À partir de 500 appareils';

$GLOBALS["lang"]['full_name'] = 'Nom complet';

$GLOBALS["lang"]['Full Name'] = 'Nom complet';

$GLOBALS["lang"]['function'] = 'Fonction';

$GLOBALS["lang"]['Function'] = 'Fonction';

$GLOBALS["lang"]['GROUP BY'] = 'GROUPE';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambie';

$GLOBALS["lang"]['gateway'] = 'Passerelle';

$GLOBALS["lang"]['Gateway'] = 'Passerelle';

$GLOBALS["lang"]['gateways'] = 'Portails';

$GLOBALS["lang"]['Gateways'] = 'Portails';

$GLOBALS["lang"]['Generated By'] = 'Produit par';

$GLOBALS["lang"]['geo'] = 'Géo';

$GLOBALS["lang"]['Geo'] = 'Géo';

$GLOBALS["lang"]['Georgia'] = 'Géorgie';

$GLOBALS["lang"]['German'] = 'Allemand';

$GLOBALS["lang"]['Germany'] = 'Allemagne';

$GLOBALS["lang"]['Get Lat/Long'] = 'Obtenez Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Commencez';

$GLOBALS["lang"]['Get a Free License'] = 'Obtenez une licence gratuite';

$GLOBALS["lang"]['Getting Started'] = 'Commencer';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Options mondiales de découverte';

$GLOBALS["lang"]['Go'] = 'Allez';

$GLOBALS["lang"]['Google Compute Fields'] = 'Champs de calcul Google';

$GLOBALS["lang"]['Google Maps API Key'] = 'API Google Maps Clé';

$GLOBALS["lang"]['Greater Than'] = 'Plus que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Supérieur ou égal à';

$GLOBALS["lang"]['Greece'] = 'Grèce';

$GLOBALS["lang"]['Green Query'] = 'Demande verte';

$GLOBALS["lang"]['Greenland'] = 'Groenland';

$GLOBALS["lang"]['Grenada'] = 'Grenade';

$GLOBALS["lang"]['Group'] = 'Groupe';

$GLOBALS["lang"]['group_by'] = 'Groupe par';

$GLOBALS["lang"]['Group By'] = 'Groupe par';

$GLOBALS["lang"]['group_id'] = 'ID du groupe';

$GLOBALS["lang"]['Group ID'] = 'ID du groupe';

$GLOBALS["lang"]['groups'] = 'Groupes';

$GLOBALS["lang"]['Groups'] = 'Groupes';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernesey';

$GLOBALS["lang"]['guest_device_id'] = 'ID du périphérique invité';

$GLOBALS["lang"]['Guest Device ID'] = 'ID du périphérique invité';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinée';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinée-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Révision HW';

$GLOBALS["lang"]['Haiti'] = 'Haïti';

$GLOBALS["lang"]['hard_drive_index'] = 'Index du disque dur';

$GLOBALS["lang"]['Hard Drive Index'] = 'Index du disque dur';

$GLOBALS["lang"]['hardware_revision'] = 'Révision matérielle';

$GLOBALS["lang"]['Hardware Revision'] = 'Révision matérielle';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Cette politique a-t-elle été appliquée dans cette organisation?';

$GLOBALS["lang"]['hash'] = 'Fausse';

$GLOBALS["lang"]['Hash'] = 'Fausse';

$GLOBALS["lang"]['Head'] = 'Tête';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island et McDonald Islands';

$GLOBALS["lang"]['height'] = 'Hauteur';

$GLOBALS["lang"]['Height'] = 'Hauteur';

$GLOBALS["lang"]['Height in RU'] = 'Hauteur en RU';

$GLOBALS["lang"]['Help'] = 'Aide';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Aide et foire aux questions';

$GLOBALS["lang"]['high'] = 'Élevé';

$GLOBALS["lang"]['High'] = 'Élevé';

$GLOBALS["lang"]['High Availability'] = 'Disponibilité élevée';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Saint-Siège (État de la ville du Vatican)';

$GLOBALS["lang"]['Home'] = 'Sommaire';

$GLOBALS["lang"]['home'] = 'Sommaire';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Hôte';

$GLOBALS["lang"]['Host'] = 'Hôte';

$GLOBALS["lang"]['hostname'] = 'Nom de l\'hôte';

$GLOBALS["lang"]['Hostname'] = 'Nom de l\'hôte';

$GLOBALS["lang"]['hour'] = 'Heure';

$GLOBALS["lang"]['Hour'] = 'Heure';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Comment et pourquoi Open-Audit est-il plus sûr';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Combien de temps la commande a-t-elle fallu pour l\'exécuter ?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Combien de temps Nmap devrait attendre une réponse, par appareil.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Combien de circuits alimentent ce rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Combien de politiques aboutissent à un échec.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Combien de politiques aboutissent à un laissez-passer.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Combien de prises de courant dans ce rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Combien d\'unités de rack en hauteur est ce rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'À quelle fréquence le collecteur doit-il demander une tâche au serveur?';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Comment sélectionner les appareils à intégrer (en utilisant un Attribut, une requête ou un groupe).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Comment la vulnérabilité est exploitée (p. ex., réseau, adjacent, local, physique).';

$GLOBALS["lang"]['How to compare'] = 'Comment comparer';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Explication de la vulnérabilité lisible par l\'homme.';

$GLOBALS["lang"]['Hungary'] = 'Hongrie';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'J\'ai lu l\'EULA.';

$GLOBALS["lang"]['id'] = 'Numéro d\'identification';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'SI';

$GLOBALS["lang"]['IOS Version'] = 'Version IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adresse IP';

$GLOBALS["lang"]['IP Addresses'] = 'Adresses IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Dernière vue';

$GLOBALS["lang"]['IP Set By'] = 'Configuration IP par';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 seulement.';

$GLOBALS["lang"]['Iceland'] = 'Espagne';

$GLOBALS["lang"]['icon'] = 'Icône';

$GLOBALS["lang"]['Icon'] = 'Icône';

$GLOBALS["lang"]['Icon and Text'] = 'Icône et texte';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icône seulement, texte seulement ou icône et texte.';

$GLOBALS["lang"]['id_internal'] = 'Id Interne';

$GLOBALS["lang"]['Id Internal'] = 'Id Interne';

$GLOBALS["lang"]['id_number'] = 'Numéro d\'identification';

$GLOBALS["lang"]['Id Number'] = 'Numéro d\'identification';

$GLOBALS["lang"]['identification'] = 'Identification';

$GLOBALS["lang"]['Identification'] = 'Identification';

$GLOBALS["lang"]['If'] = 'Si';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Si un port répond avec filtré, si nous le considérons disponible.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Si un port répond avec ouvert, devrait-on le considérer disponible.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Si un périphérique distant n\'existe pas dans les périphériques sélectionnés Open-Audit, si nous le supprimons du système externe.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Si un périphérique Open-Audit a été modifié, si nous mettons à jour le système externe.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Si un périphérique Open-Audit n\'est pas sur le système externe, devrait-on le créer.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Si un agent déclare que son IP principal se trouve dans ce sous-réseau, effectuez les actions.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Si l\'un de ces ports (comma séparé, pas d\'espace) est détecté, supposons que SSH fonctionne sur eux et les utilise pour l\'audit. Pas besoin d\'ajouter ce port aux ports TCP personnalisés - il sera ajouté automatiquement.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Si défini, contient un tableau JSON de colonnes de périphérique spécifiques que l\'utilisateur a choisi de voir, autre que la configuration par défaut.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Si la famille d\'agents OS (cas insensible) contient cette chaîne, effectuez les actions.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Si les conditions suivantes sont remplies:<br/><ul><li>un rôle a un ad_group assigné</li><li>un Org a un _groupe ad assigné</li><li>une DLAP Le serveur a use_roles défini à y</li><li>un utilisateur existe dans LDAP (qu\'il soit Active Directory ou OpenLDAP) et est dans les ad_groups assignés</li></ul>Cet utilisateur peut se connecter à Open-Audit sans avoir besoin de créer un compte dans Open-Audit. Open-Audit interrogera le LDAP en question et si l\'utilisateur est dans les groupes requis mais pas dans Open-Audit, ses attributs utilisateur (nom, nom complet, email, rôles, orgs, etc) au sein d\'Open-Audit seront automatiquement remplis et ils seront connectés.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Si l\'utilisateur se connecte à Open-Audit n\'a pas l\'accès à la recherche LDAP, vous pouvez utiliser un autre compte qui a cet accès.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Si ce nombre de minutes ou plus ont passé depuis que le périphérique a contacté le serveur, effectuez les actions.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Si vous choisissez un Collector, il sera programmé pour exécuter sur la prochaine limite de 5 minutes.';

$GLOBALS["lang"]['ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Ignorées';

$GLOBALS["lang"]['image'] = 'Image';

$GLOBALS["lang"]['Image'] = 'Image';

$GLOBALS["lang"]['Images'] = 'Images';

$GLOBALS["lang"]['impact_availability'] = 'Impact Disponibilité';

$GLOBALS["lang"]['Impact Availability'] = 'Impact Disponibilité';

$GLOBALS["lang"]['impact_confidentiality'] = 'Incidence Confidentialité';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Incidence Confidentialité';

$GLOBALS["lang"]['impact_integrity'] = 'Impact Intégrité';

$GLOBALS["lang"]['Impact Integrity'] = 'Impact Intégrité';

$GLOBALS["lang"]['implementation_notes'] = 'Notes de mise en œuvre';

$GLOBALS["lang"]['Implementation Notes'] = 'Notes de mise en œuvre';

$GLOBALS["lang"]['Import'] = 'Importation';

$GLOBALS["lang"]['Import Example Data'] = 'Importer des données d\'exemple';

$GLOBALS["lang"]['improvement_opportunities'] = 'Possibilités d\'amélioration';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Possibilités d\'amélioration';

$GLOBALS["lang"]['In'] = 'Dans';

$GLOBALS["lang"]['Inactive'] = 'Inactif';

$GLOBALS["lang"]['Include'] = 'Inclure';

$GLOBALS["lang"]['Incomplete'] = 'Incomplète';

$GLOBALS["lang"]['Index'] = 'Sommaire';

$GLOBALS["lang"]['India'] = 'Inde';

$GLOBALS["lang"]['Indonesia'] = 'Indonésie';

$GLOBALS["lang"]['Info'] = 'Informations';

$GLOBALS["lang"]['Informational'] = 'Informations';

$GLOBALS["lang"]['initial_size'] = 'Taille initiale';

$GLOBALS["lang"]['Initial Size'] = 'Taille initiale';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Type d\'entrée';

$GLOBALS["lang"]['inputs'] = 'Entrées';

$GLOBALS["lang"]['Inputs'] = 'Entrées';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insérez des données d\'exemple et découvrez tout ce que Open-Audit peut vous dire.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Insérez votre Licence acquise Clé';

$GLOBALS["lang"]['install'] = 'Installer';

$GLOBALS["lang"]['Install'] = 'Installer';

$GLOBALS["lang"]['install_date'] = 'Date d\'installation';

$GLOBALS["lang"]['Install Date'] = 'Date d\'installation';

$GLOBALS["lang"]['install_directory'] = 'Installer le répertoire';

$GLOBALS["lang"]['Install Directory'] = 'Installer le répertoire';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installez OpenScap si nécessaire';

$GLOBALS["lang"]['install_source'] = 'Installer la source';

$GLOBALS["lang"]['Install Source'] = 'Installer la source';

$GLOBALS["lang"]['installed_by'] = 'Installé par';

$GLOBALS["lang"]['Installed By'] = 'Installé par';

$GLOBALS["lang"]['installed_on'] = 'Installé';

$GLOBALS["lang"]['Installed On'] = 'Installé';

$GLOBALS["lang"]['Installing on Linux'] = 'Installation sur Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installation sur MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installation sur Windows';

$GLOBALS["lang"]['instance'] = 'Décision';

$GLOBALS["lang"]['Instance'] = 'Décision';

$GLOBALS["lang"]['instance_ident'] = 'Numéro de l\'instance';

$GLOBALS["lang"]['Instance Ident'] = 'Numéro de l\'instance';

$GLOBALS["lang"]['instance_options'] = 'Options d\'instance';

$GLOBALS["lang"]['Instance Options'] = 'Options d\'instance';

$GLOBALS["lang"]['instance_provider'] = 'Fournisseur d\'instance';

$GLOBALS["lang"]['Instance Provider'] = 'Fournisseur d\'instance';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Réserve d\'instance Identité';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Réserve d\'instance Identité';

$GLOBALS["lang"]['instance_state'] = 'État de l\'instance';

$GLOBALS["lang"]['Instance State'] = 'État de l\'instance';

$GLOBALS["lang"]['instance_tags'] = 'Étiquettes d\'instance';

$GLOBALS["lang"]['Instance Tags'] = 'Étiquettes d\'instance';

$GLOBALS["lang"]['instance_type'] = 'Type d\'instance';

$GLOBALS["lang"]['Instance Type'] = 'Type d\'instance';

$GLOBALS["lang"]['Integer'] = 'Entier';

$GLOBALS["lang"]['Integration'] = 'Intégration';

$GLOBALS["lang"]['integrations'] = 'Intégrations';

$GLOBALS["lang"]['Integrations'] = 'Intégrations';

$GLOBALS["lang"]['integrations_id'] = 'ID des intégrations';

$GLOBALS["lang"]['Integrations ID'] = 'ID des intégrations';

$GLOBALS["lang"]['integrations_log'] = 'Registre des intégrations';

$GLOBALS["lang"]['Integrations Log'] = 'Registre des intégrations';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'ID d\'interface';

$GLOBALS["lang"]['Interface ID'] = 'ID d\'interface';

$GLOBALS["lang"]['interface_type'] = 'Type d\'interface';

$GLOBALS["lang"]['Interface Type'] = 'Type d\'interface';

$GLOBALS["lang"]['Internal'] = 'Interne';

$GLOBALS["lang"]['Internal Field Name'] = 'Nom du champ interne';

$GLOBALS["lang"]['Internal ID'] = 'Identification interne';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Tableau interne JSON des jetons d\'accès valides pour cet utilisateur.';

$GLOBALS["lang"]['Introduction'] = 'Présentation';

$GLOBALS["lang"]['invoice'] = 'Facture';

$GLOBALS["lang"]['Invoice'] = 'Facture';

$GLOBALS["lang"]['invoice_id'] = 'ID de la facture';

$GLOBALS["lang"]['Invoice ID'] = 'ID de la facture';

$GLOBALS["lang"]['invoice_item'] = 'Élément de facture';

$GLOBALS["lang"]['Invoice Item'] = 'Élément de facture';

$GLOBALS["lang"]['ios_version'] = 'Version Ios';

$GLOBALS["lang"]['Ios Version'] = 'Version Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Adresse externe A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Adresse externe A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adresse externe B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adresse externe B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Adresse interne A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Adresse interne A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Adresse Interne B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Adresse Interne B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Tous les comtes';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Tous les comtes';

$GLOBALS["lang"]['ip_audited_count'] = 'Nombre vérifié';

$GLOBALS["lang"]['Ip Audited Count'] = 'Nombre vérifié';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip découvert comte';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip découvert comte';

$GLOBALS["lang"]['ip_enabled'] = 'Ip activé';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip activé';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Nombre de réponses';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Nombre de réponses';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip compte analysé';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip compte analysé';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Iraq';

$GLOBALS["lang"]['Ireland'] = 'Belgique';

$GLOBALS["lang"]['Is FRU'] = 'Est FRU';

$GLOBALS["lang"]['is_fru'] = 'Est Fru';

$GLOBALS["lang"]['Is Fru'] = 'Est Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Le serveur NMIS est-il local (sur ce serveur Open-Audit) ou distant ?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ce compte est-il actif ? Si défini à <code>n</code>, l\'utilisateur ne peut pas se connecter.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Cette requête est limitée aux clients autorisés.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Cette tâche est-elle activée (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Île de Man';

$GLOBALS["lang"]['Israel'] = 'Israël';

$GLOBALS["lang"]['Issue'] = 'Numéro';

$GLOBALS["lang"]['issuer'] = 'Émetteur';

$GLOBALS["lang"]['Issuer'] = 'Émetteur';

$GLOBALS["lang"]['issuer_name'] = 'Nom de l\'émetteur';

$GLOBALS["lang"]['Issuer Name'] = 'Nom de l\'émetteur';

$GLOBALS["lang"]['Issues'] = 'Problèmes';

$GLOBALS["lang"]['Italy'] = 'Italie';

$GLOBALS["lang"]['Items not in Baseline'] = 'Points non inscrits au niveau de référence';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON à importer';

$GLOBALS["lang"]['Jamaica'] = 'Jamaïque';

$GLOBALS["lang"]['January'] = 'Janvier';

$GLOBALS["lang"]['Japan'] = 'Japon';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanie';

$GLOBALS["lang"]['July'] = 'Juillet';

$GLOBALS["lang"]['June'] = 'Juin';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Version du noyau';

$GLOBALS["lang"]['Kernel Version'] = 'Version du noyau';

$GLOBALS["lang"]['Key'] = 'Clé';

$GLOBALS["lang"]['Key Password (optional)'] = 'Mot de passe clé (facultatif)';

$GLOBALS["lang"]['keys'] = 'Clés';

$GLOBALS["lang"]['Keys'] = 'Clés';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corée';

$GLOBALS["lang"]['Kuwait'] = 'Koweït';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'République kirghize';

$GLOBALS["lang"]['lang'] = 'Langue';

$GLOBALS["lang"]['Lang'] = 'Langue';

$GLOBALS["lang"]['language'] = 'Langue';

$GLOBALS["lang"]['Language'] = 'Langue';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Dernière modification';

$GLOBALS["lang"]['Last Changed'] = 'Dernière modification';

$GLOBALS["lang"]['last_finished'] = 'Dernier terminé';

$GLOBALS["lang"]['Last Finished'] = 'Dernier terminé';

$GLOBALS["lang"]['last_logon'] = 'Dernière connexion';

$GLOBALS["lang"]['Last Logon'] = 'Dernière connexion';

$GLOBALS["lang"]['Last Name'] = 'Nom de famille';

$GLOBALS["lang"]['last_os_update'] = 'Dernière mise à jour Os';

$GLOBALS["lang"]['Last Os Update'] = 'Dernière mise à jour Os';

$GLOBALS["lang"]['last_result'] = 'Dernier résultat';

$GLOBALS["lang"]['Last Result'] = 'Dernier résultat';

$GLOBALS["lang"]['last_run'] = 'Dernière course';

$GLOBALS["lang"]['Last Run'] = 'Dernière course';

$GLOBALS["lang"]['last_seen'] = 'Dernière vue';

$GLOBALS["lang"]['Last Seen'] = 'Dernière vue';

$GLOBALS["lang"]['last_seen_by'] = 'Dernière vue Par';

$GLOBALS["lang"]['Last Seen By'] = 'Dernière vue Par';

$GLOBALS["lang"]['last_user'] = 'Dernier utilisateur';

$GLOBALS["lang"]['Last User'] = 'Dernier utilisateur';

$GLOBALS["lang"]['lastModified'] = 'Dernière modification';

$GLOBALS["lang"]['LastModified'] = 'Dernière modification';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Lettonie';

$GLOBALS["lang"]['Layout'] = 'Mise en page';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Compte Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Compte Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Mot de passe Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Mot de passe Ldap Dn';

$GLOBALS["lang"]['Learn About'] = 'En savoir plus';

$GLOBALS["lang"]['Learn More'] = 'En savoir plus';

$GLOBALS["lang"]['lease_expiry_date'] = 'Date d\'expiration du bail';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Date d\'expiration du bail';

$GLOBALS["lang"]['Lebanon'] = 'Liban';

$GLOBALS["lang"]['legal_requirements'] = 'Exigences juridiques';

$GLOBALS["lang"]['Legal Requirements'] = 'Exigences juridiques';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Moins de';

$GLOBALS["lang"]['Less Than or Equals'] = 'inférieur ou égal à';

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau de privilèges requis pour exploiter (Aucun, Faible, Élevé).';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya arabe libyenne';

$GLOBALS["lang"]['License'] = 'Licence';

$GLOBALS["lang"]['License Key'] = 'Clé de licence';

$GLOBALS["lang"]['License Required'] = 'Licence requise';

$GLOBALS["lang"]['licenses'] = 'Licences';

$GLOBALS["lang"]['Licenses'] = 'Licences';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Comme';

$GLOBALS["lang"]['limit'] = 'Limite';

$GLOBALS["lang"]['Limit'] = 'Limite';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limitez la requête aux premiers éléments X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limité à 100 lignes.';

$GLOBALS["lang"]['line_amount'] = 'Montant de ligne';

$GLOBALS["lang"]['Line Amount'] = 'Montant de ligne';

$GLOBALS["lang"]['Line Graph'] = 'Graphique de ligne';

$GLOBALS["lang"]['line_number_a'] = 'Ligne A';

$GLOBALS["lang"]['Line Number A'] = 'Ligne A';

$GLOBALS["lang"]['line_number_b'] = 'Ligne B';

$GLOBALS["lang"]['Line Number B'] = 'Ligne B';

$GLOBALS["lang"]['line_text'] = 'Texte de ligne';

$GLOBALS["lang"]['Line Text'] = 'Texte de ligne';

$GLOBALS["lang"]['link'] = 'Lien';

$GLOBALS["lang"]['Link'] = 'Lien';

$GLOBALS["lang"]['Link (Advanced)'] = 'Lien (avancée)';

$GLOBALS["lang"]['Linked Files'] = 'Fichiers liés';

$GLOBALS["lang"]['links'] = 'Liens';

$GLOBALS["lang"]['Links'] = 'Liens';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Lier cette découverte au nuage associé (si nécessaire). Liens vers <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Liens vers <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Liens vers <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Liens vers <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['list_table_format'] = 'Liste du format du tableau';

$GLOBALS["lang"]['List Table Format'] = 'Liste du format du tableau';

$GLOBALS["lang"]['Lithuania'] = 'Lituanie';

$GLOBALS["lang"]['Load Balancing'] = 'Équilibre de charge';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Réseau local';

$GLOBALS["lang"]['local_port'] = 'Port local';

$GLOBALS["lang"]['Local Port'] = 'Port local';

$GLOBALS["lang"]['Localhost'] = 'Hébergement local';

$GLOBALS["lang"]['Localisation'] = 'Localisation';

$GLOBALS["lang"]['Location'] = 'Lieu';

$GLOBALS["lang"]['Location A'] = 'Lieu A';

$GLOBALS["lang"]['Location B'] = 'Lieu B';

$GLOBALS["lang"]['location_id'] = 'Identification de l\'emplacement';

$GLOBALS["lang"]['Location ID'] = 'Identification de l\'emplacement';

$GLOBALS["lang"]['location_id_a'] = 'ID de localisation A';

$GLOBALS["lang"]['Location ID A'] = 'ID de localisation A';

$GLOBALS["lang"]['location_id_b'] = 'ID de localisation B';

$GLOBALS["lang"]['Location ID B'] = 'ID de localisation B';

$GLOBALS["lang"]['location_latitude'] = 'Emplacement Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Emplacement Latitude';

$GLOBALS["lang"]['location_level'] = 'Niveau de localisation';

$GLOBALS["lang"]['Location Level'] = 'Niveau de localisation';

$GLOBALS["lang"]['location_longitude'] = 'Emplacement Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Emplacement Longitude';

$GLOBALS["lang"]['location_rack'] = 'Emplacement Rack';

$GLOBALS["lang"]['Location Rack'] = 'Emplacement Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Emplacement Position du rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Emplacement Position du rack';

$GLOBALS["lang"]['location_rack_size'] = 'Taille du rack d\'emplacement';

$GLOBALS["lang"]['Location Rack Size'] = 'Taille du rack d\'emplacement';

$GLOBALS["lang"]['location_room'] = 'Emplacement Salle';

$GLOBALS["lang"]['Location Room'] = 'Emplacement Salle';

$GLOBALS["lang"]['location_suite'] = 'Emplacement Suite';

$GLOBALS["lang"]['Location Suite'] = 'Emplacement Suite';

$GLOBALS["lang"]['locations'] = 'Emplacements';

$GLOBALS["lang"]['Locations'] = 'Emplacements';

$GLOBALS["lang"]['Locations in this'] = 'Lieux dans ce';

$GLOBALS["lang"]['log'] = 'Journal';

$GLOBALS["lang"]['Log'] = 'Journal';

$GLOBALS["lang"]['log_format'] = 'Format du journal';

$GLOBALS["lang"]['Log Format'] = 'Format du journal';

$GLOBALS["lang"]['log_path'] = 'Emplacement du journal';

$GLOBALS["lang"]['Log Path'] = 'Emplacement du journal';

$GLOBALS["lang"]['log_rotation'] = 'Rotation du log';

$GLOBALS["lang"]['Log Rotation'] = 'Rotation du log';

$GLOBALS["lang"]['log_status'] = 'État du journal';

$GLOBALS["lang"]['Log Status'] = 'État du journal';

$GLOBALS["lang"]['Logical Cores '] = 'Noyaux logiques ';

$GLOBALS["lang"]['logical_count'] = 'Nombre logique';

$GLOBALS["lang"]['Logical Count'] = 'Nombre logique';

$GLOBALS["lang"]['Logout'] = 'Déconnexion';

$GLOBALS["lang"]['Logs'] = 'Registres';

$GLOBALS["lang"]['longitude'] = 'Longitude';

$GLOBALS["lang"]['Longitude'] = 'Longitude';

$GLOBALS["lang"]['low'] = 'Faible';

$GLOBALS["lang"]['Low'] = 'Faible';

$GLOBALS["lang"]['Lower Case'] = 'Cas inférieur';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'Adresse MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricant';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Adresse Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macédoine';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['maintenance_expires'] = 'L\'entretien expire';

$GLOBALS["lang"]['Maintenance Expires'] = 'L\'entretien expire';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Faire mon tableau de bord par défaut';

$GLOBALS["lang"]['Make this install a Collector'] = 'Faites de cette installation un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaisie';

$GLOBALS["lang"]['Maldives'] = 'Maldives';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malte';

$GLOBALS["lang"]['Manage'] = 'Gérer';

$GLOBALS["lang"]['Manage Licenses'] = 'Gérer les licences';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gérer dans le NMIS';

$GLOBALS["lang"]['Managed'] = 'Géré';

$GLOBALS["lang"]['managed_by'] = 'Géré par';

$GLOBALS["lang"]['Managed By'] = 'Géré par';

$GLOBALS["lang"]['Manual Input'] = 'Entrée manuelle';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Défini manuellement par l\'utilisateur, par défaut à Production.';

$GLOBALS["lang"]['Manually set by user.'] = 'Réglé manuellement par l\'utilisateur.';

$GLOBALS["lang"]['manufacture_date'] = 'Date de fabrication';

$GLOBALS["lang"]['Manufacture Date'] = 'Date de fabrication';

$GLOBALS["lang"]['manufacturer'] = 'Fabricant';

$GLOBALS["lang"]['Manufacturer'] = 'Fabricant';

$GLOBALS["lang"]['manufacturer_code'] = 'Code du fabricant';

$GLOBALS["lang"]['Manufacturer Code'] = 'Code du fabricant';

$GLOBALS["lang"]['Map'] = 'Carte';

$GLOBALS["lang"]['maps'] = 'Cartes';

$GLOBALS["lang"]['Maps'] = 'Cartes';

$GLOBALS["lang"]['March'] = 'Mars';

$GLOBALS["lang"]['Marshall Islands'] = 'Îles Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Masque';

$GLOBALS["lang"]['Mask'] = 'Masque';

$GLOBALS["lang"]['Match'] = 'Correspondance';

$GLOBALS["lang"]['match_options'] = 'Options de correspondance';

$GLOBALS["lang"]['Match Options'] = 'Options de correspondance';

$GLOBALS["lang"]['match_string'] = 'Chaîne de correspondance';

$GLOBALS["lang"]['Match String'] = 'Chaîne de correspondance';

$GLOBALS["lang"]['Matching Attribute'] = 'Attribut de correspondance';

$GLOBALS["lang"]['maturity_level'] = 'Niveau d\'échéance';

$GLOBALS["lang"]['Maturity Level'] = 'Niveau d\'échéance';

$GLOBALS["lang"]['maturity_score'] = 'Score d\'échéance';

$GLOBALS["lang"]['Maturity Score'] = 'Score d\'échéance';

$GLOBALS["lang"]['Mauritania'] = 'Mauritanie';

$GLOBALS["lang"]['Mauritius'] = 'Maurice';

$GLOBALS["lang"]['max_file_size'] = 'Taille maximale du fichier';

$GLOBALS["lang"]['Max File Size'] = 'Taille maximale du fichier';

$GLOBALS["lang"]['Max Length'] = 'Longueur maximale';

$GLOBALS["lang"]['max_size'] = 'Taille maximale';

$GLOBALS["lang"]['Max Size'] = 'Taille maximale';

$GLOBALS["lang"]['May'] = 'Mai';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mesure la probabilité que la vulnérabilité soit attaquée, et est basée sur l\'état actuel des techniques d\'exploitation, d\'exploiter la disponibilité de code, ou actif, l\'exploitation dans la sauvage.';

$GLOBALS["lang"]['medium'] = 'Moyenne';

$GLOBALS["lang"]['Medium'] = 'Moyenne';

$GLOBALS["lang"]['members'] = 'Membres';

$GLOBALS["lang"]['Members'] = 'Membres';

$GLOBALS["lang"]['memory'] = 'Mémoire';

$GLOBALS["lang"]['Memory'] = 'Mémoire';

$GLOBALS["lang"]['memory_count'] = 'Compte mémoire';

$GLOBALS["lang"]['Memory Count'] = 'Compte mémoire';

$GLOBALS["lang"]['memory_slot_count'] = 'Nombre de fentes de mémoire';

$GLOBALS["lang"]['Memory Slot Count'] = 'Nombre de fentes de mémoire';

$GLOBALS["lang"]['menu_category'] = 'Catégorie de menu';

$GLOBALS["lang"]['Menu Category'] = 'Catégorie de menu';

$GLOBALS["lang"]['menu_display'] = 'Affichage du menu';

$GLOBALS["lang"]['Menu Display'] = 'Affichage du menu';

$GLOBALS["lang"]['message'] = 'Message';

$GLOBALS["lang"]['Message'] = 'Message';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Dernière modification';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Dernière modification';

$GLOBALS["lang"]['metric'] = 'métrique';

$GLOBALS["lang"]['Metric'] = 'métrique';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Réseau des régions métropolitaines';

$GLOBALS["lang"]['Mexico'] = 'Mexique';

$GLOBALS["lang"]['Micronesia'] = 'Micronésie';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Champs Microsoft Azure';

$GLOBALS["lang"]['microtime'] = 'Microtemps';

$GLOBALS["lang"]['Microtime'] = 'Microtemps';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Compte rendu de la dernière vérification';

$GLOBALS["lang"]['model'] = 'Modèle';

$GLOBALS["lang"]['Model'] = 'Modèle';

$GLOBALS["lang"]['model_family'] = 'Famille modèle';

$GLOBALS["lang"]['Model Family'] = 'Famille modèle';

$GLOBALS["lang"]['module'] = 'Module';

$GLOBALS["lang"]['Module'] = 'Module';

$GLOBALS["lang"]['module_index'] = 'Index des modules';

$GLOBALS["lang"]['Module Index'] = 'Index des modules';

$GLOBALS["lang"]['Modules'] = 'Modules';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Lundi';

$GLOBALS["lang"]['Mongolia'] = 'Mongolie';

$GLOBALS["lang"]['monitor'] = 'Moniteur';

$GLOBALS["lang"]['Monitor'] = 'Moniteur';

$GLOBALS["lang"]['Montenegro'] = 'Monténégro';

$GLOBALS["lang"]['month'] = 'Mois';

$GLOBALS["lang"]['Month'] = 'Mois';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Maroc';

$GLOBALS["lang"]['motherboard'] = 'Carte mère';

$GLOBALS["lang"]['Motherboard'] = 'Carte mère';

$GLOBALS["lang"]['mount_point'] = 'Point de montage';

$GLOBALS["lang"]['Mount Point'] = 'Point de montage';

$GLOBALS["lang"]['mount_type'] = 'Type de montage';

$GLOBALS["lang"]['Mount Type'] = 'Type de montage';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Doit répondre à Ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N à 1';

$GLOBALS["lang"]['N-to-N'] = 'N-à-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'Service opérationnel du NMIS';

$GLOBALS["lang"]['NMIS Customer'] = 'Client NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Options du périphérique NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Sélection du périphérique NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nom du champ NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Type de champ NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Groupe NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'Sondageur NMIS';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rôle';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'REMARQUE - Vous pouvez empêcher que les identifiants de texte clair s\'affichent ci-dessous en définissant l\'élément de configuration pour <code>decrypt_credentials</code> à <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Dénomination';

$GLOBALS["lang"]['Name'] = 'Dénomination';

$GLOBALS["lang"]['Namibia'] = 'Namibie';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Népal';

$GLOBALS["lang"]['net_index'] = 'Indice net';

$GLOBALS["lang"]['Net Index'] = 'Indice net';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antilles néerlandaises';

$GLOBALS["lang"]['Netherlands the'] = 'Pays-Bas';

$GLOBALS["lang"]['netmask'] = 'Mâche';

$GLOBALS["lang"]['Netmask'] = 'Mâche';

$GLOBALS["lang"]['netstat'] = 'État net';

$GLOBALS["lang"]['Netstat'] = 'État net';

$GLOBALS["lang"]['Netstat Policies'] = 'Politiques Netstat';

$GLOBALS["lang"]['Network'] = 'Réseau';

$GLOBALS["lang"]['network_address'] = 'Adresse réseau';

$GLOBALS["lang"]['Network Address'] = 'Adresse réseau';

$GLOBALS["lang"]['network_domain'] = 'Domaine réseau';

$GLOBALS["lang"]['Network Domain'] = 'Domaine réseau';

$GLOBALS["lang"]['Network Types'] = 'Types de réseaux';

$GLOBALS["lang"]['networks'] = 'Réseaux';

$GLOBALS["lang"]['Networks'] = 'Réseaux';

$GLOBALS["lang"]['Networks Generated By'] = 'Réseaux créés par';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Réseaux utilisant un masque CIDR de';

$GLOBALS["lang"]['New Building Name'] = 'Nouveau nom du bâtiment';

$GLOBALS["lang"]['New Caledonia'] = 'Nouvelle-Calédonie';

$GLOBALS["lang"]['New Floor Name'] = 'Nom du nouvel étage';

$GLOBALS["lang"]['New Room Name'] = 'Nouveau nom de la salle';

$GLOBALS["lang"]['New Row Name'] = 'Nouveau nom de ligne';

$GLOBALS["lang"]['New Zealand'] = 'Nouvelle-Zélande';

$GLOBALS["lang"]['News'] = 'Nouvelles';

$GLOBALS["lang"]['next_hop'] = 'Hop suivant';

$GLOBALS["lang"]['Next Hop'] = 'Hop suivant';

$GLOBALS["lang"]['next_run'] = 'Course suivante';

$GLOBALS["lang"]['Next Run'] = 'Course suivante';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigéria';

$GLOBALS["lang"]['Niue'] = 'Nioué';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Réponses à la numérisation des ports Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Ports Nmap Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Ports Nmap Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Ports Nmap Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Ports Nmap Udp';

$GLOBALS["lang"]['nmis_business_service'] = 'Services aux entreprises de Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Services aux entreprises de Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Client';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Client';

$GLOBALS["lang"]['nmis_group'] = 'Groupe Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Groupe Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Gérer';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Gérer';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Nom';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Nom';

$GLOBALS["lang"]['nmis_notes'] = 'Remarques';

$GLOBALS["lang"]['Nmis Notes'] = 'Remarques';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Rôle des mis';

$GLOBALS["lang"]['Nmis Role'] = 'Rôle des mis';

$GLOBALS["lang"]['No'] = 'Numéro';

$GLOBALS["lang"]['No Devices Returned'] = 'Aucun appareil retourné';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Pas d\'API Google Maps La clé présente, vous ne pourrez pas afficher la carte.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Aucune licence professionnelle ou d\'entreprise';

$GLOBALS["lang"]['No Results'] = 'Aucun résultat';

$GLOBALS["lang"]['No data in License Key'] = 'Aucune donnée dans la clé de licence';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Aucune mise à jour de la base de données n\'est nécessaire pour le moment.';

$GLOBALS["lang"]['Node'] = 'Noeud';

$GLOBALS["lang"]['None'] = 'Aucune';

$GLOBALS["lang"]['Norfolk Island'] = 'Île de Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Îles Mariannes du Nord';

$GLOBALS["lang"]['Norway'] = 'Norvège';

$GLOBALS["lang"]['Not Applicable'] = 'Sans objet';

$GLOBALS["lang"]['Not Checked'] = 'Non vérifié';

$GLOBALS["lang"]['Not Equals'] = 'Pas égal';

$GLOBALS["lang"]['Not In'] = 'Pas dans';

$GLOBALS["lang"]['Not Like'] = 'Pas comme';

$GLOBALS["lang"]['Not Set'] = 'Pas défini';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normalement pas utilisé. Si défini, cela exige que l\'appareil ait un port ouvert (selon les options de numérisation) pour être considéré répondre. Une adresse MAC, une réponse arp ou une réponse ping ne sont pas considérées comme suffisantes pour être considérées comme répondantes. Utile si un routeur ou un pare-feu entre le serveur Open-Audit et l\'IP cible répond aux scans de port au nom des IP.';

$GLOBALS["lang"]['Note'] = 'Remarque';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Remarque - La sélection d\'un parent donne automatiquement accès à ses enfants (bien qu\'il ne soit pas affiché ici).';

$GLOBALS["lang"]['Notes'] = 'Annexe';

$GLOBALS["lang"]['notes'] = 'Annexe';

$GLOBALS["lang"]['Notice'] = 'Avis';

$GLOBALS["lang"]['notin'] = 'Remarque';

$GLOBALS["lang"]['Notin'] = 'Remarque';

$GLOBALS["lang"]['November'] = 'Novembre';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDRE DU JOUR';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Familles OS';

$GLOBALS["lang"]['OS Family'] = 'Famille OS';

$GLOBALS["lang"]['OS Group'] = 'Groupe OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Gérer';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Gérer';

$GLOBALS["lang"]['object_ident'] = 'Identification de l\'objet';

$GLOBALS["lang"]['Object Ident'] = 'Identification de l\'objet';

$GLOBALS["lang"]['October'] = 'Octobre';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'À';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Une des <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ou <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Un de Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Area Network, Personal Area Network, Storage Area Network, System Area Network, Virtual Private Network, Wireless Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Un de développement, de reprise après sinistre, d\'évaluation, de préproduction, de production, d\'essai, de formation, de contrôle d\'acceptation par les utilisateurs';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Un de répartition, délégation, planification, réservé, non alloué, inconnu, non géré. Par défaut à attribuer.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Une des deux <code>active directory</code> ou <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'L\'un des: antivirus, sauvegarde, pare-feu, approuvé, interdit, ignoré ou autre.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentation en ligne';

$GLOBALS["lang"]['Open-AudIT'] = 'Audit ouvert';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Communauté ouverte audit';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Sélection du périphérique Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Entreprise Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Entreprise ouverte d\'Audit. Solution de découverte et d\'audit flexible à grande échelle pour les grands réseaux. Toutes les fonctionnalités de Professional plus : Bases de données, Audit de fichiers, Cloud Discovery, Gestion de racks, Contrôle d\'accès par rôle configurable, y compris Active Directory et LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nom du champ Open-Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licences Open-Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Options d\'ouverture audit';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-Audit Professionnel';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-Audit Professionnel. Le monde';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-Audit et Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap est installé';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn utilisateur Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn utilisateur Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Attribut d\'adhésion de l\'utilisateur Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Attribut d\'adhésion de l\'utilisateur Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Ouvert au filtre';

$GLOBALS["lang"]['Open|filtered'] = 'Ouvert au filtre';

$GLOBALS["lang"]['Operating System'] = 'Système d\'exploitation';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Système d\'exploitation Famille Contient';

$GLOBALS["lang"]['Operating Systems'] = 'Systèmes d\'exploitation';

$GLOBALS["lang"]['optical'] = 'Optique';

$GLOBALS["lang"]['Optical'] = 'Optique';

$GLOBALS["lang"]['Optimized'] = 'Optimisé';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Version optionnelle telle que vérifiée par Open-Audit. Utilisez le signe % en tant que wildcard.';

$GLOBALS["lang"]['options'] = 'Options';

$GLOBALS["lang"]['Options'] = 'Options';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ou choisissez parmi les champs ci-dessous.';

$GLOBALS["lang"]['org_descendants'] = 'Descendants d\'org.';

$GLOBALS["lang"]['Org Descendants'] = 'Descendants d\'org.';

$GLOBALS["lang"]['org_id'] = 'Numéro d\'ordre';

$GLOBALS["lang"]['Org ID'] = 'Numéro d\'ordre';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organisations';

$GLOBALS["lang"]['orgs'] = 'Orgues';

$GLOBALS["lang"]['Orgs'] = 'Orgues';

$GLOBALS["lang"]['Orgs Name'] = 'Nom des orgues';

$GLOBALS["lang"]['orientation'] = 'Orientation';

$GLOBALS["lang"]['Orientation'] = 'Orientation';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Version d\'affichage d\'Os';

$GLOBALS["lang"]['Os Display Version'] = 'Version d\'affichage d\'Os';

$GLOBALS["lang"]['os_family'] = 'Famille Os';

$GLOBALS["lang"]['Os Family'] = 'Famille Os';

$GLOBALS["lang"]['os_group'] = 'Groupe Os';

$GLOBALS["lang"]['Os Group'] = 'Groupe Os';

$GLOBALS["lang"]['os_installation_date'] = 'Os Date d\'installation';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Date d\'installation';

$GLOBALS["lang"]['os_licence_expiry'] = 'Expiration de la licence';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Expiration de la licence';

$GLOBALS["lang"]['os_license'] = 'Licence Os';

$GLOBALS["lang"]['Os License'] = 'Licence Os';

$GLOBALS["lang"]['os_license_code'] = 'Code de licence Os';

$GLOBALS["lang"]['Os License Code'] = 'Code de licence Os';

$GLOBALS["lang"]['os_license_mode'] = 'Mode de licence Os';

$GLOBALS["lang"]['Os License Mode'] = 'Mode de licence Os';

$GLOBALS["lang"]['os_license_type'] = 'Type de licence Os';

$GLOBALS["lang"]['Os License Type'] = 'Type de licence Os';

$GLOBALS["lang"]['os_name'] = 'Nom des os';

$GLOBALS["lang"]['Os Name'] = 'Nom des os';

$GLOBALS["lang"]['os_version'] = 'Version Os';

$GLOBALS["lang"]['Os Version'] = 'Version Os';

$GLOBALS["lang"]['Other'] = 'Autres';

$GLOBALS["lang"]['Others'] = 'Autres';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Notre temps mort pour une réponse SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Notre délai pour une réponse WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Notre délai pour une réponse SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Notre délai pour une réponse de script d\'audit';

$GLOBALS["lang"]['output'] = 'Produit';

$GLOBALS["lang"]['Output'] = 'Produit';

$GLOBALS["lang"]['outputs'] = 'Produits';

$GLOBALS["lang"]['Outputs'] = 'Produits';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Note globale de gravité (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Suppression';

$GLOBALS["lang"]['Overwrite'] = 'Suppression';

$GLOBALS["lang"]['owner'] = 'Propriétaire';

$GLOBALS["lang"]['Owner'] = 'Propriétaire';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Paquet';

$GLOBALS["lang"]['packages'] = 'Emballages';

$GLOBALS["lang"]['Packages'] = 'Emballages';

$GLOBALS["lang"]['pagefile'] = 'Fichier de page';

$GLOBALS["lang"]['Pagefile'] = 'Fichier de page';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palaos';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territoire palestinien';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papouasie-Nouvelle-Guinée';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Parent';

$GLOBALS["lang"]['parent_id'] = 'Identification du parent';

$GLOBALS["lang"]['Parent ID'] = 'Identification du parent';

$GLOBALS["lang"]['parent_name'] = 'Nom du parent';

$GLOBALS["lang"]['Parent Name'] = 'Nom du parent';

$GLOBALS["lang"]['part_number'] = 'Numéro de pièce';

$GLOBALS["lang"]['Part Number'] = 'Numéro de pièce';

$GLOBALS["lang"]['part_of_domain'] = 'Partie du domaine';

$GLOBALS["lang"]['Part Of Domain'] = 'Partie du domaine';

$GLOBALS["lang"]['Partition'] = 'Partition';

$GLOBALS["lang"]['partition_count'] = 'Nombre de partitions';

$GLOBALS["lang"]['Partition Count'] = 'Nombre de partitions';

$GLOBALS["lang"]['partition_disk_index'] = 'Index des disques de partition';

$GLOBALS["lang"]['Partition Disk Index'] = 'Index des disques de partition';

$GLOBALS["lang"]['Pass'] = 'Passer';

$GLOBALS["lang"]['Passed'] = 'Décédé';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Réseau local optique passif';

$GLOBALS["lang"]['Password'] = 'Mot de passe';

$GLOBALS["lang"]['password'] = 'Mot de passe';

$GLOBALS["lang"]['password_changeable'] = 'Mot de passe modifiable';

$GLOBALS["lang"]['Password Changeable'] = 'Mot de passe modifiable';

$GLOBALS["lang"]['password_disabled'] = 'Mot de passe désactivé';

$GLOBALS["lang"]['Password Disabled'] = 'Mot de passe désactivé';

$GLOBALS["lang"]['password_expires'] = 'Le mot de passe expire';

$GLOBALS["lang"]['Password Expires'] = 'Le mot de passe expire';

$GLOBALS["lang"]['password_last_changed'] = 'Mot de passe Dernière modification';

$GLOBALS["lang"]['Password Last Changed'] = 'Mot de passe Dernière modification';

$GLOBALS["lang"]['password_required'] = 'Mot de passe requis';

$GLOBALS["lang"]['Password Required'] = 'Mot de passe requis';

$GLOBALS["lang"]['patch_panel'] = 'Panneau de correspondance';

$GLOBALS["lang"]['Patch Panel'] = 'Panneau de correspondance';

$GLOBALS["lang"]['patch_panel_port'] = 'Port du panneau de correspondance';

$GLOBALS["lang"]['Patch Panel Port'] = 'Port du panneau de correspondance';

$GLOBALS["lang"]['path'] = 'Voie';

$GLOBALS["lang"]['Path'] = 'Voie';

$GLOBALS["lang"]['Performance'] = 'Rendement';

$GLOBALS["lang"]['Performed'] = 'Exécution';

$GLOBALS["lang"]['permission'] = 'Autorisation';

$GLOBALS["lang"]['Permission'] = 'Autorisation';

$GLOBALS["lang"]['permissions'] = 'Autorisations';

$GLOBALS["lang"]['Permissions'] = 'Autorisations';

$GLOBALS["lang"]['Personal Area Network'] = 'Réseau Espace personnel';

$GLOBALS["lang"]['Peru'] = 'Pérou';

$GLOBALS["lang"]['Philippines'] = 'Espagne';

$GLOBALS["lang"]['phone'] = 'Téléphone';

$GLOBALS["lang"]['Phone'] = 'Téléphone';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU physiques';

$GLOBALS["lang"]['physical_count'] = 'Nombre physique';

$GLOBALS["lang"]['Physical Count'] = 'Nombre physique';

$GLOBALS["lang"]['physical_depth'] = 'Profondeur physique';

$GLOBALS["lang"]['Physical Depth'] = 'Profondeur physique';

$GLOBALS["lang"]['physical_height'] = 'Hauteur physique';

$GLOBALS["lang"]['Physical Height'] = 'Hauteur physique';

$GLOBALS["lang"]['physical_width'] = 'Largeur physique';

$GLOBALS["lang"]['Physical Width'] = 'Largeur physique';

$GLOBALS["lang"]['picture'] = 'Image';

$GLOBALS["lang"]['Picture'] = 'Image';

$GLOBALS["lang"]['pid'] = 'Pud';

$GLOBALS["lang"]['Pid'] = 'Pud';

$GLOBALS["lang"]['Pie Chart'] = 'Graphique circulaire';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Îles Pitcairn';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Veuillez avoir un logo administrateur Open-Audit et mettre à jour la base de données.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Veuillez noter que la case sélectionnée remplacera la case d\'entrée de texte.';

$GLOBALS["lang"]['Please set using'] = 'Veuillez définir en utilisant';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Pologne';

$GLOBALS["lang"]['Policies'] = 'Politiques';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Les politiques ont des exceptions.';

$GLOBALS["lang"]['policy'] = 'Politique';

$GLOBALS["lang"]['Policy'] = 'Politique';

$GLOBALS["lang"]['policy_id'] = 'ID politique';

$GLOBALS["lang"]['Policy ID'] = 'ID politique';

$GLOBALS["lang"]['Policy Result'] = 'Résultat stratégique';

$GLOBALS["lang"]['Policy Results'] = 'Résultats stratégiques';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populated by audit.'] = 'Populé par vérification.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populé par la découverte et la vérification.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populé dynamiquement.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populé à partir du DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populé de la découverte SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Poupée d\'audits d\'appareils.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populé à partir du nom d\'hôte.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populé à partir de machine-id sur Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populé depuis l\'IP pour la route par défaut ou l\'IP détecté dans la découverte.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populé à partir de la commande hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populé avec des données supplémentaires du système externe, dans une représentation JSON.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Nom du port';

$GLOBALS["lang"]['Port Name'] = 'Nom du port';

$GLOBALS["lang"]['port_number'] = 'Numéro de port';

$GLOBALS["lang"]['Port Number'] = 'Numéro de port';

$GLOBALS["lang"]['ports_in_order'] = 'Ports en ordre';

$GLOBALS["lang"]['Ports In Order'] = 'Ports en ordre';

$GLOBALS["lang"]['ports_stop_after'] = 'Les ports s\'arrêtent après';

$GLOBALS["lang"]['Ports Stop After'] = 'Les ports s\'arrêtent après';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, République portugaise';

$GLOBALS["lang"]['position'] = 'Fonction';

$GLOBALS["lang"]['Position'] = 'Fonction';

$GLOBALS["lang"]['postcode'] = 'Code postal';

$GLOBALS["lang"]['Postcode'] = 'Code postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuit électrique';

$GLOBALS["lang"]['Power Circuit'] = 'Circuit électrique';

$GLOBALS["lang"]['power_sockets'] = 'Chaussettes électriques';

$GLOBALS["lang"]['Power Sockets'] = 'Chaussettes électriques';

$GLOBALS["lang"]['Predictable'] = 'Prévisible';

$GLOBALS["lang"]['Preferences'] = 'Préférences';

$GLOBALS["lang"]['Prerequisites'] = 'Préalables';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Prérequis et essais';

$GLOBALS["lang"]['present'] = 'Présent';

$GLOBALS["lang"]['Present'] = 'Présent';

$GLOBALS["lang"]['previous_value'] = 'Valeur précédente';

$GLOBALS["lang"]['Previous Value'] = 'Valeur précédente';

$GLOBALS["lang"]['primary'] = 'Enseignement primaire';

$GLOBALS["lang"]['Primary'] = 'Enseignement primaire';

$GLOBALS["lang"]['Primary Key'] = 'Clé primaire';

$GLOBALS["lang"]['print_queue'] = 'Imprimer la réponse';

$GLOBALS["lang"]['Print Queue'] = 'Imprimer la réponse';

$GLOBALS["lang"]['printer_color'] = 'Couleur de l\'imprimante';

$GLOBALS["lang"]['Printer Color'] = 'Couleur de l\'imprimante';

$GLOBALS["lang"]['printer_duplex'] = 'Imprimante Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Imprimante Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nom de port de l\'imprimante';

$GLOBALS["lang"]['Printer Port Name'] = 'Nom de port de l\'imprimante';

$GLOBALS["lang"]['printer_shared'] = 'Imprimante partagée';

$GLOBALS["lang"]['Printer Shared'] = 'Imprimante partagée';

$GLOBALS["lang"]['printer_shared_name'] = 'Nom partagé de l\'imprimante';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nom partagé de l\'imprimante';

$GLOBALS["lang"]['priority'] = 'Priorité';

$GLOBALS["lang"]['Priority'] = 'Priorité';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Vie privée';

$GLOBALS["lang"]['privileges_required'] = 'Privilèges requis';

$GLOBALS["lang"]['Privileges Required'] = 'Privilèges requis';

$GLOBALS["lang"]['processor'] = 'Processeur';

$GLOBALS["lang"]['Processor'] = 'Processeur';

$GLOBALS["lang"]['processor_count'] = 'Nombre de transformateurs';

$GLOBALS["lang"]['Processor Count'] = 'Nombre de transformateurs';

$GLOBALS["lang"]['processor_slot_count'] = 'Nombre de fentes du processeur';

$GLOBALS["lang"]['Processor Slot Count'] = 'Nombre de fentes du processeur';

$GLOBALS["lang"]['processor_type'] = 'Type de processeur';

$GLOBALS["lang"]['Processor Type'] = 'Type de processeur';

$GLOBALS["lang"]['Processors'] = 'Processeurs';

$GLOBALS["lang"]['product_name'] = 'Nom du produit';

$GLOBALS["lang"]['Product Name'] = 'Nom du produit';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nom du produit Match de CPE: ';

$GLOBALS["lang"]['products'] = 'Produits';

$GLOBALS["lang"]['Products'] = 'Produits';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Programme';

$GLOBALS["lang"]['Program'] = 'Programme';

$GLOBALS["lang"]['protocol'] = 'Protocole';

$GLOBALS["lang"]['Protocol'] = 'Protocole';

$GLOBALS["lang"]['provider'] = 'Fournisseur';

$GLOBALS["lang"]['Provider'] = 'Fournisseur';

$GLOBALS["lang"]['published'] = 'Publié';

$GLOBALS["lang"]['Published'] = 'Publié';

$GLOBALS["lang"]['published_date'] = 'Date de publication';

$GLOBALS["lang"]['Published Date'] = 'Date de publication';

$GLOBALS["lang"]['publisher'] = 'Éditeur';

$GLOBALS["lang"]['Publisher'] = 'Éditeur';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Rico';

$GLOBALS["lang"]['Purchase'] = 'Achat';

$GLOBALS["lang"]['purchase_amount'] = 'Montant de l\'achat';

$GLOBALS["lang"]['Purchase Amount'] = 'Montant de l\'achat';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centre des coûts d\'achat';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centre des coûts d\'achat';

$GLOBALS["lang"]['purchase_count'] = 'Nombre d\'achats';

$GLOBALS["lang"]['Purchase Count'] = 'Nombre d\'achats';

$GLOBALS["lang"]['purchase_date'] = 'Date d\'achat';

$GLOBALS["lang"]['Purchase Date'] = 'Date d\'achat';

$GLOBALS["lang"]['purchase_invoice'] = 'Achat de la facture';

$GLOBALS["lang"]['Purchase Invoice'] = 'Achat de la facture';

$GLOBALS["lang"]['purchase_order'] = 'Bon de commande';

$GLOBALS["lang"]['Purchase Order'] = 'Bon de commande';

$GLOBALS["lang"]['purchase_order_number'] = 'Numéro du bon de commande';

$GLOBALS["lang"]['Purchase Order Number'] = 'Numéro du bon de commande';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Numéro de contrat de service d\'achat';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Numéro de contrat de service d\'achat';

$GLOBALS["lang"]['purchase_vendor'] = 'Fournisseur d\'achat';

$GLOBALS["lang"]['Purchase Vendor'] = 'Fournisseur d\'achat';

$GLOBALS["lang"]['purpose'] = 'Objet';

$GLOBALS["lang"]['Purpose'] = 'Objet';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Questions';

$GLOBALS["lang"]['Queries'] = 'Questions';

$GLOBALS["lang"]['Query'] = 'Demande';

$GLOBALS["lang"]['queue'] = 'Demande';

$GLOBALS["lang"]['Queue'] = 'Demande';

$GLOBALS["lang"]['Queue Limit'] = 'Limite des requêtes';

$GLOBALS["lang"]['Queued Device Audits'] = 'Vérifications des dispositifs en attente';

$GLOBALS["lang"]['Queued IP Scans'] = 'Scans IP en attente';

$GLOBALS["lang"]['Queued Items'] = 'Éléments en attente';

$GLOBALS["lang"]['RU Start'] = 'RU Début';

$GLOBALS["lang"]['RX Bitrate'] = 'Débit RX';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Niveau RX';

$GLOBALS["lang"]['RX Power'] = 'Puissance RX';

$GLOBALS["lang"]['RX Profile'] = 'Profil RX';

$GLOBALS["lang"]['Rack'] = 'Sac';

$GLOBALS["lang"]['rack_devices'] = 'Dispositifs de rack';

$GLOBALS["lang"]['Rack Devices'] = 'Dispositifs de rack';

$GLOBALS["lang"]['rack_id'] = 'Numéro d\'identification';

$GLOBALS["lang"]['Rack ID'] = 'Numéro d\'identification';

$GLOBALS["lang"]['Racks'] = 'Sacs';

$GLOBALS["lang"]['racks'] = 'Sacs';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Justification';

$GLOBALS["lang"]['Rationale'] = 'Justification';

$GLOBALS["lang"]['raw'] = 'Montant brut';

$GLOBALS["lang"]['Raw'] = 'Montant brut';

$GLOBALS["lang"]['read'] = 'Lire';

$GLOBALS["lang"]['Read'] = 'Lire';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lisez notre documentation en ligne sur le Wiki Open-Audit.';

$GLOBALS["lang"]['Red Query'] = 'Demande rouge';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Rediriger Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Rediriger Uri';

$GLOBALS["lang"]['references'] = 'Références';

$GLOBALS["lang"]['References'] = 'Références';

$GLOBALS["lang"]['region'] = 'Région';

$GLOBALS["lang"]['Region'] = 'Région';

$GLOBALS["lang"]['registered_user'] = 'Utilisateur enregistré';

$GLOBALS["lang"]['Registered User'] = 'Utilisateur enregistré';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Libération';

$GLOBALS["lang"]['remediation'] = 'Réparation';

$GLOBALS["lang"]['Remediation'] = 'Réparation';

$GLOBALS["lang"]['Remote'] = 'Télécommande';

$GLOBALS["lang"]['remote_address'] = 'Adresse distante';

$GLOBALS["lang"]['Remote Address'] = 'Adresse distante';

$GLOBALS["lang"]['remote_port'] = 'Port distant';

$GLOBALS["lang"]['Remote Port'] = 'Port distant';

$GLOBALS["lang"]['Remove'] = 'Supprimer';

$GLOBALS["lang"]['Remove Exception'] = 'Supprimer l\'exception';

$GLOBALS["lang"]['Report'] = 'Rapport annuel';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Signalez vos appareils, réseaux et plus';

$GLOBALS["lang"]['reportable'] = 'À déclarer';

$GLOBALS["lang"]['Reportable'] = 'À déclarer';

$GLOBALS["lang"]['Reports'] = 'Rapports';

$GLOBALS["lang"]['request'] = 'Demande';

$GLOBALS["lang"]['Request'] = 'Demande';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Demander une spécification CVE';

$GLOBALS["lang"]['requested'] = 'Demande';

$GLOBALS["lang"]['Requested'] = 'Demande';

$GLOBALS["lang"]['require_port'] = 'Port obligatoire';

$GLOBALS["lang"]['Require Port'] = 'Port obligatoire';

$GLOBALS["lang"]['Require an Open Port'] = 'Nécessite un port ouvert';

$GLOBALS["lang"]['Required'] = 'Requis';

$GLOBALS["lang"]['Reset'] = 'Réinitialiser';

$GLOBALS["lang"]['Reset All Data'] = 'Réinitialiser toutes les données';

$GLOBALS["lang"]['Reset to Default'] = 'Réinitialiser par défaut';

$GLOBALS["lang"]['resource'] = 'Ressources';

$GLOBALS["lang"]['Resource'] = 'Ressources';

$GLOBALS["lang"]['Resource Name'] = 'Nom de la ressource';

$GLOBALS["lang"]['Resources'] = 'Ressources';

$GLOBALS["lang"]['response'] = 'Réponse';

$GLOBALS["lang"]['Response'] = 'Réponse';

$GLOBALS["lang"]['responsibility'] = 'Responsabilité';

$GLOBALS["lang"]['Responsibility'] = 'Responsabilité';

$GLOBALS["lang"]['Restore my Licenses'] = 'Restaurer mes licences';

$GLOBALS["lang"]['Restrict to Private'] = 'Restriction au secteur privé';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restriction au sous-réseau';

$GLOBALS["lang"]['result'] = 'Résultat';

$GLOBALS["lang"]['Result'] = 'Résultat';

$GLOBALS["lang"]['Results'] = 'Résultats';

$GLOBALS["lang"]['retrieved'] = 'Extrait';

$GLOBALS["lang"]['Retrieved'] = 'Extrait';

$GLOBALS["lang"]['retrieved_ident'] = 'Identificateur recherché';

$GLOBALS["lang"]['Retrieved Ident'] = 'Identificateur recherché';

$GLOBALS["lang"]['retrieved_name'] = 'Nom recherché';

$GLOBALS["lang"]['Retrieved Name'] = 'Nom recherché';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Extrait du périphérique - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Réunion';

$GLOBALS["lang"]['revision'] = 'Révision';

$GLOBALS["lang"]['Revision'] = 'Révision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Résultat de l\'évaluation des risques';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Résultat de l\'évaluation des risques';

$GLOBALS["lang"]['role'] = 'Rôle';

$GLOBALS["lang"]['Role'] = 'Rôle';

$GLOBALS["lang"]['roles'] = 'Rôles';

$GLOBALS["lang"]['Roles'] = 'Rôles';

$GLOBALS["lang"]['Romania'] = 'Roumanie';

$GLOBALS["lang"]['Room'] = 'conférence';

$GLOBALS["lang"]['route'] = 'Itinéraire';

$GLOBALS["lang"]['Route'] = 'Itinéraire';

$GLOBALS["lang"]['Row'] = 'Ligne';

$GLOBALS["lang"]['Row Count'] = 'Nombre de lignes';

$GLOBALS["lang"]['row_position'] = 'Position de ligne';

$GLOBALS["lang"]['Row Position'] = 'Position de ligne';

$GLOBALS["lang"]['Rows'] = 'Lignes';

$GLOBALS["lang"]['ru_height'] = 'Hauteur du ru';

$GLOBALS["lang"]['Ru Height'] = 'Hauteur du ru';

$GLOBALS["lang"]['ru_start'] = 'Ru Début';

$GLOBALS["lang"]['Ru Start'] = 'Ru Début';

$GLOBALS["lang"]['rule_group'] = 'Groupe de règles';

$GLOBALS["lang"]['Rule Group'] = 'Groupe de règles';

$GLOBALS["lang"]['rules'] = 'Règles';

$GLOBALS["lang"]['Rules'] = 'Règles';

$GLOBALS["lang"]['Run Discovery'] = 'Lancer Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Exécuter Discovery sur les appareils';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Faites une découverte et découvrez <b>Qu\'y a-t-il sur votre réseau?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Exécutez cette commande';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Exécuter le service Apache Open-Audit sous Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Fédération de Russie';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Débit';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Débit';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Niveau Rx';

$GLOBALS["lang"]['Rx Level'] = 'Niveau Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx Puissance';

$GLOBALS["lang"]['Rx Power'] = 'Rx Puissance';

$GLOBALS["lang"]['rx_profile'] = 'Profil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Profil Rx';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Version SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Détails';

$GLOBALS["lang"]['SNMP OID'] = 'OID SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'Version SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avancé)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Déclarations de création SQL';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Clé';

$GLOBALS["lang"]['SW Revision'] = 'Révision SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint-Barthélemy';

$GLOBALS["lang"]['Saint Helena'] = 'Sainte-Hélène';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint-Kitts-et-Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Sainte-Lucie';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre et Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint-Vincent-et-les Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'Sans';

$GLOBALS["lang"]['San'] = 'Sans';

$GLOBALS["lang"]['San Marino'] = 'Saint-Marin';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tomé-et-Principe';

$GLOBALS["lang"]['Saturday'] = 'Samedi';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arabie saoudite';

$GLOBALS["lang"]['Save as Default'] = 'Enregistrer par défaut';

$GLOBALS["lang"]['scaling'] = 'Élargissement';

$GLOBALS["lang"]['Scaling'] = 'Élargissement';

$GLOBALS["lang"]['scan_options'] = 'Options de numérisation';

$GLOBALS["lang"]['Scan Options'] = 'Options de numérisation';

$GLOBALS["lang"]['Scan Options ID'] = 'ID des options de numérisation';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scanner le numéro supérieur Nmap des ports TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scanner le numéro supérieur Nmap des ports UDP.';

$GLOBALS["lang"]['schedule'] = 'Tableau';

$GLOBALS["lang"]['Schedule'] = 'Tableau';

$GLOBALS["lang"]['scope'] = 'Portée';

$GLOBALS["lang"]['Scope'] = 'Portée';

$GLOBALS["lang"]['script_timeout'] = 'Script timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script timeout';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Bus Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Bus Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Unité logique';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Unité logique';

$GLOBALS["lang"]['scsi_port'] = 'Port Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Port Scsi';

$GLOBALS["lang"]['Search'] = 'Rechercher';

$GLOBALS["lang"]['Search For a Device'] = 'Rechercher un périphérique';

$GLOBALS["lang"]['Search for Device'] = 'Recherche de périphérique';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Recherche à l\'aide de DataTables';

$GLOBALS["lang"]['secondary'] = 'Secondaire';

$GLOBALS["lang"]['Secondary'] = 'Secondaire';

$GLOBALS["lang"]['Secondary Text'] = 'Texte secondaire';

$GLOBALS["lang"]['section'] = 'Chapitre';

$GLOBALS["lang"]['Section'] = 'Chapitre';

$GLOBALS["lang"]['secure'] = 'Sécurisation';

$GLOBALS["lang"]['Secure'] = 'Sécurisation';

$GLOBALS["lang"]['Security Name'] = 'Nom de la sécurité';

$GLOBALS["lang"]['Security Status'] = 'État de sécurité';

$GLOBALS["lang"]['security_zone'] = 'Zone de sécurité';

$GLOBALS["lang"]['Security Zone'] = 'Zone de sécurité';

$GLOBALS["lang"]['seed_ip'] = 'IP des semences';

$GLOBALS["lang"]['Seed IP'] = 'IP des semences';

$GLOBALS["lang"]['seed_ping'] = 'Ping de semences';

$GLOBALS["lang"]['Seed Ping'] = 'Ping de semences';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Restrictions aux semences privées';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Restrictions aux semences privées';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restriction des semences au sous-réseau';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restriction des semences au sous-réseau';

$GLOBALS["lang"]['Select'] = 'Sélectionner';

$GLOBALS["lang"]['Select All'] = 'Tout sélectionner';

$GLOBALS["lang"]['select_external_attribute'] = 'Sélectionner l\'attribut externe';

$GLOBALS["lang"]['Select External Attribute'] = 'Sélectionner l\'attribut externe';

$GLOBALS["lang"]['select_external_count'] = 'Sélectionner le nombre externe';

$GLOBALS["lang"]['Select External Count'] = 'Sélectionner le nombre externe';

$GLOBALS["lang"]['select_external_type'] = 'Sélectionner Externe Type';

$GLOBALS["lang"]['Select External Type'] = 'Sélectionner Externe Type';

$GLOBALS["lang"]['select_external_value'] = 'Sélectionner Externe Valeur';

$GLOBALS["lang"]['Select External Value'] = 'Sélectionner Externe Valeur';

$GLOBALS["lang"]['select_internal_attribute'] = 'Sélectionner l\'attribut interne';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Sélectionner l\'attribut interne';

$GLOBALS["lang"]['select_internal_count'] = 'Sélectionner le nombre interne';

$GLOBALS["lang"]['Select Internal Count'] = 'Sélectionner le nombre interne';

$GLOBALS["lang"]['select_internal_type'] = 'Sélectionner interne Type';

$GLOBALS["lang"]['Select Internal Type'] = 'Sélectionner interne Type';

$GLOBALS["lang"]['select_internal_value'] = 'Sélectionner interne Valeur';

$GLOBALS["lang"]['Select Internal Value'] = 'Sélectionner interne Valeur';

$GLOBALS["lang"]['Select a Table'] = 'Sélectionner une table';

$GLOBALS["lang"]['Senegal'] = 'Sénégal';

$GLOBALS["lang"]['sensitivity'] = 'Sensibilité';

$GLOBALS["lang"]['Sensitivity'] = 'Sensibilité';

$GLOBALS["lang"]['September'] = 'Septembre';

$GLOBALS["lang"]['Serbia'] = 'Serbie';

$GLOBALS["lang"]['serial'] = 'Série';

$GLOBALS["lang"]['Serial'] = 'Série';

$GLOBALS["lang"]['serial_imei'] = 'Série Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Série Imei';

$GLOBALS["lang"]['serial_sim'] = 'Sim série';

$GLOBALS["lang"]['Serial Sim'] = 'Sim série';

$GLOBALS["lang"]['series'] = 'Série';

$GLOBALS["lang"]['Series'] = 'Série';

$GLOBALS["lang"]['server'] = 'Serveur';

$GLOBALS["lang"]['Server'] = 'Serveur';

$GLOBALS["lang"]['server_id'] = 'ID du serveur';

$GLOBALS["lang"]['Server ID'] = 'ID du serveur';

$GLOBALS["lang"]['Server Is'] = 'Serveur est';

$GLOBALS["lang"]['server_item'] = 'Élément du serveur';

$GLOBALS["lang"]['Server Item'] = 'Élément du serveur';

$GLOBALS["lang"]['Server Status'] = 'État du serveur';

$GLOBALS["lang"]['Servers'] = 'Serveur';

$GLOBALS["lang"]['service'] = 'Services';

$GLOBALS["lang"]['Service'] = 'Services';

$GLOBALS["lang"]['service_identifier'] = 'Identification du service';

$GLOBALS["lang"]['Service Identifier'] = 'Identification du service';

$GLOBALS["lang"]['service_level_a'] = 'Niveau de service A';

$GLOBALS["lang"]['Service Level A'] = 'Niveau de service A';

$GLOBALS["lang"]['service_level_b'] = 'Niveau de service B';

$GLOBALS["lang"]['Service Level B'] = 'Niveau de service B';

$GLOBALS["lang"]['service_network'] = 'Réseau de services';

$GLOBALS["lang"]['Service Network'] = 'Réseau de services';

$GLOBALS["lang"]['service_number'] = 'Numéro de service';

$GLOBALS["lang"]['Service Number'] = 'Numéro de service';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Plan de service';

$GLOBALS["lang"]['Service Plan'] = 'Plan de service';

$GLOBALS["lang"]['service_provider'] = 'Fournisseur de services';

$GLOBALS["lang"]['Service Provider'] = 'Fournisseur de services';

$GLOBALS["lang"]['service_tag'] = 'Étiquette de service';

$GLOBALS["lang"]['Service Tag'] = 'Étiquette de service';

$GLOBALS["lang"]['service_type'] = 'Type de service';

$GLOBALS["lang"]['Service Type'] = 'Type de service';

$GLOBALS["lang"]['service_version'] = 'Version de service';

$GLOBALS["lang"]['Service Version'] = 'Version de service';

$GLOBALS["lang"]['Set'] = 'Jeu';

$GLOBALS["lang"]['set_by'] = 'Défini par';

$GLOBALS["lang"]['Set By'] = 'Défini par';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Définissez la taille (normale ou compacte) des tableaux sur les écrans Liste.';

$GLOBALS["lang"]['severity'] = 'Gravité';

$GLOBALS["lang"]['Severity'] = 'Gravité';

$GLOBALS["lang"]['severity_text'] = 'Texte de gravité';

$GLOBALS["lang"]['Severity Text'] = 'Texte de gravité';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'La gravité est calculée à partir <code>base_score</code> et peut être l\'un des: Aucun, faible, moyen, élevé, critique.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Partager';

$GLOBALS["lang"]['Share'] = 'Partager';

$GLOBALS["lang"]['Share Name'] = 'Nom de la société';

$GLOBALS["lang"]['shared'] = 'Partage';

$GLOBALS["lang"]['Shared'] = 'Partage';

$GLOBALS["lang"]['shared_name'] = 'Nom commun';

$GLOBALS["lang"]['Shared Name'] = 'Nom commun';

$GLOBALS["lang"]['shell'] = 'Coque';

$GLOBALS["lang"]['Shell'] = 'Coque';

$GLOBALS["lang"]['Ship Date'] = 'Date du navire';

$GLOBALS["lang"]['short'] = 'Court';

$GLOBALS["lang"]['Short'] = 'Court';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Dois-je supprimer toutes les données non courantes de ce périphérique?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Si ce fichier (ou modèle) est utilisé pour exclure les fichiers de la déclaration. Normalement, pour vérifier les dossiers, ceci est défini à <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Si ce fournisseur est utilisé lors de la récupération des vulnérabilités de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Si nous ajoutions des appareils du service à distance, localement.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Devrions-nous appliquer cette licence aux enfants Org sélectionnés ainsi qu\'aux enfants Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devrions-nous considérer un port filtré comme un port ouvert - et donc marquer cette IP comme ayant un périphérique attaché?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devrions-nous considérer qu\'un port filtré ouvert est un port ouvert - et donc marquer cette IP comme ayant un périphérique attaché?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Devrions-nous exposer ce groupe dans l\'interface web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Si nous exposons cette requête dans la liste des rapports sous le menu Rapport dans l\'interface Web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Si nous exposons cette requête dans la liste des rapports sous le menu Rapports dans l\'interface Web.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Devrions-nous installer Open-Scap sur la machine cible.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Devrions-nous correspondre à une adresse mac basée sur un appareil même si son probablement un duplicata connu de VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Si nous correspondons à un appareil basé sur son DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Si nous correspondons à un périphérique basé sur son nom d\'hôte DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Si nous correspondons à un appareil basé sur son UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Si nous correspondons à un appareil basé sur son id dbus.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Devrions-nous correspondre à un appareil basé sur son fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Si nous correspondons à un appareil basé sur son nom d\'hôte et UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Si nous correspondons à un périphérique basé sur son nom d\'hôte et son id dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Si nous correspondons à un périphérique basé sur son nom d\'hôte et sa série.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Devrions-nous correspondre à un appareil basé sur son ip si nous avons un appareil existant sans données.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Devrions-nous correspondre à un appareil basé sur son ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Devrions-nous correspondre à un appareil basé sur son adresse mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Devrions-nous correspondre à un appareil basé sur sa série et son type.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Si nous correspondons à un appareil basé sur son numéro de série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Si nous correspondons à un appareil basé uniquement sur son SNMP sysName et série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Si nous correspondons à un appareil basé uniquement sur son SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Si nous correspondons à un appareil basé uniquement sur son nom d\'hôte.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Devrions-nous piéger l\'IP avant de tenter de l\'analyser ? Si elle ne répond pas au ping, sautez ce périphérique.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Devrions-nous peupler le système externe à partir de nos appareils locaux.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Si nous effectuons un audit et que nous le soumettons (a/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Si nous testons pour SNMP en utilisant UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Devrions-nous tester SSH en utilisant le port TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Si nous testons pour WMI en utilisant le port TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Si nous désinstallons l\'agent (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Si nous utilisons cette méthode pour authentifier les identifiants d\'utilisateur. Réglé sur <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Si nous utilisons cette méthode pour remplir un rôle d\'utilisateur. Le champ <code>use_auth</code> doit être fixé à <code>y</code> Pour utiliser ça. Réglé sur <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Afficher tout';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Barre latérale';

$GLOBALS["lang"]['Sidebar'] = 'Barre latérale';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapour';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'Heures d\'ouverture A';

$GLOBALS["lang"]['Site Hours A'] = 'Heures d\'ouverture A';

$GLOBALS["lang"]['site_hours_b'] = 'Heures d\'ouverture B';

$GLOBALS["lang"]['Site Hours B'] = 'Heures d\'ouverture B';

$GLOBALS["lang"]['size'] = 'Taille';

$GLOBALS["lang"]['Size'] = 'Taille';

$GLOBALS["lang"]['slaves'] = 'Esclaves';

$GLOBALS["lang"]['Slaves'] = 'Esclaves';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovaquie (République slovaque)';

$GLOBALS["lang"]['Slovenia'] = 'Slovénie';

$GLOBALS["lang"]['Smart Status'] = 'État intelligent';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Foncé';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'ID d\'entreprise Snmp';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'ID d\'entreprise Snmp';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nom de l\'entreprise Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nom de l\'entreprise Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Oid Snmp';

$GLOBALS["lang"]['Snmp Oid'] = 'Oid Snmp';

$GLOBALS["lang"]['snmp_timeout'] = 'Temps d\'arrêt du snmp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Temps d\'arrêt du snmp';

$GLOBALS["lang"]['snmp_version'] = 'Version Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Version Snmp';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Logiciels';

$GLOBALS["lang"]['Software'] = 'Logiciels';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Logiciel trouvé 7 derniers jours';

$GLOBALS["lang"]['Software Found Today'] = 'Logiciels trouvés aujourd\'hui';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Logiciel trouvé hier';

$GLOBALS["lang"]['software_key'] = 'Clé logicielle';

$GLOBALS["lang"]['Software Key'] = 'Clé logicielle';

$GLOBALS["lang"]['software_name'] = 'Nom du logiciel';

$GLOBALS["lang"]['Software Name'] = 'Nom du logiciel';

$GLOBALS["lang"]['Software Policies'] = 'Politiques logicielles';

$GLOBALS["lang"]['software_revision'] = 'Révision du logiciel';

$GLOBALS["lang"]['Software Revision'] = 'Révision du logiciel';

$GLOBALS["lang"]['software_version'] = 'Version du logiciel';

$GLOBALS["lang"]['Software Version'] = 'Version du logiciel';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Îles Salomon';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalie, République somalienne';

$GLOBALS["lang"]['sound'] = 'Son';

$GLOBALS["lang"]['Sound'] = 'Son';

$GLOBALS["lang"]['source'] = 'Source';

$GLOBALS["lang"]['Source'] = 'Source';

$GLOBALS["lang"]['South Africa'] = 'Afrique du Sud';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Géorgie du Sud et îles Sandwich du Sud';

$GLOBALS["lang"]['Spain'] = 'Espagne';

$GLOBALS["lang"]['Spanish'] = 'Espagnol';

$GLOBALS["lang"]['Specific to Azure.'] = 'Spécifique à Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Spécifique à OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Spécifie une liste de cibles séparées par des virgules (aucun espace) à exclure de l\'analyse. La liste que vous passez dans utilise la syntaxe Nmap normale, de sorte qu\'elle peut inclure les noms d\'hôte, les blocs réseau CIDR, les plages d\'octets, etc.';

$GLOBALS["lang"]['speed'] = 'Vitesse';

$GLOBALS["lang"]['Speed'] = 'Vitesse';

$GLOBALS["lang"]['speed_down_a'] = 'Vitesse vers le bas A';

$GLOBALS["lang"]['Speed Down A'] = 'Vitesse vers le bas A';

$GLOBALS["lang"]['speed_down_b'] = 'Vitesse inférieure B';

$GLOBALS["lang"]['Speed Down B'] = 'Vitesse inférieure B';

$GLOBALS["lang"]['speed_up_a'] = 'Accélérer A';

$GLOBALS["lang"]['Speed Up A'] = 'Accélérer A';

$GLOBALS["lang"]['speed_up_b'] = 'Accélérer B';

$GLOBALS["lang"]['Speed Up B'] = 'Accélérer B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ports Ssh';

$GLOBALS["lang"]['Ssh Ports'] = 'Ports Ssh';

$GLOBALS["lang"]['ssh_timeout'] = 'Temps mort';

$GLOBALS["lang"]['Ssh Timeout'] = 'Temps mort';

$GLOBALS["lang"]['Stand-Alone'] = 'Tout seul';

$GLOBALS["lang"]['Standard'] = 'Norme';

$GLOBALS["lang"]['standard_id'] = 'ID standard';

$GLOBALS["lang"]['Standard ID'] = 'ID standard';

$GLOBALS["lang"]['standards'] = 'Normes';

$GLOBALS["lang"]['Standards'] = 'Normes';

$GLOBALS["lang"]['standards_policies'] = 'Politiques de normalisation';

$GLOBALS["lang"]['Standards Policies'] = 'Politiques de normalisation';

$GLOBALS["lang"]['standards_results'] = 'Résultats des normes';

$GLOBALS["lang"]['Standards Results'] = 'Résultats des normes';

$GLOBALS["lang"]['start_date'] = 'Date de début';

$GLOBALS["lang"]['Start Date'] = 'Date de début';

$GLOBALS["lang"]['start_mode'] = 'Mode de démarrage';

$GLOBALS["lang"]['Start Mode'] = 'Mode de démarrage';

$GLOBALS["lang"]['started_date'] = 'Date de début';

$GLOBALS["lang"]['Started Date'] = 'Date de début';

$GLOBALS["lang"]['state'] = 'État';

$GLOBALS["lang"]['State'] = 'État';

$GLOBALS["lang"]['Stats'] = 'Statistiques';

$GLOBALS["lang"]['status'] = 'État';

$GLOBALS["lang"]['Status'] = 'État';

$GLOBALS["lang"]['Storage'] = 'Stockage';

$GLOBALS["lang"]['storage_count'] = 'Nombre de stockage';

$GLOBALS["lang"]['Storage Count'] = 'Nombre de stockage';

$GLOBALS["lang"]['Storage-Area Network'] = 'Réseau des zones de stockage';

$GLOBALS["lang"]['string'] = 'Chaîne';

$GLOBALS["lang"]['String'] = 'Chaîne';

$GLOBALS["lang"]['sub_resource_id'] = 'ID de la sous ressource';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID de la sous ressource';

$GLOBALS["lang"]['sub_type'] = 'Sous-type';

$GLOBALS["lang"]['Sub Type'] = 'Sous-type';

$GLOBALS["lang"]['subject_key_ident'] = 'Identificateur de la clé du sujet';

$GLOBALS["lang"]['Subject Key Ident'] = 'Identificateur de la clé du sujet';

$GLOBALS["lang"]['Submit'] = 'Soumettre';

$GLOBALS["lang"]['Submitted From'] = 'Présenté par';

$GLOBALS["lang"]['subnet'] = 'Sous-réseau';

$GLOBALS["lang"]['Subnet'] = 'Sous-réseau';

$GLOBALS["lang"]['Subscription ID'] = 'Numéro d\'abonnement';

$GLOBALS["lang"]['suburb'] = 'Suburbe';

$GLOBALS["lang"]['Suburb'] = 'Suburbe';

$GLOBALS["lang"]['Success'] = 'Succès';

$GLOBALS["lang"]['Sudan'] = 'Soudan';

$GLOBALS["lang"]['Sudo Password'] = 'Mot de passe Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Mot de passe Sudo (facultatif)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Résumés';

$GLOBALS["lang"]['Summaries'] = 'Résumés';

$GLOBALS["lang"]['Summary'] = 'Résumé';

$GLOBALS["lang"]['Sunday'] = 'Dimanche';

$GLOBALS["lang"]['supplier'] = 'Fournisseur';

$GLOBALS["lang"]['Supplier'] = 'Fournisseur';

$GLOBALS["lang"]['Support'] = 'Appui';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Les types pris en charge sont <code>subnet</code>, <code>seed</code> et <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Îles Svalbard et Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suède';

$GLOBALS["lang"]['Sweden'] = 'Suède';

$GLOBALS["lang"]['switch_device_id'] = 'Indicatif du périphérique de commutation';

$GLOBALS["lang"]['Switch Device ID'] = 'Indicatif du périphérique de commutation';

$GLOBALS["lang"]['switch_port'] = 'Changer de port';

$GLOBALS["lang"]['Switch Port'] = 'Changer de port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suisse, Confédération suisse';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'République arabe syrienne';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'Nom Sys';

$GLOBALS["lang"]['SysName'] = 'Nom Sys';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Composante système';

$GLOBALS["lang"]['System Component'] = 'Composante système';

$GLOBALS["lang"]['System-Area Network'] = 'Réseau système-zone';

$GLOBALS["lang"]['TX Bitrate'] = 'Débit TX';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Niveau TX';

$GLOBALS["lang"]['TX Power'] = 'Puissance TX';

$GLOBALS["lang"]['TX Profile'] = 'Profil TX';

$GLOBALS["lang"]['table'] = 'Tableau';

$GLOBALS["lang"]['Table'] = 'Tableau';

$GLOBALS["lang"]['tag'] = 'Balise';

$GLOBALS["lang"]['Tag'] = 'Balise';

$GLOBALS["lang"]['tag_1'] = 'Étiquette 1';

$GLOBALS["lang"]['Tag 1'] = 'Étiquette 1';

$GLOBALS["lang"]['tag_2'] = 'Étiquette 2';

$GLOBALS["lang"]['Tag 2'] = 'Étiquette 2';

$GLOBALS["lang"]['tag_3'] = 'Étiquette 3';

$GLOBALS["lang"]['Tag 3'] = 'Étiquette 3';

$GLOBALS["lang"]['tags'] = 'Étiquettes';

$GLOBALS["lang"]['Tags'] = 'Étiquettes';

$GLOBALS["lang"]['Tags :: '] = 'Étiquettes :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taïwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadjikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanie';

$GLOBALS["lang"]['task'] = 'Tâche';

$GLOBALS["lang"]['Task'] = 'Tâche';

$GLOBALS["lang"]['tasks'] = 'Tâches';

$GLOBALS["lang"]['Tasks'] = 'Tâches';

$GLOBALS["lang"]['tcp_ports'] = 'Ports Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Ports Tcp';

$GLOBALS["lang"]['tenant'] = 'Locataire';

$GLOBALS["lang"]['Tenant'] = 'Locataire';

$GLOBALS["lang"]['ternary'] = 'Terne';

$GLOBALS["lang"]['Ternary'] = 'Terne';

$GLOBALS["lang"]['Test 1'] = 'Essai 1';

$GLOBALS["lang"]['Test 2'] = 'Essai 2';

$GLOBALS["lang"]['Test 3'] = 'Essai 3';

$GLOBALS["lang"]['test_minutes'] = 'Procès-verbaux d\'essai';

$GLOBALS["lang"]['Test Minutes'] = 'Procès-verbaux d\'essai';

$GLOBALS["lang"]['test_os'] = 'Essai Os';

$GLOBALS["lang"]['Test Os'] = 'Essai Os';

$GLOBALS["lang"]['test_subnet'] = 'Sous-réseau d\'essai';

$GLOBALS["lang"]['Test Subnet'] = 'Sous-réseau d\'essai';

$GLOBALS["lang"]['tests'] = 'Essais';

$GLOBALS["lang"]['Tests'] = 'Essais';

$GLOBALS["lang"]['Text'] = 'Texte';

$GLOBALS["lang"]['Thailand'] = 'Thaïlande';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Le domaine Active Directory pour récupérer une liste de sous-réseaux.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Le serveur Active Directory pour récupérer une liste de sous-réseaux.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La métrique Automatable saisit la réponse à la question <strong>Un attaquant peut-il automatiser les événements d\'exploitation pour cette vulnérabilité sur plusieurs cibles?</strong> basé sur les étapes 1 à 4 de la chaîne d\'abattage. Ces étapes sont la reconnaissance, l\'armement, la livraison et l\'exploitation (Non défini, Non, Oui).';

$GLOBALS["lang"]['The CVE identifier.'] = 'L\'identificateur CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Le Cloud qui possède cet article. Liens vers <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Le Groupe a utilisé la base de référence. Liens vers <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'L\'ID de la table des périphériques (le nom des périphériques sera affiché) de la NTU à cette fin de la connexion. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'L\'identification de la politique de référence importée.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'L\'ID de la table des lieux (le nom de lieu sera affiché) de cette fin de connexion. Liens vers <code>locations.id</code>. L\'emplacement A est généralement le <code>FROM</code> lieu.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'L\'ID de la table des lieux (le nom de lieu sera affiché) de cette fin de connexion. Liens vers <code>locations.id</code>. L\'emplacement B est généralement le <code>TO</code> lieu.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'L\'ID de l\'appareil associé (le cas échéant). Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'L\'identité de la découverte associée. Lié à <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'L\'ID de l\'élément du type associé.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'L\'identité de cet org. parent. Lié à <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'L\'ID fourni par le fournisseur.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'L\'ID récupéré d\'une découverte Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'L\'adresse IP de ce collecteur utilisé pour communiquer avec le serveur.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'L\'IP de l\'appareil pour démarrer une découverte de graine avec.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'L\'IP de l\'interface externe.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'L\'IP de l\'interface interne.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Le FSI ou Telco fournissant ce lien.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Le dossier JSON de Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Le dossier JSON du flux NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'L\'OU LDAP de cet utilisateur (si LDAP est utilisé).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'L\'emplacement qui contient ce réseau. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Le statut de base assigné par la NVD.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Le calendrier Nmap préréglé.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Le système d\'exploitation de ce paquet doit être indiqué en regard. C\'est tout. Utilisez le signe % en tant que wildcard. Sera testé contre os_group, os_family et os_name dans cet ordre.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'L\'API Open-Audit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'L\'identifiant Open-Audit du nuage lié. Liens vers <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Le Sud ouvert Le code du serveur informatique a été supprimé dans ce fichier.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Le Sud ouvert Le code du serveur informatique a été supprimé dans cette fonction.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'L\'Organisation qui possède ce point. Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'L\'identificateur de processus de la découverte associée courante.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Le positon RU du haut de cet appareil.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La chaîne de la communauté SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'La phrase d\'authentification SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protocole d\'authentification SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Le mot de passe SNMP v3 Vie privée.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Le protocole SNMP v3 de confidentialité.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Le niveau de sécurité SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Le nom de sécurité SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Le contexte SNMPv3 ID moteur (facultatif).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Le contexte SNMPv3 Nom (facultatif).';

$GLOBALS["lang"]['The URL of the external system.'] = 'L\'URL du système externe.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'L\'URL de votre Open-Audit Serveur que ce Collector signalera à (pas de barre oblique en arrière).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'L\'URL à laquelle les scripts d\'audit doivent soumettre leur résultat.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Le nom complet de cet utilisateur.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La base de référence associée. Liens vers <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La découverte associée (si nécessaire). Liens vers <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'L\'attribut à tester (de <code>devices</code> tableau).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'L\'attribut à tester (doit correspondre à un nom de champ externe d\'en bas).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Le script d\'audit sur lequel fonder vos personnalisations.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Le chemin de base à partir duquel rechercher Utilisateurs.';

$GLOBALS["lang"]['The benchmark type.'] = 'Le type de référence.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Le bâtiment du rack est situé dans.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Le nombre calculé d\'appareils à créer à l\'extérieur.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Le nombre calculé d\'appareils à créer dans Open-Audit.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'L\'IP interne des collecteurs utilisé lorsqu\'il lance une découverte.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Le nom de la colonne de la table étrangère. Doit être l\'une des catégories suivantes: classe, environnement, état, type ou menu_catégorie.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'La commande exécutée sur le périphérique cible ou le code du serveur Open-Audit exécuté pendant la découverte.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configuration de votre cluster peut être : <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Le mot de passe d\'identification. Si les identifiants sont une clé SSH, c\'est le mot de passe utilisé pour déverrouiller la clé et est facultatif.';

$GLOBALS["lang"]['The credentials username.'] = 'Le nom d\'utilisateur d\'identification.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'L\'état actuel du Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'L\'état actuel de la découverte.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Le tableau de bord qui sera affiché par défaut pour cet utilisateur. Liens vers <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La version de la base de données et la version Web sont incohérentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La date d\'expiration de la licence.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La date à laquelle le logiciel est arrêté par le fabricant. Habituellement remplacé par une version plus récente. L\'entretien peut encore être disponible.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La date à laquelle le logiciel ne reçoit plus de mises à jour et est effectivement arrêté. L\'entretien est interrompu.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La date à laquelle cet article a été modifié ou ajouté (lecture seule). NOTE - C\'est l\'horodatage du serveur.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Date/heure à laquelle ce résultat a été créé.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Le jour du mois où cette tâche doit être exécutée (* pour chaque jour).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Le jour de la semaine où cette tâche doit être exécutée (* pour chaque jour).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La langue par défaut attribuée à tout utilisateur créé par cette méthode.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'L\'appareil doit répondre à un ping Nmap avant d\'être considéré en ligne.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'L\'appareil dans Open-Audit. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Le lien direct pour le script est';

$GLOBALS["lang"]['The email address of the reciever'] = 'L\'adresse e-mail du destinataire';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Le binaire d\'entreprise de FirstWave est requis pour une licence. Veuillez télécharger Open-Audit depuis';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'L\'ensemble de la base de référence associée à ce résultat est de.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'L\'identifiant d\'emplacement de référence externe. Généralement peuplé par des audits Cloud.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La première fois que Open-Audit a récupéré les détails de cet appareil.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Le plancher du rack est situé sur.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Le tableau étranger à référence. Doit être l\'un des: appareils, emplacements, orgs ou requêtes.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Le format utilisé pour la sortie à envoyer par courriel.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La colonne entièrement qualifiée sur laquelle se regrouper. REMARQUE: Lorsque type = trafic, cela représente l\'identifiant de requête rouge.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Le tableau.colonne entièrement qualifié. Plusieurs peuvent être fournis, séparés par une virgule (sans espaces).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La requête SQL générée pour tester cette vulnérabilité. Ce champ peut être modifié pour corriger la requête au besoin.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Le groupe de dispositifs sur lequel la ligne de base a été utilisée.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Le groupe qui fournit une liste de dispositifs pour l\'intégration. Liens vers <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'L\'heure du jour où cette tâche doit être exécutée (* pour chaque heure).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'L\'identité du périphérique lié. Liens vers <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La colonne d\'identification (entier) dans la base de données (lisez seulement).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'L\'importance de ce niveau de référence (pas encore utilisé).';

$GLOBALS["lang"]['The integer of severity.'] = 'L\'entier de gravité.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'L\'adresse ip de la méthode Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La langue pour traduire l\'interface web dans pour l\'utilisateur.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La dernière date et l\'heure d\'exécution de cet article (lecture seule).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La dernière fois qu\'Open-Audit a récupéré les détails de cet appareil.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La dernière fois que ces repères ont été exécutés.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La dernière fois que cette intégration a été réalisée.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Le numéro de ligne attribué par le fournisseur à la ligne à cette fin de la connexion.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'L\'endroit où se trouve le rack. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'L\'adresse des lieux.';

$GLOBALS["lang"]['The locations area.'] = 'La zone de localisation.';

$GLOBALS["lang"]['The locations city.'] = 'Les lieux ville.';

$GLOBALS["lang"]['The locations country.'] = 'Les lieux du pays.';

$GLOBALS["lang"]['The locations district.'] = 'Le quartier des lieux.';

$GLOBALS["lang"]['The locations latitude.'] = 'La latitude des lieux.';

$GLOBALS["lang"]['The locations level.'] = 'Les emplacements.';

$GLOBALS["lang"]['The locations longitude.'] = 'Les emplacements longitude.';

$GLOBALS["lang"]['The locations phone.'] = 'Le téléphone.';

$GLOBALS["lang"]['The locations postcode.'] = 'Les lieux du code postal.';

$GLOBALS["lang"]['The locations region.'] = 'La région des lieux.';

$GLOBALS["lang"]['The locations room.'] = 'La salle des lieux.';

$GLOBALS["lang"]['The locations state.'] = 'L\'état des lieux.';

$GLOBALS["lang"]['The locations suburb.'] = 'La banlieue.';

$GLOBALS["lang"]['The locations suite.'] = 'La suite des lieux.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Le poids physique maximum (en KGs) ce support peut tenir.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Le maximum total de BTUs de ce rack est évalué pour.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'La minute de l\'heure où cette tâche doit être exécutée (* pour chaque minute).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Le mois de l\'année où cette tâche doit être exécutée (* pour chaque mois).';

$GLOBALS["lang"]['The name given to this item.'] = 'Le nom donné à cet article.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Le nom donné à cet article. Idéalement, il devrait être unique.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Le nom donné à cet utilisateur (utilisé pour se connecter). Idéalement, il devrait être unique.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Le nom du nuage associé (si nécessaire).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Le nom du logiciel, tel que vérifié par Open-Audit. Utilisez le signe % en tant que wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Le nom de l\'utilisateur qui a changé ou ajouté cet article (lecture seule).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Le nom fourni par le fournisseur.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Le réseau au format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Le sous-réseau réseau pour exécuter la découverte.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Le nombre de RUs que ce dispositif occupe.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Nombre d\'emplacements associés. Liens vers <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Le nombre de réseaux associés. Liens vers <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Le nombre d\'appareils audités dans ce nuage. Liens vers <code>devices.cloud_id</code> et <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravités critiques détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Le nombre de dispositifs trouvés par cette découverte.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Le nombre de dispositifs dans le groupe associé.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Le nombre de périphériques dans ce cloud avec un état de fonctionnement. Liens vers <code>devices.cloud_id</code> et <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Le nombre de périphériques dans ce nuage avec un état d\'arrêt. Liens vers <code>devices.cloud_id</code> et <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Le nombre d\'appareils dans ce nuage. Liens vers <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Le nombre d\'appareils sur lesquels cette référence sera exécutée. Dérivés <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Le nombre d\'appareils pour limiter cette découverte.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravité élevée détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de faible gravité détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravité moyenne détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Le nombre de licences achetées.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Le nombre de secondes pour essayer de communiquer avec l\'IP cible.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités sans gravité détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La colonne secondaire facultative. REMARQUE: Lorsque type = trafic, cela représente l\'identifiant de requête jaune.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La troisième colonne facultative. REMARQUE: Lorsque type = trafic, cela représente l\'identifiant de requête vert.';

$GLOBALS["lang"]['The orientation of this device.'] = 'L\'orientation de cet appareil.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Le mot de passe pour l\'attribut dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Le mot de passe utilisé pour accéder au système externe.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Le chemin vers le fichier ou le répertoire.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Le chemin vers le fichier ou le répertoire. Les répertoires devraient finir par une barre oblique.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La profondeur physique (en CM) de la grille.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'La hauteur physique (en CM) de la grille.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Le poids physique (en KGs) de la grille à l\'heure actuelle.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Le poids physique (en KGs) de la grille lorsqu\'elle est vide.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'La largeur physique (en CM) du rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Le pod (le cas échéant) dont ce rack fait partie.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Le circuit électrique auquel ce rack s\'attache.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La table de base de données primaire sur laquelle baser ce widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'L\'identificateur de processus de cet élément de file d\'attente.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Le processus qui a été utilisé pour récupérer les détails sur l\'appareil';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La requête qui fournit une liste de périphériques pour l\'intégration. Liens vers <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Le numéro d\'actif du rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'L\'étiquette de l\'actif du rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'Le code à barres.';

$GLOBALS["lang"]['The rack model.'] = 'Le modèle de rack.';

$GLOBALS["lang"]['The rack serial.'] = 'La série de racks.';

$GLOBALS["lang"]['The rack series.'] = 'La série rack.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Le rack où se trouve cet appareil. Liens vers <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Le processus recommandé pour traiter et corriger les vulnérabilités de sécurité identifiées. Cela implique généralement d\'appliquer des correctifs, des mises à jour ou d\'autres mesures pour éliminer le risque que posent les vulnérabilités.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'La notation de domaine régulière de votre répertoire. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Le résultat de la commande.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La chambre où se trouve le rack.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La rangée où se trouve le rack.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La clé secrète utilisée conjointement avec votre clé API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La date de fin de vie du logiciel.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La date de fin de service du logiciel.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La colonne de base de données spécifique du tableau de base de données spécifié.';

$GLOBALS["lang"]['The specific database table.'] = 'La table de base de données spécifique.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Les options standard de chronométrage Nmap. Nous utilisons généralement -T4 (Agressive) comme cela est recommandé pour une connexion haut débit ou Ethernet décente.';

$GLOBALS["lang"]['The status of this integration'] = 'Le statut de cette intégration';

$GLOBALS["lang"]['The status of this queued item.'] = 'L\'état de cet élément en attente.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'L\'IP cible à laquelle cette entrée se réfère (le cas échéant).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Le modèle du lien à générer par ligne de résultat.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Le texte du bas du graphique dans un graphique en ligne (seulement).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Le texte affiché.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'L\'horodatage après quoi, cette tâche devrait s\'exécuter. Par exemple, exécuter une tâche après le 1er juin 2017 à 10h, <code>2017-06-01 09:59:00</code>. Cette valeur devrait être nulle (c\'est-à-dire 09 et non 9). Cette valeur par défaut est <code>2000-01-01 00:00:00</code> ce qui signifie par défaut, une tâche programmée s\'exécutera à la prochaine heure d\'exécution programmée.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Les top 10, 100 ou 1000 (ou aucun) ports TCP couramment utilisés selon Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Les top 10, 100 ou 1000 (ou aucun) ports UDP couramment utilisés selon Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'La sortie totale de BTU par ce rack.';

$GLOBALS["lang"]['The type of device.'] = 'Le type d\'appareil.';

$GLOBALS["lang"]['The type of organisation.'] = 'Le type d\'organisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Le type de rack (calcul, alimentation, réseau, etc.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Le type de tâche à exécuter. L\'un de: base de référence, référence, découverte de nuage, découverte, intégration, rapport, requête.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Le type d\'intégration (généralement nommé d\'après le système externe).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'L\'identificateur unique de ce serveur.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Le compte utilisateur que ce collecteur utilise. Liens vers <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Le nom d\'utilisateur utilisé pour accéder au système externe.';

$GLOBALS["lang"]['The users email address.'] = 'L\'adresse électronique des utilisateurs.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Les heures habituelles de fonctionnement sur ce site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'La valeur attribuée à l\'élément.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'La valeur qui est stockée pour cet élément particulier.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Le nom du vendeur selon les entrées CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Le vendeur a pris du CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Le répertoire web sur l\'hôte qui Open-Audit est installé (qui nécessite une barre oblique).';

$GLOBALS["lang"]['The widget at position '] = 'Le widget en position ';

$GLOBALS["lang"]['The width of this device.'] = 'La largeur de cet appareil.';

$GLOBALS["lang"]['Then'] = 'Alors';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ce CVE sera récupéré et écrasera le CVE existant s\'il existe.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Cet attribut est stocké en tant qu\'objet JSON. C\'est la liste de toutes les collections et contient le nom de la collection avec <code>c</code>, <code>r</code>, <code>u</code> et ou <code>d</code> qui représentent créer, lire, mettre à jour et supprimer. Ce sont les actions qu\'un utilisateur peut effectuer sur des éléments de cette collection particulière.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Ceci peut être soit un varchar (un champ texte), une liste (une liste de valeurs qui peut être sélectionnée) ou une date.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Cet identificateur universel unique en son genre.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Cette description est auto-peuplée et devrait idéalement être laissée comme-est.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Cette fonctionnalité nécessite une licence professionnelle ou d\'entreprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'C\'est généralement la colonne primaire, sauf configuration contraire. NOTA: Lorsque type = trafic, cela représente le texte secondaire.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Cet élément doit correspondre à la valeur de l\'attribut sélectionné ou contient l\'ID de la requête à utiliser.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Cet élément doit correspondre à la valeur de l\'attribut sélectionné.';

$GLOBALS["lang"]['This license expires on'] = 'Cette licence expire le';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ceci doit être réglé à 1 ou la hauteur du rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ça va se repeupler automatiquement.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Cela ralentira considérablement le balayage de la découverte.';

$GLOBALS["lang"]['Thursday'] = 'Jeudi';

$GLOBALS["lang"]['time_caption'] = 'Légende du temps';

$GLOBALS["lang"]['Time Caption'] = 'Légende du temps';

$GLOBALS["lang"]['time_daylight'] = 'Heure';

$GLOBALS["lang"]['Time Daylight'] = 'Heure';

$GLOBALS["lang"]['Time to Execute'] = 'Temps d\'exécution';

$GLOBALS["lang"]['timeout'] = 'Délai';

$GLOBALS["lang"]['Timeout'] = 'Délai';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Délai par cible (deuxièmes)';

$GLOBALS["lang"]['Timesatamp'] = 'Précipitations';

$GLOBALS["lang"]['Timestamp'] = 'Timbre';

$GLOBALS["lang"]['timing'] = 'Calendrier';

$GLOBALS["lang"]['Timing'] = 'Calendrier';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titre';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokélaou';

$GLOBALS["lang"]['Tonga'] = 'États-Unis';

$GLOBALS["lang"]['toolbar_style'] = 'Style de barre d\'outils';

$GLOBALS["lang"]['Toolbar Style'] = 'Style de barre d\'outils';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap Ports TCP';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top des ports UDP Nmap';

$GLOBALS["lang"]['Traditional Chinese'] = 'Chinois traditionnel';

$GLOBALS["lang"]['Traffic Light'] = 'Feu de circulation';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinité-et-Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Dépannage des connexions LDAP';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Essayez toutes les dernières fonctionnalités avec une licence d\'appareil GRATUIT 100 de Open-Audit Enterprise. Veuillez lire le <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Mardi';

$GLOBALS["lang"]['Tunisia'] = 'Tunisie';

$GLOBALS["lang"]['Turkey'] = 'Turquie';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkménistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Îles Turques et Caïques';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Débit';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Débit';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Niveau Tx';

$GLOBALS["lang"]['Tx Level'] = 'Niveau Tx';

$GLOBALS["lang"]['tx_power'] = 'Puissance Tx';

$GLOBALS["lang"]['Tx Power'] = 'Puissance Tx';

$GLOBALS["lang"]['tx_profile'] = 'Profil Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Profil Tx';

$GLOBALS["lang"]['type'] = 'Type';

$GLOBALS["lang"]['Type'] = 'Type';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Ports Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Ports Udp';

$GLOBALS["lang"]['Uganda'] = 'Ouganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

$GLOBALS["lang"]['uninstall'] = 'Désinstaller';

$GLOBALS["lang"]['Uninstall'] = 'Désinstaller';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Désinstaller l\'Agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Émirats arabes unis';

$GLOBALS["lang"]['United Kingdom'] = 'Royaume-Uni';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Îles mineures périphériques des États-Unis';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Îles Vierges américaines';

$GLOBALS["lang"]['United States of America'] = 'États-Unis d \' Amérique';

$GLOBALS["lang"]['Unknown'] = 'Inconnu';

$GLOBALS["lang"]['unlock_pin'] = 'Déverrouiller la broche';

$GLOBALS["lang"]['Unlock Pin'] = 'Déverrouiller la broche';

$GLOBALS["lang"]['Unscheduled'] = 'Non programmé';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Non utilisé au 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Non utilisé.';

$GLOBALS["lang"]['Update'] = 'Mise à jour';

$GLOBALS["lang"]['update_external_count'] = 'Mettre à jour le dénombrement externe';

$GLOBALS["lang"]['Update External Count'] = 'Mettre à jour le dénombrement externe';

$GLOBALS["lang"]['update_external_from_internal'] = 'Mise à jour externe de l\'interne';

$GLOBALS["lang"]['Update External From Internal'] = 'Mise à jour externe de l\'interne';

$GLOBALS["lang"]['update_internal_count'] = 'Mettre à jour le compte interne';

$GLOBALS["lang"]['Update Internal Count'] = 'Mettre à jour le compte interne';

$GLOBALS["lang"]['update_internal_from_external'] = 'Mise à jour interne de l\'extérieur';

$GLOBALS["lang"]['Update Internal From External'] = 'Mise à jour interne de l\'extérieur';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Mettre à jour les périphériques NMIS depuis Open-Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Mettre à jour Open-Audit Dispositifs ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Mettre à jour Open-Audit Dispositifs du NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des IP détectés pour répondre.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des IP qui ont été scannés par Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des appareils que nous avons pu vérifier.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des périphériques que nous avons pu interroger.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Mise à jour chaque fois que la découverte a été exécutée.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Mise à jour chaque fois que la découverte a été exécutée.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Mise à jour chaque fois que la découverte a terminé l\'exécution.';

$GLOBALS["lang"]['Updating'] = 'Mise à jour';

$GLOBALS["lang"]['Upgrade'] = 'Mise à jour';

$GLOBALS["lang"]['Upload an audit result file'] = 'Télécharger un fichier de résultats d\'audit';

$GLOBALS["lang"]['Upper Case'] = 'Haut de la page';

$GLOBALS["lang"]['uptime'] = 'Temps de disponibilité';

$GLOBALS["lang"]['Uptime'] = 'Temps de disponibilité';

$GLOBALS["lang"]['url'] = 'Autres';

$GLOBALS["lang"]['Url'] = 'Autres';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, République orientale';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Utilisation';

$GLOBALS["lang"]['Use'] = 'Utilisation';

$GLOBALS["lang"]['use_authentication'] = 'Utiliser l\'authentification';

$GLOBALS["lang"]['Use Authentication'] = 'Utiliser l\'authentification';

$GLOBALS["lang"]['use_authorisation'] = 'Autorisation d\'utilisation';

$GLOBALS["lang"]['Use Authorisation'] = 'Autorisation d\'utilisation';

$GLOBALS["lang"]['Use SNMP'] = 'Utiliser SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Utiliser SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utiliser Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Utiliser la détection de version de service';

$GLOBALS["lang"]['Use WMI'] = 'Utiliser WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Utilisation pour l\'authentification';

$GLOBALS["lang"]['Use for Roles'] = 'Utilisation pour les rôles';

$GLOBALS["lang"]['used'] = 'Utilisé';

$GLOBALS["lang"]['Used'] = 'Utilisé';

$GLOBALS["lang"]['used_count'] = 'Nombre utilisé';

$GLOBALS["lang"]['Used Count'] = 'Nombre utilisé';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Utilisé par OpenLDAP seulement.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Utilisé en interne pour découvrir un seul appareil.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Utilisé en interne pour découvrir un seul appareil. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Utilisé lorsque les serveurs LDAP ont été configurés pour remplir les détails d\'un utilisateur - cela inclut les Orgs auxquels ils ont accès. Si un utilisateur fait partie de ce groupe LDAP, on lui attribue cet org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Utilisé lorsque les serveurs LDAP ont été configurés pour remplir les détails d\'un utilisateur - cela inclut les rôles qui leur sont assignés. Si un utilisateur fait partie de ce groupe LDAP, on lui attribue ce rôle.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Utilisé lors de la recherche OpenLDAP pour associer un utilisateur uid à un membre de groupe. Par défaut de <code>memberUid</code>. Utilisé par OpenLDAP seulement.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Utilisé avec les intégrations et les applications de surveillance FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Utilisé avec les intégrations et les applications de surveillance FirstWave. Réglez à y si vous travaillez SNMP détecté par découverte.';

$GLOBALS["lang"]['user'] = 'Utilisateur';

$GLOBALS["lang"]['User'] = 'Utilisateur';

$GLOBALS["lang"]['User DN'] = 'DN utilisateur';

$GLOBALS["lang"]['user_group'] = 'Groupe d\'utilisateurs';

$GLOBALS["lang"]['User Group'] = 'Groupe d\'utilisateurs';

$GLOBALS["lang"]['user_id'] = 'ID utilisateur';

$GLOBALS["lang"]['User ID'] = 'ID utilisateur';

$GLOBALS["lang"]['user_interaction'] = 'Interaction utilisateur';

$GLOBALS["lang"]['User Interaction'] = 'Interaction utilisateur';

$GLOBALS["lang"]['User Membership Attribute'] = 'Attribut d\'adhésion de l\'utilisateur';

$GLOBALS["lang"]['user_name'] = 'Nom de l\' utilisateur';

$GLOBALS["lang"]['User Name'] = 'Nom de l\' utilisateur';

$GLOBALS["lang"]['User Policies'] = 'Politiques de l\'utilisateur';

$GLOBALS["lang"]['Username'] = 'Nom d\'utilisateur';

$GLOBALS["lang"]['username'] = 'Nom d\'utilisateur';

$GLOBALS["lang"]['users'] = 'Utilisateur';

$GLOBALS["lang"]['Users'] = 'Utilisateur';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Utilisateurs, rôles et organismes';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Utilisation d\'Entra pour Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Utilisation d\'OKTA pour Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Habituellement Mb/s, de l\'emplacement A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Habituellement Mb/s, de l\'emplacement B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Habituellement Mb/s, à l\'emplacement A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Habituellement Mb/s, à l\'emplacement B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Ouzbékistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'Identification VLAN';

$GLOBALS["lang"]['valid_from'] = 'Valable à partir';

$GLOBALS["lang"]['Valid From'] = 'Valable à partir';

$GLOBALS["lang"]['valid_from_raw'] = 'Valable à partir de brut';

$GLOBALS["lang"]['Valid From Raw'] = 'Valable à partir de brut';

$GLOBALS["lang"]['valid_to'] = 'Valable à';

$GLOBALS["lang"]['Valid To'] = 'Valable à';

$GLOBALS["lang"]['valid_to_raw'] = 'Valable pour brut';

$GLOBALS["lang"]['Valid To Raw'] = 'Valable pour brut';

$GLOBALS["lang"]['Valid Values'] = 'Valeurs valides';

$GLOBALS["lang"]['value'] = 'Valeur';

$GLOBALS["lang"]['Value'] = 'Valeur';

$GLOBALS["lang"]['values'] = 'Valeurs';

$GLOBALS["lang"]['Values'] = 'Valeurs';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['vendor'] = 'Fournisseur';

$GLOBALS["lang"]['Vendor'] = 'Fournisseur';

$GLOBALS["lang"]['vendors'] = 'Fournisseurs';

$GLOBALS["lang"]['Vendors'] = 'Fournisseurs';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version rembourrée';

$GLOBALS["lang"]['Version Padded'] = 'Version rembourrée';

$GLOBALS["lang"]['version_raw'] = 'Version brute';

$GLOBALS["lang"]['Version Raw'] = 'Version brute';

$GLOBALS["lang"]['version_string'] = 'Chaîne de version';

$GLOBALS["lang"]['Version String'] = 'Chaîne de version';

$GLOBALS["lang"]['video'] = 'Vidéo';

$GLOBALS["lang"]['Video'] = 'Vidéo';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Affichage';

$GLOBALS["lang"]['View All'] = 'Afficher tout';

$GLOBALS["lang"]['View Details'] = 'Afficher les détails';

$GLOBALS["lang"]['View Device'] = 'Afficher le périphérique';

$GLOBALS["lang"]['View Discovery'] = 'Afficher la découverte';

$GLOBALS["lang"]['View Policy'] = 'Afficher la politique';

$GLOBALS["lang"]['Virtual Private Network'] = 'Réseau privé virtuel';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisation';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visitez notre chaîne YouTube pour des vidéos pédagogiques.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Identification Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'Identification Vlan';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID du périphérique Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID du périphérique Vm';

$GLOBALS["lang"]['vm_group'] = 'Groupe Vm';

$GLOBALS["lang"]['Vm Group'] = 'Groupe Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Identification';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Identification';

$GLOBALS["lang"]['vm_server_name'] = 'Nom du serveur Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nom du serveur Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Fournisseur';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Fournisseur';

$GLOBALS["lang"]['vuln_status'] = 'Statut vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Statut vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnérabilité';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnérabilité';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Cache de vulnérabilité';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Cache de vulnérabilité';

$GLOBALS["lang"]['vulnerability_id'] = 'Identification de vulnérabilité';

$GLOBALS["lang"]['Vulnerability ID'] = 'Identification de vulnérabilité';

$GLOBALS["lang"]['WHERE'] = 'OÙ';

$GLOBALS["lang"]['wall_port'] = 'Port mural';

$GLOBALS["lang"]['Wall Port'] = 'Port mural';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis et Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Tu veux en savoir plus ?';

$GLOBALS["lang"]['Warning'] = 'Avertissement';

$GLOBALS["lang"]['warranty'] = 'Garantie';

$GLOBALS["lang"]['Warranty'] = 'Garantie';

$GLOBALS["lang"]['warranty_duration'] = 'Durée de la garantie';

$GLOBALS["lang"]['Warranty Duration'] = 'Durée de la garantie';

$GLOBALS["lang"]['warranty_expires'] = 'La garantie expire';

$GLOBALS["lang"]['Warranty Expires'] = 'La garantie expire';

$GLOBALS["lang"]['warranty_status'] = 'État de la garantie';

$GLOBALS["lang"]['Warranty Status'] = 'État de la garantie';

$GLOBALS["lang"]['warranty_type'] = 'Type de garantie';

$GLOBALS["lang"]['Warranty Type'] = 'Type de garantie';

$GLOBALS["lang"]['Web'] = 'Site Web';

$GLOBALS["lang"]['Webserver'] = 'Serveur Web';

$GLOBALS["lang"]['Website'] = 'Site Web';

$GLOBALS["lang"]['Wednesday'] = 'Mercredi';

$GLOBALS["lang"]['weight'] = 'Poids';

$GLOBALS["lang"]['Weight'] = 'Poids';

$GLOBALS["lang"]['weight_current'] = 'Poids actuel';

$GLOBALS["lang"]['Weight Current'] = 'Poids actuel';

$GLOBALS["lang"]['weight_empty'] = 'Poids vide';

$GLOBALS["lang"]['Weight Empty'] = 'Poids vide';

$GLOBALS["lang"]['weight_max'] = 'Poids max';

$GLOBALS["lang"]['Weight Max'] = 'Poids max';

$GLOBALS["lang"]['Welcome'] = 'Bienvenue';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Tableau de bord de bienvenue';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Bienvenue à FirstWave Open-Audit';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara occidental';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Que puis-je attendre si je n\'ai pas de pouvoirs';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Quel est le but de ce rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Quel est le type de cet endroit. Types autorisés <code>attributes</code> tableau.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Lors de l\'intégration des périphériques du système externe, si le périphérique n\'existe pas dans Open-Audit, devrions-nous le créer ?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Lors de l\'intégration des périphériques du système externe, si le périphérique a été mis à jour dans le système externe, devrions-nous le mettre à jour dans Open-Audit?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Lorsqu\'on récupère un appareil externe, faut-il le découvrir ?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Lorsque cette référence est prévue pour être exécutée. Dérivé de la <code>tasks.type</code> et <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quand ce journal a été créé.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Lorsque cet élément de file d\'attente a commencé le traitement.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Lorsque nous exécutons ce niveau de référence, devrait-on vérifier les éléments sur des appareils qui ne sont pas dans une politique pour ce niveau de référence.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Lorsque nous recevons un port ouvert, devrions-nous essayer de tester la version du service actuellement en cours d\'exécution? Cela aide à confirmer les services de fonctionnement réels.';

$GLOBALS["lang"]['where'] = 'où';

$GLOBALS["lang"]['Where'] = 'où';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Où sur l\'écran Détails de l\'appareil vous souhaitez voir ce champ apparaître.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Où est le rack dans la rangée.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Si la vulnérabilité affecte des composantes au-delà de ses propres en utilisant Impact, Disponibilité et Confidentialité.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Indique si l\'interaction utilisateur est nécessaire (Aucune, passive, active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'À quel OS cette référence s\'applique.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Quels appareils devraient créer Open-Audit à partir du système externe (le cas échéant). Utilisation de Tout, Aucun ou d\'un Attribut donné.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Dans quel sous-menu devrions-nous afficher cette requête.';

$GLOBALS["lang"]['Who made this rack.'] = 'Qui a fait ce rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Pourquoi Windows Server seulement?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Pourquoi excluons-nous cette politique?';

$GLOBALS["lang"]['Wide Area Network'] = 'Réseau étendu';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Type de widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Largeur';

$GLOBALS["lang"]['Width'] = 'Largeur';

$GLOBALS["lang"]['windows'] = 'Fenêtres';

$GLOBALS["lang"]['Windows'] = 'Fenêtres';

$GLOBALS["lang"]['Windows Test Script'] = 'Script de test de Windows';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Réseau local sans fil';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Temps mort';

$GLOBALS["lang"]['Wmi Timeout'] = 'Temps mort';

$GLOBALS["lang"]['workgroup'] = 'Groupe de travail';

$GLOBALS["lang"]['Workgroup'] = 'Groupe de travail';

$GLOBALS["lang"]['Working Credentials'] = 'Pouvoirs de travail';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Demande jaune';

$GLOBALS["lang"]['Yemen'] = 'Yémen';

$GLOBALS["lang"]['Yes'] = 'Oui';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Vous pouvez copier et coller cette URL dans un courriel à votre personnel.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Vous devez supprimer votre licence existante avant d\'ajouter une nouvelle licence.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriels YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Votre clé API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Vos identifiants Google Compute comme JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Vos licences';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Votre identifiant client Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Votre Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Votre ID d\'abonnement Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Votre ID Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Votre SQL pour sélectionner les attributs qui rempliront cette requête.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Votre SQL pour sélectionner les périphériques qui peupleront ce groupe.';

$GLOBALS["lang"]['Your SSH key.'] = 'Votre clé SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Vos identifiants d\'accès, selon que les nuages API native.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Votre description du statut de cette connexion (provisoire, retraitée, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Votre description de cet article.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Votre nom générique pour ce logiciel';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Votre version générique pour ce logiciel';

$GLOBALS["lang"]['Zambia'] = 'Zambie';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'actif';

$GLOBALS["lang"]['active directory'] = 'répertoire actif';

$GLOBALS["lang"]['active/active'] = 'actif/actif';

$GLOBALS["lang"]['active/passive'] = 'actif/passif';

$GLOBALS["lang"]['advertisement'] = 'publicité';

$GLOBALS["lang"]['alert'] = 'Alerte';

$GLOBALS["lang"]['all'] = 'Tous';

$GLOBALS["lang"]['allocated'] = 'alloués';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'demande';

$GLOBALS["lang"]['approved'] = 'approuvé';

$GLOBALS["lang"]['attribute'] = 'attribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'sauvegarde';

$GLOBALS["lang"]['banned'] = 'interdit';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'inférieur';

$GLOBALS["lang"]['browser_lang'] = '_lang du navigateur';

$GLOBALS["lang"]['building'] = 'bâtiment';

$GLOBALS["lang"]['cloud'] = 'nuage';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collector'] = 'collecteur';

$GLOBALS["lang"]['compute'] = 'Calcul';

$GLOBALS["lang"]['config'] = 'configuration';

$GLOBALS["lang"]['contains'] = 'contient';

$GLOBALS["lang"]['create'] = 'créer';

$GLOBALS["lang"]['created'] = 'créé';

$GLOBALS["lang"]['critical'] = 'critique';

$GLOBALS["lang"]['cve'] = 'Voir';

$GLOBALS["lang"]['database'] = 'base de données';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'délégué';

$GLOBALS["lang"]['delete'] = 'supprimer';

$GLOBALS["lang"]['deleted'] = 'supprimé';

$GLOBALS["lang"]['denied'] = 'refusé';

$GLOBALS["lang"]['devices'] = 'dispositifs';

$GLOBALS["lang"]['digitalocean'] = 'numérique';

$GLOBALS["lang"]['does not equal'] = 'n\'est pas égal';

$GLOBALS["lang"]['emergency'] = 'urgence';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'égale';

$GLOBALS["lang"]['error'] = 'erreur';

$GLOBALS["lang"]['established'] = 'établi';

$GLOBALS["lang"]['excluded'] = 'exclus';

$GLOBALS["lang"]['expired'] = 'expiré';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extrême - sans quoi, l\'organisation échouerait.

très élevé - Fonctions essentielles à la survie des organisations et à leur restauration immédiate.

haute - fonctions importantes qui devraient être restaurées rapidement mais peuvent avoir un temps de récupération légèrement plus long.

moyenne - Fonctions qui sont nécessaires mais qui peuvent tolérer des temps d\'arrêt plus longs.

faible - Fonctions non essentielles qui peuvent être retardées sans impact significatif.

non assigné - La valeur par défaut jusqu\'à ce qu\'elle soit définie.';

$GLOBALS["lang"]['fail'] = 'échec';

$GLOBALS["lang"]['false'] = 'faux';

$GLOBALS["lang"]['file'] = 'fichier';

$GLOBALS["lang"]['firewall'] = 'Pare-feu';

$GLOBALS["lang"]['fixed'] = 'fixe';

$GLOBALS["lang"]['floor'] = 'plancher';

$GLOBALS["lang"]['front'] = 'devant';

$GLOBALS["lang"]['front-left'] = 'avant gauche';

$GLOBALS["lang"]['front-right'] = 'avant droite';

$GLOBALS["lang"]['github'] = 'Ceinture';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'supérieur ou égal';

$GLOBALS["lang"]['greater than'] = 'supérieur à';

$GLOBALS["lang"]['group'] = 'Groupe';

$GLOBALS["lang"]['head'] = 'tête';

$GLOBALS["lang"]['here'] = 'ici';

$GLOBALS["lang"]['high availability'] = 'haute disponibilité';

$GLOBALS["lang"]['howto'] = 'comment';

$GLOBALS["lang"]['ignored'] = 'ignoré';

$GLOBALS["lang"]['in'] = 'en';

$GLOBALS["lang"]['inactive'] = 'inactif';

$GLOBALS["lang"]['incomplete'] = 'incomplète';

$GLOBALS["lang"]['info'] = 'Informations';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, texte, bool (y/n), etc.';

$GLOBALS["lang"]['is licensed to'] = 'est autorisé à:';

$GLOBALS["lang"]['left'] = 'gauche';

$GLOBALS["lang"]['less or equals'] = 'inférieur ou égal';

$GLOBALS["lang"]['less than'] = 'inférieur à';

$GLOBALS["lang"]['license'] = 'licence';

$GLOBALS["lang"]['like'] = 'comme';

$GLOBALS["lang"]['line'] = 'ligne';

$GLOBALS["lang"]['load balancing'] = 'équilibre de charge';

$GLOBALS["lang"]['location'] = 'lieu';

$GLOBALS["lang"]['managed'] = 'géré';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'point de montage';

$GLOBALS["lang"]['network'] = 'réseau';

$GLOBALS["lang"]['news'] = 'Nouvelles';

$GLOBALS["lang"]['no'] = 'Aucun';

$GLOBALS["lang"]['node'] = 'noeud';

$GLOBALS["lang"]['none'] = 'aucune';

$GLOBALS["lang"]['normal'] = 'normale';

$GLOBALS["lang"]['not applicable'] = 'Sans objet';

$GLOBALS["lang"]['not in'] = 'pas dans';

$GLOBALS["lang"]['not like'] = 'Pas comme';

$GLOBALS["lang"]['notice'] = 'avis';

$GLOBALS["lang"]['notification'] = 'notification';

$GLOBALS["lang"]['okta'] = 'OKta';

$GLOBALS["lang"]['openldap'] = 'ouvertldap';

$GLOBALS["lang"]['optimized'] = 'optimisé';

$GLOBALS["lang"]['optionally '] = 'facultativement ';

$GLOBALS["lang"]['other'] = 'autres';

$GLOBALS["lang"]['package'] = 'colis';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'passe';

$GLOBALS["lang"]['pending'] = 'en attente';

$GLOBALS["lang"]['performance'] = 'performances';

$GLOBALS["lang"]['performed'] = 'exécuté';

$GLOBALS["lang"]['pie'] = 'tarte';

$GLOBALS["lang"]['planning'] = 'planification';

$GLOBALS["lang"]['predictable'] = 'prévisible';

$GLOBALS["lang"]['query'] = 'requête';

$GLOBALS["lang"]['rear'] = 'arrière';

$GLOBALS["lang"]['rear-left'] = 'arrière gauche';

$GLOBALS["lang"]['rear-right'] = 'arrière droite';

$GLOBALS["lang"]['regex'] = 'Régex';

$GLOBALS["lang"]['release'] = 'libération';

$GLOBALS["lang"]['reserved'] = 'réservé';

$GLOBALS["lang"]['right'] = 'droite';

$GLOBALS["lang"]['room'] = 'chambre';

$GLOBALS["lang"]['row'] = 'ligne';

$GLOBALS["lang"]['stand-alone'] = 'autonome';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'commence par';

$GLOBALS["lang"]['storage'] = 'stockage';

$GLOBALS["lang"]['timestamp'] = 'horodatage';

$GLOBALS["lang"]['top'] = 'haut';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - Classification militaire / gouvernementale. La divulgation constituerait un danger exceptionnellement grave pour la sécurité nationale.

secret - Classification militaire / gouvernementale. La divulgation porterait gravement atteinte à la sécurité nationale.

confidentiel - Classification militaire / gouvernementale et secteur privé. Les données confidentielles comprennent les secrets commerciaux, les données intellectuelles, le code de programmation des applications et d\'autres données qui pourraient avoir une incidence grave sur l\'organisation si une divulgation non autorisée s\'est produite. Les données à ce niveau ne seraient disponibles que pour le personnel de l\'organisation dont le travail a besoin ou est directement lié aux données consultées. L\'accès aux données confidentielles nécessite généralement une autorisation pour chaque accès.

classification du secteur privé. Les données privées comprennent toute information relative au personnel, y compris les dossiers des ressources humaines, les dossiers médicaux et les renseignements sur les salaires, qui est utilisée uniquement au sein de l\'organisation.

sensible - Classification militaire / gouvernementale et secteur privé. Les données sensibles comprennent l\'information financière de l\'organisation et nécessitent des mesures supplémentaires pour assurer sa CIA et son exactitude. La divulgation pourrait nuire à la sécurité nationale.

public - Secteur privé. Les données publiques sont des données qui sont généralement partagées avec le public et n\'auraient pas d\'incidence négative sur l\'organisation. Des exemples de données publiques comprennent le nombre de personnes qui travaillent dans l\'organisation et les produits qu\'une organisation fabrique ou vend.

Non classé - Classification militaire / gouvernementale. Toute information qui peut généralement être distribuée au public sans menace pour l\'intérêt national.

non assigné - La valeur par défaut jusqu\'à ce qu\'elle soit définie.';

$GLOBALS["lang"]['traffic'] = 'trafic';

$GLOBALS["lang"]['true'] = 'vrai';

$GLOBALS["lang"]['unallocated'] = 'non alloués';

$GLOBALS["lang"]['unauthorised'] = 'non autorisé';

$GLOBALS["lang"]['unknown'] = 'inconnu';

$GLOBALS["lang"]['unmanaged'] = 'non gérées';

$GLOBALS["lang"]['unused'] = 'inutilisé';

$GLOBALS["lang"]['update'] = 'mise à jour';

$GLOBALS["lang"]['valid'] = 'valide';

$GLOBALS["lang"]['virtualisation'] = 'virtualisation';

$GLOBALS["lang"]['warning'] = 'avertissement';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'oui';

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

