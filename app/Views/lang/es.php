<?php
$GLOBALS["lang"][' Default, currently '] = ' Default, currently ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' ahora es compatible con un archivo de idioma. Para cambiar su usuario para usar este idioma, haga clic ';

$GLOBALS["lang"][' seconds'] = ' segundos';

$GLOBALS["lang"]['10 Minutes'] = '10 minutos';

$GLOBALS["lang"]['15 Minutes'] = '15 minutos';

$GLOBALS["lang"]['30 Minutes'] = '30 minutos';

$GLOBALS["lang"]['5 Minutes'] = '5 minutos';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>NOTA</strong> - Usted está accediendo a esta URL del servidor local Open-AudIT. El script descargado no será capaz de enviar cuando se ejecuta en cualquier otra máquina. Si necesita auditar otras máquinas, descargue el script de cualquier máquina remota, no use un navegador en el servidor Open-AudIT.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'Una URL a un archivo para descargar.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Un campo calculado que muestra el número de veces que esta pieza de software se encontró en los ordenadores de la Org seleccionada (y sus descendientes si se configuran).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Un coleccionista está en modo Coleccionista o Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Una lista separada de CVEs aplicable.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Una lista separada de valores coma, uno de los cuales puede ser seleccionado.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Un comando para correr. Cuando el agente está basado en Windows, este comando se ejecuta desde dentro del agente de powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Una lista de puertos TCP personalizados a escanear (22 es SSH, 135 es WMI, 62078 es sincronización de iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Una lista de puertos UDP personalizados para escanear (161 es SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Un número menor significa que se aplicará antes de otras reglas.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Un número menor significa que se aplicará antes de otras reglas. El peso predeterminado es 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Una contraseña (establecida como un hash) que permite el logotipo al utilizar la autenticación de la aplicación.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Un dominio de enrutamiento o espacio de dirección donde las direcciones IP y direcciones MAC son únicas.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Una zona de seguridad es un dominio administrativo o de política dentro del dominio de red.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Una breve descripción de la entrada de registro.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Una cuerda que coincide con la <code>software.name</code> atributo. Puede utilizar el comodín SQL estándar del porcentaje (%) para coincidir con uno o más caracteres.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Una vulnerabilidad que afecta a la disponibilidad puede permitir que los atacantes interrumpan los servicios, sistemas de choque o causar denegación de servicio (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Una vulnerabilidad que afecte a la confidencialidad puede permitir a los atacantes leer datos confidenciales, como información personal, credenciales o datos de negocios patentados (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Una vulnerabilidad que afecta a la integridad puede permitir a los atacantes modificar datos, inyectar código malicioso o alterar las configuraciones del sistema (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TODOS los IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Acceso Web';

$GLOBALS["lang"]['API Documentation'] = 'Documentación de API';

$GLOBALS["lang"]['API Key required.'] = 'API Key requerida.';

$GLOBALS["lang"]['API Result'] = 'Resultado de API';

$GLOBALS["lang"]['About'] = 'Acerca de';

$GLOBALS["lang"]['Accept'] = 'Aceptar';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Acceso Token';

$GLOBALS["lang"]['Access Token'] = 'Acceso Token';

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

$GLOBALS["lang"]['Add image'] = 'Agregar imagen';

$GLOBALS["lang"]['additional_items'] = 'Temas adicionales';

$GLOBALS["lang"]['Additional Items'] = 'Temas adicionales';

$GLOBALS["lang"]['address'] = 'Dirección';

$GLOBALS["lang"]['Address'] = 'Dirección';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Estado de Admin';

$GLOBALS["lang"]['Admin Status'] = 'Estado de Admin';

$GLOBALS["lang"]['advanced'] = 'Avances';

$GLOBALS["lang"]['Advanced'] = 'Avances';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistán';

$GLOBALS["lang"]['agents'] = 'Agentes';

$GLOBALS["lang"]['Agents'] = 'Agentes';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Islas Aland';

$GLOBALS["lang"]['Albania'] = 'Albania';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campos';

$GLOBALS["lang"]['American Samoa'] = 'Samoa Americana';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Un array de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Un array de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Un conjunto de objetos que representan enlaces externos a más información.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Un documento JSON cifrado que contiene los atributos necesarios dependiendo del <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Una indicación del nivel de servicio requerido por este sitio.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Un campo interno que indica si el descubrimiento ha terminado.';

$GLOBALS["lang"]['An optional GeoCode'] = 'GeoCode opcional';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Una contraseña opcional para usar sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguila';

$GLOBALS["lang"]['Antarctica'] = 'Antártida';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua y Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Cualquier puerto TCP (comma seperated, no espacios) desea excluir de este descubrimiento. Solo disponible al usar Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Cualquier puerto UDP (comma seperated, no espacios) desea excluir de este descubrimiento. Solo disponible al usar Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Cualquier documentación adicional que necesite.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Cualquier nota adicional que quieras hacer.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Cualquier dispositivo será asignado a este Org cuando ejecuten su script de auditoría (si se establece). Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a esta ubicación si se establece. Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a este lugar cuando ejecuten su script de auditoría (si está establecido). Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Cualquier dispositivo descubierto será asignado a este Org si se establece. Si no está establecido, se les asigna a <code>org_id</code> de este descubrimiento. Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Cualquier filtro necesario. NOTA: Cuando tipo = tráfico, esto representa el icono de fuentes impresionantes.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Cualquier puerto TCP específico que desee probar (comma seperated, no espacios).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Cualquier puerto UDP específico que desee probar (comma seperated, no espacios).';

$GLOBALS["lang"]['Application'] = 'Aplicación';

$GLOBALS["lang"]['application_id'] = 'ID de aplicación';

$GLOBALS["lang"]['Application ID'] = 'ID de aplicación';

$GLOBALS["lang"]['Application Licenses'] = 'Licencias de aplicación';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplicación, sistema operativo o hardware.';

$GLOBALS["lang"]['applications'] = 'Aplicaciones';

$GLOBALS["lang"]['Applications'] = 'Aplicaciones';

$GLOBALS["lang"]['applied'] = 'Aplicadas';

$GLOBALS["lang"]['Applied'] = 'Aplicadas';

$GLOBALS["lang"]['Approved'] = 'Aprobado';

$GLOBALS["lang"]['April'] = 'Abril';

$GLOBALS["lang"]['architecture'] = 'Arquitectura';

$GLOBALS["lang"]['Architecture'] = 'Arquitectura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '¿Estás seguro de que quieres eliminar este elemento de entrada?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '¿Estás seguro de que quieres eliminar este artículo de salida?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '¿Estás seguro? Esto eliminará todas las entradas de cola e impedirá que los IP restantes sean descubiertos.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '¿Estás seguro? Esto restablecerá el recuento de procesamiento de cola y podría causar carga en el servidor.';

$GLOBALS["lang"]['area'] = 'Zona';

$GLOBALS["lang"]['Area'] = 'Zona';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'De acuerdo con los atributos para entornos de dispositivo. Production, Training, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Asignar un Operador';

$GLOBALS["lang"]['Assigned To'] = 'Asignado a';

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

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes'] = 'Atributos';

$GLOBALS["lang"]['Audit'] = 'Auditoría';

$GLOBALS["lang"]['Audit AIX'] = 'Auditoría AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Auditoría ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Auditoría Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit My PC'] = 'Auditoría de mi PC';

$GLOBALS["lang"]['Audit OSX'] = 'Auditoría OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Comprobación de resultados';

$GLOBALS["lang"]['Audit Status'] = 'Estado de la auditoría';

$GLOBALS["lang"]['Audit Windows'] = 'Auditoría de Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Auditoría del dispositivo';

$GLOBALS["lang"]['Audits'] = 'Auditorías';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaiyán';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Copia de seguridad';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banco';

$GLOBALS["lang"]['Bank'] = 'Banco';

$GLOBALS["lang"]['Banned'] = 'Banned';

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

$GLOBALS["lang"]['Basic'] = 'Básica';

$GLOBALS["lang"]['Belarus'] = 'Belarús';

$GLOBALS["lang"]['Belgium'] = 'Bélgica';

$GLOBALS["lang"]['Belize'] = 'Belice';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID de referencia';

$GLOBALS["lang"]['Benchmark ID'] = 'ID de referencia';

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

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugués brasileño';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'British Indian Ocean Territory (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Islas Vírgenes Británicas';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Editar';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atributos de dispositivo de edición a granel';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisitos institucionales';

$GLOBALS["lang"]['Business Requirements'] = 'Requisitos institucionales';

$GLOBALS["lang"]['Buy'] = 'Comprar';

$GLOBALS["lang"]['Buy More'] = 'Comprar más';

$GLOBALS["lang"]['Buy More Licenses'] = 'Comprar más licencias';

$GLOBALS["lang"]['By'] = 'Por';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Máscara';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculado desde el descubrimiento.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculado número total de direcciones IP válidas para esta red.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculado al terminar, el tiempo que se tomó para ejecutar este artículo.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculado cuando se ejecuta la integración y contiene una representación JSON de los dispositivos en esta integración. Cada enlace a <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculado cuando se ejecuta la integración y contiene una representación JSON de los lugares en esta integración. Cada enlace a <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos seleccionados desde Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculado cuando la integración se ejecuta y contiene el número de dispositivos seleccionados el sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos a actualizar en el sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculado cuando se ejecuta la integración y contiene el número de dispositivos actualizados en Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Camboya';

$GLOBALS["lang"]['Cameroon'] = 'Camerún';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

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

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['change_id'] = 'Cambio de ID';

$GLOBALS["lang"]['Change ID'] = 'Cambio de ID';

$GLOBALS["lang"]['change_log'] = 'Cambio de registro';

$GLOBALS["lang"]['Change Log'] = 'Cambio de registro';

$GLOBALS["lang"]['change_type'] = 'Tipo de cambio';

$GLOBALS["lang"]['Change Type'] = 'Tipo de cambio';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Chequee por SSH en estos puertos';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Revise este puerto para cualquier servicio SSH.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Choose'] = 'Elija';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Elija (seleccione el sistema operativo primero)';

$GLOBALS["lang"]['Choose a Device'] = 'Elija un dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Elija una tabla';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Haga clic en el botón Eliminar para eliminar los dispositivos de ejemplo de Open-AudIT.<br/>Esto eliminará los siguientes dispositivos de la base de datos. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Haga clic en el botón Importar abajo para poblar Open-AudIT con los datos del dispositivo de ejemplo.';

$GLOBALS["lang"]['Client ID'] = 'ID de cliente';

$GLOBALS["lang"]['client_ident'] = 'Cliente Ident';

$GLOBALS["lang"]['Client Ident'] = 'Cliente Ident';

$GLOBALS["lang"]['client_secret'] = 'Secreto del cliente';

$GLOBALS["lang"]['Client Secret'] = 'Secreto del cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nombre del sitio del cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nombre del sitio del cliente';

$GLOBALS["lang"]['Close'] = 'Cerca';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Detalles de la nube';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'ID de nube';

$GLOBALS["lang"]['Cloud ID'] = 'ID de nube';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Nombre de la nube';

$GLOBALS["lang"]['Cloud Name'] = 'Nombre de la nube';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds'] = 'Clouds';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Islas Cocos (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Collector';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collector (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Nombre del coleccionista';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['collectors'] = 'Coleccionistas';

$GLOBALS["lang"]['Collectors'] = 'Coleccionistas';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

$GLOBALS["lang"]['column'] = 'Columna';

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

$GLOBALS["lang"]['comments'] = 'Comentarios';

$GLOBALS["lang"]['Comments'] = 'Comentarios';

$GLOBALS["lang"]['commercial'] = 'Comercial';

$GLOBALS["lang"]['Commercial'] = 'Comercial';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complejidad del ataque (Low o High).';

$GLOBALS["lang"]['Component Table'] = 'Cuadro de componentes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componentes (Todos los dispositivos)';

$GLOBALS["lang"]['Compute'] = 'Computación';

$GLOBALS["lang"]['Condition'] = 'Estado';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, actualmente ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Código de error del Administrador de Config';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Código de error del Administrador de Config';

$GLOBALS["lang"]['configuration'] = 'Configuración';

$GLOBALS["lang"]['Configuration'] = 'Configuración';

$GLOBALS["lang"]['Configure'] = 'Configuración';

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

$GLOBALS["lang"]['contact'] = 'Contacto';

$GLOBALS["lang"]['Contact'] = 'Contacto';

$GLOBALS["lang"]['contact_name'] = 'Nombre de contacto';

$GLOBALS["lang"]['Contact Name'] = 'Nombre de contacto';

$GLOBALS["lang"]['contained_in'] = 'Contained In';

$GLOBALS["lang"]['Contained In'] = 'Contained In';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contiene un objeto JSON detalla los widgets asociados y sus posiciones.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contiene los campos que determinan si deberíamos usar ssh, snmp y wmi opciones de descubrimiento. Un objeto JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Nombre contexto';

$GLOBALS["lang"]['contractual_obligations'] = 'Obligaciones contractuales';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obligaciones contractuales';

$GLOBALS["lang"]['Cook Islands'] = 'Islas Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copiar y pegar un resultado de auditoría';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copiar y pegar a continuación a los foros, otra instancia de Open-AudIT o cualquier otro lugar que necesite para proporcionar este artículo.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Crear geocódigo';

$GLOBALS["lang"]['create_internal_count'] = 'Crear cuenta interna';

$GLOBALS["lang"]['Create Internal Count'] = 'Crear cuenta interna';

$GLOBALS["lang"]['create_internal_from_external'] = 'Crear interno de externo';

$GLOBALS["lang"]['Create Internal From External'] = 'Crear interno de externo';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Crear dispositivos NMIS desde Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Crear Open-AudIT Dispositivos de ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Crear Open-AudIT Dispositivos del NMIS';

$GLOBALS["lang"]['created_by'] = 'Creado por';

$GLOBALS["lang"]['Created By'] = 'Creado por';

$GLOBALS["lang"]['created_date'] = 'Fecha de creación';

$GLOBALS["lang"]['Created Date'] = 'Fecha de creación';

$GLOBALS["lang"]['Creating'] = 'Creando';

$GLOBALS["lang"]['Creating Device'] = 'Creación de dispositivos';

$GLOBALS["lang"]['Creating a Query'] = 'Crear una consulta';

$GLOBALS["lang"]['creator'] = 'Creador';

$GLOBALS["lang"]['Creator'] = 'Creador';

$GLOBALS["lang"]['credential'] = 'Credencial';

$GLOBALS["lang"]['Credential'] = 'Credencial';

$GLOBALS["lang"]['credentials'] = 'Credenciales';

$GLOBALS["lang"]['Credentials'] = 'Credenciales';

$GLOBALS["lang"]['Credentials Client ID'] = 'ID de cliente de credenciales';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Suscripción de credenciales ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identificación del arrendatario';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Puertos TCP personalizados';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Custom UDP Puertos';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Chipre';

$GLOBALS["lang"]['Czech'] = 'checo';

$GLOBALS["lang"]['Czech Republic'] = 'República Checa';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Account (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (opcional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'ID de panel';

$GLOBALS["lang"]['Dashboard ID'] = 'ID de panel';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Base de datos';

$GLOBALS["lang"]['db_action'] = 'Base de datos';

$GLOBALS["lang"]['Database Action'] = 'Base de datos';

$GLOBALS["lang"]['db_column'] = 'Base de datos';

$GLOBALS["lang"]['Database Column'] = 'Base de datos';

$GLOBALS["lang"]['Database Definition'] = 'Definición';

$GLOBALS["lang"]['db_row'] = 'Base de datos';

$GLOBALS["lang"]['Database Row'] = 'Base de datos';

$GLOBALS["lang"]['Database Schema'] = 'Plan de base de datos';

$GLOBALS["lang"]['db_table'] = 'Base de datos';

$GLOBALS["lang"]['Database Table'] = 'Base de datos';

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

$GLOBALS["lang"]['December'] = 'Diciembre';

$GLOBALS["lang"]['Default'] = 'Default';

$GLOBALS["lang"]['Default Items'] = 'Artículos por defecto';

$GLOBALS["lang"]['Default Value'] = 'Valor predeterminado';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Predeterminado de 389. Normalmente 636 se utiliza para Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Default of <code>3</code> para LDAP y Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Defectos';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Suprimir';

$GLOBALS["lang"]['Delete Example Devices'] = 'Eliminar dispositivos de ejemplo';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Eliminar Externo del Interior';

$GLOBALS["lang"]['Delete External From Internal'] = 'Eliminar Externo del Interior';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Suprímase NMIS Dispositivos si no en Open-AudIT';

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

$GLOBALS["lang"]['details'] = 'Detalles';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detalles de quién es generalmente contactable en este sitio.';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Auditorías de dispositivos';

$GLOBALS["lang"]['Device ID'] = 'ID de dispositivo';

$GLOBALS["lang"]['device_id'] = 'ID de dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID de dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID de dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID de dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID de dispositivo B';

$GLOBALS["lang"]['Device Name'] = 'Nombre del dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Resultado del dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Resultados del dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Semillas de dispositivo';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Estado del dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipos de dispositivo';

$GLOBALS["lang"]['Device is in the Subnet'] = 'El dispositivo está en la Subnet';

$GLOBALS["lang"]['Devices'] = 'Dispositivos';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivos asignados a la ubicación';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivos asignados a la ubicación';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivos asignados a la org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivos asignados a la org';

$GLOBALS["lang"]['Devices Audited'] = 'Auditoría de dispositivos';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivos creados en ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivos creados en Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Columnas de pantalla predeterminadas';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Columnas de pantalla predeterminadas';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivos encontrados Últimos 7 Días';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivos encontrados hoy';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivos encontrados ayer';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivos no auditados';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivos no vistos 30 días';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivos no vistos 7 días';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivos no vistos 90 días';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivos recuperados mediante API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivos seleccionados de ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivos seleccionados de Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivos Actualizados en ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivos actualizados en Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Se están comparando los dispositivos.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Los dispositivos no están siendo evaluados.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Los dispositivos pueden ser de referencia.';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivos en el estado de ejecución';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivos en el estado detenido';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivos en este';

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

$GLOBALS["lang"]['discoveries'] = 'Descubrimientos';

$GLOBALS["lang"]['Discoveries'] = 'Descubrimientos';

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

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Versión de visualización';

$GLOBALS["lang"]['Display Version'] = 'Versión de visualización';

$GLOBALS["lang"]['Display in Menu'] = 'Mostrar en el menú';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'No escanee estos puertos TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'No escanee estos puertos UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'No me vuelvas a mostrar';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '¿Quieres utilizar el transporte seguro (LDAPS) o LDAP no cifrado regular.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '¿Desea ver la barra lateral estándar a la izquierda.';

$GLOBALS["lang"]['documentation'] = 'Documentación';

$GLOBALS["lang"]['Documentation'] = 'Documentación';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Descargar un archivo desde URL';

$GLOBALS["lang"]['driver'] = 'Conductor';

$GLOBALS["lang"]['Driver'] = 'Conductor';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Duración';

$GLOBALS["lang"]['Duration'] = 'Duración';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

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

$GLOBALS["lang"]['English'] = 'Inglés';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo de título';

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

$GLOBALS["lang"]['Established'] = 'Establecido';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopía';

$GLOBALS["lang"]['Every'] = 'Cada uno';

$GLOBALS["lang"]['Every Day'] = 'Cada día';

$GLOBALS["lang"]['Exceptions'] = 'Excepciones';

$GLOBALS["lang"]['exclude'] = 'Exclusión';

$GLOBALS["lang"]['Exclude'] = 'Exclusión';

$GLOBALS["lang"]['exclude_ip'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Excluir direcciones IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclusión de puertos TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Excluir los puertos Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Excluir los puertos Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Excluir puertos de la Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Excluir puertos de la Udp';

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

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Externo';

$GLOBALS["lang"]['External Field Name'] = 'Nombre del campo externo';

$GLOBALS["lang"]['External Field Type'] = 'Tipo de campo externo';

$GLOBALS["lang"]['external_ident'] = 'External Ident';

$GLOBALS["lang"]['External Ident'] = 'External Ident';

$GLOBALS["lang"]['external_link'] = 'Enlace externo';

$GLOBALS["lang"]['External Link'] = 'Enlace externo';

$GLOBALS["lang"]['extra_columns'] = 'Columnas extra';

$GLOBALS["lang"]['Extra Columns'] = 'Columnas extra';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Islas Fiji';

$GLOBALS["lang"]['File'] = 'Archivo';

$GLOBALS["lang"]['File Import'] = 'Importación de archivos';

$GLOBALS["lang"]['File Input'] = 'Entrada de archivos';

$GLOBALS["lang"]['file_name'] = 'Nombre del archivo';

$GLOBALS["lang"]['File Name'] = 'Nombre del archivo';

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

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Regla de cortafuegos';

$GLOBALS["lang"]['Firewall Rule'] = 'Regla de cortafuegos';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First Name'] = 'Nombre';

$GLOBALS["lang"]['first_run'] = 'Primera carrera';

$GLOBALS["lang"]['First Run'] = 'Primera carrera';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['FirstWave'] = 'Primero';

$GLOBALS["lang"]['Fix'] = 'Corrección';

$GLOBALS["lang"]['Fixed'] = 'Fijación';

$GLOBALS["lang"]['Floor'] = 'Piso';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Siga cualquiera de los enlaces de abajo y descubra cómo utilizar Open-AudIT para averiguar <b>¿Qué hay en tu red?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Para un descubrimiento de semillas, sólo debería descubrir IPs en el espacio de dirección IP privado.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Para un descubrimiento de semillas, sólo debería descubrir IPs en la subred elegida.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Para un descubrimiento de semillas, debería pinchar el submarino antes de correr el descubrimiento.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Para la entrada avanzada de una consulta SQL cruda. De acuerdo con las consultas, debe incluir <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Para licencias que no son perpetuas, cuando la licencia expira.';

$GLOBALS["lang"]['form_factor'] = 'Factor de formulario';

$GLOBALS["lang"]['Form Factor'] = 'Factor de formulario';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

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

$GLOBALS["lang"]['full_name'] = 'Nombre completo';

$GLOBALS["lang"]['Full Name'] = 'Nombre completo';

$GLOBALS["lang"]['function'] = 'Función';

$GLOBALS["lang"]['Function'] = 'Función';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabón';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generado por';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Alemán';

$GLOBALS["lang"]['Germany'] = 'Alemania';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Empieza.';

$GLOBALS["lang"]['Get a Free License'] = 'Consigue una Licencia Gratis';

$GLOBALS["lang"]['Getting Started'] = 'Comienzo';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opciones de descubrimiento global';

$GLOBALS["lang"]['Go'] = 'Vamos.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Clave';

$GLOBALS["lang"]['Greater Than'] = 'Más grande que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Mayor o igual';

$GLOBALS["lang"]['Greece'] = 'Grecia';

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

$GLOBALS["lang"]['hardware_revision'] = 'Revisión de hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisión de hardware';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Se ha aplicado esta política en esta organización.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island y McDonald Islands';

$GLOBALS["lang"]['height'] = 'Altura';

$GLOBALS["lang"]['Height'] = 'Altura';

$GLOBALS["lang"]['Height in RU'] = 'Altura en RU';

$GLOBALS["lang"]['Help'] = 'Ayuda';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Ayuda y preguntas frecuentes';

$GLOBALS["lang"]['high'] = 'Alto';

$GLOBALS["lang"]['High'] = 'Alto';

$GLOBALS["lang"]['High Availability'] = 'Alta disponibilidad';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sede';

$GLOBALS["lang"]['Home'] = 'Inicio';

$GLOBALS["lang"]['home'] = 'Inicio';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nombre de host';

$GLOBALS["lang"]['Hostname'] = 'Nombre de host';

$GLOBALS["lang"]['hour'] = 'Hora';

$GLOBALS["lang"]['Hour'] = 'Hora';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Cómo y por qué es Open-AudIT más seguro';

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

$GLOBALS["lang"]['Hungary'] = 'Hungría';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'He leído el EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'Versión IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Dirección IP';

$GLOBALS["lang"]['IP Addresses'] = 'Direcciones IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'Configuración IP';

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

$GLOBALS["lang"]['If'] = 'Si';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Si un puerto responde con filtrado, deberíamos considerarlo disponible.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Si un puerto responde con una versión abierta, deberíamos considerarlo disponible.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Si un dispositivo remoto no existe en los dispositivos seleccionados Open-AudIT, si lo eliminamos del sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Si se ha cambiado un dispositivo Open-AudIT, deberíamos actualizar el sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Si un dispositivo Open-AudIT no está en el sistema externo, deberíamos crearlo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Si un agente reporta su IP primaria está en esta subred, realice las acciones.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Si se detectan algunos de estos puertos (comma seperated, no hay espacios), asume que SSH se está ejecutando en ellos y los utiliza para la auditoría. No es necesario añadir este puerto a los puertos TCP personalizados - se añadirá automáticamente.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Si se establece, tiene una matriz JSON de columnas específicas de dispositivo que este usuario ha elegido ver, aparte del predeterminado de configuración.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Si el agente OS familia (caso insensible) contiene esta cadena, realice las acciones.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Si se cumplen las siguientes condiciones:<br/><ul><li>a Role tiene un ad_group asignado</li><li>un Org tiene un ad_group asignado</li><li>un LDAP Server tiene use_roles set a y</li><li>un usuario existe en LDAP (ya sea Active Directory o OpenLDAP) y está en los ad_groups asignados</li></ul>Ese usuario puede conectarse a Open-AudIT sin una cuenta en Open-AudIT que necesita ser creado. Open-AudIT preguntará el LDAP en cuestión y si el usuario está en los grupos requeridos pero no en Open-AudIT, sus atributos de usuario (nombre, nombre completo, correo electrónico, roles, orgs, etc) dentro de Open-AudIT se popula automáticamente y se registrarán.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Si el usuario inicia sesión en Open-AudIT no tiene acceso a la búsqueda LDAP, puede utilizar otra cuenta que tenga este acceso.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Si estos muchos o más minutos han pasado desde que el dispositivo se puso en contacto con el servidor, realice las acciones.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Si eliges un coleccionista, se programará ejecutar en el siguiente límite de 5 minutos.';

$GLOBALS["lang"]['ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Siadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

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

$GLOBALS["lang"]['implementation_notes'] = 'Notas de aplicación';

$GLOBALS["lang"]['Implementation Notes'] = 'Notas de aplicación';

$GLOBALS["lang"]['Import'] = 'Importación';

$GLOBALS["lang"]['Import Example Data'] = 'Importar datos de ejemplo';

$GLOBALS["lang"]['improvement_opportunities'] = 'Oportunidades de mejora';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Oportunidades de mejora';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inactivo';

$GLOBALS["lang"]['Include'] = 'Incluido';

$GLOBALS["lang"]['Incomplete'] = 'Incompleto';

$GLOBALS["lang"]['Index'] = 'Índice';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Información';

$GLOBALS["lang"]['initial_size'] = 'Tamaño inicial';

$GLOBALS["lang"]['Initial Size'] = 'Tamaño inicial';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Tipo de entrada';

$GLOBALS["lang"]['inputs'] = 'Inputs';

$GLOBALS["lang"]['Inputs'] = 'Inputs';

$GLOBALS["lang"]['Insane'] = 'Insane';

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

$GLOBALS["lang"]['installed_by'] = 'Instalado por';

$GLOBALS["lang"]['Installed By'] = 'Instalado por';

$GLOBALS["lang"]['installed_on'] = 'Instalado en';

$GLOBALS["lang"]['Installed On'] = 'Instalado en';

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

$GLOBALS["lang"]['interface'] = 'Interfaz';

$GLOBALS["lang"]['Interface'] = 'Interfaz';

$GLOBALS["lang"]['interface_id'] = 'ID de interfaz';

$GLOBALS["lang"]['Interface ID'] = 'ID de interfaz';

$GLOBALS["lang"]['interface_type'] = 'Tipo de interfaz';

$GLOBALS["lang"]['Interface Type'] = 'Tipo de interfaz';

$GLOBALS["lang"]['Internal'] = 'Internos';

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

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Temas que no están en línea de referencia';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Enero';

$GLOBALS["lang"]['Japan'] = 'Japón';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Julio';

$GLOBALS["lang"]['June'] = 'Junio';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazajstán';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Versión de kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versión de kernel';

$GLOBALS["lang"]['Key'] = 'Clave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Contraseña clave (opcional)';

$GLOBALS["lang"]['keys'] = 'Llaves';

$GLOBALS["lang"]['Keys'] = 'Llaves';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Corea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'República Kirguisa';

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

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitud';

$GLOBALS["lang"]['Latitude'] = 'Latitud';

$GLOBALS["lang"]['Latvia'] = 'Letonia';

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

$GLOBALS["lang"]['level'] = 'Nivel';

$GLOBALS["lang"]['Level'] = 'Nivel';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nivel de privilegios necesarios para explotar (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya Árabe Libia';

$GLOBALS["lang"]['License'] = 'Licencia';

$GLOBALS["lang"]['License Key'] = 'Licencia clave';

$GLOBALS["lang"]['License Required'] = 'Licencia requerida';

$GLOBALS["lang"]['licenses'] = 'Licencias';

$GLOBALS["lang"]['Licenses'] = 'Licencias';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Como';

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

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['list_table_format'] = 'Formato de tabla';

$GLOBALS["lang"]['List Table Format'] = 'Formato de tabla';

$GLOBALS["lang"]['Lithuania'] = 'Lituania';

$GLOBALS["lang"]['Load Balancing'] = 'Equilibrio de carga';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Local Area Network';

$GLOBALS["lang"]['local_port'] = 'Puerto local';

$GLOBALS["lang"]['Local Port'] = 'Puerto local';

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

$GLOBALS["lang"]['locations'] = 'Lugares';

$GLOBALS["lang"]['Locations'] = 'Lugares';

$GLOBALS["lang"]['Locations in this'] = 'Lugares en este';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Formato de registro';

$GLOBALS["lang"]['Log Format'] = 'Formato de registro';

$GLOBALS["lang"]['log_path'] = 'Sendero de registro';

$GLOBALS["lang"]['Log Path'] = 'Sendero de registro';

$GLOBALS["lang"]['log_rotation'] = 'Rotación de registro';

$GLOBALS["lang"]['Log Rotation'] = 'Rotación de registro';

$GLOBALS["lang"]['log_status'] = 'Estado de registro';

$GLOBALS["lang"]['Log Status'] = 'Estado de registro';

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

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburgo';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricantes';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['maintenance_expires'] = 'Gastos de mantenimiento';

$GLOBALS["lang"]['Maintenance Expires'] = 'Gastos de mantenimiento';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Haga mi tablero de mando predeterminado';

$GLOBALS["lang"]['Make this install a Collector'] = 'Haga esta instalación un Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malasia';

$GLOBALS["lang"]['Maldives'] = 'Maldivas';

$GLOBALS["lang"]['Mali'] = 'Malí';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Gestionar licencias';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manage in NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Cierre de partido';

$GLOBALS["lang"]['Match String'] = 'Cierre de partido';

$GLOBALS["lang"]['Matching Attribute'] = 'Atributo coincidente';

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

$GLOBALS["lang"]['Mexico'] = 'México';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutos Desde la última auditoría son más grandes que';

$GLOBALS["lang"]['model'] = 'Modelo';

$GLOBALS["lang"]['Model'] = 'Modelo';

$GLOBALS["lang"]['model_family'] = 'Modelo de familia';

$GLOBALS["lang"]['Model Family'] = 'Modelo de familia';

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

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mes';

$GLOBALS["lang"]['Month'] = 'Mes';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marruecos';

$GLOBALS["lang"]['motherboard'] = 'Madres';

$GLOBALS["lang"]['Motherboard'] = 'Madres';

$GLOBALS["lang"]['mount_point'] = 'Punto de montaje';

$GLOBALS["lang"]['Mount Point'] = 'Punto de montaje';

$GLOBALS["lang"]['mount_type'] = 'Tipo de montaje';

$GLOBALS["lang"]['Mount Type'] = 'Tipo de montaje';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Debe responder a Ping';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - Puede evitar que las credenciales de texto simple se muestren a continuación estableciendo el elemento de configuración para <code>decrypt_credentials</code> a <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nombre';

$GLOBALS["lang"]['Name'] = 'Nombre';

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

$GLOBALS["lang"]['Network'] = 'Red';

$GLOBALS["lang"]['network_address'] = 'Dirección de la red';

$GLOBALS["lang"]['Network Address'] = 'Dirección de la red';

$GLOBALS["lang"]['network_domain'] = 'Dominio de red';

$GLOBALS["lang"]['Network Domain'] = 'Dominio de red';

$GLOBALS["lang"]['Network Types'] = 'Tipos de red';

$GLOBALS["lang"]['networks'] = 'Redes';

$GLOBALS["lang"]['Networks'] = 'Redes';

$GLOBALS["lang"]['Networks Generated By'] = 'Redes generadas por';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Redes usando una máscara de CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Nombre del edificio';

$GLOBALS["lang"]['New Caledonia'] = 'Nueva Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nombre del nuevo piso';

$GLOBALS["lang"]['New Room Name'] = 'Nombre de la habitación';

$GLOBALS["lang"]['New Row Name'] = 'Nuevo nombre de fila';

$GLOBALS["lang"]['New Zealand'] = 'Nueva Zelandia';

$GLOBALS["lang"]['News'] = 'Noticias';

$GLOBALS["lang"]['next_hop'] = 'Siguiente Hop';

$GLOBALS["lang"]['Next Hop'] = 'Siguiente Hop';

$GLOBALS["lang"]['next_run'] = 'Next Run';

$GLOBALS["lang"]['Next Run'] = 'Next Run';

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

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Ninguno';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Islas Marianas del Norte';

$GLOBALS["lang"]['Norway'] = 'Noruega';

$GLOBALS["lang"]['Not Applicable'] = 'No aplicable';

$GLOBALS["lang"]['Not Checked'] = 'No chequeado';

$GLOBALS["lang"]['Not Equals'] = 'No es igual';

$GLOBALS["lang"]['Not In'] = 'No';

$GLOBALS["lang"]['Not Like'] = 'No como';

$GLOBALS["lang"]['Not Set'] = 'No se establece';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'No se usa normalmente. Si se establece, esto requiere que el dispositivo tenga un puerto abierto (como por Opciones de Escaneo) para ser considerado responder. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Útil si un router o cortafuegos entre el servidor Open-AudIT y el IP objetivo está respondiendo a los escaneos portuarios en nombre de IPs.';

$GLOBALS["lang"]['Note'] = 'Nota';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - La selección de un padre proporcionará automáticamente acceso a sus hijos (aunque no se mostrará aquí).';

$GLOBALS["lang"]['Notes'] = 'Notas';

$GLOBALS["lang"]['notes'] = 'Notas';

$GLOBALS["lang"]['Notice'] = 'Aviso';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Noviembre';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Familias';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['October'] = 'Octubre';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Uno de los <code>3x2</code>, <code>4x2</code>, <code>4x3</code> o <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Una de las redes de área de Campus, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Uno de Desarrollo, Recuperación de Desastres, Evaluación, Preproducción, Producción, Pruebas, Capacitación, Pruebas de Aceptación de Usuario';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Uno de los asignados, delegados, planificación, reservados, no asignados, desconocidos, no gestionados. Defaults to allocated.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Uno de los dos <code>active directory</code> o <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Uno de: antivirus, backup, firewall, aprobado, prohibido, ignorado u otro.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentación en línea';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Comunidad Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selección de dispositivos Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Solución flexible de descubrimiento y auditoría a gran escala para grandes redes. Todas las características de Professional plus: Baselines, Auditoría de Archivos, Cloud Discovery, Gestión de Rack, Control de acceso basado en roles configurable incluyendo Active Directory y LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nombre del campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licencias Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opciones de Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Profesional de Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Profesional de Open-AudIT. El mundo';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT y Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap está instalado';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Usuario Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Usuario Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Composición de usuarios de Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Composición de usuarios de Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Abiertas vidas llenas';

$GLOBALS["lang"]['Open|filtered'] = 'Abiertas vidas llenas';

$GLOBALS["lang"]['Operating System'] = 'Sistema operativo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Sistema Operativo Familia Contiene';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemas operativos';

$GLOBALS["lang"]['optical'] = 'Óptico';

$GLOBALS["lang"]['Optical'] = 'Óptico';

$GLOBALS["lang"]['Optimized'] = 'Optimizado';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versión opcional auditada por Open-AudIT. Use el porcentaje de signo % como un comodín.';

$GLOBALS["lang"]['options'] = 'Opciones';

$GLOBALS["lang"]['Options'] = 'Opciones';

$GLOBALS["lang"]['Or select from the below fields.'] = 'O seleccione de los siguientes campos.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID de org';

$GLOBALS["lang"]['Org ID'] = 'ID de org';

$GLOBALS["lang"]['Organisation'] = 'Organización';

$GLOBALS["lang"]['organisation'] = 'Organización';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organizaciones';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Nombre de los orgs';

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

$GLOBALS["lang"]['Others'] = 'Otros';

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

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Paquete';

$GLOBALS["lang"]['packages'] = 'Paquetes';

$GLOBALS["lang"]['Packages'] = 'Paquetes';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territorio Palestino';

$GLOBALS["lang"]['Panama'] = 'Panamá';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nueva Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

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

$GLOBALS["lang"]['permission'] = 'Permiso';

$GLOBALS["lang"]['Permission'] = 'Permiso';

$GLOBALS["lang"]['permissions'] = 'Permisos';

$GLOBALS["lang"]['Permissions'] = 'Permisos';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

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

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Islas Pitcairn';

$GLOBALS["lang"]['placement'] = 'Colocación';

$GLOBALS["lang"]['Placement'] = 'Colocación';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Por favor, tenga un logotipo de administrador Open-AudIT y actualice la base de datos.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Tenga en cuenta que el cuadro selecto anulará el cuadro de entrada de texto.';

$GLOBALS["lang"]['Please set using'] = 'Por favor, configure el uso';

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

$GLOBALS["lang"]['Polite'] = 'Polités';

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

$GLOBALS["lang"]['position'] = 'Posición';

$GLOBALS["lang"]['Position'] = 'Posición';

$GLOBALS["lang"]['postcode'] = 'Código postal';

$GLOBALS["lang"]['Postcode'] = 'Código postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuito de potencia';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito de potencia';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Predictable';

$GLOBALS["lang"]['Preferences'] = 'Preferencias';

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

$GLOBALS["lang"]['profile'] = 'Perfil';

$GLOBALS["lang"]['Profile'] = 'Perfil';

$GLOBALS["lang"]['program'] = 'Programa';

$GLOBALS["lang"]['Program'] = 'Programa';

$GLOBALS["lang"]['protocol'] = 'Protocolo';

$GLOBALS["lang"]['Protocol'] = 'Protocolo';

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

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Auditorías de dispositivos en espera';

$GLOBALS["lang"]['Queued IP Scans'] = 'Escáneos IP puestos en consulta';

$GLOBALS["lang"]['Queued Items'] = 'Documentos solicitados';

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

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['references'] = 'Referencias';

$GLOBALS["lang"]['References'] = 'Referencias';

$GLOBALS["lang"]['region'] = 'Región';

$GLOBALS["lang"]['Region'] = 'Región';

$GLOBALS["lang"]['registered_user'] = 'Usuario registrado';

$GLOBALS["lang"]['Registered User'] = 'Usuario registrado';

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

$GLOBALS["lang"]['Report'] = 'Informe';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Informe sobre sus dispositivos, redes y más';

$GLOBALS["lang"]['reportable'] = 'Reportable';

$GLOBALS["lang"]['Reportable'] = 'Reportable';

$GLOBALS["lang"]['Reports'] = 'Informes';

$GLOBALS["lang"]['request'] = 'Solicitud';

$GLOBALS["lang"]['Request'] = 'Solicitud';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Solicitar un específico CVE';

$GLOBALS["lang"]['requested'] = 'Solicitudes';

$GLOBALS["lang"]['Requested'] = 'Solicitudes';

$GLOBALS["lang"]['require_port'] = 'Require Puerto';

$GLOBALS["lang"]['Require Port'] = 'Require Puerto';

$GLOBALS["lang"]['Require an Open Port'] = 'Requiere un Puerto Abierto';

$GLOBALS["lang"]['Required'] = 'Se requiere';

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

$GLOBALS["lang"]['Results'] = 'Resultados';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nombre recuperado';

$GLOBALS["lang"]['Retrieved Name'] = 'Nombre recuperado';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunión';

$GLOBALS["lang"]['revision'] = 'Revisión';

$GLOBALS["lang"]['Revision'] = 'Revisión';

$GLOBALS["lang"]['risk_assesment_result'] = 'Resultado de la evaluación del riesgo';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Resultado de la evaluación del riesgo';

$GLOBALS["lang"]['role'] = 'Función';

$GLOBALS["lang"]['Role'] = 'Función';

$GLOBALS["lang"]['roles'] = 'Funciones';

$GLOBALS["lang"]['Roles'] = 'Funciones';

$GLOBALS["lang"]['Romania'] = 'Rumania';

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

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Ejecutar un descubrimiento y descubrir <b>¿Qué hay en tu red?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Corre este comando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Funcionamiento de servicio de Apache Open-AudIT en Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Guardar como defecto';

$GLOBALS["lang"]['scaling'] = 'Escalada';

$GLOBALS["lang"]['Scaling'] = 'Escalada';

$GLOBALS["lang"]['scan_options'] = 'Opciones de exploración';

$GLOBALS["lang"]['Scan Options'] = 'Opciones de exploración';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan Options ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Escanee el número superior de puertos TCP Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Escanee el número superior de puertos UDP Nmap.';

$GLOBALS["lang"]['schedule'] = 'Cuadro';

$GLOBALS["lang"]['Schedule'] = 'Cuadro';

$GLOBALS["lang"]['scope'] = 'Ámbito';

$GLOBALS["lang"]['Scope'] = 'Ámbito';

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

$GLOBALS["lang"]['Search for Device'] = 'Búsqueda de Dispositivo';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Búsqueda utilizando datosTablas';

$GLOBALS["lang"]['secondary'] = 'Secundaria';

$GLOBALS["lang"]['Secondary'] = 'Secundaria';

$GLOBALS["lang"]['Secondary Text'] = 'Texto secundario';

$GLOBALS["lang"]['section'] = 'Sección';

$GLOBALS["lang"]['Section'] = 'Sección';

$GLOBALS["lang"]['secure'] = 'Seguro';

$GLOBALS["lang"]['Secure'] = 'Seguro';

$GLOBALS["lang"]['Security Name'] = 'Nombre de seguridad';

$GLOBALS["lang"]['Security Status'] = 'Situación de la seguridad';

$GLOBALS["lang"]['security_zone'] = 'Zona de seguridad';

$GLOBALS["lang"]['Security Zone'] = 'Zona de seguridad';

$GLOBALS["lang"]['seed_ip'] = 'Seed IP';

$GLOBALS["lang"]['Seed IP'] = 'Seed IP';

$GLOBALS["lang"]['seed_ping'] = 'Semillas Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Semillas Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Restringencia de semillas al soldado';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Restringencia de semillas al soldado';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restos de semillas a subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restos de semillas a subnet';

$GLOBALS["lang"]['Select'] = 'Seleccione';

$GLOBALS["lang"]['Select All'] = 'Seleccione todos';

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

$GLOBALS["lang"]['Select a Table'] = 'Seleccione una tabla';

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

$GLOBALS["lang"]['service_version'] = 'Versión de servicio';

$GLOBALS["lang"]['Service Version'] = 'Versión de servicio';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set By';

$GLOBALS["lang"]['Set By'] = 'Set By';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Establecer el tamaño (normal o compacto) de las tablas en las pantallas Lista.';

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

$GLOBALS["lang"]['short'] = 'Corto';

$GLOBALS["lang"]['Short'] = 'Corto';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '¿Debo eliminar todos los datos no corrientes de este dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Si este archivo (o patrón) se utiliza para excluir archivos de ser reportado. Normalmente, para los archivos de auditoría, esto se establece para <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Si este proveedor se utiliza cuando recupera vulnerabilidades de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Si añadimos dispositivos del servicio remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '¿Debemos aplicar esta licencia a la Org seleccionada así como a los niños Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '¿Deberíamos considerar un puerto filtrado para ser un puerto abierto - y por lo tanto marcar este IP como tener un dispositivo conectado?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '¿Debemos considerar un puerto abierto para ser un puerto abierto - y por lo tanto marcar este IP como tener un dispositivo conectado?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Si exponemos este grupo en la interfaz web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Si exponemos esta consulta en la lista de informes bajo el menú Reporte en la interfaz web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Si exponemos esta consulta en la lista de informes bajo el menú Informes en la interfaz web.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Si realizamos una auditoría y la sometemos (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Si probamos para SNMP usando el puerto UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Si probamos para SSH usando el puerto TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Si probamos para WMI usando el puerto TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Si desinstalamos el agente (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Si utilizamos este método para autenticar las credenciales de usuario. Set to <code>y</code> o <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Si utilizamos este método para popular un papel de usuario. El campo <code>use_auth</code> debe establecerse <code>y</code> para usar esto. Set to <code>y</code> o <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Eslovaquia (República Eslovaca)';

$GLOBALS["lang"]['Slovenia'] = 'Eslovenia';

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

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'El software se encontró los últimos 7 días';

$GLOBALS["lang"]['Software Found Today'] = 'Software encontrado hoy';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software encontrado ayer';

$GLOBALS["lang"]['software_key'] = 'Clave de software';

$GLOBALS["lang"]['Software Key'] = 'Clave de software';

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

$GLOBALS["lang"]['started_date'] = 'Fecha de inicio';

$GLOBALS["lang"]['Started Date'] = 'Fecha de inicio';

$GLOBALS["lang"]['state'] = 'Estado';

$GLOBALS["lang"]['State'] = 'Estado';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Situación';

$GLOBALS["lang"]['Status'] = 'Situación';

$GLOBALS["lang"]['Storage'] = 'Almacenamiento';

$GLOBALS["lang"]['storage_count'] = 'Conde de almacenamiento';

$GLOBALS["lang"]['Storage Count'] = 'Conde de almacenamiento';

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

$GLOBALS["lang"]['Submitted From'] = 'Presentado';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

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

$GLOBALS["lang"]['Summary'] = 'Resumen';

$GLOBALS["lang"]['Sunday'] = 'Domingo';

$GLOBALS["lang"]['supplier'] = 'Proveedor';

$GLOBALS["lang"]['Supplier'] = 'Proveedor';

$GLOBALS["lang"]['Support'] = 'Apoyo';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tipos compatibles <code>subnet</code>, <code>seed</code> y <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Islas Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swazilandia';

$GLOBALS["lang"]['Sweden'] = 'Suecia';

$GLOBALS["lang"]['switch_device_id'] = 'ID de dispositivo de conmutación';

$GLOBALS["lang"]['Switch Device ID'] = 'ID de dispositivo de conmutación';

$GLOBALS["lang"]['switch_port'] = 'Interruptor de puerto';

$GLOBALS["lang"]['Switch Port'] = 'Interruptor de puerto';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suiza, Confederación Suiza';

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

$GLOBALS["lang"]['table'] = 'Cuadro';

$GLOBALS["lang"]['Table'] = 'Cuadro';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags :: '] = 'Etiquetas :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwán';

$GLOBALS["lang"]['Tajikistan'] = 'Tayikistán';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Tareas';

$GLOBALS["lang"]['Task'] = 'Tareas';

$GLOBALS["lang"]['tasks'] = 'Tareas';

$GLOBALS["lang"]['Tasks'] = 'Tareas';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternario';

$GLOBALS["lang"]['Ternary'] = 'Ternario';

$GLOBALS["lang"]['Test 1'] = 'Prueba 1';

$GLOBALS["lang"]['Test 2'] = 'Prueba 2';

$GLOBALS["lang"]['Test 3'] = 'Prueba 3';

$GLOBALS["lang"]['test_minutes'] = 'Test Minutes';

$GLOBALS["lang"]['Test Minutes'] = 'Test Minutes';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Pruebas';

$GLOBALS["lang"]['Tests'] = 'Pruebas';

$GLOBALS["lang"]['Text'] = 'Texto';

$GLOBALS["lang"]['Thailand'] = 'Tailandia';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'El dominio Active Directory para recuperar una lista de subreds de.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'El servidor Active Directory para recuperar una lista de subreds de.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La métrica Automatable captura la respuesta a la pregunta <strong>¿Puede un atacante automatizar eventos de explotación para esta vulnerabilidad a través de múltiples objetivos?</strong> basado en los pasos 1-4 de la cadena de matar. Estos pasos son el reconocimiento, el armamentismo, la entrega y la explotación (No Definido, No, Sí).';

$GLOBALS["lang"]['The CVE identifier.'] = 'El identificador de CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'La nube que posee este artículo. Enlaces a <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'El ISP o Telco que proporciona este enlace.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'El registro de JSON de Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'El registro JSON de la alimentación NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'La UA LDAP de este usuario (si se utiliza LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Ubicación que contiene esta red. Enlaces a <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'The NVD assigned base status.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'El preset de tiempo de Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'The OS this package should be reported against. Manta para todos. Use el porcentaje de signo % como un comodín. Será probado contra os_group, os_family y os_name en ese orden.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'La API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'El Open-AudIT id de la nube vinculada. Enlaces a <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'El Open-Aud El código del servidor de TI fue excluido dentro de este archivo.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'El Open-Aud El código del servidor de TI fue excluido dentro de esta función.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'La Organización que posee este tema. Enlaces a <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'El identificador del proceso del descubrimiento asociado en ejecución.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'El depósito RU de la parte superior de este dispositivo.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La cadena comunitaria SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'El SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'El protocolo de autenticación SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'El SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'El protocolo de privacidad SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'El nivel de seguridad SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'El nombre de seguridad SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'El SNMPv3 context Engine ID (opcional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nombre del contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'La URL del sistema externo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'La URL de tu Open-AudIT Servidor que este coleccionista reportará a (sin barras de rastreo).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'La URL de los scripts de auditoría debe enviar su resultado a.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'El nombre completo de este usuario.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La base de referencia asociada. Enlaces a <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'El descubrimiento asociado (si es necesario). Enlaces a <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'El atributo a la prueba (del <code>devices</code> cuadro).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'El atributo a la prueba (debe coincidir con un nombre de campo externo desde abajo).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'El guión de auditoría sobre el cual basar sus personalizaciones.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'El camino base desde el cual buscar Usuarios.';

$GLOBALS["lang"]['The benchmark type.'] = 'El tipo de referencia.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'El edificio en el que se encuentra el estante.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'El número calculado de dispositivos a crear externamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'El número calculado de dispositivos a crear en Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Los coleccionistas IP interna utilizados cuando se ejecuta un descubrimiento.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'El nombre de la columna de la mesa exterior. Debe ser uno de: clase, medio ambiente, estado, tipo o menu_categoría.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'El comando ejecutado en el dispositivo de destino o código de servidor Open-AudIT ejecutado durante el descubrimiento.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La configuración de su grupo puede ser: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> o en blanco.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La contraseña de las credenciales. Si las credenciales son una clave SSH, esta es la contraseña utilizada para desbloquear la clave y es opcional.';

$GLOBALS["lang"]['The credentials username.'] = 'Las credenciales de usuario.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'El estado actual del Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'El estado actual del descubrimiento.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'El dashboard que se mostrará por defecto para este usuario. Enlaces a <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La versión de la base de datos y la versión web son inconsistentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La fecha de expiración de la licencia.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La fecha en que el software es interrumpido por el fabricante. Por lo general sustituido por una versión más reciente. El mantenimiento todavía puede estar disponible.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La fecha en que el software ya no recibe actualizaciones y es efectivamente descontinuado por completo. El mantenimiento se suspende.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La fecha en que este artículo fue cambiado o añadido (sólo lectura). NOTA - Este es el timetamp del servidor.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La fecha/hora cuando se creó este resultado.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'El día del mes cuando esta tarea debe ejecutar (* por cada día).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'El día de la semana en que esta tarea debe ejecutar (* por cada día).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'El idioma predeterminado asignado a cualquier usuario creado por este método.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'El dispositivo debe responder a una ping Nmap antes de que se considere en línea.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'El dispositivo dentro de Open-AudIT. Enlaces a <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'El enlace directo para el script es';

$GLOBALS["lang"]['The email address of the reciever'] = 'La dirección de correo electrónico del reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'La empresa binaria de FirstWave es necesaria para una licencia. Por favor, descargar Open-AudIT desde';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Toda la base de referencia asociada este resultado es de.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'El ID de ubicación referencia externamente. Por lo general poblada por las auditorías de Cloud.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La primera vez que Open-AudIT recuperó detalles de este dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'El piso del estante está situado en.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La tabla de referencia exterior. Debe ser uno de: dispositivos, ubicaciones, orgs o consultas.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'El formato utilizado para la salida a ser enviado por correo electrónico.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La columna completamente cualificada sobre la cual agrupar. NOTA: Cuando tipo = tráfico, esto representa la consulta roja id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'El table.column completamente calificado. Múltiples pueden ser proporcionados, separados por una coma (sin espacios).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La consulta SQL generada para probar esta vulnerabilidad. Este campo se puede editar para corregir la consulta según sea necesario.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'El grupo de dispositivos en los que se ejecutó la línea de referencia.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'El grupo que proporciona una lista de dispositivos para la integración. Enlaces a <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'La hora del día en que esta tarea debe ejecutar (* por cada hora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'La id del dispositivo conectado. Enlaces a <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La columna identificativa (integer) en la base de datos (leer solamente).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'El entero de gravedad.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'La dirección ip del método Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'El idioma para traducir la interfaz web al usuario.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La última fecha y hora que este artículo fue ejecutado (sólo lectura).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La última vez que Open-AudIT recuperó detalles de este dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La última vez que se ejecutó este parámetro.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La última vez que se realizó esta integración.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'El peso físico máximo (en KGs) este rack puede contener.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'El total máximo de BTUs este rack está clasificado para.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La columna secundaria opcional. NOTA: Cuando tipo = tráfico, esto representa la consulta amarilla id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La tercera columna opcional. NOTA: Cuando tipo = tráfico, esto representa la consulta verde id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'La orientación de este dispositivo.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'El identificador de proceso de este artículo de la cola.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'El proceso que se utilizó último para recuperar detalles sobre el dispositivo';

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

$GLOBALS["lang"]['The result of the command.'] = 'El resultado del comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La habitación en la que se encuentra el estante.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La fila en la que se encuentra el estante.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La clave secreta utilizada en conjunto con la tecla AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La fecha de final de vida del software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La fecha de terminación del servicio.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La columna de base de datos específica de la tabla de bases de datos especificada.';

$GLOBALS["lang"]['The specific database table.'] = 'La tabla de bases de datos específica.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Las opciones estándar de sincronización de Nmap. Usualmente utilizamos -T4 (Aggressive) ya que esto se recomienda para una banda ancha decente o conexión a ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'El estado de esta integración';

$GLOBALS["lang"]['The status of this queued item.'] = 'El estado de este artículo demandado.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'El objetivo IP se refiere a (si existe).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'El identificador único de este servidor.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'La cuenta de usuario que utiliza este colector. Enlaces a <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'El nombre de usuario utilizado para acceder al sistema externo.';

$GLOBALS["lang"]['The users email address.'] = 'La dirección de correo electrónico de los usuarios.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Las horas habituales de operación en este sitio.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'El valor asignado al artículo.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'El valor que se almacena para este artículo en particular.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'El nombre del vendedor según las entradas del CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'El vendedor tomado del CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'El directorio web en el host que Open-AudIT está instalado (requiere una barra de seguimiento).';

$GLOBALS["lang"]['The widget at position '] = 'El widget en posición ';

$GLOBALS["lang"]['The width of this device.'] = 'El ancho de este dispositivo.';

$GLOBALS["lang"]['Then'] = 'Entonces...';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Este CVE será recuperado y sobreescribirá el CVE existente si existe.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Este atributo se almacena como un objeto JSON. Es la lista de todas las colecciones y contiene el nombre de la colección junto con <code>c</code>, <code>r</code>, <code>u</code> y,o <code>d</code> que representan crear, leer, actualizar y eliminar. Estas son las acciones que un usuario puede realizar sobre los elementos de esa colección particular.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Esto puede ser un varchar (un campo de texto), una lista (una lista de valores que se pueden seleccionar) o una fecha.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Este coleccionista identificador universalmente único.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Esta descripción es auto-poblada y debe ser idealmente dejado como-es.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Esta característica requiere un Profesional o una licencia Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Esta es generalmente la columna primaria, a menos que se configura de otra manera. NOTA: Cuando tipo = tráfico, esto representa el texto secundario.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Este artículo debe coincidir con el valor del atributo seleccionado o contiene el ID de la consulta a utilizar.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Este artículo debe coincidir con el valor del atributo seleccionado.';

$GLOBALS["lang"]['This license expires on'] = 'Esta licencia expira en';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Esto debe ajustarse a 1 o a la altura del rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Esto auto-poblará.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Esto reducirá considerablemente el escaneo de descubrimiento.';

$GLOBALS["lang"]['Thursday'] = 'Jueves';

$GLOBALS["lang"]['time_caption'] = 'Captación del tiempo';

$GLOBALS["lang"]['Time Caption'] = 'Captación del tiempo';

$GLOBALS["lang"]['time_daylight'] = 'Hora del día';

$GLOBALS["lang"]['Time Daylight'] = 'Hora del día';

$GLOBALS["lang"]['Time to Execute'] = 'Hora de ejecutar';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Horas';

$GLOBALS["lang"]['Timing'] = 'Horas';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Título';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Estilo de barra de herramientas';

$GLOBALS["lang"]['Toolbar Style'] = 'Estilo de barra de herramientas';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Puertos';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicional chino';

$GLOBALS["lang"]['Traffic Light'] = 'Tráfico de luz';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad y Tabago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Solución de problemas LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Pruebe todas las últimas características con una licencia de dispositivo GRATIS 100 de Open-AudIT Enterprise. Por favor, lea el  ha href=\';

$GLOBALS["lang"]['Tuesday'] = 'Martes';

$GLOBALS["lang"]['Tunisia'] = 'Túnez';

$GLOBALS["lang"]['Turkey'] = 'Turquía';

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

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ucrania';

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

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Use Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detección de la versión de servicio';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Uso para la autenticación';

$GLOBALS["lang"]['Use for Roles'] = 'Uso para funciones';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Usuarios, Roles y Orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Usando Entra para Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Usando OKTA para Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Por lo general Mb/s, desde la ubicación A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Por lo general Mb/s, desde la ubicación B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Por lo general Mb/s, a Localización A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Por lo general Mb/s, a Localización B.';

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

$GLOBALS["lang"]['values'] = 'Valores';

$GLOBALS["lang"]['Values'] = 'Valores';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['vendors'] = 'Vendedores';

$GLOBALS["lang"]['Vendors'] = 'Vendedores';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versión';

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

$GLOBALS["lang"]['View'] = 'Ver';

$GLOBALS["lang"]['View All'] = 'Ver todos';

$GLOBALS["lang"]['View Details'] = 'Ver detalles';

$GLOBALS["lang"]['View Device'] = 'Ver dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Ver Descubrimiento';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtual Private Network';

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

$GLOBALS["lang"]['vulnerability_id'] = 'ID de vulnerabilidad';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID de vulnerabilidad';

$GLOBALS["lang"]['WHERE'] = 'Donde';

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

$GLOBALS["lang"]['Web'] = 'Web';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Bienvenido a FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Sáhara Occidental';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '¿Qué puedo esperar si no tengo credenciales';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '¿Cuál es el propósito de este rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '¿Cuál es el tipo de esta ubicación. Tipos admisibles <code>attributes</code> mesa.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Al integrar dispositivos del sistema externo, si el dispositivo no existe en Open-AudIT ¿deberíamos crearlo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Al integrar dispositivos del sistema externo, si el dispositivo ha sido actualizado en el sistema externo, ¿deberíamos actualizarlo en Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Cuando recuperemos un dispositivo externo, ¿deberíamos correr el descubrimiento?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Cuando este parámetro está programado para ser ejecutado. Derivado de lo asociado <code>tasks.type</code> y <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Cuando se creó este registro.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Cuando este artículo de la cola comenzó a procesar.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Cuando ejecutemos esta base de referencia, deberíamos comprobar los elementos en dispositivos que no estén en una política para esta línea de referencia.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Cuando recibamos un puerto abierto, ¿debemos intentar probar la versión del servicio que se ejecuta actualmente sobre él? Esto ayuda a confirmar los servicios de funcionamiento reales.';

$GLOBALS["lang"]['where'] = 'Donde';

$GLOBALS["lang"]['Where'] = 'Donde';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Dónde en la pantalla Detalles del dispositivo te gustaría ver este campo aparecer.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Donde el estante está en la fila.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Si la vulnerabilidad afecta a componentes más allá de su propio uso de Impacto, Disponibilidad y Confidencialidad.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Si la interacción del usuario es necesaria (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A qué OS se aplica este punto de referencia.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Que dispositivos deben crear Open-AudIT desde el sistema externo (si los hay). Usando Todos, Ninguno o un atributo dado.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Que sub-menú deberíamos mostrar esta consulta.';

$GLOBALS["lang"]['Who made this rack.'] = 'Quien hizo este basurero.';

$GLOBALS["lang"]['Why Windows Server Only?'] = '¿Por qué Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = '¿Por qué excluimos esta política?';

$GLOBALS["lang"]['Wide Area Network'] = 'Wide Area Network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Tipo';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Wireless Local Area Network';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Grupo de trabajo';

$GLOBALS["lang"]['Workgroup'] = 'Grupo de trabajo';

$GLOBALS["lang"]['Working Credentials'] = 'Credenciales de trabajo';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Query amarillo';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Sí.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Usted puede querer copiar y pegar esta URL en un correo electrónico a su personal.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Usted debe eliminar su licencia existente antes de añadir una nueva licencia.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriales de YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Tu clave AWS EC2 API.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Sus credenciales de Google Compute como JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Sus Licencias';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Su ID de cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Su secreto cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Su ID de suscripción de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Su identificación de cliente de Microsoft Azure.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Su SQL para seleccionar atributos que poblarán esta consulta.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Su SQL para seleccionar dispositivos que poblarán este grupo.';

$GLOBALS["lang"]['Your SSH key.'] = 'Tu llave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Sus credenciales de acceso, según la API nativa de las nubes.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Su descripción del estado de esta conexión (provisionado, retirado, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Su descripción de este artículo.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Su nombre genérico para esta pieza de software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Su versión genérica para esta pieza de software';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'activo';

$GLOBALS["lang"]['active directory'] = 'directorio activo';

$GLOBALS["lang"]['active/active'] = 'activo/activo';

$GLOBALS["lang"]['active/passive'] = 'activo/pasivo';

$GLOBALS["lang"]['advertisement'] = 'publicidad';

$GLOBALS["lang"]['alert'] = 'alerta';

$GLOBALS["lang"]['all'] = 'Todos';

$GLOBALS["lang"]['allocated'] = 'asignados';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'Internet';

$GLOBALS["lang"]['application'] = 'aplicación';

$GLOBALS["lang"]['approved'] = 'aprobado';

$GLOBALS["lang"]['attribute'] = 'atributo';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'respaldo';

$GLOBALS["lang"]['banned'] = 'prohibida';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'inferior';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'construcción';

$GLOBALS["lang"]['cloud'] = 'nube';

$GLOBALS["lang"]['code'] = 'código';

$GLOBALS["lang"]['collector'] = 'coleccionista';

$GLOBALS["lang"]['compute'] = 'computador';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'contiene';

$GLOBALS["lang"]['create'] = 'crear';

$GLOBALS["lang"]['created'] = 'creado';

$GLOBALS["lang"]['critical'] = 'crítica';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'base de datos';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'delegado';

$GLOBALS["lang"]['delete'] = 'Borrar';

$GLOBALS["lang"]['deleted'] = 'suprimido';

$GLOBALS["lang"]['denied'] = 'denegada';

$GLOBALS["lang"]['devices'] = 'dispositivos';

$GLOBALS["lang"]['digitalocean'] = 'digitaloceo';

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

$GLOBALS["lang"]['fixed'] = 'fijo';

$GLOBALS["lang"]['floor'] = 'planta baja';

$GLOBALS["lang"]['front'] = 'frontal';

$GLOBALS["lang"]['front-left'] = 'delantera izquierda';

$GLOBALS["lang"]['front-right'] = 'derecho delantero';

$GLOBALS["lang"]['github'] = 'Github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'mayores o iguales';

$GLOBALS["lang"]['greater than'] = 'más grande que';

$GLOBALS["lang"]['group'] = 'grupo';

$GLOBALS["lang"]['head'] = 'cabeza';

$GLOBALS["lang"]['here'] = 'aquí.';

$GLOBALS["lang"]['high availability'] = 'alta disponibilidad';

$GLOBALS["lang"]['howto'] = 'Howto';

$GLOBALS["lang"]['ignored'] = 'ignorado';

$GLOBALS["lang"]['in'] = 'dentro';

$GLOBALS["lang"]['inactive'] = 'inactivo';

$GLOBALS["lang"]['incomplete'] = 'incompleto';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc';

$GLOBALS["lang"]['is licensed to'] = 'está autorizado';

$GLOBALS["lang"]['left'] = 'izquierda';

$GLOBALS["lang"]['less or equals'] = 'menos o igual';

$GLOBALS["lang"]['less than'] = 'menos que';

$GLOBALS["lang"]['license'] = 'licencia';

$GLOBALS["lang"]['like'] = 'como';

$GLOBALS["lang"]['line'] = 'línea';

$GLOBALS["lang"]['load balancing'] = 'balanceo de carga';

$GLOBALS["lang"]['location'] = 'ubicación';

$GLOBALS["lang"]['managed'] = 'gestionado';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punto de montaje';

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

$GLOBALS["lang"]['openldap'] = 'abierto';

$GLOBALS["lang"]['optimized'] = 'optimizado';

$GLOBALS["lang"]['optionally '] = 'opcionalmente ';

$GLOBALS["lang"]['other'] = 'otros';

$GLOBALS["lang"]['package'] = 'paquete';

$GLOBALS["lang"]['partition'] = 'partición';

$GLOBALS["lang"]['pass'] = 'paso';

$GLOBALS["lang"]['pending'] = 'pendientes';

$GLOBALS["lang"]['performance'] = 'rendimiento';

$GLOBALS["lang"]['performed'] = 'realizado';

$GLOBALS["lang"]['pie'] = 'pastel';

$GLOBALS["lang"]['planning'] = 'planificación';

$GLOBALS["lang"]['predictable'] = 'predecible';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'trasero';

$GLOBALS["lang"]['rear-left'] = 'trasero-izquierda';

$GLOBALS["lang"]['rear-right'] = 'derecho trasero';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'liberación';

$GLOBALS["lang"]['reserved'] = 'reservadas';

$GLOBALS["lang"]['right'] = 'derecho';

$GLOBALS["lang"]['room'] = 'habitación';

$GLOBALS["lang"]['row'] = 'fila';

$GLOBALS["lang"]['stand-alone'] = 'independiente';

$GLOBALS["lang"]['standard'] = 'estándar';

$GLOBALS["lang"]['starts with'] = 'comienza con';

$GLOBALS["lang"]['storage'] = 'almacenamiento';

$GLOBALS["lang"]['timestamp'] = 'timetamp';

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

$GLOBALS["lang"]['unallocated'] = 'no asignada';

$GLOBALS["lang"]['unauthorised'] = 'no autorizada';

$GLOBALS["lang"]['unknown'] = 'desconocida';

$GLOBALS["lang"]['unmanaged'] = 'no gestionados';

$GLOBALS["lang"]['unused'] = 'no utilizados';

$GLOBALS["lang"]['update'] = 'actualización';

$GLOBALS["lang"]['valid'] = 'válido';

$GLOBALS["lang"]['virtualisation'] = 'virtualización';

$GLOBALS["lang"]['warning'] = 'advertencia';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'Sí.';

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

