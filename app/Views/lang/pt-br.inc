<?php

$GLOBALS["lang"][' Default, currently '] = 'Padrão, atualmente';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = 'agora é suportado com um arquivo de idioma. Para alterar o usuário para usar este idioma, clique';

$GLOBALS["lang"][' seconds'] = 'segundos';

$GLOBALS["lang"]['10 Minutes'] = '10 minutos';

$GLOBALS["lang"]['15 Minutes'] = '15 minutos';

$GLOBALS["lang"]['30 Minutes'] = '30 Minutos';

$GLOBALS["lang"]['5 Minutes'] = '5 Minutos';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br> <strong>NOTE</strong> - Você está acessando esta URL do servidor Open-AudIT local. O script baixado não será capaz de enviar quando executado em qualquer outra máquina. Se você precisar auditar outras máquinas, baixe o script de qualquer máquina remota, não usando um navegador no próprio servidor Open-AudIT.';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><classe forte="perigo de texto"> NOTA</strong> - Você deve ter credenciais SSH ou SSH Key para executar benchmarks em um dispositivo alvo.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><forte>Baseline</forte> - O documento abrangente que contém a definição de base e os testes de políticas individuais.<br> <br> <forte>Políticas</forte> - Os testes individuais contidos dentro de uma linha de base. Cada teste é para um item específico. Um exemplo seria o teste para SSH versão 1.2.3.<br> <br> <forte>Details</forte> - Baselines pode comparar portas netstat, usuários e software.<br> <br> <forte>Software</forte> - Para comparar o software, verificamos o nome e a versão. Como os números de versão não são todos padronizados em formato, quando recebemos um resultado de auditoria, criamos um novo atributo chamado software_padder que armazenamos no banco de dados juntamente com o resto dos detalhes de software para cada pacote. Por esta razão, as linhas de base usando políticas de software não funcionarão quando forem executadas contra um dispositivo que não tenha sido auditado até 1.10 (pelo menos). Políticas de software podem testar contra a versão ser "igual a", "maior que" ou "igual a ou maior que".<br> <br> <forte>Portas Netstat</forte> - Os Portos Netstat usam uma combinação de número de porta, protocolo e programa. Se todos estiverem presentes, a política passa.<br> <br> <forte>Usuários</forte> - Os usuários trabalham de forma semelhante à Netstat Ports. Se um usuário existe com um nome, status e senha correspondentes (alterável, expira, necessário) então a política passa.<br> <br> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p> Uma localização é um endereço físico que pode ter dispositivos associados a ele.<br> <br>Você pode atribuir coordenadas (lat/long) e se houver dispositivos atribuídos, a localização aparecerá no mapa Open-AudIT Enterprise.<br> <br></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br>Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br> <br></p>'] = '<p>Uma rede é derivada de entradas de descoberta e atributos do dispositivo.<br> <br>Open-AudIT pode ser configurado para apenas aceitar resultados de auditoria das redes aqui contidas. Para definir isso vá para a configuração e defina o atributo <code>bensed_subnets_use</code>.<br> <br></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Um resumo exibirá uma lista de itens, agrupados pelos valores distintos do atributo especificado pelos atributos <code>table</code> e <code>column</code>.<br> <br>Quando um resumo é executado, o resultado será uma lista de valores distintos para esse <code>table</code> e <code>column</code>. Haverá links nos valores que permitem ao usuário ver os dispositivos correspondentes.<br> <br>Se o atributo de <code>extra_colunns</code> for preenchido, a página resultante conterá essas colunas além das colunas padrão do dispositivo.<br> <br></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentes permitem que você audite PCs sem uma descoberta. Instale o agente e ele irá fazer check-in com o servidor todos os dias e se auditar. Não importa se seus computadores estão em firewall, dados de auditoria ainda aparecerão no Open-AudIT.</p><p> Ao testar <forte>se</forte> um agente deve realizar ações, todos os três testes devem passar (se o teste for definido). <forte>Depois</forte> as ações são tomadas.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>As aplicações são definidas por você, o usuário e armazenadas para o Open-AudIT para usar e associar com dispositivos.<br> <br></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atributos são armazenados para Open-AudIT para usar em campos específicos.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p> Ser capaz de determinar quais máquinas são configuradas o mesmo é uma parte importante da administração e auditoria de sistemas – e agora relatar sobre isso será feito simples e automatizado. Uma vez que você definir sua linha de base, ela será executada automaticamente contra um conjunto de dispositivos em um cronograma pré-determinado. A saída dessas linhas de base executadas estará disponível para visualização na web, importação para um sistema de terceiros ou mesmo como um relatório impresso.<br> <br> As linhas de base permitem combinar dados de auditoria com um conjunto de atributos que você definiu anteriormente (sua linha de base) para determinar a conformidade de dispositivos.<br> <br> Por exemplo - você pode criar uma linha de base a partir de um dispositivo rodando Centos 6 que atua como um de seus servidores de apache em um cluster. Você sabe que este servidor em particular está configurado exatamente como você quer, mas você não tem certeza se outros servidores no cluster estão configurados exatamente da mesma forma. As linhas de base permitem determinar isso.<br> <br> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters são armazenados em Open-AudIT para associar dispositivos para melhor registrar, gerenciar e estimar custos de licenciamento.<br> <br></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Components é um termo genérico usado para as tabelas que armazenam os atributos de um dispositivo. Essas tabelas são: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, rede, nmap, ótico, pagefile, partition, policy, print_queue, processador, radio, route, san, scsi, server_item, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> Além disso, classificamos as seguintes tabelas também como relacionadas ao dispositivo: aplicação, anexo, cluster, credencial, imagem.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>As credenciais são criptografadas quando armazenadas no banco de dados.<br> <br>Quando um Discovery é executado, um dispositivo tem suas credenciais recuperadas e testadas para conexão primeiro (a partir da tabela <code>credencial</code>). Se estes falharem, as credenciais associadas com o Org fornecido <code>credentials.org_id</code> também são testadas contra o dispositivo. Credenciais de trabalho são armazenadas em um nível individual de dispositivo na tabela credencial (nota - sem "s" no nome da tabela).<br> <br>Chaves SHS são testadas antes do nome de usuário / senha SSH. Ao testar SSH, as credenciais também serão marcadas como trabalhando com sudo ou sendo root.<br> <br>Para facilitar o uso, as senhas do Windows não devem conter uma única ou dupla aspas. Esta é uma limitação remota do WMI, não uma limitação do Open-AudIT.<br> <br></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>As credenciais são usadas para acessar dispositivos.<br> <br>As credenciais de confiança devem ser uma das primeiras coisas que você faz após instalar Open-AudIT.<br> <br></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = 'Defina seus racks e atribua dispositivos em suas posições. Você já tem seus dispositivos em Open-AudIT e você sabe suas localizações. Open-AudIT estende isso para permitir que você crie um rack e atribua dispositivos a ele. Open-AudIT fornecerá até mesmo uma visualização do rack e dos dispositivos contidos dentro. Se você fornecer uma imagem do dispositivo, essa imagem será usada na visualização. Você pode olhar para o rack na tela e ver os mesmos itens que você veria se você estivesse de pé na frente dele.<br> <br></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Dispositivos em sua rede precisam ser gerenciados. Mas como mantém os seus registos actualizados? Uma planilha - defintley não. Isso estará desatualizado em horas, se não em dias. Por que manualmente tentar acompanhar. Use Open-AudIT para digitalizar automaticamente suas redes e gravar seus dispositivos - fabricante, modelo, série e mais de 100 outros atributos. Listas completas de software, serviços, discos, portas abertas, usuários, etc. Veja automaticamente se um atributo foi adicionado, removido ou alterado.<br> <br>Uma vez que o Open-AudIT estiver configurado, você pode sentar e relaxar. Os relatórios de alteração foram enviados por e-mail para você em um cronograma, por exemplo - que novos dispositivos descobrimos esta semana? Que novo software foi instalado esta semana? Houve alguma mudança de hardware no mês passado?<br> <br>Expandir nos campos armazenados facilmente com seus próprios atributos personalizados.<br> <br>Adicione dispositivos que não estão conectados à sua rede ou aqueles que seu servidor Open-AudIT não consegue alcançar.<br> <br>Computadores, switches, roteadores, impressoras ou qualquer outro dispositivo na sua rede - Open-AudIT pode auditá-los todos.<br> <br></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Discoveries estão no coração do que Open-AudIT faz.<br> <br>Como você saberia "O que está na minha rede?"<br> <br>Discoveries são itens de dados preparados que permitem executar uma descoberta em uma rede em um único clique, sem entrar nos detalhes dessa rede cada vez.<br> <br></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Opções são uma configuração global alterada no <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. Se você tem uma licença Open-AudIT Enterprise estes são settable por descoberta e, além disso, mais personalizável como necessário. Descoberta As opções são as seguintes (incluindo um tempo indicativo para analisar um IP individual):<br/><br><forte>UltraFast</forte>: <i>1 segundo</i>. Examine apenas as portas que o Open-AudIT precisa usar para falar com o dispositivo e detectar um dispositivo IOS (WMI, SSH, SNMP, Apple Sync). Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> não é considerada aberta. O dispositivo deve responder a um Nmap ping. Use timing agressivo.<br><br/><forte>SuperFast</forte>: <i>5 segundos</i>. Examine as 10 portas TCP e UDP superiores, bem como a porta 62078 (Detecção de IOS de maçã). Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> não é considerada aberta. O dispositivo deve responder a um Nmap ping. Use timing agressivo.<br/><br/><forte>Fast</forte>: <i>40 segundos</i>. Examine as 100 portas TCP e UDP superiores, bem como a porta 62078 (Detecção IOS de maçã). Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> não é considerada aberta. O dispositivo deve responder a um Nmap ping. Use timing agressivo.<br/><br/><forte>Médio (Classic)</forte>: <i>90 segundos</i>. O mais perto possível de uma varredura Open-AudIT tradicional. Analise as 1000 portas TCP superiores, bem como 62078 (detecção de IOS de maçã) e UDP 161 (SNMP). Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> é considerada aberta (e irá desencadear a detecção do dispositivo). Os dispositivos são digitalizados independentemente de uma resposta a um ping Nmap. Use timing agressivo.<br/><br/><forte>Médio</forte>: <i>100 segundos</i>. Analise as portas 1000 TCP e 100 UDP superiores, bem como a porta 62078 (Detecção de IOS de maçã). Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> não é considerada aberta. O dispositivo deve responder a um Nmap ping. Use timing agressivo.<br/><br/><forte>lento</forte>: <i>4 minutos</i>. Analise as portas 1000 TCP e 100 UDP superiores, bem como a porta 62078 (Detecção de IOS de maçã). Detecção de versões habilitada. Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> é considerada aberta (e irá desencadear a detecção do dispositivo). O dispositivo deve responder a um Nmap ping. Use o tempo normal.<br/><br/><forte>UltraSlow</forte>: <i>20 minutos</i>. Não recomendado. Analise as 1000 portas TCP e UDP superiores, bem como a porta 62078 (Detecção de IOS de maçã). Os dispositivos são digitalizados independentemente de uma resposta a um ping Nmap. Detecção de versões habilitada. Uma porta <code>open>filtrada</code> é considerada aberta. Uma porta <code>filtrada</code> é considerada aberta (e irá desencadear a detecção do dispositivo). Use timing educado.<br/><br/><forte>Personalismo</forte>: <i>Tempo desconhecido</i>. Quando outras opções que não as definidas por um predefinido padrão de descoberta são alteradas.<br><br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupos são usados como listas simples de dispositivos que correspondem às condições requeridas. Se solicitado usando JSON eles retornam uma lista de <code>dispositivos.id</code> apenas. Se solicitado utilizando a interface web, eles retornam a lista de atributos de coluna padrão.<br> <br></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Se o usuário iniciar sessão no Open-AudIT não tiver acesso ao LDAP de busca (e você estiver usando OpenLDAP), você pode usar outra conta que tenha esse acesso. Use o <code>ldap_dn_account</code> e <code>ldap_dn_password</code> para configurar isso.<br> <br><forte> Documentação útil</forte><br> <br>
<a href="/index.php/auth/help">General Auth Help</a><br> <br>
<a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
<a href="/index.php/faq?name=Usando OKTA para Auth">Usando OKTA para Auth</a><br> <br>
<a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
<a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p> Se você adicionar um tipo de dispositivo, para exibir o ícone associado você terá que copiar manualmente o arquivo formatado .svg para o diretório:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>Se você adicionar um tipo de local, para exibir o ícone associado você terá que copiar manualmente o ícone 32x32px para o diretório:<br><em>Linux</em>:/usr/local/open-audit/public/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p><p> Quando o <i>resource</i> é um <code>dispositivo</code>, válido <i>types</i> são: <code>class</code>, <code>environment</code>, <code>status</code> e <code>type</code>. Se o <i>resource</i> for <code>locations</code> ou <code>org</code> o único válido <i>type</i> é <code>type</code>. Se o <i>resource</i> for um <code>query</code> o único valor válido <i>type</i> é <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Se você pretende auditar completamente suas máquinas de nuvem, não se esqueça que você também precisará dessas credenciais salvas no Open-AudIT.</p><p> Certifique-se de permitir as portas corretas se estiver usando o Microsoft Azure (22 para SSH, etc). Verifique sua Máquina Virtual -> Regras de Rede.<br> <br></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Se você selecionar um tipo Lista, o campo "valores" será ativado. Você deve colocar aqui uma lista separada por vírgula de valores selecionáveis. Estes serão exibidos em uma caixa suspensa sempre que o campo for editado.<br> <br>Como a maioria dos outros atributos, Campos podem ser editados em massa. Use a função Bulk Edit como normalmente faria e verá que os Campos estão disponíveis para entrada.<br> <br>Visualizar a tela de detalhes do dispositivo, abrir a seção contendo o campo e (se você tiver acesso suficiente) você pode clicar no valor do campo para editá-lo.<br> <br></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>No mundo em constante mudança de segurança do computador, onde novas vulnerabilidades estão sendo descobertas e remendadas todos os dias, a aplicação de conformidade de segurança deve ser um processo contínuo. Deve também incluir uma forma de proceder a ajustamentos das políticas, bem como uma avaliação periódica e um acompanhamento dos riscos. O ecossistema OpenSCAP fornece ferramentas e políticas personalizáveis para uma implementação rápida, econômica e flexível desses processos.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrações permitem que você configure a seleção de dispositivos e agendamentos para Open-AudIT para falar com sistemas externos.<br> <br></p>';

$GLOBALS["lang"]['<p>It is easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen over time. All the devices discovered last week, last month or any other period. New software found. What about devices that have not been seen - where are they? How useful to be able to specify these items over time.<br> <br></p>'] = '<p> É fácil ver relatórios ao longo do tempo são extremamente úteis. Não só você pode ver os dados Open-AudIT, mas agora o que ele tem visto ao longo do tempo. Todos os dispositivos descobertos na semana passada, no mês passado ou em qualquer outro período. Novo software encontrado. E os dispositivos que não foram vistos - onde estão? Como é útil especificar esses itens ao longo do tempo.<br> <br></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap timing detalhes são encontrados na parte inferior desta página vinculada <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. A partir dessa página:<br> <br><em>Se você estiver em uma conexão de banda larga ou ethernet decente, eu recomendaria usar sempre -T4 (Agressivo). Algumas pessoas amam -T5 (Louco) embora seja muito agressivo para o meu gosto. As pessoas às vezes especificam -T2 (polite) porque acham que é menos provável que os hosts caiam ou porque se consideram educados em geral. Eles muitas vezes não percebem o quão lento -T2 realmente é. Sua varredura pode demorar dez vezes mais do que uma varredura padrão. Falhas de máquina e problemas de largura de banda são raros com as opções de tempo padrão -T3 (Normal) e por isso eu normalmente recomendo que para scanners cautelosos. Omitir detecção de versão é muito mais eficaz do que jogar com valores de tempo na redução desses problemas.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT pode ser configurado para usar diferentes métodos para autenticar um usuário e, além disso, para criar uma conta de usuário usando funções atribuídas e orgs com base em membros do grupo.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Aud aberto A TI pode recuperar detalhes sobre um arquivo ou diretório de arquivos e monitorar esses arquivos para alterações de acordo com outros atributos no banco de dados Open-AudIT.<br> <br>Esta funcionalidade funciona fora da caixa para servidores Linux Open-AudIT, mas precisa de uma mudança no nome da conta de serviço sob um servidor Windows Open-AudIT.<br> <br>Os clientes suportados são Windows e Linux.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Aud aberto IT pode recuperar detalhes sobre um arquivo, perguntar ao gerenciador de pacotes nativo se eles são conhecidos por ele e monitorar esses arquivos para alterações de acordo com outros atributos no banco de dados Open-AudIT.<br> <br>Os clientes suportados são apenas Linux.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-AudIT pode armazenar informações em campos personalizados que estão associados a cada dispositivo.<br> <br>Uma vez criado um Campo Adicional, ele pode ser usado em consultas e grupos como qualquer outro atributo no banco de dados.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Aud aberto TI vem com muitas consultas integradas. Se você precisar de uma consulta específica e nenhuma das consultas pré-embaladas se encaixam em suas necessidades, é muito fácil criar uma nova e carregá-la em Open-AudIT para execução.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Aud aberto TI vem com muitos resumos embutidos. Se você precisa de um resumo específico e nenhum dos resumos pré-embalados se encaixam em suas necessidades, é muito fácil criar um novo e carregá-lo em Open-AudIT para execução.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT é suportado pela FirstWave com um nível incrível de suporte. Se você prefere uma comunidade ativa de doadores de apoio, há isso também. Onde mais você pode falar diretamente com os desenvolvedores e obter uma resposta em 24 horas? Tente isso com outros produtos! Apoio incrível. Paragem total. Você precisa de apoio, nós fornecemos apoio. Sem "se" ou "mas". Grande apoio. Período.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>O Open-AudIT oferece multilotação fora da caixa!<br> <br>Orgs (organizações) em Open-AudIT são um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de "Roles" atribuídos que definem quais ações eles podem tomar sobre os itens atribuídos aos Orgs aos quais eles têm acesso. A combinação de um usuário "orgs" e "roles" define o que eles podem e não podem fazer dentro do Open-AudIT.<br> <br>A maioria dos itens do Open-AudIT são atribuídos a um Org. Dispositivos, Locais, Redes, etc.<br> <br>Orgs podem ter filhos Orgs. Pense em uma estrutura do gráfico organizacional (árvore). Se um usuário tem acesso a um Org específico, ele também tem acesso a esse Orgs descendentes. Para mais informações, veja isso <a href="/index.php/faq?name=Users, Roles and Orgs"> FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>O Open-AudIT oferece multilotação fora da caixa!<br> <br>Orgs (organizações) em Open-AudIT são um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de "Roles" atribuídos que definem quais ações eles podem tomar sobre os itens atribuídos aos Orgs aos quais eles têm acesso. A combinação de um usuário "orgs" e "roles" define o que eles podem e não podem fazer dentro do Open-AudIT.<br> <br>A maioria dos itens do Open-AudIT são atribuídos a um Org. Dispositivos, Locais, Redes, etc.<br> <br>Orgs podem ter filhos Orgs. Pense em uma estrutura do gráfico organizacional (árvore). Se um usuário tem acesso a um Org específico, ele também tem acesso a esses descendentes de Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Visualizar rapidamente o status dos dispositivos em sua rede.<br> <br></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roles em Open-Aud A TI é um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de Funções atribuídas que definem quais ações eles podem tomar sobre os itens atribuídos aos Orgs aos quais eles têm acesso. A combinação de "orgs" e "roles" define o que eles podem e não podem fazer dentro do Open-AudIT.<br> <br>
Obtenha a experiência completa da Open-AudIT Enterprise. Criar papéis permite um controle fino sobre o que seus usuários podem fazer no Open-AudIT.<br> <br>
O principal método de autorização (o que um utilizador pode fazer) baseia-se nos papéis dos utilizadores. Funções padrão são definidas como admin, org_admin, repórter e usuário. Cada função tem um conjunto de permissões (Criar, Ler, Atualizar, Apagar) para cada endpoint. A capacidade de definir papéis adicionais e editar papéis existentes está habilitada na Open-AudIT Enterprise.<br> <br>Roles também pode ser usada com a autorização LDAP (Active Directory e OpenLDAP). Instalações licenciadas para empresas têm a capacidade de personalizar o grupo LDAP para cada função definida.<br> <br></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regras examinam atributos e fazem cahnges com base na regra apropriada.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = 'As opções de digitalização permitem que você aplique facilmente um conjunto de opções a uma descoberta.<br> <br></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Mapeamento geográfico simples, intuitivo e preciso fornecido pelo Google Maps. Benefícios do Open-AudIT Google Maps para fornecer mapeamento geográfico interativo ao vivo de locais de dispositivos. Conversão automatizada de endereços de rua para geocódigos e longitude/latitude.<br> <br>
</p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = 'Pacotes de Software são usados para determinar se antivírus, backup, firewall, software aprovado ou proibido está instalado';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Alguns exemplos de atributos válidos da Subnet são: 192.168.1.1 (um único endereço IP), 192.168.1.0/24 (uma subnet), 192.168.1-3.1-20 (uma gama de endereços IP).<br> <br><em>NOTE</em> - Apenas uma subnet (de acordo com os exemplos - 192.168.1.0/24) será capaz de criar automaticamente uma rede válida para Open-AudIT. <br> <br>Se você usar um tipo Active Directory, certifique-se de ter credenciais apropriadas para falar com seu Controlador de Domínio já em <a href="../credenciais">credenciais</a>.<br> <br></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>clientes suportados são apenas Linux.<br> <br></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>As tarefas têm uma programação que espelha a programação do cron unix. Os atributos para minute, hour, day_of_mês, month, day_of_week agem de acordo com as definições do cron. Você pode selecionar múltiplos destes usando valores separados por vírgula (sem espaços). Você pode selecionar cada valor usando *.<br> <br>O <code>type</code> da tarefa pode ser um dos seguintes: baselines, coletores, descobertas, consultas, relatórios ou resumos.<br> <br>Se você deseja agendar um Baseline ou Discovery, você precisará criá-los antes de criar as tarefas. Você deve usar o ID do tipo de item em <code>sub_resource_id</code>. Por exemplo, se você deseja agendar uma Discovery, use esse ID em particular Discoveries em <code>sub_resource_id</code>.<br> <br>O valor para <code>uid</code> é específico para cada servidor Open-AudIT. Seu valor único pode ser encontrado na configuração.<br> <br>O atributo <code>options</code> é um documento JSON contendo quaisquer atributos extras necessários para executar a tarefa. Os atributos extras para relatórios, consultas e resumos são: <code>email_endereço</code> e <code>format</code>. O atributo extra para Bselines é <code>group_id</code>.<br> <br></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>O <code>type</code> do local atribuirá seu ícone.<br> <br></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p> O endpoint Atributos permite adicionar valores personalizados a diferentes atributos no Open-AudIT, no momento em que este recurso funciona nos atributos Classe, Ambiente, Estado e Tipo nos Dispositivos, no atributo Tipo tanto para Locais e Orgs como na Categoria Menu para Consultas. Se você visualizar um item de um dos tipos prvious (diga view a Lkocation) você notará que o atributo Type deve ser selecionado a partir de uma caixa suspensa. É aqui que esses valores são armazenados. Portanto, se você gostaria de adicionar um novo Tipo para ser escolhido para uma Localização, adicione-o usando o recurso Atributos.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p> O recurso Collectors permite gerenciar facilmente muitos computadores "colecionadores" que realizam a descoberta de rede. Todos os Colecionadores são controlados centralmente a partir do Servidor. As únicas portas de rede necessárias entre o Coletor e o Servidor são 80 e/ou 443.<br> <br>Faz com que o gerenciamento de redes díspares seja rápido, fácil e simples. Licenças Open-AudIT Enterprise recebem uma única licença de colecionador incluída e têm a opção de comprar mais conforme necessário..<br> <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>A seção SELECT de seu SQL <em>deve</em> conter colunas totalmente qualificadas. IE - <code>SELECT devices.id AS `disvices.id\', Devices.name AS `dispositivos.name` ...</code>.<br> <br>A seção Where do seu SQL <em>mut</em> contém <code>WHERE @filter</code> para que Open-AudIT saiba restringir sua consulta aos Orgs apropriados. SQL não contendo esta condição resultará na falha de criação da consulta, a menos que você tenha o papel de administrador.<br> <br>Uma consulta exemplo SQL mostrando atributos em dispositivos que têm um atributo <code>os_group</code> de "Linux" - <br><code>SELECT devices.id AS `disvices.id`, devices.icon AS `disvices.icon`, dispositivos. tipo AS `dispositivos.type`, devices.name AS `dispositivos.name`, devices.os_name AS `dispositivos.os_name` DE dispositivos ONDE @filter AND devices.os_group = "Linux"</code><br> <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>A seção SELECT do seu SQL <em>deve</em> Apenas contém <code>DISTINCT(dispositivos.id)</code>.<br> <br>A seção ONDE de seu SQL <em>mut</em> contém <code>WHERE @filter</code> para que o Open-AudIT saiba restringir sua consulta aos Orgs apropriados. SQL não contendo esta condição resultará em o grupo não ser criado.<br> <br>Um exemplo para SQL selecionar todos os dispositivos que executam o sistema operacional Debian - <code>SELECT DISTINCT(dispositivos.id) DESDE dispositivos ONDE @filter AND devices.os_family = "Debian"</code><br> <br></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p> O endpoint da licença permite que você rastreie o número de licenças encontradas em seus dispositivos.<br> <br>Para criar uma entrada para rastrear suas licenças você <em>deve</em> para fornecer um nome, uma organização, o número de licenças adquiridas e o nome do software. No campo <code>match_string</code> você deve fornecer o nome do software que você deseja rastrear, você pode usar o sinal de porcentagem (%) como um wildcard no match_string.<br> <br></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p> A rede deve estar no formato 192.168.1.0/24.<br> <br></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p> Os itens secundários primários e opcionais devem ser totalmente qualificados - ou seja, dispositivos. tipo ou software.name.<br> <br></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p> Não há necessidade de fazer nada se você estiver rodando Open-AudIT em um servidor Linux.<br>
<br>
Os clientes do Windows são apenas bons e não requerem ações especiais, no entanto.... para habilitar esta funcionalidade o script de auditoria deve ser executado localmente no sistema Windows alvo. Ele não pode ser executado remotamente como fazemos com chamadas WMI ao executar o script de auditoria em uma máquina Windows, enquanto segmenta uma segunda máquina Windows. Para fazer isso, precisamos copiar o script de auditoria para a máquina do Windows alvo e executá-lo. Infelizmente, a conta de serviço em que o Apache é executado é a conta do Sistema Local. Esta conta não tem acesso a recursos remotos (baseados em rede). Para trabalhar em torno desta questão, o serviço deve ser executado sob outra conta. É mais fácil usar apenas a conta de administrador local, mas você pode tentar qualquer conta que você gosta, desde que tenha os privilégios necessários. A conta do Sistema Local tem tanto acesso local quanto a conta do Administrador local.<br>
<br>
Veja nossa página habilitando <a href="/index.php/faq?name=Executando Open-AudIT Apache Service Em Windows">Executando Open-AudIT Apache Service Em Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p> Estes são os dispositivos que vivem dentro de um rack.<br> <br></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p> Este endpoint permite que você adicione seus detalhes de infraestrutura na nuvem. Open-AudIT irá então alcançar suas nuvens usando sua API nativa e retornar seus servidores, como qualquer outro dispositivo em Open-AudIT.<br> <br><em>NOTE</em> - Para usar esse recurso, nós <em>deve</em> ativar os itens de configuração match_mac (para AWS) e match_hostname (para Azure). Isso será feito automaticamente na primeira vez que uma descoberta na nuvem for executada.<br> <br>Credenciais para sua nuvem (<a href="/index.php/faq?name=Credentials for Microsoft Azure usado em Cloud Discovery">Azure</a> ou <a href="/index.php/faq?name=Credenciais para Amazon AWS usados em Cloud Discovery">AWS</a>) são necessários.<br> <br></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = 'Inicialmente configuramos a lista padrão de scripts com as opções padrão. Estes scripts padrão não podem ser excluídos. Você pode criar scripts adicionais para uso por você, conforme necessário. Seu script será baseado em um dos scripts existentes e terá opções personalizadas aplicadas. Os scripts podem então ser baixados da página da lista no menu -> Descobrir -> Scripts de Auditoria -> Lista Scripts de Auditoria<br> <br></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Quando se usa Regex para correspondência, uma página útil pode ser encontrada no <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Página Web do PHP</a>. Algumas diferenças para Perl Regex podem ser encontradas <a href="https://www.php.net/manual/en/reference.pcre.pattern.diferences.php" target="_blank">aqui</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets pode ser facilmente criado para mostrar o que é específico para o seu ambiente em seus painéis.<br> <br></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Com Open-AudIT Profissional e Enterprise você pode automatizar e programar descobertas, geração de relatórios ou verificações de linha de base para executar quando você quiser, e quantas vezes você precisar. Agende as suas descobertas para correrem todas as noites e relatórios a serem gerados e enviados por email para pessoal chave todas as manhãs. Agendas complexas ou simples, descoberta do dispositivo e geração de relatórios está a apenas um clique de distância.<br> Criar calendários de descoberta individuais para cada subnet ou controlador AD, adicionar relatórios a serem criados para o público-alvo. Desenvolver horários simples ou complexos para apoiar as necessidades da empresa, evitar backups ou impactos para as operações, ou simplesmente espalhar a conclusão da auditoria de carga e aceleração.<br> <br></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p> Você pode criar um script com todas as opções para qualquer um dos scripts de auditoria existentes - não apenas Windows. AIX, ESX, Linux, OSX e Windows estão todos cobertos.<br> <br></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p> Você pode usar o sinal de %% como um curinga no match_string.<br> <br></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Seus racks ajudam a refinar exatamente onde seus dispositivos estão localizados.<br> <br></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Um Google Maps API A chave é necessária para esta função.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Um array JSON de IDs de dispositivos que executarão este benchmark.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Um documento JSON contendo as Orgs atribuídas a este usuário. IDs retirados de <code>orgs.id</code>. Se um usuário tem acesso a um Org, ele tem acesso a esses descendentes de Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Um documento JSON contendo os atributos necessários dependendo de <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Um documento JSON contendo os atributos requeridos sobrepondo as opções escolhidas.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Um documento JSON contendo os atributos necessários sobrepondo as opções de correspondência padrão do dispositivo.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Um documento JSON contendo as funções atribuídas a este usuário. Nomes de papéis retirados de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Um objeto JSON contendo um array de atributos para mudar se a correspondência ocorrer.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Um objeto JSON contendo um array de atributos a coincidir.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Um objeto JSON contendo opções específicas de coleção.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Um objeto JSON povoado através de uma descoberta em nuvem.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Uma representação JSON contendo os detalhes do item da fila a ser executado.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Uma representação JSON dos campos para esta integração.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Uma representação JSON dos testes individuais e seus resultados em todos os dispositivos esta linha de base foi executada contra.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Uma representação da JSON dos testes que compõem esta política.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Um URL para um arquivo a ser baixado.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Um campo calculado que exibe o número de vezes que este software foi encontrado nos computadores no Org selecionado (e seus descendentes se configurado).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Um colecionador está no modo Collector ou Stand-Sone.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Uma lista de valores separada por vírgulas, uma das quais pode ser selecionada.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Um comando para executar. Quando o agente é baseado no Windows, este comando é executado dentro do agente powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Uma lista de portas TCP personalizadas para digitalizar (22 é SSH, 135 é WMI, 62078 é sincronização para iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Uma lista de portas UDP personalizadas para verificar (161 é SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Um número menor significa que será aplicado antes de outras regras.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Um número menor significa que será aplicado antes de outras regras. O peso padrão é 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Uma senha (armazenada como hash) que permite o logon ao usar a autenticação do aplicativo.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Um domínio de roteamento ou espaço de endereço onde os endereços IP e endereços MAC são únicos.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Uma zona de segurança é um domínio administrativo ou de política dentro do Domínio da Rede.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Uma breve descrição do registo.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Uma string que corresponde ao atributo <code>software.name</code>. Você pode usar o wildcard SQL padrão de porcentagem (%) para corresponder a um ou mais caracteres.';

$GLOBALS["lang"]['AD Group'] = 'Grupo AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, RDIS, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TODOS os IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Acesso Web';

$GLOBALS["lang"]['API Key required.'] = 'Chave API necessária.';

$GLOBALS["lang"]['API Result'] = 'Resultado da API';

$GLOBALS["lang"]['About'] = 'Sobre';

$GLOBALS["lang"]['Accept'] = 'Aceitar';

$GLOBALS["lang"]['access_point'] = 'Ponto de acesso';

$GLOBALS["lang"]['Access Point'] = 'Ponto de acesso';

$GLOBALS["lang"]['access_token'] = 'Token de acesso';

$GLOBALS["lang"]['Access Token'] = 'Token de acesso';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Data de Ack';

$GLOBALS["lang"]['Ack Date'] = 'Data de Ack';

$GLOBALS["lang"]['ack_time'] = 'Tempo de Ack';

$GLOBALS["lang"]['Ack Time'] = 'Tempo de Ack';

$GLOBALS["lang"]['action'] = 'Acção';

$GLOBALS["lang"]['Action'] = 'Acção';

$GLOBALS["lang"]['action_audit'] = 'Auditoria da Acção';

$GLOBALS["lang"]['Action Audit'] = 'Auditoria da Acção';

$GLOBALS["lang"]['action_command'] = 'Comando de Ação';

$GLOBALS["lang"]['Action Command'] = 'Comando de Ação';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositivos de Ação Atribuídos à Localização';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositivos de Ação Atribuídos à Localização';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositivos de Ação Atribuídos à Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositivos de Ação Atribuídos à Org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Acção Desinstalar';

$GLOBALS["lang"]['Action Uninstall'] = 'Acção Desinstalar';

$GLOBALS["lang"]['actions'] = 'Acções';

$GLOBALS["lang"]['Actions'] = 'Acções';

$GLOBALS["lang"]['Activate'] = 'Activar';

$GLOBALS["lang"]['Activate Key'] = 'Activar a Chave';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Ativar uma licença Enterprise gratuita';

$GLOBALS["lang"]['Active'] = 'Activo';

$GLOBALS["lang"]['Active / Active'] = 'Activo / Activo';

$GLOBALS["lang"]['Active / Passive'] = 'Activo/ Passivo';

$GLOBALS["lang"]['Active Directory'] = 'Pasta Activa';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domínio de Pasta Activa';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Servidor de diretório ativo';

$GLOBALS["lang"]['ad_domain'] = 'Domínio do Anúncio';

$GLOBALS["lang"]['Ad Domain'] = 'Domínio do Anúncio';

$GLOBALS["lang"]['ad_group'] = 'Grupo de anúncios';

$GLOBALS["lang"]['Ad Group'] = 'Grupo de anúncios';

$GLOBALS["lang"]['ad_server'] = 'Servidor de anúncios';

$GLOBALS["lang"]['Ad Server'] = 'Servidor de anúncios';

$GLOBALS["lang"]['Add'] = 'Adicionar';

$GLOBALS["lang"]['Add Credentials'] = 'Adicionar Credenciais';

$GLOBALS["lang"]['Add Device'] = 'Adicionar dispositivo';

$GLOBALS["lang"]['Add Device to Application'] = 'Adicionar dispositivo à aplicação';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Adicionar dispositivo ao cluster';

$GLOBALS["lang"]['Add Exception'] = 'Adicionar exceção';

$GLOBALS["lang"]['Add Field'] = 'Adicionar campo';

$GLOBALS["lang"]['Add If'] = 'Adicionar se';

$GLOBALS["lang"]['Add Policies from Device'] = 'Adicionar políticas do dispositivo';

$GLOBALS["lang"]['Add Policy'] = 'Adicionar uma Política';

$GLOBALS["lang"]['Add Then'] = 'Adicionar depois';

$GLOBALS["lang"]['Add image'] = 'Adicionar imagem';

$GLOBALS["lang"]['additional_items'] = 'Itens adicionais';

$GLOBALS["lang"]['Additional Items'] = 'Itens adicionais';

$GLOBALS["lang"]['address'] = 'Endereço';

$GLOBALS["lang"]['Address'] = 'Endereço';

$GLOBALS["lang"]['admin_status'] = 'Estado do administrador';

$GLOBALS["lang"]['Admin Status'] = 'Estado do administrador';

$GLOBALS["lang"]['advanced'] = 'Avançado';

$GLOBALS["lang"]['Advanced'] = 'Avançado';

$GLOBALS["lang"]['Afghanistan'] = 'Afeganistão';

$GLOBALS["lang"]['agents'] = 'Agentes';

$GLOBALS["lang"]['Agents'] = 'Agentes';

$GLOBALS["lang"]['Aggressive'] = 'Agressivo';

$GLOBALS["lang"]['Aland Islands'] = 'Ilhas Aland';

$GLOBALS["lang"]['Albania'] = 'Albânia';

$GLOBALS["lang"]['Algeria'] = 'Argélia';

$GLOBALS["lang"]['algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['alias'] = 'Apelido';

$GLOBALS["lang"]['Alias'] = 'Apelido';

$GLOBALS["lang"]['All'] = 'Tudo';

$GLOBALS["lang"]['All IPs'] = 'Todos os IPs';

$GLOBALS["lang"]['All Policies'] = 'Todas as Políticas';

$GLOBALS["lang"]['All Queued Items'] = 'Todos os itens em fila';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campos';

$GLOBALS["lang"]['American Samoa'] = 'Samoa Americana';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Uma matriz de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Uma matriz de <code>dispositivos.id</code>.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Um documento JSON criptografado contendo os atributos necessários dependendo do <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Uma indicação do nível de serviço exigido por este site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Um campo interno que indica se a descoberta foi concluída.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Um GeoCode opcional';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Uma senha opcional para usar sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguila';

$GLOBALS["lang"]['Antarctica'] = 'Antártida';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antígua e Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivírus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Quaisquer portas TCP (comma separado, sem espaços) que deseje excluir desta descoberta. Apenas disponível quando usar Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Quaisquer portas UDP (comma separado, sem espaços) que deseje excluir desta descoberta. Apenas disponível quando usar Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Qualquer documentação adicional que precise.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Quaisquer notas adicionais que queira fazer.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Todos os dispositivos serão atribuídos a este Org quando executarem seu script de auditoria (se definido). Ligações para <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Todos os dispositivos descobertos serão atribuídos a esta Localização, se estiver configurado. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Qualquer dispositivo descoberto será atribuído a esta Localização quando executar o seu script de auditoria (se definido). Links para <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Todos os dispositivos descobertos serão atribuídos a este Org, se estiver configurado. Se não estiver definido, eles são atribuídos ao <code>org_id</code> desta descoberta. Ligações para <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Qualquer filtro necessário. NOTA: Quando type = traffic, isto representa o ícone de fonte incrível.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Quaisquer portas TCP específicas que você deseja testar (comma separado, sem espaços).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Quaisquer portas UDP específicas que deseje testar (comma separado, sem espaços).';

$GLOBALS["lang"]['Application'] = 'Aplicação';

$GLOBALS["lang"]['application_id'] = 'ID do aplicativo';

$GLOBALS["lang"]['Application ID'] = 'ID do aplicativo';

$GLOBALS["lang"]['Application Licenses'] = 'Licenças de Aplicação';

$GLOBALS["lang"]['applications'] = 'Aplicações';

$GLOBALS["lang"]['Applications'] = 'Aplicações';

$GLOBALS["lang"]['applied'] = 'Aplicado';

$GLOBALS["lang"]['Applied'] = 'Aplicado';

$GLOBALS["lang"]['Approved'] = 'Aprovado';

$GLOBALS["lang"]['April'] = 'Abril';

$GLOBALS["lang"]['architecture'] = 'Arquitetura';

$GLOBALS["lang"]['Architecture'] = 'Arquitetura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Tem a certeza de que deseja apagar este item de entrada?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Tem a certeza de que deseja apagar este item de saída?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tens a certeza? Isto irá remover todos os itens da fila e impedir que os IPs restantes sejam descobertos.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tens a certeza? Isto irá reiniciar a contagem de processamento da fila e poderá causar carga no servidor.';

$GLOBALS["lang"]['area'] = 'Área';

$GLOBALS["lang"]['Area'] = 'Área';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Arménia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'De acordo com os atributos para ambientes de dispositivos. Produção, Treinamento, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Como você tem Colecionadores registrados, por favor, escolha onde executar esta descoberta.';

$GLOBALS["lang"]['Ask me later'] = 'Pergunta-me mais tarde';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Peça ajuda à Comunidade ou contribua com respostas para outros.';

$GLOBALS["lang"]['aspect_ratio'] = 'Razão de Aspectos';

$GLOBALS["lang"]['Aspect Ratio'] = 'Razão de Aspectos';

$GLOBALS["lang"]['Asset ID'] = 'ID do Activo';

$GLOBALS["lang"]['asset_ident'] = 'Identificador do Activo';

$GLOBALS["lang"]['Asset Ident'] = 'Identificador do Activo';

$GLOBALS["lang"]['asset_number'] = 'Número do Activo';

$GLOBALS["lang"]['Asset Number'] = 'Número do Activo';

$GLOBALS["lang"]['asset_tag'] = 'Marca de Activo';

$GLOBALS["lang"]['Asset Tag'] = 'Marca de Activo';

$GLOBALS["lang"]['Assign Device to Application'] = 'Atribuir o Dispositivo à Aplicação';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Atribuir o Dispositivo ao Aglomerado';

$GLOBALS["lang"]['Assign Device to Location'] = 'Atribuir o Dispositivo à Localização';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Atribuir o Dispositivo à Organização';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Atribuir Dispositivos à Localização';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Atribuir Dispositivos à Organização';

$GLOBALS["lang"]['Assign an Operator'] = 'Atribuir um Operador';

$GLOBALS["lang"]['Assigned To'] = 'Atribuído';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Atualmente podemos usar netstat_ports, software e usuários.';

$GLOBALS["lang"]['attached_device_id'] = 'ID do Dispositivo Anexado';

$GLOBALS["lang"]['Attached Device ID'] = 'ID do Dispositivo Anexado';

$GLOBALS["lang"]['attached_to'] = 'Anexado a';

$GLOBALS["lang"]['Attached To'] = 'Anexado a';

$GLOBALS["lang"]['attachment'] = 'Anexo';

$GLOBALS["lang"]['Attachment'] = 'Anexo';

$GLOBALS["lang"]['attachments'] = 'Anexos';

$GLOBALS["lang"]['Attachments'] = 'Anexos';

$GLOBALS["lang"]['Attribute'] = 'Atributo';

$GLOBALS["lang"]['attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes'] = 'Atributos';

$GLOBALS["lang"]['Audit'] = 'Auditoria';

$GLOBALS["lang"]['Audit AIX'] = 'AIX de auditoria';

$GLOBALS["lang"]['Audit ESXi'] = 'Auditoria ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Registo de Auditoria';

$GLOBALS["lang"]['Audit Log'] = 'Registo de Auditoria';

$GLOBALS["lang"]['Audit My PC'] = 'Auditoria Meu PC';

$GLOBALS["lang"]['Audit OSX'] = 'Auditoria OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Entrada do resultado da auditoria';

$GLOBALS["lang"]['Audit Status'] = 'Estado da Auditoria';

$GLOBALS["lang"]['Audit Windows'] = 'Janelas de Auditoria';

$GLOBALS["lang"]['Audit the Device'] = 'Auditar o Dispositivo';

$GLOBALS["lang"]['Audits'] = 'Auditorias';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Austrália';

$GLOBALS["lang"]['Austria'] = 'Áustria';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autenticação Frase- senha';

$GLOBALS["lang"]['Auto'] = 'Automático';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto povoado pelo Open-AudIT Server.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaticamente povoado com base no sistema operacional Colecionador.';

$GLOBALS["lang"]['availability'] = 'Disponibilidade';

$GLOBALS["lang"]['Availability'] = 'Disponibilidade';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaijão';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'Total BTU';

$GLOBALS["lang"]['Backup'] = 'Cópia de Segurança';

$GLOBALS["lang"]['Bahamas the'] = 'Baamas';

$GLOBALS["lang"]['Bahrain'] = 'Barém';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banco';

$GLOBALS["lang"]['Bank'] = 'Banco';

$GLOBALS["lang"]['Banned'] = 'Proibido';

$GLOBALS["lang"]['bar_code'] = 'Código da Barra';

$GLOBALS["lang"]['Bar Code'] = 'Código da Barra';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'DN base';

$GLOBALS["lang"]['based_on'] = 'Baseado em';

$GLOBALS["lang"]['Based On'] = 'Baseado em';

$GLOBALS["lang"]['baseline'] = 'Base';

$GLOBALS["lang"]['Baseline'] = 'Base';

$GLOBALS["lang"]['baseline_id'] = 'ID inicial';

$GLOBALS["lang"]['Baseline ID'] = 'ID inicial';

$GLOBALS["lang"]['baselines'] = 'Bases';

$GLOBALS["lang"]['Baselines'] = 'Bases';

$GLOBALS["lang"]['baselines_policies'] = 'Políticas de Baselines';

$GLOBALS["lang"]['Baselines Policies'] = 'Políticas de Baselines';

$GLOBALS["lang"]['Baselines Policy'] = 'Política de Bases';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Detalhes da Política de Bases';

$GLOBALS["lang"]['baselines_results'] = 'Resultados das Linhas de Base';

$GLOBALS["lang"]['Baselines Results'] = 'Resultados das Linhas de Base';

$GLOBALS["lang"]['Basic'] = 'Básico';

$GLOBALS["lang"]['batch'] = 'Lote';

$GLOBALS["lang"]['Batch'] = 'Lote';

$GLOBALS["lang"]['Belarus'] = 'Bielorrússia';

$GLOBALS["lang"]['Belgium'] = 'Bélgica';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'ID do Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID do Benchmark';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Exceções dos Benchmarks';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Exceções dos Benchmarks';

$GLOBALS["lang"]['benchmarks_log'] = 'Registo de Benchmarks';

$GLOBALS["lang"]['Benchmarks Log'] = 'Registo de Benchmarks';

$GLOBALS["lang"]['benchmarks_policies'] = 'Políticas de Benchmarks';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Políticas de Benchmarks';

$GLOBALS["lang"]['benchmarks_result'] = 'Resultado dos Benchmarks';

$GLOBALS["lang"]['Benchmarks Result'] = 'Resultado dos Benchmarks';

$GLOBALS["lang"]['Benin'] = 'Benim';

$GLOBALS["lang"]['Bermuda'] = 'Bermudas';

$GLOBALS["lang"]['best_practises'] = 'Melhores Práticas';

$GLOBALS["lang"]['Best Practises'] = 'Melhores Práticas';

$GLOBALS["lang"]['Bhutan'] = 'Butão';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['Bolivia'] = 'Bolívia';

$GLOBALS["lang"]['Boolean'] = 'Booleano';

$GLOBALS["lang"]['Boolean 1/0'] = 'Booleano 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Booleano y/n';

$GLOBALS["lang"]['boot_device'] = 'Dispositivo de arranque';

$GLOBALS["lang"]['Boot Device'] = 'Dispositivo de arranque';

$GLOBALS["lang"]['bootable'] = 'Inicializável';

$GLOBALS["lang"]['Bootable'] = 'Inicializável';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bósnia e Herzegovina';

$GLOBALS["lang"]['Botswana'] = 'Botsuana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Ilha Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Português do Brasil';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Território Britânico do Oceano Índico (Arquipélago de Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Ilhas Virgens Britânicas';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Total Btu';

$GLOBALS["lang"]['Btu Total'] = 'Total Btu';

$GLOBALS["lang"]['build_number'] = 'Número de compilação';

$GLOBALS["lang"]['Build Number'] = 'Número de compilação';

$GLOBALS["lang"]['build_number_full'] = 'Número de compilação completo';

$GLOBALS["lang"]['Build Number Full'] = 'Número de compilação completo';

$GLOBALS["lang"]['Building'] = 'Edifício';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgária';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Editar';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisitos comerciais';

$GLOBALS["lang"]['Business Requirements'] = 'Requisitos comerciais';

$GLOBALS["lang"]['Buy'] = 'Comprar';

$GLOBALS["lang"]['Buy More'] = 'Comprar Mais';

$GLOBALS["lang"]['By'] = 'Por';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Máscara';

$GLOBALS["lang"]['cli_config'] = 'CLI Configuração';

$GLOBALS["lang"]['CLI Config'] = 'CLI Configuração';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculado a partir da descoberta.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculado o número total de endereços IP válidos para esta rede.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculado após a conclusão, o tempo necessário para executar este item.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculado quando a integração é executada e contém uma representação JSON dos dispositivos nesta integração. Cada link para <code>dispositivos.id</código>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculado quando a integração é executada e contém uma representação JSON dos locais nesta integração. Cada link para <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculado quando a integração é executada e contém o número de dispositivos selecionados do Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculado quando a integração é executada e contém o número de dispositivos selecionados no sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculado quando a integração é executada e contém o número de dispositivos a serem atualizados no sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculado quando a integração é executada e contém o número de dispositivos atualizados no Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Camboja';

$GLOBALS["lang"]['Cameroon'] = 'Camarões';

$GLOBALS["lang"]['Campus Area Network'] = 'Rede de Área do Campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Pode ser <código>ativo</código>, <código>passivo</código> ou em branco.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Pode ser <code>aplicação</code>, <code>computa</code>, <code>database</code>, <code>armazenamento</code>, <code>virtualização</code>, <code>web</code>, <code>outro</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Pode ser <code>auto</code>, <code>fixo</code>, <code>outro</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Pode ser <code>alta disponibilidade</code>, <code>balanceamento</code>, <code>desempenho</code>, <code>armazenamento</code>, <code>outro</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Pode ser <code>line</code>, <code>pie</code> ou <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Pode ser <código>usuário</código> ou <código>coletor</código>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Pode ser definido por descoberta ou usuário.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'O usuário pode editar este item.';

$GLOBALS["lang"]['Canada'] = 'Canadá';

$GLOBALS["lang"]['Cancel'] = 'Cancelar';

$GLOBALS["lang"]['capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capacity'] = 'Capacidade';

$GLOBALS["lang"]['Cape Verde'] = 'Cabo Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitalizar';

$GLOBALS["lang"]['caption'] = 'Legenda';

$GLOBALS["lang"]['Caption'] = 'Legenda';

$GLOBALS["lang"]['Cayman Islands'] = 'Ilhas Caimão';

$GLOBALS["lang"]['Cellular Details'] = 'Detalhes do Celular';

$GLOBALS["lang"]['Central African Republic'] = 'República Centro-Africana';

$GLOBALS["lang"]['certificate'] = 'Certificado';

$GLOBALS["lang"]['Certificate'] = 'Certificado';

$GLOBALS["lang"]['certificates'] = 'Certificados';

$GLOBALS["lang"]['Certificates'] = 'Certificados';

$GLOBALS["lang"]['Chad'] = 'Chade';

$GLOBALS["lang"]['change_id'] = 'Mudar ID';

$GLOBALS["lang"]['Change ID'] = 'Mudar ID';

$GLOBALS["lang"]['change_log'] = 'Mudar o Registo';

$GLOBALS["lang"]['Change Log'] = 'Mudar o Registo';

$GLOBALS["lang"]['change_type'] = 'Mudar Tipo';

$GLOBALS["lang"]['Change Type'] = 'Mudar Tipo';

$GLOBALS["lang"]['chart'] = 'Gráfico';

$GLOBALS["lang"]['Chart'] = 'Gráfico';

$GLOBALS["lang"]['check_minutes'] = 'Ata de Controlo';

$GLOBALS["lang"]['Check Minutes'] = 'Ata de Controlo';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Verificar o SSH nestas portas';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Verifique esta porta para qualquer serviço SSH.';

$GLOBALS["lang"]['Chile'] = '_Enviar';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Choose'] = 'Escolher';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Escolha (selecionar primeiro o SO)';

$GLOBALS["lang"]['Choose a Device'] = 'Escolher um Dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Escolha uma Tabela';

$GLOBALS["lang"]['Christmas Island'] = 'Ilha de Natal';

$GLOBALS["lang"]['cidr'] = 'Cidra';

$GLOBALS["lang"]['Cidr'] = 'Cidra';

$GLOBALS["lang"]['circuit_count'] = 'Contagem de Circuitos';

$GLOBALS["lang"]['Circuit Count'] = 'Contagem de Circuitos';

$GLOBALS["lang"]['circuit_status'] = 'Estado do Circuito';

$GLOBALS["lang"]['Circuit Status'] = 'Estado do Circuito';

$GLOBALS["lang"]['city'] = 'Cidade';

$GLOBALS["lang"]['City'] = 'Cidade';

$GLOBALS["lang"]['class'] = 'Classe';

$GLOBALS["lang"]['Class'] = 'Classe';

$GLOBALS["lang"]['class_text'] = 'Texto da Classe';

$GLOBALS["lang"]['Class Text'] = 'Texto da Classe';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Clique no botão Excluir para remover os dispositivos de exemplo do Open-AudIT.<br> Isto irá remover os dispositivos abaixo do banco de dados.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Clique no botão Importar abaixo para preencher o Open-AudIT com dados do dispositivo de exemplo.';

$GLOBALS["lang"]['Client ID'] = 'ID do Cliente';

$GLOBALS["lang"]['client_ident'] = 'Identificador do Cliente';

$GLOBALS["lang"]['Client Ident'] = 'Identificador do Cliente';

$GLOBALS["lang"]['client_secret'] = 'Segredo do Cliente';

$GLOBALS["lang"]['Client Secret'] = 'Segredo do Cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nome do Site do Cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nome do Site do Cliente';

$GLOBALS["lang"]['Close'] = 'Fechar';

$GLOBALS["lang"]['Cloud'] = 'Nuvem';

$GLOBALS["lang"]['Cloud Details'] = 'Detalhes da nuvem';

$GLOBALS["lang"]['Cloud Discovery'] = 'Descoberta em Nuvem';

$GLOBALS["lang"]['cloud_id'] = 'ID da nuvem';

$GLOBALS["lang"]['Cloud ID'] = 'ID da nuvem';

$GLOBALS["lang"]['cloud_log'] = 'Registo de Nuvem';

$GLOBALS["lang"]['Cloud Log'] = 'Registo de Nuvem';

$GLOBALS["lang"]['cloud_name'] = 'Nome da nuvem';

$GLOBALS["lang"]['Cloud Name'] = 'Nome da nuvem';

$GLOBALS["lang"]['Cloud Network'] = 'Rede em nuvem';

$GLOBALS["lang"]['clouds'] = 'Nuvens';

$GLOBALS["lang"]['Clouds'] = 'Nuvens';

$GLOBALS["lang"]['cluster'] = 'Aglomerado';

$GLOBALS["lang"]['Cluster'] = 'Aglomerado';

$GLOBALS["lang"]['cluster_id'] = 'ID do cluster';

$GLOBALS["lang"]['Cluster ID'] = 'ID do cluster';

$GLOBALS["lang"]['cluster_name'] = 'Nome do Aglomerado';

$GLOBALS["lang"]['Cluster Name'] = 'Nome do Aglomerado';

$GLOBALS["lang"]['cluster_type'] = 'Tipo de cluster';

$GLOBALS["lang"]['Cluster Type'] = 'Tipo de cluster';

$GLOBALS["lang"]['clusters'] = 'Aglomerados';

$GLOBALS["lang"]['Clusters'] = 'Aglomerados';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Ilhas Cocos (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Coletor';

$GLOBALS["lang"]['Collector (UUID)'] = 'Colecionador (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Nome do Coletor';

$GLOBALS["lang"]['collector_uuid'] = 'Colecionador Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Colecionador Uuid';

$GLOBALS["lang"]['collectors'] = 'Colecionadores';

$GLOBALS["lang"]['Collectors'] = 'Colecionadores';

$GLOBALS["lang"]['Colombia'] = 'Colômbia';

$GLOBALS["lang"]['color'] = 'Cor';

$GLOBALS["lang"]['Color'] = 'Cor';

$GLOBALS["lang"]['column'] = 'Coluna';

$GLOBALS["lang"]['Column'] = 'Coluna';

$GLOBALS["lang"]['Columns'] = 'Colunas';

$GLOBALS["lang"]['command'] = 'Comando';

$GLOBALS["lang"]['Command'] = 'Comando';

$GLOBALS["lang"]['command_options'] = 'Opções de Comando';

$GLOBALS["lang"]['Command Options'] = 'Opções de Comando';

$GLOBALS["lang"]['command_output'] = 'Saída de Comandos';

$GLOBALS["lang"]['Command Output'] = 'Saída de Comandos';

$GLOBALS["lang"]['command_status'] = 'Estado do Comando';

$GLOBALS["lang"]['Command Status'] = 'Estado do Comando';

$GLOBALS["lang"]['command_time_to_execute'] = 'Hora de Execução do Comando';

$GLOBALS["lang"]['Command Time To Execute'] = 'Hora de Execução do Comando';

$GLOBALS["lang"]['comment'] = 'Comentário';

$GLOBALS["lang"]['Comment'] = 'Comentário';

$GLOBALS["lang"]['comments'] = 'Observações';

$GLOBALS["lang"]['Comments'] = 'Observações';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Comumente referido como o cliente.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Comumente referido como o clienteSecret.';

$GLOBALS["lang"]['Community'] = 'Comunidade';

$GLOBALS["lang"]['Community Questions'] = 'Questões comunitárias';

$GLOBALS["lang"]['Community String'] = 'Corda comunitária';

$GLOBALS["lang"]['Comoros the'] = 'Comores o';

$GLOBALS["lang"]['Compact'] = 'Compacto';

$GLOBALS["lang"]['Component Table'] = 'Tabela de componentes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componentes (Todos os Dispositivos)';

$GLOBALS["lang"]['Compute'] = 'Calcular';

$GLOBALS["lang"]['Condition'] = 'Condição';

$GLOBALS["lang"]['config'] = 'Configuração';

$GLOBALS["lang"]['Config'] = 'Configuração';

$GLOBALS["lang"]['Config Default, currently '] = 'Padrão de configuração, atualmente';

$GLOBALS["lang"]['config_file'] = 'Ficheiro de Configuração';

$GLOBALS["lang"]['Config File'] = 'Ficheiro de Configuração';

$GLOBALS["lang"]['config_manager_error_code'] = 'Código de Erro do Gestor de Configuração';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Código de Erro do Gestor de Configuração';

$GLOBALS["lang"]['configuration'] = 'Configuração';

$GLOBALS["lang"]['Configuration'] = 'Configuração';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Ligado a';

$GLOBALS["lang"]['connection'] = 'Ligação';

$GLOBALS["lang"]['Connection'] = 'Ligação';

$GLOBALS["lang"]['Connection Options'] = 'Opções de Ligação';

$GLOBALS["lang"]['connection_status'] = 'Estado da Ligação';

$GLOBALS["lang"]['Connection Status'] = 'Estado da Ligação';

$GLOBALS["lang"]['connections'] = 'Ligações';

$GLOBALS["lang"]['Connections'] = 'Ligações';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Considere filtrado Portas Abrir';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Considere o filtro aberto Portas Abrir';

$GLOBALS["lang"]['contact'] = 'Contacto';

$GLOBALS["lang"]['Contact'] = 'Contacto';

$GLOBALS["lang"]['contact_name'] = 'Nome do Contacto';

$GLOBALS["lang"]['Contact Name'] = 'Nome do Contacto';

$GLOBALS["lang"]['contained_in'] = 'Contido';

$GLOBALS["lang"]['Contained In'] = 'Contido';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contém um objeto JSON detalha os widgets associados e suas posições.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contém os campos que determinam se devemos usar as opções de descoberta ssh, snmp e wmi. Um objecto JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'ID do motor de contexto';

$GLOBALS["lang"]['Context Name'] = 'Nome do Contexto';

$GLOBALS["lang"]['contractual_obligations'] = 'Obrigações contratuais';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obrigações contratuais';

$GLOBALS["lang"]['Cook Islands'] = 'Ilhas Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copiar e colar um resultado de auditoria';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copie e cole o abaixo para os fóruns, outra instância do Open-AudIT ou em qualquer outro lugar que você precise fornecer este item.';

$GLOBALS["lang"]['core_count'] = 'Count Core';

$GLOBALS["lang"]['Core Count'] = 'Count Core';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Centro de Custos';

$GLOBALS["lang"]['Cost Center'] = 'Centro de Custos';

$GLOBALS["lang"]['cost_code'] = 'Código de Custo';

$GLOBALS["lang"]['Cost Code'] = 'Código de Custo';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Costa do Marfim';

$GLOBALS["lang"]['count'] = 'Contagem';

$GLOBALS["lang"]['Count'] = 'Contagem';

$GLOBALS["lang"]['country'] = 'País';

$GLOBALS["lang"]['Country'] = 'País';

$GLOBALS["lang"]['country_code'] = 'Código do país';

$GLOBALS["lang"]['Country Code'] = 'Código do país';

$GLOBALS["lang"]['cpu_count'] = 'Contagem Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Contagem Cpu';

$GLOBALS["lang"]['Create'] = 'Criar';

$GLOBALS["lang"]['Create Example Devices'] = 'Criar Dispositivos de Exemplo';

$GLOBALS["lang"]['create_external_count'] = 'Criar contagem externa';

$GLOBALS["lang"]['Create External Count'] = 'Criar contagem externa';

$GLOBALS["lang"]['create_external_from_internal'] = 'Criar externo a partir de interno';

$GLOBALS["lang"]['Create External From Internal'] = 'Criar externo a partir de interno';

$GLOBALS["lang"]['Create Geocode'] = 'Criar um Geocódigo';

$GLOBALS["lang"]['create_internal_count'] = 'Criar Contagem Interna';

$GLOBALS["lang"]['Create Internal Count'] = 'Criar Contagem Interna';

$GLOBALS["lang"]['create_internal_from_external'] = 'Criar interno a partir de externo';

$GLOBALS["lang"]['Create Internal From External'] = 'Criar interno a partir de externo';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Criar dispositivos NMIS a partir de Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Criar Open-AudIT Dispositivos de';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Criar Open-AudIT Dispositivos do NMIS';

$GLOBALS["lang"]['created_at'] = 'Criado em';

$GLOBALS["lang"]['Created At'] = 'Criado em';

$GLOBALS["lang"]['created_by'] = 'Criado por';

$GLOBALS["lang"]['Created By'] = 'Criado por';

$GLOBALS["lang"]['created_date'] = 'Data de Criação';

$GLOBALS["lang"]['Created Date'] = 'Data de Criação';

$GLOBALS["lang"]['Creating'] = 'Criando';

$GLOBALS["lang"]['creator'] = 'Criador';

$GLOBALS["lang"]['Creator'] = 'Criador';

$GLOBALS["lang"]['credential'] = 'Credencial';

$GLOBALS["lang"]['Credential'] = 'Credencial';

$GLOBALS["lang"]['credentials'] = 'Credenciais';

$GLOBALS["lang"]['Credentials'] = 'Credenciais';

$GLOBALS["lang"]['Croatia'] = 'Croácia';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Atual';

$GLOBALS["lang"]['Current'] = 'Atual';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Processos de Descoberta Actual';

$GLOBALS["lang"]['Current date & time is '] = 'Data & hora atual é';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Os tipos atualmente suportados são <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> ou <code>janelas</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Portos TCP personalizados';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personalizado Portos';

$GLOBALS["lang"]['Cyprus'] = 'Chipre';

$GLOBALS["lang"]['Czech'] = 'Checo';

$GLOBALS["lang"]['Czech Republic'] = 'República Checa';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Conta DN (opcional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'Senha DN (opcional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nome da Máquina DNS';

$GLOBALS["lang"]['dashboard_id'] = 'ID do painel';

$GLOBALS["lang"]['Dashboard ID'] = 'ID do painel';

$GLOBALS["lang"]['dashboards'] = 'Painéis';

$GLOBALS["lang"]['Dashboards'] = 'Painéis';

$GLOBALS["lang"]['Database'] = 'Base de dados';

$GLOBALS["lang"]['db_action'] = 'Acção da Base de Dados';

$GLOBALS["lang"]['Database Action'] = 'Acção da Base de Dados';

$GLOBALS["lang"]['db_column'] = 'Coluna da Base de Dados';

$GLOBALS["lang"]['Database Column'] = 'Coluna da Base de Dados';

$GLOBALS["lang"]['Database Definition'] = 'Definição da Base de Dados';

$GLOBALS["lang"]['db_row'] = 'Linha da Base de Dados';

$GLOBALS["lang"]['Database Row'] = 'Linha da Base de Dados';

$GLOBALS["lang"]['Database Schema'] = 'Esquema da Base de Dados';

$GLOBALS["lang"]['db_table'] = 'Tabela de banco de dados';

$GLOBALS["lang"]['Database Table'] = 'Tabela de banco de dados';

$GLOBALS["lang"]['dataset_title'] = 'Título do conjunto de dados';

$GLOBALS["lang"]['Dataset Title'] = 'Título do conjunto de dados';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'Data D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Data M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Data Agora';

$GLOBALS["lang"]['date_of_manufacture'] = 'Data de fabrico';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Data de fabrico';

$GLOBALS["lang"]['date_paid'] = 'Data de pagamento';

$GLOBALS["lang"]['Date Paid'] = 'Data de pagamento';

$GLOBALS["lang"]['date_received'] = 'Data Recebida';

$GLOBALS["lang"]['Date Received'] = 'Data Recebida';

$GLOBALS["lang"]['Date Y-M-D'] = 'Data Y-M-D';

$GLOBALS["lang"]['DateTime Now'] = 'DataHora Agora';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DataTime Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Dia do Mês';

$GLOBALS["lang"]['Day Of Month'] = 'Dia do Mês';

$GLOBALS["lang"]['day_of_week'] = 'Dia da Semana';

$GLOBALS["lang"]['Day Of Week'] = 'Dia da Semana';

$GLOBALS["lang"]['Day of Month'] = 'Dia do Mês';

$GLOBALS["lang"]['dbus_identifier'] = 'Identificador Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identificador Dbus';

$GLOBALS["lang"]['Debug'] = 'Depurar';

$GLOBALS["lang"]['December'] = 'Dezembro';

$GLOBALS["lang"]['Default'] = 'Predefinição';

$GLOBALS["lang"]['Default Items'] = 'Itens Predefinidos';

$GLOBALS["lang"]['Default Value'] = 'Valor Padrão';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Predefinição de 389. Normalmente 636 usado para o Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Padrão de <code>3</code> para LDAP e Active Directory.';

$GLOBALS["lang"]['delay_minutes'] = 'Atrasos';

$GLOBALS["lang"]['Delay Minutes'] = 'Atrasos';

$GLOBALS["lang"]['Delete'] = 'Apagar';

$GLOBALS["lang"]['Delete Example Devices'] = 'Apagar os Dispositivos de Exemplo';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Apagar o Externo do Interno';

$GLOBALS["lang"]['Delete External From Internal'] = 'Apagar o Externo do Interno';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Apagar NMIS Dispositivos se não em Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Apagar da Aplicação';

$GLOBALS["lang"]['Delete from Cluster'] = 'Apagar do Agregado';

$GLOBALS["lang"]['deleted_at'] = 'Excluído em';

$GLOBALS["lang"]['Deleted At'] = 'Excluído em';

$GLOBALS["lang"]['Denmark'] = 'Dinamarca';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derivado por auditoria ou manualmente definido pelo usuário.';

$GLOBALS["lang"]['Derived by audit.'] = 'Derivado por auditoria.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derivado de <code>rack_disvices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derivado de <code>rack_disvices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivado da descoberta do Colector.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Derivado do Nome do SO.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Derivado da descoberta da nuvem.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Derivado de auditorias de dispositivos.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Derivado do tipo de dispositivo e SO.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Derivado da descoberta.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derivado do nome da máquina, sysName, dns Hostname e IP nessa ordem.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derivado da gravidade inteira.';

$GLOBALS["lang"]['description'] = 'Designação das mercadorias';

$GLOBALS["lang"]['Description'] = 'Designação das mercadorias';

$GLOBALS["lang"]['destination'] = 'Destino';

$GLOBALS["lang"]['Destination'] = 'Destino';

$GLOBALS["lang"]['detail'] = 'Detalhe';

$GLOBALS["lang"]['Detail'] = 'Detalhe';

$GLOBALS["lang"]['Details'] = 'Detalhes';

$GLOBALS["lang"]['details'] = 'Detalhes';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detalhes de quem é normalmente contactável neste site.';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Auditorias de Dispositivos';

$GLOBALS["lang"]['device_id'] = 'ID do dispositivo';

$GLOBALS["lang"]['Device ID'] = 'ID do dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID do Dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID do Dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID do dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID do dispositivo B';

$GLOBALS["lang"]['Device Name'] = 'Nome do Dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Resultado do Dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Resultados do Dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Semente do dispositivo';

$GLOBALS["lang"]['Device Seed IP'] = 'IP de Semente de Dispositivo';

$GLOBALS["lang"]['Device Status'] = 'Estado do dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipos de Dispositivo';

$GLOBALS["lang"]['Device is in the Subnet'] = 'O dispositivo está na Subnet';

$GLOBALS["lang"]['Devices'] = 'Dispositivos';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivos atribuídos à localização';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivos atribuídos à localização';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivos Atribuídos à Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivos Atribuídos à Org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositivos Auditados';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivos criados em';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivos criados em Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Colunas por Omissão de Dispositivos';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Colunas por Omissão de Dispositivos';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivos encontrados nos últimos 7 dias';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivos encontrados hoje';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivos encontrados ontem';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivos Não Auditados';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivos Não Vistos 30 Dias';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivos Não Vistos 7 Dias';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivos Não Vistos 90 Dias';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivos obtidos através da API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivos selecionados de';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivos selecionados do Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivos actualizados em';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivos Atualizados em Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Os dispositivos estão a ser avaliados.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Os dispositivos não estão a ser avaliados.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Os dispositivos podem ser avaliados.';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivos em estado em execução';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivos em estado parado';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivos neste';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Desvirado do tipo ou SO.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Activado';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Activado';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expira';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expira';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtido';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtido';

$GLOBALS["lang"]['dhcp_server'] = 'Servidor Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Servidor Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'O comando completou com sucesso e devolveu dados esperados.';

$GLOBALS["lang"]['direction'] = 'Direcção';

$GLOBALS["lang"]['Direction'] = 'Direcção';

$GLOBALS["lang"]['directory'] = 'Pasta';

$GLOBALS["lang"]['Directory'] = 'Pasta';

$GLOBALS["lang"]['disabled'] = 'Desactivado';

$GLOBALS["lang"]['Disabled'] = 'Desactivado';

$GLOBALS["lang"]['discard'] = 'Descartar';

$GLOBALS["lang"]['Discard'] = 'Descartar';

$GLOBALS["lang"]['Discover'] = 'Descobrir';

$GLOBALS["lang"]['discoveries'] = 'Descobertas';

$GLOBALS["lang"]['Discoveries'] = 'Descobertas';

$GLOBALS["lang"]['Discovery'] = 'Descoberta';

$GLOBALS["lang"]['discovery_id'] = 'ID do Discovery';

$GLOBALS["lang"]['Discovery ID'] = 'ID do Discovery';

$GLOBALS["lang"]['Discovery Issues'] = 'Problemas de Descoberta';

$GLOBALS["lang"]['discovery_log'] = 'Registo da Descoberta';

$GLOBALS["lang"]['Discovery Log'] = 'Registo da Descoberta';

$GLOBALS["lang"]['Discovery Name'] = 'Nome da Descoberta';

$GLOBALS["lang"]['Discovery Options'] = 'Opções de Descoberta';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Contagem de Filas Discovery';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Limite da Fila de Descoberta';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opções de digitalização';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opções de digitalização';

$GLOBALS["lang"]['disk'] = 'Disco';

$GLOBALS["lang"]['Disk'] = 'Disco';

$GLOBALS["lang"]['Display in Menu'] = 'Mostrar no Menu';

$GLOBALS["lang"]['district'] = 'Distrito';

$GLOBALS["lang"]['District'] = 'Distrito';

$GLOBALS["lang"]['Djibouti'] = 'Djibuti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Domínio DNS';

$GLOBALS["lang"]['Dns Domain'] = 'Domínio DNS';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Activado';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Activado';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Nome da máquina DNS';

$GLOBALS["lang"]['Dns Host Name'] = 'Nome da máquina DNS';

$GLOBALS["lang"]['dns_hostname'] = 'Nome da máquina DNS';

$GLOBALS["lang"]['Dns Hostname'] = 'Nome da máquina DNS';

$GLOBALS["lang"]['dns_server'] = 'Servidor de DNS';

$GLOBALS["lang"]['Dns Server'] = 'Servidor de DNS';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Não digitalizar estas portas TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Não digitalizar estas portas UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Não me mostres outra vez';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Você deseja usar transporte seguro (LDAPS) ou LDAP regular não criptografado.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Você deseja ver a barra lateral padrão à esquerda.';

$GLOBALS["lang"]['documentation'] = 'Documentação';

$GLOBALS["lang"]['Documentation'] = 'Documentação';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'A licença aplica-se às crianças Orgs.';

$GLOBALS["lang"]['domain'] = 'Domínio';

$GLOBALS["lang"]['Domain'] = 'Domínio';

$GLOBALS["lang"]['domain_controller_address'] = 'Endereço do Controlador de Domínio';

$GLOBALS["lang"]['Domain Controller Address'] = 'Endereço do Controlador de Domínio';

$GLOBALS["lang"]['domain_controller_name'] = 'Controlador de Domínios Nome';

$GLOBALS["lang"]['Domain Controller Name'] = 'Controlador de Domínios Nome';

$GLOBALS["lang"]['domain_role'] = 'Papel do Domínio';

$GLOBALS["lang"]['Domain Role'] = 'Papel do Domínio';

$GLOBALS["lang"]['domain_short'] = 'Domínio Curto';

$GLOBALS["lang"]['Domain Short'] = 'Domínio Curto';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'República Dominicana';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Não segures na minha mão, eu sei o que estou a fazer. Nenhum filtro e a capacidade de juntar tabelas personalizadas.';

$GLOBALS["lang"]['Download'] = 'Baixar';

$GLOBALS["lang"]['Download a file from URL'] = 'Transferir um ficheiro a partir do URL';

$GLOBALS["lang"]['driver'] = 'Controlador';

$GLOBALS["lang"]['Driver'] = 'Controlador';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Duração';

$GLOBALS["lang"]['Duration'] = 'Duração';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Equador';

$GLOBALS["lang"]['Edit'] = 'Editar';

$GLOBALS["lang"]['edit_log'] = 'Editar o Registo';

$GLOBALS["lang"]['Edit Log'] = 'Editar o Registo';

$GLOBALS["lang"]['editable'] = 'Editável';

$GLOBALS["lang"]['Editable'] = 'Editável';

$GLOBALS["lang"]['edited_by'] = 'Editado Por';

$GLOBALS["lang"]['Edited By'] = 'Editado Por';

$GLOBALS["lang"]['edited_date'] = 'Data Editada';

$GLOBALS["lang"]['Edited Date'] = 'Data Editada';

$GLOBALS["lang"]['edition'] = 'Edição';

$GLOBALS["lang"]['Edition'] = 'Edição';

$GLOBALS["lang"]['Egypt'] = 'Egito';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'A Amazon, o Google ou a Microsoft.';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E- mail';

$GLOBALS["lang"]['Email'] = 'E- mail';

$GLOBALS["lang"]['email_address'] = 'Endereço de E- mail';

$GLOBALS["lang"]['Email Address'] = 'Endereço de E- mail';

$GLOBALS["lang"]['Email to send test to'] = 'E- mail para enviar o teste';

$GLOBALS["lang"]['Enable'] = 'Activar';

$GLOBALS["lang"]['enabled'] = 'Activado';

$GLOBALS["lang"]['Enabled'] = 'Activado';

$GLOBALS["lang"]['encryption'] = 'Criptografia';

$GLOBALS["lang"]['Encryption'] = 'Criptografia';

$GLOBALS["lang"]['encryption_method'] = 'Método de Criptografia';

$GLOBALS["lang"]['Encryption Method'] = 'Método de Criptografia';

$GLOBALS["lang"]['encryption_status'] = 'Estado da criptografia';

$GLOBALS["lang"]['Encryption Status'] = 'Estado da criptografia';

$GLOBALS["lang"]['end_date'] = 'Data de Fim';

$GLOBALS["lang"]['End Date'] = 'Data de Fim';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ID do produto no fim da vida';

$GLOBALS["lang"]['end_of_life'] = 'Fim da Vida';

$GLOBALS["lang"]['End Of Life'] = 'Fim da Vida';

$GLOBALS["lang"]['end_of_production'] = 'Fim da produção';

$GLOBALS["lang"]['End Of Production'] = 'Fim da produção';

$GLOBALS["lang"]['end_of_service'] = 'Fim do Serviço';

$GLOBALS["lang"]['End Of Service'] = 'Fim do Serviço';

$GLOBALS["lang"]['end_of_service_life'] = 'Fim da Vida de Serviço';

$GLOBALS["lang"]['End Of Service Life'] = 'Fim da Vida de Serviço';

$GLOBALS["lang"]['English'] = 'Inglês';

$GLOBALS["lang"]['enterprise'] = 'Empresa';

$GLOBALS["lang"]['Enterprise'] = 'Empresa';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Rede privada empresarial';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo de direito';

$GLOBALS["lang"]['environment'] = 'Ambiente';

$GLOBALS["lang"]['Environment'] = 'Ambiente';

$GLOBALS["lang"]['Equal To'] = 'Igual a';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Igual ou Maior Que';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Igual ou menor que';

$GLOBALS["lang"]['Equals'] = 'Igual';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guiné Equatorial';

$GLOBALS["lang"]['Eritrea'] = 'Eritreia';

$GLOBALS["lang"]['Error'] = 'Erro';

$GLOBALS["lang"]['Error Code'] = 'Código de Erro';

$GLOBALS["lang"]['Estonia'] = 'Estónia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Etiópia';

$GLOBALS["lang"]['Every'] = 'Cada';

$GLOBALS["lang"]['Every Day'] = 'Todos os dias';

$GLOBALS["lang"]['Exceptions'] = 'Excepções';

$GLOBALS["lang"]['exclude'] = 'Excluir';

$GLOBALS["lang"]['Exclude'] = 'Excluir';

$GLOBALS["lang"]['exclude_ip'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Excluir endereços IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Excluir as portas TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Excluir as Portas Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Excluir as Portas Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Excluir as portas UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Excluir as Portas Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Excluir as Portas Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Excluir estes endereços IP de ser digitalizado Nmap.';

$GLOBALS["lang"]['exclusion_reasons'] = 'Motivos de exclusão';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Motivos de exclusão';

$GLOBALS["lang"]['executable'] = 'Executável';

$GLOBALS["lang"]['Executable'] = 'Executável';

$GLOBALS["lang"]['executable_id'] = 'ID executável';

$GLOBALS["lang"]['Executable ID'] = 'ID executável';

$GLOBALS["lang"]['executables'] = 'Executáveis';

$GLOBALS["lang"]['Executables'] = 'Executáveis';

$GLOBALS["lang"]['Execute'] = 'Executar';

$GLOBALS["lang"]['Executing'] = 'Execução';

$GLOBALS["lang"]['exemption_reason'] = 'Razão da isenção';

$GLOBALS["lang"]['Exemption Reason'] = 'Razão da isenção';

$GLOBALS["lang"]['Existing Building'] = 'Edifício existente';

$GLOBALS["lang"]['Existing Floor'] = 'Piso existente';

$GLOBALS["lang"]['Existing Room'] = 'Sala existente';

$GLOBALS["lang"]['Existing Row'] = 'Linha Existente';

$GLOBALS["lang"]['expire_minutes'] = 'Expirar a acta';

$GLOBALS["lang"]['Expire Minutes'] = 'Expirar a acta';

$GLOBALS["lang"]['expiry_date'] = 'Data de termo';

$GLOBALS["lang"]['Expiry Date'] = 'Data de termo';

$GLOBALS["lang"]['Export CSV'] = 'Exportar CSV';

$GLOBALS["lang"]['Export JSON'] = 'Exportar o JSON';

$GLOBALS["lang"]['Export by Device'] = 'Exportar por Dispositivo';

$GLOBALS["lang"]['Export by Policy'] = 'Exportar por Política';

$GLOBALS["lang"]['Export data to'] = 'Exportar dados para';

$GLOBALS["lang"]['expose'] = 'Expor';

$GLOBALS["lang"]['Expose'] = 'Expor';

$GLOBALS["lang"]['External'] = 'Externo';

$GLOBALS["lang"]['External Field Name'] = 'Nome do Campo Externo';

$GLOBALS["lang"]['External Field Type'] = 'Tipo de Campo Externo';

$GLOBALS["lang"]['external_ident'] = 'Identificador Externo';

$GLOBALS["lang"]['External Ident'] = 'Identificador Externo';

$GLOBALS["lang"]['external_link'] = 'Ligação Externa';

$GLOBALS["lang"]['External Link'] = 'Ligação Externa';

$GLOBALS["lang"]['extra_columns'] = 'Colunas extras';

$GLOBALS["lang"]['Extra Columns'] = 'Colunas extras';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Registro extra e mais verbose é gerado para solução de problemas.';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revisão FW';

$GLOBALS["lang"]['factories'] = 'Fábricas';

$GLOBALS["lang"]['Factories'] = 'Fábricas';

$GLOBALS["lang"]['Fail'] = 'Falha';

$GLOBALS["lang"]['Failed'] = 'Falhou';

$GLOBALS["lang"]['Failed Severity'] = 'Severidade Falhada';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Ilhas Falkland (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Família';

$GLOBALS["lang"]['Faroe Islands'] = 'Ilhas Faroé';

$GLOBALS["lang"]['Features'] = 'Características';

$GLOBALS["lang"]['February'] = 'Fevereiro';

$GLOBALS["lang"]['field'] = 'Campo';

$GLOBALS["lang"]['Field'] = 'Campo';

$GLOBALS["lang"]['field_id'] = 'ID do campo';

$GLOBALS["lang"]['Field ID'] = 'ID do campo';

$GLOBALS["lang"]['Field Name'] = 'Nome do Campo';

$GLOBALS["lang"]['Field Type'] = 'Tipo de Campo';

$GLOBALS["lang"]['Fields'] = 'Campos';

$GLOBALS["lang"]['fields'] = 'Campos';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Ilhas Fiji';

$GLOBALS["lang"]['file'] = 'Ficheiro';

$GLOBALS["lang"]['File'] = 'Ficheiro';

$GLOBALS["lang"]['File Import'] = 'Importar Arquivo';

$GLOBALS["lang"]['File Input'] = 'Entrada do Ficheiro';

$GLOBALS["lang"]['file_name'] = 'Nome do Ficheiro';

$GLOBALS["lang"]['File Name'] = 'Nome do Ficheiro';

$GLOBALS["lang"]['file_size'] = 'Tamanho do Ficheiro';

$GLOBALS["lang"]['File Size'] = 'Tamanho do Ficheiro';

$GLOBALS["lang"]['filename'] = 'Nome do arquivo';

$GLOBALS["lang"]['Filename'] = 'Nome do arquivo';

$GLOBALS["lang"]['files'] = 'Ficheiros';

$GLOBALS["lang"]['Files'] = 'Ficheiros';

$GLOBALS["lang"]['files_id'] = 'ID dos Ficheiros';

$GLOBALS["lang"]['Files ID'] = 'ID dos Ficheiros';

$GLOBALS["lang"]['filtered'] = 'Filtrado';

$GLOBALS["lang"]['Filtered'] = 'Filtrado';

$GLOBALS["lang"]['Finland'] = 'Finlândia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Regra do Firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Regra do Firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revisão do firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Revisão do firmware';

$GLOBALS["lang"]['first_run'] = 'Primeira Execução';

$GLOBALS["lang"]['First Run'] = 'Primeira Execução';

$GLOBALS["lang"]['first_seen'] = 'Primeiro Visto';

$GLOBALS["lang"]['First Seen'] = 'Primeiro Visto';

$GLOBALS["lang"]['FirstWave'] = 'PrimeiraOnda';

$GLOBALS["lang"]['Fix'] = 'Corrigir';

$GLOBALS["lang"]['Fixed'] = 'Fixo';

$GLOBALS["lang"]['Floor'] = 'Piso';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Siga qualquer um dos links abaixo e descubra como usar o Open-AudIT para descobrir <b>O que está em sua rede?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Para uma descoberta de sementes, devo apenas descobrir IPs no espaço de endereço IP privado.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Para uma descoberta de sementes, devo apenas descobrir IPs na sub-rede escolhida.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Para uma descoberta de sementes, devo localizar a subrede antes de executar a descoberta.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Para entrada avançada de uma consulta SQL em bruto. Como por Consultas, você deve incluir <code>WHERE @filter AND<code> em seu SQL.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Para licenças que não são perpétuas, quando a licença expira.';

$GLOBALS["lang"]['form_factor'] = 'Fator de Forma';

$GLOBALS["lang"]['Form Factor'] = 'Fator de Forma';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'França, República Francesa';

$GLOBALS["lang"]['free'] = 'Livre';

$GLOBALS["lang"]['Free'] = 'Livre';

$GLOBALS["lang"]['free_percent'] = 'Percentagem Livre';

$GLOBALS["lang"]['Free Percent'] = 'Percentagem Livre';

$GLOBALS["lang"]['French'] = 'Francês';

$GLOBALS["lang"]['French Guiana'] = 'Guiana Francesa';

$GLOBALS["lang"]['French Polynesia'] = 'Polinésia Francesa';

$GLOBALS["lang"]['French Southern Territories'] = 'Territórios Franceses do Sul';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Perguntas Mais Frequentes';

$GLOBALS["lang"]['Friday'] = 'Sexta-feira';

$GLOBALS["lang"]['From 100 Devices'] = 'De 100 Dispositivos';

$GLOBALS["lang"]['From 500 Devices'] = 'De 500 Dispositivos';

$GLOBALS["lang"]['full_name'] = 'Nome completo';

$GLOBALS["lang"]['Full Name'] = 'Nome completo';

$GLOBALS["lang"]['function'] = 'Função';

$GLOBALS["lang"]['Function'] = 'Função';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPO POR';

$GLOBALS["lang"]['Gabon'] = 'Gabão';

$GLOBALS["lang"]['Gambia the'] = 'Gâmbia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Portais';

$GLOBALS["lang"]['Gateways'] = 'Portais';

$GLOBALS["lang"]['Generated By'] = 'Gerado por';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Geórgia';

$GLOBALS["lang"]['German'] = 'Alemão';

$GLOBALS["lang"]['Germany'] = 'Alemanha';

$GLOBALS["lang"]['Get Lat/Long'] = 'Obter Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Iniciar';

$GLOBALS["lang"]['Get a Free License'] = 'Obter uma licença gratuita';

$GLOBALS["lang"]['Getting Started'] = 'Começar';

$GLOBALS["lang"]['Ghana'] = 'Gana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Go'] = 'Vai';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Calcular Campos';

$GLOBALS["lang"]['graph'] = 'Gráfico';

$GLOBALS["lang"]['Graph'] = 'Gráfico';

$GLOBALS["lang"]['Greater Than'] = 'Maior Que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Maior ou Igual';

$GLOBALS["lang"]['Greece'] = 'Grécia';

$GLOBALS["lang"]['Green Query'] = 'Consulta Verde';

$GLOBALS["lang"]['Greenland'] = 'Gronelândia';

$GLOBALS["lang"]['Grenada'] = 'Granada';

$GLOBALS["lang"]['Group'] = 'Grupo';

$GLOBALS["lang"]['group_by'] = 'Agrupar por';

$GLOBALS["lang"]['Group By'] = 'Agrupar por';

$GLOBALS["lang"]['group_id'] = 'ID do grupo';

$GLOBALS["lang"]['Group ID'] = 'ID do grupo';

$GLOBALS["lang"]['groups'] = 'Grupos';

$GLOBALS["lang"]['Groups'] = 'Grupos';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadalupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'ID do Dispositivo de Visita';

$GLOBALS["lang"]['Guest Device ID'] = 'ID do Dispositivo de Visita';

$GLOBALS["lang"]['guid'] = 'Guida';

$GLOBALS["lang"]['Guid'] = 'Guida';

$GLOBALS["lang"]['Guinea'] = 'Guiné';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guiné-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guiana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Revisão de HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Índice do disco rígido';

$GLOBALS["lang"]['Hard Drive Index'] = 'Índice do disco rígido';

$GLOBALS["lang"]['hardware_revision'] = 'Revisão do Hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisão do Hardware';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Cabeçalho';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Ilha Ouvida e Ilhas McDonald';

$GLOBALS["lang"]['height'] = 'Altura';

$GLOBALS["lang"]['Height'] = 'Altura';

$GLOBALS["lang"]['Height in RU'] = 'Altura em RU';

$GLOBALS["lang"]['Help'] = 'Ajuda';

$GLOBALS["lang"]['High'] = 'Alta';

$GLOBALS["lang"]['High Availability'] = 'Alta Disponibilidade';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sé (Estado da Cidade do Vaticano)';

$GLOBALS["lang"]['home'] = 'Principal';

$GLOBALS["lang"]['Home'] = 'Principal';

$GLOBALS["lang"]['Home Area Network'] = 'Rede de Área Principal';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Máquina';

$GLOBALS["lang"]['Host'] = 'Máquina';

$GLOBALS["lang"]['hostname'] = 'Nome da máquina';

$GLOBALS["lang"]['Hostname'] = 'Nome da máquina';

$GLOBALS["lang"]['hour'] = 'Hora';

$GLOBALS["lang"]['Hour'] = 'Hora';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Quanto tempo demorou o comando a executar.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Quanto tempo deve Nmap esperar por uma resposta, por dispositivo.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Quantos circuitos de alimentação para esta prateleira.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Quantas políticas resultam num fracasso.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Quantas políticas resultam numa aprovação.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Quantas tomadas de energia nesta prateleira.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Quantas unidades de rack em altura é este rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Quantas vezes o coletor deve pedir ao servidor uma tarefa.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Como devemos selecionar dispositivos a serem integrados (usando um atributo, consulta ou um grupo).';

$GLOBALS["lang"]['How to compare'] = 'Como comparar';

$GLOBALS["lang"]['Hungary'] = 'Hungria';

$GLOBALS["lang"]['hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'SE';

$GLOBALS["lang"]['IOS Version'] = 'Versão do IOS';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Endereço IP';

$GLOBALS["lang"]['IP Addresses'] = 'Endereços IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Última Visto';

$GLOBALS["lang"]['IP Set By'] = 'Configuração de IP';

$GLOBALS["lang"]['Iceland'] = 'Islândia';

$GLOBALS["lang"]['icon'] = 'Ícone';

$GLOBALS["lang"]['Icon'] = 'Ícone';

$GLOBALS["lang"]['Icon and Text'] = 'Ícone e Texto';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Apenas ícone, texto ou ícone e texto.';

$GLOBALS["lang"]['id_internal'] = 'Id Interno';

$GLOBALS["lang"]['Id Internal'] = 'Id Interno';

$GLOBALS["lang"]['id_number'] = 'Número de ID';

$GLOBALS["lang"]['Id Number'] = 'Número de ID';

$GLOBALS["lang"]['identification'] = 'Identificação';

$GLOBALS["lang"]['Identification'] = 'Identificação';

$GLOBALS["lang"]['If'] = 'Se';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se uma porta responder com filtro, devemos considerá-la disponível.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Se uma porta responder com open, se considerarmos disponível.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se um dispositivo remoto não existir nos dispositivos Open-AudIT selecionados, devemos excluí-lo do sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se um dispositivo Open-AudIT foi alterado, devemos atualizar o sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se um dispositivo Open-AudIT não estiver no sistema externo, devemos criá-lo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se um agente relata que seu IP primário está nesta subrede, execute as ações.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se algum destes portos (comma separado, nenhum espaço) forem detectados, suponha que o SSH esteja rodando neles e os use para auditoria. Não há necessidade de adicionar esta porta às portas TCP Personalizadas - ela será adicionada automaticamente.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se definido, possui um array JSON de colunas de dispositivos específicas que este usuário escolheu para ver, além do padrão de configuração.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se a família OS do agente (caso insensível) contém esta string, execute as ações.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se estiverem reunidas as seguintes condições:<br><ul><li>a Papel tem um ad_group atribuído</li><li>an Org tem um ad_group atribuído</li><li>an LDAP O servidor tem o use_roles definido como y</li><li>um usuário existe no LDAP (be it Active Directory ou OpenLDAP) e está nos ad_groups atribuídos</li></ul> Esse usuário pode fazer login no Open-AudIT sem uma conta no Open-AudIT que precisa ser criada. Open-AudIT irá consultar o LDAP em questão e se o usuário estiver nos grupos necessários, mas não no Open-AudIT, seus atributos de usuário (nome, nome completo, e-mail, papéis, orgs, etc) dentro do Open-AudIT serão automaticamente preenchidos e eles serão logados.<br> <br>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se o usuário entrar no Open-AudIT não tiver acesso ao LDAP de busca, você pode usar outra conta que tenha esse acesso.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Se estes muitos ou mais minutos passaram desde que o dispositivo contatou o servidor, execute as ações.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se você escolher um Colecionador, ele será programado para executar no próximo limite de 5 minutos.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Se a última alteração';

$GLOBALS["lang"]['Iflastchange'] = 'Se a última alteração';

$GLOBALS["lang"]['Ignored'] = 'Ignorado';

$GLOBALS["lang"]['image'] = 'Imagem';

$GLOBALS["lang"]['Image'] = 'Imagem';

$GLOBALS["lang"]['Images'] = 'Imagens';

$GLOBALS["lang"]['implementation_notes'] = 'Notas de execução';

$GLOBALS["lang"]['Implementation Notes'] = 'Notas de execução';

$GLOBALS["lang"]['Import'] = 'Importar';

$GLOBALS["lang"]['Import CSV'] = 'Importar CSV';

$GLOBALS["lang"]['Import Example Data'] = 'Importar Dados de Exemplo';

$GLOBALS["lang"]['Import JSON'] = 'Importar o JSON';

$GLOBALS["lang"]['improvement_opportunities'] = 'Oportunidades de Melhoria';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Oportunidades de Melhoria';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inativo';

$GLOBALS["lang"]['Include'] = 'Incluir';

$GLOBALS["lang"]['Index'] = 'Índice';

$GLOBALS["lang"]['India'] = 'Índia';

$GLOBALS["lang"]['Indonesia'] = 'Indonésia';

$GLOBALS["lang"]['Info'] = 'Informação';

$GLOBALS["lang"]['Informational'] = 'Informação';

$GLOBALS["lang"]['initial_size'] = 'Tamanho inicial';

$GLOBALS["lang"]['Initial Size'] = 'Tamanho inicial';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Tipo de Entrada';

$GLOBALS["lang"]['inputs'] = 'Entradas';

$GLOBALS["lang"]['Inputs'] = 'Entradas';

$GLOBALS["lang"]['Insane'] = 'Insano';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insira dados de exemplo e descubra tudo o que o Open-AudIT pode lhe dizer.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Inserir o seu Licença adquirida Chave';

$GLOBALS["lang"]['install'] = 'Instalar';

$GLOBALS["lang"]['Install'] = 'Instalar';

$GLOBALS["lang"]['install_date'] = 'Data de instalação';

$GLOBALS["lang"]['Install Date'] = 'Data de instalação';

$GLOBALS["lang"]['install_directory'] = 'Instalar a Pasta';

$GLOBALS["lang"]['Install Directory'] = 'Instalar a Pasta';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instalar o OpenScap se necessário';

$GLOBALS["lang"]['install_source'] = 'Instalar fonte';

$GLOBALS["lang"]['Install Source'] = 'Instalar fonte';

$GLOBALS["lang"]['installed_by'] = 'Instalado por';

$GLOBALS["lang"]['Installed By'] = 'Instalado por';

$GLOBALS["lang"]['installed_on'] = 'Instalado Ligado';

$GLOBALS["lang"]['Installed On'] = 'Instalado Ligado';

$GLOBALS["lang"]['Installing'] = 'Instalar';

$GLOBALS["lang"]['instance'] = 'Instância';

$GLOBALS["lang"]['Instance'] = 'Instância';

$GLOBALS["lang"]['instance_ident'] = 'Identificador de instância';

$GLOBALS["lang"]['Instance Ident'] = 'Identificador de instância';

$GLOBALS["lang"]['instance_options'] = 'Opções da instância';

$GLOBALS["lang"]['Instance Options'] = 'Opções da instância';

$GLOBALS["lang"]['instance_provider'] = 'Provedor de Instância';

$GLOBALS["lang"]['Instance Provider'] = 'Provedor de Instância';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Reserva de instância Identificar';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Reserva de instância Identificar';

$GLOBALS["lang"]['instance_state'] = 'Estado de instância';

$GLOBALS["lang"]['Instance State'] = 'Estado de instância';

$GLOBALS["lang"]['instance_tags'] = 'Marcas de instância';

$GLOBALS["lang"]['Instance Tags'] = 'Marcas de instância';

$GLOBALS["lang"]['instance_type'] = 'Tipo de instância';

$GLOBALS["lang"]['Instance Type'] = 'Tipo de instância';

$GLOBALS["lang"]['Integer'] = 'Inteiro';

$GLOBALS["lang"]['Integration'] = 'Integração';

$GLOBALS["lang"]['integrations'] = 'Integração';

$GLOBALS["lang"]['Integrations'] = 'Integração';

$GLOBALS["lang"]['integrations_id'] = 'ID das integrações';

$GLOBALS["lang"]['Integrations ID'] = 'ID das integrações';

$GLOBALS["lang"]['integrations_log'] = 'Registo de Integração';

$GLOBALS["lang"]['Integrations Log'] = 'Registo de Integração';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'ID da interface';

$GLOBALS["lang"]['Interface ID'] = 'ID da interface';

$GLOBALS["lang"]['interface_type'] = 'Tipo de Interface';

$GLOBALS["lang"]['Interface Type'] = 'Tipo de Interface';

$GLOBALS["lang"]['Internal'] = 'Interno';

$GLOBALS["lang"]['Internal Field Name'] = 'Nome do Campo Interno';

$GLOBALS["lang"]['Internal ID'] = 'ID interno';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Array interno do JSON de tokens de acesso válidos para este usuário.';

$GLOBALS["lang"]['Introduction'] = 'Introdução';

$GLOBALS["lang"]['invoice'] = 'Fatura';

$GLOBALS["lang"]['Invoice'] = 'Fatura';

$GLOBALS["lang"]['invoice_id'] = 'ID da factura';

$GLOBALS["lang"]['Invoice ID'] = 'ID da factura';

$GLOBALS["lang"]['invoice_item'] = 'Item da factura';

$GLOBALS["lang"]['Invoice Item'] = 'Item da factura';

$GLOBALS["lang"]['ios_version'] = 'Versão do Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versão do Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Endereço externo A do IP';

$GLOBALS["lang"]['Ip Address External A'] = 'Endereço externo A do IP';

$GLOBALS["lang"]['ip_address_external_b'] = 'Endereço externo do IP B';

$GLOBALS["lang"]['Ip Address External B'] = 'Endereço externo do IP B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Endereço IP Interno A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Endereço IP Interno A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Endereço IP Interno B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Endereço IP Interno B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Tudo Contagem';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Tudo Contagem';

$GLOBALS["lang"]['ip_audited_count'] = 'Contagem Auditiva IP';

$GLOBALS["lang"]['Ip Audited Count'] = 'Contagem Auditiva IP';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Activado';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Activado';

$GLOBALS["lang"]['ip_responding_count'] = 'Contagem Ip Responding';

$GLOBALS["lang"]['Ip Responding Count'] = 'Contagem Ip Responding';

$GLOBALS["lang"]['ip_scanned_count'] = 'Contagem digitalizada IP';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Contagem digitalizada IP';

$GLOBALS["lang"]['Iran'] = 'Irão';

$GLOBALS["lang"]['Iraq'] = 'Iraque';

$GLOBALS["lang"]['Ireland'] = 'Irlanda';

$GLOBALS["lang"]['Is FRU'] = 'É a FRU';

$GLOBALS["lang"]['is_fru'] = 'É Fru';

$GLOBALS["lang"]['Is Fru'] = 'É Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'O servidor NMIS é local (neste servidor Open-AudIT) ou remoto?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Esta conta está activa? Se definido como <code>n</code>, o usuário não pode fazer logon.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Esta tarefa está habilitada (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ilha de Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Questão';

$GLOBALS["lang"]['issuer'] = 'Emissor';

$GLOBALS["lang"]['Issuer'] = 'Emissor';

$GLOBALS["lang"]['Issues'] = 'Questões';

$GLOBALS["lang"]['Italy'] = 'Itália';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON a Importar';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Janeiro';

$GLOBALS["lang"]['Japan'] = 'Japão';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordânia';

$GLOBALS["lang"]['July'] = 'Julho';

$GLOBALS["lang"]['June'] = 'Junho';

$GLOBALS["lang"]['Kazakhstan'] = 'Cazaquistão';

$GLOBALS["lang"]['Kenya'] = 'Quénia';

$GLOBALS["lang"]['kernel_version'] = 'Versão do Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versão do Kernel';

$GLOBALS["lang"]['Key'] = 'Chave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Senha da chave (opcional)';

$GLOBALS["lang"]['keys'] = 'Chaves';

$GLOBALS["lang"]['Keys'] = 'Chaves';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Coreia';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'República Quirguiz';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Língua';

$GLOBALS["lang"]['Language'] = 'Língua';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Última Mudança';

$GLOBALS["lang"]['Last Changed'] = 'Última Mudança';

$GLOBALS["lang"]['last_finished'] = 'Último Terminado';

$GLOBALS["lang"]['Last Finished'] = 'Último Terminado';

$GLOBALS["lang"]['last_logon'] = 'Último Logon';

$GLOBALS["lang"]['Last Logon'] = 'Último Logon';

$GLOBALS["lang"]['last_os_update'] = 'Última Atualização dos Os';

$GLOBALS["lang"]['Last Os Update'] = 'Última Atualização dos Os';

$GLOBALS["lang"]['last_result'] = 'Último Resultado';

$GLOBALS["lang"]['Last Result'] = 'Último Resultado';

$GLOBALS["lang"]['last_run'] = 'Última Execução';

$GLOBALS["lang"]['Last Run'] = 'Última Execução';

$GLOBALS["lang"]['last_seen'] = 'Última Visto';

$GLOBALS["lang"]['Last Seen'] = 'Última Visto';

$GLOBALS["lang"]['last_seen_by'] = 'Última Visto Por';

$GLOBALS["lang"]['Last Seen By'] = 'Última Visto Por';

$GLOBALS["lang"]['last_user'] = 'Último Utilizador';

$GLOBALS["lang"]['Last User'] = 'Último Utilizador';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Letónia';

$GLOBALS["lang"]['Layout'] = 'Disposição';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Conta Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Conta Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Senha do Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Senha do Ldap Dn';

$GLOBALS["lang"]['lease_expiry_date'] = 'Data de termo da locação';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Data de termo da locação';

$GLOBALS["lang"]['Lebanon'] = 'Líbano';

$GLOBALS["lang"]['legal_requirements'] = 'Requisitos jurídicos';

$GLOBALS["lang"]['Legal Requirements'] = 'Requisitos jurídicos';

$GLOBALS["lang"]['Lesotho'] = 'Lesoto';

$GLOBALS["lang"]['Less Than'] = 'Menos do que';

$GLOBALS["lang"]['Less Than or Equals'] = 'Menos ou Igual';

$GLOBALS["lang"]['level'] = 'Nível';

$GLOBALS["lang"]['Level'] = 'Nível';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya Árabe Líbia';

$GLOBALS["lang"]['License'] = 'Licença';

$GLOBALS["lang"]['License Key'] = 'Chave de licença';

$GLOBALS["lang"]['License Required'] = 'Licença Necessária';

$GLOBALS["lang"]['licenses'] = 'Licenças';

$GLOBALS["lang"]['Licenses'] = 'Licenças';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Como';

$GLOBALS["lang"]['limit'] = 'Limite';

$GLOBALS["lang"]['Limit'] = 'Limite';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limitar a consulta aos primeiros itens X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limitado a 100 linhas.';

$GLOBALS["lang"]['line_amount'] = 'Quantidade da Linha';

$GLOBALS["lang"]['Line Amount'] = 'Quantidade da Linha';

$GLOBALS["lang"]['Line Graph'] = 'Gráfico de Linhas';

$GLOBALS["lang"]['line_number_a'] = 'Número da linha A';

$GLOBALS["lang"]['Line Number A'] = 'Número da linha A';

$GLOBALS["lang"]['line_number_b'] = 'Número da linha B';

$GLOBALS["lang"]['Line Number B'] = 'Número da linha B';

$GLOBALS["lang"]['line_text'] = 'Texto da Linha';

$GLOBALS["lang"]['Line Text'] = 'Texto da Linha';

$GLOBALS["lang"]['link'] = 'Ligação';

$GLOBALS["lang"]['Link'] = 'Ligação';

$GLOBALS["lang"]['Link (Advanced)'] = 'Ligação (Avançada)';

$GLOBALS["lang"]['linked_row'] = 'Linha Ligada';

$GLOBALS["lang"]['Linked Row'] = 'Linha Ligada';

$GLOBALS["lang"]['linked_table'] = 'Quadro Ligado';

$GLOBALS["lang"]['Linked Table'] = 'Quadro Ligado';

$GLOBALS["lang"]['links'] = 'Ligações';

$GLOBALS["lang"]['Links'] = 'Ligações';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Liga esta descoberta à nuvem associada (se necessário). Ligações para <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Ligações para <code>descovery_scan_options.id</code>.';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['list_table_format'] = 'Formato da tabela da lista';

$GLOBALS["lang"]['List Table Format'] = 'Formato da tabela da lista';

$GLOBALS["lang"]['Lithuania'] = 'Lituânia';

$GLOBALS["lang"]['Load Balancing'] = 'Equilíbrio de Carga';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Rede de Área Local';

$GLOBALS["lang"]['local_port'] = 'Porto Local';

$GLOBALS["lang"]['Local Port'] = 'Porto Local';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Location'] = 'Localização';

$GLOBALS["lang"]['Location A'] = 'Localização A';

$GLOBALS["lang"]['Location B'] = 'Localização B';

$GLOBALS["lang"]['location_id'] = 'ID da localização';

$GLOBALS["lang"]['Location ID'] = 'ID da localização';

$GLOBALS["lang"]['location_id_a'] = 'Localização ID A';

$GLOBALS["lang"]['Location ID A'] = 'Localização ID A';

$GLOBALS["lang"]['location_id_b'] = 'Localização ID B';

$GLOBALS["lang"]['Location ID B'] = 'Localização ID B';

$GLOBALS["lang"]['location_latitude'] = 'Latitude de Localização';

$GLOBALS["lang"]['Location Latitude'] = 'Latitude de Localização';

$GLOBALS["lang"]['location_level'] = 'Nível de Localização';

$GLOBALS["lang"]['Location Level'] = 'Nível de Localização';

$GLOBALS["lang"]['location_longitude'] = 'Localização Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Localização Longitude';

$GLOBALS["lang"]['location_rack'] = 'Rack de Localização';

$GLOBALS["lang"]['Location Rack'] = 'Rack de Localização';

$GLOBALS["lang"]['location_rack_position'] = 'Posição do Rack de Localização';

$GLOBALS["lang"]['Location Rack Position'] = 'Posição do Rack de Localização';

$GLOBALS["lang"]['location_rack_size'] = 'Tamanho do Rack de Localização';

$GLOBALS["lang"]['Location Rack Size'] = 'Tamanho do Rack de Localização';

$GLOBALS["lang"]['location_room'] = 'Sala de Localização';

$GLOBALS["lang"]['Location Room'] = 'Sala de Localização';

$GLOBALS["lang"]['location_suite'] = 'Suite de Localização';

$GLOBALS["lang"]['Location Suite'] = 'Suite de Localização';

$GLOBALS["lang"]['locations'] = 'Locais';

$GLOBALS["lang"]['Locations'] = 'Locais';

$GLOBALS["lang"]['Locations in this'] = 'Locais neste';

$GLOBALS["lang"]['log'] = 'Registo';

$GLOBALS["lang"]['Log'] = 'Registo';

$GLOBALS["lang"]['log_format'] = 'Formato de registro';

$GLOBALS["lang"]['Log Format'] = 'Formato de registro';

$GLOBALS["lang"]['log_path'] = 'Localização do Registo';

$GLOBALS["lang"]['Log Path'] = 'Localização do Registo';

$GLOBALS["lang"]['log_rotation'] = 'Rotação do Registo';

$GLOBALS["lang"]['Log Rotation'] = 'Rotação do Registo';

$GLOBALS["lang"]['log_status'] = 'Estado do Registo';

$GLOBALS["lang"]['Log Status'] = 'Estado do Registo';

$GLOBALS["lang"]['Logical Cores '] = 'Núcleos Lógicos';

$GLOBALS["lang"]['logical_count'] = 'Contagem lógica';

$GLOBALS["lang"]['Logical Count'] = 'Contagem lógica';

$GLOBALS["lang"]['Logs'] = 'Registos';

$GLOBALS["lang"]['longitude'] = 'Longitude';

$GLOBALS["lang"]['Longitude'] = 'Longitude';

$GLOBALS["lang"]['Low'] = 'Baixo';

$GLOBALS["lang"]['Lower Case'] = 'Em minúsculas';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburgo';

$GLOBALS["lang"]['MAC Address'] = 'Endereço MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricante';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Endereço Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macau';

$GLOBALS["lang"]['Macedonia'] = 'Macedónia';

$GLOBALS["lang"]['Madagascar'] = 'Madagáscar';

$GLOBALS["lang"]['maintenance_expires'] = 'Termo da Manutenção';

$GLOBALS["lang"]['Maintenance Expires'] = 'Termo da Manutenção';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malásia';

$GLOBALS["lang"]['Maldives'] = 'Maldivas';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gerenciar no NMIS';

$GLOBALS["lang"]['Manual Input'] = 'Entrada Manual';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manualmente definido por usuário, padrão para Produção.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manualmente definido pelo usuário.';

$GLOBALS["lang"]['manufacture_date'] = 'Data de fabrico';

$GLOBALS["lang"]['Manufacture Date'] = 'Data de fabrico';

$GLOBALS["lang"]['manufacturer'] = 'Fabricante';

$GLOBALS["lang"]['Manufacturer'] = 'Fabricante';

$GLOBALS["lang"]['manufacturer_code'] = 'Código do fabricante';

$GLOBALS["lang"]['Manufacturer Code'] = 'Código do fabricante';

$GLOBALS["lang"]['Map'] = 'Mapa';

$GLOBALS["lang"]['maps'] = 'Mapas';

$GLOBALS["lang"]['Maps'] = 'Mapas';

$GLOBALS["lang"]['March'] = 'Março';

$GLOBALS["lang"]['Marshall Islands'] = 'Ilhas Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinica';

$GLOBALS["lang"]['mask'] = 'Máscara';

$GLOBALS["lang"]['Mask'] = 'Máscara';

$GLOBALS["lang"]['Match'] = 'Corresponder';

$GLOBALS["lang"]['match_options'] = 'Opções de Corresponder';

$GLOBALS["lang"]['Match Options'] = 'Opções de Corresponder';

$GLOBALS["lang"]['match_string'] = 'Corresponder ao Texto';

$GLOBALS["lang"]['Match String'] = 'Corresponder ao Texto';

$GLOBALS["lang"]['Matching Attribute'] = 'Corresponder ao atributo';

$GLOBALS["lang"]['maturity_level'] = 'Nível de maturidade';

$GLOBALS["lang"]['Maturity Level'] = 'Nível de maturidade';

$GLOBALS["lang"]['maturity_score'] = 'Pontuação de maturidade';

$GLOBALS["lang"]['Maturity Score'] = 'Pontuação de maturidade';

$GLOBALS["lang"]['Mauritania'] = 'Mauritânia';

$GLOBALS["lang"]['Mauritius'] = 'Maurício';

$GLOBALS["lang"]['max_file_size'] = 'Tamanho máximo do arquivo';

$GLOBALS["lang"]['Max File Size'] = 'Tamanho máximo do arquivo';

$GLOBALS["lang"]['Max Length'] = 'Comprimento máximo';

$GLOBALS["lang"]['max_size'] = 'Tamanho Máximo';

$GLOBALS["lang"]['Max Size'] = 'Tamanho Máximo';

$GLOBALS["lang"]['May'] = 'Maio';

$GLOBALS["lang"]['Mayotte'] = 'Maiote';

$GLOBALS["lang"]['Medium'] = 'Médio';

$GLOBALS["lang"]['members'] = 'Membros';

$GLOBALS["lang"]['Members'] = 'Membros';

$GLOBALS["lang"]['memory'] = 'Memória';

$GLOBALS["lang"]['Memory'] = 'Memória';

$GLOBALS["lang"]['memory_count'] = 'Contagem de Memórias';

$GLOBALS["lang"]['Memory Count'] = 'Contagem de Memórias';

$GLOBALS["lang"]['memory_slot_count'] = 'Contagem da Fenda de Memória';

$GLOBALS["lang"]['Memory Slot Count'] = 'Contagem da Fenda de Memória';

$GLOBALS["lang"]['menu_category'] = 'Categoria do Menu';

$GLOBALS["lang"]['Menu Category'] = 'Categoria do Menu';

$GLOBALS["lang"]['menu_display'] = 'Visualização do Menu';

$GLOBALS["lang"]['Menu Display'] = 'Visualização do Menu';

$GLOBALS["lang"]['message'] = 'Mensagem';

$GLOBALS["lang"]['Message'] = 'Mensagem';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Última Mudança';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Última Mudança';

$GLOBALS["lang"]['metric'] = 'Métrico';

$GLOBALS["lang"]['Metric'] = 'Métrico';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Rede de Área Metropolitana';

$GLOBALS["lang"]['Mexico'] = 'México';

$GLOBALS["lang"]['Micronesia'] = 'Micronésia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtempo';

$GLOBALS["lang"]['Microtime'] = 'Microtempo';

$GLOBALS["lang"]['migrations'] = 'Migrações';

$GLOBALS["lang"]['Migrations'] = 'Migrações';

$GLOBALS["lang"]['minute'] = 'Minuto';

$GLOBALS["lang"]['Minute'] = 'Minuto';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutos Desde a última auditoria são maiores que';

$GLOBALS["lang"]['model'] = 'Modelo';

$GLOBALS["lang"]['Model'] = 'Modelo';

$GLOBALS["lang"]['model_family'] = 'Família de modelos';

$GLOBALS["lang"]['Model Family'] = 'Família de modelos';

$GLOBALS["lang"]['module'] = 'Módulo';

$GLOBALS["lang"]['Module'] = 'Módulo';

$GLOBALS["lang"]['module_index'] = 'Índice do Módulo';

$GLOBALS["lang"]['Module Index'] = 'Índice do Módulo';

$GLOBALS["lang"]['Moldova'] = 'Moldávia';

$GLOBALS["lang"]['Monaco'] = 'Mónaco';

$GLOBALS["lang"]['Monday'] = 'Segunda-feira';

$GLOBALS["lang"]['Mongolia'] = 'Mongólia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mês';

$GLOBALS["lang"]['Month'] = 'Mês';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marrocos';

$GLOBALS["lang"]['motherboard'] = 'Quadro-mãe';

$GLOBALS["lang"]['Motherboard'] = 'Quadro-mãe';

$GLOBALS["lang"]['mount_point'] = 'Ponto de Montagem';

$GLOBALS["lang"]['Mount Point'] = 'Ponto de Montagem';

$GLOBALS["lang"]['mount_type'] = 'Tipo de Montagem';

$GLOBALS["lang"]['Mount Type'] = 'Tipo de Montagem';

$GLOBALS["lang"]['Mozambique'] = 'Moçambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Deve Responder ao Ping';

$GLOBALS["lang"]['Myanmar'] = 'Mianmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-a-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'Cliente NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opções do Dispositivo NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Seleção do dispositivo NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nome do campo NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Tipo de Campo NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Grupo NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'Póler NMIS';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Papel';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - Você pode evitar que credenciais de texto simples sejam exibidas abaixo, definindo o item de configuração para <code>decrypt_credentials</code> para <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nome';

$GLOBALS["lang"]['Name'] = 'Nome';

$GLOBALS["lang"]['namespace'] = 'Espaço de nomes';

$GLOBALS["lang"]['Namespace'] = 'Espaço de nomes';

$GLOBALS["lang"]['Namibia'] = 'Namíbia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Índice líquido';

$GLOBALS["lang"]['Net Index'] = 'Índice líquido';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antilhas Holandesas';

$GLOBALS["lang"]['Netherlands the'] = 'Países Baixos';

$GLOBALS["lang"]['netmask'] = 'Máscara de rede';

$GLOBALS["lang"]['Netmask'] = 'Máscara de rede';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Políticas do Netstat';

$GLOBALS["lang"]['Network'] = 'Rede';

$GLOBALS["lang"]['network_address'] = 'Endereço da rede';

$GLOBALS["lang"]['Network Address'] = 'Endereço da rede';

$GLOBALS["lang"]['network_domain'] = 'Domínio da Rede';

$GLOBALS["lang"]['Network Domain'] = 'Domínio da Rede';

$GLOBALS["lang"]['Network Types'] = 'Tipos de Rede';

$GLOBALS["lang"]['networks'] = 'Redes';

$GLOBALS["lang"]['Networks'] = 'Redes';

$GLOBALS["lang"]['Networks Generated By'] = 'Redes Geradas por';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Redes usando uma máscara CIDR de';

$GLOBALS["lang"]['New Building Name'] = 'Novo nome do edifício';

$GLOBALS["lang"]['New Caledonia'] = 'Nova Caledónia';

$GLOBALS["lang"]['New Floor Name'] = 'Nome do Novo Piso';

$GLOBALS["lang"]['New Room Name'] = 'Novo Nome do Quarto';

$GLOBALS["lang"]['New Row Name'] = 'Nome da Nova Linha';

$GLOBALS["lang"]['New Zealand'] = 'Nova Zelândia';

$GLOBALS["lang"]['next_hop'] = 'Próximo Hop';

$GLOBALS["lang"]['Next Hop'] = 'Próximo Hop';

$GLOBALS["lang"]['next_run'] = 'Próxima Execução';

$GLOBALS["lang"]['Next Run'] = 'Próxima Execução';

$GLOBALS["lang"]['Nicaragua'] = 'Nicarágua';

$GLOBALS["lang"]['Niger'] = 'Níger';

$GLOBALS["lang"]['Nigeria'] = 'Nigéria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Cliente Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Cliente Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Grupo Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Grupo Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Gerenciar';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Gerenciar';

$GLOBALS["lang"]['nmis_name'] = 'Nome Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nome Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Notas Nmis';

$GLOBALS["lang"]['Nmis Notes'] = 'Notas Nmis';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Papel Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Papel Nmis';

$GLOBALS["lang"]['No'] = 'Não';

$GLOBALS["lang"]['No Devices Returned'] = 'Nenhum dispositivo retornado';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Nenhuma API do Google Maps Chave presente, você não será capaz de exibir o mapa.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Nenhuma licença profissional ou empresarial';

$GLOBALS["lang"]['No Results'] = 'Nenhum resultado';

$GLOBALS["lang"]['No data in License Key'] = 'Nenhum dado na chave de licença';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Não é necessário atualizar o banco de dados neste momento.';

$GLOBALS["lang"]['Node'] = 'Nó';

$GLOBALS["lang"]['None'] = 'Nenhum';

$GLOBALS["lang"]['Norfolk Island'] = 'Ilha Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Ilhas Marianas do Norte';

$GLOBALS["lang"]['Norway'] = 'Noruega';

$GLOBALS["lang"]['Not Applicable'] = 'Não aplicável';

$GLOBALS["lang"]['Not Checked'] = 'Não Verificado';

$GLOBALS["lang"]['Not Equals'] = 'Não Igual';

$GLOBALS["lang"]['Not In'] = 'Não Entrar';

$GLOBALS["lang"]['Not Like'] = 'Não Como';

$GLOBALS["lang"]['Not Set'] = 'Não definido';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normalmente não utilizado. Se definido, isso requer que o dispositivo tenha uma porta aberta (como por Opções de digitalização) para ser considerado respondendo. Um endereço MAC, uma resposta arp ou uma resposta ping não são considerados suficientes para serem considerados como respondendo. Útil se um roteador ou firewall entre o servidor Open-AudIT e IP de destino estiver respondendo às varreduras de porta em nome dos IPs.';

$GLOBALS["lang"]['Note'] = 'Nota';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - Selecionar um pai fornecerá automaticamente acesso aos seus filhos (embora não seja mostrado aqui).';

$GLOBALS["lang"]['Notes'] = 'Notas';

$GLOBALS["lang"]['notes'] = 'Notas';

$GLOBALS["lang"]['Notice'] = 'Aviso';

$GLOBALS["lang"]['November'] = 'Novembro';

$GLOBALS["lang"]['ORDER BY'] = 'ORDEM POR';

$GLOBALS["lang"]['OS'] = 'SO';

$GLOBALS["lang"]['OS Families'] = 'Famílias OS';

$GLOBALS["lang"]['OS Family'] = 'Família OS';

$GLOBALS["lang"]['OS Group'] = 'Grupo OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Gerenciar';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Gerenciar';

$GLOBALS["lang"]['object_ident'] = 'Identificar o Objecto';

$GLOBALS["lang"]['Object Ident'] = 'Identificar o Objecto';

$GLOBALS["lang"]['October'] = 'Outubro';

$GLOBALS["lang"]['Oman'] = 'Omã';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Ligado';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Um dos <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ou <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Uma das Redes de Área do Campus, Rede de Nuvem, Rede Empresarial Privada, Rede de Área Inicial, Rede de Área Local Local Local, Rede de Áreas Ópticas Passivas, Rede de Área Pessoal, Rede de Área de Armazenamento, Rede de Área de Sistema, Rede Virtual Privada, Rede de Área Ampla, Rede de Área Local Sem Fios.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Um de desenvolvimento, recuperação de desastres, avaliação, pré-produção, produção, teste, treinamento, teste de aceitação do usuário';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Um dos alocados, delegados, a planear, reservados, não afectados, desconhecidos, não geridos. Por omissão a atribuir.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Um dos diretórios <code>active</code> ou <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Um dos: antivírus, backup, firewall, aprovado, banido, ignorado ou outro.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentação em linha';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Comunidade Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selecção do Dispositivo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nome do Campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licenças Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opções do Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Profissional Open-AudIT';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap está Instalado';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn do Usuário Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn do Usuário Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atributo de Associação de Utilizadores Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atributo de Associação de Utilizadores Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Abrir o filtro';

$GLOBALS["lang"]['Open|filtered'] = 'Abrir o filtro';

$GLOBALS["lang"]['Operating System'] = 'Sistema Operacional';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Família do sistema operacional contém';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemas operativos';

$GLOBALS["lang"]['optical'] = 'Óptico';

$GLOBALS["lang"]['Optical'] = 'Óptico';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versão opcional como auditado pelo Open-AudIT. Use o sinal de porcentagem % como um wildcard.';

$GLOBALS["lang"]['options'] = 'Opções';

$GLOBALS["lang"]['Options'] = 'Opções';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ou selecione nos campos abaixo.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendentes';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendentes';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = '_Editar';

$GLOBALS["lang"]['organisation'] = '_Editar';

$GLOBALS["lang"]['Organisation Descendants'] = 'Descendentes';

$GLOBALS["lang"]['orgs'] = 'Orgulhos';

$GLOBALS["lang"]['Orgs'] = 'Orgulhos';

$GLOBALS["lang"]['orientation'] = 'Orientação';

$GLOBALS["lang"]['Orientation'] = 'Orientação';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Arco de Os';

$GLOBALS["lang"]['Os Arch'] = 'Arco de Os';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_family'] = 'Família de Os';

$GLOBALS["lang"]['Os Family'] = 'Família de Os';

$GLOBALS["lang"]['os_group'] = 'Grupo Os';

$GLOBALS["lang"]['Os Group'] = 'Grupo Os';

$GLOBALS["lang"]['os_installation_date'] = 'Data de instalação';

$GLOBALS["lang"]['Os Installation Date'] = 'Data de instalação';

$GLOBALS["lang"]['os_licence_expiry'] = 'Termo da licença';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Termo da licença';

$GLOBALS["lang"]['os_license'] = 'Licença de Os';

$GLOBALS["lang"]['Os License'] = 'Licença de Os';

$GLOBALS["lang"]['os_license_code'] = 'Código da Licença dos Os';

$GLOBALS["lang"]['Os License Code'] = 'Código da Licença dos Os';

$GLOBALS["lang"]['os_license_mode'] = 'Modo de Licença Os';

$GLOBALS["lang"]['Os License Mode'] = 'Modo de Licença Os';

$GLOBALS["lang"]['os_license_type'] = 'Tipo de Licença dos Os';

$GLOBALS["lang"]['Os License Type'] = 'Tipo de Licença dos Os';

$GLOBALS["lang"]['os_name'] = 'Nome dos Os';

$GLOBALS["lang"]['Os Name'] = 'Nome dos Os';

$GLOBALS["lang"]['os_version'] = 'Versão de Os';

$GLOBALS["lang"]['Os Version'] = 'Versão de Os';

$GLOBALS["lang"]['Other'] = 'Outros';

$GLOBALS["lang"]['Others'] = 'Outros';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nosso tempo limite para uma resposta SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nosso tempo limite para uma resposta WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nosso tempo limite para uma resposta SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nosso tempo limite para uma resposta de script de auditoria';

$GLOBALS["lang"]['output'] = 'Saída';

$GLOBALS["lang"]['Output'] = 'Saída';

$GLOBALS["lang"]['outputs'] = 'Saídas';

$GLOBALS["lang"]['Outputs'] = 'Saídas';

$GLOBALS["lang"]['overwrite'] = 'Sobrescrever';

$GLOBALS["lang"]['Overwrite'] = 'Sobrescrever';

$GLOBALS["lang"]['owner'] = 'Dono';

$GLOBALS["lang"]['Owner'] = 'Dono';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['package'] = 'Pacote';

$GLOBALS["lang"]['Package'] = 'Pacote';

$GLOBALS["lang"]['packages'] = 'Pacotes';

$GLOBALS["lang"]['Packages'] = 'Pacotes';

$GLOBALS["lang"]['pagefile'] = 'Arquivo de página';

$GLOBALS["lang"]['Pagefile'] = 'Arquivo de página';

$GLOBALS["lang"]['Pakistan'] = 'Paquistão';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Território Palestiniano';

$GLOBALS["lang"]['Panama'] = 'Panamá';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Nova Guiné';

$GLOBALS["lang"]['Paraguay'] = 'Paraguai';

$GLOBALS["lang"]['Paranoid'] = 'Paranóico';

$GLOBALS["lang"]['Parent'] = 'Parente';

$GLOBALS["lang"]['parent_id'] = 'ID pai';

$GLOBALS["lang"]['Parent ID'] = 'ID pai';

$GLOBALS["lang"]['parent_name'] = 'Nome do pai';

$GLOBALS["lang"]['Parent Name'] = 'Nome do pai';

$GLOBALS["lang"]['part_number'] = 'Número da parte';

$GLOBALS["lang"]['Part Number'] = 'Número da parte';

$GLOBALS["lang"]['part_of_domain'] = 'Parte do Domínio';

$GLOBALS["lang"]['Part Of Domain'] = 'Parte do Domínio';

$GLOBALS["lang"]['Partition'] = 'Partição';

$GLOBALS["lang"]['partition_count'] = 'Número de partições';

$GLOBALS["lang"]['Partition Count'] = 'Número de partições';

$GLOBALS["lang"]['partition_disk_index'] = 'Índice de Disco de Partição';

$GLOBALS["lang"]['Partition Disk Index'] = 'Índice de Disco de Partição';

$GLOBALS["lang"]['Pass'] = 'Passar';

$GLOBALS["lang"]['Passed'] = 'Passado';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Rede de Área Local Óptica Passiva';

$GLOBALS["lang"]['password'] = 'Senha';

$GLOBALS["lang"]['Password'] = 'Senha';

$GLOBALS["lang"]['password_changeable'] = 'Senha Alterável';

$GLOBALS["lang"]['Password Changeable'] = 'Senha Alterável';

$GLOBALS["lang"]['password_disabled'] = 'Senha Desactivada';

$GLOBALS["lang"]['Password Disabled'] = 'Senha Desactivada';

$GLOBALS["lang"]['password_expires'] = 'A senha expira';

$GLOBALS["lang"]['Password Expires'] = 'A senha expira';

$GLOBALS["lang"]['password_last_changed'] = 'Senha Última Alterada';

$GLOBALS["lang"]['Password Last Changed'] = 'Senha Última Alterada';

$GLOBALS["lang"]['password_required'] = 'Senha Necessária';

$GLOBALS["lang"]['Password Required'] = 'Senha Necessária';

$GLOBALS["lang"]['patch_panel'] = 'Painel de patch';

$GLOBALS["lang"]['Patch Panel'] = 'Painel de patch';

$GLOBALS["lang"]['patch_panel_port'] = 'Porta do Painel de Patch';

$GLOBALS["lang"]['Patch Panel Port'] = 'Porta do Painel de Patch';

$GLOBALS["lang"]['path'] = 'Localização';

$GLOBALS["lang"]['Path'] = 'Localização';

$GLOBALS["lang"]['Performance'] = 'Desempenho';

$GLOBALS["lang"]['permission'] = 'Permissão';

$GLOBALS["lang"]['Permission'] = 'Permissão';

$GLOBALS["lang"]['permissions'] = 'Permissões';

$GLOBALS["lang"]['Permissions'] = 'Permissões';

$GLOBALS["lang"]['Personal Area Network'] = 'Rede de Área Pessoal';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipinas';

$GLOBALS["lang"]['phone'] = 'Telefone';

$GLOBALS["lang"]['Phone'] = 'Telefone';

$GLOBALS["lang"]['Physical CPUs'] = 'CPUs físicas';

$GLOBALS["lang"]['physical_count'] = 'Contagem Física';

$GLOBALS["lang"]['Physical Count'] = 'Contagem Física';

$GLOBALS["lang"]['physical_depth'] = 'Profundidade Física';

$GLOBALS["lang"]['Physical Depth'] = 'Profundidade Física';

$GLOBALS["lang"]['physical_height'] = 'Altura Física';

$GLOBALS["lang"]['Physical Height'] = 'Altura Física';

$GLOBALS["lang"]['physical_width'] = 'Largura física';

$GLOBALS["lang"]['Physical Width'] = 'Largura física';

$GLOBALS["lang"]['picture'] = 'Imagem';

$GLOBALS["lang"]['Picture'] = 'Imagem';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Gráfico de Tortas';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Ilhas Pitcairn';

$GLOBALS["lang"]['placement'] = 'Colocação';

$GLOBALS["lang"]['Placement'] = 'Colocação';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Por favor, tenha um login do administrador Open-AudIT e atualize o banco de dados.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Por favor, note que a caixa de seleção substituirá a caixa de entrada de texto.';

$GLOBALS["lang"]['Please set using'] = 'Por favor, defina a utilização';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polónia';

$GLOBALS["lang"]['Policies'] = 'Políticas';

$GLOBALS["lang"]['Policies have exceptions.'] = 'As políticas têm excepções.';

$GLOBALS["lang"]['policy'] = 'Política';

$GLOBALS["lang"]['Policy'] = 'Política';

$GLOBALS["lang"]['policy_id'] = 'ID da política';

$GLOBALS["lang"]['Policy ID'] = 'ID da política';

$GLOBALS["lang"]['Policy Result'] = 'Resultado da Política';

$GLOBALS["lang"]['Policy Results'] = 'Resultados da Política';

$GLOBALS["lang"]['Polite'] = 'Polido';

$GLOBALS["lang"]['Populated by audit.'] = 'Populado por auditoria.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populada por descoberta e auditoria.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populado dinamicamente.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populado do DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populado da descoberta da SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Populado de auditorias de dispositivos.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populado do nome da máquina.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populada a partir do ID de máquina no Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populado a partir do IP para a rota padrão ou o IP detectado na descoberta.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populado do comando hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populado com dados adicionais do sistema externo, em uma representação JSON.';

$GLOBALS["lang"]['port'] = 'Porto';

$GLOBALS["lang"]['Port'] = 'Porto';

$GLOBALS["lang"]['port_name'] = 'Nome da porta';

$GLOBALS["lang"]['Port Name'] = 'Nome da porta';

$GLOBALS["lang"]['port_number'] = 'Número da porta';

$GLOBALS["lang"]['Port Number'] = 'Número da porta';

$GLOBALS["lang"]['ports_in_order'] = 'Portos em ordem';

$GLOBALS["lang"]['Ports In Order'] = 'Portos em ordem';

$GLOBALS["lang"]['ports_stop_after'] = 'Portos Parar Depois';

$GLOBALS["lang"]['Ports Stop After'] = 'Portos Parar Depois';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal';

$GLOBALS["lang"]['position'] = 'Posição';

$GLOBALS["lang"]['Position'] = 'Posição';

$GLOBALS["lang"]['postcode'] = 'Código postal';

$GLOBALS["lang"]['Postcode'] = 'Código postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuito de Energia';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito de Energia';

$GLOBALS["lang"]['power_sockets'] = 'Soquetes de Energia';

$GLOBALS["lang"]['Power Sockets'] = 'Soquetes de Energia';

$GLOBALS["lang"]['Prerequisites'] = 'Pré-requisitos';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Pré-requisitos e testes';

$GLOBALS["lang"]['present'] = 'Presente';

$GLOBALS["lang"]['Present'] = 'Presente';

$GLOBALS["lang"]['previous_value'] = 'Valor anterior';

$GLOBALS["lang"]['Previous Value'] = 'Valor anterior';

$GLOBALS["lang"]['primary'] = 'Primário';

$GLOBALS["lang"]['Primary'] = 'Primário';

$GLOBALS["lang"]['Primary Key'] = 'Chave Primária';

$GLOBALS["lang"]['print_queue'] = 'Imprimir a Fila';

$GLOBALS["lang"]['Print Queue'] = 'Imprimir a Fila';

$GLOBALS["lang"]['printer_color'] = 'Cor da Impressora';

$GLOBALS["lang"]['Printer Color'] = 'Cor da Impressora';

$GLOBALS["lang"]['printer_duplex'] = 'Duplex da Impressora';

$GLOBALS["lang"]['Printer Duplex'] = 'Duplex da Impressora';

$GLOBALS["lang"]['printer_port_name'] = 'Nome da Porta da Impressora';

$GLOBALS["lang"]['Printer Port Name'] = 'Nome da Porta da Impressora';

$GLOBALS["lang"]['printer_shared'] = 'Impressora Compartilhada';

$GLOBALS["lang"]['Printer Shared'] = 'Impressora Compartilhada';

$GLOBALS["lang"]['printer_shared_name'] = 'Nome Compartilhado da Impressora';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nome Compartilhado da Impressora';

$GLOBALS["lang"]['priority'] = 'Prioridade';

$GLOBALS["lang"]['Priority'] = 'Prioridade';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Senha de Privacidade';

$GLOBALS["lang"]['processor'] = 'Processador';

$GLOBALS["lang"]['Processor'] = 'Processador';

$GLOBALS["lang"]['processor_count'] = 'Contagem do processador';

$GLOBALS["lang"]['Processor Count'] = 'Contagem do processador';

$GLOBALS["lang"]['processor_slot_count'] = 'Contagem de Fenda de Processador';

$GLOBALS["lang"]['Processor Slot Count'] = 'Contagem de Fenda de Processador';

$GLOBALS["lang"]['processor_type'] = 'Tipo de Processador';

$GLOBALS["lang"]['Processor Type'] = 'Tipo de Processador';

$GLOBALS["lang"]['Processors'] = 'Processadores';

$GLOBALS["lang"]['product_name'] = 'Nome do produto';

$GLOBALS["lang"]['Product Name'] = 'Nome do produto';

$GLOBALS["lang"]['profile'] = 'Perfil';

$GLOBALS["lang"]['Profile'] = 'Perfil';

$GLOBALS["lang"]['program'] = 'Aplicação';

$GLOBALS["lang"]['Program'] = 'Aplicação';

$GLOBALS["lang"]['protocol'] = 'Protocolo';

$GLOBALS["lang"]['Protocol'] = 'Protocolo';

$GLOBALS["lang"]['provider'] = 'Fornecedor';

$GLOBALS["lang"]['Provider'] = 'Fornecedor';

$GLOBALS["lang"]['publisher'] = 'Editor';

$GLOBALS["lang"]['Publisher'] = 'Editor';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Rico';

$GLOBALS["lang"]['Purchase'] = 'Compra';

$GLOBALS["lang"]['purchase_amount'] = 'Quantidade de Compra';

$GLOBALS["lang"]['Purchase Amount'] = 'Quantidade de Compra';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centro de Custos de Compra';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centro de Custos de Compra';

$GLOBALS["lang"]['purchase_count'] = 'Contagem de Compras';

$GLOBALS["lang"]['Purchase Count'] = 'Contagem de Compras';

$GLOBALS["lang"]['purchase_date'] = 'Data de compra';

$GLOBALS["lang"]['Purchase Date'] = 'Data de compra';

$GLOBALS["lang"]['purchase_invoice'] = 'Comprar Fatura';

$GLOBALS["lang"]['Purchase Invoice'] = 'Comprar Fatura';

$GLOBALS["lang"]['purchase_order'] = 'Ordem de Compra';

$GLOBALS["lang"]['Purchase Order'] = 'Ordem de Compra';

$GLOBALS["lang"]['purchase_order_number'] = 'Número de ordem de compra';

$GLOBALS["lang"]['Purchase Order Number'] = 'Número de ordem de compra';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Número do contrato de serviço de compra';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Número do contrato de serviço de compra';

$GLOBALS["lang"]['purchase_vendor'] = 'Compra do Fornecedor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Compra do Fornecedor';

$GLOBALS["lang"]['purpose'] = 'Objecto';

$GLOBALS["lang"]['Purpose'] = 'Objecto';

$GLOBALS["lang"]['Qatar'] = 'Catar';

$GLOBALS["lang"]['queries'] = 'Consultas';

$GLOBALS["lang"]['Queries'] = 'Consultas';

$GLOBALS["lang"]['Query'] = 'Consulta';

$GLOBALS["lang"]['queue'] = 'Fila';

$GLOBALS["lang"]['Queue'] = 'Fila';

$GLOBALS["lang"]['Queue Limit'] = 'Limite da Fila';

$GLOBALS["lang"]['Queued Device Audits'] = 'Auditorias em fila de dispositivos';

$GLOBALS["lang"]['Queued IP Scans'] = 'Escaneamentos IP em fila';

$GLOBALS["lang"]['Queued Items'] = 'Itens em fila';

$GLOBALS["lang"]['RU Start'] = 'Início da RU';

$GLOBALS["lang"]['RX Bitrate'] = 'Taxa de bits RX';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Nível RX';

$GLOBALS["lang"]['RX Power'] = 'Potência RX';

$GLOBALS["lang"]['RX Profile'] = 'Perfil RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Dispositivos Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Dispositivos Rack';

$GLOBALS["lang"]['rack_id'] = 'ID do Rack';

$GLOBALS["lang"]['Rack ID'] = 'ID do Rack';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Rádio';

$GLOBALS["lang"]['Radio'] = 'Rádio';

$GLOBALS["lang"]['Radio MAC'] = 'Rádio MAC';

$GLOBALS["lang"]['rationale'] = 'Razão';

$GLOBALS["lang"]['Rationale'] = 'Razão';

$GLOBALS["lang"]['Read'] = 'Ler';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Leia nossa documentação online na Wiki Open-AudIT.';

$GLOBALS["lang"]['Red Query'] = 'Consulta Vermelha';

$GLOBALS["lang"]['Redirect URI'] = 'Redirecionar URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirecionar Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirecionar Uri';

$GLOBALS["lang"]['region'] = 'Região';

$GLOBALS["lang"]['Region'] = 'Região';

$GLOBALS["lang"]['registered_user'] = 'Utilizador Registado';

$GLOBALS["lang"]['Registered User'] = 'Utilizador Registado';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Lançar';

$GLOBALS["lang"]['remediation'] = 'Remediação';

$GLOBALS["lang"]['Remediation'] = 'Remediação';

$GLOBALS["lang"]['Remote'] = 'Remoto';

$GLOBALS["lang"]['remote_address'] = 'Endereço remoto';

$GLOBALS["lang"]['Remote Address'] = 'Endereço remoto';

$GLOBALS["lang"]['remote_port'] = 'Porto Remoto';

$GLOBALS["lang"]['Remote Port'] = 'Porto Remoto';

$GLOBALS["lang"]['Remove'] = 'Remover';

$GLOBALS["lang"]['Remove Exception'] = 'Remover exceção';

$GLOBALS["lang"]['Report'] = 'Relatório';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Relatório sobre seus dispositivos, redes e muito mais';

$GLOBALS["lang"]['reportable'] = 'Relatável';

$GLOBALS["lang"]['Reportable'] = 'Relatável';

$GLOBALS["lang"]['request'] = 'Pedido';

$GLOBALS["lang"]['Request'] = 'Pedido';

$GLOBALS["lang"]['require_port'] = 'Requer Porto';

$GLOBALS["lang"]['Require Port'] = 'Requer Porto';

$GLOBALS["lang"]['Require an Open Port'] = 'Requer uma Porta Aberta';

$GLOBALS["lang"]['Required'] = 'Requerido';

$GLOBALS["lang"]['Reset'] = 'Reiniciar';

$GLOBALS["lang"]['Reset All Data'] = 'Reiniciar Todos os Dados';

$GLOBALS["lang"]['Reset to Default'] = 'Reiniciar para Padrão';

$GLOBALS["lang"]['resource'] = 'Recurso';

$GLOBALS["lang"]['Resource'] = 'Recurso';

$GLOBALS["lang"]['Resource Name'] = 'Nome do recurso';

$GLOBALS["lang"]['Resources'] = 'Recursos';

$GLOBALS["lang"]['response'] = 'Resposta';

$GLOBALS["lang"]['Response'] = 'Resposta';

$GLOBALS["lang"]['responsibility'] = 'Responsabilidade';

$GLOBALS["lang"]['Responsibility'] = 'Responsabilidade';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrição ao Privado';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrição à Subrede';

$GLOBALS["lang"]['result'] = 'Resultado';

$GLOBALS["lang"]['Result'] = 'Resultado';

$GLOBALS["lang"]['Results'] = 'Resultados';

$GLOBALS["lang"]['retrieved'] = 'Recuperado';

$GLOBALS["lang"]['Retrieved'] = 'Recuperado';

$GLOBALS["lang"]['retrieved_ident'] = 'Identificador Recuperado';

$GLOBALS["lang"]['Retrieved Ident'] = 'Identificador Recuperado';

$GLOBALS["lang"]['retrieved_name'] = 'Nome recuperado';

$GLOBALS["lang"]['Retrieved Name'] = 'Nome recuperado';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retirado do dispositivo - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:umame.';

$GLOBALS["lang"]['Reunion'] = 'Reunião';

$GLOBALS["lang"]['revision'] = 'Revisão';

$GLOBALS["lang"]['Revision'] = 'Revisão';

$GLOBALS["lang"]['risk_assesment_result'] = 'Resultado da Avaliação do Risco';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Resultado da Avaliação do Risco';

$GLOBALS["lang"]['role'] = 'Papel';

$GLOBALS["lang"]['Role'] = 'Papel';

$GLOBALS["lang"]['roles'] = 'Funções';

$GLOBALS["lang"]['Roles'] = 'Funções';

$GLOBALS["lang"]['Romania'] = 'Roménia';

$GLOBALS["lang"]['Room'] = 'Quarto';

$GLOBALS["lang"]['route'] = 'Rota';

$GLOBALS["lang"]['Route'] = 'Rota';

$GLOBALS["lang"]['Row'] = 'Linha';

$GLOBALS["lang"]['Row Count'] = 'Contagem de linhas';

$GLOBALS["lang"]['row_position'] = 'Posição da Linha';

$GLOBALS["lang"]['Row Position'] = 'Posição da Linha';

$GLOBALS["lang"]['Rows'] = 'Linhas';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'Ru Iniciar';

$GLOBALS["lang"]['Ru Start'] = 'Ru Iniciar';

$GLOBALS["lang"]['rule_group'] = 'Grupo de Regras';

$GLOBALS["lang"]['Rule Group'] = 'Grupo de Regras';

$GLOBALS["lang"]['rules'] = 'Regras';

$GLOBALS["lang"]['Rules'] = 'Regras';

$GLOBALS["lang"]['Run Discovery'] = 'Executar a Descoberta';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Executar a Descoberta nos Dispositivos';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Execute uma descoberta e descubra o que está em sua rede';

$GLOBALS["lang"]['Run this Command'] = 'Executar este Comando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Russian Federation'] = 'Federação Russa';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Taxa de Dados Rx';

$GLOBALS["lang"]['Rx Bitrate'] = 'Taxa de Dados Rx';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Nível Rx';

$GLOBALS["lang"]['Rx Level'] = 'Nível Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Perfil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Perfil Rx';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versão SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detalhes';

$GLOBALS["lang"]['SNMP OID'] = 'OID SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'Versão do SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avançado)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Declarações de Criação SQL';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Chave';

$GLOBALS["lang"]['SW Revision'] = 'Revisão da SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'São Bartelemia';

$GLOBALS["lang"]['Saint Helena'] = 'Santa Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'São Cristóvão e Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Santa Lúcia';

$GLOBALS["lang"]['Saint Martin'] = 'São Martinho';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'São Pedro e Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'São Vicente e Granadinas';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé e Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Sábado';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arábia Saudita';

$GLOBALS["lang"]['Save as Default'] = 'Salvar como padrão';

$GLOBALS["lang"]['scaling'] = 'Escala';

$GLOBALS["lang"]['Scaling'] = 'Escala';

$GLOBALS["lang"]['scan_options'] = 'Opções de Pesquisa';

$GLOBALS["lang"]['Scan Options'] = 'Opções de Pesquisa';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Analisar o Nmap número superior de portas TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Examine o Nmap número superior de portas UDP.';

$GLOBALS["lang"]['schedule'] = 'Agendar';

$GLOBALS["lang"]['Schedule'] = 'Agendar';

$GLOBALS["lang"]['script_timeout'] = 'Tempo- limite do programa';

$GLOBALS["lang"]['Script Timeout'] = 'Tempo- limite do programa';

$GLOBALS["lang"]['scripts'] = 'Programas';

$GLOBALS["lang"]['Scripts'] = 'Programas';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Unidade Lógica Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Unidade Lógica Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Porto Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Porto Scsi';

$GLOBALS["lang"]['Search'] = 'Procurar';

$GLOBALS["lang"]['Search For a Device'] = 'Procurar por um Dispositivo';

$GLOBALS["lang"]['Search for Device'] = 'Procurar o Dispositivo';

$GLOBALS["lang"]['secondary'] = 'Secundário';

$GLOBALS["lang"]['Secondary'] = 'Secundário';

$GLOBALS["lang"]['Secondary Text'] = 'Texto Secundário';

$GLOBALS["lang"]['section'] = 'Secção';

$GLOBALS["lang"]['Section'] = 'Secção';

$GLOBALS["lang"]['secure'] = 'Seguro';

$GLOBALS["lang"]['Secure'] = 'Seguro';

$GLOBALS["lang"]['Security Name'] = 'Nome da segurança';

$GLOBALS["lang"]['Security Status'] = 'Estado de segurança';

$GLOBALS["lang"]['security_zone'] = 'Zona de segurança';

$GLOBALS["lang"]['Security Zone'] = 'Zona de segurança';

$GLOBALS["lang"]['seed_ip'] = 'IP de sementes';

$GLOBALS["lang"]['Seed IP'] = 'IP de sementes';

$GLOBALS["lang"]['seed_ping'] = 'Ping de Sementes';

$GLOBALS["lang"]['Seed Ping'] = 'Ping de Sementes';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Restrição de Sementes para Privado';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Restrição de Sementes para Privado';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restrição de Sementes à Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restrição de Sementes à Subnet';

$GLOBALS["lang"]['Select'] = 'Selecionar';

$GLOBALS["lang"]['Select All'] = 'Selecionar Tudo';

$GLOBALS["lang"]['select_external_attribute'] = 'Selecionar atributo externo';

$GLOBALS["lang"]['Select External Attribute'] = 'Selecionar atributo externo';

$GLOBALS["lang"]['select_external_count'] = 'Selecionar contagem externa';

$GLOBALS["lang"]['Select External Count'] = 'Selecionar contagem externa';

$GLOBALS["lang"]['select_external_type'] = 'Seleccionar o Externo Tipo';

$GLOBALS["lang"]['Select External Type'] = 'Seleccionar o Externo Tipo';

$GLOBALS["lang"]['select_external_value'] = 'Seleccionar o Externo Valor';

$GLOBALS["lang"]['Select External Value'] = 'Seleccionar o Externo Valor';

$GLOBALS["lang"]['select_internal_attribute'] = 'Selecionar atributo interno';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Selecionar atributo interno';

$GLOBALS["lang"]['select_internal_count'] = 'Selecionar contagem interna';

$GLOBALS["lang"]['Select Internal Count'] = 'Selecionar contagem interna';

$GLOBALS["lang"]['select_internal_type'] = 'Selecionar Interno Tipo';

$GLOBALS["lang"]['Select Internal Type'] = 'Selecionar Interno Tipo';

$GLOBALS["lang"]['select_internal_value'] = 'Selecionar Interno Valor';

$GLOBALS["lang"]['Select Internal Value'] = 'Selecionar Interno Valor';

$GLOBALS["lang"]['Select a Table'] = 'Seleccionar uma Tabela';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['September'] = 'Setembro';

$GLOBALS["lang"]['Serbia'] = 'Sérvia';

$GLOBALS["lang"]['serial'] = 'Série';

$GLOBALS["lang"]['Serial'] = 'Série';

$GLOBALS["lang"]['serial_imei'] = 'Imei Serial';

$GLOBALS["lang"]['Serial Imei'] = 'Imei Serial';

$GLOBALS["lang"]['serial_sim'] = 'Simagem Serial';

$GLOBALS["lang"]['Serial Sim'] = 'Simagem Serial';

$GLOBALS["lang"]['series'] = 'Série';

$GLOBALS["lang"]['Series'] = 'Série';

$GLOBALS["lang"]['server'] = 'Servidor';

$GLOBALS["lang"]['Server'] = 'Servidor';

$GLOBALS["lang"]['server_id'] = 'ID do servidor';

$GLOBALS["lang"]['Server ID'] = 'ID do servidor';

$GLOBALS["lang"]['Server Is'] = 'Servidor é';

$GLOBALS["lang"]['server_item'] = 'Item do Servidor';

$GLOBALS["lang"]['Server Item'] = 'Item do Servidor';

$GLOBALS["lang"]['Servers'] = 'Servidores';

$GLOBALS["lang"]['service'] = 'Serviço';

$GLOBALS["lang"]['Service'] = 'Serviço';

$GLOBALS["lang"]['service_identifier'] = 'Identificador de Serviço';

$GLOBALS["lang"]['Service Identifier'] = 'Identificador de Serviço';

$GLOBALS["lang"]['service_level_a'] = 'Nível de serviço A';

$GLOBALS["lang"]['Service Level A'] = 'Nível de serviço A';

$GLOBALS["lang"]['service_level_b'] = 'Nível de serviço B';

$GLOBALS["lang"]['Service Level B'] = 'Nível de serviço B';

$GLOBALS["lang"]['service_network'] = 'Rede de serviços';

$GLOBALS["lang"]['Service Network'] = 'Rede de serviços';

$GLOBALS["lang"]['service_number'] = 'Número de serviço';

$GLOBALS["lang"]['Service Number'] = 'Número de serviço';

$GLOBALS["lang"]['service_pack'] = 'Pacote de Serviços';

$GLOBALS["lang"]['Service Pack'] = 'Pacote de Serviços';

$GLOBALS["lang"]['service_plan'] = 'Plano de serviço';

$GLOBALS["lang"]['Service Plan'] = 'Plano de serviço';

$GLOBALS["lang"]['service_provider'] = 'Prestador de serviços';

$GLOBALS["lang"]['Service Provider'] = 'Prestador de serviços';

$GLOBALS["lang"]['service_tag'] = 'Marca de serviço';

$GLOBALS["lang"]['Service Tag'] = 'Marca de serviço';

$GLOBALS["lang"]['service_type'] = 'Tipo de serviço';

$GLOBALS["lang"]['Service Type'] = 'Tipo de serviço';

$GLOBALS["lang"]['service_version'] = 'Versão do Serviço';

$GLOBALS["lang"]['Service Version'] = 'Versão do Serviço';

$GLOBALS["lang"]['Set'] = 'Definir';

$GLOBALS["lang"]['set_by'] = 'Definir por';

$GLOBALS["lang"]['Set By'] = 'Definir por';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Defina o tamanho (normal ou compacto) das tabelas nas telas da Lista.';

$GLOBALS["lang"]['severity'] = 'Severidade';

$GLOBALS["lang"]['Severity'] = 'Severidade';

$GLOBALS["lang"]['severity_text'] = 'Texto de Severidade';

$GLOBALS["lang"]['Severity Text'] = 'Texto de Severidade';

$GLOBALS["lang"]['Seychelles'] = 'Seicheles';

$GLOBALS["lang"]['share'] = 'Partilha';

$GLOBALS["lang"]['Share'] = 'Partilha';

$GLOBALS["lang"]['Share Name'] = 'Nome da Partilha';

$GLOBALS["lang"]['shared'] = 'Partilhado';

$GLOBALS["lang"]['Shared'] = 'Partilhado';

$GLOBALS["lang"]['shared_name'] = 'Nome Compartilhado';

$GLOBALS["lang"]['Shared Name'] = 'Nome Compartilhado';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Data de envio';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Devo remover todos os dados não atuais deste dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Caso este arquivo (ou padrão) seja usado para excluir arquivos de serem reportados. Normalmente, para auditar arquivos, isso é definido como <code>y</code>.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Devemos adicionar dispositivos do serviço remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Devemos aplicar esta licença aos Org selecionados, bem como às crianças Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devemos considerar uma porta filtrada como uma porta aberta - e, portanto, marcar este IP como tendo um dispositivo anexado?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devemos considerar uma porta aberta filtrada como uma porta aberta - e, portanto, sinalizar este IP como tendo um dispositivo anexado?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Devemos expor este grupo na interface web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Devemos expor esta consulta na lista de relatórios sob o menu Relatório na interface web.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Devemos expor esta consulta na lista de relatórios sob o menu Relatórios na interface web.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Devemos instalar o Open-Scap na máquina alvo.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Devemos combinar um endereço mac baseado em dispositivo mesmo que seja uma provável cópia conhecida da VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Devemos combinar um dispositivo baseado no seu DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Devemos combinar um dispositivo baseado no seu nome de máquina DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Devemos combinar um dispositivo baseado no seu UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Devemos combinar um dispositivo baseado no seu Dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Devemos combinar um dispositivo baseado no seu fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Devemos combinar um dispositivo baseado no seu nome de máquina e UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Devemos combinar um dispositivo baseado no seu nome de máquina e ID dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Devemos combinar um dispositivo baseado no seu nome de máquina e em série.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Devemos combinar um dispositivo baseado no seu IP se tivermos um dispositivo existente sem dados.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Devemos combinar um dispositivo baseado no IP.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Devemos combinar um dispositivo baseado no seu endereço Mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Devemos combinar um dispositivo baseado na sua série e tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Devemos combinar um dispositivo baseado no seu número de série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Devemos combinar um dispositivo baseado apenas no seu sysName SNMP e serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Devemos combinar um dispositivo baseado apenas no seu sysName SNMP.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Devemos combinar um dispositivo baseado apenas no seu nome de máquina.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Devemos localizar o IP antes de tentar digitalizá-lo? Se não responder ao ping, ignore este dispositivo.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Devemos povoar o sistema externo de nossos dispositivos locais.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Devemos executar uma auditoria e submetê-la (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Devemos testar o SNMP usando a porta UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Devemos testar SSH usando porta TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Devemos testar o WMI usando a porta TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Devemos desinstalar o agente (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Devemos usar este método para autenticar credenciais de usuário. Definir para <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Devemos usar este método para preencher papéis de usuários. O campo <code>use_auth</code> deve ser definido como <code>y</code> para usar isso. Definir para <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Mostrar Tudo';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Barra lateral';

$GLOBALS["lang"]['Sidebar'] = 'Barra lateral';

$GLOBALS["lang"]['Sierra Leone'] = 'Serra Leoa';

$GLOBALS["lang"]['Singapore'] = 'Singapura';

$GLOBALS["lang"]['Site A'] = 'Local A';

$GLOBALS["lang"]['Site B'] = 'Local B';

$GLOBALS["lang"]['site_hours_a'] = 'Horas do Site A';

$GLOBALS["lang"]['Site Hours A'] = 'Horas do Site A';

$GLOBALS["lang"]['site_hours_b'] = 'Horário do Site B';

$GLOBALS["lang"]['Site Hours B'] = 'Horário do Site B';

$GLOBALS["lang"]['size'] = 'Tamanho';

$GLOBALS["lang"]['Size'] = 'Tamanho';

$GLOBALS["lang"]['slaves'] = 'Escravos';

$GLOBALS["lang"]['Slaves'] = 'Escravos';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Eslováquia (República Eslovaca)';

$GLOBALS["lang"]['Slovenia'] = 'Eslovénia';

$GLOBALS["lang"]['Smart Status'] = 'Estado Inteligente';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nome da empresa Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nome da empresa Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Tempo- limite do Snmp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Tempo- limite do Snmp';

$GLOBALS["lang"]['snmp_version'] = 'Versão do Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Versão do Snmp';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software encontrado nos últimos 7 dias';

$GLOBALS["lang"]['Software Found Today'] = 'Software encontrado hoje';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software encontrado ontem';

$GLOBALS["lang"]['software_key'] = 'Chave de Software';

$GLOBALS["lang"]['Software Key'] = 'Chave de Software';

$GLOBALS["lang"]['software_name'] = 'Nome do Software';

$GLOBALS["lang"]['Software Name'] = 'Nome do Software';

$GLOBALS["lang"]['Software Policies'] = 'Políticas de Software';

$GLOBALS["lang"]['software_revision'] = 'Revisão de Software';

$GLOBALS["lang"]['Software Revision'] = 'Revisão de Software';

$GLOBALS["lang"]['software_version'] = 'Versão do software';

$GLOBALS["lang"]['Software Version'] = 'Versão do software';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Ilhas Salomão';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somália, República da Somália';

$GLOBALS["lang"]['sound'] = 'Som';

$GLOBALS["lang"]['Sound'] = 'Som';

$GLOBALS["lang"]['source'] = 'Origem';

$GLOBALS["lang"]['Source'] = 'Origem';

$GLOBALS["lang"]['South Africa'] = 'África do Sul';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Geórgia do Sul e Ilhas Sandwich do Sul';

$GLOBALS["lang"]['Spain'] = 'Espanha';

$GLOBALS["lang"]['Spanish'] = 'Espanhol';

$GLOBALS["lang"]['Specific to Azure.'] = 'Específico para Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Específico para OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Especifica uma lista separada por vírgulas de alvos (sem espaços) a excluir da pesquisa. A lista que você passa usa a sintaxe normal do Nmap, para que possa incluir nomes de host, blocos de rede CIDR, intervalos de octet, etc.';

$GLOBALS["lang"]['speed'] = 'Velocidade';

$GLOBALS["lang"]['Speed'] = 'Velocidade';

$GLOBALS["lang"]['speed_down_a'] = 'Descer A';

$GLOBALS["lang"]['Speed Down A'] = 'Descer A';

$GLOBALS["lang"]['speed_down_b'] = 'Velocidade para baixo B';

$GLOBALS["lang"]['Speed Down B'] = 'Velocidade para baixo B';

$GLOBALS["lang"]['speed_up_a'] = 'Acelerar A';

$GLOBALS["lang"]['Speed Up A'] = 'Acelerar A';

$GLOBALS["lang"]['speed_up_b'] = 'Acelerar B';

$GLOBALS["lang"]['Speed Up B'] = 'Acelerar B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Portos Ssh';

$GLOBALS["lang"]['Ssh Ports'] = 'Portos Ssh';

$GLOBALS["lang"]['ssh_timeout'] = 'Tempo- limite de Ssh';

$GLOBALS["lang"]['Ssh Timeout'] = 'Tempo- limite de Ssh';

$GLOBALS["lang"]['Stand-Alone'] = 'Sozinho';

$GLOBALS["lang"]['Standard'] = 'Padrão';

$GLOBALS["lang"]['standard_id'] = 'ID Padrão';

$GLOBALS["lang"]['Standard ID'] = 'ID Padrão';

$GLOBALS["lang"]['standards'] = 'Normas';

$GLOBALS["lang"]['Standards'] = 'Normas';

$GLOBALS["lang"]['standards_policies'] = 'Políticas de Padrões';

$GLOBALS["lang"]['Standards Policies'] = 'Políticas de Padrões';

$GLOBALS["lang"]['standards_results'] = 'Resultados das Normas';

$GLOBALS["lang"]['Standards Results'] = 'Resultados das Normas';

$GLOBALS["lang"]['start_date'] = 'Data de início';

$GLOBALS["lang"]['Start Date'] = 'Data de início';

$GLOBALS["lang"]['start_mode'] = 'Modo de início';

$GLOBALS["lang"]['Start Mode'] = 'Modo de início';

$GLOBALS["lang"]['started_date'] = 'Data de início';

$GLOBALS["lang"]['Started Date'] = 'Data de início';

$GLOBALS["lang"]['state'] = 'Estado';

$GLOBALS["lang"]['State'] = 'Estado';

$GLOBALS["lang"]['Stats'] = 'Estatísticas';

$GLOBALS["lang"]['status'] = 'Estado';

$GLOBALS["lang"]['Status'] = 'Estado';

$GLOBALS["lang"]['Storage'] = 'Armazenamento';

$GLOBALS["lang"]['storage_count'] = 'Contagem de Armazenamento';

$GLOBALS["lang"]['Storage Count'] = 'Contagem de Armazenamento';

$GLOBALS["lang"]['Storage-Area Network'] = 'Rede Área de Armazenamento';

$GLOBALS["lang"]['string'] = 'Texto';

$GLOBALS["lang"]['String'] = 'Texto';

$GLOBALS["lang"]['sub_resource_id'] = 'ID do Sub Recurso';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID do Sub Recurso';

$GLOBALS["lang"]['sub_type'] = 'Sub- Tipo';

$GLOBALS["lang"]['Sub Type'] = 'Sub- Tipo';

$GLOBALS["lang"]['Submit'] = 'Enviar';

$GLOBALS["lang"]['Submitted From'] = 'Enviado de';

$GLOBALS["lang"]['subnet'] = 'Subrede';

$GLOBALS["lang"]['Subnet'] = 'Subrede';

$GLOBALS["lang"]['Subscription ID'] = 'ID da assinatura';

$GLOBALS["lang"]['suburb'] = 'Subúrbio';

$GLOBALS["lang"]['Suburb'] = 'Subúrbio';

$GLOBALS["lang"]['Success'] = 'Sucesso';

$GLOBALS["lang"]['Sudan'] = 'Sudão';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Senha (opcional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Resumos';

$GLOBALS["lang"]['Summaries'] = 'Resumos';

$GLOBALS["lang"]['summary'] = 'Resumo';

$GLOBALS["lang"]['Summary'] = 'Resumo';

$GLOBALS["lang"]['Sunday'] = 'Domingo';

$GLOBALS["lang"]['supplier'] = 'Fornecedor';

$GLOBALS["lang"]['Supplier'] = 'Fornecedor';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Os tipos suportados são <code>subnet</code>, <code>seed</code> e <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Ilhas Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suazilândia';

$GLOBALS["lang"]['Sweden'] = 'Suécia';

$GLOBALS["lang"]['switch_device_id'] = 'Mudar o ID do Dispositivo';

$GLOBALS["lang"]['Switch Device ID'] = 'Mudar o ID do Dispositivo';

$GLOBALS["lang"]['switch_port'] = 'Mudar de Porto';

$GLOBALS["lang"]['Switch Port'] = 'Mudar de Porto';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suíça, Confederação Suíça';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'República Árabe Síria';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SisLocation';

$GLOBALS["lang"]['SysLocation'] = 'SisLocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Componente do Sistema';

$GLOBALS["lang"]['System Component'] = 'Componente do Sistema';

$GLOBALS["lang"]['System-Area Network'] = 'Rede de Área do Sistema';

$GLOBALS["lang"]['TX Bitrate'] = 'Taxa de Dados TX';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Nível TX';

$GLOBALS["lang"]['TX Power'] = 'Potência TX';

$GLOBALS["lang"]['TX Profile'] = 'Perfil TX';

$GLOBALS["lang"]['table'] = 'Quadro';

$GLOBALS["lang"]['Table'] = 'Quadro';

$GLOBALS["lang"]['tag'] = 'Marca';

$GLOBALS["lang"]['Tag'] = 'Marca';

$GLOBALS["lang"]['tag_1'] = 'Etiqueta 1';

$GLOBALS["lang"]['Tag 1'] = 'Etiqueta 1';

$GLOBALS["lang"]['tag_2'] = 'Etiqueta 2';

$GLOBALS["lang"]['Tag 2'] = 'Etiqueta 2';

$GLOBALS["lang"]['tag_3'] = 'Etiqueta 3';

$GLOBALS["lang"]['Tag 3'] = 'Etiqueta 3';

$GLOBALS["lang"]['tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags :: '] = 'Etiquetas ::';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajiquistão';

$GLOBALS["lang"]['Tanzania'] = 'Tanzânia';

$GLOBALS["lang"]['task'] = 'Tarefa';

$GLOBALS["lang"]['Task'] = 'Tarefa';

$GLOBALS["lang"]['tasks'] = 'Tarefas';

$GLOBALS["lang"]['Tasks'] = 'Tarefas';

$GLOBALS["lang"]['tcp_ports'] = 'Portos Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Portos Tcp';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternário';

$GLOBALS["lang"]['Ternary'] = 'Ternário';

$GLOBALS["lang"]['Test 1'] = 'Ensaio 1';

$GLOBALS["lang"]['Test 2'] = 'Ensaio 2';

$GLOBALS["lang"]['Test 3'] = 'Ensaio 3';

$GLOBALS["lang"]['test_minutes'] = 'Minutos de Teste';

$GLOBALS["lang"]['Test Minutes'] = 'Minutos de Teste';

$GLOBALS["lang"]['test_os'] = 'Teste de Os';

$GLOBALS["lang"]['Test Os'] = 'Teste de Os';

$GLOBALS["lang"]['test_subnet'] = 'Subrede de teste';

$GLOBALS["lang"]['Test Subnet'] = 'Subrede de teste';

$GLOBALS["lang"]['tests'] = 'Ensaios';

$GLOBALS["lang"]['Tests'] = 'Ensaios';

$GLOBALS["lang"]['Text'] = 'Texto';

$GLOBALS["lang"]['Thailand'] = 'Tailândia';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'O domínio Active Directory para obter uma lista de sub- redes.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'O servidor Active Directory para obter uma lista de sub- redes.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'A Nuvem que possui este item. Ligações para <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'O Grupo costumava executar o Baseline. Ligações para <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'O ID da tabela de dispositivos (o devices.name será exibido) da NTU neste final da conexão. Links para <código>dispositivos.id</código>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID da política de referência importada.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'O ID da tabela de locais (os locations.name serão exibidos) deste fim da conexão. Links para <code>locations.id</code>. A localização A é geralmente a localização <code>FROM</code>.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'O ID da tabela de locais (os locations.name serão exibidos) deste fim da conexão. Links para <code>locations.id</code>. A localização B é geralmente a localização <code>TO</code>.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'A identificação do dispositivo associado (se existir). Links para <código>dispositivos.id</código>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'A identificação da descoberta associada. Ligado a <código>descobertas.id</código>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID do item do tipo associado.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'O ID desta orgs pai. Ligado a <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'A identificação fornecida pelo fornecedor.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'A identificação foi recuperada de uma descoberta na nuvem.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'O endereço IP deste colector usado para comunicar com o servidor.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'O IP do dispositivo para iniciar uma descoberta de sementes.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'O IP da interface externa.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'O IP da interface interna.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'O ISP ou Telco que fornece este link.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'O LDAP OU deste usuário (se LDAP for usado).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'A Localização que contém esta rede. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'A predefinição do tempo do Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'O SO este pacote deve ser relatado contra. Em branco para todos. Use o sinal de porcentagem % como um wildcard. Será testado contra os_group, os_family e os_name nessa ordem.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'A API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'O ID Open-AudIT da nuvem ligada. Ligações para <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'O Open- Aud O código do servidor de TI foi executado dentro deste arquivo.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'O Open- Aud O código do servidor de TI foi executado dentro desta função.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'A Organização que possui este item. Ligações para <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'O Identificador de Processo da descoberta associada em execução.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'O position de RU do topo deste dispositivo.';

$GLOBALS["lang"]['The SNMP community string.'] = 'A corda da comunidade SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'A senha de autenticação SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'O protocolo de autenticação SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'A senha de privacidade SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'O Protocolo de Privacidade SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'O nível de segurança SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'O nome de segurança SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'O ID do motor de contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nome do contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'O URL do sistema externo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'O URL do seu Open-AudIT Servidor para o qual este Colecionador irá reportar (sem slash de rastreamento).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'O URL para o qual os scripts de auditoria devem enviar seu resultado.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'O nome completo deste utilizador.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'A linha de base associada. Ligações para <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'A descoberta associada (se necessário). Links para <código>descobertas.id</código>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'O atributo para testar (a partir da tabela <code>dispositivos</code>).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'O atributo para testar (deve corresponder a um nome de campo externo a partir de baixo).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'O script de auditoria sobre o qual basear suas personalizações.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'O caminho base a partir do qual procurar Usuários.';

$GLOBALS["lang"]['The benchmark type.'] = 'O tipo de referência.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'O edifício em que o rack está localizado.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'O número calculado de dispositivos a serem criados externamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'O número calculado de dispositivos a serem criados em Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Os coletores IP interno usado quando ele executa uma descoberta.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'O nome da coluna da tabela estrangeira. Deve ser uma de: classe, ambiente, status, tipo ou categoria de menu.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'O comando executado no dispositivo alvo ou código do servidor Open-AudIT executado durante a descoberta.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'A configuração do seu cluster pode ser: <code>active</code>, <code>active</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>outro</code> ou em branco.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'A senha das credenciais. Se as credenciais são uma chave SSH, esta é a senha usada para desbloquear a chave e é opcional.';

$GLOBALS["lang"]['The credentials username.'] = 'O nome de utilizador das credenciais.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'O status atual da Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'O estado actual da descoberta.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'O painel que será mostrado por padrão para este usuário. Links para <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'A versão do banco de dados e a versão web são inconsistentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'A data de expiração da licença.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'A data em que o software é descontinuado pelo fabricante. Normalmente substituído por uma versão mais recente. A manutenção ainda pode estar disponível.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'A data em que o software já não recebe atualizações e é efetivamente descontinuada. A manutenção é interrompida.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'A data em que este item foi alterado ou adicionado (apenas para leitura). NOTA - Esta é a data do servidor.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'A data/hora em que este resultado foi criado.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'O dia do mês em que esta tarefa deve ser executada (* para cada dia).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'O dia da semana em que esta tarefa deve ser executada (* para cada dia).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'O idioma padrão atribuído a qualquer usuário criado por este método.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'O dispositivo deve responder a um ping Nmap antes de ser considerado online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'O dispositivo dentro do Open-AudIT. Links para <código>dispositivos.id</código>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'O link direto para o script é';

$GLOBALS["lang"]['The email address of the reciever'] = 'O endereço de e- mail do destinatário';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Este resultado é de toda a linha de base associada.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'O ID de localização referenciado externamente. Geralmente povoado por auditorias em nuvem.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'A primeira vez que o Open-AudIT recuperou detalhes deste dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'O chão em que o rack está localizado.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'A tabela estrangeira para referência. Deve ser um dos: dispositivos, locais, orgs ou consultas.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'O formato usado para a saída a ser enviada por e- mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'A coluna totalmente qualificada sobre a qual agrupar. NOTA: Quando type = traffic, isto representa o ID da consulta vermelha.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'A tabela totalmente qualificada.Column. Podem ser fornecidos múltiplos, separados por uma vírgula (sem espaços).';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'O grupo de dispositivos em que a linha de base foi executada contra.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'O grupo que fornece uma lista de dispositivos para a integração. Ligações para <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'A hora do dia em que esta tarefa deve ser executada (* para cada hora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'O ID do dispositivo ligado. Ligações para <code>dispositivos.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'A coluna identificadora (inteiro) na base de dados (apenas leitura).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'A importância desta linha de base (ainda não utilizada).';

$GLOBALS["lang"]['The integer of severity.'] = 'O inteiro da gravidade.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'O endereço IP do método Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'O idioma para traduzir a interface web para o usuário.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'A última data e hora deste item foi executada (apenas leitura).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'A última vez que o Open-AudIT recuperou detalhes deste dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'A última vez que estes parâmetros de referência foram executados.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'A última vez que esta integração foi executada.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'O número de linha atribuído pelo provedor à linha neste extremo da conexão.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'O local onde o rack está localizado. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'A morada dos locais.';

$GLOBALS["lang"]['The locations area.'] = 'A área de localização.';

$GLOBALS["lang"]['The locations city.'] = 'Os locais da cidade.';

$GLOBALS["lang"]['The locations country.'] = 'O país dos locais.';

$GLOBALS["lang"]['The locations district.'] = 'O distrito de locações.';

$GLOBALS["lang"]['The locations latitude.'] = 'Os locais latitude.';

$GLOBALS["lang"]['The locations level.'] = 'O nível de localização.';

$GLOBALS["lang"]['The locations longitude.'] = 'Os locais longitude.';

$GLOBALS["lang"]['The locations phone.'] = 'O telefone de localização.';

$GLOBALS["lang"]['The locations postcode.'] = 'A localização do código postal.';

$GLOBALS["lang"]['The locations region.'] = 'A região das localizações.';

$GLOBALS["lang"]['The locations room.'] = 'A sala de localização.';

$GLOBALS["lang"]['The locations state.'] = 'Os locais estão.';

$GLOBALS["lang"]['The locations suburb.'] = 'O subúrbio dos locais.';

$GLOBALS["lang"]['The locations suite.'] = 'A suite de localização.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'O peso físico máximo (em KGs) esta rack pode segurar.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'O máximo total de BTUs esta rack é classificado para.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'O minuto da hora em que esta tarefa deve ser executada (* para cada minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'O mês do ano em que esta tarefa deve ser executada (* para cada mês).';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'O nome dado a este item. Idealmente deve ser único.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'O nome dado a este usuário (usado para login). Idealmente deve ser único.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'O nome da nuvem associada (se necessário).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'O nome do pacote de software, como auditado pela Open-AudIT. Use o sinal de porcentagem % como um wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'O nome do usuário que mudou ou adicionou este item pela última vez (apenas leia).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'O nome fornecido pelo fornecedor.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'A rede no formato 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'A sub- rede de rede para executar a descoberta.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'O número de EF que este dispositivo ocupa.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Número de locais associados. Ligações para <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'O número de redes associadas. Ligações para <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'O número de dispositivos auditados nesta nuvem. Ligações para <code>dispositivos.cloud_id</code> e <code>dispositivos.serial</code>.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'O número de dispositivos encontrados por esta descoberta.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'O número de dispositivos no grupo associado.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'O número de dispositivos nesta nuvem com um estado de execução. Links para <code>dispositivos.cloud_id</code> e <code>dispositivos.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'O número de dispositivos nesta nuvem com um estado de parada. Links para <code>dispositivos.cloud_id</code> e <code>dispositivos.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'O número de dispositivos nesta nuvem. Ligações para <code>dispositivos.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'O número de dispositivos em que este parâmetro de referência será executado. Derivado de <code>benchmarks.dispositivos</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'O número de dispositivos para limitar esta descoberta.';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'O número de licenças adquiridas.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'O número de segundos para tentar comunicar com o IP alvo.';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'A coluna secundária facultativa. NOTA: Quando type = traffic, isto representa o id da consulta amarela.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'A terceira coluna opcional. NOTA: Quando type = traffic, isto representa o id da consulta verde.';

$GLOBALS["lang"]['The orientation of this device.'] = 'A orientação deste dispositivo.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'A senha para o atributo dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'A senha usada para acessar o sistema externo.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'A localização do ficheiro ou directório.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'A localização do ficheiro ou directório. Os directores devem acabar com um corte.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'A profundidade física (em CMs) do rack.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'A altura física (em CMs) do rack.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'O peso físico (em KGs) do rack no momento.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'O peso físico (em KGs) do rack quando vazio.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'A largura física (em CMs) do rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'O pod (se houver) que este rack faz parte.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'O circuito de energia a que esta prateleira se liga.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'A tabela do banco de dados principal sobre a qual basear este elemento.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'O identificador do processo deste item da fila.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'O processo que foi usado por último para recuperar detalhes sobre o dispositivo';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'A consulta que fornece uma lista de dispositivos para a integração. Ligações para <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'O número do activo.';

$GLOBALS["lang"]['The rack asset tag.'] = 'A etiqueta dos activos.';

$GLOBALS["lang"]['The rack bar code.'] = 'O código de barras.';

$GLOBALS["lang"]['The rack model.'] = 'O modelo da prateleira.';

$GLOBALS["lang"]['The rack serial.'] = 'O serial da prateleira.';

$GLOBALS["lang"]['The rack series.'] = 'A série das prateleiras.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'O rack em que este dispositivo está localizado. Ligações para <code>racks.id</code>.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'A notação de domínio regular do seu diretório. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'O resultado do comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'O quarto em que o rack está localizado.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'A linha em que o rack está localizado.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'A chave secreta usada em conjunto com sua chave API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'A data de fim de vida do software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'A data de fim de vida do software.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'A coluna de banco de dados específica da tabela de banco de dados especificada.';

$GLOBALS["lang"]['The specific database table.'] = 'A tabela específica da base de dados.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'As opções de tempo padrão Nmap. Geralmente usamos -T4 (Agressivo) como este é recomendado para uma conexão de banda larga decente ou ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'O estatuto desta integração';

$GLOBALS["lang"]['The status of this queued item.'] = 'O estado deste item em fila.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'O IP alvo a que esta entrada de log se refere (se existir).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'O modelo para o link a ser gerado por linha de resultado.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'O texto para a parte inferior do gráfico em um gráfico de linha (somente).';

$GLOBALS["lang"]['The text that is displayed.'] = 'O texto que é exibido.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2001-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'A hora após a qual, esta tarefa deve ser executada. Por exemplo, execute uma tarefa após 1 de junho de 2017 às 10h, defina-a para <code>2017-06-01 09:59:00</code>. Este valor deve ser zero acolchoado (ou seja, 09, não 9). Este valor padrão é <code>2001-01-01 00:00:00</code> que significa por padrão, uma tarefa agendada será executada na próxima execução agendada.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'O top 10, 100 ou 1000 (ou nenhum) portas TCP comumente em uso de acordo com Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'O top 10, 100 ou 1000 (ou nenhum) portas UDP comumente em uso de acordo com Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'A saída total de BTU por este rack.';

$GLOBALS["lang"]['The type of device.'] = 'O tipo de dispositivo.';

$GLOBALS["lang"]['The type of organisation.'] = 'O tipo de organização.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'O tipo de rack (computação, energia, rede, etc.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'O tipo de tarefa a executar. Um dos: linha de base, referência, descoberta na nuvem, descoberta, integração, relatório, consulta.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'O tipo de integração (normalmente nomeado em homenagem ao sistema externo).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'O identificador único deste servidor.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'A conta de usuário que este coletor usa. Links para <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'O nome de usuário usado para acessar o sistema externo.';

$GLOBALS["lang"]['The users email address.'] = 'O endereço de e-mail dos utilizadores.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'As horas habituais de operação neste local.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'O valor atribuído ao item.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'O valor que é armazenado para este item em particular.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'O diretório web no host que Open-AudIT está instalado (requer uma barra de rastreamento).';

$GLOBALS["lang"]['The widget at position '] = 'O elemento na posição';

$GLOBALS["lang"]['The width of this device.'] = 'A largura deste dispositivo.';

$GLOBALS["lang"]['Then'] = 'Então..';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Este atributo é armazenado como um objeto JSON. É a lista de todas as coleções e contém o nome da coleção junto com <code>c</code>, <code>r</code>, <code>u</code> e,ou <code>d</code> que representam criar, ler, atualizar e excluir. Estas são as ações que um usuário pode realizar em itens dessa coleção particular.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Isto pode ser um varchar (um campo de texto), uma lista (uma lista de valores que podem ser selecionados) ou uma data.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Este coletores identificador universalmente único.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Esta descrição é auto-povoada e deve, idealmente, ser deixada como-is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Este recurso requer uma licença Professional ou Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Esta é geralmente a coluna primária, salvo outra configuração. NOTA: Quando tipo = tráfego, isto representa o texto secundário.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Este item deve corresponder ao valor do atributo selecionado ou contém o ID da consulta a ser usada.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Este item deve corresponder ao valor do atributo selecionado.';

$GLOBALS["lang"]['This license expires on'] = 'Esta licença expira em';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Este deve ser definido para 1 ou a altura do rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Isto vai auto-popular.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Isto irá atrasar consideravelmente a pesquisa.';

$GLOBALS["lang"]['Thursday'] = 'Quinta-feira';

$GLOBALS["lang"]['time'] = 'Tempo';

$GLOBALS["lang"]['Time'] = 'Tempo';

$GLOBALS["lang"]['time_caption'] = 'Legenda temporal';

$GLOBALS["lang"]['Time Caption'] = 'Legenda temporal';

$GLOBALS["lang"]['time_daylight'] = 'Hora Luz do Dia';

$GLOBALS["lang"]['Time Daylight'] = 'Hora Luz do Dia';

$GLOBALS["lang"]['Time to Execute'] = 'Tempo para Executar';

$GLOBALS["lang"]['timeout'] = 'Tempo- limite';

$GLOBALS["lang"]['Timeout'] = 'Tempo- limite';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tempo limite por alvo (segundos)';

$GLOBALS["lang"]['Timesatamp'] = 'Timetamp';

$GLOBALS["lang"]['Timestamp'] = 'Timetamp';

$GLOBALS["lang"]['timing'] = 'Calendário';

$GLOBALS["lang"]['Timing'] = 'Calendário';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Título';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Estilo da Barra de Ferramentas';

$GLOBALS["lang"]['Toolbar Style'] = 'Estilo da Barra de Ferramentas';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Portas TCP do Topo do Nmap';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Portas UDP do Topo do Nmap';

$GLOBALS["lang"]['Traditional Chinese'] = 'Chinês tradicional';

$GLOBALS["lang"]['Traffic Light'] = 'Luz de trânsito';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad e Tobago';

$GLOBALS["lang"]['Tuesday'] = 'Terça-feira';

$GLOBALS["lang"]['Tunisia'] = 'Tunísia';

$GLOBALS["lang"]['Turkey'] = 'Turquia';

$GLOBALS["lang"]['Turkmenistan'] = 'Turquemenistão';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Ilhas Turcas e Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Taxa de Dados Tx';

$GLOBALS["lang"]['Tx Bitrate'] = 'Taxa de Dados Tx';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Nível Tx';

$GLOBALS["lang"]['Tx Level'] = 'Nível Tx';

$GLOBALS["lang"]['tx_power'] = 'Potência Tx';

$GLOBALS["lang"]['Tx Power'] = 'Potência Tx';

$GLOBALS["lang"]['tx_profile'] = 'Perfil Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Perfil Tx';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Portos Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Portos Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['uid'] = 'Uid';

$GLOBALS["lang"]['Uid'] = 'Uid';

$GLOBALS["lang"]['Ukraine'] = 'Ucrânia';

$GLOBALS["lang"]['uninstall'] = 'Desinstalar';

$GLOBALS["lang"]['Uninstall'] = 'Desinstalar';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Desinstalar o Agente';

$GLOBALS["lang"]['United Arab Emirates'] = 'Emirados Árabes Unidos';

$GLOBALS["lang"]['United Kingdom'] = 'Reino Unido';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Ilhas Menores dos Estados Unidos';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Ilhas Virgens dos Estados Unidos';

$GLOBALS["lang"]['United States of America'] = 'Estados Unidos da América';

$GLOBALS["lang"]['Unknown'] = 'Desconhecido';

$GLOBALS["lang"]['unlock_pin'] = 'Desbloquear Pino';

$GLOBALS["lang"]['Unlock Pin'] = 'Desbloquear Pino';

$GLOBALS["lang"]['Unscheduled'] = 'Não programado';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Não utilizado em 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Não usado.';

$GLOBALS["lang"]['Update'] = 'Atualizar';

$GLOBALS["lang"]['update_external_count'] = 'Atualizar contagem externa';

$GLOBALS["lang"]['Update External Count'] = 'Atualizar contagem externa';

$GLOBALS["lang"]['update_external_from_internal'] = 'Atualizar externo do interno';

$GLOBALS["lang"]['Update External From Internal'] = 'Atualizar externo do interno';

$GLOBALS["lang"]['update_internal_count'] = 'Actualizar a Contagem Interna';

$GLOBALS["lang"]['Update Internal Count'] = 'Actualizar a Contagem Interna';

$GLOBALS["lang"]['update_internal_from_external'] = 'Atualizar interno de externo';

$GLOBALS["lang"]['Update Internal From External'] = 'Atualizar interno de externo';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Atualizar dispositivos NMIS do Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Atualizar Open-AudIT Dispositivos de';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Atualizar Open-AudIT Dispositivos do NMIS';

$GLOBALS["lang"]['updated_at'] = 'Atualizado em';

$GLOBALS["lang"]['Updated At'] = 'Atualizado em';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Atualizado cada vez que a descoberta foi executada com IPs detectados para responder.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Atualizado cada vez que a descoberta foi executada com IPs que foram digitalizados pelo Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Atualizado cada vez que a descoberta foi executada com dispositivos que fomos capazes de auditar.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Atualizado cada vez que a descoberta foi executada com dispositivos que fomos capazes de consultar.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Actualizado cada vez que a descoberta foi executada.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Atualizado cada vez que a descoberta foi executada.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Atualizado cada vez que a descoberta tiver concluído a execução.';

$GLOBALS["lang"]['Upgrade'] = 'Actualização';

$GLOBALS["lang"]['Upload an audit result file'] = 'Enviar um ficheiro de resultados de auditoria';

$GLOBALS["lang"]['Upper Case'] = 'Caixa Superior';

$GLOBALS["lang"]['uptime'] = 'Tempo de espera';

$GLOBALS["lang"]['Uptime'] = 'Tempo de espera';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguai, República Oriental';

$GLOBALS["lang"]['usb'] = 'USB';

$GLOBALS["lang"]['Usb'] = 'USB';

$GLOBALS["lang"]['use_authentication'] = 'Usar autenticação';

$GLOBALS["lang"]['Use Authentication'] = 'Usar autenticação';

$GLOBALS["lang"]['use_authorisation'] = 'Usar a Autorização';

$GLOBALS["lang"]['Use Authorisation'] = 'Usar a Autorização';

$GLOBALS["lang"]['Use SNMP'] = 'Usar SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Usar SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Usar seguro (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Usar a Detecção de Versão de Serviço';

$GLOBALS["lang"]['Use WMI'] = 'Usar WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Usar para autenticação';

$GLOBALS["lang"]['Use for Roles'] = 'Uso para funções';

$GLOBALS["lang"]['used'] = 'Usado';

$GLOBALS["lang"]['Used'] = 'Usado';

$GLOBALS["lang"]['used_count'] = 'Contagem Usada';

$GLOBALS["lang"]['Used Count'] = 'Contagem Usada';

$GLOBALS["lang"]['used_percent'] = 'Percentagem Usada';

$GLOBALS["lang"]['Used Percent'] = 'Percentagem Usada';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Usado apenas pelo OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Usado internamente ao descobrir um único dispositivo.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Usado internamente ao descobrir um único dispositivo. Links para <código>dispositivos.id</código>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Usado quando os servidores LDAP foram configurados para preencher os detalhes de um usuário - isso inclui os orgs aos quais eles têm acesso. Se um usuário está neste grupo LDAP, eles são atribuídos esta org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Usado quando os servidores LDAP foram configurados para preencher os detalhes de um usuário - isto inclui as Funções que são atribuídas. Se um usuário está neste grupo LDAP, ele é atribuído esta função.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Usado ao procurar no OpenLDAP para corresponder um utilizador a um grupo de membros. Padrão de <code>memberUid</code>. Usado apenas pelo OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Usado com Integrações e aplicações de monitoramento FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Usado com Integrações e aplicações de monitoramento FirstWave. Configura para y se o SNMP estiver a funcionar detectado pela descoberta.';

$GLOBALS["lang"]['user'] = 'Utilizador';

$GLOBALS["lang"]['User'] = 'Utilizador';

$GLOBALS["lang"]['User DN'] = 'DN do usuário';

$GLOBALS["lang"]['user_group'] = 'Grupo de usuários';

$GLOBALS["lang"]['User Group'] = 'Grupo de usuários';

$GLOBALS["lang"]['user_id'] = 'ID do usuário';

$GLOBALS["lang"]['User ID'] = 'ID do usuário';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atributo de Composição do Utilizador';

$GLOBALS["lang"]['user_name'] = 'Nome do Utilizador';

$GLOBALS["lang"]['User Name'] = 'Nome do Utilizador';

$GLOBALS["lang"]['User Policies'] = 'Políticas do Usuário';

$GLOBALS["lang"]['username'] = 'Utilizador';

$GLOBALS["lang"]['Username'] = 'Utilizador';

$GLOBALS["lang"]['users'] = 'Utilizadores';

$GLOBALS["lang"]['Users'] = 'Utilizadores';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Normalmente Mb/s, da Localização A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Normalmente Mb/s, da Localização B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Normalmente Mb/s, para Localização A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Normalmente Mb/s, para Localização B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbequistão';

$GLOBALS["lang"]['valid_from'] = 'Válido De';

$GLOBALS["lang"]['Valid From'] = 'Válido De';

$GLOBALS["lang"]['valid_from_raw'] = 'Válido a partir de RAW';

$GLOBALS["lang"]['Valid From Raw'] = 'Válido a partir de RAW';

$GLOBALS["lang"]['valid_to'] = 'Válido Para';

$GLOBALS["lang"]['Valid To'] = 'Válido Para';

$GLOBALS["lang"]['valid_to_raw'] = 'Válido para RAW';

$GLOBALS["lang"]['Valid To Raw'] = 'Válido para RAW';

$GLOBALS["lang"]['Valid Values'] = 'Valores válidos';

$GLOBALS["lang"]['value'] = 'Valor';

$GLOBALS["lang"]['Value'] = 'Valor';

$GLOBALS["lang"]['values'] = 'Valores';

$GLOBALS["lang"]['Values'] = 'Valores';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variável';

$GLOBALS["lang"]['Variable'] = 'Variável';

$GLOBALS["lang"]['vendor'] = 'Fabricante';

$GLOBALS["lang"]['Vendor'] = 'Fabricante';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versão';

$GLOBALS["lang"]['Version'] = 'Versão';

$GLOBALS["lang"]['version_padded'] = 'Versão Acolchoada';

$GLOBALS["lang"]['Version Padded'] = 'Versão Acolchoada';

$GLOBALS["lang"]['version_string'] = 'Texto da Versão';

$GLOBALS["lang"]['Version String'] = 'Texto da Versão';

$GLOBALS["lang"]['video'] = 'Vídeo';

$GLOBALS["lang"]['Video'] = 'Vídeo';

$GLOBALS["lang"]['Vietnam'] = 'Vietname';

$GLOBALS["lang"]['View'] = 'Ver';

$GLOBALS["lang"]['View All'] = 'Ver Tudo';

$GLOBALS["lang"]['View Details'] = 'Ver Detalhes';

$GLOBALS["lang"]['View Device'] = 'Ver o Dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Ver Descoberta';

$GLOBALS["lang"]['View Policy'] = 'Ver Política';

$GLOBALS["lang"]['Virtual Private Network'] = 'Rede privada virtual';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualização';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visite nosso canal do YouTube para vídeos instrucionais.';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID do Dispositivo Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID do Dispositivo Vm';

$GLOBALS["lang"]['vm_group'] = 'Grupo Vm';

$GLOBALS["lang"]['Vm Group'] = 'Grupo Vm';

$GLOBALS["lang"]['vm_ident'] = 'ID Vm';

$GLOBALS["lang"]['Vm Ident'] = 'ID Vm';

$GLOBALS["lang"]['vm_server_name'] = 'Nome do servidor Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nome do servidor Vm';

$GLOBALS["lang"]['WHERE'] = 'ONDE';

$GLOBALS["lang"]['wall_port'] = 'Porta da Parede';

$GLOBALS["lang"]['Wall Port'] = 'Porta da Parede';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis e Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Queres saber mais?';

$GLOBALS["lang"]['Warning'] = 'Atenção';

$GLOBALS["lang"]['warranty'] = 'Garantia';

$GLOBALS["lang"]['Warranty'] = 'Garantia';

$GLOBALS["lang"]['warranty_duration'] = 'Duração da Garantia';

$GLOBALS["lang"]['Warranty Duration'] = 'Duração da Garantia';

$GLOBALS["lang"]['warranty_expires'] = 'A garantia expira';

$GLOBALS["lang"]['Warranty Expires'] = 'A garantia expira';

$GLOBALS["lang"]['warranty_status'] = 'Estado da Garantia';

$GLOBALS["lang"]['Warranty Status'] = 'Estado da Garantia';

$GLOBALS["lang"]['warranty_type'] = 'Tipo de Garantia';

$GLOBALS["lang"]['Warranty Type'] = 'Tipo de Garantia';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Servidor Web';

$GLOBALS["lang"]['Wednesday'] = 'Quarta-feira';

$GLOBALS["lang"]['weight'] = 'Peso';

$GLOBALS["lang"]['Weight'] = 'Peso';

$GLOBALS["lang"]['weight_current'] = 'Corrente de Peso';

$GLOBALS["lang"]['Weight Current'] = 'Corrente de Peso';

$GLOBALS["lang"]['weight_empty'] = 'Peso Vazio';

$GLOBALS["lang"]['Weight Empty'] = 'Peso Vazio';

$GLOBALS["lang"]['weight_max'] = 'Peso Máximo';

$GLOBALS["lang"]['Weight Max'] = 'Peso Máximo';

$GLOBALS["lang"]['Welcome'] = 'Boas-vindas';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Painel de Boas-vindas';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Bem-vindo à FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Saara Ocidental';

$GLOBALS["lang"]['what'] = 'O quê';

$GLOBALS["lang"]['What'] = 'O quê';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Qual é o propósito desta prateleira.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Qual é o tipo deste local. Tipos admissíveis mantidos na tabela <code>atributos</code>.';

$GLOBALS["lang"]['when'] = 'Quando';

$GLOBALS["lang"]['When'] = 'Quando';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Ao integrar dispositivos do sistema externo, se o dispositivo não existir no Open-AudIT devemos criá-lo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Ao integrar dispositivos do sistema externo, se o dispositivo foi atualizado no sistema externo devemos atualizá-lo no Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Quando recuperarmos um dispositivo externo, devemos fazer uma descoberta?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Quando esta referência está programada para ser executada. Derivado da associação <code>tasks.type</code> e <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quando este log foi criado.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Quando este item da fila começou a processar.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Quando recebemos uma porta aberta, devemos tentar testar a versão do serviço atualmente em execução sobre ele? Isso auxilia na confirmação de serviços em execução.';

$GLOBALS["lang"]['where'] = 'Onde';

$GLOBALS["lang"]['Where'] = 'Onde';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Onde na tela Detalhes do Dispositivo você gostaria de ver este campo aparecer.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Onde o rack está na fila.';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A que sistema operacional se aplica este parâmetro de referência.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Quais dispositivos devem criar Open-AudIT a partir do sistema externo (se houver). Usando Todos, Nenhum ou um determinado atributo.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Em que submenu devemos exibir esta consulta.';

$GLOBALS["lang"]['Who made this rack.'] = 'Quem fez esta prateleira.';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Por que excluímos esta política?';

$GLOBALS["lang"]['Wide Area Network'] = 'Rede de Ampla Área';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget #';

$GLOBALS["lang"]['Widget Type'] = 'Tipo de Widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Largura';

$GLOBALS["lang"]['Width'] = 'Largura';

$GLOBALS["lang"]['windows'] = 'Janelas';

$GLOBALS["lang"]['Windows'] = 'Janelas';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Rede de Área Local Sem Fios';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Tempo limite Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Tempo limite Wmi';

$GLOBALS["lang"]['workgroup'] = 'Grupo de trabalho';

$GLOBALS["lang"]['Workgroup'] = 'Grupo de trabalho';

$GLOBALS["lang"]['Working Credentials'] = 'Credenciais de Trabalho';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Consulta amarela';

$GLOBALS["lang"]['Yemen'] = 'Iémen';

$GLOBALS["lang"]['Yes'] = 'Sim';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Você pode querer copiar e colar esta URL em um e-mail para sua equipe.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Você deve excluir sua licença existente antes de adicionar uma nova licença.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriais do YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Sua chave de API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Suas credenciais do Google Compute como JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Suas Licenças';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'O ID do Cliente Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'O seu Microsoft Azure Cliente Secreto.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Seu ID de assinatura do Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'A sua identidade Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Seu SQL para selecionar atributos que irão preencher esta consulta.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Seu SQL para selecionar dispositivos que irão preencher este grupo.';

$GLOBALS["lang"]['Your SSH key.'] = 'A tua chave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'As suas credenciais de acesso, de acordo com essa API nativa.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Sua descrição do status desta conexão (provisionada, aposentada, etc.).';

$GLOBALS["lang"]['Your description of this item.'] = 'A sua descrição deste item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Seu nome genérico para este pedaço de software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Sua versão genérica para este pedaço de software';

$GLOBALS["lang"]['Zambia'] = 'Zâmbia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabué';

$GLOBALS["lang"]['active'] = 'ativo';

$GLOBALS["lang"]['active directory'] = 'diretório ativo';

$GLOBALS["lang"]['active/active'] = 'activo/activo';

$GLOBALS["lang"]['active/passive'] = 'activo/passivo';

$GLOBALS["lang"]['ad hoc'] = 'ad hoc';

$GLOBALS["lang"]['alert'] = 'alerta';

$GLOBALS["lang"]['all'] = 'tudo';

$GLOBALS["lang"]['allocated'] = 'atribuído';

$GLOBALS["lang"]['amazon'] = 'amazona';

$GLOBALS["lang"]['antivirus'] = 'antivírus';

$GLOBALS["lang"]['application'] = 'aplicação';

$GLOBALS["lang"]['approved'] = 'aprovado';

$GLOBALS["lang"]['attribute'] = 'atributo';

$GLOBALS["lang"]['auto'] = 'automático';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'proibido';

$GLOBALS["lang"]['bottom'] = 'fundo';

$GLOBALS["lang"]['building'] = 'edifício';

$GLOBALS["lang"]['cloud'] = 'nuvem';

$GLOBALS["lang"]['collector'] = 'colector';

$GLOBALS["lang"]['compute'] = 'calcular';

$GLOBALS["lang"]['contains'] = 'contém';

$GLOBALS["lang"]['create'] = 'criar';

$GLOBALS["lang"]['created'] = 'criado';

$GLOBALS["lang"]['critical'] = 'crítico';

$GLOBALS["lang"]['database'] = 'banco de dados';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['defined process'] = 'processo definido';

$GLOBALS["lang"]['delegated'] = 'delegado';

$GLOBALS["lang"]['delete'] = 'apagar';

$GLOBALS["lang"]['deleted'] = 'apagado';

$GLOBALS["lang"]['denied'] = 'negado';

$GLOBALS["lang"]['devices'] = 'dispositivos';

$GLOBALS["lang"]['digitalocean'] = 'digitaloceano';

$GLOBALS["lang"]['does not equal'] = 'não é igual';

$GLOBALS["lang"]['emergency'] = 'emergência';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'igual a';

$GLOBALS["lang"]['error'] = 'erro';

$GLOBALS["lang"]['excluded'] = 'excluído';

$GLOBALS["lang"]['expired'] = 'expirado';

$GLOBALS["lang"]['fail'] = 'falha';

$GLOBALS["lang"]['false'] = 'falso';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['fixed'] = 'fixado';

$GLOBALS["lang"]['floor'] = 'piso';

$GLOBALS["lang"]['front'] = 'frente';

$GLOBALS["lang"]['front-left'] = 'frente- esquerda';

$GLOBALS["lang"]['front-right'] = 'frente- direita';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'maior ou igual';

$GLOBALS["lang"]['greater than'] = 'maior que';

$GLOBALS["lang"]['group'] = 'grupo';

$GLOBALS["lang"]['head'] = 'cabeça';

$GLOBALS["lang"]['here'] = 'aqui';

$GLOBALS["lang"]['high availability'] = 'alta disponibilidade';

$GLOBALS["lang"]['ignored'] = 'ignorado';

$GLOBALS["lang"]['in'] = 'em';

$GLOBALS["lang"]['inactive'] = 'inativo';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc';

$GLOBALS["lang"]['is licensed to'] = 'está licenciado para';

$GLOBALS["lang"]['left'] = 'esquerda';

$GLOBALS["lang"]['less or equals'] = 'menor ou igual';

$GLOBALS["lang"]['less than'] = 'inferior a';

$GLOBALS["lang"]['license'] = 'licença';

$GLOBALS["lang"]['like'] = 'como';

$GLOBALS["lang"]['line'] = 'linha';

$GLOBALS["lang"]['load balancing'] = 'balanceamento de carga';

$GLOBALS["lang"]['location'] = 'localização';

$GLOBALS["lang"]['managed and measurable'] = 'gerido e mensurável';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'ponto de montagem';

$GLOBALS["lang"]['network'] = 'rede';

$GLOBALS["lang"]['no'] = 'não';

$GLOBALS["lang"]['node'] = 'nó';

$GLOBALS["lang"]['non-existent'] = 'inexistente';

$GLOBALS["lang"]['none'] = 'nenhum';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'não aplicável';

$GLOBALS["lang"]['not in'] = 'não';

$GLOBALS["lang"]['not like'] = 'não gosto';

$GLOBALS["lang"]['notice'] = 'aviso';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'otimizado';

$GLOBALS["lang"]['optionally '] = 'opcionalmente';

$GLOBALS["lang"]['other'] = 'outros';

$GLOBALS["lang"]['partition'] = 'partição';

$GLOBALS["lang"]['pass'] = 'passar';

$GLOBALS["lang"]['pending'] = 'pendente';

$GLOBALS["lang"]['performance'] = 'desempenho';

$GLOBALS["lang"]['pie'] = 'tarte';

$GLOBALS["lang"]['planning'] = 'planeamento';

$GLOBALS["lang"]['query'] = 'consulta';

$GLOBALS["lang"]['rear'] = 'traseira';

$GLOBALS["lang"]['rear-left'] = 'traseira-esquerda';

$GLOBALS["lang"]['rear-right'] = 'trás-direita';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['repeatable but intuitive'] = 'repetivel, mas intuitivo';

$GLOBALS["lang"]['reserved'] = 'reservado';

$GLOBALS["lang"]['right'] = 'direita';

$GLOBALS["lang"]['room'] = 'quarto';

$GLOBALS["lang"]['row'] = 'linha';

$GLOBALS["lang"]['stand-alone'] = 'independente';

$GLOBALS["lang"]['standard'] = 'padrão';

$GLOBALS["lang"]['starts with'] = 'começa com';

$GLOBALS["lang"]['storage'] = 'armazenamento';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

$GLOBALS["lang"]['top'] = 'topo';

$GLOBALS["lang"]['traffic'] = 'tráfego';

$GLOBALS["lang"]['true'] = 'verdadeiro';

$GLOBALS["lang"]['unallocated'] = 'não atribuído';

$GLOBALS["lang"]['unauthorised'] = 'não autorizado';

$GLOBALS["lang"]['unknown'] = 'desconhecido';

$GLOBALS["lang"]['unmanaged'] = 'não gerenciado';

$GLOBALS["lang"]['unused'] = 'não utilizado';

$GLOBALS["lang"]['update'] = 'atualizar';

$GLOBALS["lang"]['valid'] = 'válido';

$GLOBALS["lang"]['virtualisation'] = 'virtualização';

$GLOBALS["lang"]['warning'] = 'aviso';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'sim';

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
