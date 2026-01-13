<?php
$GLOBALS["lang"][' Default, currently '] = ' Default, currently ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Si algo no funciona como se esperaba, lo primero que tienes que hacer es revisar los registros.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' ahora es compatible con un archivo de idioma. Para cambiar su usuario para usar este idioma, haga clic ';

$GLOBALS["lang"][' seconds'] = ' segundos';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', pero no tendrá que recordar un conjunto separado de credenciales de logotipo.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', de los cuales suministramos más de treinta como un conjunto predeterminado. Los usuarios profesionales no pueden alterar estos, pero un usuario de Enterprise tiene habilidades de personalización completas - incluyendo crear su propio.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', tú <i>Debe</i> estar usando https en tu servidor Open-AudIT para usar Entra para Auth. Por favor configure Apache para usar <strong>https</strong> antes de configurar Entra para auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Para habilitar esto, edite el elemento de configuración para ';

$GLOBALS["lang"]['10 Minutes'] = '10 minutos';

$GLOBALS["lang"]['15 Minutes'] = '15 minutos';

$GLOBALS["lang"]['30 Minutes'] = '30 minutos';

$GLOBALS["lang"]['5 Minutes'] = '5 minutos';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 controles agrupados en categorías de organización, personas, físicas y tecnológicas';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOTA</strong> - Usted está accediendo a esta URL del servidor local Open-AudIT. El script descargado no será capaz de enviar cuando se ejecuta en cualquier otra máquina. Si necesita auditar otras máquinas, descargue el script de cualquier máquina remota, no use un navegador en el servidor Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTA</strong> - Debe tener credenciales de SSH o SSH Key para ejecutar puntos de referencia en un dispositivo objetivo.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Base de referencia</strong> - El documento general que contiene la definición de referencia y las pruebas de política individuales.<br/> <br/> <strong>Políticas</strong> - Las pruebas individuales contenidas en un Baseline. Cada prueba es para un elemento específico. Un ejemplo sería probar para SSH versión 1.2.3.<br/> <br/> <strong>Detalles</strong> - Las bases pueden comparar los puertos de netstat, usuarios y software.<br/> <br/> <strong>Software</strong> - Para comparar software revisamos el nombre y la versión. Debido a que los números de versión no son todos estandarizados en formato, cuando recibimos un resultado de auditoría creamos un nuevo atributo llamado software_padded que almacenamos en la base de datos junto con el resto de los detalles de software para cada paquete. Por esta razón, las bases de referencia que utilizan políticas de software no funcionarán cuando se ejecuten contra un dispositivo que no haya sido auditado por 1.10 (por lo menos). Las políticas de software pueden probar contra que la versión es "igual", "más grande que" o "igual o superior a".<br/> <br/> <strong>Puertos Netstat</strong> - Los puertos Netstat usan una combinación de número de puerto, protocolo y programa. Si todos están presentes la política pasa.<br/> <br/> <strong>Usuarios</strong> - Los usuarios trabajan de forma similar a los puertos Netstat. Si un usuario existe con un nombre, estado y datos de contraseña (cambiable, expira, requerido) entonces la política pasa.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Una ubicación es una dirección física que puede tener dispositivos asociados con ella.<br/> <br/>Puede asignar las coordenadas (lat/long) y si hay dispositivos asignados, la ubicación aparecerá en el mapa Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Una red se deriva de entradas de descubrimiento y atributos de dispositivo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Un resumen mostrará una lista de elementos, agrupados por los distintos valores del atributo especificados por el <code>table</code> y <code>column</code> atributos.<br/> <br/>Cuando se ejecute un resumen, el resultado será una lista de valores distintos para ello <code>table</code> y <code>column</code>. Habrá enlaces sobre los valores que permiten al usuario ver los dispositivos de coincidencia.<br/> <br/>Si el atributo de <code>extra_columns</code> está poblada, la página resultante contendrá estas columnas además de las columnas de dispositivo estándar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Los agentes le permiten auditar PCs sin un descubrimiento. Instala el agente y se registrará con el servidor cada día y se auditará. No importa si sus computadoras están cortadas, los datos de auditoría seguirán apareciendo en Open-AudIT.</p><p>Cuando se prueba <strong>si</strong> un agente debe realizar acciones, las tres pruebas deben pasar (si se establece la prueba). <strong>Entonces...</strong> las acciones se toman.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Las aplicaciones son definidas por usted, el usuario y almacenadas para Open-AudIT para utilizar y asociarse con dispositivos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Los atributos se almacenan para Open-AudIT para utilizar en campos particulares.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Ser capaz de determinar qué máquinas se configuran lo mismo es una parte importante de la administración y auditoría de los sistemas, y ahora informar sobre que se hará simple y automatizado. Una vez que defina su base se ejecutará automáticamente contra un conjunto de dispositivos en un horario predeterminado. La producción de estas bases de referencia ejecutadas estará disponible para la visualización web, la importación a un sistema de terceros o incluso como un informe impreso.<br/> <br/> Las bases permiten combinar los datos de auditoría con un conjunto de atributos previamente definidos (su base) para determinar el cumplimiento de los dispositivos.<br/> <br/> Por ejemplo - puede crear una base de referencia de un dispositivo que ejecuta Centos 6 que actúa como uno de sus servidores de apache en un clúster. Usted sabe que este servidor en particular está configurado tal como lo desea pero no está seguro si otros servidores en el clúster están configurados exactamente el mismo. Baselines le permite determinar esto.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Los equipos se almacenan en Open-AudIT para asociar dispositivos para registrar, gestionar y estimar mejor los costos de licencias.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Componentes es un término genérico utilizado para las tablas que almacenan los atributos para un dispositivo. Estas tablas son: access_point, arp, bios, certificate, cli_config, disco, dns, file, ip, license, log, memoria, módulo, monitor, motherboard, netstat, network, nmap, óptico, pagefile, partición, policy, print_queue, processor, radio, route, san, scsi, server_item, service, share, software, task</p><p> Además clasificamos las tablas siguientes también como dispositivo relacionado: aplicación, apego, cluster, credencial, imagen.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Las credenciales se cifran cuando se almacenan en la base de datos.<br/> <br/>Cuando se ejecuta un Discovery, un dispositivo tiene sus credenciales recuperadas y probadas para la conexión primero (desde el <code>credential</code> cuadro). Si estos fallan, entonces las credenciales asociadas con el Org dado <code>credentials.org_id</code> también se prueba contra el dispositivo. Las credenciales de trabajo se almacenan en un nivel de dispositivo individual en la tabla credencial (nota - no "s" en el nombre de la tabla).<br/> <br/>Las teclas SSH se prueban antes de SSH nombre de usuario / contraseña. Al probar SSH, las credenciales también se marcarán como trabajar con sudo o ser root.<br/> <br/>Para facilitar el uso, las contraseñas de Windows no deben contener una sola o doble cita. Esta es una limitación remota WMI, no una limitación Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Las credenciales se utilizan para acceder a los dispositivos.<br/> <br/>Configurar las credenciales debe ser una de las primeras cosas que haga después de instalar Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definir sus racks y asignar dispositivos en sus posiciones. Ya tienes tus dispositivos en Open-AudIT y conoces tus ubicaciones. Open-AudIT extiende esto para permitirle crear un rack y asignarle dispositivos. Open-AudIT incluso proporcionará una visualización del rack y los dispositivos contenidos dentro. Si proporcionas una imagen de dispositivo, esa imagen se usará en la visualización. Puedes ver el estante en la pantalla y ver los mismos elementos que verías si estuvieras de pie delante de ella.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Los dispositivos en su red necesitan ser gestionados. ¿Pero cómo mantienes tus registros actualizados? Una hoja de cálculo - Defintley no. Eso estará fuera de la fecha en horas, si no días. ¿Por qué manualmente intentar mantener el ritmo? Utilice Open-AudIT para escanear automáticamente sus redes y grabar sus dispositivos - fabricante, modelo, serie y más de 100 otros atributos. Listas completas de software, servicios, discos, puertos abiertos, usuarios, etc. Ver automáticamente si se ha añadido, eliminado o cambiado un atributo.<br/> <br/>Una vez que Open-AudIT se configura, puede sentarse y relajarse. ¿Han enviado informes de cambio a usted en un horario, por ejemplo - qué nuevos dispositivos descubrimos esta semana? ¿Qué nuevo software fue instalado esta semana? ¿Hubo algún cambio de hardware el mes pasado?<br/> <br/>Ampliar en los campos almacenados fácilmente con sus propios atributos personalizados.<br/> <br/>Incluso añadir dispositivos que no están conectados a su red o aquellos dispositivos que su servidor Open-AudIT no puede alcanzar.<br/> <br/>Computadoras, conmutadores, routers, impresoras o cualquier otro dispositivo en su red - Open-AudIT puede auditarlos todos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Los descubrimientos están en el corazón mismo de lo que Open-AudIT hace.<br/> <br/>¿Cómo más sabes "Qué hay en mi red?"<br/> <br/>Los descubrimientos son elementos de datos preparados que le permiten ejecutar un descubrimiento en una red en un solo clic, sin entrar en los detalles de esa red cada vez.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Las opciones son un entorno global cambiado en el <a href="../configuration?configuration.name=discovery_default_scan_option">configuración</a>. Si usted tiene una licencia Open-AudIT Enterprise estos son settable por descubrimiento y además futher personalizable según sea necesario. Discovery Las opciones son las siguientes (incluyendo un tiempo indicitave para escanear un IP individual):<br/><br/><strong>UltraFast</strong>: <i>1 segundo</i>. Escanea sólo los puertos que Open-AudIT necesita utilizar para hablar con el dispositivo y detectar un dispositivo IOS (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> port no se considera abierto. El dispositivo debe responder a una ping Nmap. Usa el momento agresivo.<br/><br><strong>SuperFast</strong>: <i>5 segundos</i>. Escanee los 10 puertos TCP y UDP superiores, así como el puerto 62078 (Detección de aplicaciones IOS). An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> port no se considera abierto. El dispositivo debe responder a una ping Nmap. Usa el momento agresivo.<br><br/><strong>Rápido</strong>: <i>40 segundos</i>. Analice los 100 puertos TCP y UDP superiores, así como el puerto 62078 (Detección de aplicaciones IOS). An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> port no se considera abierto. El dispositivo debe responder a una ping Nmap. Usa el momento agresivo.<br/><br/><strong>Medio (clásico)</strong>: <i>90 segundos</i>. Tan cerca de un escáner de Open-AudIT tradicional como podemos lograrlo. Escanear los puertos TCP superior 1000, así como 62078 (Detección de API) y UDP 161 (SNMP). An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> puerto se considera abierto (y activará la detección de dispositivos). Los dispositivos son escaneados independientemente de una respuesta a una ping Nmap. Usa el momento agresivo.<br/><br/><strong>Mediana</strong>: <i>100 segundos</i>. Escanee los puertos TCP superior 1000 y los 100 UDP superiores, así como el puerto 62078 (Detección de aplicaciones IOS). An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> port no se considera abierto. El dispositivo debe responder a una ping Nmap. Usa el momento agresivo.<br/><br/><strong>Despacio.</strong>: <i>4 minutos</i>. Escanee los puertos TCP superior 1000 y los 100 UDP superiores, así como el puerto 62078 (Detección de aplicaciones IOS). Detección de versiones activada. An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> puerto se considera abierto (y activará la detección de dispositivos). El dispositivo debe responder a una ping Nmap. Usar el tiempo normal.<br/><br/><strong>UltraSlow</strong>: <i>20 minutos</i>. No recomendado. Escanear los puertos TCP y UDP superiores, así como el puerto 62078 (Detección de aplicaciones IOS). Los dispositivos son escaneados independientemente de una respuesta a una ping Nmap. Detección de versiones activada. An <code>open|filtered</code> puerto se considera abierto. A <code>filtered</code> puerto se considera abierto (y activará la detección de dispositivos). Usar el tiempo cortés.<br/><br/><strong>Aduanas</strong>: <i>Tiempo desconocido</i>. Cuando se alteran opciones distintas de las establecidas por un preset de descubrimiento estándar.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Los grupos se utilizan como listas simples de dispositivos que coinciden con las condiciones requeridas. Si se solicita utilizando JSON, devuelven una lista de <code>devices.id</code> sólo. Si se solicita utilizando la interfaz web, devuelven la lista de atributos de columna estándar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Si el usuario inicia sesión en Open-AudIT no tiene acceso a la búsqueda LDAP (y está utilizando OpenLDAP), puede utilizar otra cuenta que tiene este acceso. Usar el <code>ldap_dn_account</code> y <code>ldap_dn_password</code> para configurar esto.<br/> <br/><strong>Documentación útil</strong><br/> <br/><a href="/index.php/auth/help">General Auth Ayuda</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Usando Entra para Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Usando OKTA para Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Solución de problemas LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Usuarios, Roles y Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Si agrega un tipo de dispositivo, para mostrar el icono asociado tendrá que copiar manualmente el archivo .svg formateado al directorio:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Si agrega un tipo de ubicación, para mostrar el icono asociado tendrá que copiar manualmente el icono 32x32px al directorio:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Cuando el <i>recursos</i> es un <code>device</code>, válido <i>tipos</i> son: <code>class</code>, <code>environment</code>, <code>status</code> y <code>type</code>. Si <i>recursos</i> es <code>locations</code> o <code>org</code> el único válido <i>Tipo</i> es <code>type</code>. Si <i>recursos</i> es un <code>query</code> el único válido <i>Tipo</i> es <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Si tiene la intención de auditar completamente sus máquinas de nube, no olvide que también necesitará esas credenciales guardadas en Open-AudIT.</p><p>Asegúrese de permitir los puertos correctos si está utilizando Microsoft Azure (22 para SSH, etc). Compruebe su máquina virtual - confiar Reglas de red.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Si selecciona un tipo de Lista, el campo de "valores" estará habilitado. Usted debe poner una lista separada de los valores seleccionables aquí. Estos se mostrarán en una caja desplegable cuando se edita el campo.<br/> <br/>Como la mayoría de otros atributos, Fields puede ser editado a granel. Utilice la función Bulk Edit como lo haría normalmente y verá los campos están disponibles para la entrada.<br/> <br/>Vea la pantalla de detalles del dispositivo, abra la sección que contiene el campo y (si tiene acceso suficiente) puede hacer clic en el valor de campo para editarlo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>En el mundo siempre cambiante de la seguridad informática, donde se descubren nuevas vulnerabilidades y se remplazan cada día, el cumplimiento de la seguridad debe ser un proceso continuo. También debe incluir una forma de ajustar las políticas, así como la evaluación periódica y la vigilancia del riesgo. El ecosistema OpenSCAP proporciona herramientas y políticas personalizables para una implementación rápida, rentable y flexible de estos procesos.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Las integraciones le permiten configurar la selección de dispositivos y los horarios para Open-AudIT para hablar con sistemas externos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Los sistemas de escritorio de Windows tienen limitaciones de red que pueden afectar el rendimiento de Open-AudIT. La pila TCP/IP limita el número de intentos de conexión TCP incompletos simultáneos. Una vez alcanzado el límite, los intentos de conexión posteriores se ponen en una cola y se resolverán a un ritmo fijo (10 por segundo). Si muchos entran en la cola, pueden ser abandonados. Y finalmente, Apache será reiniciado por el sistema operativo. Por esta razón, instalar Open-AudIT en un sistema operativo Windows de escritorio no es compatible.<br/><br/>No hay nada malo en el código Open-AudIT, ni podemos hacer nada para abordar este problema en las máquinas cliente de Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Los detalles del tiempo de Nmap se encuentran en la parte inferior de esta página enlazada <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Desde esa página:<br/> <br/><em>Si usted está en una banda ancha decente o conexión con ethernet, recomendaría siempre utilizar -T4 (Agresivo). Algunas personas aman -T5 (Insane) aunque es demasiado agresivo para mi gusto. Las personas a veces especifican -T2 (Polite) porque piensan que es menos probable que se estrellan hosts o porque se consideran educados en general. A menudo no se dan cuenta de lo lento -T2 realmente es. Su escaneo puede tardar diez veces más que un escaneo predeterminado. Los fallos de la máquina y problemas de ancho de banda son raros con las opciones de tiempo predeterminado -T3 (Normal) y por lo que normalmente recomiendo que para los escáneres cautelosos. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT se puede configurar para utilizar diferentes métodos para autenticar a un usuario y, además, crear una cuenta de usuario utilizando roles y orgs asignados basados en la membresía de grupo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT puede recuperar detalles sobre un archivo o directorio de archivos y monitorear estos archivos para cambios según otros atributos en la base de datos Open-AudIT.<br/> <br/>Esta función funciona fuera de la caja para servidores Linux Open-AudIT, pero necesita un cambio en el nombre de la cuenta de servicio bajo un servidor Windows Open-AudIT.<br/> <br/>Los clientes compatibles son Windows y Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT puede recuperar detalles sobre un archivo, preguntar al administrador de paquetes nativo si son conocidos y monitorear estos archivos para cambios según otros atributos en la base de datos Open-AudIT.<br/> <br/>Los clientes compatibles son Linux solamente.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud Puede almacenar información en campos personalizados que están asociados con cada dispositivo.<br/> <br/>Una vez que se ha creado un campo adicional se puede utilizar en consultas y grupos como cualquier otro atributo en la base de datos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT viene con muchas consultas incorporadas. Si usted requiere una consulta específica y ninguna de las consultas pre-empaquetadas se ajustan a sus necesidades, es bastante fácil crear una nueva y cargarla en Open-AudIT para correr.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT viene con muchos resúmenes incorporados. Si usted necesita un resumen específico y ninguno de los resúmenes preenvasados se ajustan a sus necesidades, es bastante fácil crear uno nuevo y cargarlo en Open-AudIT para correr.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT es apoyado por FirstWave con un increíble nivel de apoyo. Si prefieres una comunidad activa de proveedores de apoyo, también hay eso. ¿Dónde más puede hablar directamente con los desarrolladores y obtener una respuesta dentro de 24 horas? ¡Pruébalo con otros productos! Increíble apoyo. Parada completa. Necesitas apoyo, proporcionamos apoyo. No sis o peros. Gran apoyo. Período.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT proporciona multi-tenancy fuera de la caja!<br/> <br/>Las orgs (organizaciones) en Open-AudIT son un elemento clave. Un usuario tiene una Org primaria, así como una lista de Orgs que pueden acceder. Un usuario combina esto con una lista de "Roles" asignados que definen a qué acciones pueden tomar los elementos asignados a los Orgs a los que tienen acceso. La combinación de los usuarios "orgs" y "roles" definen lo que pueden y no pueden hacer dentro de Open-AudIT.<br/> <br/>La mayoría de los artículos en Open-AudIT se asignan a un Org. Dispositivos, Lugares, Redes, etc.<br/> <br/>Las orgs pueden tener orgs infantiles. Piense en una estructura organigrama (árbol). Si un usuario tiene acceso a una Org específica, también tienen acceso a esa descendencia de Orgs. Para más información, vea esto <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT proporciona multi-tenancy fuera de la caja!<br/> <br/>Las orgs (organizaciones) en Open-AudIT son un elemento clave. Un usuario tiene una Org primaria, así como una lista de Orgs que pueden acceder. Un usuario combina esto con una lista de "Roles" asignados que definen a qué acciones pueden tomar los elementos asignados a los Orgs a los que tienen acceso. La combinación de los usuarios "orgs" y "roles" definen lo que pueden y no pueden hacer dentro de Open-AudIT.<br/> <br/>La mayoría de los artículos en Open-AudIT se asignan a un Org. Dispositivos, Lugares, Redes, etc.<br/> <br/>Las orgs pueden tener orgs infantiles. Piense en una estructura organigrama (árbol). Si un usuario tiene acceso a una Org específica, también tienen acceso a esa descendencia de Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Vista rápida el estado de los dispositivos en su red.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Funciones en público Es un elemento clave. Un usuario tiene una Org primaria, así como una lista de Orgs que pueden acceder. Un usuario combina esto con una lista de roles asignados que definen a qué acciones pueden tomar sobre los elementos asignados a los Orgs a los que tienen acceso. La combinación de los usuarios "orgs" y "roles" definen lo que pueden y no pueden hacer dentro de Open-AudIT.<br/> <br/>Obtenga la experiencia completa de Open-AudIT Enterprise. Crear roles permite un control fino sobre lo que sus usuarios pueden hacer dentro de Open-AudIT.<br/> <br/>El método principal de autorización (lo que un usuario puede hacer) se basa en los roles de los usuarios. Los roles predeterminados se definen como admin, org_admin, reportero y usuario. Cada papel tiene un conjunto de permisos (Crear, Leer, Actualizar, Eliminar) para cada punto final. La capacidad de definir funciones adicionales y editar funciones existentes está habilitada en Open-AudIT Enterprise.<br/> <br/>Las funciones también se pueden utilizar con la autorización LDAP (Active Directory y OpenLDAP). Las instalaciones con licencia empresarial tienen la capacidad de personalizar el grupo LDAP para cada función definida.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Las reglas examinan los atributos y hacen cahnges basándose en la regla apropiada.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Las opciones de exploración le permiten aplicar fácilmente un conjunto de opciones a un descubrimiento.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Mapa geográfico sencillo, intuitivo y preciso proporcionado por Google Maps. Open-AudIT aprovecha Google Maps para proporcionar mapas geográficos interactivos en vivo de las ubicaciones de dispositivos. Conversión automatizada de direcciones callejeras a geocódigos y longitud / latitud.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Los paquetes de software se utilizan para determinar si se instalan antivirus, backup, firewall, software aprobado o prohibido.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Algunos ejemplos de atributos válidos de Subnet son: 192.168.1.1.1 (una sola dirección IP), 192.168.1.0/24 (una subred), 192.168.1-3.1-20 (una gama de direcciones IP).<br/> <br/><em>NOTA</em> - Sólo una subred (como por ejemplo - 192.168.1.0/24) podrá crear automáticamente una red válida para Open-AudIT. <br/> <br/>Si utiliza un tipo Active Directory, asegúrese de tener credenciales adecuadas para hablar con su Controlador de Dominio ya en <a href="../credentials">credenciales</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Las normas se almacenan en Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Los clientes compatibles son Linux solamente.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Las tareas tienen un horario que refleja el calendario de unix cron. Los atributos por minuto, hora, día_de_mes, mes, day_of_week todos actúan según las definiciones de cron. Puede seleccionar varios de estos valores usando valores seperados de coma (sin espacios). Puede seleccionar cada valor usando *.<br/> <br/>El <code>type</code> de la tarea puede ser una de: bases de referencia, coleccionistas, descubrimientos, consultas, informes o resúmenes.<br/> <br/>Si desea programar un Baseline o Discovery, necesitará crear estos antes de crear las tareas. Debe utilizar el ID del tipo de artículo en <code>sub_resource_id</code>. Por ejemplo, si desea programar un Discovery, utilice ese ID de Discoveries en particular <code>sub_resource_id</code>.<br/> <br/>El valor para <code>uuid</code> es específico para cada servidor Open-AudIT. Su valor único se puede encontrar en la configuración.<br/> <br/>El <code>options</code> atributo es un documento JSON que contiene cualquier atributo adicional requerido para ejecutar la tarea. Los atributos adicionales para informes, consultas y resúmenes son: <code>email_address</code> y <code>format</code>. El atributo extra para Bselines es <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>El <code>type</code> de la ubicación asignará su icono.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>El punto final de Atributos le permite añadir valores personalizados a diferentes atributos en Open-AudIT, en el momento en que esta característica funciona en los atributos Clase, Medio Ambiente, Estado y Tipo en Dispositivos, el atributo Tipo para ambos Lugares y Orgs, así como el Menú Categoría para consultas. Si usted ve un artículo de uno de los tipos prvious (por ejemplo, ver una Lkocation) se dará cuenta de que el atributo Tipo debe ser seleccionado desde una caja desplegable. Aquí es donde se almacenan esos valores. Por lo tanto, si desea agregar un nuevo tipo para ser elegido para un lugar, agréguelo utilizando la característica de los atributos.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La característica de los coleccionistas le permite gestionar fácilmente muchos ordenadores "collector" que realizan el descubrimiento de la red. Todos los coleccionistas son controlados centralmente desde el servidor. Los únicos puertos de red requeridos entre el Coleccionista y el Servidor son 80 y/o 443.<br/> <br/>Hace que la gestión de redes dispares sea rápida, fácil y sencilla. Las licencias Open-AudIT Enterprise tienen una licencia de colector única incluida y tienen la opción de comprar más según sea necesario..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La sección SELECT de su SQL <em>Debe</em> contienen columnas completamente cualificadas. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La sección WHERE de su SQL <em>Debe</em> contener <code>WHERE @filter</code> así Open-AudIT sabe restringir su consulta a los Orgs apropiados. SQL no contiene esta condición resultará en la consulta que no se crea, a menos que tenga el rol de Admin.<br/> <br/>Una consulta de ejemplo SQL mostrando atributos en dispositivos que tienen un <code>os_group</code> atributo de "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La sección SELECT de su SQL <em>Debe</em> sólo contienen <code>DISTINCT(devices.id)</code>.<br/> <br/>La sección WHERE de su SQL <em>Debe</em> contener <code>WHERE @filter</code> así Open-AudIT sabe restringir su consulta a los Orgs apropiados. SQL no contiene esta condición resultará en el grupo que no se crea.<br/> <br/>Un ejemplo para SQL para seleccionar todos los dispositivos que ejecutan el sistema operativo Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>El endpoint de licencia le permite seguir el número de licencias encontradas en sus dispositivos.<br/> <br/>Para crear una entrada para rastrear tus licencias <em>Debe</em> para proporcionar un nombre, una organización, el número de licencias adquiridas y el nombre del software. Sobre el terreno <code>match_string</code> debe proporcionar el nombre del software que desea seguir, puede utilizar el signo de porcentaje (%) como un comodín en el match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>La red debe estar en el formato 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Los artículos secundarios primarios y opcionales deben estar completamente calificados - es decir, dispositivos. tipo o software. nombre.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>No hay necesidad de hacer nada si está ejecutando Open-AudIT en un servidor Linux.<br/><br/>Los clientes de Windows están bien y no requieren ninguna acción especial, sin embargo.... para habilitar esta característica el script de auditoría debe ejecutarse localmente en el sistema de Windows objetivo. No se puede ejecutar remotamente como lo hacemos con las llamadas WMI al ejecutar el script de auditoría en una máquina de Windows, mientras que apunta a una segunda máquina de Windows. Para ello necesitamos copiar el script de auditoría a la máquina de Windows objetivo y luego ejecutarlo. Desafortunadamente, la cuenta de servicio que Apache ejecuta es la cuenta del Sistema Local. Esta cuenta no tiene acceso a recursos remotos (basados en redes). Para trabajar en torno a esta cuestión, el servicio debe ejecutarse bajo otra cuenta. Es más fácil utilizar la cuenta de Administrador local, pero puede probar cualquier cuenta que le guste mientras tenga los privilegios necesarios. La cuenta del Sistema Local tiene tanto acceso local como la cuenta del Administrador local.<br/><br/>Vea nuestra página sobre habilitación <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Funcionamiento de servicio de Apache Open-AudIT en Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Estos son los dispositivos que viven dentro de un rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Este endpoint le permite añadir sus datos de infraestructura de la nube. Open-AudIT llegará a sus nubes usando su API nativa y devolverá sus servidores, al igual que cualquier otro dispositivo en Open-AudIT.<br/> <br/><em>NOTA</em> - Para usar esta característica, nosotros <em>Debe</em> habilitar los elementos de configuración match_mac (para AWS) y match_hostname (para Azure). Esto se hará automáticamente la primera vez que se ejecuta un descubrimiento en la nube.<br/> <br/>Credenciales para su nube (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> o <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) son necesarios.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilidades reportando basado en la alimentación NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Inicialmente configuramos la lista predeterminada de scripts con las opciones predeterminadas. Estos scripts predeterminados no se pueden eliminar. Puede crear scripts adicionales para su uso por usted según sea necesario. Su script estará basado en uno de los scripts existentes y tendrá opciones personalizadas aplicadas. Los scripts se pueden descargar de la página de lista en el menú - título Discover - Scripts de auditoría - confiar Scripts de auditoría de listas<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Al utilizar Regex para emparejar, se puede encontrar una página útil en la <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Sitio web de PHP</a>. Algunas diferencias a Perl Regex se pueden encontrar <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">aquí.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets se pueden crear fácilmente para mostrar lo que sea específico para su entorno en sus paneles.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Con Open-AudIT Profesional y Enterprise puede automatizar y programar descubrimientos, generación de informes o cheques de base para funcionar cuando desee, y tan a menudo como usted necesita. Programa tus descubrimientos para correr por la noche y los informes para ser generados y enviados por correo electrónico al personal clave cada mañana. Horarios complejos o simples, descubrimiento de dispositivos y generación de informes está a sólo un clic.<br/> <br/>Crear calendarios de descubrimiento individuales para cada subred o controlador AD, añadir en informes que se crearán para audiencias específicas. Desarrollar calendarios simples o complejos para apoyar las necesidades de la empresa, evitar copias de seguridad o el impacto en las operaciones, o simplemente para extender la carga y acelerar la finalización de la auditoría.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Usted puede crear un script con todas las opciones para cualquiera de los scripts de auditoría existentes - no sólo Windows. AIX, ESX, Linux, OSX y Windows están todos cubiertos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Puedes usar el signo de porcentaje % como un comodín en el match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Sus racks ayudan a refinar exactamente dónde están sus dispositivos.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOTA</strong> - Usted está accediendo a esta URL del servidor local Open-AudIT. El script descargado no será capaz de enviar cuando se ejecuta en cualquier otra máquina. Si necesita auditar otras máquinas, descargue el script de cualquier máquina remota, no use un navegador en el servidor Open-AudIT.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Un elemento CVE que no contiene un filtro para determinar el elemento(s) afectado.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'A Google Maps API La clave es necesaria para esta función.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Un conjunto JSON de ID de dispositivo que tendrá este parámetro de referencia ejecutado.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Un conjunto JSON de objetos que coinciden con el nombre del software tomado del CVE, enriquecido con el nombre del software recuperado por Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Un conjunto de valores JSON para probar esta vulnerabilidad.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Un documento JSON que contiene los Orgs asignados a este usuario. IDs taken from <code>orgs.id</code>. Si un usuario tiene acceso a una Org, tiene acceso a esa descendencia de Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Un documento JSON que contiene los atributos requeridos dependiendo de <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Un documento JSON que contiene los atributos requeridos sobreriding el descubrimiento elegido_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Un documento JSON que contiene los atributos necesarios sobrescribiendo las opciones de juego del dispositivo predeterminado.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Un documento JSON que contiene las funciones asignadas a este usuario. Nombres del papel tomados <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Un objeto JSON que contiene una serie de atributos para cambiar si el partido ocurre.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Un objeto JSON que contiene una serie de atributos para coincidir.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Un objeto JSON que contiene opciones específicas de colección.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Un objeto JSON poblado a través de un descubrimiento de Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'A JSON representation containing the details of the queue item to be executed.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Una representación JSON de los campos para esta integración.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Una representación JSON de las pruebas individuales y sus resultados en todos los dispositivos que esta línea de referencia ha sido ejecutada.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Una representación JSON de las pruebas que conforman esta política.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Una LAN puede conectarse a una WAN usando un router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Una red de área metropolitana (MAN) es una gran red informática que generalmente abarca una ciudad o un campus grande.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A El descubrimiento de semillas utiliza un IP inicial para recuperar los IPs de cualquier otro dispositivo que conozca, añade esos IPs a la lista y escanea aquellos - de nuevo pidiendo cualquier IPs que esos dispositivos adicionales conozcan. Levántate y repite. Es lo suficientemente inteligente para saber si ya ha escaneado una IP dada en su ejecución y descarta a cualquier ya escaneado (o incluso en la lista para ser escaneado).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Un descubrimiento de Subnet escaneará los IPs proporcionados.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Una URL proporcionada al agente que luego descargará el archivo y lo almacenará en el disco local.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Una URL a un archivo para descargar.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Una red de columna vertebral es parte de una infraestructura de red informática que proporciona un camino para el intercambio de información entre diferentes LANs o sub-redes. Una columna vertebral puede unir diversas redes dentro del mismo edificio, a través de diferentes edificios, o sobre una amplia área.<br/><br/>Por ejemplo, una gran empresa podría implementar una red de columna vertebral para conectar departamentos que se encuentran en todo el mundo. El equipo que une las redes departamentales constituye la columna vertebral de la red. Al diseñar una red de columna vertebral, el rendimiento de la red y la congestión de la red son factores críticos a tener en cuenta. Normalmente, la capacidad de red es mayor que la de las redes individuales conectadas a ella.<br/><br/>Otro ejemplo de red de columna vertebral es la columna vertebral de Internet, que es el conjunto de redes de área amplia (WAN) y routers centrales que unen todas las redes conectadas a Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un campo calculado que muestra el número de veces que esta pieza de software se encontró en los ordenadores de la Org seleccionada (y sus descendientes si se configuran).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Una red de área del campus (CAN) está compuesta por una interconexión de LAN dentro de una zona geográfica limitada. El equipo de redes (switches, routers) y medios de transmisión (fibra óptica, planta de cobre, cableado Cat5, etc.) son casi totalmente propiedad del inquilino / propietario del campus (una empresa, universidad, gobierno, etc.).<br/><br/>Por ejemplo, es probable que una red universitaria del campus vincule una variedad de edificios del campus para conectar colegios o departamentos académicos, la biblioteca y las residencias estudiantiles.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Un puerto cerrado es accesible (recibe y responde a paquetes de sonda Nmap), pero no hay aplicación escuchando en él. Pueden ser útiles para demostrar que un host está en una dirección IP (descubrimiento host o escaneo de ping), y como parte de la detección del sistema operativo. Debido a que los puertos cerrados son accesibles, puede valer la pena escanear más adelante en caso de que algunos se abren. Los administradores tal vez deseen considerar la posibilidad de bloquear esos puertos con un cortafuegos. Luego aparecían en el estado filtrado, discutido después.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un coleccionista está en modo Coleccionista o Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Una lista separada de CVEs aplicable.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Una lista separada de valores coma, uno de los cuales puede ser seleccionado.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un comando para correr. Cuando el agente está basado en Windows, este comando se ejecuta desde dentro del agente de powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Un dashboard está compuesto por tres columnas y dos filas de lo que llamamos <i>widgets</i>. Un widget es muy similar a un resumen, sólo tomamos el concepto sumario un poco más lejos. Los Widgets se crean de forma sencilla utilizando un par de cajas desplegables - o puede elegir utilizar su propio SQL para la personalización completa.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Un puerto filtrado se considera abierto (y activará la detección de dispositivos).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Una red global de área (GAN) es una red utilizada para apoyar el móvil en un número arbitrario de redes inalámbricas, áreas de cobertura por satélite, etc. El reto clave en las comunicaciones móviles es la entrega de comunicaciones de usuarios de un área de cobertura local a la siguiente. En IEEE Project 802, esto implica una sucesión de LAN inalámbrica terrestre.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Una red de área residencial (HAN) es una LAN residencial utilizada para la comunicación entre dispositivos digitales normalmente desplegados en el hogar, por lo general un pequeño número de ordenadores y accesorios personales, como impresoras y dispositivos móviles de computación. Una función importante es el intercambio de acceso a Internet, a menudo un servicio de banda ancha a través de un proveedor de televisión por cable o línea de suscriptores digitales (DSL).';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Una lista de puertos TCP personalizados a escanear (22 es SSH, 135 es WMI, 62078 es sincronización de iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Una lista de puertos UDP personalizados para escanear (161 es SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Una red de área local (LAN) es una red que conecta ordenadores y dispositivos en una zona geográfica limitada, como un hogar, escuela, edificio de oficinas o un grupo de edificios situados de cerca. Cada ordenador o dispositivo en la red es un nodo. Las redes inalámbricas están basadas en la tecnología Ethernet. Las normas más recientes, como la UIT-T G.hn, también proporcionan una forma de crear una LAN cableada utilizando cables existentes, como cables coaxiales, líneas telefónicas y líneas eléctricas.<br/><br/>Las características definitorias de una red local, en contraste con una red de área amplia (WAN), incluyen tasas de transferencia de datos más altas, rango geográfico limitado y falta de dependencia de las líneas arrendadas para proporcionar conectividad. Las tecnologías actuales Ethernet u otras tecnologías IEEE 802.3LAN operan a tasas de transferencia de datos de hasta 100 Gbit/s, estandarizadas por IEEE en 2010. Actualmente, 400 Gbit/s Ethernet está siendo desarrollado.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Una ubicación es una dirección física que puede tener dispositivos asociados con ella. Puede asignar las coordenadas y si hay dispositivos asignados, la ubicación aparecerá en el mapa cuando tenga una licencia Open-AudIT Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Un nombre de ubicación le ayudará a encontrar estos dispositivos en el futuro.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un número menor significa que se aplicará antes de otras reglas.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un número menor significa que se aplicará antes de otras reglas. El peso predeterminado es 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Un nuevo usuario conectado a Open-AudIT y fue autenticado y autorizado por el Sever LDAP. Ese usuario fue creado en Open-AudIT y conectado. Éxito.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Un paquete es una pieza de softare instalado. Un paquete tiene un tipo - antivirus, aprobado, copia de seguridad, prohibido, nube, firewall, ignorado, licencia u otro.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Una contraseña (establecida como un hash) que permite el logotipo al utilizar la autenticación de la aplicación.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Una persona tiene una cuenta en la aplicación Open-AudIT. Su cuenta de usuario tiene una lista de funciones y organizaciones asociadas. Los roles que el usuario ha determinado lo que puede hacer. Las Organizaciones un usuario determina los ítems WHICH en los que pueden actuar.<br/><br/>Cuando un usuario solicita realizar una operación (crear, leer, actualizar, borrar) sobre un artículo de la colección, se consultan los roles para ver si se les permite realizar esa acción, entonces se consultan los orgs para determinar si el artículo de la colección pertenece a un org que el usuario tiene permiso para actuar.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Una red de área personal (PAN) es una red informática utilizada para la comunicación entre ordenadores y diferentes dispositivos tecnológicos de información cerca de una persona. Algunos ejemplos de dispositivos que se utilizan en un PAN son computadoras personales, impresoras, máquinas de fax, teléfonos, PDA, escáneres e incluso consolas de videojuegos. Un PAN puede incluir dispositivos cableados e inalámbricos. El alcance de un PAN se extiende normalmente a 10 metros. Un PAN cableado generalmente se construye con conexiones USB y FireWire, mientras que las tecnologías como Bluetooth e comunicación infrarroja normalmente forman un PAN inalámbrico.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Una consulta es esencialmente una declaración SQL. Esta declaración se ejecuta en contra de la base de datos con la adición automática del límite, filtrado para aplicar sólo a los artículos solicitados y sólo los artículos que el usuario tiene permiso para ver. Una consulta se puede crear usando el menú - confiar Gestionar: Consultas - Crear consultas. Las consultas contienen un org_id y por lo tanto se limitan a los usuarios apropiados. Un usuario debe tener la función org_admin o reportero para crear, actualizar o eliminar una consulta. Todos los usuarios pueden ejecutar una consulta. Una consulta tiene un atributo de nombre utilizado para el elemento de menú, así como un atributo de categoría de menú. Esto le dice al Open-Audit GUI que submenú coloca la consulta en. También hay una pantalla de menú que debe configurarse <i>Sí.</i> para permitir la consulta en el GUI (<i>n</i> para evitar que la consulta aparezca en absoluto). La consulta todavía funcionaría si se llama <code>id</code>, independientemente del valor de las pantallas del menú.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Un rack es una colección de dispositivos que se asignan una posición y altura dentro del rack. Un dispositivo puede opcionalmente tener una imagen asociada con ella. Un estante se coloca en una fila. Hemos creado un sistema muy granular para el posicionamiento de racks, que es el siguiente. En el nivel superior (como siempre) está la Organización (Org). Un Org puede tener múltiples ubicaciones (como siempre ha sido el caso). Con la adición de la función Racks, una ubicación ahora puede contener uno o más Edificios. Un edificio puede contener uno o más Pisos. Un piso puede contener una o más Habitaciones. Una habitación puede contener una o más filas. Esto suena como mucho trabajo, pero los defectos son creados para usted. Crear una nueva ubicación y los subcomponentes se crearán automáticamente para usted. Si necesitas más elementos (construcción, habitaciones, etc.) puedes añadirlos como quieras. Un rack también puede ser parte de un <i>pod</i> de percheros. El atributo pod funciona como una etiqueta, en lugar de un estricto modelo jerárquico de herencia según edificios, pisos, etc.<br/><br/>Los racks son una característica disponible para clientes autorizados Open-AudIT Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un dominio de enrutamiento o espacio de dirección donde las direcciones IP y direcciones MAC son únicas.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'A continuación se muestra un archivo cron para Linux. Esto debe ser colocado';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Una zona de seguridad es un dominio administrativo o de política dentro del dominio de red.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Un descubrimiento de semillas es otro tipo de descubrimiento, donde proporciona la IP de un solo <i>semillas</i> Dispositivo. Este dispositivo es auditado, y cualquier IP que sepa se añade a la lista de IPs para ser auditado. Entonces, esos dispositivos son auditados y cualquier IP que conozcan también se añade a la lista de IPs para la auditoría. Este proceso continúa dentro de los parámetros configurados por el usuario.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Una breve descripción de la entrada de registro.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Una red de área de almacenamiento (SAN) es una red dedicada que proporciona acceso al almacenamiento de datos consolidado y de nivel bloque. SANs se utilizan principalmente para hacer dispositivos de almacenamiento, tales como arrays de disco, bibliotecas de cinta y jukeboxes ópticos, accesibles a servidores para que los dispositivos aparezcan como dispositivos conectados localmente al sistema operativo. A SAN típicamente tiene su propia red de dispositivos de almacenamiento que generalmente no son accesibles a través de la red de área local por otros dispositivos. El costo y la complejidad de las SANs descendieron a principios de los años 2000 a niveles que permiten una adopción más amplia tanto en entornos empresariales como en entornos empresariales pequeños a medianos.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Una cuerda que coincide con la <code>software.name</code> atributo. Puede utilizar el comodín SQL estándar del porcentaje (%) para coincidir con uno o más caracteres.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Un sistema estructurado para gestionar la información confidencial';

$GLOBALS["lang"]['A timestamp.'] = 'Un momento.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Un usuario tiene una Org primaria, así como una lista de Orgs que pueden acceder. Un usuario combina esto con una lista de roles asignados que definen a qué acciones pueden tomar sobre los elementos asignados a los Orgs a los que tienen acceso. La combinación de un usuario <i>orgs</i> y <i>Funciones</i> definir lo que pueden y no pueden hacer dentro de Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Un usuario tendrá una lista de organizaciones asociadas (orgs). Cada org que el usuario tiene les permitirá actuar sobre elementos dentro de esa org según su(s).<br/><br/>Todos los orgs excepto el org predeterminado tienen un padre. Piensa en un Chart de Org. Si un usuario tiene permiso en una Org, también tienen permiso sobre cualquier descendiente de esa Org.<br/><br/>Los usuarios también tienen permiso en una org para ver los artículos de orgs padre para ciertas colecciones. Estos son: dashboards, discovery_scan_options, campos, archivos, grupos, consultas, informes, roles, reglas, scripts, resúmenes, widgets.<br/><br/>No olvides que tienes control granular sobre lo que los usuarios pueden ver y hacer usando Roles en Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Un usuario tendrá una lista de organizaciones asociadas (orgs). Cada org que el usuario tiene les permitirá actuar sobre elementos dentro de esa org según su(s).<br/><br/>Todos los orgs excepto el org predeterminado tienen un padre. Piensa en un Chart de Org. Si un usuario tiene permiso en una Org, también tienen permiso sobre cualquier descendiente de esa Org.<br/><br/>También hemos permitido que un usuario con permiso en una org para ver los artículos de orgs padre para ciertas colecciones. Estos son: dashboards, discovery_scan_options, campos, archivos, grupos, consultas, roles, reglas, scripts, resúmenes, widgets.<br/><br/>No olvides que tienes control granular sobre lo que los usuarios pueden ver y hacer usando';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Una red virtual privada (VPN) es una red de superposición en la que algunos de los enlaces entre nodos son llevados por conexiones abiertas o circuitos virtuales en una red más grande (por ejemplo, Internet) en lugar de por cables físicos. Se dice que los protocolos de capa de enlace de datos de la red virtual se túnelizan a través de la red más grande cuando este es el caso. Una aplicación común es comunicaciones seguras a través de Internet público, pero una VPN no necesita tener características de seguridad explícitas, tales como autenticación o cifrado de contenido. VPNs, por ejemplo, se puede utilizar para separar el tráfico de diferentes comunidades de usuarios sobre una red subyacente con fuertes características de seguridad.<br/><br/>VPN puede tener el mejor rendimiento, o puede tener un acuerdo de nivel de servicio definido (SLA) entre el cliente VPN y el proveedor de servicios VPN. Generalmente, una VPN tiene una topología más compleja que punto a punto.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Una vulnerabilidad que afecta a la disponibilidad puede permitir que los atacantes interrumpan los servicios, sistemas de choque o causar denegación de servicio (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Una vulnerabilidad que afecte a la confidencialidad puede permitir a los atacantes leer datos confidenciales, como información personal, credenciales o datos de negocios patentados (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Una vulnerabilidad que afecta a la integridad puede permitir a los atacantes modificar datos, inyectar código malicioso o alterar las configuraciones del sistema (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Una vulnerabilidad puede ser editada y los nombres de paquetes más específicos proporcionados cuando los datos de enriquecimiento es insuficiente o el SQL generado no es bastante correcto.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Un elemento de vulnerabilidad en Open-AudIT se puede considerar como esencialmente una consulta contra su base de datos para determinar su potencial exposición a un informe CVE dado. Una vulnerabilidad se compone del informe CVE, junto con datos de enriquecimiento de FirstWave. Estos dos elementos se combinan para producir una consulta adecuada que se descarga automáticamente desde FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Una red de área amplia (WAN) es una red informática que cubre una gran área geográfica como una ciudad, país, o abarca incluso distancias intercontinentales. A WAN utiliza un canal de comunicaciones que combina muchos tipos de medios como líneas telefónicas, cables y ondas de aire. A WAN suele hacer uso de instalaciones de transmisión proporcionadas por transportistas comunes, como compañías telefónicas. Las tecnologías WAN generalmente funcionan en las tres capas inferiores del modelo de referencia OSI: la capa física, la capa de enlace de datos y la capa de red.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TODOS los IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Acceso Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentación de API';

$GLOBALS["lang"]['API Key required.'] = 'API Key requerida.';

$GLOBALS["lang"]['API Result'] = 'Resultado de API';

$GLOBALS["lang"]['About'] = 'Acerca de';

$GLOBALS["lang"]['Above are the only required items.'] = 'Arriba están los únicos artículos requeridos.';

$GLOBALS["lang"]['Accept'] = 'Aceptar';

$GLOBALS["lang"]['Access Model'] = 'Modelo de acceso';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Acceso Token';

$GLOBALS["lang"]['Access Token'] = 'Acceso Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Access to the admin$ share and RPC uses the SMB2 protocol.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Medida';

$GLOBALS["lang"]['Action'] = 'Medida';

$GLOBALS["lang"]['action_audit'] = 'Auditoría de actividades';

$GLOBALS["lang"]['Action Audit'] = 'Auditoría de actividades';

$GLOBALS["lang"]['action_command'] = 'Action Command';

$GLOBALS["lang"]['Action Command'] = 'Action Command';

$GLOBALS["lang"]['action_date'] = 'Fecha de acción';

$GLOBALS["lang"]['Action Date'] = 'Fecha de acción';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositivos de acción asignados a la ubicación';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositivos de acción asignados a la ubicación';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositivos de acción asignados a org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositivos de acción asignados a org';

$GLOBALS["lang"]['action_download'] = 'Acción Descargar';

$GLOBALS["lang"]['Action Download'] = 'Acción Descargar';

$GLOBALS["lang"]['action_uninstall'] = 'Action Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Action Uninstall';

$GLOBALS["lang"]['actioned'] = 'Actioned';

$GLOBALS["lang"]['Actioned'] = 'Actioned';

$GLOBALS["lang"]['actioned_by'] = 'Actioned by';

$GLOBALS["lang"]['Actioned By'] = 'Actioned by';

$GLOBALS["lang"]['actioned_date'] = 'Fecha de adopción';

$GLOBALS["lang"]['Actioned Date'] = 'Fecha de adopción';

$GLOBALS["lang"]['actions'] = 'Acciones';

$GLOBALS["lang"]['Actions'] = 'Acciones';

$GLOBALS["lang"]['Activate'] = 'Activar';

$GLOBALS["lang"]['Activate Free License'] = 'Activar Licencia Gratis';

$GLOBALS["lang"]['Activate Key'] = 'Activar la clave';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activar una licencia de Enterprise gratuita';

$GLOBALS["lang"]['Active'] = 'Activo';

$GLOBALS["lang"]['Active / Active'] = 'Activo / activo';

$GLOBALS["lang"]['Active / Passive'] = 'Activo / pasivo';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory y OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Añadir';

$GLOBALS["lang"]['Add Credentials'] = 'Agregar credenciales';

$GLOBALS["lang"]['Add Device'] = 'Agregar dispositivo';

$GLOBALS["lang"]['Add Device to Application'] = 'Agregar dispositivo a la aplicación';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Añadir dispositivo a la lista';

$GLOBALS["lang"]['Add Exception'] = 'Añadir Excepción';

$GLOBALS["lang"]['Add Field'] = 'Agregar campo';

$GLOBALS["lang"]['Add If'] = 'Agregar si';

$GLOBALS["lang"]['Add Policies from Device'] = 'Agregar políticas desde el dispositivo';

$GLOBALS["lang"]['Add Policy'] = 'Add Policy';

$GLOBALS["lang"]['Add Then'] = 'A continuación';

$GLOBALS["lang"]['Add Your Credentials'] = 'Agregar sus credenciales';

$GLOBALS["lang"]['Add image'] = 'Agregar imagen';

$GLOBALS["lang"]['additional_items'] = 'Temas adicionales';

$GLOBALS["lang"]['Additional Items'] = 'Temas adicionales';

$GLOBALS["lang"]['address'] = 'Dirección';

$GLOBALS["lang"]['Address'] = 'Dirección';

$GLOBALS["lang"]['Address any nonconformities'] = 'Address any nonconformities';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Abordar las conclusiones de la auditoría y las medidas correctivas';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Estado de Admin';

$GLOBALS["lang"]['Admin Status'] = 'Estado de Admin';

$GLOBALS["lang"]['advanced'] = 'Avances';

$GLOBALS["lang"]['Advanced'] = 'Avances';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistán';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Después de que se haya creado una Integración, cuando vea los detalles de una Integración se dará cuenta de un campo llamado Debug. Esto no se establece por defecto. Cambiarlo a sí proporciona registro adicional cuando se ejecuta una Integración. Debug no debe ser dejado como sí. Esto se debe a que la salida de depuración contendrá todo lo recuperado de sistemas externos - incluyendo artículos como WMI y SNMP credenciales. La opción de depuración debe usarse sólo cuando se ha producido un problema y desea profundizar para ver si puede determinar por qué.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Después de completar la anterior, desinstalar el agente.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = '¿Agente? ¿Descubrir? ¿Credencias?';

$GLOBALS["lang"]['agents'] = 'Agentes';

$GLOBALS["lang"]['Agents'] = 'Agentes';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Se pueden crear entradas de agentes que especifiquen una duración, una red y un sistema operativo. Si todas las pruebas coinciden, el servidor pide al agente que realice acciones. Si no se establece ninguna prueba, se excluye de la <i>todos deben coincidir</i> requisito.<br/><br/>Puede crear múltiples agentes y tener el servidor comprobar una o todas las entradas de agente. Usted puede (por ejemplo) especificar un agente que dice <i>Si el agente IP está en esta subred, establezca el location_id del dispositivo</i>.<br/><br/>Otro ejemplo podría no estar ejecutando una auditoría en absoluto, sino descargar un script y ejecutarlo. Si el agente está instalado con derechos de administración, ahora puede administrar sus máquinas sin abrir <strong>cualquiera</strong> puertos de ella al mundo.<p>Permitir a los agentes avanzados significa que un agente puede ser instruido para descargar cualquier archivo y ejecutar cualquier comando. <strong>WARNING</strong>: Esto viene con riesgos de seguridad. Esta configuración <strong>sólo</strong> función al ejecutar Open-AudIT utilizando HTTPS y un certificado válido (Certificate Authority provided) </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Islas Aland';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'Albania';

$GLOBALS["lang"]['alert_style'] = 'Estilo de alerta';

$GLOBALS["lang"]['Alert Style'] = 'Estilo de alerta';

$GLOBALS["lang"]['Algeria'] = 'Argelia';

$GLOBALS["lang"]['algorithm'] = 'Algoritm';

$GLOBALS["lang"]['Algorithm'] = 'Algoritm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Todos';

$GLOBALS["lang"]['All IPs'] = 'Todas las IPs';

$GLOBALS["lang"]['All Policies'] = 'Todas las políticas';

$GLOBALS["lang"]['All Queued Items'] = 'All Queued Items';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Todas las URL de las colecciones utilizan el formato';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Todas las sub-tablas del dispositivo contienen un par de columnas importantes.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Todos los dispositivos con un tipo de computadora.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Todos los dispositivos con un tipo de ordenador o router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Todos los dispositivos sin un tipo de interruptor e impresora.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Todos los dispositivos sin un tipo de interruptor e impresora. Esencialmente lo mismo que la consulta anterior.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Todas las opciones de descubrimiento regulares también están disponibles para su uso en Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Todas las tareas se pueden crear de la misma manera en Windows y Linux. Las tareas utilizan el método CRON para programar la ejecución.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Junto con esta solicitud de información, devolvemos a los puntos de datos de FirstWave que nos darán información muy necesaria sobre el uso de funciones y su instalación.';

$GLOBALS["lang"]['Also can be created from the'] = 'También se puede crear desde el';

$GLOBALS["lang"]['Alternatives'] = 'Alternativas';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campos';

$GLOBALS["lang"]['American Samoa'] = 'Samoa Americana';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Un descubrimiento Active Directory se preguntará Active Directory para una lista de redes y escaneará los IPs asociados como un descubrimiento subnet regular.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Una Org (organización) es el propietario de la mayoría de los artículos en colecciones dentro de Open-AudIT. Con la excepción de temas globales como <i>configuración</i>, la mayoría de los artículos se asignan a (propiedad por) un Org. Un usuario tiene acceso a esos artículos en una colección, que a continuación a un Org el usuario tiene permiso.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Una aplicación está aceptando activamente conexiones TCP, datagramas UDP o asociaciones SCTP en este puerto. Encontrar estos es a menudo el objetivo principal de la exploración portuaria. Las personas con mentalidad de seguridad saben que cada puerto abierto es una vía para atacar. Los atacantes y los bolígrafos quieren explotar los puertos abiertos, mientras que los administradores intentan cerrarlos o protegerlos con cortafuegos sin frustrar a los usuarios legítimos. Los puertos abiertos también son interesantes para los escaneos de no seguridad porque muestran servicios disponibles para su uso en la red.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Un array de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Un array de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Un conjunto de objetos que representan enlaces externos a más información.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Una conjetura educada a la identidad y tipo de dispositivo';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un documento JSON cifrado que contiene los atributos necesarios dependiendo del <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Una red privada empresarial es una red que una sola organización construye para interconectar sus oficinas (por ejemplo, sitios de producción, oficinas centrales, oficinas remotas, tiendas) para que puedan compartir recursos informáticos.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Una entrada se puede crear utilizando la interfaz web si el usuario actual conectado tiene un papel que contiene el';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Un ejemplo JSON POST cuerpo está abajo. Esto debe adjuntarse al elemento "datos".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Un widget de ejemplo SQL mostrando dispositivos contados por ubicación.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Un usuario de Open-AudIT existente fue autenticado y autorizado por el servidor LDAP. Éxito.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Una indicación del nivel de servicio requerido por este sitio.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un campo interno que indica si el descubrimiento ha terminado.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Se considera abierto un puerto incubierto (y se activará la detección de dispositivos).<br/>Anteriormente, Open-Aud IT consideró una respuesta de Nmap';

$GLOBALS["lang"]['An optional GeoCode'] = 'GeoCode opcional';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Una contraseña opcional para usar sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analizada';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Y finalmente, haga clic en Enviar para ejecutar este descubrimiento.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '¿Y si algo sale mal?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Y por último haga clic <i>Submit</i> para crear tu método Open-AudIT Auth para Entrar.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Y por último, no tanto un problema de seguridad - más paz mental. Las estructuras de datos están abiertas y documentadas. Puedes verlos';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Y proporcionar un nombre - humildemente recomendamos Open-AudIT 😀, pero puedes nombrarlo todo lo que quieras. Asegúrese de la opción para <i>Integrar cualquier otra aplicación que no encuentre en la galería (No-gallery)</i> es seleccionado. Y luego haga clic <i>Crear<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Y mucho más.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguila';

$GLOBALS["lang"]['Annex A Controls'] = 'Anexo A Controles';

$GLOBALS["lang"]['Antarctica'] = 'Antártida';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Paquetes AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua y Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Cualquier puerto TCP (comma seperated, no espacios) desea excluir de este descubrimiento. Solo disponible al usar Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Cualquier puerto UDP (comma seperated, no espacios) desea excluir de este descubrimiento. Solo disponible al usar Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Cualquier documentación adicional que necesite.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Cualquier nota adicional que quieras hacer.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Cualquier atributo seguido por un * indica que los datos CVSS menos que v4 se utilizaron para completar este campo. Por defecto, intentamos utilizar campos v4, sin embargo si no están poblados caeremos a la versión anterior(s) para atributos.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Cualquier dispositivo será asignado a este Org cuando ejecuten su script de auditoría (si se establece).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Cualquier dispositivo será asignado a este Org cuando ejecuten su script de auditoría (si se establece). Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a esta ubicación si se establece. Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Cualquier dispositivo descubierto será asignado a este lugar cuando ejecuten su script de auditoría (si está establecido).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a este lugar cuando ejecuten su script de auditoría (si está establecido). Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a este Org si se establece. Si no está establecido, se les asigna a <code>org_id</code> de este descubrimiento. Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Los archivos encontrados de esta manera se almacenan en el <i>ejecutable</i> tabla según cualquier otro componente del dispositivo.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Cualquier filtro necesario. NOTA: Cuando tipo = tráfico, esto representa el icono de fuentes impresionantes.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Cualquier puerto TCP específico que desee probar (comma seperated, no espacios).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Cualquier puerto UDP específico que desee probar (comma seperated, no espacios).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Cualquier usuario cargado de imágenes se coloca aquí.';

$GLOBALS["lang"]['Application'] = 'Aplicación';

$GLOBALS["lang"]['Application Definitions'] = 'Definiciones de aplicaciones';

$GLOBALS["lang"]['application_id'] = 'ID de aplicación';

$GLOBALS["lang"]['Application ID'] = 'ID de aplicación';

$GLOBALS["lang"]['Application Licenses'] = 'Licencias de aplicación';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplicación, sistema operativo o hardware.';

$GLOBALS["lang"]['applications'] = 'Aplicaciones';

$GLOBALS["lang"]['Applications'] = 'Aplicaciones';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Las aplicaciones son una característica única de Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Las aplicaciones se están presentando en Open-AudIT 2.2 con miras a ampliar el concepto a medida que se realiza un nuevo desarrollo.';

$GLOBALS["lang"]['applied'] = 'Aplicadas';

$GLOBALS["lang"]['Applied'] = 'Aplicadas';

$GLOBALS["lang"]['Approved'] = 'Aprobado';

$GLOBALS["lang"]['Approved Packages'] = 'Paquetes aprobados';

$GLOBALS["lang"]['April'] = 'Abril';

$GLOBALS["lang"]['Arabic'] = 'Árabe';

$GLOBALS["lang"]['architecture'] = 'Arquitectura';

$GLOBALS["lang"]['Architecture'] = 'Arquitectura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '¿Estás seguro de que quieres eliminar este elemento de entrada?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '¿Estás seguro de que quieres eliminar este artículo de salida?';

$GLOBALS["lang"]['Are you sure?'] = '¿Estás seguro?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '¿Estás seguro? Esto eliminará todas las entradas de cola e impedirá que los IP restantes sean descubiertos.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '¿Estás seguro? Esto restablecerá el recuento de procesamiento de cola y podría causar carga en el servidor.';

$GLOBALS["lang"]['area'] = 'Zona';

$GLOBALS["lang"]['Area'] = 'Zona';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Como recordatorio de cómo funcionan las autorizaciones en Open-AudIT, vea';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Como resultado, nosotros <strong>Debe</strong> tener la cuota de admin$ disponible para el usuario de credenciales de descubrimiento. Por favor, compruebe el objetivo que ofrece la máquina de Windows <i>escribir</i> acceso para el usuario de credenciales de descubrimiento.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Como se mencionó anteriormente, los desarrolladores no hablan todos los idiomas de traducción ofrecidos. Esto significa que no podemos revisar con exactitud, el texto traducido. Intentamos una revisión de curso. Si ves algo que no se traduce correctamente, puedes cambiarlo tú mismo. Editar el archivo de idioma apropiado (como se indica a continuación) y encontrar el texto que se ha de cambiar. Tal vez no existe y necesitas añadirlo. Sólo cambia el texto, guarda el archivo y actualiza tu página. No es necesario reiniciar ningún servicio/daemons para que surta efecto. Es posible que necesite forzar a refrescar su navegador.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'De acuerdo con los parámetros OpenSCAP - <i>No trate de implementar ninguna de las configuraciones en este punto de referencia sin probarlas en un entorno no operativo. Los creadores de este punto de referencia no asumen ninguna responsabilidad por su uso por otras partes, y no garantiza, expresa o implícita, su calidad, fiabilidad o cualquier otra característica.</i><br/><br/>En serio, no empieces ciegamente <i>fijación</i> problemas revelados después de ejecutar un punto de referencia sin primero pruebas exhaustivas en un entorno no productivo, idéntico.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'De acuerdo con los atributos para entornos de dispositivo. Production, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Como el script de auditoría utiliza bash, puede utilizar el comodín de * cuando está definiendo directorios y exclusiones.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Como siempre, vaya al menú → Gestionar → Integraciones → Crear Integración. Como antes, si se ejecuta en Linux y tiene NMIS en el mismo servidor, no necesita hacer nada más que hacer clic <i>Submit</i>. No puedo hacerlo más fácil que eso.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'A medida que ejecutamos Discoveries y recopilamos los resultados de los dispositivos populamos la lista de redes. La función Beato Subnets utiliza esta lista de redes para aceptar solamente datos de dispositivos en esas redes.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Como usted tiene coleccionistas registrados, por favor elija dónde ejecutar este descubrimiento.';

$GLOBALS["lang"]['Ask me later'] = 'Pregúntame más tarde.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Pida a la Comunidad ayuda o contribuya respuestas para otros.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Asset ID'] = 'Identificación de activos';

$GLOBALS["lang"]['asset_ident'] = 'Asset Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Asset Ident';

$GLOBALS["lang"]['asset_number'] = 'Número de activos';

$GLOBALS["lang"]['Asset Number'] = 'Número de activos';

$GLOBALS["lang"]['asset_tag'] = 'Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Dispositivo de asignación a la aplicación';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Assign Device to Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Assign Device to Location';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assign Device to Organisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Assign Devices to Location';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Assign Devices to Organisation';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Assign an ISMS manager or team';

$GLOBALS["lang"]['Assign an Operator'] = 'Asignar un Operador';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Asignar cualquier dispositivo auditado a este Org. Deja en blanco para dejar dispositivo en Org actualmente asignado (o para establecer por defecto).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Asignar el dispositivo a un lugar';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Asignar el dispositivo a un org';

$GLOBALS["lang"]['Assigned To'] = 'Asignado a';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Asignación de dispositivos descubiertos';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Actualmente podemos utilizar netstat_ports, software y usuarios.';

$GLOBALS["lang"]['attached_device_id'] = 'ID de dispositivo adjunto';

$GLOBALS["lang"]['Attached Device ID'] = 'ID de dispositivo adjunto';

$GLOBALS["lang"]['attached_to'] = 'Adjunto a';

$GLOBALS["lang"]['Attached To'] = 'Adjunto a';

$GLOBALS["lang"]['attachment'] = 'Adjunción';

$GLOBALS["lang"]['Attachment'] = 'Adjunción';

$GLOBALS["lang"]['attachments'] = 'Adjuntos';

$GLOBALS["lang"]['Attachments'] = 'Adjuntos';

$GLOBALS["lang"]['attack_complexity'] = 'Complejidad de ataque';

$GLOBALS["lang"]['Attack Complexity'] = 'Complejidad de ataque';

$GLOBALS["lang"]['attack_requirements'] = 'Requisitos de ataque';

$GLOBALS["lang"]['Attack Requirements'] = 'Requisitos de ataque';

$GLOBALS["lang"]['attack_vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Intento pinchar el dispositivo si no estamos auditando localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Los atributos se almacenan para Open-AudIT para utilizar en campos particulares, actualmente todos los campos se basan en los dispositivos, ubicaciones, orgs y tablas de consultas. Los atributos que puede editar están asociados con las siguientes columnas: Clase, Medio Ambiente, Estado &amp; Tipo.';

$GLOBALS["lang"]['Audit'] = 'Auditoría';

$GLOBALS["lang"]['Audit AIX'] = 'Auditoría AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Auditoría';

$GLOBALS["lang"]['Audit ESXi'] = 'Auditoría ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Auditoría Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Auditoría de mi PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Auditoría';

$GLOBALS["lang"]['Audit OSX'] = 'Auditoría OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Comprobación de resultados';

$GLOBALS["lang"]['Audit Software'] = 'Software de auditoría';

$GLOBALS["lang"]['Audit Status'] = 'Estado de la auditoría';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Auditoría Win32 Producto';

$GLOBALS["lang"]['Audit Windows'] = 'Auditoría de Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Auditoría del dispositivo';

$GLOBALS["lang"]['Audits'] = 'Auditorías';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Métodos de Auth';

$GLOBALS["lang"]['Authenticate only'] = 'Authenticate only';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protocolo de autenticación';

$GLOBALS["lang"]['authority_key_ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renovación';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renovación';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto poblado por el Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automáticamente poblada basado en el sistema operativo de coleccionistas.';

$GLOBALS["lang"]['availability'] = 'Disponibilidad';

$GLOBALS["lang"]['Availability'] = 'Disponibilidad';

$GLOBALS["lang"]['Available Benchmarks'] = 'Parámetros disponibles';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Awaiting Analysis';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaiyán';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaijani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backbone network'] = 'Red de columna vertebral';

$GLOBALS["lang"]['Backup'] = 'Copia de seguridad';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banco';

$GLOBALS["lang"]['Bank'] = 'Banco';

$GLOBALS["lang"]['Banned'] = 'Banned';

$GLOBALS["lang"]['Banned Packages'] = 'Paquetes prohibidos';

$GLOBALS["lang"]['bar_code'] = 'Código de barras';

$GLOBALS["lang"]['Bar Code'] = 'Código de barras';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Puntuación de la base';

$GLOBALS["lang"]['Base Score'] = 'Puntuación de la base';

$GLOBALS["lang"]['base_severity'] = 'Base Severity';

$GLOBALS["lang"]['Base Severity'] = 'Base Severity';

$GLOBALS["lang"]['based_on'] = 'Basado en';

$GLOBALS["lang"]['Based On'] = 'Basado en';

$GLOBALS["lang"]['baseline'] = 'Base de referencia';

$GLOBALS["lang"]['Baseline'] = 'Base de referencia';

$GLOBALS["lang"]['baseline_id'] = 'ID de referencia';

$GLOBALS["lang"]['Baseline ID'] = 'ID de referencia';

$GLOBALS["lang"]['baselines'] = 'Bases de referencia';

$GLOBALS["lang"]['Baselines'] = 'Bases de referencia';

$GLOBALS["lang"]['baselines_policies'] = 'Baselines Policies';

$GLOBALS["lang"]['Baselines Policies'] = 'Baselines Policies';

$GLOBALS["lang"]['Baselines Policy'] = 'Baselines Policy';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Baselines Policy Details';

$GLOBALS["lang"]['baselines_results'] = 'Resultados de las bases de referencia';

$GLOBALS["lang"]['Baselines Results'] = 'Resultados de las bases de referencia';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Las líneas de base pueden comparar puertos netstat, usuarios y software.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Las bases permiten combinar los datos de auditoría con un conjunto de atributos previamente definidos (su base) para determinar el cumplimiento de los dispositivos.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Bases de referencia para la comparación de dispositivos';

$GLOBALS["lang"]['Basic'] = 'Básica';

$GLOBALS["lang"]['Basque'] = 'Vasco';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Porque tratamos de ser lo más transparentes posible, aquí están sus datos reales que enviamos.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Ser capaz de determinar qué máquinas están configuradas de la misma manera es una parte importante de la administración y auditoría de los sistemas, y ahora informar sobre eso se hará simple y automatizado. Una vez que defina su base se ejecutará automáticamente contra un conjunto de dispositivos en un horario predeterminado. La producción de estas bases de referencia ejecutadas estará disponible para la visualización web, la importación a un sistema de terceros o incluso como un informe impreso.<br/><br/>Para fines de auditoría y gestión puede ser ventajoso para los dispositivos individuales de referencia contra un dispositivo fijo y conocido. Las bases permiten combinar los datos de auditoría con un conjunto de atributos previamente definidos (su base) para determinar el cumplimiento de los dispositivos.';

$GLOBALS["lang"]['Belarus'] = 'Belarús';

$GLOBALS["lang"]['Belgium'] = 'Bélgica';

$GLOBALS["lang"]['Belize'] = 'Belice';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'A continuación se muestra un ejemplo del formato csv requerido.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Debajo de estas líneas se encuentran las variables inyectadas en el script. A partir de nuestro ejemplo anterior, el script de auditoría de Linux se pobla con nuestro directorio así';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'A continuación se puede ver un ejemplo Org Chart. Si un usuario tiene permiso en el <i>Finanzas A</i> Org, también tienen permiso en las Orgs descendientes de Dept A, B &amp; C. Esto es independientemente de la colección solicitada.<br/><br/>Si la colección solicitada permite ascendentes, el usuario también tendrá acceso a los artículos de la Compañía #1 y de la Org por defecto. Esto es para (como arriba) consultas, grupos, et al.<br/><br/>Nota - Un usuario puede tener acceso a una consulta de Default Org, pero esa es la consulta en sí no el resultado. El resultado sólo mostrará dispositivos que el usuario tiene acceso a - dispositivos IE de Finanzas A y Dept A, B &amp; C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID de referencia';

$GLOBALS["lang"]['Benchmark ID'] = 'ID de referencia';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Tasks se crean automáticamente cuando se crea un parámetro de referencia.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'La ejecución y el procesamiento de Benchmark puede tardar mucho tiempo, por lo que la preferencia de programarlos y no ejecutarlos ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Criterios';

$GLOBALS["lang"]['Benchmarks'] = 'Criterios';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Excepciones de parámetros';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Excepciones de parámetros';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Políticas de referencia';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Políticas de referencia';

$GLOBALS["lang"]['benchmarks_result'] = 'Resultado de los parámetros';

$GLOBALS["lang"]['Benchmarks Result'] = 'Resultado de los parámetros';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Los parámetros se crean proporcionando un sistema operativo y una versión, combinado con una guía específica y una lista de máquinas para ejecutarla. Después de la creación, los parámetros se ejecutan contra la lista de máquinas en un calendario.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Parámetros para la mejor configuración práctica';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Los parámetros proporcionan recomendaciones de seguridad para sus computadoras, utilizando las herramientas y políticas OpenSCAP.<p><i>Desde la página principal de OpenSCAP:</i> En el mundo siempre cambiante de la seguridad informática, donde se descubren nuevas vulnerabilidades y se remplazan cada día, el cumplimiento de la seguridad debe ser un proceso continuo. También debe incluir una forma de ajustar las políticas, así como la evaluación periódica y la vigilancia del riesgo. El ecosistema OpenSCAP proporciona herramientas y políticas personalizables para una implementación rápida, rentable y flexible de estos procesos.</p>';

$GLOBALS["lang"]['Benefits'] = 'Beneficios';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermudas';

$GLOBALS["lang"]['best_practises'] = 'Las mejores prácticas';

$GLOBALS["lang"]['Best Practises'] = 'Las mejores prácticas';

$GLOBALS["lang"]['Bhutan'] = 'Bhután';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Cuerpo';

$GLOBALS["lang"]['Body'] = 'Cuerpo';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Dispositivo de arranque';

$GLOBALS["lang"]['Boot Device'] = 'Dispositivo de arranque';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia y Herzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Ambas formas de';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugués brasileño';

$GLOBALS["lang"]['Breaking it Down'] = 'Romperlo';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'British Indian Ocean Territory (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Islas Vírgenes Británicas';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Navega por el árbol para Consola Root Servicios de componentes - título Computadoras - título Mi ordenador<br/><br/>Haga clic derecho en <i>Mi ordenador</i> y propiedades selectas<br/><br/>Seleccione <i>Propiedades predeterminadas</i> pestaña';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Número de construcción';

$GLOBALS["lang"]['Build Number'] = 'Número de construcción';

$GLOBALS["lang"]['build_number_full'] = 'Número de construcción completo';

$GLOBALS["lang"]['Build Number Full'] = 'Número de construcción completo';

$GLOBALS["lang"]['Building'] = 'Edificio';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Construye confianza con clientes y socios';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulgarian'] = 'búlgaro';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Editar';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Forma de edición de Bulk';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atributos de dispositivo de edición a granel';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Las selecciones de edición Bulk no se seleccionarán después de hacer clic en la siguiente página.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisitos institucionales';

$GLOBALS["lang"]['Business Requirements'] = 'Requisitos institucionales';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = '¡Pero sólo tengo disponibles las máquinas de clientes de Windows!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Pero no quiero tener que cambiar el archivo de idioma cada vez que actualizo!';

$GLOBALS["lang"]['Buy'] = 'Comprar';

$GLOBALS["lang"]['Buy More'] = 'Comprar más';

$GLOBALS["lang"]['Buy More Licenses'] = 'Comprar más licencias';

$GLOBALS["lang"]['By'] = 'Por';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Por defecto integramos todos los dispositivos con su atributo nmis_manage <i>Sí.</i>. Con 4.2.0 también enviamos una Regla que dice <i>Si descubrimos un dispositivo y tiene un OID SNMP válido, marca ese dispositivo como gestionado por NMIS</i>. Obviamente puedes deshabilitar esto si no es lo que quieres.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Por defecto, saltamos la validación de certificados porque los clientes tienden a utilizar certificados auto-firmados. Para habilitar la validación del certificado, edite el archivo a continuación';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Máscara';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs con un estado de recepción, en espera de análisis, bajo análisis, rechazado. Estos CVEs (en su mayoría) no contienen suficiente información para permitirnos generar una consulta SQL correcta.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculado desde el descubrimiento.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculado número total de direcciones IP válidas para esta red.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculado al terminar, el tiempo que se tomó para ejecutar este artículo.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculado cuando se ejecuta la integración y contiene una representación JSON de los dispositivos en esta integración. Cada enlace a <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculado cuando se ejecuta la integración y contiene una representación JSON de los lugares en esta integración. Cada enlace a <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos seleccionados desde Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculado cuando la integración se ejecuta y contiene el número de dispositivos seleccionados el sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos a actualizar en el sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos actualizados en Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Llame un aviso de comando haciendo clic en Inicio y búsqueda <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Camboya';

$GLOBALS["lang"]['Cameroon'] = 'Camerún';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Red de área de Campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Puede ser <code>active</code>, <code>passive</code> o en blanco.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Puede ser <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> o en blanco.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Puede ser <code>auto</code>, <code>fixed</code>, <code>other</code> o en blanco.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Puede ser <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> o en blanco.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Puede ser <code>line</code>, <code>pie</code> o <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Puede ser <code>user</code> o <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Se puede configurar por descubrimiento o usuario.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Se puede configurar por descubrimiento o usuario. Usa la identificación de la tabla de ubicaciones.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Puede el usuario editar este artículo.';

$GLOBALS["lang"]['Canada'] = 'Canadá';

$GLOBALS["lang"]['Cancel'] = 'Cancelar';

$GLOBALS["lang"]['capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capacity'] = 'Capacidad';

$GLOBALS["lang"]['Cape Verde'] = 'Cabo Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitalización';

$GLOBALS["lang"]['caption'] = 'Caption';

$GLOBALS["lang"]['Caption'] = 'Caption';

$GLOBALS["lang"]['Catalan'] = 'Catalan';

$GLOBALS["lang"]['Cayman Islands'] = 'Islas Caimán';

$GLOBALS["lang"]['Cellular Details'] = 'Detalles celulares';

$GLOBALS["lang"]['Central African Republic'] = 'República Centroafricana';

$GLOBALS["lang"]['certificate'] = 'Certificado';

$GLOBALS["lang"]['Certificate'] = 'Certificado';

$GLOBALS["lang"]['certificate_file'] = 'Archivo del certificado';

$GLOBALS["lang"]['Certificate File'] = 'Archivo del certificado';

$GLOBALS["lang"]['certificate_name'] = 'Nombre del certificado';

$GLOBALS["lang"]['Certificate Name'] = 'Nombre del certificado';

$GLOBALS["lang"]['certificates'] = 'Certificados';

$GLOBALS["lang"]['Certificates'] = 'Certificados';

$GLOBALS["lang"]['Certification'] = 'Certificación';

$GLOBALS["lang"]['Certification Audit'] = 'Auditoría de certificación';

$GLOBALS["lang"]['Certification Process'] = 'Proceso de certificación';

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['Change'] = 'Cambio';

$GLOBALS["lang"]['change_id'] = 'Cambio de ID';

$GLOBALS["lang"]['Change ID'] = 'Cambio de ID';

$GLOBALS["lang"]['change_log'] = 'Cambio de registro';

$GLOBALS["lang"]['Change Log'] = 'Cambio de registro';

$GLOBALS["lang"]['Change Logs'] = 'Cambio de registros';

$GLOBALS["lang"]['change_type'] = 'Tipo de cambio';

$GLOBALS["lang"]['Change Type'] = 'Tipo de cambio';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Chequee por SSH en estos puertos';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Revise este puerto para cualquier servicio SSH.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Chinese'] = 'Chino';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chino (tradicional)';

$GLOBALS["lang"]['Choose'] = 'Elija';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Elija (seleccione el sistema operativo primero)';

$GLOBALS["lang"]['Choose a Device'] = 'Elija un dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Elija una tabla';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Elija el tipo de la tarea desde la primera caída. Esto configurará los campos adicionales requeridos dependiendo del tipo de tarea.';

$GLOBALS["lang"]['Christmas Island'] = 'Isla de Navidad';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Cuenta de circuito';

$GLOBALS["lang"]['Circuit Count'] = 'Cuenta de circuito';

$GLOBALS["lang"]['circuit_status'] = 'Estado del circuito';

$GLOBALS["lang"]['Circuit Status'] = 'Estado del circuito';

$GLOBALS["lang"]['city'] = 'Ciudad';

$GLOBALS["lang"]['City'] = 'Ciudad';

$GLOBALS["lang"]['class'] = 'Clase';

$GLOBALS["lang"]['Class'] = 'Clase';

$GLOBALS["lang"]['class_text'] = 'Texto de clase';

$GLOBALS["lang"]['Class Text'] = 'Texto de clase';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Haga clic <i>Nuevo secreto cliente</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Haga clic en Confirmar';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Haga clic en <i>Propiedades</i> en virtud del <i>Manage</i> encabezado en la columna del menú central. Copiar <i>URL de acceso al usuario</i>. Una vez copiado, péguelo en el editor de texto. Tendrá que copiar una sección de este campo.<br/><br/>Nuestro campo de ejemplo parece así<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>La sección que necesitamos es <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (el ID de inquilino). Esto se utiliza en Open-AudIT como el <i>Tenant</i> campo, así que póngalo ahí.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Haga clic en Inscripciones de aplicaciones para crear una nueva aplicación, luego haga clic en Nuevo registro de aplicaciones. Dale un nombre (Usé Open-AudIT), selecciona la aplicación web / API como el tipo y proporciona cualquier URL (la URL no es importante) y ahora haz clic en Crear.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Haga clic en Aceptar y cierre la ventana DCOMCNFG.<br/><br/>Los cambios anteriores requerirán un reinicio para entrar en vigor.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Haga clic en la aplicación que acaba de crear. El ID de aplicación mostrado es el ID del cliente.<br/><br/>Para crear el secreto del cliente, haga clic en Configuración, luego Claves. Proporcione un nombre clave y seleccione una fecha de caducidad apropiada, luego haga clic en Guardar.<br/><br/>El valor será poblado para usted - este es el Secreto del Cliente.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Haga clic en el botón Eliminar para eliminar los dispositivos de ejemplo de Open-AudIT.<br/>Esto eliminará los siguientes dispositivos de la base de datos. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Haga clic en el botón Editar para <i>Basic SAML Configuración</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Haga clic en el botón Importar abajo para poblar Open-AudIT con los datos del dispositivo de ejemplo.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Haga clic en el icono a la derecha del campo que desea editar. Cambia el campo y haz clic en el icono verde para enviar.';

$GLOBALS["lang"]['Client ID'] = 'ID de cliente';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID de cliente y secreto';

$GLOBALS["lang"]['client_ident'] = 'Cliente Ident';

$GLOBALS["lang"]['Client Ident'] = 'Cliente Ident';

$GLOBALS["lang"]['client_secret'] = 'Secreto del cliente';

$GLOBALS["lang"]['Client Secret'] = 'Secreto del cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nombre del sitio del cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nombre del sitio del cliente';

$GLOBALS["lang"]['Close'] = 'Cerca';

$GLOBALS["lang"]['Closed'] = 'Cerrado';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Detalles de la nube';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery y Auditing';

$GLOBALS["lang"]['cloud_id'] = 'ID de nube';

$GLOBALS["lang"]['Cloud ID'] = 'ID de nube';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Nombre de la nube';

$GLOBALS["lang"]['Cloud Name'] = 'Nombre de la nube';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Las nubes son una característica disponible para clientes autorizados Open-AudIT Enterprise.';

$GLOBALS["lang"]['cluster'] = 'Grupo';

$GLOBALS["lang"]['Cluster'] = 'Grupo';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Nombre del grupo';

$GLOBALS["lang"]['Cluster Name'] = 'Nombre del grupo';

$GLOBALS["lang"]['cluster_type'] = 'Tipo de grupo';

$GLOBALS["lang"]['Cluster Type'] = 'Tipo de grupo';

$GLOBALS["lang"]['clusters'] = 'Grupos de expertos';

$GLOBALS["lang"]['Clusters'] = 'Grupos de expertos';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Clusters and Reporting';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Islas Cocos (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Colección';

$GLOBALS["lang"]['Collections'] = 'Colecciones';

$GLOBALS["lang"]['Collector'] = 'Collector';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collector (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server es una característica única de Enterprise. Los clientes empresariales reciben una licencia de coleccionista gratis. Pueden comprarse licencias adicionales de coleccionista según sea necesario.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server está diseñado para que pueda tener un control remoto o <i>coleccionista</i> instancia de Open-AudIT corriendo en una máquina remota. Esa instancia coleccionista podría estar en otra zona de seguridad, subnet, instancia de hospedaje en la nube o en un sitio de clientes. El coleccionista remoto está haciendo todo el descubrimiento y auditoría de dispositivos localmente evitando la complejidad de las redes y cortafuegos. El coleccionista una vez que se ha registrado está completamente controlado por el <i>servidor</i>. Esto significa que sólo necesita una conexión HTTP o HTTPS de ese Colector al Servidor.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Coleccionista';

$GLOBALS["lang"]['Collector Name'] = 'Nombre del coleccionista';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Las tareas del coleccionista se establecen automáticamente cuando se activa la función del coleccionista. Las tareas de coleccionista no deben ser creadas directamente por los usuarios. Las tareas coleccionistas pueden tener su frecuencia editada después de la creación. Si el Open-AudIT Server tiene coleccionistas que le informan, se proporciona una reducción adicional. Puede seleccionar esto para especificar qué Coleccionista debe ejecutar la tarea. Sólo las tareas Discovery son compatibles para coleccionistas.';

$GLOBALS["lang"]['Collectors'] = 'Coleccionistas';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Los coleccionistas pueden operar en uno de los dos modos: Collector y StandAlone. Cuando en modo Collector, la instancia de Open-AudIT es gestionada por el servidor principal. Cuando se encuentra en modo Stand Alone, la instancia se gestiona localmente y envía cualquier dispositivo encontrado al servidor principal.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Coleccionistas para el descubrimiento remoto';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

$GLOBALS["lang"]['Column'] = 'Columna';

$GLOBALS["lang"]['Columns'] = 'Columnas';

$GLOBALS["lang"]['command'] = 'Comando';

$GLOBALS["lang"]['Command'] = 'Comando';

$GLOBALS["lang"]['command_options'] = 'Opciones de comando';

$GLOBALS["lang"]['Command Options'] = 'Opciones de comando';

$GLOBALS["lang"]['command_output'] = 'Salida del comando';

$GLOBALS["lang"]['Command Output'] = 'Salida del comando';

$GLOBALS["lang"]['command_status'] = 'Estado del Mando';

$GLOBALS["lang"]['Command Status'] = 'Estado del Mando';

$GLOBALS["lang"]['command_time_to_execute'] = 'Tiempo de comando para ejecutar';

$GLOBALS["lang"]['Command Time To Execute'] = 'Tiempo de comando para ejecutar';

$GLOBALS["lang"]['comment'] = 'Comentario';

$GLOBALS["lang"]['Comment'] = 'Comentario';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Comentar la siguiente línea (sobre la línea 49 o así). Sólo coloque un hash al comienzo de la línea.';

$GLOBALS["lang"]['comments'] = 'Comentarios';

$GLOBALS["lang"]['Comments'] = 'Comentarios';

$GLOBALS["lang"]['commercial'] = 'Comercial';

$GLOBALS["lang"]['Commercial'] = 'Comercial';

$GLOBALS["lang"]['Commercial Support'] = 'Apoyo comercial';

$GLOBALS["lang"]['common_name'] = 'Nombre común';

$GLOBALS["lang"]['Common Name'] = 'Nombre común';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Comúnmente conocido como el cliente.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Comúnmente conocido como el clienteSecret.';

$GLOBALS["lang"]['Community'] = 'Comunidad';

$GLOBALS["lang"]['Community Questions'] = 'Cuestiones comunitarias';

$GLOBALS["lang"]['Community String'] = 'Community String';

$GLOBALS["lang"]['Comoros the'] = 'Comoras';

$GLOBALS["lang"]['Compact'] = 'Compacto';

$GLOBALS["lang"]['Company'] = 'Company';

$GLOBALS["lang"]['Complete these steps.'] = 'Completa estos pasos.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complejidad del ataque (Low o High).';

$GLOBALS["lang"]['Component Table'] = 'Cuadro de componentes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componentes (Todos los dispositivos)';

$GLOBALS["lang"]['Compute'] = 'Computación';

$GLOBALS["lang"]['Condition'] = 'Estado';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Realizar una evaluación del riesgo';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Realizar programas de sensibilización y capacitación';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Reuniones de examen de la gestión';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Realizar auditorías periódicas de vigilancia (generalmente anuales)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Dirigida por un órgano acreditado en dos etapas';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, actualmente ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Código de error del Administrador de Config';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Código de error del Administrador de Config';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Control de acceso basado en roles (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Configuración';

$GLOBALS["lang"]['Configuration'] = 'Configuración';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Detección de cambios de configuración y presentación de informes';

$GLOBALS["lang"]['Configure'] = 'Configuración';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configurar el lado del servidor de agente para realizar auditorías en un horario';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Conectado a';

$GLOBALS["lang"]['connection'] = 'Conexión';

$GLOBALS["lang"]['Connection'] = 'Conexión';

$GLOBALS["lang"]['Connection Options'] = 'Opciones de conexión';

$GLOBALS["lang"]['connection_status'] = 'Estado de conexión';

$GLOBALS["lang"]['Connection Status'] = 'Estado de conexión';

$GLOBALS["lang"]['connections'] = 'Conexión';

$GLOBALS["lang"]['Connections'] = 'Conexión';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Considere filtrado Puertos abiertos';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Considerar abierta la vida llena Puertos abiertos';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consultoría, implementación y otros servicios están disponibles a través de';

$GLOBALS["lang"]['contact'] = 'Contacto';

$GLOBALS["lang"]['Contact'] = 'Contacto';

$GLOBALS["lang"]['contact_name'] = 'Nombre de contacto';

$GLOBALS["lang"]['Contact Name'] = 'Nombre de contacto';

$GLOBALS["lang"]['contained_in'] = 'Contained In';

$GLOBALS["lang"]['Contained In'] = 'Contained In';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contiene un objeto JSON detalla los widgets asociados y sus posiciones.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contiene los campos que determinan si deberíamos usar ssh, snmp y wmi opciones de descubrimiento. Un objeto JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Contexto y liderazgo';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Nombre contexto';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Mejorar continuamente los ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Obligaciones contractuales';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obligaciones contractuales';

$GLOBALS["lang"]['Cook Islands'] = 'Islas Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copiar y pegar un resultado de auditoría';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiar y pegar a continuación a los foros, otra instancia de Open-AudIT o cualquier otro lugar que necesite para proporcionar este artículo.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Copiar <i>ID de aplicación</i> campo y pegarlo en el Open-AudIT <i>ID de cliente</i> campo para el nuevo Método Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Copiar <i>ID de cliente</i> y pegarlo en el Open-AudIT <i>ID de cliente</i> campo.<br/>Si no hay ningún secreto, haga clic <i>Generar nuevo secreto</i>, luego copiar el valor y pegarlo en el Open-AudIT <i>Secreto del cliente</i> campo.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Copiar el valor y pegarlo en la forma Open-AudIT para el <i>Secreto del cliente</i> campo.';

$GLOBALS["lang"]['core_count'] = 'Core Count';

$GLOBALS["lang"]['Core Count'] = 'Core Count';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Cost Center';

$GLOBALS["lang"]['Cost Center'] = 'Cost Center';

$GLOBALS["lang"]['cost_code'] = 'Código de Costos';

$GLOBALS["lang"]['Cost Code'] = 'Código de Costos';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Côte d Ivoire';

$GLOBALS["lang"]['count'] = 'Conde';

$GLOBALS["lang"]['Count'] = 'Conde';

$GLOBALS["lang"]['country'] = 'País';

$GLOBALS["lang"]['Country'] = 'País';

$GLOBALS["lang"]['country_code'] = 'Código del país';

$GLOBALS["lang"]['Country Code'] = 'Código del país';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Crear';

$GLOBALS["lang"]['Create Example Devices'] = 'Crear dispositivos de ejemplo';

$GLOBALS["lang"]['create_external_count'] = 'Crear cuenta externa';

$GLOBALS["lang"]['Create External Count'] = 'Crear cuenta externa';

$GLOBALS["lang"]['create_external_from_internal'] = 'Crear externo desde el interior';

$GLOBALS["lang"]['Create External From Internal'] = 'Crear externo desde el interior';

$GLOBALS["lang"]['Create File'] = 'Crear archivo';

$GLOBALS["lang"]['Create Geocode'] = 'Crear geocódigo';

$GLOBALS["lang"]['create_internal_count'] = 'Crear cuenta interna';

$GLOBALS["lang"]['Create Internal Count'] = 'Crear cuenta interna';

$GLOBALS["lang"]['create_internal_from_external'] = 'Crear interno de externo';

$GLOBALS["lang"]['Create Internal From External'] = 'Crear interno de externo';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Crear dispositivos NMIS desde Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Crear Open-AudIT Dispositivos de ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Crear Open-AudIT Dispositivos del NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Crear una Base para el dispositivo de ejemplo';

$GLOBALS["lang"]['Create a Discovery'] = 'Crear un Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Crear una Declaración de Aplicabilidad (SoA)';

$GLOBALS["lang"]['created_by'] = 'Creado por';

$GLOBALS["lang"]['Created By'] = 'Creado por';

$GLOBALS["lang"]['created_date'] = 'Fecha de creación';

$GLOBALS["lang"]['Created Date'] = 'Fecha de creación';

$GLOBALS["lang"]['Creating'] = 'Creando';

$GLOBALS["lang"]['Creating Credentials'] = 'Creación de credenciales';

$GLOBALS["lang"]['Creating Device'] = 'Creación de dispositivos';

$GLOBALS["lang"]['Creating Widgets'] = 'Crear Widgets';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Crear un Discovery Entrada Opciones de exploración';

$GLOBALS["lang"]['Creating a Query'] = 'Crear una consulta';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Crear una Declaración SQL para Grupos';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Crear una Declaración de SQL para consultas';

$GLOBALS["lang"]['Creating an Integration'] = 'Creación de una integración';

$GLOBALS["lang"]['creator'] = 'Creador';

$GLOBALS["lang"]['Creator'] = 'Creador';

$GLOBALS["lang"]['credential'] = 'Credencial';

$GLOBALS["lang"]['Credential'] = 'Credencial';

$GLOBALS["lang"]['Credentials'] = 'Credenciales';

$GLOBALS["lang"]['Credentials Client ID'] = 'ID de cliente de credenciales';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Suscripción de credenciales ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identificación del arrendatario';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Las credenciales se almacenan en <i>credenciales</i> tabla de bases de datos. La información credencial real está cifrada en almacenamiento. Cuando se ejecuta un Discovery, un dispositivo tiene sus credenciales específicas recuperadas de la base de datos, descifradas y probadas. Si estos fallan la lista de credenciales también se recupera, descifra y luego se prueba contra el dispositivo comenzando con credenciales conocidas de haber trabajado anteriormente. Las credenciales específicas del dispositivo se almacenan a nivel individual en el dispositivo <i>credencial</i> (nota - no <i>s</i> en el nombre de la tabla). Las teclas SSH se prueban antes de SSH nombre de usuario / contraseña. Al probar SSH, las credenciales también se marcarán como trabajar con sudo o ser root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Las credenciales pueden tener uno de algunos tipos diferentes - snmp v.1 / v.2, snmp v.3, ssh, llave ssh, ventanas se implementan. CAVEAT - teclas ssh no se implementan para los servidores de Windows Open-AudIT todavía.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credenciales para Amazon AWS utilizado en Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credenciales para Microsoft Azure utilizado en Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Crítica';

$GLOBALS["lang"]['criticality'] = 'Criticality';

$GLOBALS["lang"]['Criticality'] = 'Criticality';

$GLOBALS["lang"]['Croatia'] = 'Croacia';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Corriente';

$GLOBALS["lang"]['Current'] = 'Corriente';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Procesos de descubrimiento actuales';

$GLOBALS["lang"]['Current date & time is '] = 'Hora actual ';

$GLOBALS["lang"]['Currently Installed'] = 'Actualmente instalado';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Tipos actualmente apoyados <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> o <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Campos aduaneros';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Puertos TCP personalizados';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Puertos TCP personalizados. Cualquier puerto específico que sería liuke escaneado además de los puertos TCP Top. Comma seperó, sin espacios.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Custom UDP Puertos';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Puertos UDP personalizados. Cualquier puerto específico que sería liuke escaneado además de los puertos UDP Top. Comma seperó, sin espacios.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Opciones de exploración personalizadas por Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Chipre';

$GLOBALS["lang"]['Czech'] = 'checo';

$GLOBALS["lang"]['Czech Republic'] = 'República Checa';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Account (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (opcional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Danés';

$GLOBALS["lang"]['dashboard_id'] = 'ID de panel';

$GLOBALS["lang"]['Dashboard ID'] = 'ID de panel';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards y Widgets permiten a los clientes con licencia Enterprise crear, leer, actualizar y eliminar ambas colecciones para asegurar que su página principal es exactamente lo que necesitan ver. No sólo eso, pero un usuario es capaz de establecer un dashboard dado como su propia página web. Todo el mundo no necesita usar la misma página (ducha) ni los mismos widgets en ese tablero. Los clientes profesionales con licencia pueden elegir entre dos paneles predefinidos para establecer como su propia página web.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards proporcionan <i>de un vistazo</i> visibilidad importante para los cambios que ocurren en su red, así como proporcionar enlaces rápidos a tipos de dispositivos, fabricantes y sistemas operativos y mucho más.';

$GLOBALS["lang"]['Dashboards use'] = 'Uso de paneles';

$GLOBALS["lang"]['Data'] = 'Datos';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Exportación de datos - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Retención de datos';

$GLOBALS["lang"]['Database'] = 'Base de datos';

$GLOBALS["lang"]['db_action'] = 'Base de datos';

$GLOBALS["lang"]['Database Action'] = 'Base de datos';

$GLOBALS["lang"]['db_column'] = 'Base de datos';

$GLOBALS["lang"]['Database Column'] = 'Base de datos';

$GLOBALS["lang"]['Database Definition'] = 'Definición';

$GLOBALS["lang"]['db_row'] = 'Base de datos';

$GLOBALS["lang"]['Database Row'] = 'Base de datos';

$GLOBALS["lang"]['Database Schema'] = 'Plan de base de datos';

$GLOBALS["lang"]['Database Server Discovery'] = 'Database Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Base de datos';

$GLOBALS["lang"]['Database Table'] = 'Base de datos';

$GLOBALS["lang"]['Database Tables'] = 'Tablas de base de datos';

$GLOBALS["lang"]['dataset_title'] = 'Dataset Title';

$GLOBALS["lang"]['Dataset Title'] = 'Dataset Title';

$GLOBALS["lang"]['date'] = 'Fecha';

$GLOBALS["lang"]['Date'] = 'Fecha';

$GLOBALS["lang"]['Date D-M-Y'] = 'Fecha D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Date M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Fecha';

$GLOBALS["lang"]['date_of_manufacture'] = 'Fecha de fabricación';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Fecha de fabricación';

$GLOBALS["lang"]['date_paid'] = 'Fecha pagada';

$GLOBALS["lang"]['Date Paid'] = 'Fecha pagada';

$GLOBALS["lang"]['date_received'] = 'Fecha recibida';

$GLOBALS["lang"]['Date Received'] = 'Fecha recibida';

$GLOBALS["lang"]['Date Y-M-D'] = 'Date Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Fecha y hora en que el CVE fue actualizado por última vez.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Fecha y hora en que se publicó el CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Fecha en que se publicó el CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Fecha Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Día del Mes';

$GLOBALS["lang"]['Day Of Month'] = 'Día del Mes';

$GLOBALS["lang"]['day_of_week'] = 'Día de la semana';

$GLOBALS["lang"]['Day Of Week'] = 'Día de la semana';

$GLOBALS["lang"]['Day of Month'] = 'Día del Mes';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'Debugging';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging a Script';

$GLOBALS["lang"]['December'] = 'Diciembre';

$GLOBALS["lang"]['Decommission'] = 'Decomiso';

$GLOBALS["lang"]['Default'] = 'Default';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Autenticación predeterminada Nivel - Set to Connect';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Default Impersonation Nivel - Establecer para identificar';

$GLOBALS["lang"]['Default Items'] = 'Artículos por defecto';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Grupos de orgs por defecto';

$GLOBALS["lang"]['Default Roles Groups'] = 'Grupos de roles por defecto';

$GLOBALS["lang"]['Default Value'] = 'Valor predeterminado';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Predeterminado de 389. Normalmente 636 se utiliza para Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Default of <code>3</code> para LDAP y Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Defectos';

$GLOBALS["lang"]['Deferred'] = 'Diferido';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Definir el alcance y los objetivos del proyecto';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definir el alcance de los ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definir el contexto de la organización (temas internos y externos)';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Suprimir';

$GLOBALS["lang"]['Delete Example Devices'] = 'Eliminar dispositivos de ejemplo';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Eliminar Externo del Interior';

$GLOBALS["lang"]['Delete External From Internal'] = 'Eliminar Externo del Interior';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Suprímase NMIS Dispositivos si no en Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Eliminar una entrada.';

$GLOBALS["lang"]['Delete from Application'] = 'Eliminar de la aplicación';

$GLOBALS["lang"]['Delete from Cluster'] = 'Suprímase de la lista';

$GLOBALS["lang"]['Denmark'] = 'Dinamarca';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derivado por auditoría o fijado manualmente por el usuario.';

$GLOBALS["lang"]['Derived by audit.'] = 'Derivado por auditoría.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derivado de <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derivado de <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivado del descubrimiento del Coleccionista.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Derivado del nombre del sistema operativo.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Derivado del descubrimiento de la nube.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Derivado de auditorías de dispositivos.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Derivado de tipo dispositivo y sistema operativo.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Derivado del descubrimiento.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derivado de hostname, sysName, dns Hostname y IP en ese orden.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'De la gravedad del entero.';

$GLOBALS["lang"]['description'] = 'Descripción';

$GLOBALS["lang"]['Description'] = 'Descripción';

$GLOBALS["lang"]['destination'] = 'Destino';

$GLOBALS["lang"]['Destination'] = 'Destino';

$GLOBALS["lang"]['detail'] = 'Detalle';

$GLOBALS["lang"]['Detail'] = 'Detalle';

$GLOBALS["lang"]['Details'] = 'Detalles';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detalles de quién es generalmente contactable en este sitio.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Determinar con qué frecuencia desea ejecutar el control Baseline contra la base de datos y crear un informe programado';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Determinar opciones de tratamiento del riesgo';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Desarrollar un plan de tratamiento de riesgos';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Elaborar políticas, procedimientos y controles';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Elaborar la documentación necesaria del SIV (políticas, procedimientos, etc.)';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Auditorías de dispositivos';

$GLOBALS["lang"]['Device Component Names'] = 'Nombres del componente de dispositivo';

$GLOBALS["lang"]['Device ID'] = 'ID de dispositivo';

$GLOBALS["lang"]['device_id'] = 'ID de dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID de dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID de dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID de dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID de dispositivo B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Normas de emparejamiento de dispositivos';

$GLOBALS["lang"]['Device Name'] = 'Nombre del dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Resultado del dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Resultados del dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Semillas de dispositivo';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Semillas de dispositivo Los descubrimientos son una buena opción si usted sabe que su red consiste en una gama de subredes, pero usted no está seguro de lo que son. Semilla el descubrimiento con un router local y mira tu red desplegable ante tus ojos.';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Estado del dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipos de dispositivo';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Auditoría de dispositivos y software y hardware';

$GLOBALS["lang"]['Device is in the Subnet'] = 'El dispositivo está en la Subnet';

$GLOBALS["lang"]['Devices'] = 'Dispositivos';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivos asignados a la ubicación';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivos asignados a la ubicación';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivos asignados a la org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivos asignados a la org';

$GLOBALS["lang"]['Devices Audited'] = 'Auditoría de dispositivos';

$GLOBALS["lang"]['Devices Collection'] = 'Colección de dispositivos';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivos creados en ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivos creados en Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Columnas de pantalla predeterminadas';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Columnas de pantalla predeterminadas';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivos encontrados Últimos 7 Días';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivos encontrados hoy';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivos encontrados ayer';

$GLOBALS["lang"]['Devices Missing Information'] = 'Dispositivos que faltan información';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivos no auditados';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivos no vistos 30 días';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivos no vistos 7 días';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivos no vistos 90 días';

$GLOBALS["lang"]['Devices Older Than X'] = 'Dispositivos más antiguos que X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivos recuperados mediante API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivos seleccionados de ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivos seleccionados de Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivos Actualizados en ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivos actualizados en Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Se están comparando los dispositivos.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Los dispositivos no están siendo evaluados.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Los dispositivos pueden ser de referencia.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Dispositivos de Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivos en el estado de ejecución';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivos en el estado detenido';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivos en este';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Los dispositivos no se igualarán si su estado está fijado para <i>suprimido</i>. Cualquier otro estado permitirá que ocurra un partido.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Dispositivos con Garantías Expiradas';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Devired from type or OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'El comando completó con éxito y devolvió los datos esperados.';

$GLOBALS["lang"]['direction'] = 'Dirección';

$GLOBALS["lang"]['Direction'] = 'Dirección';

$GLOBALS["lang"]['directory'] = 'Directorio';

$GLOBALS["lang"]['Directory'] = 'Directorio';

$GLOBALS["lang"]['disabled'] = 'Discapacitados';

$GLOBALS["lang"]['Disabled'] = 'Discapacitados';

$GLOBALS["lang"]['discard'] = 'Divulgación';

$GLOBALS["lang"]['Discard'] = 'Divulgación';

$GLOBALS["lang"]['Discover'] = 'Descubre';

$GLOBALS["lang"]['Discoveries'] = 'Descubrimientos';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Los descubrimientos están en el corazón mismo de lo que Open-AudIT hace. ¿Cómo más lo sabrías? <i>¿Qué hay en tu red?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Los descubrimientos son entradas que le permiten ejecutar un descubrimiento en una red en un solo clic, sin entrar en los detalles de esa red cada vez.';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Registros de cambio de descubrimiento';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Retención de datos de descubrimiento';

$GLOBALS["lang"]['discovery_id'] = 'ID de descubrimiento';

$GLOBALS["lang"]['Discovery ID'] = 'ID de descubrimiento';

$GLOBALS["lang"]['Discovery Issues'] = 'Problemas de descubrimiento';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Opciones de partido de descubrimiento';

$GLOBALS["lang"]['Discovery Name'] = 'Nombre del descubrimiento';

$GLOBALS["lang"]['Discovery Options'] = 'Opciones de descubrimiento';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Límite de cola de descubrimiento';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opciones de exploración de descubrimientos';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opciones de exploración de descubrimientos';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Las opciones son sólo otra colección de artículos. Los usuarios de las empresas pueden crear, leer, actualizar y eliminar las entradas según sea necesario. Los usuarios profesionales pueden leer todas las entradas, pero no crear nuevas entradas, actualizar las entradas existentes o eliminar las entradas. Los usuarios comunitarios no tienen GUI que permita el acceso a esta colección.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan Types';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery Support';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery ha dejado de trabajar';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Versión de visualización';

$GLOBALS["lang"]['Display Version'] = 'Versión de visualización';

$GLOBALS["lang"]['Display in Menu'] = 'Mostrar en el menú';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Muestra un formulario web estándar para sumisión a POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Muestra un formulario web estándar para sumisión a POST /{collection}/import.';

$GLOBALS["lang"]['district'] = 'Distrito';

$GLOBALS["lang"]['District'] = 'Distrito';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'No te olvides del wiki Open-AudIT para toda tu documentación.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'No olvides que hay una montaña de documentación en el wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'No escanee estos puertos TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'No escanee estos puertos UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'No me vuelvas a mostrar';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = '¿Tiene un ejemplo perfecto de esta configuración? Tal vez un dispositivo situado en un ambiente de laboratorio o una estación de trabajo que utiliza para clonar estaciones de trabajo VMs.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '¿Quieres utilizar el transporte seguro (LDAPS) o LDAP no cifrado regular.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '¿Desea ver la barra lateral estándar a la izquierda.';

$GLOBALS["lang"]['documentation'] = 'Documentación';

$GLOBALS["lang"]['Documentation'] = 'Documentación';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentación sobre una colección particular.';

$GLOBALS["lang"]['Does Not Equal'] = 'No es igual';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La licencia se aplica a los niños Orgs.';

$GLOBALS["lang"]['domain'] = 'Dominio';

$GLOBALS["lang"]['Domain'] = 'Dominio';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Address';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Address';

$GLOBALS["lang"]['domain_controller_name'] = 'Controlador de dominio Nombre';

$GLOBALS["lang"]['Domain Controller Name'] = 'Controlador de dominio Nombre';

$GLOBALS["lang"]['domain_role'] = 'Función de dominio';

$GLOBALS["lang"]['Domain Role'] = 'Función de dominio';

$GLOBALS["lang"]['domain_short'] = 'Dominio corto';

$GLOBALS["lang"]['Domain Short'] = 'Dominio corto';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'República Dominicana';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'No me tomes la mano, sé lo que estoy haciendo. Sin filtro y la capacidad de unir mesas personalizadas.';

$GLOBALS["lang"]['Download'] = 'Descargar';

$GLOBALS["lang"]['Download a File'] = 'Descargar un archivo';

$GLOBALS["lang"]['Download a file from URL'] = 'Descargar un archivo desde URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Descargar el script test_windows_client.vbs directamente';

$GLOBALS["lang"]['Download your updated version from'] = 'Descargar la versión actualizada desde';

$GLOBALS["lang"]['driver'] = 'Conductor';

$GLOBALS["lang"]['Driver'] = 'Conductor';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dispositivos duplicados / Dispositivos perdidos';

$GLOBALS["lang"]['duration'] = 'Duración';

$GLOBALS["lang"]['Duration'] = 'Duración';

$GLOBALS["lang"]['Dutch'] = 'Dutch';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Cada IP es escaneado con las opciones configuradas del descubrimiento (ver Opciones de Escaneo Discovery y Discovery - Community vs Professional vs Enterprise en el wiki). En general, Nmap probará para los puertos 22 (ssh), 135 (wmi), 62078 (iPhone) y UDP 161 (snmp). Si 22, 135 o 161 responden la lista credencial es recuperada y cada prueba credencial a su vez. Las primeras credenciales de trabajo se utilizan para más consultas directamente desde el dispositivo. Nota - si un dispositivo ha sido descubierto anteriormente y tiene credenciales de trabajo, esas credenciales se prueban primero. Sólo si esos fallan son las otras credenciales entonces intentó.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Cada vez que se descubre un dispositivo o se procesa un resultado de auditoría, todas las reglas se recuperan de la base de datos y se ejecutan contra los atributos del dispositivo específico. Las reglas se ejecutan contra un dispositivo a la vez - no hay facilidad para decir <i>Correr las reglas contra todos los dispositivos<i> o <i>Ejecute las reglas contra estos dispositivos<i>. Una regla individual probará uno o más atributos del dispositivo y si coinciden con la regla, el resultado será aplicado. Se pueden probar varios atributos. Se pueden establecer varios atributos. Piensa en esto como un si esto, entonces ese sistema para Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Ejecute fácilmente un descubrimiento en una red en un solo clic, sin entrar los detalles de esa red cada vez.';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Editar';

$GLOBALS["lang"]['edit_log'] = 'Editar registro';

$GLOBALS["lang"]['Edit Log'] = 'Editar registro';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Editado por';

$GLOBALS["lang"]['Edited By'] = 'Editado por';

$GLOBALS["lang"]['edited_date'] = 'Fecha de publicación';

$GLOBALS["lang"]['Edited Date'] = 'Fecha de publicación';

$GLOBALS["lang"]['edition'] = 'Edición';

$GLOBALS["lang"]['Edition'] = 'Edición';

$GLOBALS["lang"]['Egypt'] = 'Egipto';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Ya sea Amazon, Google o Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ni ninguno ni presente.

<strong>Ninguno</strong> - El ataque exitoso no depende de las condiciones de despliegue y ejecución del sistema vulnerable. El atacante puede esperar ser capaz de alcanzar la vulnerabilidad y ejecutar la explotación bajo todos o la mayoría de los casos de la vulnerabilidad.

<strong>Presente</strong> - El ataque exitoso depende de la presencia de condiciones específicas de despliegue y ejecución del sistema vulnerable que permitan el ataque. Estos incluyen:

Una condición racial debe ser ganada para explotar con éxito la vulnerabilidad. El éxito del ataque está condicionado a condiciones de ejecución que no están bajo control completo del atacante. El ataque puede necesitar ser lanzado varias veces contra un solo objetivo antes de tener éxito.

Inyección de red. El atacante debe inyectarse en la lógica vía de la red entre el objetivo y el recurso solicitado por la víctima (por ejemplo, vulnerabilidades que requieren un atacante en camino).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'Dirección de correo';

$GLOBALS["lang"]['Email Address'] = 'Dirección de correo';

$GLOBALS["lang"]['Email Configuration'] = 'Configuración de correo electrónico';

$GLOBALS["lang"]['Email to send test to'] = 'Correo electrónico para enviar la prueba';

$GLOBALS["lang"]['Enable'] = 'Habilitación';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Habilitar COM distribuida en este ordenador - Se revisa la opción';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Activar la función bajo Windows';

$GLOBALS["lang"]['encryption'] = 'Encryption';

$GLOBALS["lang"]['Encryption'] = 'Encryption';

$GLOBALS["lang"]['encryption_method'] = 'Método de cifrado';

$GLOBALS["lang"]['Encryption Method'] = 'Método de cifrado';

$GLOBALS["lang"]['encryption_status'] = 'Estado de cifrado';

$GLOBALS["lang"]['Encryption Status'] = 'Estado de cifrado';

$GLOBALS["lang"]['end_date'] = 'Fecha final';

$GLOBALS["lang"]['End Date'] = 'Fecha final';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Fin de vida ID de producto';

$GLOBALS["lang"]['end_of_life'] = 'Fin de la vida';

$GLOBALS["lang"]['End Of Life'] = 'Fin de la vida';

$GLOBALS["lang"]['end_of_production'] = 'Fin de la producción';

$GLOBALS["lang"]['End Of Production'] = 'Fin de la producción';

$GLOBALS["lang"]['end_of_service'] = 'Fin del servicio';

$GLOBALS["lang"]['End Of Service'] = 'Fin del servicio';

$GLOBALS["lang"]['end_of_service_life'] = 'Fin de la vida útil';

$GLOBALS["lang"]['End Of Service Life'] = 'Fin de la vida útil';

$GLOBALS["lang"]['Endpoint'] = 'Punto final';

$GLOBALS["lang"]['English'] = 'Inglés';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Mejora del cumplimiento reglamentario';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'El enriquecimiento está completo. El CVE tiene metadatos completos y se considera estable.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Garantizar que la documentación sea controlada y accesible';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Red privada de empresas';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo de título';

$GLOBALS["lang"]['Entra'] = 'Entrada';

$GLOBALS["lang"]['environment'] = 'Medio ambiente';

$GLOBALS["lang"]['Environment'] = 'Medio ambiente';

$GLOBALS["lang"]['Equal To'] = 'Igualdad';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Igual o más grande que';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Igual o menos que';

$GLOBALS["lang"]['Equals'] = 'Igualdad';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guinea Ecuatorial';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Error';

$GLOBALS["lang"]['Error Code'] = 'Código de error';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Establecer un plan de proyecto y un calendario';

$GLOBALS["lang"]['Establish an information security policy'] = 'Establecer una política de seguridad de la información';

$GLOBALS["lang"]['Established'] = 'Establecido';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Estonian'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopía';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Evaluar los ISMS internamente';

$GLOBALS["lang"]['Every'] = 'Cada uno';

$GLOBALS["lang"]['Every Day'] = 'Cada día';

$GLOBALS["lang"]['Example'] = 'Ejemplo';

$GLOBALS["lang"]['Example Devices'] = 'Dispositivos de ejemplo';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Carga de ejemplo con acceso';

$GLOBALS["lang"]['Example text from'] = 'Texto del ejemplo';

$GLOBALS["lang"]['Examples'] = 'Ejemplos';

$GLOBALS["lang"]['Exceptions'] = 'Excepciones';

$GLOBALS["lang"]['exclude'] = 'Exclusión';

$GLOBALS["lang"]['Exclude'] = 'Exclusión';

$GLOBALS["lang"]['exclude_ip'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Excluir direcciones IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Excluir direcciones IP (individual IP - 192.168.1.20, rangos - 192.168.1.30-40 o subnets - 192.168.1.100/30) enumerados a partir de ser escaneado. Comma seperó, sin espacios.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclusión de puertos TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Excluir los puertos Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Excluir los puertos Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Excluir puertos de la Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Excluir puertos de la Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Excluya los puertos enumerados de ser escaneados. Comma seperó, sin espacios.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Excluir estas direcciones IP de ser Nmap escaneado.';

$GLOBALS["lang"]['Excluded'] = 'Excluido';

$GLOBALS["lang"]['exclusion_reasons'] = 'Exclusion Reasons';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Exclusion Reasons';

$GLOBALS["lang"]['executable'] = 'Ejecutible';

$GLOBALS["lang"]['Executable'] = 'Ejecutible';

$GLOBALS["lang"]['executable_id'] = 'ID ejecutable';

$GLOBALS["lang"]['Executable ID'] = 'ID ejecutable';

$GLOBALS["lang"]['executables'] = 'Ejecutables';

$GLOBALS["lang"]['Executables'] = 'Ejecutables';

$GLOBALS["lang"]['Execute'] = 'Ejecutar';

$GLOBALS["lang"]['Executing'] = 'Ejecución';

$GLOBALS["lang"]['exemption_reason'] = 'Razón de exención';

$GLOBALS["lang"]['Exemption Reason'] = 'Razón de exención';

$GLOBALS["lang"]['Existing Building'] = 'Edificio existente';

$GLOBALS["lang"]['Existing Floor'] = 'Piso existente';

$GLOBALS["lang"]['Existing Room'] = 'Sala existente';

$GLOBALS["lang"]['Existing Row'] = 'Fila existente';

$GLOBALS["lang"]['expire_date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['Expire Date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['expire_minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['expires'] = 'Gastos';

$GLOBALS["lang"]['Expires'] = 'Gastos';

$GLOBALS["lang"]['expiry_date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['Expiry Date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturismo';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturismo';

$GLOBALS["lang"]['Export'] = 'Exportación';

$GLOBALS["lang"]['Export by Device'] = 'Exportación por dispositivo';

$GLOBALS["lang"]['Export by Policy'] = 'Export by Policy';

$GLOBALS["lang"]['Export data to'] = 'Exportar datos a';

$GLOBALS["lang"]['Exporting a Device'] = 'Exportar un dispositivo';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Externo';

$GLOBALS["lang"]['External Field Name'] = 'Nombre del campo externo';

$GLOBALS["lang"]['External Field Type'] = 'Tipo de campo externo';

$GLOBALS["lang"]['External Field Types'] = 'Tipos de campo externos';

$GLOBALS["lang"]['external_ident'] = 'External Ident';

$GLOBALS["lang"]['External Ident'] = 'External Ident';

$GLOBALS["lang"]['external_link'] = 'Enlace externo';

$GLOBALS["lang"]['External Link'] = 'Enlace externo';

$GLOBALS["lang"]['extra_columns'] = 'Columnas extra';

$GLOBALS["lang"]['Extra Columns'] = 'Columnas extra';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Informes extra y basados en el tiempo';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'La tala extra y más verbosa se genera para la solución de problemas.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Fail';

$GLOBALS["lang"]['Failed'] = 'Failed';

$GLOBALS["lang"]['Failed Severity'] = 'Failed Severity';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Islas Malvinas (Falkland Islands)';

$GLOBALS["lang"]['Family'] = 'Familia';

$GLOBALS["lang"]['Faroe Islands'] = 'Islas Feroe';

$GLOBALS["lang"]['Features'] = 'Características';

$GLOBALS["lang"]['February'] = 'Febrero';

$GLOBALS["lang"]['field'] = 'Campo';

$GLOBALS["lang"]['Field'] = 'Campo';

$GLOBALS["lang"]['field_id'] = 'ID de campo';

$GLOBALS["lang"]['Field ID'] = 'ID de campo';

$GLOBALS["lang"]['Field Name'] = 'Nombre del campo';

$GLOBALS["lang"]['Field Type'] = 'Tipo de campo';

$GLOBALS["lang"]['Fields'] = 'Campos';

$GLOBALS["lang"]['fields'] = 'Campos';

$GLOBALS["lang"]['Fields attributes are'] = 'Los atributos de campo son';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Islas Fiji';

$GLOBALS["lang"]['File'] = 'Archivo';

$GLOBALS["lang"]['File Auditing'] = 'Auditoría de archivos';

$GLOBALS["lang"]['File Import'] = 'Importación de archivos';

$GLOBALS["lang"]['File Input'] = 'Entrada de archivos';

$GLOBALS["lang"]['file_name'] = 'Nombre del archivo';

$GLOBALS["lang"]['File Name'] = 'Nombre del archivo';

$GLOBALS["lang"]['File Share Discovery'] = 'Archivo Compartir Discovery';

$GLOBALS["lang"]['file_size'] = 'Tamaño del archivo';

$GLOBALS["lang"]['File Size'] = 'Tamaño del archivo';

$GLOBALS["lang"]['filename'] = 'Nombre de archivo';

$GLOBALS["lang"]['Filename'] = 'Nombre de archivo';

$GLOBALS["lang"]['files'] = 'Archivos';

$GLOBALS["lang"]['Files'] = 'Archivos';

$GLOBALS["lang"]['files_id'] = 'ID de archivos';

$GLOBALS["lang"]['Files ID'] = 'ID de archivos';

$GLOBALS["lang"]['filter'] = 'Filtro';

$GLOBALS["lang"]['Filter'] = 'Filtro';

$GLOBALS["lang"]['filtered'] = 'Filtros';

$GLOBALS["lang"]['Filtered'] = 'Filtros';

$GLOBALS["lang"]['Filtered Ports'] = 'Puertos filtrados';

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Finnish'] = 'Finland';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Paquetes de cortafuegos';

$GLOBALS["lang"]['firewall_rule'] = 'Regla de cortafuegos';

$GLOBALS["lang"]['Firewall Rule'] = 'Regla de cortafuegos';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First'] = 'Primera';

$GLOBALS["lang"]['First Name'] = 'Nombre';

$GLOBALS["lang"]['first_run'] = 'Primera carrera';

$GLOBALS["lang"]['First Run'] = 'Primera carrera';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = '¿Está tratando de basar el software, los usuarios o los datos de Netstat? ¿Qué es lo importante(s) para comparar e informar sobre?';

$GLOBALS["lang"]['FirstWave'] = 'Primero';

$GLOBALS["lang"]['Fix'] = 'Corrección';

$GLOBALS["lang"]['Fixed'] = 'Fijación';

$GLOBALS["lang"]['Fixing the Issue'] = 'Corrección del asunto';

$GLOBALS["lang"]['Floor'] = 'Piso';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Siga cualquiera de los enlaces de abajo y descubra cómo utilizar Open-AudIT para averiguar <b>¿Qué hay en tu red?</b>';

$GLOBALS["lang"]['For'] = 'Para';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Para <i>Tipo</i> asegúrese de seleccionar Baseline, y para Grupo debe seleccionar un Grupo de dispositivos, si es aplicable a esta base de referencia, que mejor representan los dispositivos para aplicar la línea de referencia. Esto evitará entradas erróneas.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Para la ejecución de Debian/Ubuntu, incluyendo la configuración dpkg para recordar su override para que una actualización apt-get no se rompa';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Para SNMP Open-AudIT puede utilizar las credenciales v1, v2 y v3. El dispositivo se pregunta con independencia de que sea un router, conmutar (dispositivos de red regulares) o un ordenador (Linux y Windows suelen ejecutar SNMP para herramientas de monitoreo).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Para una imprenta en cron, vea esta página de Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Para un descubrimiento de semillas, sólo debería descubrir IPs en el espacio de dirección IP privado.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Para un descubrimiento de semillas, sólo debería descubrir IPs en la subred elegida.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Para un descubrimiento de semillas, debería pinchar el submarino antes de correr el descubrimiento.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Para la entrada avanzada de una consulta SQL cruda. De acuerdo con las consultas, debe incluir <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Para cada proceso desovecido, el siguiente ocurre.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Por ejemplo - puede crear una base de referencia de un dispositivo que ejecuta Redhat 9 que actúa como uno de sus servidores Apache en un clúster. Usted sabe que este servidor en particular está configurado tal como lo desea pero no está seguro si otros servidores en el clúster están configurados exactamente el mismo. Las líneas de base le permiten determinar esto.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Por ejemplo - puede crear una base de referencia de un dispositivo que ejecuta Redhat 9 que actúa como uno de sus servidores Apache en un clúster. Usted sabe que este servidor en particular está configurado tal como lo desea pero no está seguro si otros servidores en el clúster están configurados exactamente el mismo. Baselines le permite determinar esto.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Para más información, consulte el wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Para licencias que no son perpetuas, cuando la licencia expira.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Para obtener información más detallada, consulte la Base de conocimientos de Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Para más información, consulte la siguiente guía que incluye un vídeo. Uso';

$GLOBALS["lang"]['For more information, see'] = 'Para más información, consulte';

$GLOBALS["lang"]['form_factor'] = 'Factor de formulario';

$GLOBALS["lang"]['Form Factor'] = 'Factor de formulario';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francia, República Francesa';

$GLOBALS["lang"]['free'] = 'Gratis';

$GLOBALS["lang"]['Free'] = 'Gratis';

$GLOBALS["lang"]['French'] = 'Francés';

$GLOBALS["lang"]['French Guiana'] = 'Guiana Francesa';

$GLOBALS["lang"]['French Polynesia'] = 'Polinesia Francesa';

$GLOBALS["lang"]['French Southern Territories'] = 'Territorios del Sur';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Preguntas frecuentes';

$GLOBALS["lang"]['Friday'] = 'Viernes';

$GLOBALS["lang"]['From 100 Devices'] = 'De 100 dispositivos';

$GLOBALS["lang"]['From 500 Devices'] = 'De 500 dispositivos';

$GLOBALS["lang"]['From that page'] = 'De esa página';

$GLOBALS["lang"]['full_name'] = 'Nombre completo';

$GLOBALS["lang"]['Full Name'] = 'Nombre completo';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Auditoría completa de la nube con todos los detalles de una auditoría de Open-AudIT y detalles como el tipo y tamaño de la máquina.';

$GLOBALS["lang"]['function'] = 'Función';

$GLOBALS["lang"]['Function'] = 'Función';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabón';

$GLOBALS["lang"]['Galician'] = 'Gallego';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap Analysis (opcional)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generado por';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Mapas geográficos';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Alemán';

$GLOBALS["lang"]['Germany'] = 'Alemania';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Obtener noticias';

$GLOBALS["lang"]['Get Started'] = 'Empieza.';

$GLOBALS["lang"]['Get a Free License'] = 'Consigue una Licencia Gratis';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Conocer la plataforma Open-AudIT y explorar algunas de sus características.';

$GLOBALS["lang"]['Getting Started'] = 'Comienzo';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opciones de descubrimiento global';

$GLOBALS["lang"]['Global area network'] = 'Red de área global';

$GLOBALS["lang"]['Go'] = 'Vamos.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Regrese a su servidor Open-AudIT y cree un descubrimiento con el objetivo de Windows computadoras IP Address como el subnet (esto ahorrará tener que descubrir todo el subnet de nuevo). Ejecute el descubrimiento, tomando nota de cualquier problema. Para cualquier problema encontrado, tome medidas apropiadas.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Vaya al PC de Windows objetivo (o utilice RDP) y inicie sesión como el usuario utilizado por su conjunto de credencial de descubrimiento.';

$GLOBALS["lang"]['Go to menu'] = 'Ir al menú';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Ir a la <i>Aplicaciones</i> - No. <i>Registros de aplicaciones</i> menú de la izquierda. Busque Open-AudIT. Haga clic en la entrada Open-AudIT en la lista (asumiendo que usted nombró la aplicación Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Ir a la <i>Certificados y secretos</i> menú debajo <i>Manage</i> en el menú central.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Ir a la <i>Firma única</i> menú elemento y haga clic en SAML para <i>Seleccione un único método de señalización</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credenciales';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Clave';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Genial, entonces puedes ayudar! Enviar primero Ola el texto que se muestra en el GUI y lo que se debe mostrar. Incluiremos que en el archivo de idioma así que adelante, la traducción se mejora y usted no necesita preocuparse por actualizarlo para cada lanzamiento!';

$GLOBALS["lang"]['Greater Than'] = 'Más grande que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Mayor o igual';

$GLOBALS["lang"]['Greece'] = 'Grecia';

$GLOBALS["lang"]['Greek'] = 'Griego';

$GLOBALS["lang"]['Green Query'] = 'Green Query';

$GLOBALS["lang"]['Greenland'] = 'Groenlandia';

$GLOBALS["lang"]['Grenada'] = 'Granada';

$GLOBALS["lang"]['Group'] = 'Grupo';

$GLOBALS["lang"]['group_by'] = 'Grupo By';

$GLOBALS["lang"]['Group By'] = 'Grupo By';

$GLOBALS["lang"]['group_id'] = 'ID de grupo';

$GLOBALS["lang"]['Group ID'] = 'ID de grupo';

$GLOBALS["lang"]['groups'] = 'Grupos';

$GLOBALS["lang"]['Groups'] = 'Grupos';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Los grupos se utilizan como listas simples de dispositivos que coinciden con las condiciones requeridas. Si se solicita utilizando JSON, devuelven una lista de <i>dispositivos.id</i> sólo. Si se solicita utilizando la interfaz web, devuelven la lista de atributos de columna estándar. Los grupos pueden ser utilizados para las integraciones, líneas de base y otros artículos.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadalupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'ID del dispositivo invitado';

$GLOBALS["lang"]['Guest Device ID'] = 'ID del dispositivo invitado';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revision';

$GLOBALS["lang"]['Haiti'] = 'Haití';

$GLOBALS["lang"]['hard_drive_index'] = 'Índice de disco duro';

$GLOBALS["lang"]['Hard Drive Index'] = 'Índice de disco duro';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Revisión de hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisión de hardware';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Se ha aplicado esta política en esta organización.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Haga que el agente siempre ejecute el último script de auditoría (si actualiza Open-AudIT y copia manualmente los scripts a los objetivos, luego establece cron - necesitará actualizar estos scripts para cada actualización).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Haga que su usuario abra un aviso de comando (usando) <i>Corre como Administrador</i>). Pruebe el siguiente en el aviso para descargar el Agente.';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island y McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hebreo';

$GLOBALS["lang"]['height'] = 'Altura';

$GLOBALS["lang"]['Height'] = 'Altura';

$GLOBALS["lang"]['Height in RU'] = 'Altura en RU';

$GLOBALS["lang"]['Help'] = 'Ayuda';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Ayuda y preguntas frecuentes';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Ayuda a gestionar y mitigar los riesgos de seguridad de la información';

$GLOBALS["lang"]['Hide Audit Window'] = 'Ocultar ventana de auditoría';

$GLOBALS["lang"]['high'] = 'Alto';

$GLOBALS["lang"]['High'] = 'Alto';

$GLOBALS["lang"]['High Availability'] = 'Alta disponibilidad';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sede';

$GLOBALS["lang"]['Home'] = 'Inicio';

$GLOBALS["lang"]['home'] = 'Inicio';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Red de área principal';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nombre de host';

$GLOBALS["lang"]['Hostname'] = 'Nombre de host';

$GLOBALS["lang"]['hour'] = 'Hora';

$GLOBALS["lang"]['Hour'] = 'Hora';

$GLOBALS["lang"]['How Does It Work?'] = '¿Cómo funciona?';

$GLOBALS["lang"]['How Does it Work?'] = '¿Cómo funciona?';

$GLOBALS["lang"]['How Long Does it Take'] = '¿Cuánto tiempo lleva?';

$GLOBALS["lang"]['How and Why is'] = 'Cómo y por qué';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Cómo y por qué es Open-AudIT más seguro';

$GLOBALS["lang"]['How do they work?'] = '¿Cómo funcionan?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = '¿Cómo encuentra un dispositivo Seed Discovery IPs conocidos?';

$GLOBALS["lang"]['How long did the command take to execute.'] = '¿Cuánto tiempo se tarda en ejecutar el comando?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = '¿Cuánto tiempo debe esperar Nmap para una respuesta, por dispositivo.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = '¿Cuántos circuitos se alimentan a este rack?';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Cuantas políticas resultan en un fracaso.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Cuantas políticas resultan en un paso.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Cuantas tomas de corriente en este rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Cuantas unidades de estante en altura es este estante.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = '¿Con qué frecuencia el coleccionista debe pedir al servidor una tarea?';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Cómo seleccionar los dispositivos para integrarse (utilizando un atributo, consulta o un grupo).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Cómo se explota la vulnerabilidad (por ejemplo, Red, Adjacent, Local, Física).';

$GLOBALS["lang"]['How to compare'] = 'Cómo comparar';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Explicación legible por el hombre de la vulnerabilidad.';

$GLOBALS["lang"]['Hungarian'] = 'Húngaro';

$GLOBALS["lang"]['Hungary'] = 'Hungría';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'He leído el EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Espero que este post haya aliviado cualquier preocupación que tenga sobre Open-AudIT y Seguridad. Si tiene alguna pregunta, por favor no dude en contactarnos aquí en FirstWave. Siempre estamos contentos de discutir sus preocupaciones y necesidades. Y tal vez si tu pregunta no es algo que he abordado aquí, puedo añadirlo aquí para futuros usuarios';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANTE';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'Versión IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Dirección IP';

$GLOBALS["lang"]['IP Addresses'] = 'Direcciones IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'Configuración IP';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 solamente.';

$GLOBALS["lang"]['Iceland'] = 'Islandia';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icono y texto';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icono solamente, sólo texto o icono y texto.';

$GLOBALS["lang"]['id_internal'] = 'Id Interna';

$GLOBALS["lang"]['Id Internal'] = 'Id Interna';

$GLOBALS["lang"]['id_number'] = 'Id Number';

$GLOBALS["lang"]['Id Number'] = 'Id Number';

$GLOBALS["lang"]['identification'] = 'Identificación';

$GLOBALS["lang"]['Identification'] = 'Identificación';

$GLOBALS["lang"]['Identify information assets'] = 'Identificar los bienes de información';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identificar a las partes interesadas y sus requisitos';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identificar los principales interesados y asignar funciones';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identificar el(s) dispositivo(s) que sea su ejemplar, o <i>imagen de oro</i> desea comparar dispositivos similares en contra.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Determinación y evaluación de los riesgos de seguridad';

$GLOBALS["lang"]['If'] = 'Si';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Si un dispositivo se descubre individualmente usando el <i>Descubra el dispositivo</i> enlace en la página de detalles del dispositivo, primero comprobar si este dispositivo ha sido descubierto previamente (por Discovery) y si es así, utilizar las opciones de descubrimiento de ese escáner. Si no se ha descubierto previamente, revertimos al elemento de configuración Discover_default_scan_option los ajustes.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Si se crea un nuevo Org, el nombre del grupo LDAP se deriva automáticamente del nombre. Por ejemplo, si se crea un nuevo Org y se llama Test, el grupo LDAP correspondiente será nombrado open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Si un puerto responde con filtrado, deberíamos considerarlo disponible.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Si un puerto responde con una versión abierta, deberíamos considerarlo disponible.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Si un dispositivo remoto no existe en los dispositivos seleccionados Open-AudIT, si lo eliminamos del sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Si se ha cambiado un dispositivo Open-AudIT, deberíamos actualizar el sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Si un dispositivo Open-AudIT no está en el sistema externo, deberíamos crearlo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Si un agente reporta su IP primaria está en esta subred, realice las acciones.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Si se detectan algunos de estos puertos (comma seperated, no hay espacios), asume que SSH se está ejecutando en ellos y los utiliza para la auditoría. No es necesario añadir este puerto a los puertos TCP personalizados - se añadirá automáticamente.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Si no se especifica ningún operador, el defecto es =. Las propiedades deben estar completamente calificadas - es decir, dispositivos.hostname (no solo nombre de host).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Si no hay valor presente, suministre este valor. EG: para el sistema.nmis_group / configuración. grupo que usamos';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Si se establece, tiene una matriz JSON de columnas específicas de dispositivo que este usuario ha elegido ver, aparte del predeterminado de configuración.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Si la familia OS (como lo informó el dispositivo) contiene este artículo, pase.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Si el Open-AudIT Server tiene coleccionistas que le informan, se proporciona una reducción adicional. Puede seleccionar esto para especificar qué Coleccionista debe ejecutar la tarea. Sólo las tareas Discovery son compatibles para coleccionistas.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Si el agente OS familia (caso insensible) contiene esta cadena, realice las acciones.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Si el binario no se encuentra en ninguno de estos lugares, se mostrará un mensaje de advertencia en el instalador.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Si se cumplen las siguientes condiciones:<br/><ul><li>a Role tiene un ad_group asignado</li><li>un Org tiene un ad_group asignado</li><li>un LDAP Server tiene use_roles set a y</li><li>un usuario existe en LDAP (ya sea Active Directory o OpenLDAP) y está en los ad_groups asignados</li></ul>Ese usuario puede conectarse a Open-AudIT sin una cuenta en Open-AudIT que necesita ser creado. Open-AudIT preguntará el LDAP en cuestión y si el usuario está en los grupos requeridos pero no en Open-AudIT, sus atributos de usuario (nombre, nombre completo, correo electrónico, roles, orgs, etc) dentro de Open-AudIT se popula automáticamente y se registrarán.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Si el campo local es verdadero (bool) o y (cadena) o Y (estring) o 1 (integer) entonces establecer los datos externos a 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Si el campo local es verdadero (bool) o y (cadena) o Y (estring) o 1 (integer) entonces establecer los datos externos a y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Si la IP primaria (como informó el dispositivo) está en esta subred, pase.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Si la cuenta de usuario no existe realmente dentro de Open-AudIT y <code>use_authorisation</code> se establece, el usuario será creado. Si existe, se poblarán detalles como correo electrónico, nombre completo, etc.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Si el usuario no tiene credenciales válidas o no está en al menos una función y un grupo Open-AudIT (al utilizarlo) <code>use_authorisation</code>), Open-AudIT caerá en el uso de los datos del usuario de Open-AudIT local e intentará autenticación y autorización allí. En caso contrario, se negará el acceso al usuario.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Si el usuario inicia sesión en Open-AudIT no tiene acceso a la búsqueda LDAP, puede utilizar otra cuenta que tenga este acceso.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Si el usuario inicia sesión en Open-AudIT no tiene acceso a la búsqueda OpenLDAP, puede utilizar otra cuenta que tenga este acceso. Utilice el dn_account y dn_password para configurar esto.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Si el valor no se establece, se utilizará el cronograma actual.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Si el valor se establece, ese valor de temporizador se utilizará.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Si este cambio no funciona para usted, todo no está perdido. Hemos añadido un elemento de configuración (ajustado a n por defecto, por lo que no utilizará esta nueva opción fuera de la caja) llamada Discover_use_org_id_match. Si usted lo cambia a y entonces el OrgID asignado al dispositivo por el descubrimiento se utilizará en las reglas pertinentes del partido.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Si estos muchos minutos (o más) han pasado desde que el servidor vio por última vez el dispositivo, pasar.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Si estos muchos o más minutos han pasado desde que el dispositivo se puso en contacto con el servidor, realice las acciones.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Si esto ocurre entonces el problema que está viendo está relacionado con el control de mesa que se utiliza en la página web. Sólo almacena en memoria el estado de las casillas de verificación para la página actual que se está viendo. Si usted hace las selecciones, entonces página de adelante/back esas selecciones se perderán. Sin embargo, puedes lograr lo que quieras ampliando el número de dispositivos mostrados en cada página. En la esquina superior izquierda hay una desplegable “grabación por página”; utiliza esto para ampliar el número de entradas mostradas hasta que vea todo lo que desea seleccionar para Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Si detectamos el software de gestión de san, deberíamos ejecutar un auto-descubrimiento antes de la consulta.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Si añades un tipo de ubicación, agrega esos iconos a';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Si agrega un tipo de dispositivo, para mostrar el icono asociado tendrá que copiar manualmente el archivo .svg formateado al directorio';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Si eres un cliente de FirstWave compatible, un par de artículos te ayudarán más fácilmente. Abrir un ticket de soporte con FirstWave y adjuntar el archivo de registro. También incluye la salida desde el botón Soporte en la derecha superior de la';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Si usted es un cliente compatible y abrir un ticket de soporte con FirstWave, por favor adjunta estos archivos.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Si usted está teniendo problemas con las teclas de API de Google Maps o su empresa no tiene acceso a crear las claves de API de Google Maps, por favor contacte al equipo de soporte de FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Si está en Windows o su servidor NMIS es remoto, tendrá que suministrar la URL, el nombre de usuario y la contraseña para acceder a ese servidor.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Si usted está en una banda ancha decente o conexión con ethernet, recomendaría siempre utilizar -T4 (Agresivo). Algunas personas aman -T5 (Insane) aunque es demasiado agresivo para mi gusto. Las personas a veces especifican -T2 (Polite) porque piensan que es menos probable que se estrellan hosts o porque se consideran educados en general. A menudo no se dan cuenta de lo lento -T2 realmente es. Su escaneo puede tardar diez veces más que un escaneo predeterminado. Los fallos de la máquina y problemas de ancho de banda son raros con las opciones de tiempo predeterminado -T3 (Normal) y por lo que normalmente recomiendo que para los escáneres cautelosos. Omitting version detection is far more effective than playing with timing values at reducing these problems.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Si usted está ejecutando un sistema RedHat o Centos y usted ha actualizado Nmap, por favor reajuste el SUID en el binario por';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Si está ejecutando un servidor Open-AudIT en Linux, esto no le afecta.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Si está usando Open-AudIT en Windows o si su servidor NMIS no está en su Open-AudIT Server (en el caso de algunas instalaciones de Linux), necesitará suministrar credenciales de acceso y una URL al NMIS remoto, ¡pero eso es todo! Sí - Las integraciones entre NMIS y Open-AudIT incluso trabajan con Open-AudIT basado en Windows ahora!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Si eliges un coleccionista, se programará ejecutar en el siguiente límite de 5 minutos.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Si estableces normalmente dispositivos_assigned_to_org y el elemento de configuración está habilitado, entonces el OrgID se utilizará para perfeccionar el partido.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Si usted no establece normalmente dispositivos_assigned_to_org, entonces no tendrá ningún efecto. Sólo verificamos el uso del OrgID si se ha establecido en el descubrimiento (o manualmente en un script de auditoría) y se ha habilitado en la configuración.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Si habilita el elemento de configuración, utilice el descubrimiento para asignar un org y luego cambiar el OrgID de un dispositivo después del descubrimiento, entonces es probable que tenga un nuevo dispositivo creado la próxima vez que el descubrimiento se ejecuta. En este caso, usted debe probablemente sólo unset devices_assigned_to_org antes de ejecutar descubrimientos posteriores. Esto es porque (en este caso) le has dicho a Open-AudIT <i>estos dispositivos de este descubrimiento pertenecen a Org X<i>, pero luego cambió la Org del dispositivo. Has cambiado la información de los dispositivos almacenados. En este caso - ya no hay un dispositivo perteneciente a Org X, así que creamos uno nuevo.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Si usted tiene el software Anti-Virus funcionando, permitiendo los servicios de Opmantek (omkd), Apache (apache2.2) y MySQL (mysql) para iniciar y ejecutar auto es esencial. Estos servicios son utilizados por Open-AudIT. Sólo tienes que hacer esto una vez. Si su programa Anti-Virus sigue instándole acerca de Open-AudIT, por favor envíe un correo a los foros o envíe un correo electrónico para apoyar con el nombre y la versión de su software Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Si tiene credenciales de trabajo, puede esperar la cantidad completa de información posible.<br/><br/>Obviamente, la mejor manera de utilizar Open-AudIT es tener credenciales de trabajo para los dispositivos que se descubren (ya sean WMI, SSH o SNMP credenciales).<br/><br/>También tenemos una página sobre auditoría sin credenciales.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Si incluye el campo \"id\" <strong>y</strong> configurarlo con un número, ese artículo será actualizado en lugar de crearlo.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Si necesita configurar el acceso Active Directory, generalmente puede utilizar el ejemplo de <code>cn=Users,dc=your,dc=domain,dc=com</code> para su <code>base_dn</code>. No hay necesidad de establecer <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Si necesita configurar el acceso OpenLDAP para sus usuarios y un acceso dado de los usuarios DN es normalmente <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> entonces usted debe establecer <code>base_dn</code> a <code>dc=your,dc=domain,dc=com</code> y <code>user_dn</code> a <code>uid=@username@@domain,cn=People</code>. Las palabras especiales <code>@username</code> y <code>@domain</code> será reemplazado por los datos de inicio de sesión proporcionados por su usuario en la página de inicio de sesión.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Si se ejecuta el descubrimiento en una subred que el servidor (o coleccionista) está instalado directamente, puede esperar lo siguiente para los dispositivos de respuesta';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Si ejecuta el descubrimiento en una subred que su servidor (o coleccionista) no está instalado directamente en, puede esperar lo siguiente para los dispositivos de respuesta';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Si selecciona un tipo de lista, aparecerá un campo adicional llamado Valores. Usted debe poner una lista separada de los valores seleccionables aquí. Estos se mostrarán en una caja desplegable cuando se edita el campo.';

$GLOBALS["lang"]['If you set the values for'] = 'Si establece los valores para';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Si desea obligar a sus Agentes a utilizar una configuración particular, puede suministrar el ID de la entrada de los agentes a utilizar, como abajo (reemplazar $id con el número de la entrada de Agentes). Cuando este agente esté instalado, se registrará con el sevrer y <strong>sólo</strong> comprobar que un individuo Atributos de entrada del agente (pruebas y acciones). Esto puede ser útil si usted es un MSP - crear una entrada de Agentes para un cliente en particular y tener sus dispositivos todos utilizan esta entrada, que los asigna a un Org y Ubicación.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Si desea profundizar y personalizar la Integración, haga clic en el botón Avanzado (y trate de no estar abrumado!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Si desea ejecutar un Discovery en un dispositivo proporcionado externamente, seleccione la opción y cuando se crea la Integración, así es el Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Si desea utilizar el script fuera de Discovery hemos creado otro punto final llamado <i>scripts</i>. Vea la documentación';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Si su usuario no tiene <i>Corre como Administrador</i> derechos, todavía pueden descargar el agente (primer comando arriba) y ejecutarlo para presentar una auditoría como abajo. Será una auditoría sin que el Agente esté instalado o programado.';

$GLOBALS["lang"]['ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignoro inválido SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignorado';

$GLOBALS["lang"]['image'] = 'Imagen';

$GLOBALS["lang"]['Image'] = 'Imagen';

$GLOBALS["lang"]['Images'] = 'Imágenes';

$GLOBALS["lang"]['impact_availability'] = 'Impacto';

$GLOBALS["lang"]['Impact Availability'] = 'Impacto';

$GLOBALS["lang"]['impact_confidentiality'] = 'Confidencialidad del impacto';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Confidencialidad del impacto';

$GLOBALS["lang"]['impact_integrity'] = 'Integridad de impacto';

$GLOBALS["lang"]['Impact Integrity'] = 'Integridad de impacto';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implementar controles y procedimientos seleccionados';

$GLOBALS["lang"]['Implementation'] = 'Aplicación';

$GLOBALS["lang"]['implementation_notes'] = 'Notas de aplicación';

$GLOBALS["lang"]['Implementation Notes'] = 'Notas de aplicación';

$GLOBALS["lang"]['Import'] = 'Importación';

$GLOBALS["lang"]['Import Example Data'] = 'Importar datos de ejemplo';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importar múltiples {colecciones} utilizando un CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Oportunidades de mejora';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Oportunidades de mejora';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Mejora la continuidad de las operaciones y la resiliencia';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'En una segunda pestaña o ventana vaya a su consola OKTA y haga clic en <i>Crear integración de aplicaciones</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'En una segunda pestaña o ventana señale a su';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'En mi opinión personal, la mejor manera de encontrar y auditar cada artículo en su red es un Seed Discovery para cada subnet, restringido a esa subred (usando credenciales). Seed Discoveries utiliza interruptor, router y ordenador MAC Tablas de direcciones para no perder un solo dispositivo. Si está conectado a la red y utiliza TCP/IP, un conmutador/router/computer tiene que saber que está allí - así es como funciona TCP/IP. Combine eso con puertos TCP y/o UDP personalizados y luego debe ser capaz de determinar el tipo de dispositivo también. Pero eso es sólo mi preferencia personal';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Con el fin de que Open-AudIT pueda aplicar permisos de usuario sobre artículos, le encomendamos al usuario de <code>WHERE @filter</code>. Si no utiliza este formato, la consultaCreateForm lanzará una advertencia. Sólo los usuarios con el rol de Admin pueden crear consultas que carecen de este atributo e incluso entonces, sólo después del elemento de configuración para <i>avanzado_queries</i> ha sido habilitado.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Con el fin de habilitar Google Maps usted necesitará para una clave de Google API seguir este enlace y conectarse con su Cuenta de Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Para utilizar la API Azure Rest, necesitará crear una aplicación Azure Active Directory que se utiliza para la autenticación.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Para utilizar esta funcionalidad, debe habilitarse en la configuración - haga clic';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In the (comma seperated) list';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'En el caso de <code>in</code> y <code>notin</code>, debe adjuntar los valores entre corchetes y separarlos usando una coma (sólo una coma, no una coma, luego el espacio).<br/><br/>Con estos operadores puedes filtrar de forma completa.<br/><br/>Cuando agrega datos y filtrar en múltiples columnas, esas columnas se combinan utilizando <strong>Y</strong>. No se puede filtrar usando un <strong>O</strong> condición. Con la inclusión de <code>notin</code>, usted debe ser capaz de conseguir la mayoría de búsquedas funcionando. Y para aquellos que realmente requieren selecciones sin soporte y complejas, siempre puede escribir una consulta real.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'En el caso en que almacenamos varios campos (generalmente en formato JSON) dentro de un campo BIGTEXT MySQL (por ejemplo: credenciales. credenciales - la columna de credenciales en la tabla de credenciales), debe utilizar el formato';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'En el comando prompt shell, navega al directorio de descargas (de forma similar) <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inactivo';

$GLOBALS["lang"]['Incomplete'] = 'Incompleto';

$GLOBALS["lang"]['Index'] = 'Índice';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Indonesian'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Sólo información.';

$GLOBALS["lang"]['Informational'] = 'Información';

$GLOBALS["lang"]['initial_size'] = 'Tamaño inicial';

$GLOBALS["lang"]['Initial Size'] = 'Tamaño inicial';

$GLOBALS["lang"]['Initial login credentials are'] = 'Las credenciales iniciales son';

$GLOBALS["lang"]['Initiation'] = 'Iniciación';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Input';

$GLOBALS["lang"]['Input Type'] = 'Tipo de entrada';

$GLOBALS["lang"]['inputs'] = 'Inputs';

$GLOBALS["lang"]['Inputs'] = 'Inputs';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Insertar una nueva entrada {colección}.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Inserte datos de ejemplo y descubra todo lo que Open-AudIT puede decirle.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Inserte su Licencia adquirida Clave';

$GLOBALS["lang"]['install'] = 'Instala';

$GLOBALS["lang"]['Install'] = 'Instala';

$GLOBALS["lang"]['install_date'] = 'Fecha de instalación';

$GLOBALS["lang"]['Install Date'] = 'Fecha de instalación';

$GLOBALS["lang"]['install_directory'] = 'Install Directory';

$GLOBALS["lang"]['Install Directory'] = 'Install Directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instala OpenScap si es necesario';

$GLOBALS["lang"]['install_source'] = 'Install Source';

$GLOBALS["lang"]['Install Source'] = 'Install Source';

$GLOBALS["lang"]['Install Support'] = 'Install Support';

$GLOBALS["lang"]['installed_by'] = 'Instalado por';

$GLOBALS["lang"]['Installed By'] = 'Instalado por';

$GLOBALS["lang"]['installed_on'] = 'Instalado en';

$GLOBALS["lang"]['Installed On'] = 'Instalado en';

$GLOBALS["lang"]['Installing'] = 'Instalación';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalación en Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalación en MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalación en Windows';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Opciones de instalación';

$GLOBALS["lang"]['Instance Options'] = 'Opciones de instalación';

$GLOBALS["lang"]['instance_provider'] = 'Proveedor de instalación';

$GLOBALS["lang"]['Instance Provider'] = 'Proveedor de instalación';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Reserva de instalación Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Reserva de instalación Ident';

$GLOBALS["lang"]['instance_state'] = 'Instance State';

$GLOBALS["lang"]['Instance State'] = 'Instance State';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Tipo de instalación';

$GLOBALS["lang"]['Instance Type'] = 'Tipo de instalación';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integración';

$GLOBALS["lang"]['integrations'] = 'Integración';

$GLOBALS["lang"]['Integrations'] = 'Integración';

$GLOBALS["lang"]['integrations_id'] = 'ID de integración';

$GLOBALS["lang"]['Integrations ID'] = 'ID de integración';

$GLOBALS["lang"]['integrations_log'] = 'Integrations Log';

$GLOBALS["lang"]['Integrations Log'] = 'Integrations Log';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Las integraciones pueden programarse como se desee. Esto se deja al usuario.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Las integraciones pueden programarse según Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Dashboards interactivos';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Los paneles interactivos proporcionan una visibilidad instantánea en el estado del inventario de la red que permite a los equipos de TI detectar dispositivos recién descubiertos y el comportamiento inusual del dispositivo de un vistazo.';

$GLOBALS["lang"]['interface'] = 'Interfaz';

$GLOBALS["lang"]['Interface'] = 'Interfaz';

$GLOBALS["lang"]['interface_id'] = 'ID de interfaz';

$GLOBALS["lang"]['Interface ID'] = 'ID de interfaz';

$GLOBALS["lang"]['interface_type'] = 'Tipo de interfaz';

$GLOBALS["lang"]['Interface Type'] = 'Tipo de interfaz';

$GLOBALS["lang"]['Internal'] = 'Internos';

$GLOBALS["lang"]['Internal Audit'] = 'Auditoría interna';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Examen de la auditoría interna';

$GLOBALS["lang"]['Internal Field Name'] = 'Nombre del campo interno';

$GLOBALS["lang"]['Internal ID'] = 'ID interno';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Conjunto JSON interno de fichas de acceso válidas para este usuario.';

$GLOBALS["lang"]['Introduction'] = 'Introducción';

$GLOBALS["lang"]['invoice'] = 'Factura';

$GLOBALS["lang"]['Invoice'] = 'Factura';

$GLOBALS["lang"]['invoice_id'] = 'Identificación de facturación';

$GLOBALS["lang"]['Invoice ID'] = 'Identificación de facturación';

$GLOBALS["lang"]['invoice_item'] = 'Tema de facturación';

$GLOBALS["lang"]['Invoice Item'] = 'Tema de facturación';

$GLOBALS["lang"]['ios_version'] = 'Versión de Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versión de Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Dirección Externa A';

$GLOBALS["lang"]['Ip Address External A'] = 'Dirección Externa A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Dirección externa B';

$GLOBALS["lang"]['Ip Address External B'] = 'Dirección externa B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Dirección de Ip Interna A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Dirección de Ip Interna A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Dirección interna B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Dirección interna B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Cuenta auditada';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Cuenta auditada';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Cuenta escaneada';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Cuenta escaneada';

$GLOBALS["lang"]['Iran'] = 'Irán';

$GLOBALS["lang"]['Iraq'] = 'Iraq';

$GLOBALS["lang"]['Ireland'] = 'Irlanda';

$GLOBALS["lang"]['Irish'] = 'Irlandés';

$GLOBALS["lang"]['Is FRU'] = 'Is FRU';

$GLOBALS["lang"]['is_fru'] = 'Es Fruto';

$GLOBALS["lang"]['Is Fru'] = 'Es Fruto';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = '¿Es el servidor NMIS local (en este servidor Open-AudIT) o remoto?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '¿Esta cuenta está activa? Si se establece <code>n</code>, el usuario no puede marcar.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Esta consulta está restringida a los clientes autorizados.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Esta tarea está habilitada (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isla de Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Cuestión';

$GLOBALS["lang"]['issuer'] = 'Periodista';

$GLOBALS["lang"]['Issuer'] = 'Periodista';

$GLOBALS["lang"]['issuer_name'] = 'Nombre del emisor';

$GLOBALS["lang"]['Issuer Name'] = 'Nombre del emisor';

$GLOBALS["lang"]['Issues'] = 'Cuestiones';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'It <i>Sólo funciona.</i> con NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Está disponible en el menú - título Ayuda - titulado';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Es importante señalar que cuando Open-AudIT determina una coincidencia de las propiedades establecidas para <i>Sí.</i> debe coincidir exactamente (y no estar en blanco) para que Open-AudIT determine que el dispositivo descubierto coincide con un dispositivo ya en la base de datos. Si ninguna de las propiedades marcadas <i>Sí.</i> match, entonces se creará una nueva entrada de dispositivo, lo que podría resultar en entradas de dispositivos duplicados. En situaciones en las que las propiedades se duplican, por ejemplo un dbus_id se copia durante un clon de VM, entonces un dispositivo existente puede incorrectamente ser sobrescrito/actualizado en lugar de crear una nueva entrada resultando en dispositivos perdidos.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'No es raro tener un espacio de dirección superpuesta en una determinada Organización. No es ideal, pero no es raro.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Es muy común que los fabricantes de segundas placas madre no establezcan esto, para establecerlo a todos <i>0</i>o incluso todos <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'Italiano';

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Temas que no están en línea de referencia';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Enero';

$GLOBALS["lang"]['Japan'] = 'Japón';

$GLOBALS["lang"]['Japanese'] = 'japonés';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Julio';

$GLOBALS["lang"]['June'] = 'Junio';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazajstán';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Versión de kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versión de kernel';

$GLOBALS["lang"]['Key'] = 'Clave';

$GLOBALS["lang"]['Key Components'] = 'Componentes clave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Contraseña clave (opcional)';

$GLOBALS["lang"]['keys'] = 'Llaves';

$GLOBALS["lang"]['Keys'] = 'Llaves';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corea';

$GLOBALS["lang"]['Korean'] = 'Corea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirguiz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'República Kirguisa';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Group';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP fue buscado por este usuario y su cuenta fue encontrada.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP fue buscado por este usuario y su cuenta no fue encontrada. Compruebe los registros del servidor LDAP. Las credenciales del usuario han funcionado, pero el usuario no fue encontrado. También comprueba que ha especificado el atributo Base DN correcto cuando creó el Servidor LDAP en Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Idioma';

$GLOBALS["lang"]['Language'] = 'Idioma';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Última modificación';

$GLOBALS["lang"]['Last Changed'] = 'Última modificación';

$GLOBALS["lang"]['last_finished'] = 'Último acabado';

$GLOBALS["lang"]['Last Finished'] = 'Último acabado';

$GLOBALS["lang"]['last_logon'] = 'Último Logon';

$GLOBALS["lang"]['Last Logon'] = 'Último Logon';

$GLOBALS["lang"]['Last Name'] = 'Apellido';

$GLOBALS["lang"]['last_os_update'] = 'Última actualización de Os';

$GLOBALS["lang"]['Last Os Update'] = 'Última actualización de Os';

$GLOBALS["lang"]['last_result'] = 'Último resultado';

$GLOBALS["lang"]['Last Result'] = 'Último resultado';

$GLOBALS["lang"]['last_run'] = 'Última carrera';

$GLOBALS["lang"]['Last Run'] = 'Última carrera';

$GLOBALS["lang"]['last_seen'] = 'Último visto';

$GLOBALS["lang"]['Last Seen'] = 'Último visto';

$GLOBALS["lang"]['last_seen_by'] = 'Último visto Por';

$GLOBALS["lang"]['Last Seen By'] = 'Último visto Por';

$GLOBALS["lang"]['last_user'] = 'Último Usuario';

$GLOBALS["lang"]['Last User'] = 'Último Usuario';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'El último es WMI. Para Windows como en Linux, se prefiere un usuario con acceso a nivel de Administrador (ver Configuración de cliente de destino en el wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitud';

$GLOBALS["lang"]['Latitude'] = 'Latitud';

$GLOBALS["lang"]['Latvia'] = 'Letonia';

$GLOBALS["lang"]['Latvian'] = 'Letonia';

$GLOBALS["lang"]['Layout'] = 'A ti';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Aprender acerca de';

$GLOBALS["lang"]['Learn More'] = 'Más información';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'Líbano';

$GLOBALS["lang"]['legal_requirements'] = 'Requisitos jurídicos';

$GLOBALS["lang"]['Legal Requirements'] = 'Requisitos jurídicos';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Menos Than';

$GLOBALS["lang"]['Less Than or Equals'] = 'Menos Than o Equals';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Pongamos el registro para depurar. Copia el archivo:';

$GLOBALS["lang"]['level'] = 'Nivel';

$GLOBALS["lang"]['Level'] = 'Nivel';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nivel de privilegios necesarios para explotar (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotecas (es decir, código que otro programa podría incluir). Estos son artículos típicamente como extensiones de Wordpress, extensiones drupal, bibliotecas node.js, Android / iPhone / bibliotecas de Windows, bibliotecas de python, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya Árabe Libia';

$GLOBALS["lang"]['License'] = 'Licencia';

$GLOBALS["lang"]['License Key'] = 'Licencia clave';

$GLOBALS["lang"]['License Required'] = 'Licencia requerida';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Los usuarios autorizados son gratuitos para añadir o modificar las reglas según lo que considere apropiado. Si tienes un dispositivo con un SNMP OID que no coincida con un modelo ya en el archivo - ahora puedes añadirlo fácilmente. No nos espera más para proporcionar un parche y añadirlo a la base de código para usted.<br/><br/>Cuando usted crea una entrada Reglas, usted necesitará proporcionar un nombre y una lista de entradas y salidas. Las entradas y salidas se almacenan como arrays JSON dentro de la base de datos.<br/><br/>Los insumos tienen una tabla y un atributo, un operador y un valor. Al ejecutar la condición, funciona así: Si $table . $ atribuir $operator $value entonces aplicar los productos.<br/><br/>Una regla de ejemplo para coincidir con un SNMP OID y establecer el modelo está abajo.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licencias';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Como';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Como la mayoría de otros atributos, los campos adicionales pueden ser editados a granel. Utilice la función Bulk Edit como lo haría normalmente y verá los campos adicionales están disponibles para la entrada.';

$GLOBALS["lang"]['Like versus Equals'] = 'Al igual que contra Equals';

$GLOBALS["lang"]['limit'] = 'Limit';

$GLOBALS["lang"]['Limit'] = 'Limit';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limite la consulta a los primeros elementos X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limitado a 100 filas.';

$GLOBALS["lang"]['line_amount'] = 'Monto de la línea';

$GLOBALS["lang"]['Line Amount'] = 'Monto de la línea';

$GLOBALS["lang"]['Line Graph'] = 'Gráfico de línea';

$GLOBALS["lang"]['line_number_a'] = 'Número de línea A';

$GLOBALS["lang"]['Line Number A'] = 'Número de línea A';

$GLOBALS["lang"]['line_number_b'] = 'Número de línea B';

$GLOBALS["lang"]['Line Number B'] = 'Número de línea B';

$GLOBALS["lang"]['line_text'] = 'Texto de la línea';

$GLOBALS["lang"]['Line Text'] = 'Texto de la línea';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Los gráficos deben volver fecha o mi_fecha, descripción o mi_descripción y contar.';

$GLOBALS["lang"]['link'] = 'Enlace';

$GLOBALS["lang"]['Link'] = 'Enlace';

$GLOBALS["lang"]['Link (Advanced)'] = 'Enlace (Avanzado)';

$GLOBALS["lang"]['Linked Files'] = 'Archivos vinculados';

$GLOBALS["lang"]['links'] = 'Enlaces';

$GLOBALS["lang"]['Links'] = 'Enlaces';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Enlaces este descubrimiento a la nube asociada (si es necesario). Enlaces a <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Enlaces a <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Enlaces a <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Enlaces a <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Paquetes Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Listar todos los puertos, protocolos y programas para cada dispositivo';

$GLOBALS["lang"]['List Devices'] = 'Dispositivos de lista';

$GLOBALS["lang"]['List Discoveries'] = 'List Discoveries';

$GLOBALS["lang"]['list_table_format'] = 'Formato de tabla';

$GLOBALS["lang"]['List Table Format'] = 'Formato de tabla';

$GLOBALS["lang"]['List Tables'] = 'Cuadros';

$GLOBALS["lang"]['Lithuania'] = 'Lituania';

$GLOBALS["lang"]['Lithuanian'] = 'Lituania';

$GLOBALS["lang"]['Load Balancing'] = 'Equilibrio de carga';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Local Area Network';

$GLOBALS["lang"]['local_port'] = 'Puerto local';

$GLOBALS["lang"]['Local Port'] = 'Puerto local';

$GLOBALS["lang"]['Local area network'] = 'Red de área local';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Localización';

$GLOBALS["lang"]['Location'] = 'Ubicación';

$GLOBALS["lang"]['Location A'] = 'Ubicación A';

$GLOBALS["lang"]['Location B'] = 'Ubicación B';

$GLOBALS["lang"]['location_id'] = 'ID de localización';

$GLOBALS["lang"]['Location ID'] = 'ID de localización';

$GLOBALS["lang"]['location_id_a'] = 'ID de ubicación A';

$GLOBALS["lang"]['Location ID A'] = 'ID de ubicación A';

$GLOBALS["lang"]['location_id_b'] = 'Ubicación ID B';

$GLOBALS["lang"]['Location ID B'] = 'Ubicación ID B';

$GLOBALS["lang"]['location_latitude'] = 'Ubicación Latitud';

$GLOBALS["lang"]['Location Latitude'] = 'Ubicación Latitud';

$GLOBALS["lang"]['location_level'] = 'Nivel de ubicación';

$GLOBALS["lang"]['Location Level'] = 'Nivel de ubicación';

$GLOBALS["lang"]['location_longitude'] = 'Ubicación Longitud';

$GLOBALS["lang"]['Location Longitude'] = 'Ubicación Longitud';

$GLOBALS["lang"]['Location Name'] = 'Nombre de ubicación';

$GLOBALS["lang"]['location_rack'] = 'Localización Rack';

$GLOBALS["lang"]['Location Rack'] = 'Localización Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Ubicación Rack Posición';

$GLOBALS["lang"]['Location Rack Position'] = 'Ubicación Rack Posición';

$GLOBALS["lang"]['location_rack_size'] = 'Mapa de ubicación tamaño';

$GLOBALS["lang"]['Location Rack Size'] = 'Mapa de ubicación tamaño';

$GLOBALS["lang"]['location_room'] = 'Ubicación';

$GLOBALS["lang"]['Location Room'] = 'Ubicación';

$GLOBALS["lang"]['location_suite'] = 'Location Suite';

$GLOBALS["lang"]['Location Suite'] = 'Location Suite';

$GLOBALS["lang"]['Locations'] = 'Lugares';

$GLOBALS["lang"]['Locations in this'] = 'Lugares en este';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Formato de registro';

$GLOBALS["lang"]['Log Format'] = 'Formato de registro';

$GLOBALS["lang"]['Log Line'] = 'Línea de registro';

$GLOBALS["lang"]['log_path'] = 'Sendero de registro';

$GLOBALS["lang"]['Log Path'] = 'Sendero de registro';

$GLOBALS["lang"]['log_rotation'] = 'Rotación de registro';

$GLOBALS["lang"]['Log Rotation'] = 'Rotación de registro';

$GLOBALS["lang"]['log_status'] = 'Estado de registro';

$GLOBALS["lang"]['Log Status'] = 'Estado de registro';

$GLOBALS["lang"]['Logging in'] = 'Iniciar sesión';

$GLOBALS["lang"]['Logical Cores '] = 'Cores lógicos ';

$GLOBALS["lang"]['logical_count'] = 'Cuenta lógica';

$GLOBALS["lang"]['Logical Count'] = 'Cuenta lógica';

$GLOBALS["lang"]['Logout'] = 'Cerrar sesión';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Longitud';

$GLOBALS["lang"]['Longitude'] = 'Longitud';

$GLOBALS["lang"]['low'] = 'Baja';

$GLOBALS["lang"]['Low'] = 'Baja';

$GLOBALS["lang"]['Lower Case'] = 'Caso inferior';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nombre del host';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburgo';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricantes';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Paquetes MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Mantener registros de evaluaciones de riesgos y tratamientos';

$GLOBALS["lang"]['maintenance_expires'] = 'Gastos de mantenimiento';

$GLOBALS["lang"]['Maintenance Expires'] = 'Gastos de mantenimiento';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Haga mi tablero de mando predeterminado';

$GLOBALS["lang"]['Make this install a Collector'] = 'Haga esta instalación un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malayo';

$GLOBALS["lang"]['Malaysia'] = 'Malasia';

$GLOBALS["lang"]['Maldives'] = 'Maldivas';

$GLOBALS["lang"]['Mali'] = 'Malí';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Gestionar licencias';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manage in NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Gestionar incidentes y noconformidades';

$GLOBALS["lang"]['Managed'] = 'Managed';

$GLOBALS["lang"]['managed_by'] = 'Managed by';

$GLOBALS["lang"]['Managed By'] = 'Managed by';

$GLOBALS["lang"]['Manual Input'] = 'Entrada manual';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Configurado manualmente por el usuario, predeterminado a Producción.';

$GLOBALS["lang"]['Manually set by user.'] = 'Configurado manualmente por usuario.';

$GLOBALS["lang"]['manufacture_date'] = 'Fecha de fabricación';

$GLOBALS["lang"]['Manufacture Date'] = 'Fecha de fabricación';

$GLOBALS["lang"]['manufacturer'] = 'Fabricantes';

$GLOBALS["lang"]['Manufacturer'] = 'Fabricantes';

$GLOBALS["lang"]['manufacturer_code'] = 'Código del fabricante';

$GLOBALS["lang"]['Manufacturer Code'] = 'Código del fabricante';

$GLOBALS["lang"]['Map'] = 'Mapa';

$GLOBALS["lang"]['maps'] = 'Mapas';

$GLOBALS["lang"]['Maps'] = 'Mapas';

$GLOBALS["lang"]['March'] = 'Marzo';

$GLOBALS["lang"]['Marshall Islands'] = 'Islas Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinica';

$GLOBALS["lang"]['mask'] = 'Máscara';

$GLOBALS["lang"]['Mask'] = 'Máscara';

$GLOBALS["lang"]['Match'] = 'Partido';

$GLOBALS["lang"]['match_options'] = 'Opciones de partido';

$GLOBALS["lang"]['Match Options'] = 'Opciones de partido';

$GLOBALS["lang"]['Match Order'] = 'Orden de partido';

$GLOBALS["lang"]['Match Process'] = 'Proceso de coincidencia';

$GLOBALS["lang"]['match_string'] = 'Cierre de partido';

$GLOBALS["lang"]['Match String'] = 'Cierre de partido';

$GLOBALS["lang"]['Matching Attribute'] = 'Atributo coincidente';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Dispositivos de emparejamiento - Incluyendo OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Combinando dispositivos Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'La coincidencia se lleva a cabo en el siguiente orden';

$GLOBALS["lang"]['maturity_level'] = 'Nivel de madurez';

$GLOBALS["lang"]['Maturity Level'] = 'Nivel de madurez';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauricio';

$GLOBALS["lang"]['max_file_size'] = 'Tamaño máximo del archivo';

$GLOBALS["lang"]['Max File Size'] = 'Tamaño máximo del archivo';

$GLOBALS["lang"]['Max Length'] = 'Longitud máxima';

$GLOBALS["lang"]['max_size'] = 'Tamaño máximo';

$GLOBALS["lang"]['Max Size'] = 'Tamaño máximo';

$GLOBALS["lang"]['May'] = 'Mayo';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mide la probabilidad de que la vulnerabilidad sea atacada, y se basa en el estado actual de las técnicas de explotación, explota la disponibilidad de códigos o la explotación activa, “en el hogar”.';

$GLOBALS["lang"]['medium'] = 'Mediana';

$GLOBALS["lang"]['Medium'] = 'Mediana';

$GLOBALS["lang"]['members'] = 'Miembros';

$GLOBALS["lang"]['Members'] = 'Miembros';

$GLOBALS["lang"]['memory'] = 'Memoria';

$GLOBALS["lang"]['Memory'] = 'Memoria';

$GLOBALS["lang"]['memory_count'] = 'Cuenta de memoria';

$GLOBALS["lang"]['Memory Count'] = 'Cuenta de memoria';

$GLOBALS["lang"]['memory_slot_count'] = 'Conde de memoria';

$GLOBALS["lang"]['Memory Slot Count'] = 'Conde de memoria';

$GLOBALS["lang"]['menu_category'] = 'Menu Categoría';

$GLOBALS["lang"]['Menu Category'] = 'Menu Categoría';

$GLOBALS["lang"]['menu_display'] = 'Pantalla de menú';

$GLOBALS["lang"]['Menu Display'] = 'Pantalla de menú';

$GLOBALS["lang"]['message'] = 'Mensaje';

$GLOBALS["lang"]['Message'] = 'Mensaje';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['metric'] = 'métrica';

$GLOBALS["lang"]['Metric'] = 'métrica';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Metropolitan area network'] = 'Red de área metropolitana';

$GLOBALS["lang"]['Mexico'] = 'México';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes'] = 'Minutos';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutos Desde la última auditoría son más grandes que';

$GLOBALS["lang"]['model'] = 'Modelo';

$GLOBALS["lang"]['Model'] = 'Modelo';

$GLOBALS["lang"]['model_family'] = 'Modelo de familia';

$GLOBALS["lang"]['Model Family'] = 'Modelo de familia';

$GLOBALS["lang"]['Modified'] = 'Modificado';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modificar un script existente';

$GLOBALS["lang"]['module'] = 'Módulo';

$GLOBALS["lang"]['Module'] = 'Módulo';

$GLOBALS["lang"]['module_index'] = 'Índice';

$GLOBALS["lang"]['Module Index'] = 'Índice';

$GLOBALS["lang"]['Modules'] = 'Módulos';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Mónaco';

$GLOBALS["lang"]['Monday'] = 'Lunes';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Supervisar y medir el rendimiento de ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mes';

$GLOBALS["lang"]['Month'] = 'Mes';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Más información';

$GLOBALS["lang"]['More Secure'] = 'Más seguro';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'SQL más elaborado se puede utilizar para agrupar atributos dentro de un rango. A continuación se muestra el SQL para dispositivos no vistos en un gráfico de tarta agrupado por los rangos de fecha vistos por última vez.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Más información sobre depurar esto se puede encontrar en un útil hilo de flujo de Stack';

$GLOBALS["lang"]['Morocco'] = 'Marruecos';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Lo más probable es que el firewall de Windows (o un firewall de terceros) está negando el intento de conexión.<br/><br/>Por favor inicie sesión en la máquina de Windows objetivo y compruebe la configuración del firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'La mayoría de Open-AudIT está Licenciada con GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Madres';

$GLOBALS["lang"]['Motherboard'] = 'Madres';

$GLOBALS["lang"]['mount_point'] = 'Punto de montaje';

$GLOBALS["lang"]['Mount Point'] = 'Punto de montaje';

$GLOBALS["lang"]['mount_type'] = 'Tipo de montaje';

$GLOBALS["lang"]['Mount Type'] = 'Tipo de montaje';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Debe responder a Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. Si el dispositivo no responde, no habrá más escaneo.<br/>Anteriormente un dispositivo no tenía que responder a un ping para Open-AudIT para continuar escaneando.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Debe responder a Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mi AntiVirus me está incitando a negar o permitir cosas';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mi tiempo está en Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Client';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opciones de dispositivos NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Selección de dispositivos NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Nombre del campo';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Field Type';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Función';

$GLOBALS["lang"]['NOTE'] = 'NOTA';

$GLOBALS["lang"]['NOTE #2'] = 'NOTA 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTA - Para más información sobre los formatos DateTime, consulte';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NOTA - Si solicita un formato CSV descargado, XML o JSON (ya sea una única credencial, o la colección completa) se enviarán los detalles reales de la credencial. No la cadena cifrada, el nombre de usuario real, contraseña, cadena comunitaria, etc. Cualquier detalle sensible no se muestra en el GUI web, pero están disponibles a través de otros formatos. Para evitar esta exportación se encuentra disponible un elemento de configuración llamado decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOTA - Los corchetes en los datos presentados deben ser utilizados como-es (no reemplazados como por otros ejemplos anteriores).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - Puede evitar que las credenciales de texto simple se muestren a continuación estableciendo el elemento de configuración para <code>decrypt_credentials</code> a <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nombre';

$GLOBALS["lang"]['Name'] = 'Nombre';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nombre: El nombre que estás dando a este campo. Idealmente debería ser único.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Índice neto';

$GLOBALS["lang"]['Net Index'] = 'Índice neto';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antillas Neerlandesas';

$GLOBALS["lang"]['Netherlands the'] = 'Países Bajos';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Políticas de Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Puertos Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Los puertos Netstat utilizan una combinación de número de puerto, protocolo y programa. Si todos están presentes la política pasa.';

$GLOBALS["lang"]['Network'] = 'Red';

$GLOBALS["lang"]['network_address'] = 'Dirección de la red';

$GLOBALS["lang"]['Network Address'] = 'Dirección de la red';

$GLOBALS["lang"]['Network Discovery'] = 'Network Discovery';

$GLOBALS["lang"]['network_domain'] = 'Dominio de red';

$GLOBALS["lang"]['Network Domain'] = 'Dominio de red';

$GLOBALS["lang"]['Network Types'] = 'Tipos de red';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'El tipo de red se establece en la red de área local por defecto, pero puede ser cambiado por el usuario como se ve apropiado. Los tipos soportados están abajo (con gracias a Wikipedia).<br/><br/>Una red puede caracterizarse por su capacidad física o su propósito organizativo. El uso de la red, incluyendo la autorización del usuario y los derechos de acceso, difieren en consecuencia.';

$GLOBALS["lang"]['networks'] = 'Redes';

$GLOBALS["lang"]['Networks'] = 'Redes';

$GLOBALS["lang"]['Networks Generated By'] = 'Redes generadas por';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Las redes se actualizan con cada descubrimiento. Artículos como IPs Disponibles y IPs Usados, junto con Gateways, DHCP y DNS Servers se agregan como se encuentra.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Las redes responden de manera diferente dependiendo de cómo se configuran. Algunos routers y/o cortafuegos pueden responder <i>en nombre</i> de IPs en el otro lado de sus interfaces al Open-AudIT Server. Es muy común ver el informe de Nmap una sonda para SNMP (puerto deUDP 161) para responder como abierto para dispositivos que hacen y no existen. Esto es engañoso ya que no hay ningún dispositivo en esa IP, sin embargo termina con una entrada de dispositivo en la base de datos. 99.9% del tiempo, no es Open-AudIT, ni siquiera Nmap, sino la red que causa este problema. Ahora que tenemos las opciones para tratar los puertos abiertos o cerrados, podemos eliminar mucha de esta confusión. Los usuarios de las empresas incluso tienen la opción de cambiar esto en una base de descubrimiento (más que simplemente usando el elemento Medio (Clásico), como arriba).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Redes usando una máscara de CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Nombre del edificio';

$GLOBALS["lang"]['New Caledonia'] = 'Nueva Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nombre del nuevo piso';

$GLOBALS["lang"]['New Room Name'] = 'Nombre de la habitación';

$GLOBALS["lang"]['New Row Name'] = 'Nuevo nombre de fila';

$GLOBALS["lang"]['New Zealand'] = 'Nueva Zelandia';

$GLOBALS["lang"]['News'] = 'Noticias';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Noticias checks-in cada vez que inicia sesión para consultas actualizadas, recomendaciones de configuración, anuncios de lanzamiento, entradas de blog y más.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Las noticias son nuestra forma de mantenerte al día con las últimas correcciones, anuncios, actualizaciones de consultas, versiones de software y más.<br/><br/>Usted no necesita mantener en la parte superior del wiki o comprobar nuevos lanzamientos, podemos enviarlos a usted!';

$GLOBALS["lang"]['next_hop'] = 'Siguiente Hop';

$GLOBALS["lang"]['Next Hop'] = 'Siguiente Hop';

$GLOBALS["lang"]['next_run'] = 'Next Run';

$GLOBALS["lang"]['Next Run'] = 'Next Run';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Siguiente clic <i>Crear su propia aplicación</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Siguiente, haga clic en Aceptar, luego haga clic en el servicio Apache 2.4 y haga clic en Reiniciar. ¡Hecho!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'A continuación, haga clic en el servicio Apache2.4 y seleccione Propiedades, y luego haga clic en la pestaña Iniciar sesión.';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Níger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Respuestas de exploración del puerto de Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Puertos Nmap Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Puertos Nmap Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Puertos Nmap Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Puertos Nmap Udp';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap no puede determinar si el puerto está abierto porque el filtrado de paquetes impide que sus sondas lleguen al puerto. El filtrado podría ser de un dispositivo de firewall dedicado, reglas de router o software de firewall basado en host. Estos puertos frustran a los atacantes porque proporcionan tan poca información. A veces responden con mensajes de error de ICMP como el tipo 3 código 13 (destinación inalcanzable: comunicación administrativamente prohibida), pero los filtros que simplemente bajan son más comunes sin responder. Esto obliga a Nmap a volver a entrar varias veces sólo en caso de que la sonda fue bajada debido a la congestión de red en lugar de filtrar. Esto ralentiza el escaneo dramáticamente.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap coloca puertos en este estado cuando no puede determinar si un puerto está abierto o filtrado. Esto ocurre para los tipos de escaneo en los que los puertos abiertos no dan respuesta. La falta de respuesta también podría significar que un filtro de paquete dejó caer la sonda o cualquier respuesta que se produjo. Así que Nmap no sabe con seguridad si el puerto está abierto o está siendo filtrado. El protocolo UDP, IP, FIN, NULL y Xmas escaneos clasifican los puertos de esta manera.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Los detalles del tiempo de Nmap se encuentran en la parte inferior de esta página enlazada';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Client';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Client';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nombre de Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nombre de Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Papel Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Papel Nmis';

$GLOBALS["lang"]['No'] = 'No';

$GLOBALS["lang"]['No Devices Returned'] = 'No hay dispositivos devueltos';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'No Google Maps API Teclado presente, no podrás mostrar el mapa.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'No Licencia para Profesional o Empresa';

$GLOBALS["lang"]['No Results'] = 'No hay resultados';

$GLOBALS["lang"]['No data in License Key'] = 'No hay datos en clave de licencia';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'No se requiere actualización de bases de datos en este momento.';

$GLOBALS["lang"]['No devices are in the database.'] = 'No hay dispositivos en la base de datos.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Ninguno';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Islas Marianas del Norte';

$GLOBALS["lang"]['Norway'] = 'Noruega';

$GLOBALS["lang"]['Norwegian'] = 'Noruega';

$GLOBALS["lang"]['Not Applicable'] = 'No aplicable';

$GLOBALS["lang"]['Not Checked'] = 'No chequeado';

$GLOBALS["lang"]['Not Equals'] = 'No es igual';

$GLOBALS["lang"]['Not In'] = 'No';

$GLOBALS["lang"]['Not Like'] = 'No como';

$GLOBALS["lang"]['Not Set'] = 'No se establece';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'No cada ordenador será capaz de completar con éxito un punto de referencia. Hemos visto en algunos fallos en pruebas por razones ajenas a nuestro control. Los registros deben ayudarle a apuntar en la dirección correcta para estos elementos.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'No en la lista (comma seperated)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'No se usa normalmente. Si se establece, esto requiere que el dispositivo tenga un puerto abierto (como por Opciones de Escaneo) para ser considerado responder. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Útil si un router o cortafuegos entre el servidor Open-AudIT y el IP objetivo está respondiendo a los escaneos portuarios en nombre de IPs.';

$GLOBALS["lang"]['Note'] = 'Nota';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - La selección de un padre proporcionará automáticamente acceso a sus hijos (aunque no se mostrará aquí).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Tenga en cuenta que la licencia de 100 dispositivos Enterprise no incluye soporte.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Nota, es posible que necesite hacer el script ejecutable con';

$GLOBALS["lang"]['Notes'] = 'Notas';

$GLOBALS["lang"]['notes'] = 'Notas';

$GLOBALS["lang"]['Notice'] = 'Aviso';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Noviembre';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Ahora para el ID de suscripción, haga clic en todos los servicios, suscripciones y copiarlo.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Ahora tenemos que proporcionar el acceso de aplicación Azure Active Directory a su suscripción.<br/><br/>Haga clic en Grupos de recursos y luego en el grupo de recursos al que le gustaría que su aplicación Azure Active Directory tuviera acceso.<br/><br/>Haga clic en Añadir. El papel debe ser Distribuidor y luego buscar la aplicación (Open-AudIT). Luego haga clic en Guardar.<br/><br/>Ahora la aplicación tiene acceso a la suscripción, por lo que podemos hacer llamadas de API. Las llamadas de API serán solicitadas en nombre de la aplicación, no de su usuario.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Familias';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['OUTPUTS'] = 'RESULTADOS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Obtener el apoyo de gestión superior';

$GLOBALS["lang"]['October'] = 'Octubre';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'En Windows, Open-AudIT utiliza WMI como método primario de auditoría. Windows tiene una reputación notoria en lo que respecta a remoto WMI. Tiende a o <i>Sólo trabajo</i> o algún elemento misterioso sobre el objetivo requiere cambiar. Si usted está experimentando dificultad auditando PCs remotas de Windows, hemos creado un script llamado test_windows_client.vbs. Puedes ejecutar este script <strong>localmente</strong> en la máquina en cuestión, después de firmar como el usuario que es utilizado por Open-AudIT para realizar la auditoría. El guión hace <strong>sin cambios</strong> a los dispositivos objetivos. Comprueba la mayoría (no todos) de los elementos a continuación y genera etiquetas PASS, FAIL e INFO para varias propiedades. NOTA - Si su sistema de destino está siendo auditado correctamente, no debe cambiar ninguna configuración. Algunos de los siguientes no existen en Windows PCs que son capaces de ser auditados y algunos sí existen. Sólo cambia la configuración si tus descubrimientos en PCs particulares no funcionan como se desea.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'En la página Lista de tareas, haga clic en <i>Añadir nuevo</i> botón para configurar una tarea.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Sobre el terreno <i>Cierre de partido</i> debe proporcionar el nombre del software que desea rastrear. Puede utilizar el signo por ciento (%) como un comodín en donde sea necesario.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'En la siguiente página podrá seleccionar Access Keys y ver su clave o crear una nueva clave.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'En el PC de Windows objetivo, ejecutar la utilidad DCOM y verificar (o establecer) los atributos siguientes. Inicio - titulado Corre, entra DCOMCNFG y presiona bien. Esto abrirá la ventana DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'En la parte superior derecha (bajo la barra de menú) verá varios botones. Estos le permiten seleccionar otro dashboard, establecer el dashboard actual como su página de inicio (si no es ya) y editar el dashboard actual (si tiene permiso).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'En-Premise, no Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Una vez que se ha creado un campo adicional se puede utilizar en consultas y grupos como cualquier otro atributo en la base de datos.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Una vez comentado, su certificado será validado, pero también puede fallar esta validación si está utilizando certificados auto-firmados y no ha configurado su servidor correctamente.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Una vez que el script se ha ejecutado con un objetivo, si el script se elimina.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Una vez que las consultas iniciales (snmp, ssh, wmi) estén completas, si el dispositivo es compatible con los scripts de auditoría (Windows, Linux, OSX, AIX, HP-UX, Solaris y ESXi), el script de auditoría correcto será copiado al objetivo y ejecutado. El script de auditoría se eliminará al terminarlo. El resultado se almacenará en la máquina de destino como archivo XML. El servidor Open-AudIT recuperará el archivo de resultado para procesar y eliminar el archivo de resultado en el objetivo. La ubicación del script de auditoría se copia en el dispositivo de destino (al menos para las auditorías de SSH) es configurable editando el elemento config de Discover_linux_script_directory. Por defecto se establece en /tmp/. Esto puede necesitar cambiar si /tmp tiene noexec conjunto. El archivo resultado se procesa y los detalles del dispositivo se actualizan dentro de Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Una vez que haga clic en el botón ejecutar, Open-AudIT desove un proceso para iniciar el descubrimiento y devolver al usuario a la página de detalles del descubrimiento. El proceso recién desgastado toma las opciones de descubrimiento configuradas y ejecuta comandos Nmap para determinar la lista inicial de direcciones IP a ser escaneado (o consultas Active Directory si ese tipo se utiliza). Cada IP a ser escaneado se coloca en una cola. Una vez que el proceso inicial haya finalizado (y hay IPs para ser escaneado en la cola) se despacharán varios procesos para seguir escaneando cada IP en paralelo. Este número de procesos es configurable en la configuración, editar el atributo <i>queue_limit</i>. Por defecto esto se establece a 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Una vez que haya elegido sus dispositivos para editar, haga clic en el botón del lápiz en la parte superior derecha de la tabla.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Una vez que haya hecho esto, Open-AudIT intentará verificar los detalles de su logotipo de usuario contra el método Auth configurado. Si el usuario tiene credenciales válidas y <code>use_authorisation</code> se establece, Open-AudIT pedirá la lista de grupos a los que pertenece el usuario. Si el usuario está en los grupos correspondientes para funciones y orgs de Open-AudIT, esos roles y orgs serán aplicados a ese usuario.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Una vez que haya generado una definición de Baseline puede programar que se ejecute contra un grupo específico de dispositivos.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Una vez que tengas esos artículos, en Open-AudIT Enterprise se puede ir al menú - título Discover - Clouds - titulado Crear Nubes, seleccione las <i>Amazon AWS</i> escribir y pegarlos. Hecho.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Una vez que tengas esos artículos, en Open-AudIT Enterprise se puede ir al menú - título Discover - Clouds - titulado Crear Nubes, seleccione las <i>Microsoft Azure</i> escribir y pegarlos. Hecho.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Una vez que usted tiene sus credenciales de la nube, es simplemente una cuestión de crear una nueva nube y ejecutar el descubrimiento - o programar descubrimientos de primera / futuro. Asegúrese de que también tiene las credenciales necesarias para conectarse a sus máquinas de nube, y todo está hecho para usted como un descubrimiento regular. Credenciales para su nube';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Uno de los <code>3x2</code>, <code>4x2</code>, <code>4x3</code> o <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Una de las redes de área de Campus, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Uno de Desarrollo, Recuperación de Desastres, Evaluación, Preproducción, Producción, Pruebas, Capacitación, Pruebas de Aceptación de Usuario';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Uno de los asignados, delegados, planificación, reservados, no asignados, desconocidos, no gestionados. Defaults to allocated.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Uno de los dos <code>active directory</code> o <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Uno de: antivirus, backup, firewall, aprobado, prohibido, ignorado u otro.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Otro elemento a tener cuidado - asegúrese de utilizar el nombre de host (o fqdn) de su LDAP Servidor que coincida con lo que está en el certificado (no sólo la dirección IP de LDAP Servers) al crear la entrada LDAP en Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentación en línea';

$GLOBALS["lang"]['Open'] = 'Abierto';

$GLOBALS["lang"]['Open Data'] = 'Datos abiertos';

$GLOBALS["lang"]['Open Source'] = 'Fuente abierta';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT El código fuente comunitario está disponible en GitHub. Se le anima a inspeccionar cualquier código que usted tiene preocupaciones, y porque es de código abierto - también se le anima a preguntarnos acerca de cualquier problema que usted tiene o reportar cualquier hallazgo. Siempre estamos más que contentos de aceptar contribuciones de código, informes de vulnerabilidad o incluso preguntas simples. Estamos aquí para ayudar.<br/><br/>Los propios scripts de auditoría (Windows, Linux, MacOS, et al) están escritos deliberadamente en script de shell nativo legible (VBScript para Windows, Bash para *nix). Puedes ver exactamente qué comandos se ejecutan. Puede eliminar cualquier comando que sienta que no necesita. Puede pedirle a un tercero que inspeccione el código para usted y (si quiere) reporte cualquier hallazgo.<br/><br/>Open-AudIT Enterprise desempeña las funciones comerciales adicionales para Open-AudIT Community. Se incluye como un único archivo compilado sin dependencias externas. Donde Enterprise en sí realiza las funciones, si usted está preocupado con cualquier problema Firstwave está feliz de trabajar a través de ellos con usted - sólo preguntar! Prueba eso con otro proveedor de software comercial!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selección de dispositivos Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise tiene la capacidad de elegir entre una lista predefinida de opciones de exploración de descubrimientos y también para personalizar las opciones individuales por descubrimiento.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Solución flexible de descubrimiento y auditoría a gran escala para grandes redes. Todas las características de Professional plus: Baselines, Auditoría de Archivos, Cloud Discovery, Gestión de Rack, Control de acceso basado en roles configurable incluyendo Active Directory y LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nombre del campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licencias Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opciones de Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional and Enterprise incluyen las funciones de presentación de informes mejoradas, incluidas las funciones de presentación de informes basadas en el tiempo, la historia y la matriz en múltiples formatos.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT El profesional tiene la capacidad de elegir de una lista predefinida de opciones de exploración del descubrimiento, por descubrimiento.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Profesional de Open-AudIT. El mundo';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud Puede configurarse para utilizar servidores LDAP (Microsoft Active Directory y/o OpenLDAP) para autenticar y autorizar a un usuario y, además, crear una cuenta de usuario en Open-AudIT utilizando roles y orgs asignados basados en la membresía del grupo LDAP. También puede utilizar';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud Puede ejecutarse en su servidor en su centro de datos. No necesita acceso a Internet en absoluto. Incluso la instalación en Linux donde usamos el administrador de paquetes de distribución para nuestros requisitos puede ser negada por usted usando un repositorio de paquetes aprobado por el equipo de seguridad y la casa.<br/><br/>Open-Aud No almacena ninguno de sus datos en la nube. Incluso se puede proporcionar información de licencia sin tener que acceder a Internet desde el servidor Open-AudIT.<br/><br/>Claro, es más fácil permitirle acceder a Internet para descargar paquetes (incluyendo correcciones de seguridad) para su distribución, pero eso depende de usted y sus políticas de seguridad. Open-AudIT no necesita Internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT puede descargar, analizar y utilizar los informes de vulnerabilidad NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud Puede aparecer en uno de varios idiomas. ¿Cómo puedes mejorar esto?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud Puede almacenar información en campos adicionales asociados a cada dispositivo.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT puede utilizar Microsoft Entra (previamente conocido como Microsoft Azure Active Directory) como un método de autenticación. Esto significa que su usuario en Open-AudIT puede hacer clic en el Logon usando el botón Entrar en la página del logotipo y utilizar sus credenciales de entrada para logotipo. Ese usuario tendrá que existir ya dentro de Open-AudIT (y ser asignado';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT puede utilizar OKTA como método de autenticación. Esto significa que su usuario en Open-AudIT puede hacer clic en el Logon usando el botón OKTA en la página del logotipo y utilizar sus credenciales de OKTA para iniciar sesión. Ese usuario tendrá que existir ya dentro de Open-AudIT (y ser asignado Roles y Orgs), pero no tendrá que recordar un conjunto separado de credenciales de logotipo.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT viene con muchas consultas incorporadas. Si usted requiere una consulta específica y ninguna de las consultas pre-empaquetadas se ajustan a sus necesidades, es bastante fácil crear una nueva y cargarla en Open-AudIT para correr.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT tiene una API respetuosa JSON para ser utilizado tanto en la interfaz web como a través de solicitudes JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud Tiene un sistema de permisos granulares para determinar qué puede hacer un usuario dentro de Open-AudIT, y los elementos que puede hacerlo. Open-AudIT puede ser completamente auto-contenido, o utilizar Active Directory o OpenLDAP para la autenticación y/o autorización.<br/><br/>Depende totalmente del administrador de Open-AudIT cómo les gustaría el Control de Acceso Basado en Papel para trabajar.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud Tiene un potente motor de detección de cambios. Cualquier atributo del dispositivo que se añada, se elimina o cambia será detectado y almacenado. Estos cambios pueden ser reportados y los datos pertinentes confirmados sobre lo que se esperaba de su proceso de cambio y liberación de la empresa.<br/><br/>Cuando se audita un dispositivo, los atributos se dividen en secciones que corresponden a tablas en la base de datos.<br/><br/>Cada dispositivo (computer, router, impresora, et al) tiene una entrada en el <code>devices</code> mesa. Cada entrada en la tabla de dispositivos tiene una <code>id</code> columna. Este valor es único - es un id autoincrementante.<br/><br/>Cuando se procesa el resultado de la auditoría, cada elemento de cada sección tiene su resultado de auditoría en comparación con lo que hay en la base de datos.<br/><br/>Para cada sección, si las columnas clave (ver tabla abajo) contienen los valores idénticos, se considera ya instalado y tiene sus <code>last_seen</code> atributo actualizado. No se crea entrada change_log.<br/><br/>Si alguna de las columnas clave no coincide, se considera un nuevo atributo y se inserta. A <code>change_log</code> la entrada se crea si el dispositivo tenía otros atributos ya presentes en la tabla.<br/><br/>Al finalizar el proceso de auditoría, se considera que no hay elementos de base de datos que no hayan sido actualizados (o insertados). El <code>current</code> atributo para este artículo se establece <i>n</i> y se genera una entrada de change_log.<br/><br/>Por lo tanto, podemos determinar si algo está instalado actualmente - la columna actual es <i>Sí.</i>.<br/><br/>Podemos determinar cuándo se detectó algo inicialmente - el <i>first_seen</i>.<br/><br/>Podemos determinar si algo fue instalado después de la auditoría inicial - primero visto será diferente en las tablas de componentes y dispositivos.<br/><br/>Podemos determinar si algo no está instalado actualmente, pero previamente fue - actual = <i>n</i>.<br/><br/>Podemos determinar la última vez que detectamos un artículo - último visto.<br/><br/>En cualquier momento dado, podemos determinar qué había en un sistema - utilizando la tabla audit_log y seleccionando los componentes pertinentes basados en first_seen y last_seen.<br/><br/>Cada sección y sus columnas clave coincidentes están abajo.<br/><br/>NOTA - Hay algunas excepciones como se detalla a continuación.<br/><br/>*1 - Para las tarjetas de red, si el ordenador es una máquina VMware Esx también utiliza la net_index y las columnas de conexión.<br/><br/>*2 - Para las particiones, f el ordenador es una máquina AIX, usamos el nombre de la partición.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT es un programa diseñado para rastrear e informar sobre sus datos de TI y activos relacionados y configuración. Open-AudIT puede decir <i>¿Qué hay en tu red?</i>, cómo se configura y si ha habido algún cambio. Open-AudIT ofrece una plataforma elegante, flexible y fácil de usar para el descubrimiento de dispositivos, auditoría de TI y automatización de gestión de inventarios directamente fuera de la caja.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud Esto hace fácil editar los atributos de múltiples dispositivos a la vez.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT necesita permisos de directorio específicos para poder crear archivos, subir resultados, etc. Por favor, ponte como abajo.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT ofrece muchas consultas incorporadas y hace que sea simple crear su propio.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Naves IT con funciones incorporadas para administración, org_admin y usuario.<br/><br/>En general, un usuario que sea administrador de la aplicación Open-AudIT debe tener funciones de administrador y de org_admin posibles.<br/><br/>Un usuario puede tener múltiples roles. El permiso se aplicará en el nivel más permisivo - IE, si un usuario tiene los roles de usuario y org_admin, podrán crear ubicaciones porque org_admin otorga este permiso, aunque el rol del usuario no lo haga.<br/><br/>El papel de administrador permite el acceso a colecciones como configuración, base de datos, grupos, servidores ldap, registros, consultas y roles. Temas globales que afectan toda la aplicación.<br/><br/>El papel org_admin generalmente permite crear, leer, actualizar y eliminar acciones para cualquier colección que contenga la columna org_id. Prácticamente todos los datos excepto algunas de las colecciones mencionadas anteriormente contendrán un <code>org_id</code> columna.<br/><br/>El papel de usuario generalmente permite leer sólo el acceso a todos los elementos con una columna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud Naves IT con funciones incorporadas para administración, org_admin y usuario.<br/><br/>En general, un usuario que sea administrador de la aplicación Open-AudIT debe tener funciones de administrador y de org_admin posibles.<br/><br/>Un usuario puede tener múltiples roles. El permiso se aplicará en el nivel más permisivo - IE, si un usuario tiene los roles de usuario y org_admin, podrán crear ubicaciones porque org_admin otorga este permiso, aunque el rol del usuario no lo haga.<br/><br/>El papel de administrador permite el acceso a colecciones como configuración, base de datos, grupos, servidores ldap, registros, consultas y roles. Temas globales que afectan toda la aplicación.<br/><br/>El papel org_admin generalmente permite crear, leer, actualizar y eliminar acciones para cualquier colección que contenga la columna org_id. Prácticamente todos los datos excepto algunas de las colecciones mencionadas anteriormente contendrán una columna org_id.<br/><br/>El papel de usuario generalmente permite leer sólo el acceso a todos los elementos con una columna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Naves Open-AudIT con varios paneles preconfigurados. Si usted es un usuario profesional, puede seleccionar entre dos de estos y configurarlo como su página predeterminada cuando se logon. Si usted es un usuario de Enterprise, no sólo puede seleccionar entre los cinco paneles preconfigurados, pero también tiene la capacidad de crear su propio.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT debe instalarse en Windows 64bit <strong>Servidor</strong> sistemas sólo. Windows 10 y Windows 11 son <strong>no</strong> apoyado.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT utiliza Nmap en su función Discovery. Sondas Nmap dispositivos para puertos abiertos. Los dispositivos deben responder con apertura para los puertos de trabajo. Los dispositivos a menudo no responden con esto. A continuación se detallan las diferentes respuestas.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT utiliza Nmap en su función Discovery. Sin Nmap, Open-AudIT no funcionará correctamente. Cada instalación Open-AudIT supone que Nmap está instalado y también lo probará en las páginas web Discovery. Más información sobre Open-AudIT y Nmap está disponible aquí';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT utiliza Nmap en su función Discovery. Sin Nmap, Open-AudIT no funcionará correctamente. Cada instalación Open-AudIT supone que Nmap está instalado y lo probará en las páginas web Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud IT utiliza credenciales para acceder a sus dispositivos. Estos están encriptados y almacenados, como usted esperaría.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT fue escrito por un australiano de habla inglesa. Todo en la aplicación utiliza el texto inglés. Sin embargo Open-AudIT siempre ha apoyado varios idiomas para su visualización. Estas traducciones no siempre son correctas, porque los desarrolladores no hablan nativamente el idioma de cada traducción ofrecida.<br/><br/>¿Qué puedes hacer si algo no es correcto en la traducción?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap está instalado';

$GLOBALS["lang"]['Opening a Support Ticket?'] = '¿Abrir un billete de soporte?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Usuario Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Usuario Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Composición de usuarios de Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Composición de usuarios de Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Abiertas vidas llenas';

$GLOBALS["lang"]['Open|filtered'] = 'Abiertas vidas llenas';

$GLOBALS["lang"]['Operating System'] = 'Sistema operativo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Sistema Operativo Familia Contiene';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemas operativos';

$GLOBALS["lang"]['Operators'] = 'Operadores';

$GLOBALS["lang"]['optical'] = 'Óptico';

$GLOBALS["lang"]['Optical'] = 'Óptico';

$GLOBALS["lang"]['Optimized'] = 'Optimizado';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opción #1 - Cambiar los datos';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opción #2 - Cambiar el archivo de traducción';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Auditorías basadas en agentes opcionales';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versión opcional auditada por Open-AudIT. Use el porcentaje de signo % como un comodín.';

$GLOBALS["lang"]['options'] = 'Opciones';

$GLOBALS["lang"]['Options'] = 'Opciones';

$GLOBALS["lang"]['Options, options, options'] = 'Opciones, opciones, opciones';

$GLOBALS["lang"]['Or'] = 'O';

$GLOBALS["lang"]['Or select from the below fields.'] = 'O seleccione de los siguientes campos.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID de org';

$GLOBALS["lang"]['Org ID'] = 'ID de org';

$GLOBALS["lang"]['Organisation'] = 'Organización';

$GLOBALS["lang"]['organisation'] = 'Organización';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organizaciones';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Las organizaciones pueden ampliar y mejorar el nivel de detalle que se almacena en cada dispositivo descubierto utilizando campos personalizados y el núcleo abierto permite una fácil integración en los sistemas CMDB, gestión de eventos y ticketing.';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Nombre de los orgs';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Los orgs en Open-AudIT son un elemento clave. Un usuario tiene una Org primaria, así como una lista de Orgs que pueden acceder. Un usuario combina esto con una lista de roles asignados que definen a qué acciones pueden tomar sobre los elementos asignados a los Orgs a los que tienen acceso. La combinación de un usuario <i>orgs</i> y <i>Funciones</i> definir lo que pueden y no pueden hacer dentro de Open-AudIT.<br/><br/>La mayoría de los artículos en Open-AudIT se asignan a un Org. Dispositivos, Lugares, Redes, etc, etc.<br/><br/>Las orgs pueden tener orgs infantiles. Piense en una estructura organigrama (árbol). Si un usuario tiene acceso a una Org específica, la mayor parte del tiempo (no siempre) también tienen acceso a esa descendencia de Orgs.';

$GLOBALS["lang"]['orientation'] = 'Orientación';

$GLOBALS["lang"]['Orientation'] = 'Orientación';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Versión de visualización de Os';

$GLOBALS["lang"]['Os Display Version'] = 'Versión de visualización de Os';

$GLOBALS["lang"]['os_family'] = 'Os Family';

$GLOBALS["lang"]['Os Family'] = 'Os Family';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Fecha de instalación de Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Fecha de instalación de Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Licencia de Os';

$GLOBALS["lang"]['Os License'] = 'Licencia de Os';

$GLOBALS["lang"]['os_license_code'] = 'Código de licencia de Os';

$GLOBALS["lang"]['Os License Code'] = 'Código de licencia de Os';

$GLOBALS["lang"]['os_license_mode'] = 'Modo de licencia de Os';

$GLOBALS["lang"]['Os License Mode'] = 'Modo de licencia de Os';

$GLOBALS["lang"]['os_license_type'] = 'Tipo de licencia de Os';

$GLOBALS["lang"]['Os License Type'] = 'Tipo de licencia de Os';

$GLOBALS["lang"]['os_name'] = 'Nombre de Os';

$GLOBALS["lang"]['Os Name'] = 'Nombre de Os';

$GLOBALS["lang"]['os_version'] = 'Versión de Os';

$GLOBALS["lang"]['Os Version'] = 'Versión de Os';

$GLOBALS["lang"]['Other'] = 'Otros';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Aparte de esa restricción, usted es libre de seleccionar atributos según sea necesario. Es una buena idea usar el menú';

$GLOBALS["lang"]['Others'] = 'Otros';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Nuestra integración predeterminada también permite un descubrimiento en cualquier dispositivo suministrado externamente. Así que enviamos un descubrimiento predeterminado para la integración predeterminada fuera de la caja. Estos utilizan las reglas de juego predeterminadas, pero también permiten coincidir en la dirección IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Nuestros ejemplos utilizarán <i>Tipo</i> columna.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Nuestro marco carga los archivos aquí para procesarlos, luego los elimina. Piensa en los resultados de auditoría presentados, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Nuestro objetivo con la versión inicial de integraciones fue específicamente para NMIS a la integración Open-AudIT a <i>Sólo trabajo</i>. Si está usando los programas en Linux, puede hacer clic literalmente en un solo botón para ejecutar la integración. Nada más es necesario. Dicho esto, la integración en sí misma es extremadamente configurable - por lo que si algo no es a su preferencia, se puede cambiar fácilmente.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Nuestra nueva característica llamada Vulnerabilidades le da la capacidad de determinar rápidamente si cualquier dispositivo está afectado por cualquier CVE (Exposición de vulnerabilidad común) - pero ¿cómo?<br/><br/>FirstWave consume constantemente la salida de la alimentación Nist NVD. Tomamos esto y aplicamos algunas restricciones, luego extraemos los programas afectados y construimos una consulta SQL para informar. Su instancia Open-AudIT llega a FirstWave y solicita cualquier nueva vulnerabilidad de forma regular. Cuando recibe un nuevo registro de vulnerabilidad, se ejecuta contra la base de datos y el resultado almacenado. Cada vez que se procesa un dispositivo, todas las vulnerabilidades coincidentes se ejecutan de nuevo y el resultado se almacena. Esto significa que al ver una lista de vulnerabilidad, no necesitamos calcular todos los dispositivos afectados - ya tenemos el resultado. Cuando usted ve un registro de vulnerabilidad individual, realmente recalculamos el resultado de esta singular vulnerabilidad.<br/><br/>¡Así que siempre estás al día!<br/><br/>Además de esto, también calculamos el resultado de todas las vulnerabilidades para todos los dispositivos diariamente (generalmente en un tiempo tranquilo, decir 2am).<br/><br/>En su caso de Open-AudIT, le permitimos seleccionar qué proveedores le importan. i.e. no hay uso de recuperar registros de vulnerabilidad de un proveedor cuyo software no utiliza o ha instalado. Por defecto, nuestra lista de proveedores es Adobe, Apple, Cisco, Google, Microsoft, Mozilla y Redhat.<br/><br/>Todo esto suena muy sencillo, pero detrás de las escenas un <b>mucho</b> está pasando. Por ejemplo, el registro CVE contiene una lista de software afectado - pero esos nombres de software no coinciden con lo que recibimos cuando auditamos un ordenador. Un buen ejemplo es Apache. Típicamente, un registro CVE dirá que el software afectado es http_server. En realidad, esto aparece como apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - y otros. Por lo tanto, tenemos que determinar primero cuál es el nombre real del programa que recibimos cuando pedimos un ordenador, y puede haber varios nombres. Después de eso debemos analizar el registro CVE y crear una declaración SQL coincidente. Permitir varios nombres de programas como arriba, y múltiples versiones, rangos de versiones, e incluso múltiples piezas diferentes de software (un ejemplo es Thunderbird y Firefox en un solo CVE). Y su instancia de Open-AudIT debe tomar esto y aplicar Orgs filtrando también. Y eso es sólo un solo CVE. ¿Qué hay de determinar qué CVEs usted tiene y no tiene? ¿Qué tal añadir un vendedor a la lista más tarde? ¡Muchas cosas a considerar!<br/><br/>Además de los informes habituales, también tenemos algunos widgets nuevos disponibles para Dashboards, basados en datos de vulnerabilidades.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nuestro tiempo para una respuesta SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nuestro tiempo para una respuesta de WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nuestro tiempo para una respuesta SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nuestro tiempo para una respuesta del script de auditoría';

$GLOBALS["lang"]['output'] = 'Producto';

$GLOBALS["lang"]['Output'] = 'Producto';

$GLOBALS["lang"]['outputs'] = 'Productos';

$GLOBALS["lang"]['Outputs'] = 'Productos';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'La puntuación general de gravedad (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Sobreescritura';

$GLOBALS["lang"]['Overwrite'] = 'Sobreescritura';

$GLOBALS["lang"]['owner'] = 'Propietario';

$GLOBALS["lang"]['Owner'] = 'Propietario';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec es un programa de PsExec de libre distribución de SysInternal/Microsofts popular. PAExec pretende ser una gota de reemplazo para PsExec, por lo que el uso de línea de comandos es idéntico, con opciones adicionales también soportadas. Este trabajo fue inspirado originalmente por Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Datos sobre los costos';

$GLOBALS["lang"]['Package'] = 'Paquete';

$GLOBALS["lang"]['packages'] = 'Paquetes';

$GLOBALS["lang"]['Packages'] = 'Paquetes';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Los paquetes se utilizan para informar sobre cosas como <i>software prohibido</i>, AntiVirus en servidores, etc.<br/><br/>Open-AudIT proporciona widgets que se basan en también repots suministrados para deteminar el estado de antivirus, firewall y otro software.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territorio Palestino';

$GLOBALS["lang"]['Panama'] = 'Panamá';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nueva Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parámetros';

$GLOBALS["lang"]['Paranoid'] = 'Paranoico';

$GLOBALS["lang"]['Parent'] = 'Parent';

$GLOBALS["lang"]['parent_id'] = 'ID de permiso';

$GLOBALS["lang"]['Parent ID'] = 'ID de permiso';

$GLOBALS["lang"]['parent_name'] = 'Nombre del pariente';

$GLOBALS["lang"]['Parent Name'] = 'Nombre del pariente';

$GLOBALS["lang"]['part_number'] = 'Número de la parte';

$GLOBALS["lang"]['Part Number'] = 'Número de la parte';

$GLOBALS["lang"]['part_of_domain'] = 'Parte del dominio';

$GLOBALS["lang"]['Part Of Domain'] = 'Parte del dominio';

$GLOBALS["lang"]['Partition'] = 'Partición';

$GLOBALS["lang"]['partition_count'] = 'Partition Count';

$GLOBALS["lang"]['Partition Count'] = 'Partition Count';

$GLOBALS["lang"]['partition_disk_index'] = 'Índice de disco de partición';

$GLOBALS["lang"]['Partition Disk Index'] = 'Índice de disco de partición';

$GLOBALS["lang"]['Pass'] = 'Paso';

$GLOBALS["lang"]['Passed'] = 'Pasado';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Red de Área Local Óptica Pasiva';

$GLOBALS["lang"]['Password'] = 'Contraseña';

$GLOBALS["lang"]['password'] = 'Contraseña';

$GLOBALS["lang"]['password_changeable'] = 'Password Changeable';

$GLOBALS["lang"]['Password Changeable'] = 'Password Changeable';

$GLOBALS["lang"]['password_disabled'] = 'Contraseña para discapacitados';

$GLOBALS["lang"]['Password Disabled'] = 'Contraseña para discapacitados';

$GLOBALS["lang"]['password_expires'] = 'Password Expires';

$GLOBALS["lang"]['Password Expires'] = 'Password Expires';

$GLOBALS["lang"]['password_last_changed'] = 'Password Last Changed';

$GLOBALS["lang"]['Password Last Changed'] = 'Password Last Changed';

$GLOBALS["lang"]['password_required'] = 'Contraseña requerida';

$GLOBALS["lang"]['Password Required'] = 'Contraseña requerida';

$GLOBALS["lang"]['patch_panel'] = 'Panel de parche';

$GLOBALS["lang"]['Patch Panel'] = 'Panel de parche';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Camino';

$GLOBALS["lang"]['Path'] = 'Camino';

$GLOBALS["lang"]['Performance'] = 'Ejecución';

$GLOBALS["lang"]['Performed'] = 'Performed';

$GLOBALS["lang"]['Permission'] = 'Permiso';

$GLOBALS["lang"]['Permission Required'] = 'Permiso requerido';

$GLOBALS["lang"]['permissions'] = 'Permisos';

$GLOBALS["lang"]['Permissions'] = 'Permisos';

$GLOBALS["lang"]['Persian'] = 'Persa';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

$GLOBALS["lang"]['Personal area network'] = 'Red de área personal';

$GLOBALS["lang"]['Peru'] = 'Perú';

$GLOBALS["lang"]['Philippines'] = 'Philippines';

$GLOBALS["lang"]['phone'] = 'Teléfono';

$GLOBALS["lang"]['Phone'] = 'Teléfono';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU física';

$GLOBALS["lang"]['physical_count'] = 'Cuenta Física';

$GLOBALS["lang"]['Physical Count'] = 'Cuenta Física';

$GLOBALS["lang"]['physical_depth'] = 'Profundidad física';

$GLOBALS["lang"]['Physical Depth'] = 'Profundidad física';

$GLOBALS["lang"]['physical_height'] = 'Altura física';

$GLOBALS["lang"]['Physical Height'] = 'Altura física';

$GLOBALS["lang"]['physical_width'] = 'Ancho físico';

$GLOBALS["lang"]['Physical Width'] = 'Ancho físico';

$GLOBALS["lang"]['picture'] = 'Imagen';

$GLOBALS["lang"]['Picture'] = 'Imagen';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Los gráficos deben devolver el nombre o mi_nombre, descripción o mi_descripción y contar.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Objetivo';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Islas Pitcairn';

$GLOBALS["lang"]['placement'] = 'Colocación';

$GLOBALS["lang"]['Placement'] = 'Colocación';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planificar y realizar auditorías internas';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Por favor, tenga un logotipo de administrador Open-AudIT y actualice la base de datos.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Por favor inicie sesión y cambie estos ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Inicie sesión en el Open-AudIT Server (ya sea Windows o Linux) y ejecute <code>nslookup IP_ADDRESS_OF_TARGET</code> en el comando prompt o shell. Debe ser capaz de resolver la IP a un nombre.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Tenga en cuenta que el cuadro selecto anulará el cuadro de entrada de texto.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Por favor, vea el FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Por favor envíe los tres archivos a su contacto de soporte en Opmantek y describa su problema.';

$GLOBALS["lang"]['Please set using'] = 'Por favor, configure el uso';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Por favor visite la página principal';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polonia';

$GLOBALS["lang"]['Policies'] = 'Políticas';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Las políticas tienen excepciones.';

$GLOBALS["lang"]['policy'] = 'Política';

$GLOBALS["lang"]['Policy'] = 'Política';

$GLOBALS["lang"]['policy_id'] = 'Policy ID';

$GLOBALS["lang"]['Policy ID'] = 'Policy ID';

$GLOBALS["lang"]['Policy Result'] = 'Resultado normativo';

$GLOBALS["lang"]['Policy Results'] = 'Resultados de la política';

$GLOBALS["lang"]['Polish'] = 'Polaco';

$GLOBALS["lang"]['Polite'] = 'Polités';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populate the with values provided below:';

$GLOBALS["lang"]['Populated by audit.'] = 'Populado por auditoría.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populado por descubrimiento y auditoría.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populado dinámicamente.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populado de DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populado del descubrimiento de SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Populado de auditorías de dispositivos.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populado del nombre de anfitrión.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populado de la máquina-id en Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populado de la IP para la ruta predeterminada o la IP detectada en el descubrimiento.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populado del comando hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populado con datos adicionales del sistema externo, en una representación JSON.';

$GLOBALS["lang"]['port'] = 'Puerto';

$GLOBALS["lang"]['Port'] = 'Puerto';

$GLOBALS["lang"]['port_name'] = 'Nombre del puerto';

$GLOBALS["lang"]['Port Name'] = 'Nombre del puerto';

$GLOBALS["lang"]['port_number'] = 'Número de puerto';

$GLOBALS["lang"]['Port Number'] = 'Número de puerto';

$GLOBALS["lang"]['ports_in_order'] = 'Puertos en orden';

$GLOBALS["lang"]['Ports In Order'] = 'Puertos en orden';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop After';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop After';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, República Portuguesa';

$GLOBALS["lang"]['Portuguese'] = 'portugués';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugués (Brasil)';

$GLOBALS["lang"]['position'] = 'Posición';

$GLOBALS["lang"]['Position'] = 'Posición';

$GLOBALS["lang"]['Post-Certification'] = 'Post-Certification';

$GLOBALS["lang"]['postcode'] = 'Código postal';

$GLOBALS["lang"]['Postcode'] = 'Código postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuito de potencia';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito de potencia';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Predictable';

$GLOBALS["lang"]['Preferences'] = 'Preferencias';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Prepárense para la recertificación cada 3 años';

$GLOBALS["lang"]['Prerequisites'] = 'Prerrequisitos';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Prerrequisitos y Pruebas';

$GLOBALS["lang"]['present'] = 'Presente';

$GLOBALS["lang"]['Present'] = 'Presente';

$GLOBALS["lang"]['previous_value'] = 'Valor anterior';

$GLOBALS["lang"]['Previous Value'] = 'Valor anterior';

$GLOBALS["lang"]['primary'] = 'Primaria';

$GLOBALS["lang"]['Primary'] = 'Primaria';

$GLOBALS["lang"]['Primary Key'] = 'Clave primaria';

$GLOBALS["lang"]['print_queue'] = 'Carga de impresión';

$GLOBALS["lang"]['Print Queue'] = 'Carga de impresión';

$GLOBALS["lang"]['printer_color'] = 'Color de impresión';

$GLOBALS["lang"]['Printer Color'] = 'Color de impresión';

$GLOBALS["lang"]['printer_duplex'] = 'Impresora Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Impresora Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nombre del puerto de impresión';

$GLOBALS["lang"]['Printer Port Name'] = 'Nombre del puerto de impresión';

$GLOBALS["lang"]['printer_shared'] = 'Impresora compartida';

$GLOBALS["lang"]['Printer Shared'] = 'Impresora compartida';

$GLOBALS["lang"]['printer_shared_name'] = 'Impresión Nombre compartido';

$GLOBALS["lang"]['Printer Shared Name'] = 'Impresión Nombre compartido';

$GLOBALS["lang"]['priority'] = 'Prioridad';

$GLOBALS["lang"]['Priority'] = 'Prioridad';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacidad';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protocolo de privacidad';

$GLOBALS["lang"]['privileges_required'] = 'Prerrogativas requeridas';

$GLOBALS["lang"]['Privileges Required'] = 'Prerrogativas requeridas';

$GLOBALS["lang"]['processor'] = 'Procesador';

$GLOBALS["lang"]['Processor'] = 'Procesador';

$GLOBALS["lang"]['processor_count'] = 'Cuenta del procesador';

$GLOBALS["lang"]['Processor Count'] = 'Cuenta del procesador';

$GLOBALS["lang"]['processor_slot_count'] = 'Conde de Ranura Procesador';

$GLOBALS["lang"]['Processor Slot Count'] = 'Conde de Ranura Procesador';

$GLOBALS["lang"]['processor_type'] = 'Tipo de procesador';

$GLOBALS["lang"]['Processor Type'] = 'Tipo de procesador';

$GLOBALS["lang"]['Processors'] = 'Procesadores';

$GLOBALS["lang"]['product_name'] = 'Nombre del producto';

$GLOBALS["lang"]['Product Name'] = 'Nombre del producto';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nombre del producto Partido del CPE: ';

$GLOBALS["lang"]['products'] = 'Productos';

$GLOBALS["lang"]['Products'] = 'Productos';

$GLOBALS["lang"]['Professional'] = 'Cuadro orgánico';

$GLOBALS["lang"]['profile'] = 'Perfil';

$GLOBALS["lang"]['Profile'] = 'Perfil';

$GLOBALS["lang"]['program'] = 'Programa';

$GLOBALS["lang"]['Program'] = 'Programa';

$GLOBALS["lang"]['Properties'] = 'Propiedades';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Propietario. Si desea modificar HighCharts puede requerir un';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protege confidencialidad, integridad y disponibilidad de información';

$GLOBALS["lang"]['protocol'] = 'Protocolo';

$GLOBALS["lang"]['Protocol'] = 'Protocolo';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Proporcione una descripción y seleccione y expira la duración.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Proporcione un nombre - humildemente recommand Open-AudIT 😀, pero puede nombrarlo todo lo que quiera.<br/>Desde el formulario Open-AudIT, copiar el valor para el <i>Redirect URI</i> campo y pegarlo en el <i>Sign-in redirect URIs</i> campo en OKTA.<br/>El registro redirecciona URIs es opcional, pero si quieres puedes utilizar Open-audit/index. php/logout con sus servidores Open-AudIT dirección http, según la captura de pantalla.<br/>Normalmente tu Open-AudIT URL se verá algo como';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Siempre que tenga las credenciales correctas, Device Seed Discovery funciona como sigue:';

$GLOBALS["lang"]['provider'] = 'Proveedor';

$GLOBALS["lang"]['Provider'] = 'Proveedor';

$GLOBALS["lang"]['published'] = 'Publicado';

$GLOBALS["lang"]['Published'] = 'Publicado';

$GLOBALS["lang"]['published_date'] = 'Fecha de publicación';

$GLOBALS["lang"]['Published Date'] = 'Fecha de publicación';

$GLOBALS["lang"]['publisher'] = 'Editorial';

$GLOBALS["lang"]['Publisher'] = 'Editorial';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Compra';

$GLOBALS["lang"]['purchase_amount'] = 'Monto de compra';

$GLOBALS["lang"]['Purchase Amount'] = 'Monto de compra';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centro de Costos de Compra';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centro de Costos de Compra';

$GLOBALS["lang"]['purchase_count'] = 'Cuenta de compra';

$GLOBALS["lang"]['Purchase Count'] = 'Cuenta de compra';

$GLOBALS["lang"]['purchase_date'] = 'Fecha de compra';

$GLOBALS["lang"]['Purchase Date'] = 'Fecha de compra';

$GLOBALS["lang"]['purchase_invoice'] = 'Factura de compra';

$GLOBALS["lang"]['Purchase Invoice'] = 'Factura de compra';

$GLOBALS["lang"]['purchase_order'] = 'Orden de compra';

$GLOBALS["lang"]['Purchase Order'] = 'Orden de compra';

$GLOBALS["lang"]['purchase_order_number'] = 'Número de pedido de compra';

$GLOBALS["lang"]['Purchase Order Number'] = 'Número de pedido de compra';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Número de contrato de servicio de compra';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Número de contrato de servicio de compra';

$GLOBALS["lang"]['purchase_vendor'] = 'Proveedor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Proveedor';

$GLOBALS["lang"]['purpose'] = 'Propósito';

$GLOBALS["lang"]['Purpose'] = 'Propósito';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Consultas';

$GLOBALS["lang"]['Queries'] = 'Consultas';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Las consultas son una parte importante de Open-AudIT. Son lo que le permite obtener información significativa de todos los datos del dispositivo que ha descubierto. Junto con resúmenes y grupos, proporcionan un poderoso mecanismo para extraer información crucial.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Queries for Groups should select only the';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Consultar este atributo Active Directory primero para determinar la unidad de trabajo de los usuarios.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Consulta este atributo Active Directory segundo para determinar la unidad de trabajo de los usuarios.';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Auditorías de dispositivos en espera';

$GLOBALS["lang"]['Queued IP Scans'] = 'Escáneos IP puestos en consulta';

$GLOBALS["lang"]['Queued Items'] = 'Documentos solicitados';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC para Active Directory y openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Nivel RX';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'Perfil RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Dispositivos de cubierta';

$GLOBALS["lang"]['Rack Devices'] = 'Dispositivos de cubierta';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management and Reporting';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Leer';

$GLOBALS["lang"]['Read'] = 'Leer';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lea nuestra documentación en línea en Open-AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Lea a través del archivo de registro en';

$GLOBALS["lang"]['Received'] = 'Recibidos';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Recientemente se nos ha hecho la pregunta - ¿Usted considera Open-AudIT más seguro que otros programas similares? Como con la mayoría de las cosas, la respuesta es <i>Depende.</i>.<br/><br/>Open-Aud Puede ser operado de tal manera que sea extremadamente seguro. Pero como de costumbre con seguridad informática, cuanto más seguro deseas hacer algo, más inconveniente se convierte en usar. La vieja frase <i>el ordenador más seguro es uno que se apaga y en el armario<i> viene a la mente.<br/><br/>A continuación esbozaremos algunas opciones que se pueden utilizar con Open-AudIT que aumentará la seguridad. Como la mayoría de los artículos dentro de Open-AudIT, son opciones y no obligatorios. Cuán lejos tomas la seguridad depende de ti.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertificación: Se requiere cada tres años';

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Reduce el riesgo de violación de datos y amenazas cibernéticas';

$GLOBALS["lang"]['references'] = 'Referencias';

$GLOBALS["lang"]['References'] = 'Referencias';

$GLOBALS["lang"]['region'] = 'Región';

$GLOBALS["lang"]['Region'] = 'Región';

$GLOBALS["lang"]['registered_user'] = 'Usuario registrado';

$GLOBALS["lang"]['Registered User'] = 'Usuario registrado';

$GLOBALS["lang"]['Rejected'] = 'Rechazado';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Liberación';

$GLOBALS["lang"]['remediation'] = 'Remediación';

$GLOBALS["lang"]['Remediation'] = 'Remediación';

$GLOBALS["lang"]['Remote'] = 'Remoto';

$GLOBALS["lang"]['remote_address'] = 'Dirección remota';

$GLOBALS["lang"]['Remote Address'] = 'Dirección remota';

$GLOBALS["lang"]['remote_port'] = 'Puerto remoto';

$GLOBALS["lang"]['Remote Port'] = 'Puerto remoto';

$GLOBALS["lang"]['Remove'] = 'Retirar';

$GLOBALS["lang"]['Remove Exception'] = 'Quitar Excepciones';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Repita hasta que tenga un PC Windows completamente descubierto y auditado.';

$GLOBALS["lang"]['Report'] = 'Informe';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Informe sobre sus dispositivos, redes y más';

$GLOBALS["lang"]['reportable'] = 'Reportable';

$GLOBALS["lang"]['Reportable'] = 'Reportable';

$GLOBALS["lang"]['Reports'] = 'Informes';

$GLOBALS["lang"]['request'] = 'Solicitud';

$GLOBALS["lang"]['Request'] = 'Solicitud';

$GLOBALS["lang"]['Request Method'] = 'Método de solicitud';

$GLOBALS["lang"]['Request Vulnerability'] = 'Solicitud de vulnerabilidad';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Solicitar un específico CVE';

$GLOBALS["lang"]['requested'] = 'Solicitudes';

$GLOBALS["lang"]['Requested'] = 'Solicitudes';

$GLOBALS["lang"]['require_port'] = 'Require Puerto';

$GLOBALS["lang"]['Require Port'] = 'Require Puerto';

$GLOBALS["lang"]['Require an Open Port'] = 'Requiere un Puerto Abierto';

$GLOBALS["lang"]['Required'] = 'Se requiere';

$GLOBALS["lang"]['Required AWS user permissions'] = 'permisos de usuario requeridos de AWS';

$GLOBALS["lang"]['Required Fields'] = 'Campos obligatorios';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Restablecer todos los datos';

$GLOBALS["lang"]['Reset to Default'] = 'Reset to Default';

$GLOBALS["lang"]['resource'] = 'Recursos';

$GLOBALS["lang"]['Resource'] = 'Recursos';

$GLOBALS["lang"]['Resource Name'] = 'Nombre de los recursos';

$GLOBALS["lang"]['Resources'] = 'Recursos';

$GLOBALS["lang"]['response'] = 'Respuesta';

$GLOBALS["lang"]['Response'] = 'Respuesta';

$GLOBALS["lang"]['responsibility'] = 'Responsabilidad';

$GLOBALS["lang"]['Responsibility'] = 'Responsabilidad';

$GLOBALS["lang"]['Restore my Licenses'] = 'Restaurar mis licencias';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrict to Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrict to Subnet';

$GLOBALS["lang"]['result'] = 'Resultado';

$GLOBALS["lang"]['Result'] = 'Resultado';

$GLOBALS["lang"]['Resulting Function'] = 'Función de resultados';

$GLOBALS["lang"]['Results'] = 'Resultados';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Recuperar una lista de dispositivos en el';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Recuperar una lista de dispositivos con el nombre del sistema operativo como Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Recuperar todos los detalles sobre el dispositivo con id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Recuperar todos los dispositivos que ejecutan Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Recuperar todos los dispositivos con las columnas estándar';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Recuperar los primeros 10 dispositivos que ejecutan Windows ordenados por nombre de host';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Recuperar las propiedades id, ip, nombre de host, dominio, tipo desde todos los dispositivos';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nombre recuperado';

$GLOBALS["lang"]['Retrieved Name'] = 'Nombre recuperado';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Recuperar una lista de credenciales';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Recuperar o crear';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Devuelve una colección de dispositivos con el conjunto predeterminado de columnas (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Devuelve una lista de todos los módulos instalados en Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Devuelve un dispositivo individual\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Devuelve una lista de {colecciones}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Devuelve los detalles.';

$GLOBALS["lang"]['Reunion'] = 'Reunión';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Revisar las prácticas actuales contra los requisitos ISO 27001';

$GLOBALS["lang"]['revision'] = 'Revisión';

$GLOBALS["lang"]['Revision'] = 'Revisión';

$GLOBALS["lang"]['risk_assesment_result'] = 'Resultado de la evaluación del riesgo';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Resultado de la evaluación del riesgo';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Evaluación del riesgo y tratamiento';

$GLOBALS["lang"]['Risk Management'] = 'Gestión de riesgos';

$GLOBALS["lang"]['Role'] = 'Función';

$GLOBALS["lang"]['roles'] = 'Funciones';

$GLOBALS["lang"]['Roles'] = 'Funciones';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Las funciones sólo pueden crearse y editarse si tiene una licencia Open-AudIT Enterprise. Para la mayoría de los usuarios, el conjunto predeterminado de Roles debe ser todo lo que se requiere.';

$GLOBALS["lang"]['Romania'] = 'Rumania';

$GLOBALS["lang"]['Romanian'] = 'Rumania';

$GLOBALS["lang"]['Room'] = '13.00 horas';

$GLOBALS["lang"]['route'] = 'Ruta';

$GLOBALS["lang"]['Route'] = 'Ruta';

$GLOBALS["lang"]['Row'] = 'Fila';

$GLOBALS["lang"]['Row Count'] = 'Conde';

$GLOBALS["lang"]['row_position'] = 'Posición';

$GLOBALS["lang"]['Row Position'] = 'Posición';

$GLOBALS["lang"]['Rows'] = 'Filas';

$GLOBALS["lang"]['ru_height'] = 'Ru Altura';

$GLOBALS["lang"]['Ru Height'] = 'Ru Altura';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Grupo de Trabajo';

$GLOBALS["lang"]['Rule Group'] = 'Grupo de Trabajo';

$GLOBALS["lang"]['rules'] = 'Reglas';

$GLOBALS["lang"]['Rules'] = 'Reglas';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Las reglas se crean y se ejecutan contra un dispositivo cuando se descubre el dispositivo o se procesa un resultado de auditoría. Las reglas se pueden utilizar para establecer un atributo de dispositivo basado en otros atributos.<br/><br/>NOTA - En la actualidad no podemos eliminar una entrada o salida de reglas que contiene un /. Esto se debe a que el marco está analizando el / como parte de la URL y devolviendo un 404, incluso antes de que nuestro código funcione. El trabajo en torno a esto es eliminar la Regla misma, luego recrear las entradas y salidas según sea necesario. Afortunadamente, las entradas y salidas que contienen un / son raras (de hecho, no existen por defecto).';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run Your Discovery'] = 'Corre tu descubrimiento';

$GLOBALS["lang"]['Run a Command'] = 'Corre un comando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Ejecutar un descubrimiento y descubrir <b>¿Qué hay en tu red?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Ejecute el script escribiendo <code>cscript test_windows_client.vbs</code> en la consola.';

$GLOBALS["lang"]['Run this Command'] = 'Corre este comando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Corriendo';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Funcionamiento de servicio de Apache Open-AudIT en Windows';

$GLOBALS["lang"]['Russian'] = 'Ruso';

$GLOBALS["lang"]['Russian Federation'] = 'Russian Federation';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Nivel de Rx';

$GLOBALS["lang"]['Rx Level'] = 'Nivel de Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Perfil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Perfil Rx';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Descubrimiento';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versión SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detalles';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Versión SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Statements';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL no contiene esta condición resultará en el widget que no se ejecutará.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Clave';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Santa Elena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts y Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Santa Lucía';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre y Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'San Vicente y las Granadinas';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Santo Tomé y Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Sábado';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arabia Saudita';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Guarda y ejecuta el archivo. Asegúrese de ejecutar el archivo como Administrador para instalarlo (click derecho, Ejecutar como Administrador).';

$GLOBALS["lang"]['Save as Default'] = 'Guardar como defecto';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Guarda el archivo descargado.';

$GLOBALS["lang"]['scaling'] = 'Escalada';

$GLOBALS["lang"]['Scaling'] = 'Escalada';

$GLOBALS["lang"]['scan_options'] = 'Opciones de exploración';

$GLOBALS["lang"]['Scan Options'] = 'Opciones de exploración';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan Options ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Escaneo para este puerto(s) y si se detecta abierto, utilice este puerto para comunicación SSH. Esto se añade a la lista de puertos TCP personalizados arriba (si no ya incluidos), por lo que no hay necesidad de incluirlo en esa lista también. Comma seperó, sin espacios.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Escanee el número superior de puertos TCP Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Escanee el número superior de puertos UDP Nmap.';

$GLOBALS["lang"]['schedule'] = 'Cuadro';

$GLOBALS["lang"]['Schedule'] = 'Cuadro';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'El descubrimiento y reporte de dispositivos programados hacen Open-AudIT Professional una solución eficiente para los profesionales de TI ocupados que buscan reducir los gastos generales y aumentar las ideas.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Programación - descubrimiento, presentación de informes';

$GLOBALS["lang"]['scope'] = 'Ámbito';

$GLOBALS["lang"]['Scope'] = 'Ámbito';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Se conoce como Ámbito de Autorización, lo que representa si una vulnerabilidad afecta a los recursos más allá de la autoridad de seguridad original del componente vulnerable.<br/><br/>Los únicos dos valores válidos para este atributo son';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Autobús Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Autobús Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Puerto';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Puerto';

$GLOBALS["lang"]['Search'] = 'Búsqueda';

$GLOBALS["lang"]['Search For a Device'] = 'Buscar un dispositivo';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Búsqueda utilizando datosTablas';

$GLOBALS["lang"]['Second'] = 'Segundo';

$GLOBALS["lang"]['secondary'] = 'Secundaria';

$GLOBALS["lang"]['Secondary'] = 'Secundaria';

$GLOBALS["lang"]['Secondary Text'] = 'Texto secundario';

$GLOBALS["lang"]['Secret Key'] = 'Secret Key';

$GLOBALS["lang"]['section'] = 'Sección';

$GLOBALS["lang"]['Section'] = 'Sección';

$GLOBALS["lang"]['secure'] = 'Seguro';

$GLOBALS["lang"]['Secure'] = 'Seguro';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protocolo de automatización del contenido de seguridad';

$GLOBALS["lang"]['Security Level'] = 'Nivel de seguridad';

$GLOBALS["lang"]['Security Name'] = 'Nombre de seguridad';

$GLOBALS["lang"]['Security Status'] = 'Situación de la seguridad';

$GLOBALS["lang"]['security_zone'] = 'Zona de seguridad';

$GLOBALS["lang"]['Security Zone'] = 'Zona de seguridad';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Ver más arriba. NOTA - Esto también podría ser causado por un certificado auto-firmado en el servidor LDAP. Estamos trabajando para permitir esto en una futura liberación.';

$GLOBALS["lang"]['See our page on enabling'] = 'Vea nuestra página sobre habilitación';

$GLOBALS["lang"]['Seed Discoveries'] = 'Descubrimientos de semillas';

$GLOBALS["lang"]['seed_ip'] = 'Seed IP';

$GLOBALS["lang"]['Seed IP'] = 'Seed IP';

$GLOBALS["lang"]['seed_ping'] = 'Semillas Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Semillas Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Restringencia de semillas al soldado';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Restringencia de semillas al soldado';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restos de semillas a subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restos de semillas a subnet';

$GLOBALS["lang"]['Select'] = 'Seleccione';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Seleccione Admin - confiar Tareas - título Crear Tarea del menú.';

$GLOBALS["lang"]['Select All'] = 'Seleccione todos';

$GLOBALS["lang"]['Select All Devices'] = 'Seleccione todos los dispositivos';

$GLOBALS["lang"]['select_external_attribute'] = 'Select External Attribute';

$GLOBALS["lang"]['Select External Attribute'] = 'Select External Attribute';

$GLOBALS["lang"]['select_external_count'] = 'Seleccionar cuenta externa';

$GLOBALS["lang"]['Select External Count'] = 'Seleccionar cuenta externa';

$GLOBALS["lang"]['select_external_type'] = 'Seleccione Externo Tipo';

$GLOBALS["lang"]['Select External Type'] = 'Seleccione Externo Tipo';

$GLOBALS["lang"]['select_external_value'] = 'Seleccione Externo Valor';

$GLOBALS["lang"]['Select External Value'] = 'Seleccione Externo Valor';

$GLOBALS["lang"]['select_internal_attribute'] = 'Seleccione Atributo interno';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Seleccione Atributo interno';

$GLOBALS["lang"]['select_internal_count'] = 'Seleccionar cuenta interna';

$GLOBALS["lang"]['Select Internal Count'] = 'Seleccionar cuenta interna';

$GLOBALS["lang"]['select_internal_type'] = 'Seleccionar interno Tipo';

$GLOBALS["lang"]['Select Internal Type'] = 'Seleccionar interno Tipo';

$GLOBALS["lang"]['select_internal_value'] = 'Seleccionar interno Valor';

$GLOBALS["lang"]['Select Internal Value'] = 'Seleccionar interno Valor';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Seleccionar menú - título Gestionar: Bases - Lista de Bases.';

$GLOBALS["lang"]['Select a Table'] = 'Seleccione una tabla';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Seleccione un organismo de certificación acreditado';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Seleccione y aplique controles apropiados (anexo A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Seleccione <i>COM Seguridad</i> pestaña<br/><br/>Click on Access Permissions Editar por defecto';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Seleccione <i>Firma</i> ficha y copia el valor para <i>Periodista</i> (sólo la URL misma). Pruebe esto en el Open-AudIT <i>Periodista</i> campo.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Seleccione <i>Esta Cuenta</i> checkbox y proporcionar el nombre de cuenta y contraseña.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Seleccione el menú Inicio y escriba <i>servicios realizados.i Haga clic en el icono Servicios.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Seleccione el tipo de Auth Menthod para crear e introducir los detalles pertinentes.';

$GLOBALS["lang"]['Self Delete'] = 'Suprímase';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Sensibilidad';

$GLOBALS["lang"]['Sensitivity'] = 'Sensibilidad';

$GLOBALS["lang"]['September'] = 'Septiembre';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serie';

$GLOBALS["lang"]['Serial'] = 'Serie';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Servidor';

$GLOBALS["lang"]['Server'] = 'Servidor';

$GLOBALS["lang"]['server_id'] = 'ID de servidor';

$GLOBALS["lang"]['Server ID'] = 'ID de servidor';

$GLOBALS["lang"]['Server Is'] = 'Servidor Is';

$GLOBALS["lang"]['server_item'] = 'Artículo del servidor';

$GLOBALS["lang"]['Server Item'] = 'Artículo del servidor';

$GLOBALS["lang"]['Server Status'] = 'Estado del servidor';

$GLOBALS["lang"]['Servers'] = 'Servidores';

$GLOBALS["lang"]['Servers Only'] = 'Servidores Sólo';

$GLOBALS["lang"]['service'] = 'Servicio';

$GLOBALS["lang"]['Service'] = 'Servicio';

$GLOBALS["lang"]['service_identifier'] = 'Identificador de servicio';

$GLOBALS["lang"]['Service Identifier'] = 'Identificador de servicio';

$GLOBALS["lang"]['service_level_a'] = 'Nivel de servicio A';

$GLOBALS["lang"]['Service Level A'] = 'Nivel de servicio A';

$GLOBALS["lang"]['service_level_b'] = 'Nivel de servicio B';

$GLOBALS["lang"]['Service Level B'] = 'Nivel de servicio B';

$GLOBALS["lang"]['service_network'] = 'Service Network';

$GLOBALS["lang"]['Service Network'] = 'Service Network';

$GLOBALS["lang"]['service_number'] = 'Número de servicio';

$GLOBALS["lang"]['Service Number'] = 'Número de servicio';

$GLOBALS["lang"]['service_pack'] = 'Paquete de servicio';

$GLOBALS["lang"]['Service Pack'] = 'Paquete de servicio';

$GLOBALS["lang"]['service_plan'] = 'Plan de servicios';

$GLOBALS["lang"]['Service Plan'] = 'Plan de servicios';

$GLOBALS["lang"]['service_provider'] = 'Proveedor de servicios';

$GLOBALS["lang"]['Service Provider'] = 'Proveedor de servicios';

$GLOBALS["lang"]['service_tag'] = 'Tag';

$GLOBALS["lang"]['Service Tag'] = 'Tag';

$GLOBALS["lang"]['service_type'] = 'Tipo de servicio';

$GLOBALS["lang"]['Service Type'] = 'Tipo de servicio';

$GLOBALS["lang"]['Service Under Windows'] = 'Servicio bajo Windows';

$GLOBALS["lang"]['service_version'] = 'Versión de servicio';

$GLOBALS["lang"]['Service Version'] = 'Versión de servicio';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set By';

$GLOBALS["lang"]['Set By'] = 'Set By';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Establecido por la función Discovery - normalmente no establece esto manualmente.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Establecer por los scripts audit_domain o Discover_domain. No te fijes.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Establecer el texto externo a la versión capitalizada de los datos internos.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Establece el texto externo para minar.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Establecer el texto externo en mayúscula.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Establecer el tamaño (normal o compacto) de las tablas en las pantallas Lista.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Establece esto si desea insertar sistemas de AD que pueden no ser contactables, pero han sido vistos por AD desde esa fecha.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Configurar Discovery en una subred es casi idéntico a ejecutar un Discovery regular a través de la interfaz web. Los únicos elementos adicionales son la hora y el día programados y un nombre para la propia tarea programada. Usted puede aprovechar esto para programar múltiples descubrimientos utilizando diferentes conjuntos de credenciales.<br/><br/>De acuerdo con el Subnet Discovery, el Active Directory Discovery es también simplemente los mismos campos que un Active Directory Discovery regular con la adición de un día, hora(s) y nombre.<br/><br/>Si el Open-AudIT Server tiene coleccionistas que le informan, se proporciona una reducción adicional. Puede seleccionar esto para especificar qué Coleccionista debe ejecutar la tarea. Sólo las tareas Discovery son compatibles para coleccionistas. Especifique los mismos elementos que un Discovery regular, pero proporcione al coleccionista alternativo para ejecutar esta tarea.';

$GLOBALS["lang"]['severity'] = 'Severidad';

$GLOBALS["lang"]['Severity'] = 'Severidad';

$GLOBALS["lang"]['severity_text'] = 'Texto de la Severidad';

$GLOBALS["lang"]['Severity Text'] = 'Texto de la Severidad';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severidad se calcula a partir de la <code>base_score</code> y puede ser uno de: Ninguno, bajo, mediano, alto, crítico.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Compartir';

$GLOBALS["lang"]['Share'] = 'Compartir';

$GLOBALS["lang"]['Share Name'] = 'Nombre';

$GLOBALS["lang"]['shared'] = 'Compartida';

$GLOBALS["lang"]['Shared'] = 'Compartida';

$GLOBALS["lang"]['shared_name'] = 'Nombre compartido';

$GLOBALS["lang"]['Shared Name'] = 'Nombre compartido';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Fecha';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Los escudos son un conjunto de elementos predeterminados. Estos se pueden encontrar yendo al menú';

$GLOBALS["lang"]['short'] = 'Corto';

$GLOBALS["lang"]['Short'] = 'Corto';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '¿Debo eliminar todos los datos no corrientes de este dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Si este archivo (o patrón) se utiliza para excluir archivos de ser reportado. Normalmente, para los archivos de auditoría, esto se establece para <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Si este proveedor se utiliza cuando recupera vulnerabilidades de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Si añadimos dispositivos del servicio remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '¿Debemos aplicar esta licencia a la Org seleccionada así como a los niños Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Si comprobamos un SAN si se detecta el software de gestión.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Si auditamos puntos de montaje.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Si auditamos puertos netstat (sí, no, servidores solamente).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Si auditamos el software instalado.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '¿Deberíamos considerar un puerto filtrado para ser un puerto abierto - y por lo tanto marcar este IP como tener un dispositivo conectado?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '¿Debemos considerar un puerto abierto para ser un puerto abierto - y por lo tanto marcar este IP como tener un dispositivo conectado?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Si convertimos el nombre de host en minúscula.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Si creamos un archivo basado en el resultado de la auditoría.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Si exponemos este grupo en la interfaz web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Si exponemos esta consulta en la lista de informes bajo el menú Reporte en la interfaz web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Si exponemos esta consulta en la lista de informes bajo el menú Informes en la interfaz web.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Si escondimos la ventana del guión de auditoría al ejecutar.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Si ignoramos un certificado SSL inválido o auto firmado y sometemos el resultado de todos modos.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Si instalamos Open-Scap en la máquina de destino.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Si coincidimos con una dirección de mac basada en dispositivos, incluso si su conocido probablemente duplicado de VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Si concordamos con un dispositivo basado en su DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Si coincidimos con un dispositivo basado en su nombre de host DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Si coincidimos con un dispositivo basado en su UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Si combinamos un dispositivo basado en su dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Si concordamos con un dispositivo basado en su fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Si coincidimos con un dispositivo basado en su nombre de host y UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Si coincidimos con un dispositivo basado en su nombre de host y dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Si coincidimos con un dispositivo basado en su nombre de host y serie.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Si concordamos con un dispositivo basado en su ip si tenemos un dispositivo existente sin datos.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Si encajamos con un dispositivo basado en su ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Si combinamos un dispositivo basado en su dirección de mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Si coincidimos con un dispositivo basado en su serie y tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Si coincidimos con un dispositivo basado en su número de serie.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Si combinamos un dispositivo basado sólo en su SNMP sysName y serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Si combinamos un dispositivo basado sólo en su SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Si coincidimos con un dispositivo basado sólo en su nombre de host.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '¿Deberíamos pinchar la IP antes de intentar escanearla? Si no responde al ping, omita este dispositivo.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Si pusiéramos el sistema externo de nuestros dispositivos locales.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Si recuperamos todos los nombres DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Si realizamos una auditoría y la sometemos (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Si probamos para SNMP usando el puerto UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Si probamos para SSH usando el puerto TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Si probamos para WMI usando el puerto TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Si desinstalamos el agente (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Si utilizamos el sistema o el nivel de usuario proxy para presentar el resultado de la auditoría.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Si utilizamos la clase WMI win32_product (no recomendada por Microsoft) al recuperar el software instalado.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Si utilizamos este método para autenticar las credenciales de usuario. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Si utilizamos este método para popular un papel de usuario. El campo <code>use_auth</code> debe establecerse <code>y</code> para usar esto. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Si utilizamos este valor para combinar dispositivos externos e internos. Nuestra integración predeterminada utiliza IP y UUID aquí. Si alguno de estos coincide entre dispositivo externo e interno, consideramos que son el mismo dispositivo.';

$GLOBALS["lang"]['Show All'] = 'Mostrar todos';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leona';

$GLOBALS["lang"]['Singapore'] = 'Singapur';

$GLOBALS["lang"]['Site A'] = 'Sitio A';

$GLOBALS["lang"]['Site B'] = 'Sitio B';

$GLOBALS["lang"]['site_hours_a'] = 'Horas del sitio A';

$GLOBALS["lang"]['Site Hours A'] = 'Horas del sitio A';

$GLOBALS["lang"]['site_hours_b'] = 'Horas del sitio B';

$GLOBALS["lang"]['Site Hours B'] = 'Horas del sitio B';

$GLOBALS["lang"]['size'] = 'Tamaño';

$GLOBALS["lang"]['Size'] = 'Tamaño';

$GLOBALS["lang"]['slaves'] = 'Esclavos';

$GLOBALS["lang"]['Slaves'] = 'Esclavos';

$GLOBALS["lang"]['Slovak'] = 'Eslovaco';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Eslovaquia (República Eslovaca)';

$GLOBALS["lang"]['Slovenia'] = 'Eslovenia';

$GLOBALS["lang"]['Slovenian'] = 'Eslovenia';

$GLOBALS["lang"]['Smart Status'] = 'Estado inteligente';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Así que un script no está trabajando en un dispositivo recalcitrante. Grrr. Los scripts para Windows, Linux y MacOS aceptan el argumento de depuración. Esto se puede configurar en el script mismo, o se proporciona en la línea de comandos. Ejecute el script usando esa opción establecida a 5 y debe ver en qué sección del script se produce el fallo. Por ejemplo';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Así que aparte de una palabra regular, ¿qué otras opciones hay allí - Me alegro de que me pregunte! De acuerdo con la API estándar Open-AudIT, tenemos varios operadores para filtrar. Los operadores que pueden preceder al valor son';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Así que tienes un problema proporcionando credenciales de Open-AudIT para descubrir tus dispositivos. Tengo una respuesta - entonces no! Claro, quiero decir, el descubrimiento es lo mejor desde el pan cortado. Usted no necesita saber antes de tiempo <i>Qué hay en su red</i>. ¿Pero cómo puede extraer datos de dispositivos sin proporcionar credenciales?<br/><br/>En el caso de las computadoras, una opción fácil es copiar el script de auditoría adecuado a las máquinas de destino y establecerlo para ejecutarlo en un horario. Más detalles sobre el wiki. Las máquinas enviarán sus datos a Open-AudIT en ese horario, casi como si estuvieras corriendo descubrimiento. El dispositivo simplemente ejecuta el script de auditoría en un programa (de nuevo, puede leer el script de auditoría) como el usuario que le dice y envía la salida al servidor. No hay credenciales involucradas.<br/><br/>Y ahora tenemos agentes para Windows. Las ventajas de un agente instalado real son';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'El software se encontró los últimos 7 días';

$GLOBALS["lang"]['Software Found Today'] = 'Software encontrado hoy';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software encontrado ayer';

$GLOBALS["lang"]['software_key'] = 'Clave de software';

$GLOBALS["lang"]['Software Key'] = 'Clave de software';

$GLOBALS["lang"]['Software License Reporting'] = 'Informe de licencia de software';

$GLOBALS["lang"]['software_name'] = 'Nombre del software';

$GLOBALS["lang"]['Software Name'] = 'Nombre del software';

$GLOBALS["lang"]['Software Policies'] = 'Políticas de software';

$GLOBALS["lang"]['software_revision'] = 'Revisión del software';

$GLOBALS["lang"]['Software Revision'] = 'Revisión del software';

$GLOBALS["lang"]['software_version'] = 'Versión del software';

$GLOBALS["lang"]['Software Version'] = 'Versión del software';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Islas Salomón';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Somali Republic';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Algunas colecciones se pueden ejecutar - consultas, etc - ver abajo.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Algunos ejemplos están en la parte inferior de esta página. Todos los puntos finales también tienen una lista mínima de campos requeridos. Estos son abajo.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Algunas de nuestras plantillas soportan el nuevo movimiento a DataTables, utilizando el procesamiento lateral del servidor. Este massivley mejora los tiempos de carga.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Se ha producido otro error al intentar atar al servidor LDAP. Es contactable (es decir, el <i>conectar</i> arriba ha funcionado), pero por alguna otra razón, la unión no ha ocurrido. Compruebe los registros en el servidor LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Algo ha ido muy mal. Open-AudIT no puede leer <i>orgs</i> mesa.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Algo ha ido muy mal. Open-AudIT no puede leer <i>Funciones</i> mesa.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'A veces el descubrimiento sin agentes no encaja en su caso de uso. Tal vez sus PCs tienen cortafuegos apretados. Tal vez no están en la red cuando sus descubrimientos están programados. Tal vez son utilizados por trabajadores remotos. Sea cual sea el caso, aquí es donde un agente puede ayudar. Instalarlo en la máquina de destino y será <i>check-in</i> con su servidor Open-AudIT en un horario y aceptar tareas. La tarea más común que solicita el servidor es que el agente se audite y envíe el resultado.';

$GLOBALS["lang"]['Sort'] = 'Más o menos';

$GLOBALS["lang"]['sound'] = 'Sonido';

$GLOBALS["lang"]['Sound'] = 'Sonido';

$GLOBALS["lang"]['source'] = 'Fuente';

$GLOBALS["lang"]['Source'] = 'Fuente';

$GLOBALS["lang"]['South Africa'] = 'Sudáfrica';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Georgia del Sur y las Islas Sandwich del Sur';

$GLOBALS["lang"]['Spain'] = 'España';

$GLOBALS["lang"]['Spanish'] = 'Español';

$GLOBALS["lang"]['Specific to Azure.'] = 'Específico para Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Específico para OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Especifica una lista separada de objetivos (sin espacios) para ser excluidos de la exploración. La lista que pasa en utiliza la sintaxis normal de Nmap, por lo que puede incluir nombres de host, netblocks CIDR, rangos de octet, etc.';

$GLOBALS["lang"]['speed'] = 'Speed';

$GLOBALS["lang"]['Speed'] = 'Speed';

$GLOBALS["lang"]['speed_down_a'] = 'Velocidad A';

$GLOBALS["lang"]['Speed Down A'] = 'Velocidad A';

$GLOBALS["lang"]['speed_down_b'] = 'Velocidad B';

$GLOBALS["lang"]['Speed Down B'] = 'Velocidad B';

$GLOBALS["lang"]['speed_up_a'] = 'Velocidad hacia arriba';

$GLOBALS["lang"]['Speed Up A'] = 'Velocidad hacia arriba';

$GLOBALS["lang"]['speed_up_b'] = 'Velocidad B';

$GLOBALS["lang"]['Speed Up B'] = 'Velocidad B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Etapa 1: Examen de la documentación';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Etapa 2: Examen de la aplicación y la eficacia';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Estándar';

$GLOBALS["lang"]['standard_id'] = 'ID estándar';

$GLOBALS["lang"]['Standard ID'] = 'ID estándar';

$GLOBALS["lang"]['standards'] = 'Normas';

$GLOBALS["lang"]['Standards'] = 'Normas';

$GLOBALS["lang"]['standards_policies'] = 'Normas Políticas';

$GLOBALS["lang"]['Standards Policies'] = 'Normas Políticas';

$GLOBALS["lang"]['standards_results'] = 'Resultados de normas';

$GLOBALS["lang"]['Standards Results'] = 'Resultados de normas';

$GLOBALS["lang"]['start_date'] = 'Fecha de inicio';

$GLOBALS["lang"]['Start Date'] = 'Fecha de inicio';

$GLOBALS["lang"]['start_mode'] = 'Modo de inicio';

$GLOBALS["lang"]['Start Mode'] = 'Modo de inicio';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Iniciar un navegador web e ir a';

$GLOBALS["lang"]['started_date'] = 'Fecha de inicio';

$GLOBALS["lang"]['Started Date'] = 'Fecha de inicio';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Inicio Junio 2018 Google ha implementado un modelo de precios de pago para las API de Google Maps Platform. Anteriormente, la mayoría de los usuarios con uso moderado podrían utilizar Google Maps, que están incrustados en opCharts y Open-AudIT Professional/Enterprise, de forma gratuita. Googles nueva política se describe aquí,';

$GLOBALS["lang"]['Starts With'] = 'Empieza con';

$GLOBALS["lang"]['state'] = 'Estado';

$GLOBALS["lang"]['State'] = 'Estado';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Situación';

$GLOBALS["lang"]['Status'] = 'Situación';

$GLOBALS["lang"]['Storage'] = 'Almacenamiento';

$GLOBALS["lang"]['storage_count'] = 'Conde de almacenamiento';

$GLOBALS["lang"]['Storage Count'] = 'Conde de almacenamiento';

$GLOBALS["lang"]['Storage area network'] = 'Red de área de almacenamiento';

$GLOBALS["lang"]['Storage-Area Network'] = 'Red de almacenamiento y área';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Subtipo';

$GLOBALS["lang"]['Sub Type'] = 'Subtipo';

$GLOBALS["lang"]['subject_key_ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Submit'] = 'Submit';

$GLOBALS["lang"]['Submit Online'] = 'Submit Online';

$GLOBALS["lang"]['Submitted From'] = 'Presentado';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

$GLOBALS["lang"]['Subscription ID'] = 'ID de suscripción';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'El éxito';

$GLOBALS["lang"]['Sudan'] = 'Sudán';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (opcional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Resumen';

$GLOBALS["lang"]['Summaries'] = 'Resumen';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Los resúmenes son una sola consulta contra la base de datos con una <i>grupo por</i> Comando. Utilizando este método sencillo podemos crear fácilmente un resumen para prácticamente cualquier atributo.<br/><br/>Ya no necesitamos un informe separado para cada uno <i>Tipo</i> de un dispositivo. Ahora simplemente tenemos un resumen de los grupos por <i>dispositivos. Tipo</i> y muestra el resultado. A continuación, puede hacer clic en un tipo dado de la lista y ver los dispositivos de coincidencia. En este caso, un resumen reemplaza (potencialmente) 78 informes (hay 78 tipos de dispositivos).<br/><br/>Un resumen es diferente a una consulta en que un resumen está diseñado para agrupar los elementos por un atributo dado luego proporcionar un <i>haga clic en</i> enlace a los dispositivos reales. Una consulta es simplemente una lista de artículos sin más enlaces. As above - this of a Summary as a combined <i>report + subreport</i>, mientras que una consulta es simplemente un informe único.<br/><br/>Los resúmenes tienen una plantilla de colección diferente a los otros recursos dentro de Open-AudIT. Esta plantilla muestra el resumen como usted esperaría y también muestra botones con recuentos de otros recursos. Esta página está diseñada para ser la HomePage de Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Los resúmenes están diseñados para agrupar los elementos por una columna de coincidencia particular y luego para proporcionar un enlace a los dispositivos individuales. En las versiones anteriores de Open-AudIT, esto habría sido dos temas diferentes - un informe y subreport. Ahora hemos incluido esto en lo que llamamos Resumen.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Los resúmenes proporcionan capacidades de presentación de informes de perforación. Simple, intuitivo, poderoso.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Los resúmenes toman los mismos argumentos que las consultas.';

$GLOBALS["lang"]['Summary'] = 'Resumen';

$GLOBALS["lang"]['Sunday'] = 'Domingo';

$GLOBALS["lang"]['supplier'] = 'Proveedor';

$GLOBALS["lang"]['Supplier'] = 'Proveedor';

$GLOBALS["lang"]['Support'] = 'Apoyo';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tipos compatibles <code>subnet</code>, <code>seed</code> y <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Apoya el cumplimiento de los requisitos legales y reglamentarios';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Auditorías de vigilancia: Auditorías anuales para mantener la certificación';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Islas Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swazilandia';

$GLOBALS["lang"]['Sweden'] = 'Suecia';

$GLOBALS["lang"]['Swedish'] = 'Suecia';

$GLOBALS["lang"]['switch_device_id'] = 'ID de dispositivo de conmutación';

$GLOBALS["lang"]['Switch Device ID'] = 'ID de dispositivo de conmutación';

$GLOBALS["lang"]['switch_port'] = 'Interruptor de puerto';

$GLOBALS["lang"]['Switch Port'] = 'Interruptor de puerto';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suiza, Confederación Suiza';

$GLOBALS["lang"]['Symptom'] = 'Síntoma';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'República Árabe Siria';

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

$GLOBALS["lang"]['system_component'] = 'Componente de sistema';

$GLOBALS["lang"]['System Component'] = 'Componente de sistema';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Nivel TX';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'Perfil de TX';

$GLOBALS["lang"]['Table'] = 'Cuadro';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags :: '] = 'Etiquetas :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwán';

$GLOBALS["lang"]['Tajikistan'] = 'Tayikistán';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Tomar nota de toda la producción y acción de cada tema según proceda.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Target Computer';

$GLOBALS["lang"]['task'] = 'Tareas';

$GLOBALS["lang"]['Task'] = 'Tareas';

$GLOBALS["lang"]['tasks'] = 'Tareas';

$GLOBALS["lang"]['Tasks'] = 'Tareas';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Las tareas pueden ser uno de varios tipos distintos: Baseline, Discovery, Report, Query, Summary o Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['Technical Details'] = 'Detalles técnicos';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'ID del arrendatario';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternario';

$GLOBALS["lang"]['Ternary'] = 'Ternario';

$GLOBALS["lang"]['Test 1'] = 'Prueba 1';

$GLOBALS["lang"]['Test 2'] = 'Prueba 2';

$GLOBALS["lang"]['Test 3'] = 'Prueba 3';

$GLOBALS["lang"]['Test Email'] = 'Test Email';

$GLOBALS["lang"]['test_minutes'] = 'Test Minutes';

$GLOBALS["lang"]['Test Minutes'] = 'Test Minutes';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Pruebas';

$GLOBALS["lang"]['Tests'] = 'Pruebas';

$GLOBALS["lang"]['Text'] = 'Texto';

$GLOBALS["lang"]['Thai'] = 'Tailandia';

$GLOBALS["lang"]['Thailand'] = 'Tailandia';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Gracias por comenzar su viaje con la mejor herramienta de descubrimiento e inventario alrededor.';

$GLOBALS["lang"]['Thanks to'] = 'Gracias';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = '¡Eso es! Acabas de editar los atributos de tantos dispositivos como necesites.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'El <i>Funciones</i> endpoint le permite gestionar el conjunto de permisos (Crear, Leer, Actualizar, Eliminar) que se conceden a los usuarios y se aplican a cada punto final.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'La API utiliza una cookie. Puede solicitar una cookie enviando un POST a la URL de abajo, conteniendo el nombre de usuario y los atributos y valores de contraseña:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'El dominio Active Directory para recuperar una lista de subreds de.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'El servidor Active Directory para recuperar una lista de subreds de.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'El endpoint de Aplicaciones le permite definir una aplicación que puede asociarse a un dispositivo (o dispositivos).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'El punto final de Atributos le permite añadir valores personalizados a diferentes atributos en Open-AudIT, en el momento en que esta característica funciona en los atributos Clase, Medio Ambiente, Estado y Tipo en Dispositivos, el atributo Tipo para ambos Lugares y Orgs, así como el Menú Categoría para consultas. Si usted ve un artículo de uno de los tipos prvious (por ejemplo, ver una Lkocation) se dará cuenta de que el atributo Tipo debe ser seleccionado desde una caja desplegable. Aquí es donde se almacenan esos valores. Por lo tanto, si desea agregar un nuevo tipo para ser elegido para un lugar, agréguelo utilizando la característica de los atributos.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La métrica Automatable captura la respuesta a la pregunta <strong>¿Puede un atacante automatizar eventos de explotación para esta vulnerabilidad a través de múltiples objetivos?</strong> basado en los pasos 1-4 de la cadena de matar. Estos pasos son el reconocimiento, el armamentismo, la entrega y la explotación (No Definido, No, Sí).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'El CVE ha sido marcado como inválido o retirado en la Lista CVE. Queda en el NVD pero está excluido de los resultados de búsqueda predeterminados.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'El CVE ha sido publicado en la Lista CVE e incluido en el conjunto de datos NVD. Ingestión inicial sólo.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'El CVE ha sido actualizado después del análisis inicial. Es posible que se hayan revisado los datos sobre el enriquecimiento de NVD.';

$GLOBALS["lang"]['The CVE identifier.'] = 'El identificador de CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'El CVE está enriqueciendo activamente con las puntuaciones CVSS, clasificaciones CWE, etiquetas de referencia y aplicabilidad CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Actualmente el CVE no tiene prioridad para el enriquecimiento debido a limitaciones de recursos u otras razones.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'El CVE está preparado para el enriquecimiento por analistas NVD. Todavía no hay metadatos detallados.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'La nube que posee este artículo. Enlaces a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'El tipo Device Seed Discovery es el nuevo método altamente eficaz para arrastrar la red, dándole la capacidad de dirigir su red de forma estrecha o tan amplia como usted necesita. Es rápido, funciona y es genial.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'El escáner Discovery Las opciones que enviamos se detallan en la tabla siguiente. Como antecede, los usuarios de Enterprise pueden crear más de estos o editar los artículos enviados.';

$GLOBALS["lang"]['The Elevated User query'] = 'La consulta Elevated User';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'La función Executables escanea el disco de un dispositivo como parte de la auditoría y comprueba que cada archivo ejecutable es conocido por el administrador del paquete. Debido a que utiliza el gestor de paquetes, la función se aplica sólo a los dispositivos de destino de Linux, y más allá de eso, sólo las distribuciones basadas en rpm o deb. Cualquier cosa basada en Redhat o Debian debe funcionar.';

$GLOBALS["lang"]['The FROM'] = 'El de';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'El Grupo solía dirigir la Base de referencia. Enlaces a <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'El ID de la tabla de dispositivos (los dispositivos.nombre se mostrará) de la NTU en este extremo de la conexión. Enlaces a <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'El ID de la política de referencia importada.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'El ID de la tabla de ubicaciones (la localización.nombre se mostrará) de este extremo de la conexión. Enlaces a <code>locations.id</code>. La ubicación A es generalmente la <code>FROM</code> ubicación.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'El ID de la tabla de ubicaciones (la localización.nombre se mostrará) de este extremo de la conexión. Enlaces a <code>locations.id</code>. La ubicación B es generalmente la <code>TO</code> ubicación.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'La identificación del dispositivo asociado (si existe). Enlaces a <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'La identificación del descubrimiento asociado. Enlaces a <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'El ID del artículo del tipo asociado.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'La identificación de este orgs padre org. Enlaces a <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'La identificación proporcionada por el proveedor.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'La identificación recuperada de un descubrimiento de Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'La dirección IP de este colector se utiliza para comunicarse con el servidor.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'La IP del dispositivo para iniciar un descubrimiento de semillas.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'El IP de la interfaz externa.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'El IP de la interfaz interna.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'El proceso de certificación ISO/IEC 27001 y sus elementos clave.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'El ISP o Telco que proporciona este enlace.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'El registro de JSON de Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'El registro JSON de la alimentación NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'La UA LDAP de este usuario (si se utiliza LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'El servidor LDAP no podía conectarse. Para nada. Compruebe que es pingable desde el servidor Open-AudIT. Compruebe el puerto correcto está abierto al servidor Open-AudIT. Un nmap del servidor Open-AudIT mostrará esto. Sustituir sus servidores LDAP IP por $ip. Prueba:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'El tipo de servidor LDAP es inválido. Debería ser <i>directorio activo</i> o <i>abierto</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'El servidor LDAP estaba conectado y las credenciales de usuario aceptadas para bind.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'El instalador de Linux Open-AudIT probará para y si es necesario, instalará dependencias de Open-AudITs de su repositorio de distribuciones, incluyendo la configuración de Nmap SetUID. Esto es necesario para la detección de SNMP (UDP 161) por un usuario no root. Esto es compatible con RedHat/CentOS y Debian/Ubuntu. Si necesita instalar manualmente Nmap:<br/><br/>Para RedHat/CentOS hacer (NOTE - si se actualiza utilizando yum, tendrá que volver a aplicar esto <i>chmod</i> configuración).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Ubicación que contiene esta red. Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'The NVD assigned base status.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'El Instituto Nacional de Normas y Tecnología es la agencia de tecnología federal. Avanzan la tecnología oficial, la ciencia y las normas de medición.';

$GLOBALS["lang"]['The Network to Discover'] = 'La red para descubrir';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'El preset de tiempo de Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'The OS this package should be reported against. Manta para todos. Use el porcentaje de signo % como un comodín. Será probado contra os_group, os_family y os_name en ese orden.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'La API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'El Open-AudIT id de la nube vinculada. Enlaces a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'El Open-Aud El código del servidor de TI fue excluido dentro de este archivo.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'El Open-Aud El código del servidor de TI fue excluido dentro de esta función.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'El ecosistema OpenSCAP proporciona múltiples herramientas para ayudar a los administradores y auditores a evaluar, medir y hacer cumplir las bases de referencia de seguridad, incluyendo una amplia variedad de guías de endurecimiento y bases de configuración desarrolladas por la comunidad de código abierto, asegurando que pueda elegir una política de seguridad que se adapte mejor a las necesidades de su organización, independientemente de su tamaño.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'El proyecto OpenSCAP es una colección de herramientas de código abierto para implementar y hacer cumplir esta norma, y ha sido otorgado la certificación SCAP 1.2 por NIST en 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'La Organización que posee este tema. Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'El identificador del proceso del descubrimiento asociado en ejecución.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'El depósito RU de la parte superior de este dispositivo.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'La función Racks se utiliza para gestionar y visualizar su uso de rack con una Organización, Ubicación, Edificio, Piso, Habitación y Fila.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP utiliza varias especificaciones individuales en forma concertada para automatizar monitoreo continuo, gestión de la vulnerabilidad y presentación de informes de evaluación del cumplimiento de las políticas de seguridad';

$GLOBALS["lang"]['The SELECT'] = 'El SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'La sección SELECT de la consulta debe utilizar la notación de puntos completos y también solicitar el campo con su nombre de punto completo. IE - Dispositivos SELECT. id como `dispositivos.id`. Cada campo debe ser seleccionado de esta manera para permitir el filtrado de atributos laterales GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'La sección SELECT de su SQL debe contener columnas completamente calificadas y especificar ciertas columnas.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La cadena comunitaria SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'El SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'El protocolo de autenticación SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'El SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'El protocolo de privacidad SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'El nivel de seguridad SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'El nombre de seguridad SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'El SNMPv3 context Engine ID (opcional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nombre del contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'El SQL no puede contener <strong>Donde @filter OR</strong>. Que SQL no será ejecutado, sin embargo <strong>Donde @filter y</strong> Se permiten consultas.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Las consultas SQL utilizadas en Open-AudIT requieren el uso del backtick - ` carácter y NO la cita estándar para los campos. En la mayoría de los teclados de Windows de los EE.UU. la tecla de backtick se encuentra en la parte superior izquierda del teclado junto con el tilde ~. En un teclado Mac de los EE.UU. la tecla de backtick se encuentra junto a la tecla SHIFT. La cita estándar se sigue utilizando para adjuntar los valores como ilustran los ejemplos a continuación.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'La consulta SQL se divide esencialmente en tres partes.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'La funcionalidad Standards en Open-AudIT permite, antes de tiempo, completar las preguntas que los auditores requieren al completar la certificación ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'La URL del sistema externo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'La URL de tu Open-AudIT Servidor que este coleccionista reportará a (sin barras de rastreo).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'La URL de los scripts de auditoría debe enviar su resultado a.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'El punto final del usuario le permite gestionar las cuentas de usuario dentro de Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'Donde';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'La sección WHERE de su SQL <em>Debe</em> contener';

$GLOBALS["lang"]['The Windows'] = 'El Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'El registro de Windows puede decir lo siguiente';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'La cuenta debe tener una contraseña; WMI no permite contraseñas en blanco.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'La contraseña de la cuenta NO debe contener \" (doble citas). Esto se debe a que cscript (y wscript) no puede parse los valores de argumento que contienen citas dobles. Son simplemente despojados. No (antes de preguntar) escapar no funcionará. Esta es una limitación de cscript y nada que ver con Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'El nombre completo de este usuario.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'La dirección del servidor Open-AudIT envía página.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'El administrador proporcionó credenciales que se utilizaron con éxito para atar a LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'El administrador proporcionó credenciales para unirse al servidor LDAP, pero no han sido aceptadas por el sevrer LDAP. Revise doblemente las credenciales funcionan en el servidor LDAP, y luego compruebe (o restablecimiento) en la entrada Open-AudIT LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'El agente y el servidor también son lo suficientemente inteligentes para autoactualizar al agente si se instala una versión más nueva en el servidor (por ejemplo, después de actualizar Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'El agente debe descargar una copia nueva del script de auditoría, ejecutarlo y enviar el resultado al servidor.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'La aplicación crea escrtips de auditoría temporal aquí, los copia a las máquinas de destino, y luego los elimina.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La base de referencia asociada. Enlaces a <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'El descubrimiento asociado (si es necesario). Enlaces a <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'El atributo a la prueba (del <code>devices</code> cuadro).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'El atributo a la prueba (debe coincidir con un nombre de campo externo desde abajo).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Los atributos para las opciones de exploración del descubrimiento son como abajo.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'El guión de auditoría sobre el cual basar sus personalizaciones.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'El script de auditoría utilizará los archivos[ ] array y recuperará los detalles del archivo.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Los scripts de auditoría aceptan un argumento depurante. Puede ejecutar el script utilizando eso y ver con más detalle cuál es el problema. ¡Y si no puedes averiguarlo, para eso estamos aquí! Abrir un caso de apoyo y conseguiremos que las cosas funcionen en poco tiempo.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'El camino base desde el cual buscar Usuarios.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Los siguientes pasos no son la culpa o única de Open-AudIT y afectarían <strong>cualquiera</strong> aplicación de descubrimiento usando WMI remoto y/o Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'El tipo de referencia.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'El edificio en el que se encuentra el estante.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'El número calculado de dispositivos a crear externamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'El número calculado de dispositivos a crear en Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'El ID del cliente es la identificación de una aplicación Azure Active Directory. El secreto del cliente es la clave que usted da esa aplicación.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'El coleccionista es esencialmente una instalación completa de Open-AudIT en <i>coleccionista</i> Modo. El coleccionista está diseñado para correr el descubrimiento sobre la red en la que se encuentra. No se limita sólo a esa red, pero idealmente sería esencialmente un coleccionista por subred cuando fuera necesario. El coleccionista es impulsado en un horario por el servidor y ejecuta descubrimiento en la red como se especifica.<br/>Cuando esté en pie Solo modo el coleccionista actúa como un servidor independiente, simplemente reenviando todos los dispositivos encontrados al servidor principal.<br/><br/>Una vez instalado y instalado, el control del coleccionista se realiza en el servidor (no en modo Stand Alone).<br/><br/>Los únicos puertos de red requeridos entre el colector y el servidor son 80 o 443 (conexión TCP establecida desde el colector al servidor). La base de datos Open-AudIT no es (y no puede ser) compartida entre estas instalaciones.<br/><br/>De forma predeterminada el colector (no en modo Stand Alone) solicitará al servidor cualquier tarea de descubrimiento cada 5 minutos (puede configurar esto en el servidor para nuevos coleccionistas usando el colector_check_minutos del elemento de configuración) para cualquier tarea de descubrimiento para el colector debe programarse para 0, 5, 10, 15, etc minutos.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'El coleccionista es esencialmente una instalación completa de Open-AudIT en <i>coleccionista</i> Modo. Este modo reduciría la funcionalidad visible en un esfuerzo por simplificar y enfocar la aplicación. Está diseñado para recopilar información sobre redes y dispositivos locales, donde firewall y/o traversal de red es un problema del servidor.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Los coleccionistas IP interna utilizados cuando se ejecuta un descubrimiento.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'El nombre de la columna de la mesa exterior. Debe ser uno de: clase, medio ambiente, estado, tipo o menu_categoría.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'El comando ejecutado en el dispositivo de destino o código de servidor Open-AudIT ejecutado durante el descubrimiento.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configuración de su grupo puede ser: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> o en blanco.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La contraseña de las credenciales. Si las credenciales son una clave SSH, esta es la contraseña utilizada para desbloquear la clave y es opcional.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Las credenciales proporcionadas por el usuario han fallado.';

$GLOBALS["lang"]['The credentials username.'] = 'Las credenciales de usuario.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'La fecha y hora actuales en el formato: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'La fecha actual en formato Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'El estado actual del Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'El estado actual del descubrimiento.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'El dashboard que se mostrará por defecto para este usuario. Enlaces a <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Los datos almacenados en la base de datos no se muestran en la aplicación traducida. Dejamos los datos como es. Sin embargo, no hay nada que le detenga, el usuario, cambiando el nombre (por ejemplo) de un artículo en la base de datos a su idioma.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Los datos que ingrese se utilizarán en un <code>LIKE</code> cláusula, no (según la API) <code>equals</code> cláusula. Otro ejemplo - si usted entra <code>comput</code>, todavía devolvería todas las computadoras. Y porque estamos usando un <code>LIKE</code> cláusula, es insensible.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'El esquema de base de datos se puede encontrar en la aplicación si el usuario tiene la base de datos::read permission by going to menu: Admin - Propiedad Base de datos -';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La versión de la base de datos y la versión web son inconsistentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La fecha de expiración de la licencia.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La fecha en que el software es interrumpido por el fabricante. Por lo general sustituido por una versión más reciente. El mantenimiento todavía puede estar disponible.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La fecha en que el software ya no recibe actualizaciones y es efectivamente descontinuado por completo. El mantenimiento se suspende.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La fecha en que este artículo fue cambiado o añadido (sólo lectura). NOTA - Este es el timetamp del servidor.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La fecha/hora cuando se creó este resultado.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'El día del mes cuando esta tarea debe ejecutar (* por cada día).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'El día de la semana en que esta tarea debe ejecutar (* por cada día).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'El nivel de depuración (salidará para el comando ventana rápida). Menor significa menos salida con 0 sin salida.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'La opción de exploración predeterminada es el set UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'El idioma predeterminado asignado a cualquier usuario creado por este método.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'El dispositivo debe responder a una ping Nmap antes de que se considere en línea.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'El dispositivo dentro de Open-AudIT. Enlaces a <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'El enlace directo para el script es';

$GLOBALS["lang"]['The email address of the receiver'] = 'La dirección de correo electrónico del reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'La empresa binaria de FirstWave es necesaria para una licencia. Por favor, descargar Open-AudIT desde';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Toda la base de referencia asociada este resultado es de.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'La vulnerabilidad explotada puede afectar recursos más allá de la autoridad de seguridad del componente vulnerable. Esto normalmente significa que se cruza un límite de privilegio o confianza (por ejemplo, escapar de un contenedor al sistema operativo host).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'La vulnerabilidad explotada sólo afecta a los recursos de la misma autoridad de seguridad que el componente vulnerable. En otras palabras, las acciones del atacante permanecen dentro del límite de confianza original.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'El ID de ubicación referencia externamente. Por lo general poblada por las auditorías de Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Los campos asociados a una integración se almacenan en la base de datos como un conjunto JSON de objetos. Cada campo tiene los siguientes atributos';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La primera vez que Open-AudIT recuperó detalles de este dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'El piso del estante está situado en.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La tabla de referencia exterior. Debe ser uno de: dispositivos, ubicaciones, orgs o consultas.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'El formato de sus datos debe estar en el formulario';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'El formato utilizado para la salida a ser enviado por correo electrónico.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La columna completamente cualificada sobre la cual agrupar. NOTA: Cuando tipo = tráfico, esto representa la consulta roja id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'El nombre completamente calificado devuelto por el sistema externo. EG: para NMIS utilizamos la configuración. función Tipo.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'El table.column completamente calificado. Múltiples pueden ser proporcionados, separados por una coma (sin espacios).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La consulta SQL generada para probar esta vulnerabilidad. Este campo se puede editar para corregir la consulta según sea necesario.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'El grupo de dispositivos en los que se ejecutó la línea de referencia.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'El grupo que proporciona una lista de dispositivos para la integración. Enlaces a <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'La hora del día en que esta tarea debe ejecutar (* por cada hora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'La id del dispositivo conectado. Enlaces a <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La columna identificativa (integer) en la base de datos (leer solamente).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'El entero de gravedad.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'El valor interno, reformado en este formato.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'La dirección ip del método Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'El idioma para traducir la interfaz web al usuario.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La última fecha y hora que este artículo fue ejecutado (sólo lectura).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La última vez que Open-AudIT recuperó detalles de este dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La última vez que se ejecutó este parámetro.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La última vez que se realizó esta integración.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'El endpoint de licencia le permite seguir el número de licencias encontradas en sus dispositivos.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'El número de línea asignado por el proveedor a la línea en este extremo de la conexión.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'La ubicación del rack se encuentra en. Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'La dirección de los lugares.';

$GLOBALS["lang"]['The locations area.'] = 'La zona de localización.';

$GLOBALS["lang"]['The locations city.'] = 'La ciudad de los lugares.';

$GLOBALS["lang"]['The locations country.'] = 'El país de destino.';

$GLOBALS["lang"]['The locations district.'] = 'El distrito de las ubicaciones.';

$GLOBALS["lang"]['The locations latitude.'] = 'Los lugares latitud.';

$GLOBALS["lang"]['The locations level.'] = 'El nivel de ubicación.';

$GLOBALS["lang"]['The locations longitude.'] = 'Las ubicaciones longitud.';

$GLOBALS["lang"]['The locations phone.'] = 'El teléfono de las ubicaciones.';

$GLOBALS["lang"]['The locations postcode.'] = 'El código postal.';

$GLOBALS["lang"]['The locations region.'] = 'La región de ubicaciones.';

$GLOBALS["lang"]['The locations room.'] = 'La sala de localización.';

$GLOBALS["lang"]['The locations state.'] = 'Las ubicaciones están en el estado.';

$GLOBALS["lang"]['The locations suburb.'] = 'Los suburbios.';

$GLOBALS["lang"]['The locations suite.'] = 'La suite local.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'La lógica para la combinación de dispositivos está contenida en el archivo devices_helper.php, que en una instalación de Linux se puede encontrar aquí';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Los ajustes de permiso por defecto de máquina no otorgan permiso de activación local para la aplicación COM Server con';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'El peso físico máximo (en KGs) este rack puede contener.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'El total máximo de BTUs este rack está clasificado para.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Los atributos mínimos requeridos para atributos son';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'El minuto de la hora en que esta tarea debe ejecutar (* por cada minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'El mes del año en que esta tarea debe ejecutarse (* por cada mes).';

$GLOBALS["lang"]['The name given to this item.'] = 'El nombre dado a este artículo.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'El nombre dado a este artículo. Idealmente debería ser único.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'El nombre dado a este usuario (utilizado para iniciar sesión). Idealmente debería ser único.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'El nombre de la nube asociada (si es necesario).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'El nombre del paquete de software, auditado por Open-AudIT. Use el porcentaje de signo % como un comodín.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'El nombre del usuario que por última vez cambió o añadió este artículo (sólo lectura).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'El nombre proporcionado por el proveedor.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'La red en el formato 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'El subred de red para ejecutar el descubrimiento en.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'El nuevo Agente ejecuta una versión PowerShell del antiguo script de auditoría en preparación para la depreciación de VBScript (sí, viene).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'El número de RUs que ocupa este dispositivo.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'El número de lugares asociados. Enlaces a <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'El número de redes asociadas. Enlaces a <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'El número de dispositivos auditados en esta nube. Enlaces a <code>devices.cloud_id</code> y <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'El número de vulnerabilidades de gravedad crítica sostenidas por FirstWave (no en su base de datos).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'El número de dispositivos encontrados por este descubrimiento.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'El número de dispositivos en el grupo asociado.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'El número de dispositivos en esta nube con un estado de funcionamiento. Enlaces a <code>devices.cloud_id</code> y <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'El número de dispositivos en esta nube con un estado de parada. Enlaces a <code>devices.cloud_id</code> y <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'El número de dispositivos en esta nube. Enlaces a <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'El número de dispositivos en los que se ejecutará este parámetro. Derivado de <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'El número de dispositivos para limitar este descubrimiento.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'El número de vulnerabilidades de alta gravedad sostenidas por FirstWave (no en su base de datos).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'El número de vulnerabilidades de baja gravedad sostenidas por FirstWave (no en su base de datos).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'El número de vulnerabilidades de gravedad media sostenidas por FirstWave (no en su base de datos).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'El número de licencias compradas.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'El número de segundos para intentar comunicarse con el IP objetivo.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'El número de vulnerabilidades sin una gravedad sostenida por FirstWave (no en su base de datos).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'El offset es el recuento de dispositivos que desea devolver datos.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'El único permiso requerido / nombre de política (en nuestras pruebas) es';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La columna secundaria opcional. NOTA: Cuando tipo = tráfico, esto representa la consulta amarilla id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La tercera columna opcional. NOTA: Cuando tipo = tráfico, esto representa la consulta verde id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'El orden de recuperación de información es snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'La orientación de este dispositivo.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'La contraseña (si no utiliza el usuario que ejecuta el script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'La contraseña para el atributo dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'La contraseña utilizada para acceder al sistema externo.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'El camino al archivo o directorio.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'El camino al archivo o directorio. Los directorios deben terminar con un slash.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La profundidad física (en CM) del rack.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'La altura física (en CM) del rack.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'El peso físico (en KG) del rack en la actualidad.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'El peso físico (en KGs) del rack cuando está vacío.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'El ancho físico (en CM) del rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'La vaina (si la hay) de la que este bastidor es parte.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'El circuito de energía que este rack se conecta.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La base de datos principal sobre la cual basar este widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'El método principal de autorización (lo que un usuario puede hacer) se basa ahora en los roles de los usuarios. Los roles se definen como admin, org_admin, reportero y usuario por defecto. Cada papel tiene un conjunto de permisos (Crear, Leer, Actualizar, Eliminar) para cada punto final. Los papeles estándar que se envían deben cubrir el 99,9% de los casos de uso. La capacidad de definir funciones adicionales y editar funciones existentes está habilitada en Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'El identificador de proceso de este artículo de la cola.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'El proceso que se utilizó último para recuperar detalles sobre el dispositivo';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'El objetivo de esta página de licencias es enumerar los productos y licencias incluidos en productos comerciales de Firstwave, incluidos los productos basados en obras de código abierto. Open-AudIT está licenciado en Firstwave bajo AGPLv3 o más tarde con la funcionalidad Enterprise y Professional con licencia bajo términos comerciales. Open-AudIT cuando se descarga desde FirstWave puede incluir las siguientes bibliotecas y proyectos, que se suministran sin modificar y con licencia como se indica:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La consulta que proporciona una lista de dispositivos para la integración. Enlaces a <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'El número de activos de rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'La etiqueta de activos de rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'El código de barras.';

$GLOBALS["lang"]['The rack model.'] = 'El modelo de rack.';

$GLOBALS["lang"]['The rack serial.'] = 'La serie de racks.';

$GLOBALS["lang"]['The rack series.'] = 'La serie de racks.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'El rack en el que se encuentra este dispositivo. Enlaces a <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'The recommended process of addressing and fixing identified security vulnerabilities. Esto normalmente implica aplicar parches, actualizaciones u otras medidas para eliminar el riesgo planteado por las vulnerabilidades.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'La notación de dominio regular de su directorio. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Las propiedades solicitadas deben estar en una lista separada por coma. Las propiedades deben estar completamente calificadas - es decir, sistema.hostname (no sólo nombre de host).';

$GLOBALS["lang"]['The result of the command.'] = 'El resultado del comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La habitación en la que se encuentra el estante.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La fila en la que se encuentra el estante.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'La búsqueda de grupo en el servidor LDAP falló. Compruebe los registros del servidor LDAP. ¿Ha creado estos grupos (para roles y orgs) en el servidor LDAP y les ha asignado usuarios LDAP?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La clave secreta utilizada en conjunto con la tecla AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La fecha de final de vida del software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La fecha de terminación del servicio.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La columna de base de datos específica de la tabla de bases de datos especificada.';

$GLOBALS["lang"]['The specific database table.'] = 'La tabla de bases de datos específica.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Las opciones estándar de sincronización de Nmap. Anteriormente establecido en T4 (agresivo).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Las opciones estándar de sincronización de Nmap. Usualmente utilizamos -T4 (Aggressive) ya que esto se recomienda para una banda ancha decente o conexión a ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'El estado de esta integración';

$GLOBALS["lang"]['The status of this queued item.'] = 'El estado de este artículo demandado.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Los pasos que figuran a continuación esbozan el proceso.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'El objetivo IP se refiere a (si existe).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'El ordenador objetivo para auditar. \" significa localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'La plantilla para el enlace que se generará por línea de resultado.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'El texto para la parte inferior del gráfico en un gráfico de línea (sólo).';

$GLOBALS["lang"]['The text that is displayed.'] = 'El texto que se muestra.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Después de eso, esta tarea debería funcionar. Por ejemplo, ejecutar una tarea después del 1 de junio de 2017 a las 10am, establecerlo a <code>2017-06-01 09:59:00</code>. Este valor debe ser cero acolchado (es decir, 09, no 9). Este valor predetermina a <code>2000-01-01 00:00:00</code> lo que significa por defecto, una tarea programada se ejecutará en el próximo tiempo de ejecución programado.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Los 10, 100 o 1000 (o ninguno) puertos TCP superior comúnmente en uso según Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Los puertos UDP 10, 100 o 1000 (o ninguno) más altos normalmente en uso según Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'La salida total de BTU por este rack.';

$GLOBALS["lang"]['The type of device.'] = 'El tipo de dispositivo.';

$GLOBALS["lang"]['The type of organisation.'] = 'El tipo de organización.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'El tipo de rack (computa, potencia, red, etc.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'El tipo de tarea a ejecutar. Uno de: base, punto de referencia, descubrimiento en la nube, descubrimiento, integración, informe, consulta.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'El tipo de integración (generalmente nombrado por el sistema externo).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'El estado no contaminado significa que un puerto es accesible, pero Nmap no puede determinar si está abierto o cerrado. Sólo el escáner ACK, que se utiliza para mapear reglas de cortafuegos, clasifica los puertos en este estado. Escanear puertos sin filtrar con otros tipos de escaneos como el análisis de ventana, el escaneo SYN o el escaneo FIN, puede ayudar a resolver si el puerto está abierto.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'El identificador único de este servidor.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'La cuenta de usuario que utiliza este colector. Enlaces a <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'El usuario en Active Directory / OpenLDAP debe ser miembro directo de los grupos de Open-AudIT necesarios para Roles y Orgs. Un miembro de un grupo que es miembro de otro grupo que es miembro del grupo Open-AudIT no funcionará.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'El usuario está en LDAP y sus credenciales son válidas, pero no está en ninguno de los grupos de Open-AudIT LDAP para Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'El usuario está en LDAP y sus credenciales son válidas, pero no está en ninguno de los grupos de Open-AudIT LDAP para roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'El usuario está en LDAP y sus credenciales son válidas, pero no está en ninguno de los grupos de Open-AudIT LDAP requeridos.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'El usuario está en el grupo LDAP que coincide con este Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'El usuario está en el grupo LDAP que coincide con este Role.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'El usuario no está en el grupo LDAP que coincide con este Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'El usuario no está en el grupo LDAP que coincide con este Role.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'El usuario que se especificó existe en LDAP, pero Open-AudIT no está configurado para consumir los grupos LDAP para roles y que el usuario no existe dentro de Open-AudIT. Cualquier opción <i>Use LDAP para roles</i> en el Open-AudIT LDAP Pantalla servidor o crear este usuario dentro de Open-AudIT y asignar roles y orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'El nombre de usuario (si no utiliza el usuario que ejecuta el script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'El nombre de usuario utilizado para acceder al sistema externo.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Los datos de los usuarios no fueron recuperados de LDAP. Compruebe los registros del servidor LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Los datos de los usuarios fueron recuperados de LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'La dirección de correo electrónico de los usuarios.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Las horas habituales de operación en este sitio.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'El valor asignado al artículo.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'El valor que se almacena para este artículo en particular.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'El nombre del vendedor según las entradas del CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'El vendedor tomado del CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'El directorio web en el host que Open-AudIT está instalado (requiere una barra de seguimiento).';

$GLOBALS["lang"]['The widget at position '] = 'El widget en posición ';

$GLOBALS["lang"]['The width of this device.'] = 'El ancho de este dispositivo.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Sus OrgIDs y sus descendientes';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Sus OrgIDs sólo';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Sus OrgIDs, ascendientes y descendientes';

$GLOBALS["lang"]['Then'] = 'Entonces...';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'A continuación, crear un nuevo método Auth en Open-AudIT yendo al menú Admin - título Métodos Auth - titulado Crea Auth. Proporcionar un nombre y establecer el <i>Tipo</i> a Entrar.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'A continuación, puede utilizar Open-AudIT (sin soporte) para recibir datos de auditoría directamente de los clientes. Discovery <strong>fracasará</strong>, pero si no estás usando Discovery (la característica principal Open-AudIT fue diseñada alrededor), todavía puedes obtener datos de dispositivos. Necesitaría ejecutar los scripts de auditoría directamente en los clientes usando cron, o utilizar la función Windows Agent (Enterprise solamente).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Hay un botón para exportar a JSON. Esto mostrará sólo la tabla de dispositivos de atributos. Para exportar el dispositivo con todas las tablas de componentes asociadas, vea los detalles del dispositivo, a continuación, añadir';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'No es absolutamente necesario editar manualmente cada dispositivo individual.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'No hay necesidad de hacer nada si está ejecutando Open-AudIT en un servidor Linux.<br/><br/>Los clientes de Windows están bien y no requieren ninguna acción especial, sin embargo.... para habilitar esta característica el script de auditoría debe ejecutarse localmente en el sistema de Windows objetivo. No se puede ejecutar remotamente como lo hacemos con las llamadas WMI al ejecutar el script de auditoría en una máquina de Windows, mientras que apunta a una segunda máquina de Windows. Para ello necesitamos copiar el script de auditoría a la máquina de Windows objetivo y luego ejecutarlo. Desafortunadamente, la cuenta de servicio que Apache ejecuta es la cuenta del Sistema Local. Esta cuenta no tiene acceso a recursos remotos (basados en redes). Para trabajar en torno a esta cuestión, el servicio debe ejecutarse bajo otra cuenta. Es más fácil utilizar la cuenta de Administrador local, pero puede probar cualquier cuenta que le guste mientras tenga los privilegios necesarios. La cuenta del Sistema Local tiene tanto acceso local como la cuenta del Administrador local.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Estos son sólo ejemplos. Es posible que necesite ajustar estos atributos para adaptarse a su LDAP particular.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Estos parámetros le permiten auditar sólo lo que es útil y relevante para usted, ahorrando tiempo de procesamiento y permitiéndole descubrir su red de forma ordenada.';

$GLOBALS["lang"]['Thing'] = 'Thing';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Piense en mail.domain1.com y mail.domain2.com - el mismo nombre de host.';

$GLOBALS["lang"]['Third'] = 'Tercera';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Este CVE será recuperado y sobreescribirá el CVE existente si existe.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Este Org no tiene grupo AD especificado. Compruebe los detalles de roles dentro de Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Este Org no tiene grupo AD especificado. Compruebe los detalles de roles dentro de Open-AudIT. <span class=\'\"confluence-link\"\'>¿Ha creado estos grupos (para orgs) en el servidor LDAP y les ha asignado usuarios LDAP?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Este papel no tiene grupo AD especificado. Compruebe los detalles de roles dentro de Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Este atributo se almacena como un objeto JSON. Es la lista de todas las colecciones y contiene el nombre de la colección junto con <code>c</code>, <code>r</code>, <code>u</code> y,o <code>d</code> que representan crear, leer, actualizar y eliminar. Estas son las acciones que un usuario puede realizar sobre los elementos de esa colección particular.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Esto puede ser un varchar (un campo de texto), una lista (una lista de valores que se pueden seleccionar) o una fecha.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Este código se basa en el gran trabajo realizado por el';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Este coleccionista identificador universalmente único.';

$GLOBALS["lang"]['This column is required by'] = 'Esta columna es requerida por';

$GLOBALS["lang"]['This column is required by '] = 'Esta columna es requerida por ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Esta descripción es auto-poblada y debe ser idealmente dejado como-es.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Este endpoint le permite añadir las conexiones que forman parte de su infraestructura de red, le permite personalizar una variedad de atributos, especificar dónde se encuentra esta conexión y la organización que pertenece.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Este error indica que SMB1 ha sido desactivado o eliminado de la máquina de destino. Esto es normal para la versión moderna de Windows y sólo verá este mensaje cuando el intento de conexión SMB2 ha fallado. Si la conexión SMB2 falla, intentamos SMB1 para permitir el descubrimiento en versiones antiguas de Windows. Si el objetivo máquina de Windows <i>es</i> ejecutar una antigua versión de Windows, es probable que sus credenciales han fallado. En ese caso, vea';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Este error indica que no hay suficiente memoria virtual o cuota de archivo de paging está disponible para completar la operación especificada. Deberías intentarlo más tarde.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Este error indica que las credenciales utilizadas son incorrectas, no existen o no tienen suficientes privilegios para conectarse remotamente a la máquina de Windows objetivo. Usted debe verificar las credenciales y comprobar lo siguiente.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Este ejemplo crea una lista de todos los módulos marcados como';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Este ejemplo crea una lista de dispositivos y los puertos abiertos, protocolos y programas encontrados por el escáner NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Este ejemplo crea una lista de dispositivos donde los campos Función o Descripción están en blanco O la fecha de compra es el predeterminado.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Esta consulta de ejemplo recupera una lista de dispositivos de más de 3 años. La consulta utiliza hoy';

$GLOBALS["lang"]['This example uses'] = 'Este ejemplo utiliza';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Esta característica requiere un Profesional o una licencia Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Esta característica, ya que tiene la capacidad de afectar los dispositivos de destino más de lo habitual debe estar activada manualmente. Para habilitar esta función, cambie el elemento de configuración_ejecutables a <i>Sí.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Este archivo le dice a Linux que evalúe la aplicación para determinar si hay alguna tarea programada que debe ejecutarse.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Este formulario proporciona una manera sencilla de empezar a descubrir los dispositivos en su red. Para más (mucho más) opciones detalladas, puede crear individualmente';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Así también funciona PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Esta es una opción de configuración opcional, habilitada mediante la configuración global Discover_use_org_id_match.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Esta es generalmente la columna primaria, a menos que se configura de otra manera. NOTA: Cuando tipo = tráfico, esto representa el texto secundario.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Esto es probablemente debido a que MySQL está fuera de tiempo. MySQL usa el tiempo de los dispositivos host. Puedes comprobarlo.';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Esto es establecido por los usuarios y por lo tanto, aunque debería ser globalmente único, ciertamente no hay garantía de esto.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Este es el directorio donde almacenamos cualquier accesorio a dispositivos.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Esto debe ser utilizado como el primer punto de llamada cuando se resuelven problemas Open-AudIT. Puede hacer clic en el botón Exportar en la parte superior derecha para recuperar esto como un archivo JSON (para ser añadido al ticket de soporte / correo electrónico.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Esta cuestión está siendo investigada.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Este artículo debe coincidir con el valor del atributo seleccionado o contiene el ID de la consulta a utilizar.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Este artículo debe coincidir con el valor del atributo seleccionado.';

$GLOBALS["lang"]['This license expires on'] = 'Esta licencia expira en';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Este permiso de seguridad se puede modificar utilizando la herramienta administrativa de Servicios de Componente.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Esto debe ser comentado después de la solución de problemas como modo de depuración generará un montón de registros en el disco sin ningún beneficio.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Esto debería ser globalmente único, pero he visto casos donde no lo es.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Esto debe ajustarse a 1 o a la altura del rack.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Este debe ser el nombre de campo plenamente calificado en la base de datos. Actualmente se admiten columnas del sistema, campos y tablas de credenciales. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Este estado se utiliza cuando Nmap no puede determinar si un puerto está cerrado o filtrado. Sólo se utiliza para el escáner de idle IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Esto auto-poblará.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Esto reducirá considerablemente el escaneo de descubrimiento.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Esto eliminará las filas actuales en las';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Esto detendrá permanentemente esta licencia.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Esto le mostrará el formulario Bulk Edit. Cualquier atributo que establezca en este formulario será aplicado a todos los dispositivos seleccionados. Puede establecer múltiples atributos a la vez.';

$GLOBALS["lang"]['Thursday'] = 'Jueves';

$GLOBALS["lang"]['time_caption'] = 'Captación del tiempo';

$GLOBALS["lang"]['Time Caption'] = 'Captación del tiempo';

$GLOBALS["lang"]['time_daylight'] = 'Hora del día';

$GLOBALS["lang"]['Time Daylight'] = 'Hora del día';

$GLOBALS["lang"]['Time to Execute'] = 'Hora de ejecutar';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout por Target. Espera X segundos para una respuesta objetivo.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Horas';

$GLOBALS["lang"]['Timing'] = 'Horas';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Título';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'A un nuevo archivo llamado .env (en el mismo directorio). Ahora edita ese nuevo archivo y uncomment (remove el #) la línea de abajo (línea 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Para ejecutar la consulta, anexa un /ejecute, por lo tanto /open-audit/index.php/queries/{$id}/ejecute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Para auditar una máquina, debe tener credenciales y acceso a nivel de administrador.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Para auditar una máquina remota en un dominio Active Directory, su usuario suministrado (o si no se proporciona, el usuario que ejecuta el script) debe ser miembro del grupo Administradores de máquinas (o subgrupo).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Para auditar una máquina remota que no está en un dominio, debe utilizar la cuenta Administradora (no <i>an</i> Cuenta de administración, <i>el</i> Cuenta Administradora) en el PC objetivo. #1 y #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Para auditar localhost, se ignoran las credenciales suministradas y la conexión se hace utilizando los detalles del usuario que ejecuta el script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Para comparar software revisamos el nombre y la versión. Debido a que los números de versión no son todos estandarizados en formato, cuando recibimos un resultado de auditoría creamos un nuevo atributo llamado software_padded que almacenamos en la base de datos junto con el resto de los detalles de software para cada paquete. Por esta razón, las bases de referencia que utilizan políticas de software no funcionarán cuando se ejecuten contra un dispositivo que no haya sido auditado por 1.10 (por lo menos). Las políticas de software pueden probar contra la versión <i>igual a</i>, <i>más grande que</i> o <i>igual o superior a</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Para crear una nueva entrada haga clic en el botón Crear en la esquina superior derecha.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Para crear un recurso, usted debe POST los datos necesarios.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Para permitir que una máquina remota (Vista o superior) sea auditada que no esté en un dominio, por una cuenta en el grupo Administradores, aparte de la cuenta Administradora actual, véase la sección siguiente en UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Para habilitar esto, crear un nuevo artículo de Auth yendo al menú Admin - título Auth - Crear método Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Para ejecutar el script de Windows powershell, abra un prompt de comando como Administrador y utilice el siguiente comando';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Para ejecutar el script de auditoría, abra un terminal y utilice el siguiente comando';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Para filtrar por un valor de propiedad, utilice el nombre de la propiedad. Los operadores que deben preceder al valor son';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Para instalar Nmap en Windows, visite la página Nmap en';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Para hacer el cambio, siga los siguientes pasos.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Para recuperar la identificación del arrendatario. Abra el portal Azure haga clic en Azure Active Directory, Propiedades y el ID de arrendatario se muestra como su ID de directorio - no me culpe por el desajuste de nombre, así es como Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Para recuperar su llave, inicie sesión en la Consola AWS y seleccione su nombre de usuario, luego Mi credenciales de seguridad.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Para devolver un elemento componente específico.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Para devolver todos los elementos para un tipo de compnent para un dispositivo específico.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Para devolver todos los elementos para un tipo de componente. Si quisiera todo el software que usaría';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Para revertir, insertar un menos, por lo tanto';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Para ejecutar el script de prueba en el PC de Windows objetivo';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Para seleccionar los dispositivos a integrar, utilizamos nmis_manage = y, pero puede que le guste (por ejemplo) tipo = router. También puede utilizar un grupo o consulta si prefiere algo más complejo.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Para ordenar por una columna de base de datos, utilice';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Para utilizar esta función Enterprise, primero necesita crear su usuario en Open-AudIT según sea habitual. No es necesario asignar una contraseña. Tienes que asignar Roles y Orgs. El nombre de usuario en Open-AudIT debe coincidir con la entrada <i>nombre de usuario preferido</i> atributo. No hay necesidad de un nombre completo o correo electrónico - estos serán poblados de la entrada. Si no conoces a tus usuarios <i>nombre de usuario preferido</i>No temas. Puede crear el nuevo método Auth en Open-AudIT y la aplicación Enterprise en Entra y cuando un usuario intenta iniciar sesión en Open-AudIT sin un usuario preexistente, revise los registros y verá su <i>nombre de usuario preferido</i> conectado para su compromiso.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Para utilizar esta función Enterprise, primero necesita crear su usuario en Open-AudIT según sea habitual. No es necesario asignar una contraseña. Tienes que asignar Roles y Orgs. El nombre de usuario en Open-AudIT debe coincidir con el OKTA <i>nombre</i> atributo. No hay necesidad de un nombre completo o correo electrónico - estos serán poblados de OKTA. Si no conoces a tus usuarios <i>nombre<i>No temas. Puede crear el nuevo Auth Menthod en Open-AudIT y la aplicación en OKTA y cuando un usuario intenta iniciar sesión en Open-AudIT sin un usuario preexistente, revise los registros y verá su <i>nombre<i> conectado para su compromiso.<br/><p>A continuación, crear un nuevo método Auth en Open-AudIT yendo al menú Admin - título Métodos Auth - titulado Crea Auth. Proporcionar un nombre y establecer el <i>Tipo</i> a Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Para utilizar esta función debe habilitar los elementos de configuración match_mac (para AWS) y match_hostname (para Azure). Esto se hará automáticamente la primera vez que se ejecuta un descubrimiento en la nube. Para más información sobre Open-AudITs reglas de juego ver AQUÍ: Dispositivos de emparejamiento';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Para ver los detalles de una consulta, la estructura URL estándar de /open-audit/index. php/queries/{$id} should be used.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Estilo de barra de herramientas';

$GLOBALS["lang"]['Toolbar Style'] = 'Estilo de barra de herramientas';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Puertos';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Puertos. Los 10, 100, 1000 puertos para escanear según las opciones de "puertos superiores" de Nmaps.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Puertos. Los 10, 100, 1000 puertos para escanear según las opciones de "puertos superiores" de Nmaps.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicional chino';

$GLOBALS["lang"]['Traffic Light'] = 'Tráfico de luz';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad y Tabago';

$GLOBALS["lang"]['Troubleshooting'] = 'Solución de problemas';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Solución de problemas LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Prueba Open-AudIT Enterprise, sin límite de tiempo. Todas las características de Enterprise. Limitado a 20 dispositivos.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Pruebe todas las últimas características con una licencia de dispositivo GRATIS 100 de Open-AudIT Enterprise. Por favor lea el ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Intente iniciar sesión utilizando un usuario de LDAP. Estamos asumiendo que esto fallará (otra vez, ¿por qué sigues leyendo esto?). A continuación, comentar la línea desde el archivo superior.';

$GLOBALS["lang"]['Tuesday'] = 'Martes';

$GLOBALS["lang"]['Tunisia'] = 'Túnez';

$GLOBALS["lang"]['Turkey'] = 'Turquía';

$GLOBALS["lang"]['Turkish'] = 'Turco';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistán';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Islas Turcas y Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Nivel de Tx';

$GLOBALS["lang"]['Tx Level'] = 'Nivel de Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Perfil de Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Perfil de Tx';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipo: Esto puede ser un varchar (un campo de texto) o una lista (una lista de valores que se pueden seleccionar).';

$GLOBALS["lang"]['Types of Networks'] = 'Tipos de redes';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ucrania';

$GLOBALS["lang"]['Ukrainian'] = 'Ucrania';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Auditoría de la etapa 1 (examen de la documentación)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Auditoría de la etapa 2 (examen de la ejecución)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Análisis en curso';

$GLOBALS["lang"]['Unfiltered'] = 'Infiltrados';

$GLOBALS["lang"]['uninstall'] = 'Desinstalación';

$GLOBALS["lang"]['Uninstall'] = 'Desinstalación';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Desinstalar el agente';

$GLOBALS["lang"]['United Arab Emirates'] = 'Emiratos Árabes Unidos';

$GLOBALS["lang"]['United Kingdom'] = 'Reino Unido';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Islas Menores de Estados Unidos';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Islas Vírgenes';

$GLOBALS["lang"]['United States of America'] = 'Estados Unidos de América';

$GLOBALS["lang"]['Unknown'] = 'Desconocido';

$GLOBALS["lang"]['unlock_pin'] = 'Desbloquear Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Desbloquear Pin';

$GLOBALS["lang"]['Unscheduled'] = 'No programado';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Sin usar a 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Desuso.';

$GLOBALS["lang"]['Update'] = 'Actualización';

$GLOBALS["lang"]['update_external_count'] = 'Actualizar Cuenta Externa';

$GLOBALS["lang"]['Update External Count'] = 'Actualizar Cuenta Externa';

$GLOBALS["lang"]['update_external_from_internal'] = 'Actualización externa desde el interior';

$GLOBALS["lang"]['Update External From Internal'] = 'Actualización externa desde el interior';

$GLOBALS["lang"]['update_internal_count'] = 'Actualización de la cuenta interna';

$GLOBALS["lang"]['Update Internal Count'] = 'Actualización de la cuenta interna';

$GLOBALS["lang"]['update_internal_from_external'] = 'Actualización interna desde el exterior';

$GLOBALS["lang"]['Update Internal From External'] = 'Actualización interna desde el exterior';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Actualizar dispositivos NMIS de Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Actualización Open-AudIT Dispositivos de ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Actualización Open-AudIT Dispositivos del NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Actualizar vulnerabilidades';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Actualizar un atributo de una entrada {colección}.';

$GLOBALS["lang"]['Update attributes'] = 'Atributos de actualización';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Actualizado cada vez que el descubrimiento se ha ejecutado con IPs detectadas para responder.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Actualizado cada vez que el descubrimiento ha sido ejecutado con IPs que han sido escaneados por Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Actualizado cada vez que el descubrimiento ha sido ejecutado con dispositivos que pudimos auditar.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Actualizado cada vez que el descubrimiento ha sido ejecutado con dispositivos que hemos podido preguntar.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Actualizado cada vez que el descubrimiento ha sido ejecutado.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Actualizado cada vez que el descubrimiento ha sido ejecutado.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Actualizado cada vez que el descubrimiento ha completado la ejecución.';

$GLOBALS["lang"]['Updating'] = 'Actualización';

$GLOBALS["lang"]['Upgrade'] = 'Actualización';

$GLOBALS["lang"]['Upload an audit result file'] = 'Subir un archivo de resultado de auditoría';

$GLOBALS["lang"]['Upper Case'] = 'Caso superior';

$GLOBALS["lang"]['uptime'] = 'Hora';

$GLOBALS["lang"]['Uptime'] = 'Hora';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, República Oriental';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Uso';

$GLOBALS["lang"]['Use'] = 'Uso';

$GLOBALS["lang"]['use_authentication'] = 'Uso Autenticación';

$GLOBALS["lang"]['Use Authentication'] = 'Uso Autenticación';

$GLOBALS["lang"]['use_authorisation'] = 'Autorización de uso';

$GLOBALS["lang"]['Use Authorisation'] = 'Autorización de uso';

$GLOBALS["lang"]['Use Proxy'] = 'Use Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Use Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detección de la versión de servicio';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Usar la detección de la versión de servicio. Cuando se detecta un puerto detectado como abierto, si se establece a <i>Sí.</i>, Nmap buscará el dispositivo objetivo en un intento de determinar la versión del servicio que se ejecuta en este puerto.<br/>Esto puede ser útil cuando se identifican dispositivos no clasificados. Esto no fue usado previamente.';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Usar un <i>Método de registro</i> OIDC - OpenID Connect y un <i>Tipo de aplicación</i> de Web Application. Haga clic <i>Siguiente</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Uso para la autenticación';

$GLOBALS["lang"]['Use for Roles'] = 'Uso para funciones';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Utilice las opciones de instalación estándar cuando se muestre y haga clic en <i>Estoy de acuerdo.</i>, <i>Siguiente</i> y <i>Instala</i> botones para instalar Nmap.';

$GLOBALS["lang"]['used'] = 'Usado';

$GLOBALS["lang"]['Used'] = 'Usado';

$GLOBALS["lang"]['used_count'] = 'Conde usado';

$GLOBALS["lang"]['Used Count'] = 'Conde usado';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Usado sólo por OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Utilizado internamente al descubrir un solo dispositivo.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Utilizado internamente al descubrir un solo dispositivo. Enlaces a <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Utilizado cuando los servidores LDAP han sido configurados para poblar los datos de los usuarios - esto incluye los Orgs a los que tienen acceso. Si un usuario está en este grupo LDAP, se les asigna este org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Utilizado cuando los servidores LDAP han sido configurados para poblar los datos de los usuarios - esto incluye los roles que se asignan. Si un usuario está en este grupo LDAP, se les asigna este papel.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Se utiliza cuando se busca OpenLDAP para combinar un usuario uid a los miembros de grupos. Default of <code>memberUid</code>. Usado sólo por OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Utilizado con integraciones y aplicaciones de monitoreo de FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Utilizado con integraciones y aplicaciones de monitoreo de FirstWave. Set to y if working SNMP detectado por descubrimiento.';

$GLOBALS["lang"]['user'] = 'Usuario';

$GLOBALS["lang"]['User'] = 'Usuario';

$GLOBALS["lang"]['User DN'] = 'Usuario DN';

$GLOBALS["lang"]['user_group'] = 'Grupo de usuarios';

$GLOBALS["lang"]['User Group'] = 'Grupo de usuarios';

$GLOBALS["lang"]['user_id'] = 'ID de usuario';

$GLOBALS["lang"]['User ID'] = 'ID de usuario';

$GLOBALS["lang"]['user_interaction'] = 'Interacción del usuario';

$GLOBALS["lang"]['User Interaction'] = 'Interacción del usuario';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atributo de miembros del usuario';

$GLOBALS["lang"]['user_name'] = 'Nombre del usuario';

$GLOBALS["lang"]['User Name'] = 'Nombre del usuario';

$GLOBALS["lang"]['User Policies'] = 'Políticas de usuario';

$GLOBALS["lang"]['Username'] = 'Nombre de usuario';

$GLOBALS["lang"]['username'] = 'Nombre de usuario';

$GLOBALS["lang"]['users'] = 'Usuarios';

$GLOBALS["lang"]['Users'] = 'Usuarios';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Los usuarios trabajan de forma similar a Netstat Ports. Si un usuario existe con un nombre, estado y datos de contraseña (cambiable, expira, requerido) entonces la política pasa.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Usuarios, Roles y Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Usa el marco de PHP CodeIgniter.';

$GLOBALS["lang"]['Using'] = 'Uso';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Usando Entra para Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Utilizando LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Usando OKTA para Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Utilizar la opción formato es útil cuando usa un navegador web pero desea ver el resultado en formato JSON. Agregar formato=json logra esto. Normalmente un navegador web establecerá su encabezado de aceptación a HTML, por lo que en ese caso, devolvemos la página renderizada. Usando una API para recuperar JSON debe establecer el encabezado de aceptación';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Por lo general Mbs, desde la ubicación A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Por lo general Mbs, desde la ubicación B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Por lo general Mbs, a Localización A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Por lo general Mbs, a Localización B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Por lo general debe establecerse a 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistán';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'ID de VLAN';

$GLOBALS["lang"]['valid_from'] = 'Válido';

$GLOBALS["lang"]['Valid From'] = 'Válido';

$GLOBALS["lang"]['valid_from_raw'] = 'Válido de Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Válido de Raw';

$GLOBALS["lang"]['valid_to'] = 'Válido';

$GLOBALS["lang"]['Valid To'] = 'Válido';

$GLOBALS["lang"]['valid_to_raw'] = 'Válido para Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Válido para Raw';

$GLOBALS["lang"]['Valid Values'] = 'Valores válidos';

$GLOBALS["lang"]['value'] = 'Valor';

$GLOBALS["lang"]['Value'] = 'Valor';

$GLOBALS["lang"]['Value Types'] = 'Tipos de valor';

$GLOBALS["lang"]['values'] = 'Valores';

$GLOBALS["lang"]['Values'] = 'Valores';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Valores: En el caso de un <i>lista</i> campo, esta debe ser una lista separada por coma de valores válidos.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['Various'] = 'Varios';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor Report'] = 'Vendor Report';

$GLOBALS["lang"]['vendors'] = 'Vendedores';

$GLOBALS["lang"]['Vendors'] = 'Vendedores';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Versión';

$GLOBALS["lang"]['version_padded'] = 'Versión acolchada';

$GLOBALS["lang"]['Version Padded'] = 'Versión acolchada';

$GLOBALS["lang"]['version_raw'] = 'Versión Raw';

$GLOBALS["lang"]['Version Raw'] = 'Versión Raw';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamita';

$GLOBALS["lang"]['View'] = 'Ver';

$GLOBALS["lang"]['View All'] = 'Ver todos';

$GLOBALS["lang"]['View Details'] = 'Ver detalles';

$GLOBALS["lang"]['View Device'] = 'Ver dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Ver Descubrimiento';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['View Racks'] = 'Ver Racks';

$GLOBALS["lang"]['View the'] = 'Ver la';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Ver el descubrimiento en cuestión, haga clic en el botón Soporte en la barra de herramientas superior derecha. Esto proporcionará la configuración de descubrimiento, elementos de configuración, la lista de dispositivos de descubrimiento, así como los registros para este descubrimiento en particular.';

$GLOBALS["lang"]['View the release notes on the'] = 'Ver las notas de la versión';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtual Private Network';

$GLOBALS["lang"]['Virtual private network'] = 'Red privada virtual';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualización';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visita nuestro canal de YouTube para vídeos instructivos.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

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

$GLOBALS["lang"]['vm_server_name'] = 'Nombre del servidor Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nombre del servidor Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerabilidad';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerabilidad';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilidades';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilidades';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnerabilidad y resultados';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilidades publicadas inicialmente antes del 1 de enero de 2025 (por defecto). No tenemos sentido en devolver vulnerabilidades de años anteriores. Esto se puede cambiar en la configuración.';

$GLOBALS["lang"]['vulnerability_id'] = 'ID de vulnerabilidad';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID de vulnerabilidad';

$GLOBALS["lang"]['Vulnerability Status'] = 'Estado de vulnerabilidad';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - Al crear una base de referencia usando políticas de software, en la actualidad Centos y RedHat empaquetan el núcleo utilizando los nombres <i>kernel</i> y <i>kernel-devel</i>. Puede haber múltiples paquetes con este nombre y diferentes versiones simultáneamente instaladas. Las distribuciones basadas en Debian usan nombres como <i>linux-image-3.13.0-24-generic</i>, note el número de versión está incluido en el nombre del paquete. Debido a que los sistemas operativos basados en RedHat utilizan este formato y posteriormente tienen múltiples nombres de paquetes idénticos con diferentes versiones que actualmente excluimos <i>kernel</i> y <i>kernel-devel</i> de las políticas de software. Esto puede abordarse en una actualización futura.';

$GLOBALS["lang"]['WHERE'] = 'Donde';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Requisitos para las credenciales WMI';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Espera a que se complete, luego pega en esta siguiente línea para instalar el Agente.';

$GLOBALS["lang"]['wall_port'] = 'Puerto de pared';

$GLOBALS["lang"]['Wall Port'] = 'Puerto de pared';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis y Futuna';

$GLOBALS["lang"]['Want to know more?'] = '¿Quieres saber más?';

$GLOBALS["lang"]['Warning'] = 'Advertencia';

$GLOBALS["lang"]['warranty'] = 'Garantía';

$GLOBALS["lang"]['Warranty'] = 'Garantía';

$GLOBALS["lang"]['warranty_duration'] = 'Garantía Duración';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantía Duración';

$GLOBALS["lang"]['warranty_expires'] = 'Expires de garantía';

$GLOBALS["lang"]['Warranty Expires'] = 'Expires de garantía';

$GLOBALS["lang"]['warranty_status'] = 'Estado de garantía';

$GLOBALS["lang"]['Warranty Status'] = 'Estado de garantía';

$GLOBALS["lang"]['warranty_type'] = 'Tipo de garantía';

$GLOBALS["lang"]['Warranty Type'] = 'Tipo de garantía';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'También tenemos una opción para Ping Before Scan (importante para routers con caches ARP de larga vida). Esta es generalmente una buena idea.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'También tenemos nuestros elementos de acción (que se ejecutan en el orden siguiente):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'A menudo se nos hace esta pregunta y la respuesta más definitivamente es <i>Depende.</i>. Depende del número de IPs a escanear, la velocidad de conexión de red, la velocidad de los dispositivos que se están escaneando, el tipo de dispositivos que se están escaneando, el número de diferentes credenciales que se están probando y la velocidad del servidor Open-AudIT. No tenemos una calculadora que nos permita introducir esas variables y devolver un valor. Es simplemente demasiado complejo. Generalmente limito mis descubrimientos a 256 direcciones IP - es decir, una subred /24. Hemos tenido clientes escanear subnets /16 (65k direcciones) y funciona - pero puede tardar mucho tiempo. Estás mucho mejor sin escanear en bloques /24. Si simplemente no sabes cuáles son tus rangos de direcciones, entonces este es un buen caso para un descubrimiento de semillas.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Tenemos instrucciones más detalladas';

$GLOBALS["lang"]['We have tests for:'] = 'Tenemos pruebas para:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Esperamos que encuentres Open-AudIT tan útil como nosotros.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Inicialmente configuramos la lista predeterminada de scripts con las opciones predeterminadas. La lista de script es visible en /scripts. Estos scripts predeterminados no se pueden eliminar. Puede crear scripts adicionales para su uso por usted según sea necesario. Su script estará basado en uno de los scripts existentes y tendrá opciones personalizadas aplicadas. Los scripts se pueden descargar de la página de lista en el menú: Discover - Conf Scripts de auditoría - Lista de scripts de auditoría.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Necesitamos algunas credenciales para poder hablar eficazmente con los dispositivos de su red.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Sólo enviamos la cantidad mínima de datos y nada de naturaleza sensible. Enviamos nuestros datos de licencia (nombre, tipo, etc), nuestros datos de aplicación (nombre, versión, plataforma, zona horaria, etc), cualquier error registrado, un recuento de tipos de dispositivo y un recuento de las características utilizadas. <i>Cualquier</i> el entorno tiene dispositivos y esa es la única pieza de sus datos que enviamos. Y sólo el tipo de dispositivo y una cuenta. No el fabricante, no el modelo. No mandamos nada especial. No hay redes. No hay direcciones IP. No hay versiones de OS. Sin nombres de software. Los campos UUID y Server están codificados por sha256 (así que no sabemos el valor). Enviamos sólo los datos que necesitamos para mejorar el producto. Esperamos que vea el beneficio para todos nosotros con esta información. Nos proporcionará orientación guiada sobre dónde enfocar mejoras y nuevas características en el producto.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Tendemos a utilizar la extensión de Google Chrome llamado Postman para probar las consultas reales inquietantes. Le gustaría instalar y probar con eso.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Rutas de aplicación web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Sitio web';

$GLOBALS["lang"]['Wednesday'] = 'Miércoles';

$GLOBALS["lang"]['weight'] = 'Peso';

$GLOBALS["lang"]['Weight'] = 'Peso';

$GLOBALS["lang"]['weight_current'] = 'Peso actual';

$GLOBALS["lang"]['Weight Current'] = 'Peso actual';

$GLOBALS["lang"]['weight_empty'] = 'Peso Empty';

$GLOBALS["lang"]['Weight Empty'] = 'Peso Empty';

$GLOBALS["lang"]['weight_max'] = 'Peso Max';

$GLOBALS["lang"]['Weight Max'] = 'Peso Max';

$GLOBALS["lang"]['Welcome'] = 'Bienvenido';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Bienvenido Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Bienvenido a';

$GLOBALS["lang"]['Western Sahara'] = 'Sáhara Occidental';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '¿Qué puedo esperar si no tengo credenciales';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = '¿Qué hay de los campos que quiero de NMIS que no están en Open-AudIT? Te tenemos cubierto. Cualquier campo en el sistema externo (NMIS) que no exista en Open-AudIT se creará automáticamente como campos personalizados Open-AudIT.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = '¿Y otros dispositivos de red? Piense en interruptores, routers, impresoras, etc. Obviamente, es mejor si puede proporcionar algunas credenciales de SNMP para estos dispositivos. Sólo necesitan <i>sólo lectura</i> acceso. Pero si no quieres hacer ni siquiera eso, no hay nada que te impida ejecutar el descubrimiento, encontrar los dispositivos, y hacer una regla o dos para identificarlos (quizás usar el prefijo de Dirección MAC en combinación con puertos abiertos, por ejemplo). No tendrás mucha información, pero sabrás que están en la red, lo que son, y cuando la última vez que fueron vistos fue. También verá si algo nuevo aparece en la red.';

$GLOBALS["lang"]['What do we send?'] = '¿Qué mandamos?';

$GLOBALS["lang"]['What does this actually mean to you?'] = '¿Qué significa esto para ti?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '¿Cuál es el propósito de este rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '¿Cuál es el tipo de esta ubicación. Tipos admisibles <code>attributes</code> mesa.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Cuando Open-AudIT en Linux descubre una máquina de Windows, para ejecutar un comando remoto que utilizamos';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Cuando Open-AudIT en Windows descubre una máquina de Windows, para ejecutar un comando remoto que utilizamos';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Cuando Open-Aud IT recibe datos sobre un dispositivo, ya sea descubriendo el dispositivo durante una auditoría o por el usuario importando el dispositivo, debe determinar si este dispositivo descubierto coincide con un dispositivo que ya existe dentro de su base de datos, o si es un nuevo dispositivo que debe ser añadido. Open-AudIT utiliza una serie de doce partidos de propiedades para determinar esto. Las reglas de partido funcionan como comparaciones OR, no AND. Esto significa que la primera regla que coincide con un campo en el dispositivo descubierto a uno en el dB resuelve como un dispositivo existente. Todas las reglas de juego tienen que fallar para que un dispositivo sea nuevo y resulte en un nuevo registro que se crea.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Cuando datos POSTing, debe incluir un token de acceso. Un token de acceso se genera con cada tipo de solicitud, por lo que haga un GET (por ejemplo) y Aceptar: aplicación/json, pare la respuesta para meta→access_token, e incluya eso con su solicitud. Esto debe ser colocado en los datos de campo [access_token], IE, el nivel superior.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Cuando un dispositivo se descubre el script de auditoría se inyectará con los detalles del archivo (o directorio). Tanto audit_linux.sh como audit_windows.vbs serán pobladas, independientemente de la ruta del archivo. Si estás pensando <i>pero poner un camino Linux en una máquina de Windows romperá las cosas!</i>, no se romperá, simplemente no recibirá ningún dato de esa entrada de archivo o directorio.<br/>Los detalles recuperados se almacenarán en el <i>archivo</i> tabla de bases de datos y se almacenan como cualquier otro atributo. Los detalles del archivo se almacenarán como cualquier otro atributo y generarán alertas si alguno de los siguientes atributos cambia - <i>full_name</i>, <i>Hash</i>, <i>inode</i>, <i>last_changed</i>. La tabla contiene un system_id, first_seen, last_seen y columnas actuales, así como los detalles del archivo.<br/>Los atributos registrados son:<br/><ul><li>Windows - nombre, tamaño, directorio, SHA1 hash (del contenido del archivo), última modificación, permisos, propietario, versión (permiso del archivo).</li><br/><li>Linux - nombre, tamaño, directorio, SHA1 hash (del contenido del archivo), último cambio, meta data último cambiado, permisos, propietario, grupo, inodo.</li></ul>Usted verá una sección en los scripts de auditoría de Windows y Linux como abajo';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Cuando se ejecuta un descubrimiento, se elige la opción de exploración relevante del descubrimiento y esos ajustes son utilizados por Nmap para escanear los dispositivos de destino. Las opciones de escaneado determinan qué puertos nmap escanea, qué tan rápido escanean y si nmap ping se utiliza primero para determinar si el IP es vivo o no.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Cuando se ejecuta un descubrimiento, se elige la opción de exploración del descubrimiento relevante y los ajustes utilizados por Nmap para escanear los dispositivos de destino. Si no se selecciona un conjunto de opciones, se selecciona y utiliza el elemento de configuración predeterminado (discovery_default_scan_option). Open-AudIT Community utilizará las opciones predeterminadas según la configuración de todos los descubrimientos.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Cuando se ejecuta un descubrimiento subnet se ejecuta primero se ejecuta, si se selecciona, un escáner de ping Nmap en el rango o direcciones IP. Cualquier dispositivo que responda será escaneado por puerto. Si no se solicita un escáner de ping Nmap, cada IP es escaneado individualmente. ¿Qué puertos? Eso es determinado por el';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Al auditar un dispositivo Linux a través de SSH, algunas distribuciones de Linux no permiten pasar comandos de sudo sin un TTY (que estamos haciendo). Para auditar por completo una de estas distribuciones linux es mejor suministrar las credenciales de usuario raíz. Si no se proporciona ninguna raíz y sudo sin un TTY no es posible, el script de auditoría se ejecutará pero no contendrá la cantidad de datos como lo haría de otro modo. Por lo tanto, las auditorías posteriores utilizando root (o ejecutan localmente utilizando sudo) proporcionarán detalles adicionales sobre el sistema y generarán varios <i>cambios</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Al combinar dispositivos, que sistema es la fuente autorizada de información.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Cuando esté completo, cierre la ventana de comandos y se haya terminado!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Al crear un widget, si selecciona el <i>Avances</i> botón tendrá la capacidad de subir su propio SQL personalizado.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Al integrar dispositivos del sistema externo, si el dispositivo no existe en Open-AudIT ¿deberíamos crearlo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Al integrar dispositivos del sistema externo, si el dispositivo ha sido actualizado en el sistema externo, ¿deberíamos actualizarlo en Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Al investigar un Discovery, el soporte solicitará los Registros de Descubrimiento exportados. Para recuperar estos, vaya al menú - Discoveries - confianza';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Al combinar un dispositivo basado en Linux, preferimos utilizar el Dbus id concatenado con el nombre de host. También podemos utilizar otras opciones según la tabla siguiente, pero podemos recuperar el Dbus ID sin raíz. Para recuperar el UUID (de la placa base), necesitamos ejecutar el dmidecode, que requiere raíz. Desafortunadamente, cuando clonas a un invitado de ESXi, el Dbus ID no se recrea - por lo tanto nuestra concatenación con el nombre de host. Hay un buen artículo vinculado aquí que detalla <i>¿Por qué?</i> de identificación de hardware.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Al solicitar JSON, por defecto no se establece ningún límite. Al solicitar pantalla, el límite se establece a 1000 por defecto. Esto se puede cambiar en la configuración. Ver el <i>page_size</i> Tema';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Cuando recuperemos un dispositivo externo, ¿deberíamos correr el descubrimiento?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Al ejecutar Open-AudIT en Windows la cuenta de servicio de Apache debe ser la de un <i>ordinario</i> usuario (o el Administrador). Esto es porque el <i>Sistema local</i> cuenta normalmente utilizada para ejecutar Apache no tiene acceso a ningún recurso de red. IE - No podemos utilizar Apache cuando se ejecuta como la cuenta de Sistema Local para copiar el script de auditoría a Windows PCs.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Cuando se establece la opción de configuración, tenemos esto en cuenta para dispositivos para un determinado subconjunto de reglas de coincidencia definidas donde se ha habilitado el elemento de configuración. Estas reglas son:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Cuando las reglas se ejecutan en el descubrimiento, cualquier regla coincidente aparecerá en el registro del descubrimiento. Vea a continuación un ejemplo.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Cuando este parámetro está programado para ser ejecutado. Derivado de lo asociado <code>tasks.type</code> y <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Cuando se creó este registro.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Cuando este artículo de la cola comenzó a procesar.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Al utilizar Open-AudIT Professional o Enterprise, los widgets están disponibles y son personalizables para ser exhibidos en Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Cuando estamos convirtiendo un dispositivo seleccionado internamente a un objeto para el sistema externo, qué deben ser los datos externos. EG: entero, cuerda, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Cuando ejecutemos esta base de referencia, deberíamos comprobar los elementos en dispositivos que no estén en una política para esta línea de referencia.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Cuando recibamos un puerto abierto, ¿debemos intentar probar la versión del servicio que se ejecuta actualmente sobre él? Esto ayuda a confirmar los servicios de funcionamiento reales.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Cuando usted está usando Clouds para descubrir sus instancias AWS de Amazon, usted necesitará dos elementos credenciales - clave y clave secreta. Tu llave ya debe ser conocida por ti y tu clave secreta también. Cabe destacar que no puede recuperar su clave secreta usando la consola AWS proporcionada por Amazon. Si lo has desplazado mal, necesitarás generar uno nuevo.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Cuando usted está usando Clouds para descubrir sus instancias de Microsoft Azure, usted necesitará cuatro elementos credenciales - suscripción id, arrendatario id, cliente id y cliente secreto.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Cuando creas un descubrimiento tienes una opción a devices_assigned_to_org. Esto significa que cualquier dispositivo descubierto para este descubrimiento será asignado (have <code>devices.org_id</code> establecido a) su Organización elegida.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Cuando creas un nuevo descubrimiento si haces clic en el botón Avanzado, tienes muchas más opciones para cambiar, una de ellas es el tipo de descubrimiento. Los tipos siempre han sido Subnet (componiendo el rango anterior, subnet, opciones de ip) y Active Directory. Al v4.1, Open-AudIT tiene un nuevo tipo de descubrimiento llamado Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Cuando permite que una consulta se ejecute en un horario, la consulta se envía por correo electrónico a su dirección elegida. Usted debe haber establecido el correo electrónico a través del menú Admin - título Enterprise - Config Email. También tenemos un <i>prueba email<i> botón en esa página. Ingrese sus detalles, guárdalo y luego pruébalo. Usted debe tener una caja modal que le informa si tiene éxito o no y obviamente un email de prueba debe llegar si es exitoso. Una vez configurado el correo electrónico, se puede configurar la consulta programada.<br/><br/>Proporcionar un nombre, descripción opcional, elegir <i>Query</i> escriba, seleccione la consulta deseada, proporcione una dirección de correo electrónico, elija un formato y establezca el horario.<br/><br/>Proporcione una hora (sólo hora, no hay minutos todavía), dale a la tarea un nombre (este no es el nombre de la consulta programada en sí mismo), seleccione qué días le gustaría la carrera de consulta, elegir qué consulta le gustaría correr, proporcionar una dirección de correo electrónico y elegir un formato de consulta y se hace.<br/>Las consultas se enviarán con un cuerpo de correo electrónico de la consulta (en formato html) y la consulta adjunta en el formato solicitado.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Cuando introduces texto en uno de los encabezados de la columna, simplemente puedes usar una palabra normal. Por ejemplo, cuando entras <code>computer</code> en el cuadro de búsqueda por encima de <i>Tipo</i> columna, la búsqueda devolverá todos los dispositivos con el tipo de ordenador. En esencia, Open-Aud IT solicita datos usando una URL como <code>devices?devices.type=computer</code>. Ahora hay una diferencia significativa al usar la búsqueda de datosTablas, frente al estándar';

$GLOBALS["lang"]['where'] = 'Donde';

$GLOBALS["lang"]['Where'] = 'Donde';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Donde $x es un número. Estas muchas entradas de LDAP están en el DB y han sido recuperadas.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Dónde en la pantalla Detalles del dispositivo te gustaría ver este campo aparecer.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Donde el estante está en la fila.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Si la vulnerabilidad afecta a componentes más allá de su propio uso de Impacto, Disponibilidad y Confidencialidad.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Si la interacción del usuario es necesaria (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A qué OS se aplica este punto de referencia.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Que dispositivos deben crear Open-AudIT desde el sistema externo (si los hay). Usando Todos, Ninguno o un atributo dado.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Que red debemos descubrir. Esto debe estar en el formato de';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Que sub-menú deberíamos mostrar esta consulta.';

$GLOBALS["lang"]['Who made this rack.'] = 'Quien hizo este basurero.';

$GLOBALS["lang"]['Why Windows Server Only?'] = '¿Por qué Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '¿Por qué excluimos esta política?';

$GLOBALS["lang"]['Wide Area Network'] = 'Wide Area Network';

$GLOBALS["lang"]['Wide area network'] = 'Red de área amplia';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Tipo';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets están diseñados para ser usados en Dashboards. Los usuarios de las empresas tienen total libertad para crear, actualizar y eliminar widgets según sea necesario.';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Paquetes de Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Unidad de trabajo de usuario de Windows #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Unidad de trabajo de usuario de Windows #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows también puede haber bloqueado el servicio desde el inicio. En el objetivo iniciar el applet de seguridad de Windows y asegurar que el ejecutable WinExeSvc se permite ejecutar (haga clic en Permitir el dispositivo y luego iniciar acciones).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Página de Winexe en Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe requiere que se inicien y ejecuten los siguientes servicios de Windows: servicios de netlogon y rpc.<br/><br/>Por favor, inicie sesión en la máquina de Windows objetivo y compruebe los servicios para netlogon y rpc están funcionando.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe utiliza el administrador$ y RPC (comienzo de servicio en línea) para instalar y comenzar un servicio remoto (winexesvc). Este servicio inicializa una tubería llamada que se utiliza para transportar comandos desde el servidor Open-AudIT al objetivo y la salida de la manera inversa. Cuando está terminado, el tubo llamado cierra y el winexesvc espera más conexiones o desinstalaciones (según las opciones dadas).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Wireless Local Area Network';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Con la liberación de 3.3.0 de Open-AudIT hemos introducido el concepto de un Grupo. Esto mapea intuitivamente la idea de un cluster web, un cluster de bases de datos o un grupo de archivos (o uno de varios otros propósitos) en un tipo determinado (alta disponibilidad, redundancia, escalada, etc.).<br/><br/>Dependiendo del propósito del grupo elegido, el informe será ligeramente diferente.<br/><br/>Por ejemplo, si creas un Cluster con un propósito de virtualización, cuando hayas añadido dispositivos a él también verás las máquinas virtuales en esos dispositivos.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Con la introducción de la función Clouds, puede proporcionar detalles de su nube, Amazon AWS o Microsoft Azure, y Open-AudIT utilizará la API relevante para recuperar una lista de lugares, redes y instancias, luego descubrir cada una de estas instancias.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Grupo de trabajo';

$GLOBALS["lang"]['Workgroup'] = 'Grupo de trabajo';

$GLOBALS["lang"]['Working Credentials'] = 'Credenciales de trabajo';

$GLOBALS["lang"]['Wrap Up'] = 'Envuélvete.';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Escrito en el lenguaje PHP scripting.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Query amarillo';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Sí.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Usted es capaz de definir directorios adicionales para ser escaneado como entradas en la colección Executables. Cuando se define, el directorio y todos los subdirectorios se escanean para archivos que son ejecutables. También puede definir directorios y archivos a ser excluidos. Cuando se activan, se inyectan en el script de auditoría de linux y se realizan cuando se ejecuta (normalmente como parte de un descubrimiento). Si quieres esto en un script puedes copiar manualmente al objetivo, usa el menú - título Descubre - scripts de confianza - Lista de scripts y descarga el script desde allí.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Siempre eres libre de modificar los scripts de auditoría para satisfacer tus requisitos específicos. Usted tendrá que (re) incorporar esos cambios cada vez que se actualiza, ya que serán sobrescritos por los scripts predeterminados. Sugiero guardar una copia maestra de su script modificado, actualizar Open-AudIT, luego ejecutar un diff entre el nuevo script predeterminado y su script modificado y aplicar las diferencias. Los scripts de auditoría son scripts nativos (Windows es VBScript, todos los demás son Bash). Simple y fácil de modificar - asegúrese de tener una copia de sus cambios antes de actualizar.';

$GLOBALS["lang"]['You are running version'] = 'Estás ejecutando la versión';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Puede acceder a la colección usando la API basada en Open-AudIT JSON. Como cualquier otra colección. Por favor.';

$GLOBALS["lang"]['You can also'] = 'También puede';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'También puede ver en la parte inferior de la página una tabla que muestra los dispositivos a los que se aplicarán los cambios.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'También puede especificar propiedades usando el siguiente formato.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Siempre puede ejecutar el VM de Firstwave en su infraestructura virtual (ESX, Azure, et al). El Firstwave VM ejecuta Debian linux y está libre de preocupaciones y limitaciones de licencias de OS. O instalar en su propio distro Linux de elección. Apoyamos Redhat 9, Ubuntu 20.04, 22.04 y 24.04, así como Debian 11 y 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Puede asignar dispositivos a una ubicación automáticamente utilizando';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Puede asignar dispositivos usando la costumbre';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Puede auditar una máquina remota sin el uso de la cuenta de Administrador real creando una clave de registro. Cree la siguiente clave en cada máquina para ser auditada y asegúrate de que las credenciales de usuario utilizadas sean miembros del grupo Administradores.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Sin embargo, la información recuperada será un subconjunto muy pequeño de lo que Open-AudIT tiene la capacidad de recuperar. <i>con</i> credenciales.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Puede crear una base de referencia, ejecutarla contra un grupo de dispositivos y ver los resultados, añadir ejecución programada, añadir más tablas para la comparación (actualmente sólo software, puertos netstat y usuarios están habilitados), en lugar de edición de base, archivo de resultados y más.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Usted puede crear un script con todas las opciones para cualquiera de los scripts de auditoría existentes - no sólo Windows. AIX, ESX, Linux, OSX y Windows están todos cubiertos.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Puede personalizar toda la integración hasta qué sistema (NMIS o Open-AudIT) es la autoridad sobre una base de campo. Hay opciones para crear y/o actualizar dispositivos en Open-AudIT o NMIS. Si hacemos un descubrimiento en un dispositivo creado o actualizado y mucho más. Hay explicaciones para cada artículo en el lado derecho de la página.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Puede definir una aplicación y asociar un dispositivo a esta aplicación. Un dispositivo puede estar asociado a más de una aplicación. Una aplicación puede estar asociada a más de un dispositivo.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Puede editar el valor del campo adicional para cada dispositivo individual en la página de detalles del dispositivo. Vea la pantalla de detalles del dispositivo, abra la sección que contiene el campo y (si tiene';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Puede limitar el descubrimiento de semillas de dispositivo para caer dentro de un conjunto estricto de parámetros, incluyendo: <i>Restrict to Subnet</i> y <i>Restrict to Private</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Puede asignar dispositivos manualmente usando';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Puede anular esto proporcionando la opción de formato en la URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Puede seleccionar dispositivos individuales haciendo clic en sus casillas de verificación en el lado derecho o seleccionando todos los dispositivos haciendo clic en la casilla de verificación en la parte superior derecha de la tabla (bajo el botón Editar que parece un lápiz).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Puede seleccionar los dispositivos a integrar eligiendo cualquier atributo en la tabla del sistema (dispositivo) y la combinación (ver menú → Admin → Base de datos → Lista Tablas → sistema para una lista de campos). Un juego de atributos sólo puede coincidir con un solo valor.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Puede convertir cualquier servidor en un coleccionista yendo al menú - título Admin - título Coleccionistas - edad Haga que esto instale un coleccionista. Usted necesitará credenciales para iniciar sesión en el servidor esta instalación informará a.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Puedes ver haciendo clic en el icono de la vista azul. También puede editar o eliminar si tiene permisos.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'No tiene la extensión PHP MBString instalada. Esta extensión es necesaria.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'No tiene la extensión SNMP de PHP instalada. Esta extensión es muy recomendable.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Usted puede querer copiar y pegar esta URL en un correo electrónico a su personal.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Usted puede desear tener Active Directory o OpenLDAP autenticar a sus usuarios, pero no proporcionar autorización. Para hacer esto, asegúrate <i>Uso para la autenticación</i> se establece en Y y <i>Uso para funciones</i> está listo para N. Las credenciales serán validadas por LDAP, pero tendrá que tener el usuario ya creado y asignado Roles en Open-AudIT. Esto también <i>automáticamente</i> aplicable a';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Puede que hayas notado que estas reglas de partido son para artículos que podrían no ser globalmente únicos. Algunos ejemplos:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Usted debe eliminar su licencia existente antes de añadir una nueva licencia.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Usted debe tener las credenciales de SSH para ejecutar un punto de referencia. Actualmente se admiten los siguientes sistemas operativos: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Planeamos ampliarlos con nuevas versiones.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Debe copiar y pegar todo el archivo en el buzón de texto. En el caso siguiente, copiar TODO el texto.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'No debe incluir los campos edited_by y edited_date. Estos se establecerán automáticamente.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Sólo debe cambiar la segunda frase del texto, la';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Usted debe sustituir la columna requerida (por ejemplo, org_id) para ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Usted debe utilizar una línea de encabezado que contiene los nombres de las columnas que desea poblar, entonces sus líneas de datos debajo de eso.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Usted debe utilizar sólo las tablas que contienen atributos que usted necesita. Usualmente uso una unión izquierda. Por ejemplo';

$GLOBALS["lang"]['You will need a'] = 'Necesitarás un';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Usted necesitará los puertos para WMI en el firewall de Windows abierto en cada equipo de Windows objetivo. Para Windows Servidores básicos, asegúrese de permitir las conexiones de cortafuegos según corresponda';

$GLOBALS["lang"]['You will see a list of'] = 'Usted verá una lista de';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriales de YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Tu clave AWS EC2 API.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Sus credenciales de Google Compute como JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Tu El anfitrión';

$GLOBALS["lang"]['Your Licenses'] = 'Sus Licencias';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Su ID de cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Su secreto cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Su ID de suscripción de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Su identificación de cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your PHP version is'] = 'Su versión PHP es';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Su SQL para seleccionar atributos que poblarán esta consulta.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Su SQL para seleccionar dispositivos que poblarán este grupo.';

$GLOBALS["lang"]['Your SSH key.'] = 'Tu llave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Sus credenciales de acceso, según la API nativa de las nubes.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Sus datos son sus datos. Puedes extraerlo cuando quieras. Incluso proporcionamos exportaciones a CSV, JSON y XML. Y tenemos una API de JSON. ¡Y puede escribir informes personalizados y tener esa salida en CSV, XML y JSON! De nuevo, son sus datos - no nadie más. Usted puede estar seguro de que la seguridad de sus datos está en sus manos.';

$GLOBALS["lang"]['Your database platform is'] = 'Su plataforma de base es';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Su descripción del estado de esta conexión (provisionado, retirado, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Su descripción de este artículo.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Su nombre genérico para esta pieza de software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Su versión genérica para esta pieza de software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Su usuario ahora debe ser capaz de marcar haciendo clic en <i>Logon con entrada</i> botón en la página del logotipo de Open-AudIT. Como se mencionó anteriormente, si el logotipo falla, compruebe el archivo de registro y verifique a los usuarios <i>nombre de usuario preferido</i>.<br/><br/>Y eso debería ser todo lo que hay también. ¡Ahora sus usuarios deben tener un conjunto menos de credenciales para recordar!<br/><br/>Como siempre, si usted tiene problemas con esta característica, por favor email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Su usuario ahora debe ser capaz de marcar haciendo clic en <i>Logon con OKTA</i> botón en la página del logotipo de Open-AudIT. Como se mencionó anteriormente, si el logotipo falla, compruebe el archivo de registro y verifique a los usuarios <i>nombre</i>.<br/><br/>Y eso debería ser todo lo que hay también. ¡Ahora sus usuarios deben tener un conjunto menos de credenciales para recordar!<br/><br/>Como siempre, si usted tiene problemas con esta característica, por favor email';

$GLOBALS["lang"]['Your web server is'] = 'Su servidor web es';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'activo';

$GLOBALS["lang"]['active directory'] = 'directorio activo';

$GLOBALS["lang"]['active/active'] = 'activo/activo';

$GLOBALS["lang"]['active/passive'] = 'activo/pasivo';

$GLOBALS["lang"]['advertisement'] = 'publicidad';

$GLOBALS["lang"]['alert'] = 'alerta';

$GLOBALS["lang"]['all'] = 'Todos';

$GLOBALS["lang"]['allocated'] = 'asignados';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'un entero';

$GLOBALS["lang"]['and'] = 'y';

$GLOBALS["lang"]['and / or'] = 'y/o';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'y un ticket de soporte será creado y accionado.';

$GLOBALS["lang"]['and another'] = 'y otro';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'y descargar el auto-instalador de Última Publicación. Es posible que necesite desplazarse por la página para encontrarla.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'e ir a Aplicaciones - Aplicaciones Empresariales (pantalla izquierda), luego haga clic <i>Nueva aplicación</i>.';

$GLOBALS["lang"]['and its current time is'] = 'y su tiempo actual es';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'y busca una fecha de caducidad de garantía antes de hoy.';

$GLOBALS["lang"]['and review what is possible.'] = 'y revisar lo que es posible.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'y la señalización redireccionan URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'y las líneas finales probablemente serán de mayor interés. Estas líneas deben darle el punto exacto en el que el login falló.';

$GLOBALS["lang"]['antivirus'] = 'Internet';

$GLOBALS["lang"]['application'] = 'aplicación';

$GLOBALS["lang"]['approved'] = 'aprobado';

$GLOBALS["lang"]['are required.'] = 'son necesarios.';

$GLOBALS["lang"]['are used.'] = 'se usan.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'como un dispositivo que responde en este puerto.<br/>Esto ha causado algunos problemas de clientes donde los cortafuegos responden en nombre de un dispositivo no existente, y por lo tanto causa falsa detección de dispositivos positivos. Ahora tenemos este atributo disponible para establecer por escaneo.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'como punto de referencia y filtra todas las máquinas virtuales a través de un cheque del sistema. campo de serie para VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'asumiendo que el trabajo y el cliente poblaron DNS';

$GLOBALS["lang"]['attribute'] = 'atributo';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'respaldo';

$GLOBALS["lang"]['banned'] = 'prohibida';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'azul';

$GLOBALS["lang"]['bottom'] = 'inferior';

$GLOBALS["lang"]['building'] = 'construcción';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'puede ser utilizado para la autenticación del usuario (es el nombre del usuario y la contraseña correcta) así como la autorización del usuario (qué roles y orgs tiene un usuario).<br/><br/>Si un usuario no está en el LDAP configurado pero está en Open-AudIT (por ejemplo: el <i>admin</i> usuario), Open-AudIT caerá a utilizarse para la autenticación y autorización.<br/><br/>Open-Aud IT utiliza grupos específicos de LDAP para roles y orgs. Un usuario debe ser un miembro directo de este grupo(s) para que Open-AudIT determine que el acceso de los usuarios.<br/><br/>Cuando se configura correctamente, el uso de LDAP puede eliminar completamente la necesidad de crear usuarios en Open-AudIT. Simplemente configure Open-AudIT para usar LDAP tanto para autenticación como autorización. Si el usuario no existe en Open-AudIT pero existe en LDAP y sus credenciales son correctas y son miembros de los grupos requeridos Open-AudIT creará automáticamente la cuenta de usuario.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'ahora puede recuperar detalles sobre un archivo o directorio de archivos y monitorear estos archivos para cambios según otros atributos en la base de datos Open-AudIT. Esta función funciona fuera de la caja para servidores Linux Open-AudIT, pero necesita un cambio en el nombre de la cuenta de servicio bajo un servidor Windows Open-AudIT. Los clientes compatibles son Windows y Linux.';

$GLOBALS["lang"]['changed'] = 'cambiado';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'elegido. A partir de ahí, si se detecta un puerto para WMI, SSH o SNMP, respondiendo el dispositivo se pregunta más utilizando ';

$GLOBALS["lang"]['cloud'] = 'nube';

$GLOBALS["lang"]['code'] = 'código';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'colecciones y páginas de detalles es un icono a ejecutar.';

$GLOBALS["lang"]['collector'] = 'coleccionista';

$GLOBALS["lang"]['collectors'] = 'coleccionistas';

$GLOBALS["lang"]['column'] = 'columna';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'columna contendrá <i>Sí.</i> o <i>n</i>. Esto indica si esta fila está actualmente presente en el dispositivo. Por ejemplo, el software puede ser instalado (que resultaría en <i>software.current = y</i>), pero en una auditoría posterior puede no ser detectado. Open-AudIT cambiará este atributo actual de filas a <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'columna. El';

$GLOBALS["lang"]['compute'] = 'computador';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'consola';

$GLOBALS["lang"]['contains'] = 'contiene';

$GLOBALS["lang"]['create'] = 'crear';

$GLOBALS["lang"]['created'] = 'creado';

$GLOBALS["lang"]['credentials'] = 'credenciales';

$GLOBALS["lang"]['critical'] = 'crítica';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'base de datos';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'delegado';

$GLOBALS["lang"]['delete'] = 'Borrar';

$GLOBALS["lang"]['deleted'] = 'suprimido';

$GLOBALS["lang"]['denied'] = 'denegada';

$GLOBALS["lang"]['details'] = 'detalles';

$GLOBALS["lang"]['devices'] = 'dispositivos';

$GLOBALS["lang"]['digitalocean'] = 'digitaloceo';

$GLOBALS["lang"]['discoveries'] = 'descubrimientos';

$GLOBALS["lang"]['documentation for further details.'] = 'documentación para más detalles.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = '¿Sí? <strong>no</strong> proporcionar informes de vulnerabilidad para los siguientes';

$GLOBALS["lang"]['does not equal'] = 'no es igual';

$GLOBALS["lang"]['emergency'] = 'emergencia';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'iguales';

$GLOBALS["lang"]['error'] = 'error';

$GLOBALS["lang"]['established'] = 'establecido';

$GLOBALS["lang"]['excluded'] = 'excluidos';

$GLOBALS["lang"]['expired'] = 'expirado';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extremo - Sin el cual, la organización fallaría.

muy alta - Funciones que son esenciales para la supervivencia de las organizaciones y deben ser restauradas inmediatamente.

altas - Funciones importantes que deben ser restauradas rápidamente pero pueden tener un tiempo de recuperación ligeramente más largo.

media - Funciones que son necesarias pero pueden tolerar tiempo de inactividad más largo.

funciones no esenciales que pueden retrasarse sin un impacto significativo.

no firmado - El predeterminado hasta el set.';

$GLOBALS["lang"]['fail'] = 'falla';

$GLOBALS["lang"]['false'] = 'falso';

$GLOBALS["lang"]['file'] = 'archivo';

$GLOBALS["lang"]['firewall'] = 'cortafuegos';

$GLOBALS["lang"]['first'] = 'primero';

$GLOBALS["lang"]['fixed'] = 'fijo';

$GLOBALS["lang"]['floor'] = 'planta baja';

$GLOBALS["lang"]['for'] = 'para';

$GLOBALS["lang"]['for authentication'] = 'para la autenticación';

$GLOBALS["lang"]['for this information.'] = 'para esta información.';

$GLOBALS["lang"]['from Audit Script Result'] = 'de Resultado del script de auditoría';

$GLOBALS["lang"]['from NMIS'] = 'de la NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'desde la dirección LocalHost (Using LRPC) corriendo en el contenedor de aplicación';

$GLOBALS["lang"]['front'] = 'frontal';

$GLOBALS["lang"]['front-left'] = 'delantera izquierda';

$GLOBALS["lang"]['front-right'] = 'derecho delantero';

$GLOBALS["lang"]['github'] = 'Github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'mayores o iguales';

$GLOBALS["lang"]['greater than'] = 'más grande que';

$GLOBALS["lang"]['group'] = 'grupo';

$GLOBALS["lang"]['has not been set'] = 'no se ha fijado';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'tener un DNS reverso de trabajo resolvable IP al PC de Windows objetivo.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'tener la capacidad de ser ejecutado. En el';

$GLOBALS["lang"]['head'] = 'cabeza';

$GLOBALS["lang"]['here'] = 'aquí.';

$GLOBALS["lang"]['high availability'] = 'alta disponibilidad';

$GLOBALS["lang"]['howto'] = 'Howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'si clonas una máquina virtual de Linux, a menos que regeneras manualmente esto (y en mi experiencia, la gente no) seguirá siendo el mismo.';

$GLOBALS["lang"]['ignored'] = 'ignorado';

$GLOBALS["lang"]['import the example device data'] = 'importar los datos del dispositivo de ejemplo';

$GLOBALS["lang"]['in'] = 'dentro';

$GLOBALS["lang"]['in Enterprise.'] = 'en Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'in Inputs puede tener los siguientes valores.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'in Outputs puede tener los siguientes valores.';

$GLOBALS["lang"]['inactive'] = 'inactivo';

$GLOBALS["lang"]['incomplete'] = 'incompleto';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'instalador probará la presencia de Nmap en sus ubicaciones de instalación estándar de';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'es estándar estadounidense mantenido por el Instituto Nacional de Normas y Tecnología';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'es una norma internacional para gestionar la seguridad de la información. Proporciona un marco para establecer, implementar, mantener y mejorar continuamente un Sistema de Gestión de la Seguridad de la Información (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'se basa en';

$GLOBALS["lang"]['is licensed to'] = 'está autorizado';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'es el siguiente en la lista y Open-AudIT puede utilizar contraseña y autenticación clave. Open-AudIT también puede utilizar un usuario habilitado de sudo en lugar del uso de la raíz directamente (aunque también puede utilizar la raíz). Para obtener mejores resultados, se debe utilizar el usuario root o un usuario habilitado de sudo (ver Auditoría de Linux sin root y Configuración de cliente de destino en el wiki). Los dispositivos de Windows también pueden ejecutar ssh, sin embargo si Open-AudIT detecta esto parará las consultas SSH y utilizará WMI (asumiendo las credenciales WMI de trabajo).';

$GLOBALS["lang"]['is the link to the'] = 'es el enlace al';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'artículo para ver las tablas específicas y sus columnas. Esto le permitirá encontrar exactamente lo que necesita, en lugar de atravesar la consola MySQL del script de creación de esquemas.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'clave necesaria para recuperar lat/long y el mapa de visualización. Véase';

$GLOBALS["lang"]['left'] = 'izquierda';

$GLOBALS["lang"]['less or equals'] = 'menos o igual';

$GLOBALS["lang"]['less than'] = 'menos que';

$GLOBALS["lang"]['license'] = 'licencia';

$GLOBALS["lang"]['licenses'] = 'licencias';

$GLOBALS["lang"]['like'] = 'como';

$GLOBALS["lang"]['line'] = 'línea';

$GLOBALS["lang"]['list'] = 'lista';

$GLOBALS["lang"]['list View, using the Create button'] = 'lista Ver, usando el botón Crear';

$GLOBALS["lang"]['load balancing'] = 'balanceo de carga';

$GLOBALS["lang"]['location'] = 'ubicación';

$GLOBALS["lang"]['locations'] = 'emplazamientos';

$GLOBALS["lang"]['managed'] = 'gestionado';

$GLOBALS["lang"]['methods'] = 'métodos';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punto de montaje';

$GLOBALS["lang"]['must'] = 'Debe';

$GLOBALS["lang"]['network'] = 'red';

$GLOBALS["lang"]['news'] = 'noticias';

$GLOBALS["lang"]['no'] = 'no';

$GLOBALS["lang"]['node'] = 'nodos';

$GLOBALS["lang"]['none'] = 'ninguno';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'no aplicable';

$GLOBALS["lang"]['not in'] = 'no en';

$GLOBALS["lang"]['not like'] = 'no';

$GLOBALS["lang"]['notice'] = 'Aviso';

$GLOBALS["lang"]['notification'] = 'notificación';

$GLOBALS["lang"]['okta'] = 'Okta';

$GLOBALS["lang"]['on devices where'] = 'en dispositivos donde';

$GLOBALS["lang"]['openldap'] = 'abierto';

$GLOBALS["lang"]['optimized'] = 'optimizado';

$GLOBALS["lang"]['optionally '] = 'opcionalmente ';

$GLOBALS["lang"]['or'] = 'o';

$GLOBALS["lang"]['or the GitHub page at'] = 'o la página GitHub en';

$GLOBALS["lang"]['other'] = 'otros';

$GLOBALS["lang"]['package'] = 'paquete';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'página. Exportar su servidor LDAP desde el menú - confiar Admin - título LDAP Servers - título Detalles a JSON y guardar e incluir estos datos también.';

$GLOBALS["lang"]['partition'] = 'partición';

$GLOBALS["lang"]['pass'] = 'paso';

$GLOBALS["lang"]['pending'] = 'pendientes';

$GLOBALS["lang"]['performance'] = 'rendimiento';

$GLOBALS["lang"]['performed'] = 'realizado';

$GLOBALS["lang"]['permission'] = 'permiso';

$GLOBALS["lang"]['permissions required per endpoint'] = 'permisos requeridos por punto final';

$GLOBALS["lang"]['pie'] = 'pastel';

$GLOBALS["lang"]['planning'] = 'planificación';

$GLOBALS["lang"]['predictable'] = 'predecible';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'trasero';

$GLOBALS["lang"]['rear-left'] = 'trasero-izquierda';

$GLOBALS["lang"]['rear-right'] = 'derecho trasero';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'liberación';

$GLOBALS["lang"]['removed from display, but has been set'] = 'eliminado de la pantalla, pero se ha establecido';

$GLOBALS["lang"]['reserved'] = 'reservadas';

$GLOBALS["lang"]['right'] = 'derecho';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'derechos) puede hacer clic en el valor de campo para editarlo.';

$GLOBALS["lang"]['role'] = 'función';

$GLOBALS["lang"]['room'] = 'habitación';

$GLOBALS["lang"]['row'] = 'fila';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'el servicio no comenzó debido al siguiente error';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'así Open-AudIT sabe restringir su consulta a los Orgs apropiados.';

$GLOBALS["lang"]['stand-alone'] = 'independiente';

$GLOBALS["lang"]['standard'] = 'estándar';

$GLOBALS["lang"]['starts with'] = 'comienza con';

$GLOBALS["lang"]['storage'] = 'almacenamiento';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'cuadro';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabla e insertar las filas originales.';

$GLOBALS["lang"]['team'] = 'equipo';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'texto. El primero es el índice de matriz y debe ser dejado como-es. El índice se utiliza en las plantillas para buscar el texto traducido.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'luego haga clic en el botón de detalles para la tabla.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'luego haga clic en el botón de detalles para la tabla. Los detalles del dispositivo se almacenan en el';

$GLOBALS["lang"]['timestamp'] = 'timetamp';

$GLOBALS["lang"]['to'] = 'a';

$GLOBALS["lang"]['to create an item of this type'] = 'crear un elemento de este tipo';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'a la URL, obtendrá la entrada completa de la base de datos, incluyendo todas las tablas de componentes, de un dispositivo dado.';

$GLOBALS["lang"]['to the user'] = 'al usuario';

$GLOBALS["lang"]['top'] = 'superior';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - Clasificación militar / gubernamental. La divulgación causaría un peligro excepcionalmente grave para la seguridad nacional.

secretos - Clasificación militar / gubernamental. La divulgación causaría graves daños a la seguridad nacional.

confidencial - Clasificación militar / gubernamental y sector privado. Los datos confidenciales incluyen secretos comerciales, datos intelectuales, código de programación de aplicaciones y otros datos que podrían afectar seriamente a la organización si se hubiera producido una divulgación no autorizada. Los datos a este nivel sólo estarán disponibles para el personal de la organización que necesite o esté directamente relacionado con los datos a los que se accede. El acceso a datos confidenciales generalmente requiere autorización para cada acceso.

privada - Clasificación del sector privado. Los datos privados incluyen toda información relacionada con el personal, incluidos los registros de recursos humanos, los registros médicos y la información sobre los sueldos, que sólo se utiliza en la organización.

sensible - Clasificación militar / gubernamental y sector privado. Los datos sensibles incluyen información financiera organizativa y requieren medidas adicionales para garantizar su CIA y precisión. La discreción podría perjudicar la seguridad nacional.

publico - Clasificación del sector privado. Los datos públicos son datos que generalmente se comparten con el público y no causarían un impacto negativo en la organización. Ejemplos de datos públicos incluyen cuántas personas trabajan en la organización y qué productos una organización fabrica o vende.

no clasificado - Clasificación militar / gubernamental. Toda información que pueda distribuirse al público sin ninguna amenaza al interés nacional.

no firmado - El predeterminado hasta el set.';

$GLOBALS["lang"]['traffic'] = 'tráfico';

$GLOBALS["lang"]['true'] = 'verdadero';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'verdadero o falso (en el contexto JSON)';

$GLOBALS["lang"]['unallocated'] = 'no asignada';

$GLOBALS["lang"]['unauthorised'] = 'no autorizada';

$GLOBALS["lang"]['unchanged'] = 'sin cambios';

$GLOBALS["lang"]['unknown'] = 'desconocida';

$GLOBALS["lang"]['unmanaged'] = 'no gestionados';

$GLOBALS["lang"]['unused'] = 'no utilizados';

$GLOBALS["lang"]['update'] = 'actualización';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'utiliza los datos recogidos de sus dispositivos y coincide con el software instalado con el valor proporcionado, cuenta los partidos calcula cuántos licencias se han utilizado y cuántos quedan. Permite el uso de comodines en el <i>cuerda de partido</i> campo que coincide con el software. nombre atributo.';

$GLOBALS["lang"]['using the main menu items.'] = 'usando los elementos del menú principal.';

$GLOBALS["lang"]['valid'] = 'válido';

$GLOBALS["lang"]['version'] = 'versión';

$GLOBALS["lang"]['virtualisation'] = 'virtualización';

$GLOBALS["lang"]['warning'] = 'advertencia';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'con los permisos de acceso local y remoto establecidos.';

$GLOBALS["lang"]['with devices::update permission.'] = 'con dispositivos: permiso de actualización.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'con el Sign-On Redirect URI siendo';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'con la intención de proporcionar acceso simple e intuitivo de una manera familiar a los desarrolladores. Además de esta API, la interfaz web utilizará el mismo formato de solicitud y suministrará algunas acciones adicionales (por ejemplo: formularios HTML para crear elementos).';

$GLOBALS["lang"]['yes'] = 'Sí.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'no requiere una licencia HighCharts para utilizar productos de Firstwave. Licencia';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'asignará cualquier dispositivo encontrado a ese Org o Localización.';

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

