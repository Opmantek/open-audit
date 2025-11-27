<?php
$GLOBALS["lang"][' Default, currently '] = ' Par défaut, actuellement ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Si quelque chose ne fonctionne pas comme prévu, votre première chose à faire est de vérifier les journaux.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' est maintenant pris en charge avec un fichier de langue. Pour modifier votre utilisateur pour utiliser cette langue, cliquez sur ';

$GLOBALS["lang"][' seconds'] = ' secondes';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', mais naura pas besoin de se souvenir dun ensemble séparé didentificateurs de logo.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', dont nous fournissons plus de trente par défaut. Les utilisateurs professionnels ne peuvent pas les modifier, mais un utilisateur Enterprise possède des capacités de personnalisation complètes - y compris la création des vôtres.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', toi <i>doit</i> utiliser https sur votre serveur Open-Audit pour utiliser Entra pour Auth. Veuillez configurer Apache à utiliser <strong>https</strong> avant de configurer Entra pour auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Pour cela, modifiez lélément de configuration pour ';

$GLOBALS["lang"]['10 Minutes'] = '10 minutes';

$GLOBALS["lang"]['15 Minutes'] = '15 minutes';

$GLOBALS["lang"]['30 Minutes'] = '30 minutes';

$GLOBALS["lang"]['5 Minutes'] = '5 minutes';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 contrôles regroupés en catégories organisationnelles, humaines, physiques et technologiques';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOTE</strong> - Vous accédez à cette URL depuis le serveur local Open-Audit. Le script téléchargé ne pourra pas être soumis lors de lexécution sur une autre machine. Si vous devez vérifier dautres machines, veuillez télécharger le script de nimporte quelle machine distante, ne pas utiliser un navigateur sur le serveur Open-Audit lui-même.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTE</strong> - Vous devez avoir des identifiants SSH ou SSH Key pour exécuter des repères sur un périphérique cible.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Référence</strong> - Le document global qui contient la définition de base et les tests de politique individuelle.<br/> <br/> <strong>Politiques</strong> - Les tests individuels contenus dans une base de référence. Chaque test porte sur un élément spécifique. Un exemple serait lessai de la version 1.2.3 de la SSH.<br/> <br/> <strong>Détails</strong> - Les données de référence peuvent comparer les ports netstat, les utilisateurs et les logiciels.<br/> <br/> <strong>Logiciels</strong> - Pour comparer les logiciels, nous vérifions le nom et la version. Parce que les numéros de version ne sont pas tous standardisés en format, lorsque nous recevons un résultat daudit, nous créons un nouvel attribut appelé software_padded que nous stockons dans la base de données avec le reste des détails logiciels pour chaque paquet. Pour cette raison, les lignes de base utilisant des politiques logicielles ne fonctionneront pas lorsquelles sont utilisées contre un appareil qui na pas été vérifié au 1.10 (au moins). Les politiques logicielles peuvent tester contre la version étant "égale à", "plus grande que" ou "égale ou supérieure à".<br/> <br/> <strong>Ports Netstat</strong> - Les ports Netstat utilisent une combinaison de numéro de port, de protocole et de programme. Si tous sont présents, la politique passe.<br/> <br/> <strong>Utilisateur</strong> - Les utilisateurs travaillent comme Netstat Ports. Si un utilisateur existe avec un nom, un statut et des détails de mot de passe correspondants (changeable, expire, requis) alors la politique passe.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Un emplacement est une adresse physique qui peut avoir des dispositifs associés à elle.<br/> <br/>Vous pouvez lui assigner des coordonnées (lat/long) et sil y a des périphériques assignés, lemplacement apparaîtra sur la carte Open-Audit Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Un réseau est dérivé des entrées de découverte et des attributs du périphérique.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Un résumé affichera une liste déléments, regroupés par les valeurs distinctes de lattribut spécifié par le <code>table</code> et <code>column</code> attributs.<br/> <br/>Lorsquun résumé est exécuté, le résultat sera une liste de valeurs distinctes pour <code>table</code> et <code>column</code>. Il y aura des liens sur les valeurs qui permettront à lutilisateur de voir les appareils correspondants.<br/> <br/>Si lattribut <code>extra_columns</code> est peuplé, la page résultante contiendra ces colonnes en plus des colonnes standard de périphérique.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Les agents vous permettent de vérifier les PC sans découverte. Installez lagent et il senregistrera avec le serveur chaque jour et se vérifiera lui-même. Peu importe si vos ordinateurs sont pare-feu, les données daudit apparaîtront toujours dans Open-Audit.</p><p>Lors des essais <strong>si</strong> un agent doit effectuer des actions, les trois tests doivent réussir (si le test est fixé). <strong>Alors</strong> les mesures sont prises.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Les applications sont définies par vous, lutilisateur et stockées pour Open-Audit à utiliser et à associer avec les appareils.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Les attributs sont stockés pour Open-Audit à utiliser pour des champs particuliers.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Être en mesure de déterminer quelles machines sont configurées de la même façon est une partie importante de ladministration et de laudit des systèmes – et maintenant rendre compte de cela sera rendu simple et automatisé. Une fois que vous définissez votre base de référence, il fonctionnera automatiquement contre un ensemble de dispositifs sur un calendrier prédéterminé. La sortie de ces lignes de base exécutées sera disponible pour laffichage sur le Web, limportation dans un système tiers ou même sous forme de rapport imprimé.<br/> <br/> Les données de base vous permettent de combiner les données de vérification avec un ensemble dattributs que vous avez précédemment définis (votre base de référence) pour déterminer la conformité des appareils.<br/> <br/> Par exemple, vous pouvez créer une base de référence à partir dun périphérique exécutant Centos 6 qui agit comme lun de vos serveurs apache dans un cluster. Vous savez que ce serveur particulier est configuré comme vous le souhaitez, mais vous ne savez pas si dautres serveurs du cluster sont configurés exactement de la même façon. Les données de base vous permettent de déterminer cela.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Les grappes sont stockées dans Open-Audit pour associer des appareils afin de mieux enregistrer, gérer et estimer les coûts de licence.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Composants est un terme générique utilisé pour les tables qui stockent les attributs dun appareil. Ces tables sont: access_point, arp, bios, certificat, cli_config, disque, dns, fichier, ip, licence, log, mémoire, module, moniteur, carte mère, netstat, réseau, nmap, optique, fichier de page, partition, politique, print_queue, processeur, radio, route, san, scsi, serveur, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> De plus, nous classons les tableaux suivants comme étant liés à lappareil : application, pièce jointe, cluster, credential, image.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Les pouvoirs sont cryptés lorsquils sont stockés dans la base de données.<br/> <br/>Lorsquun Discovery est lancé, un périphérique a ses identifiants récupérés et testés pour la connexion dabord (à partir de la <code>credential</code> tableau). Si ceux-ci échouent, alors les pouvoirs associés à lOrg donné <code>credentials.org_id</code> est également testé contre le dispositif. Les références de travail sont stockées à un niveau dappareil individuel dans la table des références (note - pas de « s » dans le nom de la table).<br/> <br/>Les clés SSH sont testées avant le nom dutilisateur / mot de passe SSH. Lors du test SSH, les identifiants seront également marqués comme travaillant avec sudo ou étant root.<br/> <br/>Pour faciliter lutilisation, les mots de passe Windows ne doivent pas contenir de guillemet simple ou double. Cest une limitation WMI à distance, pas une limitation Open-Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Les pouvoirs sont utilisés pour accéder aux appareils.<br/> <br/>La configuration des identifiants doit être lune des premières choses que vous faites après avoir installé Open-Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Définissez vos racks et assignez des périphériques dans leurs positions. Vous avez déjà vos appareils dans Open-Audit et vous connaissez vos emplacements. Open-Audit vous permet de créer un rack et de lui assigner des périphériques. Open-Audit fournira même une visualisation du rack et des dispositifs contenus à lintérieur. Si vous fournissez une image dappareil, cette image sera utilisée dans la visualisation. Vous pouvez regarder le rack sur lécran et voir les mêmes éléments que vous verriez si vous étiez debout devant lui.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Les appareils sur votre réseau doivent être gérés. Mais comment gardez-vous vos dossiers à jour ? Une feuille de calcul - définir pas. Ce sera dépassé en heures, sinon en jours. Pourquoi essayer manuellement de suivre. Utilisez Open-Audit pour analyser automatiquement vos réseaux et enregistrer vos appareils - fabricant, modèle, série et plus de 100 autres attributs. Listes complètes de logiciels, services, disques, ports ouverts, utilisateurs, etc. Voir automatiquement si un attribut a été ajouté, supprimé ou modifié.<br/> <br/>Une fois que Open-Audit est configuré, vous pouvez vous asseoir et vous détendre. Des rapports de changement vous ont-ils été envoyés par courriel sur un horaire, par exemple - quels nouveaux appareils avons-nous découverts cette semaine? Quel nouveau logiciel a été installé cette semaine ? Y a-t-il eu des changements matériels le mois dernier ?<br/> <br/>Expand sur les champs stockés facilement avec vos propres attributs personnalisés.<br/> <br/>Ajoutez même des appareils qui ne sont pas connectés à votre réseau ou à ceux que votre serveur Open-Audit ne peut pas atteindre.<br/> <br/>Ordinateurs, commutateurs, routeurs, imprimantes ou tout autre appareil de votre réseau - Open-Audit peut tous les vérifier.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Les découvertes sont au cœur de ce que fait Open-Audit.<br/> <br/>Comment peux-tu savoir ce quil y a sur mon réseau ?<br/> <br/>Les découvertes sont des éléments de données préparés qui vous permettent dexécuter une découverte sur un réseau en un seul clic, sans entrer les détails de ce réseau à chaque fois.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Découverte Les options sont un contexte global modifié dans le <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. Si vous avez une licence Open-Audit Enterprise, celles-ci sont paramétrables par découverte et, en plus, personnalisables au besoin. Découverte Les options sont les suivantes (y compris un temps indicatif pour scanner une IP individuelle):<br/><br/><strong>Ultrarapide</strong>: <i>1 seconde</i>. Scanner uniquement les ports quOpen-Audit doit utiliser pour parler à lappareil et détecter un périphérique IOS (WMI, SSH, SNMP, Apple Sync). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port nest pas considéré comme ouvert. Lappareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br><strong>SuperFast</strong>: <i>5 secondes</i>. Scanner les 10 principaux ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port nest pas considéré comme ouvert. Lappareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br><br/><strong>Rapide</strong>: <i>40 secondes</i>. Scanner les 100 premiers ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port nest pas considéré comme ouvert. Lappareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Moyenne (classique)</strong>: <i>90 secondes</i>. Aussi près dun scan traditionnel Open-Audit que nous pouvons le faire. Scanner les 1000 premiers ports TCP, ainsi que 62078 (détection Apple IOS) et UDP 161 (SNMP). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de lappareil). Les appareils sont scannés quelle que soit la réponse à une ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Moyenne</strong>: <i>100 secondes</i>. Scanner les 1000 premiers ports TCP et 100 premiers ports UDP, ainsi que le port 62078 (détection Apple IOS). Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port nest pas considéré comme ouvert. Lappareil doit répondre à un ping Nmap. Utilisez un timing agressif.<br/><br/><strong>Lentement</strong>: <i>4 minutes</i>. Scanner les 1000 premiers ports TCP et 100 premiers ports UDP, ainsi que le port 62078 (détection Apple IOS). Détection de version activée. Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de lappareil). Lappareil doit répondre à un ping Nmap. Utilisez le timing normal.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Non recommandé. Scanner les 1000 premiers ports TCP et UDP, ainsi que le port 62078 (détection Apple IOS). Les appareils sont scannés quelle que soit la réponse à une ping Nmap. Détection de version activée. Une <code>open|filtered</code> port est considéré ouvert. A <code>filtered</code> port est considéré ouvert (et déclenchera la détection de lappareil). Utilisez le timing poli.<br/><br/><strong>Personnalisé</strong>: <i>Heure inconnue</i>. Lorsque des options autres que celles définies par un préréglage de découverte standard sont modifiées.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Les groupes sont utilisés comme des listes simples dappareils qui correspondent aux conditions requises. Si la demande est faite en utilisant JSON, ils retournent une liste de <code>devices.id</code> Seulement. Si demandé en utilisant linterface Web, ils retournent la liste dattributs de colonne standard.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Si lutilisateur se connecte à Open-Audit na pas accès à la recherche LDAP (et que vous utilisez OpenLDAP), vous pouvez utiliser un autre compte qui a cet accès. Utiliser <code>ldap_dn_account</code> et <code>ldap_dn_password</code> Pour configurer ceci.<br/> <br/><strong>Documentation utile</strong><br/> <br/><a href="/index.php/auth/help">Aide générale</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Utilisation dEntra pour Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Utilisation dOKTA pour Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Dépannage des connexions LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Utilisateurs, rôles et organismes</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Si vous ajoutez un type de périphérique, pour afficher licône associée, vous devrez copier manuellement le fichier formaté .svg dans le répertoire :<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Fenêtres</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Si vous ajoutez un type demplacement, pour afficher licône associée, vous devrez copier manuellement licône 32x32px dans le répertoire:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Fenêtres</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Lorsque <i>Ressources</i> est <code>device</code>, valable <i>types</i> sont: <code>class</code>, <code>environment</code>, <code>status</code> et <code>type</code>. Si <i>Ressources</i> est <code>locations</code> ou <code>org</code> la seule validité <i>type</i> est <code>type</code>. Si <i>Ressources</i> est <code>query</code> la seule validité <i>type</i> est <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Si vous avez lintention dauditer complètement vos machines cloud, noubliez pas que vous aurez également besoin de ces identifiants enregistrés dans Open-Audit.</p><p>Assurez-vous dautoriser les ports corrects si vous utilisez Microsoft Azure (22 pour SSH, etc). Vérifiez votre machine virtuelle -> Règles de réseau.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Si vous sélectionnez un type de liste, le champ « valeurs » sera activé. Vous devriez mettre une liste séparée de virgules de valeurs sélectionnables ici. Celles-ci saffichent dans une boîte déroulante chaque fois que le champ est édité.<br/> <br/>Comme la plupart des autres attributs, Fields peut être modifié en bloc. Utilisez la fonction Édition en vrac comme vous le feriez normalement et vous verrez que les champs sont disponibles pour entrée.<br/> <br/>Consultez lécran des détails de lappareil, ouvrez la section contenant le champ et (si vous avez un accès suffisant) vous pouvez cliquer sur la valeur du champ pour le modifier.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Dans le monde en constante évolution de la sécurité informatique où de nouvelles vulnérabilités sont découvertes et corrigées chaque jour, le respect de la sécurité doit être un processus continu. Il doit également prévoir un moyen dapporter des ajustements aux politiques, ainsi quune évaluation périodique et une surveillance des risques. Lécosystème OpenSCAP fournit des outils et des politiques personnalisables pour une mise en œuvre rapide, rentable et flexible de ces processus.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Les intégrations vous permettent de configurer la sélection des appareils et les horaires pour Open-Audit pour parler aux systèmes externes.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Les systèmes de bureau Windows ont des limites réseau qui peuvent avoir une incidence sur les performances dOpen-Audit. La pile TCP/IP limite le nombre de tentatives de connexion TCP incomplètes simultanées. Une fois la limite atteinte, les tentatives de connexion subséquentes sont mises en file dattente et seront résolues à un taux fixe (10 par seconde). Si trop de personnes entrent dans la file dattente, elles peuvent être abandonnées. Enfin, Apache sera redémarré par lOS. Pour cette raison, linstallation dOpen-Audit sur un système dexploitation de bureau Windows nest pas prise en charge.<br/><br/>Il ny a rien de mal avec le code Open-Audit, et nous ne pouvons rien faire pour résoudre ce problème sur les machines clientes Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Les détails du calendrier Nmap se trouvent au bas de cette page liée <a href="https://nmap.org/book/man-performance.html" target="_blank">Il s  agit d  un projet de loi intitulé < https://nmap.org/book/man-performance.html > .</a>. De cette page :<br/> <br/><em>Si vous êtes sur une connexion haut débit ou éthernet décente, je recommanderais toujours dutiliser -T4 (Agressive). Certaines personnes aiment -T5 (Insane) bien quil soit trop agressif à mon goût. Les gens précisent parfois -T2 (Polite) parce quils pensent quil est moins probable de planter des hôtes ou parce quils se considèrent comme polis en général. Ils ne se rendent souvent pas compte à quel point lent -T2 est vraiment. Leur balayage peut prendre dix fois plus de temps quun balayage par défaut. Les pannes de machines et les problèmes de bande passante sont rares avec les options de timing par défaut -T3 (Normal) et je recommande donc normalement que pour les scanners prudents. La détection domission de version est beaucoup plus efficace que de jouer avec des valeurs de temps pour réduire ces problèmes.</em><footer>Gordon <i>Poudre</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-Audit peut être configuré pour utiliser différentes méthodes pour authentifier un utilisateur et, en outre, pour créer un compte utilisateur en utilisant les rôles et les orgs assignés en fonction de ladhésion au groupe.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Aud ouvert Linformatique peut récupérer les détails dun fichier ou dun répertoire de fichiers et surveiller ces fichiers pour les modifier selon les autres attributs de la base de données Open-Audit.<br/> <br/>Cette fonctionnalité fonctionne à partir de la boîte pour les serveurs Linux Open-Audit, mais a besoin dun changement au nom du compte de service sous un serveur Windows Open-Audit.<br/> <br/>Les clients pris en charge sont Windows et Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Aud ouvert LIT peut récupérer des détails sur un fichier, demander au gestionnaire de paquets natif sils sont connus et surveiller ces fichiers pour les modifications selon les autres attributs de la base de données Open-Audit.<br/> <br/>Les clients pris en charge sont Linux seulement.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Aud ouvert Linformatique peut stocker des informations dans des champs personnalisés qui sont associés à chaque appareil.<br/> <br/>Une fois quun champ supplémentaire a été créé, il peut être utilisé dans les requêtes et les groupes comme nimporte quel autre attribut de la base de données.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-Audit est livré avec de nombreuses requêtes intégrées. Si vous avez besoin dune requête spécifique et quaucune des requêtes préemballées ne correspond à vos besoins, il est assez facile de créer une nouvelle requête et de la charger dans Open-Audit pour lexécuter.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-Audit est livré avec de nombreux résumés intégrés. Si vous avez besoin dun résumé spécifique et quaucun des résumés préemballés ne correspond à vos besoins, il est assez facile de créer un nouveau résumé et de le charger dans Open-Audit pour fonctionner.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-Audit est supporté par FirstWave avec un niveau incroyable de support. Si vous préférez une communauté active de donateurs de soutien, il ya cela aussi. Où pouvez-vous parler directement aux développeurs et obtenir une réponse dans les 24 heures ? Essayez ça avec dautres produits ! Un soutien incroyable. Arrêt complet. Vous avez besoin daide, nous vous aidons. Pas de si ou de mais. Grand soutien. Période.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-Audit fournit multi-tenance hors de la boîte!<br/> <br/>Les orgs (organisations) dans Open-Audit sont un élément clé. Un utilisateur a un Org primaire ainsi quune liste dOrgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de "Roles" assignés qui définissent les actions quils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison dun utilisateur "orgs" et "roles" définit ce quil peut et ne peut pas faire dans Open-Audit.<br/> <br/>La plupart des éléments dans Open-Audit sont assignés à un Org. Appareils, Emplacements, Réseaux, etc.<br/> <br/>Les Orgs peuvent avoir des Orgs enfants. Pensez à une structure dorganigramme (arbre). Si un utilisateur a accès à un Org spécifique, il a également accès à ses descendants. Pour plus dinformations, voir ceci <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-Audit fournit multi-tenance hors de la boîte!<br/> <br/>Les orgs (organisations) dans Open-Audit sont un élément clé. Un utilisateur a un Org primaire ainsi quune liste dOrgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de "Roles" assignés qui définissent les actions quils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison dun utilisateur "orgs" et "roles" définit ce quil peut et ne peut pas faire dans Open-Audit.<br/> <br/>La plupart des éléments dans Open-Audit sont assignés à un Org. Appareils, Emplacements, Réseaux, etc.<br/> <br/>Les Orgs peuvent avoir des Orgs enfants. Pensez à une structure dorganigramme (arbre). Si un utilisateur a accès à un Org spécifique, il a également accès à ses descendants.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Consultez rapidement létat des appareils sur votre réseau.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Rôles dans louverture aud Les TI sont un élément clé. Un utilisateur a un Org primaire ainsi quune liste dOrgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de rôles assignés qui définissent les actions quils peuvent prendre sur les éléments assignés aux Orgs auxquels ils ont accès. La combinaison dun utilisateur "orgs" et "roles" définit ce quil peut et ne peut pas faire dans Open-Audit.<br/> <br/>Obtenez lexpérience complète Open-Audit Enterprise. Créer des rôles permet un contrôle fin sur ce que vos utilisateurs peuvent faire dans Open-Audit.<br/> <br/>La principale méthode dautorisation (ce quun utilisateur peut faire) repose sur les rôles des utilisateurs. Les rôles par défaut sont définis comme admin, org_admin, reporter et utilisateur. Chaque rôle a un ensemble de permissions (Créer, Lire, Mettre à jour, Supprimer) pour chaque paramètre. La possibilité de définir des rôles supplémentaires et de modifier des rôles existants est activée dans Open-Audit Enterprise.<br/> <br/>Les rôles peuvent également être utilisés avec lautorisation LDAP (Active Directory et OpenLDAP). Les installations sous licence dentreprise peuvent personnaliser le groupe LDAP pour chaque rôle défini.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Les règles examinent les attributs et font des cahnges en fonction de la règle appropriée.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Les options de numérisation vous permettent dappliquer facilement un ensemble doptions à une découverte.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Carte géographique simple, intuitive et précise fournie par Google Maps. Les leviers douverture audit Google Maps fournit une cartographie géographique interactive en direct des emplacements des appareils. Conversion automatisée des adresses de rue en géocodes et longitude / latitude.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Les progiciels sont utilisés pour déterminer si des antivirus, des sauvegardes, des pare-feu, des logiciels approuvés ou interdits sont installés.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Voici quelques exemples dattributs de Subnet valides : 192.168.1.1 (une seule adresse IP), 192.168.1.0/24 (un sous-net), 192.168.1-3.1-20 (une plage dadresses IP).<br/> <br/><em>NOTE</em> - Seul un sous-réseau (selon les exemples - 192.168.1.0/24) pourra automatiquement créer un réseau valide pour Open-Audit. <br/> <br/>Si vous utilisez un type Active Directory, assurez-vous davoir les identifiants appropriés pour parler à votre contrôleur de domaine déjà dans <a href="../credentials">pouvoirs</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Les normes sont stockées dans Open-Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Les clients pris en charge sont Linux seulement.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Les tâches ont un planning qui reflète le planning unix cron. Les attributs pour minute, heure, jour_de_mois, mois, jour_de_semaine agissent tous selon les définitions de cron. Vous pouvez sélectionner plusieurs de ces valeurs en utilisant des virgules séparées (pas despaces). Vous pouvez sélectionner chaque valeur en utilisant *.<br/> <br/>Les <code>type</code> de la tâche peut être lun des: lignes de base, collecteurs, découvertes, requêtes, rapports ou résumés.<br/> <br/>Si vous souhaitez planifier une base ou une découverte, vous devrez les créer avant de créer les tâches. Vous devez utiliser lID du type délément dans <code>sub_resource_id</code>. Par exemple, si vous souhaitez programmer une Découverte, utilisez cette identification de Découvertes particulière dans <code>sub_resource_id</code>.<br/> <br/>La valeur pour <code>uuid</code> est spécifique à chaque serveur Open-Audit. Votre valeur unique peut être trouvée dans la configuration.<br/> <br/>Les <code>options</code> attribut est un document JSON contenant tous les attributs supplémentaires nécessaires pour exécuter la tâche. Les attributs supplémentaires pour les rapports, les questions et les résumés sont: <code>email_address</code> et <code>format</code>. Lattribut supplémentaire pour Bselines est <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Les <code>type</code> de lemplacement attribuera son icône.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Le paramètre Attributs vous permet dajouter des valeurs personnalisées à différents attributs dans Open-Audit, pour le moment cette fonctionnalité fonctionne sur les attributs Classe, Environnement, État et Type des périphériques, lattribut Type pour les emplacements et les orgs ainsi que la catégorie Menu pour les requêtes. Si vous visualisez un élément de lun des types prvieux (disons afficher un Lkocation), vous remarquerez que lattribut Type doit être sélectionné dans une boîte déroulante. Cest là que ces valeurs sont stockées. Par conséquent, si vous souhaitez ajouter un nouveau Type à choisir pour un Emplacement, ajoutez-le en utilisant la fonctionnalité Attributs.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La fonctionnalité Collectors vous permet de gérer facilement de nombreux ordinateurs "collector" qui effectuent la découverte réseau. Tous les collecteurs sont contrôlés par le serveur. Les seuls ports réseau requis entre le collecteur et le serveur sont 80 et/ou 443.<br/> <br/>Il rend la gestion des réseaux disparates rapide, facile et simple. Open-Audit Enterprise licences obtenir une licence de collectionneur unique inclus et ont la possibilité dacheter plus au besoin..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La section SELECT de votre SQL <em>doit</em> contient des colonnes entièrement qualifiées. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La section WHERE de votre SQL <em>doit</em> contenant <code>WHERE @filter</code> donc Open-Audit sait limiter votre requête aux Orgs appropriés. SQL ne contenant pas cette condition entraînera le défaut de création de la requête, à moins que vous ayez le rôle dadministrateur.<br/> <br/>Un exemple de requête SQL montrant des attributs sur des périphériques qui ont un <code>os_group</code> attribut de "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La section SELECT de votre SQL <em>doit</em> ne contiennent que <code>DISTINCT(devices.id)</code>.<br/> <br/>La section WHERE de votre SQL <em>doit</em> contenant <code>WHERE @filter</code> donc Open-Audit sait limiter votre requête aux Orgs appropriés. SQL ne contenant pas cette condition entraînera léchec de la création du groupe.<br/> <br/>Un exemple pour SQL pour sélectionner tous les périphériques exécutant le système dexploitation Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Le paramètre de licence vous permet de suivre le nombre de licences trouvées sur vos appareils.<br/> <br/>Pour créer une entrée pour suivre vos licences <em>doit</em> fournir un nom, une organisation, le nombre de licences acquises et le nom du logiciel. Sur le terrain <code>match_string</code> vous devez fournir le nom du logiciel que vous voulez suivre, vous pouvez utiliser le signe pour cent (%) comme wildcard dans le match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Le réseau devrait être au format 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Les articles primaires et secondaires facultatifs devraient être entièrement qualifiés, cest-à-dire les appareils. type ou logiciel. nom.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Il nest pas nécessaire de faire quoi que ce soit si vous utilisez Open-Audit sur un serveur Linux.<br/><br/>Les clients de Windows sont très bien et ne nécessitent aucune action spéciale, cependant.... pour activer cette fonctionnalité le script daudit doit être exécuté localement sur le système Windows cible. Il ne peut pas être exécuté à distance comme nous le faisons avec les appels WMI lors de lexécution du script daudit sur une machine Windows, tout en ciblant une seconde machine Windows. Pour ce faire, nous devons copier le script daudit sur la machine Windows cible, puis lexécuter. Malheureusement, le compte de service sous Apache est le compte système local. Ce compte na pas accès aux ressources distantes (en réseau). Pour résoudre ce problème, le service doit être géré sous un autre compte. Il est plus facile de simplement utiliser le compte dadministrateur local, mais vous pouvez essayer nimporte quel compte que vous aimez tant quil a les privilèges requis. Le compte Système local a autant daccès local que le compte Administrateur local.<br/><br/>Voir notre page sur activer <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Exécuter le service Apache Open-Audit sous Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Ce sont les appareils qui vivent dans un rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ce paramètre vous permet dajouter les détails de votre infrastructure cloud. Open-Audit va ensuite atteindre vos nuages en utilisant leur API native et retourner vos serveurs, tout comme nimporte quel autre périphérique dans Open-Audit.<br/> <br/><em>NOTE</em> - Pour utiliser cette fonctionnalité, nous <em>doit</em> activer les éléments de configuration match_mac (pour AWS) et match_hostname (pour Azure). Cela sera fait automatiquement la première fois quune découverte de nuage est exécutée.<br/> <br/>Pouvoirs relatifs à votre nuage (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> ou <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) sont nécessaires.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Rapport de vulnérabilité basé sur le flux NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Nous avons initialement configuré la liste des scripts par défaut avec les options par défaut. Ces scripts par défaut ne peuvent pas être supprimés. Vous pouvez créer des scripts supplémentaires à utiliser par vous au besoin. Votre script sera basé sur lun des scripts existants et aura des options personnalisées appliquées. Les scripts peuvent ensuite être téléchargés depuis la page de la liste au menu -> Découvrir -> Scénarios daudit -> Liste des scripts de vérification<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Lors de lutilisation de Regex pour la correspondance, une page utile peut être trouvée sur la <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Site web PHP</a>. Certaines différences avec Perl Regex peuvent être trouvées <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">ici</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Les widgets peuvent facilement être créés pour montrer ce qui est spécifique à votre environnement sur vos tableaux de bord.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Avec Open-Audit Professional et Enterprise vous pouvez automatiser et programmer les découvertes, la génération de rapports, ou les vérifications de base pour exécuter quand vous voulez, et aussi souvent que vous avez besoin. Planifiez vos découvertes pour les faire fonctionner tous les soirs et les rapports à produire et envoyer par courriel chaque matin au personnel clé. Horaires complexes ou simples, découverte de lappareil et génération de rapports est juste un clic.<br/> <br/>Créer des calendriers de découverte individuels pour chaque sous-réseau ou contrôleur AD, ajouter dans les rapports à créer pour les publics ciblés. Élaborer des calendriers simples ou complexes pour répondre aux besoins de lentreprise, éviter les sauvegardes ou les impacts sur les opérations, ou simplement pour répartir la charge et accélérer lachèvement de la vérification.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Vous pouvez créer un script avec toutes les options pour tous les scripts daudit existants - pas seulement Windows. AIX, ESX, Linux, OSX et Windows sont tous couverts.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Vous pouvez utiliser le signe % % comme wildcard dans le match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Vos racks aident à affiner exactement lemplacement de vos appareils.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOTE</strong> - Vous accédez à cette URL depuis le serveur local Open-Audit. Le script téléchargé ne pourra pas être soumis lors de lexécution sur une autre machine. Si vous devez vérifier dautres machines, veuillez télécharger le script de nimporte quelle machine distante, ne pas utiliser un navigateur sur le serveur Open-Audit lui-même.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Un élément CVE qui ne contient pas de filtre pour déterminer le ou les éléments touchés.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Une carte Google API La clé est nécessaire pour cette fonction.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Un tableau JSON dID de périphérique qui fera exécuter cette référence.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Un tableau JSON dobjets correspondant au nom du logiciel pris du CVE, enrichi du nom du logiciel récupéré par Open-Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Un tableau JSON de valeurs pour tester cette vulnérabilité.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Un document JSON contenant les Orgs assignés à cet utilisateur. Numéro didentification <code>orgs.id</code>. Si un utilisateur a accès à un Org, il a accès à ses descendants.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Un document JSON contenant les attributs requis selon <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Un document JSON contenant les attributs requis surplombant les options de découverte.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Un document JSON contenant les attributs requis surplombant les options de correspondance par défaut.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Un document JSON contenant les rôles assignés à cet utilisateur. Noms de rôles tirés de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Un objet JSON contenant un tableau dattributs à modifier si la correspondance se produit.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Un objet JSON contenant un tableau dattributs à correspondre.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Un objet JSON contenant des options spécifiques à la collection.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Un objet JSON peuplé par une découverte Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Une représentation JSON contenant les détails de lélément de file à exécuter.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Une représentation JSON des domaines de cette intégration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Une représentation JSON des tests individuels et leurs résultats sur tous les appareils contre lesquels cette valeur de référence a été utilisée.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Une représentation JSON des tests qui composent cette politique.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Un LAN peut être connecté à un WAN en utilisant un routeur.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Un réseau métropolitain (MAN) est un grand réseau informatique qui sétend habituellement sur une ville ou un grand campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A La découverte de semences utilise une IP initiale pour récupérer les IP de tous les autres appareils quelle connaît, ajoute ces IP à la liste et scanne ceux - encore une fois demander des IP de ces appareils supplémentaires. Rincer et répéter. Il est suffisamment intelligent pour savoir sil a déjà scanné une IP donnée dans son exécution et il rejette toute IP déjà scannée (ou même sur la liste à scanner).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Une découverte Subnet va scanner les IP fournies.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Une URL fournie à lagent qui téléchargera ensuite le fichier et le stockera sur le disque local.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Une URL vers un fichier à télécharger.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Un réseau de base fait partie dune infrastructure de réseau informatique qui permet déchanger des informations entre différents réseaux locaux ou sous-réseaux. Une colonne vertébrale peut relier différents réseaux au sein dun même bâtiment, entre différents bâtiments ou sur une vaste superficie.<br/><br/>Par exemple, une grande entreprise pourrait mettre en place un réseau de base pour relier les départements situés dans le monde entier. Léquipement qui relie les réseaux ministériels constitue lépine dorsale du réseau. Lors de la conception dun réseau de base, la performance du réseau et la congestion du réseau sont des facteurs critiques à prendre en compte. Normalement, la capacité du réseau de base est supérieure à celle des réseaux individuels qui y sont connectés.<br/><br/>Un autre exemple de réseau de base est lépine dorsale de lInternet, qui est lensemble de réseaux étendus (WAN) et de routeurs de base qui relient tous les réseaux connectés à Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un champ calculé qui affiche le nombre de fois que ce logiciel a été trouvé sur les ordinateurs dans lOrg sélectionné (et ses descendants si configuré).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Un réseau daires de campus (CAN) est constitué dune interconnexion de réseaux locaux dans une zone géographique limitée. Léquipement de réseautage (interrupteurs, routeurs) et les supports de transmission (fibre optique, usine de cuivre, câblage Cat5, etc.) appartiennent presque entièrement au locataire/propriétaire du campus (entreprise, université, gouvernement, etc.).<br/><br/>Par exemple, un réseau de campus universitaire devrait relier divers bâtiments de campus pour relier les collèges ou départements universitaires, la bibliothèque et les résidences étudiantes.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Un port fermé est accessible (il reçoit et répond aux paquets de sondes Nmap), mais il ny a pas dapplication qui lécoute. Ils peuvent être utiles pour montrer quun hôte est sur une adresse IP (découverte de lhôte, ou balayage de ping), et dans le cadre de la détection OS. Parce que les ports fermés sont accessibles, il peut être utile de scanner plus tard au cas où certains souvrent. Les administrateurs peuvent vouloir envisager de bloquer ces ports avec un pare-feu. Puis ils apparaîtraient à létat filtré, discutés ensuite.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un collecteur est en mode Collector ou Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Une liste séparée par virgule des CVE applicables.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Une liste de valeurs séparées par des virgules, dont une peut être sélectionnée.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un ordre de courir. Lorsque lagent est basé sur Windows, cette commande est exécutée à partir de lagent powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Un tableau de bord est composé de trois colonnes et deux lignes de ce que nous appelons <i>widgets</i>. Un widget est très similaire à un résumé, seulement nous prenons le concept de résumé un peu plus loin. Les widgets sont créés de façon simple à laide de quelques boîtes déroulantes - ou vous pouvez choisir dutiliser votre propre SQL pour une personnalisation complète.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Un port filtré est considéré comme ouvert (et déclenchera la détection de lappareil).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Un réseau régional mondial (GAN) est un réseau utilisé pour soutenir le mobile sur un nombre arbitraire de réseaux sans fil, de zones de couverture par satellite, etc. Le principal défi dans le domaine des communications mobiles est de transférer les communications des utilisateurs dune zone de couverture locale à lautre. Dans le projet 802 de lIEEE, il sagit dune succession de réseaux sans fil terrestres.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Un réseau local résidentiel est un réseau local résidentiel utilisé pour la communication entre les appareils numériques habituellement déployés dans la maison, habituellement un petit nombre dordinateurs et daccessoires personnels, tels que les imprimantes et les appareils informatiques mobiles. Une fonction importante est le partage de laccès à Internet, souvent un service à large bande par lintermédiaire dun câblodistributeur ou dun fournisseur de ligne numérique dabonné (DSL).';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Une liste de ports TCP personnalisés à scanner (22 est SSH, 135 est WMI, 62078 est iPhone synchro).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Une liste de ports UDP personnalisés à scanner (161 est SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Un réseau local (LAN) est un réseau qui relie des ordinateurs et des appareils dans une zone géographique limitée comme une maison, une école, un immeuble à bureaux ou un groupe dimmeubles bien positionnés. Chaque ordinateur ou périphérique sur le réseau est un nœud. Les LAN filaires sont probablement basés sur la technologie Ethernet. De nouvelles normes, comme lUIT-T G.hn, permettent également de créer un réseau local filaire en utilisant des câbles existants, comme les câbles coaxiaux, les lignes téléphoniques et les lignes électriques.<br/><br/>Les caractéristiques déterminantes dun réseau local, contrairement à un réseau étendu, comprennent des taux de transfert de données plus élevés, une portée géographique limitée et un manque de confiance dans les lignes louées pour assurer la connectivité. Les technologies Ethernet actuelles ou autres IEEE 802.3LAN fonctionnent à des taux de transfert de données allant jusquà 100 Gbit/s, normalisées par IEEE en 2010. Actuellement, 400 Gbit/s Ethernet est en cours de développement.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Un emplacement est une adresse physique qui peut avoir des dispositifs associés à elle. Vous pouvez lui assigner des coordonnées et sil y a des appareils assignés, lemplacement apparaîtra sur la carte lorsque vous aurez une licence Open-Audit Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Un nom demplacement vous aidera à trouver ces appareils à lavenir.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un nombre inférieur signifie quil sera appliqué avant dautres règles.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un nombre inférieur signifie quil sera appliqué avant dautres règles. Le poids par défaut est de 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Un nouvel utilisateur sest connecté à Open-Audit et a été authentifié et autorisé par le LDAP sever. Cet utilisateur a ensuite été créé dans Open-Audit et connecté. Succès.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Un paquet est un morceau de softare installé. Un paquet a un type - antivirus, approuvé, sauvegarde, interdit, nuage, pare-feu, ignoré, licence ou autre.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Un mot de passe (conservé comme un hash) qui permet de se connecter lors de lauthentification de lapplication.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Une personne a un compte dans lapplication Open-Audit. Leur compte utilisateur contient une liste des rôles et organisations associés. Les rôles de lutilisateur déterminent ce quils peuvent faire. Les organisations sur lesquelles lutilisateur détermine sur quels éléments il peut agir.<br/><br/>Lorsquun utilisateur demande à effectuer une opération (créer, lire, mettre à jour, supprimer) sur un élément de collection, les rôles sont consultés pour voir sils sont autorisés à effectuer cette action, alors les orgs sont consultés pour déterminer si lélément de collection appartient à un org lutilisateur a la permission dagir.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Un réseau de zones personnelles (PAN) est un réseau informatique utilisé pour la communication entre les ordinateurs et différents dispositifs technologiques de linformation proches dune personne. Quelques exemples dappareils utilisés dans un PAN sont les ordinateurs personnels, les imprimantes, les télécopieurs, les téléphones, les PDA, les scanners et même les consoles de jeux vidéo. Un PAN peut comprendre des appareils filaires et sans fil. La portée dun PAN sétend généralement à 10 mètres. Un PAN câblé est généralement construit avec des connexions USB et FireWire tandis que des technologies comme le Bluetooth et la communication infrarouge forment généralement un PAN sans fil.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Une requête est essentiellement une requête SQL. Cette déclaration est exécutée contre la base de données avec lajout automatique de la limite, filtrée pour sappliquer uniquement aux éléments demandés et à ceux que lutilisateur a la permission de voir. Une requête peut être créée en utilisant le menu -> Gérer -> Questions -> Créer des questions. Les requêtes contiennent un org_id et sont donc limitées aux utilisateurs appropriés. Un utilisateur doit avoir le(s) rôle(s) org_admin ou reporter pour créer, mettre à jour ou supprimer une requête. Tous les utilisateurs peuvent exécuter une requête. Une requête a un attribut de nom utilisé pour lélément de menu ainsi quun attribut de catégorie de menu. Cela indique à linterface graphique ouverte dans quel sous-menu placer la requête. Il y a aussi laffichage de menu qui doit être réglé à <i>y</i> pour activer la requête dans linterface graphique (<i>n</i> pour empêcher lapparition de la requête). La requête serait toujours exécutée si appelé en utilisant son <code>id</code>, quel que soit le menu affiche la valeur.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Un rack est une collection de dispositifs qui sont assignés une position et une hauteur dans le rack. Un appareil peut en option avoir une image associée. Un rack est placé dans une rangée. Nous avons créé un système très granulaire pour le positionnement des racks, qui est comme suit. Au niveau supérieur (comme toujours) se trouve lOrganisation (Org). Un Org peut avoir plusieurs emplacements (comme cela a toujours été le cas). Avec lajout de la fonction Racks, un emplacement peut maintenant contenir un ou plusieurs bâtiments. Un bâtiment peut contenir un ou plusieurs étages. Un étage peut contenir une ou plusieurs chambres. Une pièce peut contenir une ou plusieurs rangées. Cela ressemble à beaucoup de travail, mais par défaut sont créés pour vous. Créez un nouveau lieu et les sous-composants seront automatiquement créés pour vous. Si vous avez besoin de plus darticles (bâtiments, chambres, etc) vous pouvez les ajouter comme vous voulez. Un rack peut également faire partie dun <i>pod</i> des racks. Lattribut pod fonctionne comme une balise, plutôt quun modèle hiérarchique dhéritage strict selon les bâtiments, les planchers, etc.<br/><br/>Les racks sont une fonctionnalité disponible pour les clients autorisés Open-Audit Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un domaine de routage ou un espace dadresses où les adresses IP et MAC sont uniques.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Un exemple de fichier cron pour Linux est ci-dessous. Ceci devrait être placé dans';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Une zone de sécurité est un domaine administratif ou politique dans le domaine réseau.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Une découverte de semences est un autre type de découverte, où vous fournissez lIP dun seul <i>de semence</i> dispositif. Cet appareil est vérifié et tous les IP quil connaît sont ensuite ajoutés à la liste des IP à vérifier. Ensuite, ces dispositifs sont audités et tous les IP quils connaissent sont également ajoutés à la liste des IP pour laudit. Ce processus se poursuit ensuite dans les paramètres configurés par lutilisateur.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Une brève description de lentrée du journal.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Un réseau de zone de stockage (SAN) est un réseau dédié qui permet daccéder au stockage de données de niveau bloc consolidé. Les SAN sont principalement utilisés pour rendre les périphériques de stockage, tels que les réseaux de disques, les bibliothèques de bandes et les jukebox optiques, accessibles aux serveurs de sorte que les périphériques apparaissent comme des périphériques fixés localement au système dexploitation. Un SAN possède généralement son propre réseau dappareils de stockage qui ne sont généralement pas accessibles par le réseau local par dautres appareils. Le coût et la complexité des PAN ont chuté au début des années 2000 à des niveaux permettant une adoption plus large tant dans les entreprises que dans les petites et moyennes entreprises.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Une corde qui correspond à la <code>software.name</code> attribut. Vous pouvez utiliser la carte SQL standard de pourcentage (%) pour correspondre à un ou plusieurs caractères.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Un système structuré de gestion des informations sensibles';

$GLOBALS["lang"]['A timestamp.'] = 'Un horodatage.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Un utilisateur a un Org primaire ainsi quune liste dOrgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de rôles assignés qui définissent les actions quil peut prendre sur les éléments assignés aux Orgs auxquels il a accès. La combinaison dun utilisateur <i>Organismes</i> et <i>Rôles</i> définir ce quils peuvent et ne peuvent pas faire dans Open-Audit.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Un utilisateur aura une liste des organisations associées (orgs). Chaque org lutilisateur leur permettra dagir sur les éléments de cet org selon leur(s) rôle(s).<br/><br/>Tous les orgs sauf lorg par défaut ont un parent. Pensez à un organigramme. Si un utilisateur a la permission sur un Org, ils ont également la permission sur les descendants de cet Org.<br/><br/>Les utilisateurs sont également autorisés sur un org enfant à voir les articles des orgs parent pour certaines collections. Ce sont : tableaux de bord, discovery_scan_options, champs, fichiers, groupes, requêtes, rapports, rôles, règles, scripts, résumés, widgets.<br/><br/>Noubliez pas que vous avez un contrôle granulaire sur ce que les utilisateurs peuvent voir et faire en utilisant Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Un utilisateur aura une liste des organisations associées (orgs). Chaque org lutilisateur leur permettra dagir sur les éléments de cet org selon leur(s) rôle(s).<br/><br/>Tous les orgs sauf lorg par défaut ont un parent. Pensez à un organigramme. Si un utilisateur a la permission sur un Org, ils ont également la permission sur les descendants de cet Org.<br/><br/>Nous avons également permis à un utilisateur avec la permission dun org enfant de voir les éléments des orgs parent pour certaines collections. Ce sont : tableaux de bord, discovery_scan_options, champs, fichiers, groupes, requêtes, rôles, règles, scripts, résumés, widgets.<br/><br/>Noubliez pas que vous avez un contrôle granulaire sur ce que les utilisateurs peuvent voir et faire en utilisant';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Un réseau privé virtuel (VPN) est un réseau de superposition où certaines des liaisons entre nœuds sont transmises par des connexions ouvertes ou des circuits virtuels dans un réseau plus vaste (par exemple Internet) plutôt que par des fils physiques. Les protocoles de couche de liaison de données du réseau virtuel sont dits tunnelés par le réseau plus grand lorsque cest le cas. Une application courante est la sécurité des communications via Internet public, mais un VPN na pas besoin davoir des fonctionnalités de sécurité explicites, comme lauthentification ou le chiffrement de contenu. Les VPN, par exemple, peuvent être utilisés pour séparer le trafic de différentes communautés dutilisateurs sur un réseau sous-jacent avec des fonctionnalités de sécurité solides.<br/><br/>VPN peut avoir les meilleures performances, ou peut avoir un accord de niveau de service défini (SLA) entre le client VPN et le fournisseur de services VPN. En général, un VPN a une topologie plus complexe que point à point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Une vulnérabilité affectant la disponibilité peut permettre aux attaquants de perturber les services, les systèmes décrasement ou de causer un déni de service (DoS) (Aucun, Faible, Élevé).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Une vulnérabilité affectant la confidentialité peut permettre aux attaquants de lire des données sensibles, comme des renseignements personnels, des références ou des données commerciales exclusives (Aucun, Faible, Élevée).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Une vulnérabilité affectant lintégrité peut permettre aux attaquants de modifier les données, dinjecter du code malveillant ou de modifier les configurations du système (Aucune, Faible, Élevée).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Une vulnérabilité peut être modifiée et des noms de paquets plus spécifiques fournis lorsque les données denrichissement sont insuffisantes ou que le SQL généré nest pas tout à fait correct.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Un élément de vulnérabilité dans Open-Audit peut être considéré comme essentiellement une requête contre votre base de données pour déterminer votre exposition potentielle à un rapport CVE donné. Une vulnérabilité est constituée du rapport CVE, ainsi que des données denrichissement de FirstWave. Ces deux éléments sont combinés pour produire une requête appropriée qui est automatiquement téléchargée depuis FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Un réseau étendu (WAN) est un réseau informatique qui couvre une grande zone géographique telle quune ville, un pays, ou couvre même des distances intercontinentales. Un WAN utilise un canal de communication qui combine de nombreux types de médias comme les lignes téléphoniques, les câbles et les ondes aériennes. Un RE fait souvent appel à des installations de transmission fournies par des entreprises communes, comme les compagnies de téléphone. Les technologies WAN fonctionnent généralement aux trois couches inférieures du modèle de référence OSI : la couche physique, la couche de liaison de données et la couche réseau.';

$GLOBALS["lang"]['AD Group'] = 'Groupe AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, RNIS, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TOUS LES PI';

$GLOBALS["lang"]['API / Web Access'] = 'API / Accès Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentation API';

$GLOBALS["lang"]['API Key required.'] = 'API Clé requise.';

$GLOBALS["lang"]['API Result'] = 'Résultat de lAPI';

$GLOBALS["lang"]['About'] = 'À propos';

$GLOBALS["lang"]['Above are the only required items.'] = 'Ci-dessus sont les seuls éléments requis.';

$GLOBALS["lang"]['Accept'] = 'Accepter';

$GLOBALS["lang"]['Access Model'] = 'Modèle daccès';

$GLOBALS["lang"]['access_point'] = 'Point daccès';

$GLOBALS["lang"]['Access Point'] = 'Point daccès';

$GLOBALS["lang"]['access_token'] = 'Jeton daccès';

$GLOBALS["lang"]['Access Token'] = 'Jeton daccès';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Laccès au partage admin$ et RPC utilise le protocole SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Cest bon';

$GLOBALS["lang"]['Ack By'] = 'Cest bon';

$GLOBALS["lang"]['ack_date'] = 'Date';

$GLOBALS["lang"]['Ack Date'] = 'Date';

$GLOBALS["lang"]['ack_time'] = 'Heure darrêt';

$GLOBALS["lang"]['Ack Time'] = 'Heure darrêt';

$GLOBALS["lang"]['action'] = 'Décision';

$GLOBALS["lang"]['Action'] = 'Décision';

$GLOBALS["lang"]['action_audit'] = 'Vérification des mesures';

$GLOBALS["lang"]['Action Audit'] = 'Vérification des mesures';

$GLOBALS["lang"]['action_command'] = 'Commande daction';

$GLOBALS["lang"]['Action Command'] = 'Commande daction';

$GLOBALS["lang"]['action_date'] = 'Date daction';

$GLOBALS["lang"]['Action Date'] = 'Date daction';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositifs daction assignés à lemplacement';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositifs daction assignés à lemplacement';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositifs daction assignés à Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositifs daction assignés à Org';

$GLOBALS["lang"]['action_download'] = 'Action Télécharger';

$GLOBALS["lang"]['Action Download'] = 'Action Télécharger';

$GLOBALS["lang"]['action_uninstall'] = 'Désinstaller laction';

$GLOBALS["lang"]['Action Uninstall'] = 'Désinstaller laction';

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

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activer une licence dentreprise gratuite';

$GLOBALS["lang"]['Active'] = 'Activité';

$GLOBALS["lang"]['Active / Active'] = 'Active / Active';

$GLOBALS["lang"]['Active / Passive'] = 'Active / Passive';

$GLOBALS["lang"]['Active Directory'] = 'Répertoire actif';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domaine dannuaire actif';

$GLOBALS["lang"]['active_directory_ou'] = 'Annuaire actif Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Annuaire actif Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Serveur de répertoire actif';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Répertoire actif et OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Domaine publicitaire';

$GLOBALS["lang"]['Ad Domain'] = 'Domaine publicitaire';

$GLOBALS["lang"]['ad_group'] = 'Groupe ad';

$GLOBALS["lang"]['Ad Group'] = 'Groupe ad';

$GLOBALS["lang"]['ad_server'] = 'Serveur publicitaire';

$GLOBALS["lang"]['Ad Server'] = 'Serveur publicitaire';

$GLOBALS["lang"]['Add'] = 'Ajouter';

$GLOBALS["lang"]['Add Credentials'] = 'Ajouter des pouvoirs';

$GLOBALS["lang"]['Add Device'] = 'Ajouter un périphérique';

$GLOBALS["lang"]['Add Device to Application'] = 'Ajouter un périphérique à lapplication';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Ajouter un périphérique au groupe';

$GLOBALS["lang"]['Add Exception'] = 'Ajouter une exception';

$GLOBALS["lang"]['Add Field'] = 'Ajouter un champ';

$GLOBALS["lang"]['Add If'] = 'Ajouter Si';

$GLOBALS["lang"]['Add Policies from Device'] = 'Ajouter des politiques à partir de lappareil';

$GLOBALS["lang"]['Add Policy'] = 'Ajouter une politique';

$GLOBALS["lang"]['Add Then'] = 'Ajouter ensuite';

$GLOBALS["lang"]['Add Your Credentials'] = 'Ajoutez vos lettres de créances';

$GLOBALS["lang"]['Add image'] = 'Ajouter une image';

$GLOBALS["lang"]['additional_items'] = 'Autres questions';

$GLOBALS["lang"]['Additional Items'] = 'Autres questions';

$GLOBALS["lang"]['address'] = 'Adresse';

$GLOBALS["lang"]['Address'] = 'Adresse';

$GLOBALS["lang"]['Address any nonconformities'] = 'Répondre à toute non-conformité';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Répondre aux constatations de la vérification et aux mesures correctives';

$GLOBALS["lang"]['Admin'] = 'Administrateur';

$GLOBALS["lang"]['admin_status'] = 'État d administration';

$GLOBALS["lang"]['Admin Status'] = 'État d administration';

$GLOBALS["lang"]['advanced'] = 'Avancé';

$GLOBALS["lang"]['Advanced'] = 'Avancé';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Après la création dune intégration, lorsque vous consultez les détails dune intégration, vous remarquerez un champ nommé Debug. Ceci est défini à non par défaut. Le modifier en oui fournit une session supplémentaire lorsquune intégration est exécutée. Le débogage ne devrait pas être laissé comme oui. Cest parce que la sortie de débogage contiendra tout ce qui a été récupéré des systèmes externes - y compris des éléments tels que les identifiants WMI et SNMP. Loption de débogage ne doit être utilisée que lorsquun problème sest produit et vous souhaitez approfondir votre recherche pour voir si vous pouvez déterminer pourquoi.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Après avoir complété ce qui précède, désinstallez lagent.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent ? Découverte ? Pouvoirs ?';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Les entrées dagents peuvent être créées qui spécifient une durée, un réseau et un système dexploitation. Si tous les tests correspondent, le serveur demande alors à lagent deffectuer des actions. Si aucun essai nest réglé, il est exclu de la liste des essais. <i>Tous doivent correspondre</i> obligatoire.<br/><br/>Vous pouvez créer plusieurs agents et faire vérifier par le serveur une ou toutes les entrées dagents. Vous pouvez (par exemple) spécifier un agent qui dit <i>Si lIP de lagent est dans ce sous-net, définissez lemplacement_id du périphérique</i>.<br/><br/>Un autre exemple pourrait être de ne pas exécuter un audit du tout, plutôt télécharger un script et lexécuter. Si lagent est installé avec des droits dadministration, vous pouvez maintenant gérer vos machines sans ouvrir <strong>une</strong> les ports de celui-ci au monde.<p>Activer des agents avancés signifie quun agent peut être chargé de télécharger nimporte quel fichier et dexécuter nimporte quelle commande. <strong>MISE EN GARDE</strong>: Cela comporte des risques pour la sécurité. Cette configuration <strong>seulement</strong> fonction lors de lexécution dOpen-Audit en utilisant HTTPS et un certificat valide (Certificate Authority fourni) pour </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agressifs';

$GLOBALS["lang"]['Aland Islands'] = 'Îles Alandes';

$GLOBALS["lang"]['Albania'] = 'Albanie';

$GLOBALS["lang"]['Albanian'] = 'Albanais';

$GLOBALS["lang"]['alert_style'] = 'Style dalerte';

$GLOBALS["lang"]['Alert Style'] = 'Style dalerte';

$GLOBALS["lang"]['Algeria'] = 'Algérie';

$GLOBALS["lang"]['algorithm'] = 'Algorithme';

$GLOBALS["lang"]['Algorithm'] = 'Algorithme';

$GLOBALS["lang"]['alias'] = 'Autres';

$GLOBALS["lang"]['Alias'] = 'Autres';

$GLOBALS["lang"]['All'] = 'Tous';

$GLOBALS["lang"]['All IPs'] = 'Toutes les PI';

$GLOBALS["lang"]['All Policies'] = 'Toutes les politiques';

$GLOBALS["lang"]['All Queued Items'] = 'Tous les éléments en question';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Toutes les URL de collections utilisent le format';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Toutes les sous-tables de lappareil contiennent quelques colonnes importantes.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Tous les appareils avec un type comme un ordinateur.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Tous les appareils avec un type dordinateur ou de routeur.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Tous les appareils sans commutateur et imprimante.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Tous les appareils sans commutateur et imprimante. Essentiellement la même que la requête ci-dessus.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Toutes les options de découverte régulières sont également disponibles pour une utilisation dans Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Toutes les tâches peuvent être créées de la même manière dans Windows et Linux. Les tâches utilisent la méthode CRON pour planifier lexécution.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'En plus de cette demande dinformations, nous renvoyons aux points de données FirstWave qui nous donneront quelques informations très nécessaires sur lutilisation des fonctionnalités et votre installation.';

$GLOBALS["lang"]['Also can be created from the'] = 'Peut également être créé à partir de la';

$GLOBALS["lang"]['Alternatives'] = 'Solutions de remplacement';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazone Champs';

$GLOBALS["lang"]['American Samoa'] = 'Samoa américaines';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Une découverte Active Directory demandera Active Directory pour une liste de réseaux et numérisera les IP associés comme une découverte Subnet régulière.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Un Org (organisation) est le propriétaire de la plupart des objets dans les collections dans Open-Audit. À lexception des articles mondiaux comme <i>configuration</i>, la plupart des articles sont attribués à (propriété) un Org. Un utilisateur a accès à ces éléments dans une collection, qui ci-dessous à un Org lutilisateur a la permission sur.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Une application accepte activement les connexions TCP, les datagrammes UDP ou les associations SCTP sur ce port. Cest souvent le but principal de la numérisation des ports. Les gens soucieux de la sécurité savent que chaque port ouvert est une voie dattaque. Les attaquants et les testeurs de stylos veulent exploiter les ports ouverts, tandis que les administrateurs essaient de les fermer ou de les protéger avec des pare-feu sans déjouer les utilisateurs légitimes. Les ports ouverts sont également intéressants pour les scans de non-sécurité parce quils montrent les services disponibles pour utilisation sur le réseau.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Une série de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Une série de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Un tableau dobjets représentant des liens externes vers plus dinformations.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Une idée éclairée de lidentité et du type dappareil';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un document JSON crypté contenant les attributs requis selon le <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Un réseau privé dentreprise est un réseau quune seule organisation construit pour interconnecter ses bureaux (p. ex. sites de production, siège social, bureaux éloignés, magasins) afin de partager les ressources informatiques.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Une entrée peut être créée en utilisant linterface web si lutilisateur actuel connecté a un rôle qui contient le';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Un exemple de corps JSON POST est ci-dessous. Cette information devrait être jointe à la rubrique « données ».';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Un exemple de widget SQL montrant les périphériques comptés par emplacement.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Un utilisateur Open-Audit existant a été authentifié et autorisé par le serveur LDAP. Succès.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Une indication du niveau de service requis par ce site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un champ interne qui indique si la découverte a été effectuée.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Un port ouvert est considéré comme ouvert (et déclenchera la détection de lappareil).<br/>Précédemment... IT a considéré une réponse Nmap de';

$GLOBALS["lang"]['An optional GeoCode'] = 'Un code géographique optionnel';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Un mot de passe optionnel pour utiliser sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analyse';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Et enfin, cliquez sur Soumettre pour exécuter cette découverte.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Et si quelque chose ne va pas ?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Et enfin cliquez sur <i>Soumettre</i> pour créer votre méthode Auth Open-Audit pour Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Enfin, pas tant un problème de sécurité - plus de tranquillité desprit. Les structures de données sont ouvertes et documentées. Vous pouvez les voir';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Et fournir un nom - nous vous recommandons humblement Open-Audit, mais vous pouvez le nommer tout ce que vous voulez. Assurez-vous que loption pour <i>Intégrez toute autre application que vous ne trouvez pas dans la galerie (non-gallery)</i> est sélectionné. Et puis cliquez <i>Créer<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Et bien plus encore.';

$GLOBALS["lang"]['Andorra'] = 'Andorre';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Annexe A Contrôles';

$GLOBALS["lang"]['Antarctica'] = 'Antarctique';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Emballages antivirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua-et-Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Tous les ports TCP (comma séparés, pas despaces) que vous souhaitez exclure de cette découverte. Disponible uniquement en utilisant Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Tous les ports UDP (comma séparés, sans espaces) que vous souhaitez exclure de cette découverte. Disponible uniquement en utilisant Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Toute documentation supplémentaire dont vous avez besoin.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Toutes les notes supplémentaires que vous voulez faire.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Tous les attributs suivis dun * indiquent que les données CVSS inférieures à v4 ont été utilisées pour remplir ce champ. Par défaut, nous essayons dutiliser les champs v4, mais sils ne sont pas peuplés, nous reviendrons aux versions précédentes pour les attributs.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Tout appareil sera affecté à cet Org lorsquil exécutera son script daudit (si défini).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Tout appareil sera affecté à cet Org lorsquil exécutera son script daudit (si défini). Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Tout appareil découvert sera affecté à cet emplacement si défini. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Tout périphérique découvert sera affecté à cet emplacement lorsquil exécutera son script daudit (si défini).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Tout périphérique découvert sera affecté à cet emplacement lorsquil exécutera son script daudit (si défini). Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Tout appareil découvert sera affecté à cet Org si défini. Si elles ne sont pas définies, elles sont affectées à la <code>org_id</code> de cette découverte. Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Tous les fichiers trouvés de cette manière sont stockés dans le <i>exécutable</i> tableau selon tout autre composant du dispositif.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Tout filtre requis. REMARQUE: Lorsque le type = trafic, cela représente licône de police-awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Tous les ports TCP spécifiques que vous souhaitez tester (comma séparé, pas despaces).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Tous les ports UDP spécifiques que vous souhaitez tester (comma séparés, pas despaces).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Toutes les images téléchargées par lutilisateur sont placées ici.';

$GLOBALS["lang"]['Application'] = 'Demande';

$GLOBALS["lang"]['Application Definitions'] = 'Définitions';

$GLOBALS["lang"]['application_id'] = 'ID de lapplication';

$GLOBALS["lang"]['Application ID'] = 'ID de lapplication';

$GLOBALS["lang"]['Application Licenses'] = 'Licences dapplication';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Application, système dexploitation ou matériel.';

$GLOBALS["lang"]['applications'] = 'Demandes';

$GLOBALS["lang"]['Applications'] = 'Demandes';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Les applications ne sont quune fonctionnalité Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Des applications sont en cours dintroduction dans Open-Audit 2.2 en vue de développer le concept à mesure que des développements seront faits.';

$GLOBALS["lang"]['applied'] = 'Montant appliqué';

$GLOBALS["lang"]['Applied'] = 'Montant appliqué';

$GLOBALS["lang"]['Approved'] = 'Approuvé';

$GLOBALS["lang"]['Approved Packages'] = 'Trousses approuvées';

$GLOBALS["lang"]['April'] = 'Avril';

$GLOBALS["lang"]['Arabic'] = 'Arabe';

$GLOBALS["lang"]['architecture'] = 'Architecture';

$GLOBALS["lang"]['Architecture'] = 'Architecture';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Voulez-vous vraiment supprimer cet élément dentrée?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Voulez-vous vraiment supprimer cet élément de sortie ?';

$GLOBALS["lang"]['Are you sure?'] = 'Tu es sûr ?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tu es sûr ? Cela supprimera toutes les entrées de file dattente et empêchera la découverte des autres IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tu es sûr ? Cela réinitialisera le compte de traitement de la file dattente et pourrait entraîner une charge sur le serveur.';

$GLOBALS["lang"]['area'] = 'Domaine';

$GLOBALS["lang"]['Area'] = 'Domaine';

$GLOBALS["lang"]['Argentina'] = 'Argentine';

$GLOBALS["lang"]['Armenia'] = 'Arménie';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Pour rappeler comment les autorisations fonctionnent dans Open-Audit, voir';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'En conséquence, nous <strong>doit</strong> avoir la part dadmin$ disponible pour lutilisateur des identifiants de découverte. Sil vous plaît vérifier la cible Windows machine fournit <i>écrire</i> accès pour lutilisateur des identifiants de découverte.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Comme mentionné ci-dessus, les développeurs ne parlent pas toutes les langues de traduction offertes. Cela signifie que nous ne pouvons pas revoir avec exactitude, le texte traduit. Nous essayons de faire une critique sommaire. Si vous voyez quelque chose qui nest pas traduit correctement, vous pouvez le changer vous-même. Modifier le fichier linguistique approprié (comme ci-dessous) et trouver le texte à modifier. Peut-être quil nexiste pas et vous devez lajouter. Il suffit de changer le texte, enregistrer le fichier et rafraîchir votre page. Pas besoin de redémarrer les services/démons pour quil prenne effet. Vous pourriez avoir besoin de forcer rafraîchir votre navigateur.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Selon les critères OpenSCAP - <i>Nessayez pas de mettre en œuvre les paramètres de cette référence sans les tester dabord dans un environnement non opérationnel. Les créateurs de cet indice de référence nassument aucune responsabilité quant à son utilisation par dautres parties et ne donnent aucune garantie, exprimée ou implicite, quant à sa qualité, sa fiabilité ou toute autre caractéristique.</i><br/><br/>Sérieusement, ne commence pas aveuglément <i>fixation</i> les problèmes révélés après avoir exécuté un test de référence sans avoir dabord procédé à des essais approfondis dans un environnement non-production, identique.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Selon les attributs pour les environnements de périphérique. Production, formation, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Comme le script daudit utilise bash, vous pouvez utiliser le wildcard de * lorsque vous définissez des répertoires et des exclusions.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Comme dhabitude, allez au menu → Gérer → Intégrations → Créer lintégration. Comme ci-dessus, si vous utilisez Linux et que vous avez NMIS sur le même serveur, vous navez pas besoin de faire autre chose que cliquer <i>Soumettre</i>. Je ne peux pas rendre ça plus facile.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'En exécutant Discoveries et collectant les résultats de lappareil, nous populons la liste des réseaux. La fonction Bienheureux Subnets utilise cette liste de réseaux pour accepter uniquement les données des appareils de ces réseaux.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Comme vous avez des Collectors enregistrés, veuillez choisir où exécuter cette découverte.';

$GLOBALS["lang"]['Ask me later'] = 'Demande-moi plus tard.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Demander de laide à la Communauté ou apporter des réponses aux autres.';

$GLOBALS["lang"]['aspect_ratio'] = 'Taux d  aspect';

$GLOBALS["lang"]['Aspect Ratio'] = 'Taux d  aspect';

$GLOBALS["lang"]['Asset ID'] = 'Identification de lactif';

$GLOBALS["lang"]['asset_ident'] = 'Identification de lactif';

$GLOBALS["lang"]['Asset Ident'] = 'Identification de lactif';

$GLOBALS["lang"]['asset_number'] = 'Numéro dactif';

$GLOBALS["lang"]['Asset Number'] = 'Numéro dactif';

$GLOBALS["lang"]['asset_tag'] = 'Étiquette de lactif';

$GLOBALS["lang"]['Asset Tag'] = 'Étiquette de lactif';

$GLOBALS["lang"]['Assign Device to Application'] = 'Attribuer lappareil à lapplication';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Attribuer le périphérique au groupe';

$GLOBALS["lang"]['Assign Device to Location'] = 'Attribuer le périphérique à lemplacement';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assigner le périphérique à lorganisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Attribuer les dispositifs à lemplacement';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Attribuer les dispositifs à lorganisation';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Affecter un gestionnaire ou une équipe du SGSI';

$GLOBALS["lang"]['Assign an Operator'] = 'Attribuer un opérateur';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Attribuer tout appareil audité à cet Org. Laisser en blanc pour laisser lappareil dans Org actuellement assigné (ou pour définir par défaut).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Attribuer lappareil à un emplacement';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Attribuer le dispositif à un Org';

$GLOBALS["lang"]['Assigned To'] = 'Affecté à';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Attribution des dispositifs découverts';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Actuellement, nous pouvons utiliser netstat_ports, logiciels et utilisateurs.';

$GLOBALS["lang"]['attached_device_id'] = 'ID du périphérique attaché';

$GLOBALS["lang"]['Attached Device ID'] = 'ID du périphérique attaché';

$GLOBALS["lang"]['attached_to'] = 'Annexe';

$GLOBALS["lang"]['Attached To'] = 'Annexe';

$GLOBALS["lang"]['attachment'] = 'Pièce jointe';

$GLOBALS["lang"]['Attachment'] = 'Pièce jointe';

$GLOBALS["lang"]['attachments'] = 'Pièces jointes';

$GLOBALS["lang"]['Attachments'] = 'Pièces jointes';

$GLOBALS["lang"]['attack_complexity'] = 'Complexité dattaque';

$GLOBALS["lang"]['Attack Complexity'] = 'Complexité dattaque';

$GLOBALS["lang"]['attack_requirements'] = 'Exigences en matière dattaque';

$GLOBALS["lang"]['Attack Requirements'] = 'Exigences en matière dattaque';

$GLOBALS["lang"]['attack_vector'] = 'Vecteur dattaque';

$GLOBALS["lang"]['Attack Vector'] = 'Vecteur dattaque';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Tentative de ping lappareil si nous nauditons pas localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribut';

$GLOBALS["lang"]['attributes'] = 'Attributs';

$GLOBALS["lang"]['Attributes'] = 'Attributs';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Les attributs sont stockés pour Open-Audit à utiliser pour des champs particuliers, à lheure actuelle tous les champs sont basés sur les périphériques, les emplacements, les orgs et les tables de requêtes. Les attributs que vous pouvez modifier sont associés aux colonnes suivantes : Classe, environnement, état et type.';

$GLOBALS["lang"]['Audit'] = 'Vérification des comptes';

$GLOBALS["lang"]['Audit AIX'] = 'Vérification AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Vérification DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Vérification ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Registre de vérification';

$GLOBALS["lang"]['Audit Log'] = 'Registre de vérification';

$GLOBALS["lang"]['Audit Mount Point'] = 'Vérification Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Vérification de mon PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Montant net des audits';

$GLOBALS["lang"]['Audit OSX'] = 'Vérification OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Résultat de la vérification';

$GLOBALS["lang"]['Audit Software'] = 'Logiciel de vérification';

$GLOBALS["lang"]['Audit Status'] = 'État de la vérification';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Vérification Win32 Produit';

$GLOBALS["lang"]['Audit Windows'] = 'Vérification des fenêtres';

$GLOBALS["lang"]['Audit the Device'] = 'Vérification de lappareil';

$GLOBALS["lang"]['Audits'] = 'Vérification des comptes';

$GLOBALS["lang"]['August'] = 'Août';

$GLOBALS["lang"]['Australia'] = 'Australie';

$GLOBALS["lang"]['Austria'] = 'Autriche';

$GLOBALS["lang"]['Auth'] = 'Resp.:';

$GLOBALS["lang"]['auth'] = 'Resp.:';

$GLOBALS["lang"]['Auth Methods'] = 'Méthodes';

$GLOBALS["lang"]['Authenticate only'] = 'Authentifier uniquement';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentification';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protocole dauthentification';

$GLOBALS["lang"]['authority_key_ident'] = 'Numéro didentification de lautorité';

$GLOBALS["lang"]['Authority Key Ident'] = 'Numéro didentification de lautorité';

$GLOBALS["lang"]['Auto'] = 'Automatique';

$GLOBALS["lang"]['auto_renew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['Auto Renew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Autonome peuplé par le serveur Open-Audit.';

$GLOBALS["lang"]['AutoRenew'] = 'Renouvellement automatique';

$GLOBALS["lang"]['automatable'] = 'Automatisation';

$GLOBALS["lang"]['Automatable'] = 'Automatisation';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatiquement peuplé sur la base du système dexploitation Collectors.';

$GLOBALS["lang"]['availability'] = 'Disponibilité';

$GLOBALS["lang"]['Availability'] = 'Disponibilité';

$GLOBALS["lang"]['Available Benchmarks'] = 'Points de référence disponibles';

$GLOBALS["lang"]['Awaiting Analysis'] = 'En attente dune analyse';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaïdjan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaïdjanais';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backbone network'] = 'Réseau de base';

$GLOBALS["lang"]['Backup'] = 'Sauvegarde';

$GLOBALS["lang"]['Bahamas the'] = 'États';

$GLOBALS["lang"]['Bahrain'] = 'Bahreïn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banque';

$GLOBALS["lang"]['Bank'] = 'Banque';

$GLOBALS["lang"]['Banned'] = 'Interdit';

$GLOBALS["lang"]['Banned Packages'] = 'Emballages interdits';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Les données de référence peuvent comparer les ports, les utilisateurs et les logiciels de netstat.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Les données de base vous permettent de combiner les données de vérification avec un ensemble dattributs que vous avez précédemment définis (votre base de référence) pour déterminer la conformité des appareils.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Données de référence pour la comparaison des appareils';

$GLOBALS["lang"]['Basic'] = 'Niveau de base';

$GLOBALS["lang"]['Basque'] = 'Basque';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Parce que nous essayons dêtre le plus transparent possible, voici vos données réelles que nous envoyons.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Être en mesure de déterminer quelles machines sont configurées de la même manière est une partie importante de ladministration et de laudit des systèmes – et maintenant en rendre compte sera rendu simple et automatisé. Une fois que vous définissez votre base de référence, il fonctionnera automatiquement contre un ensemble de dispositifs sur un calendrier prédéterminé. La sortie de ces lignes de base exécutées sera disponible pour laffichage sur le Web, limportation dans un système tiers ou même sous forme de rapport imprimé.<br/><br/>À des fins daudit et de gestion, il peut être avantageux pour les appareils individuels de référence contre un bon appareil fixe et connu. Les données de base vous permettent de combiner les données de vérification avec un ensemble dattributs que vous avez précédemment définis (votre base de référence) pour déterminer la conformité des appareils.';

$GLOBALS["lang"]['Belarus'] = 'Bélarus';

$GLOBALS["lang"]['Belgium'] = 'Belgique';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Voici un exemple du format csv requis.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'En dessous de ces lignes, les variables sont injectées dans le script. Suite à notre exemple précédent, le script daudit Linux est peuplé de notre répertoire comme';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Ci-dessous vous pouvez voir un exemple de graphique dorg. Si un utilisateur a lautorisation <i>Financement A</i> Org, ils ont aussi la permission sur les Orgs descendants du Dept A, B & C. Ceci est sans égard à la collection demandée.<br/><br/>Si la collection demandée permet aux ascendants, lutilisateur aura également accès aux éléments de lentreprise #1 et de lorg par défaut. Ceci est pour (comme ci-dessus) les questions, les groupes, et al.<br/><br/>Note - Un utilisateur peut avoir accès à une requête dOrg par défaut, mais ce nest pas la requête elle-même le résultat. Le résultat ne montrera que les appareils auxquels lutilisateur a accès - les appareils IE de Finance A et Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Critères de référence';

$GLOBALS["lang"]['benchmark_id'] = 'Identification de référence';

$GLOBALS["lang"]['Benchmark ID'] = 'Identification de référence';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Les tâches de benchmark sont créées automatiquement lorsquun benchmark est créé.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Lexécution et le traitement des repères peuvent prendre beaucoup de temps, doù la préférence de les programmer et de ne pas les exécuter ad-hoc.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Les benchmarks sont créés en fournissant un système dexploitation et une version, combinés avec un guide spécifique et une liste de machines pour lexécuter. Après la création, les repères sont exécutés sur la liste des machines sur un calendrier.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Points de repère pour la configuration des meilleures pratiques';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Les benchmarks fournissent des recommandations de sécurité pour vos ordinateurs, en utilisant les outils et les politiques OpenSCAP.<p><i>À partir de la page daccueil OpenSCAP :</i> Dans le monde en constante évolution de la sécurité informatique où de nouvelles vulnérabilités sont découvertes et corrigées chaque jour, le respect de la sécurité doit être un processus continu. Il doit également prévoir un moyen dapporter des ajustements aux politiques, ainsi quune évaluation périodique et une surveillance des risques. Lécosystème OpenSCAP fournit des outils et des politiques personnalisables pour une mise en œuvre rapide, rentable et flexible de ces processus.</p>';

$GLOBALS["lang"]['Benefits'] = 'Avantages';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

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

$GLOBALS["lang"]['Both forms of'] = 'Les deux formes';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Île Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brésil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugais brésilien';

$GLOBALS["lang"]['Breaking it Down'] = 'La briser';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Territoire britannique de l  océan Indien (archipel des Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Îles Vierges britanniques';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Parcourez larbre vers la racine Console -> Services des composantes -> Ordinateurs -> Mon ordinateur<br/><br/>Clic droit sur <i>Mon ordinateur</i> et sélectionnez les propriétés<br/><br/>Sélectionnez la <i>Propriétés par défaut</i> onglet';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Bâtir la confiance avec les clients et les partenaires';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarie';

$GLOBALS["lang"]['Bulgarian'] = 'bulgare';

$GLOBALS["lang"]['Bulk Edit'] = 'Édition en vrac';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Formulaire dédition en vrac';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Attributs du périphérique dédition en vrac';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Les sélections de modification en vrac ne resteront pas sélectionnées après avoir cliqué sur la page suivante.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Exigences opérationnelles';

$GLOBALS["lang"]['Business Requirements'] = 'Exigences opérationnelles';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Mais je nai que les machines clients Windows disponibles!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Mais je ne veux pas avoir à changer le fichier de langue à chaque mise à jour!';

$GLOBALS["lang"]['Buy'] = 'Acheter';

$GLOBALS["lang"]['Buy More'] = 'Acheter plus';

$GLOBALS["lang"]['Buy More Licenses'] = 'Acheter plus de licences';

$GLOBALS["lang"]['By'] = 'Par';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Par défaut, nous intégrons tous les périphériques avec leur attribut nmis_manage défini à <i>y</i>. Avec 4.2.0 nous expédions aussi une règle qui dit <i>Si nous découvrons un appareil et quil a un OID SNMP valide, marquez cet appareil comme géré par NMIS</i>. Évidemment, vous pouvez désactiver cela si ce nest pas ce que vous voulez.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Par défaut, nous sautons la validation du certificat parce que les clients ont tendance à utiliser des certificats autosignés. Pour activer la validation du certificat, modifiez le fichier ci-dessous';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Masque';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs avec un état de réception, en attente danalyse, en cours danalyse, rejetés. Ces CVE (principalement) ne contiennent pas suffisamment dinformations pour nous permettre de générer une requête SQL correcte.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculé à partir de la découverte.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Nombre total dadresses IP valides pour ce réseau.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculé à la fin, le temps nécessaire pour exécuter cet élément.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculé lorsque lintégration est exécutée et contient une représentation JSON des périphériques de cette intégration. Chaque lien vers <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculé lorsque lintégration est exécutée et contient une représentation JSON des emplacements de cette intégration. Chaque lien vers <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculé lors de lintégration et contient le nombre de périphériques sélectionnés à partir dOpen-Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculé lors de lintégration et contient le nombre de périphériques sélectionnés par le système externe.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculé lorsque lintégration est exécutée et contient le nombre de périphériques à mettre à jour dans le système externe.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculé lors de lintégration et contient le nombre de périphériques mis à jour dans Open-Audit.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Appelez une invite de commande en cliquant sur Démarrer et rechercher <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Cambodge';

$GLOBALS["lang"]['Cameroon'] = 'Cameroun';

$GLOBALS["lang"]['Campus Area Network'] = 'Réseau des régions du campus';

$GLOBALS["lang"]['Campus area network'] = 'Réseau de zones de campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Peut être <code>active</code>, <code>passive</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Peut être <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Peut être <code>auto</code>, <code>fixed</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Peut être <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Peut être <code>line</code>, <code>pie</code> ou <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Peut être <code>user</code> ou <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Peut être défini par découverte ou utilisateur.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Peut être défini par découverte ou utilisateur. Utilise lID de la table des emplacements.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Lutilisateur peut modifier cet élément.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Annuler';

$GLOBALS["lang"]['capabilities'] = 'Capacités';

$GLOBALS["lang"]['Capabilities'] = 'Capacités';

$GLOBALS["lang"]['Capacity'] = 'Capacité';

$GLOBALS["lang"]['Cape Verde'] = 'Cap-Vert';

$GLOBALS["lang"]['Capitalise'] = 'Capitalisation';

$GLOBALS["lang"]['caption'] = 'Légende';

$GLOBALS["lang"]['Caption'] = 'Légende';

$GLOBALS["lang"]['Catalan'] = 'Catalan';

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

$GLOBALS["lang"]['Certification'] = 'Attestation';

$GLOBALS["lang"]['Certification Audit'] = 'Vérification de certification';

$GLOBALS["lang"]['Certification Process'] = 'Processus de certification';

$GLOBALS["lang"]['Chad'] = 'Tchad';

$GLOBALS["lang"]['Change'] = 'Changement';

$GLOBALS["lang"]['change_id'] = 'Modifier lID';

$GLOBALS["lang"]['Change ID'] = 'Modifier lID';

$GLOBALS["lang"]['change_log'] = 'Modifier le journal';

$GLOBALS["lang"]['Change Log'] = 'Modifier le journal';

$GLOBALS["lang"]['Change Logs'] = 'Modifier les journaux';

$GLOBALS["lang"]['change_type'] = 'Modifier le type';

$GLOBALS["lang"]['Change Type'] = 'Modifier le type';

$GLOBALS["lang"]['check_minutes'] = 'Vérifier le procès-verbal';

$GLOBALS["lang"]['Check Minutes'] = 'Vérifier le procès-verbal';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Vérifiez SSH sur ces ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Vérifiez ce port pour tout service SSH.';

$GLOBALS["lang"]['Chile'] = 'Chili';

$GLOBALS["lang"]['China'] = 'Chine';

$GLOBALS["lang"]['Chinese'] = 'Chinois';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chinois (traditionnel)';

$GLOBALS["lang"]['Choose'] = 'Choisir';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Choisissez (choisir dabord OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Choisir un périphérique';

$GLOBALS["lang"]['Choose a Table'] = 'Choisir une table';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Choisissez le type de tâche dans la première goutte vers le bas. Cela configurera les champs supplémentaires requis en fonction du type de tâche.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Cliquez sur <i>Nouveau secret client</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Cliquez sur Soumettre pour exécuter';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Cliquez sur <i>Propriétés</i> sous la <i>Gérer</i> header dans la colonne de menu centrale. Copier <i>URL daccès de lutilisateur</i>. Une fois copié, collez-le dans léditeur de texte de yout. Vous devrez copier une section de ce champ.<br/><br/>Notre champ exemple ressemble à ceci<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>La section dont nous avons besoin est : <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (lidentité du locataire). Ceci est utilisé dans Open-Audit comme <i>Locataire</i> Et collez-le là-dedans.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Cliquez sur Enregistrements dapplications pour créer une nouvelle application, puis cliquez sur Enregistrement de nouvelles applications. Donnez-lui un nom (jai utilisé Open-Audit), sélectionnez Web app / API comme type et fournir nimporte quelle URL (lURL nest pas importante) et maintenant cliquez sur Créer.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Cliquez sur OK et fermez la fenêtre DCOMCNFG.<br/><br/>Les changements ci-dessus nécessiteront un redémarrage pour prendre effet.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Cliquez sur lapplication que vous venez de créer. LID de lapplication affiché est lID du client.<br/><br/>Pour créer le secret client, cliquez sur Paramètres, puis sur Clés. Fournissez un nom de clé et sélectionnez une date dexpiration appropriée, puis cliquez sur Enregistrer.<br/><br/>La valeur sera peuplée pour vous - cest le Client Secret.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Cliquez sur le bouton Supprimer pour supprimer les exemples de périphériques dOpen-Audit.<br/>Cela supprimera les appareils ci-dessous de la base de données. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Cliquez sur le bouton Modifier pour <i>Base du SAML Configuration</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Cliquez sur le bouton Importer ci-dessous pour remplir Open-Audit avec des données de périphérique exemple.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Cliquez sur licône à droite du champ que vous souhaitez modifier. Changez le champ et cliquez sur licône verte à soumettre.';

$GLOBALS["lang"]['Client ID'] = 'Identification du client';

$GLOBALS["lang"]['Client ID and Secret'] = 'Identification du client et secret';

$GLOBALS["lang"]['client_ident'] = 'Identification du client';

$GLOBALS["lang"]['Client Ident'] = 'Identification du client';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Nom du site client';

$GLOBALS["lang"]['Client Site Name'] = 'Nom du site client';

$GLOBALS["lang"]['Close'] = 'Fermer';

$GLOBALS["lang"]['Closed'] = 'Fermé';

$GLOBALS["lang"]['Cloud'] = 'Nuage';

$GLOBALS["lang"]['Cloud Details'] = 'Détails du nuage';

$GLOBALS["lang"]['Cloud Discovery'] = 'Découverte en nuage';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Découverte et audit en nuage';

$GLOBALS["lang"]['cloud_id'] = 'ID Cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID Cloud';

$GLOBALS["lang"]['cloud_log'] = 'Log des nuages';

$GLOBALS["lang"]['Cloud Log'] = 'Log des nuages';

$GLOBALS["lang"]['cloud_name'] = 'Nom du nuage';

$GLOBALS["lang"]['Cloud Name'] = 'Nom du nuage';

$GLOBALS["lang"]['Cloud Network'] = 'Réseau Cloud';

$GLOBALS["lang"]['clouds'] = 'Nuages';

$GLOBALS["lang"]['Clouds'] = 'Nuages';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Les clouds sont une fonctionnalité disponible pour les clients sous licence Open-Audit Enterprise.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Groupes et rapports';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Îles Cocos (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Recouvrement';

$GLOBALS["lang"]['Collections'] = 'Recouvrement';

$GLOBALS["lang"]['Collector'] = 'Collecteur';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collecteur (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server est une fonctionnalité Enterprise uniquement. Les clients dentreprise reçoivent une licence Collector gratuitement. Des licences de collecteur supplémentaires peuvent être achetées au besoin.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server est conçu pour que vous puissiez avoir une télécommande ou <i>collecteur</i> exemple dOpen-Audit fonctionnant sur une machine distante. Cette instance collector peut se trouver dans une autre zone de sécurité, sous-net, instance dhébergement cloud ou sur un site client. Le collecteur distant fait ensuite toute la découverte et laudit des appareils localement en évitant le réseautage et la complexité du pare-feu. Le collecteur une fois enregistré est entièrement contrôlé par le <i>serveur</i>. Cela signifie que vous avez seulement besoin dune connexion HTTP ou HTTPS de ce Collector au serveur.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Tableau de bord collecteur';

$GLOBALS["lang"]['Collector Name'] = 'Nom du collecteur';

$GLOBALS["lang"]['collector_uuid'] = 'Collecteur Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collecteur Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Les tâches du collecteur sont automatiquement configurées lorsque la fonction du collecteur est activée. Les tâches de collecte ne doivent pas être créées directement par les utilisateurs. Les tâches du collecteur peuvent faire éditer leur fréquence après la création. Si le serveur Open-Audit a des collecteurs qui lui rendent compte, une goutte deau supplémentaire est fournie. Vous pouvez sélectionner ceci pour spécifier quel Collector la tâche doit être exécutée. Seules les tâches Discovery sont prises en charge pour les Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Collecteurs';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Les collecteurs peuvent fonctionner dans lun des deux modes : Collector et StandAlone. En mode Collector, linstance Open-Audit est gérée par le serveur principal. En mode Stand Alone, linstance est gérée localement et transmet tous les périphériques trouvés au serveur principal.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Collecteurs pour la découverte à distance';

$GLOBALS["lang"]['Colombia'] = 'Colombie';

$GLOBALS["lang"]['color'] = 'Couleur';

$GLOBALS["lang"]['Color'] = 'Couleur';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Commenter la ligne ci-dessous (au sujet de la ligne 49). Placez juste un hasch # au début de la ligne.';

$GLOBALS["lang"]['comments'] = 'Commentaires';

$GLOBALS["lang"]['Comments'] = 'Commentaires';

$GLOBALS["lang"]['commercial'] = 'Commerce';

$GLOBALS["lang"]['Commercial'] = 'Commerce';

$GLOBALS["lang"]['Commercial Support'] = 'Soutien commercial';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Terminez ces étapes.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexité de lattaque (faible ou élevée).';

$GLOBALS["lang"]['Component Table'] = 'Tableau des composantes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Composants (tous les appareils)';

$GLOBALS["lang"]['Compute'] = 'Calculer';

$GLOBALS["lang"]['Condition'] = 'État';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Effectuer une évaluation des risques';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Mener des programmes de sensibilisation et de formation';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Réunions d  examen de la gestion';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Effectuer des vérifications de surveillance régulières (habituellement une fois par an)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Réalisé par un organisme accrédité en deux étapes';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Par défaut, actuellement ';

$GLOBALS["lang"]['config_file'] = 'Fichier de configuration';

$GLOBALS["lang"]['Config File'] = 'Fichier de configuration';

$GLOBALS["lang"]['config_manager_error_code'] = 'Code derreur du gestionnaire de configuration';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Code derreur du gestionnaire de configuration';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Contrôle daccès par rôle configurable (RBC)';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Détection et déclaration des changements de configuration';

$GLOBALS["lang"]['Configure'] = 'Configuration';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configurer le côté serveur de lagent pour effectuer des audits selon un calendrier';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Services de conseil, de mise en œuvre et autres';

$GLOBALS["lang"]['contact'] = 'Personne à contacter';

$GLOBALS["lang"]['Contact'] = 'Personne à contacter';

$GLOBALS["lang"]['contact_name'] = 'Nom du contact';

$GLOBALS["lang"]['Contact Name'] = 'Nom du contact';

$GLOBALS["lang"]['contained_in'] = 'Contenu';

$GLOBALS["lang"]['Contained In'] = 'Contenu';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contient un objet JSON détaille les widgets associés et leurs positions.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contient les champs qui déterminent si nous devons utiliser ssh, snmp et wmi options de découverte. Un objet JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Contexte et leadership';

$GLOBALS["lang"]['Context Engine ID'] = 'ID du moteur';

$GLOBALS["lang"]['Context Name'] = 'Nom du contexte';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Amélioration continue du SGSI';

$GLOBALS["lang"]['contractual_obligations'] = 'Obligations contractuelles';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obligations contractuelles';

$GLOBALS["lang"]['Cook Islands'] = 'Îles Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copier et coller un résultat de vérification';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiez et collez ce qui suit sur les forums, une autre instance dOpen-Audit ou nimporte où vous devez fournir cet élément.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Copier <i>ID de lapplication</i> et collez-le dans lOpen-Audit <i>Identification du client</i> champ pour la nouvelle méthode Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Copier <i>Identification du client</i> et le coller dans lOpen-Audit <i>Identification du client</i> sur le terrain.<br/>Sil ny a pas de secret, cliquez <i>Générer un nouveau secret</i>, puis copier la valeur et la coller dans lOpen-Audit <i>Client Secret</i> sur le terrain.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Copiez la valeur et collez-la dans le formulaire Open-Audit <i>Client Secret</i> sur le terrain.';

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

$GLOBALS["lang"]['Create File'] = 'Créer un fichier';

$GLOBALS["lang"]['Create Geocode'] = 'Créer un Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Créer un compte interne';

$GLOBALS["lang"]['Create Internal Count'] = 'Créer un compte interne';

$GLOBALS["lang"]['create_internal_from_external'] = 'Créer interne à partir de externe';

$GLOBALS["lang"]['Create Internal From External'] = 'Créer interne à partir de externe';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Créer des périphériques NMIS depuis Open-Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Créer Open-Audit Dispositifs ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Créer Open-Audit Dispositifs du NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Créer une référence pour le périphérique exemple';

$GLOBALS["lang"]['Create a Discovery'] = 'Créer une découverte';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Créer une déclaration dapplicabilité (SoA)';

$GLOBALS["lang"]['created_by'] = 'Créé par';

$GLOBALS["lang"]['Created By'] = 'Créé par';

$GLOBALS["lang"]['created_date'] = 'Date de création';

$GLOBALS["lang"]['Created Date'] = 'Date de création';

$GLOBALS["lang"]['Creating'] = 'Création';

$GLOBALS["lang"]['Creating Credentials'] = 'Création de pouvoirs';

$GLOBALS["lang"]['Creating Device'] = 'Création dun périphérique';

$GLOBALS["lang"]['Creating Widgets'] = 'Création de widgets';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Créer une découverte Entrée des options de numérisation';

$GLOBALS["lang"]['Creating a Query'] = 'Création dune requête';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Création dune déclaration SQL pour les groupes';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Création dune déclaration SQL pour les requêtes';

$GLOBALS["lang"]['Creating an Integration'] = 'Création dune intégration';

$GLOBALS["lang"]['creator'] = 'Créateur';

$GLOBALS["lang"]['Creator'] = 'Créateur';

$GLOBALS["lang"]['credential'] = 'Crédance';

$GLOBALS["lang"]['Credential'] = 'Crédance';

$GLOBALS["lang"]['Credentials'] = 'Pouvoirs';

$GLOBALS["lang"]['Credentials Client ID'] = 'Pouvoirs Identification du client';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Pouvoirs Abonnement Numéro didentification';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Pouvoirs Identification du locataire';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Les pouvoirs sont conservés dans le <i>pouvoirs</i> tableau de données. Linformation relative aux titres de compétence est cryptée dans le stockage. Lorsquun Discovery est exécuté, un appareil a ses identifiants spécifiques récupérés de la base de données, déchiffrés et testés. Si ceux-ci échouent, la liste didentifications est également récupérée, déchiffrée et ensuite testée contre le périphérique en commençant par des identifiants connus pour avoir fonctionné précédemment. Les identifiants spécifiques à lappareil sont stockés à un niveau individuel de lappareil <i>certificat</i> tableau (note - non) <i>s</i> dans le nom de la table). Les clés SSH sont testées avant le nom dutilisateur / mot de passe SSH. Lors du test SSH, les identifiants seront également marqués comme travaillant avec sudo ou étant root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Les lettres de créances peuvent avoir lun des différents types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows sont tous implémentés. CAVEAT - les clés ssh ne sont pas encore implémentées pour les serveurs Windows Open-Audit.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Champs personnalisés';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Ports TCP personnalisés';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Ports TCP personnalisés. Tous les ports spécifiques que nous liuke scanner en plus des Ports Top TCP. Comma séparé, pas despace.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personnalisé Ports';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Ports UDP personnalisés. Tous les ports spécifiques que nous liuke scanner en plus des ports UDP Top. Comma séparé, pas despace.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Options de numérisation personnalisables par découverte';

$GLOBALS["lang"]['Cve'] = 'Cév';

$GLOBALS["lang"]['Cyprus'] = 'Chypre';

$GLOBALS["lang"]['Czech'] = 'Tchèque';

$GLOBALS["lang"]['Czech Republic'] = 'République tchèque';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Compte DN (facultatif)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Mot de passe (facultatif)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nom dhôte DNS';

$GLOBALS["lang"]['Danish'] = 'Danois';

$GLOBALS["lang"]['dashboard_id'] = 'ID du tableau de bord';

$GLOBALS["lang"]['Dashboard ID'] = 'ID du tableau de bord';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widgets de tableau de bord';

$GLOBALS["lang"]['dashboards'] = 'Tableaux de bord';

$GLOBALS["lang"]['Dashboards'] = 'Tableaux de bord';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Les tableaux de bord et les Widgets permettent aux clients sous licence Enterprise de créer, lire, mettre à jour et supprimer ces deux collections pour sassurer que leur page daccueil est exactement ce quils ont besoin de voir. Non seulement cela, mais un utilisateur est en mesure de définir un tableau de bord donné comme leur propre page daccueil. Chacun na pas besoin dutiliser la même page daccueil (tableau de bord), ni les mêmes widgets sur ce tableau de bord. Les clients professionnels autorisés peuvent choisir entre deux tableaux de bord prédéfinis à définir comme leur propre page daccueil.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Les tableaux de bord fournissent <i>en un coup doeil</i> visibilité importante pour les changements survenant sur votre réseau ainsi que fournir des liens rapides aux types dappareils, aux fabricants et aux systèmes dexploitation et bien plus encore.';

$GLOBALS["lang"]['Dashboards use'] = 'Utilisation des tableaux de bord';

$GLOBALS["lang"]['Data'] = 'Données';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Exportation de données - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Conservation des données';

$GLOBALS["lang"]['Database'] = 'Base de données';

$GLOBALS["lang"]['db_action'] = 'Action dans la base de données';

$GLOBALS["lang"]['Database Action'] = 'Action dans la base de données';

$GLOBALS["lang"]['db_column'] = 'Colonne de base de données';

$GLOBALS["lang"]['Database Column'] = 'Colonne de base de données';

$GLOBALS["lang"]['Database Definition'] = 'Définition des bases de données';

$GLOBALS["lang"]['db_row'] = 'Ligne de base de données';

$GLOBALS["lang"]['Database Row'] = 'Ligne de base de données';

$GLOBALS["lang"]['Database Schema'] = 'Schéma de base de données';

$GLOBALS["lang"]['Database Server Discovery'] = 'Découverte du serveur de base de données';

$GLOBALS["lang"]['db_table'] = 'Tableau de base de données';

$GLOBALS["lang"]['Database Table'] = 'Tableau de base de données';

$GLOBALS["lang"]['Database Tables'] = 'Tableaux de base de données';

$GLOBALS["lang"]['dataset_title'] = 'Titre de lensemble de données';

$GLOBALS["lang"]['Dataset Title'] = 'Titre de lensemble de données';

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

$GLOBALS["lang"]['Debugging'] = 'Déboguement';

$GLOBALS["lang"]['Debugging a Script'] = 'Déboguer un script';

$GLOBALS["lang"]['December'] = 'Décembre';

$GLOBALS["lang"]['Decommission'] = 'Déclassement';

$GLOBALS["lang"]['Default'] = 'Par défaut';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Authentification par défaut Niveau Régler pour se connecter';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Impersonation par défaut Niveau Définir pour identifier';

$GLOBALS["lang"]['Default Items'] = 'Éléments par défaut';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Groupes par défaut';

$GLOBALS["lang"]['Default Roles Groups'] = 'Groupes de rôles par défaut';

$GLOBALS["lang"]['Default Value'] = 'Valeur par défaut';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Par défaut de 389. Normalement 636 utilisé pour Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Par défaut de <code>3</code> pour LDAP et Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Par défaut';

$GLOBALS["lang"]['Deferred'] = 'Reporté';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Définir la portée et les objectifs du projet';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Définir la portée du SIGS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Définir le contexte de lorganisation (questions internes/externes)';

$GLOBALS["lang"]['delay_minutes'] = 'Procès-verbal de retard';

$GLOBALS["lang"]['Delay Minutes'] = 'Procès-verbal de retard';

$GLOBALS["lang"]['Delete'] = 'Supprimer';

$GLOBALS["lang"]['Delete Example Devices'] = 'Supprimer des exemples de dispositifs';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Supprimer Externe De Interne';

$GLOBALS["lang"]['Delete External From Internal'] = 'Supprimer Externe De Interne';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Supprimer le NMIS Dispositifs si non dans Open-Audit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Supprimer une entrée {collection}.';

$GLOBALS["lang"]['Delete from Application'] = 'Supprimer de la demande';

$GLOBALS["lang"]['Delete from Cluster'] = 'Supprimer du groupe';

$GLOBALS["lang"]['Denmark'] = 'Danemark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Dérivés par audit ou définis manuellement par lutilisateur.';

$GLOBALS["lang"]['Derived by audit.'] = 'Dérivés par vérification.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Dérivés <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Dérivés <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Dérivé de la découverte Collector.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Dérivé du nom de lOS.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Dérivé de la découverte du nuage.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Dérivé des audits dappareils.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Dérivé du type de périphérique et du système dexploitation.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Détails de qui est habituellement contactable sur ce site.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Déterminer la fréquence à laquelle vous voulez exécuter la vérification de base de données et créer un rapport programmé';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Déterminer les options de traitement des risques';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Élaborer un plan de traitement des risques';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Élaborer des politiques, des procédures et des contrôles';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Élaborer la documentation requise du SGSI (politiques, procédures, etc.)';

$GLOBALS["lang"]['device'] = 'Appareil';

$GLOBALS["lang"]['Device'] = 'Appareil';

$GLOBALS["lang"]['Device Audits'] = 'Vérifications des appareils';

$GLOBALS["lang"]['Device Component Names'] = 'Noms des composants du périphérique';

$GLOBALS["lang"]['Device ID'] = 'ID du périphérique';

$GLOBALS["lang"]['device_id'] = 'ID du périphérique';

$GLOBALS["lang"]['device_id_a'] = 'ID du périphérique A';

$GLOBALS["lang"]['Device ID A'] = 'ID du périphérique A';

$GLOBALS["lang"]['device_id_b'] = 'ID du périphérique B';

$GLOBALS["lang"]['Device ID B'] = 'ID du périphérique B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Règles de correspondance des périphériques';

$GLOBALS["lang"]['Device Name'] = 'Nom du périphérique';

$GLOBALS["lang"]['Device Result'] = 'Résultat du périphérique';

$GLOBALS["lang"]['Device Results'] = 'Résultats de lappareil';

$GLOBALS["lang"]['Device Seed'] = 'Semence du périphérique';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Semence du périphérique Les découvertes sont une bonne option si vous savez que votre réseau se compose dune gamme de sous-réseaux, mais vous nêtes pas sûr de ce quils sont. Ensemencer la découverte avec un routeur local et regarder votre réseau se dérouler sous vos yeux.';

$GLOBALS["lang"]['Device Seed IP'] = 'IP de semences du périphérique';

$GLOBALS["lang"]['Device Status'] = 'État du périphérique';

$GLOBALS["lang"]['Device Types'] = 'Types de périphériques';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Audit des appareils, logiciels et matériels';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Le périphérique est dans le Subnet';

$GLOBALS["lang"]['Devices'] = 'Dispositifs';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositifs assignés à lemplacement';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositifs assignés à lemplacement';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositifs assignés à Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositifs assignés à Org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositifs audités';

$GLOBALS["lang"]['Devices Collection'] = 'Collecte des appareils';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositifs créés dans ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Appareils créés dans Open-Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Colonnes daffichage par défaut des périphériques';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Colonnes daffichage par défaut des périphériques';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositifs trouvés 7 derniers jours';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositifs trouvés aujourdhui';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositifs trouvés hier';

$GLOBALS["lang"]['Devices Missing Information'] = 'Dispositifs Information manquante';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositifs non vérifiés';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositifs non vus 30 jours';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Appareils non vus 7 jours';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositifs non vus 90 jours';

$GLOBALS["lang"]['Devices Older Than X'] = 'Dispositifs plus anciens que X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositifs récupérés via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositifs sélectionnés parmi ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositifs sélectionnés dans Open-Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositifs mis à jour dans ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositifs mis à jour dans Open-Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Les appareils sont référencés.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Les appareils ne sont pas étalonnés.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'On pourrait comparer les appareils.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Dispositifs de Open-Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositifs en état de fonctionnement';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositifs en état stoppé';

$GLOBALS["lang"]['Devices in this'] = 'Dispositifs dans ce';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Les dispositifs ne seront pas adaptés si leur statut est défini à <i>supprimé</i>. Tout autre statut permettra une correspondance.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Dispositifs avec garanties expirées';

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

$GLOBALS["lang"]['Discoveries'] = 'Découvertes';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Les découvertes sont au cœur de ce que fait Open-Audit. Comment le savez-vous ? <i>Quy a-t-il sur votre réseau?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Les découvertes sont des entrées qui vous permettent dexécuter une découverte sur un réseau en un seul clic, sans entrer les détails de ce réseau à chaque fois.';

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

$GLOBALS["lang"]['Discovery Queue Count'] = 'Nombre de files dattente découvertes';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Limite des files dattente à la découverte';

$GLOBALS["lang"]['discovery_run'] = 'Course à la découverte';

$GLOBALS["lang"]['Discovery Run'] = 'Course à la découverte';

$GLOBALS["lang"]['discovery_scan_options'] = 'Options de numérisation de découverte';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Options de numérisation de découverte';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Analyse de découverte Les options ne sont quune autre collection darticles. Les utilisateurs dentreprise peuvent créer, lire, mettre à jour et supprimer des entrées au besoin. Les utilisateurs professionnels peuvent lire toutes les entrées, mais ne pas créer de nouvelles entrées, mettre à jour les entrées existantes ou supprimer les entrées. Les utilisateurs communautaires nont pas dinterface graphique permettant daccéder à cette collection.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Types danalyse de découverte';

$GLOBALS["lang"]['Discovery Support'] = 'Soutien à la découverte';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Découverte a cessé de fonctionner';

$GLOBALS["lang"]['disk'] = 'Disque';

$GLOBALS["lang"]['Disk'] = 'Disque';

$GLOBALS["lang"]['display_version'] = 'Afficher la version';

$GLOBALS["lang"]['Display Version'] = 'Afficher la version';

$GLOBALS["lang"]['Display in Menu'] = 'Afficher dans le menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Affiche un formulaire Web standard pour soumission à POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Affiche un formulaire Web standard pour soumission à POST /{collection}/import.';

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

$GLOBALS["lang"]['dns_host_name'] = 'Nom de l hôte Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Nom de l hôte Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Nom d hôte';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Nom d hôte';

$GLOBALS["lang"]['dns_server'] = 'Serveur Dns';

$GLOBALS["lang"]['Dns Server'] = 'Serveur Dns';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Noubliez pas le wiki Open-Audit pour toute votre documentation.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Noubliez pas quil y a une montagne de documentation sur le wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne pas scanner ces ports TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne pas scanner ces ports UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne me montre plus jamais';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Avez-vous un parfait exemple de cette configuration ? Peut-être un appareil situé dans un environnement de laboratoire ou un poste de travail que vous utilisez pour cloner des VM de poste de travail.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Voulez-vous utiliser le transport sécurisé (LDAPS) ou LDAP non chiffré régulier.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Voulez-vous voir la barre latérale standard sur la gauche.';

$GLOBALS["lang"]['documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentation sur une collection particulière.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nest pas égal';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La licence sapplique aux enfants Orgs.';

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

$GLOBALS["lang"]['Download a File'] = 'Télécharger un fichier';

$GLOBALS["lang"]['Download a file from URL'] = 'Télécharger un fichier depuis lURL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Télécharger le script test_windows_client.vbs directement';

$GLOBALS["lang"]['Download your updated version from'] = 'Téléchargez votre version mise à jour depuis';

$GLOBALS["lang"]['driver'] = 'Conducteur';

$GLOBALS["lang"]['Driver'] = 'Conducteur';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dispositifs en double / Dispositifs manquants';

$GLOBALS["lang"]['duration'] = 'Durée';

$GLOBALS["lang"]['Duration'] = 'Durée';

$GLOBALS["lang"]['Dutch'] = 'Néerlandais';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Chaque IP est scanné avec les options de découverte configurées (voir Discovery Scan Options et Discovery - Community vs Professional vs Enterprise sur le wiki). En général, Nmap testera les ports 22 (ssh), 135 (wmi), 62078 (iPhone) et UDP 161 (snmp). Si 22, 135 ou 161 répondent, la liste des titres de compétence est récupérée et chaque titre de compétence est testé à son tour. Les premières références de travail sont utilisées pour dautres requêtes directement à partir de lappareil. Remarque - si un appareil a déjà été découvert et a des références de travail, ces références sont testées en premier. Ce nest quen cas déchec que les autres pouvoirs ont été tentés.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Chaque fois quun périphérique est découvert ou quun résultat daudit est traité, toutes les règles sont récupérées dans la base de données et exécutées en fonction des attributs du périphérique spécifique. Les règles sappliquent à un appareil à la fois - il ny a pas de facilité à dire <i>Exécuter les règles contre tous les appareils<i> ou <i>Exécuter les règles contre ces appareils<i>. Une règle individuelle testera un ou plusieurs attributs de lappareil et sils correspondent à la règle, le résultat sera appliqué. Plusieurs attributs peuvent être testés. Plusieurs attributs peuvent être définis. Pensez à cela comme un Si ceci, alors ce système pour Open-Audit.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Effectuez facilement une découverte sur un réseau en un seul clic, sans entrer les détails de ce réseau à chaque fois.';

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

<strong>Aucune</strong> - Lattaque réussie ne dépend pas des conditions de déploiement et dexécution du système vulnérable. Lattaquant peut sattendre à être en mesure datteindre la vulnérabilité et exécuter lexploitation dans tous les cas ou la plupart des cas de vulnérabilité.

<strong>Présent</strong> - Lattaque réussie dépend de la présence de conditions spécifiques de déploiement et dexécution du système vulnérable qui permettent lattaque. Il sagit notamment :

Une condition de course doit être gagnée pour exploiter avec succès la vulnérabilité. Le succès de lattaque est conditionné par des conditions dexécution qui ne sont pas sous le contrôle total de lagresseur. Lattaque peut devoir être lancée plusieurs fois contre une seule cible avant dêtre réussie.

Injection réseau. Lagresseur doit sinjecter dans le réseau logique entre la cible et la ressource demandée par la victime (p. ex. vulnérabilités nécessitant un attaquant sur le sentier).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Courriel';

$GLOBALS["lang"]['Email'] = 'Courriel';

$GLOBALS["lang"]['email_address'] = 'Adresse électronique';

$GLOBALS["lang"]['Email Address'] = 'Adresse électronique';

$GLOBALS["lang"]['Email Configuration'] = 'Configuration du courriel';

$GLOBALS["lang"]['Email to send test to'] = 'Courriel pour envoyer le test à';

$GLOBALS["lang"]['Enable'] = 'Activer';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Activer le COM distribué sur cet ordinateur - Option cochée';

$GLOBALS["lang"]['enabled'] = 'Activé';

$GLOBALS["lang"]['Enabled'] = 'Activé';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Activer la fonctionnalité sous Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Point darrivée';

$GLOBALS["lang"]['English'] = 'changements climatiques';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Améliorer la conformité réglementaire';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Lenrichissement est terminé. Le CVE a des métadonnées complètes et est considéré stable.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Veiller à ce que la documentation soit contrôlée et accessible';

$GLOBALS["lang"]['enterprise'] = 'Entreprise';

$GLOBALS["lang"]['Enterprise'] = 'Entreprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Réseau privé dentreprise';

$GLOBALS["lang"]['Enterprise private network'] = 'Réseau privé dentreprise';

$GLOBALS["lang"]['Entitlement Type'] = 'Type de droit';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Environnement';

$GLOBALS["lang"]['Environment'] = 'Environnement';

$GLOBALS["lang"]['Equal To'] = 'égale à';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'égale ou supérieure à';

$GLOBALS["lang"]['Equal To or Less Than'] = 'égale ou inférieure à';

$GLOBALS["lang"]['Equals'] = 'Égal';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guinée équatoriale';

$GLOBALS["lang"]['Eritrea'] = 'Érythrée';

$GLOBALS["lang"]['Error'] = 'Erreur';

$GLOBALS["lang"]['Error Code'] = 'Code derreur';

$GLOBALS["lang"]['Esperanto'] = 'Espéranto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Établir un plan de projet et un calendrier';

$GLOBALS["lang"]['Establish an information security policy'] = 'Établir une politique de sécurité de linformation';

$GLOBALS["lang"]['Established'] = 'Création';

$GLOBALS["lang"]['Estonia'] = 'Espagne';

$GLOBALS["lang"]['Estonian'] = 'Estonien';

$GLOBALS["lang"]['Ethernet MAC'] = 'MAC Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Éthiopie';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Évaluer le SGSI en interne';

$GLOBALS["lang"]['Every'] = 'Chaque';

$GLOBALS["lang"]['Every Day'] = 'Tous les jours';

$GLOBALS["lang"]['Example'] = 'Exemple';

$GLOBALS["lang"]['Example Devices'] = 'Exemples de dispositifs';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Exemple dorganigramme avec accès';

$GLOBALS["lang"]['Example text from'] = 'Exemple de texte';

$GLOBALS["lang"]['Examples'] = 'Exemples';

$GLOBALS["lang"]['Exceptions'] = 'Exceptions';

$GLOBALS["lang"]['exclude'] = 'Exclure';

$GLOBALS["lang"]['Exclude'] = 'Exclure';

$GLOBALS["lang"]['exclude_ip'] = 'Exclure la PI';

$GLOBALS["lang"]['Exclude IP'] = 'Exclure la PI';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclure les adresses IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'À lexclusion des adresses IP (particuliers IP - 192.168.1.20, gammes - 192.168.1.30-40 ou sous-réseaux - 192.168.1.100/30) énumérées dêtre numérisées. Comma séparé, pas despace.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclure les ports TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclure les ports Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclure les ports Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclure les ports UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclure les ports Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclure les ports Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Exclut tous les ports listés dêtre numérisés. Comma séparé, pas despace.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Exclure ces adresses IP dêtre numérisées Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Exclusion';

$GLOBALS["lang"]['exclusion_reasons'] = 'Motifs dexclusion';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Motifs dexclusion';

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

$GLOBALS["lang"]['expire_date'] = 'Date dexpiration';

$GLOBALS["lang"]['Expire Date'] = 'Date dexpiration';

$GLOBALS["lang"]['expire_minutes'] = 'Expire le procès-verbal';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire le procès-verbal';

$GLOBALS["lang"]['expires'] = 'Expire';

$GLOBALS["lang"]['Expires'] = 'Expire';

$GLOBALS["lang"]['expiry_date'] = 'Date dexpiration';

$GLOBALS["lang"]['Expiry Date'] = 'Date dexpiration';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploiter la maturité';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploiter la maturité';

$GLOBALS["lang"]['Export'] = 'Exportations';

$GLOBALS["lang"]['Export by Device'] = 'Exportation par périphérique';

$GLOBALS["lang"]['Export by Policy'] = 'Exportation par politique';

$GLOBALS["lang"]['Export data to'] = 'Données d  exportation';

$GLOBALS["lang"]['Exporting a Device'] = 'Exporter un périphérique';

$GLOBALS["lang"]['expose'] = 'Exposition';

$GLOBALS["lang"]['Expose'] = 'Exposition';

$GLOBALS["lang"]['External'] = 'Extérieur';

$GLOBALS["lang"]['External Field Name'] = 'Nom du champ externe';

$GLOBALS["lang"]['External Field Type'] = 'Type de champ externe';

$GLOBALS["lang"]['External Field Types'] = 'Types de champs externes';

$GLOBALS["lang"]['external_ident'] = 'Identification externe';

$GLOBALS["lang"]['External Ident'] = 'Identification externe';

$GLOBALS["lang"]['external_link'] = 'Lien externe';

$GLOBALS["lang"]['External Link'] = 'Lien externe';

$GLOBALS["lang"]['extra_columns'] = 'Colonnes supplémentaires';

$GLOBALS["lang"]['Extra Columns'] = 'Colonnes supplémentaires';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Rapports fondés sur des délais supplémentaires';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Lenregistrement supplémentaire et plus de verbes est généré pour le dépannage.';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Les attributs des champs sont';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Îles Fidji';

$GLOBALS["lang"]['File'] = 'Fichier';

$GLOBALS["lang"]['File Auditing'] = 'Vérification des dossiers';

$GLOBALS["lang"]['File Import'] = 'Importation de fichier';

$GLOBALS["lang"]['File Input'] = 'Entrée du fichier';

$GLOBALS["lang"]['file_name'] = 'Nom du fichier';

$GLOBALS["lang"]['File Name'] = 'Nom du fichier';

$GLOBALS["lang"]['File Share Discovery'] = 'Découverte de partage de fichiers';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Ports filtrés';

$GLOBALS["lang"]['Finland'] = 'Finlande';

$GLOBALS["lang"]['Finnish'] = 'Finnois';

$GLOBALS["lang"]['Firewall'] = 'Pare-feu';

$GLOBALS["lang"]['Firewall Packages'] = 'Paquets pare-feu';

$GLOBALS["lang"]['firewall_rule'] = 'Règle du pare-feu';

$GLOBALS["lang"]['Firewall Rule'] = 'Règle du pare-feu';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Révision du firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Révision du firmware';

$GLOBALS["lang"]['First'] = 'Première';

$GLOBALS["lang"]['First Name'] = 'Prénom';

$GLOBALS["lang"]['first_run'] = 'Première course';

$GLOBALS["lang"]['First Run'] = 'Première course';

$GLOBALS["lang"]['first_seen'] = 'Première vue';

$GLOBALS["lang"]['First Seen'] = 'Première vue';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Se concentrer dabord sur ce quest le besoin final : essayez-vous de référencer des logiciels, des utilisateurs ou des données Netstat ? Quelle est la ou les choses importantes à comparer et à rapporter?';

$GLOBALS["lang"]['FirstWave'] = 'Première attente';

$GLOBALS["lang"]['Fix'] = 'Correction';

$GLOBALS["lang"]['Fixed'] = 'Correction';

$GLOBALS["lang"]['Fixing the Issue'] = 'Régler le problème';

$GLOBALS["lang"]['Floor'] = 'Plancher';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Suivez lun des liens ci-dessous et découvrez comment utiliser Open-Audit pour découvrir <b>Quy a-t-il sur votre réseau?</b>';

$GLOBALS["lang"]['For'] = 'Pour';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Pour <i>Type</i> Assurez-vous de sélectionner Baseline, et pour Groupe, vous devez sélectionner un Groupe dappareils, sil y a lieu, qui représente le mieux les appareils pour appliquer la base de référence. Cela empêchera les entrées erronées.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Pour lexécution Debian/Ubuntu, y compris la configuration de dpkg pour se souvenir de votre surcharge, une mise à jour apt-get ne se brisera pas';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Pour SNMP Open-Audit peut utiliser v1, v2 et v3. Lappareil est interrogé, quil sagisse dun routeur, dun commutateur (dispositifs réseau réguliers) ou dun ordinateur (Linux et Windows exécutent souvent SNMP pour les outils de surveillance).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Pour une introduction sur cron, voir cette page Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Pour une découverte de semences, ne devrais-je découvrir que des IP dans lespace dadresse IP privé.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Pour une découverte de semences, ne devrais-je découvrir que des IP sur le sous-réseau choisi.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Pour une découverte de graines, devrais-je lancer le sous-réseau avant de lancer la découverte.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Pour lentrée avancée dune requête SQL brute. Selon les requêtes, vous devez inclure <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Pour chaque processus frayé, on trouve les données ci-dessous.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Par exemple, vous pouvez créer une base de référence à partir dun appareil utilisant Redhat 9 qui agit comme lun de vos serveurs Apache dans un cluster. Vous savez que ce serveur particulier est configuré comme vous le souhaitez, mais vous ne savez pas si dautres serveurs du cluster sont configurés exactement de la même façon. Les données de base vous permettent de déterminer cela.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Par exemple, vous pouvez créer une base de référence à partir dun appareil utilisant Redhat 9 qui agit comme lun de vos serveurs Apache dans un cluster. Vous savez que ce serveur particulier est configuré comme vous le souhaitez, mais vous ne savez pas si dautres serveurs du cluster sont configurés exactement de la même façon. Les données de base vous permettent de déterminer cela.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Pour plus de détails, consultez le wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Pour les licences qui ne sont pas perpétuelles, quand la licence expire.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Pour plus dinformations, consultez la base de connaissances Open-Audit.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Pour de plus amples renseignements, veuillez consulter le guide suivant qui comprend une vidéo. Utilisation';

$GLOBALS["lang"]['For more information, see'] = 'Pour plus dinformations, voir';

$GLOBALS["lang"]['form_factor'] = 'Facteur de forme';

$GLOBALS["lang"]['Form Factor'] = 'Facteur de forme';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'De cette page';

$GLOBALS["lang"]['full_name'] = 'Nom complet';

$GLOBALS["lang"]['Full Name'] = 'Nom complet';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Audit en nuage complet avec tous les détails dun audit Open-Audit régulier ET des détails tels que le type de machine et la taille.';

$GLOBALS["lang"]['function'] = 'Fonction';

$GLOBALS["lang"]['Function'] = 'Fonction';

$GLOBALS["lang"]['GROUP BY'] = 'GROUPE';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galicien';

$GLOBALS["lang"]['Gambia the'] = 'Gambie';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Analyse des lacunes (facultative)';

$GLOBALS["lang"]['gateway'] = 'Passerelle';

$GLOBALS["lang"]['Gateway'] = 'Passerelle';

$GLOBALS["lang"]['gateways'] = 'Portails';

$GLOBALS["lang"]['Gateways'] = 'Portails';

$GLOBALS["lang"]['Generated By'] = 'Produit par';

$GLOBALS["lang"]['geo'] = 'Géo';

$GLOBALS["lang"]['Geo'] = 'Géo';

$GLOBALS["lang"]['Geographical Maps'] = 'Cartes géographiques';

$GLOBALS["lang"]['Georgia'] = 'Géorgie';

$GLOBALS["lang"]['German'] = 'Allemand';

$GLOBALS["lang"]['Germany'] = 'Allemagne';

$GLOBALS["lang"]['Get Lat/Long'] = 'Obtenez Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Obtenez des nouvelles';

$GLOBALS["lang"]['Get Started'] = 'Commencez';

$GLOBALS["lang"]['Get a Free License'] = 'Obtenez une licence gratuite';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Familiarisez-vous avec la plateforme Open-Audit et explorez certaines de ses fonctionnalités.';

$GLOBALS["lang"]['Getting Started'] = 'Commencer';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Options mondiales de découverte';

$GLOBALS["lang"]['Global area network'] = 'Réseau mondial';

$GLOBALS["lang"]['Go'] = 'Allez';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Retournez sur votre serveur Open-Audit et créez une découverte avec ladresse IP des ordinateurs Windows cible en tant que sous-réseau (ceci permettra denregistrer à nouveau la découverte de tout le sous-réseau). Exécutez la découverte, en prenant note de tout problème. Pour toute question trouvée, prendre les mesures appropriées.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Allez sur le PC Windows cible (ou utilisez RDP) et connectez-vous en tant quutilisateur utilisé par votre jeu de certificats de découverte.';

$GLOBALS["lang"]['Go to menu'] = 'Aller au menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Allez au <i>Demandes</i> -> <i>Enregistrement des demandes</i> menu à lextrême gauche. Rechercher Open-Audit. Cliquez sur lentrée Open-Audit dans la liste (en supposant que vous avez nommé lapplication Open-Audit).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Allez au <i>Certificats et secrets</i> élément de menu sous <i>Gérer</i> dans le menu central.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Allez au <i>Signalisation unique</i> élément de menu et cliquez sur SAML pour <i>Sélectionnez une seule méthode de connexion</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Champs de calcul Google';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Pouvoirs';

$GLOBALS["lang"]['Google Maps API Key'] = 'API Google Maps Clé';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Super, alors tu peux aider ! Envoyer en premier Vaguez le texte affiché dans linterface graphique et ce qui doit être affiché. Nous inclurons que dans le fichier linguistique donc aller de lavant, la traduction est améliorée et vous navez pas besoin de vous soucier de la mettre à jour pour chaque version!';

$GLOBALS["lang"]['Greater Than'] = 'Plus que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Supérieur ou égal à';

$GLOBALS["lang"]['Greece'] = 'Grèce';

$GLOBALS["lang"]['Greek'] = 'Grec';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Les groupes sont utilisés comme des listes simples dappareils qui correspondent aux conditions requises. Si la demande est faite en utilisant JSON, ils retournent une liste de <i>dispositifs.id</i> Seulement. Si demandé en utilisant linterface Web, ils retournent la liste dattributs de colonne standard. Les groupes peuvent être utilisés pour les intégrations, les points de référence et dautres éléments.';

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

$GLOBALS["lang"]['Hardware'] = 'Matériel';

$GLOBALS["lang"]['hardware_revision'] = 'Révision matérielle';

$GLOBALS["lang"]['Hardware Revision'] = 'Révision matérielle';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Cette politique a-t-elle été appliquée dans cette organisation?';

$GLOBALS["lang"]['hash'] = 'Fausse';

$GLOBALS["lang"]['Hash'] = 'Fausse';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Demandez à lagent de toujours exécuter le dernier script daudit (si vous mettez à niveau Open-Audit et copiez manuellement les scripts vers les cibles, puis définissez cron - vous devrez mettre à jour ces scripts pour chaque mise à jour).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Demandez à votre utilisateur douvrir une commande <i>Exécuter comme administrateur</i>) . Collez ce qui suit dans linvite à télécharger lAgent.';

$GLOBALS["lang"]['Head'] = 'Tête';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island et McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hébreu';

$GLOBALS["lang"]['height'] = 'Hauteur';

$GLOBALS["lang"]['Height'] = 'Hauteur';

$GLOBALS["lang"]['Height in RU'] = 'Hauteur en RU';

$GLOBALS["lang"]['Help'] = 'Aide';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Aide et foire aux questions';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Aide à gérer et à atténuer les risques liés à la sécurité de linformation';

$GLOBALS["lang"]['Hide Audit Window'] = 'Cacher la fenêtre daudit';

$GLOBALS["lang"]['high'] = 'Élevé';

$GLOBALS["lang"]['High'] = 'Élevé';

$GLOBALS["lang"]['High Availability'] = 'Disponibilité élevée';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Saint-Siège (État de la ville du Vatican)';

$GLOBALS["lang"]['Home'] = 'Sommaire';

$GLOBALS["lang"]['home'] = 'Sommaire';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Réseau local';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Hôte';

$GLOBALS["lang"]['Host'] = 'Hôte';

$GLOBALS["lang"]['hostname'] = 'Nom de lhôte';

$GLOBALS["lang"]['Hostname'] = 'Nom de lhôte';

$GLOBALS["lang"]['hour'] = 'Heure';

$GLOBALS["lang"]['Hour'] = 'Heure';

$GLOBALS["lang"]['How Does It Work?'] = 'Comment ça marche?';

$GLOBALS["lang"]['How Does it Work?'] = 'Comment ça marche ?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Combien de temps ça prend ?';

$GLOBALS["lang"]['How and Why is'] = 'Comment et pourquoi';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Comment et pourquoi Open-Audit est-il plus sûr';

$GLOBALS["lang"]['How do they work?'] = 'Comment fonctionnent-ils ?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Comment un Device Seed Discovery trouve-t-il des IP connues?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Combien de temps la commande a-t-elle fallu pour lexécuter ?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Combien de temps Nmap devrait attendre une réponse, par appareil.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Combien de circuits alimentent ce rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Combien de politiques aboutissent à un échec.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Combien de politiques aboutissent à un laissez-passer.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Combien de prises de courant dans ce rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Combien dunités de rack en hauteur est ce rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'À quelle fréquence le collecteur doit-il demander une tâche au serveur?';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Comment sélectionner les appareils à intégrer (en utilisant un Attribut, une requête ou un groupe).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Comment la vulnérabilité est exploitée (p. ex., réseau, adjacent, local, physique).';

$GLOBALS["lang"]['How to compare'] = 'Comment comparer';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Explication de la vulnérabilité lisible par lhomme.';

$GLOBALS["lang"]['Hungarian'] = 'Hongrois';

$GLOBALS["lang"]['Hungary'] = 'Hongrie';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Jai lu lEULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Jespère que ce poste a allégé toutes les préoccupations que vous avez sur Open-Audit et la sécurité. Si vous avez des questions, nhésitez pas à nous contacter ici à FirstWave. Nous sommes toujours heureux de discuter de vos préoccupations et de vos besoins. Et peut-être que si votre question nest pas quelque chose que jai abordé ici, je peux lajouter ici pour les futurs utilisateurs';

$GLOBALS["lang"]['id'] = 'Numéro didentification';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'SI';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANT';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'Version IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adresse IP';

$GLOBALS["lang"]['IP Addresses'] = 'Adresses IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Dernière vue';

$GLOBALS["lang"]['IP Set By'] = 'Configuration IP par';

$GLOBALS["lang"]['ISMS'] = 'ISM';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 seulement.';

$GLOBALS["lang"]['Iceland'] = 'Espagne';

$GLOBALS["lang"]['icon'] = 'Icône';

$GLOBALS["lang"]['Icon'] = 'Icône';

$GLOBALS["lang"]['Icon and Text'] = 'Icône et texte';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icône seulement, texte seulement ou icône et texte.';

$GLOBALS["lang"]['id_internal'] = 'Id Interne';

$GLOBALS["lang"]['Id Internal'] = 'Id Interne';

$GLOBALS["lang"]['id_number'] = 'Numéro didentification';

$GLOBALS["lang"]['Id Number'] = 'Numéro didentification';

$GLOBALS["lang"]['identification'] = 'Identification';

$GLOBALS["lang"]['Identification'] = 'Identification';

$GLOBALS["lang"]['Identify information assets'] = 'Identifier les éléments dinformation';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifier les parties intéressées et leurs exigences';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identifier les principaux intervenants et attribuer les rôles';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identifiez le ou les appareils qui sont votre exemplaire, ou <i>image dorée</i> vous voulez comparer des dispositifs similaires contre.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identification et évaluation des risques pour la sécurité';

$GLOBALS["lang"]['If'] = 'Si';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Si un appareil est découvert individuellement <i>Découvrir le périphérique</i> lien sur la page des détails de lappareil, nous vérifions dabord si cet appareil a été découvert précédemment (par Discovery) et si oui, utilisez les options de découverte de cette analyse. Sil na pas été découvert précédemment, nous revenons à lélément de configuration discovery_default_scan_option les paramètres.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Si un nouvel Org est créé, un nom de groupe LDAP est automatiquement dérivé du nom. Par exemple, si un nouvel Org est créé et nommé Test, le groupe LDAP correspondant sera nommé open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Si un port répond avec filtré, si nous le considérons disponible.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Si un port répond avec ouvert, devrait-on le considérer disponible.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Si un périphérique distant nexiste pas dans les périphériques sélectionnés Open-Audit, si nous le supprimons du système externe.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Si un périphérique Open-Audit a été modifié, si nous mettons à jour le système externe.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Si un périphérique Open-Audit nest pas sur le système externe, devrait-on le créer.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Si un agent déclare que son IP principal se trouve dans ce sous-réseau, effectuez les actions.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Si lun de ces ports (comma séparé, pas despace) est détecté, supposons que SSH fonctionne sur eux et les utilise pour laudit. Pas besoin dajouter ce port aux ports TCP personnalisés - il sera ajouté automatiquement.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Si aucun opérateur nest spécifié, la valeur par défaut est =. Les propriétés doivent être entièrement qualifiées - par exemple, devices.hostname (pas seulement hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Si aucune valeur nest présente, fournir cette valeur. EG: pour system.nmis_group / configuration. groupe que nous utilisons';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Si défini, contient un tableau JSON de colonnes de périphérique spécifiques que lutilisateur a choisi de voir, autre que la configuration par défaut.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Si la famille OS (tel que rapporté par lappareil) contient cet élément, passez.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Si le serveur Open-Audit a des collecteurs qui lui rendent compte, une goutte deau supplémentaire est fournie. Vous pouvez sélectionner ceci pour spécifier quel Collector la tâche doit être exécutée. Seules les tâches Discovery sont prises en charge pour les Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Si la famille dagents OS (cas insensible) contient cette chaîne, effectuez les actions.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Si le binaire nest trouvé dans aucun de ces emplacements, un message davertissement sera affiché dans linstallateur.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Si les conditions suivantes sont remplies:<br/><ul><li>un rôle a un ad_group assigné</li><li>un Org a un _groupe ad assigné</li><li>une DLAP Le serveur a use_roles défini à y</li><li>un utilisateur existe dans LDAP (quil soit Active Directory ou OpenLDAP) et est dans les ad_groups assignés</li></ul>Cet utilisateur peut se connecter à Open-Audit sans avoir besoin de créer un compte dans Open-Audit. Open-Audit interrogera le LDAP en question et si lutilisateur est dans les groupes requis mais pas dans Open-Audit, ses attributs utilisateur (nom, nom complet, email, rôles, orgs, etc) au sein dOpen-Audit seront automatiquement remplis et ils seront connectés.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Si le champ local est vrai (bool) ou y (string) ou Y (string) ou 1 (entier) alors définissez les données externes à 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Si le champ local est vrai (bool) ou y (string) ou Y (string) ou 1 (entier) alors définissez les données externes à y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Si lIP primaire (tel que rapporté par lappareil) se trouve dans ce sous-réseau, passez.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Si le compte utilisateur nexiste pas dans Open-Audit et <code>use_authorisation</code> est défini, lutilisateur sera créé. Si elle existe, des détails tels que le courriel, le nom complet, etc. seront remplis.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Si lutilisateur na pas didentifiants valides ou nest pas dans au moins un rôle et un groupe Open-Audit <code>use_authorisation</code>) , Open-Audit va revenir à lutilisation des détails de lutilisateur local Open-Audit et tenter lauthentification et lautorisation là. À défaut, lutilisateur se verra refuser laccès.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Si lutilisateur se connecte à Open-Audit na pas laccès à la recherche LDAP, vous pouvez utiliser un autre compte qui a cet accès.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Si lutilisateur se connecte à Open-Audit na pas laccès à la recherche OpenLDAP, vous pouvez utiliser un autre compte qui a cet accès. Utilisez dn_account et dn_password pour configurer cela.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Si la valeur nest pas définie, lhorodatage courant sera utilisé.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Si la valeur est définie, cette valeur timestamp sera utilisée.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Si ce changement ne fonctionne pas pour vous, tout nest pas perdu. Nous avons ajouté un élément de configuration (défini à n par défaut, donc il nutilisera pas cette nouvelle option hors de la boîte) appelé discovery_use_org_id_match. Si vous le changez en y, lOrgID attribué à lappareil par la découverte sera utilisé dans les règles de correspondance pertinentes.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Si ces nombreuses minutes (ou plus) ont passé depuis que le serveur a vu le dernier périphérique, passez.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Si ce nombre de minutes ou plus ont passé depuis que le périphérique a contacté le serveur, effectuez les actions.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Si cela se produit alors le problème que vous voyez est lié au contrôle de table utilisé sur la page Web. Il ne stocke en mémoire que létat des cases à cocher pour la page en cours. Si vous effectuez des sélections, la page de retour/retour de ces sélections sera perdue. Vous pouvez, cependant, accomplir ce que vous voulez en augmentant le nombre de périphériques affichés sur chaque page. Dans le coin en haut à gauche est un menu déroulant marqué "Enregistrements" par page; utilisez ceci pour augmenter le nombre dentrées affichées jusquà ce que vous voyez tout ce que vous voulez sélectionner pour Édition en vrac.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Si nous détectons le logiciel de gestion de san, devrions-nous lancer une auto-découverte avant la requête.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Si vous ajoutez un Type demplacement, ajoutez ces icônes à';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Si vous ajoutez un type de périphérique, pour afficher licône associée, vous devrez copier manuellement le fichier formaté .svg dans le répertoire';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Si vous êtes un client de FirstWave pris en charge, un couple darticles vous aidera plus facilement. Ouvrez un ticket de support avec FirstWave et attachez le fichier journal. Inclure également la sortie à partir du bouton Support en haut à droite de la';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Si vous êtes un client pris en charge et ouvrez un ticket dassistance avec FirstWave, veuillez joindre ces fichiers.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Si vous avez des problèmes avec les clés API Google Maps ou si votre entreprise na pas accès à la création des clés API Google Maps, veuillez contacter léquipe de support FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Si vous êtes sous Windows ou si votre serveur NMIS est distant, vous devrez fournir lURL, le nom dutilisateur et le mot de passe pour accéder à ce serveur.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Si vous êtes sur une connexion haut débit ou éthernet décente, je recommanderais toujours dutiliser -T4 (Agressive). Certaines personnes aiment -T5 (Insane) bien quil soit trop agressif à mon goût. Les gens précisent parfois -T2 (Polite) parce quils pensent quil est moins probable de planter des hôtes ou parce quils se considèrent comme polis en général. Ils ne se rendent souvent pas compte à quel point lent -T2 est vraiment. Leur balayage peut prendre dix fois plus de temps quun balayage par défaut. Les pannes de machines et les problèmes de bande passante sont rares avec les options de timing par défaut -T3 (Normal) et je recommande donc normalement que pour les scanners prudents. La détection domission de version est beaucoup plus efficace que de jouer avec des valeurs de temps pour réduire ces problèmes.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Si vous utilisez un système RedHat ou Centos et que vous avez mis à jour Nmap, veuillez réinitialiser le SUID sur le binaire par';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Si vous utilisez un serveur Open-Audit sur Linux, cela ne vous affecte pas.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Si vous utilisez Open-Audit sur Windows ou si votre serveur NMIS nest pas sur votre serveur Open-Audit (dans le cas de certaines installations Linux), vous devrez fournir des identifiants daccès et une URL au NMIS distant - mais cest tout ! Oui - Les intégrations entre NMIS et Open-Audit fonctionnent même avec Open-Audit depuis Windows !';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Si vous choisissez un Collector, il sera programmé pour exécuter sur la prochaine limite de 5 minutes.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Si vous définissez normalement devices_assigned_to_org et que lélément de configuration est activé, lOrgID sera utilisé pour affiner la correspondance.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Si vous ne définissez pas normalement devices_assigned_to_org, cela naura aucun effet. Nous vérifions uniquement en utilisant lOrgID sil a été configuré dans la découverte (ou manuellement dans un script daudit) et activé dans la configuration.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Si vous activez lélément de configuration, utilisez la découverte pour assigner un Org puis changez ensuite lOrgID dun périphérique après la découverte, alors vous aurez probablement un nouvel appareil créé la prochaine fois que la découverte sexécutera. Dans ce cas, vous devriez probablement juste désinstaller devices_assigned_to_org avant de lancer des découvertes ultérieures. Cest parce que (dans ce cas) vous avez dit Open-Audit <i>ces dispositifs de cette découverte appartiennent à Org X<i>, mais a ensuite changé lOrg de lappareil. Vous avez changé les informations des appareils stockés. Dans ce cas - il ny a plus de dispositif appartenant à Org X, donc nous en créons un nouveau.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Si vous avez le logiciel Anti-Virus en cours dexécution, permettre aux services dOpmantek (omkd), Apache (apache2.2) et MySQL (mysql) de démarrer et dexécuter automatiquement est essentiel. Ces services sont utilisés par Open-Audit. Tu ne devrais avoir besoin de faire ça quune seule fois. Si votre programme Anti-Virus continue de vous inciter à parler dOpen-Audit, veuillez poster sur les forums ou envoyer un e-mail pour soutenir avec le nom et la version de votre logiciel Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Si vous avez des références de travail, vous pouvez vous attendre à la quantité complète dinformation possible.<br/><br/>De toute évidence, la meilleure façon dutiliser Open-Audit est davoir des identifiants de travail pour les appareils découverts (quils soient WMI, SSH ou SNMP).<br/><br/>Nous avons également une page sur laudit sans références.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Si vous incluez le champ \"id\" <strong>et</strong> définir avec un nombre, cet élément sera mis à jour plutôt que créé.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Si vous devez configurer laccès à Active Directory, vous pouvez généralement utiliser lexemple de <code>cn=Users,dc=your,dc=domain,dc=com</code> pour votre <code>base_dn</code>. Il nest pas nécessaire de définir <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Si vous devez configurer laccès OpenLDAP pour vos utilisateurs et un accès DN donné est normalement <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> alors tu devrais mettre <code>base_dn</code> à <code>dc=your,dc=domain,dc=com</code> et <code>user_dn</code> à <code>uid=@username@@domain,cn=People</code>. Les mots spéciaux <code>@username</code> et <code>@domain</code> sera remplacé par les informations de connexion fournies par votre utilisateur sur la page de connexion.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Si vous lancez une découverte sur un sous-réseau sur lequel le serveur (ou le collecteur) est directement installé, vous pouvez vous attendre à ce qui suit pour répondre aux appareils';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Si vous lancez une découverte sur un sous-réseau sur lequel votre serveur (ou collecteur) nest pas installé directement, vous pouvez vous attendre à ce qui suit pour répondre aux appareils';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Si vous sélectionnez un type de liste, un champ supplémentaire apparaîtra appelé Valeurs. Vous devriez mettre une liste séparée de virgules de valeurs sélectionnables ici. Celles-ci saffichent dans une boîte déroulante chaque fois que le champ est édité.';

$GLOBALS["lang"]['If you set the values for'] = 'Si vous définissez les valeurs pour';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Si vous voulez forcer vos Agents à utiliser une configuration particulière, vous pouvez fournir lID de lentrée des Agents à utiliser, comme ci-dessous (remplacer $id avec le numéro de lentrée Agents). Lorsque cet Agent est installé, il senregistrera avec le sevrer et <strong>seulement</strong> vérifier quune personne Attributs dentrée dagent (tests et actions). Cela peut être utile si vous êtes un MSP - créez une entrée Agents pour un client particulier et que leurs appareils utilisent tous cette entrée, qui les assigne à un Org et Location.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Si vous souhaitez creuser et personnaliser lintégration, cliquez sur le bouton Avancé (et essayez de ne pas être dépassé !).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Si vous souhaitez lancer une Discovery sur un appareil fourni de lextérieur, sélectionnez loption et lorsque lintégration est créée, alors s la Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Si vous souhaitez utiliser le script en dehors de Discovery, nous avons créé un autre paramètre appelé <i>scripts</i>. Voir la documentation';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Si votre utilisateur na pas <i>Exécuter comme administrateur</i> droits, ils peuvent toujours télécharger lagent (première commande ci-dessus) et lexécuter pour soumettre un audit comme ci-dessous. Ce sera une vérification ponctuelle sans que lagent soit installé ou programmé.';

$GLOBALS["lang"]['ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignorer SSL non valide';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Mettre en œuvre certains contrôles et procédures';

$GLOBALS["lang"]['Implementation'] = 'Mise en œuvre';

$GLOBALS["lang"]['implementation_notes'] = 'Notes de mise en œuvre';

$GLOBALS["lang"]['Implementation Notes'] = 'Notes de mise en œuvre';

$GLOBALS["lang"]['Import'] = 'Importation';

$GLOBALS["lang"]['Import Example Data'] = 'Importer des données dexemple';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importer plusieurs {collection} en utilisant un CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Possibilités damélioration';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Possibilités damélioration';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Amélioration de la continuité des opérations et de la résilience';

$GLOBALS["lang"]['In'] = 'Dans';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Dans un deuxième onglet ou fenêtre, allez sur votre console OKTA et cliquez <i>Créer lintégration de lapplication</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Dans un deuxième onglet ou une fenêtre sidentifier à votre';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'À mon avis, la meilleure façon de trouver et de vérifier chaque élément de votre réseau est une découverte de semences pour chaque sous-réseau, limitée à ce sous-réseau (en utilisant des références). Seed Discoveries utilise des tables dadresse MAC, routeur et ordinateur pour ne pas manquer un seul appareil. Sil est connecté au réseau et utilise TCP/IP, un commutateur/routeur/ordinateur doit savoir quil est là - cest juste comment TCP/IP fonctionne. Combinez cela avec les ports TCP et/ou UDP personnalisés et vous devriez alors être en mesure de déterminer le type de périphérique ainsi. Mais cest juste ma préférence personnelle';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Pour quOpen-Audit puisse appliquer les permissions des utilisateurs sur les articles, nous mandatons lutilisateur de <code>WHERE @filter</code>. Si vous nutilisez pas ce format, la requêteCreateForm lancera un avertissement. Seuls les utilisateurs avec le rôle Admin sont autorisés à créer des requêtes qui manquent de cet attribut et même alors, seulement après lélément de configuration pour <i>requêtes avancées</i> a été activé.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Pour activer Google Maps, vous aurez besoin dune clé API Google suivre ce lien et vous connecter avec votre Compte Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Pour utiliser lAPI Azure Rest, vous devrez créer une application Azure Active Directory qui est utilisée pour lauthentification.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Pour utiliser cette fonctionnalité, elle doit être activée dans la configuration - cliquez';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Dans la liste (comma séperated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Dans le cas <code>in</code> et <code>notin</code>, vous devez joindre les valeurs entre crochets et les séparer en utilisant une virgule (juste une virgule, pas une virgule, puis un espace).<br/><br/>Avec ces opérateurs, vous pouvez filtrer assez complètement.<br/><br/>Lorsque vous ajoutez des données et des filtres sur plusieurs colonnes, ces colonnes sont combinées en utilisant <strong>PAYS</strong>. Vous ne pouvez pas filtrer en utilisant un <strong>OU</strong> État. Avec <code>notin</code>, vous devriez être en mesure de faire fonctionner la plupart des recherches. Et pour ceux qui nécessitent vraiment des sélections non soutenues et complexes, vous pouvez toujours écrire une requête réelle.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Dans le cas où nous stockons plusieurs champs (habituellement au format JSON) à lintérieur dun champ BIGTEXT MySQL (par exemple: identifiants. identifiants - la colonne des identifiants dans le tableau des identifiants), vous devez utiliser le format';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Dans linvite de commande shell, naviguez vers le répertoire de téléchargement (probablement <code>cd Downloads</code>) .';

$GLOBALS["lang"]['Inactive'] = 'Inactif';

$GLOBALS["lang"]['Incomplete'] = 'Incomplète';

$GLOBALS["lang"]['Index'] = 'Sommaire';

$GLOBALS["lang"]['India'] = 'Inde';

$GLOBALS["lang"]['Indonesia'] = 'Indonésie';

$GLOBALS["lang"]['Indonesian'] = 'Indonésien';

$GLOBALS["lang"]['Info'] = 'Informations';

$GLOBALS["lang"]['Information only.'] = 'Information seulement.';

$GLOBALS["lang"]['Informational'] = 'Informations';

$GLOBALS["lang"]['initial_size'] = 'Taille initiale';

$GLOBALS["lang"]['Initial Size'] = 'Taille initiale';

$GLOBALS["lang"]['Initial login credentials are'] = 'Les identifiants de connexion initiaux sont';

$GLOBALS["lang"]['Initiation'] = 'Ouverture';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Entrée';

$GLOBALS["lang"]['Input Type'] = 'Type dentrée';

$GLOBALS["lang"]['inputs'] = 'Entrées';

$GLOBALS["lang"]['Inputs'] = 'Entrées';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Insérer une nouvelle entrée {collection}.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insérez des données dexemple et découvrez tout ce que Open-Audit peut vous dire.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Insérez votre Licence acquise Clé';

$GLOBALS["lang"]['install'] = 'Installer';

$GLOBALS["lang"]['Install'] = 'Installer';

$GLOBALS["lang"]['install_date'] = 'Date dinstallation';

$GLOBALS["lang"]['Install Date'] = 'Date dinstallation';

$GLOBALS["lang"]['install_directory'] = 'Installer le répertoire';

$GLOBALS["lang"]['Install Directory'] = 'Installer le répertoire';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installez OpenScap si nécessaire';

$GLOBALS["lang"]['install_source'] = 'Installer la source';

$GLOBALS["lang"]['Install Source'] = 'Installer la source';

$GLOBALS["lang"]['Install Support'] = 'Installer le support';

$GLOBALS["lang"]['installed_by'] = 'Installé par';

$GLOBALS["lang"]['Installed By'] = 'Installé par';

$GLOBALS["lang"]['installed_on'] = 'Installé';

$GLOBALS["lang"]['Installed On'] = 'Installé';

$GLOBALS["lang"]['Installing'] = 'Installation';

$GLOBALS["lang"]['Installing on Linux'] = 'Installation sur Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installation sur MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installation sur Windows';

$GLOBALS["lang"]['instance'] = 'Décision';

$GLOBALS["lang"]['Instance'] = 'Décision';

$GLOBALS["lang"]['instance_ident'] = 'Numéro de linstance';

$GLOBALS["lang"]['Instance Ident'] = 'Numéro de linstance';

$GLOBALS["lang"]['instance_options'] = 'Options dinstance';

$GLOBALS["lang"]['Instance Options'] = 'Options dinstance';

$GLOBALS["lang"]['instance_provider'] = 'Fournisseur dinstance';

$GLOBALS["lang"]['Instance Provider'] = 'Fournisseur dinstance';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Réserve dinstance Identité';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Réserve dinstance Identité';

$GLOBALS["lang"]['instance_state'] = 'État de linstance';

$GLOBALS["lang"]['Instance State'] = 'État de linstance';

$GLOBALS["lang"]['instance_tags'] = 'Étiquettes dinstance';

$GLOBALS["lang"]['Instance Tags'] = 'Étiquettes dinstance';

$GLOBALS["lang"]['instance_type'] = 'Type dinstance';

$GLOBALS["lang"]['Instance Type'] = 'Type dinstance';

$GLOBALS["lang"]['Integer'] = 'Entier';

$GLOBALS["lang"]['Integration'] = 'Intégration';

$GLOBALS["lang"]['integrations'] = 'Intégrations';

$GLOBALS["lang"]['Integrations'] = 'Intégrations';

$GLOBALS["lang"]['integrations_id'] = 'ID des intégrations';

$GLOBALS["lang"]['Integrations ID'] = 'ID des intégrations';

$GLOBALS["lang"]['integrations_log'] = 'Registre des intégrations';

$GLOBALS["lang"]['Integrations Log'] = 'Registre des intégrations';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Les intégrations peuvent être programmées comme souhaité. Ceci est laissé à lutilisateur.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Les intégrations peuvent être programmées selon Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Tableaux de bord interactifs';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Les tableaux de bord interactifs offrent une visibilité instantanée sur létat de linventaire du réseau, ce qui permet aux équipes informatiques de repérer en un coup dœil les appareils nouvellement découverts et leur comportement inhabituel.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'ID dinterface';

$GLOBALS["lang"]['Interface ID'] = 'ID dinterface';

$GLOBALS["lang"]['interface_type'] = 'Type dinterface';

$GLOBALS["lang"]['Interface Type'] = 'Type dinterface';

$GLOBALS["lang"]['Internal'] = 'Interne';

$GLOBALS["lang"]['Internal Audit'] = 'Vérification interne';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Vérification et examen internes';

$GLOBALS["lang"]['Internal Field Name'] = 'Nom du champ interne';

$GLOBALS["lang"]['Internal ID'] = 'Identification interne';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Tableau interne JSON des jetons daccès valides pour cet utilisateur.';

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

$GLOBALS["lang"]['Irish'] = 'Irlandais';

$GLOBALS["lang"]['Is FRU'] = 'Est FRU';

$GLOBALS["lang"]['is_fru'] = 'Est Fru';

$GLOBALS["lang"]['Is Fru'] = 'Est Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Le serveur NMIS est-il local (sur ce serveur Open-Audit) ou distant ?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ce compte est-il actif ? Si défini à <code>n</code>, lutilisateur ne peut pas se connecter.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Cette requête est limitée aux clients autorisés.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Cette tâche est-elle activée (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Île de Man';

$GLOBALS["lang"]['Israel'] = 'Israël';

$GLOBALS["lang"]['Issue'] = 'Numéro';

$GLOBALS["lang"]['issuer'] = 'Émetteur';

$GLOBALS["lang"]['Issuer'] = 'Émetteur';

$GLOBALS["lang"]['issuer_name'] = 'Nom de lémetteur';

$GLOBALS["lang"]['Issuer Name'] = 'Nom de lémetteur';

$GLOBALS["lang"]['Issues'] = 'Problèmes';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Cest <i>Juste fonctionne</i> avec NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Il est disponible au menu -> Aide ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Il est important de noter que lorsque Open-Audit détermine une correspondance à nimporte quelle propriété <i>y</i> doit correspondre exactement (et ne pas être vide) pour que Open-Audit détermine que lappareil découvert correspond à un appareil déjà dans la base de données. Si aucune des propriétés marquées <i>y</i> match, puis une nouvelle entrée de périphérique sera créée, ce qui pourrait entraîner des entrées de périphérique dupliquées. Dans les situations où les propriétés sont dupliquées, par exemple, un dbus_id est copié lors dun clone VM, alors un périphérique existant peut être incorrectement écrasé/mise à jour plutôt quune nouvelle entrée en cours de création entraînant labsence de périphériques.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Il nest pas rare quun espace dadresse se chevauche dans une organisation donnée. Pas idéal, mais pas rare.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Il est très courant pour les fabricants de cartes mères de deuxième niveau de ne pas définir ceci, de le mettre à tous <i>0</i>S ou même tous <i>F</i>Par.';

$GLOBALS["lang"]['Italian'] = 'Italien';

$GLOBALS["lang"]['Italy'] = 'Italie';

$GLOBALS["lang"]['Items not in Baseline'] = 'Points non inscrits au niveau de référence';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON à importer';

$GLOBALS["lang"]['Jamaica'] = 'Jamaïque';

$GLOBALS["lang"]['January'] = 'Janvier';

$GLOBALS["lang"]['Japan'] = 'Japon';

$GLOBALS["lang"]['Japanese'] = 'Japonais';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanie';

$GLOBALS["lang"]['July'] = 'Juillet';

$GLOBALS["lang"]['June'] = 'Juin';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Version du noyau';

$GLOBALS["lang"]['Kernel Version'] = 'Version du noyau';

$GLOBALS["lang"]['Key'] = 'Clé';

$GLOBALS["lang"]['Key Components'] = 'Composantes clés';

$GLOBALS["lang"]['Key Password (optional)'] = 'Mot de passe clé (facultatif)';

$GLOBALS["lang"]['keys'] = 'Clés';

$GLOBALS["lang"]['Keys'] = 'Clés';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corée';

$GLOBALS["lang"]['Korean'] = 'Coréen';

$GLOBALS["lang"]['Kuwait'] = 'Koweït';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirghizistan';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'République kirghize';

$GLOBALS["lang"]['LDAP Group'] = 'Groupe LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP a été recherché pour cet utilisateur et son compte a été trouvé.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP a été recherché pour cet utilisateur et son compte na pas été trouvé. Vérifiez les journaux du serveur LDAP. Les références utilisateur ont fonctionné, mais lutilisateur na pas été trouvé. Vérifiez également que vous avez spécifié le bon attribut Base DN lorsque vous avez créé le serveur LDAP dans Open-Audit.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Le dernier est WMI. Pour Windows comme pour Linux, un utilisateur ayant accès au niveau Administrateur est préféré (voir Configuration Target Client sur le wiki).';

$GLOBALS["lang"]['lastModified'] = 'Dernière modification';

$GLOBALS["lang"]['LastModified'] = 'Dernière modification';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Lettonie';

$GLOBALS["lang"]['Latvian'] = 'Lettonie';

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

$GLOBALS["lang"]['lease_expiry_date'] = 'Date dexpiration du bail';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Date dexpiration du bail';

$GLOBALS["lang"]['Lebanon'] = 'Liban';

$GLOBALS["lang"]['legal_requirements'] = 'Exigences juridiques';

$GLOBALS["lang"]['Legal Requirements'] = 'Exigences juridiques';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Moins de';

$GLOBALS["lang"]['Less Than or Equals'] = 'inférieur ou égal à';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Permet de régler la session de débogage. Copier le fichier & #160;:';

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau de privilèges requis pour exploiter (Aucun, Faible, Élevé).';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliothèques (cest-à-dire code quun autre programme pourrait inclure). Ce sont généralement des éléments comme les extensions Wordpress, les extensions drupal, les bibliothèques node.js, les bibliothèques Android / iPhone / Windows, les bibliothèques python, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya arabe libyenne';

$GLOBALS["lang"]['License'] = 'Licence';

$GLOBALS["lang"]['License Key'] = 'Clé de licence';

$GLOBALS["lang"]['License Required'] = 'Licence requise';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Les utilisateurs autorisés sont libres dajouter ou de modifier les règles comme bon vous semble. Si vous avez un périphérique avec un OID SNMP qui ne correspond pas à un modèle déjà dans le fichier - maintenant vous pouvez lajouter facilement. Plus besoin de nous attendre pour fournir un patch et lajouter à la base de code pour vous.<br/><br/>Lorsque vous créez une entrée Règles, vous devrez fournir un nom et une liste dentrées et de sorties. Les entrées et sorties sont stockées sous forme de tableaux JSON dans la base de données.<br/><br/>Les entrées ont une table et un attribut, un opérateur et une valeur. Lors de lexécution de la condition, il fonctionne ainsi: Si $table . $attribue $operator $value alors appliquez les sorties.<br/><br/>Une règle dexemple pour correspondre à un OID SNMP et définir le modèle est ci-dessous.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licences';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Comme';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Comme la plupart des autres attributs, les champs additionnels peuvent être modifiés en bloc. Utilisez la fonction Édition en vrac comme vous le feriez normalement et vous verrez que les champs additionnels sont disponibles pour lentrée.';

$GLOBALS["lang"]['Like versus Equals'] = 'Comme par rapport aux égaux';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Les graphiques en ligne doivent renvoyer la date ou my_date, description ou my_description et compter.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Les paquets Linux';

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Lister tous les ports, protocoles et programmes NMAP pour chaque appareil';

$GLOBALS["lang"]['List Devices'] = 'Liste des dispositifs';

$GLOBALS["lang"]['List Discoveries'] = 'Liste des découvertes';

$GLOBALS["lang"]['list_table_format'] = 'Liste du format du tableau';

$GLOBALS["lang"]['List Table Format'] = 'Liste du format du tableau';

$GLOBALS["lang"]['List Tables'] = 'Liste des tableaux';

$GLOBALS["lang"]['Lithuania'] = 'Lituanie';

$GLOBALS["lang"]['Lithuanian'] = 'Lituanien';

$GLOBALS["lang"]['Load Balancing'] = 'Équilibre de charge';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Réseau local';

$GLOBALS["lang"]['local_port'] = 'Port local';

$GLOBALS["lang"]['Local Port'] = 'Port local';

$GLOBALS["lang"]['Local area network'] = 'Réseau local';

$GLOBALS["lang"]['Localhost'] = 'Hébergement local';

$GLOBALS["lang"]['Localisation'] = 'Localisation';

$GLOBALS["lang"]['Location'] = 'Lieu';

$GLOBALS["lang"]['Location A'] = 'Lieu A';

$GLOBALS["lang"]['Location B'] = 'Lieu B';

$GLOBALS["lang"]['location_id'] = 'Identification de lemplacement';

$GLOBALS["lang"]['Location ID'] = 'Identification de lemplacement';

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

$GLOBALS["lang"]['Location Name'] = 'Nom du lieu';

$GLOBALS["lang"]['location_rack'] = 'Emplacement Rack';

$GLOBALS["lang"]['Location Rack'] = 'Emplacement Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Emplacement Position du rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Emplacement Position du rack';

$GLOBALS["lang"]['location_rack_size'] = 'Taille du rack demplacement';

$GLOBALS["lang"]['Location Rack Size'] = 'Taille du rack demplacement';

$GLOBALS["lang"]['location_room'] = 'Emplacement Salle';

$GLOBALS["lang"]['Location Room'] = 'Emplacement Salle';

$GLOBALS["lang"]['location_suite'] = 'Emplacement Suite';

$GLOBALS["lang"]['Location Suite'] = 'Emplacement Suite';

$GLOBALS["lang"]['Locations'] = 'Emplacements';

$GLOBALS["lang"]['Locations in this'] = 'Lieux dans ce';

$GLOBALS["lang"]['log'] = 'Journal';

$GLOBALS["lang"]['Log'] = 'Journal';

$GLOBALS["lang"]['log_format'] = 'Format du journal';

$GLOBALS["lang"]['Log Format'] = 'Format du journal';

$GLOBALS["lang"]['Log Line'] = 'Ligne de journal';

$GLOBALS["lang"]['log_path'] = 'Emplacement du journal';

$GLOBALS["lang"]['Log Path'] = 'Emplacement du journal';

$GLOBALS["lang"]['log_rotation'] = 'Rotation du log';

$GLOBALS["lang"]['Log Rotation'] = 'Rotation du log';

$GLOBALS["lang"]['log_status'] = 'État du journal';

$GLOBALS["lang"]['Log Status'] = 'État du journal';

$GLOBALS["lang"]['Logging in'] = 'Exploitation forestière';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nom dhôte en minuscules';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'Adresse MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricant';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Adresse Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Paquets MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macédoine';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Tenir des registres des évaluations et des traitements des risques';

$GLOBALS["lang"]['maintenance_expires'] = 'Lentretien expire';

$GLOBALS["lang"]['Maintenance Expires'] = 'Lentretien expire';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Faire mon tableau de bord par défaut';

$GLOBALS["lang"]['Make this install a Collector'] = 'Faites de cette installation un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malaisie';

$GLOBALS["lang"]['Maldives'] = 'Maldives';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malte';

$GLOBALS["lang"]['Manage'] = 'Gérer';

$GLOBALS["lang"]['Manage Licenses'] = 'Gérer les licences';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gérer dans le NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Gérer les incidents et les non-conformités';

$GLOBALS["lang"]['Managed'] = 'Géré';

$GLOBALS["lang"]['managed_by'] = 'Géré par';

$GLOBALS["lang"]['Managed By'] = 'Géré par';

$GLOBALS["lang"]['Manual Input'] = 'Entrée manuelle';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Défini manuellement par lutilisateur, par défaut à Production.';

$GLOBALS["lang"]['Manually set by user.'] = 'Réglé manuellement par lutilisateur.';

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

$GLOBALS["lang"]['Match Order'] = 'Ordre de correspondance';

$GLOBALS["lang"]['Match Process'] = 'Processus de correspondance';

$GLOBALS["lang"]['match_string'] = 'Chaîne de correspondance';

$GLOBALS["lang"]['Match String'] = 'Chaîne de correspondance';

$GLOBALS["lang"]['Matching Attribute'] = 'Attribut de correspondance';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Dispositifs dappariement - y compris OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Correspondance des périphériques Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Le jumelage est effectué dans lordre suivant :';

$GLOBALS["lang"]['maturity_level'] = 'Niveau déchéance';

$GLOBALS["lang"]['Maturity Level'] = 'Niveau déchéance';

$GLOBALS["lang"]['maturity_score'] = 'Score déchéance';

$GLOBALS["lang"]['Maturity Score'] = 'Score déchéance';

$GLOBALS["lang"]['Mauritania'] = 'Mauritanie';

$GLOBALS["lang"]['Mauritius'] = 'Maurice';

$GLOBALS["lang"]['max_file_size'] = 'Taille maximale du fichier';

$GLOBALS["lang"]['Max File Size'] = 'Taille maximale du fichier';

$GLOBALS["lang"]['Max Length'] = 'Longueur maximale';

$GLOBALS["lang"]['max_size'] = 'Taille maximale';

$GLOBALS["lang"]['Max Size'] = 'Taille maximale';

$GLOBALS["lang"]['May'] = 'Mai';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mesure la probabilité que la vulnérabilité soit attaquée, et est basée sur létat actuel des techniques dexploitation, dexploiter la disponibilité de code, ou actif, lexploitation dans la sauvage.';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Réseau métropolitain';

$GLOBALS["lang"]['Mexico'] = 'Mexique';

$GLOBALS["lang"]['Micronesia'] = 'Micronésie';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Champs Microsoft Azure';

$GLOBALS["lang"]['microtime'] = 'Microtemps';

$GLOBALS["lang"]['Microtime'] = 'Microtemps';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes'] = 'Procès-verbal';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Compte rendu de la dernière vérification';

$GLOBALS["lang"]['model'] = 'Modèle';

$GLOBALS["lang"]['Model'] = 'Modèle';

$GLOBALS["lang"]['model_family'] = 'Famille modèle';

$GLOBALS["lang"]['Model Family'] = 'Famille modèle';

$GLOBALS["lang"]['Modified'] = 'Modifié';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modifier un scénario existant';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Surveiller et mesurer le rendement du SGSI';

$GLOBALS["lang"]['Montenegro'] = 'Monténégro';

$GLOBALS["lang"]['month'] = 'Mois';

$GLOBALS["lang"]['Month'] = 'Mois';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Informations supplémentaires';

$GLOBALS["lang"]['More Secure'] = 'Plus sûr';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'SQL plus élaboré peut être utilisé pour grouper les attributs dans une plage. Ci-dessous montre le SQL pour les appareils non vus dans un graphique circulaire groupé par les plages de dates les plus récentes vues.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Plus dinformations sur le débogage peuvent être trouvés sur un fil utile Stack Overflow';

$GLOBALS["lang"]['Morocco'] = 'Maroc';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Probablement le pare-feu Windows (ou un pare-feu tiers) refuse la tentative de connexion.<br/><br/>Connectez-vous à la machine Windows cible et vérifiez les paramètres du pare-feu.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'La plupart des Open-Audit sont sous licence GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Carte mère';

$GLOBALS["lang"]['Motherboard'] = 'Carte mère';

$GLOBALS["lang"]['mount_point'] = 'Point de montage';

$GLOBALS["lang"]['Mount Point'] = 'Point de montage';

$GLOBALS["lang"]['mount_type'] = 'Type de montage';

$GLOBALS["lang"]['Mount Type'] = 'Type de montage';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Il faut répondre à Ping. Si défini, Nmap va essayer denvoyer et découter une réponse ICMP. Si lappareil ne répond pas, aucune autre numérisation ne se produira.<br/>Auparavant, un périphérique navait pas à répondre à un ping pour Open-Audit pour continuer la numérisation.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Doit répondre à Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mon AntiVirus mincite à nier / permettre des choses';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mon temps est libre à Open-Audit';

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

$GLOBALS["lang"]['NOTE'] = 'NOTE';

$GLOBALS["lang"]['NOTE #2'] = 'NOTE #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTE - Pour plus dinformations sur les formats DateTime, voir';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'REMARQUE - Si vous demandez un format CSV, XML ou JSON téléchargé (soit un seul titre, soit la collection complète), les détails réels du titre seront envoyés. Pas la chaîne chiffrée, le nom dutilisateur réel, mot de passe, chaîne communautaire, etc. Tous les détails sensibles ne sont pas affichés dans linterface graphique Web, mais sont rendus disponibles via dautres formats. Pour empêcher cette exportation, un élément de configuration est disponible appelé decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'REMARQUE - Les crochets bouclés dans les données déposées doivent être utilisés comme tels (pas remplacés par dautres exemples ci-dessus).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'REMARQUE - Vous pouvez empêcher que les identifiants de texte clair saffichent ci-dessous en définissant lélément de configuration pour <code>decrypt_credentials</code> à <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Dénomination';

$GLOBALS["lang"]['Name'] = 'Dénomination';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nom: Le nom que vous donnez à ce champ. Idéalement, il devrait être unique.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Ports Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Les ports Netstat utilisent une combinaison de numéro de port, de protocole et de programme. Si tous sont présents, la politique passe.';

$GLOBALS["lang"]['Network'] = 'Réseau';

$GLOBALS["lang"]['network_address'] = 'Adresse réseau';

$GLOBALS["lang"]['Network Address'] = 'Adresse réseau';

$GLOBALS["lang"]['Network Discovery'] = 'Découverte réseau';

$GLOBALS["lang"]['network_domain'] = 'Domaine réseau';

$GLOBALS["lang"]['Network Domain'] = 'Domaine réseau';

$GLOBALS["lang"]['Network Types'] = 'Types de réseaux';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Le type de réseau est défini par défaut sur le réseau local, mais peut être modifié par lutilisateur comme bon lui semble. Les types pris en charge sont ci-dessous (avec grâce à Wikipédia).<br/><br/>Un réseau peut être caractérisé par sa capacité physique ou son but organisationnel. Lutilisation du réseau, y compris lautorisation des utilisateurs et les droits daccès, diffère en conséquence.';

$GLOBALS["lang"]['networks'] = 'Réseaux';

$GLOBALS["lang"]['Networks'] = 'Réseaux';

$GLOBALS["lang"]['Networks Generated By'] = 'Réseaux créés par';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Les réseaux sont mis à jour à chaque découverte. Des éléments tels que les IP disponibles et les IP utilisées, ainsi que les Gateways, DHCP et DNS Servers sont ajoutés tels quils sont trouvés.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Les réseaux répondent différemment selon leur configuration. Certains routeurs et/ou pare-feu peuvent répondre <i>au nom</i> de lautre côté de leurs interfaces vers le serveur Open-Audit. Il est assez fréquent de voir Nmap rapporter une sonde pour SNMP (port UDP 161) pour répondre comme ouvert. Ceci est trompeur car il ny a pas dappareil à cette IP, mais il se termine par une entrée dappareil dans la base de données. 99,9 % du temps, ce nest pas Open-Audit, ni même Nmap, mais le réseau qui cause ce problème. Maintenant que nous avons les options pour traiter les ports filtrés ouverts comme ouverts ou fermés, nous pouvons éliminer beaucoup de cette confusion. Les utilisateurs de lentreprise ont même la possibilité de changer cela sur une base de découverte (plus que simplement en utilisant lélément Medium (Classic) comme ci-dessus).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Réseaux utilisant un masque CIDR de';

$GLOBALS["lang"]['New Building Name'] = 'Nouveau nom du bâtiment';

$GLOBALS["lang"]['New Caledonia'] = 'Nouvelle-Calédonie';

$GLOBALS["lang"]['New Floor Name'] = 'Nom du nouvel étage';

$GLOBALS["lang"]['New Room Name'] = 'Nouveau nom de la salle';

$GLOBALS["lang"]['New Row Name'] = 'Nouveau nom de ligne';

$GLOBALS["lang"]['New Zealand'] = 'Nouvelle-Zélande';

$GLOBALS["lang"]['News'] = 'Nouvelles';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nouvelles check-in chaque fois que vous vous connectez pour des requêtes et paquets mis à jour, des recommandations de configuration, annonces de publication, billets de blog et plus encore.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Les nouvelles sont notre façon de vous tenir à jour avec les dernières corrections, annonces, mises à jour de requêtes, versions de logiciels et plus encore.<br/><br/>Vous navez pas besoin de garder sur le wiki ou de vérifier les nouvelles versions, nous pouvons vous les envoyer !';

$GLOBALS["lang"]['next_hop'] = 'Hop suivant';

$GLOBALS["lang"]['Next Hop'] = 'Hop suivant';

$GLOBALS["lang"]['next_run'] = 'Course suivante';

$GLOBALS["lang"]['Next Run'] = 'Course suivante';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'clic suivant <i>Créez votre propre application</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Ensuite, cliquez sur OK, puis sur le bouton droit du service Apache 2.4 et cliquez sur Redémarrer. Fait !';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Ensuite, faites un clic droit sur le service Apache2.4 et sélectionnez Propriétés, puis cliquez sur longlet Log On.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap ne peut pas déterminer si le port est ouvert car le filtrage des paquets empêche ses sondes datteindre le port. Le filtrage peut se faire à partir dun pare-feu dédié, de règles de routeur ou dun logiciel de pare-feu basé sur lhôte. Ces ports frustrent les attaquants parce quils fournissent si peu dinformations. Parfois, ils répondent avec des messages derreur ICMP tels que le code de type 3 13 (destination inaccessible: communication interdite administrativement), mais les filtres qui laissent tomber des sondes sans réponse sont beaucoup plus fréquents. Cela force Nmap à réessayer plusieurs fois juste au cas où la sonde a été abandonnée en raison de la congestion du réseau plutôt que de filtrage. Cela ralentit considérablement le scan.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap place les ports dans cet état lorsquil est incapable de déterminer si un port est ouvert ou filtré. Ceci se produit pour les types de balayage dans lesquels les ports ouverts ne donnent aucune réponse. Labsence de réponse pourrait aussi signifier quun filtre à paquets a laissé tomber la sonde ou toute réponse quelle a obtenue. Donc Nmap ne sait pas avec certitude si le port est ouvert ou filtré. Les scanners UDP, IP, FIN, NULL et Xmas classent les ports de cette façon.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Les détails du calendrier Nmap se trouvent au bas de cette page liée';

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

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Pas dAPI Google Maps La clé présente, vous ne pourrez pas afficher la carte.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Aucune licence professionnelle ou dentreprise';

$GLOBALS["lang"]['No Results'] = 'Aucun résultat';

$GLOBALS["lang"]['No data in License Key'] = 'Aucune donnée dans la clé de licence';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Aucune mise à jour de la base de données nest nécessaire pour le moment.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Aucun appareil nest dans la base de données.';

$GLOBALS["lang"]['Node'] = 'Noeud';

$GLOBALS["lang"]['None'] = 'Aucune';

$GLOBALS["lang"]['Norfolk Island'] = 'Île de Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Îles Mariannes du Nord';

$GLOBALS["lang"]['Norway'] = 'Norvège';

$GLOBALS["lang"]['Norwegian'] = 'Norvège';

$GLOBALS["lang"]['Not Applicable'] = 'Sans objet';

$GLOBALS["lang"]['Not Checked'] = 'Non vérifié';

$GLOBALS["lang"]['Not Equals'] = 'Pas égal';

$GLOBALS["lang"]['Not In'] = 'Pas dans';

$GLOBALS["lang"]['Not Like'] = 'Pas comme';

$GLOBALS["lang"]['Not Set'] = 'Pas défini';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Tous les ordinateurs ne seront pas en mesure de compléter avec succès une référence. Nous avons vu dans certains cas des échecs dans les tests pour des raisons indépendantes de notre volonté. Les journaux devraient vous aider à vous orienter dans la bonne direction pour ces éléments.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Pas dans la liste (comma séparé)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normalement pas utilisé. Si défini, cela exige que lappareil ait un port ouvert (selon les options de numérisation) pour être considéré répondre. Une adresse MAC, une réponse arp ou une réponse ping ne sont pas considérées comme suffisantes pour être considérées comme répondantes. Utile si un routeur ou un pare-feu entre le serveur Open-Audit et lIP cible répond aux scans de port au nom des IP.';

$GLOBALS["lang"]['Note'] = 'Remarque';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Remarque - La sélection dun parent donne automatiquement accès à ses enfants (bien quil ne soit pas affiché ici).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Notez que la licence dentreprise de 100 appareils ninclut pas le support.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Remarque, vous devrez peut-être rendre le script exécutable avec';

$GLOBALS["lang"]['Notes'] = 'Annexe';

$GLOBALS["lang"]['notes'] = 'Annexe';

$GLOBALS["lang"]['Notice'] = 'Avis';

$GLOBALS["lang"]['notin'] = 'Remarque';

$GLOBALS["lang"]['Notin'] = 'Remarque';

$GLOBALS["lang"]['November'] = 'Novembre';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Maintenant, pour lID dabonnement, cliquez sur Tous les Services, Abonnements et copiez-le.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Maintenant, nous devons fournir laccès de lapplication Azure Active Directory à votre abonnement.<br/><br/>Cliquez sur Groupes de ressources puis sur le groupe de ressources auquel vous souhaitez accéder.<br/><br/>Cliquez sur Ajouter. Le rôle devrait être Contributeur puis rechercher lapplication (Open-Audit). Puis cliquez sur Enregistrer.<br/><br/>Maintenant, lapplication a accès à labonnement, afin que nous puissions faire des appels API. Les appels API seront demandés au nom de lapplication, et non de votre utilisateur.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDRE DU JOUR';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Familles OS';

$GLOBALS["lang"]['OS Family'] = 'Famille OS';

$GLOBALS["lang"]['OS Group'] = 'Groupe OS';

$GLOBALS["lang"]['OUTPUTS'] = 'RÉSULTATS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Gérer';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Gérer';

$GLOBALS["lang"]['object_ident'] = 'Identification de lobjet';

$GLOBALS["lang"]['Object Ident'] = 'Identification de lobjet';

$GLOBALS["lang"]['Obtain top management support'] = 'Obtenir le soutien de la haute direction';

$GLOBALS["lang"]['October'] = 'Octobre';

$GLOBALS["lang"]['Offset'] = 'Dépassement';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'À';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Sur Windows, Open-Audit utilise WMI car cest la méthode principale daudit. Windows a une réputation notoire en ce qui concerne WMI distant. Il a tendance à <i>Juste travailler</i> ou un élément mystère sur la cible nécessite un changement. Si vous éprouvez des difficultés à vérifier des PC Windows distants, nous avons créé un script appelé test_windows_client.vbs. Vous pouvez lancer ce script <strong>localement</strong> sur la machine en question, après avoir signé en tant quutilisateur utilisé par Open-Audit pour effectuer laudit. Le script fait <strong>aucun changement</strong> aux appareils cibles. Il vérifie la plupart (pas tous) des éléments ci-dessous et génère des étiquettes PASS, FAIL et INFO pour différentes propriétés. REMARQUE - Si votre système cible est vérifié correctement, vous ne devriez pas modifier les paramètres. Certains des éléments ci-dessous nexistent pas sur les PC Windows qui peuvent être audités et certains existent. Ne changez les paramètres que si vos découvertes sur des PC particuliers ne fonctionnent pas comme prévu.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Sur la page Liste des tâches, cliquez sur <i>Ajouter Nouveau</i> bouton pour configurer une tâche.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Sur le terrain <i>Chaîne de correspondance</i> vous devez fournir le nom du logiciel que vous voulez suivre. Vous pouvez utiliser le pourcentage de signe (%) comme wildcard au besoin.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Sur la page suivante, vous pourrez sélectionner Access Keys et voir votre clé ou créer une nouvelle clé.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Sur le PC Windows cible, exécutez lutilitaire DCOM et vérifiez (ou définissez) les attributs ci-dessous. Démarrer -> Exécutez, entrez DCOMCNFG et appuyez sur OK. Cela ouvrira la fenêtre DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'En haut à droite (sous la barre de menu) vous verrez plusieurs boutons. Ils vous permettent de sélectionner un autre tableau de bord, de définir le tableau de bord actuel comme votre page daccueil (si ce nest pas déjà fait) et de modifier le tableau de bord actuel (si vous avez la permission).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Sur site, pas en nuage';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Une fois quun champ supplémentaire a été créé, il peut être utilisé dans les requêtes et les groupes comme nimporte quel autre attribut de la base de données.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Une fois commenté, votre certificat sera validé, mais peut aussi échouer si vous utilisez des certificats autosignés et navez pas configuré votre serveur correctement.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Une fois le script exécuté sur une cible, si le script se supprime.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Une fois ces premières requêtes (snmp, ssh, wmi) terminées, si lappareil est pris en charge par les scripts daudit (Windows, Linux, OSX, AIX, HP-UX, Solaris et ESXi), le script daudit correct sera copié à la cible et exécuté. Le script de vérification se supprimera automatiquement une fois terminé. Le résultat sera stocké sur la machine cible en tant que fichier XML. Le serveur Open-Audit récupérera ensuite le fichier résultat pour le traitement et supprimera le fichier résultat sur la cible. Lemplacement auquel le script daudit est copié sur le périphérique cible (du moins pour les audits SSH) est configurable en éditant lélément de configuration découverte_linux_script_répertoire. Par défaut, il est réglé sur /tmp/. Cela peut avoir besoin de changer si /tmp a noexec set. Le fichier résultat est ensuite traité et les détails de lappareil sont mis à jour dans Open-Audit.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Une fois que vous cliquez sur le bouton exécuter, Open-Audit créera un processus pour lancer la découverte et retourner lutilisateur à la page des détails de la découverte. Le processus nouvellement créé prend les options de découverte configurées et exécute les commandes Nmap pour déterminer la liste initiale des adresses IP à scanner (ou des requêtes Active Directory si ce type est utilisé). Chaque IP à scanner est placé dans une file dattente. Une fois le processus initial terminé (et il y a des IP à scanner dans la file dattente), un certain nombre de processus seront créés pour analyser chaque IP en parallèle. Ce nombre de processus est configurable dans la configuration, éditer lattribut <i>_limite dattente</i>. Par défaut, ceci est réglé à 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Une fois que vous avez choisi vos appareils à éditer, cliquez sur le bouton crayon en haut à droite de la table.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Une fois que vous laurez fait, Open-Audit tentera de vérifier les détails de votre logo utilisateur par rapport à la méthode Auth configurée. Si lutilisateur a des identifiants valides et <code>use_authorisation</code> est défini, Open-Audit demandera la liste des groupes auxquels lutilisateur appartient. Si lutilisateur est dans les groupes correspondants pour Open-Audit Rôles et Orgs, ces Rôles et Orgs seront appliqués à cet utilisateur.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Une fois que vous avez généré une définition de base, vous pouvez la programmer pour être exécuté sur un groupe spécifié dappareils.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Une fois que vous avez ces éléments, dans Open-Audit Enterprise vous pouvez aller au menu -> Découvrir -> Nuages -> Créer Nuages, sélectionnez le <i>Amazone</i> Tapez et collez-les. Cest fait.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Une fois que vous avez ces éléments, dans Open-Audit Enterprise vous pouvez aller au menu -> Découvrir -> Nuages -> Créer Nuages, sélectionnez le <i>Microsoft Azure</i> Tapez et collez-les. Cest fait.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Une fois que vous avez vos identifiants cloud, il sagit simplement de créer un nouveau nuage et de faire tourner la découverte - ou de planifier les premières découvertes/futures. Assurez-vous également davoir les identifiants nécessaires pour vous connecter à vos machines cloud, et tout est fait pour vous comme une découverte régulière. Pouvoirs relatifs à votre nuage';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Une des <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ou <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Un de Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Area Network, Personal Area Network, Storage Area Network, System Area Network, Virtual Private Network, Wireless Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Un de développement, de reprise après sinistre, dévaluation, de préproduction, de production, dessai, de formation, de contrôle dacceptation par les utilisateurs';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Un de répartition, délégation, planification, réservé, non alloué, inconnu, non géré. Par défaut à attribuer.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Une des deux <code>active directory</code> ou <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Lun des: antivirus, sauvegarde, pare-feu, approuvé, interdit, ignoré ou autre.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Un autre élément à faire attention - assurez-vous dutiliser le nom dhôte (ou fqdn) de votre LDAP Serveur qui correspond à ce qui est dans le certificat (pas seulement ladresse IP LDAP Servers) lors de la création de lentrée LDAP dans Open-Audit.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentation en ligne';

$GLOBALS["lang"]['Open'] = 'Ouvrir';

$GLOBALS["lang"]['Open Data'] = 'Ouvrir les données';

$GLOBALS["lang"]['Open Source'] = 'Source ouverte';

$GLOBALS["lang"]['Open-AudIT'] = 'Audit ouvert';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Audit ouvert Le code source communautaire est disponible sur GitHub. Vous êtes encouragé à inspecter tout code qui vous préoccupe, et parce quil est open source - vous êtes également encouragé à nous poser des questions sur tout problème que vous avez ou de rapporter toute conclusion. Nous sommes toujours plus quheureux daccepter les contributions de code, les rapports de vulnérabilité, ou même les questions simples. Nous sommes là pour aider.<br/><br/>Les scripts daudit eux-mêmes (Windows, Linux, MacOS, et autres) sont délibérément écrits dans un script natif lisible (VBScript for Windows, Bash for *nix). Vous pouvez voir exactement quelles commandes sont exécutées. Vous pouvez supprimer toutes les commandes que vous sentez que vous navez pas besoin. Vous pouvez demander à un tiers dinspecter le code pour vous et (si vous le souhaitez) de signaler toute constatation.<br/><br/>Audit ouvert Enterprise remplit les fonctions commerciales supplémentaires pour Open-Audit Community. Il est inclus comme un seul fichier compilé sans dépendances externes. Lorsque Enterprise elle-même remplit la ou les fonctions, si vous êtes concerné(e) par des problèmes Firstwave est heureux de travailler à travers eux avec vous - juste demander! Essayez ça avec un autre fournisseur de logiciels commerciaux !';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Sélection du périphérique Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Audit ouvert Enterprise a la possibilité de choisir parmi une liste prédéfinie doptions danalyse de découverte et aussi de personnaliser des options individuelles par découverte.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Entreprise ouverte dAudit. Solution de découverte et daudit flexible à grande échelle pour les grands réseaux. Toutes les fonctionnalités de Professional plus : Bases de données, Audit de fichiers, Cloud Discovery, Gestion de racks, Contrôle daccès par rôle configurable, y compris Active Directory et LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nom du champ Open-Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licences Open-Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Options douverture audit';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-Audit Professional et Enterprise incluent des fonctions de reporting améliorées, y compris des fonctions de reporting basées sur le temps, historique et muti-query dans plusieurs formats.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Audit ouvert Professional a la possibilité de choisir parmi une liste prédéfinie doptions de numérisation de découverte, par découverte.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-Audit Professionnel. Le monde';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Aud ouvert Linformatique peut être configurée pour utiliser des serveurs LDAP (Microsoft Active Directory et/ou OpenLDAP) pour authentifier et autoriser un utilisateur et, en outre, pour créer un compte utilisateur dans Open-Audit en utilisant des rôles et des orgs attribués en fonction de ladhésion au groupe LDAP. Il peut également utiliser';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Aud ouvert Linformatique peut être exécutée sur votre serveur dans votre centre de données. Il na pas besoin daccéder à Internet du tout. Même linstallation sur Linux où nous utilisons le gestionnaire de paquets de distribution pour nos prérequis peut être annulée par vous en utilisant un dépôt de paquets interne et approuvé par léquipe de sécurité.<br/><br/>Aud ouvert IT ne stocke aucune de vos données dans le cloud. Même les informations de licence peuvent être fournies sans avoir à accéder à Internet depuis le serveur Open-Audit.<br/><br/>Bien sûr, il est plus facile de lui permettre daccéder à Internet pour télécharger des paquets (y compris des correctifs de sécurité) pour votre distribution, mais cela dépend de vous et de vos politiques de sécurité. Open-Audit na pas besoin dInternet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-Audit peut télécharger, analyser et utiliser les rapports de vulnérabilité NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Aud ouvert Linformatique peut apparaître dans lune des langues. Comment pouvez-vous améliorer cela?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Aud ouvert Les TI peuvent stocker des informations dans des champs supplémentaires qui sont associés à chaque appareil.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-Audit peut utiliser Microsoft Entra (anciennement appelé Microsoft Azure Active Directory) comme méthode dauthentification. Cela signifie que votre utilisateur dans Open-Audit peut cliquer sur Logon en utilisant le bouton Entra sur la page de connexion et utiliser leurs identifiants Entra pour se connecter. Cet utilisateur devra déjà exister dans Open-Audit (et être assigné';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-Audit peut utiliser OKTA comme méthode dauthentification. Cela signifie que votre utilisateur dans Open-Audit peut cliquer sur Logon en utilisant le bouton OKTA sur la page de connexion et utiliser leurs identifiants OKTA pour se connecter. Cet utilisateur devra déjà exister au sein dOpen-Audit (et être assigné Rôles et Orgs), mais naura pas besoin de se souvenir dun ensemble distinct didentificateurs de logo.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-Audit est livré avec de nombreuses requêtes intégrées. Si vous avez besoin dune requête spécifique et quaucune des requêtes préemballées ne correspond à vos besoins, il est assez facile de créer une nouvelle requête et de la charger dans Open-Audit pour lexécuter.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-Audit possède une API JSON Restful à utiliser à la fois dans linterface web et via les requêtes JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Aud ouvert IT a un système de permissions granulaires pour déterminer ce quun utilisateur dans Open-Audit peut faire, et les éléments quil peut faire. Open-Audit peut être entièrement autonome, ou utiliser Active Directory ou OpenLDAP pour lauthentification et/ou lautorisation.<br/><br/>Cest entièrement à ladministrateur dOpen-Audit quils aimeraient que le Role Based Access Control fonctionne.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Aud ouvert Linformatique possède un puissant moteur de détection des changements. Tous les attributs de périphérique ajoutés, supprimés ou modifiés seront détectés et stockés. Ces changements peuvent être signalés et les données pertinentes confirmées quant à ce qui était attendu du processus de changement et de mainlevée de votre entreprise.<br/><br/>Lorsquun appareil est vérifié, les attributs sont divisés en sections qui correspondent aux tableaux de la base de données.<br/><br/>Chaque appareil (ordinateur, routeur, imprimante, etc.) a une entrée dans le <code>devices</code> tableau. Chaque entrée dans la table des appareils a une <code>id</code> colonne. Cette valeur est unique - cest un id auto-incrémentant.<br/><br/>Lorsque le résultat de la vérification est traité, chaque élément de chaque section a son résultat de vérification par rapport à ce qui est dans la base de données.<br/><br/>Pour chaque section, si les colonnes clés (voir tableau ci-dessous) contiennent les valeurs identiques, elles sont considérées comme déjà installées et ont leur <code>last_seen</code> attribut mis à jour. Aucune entrée change_log nest créée.<br/><br/>Si lune des colonnes clés ne correspond pas, elle est considérée comme un nouvel attribut et est insérée. A <code>change_log</code> lentrée est créée si le périphérique avait dautres attributs déjà présents dans la table.<br/><br/>À la fin du traitement de laudit, les éléments de base de données qui nont pas été mis à jour (ou insérés) sont considérés comme nétant pas présents. Les <code>current</code> attribut pour cet élément est défini à <i>n</i> et une entrée change_log est générée.<br/><br/>Donc, nous pouvons déterminer si quelque chose est actuellement installé - la colonne actuelle est <i>y</i>.<br/><br/>Nous pouvons déterminer quand quelque chose a été détecté au départ - la <i>première _vue</i>.<br/><br/>Nous pouvons déterminer si quelque chose a été installé après laudit initial - la première vue sera différente dans les tables des composants et des appareils.<br/><br/>Nous pouvons déterminer si quelque chose nest pas installé actuellement, mais précédemment était - courant = <i>n</i>.<br/><br/>Nous pouvons déterminer la dernière fois que nous avons détecté un élément - last_seen.<br/><br/>À un moment donné, nous pouvons déterminer ce qui se trouvait sur un système - en utilisant la table audit_log et en sélectionnant les composants pertinents basés sur first_seen et last_seen.<br/><br/>Chaque section et ses colonnes correspondantes sont ci-dessous.<br/><br/>NOTE - Il y a quelques exceptions comme indiqué ci-dessous.<br/><br/>*1 - Pour les cartes réseau, si lordinateur est une machine VMware Esx, il utilise également les colonnes net_index et connexion.<br/><br/>*2 - Pour les partitions, f lordinateur est une machine AIX, nous utilisons le nom de la partition.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-Audit est un programme conçu pour suivre et rapporter les détails et la configuration de votre IT et des actifs connexes. Open-Audit peut dire <i>Quest-ce que sur votre réseau?</i>, comment il est configuré et sil y a eu des changements. Open-Audit offre une plate-forme élégante, flexible et facile à utiliser pour la découverte des appareils, laudit informatique et lautomatisation de la gestion des stocks directement hors de la boîte.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Aud ouvert Linformatique permet de modifier facilement les attributs de plusieurs appareils à la fois.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Aud ouvert Linformatique a besoin de permissions spécifiques pour créer des fichiers, télécharger des résultats, etc. Veuillez indiquer ci-dessous.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-Audit fournit de nombreuses requêtes intégrées et rend simple de créer les vôtres.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Aud ouvert IT est livré avec des rôles intégrés pour admin, org_admin et lutilisateur.<br/><br/>Généralement, un utilisateur qui est administrateur de lapplication Open-Audit elle-même devrait avoir des rôles admin et org_admin possibles.<br/><br/>Un utilisateur peut avoir plusieurs rôles. La permission sera appliquée au niveau le plus permissif - IE, si un utilisateur a les rôles de lutilisateur et org_admin, ils seront en mesure de créer des emplacements parce que org_admin accorde cette permission, même si le rôle de lutilisateur ne le fait pas.<br/><br/>Le rôle dadministrateur permet daccéder à des collections telles que configuration, base de données, groupes, serveurs ldap, journaux, requêtes et rôles. Éléments mondiaux qui affectent lensemble de lapplication.<br/><br/>Le rôle org_admin permet habituellement de créer, lire, mettre à jour et supprimer des actions pour toute collection contenant la colonne org_id. Pratiquement toutes les données sauf certaines des collections mentionnées ci-dessus contiennent une <code>org_id</code> colonne.<br/><br/>Le rôle de lutilisateur permet généralement de lire seulement laccès à tous les éléments avec une colonne org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Aud ouvert IT est livré avec des rôles intégrés pour admin, org_admin et lutilisateur.<br/><br/>Généralement, un utilisateur qui est administrateur de lapplication Open-Audit elle-même devrait avoir des rôles admin et org_admin possibles.<br/><br/>Un utilisateur peut avoir plusieurs rôles. La permission sera appliquée au niveau le plus permissif - IE, si un utilisateur a les rôles de lutilisateur et org_admin, ils seront en mesure de créer des emplacements parce que org_admin accorde cette permission, même si le rôle de lutilisateur ne le fait pas.<br/><br/>Le rôle dadministrateur permet daccéder à des collections telles que configuration, base de données, groupes, serveurs ldap, journaux, requêtes et rôles. Éléments mondiaux qui affectent lensemble de lapplication.<br/><br/>Le rôle org_admin permet habituellement de créer, lire, mettre à jour et supprimer des actions pour toute collection contenant la colonne org_id. Pratiquement toutes les données sauf certaines des collections mentionnées ci-dessus contiennent une colonne org_id.<br/><br/>Le rôle de lutilisateur permet généralement de lire seulement laccès à tous les éléments avec une colonne org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-Audit est livré avec plusieurs tableaux de bord préconfigurés. Si vous êtes un utilisateur professionnel, vous pouvez sélectionner entre deux de ces et le définir comme votre page par défaut lorsque vous vous connectez. Si vous êtes un utilisateur Enterprise, vous pouvez non seulement sélectionner entre les cinq tableaux de bord préconfigurés, mais vous avez également la possibilité de créer votre propre.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-Audit doit être installé sur Windows 64bit <strong>Serveur</strong> seulement. Windows 10 et Windows 11 sont <strong>pas</strong> Laide est accordée.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-Audit utilise Nmap dans sa fonction Discovery. Sondes Nmap pour ports ouverts. Les appareils devraient idéalement répondre avec ouvert pour les ports de travail. Les appareils ne répondent souvent pas avec cela. Les différentes réponses sont détaillées ci-dessous.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-Audit utilise Nmap dans sa fonction Discovery. Sans Nmap, Open-Audit ne fonctionnera pas correctement. Chaque installation Open-Audit suppose que Nmap est installé et quil sera également testé sur les pages Web de Discovery. Plus dinformations sur Open-Audit et Nmap sont disponibles ici';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-Audit utilise Nmap dans sa fonction Discovery. Sans Nmap, Open-Audit ne fonctionnera pas correctement. Chaque installation Open-Audit suppose que Nmap est installé et quil sera testé sur les pages Web Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Aud ouvert IT utilise des identifiants pour accéder à vos appareils. Ceux-ci sont cryptés et stockés, comme vous vous y attendez.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-Audit a été écrit par un Australien parlant anglais. Tout dans lapplication utilise la formulation anglaise. Cependant Open-Audit a toujours supporté plusieurs langues pour laffichage. Ces traductions ne sont pas toujours correctes, car les développeurs ne parlent pas nativement la langue de chaque traduction offerte.<br/><br/>Que pouvez-vous faire si quelque chose nest pas correct dans la traduction?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap est installé';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Ouvrir un ticket de soutien ?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn utilisateur Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn utilisateur Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Attribut dadhésion de lutilisateur Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Attribut dadhésion de lutilisateur Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Ouvert au filtre';

$GLOBALS["lang"]['Open|filtered'] = 'Ouvert au filtre';

$GLOBALS["lang"]['Operating System'] = 'Système dexploitation';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Système dexploitation Famille Contient';

$GLOBALS["lang"]['Operating Systems'] = 'Systèmes dexploitation';

$GLOBALS["lang"]['Operators'] = 'Opérateurs';

$GLOBALS["lang"]['optical'] = 'Optique';

$GLOBALS["lang"]['Optical'] = 'Optique';

$GLOBALS["lang"]['Optimized'] = 'Optimisé';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Option #1 - Modifier les données';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Option #2 - Modifier le fichier de traduction';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Vérification facultative fondée sur lagent';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Version optionnelle telle que vérifiée par Open-Audit. Utilisez le signe % en tant que wildcard.';

$GLOBALS["lang"]['options'] = 'Options';

$GLOBALS["lang"]['Options'] = 'Options';

$GLOBALS["lang"]['Options, options, options'] = 'Options, options, options';

$GLOBALS["lang"]['Or'] = 'Ou';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ou choisissez parmi les champs ci-dessous.';

$GLOBALS["lang"]['org_descendants'] = 'Descendants dorg.';

$GLOBALS["lang"]['Org Descendants'] = 'Descendants dorg.';

$GLOBALS["lang"]['org_id'] = 'Numéro dordre';

$GLOBALS["lang"]['Org ID'] = 'Numéro dordre';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organisations';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Les organisations peuvent étendre et améliorer le niveau de détail qui est stocké contre chaque appareil découvert en utilisant des champs personnalisés et le noyau ouvert permet une intégration facile dans CMDB, gestion dévénements et systèmes de billetterie.';

$GLOBALS["lang"]['orgs'] = 'Orgues';

$GLOBALS["lang"]['Orgs'] = 'Orgues';

$GLOBALS["lang"]['Orgs Name'] = 'Nom des orgues';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Les orgs dans Open-Audit sont un élément clé. Un utilisateur a un Org primaire ainsi quune liste dOrgs auxquels il peut accéder. Un utilisateur combine ceci avec une liste de rôles assignés qui définissent les actions quil peut prendre sur les éléments assignés aux Orgs auxquels il a accès. La combinaison dun utilisateur <i>Organismes</i> et <i>Rôles</i> définir ce quils peuvent et ne peuvent pas faire dans Open-Audit.<br/><br/>La plupart des éléments dans Open-Audit sont affectés à un Org. Appareils, Emplacements, Réseaux, etc, etc.<br/><br/>Les Orgs peuvent avoir des Orgs enfants. Pensez à une structure dorganigramme (arbre). Si un utilisateur a accès à un Org spécifique, la plupart du temps (pas toujours) ils ont également accès à ces Orgs descendants.';

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

$GLOBALS["lang"]['os_display_version'] = 'Version daffichage dOs';

$GLOBALS["lang"]['Os Display Version'] = 'Version daffichage dOs';

$GLOBALS["lang"]['os_family'] = 'Famille Os';

$GLOBALS["lang"]['Os Family'] = 'Famille Os';

$GLOBALS["lang"]['os_group'] = 'Groupe Os';

$GLOBALS["lang"]['Os Group'] = 'Groupe Os';

$GLOBALS["lang"]['os_installation_date'] = 'Os Date dinstallation';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Date dinstallation';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'En dehors de cette restriction, vous êtes libre de sélectionner des attributs selon les besoins. Cest une bonne idée dutiliser le menu';

$GLOBALS["lang"]['Others'] = 'Autres';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Notre intégration par défaut permet également une découverte sur tout appareil fourni de lextérieur. Donc, nous expédions une découverte par défaut pour lintégration par défaut hors de la boîte. Ceux-ci utilisent les règles de correspondance par défaut, mais permettent également de faire correspondre ladresse IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Nos exemples utiliseront <i>type</i> colonne.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Notre framework charge les fichiers ici pour le traitement, puis les supprime. Pensez aux résultats de vérification présentés, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Notre objectif avec la version initiale des intégrations était spécifiquement pour lintégration NMIS à Open-Audit <i>Juste travailler</i>. Si vous utilisez les programmes sous Linux, vous pouvez littéralement cliquer sur un seul bouton pour exécuter lintégration. Rien de plus nest nécessaire. Cela dit, lintégration elle-même est extrêmement configurable - donc si quelque chose nest pas à votre préférence, il peut facilement être changé.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Notre nouvelle fonctionnalité appelée Vulnérabilités vous donne la possibilité de déterminer rapidement si un appareil est affecté par un CVE (Common Vulnérabilité Exposure) - mais comment?<br/><br/>FirstWave consomme constamment la sortie du flux Nist NVD. Nous prenons cela et appliquons quelques restrictions, puis extrayons les programmes touchés et construisons une requête SQL pour le reporting. Votre instance Open-Audit rejoint FirstWave et demande régulièrement toute nouvelle vulnérabilité. Lorsquil reçoit un nouvel enregistrement de vulnérabilité, il est exécuté contre la base de données et le résultat stocké. Chaque fois quun périphérique est traité, toutes les vulnérabilités correspondantes sont à nouveau exécutées et le résultat stocké. Cela signifie que lorsque nous visualisons une liste de vulnérabilité, nous navons pas besoin de calculer tous les appareils affectés - nous avons déjà le résultat. Lorsque vous voyez un enregistrement de vulnérabilité individuelle, nous recalculons en effet le résultat pour cette vulnérabilité singulière.<br/><br/>Donc, tu es toujours à jour !<br/><br/>En plus de cela, nous calculons également le résultat de toutes les vulnérabilités pour tous les appareils quotidiennement (habituellement à un moment calme, disons 2h du matin).<br/><br/>Dans votre cas dOpen-Audit, nous vous permettons de sélectionner les fournisseurs qui vous intéressent. i.e. il ny a aucune utilisation de récupérer des enregistrements de vulnérabilité dun fournisseur dont vous nutilisez pas ou avez installé le logiciel. Par défaut, notre liste de fournisseurs est Adobe, Apple, Cisco, Google, Microsoft, Mozilla et Redhat.<br/><br/>Tout cela semble très simple, mais dans les coulisses <b>lot</b> Ça continue. Par exemple, lenregistrement CVE contient une liste de logiciels touchés - mais ces noms de logiciels ne correspondent pas à ce que nous recevons lorsque nous vérifions un ordinateur. Un bon exemple est Apache. Généralement, un enregistrement CVE indique que le logiciel affecté est http_serveur. En réalité, cela apparaît comme apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - et dautres. Donc, nous devons dabord déterminer quel est le nom réel du programme que nous recevons lorsque nous demandons un ordinateur, et il peut y avoir plusieurs noms. Après cela, nous devons analyser lenregistrement CVE et créer une instruction SQL correspondante. Permettant plusieurs noms de programmes comme ci-dessus, et plusieurs versions, gammes de versions, et même plusieurs morceaux différents de logiciels (un exemple est Thunderbird et Firefox dans un seul CVE). Et votre instance dOpen-Audit doit prendre ceci et appliquer le filtrage Orgs aussi bien. Et ce nest quun seul CVE. Quen est-il de déterminer quels CVE vous avez et navez pas? Et si on ajoutait un vendeur à la liste plus tard ? Tellement de choses à considérer !<br/><br/>En plus des rapports habituels, nous avons également quelques nouveaux widgets disponibles pour les tableaux de bord, basés sur les données de vulnérabilité.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Notre temps mort pour une réponse SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Notre délai pour une réponse WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Notre délai pour une réponse SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Notre délai pour une réponse de script daudit';

$GLOBALS["lang"]['output'] = 'Produit';

$GLOBALS["lang"]['Output'] = 'Produit';

$GLOBALS["lang"]['outputs'] = 'Produits';

$GLOBALS["lang"]['Outputs'] = 'Produits';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Note globale de gravité (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Suppression';

$GLOBALS["lang"]['Overwrite'] = 'Suppression';

$GLOBALS["lang"]['owner'] = 'Propriétaire';

$GLOBALS["lang"]['Owner'] = 'Propriétaire';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec est une ré-implémentation librement redistribuable du populaire programme PsExec SysInternal/Microsofts. PAExec vise à être une goutte dans le remplacement de PsExec, de sorte que lutilisation de la ligne de commande est identique, avec des options supplémentaires également supportées. Ce travail a été initialement inspiré par Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Données POST';

$GLOBALS["lang"]['Package'] = 'Paquet';

$GLOBALS["lang"]['packages'] = 'Emballages';

$GLOBALS["lang"]['Packages'] = 'Emballages';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Les paquets sont utilisés pour signaler des choses telles que <i>Logiciels interdits</i>, AntiVirus sur les serveurs, etc.<br/><br/>Open-Audit fournit des widgets qui sappuient sur des repots également fournis pour démèner létat des antivirus, des pare-feu et dautres logiciels.';

$GLOBALS["lang"]['pagefile'] = 'Fichier de page';

$GLOBALS["lang"]['Pagefile'] = 'Fichier de page';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palaos';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territoire palestinien';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papouasie-Nouvelle-Guinée';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Paramètres';

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

$GLOBALS["lang"]['Permission'] = 'Autorisation';

$GLOBALS["lang"]['Permission Required'] = 'Autorisation requise';

$GLOBALS["lang"]['permissions'] = 'Autorisations';

$GLOBALS["lang"]['Permissions'] = 'Autorisations';

$GLOBALS["lang"]['Persian'] = 'Perse';

$GLOBALS["lang"]['Personal Area Network'] = 'Réseau Espace personnel';

$GLOBALS["lang"]['Personal area network'] = 'Réseau de zones personnelles';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Les diagrammes circulaires doivent renvoyer le nom ou mon_nom, la description ou mon_description et compter.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Cible';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Îles Pitcairn';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planifier et effectuer des vérifications internes';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Veuillez avoir un logo administrateur Open-Audit et mettre à jour la base de données.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Connectez-vous et changez-les dès que possible.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Veuillez vous connecter au serveur Open-Audit ( Windows ou Linux) et exécuter <code>nslookup IP_ADDRESS_OF_TARGET</code> dans linvite de commande ou le shell. Il doit être capable de résoudre lIP à un nom.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Veuillez noter que la case sélectionnée remplacera la case dentrée de texte.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Veuillez consulter la FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Veuillez envoyer les trois fichiers à votre contact de support chez Opmantek et décrire votre problème.';

$GLOBALS["lang"]['Please set using'] = 'Veuillez définir en utilisant';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Veuillez visiter la page daccueil à';

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

$GLOBALS["lang"]['Polish'] = 'Polonais';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populez les valeurs indiquées ci-dessous:';

$GLOBALS["lang"]['Populated by audit.'] = 'Populé par vérification.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populé par la découverte et la vérification.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populé dynamiquement.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populé à partir du DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populé de la découverte SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Poupée daudits dappareils.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populé à partir du nom dhôte.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populé à partir de machine-id sur Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populé depuis lIP pour la route par défaut ou lIP détecté dans la découverte.';

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

$GLOBALS["lang"]['ports_stop_after'] = 'Les ports sarrêtent après';

$GLOBALS["lang"]['Ports Stop After'] = 'Les ports sarrêtent après';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, République portugaise';

$GLOBALS["lang"]['Portuguese'] = 'Portugais';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugais (Brésil)';

$GLOBALS["lang"]['position'] = 'Fonction';

$GLOBALS["lang"]['Position'] = 'Fonction';

$GLOBALS["lang"]['Post-Certification'] = 'Après certification';

$GLOBALS["lang"]['postcode'] = 'Code postal';

$GLOBALS["lang"]['Postcode'] = 'Code postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuit électrique';

$GLOBALS["lang"]['Power Circuit'] = 'Circuit électrique';

$GLOBALS["lang"]['power_sockets'] = 'Chaussettes électriques';

$GLOBALS["lang"]['Power Sockets'] = 'Chaussettes électriques';

$GLOBALS["lang"]['Predictable'] = 'Prévisible';

$GLOBALS["lang"]['Preferences'] = 'Préférences';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Se préparer à la recertification tous les 3 ans';

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

$GLOBALS["lang"]['printer_color'] = 'Couleur de limprimante';

$GLOBALS["lang"]['Printer Color'] = 'Couleur de limprimante';

$GLOBALS["lang"]['printer_duplex'] = 'Imprimante Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Imprimante Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nom de port de limprimante';

$GLOBALS["lang"]['Printer Port Name'] = 'Nom de port de limprimante';

$GLOBALS["lang"]['printer_shared'] = 'Imprimante partagée';

$GLOBALS["lang"]['Printer Shared'] = 'Imprimante partagée';

$GLOBALS["lang"]['printer_shared_name'] = 'Nom partagé de limprimante';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nom partagé de limprimante';

$GLOBALS["lang"]['priority'] = 'Priorité';

$GLOBALS["lang"]['Priority'] = 'Priorité';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Vie privée';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protocole de confidentialité';

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

$GLOBALS["lang"]['Professional'] = 'Professionnel';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Programme';

$GLOBALS["lang"]['Program'] = 'Programme';

$GLOBALS["lang"]['Properties'] = 'Propriétés';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Propriétaire. Si vous voulez modifier HighCharts, vous pouvez avoir besoin dun';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protège la confidentialité, lintégrité et la disponibilité de linformation';

$GLOBALS["lang"]['protocol'] = 'Protocole';

$GLOBALS["lang"]['Protocol'] = 'Protocole';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Fournir une description et sélectionner et expirer la durée.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Fournissez un nom - nous vous recommandons humblement Open-Audit, mais vous pouvez le nommer comme vous voulez.<br/>À partir du formulaire Open-Audit, copiez la valeur <i>Redirect URI</i> et le coller dans le champ <i>Redirection URIs</i> champ dans OKTA.<br/>Les URIs de redirection Sign-out sont optionnels, mais si vous voulez, vous pouvez utiliser open-audit/index. php/logout avec votre adresse http des serveurs Open-Audit, selon la capture décran.<br/>Normalement, LURL Open-Audit ressemblera à quelque chose';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Si vous avez les bonnes références, Device Seed Discovery fonctionne comme suit';

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

$GLOBALS["lang"]['purchase_amount'] = 'Montant de lachat';

$GLOBALS["lang"]['Purchase Amount'] = 'Montant de lachat';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centre des coûts dachat';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centre des coûts dachat';

$GLOBALS["lang"]['purchase_count'] = 'Nombre dachats';

$GLOBALS["lang"]['Purchase Count'] = 'Nombre dachats';

$GLOBALS["lang"]['purchase_date'] = 'Date dachat';

$GLOBALS["lang"]['Purchase Date'] = 'Date dachat';

$GLOBALS["lang"]['purchase_invoice'] = 'Achat de la facture';

$GLOBALS["lang"]['Purchase Invoice'] = 'Achat de la facture';

$GLOBALS["lang"]['purchase_order'] = 'Bon de commande';

$GLOBALS["lang"]['Purchase Order'] = 'Bon de commande';

$GLOBALS["lang"]['purchase_order_number'] = 'Numéro du bon de commande';

$GLOBALS["lang"]['Purchase Order Number'] = 'Numéro du bon de commande';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Numéro de contrat de service dachat';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Numéro de contrat de service dachat';

$GLOBALS["lang"]['purchase_vendor'] = 'Fournisseur dachat';

$GLOBALS["lang"]['Purchase Vendor'] = 'Fournisseur dachat';

$GLOBALS["lang"]['purpose'] = 'Objet';

$GLOBALS["lang"]['Purpose'] = 'Objet';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Questions';

$GLOBALS["lang"]['Queries'] = 'Questions';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Les questions sont une partie importante de Open-Audit. Ils sont ce qui vous permet dobtenir des informations significatives de toutes les données de lappareil que vous avez découvert. Avec les résumés et les groupes, ils fournissent un mécanisme puissant pour extraire des informations cruciales.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Les demandes de renseignements pour les groupes doivent sélectionner uniquement la';

$GLOBALS["lang"]['Query'] = 'Demande';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Interrogez dabord cet attribut Active Directory pour déterminer lunité de travail des utilisateurs.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Interrogez cet attribut Active Directory deuxième pour déterminer lunité de travail des utilisateurs.';

$GLOBALS["lang"]['queue'] = 'Demande';

$GLOBALS["lang"]['Queue'] = 'Demande';

$GLOBALS["lang"]['Queue Limit'] = 'Limite des requêtes';

$GLOBALS["lang"]['Queued Device Audits'] = 'Vérifications des dispositifs en attente';

$GLOBALS["lang"]['Queued IP Scans'] = 'Scans IP en attente';

$GLOBALS["lang"]['Queued Items'] = 'Éléments en attente';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC pour Active Directory et openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Début';

$GLOBALS["lang"]['RX Bitrate'] = 'Débit RX';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Niveau RX';

$GLOBALS["lang"]['RX Power'] = 'Puissance RX';

$GLOBALS["lang"]['RX Profile'] = 'Profil RX';

$GLOBALS["lang"]['Rack'] = 'Sac';

$GLOBALS["lang"]['rack_devices'] = 'Dispositifs de rack';

$GLOBALS["lang"]['Rack Devices'] = 'Dispositifs de rack';

$GLOBALS["lang"]['rack_id'] = 'Numéro didentification';

$GLOBALS["lang"]['Rack ID'] = 'Numéro didentification';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Gestion des racks et rapports';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Lire dans le fichier journal à';

$GLOBALS["lang"]['Received'] = 'Reçu';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Récemment, on nous a posé la question - considérez-vous Open-Audit plus sûr que dautres programmes semblables? Comme pour la plupart des choses, la réponse est <i>ça dépend</i>.<br/><br/>Aud ouvert Linformatique peut être utilisée de manière à être extrêmement sûre. Mais comme dhabitude avec la sécurité basée sur lordinateur, plus vous voulez faire quelque chose, plus il devient gênant dutiliser. Lancienne phrase <i>lordinateur le plus sécurisé est celui qui est éteint et dans larmoire<i> vient à lesprit.<br/><br/>Ci-dessous, nous allons décrire quelques options qui peuvent être utilisées avec Open-Audit qui augmenteront la sécurité. Comme la plupart des éléments dans Open-Audit, ce sont des options et non obligatoires. Jusquoù vous prenez la sécurité dépend de vous.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertification : Requis tous les trois ans';

$GLOBALS["lang"]['Red Query'] = 'Demande rouge';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Rediriger Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Rediriger Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Réduit les risques de violation des données et de cybermenaces';

$GLOBALS["lang"]['references'] = 'Références';

$GLOBALS["lang"]['References'] = 'Références';

$GLOBALS["lang"]['region'] = 'Région';

$GLOBALS["lang"]['Region'] = 'Région';

$GLOBALS["lang"]['registered_user'] = 'Utilisateur enregistré';

$GLOBALS["lang"]['Registered User'] = 'Utilisateur enregistré';

$GLOBALS["lang"]['Rejected'] = 'Rejeté';

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

$GLOBALS["lang"]['Remove Exception'] = 'Supprimer lexception';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Répétez jusquà ce que vous ayez un PC Windows complètement découvert et vérifié.';

$GLOBALS["lang"]['Report'] = 'Rapport annuel';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Signalez vos appareils, réseaux et plus';

$GLOBALS["lang"]['reportable'] = 'À déclarer';

$GLOBALS["lang"]['Reportable'] = 'À déclarer';

$GLOBALS["lang"]['Reports'] = 'Rapports';

$GLOBALS["lang"]['request'] = 'Demande';

$GLOBALS["lang"]['Request'] = 'Demande';

$GLOBALS["lang"]['Request Method'] = 'Méthode de demande';

$GLOBALS["lang"]['Request Vulnerability'] = 'Demande de vulnérabilité';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Demander une spécification CVE';

$GLOBALS["lang"]['requested'] = 'Demande';

$GLOBALS["lang"]['Requested'] = 'Demande';

$GLOBALS["lang"]['require_port'] = 'Port obligatoire';

$GLOBALS["lang"]['Require Port'] = 'Port obligatoire';

$GLOBALS["lang"]['Require an Open Port'] = 'Nécessite un port ouvert';

$GLOBALS["lang"]['Required'] = 'Requis';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Autorisations requises de lutilisateur AWS';

$GLOBALS["lang"]['Required Fields'] = 'Champs requis';

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

$GLOBALS["lang"]['Resulting Function'] = 'Fonction résultante';

$GLOBALS["lang"]['Results'] = 'Résultats';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Récupérer une liste de dispositifs dans la';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Récupérer une liste de périphériques avec un nom OS comme Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Récupérer tous les détails sur lappareil avec id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Récupérer tous les appareils sous Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Récupérer tous les appareils avec les colonnes standard';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Récupérer les 10 premiers périphériques sous Windows commandés par hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Récupérer les propriétés id, ip, hostname, domaine, type de tous les périphériques';

$GLOBALS["lang"]['retrieved'] = 'Extrait';

$GLOBALS["lang"]['Retrieved'] = 'Extrait';

$GLOBALS["lang"]['retrieved_ident'] = 'Identificateur recherché';

$GLOBALS["lang"]['Retrieved Ident'] = 'Identificateur recherché';

$GLOBALS["lang"]['retrieved_name'] = 'Nom recherché';

$GLOBALS["lang"]['Retrieved Name'] = 'Nom recherché';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Extrait du périphérique - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Récupération dune liste de pouvoirs';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Récupération ou création';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Retourner une collection dappareils avec lensemble par défaut de colonnes (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.fabricing, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Retourner une liste de tous les modules installés sur les routeurs';

$GLOBALS["lang"]['Return an individual device details'] = 'Retourner un appareil particulier';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Retourne une liste de {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Retourne un {collection} details.';

$GLOBALS["lang"]['Reunion'] = 'Réunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Examiner les pratiques actuelles par rapport aux exigences de la norme ISO 27001';

$GLOBALS["lang"]['revision'] = 'Révision';

$GLOBALS["lang"]['Revision'] = 'Révision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Résultat de lévaluation des risques';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Résultat de lévaluation des risques';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Évaluation et traitement des risques';

$GLOBALS["lang"]['Risk Management'] = 'Gestion des risques';

$GLOBALS["lang"]['Role'] = 'Rôle';

$GLOBALS["lang"]['roles'] = 'Rôles';

$GLOBALS["lang"]['Roles'] = 'Rôles';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Les rôles ne peuvent être créés et édités que si vous avez une licence Open-Audit Enterprise. Pour la plupart des utilisateurs, lensemble par défaut de Rôles devrait être tout ce qui est requis.';

$GLOBALS["lang"]['Romania'] = 'Roumanie';

$GLOBALS["lang"]['Romanian'] = 'Roumain';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Les règles sont créées et exécutées contre un appareil lorsque lappareil est découvert ou quun résultat daudit est traité. Les règles peuvent être utilisées pour définir un attribut de périphérique basé sur dautres attributs.<br/><br/>NOTE - À lheure actuelle, nous ne pouvons pas supprimer une entrée ou une sortie de règle qui contient un /. Cest parce que le framework analyse le / comme faisant partie de lURL et renvoie un 404, même avant que notre code ne tourne. La solution consiste à supprimer la règle elle-même, puis à recréer les entrées et sorties au besoin. Heureusement, les entrées et sorties qui contiennent un / sont rares (en fait, aucune nexiste par défaut).';

$GLOBALS["lang"]['Run Discovery'] = 'Lancer Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Exécuter Discovery sur les appareils';

$GLOBALS["lang"]['Run Your Discovery'] = 'Lancez votre découverte';

$GLOBALS["lang"]['Run a Command'] = 'Exécuter une commande';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Faites une découverte et découvrez <b>Quy a-t-il sur votre réseau?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Exécutez le script en tapant <code>cscript test_windows_client.vbs</code> dans la console.';

$GLOBALS["lang"]['Run this Command'] = 'Exécutez cette commande';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Courir';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Exécuter le service Apache Open-Audit sous Windows';

$GLOBALS["lang"]['Russian'] = 'Russe';

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

$GLOBALS["lang"]['SAN Audit'] = 'Vérification SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Découvrez automatiquement';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL ne contenant pas cette condition entraînera léchec du widget à être exécuté.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Enregistrer et lancer le fichier. Assurez-vous dexécuter le fichier en tant quadministrateur afin de linstaller (clic droit, Exécuter en tant quadministrateur).';

$GLOBALS["lang"]['Save as Default'] = 'Enregistrer par défaut';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Enregistrer le fichier téléchargé.';

$GLOBALS["lang"]['scaling'] = 'Élargissement';

$GLOBALS["lang"]['Scaling'] = 'Élargissement';

$GLOBALS["lang"]['scan_options'] = 'Options de numérisation';

$GLOBALS["lang"]['Scan Options'] = 'Options de numérisation';

$GLOBALS["lang"]['Scan Options ID'] = 'ID des options de numérisation';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scannez ce(s) port(s) et si détecté(s) ouvert(s), utilisez ce port pour la communication SSH. Ceci est ajouté à la liste des ports TCP personnalisés ci-dessus (si non déjà inclus), donc il nest pas nécessaire de linclure dans cette liste aussi bien. Comma séparé, pas despace.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scanner le numéro supérieur Nmap des ports TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scanner le numéro supérieur Nmap des ports UDP.';

$GLOBALS["lang"]['schedule'] = 'Tableau';

$GLOBALS["lang"]['Schedule'] = 'Tableau';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Découverte et rapport dappareils programmés font dOpen-Audit Professional une solution efficace pour les professionnels de linformatique occupés qui cherchent à réduire les frais généraux et à augmenter les informations.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Calendrier - découverte, rapport et plus';

$GLOBALS["lang"]['scope'] = 'Portée';

$GLOBALS["lang"]['Scope'] = 'Portée';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'La portée est connue sous le nom de portée de lautorisation, ce qui signifie si une vulnérabilité affecte des ressources au-delà de lautorité de sécurité initiale de la composante vulnérable.<br/><br/>Les deux seules valeurs valides pour cet attribut sont';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Recherche à laide de DataTables';

$GLOBALS["lang"]['Second'] = 'Deuxième';

$GLOBALS["lang"]['secondary'] = 'Secondaire';

$GLOBALS["lang"]['Secondary'] = 'Secondaire';

$GLOBALS["lang"]['Secondary Text'] = 'Texte secondaire';

$GLOBALS["lang"]['Secret Key'] = 'Clé secrète';

$GLOBALS["lang"]['section'] = 'Chapitre';

$GLOBALS["lang"]['Section'] = 'Chapitre';

$GLOBALS["lang"]['secure'] = 'Sécurisation';

$GLOBALS["lang"]['Secure'] = 'Sécurisation';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protocole dautomatisation du contenu de sécurité';

$GLOBALS["lang"]['Security Level'] = 'Niveau de sécurité';

$GLOBALS["lang"]['Security Name'] = 'Nom de la sécurité';

$GLOBALS["lang"]['Security Status'] = 'État de sécurité';

$GLOBALS["lang"]['security_zone'] = 'Zone de sécurité';

$GLOBALS["lang"]['Security Zone'] = 'Zone de sécurité';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Voir plus haut. NOTE - Cela pourrait aussi être causé par un certificat autosigné sur le serveur LDAP. Nous nous efforçons de le faire dans un futur communiqué.';

$GLOBALS["lang"]['See our page on enabling'] = 'Voir notre page sur activer';

$GLOBALS["lang"]['Seed Discoveries'] = 'Découvertes de semences';

$GLOBALS["lang"]['seed_ip'] = 'IP des semences';

$GLOBALS["lang"]['Seed IP'] = 'IP des semences';

$GLOBALS["lang"]['seed_ping'] = 'Ping de semences';

$GLOBALS["lang"]['Seed Ping'] = 'Ping de semences';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Restrictions aux semences privées';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Restrictions aux semences privées';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restriction des semences au sous-réseau';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restriction des semences au sous-réseau';

$GLOBALS["lang"]['Select'] = 'Sélectionner';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Sélectionner Admin -> Tâches Créer Tâche dans le menu.';

$GLOBALS["lang"]['Select All'] = 'Tout sélectionner';

$GLOBALS["lang"]['Select All Devices'] = 'Sélectionner tous les périphériques';

$GLOBALS["lang"]['select_external_attribute'] = 'Sélectionner lattribut externe';

$GLOBALS["lang"]['Select External Attribute'] = 'Sélectionner lattribut externe';

$GLOBALS["lang"]['select_external_count'] = 'Sélectionner le nombre externe';

$GLOBALS["lang"]['Select External Count'] = 'Sélectionner le nombre externe';

$GLOBALS["lang"]['select_external_type'] = 'Sélectionner Externe Type';

$GLOBALS["lang"]['Select External Type'] = 'Sélectionner Externe Type';

$GLOBALS["lang"]['select_external_value'] = 'Sélectionner Externe Valeur';

$GLOBALS["lang"]['Select External Value'] = 'Sélectionner Externe Valeur';

$GLOBALS["lang"]['select_internal_attribute'] = 'Sélectionner lattribut interne';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Sélectionner lattribut interne';

$GLOBALS["lang"]['select_internal_count'] = 'Sélectionner le nombre interne';

$GLOBALS["lang"]['Select Internal Count'] = 'Sélectionner le nombre interne';

$GLOBALS["lang"]['select_internal_type'] = 'Sélectionner interne Type';

$GLOBALS["lang"]['Select Internal Type'] = 'Sélectionner interne Type';

$GLOBALS["lang"]['select_internal_value'] = 'Sélectionner interne Valeur';

$GLOBALS["lang"]['Select Internal Value'] = 'Sélectionner interne Valeur';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Sélectionner le menu -> Gérer -> Données de base -> Liste des données de base.';

$GLOBALS["lang"]['Select a Table'] = 'Sélectionner une table';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Choisir un organisme de certification accrédité';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Choisir et appliquer des contrôles appropriés (annexe A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Sélectionnez la <i>COMMISSION ÉCONOMIQUE POUR LEUROPE Sécurité</i> onglet<br/><br/>Cliquez sur Autorisations daccès Modifier par défaut';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Sélectionnez la <i>Signer</i> onglet et copier la valeur pour <i>Émetteur</i> (juste lURL elle-même). Coller ceci dans lOpen-Audit <i>Émetteur</i> sur le terrain.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Sélectionnez la <i>Ce compte</i> case à cocher et fournir le nom de compte et le mot de passe.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Sélectionnez le menu Démarrer et tapez <i>services <.i>. Cliquez sur licône Services.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Sélectionnez le type dAuth Menthod pour créer et saisir les détails pertinents.';

$GLOBALS["lang"]['Self Delete'] = 'Supprimer automatiquement';

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

$GLOBALS["lang"]['Servers Only'] = 'Serveurs seulement';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Service sous Windows';

$GLOBALS["lang"]['service_version'] = 'Version de service';

$GLOBALS["lang"]['Service Version'] = 'Version de service';

$GLOBALS["lang"]['Set'] = 'Jeu';

$GLOBALS["lang"]['set_by'] = 'Défini par';

$GLOBALS["lang"]['Set By'] = 'Défini par';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Défini par la fonction Discovery - ne le définit normalement pas manuellement.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Défini par les scripts audit_domaine ou discover_domaine. Ne pas mettre.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Définir le texte externe à la version capitalisée des données internes.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Définissez le texte externe en minuscules.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Réglez le texte externe en majuscules.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Définissez la taille (normale ou compacte) des tableaux sur les écrans Liste.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Définissez ceci si vous souhaitez insérer des systèmes de AD qui peuvent ne pas être contactables, mais ont été vus par AD depuis cette date.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Configurer Discovery sur un sous-réseau est presque identique à exécuter une Discovery régulière via linterface web. Les seuls éléments supplémentaires sont lheure et le jour prévus et un nom pour la tâche programmée elle-même. Vous pouvez en profiter pour planifier plusieurs découvertes en utilisant différents ensembles didentifiants.<br/><br/>Selon le Subnet Discovery, lActive Directory Discovery est aussi simplement les mêmes champs quune Active Directory Discovery régulière avec lajout dune journée, dune heure ou dun nom.<br/><br/>Si le serveur Open-Audit a des collecteurs qui lui rendent compte, une goutte deau supplémentaire est fournie. Vous pouvez sélectionner ceci pour spécifier quel Collector la tâche doit être exécutée. Seules les tâches Discovery sont prises en charge pour les Collectors. Spécifiez les mêmes éléments quune Discovery régulière, mais fournissez le collecteur alternatif pour exécuter cette tâche.';

$GLOBALS["lang"]['severity'] = 'Gravité';

$GLOBALS["lang"]['Severity'] = 'Gravité';

$GLOBALS["lang"]['severity_text'] = 'Texte de gravité';

$GLOBALS["lang"]['Severity Text'] = 'Texte de gravité';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'La gravité est calculée à partir <code>base_score</code> et peut être lun des: Aucun, faible, moyen, élevé, critique.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Expédié sont un ensemble déléments par défaut. Vous pouvez les trouver en allant au menu';

$GLOBALS["lang"]['short'] = 'Court';

$GLOBALS["lang"]['Short'] = 'Court';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Dois-je supprimer toutes les données non courantes de ce périphérique?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Si ce fichier (ou modèle) est utilisé pour exclure les fichiers de la déclaration. Normalement, pour vérifier les dossiers, ceci est défini à <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Si ce fournisseur est utilisé lors de la récupération des vulnérabilités de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Si nous ajoutions des appareils du service à distance, localement.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Devrions-nous appliquer cette licence aux enfants Org sélectionnés ainsi quaux enfants Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Si le logiciel de gestion est détecté, auditons un SAN.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'On devrait vérifier les points de montage.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Si nous auditons les ports netstat (oui, non, serveurs seulement).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Si nous vérifions le logiciel installé.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devrions-nous considérer un port filtré comme un port ouvert - et donc marquer cette IP comme ayant un périphérique attaché?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devrions-nous considérer quun port filtré ouvert est un port ouvert - et donc marquer cette IP comme ayant un périphérique attaché?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Si nous convertissons le nom dhôte en minuscules.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Si nous créons un fichier en fonction du résultat de la vérification.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Devrions-nous exposer ce groupe dans linterface web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Si nous exposons cette requête dans la liste des rapports sous le menu Rapport dans linterface Web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Si nous exposons cette requête dans la liste des rapports sous le menu Rapports dans linterface Web.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Si nous cachons la fenêtre du script daudit lors de lexécution.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Si nous ignorons un certificat SSL non valide ou autosigné et soumettons le résultat de toute façon.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Devrions-nous installer Open-Scap sur la machine cible.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Devrions-nous correspondre à une adresse mac basée sur un appareil même si son probablement un duplicata connu de VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Si nous correspondons à un appareil basé sur son DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Si nous correspondons à un périphérique basé sur son nom dhôte DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Si nous correspondons à un appareil basé sur son UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Si nous correspondons à un appareil basé sur son id dbus.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Devrions-nous correspondre à un appareil basé sur son fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Si nous correspondons à un appareil basé sur son nom dhôte et UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Si nous correspondons à un périphérique basé sur son nom dhôte et son id dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Si nous correspondons à un périphérique basé sur son nom dhôte et sa série.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Devrions-nous correspondre à un appareil basé sur son ip si nous avons un appareil existant sans données.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Devrions-nous correspondre à un appareil basé sur son ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Devrions-nous correspondre à un appareil basé sur son adresse mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Devrions-nous correspondre à un appareil basé sur sa série et son type.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Si nous correspondons à un appareil basé sur son numéro de série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Si nous correspondons à un appareil basé uniquement sur son SNMP sysName et série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Si nous correspondons à un appareil basé uniquement sur son SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Si nous correspondons à un appareil basé uniquement sur son nom dhôte.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Devrions-nous piéger lIP avant de tenter de lanalyser ? Si elle ne répond pas au ping, sautez ce périphérique.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Devrions-nous peupler le système externe à partir de nos appareils locaux.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Devrions-nous récupérer tous les noms DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Si nous effectuons un audit et que nous le soumettons (a/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Si nous testons pour SNMP en utilisant UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Devrions-nous tester SSH en utilisant le port TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Si nous testons pour WMI en utilisant le port TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Si nous désinstallons lagent (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Si nous utilisons le système ou le proxy de niveau utilisateur pour soumettre le résultat de la vérification.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Si nous utilisons la classe win32_product WMI (non recommandée par Microsoft) lors de la récupération du logiciel installé.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Si nous utilisons cette méthode pour authentifier les identifiants dutilisateur. Réglé sur <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Si nous utilisons cette méthode pour remplir un rôle dutilisateur. Le champ <code>use_auth</code> doit être fixé à <code>y</code> Pour utiliser ça. Réglé sur <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Si nous utilisons cette valeur pour faire correspondre les appareils externes et internes. Notre intégration par défaut utilise IP et UUID ici. Si lun ou lautre de ces dispositifs saccorde avec lautre, nous les considérons comme le même dispositif.';

$GLOBALS["lang"]['Show All'] = 'Afficher tout';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Barre latérale';

$GLOBALS["lang"]['Sidebar'] = 'Barre latérale';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapour';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'Heures douverture A';

$GLOBALS["lang"]['Site Hours A'] = 'Heures douverture A';

$GLOBALS["lang"]['site_hours_b'] = 'Heures douverture B';

$GLOBALS["lang"]['Site Hours B'] = 'Heures douverture B';

$GLOBALS["lang"]['size'] = 'Taille';

$GLOBALS["lang"]['Size'] = 'Taille';

$GLOBALS["lang"]['slaves'] = 'Esclaves';

$GLOBALS["lang"]['Slaves'] = 'Esclaves';

$GLOBALS["lang"]['Slovak'] = 'Slovaquie';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovaquie (République slovaque)';

$GLOBALS["lang"]['Slovenia'] = 'Slovénie';

$GLOBALS["lang"]['Slovenian'] = 'Slovénie';

$GLOBALS["lang"]['Smart Status'] = 'État intelligent';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Foncé';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'ID dentreprise Snmp';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'ID dentreprise Snmp';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nom de lentreprise Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nom de lentreprise Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Oid Snmp';

$GLOBALS["lang"]['Snmp Oid'] = 'Oid Snmp';

$GLOBALS["lang"]['snmp_timeout'] = 'Temps darrêt du snmp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Temps darrêt du snmp';

$GLOBALS["lang"]['snmp_version'] = 'Version Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Version Snmp';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Donc un script ne fonctionne pas sur un périphérique récalcitrant. Cest vrai. Les scripts pour Windows, Linux et MacOS acceptent tous largument de débogage. Cela peut être défini dans le script lui-même, ou fourni sur la ligne de commande. Exécutez le script en utilisant cette option définie à 5 et vous devriez voir dans quelle section du script léchec se produit. Par exemple';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Donc, à part un mot régulier, quelles autres options y a-t-il - je suis heureux que vous ayez demandé! Selon lAPI Open-Audit standard, nous avons plusieurs opérateurs pour le filtrage. Les opérateurs qui peuvent précéder la valeur sont';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Vous avez donc un problème de fournir des identifiants Open-Audit pour découvrir vos appareils. Jai une réponse. Bien sûr, la découverte est la meilleure chose depuis le pain coupé. Vous navez pas besoin de savoir à lavance <i>Quoi sur votre réseau</i>. Mais comment pouvez-vous extraire des données des appareils sans fournir didentifiants ?<br/><br/>Dans le cas des ordinateurs, une option facile est de copier le script daudit approprié aux machines cibles et de le mettre à exécuter sur un calendrier. Plus de détails sur le wiki. Les machines vont envoyer leurs données à Open-Audit sur ce planning, presque comme si vous faisiez une découverte. Lappareil exécute simplement le script daudit sur un calendrier (encore une fois, vous pouvez lire le script daudit) comme lutilisateur que vous lui dites et envoie la sortie au serveur. Il ny a pas de références.<br/><br/>Et maintenant nous avons des agents pour Windows. Les avantages dun agent installé sont';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Logiciels';

$GLOBALS["lang"]['Software'] = 'Logiciels';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Logiciel trouvé 7 derniers jours';

$GLOBALS["lang"]['Software Found Today'] = 'Logiciels trouvés aujourdhui';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Logiciel trouvé hier';

$GLOBALS["lang"]['software_key'] = 'Clé logicielle';

$GLOBALS["lang"]['Software Key'] = 'Clé logicielle';

$GLOBALS["lang"]['Software License Reporting'] = 'Rapports de licences logicielles';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Certaines collections peuvent être exécutées - requêtes, etc - voir ci-dessous.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Quelques exemples se trouvent au bas de cette page. Tous les paramètres comportent également une liste minimale des champs requis. Ils sont ci-dessous.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Certains de nos modèles supportent le nouveau passage à dataTables, en utilisant le traitement latéral du serveur. Ce massivley améliore les temps de charge.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Une autre erreur sest produite lors de la tentative de se lier au serveur LDAP. Il est contactable (cest-à-dire <i>Connexion</i> ci-dessus a fonctionné), mais pour une autre raison, il ny a pas de liaison. Vérifiez les journaux sur le serveur LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Quelque chose a mal tourné. Open-Audit ne peut pas lire <i>Organismes</i> tableau.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Quelque chose a mal tourné. Open-Audit ne peut pas lire <i>Rôles</i> tableau.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Parfois, la découverte sans agent ne correspond pas à votre cas dutilisation. Peut-être que vos PC ont des pare-feu serrés. Peut-être ne sont-ils pas sur le réseau quand vos découvertes sont programmées. Ils sont peut-être utilisés par des travailleurs éloignés. Quoi quil en soit, cest là quun agent peut aider. Installez-le sur la machine cible et il sera <i>enregistrement</i> avec votre serveur Open-Audit sur un calendrier et accepter les tâches. La tâche la plus courante que demande le serveur est que lagent se vérifie et envoie le résultat.';

$GLOBALS["lang"]['Sort'] = 'Tri';

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

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Spécifie une liste de cibles séparées par des virgules (aucun espace) à exclure de lanalyse. La liste que vous passez dans utilise la syntaxe Nmap normale, de sorte quelle peut inclure les noms dhôte, les blocs réseau CIDR, les plages doctets, etc.';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Étape 1: Examen de la documentation';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Étape 2 : Examen de la mise en œuvre et de lefficacité';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Démarrer un navigateur Web et aller à';

$GLOBALS["lang"]['started_date'] = 'Date de début';

$GLOBALS["lang"]['Started Date'] = 'Date de début';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'À compter de juin 2018 Google a mis en place un modèle de tarification à la carte pour les API de la plateforme Google Maps. Auparavant, la plupart des utilisateurs avec une utilisation modérée pouvaient utiliser Google Maps, qui sont intégrés dans opCharts et Open-Audit Professional/Enterprise, gratuitement. Googles nouvelle politique est décrit ici,';

$GLOBALS["lang"]['Starts With'] = 'Commence par';

$GLOBALS["lang"]['state'] = 'État';

$GLOBALS["lang"]['State'] = 'État';

$GLOBALS["lang"]['Stats'] = 'Statistiques';

$GLOBALS["lang"]['status'] = 'État';

$GLOBALS["lang"]['Status'] = 'État';

$GLOBALS["lang"]['Storage'] = 'Stockage';

$GLOBALS["lang"]['storage_count'] = 'Nombre de stockage';

$GLOBALS["lang"]['Storage Count'] = 'Nombre de stockage';

$GLOBALS["lang"]['Storage area network'] = 'Réseau de zones de stockage';

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

$GLOBALS["lang"]['Submit Online'] = 'Soumettre en ligne';

$GLOBALS["lang"]['Submitted From'] = 'Présenté par';

$GLOBALS["lang"]['Subnet'] = 'Sous-réseau';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Découvertes du sous-réseau';

$GLOBALS["lang"]['Subscription ID'] = 'Numéro dabonnement';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Résumés sont une requête unique contre la base de données avec un <i>groupe par</i> commande. En utilisant cette méthode simple, nous pouvons facilement créer un résumé pour pratiquement nimporte quel attribut.<br/><br/>Nous navons plus besoin dun rapport distinct pour chaque <i>type</i> dun dispositif. Nous avons maintenant simplement un résumé que les groupes <i>dispositifs. type</i> et montre le résultat. Vous pouvez ensuite cliquer sur un type donné dans la liste et voir les appareils correspondants. Dans ce cas, un résumé remplace (potentiellement) 78 déclarations (il existe 78 types dappareils).<br/><br/>Un résumé est différent dune requête en ce sens quun résumé est conçu pour regrouper des éléments par un attribut donné <i>cliquez sur</i> lien vers les appareils réels. Une requête est simplement une liste déléments sans autres liens. Comme ci-dessus - celui dun résumé comme un ensemble <i>rapport + sous-rapport</i>, alors quune requête nest quun seul rapport.<br/><br/>Les résumés ont un modèle de collecte différent des autres ressources de Open-Audit. Ce modèle montre le Sommaire comme vous vous y attendez et montre également des boutons avec le nombre dautres ressources. Cette page est conçue pour être la Page daccueil de Open-Audit.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Les résumés sont conçus pour regrouper les éléments par une colonne de correspondance particulière, puis pour fournir un lien vers des appareils individuels. Dans les versions précédentes dOpen-Audit, il sagirait de deux éléments différents - un rapport et un sous-rapport. Nous les avons maintenant regroupés dans ce que nous appelons un résumé.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Les résumés fournissent des capacités de rapport de forage. Simple, intuitif, puissant.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Les résumés prennent les mêmes arguments que les requêtes.';

$GLOBALS["lang"]['Summary'] = 'Résumé';

$GLOBALS["lang"]['Sunday'] = 'Dimanche';

$GLOBALS["lang"]['supplier'] = 'Fournisseur';

$GLOBALS["lang"]['Supplier'] = 'Fournisseur';

$GLOBALS["lang"]['Support'] = 'Appui';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Les types pris en charge sont <code>subnet</code>, <code>seed</code> et <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Soutient la conformité aux exigences légales et réglementaires';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Vérifications de surveillance : Vérifications annuelles pour maintenir la certification';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Îles Svalbard et Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suède';

$GLOBALS["lang"]['Sweden'] = 'Suède';

$GLOBALS["lang"]['Swedish'] = 'Suédois';

$GLOBALS["lang"]['switch_device_id'] = 'Indicatif du périphérique de commutation';

$GLOBALS["lang"]['Switch Device ID'] = 'Indicatif du périphérique de commutation';

$GLOBALS["lang"]['switch_port'] = 'Changer de port';

$GLOBALS["lang"]['Switch Port'] = 'Changer de port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suisse, Confédération suisse';

$GLOBALS["lang"]['Symptom'] = 'Symptôme';

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

$GLOBALS["lang"]['Table'] = 'Tableau';

$GLOBALS["lang"]['tag'] = 'Balise';

$GLOBALS["lang"]['Tag'] = 'Balise';

$GLOBALS["lang"]['tag_1'] = 'Étiquette 1';

$GLOBALS["lang"]['Tag 1'] = 'Étiquette 1';

$GLOBALS["lang"]['tag_2'] = 'Étiquette 2';

$GLOBALS["lang"]['Tag 2'] = 'Étiquette 2';

$GLOBALS["lang"]['tag_3'] = 'Étiquette 3';

$GLOBALS["lang"]['Tag 3'] = 'Étiquette 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Étiquettes';

$GLOBALS["lang"]['Tags'] = 'Étiquettes';

$GLOBALS["lang"]['Tags :: '] = 'Étiquettes :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taïwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadjikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Prendre note de tous les résultats et de chaque action, selon le cas.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanie';

$GLOBALS["lang"]['Target Computer'] = 'Ordinateur cible';

$GLOBALS["lang"]['task'] = 'Tâche';

$GLOBALS["lang"]['Task'] = 'Tâche';

$GLOBALS["lang"]['tasks'] = 'Tâches';

$GLOBALS["lang"]['Tasks'] = 'Tâches';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Les tâches peuvent être lun de plusieurs types distincts : base de données, découverte, rapport, requête, résumé ou collecteur.';

$GLOBALS["lang"]['tcp_ports'] = 'Ports Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Ports Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Détails techniques';

$GLOBALS["lang"]['tenant'] = 'Locataire';

$GLOBALS["lang"]['Tenant'] = 'Locataire';

$GLOBALS["lang"]['Tenant ID'] = 'Identification du locataire';

$GLOBALS["lang"]['Tennant ID'] = 'Numéro didentification';

$GLOBALS["lang"]['ternary'] = 'Terne';

$GLOBALS["lang"]['Ternary'] = 'Terne';

$GLOBALS["lang"]['Test 1'] = 'Essai 1';

$GLOBALS["lang"]['Test 2'] = 'Essai 2';

$GLOBALS["lang"]['Test 3'] = 'Essai 3';

$GLOBALS["lang"]['Test Email'] = 'Tester le courriel';

$GLOBALS["lang"]['test_minutes'] = 'Procès-verbaux dessai';

$GLOBALS["lang"]['Test Minutes'] = 'Procès-verbaux dessai';

$GLOBALS["lang"]['test_os'] = 'Essai Os';

$GLOBALS["lang"]['Test Os'] = 'Essai Os';

$GLOBALS["lang"]['test_subnet'] = 'Sous-réseau dessai';

$GLOBALS["lang"]['Test Subnet'] = 'Sous-réseau dessai';

$GLOBALS["lang"]['tests'] = 'Essais';

$GLOBALS["lang"]['Tests'] = 'Essais';

$GLOBALS["lang"]['Text'] = 'Texte';

$GLOBALS["lang"]['Thai'] = 'Thaï';

$GLOBALS["lang"]['Thailand'] = 'Thaïlande';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Merci de commencer votre voyage avec le meilleur outil de découverte et dinventaire autour.';

$GLOBALS["lang"]['Thanks to'] = 'Grâce à';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Cest ça ! Vous venez déditer les attributs de autant dappareils que vous en avez besoin.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Les <i>Rôles</i> endpoint vous permet de gérer lensemble des permissions (Créer, Lire, Mettre à jour, Supprimer) qui sont accordées aux utilisateurs et appliquées à chaque endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'LAPI utilise un cookie. Vous pouvez demander un cookie en envoyant un POST à lURL ci-dessous, contenant les attributs et les valeurs du nom dutilisateur et du mot de passe:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Le domaine Active Directory pour récupérer une liste de sous-réseaux.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Le serveur Active Directory pour récupérer une liste de sous-réseaux.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Le paramètre Applications vous permet de définir une application que vous pouvez ensuite associer à un ou plusieurs appareils.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Le paramètre Attributs vous permet dajouter des valeurs personnalisées à différents attributs dans Open-Audit, pour le moment cette fonctionnalité fonctionne sur les attributs Classe, Environnement, État et Type des périphériques, lattribut Type pour les emplacements et les orgs ainsi que la catégorie Menu pour les requêtes. Si vous visualisez un élément de lun des types prvieux (disons afficher un Lkocation), vous remarquerez que lattribut Type doit être sélectionné dans une boîte déroulante. Cest là que ces valeurs sont stockées. Par conséquent, si vous souhaitez ajouter un nouveau Type à choisir pour un Emplacement, ajoutez-le en utilisant la fonctionnalité Attributs.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La métrique Automatable saisit la réponse à la question <strong>Un attaquant peut-il automatiser les événements dexploitation pour cette vulnérabilité sur plusieurs cibles?</strong> basé sur les étapes 1 à 4 de la chaîne dabattage. Ces étapes sont la reconnaissance, larmement, la livraison et lexploitation (Non défini, Non, Oui).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'Le CVE a été marqué comme étant invalide ou retiré de la liste des CVE. Il reste dans le NVD mais est exclu des résultats de recherche par défaut.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'Le CVE a été publié sur la liste des CVE et inclus dans lensemble de données du NVD. ingestion initiale seulement.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'Le CVE a été mis à jour après lanalyse initiale. Les données sur lenrichissement en NVD peuvent avoir été révisées.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Lidentificateur CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'Le CVE est activement enrichi de scores CVSS, de classifications CWE, détiquettes de référence et dapplicabilité CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'À lheure actuelle, la priorité nest pas accordée à lenrichissement en raison de contraintes de ressources ou dautres raisons.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'Le CVE est en attente denrichissement par les analystes du NVD. Pas encore de métadonnées détaillées.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Le Cloud qui possède cet article. Liens vers <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Le type Device Seed Discovery est la nouvelle méthode très efficace pour le rampage en réseau, vous donnant la possibilité de cibler votre réseau aussi étroitement ou aussi largement que vous avez besoin. Cest rapide, ça marche et cest génial.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Le balayage de découverte Les options que nous expédions sont détaillées dans le tableau ci-dessous. Comme ci-dessus, les utilisateurs dEnterprise peuvent en créer plus ou modifier les articles expédiés.';

$GLOBALS["lang"]['The Elevated User query'] = 'La requête de lutilisateur élevé';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'La fonction Executables scanne le disque dun appareil dans le cadre de laudit et vérifie que chaque fichier exécutable est connu du gestionnaire de paquets. Parce quil utilise le gestionnaire de paquets, la fonctionnalité sapplique uniquement aux périphériques cibles Linux, et plus encore, seulement les distributions basées sur rpm ou deb. Tout ce qui est basé sur Redhat ou Debian devrait fonctionner.';

$GLOBALS["lang"]['The FROM'] = 'Les';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Le Groupe a utilisé la base de référence. Liens vers <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'LID de la table des périphériques (le nom des périphériques sera affiché) de la NTU à cette fin de la connexion. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Lidentification de la politique de référence importée.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'LID de la table des lieux (le nom de lieu sera affiché) de cette fin de connexion. Liens vers <code>locations.id</code>. Lemplacement A est généralement le <code>FROM</code> lieu.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'LID de la table des lieux (le nom de lieu sera affiché) de cette fin de connexion. Liens vers <code>locations.id</code>. Lemplacement B est généralement le <code>TO</code> lieu.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'LID de lappareil associé (le cas échéant). Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Lidentité de la découverte associée. Lié à <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'LID de lélément du type associé.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Lidentité de cet org. parent. Lié à <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'LID fourni par le fournisseur.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'LID récupéré dune découverte Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Ladresse IP de ce collecteur utilisé pour communiquer avec le serveur.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'LIP de lappareil pour démarrer une découverte de graine avec.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'LIP de linterface externe.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'LIP de linterface interne.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Le processus de certification ISO/IEC 27001 et ses éléments clés.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Le FSI ou Telco fournissant ce lien.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Le dossier JSON de Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Le dossier JSON du flux NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LOU LDAP de cet utilisateur (si LDAP est utilisé).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Le serveur LDAP na pas pu être connecté. Du tout. Vérifiez quil est pingable depuis le serveur Open-Audit. Vérifiez que le bon port est ouvert au serveur Open-Audit. Une nmap du serveur Open-Audit va lafficher. Remplacez votre IP de serveurs LDAP par $ip. Essayez :<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Le type de serveur LDAP est invalide. Il devrait être soit <i>répertoire actif</i> ou <i>ouvertldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Le serveur LDAP a été connecté et les identifiants dutilisateur acceptés pour lier.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linstallateur Linux Open-Audit testera et, si nécessaire, installera les dépendances Open-Audits à partir de votre dépôt de distributions, y compris la configuration du Nmap SetUID. Ceci est requis pour la détection SNMP (UDP 161) par un utilisateur non root. Ceci est supporté sur RedHat/CentOS et Debian/Ubuntu. Si vous devez installer manuellement Nmap:<br/><br/>Pour RedHat/CentOS faire (NOTE - si vous mettez à niveau à laide de yum, vous devrez réappliquer cette <i>Chmod</i> réglage).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Lemplacement qui contient ce réseau. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Le statut de base assigné par la NVD.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'LInstitut national des normes et de la technologie est lorganisme fédéral de technologie. Ils font progresser la technologie officielle, la science de la mesure et les normes.';

$GLOBALS["lang"]['The Network to Discover'] = 'Le réseau à découvrir';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Le calendrier Nmap préréglé.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Le système dexploitation de ce paquet doit être indiqué en regard. Cest tout. Utilisez le signe % en tant que wildcard. Sera testé contre os_group, os_family et os_name dans cet ordre.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'LAPI Open-Audit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Lidentifiant Open-Audit du nuage lié. Liens vers <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Le Sud ouvert Le code du serveur informatique a été supprimé dans ce fichier.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Le Sud ouvert Le code du serveur informatique a été supprimé dans cette fonction.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Lécosystème OpenSCAP offre de nombreux outils pour aider les administrateurs et les vérificateurs à évaluer, mesurer et appliquer les niveaux de référence en matière de sécurité, y compris une grande variété de guides de durcissement et de niveaux de référence de configuration élaborés par la communauté open source, en sassurant que vous pouvez choisir une politique de sécurité qui correspond le mieux aux besoins de votre organisation, quelle que soit sa taille.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Le projet OpenSCAP est une collection doutils libres pour la mise en œuvre et lapplication de cette norme, et a reçu la certification SCAP 1.2 du NIST en 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'LOrganisation qui possède ce point. Liens vers <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Lidentificateur de processus de la découverte associée courante.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Le positon RU du haut de cet appareil.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'La fonction Racks est utilisée pour gérer et visualiser lutilisation de votre rack avec une organisation, emplacement, bâtiment, étage, chambre et ligne.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Le SCAP est une spécification pour exprimer et manipuler les données de sécurité de manière normalisée. SCAP utilise plusieurs spécifications individuelles de concert pour automatiser la surveillance continue, la gestion de la vulnérabilité et lévaluation de la conformité des politiques de sécurité';

$GLOBALS["lang"]['The SELECT'] = 'Le SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'La section SELECT de la requête doit utiliser la notation de point complet et aussi demander le champ avec son nom de point complet. IE - SELECT appareils. id AS `devices.id`. Chaque champ doit être sélectionné de cette manière pour permettre le filtrage des attributs latéraux de linterface graphique.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'La section SELECT de votre SQL doit contenir des colonnes entièrement qualifiées et spécifier certaines colonnes.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La chaîne de la communauté SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'La phrase dauthentification SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protocole dauthentification SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Le mot de passe SNMP v3 Vie privée.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Le protocole SNMP v3 de confidentialité.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Le niveau de sécurité SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Le nom de sécurité SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Le contexte SNMPv3 ID moteur (facultatif).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Le contexte SNMPv3 Nom (facultatif).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Le SQL ne peut pas contenir <strong>OÙ @filter OU</strong>. Que SQL ne sera pas exécuté, cependant <strong>OÙ @filter ET</strong> les requêtes sont autorisées.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Les requêtes SQL utilisées dans Open-Audit nécessitent lutilisation du caractère backtick - ` et NON du guillemet standard pour les champs. Sur la plupart des claviers US Windows, la touche backtick est située en haut à gauche du clavier avec le tilde ~. Sur un clavier Mac américain, la touche backtick se trouve à côté de la touche SHIFT. La citation unique standard est toujours utilisée pour joindre des valeurs comme lillustrent les exemples ci-dessous.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'La requête SQL est essentiellement divisée en trois parties.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'La fonctionnalité Standards dans Open-Audit vous permet, à lavance, de remplir les questions que les auditeurs doivent remplir lors de la certification ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'LURL du système externe.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'LURL de votre Open-Audit Serveur que ce Collector signalera à (pas de barre oblique en arrière).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'LURL à laquelle les scripts daudit doivent soumettre leur résultat.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Le paramètre Utilisateur vous permet de gérer les comptes utilisateurs dans Open-Audit.';

$GLOBALS["lang"]['The WHERE'] = 'Lendroit';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'La section WHERE de votre SQL <em>doit</em> contenant';

$GLOBALS["lang"]['The Windows'] = 'Les fenêtres';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Le journal de Windows peut dire ce qui suit';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Le compte doit avoir un mot de passe; WMI nautorise pas les mots de passe vides.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Le mot de passe du compte ne doit PAS contenir \" (double guillemets). Cest parce que cscript (et wscript) ne peut pas analyser les valeurs dargument contenant des guillemets doubles. Ils sont simplement dépouillés. Non (avant de demander) lévasion ne fonctionnera pas. Cest une limitation de cscript et rien à voir avec Open-Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Le nom complet de cet utilisateur.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Ladresse du serveur Open-Audit soumet la page.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Ladministrateur a fourni des justificatifs didentité qui ont été utilisés avec succès pour se lier à LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Ladministrateur a fourni des identifiants pour se lier au serveur LDAP, mais ils nont pas été acceptés par le sevrer LDAP. Vérifiez les identifiants sur le serveur LDAP, puis vérifiez (ou réinitialisez-les) dans lentrée Open-Audit LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Lagent et le serveur sont également suffisamment intelligents pour se mettre à jour automatiquement lagent si une version plus récente est installée sur le serveur (par exemple après la mise à jour dOpen-Audit).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Lagent doit télécharger une nouvelle copie du script daudit, lexécuter et soumettre le résultat au serveur.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Lapplication crée ici des brouillons daudit temporaires, les copie aux machines cibles, puis les supprime.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La base de référence associée. Liens vers <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La découverte associée (si nécessaire). Liens vers <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Lattribut à tester (de <code>devices</code> tableau).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Lattribut à tester (doit correspondre à un nom de champ externe den bas).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Les attributs pour les options de numérisation de découverte sont comme ci-dessous.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Le script daudit sur lequel fonder vos personnalisations.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Le script daudit utilisera le tableau fichiers[ ] et récupérera les détails du fichier.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Les scripts daudit acceptent tous un argument de débogage. Vous pouvez exécuter le script en utilisant cela et voir plus en détail quel est le problème. Et si vous ne pouvez pas comprendre - cest pour cela que nous sommes ici! Ouvrez un dossier de soutien et nous allons faire tourner les choses en un rien de temps.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Le chemin de base à partir duquel rechercher Utilisateurs.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Les étapes ci-dessous ne sont pas la faute ou unique à Open-Audit et affecterait <strong>une</strong> application de découverte en utilisant WMI et/ou Windows à distance.';

$GLOBALS["lang"]['The benchmark type.'] = 'Le type de référence.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Le bâtiment du rack est situé dans.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Le nombre calculé dappareils à créer à lextérieur.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Le nombre calculé dappareils à créer dans Open-Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'LID client est lID dune application Azure Active Directory. Le secret client est la clé que vous donnez à cette application.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Le collecteur est essentiellement une installation complète de Open-Audit dans <i>collecteur</i> mode. Le collecteur est conçu pour effectuer la découverte sur le réseau dans lequel il est situé. Il ne se limite pas à ce réseau, mais idéalement il serait essentiellement un collecteur par sous-réseau, le cas échéant. Le collecteur est entraîné sur un planning par le serveur et lance la découverte sur le réseau comme spécifié.<br/>Quand vous êtes debout Seul le mode Collector agit comme un serveur indépendant, en transmettant simplement tous les appareils trouvés au serveur principal.<br/><br/>Une fois installé et configuré, le contrôle du collecteur est effectué sur le serveur (pas en mode Stand Alone).<br/><br/>Les seuls ports réseau requis entre le collecteur et le serveur sont 80 ou 443 (connection TCP établie du collecteur au serveur). La base de données Open-Audit nest pas (et ne peut pas) partagée entre ces installs.<br/><br/>Par défaut, le collecteur (pas en mode Stand Alone) demandera au serveur toutes les tâches de découverte toutes les 5 minutes (vous pouvez configurer cela sur le serveur pour les nouveaux collecteurs en utilisant lélément de configuration collector_check_minutes) pour que toutes les tâches de découverte pour le collecteur soient programmées pour 0, 5, 10, 15, etc minutes.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Le collecteur est essentiellement une installation complète de Open-Audit dans <i>collecteur</i> mode. Ce mode réduirait les fonctionnalités visibles afin de simplifier et de cibler lapplication. Il est conçu pour recueillir des informations sur les réseaux et appareils locaux, où le pare-feu et/ou la traversée du réseau est un problème du serveur.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'LIP interne des collecteurs utilisé lorsquil lance une découverte.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Le nom de la colonne de la table étrangère. Doit être lune des catégories suivantes: classe, environnement, état, type ou menu_catégorie.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'La commande exécutée sur le périphérique cible ou le code du serveur Open-Audit exécuté pendant la découverte.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configuration de votre cluster peut être : <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> ou en blanc.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Le mot de passe didentification. Si les identifiants sont une clé SSH, cest le mot de passe utilisé pour déverrouiller la clé et est facultatif.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Les identifiants fournis par lutilisateur ont échoué.';

$GLOBALS["lang"]['The credentials username.'] = 'Le nom dutilisateur didentification.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Date et heure actuelles dans le format: Y-m-d Cest vrai.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'La date actuelle en format Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Létat actuel du Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Létat actuel de la découverte.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Le tableau de bord qui sera affiché par défaut pour cet utilisateur. Liens vers <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Les données stockées dans la base de données ne sont pas affichées dans lapplication traduite. Nous laissons les données telles quelles. Cependant, rien nempêche lutilisateur de changer le nom (par exemple) dun élément de la base de données dans votre langue.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Les données que vous entrez seront utilisées dans une <code>LIKE</code> clause, pas (selon lAPI) <code>equals</code> clause. Un autre exemple - si vous entrez <code>comput</code>, il retournerait toujours tous les ordinateurs. Et parce que nous utilisons <code>LIKE</code> clause, il est insensible aux cas.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Le schéma de base de données peut être trouvé dans lapplication si lutilisateur a la base de données::lire la permission en allant au menu: Admin -> Base de données ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La version de la base de données et la version Web sont incohérentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La date dexpiration de la licence.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La date à laquelle le logiciel est arrêté par le fabricant. Habituellement remplacé par une version plus récente. Lentretien peut encore être disponible.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La date à laquelle le logiciel ne reçoit plus de mises à jour et est effectivement arrêté. Lentretien est interrompu.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La date à laquelle cet article a été modifié ou ajouté (lecture seule). NOTE - Cest lhorodatage du serveur.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Date/heure à laquelle ce résultat a été créé.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Le jour du mois où cette tâche doit être exécutée (* pour chaque jour).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Le jour de la semaine où cette tâche doit être exécutée (* pour chaque jour).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Le niveau de débogage (sera en sortie pour commander la fenêtre invite). Moins signifie moins de sortie avec 0 étant pas de sortie.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Loption de recherche par défaut est lensemble UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La langue par défaut attribuée à tout utilisateur créé par cette méthode.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Lappareil doit répondre à un ping Nmap avant dêtre considéré en ligne.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Lappareil dans Open-Audit. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Le lien direct pour le script est';

$GLOBALS["lang"]['The email address of the reciever'] = 'Ladresse e-mail du destinataire';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Le binaire dentreprise de FirstWave est requis pour une licence. Veuillez télécharger Open-Audit depuis';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Lensemble de la base de référence associée à ce résultat est de.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'La vulnérabilité exploitée peut affecter des ressources au-delà de lautorité de sécurité de la composante vulnérable. Cela signifie généralement quun privilège ou une limite de confiance est franchi (par exemple, séchapper dun conteneur à lOS hôte).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'La vulnérabilité exploitée na dincidence que sur les ressources de la même autorité de sécurité que la composante vulnérable. En dautres termes, les actions de lagresseur restent à lintérieur de la limite de confiance initiale.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Lidentifiant demplacement de référence externe. Généralement peuplé par des audits Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Les champs associés à une intégration sont stockés dans la base de données comme un tableau dobjets JSON. Chaque champ possède les attributs suivants :';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La première fois que Open-Audit a récupéré les détails de cet appareil.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Le plancher du rack est situé sur.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Le tableau étranger à référence. Doit être lun des: appareils, emplacements, orgs ou requêtes.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Le format de vos données doit être dans la forme';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Le format utilisé pour la sortie à envoyer par courriel.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La colonne entièrement qualifiée sur laquelle se regrouper. REMARQUE: Lorsque type = trafic, cela représente lidentifiant de requête rouge.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Le nom entièrement qualifié est retourné par le système externe. EG: pour NMIS nous utilisons la configuration. rôle Type.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Le tableau.colonne entièrement qualifié. Plusieurs peuvent être fournis, séparés par une virgule (sans espaces).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La requête SQL générée pour tester cette vulnérabilité. Ce champ peut être modifié pour corriger la requête au besoin.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Le groupe de dispositifs sur lequel la ligne de base a été utilisée.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Le groupe qui fournit une liste de dispositifs pour lintégration. Liens vers <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Lheure du jour où cette tâche doit être exécutée (* pour chaque heure).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Lidentité du périphérique lié. Liens vers <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La colonne didentification (entier) dans la base de données (lisez seulement).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Limportance de ce niveau de référence (pas encore utilisé).';

$GLOBALS["lang"]['The integer of severity.'] = 'Lentier de gravité.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'La valeur interne, reformatée dans ce format.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Ladresse ip de la méthode Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La langue pour traduire linterface web dans pour lutilisateur.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La dernière date et lheure dexécution de cet article (lecture seule).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La dernière fois quOpen-Audit a récupéré les détails de cet appareil.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La dernière fois que ces repères ont été exécutés.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La dernière fois que cette intégration a été réalisée.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Le paramètre de licence vous permet de suivre le nombre de licences trouvées sur vos appareils.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Le numéro de ligne attribué par le fournisseur à la ligne à cette fin de la connexion.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Lendroit où se trouve le rack. Liens vers <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Ladresse des lieux.';

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

$GLOBALS["lang"]['The locations state.'] = 'Létat des lieux.';

$GLOBALS["lang"]['The locations suburb.'] = 'La banlieue.';

$GLOBALS["lang"]['The locations suite.'] = 'La suite des lieux.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'La logique pour lappariement des périphériques est contenue dans le fichier devices_helper.php, qui sur une installation Linux peut être trouvé ici';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Les paramètres dautorisation par défaut de la machine ne permettent pas lactivation locale de lapplication COM Server avec';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Le poids physique maximum (en KGs) ce support peut tenir.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Le maximum total de BTUs de ce rack est évalué pour.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Les attributs minimum requis pour les attributs sont';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'La minute de lheure où cette tâche doit être exécutée (* pour chaque minute).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Le mois de lannée où cette tâche doit être exécutée (* pour chaque mois).';

$GLOBALS["lang"]['The name given to this item.'] = 'Le nom donné à cet article.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Le nom donné à cet article. Idéalement, il devrait être unique.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Le nom donné à cet utilisateur (utilisé pour se connecter). Idéalement, il devrait être unique.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Le nom du nuage associé (si nécessaire).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Le nom du logiciel, tel que vérifié par Open-Audit. Utilisez le signe % en tant que wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Le nom de lutilisateur qui a changé ou ajouté cet article (lecture seule).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Le nom fourni par le fournisseur.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Le réseau au format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Le sous-réseau réseau pour exécuter la découverte.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Le nouvel Agent exécute une version PowerShell de lancien script daudit en préparation de lamortissement de VBScript (oui, il arrive).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Le nombre de RUs que ce dispositif occupe.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Nombre demplacements associés. Liens vers <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Le nombre de réseaux associés. Liens vers <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Le nombre dappareils audités dans ce nuage. Liens vers <code>devices.cloud_id</code> et <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravités critiques détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Le nombre de dispositifs trouvés par cette découverte.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Le nombre de dispositifs dans le groupe associé.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Le nombre de périphériques dans ce cloud avec un état de fonctionnement. Liens vers <code>devices.cloud_id</code> et <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Le nombre de périphériques dans ce nuage avec un état darrêt. Liens vers <code>devices.cloud_id</code> et <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Le nombre dappareils dans ce nuage. Liens vers <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Le nombre dappareils sur lesquels cette référence sera exécutée. Dérivés <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Le nombre dappareils pour limiter cette découverte.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravité élevée détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de faible gravité détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités de gravité moyenne détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Le nombre de licences achetées.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Le nombre de secondes pour essayer de communiquer avec lIP cible.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Le nombre de vulnérabilités sans gravité détenues par FirstWave (pas dans votre base de données).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Le décalage est le nombre dappareils que vous souhaitez retourner des données.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'La seule autorisation / nom de politique requise (dans notre test) est';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La colonne secondaire facultative. REMARQUE: Lorsque type = trafic, cela représente lidentifiant de requête jaune.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La troisième colonne facultative. REMARQUE: Lorsque type = trafic, cela représente lidentifiant de requête vert.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Lordre de recherche de linformation est snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Lorientation de cet appareil.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Le mot de passe (si lutilisateur nutilise pas le script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Le mot de passe pour lattribut dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Le mot de passe utilisé pour accéder au système externe.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Le chemin vers le fichier ou le répertoire.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Le chemin vers le fichier ou le répertoire. Les répertoires devraient finir par une barre oblique.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La profondeur physique (en CM) de la grille.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'La hauteur physique (en CM) de la grille.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Le poids physique (en KGs) de la grille à lheure actuelle.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Le poids physique (en KGs) de la grille lorsquelle est vide.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'La largeur physique (en CM) du rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Le pod (le cas échéant) dont ce rack fait partie.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Le circuit électrique auquel ce rack sattache.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La table de base de données primaire sur laquelle baser ce widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'La principale méthode dautorisation (ce quun utilisateur peut faire) est maintenant basée sur les rôles des utilisateurs. Les rôles sont définis par admin, org_admin, reporter et utilisateur par défaut. Chaque rôle a un ensemble de permissions (Créer, Lire, Mettre à jour, Supprimer) pour chaque paramètre. Les rôles standard tels que expédiés devraient couvrir 99,9 % des cas dutilisation. La possibilité de définir des rôles supplémentaires et de modifier des rôles existants est activée dans Open-Audit Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Lidentificateur de processus de cet élément de file dattente.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Le processus qui a été utilisé pour récupérer les détails sur lappareil';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Le but de cette page de licence est dénumérer les produits et licences inclus dans les produits commerciaux Firstwave, y compris les produits basés sur des œuvres open source. Open-Audit est autorisé depuis Firstwave sous AGPLv3 ou plus tard avec des fonctionnalités Enterprise et Professional sous licence commerciale. Open-Audit lorsque téléchargé depuis FirstWave peut inclure les bibliothèques et projets suivants, qui sont fournis sans modification et sous licence comme indiqué:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La requête qui fournit une liste de périphériques pour lintégration. Liens vers <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Le numéro dactif du rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Létiquette de lactif du rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'Le code à barres.';

$GLOBALS["lang"]['The rack model.'] = 'Le modèle de rack.';

$GLOBALS["lang"]['The rack serial.'] = 'La série de racks.';

$GLOBALS["lang"]['The rack series.'] = 'La série rack.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Le rack où se trouve cet appareil. Liens vers <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Le processus recommandé pour traiter et corriger les vulnérabilités de sécurité identifiées. Cela implique généralement dappliquer des correctifs, des mises à jour ou dautres mesures pour éliminer le risque que posent les vulnérabilités.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'La notation de domaine régulière de votre répertoire. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Les propriétés demandées doivent être dans une liste séparée par des virgules. Les propriétés doivent être entièrement qualifiées - ie, system.hostname (pas seulement hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Le résultat de la commande.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La chambre où se trouve le rack.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La rangée où se trouve le rack.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'La recherche de groupe sur le serveur LDAP a échoué. Vérifiez les journaux du serveur LDAP. Avez-vous créé ces groupes (pour les rôles et les orgs) sur le serveur LDAP et leur a assigné des utilisateurs LDAP ?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La clé secrète utilisée conjointement avec votre clé API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La date de fin de vie du logiciel.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La date de fin de service du logiciel.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La colonne de base de données spécifique du tableau de base de données spécifié.';

$GLOBALS["lang"]['The specific database table.'] = 'La table de base de données spécifique.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Les options standard de chronométrage Nmap. Précédemment fixé à T4 (aggressive).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Les options standard de chronométrage Nmap. Nous utilisons généralement -T4 (Agressive) comme cela est recommandé pour une connexion haut débit ou Ethernet décente.';

$GLOBALS["lang"]['The status of this integration'] = 'Le statut de cette intégration';

$GLOBALS["lang"]['The status of this queued item.'] = 'Létat de cet élément en attente.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Les étapes ci-dessous décrivent le processus.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'LIP cible à laquelle cette entrée se réfère (le cas échéant).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Lordinateur cible à vérifier. \".\" signifie localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Le modèle du lien à générer par ligne de résultat.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Le texte du bas du graphique dans un graphique en ligne (seulement).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Le texte affiché.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Lhorodatage après quoi, cette tâche devrait sexécuter. Par exemple, exécuter une tâche après le 1er juin 2017 à 10h, <code>2017-06-01 09:59:00</code>. Cette valeur devrait être nulle (cest-à-dire 09 et non 9). Cette valeur par défaut est <code>2000-01-01 00:00:00</code> ce qui signifie par défaut, une tâche programmée sexécutera à la prochaine heure dexécution programmée.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Les top 10, 100 ou 1000 (ou aucun) ports TCP couramment utilisés selon Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Les top 10, 100 ou 1000 (ou aucun) ports UDP couramment utilisés selon Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'La sortie totale de BTU par ce rack.';

$GLOBALS["lang"]['The type of device.'] = 'Le type dappareil.';

$GLOBALS["lang"]['The type of organisation.'] = 'Le type dorganisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Le type de rack (calcul, alimentation, réseau, etc.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Le type de tâche à exécuter. Lun de: base de référence, référence, découverte de nuage, découverte, intégration, rapport, requête.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Le type dintégration (généralement nommé daprès le système externe).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Létat non filtré signifie quun port est accessible, mais Nmap est incapable de déterminer sil est ouvert ou fermé. Seul lanalyse ACK, qui est utilisé pour mapper les règles du pare-feu, classe les ports dans cet état. Scanner des ports non filtrés avec dautres types de scan tels que Window Scan, SYN Scan ou FIN Scan, peut aider à résoudre si le port est ouvert.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Lidentificateur unique de ce serveur.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Le compte utilisateur que ce collecteur utilise. Liens vers <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Lutilisateur dans Active Directory / OpenLDAP doit être un membre direct des groupes Open-Audit requis pour les rôles et les orgs. Un membre dun groupe qui est membre dun autre groupe qui est membre du groupe Open-Audit ne fonctionnera pas.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Lutilisateur est en LDAP et ses identifiants sont valides, mais nest dans aucun des groupes Open-Audit LDAP pour Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Lutilisateur est en LDAP et ses identifiants sont valides, mais nest dans aucun des groupes Open-Audit LDAP pour les rôles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Lutilisateur est dans LDAP et leurs identifiants sont valides, mais nest dans aucun des groupes LDAP Open-Audit requis.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Lutilisateur est dans le groupe LDAP qui correspond à cet Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Lutilisateur est dans le groupe LDAP qui correspond à ce rôle.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Lutilisateur nest pas dans le groupe LDAP qui correspond à cet Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Lutilisateur nest pas dans le groupe LDAP qui correspond à ce rôle.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Lutilisateur qui a été spécifié existe dans LDAP, mais Open-Audit nest pas configuré pour consommer les groupes LDAP pour les rôles et cet utilisateur nexiste pas dans Open-Audit. Soit sélectionner <i>Utiliser LDAP pour les rôles</i> sur lOpen-Audit LDAP Écran serveur ou créez cet utilisateur dans Open-Audit et assignez des rôles et des orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Nom dutilisateur (si lutilisateur nutilise pas le script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Le nom dutilisateur utilisé pour accéder au système externe.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Les détails des utilisateurs nont pas été récupérés de LDAP. Vérifiez les journaux du serveur LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Les détails des utilisateurs ont été récupérés de LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Ladresse électronique des utilisateurs.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Les heures habituelles de fonctionnement sur ce site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'La valeur attribuée à lélément.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'La valeur qui est stockée pour cet élément particulier.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Le nom du vendeur selon les entrées CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Le vendeur a pris du CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Le répertoire web sur lhôte qui Open-Audit est installé (qui nécessite une barre oblique).';

$GLOBALS["lang"]['The widget at position '] = 'Le widget en position ';

$GLOBALS["lang"]['The width of this device.'] = 'La largeur de cet appareil.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Leurs OrgID et leurs descendants';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Leurs OrgID seulement';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Leurs OrgID, ascendants et descendants';

$GLOBALS["lang"]['Then'] = 'Alors';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Puis créez une nouvelle méthode Auth dans Open-Audit en allant au menu -> Admin -> Méthodes dévaluation -> Créez Auth. Fournir un nom et définir le <i>type</i> pour Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Ensuite, vous pouvez utiliser Open-Audit (sans support) pour recevoir les données daudit directement des clients. Découverte <strong>échouera</strong>, mais si vous nutilisez pas Discovery (la fonction principale Open-Audit a été conçue autour), vous pouvez toujours obtenir des données de lappareil. Vous devrez exécuter les scripts daudit directement sur les clients en utilisant cron, ou utiliser la fonctionnalité Windows Agent (Entreprise seulement).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Il y a un bouton pour exporter vers JSON. Ceci naffichera que la table des attributs du périphérique. Pour exporter lappareil avec toutes les tables de composants associées, voir les détails de lappareil, puis ajouter';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Il nest absolument pas nécessaire de modifier manuellement chaque appareil.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Il nest pas nécessaire de faire quoi que ce soit si vous utilisez Open-Audit sur un serveur Linux.<br/><br/>Les clients de Windows sont très bien et ne nécessitent aucune action spéciale, cependant.... pour activer cette fonctionnalité le script daudit doit être exécuté localement sur le système Windows cible. Il ne peut pas être exécuté à distance comme nous le faisons avec les appels WMI lors de lexécution du script daudit sur une machine Windows, tout en ciblant une seconde machine Windows. Pour ce faire, nous devons copier le script daudit sur la machine Windows cible, puis lexécuter. Malheureusement, le compte de service sous Apache est le compte système local. Ce compte na pas accès aux ressources distantes (en réseau). Pour résoudre ce problème, le service doit être géré sous un autre compte. Il est plus facile de simplement utiliser le compte dadministrateur local, mais vous pouvez essayer nimporte quel compte que vous aimez tant quil a les privilèges requis. Le compte Système local a autant daccès local que le compte Administrateur local.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Ce ne sont là que des exemples. Vous devrez peut-être ajuster ces attributs en fonction de votre PAD.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Ces paramètres vous permettent de vérifier seulement ce qui est utile et pertinent pour vous, en économisant le temps de traitement et vous permettant de découvrir votre réseau de manière ordonnée.';

$GLOBALS["lang"]['Thing'] = 'Une chose';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pensez à mail.domain1.com et mail.domain2.com - même nom dhôte.';

$GLOBALS["lang"]['Third'] = 'Troisième';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ce CVE sera récupéré et écrasera le CVE existant sil existe.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Cet Org na pas de groupe AD spécifié. Vérifiez les détails des rôles dans Open-Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Cet Org na pas de groupe AD spécifié. Vérifiez les détails des rôles dans Open-Audit. <span class=\"confluence-link\">Avez-vous créé ces groupes (pour les orgs) sur le serveur LDAP et leur a assigné des utilisateurs LDAP ?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ce rôle na pas de groupe AD spécifié. Vérifiez les détails des rôles dans Open-Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Cet attribut est stocké en tant quobjet JSON. Cest la liste de toutes les collections et contient le nom de la collection avec <code>c</code>, <code>r</code>, <code>u</code> et ou <code>d</code> qui représentent créer, lire, mettre à jour et supprimer. Ce sont les actions quun utilisateur peut effectuer sur des éléments de cette collection particulière.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Ceci peut être soit un varchar (un champ texte), une liste (une liste de valeurs qui peut être sélectionnée) ou une date.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Ce code sappuie sur le grand travail accompli par le';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Cet identificateur universel unique en son genre.';

$GLOBALS["lang"]['This column is required by'] = 'Cette colonne est requise par';

$GLOBALS["lang"]['This column is required by '] = 'Cette colonne est requise par ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Cette description est auto-peuplée et devrait idéalement être laissée comme-est.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Ce paramètre vous permet dajouter les connexions qui font partie de votre infrastructure réseau, il vous permet de personnaliser une variété dattributs, de spécifier où cette connexion est située et lorganisation quelle appartient.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Cette erreur indique que SMB1 a été désactivé ou retiré de la machine cible. Ceci est normal pour la version moderne de Windows et vous ne verrez ce message que lorsque la tentative de connexion SMB2 a échoué. Si la connexion SMB2 échoue, nous essayons SMB1 pour permettre la découverte sur les anciennes versions de Windows. Si la machine Windows cible <i>est</i> exécutant une ancienne version de Windows, il est probable que vos identifiants ont échoué. Dans ce cas, voir';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Cette erreur indique quil ny a pas assez de mémoire virtuelle ou de quota de fichiers de recherche pour compléter lopération spécifiée. Tu devrais réessayer plus tard.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Cette erreur indique que les identifiants utilisés sont incorrects, nexistent pas ou nont pas suffisamment de privilèges pour se connecter à distance à la machine Windows cible. Vous devriez vérifier les références et vérifier ce qui suit.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Cet exemple crée une liste de tous les modules marqués comme';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Cet exemple crée une liste des appareils et des ports, protocoles et programmes ouverts trouvés par lanalyse NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Cet exemple crée une liste des appareils où les champs Fonction ou Description sont vides OU la date dachat est la valeur par défaut.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Cette requête dexemple récupère une liste de périphériques de plus de 3 ans. La requête utilise aujourdhui';

$GLOBALS["lang"]['This example uses'] = 'Cet exemple utilise';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Cette fonctionnalité nécessite une licence professionnelle ou dentreprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Cette fonctionnalité, car elle a la capacité daffecter les appareils cibles plus que dhabitude doit être activée manuellement. Pour activer cette fonctionnalité, changez lélément de configuration feature_executables en <i>oui</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Ce fichier demande à Linux dinterroger lapplication pour déterminer sil y a des tâches programmées qui devraient être exécutées.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Ce formulaire fournit une façon simple de commencer à découvrir les appareils sur votre réseau. Pour plus doptions détaillées, vous pouvez créer individuellement';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Cest aussi la façon dont PAExec fonctionne.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Il sagit dune option de configuration optionnelle, activée en configurant Discovery_use_org_id_match dans la configuration globale.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Cest généralement la colonne primaire, sauf configuration contraire. NOTA: Lorsque type = trafic, cela représente le texte secondaire.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Ceci est probablement dû à labsence de MySQL. MySQL utilise généralement le temps des appareils hôtes. Vous pouvez vérifier cela par';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Ceci est défini par les utilisateurs et donc, même si elle doit être unique au niveau mondial, il ny a certainement aucune garantie à ce sujet.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Cest le répertoire où nous stockons les pièces jointes aux périphériques.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Ceci doit être utilisé comme premier point dappel lors du dépannage des problèmes Open-Audit. Vous pouvez cliquer sur le bouton Exporter en haut à droite pour récupérer ce fichier JSON (à ajouter au ticket/e-mail de support).';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Cette question fait lobjet dune enquête.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Cet élément doit correspondre à la valeur de lattribut sélectionné ou contient lID de la requête à utiliser.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Cet élément doit correspondre à la valeur de lattribut sélectionné.';

$GLOBALS["lang"]['This license expires on'] = 'Cette licence expire le';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Cette autorisation de sécurité peut être modifiée à laide de loutil administratif Component Services.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Ceci devrait être commenté après le dépannage comme mode de débogage générera beaucoup de journaux sur le disque pour aucun avantage.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Cela devrait être unique au niveau mondial, mais jai vu des cas où ce nest pas le cas.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ceci doit être réglé à 1 ou la hauteur du rack.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Il devrait sagir du nom de champ entièrement qualifié dans la base de données. Actuellement, les colonnes du système, les champs et les tableaux didentification sont pris en charge. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Cet état est utilisé lorsque Nmap est incapable de déterminer si un port est fermé ou filtré. Il nest utilisé que pour le scan de ralenti IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ça va se repeupler automatiquement.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Cela ralentira considérablement le balayage de la découverte.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Cela supprimera les lignes actuelles dans le';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Cela va définitivement DELETER cette licence.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Cela vous montrera le formulaire dédition en vrac. Tous les attributs que vous définissez sur ce formulaire seront appliqués à tous les appareils sélectionnés. Vous pouvez définir plusieurs attributs à la fois.';

$GLOBALS["lang"]['Thursday'] = 'Jeudi';

$GLOBALS["lang"]['time_caption'] = 'Légende du temps';

$GLOBALS["lang"]['Time Caption'] = 'Légende du temps';

$GLOBALS["lang"]['time_daylight'] = 'Heure';

$GLOBALS["lang"]['Time Daylight'] = 'Heure';

$GLOBALS["lang"]['Time to Execute'] = 'Temps dexécution';

$GLOBALS["lang"]['timeout'] = 'Délai';

$GLOBALS["lang"]['Timeout'] = 'Délai';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Délai par cible (deuxièmes)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Temps mort par cible. Attendez X secondes pour une réponse cible.';

$GLOBALS["lang"]['Timesatamp'] = 'Précipitations';

$GLOBALS["lang"]['Timestamp'] = 'Timbre';

$GLOBALS["lang"]['timing'] = 'Calendrier';

$GLOBALS["lang"]['Timing'] = 'Calendrier';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titre';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Vers un nouveau fichier nommé .env (dans le même répertoire). Maintenant modifiez ce nouveau fichier et décommentez (supprimez le #) la ligne ci-dessous (ligne 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Pour exécuter la requête, ajoutez un /execute, ainsi /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Pour vérifier une machine, vous devez avoir des références et un accès de niveau administrateur.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Pour vérifier une machine distante sur un domaine Active Directory, votre utilisateur fourni (ou si aucun nest fourni, lutilisateur exécutant le script) doit être membre du groupe dadministrateurs des machines cibles (ou sous-groupe).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Pour vérifier une machine distante qui nest pas dans un domaine, vous devez utiliser le compte Administrateur (pas <i>une</i> compte administrateur, <i>des</i> Compte administrateur) sur le PC cible. #1 et #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Pour vérifier localhost, les identifiants fournis sont ignorés et la connexion est effectuée en utilisant les détails de lutilisateur exécutant le script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Pour comparer les logiciels, nous vérifions le nom et la version. Parce que les numéros de version ne sont pas tous standardisés en format, lorsque nous recevons un résultat daudit, nous créons un nouvel attribut appelé software_padded que nous stockons dans la base de données avec le reste des détails logiciels pour chaque paquet. Pour cette raison, les lignes de base utilisant des politiques logicielles ne fonctionneront pas lorsquelles sont utilisées contre un appareil qui na pas été vérifié au 1.10 (au moins). Les politiques logicielles peuvent tester la version étant <i>égale à</i>, <i>supérieur à</i> ou <i>égale ou supérieure à</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Pour créer une nouvelle entrée cliquez sur le bouton Créer dans le coin supérieur droit.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Pour créer une ressource, vous devez POST les données requises.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Pour permettre laudit dune machine distante (Vista ou supérieure) qui nest pas dans un domaine, par un compte du groupe Administrateurs, autre que le compte Administrateur réel, voir la section ci-dessous sur UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Pour cela, créez un nouvel élément Auth en allant au menu -> Admin -> Auth -> Créer la méthode Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Pour exécuter le script powershell de Windows, ouvrez une invite de commande en tant quadministrateur et utilisez la commande suivante';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Pour exécuter le script daudit, ouvrez un terminal et utilisez la commande suivante';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Pour filtrer par une valeur de propriété, utilisez le nom de propriété. Les opérateurs qui devraient précéder la valeur sont';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Pour installer Nmap sur Windows, visitez la page Nmap à';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Pour effectuer le changement, il suffit de suivre les étapes ci-dessous.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Pour récupérer lidentité du locataire. Ouvrez le portail Azure cliquez sur Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - ne me blâmez pas pour linadéquation du nom, cest ainsi que Microsoft roule.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Pour récupérer votre clé, connectez-vous à la console AWS et sélectionnez votre nom dutilisateur, puis Mes pouvoirs de sécurité.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Pour retourner un élément spécifique.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Pour retourner tous les éléments pour un type complet pour un appareil spécifique.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Pour retourner tous les articles pour un type de composant. Si vous vouliez tous les logiciels que vous utiliseriez';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Pour inverser le tri, insérer un moins, ainsi';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Pour exécuter le script de test sur le PC cible Windows';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Pour sélectionner les appareils à intégrer, nous utilisons nmis_manage = y, mais vous pourriez aimer (par exemple) type = routeur. Vous pouvez également utiliser un groupe ou une requête si vous préférez quelque chose de plus complexe.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Pour trier par une colonne de base de données, utilisez';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Pour utiliser cette fonctionnalité Enterprise, vous devez dabord créer votre utilisateur dans Open-Audit comme dhabitude. Lattribution dun mot de passe nest pas nécessaire. Vous devez attribuer des rôles et des orgs. Le nom dutilisateur dans Open-Audit doit correspondre à lEntra <i>Nom dutilisateur préféré</i> attribut. Il nest pas nécessaire davoir un nom complet ou un courriel - ceux-ci seront peuplés dEntra. Si vous ne connaissez pas vos utilisateurs <i>Nom dutilisateur préféré</i>Ne crains rien. Vous pouvez créer la nouvelle méthode Auth dans Open-Audit et lapplication Enterprise dans Entra et quand un utilisateur tente de se connecter à Open-Audit sans utilisateur préexistant, vérifiez les journaux et vous verrez leur <i>Nom dutilisateur préféré</i> enregistré pour votre convienence.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Pour utiliser cette fonctionnalité Enterprise, vous devez dabord créer votre utilisateur dans Open-Audit comme dhabitude. Lattribution dun mot de passe nest pas nécessaire. Vous devez attribuer des rôles et des orgs. Le nom dutilisateur dans Open-Audit doit correspondre à lOKTA <i>nom</i> attribut. Il nest pas nécessaire davoir un nom complet ou un courriel - ceux-ci seront peuplés dOKTA. Si vous ne connaissez pas vos utilisateurs <i>nom<i>Ne crains rien. Vous pouvez créer la nouvelle Auth Menthod dans Open-Audit et lapplication dans OKTA et quand un utilisateur tente de se connecter à Open-Audit sans utilisateur préexistant, vérifiez les journaux et vous verrez leur <i>nom<i> enregistré pour votre convienence.<br/><p>Puis créez une nouvelle méthode Auth dans Open-Audit en allant au menu -> Admin -> Méthodes dévaluation -> Créez Auth. Fournir un nom et définir le <i>type</i> à Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Pour utiliser cette fonctionnalité, vous devez activer les éléments de configuration match_mac (pour AWS) et match_hostname (pour Azure). Cela sera fait automatiquement la première fois quune découverte de nuage est exécutée. Pour plus dinformations sur les règles dappariement Open-Audits voir ICI: Appareils de correspondance';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Pour afficher les détails dune requête, la structure URL standard de /open-audit/index. php/queries/{$id} doit être utilisé.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokélaou';

$GLOBALS["lang"]['Tonga'] = 'États-Unis';

$GLOBALS["lang"]['toolbar_style'] = 'Style de barre doutils';

$GLOBALS["lang"]['Toolbar Style'] = 'Style de barre doutils';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap Ports TCP';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap Ports TCP. Top 10, 100, 1000 ports à scanner selon les options Nmaps "ports supérieurs".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top des ports UDP Nmap';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top des ports Nmap UDP. Top 10, 100, 1000 ports à scanner selon les options Nmaps "ports supérieurs".';

$GLOBALS["lang"]['Traditional Chinese'] = 'Chinois traditionnel';

$GLOBALS["lang"]['Traffic Light'] = 'Feu de circulation';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinité-et-Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Dépannage';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Dépannage des connexions LDAP';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Essayez Open-Audit Enterprise, sur nous sans limite de temps. Toutes les caractéristiques dEnterprise. Limité à 20 appareils.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Essayez toutes les dernières fonctionnalités avec une licence dappareil GRATUIT 100 de Open-Audit Enterprise. Veuillez lire la ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Essayez de vous connecter en utilisant un utilisateur LDAP. Nous supposons que cela échouera (autrement, pourquoi lisez-vous encore cela?). Ensuite, commentez la ligne du fichier ci-dessus.';

$GLOBALS["lang"]['Tuesday'] = 'Mardi';

$GLOBALS["lang"]['Tunisia'] = 'Tunisie';

$GLOBALS["lang"]['Turkey'] = 'Turquie';

$GLOBALS["lang"]['Turkish'] = 'Turquie';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Type : Ceci peut être soit un varchar (un champ texte) soit une liste (une liste de valeurs qui peut être sélectionnée).';

$GLOBALS["lang"]['Types of Networks'] = 'Types de réseaux';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Ports Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Ports Udp';

$GLOBALS["lang"]['Uganda'] = 'Ouganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrainien';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Vérification de létape 1 (examen des documents)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Vérification de létape 2 (examen de la mise en œuvre)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Analyse en cours';

$GLOBALS["lang"]['Unfiltered'] = 'Non filtré';

$GLOBALS["lang"]['uninstall'] = 'Désinstaller';

$GLOBALS["lang"]['Uninstall'] = 'Désinstaller';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Désinstaller lAgent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Émirats arabes unis';

$GLOBALS["lang"]['United Kingdom'] = 'Royaume-Uni';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Îles mineures périphériques des États-Unis';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Îles Vierges américaines';

$GLOBALS["lang"]['United States of America'] = 'États-Unis d  Amérique';

$GLOBALS["lang"]['Unknown'] = 'Inconnu';

$GLOBALS["lang"]['unlock_pin'] = 'Déverrouiller la broche';

$GLOBALS["lang"]['Unlock Pin'] = 'Déverrouiller la broche';

$GLOBALS["lang"]['Unscheduled'] = 'Non programmé';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Non utilisé au 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Non utilisé.';

$GLOBALS["lang"]['Update'] = 'Mise à jour';

$GLOBALS["lang"]['update_external_count'] = 'Mettre à jour le dénombrement externe';

$GLOBALS["lang"]['Update External Count'] = 'Mettre à jour le dénombrement externe';

$GLOBALS["lang"]['update_external_from_internal'] = 'Mise à jour externe de linterne';

$GLOBALS["lang"]['Update External From Internal'] = 'Mise à jour externe de linterne';

$GLOBALS["lang"]['update_internal_count'] = 'Mettre à jour le compte interne';

$GLOBALS["lang"]['Update Internal Count'] = 'Mettre à jour le compte interne';

$GLOBALS["lang"]['update_internal_from_external'] = 'Mise à jour interne de lextérieur';

$GLOBALS["lang"]['Update Internal From External'] = 'Mise à jour interne de lextérieur';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Mettre à jour les périphériques NMIS depuis Open-Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Mettre à jour Open-Audit Dispositifs ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Mettre à jour Open-Audit Dispositifs du NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Mettre à jour les vulnérabilités';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Mettre à jour un attribut dune entrée {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Mettre à jour les attributs';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des IP détectés pour répondre.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des IP qui ont été scannés par Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des appareils que nous avons pu vérifier.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Mise à jour chaque fois que la découverte a été exécutée avec des périphériques que nous avons pu interroger.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Mise à jour chaque fois que la découverte a été exécutée.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Mise à jour chaque fois que la découverte a été exécutée.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Mise à jour chaque fois que la découverte a terminé lexécution.';

$GLOBALS["lang"]['Updating'] = 'Mise à jour';

$GLOBALS["lang"]['Upgrade'] = 'Mise à jour';

$GLOBALS["lang"]['Upload an audit result file'] = 'Télécharger un fichier de résultats daudit';

$GLOBALS["lang"]['Upper Case'] = 'Haut de la page';

$GLOBALS["lang"]['uptime'] = 'Temps de disponibilité';

$GLOBALS["lang"]['Uptime'] = 'Temps de disponibilité';

$GLOBALS["lang"]['Urdu'] = 'Ourdou';

$GLOBALS["lang"]['url'] = 'Autres';

$GLOBALS["lang"]['Url'] = 'Autres';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, République orientale';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Utilisation';

$GLOBALS["lang"]['Use'] = 'Utilisation';

$GLOBALS["lang"]['use_authentication'] = 'Utiliser lauthentification';

$GLOBALS["lang"]['Use Authentication'] = 'Utiliser lauthentification';

$GLOBALS["lang"]['use_authorisation'] = 'Autorisation dutilisation';

$GLOBALS["lang"]['Use Authorisation'] = 'Autorisation dutilisation';

$GLOBALS["lang"]['Use Proxy'] = 'Utiliser Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Utiliser SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Utiliser SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utiliser Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Utiliser la détection de version de service';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Utiliser la détection de version de service. Lorsquun port détecté est détecté comme ouvert, si défini comme <i>y</i>, Nmap va interroger le périphérique cible dans une tentative de déterminer la version du service en cours dexécution sur ce port.<br/>Cela peut être utile pour identifier les appareils non classifiés. Cela na pas été utilisé auparavant.';

$GLOBALS["lang"]['Use WMI'] = 'Utiliser WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Utiliser un <i>Méthode de connexion</i> de OIDC - OpenID Connect et un <i>Type de demande</i> des applications Web. Cliquez sur <i>Suivant</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Utilisation pour lauthentification';

$GLOBALS["lang"]['Use for Roles'] = 'Utilisation pour les rôles';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Utilisez les options dinstallation standard lors de laffichage et cliquez sur <i>Je suis daccord</i>, <i>Suivant</i> et <i>Installer</i> boutons pour installer Nmap.';

$GLOBALS["lang"]['used'] = 'Utilisé';

$GLOBALS["lang"]['Used'] = 'Utilisé';

$GLOBALS["lang"]['used_count'] = 'Nombre utilisé';

$GLOBALS["lang"]['Used Count'] = 'Nombre utilisé';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Utilisé par OpenLDAP seulement.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Utilisé en interne pour découvrir un seul appareil.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Utilisé en interne pour découvrir un seul appareil. Liens vers <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Utilisé lorsque les serveurs LDAP ont été configurés pour remplir les détails dun utilisateur - cela inclut les Orgs auxquels ils ont accès. Si un utilisateur fait partie de ce groupe LDAP, on lui attribue cet org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Utilisé lorsque les serveurs LDAP ont été configurés pour remplir les détails dun utilisateur - cela inclut les rôles qui leur sont assignés. Si un utilisateur fait partie de ce groupe LDAP, on lui attribue ce rôle.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Utilisé lors de la recherche OpenLDAP pour associer un utilisateur uid à un membre de groupe. Par défaut de <code>memberUid</code>. Utilisé par OpenLDAP seulement.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Utilisé avec les intégrations et les applications de surveillance FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Utilisé avec les intégrations et les applications de surveillance FirstWave. Réglez à y si vous travaillez SNMP détecté par découverte.';

$GLOBALS["lang"]['user'] = 'Utilisateur';

$GLOBALS["lang"]['User'] = 'Utilisateur';

$GLOBALS["lang"]['User DN'] = 'DN utilisateur';

$GLOBALS["lang"]['user_group'] = 'Groupe dutilisateurs';

$GLOBALS["lang"]['User Group'] = 'Groupe dutilisateurs';

$GLOBALS["lang"]['user_id'] = 'ID utilisateur';

$GLOBALS["lang"]['User ID'] = 'ID utilisateur';

$GLOBALS["lang"]['user_interaction'] = 'Interaction utilisateur';

$GLOBALS["lang"]['User Interaction'] = 'Interaction utilisateur';

$GLOBALS["lang"]['User Membership Attribute'] = 'Attribut dadhésion de lutilisateur';

$GLOBALS["lang"]['user_name'] = 'Nom de l utilisateur';

$GLOBALS["lang"]['User Name'] = 'Nom de l utilisateur';

$GLOBALS["lang"]['User Policies'] = 'Politiques de lutilisateur';

$GLOBALS["lang"]['Username'] = 'Nom dutilisateur';

$GLOBALS["lang"]['username'] = 'Nom dutilisateur';

$GLOBALS["lang"]['users'] = 'Utilisateur';

$GLOBALS["lang"]['Users'] = 'Utilisateur';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Les utilisateurs travaillent comme Netstat Ports. Si un utilisateur existe avec un nom, un statut et des détails de mot de passe correspondants (changeable, expire, requis) alors la politique passe.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Utilisateurs, rôles et organismes';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Utilise le cadre PHP CodeIgniter.';

$GLOBALS["lang"]['Using'] = 'Utilisation';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Utilisation dEntra pour Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Utilisation de LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Utilisation dOKTA pour Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Lutilisation de loption format est utile lorsque vous utilisez un navigateur Web, mais vous souhaitez voir le résultat au format JSON. Ajouter format=json permet dy parvenir. Normalement, un navigateur Web définira son en-tête dacceptation en HTML, donc dans ce cas, nous retournons la page rendue. En utilisant une API pour récupérer JSON, vous devez définir len-tête accepter à';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Habituellement Mbs, de lemplacement A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Habituellement Mbs, de lemplacement B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Habituellement Mbs, à lemplacement A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Habituellement Mbs, à lemplacement B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Habituellement, il faut fixer à 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Types de valeur';

$GLOBALS["lang"]['values'] = 'Valeurs';

$GLOBALS["lang"]['Values'] = 'Valeurs';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Valeurs : Dans le cas <i>liste</i> champ, il devrait sagir dune liste de valeurs valides séparées par des virgules.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['Various'] = 'Divers';

$GLOBALS["lang"]['vendor'] = 'Fournisseur';

$GLOBALS["lang"]['Vendor'] = 'Fournisseur';

$GLOBALS["lang"]['Vendor Report'] = 'Rapport du fournisseur';

$GLOBALS["lang"]['vendors'] = 'Fournisseurs';

$GLOBALS["lang"]['Vendors'] = 'Fournisseurs';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamiens';

$GLOBALS["lang"]['View'] = 'Affichage';

$GLOBALS["lang"]['View All'] = 'Afficher tout';

$GLOBALS["lang"]['View Details'] = 'Afficher les détails';

$GLOBALS["lang"]['View Device'] = 'Afficher le périphérique';

$GLOBALS["lang"]['View Discovery'] = 'Afficher la découverte';

$GLOBALS["lang"]['View Policy'] = 'Afficher la politique';

$GLOBALS["lang"]['View Racks'] = 'Afficher les sacs';

$GLOBALS["lang"]['View the'] = 'Afficher la';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Visualisez la découverte en question, puis cliquez sur le bouton Support dans la barre doutils en haut à droite. Cela fournira les paramètres de découverte, les éléments de configuration, la liste des périphériques de découverte ainsi que les journaux de cette découverte particulière.';

$GLOBALS["lang"]['View the release notes on the'] = 'Voir les notes de sortie sur le';

$GLOBALS["lang"]['Virtual Private Network'] = 'Réseau privé virtuel';

$GLOBALS["lang"]['Virtual private network'] = 'Réseau privé virtuel';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnérabilités et résultats';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnérabilités initialement publiées avant le 1er janvier 2025 (par défaut). Nous ne voyons aucun sens dans le retour des vulnérabilités des années précédentes. Cela peut être modifié dans la configuration.';

$GLOBALS["lang"]['vulnerability_id'] = 'Identification de vulnérabilité';

$GLOBALS["lang"]['Vulnerability ID'] = 'Identification de vulnérabilité';

$GLOBALS["lang"]['Vulnerability Status'] = 'État de vulnérabilité';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ATTENTION - Lors de la création dune base de référence en utilisant des politiques logicielles, actuellement Centos et RedHat paquetent le noyau en utilisant les noms <i>noyau</i> et <i>développement du noyau</i>. Il peut y avoir plusieurs paquets avec ce nom et différentes versions installées simultanément. Les distributions basées sur Debian utilisent des noms comme <i>linux-image-3.13.0-24-générique</i>, noter que le numéro de version est inclus dans le nom du paquet. Parce que les systèmes dexploitation basés sur RedHat utilisent ce format et ont ensuite plusieurs noms de paquets identiques avec différentes versions, nous excluons actuellement <i>noyau</i> et <i>développement du noyau</i> des politiques de logiciels. Cela pourrait être abordé dans une mise à jour future.';

$GLOBALS["lang"]['WHERE'] = 'OÙ';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Exigences relatives aux pouvoirs de l  OMM';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Attendez quil soit terminé, puis collez dans cette prochaine ligne pour installer lAgent.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Nous avons également une option pour Ping Before Scan (important pour les routeurs avec des caches ARP de longue durée). Cest généralement une bonne idée.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Nous avons également nos éléments daction (qui sont exécutés dans lordre ci-dessous):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'On nous pose souvent cette question et la réponse est très certainement : <i>ça dépend</i>. Cela dépend du nombre dIP à scanner, de la vitesse de connexion réseau, de la vitesse des appareils à scanner, du type dappareils à scanner, du nombre didentifications différentes à tester et de la vitesse du serveur Open-Audit. Nous navons pas de calculateur qui nous permettrait dentrer ces variables et de retourner une valeur. Cest simplement trop complexe. En général, je limite mes découvertes à 256 adresses IP - cest-à-dire un sous-réseau /24. Nous avons eu des clients scanner /16 sous-réseaux (65k adresses) et cela fonctionne - mais cela peut prendre beaucoup de temps. Vous êtes beaucoup mieux hors balayage dans 24 blocs. Si vous ne savez tout simplement pas quelles sont vos plages dadresses, alors cest un bon cas pour une découverte de semences.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Nous avons des instructions plus détaillées sur';

$GLOBALS["lang"]['We have tests for:'] = 'Nous avons des tests pour:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Nous espérons que vous trouverez Open-Audit aussi utile que nous.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Nous avons initialement configuré la liste des scripts par défaut avec les options par défaut. La liste des scripts est visible à /scripts. Ces scripts par défaut ne peuvent pas être supprimés. Vous pouvez créer des scripts supplémentaires à utiliser par vous au besoin. Votre script sera basé sur lun des scripts existants et aura des options personnalisées appliquées. Les scripts peuvent ensuite être téléchargés depuis la page de la liste au menu: Discover -> Scénarios daudit -> Liste Scénarios daudit.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Nous avons besoin de certaines références pour pouvoir parler efficacement aux appareils de votre réseau.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Nous nenvoyons que la quantité minimale de données et rien de sensible. Nous envoyons nos données de licence (nom, type, etc), nos données dapplication (nom, version, plate-forme, fuseau horaire, etc), toute erreur enregistrée, un nombre de types dappareils et un nombre de fonctionnalités utilisées. <i>Toutes</i> environnement a des appareils et cest le seul morceau de vos données que nous envoyons. Et seulement le type dappareil et un compte. Pas le fabricant, pas le modèle. On nenvoie rien de spécial. Pas de réseau. Pas dadresse IP. Pas de version OS. Pas de noms de logiciels. Les champs UUID et Server sont encodés sha256 (pour que nous ne connaissions pas la valeur). Nous envoyons seulement les données dont nous avons besoin pour améliorer le produit. Nous espérons que vous verrez les avantages pour nous tous avec cette information. Il nous fournira une orientation guidée sur lendroit où concentrer les améliorations et les nouvelles fonctionnalités du produit.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Nous avons tendance à utiliser lextension Google Chrome appelée Postman pour tester les véritables requêtes reposantes. Vous pourriez vouloir installer et tester avec cela.';

$GLOBALS["lang"]['Web'] = 'Site Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Voies dapplication Web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Découverte du serveur Web';

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

$GLOBALS["lang"]['Welcome to'] = 'Bienvenue à';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara occidental';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Que puis-je attendre si je nai pas de pouvoirs';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Et les champs que je veux du NMIS qui ne sont pas dans Open-Audit ? On vous couvre. Tous les champs du système externe (NMIS) qui nexistent pas dans Open-Audit seront automatiquement créés en tant que champs personnalisés Open-Audit.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Et les autres appareils réseau ? Interrupteurs de pensée, routeurs, imprimantes, etc. Évidemment, il est préférable que vous puissiez fournir des identifiants SNMP pour ces appareils. Ils nont besoin que de <i>en lecture seule</i> accès. Mais si vous ne voulez pas faire même cela, il ny a rien qui vous empêche dexécuter la découverte, de trouver les appareils, et de faire une ou deux règles pour les identifier (peut-être utiliser MAC Address préfix en combinaison avec des ports ouverts, par exemple). Vous navez pas beaucoup dinformation, mais vous saurez quils sont sur le réseau, ce quils sont, et quand la dernière fois quils ont été vus était. Vous verrez également si quelque chose de nouveau apparaît sur le réseau.';

$GLOBALS["lang"]['What do we send?'] = 'On envoie quoi ?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Quest-ce que ça signifie pour toi ?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Quel est le but de ce rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Quel est le type de cet endroit. Types autorisés <code>attributes</code> tableau.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Lorsque Open-Audit sur Linux découvre une machine Windows, afin dexécuter une commande distante que nous utilisons';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Lorsque Open-Audit sur Windows découvre une machine Windows, afin dexécuter une commande distante que nous utilisons';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Quand Open-Aud Linformatique reçoit des données sur un appareil, soit en découvrant lappareil lors dune vérification, soit par lutilisateur qui importe lappareil, elle doit déterminer si cet appareil découvert correspond à un appareil qui existe déjà dans sa base de données, soit sil sagit dun nouvel appareil qui devrait être ajouté. Open-Audit utilise une série de douze correspondances de propriété pour déterminer cela. Les règles de correspondance fonctionnent comme des comparaisons OU, pas ET. Cela signifie la première règle qui correspond à un champ dans le périphérique découvert à un dans la résolution dB comme un périphérique existant. Toutes les règles de correspondance doivent échouer pour quun appareil soit nouveau et quun nouvel enregistrement soit créé.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Lorsque POSTing données, vous devez inclure un jeton daccès. Un jeton daccès est généré avec chaque type de requête, donc faire un GET (par exemple) et Accepter: application/json, analyser la réponse pour meta→access_token, et inclure cela avec votre demande. Ceci devrait être placé dans le champ data[access_token], IE, le niveau supérieur.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Lorsquun périphérique est découvert, le script daudit sera injecté avec les détails du fichier (ou du répertoire). Audit_linux.sh et audit_windows.vbs seront tous deux remplis, quel que soit le chemin du fichier. Si vous pensez <i>mais mettre un chemin Linux dans une machine Windows va casser les choses!</i>, il ne sest pas cassé, vous ne recevrez tout simplement aucune donnée de ce fichier ou répertoire entrée.<br/>Les détails récupérés seront stockés dans le <i>fichier</i> table de base de données et sont stockés comme tout autre attribut. Les détails du fichier seront stockés comme tout autre attribut et généreront des alertes si lun des attributs suivants change - <i>_Nom complet</i>, <i>Hasch</i>, <i>diode</i>, <i>_dernière modification</i>. La table contient un system_id, first_seen, last_seen et les colonnes actuelles ainsi que les détails du fichier.<br/>Les attributs enregistrés sont les suivants:<br/><ul><li>Windows - nom, taille, répertoire, SHA1 hash (du contenu du fichier), dernière modification, permissions, propriétaire, version (si le fichier le permet).</li><br/><li>Linux - nom, taille, répertoire, SHA1 hash (du contenu du fichier), dernière modification, méta données dernière modification, permissions, propriétaire, groupe, inode.</li></ul>Vous verrez une section dans les scripts daudit Windows et Linux comme ci-dessous';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Lorsquune découverte est exécutée, loption de numérisation de découverte pertinente est choisie et ces paramètres sont utilisés par Nmap pour scanner les appareils cibles. Les options de numérisation déterminent quels ports nmap scanne, à quelle vitesse ils scannent et si nmap ping est utilisé pour déterminer si lIP est en direct ou non.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Lorsquune découverte est exécutée, loption de numérisation de découverte pertinente est choisie et les paramètres utilisés par Nmap pour scanner les appareils cibles. Si aucune option nest choisie, lélément de configuration par défaut (découverte_default_scan_option) est sélectionné et utilisé. Open-Audit Community utilisera les options par défaut selon la configuration pour toutes les découvertes.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Lorsquune découverte de sous-réseau est exécutée, elle exécute dabord, si elle est sélectionnée, un balayage Nmap ping sur la plage ou les adresses IP. Tout appareil répondant sera balayé. Si un scan Nmap ping nest pas demandé, chaque IP est scannée individuellement. Quels ports ? Cela est déterminé par le';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Lors de laudit dun périphérique Linux via SSH, certaines distributions Linux ne permettent pas que les commandes sudo soient passées sans TTY (que nous faisons). Pour vérifier complètement lune de ces distributions linux, il est préférable de fournir les identifiants de lutilisateur racine. Si aucune racine nest fournie et que le sudo sans ATS nest pas possible, le script daudit sera exécuté mais ne contiendra pas la quantité de données comme autrement. Des audits ultérieurs utilisant root (ou exécuter localement en utilisant sudo) fourniront donc des détails supplémentaires sur le système et généreront plusieurs <i>changements</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Lorsque vous combinez des dispositifs, quel système est la source dinformation faisant autorité.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Une fois terminée, fermez la fenêtre de commande et vous avez terminé !';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Lors de la création dun widget, si vous sélectionnez <i>Avancé</i> bouton vous aurez la possibilité de télécharger votre propre SQL personnalisé.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Lors de lintégration des périphériques du système externe, si le périphérique nexiste pas dans Open-Audit, devrions-nous le créer ?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Lors de lintégration des périphériques du système externe, si le périphérique a été mis à jour dans le système externe, devrions-nous le mettre à jour dans Open-Audit?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Lors de lenquête sur une découverte, le support demandera les journaux de découverte exportés. Pour les récupérer, allez au menu -> Découvertes ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Lors de la correspondance avec un appareil basé sur Linux, nous préférons utiliser le Dbus id concaténé avec le nom dhôte. Nous pouvons également utiliser dautres options selon le tableau ci-dessous, mais nous pouvons récupérer lID Dbus sans root. Pour récupérer lUUID (à partir de la carte mère), nous devons exécuter dmidecode, ce qui nécessite root. Malheureusement, lorsque vous clonez un invité ESXi, lID Dbus ne se recrée pas - doù notre concaténation avec le nom dhôte. Il y a un bon article lié ici qui détaille <i>Pourquoi</i> des pièces didentité matérielles.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Lorsque vous demandez JSON, par défaut aucune limite nest fixée. Lorsque vous demandez laffichage de lécran, la limite est fixée à 1000 par défaut. Cela peut être modifié dans la configuration. Voir <i>_dimensionner la page</i> Objet';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Lorsquon récupère un appareil externe, faut-il le découvrir ?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Lors de lexécution dOpen-Audit sur Windows, le compte de service Apache doit être celui dun <i>régulière</i> utilisateur (ou ladministrateur). Cest parce que les <i>Système local</i> compte normalement utilisé pour exécuter Apache na pas accès à des ressources réseau. IE - Nous ne pouvons pas utiliser Apache lors de lexécution en tant que compte du système local pour copier le script daudit sur les PC Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Lorsque loption de configuration est définie, nous en prenons en compte pour les appareils pour un sous-ensemble défini de règles de correspondance où lélément de configuration a été activé. Ces règles sont les suivantes:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Lorsque les règles sexécutent en découverte, toutes les règles correspondantes apparaissent dans le journal de découverte. Voir ci-dessous pour un exemple.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Lorsque cette référence est prévue pour être exécutée. Dérivé de la <code>tasks.type</code> et <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quand ce journal a été créé.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Lorsque cet élément de file dattente a commencé le traitement.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Lorsque vous utilisez Open-Audit Professional ou Enterprise, des widgets sont disponibles et personnalisables pour être affichés sur les tableaux de bord.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Lorsque nous convertissons un appareil sélectionné en interne en objet pour le système externe, quelles devraient être les données externes. EG: entier, chaîne, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Lorsque nous exécutons ce niveau de référence, devrait-on vérifier les éléments sur des appareils qui ne sont pas dans une politique pour ce niveau de référence.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Lorsque nous recevons un port ouvert, devrions-nous essayer de tester la version du service actuellement en cours dexécution? Cela aide à confirmer les services de fonctionnement réels.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Lorsque vous utilisez Clouds pour découvrir vos instances Amazon AWS, vous aurez besoin de deux éléments didentification - clé et clé secrète. Votre clé devrait déjà être connue de vous et votre clé secrète. Il est à noter que vous ne pouvez pas récupérer votre clé secrète en utilisant la console AWS fournie par Amazon. Si vous lavez déplacé, vous devrez en générer un nouveau.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Lorsque vous utilisez Clouds pour découvrir vos instances Microsoft Azure, vous aurez besoin de quatre éléments didentification : id dabonnement, id de locataire, id de client et secret de client.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Lorsque vous créez une découverte, vous avez une option sur devices_assigned_to_org. Cela signifie que tous les appareils découverts pour cette découverte seront assignés (ont <code>devices.org_id</code> votre organisation choisie.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Lorsque vous créez une nouvelle découverte si vous cliquez sur le bouton Avancé, vous avez beaucoup plus doptions à changer, lune dentre elles étant le type de découverte. Les types ont toujours été Subnet (encompassant la gamme ci-dessus, subnet, ip options) et Active Directory. Comme à v4.1, Open-Audit a un nouveau type de découverte appelé Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Lorsque vous activez lexécution dune requête sur un calendrier, la requête est envoyée par courriel à votre adresse choisie. Vous devez avoir configuré lemail via le menu -> Admin -> Entreprise -> Email Config. Nous avons aussi une <i>test de courriel<i> bouton sur cette page. Saisissez vos détails, enregistrez-les et testez-les. Vous devriez avoir une boîte modale qui vous informe si elle réussit ou non et évidemment un courriel de test devrait arriver si elle est réussie. Une fois lemail configuré, votre requête programmée peut être configurée.<br/><br/>Fournir un nom, une description facultative, choisir <i>Demande</i> type, sélectionner la requête souhaitée, fournir une adresse courriel, choisir un format et définir lhoraire.<br/><br/>Fournissez une heure (heure seulement, pas de minutes pour linstant), donnez un nom à la tâche (ce nest pas le nom de la requête programmée elle-même), sélectionnez les jours que vous souhaitez lancer, choisissez la requête que vous souhaitez lancer, fournissez une adresse de courriel et choisissez un format de requête et vous êtes terminé.<br/>Les requêtes seront envoyées avec un corps de courriel de la requête (au format html) et la requête jointe au format demandé.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Lorsque vous entrez le texte dans lun des en-têtes de colonne, vous pouvez simplement utiliser un mot normal. Par exemple, lorsque vous entrez <code>computer</code> dans la case de recherche au-dessus de <i>Type</i> colonne, la recherche retournera tous les appareils avec le type dordinateur. Essentiellement, Open-Aud IT demande des données en utilisant une URL comme <code>devices?devices.type=computer</code>. Maintenant, il y a une différence significative lors de lutilisation de la recherche dataTables, par rapport à la norme';

$GLOBALS["lang"]['where'] = 'où';

$GLOBALS["lang"]['Where'] = 'où';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Où $x est un nombre. Ces nombreuses entrées LDAP sont dans la DB et ont été récupérées.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Où sur lécran Détails de lappareil vous souhaitez voir ce champ apparaître.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Où est le rack dans la rangée.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Si la vulnérabilité affecte des composantes au-delà de ses propres en utilisant Impact, Disponibilité et Confidentialité.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Indique si linteraction utilisateur est nécessaire (Aucune, passive, active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'À quel OS cette référence sapplique.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Quels appareils devraient créer Open-Audit à partir du système externe (le cas échéant). Utilisation de Tout, Aucun ou dun Attribut donné.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Quel réseau devrions-nous découvrir ? Cela devrait être dans le format de';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Dans quel sous-menu devrions-nous afficher cette requête.';

$GLOBALS["lang"]['Who made this rack.'] = 'Qui a fait ce rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Pourquoi Windows Server seulement?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Pourquoi excluons-nous cette politique?';

$GLOBALS["lang"]['Wide Area Network'] = 'Réseau étendu';

$GLOBALS["lang"]['Wide area network'] = 'Réseau étendu';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Type de widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Les widgets sont conçus pour être utilisés sur les tableaux de bord. Les utilisateurs dentreprise ont toute la liberté de créer, mettre à jour et supprimer des widgets selon les besoins.';

$GLOBALS["lang"]['width'] = 'Largeur';

$GLOBALS["lang"]['Width'] = 'Largeur';

$GLOBALS["lang"]['windows'] = 'Fenêtres';

$GLOBALS["lang"]['Windows'] = 'Fenêtres';

$GLOBALS["lang"]['Windows Packages'] = 'Paquets Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Script de test de Windows';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Unité de travail utilisateur de Windows #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Unité de travail utilisateur de Windows #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows peut également avoir bloqué le service de démarrage. Sur la cible démarrez lapplet de sécurité de Windows et assurez-vous que lexécutable WinExeSvc est autorisé à fonctionner (cliquez sur Autoriser sur lappareil, puis démarrez les actions).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Page Winexe sur Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe exige que les services Windows suivants soient démarrés et exécutés : les services netlogon et rpc soient exécutés.<br/><br/>Veuillez vous connecter à la machine Windows cible et vérifier les services pour netlogon et rpc sont en cours dexécution.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe utilise ladmin$ et RPC (démarrage du service net) pour installer et démarrer un service distant (winexesvc). Ce service initialise un tuyau nommé qui est utilisé pour transporter les commandes du serveur Open-Audit vers la cible et la sortie en sens inverse. Une fois terminé, le tuyau nommé se ferme et le winexesvc attend plus de connexions ou désinstalle (selon les options données).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Réseau local sans fil';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Avec la version 3.3.0 dOpen-Audit, nous avons introduit le concept dun cluster. Ceci permet de cartographier intuitivement lidée dun cluster web, dun cluster de base de données ou dun cluster de fichier (ou de plusieurs autres fins) dans un type donné (haute disponibilité, redondance, échelle, etc.).<br/><br/>Selon lobjectif choisi, les rapports seront légèrement différents.<br/><br/>Par exemple, si vous créez un Cluster avec un but de virtualisation, lorsque vous y avez ajouté des appareils, vous verrez également les machines virtuelles sur ces appareils.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Avec lintroduction de la fonctionnalité Clouds, vous pouvez fournir les détails de votre cloud, Amazon AWS ou Microsoft Azure, et Open-Audit utilisera lAPI pertinente pour récupérer une liste de sites, réseaux et instances, puis découvrir chacune de ces instances.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Temps mort';

$GLOBALS["lang"]['Wmi Timeout'] = 'Temps mort';

$GLOBALS["lang"]['workgroup'] = 'Groupe de travail';

$GLOBALS["lang"]['Workgroup'] = 'Groupe de travail';

$GLOBALS["lang"]['Working Credentials'] = 'Pouvoirs de travail';

$GLOBALS["lang"]['Wrap Up'] = 'Envelopper';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Ecrit en langage PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Demande jaune';

$GLOBALS["lang"]['Yemen'] = 'Yémen';

$GLOBALS["lang"]['Yes'] = 'Oui';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Vous pouvez définir des répertoires supplémentaires à scanner en tant quentrées dans la collection Executables. Une fois défini, le répertoire et tous les sous-répertoires sont numérisés pour les fichiers exécutables. Vous pouvez également définir les répertoires et les fichiers à exclure. Lorsquelles sont activées, elles sont injectées dans le script daudit linux et exécutées chaque fois quelles sont exécutées (habituellement dans le cadre dune découverte). Si vous voulez les copier manuellement dans un script, utilisez le menu -> Découvrez -> Scripts -> Listez les Scripts et téléchargez le script à partir de là.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Vous êtes toujours libre de modifier les scripts daudit en fonction de vos besoins spécifiques. Vous devrez (re)intégrer ces changements chaque fois que vous mettez à niveau car ils seront écrasés par les scripts par défaut. Je suggère denregistrer une copie maîtresse de votre script modifié, de mettre à jour Open-Audit, puis dexécuter un diff entre le nouveau script par défaut et votre script modifié et dappliquer les différences. Les scripts daudit sont des scripts natifs (Windows est VBScript, tous les autres sont Bash). Simple et facile à modifier - assurez-vous davoir une copie de vos modifications avant de mettre à niveau.';

$GLOBALS["lang"]['You are running version'] = 'Vous lancez la version';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Vous pouvez accéder à la collection en utilisant lAPI normale basée sur Open-Audit JSON. Comme toute autre collection. Voir';

$GLOBALS["lang"]['You can also'] = 'Vous pouvez aussi';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Vous pouvez également voir au bas de la page un tableau montrant les appareils auxquels les modifications seront appliquées.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Vous pouvez également spécifier les propriétés en utilisant le format ci-dessous.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Vous pouvez toujours exécuter le Firstwave VM sur votre infrastructure virtuelle (ESX, Azure, et al). La Firstwave VM exécute Debian linux et est exempte de problèmes et de limitations liés à la licence dexploitation. Ou installer sur votre propre distro Linux de choix. Nous soutenons Redhat 9, Ubuntu 20.04, 22.04 et 24.04 ainsi que Debian 11 et 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Vous pouvez assigner des périphériques à un emplacement automatiquement en utilisant';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Vous pouvez assigner des périphériques en utilisant des';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Vous pouvez vérifier une machine distante sans utiliser le compte Administrateur réel en créant une clé de registre. Créez la clé ci-dessous sur chaque machine à vérifier et assurez-vous que les identifiants dutilisateur utilisés est un membre du groupe des administrateurs.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Vous pouvez certainement lancer une découverte sans aucune identification valide sur les appareils dans le réseau, cependant, linformation récupérée sera un très petit sous-ensemble de ce que Open-Audit a la capacité de récupérer <i>avec</i> les pouvoirs.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Vous pouvez créer une base de référence, lexécuter sur un groupe de périphériques et afficher les résultats, ajouter lexécution programmée, ajouter plus de tableaux à comparer (actuellement seuls les logiciels, les ports netstat et les utilisateurs sont activés), en place lédition de base, larchivage des résultats et plus encore.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Vous pouvez créer un script avec toutes les options pour tous les scripts daudit existants - pas seulement Windows. AIX, ESX, Linux, OSX et Windows sont tous couverts.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Vous pouvez personnaliser toute lintégration jusquà quel système (NMIS ou Open-Audit) est lautorité par champ. Il existe des options pour créer et/ou mettre à jour des périphériques dans Open-Audit ou NMIS. Devrions-nous lancer une découverte sur un appareil créé ou mis à jour et bien plus encore. Il y a des explications pour chaque élément du côté droit de la page.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Vous pouvez définir une application et associer un périphérique à cette application. Un dispositif peut être associé à plus dune application. Une application peut être associée à plus dun appareil.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Vous pouvez modifier la valeur du champ supplémentaire pour chaque appareil sur la page de détails de lappareil. Visualisez lécran des détails de lappareil, ouvrez la section contenant le champ et (si vous avez';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Vous pouvez limiter la découverte de semences de lappareil à un ensemble strict de paramètres, y compris: <i>Restriction au sous-réseau</i> et <i>Restriction au secteur privé</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Vous pouvez assigner manuellement des périphériques en utilisant';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Vous pouvez outrepasser cela en fournissant loption de format dans lURL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Vous pouvez sélectionner des appareils individuels en cliquant sur leurs cases sur le côté droit ou en sélectionnant tous les appareils en cliquant sur la case en haut à droite de la table (sous le bouton Modifier qui ressemble à un crayon).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Vous pouvez sélectionner les appareils à intégrer en choisissant nimporte quel attribut dans la table système (device) et la correspondance (voir menu → Admin → Base de données → Liste des tableaux → système pour une liste de champs). Une correspondance dattribut ne peut correspondre quà une seule valeur.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Vous pouvez transformer nimporte quel serveur en un collecteur en allant au menu -> Admin -> Collecteurs -> Faites en sorte que cela installe un Collector. Vous aurez besoin didentifications pour vous connecter au serveur auquel cette installation se rapporte.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Vous pouvez voir en cliquant sur licône vue bleue. Vous pouvez également modifier ou supprimer si vous avez des permissions.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Vous navez pas installé lextension PHP MBString. Cette prolongation est nécessaire.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Vous navez pas installé lextension PHP SNMP. Cette extension est fortement recommandée.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Vous pouvez copier et coller cette URL dans un courriel à votre personnel.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Vous pouvez avoir Active Directory ou OpenLDAP authentifier vos utilisateurs, mais ne pas fournir dautorisation. Pour ce faire, assurez-vous <i>Utilisation pour lauthentification</i> est réglé à Y et <i>Utilisation pour les rôles</i> est réglé sur N. Les identifiants seront validés par LDAP, mais vous devrez avoir lutilisateur déjà créé et assigné Rôles dans Open-Audit. Ceci aussi <i>automatiquement</i> sapplique';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Vous avez peut-être remarqué que ces règles de match sont pour les articles qui pourraient ne pas être uniques à léchelle mondiale. Quelques exemples:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Vous devez supprimer votre licence existante avant dajouter une nouvelle licence.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Vous devez avoir des identifiants SSH pour exécuter une référence. Les systèmes dexploitation suivants sont actuellement pris en charge : Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Nous avons lintention den élargir la portée avec dautres versions.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Vous devez copier et coller le fichier entier dans la boîte de texte. Dans le cas ci-dessous, copiez TOUS le texte.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Vous ne devriez pas inclure les champs edited_by et edited_date. Elles seront automatiquement réglées.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Vous ne devriez changer que la deuxième phrase du texte,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Vous devez remplacer la colonne requise (par exemple, org_id) par ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Vous devriez utiliser une ligne den-tête contenant les noms des colonnes que vous souhaitez peupler, puis vos lignes de données en dessous.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Vous ne devez utiliser que les tables qui contiennent les attributs dont vous avez besoin. Jutilise habituellement une jointure gauche. Par exemple';

$GLOBALS["lang"]['You will need a'] = 'Vous aurez besoin dun';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Vous aurez besoin des ports pour WMI sur le pare-feu Windows ouvert sur chaque ordinateur Windows cible. Pour Windows Serveurs de base, assurez-vous dautoriser les connexions pare-feu selon';

$GLOBALS["lang"]['You will see a list of'] = 'Vous verrez une liste de';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriels YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Votre clé API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Vos identifiants Google Compute comme JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Votre Lhôte est';

$GLOBALS["lang"]['Your Licenses'] = 'Vos licences';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Votre identifiant client Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Votre Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Votre ID dabonnement Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Votre ID Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Votre version PHP est';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Votre SQL pour sélectionner les attributs qui rempliront cette requête.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Votre SQL pour sélectionner les périphériques qui peupleront ce groupe.';

$GLOBALS["lang"]['Your SSH key.'] = 'Votre clé SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Vos identifiants daccès, selon que les nuages API native.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Vos données sont vos données. Tu peux lextraire quand tu veux. Nous fournissons même des exportations utiles vers CSV, JSON et XML. Et nous avons une API JSON. Et vous pouvez écrire des rapports personnalisés et avoir ces sorties en CSV, XML et JSON! Encore une fois, ce sont vos données - personne dautre. Vous pouvez être certain que la sécurité de vos données est entre vos mains.';

$GLOBALS["lang"]['Your database platform is'] = 'Votre base de données est';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Votre description du statut de cette connexion (provisoire, retraitée, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Votre description de cet article.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Votre nom générique pour ce logiciel';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Votre version générique pour ce logiciel';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Votre utilisateur devrait maintenant pouvoir se connecter en cliquant sur le <i>Logon avec Entra</i> bouton sur la page de logo Open-Audit. Comme mentionné ci-dessus, si le logo échoue, veuillez vérifier le fichier journal et vérifier les utilisateurs <i>Nom dutilisateur préféré</i>.<br/><br/>Et ça devrait être tout ce quil y a aussi. Maintenant, vos utilisateurs devraient avoir un jeu de lettres de créances de moins à retenir!<br/><br/>Comme toujours, si vous avez des problèmes avec cette fonctionnalité, sil vous plaît email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Votre utilisateur devrait maintenant pouvoir se connecter en cliquant sur le <i>Logon avec OKTA</i> bouton sur la page de logo Open-Audit. Comme mentionné ci-dessus, si le logo échoue, veuillez vérifier le fichier journal et vérifier les utilisateurs <i>nom</i>.<br/><br/>Et ça devrait être tout ce quil y a aussi. Maintenant, vos utilisateurs devraient avoir un jeu de lettres de créances de moins à retenir!<br/><br/>Comme toujours, si vous avez des problèmes avec cette fonctionnalité, sil vous plaît email';

$GLOBALS["lang"]['Your web server is'] = 'Votre serveur web est';

$GLOBALS["lang"]['Zambia'] = 'Zambie';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a Chaîne';

$GLOBALS["lang"]['active'] = 'actif';

$GLOBALS["lang"]['active directory'] = 'répertoire actif';

$GLOBALS["lang"]['active/active'] = 'actif/actif';

$GLOBALS["lang"]['active/passive'] = 'actif/passif';

$GLOBALS["lang"]['advertisement'] = 'publicité';

$GLOBALS["lang"]['alert'] = 'Alerte';

$GLOBALS["lang"]['all'] = 'Tous';

$GLOBALS["lang"]['allocated'] = 'alloués';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'un entier';

$GLOBALS["lang"]['and'] = 'et';

$GLOBALS["lang"]['and / or'] = 'et / ou';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'et un ticket de support sera créé et mis en œuvre.';

$GLOBALS["lang"]['and another'] = 'et un autre';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'et téléchargez lauto-installation de la dernière version. Vous devrez peut-être faire défiler la page pour la trouver.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'et allez dans Applications -> Applications dentreprise (menu à gauche), puis cliquez sur <i>Nouvelle demande</i>.';

$GLOBALS["lang"]['and its current time is'] = 'et son heure actuelle est';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'et cherche une date dexpiration de garantie avant aujourdhui.';

$GLOBALS["lang"]['and review what is possible.'] = 'et de revoir ce qui est possible.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'et le Sign-out rediriger URI étant';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'et les lignes finales seront probablement les plus intéressantes. Ces lignes devraient vous donner le point exact où la connexion a échoué.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'demande';

$GLOBALS["lang"]['approved'] = 'approuvé';

$GLOBALS["lang"]['are required.'] = 'sont nécessaires.';

$GLOBALS["lang"]['are used.'] = 'sont utilisés.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'comme un appareil répondant sur ce port.<br/>Cela a causé certains problèmes de clients où les pare-feu répondent au nom dun appareil non existant, et donc provoquer une détection fausse positive de lappareil. Nous avons maintenant cet attribut disponible pour définir par scan.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'comme point de référence et filtre toutes les machines virtuelles par un contrôle du système. champ série pour VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'en supposant que le DNS fonctionne et que le client est peuplé';

$GLOBALS["lang"]['attribute'] = 'attribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'sauvegarde';

$GLOBALS["lang"]['banned'] = 'interdit';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'bleu';

$GLOBALS["lang"]['bottom'] = 'inférieur';

$GLOBALS["lang"]['building'] = 'bâtiment';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'peut être utilisé pour lauthentification de lutilisateur (est le nom de lutilisateur et le mot de passe correct) ainsi que lautorisation de lutilisateur (ce que les rôles et les orgs dun utilisateur ont).<br/><br/>Si un utilisateur nest pas dans le LDAP configuré mais est dans Open-Audit (par exemple: <i>administrateur</i> user), Open-Audit va revenir à sutiliser pour lauthentification et lautorisation.<br/><br/>Aud ouvert La TI utilise des groupes LDAP spécifiques pour les rôles et les orgs. Un utilisateur doit être un membre direct de ces groupes afin que Open-Audit détermine laccès des utilisateurs.<br/><br/>Une fois configuré correctement, LDAP peut supprimer complètement le besoin de créer des utilisateurs dans Open-Audit. Il suffit de configurer Open-Audit pour utiliser LDAP pour lauthentification et lautorisation. Si lutilisateur nexiste pas dans Open-Audit mais quil existe dans LDAP et que ses identifiants sont corrects et quils sont membres des groupes requis Open-Audit créera automatiquement le compte utilisateur.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'peut maintenant récupérer des détails sur un fichier ou un répertoire de fichiers et surveiller ces fichiers pour les modifications selon les autres attributs de la base de données Open-Audit. Cette fonctionnalité fonctionne à partir de la boîte pour les serveurs Linux Open-Audit, mais a besoin dun changement au nom du compte de service sous un serveur Windows Open-Audit. Les clients pris en charge sont Windows et Linux.';

$GLOBALS["lang"]['changed'] = 'changé';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'choisi. A partir de là, si un port pour WMI, SSH ou SNMP est détecté répondant à lappareil est interrogé en utilisant ';

$GLOBALS["lang"]['cloud'] = 'nuage';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'collections et pages de détails est une icône à exécuter.';

$GLOBALS["lang"]['collector'] = 'collecteur';

$GLOBALS["lang"]['collectors'] = 'collecteurs';

$GLOBALS["lang"]['column'] = 'colonne';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'colonne contiendra soit <i>y</i> ou <i>n</i>. Ceci indique si cette ligne est actuellement présente sur lappareil. Par exemple, un logiciel peut être installé (ce qui entraînerait <i>logiciel.current = y</i>), mais lors dune vérification ultérieure, il peut ne pas être détecté. Open-Audit changera alors cet attribut courant des lignes en <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'colonne. Les';

$GLOBALS["lang"]['compute'] = 'Calcul';

$GLOBALS["lang"]['config'] = 'configuration';

$GLOBALS["lang"]['console'] = 'console';

$GLOBALS["lang"]['contains'] = 'contient';

$GLOBALS["lang"]['create'] = 'créer';

$GLOBALS["lang"]['created'] = 'créé';

$GLOBALS["lang"]['credentials'] = 'pouvoirs';

$GLOBALS["lang"]['critical'] = 'critique';

$GLOBALS["lang"]['cve'] = 'Voir';

$GLOBALS["lang"]['database'] = 'base de données';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'délégué';

$GLOBALS["lang"]['delete'] = 'supprimer';

$GLOBALS["lang"]['deleted'] = 'supprimé';

$GLOBALS["lang"]['denied'] = 'refusé';

$GLOBALS["lang"]['details'] = 'détails';

$GLOBALS["lang"]['devices'] = 'dispositifs';

$GLOBALS["lang"]['digitalocean'] = 'numérique';

$GLOBALS["lang"]['discoveries'] = 'découvertes';

$GLOBALS["lang"]['documentation for further details.'] = 'pour plus de détails.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'fait <strong>pas</strong> fournir des rapports de vulnérabilité pour les éléments suivants:';

$GLOBALS["lang"]['does not equal'] = 'nest pas égal';

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

unassigned - The default until set.'] = 'extrême - sans quoi, lorganisation échouerait.

très élevé - Fonctions essentielles à la survie des organisations et à leur restauration immédiate.

haute - fonctions importantes qui devraient être restaurées rapidement mais peuvent avoir un temps de récupération légèrement plus long.

moyenne - Fonctions qui sont nécessaires mais qui peuvent tolérer des temps darrêt plus longs.

faible - Fonctions non essentielles qui peuvent être retardées sans impact significatif.

non assigné - La valeur par défaut jusquà ce quelle soit définie.';

$GLOBALS["lang"]['fail'] = 'échec';

$GLOBALS["lang"]['false'] = 'faux';

$GLOBALS["lang"]['file'] = 'fichier';

$GLOBALS["lang"]['firewall'] = 'Pare-feu';

$GLOBALS["lang"]['first'] = 'première';

$GLOBALS["lang"]['fixed'] = 'fixe';

$GLOBALS["lang"]['floor'] = 'plancher';

$GLOBALS["lang"]['for'] = 'pour';

$GLOBALS["lang"]['for authentication'] = 'pour lauthentification';

$GLOBALS["lang"]['for this information.'] = 'pour cette information.';

$GLOBALS["lang"]['from Audit Script Result'] = 'à partir du résultat du script daudit';

$GLOBALS["lang"]['from NMIS'] = 'de la NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'de ladresse LocalHost (Using LRPC) dans le conteneur dapplication';

$GLOBALS["lang"]['front'] = 'devant';

$GLOBALS["lang"]['front-left'] = 'avant gauche';

$GLOBALS["lang"]['front-right'] = 'avant droite';

$GLOBALS["lang"]['github'] = 'Ceinture';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'supérieur ou égal';

$GLOBALS["lang"]['greater than'] = 'supérieur à';

$GLOBALS["lang"]['group'] = 'Groupe';

$GLOBALS["lang"]['has not been set'] = 'na pas été défini';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'avoir une IP résolvable DNS de travail vers le PC Windows cible.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'avoir la capacité dêtre exécuté. Sur le';

$GLOBALS["lang"]['head'] = 'tête';

$GLOBALS["lang"]['here'] = 'ici';

$GLOBALS["lang"]['high availability'] = 'haute disponibilité';

$GLOBALS["lang"]['howto'] = 'comment';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'si vous clonez une machine virtuelle Linux, à moins que vous ne régénérez manuellement cela (et dans mon expérience, les gens ne le font pas), il restera le même.';

$GLOBALS["lang"]['ignored'] = 'ignoré';

$GLOBALS["lang"]['import the example device data'] = 'importer les données du périphérique exemple';

$GLOBALS["lang"]['in'] = 'en';

$GLOBALS["lang"]['in Enterprise.'] = 'en entreprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'dans Entrées peuvent avoir les valeurs suivantes.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'dans Sorties peuvent avoir les valeurs suivantes.';

$GLOBALS["lang"]['inactive'] = 'inactif';

$GLOBALS["lang"]['incomplete'] = 'incomplète';

$GLOBALS["lang"]['info'] = 'Informations';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'linstallateur testera la présence de Nmap dans ses emplacements dinstallation standard de';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, texte, bool (y/n), etc.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'est la norme américaine maintenue par le National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'est une norme internationale pour la gestion de la sécurité de linformation. Il fournit un cadre pour établir, mettre en oeuvre, maintenir et améliorer continuellement un système de gestion de la sécurité de linformation (SGSI).';

$GLOBALS["lang"]['is based upon'] = 'est fondée sur';

$GLOBALS["lang"]['is licensed to'] = 'est autorisé à:';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'est le suivant sur la liste et Open-Audit peut utiliser le mot de passe et lauthentification des clés. Open-Audit peut également utiliser un utilisateur activé par sudo par opposition à lutilisation root directement (bien quil puisse également utiliser root). Pour de meilleurs résultats, lutilisateur root ou un utilisateur sudo activé doit être utilisé (voir Auditer Linux sans la configuration root et Target Client sur le wiki). Les périphériques Windows peuvent également exécuter ssh, cependant si Open-Audit détecte cela, il arrêtera les requêtes SSH et utilisera plutôt WMI (en supposant des identifiants WMI de travail).';

$GLOBALS["lang"]['is the link to the'] = 'est le lien vers le';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'item pour voir les tableaux spécifiques et leurs colonnes. Cela vous permettra de trouver exactement ce dont vous avez besoin, plutôt que de chaluter à travers la console MySQL du script de création de schéma.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'clé nécessaire pour récupérer lat/long et afficher la carte. Voir';

$GLOBALS["lang"]['left'] = 'gauche';

$GLOBALS["lang"]['less or equals'] = 'inférieur ou égal';

$GLOBALS["lang"]['less than'] = 'inférieur à';

$GLOBALS["lang"]['license'] = 'licence';

$GLOBALS["lang"]['licenses'] = 'licences';

$GLOBALS["lang"]['like'] = 'comme';

$GLOBALS["lang"]['line'] = 'ligne';

$GLOBALS["lang"]['list'] = 'liste';

$GLOBALS["lang"]['list View, using the Create button'] = 'list View, en utilisant le bouton Créer';

$GLOBALS["lang"]['load balancing'] = 'équilibre de charge';

$GLOBALS["lang"]['location'] = 'lieu';

$GLOBALS["lang"]['locations'] = 'lieu';

$GLOBALS["lang"]['managed'] = 'géré';

$GLOBALS["lang"]['methods'] = 'méthodes';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'point de montage';

$GLOBALS["lang"]['must'] = 'doit';

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

$GLOBALS["lang"]['on devices where'] = 'sur les dispositifs où';

$GLOBALS["lang"]['openldap'] = 'ouvertldap';

$GLOBALS["lang"]['optimized'] = 'optimisé';

$GLOBALS["lang"]['optionally '] = 'facultativement ';

$GLOBALS["lang"]['or'] = 'ou';

$GLOBALS["lang"]['or the GitHub page at'] = 'ou la page GitHub à';

$GLOBALS["lang"]['other'] = 'autres';

$GLOBALS["lang"]['package'] = 'colis';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'page. Exportez votre serveur LDAP depuis le menu -> Admin -> Serveurs LDAP -> Détails pour JSON et enregistrer et inclure également ces données.';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'passe';

$GLOBALS["lang"]['pending'] = 'en attente';

$GLOBALS["lang"]['performance'] = 'performances';

$GLOBALS["lang"]['performed'] = 'exécuté';

$GLOBALS["lang"]['permission'] = 'autorisation';

$GLOBALS["lang"]['permissions required per endpoint'] = 'permissions requises par paramètre';

$GLOBALS["lang"]['pie'] = 'tarte';

$GLOBALS["lang"]['planning'] = 'planification';

$GLOBALS["lang"]['predictable'] = 'prévisible';

$GLOBALS["lang"]['query'] = 'requête';

$GLOBALS["lang"]['rear'] = 'arrière';

$GLOBALS["lang"]['rear-left'] = 'arrière gauche';

$GLOBALS["lang"]['rear-right'] = 'arrière droite';

$GLOBALS["lang"]['regex'] = 'Régex';

$GLOBALS["lang"]['release'] = 'libération';

$GLOBALS["lang"]['removed from display, but has been set'] = 'supprimé de laffichage, mais a été défini';

$GLOBALS["lang"]['reserved'] = 'réservé';

$GLOBALS["lang"]['right'] = 'droite';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'droits) vous pouvez cliquer sur la valeur du champ pour la modifier.';

$GLOBALS["lang"]['role'] = 'rôle';

$GLOBALS["lang"]['room'] = 'chambre';

$GLOBALS["lang"]['row'] = 'ligne';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'service a échoué à démarrer en raison de lerreur suivante';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'donc Open-Audit sait limiter votre requête aux Orgs appropriés.';

$GLOBALS["lang"]['stand-alone'] = 'autonome';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'commence par';

$GLOBALS["lang"]['storage'] = 'stockage';

$GLOBALS["lang"]['subnet'] = 'sous-net';

$GLOBALS["lang"]['table'] = 'Tableau';

$GLOBALS["lang"]['table and insert the original rows.'] = 'et insérer les lignes dorigine.';

$GLOBALS["lang"]['team'] = 'équipe';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Texte. Le premier est lindex du tableau et devrait être laissé tel quel. Lindex est utilisé dans les modèles pour rechercher le texte traduit.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'puis cliquez sur le bouton Détails pour la table.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'puis cliquez sur le bouton Détails pour la table. Les détails du périphérique sont stockés dans le';

$GLOBALS["lang"]['timestamp'] = 'horodatage';

$GLOBALS["lang"]['to'] = 'à';

$GLOBALS["lang"]['to create an item of this type'] = 'pour créer un élément de ce type';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'à lURL, vous obtiendrez lentrée complète de la base de données, y compris toutes les tables de composants, dun périphérique donné.';

$GLOBALS["lang"]['to the user'] = 'à lutilisateur';

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

confidentiel - Classification militaire / gouvernementale et secteur privé. Les données confidentielles comprennent les secrets commerciaux, les données intellectuelles, le code de programmation des applications et dautres données qui pourraient avoir une incidence grave sur lorganisation si une divulgation non autorisée sest produite. Les données à ce niveau ne seraient disponibles que pour le personnel de lorganisation dont le travail a besoin ou est directement lié aux données consultées. Laccès aux données confidentielles nécessite généralement une autorisation pour chaque accès.

classification du secteur privé. Les données privées comprennent toute information relative au personnel, y compris les dossiers des ressources humaines, les dossiers médicaux et les renseignements sur les salaires, qui est utilisée uniquement au sein de lorganisation.

sensible - Classification militaire / gouvernementale et secteur privé. Les données sensibles comprennent linformation financière de lorganisation et nécessitent des mesures supplémentaires pour assurer sa CIA et son exactitude. La divulgation pourrait nuire à la sécurité nationale.

public - Secteur privé. Les données publiques sont des données qui sont généralement partagées avec le public et nauraient pas dincidence négative sur lorganisation. Des exemples de données publiques comprennent le nombre de personnes qui travaillent dans lorganisation et les produits quune organisation fabrique ou vend.

Non classé - Classification militaire / gouvernementale. Toute information qui peut généralement être distribuée au public sans menace pour lintérêt national.

non assigné - La valeur par défaut jusquà ce quelle soit définie.';

$GLOBALS["lang"]['traffic'] = 'trafic';

$GLOBALS["lang"]['true'] = 'vrai';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'vrai ou faux (dans le contexte JSON)';

$GLOBALS["lang"]['unallocated'] = 'non alloués';

$GLOBALS["lang"]['unauthorised'] = 'non autorisé';

$GLOBALS["lang"]['unchanged'] = 'inchangé';

$GLOBALS["lang"]['unknown'] = 'inconnu';

$GLOBALS["lang"]['unmanaged'] = 'non gérées';

$GLOBALS["lang"]['unused'] = 'inutilisé';

$GLOBALS["lang"]['update'] = 'mise à jour';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'utilise les données recueillies sur vos appareils et correspond au logiciel installé avec la valeur fournie, il compte les matches calcule combien de licences ont été utilisées et combien il reste. Il permet lutilisation de wildcards sur le <i>correspond à la chaîne</i> champ qui correspond au logiciel. attribut de nom.';

$GLOBALS["lang"]['using the main menu items.'] = 'en utilisant les principaux éléments du menu.';

$GLOBALS["lang"]['valid'] = 'valide';

$GLOBALS["lang"]['version'] = 'version';

$GLOBALS["lang"]['virtualisation'] = 'virtualisation';

$GLOBALS["lang"]['warning'] = 'avertissement';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'avec les permissions daccès local et distant.';

$GLOBALS["lang"]['with devices::update permission.'] = 'avec les périphériques::mise à jour de la permission.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'avec lURI Sign-On Redirect';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'avec lintention de fournir un accès simple et intuitif dune manière familière aux développeurs. En plus de cette API, linterface web utilisera le même format de requête et fournira quelques actions supplémentaires (par exemple: formulaires HTML pour créer des éléments).';

$GLOBALS["lang"]['yes'] = 'oui';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'vous navez pas besoin dune licence HighCharts pour utiliser les produits Firstwave. Licence';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'vous assignerez tous les appareils trouvés à cet Org ou Location.';

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

